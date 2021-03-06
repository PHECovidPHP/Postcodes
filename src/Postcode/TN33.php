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
final class TN33
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02004397',
        '0AB' => 'E02004397',
        '0AD' => 'E02004397',
        '0AE' => 'E02004397',
        '0AF' => 'E02004397',
        '0AG' => 'E02004397',
        '0AH' => 'E02004397',
        '0AJ' => 'E02004397',
        '0AL' => 'E02004397',
        '0AN' => 'E02004397',
        '0AP' => 'E02004397',
        '0AQ' => 'E02004397',
        '0AR' => 'E02004397',
        '0AS' => 'E02004397',
        '0AT' => 'E02004397',
        '0AU' => 'E02004397',
        '0AW' => 'E02004397',
        '0AX' => 'E02004397',
        '0AY' => 'E02004397',
        '0AZ' => 'E02004397',
        '0BA' => 'E02004397',
        '0BB' => 'E02004397',
        '0BD' => 'E02004397',
        '0BE' => 'E02004397',
        '0BF' => 'E02004397',
        '0BG' => 'E02004397',
        '0BH' => 'E02004397',
        '0BJ' => 'E02004397',
        '0BL' => 'E02004397',
        '0BN' => 'E02004397',
        '0BP' => 'E02004397',
        '0BQ' => 'E02004397',
        '0BS' => 'E02004397',
        '0BT' => 'E02004397',
        '0BU' => 'E02004397',
        '0BW' => 'E02004397',
        '0BX' => 'E02004397',
        '0BY' => 'E02004397',
        '0BZ' => 'E02004397',
        '0DA' => 'E02004397',
        '0DB' => 'E02004397',
        '0DD' => 'E02004397',
        '0DE' => 'E02004397',
        '0DF' => 'E02004397',
        '0DG' => 'E02004397',
        '0DH' => 'E02004397',
        '0DJ' => 'E02004397',
        '0DL' => 'E02004397',
        '0DN' => 'E02004397',
        '0DP' => 'E02004397',
        '0DQ' => 'E02004397',
        '0DR' => 'E02004397',
        '0DS' => 'E02004397',
        '0DT' => 'E02004397',
        '0DU' => 'E02004397',
        '0DW' => 'E02004397',
        '0DX' => 'E02004397',
        '0DY' => 'E02004397',
        '0DZ' => 'E02004397',
        '0EA' => 'E02004397',
        '0EB' => 'E02004397',
        '0ED' => 'E02004397',
        '0EE' => 'E02004397',
        '0EF' => 'E02004397',
        '0EG' => 'E02004397',
        '0EH' => 'E02004397',
        '0EJ' => 'E02004397',
        '0EL' => 'E02004397',
        '0EN' => 'E02004397',
        '0EP' => 'E02004397',
        '0EQ' => 'E02004397',
        '0ER' => 'E02004397',
        '0ES' => 'E02004397',
        '0ET' => 'E02004397',
        '0EU' => 'E02004397',
        '0EW' => 'E02004397',
        '0EX' => 'E02004397',
        '0EY' => 'E02004397',
        '0EZ' => 'E02004397',
        '0FA' => 'E02004397',
        '0FB' => 'E02004394',
        '0FD' => 'E02004397',
        '0FE' => 'E02004394',
        '0FH' => 'E02004397',
        '0FJ' => 'E02004394',
        '0FL' => 'E02004397',
        '0FN' => 'E02004397',
        '0FP' => 'E02004397',
        '0FQ' => 'E02004394',
        '0FR' => 'E02004397',
        '0FS' => 'E02004394',
        '0GB' => 'E02004397',
        '0GD' => 'E02004397',
        '0GE' => 'E02004397',
        '0GF' => 'E02004397',
        '0GR' => 'E02004394',
        '0GW' => 'E02004397',
        '0HA' => 'E02004397',
        '0HB' => 'E02004397',
        '0HD' => 'E02004397',
        '0HE' => 'E02004397',
        '0HF' => 'E02004397',
        '0HG' => 'E02004397',
        '0HH' => 'E02004397',
        '0HJ' => 'E02004397',
        '0HL' => 'E02004397',
        '0HN' => 'E02004397',
        '0HP' => 'E02004397',
        '0HQ' => 'E02004397',
        '0HR' => 'E02004397',
        '0HS' => 'E02004397',
        '0HT' => 'E02004397',
        '0HU' => 'E02004397',
        '0HW' => 'E02004397',
        '0HX' => 'E02004397',
        '0HY' => 'E02004397',
        '0HZ' => 'E02004397',
        '0JA' => 'E02004397',
        '0JB' => 'E02004397',
        '0JD' => 'E02004397',
        '0JE' => 'E02004397',
        '0JF' => 'E02004397',
        '0JG' => 'E02004397',
        '0JH' => 'E02004397',
        '0JJ' => 'E02004397',
        '0JL' => 'E02004397',
        '0JN' => 'E02004397',
        '0JP' => 'E02004397',
        '0JQ' => 'E02004397',
        '0JR' => 'E02004397',
        '0JS' => 'E02004397',
        '0JT' => 'E02004397',
        '0JU' => 'E02004397',
        '0JW' => 'E02004397',
        '0JX' => 'E02004397',
        '0JY' => 'E02004397',
        '0JZ' => 'E02004397',
        '0LA' => 'E02004394',
        '0LB' => 'E02004394',
        '0LD' => 'E02004397',
        '0LE' => 'E02004394',
        '0LF' => 'E02004394',
        '0LG' => 'E02004394',
        '0LH' => 'E02004394',
        '0LJ' => 'E02004397',
        '0LL' => 'E02004394',
        '0LN' => 'E02004397',
        '0LP' => 'E02004397',
        '0LQ' => 'E02004394',
        '0LR' => 'E02004397',
        '0LS' => 'E02004397',
        '0LT' => 'E02004397',
        '0LU' => 'E02004397',
        '0LW' => 'E02004397',
        '0LX' => 'E02004397',
        '0LY' => 'E02004397',
        '0LZ' => 'E02004397',
        '0NA' => 'E02004394',
        '0NB' => 'E02004394',
        '0ND' => 'E02004394',
        '0NE' => 'E02004394',
        '0NF' => 'E02004394',
        '0NG' => 'E02004394',
        '0NH' => 'E02004394',
        '0NJ' => 'E02004394',
        '0NL' => 'E02004394',
        '0NN' => 'E02004394',
        '0NP' => 'E02004394',
        '0NQ' => 'E02004397',
        '0NR' => 'E02004394',
        '0NS' => 'E02004394',
        '0NT' => 'E02004394',
        '0NU' => 'E02004394',
        '0NW' => 'E02004397',
        '0NX' => 'E02004394',
        '0NY' => 'E02004394',
        '0NZ' => 'E02004394',
        '0PA' => 'E02004394',
        '0PB' => 'E02004394',
        '0PD' => 'E02004397',
        '0PE' => 'E02004394',
        '0PF' => 'E02004394',
        '0PG' => 'E02004394',
        '0PH' => 'E02004394',
        '0PJ' => 'E02004394',
        '0PL' => 'E02004394',
        '0PN' => 'E02004394',
        '0PP' => 'E02004394',
        '0PQ' => 'E02004394',
        '0PR' => 'E02004394',
        '0PS' => 'E02004394',
        '0PT' => 'E02004394',
        '0PU' => 'E02004394',
        '0PW' => 'E02004394',
        '0PX' => 'E02004394',
        '0PY' => 'E02004394',
        '0PZ' => 'E02004394',
        '0QA' => 'E02004394',
        '0QB' => 'E02004394',
        '0QD' => 'E02004394',
        '0QE' => 'E02004394',
        '0QF' => 'E02004394',
        '0QG' => 'E02004394',
        '0QH' => 'E02004394',
        '0QJ' => 'E02004394',
        '0QL' => 'E02004394',
        '0QN' => 'E02004394',
        '0QP' => 'E02004394',
        '0QQ' => 'E02004394',
        '0QR' => 'E02004394',
        '0QS' => 'E02004394',
        '0QT' => 'E02004394',
        '0QU' => 'E02004394',
        '0QW' => 'E02004394',
        '0QX' => 'E02004394',
        '0QY' => 'E02004394',
        '0QZ' => 'E02004394',
        '0RA' => 'E02004397',
        '0RB' => 'E02004397',
        '0RD' => 'E02004394',
        '0RE' => 'E02004397',
        '0RF' => 'E02004394',
        '0RG' => 'E02004394',
        '0RH' => 'E02004394',
        '0RJ' => 'E02004394',
        '0RL' => 'E02004394',
        '0RN' => 'E02004394',
        '0RP' => 'E02004394',
        '0RQ' => 'E02004394',
        '0RR' => 'E02004394',
        '0RS' => 'E02004396',
        '0RT' => 'E02004396',
        '0RU' => 'E02004396',
        '0RW' => 'E02004397',
        '0RX' => 'E02004396',
        '0RY' => 'E02004396',
        '0RZ' => 'E02004396',
        '0SA' => 'E02004396',
        '0SB' => 'E02004396',
        '0SD' => 'E02004396',
        '0SE' => 'E02004396',
        '0SF' => 'E02004396',
        '0SG' => 'E02004396',
        '0SH' => 'E02004397',
        '0SJ' => 'E02004397',
        '0SL' => 'E02004397',
        '0SN' => 'E02004397',
        '0SP' => 'E02004397',
        '0SQ' => 'E02004397',
        '0SR' => 'E02004397',
        '0SS' => 'E02004397',
        '0ST' => 'E02004397',
        '0SU' => 'E02004397',
        '0SW' => 'E02004397',
        '0SX' => 'E02004397',
        '0SY' => 'E02004397',
        '0SZ' => 'E02004397',
        '0TA' => 'E02004397',
        '0TB' => 'E02004397',
        '0TD' => 'E02004397',
        '0TE' => 'E02004397',
        '0TF' => 'E02004397',
        '0TG' => 'E02004397',
        '0TH' => 'E02004397',
        '0TJ' => 'E02004397',
        '0TL' => 'E02004397',
        '0TN' => 'E02004397',
        '0TP' => 'E02004397',
        '0TQ' => 'E02004397',
        '0TR' => 'E02004397',
        '0TS' => 'E02004397',
        '0TT' => 'E02004397',
        '0TU' => 'E02004397',
        '0TW' => 'E02004397',
        '0TX' => 'E02004397',
        '0TY' => 'E02004397',
        '0TZ' => 'E02004397',
        '0UA' => 'E02004397',
        '0UB' => 'E02004397',
        '0UD' => 'E02004397',
        '0UE' => 'E02004397',
        '0UF' => 'E02004394',
        '0UG' => 'E02004397',
        '0UH' => 'E02004397',
        '0UJ' => 'E02004397',
        '0UL' => 'E02004397',
        '0UN' => 'E02004397',
        '0UP' => 'E02004394',
        '0UQ' => 'E02004394',
        '0UU' => 'E02004397',
        '0UX' => 'E02004397',
        '0UZ' => 'E02004397',
        '0WA' => 'E02004397',
        '0WB' => 'E02004397',
        '0WD' => 'E02004397',
        '0WE' => 'E02004397',
        '0WF' => 'E02004397',
        '0WG' => 'E02004397',
        '0WH' => 'E02004397',
        '0WJ' => 'E02004397',
        '0WL' => 'E02004397',
        '0WN' => 'E02004397',
        '0WP' => 'E02004397',
        '0WQ' => 'E02004397',
        '0WR' => 'E02004397',
        '0WS' => 'E02004397',
        '0WT' => 'E02004397',
        '0WU' => 'E02004397',
        '0WW' => 'E02004397',
        '0WX' => 'E02004397',
        '0WY' => 'E02004397',
        '0WZ' => 'E02004397',
        '0XA' => 'E02004397',
        '0XB' => 'E02004397',
        '0XD' => 'E02004397',
        '0XE' => 'E02004397',
        '0XF' => 'E02004397',
        '0XG' => 'E02004397',
        '0XH' => 'E02004397',
        '0XJ' => 'E02004397',
        '0XL' => 'E02004397',
        '0XP' => 'E02004397',
        '0XS' => 'E02004397',
        '0XT' => 'E02004397',
        '0XW' => 'E02004397',
        '0XX' => 'E02004397',
        '0YA' => 'E02004397',
        '0YB' => 'E02004397',
        '0YD' => 'E02004397',
        '0YE' => 'E02004394',
        '0YH' => 'E02004397',
        '0YS' => 'E02004397',
        '0YU' => 'E02004397',
        '0ZA' => 'E02004397',
        '0ZB' => 'E02004397',
        '0ZD' => 'E02004397',
        '0ZE' => 'E02004397',
        '0ZF' => 'E02004397',
        '0ZG' => 'E02004397',
        '0ZH' => 'E02004397',
        '0ZJ' => 'E02004397',
        '0ZL' => 'E02004397',
        '0ZN' => 'E02004397',
        '0ZP' => 'E02004397',
        '0ZQ' => 'E02004397',
        '0ZR' => 'E02004397',
        '0ZS' => 'E02004397',
        '0ZT' => 'E02004397',
        '0ZU' => 'E02004397',
        '0ZW' => 'E02004397',
        '0ZX' => 'E02004397',
        '0ZY' => 'E02004397',
        '0ZZ' => 'E02004397',
        '3AA' => 'E02004397',
        '3AB' => 'E02004397',
        '3AD' => 'E02004397',
        '3AE' => 'E02004397',
        '3AF' => 'E02004397',
        '3AG' => 'E02004397',
        '3AH' => 'E02004397',
        '3AJ' => 'E02004397',
        '3AL' => 'E02004397',
        '3AN' => 'E02004397',
        '3AP' => 'E02004397',
        '3AQ' => 'E02004397',
        '3AR' => 'E02004397',
        '3AS' => 'E02004397',
        '3AT' => 'E02004397',
        '3AU' => 'E02004397',
        '3AW' => 'E02004397',
        '3AX' => 'E02004397',
        '3AY' => 'E02004397',
        '3AZ' => 'E02004397',
        '3BA' => 'E02004397',
        '3BB' => 'E02004397',
        '3BD' => 'E02004397',
        '3BE' => 'E02004397',
        '3BF' => 'E02004397',
        '3BG' => 'E02004397',
        '3BH' => 'E02004397',
        '3BJ' => 'E02004397',
        '3BL' => 'E02004397',
        '3BN' => 'E02004397',
        '3BP' => 'E02004397',
        '3BQ' => 'E02004397',
        '3BR' => 'E02004397',
        '3BS' => 'E02004397',
        '3BT' => 'E02004397',
        '3BW' => 'E02004397',
        '3BX' => 'E02004397',
        '3BY' => 'E02004397',
        '3BZ' => 'E02004397',
        '3DA' => 'E02004397',
        '3DB' => 'E02004397',
        '3DD' => 'E02004397',
        '3DE' => 'E02004397',
        '3DF' => 'E02004397',
        '3DG' => 'E02004397',
        '3DH' => 'E02004397',
        '3DJ' => 'E02004397',
        '3DL' => 'E02004397',
        '3DN' => 'E02004397',
        '3DP' => 'E02004397',
        '3DQ' => 'E02004397',
        '3DS' => 'E02004397',
        '3DT' => 'E02004397',
        '3DU' => 'E02004397',
        '3DW' => 'E02004397',
        '3DX' => 'E02004397',
        '3DY' => 'E02004397',
        '3DZ' => 'E02004397',
        '3EA' => 'E02004397',
        '3EB' => 'E02004397',
        '3ED' => 'E02004397',
        '3EE' => 'E02004397',
        '3EF' => 'E02004397',
        '3EG' => 'E02004397',
        '3EH' => 'E02004397',
        '3EJ' => 'E02004397',
        '3EL' => 'E02004397',
        '3EN' => 'E02004397',
        '3EP' => 'E02004397',
        '3EQ' => 'E02004397',
        '3ER' => 'E02004397',
        '3ES' => 'E02004397',
        '3ET' => 'E02004397',
        '3EU' => 'E02004397',
        '3EW' => 'E02004397',
        '3EX' => 'E02004397',
        '3EY' => 'E02004397',
        '3EZ' => 'E02004397',
        '3FA' => 'E02004397',
        '9AA' => 'E02004397',
        '9AB' => 'E02004397',
        '9AD' => 'E02004397',
        '9AE' => 'E02004397',
        '9AF' => 'E02004397',
        '9AG' => 'E02004397',
        '9AH' => 'E02004397',
        '9AJ' => 'E02004397',
        '9AL' => 'E02004397',
        '9AN' => 'E02004397',
        '9AP' => 'E02004397',
        '9AQ' => 'E02004397',
        '9AR' => 'E02004397',
        '9AS' => 'E02004397',
        '9AT' => 'E02004397',
        '9AU' => 'E02004397',
        '9AW' => 'E02004397',
        '9AX' => 'E02004397',
        '9AY' => 'E02004397',
        '9AZ' => 'E02004397',
        '9BA' => 'E02004397',
        '9BB' => 'E02004397',
        '9BD' => 'E02004397',
        '9BE' => 'E02004397',
        '9BF' => 'E02004394',
        '9BG' => 'E02004397',
        '9BH' => 'E02004397',
        '9BJ' => 'E02004397',
        '9BL' => 'E02004397',
        '9BN' => 'E02004397',
        '9BP' => 'E02004397',
        '9BQ' => 'E02004394',
        '9BS' => 'E02004397',
        '9BT' => 'E02004397',
        '9BU' => 'E02004397',
        '9BW' => 'E02004397',
        '9BX' => 'E02004397',
        '9BY' => 'E02004397',
        '9BZ' => 'E02004397',
        '9DA' => 'E02004397',
        '9DB' => 'E02004397',
        '9DD' => 'E02004397',
        '9DE' => 'E02004397',
        '9DF' => 'E02004397',
        '9DG' => 'E02004397',
        '9DH' => 'E02004397',
        '9DJ' => 'E02004397',
        '9DL' => 'E02004397',
        '9DN' => 'E02004397',
        '9DP' => 'E02004397',
        '9DQ' => 'E02004397',
        '9DR' => 'E02004397',
        '9DS' => 'E02004397',
        '9DT' => 'E02004397',
        '9DU' => 'E02004397',
        '9DW' => 'E02004397',
        '9DX' => 'E02004397',
        '9DY' => 'E02004397',
        '9DZ' => 'E02004397',
        '9EA' => 'E02004416',
        '9EB' => 'E02004416',
        '9ED' => 'E02004416',
        '9EE' => 'E02004416',
        '9EF' => 'E02004416',
        '9EG' => 'E02004416',
        '9EH' => 'E02004416',
        '9EJ' => 'E02004416',
        '9EL' => 'E02004416',
        '9EN' => 'E02004416',
        '9EP' => 'E02004416',
        '9EQ' => 'E02004397',
        '9ER' => 'E02004416',
        '9ES' => 'E02004416',
        '9ET' => 'E02004416',
        '9EU' => 'E02004416',
        '9EW' => 'E02004416',
        '9EX' => 'E02004416',
        '9EY' => 'E02004416',
        '9EZ' => 'E02004416',
        '9FA' => 'E02004397',
        '9FB' => 'E02004397',
        '9FD' => 'E02004397',
        '9HA' => 'E02004416',
        '9HB' => 'E02004416',
        '9HD' => 'E02004416',
        '9HE' => 'E02004416',
        '9HG' => 'E02004416',
        '9HH' => 'E02004416',
        '9HJ' => 'E02004416',
        '9HL' => 'E02004416',
        '9HN' => 'E02004416',
        '9HP' => 'E02004416',
        '9HQ' => 'E02004416',
        '9HR' => 'E02004416',
        '9HS' => 'E02004416',
        '9HT' => 'E02004416',
        '9HU' => 'E02004416',
        '9HW' => 'E02004416',
        '9HX' => 'E02004416',
        '9HY' => 'E02004397',
        '9HZ' => 'E02004416',
        '9JA' => 'E02004416',
        '9JB' => 'E02004416',
        '9JD' => 'E02004416',
        '9JE' => 'E02004416',
        '9JF' => 'E02004416',
        '9JG' => 'E02004416',
        '9JH' => 'E02004416',
        '9JJ' => 'E02004416',
        '9JL' => 'E02004416',
        '9JN' => 'E02004416',
        '9JP' => 'E02004416',
        '9JQ' => 'E02004416',
        '9JR' => 'E02004416',
        '9JS' => 'E02004416',
        '9JT' => 'E02004416',
        '9JU' => 'E02004416',
        '9JW' => 'E02004416',
        '9JX' => 'E02004416',
        '9JY' => 'E02004416',
        '9JZ' => 'E02004416',
        '9LA' => 'E02004416',
        '9LB' => 'E02004416',
        '9LD' => 'E02004416',
        '9LE' => 'E02004416',
        '9LF' => 'E02004416',
        '9LG' => 'E02004416',
        '9LH' => 'E02004416',
        '9LJ' => 'E02004397',
        '9LL' => 'E02004397',
        '9LN' => 'E02004397',
        '9LP' => 'E02004397',
        '9LQ' => 'E02004416',
        '9LR' => 'E02004397',
        '9LS' => 'E02004397',
        '9LT' => 'E02004397',
        '9LU' => 'E02004397',
        '9LW' => 'E02004397',
        '9LX' => 'E02004397',
        '9LY' => 'E02004397',
        '9LZ' => 'E02004397',
        '9NA' => 'E02004397',
        '9NB' => 'E02004397',
        '9ND' => 'E02004397',
        '9NE' => 'E02004397',
        '9NF' => 'E02004397',
        '9NG' => 'E02004397',
        '9NH' => 'E02004416',
        '9NJ' => 'E02004416',
        '9NL' => 'E02004416',
        '9NN' => 'E02004416',
        '9NP' => 'E02004397',
        '9NQ' => 'E02004397',
        '9NR' => 'E02004397',
        '9NS' => 'E02004397',
        '9NT' => 'E02004397',
        '9NU' => 'E02004397',
        '9NX' => 'E02004397',
        '9NY' => 'E02004397',
        '9NZ' => 'E02004397',
        '9PA' => 'E02004397',
        '9PB' => 'E02004397',
        '9PD' => 'E02004397',
        '9PE' => 'E02004397',
        '9PG' => 'E02004397',
        '9PH' => 'E02004397',
        '9PJ' => 'E02004397',
        '9PP' => 'E02004394',
        '9PR' => 'E02004394',
        '9PS' => 'E02004394',
        '9PT' => 'E02004394',
        '9PU' => 'E02004394',
        '9PX' => 'E02004394',
        '9PY' => 'E02004394',
        '9PZ' => 'E02004394',
        '9QA' => 'E02004394',
        '9QB' => 'E02004394',
        '9QD' => 'E02004394',
        '9QE' => 'E02004394',
        '9QF' => 'E02004394',
        '9QG' => 'E02004394',
        '9QH' => 'E02004394',
        '9QJ' => 'E02004394',
        '9QL' => 'E02004394',
        '9QN' => 'E02004397',
        '9QP' => 'E02004397',
        '9QQ' => 'E02004394',
        '9QR' => 'E02004397',
        '9QS' => 'E02004397',
        '9QT' => 'E02004397',
        '9QU' => 'E02004397',
        '9QW' => 'E02004397',
        '9RA' => 'E02004416',
        '9RB' => 'E02004416',
        '9RG' => 'E02004397',
        '9TB' => 'E02004416',
        '9UL' => 'E02004397',
        '9WA' => 'E02004397',
        '9WB' => 'E02004397',
        '9WE' => 'E02004397',
        '9WF' => 'E02004397',
        '9WJ' => 'E02004397',
        '9WL' => 'E02004397',
        '9WP' => 'E02004397',
        '9WR' => 'E02004397',
        '9WS' => 'E02004397',
        '9WT' => 'E02004397',
        '9WU' => 'E02004397',
        '9WW' => 'E02004397',
        '9WX' => 'E02004397',
        '9WY' => 'E02004397',
        '9WZ' => 'E02004397',
        '9XR' => 'E02004397',
        '9XT' => 'E02004397',
        '9YA' => 'E02004416',
        '9YB' => 'E02004397',
        '9YE' => 'E02004416',
        '9YL' => 'E02004416',
        '9YT' => 'E02004397',
        '9YZ' => 'E02004397',
        '9ZA' => 'E02004397',
        '9ZB' => 'E02004397',
        '9ZD' => 'E02004397',
        '9ZE' => 'E02004397',
        '9ZF' => 'E02004397',
        '9ZG' => 'E02004397',
        '9ZH' => 'E02004397',
        '9ZJ' => 'E02004397',
        '9ZL' => 'E02004397',
        '9ZN' => 'E02004397',
        '9ZP' => 'E02004397',
        '9ZQ' => 'E02004397',
        '9ZR' => 'E02004397',
        '9ZS' => 'E02004397',
        '9ZT' => 'E02004397',
        '9ZU' => 'E02004397',
        '9ZW' => 'E02004397',
        '9ZX' => 'E02004397',
        '9ZY' => 'E02004397',
        '9ZZ' => 'E02004397',
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
