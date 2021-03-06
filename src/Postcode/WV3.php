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
final class WV3
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02002174',
        '0AB' => 'E02002174',
        '0AD' => 'E02002168',
        '0AE' => 'E02002168',
        '0AF' => 'E02002168',
        '0AG' => 'E02002168',
        '0AH' => 'E02002168',
        '0AJ' => 'E02002168',
        '0AL' => 'E02002168',
        '0AN' => 'E02002168',
        '0AP' => 'E02002168',
        '0AQ' => 'E02002168',
        '0AR' => 'E02002168',
        '0AS' => 'E02002168',
        '0AT' => 'E02002168',
        '0AU' => 'E02002168',
        '0AW' => 'E02002168',
        '0AX' => 'E02002168',
        '0AY' => 'E02002168',
        '0AZ' => 'E02002168',
        '0BA' => 'E02002168',
        '0BB' => 'E02002168',
        '0BD' => 'E02002168',
        '0BE' => 'E02002168',
        '0BF' => 'E02002168',
        '0BG' => 'E02002168',
        '0BH' => 'E02002168',
        '0BJ' => 'E02002168',
        '0BL' => 'E02002168',
        '0BN' => 'E02002168',
        '0BP' => 'E02002168',
        '0BQ' => 'E02002168',
        '0BS' => 'E02002168',
        '0BT' => 'E02002168',
        '0BU' => 'E02002168',
        '0BW' => 'E02002168',
        '0BX' => 'E02002168',
        '0BY' => 'E02002168',
        '0BZ' => 'E02002168',
        '0DA' => 'E02002168',
        '0DB' => 'E02002168',
        '0DD' => 'E02002168',
        '0DE' => 'E02002168',
        '0DF' => 'E02002168',
        '0DG' => 'E02002168',
        '0DJ' => 'E02006894',
        '0DL' => 'E02006894',
        '0DN' => 'E02002168',
        '0DQ' => 'E02002163',
        '0DR' => 'E02002168',
        '0DS' => 'E02002168',
        '0DT' => 'E02002168',
        '0DU' => 'E02006894',
        '0DW' => 'E02002168',
        '0DX' => 'E02002168',
        '0DY' => 'E02002168',
        '0DZ' => 'E02002168',
        '0EA' => 'E02002168',
        '0EB' => 'E02002168',
        '0ED' => 'E02006894',
        '0EE' => 'E02002168',
        '0EF' => 'E02002168',
        '0EG' => 'E02006894',
        '0EH' => 'E02002174',
        '0EJ' => 'E02002174',
        '0EL' => 'E02002174',
        '0EN' => 'E02002174',
        '0EP' => 'E02006894',
        '0EQ' => 'E02006894',
        '0ER' => 'E02002168',
        '0ES' => 'E02002168',
        '0ET' => 'E02002168',
        '0EW' => 'E02002178',
        '0EX' => 'E02002168',
        '0EY' => 'E02002168',
        '0EZ' => 'E02002168',
        '0GD' => 'E02002163',
        '0GE' => 'E02002163',
        '0GF' => 'E02002163',
        '0GG' => 'E02002163',
        '0GH' => 'E02002163',
        '0GJ' => 'E02002168',
        '0GL' => 'E02002163',
        '0GN' => 'E02002168',
        '0GP' => 'E02002168',
        '0GQ' => 'E02002163',
        '0GR' => 'E02002163',
        '0GS' => 'E02002168',
        '0GT' => 'E02002168',
        '0GU' => 'E02002168',
        '0GW' => 'E02002163',
        '0GX' => 'E02002168',
        '0GY' => 'E02002163',
        '0GZ' => 'E02002163',
        '0HA' => 'E02002168',
        '0HB' => 'E02002168',
        '0HD' => 'E02002168',
        '0HE' => 'E02002168',
        '0HF' => 'E02002168',
        '0HG' => 'E02002168',
        '0HH' => 'E02002168',
        '0HJ' => 'E02002168',
        '0HL' => 'E02002168',
        '0HN' => 'E02002168',
        '0HP' => 'E02002168',
        '0HQ' => 'E02002168',
        '0HR' => 'E02002168',
        '0HS' => 'E02002168',
        '0HT' => 'E02002168',
        '0HU' => 'E02002168',
        '0HW' => 'E02002168',
        '0HX' => 'E02002168',
        '0HY' => 'E02002168',
        '0HZ' => 'E02002168',
        '0JA' => 'E02002168',
        '0JB' => 'E02002168',
        '0JD' => 'E02002168',
        '0JE' => 'E02002168',
        '0JF' => 'E02002168',
        '0JG' => 'E02002168',
        '0JH' => 'E02002168',
        '0JJ' => 'E02002168',
        '0JL' => 'E02002168',
        '0JN' => 'E02002168',
        '0JP' => 'E02002168',
        '0JQ' => 'E02002168',
        '0JR' => 'E02002168',
        '0JS' => 'E02002168',
        '0JT' => 'E02002168',
        '0JU' => 'E02002168',
        '0JW' => 'E02002168',
        '0JX' => 'E02002168',
        '0JY' => 'E02002168',
        '0JZ' => 'E02002168',
        '0LA' => 'E02002168',
        '0LB' => 'E02002168',
        '0LD' => 'E02002168',
        '0LE' => 'E02002168',
        '0LF' => 'E02002168',
        '0LG' => 'E02002168',
        '0LH' => 'E02002168',
        '0LJ' => 'E02002174',
        '0LL' => 'E02002168',
        '0LN' => 'E02002174',
        '0LP' => 'E02002168',
        '0LQ' => 'E02002168',
        '0LR' => 'E02002168',
        '0LS' => 'E02002168',
        '0LT' => 'E02002163',
        '0LU' => 'E02002168',
        '0LW' => 'E02002174',
        '0LX' => 'E02002168',
        '0LY' => 'E02002168',
        '0LZ' => 'E02002168',
        '0NA' => 'E02002168',
        '0NB' => 'E02002168',
        '0ND' => 'E02002168',
        '0NE' => 'E02002168',
        '0NF' => 'E02002168',
        '0NG' => 'E02002168',
        '0NH' => 'E02002168',
        '0NJ' => 'E02002168',
        '0NL' => 'E02002168',
        '0NP' => 'E02002168',
        '0NQ' => 'E02002168',
        '0NR' => 'E02002168',
        '0NS' => 'E02002168',
        '0NT' => 'E02002168',
        '0NU' => 'E02002168',
        '0NW' => 'E02002168',
        '0NX' => 'E02002168',
        '0NY' => 'E02002168',
        '0NZ' => 'E02002168',
        '0PA' => 'E02002168',
        '0PB' => 'E02002168',
        '0PD' => 'E02002168',
        '0PE' => 'E02002168',
        '0PF' => 'E02002168',
        '0PG' => 'E02002168',
        '0PH' => 'E02002168',
        '0PJ' => 'E02002168',
        '0PL' => 'E02002168',
        '0PN' => 'E02002168',
        '0PP' => 'E02002168',
        '0PQ' => 'E02002168',
        '0PR' => 'E02002168',
        '0PS' => 'E02002168',
        '0PT' => 'E02002168',
        '0PU' => 'E02002168',
        '0PW' => 'E02002168',
        '0PX' => 'E02002168',
        '0PY' => 'E02002168',
        '0PZ' => 'E02002168',
        '0QA' => 'E02002168',
        '0QB' => 'E02002168',
        '0QD' => 'E02002168',
        '0QH' => 'E02002168',
        '0QL' => 'E02002168',
        '0QN' => 'E02002168',
        '0QP' => 'E02002168',
        '0QQ' => 'E02002168',
        '0QR' => 'E02002168',
        '0QS' => 'E02002168',
        '0QT' => 'E02002168',
        '0QU' => 'E02002168',
        '0QW' => 'E02002168',
        '0QX' => 'E02002168',
        '0RA' => 'E02002168',
        '0RB' => 'E02002168',
        '0RD' => 'E02002168',
        '0RE' => 'E02002168',
        '0RG' => 'E02002168',
        '0RJ' => 'E02002168',
        '0RL' => 'E02002168',
        '0RN' => 'E02002168',
        '0RP' => 'E02002168',
        '0RQ' => 'E02002168',
        '0RR' => 'E02002168',
        '0RS' => 'E02002168',
        '0RT' => 'E02002168',
        '0RU' => 'E02002168',
        '0RW' => 'E02002168',
        '0RX' => 'E02002168',
        '0RY' => 'E02002168',
        '0SA' => 'E02002163',
        '0SB' => 'E02002168',
        '0SD' => 'E02002168',
        '0SE' => 'E02002168',
        '0SF' => 'E02002168',
        '0SG' => 'E02002168',
        '0SH' => 'E02002168',
        '0SJ' => 'E02002168',
        '0SL' => 'E02002168',
        '0SN' => 'E02002168',
        '0SP' => 'E02002168',
        '0SQ' => 'E02002168',
        '0SR' => 'E02002168',
        '0SS' => 'E02002168',
        '0ST' => 'E02002168',
        '0SU' => 'E02002168',
        '0SW' => 'E02002168',
        '0SX' => 'E02002168',
        '0SY' => 'E02002168',
        '0SZ' => 'E02002168',
        '0TA' => 'E02002168',
        '0TD' => 'E02002168',
        '0TE' => 'E02002168',
        '0TF' => 'E02002168',
        '0TG' => 'E02002168',
        '0TH' => 'E02002168',
        '0TL' => 'E02002168',
        '0TN' => 'E02002165',
        '0TQ' => 'E02002168',
        '0TR' => 'E02002168',
        '0TS' => 'E02002168',
        '0TT' => 'E02002165',
        '0TU' => 'E02002165',
        '0TW' => 'E02002168',
        '0TX' => 'E02002163',
        '0TY' => 'E02002165',
        '0TZ' => 'E02002168',
        '0UA' => 'E02002168',
        '0UB' => 'E02002168',
        '0UD' => 'E02002168',
        '0UE' => 'E02002168',
        '0UF' => 'E02002168',
        '0UG' => 'E02002165',
        '0UH' => 'E02002168',
        '0UJ' => 'E02002168',
        '0UL' => 'E02002168',
        '0UN' => 'E02002168',
        '0UP' => 'E02002168',
        '0UQ' => 'E02002168',
        '0UR' => 'E02002168',
        '0UT' => 'E02002168',
        '0UU' => 'E02002168',
        '0UW' => 'E02002168',
        '0UX' => 'E02002168',
        '0UY' => 'E02002168',
        '0UZ' => 'E02002168',
        '0WP' => 'E02002168',
        '0WU' => 'E02002163',
        '0WZ' => 'E02002163',
        '0XA' => 'E02002168',
        '0XB' => 'E02002163',
        '0XD' => 'E02002168',
        '0XE' => 'E02002168',
        '0XF' => 'E02002168',
        '0XH' => 'E02002163',
        '0XJ' => 'E02002168',
        '0XL' => 'E02002163',
        '0XN' => 'E02002163',
        '0XP' => 'E02002163',
        '0XQ' => 'E02002168',
        '0XR' => 'E02002163',
        '0XS' => 'E02002163',
        '0XT' => 'E02002168',
        '0XU' => 'E02002163',
        '0XW' => 'E02002168',
        '0XX' => 'E02002163',
        '0XY' => 'E02002168',
        '0XZ' => 'E02002163',
        '0YA' => 'E02002168',
        '0YB' => 'E02002163',
        '0YD' => 'E02002163',
        '0YE' => 'E02002168',
        '0YG' => 'E02002163',
        '0YH' => 'E02002163',
        '0YL' => 'E02002168',
        '0YN' => 'E02002168',
        '0YP' => 'E02002163',
        '0YQ' => 'E02002163',
        '0YR' => 'E02002168',
        '0YS' => 'E02002168',
        '0YT' => 'E02002168',
        '0YW' => 'E02002163',
        '0ZA' => 'E02002163',
        '0ZF' => 'E02002163',
        '0ZH' => 'E02002163',
        '0ZL' => 'E02002163',
        '0ZQ' => 'E02002163',
        '0ZW' => 'E02002163',
        '0ZX' => 'E02002163',
        '7AA' => 'E02002168',
        '7AB' => 'E02002174',
        '7AD' => 'E02002163',
        '7AE' => 'E02002168',
        '7AF' => 'E02002168',
        '7AG' => 'E02002168',
        '7AH' => 'E02002168',
        '7AJ' => 'E02002174',
        '7AL' => 'E02002174',
        '7AN' => 'E02002174',
        '7AP' => 'E02002174',
        '7AQ' => 'E02002174',
        '7AR' => 'E02002174',
        '7AS' => 'E02002174',
        '7AT' => 'E02002168',
        '7AU' => 'E02002168',
        '7AW' => 'E02002174',
        '7AX' => 'E02002168',
        '7AY' => 'E02002168',
        '7AZ' => 'E02002168',
        '7BA' => 'E02002168',
        '7BB' => 'E02002163',
        '7BD' => 'E02002174',
        '7BE' => 'E02002174',
        '7BG' => 'E02002174',
        '7BH' => 'E02002174',
        '7BJ' => 'E02002174',
        '7BL' => 'E02002174',
        '7BN' => 'E02002174',
        '7BP' => 'E02002174',
        '7BQ' => 'E02002174',
        '7BS' => 'E02002174',
        '7BT' => 'E02002174',
        '7BU' => 'E02002174',
        '7BW' => 'E02002174',
        '7BX' => 'E02002174',
        '7BY' => 'E02002174',
        '7BZ' => 'E02002174',
        '7DB' => 'E02002174',
        '7DD' => 'E02002163',
        '7DF' => 'E02002174',
        '7DG' => 'E02002174',
        '7DH' => 'E02002174',
        '7DJ' => 'E02002174',
        '7DL' => 'E02002174',
        '7DN' => 'E02002174',
        '7DP' => 'E02002174',
        '7DQ' => 'E02002174',
        '7DR' => 'E02002174',
        '7DS' => 'E02002174',
        '7DT' => 'E02002174',
        '7DU' => 'E02002174',
        '7DW' => 'E02002174',
        '7DX' => 'E02002174',
        '7DY' => 'E02002174',
        '7DZ' => 'E02002174',
        '7EA' => 'E02002174',
        '7EB' => 'E02002174',
        '7ED' => 'E02002174',
        '7EE' => 'E02002174',
        '7EF' => 'E02002174',
        '7EG' => 'E02002174',
        '7EH' => 'E02002174',
        '7EJ' => 'E02002174',
        '7EL' => 'E02002174',
        '7EN' => 'E02002174',
        '7EP' => 'E02002174',
        '7ER' => 'E02002174',
        '7ES' => 'E02002174',
        '7ET' => 'E02002174',
        '7EU' => 'E02002174',
        '7EW' => 'E02002174',
        '7EX' => 'E02002174',
        '7EY' => 'E02002174',
        '7EZ' => 'E02002174',
        '7HA' => 'E02002174',
        '7HB' => 'E02002174',
        '7HD' => 'E02002174',
        '7HE' => 'E02002169',
        '7HF' => 'E02002169',
        '7HG' => 'E02002169',
        '7HH' => 'E02002169',
        '7HJ' => 'E02002169',
        '7HL' => 'E02002169',
        '7HN' => 'E02002169',
        '7HQ' => 'E02002174',
        '7HR' => 'E02002169',
        '7HS' => 'E02002174',
        '7HT' => 'E02002169',
        '7HU' => 'E02002169',
        '7HW' => 'E02002169',
        '7HX' => 'E02002174',
        '7HY' => 'E02002169',
        '7HZ' => 'E02002169',
        '7JA' => 'E02002169',
        '7JB' => 'E02002169',
        '7JD' => 'E02002174',
        '7JE' => 'E02002174',
        '7JF' => 'E02002169',
        '7JG' => 'E02002169',
        '7JH' => 'E02002169',
        '7JJ' => 'E02002169',
        '7JL' => 'E02002169',
        '7JN' => 'E02002169',
        '7JP' => 'E02002169',
        '7JQ' => 'E02002169',
        '7JR' => 'E02002169',
        '7JS' => 'E02002169',
        '7JT' => 'E02002169',
        '7JU' => 'E02002169',
        '7JW' => 'E02002169',
        '7JX' => 'E02002169',
        '7JY' => 'E02002169',
        '7JZ' => 'E02002169',
        '7LB' => 'E02002169',
        '7LD' => 'E02002169',
        '7LE' => 'E02002169',
        '7LF' => 'E02002163',
        '7LG' => 'E02002169',
        '7LH' => 'E02002176',
        '7LJ' => 'E02002176',
        '7LP' => 'E02002174',
        '7LQ' => 'E02002176',
        '7LR' => 'E02002178',
        '7LS' => 'E02002174',
        '7LT' => 'E02002178',
        '7LU' => 'E02002178',
        '7LX' => 'E02002174',
        '7LY' => 'E02002174',
        '7LZ' => 'E02002174',
        '7NA' => 'E02002174',
        '7NB' => 'E02002174',
        '7ND' => 'E02002174',
        '7NE' => 'E02002174',
        '7NF' => 'E02002174',
        '7NG' => 'E02002169',
        '7NH' => 'E02002169',
        '7NJ' => 'E02002169',
        '7NL' => 'E02002169',
        '7NN' => 'E02002169',
        '7NP' => 'E02002169',
        '7NQ' => 'E02002169',
        '7NR' => 'E02002174',
        '7NS' => 'E02002169',
        '7NW' => 'E02002169',
        '7NY' => 'E02002168',
        '7WY' => 'E02002163',
        '7WZ' => 'E02002163',
        '7XW' => 'E02002163',
        '7YD' => 'E02002163',
        '7YE' => 'E02002163',
        '7YF' => 'E02002163',
        '7YG' => 'E02002163',
        '7YH' => 'E02002163',
        '7YJ' => 'E02002163',
        '7YL' => 'E02002163',
        '7YP' => 'E02002174',
        '7YQ' => 'E02002163',
        '7YR' => 'E02002163',
        '7YS' => 'E02002163',
        '7YT' => 'E02002163',
        '7YU' => 'E02002163',
        '7YW' => 'E02002163',
        '7YX' => 'E02002163',
        '7YY' => 'E02002174',
        '7YZ' => 'E02002163',
        '7ZB' => 'E02002174',
        '7ZD' => 'E02002163',
        '7ZE' => 'E02002163',
        '7ZQ' => 'E02002163',
        '7ZS' => 'E02002163',
        '8AA' => 'E02002169',
        '8AB' => 'E02002169',
        '8AD' => 'E02002169',
        '8AE' => 'E02002169',
        '8AF' => 'E02002169',
        '8AG' => 'E02002169',
        '8AH' => 'E02002169',
        '8AJ' => 'E02002169',
        '8AL' => 'E02002169',
        '8AN' => 'E02002169',
        '8AP' => 'E02002169',
        '8AQ' => 'E02002163',
        '8AR' => 'E02002169',
        '8AS' => 'E02002169',
        '8AT' => 'E02002169',
        '8AW' => 'E02002169',
        '8AY' => 'E02002169',
        '8AZ' => 'E02002169',
        '8BA' => 'E02002169',
        '8BB' => 'E02002169',
        '8BD' => 'E02002169',
        '8BE' => 'E02002169',
        '8BG' => 'E02002169',
        '8BH' => 'E02002169',
        '8BJ' => 'E02002169',
        '8BL' => 'E02002169',
        '8BN' => 'E02002169',
        '8BP' => 'E02002169',
        '8BQ' => 'E02002169',
        '8BS' => 'E02002169',
        '8BT' => 'E02002169',
        '8BU' => 'E02006186',
        '8BW' => 'E02002169',
        '8BX' => 'E02002163',
        '8BY' => 'E02002176',
        '8BZ' => 'E02002169',
        '8DA' => 'E02002167',
        '8DB' => 'E02002149',
        '8DG' => 'E02002176',
        '8DH' => 'E02002176',
        '8DJ' => 'E02002176',
        '8DL' => 'E02002176',
        '8DN' => 'E02002176',
        '8DP' => 'E02002176',
        '8DQ' => 'E02002163',
        '8DR' => 'E02002176',
        '8DS' => 'E02002176',
        '8DT' => 'E02002176',
        '8DU' => 'E02002176',
        '8DW' => 'E02002176',
        '8DX' => 'E02002176',
        '8DY' => 'E02002176',
        '8DZ' => 'E02002176',
        '8EA' => 'E02002176',
        '8EB' => 'E02002176',
        '8EE' => 'E02002176',
        '8EF' => 'E02002176',
        '8EG' => 'E02002169',
        '8EH' => 'E02002176',
        '8EJ' => 'E02002176',
        '8EL' => 'E02002176',
        '8EN' => 'E02002176',
        '8EP' => 'E02002169',
        '8EQ' => 'E02002176',
        '8ER' => 'E02002169',
        '8ES' => 'E02002169',
        '8ET' => 'E02002176',
        '8EU' => 'E02002176',
        '8EW' => 'E02002176',
        '8EX' => 'E02002176',
        '8EY' => 'E02002176',
        '8EZ' => 'E02002169',
        '8HA' => 'E02002176',
        '8HB' => 'E02002167',
        '8HE' => 'E02002167',
        '8HF' => 'E02002167',
        '8HG' => 'E02002167',
        '8HH' => 'E02002167',
        '8HJ' => 'E02002167',
        '8HL' => 'E02002167',
        '8HN' => 'E02002167',
        '8HP' => 'E02002167',
        '8HQ' => 'E02002167',
        '8HR' => 'E02002167',
        '8HS' => 'E02002167',
        '8HT' => 'E02002167',
        '8HU' => 'E02002167',
        '8HW' => 'E02002167',
        '8HX' => 'E02002167',
        '8HY' => 'E02002167',
        '8HZ' => 'E02002167',
        '8JA' => 'E02002167',
        '8JB' => 'E02002167',
        '8JD' => 'E02002167',
        '8JE' => 'E02002167',
        '8JF' => 'E02002167',
        '8JG' => 'E02002167',
        '8JL' => 'E02002167',
        '8JN' => 'E02002167',
        '8JP' => 'E02002167',
        '8JQ' => 'E02002167',
        '8JR' => 'E02002167',
        '8JS' => 'E02002167',
        '8JT' => 'E02006186',
        '8JU' => 'E02002167',
        '8JW' => 'E02002167',
        '8JX' => 'E02002167',
        '8JY' => 'E02002167',
        '8JZ' => 'E02002167',
        '8LA' => 'E02002167',
        '8LB' => 'E02002167',
        '8LD' => 'E02002167',
        '8LE' => 'E02002167',
        '8LG' => 'E02002167',
        '8LL' => 'E02002163',
        '8LN' => 'E02002176',
        '8LP' => 'E02002167',
        '8LR' => 'E02002176',
        '8LS' => 'E02002176',
        '8LT' => 'E02002176',
        '8LU' => 'E02002167',
        '8LW' => 'E02002167',
        '8LX' => 'E02002167',
        '8LY' => 'E02002167',
        '8LZ' => 'E02002167',
        '8NA' => 'E02006186',
        '8NB' => 'E02002167',
        '8ND' => 'E02002167',
        '8NE' => 'E02002167',
        '8NF' => 'E02002167',
        '8WZ' => 'E02002163',
        '8XZ' => 'E02002167',
        '8YB' => 'E02002163',
        '8YD' => 'E02002163',
        '8YE' => 'E02002163',
        '8YF' => 'E02002163',
        '8YG' => 'E02002163',
        '8YH' => 'E02002163',
        '8YJ' => 'E02002176',
        '8YL' => 'E02002163',
        '8YN' => 'E02002163',
        '8YP' => 'E02002176',
        '8YQ' => 'E02002163',
        '8YR' => 'E02002163',
        '8YS' => 'E02002163',
        '8YT' => 'E02002163',
        '8YU' => 'E02002163',
        '8YW' => 'E02002163',
        '8YX' => 'E02002163',
        '8YY' => 'E02002163',
        '8ZB' => 'E02002163',
        '8ZR' => 'E02002163',
        '8ZW' => 'E02002163',
        '8ZX' => 'E02002163',
        '9AA' => 'E02002169',
        '9AB' => 'E02002169',
        '9AD' => 'E02002163',
        '9AE' => 'E02002169',
        '9AF' => 'E02002167',
        '9AG' => 'E02002169',
        '9AH' => 'E02002167',
        '9AJ' => 'E02002167',
        '9AL' => 'E02002167',
        '9AN' => 'E02002167',
        '9AP' => 'E02002167',
        '9AQ' => 'E02002167',
        '9AR' => 'E02002167',
        '9AS' => 'E02002167',
        '9AT' => 'E02002167',
        '9AU' => 'E02002167',
        '9AW' => 'E02002167',
        '9AX' => 'E02002167',
        '9AY' => 'E02002167',
        '9AZ' => 'E02002167',
        '9BA' => 'E02002167',
        '9BB' => 'E02002167',
        '9BD' => 'E02002167',
        '9BE' => 'E02002167',
        '9BF' => 'E02002169',
        '9BG' => 'E02002163',
        '9BH' => 'E02002174',
        '9BJ' => 'E02002169',
        '9BL' => 'E02002169',
        '9BN' => 'E02002169',
        '9BP' => 'E02002169',
        '9BQ' => 'E02002174',
        '9BS' => 'E02002169',
        '9BT' => 'E02002169',
        '9BU' => 'E02002169',
        '9BW' => 'E02002169',
        '9BX' => 'E02002169',
        '9BY' => 'E02002169',
        '9BZ' => 'E02002169',
        '9DA' => 'E02002169',
        '9DB' => 'E02002169',
        '9DD' => 'E02002169',
        '9DE' => 'E02002163',
        '9DF' => 'E02002169',
        '9DG' => 'E02002169',
        '9DH' => 'E02002169',
        '9DJ' => 'E02002169',
        '9DL' => 'E02002169',
        '9DN' => 'E02002169',
        '9DP' => 'E02002169',
        '9DQ' => 'E02002169',
        '9DR' => 'E02002169',
        '9DS' => 'E02002169',
        '9DT' => 'E02002169',
        '9DU' => 'E02002169',
        '9DW' => 'E02002169',
        '9DX' => 'E02002169',
        '9DY' => 'E02002169',
        '9DZ' => 'E02002169',
        '9EA' => 'E02002169',
        '9EB' => 'E02002169',
        '9ED' => 'E02002169',
        '9EE' => 'E02002169',
        '9EF' => 'E02002169',
        '9EG' => 'E02002169',
        '9EH' => 'E02002169',
        '9EJ' => 'E02002169',
        '9EL' => 'E02002169',
        '9EN' => 'E02002167',
        '9EP' => 'E02002169',
        '9EQ' => 'E02002168',
        '9ER' => 'E02002169',
        '9ES' => 'E02002169',
        '9ET' => 'E02002169',
        '9EU' => 'E02002169',
        '9EW' => 'E02002167',
        '9EX' => 'E02002169',
        '9EY' => 'E02002169',
        '9EZ' => 'E02002169',
        '9FY' => 'E02002163',
        '9FZ' => 'E02002163',
        '9HA' => 'E02002169',
        '9HB' => 'E02002169',
        '9HD' => 'E02002169',
        '9HE' => 'E02002169',
        '9HF' => 'E02002169',
        '9HG' => 'E02002167',
        '9HH' => 'E02002169',
        '9HJ' => 'E02002169',
        '9HL' => 'E02002169',
        '9HN' => 'E02002169',
        '9HP' => 'E02002169',
        '9HQ' => 'E02002167',
        '9HT' => 'E02002169',
        '9HU' => 'E02002169',
        '9HW' => 'E02002169',
        '9HX' => 'E02002169',
        '9HY' => 'E02002169',
        '9HZ' => 'E02002169',
        '9JA' => 'E02002169',
        '9JB' => 'E02002169',
        '9JD' => 'E02002169',
        '9JE' => 'E02002169',
        '9JF' => 'E02002169',
        '9JG' => 'E02002169',
        '9JH' => 'E02002169',
        '9JJ' => 'E02002169',
        '9JL' => 'E02002169',
        '9JN' => 'E02002169',
        '9JP' => 'E02002169',
        '9JQ' => 'E02002169',
        '9JR' => 'E02002169',
        '9JS' => 'E02002169',
        '9JT' => 'E02002169',
        '9JU' => 'E02002169',
        '9JW' => 'E02002169',
        '9JX' => 'E02002169',
        '9JY' => 'E02002169',
        '9JZ' => 'E02002169',
        '9LA' => 'E02002169',
        '9LB' => 'E02002169',
        '9LD' => 'E02002168',
        '9LE' => 'E02002168',
        '9LF' => 'E02002168',
        '9LG' => 'E02002169',
        '9LH' => 'E02002169',
        '9LJ' => 'E02002169',
        '9LL' => 'E02002169',
        '9LN' => 'E02002169',
        '9LP' => 'E02002169',
        '9LQ' => 'E02002169',
        '9LR' => 'E02002169',
        '9LS' => 'E02002169',
        '9LT' => 'E02002169',
        '9LU' => 'E02002169',
        '9LW' => 'E02002169',
        '9LX' => 'E02002169',
        '9LZ' => 'E02002169',
        '9NA' => 'E02002165',
        '9NB' => 'E02002165',
        '9ND' => 'E02002165',
        '9NE' => 'E02002165',
        '9NF' => 'E02002165',
        '9NG' => 'E02002165',
        '9NH' => 'E02002163',
        '9NJ' => 'E02002165',
        '9NL' => 'E02002165',
        '9NN' => 'E02002165',
        '9NP' => 'E02002165',
        '9NQ' => 'E02002165',
        '9NR' => 'E02002165',
        '9NS' => 'E02002165',
        '9NT' => 'E02002165',
        '9NU' => 'E02002165',
        '9NW' => 'E02002165',
        '9NX' => 'E02002165',
        '9NY' => 'E02002165',
        '9NZ' => 'E02002165',
        '9PA' => 'E02002165',
        '9PB' => 'E02002165',
        '9PD' => 'E02002165',
        '9PE' => 'E02002165',
        '9PF' => 'E02002165',
        '9PG' => 'E02002165',
        '9PH' => 'E02002165',
        '9PJ' => 'E02002165',
        '9PL' => 'E02002165',
        '9PN' => 'E02002165',
        '9PP' => 'E02002165',
        '9PQ' => 'E02002165',
        '9PR' => 'E02002163',
        '9PS' => 'E02002165',
        '9PT' => 'E02002165',
        '9PU' => 'E02002165',
        '9PW' => 'E02002165',
        '9PX' => 'E02002165',
        '9PY' => 'E02002165',
        '9PZ' => 'E02002165',
        '9QA' => 'E02002165',
        '9QB' => 'E02002169',
        '9QD' => 'E02002169',
        '9QE' => 'E02002169',
        '9QF' => 'E02002165',
        '9QG' => 'E02002165',
        '9QH' => 'E02002169',
        '9QJ' => 'E02002169',
        '9QP' => 'E02002165',
        '9QQ' => 'E02002165',
        '9QR' => 'E02002165',
        '9QS' => 'E02002165',
        '9QT' => 'E02002165',
        '9QU' => 'E02002165',
        '9QW' => 'E02002165',
        '9QX' => 'E02002165',
        '9QY' => 'E02002165',
        '9QZ' => 'E02002165',
        '9RA' => 'E02002169',
        '9RB' => 'E02002169',
        '9RD' => 'E02002165',
        '9RE' => 'E02002169',
        '9RF' => 'E02002169',
        '9RG' => 'E02002169',
        '9RH' => 'E02002169',
        '9RJ' => 'E02002169',
        '9RL' => 'E02002168',
        '9RN' => 'E02002165',
        '9RP' => 'E02002165',
        '9RQ' => 'E02002169',
        '9RR' => 'E02002168',
        '9RS' => 'E02002168',
        '9RT' => 'E02002168',
        '9RU' => 'E02002168',
        '9RW' => 'E02002165',
        '9RX' => 'E02002168',
        '9RY' => 'E02002168',
        '9RZ' => 'E02002168',
        '9SA' => 'E02002168',
        '9SB' => 'E02002165',
        '9SD' => 'E02002165',
        '9SE' => 'E02002168',
        '9SF' => 'E02002168',
        '9SG' => 'E02002168',
        '9SH' => 'E02002168',
        '9SL' => 'E02002168',
        '9SP' => 'E02002168',
        '9TA' => 'E02002163',
        '9TB' => 'E02002168',
        '9WB' => 'E02002163',
        '9WD' => 'E02002163',
        '9WX' => 'E02002163',
        '9WY' => 'E02002163',
        '9WZ' => 'E02002163',
        '9XA' => 'E02002163',
        '9XB' => 'E02002163',
        '9XD' => 'E02002163',
        '9XE' => 'E02002163',
        '9XF' => 'E02002163',
        '9XG' => 'E02002163',
        '9XH' => 'E02002163',
        '9XJ' => 'E02002163',
        '9XL' => 'E02002163',
        '9XN' => 'E02002169',
        '9XP' => 'E02002163',
        '9XQ' => 'E02002163',
        '9XR' => 'E02002163',
        '9XS' => 'E02002163',
        '9XT' => 'E02002163',
        '9XU' => 'E02002163',
        '9XW' => 'E02002163',
        '9XX' => 'E02002163',
        '9XY' => 'E02002163',
        '9XZ' => 'E02002163',
        '9YA' => 'E02002163',
        '9YB' => 'E02002163',
        '9YD' => 'E02002169',
        '9YE' => 'E02002163',
        '9YF' => 'E02002169',
        '9YG' => 'E02002169',
        '9YH' => 'E02002163',
        '9YJ' => 'E02002163',
        '9YL' => 'E02002163',
        '9YN' => 'E02002163',
        '9YP' => 'E02002163',
        '9YQ' => 'E02002163',
        '9YS' => 'E02002163',
        '9YT' => 'E02002163',
        '9YU' => 'E02002168',
        '9YW' => 'E02002163',
        '9YX' => 'E02002168',
        '9YY' => 'E02002163',
        '9YZ' => 'E02002169',
        '9ZS' => 'E02002163',
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
