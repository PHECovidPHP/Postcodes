<?php

declare(strict_types=1);

/*
 * This file is part of the PHE Postcode to MSOA.
 *
 * (c) Graham Campbell <graham@alt-three.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHECovid\Postcodes\Postcode;

/**
 * @internal
 *
 * @author Graham Campbell <graham@alt-three.com>
 */
final class SN99
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '8AA' => 'E02003234',
        '8AB' => 'E02003234',
        '8AD' => 'E02003234',
        '8AE' => 'E02003234',
        '8AF' => 'E02003234',
        '8AG' => 'E02003234',
        '8AH' => 'E02003234',
        '8AJ' => 'E02003234',
        '8AL' => 'E02003234',
        '8AN' => 'E02003234',
        '8AP' => 'E02003234',
        '8AQ' => 'E02003234',
        '8AR' => 'E02003234',
        '8AS' => 'E02003234',
        '8AT' => 'E02003234',
        '8AU' => 'E02003234',
        '8AW' => 'E02003234',
        '8AX' => 'E02003234',
        '9AB' => 'E02003226',
        '9AD' => 'E02003234',
        '9AE' => 'E02003234',
        '9JB' => 'E02003226',
        '9LB' => 'E02003226',
        '9NB' => 'E02003226',
        '9PB' => 'E02003226',
        '9RB' => 'E02003226',
        '9TB' => 'E02003226',
        '9WB' => 'E02003226',
        '9XX' => 'E02003226',
    ];

    /**
     * @param string $inwardCode
     *
     * @return string
     */
    public static function lookup(string $inwardCode): string
    {
        $msoaCode = self::MAP[$inwardCode] ?? null;

        if (null === $msoaCode) {
            throw new \InvalidArgumentException('Unknown inward code.');
        }

        return $msoaCode;
    }
}
