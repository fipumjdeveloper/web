<?php

/**
 * This is the model class for table "comment".
 *
 * The followings are the available columns in table 'comment':
 * @property integer $id_comment
 * @property string $comments
 * @property integer $id_articles
 * @property integer $id_comment_reply
 * @property integer $id_users
 *
 * The followings are the available model relations:
 * @property Comment $idCommentReply
 * @property Comment[] $comments0
 * @property Users $idUsers
 * @property Articles $idArticles
 */
class Comment extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'comment';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('comments, id_articles, id_users', 'required'),
			array('id_articles, id_comment_reply, id_users', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_comment, comments, id_articles, id_comment_reply, id_users', 'safe', 'on'=>'search'),
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
			'idCommentReply' => array(self::BELONGS_TO, 'Comment', 'id_comment_reply'),
			'comments0' => array(self::HAS_MANY, 'Comment', 'id_comment_reply'),
			'idUsers' => array(self::BELONGS_TO, 'Users', 'id_users'),
			'idArticles' => array(self::BELONGS_TO, 'Articles', 'id_articles'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_comment' => 'Id Comment',
			'comments' => 'Comments',
			'id_articles' => 'Id Articles',
			'id_comment_reply' => 'Id Comment Reply',
			'id_users' => 'Id Users',
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

		$criteria->compare('id_comment',$this->id_comment);
		$criteria->compare('comments',$this->comments,true);
		$criteria->compare('id_articles',$this->id_articles);
		$criteria->compare('id_comment_reply',$this->id_comment_reply);
		$criteria->compare('id_users',$this->id_users);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Comment the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
