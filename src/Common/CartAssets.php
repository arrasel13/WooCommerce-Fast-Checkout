<?php

namespace WooFastCart\Common;
use WooFastCart\Abstracts\ModelAssets;
use WooFastCart\Interfaces\FrontAssetInterface;

class CartAssets extends ModelAssets implements FrontAssetInterface{

    public function initialize_asset_paths(){
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

    public function register_frontend_scripts() {
        foreach ( $this->frontend_script_handles as $data ) {
            wp_register_script( $data['handle'], $data['src'], $data['dependency'], $data['version'], $data['in_footer'] );
        }

        wp_enqueue_script( $this->frontend_script_handles[0]['handle'] );
    }

    public function register_frontend_styles() {
        foreach ( $this->frontend_style_handles as $data ) {
            wp_register_style( $data['handle'], $data['src'], $data['dependency'], $data['version'] );
        }

        wp_enqueue_style( $this->frontend_style_handles[1]['handle'] );
    }
}