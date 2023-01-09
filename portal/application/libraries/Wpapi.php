<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Wpapi
{
	// Enviroment
	private $ENV = 'DEV';

	// API Poll
	private $BASE_URL = "https://smartart.vormia.com";
	// DIR
	private $API_DIR = "/wp-json/corewp/v1/";

	// API - DEV
	private $DEV = [
		'blank' => '',
		'register_user' => '',
		'update_user' => '',
	];

	// API - LIVE
	private $LIVE = array(
		'blank' => '',
		'register_user' => '',
		'update_user' => '',
	);

	// API METHOD
	public function api($key, $base_url = null, $env = null)
	{
		// Set Base URL
		$this->BASE_URL = (is_null($base_url)) ? $this->BASE_URL : $base_url;

		// Set Enviroment
		$this->ENV = (is_null($env)) ? strtoupper($this->ENV) : strtoupper($env);

		// Check if Key is in API
		if (array_key_exists($key, $this->{$this->ENV})) {
			// Return API URL
			return $this->BASE_URL . $this->API_DIR . $this->{$this->ENV}[$key];
		} else {
			// Return Blank
			return $this->{$this->ENV}['blank'];
		}
	}
}

/* End of file Wpapi.php */
/* Location: ./application/libraries/Wpapi.php */
