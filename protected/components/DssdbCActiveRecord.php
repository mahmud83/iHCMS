<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class DssdbCActiveRecord extends CActiveRecord {

    private static $dssdb = null;

    public function getDbConnection() {
        if (self::$dssdb !== null)
            return self::$dssdb;
        else {
            self::$dssdb = Yii::app()->dssdb;
            if (self::$dssdb instanceof CDbConnection) {
                self::$dssdb->setActive(true);
                return self::$dssdb;
            }
            else
                throw new CDbException(Yii::t('yii', 'Active Record requires a "db" CDbConnection application component.'));
        }
    }

}