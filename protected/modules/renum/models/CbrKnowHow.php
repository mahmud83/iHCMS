<?php

/**
 * This is the model class for table "cbr_know_how".
 *
 * The followings are the available columns in table 'cbr_know_how':
 * @property integer $id
 * @property integer $cbr_id
 * @property string $tkh
 * @property string $mkh
 * @property string $hrs
 *
 * The followings are the available model relations:
 * @property Cbr $cbr
 */
class CbrKnowHow extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return CbrKnowHow the static model class
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
		return 'cbr_know_how';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cbr_id, tkh, mkh, hrs', 'required'),
			array('cbr_id', 'numerical', 'integerOnly'=>true),
			array('tkh, mkh, hrs', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, cbr_id, tkh, mkh, hrs', 'safe', 'on'=>'search'),
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
			'tkh' => 'Technical Know How',
			'mkh' => 'Management Know How',
			'hrs' => 'Human Relation Skills',
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
		$criteria->compare('tkh',$this->tkh,true);
		$criteria->compare('mkh',$this->mkh,true);
		$criteria->compare('hrs',$this->hrs,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}