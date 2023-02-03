<?php

namespace WooFastCart\Abstracts;

abstract class ModelAssets {

    public $admin_style_handles;

    public $admin_script_handles;

    public $frontend_script_handles;

    public $frontend_style_handles;

    public function __construct() {
        if ( is_admin() ) {
            add_action( 'admin_enqueue_scripts', [$this, 'register_admin_scripts'], 10 );
            add_action( 'admin_enqueue_scripts', [$this, 'register_admin_styles'], 10 );
        } else {
            add_action( 'wp_enqueue_scripts', [$this, 'register_frontend_scripts'], 10 );
            add_action( 'wp_enqueue_scripts', [$this, 'register_frontend_styles'], 10 );
        }
    }

    public function register_admin_scripts() {}

    public function register_admin_styles() {}

    public function register_frontend_scripts() {}

    public function register_frontend_styles() {}
}