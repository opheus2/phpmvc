<?php 

namespace orpheusohms\phpmvc\Exceptions;

class NotFoundException extends \Exception
{
    protected $code = 404;
    protected $message = "Not found";
}
