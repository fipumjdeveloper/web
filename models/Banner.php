<?php

/**
 * This is the model class for table "banner".
 *
 * The followings are the available columns in table 'banner':
 * @property integer $id_banner
 * @property string $title
 * @property string $image
 * @property string $short_description
 * @property string $link_to
 * @property integer $index_no
 * @property integer $status
 * @property integer $id_creator
 *
 * The followings are the available model relations:
 * @property Users $idCreator
 */
class Banner extends CActiveRecord
{
	public $file;
	const unactive=0;
	const active=1;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'banner';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, short_description, id_creator', 'required'),
			array('index_no, status, id_creator', 'numerical', 'integerOnly'=>true),
			array('title', 'length', 'max'=>50),
			array('short_description', 'length', 'max'=>150),
			//max size dalam satuan Byte
			array('file', 'file', 'types'=>'png, jpg, jpeg, gif', 'allowEmpty'=>true, 'maxSize'=>2048*1024, 'tooLarge'=>'Upload image no more than 2MB, Please upload smaller image'),
			array('link_to, image, file', 'safe'),
			array('file', 'required', 'on'=>'insert'),
			array('id_banner, title, image, short_description, link_to, index_no, status, id_creator', 'safe', 'on'=>'search'),
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
		);
	}
	/*Get data image*/
	public function getImageHtml() {
        return CHtml::image(Yii::app()->baseUrl . Yii::app()->params['banner_img'] . $this->image,'', array('title'=>$this->title,'width'=>'100'));
    }
    /*Active property*/
	public function getActiveOps(){
		return array(
			self::active=>'Enable',
			self::unactive=>'Disable',
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_banner' => 'Id Banner',
			'title' => 'Title',
			'image' => 'Image',
            'file' => 'File Image',
			'short_description' => 'Short Description',
			'link_to' => 'Link To',
			'index_no' => 'Index',
			'status' => 'Status',
			'id_creator' => 'Creator',
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

		$criteria->compare('id_banner',$this->id_banner);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('short_description',$this->short_description,true);
		$criteria->compare('link_to',$this->link_to,true);
		$criteria->compare('index_no',$this->index_no);
		$criteria->compare('status',$this->status);
		$criteria->compare('id_creator',$this->id_creator);
		$criteria->order = 'index_no ASC';

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Banner the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	public function beforeSave()
	{
		if ($this->status == 1)
		{
			$criteria = new CDbCriteria;
			$criteria->compare('status', 1);
			$criteria->order = 'index_no DESC';
			$last_banner = Banner::model()->findAll($criteria);
			if (count($last_banner) < 1)
				$index = 1;
			else
				$index = $last_banner[0]->index_no + 1;
				
			$this->index_no = $index;
		}
		else
			$this->index_no = 0;

		return true;
	}
}