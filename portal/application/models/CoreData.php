<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CoreData extends CI_Model
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

        //Helpers

        //Models

        // Your own constructor code
    }

    /**
	 * Todo: Get User Name
	 */
	public function get_username($userid = null)
	{
		//User ID
		$user = (is_null($userid)) ? $this->CoreLoad->session('id') : $userid;

		//Get Profile
		$username = $this->CoreCrud->selectSingleValue('users', 'name', array('id' => $user));

		// Get User Name use ternarry
		$name = (!is_null($username) && !empty($username)) ? $username : '';
		return $name;
	}
}

/** End of file CoreData.php */
/** Location: ./application/models/CoreData.php */
