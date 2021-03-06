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
final class PE33
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02005564',
        '0AB' => 'E02005564',
        '0AD' => 'E02005564',
        '0AE' => 'E02005561',
        '0AF' => 'E02005564',
        '0AG' => 'E02005564',
        '0AH' => 'E02005564',
        '0AJ' => 'E02005564',
        '0AL' => 'E02005564',
        '0AN' => 'E02005564',
        '0AP' => 'E02005564',
        '0AQ' => 'E02005564',
        '0AR' => 'E02005564',
        '0AS' => 'E02005565',
        '0AT' => 'E02005564',
        '0AU' => 'E02005564',
        '0AW' => 'E02005564',
        '0AX' => 'E02005564',
        '0AY' => 'E02005564',
        '0AZ' => 'E02005564',
        '0BA' => 'E02005564',
        '0BB' => 'E02005564',
        '0BD' => 'E02005564',
        '0BE' => 'E02005564',
        '0BF' => 'E02005564',
        '0BG' => 'E02005564',
        '0BH' => 'E02005564',
        '0BJ' => 'E02005564',
        '0BL' => 'E02005564',
        '0BN' => 'E02005564',
        '0BP' => 'E02005564',
        '0BQ' => 'E02005564',
        '0BS' => 'E02005564',
        '0BT' => 'E02005564',
        '0BU' => 'E02005564',
        '0BW' => 'E02005564',
        '0BX' => 'E02005564',
        '0BY' => 'E02005564',
        '0BZ' => 'E02005564',
        '0DA' => 'E02005564',
        '0DB' => 'E02005564',
        '0DD' => 'E02005564',
        '0DE' => 'E02005564',
        '0DF' => 'E02005564',
        '0DG' => 'E02005564',
        '0DH' => 'E02005564',
        '0DJ' => 'E02005564',
        '0DL' => 'E02005564',
        '0DN' => 'E02005564',
        '0DP' => 'E02005564',
        '0DQ' => 'E02005564',
        '0DR' => 'E02005564',
        '0DS' => 'E02005564',
        '0DT' => 'E02005564',
        '0DU' => 'E02005564',
        '0DW' => 'E02005564',
        '0DX' => 'E02005564',
        '0DY' => 'E02005564',
        '0DZ' => 'E02005564',
        '0EA' => 'E02005564',
        '0EB' => 'E02005564',
        '0ED' => 'E02005564',
        '0EE' => 'E02005564',
        '0EF' => 'E02005564',
        '0EG' => 'E02005564',
        '0EH' => 'E02005564',
        '0EJ' => 'E02005564',
        '0EL' => 'E02005564',
        '0EN' => 'E02005564',
        '0EP' => 'E02005564',
        '0EQ' => 'E02005564',
        '0ER' => 'E02005565',
        '0ES' => 'E02005564',
        '0ET' => 'E02005564',
        '0EU' => 'E02005561',
        '0EW' => 'E02005564',
        '0EX' => 'E02005564',
        '0EY' => 'E02005565',
        '0EZ' => 'E02005565',
        '0FA' => 'E02005565',
        '0FB' => 'E02005564',
        '0FD' => 'E02005564',
        '0FE' => 'E02005564',
        '0FF' => 'E02005564',
        '0FH' => 'E02005565',
        '0FJ' => 'E02005565',
        '0FL' => 'E02005565',
        '0HA' => 'E02005565',
        '0HB' => 'E02005565',
        '0HD' => 'E02005565',
        '0HE' => 'E02005565',
        '0HF' => 'E02005565',
        '0HG' => 'E02005565',
        '0HH' => 'E02005565',
        '0HJ' => 'E02005565',
        '0HL' => 'E02005565',
        '0HN' => 'E02005565',
        '0HP' => 'E02005565',
        '0HQ' => 'E02005565',
        '0HR' => 'E02005565',
        '0HS' => 'E02005565',
        '0HT' => 'E02005565',
        '0HU' => 'E02005565',
        '0HW' => 'E02005565',
        '0HX' => 'E02005565',
        '0HY' => 'E02005565',
        '0HZ' => 'E02005565',
        '0JA' => 'E02005565',
        '0JB' => 'E02005565',
        '0JD' => 'E02005565',
        '0JE' => 'E02005565',
        '0JF' => 'E02005565',
        '0JG' => 'E02005565',
        '0JH' => 'E02005565',
        '0JJ' => 'E02005565',
        '0JL' => 'E02005564',
        '0JN' => 'E02005565',
        '0JP' => 'E02005565',
        '0JQ' => 'E02005565',
        '0JR' => 'E02005565',
        '0JS' => 'E02005565',
        '0JT' => 'E02005565',
        '0JU' => 'E02005564',
        '0JW' => 'E02005565',
        '0JX' => 'E02005564',
        '0JY' => 'E02005564',
        '0JZ' => 'E02005564',
        '0LA' => 'E02005564',
        '0LB' => 'E02005564',
        '0LD' => 'E02005564',
        '0LE' => 'E02005564',
        '0LF' => 'E02005564',
        '0LG' => 'E02005564',
        '0LH' => 'E02005564',
        '0LJ' => 'E02005564',
        '0LL' => 'E02005564',
        '0LN' => 'E02005564',
        '0LP' => 'E02005564',
        '0LQ' => 'E02005564',
        '0LR' => 'E02005564',
        '0LS' => 'E02005564',
        '0LT' => 'E02005564',
        '0LU' => 'E02005564',
        '0LW' => 'E02005564',
        '0LX' => 'E02005564',
        '0LY' => 'E02005564',
        '0LZ' => 'E02005564',
        '0NA' => 'E02005561',
        '0NB' => 'E02005564',
        '0ND' => 'E02005564',
        '0NE' => 'E02005564',
        '0NF' => 'E02005564',
        '0NG' => 'E02005564',
        '0NH' => 'E02005564',
        '0NJ' => 'E02005564',
        '0NL' => 'E02005564',
        '0NN' => 'E02005564',
        '0NP' => 'E02005564',
        '0NQ' => 'E02005564',
        '0NR' => 'E02005564',
        '0NS' => 'E02005564',
        '0NT' => 'E02005564',
        '0NU' => 'E02005564',
        '0NW' => 'E02005564',
        '0NX' => 'E02005564',
        '0NY' => 'E02005564',
        '0NZ' => 'E02005564',
        '0PA' => 'E02005564',
        '0PB' => 'E02005564',
        '0PD' => 'E02005564',
        '0PE' => 'E02005564',
        '0PF' => 'E02005564',
        '0PG' => 'E02005564',
        '0PH' => 'E02005564',
        '0PJ' => 'E02005564',
        '0PL' => 'E02005564',
        '0PN' => 'E02005564',
        '0PP' => 'E02005564',
        '0PQ' => 'E02005564',
        '0PR' => 'E02005564',
        '0PS' => 'E02005564',
        '0PT' => 'E02005564',
        '0PU' => 'E02005564',
        '0PW' => 'E02005564',
        '0PX' => 'E02005564',
        '0PY' => 'E02005564',
        '0PZ' => 'E02005564',
        '0QA' => 'E02005564',
        '0QB' => 'E02005564',
        '0QD' => 'E02005564',
        '0QE' => 'E02005564',
        '0QF' => 'E02005564',
        '0QG' => 'E02005564',
        '0QH' => 'E02005564',
        '0QJ' => 'E02005564',
        '0QL' => 'E02005564',
        '0QN' => 'E02005564',
        '0QP' => 'E02005564',
        '0QQ' => 'E02005564',
        '0QR' => 'E02005564',
        '0QS' => 'E02005564',
        '0QT' => 'E02005564',
        '0QU' => 'E02005564',
        '0QW' => 'E02005564',
        '0QX' => 'E02005564',
        '0QY' => 'E02005564',
        '0QZ' => 'E02005564',
        '0RA' => 'E02005564',
        '0RB' => 'E02005564',
        '0RD' => 'E02005564',
        '0RE' => 'E02005564',
        '0RF' => 'E02005564',
        '0RG' => 'E02005564',
        '0RH' => 'E02005564',
        '0RJ' => 'E02005564',
        '0RL' => 'E02005564',
        '0RN' => 'E02005564',
        '0RP' => 'E02005564',
        '0RQ' => 'E02005564',
        '0RR' => 'E02005564',
        '0RS' => 'E02005564',
        '0RT' => 'E02005564',
        '0RU' => 'E02005564',
        '0RW' => 'E02005564',
        '0RX' => 'E02005564',
        '0RY' => 'E02005564',
        '0RZ' => 'E02005564',
        '0SA' => 'E02005564',
        '0SB' => 'E02005564',
        '0SD' => 'E02005564',
        '0SE' => 'E02005564',
        '0SF' => 'E02005564',
        '0SG' => 'E02005564',
        '0SH' => 'E02005564',
        '0SJ' => 'E02005564',
        '0SL' => 'E02005564',
        '0SN' => 'E02005564',
        '0SP' => 'E02005564',
        '0SQ' => 'E02005564',
        '0SR' => 'E02005564',
        '0SS' => 'E02005564',
        '0ST' => 'E02005564',
        '0SU' => 'E02005564',
        '0SW' => 'E02005564',
        '0SX' => 'E02005564',
        '0SY' => 'E02005564',
        '0SZ' => 'E02005564',
        '0TA' => 'E02005565',
        '0TB' => 'E02005565',
        '0TD' => 'E02005565',
        '0TE' => 'E02005565',
        '0TF' => 'E02005565',
        '0TG' => 'E02005565',
        '0TH' => 'E02005564',
        '0TJ' => 'E02005565',
        '0TL' => 'E02005565',
        '0TN' => 'E02005565',
        '0TP' => 'E02005565',
        '0TQ' => 'E02005565',
        '0TR' => 'E02005565',
        '0TS' => 'E02005561',
        '0TT' => 'E02005565',
        '0TU' => 'E02005565',
        '0TW' => 'E02005565',
        '0TX' => 'E02005565',
        '0TY' => 'E02005565',
        '0TZ' => 'E02005565',
        '0UA' => 'E02005564',
        '0UB' => 'E02005564',
        '0UD' => 'E02005564',
        '0UE' => 'E02005564',
        '0UF' => 'E02005565',
        '0UG' => 'E02005565',
        '0WA' => 'E02005561',
        '0WB' => 'E02005564',
        '0WD' => 'E02005561',
        '0WE' => 'E02005561',
        '0WF' => 'E02005564',
        '0WG' => 'E02005564',
        '0WT' => 'E02005561',
        '0WU' => 'E02005561',
        '0WW' => 'E02005561',
        '0WX' => 'E02005567',
        '0WY' => 'E02005561',
        '0WZ' => 'E02005561',
        '0XA' => 'E02005564',
        '0XB' => 'E02005564',
        '0XF' => 'E02005561',
        '0XH' => 'E02005564',
        '0XP' => 'E02005567',
        '0XQ' => 'E02005561',
        '0XW' => 'E02005564',
        '0YA' => 'E02005564',
        '0YD' => 'E02005561',
        '9AA' => 'E02005568',
        '9AB' => 'E02005568',
        '9AD' => 'E02005568',
        '9AE' => 'E02005568',
        '9AF' => 'E02005568',
        '9AG' => 'E02005568',
        '9AH' => 'E02005568',
        '9AJ' => 'E02005568',
        '9AL' => 'E02005568',
        '9AN' => 'E02005568',
        '9AP' => 'E02005568',
        '9AQ' => 'E02005568',
        '9AR' => 'E02005568',
        '9AS' => 'E02005568',
        '9AT' => 'E02005568',
        '9AU' => 'E02005568',
        '9AW' => 'E02005568',
        '9AX' => 'E02005568',
        '9AY' => 'E02005568',
        '9AZ' => 'E02005568',
        '9BA' => 'E02005568',
        '9BB' => 'E02005568',
        '9BD' => 'E02005568',
        '9BE' => 'E02005568',
        '9BF' => 'E02005568',
        '9BG' => 'E02005568',
        '9BH' => 'E02005568',
        '9BJ' => 'E02005514',
        '9BL' => 'E02005514',
        '9BN' => 'E02005514',
        '9BP' => 'E02005514',
        '9BQ' => 'E02005568',
        '9BS' => 'E02005514',
        '9BT' => 'E02005514',
        '9BU' => 'E02005514',
        '9BW' => 'E02005514',
        '9BX' => 'E02005514',
        '9BY' => 'E02005514',
        '9BZ' => 'E02005514',
        '9DA' => 'E02005514',
        '9DB' => 'E02005514',
        '9DD' => 'E02005514',
        '9DE' => 'E02005514',
        '9DF' => 'E02005514',
        '9DG' => 'E02005568',
        '9DH' => 'E02005568',
        '9DJ' => 'E02005568',
        '9DL' => 'E02005568',
        '9DN' => 'E02005568',
        '9DP' => 'E02005568',
        '9DQ' => 'E02005568',
        '9DR' => 'E02005568',
        '9DS' => 'E02005568',
        '9DT' => 'E02005568',
        '9DU' => 'E02005568',
        '9DW' => 'E02005568',
        '9DX' => 'E02005568',
        '9DY' => 'E02005568',
        '9DZ' => 'E02005568',
        '9EA' => 'E02005568',
        '9EB' => 'E02005568',
        '9ED' => 'E02005568',
        '9EE' => 'E02005568',
        '9EF' => 'E02005568',
        '9EG' => 'E02005568',
        '9EH' => 'E02005568',
        '9EJ' => 'E02005568',
        '9EL' => 'E02005568',
        '9EN' => 'E02005568',
        '9EP' => 'E02005568',
        '9EQ' => 'E02005568',
        '9ER' => 'E02005568',
        '9ES' => 'E02005568',
        '9ET' => 'E02005568',
        '9EU' => 'E02005568',
        '9EW' => 'E02005568',
        '9EX' => 'E02005564',
        '9EY' => 'E02005564',
        '9EZ' => 'E02005568',
        '9FA' => 'E02005564',
        '9FB' => 'E02005568',
        '9FD' => 'E02005568',
        '9FE' => 'E02005561',
        '9FF' => 'E02005561',
        '9FG' => 'E02005568',
        '9FH' => 'E02005568',
        '9FJ' => 'E02005568',
        '9FL' => 'E02005568',
        '9FN' => 'E02005568',
        '9FP' => 'E02005568',
        '9FS' => 'E02005568',
        '9FT' => 'E02005568',
        '9GA' => 'E02005568',
        '9GB' => 'E02005568',
        '9GD' => 'E02005568',
        '9GE' => 'E02005564',
        '9GF' => 'E02005568',
        '9GG' => 'E02005568',
        '9GH' => 'E02005568',
        '9GJ' => 'E02005568',
        '9GL' => 'E02005514',
        '9GN' => 'E02005514',
        '9GP' => 'E02005569',
        '9GU' => 'E02005569',
        '9HA' => 'E02005568',
        '9HB' => 'E02005568',
        '9HD' => 'E02005568',
        '9HE' => 'E02005568',
        '9HF' => 'E02005568',
        '9HG' => 'E02005568',
        '9HH' => 'E02005568',
        '9HJ' => 'E02005568',
        '9HL' => 'E02005568',
        '9HN' => 'E02005564',
        '9HP' => 'E02005564',
        '9HQ' => 'E02005568',
        '9HR' => 'E02005564',
        '9HS' => 'E02005564',
        '9HT' => 'E02005564',
        '9HU' => 'E02005568',
        '9HW' => 'E02005564',
        '9HX' => 'E02005564',
        '9HY' => 'E02005564',
        '9HZ' => 'E02005564',
        '9JA' => 'E02005564',
        '9JB' => 'E02005564',
        '9JD' => 'E02005564',
        '9JE' => 'E02005564',
        '9JF' => 'E02005564',
        '9JG' => 'E02005564',
        '9JH' => 'E02005564',
        '9JJ' => 'E02005564',
        '9JL' => 'E02005564',
        '9JN' => 'E02005564',
        '9JP' => 'E02005564',
        '9JQ' => 'E02005564',
        '9JR' => 'E02005564',
        '9JS' => 'E02005504',
        '9JT' => 'E02005564',
        '9JU' => 'E02005564',
        '9JW' => 'E02005564',
        '9JX' => 'E02005564',
        '9JY' => 'E02005564',
        '9JZ' => 'E02005568',
        '9LA' => 'E02005564',
        '9LB' => 'E02005564',
        '9LD' => 'E02005564',
        '9LE' => 'E02005564',
        '9LF' => 'E02005564',
        '9LG' => 'E02005564',
        '9LH' => 'E02005564',
        '9LJ' => 'E02005564',
        '9LL' => 'E02005564',
        '9LN' => 'E02005564',
        '9LP' => 'E02005564',
        '9LQ' => 'E02005564',
        '9LR' => 'E02005564',
        '9LS' => 'E02005564',
        '9LT' => 'E02005564',
        '9LU' => 'E02005564',
        '9LW' => 'E02005564',
        '9LX' => 'E02005564',
        '9LY' => 'E02005564',
        '9LZ' => 'E02005564',
        '9NA' => 'E02005564',
        '9NB' => 'E02005564',
        '9ND' => 'E02005564',
        '9NE' => 'E02005564',
        '9NF' => 'E02005564',
        '9NG' => 'E02005564',
        '9NH' => 'E02005564',
        '9NJ' => 'E02005564',
        '9NN' => 'E02005561',
        '9NP' => 'E02005564',
        '9NQ' => 'E02005564',
        '9NR' => 'E02005564',
        '9NS' => 'E02005564',
        '9NT' => 'E02005564',
        '9NU' => 'E02005564',
        '9NW' => 'E02005568',
        '9NX' => 'E02005564',
        '9NY' => 'E02005564',
        '9NZ' => 'E02005564',
        '9PA' => 'E02005564',
        '9PB' => 'E02005564',
        '9PD' => 'E02005564',
        '9PE' => 'E02005564',
        '9PF' => 'E02005564',
        '9PG' => 'E02005564',
        '9PH' => 'E02005564',
        '9PJ' => 'E02005564',
        '9PL' => 'E02005564',
        '9PN' => 'E02005564',
        '9PP' => 'E02005561',
        '9PQ' => 'E02005564',
        '9PR' => 'E02005564',
        '9PS' => 'E02005514',
        '9PT' => 'E02005514',
        '9PU' => 'E02005514',
        '9PW' => 'E02005564',
        '9PX' => 'E02005514',
        '9PY' => 'E02005568',
        '9PZ' => 'E02005568',
        '9QA' => 'E02005568',
        '9QB' => 'E02005514',
        '9QD' => 'E02005514',
        '9QE' => 'E02005568',
        '9QF' => 'E02005568',
        '9QG' => 'E02005569',
        '9QH' => 'E02005514',
        '9QJ' => 'E02005568',
        '9QL' => 'E02005568',
        '9QN' => 'E02005568',
        '9QP' => 'E02005568',
        '9QQ' => 'E02005568',
        '9QR' => 'E02005568',
        '9QS' => 'E02005568',
        '9QT' => 'E02005568',
        '9QU' => 'E02005568',
        '9QW' => 'E02005568',
        '9QX' => 'E02005568',
        '9QY' => 'E02005568',
        '9QZ' => 'E02005568',
        '9RA' => 'E02005568',
        '9RB' => 'E02005568',
        '9RD' => 'E02005568',
        '9RE' => 'E02005568',
        '9RF' => 'E02005568',
        '9RG' => 'E02005568',
        '9RH' => 'E02005568',
        '9RJ' => 'E02005568',
        '9RL' => 'E02005568',
        '9RN' => 'E02005568',
        '9RP' => 'E02005568',
        '9RQ' => 'E02005568',
        '9RR' => 'E02005568',
        '9RS' => 'E02005568',
        '9RT' => 'E02005568',
        '9RU' => 'E02005568',
        '9RW' => 'E02005568',
        '9RX' => 'E02005569',
        '9RY' => 'E02005569',
        '9RZ' => 'E02005569',
        '9SA' => 'E02005569',
        '9SB' => 'E02005569',
        '9SD' => 'E02005569',
        '9SE' => 'E02005568',
        '9SF' => 'E02005568',
        '9SG' => 'E02005568',
        '9SH' => 'E02005568',
        '9SJ' => 'E02005568',
        '9SL' => 'E02005568',
        '9SN' => 'E02005568',
        '9SP' => 'E02005568',
        '9SQ' => 'E02005568',
        '9SR' => 'E02005568',
        '9SS' => 'E02005568',
        '9ST' => 'E02005568',
        '9SU' => 'E02005568',
        '9SW' => 'E02005568',
        '9SX' => 'E02005568',
        '9SY' => 'E02005568',
        '9SZ' => 'E02005568',
        '9TA' => 'E02005568',
        '9TB' => 'E02005568',
        '9TD' => 'E02005568',
        '9TE' => 'E02005569',
        '9TF' => 'E02005569',
        '9TG' => 'E02005569',
        '9TH' => 'E02005569',
        '9TJ' => 'E02005568',
        '9TL' => 'E02005568',
        '9TN' => 'E02005569',
        '9TP' => 'E02005568',
        '9TQ' => 'E02005569',
        '9TR' => 'E02005569',
        '9TS' => 'E02005568',
        '9TT' => 'E02005568',
        '9TU' => 'E02005568',
        '9TW' => 'E02005568',
        '9TX' => 'E02005568',
        '9TY' => 'E02005568',
        '9UA' => 'E02005568',
        '9UB' => 'E02005568',
        '9UD' => 'E02005568',
        '9UE' => 'E02005568',
        '9UF' => 'E02005568',
        '9UG' => 'E02005568',
        '9UH' => 'E02005561',
        '9UJ' => 'E02005561',
        '9UL' => 'E02005568',
        '9UN' => 'E02005568',
        '9UP' => 'E02005568',
        '9UQ' => 'E02005568',
        '9UR' => 'E02005568',
        '9US' => 'E02005569',
        '9UU' => 'E02005568',
        '9UW' => 'E02005568',
        '9WA' => 'E02005568',
        '9WB' => 'E02005568',
        '9WD' => 'E02005561',
        '9WE' => 'E02005561',
        '9WF' => 'E02005561',
        '9WG' => 'E02005567',
        '9WH' => 'E02005567',
        '9WJ' => 'E02005567',
        '9WL' => 'E02005568',
        '9WQ' => 'E02005567',
        '9WR' => 'E02005561',
        '9WS' => 'E02005568',
        '9WT' => 'E02005561',
        '9WU' => 'E02005561',
        '9WW' => 'E02005561',
        '9WX' => 'E02005561',
        '9WZ' => 'E02005561',
        '9XA' => 'E02005514',
        '9XB' => 'E02005561',
        '9XW' => 'E02005568',
        '9YA' => 'E02005514',
        '9YE' => 'E02005561',
        '9YQ' => 'E02005514',
        '9YZ' => 'E02005564',
        '9ZR' => 'E02005561',
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
