<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Innostudio
{

	// Constract -- 
    public function __construct()
    {
        require_once APPPATH.'third_party/class.fileuploader.php';
    }

    //Upload Class
    public function uploadStudio($fileName,$configData)
    {

    	//Upload Path
    	// $uploadPath = APPPATH.'../assets/media';

		// initialize FileUploader
	    $FileUploader = new FileUploader($fileName, $configData);

		// unlink the files
		// !important only for preloaded files
		// you will need to give the array with appendend files in 'files' option of the FileUploader
		foreach($FileUploader->getRemovedFiles('file') as $key=>$value) {
			unlink($uploadPath. $value['name']);
		}
		
		// call to upload the files
	    $data = $FileUploader->upload();
	    
	    // if uploaded and success
	    if($data['isSuccess'] && count($data['files']) > 0) {
	        // get uploaded files
	        $uploadedFiles = $data['files'];
	    }
	    // if warnings
		if($data['hasWarnings']) {
	        // get warnings
	        $warnings = $data['warnings'];
	        
	        return array(false,$warnings);
	    }
		
		// get the fileList
		$fileList = $FileUploader->getFileList();
		
		// show
	    return array(true,$fileList);
    }
}

/* End of file Innostudio.php */
/* Location: ./application/libraries/Innostudio.php */
