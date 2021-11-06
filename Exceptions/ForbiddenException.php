<?php 

namespace orpheusohms\phpmvc\Exceptions;

class ForbiddenException extends \Exception
{
    protected $code = 403;
    protected $message = "You don't have permission";
    
}
