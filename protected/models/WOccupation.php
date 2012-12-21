<?php

/**
 * This is the model class for table "w_occupation".
 *
 * The followings are the available columns in table 'w_occupation':
 * @property integer $id
 * @property string $code
 * @property string $name
 * @property integer $level
 * @property integer $parent
 * @property integer $w_unit_id
 *
 * The followings are the available model relations:
 * @property Cbr[] $cbrs
 * @property Karyawan[] $karyawans
 * @property KaryawanHistoricalJabatan[] $karyawanHistoricalJabatans
 * @property WUnit $wUnit
 * @property WOccupation $parent0
 * @property WOccupation[] $wOccupations
 */
class WOccupation extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return WOccupation the static model class
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
		return 'w_occupation';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name', 'required'),
			array('level, parent, w_unit_id', 'numerical', 'integerOnly'=>true),
			array('code', 'length', 'max'=>45),
			array('name', 'length', 'max'=>200),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, code, name, level, parent, w_unit_id', 'safe', 'on'=>'search'),
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
			'cbrs' => array(self::HAS_MANY, 'Cbr', 'jabatan_id'),
			'karyawans' => array(self::HAS_MANY, 'Karyawan', 'jabatan_id'),
			'karyawanHistoricalJabatans' => array(self::HAS_MANY, 'KaryawanHistoricalJabatan', 'jabatan_id'),
			'wUnit' => array(self::BELONGS_TO, 'WUnit', 'w_unit_id'),
			'parent0' => array(self::BELONGS_TO, 'WOccupation', 'parent'),
			'wOccupations' => array(self::HAS_MANY, 'WOccupation', 'parent'),
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
			'level' => 'Level',
			'parent' => 'Parent',
			'w_unit_id' => 'W Unit',
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
		$criteria->compare('level',$this->level);
		$criteria->compare('parent',$this->parent);
		$criteria->compare('w_unit_id',$this->w_unit_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}