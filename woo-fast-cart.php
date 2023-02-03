<?php
/**
 * Plugin Name: WooCommerce Fast Cart
 * Plugin URI:  www.facebook.com
 * Description: Fast cart for woocommerce
 * Version:     0.0.0
 * Author:      Cupid Chakma
 * Author URI:  www.facebook.com
 * Text Domain: wcfc-lite
 * Domain Path: /languages
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 *
 * @package     WooCommerce Fast Checkout
 * @author      Cupid Chakma
 * @copyright   2023 WFC
 * @license     GPL-2.0+
 *
 * Prefix: WFC
 */

require_once __DIR__ . '/vendor/autoload.php';

use WooFastCart\PublicDir\Cart;

final class WCFC {

    static $singleton = null;

    public $container = [];

    private $constants;

    private $classes;

    public function __construct() {
        $this->define_constants();
        $this->initialize_core_services();
    }

    public static function init() {
        if ( self::$singleton == null ) {
            self::$singleton = new self();
        }
        return self::$singleton;
    }

    public function define_constants() {
        $this->constants = [
            'WCFC_VIEWS_PATH'         => __DIR__ . '/views/',
            'WCFC_ASSETS_PATH'        => __DIR__ . '/assets/',
            'WCFC_ASSETS_ADMIN_PATH'  => __DIR__ . '/assets/admin/',
            'WCFC_ASSETS_PUBLIC_PATH' => __DIR__ . '/assets/public/',
            'WCFC_SRC_PATH'           => __DIR__ . '/src/',
            'WCFC_SRC_PUBLIC_PATH'    => __DIR__ . '/src/Admin/',
            'WRF_SRC_ADMIN_PATH'      => __DIR__ . '/src/Public',
            'WCFC_ADMIN_ASSETS_URL'   => plugin_dir_url( __FILE__ ) . 'assets/admin/',
            'WCFC_PUBLIC_ASSETS_URL'  => plugin_dir_url( __FILE__ ) . 'assets/public/'
        ];

        foreach ( $this->constants as $constant_key => $constant_value ) {
            define( $constant_key, $constant_value );
        }
    }

    public function initialize_core_services() {
        $this->classes = [
            'WooFastCart\Common\Assets',
            'WooFastCart\PublicDir\Cart'
        ];

        foreach ( $this->classes as $class ) {
            array_push( $this->container, new $class() );
        }

        return $this->container;
    }
}

function WCFC() {
    return WCFC::init();
}

WCFC();