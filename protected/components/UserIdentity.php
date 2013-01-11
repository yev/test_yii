<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{

        $record=User::model()->findByAttributes(array('user_name'=>$this->username));
        if($record===null)
            $this->errorCode=self::ERROR_USERNAME_INVALID;
        else if($record->user_password !==  utf8_encode( crypt($this->password,$record->user_password))){
            $this->errorCode=self::ERROR_PASSWORD_INVALID;
        }
        else
        {
            $this->username=$record->user_name;
            $this->setState('title', $record->user_name);
            $this->setState('id', $record->id);
            $this->errorCode=self::ERROR_NONE;
        }


        return !$this->errorCode;
	}
}
