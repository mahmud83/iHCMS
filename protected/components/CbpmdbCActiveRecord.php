<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class CbpmdbCActiveRecord extends CActiveRecord {

    private static $cbpmdb = null;

    public function getDbConnection() {
        if (self::$cbpmdb !== null)
            return self::$cbpmdb;
        else {
            self::$cbpmdb = Yii::app()->cbpmdb;
            if (self::$cbpmdb instanceof CDbConnection) {
                self::$cbpmdb->setActive(true);
                return self::$cbpmdb;
            }
            else
                throw new CDbException(Yii::t('yii', 'Active Record requires a "db" CDbConnection application component.'));
        }
    }

}