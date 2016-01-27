<?php

/**
 * This is the model class for table "links".
 *
 * The followings are the available columns in table 'links':
 * @property integer $id_links
 * @property string $name
 * @property string $link_to
 * @property string $date_created
 * @property integer $id_creator
 *
 * The followings are the available model relations:
 * @property Users $idCreator
 * @property LinksTranslation[] $linksTranslations
 */
class Links extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'links';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, id_creator', 'required'),
			array('id_creator', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>255),
			array('link_to', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_links, name, link_to, date_created, id_creator', 'safe', 'on'=>'search'),
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
			'idCreator' => array(self::BELONGS_TO, 'Users', 'id_creator'),
			'linksTranslations' => array(self::HAS_MANY, 'LinksTranslation', 'id_links'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_links' => 'Id Links',
			'name' => 'Name',
			'link_to' => 'Link To',
			'date_created' => 'Date Created',
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

		$criteria->compare('id_links',$this->id_links);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('link_to',$this->link_to,true);
		$criteria->compare('date_created',$this->date_created,true);
		$criteria->compare('id_creator',$this->id_creator);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Links the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	public function beforeSave()
	{
		if ($this->isNewRecord)
			$this->date_created = NULL;
		
		return true;
	}
}