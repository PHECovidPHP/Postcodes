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
final class DE13
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02006134',
        '0AB' => 'E02006134',
        '0AD' => 'E02006134',
        '0AE' => 'E02006134',
        '0AF' => 'E02006137',
        '0AG' => 'E02006137',
        '0AH' => 'E02006134',
        '0AJ' => 'E02006134',
        '0AL' => 'E02006134',
        '0AN' => 'E02006134',
        '0AP' => 'E02006135',
        '0AQ' => 'E02006135',
        '0AR' => 'E02006138',
        '0AS' => 'E02006134',
        '0AT' => 'E02006138',
        '0AU' => 'E02006135',
        '0AW' => 'E02006134',
        '0AX' => 'E02006137',
        '0AY' => 'E02006135',
        '0AZ' => 'E02006135',
        '0BA' => 'E02006135',
        '0BB' => 'E02006138',
        '0BD' => 'E02006135',
        '0BE' => 'E02006138',
        '0BG' => 'E02006135',
        '0BH' => 'E02006138',
        '0BJ' => 'E02006138',
        '0BL' => 'E02006135',
        '0BN' => 'E02006135',
        '0BP' => 'E02006138',
        '0BQ' => 'E02006138',
        '0BS' => 'E02006135',
        '0BT' => 'E02006135',
        '0BU' => 'E02006135',
        '0BW' => 'E02006135',
        '0BX' => 'E02006135',
        '0BY' => 'E02006138',
        '0BZ' => 'E02006138',
        '0DA' => 'E02006135',
        '0DB' => 'E02006141',
        '0DD' => 'E02006135',
        '0DE' => 'E02006135',
        '0DF' => 'E02006135',
        '0DG' => 'E02006135',
        '0DH' => 'E02006135',
        '0DJ' => 'E02006135',
        '0DL' => 'E02006138',
        '0DN' => 'E02006138',
        '0DP' => 'E02006138',
        '0DQ' => 'E02006135',
        '0DR' => 'E02006138',
        '0DS' => 'E02006138',
        '0DT' => 'E02006138',
        '0DU' => 'E02006138',
        '0DW' => 'E02006138',
        '0DX' => 'E02006135',
        '0DY' => 'E02006135',
        '0DZ' => 'E02006135',
        '0EA' => 'E02006135',
        '0EB' => 'E02006135',
        '0ED' => 'E02006135',
        '0EE' => 'E02006135',
        '0EF' => 'E02006135',
        '0EG' => 'E02006135',
        '0EH' => 'E02006135',
        '0EJ' => 'E02006135',
        '0EL' => 'E02006135',
        '0EN' => 'E02006135',
        '0EP' => 'E02006135',
        '0EQ' => 'E02006135',
        '0ER' => 'E02006135',
        '0ES' => 'E02006135',
        '0ET' => 'E02006135',
        '0EU' => 'E02006135',
        '0EW' => 'E02006135',
        '0EX' => 'E02006135',
        '0EY' => 'E02006135',
        '0EZ' => 'E02006135',
        '0FB' => 'E02006135',
        '0FD' => 'E02006135',
        '0FE' => 'E02006135',
        '0FF' => 'E02006135',
        '0FG' => 'E02006135',
        '0FH' => 'E02006135',
        '0FJ' => 'E02006135',
        '0FL' => 'E02006135',
        '0FN' => 'E02006135',
        '0FP' => 'E02006135',
        '0FQ' => 'E02006138',
        '0FR' => 'E02006135',
        '0FS' => 'E02006135',
        '0FT' => 'E02006135',
        '0FU' => 'E02006137',
        '0FW' => 'E02006138',
        '0FX' => 'E02006135',
        '0FY' => 'E02006135',
        '0FZ' => 'E02006135',
        '0GA' => 'E02006137',
        '0GB' => 'E02006137',
        '0GD' => 'E02006137',
        '0GE' => 'E02006137',
        '0GF' => 'E02006137',
        '0GG' => 'E02006137',
        '0GH' => 'E02006137',
        '0GJ' => 'E02006135',
        '0GL' => 'E02006135',
        '0GN' => 'E02006135',
        '0GP' => 'E02006135',
        '0GQ' => 'E02006137',
        '0GR' => 'E02006135',
        '0GS' => 'E02006135',
        '0GT' => 'E02006135',
        '0GU' => 'E02006135',
        '0GW' => 'E02006135',
        '0GX' => 'E02006135',
        '0GY' => 'E02006135',
        '0GZ' => 'E02006135',
        '0HA' => 'E02006135',
        '0HB' => 'E02006135',
        '0HD' => 'E02006135',
        '0HE' => 'E02006135',
        '0HF' => 'E02006135',
        '0HG' => 'E02006135',
        '0HH' => 'E02006135',
        '0HJ' => 'E02006135',
        '0HL' => 'E02006135',
        '0HN' => 'E02006135',
        '0HP' => 'E02006135',
        '0HQ' => 'E02006135',
        '0HR' => 'E02006135',
        '0HS' => 'E02006135',
        '0HT' => 'E02006135',
        '0HU' => 'E02006135',
        '0HW' => 'E02006135',
        '0HX' => 'E02006135',
        '0HY' => 'E02006135',
        '0HZ' => 'E02006135',
        '0JA' => 'E02006135',
        '0JB' => 'E02006135',
        '0JD' => 'E02006135',
        '0JE' => 'E02006135',
        '0JF' => 'E02006135',
        '0JG' => 'E02006135',
        '0JH' => 'E02006135',
        '0JJ' => 'E02006135',
        '0JL' => 'E02006135',
        '0JN' => 'E02006135',
        '0JP' => 'E02006135',
        '0JQ' => 'E02006135',
        '0JR' => 'E02006135',
        '0JS' => 'E02006135',
        '0JT' => 'E02006137',
        '0JU' => 'E02006137',
        '0JW' => 'E02006135',
        '0JX' => 'E02006137',
        '0JY' => 'E02006137',
        '0JZ' => 'E02006137',
        '0LA' => 'E02006138',
        '0LB' => 'E02006138',
        '0LD' => 'E02006134',
        '0LE' => 'E02006135',
        '0LF' => 'E02006137',
        '0LG' => 'E02006137',
        '0LH' => 'E02006137',
        '0LJ' => 'E02006137',
        '0LL' => 'E02006137',
        '0LN' => 'E02006137',
        '0LP' => 'E02006137',
        '0LQ' => 'E02006137',
        '0LR' => 'E02006137',
        '0LS' => 'E02006137',
        '0LT' => 'E02006137',
        '0LU' => 'E02006137',
        '0LW' => 'E02006137',
        '0LX' => 'E02006137',
        '0LY' => 'E02006137',
        '0LZ' => 'E02006137',
        '0NA' => 'E02006137',
        '0NB' => 'E02006137',
        '0ND' => 'E02006137',
        '0NE' => 'E02006137',
        '0NF' => 'E02006137',
        '0NG' => 'E02006137',
        '0NH' => 'E02006137',
        '0NJ' => 'E02006134',
        '0NL' => 'E02006137',
        '0NN' => 'E02006134',
        '0NP' => 'E02006137',
        '0NQ' => 'E02006137',
        '0NR' => 'E02006137',
        '0NS' => 'E02006137',
        '0NT' => 'E02006137',
        '0NU' => 'E02006137',
        '0NW' => 'E02006137',
        '0NX' => 'E02006137',
        '0NY' => 'E02006134',
        '0NZ' => 'E02006134',
        '0PA' => 'E02006137',
        '0PB' => 'E02006134',
        '0PD' => 'E02006135',
        '0PE' => 'E02006135',
        '0PF' => 'E02006135',
        '0PG' => 'E02006134',
        '0PH' => 'E02006137',
        '0PJ' => 'E02006137',
        '0PL' => 'E02006137',
        '0PN' => 'E02006137',
        '0PP' => 'E02006137',
        '0PQ' => 'E02006134',
        '0PR' => 'E02006137',
        '0PS' => 'E02006137',
        '0PT' => 'E02006137',
        '0PU' => 'E02006137',
        '0PW' => 'E02006137',
        '0PX' => 'E02006137',
        '0PY' => 'E02006137',
        '0PZ' => 'E02006137',
        '0QA' => 'E02006137',
        '0QB' => 'E02006137',
        '0QD' => 'E02006137',
        '0QE' => 'E02006137',
        '0QF' => 'E02006137',
        '0QG' => 'E02006137',
        '0QH' => 'E02006134',
        '0QJ' => 'E02006143',
        '0QL' => 'E02006137',
        '0QN' => 'E02006137',
        '0QP' => 'E02006137',
        '0QQ' => 'E02006135',
        '0QR' => 'E02006137',
        '0QS' => 'E02006134',
        '0QT' => 'E02006134',
        '0QU' => 'E02006134',
        '0QW' => 'E02006134',
        '0QX' => 'E02006134',
        '0QY' => 'E02006137',
        '0QZ' => 'E02006137',
        '0RA' => 'E02006137',
        '0RB' => 'E02006137',
        '0RD' => 'E02006137',
        '0RE' => 'E02006137',
        '0RF' => 'E02006137',
        '0RG' => 'E02006137',
        '0RH' => 'E02006134',
        '0RJ' => 'E02006135',
        '0RL' => 'E02006135',
        '0RN' => 'E02006137',
        '0RP' => 'E02006137',
        '0RQ' => 'E02006137',
        '0RR' => 'E02006134',
        '0RS' => 'E02006137',
        '0RT' => 'E02006137',
        '0RU' => 'E02006137',
        '0RW' => 'E02006134',
        '0RX' => 'E02006137',
        '0RY' => 'E02006137',
        '0RZ' => 'E02006137',
        '0SA' => 'E02006137',
        '0SB' => 'E02006137',
        '0SD' => 'E02006137',
        '0SE' => 'E02006137',
        '0SF' => 'E02006138',
        '0SG' => 'E02006137',
        '0SH' => 'E02006137',
        '0SJ' => 'E02006137',
        '0SL' => 'E02006137',
        '0SN' => 'E02006134',
        '0SP' => 'E02006137',
        '0SQ' => 'E02006137',
        '0SR' => 'E02006137',
        '0SS' => 'E02006137',
        '0ST' => 'E02006137',
        '0SU' => 'E02006137',
        '0SW' => 'E02006137',
        '0SX' => 'E02006137',
        '0SY' => 'E02006137',
        '0SZ' => 'E02006137',
        '0TA' => 'E02006137',
        '0TB' => 'E02006137',
        '0TD' => 'E02006137',
        '0TE' => 'E02006137',
        '0TF' => 'E02006137',
        '0TG' => 'E02006137',
        '0TH' => 'E02006137',
        '0TJ' => 'E02006137',
        '0TL' => 'E02006137',
        '0TN' => 'E02006137',
        '0TP' => 'E02006137',
        '0TQ' => 'E02006137',
        '0TR' => 'E02006137',
        '0TS' => 'E02006137',
        '0TT' => 'E02006137',
        '0TU' => 'E02006137',
        '0TW' => 'E02006137',
        '0TX' => 'E02006137',
        '0TY' => 'E02006137',
        '0TZ' => 'E02006134',
        '0UA' => 'E02006137',
        '0UB' => 'E02006134',
        '0UD' => 'E02006134',
        '0UE' => 'E02006134',
        '0UF' => 'E02006137',
        '0UG' => 'E02006137',
        '0UH' => 'E02006137',
        '0UJ' => 'E02006137',
        '0UL' => 'E02006137',
        '0UN' => 'E02006137',
        '0UP' => 'E02006137',
        '0UQ' => 'E02006137',
        '0UR' => 'E02006137',
        '0UT' => 'E02006137',
        '0UU' => 'E02006137',
        '0UW' => 'E02006137',
        '0UX' => 'E02006137',
        '0UY' => 'E02006137',
        '0UZ' => 'E02006137',
        '0WA' => 'E02006135',
        '0WB' => 'E02006135',
        '0WD' => 'E02006135',
        '0WE' => 'E02006135',
        '0WF' => 'E02006135',
        '0WG' => 'E02006135',
        '0WH' => 'E02006135',
        '0WJ' => 'E02006135',
        '0WL' => 'E02006141',
        '0WN' => 'E02006135',
        '0WP' => 'E02006135',
        '0WQ' => 'E02006135',
        '0WR' => 'E02006141',
        '0WS' => 'E02006141',
        '0WU' => 'E02006135',
        '0WW' => 'E02006135',
        '0WZ' => 'E02006141',
        '0XB' => 'E02006137',
        '0XE' => 'E02006137',
        '0XF' => 'E02006137',
        '0XG' => 'E02006137',
        '0XJ' => 'E02006135',
        '0XN' => 'E02006141',
        '0XP' => 'E02006135',
        '0XQ' => 'E02006137',
        '0XR' => 'E02006135',
        '0XS' => 'E02006135',
        '0XT' => 'E02006135',
        '0XU' => 'E02006135',
        '0XX' => 'E02006135',
        '0XY' => 'E02006135',
        '0XZ' => 'E02006135',
        '0YA' => 'E02006135',
        '0YB' => 'E02006135',
        '0YD' => 'E02006135',
        '0YE' => 'E02006135',
        '0YF' => 'E02006141',
        '0YG' => 'E02006135',
        '0YH' => 'E02006135',
        '0YJ' => 'E02006135',
        '0YL' => 'E02006141',
        '0YN' => 'E02006141',
        '0YP' => 'E02006141',
        '0YQ' => 'E02006135',
        '0YR' => 'E02006135',
        '0YS' => 'E02006135',
        '0YT' => 'E02006141',
        '0YU' => 'E02006141',
        '0YW' => 'E02006137',
        '0YX' => 'E02006141',
        '0YY' => 'E02006137',
        '0YZ' => 'E02006141',
        '0ZA' => 'E02006141',
        '0ZB' => 'E02006141',
        '0ZD' => 'E02006141',
        '0ZE' => 'E02006141',
        '0ZF' => 'E02006137',
        '0ZG' => 'E02006141',
        '0ZH' => 'E02006141',
        '0ZJ' => 'E02006141',
        '0ZL' => 'E02006141',
        '0ZP' => 'E02006141',
        '0ZQ' => 'E02006141',
        '0ZR' => 'E02006141',
        '0ZS' => 'E02006141',
        '0ZT' => 'E02006141',
        '0ZU' => 'E02006141',
        '0ZW' => 'E02006141',
        '0ZX' => 'E02006141',
        '0ZY' => 'E02006137',
        '0ZZ' => 'E02006141',
        '7AA' => 'E02006147',
        '7AB' => 'E02006147',
        '7AD' => 'E02006147',
        '7AE' => 'E02006147',
        '7AF' => 'E02006147',
        '7AG' => 'E02006147',
        '7AH' => 'E02006147',
        '7AJ' => 'E02006147',
        '7AL' => 'E02006147',
        '7AN' => 'E02006147',
        '7AP' => 'E02006147',
        '7AQ' => 'E02006147',
        '7AR' => 'E02006147',
        '7AS' => 'E02006147',
        '7AT' => 'E02006147',
        '7AU' => 'E02006147',
        '7AW' => 'E02006147',
        '7AX' => 'E02006147',
        '7AY' => 'E02006147',
        '7AZ' => 'E02006147',
        '7BA' => 'E02006147',
        '7BB' => 'E02006147',
        '7BD' => 'E02006147',
        '7BE' => 'E02006147',
        '7BF' => 'E02006147',
        '7BG' => 'E02006147',
        '7BH' => 'E02006147',
        '7BS' => 'E02006147',
        '7BT' => 'E02006147',
        '7BU' => 'E02006147',
        '7BX' => 'E02006147',
        '7BY' => 'E02006147',
        '7DA' => 'E02006147',
        '7DB' => 'E02006147',
        '7DD' => 'E02006147',
        '7DE' => 'E02006147',
        '7DF' => 'E02006147',
        '7DG' => 'E02006147',
        '7DH' => 'E02006147',
        '7DJ' => 'E02006147',
        '7DL' => 'E02006147',
        '7DN' => 'E02006147',
        '7DP' => 'E02006147',
        '7DQ' => 'E02006147',
        '7DR' => 'E02006147',
        '7DS' => 'E02006147',
        '7DT' => 'E02006147',
        '7DU' => 'E02006147',
        '7DW' => 'E02006147',
        '7DY' => 'E02006147',
        '7EA' => 'E02006147',
        '7EB' => 'E02006147',
        '7ED' => 'E02006147',
        '7EE' => 'E02006147',
        '7EF' => 'E02006147',
        '7EG' => 'E02006147',
        '7EH' => 'E02006147',
        '7EJ' => 'E02006147',
        '7EL' => 'E02006147',
        '7EN' => 'E02006147',
        '7EP' => 'E02006147',
        '7EQ' => 'E02006147',
        '7ER' => 'E02006147',
        '7ES' => 'E02006147',
        '7ET' => 'E02006147',
        '7EU' => 'E02006147',
        '7EW' => 'E02006147',
        '7EX' => 'E02006147',
        '7EY' => 'E02006147',
        '7EZ' => 'E02006147',
        '7FB' => 'E02006147',
        '7FD' => 'E02006147',
        '7FE' => 'E02006147',
        '7FF' => 'E02006147',
        '7FG' => 'E02006147',
        '7FH' => 'E02006147',
        '7HA' => 'E02006147',
        '7HB' => 'E02006147',
        '7HE' => 'E02006147',
        '7HJ' => 'E02006147',
        '7HL' => 'E02006147',
        '7HN' => 'E02006147',
        '7HP' => 'E02006147',
        '7HR' => 'E02006147',
        '7HS' => 'E02006147',
        '7HT' => 'E02006147',
        '7HU' => 'E02006147',
        '7HW' => 'E02006147',
        '7HX' => 'E02006147',
        '7HY' => 'E02006147',
        '7HZ' => 'E02006147',
        '7JA' => 'E02006147',
        '7JB' => 'E02006147',
        '7JE' => 'E02006147',
        '7JF' => 'E02006147',
        '7JG' => 'E02006147',
        '7JH' => 'E02006147',
        '7JJ' => 'E02006147',
        '7JL' => 'E02006147',
        '7JN' => 'E02006147',
        '7JP' => 'E02006147',
        '7JQ' => 'E02006147',
        '7JR' => 'E02006147',
        '7JS' => 'E02006147',
        '7JT' => 'E02006147',
        '7JU' => 'E02006147',
        '7JW' => 'E02006147',
        '7JY' => 'E02006147',
        '7JZ' => 'E02006147',
        '7LA' => 'E02006147',
        '7LB' => 'E02006141',
        '7LD' => 'E02006147',
        '7LR' => 'E02006147',
        '7YG' => 'E02006141',
        '7ZA' => 'E02006141',
        '7ZB' => 'E02006141',
        '7ZD' => 'E02006141',
        '7ZF' => 'E02006141',
        '7ZG' => 'E02006141',
        '7ZJ' => 'E02006141',
        '7ZL' => 'E02006141',
        '7ZP' => 'E02006141',
        '7ZQ' => 'E02006141',
        '7ZR' => 'E02006147',
        '7ZS' => 'E02006141',
        '7ZT' => 'E02006141',
        '7ZU' => 'E02006141',
        '7ZW' => 'E02006141',
        '7ZX' => 'E02006141',
        '7ZY' => 'E02006147',
        '8AA' => 'E02006145',
        '8AB' => 'E02006145',
        '8AD' => 'E02006136',
        '8AE' => 'E02006145',
        '8AF' => 'E02006145',
        '8AG' => 'E02006145',
        '8AH' => 'E02006145',
        '8AJ' => 'E02006145',
        '8AL' => 'E02006145',
        '8AN' => 'E02006145',
        '8AP' => 'E02006145',
        '8AQ' => 'E02006145',
        '8AR' => 'E02006145',
        '8AS' => 'E02006145',
        '8AT' => 'E02006145',
        '8AU' => 'E02006145',
        '8AW' => 'E02006145',
        '8AX' => 'E02006145',
        '8AY' => 'E02006145',
        '8AZ' => 'E02006145',
        '8BA' => 'E02006145',
        '8BB' => 'E02006145',
        '8BD' => 'E02006145',
        '8BE' => 'E02006145',
        '8BF' => 'E02006145',
        '8BG' => 'E02006145',
        '8BH' => 'E02006145',
        '8BJ' => 'E02006145',
        '8BL' => 'E02006145',
        '8BN' => 'E02006136',
        '8BP' => 'E02006145',
        '8BQ' => 'E02006145',
        '8BS' => 'E02006145',
        '8BT' => 'E02006145',
        '8BU' => 'E02006145',
        '8BW' => 'E02006136',
        '8BX' => 'E02006145',
        '8BY' => 'E02006145',
        '8BZ' => 'E02006145',
        '8DA' => 'E02006145',
        '8DB' => 'E02006145',
        '8DD' => 'E02006145',
        '8DE' => 'E02006145',
        '8DF' => 'E02006145',
        '8DG' => 'E02006145',
        '8DH' => 'E02006145',
        '8DJ' => 'E02006145',
        '8DL' => 'E02006145',
        '8DN' => 'E02006145',
        '8DP' => 'E02006145',
        '8DQ' => 'E02006145',
        '8DR' => 'E02006145',
        '8DS' => 'E02006145',
        '8DT' => 'E02006145',
        '8DU' => 'E02006145',
        '8DW' => 'E02006145',
        '8DX' => 'E02006145',
        '8DY' => 'E02006145',
        '8DZ' => 'E02006145',
        '8EA' => 'E02006145',
        '8EB' => 'E02006145',
        '8ED' => 'E02006145',
        '8EE' => 'E02006145',
        '8EF' => 'E02006145',
        '8EG' => 'E02006145',
        '8EH' => 'E02006145',
        '8EJ' => 'E02006145',
        '8EL' => 'E02006145',
        '8EN' => 'E02006145',
        '8EP' => 'E02006145',
        '8EQ' => 'E02006145',
        '8ER' => 'E02006145',
        '8ES' => 'E02006145',
        '8ET' => 'E02006145',
        '8EU' => 'E02006145',
        '8EW' => 'E02006145',
        '8EX' => 'E02006145',
        '8EY' => 'E02006145',
        '8EZ' => 'E02006145',
        '8FB' => 'E02006145',
        '8FD' => 'E02006145',
        '8FE' => 'E02006145',
        '8FF' => 'E02006145',
        '8FG' => 'E02006145',
        '8FH' => 'E02006145',
        '8FJ' => 'E02006136',
        '8FL' => 'E02006145',
        '8FN' => 'E02006145',
        '8FQ' => 'E02006145',
        '8GB' => 'E02006145',
        '8HA' => 'E02006145',
        '8HB' => 'E02006145',
        '8HD' => 'E02006145',
        '8HE' => 'E02006145',
        '8HF' => 'E02006145',
        '8HG' => 'E02006145',
        '8HH' => 'E02006145',
        '8HJ' => 'E02006145',
        '8HL' => 'E02006145',
        '8HN' => 'E02006145',
        '8HP' => 'E02006145',
        '8HU' => 'E02006145',
        '8HX' => 'E02006145',
        '8HY' => 'E02006145',
        '8HZ' => 'E02006145',
        '8JA' => 'E02006145',
        '8JB' => 'E02006145',
        '8JD' => 'E02006145',
        '8JE' => 'E02006145',
        '8JF' => 'E02006145',
        '8JG' => 'E02006145',
        '8JJ' => 'E02006145',
        '8JL' => 'E02006145',
        '8JN' => 'E02006145',
        '8JP' => 'E02006145',
        '8JR' => 'E02006145',
        '8JS' => 'E02006145',
        '8JW' => 'E02006145',
        '8LA' => 'E02006145',
        '8LB' => 'E02006145',
        '8LD' => 'E02006145',
        '8LE' => 'E02006145',
        '8LF' => 'E02006145',
        '8LG' => 'E02006145',
        '8LH' => 'E02006145',
        '8LJ' => 'E02006145',
        '8LL' => 'E02006145',
        '8LN' => 'E02006145',
        '8LP' => 'E02006145',
        '8LQ' => 'E02006145',
        '8LR' => 'E02006145',
        '8LS' => 'E02006145',
        '8LT' => 'E02006145',
        '8LW' => 'E02006145',
        '8LZ' => 'E02006136',
        '8NA' => 'E02006136',
        '8NB' => 'E02006136',
        '8ND' => 'E02006136',
        '8NE' => 'E02006136',
        '8NF' => 'E02006136',
        '8NG' => 'E02006136',
        '8NH' => 'E02006136',
        '8NJ' => 'E02006136',
        '8NL' => 'E02006136',
        '8NN' => 'E02006136',
        '8NP' => 'E02006136',
        '8NQ' => 'E02006136',
        '8NR' => 'E02006136',
        '8NS' => 'E02006145',
        '8NT' => 'E02006136',
        '8NU' => 'E02006136',
        '8NW' => 'E02006136',
        '8NX' => 'E02006136',
        '8NY' => 'E02006136',
        '8NZ' => 'E02006136',
        '8PA' => 'E02006145',
        '8PB' => 'E02006136',
        '8PD' => 'E02006136',
        '8PE' => 'E02006136',
        '8PF' => 'E02006136',
        '8PG' => 'E02006136',
        '8PH' => 'E02006136',
        '8PJ' => 'E02006136',
        '8PL' => 'E02006136',
        '8PN' => 'E02006136',
        '8PP' => 'E02006145',
        '8PQ' => 'E02006136',
        '8PR' => 'E02006136',
        '8PS' => 'E02006136',
        '8PT' => 'E02006136',
        '8PU' => 'E02006136',
        '8PX' => 'E02006136',
        '8PY' => 'E02006136',
        '8PZ' => 'E02006136',
        '8QA' => 'E02006136',
        '8QB' => 'E02006136',
        '8QD' => 'E02006136',
        '8QE' => 'E02006136',
        '8QF' => 'E02006136',
        '8QH' => 'E02006136',
        '8QQ' => 'E02006136',
        '8QR' => 'E02006136',
        '8QS' => 'E02006136',
        '8QT' => 'E02006136',
        '8QU' => 'E02006136',
        '8RA' => 'E02006136',
        '8RB' => 'E02006136',
        '8RD' => 'E02006136',
        '8RE' => 'E02006136',
        '8RF' => 'E02006136',
        '8RG' => 'E02006136',
        '8RH' => 'E02006136',
        '8RJ' => 'E02006136',
        '8RL' => 'E02006136',
        '8RN' => 'E02006136',
        '8RP' => 'E02006136',
        '8RQ' => 'E02006136',
        '8RT' => 'E02006136',
        '8RU' => 'E02006136',
        '8RX' => 'E02006136',
        '8RY' => 'E02006136',
        '8RZ' => 'E02006136',
        '8SA' => 'E02006136',
        '8SB' => 'E02006136',
        '8SF' => 'E02006136',
        '8SG' => 'E02006136',
        '8SH' => 'E02006136',
        '8SJ' => 'E02006136',
        '8SL' => 'E02006136',
        '8SN' => 'E02006145',
        '8SP' => 'E02006136',
        '8SQ' => 'E02006136',
        '8SR' => 'E02006136',
        '8SS' => 'E02006136',
        '8ST' => 'E02006136',
        '8SU' => 'E02006136',
        '8SW' => 'E02006136',
        '8SX' => 'E02006136',
        '8TA' => 'E02006145',
        '8TD' => 'E02006136',
        '8TE' => 'E02006136',
        '8TF' => 'E02006136',
        '8TG' => 'E02006136',
        '8TH' => 'E02006136',
        '8TJ' => 'E02006136',
        '8TL' => 'E02006136',
        '8TN' => 'E02006136',
        '8TP' => 'E02006136',
        '8TQ' => 'E02006136',
        '8TR' => 'E02006136',
        '8TU' => 'E02006136',
        '8TW' => 'E02006136',
        '8TX' => 'E02006134',
        '8WQ' => 'E02006134',
        '8WU' => 'E02006141',
        '8WW' => 'E02006141',
        '8WX' => 'E02006141',
        '8WY' => 'E02006141',
        '8WZ' => 'E02006141',
        '8YA' => 'E02006141',
        '8YD' => 'E02006141',
        '8YE' => 'E02006141',
        '8YH' => 'E02006141',
        '8YJ' => 'E02006141',
        '8YN' => 'E02006141',
        '8YP' => 'E02006141',
        '8YQ' => 'E02006141',
        '8YR' => 'E02006141',
        '8YS' => 'E02006141',
        '8YT' => 'E02006141',
        '8YU' => 'E02006134',
        '8YW' => 'E02006141',
        '8YX' => 'E02006141',
        '8YY' => 'E02006141',
        '8YZ' => 'E02006141',
        '8ZA' => 'E02006141',
        '8ZB' => 'E02006141',
        '8ZD' => 'E02006141',
        '8ZE' => 'E02006141',
        '8ZF' => 'E02006145',
        '8ZG' => 'E02006141',
        '8ZH' => 'E02006141',
        '8ZJ' => 'E02006141',
        '8ZL' => 'E02006145',
        '8ZP' => 'E02006145',
        '8ZQ' => 'E02006141',
        '8ZR' => 'E02006145',
        '8ZS' => 'E02006141',
        '8ZT' => 'E02006145',
        '8ZU' => 'E02006141',
        '8ZW' => 'E02006145',
        '8ZX' => 'E02006141',
        '8ZY' => 'E02006141',
        '8ZZ' => 'E02006141',
        '9AA' => 'E02006134',
        '9AB' => 'E02006134',
        '9AD' => 'E02006134',
        '9AE' => 'E02006134',
        '9AF' => 'E02006134',
        '9AG' => 'E02006134',
        '9AH' => 'E02006134',
        '9AJ' => 'E02006134',
        '9AL' => 'E02006134',
        '9AN' => 'E02006134',
        '9AP' => 'E02006134',
        '9AQ' => 'E02006134',
        '9AR' => 'E02006134',
        '9AS' => 'E02006134',
        '9AT' => 'E02006134',
        '9AU' => 'E02006134',
        '9AW' => 'E02006134',
        '9AX' => 'E02006134',
        '9AY' => 'E02006134',
        '9AZ' => 'E02006134',
        '9BA' => 'E02006134',
        '9BB' => 'E02006134',
        '9BD' => 'E02006134',
        '9BE' => 'E02006134',
        '9BF' => 'E02006134',
        '9BG' => 'E02006134',
        '9BH' => 'E02006134',
        '9BJ' => 'E02006134',
        '9BL' => 'E02006134',
        '9BN' => 'E02006134',
        '9BP' => 'E02006134',
        '9BQ' => 'E02006134',
        '9BS' => 'E02006134',
        '9BT' => 'E02006134',
        '9BU' => 'E02006134',
        '9BW' => 'E02006134',
        '9BX' => 'E02006134',
        '9BY' => 'E02006134',
        '9BZ' => 'E02006134',
        '9DA' => 'E02006134',
        '9DB' => 'E02006134',
        '9DD' => 'E02006134',
        '9DE' => 'E02006134',
        '9DF' => 'E02006145',
        '9DG' => 'E02006134',
        '9DH' => 'E02006134',
        '9DL' => 'E02006134',
        '9DN' => 'E02006134',
        '9DP' => 'E02006134',
        '9DR' => 'E02006134',
        '9DS' => 'E02006134',
        '9DT' => 'E02006134',
        '9DU' => 'E02006134',
        '9DW' => 'E02006134',
        '9DX' => 'E02006134',
        '9DY' => 'E02006134',
        '9DZ' => 'E02006134',
        '9EA' => 'E02006134',
        '9EB' => 'E02006134',
        '9ED' => 'E02006134',
        '9EE' => 'E02006134',
        '9EF' => 'E02006134',
        '9EG' => 'E02006134',
        '9EH' => 'E02006134',
        '9EJ' => 'E02006143',
        '9EL' => 'E02006134',
        '9EN' => 'E02006134',
        '9EP' => 'E02006134',
        '9EQ' => 'E02006134',
        '9ER' => 'E02006143',
        '9ES' => 'E02006143',
        '9EU' => 'E02006143',
        '9EW' => 'E02006134',
        '9EX' => 'E02006143',
        '9EY' => 'E02006143',
        '9EZ' => 'E02006143',
        '9FB' => 'E02006143',
        '9FD' => 'E02006143',
        '9FE' => 'E02006143',
        '9FF' => 'E02006134',
        '9FG' => 'E02006134',
        '9FH' => 'E02006134',
        '9FJ' => 'E02006134',
        '9FP' => 'E02006143',
        '9FQ' => 'E02006143',
        '9FR' => 'E02006143',
        '9FW' => 'E02006145',
        '9FX' => 'E02006134',
        '9GD' => 'E02006134',
        '9GR' => 'E02006134',
        '9GT' => 'E02006136',
        '9GU' => 'E02006134',
        '9GW' => 'E02006134',
        '9GX' => 'E02006134',
        '9GY' => 'E02006134',
        '9GZ' => 'E02006134',
        '9HA' => 'E02006134',
        '9HB' => 'E02006134',
        '9HD' => 'E02006134',
        '9HE' => 'E02006134',
        '9HF' => 'E02006134',
        '9HG' => 'E02006134',
        '9HH' => 'E02006134',
        '9HJ' => 'E02006134',
        '9HL' => 'E02006134',
        '9HN' => 'E02006134',
        '9HP' => 'E02006134',
        '9HQ' => 'E02006134',
        '9HR' => 'E02006136',
        '9HS' => 'E02006134',
        '9HT' => 'E02006136',
        '9HU' => 'E02006134',
        '9HW' => 'E02006134',
        '9HX' => 'E02006134',
        '9HY' => 'E02006134',
        '9HZ' => 'E02006134',
        '9JA' => 'E02006134',
        '9JB' => 'E02006134',
        '9JD' => 'E02006134',
        '9JE' => 'E02006134',
        '9JF' => 'E02006134',
        '9JG' => 'E02006134',
        '9JH' => 'E02006134',
        '9JJ' => 'E02006134',
        '9JL' => 'E02006134',
        '9JN' => 'E02006134',
        '9JP' => 'E02006134',
        '9JQ' => 'E02006134',
        '9JR' => 'E02006134',
        '9JS' => 'E02006134',
        '9JT' => 'E02006134',
        '9JU' => 'E02006134',
        '9JW' => 'E02006134',
        '9JX' => 'E02006134',
        '9JY' => 'E02006134',
        '9JZ' => 'E02006134',
        '9LA' => 'E02006134',
        '9LB' => 'E02006134',
        '9LD' => 'E02006134',
        '9LE' => 'E02006134',
        '9LF' => 'E02006134',
        '9LG' => 'E02006134',
        '9LH' => 'E02006134',
        '9LJ' => 'E02006134',
        '9LL' => 'E02006134',
        '9LN' => 'E02006134',
        '9LP' => 'E02006134',
        '9LQ' => 'E02006134',
        '9LR' => 'E02006134',
        '9LS' => 'E02006134',
        '9LT' => 'E02006134',
        '9LU' => 'E02006134',
        '9LW' => 'E02006134',
        '9LX' => 'E02006134',
        '9LY' => 'E02004118',
        '9LZ' => 'E02006134',
        '9NA' => 'E02006134',
        '9NB' => 'E02006134',
        '9ND' => 'E02006134',
        '9NE' => 'E02006134',
        '9NF' => 'E02006134',
        '9NG' => 'E02006134',
        '9NH' => 'E02006134',
        '9NJ' => 'E02006134',
        '9NL' => 'E02006134',
        '9NN' => 'E02006134',
        '9NP' => 'E02006134',
        '9NQ' => 'E02006134',
        '9NR' => 'E02006134',
        '9NS' => 'E02006134',
        '9NT' => 'E02006134',
        '9NU' => 'E02006134',
        '9NW' => 'E02006134',
        '9NX' => 'E02006134',
        '9NY' => 'E02006134',
        '9NZ' => 'E02006134',
        '9PA' => 'E02006134',
        '9PB' => 'E02006134',
        '9PD' => 'E02006136',
        '9PE' => 'E02006136',
        '9PF' => 'E02006136',
        '9PG' => 'E02006136',
        '9PH' => 'E02006134',
        '9PJ' => 'E02006134',
        '9PL' => 'E02006134',
        '9PN' => 'E02006134',
        '9PP' => 'E02006134',
        '9PQ' => 'E02006134',
        '9PR' => 'E02006134',
        '9PS' => 'E02006136',
        '9PT' => 'E02006134',
        '9PU' => 'E02006145',
        '9PX' => 'E02006134',
        '9PY' => 'E02006134',
        '9PZ' => 'E02006134',
        '9QA' => 'E02006134',
        '9QB' => 'E02006134',
        '9QD' => 'E02006134',
        '9QE' => 'E02006134',
        '9QF' => 'E02006134',
        '9QG' => 'E02006134',
        '9QH' => 'E02006134',
        '9QJ' => 'E02006134',
        '9QL' => 'E02006134',
        '9QN' => 'E02006134',
        '9QP' => 'E02006134',
        '9QQ' => 'E02006134',
        '9QR' => 'E02006134',
        '9QS' => 'E02006134',
        '9QT' => 'E02006134',
        '9QU' => 'E02006134',
        '9QW' => 'E02006134',
        '9QX' => 'E02006134',
        '9QY' => 'E02006134',
        '9QZ' => 'E02006145',
        '9RA' => 'E02006145',
        '9RB' => 'E02006145',
        '9RD' => 'E02006145',
        '9RE' => 'E02006145',
        '9RF' => 'E02006145',
        '9RG' => 'E02006145',
        '9RH' => 'E02006145',
        '9RJ' => 'E02006145',
        '9RL' => 'E02006145',
        '9RN' => 'E02006145',
        '9RP' => 'E02006145',
        '9RQ' => 'E02006145',
        '9RR' => 'E02006145',
        '9RS' => 'E02006145',
        '9RT' => 'E02006145',
        '9RU' => 'E02006145',
        '9RW' => 'E02006145',
        '9RX' => 'E02006145',
        '9RY' => 'E02006145',
        '9RZ' => 'E02006145',
        '9SA' => 'E02006145',
        '9SB' => 'E02006143',
        '9SD' => 'E02006145',
        '9SE' => 'E02006145',
        '9SF' => 'E02006145',
        '9SG' => 'E02006145',
        '9SH' => 'E02006145',
        '9SJ' => 'E02006143',
        '9SL' => 'E02006145',
        '9SQ' => 'E02006145',
        '9SU' => 'E02006143',
        '9SX' => 'E02006134',
        '9SY' => 'E02006143',
        '9SZ' => 'E02006143',
        '9TA' => 'E02006143',
        '9TB' => 'E02006143',
        '9TD' => 'E02006143',
        '9TE' => 'E02006143',
        '9TH' => 'E02006143',
        '9TJ' => 'E02006143',
        '9TL' => 'E02006143',
        '9TN' => 'E02006143',
        '9TP' => 'E02006143',
        '9TQ' => 'E02006143',
        '9TR' => 'E02006143',
        '9TW' => 'E02006143',
        '9UB' => 'E02006134',
        '9UD' => 'E02006134',
        '9WA' => 'E02006134',
        '9WE' => 'E02006141',
        '9WQ' => 'E02006134',
        '9WR' => 'E02006141',
        '9WY' => 'E02006141',
        '9WZ' => 'E02006141',
        '9XA' => 'E02006143',
        '9XB' => 'E02006141',
        '9XD' => 'E02006143',
        '9XE' => 'E02006143',
        '9YD' => 'E02006134',
        '9YJ' => 'E02006141',
        '9YQ' => 'E02006141',
        '9YU' => 'E02006141',
        '9YW' => 'E02006141',
        '9YX' => 'E02006141',
        '9YY' => 'E02006141',
        '9YZ' => 'E02006141',
        '9ZA' => 'E02006141',
        '9ZB' => 'E02006141',
        '9ZD' => 'E02006134',
        '9ZG' => 'E02006141',
        '9ZH' => 'E02006141',
        '9ZJ' => 'E02006141',
        '9ZP' => 'E02006141',
        '9ZQ' => 'E02006141',
        '9ZR' => 'E02006134',
        '9ZS' => 'E02006134',
        '9ZT' => 'E02006141',
        '9ZU' => 'E02006141',
        '9ZW' => 'E02006141',
        '9ZX' => 'E02006141',
        '9ZY' => 'E02006143',
        '9ZZ' => 'E02006143',
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
