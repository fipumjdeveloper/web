<?php

/**
 * This is the model class for table "links_translation".
 *
 * The followings are the available columns in table 'links_translation':
 * @property integer $id_links_translation
 * @property string $name
 * @property string $link_to
 * @property integer $id_links
 * @property integer $id_language
 *
 * The followings are the available model relations:
 * @property Links $idLinks
 * @property Language $idLanguage
 */
class LinksTranslation extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'links_translation';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, id_links, id_language', 'required'),
			array('id_links, id_language', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>255),
			array('link_to', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_links_translation, name, link_to, id_links, id_language', 'safe', 'on'=>'search'),
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
			'idLinks' => array(self::BELONGS_TO, 'Links', 'id_links'),
			'idLanguage' => array(self::BELONGS_TO, 'Language', 'id_language'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_links_translation' => 'Id Links Translation',
			'name' => 'Name',
			'link_to' => 'Link To',
			'id_links' => 'Id Links',
			'id_language' => 'Id Language',
			'idLinks.name' => 'Links Name',
			'idLanguage.name' => 'Language'
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

		$criteria->compare('id_links_translation',$this->id_links_translation);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('link_to',$this->link_to,true);
		$criteria->compare('id_links',$this->id_links);
		$criteria->compare('id_language',$this->id_language);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return LinksTranslation the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
