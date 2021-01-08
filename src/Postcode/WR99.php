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
final class WR99
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02006745',
        '1AB' => 'E02006740',
        '1AD' => 'E02006741',
        '1AE' => 'E02006741',
        '1AZ' => 'E02006740',
        '1BA' => 'E02006740',
        '1BB' => 'E02006740',
        '1BR' => 'E02006740',
        '1DA' => 'E02006740',
        '1EA' => 'E02006745',
        '1FP' => 'E02006740',
        '1GA' => 'E02006734',
        '1HA' => 'E02006745',
        '1RA' => 'E02006740',
        '1RP' => 'E02006745',
        '1SP' => 'E02006745',
        '1WY' => 'E02006740',
        '1YA' => 'E02006736',
        '1YB' => 'E02006736',
        '1YS' => 'E02006740',
        '1YT' => 'E02006740',
        '1YU' => 'E02006744',
        '1YW' => 'E02006736',
        '1YX' => 'E02006740',
        '1YY' => 'E02006744',
        '2BB' => 'E02006740',
        '2BR' => 'E02006740',
        '2FP' => 'E02006740',
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
