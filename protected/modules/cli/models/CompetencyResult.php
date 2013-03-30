<?php

/**
 * This is the model class for table "competency_result".
 *
 * The followings are the available columns in table 'competency_result':
 * @property integer $id
 * @property string $year
 * @property integer $assessor_id
 * @property integer $assessed_id
 * @property integer $level
 * @property string $evidence
 * @property string $date
 * @property integer $competency_library_id
 *
 * The followings are the available model relations:
 * @property CompetencyLibrary $competencyLibrary
 * @property PPerson $assessor
 * @property PPerson $assessed
 */
class CompetencyResult extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return CompetencyResult the static model class
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
		return 'competency_result';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('assessor_id, assessed_id, competency_library_id', 'required'),
			array('assessor_id, assessed_id, level, competency_library_id', 'numerical', 'integerOnly'=>true),
			array('year', 'length', 'max'=>4),
			array('evidence, date', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, year, assessor_id, assessed_id, level, evidence, date, competency_library_id', 'safe', 'on'=>'search'),
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
			'competencyLibrary' => array(self::BELONGS_TO, 'CompetencyLibrary', 'competency_library_id'),
			'assessor' => array(self::BELONGS_TO, 'PPerson', 'assessor_id'),
			'assessed' => array(self::BELONGS_TO, 'PPerson', 'assessed_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'year' => 'Year',
			'assessor_id' => 'Assessor',
			'assessed_id' => 'Assessed',
			'level' => 'Level',
			'evidence' => 'Evidence',
			'date' => 'Date',
			'competency_library_id' => 'Competency Library',
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
		$criteria->compare('year',$this->year,true);
		$criteria->compare('assessor_id',$this->assessor_id);
		$criteria->compare('assessed_id',$this->assessed_id);
		$criteria->compare('level',$this->level);
		$criteria->compare('evidence',$this->evidence,true);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('competency_library_id',$this->competency_library_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}