<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CoreTrigger extends CI_Model
{

	private $DB = "";

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

		//Helpers

		//Models

		// Your own constructor code
	}

	/**
	 * 
	 * Upload Settings
	 * 
	 * */
	public function uploadSettings()
	{

		$config['encrypt_name'] = false;
		$config['max_size'] = 4096;

		return $config;
	}

	// Upload Settings
	public function uploadDefault()
	{
		return false;
	}

	/********* URL HELPER *************/

	/**
	 * TODO: CAR
	 */
	public function member_UrlHelper($id)
	{
		// Get Journal Data
		$field_data = $this->CoreCrud->selectFieldItem(array('id' => $id));
		$field_data = json_decode($field_data[0], True);

		$title = $field_data['name'];

		// Return
		return $title;
	}

	/**
	 * TODO: Skip URL
	 */
	public function urlMetaHelper($moduleType)
	{
		// pluralize
		$table = $this->plural->pluralize($moduleType['module']);
		// singularize
		$type = $this->plural->singularize($moduleType['type']);

		// Check
		if (strtolower($table) == 'fields') {
			//Skipped
			$skipped = ['member'];
			if (in_array(strtolower($type), $skipped)) {
				return false;
			}
		}

		// Return
		return true;
	}

	/********* PLAIN HELPER *************/
	/**
	 * Todo: Disable Plain For Member
	 */
	public function member_fieldUsePlain()
	{
		return false;
	}

}

/** End of file CoreTrigger.php */
/** Location: ./application/models/CoreTrigger.php */
