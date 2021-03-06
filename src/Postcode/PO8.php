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
final class PO8
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02006829',
        '0AB' => 'E02006829',
        '0AD' => 'E02006829',
        '0AE' => 'E02006829',
        '0AF' => 'E02004764',
        '0AG' => 'E02006829',
        '0AH' => 'E02006829',
        '0AJ' => 'E02006829',
        '0AL' => 'E02004709',
        '0AN' => 'E02004709',
        '0AP' => 'E02006829',
        '0AQ' => 'E02004710',
        '0AR' => 'E02006829',
        '0AS' => 'E02004709',
        '0AT' => 'E02004709',
        '0AU' => 'E02004709',
        '0AW' => 'E02004709',
        '0AX' => 'E02004709',
        '0AY' => 'E02004709',
        '0AZ' => 'E02004709',
        '0BA' => 'E02004709',
        '0BB' => 'E02004710',
        '0BD' => 'E02004709',
        '0BE' => 'E02004709',
        '0BF' => 'E02004709',
        '0BG' => 'E02004709',
        '0BH' => 'E02006829',
        '0BJ' => 'E02004710',
        '0BL' => 'E02004710',
        '0BN' => 'E02006829',
        '0BP' => 'E02004710',
        '0BQ' => 'E02004709',
        '0BS' => 'E02004710',
        '0BT' => 'E02004710',
        '0BU' => 'E02006829',
        '0BW' => 'E02006829',
        '0BX' => 'E02006829',
        '0BY' => 'E02006829',
        '0BZ' => 'E02006829',
        '0DA' => 'E02006829',
        '0DB' => 'E02006829',
        '0DD' => 'E02004710',
        '0DE' => 'E02006829',
        '0DF' => 'E02006829',
        '0DG' => 'E02006829',
        '0DH' => 'E02004709',
        '0DJ' => 'E02004709',
        '0DL' => 'E02006829',
        '0DN' => 'E02006829',
        '0DP' => 'E02006829',
        '0DQ' => 'E02006829',
        '0DR' => 'E02006829',
        '0DS' => 'E02006829',
        '0DT' => 'E02006829',
        '0DU' => 'E02004709',
        '0DW' => 'E02006829',
        '0DX' => 'E02004709',
        '0DY' => 'E02004709',
        '0DZ' => 'E02004709',
        '0EA' => 'E02004709',
        '0EB' => 'E02004709',
        '0ED' => 'E02004709',
        '0EE' => 'E02004709',
        '0EF' => 'E02004709',
        '0EG' => 'E02004709',
        '0EH' => 'E02004709',
        '0EJ' => 'E02004709',
        '0EL' => 'E02004709',
        '0EN' => 'E02004709',
        '0EP' => 'E02004710',
        '0EQ' => 'E02004709',
        '0ER' => 'E02004709',
        '0ES' => 'E02004709',
        '0ET' => 'E02004710',
        '0EU' => 'E02004710',
        '0EW' => 'E02004709',
        '0EX' => 'E02004709',
        '0EY' => 'E02004710',
        '0EZ' => 'E02004710',
        '0FA' => 'E02004709',
        '0FB' => 'E02004709',
        '0FD' => 'E02004764',
        '0FE' => 'E02004709',
        '0FF' => 'E02006829',
        '0FG' => 'E02006829',
        '0FJ' => 'E02004764',
        '0FL' => 'E02004709',
        '0FN' => 'E02006829',
        '0FP' => 'E02004709',
        '0FQ' => 'E02004709',
        '0FR' => 'E02004764',
        '0FS' => 'E02004710',
        '0FT' => 'E02004764',
        '0FU' => 'E02004709',
        '0FW' => 'E02006829',
        '0FX' => 'E02004709',
        '0FY' => 'E02004710',
        '0FZ' => 'E02004709',
        '0GA' => 'E02004764',
        '0GB' => 'E02004709',
        '0GD' => 'E02004709',
        '0GE' => 'E02004709',
        '0GF' => 'E02004764',
        '0GG' => 'E02004709',
        '0GH' => 'E02004709',
        '0GJ' => 'E02004764',
        '0GL' => 'E02004764',
        '0GN' => 'E02004764',
        '0GP' => 'E02004764',
        '0GQ' => 'E02004764',
        '0GR' => 'E02004764',
        '0GS' => 'E02004764',
        '0GT' => 'E02004764',
        '0GU' => 'E02004709',
        '0GW' => 'E02004764',
        '0GX' => 'E02004764',
        '0GY' => 'E02004709',
        '0GZ' => 'E02004764',
        '0HA' => 'E02004710',
        '0HB' => 'E02004709',
        '0HD' => 'E02004710',
        '0HE' => 'E02004710',
        '0HF' => 'E02004710',
        '0HG' => 'E02004710',
        '0HH' => 'E02004709',
        '0HJ' => 'E02004709',
        '0HL' => 'E02004709',
        '0HN' => 'E02004709',
        '0HP' => 'E02004709',
        '0HQ' => 'E02004710',
        '0HR' => 'E02004709',
        '0HS' => 'E02004709',
        '0HT' => 'E02004709',
        '0HU' => 'E02004709',
        '0HW' => 'E02004709',
        '0HX' => 'E02004709',
        '0HY' => 'E02004709',
        '0HZ' => 'E02004709',
        '0JA' => 'E02004709',
        '0JB' => 'E02004709',
        '0JD' => 'E02004709',
        '0JE' => 'E02004709',
        '0JF' => 'E02004709',
        '0JG' => 'E02004710',
        '0JH' => 'E02004709',
        '0JJ' => 'E02004709',
        '0JL' => 'E02004709',
        '0JN' => 'E02004709',
        '0JP' => 'E02004709',
        '0JQ' => 'E02004710',
        '0JR' => 'E02004709',
        '0JS' => 'E02004709',
        '0JT' => 'E02004709',
        '0JU' => 'E02004709',
        '0JW' => 'E02004764',
        '0JX' => 'E02004709',
        '0JY' => 'E02004709',
        '0JZ' => 'E02004709',
        '0LA' => 'E02004709',
        '0LB' => 'E02004709',
        '0LD' => 'E02004709',
        '0LE' => 'E02004709',
        '0LF' => 'E02004709',
        '0LG' => 'E02004709',
        '0LH' => 'E02004709',
        '0LJ' => 'E02004709',
        '0LL' => 'E02004709',
        '0LN' => 'E02004709',
        '0LP' => 'E02004709',
        '0LQ' => 'E02004709',
        '0LR' => 'E02004709',
        '0LS' => 'E02004709',
        '0LT' => 'E02004709',
        '0LU' => 'E02004709',
        '0LW' => 'E02004709',
        '0LX' => 'E02004709',
        '0LY' => 'E02004709',
        '0LZ' => 'E02004709',
        '0NA' => 'E02004709',
        '0NB' => 'E02004709',
        '0ND' => 'E02004709',
        '0NE' => 'E02004709',
        '0NF' => 'E02004709',
        '0NG' => 'E02004709',
        '0NH' => 'E02004709',
        '0NJ' => 'E02004709',
        '0NL' => 'E02004709',
        '0NN' => 'E02004709',
        '0NP' => 'E02004709',
        '0NQ' => 'E02004709',
        '0NR' => 'E02004709',
        '0NS' => 'E02004709',
        '0NT' => 'E02004709',
        '0NU' => 'E02004709',
        '0NW' => 'E02004709',
        '0NX' => 'E02004709',
        '0NY' => 'E02004709',
        '0NZ' => 'E02004709',
        '0PA' => 'E02004709',
        '0PB' => 'E02004709',
        '0PD' => 'E02004709',
        '0PE' => 'E02004709',
        '0PF' => 'E02004709',
        '0PG' => 'E02004709',
        '0PH' => 'E02004709',
        '0PJ' => 'E02004709',
        '0PL' => 'E02004709',
        '0PN' => 'E02004709',
        '0PP' => 'E02004709',
        '0PQ' => 'E02004709',
        '0PR' => 'E02004709',
        '0PS' => 'E02004709',
        '0PT' => 'E02004709',
        '0PU' => 'E02004709',
        '0PW' => 'E02004709',
        '0PX' => 'E02004709',
        '0PY' => 'E02004709',
        '0PZ' => 'E02004709',
        '0QA' => 'E02004707',
        '0QB' => 'E02004707',
        '0QD' => 'E02004709',
        '0QE' => 'E02004707',
        '0QF' => 'E02004709',
        '0QG' => 'E02006829',
        '0QH' => 'E02004709',
        '0QJ' => 'E02004709',
        '0QL' => 'E02004709',
        '0QN' => 'E02004710',
        '0QP' => 'E02004710',
        '0QQ' => 'E02006829',
        '0QR' => 'E02004709',
        '0QS' => 'E02004709',
        '0QT' => 'E02004709',
        '0QU' => 'E02004709',
        '0QW' => 'E02004710',
        '0QX' => 'E02004709',
        '0QY' => 'E02004709',
        '0QZ' => 'E02004709',
        '0RA' => 'E02004709',
        '0RB' => 'E02004709',
        '0RD' => 'E02004709',
        '0RE' => 'E02004709',
        '0RF' => 'E02006829',
        '0RG' => 'E02004709',
        '0RH' => 'E02004709',
        '0RJ' => 'E02004709',
        '0RL' => 'E02004709',
        '0RN' => 'E02004709',
        '0RP' => 'E02004709',
        '0RQ' => 'E02004709',
        '0RR' => 'E02004709',
        '0RS' => 'E02004709',
        '0RT' => 'E02004709',
        '0RU' => 'E02004709',
        '0RW' => 'E02006829',
        '0RX' => 'E02004709',
        '0RY' => 'E02004709',
        '0RZ' => 'E02004710',
        '0SA' => 'E02004709',
        '0SB' => 'E02004709',
        '0SD' => 'E02004839',
        '0SE' => 'E02004839',
        '0SF' => 'E02004710',
        '0SG' => 'E02004710',
        '0SH' => 'E02004710',
        '0SJ' => 'E02004710',
        '0SL' => 'E02004842',
        '0SN' => 'E02004842',
        '0SP' => 'E02004710',
        '0SQ' => 'E02004710',
        '0SR' => 'E02004710',
        '0SS' => 'E02004710',
        '0ST' => 'E02004709',
        '0SU' => 'E02004709',
        '0SW' => 'E02004842',
        '0SX' => 'E02004709',
        '0SY' => 'E02006829',
        '0SZ' => 'E02006829',
        '0TA' => 'E02004710',
        '0TB' => 'E02004710',
        '0TD' => 'E02004710',
        '0TE' => 'E02004710',
        '0TF' => 'E02004710',
        '0TG' => 'E02004710',
        '0TH' => 'E02004710',
        '0TJ' => 'E02004710',
        '0TL' => 'E02004710',
        '0TN' => 'E02004710',
        '0TP' => 'E02004710',
        '0TQ' => 'E02004710',
        '0TR' => 'E02004710',
        '0TS' => 'E02004710',
        '0TT' => 'E02004710',
        '0TU' => 'E02004710',
        '0TW' => 'E02004710',
        '0TX' => 'E02004710',
        '0TY' => 'E02004710',
        '0TZ' => 'E02004710',
        '0UA' => 'E02004710',
        '0UB' => 'E02004839',
        '0UD' => 'E02004709',
        '0UE' => 'E02004709',
        '0UF' => 'E02006829',
        '0UG' => 'E02006829',
        '0UH' => 'E02004709',
        '0UJ' => 'E02004709',
        '0UL' => 'E02004709',
        '0UN' => 'E02006829',
        '0UP' => 'E02004710',
        '0UQ' => 'E02006829',
        '0UR' => 'E02006829',
        '0US' => 'E02004764',
        '0UT' => 'E02004709',
        '0UU' => 'E02006829',
        '0UW' => 'E02006829',
        '0UX' => 'E02004709',
        '0UY' => 'E02004709',
        '0UZ' => 'E02004709',
        '0WA' => 'E02006829',
        '0WB' => 'E02004764',
        '0WD' => 'E02004710',
        '0WE' => 'E02004709',
        '0WF' => 'E02004764',
        '0WG' => 'E02004709',
        '0WH' => 'E02004709',
        '0WJ' => 'E02004709',
        '0WL' => 'E02004709',
        '0WN' => 'E02004709',
        '0WP' => 'E02004709',
        '0WQ' => 'E02004709',
        '0WR' => 'E02004709',
        '0WS' => 'E02004709',
        '0WZ' => 'E02004764',
        '0XA' => 'E02006829',
        '0XB' => 'E02004709',
        '0XD' => 'E02004709',
        '0XF' => 'E02004764',
        '0XG' => 'E02004709',
        '0XH' => 'E02006829',
        '0XJ' => 'E02004710',
        '0XL' => 'E02004709',
        '0XN' => 'E02004709',
        '0XP' => 'E02004709',
        '0XQ' => 'E02004709',
        '0XR' => 'E02004710',
        '0XS' => 'E02004709',
        '0XT' => 'E02004709',
        '0XU' => 'E02004709',
        '0XW' => 'E02004709',
        '0XX' => 'E02004709',
        '0XY' => 'E02004709',
        '0XZ' => 'E02004709',
        '0YA' => 'E02004710',
        '0YB' => 'E02004709',
        '0YD' => 'E02004709',
        '0YE' => 'E02004764',
        '0YF' => 'E02004709',
        '0YG' => 'E02004764',
        '0YH' => 'E02004764',
        '0YJ' => 'E02004709',
        '0YL' => 'E02004709',
        '0YN' => 'E02004709',
        '0YP' => 'E02004710',
        '0YQ' => 'E02004764',
        '0YR' => 'E02004709',
        '0YS' => 'E02004709',
        '0YT' => 'E02004709',
        '0YU' => 'E02004764',
        '0YW' => 'E02004709',
        '0YX' => 'E02004709',
        '0YY' => 'E02004709',
        '0ZA' => 'E02004709',
        '0ZB' => 'E02004709',
        '0ZD' => 'E02004709',
        '0ZE' => 'E02004709',
        '0ZF' => 'E02004709',
        '0ZG' => 'E02004709',
        '0ZH' => 'E02004709',
        '0ZJ' => 'E02004764',
        '0ZN' => 'E02004764',
        '0ZP' => 'E02004764',
        '0ZQ' => 'E02004764',
        '0ZR' => 'E02004764',
        '0ZS' => 'E02004764',
        '8AA' => 'E02006831',
        '8AB' => 'E02006831',
        '8AD' => 'E02006831',
        '8AE' => 'E02006831',
        '8AF' => 'E02006831',
        '8AG' => 'E02006831',
        '8AH' => 'E02006831',
        '8AJ' => 'E02006831',
        '8AL' => 'E02006831',
        '8AN' => 'E02006831',
        '8AP' => 'E02006831',
        '8AQ' => 'E02004764',
        '8AR' => 'E02006831',
        '8AS' => 'E02006831',
        '8AT' => 'E02006831',
        '8AU' => 'E02006831',
        '8AW' => 'E02006831',
        '8AX' => 'E02006831',
        '8AY' => 'E02006831',
        '8AZ' => 'E02006831',
        '8BA' => 'E02006831',
        '8BB' => 'E02006831',
        '8BD' => 'E02006831',
        '8BE' => 'E02006831',
        '8BF' => 'E02004764',
        '8BG' => 'E02006831',
        '8BH' => 'E02004764',
        '8BJ' => 'E02006831',
        '8BL' => 'E02006831',
        '8BN' => 'E02004764',
        '8BP' => 'E02006831',
        '8BQ' => 'E02006831',
        '8BS' => 'E02004764',
        '8BT' => 'E02006830',
        '8BU' => 'E02006830',
        '8BW' => 'E02006831',
        '8BX' => 'E02006831',
        '8DA' => 'E02004764',
        '8DB' => 'E02006831',
        '8DD' => 'E02004764',
        '8DE' => 'E02004764',
        '8DF' => 'E02004764',
        '8DG' => 'E02004764',
        '8DH' => 'E02004764',
        '8DJ' => 'E02004764',
        '8DL' => 'E02006831',
        '8DN' => 'E02006831',
        '8DP' => 'E02006831',
        '8DQ' => 'E02004764',
        '8DR' => 'E02006831',
        '8DS' => 'E02006831',
        '8DT' => 'E02006831',
        '8DU' => 'E02006831',
        '8DW' => 'E02006831',
        '8DX' => 'E02006831',
        '8DY' => 'E02006831',
        '8DZ' => 'E02006831',
        '8EA' => 'E02006831',
        '8EB' => 'E02006831',
        '8ED' => 'E02006831',
        '8EH' => 'E02006831',
        '8EJ' => 'E02006831',
        '8EL' => 'E02006831',
        '8EN' => 'E02006831',
        '8EP' => 'E02006831',
        '8ER' => 'E02006831',
        '8ES' => 'E02006831',
        '8ET' => 'E02006831',
        '8EU' => 'E02006831',
        '8EW' => 'E02006831',
        '8EX' => 'E02006831',
        '8EY' => 'E02006831',
        '8EZ' => 'E02006831',
        '8HA' => 'E02006831',
        '8HB' => 'E02006831',
        '8HD' => 'E02006831',
        '8HG' => 'E02006831',
        '8HH' => 'E02006831',
        '8HJ' => 'E02006831',
        '8HL' => 'E02006829',
        '8HN' => 'E02006830',
        '8HP' => 'E02006830',
        '8HR' => 'E02006830',
        '8HS' => 'E02006831',
        '8HT' => 'E02006830',
        '8HU' => 'E02006830',
        '8HX' => 'E02006831',
        '8HY' => 'E02006831',
        '8HZ' => 'E02006831',
        '8JA' => 'E02006831',
        '8JB' => 'E02006830',
        '8JD' => 'E02006831',
        '8JE' => 'E02006831',
        '8JF' => 'E02006831',
        '8JG' => 'E02006831',
        '8JH' => 'E02006830',
        '8JJ' => 'E02006830',
        '8JL' => 'E02006830',
        '8JN' => 'E02006830',
        '8JP' => 'E02006830',
        '8JR' => 'E02006830',
        '8JS' => 'E02006830',
        '8JT' => 'E02006830',
        '8JU' => 'E02006830',
        '8JW' => 'E02006830',
        '8JX' => 'E02006830',
        '8JY' => 'E02006830',
        '8JZ' => 'E02006830',
        '8LA' => 'E02006830',
        '8LB' => 'E02006830',
        '8LD' => 'E02006830',
        '8LE' => 'E02006830',
        '8LG' => 'E02006830',
        '8LH' => 'E02006830',
        '8LJ' => 'E02006830',
        '8LL' => 'E02006830',
        '8LN' => 'E02006830',
        '8LP' => 'E02006830',
        '8LR' => 'E02006830',
        '8LS' => 'E02006830',
        '8LT' => 'E02006830',
        '8LU' => 'E02006830',
        '8LX' => 'E02006830',
        '8LY' => 'E02006830',
        '8NA' => 'E02006831',
        '8NB' => 'E02006830',
        '8ND' => 'E02006830',
        '8NE' => 'E02006830',
        '8NF' => 'E02006830',
        '8NG' => 'E02006830',
        '8NH' => 'E02006830',
        '8NJ' => 'E02006830',
        '8NL' => 'E02006831',
        '8NN' => 'E02004764',
        '8NP' => 'E02006831',
        '8NQ' => 'E02006830',
        '8NR' => 'E02006831',
        '8PL' => 'E02004764',
        '8PN' => 'E02004764',
        '8PP' => 'E02004764',
        '8PR' => 'E02004764',
        '8PS' => 'E02004764',
        '8PT' => 'E02004764',
        '8PU' => 'E02004764',
        '8PW' => 'E02004764',
        '8PX' => 'E02004764',
        '8PY' => 'E02004764',
        '8PZ' => 'E02004764',
        '8QA' => 'E02004764',
        '8QB' => 'E02004764',
        '8QD' => 'E02004764',
        '8QE' => 'E02006830',
        '8QF' => 'E02006830',
        '8QH' => 'E02004764',
        '8QJ' => 'E02004764',
        '8QL' => 'E02004764',
        '8QN' => 'E02004764',
        '8QP' => 'E02004764',
        '8QQ' => 'E02004764',
        '8QR' => 'E02006830',
        '8QS' => 'E02006830',
        '8QT' => 'E02006830',
        '8QU' => 'E02006830',
        '8QW' => 'E02006830',
        '8QX' => 'E02006830',
        '8QY' => 'E02004764',
        '8QZ' => 'E02004764',
        '8RA' => 'E02004764',
        '8RB' => 'E02004764',
        '8RD' => 'E02004764',
        '8RE' => 'E02004764',
        '8RF' => 'E02004764',
        '8RG' => 'E02004764',
        '8RH' => 'E02004764',
        '8RJ' => 'E02004764',
        '8RL' => 'E02004764',
        '8RN' => 'E02004764',
        '8RP' => 'E02004764',
        '8RQ' => 'E02004764',
        '8RR' => 'E02004764',
        '8RS' => 'E02004764',
        '8RT' => 'E02004764',
        '8RU' => 'E02004764',
        '8RW' => 'E02004764',
        '8RX' => 'E02004764',
        '8RY' => 'E02004764',
        '8RZ' => 'E02004764',
        '8SA' => 'E02004764',
        '8SB' => 'E02004764',
        '8SD' => 'E02004764',
        '8SE' => 'E02004764',
        '8SF' => 'E02004764',
        '8SG' => 'E02004764',
        '8SH' => 'E02004764',
        '8SJ' => 'E02006830',
        '8SL' => 'E02006830',
        '8SN' => 'E02006830',
        '8SP' => 'E02004764',
        '8SQ' => 'E02004764',
        '8SR' => 'E02004764',
        '8SS' => 'E02006830',
        '8ST' => 'E02004764',
        '8SU' => 'E02004764',
        '8SX' => 'E02004764',
        '8SY' => 'E02006830',
        '8TA' => 'E02004764',
        '8TB' => 'E02004764',
        '8TD' => 'E02004764',
        '8TH' => 'E02004764',
        '8TJ' => 'E02004764',
        '8TL' => 'E02004764',
        '8TN' => 'E02004764',
        '8TP' => 'E02004764',
        '8TR' => 'E02004764',
        '8TS' => 'E02004764',
        '8TT' => 'E02004764',
        '8TU' => 'E02004764',
        '8TX' => 'E02004764',
        '8TY' => 'E02004764',
        '8TZ' => 'E02006830',
        '8UA' => 'E02004764',
        '8UB' => 'E02004764',
        '8UD' => 'E02004764',
        '8UH' => 'E02004764',
        '8UJ' => 'E02006831',
        '8UL' => 'E02006831',
        '8UP' => 'E02004764',
        '8UR' => 'E02004764',
        '8UT' => 'E02004764',
        '8UU' => 'E02006831',
        '8UX' => 'E02006831',
        '8UY' => 'E02006831',
        '8UZ' => 'E02006831',
        '8WA' => 'E02004764',
        '8WB' => 'E02004764',
        '8WD' => 'E02006831',
        '8WG' => 'E02004764',
        '8WN' => 'E02004764',
        '8WQ' => 'E02004764',
        '8XA' => 'E02006831',
        '8XB' => 'E02006831',
        '8XD' => 'E02006831',
        '8XE' => 'E02006831',
        '8XF' => 'E02006831',
        '8XG' => 'E02006831',
        '8XH' => 'E02006831',
        '8XJ' => 'E02006831',
        '8XL' => 'E02006831',
        '8XN' => 'E02006831',
        '8XP' => 'E02006831',
        '8XQ' => 'E02006831',
        '8XR' => 'E02006830',
        '8XS' => 'E02004764',
        '8XT' => 'E02004764',
        '8XU' => 'E02004764',
        '8XX' => 'E02006831',
        '8XY' => 'E02004764',
        '8XZ' => 'E02004764',
        '8YA' => 'E02004764',
        '8YD' => 'E02004764',
        '8YG' => 'E02006830',
        '8YH' => 'E02004764',
        '8YJ' => 'E02004764',
        '8YL' => 'E02004764',
        '8YN' => 'E02006831',
        '8YP' => 'E02006831',
        '8YQ' => 'E02004764',
        '8YR' => 'E02004764',
        '8YS' => 'E02006831',
        '8YT' => 'E02004764',
        '8YU' => 'E02004764',
        '8YW' => 'E02006831',
        '8YX' => 'E02006831',
        '8ZG' => 'E02004764',
        '8ZH' => 'E02004764',
        '8ZJ' => 'E02004764',
        '8ZN' => 'E02004764',
        '8ZP' => 'E02004764',
        '8ZQ' => 'E02004764',
        '8ZS' => 'E02004764',
        '9AA' => 'E02006831',
        '9AB' => 'E02006831',
        '9AD' => 'E02006831',
        '9AE' => 'E02006831',
        '9AF' => 'E02004710',
        '9AG' => 'E02006831',
        '9AH' => 'E02006831',
        '9AJ' => 'E02006830',
        '9AL' => 'E02006831',
        '9AN' => 'E02006831',
        '9AP' => 'E02006831',
        '9AQ' => 'E02006830',
        '9AR' => 'E02006831',
        '9AS' => 'E02006831',
        '9AT' => 'E02006831',
        '9AU' => 'E02006831',
        '9AW' => 'E02006831',
        '9AX' => 'E02006830',
        '9AY' => 'E02006830',
        '9AZ' => 'E02006830',
        '9BA' => 'E02006831',
        '9BB' => 'E02006831',
        '9BD' => 'E02006831',
        '9BE' => 'E02006831',
        '9BF' => 'E02006830',
        '9BG' => 'E02006831',
        '9BH' => 'E02006831',
        '9BJ' => 'E02006831',
        '9BL' => 'E02006829',
        '9BN' => 'E02006829',
        '9BP' => 'E02006831',
        '9BQ' => 'E02006831',
        '9BS' => 'E02006831',
        '9BT' => 'E02006831',
        '9BU' => 'E02004710',
        '9BW' => 'E02006829',
        '9BX' => 'E02006829',
        '9BY' => 'E02006829',
        '9BZ' => 'E02006829',
        '9DA' => 'E02006831',
        '9DB' => 'E02006829',
        '9DD' => 'E02006831',
        '9DE' => 'E02006829',
        '9DF' => 'E02006829',
        '9DG' => 'E02006831',
        '9DH' => 'E02006829',
        '9DJ' => 'E02004710',
        '9DL' => 'E02006831',
        '9DN' => 'E02006829',
        '9DP' => 'E02006829',
        '9DQ' => 'E02006829',
        '9DR' => 'E02006829',
        '9DS' => 'E02004710',
        '9DT' => 'E02004710',
        '9DU' => 'E02004710',
        '9DW' => 'E02006829',
        '9DX' => 'E02006829',
        '9DY' => 'E02006829',
        '9DZ' => 'E02006829',
        '9EA' => 'E02006829',
        '9EB' => 'E02006829',
        '9ED' => 'E02006829',
        '9EE' => 'E02006829',
        '9EF' => 'E02004710',
        '9EG' => 'E02004710',
        '9EH' => 'E02006831',
        '9EJ' => 'E02006831',
        '9EL' => 'E02006831',
        '9EN' => 'E02006831',
        '9EP' => 'E02006829',
        '9EQ' => 'E02004710',
        '9ER' => 'E02006829',
        '9ES' => 'E02006829',
        '9ET' => 'E02006829',
        '9EU' => 'E02006829',
        '9EW' => 'E02006829',
        '9EX' => 'E02006829',
        '9EY' => 'E02006829',
        '9EZ' => 'E02006829',
        '9FA' => 'E02006829',
        '9FB' => 'E02006829',
        '9FD' => 'E02006830',
        '9FE' => 'E02006829',
        '9FF' => 'E02006829',
        '9FG' => 'E02006829',
        '9FH' => 'E02006829',
        '9FJ' => 'E02006829',
        '9FL' => 'E02006829',
        '9FN' => 'E02004764',
        '9FP' => 'E02004764',
        '9FQ' => 'E02006829',
        '9FR' => 'E02006829',
        '9FS' => 'E02004764',
        '9FT' => 'E02006829',
        '9FU' => 'E02004764',
        '9FW' => 'E02004710',
        '9FX' => 'E02006829',
        '9FY' => 'E02004764',
        '9FZ' => 'E02004764',
        '9GA' => 'E02006829',
        '9GB' => 'E02004764',
        '9GD' => 'E02004764',
        '9GE' => 'E02006829',
        '9GF' => 'E02006829',
        '9GG' => 'E02004764',
        '9GH' => 'E02006829',
        '9GJ' => 'E02006830',
        '9GL' => 'E02004764',
        '9GN' => 'E02006829',
        '9GP' => 'E02004764',
        '9GQ' => 'E02006829',
        '9GR' => 'E02004764',
        '9GS' => 'E02006829',
        '9GT' => 'E02004764',
        '9GU' => 'E02004710',
        '9GW' => 'E02004764',
        '9GX' => 'E02006830',
        '9GY' => 'E02004710',
        '9GZ' => 'E02004710',
        '9HA' => 'E02006829',
        '9HB' => 'E02004710',
        '9HD' => 'E02006829',
        '9HE' => 'E02006829',
        '9HF' => 'E02006829',
        '9HG' => 'E02004710',
        '9HH' => 'E02004710',
        '9HJ' => 'E02004710',
        '9HL' => 'E02006829',
        '9HN' => 'E02004710',
        '9HP' => 'E02004710',
        '9HQ' => 'E02004710',
        '9HR' => 'E02006829',
        '9HS' => 'E02004710',
        '9HT' => 'E02004710',
        '9HU' => 'E02004710',
        '9HW' => 'E02004710',
        '9HX' => 'E02004710',
        '9HY' => 'E02004710',
        '9HZ' => 'E02004710',
        '9JA' => 'E02004710',
        '9JB' => 'E02004710',
        '9JD' => 'E02004710',
        '9JE' => 'E02004710',
        '9JF' => 'E02004710',
        '9JG' => 'E02004710',
        '9JH' => 'E02004764',
        '9JJ' => 'E02004710',
        '9JL' => 'E02004710',
        '9JN' => 'E02004710',
        '9JP' => 'E02004710',
        '9JQ' => 'E02004710',
        '9JR' => 'E02004710',
        '9JS' => 'E02004710',
        '9JT' => 'E02004710',
        '9JU' => 'E02006829',
        '9JW' => 'E02004710',
        '9JX' => 'E02006829',
        '9JY' => 'E02004710',
        '9JZ' => 'E02004710',
        '9LA' => 'E02006829',
        '9LB' => 'E02006829',
        '9LD' => 'E02006831',
        '9LE' => 'E02006829',
        '9LF' => 'E02006829',
        '9LG' => 'E02006829',
        '9LH' => 'E02006829',
        '9LJ' => 'E02004710',
        '9LL' => 'E02006829',
        '9LN' => 'E02006829',
        '9LP' => 'E02006829',
        '9LQ' => 'E02006829',
        '9LR' => 'E02004710',
        '9LS' => 'E02004710',
        '9LT' => 'E02004710',
        '9LU' => 'E02004710',
        '9LW' => 'E02006829',
        '9LX' => 'E02004710',
        '9LY' => 'E02004710',
        '9LZ' => 'E02004710',
        '9NA' => 'E02004710',
        '9NB' => 'E02004710',
        '9ND' => 'E02004710',
        '9NE' => 'E02004710',
        '9NF' => 'E02004710',
        '9NG' => 'E02004710',
        '9NH' => 'E02004710',
        '9NJ' => 'E02004710',
        '9NL' => 'E02004710',
        '9NN' => 'E02004710',
        '9NP' => 'E02004710',
        '9NQ' => 'E02004710',
        '9NR' => 'E02004710',
        '9NS' => 'E02004710',
        '9NT' => 'E02004710',
        '9NU' => 'E02004710',
        '9NW' => 'E02004710',
        '9NX' => 'E02004710',
        '9NY' => 'E02004710',
        '9NZ' => 'E02004710',
        '9PA' => 'E02004710',
        '9PB' => 'E02004710',
        '9PD' => 'E02004710',
        '9PE' => 'E02004710',
        '9PF' => 'E02004710',
        '9PG' => 'E02004710',
        '9PH' => 'E02004710',
        '9PJ' => 'E02006829',
        '9PL' => 'E02006829',
        '9PN' => 'E02006829',
        '9PP' => 'E02004710',
        '9PQ' => 'E02004710',
        '9PR' => 'E02004710',
        '9PS' => 'E02004710',
        '9PT' => 'E02004710',
        '9PU' => 'E02004710',
        '9PW' => 'E02004710',
        '9PX' => 'E02006829',
        '9PY' => 'E02006830',
        '9PZ' => 'E02006830',
        '9QA' => 'E02006830',
        '9QB' => 'E02006830',
        '9QD' => 'E02006830',
        '9QE' => 'E02004710',
        '9QF' => 'E02004710',
        '9QG' => 'E02006830',
        '9QH' => 'E02006830',
        '9QJ' => 'E02006830',
        '9QL' => 'E02006830',
        '9QN' => 'E02006830',
        '9QP' => 'E02006830',
        '9QQ' => 'E02006830',
        '9QR' => 'E02004710',
        '9QS' => 'E02006830',
        '9QT' => 'E02006830',
        '9QU' => 'E02006829',
        '9QW' => 'E02006829',
        '9QX' => 'E02006829',
        '9QY' => 'E02004710',
        '9QZ' => 'E02006829',
        '9RA' => 'E02004710',
        '9RB' => 'E02006829',
        '9RD' => 'E02004710',
        '9RE' => 'E02004710',
        '9RF' => 'E02006830',
        '9RG' => 'E02004710',
        '9RH' => 'E02006830',
        '9RJ' => 'E02006830',
        '9RL' => 'E02006830',
        '9RN' => 'E02006830',
        '9RP' => 'E02006830',
        '9RQ' => 'E02004710',
        '9RR' => 'E02004710',
        '9RS' => 'E02004710',
        '9RT' => 'E02004710',
        '9RU' => 'E02004710',
        '9RW' => 'E02006830',
        '9RX' => 'E02004710',
        '9RY' => 'E02004710',
        '9RZ' => 'E02004764',
        '9SA' => 'E02004710',
        '9SB' => 'E02004710',
        '9SD' => 'E02004710',
        '9SE' => 'E02004710',
        '9SF' => 'E02004710',
        '9SG' => 'E02004710',
        '9SH' => 'E02006830',
        '9SJ' => 'E02006830',
        '9SL' => 'E02006830',
        '9SN' => 'E02006830',
        '9SP' => 'E02006830',
        '9SQ' => 'E02006830',
        '9SR' => 'E02004710',
        '9SS' => 'E02006830',
        '9ST' => 'E02006830',
        '9SU' => 'E02004710',
        '9SW' => 'E02006830',
        '9SX' => 'E02004710',
        '9SY' => 'E02006829',
        '9SZ' => 'E02006829',
        '9TA' => 'E02006829',
        '9TB' => 'E02006829',
        '9TD' => 'E02006829',
        '9TE' => 'E02004764',
        '9TF' => 'E02006829',
        '9TG' => 'E02006829',
        '9TH' => 'E02004710',
        '9TJ' => 'E02006829',
        '9TL' => 'E02006829',
        '9TN' => 'E02004710',
        '9TP' => 'E02004710',
        '9TQ' => 'E02006829',
        '9TR' => 'E02004710',
        '9TS' => 'E02006829',
        '9TT' => 'E02004710',
        '9TU' => 'E02004710',
        '9TW' => 'E02004710',
        '9TX' => 'E02004710',
        '9TY' => 'E02004710',
        '9TZ' => 'E02004710',
        '9UA' => 'E02006830',
        '9UB' => 'E02006830',
        '9UD' => 'E02006830',
        '9UE' => 'E02006830',
        '9UF' => 'E02006830',
        '9UG' => 'E02006830',
        '9UH' => 'E02006830',
        '9UJ' => 'E02006830',
        '9UL' => 'E02006830',
        '9UN' => 'E02006830',
        '9UP' => 'E02006830',
        '9UQ' => 'E02006830',
        '9UR' => 'E02006830',
        '9US' => 'E02006830',
        '9UT' => 'E02006830',
        '9UU' => 'E02006830',
        '9UW' => 'E02006830',
        '9UX' => 'E02006830',
        '9UY' => 'E02006830',
        '9UZ' => 'E02006830',
        '9WA' => 'E02006830',
        '9WB' => 'E02006830',
        '9WE' => 'E02004710',
        '9WF' => 'E02004710',
        '9WG' => 'E02006829',
        '9WH' => 'E02006829',
        '9WJ' => 'E02004710',
        '9WL' => 'E02004710',
        '9WN' => 'E02006830',
        '9WP' => 'E02006830',
        '9WQ' => 'E02006830',
        '9WT' => 'E02006830',
        '9WU' => 'E02004710',
        '9WX' => 'E02004710',
        '9WY' => 'E02004764',
        '9WZ' => 'E02004764',
        '9XA' => 'E02006830',
        '9XB' => 'E02006830',
        '9XD' => 'E02006830',
        '9XE' => 'E02004764',
        '9XF' => 'E02006830',
        '9XG' => 'E02006830',
        '9XH' => 'E02006830',
        '9XJ' => 'E02004764',
        '9XL' => 'E02006830',
        '9XN' => 'E02006830',
        '9XP' => 'E02006830',
        '9XQ' => 'E02006830',
        '9XR' => 'E02004764',
        '9XS' => 'E02006830',
        '9XT' => 'E02006830',
        '9XU' => 'E02004764',
        '9XW' => 'E02006830',
        '9XX' => 'E02006830',
        '9XY' => 'E02006830',
        '9XZ' => 'E02006830',
        '9YA' => 'E02004710',
        '9YB' => 'E02004710',
        '9YD' => 'E02004710',
        '9YE' => 'E02004710',
        '9YF' => 'E02004710',
        '9YG' => 'E02006830',
        '9YH' => 'E02006829',
        '9YJ' => 'E02006830',
        '9YL' => 'E02004764',
        '9YN' => 'E02006829',
        '9YP' => 'E02004764',
        '9YQ' => 'E02006830',
        '9YR' => 'E02006829',
        '9YS' => 'E02004764',
        '9YT' => 'E02004710',
        '9YU' => 'E02006829',
        '9YW' => 'E02006829',
        '9YX' => 'E02006829',
        '9ZA' => 'E02006829',
        '9ZB' => 'E02006829',
        '9ZD' => 'E02004764',
        '9ZG' => 'E02004764',
        '9ZH' => 'E02004764',
        '9ZJ' => 'E02004764',
        '9ZL' => 'E02006829',
        '9ZN' => 'E02006829',
        '9ZQ' => 'E02004764',
        '9ZR' => 'E02004764',
        '9ZS' => 'E02004764',
        '9ZT' => 'E02006829',
        '9ZU' => 'E02004764',
        '9ZW' => 'E02006829',
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
