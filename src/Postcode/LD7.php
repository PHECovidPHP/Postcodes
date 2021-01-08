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
final class LD7
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1DY' => 'E02006044',
        '1EA' => 'E02006044',
        '1NB' => 'E02006044',
        '1ND' => 'E02006044',
        '1NE' => 'E02006044',
        '1NF' => 'E02006044',
        '1TN' => 'E02006044',
        '1TP' => 'E02006044',
        '1TR' => 'E02006044',
        '1TS' => 'E02006044',
        '1TU' => 'E02006044',
        '1TW' => 'E02006044',
        '1TY' => 'E02006044',
        '1UA' => 'E02006044',
        '1UB' => 'E02006044',
        '1UD' => 'E02006044',
        '1UE' => 'E02006044',
        '1UF' => 'E02006044',
        '1UW' => 'E02006044',
        '1YS' => 'E02006044',
        '1YU' => 'E02006044',
        '1YY' => 'E02006044',
        '1ZJ' => 'E02006044',
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
