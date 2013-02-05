<?php

/**
 * This is the model class for table "p_person_education".
 *
 * The followings are the available columns in table 'p_person_education':
 * @property integer $id
 * @property integer $person_id
 * @property string $level
 * @property string $institution_name
 * @property string $institution_major
 * @property string $gpa_score
 * @property string $tgl_masuk
 * @property string $tgl_keluar
 *
 * The followings are the available model relations:
 * @property PPerson $person
 */
class PPersonEducation extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return PPersonEducation the static model class
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
		return 'p_person_education';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('person_id', 'required'),
			array('person_id', 'numerical', 'integerOnly'=>true),
			array('level, institution_name', 'length', 'max'=>100),
			array('institution_major', 'length', 'max'=>45),
			array('gpa_score', 'length', 'max'=>25),
			array('tgl_masuk, tgl_keluar', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, person_id, level, institution_name, institution_major, gpa_score, tgl_masuk, tgl_keluar', 'safe', 'on'=>'search'),
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
			'level' => 'Level',
			'institution_name' => 'Institution Name',
			'institution_major' => 'Institution Major',
			'gpa_score' => 'Gpa Score',
			'tgl_masuk' => 'Tgl Masuk',
			'tgl_keluar' => 'Tgl Keluar',
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
		$criteria->compare('level',$this->level,true);
		$criteria->compare('institution_name',$this->institution_name,true);
		$criteria->compare('institution_major',$this->institution_major,true);
		$criteria->compare('gpa_score',$this->gpa_score,true);
		$criteria->compare('tgl_masuk',$this->tgl_masuk,true);
		$criteria->compare('tgl_keluar',$this->tgl_keluar,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}