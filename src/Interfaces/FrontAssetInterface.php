<?php

namespace WooFastCart\Interfaces;

interface FrontAssetInterface {
    public function initalize_sctipt_hooks();
    public function register_frontend_scripts();
    public function register_frontend_styles();
}