<?php

/**
 * This is the model class for table "cbr".
 *
 * The followings are the available columns in table 'cbr':
 * @property integer $id
 * @property integer $jabatan_id
 * @property string $date
 * @property integer $kh_score
 * @property integer $ps_persent
 * @property integer $ps_score
 * @property integer $ac_score
 * @property integer $total
 * @property integer $relation
 * @property string $information
 *
 * The followings are the available model relations:
 * @property WOccupation $jabatan
 * @property CbrAccountability[] $cbrAccountabilities
 * @property CbrKnowHow[] $cbrKnowHows
 * @property CbrProblemSolving[] $cbrProblemSolvings
 */
class Cbr extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Cbr the static model class
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
		return 'cbr';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('date, kh_score, ps_persent, ps_score, ac_score, total', 'required'),
			array('jabatan_id, kh_score, ps_persent, ps_score, ac_score, total, relation', 'numerical', 'integerOnly'=>true),
			//array('information', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, jabatan_id, date, kh_score, ps_persent, ps_score, ac_score, total, relation, information', 'safe', 'on'=>'search'),
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
			'jabatan' => array(self::BELONGS_TO, 'WOccupation', 'jabatan_id'),
			'cbrAccountabilities' => array(self::HAS_MANY, 'CbrAccountability', 'cbr_id'),
			'cbrKnowHows' => array(self::HAS_MANY, 'CbrKnowHow', 'cbr_id'),
			'cbrProblemSolvings' => array(self::HAS_MANY, 'CbrProblemSolving', 'cbr_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'jabatan_id' => 'Jabatan',
			'date' => 'Date',
			'kh_score' => 'Know How Score',
			'ps_persent' => 'Problem Solving Persent',
			'ps_score' => 'Problem Solving Score',
			'ac_score' => 'Accountability Score',
			'total' => 'Total Job unit',
			'relation' => 'Relation',
			'information' => 'Information',
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
		$criteria->compare('jabatan_id',$this->jabatan_id);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('kh_score',$this->kh_score);
		$criteria->compare('ps_persent',$this->ps_persent);
		$criteria->compare('ps_score',$this->ps_score);
		$criteria->compare('ac_score',$this->ac_score);
		$criteria->compare('total',$this->total);
		$criteria->compare('relation',$this->relation);
		$criteria->compare('information',$this->information,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}