<?php

/**
 * Description of Cloudinary_lib
 *
 * @author Omoloye Tohir <otcleantech@gmail.com>
 */
class Cloudinary_lib {

    public function __construct() {
        $this->_loadConfig();
    }

    /**
     * Config
     */
    private function _loadConfig() {
        \Cloudinary::config(
                [
                    "cloud_name" => "your_cloud_name",
                    "api_key" => "your_api_key",
                    "api_secret" => "your_secret_key"
        ]);
    }

    /**
     * This does the actual upload to your cloudinary account
     * 
     * @param type $file Path of file to be uploaded
     * @return type array
     */
    public function doUpload($file) {
        return \Cloudinary\Uploader::upload($file);
    }

}
