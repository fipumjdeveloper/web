<?php

/**
 * This is the model class for table "articles_translation".
 *
 * The followings are the available columns in table 'articles_translation':
 * @property integer $id_articles_translation
 * @property string $title
 * @property string $cover
 * @property string $caption
 * @property string $short_description
 * @property string $tags
 * @property string $content
 * @property integer $is_viewed
 * @property integer $is_shared
 * @property integer $is_liked
 * @property string $date_created
 * @property string $date_updated
 * @property integer $id_articles
 * @property integer $id_language
 * @property integer $id_creator
 *	
 * The followings are the available model relations:
 * @property Articles $idArticles
 * @property Language $idLanguage
 * @property Users $idCreator
 */
class ArticlesTranslation extends CActiveRecord
{
	public $file;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'articles_translation';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, content, is_viewed, is_shared, is_liked, id_articles, id_language, id_creator', 'required'),
			array('is_viewed, is_shared, is_liked, id_articles, id_language, id_creator', 'numerical', 'integerOnly'=>true),
			array('title', 'length', 'max'=>100),
			array('caption', 'length', 'max'=>50),
			array('short_description, tags', 'length', 'max'=>255),
				//max size dalam satuan Byte
			array('file', 'file', 'types'=>'png, jpg, jpeg, gif', 'allowEmpty'=>true, 'maxSize'=>2048*1024, 'tooLarge'=>'Upload image no more than 2MB, Please upload smaller image'),
			array('cover, file, date_updated', 'safe'),
			array('file', 'required', 'on'=>'insert'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_articles_translation, title, cover, caption, short_description, tags, content, is_shared, is_liked, date_created, date_updated, id_articles, id_language, id_creator', 'safe', 'on'=>'search'),
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
			'idArticles' => array(self::BELONGS_TO, 'Articles', 'id_articles'),
			'idLanguage' => array(self::BELONGS_TO, 'Language', 'id_language'),
			'idCreator' => array(self::BELONGS_TO, 'Users', 'id_creator'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_articles_translation' => 'Id Articles Translation',
			'title' => 'Title',
			'cover' => 'Cover',
			'file' => 'File Image',
			'caption' => 'Caption',
			'short_description' => 'Short Description',
			'tags' => 'Tags',
			'content' => 'Content',
			'is_viewed' => 'Is Viewed',
			'is_shared' => 'Is Shared',
			'is_liked' => 'Is Liked',
			'date_created' => 'Date Created',
			'date_updated' => 'Date Updated',
			'id_articles' => 'Id Articles',
			'id_language' => 'Id Language',
			'idLanguage.name' => 'Language',
			'id_creator' => 'Id Creator',
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

		$criteria->compare('id_articles_translation',$this->id_articles_translation);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('cover',$this->cover,true);
		$criteria->compare('caption',$this->caption,true);
		$criteria->compare('short_description',$this->short_description,true);
		$criteria->compare('tags',$this->tags,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('is_viewed',$this->is_viewed);
		$criteria->compare('is_shared',$this->is_shared);
		$criteria->compare('is_liked',$this->is_liked);
		$criteria->compare('date_created',$this->date_created,true);
		$criteria->compare('date_updated',$this->date_updated,true);
		$criteria->compare('id_articles',$this->id_articles);
		$criteria->compare('id_language',$this->id_language);
		$criteria->compare('id_creator',$this->id_creator);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ArticlesTranslation the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
