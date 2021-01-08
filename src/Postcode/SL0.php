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
final class SL0
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02003695',
        '0AB' => 'E02003695',
        '0AD' => 'E02003695',
        '0AE' => 'E02003695',
        '0AF' => 'E02003695',
        '0AG' => 'E02003695',
        '0AH' => 'E02003695',
        '0AJ' => 'E02003695',
        '0AL' => 'E02003695',
        '0AN' => 'E02003695',
        '0AP' => 'E02003695',
        '0AQ' => 'E02003695',
        '0AR' => 'E02003695',
        '0AS' => 'E02003695',
        '0AT' => 'E02003695',
        '0AU' => 'E02003695',
        '0AW' => 'E02003695',
        '0AX' => 'E02003695',
        '0AY' => 'E02003695',
        '0AZ' => 'E02003695',
        '0BA' => 'E02003695',
        '0BB' => 'E02003695',
        '0BD' => 'E02003695',
        '0BE' => 'E02003695',
        '0BG' => 'E02003695',
        '0BH' => 'E02003695',
        '0BJ' => 'E02003695',
        '0BL' => 'E02003695',
        '0BN' => 'E02003695',
        '0BP' => 'E02003695',
        '0BQ' => 'E02003695',
        '0BS' => 'E02003695',
        '0BT' => 'E02003695',
        '0BU' => 'E02003695',
        '0BW' => 'E02003695',
        '0BX' => 'E02003695',
        '0BY' => 'E02003695',
        '0BZ' => 'E02003695',
        '0DA' => 'E02003695',
        '0DB' => 'E02003695',
        '0DD' => 'E02003695',
        '0DE' => 'E02003695',
        '0DF' => 'E02003695',
        '0DG' => 'E02003695',
        '0DH' => 'E02003695',
        '0DJ' => 'E02003695',
        '0DL' => 'E02003695',
        '0DN' => 'E02003695',
        '0DP' => 'E02003695',
        '0DQ' => 'E02003695',
        '0DR' => 'E02003695',
        '0DS' => 'E02003695',
        '0DT' => 'E02003695',
        '0DU' => 'E02003695',
        '0DW' => 'E02003695',
        '0DX' => 'E02003695',
        '0DY' => 'E02003695',
        '0DZ' => 'E02003695',
        '0EA' => 'E02003695',
        '0EB' => 'E02003695',
        '0ED' => 'E02003695',
        '0EE' => 'E02003695',
        '0EF' => 'E02003695',
        '0EG' => 'E02003695',
        '0EH' => 'E02003695',
        '0EJ' => 'E02003695',
        '0EL' => 'E02003695',
        '0EN' => 'E02003695',
        '0EP' => 'E02003695',
        '0EQ' => 'E02003695',
        '0ER' => 'E02003695',
        '0ES' => 'E02003695',
        '0ET' => 'E02003695',
        '0EU' => 'E02003695',
        '0EW' => 'E02003695',
        '0EX' => 'E02003695',
        '0EY' => 'E02003695',
        '0EZ' => 'E02003695',
        '0FA' => 'E02003695',
        '0HA' => 'E02003695',
        '0HB' => 'E02003695',
        '0HD' => 'E02003695',
        '0HE' => 'E02003695',
        '0HF' => 'E02003695',
        '0HG' => 'E02003695',
        '0HH' => 'E02003695',
        '0HJ' => 'E02003695',
        '0HL' => 'E02003695',
        '0HN' => 'E02003695',
        '0HP' => 'E02003695',
        '0HQ' => 'E02003695',
        '0HR' => 'E02003695',
        '0HS' => 'E02003695',
        '0HT' => 'E02003695',
        '0HU' => 'E02003695',
        '0HW' => 'E02003695',
        '0HX' => 'E02003695',
        '0HY' => 'E02003695',
        '0HZ' => 'E02003695',
        '0JA' => 'E02003695',
        '0JB' => 'E02003692',
        '0JF' => 'E02003695',
        '0JG' => 'E02003692',
        '0JH' => 'E02003692',
        '0JJ' => 'E02003692',
        '0JL' => 'E02003695',
        '0JN' => 'E02003692',
        '0JP' => 'E02003695',
        '0JQ' => 'E02003692',
        '0JR' => 'E02003692',
        '0JS' => 'E02003692',
        '0JT' => 'E02003692',
        '0JU' => 'E02003692',
        '0JW' => 'E02003692',
        '0JX' => 'E02003692',
        '0JY' => 'E02003692',
        '0JZ' => 'E02003692',
        '0LA' => 'E02003692',
        '0LB' => 'E02003692',
        '0LD' => 'E02003692',
        '0LE' => 'E02003692',
        '0LF' => 'E02003692',
        '0LG' => 'E02003692',
        '0LH' => 'E02003692',
        '0LJ' => 'E02003692',
        '0LL' => 'E02003692',
        '0LN' => 'E02003692',
        '0LP' => 'E02003692',
        '0LQ' => 'E02003692',
        '0LR' => 'E02003692',
        '0LS' => 'E02003692',
        '0LT' => 'E02003692',
        '0LU' => 'E02003692',
        '0LW' => 'E02003692',
        '0LX' => 'E02003692',
        '0LZ' => 'E02003692',
        '0NA' => 'E02003695',
        '0NB' => 'E02003695',
        '0ND' => 'E02003695',
        '0NE' => 'E02003695',
        '0NF' => 'E02003695',
        '0NG' => 'E02003695',
        '0NH' => 'E02003695',
        '0NJ' => 'E02003695',
        '0NL' => 'E02003695',
        '0NN' => 'E02003695',
        '0NP' => 'E02003691',
        '0NQ' => 'E02003695',
        '0NR' => 'E02003692',
        '0NS' => 'E02003691',
        '0NT' => 'E02003691',
        '0NU' => 'E02003691',
        '0NW' => 'E02003695',
        '0NX' => 'E02003692',
        '0NY' => 'E02003695',
        '0NZ' => 'E02003695',
        '0PA' => 'E02003695',
        '0PB' => 'E02003695',
        '0PD' => 'E02003695',
        '0PE' => 'E02003695',
        '0PF' => 'E02003695',
        '0PG' => 'E02003695',
        '0PH' => 'E02003695',
        '0PJ' => 'E02003695',
        '0PL' => 'E02003695',
        '0PN' => 'E02003695',
        '0PP' => 'E02003695',
        '0PQ' => 'E02003695',
        '0PR' => 'E02003695',
        '0PS' => 'E02003695',
        '0PT' => 'E02003695',
        '0PU' => 'E02003695',
        '0PW' => 'E02003695',
        '0PX' => 'E02003695',
        '0PY' => 'E02003695',
        '0PZ' => 'E02003695',
        '0QA' => 'E02003695',
        '0QB' => 'E02003695',
        '0QD' => 'E02003695',
        '0QE' => 'E02003695',
        '0QF' => 'E02003695',
        '0QG' => 'E02003695',
        '0QH' => 'E02003695',
        '0QJ' => 'E02003695',
        '0QL' => 'E02003695',
        '0QN' => 'E02003695',
        '0QP' => 'E02003695',
        '0QQ' => 'E02003695',
        '0QR' => 'E02003695',
        '0QS' => 'E02003695',
        '0QT' => 'E02003695',
        '0QU' => 'E02003695',
        '0QW' => 'E02003695',
        '0QX' => 'E02003695',
        '0QY' => 'E02003695',
        '0QZ' => 'E02003695',
        '0RA' => 'E02003695',
        '0RB' => 'E02003695',
        '0RD' => 'E02003695',
        '0RE' => 'E02003695',
        '0RF' => 'E02003695',
        '0RG' => 'E02003695',
        '0RH' => 'E02003695',
        '0RJ' => 'E02003695',
        '0RL' => 'E02003695',
        '0RN' => 'E02003695',
        '0RP' => 'E02003695',
        '0RQ' => 'E02003695',
        '0RR' => 'E02003695',
        '0RS' => 'E02003695',
        '0RT' => 'E02003695',
        '0RU' => 'E02003695',
        '0RW' => 'E02003695',
        '0RX' => 'E02003695',
        '0RY' => 'E02003695',
        '0RZ' => 'E02003695',
        '0SA' => 'E02003695',
        '0SB' => 'E02003695',
        '0SD' => 'E02003695',
        '0SE' => 'E02003695',
        '0SF' => 'E02003695',
        '0SG' => 'E02003695',
        '0SH' => 'E02003695',
        '0SJ' => 'E02003695',
        '0SL' => 'E02003695',
        '0SX' => 'E02003695',
        '0SY' => 'E02003695',
        '0SZ' => 'E02003695',
        '0WA' => 'E02003695',
        '0WB' => 'E02003695',
        '0WD' => 'E02003695',
        '0WE' => 'E02003695',
        '0WP' => 'E02003695',
        '0WQ' => 'E02003695',
        '0WR' => 'E02003695',
        '0WS' => 'E02003695',
        '0WT' => 'E02003695',
        '0WU' => 'E02003695',
        '0WW' => 'E02003695',
        '0WX' => 'E02003695',
        '0WY' => 'E02003695',
        '0WZ' => 'E02003695',
        '0XA' => 'E02003695',
        '0XG' => 'E02003695',
        '0XJ' => 'E02003695',
        '0XN' => 'E02003695',
        '0XP' => 'E02003695',
        '0XQ' => 'E02003695',
        '0XR' => 'E02003695',
        '0XS' => 'E02003695',
        '0XT' => 'E02003695',
        '0XU' => 'E02003417',
        '0XX' => 'E02003695',
        '0XZ' => 'E02003695',
        '0YA' => 'E02003695',
        '0YB' => 'E02003695',
        '0YD' => 'E02003695',
        '0YH' => 'E02003695',
        '0YJ' => 'E02003695',
        '0YL' => 'E02003695',
        '0YP' => 'E02003695',
        '0YQ' => 'E02003695',
        '0YR' => 'E02003695',
        '0YS' => 'E02003695',
        '0YT' => 'E02003695',
        '0YU' => 'E02003695',
        '0YX' => 'E02003695',
        '0YY' => 'E02003695',
        '0YZ' => 'E02003695',
        '0ZG' => 'E02003695',
        '0ZH' => 'E02003417',
        '0ZJ' => 'E02003695',
        '0ZL' => 'E02003695',
        '0ZN' => 'E02003695',
        '0ZP' => 'E02003695',
        '0ZQ' => 'E02003417',
        '0ZR' => 'E02003695',
        '1AA' => 'E02003695',
        '1AB' => 'E02003695',
        '1AD' => 'E02003417',
        '1AE' => 'E02003417',
        '1AF' => 'E02003417',
        '1AH' => 'E02003695',
        '1AJ' => 'E02003417',
        '1AL' => 'E02003417',
        '1AN' => 'E02003695',
        '1AP' => 'E02003417',
        '1AQ' => 'E02003695',
        '1AR' => 'E02003695',
        '9AA' => 'E02003695',
        '9AB' => 'E02003695',
        '9AD' => 'E02003695',
        '9AE' => 'E02003695',
        '9AF' => 'E02003695',
        '9AG' => 'E02003695',
        '9AH' => 'E02003695',
        '9AJ' => 'E02003695',
        '9AL' => 'E02003695',
        '9AN' => 'E02003695',
        '9AP' => 'E02003695',
        '9AQ' => 'E02003695',
        '9AR' => 'E02003695',
        '9AS' => 'E02003695',
        '9AT' => 'E02003695',
        '9AU' => 'E02003695',
        '9AW' => 'E02003695',
        '9AX' => 'E02003695',
        '9AY' => 'E02003695',
        '9AZ' => 'E02003695',
        '9BA' => 'E02003695',
        '9BB' => 'E02003695',
        '9BD' => 'E02003695',
        '9BE' => 'E02003695',
        '9BF' => 'E02003695',
        '9BG' => 'E02003695',
        '9BH' => 'E02003695',
        '9BJ' => 'E02003695',
        '9BL' => 'E02003695',
        '9BN' => 'E02003695',
        '9BP' => 'E02003695',
        '9BQ' => 'E02003695',
        '9BS' => 'E02003695',
        '9BU' => 'E02003695',
        '9BW' => 'E02003695',
        '9BX' => 'E02003695',
        '9BY' => 'E02003695',
        '9BZ' => 'E02003695',
        '9DA' => 'E02003695',
        '9DB' => 'E02003695',
        '9DD' => 'E02003695',
        '9DE' => 'E02003695',
        '9DF' => 'E02003695',
        '9DG' => 'E02003695',
        '9DH' => 'E02003695',
        '9DJ' => 'E02003695',
        '9DL' => 'E02003695',
        '9DN' => 'E02003695',
        '9DP' => 'E02003695',
        '9DR' => 'E02003695',
        '9DS' => 'E02003695',
        '9DT' => 'E02003695',
        '9DU' => 'E02003695',
        '9DW' => 'E02003695',
        '9DX' => 'E02003695',
        '9DY' => 'E02003695',
        '9EA' => 'E02003695',
        '9EB' => 'E02003695',
        '9ED' => 'E02003695',
        '9EE' => 'E02003695',
        '9EF' => 'E02003695',
        '9EG' => 'E02003695',
        '9EH' => 'E02003695',
        '9EJ' => 'E02003695',
        '9EL' => 'E02003695',
        '9EN' => 'E02003695',
        '9EP' => 'E02003695',
        '9EQ' => 'E02003695',
        '9ER' => 'E02003695',
        '9ES' => 'E02003695',
        '9ET' => 'E02003695',
        '9EU' => 'E02003695',
        '9EW' => 'E02003695',
        '9EX' => 'E02003695',
        '9EY' => 'E02003695',
        '9EZ' => 'E02003695',
        '9FS' => 'E02003695',
        '9HD' => 'E02003695',
        '9HE' => 'E02003695',
        '9HF' => 'E02003695',
        '9HG' => 'E02003695',
        '9HH' => 'E02003695',
        '9HJ' => 'E02003695',
        '9HL' => 'E02003695',
        '9HN' => 'E02003695',
        '9HP' => 'E02003695',
        '9HQ' => 'E02003695',
        '9HR' => 'E02003695',
        '9HS' => 'E02003695',
        '9HT' => 'E02003695',
        '9HU' => 'E02003695',
        '9HW' => 'E02003695',
        '9HX' => 'E02003695',
        '9HY' => 'E02003695',
        '9HZ' => 'E02003695',
        '9JA' => 'E02003695',
        '9JB' => 'E02003695',
        '9JD' => 'E02003695',
        '9JE' => 'E02003695',
        '9JF' => 'E02003695',
        '9JG' => 'E02003695',
        '9JH' => 'E02003695',
        '9JJ' => 'E02003695',
        '9JL' => 'E02003695',
        '9JN' => 'E02003695',
        '9JP' => 'E02003695',
        '9JQ' => 'E02003695',
        '9JR' => 'E02003695',
        '9JS' => 'E02003695',
        '9JT' => 'E02003695',
        '9JU' => 'E02003695',
        '9JW' => 'E02003695',
        '9JX' => 'E02003695',
        '9JY' => 'E02003695',
        '9JZ' => 'E02003695',
        '9LA' => 'E02003695',
        '9LB' => 'E02003695',
        '9LD' => 'E02003695',
        '9LE' => 'E02003695',
        '9LF' => 'E02003695',
        '9LG' => 'E02003695',
        '9LH' => 'E02003695',
        '9LJ' => 'E02003695',
        '9LL' => 'E02003695',
        '9LN' => 'E02003695',
        '9LQ' => 'E02003695',
        '9LR' => 'E02003695',
        '9LS' => 'E02003695',
        '9LT' => 'E02003695',
        '9LU' => 'E02003695',
        '9LX' => 'E02003695',
        '9LY' => 'E02003695',
        '9LZ' => 'E02003695',
        '9NA' => 'E02003695',
        '9NB' => 'E02003695',
        '9ND' => 'E02003695',
        '9NE' => 'E02003695',
        '9NF' => 'E02003695',
        '9NG' => 'E02003695',
        '9NH' => 'E02003695',
        '9NJ' => 'E02003695',
        '9NL' => 'E02003695',
        '9NN' => 'E02003695',
        '9NP' => 'E02003695',
        '9NQ' => 'E02003695',
        '9NR' => 'E02003695',
        '9NT' => 'E02003695',
        '9NU' => 'E02003695',
        '9NW' => 'E02003695',
        '9NX' => 'E02003695',
        '9NY' => 'E02003695',
        '9NZ' => 'E02003695',
        '9PA' => 'E02003695',
        '9PH' => 'E02003695',
        '9PJ' => 'E02003695',
        '9PL' => 'E02003695',
        '9PN' => 'E02003695',
        '9PP' => 'E02003695',
        '9PR' => 'E02003695',
        '9PS' => 'E02003695',
        '9PT' => 'E02003695',
        '9PU' => 'E02003695',
        '9PW' => 'E02003695',
        '9PZ' => 'E02003417',
        '9QA' => 'E02003695',
        '9QB' => 'E02003695',
        '9QD' => 'E02003695',
        '9QE' => 'E02003695',
        '9QF' => 'E02003695',
        '9QG' => 'E02003695',
        '9QH' => 'E02003695',
        '9QJ' => 'E02003695',
        '9QL' => 'E02003695',
        '9QN' => 'E02003695',
        '9QP' => 'E02003695',
        '9QQ' => 'E02003695',
        '9QR' => 'E02003695',
        '9QS' => 'E02003695',
        '9QT' => 'E02003695',
        '9QU' => 'E02003695',
        '9QW' => 'E02003695',
        '9QX' => 'E02003695',
        '9QY' => 'E02003695',
        '9QZ' => 'E02003695',
        '9RA' => 'E02003695',
        '9RB' => 'E02003695',
        '9RD' => 'E02003695',
        '9RE' => 'E02003695',
        '9RF' => 'E02003692',
        '9RG' => 'E02003692',
        '9RH' => 'E02003692',
        '9RJ' => 'E02003692',
        '9RL' => 'E02003692',
        '9RN' => 'E02003692',
        '9RP' => 'E02003695',
        '9RQ' => 'E02003695',
        '9RR' => 'E02003416',
        '9RS' => 'E02003695',
        '9RT' => 'E02003692',
        '9RW' => 'E02003692',
        '9UZ' => 'E02003417',
        '9WA' => 'E02003695',
        '9WB' => 'E02003695',
        '9WD' => 'E02003695',
        '9WE' => 'E02003695',
        '9WF' => 'E02003695',
        '9WG' => 'E02003695',
        '9WH' => 'E02003695',
        '9WP' => 'E02003695',
        '9WQ' => 'E02003695',
        '9WS' => 'E02003695',
        '9WT' => 'E02003695',
        '9WU' => 'E02003695',
        '9WW' => 'E02003695',
        '9WX' => 'E02003417',
        '9WY' => 'E02003695',
        '9WZ' => 'E02003695',
        '9XJ' => 'E02003695',
        '9XL' => 'E02003695',
        '9XN' => 'E02003695',
        '9XP' => 'E02003695',
        '9XQ' => 'E02003695',
        '9XS' => 'E02003416',
        '9XT' => 'E02003695',
        '9XU' => 'E02003695',
        '9XX' => 'E02003695',
        '9YA' => 'E02003692',
        '9YB' => 'E02003695',
        '9YD' => 'E02003695',
        '9YE' => 'E02003695',
        '9YF' => 'E02003695',
        '9YG' => 'E02003692',
        '9YH' => 'E02003695',
        '9YJ' => 'E02003417',
        '9YL' => 'E02003695',
        '9YP' => 'E02003417',
        '9YQ' => 'E02003695',
        '9YR' => 'E02003695',
        '9YS' => 'E02003695',
        '9YT' => 'E02003695',
        '9YU' => 'E02003417',
        '9YX' => 'E02003695',
        '9ZJ' => 'E02003695',
        '9ZQ' => 'E02003695',
        '9ZR' => 'E02003695',
        '9ZW' => 'E02003695',
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