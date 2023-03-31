<?php

namespace WooFastCart\Common;

class TemplateLoader{

    static $instance = null;

    static $counter = 0;

    static $file_name;

    static $file_path;

    static $file_paths = [];

    static $filename   = [];

    public function __construct() {
        self::$file_paths['views']        = WCFC_VIEWS_PATH;
        self::$file_paths['assets']       = WCFC_ASSETS_PATH;
        self::$file_paths['admin-assets'] = WCFC_ASSETS_ADMIN_PATH;
        self::$file_paths['front-assets'] = WCFC_ASSETS_PUBLIC_PATH;
        self::$file_paths['src']          = WCFC_SRC_PATH;
        self::$file_paths['src-admin']    = WRF_SRC_ADMIN_PATH;
        self::$file_paths['src-public']   = WCFC_SRC_PUBLIC_PATH;
    }

    public static function init() {
        if( self::$instance == null ) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function setAbsolutePath( $path ) {
        if( isset( self::$file_paths[$path] ) ) {
            self::$file_path = $path;
            return $this;
        }
    }

    public function setFileName( $filename2, $folderName = '' ) {
        if( ! empty( $filename2 ) && ! empty( $folderName ) ) {
            self::$file_name = $filename2;
            self::$filename[self::$file_name] = $folderName.'/'. self::$file_name;
        } else {
            self::$file_name = $filename2;
            self::$filename[self::$file_name] = self::$file_name;
        }
        return $this;
    }

    public function renderTemplate( $value ) {
        if( $value === true ) {
            require_once( self::$file_paths[self::$file_path] . self::$filename[self::$file_name] );
        }
    }
}