<?php

/**
 * This is the model class for table "competency_cli".
 *
 * The followings are the available columns in table 'competency_cli':
 * @property integer $id
 * @property integer $value
 * @property integer $competency_type_id
 * @property integer $p_person_id
 * @property integer $w_occupation_id
 * @property string $year
 *
 * The followings are the available model relations:
 * @property CompetencyType $competencyType
 * @property PPerson $pPerson
 * @property WOccupation $wOccupation
 */
class CompetencyCli extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return CompetencyCli the static model class
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
		return 'competency_cli';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('competency_type_id, p_person_id, w_occupation_id', 'required'),
			array('value, competency_type_id, p_person_id, w_occupation_id', 'numerical', 'integerOnly'=>true),
			array('year', 'length', 'max'=>4),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, value, competency_type_id, p_person_id, w_occupation_id, year', 'safe', 'on'=>'search'),
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
			'competencyType' => array(self::BELONGS_TO, 'CompetencyType', 'competency_type_id'),
			'pPerson' => array(self::BELONGS_TO, 'PPerson', 'p_person_id'),
			'wOccupation' => array(self::BELONGS_TO, 'WOccupation', 'w_occupation_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'value' => 'Value',
			'competency_type_id' => 'Competency Type',
			'p_person_id' => 'P Person',
			'w_occupation_id' => 'W Occupation',
			'year' => 'Year',
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
		$criteria->compare('value',$this->value);
		$criteria->compare('competency_type_id',$this->competency_type_id);
		$criteria->compare('p_person_id',$this->p_person_id);
		$criteria->compare('w_occupation_id',$this->w_occupation_id);
		$criteria->compare('year',$this->year,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}