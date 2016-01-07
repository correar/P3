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
	private $_id;
	private $_username;

	public function getName()
	{
	    return $this->_username;
	}

	public function getId()
	{
	    return $this->_id;
	}

	public function authenticate()
	{
	    $user = Funcionario::model()->find('LOWER(login)=?', array(strtolower($this->username)));
	    if($user == null)
	    {
		$this->errorCode = self::ERROR_UNKNOWN_IDENTITY;
	    }
	    elseif($user->senha != md5($this->password))
	    {
		$this->errorCode = self::ERROR_PASSWORD_INVALID;
	    }
	    else
	    {
		$this->_id = $user->id;
		$this->_username = $user->nome_funcionario;
		$this->setState('empresa', $user->idEmpresa->nome_empresa);
		Yii::log($user->id.' '.$user->nome_funcionario.' '.$user->idEmpresa->nome_empresa,'info','system.web.auth');
		$this->errorCode = self::ERROR_NONE;
	    }
	    return !$this->errorCode;
/*
		$users=array(
			// username => password
			'demo'=>'demo',
			'admin'=>'admin',
		);
		if(!isset($users[$this->username]))
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		elseif($users[$this->username]!==$this->password)
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else
			$this->errorCode=self::ERROR_NONE;
		return !$this->errorCode;
*/
	}
}