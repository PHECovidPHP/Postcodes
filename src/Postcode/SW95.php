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
final class SW95
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '9AA' => 'E02000924',
        '9AB' => 'E02000924',
        '9AD' => 'E02000924',
        '9AE' => 'E02000924',
        '9AF' => 'E02000924',
        '9AG' => 'E02000924',
        '9AH' => 'E02000924',
        '9AJ' => 'E02000924',
        '9AL' => 'E02000924',
        '9AN' => 'E02000924',
        '9AP' => 'E02000924',
        '9AQ' => 'E02000924',
        '9AR' => 'E02000924',
        '9AS' => 'E02000924',
        '9AT' => 'E02000924',
        '9AU' => 'E02000924',
        '9AW' => 'E02000924',
        '9AX' => 'E02000924',
        '9AY' => 'E02000924',
        '9AZ' => 'E02000924',
        '9BA' => 'E02000924',
        '9BB' => 'E02000924',
        '9BD' => 'E02000924',
        '9BE' => 'E02000924',
        '9BF' => 'E02000924',
        '9BG' => 'E02000924',
        '9BH' => 'E02000924',
        '9BJ' => 'E02000924',
        '9BL' => 'E02000924',
        '9BN' => 'E02000924',
        '9BP' => 'E02000924',
        '9BQ' => 'E02000924',
        '9BR' => 'E02000924',
        '9BS' => 'E02000924',
        '9BT' => 'E02000924',
        '9BU' => 'E02000924',
        '9BW' => 'E02000924',
        '9BX' => 'E02000924',
        '9BY' => 'E02000924',
        '9BZ' => 'E02000924',
        '9DA' => 'E02000924',
        '9DB' => 'E02000924',
        '9DD' => 'E02000924',
        '9DE' => 'E02000924',
        '9DF' => 'E02000924',
        '9DG' => 'E02000924',
        '9DH' => 'E02000924',
        '9DJ' => 'E02000924',
        '9DL' => 'E02000924',
        '9DN' => 'E02000924',
        '9DP' => 'E02000924',
        '9DQ' => 'E02000924',
        '9DR' => 'E02000924',
        '9DS' => 'E02000924',
        '9DT' => 'E02000924',
        '9DU' => 'E02000924',
        '9DW' => 'E02000924',
        '9DX' => 'E02000924',
        '9DY' => 'E02000924',
        '9DZ' => 'E02000924',
        '9EA' => 'E02000623',
        '9EB' => 'E02000623',
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
