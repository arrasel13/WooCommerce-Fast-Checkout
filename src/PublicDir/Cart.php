<?php

namespace WooFastCart\PublicDir;

class Cart {
    public function __construct() {
        add_action( 'wp_footer', [$this, 'render_cart_markup'] );
    }

    public function render_cart_markup() {
        require_once WCFC_VIEWS_PATH . 'cart.php';
    }
}