<?php

/**
 * This is the model class for table "competency_category".
 *
 * The followings are the available columns in table 'competency_category':
 * @property integer $id
 * @property string $code
 * @property string $name
 * @property string $description
 * @property string $definition
 * @property integer $competency_type_id
 *
 * The followings are the available model relations:
 * @property CompetencyType $competencyType
 * @property CompetencyLibrary[] $competencyLibraries
 */
class CompetencyCategory extends DssdbCActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return CompetencyCategory the static model class
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
        return 'competency_category';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('competency_type_id', 'required'),
            array('competency_type_id', 'numerical', 'integerOnly' => true),
            array('code', 'length', 'max' => 45),
            array('name', 'length', 'max' => 255),
            array('description, definition', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, code, name, description, definition, competency_type_id', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'competencyType' => array(self::BELONGS_TO, 'CompetencyType', 'competency_type_id'),
            'competencyLibraries' => array(self::HAS_MANY, 'CompetencyLibrary', 'category'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'code' => 'Code',
            'name' => 'Name',
            'description' => 'Description',
            'definition' => 'Definition',
            'competency_type_id' => 'Competency Type',
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
        $criteria->compare('code', $this->code, true);
        $criteria->compare('name', $this->name, true);
        $criteria->compare('description', $this->description, true);
        $criteria->compare('definition', $this->definition, true);
        $criteria->compare('competency_type_id', $this->competency_type_id);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function suggestUsername($keyword) {
        $tags = $this->findAll(array(
            'condition' => 'name LIKE :keyword OR code LIKE :code',
            'params' => array(
                ':keyword' => '%' . strtr($keyword, array('%' => '\%', '_' => '\_', '\\' => '\\\\')) . '%',
                ':code' => '%' . strtr($keyword, array('%' => '\%', '_' => '\_', '\\' => '\\\\')) . '%',
            )
        ));

        return $tags;
    }

}