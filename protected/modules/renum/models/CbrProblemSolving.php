<?php

/**
 * This is the model class for table "cbr_problem_solving".
 *
 * The followings are the available columns in table 'cbr_problem_solving':
 * @property integer $id
 * @property integer $cbr_id
 * @property string $tet
 * @property string $tce
 *
 * The followings are the available model relations:
 * @property Cbr $cbr
 */
class CbrProblemSolving extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return CbrProblemSolving the static model class
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
		return 'cbr_problem_solving';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cbr_id, tet, tce', 'required'),
			array('cbr_id', 'numerical', 'integerOnly'=>true),
			array('tet, tce', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, cbr_id, tet, tce', 'safe', 'on'=>'search'),
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
			'cbr' => array(self::BELONGS_TO, 'Cbr', 'cbr_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'cbr_id' => 'Cbr',
			'tet' => 'Thinking Environment',
			'tce' => 'Thinking Challenge',
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
		$criteria->compare('cbr_id',$this->cbr_id);
		$criteria->compare('tet',$this->tet,true);
		$criteria->compare('tce',$this->tce,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}