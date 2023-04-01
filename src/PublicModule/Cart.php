<?php

namespace WooFastCart\PublicModule;
use WooFastCart\Common\TemplateLoader;

class Cart {
    public function __construct() {
        add_action( 'wp_footer', [$this, 'render_cart_markup'] );
    }

    public function render_cart_markup() {
        WCFC()->container[TemplateLoader::class]->setAbsolutePath('views')->setFileName('cart.php')->renderTemplate(true);
    }
}