<?php

/**
 * This is the model class for table "menus_translation".
 *
 * The followings are the available columns in table 'menus_translation':
 * @property integer $id_menu_translation
 * @property string $name
 * @property string $icon
 * @property string $link_to
 * @property integer $id_menu
 * @property integer $id_language
 */
class MenusTranslation extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'menus_translation';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, id_menu, id_language', 'required'),
			array('id_menu, id_language', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>15),
			array('icon, link_to', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_menu_translation, name, icon, link_to, id_menu, id_language', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_menu_translation' => 'Id Menu Translation',
			'name' => 'Name',
			'icon' => 'Icon',
			'link_to' => 'Link To',
			'id_menu' => 'Id Menu',
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

		$criteria->compare('id_menu_translation',$this->id_menu_translation);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('icon',$this->icon,true);
		$criteria->compare('link_to',$this->link_to,true);
		$criteria->compare('id_menu',$this->id_menu);
		$criteria->compare('id_language',$this->id_language);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return MenusTranslation the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
