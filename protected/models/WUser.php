<?php

/**
 * This is the model class for table "w_user".
 *
 * The followings are the available columns in table 'w_user':
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $hash
 * @property string $created_date
 * @property integer $created_by
 * @property string $modified_date
 * @property integer $modified_by
 * @property string $description
 * @property integer $status_id
 *
 * The followings are the available model relations:
 * @property PPerson[] $pPeople
 * @property PPerson[] $pPeople1
 * @property PPerson[] $pPeople2
 * @property WUser $createdBy
 * @property WUser[] $wUsers
 * @property WUser $modifiedBy
 * @property WUser[] $wUsers1
 */
class WUser extends CActiveRecord
{
	public $password2;
	
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return WUser the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'w_user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, password, password2', 'required', 'on'=>'create'),
			array('username', 'required', 'on'=>'update'),
			array('username', 'unique'),
			array('password2', 'compare', 'compareAttribute'=>'password', 'on'=>'create'),
			array('password2', 'compare', 'compareAttribute'=>'password', 'on'=>'changePassword'),
			//array('username, password, hash, created_by', 'required'),
			array('created_by, modified_by, status_id', 'numerical', 'integerOnly'=>true),
			array('username, password, hash', 'length', 'max'=>45),
			array('created_date, modified_date, description', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, username, password, hash, created_date, created_by, modified_date, modified_by, description, status_id', 'safe', 'on'=>'search'),
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
			'pPeople' => array(self::HAS_MANY, 'PPerson', 'user_id'),
			'pPeople1' => array(self::HAS_MANY, 'PPerson', 'create_by'),
			'pPeople2' => array(self::HAS_MANY, 'PPerson', 'modified_by'),
			'createdBy' => array(self::BELONGS_TO, 'WUser', 'created_by'),
			'wUsers' => array(self::HAS_MANY, 'WUser', 'created_by'),
			'modifiedBy' => array(self::BELONGS_TO, 'WUser', 'modified_by'),
			'wUsers1' => array(self::HAS_MANY, 'WUser', 'modified_by'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'username' => 'Username',
			'password' => 'Password',
			'password2' => 'Confirm Password',
			'hash' => 'Hash',
			'created_date' => 'Created Date',
			'created_by' => 'Created By',
			'modified_date' => 'Modified Date',
			'modified_by' => 'Modified By',
			'description' => 'Description',
			'status_id' => 'Status',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('t.id',$this->id);
		$criteria->compare('t.username',$this->username,true);
		$criteria->compare('t.password',$this->password,true);
		$criteria->compare('t.hash',$this->hash,true);
		$criteria->compare('t.created_date',$this->created_date,true);
		//$criteria->compare('created_by',$this->created_by);
		$criteria->compare('createdBy.username',$this->created_by, true);
		$criteria->compare('t.modified_date',$this->modified_date,true);
		$criteria->compare('t.modified_by',$this->modified_by);
		$criteria->compare('t.description',$this->description,true);
		$criteria->compare('t.status_id',$this->status_id);
		
		//load the related table at the same time:
		$criteria->with=array('createdBy');

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function validatePassword ($password) {
		return $this->hashPassword($password, $this->hash) === $this->password;
	}
	
	public function hashPassword ($password, $hash) {
		return md5(''.$hash.''.$password.'');
	}
	
	public function generateHash () {
		return uniqid('', true);
	}
	
	public function userStatus($status_id) {
		return ($status_id == 1)?'aktif':'non aktif';
	}
	
	public function suggestUsername($keyword){
		$tags=$this->findAll(array(
			'condition'=>'username LIKE :keyword',
			'params'=>array(
				':keyword'=>'%'.strtr($keyword,array('%'=>'\%', '_'=>'\_', '\\'=>'\\\\')).'%',
			)
		));
		
		return $tags;
 }
}