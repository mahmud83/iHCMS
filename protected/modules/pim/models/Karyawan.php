<?php

/**
 * This is the model class for table "karyawan".
 *
 * The followings are the available columns in table 'karyawan':
 * @property integer $id
 * @property string $nip
 * @property string $nama_depan
 * @property string $nama_tengah
 * @property string $nama_belakang
 * @property string $nama_panggilan
 * @property string $tgl_lahir
 * @property integer $warga_negara
 * @property string $kelamin
 * @property string $no_ktp
 * @property string $no_ktp_exp_date
 * @property string $no_sim
 * @property string $no_sim_exp_date
 * @property string $status_kawin
 * @property integer $status_karyawan
 * @property string $alamat1
 * @property string $alamat2
 * @property string $kota
 * @property integer $negara
 * @property integer $propinsi
 * @property string $kodepos
 * @property string $tlp_rumah
 * @property string $tlp_mobile
 * @property string $tlp_kantor
 * @property string $email1
 * @property string $email2
 * @property string $custom
 * @property integer $user_id
 *
 * The followings are the available model relations:
 * @property Propinsi $propinsi0
 * @property User $user
 * @property Negara $negara0
 * @property Negara $wargaNegara
 * @property KaryawanImigrasi[] $karyawanImigrasis
 * @property KaryawanKontakdarurat[] $karyawanKontakdarurats
 * @property KaryawanPendidikan[] $karyawanPendidikans
 * @property KaryawanPengalamankerja[] $karyawanPengalamankerjas
 * @property KaryawanSertifikasi[] $karyawanSertifikasis
 * @property KaryawanTanggungan[] $karyawanTanggungans
 */
class Karyawan extends CActiveRecord
{
	
	public $username;
	public $password;
	public $password2;
	
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Karyawan the static model class
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
		return 'karyawan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nip, nama_depan, warga_negara, negara, username, password, password2', 'required', 'on'=>'withUser'),
			array('password2', 'compare', 'compareAttribute'=>'password', 'on'=>'withUser'),
			array('nip, nama_depan, warga_negara, negara, user_id', 'required'),
			array('warga_negara, status_karyawan, negara, propinsi, user_id', 'numerical', 'integerOnly'=>true),
			array('nip, nama_depan, nama_tengah, nama_belakang, nama_panggilan, kelamin, status_kawin', 'length', 'max'=>45),
			array('no_ktp, no_sim, alamat1, alamat2', 'length', 'max'=>255),
			array('kota, kodepos', 'length', 'max'=>100),
			array('tlp_rumah, tlp_mobile, tlp_kantor, email1, email2', 'length', 'max'=>50),
			array('tgl_lahir, no_ktp_exp_date, no_sim_exp_date, custom', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nip, nama_depan, nama_tengah, nama_belakang, nama_panggilan, tgl_lahir, warga_negara, kelamin, no_ktp, no_ktp_exp_date, no_sim, no_sim_exp_date, status_kawin, status_karyawan, alamat1, alamat2, kota, negara, propinsi, kodepos, tlp_rumah, tlp_mobile, tlp_kantor, email1, email2, custom, user_id', 'safe', 'on'=>'search'),
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
			'propinsi0' => array(self::BELONGS_TO, 'Propinsi', 'propinsi'),
			'user' => array(self::BELONGS_TO, 'User', 'user_id'),
			'negara0' => array(self::BELONGS_TO, 'Negara', 'negara'),
			'wargaNegara' => array(self::BELONGS_TO, 'Negara', 'warga_negara'),
			'karyawanImigrasis' => array(self::HAS_MANY, 'KaryawanImigrasi', 'karyawan_id'),
			'karyawanKontakdarurats' => array(self::HAS_MANY, 'KaryawanKontakdarurat', 'karyawan_id'),
			'karyawanPendidikans' => array(self::HAS_MANY, 'KaryawanPendidikan', 'karyawan_id'),
			'karyawanPengalamankerjas' => array(self::HAS_MANY, 'KaryawanPengalamankerja', 'karyawan_id'),
			'karyawanSertifikasis' => array(self::HAS_MANY, 'KaryawanSertifikasi', 'karyawan_id'),
			'karyawanTanggungans' => array(self::HAS_MANY, 'KaryawanTanggungan', 'karyawan_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nip' => 'Nip',
			'nama_depan' => 'Nama Depan',
			'nama_tengah' => 'Nama Tengah',
			'nama_belakang' => 'Nama Belakang',
			'nama_panggilan' => 'Nama Panggilan',
			'tgl_lahir' => 'Tgl Lahir',
			'warga_negara' => 'Warga Negara',
			'kelamin' => 'Kelamin',
			'no_ktp' => 'No Ktp',
			'no_ktp_exp_date' => 'No Ktp Exp Date',
			'no_sim' => 'No Sim',
			'no_sim_exp_date' => 'No Sim Exp Date',
			'status_kawin' => 'Status Kawin',
			'status_karyawan' => 'Status Karyawan',
			'alamat1' => 'Alamat1',
			'alamat2' => 'Alamat2',
			'kota' => 'Kota',
			'negara' => 'Negara',
			'propinsi' => 'Propinsi',
			'kodepos' => 'Kodepos',
			'tlp_rumah' => 'Tlp Rumah',
			'tlp_mobile' => 'Tlp Mobile',
			'tlp_kantor' => 'Tlp Kantor',
			'email1' => 'Email1',
			'email2' => 'Email2',
			'custom' => 'Custom',
			'user_id' => 'User',
			'username' =>'Username',
			'password' => 'Password',
			'password2' => 'Verify Password',
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
		$criteria->compare('nip',$this->nip,true);
		$criteria->compare('nama_depan',$this->nama_depan,true);
		$criteria->compare('nama_tengah',$this->nama_tengah,true);
		$criteria->compare('nama_belakang',$this->nama_belakang,true);
		$criteria->compare('nama_panggilan',$this->nama_panggilan,true);
		$criteria->compare('tgl_lahir',$this->tgl_lahir,true);
		$criteria->compare('warga_negara',$this->warga_negara);
		$criteria->compare('kelamin',$this->kelamin,true);
		$criteria->compare('no_ktp',$this->no_ktp,true);
		$criteria->compare('no_ktp_exp_date',$this->no_ktp_exp_date,true);
		$criteria->compare('no_sim',$this->no_sim,true);
		$criteria->compare('no_sim_exp_date',$this->no_sim_exp_date,true);
		$criteria->compare('status_kawin',$this->status_kawin,true);
		$criteria->compare('status_karyawan',$this->status_karyawan);
		$criteria->compare('alamat1',$this->alamat1,true);
		$criteria->compare('alamat2',$this->alamat2,true);
		$criteria->compare('kota',$this->kota,true);
		$criteria->compare('negara',$this->negara);
		$criteria->compare('propinsi',$this->propinsi);
		$criteria->compare('kodepos',$this->kodepos,true);
		$criteria->compare('tlp_rumah',$this->tlp_rumah,true);
		$criteria->compare('tlp_mobile',$this->tlp_mobile,true);
		$criteria->compare('tlp_kantor',$this->tlp_kantor,true);
		$criteria->compare('email1',$this->email1,true);
		$criteria->compare('email2',$this->email2,true);
		$criteria->compare('custom',$this->custom,true);
		$criteria->compare('user_id',$this->user_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}