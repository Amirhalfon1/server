<?php

require_once ( "kalturaAction.class.php" );

class loginAction extends kalturaAction
{
	public function execute ( ) 
	{

		$service_url = requestUtils::getHost();
		$service_url = str_replace ( "http://" , "" , $service_url );

		if (kConf::get('kmc_secured_login')) {
			$service_url = 'https://'.$service_url;		
			
			if ( (empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] == 'off') && $_SERVER['SERVER_PORT'] != 443)
			{
    			header('Location:'. $service_url.'/'.$_SERVER['REQUEST_URI']);
    			exit();
    		}
			
		}
		else {
			$service_url = 'http://'.$service_url;
			echo header('Location:'. $service_url.'/'.$_SERVER['REQUEST_URI']);
		}
		
		$this->service_url = $service_url;
		$this->kmc_login_version 	= kConf::get('kmc_login_version');
		$this->setPassHashKey = $this->getRequestParameter( "setpasshashkey" );
		$this->hashKeyErrorCode = null;
		$this->hashKeyLoginId = null;
		if ($this->setPassHashKey) {
			try {
				if (!UserLoginDataPeer::isHashKeyValid($this->setPassHashKey)) {
					$this->hashKeyErrorCode = kUserException::NEW_PASSWORD_HASH_KEY_INVALID;
				}
				else {
					$userLoginDataId = UserLoginDataPeer::getIdFromHashKey($this->setPassHashKey);
					$userLoginData = UserLoginDataPeer::retrieveByPK($userLoginDataId);
					if (!$userLoginData){
						$this->hashKeyLoginId = "";
					}
					$this->hashKeyLoginId = $userLoginData->getLoginEmail();			
				}
			}
			catch (kCoreException $e) {
				$this->hashKeyErrorCode = $e->getCode();
			}
		}
		sfView::SUCCESS;
	}
}
?>