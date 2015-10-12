<?php

namespace Millennium\Router\Exceptions;

class RouterNotFoundException extends \Exception
{

    public function __construct($message = "Router not found exception", $code = 404, $previous = array())
    {
        parent::__construct($message, $code, $previous);
    }

}
