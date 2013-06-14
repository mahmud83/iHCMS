<?php

/**
 * This is the model class for table "competency_result".
 *
 * The followings are the available columns in table 'competency_result':
 * @property integer $id
 * @property integer $assessor_id
 * @property integer $assessed_id
 * @property integer $level
 * @property string $evidence
 * @property string $created
 * @property string $modified
 * @property integer $competency_library_id
 * @property integer $competency_id
 *
 * The followings are the available model relations:
 * @property Competency $competency
 * @property CompetencyLibrary $competencyLibrary
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
	 * @return CDbConnection database connection
	 */
	public function getDbConnection()
	{
		return Yii::app()->dssdb;
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
			array('assessor_id, assessed_id, competency_library_id, competency_id', 'required'),
			array('assessor_id, assessed_id, level, competency_library_id, competency_id', 'numerical', 'integerOnly'=>true),
			array('evidence, created, modified', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, assessor_id, assessed_id, level, evidence, created, modified, competency_library_id, competency_id', 'safe', 'on'=>'search'),
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
			'competency' => array(self::BELONGS_TO, 'Competency', 'competency_id'),
			'competencyLibrary' => array(self::BELONGS_TO, 'CompetencyLibrary', 'competency_library_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'assessor_id' => 'Assessor',
			'assessed_id' => 'Assessed',
			'level' => 'Level',
			'evidence' => 'Evidence',
			'created' => 'Created',
			'modified' => 'Modified',
			'competency_library_id' => 'Competency Library',
			'competency_id' => 'Competency',
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
		$criteria->compare('assessor_id',$this->assessor_id);
		$criteria->compare('assessed_id',$this->assessed_id);
		$criteria->compare('level',$this->level);
		$criteria->compare('evidence',$this->evidence,true);
		$criteria->compare('created',$this->created,true);
		$criteria->compare('modified',$this->modified,true);
		$criteria->compare('competency_library_id',$this->competency_library_id);
		$criteria->compare('competency_id',$this->competency_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}