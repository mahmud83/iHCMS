<?php

/**
 * This is the model class for table "competency_peers".
 *
 * The followings are the available columns in table 'competency_peers':
 * @property integer $id
 * @property integer $assessor
 * @property integer $assessed
 * @property integer $competency_type
 * @property string $status
 * @property integer $competency_id
 *
 * The followings are the available model relations:
 * @property CompetencyType $competencyType
 * @property Competency $competency
 */
class CompetencyPeers extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return CompetencyPeers the static model class
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
        return 'competency_peers';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('assessor, assessed, competency_type, competency_id', 'required'),
            array('assessor, assessed, competency_type, competency_id', 'numerical', 'integerOnly' => true),
            array('status', 'length', 'max' => 11),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, assessor, assessed, competency_type, status, competency_id', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'competencyType' => array(self::BELONGS_TO, 'CompetencyType', 'competency_type'),
            'competency' => array(self::BELONGS_TO, 'Competency', 'competency_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'assessor' => 'Assessor',
            'assessed' => 'Assessed',
            'competency_type' => 'Competency Type',
            'status' => 'Status',
            'competency_id' => 'Competency',
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
        $criteria->compare('assessor', $this->assessor);
        $criteria->compare('assessed', $this->assessed);
        $criteria->compare('competency_type', $this->competency_type);
        $criteria->compare('status', $this->status, true);
        $criteria->compare('competency_id', $this->competency_id);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

}