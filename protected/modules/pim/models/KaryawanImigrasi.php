<?php

/**
 * This is the model class for table "karyawan_imigrasi".
 *
 * The followings are the available columns in table 'karyawan_imigrasi':
 * @property integer $id
 * @property integer $karyawan_id
 * @property string $nomor_dokumen
 * @property string $tgl_dikeluarkan
 * @property string $tgl_berakhir
 * @property string $status_kelayakan
 * @property string $review_date
 * @property integer $negara_id
 *
 * The followings are the available model relations:
 * @property Karyawan $karyawan
 * @property Negara $negara
 */
class KaryawanImigrasi extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return KaryawanImigrasi the static model class
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
		return 'karyawan_imigrasi';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('karyawan_id, nomor_dokumen, tgl_dikeluarkan, tgl_berakhir, negara_id', 'required'),
			array('karyawan_id, negara_id', 'numerical', 'integerOnly'=>true),
			array('nomor_dokumen, status_kelayakan', 'length', 'max'=>100),
			array('review_date', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, karyawan_id, nomor_dokumen, tgl_dikeluarkan, tgl_berakhir, status_kelayakan, review_date, negara_id', 'safe', 'on'=>'search'),
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
			'negara' => array(self::BELONGS_TO, 'Negara', 'negara_id'),
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
			'nomor_dokumen' => 'Nomor Dokumen',
			'tgl_dikeluarkan' => 'Tgl Dikeluarkan',
			'tgl_berakhir' => 'Tgl Berakhir',
			'status_kelayakan' => 'Status Kelayakan',
			'review_date' => 'Review Date',
			'negara_id' => 'Negara',
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
		$criteria->compare('nomor_dokumen',$this->nomor_dokumen,true);
		$criteria->compare('tgl_dikeluarkan',$this->tgl_dikeluarkan,true);
		$criteria->compare('tgl_berakhir',$this->tgl_berakhir,true);
		$criteria->compare('status_kelayakan',$this->status_kelayakan,true);
		$criteria->compare('review_date',$this->review_date,true);
		$criteria->compare('negara_id',$this->negara_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}