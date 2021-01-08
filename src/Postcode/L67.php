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
final class L67
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02001354',
        '1AB' => 'E02001354',
        '1AD' => 'E02001374',
        '1AE' => 'E02001482',
        '1AF' => 'E02001354',
        '1AT' => 'E02001396',
        '1AX' => 'E02001396',
        '1BD' => 'E02001396',
        '1BH' => 'E02001396',
        '1BQ' => 'E02006932',
        '1EA' => 'E02006932',
        '1SB' => 'E02001396',
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
