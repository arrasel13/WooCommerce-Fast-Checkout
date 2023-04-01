<?php

namespace WooFastCart\Common;
use Elementor\Data\V2\Base\Exceptions\WP_Error_Exception;
use WooFastCart\Exceptions\TemplateException;

class TemplateLoader {

    static $instance = null;

    static $file_name;

    static $file_path;

    static $file_paths = [];

    static $filename = [];

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
        if ( self::$instance == null ) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function setAbsolutePath( $path ) {
        try{
            if ( ! isset( self::$file_paths[$path] ) ) {
                throw new TemplateException('Folder Path '.$path.' Does Not Exist ! Available Paths Values Are "views, assets, admin-assets, front-assets, src, src-admin, src-public"');
            }
            self::$file_path = $path;
            return $this;
        } catch( TemplateException $e) {
            throw new \Exception( $e->getMessage() );
        }
       
    }

    public function setFileName( $inputFileName, $folderName = '' ) {
        try{
            if( empty( $inputFileName ) ) {
                throw new TemplateException("File Name Must Not Be Empty !");
            }

            if( ! isset( explode( '.',$inputFileName )[1] ) ) {
                throw new TemplateException("PHP Extension Missing !");
            }

            if( explode( '.',$inputFileName )[1] !== 'php' ) {
                throw new TemplateException("Filename Must Contain PHP extension !");
            }

            self::$file_name                  = $inputFileName;
            self::$filename[self::$file_name] = $folderName . '/' . self::$file_name;

            return $this;
        } catch( TemplateException $e ) {
            throw new \Exception( $e->getMessage() );
        }
       
    }

    public function renderTemplate( $value ) {
        if ( $value === true ) {
            try{
                if( ! file_exists( self::$file_paths[self::$file_path] . self::$filename[self::$file_name] ) ) {
                    throw new TemplateException("File Does Not Exist");
                }
                require_once self::$file_paths[self::$file_path] . self::$filename[self::$file_name];
            } catch( TemplateException $e ) {
                throw new \Exception( $e->getMessage() );
            }
        }
    }
}