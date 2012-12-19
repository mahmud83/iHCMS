<?php

/**
 * This is the model class for table "w_country".
 *
 * The followings are the available columns in table 'w_country':
 * @property integer $id
 * @property string $code
 * @property string $name
 * @property string $iso3
 * @property integer $numcode
 *
 * The followings are the available model relations:
 * @property Karyawan[] $karyawans
 * @property Karyawan[] $karyawans1
 * @property KaryawanImigrasi[] $karyawanImigrasis
 * @property WState[] $wStates
 */
class WCountry extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return WCountry the static model class
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
		return 'w_country';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('code, name', 'required'),
			array('numcode', 'numerical', 'integerOnly'=>true),
			array('code', 'length', 'max'=>2),
			array('name', 'length', 'max'=>100),
			array('iso3', 'length', 'max'=>3),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, code, name, iso3, numcode', 'safe', 'on'=>'search'),
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
			'karyawans' => array(self::HAS_MANY, 'Karyawan', 'negara'),
			'karyawans1' => array(self::HAS_MANY, 'Karyawan', 'warga_negara'),
			'karyawanImigrasis' => array(self::HAS_MANY, 'KaryawanImigrasi', 'negara_id'),
			'wStates' => array(self::HAS_MANY, 'WState', 'country_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'code' => 'Code',
			'name' => 'Name',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('code',$this->code,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('iso3',$this->iso3,true);
		$criteria->compare('numcode',$this->numcode);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}