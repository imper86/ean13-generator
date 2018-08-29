<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 29.08.18
 * Time: 10:52
 */

namespace Imper86\EAN13Generator;


interface GeneratorInterface
{
    public function generate(string $number, string $prefix = '200'): string;
}
