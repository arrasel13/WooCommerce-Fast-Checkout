<?php

namespace WooFastCart\Abstracts;

abstract class ModelAssets {

    private $admin_style_handles;

    private $admin_script_handles;

    public $frontend_script_handles;

    public $frontend_style_handles;

    public function __construct() {
        if ( is_admin() ) {
            add_action( 'admin_enqueue_scripts', [$this, 'register_admin_scripts'], 10 );
            add_action( 'admin_enqueue_scripts', [$this, 'register_admin_styles'], 10 );
        } else {
            $this->initialize_asset_paths();
            add_action( 'wp_enqueue_scripts', [$this, 'register_frontend_scripts'], 10 );
            add_action( 'wp_enqueue_scripts', [$this, 'register_frontend_styles'], 10 );
        }
    }

    abstract function initialize_asset_paths();
}