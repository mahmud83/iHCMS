<?php

/**
 * This is the model class for table "w_user".
 *
 * The followings are the available columns in table 'w_user':
 * @property string $id_user
 * @property string $user_name
 * @property string $user_pass
 * @property string $password
 * @property string $hash
 * @property integer $id_level
 * @property string $id_aplikasi
 * @property string $last_login
 * @property string $last_ip
 * @property integer $status_online
 * @property integer $status
 */
class WUser extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return WUser the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'w_user';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('user_pass, password, hash', 'required'),
            array('id_level, status_online, status', 'numerical', 'integerOnly' => true),
            array('user_name, user_pass', 'length', 'max' => 225),
            array('password, hash', 'length', 'max' => 255),
            array('id_aplikasi', 'length', 'max' => 250),
            array('last_ip', 'length', 'max' => 20),
            array('last_login', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id_user, user_name, user_pass, password, hash, id_level, id_aplikasi, last_login, last_ip, status_online, status', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'userDetail' => array(self::HAS_ONE, 'WUserDetail', 'id_user'),
            'mutasiHistoryLama' => array(self::HAS_MANY, 'MutasiHistoryLama', 'id_user'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id_user' => 'Id User',
            'user_name' => 'User Name',
            'user_pass' => 'User Pass',
            'password' => 'Password',
            'hash' => 'Hash',
            'id_level' => 'Id Level',
            'id_aplikasi' => 'Id Aplikasi',
            'last_login' => 'Last Login',
            'last_ip' => 'Last Ip',
            'status_online' => 'Status Online',
            'status' => 'Status',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search() {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id_user', $this->id_user, true);
        $criteria->compare('user_name', $this->user_name, true);
        $criteria->compare('user_pass', $this->user_pass, true);
        $criteria->compare('password', $this->password, true);
        $criteria->compare('hash', $this->hash, true);
        $criteria->compare('id_level', $this->id_level);
        $criteria->compare('id_aplikasi', $this->id_aplikasi, true);
        $criteria->compare('last_login', $this->last_login, true);
        $criteria->compare('last_ip', $this->last_ip, true);
        $criteria->compare('status_online', $this->status_online);
        $criteria->compare('status', $this->status);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }
    
    public function validatePassword($password) {
        return $this->hashPassword($password, $this->hash) === $this->password;
    }

    public function hashPassword($password, $hash) {
        return md5('' . $hash . '' . $password . '');
    }

    public function generateHash() {
        return uniqid('', true);
    }

    public function userStatus($status_id) {
        return ($status_id == 1) ? 'aktif' : 'non aktif';
    }

    public function suggestUsername($keyword) {
        $tags = $this->findAll(array(
            'condition' => 'user_name LIKE :keyword',
            'params' => array(
                ':keyword' => '%' . strtr($keyword, array('%' => '\%', '_' => '\_', '\\' => '\\\\')) . '%',
            )
        ));

        return $tags;
    }

}