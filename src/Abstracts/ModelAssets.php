<?php

namespace WooFastCart\Abstracts;

abstract class ModelAssets {

    private $admin_style_handles;

    private $admin_script_handles;

    public $frontend_script_handles;

    public $frontend_style_handles;

    abstract function initialize_asset_paths();
}