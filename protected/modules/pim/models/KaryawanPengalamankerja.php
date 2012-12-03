<?php

/**
 * This is the model class for table "karyawan_pengalamankerja".
 *
 * The followings are the available columns in table 'karyawan_pengalamankerja':
 * @property integer $id
 * @property integer $karyawan_id
 * @property string $perusahaan
 * @property string $jabatan
 * @property string $tgl_masuk
 * @property string $tgl_keluar
 * @property string $komentar
 *
 * The followings are the available model relations:
 * @property Karyawan $karyawan
 */
class KaryawanPengalamankerja extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return KaryawanPengalamankerja the static model class
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
		return 'karyawan_pengalamankerja';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('karyawan_id, perusahaan, jabatan, tgl_masuk, tgl_keluar', 'required'),
			array('karyawan_id', 'numerical', 'integerOnly'=>true),
			array('perusahaan, jabatan', 'length', 'max'=>255),
			array('komentar', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, karyawan_id, perusahaan, jabatan, tgl_masuk, tgl_keluar, komentar', 'safe', 'on'=>'search'),
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
			'karyawan' => array(self::BELONGS_TO, 'Karyawan', 'karyawan_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'karyawan_id' => 'Karyawan',
			'perusahaan' => 'Perusahaan',
			'jabatan' => 'Jabatan',
			'tgl_masuk' => 'Tgl Masuk',
			'tgl_keluar' => 'Tgl Keluar',
			'komentar' => 'Komentar',
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
		$criteria->compare('karyawan_id',$this->karyawan_id);
		$criteria->compare('perusahaan',$this->perusahaan,true);
		$criteria->compare('jabatan',$this->jabatan,true);
		$criteria->compare('tgl_masuk',$this->tgl_masuk,true);
		$criteria->compare('tgl_keluar',$this->tgl_keluar,true);
		$criteria->compare('komentar',$this->komentar,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}