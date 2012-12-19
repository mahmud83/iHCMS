<?php

/**
 * This is the model class for table "w_link".
 *
 * The followings are the available columns in table 'w_link':
 * @property integer $id
 * @property integer $parent_id
 * @property string $name
 * @property string $title
 * @property string $url
 * @property string $image
 * @property string $auth
 * @property integer $w_module_id
 *
 * The followings are the available model relations:
 * @property WModule $wModule
 * @property WLink $parent
 * @property WLink[] $wLinks
 */
class WLink extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return WLink the static model class
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
		return 'w_link';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('parent_id, w_module_id', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>45),
			array('title', 'length', 'max'=>100),
			array('url, image', 'length', 'max'=>200),
			array('auth', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, parent_id, name, title, url, image, auth, w_module_id', 'safe', 'on'=>'search'),
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
			'wModule' => array(self::BELONGS_TO, 'WModule', 'w_module_id'),
			'parent' => array(self::BELONGS_TO, 'WLink', 'parent_id'),
			'wLinks' => array(self::HAS_MANY, 'WLink', 'parent_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'parent_id' => 'Parent',
			'name' => 'Name',
			'title' => 'Title',
			'url' => 'Url',
			'image' => 'Image',
			'auth' => 'Auth',
			'w_module_id' => 'W Module',
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
		$criteria->compare('parent_id',$this->parent_id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('url',$this->url,true);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('auth',$this->auth,true);
		$criteria->compare('w_module_id',$this->w_module_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}