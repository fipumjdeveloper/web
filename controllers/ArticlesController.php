<?php

class ArticlesController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('allow',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Articles;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Articles']))
		{
			$model->attributes=$_POST['Articles'];
			$model->id_creator = Yii::app()->user->getId();
			$model->file = CUploadedFile::getInstance($model, 'cover');
			if($model->file !== null){
				$ext = strtolower($model->file->getExtensionName());
	            $dir = Yii::getPathOfAlias('webroot') . Yii::app()->params['upload_images'];
	            $fileName = sha1($model->file->getName().rand(1, 9999999999)).'.'.$ext;
				
				$model->cover = $fileName;
				
				$model->file->saveAs($dir.$fileName);
			}
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_articles));
		}

		$categories = $this->getCategories();

		$select = '<select name="Articles[id_category]" id="Articles_category">';
		$select .= '<option value="">--- Category ---</option>';
		
		if (count($categories))
		{
			foreach ($categories as $parent)
			{
				$select .= '<option value="'.$parent['id'].'">'.ucfirst($parent['data']['name']).'</option>';
				if (isset($parent['children']))
				{
					$dash = '--';
					foreach ($parent['children'] as $children)
					{
						$select .= '<option value="'.$children['data']->id_category.'">'.$dash.ucfirst($children['data']->name).'</option>';
						if (isset($children['children']))
						{
							$dash = '----';
							foreach ($children['children'] as $child)
								$select .= '<option value="'.$child['data']->id_category.'">'.$dash.ucfirst($child['data']->name).'</option>';
						}
					}
				}
			}
		}
		$select .= '</select>';
		
		$this->render('create',array(
			'model'=>$model,
			'select'=>$select
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Articles']))
		{
			$model->attributes=$_POST['Articles'];
			$model->file = CUploadedFile::getInstance($model, 'cover');
			if($model->file !== null){
				$ext = strtolower($model->file->getExtensionName());
	            $dir = Yii::app()->params['dir_upload'];
	            $fileName = sha1($model->file->getName().rand(1, 9999999999)).'.'.$ext;
				
				$model->cover = $fileName;
				$model->file->saveAs($dir.$fileName);
			}
			
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_articles));
		}
		
		$categories = $this->getCategories();
		
		$select = '<select name="Articles[id_category]" id="Articles_category">';
		$select .= '<option value="">--- Category ---</option>';
		
		if (count($categories))
		{
			foreach ($categories as $parent)
			{
				$select .= '<option value="'.$parent['id'].'"'.($model->id_category == $parent['id'] ? ' selected' : '').'>'.ucfirst($parent['data']['name']).'</option>';
				if (isset($parent['children']))
				{
					$dash = '--';
					foreach ($parent['children'] as $children)
					{
						$select .= '<option value="'.$children['data']->id_category.'"'.($model->id_category == $children['data']->id_category ? ' selected' : '').'>'.$dash.ucfirst($children['data']->name).'</option>';
						if (isset($children['children']))
						{
							$dash = '----';
							foreach ($children['children'] as $child)
								$select .= '<option value="'.$child['data']->id_category.'"'.($model->id_category == $child['data']->id_category ? ' selected' : '').'>'.$dash.ucfirst($child['data']->name).'</option>';
						}
					}
				}
			}
		}
		$select .= '</select>';

		$this->render('update',array(
			'model'=>$model,
			'select'=>$select
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		/* 
		$dataProvider=new CActiveDataProvider('Articles');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
		 */
		$model=new Articles('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Articles']))
			$model->attributes=$_GET['Articles'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Articles('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Articles']))
			$model->attributes=$_GET['Articles'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Articles the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Articles::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Articles $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='articles-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
