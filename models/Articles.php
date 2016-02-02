<?php

/**
 * This is the model class for table "articles".
 *
 * The followings are the available columns in table 'articles':
 * @property integer $id_articles
 * @property string $title
 * @property string $cover
 * @property string $caption
 * @property string $short_description
 * @property string $tags
 * @property string $content
 * @property integer $status
 * @property string $date_created
 * @property integer $id_category
 * @property integer $id_creator
 *
 * The followings are the available model relations:
 * @property Category $idCategory
 * @property Users $idCreator
 * @property ArticlesTranslation[] $articlesTranslations
 * @property Comment[] $comments
 */
class Articles extends CActiveRecord
{
	public $file;
	const unactive=0;
	const active=1;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'articles';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, content, id_category, id_creator', 'required'),
			array('status, id_category, id_creator', 'numerical', 'integerOnly'=>true),
			array('title', 'length', 'max'=>100),
			array('caption', 'length', 'max'=>50),
			array('short_description, tags', 'length', 'max'=>255),
			//max size dalam satuan Byte
			array('file', 'file', 'types'=>'png, jpg, jpeg, gif', 'allowEmpty'=>true, 'maxSize'=>2048*1024, 'tooLarge'=>'Upload image no more than 2MB, Please upload smaller image'),
			array('cover, file', 'safe'),
			array('file', 'required', 'on'=>'insert'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_articles, title, cover, caption, short_description, tags, content, status, date_created, id_category, id_creator', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'idCategory' => array(self::BELONGS_TO, 'Category', 'id_category'),
			'idCreator' => array(self::BELONGS_TO, 'Users', 'id_creator'),
			'articlesTranslations' => array(self::HAS_MANY, 'ArticlesTranslation', 'id_articles'),
			'comments' => array(self::HAS_MANY, 'Comment', 'id_articles'),
		);
	}

	/*Get data image*/
	public function getImageHtml() {
        return CHtml::image(Yii::app()->baseUrl . Yii::app()->params['uploads_images'] . $this->cover,'', array('title'=>$this->title,'width'=>'100'));
    }
    /*Active property*/
	// public function getActiveOps(){
		// return array(
			// self::active=>'Active',
			// self::unactive=>'Unactive',
		// );
	// }

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_articles' => 'Id Articles',
			'title' => 'Title',
			'cover' => 'Cover',
			'file' => 'File Image',
			'caption' => 'Caption',
			'short_description' => 'Short Description',
			'tags' => 'Tags',
			'content' => 'Content',
			'status' => 'Status',
			'date_created' => 'Date Created',
			'id_category' => 'Id Category',
			'idCategory.name' => 'Category',
			'id_creator' => 'Id Creator',
			'idCreator.firstname' => 'Creator',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_articles',$this->id_articles);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('cover',$this->cover,true);
		$criteria->compare('caption',$this->caption,true);
		$criteria->compare('short_description',$this->short_description,true);
		$criteria->compare('tags',$this->tags,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('date_created',$this->date_created,true);
		$criteria->compare('id_category',$this->id_category);
		$criteria->compare('id_creator',$this->id_creator);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Articles the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	public function beforeSave()
	{
		if ($this->isNewRecord)
			$this->id_creator = Yii::app()->user->id;
			
		return true;
	}
}
