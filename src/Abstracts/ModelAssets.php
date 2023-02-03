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

    public function initialize_asset_paths() {
        $this->frontend_script_handles = [
            [
                'handle'     => 'wcfc-cart',
                'src'        => WCFC_PUBLIC_ASSETS_URL . 'js/wcfc-cart.js',
                'dependency' => [
                    'jquery'
                ],
                'version'    => rand(),
                'in_footer'  => true
            ]
        ];

        $this->frontend_style_handles = [
            [
                'handle'     => 'wcfc-font-awsome',
                'src'        => WCFC_PUBLIC_ASSETS_URL . 'fontawesome/css/fontawesome.css',
                'dependency' => [],
                'version'    => rand()
            ],
            [
                'handle'     => 'wcfc-cart',
                'src'        => WCFC_PUBLIC_ASSETS_URL . 'css/wcfc-cart.css',
                'dependency' => [
                    'wcfc-font-awsome'
                ],
                'version'    => rand()
            ]
        ];
    }
    public function register_admin_scripts() {}

    public function register_admin_styles() {}

    public function register_frontend_scripts() {}

    public function register_frontend_styles() {}
}