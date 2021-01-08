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
final class CH30
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '9AA' => 'E02001484',
        '9AB' => 'E02001484',
        '9AD' => 'E02001484',
        '9AE' => 'E02001484',
        '9AF' => 'E02001484',
        '9AG' => 'E02001484',
        '9AH' => 'E02001484',
        '9AJ' => 'E02001484',
        '9AL' => 'E02001484',
        '9AN' => 'E02001484',
        '9AP' => 'E02001484',
        '9AQ' => 'E02001484',
        '9AR' => 'E02001484',
        '9AS' => 'E02001484',
        '9AT' => 'E02001484',
        '9AU' => 'E02001484',
        '9AW' => 'E02001484',
        '9AX' => 'E02001484',
        '9AY' => 'E02001484',
        '9AZ' => 'E02001484',
        '9BA' => 'E02001484',
        '9BB' => 'E02001484',
        '9BD' => 'E02001484',
        '9BE' => 'E02001484',
        '9BF' => 'E02001484',
        '9BG' => 'E02001484',
        '9BH' => 'E02001484',
        '9BJ' => 'E02001484',
        '9BL' => 'E02001484',
        '9BN' => 'E02001484',
        '9BP' => 'E02001484',
        '9BQ' => 'E02001484',
        '9BR' => 'E02001484',
        '9BS' => 'E02001484',
        '9BT' => 'E02001484',
        '9BU' => 'E02001484',
        '9BW' => 'E02001484',
        '9BX' => 'E02001484',
        '9BY' => 'E02001484',
        '9BZ' => 'E02001484',
        '9DA' => 'E02001484',
        '9DB' => 'E02001484',
        '9DD' => 'E02001484',
        '9DE' => 'E02001484',
        '9DF' => 'E02001484',
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
