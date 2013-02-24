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
	
	public $total_kh;
	public $total_pss;
	public $total_psp;
	public $total_ac;
	public $total_kdw;
	
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
			'jobFamily'=> array( self::MANY_MANY, 'WJobFamily', 'w_occupation(id,job_family)'),
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
			'total' => 'Total CBR',
			'relation' => 'Relation',
			'information' => 'Information',
			
			'total_kh' => 'total Know How Score',
			'total_psp' => 'total Problem Solving Persent',
			'total_pss' => 'total Problem Solving Score',
			'total_ac' => 'total Accountability Score',
			'total_kdw' => 'total Total CBR',
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
		//$criteria->compare('jabatan_id',$this->jabatan_id);
		$criteria->compare('jabatan.name',$this->jabatan_id);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('kh_score',$this->kh_score);
		$criteria->compare('ps_persent',$this->ps_persent);
		$criteria->compare('ps_score',$this->ps_score);
		$criteria->compare('ac_score',$this->ac_score);
		$criteria->compare('total',$this->total);
		$criteria->compare('relation',$this->relation);
		$criteria->compare('information',$this->information,true);
		
		$criteria->with=array('jabatan');
		
		$sort = new CSort();
		$sort->attributes = array(
			'id',
			'jabatan_id' => array(
				'asc'=>'jabatan.name',
				'desc'=>'jabatan.name DESC',
			),
			'date',
			'kh_score',
			'ps_percsnt',
			'ps_score',
			'ac_score',
			'relation',
			'information',
		);
		
		$sort->defaultOrder = 't.id, t.code ASC';

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function jobFamily()
	{
		$command = Yii::app()->db->createCommand();
		$command->select('sum(kh_score)');
		$command->from('cbr');
		$command->join('w_occupation ON w_occupation.id = cbr.jabatan_id w_job_family ON w_job_family.id = w_occupation.job_family');


		$command->group('job_family.id');
	}
	
	public function jbSearch()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;
		
		$criteria->select = array(
			'sum(kh_score) as total_kh',
			'sum(ps_score) as total_pss',
			'sum(ps_persent) as total_psp',
			'sum(ac_score) as total_ac',
			'sum(total) as total_kdw',
		);
		
		$criteria->condition = 'jabatan.job_family != 0';
		$criteria->with=array('jabatan');
		
		//$criteria->params = array (':job_family' => 0);
		$criteria->group= 'jabatan.job_family';
		
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}