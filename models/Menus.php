<?php

/**
 * This is the model class for table "menus".
 *
 * The followings are the available columns in table 'menus':
 * @property integer $id_menu
 * @property string $name
 * @property string $icon
 * @property string $link_to
 * @property integer $status
 * @property integer $id_parent_menu
 * @property integer $id_language
 *
 * The followings are the available model relations:
 * @property Menus $idParentMenu
 * @property Menus[] $menuses
 * @property Language $idLanguage
 */
class Menus extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'menus';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, id_language', 'required'),
			array('status, id_parent_menu, id_language', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>15),
			array('icon, link_to', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_menu, name, icon, link_to, status, id_parent_menu, id_language', 'safe', 'on'=>'search'),
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
			'idParentMenu' => array(self::BELONGS_TO, 'Menus', 'id_parent_menu'),
			'menuses' => array(self::HAS_MANY, 'Menus', 'id_parent_menu'),
			'idLanguage' => array(self::BELONGS_TO, 'Language', 'id_language'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_menu' => 'Id Menu',
			'name' => 'Name',
			'icon' => 'Icon',
			'link_to' => 'Link To',
			'status' => 'Status',
			'id_parent_menu' => 'Id Parent Menu',
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

		$criteria->compare('id_menu',$this->id_menu);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('icon',$this->icon,true);
		$criteria->compare('link_to',$this->link_to,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('id_parent_menu',$this->id_parent_menu);
		$criteria->compare('id_language',$this->id_language);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Menus the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
