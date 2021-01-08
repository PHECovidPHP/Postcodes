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
final class WR8
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02006714',
        '0AB' => 'E02006714',
        '0AD' => 'E02006714',
        '0AE' => 'E02006714',
        '0AF' => 'E02006714',
        '0AG' => 'E02006714',
        '0AH' => 'E02006714',
        '0AJ' => 'E02006714',
        '0AL' => 'E02006714',
        '0AN' => 'E02006714',
        '0AQ' => 'E02006714',
        '0AR' => 'E02006714',
        '0AS' => 'E02006714',
        '0AT' => 'E02006714',
        '0AU' => 'E02006714',
        '0AW' => 'E02006714',
        '0AX' => 'E02006714',
        '0AY' => 'E02006714',
        '0AZ' => 'E02006714',
        '0BA' => 'E02006720',
        '0BB' => 'E02006714',
        '0BD' => 'E02006714',
        '0BE' => 'E02006714',
        '0BF' => 'E02006714',
        '0BG' => 'E02006714',
        '0BJ' => 'E02006714',
        '0BL' => 'E02006714',
        '0BP' => 'E02006714',
        '0BQ' => 'E02006720',
        '0BS' => 'E02006714',
        '0BT' => 'E02006714',
        '0BU' => 'E02006714',
        '0BW' => 'E02006714',
        '0BX' => 'E02006714',
        '0BY' => 'E02006714',
        '0BZ' => 'E02006717',
        '0DA' => 'E02006714',
        '0DB' => 'E02006714',
        '0DD' => 'E02006714',
        '0DE' => 'E02006714',
        '0DF' => 'E02006714',
        '0DG' => 'E02006714',
        '0DH' => 'E02006714',
        '0DJ' => 'E02006714',
        '0DL' => 'E02006714',
        '0DN' => 'E02006714',
        '0DP' => 'E02006714',
        '0DQ' => 'E02006714',
        '0DR' => 'E02006714',
        '0DS' => 'E02006714',
        '0DU' => 'E02006714',
        '0DW' => 'E02006714',
        '0DX' => 'E02006714',
        '0DY' => 'E02006714',
        '0DZ' => 'E02006714',
        '0EA' => 'E02006714',
        '0EB' => 'E02006714',
        '0ED' => 'E02006714',
        '0EE' => 'E02006714',
        '0EF' => 'E02006714',
        '0EG' => 'E02006714',
        '0EH' => 'E02006714',
        '0EJ' => 'E02006720',
        '0EL' => 'E02006714',
        '0EN' => 'E02006720',
        '0EP' => 'E02006720',
        '0EQ' => 'E02006720',
        '0ER' => 'E02006720',
        '0ES' => 'E02006720',
        '0ET' => 'E02006720',
        '0HA' => 'E02006720',
        '0HB' => 'E02006720',
        '0HD' => 'E02006720',
        '0HE' => 'E02006720',
        '0HF' => 'E02006720',
        '0HG' => 'E02006720',
        '0HH' => 'E02006720',
        '0HJ' => 'E02006720',
        '0HL' => 'E02006720',
        '0HN' => 'E02006720',
        '0HP' => 'E02006720',
        '0HQ' => 'E02006720',
        '0HR' => 'E02006720',
        '0HS' => 'E02006720',
        '0HT' => 'E02006720',
        '0HU' => 'E02006720',
        '0HW' => 'E02006720',
        '0HX' => 'E02006720',
        '0HY' => 'E02006720',
        '0HZ' => 'E02006720',
        '0JA' => 'E02006720',
        '0JB' => 'E02006720',
        '0JD' => 'E02006720',
        '0JE' => 'E02006720',
        '0JF' => 'E02006720',
        '0JG' => 'E02006720',
        '0JH' => 'E02006720',
        '0JJ' => 'E02006720',
        '0JL' => 'E02006720',
        '0JN' => 'E02006720',
        '0JP' => 'E02006720',
        '0JQ' => 'E02006720',
        '0JR' => 'E02006720',
        '0JS' => 'E02006720',
        '0JT' => 'E02006720',
        '0JU' => 'E02006720',
        '0JW' => 'E02006720',
        '0JX' => 'E02006720',
        '0JY' => 'E02006720',
        '0JZ' => 'E02006720',
        '0LA' => 'E02006720',
        '0LB' => 'E02006720',
        '0LD' => 'E02006720',
        '0LE' => 'E02006720',
        '0LF' => 'E02006720',
        '0LG' => 'E02006720',
        '0LH' => 'E02006720',
        '0LJ' => 'E02006720',
        '0LL' => 'E02006720',
        '0LN' => 'E02006720',
        '0LP' => 'E02006720',
        '0LQ' => 'E02006720',
        '0LR' => 'E02006720',
        '0LS' => 'E02006720',
        '0LT' => 'E02006720',
        '0LU' => 'E02006720',
        '0LW' => 'E02006720',
        '0LX' => 'E02006720',
        '0LY' => 'E02006720',
        '0LZ' => 'E02006720',
        '0NA' => 'E02006720',
        '0NB' => 'E02006720',
        '0ND' => 'E02006720',
        '0NE' => 'E02006720',
        '0NF' => 'E02006720',
        '0NG' => 'E02006720',
        '0NH' => 'E02006720',
        '0NJ' => 'E02006720',
        '0NL' => 'E02006720',
        '0NN' => 'E02006720',
        '0NP' => 'E02006720',
        '0NQ' => 'E02006720',
        '0NR' => 'E02006720',
        '0NS' => 'E02006720',
        '0NT' => 'E02006720',
        '0NU' => 'E02006720',
        '0NW' => 'E02006720',
        '0NX' => 'E02006720',
        '0NY' => 'E02006720',
        '0NZ' => 'E02006720',
        '0PA' => 'E02006714',
        '0PB' => 'E02006720',
        '0PD' => 'E02006717',
        '0PE' => 'E02006717',
        '0PF' => 'E02006717',
        '0PG' => 'E02006717',
        '0PH' => 'E02006717',
        '0PJ' => 'E02006717',
        '0PL' => 'E02006717',
        '0PN' => 'E02006717',
        '0PP' => 'E02006717',
        '0PQ' => 'E02006717',
        '0PR' => 'E02006717',
        '0PS' => 'E02006717',
        '0PT' => 'E02006717',
        '0PU' => 'E02006717',
        '0PW' => 'E02006717',
        '0PX' => 'E02006717',
        '0PY' => 'E02006717',
        '0PZ' => 'E02006717',
        '0QA' => 'E02006717',
        '0QB' => 'E02006717',
        '0QD' => 'E02006766',
        '0QE' => 'E02006720',
        '0QF' => 'E02006717',
        '0QG' => 'E02006720',
        '0QH' => 'E02006717',
        '0QJ' => 'E02006717',
        '0QL' => 'E02006720',
        '0QN' => 'E02006720',
        '0QP' => 'E02006720',
        '0QQ' => 'E02006717',
        '0QR' => 'E02006720',
        '0QS' => 'E02006720',
        '0QT' => 'E02006720',
        '0QU' => 'E02006720',
        '0QW' => 'E02006720',
        '0QX' => 'E02006720',
        '0QY' => 'E02006720',
        '0QZ' => 'E02006720',
        '0RA' => 'E02006720',
        '0RB' => 'E02006720',
        '0RD' => 'E02006720',
        '0RE' => 'E02006720',
        '0RF' => 'E02006720',
        '0RG' => 'E02006720',
        '0RH' => 'E02006717',
        '0RJ' => 'E02006720',
        '0RL' => 'E02006720',
        '0RN' => 'E02006720',
        '0RP' => 'E02006714',
        '0RQ' => 'E02006720',
        '0RR' => 'E02006717',
        '0RS' => 'E02006717',
        '0RT' => 'E02006717',
        '0RU' => 'E02006720',
        '0RW' => 'E02006720',
        '0RX' => 'E02006720',
        '0RY' => 'E02006717',
        '0RZ' => 'E02006720',
        '0SA' => 'E02006714',
        '0SB' => 'E02006714',
        '0SD' => 'E02006714',
        '0SE' => 'E02006720',
        '0SF' => 'E02006720',
        '0SG' => 'E02006720',
        '0SH' => 'E02006720',
        '0SJ' => 'E02006720',
        '0SL' => 'E02006720',
        '0SN' => 'E02006720',
        '0SP' => 'E02006714',
        '0SQ' => 'E02006720',
        '0SR' => 'E02006714',
        '0SS' => 'E02006714',
        '0ST' => 'E02006720',
        '0SU' => 'E02006720',
        '0SW' => 'E02006714',
        '0SX' => 'E02006720',
        '0SY' => 'E02006720',
        '0SZ' => 'E02006720',
        '0TA' => 'E02006720',
        '0TB' => 'E02006720',
        '0TD' => 'E02006720',
        '0WD' => 'E02006720',
        '0WE' => 'E02006720',
        '0WF' => 'E02006720',
        '0WG' => 'E02006736',
        '0WH' => 'E02006720',
        '0WJ' => 'E02006720',
        '0WL' => 'E02006736',
        '0WN' => 'E02006736',
        '0WP' => 'E02006736',
        '0WQ' => 'E02006736',
        '0WR' => 'E02006736',
        '0WS' => 'E02006736',
        '0WT' => 'E02006736',
        '0WU' => 'E02006736',
        '0WW' => 'E02006714',
        '0WX' => 'E02006736',
        '0WY' => 'E02006736',
        '0WZ' => 'E02006736',
        '0XA' => 'E02006736',
        '0XB' => 'E02006720',
        '0XD' => 'E02006736',
        '0XG' => 'E02006720',
        '0XX' => 'E02006714',
        '0XZ' => 'E02006720',
        '0YA' => 'E02006736',
        '0YB' => 'E02006714',
        '0YD' => 'E02006736',
        '0YE' => 'E02006736',
        '0YF' => 'E02006736',
        '0YG' => 'E02006736',
        '0YH' => 'E02006714',
        '0YJ' => 'E02006714',
        '0YL' => 'E02006736',
        '0YN' => 'E02006736',
        '0YP' => 'E02006720',
        '0YQ' => 'E02006736',
        '0YR' => 'E02006736',
        '0YS' => 'E02006736',
        '0YT' => 'E02006736',
        '0YU' => 'E02006736',
        '0YW' => 'E02006720',
        '0YX' => 'E02006736',
        '0YY' => 'E02006714',
        '0YZ' => 'E02006714',
        '0ZB' => 'E02006736',
        '0ZE' => 'E02006714',
        '0ZF' => 'E02006720',
        '0ZG' => 'E02006714',
        '0ZH' => 'E02006720',
        '0ZJ' => 'E02006720',
        '0ZL' => 'E02006714',
        '0ZN' => 'E02006736',
        '0ZP' => 'E02006736',
        '0ZQ' => 'E02006736',
        '0ZR' => 'E02006736',
        '0ZS' => 'E02006736',
        '0ZY' => 'E02006736',
        '9AA' => 'E02006766',
        '9AB' => 'E02006766',
        '9AD' => 'E02006766',
        '9AE' => 'E02006766',
        '9AF' => 'E02006766',
        '9AG' => 'E02006766',
        '9AH' => 'E02006766',
        '9AJ' => 'E02006766',
        '9AL' => 'E02006756',
        '9AN' => 'E02006766',
        '9AP' => 'E02006766',
        '9AQ' => 'E02006766',
        '9AR' => 'E02006766',
        '9AS' => 'E02006766',
        '9AT' => 'E02006766',
        '9AU' => 'E02006766',
        '9AW' => 'E02006766',
        '9AX' => 'E02006766',
        '9AY' => 'E02006766',
        '9AZ' => 'E02006717',
        '9BA' => 'E02006766',
        '9BB' => 'E02006766',
        '9BD' => 'E02006766',
        '9BE' => 'E02006766',
        '9BG' => 'E02006766',
        '9BH' => 'E02006766',
        '9BJ' => 'E02006766',
        '9BL' => 'E02006766',
        '9BN' => 'E02006766',
        '9BP' => 'E02006766',
        '9BQ' => 'E02006766',
        '9BS' => 'E02006766',
        '9BT' => 'E02006766',
        '9BU' => 'E02006766',
        '9BW' => 'E02006766',
        '9BX' => 'E02006766',
        '9BY' => 'E02006766',
        '9BZ' => 'E02006766',
        '9DA' => 'E02006717',
        '9DB' => 'E02006717',
        '9DD' => 'E02006717',
        '9DE' => 'E02006717',
        '9DF' => 'E02006717',
        '9DG' => 'E02006717',
        '9DH' => 'E02006717',
        '9DJ' => 'E02006717',
        '9DL' => 'E02006717',
        '9DN' => 'E02006717',
        '9DP' => 'E02006717',
        '9DQ' => 'E02006717',
        '9DR' => 'E02006717',
        '9DS' => 'E02006717',
        '9DT' => 'E02006717',
        '9DU' => 'E02006717',
        '9DW' => 'E02006717',
        '9DX' => 'E02006717',
        '9DY' => 'E02006717',
        '9DZ' => 'E02006766',
        '9EA' => 'E02006756',
        '9EB' => 'E02006756',
        '9ED' => 'E02006756',
        '9EE' => 'E02006756',
        '9EF' => 'E02006756',
        '9EG' => 'E02006756',
        '9EH' => 'E02006756',
        '9EJ' => 'E02006756',
        '9EL' => 'E02006756',
        '9EN' => 'E02006756',
        '9EP' => 'E02006717',
        '9EQ' => 'E02006756',
        '9ER' => 'E02006717',
        '9ES' => 'E02006766',
        '9EW' => 'E02006756',
        '9HA' => 'E02006756',
        '9HB' => 'E02006756',
        '9HD' => 'E02006756',
        '9HE' => 'E02006766',
        '9HF' => 'E02006756',
        '9HG' => 'E02006756',
        '9HH' => 'E02006756',
        '9HJ' => 'E02006756',
        '9HL' => 'E02006756',
        '9HN' => 'E02006756',
        '9HP' => 'E02006717',
        '9HQ' => 'E02006756',
        '9JA' => 'E02006717',
        '9JB' => 'E02006717',
        '9JD' => 'E02006717',
        '9JE' => 'E02006717',
        '9JF' => 'E02006717',
        '9JG' => 'E02006717',
        '9JH' => 'E02006717',
        '9JJ' => 'E02006717',
        '9JN' => 'E02006717',
        '9JP' => 'E02006717',
        '9JQ' => 'E02006717',
        '9JR' => 'E02006717',
        '9JS' => 'E02006717',
        '9JW' => 'E02006717',
        '9JY' => 'E02006766',
        '9JZ' => 'E02006766',
        '9LA' => 'E02004667',
        '9LB' => 'E02006766',
        '9LD' => 'E02006766',
        '9LE' => 'E02006766',
        '9LH' => 'E02006766',
        '9LJ' => 'E02006766',
        '9LL' => 'E02006766',
        '9LN' => 'E02006766',
        '9LP' => 'E02006766',
        '9LR' => 'E02006766',
        '9LS' => 'E02006766',
        '9LT' => 'E02006766',
        '9LW' => 'E02006766',
        '9LZ' => 'E02006766',
        '9WG' => 'E02006766',
        '9WW' => 'E02006736',
        '9WX' => 'E02006736',
        '9WY' => 'E02006736',
        '9WZ' => 'E02006736',
        '9YA' => 'E02006744',
        '9YB' => 'E02006717',
        '9YD' => 'E02006736',
        '9YE' => 'E02006717',
        '9YF' => 'E02006736',
        '9YG' => 'E02006744',
        '9YH' => 'E02006766',
        '9YJ' => 'E02006766',
        '9YL' => 'E02006717',
        '9YN' => 'E02006717',
        '9YP' => 'E02006736',
        '9YQ' => 'E02006736',
        '9YR' => 'E02006717',
        '9YS' => 'E02006744',
        '9YT' => 'E02006766',
        '9YU' => 'E02006736',
        '9YW' => 'E02006736',
        '9YX' => 'E02006766',
        '9YY' => 'E02006766',
        '9YZ' => 'E02006766',
        '9ZB' => 'E02006736',
        '9ZE' => 'E02006736',
        '9ZF' => 'E02006736',
        '9ZG' => 'E02006736',
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