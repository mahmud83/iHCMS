<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity {

    private $_id;
    private $_username;

    /**
     * Authenticates a user.
     * The example implementation makes sure if the username and password
     * are both 'demo'.
     * In practical applications, this should be changed to authenticate
     * against some persistent user identity storage (e.g. database).
     * @return boolean whether authentication succeeds.
     */
    public function authenticate() {
        /*
          $users=array(
          // username => password
          'demo'=>'demo',
          'admin'=>'admin',
          ); */

        $username = strtolower($this->username);
        $user = WUser::model()->find('Lower(user_name)=?', array($username));

        if ($user === null):
            $this->errorCode = self::ERROR_USERNAME_INVALID;
        elseif (!$user->validatePassword($this->password)):
            $this->errorCode = self::ERROR_PASSWORD_INVALID;
        else:
            $this->_id = $user->id_user;
            $this->username = $user->user_name;
            $this->_username = $user->user_name;
            $this->errorCode = self::ERROR_NONE;

            Yii::app()->session['userid'] = $user->id_user;
        endif;
        
        return !$this->errorCode;
    }

    public function getId() {
        return $this->_id;
    }

}