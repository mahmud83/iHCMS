<?php

/**
 * This is the model class for table "p_person_occupation_historical".
 *
 * The followings are the available columns in table 'p_person_occupation_historical':
 * @property integer $id
 * @property integer $person_id
 * @property integer $occupation_id
 * @property string $start_date
 * @property string $finish_date
 *
 * The followings are the available model relations:
 * @property PPerson $person
 * @property WOccupation $occupation
 */
class PPersonOccupationHistorical extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return PPersonOccupationHistorical the static model class
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
		return 'p_person_occupation_historical';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('person_id, occupation_id', 'required'),
			array('person_id, occupation_id', 'numerical', 'integerOnly'=>true),
			array('start_date, finish_date', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, person_id, occupation_id, start_date, finish_date', 'safe', 'on'=>'search'),
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
			'person' => array(self::BELONGS_TO, 'PPerson', 'person_id'),
			'occupation' => array(self::BELONGS_TO, 'WOccupation', 'occupation_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'person_id' => 'Person',
			'occupation_id' => 'Occupation',
			'start_date' => 'Start Date',
			'finish_date' => 'Finish Date',
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
		$criteria->compare('person_id',$this->person_id);
		$criteria->compare('occupation_id',$this->occupation_id);
		$criteria->compare('start_date',$this->start_date,true);
		$criteria->compare('finish_date',$this->finish_date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}