<?php

/**
 * This is the model class for table "category".
 *
 * The followings are the available columns in table 'category':
 * @property integer $id_category
 * @property string $name
 * @property integer $status
 * @property integer $id_parent_category
 *
 * The followings are the available model relations:
 * @property Category $idParentCategory
 * @property Category[] $categories
 */
class Category extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'category';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name', 'required'),
			array('status, id_parent_category', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>30),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_category, name, status, id_parent_category', 'safe', 'on'=>'search'),
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
			'idParentCategory' => array(self::BELONGS_TO, 'Category', 'id_parent_category'),
			'categories' => array(self::HAS_MANY, 'Category', 'id_parent_category'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_category' => 'Id Category',
			'name' => 'Name',
			'status' => 'Status',
			'parent_category' => 'Parent Category',
			'id_parent_category' => 'Id Parent Category',
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

		$criteria->compare('id_category',$this->id_category);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('id_parent_category',$this->id_parent_category);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Category the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	public function afterSave()
	{
		if ($this->isNewRecord)
		{
			$category_translation = new CategoryTranslation;
			$category_translation->id_category = $this->id_category;
			$category_translation->name = $this->name;
			$category_translation->id_language = 1;
			$category_translation->save();
		}
	}
}
