<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
   private $_id;
 
   public function authenticate()
   {
       $record= Gebruiker::model()->findByAttributes(array('Email'=>$this->username));  // here I use Email as user name which comes from database
       if($record===null)
               {
                       $this->_id='user Null';
                                   $this->errorCode=self::ERROR_USERNAME_INVALID;
               }
       else if($record->Wachtwoord!==$this->password)            // here I compare db password with passwod field
               {        $this->_id=$this->username;
                       $this->errorCode=self::ERROR_PASSWORD_INVALID;
               }
        
       else
       {  
          $this->_id=$record['GebruikerID'];
          Yii::app()->getUser()->setState('account',$record['Account']);
           $this->setState('account', $record['Account']);
           $this->errorCode=self::ERROR_NONE;

       }
       return !$this->errorCode;
   }

   public function getId()       //  override Id
   {
       return $this->_id;
   }

}