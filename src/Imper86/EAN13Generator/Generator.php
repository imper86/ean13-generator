<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 29.08.18
 * Time: 10:55
 */

namespace Imper86\EAN13Generator;


class Generator implements GeneratorInterface
{
    public function generate(string $number, string $prefix = '200'): string
    {
        if (strlen($number) + strlen($prefix) > 12) {
            throw new TooLongNumberException();
        }

        $code = $prefix . str_pad($number, 12 - strlen($prefix), '0', STR_PAD_LEFT);
        $weightFlag = true;
        $sum = 0;

        for ($i = strlen($code) - 1; $i >= 0; $i--) {
            $sum += (int)$code[$i] * ($weightFlag ? 3 : 1);
            $weightFlag = !$weightFlag;
        }

        $code .= (10 - ($sum % 10)) % 10;

        return $code;
    }

}
