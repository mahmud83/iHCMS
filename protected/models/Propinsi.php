<?php

/**
 * This is the model class for table "propinsi".
 *
 * The followings are the available columns in table 'propinsi':
 * @property integer $id
 * @property string $nama
 * @property string $kode
 * @property integer $negara_id
 *
 * The followings are the available model relations:
 * @property Negara $negara
 */
class Propinsi extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Propinsi the static model class
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
		return 'propinsi';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama, negara_id', 'required'),
			array('negara_id', 'numerical', 'integerOnly'=>true),
			array('nama', 'length', 'max'=>45),
			array('kode', 'length', 'max'=>5),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nama, kode, negara_id', 'safe', 'on'=>'search'),
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
			'nama' => 'Nama',
			'kode' => 'Kode',
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

		$criteria->compare('t.id',$this->id);
		$criteria->compare('t.nama',$this->nama,true);
		$criteria->compare('t.kode',$this->kode,true);
		$criteria->compare('negara.nama',$this->negara_id, true);
		
		//load the related table at the same time:
		$criteria->with=array('negara');

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}