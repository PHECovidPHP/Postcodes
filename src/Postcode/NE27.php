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
final class NE27
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02001744',
        '0AB' => 'E02001748',
        '0AD' => 'E02001744',
        '0AE' => 'E02001744',
        '0AF' => 'E02001744',
        '0AG' => 'E02001744',
        '0AH' => 'E02001744',
        '0AJ' => 'E02001744',
        '0AL' => 'E02001744',
        '0AN' => 'E02001744',
        '0AP' => 'E02001744',
        '0AQ' => 'E02001744',
        '0AR' => 'E02001744',
        '0AS' => 'E02001744',
        '0AT' => 'E02001744',
        '0AU' => 'E02001744',
        '0AW' => 'E02001744',
        '0AX' => 'E02001744',
        '0AY' => 'E02001744',
        '0AZ' => 'E02001744',
        '0BA' => 'E02001744',
        '0BB' => 'E02001744',
        '0BD' => 'E02001748',
        '0BE' => 'E02001748',
        '0BF' => 'E02001748',
        '0BG' => 'E02001744',
        '0BH' => 'E02001748',
        '0BJ' => 'E02001748',
        '0BL' => 'E02001752',
        '0BN' => 'E02001744',
        '0BP' => 'E02001748',
        '0BQ' => 'E02001739',
        '0BS' => 'E02001748',
        '0BT' => 'E02001748',
        '0BU' => 'E02001748',
        '0BW' => 'E02001748',
        '0BX' => 'E02001748',
        '0BY' => 'E02001748',
        '0BZ' => 'E02001755',
        '0DA' => 'E02001755',
        '0DB' => 'E02001755',
        '0DD' => 'E02001755',
        '0DE' => 'E02001755',
        '0DF' => 'E02001755',
        '0DG' => 'E02001755',
        '0DH' => 'E02001755',
        '0DJ' => 'E02001755',
        '0DL' => 'E02001748',
        '0DN' => 'E02001748',
        '0DP' => 'E02001744',
        '0DQ' => 'E02001755',
        '0DR' => 'E02001744',
        '0DS' => 'E02001744',
        '0DT' => 'E02001748',
        '0DU' => 'E02001748',
        '0DW' => 'E02001748',
        '0DX' => 'E02001748',
        '0DY' => 'E02001748',
        '0DZ' => 'E02001748',
        '0EA' => 'E02001748',
        '0EB' => 'E02001748',
        '0ED' => 'E02001748',
        '0EE' => 'E02001748',
        '0EF' => 'E02001748',
        '0EG' => 'E02001748',
        '0EH' => 'E02001748',
        '0EJ' => 'E02001748',
        '0EL' => 'E02001748',
        '0EN' => 'E02001748',
        '0EP' => 'E02001748',
        '0EQ' => 'E02001748',
        '0ER' => 'E02001748',
        '0ES' => 'E02001748',
        '0ET' => 'E02001748',
        '0EU' => 'E02001748',
        '0EW' => 'E02001748',
        '0EX' => 'E02001748',
        '0EY' => 'E02001748',
        '0EZ' => 'E02001744',
        '0FA' => 'E02001744',
        '0FB' => 'E02001744',
        '0FD' => 'E02001748',
        '0FE' => 'E02001748',
        '0FF' => 'E02001744',
        '0FG' => 'E02001748',
        '0FH' => 'E02001744',
        '0FJ' => 'E02001744',
        '0FL' => 'E02001744',
        '0FN' => 'E02001744',
        '0FP' => 'E02001744',
        '0FQ' => 'E02001744',
        '0FR' => 'E02001744',
        '0FS' => 'E02001748',
        '0FT' => 'E02001744',
        '0FW' => 'E02001744',
        '0FX' => 'E02001744',
        '0FY' => 'E02001744',
        '0FZ' => 'E02001748',
        '0GA' => 'E02001744',
        '0GB' => 'E02001744',
        '0GD' => 'E02001744',
        '0GE' => 'E02001744',
        '0GF' => 'E02001744',
        '0GG' => 'E02001748',
        '0GH' => 'E02001748',
        '0GJ' => 'E02001748',
        '0GL' => 'E02001748',
        '0GN' => 'E02001748',
        '0GP' => 'E02001748',
        '0GQ' => 'E02001748',
        '0GR' => 'E02001748',
        '0GS' => 'E02001748',
        '0GT' => 'E02001748',
        '0GU' => 'E02001748',
        '0GW' => 'E02001748',
        '0GX' => 'E02001748',
        '0GY' => 'E02001748',
        '0GZ' => 'E02001755',
        '0HA' => 'E02001748',
        '0HB' => 'E02001744',
        '0HE' => 'E02001748',
        '0HF' => 'E02001755',
        '0HG' => 'E02001755',
        '0HH' => 'E02001744',
        '0HJ' => 'E02001744',
        '0HL' => 'E02001744',
        '0HN' => 'E02001744',
        '0HP' => 'E02001744',
        '0HQ' => 'E02001744',
        '0HR' => 'E02001744',
        '0HS' => 'E02001744',
        '0HT' => 'E02001755',
        '0HU' => 'E02001744',
        '0HW' => 'E02001744',
        '0HX' => 'E02001744',
        '0HY' => 'E02001755',
        '0HZ' => 'E02001744',
        '0JA' => 'E02001755',
        '0JB' => 'E02001755',
        '0JD' => 'E02001744',
        '0JE' => 'E02001744',
        '0JF' => 'E02001744',
        '0JG' => 'E02001744',
        '0JH' => 'E02001744',
        '0JJ' => 'E02001744',
        '0JL' => 'E02005717',
        '0JN' => 'E02001744',
        '0JP' => 'E02001744',
        '0JQ' => 'E02001744',
        '0JR' => 'E02001744',
        '0JS' => 'E02001744',
        '0JT' => 'E02001744',
        '0JU' => 'E02001744',
        '0JW' => 'E02001744',
        '0JX' => 'E02001744',
        '0JY' => 'E02001744',
        '0JZ' => 'E02001755',
        '0LA' => 'E02001755',
        '0LB' => 'E02001748',
        '0LD' => 'E02001748',
        '0LE' => 'E02001744',
        '0LF' => 'E02001744',
        '0LG' => 'E02001744',
        '0LH' => 'E02001748',
        '0LJ' => 'E02001748',
        '0LL' => 'E02001748',
        '0LN' => 'E02001748',
        '0LP' => 'E02001752',
        '0LQ' => 'E02001748',
        '0LR' => 'E02001746',
        '0LS' => 'E02001746',
        '0LT' => 'E02001746',
        '0LU' => 'E02001746',
        '0LW' => 'E02001748',
        '0LX' => 'E02001746',
        '0LY' => 'E02001744',
        '0LZ' => 'E02001744',
        '0NA' => 'E02001752',
        '0NB' => 'E02001752',
        '0ND' => 'E02001755',
        '0NE' => 'E02001748',
        '0NF' => 'E02001748',
        '0NG' => 'E02001748',
        '0NH' => 'E02001748',
        '0NJ' => 'E02001748',
        '0NL' => 'E02001748',
        '0NN' => 'E02001748',
        '0NP' => 'E02001748',
        '0NQ' => 'E02001748',
        '0NR' => 'E02001748',
        '0NS' => 'E02001744',
        '0NT' => 'E02001744',
        '0NU' => 'E02001748',
        '0NW' => 'E02001744',
        '0NX' => 'E02001748',
        '0NY' => 'E02001755',
        '0NZ' => 'E02001755',
        '0PA' => 'E02001748',
        '0PB' => 'E02001748',
        '0PD' => 'E02001748',
        '0PE' => 'E02001748',
        '0PF' => 'E02001748',
        '0PG' => 'E02001748',
        '0PH' => 'E02001748',
        '0PJ' => 'E02001755',
        '0PL' => 'E02001748',
        '0PN' => 'E02001748',
        '0PP' => 'E02001748',
        '0PQ' => 'E02001748',
        '0PR' => 'E02001748',
        '0PS' => 'E02001748',
        '0PT' => 'E02001748',
        '0PU' => 'E02001748',
        '0PW' => 'E02001748',
        '0PX' => 'E02001748',
        '0PY' => 'E02001748',
        '0PZ' => 'E02001748',
        '0QA' => 'E02001748',
        '0QB' => 'E02001748',
        '0QD' => 'E02001746',
        '0QE' => 'E02001752',
        '0QF' => 'E02001752',
        '0QG' => 'E02001752',
        '0QH' => 'E02001752',
        '0QJ' => 'E02001752',
        '0QN' => 'E02001752',
        '0QP' => 'E02001744',
        '0QQ' => 'E02001748',
        '0QR' => 'E02001744',
        '0QS' => 'E02001744',
        '0QT' => 'E02001744',
        '0QU' => 'E02001744',
        '0QW' => 'E02001752',
        '0QX' => 'E02001744',
        '0QY' => 'E02001744',
        '0QZ' => 'E02001744',
        '0RA' => 'E02001748',
        '0RB' => 'E02001748',
        '0RD' => 'E02001748',
        '0RE' => 'E02001744',
        '0RF' => 'E02001748',
        '0RG' => 'E02001748',
        '0RH' => 'E02001748',
        '0RJ' => 'E02001748',
        '0RL' => 'E02001748',
        '0RN' => 'E02001748',
        '0RP' => 'E02001748',
        '0RQ' => 'E02001755',
        '0RR' => 'E02001748',
        '0RS' => 'E02001748',
        '0RT' => 'E02001748',
        '0RU' => 'E02001748',
        '0RW' => 'E02001748',
        '0RX' => 'E02001744',
        '0RY' => 'E02001748',
        '0RZ' => 'E02001748',
        '0SA' => 'E02001748',
        '0SB' => 'E02001748',
        '0SD' => 'E02001748',
        '0SE' => 'E02001748',
        '0SF' => 'E02001748',
        '0SG' => 'E02001748',
        '0SH' => 'E02001744',
        '0SJ' => 'E02001748',
        '0SL' => 'E02001748',
        '0SN' => 'E02001748',
        '0SR' => 'E02001744',
        '0ST' => 'E02001748',
        '0SU' => 'E02001744',
        '0SX' => 'E02001744',
        '0SY' => 'E02001744',
        '0SZ' => 'E02001744',
        '0TA' => 'E02001744',
        '0TB' => 'E02001748',
        '0TD' => 'E02001748',
        '0TE' => 'E02001748',
        '0TF' => 'E02001748',
        '0TG' => 'E02001748',
        '0TH' => 'E02001748',
        '0TJ' => 'E02001748',
        '0TL' => 'E02001748',
        '0TN' => 'E02001748',
        '0TP' => 'E02001748',
        '0TQ' => 'E02001748',
        '0TR' => 'E02001748',
        '0TS' => 'E02001748',
        '0TT' => 'E02001748',
        '0TU' => 'E02001748',
        '0TW' => 'E02001748',
        '0TX' => 'E02001748',
        '0TY' => 'E02001748',
        '0TZ' => 'E02001748',
        '0UA' => 'E02001748',
        '0UB' => 'E02001748',
        '0UD' => 'E02001748',
        '0UE' => 'E02001748',
        '0UF' => 'E02001748',
        '0UG' => 'E02001748',
        '0UH' => 'E02001748',
        '0UN' => 'E02001755',
        '0UP' => 'E02001755',
        '0UR' => 'E02001755',
        '0UT' => 'E02001755',
        '0UU' => 'E02001755',
        '0UW' => 'E02001755',
        '0UX' => 'E02001755',
        '0UY' => 'E02001755',
        '0UZ' => 'E02001755',
        '0WB' => 'E02001752',
        '0WH' => 'E02001752',
        '0WJ' => 'E02001752',
        '0WL' => 'E02001752',
        '0WN' => 'E02001752',
        '0WP' => 'E02001752',
        '0WQ' => 'E02001752',
        '0WR' => 'E02001752',
        '0WS' => 'E02001752',
        '0WT' => 'E02001752',
        '0WU' => 'E02001752',
        '0WW' => 'E02001755',
        '0WX' => 'E02001752',
        '0WY' => 'E02001752',
        '0WZ' => 'E02001752',
        '0XA' => 'E02001752',
        '0XB' => 'E02001752',
        '0XD' => 'E02001744',
        '0XE' => 'E02001744',
        '0XF' => 'E02001744',
        '0XG' => 'E02001744',
        '0XH' => 'E02001744',
        '0XL' => 'E02001744',
        '0XN' => 'E02001744',
        '0XP' => 'E02001744',
        '0XQ' => 'E02001744',
        '0YA' => 'E02001752',
        '0YB' => 'E02001752',
        '0YD' => 'E02001752',
        '0YE' => 'E02001752',
        '0YF' => 'E02001752',
        '0YG' => 'E02001752',
        '0YH' => 'E02001752',
        '0YJ' => 'E02001752',
        '0YL' => 'E02001752',
        '0YN' => 'E02001752',
        '0YP' => 'E02001748',
        '0YQ' => 'E02001752',
        '0YR' => 'E02001748',
        '0YS' => 'E02001748',
        '0YT' => 'E02001752',
        '0YU' => 'E02001748',
        '0YW' => 'E02001752',
        '0YX' => 'E02001748',
        '0YY' => 'E02001748',
        '0YZ' => 'E02001748',
        '0ZP' => 'E02001752',
        '0ZQ' => 'E02001752',
        '0ZR' => 'E02001752',
        '0ZS' => 'E02001752',
        '0ZT' => 'E02001752',
        '0ZX' => 'E02001752',
        '9AD' => 'E02001748',
        '9AE' => 'E02001748',
        '9AF' => 'E02001752',
        '9AG' => 'E02001752',
        '9AH' => 'E02001752',
        '9AJ' => 'E02001752',
        '9AL' => 'E02001752',
        '9AN' => 'E02001748',
        '9AP' => 'E02001748',
        '9AQ' => 'E02001748',
        '9AR' => 'E02001748',
        '9AS' => 'E02001748',
        '9BA' => 'E02001748',
        '9BB' => 'E02001748',
        '9BD' => 'E02001748',
        '9BE' => 'E02001752',
        '9BF' => 'E02001752',
        '9BG' => 'E02001748',
        '9BH' => 'E02001752',
        '9BJ' => 'E02001752',
        '9BL' => 'E02001748',
        '9BN' => 'E02001748',
        '9BP' => 'E02001752',
        '9BQ' => 'E02001752',
        '9BR' => 'E02001752',
        '9BS' => 'E02001752',
        '9BT' => 'E02001752',
        '9BU' => 'E02001752',
        '9BW' => 'E02001752',
        '9BX' => 'E02001752',
        '9BY' => 'E02001752',
        '9BZ' => 'E02001752',
        '9DA' => 'E02001752',
        '9DB' => 'E02001752',
        '9DD' => 'E02001752',
        '9SA' => 'E02001748',
        '9SB' => 'E02001748',
        '9SD' => 'E02001748',
        '9SE' => 'E02001748',
        '9SF' => 'E02001748',
        '9SG' => 'E02001748',
        '9SH' => 'E02001748',
        '9SJ' => 'E02001748',
        '9SL' => 'E02001748',
        '9SN' => 'E02001748',
        '9SP' => 'E02001748',
        '9SQ' => 'E02001748',
        '9SR' => 'E02001748',
        '9SS' => 'E02001748',
        '9ST' => 'E02001748',
        '9SU' => 'E02001748',
        '9SW' => 'E02001748',
        '9SX' => 'E02001748',
        '9SY' => 'E02001748',
        '9SZ' => 'E02001748',
        '9TA' => 'E02001748',
        '9TB' => 'E02001748',
        '9TD' => 'E02001748',
        '9ZZ' => 'E02001748',
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
