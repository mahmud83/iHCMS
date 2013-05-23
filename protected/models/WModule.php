<?php

/**
 * This is the model class for table "w_module".
 *
 * The followings are the available columns in table 'w_module':
 * @property integer $id
 * @property integer $parent_id
 * @property string $name
 * @property string $title
 * @property string $description
 * @property string $url
 * @property string $image
 *
 * The followings are the available model relations:
 * @property WLink[] $wLinks
 * @property WModule $parent
 * @property WModule[] $wModules
 */
class WModule extends DssdbCActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return WModule the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return CDbConnection database connection
     */
    public function getDbConnection() {
        return Yii::app()->dssdb;
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'w_module';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('name', 'required'),
            array('parent_id', 'numerical', 'integerOnly' => true),
            array('name', 'length', 'max' => 45),
            array('title', 'length', 'max' => 100),
            array('description, image', 'length', 'max' => 200),
            array('url', 'length', 'max' => 255),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, parent_id, name, title, description, url, image', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'wLinks' => array(self::HAS_MANY, 'WLink', 'w_module_id'),
            'parent' => array(self::BELONGS_TO, 'WModule', 'parent_id'),
            'wModules' => array(self::HAS_MANY, 'WModule', 'parent_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'parent_id' => 'Parent',
            'name' => 'Name',
            'title' => 'Title',
            'description' => 'Description',
            'url' => 'Url',
            'image' => 'Image',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search() {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('parent_id', $this->parent_id);
        $criteria->compare('name', $this->name, true);
        $criteria->compare('title', $this->title, true);
        $criteria->compare('description', $this->description, true);
        $criteria->compare('url', $this->url, true);
        $criteria->compare('image', $this->image, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

}