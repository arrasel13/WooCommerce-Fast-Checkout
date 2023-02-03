<?php

namespace WooFastCart\Common;
use WooFastCart\Abstracts\ModelAssets;

class Assets extends ModelAssets {

    public function register_admin_scripts() {
    }

    public function register_admin_styles() {
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