<?php

/**
 * This is the model class for table "w_occupation".
 *
 * The followings are the available columns in table 'w_occupation':
 * @property integer $id
 * @property string $code
 * @property string $name
 * @property integer $level
 * @property integer $parent
 * @property integer $w_unit_id
 * @property integer $job_family
 *
 * The followings are the available model relations:
 * @property Cbr[] $cbrs
 * @property PPerson[] $pPeople
 * @property PPersonOccupationHistorical[] $pPersonOccupationHistoricals
 * @property WJobFamily $jobFamily
 * @property WOccupation $parent0
 * @property WOccupation[] $wOccupations
 * @property WUnit $wUnit
 */
class WOccupation extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return WOccupation the static model class
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
		return 'w_occupation';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name', 'required'),
			array('level, parent, w_unit_id, job_family', 'numerical', 'integerOnly'=>true),
			array('code', 'length', 'max'=>45),
			array('name', 'length', 'max'=>200),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, code, name, level, parent, w_unit_id, job_family', 'safe', 'on'=>'search'),
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
			'cbrs' => array(self::HAS_MANY, 'Cbr', 'jabatan_id'),
			'pPeople' => array(self::HAS_MANY, 'PPerson', 'jabatan_id'),
			'pPersonOccupationHistoricals' => array(self::HAS_MANY, 'PPersonOccupationHistorical', 'occupation_id'),
			'jobFamily' => array(self::BELONGS_TO, 'WJobFamily', 'job_family'),
			'parent0' => array(self::BELONGS_TO, 'WOccupation', 'parent'),
			'wOccupations' => array(self::HAS_MANY, 'WOccupation', 'parent'),
			'wUnit' => array(self::BELONGS_TO, 'WUnit', 'w_unit_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'code' => 'Code',
			'name' => 'Name',
			'level' => 'Level',
			'parent' => 'Parent',
			'w_unit_id' => 'W Unit',
			'job_family' => 'Job Family',
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

		$criteria->compare('t.id',$this->id);
		$criteria->compare('t.code',$this->code,true);
		$criteria->compare('t.name',$this->name,true);
		$criteria->compare('t.level',$this->level);
		//$criteria->compare('parent',$this->parent);
		$criteria->compare('parent0.name',$this->parent, true);
		//$criteria->compare('w_unit_id',$this->w_unit_id);
		$criteria->compare('wUnit.name',$this->w_unit_id, true);
		//$criteria->compare('job_family',$this->job_family);
		$criteria->compare('jobFamily.name',$this->job_family, true);
		//$criteria->compare('negara.nama',$this->negara_id, true);
		
		//load the related table at the same time:
		$criteria->with=array('parent0', 'wUnit', 'jobFamily');
		//$criteria->with=array('wUnit');
		//s$criteria->with=array('parent0');
		
		$sort = new CSort();
		$sort->attributes = array(
			'id',
			'code',
			'name',
			'level',
			'parent' => array(
				'asc'=>'parent0.name',
				'desc'=>'parent0.name DESC',
			),
			'w_unit_id' => array(
				'asc'=>'wUnit.name',
				'desc'=>'wUnit.name DESC',
			),
			'job_family' => array(
				'asc'=>'jobFamily.name',
				'desc'=>'jobFamily.name DESC',
			),
		);
		
		$sort->defaultOrder = 't.id, t.code ASC';

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'sort'=>$sort,
		));
	}
	
	public function jbSearch()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		//$criteria->compare('t.id',$this->id);
		//$criteria->compare('t.code',$this->code,true);
		//$criteria->compare('t.name',$this->name,true);
		//$criteria->compare('t.level',$this->level);
		//$criteria->compare('parent0.name',$this->parent, true);
		//$criteria->compare('wUnit.name',$this->w_unit_id, true);
		//$criteria->compare('jobFamily.name',$this->job_family, true);
		
		$criteria->select = array(
			'jobFamily.name'
		);
		
		$criteria->group = 'jobFamily.name';
		
		$criteria->with = array('jobFamily');

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria
		));
	}
	
	public function suggestUsername($keyword){
		$tags=$this->findAll(array(
			'condition'=>'name LIKE :keyword',
			'params'=>array(
				':keyword'=>'%'.strtr($keyword,array('%'=>'\%', '_'=>'\_', '\\'=>'\\\\')).'%',
			)
		));
		
		return $tags;
	}
}