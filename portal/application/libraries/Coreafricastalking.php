<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use AfricasTalking\SDK\AfricasTalking;

class Coreafricastalking
{

	protected $ci;

	public function __construct()
	{
        $this->ci =& get_instance();
	}

	/*
	*
	* SDK configuration
	* Pass API Username &
	* Pass Key 
	* 
	*/
	public static function config($username,$apiKey)
	{
		//Config SDK
		$instance = new AfricasTalking($username, $apiKey);
		return $instance;
	}

	/*
	*
	* Send Sms
	* Pass Recepient Number & Message As Array (key => value)
	* Pass SDK Settings (Optional)
	* 
	*/
	public static function sendSMS($dataSEND,$settingSDK=null)
	{

		//Load CoreField
        $ci =& get_instance();
		$ci->load->model('CoreField');

		//Check For SDK Configations
	    $configs = (is_null($settingSDK))? ((method_exists('CoreField', 'AfricasTalking')))? $ci->CoreField->AfricasTalking(): false : $settingSDK;
	    if ($configs) {

	    	$username = $configs['username']; //Username
            $apiKey = $configs['apiKey']; //API Key
            $from = (array_key_exists('from',$configs)) ? $configs['from'] : null; //From

	    	//Config
	    	$AT = self::config($username,$apiKey); 
			$sms = $AT->sms(); //Get Service

			//Check Send Data
			$sendKeys = array_keys($dataSEND);
			if ($sendKeys[0] === 0) {
				if (count($dataSEND) == 2) {
					$sendTemp['to'] = $dataSEND[0];
                    $sendTemp['message'] = $dataSEND[1];
					unset($dataSEND); //Clear Send Data
					$dataSEND = $sendTemp;
					unset($sendTemp); //Clear Temp Send Data
				}elseif (count($dataSEND) == 1) {
					$sendTemp['to'] = $dataSEND[0];
					$sendTemp['message'] = null;
					unset($dataSEND); //Clear Send Data
					$dataSEND = $sendTemp;
					unset($sendTemp); //Clear Temp Send Data
				}
			}

            // From -- Sender ID
            if(!is_null($from)){ $dataSEND['from'] = $from; }

			//Send Settings
	    	$sendSett = (method_exists('CoreField', 'sendSett'))? $ci->CoreField->sendSett(): false;
	    	if ($sendSett) {
	    		$dataSEND = array_merge($sendSett,$dataSEND); //Apply Sending Config
	    	}

			// Use the service | Send Message
			$result   = $sms->send($dataSEND);

			//Check Results
			if (!array_key_exists('env', $configs)) {
				//Check Status
				if ($result['status'] == 'success') {
					return true; //Message Sent
				}else{
					return false; //Message Failed To Sent - Allo 'env' For Debug
				}
			}else{
				//Debug Data
				$env = array('data'=>$dataSEND,'result'=>$result); //Debug Data
				if ($configs['env'] == 'debug') {
					return $env; //Return Output For Debug
				}else{
					$key = $configs['env']; //Debug data/result
					return $env[$key]; //Return Output For Debug
				}
			}
	    }else{
	    	return false; //To Settings Set
	    }
	}


	/*
	*
	* Send Sms
	* Pass Recepient Number & Message As Array (key => value)
	* Pass SDK Settings (Optional)
	* 
	*/
	public static function sendSMSarray($dataSEND,$settingSDK=null)
	{

		//Load CoreField
        $ci =& get_instance();
		$ci->load->model('CoreField');

		//Check For SDK Configations
	    $configs = (is_null($settingSDK))? ((method_exists('CoreField', 'AfricasTalking')))? $ci->CoreField->AfricasTalking(): false : $settingSDK;
	    if ($configs) {

	    	$username = $configs['username']; //Username
	    	$apiKey = $configs['apiKey']; //API Key
            $from = (array_key_exists('from',$configs)) ? $configs['from'] : null; //From

	    	//Config
	    	$AT = self::config($username,$apiKey); 
			$sms = $AT->sms(); //Get Service

			//Check Send Data
			$sendKeys = array_keys($dataSEND);
			if ($sendKeys[0] === 0) {
				if (count($dataSEND) == 2) {
					$sendTemp['to'] = $dataSEND[0];
					$sendTemp['message'] = $dataSEND[1];
					unset($dataSEND); //Clear Send Data
					$dataSEND = $sendTemp;
					unset($sendTemp); //Clear Temp Send Data
				}elseif (count($dataSEND) == 1) {
					$sendTemp['to'] = $dataSEND[0];
					$sendTemp['message'] = null;
					unset($dataSEND); //Clear Send Data
					$dataSEND = $sendTemp;
					unset($sendTemp); //Clear Temp Send Data
				}
			}

			// From -- Sender ID
            if(!is_null($from)){ $dataSEND['from'] = $from; }

            //Send Settings
	    	$sendSett = (method_exists('CoreField', 'sendSett'))? $ci->CoreField->sendSett(): false;
	    	if ($sendSett) {
	    		$dataSEND = array_merge($sendSett,$dataSEND); //Apply Sending Config
	    	}

			// Use the service | Send Message
			$result   = $sms->send($dataSEND);

			//Check Results
			if (!array_key_exists('env', $configs)) {
				//Check Status
				if ($result['status'] == 'success') {
					return $result['data']->SMSMessageData->Recipients[0]->messageId; //Message Sent
				}else{
					return false; //Message Failed To Sent - Allo 'env' For Debug
				}
			}else{
				//Debug Data
				$env = array('data'=>$dataSEND,'result'=>$result); //Debug Data
				if ($configs['env'] == 'debug') {
					return $env; //Return Output For Debug
				}else{
					$key = $configs['env']; //Debug data/result
					return $env[$key]; //Return Output For Debug
				}
			}
	    }else{
	    	return false; //To Settings Set
	    }
	}

}

/* End of file Coreafricastalking.php */
/* Location: ./application/libraries/Coreafricastalking.php */
