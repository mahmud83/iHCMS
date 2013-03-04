<?php

/**
 * This is the model class for table "competency_rekap".
 *
 * The followings are the available columns in table 'competency_rekap':
 * @property integer $id
 * @property string $rcl
 * @property string $itj
 * @property integer $competency_library_id
 * @property integer $p_person_id
 * @property string $year
 * @property integer $w_occupation_id
 */
class CompetencyRekap extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return CompetencyRekap the static model class
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
		return 'competency_rekap';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('competency_library_id, p_person_id, w_occupation_id', 'required'),
			array('competency_library_id, p_person_id, w_occupation_id', 'numerical', 'integerOnly'=>true),
			array('rcl, itj', 'length', 'max'=>45),
			array('year', 'length', 'max'=>4),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, rcl, itj, competency_library_id, p_person_id, year, w_occupation_id', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'rcl' => 'Rcl',
			'itj' => 'Itj',
			'competency_library_id' => 'Competency Library',
			'p_person_id' => 'P Person',
			'year' => 'Year',
			'w_occupation_id' => 'W Occupation',
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
		$criteria->compare('rcl',$this->rcl,true);
		$criteria->compare('itj',$this->itj,true);
		$criteria->compare('competency_library_id',$this->competency_library_id);
		$criteria->compare('p_person_id',$this->p_person_id);
		$criteria->compare('year',$this->year,true);
		$criteria->compare('w_occupation_id',$this->w_occupation_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}