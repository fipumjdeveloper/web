<?php
/* @var $this CategoryTranslationController */
/* @var $model CategoryTranslation */

$this->breadcrumbs=array(
	'Category Translations'=>array('index'),
	$model->name=>array('view','id'=>$model->id_category_translation),
	'Update',
);

$this->menu=array(
	array('label'=>'List CategoryTranslation', 'url'=>array('index')),
	array('label'=>'Create CategoryTranslation', 'url'=>array('create')),
	array('label'=>'View CategoryTranslation', 'url'=>array('view', 'id'=>$model->id_category_translation)),
	array('label'=>'Manage CategoryTranslation', 'url'=>array('admin')),
);
?>

<h1>Update CategoryTranslation <?php echo $model->id_category_translation; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>