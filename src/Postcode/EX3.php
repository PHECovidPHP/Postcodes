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
final class EX3
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02004163',
        '0AB' => 'E02004163',
        '0AD' => 'E02004163',
        '0AE' => 'E02004163',
        '0AF' => 'E02004163',
        '0AG' => 'E02004163',
        '0AH' => 'E02004163',
        '0AJ' => 'E02004163',
        '0AL' => 'E02004163',
        '0AN' => 'E02004163',
        '0AP' => 'E02004163',
        '0AQ' => 'E02004163',
        '0AR' => 'E02004163',
        '0AS' => 'E02004163',
        '0AT' => 'E02004163',
        '0AU' => 'E02004163',
        '0AW' => 'E02004163',
        '0AX' => 'E02004163',
        '0AY' => 'E02004163',
        '0AZ' => 'E02004163',
        '0BA' => 'E02004163',
        '0BB' => 'E02004163',
        '0BD' => 'E02004163',
        '0BE' => 'E02004163',
        '0BG' => 'E02004163',
        '0BH' => 'E02004159',
        '0BL' => 'E02004163',
        '0BN' => 'E02004163',
        '0BP' => 'E02004163',
        '0BQ' => 'E02004163',
        '0BR' => 'E02004163',
        '0BS' => 'E02004163',
        '0BT' => 'E02004163',
        '0BU' => 'E02004163',
        '0BW' => 'E02004163',
        '0BX' => 'E02004163',
        '0BY' => 'E02004163',
        '0BZ' => 'E02004163',
        '0DA' => 'E02004163',
        '0DB' => 'E02004142',
        '0DD' => 'E02004163',
        '0DE' => 'E02004142',
        '0DF' => 'E02004142',
        '0DG' => 'E02004163',
        '0DH' => 'E02004163',
        '0DJ' => 'E02004163',
        '0DL' => 'E02004163',
        '0DN' => 'E02004163',
        '0DP' => 'E02004163',
        '0DQ' => 'E02004163',
        '0DR' => 'E02004163',
        '0DS' => 'E02004163',
        '0DT' => 'E02004163',
        '0DU' => 'E02004163',
        '0DW' => 'E02004163',
        '0DX' => 'E02004163',
        '0DY' => 'E02004163',
        '0DZ' => 'E02004163',
        '0EA' => 'E02004163',
        '0EB' => 'E02004163',
        '0ED' => 'E02004163',
        '0EE' => 'E02004163',
        '0EF' => 'E02004163',
        '0EG' => 'E02004163',
        '0EH' => 'E02004163',
        '0EJ' => 'E02004163',
        '0EL' => 'E02004163',
        '0EN' => 'E02004163',
        '0EP' => 'E02004163',
        '0EQ' => 'E02004163',
        '0ER' => 'E02004163',
        '0ES' => 'E02004163',
        '0ET' => 'E02004163',
        '0EU' => 'E02004163',
        '0EW' => 'E02004163',
        '0EX' => 'E02004163',
        '0EY' => 'E02004163',
        '0EZ' => 'E02004163',
        '0FA' => 'E02004142',
        '0FB' => 'E02004163',
        '0FD' => 'E02004142',
        '0FF' => 'E02004163',
        '0FG' => 'E02004163',
        '0FH' => 'E02004163',
        '0FJ' => 'E02004163',
        '0FL' => 'E02004163',
        '0HA' => 'E02004163',
        '0HB' => 'E02004163',
        '0HD' => 'E02004163',
        '0HE' => 'E02004163',
        '0HF' => 'E02004163',
        '0HG' => 'E02004163',
        '0HH' => 'E02004163',
        '0HJ' => 'E02004163',
        '0HL' => 'E02004163',
        '0HN' => 'E02004163',
        '0HP' => 'E02004163',
        '0HQ' => 'E02004163',
        '0HR' => 'E02004163',
        '0HS' => 'E02004163',
        '0HT' => 'E02004163',
        '0HU' => 'E02004163',
        '0HW' => 'E02004163',
        '0HX' => 'E02004163',
        '0HY' => 'E02004163',
        '0HZ' => 'E02004163',
        '0JA' => 'E02004163',
        '0JB' => 'E02004163',
        '0JD' => 'E02004163',
        '0JE' => 'E02004163',
        '0JF' => 'E02004163',
        '0JG' => 'E02004163',
        '0JH' => 'E02004163',
        '0JJ' => 'E02004163',
        '0JL' => 'E02004163',
        '0JN' => 'E02004163',
        '0JP' => 'E02004163',
        '0JQ' => 'E02004163',
        '0JR' => 'E02004163',
        '0JS' => 'E02004163',
        '0JT' => 'E02004163',
        '0JU' => 'E02004163',
        '0JW' => 'E02004163',
        '0JZ' => 'E02004163',
        '0LA' => 'E02004163',
        '0LB' => 'E02004163',
        '0LD' => 'E02004163',
        '0LE' => 'E02004163',
        '0LF' => 'E02004163',
        '0LG' => 'E02004163',
        '0LH' => 'E02004163',
        '0LJ' => 'E02004163',
        '0LL' => 'E02004163',
        '0LN' => 'E02004163',
        '0LP' => 'E02004163',
        '0LQ' => 'E02004163',
        '0LR' => 'E02004163',
        '0LS' => 'E02004163',
        '0LT' => 'E02004163',
        '0LU' => 'E02004163',
        '0LW' => 'E02004163',
        '0LX' => 'E02004163',
        '0LY' => 'E02004163',
        '0LZ' => 'E02004163',
        '0NA' => 'E02004163',
        '0NB' => 'E02004163',
        '0ND' => 'E02004163',
        '0NE' => 'E02004163',
        '0NJ' => 'E02004142',
        '0NL' => 'E02004142',
        '0NN' => 'E02004142',
        '0NP' => 'E02004142',
        '0NR' => 'E02004142',
        '0NS' => 'E02004142',
        '0NT' => 'E02004142',
        '0NU' => 'E02004142',
        '0NW' => 'E02004142',
        '0NX' => 'E02004142',
        '0NY' => 'E02004142',
        '0NZ' => 'E02004142',
        '0PA' => 'E02004142',
        '0PB' => 'E02004142',
        '0PD' => 'E02004142',
        '0PE' => 'E02004142',
        '0PF' => 'E02004142',
        '0PG' => 'E02004142',
        '0PH' => 'E02004142',
        '0PJ' => 'E02004142',
        '0PL' => 'E02004142',
        '0PN' => 'E02004142',
        '0PP' => 'E02004142',
        '0PQ' => 'E02004142',
        '0PR' => 'E02004142',
        '0PS' => 'E02004142',
        '0PT' => 'E02004142',
        '0PU' => 'E02004142',
        '0PW' => 'E02004142',
        '0PX' => 'E02004142',
        '0PY' => 'E02004142',
        '0PZ' => 'E02004142',
        '0QB' => 'E02004142',
        '0QF' => 'E02004163',
        '0QG' => 'E02004142',
        '0QH' => 'E02004142',
        '0QJ' => 'E02004142',
        '0QL' => 'E02004142',
        '0QN' => 'E02004142',
        '0QP' => 'E02004142',
        '0QQ' => 'E02004163',
        '0QR' => 'E02004142',
        '0QS' => 'E02004142',
        '0QT' => 'E02004142',
        '0QU' => 'E02004142',
        '0QW' => 'E02004142',
        '0QX' => 'E02004142',
        '0QY' => 'E02004142',
        '0QZ' => 'E02004142',
        '0RA' => 'E02004142',
        '0RB' => 'E02004142',
        '0RD' => 'E02004142',
        '0RE' => 'E02004142',
        '0RF' => 'E02004142',
        '0RG' => 'E02004142',
        '0RH' => 'E02004142',
        '0RJ' => 'E02004142',
        '0RL' => 'E02004142',
        '0RN' => 'E02004142',
        '0RP' => 'E02004159',
        '0RR' => 'E02004142',
        '0RS' => 'E02004142',
        '0RU' => 'E02004142',
        '0RW' => 'E02004142',
        '0RX' => 'E02004142',
        '0RY' => 'E02004142',
        '0TR' => 'E02004142',
        '0WA' => 'E02004159',
        '0WB' => 'E02004159',
        '0WD' => 'E02004159',
        '0WG' => 'E02004159',
        '0WH' => 'E02004159',
        '0WP' => 'E02004159',
        '0WQ' => 'E02004159',
        '0WR' => 'E02004159',
        '0WS' => 'E02004159',
        '0WT' => 'E02004159',
        '0WU' => 'E02004159',
        '0WW' => 'E02004159',
        '0WX' => 'E02004159',
        '0WY' => 'E02004159',
        '0WZ' => 'E02004159',
        '0XA' => 'E02004159',
        '0XJ' => 'E02004159',
        '0XN' => 'E02004159',
        '0XQ' => 'E02004159',
        '0YA' => 'E02004159',
        '0YB' => 'E02004159',
        '0YD' => 'E02004163',
        '0YE' => 'E02004163',
        '0YF' => 'E02004159',
        '0YG' => 'E02004163',
        '0YH' => 'E02004163',
        '0YJ' => 'E02004159',
        '0YL' => 'E02004163',
        '0YN' => 'E02004159',
        '0YP' => 'E02004163',
        '0YQ' => 'E02004159',
        '0YR' => 'E02004163',
        '0YS' => 'E02004159',
        '0YT' => 'E02004159',
        '0YU' => 'E02004163',
        '0YW' => 'E02004159',
        '0YX' => 'E02004159',
        '0YY' => 'E02004163',
        '0ZB' => 'E02004163',
        '0ZD' => 'E02004159',
        '0ZE' => 'E02004159',
        '0ZJ' => 'E02004159',
        '9AB' => 'E02004159',
        '9AD' => 'E02004159',
        '9AE' => 'E02004159',
        '9AF' => 'E02004159',
        '9AH' => 'E02004159',
        '9AJ' => 'E02004159',
        '9AL' => 'E02004159',
        '9AN' => 'E02004159',
        '9AP' => 'E02004159',
        '9AQ' => 'E02004159',
        '9AR' => 'E02004159',
        '9AS' => 'E02004159',
        '9AT' => 'E02004159',
        '9AU' => 'E02004159',
        '9AW' => 'E02004159',
        '9AX' => 'E02004159',
        '9AY' => 'E02004159',
        '9AZ' => 'E02004159',
        '9BA' => 'E02004159',
        '9BB' => 'E02004159',
        '9BD' => 'E02004159',
        '9BE' => 'E02004159',
        '9BF' => 'E02004159',
        '9BG' => 'E02004159',
        '9BH' => 'E02004159',
        '9BJ' => 'E02004159',
        '9BL' => 'E02004159',
        '9BN' => 'E02004159',
        '9BP' => 'E02004159',
        '9BQ' => 'E02004159',
        '9BS' => 'E02004159',
        '9BT' => 'E02004159',
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