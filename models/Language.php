<?php

/**
 * This is the model class for table "language".
 *
 * The followings are the available columns in table 'language':
 * @property integer $id_language
 * @property string $name
 * @property string $icon
 * @property string $iso
 *
 * The followings are the available model relations:
 * @property ArticlesTranslation[] $articlesTranslations
 * @property Banner[] $banners
 * @property Category[] $categories
 * @property LinksTranslation[] $linksTranslations
 * @property Menus[] $menuses
 */
class Language extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'language';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, iso', 'required'),
			array('name', 'length', 'max'=>20),
			array('iso', 'length', 'max'=>4),
			array('icon', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_language, name, icon, iso', 'safe', 'on'=>'search'),
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
			'articlesTranslations' => array(self::HAS_MANY, 'ArticlesTranslation', 'id_language'),
			'banners' => array(self::HAS_MANY, 'Banner', 'id_language'),
			'categories' => array(self::HAS_MANY, 'Category', 'id_language'),
			'linksTranslations' => array(self::HAS_MANY, 'LinksTranslation', 'id_language'),
			'menuses' => array(self::HAS_MANY, 'Menus', 'id_language'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_language' => 'Id Language',
			'name' => 'Name',
			'icon' => 'Icon',
			'iso' => 'Iso',
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

		$criteria->compare('id_language',$this->id_language);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('icon',$this->icon,true);
		$criteria->compare('iso',$this->iso,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Language the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
