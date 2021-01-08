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
final class CM21
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02004888',
        '0AB' => 'E02004888',
        '0AD' => 'E02004888',
        '0AE' => 'E02004888',
        '0AF' => 'E02004888',
        '0AG' => 'E02004888',
        '0AH' => 'E02004888',
        '0AJ' => 'E02004888',
        '0AL' => 'E02004888',
        '0AN' => 'E02004888',
        '0AP' => 'E02004888',
        '0AQ' => 'E02004888',
        '0AR' => 'E02004888',
        '0AS' => 'E02004888',
        '0AT' => 'E02004888',
        '0AU' => 'E02004888',
        '0AW' => 'E02004888',
        '0AX' => 'E02004888',
        '0AY' => 'E02004888',
        '0AZ' => 'E02004888',
        '0BA' => 'E02004888',
        '0BB' => 'E02004888',
        '0BD' => 'E02004888',
        '0BE' => 'E02004888',
        '0BG' => 'E02004888',
        '0BH' => 'E02004527',
        '0BJ' => 'E02004888',
        '0BL' => 'E02004888',
        '0BN' => 'E02004888',
        '0BP' => 'E02004888',
        '0BQ' => 'E02004888',
        '0BS' => 'E02004888',
        '0BT' => 'E02004888',
        '0BU' => 'E02004888',
        '0BW' => 'E02004888',
        '0BX' => 'E02004888',
        '0BY' => 'E02004888',
        '0BZ' => 'E02004888',
        '0DA' => 'E02004888',
        '0DB' => 'E02004888',
        '0DD' => 'E02004888',
        '0DE' => 'E02004888',
        '0DF' => 'E02004888',
        '0DG' => 'E02004888',
        '0DH' => 'E02004888',
        '0DJ' => 'E02004888',
        '0DL' => 'E02004888',
        '0DN' => 'E02004888',
        '0DP' => 'E02004527',
        '0DQ' => 'E02004888',
        '0DR' => 'E02004888',
        '0DS' => 'E02004888',
        '0DT' => 'E02004886',
        '0DU' => 'E02004886',
        '0DX' => 'E02004888',
        '0DY' => 'E02004888',
        '0DZ' => 'E02004888',
        '0EA' => 'E02004888',
        '0EB' => 'E02004888',
        '0ED' => 'E02004888',
        '0EE' => 'E02004888',
        '0EF' => 'E02004888',
        '0EG' => 'E02004888',
        '0EH' => 'E02004888',
        '0EJ' => 'E02004888',
        '0EL' => 'E02004888',
        '0EP' => 'E02004888',
        '0EQ' => 'E02004527',
        '0ER' => 'E02004888',
        '0ES' => 'E02004888',
        '0ET' => 'E02004888',
        '0EU' => 'E02004888',
        '0EX' => 'E02004527',
        '0EY' => 'E02004888',
        '0FX' => 'E02004527',
        '0GL' => 'E02004527',
        '0HA' => 'E02004888',
        '0HB' => 'E02004888',
        '0HD' => 'E02004888',
        '0HE' => 'E02004888',
        '0HF' => 'E02004888',
        '0HG' => 'E02004888',
        '0HH' => 'E02004888',
        '0HJ' => 'E02004888',
        '0HL' => 'E02004888',
        '0HN' => 'E02004886',
        '0HP' => 'E02004888',
        '0HQ' => 'E02004888',
        '0HR' => 'E02004888',
        '0HS' => 'E02004888',
        '0HT' => 'E02004886',
        '0HU' => 'E02004886',
        '0HW' => 'E02004886',
        '0HX' => 'E02004886',
        '0HY' => 'E02004886',
        '0HZ' => 'E02004886',
        '0JA' => 'E02004886',
        '0JB' => 'E02004886',
        '0JD' => 'E02004886',
        '0JE' => 'E02004886',
        '0JF' => 'E02004527',
        '0JG' => 'E02004886',
        '0JH' => 'E02004527',
        '0JJ' => 'E02004886',
        '0JL' => 'E02004886',
        '0JN' => 'E02004886',
        '0JP' => 'E02004886',
        '0JQ' => 'E02004888',
        '0JR' => 'E02004886',
        '0JS' => 'E02004886',
        '0JT' => 'E02004886',
        '0JU' => 'E02004886',
        '0JW' => 'E02004886',
        '0JX' => 'E02004886',
        '0JY' => 'E02004886',
        '0JZ' => 'E02004886',
        '0LA' => 'E02004886',
        '0LB' => 'E02004886',
        '0LD' => 'E02004886',
        '0LE' => 'E02004886',
        '0LF' => 'E02004886',
        '0LG' => 'E02004886',
        '0LH' => 'E02004886',
        '0LJ' => 'E02004886',
        '0LL' => 'E02004886',
        '0LN' => 'E02004886',
        '0LP' => 'E02004886',
        '0LQ' => 'E02004886',
        '0LR' => 'E02004886',
        '0LS' => 'E02004886',
        '0LT' => 'E02004886',
        '0LU' => 'E02004886',
        '0LW' => 'E02004527',
        '0LX' => 'E02004886',
        '0LY' => 'E02004886',
        '0NA' => 'E02004886',
        '0NB' => 'E02004886',
        '0ND' => 'E02004888',
        '0NE' => 'E02004888',
        '0NG' => 'E02004888',
        '0NH' => 'E02004886',
        '0NQ' => 'E02004888',
        '0RL' => 'E02004888',
        '0WA' => 'E02004527',
        '0WQ' => 'E02004888',
        '0WR' => 'E02004527',
        '0WS' => 'E02004527',
        '0WT' => 'E02004527',
        '0WU' => 'E02004527',
        '0WW' => 'E02004527',
        '0WX' => 'E02004527',
        '0WY' => 'E02004527',
        '0WZ' => 'E02004527',
        '0XA' => 'E02004888',
        '0XB' => 'E02004888',
        '0XD' => 'E02004527',
        '0XE' => 'E02004888',
        '0ZR' => 'E02004888',
        '1AD' => 'E02004527',
        '1AF' => 'E02004527',
        '1AG' => 'E02004527',
        '1AH' => 'E02004527',
        '1AJ' => 'E02004527',
        '1AL' => 'E02004527',
        '1AN' => 'E02004527',
        '1AP' => 'E02004527',
        '1AQ' => 'E02004527',
        '1AR' => 'E02004527',
        '1AS' => 'E02004527',
        '1AT' => 'E02004527',
        '1AU' => 'E02004527',
        '1AW' => 'E02004527',
        '1AX' => 'E02004527',
        '1AY' => 'E02004527',
        '1AZ' => 'E02004527',
        '1BA' => 'E02004527',
        '1BB' => 'E02004527',
        '1BD' => 'E02004527',
        '1BE' => 'E02004527',
        '1BF' => 'E02004527',
        '1BG' => 'E02004527',
        '1BH' => 'E02004527',
        '1BJ' => 'E02004527',
        '1BL' => 'E02004527',
        '1BP' => 'E02004527',
        '9AA' => 'E02004888',
        '9AB' => 'E02004888',
        '9AD' => 'E02004888',
        '9AE' => 'E02004888',
        '9AF' => 'E02004527',
        '9AG' => 'E02004888',
        '9AH' => 'E02004888',
        '9AJ' => 'E02004888',
        '9AL' => 'E02004888',
        '9AN' => 'E02004888',
        '9AP' => 'E02004888',
        '9AQ' => 'E02004888',
        '9AR' => 'E02004888',
        '9AS' => 'E02004888',
        '9AT' => 'E02004888',
        '9AU' => 'E02004888',
        '9AW' => 'E02004888',
        '9AX' => 'E02004888',
        '9AY' => 'E02004888',
        '9AZ' => 'E02004888',
        '9BA' => 'E02004888',
        '9BB' => 'E02004888',
        '9BD' => 'E02004888',
        '9BE' => 'E02004888',
        '9BG' => 'E02004888',
        '9BH' => 'E02004888',
        '9BJ' => 'E02004888',
        '9BL' => 'E02004888',
        '9BN' => 'E02004888',
        '9BP' => 'E02004888',
        '9BQ' => 'E02004888',
        '9BS' => 'E02004888',
        '9BT' => 'E02004888',
        '9BU' => 'E02004888',
        '9BW' => 'E02004888',
        '9BX' => 'E02004888',
        '9BY' => 'E02004888',
        '9BZ' => 'E02004888',
        '9DA' => 'E02004888',
        '9DB' => 'E02004888',
        '9DD' => 'E02004888',
        '9DE' => 'E02004888',
        '9DF' => 'E02004888',
        '9DG' => 'E02004888',
        '9DH' => 'E02004888',
        '9DJ' => 'E02004888',
        '9DL' => 'E02004888',
        '9DN' => 'E02004888',
        '9DP' => 'E02004888',
        '9DQ' => 'E02004888',
        '9DR' => 'E02004888',
        '9DS' => 'E02004888',
        '9DT' => 'E02004888',
        '9DU' => 'E02004888',
        '9DW' => 'E02004888',
        '9DX' => 'E02004888',
        '9DY' => 'E02004888',
        '9DZ' => 'E02004527',
        '9EA' => 'E02004888',
        '9EB' => 'E02004888',
        '9ED' => 'E02004888',
        '9EE' => 'E02004888',
        '9EF' => 'E02004888',
        '9EG' => 'E02004888',
        '9EH' => 'E02004888',
        '9EJ' => 'E02004888',
        '9EL' => 'E02004888',
        '9EN' => 'E02004888',
        '9EP' => 'E02004888',
        '9EQ' => 'E02004888',
        '9ER' => 'E02004888',
        '9ES' => 'E02004888',
        '9ET' => 'E02004888',
        '9EU' => 'E02004888',
        '9EW' => 'E02004888',
        '9EX' => 'E02004888',
        '9EY' => 'E02004888',
        '9EZ' => 'E02004888',
        '9FA' => 'E02004888',
        '9FB' => 'E02004888',
        '9FD' => 'E02004888',
        '9FE' => 'E02004888',
        '9FF' => 'E02004888',
        '9FG' => 'E02004888',
        '9FH' => 'E02004527',
        '9FJ' => 'E02004888',
        '9FL' => 'E02004527',
        '9GB' => 'E02004527',
        '9GG' => 'E02004888',
        '9GX' => 'E02004527',
        '9GY' => 'E02004888',
        '9GZ' => 'E02004888',
        '9HA' => 'E02004888',
        '9HB' => 'E02004888',
        '9HD' => 'E02004888',
        '9HE' => 'E02004888',
        '9HF' => 'E02004888',
        '9HG' => 'E02004888',
        '9HH' => 'E02004888',
        '9HJ' => 'E02004888',
        '9HL' => 'E02004888',
        '9HN' => 'E02004888',
        '9HP' => 'E02004888',
        '9HQ' => 'E02004888',
        '9HR' => 'E02004888',
        '9HS' => 'E02004888',
        '9HT' => 'E02004888',
        '9HU' => 'E02004888',
        '9HW' => 'E02004527',
        '9HX' => 'E02004527',
        '9HY' => 'E02004527',
        '9HZ' => 'E02004888',
        '9JA' => 'E02004888',
        '9JB' => 'E02004527',
        '9JD' => 'E02004888',
        '9JE' => 'E02004888',
        '9JF' => 'E02004888',
        '9JG' => 'E02004888',
        '9JH' => 'E02004888',
        '9JJ' => 'E02004888',
        '9JL' => 'E02004888',
        '9JN' => 'E02004888',
        '9JP' => 'E02004888',
        '9JQ' => 'E02004888',
        '9JR' => 'E02004888',
        '9JS' => 'E02004888',
        '9JT' => 'E02004888',
        '9JU' => 'E02004888',
        '9JW' => 'E02004888',
        '9JX' => 'E02004527',
        '9JY' => 'E02004888',
        '9JZ' => 'E02004888',
        '9LA' => 'E02004527',
        '9LB' => 'E02004527',
        '9LD' => 'E02004527',
        '9LE' => 'E02004527',
        '9LF' => 'E02004527',
        '9LG' => 'E02004527',
        '9LH' => 'E02004527',
        '9LJ' => 'E02004527',
        '9LL' => 'E02004527',
        '9LN' => 'E02004527',
        '9LP' => 'E02004527',
        '9LQ' => 'E02004527',
        '9LR' => 'E02004527',
        '9LS' => 'E02004527',
        '9LT' => 'E02004527',
        '9LU' => 'E02004888',
        '9LW' => 'E02004527',
        '9LX' => 'E02004527',
        '9LY' => 'E02004888',
        '9LZ' => 'E02004888',
        '9NA' => 'E02004888',
        '9NB' => 'E02004888',
        '9ND' => 'E02004888',
        '9NE' => 'E02004888',
        '9NF' => 'E02004888',
        '9NG' => 'E02004888',
        '9NH' => 'E02004888',
        '9NJ' => 'E02004888',
        '9NL' => 'E02004888',
        '9NN' => 'E02004888',
        '9NP' => 'E02004888',
        '9NQ' => 'E02004888',
        '9NR' => 'E02004888',
        '9NS' => 'E02004888',
        '9NT' => 'E02004888',
        '9NU' => 'E02004888',
        '9NW' => 'E02004888',
        '9NX' => 'E02004888',
        '9NY' => 'E02004888',
        '9NZ' => 'E02004888',
        '9PA' => 'E02004888',
        '9PB' => 'E02004527',
        '9PD' => 'E02004527',
        '9PE' => 'E02004527',
        '9PF' => 'E02004527',
        '9PG' => 'E02004527',
        '9PH' => 'E02004527',
        '9PJ' => 'E02004888',
        '9PL' => 'E02004888',
        '9PN' => 'E02004527',
        '9PP' => 'E02004527',
        '9PQ' => 'E02004527',
        '9PR' => 'E02004527',
        '9PS' => 'E02004527',
        '9PT' => 'E02004527',
        '9PU' => 'E02004527',
        '9PW' => 'E02004527',
        '9PX' => 'E02004888',
        '9PY' => 'E02004527',
        '9PZ' => 'E02004527',
        '9QA' => 'E02004888',
        '9QB' => 'E02004527',
        '9QD' => 'E02004888',
        '9QE' => 'E02004888',
        '9QF' => 'E02004888',
        '9QG' => 'E02004888',
        '9QH' => 'E02004888',
        '9QJ' => 'E02004888',
        '9QL' => 'E02004888',
        '9QN' => 'E02004888',
        '9QP' => 'E02004888',
        '9QQ' => 'E02004527',
        '9QR' => 'E02004544',
        '9QS' => 'E02004888',
        '9QT' => 'E02004527',
        '9QU' => 'E02004888',
        '9QW' => 'E02004888',
        '9QX' => 'E02004527',
        '9QY' => 'E02004888',
        '9QZ' => 'E02004527',
        '9RA' => 'E02004527',
        '9RB' => 'E02004527',
        '9RD' => 'E02004527',
        '9RE' => 'E02004888',
        '9RF' => 'E02004527',
        '9RG' => 'E02004527',
        '9RH' => 'E02004527',
        '9RJ' => 'E02004527',
        '9RL' => 'E02004527',
        '9RN' => 'E02004527',
        '9RP' => 'E02004888',
        '9RQ' => 'E02004527',
        '9RR' => 'E02004527',
        '9RS' => 'E02004527',
        '9RT' => 'E02004527',
        '9TA' => 'E02004888',
        '9TB' => 'E02004888',
        '9TD' => 'E02004888',
        '9UZ' => 'E02004527',
        '9WA' => 'E02004888',
        '9WB' => 'E02004527',
        '9WD' => 'E02004527',
        '9WE' => 'E02004527',
        '9WF' => 'E02004527',
        '9WG' => 'E02004527',
        '9WH' => 'E02004527',
        '9WJ' => 'E02004527',
        '9WL' => 'E02004527',
        '9WN' => 'E02004527',
        '9WP' => 'E02004527',
        '9WQ' => 'E02004527',
        '9WR' => 'E02004527',
        '9WS' => 'E02004527',
        '9WT' => 'E02004527',
        '9WU' => 'E02004527',
        '9WW' => 'E02004527',
        '9WX' => 'E02004527',
        '9WY' => 'E02004527',
        '9WZ' => 'E02004888',
        '9XQ' => 'E02004888',
        '9XZ' => 'E02004527',
        '9YR' => 'E02004527',
        '9YZ' => 'E02004527',
        '9ZA' => 'E02004527',
        '9ZQ' => 'E02004527',
        '9ZW' => 'E02004888',
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
