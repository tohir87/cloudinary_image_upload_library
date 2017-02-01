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
                    "cloud_name" => "zendsoft",
                    "api_key" => "792213122617758",
                    "api_secret" => "B57x_BFqsjK-9r2BGClVIAcUy3Q"
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
