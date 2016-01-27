<?php

/**
 * This is the model class for table "users".
 *
 * The followings are the available columns in table 'users':
 * @property integer $id_users
 * @property string $username
 * @property string $firstname
 * @property string $lastname
 * @property integer $gender
 * @property string $email
 * @property string $password
 * @property string $pin
 * @property string $address
 * @property string $phone
 * @property string $ip_address
 * @property string $last_login
 * @property integer $status
 * @property integer $id_majors
 * @property integer $id_role
 *
 * The followings are the available model relations:
 * @property Articles[] $articles
 * @property ArticlesTranslation[] $articlesTranslations
 * @property Banner[] $banners
 * @property Comment[] $comments
 * @property Links[] $links
 * @property Majors $idMajors
 * @property Role $idRole
 */
class Users extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, firstname, lastname, gender, email, password, pin, id_role', 'required'),
			array('gender, status, id_majors, id_role', 'numerical', 'integerOnly'=>true),
			array('username, lastname', 'length', 'max'=>20),
			array('firstname, ip_address', 'length', 'max'=>15),
			array('email', 'length', 'max'=>50),
			array('pin', 'length', 'max'=>10),
			array('phone', 'length', 'max'=>32),
			array('address, last_login', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_users, username, firstname, lastname, gender, email, password, pin, address, phone, ip_address, last_login, status, id_majors, id_role', 'safe', 'on'=>'search'),
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
			'articles' => array(self::HAS_MANY, 'Articles', 'id_creator'),
			'articlesTranslations' => array(self::HAS_MANY, 'ArticlesTranslation', 'id_creator'),
			'banners' => array(self::HAS_MANY, 'Banner', 'id_creator'),
			'comments' => array(self::HAS_MANY, 'Comment', 'id_users'),
			'links' => array(self::HAS_MANY, 'Links', 'id_creator'),
			'idMajors' => array(self::BELONGS_TO, 'Majors', 'id_majors'),
			'idRole' => array(self::BELONGS_TO, 'Role', 'id_role'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_users' => 'Id Users',
			'username' => 'Username',
			'firstname' => 'Firstname',
			'lastname' => 'Lastname',
			'gender' => 'Gender',
			'email' => 'Email',
			'password' => 'Password',
			'pin' => 'Pin',
			'address' => 'Address',
			'phone' => 'Phone',
			'ip_address' => 'Ip Address',
			'last_login' => 'Last Login',
			'status' => 'Status',
			'id_majors' => 'Id Majors',
			'id_role' => 'Id Role',
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

		$criteria->compare('id_users',$this->id_users);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('firstname',$this->firstname,true);
		$criteria->compare('lastname',$this->lastname,true);
		$criteria->compare('gender',$this->gender);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('pin',$this->pin,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('ip_address',$this->ip_address,true);
		$criteria->compare('last_login',$this->last_login,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('id_majors',$this->id_majors);
		$criteria->compare('id_role',$this->id_role);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Users the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
