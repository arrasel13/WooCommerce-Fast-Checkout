<?php

namespace WooFastCart\Common;
use WooFastCart\Abstracts\ModelAssets;

class Assets extends ModelAssets {

    public function register_admin_scripts() {
    }

    public function register_admin_styles() {
    }

    public function register_frontend_scripts() {
    }

    public function register_frontend_styles() {
        $this->frontend_style_handles = [
            [
                'handle'     => 'wcfc-cart',
                'src'        => WCFC_PUBLIC_ASSETS_URL . 'wcfc-cart.css',
                'dependency' => [

                ],
                'version'    => rand()
            ]
        ];

        foreach ( $this->frontend_style_handles as $data ) {
            wp_register_style( $data['handle'], $data['src'], $data['dependency'], $data['version'] );
        }

        wp_enqueue_style( $this->frontend_style_handles[0]['handle'] );
    }
}