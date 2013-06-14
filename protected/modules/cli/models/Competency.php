<?php

/**
 * This is the model class for table "competency".
 *
 * The followings are the available columns in table 'competency':
 * @property integer $id
 * @property string $year
 * @property string $start
 * @property string $end
 * @property string $status
 *
 * The followings are the available model relations:
 * @property CompetencyCli[] $competencyClis
 * @property CompetencyPeers[] $competencyPeers
 * @property CompetencyRekap[] $competencyRekaps
 * @property CompetencyResult[] $competencyResults
 * @property CompetencyTask[] $competencyTasks
 */
class Competency extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Competency the static model class
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
        return 'competency';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('year, start, end, status', 'required'),
            array('year', 'length', 'max' => 4),
            array('status', 'length', 'max' => 8),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, year, start, end, status', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'competencyClis' => array(self::HAS_MANY, 'CompetencyCli', 'competency_id'),
            'competencyPeers' => array(self::HAS_MANY, 'CompetencyPeers', 'competency_id'),
            'competencyRekaps' => array(self::HAS_MANY, 'CompetencyRekap', 'competency_id'),
            'competencyResults' => array(self::HAS_MANY, 'CompetencyResult', 'competency_id'),
            'competencyTasks' => array(self::HAS_MANY, 'CompetencyTask', 'competency_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'year' => 'Year',
            'start' => 'Start',
            'end' => 'End',
            'status' => 'Status',
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
        $criteria->compare('year', $this->year, true);
        $criteria->compare('start', $this->start, true);
        $criteria->compare('end', $this->end, true);
        $criteria->compare('status', $this->status, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

}