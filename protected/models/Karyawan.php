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
 *
 * The followings are the available model relations:
 * @property Negara $negara0
 * @property Propinsi $propinsi0
 * @property Negara $wargaNegara
 * @property KaryawanImigrasi[] $karyawanImigrasis
 * @property KaryawanKontakdarurat[] $karyawanKontakdarurats
 * @property KaryawanPendidikan[] $karyawanPendidikans
 * @property KaryawanPengalamankerja[] $karyawanPengalamankerjas
 * @property KaryawanSertifikasi[] $karyawanSertifikasis
 * @property KaryawanTanggungan[] $karyawanTanggungans
 * @property User[] $users
 */
class Karyawan extends CActiveRecord
{
	public $nama_lkp;
	
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Karyawan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	protected function afterfind() {
		parent::afterfind();
		$this->nama_lkp = $this->getNamaLengkap();
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
			array('nip, nama_depan, warga_negara, negara', 'required'),
			array('warga_negara, status_karyawan, negara, propinsi', 'numerical', 'integerOnly'=>true),
			array('nip, nama_depan, nama_tengah, nama_belakang, nama_panggilan, kelamin, status_kawin', 'length', 'max'=>45),
			array('no_ktp, no_sim, alamat1, alamat2', 'length', 'max'=>255),
			array('kota, kodepos', 'length', 'max'=>100),
			array('tlp_rumah, tlp_mobile, tlp_kantor, email1, email2', 'length', 'max'=>50),
			array('tgl_lahir, no_ktp_exp_date, no_sim_exp_date, custom', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nip, nama_depan, nama_tengah, nama_belakang, nama_panggilan, tgl_lahir, warga_negara, kelamin, no_ktp, no_ktp_exp_date, no_sim, no_sim_exp_date, status_kawin, status_karyawan, alamat1, alamat2, kota, negara, propinsi, kodepos, tlp_rumah, tlp_mobile, tlp_kantor, email1, email2, custom, nama_lkp', 'safe', 'on'=>'search'),
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
			'negara0' => array(self::BELONGS_TO, 'Negara', 'negara'),
			'propinsi0' => array(self::BELONGS_TO, 'Propinsi', 'propinsi'),
			'wargaNegara' => array(self::BELONGS_TO, 'Negara', 'warga_negara'),
			'karyawanImigrasis' => array(self::HAS_MANY, 'KaryawanImigrasi', 'karyawan_id'),
			'karyawanKontakdarurats' => array(self::HAS_MANY, 'KaryawanKontakdarurat', 'karyawan_id'),
			'karyawanPendidikans' => array(self::HAS_MANY, 'KaryawanPendidikan', 'karyawan_id'),
			'karyawanPengalamankerjas' => array(self::HAS_MANY, 'KaryawanPengalamankerja', 'karyawan_id'),
			'karyawanSertifikasis' => array(self::HAS_MANY, 'KaryawanSertifikasi', 'karyawan_id'),
			'karyawanTanggungans' => array(self::HAS_MANY, 'KaryawanTanggungan', 'karyawan_id'),
			'users' => array(self::HAS_MANY, 'User', 'karyawan_id'),
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
			'nama_lkp' => 'Nama Lengkap',
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
		$criteria->compare('t.nip',$this->nip,true);
		$criteria->compare('t.nama_depan',$this->nama_depan,true);
		$criteria->compare('t.nama_tengah',$this->nama_tengah,true);
		$criteria->compare('t.nama_belakang',$this->nama_belakang,true);
		
		$criteria->compare("concat(t.nama_depan,' ',t.nama_tengah, ' ', t.nama_belakang)",$this->nama_lkp,true);
		
		$criteria->compare('t.nama_panggilan',$this->nama_panggilan,true);
		$criteria->compare('t.tgl_lahir',$this->tgl_lahir,true);
		$criteria->compare('wargaNegara.nama',$this->warga_negara, true);
		$criteria->compare('t.kelamin',$this->kelamin,true);
		$criteria->compare('t.no_ktp',$this->no_ktp,true);
		$criteria->compare('t.no_ktp_exp_date',$this->no_ktp_exp_date,true);
		$criteria->compare('t.no_sim',$this->no_sim,true);
		$criteria->compare('t.no_sim_exp_date',$this->no_sim_exp_date,true);
		$criteria->compare('t.status_kawin',$this->status_kawin,true);
		$criteria->compare('t.status_karyawan',$this->status_karyawan);
		$criteria->compare('t.alamat1',$this->alamat1,true);
		$criteria->compare('t.alamat2',$this->alamat2,true);
		$criteria->compare('t.kota',$this->kota,true);
		$criteria->compare('negara0.nama',$this->negara);
		$criteria->compare('propinsi0.nama',$this->propinsi);
		$criteria->compare('t.kodepos',$this->kodepos,true);
		$criteria->compare('t.tlp_rumah',$this->tlp_rumah,true);
		$criteria->compare('t.tlp_mobile',$this->tlp_mobile,true);
		$criteria->compare('t.tlp_kantor',$this->tlp_kantor,true);
		$criteria->compare('t.email1',$this->email1,true);
		$criteria->compare('t.email2',$this->email2,true);
		$criteria->compare('t.custom',$this->custom,true);
		
		/*if($this->nama_lkp){
			$criteria->addCondition("nama_depan + ' ' + nama_tengah + ' ' + nama_belakang AS nama_lkp LIKE %".$this->nama_lkp."%");
		}*/
		
		//load the related table at the same time:
		$criteria->with=array('negara0');
		$criteria->with=array('propinsi0');
		$criteria->with=array('wargaNegara');

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	//manggabungkan nama depan, tengah dan belakang untuk mendapatkan nama lengkap
	public function getNamaLengkap() {
		$nama = $this->nama_depan." ".$this->nama_tengah." ".$this->nama_belakang;
		
		return $nama;
	}
}