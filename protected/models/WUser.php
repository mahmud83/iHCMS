<?php

/**
 * This is the model class for table "w_user".
 *
 * The followings are the available columns in table 'w_user':
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $hash
 * @property string $tgl_buat
 * @property string $tgl_edit
 * @property string $deskripsi
 * @property string $status
 *
 * The followings are the available model relations:
 * @property Karyawan[] $karyawans
 */
class WUser extends CActiveRecord
{
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
			array('username, password, hash', 'required'),
			array('username, password, hash', 'length', 'max'=>45),
			array('status', 'length', 'max'=>9),
			array('tgl_buat, tgl_edit, deskripsi', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, username, password, hash, tgl_buat, tgl_edit, deskripsi, status', 'safe', 'on'=>'search'),
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
			'karyawans' => array(self::HAS_MANY, 'Karyawan', 'user_id'),
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
			'hash' => 'Hash',
			'tgl_buat' => 'Tgl Buat',
			'tgl_edit' => 'Tgl Edit',
			'deskripsi' => 'Deskripsi',
			'status' => 'Status',
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
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('hash',$this->hash,true);
		$criteria->compare('tgl_buat',$this->tgl_buat,true);
		$criteria->compare('tgl_edit',$this->tgl_edit,true);
		$criteria->compare('deskripsi',$this->deskripsi,true);
		$criteria->compare('status',$this->status,true);

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
}