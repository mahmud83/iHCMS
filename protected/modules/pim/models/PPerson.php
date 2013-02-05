<?php

/**
 * This is the model class for table "p_person".
 *
 * The followings are the available columns in table 'p_person':
 * @property integer $id
 * @property integer $user_id
 * @property integer $jabatan_id
 * @property string $avatar
 * @property integer $employee_status
 * @property string $employee_code
 * @property string $firstname
 * @property string $lastname
 * @property string $nickname
 * @property string $birth_date
 * @property string $birth_place
 * @property string $blood_id
 * @property integer $marital_id
 * @property integer $sex_id
 * @property integer $religion_id
 * @property string $address1
 * @property string $address2
 * @property string $pos_code
 * @property string $identity_number
 * @property string $identity_valid
 * @property integer $identity_state
 * @property string $identity_pos_code
 * @property string $driver_license_number
 * @property string $driver_license_valid
 * @property string $email1
 * @property string $email2
 * @property string $phone_mobile
 * @property string $phone_home
 * @property string $phone_office
 * @property string $custom
 * @property string $create_date
 * @property integer $create_by
 * @property string $modified_date
 * @property integer $modified_by
 *
 * The followings are the available model relations:
 * @property KaryawanHistoricalJabatan[] $karyawanHistoricalJabatans
 * @property WUser $user
 * @property WOccupation $jabatan
 * @property WReligion $religion
 * @property WState $identityState
 * @property WUser $createBy
 * @property WUser $modifiedBy
 * @property PPersonEducation[] $pPersonEducations
 * @property PPersonEmergencyContact[] $pPersonEmergencyContacts
 * @property PPersonFamily[] $pPersonFamilies
 * @property PPersonImigration[] $pPersonImigrations
 * @property PPersonSertification[] $pPersonSertifications
 * @property PPersonSkill[] $pPersonSkills
 */
