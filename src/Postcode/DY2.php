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
final class DY2
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02002019',
        '0AB' => 'E02002019',
        '0AD' => 'E02002019',
        '0AE' => 'E02002019',
        '0AF' => 'E02002019',
        '0AG' => 'E02002019',
        '0AH' => 'E02002019',
        '0AJ' => 'E02002019',
        '0AL' => 'E02002019',
        '0AN' => 'E02002019',
        '0AP' => 'E02002024',
        '0AQ' => 'E02002019',
        '0AR' => 'E02002024',
        '0AS' => 'E02002019',
        '0AT' => 'E02002024',
        '0AU' => 'E02002019',
        '0AW' => 'E02002019',
        '0AX' => 'E02002019',
        '0AY' => 'E02002019',
        '0AZ' => 'E02002010',
        '0BA' => 'E02002019',
        '0BB' => 'E02002019',
        '0BD' => 'E02002019',
        '0BG' => 'E02002019',
        '0BH' => 'E02002019',
        '0BJ' => 'E02002019',
        '0BL' => 'E02002024',
        '0BN' => 'E02002024',
        '0BP' => 'E02002019',
        '0BQ' => 'E02002019',
        '0BS' => 'E02002019',
        '0BW' => 'E02002024',
        '0BY' => 'E02002024',
        '0DA' => 'E02002024',
        '0DB' => 'E02002024',
        '0DD' => 'E02002024',
        '0DE' => 'E02002019',
        '0DF' => 'E02002019',
        '0DG' => 'E02002024',
        '0DH' => 'E02002024',
        '0DJ' => 'E02002024',
        '0DL' => 'E02002024',
        '0DN' => 'E02002019',
        '0DP' => 'E02002024',
        '0DQ' => 'E02002024',
        '0DR' => 'E02002024',
        '0DS' => 'E02002024',
        '0DT' => 'E02002024',
        '0DU' => 'E02002019',
        '0DW' => 'E02002019',
        '0DX' => 'E02002024',
        '0DY' => 'E02002010',
        '0DZ' => 'E02002024',
        '0EA' => 'E02002024',
        '0EB' => 'E02002024',
        '0ED' => 'E02002024',
        '0EE' => 'E02002024',
        '0EF' => 'E02002024',
        '0EG' => 'E02002024',
        '0EH' => 'E02002019',
        '0EJ' => 'E02002024',
        '0EL' => 'E02002024',
        '0EN' => 'E02002024',
        '0EP' => 'E02002024',
        '0EQ' => 'E02002024',
        '0ER' => 'E02002024',
        '0EZ' => 'E02002016',
        '0GX' => 'E02002010',
        '0GY' => 'E02002010',
        '0GZ' => 'E02002010',
        '0HA' => 'E02002019',
        '0HB' => 'E02002019',
        '0HD' => 'E02002019',
        '0HE' => 'E02002019',
        '0HF' => 'E02002019',
        '0HG' => 'E02002019',
        '0HH' => 'E02002019',
        '0HJ' => 'E02002019',
        '0HL' => 'E02002019',
        '0HN' => 'E02002019',
        '0HP' => 'E02002019',
        '0HQ' => 'E02002019',
        '0HR' => 'E02002019',
        '0HS' => 'E02002019',
        '0HT' => 'E02002019',
        '0HU' => 'E02002019',
        '0HW' => 'E02002019',
        '0HX' => 'E02002019',
        '0HY' => 'E02002019',
        '0HZ' => 'E02002019',
        '0JA' => 'E02002019',
        '0JB' => 'E02002019',
        '0JD' => 'E02002019',
        '0JE' => 'E02002019',
        '0JF' => 'E02002019',
        '0JG' => 'E02002019',
        '0JH' => 'E02002019',
        '0JJ' => 'E02002019',
        '0JL' => 'E02002019',
        '0JN' => 'E02002019',
        '0JP' => 'E02002019',
        '0JQ' => 'E02002019',
        '0JR' => 'E02002019',
        '0JS' => 'E02002019',
        '0JT' => 'E02002019',
        '0JU' => 'E02002019',
        '0JW' => 'E02002019',
        '0JX' => 'E02002019',
        '0JY' => 'E02002019',
        '0JZ' => 'E02002019',
        '0LA' => 'E02002019',
        '0LB' => 'E02002019',
        '0LD' => 'E02002019',
        '0LE' => 'E02002019',
        '0LF' => 'E02002019',
        '0LG' => 'E02002019',
        '0LH' => 'E02002019',
        '0LJ' => 'E02002019',
        '0LL' => 'E02002019',
        '0LN' => 'E02002019',
        '0LP' => 'E02002019',
        '0LR' => 'E02002019',
        '0LS' => 'E02002019',
        '0LT' => 'E02002019',
        '0LU' => 'E02002019',
        '0LW' => 'E02002019',
        '0LX' => 'E02002019',
        '0LY' => 'E02002019',
        '0LZ' => 'E02002019',
        '0NA' => 'E02002019',
        '0NB' => 'E02002019',
        '0ND' => 'E02002019',
        '0NG' => 'E02002019',
        '0NH' => 'E02002019',
        '0NJ' => 'E02002019',
        '0NL' => 'E02002019',
        '0NN' => 'E02002019',
        '0NP' => 'E02002019',
        '0NQ' => 'E02002019',
        '0NR' => 'E02002019',
        '0NS' => 'E02002019',
        '0NT' => 'E02002019',
        '0NU' => 'E02002019',
        '0NW' => 'E02002019',
        '0NX' => 'E02002017',
        '0NY' => 'E02002019',
        '0NZ' => 'E02002019',
        '0PA' => 'E02002017',
        '0PB' => 'E02002017',
        '0PD' => 'E02002017',
        '0PE' => 'E02002017',
        '0PF' => 'E02002017',
        '0PG' => 'E02002017',
        '0PH' => 'E02002017',
        '0PJ' => 'E02002017',
        '0PL' => 'E02002017',
        '0PN' => 'E02002019',
        '0PP' => 'E02002017',
        '0PQ' => 'E02002017',
        '0PR' => 'E02002017',
        '0PS' => 'E02002019',
        '0PT' => 'E02002019',
        '0PU' => 'E02002019',
        '0PW' => 'E02002019',
        '0PX' => 'E02002019',
        '0PY' => 'E02002019',
        '0PZ' => 'E02002019',
        '0QA' => 'E02002010',
        '0QB' => 'E02002019',
        '0QD' => 'E02002019',
        '0QP' => 'E02002016',
        '0QQ' => 'E02002010',
        '0QR' => 'E02002019',
        '0QS' => 'E02002016',
        '0QT' => 'E02002016',
        '0QU' => 'E02002016',
        '0QW' => 'E02002016',
        '0QX' => 'E02002016',
        '0QY' => 'E02002016',
        '0QZ' => 'E02002010',
        '0RA' => 'E02002017',
        '0RB' => 'E02002021',
        '0RD' => 'E02002021',
        '0RE' => 'E02002021',
        '0RF' => 'E02002021',
        '0RG' => 'E02002021',
        '0RH' => 'E02002021',
        '0RJ' => 'E02002021',
        '0RL' => 'E02002021',
        '0RN' => 'E02002019',
        '0RP' => 'E02002016',
        '0RQ' => 'E02002021',
        '0RR' => 'E02002021',
        '0RS' => 'E02002010',
        '0RT' => 'E02002016',
        '0RU' => 'E02002016',
        '0RW' => 'E02002016',
        '0RX' => 'E02002016',
        '0RY' => 'E02002016',
        '0RZ' => 'E02002016',
        '0SE' => 'E02002010',
        '0SF' => 'E02002016',
        '0SG' => 'E02002016',
        '0SH' => 'E02002016',
        '0SJ' => 'E02002016',
        '0SL' => 'E02002012',
        '0SN' => 'E02002016',
        '0SP' => 'E02002016',
        '0SQ' => 'E02002012',
        '0SR' => 'E02002016',
        '0ST' => 'E02002016',
        '0SU' => 'E02002010',
        '0SW' => 'E02002016',
        '0SX' => 'E02002010',
        '0SY' => 'E02002010',
        '0SZ' => 'E02002012',
        '0TA' => 'E02002012',
        '0TB' => 'E02002012',
        '0TD' => 'E02002012',
        '0TG' => 'E02002012',
        '0TH' => 'E02002010',
        '0TJ' => 'E02002012',
        '0TL' => 'E02002012',
        '0TN' => 'E02002010',
        '0TP' => 'E02002010',
        '0TQ' => 'E02002010',
        '0TR' => 'E02002010',
        '0TS' => 'E02002010',
        '0TT' => 'E02002010',
        '0TU' => 'E02002010',
        '0TW' => 'E02002010',
        '0TX' => 'E02002010',
        '0TY' => 'E02002010',
        '0TZ' => 'E02002010',
        '0UA' => 'E02002012',
        '0UB' => 'E02002012',
        '0UD' => 'E02002012',
        '0UE' => 'E02002012',
        '0UF' => 'E02002010',
        '0UG' => 'E02002012',
        '0UH' => 'E02002010',
        '0UJ' => 'E02002012',
        '0UL' => 'E02002010',
        '0UN' => 'E02002010',
        '0UP' => 'E02002010',
        '0UQ' => 'E02002012',
        '0UR' => 'E02002010',
        '0UT' => 'E02002010',
        '0UU' => 'E02002010',
        '0UW' => 'E02002010',
        '0UX' => 'E02002016',
        '0UY' => 'E02002017',
        '0UZ' => 'E02002010',
        '0WT' => 'E02002010',
        '0WZ' => 'E02002010',
        '0XA' => 'E02002017',
        '0XB' => 'E02002016',
        '0XD' => 'E02002010',
        '0XE' => 'E02002017',
        '0XF' => 'E02002016',
        '0XG' => 'E02002016',
        '0XH' => 'E02002010',
        '0XJ' => 'E02002010',
        '0XL' => 'E02002010',
        '0XP' => 'E02002010',
        '0XQ' => 'E02002016',
        '0XR' => 'E02002010',
        '0XS' => 'E02002010',
        '0XT' => 'E02002010',
        '0XU' => 'E02002010',
        '0XW' => 'E02002017',
        '0XY' => 'E02002010',
        '0YA' => 'E02002010',
        '0YB' => 'E02002010',
        '0YD' => 'E02002010',
        '0YE' => 'E02002010',
        '0YG' => 'E02002010',
        '0YH' => 'E02002010',
        '0YJ' => 'E02002010',
        '0YL' => 'E02002010',
        '0YN' => 'E02002010',
        '0YP' => 'E02002019',
        '0YQ' => 'E02002010',
        '0YR' => 'E02002019',
        '0YS' => 'E02002019',
        '0YT' => 'E02002019',
        '0YU' => 'E02002010',
        '0YW' => 'E02002019',
        '0YX' => 'E02002010',
        '0YY' => 'E02002010',
        '0YZ' => 'E02002010',
        '0ZR' => 'E02002010',
        '0ZX' => 'E02002010',
        '7AA' => 'E02002009',
        '7AB' => 'E02002009',
        '7AD' => 'E02002009',
        '7AE' => 'E02002009',
        '7AF' => 'E02002009',
        '7AG' => 'E02002009',
        '7AH' => 'E02002009',
        '7AJ' => 'E02002009',
        '7AL' => 'E02002009',
        '7AN' => 'E02002009',
        '7AP' => 'E02002009',
        '7AQ' => 'E02002009',
        '7AR' => 'E02002014',
        '7AS' => 'E02002014',
        '7AT' => 'E02002009',
        '7AU' => 'E02002009',
        '7AX' => 'E02002009',
        '7AY' => 'E02002009',
        '7AZ' => 'E02002009',
        '7BA' => 'E02002014',
        '7BB' => 'E02002009',
        '7BD' => 'E02002009',
        '7BH' => 'E02002009',
        '7BJ' => 'E02002009',
        '7BL' => 'E02002009',
        '7BN' => 'E02002009',
        '7BQ' => 'E02002014',
        '7BS' => 'E02002009',
        '7BT' => 'E02002014',
        '7BU' => 'E02002014',
        '7BW' => 'E02002014',
        '7BX' => 'E02002014',
        '7BY' => 'E02002014',
        '7DA' => 'E02002014',
        '7DB' => 'E02002014',
        '7DD' => 'E02002014',
        '7DE' => 'E02002014',
        '7DF' => 'E02002009',
        '7DG' => 'E02002014',
        '7DH' => 'E02002014',
        '7DJ' => 'E02002014',
        '7DL' => 'E02002009',
        '7DN' => 'E02002014',
        '7DP' => 'E02002014',
        '7DQ' => 'E02002014',
        '7DR' => 'E02002014',
        '7DS' => 'E02002009',
        '7DT' => 'E02002014',
        '7DU' => 'E02002009',
        '7DW' => 'E02002009',
        '7DX' => 'E02002009',
        '7DY' => 'E02002009',
        '7DZ' => 'E02002009',
        '7EA' => 'E02002009',
        '7EB' => 'E02002009',
        '7ED' => 'E02002006',
        '7EN' => 'E02002014',
        '7EP' => 'E02002009',
        '7ER' => 'E02002014',
        '7ES' => 'E02002009',
        '7ET' => 'E02002009',
        '7EU' => 'E02002009',
        '7EW' => 'E02002009',
        '7EX' => 'E02002009',
        '7EY' => 'E02002009',
        '7EZ' => 'E02002009',
        '7HA' => 'E02002009',
        '7HB' => 'E02002009',
        '7HD' => 'E02002009',
        '7HE' => 'E02002009',
        '7HF' => 'E02002009',
        '7HG' => 'E02002009',
        '7HH' => 'E02002009',
        '7HJ' => 'E02002009',
        '7HL' => 'E02002009',
        '7HN' => 'E02002009',
        '7HP' => 'E02002009',
        '7HQ' => 'E02002009',
        '7HR' => 'E02002009',
        '7HS' => 'E02002014',
        '7HT' => 'E02002009',
        '7HU' => 'E02002014',
        '7HW' => 'E02002009',
        '7HX' => 'E02002014',
        '7HY' => 'E02002014',
        '7HZ' => 'E02002014',
        '7JA' => 'E02002014',
        '7JB' => 'E02002009',
        '7JD' => 'E02002009',
        '7JE' => 'E02002009',
        '7JG' => 'E02002009',
        '7JH' => 'E02002009',
        '7JJ' => 'E02002009',
        '7JL' => 'E02002009',
        '7JN' => 'E02002009',
        '7JP' => 'E02002009',
        '7JQ' => 'E02002009',
        '7JR' => 'E02002009',
        '7JS' => 'E02002009',
        '7JT' => 'E02002009',
        '7JU' => 'E02002009',
        '7JW' => 'E02002009',
        '7JY' => 'E02002009',
        '7LA' => 'E02002009',
        '7LE' => 'E02002009',
        '7LF' => 'E02002009',
        '7LG' => 'E02002009',
        '7LH' => 'E02002009',
        '7LJ' => 'E02002009',
        '7LL' => 'E02002009',
        '7LP' => 'E02002009',
        '7LQ' => 'E02002009',
        '7LR' => 'E02002009',
        '7LS' => 'E02002009',
        '7LT' => 'E02002009',
        '7LU' => 'E02002009',
        '7LW' => 'E02002009',
        '7LX' => 'E02002009',
        '7LY' => 'E02002009',
        '7LZ' => 'E02002009',
        '7NA' => 'E02002009',
        '7NB' => 'E02002009',
        '7NE' => 'E02002009',
        '7NF' => 'E02002009',
        '7NG' => 'E02002009',
        '7NH' => 'E02002009',
        '7NJ' => 'E02002009',
        '7NL' => 'E02002009',
        '7NN' => 'E02002009',
        '7NP' => 'E02002009',
        '7NQ' => 'E02002009',
        '7NR' => 'E02002009',
        '7NS' => 'E02002009',
        '7NT' => 'E02002009',
        '7NU' => 'E02002009',
        '7NW' => 'E02002009',
        '7NX' => 'E02002009',
        '7NY' => 'E02002009',
        '7NZ' => 'E02002009',
        '7PA' => 'E02002009',
        '7PJ' => 'E02002009',
        '7PL' => 'E02002009',
        '7PN' => 'E02002009',
        '7PP' => 'E02002009',
        '7PR' => 'E02002009',
        '7PS' => 'E02002009',
        '7PT' => 'E02002009',
        '7PU' => 'E02002009',
        '7PW' => 'E02002009',
        '7PX' => 'E02002009',
        '7PY' => 'E02002009',
        '7PZ' => 'E02002009',
        '7QA' => 'E02002009',
        '7QB' => 'E02002009',
        '7QD' => 'E02002009',
        '7QE' => 'E02002009',
        '7QF' => 'E02002009',
        '7QH' => 'E02002009',
        '7QJ' => 'E02002009',
        '7QL' => 'E02002009',
        '7QN' => 'E02002009',
        '7QP' => 'E02002009',
        '7QQ' => 'E02002009',
        '7QR' => 'E02002009',
        '7QS' => 'E02002009',
        '7QT' => 'E02002009',
        '7QU' => 'E02002009',
        '7QW' => 'E02002009',
        '7QX' => 'E02002009',
        '7QY' => 'E02002009',
        '7QZ' => 'E02002009',
        '7RA' => 'E02002009',
        '7RB' => 'E02002009',
        '7RD' => 'E02002009',
        '7RE' => 'E02002009',
        '7RF' => 'E02002009',
        '7RG' => 'E02002009',
        '7RL' => 'E02002009',
        '7SA' => 'E02002009',
        '7SB' => 'E02002009',
        '7SD' => 'E02002009',
        '7SE' => 'E02002009',
        '7SF' => 'E02002009',
        '7TA' => 'E02002014',
        '7TB' => 'E02002014',
        '7TD' => 'E02002014',
        '7TE' => 'E02002014',
        '7TF' => 'E02002014',
        '7TG' => 'E02002009',
        '7TH' => 'E02002009',
        '7TJ' => 'E02002009',
        '7TL' => 'E02002009',
        '7TN' => 'E02002009',
        '7TP' => 'E02002009',
        '7TQ' => 'E02002009',
        '7TR' => 'E02002014',
        '7TS' => 'E02002014',
        '7TT' => 'E02002009',
        '7TW' => 'E02002009',
        '7TZ' => 'E02002009',
        '7YB' => 'E02002010',
        '7YF' => 'E02002010',
        '7YG' => 'E02002009',
        '7YH' => 'E02002010',
        '7YJ' => 'E02002010',
        '7YL' => 'E02002010',
        '7YN' => 'E02002009',
        '7YP' => 'E02002009',
        '7YQ' => 'E02002009',
        '7YR' => 'E02002010',
        '7YS' => 'E02002010',
        '7YT' => 'E02002010',
        '7YU' => 'E02002010',
        '7YW' => 'E02002010',
        '7YX' => 'E02002009',
        '7YY' => 'E02002010',
        '7YZ' => 'E02002009',
        '7ZW' => 'E02002010',
        '7ZX' => 'E02002010',
        '8AA' => 'E02002014',
        '8AB' => 'E02002014',
        '8AD' => 'E02002014',
        '8AE' => 'E02002014',
        '8AF' => 'E02002014',
        '8AG' => 'E02002014',
        '8AH' => 'E02002014',
        '8AJ' => 'E02002014',
        '8AL' => 'E02002014',
        '8AN' => 'E02002014',
        '8AQ' => 'E02002014',
        '8AS' => 'E02002014',
        '8AT' => 'E02002014',
        '8AU' => 'E02002014',
        '8AX' => 'E02002014',
        '8BA' => 'E02002014',
        '8BB' => 'E02002014',
        '8BD' => 'E02002014',
        '8BE' => 'E02002014',
        '8BF' => 'E02002014',
        '8BH' => 'E02002014',
        '8BJ' => 'E02002014',
        '8BP' => 'E02002014',
        '8BS' => 'E02002014',
        '8BT' => 'E02002014',
        '8BU' => 'E02002014',
        '8BX' => 'E02002014',
        '8BY' => 'E02002014',
        '8BZ' => 'E02002014',
        '8DA' => 'E02002014',
        '8DB' => 'E02002014',
        '8DD' => 'E02002014',
        '8DH' => 'E02002014',
        '8DJ' => 'E02002014',
        '8DL' => 'E02002014',
        '8DP' => 'E02002014',
        '8DU' => 'E02002014',
        '8DX' => 'E02002014',
        '8DY' => 'E02002014',
        '8DZ' => 'E02002014',
        '8EA' => 'E02002014',
        '8EB' => 'E02002014',
        '8ED' => 'E02002014',
        '8EE' => 'E02002014',
        '8EF' => 'E02002014',
        '8EG' => 'E02002014',
        '8EH' => 'E02002014',
        '8EJ' => 'E02002014',
        '8EL' => 'E02002014',
        '8EN' => 'E02002014',
        '8EP' => 'E02002014',
        '8ER' => 'E02002014',
        '8ES' => 'E02002014',
        '8ET' => 'E02002014',
        '8EU' => 'E02002014',
        '8EW' => 'E02002014',
        '8EX' => 'E02002014',
        '8EY' => 'E02002014',
        '8EZ' => 'E02002014',
        '8HA' => 'E02002014',
        '8HB' => 'E02002014',
        '8HE' => 'E02002014',
        '8HF' => 'E02002014',
        '8HP' => 'E02002014',
        '8HR' => 'E02002014',
        '8HS' => 'E02002014',
        '8HY' => 'E02002014',
        '8HZ' => 'E02002014',
        '8JH' => 'E02002017',
        '8JJ' => 'E02002017',
        '8JP' => 'E02002017',
        '8JQ' => 'E02002017',
        '8JR' => 'E02002014',
        '8JS' => 'E02002014',
        '8JT' => 'E02002014',
        '8JU' => 'E02002014',
        '8JW' => 'E02002014',
        '8JX' => 'E02002014',
        '8JY' => 'E02002014',
        '8JZ' => 'E02002014',
        '8LA' => 'E02002014',
        '8LB' => 'E02002014',
        '8LD' => 'E02002014',
        '8LE' => 'E02002014',
        '8LF' => 'E02002014',
        '8LG' => 'E02002014',
        '8LH' => 'E02002014',
        '8LJ' => 'E02002014',
        '8LQ' => 'E02002014',
        '8LS' => 'E02002014',
        '8LT' => 'E02002014',
        '8LU' => 'E02002014',
        '8LX' => 'E02002014',
        '8LY' => 'E02002014',
        '8LZ' => 'E02002014',
        '8NA' => 'E02002014',
        '8NB' => 'E02002014',
        '8ND' => 'E02002014',
        '8NE' => 'E02002014',
        '8NF' => 'E02002014',
        '8NG' => 'E02002014',
        '8NH' => 'E02002014',
        '8NJ' => 'E02002014',
        '8NL' => 'E02002014',
        '8NP' => 'E02002014',
        '8NQ' => 'E02002014',
        '8NR' => 'E02002014',
        '8NS' => 'E02002014',
        '8NT' => 'E02002014',
        '8NU' => 'E02002014',
        '8NW' => 'E02002014',
        '8NX' => 'E02002014',
        '8NY' => 'E02002014',
        '8NZ' => 'E02002009',
        '8PA' => 'E02002014',
        '8PB' => 'E02002014',
        '8PD' => 'E02002014',
        '8PE' => 'E02002014',
        '8PF' => 'E02002010',
        '8PG' => 'E02002014',
        '8PH' => 'E02002014',
        '8PJ' => 'E02002014',
        '8PL' => 'E02002014',
        '8PN' => 'E02002014',
        '8PP' => 'E02002014',
        '8PQ' => 'E02002014',
        '8PR' => 'E02002014',
        '8PS' => 'E02002014',
        '8PU' => 'E02002014',
        '8PW' => 'E02002014',
        '8PX' => 'E02002014',
        '8PY' => 'E02002014',
        '8PZ' => 'E02002014',
        '8QA' => 'E02002014',
        '8QB' => 'E02002014',
        '8QD' => 'E02002014',
        '8QE' => 'E02002014',
        '8QF' => 'E02002014',
        '8QH' => 'E02002014',
        '8QJ' => 'E02002014',
        '8QL' => 'E02002014',
        '8QN' => 'E02002014',
        '8QP' => 'E02002014',
        '8QQ' => 'E02002014',
        '8QR' => 'E02002014',
        '8QS' => 'E02002014',
        '8QT' => 'E02002014',
        '8QU' => 'E02002014',
        '8QW' => 'E02002014',
        '8QX' => 'E02002014',
        '8QY' => 'E02002014',
        '8QZ' => 'E02002014',
        '8RA' => 'E02002014',
        '8RB' => 'E02002014',
        '8RD' => 'E02002014',
        '8RE' => 'E02002014',
        '8RF' => 'E02002014',
        '8RG' => 'E02002014',
        '8RH' => 'E02002014',
        '8RJ' => 'E02002014',
        '8RL' => 'E02002014',
        '8RN' => 'E02002014',
        '8RP' => 'E02002014',
        '8RQ' => 'E02002014',
        '8RR' => 'E02002014',
        '8RS' => 'E02002014',
        '8RT' => 'E02002014',
        '8RU' => 'E02002014',
        '8RW' => 'E02002014',
        '8RY' => 'E02002014',
        '8RZ' => 'E02002014',
        '8SA' => 'E02002014',
        '8SE' => 'E02002014',
        '8SG' => 'E02002014',
        '8SH' => 'E02002014',
        '8SL' => 'E02002014',
        '8SP' => 'E02002014',
        '8SQ' => 'E02002014',
        '8SR' => 'E02002014',
        '8SS' => 'E02002014',
        '8ST' => 'E02002014',
        '8SU' => 'E02002014',
        '8SW' => 'E02002014',
        '8SX' => 'E02002014',
        '8SY' => 'E02002014',
        '8SZ' => 'E02002017',
        '8TA' => 'E02002014',
        '8TB' => 'E02002014',
        '8TD' => 'E02002014',
        '8TG' => 'E02002014',
        '8TH' => 'E02002014',
        '8TJ' => 'E02002014',
        '8TP' => 'E02002014',
        '8TR' => 'E02002014',
        '8TS' => 'E02002014',
        '8TU' => 'E02002010',
        '8TW' => 'E02002014',
        '8UA' => 'E02002017',
        '8UB' => 'E02002017',
        '8UD' => 'E02002014',
        '8UE' => 'E02002017',
        '8UF' => 'E02002017',
        '8UL' => 'E02002014',
        '8UN' => 'E02002017',
        '8UP' => 'E02002017',
        '8UR' => 'E02002017',
        '8UT' => 'E02002017',
        '8UW' => 'E02002017',
        '8UX' => 'E02002014',
        '8UY' => 'E02002014',
        '8UZ' => 'E02002014',
        '8WA' => 'E02002010',
        '8WB' => 'E02002010',
        '8WD' => 'E02002010',
        '8WE' => 'E02002010',
        '8WF' => 'E02002014',
        '8WG' => 'E02002010',
        '8WH' => 'E02002010',
        '8WJ' => 'E02002010',
        '8WQ' => 'E02002010',
        '8WR' => 'E02002010',
        '8XE' => 'E02002017',
        '8XF' => 'E02002017',
        '8XG' => 'E02002017',
        '8XH' => 'E02002017',
        '8XJ' => 'E02002017',
        '8XL' => 'E02002017',
        '8XN' => 'E02002010',
        '8XP' => 'E02002010',
        '8XQ' => 'E02002017',
        '8XR' => 'E02002017',
        '8XT' => 'E02002017',
        '8XW' => 'E02002010',
        '8XY' => 'E02002017',
        '8ZY' => 'E02002010',
        '8ZZ' => 'E02002010',
        '9AA' => 'E02002017',
        '9AB' => 'E02002017',
        '9AD' => 'E02002017',
        '9AE' => 'E02002017',
        '9AF' => 'E02002017',
        '9AG' => 'E02002017',
        '9AH' => 'E02002017',
        '9AJ' => 'E02002017',
        '9AL' => 'E02002017',
        '9AN' => 'E02002017',
        '9AP' => 'E02002017',
        '9AQ' => 'E02002017',
        '9AR' => 'E02002017',
        '9AU' => 'E02002017',
        '9AX' => 'E02002017',
        '9AY' => 'E02002017',
        '9AZ' => 'E02002017',
        '9BA' => 'E02002017',
        '9BB' => 'E02002017',
        '9BD' => 'E02002017',
        '9BE' => 'E02002017',
        '9BG' => 'E02002017',
        '9BH' => 'E02002017',
        '9BJ' => 'E02002017',
        '9BL' => 'E02002017',
        '9BN' => 'E02002017',
        '9BP' => 'E02002017',
        '9BQ' => 'E02002017',
        '9BT' => 'E02002017',
        '9BU' => 'E02002017',
        '9BW' => 'E02002017',
        '9BX' => 'E02002017',
        '9BY' => 'E02002017',
        '9BZ' => 'E02002017',
        '9DA' => 'E02002017',
        '9DB' => 'E02002010',
        '9DD' => 'E02002017',
        '9DE' => 'E02002017',
        '9DF' => 'E02002017',
        '9DG' => 'E02002017',
        '9DH' => 'E02002017',
        '9DJ' => 'E02002017',
        '9DL' => 'E02002017',
        '9DQ' => 'E02002017',
        '9DX' => 'E02002017',
        '9DY' => 'E02002017',
        '9EA' => 'E02002017',
        '9EB' => 'E02002017',
        '9EE' => 'E02002017',
        '9EF' => 'E02002017',
        '9EG' => 'E02002017',
        '9EH' => 'E02002017',
        '9EP' => 'E02002017',
        '9EQ' => 'E02002017',
        '9ER' => 'E02002017',
        '9ES' => 'E02002017',
        '9ET' => 'E02002017',
        '9EU' => 'E02002017',
        '9EW' => 'E02002017',
        '9EX' => 'E02002017',
        '9EY' => 'E02002017',
        '9EZ' => 'E02002017',
        '9FD' => 'E02002017',
        '9HA' => 'E02002017',
        '9HB' => 'E02002017',
        '9HD' => 'E02002017',
        '9HE' => 'E02002017',
        '9HF' => 'E02002017',
        '9HG' => 'E02002017',
        '9HH' => 'E02002017',
        '9HJ' => 'E02002017',
        '9HL' => 'E02002017',
        '9HN' => 'E02002017',
        '9HP' => 'E02002017',
        '9HQ' => 'E02002017',
        '9HR' => 'E02002017',
        '9HS' => 'E02002017',
        '9HT' => 'E02002017',
        '9HU' => 'E02002017',
        '9HW' => 'E02002017',
        '9HX' => 'E02002017',
        '9HY' => 'E02002017',
        '9HZ' => 'E02002017',
        '9JA' => 'E02002017',
        '9JB' => 'E02002017',
        '9JD' => 'E02002017',
        '9JE' => 'E02002017',
        '9JF' => 'E02002017',
        '9JG' => 'E02002017',
        '9JH' => 'E02002017',
        '9JJ' => 'E02002017',
        '9JL' => 'E02002017',
        '9JN' => 'E02002017',
        '9JP' => 'E02002017',
        '9JQ' => 'E02002017',
        '9JR' => 'E02002017',
        '9JS' => 'E02002017',
        '9JT' => 'E02002017',
        '9JU' => 'E02002017',
        '9JW' => 'E02002017',
        '9JX' => 'E02002017',
        '9JY' => 'E02002017',
        '9JZ' => 'E02002017',
        '9LA' => 'E02002017',
        '9LB' => 'E02002017',
        '9LD' => 'E02002017',
        '9LE' => 'E02002017',
        '9LF' => 'E02002017',
        '9LG' => 'E02002017',
        '9LH' => 'E02002017',
        '9LJ' => 'E02002017',
        '9LL' => 'E02002017',
        '9LN' => 'E02002017',
        '9LP' => 'E02002017',
        '9LQ' => 'E02002017',
        '9LR' => 'E02002017',
        '9LS' => 'E02002017',
        '9LT' => 'E02002017',
        '9LU' => 'E02002017',
        '9LW' => 'E02002017',
        '9LX' => 'E02002017',
        '9LY' => 'E02002017',
        '9LZ' => 'E02002019',
        '9NA' => 'E02002019',
        '9NB' => 'E02002019',
        '9ND' => 'E02002019',
        '9NE' => 'E02002019',
        '9NF' => 'E02002017',
        '9NG' => 'E02002017',
        '9NH' => 'E02002017',
        '9NJ' => 'E02002017',
        '9NL' => 'E02002019',
        '9NN' => 'E02002019',
        '9NP' => 'E02002017',
        '9NQ' => 'E02002017',
        '9NR' => 'E02002017',
        '9NS' => 'E02002017',
        '9NT' => 'E02002017',
        '9NW' => 'E02002017',
        '9NZ' => 'E02002017',
        '9PA' => 'E02002017',
        '9PB' => 'E02002017',
        '9PD' => 'E02002017',
        '9PE' => 'E02002017',
        '9PG' => 'E02002017',
        '9PH' => 'E02002017',
        '9PJ' => 'E02002017',
        '9PL' => 'E02002017',
        '9PN' => 'E02002017',
        '9PP' => 'E02002017',
        '9PQ' => 'E02002017',
        '9PR' => 'E02002017',
        '9PS' => 'E02002017',
        '9PT' => 'E02002017',
        '9PU' => 'E02002017',
        '9PW' => 'E02002017',
        '9PX' => 'E02002017',
        '9PY' => 'E02002017',
        '9QA' => 'E02002017',
        '9QB' => 'E02002017',
        '9QD' => 'E02002017',
        '9QE' => 'E02002017',
        '9QF' => 'E02002017',
        '9QG' => 'E02002017',
        '9QH' => 'E02002017',
        '9QJ' => 'E02002017',
        '9QL' => 'E02002017',
        '9QQ' => 'E02002010',
        '9RA' => 'E02002017',
        '9RB' => 'E02002019',
        '9RD' => 'E02002019',
        '9RE' => 'E02002017',
        '9RF' => 'E02002019',
        '9RG' => 'E02002019',
        '9RH' => 'E02002019',
        '9RJ' => 'E02002019',
        '9RL' => 'E02002019',
        '9RN' => 'E02002019',
        '9RP' => 'E02002019',
        '9RQ' => 'E02002017',
        '9RR' => 'E02002017',
        '9RS' => 'E02002017',
        '9RT' => 'E02002019',
        '9RU' => 'E02002019',
        '9RW' => 'E02002019',
        '9RX' => 'E02002019',
        '9RY' => 'E02002019',
        '9RZ' => 'E02002019',
        '9SA' => 'E02002017',
        '9SB' => 'E02002017',
        '9SE' => 'E02002019',
        '9SF' => 'E02002019',
        '9SG' => 'E02002019',
        '9SH' => 'E02002019',
        '9SJ' => 'E02002019',
        '9SL' => 'E02002019',
        '9SN' => 'E02002019',
        '9SP' => 'E02002024',
        '9SQ' => 'E02002019',
        '9SR' => 'E02002024',
        '9SS' => 'E02002024',
        '9ST' => 'E02002010',
        '9SW' => 'E02002019',
        '9SZ' => 'E02002019',
        '9TA' => 'E02002019',
        '9TB' => 'E02002019',
        '9TD' => 'E02002019',
        '9TE' => 'E02002019',
        '9TF' => 'E02002019',
        '9TH' => 'E02002019',
        '9WZ' => 'E02002010',
        '9YE' => 'E02002010',
        '9YF' => 'E02002017',
        '9YG' => 'E02002010',
        '9YH' => 'E02002017',
        '9YJ' => 'E02002017',
        '9YL' => 'E02002010',
        '9YN' => 'E02002010',
        '9YP' => 'E02002017',
        '9YQ' => 'E02002017',
        '9YR' => 'E02002017',
        '9YS' => 'E02002017',
        '9YT' => 'E02002010',
        '9YU' => 'E02002010',
        '9YW' => 'E02002017',
        '9YX' => 'E02002019',
        '9YY' => 'E02002019',
        '9YZ' => 'E02002017',
        '9ZG' => 'E02002010',
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
