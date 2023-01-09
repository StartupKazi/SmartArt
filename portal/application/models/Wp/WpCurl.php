<?php
defined('BASEPATH') or exit('No direct script access allowed');

class WpCurl extends CI_Model
{
	/**
	 *
	 * To load libraries/Model/Helpers/Add custom code which will be used in this Model
	 * This can ease the loading work 
	 * 
	 */
	public function __construct()
	{

		parent::__construct();

		//libraries
		$this->load->library('wpapi');

		//Helpers

		//Models
		$this->load->model('CoreData');

		// Your own constructor code
	}

	/**
	 * Register User
	 */
	public function registerUser($params, $token = '')
	{
		// API URL
		$base_api = $this->CoreCrud->selectSingleValue('settings', 'value', array('title' => 'api_url', 'flg' => 1)); // Main Site URL
		$wpapiURL = $this->wpapi->api('register_user', $base_api);

		// Check Source
		$postData = json_encode($params);
		// Open connection
		$curl = curl_init();
		curl_setopt_array($curl, [
			CURLOPT_URL => $wpapiURL,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'POST',
			CURLOPT_POSTFIELDS =>
			[
				'userData' => "$postData",
				'source' => 'core-portal',
				'token' => "$token"
			],
		]);
		// execute!
		$response = curl_exec($curl);
		// close the connection, release resources used
		curl_close($curl);
		return $response;
	}

	/**
	 * Update User  updateUser
	 */
	public function updateUser($params, $token = '')
	{
		// API URL
		$base_api = $this->CoreCrud->selectSingleValue('settings', 'value', array('title' => 'api_url', 'flg' => 1)); // Main Site URL
		$wpapiURL = $this->wpapi->api('update_user', $base_api);
		// Get User ID from wpuserId
		$wp_user = $this->CoreField->wpuserId();
		if ($wp_user) {
			// Check Source
			$postData = json_encode($params);
			// Open connection
			$curl = curl_init();
			curl_setopt_array($curl, [
				CURLOPT_URL => $wpapiURL,
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_ENCODING => '',
				CURLOPT_MAXREDIRS => 10,
				CURLOPT_TIMEOUT => 0,
				CURLOPT_FOLLOWLOCATION => true,
				CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
				CURLOPT_CUSTOMREQUEST => 'POST',
				CURLOPT_POSTFIELDS =>
				[
					'userID' => $wp_user,
					'userData' => "$postData",
					'source' => 'core-portal',
					'token' => "$token"
				],
			]);
			// execute!
			$response = curl_exec($curl);
			// close the connection, release resources used
			curl_close($curl);
		} else {
			// Encode response to json
			$response = json_encode(["success" => false, "msg" => "Failed to get user ID!"]);
		}
		// Return response
		return $response;
	}
}

/* End of file WpCurl.php */
