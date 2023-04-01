<?php

namespace WooFastCart\Interfaces;

interface AdminAssetInterface{
    public function initalize_sctipt_hooks();
    public function register_admin_scripts();
    public function register_admin_styles();
}