<?php

/**
 * This is the model class for table "w_user_detail".
 *
 * The followings are the available columns in table 'w_user_detail':
 * @property string $id
 * @property integer $id_user
 * @property integer $id_atasan
 * @property string $nama
 * @property string $unitkerja
 * @property string $satuankerja
 * @property string $golongan
 * @property string $golongan2
 * @property string $nik
 * @property integer $id_jabatan
 * @property integer $tw_awal
 * @property string $ip_buat
 * @property string $tgl_buat
 * @property string $tgl_aktivasi
 * @property string $wilayahkerja
 * @property string $resort
 * @property string $nobuku
 * @property string $telp
 * @property string $email
 * @property string $tgl_lahir
 * @property string $tgl_pensiun
 * @property integer $nojab
 * @property string $id_cli
 * @property string $stat_pensiun
 * @property string $id_golongan
 * @property string $id_strata
 * @property string $berkala
 * @property string $id_jobclass
 * @property string $id_jobfamily
 * @property string $tgl_masukkerja
 */
class WUserDetail extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return WUserDetail the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'w_user_detail';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('golongan, golongan2, id_cli, id_golongan, id_strata, berkala, id_jobclass, id_jobfamily, tgl_masukkerja', 'required'),
            array('id_user, id_atasan, id_jabatan, tw_awal, nojab', 'numerical', 'integerOnly' => true),
            array('nama, unitkerja, satuankerja, golongan, golongan2, nik, wilayahkerja, resort, nobuku, telp, email', 'length', 'max' => 255),
            array('ip_buat', 'length', 'max' => 20),
            array('id_cli, id_golongan, id_strata, berkala, id_jobclass, id_jobfamily', 'length', 'max' => 10),
            array('stat_pensiun', 'length', 'max' => 1),
            array('tgl_buat, tgl_aktivasi, tgl_lahir, tgl_pensiun', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, id_user, id_atasan, nama, unitkerja, satuankerja, golongan, golongan2, nik, id_jabatan, tw_awal, ip_buat, tgl_buat, tgl_aktivasi, wilayahkerja, resort, nobuku, telp, email, tgl_lahir, tgl_pensiun, nojab, id_cli, stat_pensiun, id_golongan, id_strata, berkala, id_jobclass, id_jobfamily, tgl_masukkerja', 'safe', 'on' => 'search'),
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
            'idAtasan' => array(self::BELONGS_TO, 'WUserDetail', 'id_atasan'),
            'wUserDetails' => array(self::HAS_MANY, 'WUserDetail', 'id_atasan'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'id_user' => 'Id User',
            'id_atasan' => 'Id Atasan',
            'nama' => 'Nama',
            'unitkerja' => 'Unitkerja',
            'satuankerja' => 'Satuankerja',
            'golongan' => 'Golongan',
            'golongan2' => 'Golongan2',
            'nik' => 'Nik',
            'id_jabatan' => 'Id Jabatan',
            'tw_awal' => 'Tw Awal',
            'ip_buat' => 'Ip Buat',
            'tgl_buat' => 'Tgl Buat',
            'tgl_aktivasi' => 'Tgl Aktivasi',
            'wilayahkerja' => 'Wilayahkerja',
            'resort' => 'Resort',
            'nobuku' => 'Nobuku',
            'telp' => 'Telp',
            'email' => 'Email',
            'tgl_lahir' => 'Tgl Lahir',
            'tgl_pensiun' => 'Tgl Pensiun',
            'nojab' => 'Nojab',
            'id_cli' => 'Id Cli',
            'stat_pensiun' => 'Stat Pensiun',
            'id_golongan' => 'Id Golongan',
            'id_strata' => 'Id Strata',
            'berkala' => 'Berkala',
            'id_jobclass' => 'Id Jobclass',
            'id_jobfamily' => 'Id Jobfamily',
            'tgl_masukkerja' => 'Tgl Masukkerja',
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
        $criteria->compare('id_user', $this->id_user);
        $criteria->compare('id_atasan', $this->id_atasan);
        $criteria->compare('nama', $this->nama, true);
        $criteria->compare('unitkerja', $this->unitkerja, true);
        $criteria->compare('satuankerja', $this->satuankerja, true);
        $criteria->compare('golongan', $this->golongan, true);
        $criteria->compare('golongan2', $this->golongan2, true);
        $criteria->compare('nik', $this->nik, true);
        $criteria->compare('id_jabatan', $this->id_jabatan);
        $criteria->compare('tw_awal', $this->tw_awal);
        $criteria->compare('ip_buat', $this->ip_buat, true);
        $criteria->compare('tgl_buat', $this->tgl_buat, true);
        $criteria->compare('tgl_aktivasi', $this->tgl_aktivasi, true);
        $criteria->compare('wilayahkerja', $this->wilayahkerja, true);
        $criteria->compare('resort', $this->resort, true);
        $criteria->compare('nobuku', $this->nobuku, true);
        $criteria->compare('telp', $this->telp, true);
        $criteria->compare('email', $this->email, true);
        $criteria->compare('tgl_lahir', $this->tgl_lahir, true);
        $criteria->compare('tgl_pensiun', $this->tgl_pensiun, true);
        $criteria->compare('nojab', $this->nojab);
        $criteria->compare('id_cli', $this->id_cli, true);
        $criteria->compare('stat_pensiun', $this->stat_pensiun, true);
        $criteria->compare('id_golongan', $this->id_golongan, true);
        $criteria->compare('id_strata', $this->id_strata, true);
        $criteria->compare('berkala', $this->berkala, true);
        $criteria->compare('id_jobclass', $this->id_jobclass, true);
        $criteria->compare('id_jobfamily', $this->id_jobfamily, true);
        $criteria->compare('tgl_masukkerja', $this->tgl_masukkerja, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }
    
    public function suggestUsername($keyword) {
        $tags = $this->findAll(array(
            'condition' => 'nama LIKE :keyword',
            'params' => array(
                ':keyword' => '%' . strtr($keyword, array('%' => '\%', '_' => '\_', '\\' => '\\\\')) . '%',
            )
        ));

        return $tags;
    }

}