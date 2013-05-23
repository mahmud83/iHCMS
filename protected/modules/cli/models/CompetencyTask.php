<?php

/**
 * This is the model class for table "competency_task".
 *
 * The followings are the available columns in table 'competency_task':
 * @property string $tahun
 * @property integer $occupation
 * @property integer $golongan
 * @property integer $competency_library_id
 * @property integer $rcl
 * @property integer $itj
 *
 * The followings are the available model relations:
 * @property CompetencyLibrary $competencyLibrary
 */
class CompetencyTask extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return CompetencyTask the static model class
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
        return 'competency_task';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('tahun, competency_library_id', 'required'),
            array('occupation, golongan, competency_library_id, rcl, itj', 'numerical', 'integerOnly' => true),
            array('tahun', 'length', 'max' => 4),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('tahun, occupation, golongan, competency_library_id, rcl, itj', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'competencyLibrary' => array(self::BELONGS_TO, 'CompetencyLibrary', 'competency_library_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'tahun' => 'Tahun',
            'occupation' => 'Occupation',
            'golongan' => 'Golongan',
            'competency_library_id' => 'Competency Library',
            'rcl' => 'Rcl',
            'itj' => 'Itj',
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

        $criteria->compare('tahun', $this->tahun, true);
        $criteria->compare('occupation', $this->occupation);
        $criteria->compare('golongan', $this->golongan);
        $criteria->compare('competency_library_id', $this->competency_library_id);
        $criteria->compare('rcl', $this->rcl);
        $criteria->compare('itj', $this->itj);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

}