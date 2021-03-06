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
final class BD24
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02005744',
        '0AB' => 'E02005744',
        '0AD' => 'E02005744',
        '0AE' => 'E02005744',
        '0AF' => 'E02005744',
        '0AG' => 'E02005744',
        '0AH' => 'E02005744',
        '0AJ' => 'E02005744',
        '0AL' => 'E02005744',
        '0AN' => 'E02005744',
        '0AP' => 'E02005744',
        '0AQ' => 'E02005744',
        '0AR' => 'E02005744',
        '0AS' => 'E02005744',
        '0AT' => 'E02005744',
        '0AU' => 'E02005744',
        '0AW' => 'E02005744',
        '0AX' => 'E02005744',
        '0AY' => 'E02005744',
        '0AZ' => 'E02005744',
        '0BA' => 'E02005744',
        '0BB' => 'E02005744',
        '0BD' => 'E02005744',
        '0BE' => 'E02005744',
        '0BG' => 'E02005744',
        '0BH' => 'E02005744',
        '0BJ' => 'E02005744',
        '0BL' => 'E02005744',
        '0BN' => 'E02005744',
        '0BP' => 'E02005744',
        '0BQ' => 'E02005744',
        '0BS' => 'E02005744',
        '0BT' => 'E02005744',
        '0BU' => 'E02005744',
        '0BW' => 'E02005744',
        '0BX' => 'E02005744',
        '0BY' => 'E02005744',
        '0DA' => 'E02005744',
        '0DB' => 'E02005744',
        '0DD' => 'E02005744',
        '0DE' => 'E02005744',
        '0DF' => 'E02005744',
        '0DG' => 'E02005744',
        '0DH' => 'E02005744',
        '0DJ' => 'E02005744',
        '0DL' => 'E02005744',
        '0DN' => 'E02005744',
        '0DP' => 'E02005744',
        '0DQ' => 'E02005744',
        '0DR' => 'E02005744',
        '0DS' => 'E02005744',
        '0DT' => 'E02005742',
        '0DU' => 'E02005744',
        '0DW' => 'E02005744',
        '0DX' => 'E02005742',
        '0DY' => 'E02005744',
        '0DZ' => 'E02005744',
        '0EA' => 'E02005744',
        '0EB' => 'E02005744',
        '0ED' => 'E02005744',
        '0EE' => 'E02005744',
        '0EF' => 'E02005744',
        '0EG' => 'E02005744',
        '0EH' => 'E02005744',
        '0EJ' => 'E02005744',
        '0EL' => 'E02005742',
        '0EN' => 'E02005744',
        '0EP' => 'E02005744',
        '0EQ' => 'E02005744',
        '0ER' => 'E02005744',
        '0ES' => 'E02005744',
        '0ET' => 'E02005744',
        '0EU' => 'E02005744',
        '0EW' => 'E02005744',
        '0EX' => 'E02005744',
        '0EY' => 'E02005744',
        '0EZ' => 'E02005744',
        '0FA' => 'E02005744',
        '0FB' => 'E02005744',
        '0FD' => 'E02005744',
        '0FE' => 'E02005742',
        '0FF' => 'E02005744',
        '0FG' => 'E02005744',
        '0FH' => 'E02005744',
        '0HA' => 'E02005744',
        '0HB' => 'E02005744',
        '0HD' => 'E02005744',
        '0HE' => 'E02005744',
        '0HF' => 'E02005744',
        '0HG' => 'E02005744',
        '0HH' => 'E02005744',
        '0HJ' => 'E02005744',
        '0HL' => 'E02005744',
        '0HN' => 'E02005744',
        '0HP' => 'E02005744',
        '0HQ' => 'E02005744',
        '0HR' => 'E02005744',
        '0HS' => 'E02005744',
        '0HT' => 'E02005744',
        '0HU' => 'E02005744',
        '0HW' => 'E02005744',
        '0HX' => 'E02005744',
        '0HY' => 'E02005744',
        '0HZ' => 'E02005744',
        '0JA' => 'E02005744',
        '0JB' => 'E02005744',
        '0JD' => 'E02005744',
        '0JE' => 'E02005744',
        '0JF' => 'E02005744',
        '0JG' => 'E02005744',
        '0JH' => 'E02005744',
        '0JP' => 'E02005744',
        '0JQ' => 'E02005744',
        '0JR' => 'E02005744',
        '0JS' => 'E02005744',
        '0JT' => 'E02005744',
        '0JU' => 'E02005744',
        '0JX' => 'E02005744',
        '0JY' => 'E02005744',
        '0JZ' => 'E02005744',
        '0LA' => 'E02005744',
        '0LB' => 'E02005744',
        '0LE' => 'E02005744',
        '0LF' => 'E02005744',
        '0LG' => 'E02005744',
        '0LH' => 'E02005744',
        '0LJ' => 'E02005744',
        '0LL' => 'E02005744',
        '0LP' => 'E02005744',
        '0LQ' => 'E02005744',
        '0LR' => 'E02005744',
        '0LS' => 'E02005744',
        '0LT' => 'E02005744',
        '0LU' => 'E02005744',
        '0LX' => 'E02005744',
        '0UJ' => 'E02005744',
        '0UL' => 'E02005744',
        '0UP' => 'E02005744',
        '0UT' => 'E02005744',
        '0UU' => 'E02005744',
        '0UW' => 'E02005744',
        '0UY' => 'E02005744',
        '0UZ' => 'E02005744',
        '0WX' => 'E02005744',
        '0WY' => 'E02005744',
        '0WZ' => 'E02005744',
        '0XA' => 'E02005747',
        '0YW' => 'E02005744',
        '4AA' => 'E02005744',
        '4AB' => 'E02005744',
        '4AD' => 'E02005744',
        '4AT' => 'E02005744',
        '5AA' => 'E02005744',
        '5AB' => 'E02005744',
        '5AD' => 'E02005744',
        '5AE' => 'E02005744',
        '5AF' => 'E02005744',
        '5AG' => 'E02005744',
        '5AH' => 'E02005744',
        '5AJ' => 'E02005744',
        '5AL' => 'E02005744',
        '5AN' => 'E02005744',
        '9AA' => 'E02005744',
        '9AB' => 'E02005744',
        '9AD' => 'E02005744',
        '9AE' => 'E02005744',
        '9AF' => 'E02005744',
        '9AG' => 'E02005744',
        '9AH' => 'E02005744',
        '9AJ' => 'E02005744',
        '9AL' => 'E02005744',
        '9AN' => 'E02005744',
        '9AP' => 'E02005744',
        '9AQ' => 'E02005744',
        '9AR' => 'E02005744',
        '9AS' => 'E02005744',
        '9AT' => 'E02005744',
        '9AU' => 'E02005744',
        '9AW' => 'E02005744',
        '9AX' => 'E02005744',
        '9AY' => 'E02005744',
        '9AZ' => 'E02005744',
        '9BA' => 'E02005744',
        '9BB' => 'E02005744',
        '9BD' => 'E02005744',
        '9BE' => 'E02005744',
        '9BG' => 'E02005744',
        '9BH' => 'E02005744',
        '9BJ' => 'E02005744',
        '9BL' => 'E02005744',
        '9BN' => 'E02005744',
        '9BP' => 'E02005744',
        '9BQ' => 'E02005744',
        '9BS' => 'E02005744',
        '9BT' => 'E02005744',
        '9BU' => 'E02005744',
        '9BW' => 'E02005744',
        '9BX' => 'E02005744',
        '9BY' => 'E02005744',
        '9BZ' => 'E02005744',
        '9DA' => 'E02005744',
        '9DB' => 'E02005744',
        '9DD' => 'E02005744',
        '9DE' => 'E02005744',
        '9DF' => 'E02005744',
        '9DG' => 'E02005744',
        '9DH' => 'E02005744',
        '9DJ' => 'E02005744',
        '9DL' => 'E02005744',
        '9DN' => 'E02005744',
        '9DP' => 'E02005744',
        '9DQ' => 'E02005744',
        '9DR' => 'E02005744',
        '9DS' => 'E02005744',
        '9DT' => 'E02005744',
        '9DU' => 'E02005744',
        '9DW' => 'E02005744',
        '9DX' => 'E02005744',
        '9DY' => 'E02005744',
        '9DZ' => 'E02005744',
        '9EA' => 'E02005744',
        '9EB' => 'E02005744',
        '9ED' => 'E02005744',
        '9EE' => 'E02005744',
        '9EF' => 'E02005744',
        '9EG' => 'E02005744',
        '9EH' => 'E02005744',
        '9EJ' => 'E02005744',
        '9EL' => 'E02005744',
        '9EN' => 'E02005744',
        '9EP' => 'E02005744',
        '9EQ' => 'E02005744',
        '9ER' => 'E02005744',
        '9ES' => 'E02005744',
        '9ET' => 'E02005744',
        '9EU' => 'E02005744',
        '9EW' => 'E02005744',
        '9EX' => 'E02005744',
        '9EY' => 'E02005744',
        '9EZ' => 'E02005744',
        '9FA' => 'E02005744',
        '9FB' => 'E02005744',
        '9FD' => 'E02005744',
        '9FE' => 'E02005744',
        '9FF' => 'E02005744',
        '9FG' => 'E02005744',
        '9FH' => 'E02005744',
        '9FJ' => 'E02005744',
        '9FL' => 'E02005744',
        '9FN' => 'E02005744',
        '9FP' => 'E02005744',
        '9HA' => 'E02005744',
        '9HB' => 'E02005744',
        '9HD' => 'E02005744',
        '9HE' => 'E02005744',
        '9HF' => 'E02005744',
        '9HG' => 'E02005744',
        '9HH' => 'E02005744',
        '9HJ' => 'E02005744',
        '9HL' => 'E02005744',
        '9HN' => 'E02005744',
        '9HP' => 'E02005744',
        '9HQ' => 'E02005744',
        '9HR' => 'E02005744',
        '9HS' => 'E02005744',
        '9HT' => 'E02005744',
        '9HU' => 'E02005744',
        '9HW' => 'E02005744',
        '9HX' => 'E02005744',
        '9HY' => 'E02005744',
        '9HZ' => 'E02005744',
        '9JA' => 'E02005744',
        '9JB' => 'E02005744',
        '9JD' => 'E02005744',
        '9JE' => 'E02005744',
        '9JF' => 'E02005744',
        '9JG' => 'E02005744',
        '9JH' => 'E02005744',
        '9JJ' => 'E02005744',
        '9JL' => 'E02005744',
        '9JN' => 'E02005744',
        '9JP' => 'E02005744',
        '9JQ' => 'E02005744',
        '9JR' => 'E02005744',
        '9JS' => 'E02005744',
        '9JT' => 'E02005744',
        '9JU' => 'E02005744',
        '9JW' => 'E02005744',
        '9JX' => 'E02005744',
        '9JY' => 'E02005744',
        '9JZ' => 'E02005744',
        '9LA' => 'E02005744',
        '9LB' => 'E02005744',
        '9LD' => 'E02005744',
        '9LE' => 'E02005744',
        '9LF' => 'E02005744',
        '9LG' => 'E02005744',
        '9LH' => 'E02005744',
        '9LJ' => 'E02005744',
        '9LL' => 'E02005744',
        '9LN' => 'E02005744',
        '9LP' => 'E02005744',
        '9LR' => 'E02005744',
        '9LS' => 'E02005744',
        '9LT' => 'E02005744',
        '9LU' => 'E02005744',
        '9LW' => 'E02005744',
        '9LX' => 'E02005744',
        '9LY' => 'E02005744',
        '9LZ' => 'E02005744',
        '9NA' => 'E02005744',
        '9NB' => 'E02005744',
        '9ND' => 'E02005744',
        '9NE' => 'E02005744',
        '9NF' => 'E02005744',
        '9NG' => 'E02005744',
        '9NH' => 'E02005744',
        '9NJ' => 'E02005744',
        '9NL' => 'E02005744',
        '9NN' => 'E02005744',
        '9NP' => 'E02005744',
        '9NQ' => 'E02005744',
        '9NR' => 'E02005744',
        '9NS' => 'E02005744',
        '9NT' => 'E02005744',
        '9NU' => 'E02005744',
        '9NW' => 'E02005744',
        '9NX' => 'E02005744',
        '9NY' => 'E02005744',
        '9NZ' => 'E02005744',
        '9PA' => 'E02005744',
        '9PB' => 'E02005744',
        '9PD' => 'E02005744',
        '9PE' => 'E02005744',
        '9PF' => 'E02005744',
        '9PG' => 'E02005744',
        '9PH' => 'E02005744',
        '9PJ' => 'E02005744',
        '9PL' => 'E02005744',
        '9PN' => 'E02005744',
        '9PP' => 'E02005743',
        '9PQ' => 'E02005744',
        '9PR' => 'E02005743',
        '9PS' => 'E02005743',
        '9PT' => 'E02005743',
        '9PU' => 'E02005743',
        '9PW' => 'E02005743',
        '9PX' => 'E02005743',
        '9PY' => 'E02005743',
        '9PZ' => 'E02005744',
        '9QA' => 'E02005744',
        '9QB' => 'E02005744',
        '9QD' => 'E02005744',
        '9QE' => 'E02005744',
        '9QH' => 'E02005744',
        '9QJ' => 'E02005744',
        '9QL' => 'E02005744',
        '9QN' => 'E02005744',
        '9QP' => 'E02005744',
        '9QR' => 'E02005744',
        '9QS' => 'E02005744',
        '9QT' => 'E02005744',
        '9QW' => 'E02005744',
        '9RA' => 'E02005744',
        '9RB' => 'E02005744',
        '9RD' => 'E02005744',
        '9RE' => 'E02005744',
        '9RF' => 'E02005744',
        '9RG' => 'E02005744',
        '9RH' => 'E02005744',
        '9RJ' => 'E02005744',
        '9RL' => 'E02005744',
        '9RN' => 'E02005744',
        '9RP' => 'E02005744',
        '9RQ' => 'E02005744',
        '9RR' => 'E02005744',
        '9RS' => 'E02005744',
        '9RT' => 'E02005744',
        '9RU' => 'E02005744',
        '9RW' => 'E02005744',
        '9RX' => 'E02005744',
        '9UU' => 'E02005747',
        '9UX' => 'E02005744',
        '9UZ' => 'E02005744',
        '9WA' => 'E02005747',
        '9WU' => 'E02005744',
        '9WW' => 'E02005744',
        '9WX' => 'E02005744',
        '9WY' => 'E02005744',
        '9WZ' => 'E02005744',
        '9YR' => 'E02005744',
        '9YX' => 'E02005744',
        '9YY' => 'E02005747',
        '9YZ' => 'E02005744',
        '9ZL' => 'E02005744',
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
