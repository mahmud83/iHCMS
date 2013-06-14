<?php

/**
 * This is the model class for table "mutasi_history_lama".
 *
 * The followings are the available columns in table 'mutasi_history_lama':
 * @property integer $id
 * @property integer $id_user
 * @property integer $id_jab_lama
 * @property integer $nojab_lama
 * @property integer $id_jab_baru
 * @property integer $nojab_baru
 * @property string $tgl_tmt
 */
class MutasiHistoryLama extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return MutasiHistoryLama the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'mutasi_history_lama';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('id_user, id_jab_lama, nojab_lama, id_jab_baru, nojab_baru, tgl_tmt', 'required'),
            array('id_user, id_jab_lama, nojab_lama, id_jab_baru, nojab_baru', 'numerical', 'integerOnly' => true),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, id_user, id_jab_lama, nojab_lama, id_jab_baru, nojab_baru, tgl_tmt', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'idUser' => array(self::BELONGS_TO, 'WUser', 'id_user'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'id_user' => 'Id User',
            'id_jab_lama' => 'Id Jab Lama',
            'nojab_lama' => 'Nojab Lama',
            'id_jab_baru' => 'Id Jab Baru',
            'nojab_baru' => 'Nojab Baru',
            'tgl_tmt' => 'Tgl Tmt',
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
        $criteria->compare('id_user', $this->id_user);
        $criteria->compare('id_jab_lama', $this->id_jab_lama);
        $criteria->compare('nojab_lama', $this->nojab_lama);
        $criteria->compare('id_jab_baru', $this->id_jab_baru);
        $criteria->compare('nojab_baru', $this->nojab_baru);
        $criteria->compare('tgl_tmt', $this->tgl_tmt, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

}