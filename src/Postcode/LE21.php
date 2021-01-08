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
final class LE21
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '3AA' => 'E02006851',
        '3AB' => 'E02006851',
        '3AD' => 'E02006851',
        '3AE' => 'E02006851',
        '3AF' => 'E02006851',
        '3AG' => 'E02006851',
        '3AH' => 'E02006851',
        '3AJ' => 'E02006851',
        '3AL' => 'E02006851',
        '3AN' => 'E02006851',
        '3AP' => 'E02006851',
        '3AQ' => 'E02006851',
        '3AR' => 'E02006851',
        '3AS' => 'E02006851',
        '3AT' => 'E02006851',
        '3AU' => 'E02006851',
        '3AW' => 'E02006851',
        '3AX' => 'E02006851',
        '3AY' => 'E02006851',
        '3AZ' => 'E02006851',
        '3BA' => 'E02006851',
        '3BB' => 'E02006851',
        '3BD' => 'E02006851',
        '3BE' => 'E02006851',
        '3BF' => 'E02006851',
        '3BG' => 'E02006851',
        '3BH' => 'E02006851',
        '3BJ' => 'E02006851',
        '3BL' => 'E02006851',
        '3BN' => 'E02006851',
        '3BP' => 'E02006851',
        '3BQ' => 'E02006851',
        '3BR' => 'E02006851',
        '3BS' => 'E02006851',
        '3BT' => 'E02006851',
        '3BU' => 'E02006851',
        '3BW' => 'E02006851',
        '3BX' => 'E02006851',
        '3BY' => 'E02006851',
        '3BZ' => 'E02006851',
        '3DA' => 'E02006851',
        '3DB' => 'E02006851',
        '3DD' => 'E02006851',
        '3DE' => 'E02006851',
        '3DF' => 'E02006851',
        '3DG' => 'E02006851',
        '3DH' => 'E02006851',
        '3DJ' => 'E02006851',
        '3DL' => 'E02006851',
        '3DN' => 'E02006851',
        '3DP' => 'E02006851',
        '3DQ' => 'E02006851',
        '3DR' => 'E02006851',
        '3DS' => 'E02006851',
        '3DT' => 'E02006851',
        '3DU' => 'E02006851',
        '3DW' => 'E02006851',
        '3DX' => 'E02006851',
        '3DY' => 'E02006851',
        '3DZ' => 'E02006851',
        '3EA' => 'E02006851',
        '3EB' => 'E02006851',
        '3ED' => 'E02006851',
        '3EE' => 'E02006851',
        '3EF' => 'E02006851',
        '3EG' => 'E02006851',
        '3EH' => 'E02006851',
        '3EJ' => 'E02006851',
        '3EL' => 'E02006851',
        '3EN' => 'E02006851',
        '3EP' => 'E02006851',
        '3EQ' => 'E02006851',
        '3ER' => 'E02006851',
        '3ES' => 'E02006851',
        '3ET' => 'E02006851',
        '3EU' => 'E02006851',
        '3EX' => 'E02006851',
        '3EY' => 'E02006851',
        '3EZ' => 'E02006851',
        '3FA' => 'E02006851',
        '3FB' => 'E02006851',
        '3FD' => 'E02006851',
        '3FE' => 'E02006851',
        '3FF' => 'E02006851',
        '4AB' => 'E02006851',
        '4AE' => 'E02006851',
        '4AF' => 'E02006851',
        '4AG' => 'E02006851',
        '4AH' => 'E02006851',
        '4AJ' => 'E02006851',
        '4AL' => 'E02006851',
        '4AN' => 'E02006851',
        '4AP' => 'E02006851',
        '4AQ' => 'E02006851',
        '4AR' => 'E02006851',
        '4AS' => 'E02006851',
        '4AT' => 'E02006851',
        '4AU' => 'E02006851',
        '4AW' => 'E02006851',
        '4AX' => 'E02006851',
        '4AY' => 'E02006851',
        '4AZ' => 'E02006851',
        '4BA' => 'E02006851',
        '4BB' => 'E02006851',
        '4BD' => 'E02006851',
        '4BE' => 'E02006851',
        '4BF' => 'E02006851',
        '4BG' => 'E02006851',
        '4BJ' => 'E02006851',
        '4BL' => 'E02006851',
        '4BN' => 'E02006851',
        '4BP' => 'E02006851',
        '4BQ' => 'E02006851',
        '4BR' => 'E02006851',
        '4BS' => 'E02006851',
        '4BT' => 'E02006851',
        '4BU' => 'E02006851',
        '4BW' => 'E02006851',
        '4BX' => 'E02006851',
        '4BY' => 'E02006851',
        '4BZ' => 'E02006851',
        '4DA' => 'E02006851',
        '4DB' => 'E02006851',
        '4DD' => 'E02006851',
        '4DE' => 'E02006851',
        '4DF' => 'E02006851',
        '4DG' => 'E02006851',
        '4DH' => 'E02006851',
        '4DJ' => 'E02006851',
        '4DL' => 'E02006851',
        '4DN' => 'E02006851',
        '4DP' => 'E02006851',
        '4DQ' => 'E02006851',
        '4DR' => 'E02006851',
        '4DS' => 'E02006851',
        '4DT' => 'E02006851',
        '4DU' => 'E02006851',
        '4DW' => 'E02006851',
        '4DX' => 'E02006851',
        '4DY' => 'E02006851',
        '4DZ' => 'E02006851',
        '4EA' => 'E02006851',
        '4EB' => 'E02006851',
        '4ED' => 'E02006851',
        '4EE' => 'E02006851',
        '4EF' => 'E02006851',
        '4EG' => 'E02006851',
        '9AA' => 'E02006851',
        '9AB' => 'E02006851',
        '9AD' => 'E02006851',
        '9AE' => 'E02006851',
        '9AF' => 'E02006851',
        '9AG' => 'E02006851',
        '9AH' => 'E02006851',
        '9AJ' => 'E02005336',
        '9AL' => 'E02006851',
        '9AN' => 'E02006851',
        '9AP' => 'E02006851',
        '9AQ' => 'E02006851',
        '9AR' => 'E02006851',
        '9AS' => 'E02006851',
        '9AT' => 'E02006851',
        '9AU' => 'E02006851',
        '9AW' => 'E02006851',
        '9AY' => 'E02006851',
        '9AZ' => 'E02006851',
        '9BA' => 'E02006851',
        '9BB' => 'E02006851',
        '9BD' => 'E02006851',
        '9BE' => 'E02006851',
        '9BF' => 'E02006851',
        '9BG' => 'E02006851',
        '9BH' => 'E02006851',
        '9BJ' => 'E02006851',
        '9BL' => 'E02006851',
        '9BN' => 'E02005336',
        '9BP' => 'E02006851',
        '9BQ' => 'E02006851',
        '9BR' => 'E02006851',
        '9BS' => 'E02006851',
        '9BT' => 'E02006851',
        '9BU' => 'E02006851',
        '9BW' => 'E02006851',
        '9BX' => 'E02006851',
        '9BY' => 'E02006851',
        '9BZ' => 'E02006851',
        '9DA' => 'E02006851',
        '9DB' => 'E02006851',
        '9DD' => 'E02006851',
        '9DE' => 'E02006851',
        '9DF' => 'E02006851',
        '9DG' => 'E02005336',
        '9DH' => 'E02006851',
        '9DJ' => 'E02006851',
        '9DL' => 'E02006851',
        '9DP' => 'E02005336',
        '9DR' => 'E02006851',
        '9DS' => 'E02006851',
        '9DT' => 'E02006851',
        '9DU' => 'E02006851',
        '9DW' => 'E02006851',
        '9DX' => 'E02006851',
        '9DZ' => 'E02006851',
        '9EA' => 'E02006851',
        '9EB' => 'E02005336',
        '9ED' => 'E02006851',
        '9EE' => 'E02006851',
        '9EF' => 'E02006851',
        '9EG' => 'E02006851',
        '9EH' => 'E02006851',
        '9EJ' => 'E02006851',
        '9EL' => 'E02006851',
        '9EN' => 'E02006851',
        '9EP' => 'E02005336',
        '9EQ' => 'E02006851',
        '9ER' => 'E02006851',
        '9ES' => 'E02005336',
        '9ET' => 'E02006851',
        '9EU' => 'E02006851',
        '9EW' => 'E02006851',
        '9EX' => 'E02006851',
        '9EY' => 'E02006851',
        '9EZ' => 'E02006851',
        '9FA' => 'E02006851',
        '9FB' => 'E02005336',
        '9FD' => 'E02006851',
        '9FE' => 'E02006851',
        '9FF' => 'E02005336',
        '9FG' => 'E02005336',
        '9FH' => 'E02005336',
        '9FJ' => 'E02005336',
        '9FL' => 'E02005336',
        '9FN' => 'E02005336',
        '9PH' => 'E02006851',
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
