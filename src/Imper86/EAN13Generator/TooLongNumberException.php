<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 29.08.18
 * Time: 10:56
 */

namespace Imper86\EAN13Generator;


use Throwable;

class TooLongNumberException extends \Exception
{
    public function __construct(string $message = "Entered number is too long", int $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
