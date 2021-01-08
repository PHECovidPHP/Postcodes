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
final class DN38
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '6AA' => 'E02002752',
        '6AB' => 'E02002752',
        '6AD' => 'E02002752',
        '6AE' => 'E02002752',
        '6AF' => 'E02002752',
        '6AG' => 'E02005492',
        '6AH' => 'E02005492',
        '6AJ' => 'E02005492',
        '6AL' => 'E02005492',
        '6AN' => 'E02005492',
        '6AP' => 'E02005492',
        '6AQ' => 'E02005492',
        '6AR' => 'E02005492',
        '6AS' => 'E02005492',
        '6AT' => 'E02005492',
        '6AU' => 'E02005492',
        '6AW' => 'E02005492',
        '6AX' => 'E02005492',
        '6AY' => 'E02005492',
        '6AZ' => 'E02005492',
        '6BA' => 'E02005492',
        '6BB' => 'E02005492',
        '6BD' => 'E02005492',
        '6BE' => 'E02005492',
        '6BF' => 'E02002752',
        '6BG' => 'E02005492',
        '6BH' => 'E02005492',
        '6BJ' => 'E02005492',
        '6BL' => 'E02005492',
        '6BN' => 'E02005492',
        '6BP' => 'E02005492',
        '6BQ' => 'E02005492',
        '6BW' => 'E02005492',
        '6BX' => 'E02005492',
        '6DA' => 'E02005492',
        '6DB' => 'E02002752',
        '6DD' => 'E02002752',
        '6DE' => 'E02005492',
        '6DF' => 'E02002752',
        '6DG' => 'E02002752',
        '6DH' => 'E02002752',
        '6DJ' => 'E02002752',
        '6DL' => 'E02002752',
        '6DN' => 'E02002759',
        '6DP' => 'E02002752',
        '6DQ' => 'E02002752',
        '6DR' => 'E02002752',
        '6DS' => 'E02002752',
        '6DT' => 'E02002752',
        '6DU' => 'E02002752',
        '6DW' => 'E02002752',
        '6DX' => 'E02002752',
        '6DY' => 'E02002752',
        '6DZ' => 'E02002752',
        '6EA' => 'E02002752',
        '6EB' => 'E02002752',
        '6ED' => 'E02002752',
        '6EE' => 'E02005492',
        '6EH' => 'E02005492',
        '6EL' => 'E02002752',
        '6EN' => 'E02005492',
        '6EP' => 'E02005492',
        '6ER' => 'E02005492',
        '6ES' => 'E02005492',
        '6ET' => 'E02005492',
        '6EU' => 'E02005492',
        '6EW' => 'E02005492',
        '6EX' => 'E02005492',
        '6EY' => 'E02005492',
        '6FB' => 'E02005492',
        '6FD' => 'E02002752',
        '6FE' => 'E02002752',
        '6FF' => 'E02002752',
        '6FG' => 'E02002752',
        '6FH' => 'E02005492',
        '6GE' => 'E02002752',
        '6GF' => 'E02005492',
        '6GG' => 'E02002752',
        '6HF' => 'E02002752',
        '6HG' => 'E02002752',
        '6HH' => 'E02002752',
        '6HJ' => 'E02002752',
        '6HL' => 'E02002752',
        '6HN' => 'E02002752',
        '6HP' => 'E02002752',
        '6HQ' => 'E02002752',
        '6HR' => 'E02002752',
        '6HS' => 'E02002752',
        '6HT' => 'E02002752',
        '6HU' => 'E02002752',
        '6HW' => 'E02002752',
        '6HX' => 'E02002752',
        '6HY' => 'E02002752',
        '6HZ' => 'E02002752',
        '6JA' => 'E02002752',
        '6JB' => 'E02002752',
        '6JD' => 'E02002752',
        '6JE' => 'E02002752',
        '6JF' => 'E02002752',
        '6JG' => 'E02002752',
        '6JH' => 'E02002752',
        '6JJ' => 'E02002752',
        '6JL' => 'E02002752',
        '6JN' => 'E02002752',
        '6JP' => 'E02002752',
        '6JQ' => 'E02002752',
        '6JR' => 'E02002752',
        '6JS' => 'E02002752',
        '6JW' => 'E02002752',
        '6JX' => 'E02002752',
        '6JY' => 'E02002752',
        '6LA' => 'E02002752',
        '6LB' => 'E02002752',
        '6LD' => 'E02002759',
        '6LE' => 'E02002759',
        '6LG' => 'E02002752',
        '6WA' => 'E02002759',
        '6WX' => 'E02002759',
        '6WY' => 'E02002759',
        '6WZ' => 'E02002759',
        '6XA' => 'E02002759',
        '6XB' => 'E02002759',
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