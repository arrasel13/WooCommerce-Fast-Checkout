<?php

namespace WooFastCart\Exceptions;

class TemplateException extends \Exception{

    protected $message;

    public function __construct( $message = '' ) {
        parent::__construct( $message );
    }
}