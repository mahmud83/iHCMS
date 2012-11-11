<?php

/**
 * This is the model class for table "negara".
 *
 * The followings are the available columns in table 'negara':
 * @property string $kode
 * @property string $nama
 * @property string $iso3
 * @property integer $numcode
 *
 * The followings are the available model relations:
 * @property Propinsi[] $propinsis
 */
class Negara extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Negara the static model class
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
		return 'negara';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('kode', 'required'),
			array('numcode', 'numerical', 'integerOnly'=>true),
			array('kode', 'length', 'max'=>2),
			array('nama', 'length', 'max'=>100),
			array('iso3', 'length', 'max'=>3),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('kode, nama, iso3, numcode', 'safe', 'on'=>'search'),
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
			'propinsis' => array(self::HAS_MANY, 'Propinsi', 'negara'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'kode' => 'Kode',
			'nama' => 'Nama',
			'iso3' => 'Iso3',
			'numcode' => 'Numcode',
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

		$criteria->compare('kode',$this->kode,true);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('iso3',$this->iso3,true);
		$criteria->compare('numcode',$this->numcode);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}