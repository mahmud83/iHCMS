<?php

/**
 * This is the model class for table "competency_library".
 *
 * The followings are the available columns in table 'competency_library':
 * @property integer $id
 * @property integer $category
 * @property string $code
 * @property string $dimension
 * @property string $name
 * @property string $definition
 * @property string $level_1
 * @property string $level_2
 * @property string $level_3
 * @property string $level_4
 * @property string $level_5
 * @property string $date
 * @property string $active
 *
 * The followings are the available model relations:
 * @property CompetencyCategory $category0
 * @property CompetencyRekap[] $competencyRekaps
 * @property CompetencyResult[] $competencyResults
 * @property WOccupation[] $wOccupations
 */
class CompetencyLibrary extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return CompetencyLibrary the static model class
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
		return 'competency_library';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('category', 'required'),
			array('category', 'numerical', 'integerOnly'=>true),
			array('code, dimension', 'length', 'max'=>45),
			array('name', 'length', 'max'=>100),
			array('active', 'length', 'max'=>1),
			array('definition, level_1, level_2, level_3, level_4, level_5, date', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, category, code, dimension, name, definition, level_1, level_2, level_3, level_4, level_5, date, active', 'safe', 'on'=>'search'),
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
			'category0' => array(self::BELONGS_TO, 'CompetencyCategory', 'category'),
			'competencyRekaps' => array(self::HAS_MANY, 'CompetencyRekap', 'competency_library_id'),
			'competencyResults' => array(self::HAS_MANY, 'CompetencyResult', 'competency_library_id'),
			'wOccupations' => array(self::MANY_MANY, 'WOccupation', 'competency_task(competency_library_id, w_occupation_id)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'category' => 'Category',
			'code' => 'Code',
			'dimension' => 'Dimension',
			'name' => 'Name',
			'definition' => 'Definition',
			'level_1' => 'Level 1',
			'level_2' => 'Level 2',
			'level_3' => 'Level 3',
			'level_4' => 'Level 4',
			'level_5' => 'Level 5',
			'date' => 'Date',
			'active' => 'Active',
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
		$criteria->compare('category',$this->category);
		$criteria->compare('code',$this->code,true);
		$criteria->compare('dimension',$this->dimension,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('definition',$this->definition,true);
		$criteria->compare('level_1',$this->level_1,true);
		$criteria->compare('level_2',$this->level_2,true);
		$criteria->compare('level_3',$this->level_3,true);
		$criteria->compare('level_4',$this->level_4,true);
		$criteria->compare('level_5',$this->level_5,true);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('active',$this->active,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}