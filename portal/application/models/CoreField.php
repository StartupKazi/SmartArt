<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CoreField extends CI_Model
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
	 * This function is used to load all your custom data requred to be present for the system/website to oparate well
	 * All values are return as one array (data)
	 * 
	 */
	public function load()
	{
		//Child
		$data['child_theme'] = $this->CoreCrud->selectSingleValue('settings', 'value', array('title' => 'child_theme', 'flg' => 1));
		$data['child_theme_dir'] = "themes/{$data['child_theme']}";
		$data['child_theme_assets'] = 'application/views/' . $data['child_theme_dir'];

		//Values Assets
		$data['custom_assets'] = $this->CoreLoad->ext_asset('/extensions/custom'); //Extension - Custom Extension

		// Page
		$data['post_per_page'] = $this->CoreCrud->selectSingleValue('settings', 'value', array('title' => 'post_per_page', 'flg' => 1));
		$data['pagination_show'] = $this->CoreCrud->selectSingleValue('settings', 'value', array('title' => 'page_pagination', 'flg' => 1));

		//returned DATA
		return $data;
	}

	/**
	 * Todo:: Portal Assets
	 */
	public function portal_Head()
	{
		$style = $this->innostudioAssets();
		return $style;
	}

	public function portal_Footer()
	{
		$script = '<script src="' . $this->CoreLoad->loadAssets('custom/js/custom.js') . '"></script>';

		$script = $this->imagePreview();
		$script .= $this->innostudioScript();
		return $script;
	}

	/**
	 * Todo: Image Preview
	 */
	public function imagePreview()
	{

		$script = "

            <script type=\"text/javascript\">
                function readURL(input) {
                  if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    
                    //alert(input.getAttribute(\"id\"));
                    reader.onload = function(e) {
                      $('.'+input.getAttribute(\"id\")+'_preview').attr('src', e.target.result);
                    }
                    
                    reader.readAsDataURL(input.files[0]);
                  }
                }

                $(\".main-image\").change(function() {
                    if (this.files.length > 0) { 
                        for (const i = 0; i <= this.files.length - 1; i++) { 
              
                            const fsize = this.files.item(i).size; 
                            const file = Math.round((fsize / 1024)); 
                            // The size of the file. 
                            if (file >= 10240) { 
                                this.value = \"\";
                                $('.'+this.getAttribute(\"id\")+'_preview').attr('src', '');
                                alert(\"File too Big (\"+ file/1000 +\"MB), please select a file less than 10MB\");
                            }else { 
                                readURL(this);
                            } 
                        } 
                    } 
                });
            </script>

        ";

		//Asset Path
		return $script;
	}

	/**
	 * Todo:: Load Innostudio Assets
	 */
	public function innostudioAssets()
	{

		//Asset Path
		$asset = $this->CoreLoad->ext_asset('/extensions/innostudio/');

		$inno = '<link href="' . base_url($asset) . 'dist/font/font-fileuploader.css" rel="stylesheet" type="text/css">';
		$inno .= '<link href="' . base_url($asset) . 'dist/jquery.fileuploader.min.css" rel="stylesheet" type="text/css">';
		$inno .= '<link href="' . base_url($asset) . 'custom.css" rel="stylesheet" type="text/css">';

		$inno .= '<script src="' . base_url($asset) . 'dist/jquery-3.2.1.min.js" type="text/javascript"></script>';
		$inno .= '
                <script type="text/javascript" charset="utf-8">
                   var jQuery3 = jQuery.noConflict();
                </script>';

		$inno .= '<script src="' . base_url($asset) . 'dist/jquery.fileuploader.min.js" type="text/javascript"></script>';

		return $inno;
	}

	/**
	 * Todo:: Load Innostudio Script
	 */
	public function innostudioScript()
	{

		//Asset Path
		$asset = $this->CoreLoad->ext_asset('/extensions/innostudio/');

		$script = '<script src="' . base_url($asset) . 'custom.js" type="text/javascript"></script>';

		//Asset Path
		return $script;
	}

	/**
	 * Todo: Innostudio Upload Class
	 ** This function uses Innostudio Class to upload and return file uploaded path
	 */
	public function innostudioFileUplaod($name, $path = '../assets/media', $allowed = 'jpg|jpeg|png', $default = true)
	{

		//Libarary
		$this->load->library('innostudio');
		$upoadDirectory = $this->CoreCrud->uploadDirecory($path, $default);

		$upload_path = $upoadDirectory[0] . '/'; //Directory
		$file_path = str_replace('../', '', $upoadDirectory[1]) . '/'; //Path

		//Config
		$config = $this->CoreTrigger->uploadSettings();

		//Allowed
		$ext_allowed = explode('|', $allowed);
		$extensions = json_encode($ext_allowed);

		//MaxSize
		$maxSize = $config['max_size'];

		//Uplaod Config Data
		$uploadConfig = array(
			'limit' => null,
			'maxSize' => $maxSize,
			'extensions' => $extensions,
			'uploadDir' => $upload_path,
			'title' => 'name'
		);

		//Upload File
		$uploaded = $this->innostudio->uploadStudio($name, $uploadConfig);

		//Status 
		$status = $uploaded[0];
		$results = $uploaded[1];

		if ($status) {
			//Loop Values
			for ($i = 0; $i < count($results); $i++) {
				$files[$i] = $file_path . $results[$i]['name']; //File Name
			}

			//Files
			$file_link = json_encode($files, true);
		} else {
			$file_link = null;
		}

		return $file_link; //Return Data
	}
}

/** End of file CoreField.php */
/** Location: ./application/models/CoreField.php */