class PPerson extends CActiveRecord
{
	public $username;
	public $password;
	public $password2;
	
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return PPerson the static model class
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
		return 'p_person';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('employee_code, firstname, create_date, create_by, username, password, password2', 'required'),
			array('password2', 'compare', 'compareAttribute'=>'password', 'on'=>'add'),
			array('user_id, jabatan_id, employee_status, marital_id, sex_id, religion_id, identity_state, create_by, modified_by', 'numerical', 'integerOnly'=>true),
			array('avatar', 'length', 'max'=>200),
			array('employee_code, firstname, lastname, nickname, birth_place, driver_license_number', 'length', 'max'=>45),
			array('blood_id', 'length', 'max'=>5),
			array('address1, address2', 'length', 'max'=>255),
			array('pos_code, identity_pos_code', 'length', 'max'=>10),
			array('identity_number', 'length', 'max'=>40),
			array('email1, email2', 'length', 'max'=>50),
			array('phone_mobile, phone_home, phone_office', 'length', 'max'=>20),
			array('birth_date, identity_valid, driver_license_valid, custom, modified_date', 'safe'),
			//array('avatar', 'file', 'types'=>'jpg, gif, png, pdf'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, user_id, jabatan_id, avatar, employee_status, employee_code, firstname, lastname, nickname, birth_date, birth_place, blood_id, marital_id, sex_id, religion_id, address1, address2, pos_code, identity_number, identity_valid, identity_state, identity_pos_code, driver_license_number, driver_license_valid, email1, email2, phone_mobile, phone_home, phone_office, custom, create_date, create_by, modified_date, modified_by', 'safe', 'on'=>'search'),
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
			'karyawanHistoricalJabatans' => array(self::HAS_MANY, 'KaryawanHistoricalJabatan', 'karyawan_id'),
			'user' => array(self::BELONGS_TO, 'WUser', 'user_id'),
			'jabatan' => array(self::BELONGS_TO, 'WOccupation', 'jabatan_id'),
			'religion' => array(self::BELONGS_TO, 'WReligion', 'religion_id'),
			'identityState' => array(self::BELONGS_TO, 'WState', 'identity_state'),
			'createBy' => array(self::BELONGS_TO, 'WUser', 'create_by'),
			'modifiedBy' => array(self::BELONGS_TO, 'WUser', 'modified_by'),
			'pPersonEducations' => array(self::HAS_MANY, 'PPersonEducation', 'person_id'),
			'pPersonEmergencyContacts' => array(self::HAS_MANY, 'PPersonEmergencyContact', 'person_id'),
			'pPersonFamilies' => array(self::HAS_MANY, 'PPersonFamily', 'person_id'),
			'pPersonImigrations' => array(self::HAS_MANY, 'PPersonImigration', 'person_id'),
			'pPersonSertifications' => array(self::HAS_MANY, 'PPersonSertification', 'person_id'),
			'pPersonSkills' => array(self::HAS_MANY, 'PPersonSkill', 'person_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'user_id' => 'User',
			'jabatan_id' => 'Jabatan',
			'avatar' => 'Avatar',
			'employee_status' => 'Employee Status',
			'employee_code' => 'Employee Code',
			'firstname' => 'Firstname',
			'lastname' => 'Lastname',
			'nickname' => 'Nickname',
			'birth_date' => 'Birth Date',
			'birth_place' => 'Birth Place',
			'blood_id' => 'Blood',
			'marital_id' => 'Marital',
			'sex_id' => 'Sex',
			'religion_id' => 'Religion',
			'address1' => 'Address1',
			'address2' => 'Address2',
			'pos_code' => 'Pos Code',
			'identity_number' => 'Identity Number',
			'identity_valid' => 'Identity Valid',
			'identity_state' => 'Identity State',
			'identity_pos_code' => 'Identity Pos Code',
			'driver_license_number' => 'Driver License Number',
			'driver_license_valid' => 'Driver License Valid',
			'email1' => 'Email1',
			'email2' => 'Email2',
			'phone_mobile' => 'Phone Mobile',
			'phone_home' => 'Phone Home',
			'phone_office' => 'Phone Office',
			'custom' => 'Custom',
			'create_date' => 'Create Date',
			'create_by' => 'Create By',
			'modified_date' => 'Modified Date',
			'modified_by' => 'Modified By',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('jabatan_id',$this->jabatan_id);
		$criteria->compare('avatar',$this->avatar,true);
		$criteria->compare('employee_status',$this->employee_status);
		$criteria->compare('employee_code',$this->employee_code,true);
		$criteria->compare('firstname',$this->firstname,true);
		$criteria->compare('lastname',$this->lastname,true);
		$criteria->compare('nickname',$this->nickname,true);
		$criteria->compare('birth_date',$this->birth_date,true);
		$criteria->compare('birth_place',$this->birth_place,true);
		$criteria->compare('blood_id',$this->blood_id,true);
		$criteria->compare('marital_id',$this->marital_id);
		$criteria->compare('sex_id',$this->sex_id);
		$criteria->compare('religion_id',$this->religion_id);
		$criteria->compare('address1',$this->address1,true);
		$criteria->compare('address2',$this->address2,true);
		$criteria->compare('pos_code',$this->pos_code,true);
		$criteria->compare('identity_number',$this->identity_number,true);
		$criteria->compare('identity_valid',$this->identity_valid,true);
		$criteria->compare('identity_state',$this->identity_state);
		$criteria->compare('identity_pos_code',$this->identity_pos_code,true);
		$criteria->compare('driver_license_number',$this->driver_license_number,true);
		$criteria->compare('driver_license_valid',$this->driver_license_valid,true);
		$criteria->compare('email1',$this->email1,true);
		$criteria->compare('email2',$this->email2,true);
		$criteria->compare('phone_mobile',$this->phone_mobile,true);
		$criteria->compare('phone_home',$this->phone_home,true);
		$criteria->compare('phone_office',$this->phone_office,true);
		$criteria->compare('custom',$this->custom,true);
		$criteria->compare('create_date',$this->create_date,true);
		$criteria->compare('create_by',$this->create_by);
		$criteria->compare('modified_date',$this->modified_date,true);
		$criteria->compare('modified_by',$this->modified_by);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}