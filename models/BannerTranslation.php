<?php

/**
 * This is the model class for table "banner_translation".
 *
 * The followings are the available columns in table 'banner_translation':
 * @property integer $id_banner_translation
 * @property string $title
 * @property string $image
 * @property string $short_description
 * @property string $link_to
 * @property integer $id_banner
 * @property integer $id_language
 *
 * The followings are the available model relations:
 * @property Banner $idBanner
 * @property Language $idLanguage
 */
class BannerTranslation extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'banner_translation';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, image, short_description, id_banner, id_language', 'required'),
			array('id_banner, id_language', 'numerical', 'integerOnly'=>true),
			array('title', 'length', 'max'=>50),
			array('short_description', 'length', 'max'=>150),
			array('link_to', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_banner_translation, title, image, short_description, link_to, id_banner, id_language', 'safe', 'on'=>'search'),
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
			'idBanner' => array(self::BELONGS_TO, 'Banner', 'id_banner'),
			'idLanguage' => array(self::BELONGS_TO, 'Language', 'id_language'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_banner_translation' => 'Id Banner Translation',
			'title' => 'Title',
			'image' => 'Image',
			'short_description' => 'Short Description',
			'link_to' => 'Link To',
			'id_banner' => 'Id Banner',
			'id_language' => 'Id Language',
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

		$criteria->compare('id_banner_translation',$this->id_banner_translation);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('short_description',$this->short_description,true);
		$criteria->compare('link_to',$this->link_to,true);
		$criteria->compare('id_banner',$this->id_banner);
		$criteria->compare('id_language',$this->id_language);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return BannerTranslation the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
