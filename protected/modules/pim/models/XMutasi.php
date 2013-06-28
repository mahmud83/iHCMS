<?php

/**
 * This is the model class for table "x_mutasi".
 *
 * The followings are the available columns in table 'x_mutasi':
 * @property string $id
 * @property string $id_user
 * @property string $id_jabatan
 * @property integer $nojab
 * @property string $tgl_mulai
 * @property string $tgl_selesai
 */
class XMutasi extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return XMutasi the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'x_mutasi';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('id_user, id_jabatan, nojab, tgl_mulai, tgl_selesai', 'required'),
            array('nojab', 'numerical', 'integerOnly' => true),
            array('id_user, id_jabatan', 'length', 'max' => 10),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, id_user, id_jabatan, nojab, tgl_mulai, tgl_selesai', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'id_user' => 'Id User',
            'id_jabatan' => 'Id Jabatan',
            'nojab' => 'Nojab',
            'tgl_mulai' => 'Tgl Mulai',
            'tgl_selesai' => 'Tgl Selesai',
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

        $criteria->compare('id', $this->id, true);
        $criteria->compare('id_user', $this->id_user, true);
        $criteria->compare('id_jabatan', $this->id_jabatan, true);
        $criteria->compare('nojab', $this->nojab);
        $criteria->compare('tgl_mulai', $this->tgl_mulai, true);
        $criteria->compare('tgl_selesai', $this->tgl_selesai, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }
    
    public function jabatan() {
        $jabatan = WJabatan::model()->find(array(
            'condition'=>'id = :id',
            'params'=>array(':id'=>$this->id_jabatan),
        ));
        
        return $jabatan;
    }

}