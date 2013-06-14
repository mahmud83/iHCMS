<?php

/**
 * This is the model class for table "w_jabatan".
 *
 * The followings are the available columns in table 'w_jabatan':
 * @property string $id
 * @property integer $parent_id
 * @property string $nama
 * @property string $status
 * @property string $unitkerja
 * @property string $id_cli
 * @property string $parent_id_cli
 * @property string $ulist
 * @property string $id_jobclass
 * @property string $id_jobfamily
 * @property string $kode
 * @property string $level
 */
class WJabatan extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return WJabatan the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'w_jabatan';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('unitkerja, id_cli, parent_id_cli, ulist, id_jobclass, id_jobfamily, kode', 'required'),
            array('parent_id', 'numerical', 'integerOnly' => true),
            array('nama, unitkerja', 'length', 'max' => 255),
            array('status', 'length', 'max' => 1),
            array('id_cli, parent_id_cli, id_jobclass, id_jobfamily, kode, level', 'length', 'max' => 10),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, parent_id, nama, status, unitkerja, id_cli, parent_id_cli, ulist, id_jobclass, id_jobfamily, kode, level', 'safe', 'on' => 'search'),
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
            'parent_id' => 'Parent',
            'nama' => 'Nama',
            'status' => 'Status',
            'unitkerja' => 'Unitkerja',
            'id_cli' => 'Id Cli',
            'parent_id_cli' => 'Parent Id Cli',
            'ulist' => 'Ulist',
            'id_jobclass' => 'Id Jobclass',
            'id_jobfamily' => 'Id Jobfamily',
            'kode' => 'Kode',
            'level' => 'Level',
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
        $criteria->compare('parent_id', $this->parent_id);
        $criteria->compare('nama', $this->nama, true);
        $criteria->compare('status', $this->status, true);
        $criteria->compare('unitkerja', $this->unitkerja, true);
        $criteria->compare('id_cli', $this->id_cli, true);
        $criteria->compare('parent_id_cli', $this->parent_id_cli, true);
        $criteria->compare('ulist', $this->ulist, true);
        $criteria->compare('id_jobclass', $this->id_jobclass, true);
        $criteria->compare('id_jobfamily', $this->id_jobfamily, true);
        $criteria->compare('kode', $this->kode, true);
        $criteria->compare('level', $this->level, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function suggestUsername($keyword) {
        $tags = $this->findAll(array(
            //'join'=>'JOIN w_unitkerja ON unitkerja = id_unit',
            //'select'=>'t.*, w_unitkerja.nama AS nama_unit',
            'condition' => 't.nama LIKE :keyword',
            'params' => array(
                ':keyword' => '%' . strtr($keyword, array('%' => '\%', '_' => '\_', '\\' => '\\\\')) . '%',
            )
        ));

        return $tags;
    }

    public function namaUnit() {
        $query = WUnitkerja::model()->find(array(
            'condition' => 'id_unit = :nama',
            'params' => array(':nama' => $this->unitkerja),
        ));

        return $query->nama;
    }

}