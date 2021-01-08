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
final class CM5
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02004530',
        '0AB' => 'E02004530',
        '0AD' => 'E02004530',
        '0AE' => 'E02004530',
        '0AF' => 'E02004530',
        '0AG' => 'E02004530',
        '0AH' => 'E02004530',
        '0AJ' => 'E02004530',
        '0AL' => 'E02004530',
        '0AN' => 'E02004530',
        '0AP' => 'E02004530',
        '0AQ' => 'E02004530',
        '0AR' => 'E02004530',
        '0AS' => 'E02004530',
        '0AT' => 'E02004530',
        '0AU' => 'E02004530',
        '0AW' => 'E02004530',
        '0AX' => 'E02004530',
        '0AY' => 'E02004530',
        '0AZ' => 'E02004530',
        '0BA' => 'E02004530',
        '0BB' => 'E02004530',
        '0BD' => 'E02004530',
        '0BE' => 'E02004530',
        '0BG' => 'E02004530',
        '0BH' => 'E02004530',
        '0BJ' => 'E02004530',
        '0BL' => 'E02004530',
        '0BN' => 'E02004530',
        '0BP' => 'E02004530',
        '0BQ' => 'E02004530',
        '0BS' => 'E02004530',
        '0BT' => 'E02004530',
        '0BU' => 'E02004530',
        '0BW' => 'E02004530',
        '0BX' => 'E02004530',
        '0BY' => 'E02004530',
        '0BZ' => 'E02004530',
        '0DA' => 'E02004530',
        '0DB' => 'E02004529',
        '0DD' => 'E02004530',
        '0DE' => 'E02004529',
        '0DF' => 'E02004529',
        '0DG' => 'E02004529',
        '0DH' => 'E02004529',
        '0DJ' => 'E02004529',
        '0DL' => 'E02004529',
        '0DN' => 'E02004529',
        '0DP' => 'E02004529',
        '0DQ' => 'E02004529',
        '0DR' => 'E02004529',
        '0DS' => 'E02004529',
        '0DT' => 'E02004529',
        '0DU' => 'E02004529',
        '0DW' => 'E02004529',
        '0DX' => 'E02004529',
        '0DY' => 'E02004529',
        '0DZ' => 'E02004529',
        '0EA' => 'E02004529',
        '0EB' => 'E02004529',
        '0ED' => 'E02004529',
        '0EE' => 'E02004529',
        '0EF' => 'E02004529',
        '0EG' => 'E02004529',
        '0EH' => 'E02004529',
        '0EJ' => 'E02004529',
        '0EL' => 'E02004529',
        '0EN' => 'E02004529',
        '0EP' => 'E02004529',
        '0EQ' => 'E02004529',
        '0ER' => 'E02004529',
        '0ES' => 'E02004529',
        '0ET' => 'E02004529',
        '0EU' => 'E02004529',
        '0EW' => 'E02004529',
        '0EX' => 'E02004529',
        '0EY' => 'E02004529',
        '0EZ' => 'E02004530',
        '0FA' => 'E02004530',
        '0FB' => 'E02004530',
        '0FD' => 'E02004530',
        '0FE' => 'E02004529',
        '0FF' => 'E02004530',
        '0FG' => 'E02004530',
        '0FH' => 'E02004530',
        '0FJ' => 'E02004530',
        '0FL' => 'E02004529',
        '0FN' => 'E02004529',
        '0FP' => 'E02004529',
        '0FQ' => 'E02004530',
        '0FR' => 'E02004530',
        '0FS' => 'E02004530',
        '0FT' => 'E02004529',
        '0GA' => 'E02004530',
        '0GL' => 'E02004530',
        '0GN' => 'E02004530',
        '0GP' => 'E02004529',
        '0GQ' => 'E02004529',
        '0GS' => 'E02004530',
        '0GT' => 'E02004530',
        '0GW' => 'E02004530',
        '0GZ' => 'E02004530',
        '0HA' => 'E02004530',
        '0HB' => 'E02004529',
        '0HD' => 'E02004530',
        '0HE' => 'E02004530',
        '0HF' => 'E02004530',
        '0HG' => 'E02004530',
        '0HH' => 'E02004530',
        '0HJ' => 'E02004530',
        '0HL' => 'E02004530',
        '0HN' => 'E02004530',
        '0HP' => 'E02004529',
        '0HQ' => 'E02004530',
        '0HR' => 'E02004529',
        '0HS' => 'E02004529',
        '0HT' => 'E02004529',
        '0HU' => 'E02004529',
        '0HW' => 'E02004530',
        '0HX' => 'E02004529',
        '0HY' => 'E02004529',
        '0HZ' => 'E02004529',
        '0JA' => 'E02004529',
        '0JB' => 'E02004529',
        '0JD' => 'E02004529',
        '0JE' => 'E02004529',
        '0JF' => 'E02004529',
        '0JG' => 'E02004529',
        '0JH' => 'E02004529',
        '0JJ' => 'E02004529',
        '0JL' => 'E02004529',
        '0JN' => 'E02004529',
        '0JP' => 'E02004529',
        '0JQ' => 'E02004529',
        '0JR' => 'E02004529',
        '0JS' => 'E02004529',
        '0JT' => 'E02004529',
        '0JU' => 'E02004529',
        '0JW' => 'E02004529',
        '0JX' => 'E02004529',
        '0JY' => 'E02004529',
        '0JZ' => 'E02004529',
        '0LA' => 'E02004529',
        '0LB' => 'E02004529',
        '0LD' => 'E02004529',
        '0LE' => 'E02004529',
        '0LF' => 'E02004529',
        '0LG' => 'E02004529',
        '0LH' => 'E02004529',
        '0LJ' => 'E02004529',
        '0LL' => 'E02004529',
        '0LN' => 'E02004529',
        '0LP' => 'E02004529',
        '0LQ' => 'E02004529',
        '0LR' => 'E02004529',
        '0LS' => 'E02004529',
        '0LT' => 'E02004529',
        '0LU' => 'E02004529',
        '0LW' => 'E02004529',
        '0LX' => 'E02004529',
        '0LY' => 'E02004529',
        '0LZ' => 'E02004529',
        '0NA' => 'E02004529',
        '0NB' => 'E02004529',
        '0ND' => 'E02004529',
        '0NE' => 'E02004529',
        '0NF' => 'E02004529',
        '0NG' => 'E02004529',
        '0NH' => 'E02004529',
        '0NJ' => 'E02004530',
        '0NL' => 'E02004529',
        '0NN' => 'E02004529',
        '0NP' => 'E02004529',
        '0NQ' => 'E02004529',
        '0NR' => 'E02004529',
        '0NS' => 'E02004529',
        '0NT' => 'E02004529',
        '0NU' => 'E02004529',
        '0NW' => 'E02004529',
        '0NX' => 'E02004529',
        '0NY' => 'E02004529',
        '0NZ' => 'E02004529',
        '0PA' => 'E02004529',
        '0PB' => 'E02004529',
        '0PD' => 'E02004529',
        '0PE' => 'E02004529',
        '0PF' => 'E02004529',
        '0PG' => 'E02004529',
        '0PH' => 'E02004529',
        '0PJ' => 'E02004529',
        '0PL' => 'E02004529',
        '0PN' => 'E02004529',
        '0PP' => 'E02004529',
        '0PQ' => 'E02004529',
        '0PR' => 'E02004529',
        '0PS' => 'E02004529',
        '0PT' => 'E02004529',
        '0PU' => 'E02004529',
        '0PW' => 'E02004529',
        '0PX' => 'E02004530',
        '0PY' => 'E02004529',
        '0PZ' => 'E02004529',
        '0QA' => 'E02004529',
        '0QB' => 'E02004529',
        '0QD' => 'E02004529',
        '0QE' => 'E02004529',
        '0QF' => 'E02004529',
        '0QG' => 'E02004529',
        '0QH' => 'E02004529',
        '0QJ' => 'E02004529',
        '0QL' => 'E02004529',
        '0QN' => 'E02004529',
        '0QP' => 'E02004529',
        '0QQ' => 'E02004529',
        '0QR' => 'E02004529',
        '0QS' => 'E02004529',
        '0QT' => 'E02004529',
        '0QU' => 'E02004529',
        '0QW' => 'E02004529',
        '0QX' => 'E02004529',
        '0RA' => 'E02004529',
        '0RB' => 'E02004529',
        '0RD' => 'E02004529',
        '0RE' => 'E02004529',
        '0RF' => 'E02004529',
        '0RG' => 'E02004529',
        '0RH' => 'E02004529',
        '0RJ' => 'E02004529',
        '0RL' => 'E02004529',
        '0RN' => 'E02004529',
        '0RP' => 'E02004529',
        '0RQ' => 'E02004529',
        '0RR' => 'E02004529',
        '0RS' => 'E02004530',
        '0RT' => 'E02004529',
        '0RU' => 'E02004530',
        '0RW' => 'E02004529',
        '0RX' => 'E02004529',
        '0RY' => 'E02004529',
        '0RZ' => 'E02004529',
        '0SA' => 'E02004529',
        '0SB' => 'E02004529',
        '0SD' => 'E02004529',
        '0SE' => 'E02004529',
        '0SF' => 'E02004529',
        '0SG' => 'E02004529',
        '0SH' => 'E02004529',
        '0SJ' => 'E02004529',
        '0SL' => 'E02004529',
        '0SN' => 'E02004529',
        '0SP' => 'E02004529',
        '0SQ' => 'E02004529',
        '0SR' => 'E02004529',
        '0SS' => 'E02004529',
        '0ST' => 'E02004529',
        '0SU' => 'E02004529',
        '0SW' => 'E02004529',
        '0SX' => 'E02004487',
        '0SY' => 'E02004529',
        '0SZ' => 'E02004529',
        '0TA' => 'E02004529',
        '0TB' => 'E02004529',
        '0TD' => 'E02004529',
        '0TE' => 'E02004529',
        '0TF' => 'E02004529',
        '0TG' => 'E02004529',
        '0TH' => 'E02004530',
        '0TJ' => 'E02004530',
        '0TL' => 'E02004529',
        '0TN' => 'E02004529',
        '0TP' => 'E02004529',
        '0TQ' => 'E02004529',
        '0TR' => 'E02004529',
        '0TS' => 'E02004530',
        '0TU' => 'E02004530',
        '0WA' => 'E02004530',
        '0WB' => 'E02004530',
        '0WD' => 'E02004530',
        '0WE' => 'E02004530',
        '0WF' => 'E02004530',
        '0WP' => 'E02004530',
        '0WS' => 'E02004530',
        '0WT' => 'E02004530',
        '0WU' => 'E02004530',
        '0WW' => 'E02004530',
        '0WX' => 'E02004530',
        '0WY' => 'E02004530',
        '0WZ' => 'E02004530',
        '0ZP' => 'E02004530',
        '5AA' => 'E02004530',
        '5AB' => 'E02004530',
        '5AD' => 'E02004530',
        '5AE' => 'E02004530',
        '5AF' => 'E02004530',
        '5AG' => 'E02004530',
        '5AH' => 'E02004530',
        '5AJ' => 'E02004530',
        '5AL' => 'E02004530',
        '5AN' => 'E02004530',
        '5AP' => 'E02004530',
        '5AQ' => 'E02004530',
        '5AR' => 'E02004530',
        '5AS' => 'E02004530',
        '5AT' => 'E02004530',
        '5AU' => 'E02004530',
        '5AW' => 'E02004530',
        '5AX' => 'E02004530',
        '5AY' => 'E02004530',
        '5AZ' => 'E02004530',
        '5BA' => 'E02004530',
        '5BB' => 'E02004530',
        '5BD' => 'E02004530',
        '5BE' => 'E02004530',
        '5BF' => 'E02004530',
        '5BG' => 'E02004530',
        '5BH' => 'E02004530',
        '5BJ' => 'E02004530',
        '5BL' => 'E02004530',
        '5BP' => 'E02004530',
        '5BQ' => 'E02004530',
        '9AA' => 'E02004530',
        '9AB' => 'E02004530',
        '9AD' => 'E02004530',
        '9AE' => 'E02004530',
        '9AF' => 'E02004530',
        '9AG' => 'E02004530',
        '9AH' => 'E02004530',
        '9AJ' => 'E02004530',
        '9AL' => 'E02004530',
        '9AN' => 'E02004530',
        '9AP' => 'E02004530',
        '9AQ' => 'E02004530',
        '9AR' => 'E02004530',
        '9AS' => 'E02004530',
        '9AT' => 'E02004530',
        '9AU' => 'E02004530',
        '9AX' => 'E02004530',
        '9AY' => 'E02004530',
        '9AZ' => 'E02004530',
        '9BA' => 'E02004530',
        '9BB' => 'E02004530',
        '9BD' => 'E02004530',
        '9BE' => 'E02004530',
        '9BF' => 'E02004530',
        '9BG' => 'E02004530',
        '9BH' => 'E02004530',
        '9BJ' => 'E02004530',
        '9BL' => 'E02004530',
        '9BN' => 'E02004530',
        '9BP' => 'E02004530',
        '9BQ' => 'E02004530',
        '9BS' => 'E02004530',
        '9BT' => 'E02004530',
        '9BU' => 'E02004530',
        '9BW' => 'E02004530',
        '9BX' => 'E02004530',
        '9BY' => 'E02004530',
        '9BZ' => 'E02004530',
        '9DA' => 'E02004530',
        '9DB' => 'E02004530',
        '9DD' => 'E02004530',
        '9DE' => 'E02004530',
        '9DF' => 'E02004530',
        '9DG' => 'E02004530',
        '9DH' => 'E02004530',
        '9DJ' => 'E02004530',
        '9DL' => 'E02004530',
        '9DN' => 'E02004530',
        '9DP' => 'E02004530',
        '9DQ' => 'E02004530',
        '9DR' => 'E02004530',
        '9DS' => 'E02004530',
        '9DT' => 'E02004530',
        '9DU' => 'E02004530',
        '9DW' => 'E02004530',
        '9DX' => 'E02004530',
        '9DY' => 'E02004530',
        '9DZ' => 'E02004530',
        '9EA' => 'E02004530',
        '9EB' => 'E02004530',
        '9ED' => 'E02004530',
        '9EE' => 'E02004530',
        '9EF' => 'E02004530',
        '9EG' => 'E02004530',
        '9EH' => 'E02004530',
        '9EJ' => 'E02004530',
        '9EL' => 'E02004530',
        '9EN' => 'E02004530',
        '9EP' => 'E02004530',
        '9EQ' => 'E02004530',
        '9ER' => 'E02004530',
        '9ES' => 'E02004530',
        '9ET' => 'E02004530',
        '9EU' => 'E02004530',
        '9EW' => 'E02004530',
        '9EX' => 'E02004530',
        '9EY' => 'E02004530',
        '9EZ' => 'E02004530',
        '9FA' => 'E02004530',
        '9FB' => 'E02004530',
        '9FD' => 'E02004530',
        '9FE' => 'E02004530',
        '9FF' => 'E02004530',
        '9FG' => 'E02004530',
        '9FH' => 'E02004530',
        '9FJ' => 'E02004530',
        '9FL' => 'E02004529',
        '9FN' => 'E02004529',
        '9FP' => 'E02004530',
        '9FQ' => 'E02004464',
        '9GA' => 'E02004530',
        '9GB' => 'E02004530',
        '9GD' => 'E02004530',
        '9GG' => 'E02004530',
        '9GQ' => 'E02004530',
        '9GU' => 'E02004530',
        '9GW' => 'E02004529',
        '9GX' => 'E02004529',
        '9GY' => 'E02004530',
        '9GZ' => 'E02004530',
        '9HA' => 'E02004530',
        '9HB' => 'E02004530',
        '9HD' => 'E02004530',
        '9HE' => 'E02004530',
        '9HF' => 'E02004530',
        '9HG' => 'E02004530',
        '9HH' => 'E02004530',
        '9HJ' => 'E02004530',
        '9HL' => 'E02004530',
        '9HN' => 'E02004530',
        '9HP' => 'E02004530',
        '9HQ' => 'E02004530',
        '9HR' => 'E02004530',
        '9HS' => 'E02004530',
        '9HT' => 'E02004530',
        '9HU' => 'E02004530',
        '9HW' => 'E02004530',
        '9HX' => 'E02004530',
        '9HY' => 'E02004530',
        '9HZ' => 'E02004530',
        '9JA' => 'E02004530',
        '9JB' => 'E02004530',
        '9JD' => 'E02004530',
        '9JE' => 'E02004530',
        '9JF' => 'E02004530',
        '9JG' => 'E02004530',
        '9JH' => 'E02004530',
        '9JJ' => 'E02004530',
        '9JL' => 'E02004530',
        '9JN' => 'E02004530',
        '9JP' => 'E02004530',
        '9JQ' => 'E02004530',
        '9JR' => 'E02004530',
        '9JS' => 'E02004530',
        '9JT' => 'E02004530',
        '9JU' => 'E02004530',
        '9JW' => 'E02004530',
        '9JX' => 'E02004530',
        '9JY' => 'E02004530',
        '9JZ' => 'E02004530',
        '9LA' => 'E02004530',
        '9LB' => 'E02004530',
        '9LD' => 'E02004530',
        '9LE' => 'E02004530',
        '9LF' => 'E02004530',
        '9LG' => 'E02004530',
        '9LH' => 'E02004530',
        '9LJ' => 'E02004529',
        '9LL' => 'E02004529',
        '9LN' => 'E02004529',
        '9LP' => 'E02004529',
        '9LQ' => 'E02004530',
        '9LR' => 'E02004529',
        '9LS' => 'E02004530',
        '9LT' => 'E02004529',
        '9LU' => 'E02004530',
        '9LW' => 'E02004529',
        '9LX' => 'E02004530',
        '9LY' => 'E02004530',
        '9LZ' => 'E02004529',
        '9NA' => 'E02004529',
        '9NB' => 'E02004529',
        '9ND' => 'E02004529',
        '9NE' => 'E02004529',
        '9NF' => 'E02004529',
        '9NG' => 'E02004529',
        '9NH' => 'E02004529',
        '9NJ' => 'E02004529',
        '9NL' => 'E02004529',
        '9NN' => 'E02004529',
        '9NP' => 'E02004529',
        '9NQ' => 'E02004529',
        '9NR' => 'E02004529',
        '9NS' => 'E02004529',
        '9NT' => 'E02004529',
        '9NU' => 'E02004529',
        '9NW' => 'E02004529',
        '9NX' => 'E02004529',
        '9NY' => 'E02004530',
        '9NZ' => 'E02004529',
        '9PA' => 'E02004464',
        '9PB' => 'E02004530',
        '9PD' => 'E02004529',
        '9PE' => 'E02004529',
        '9PF' => 'E02004529',
        '9PG' => 'E02004529',
        '9PH' => 'E02004529',
        '9PJ' => 'E02004529',
        '9PL' => 'E02004529',
        '9PN' => 'E02004529',
        '9PP' => 'E02004529',
        '9PQ' => 'E02004529',
        '9PR' => 'E02004529',
        '9PS' => 'E02004529',
        '9PT' => 'E02004529',
        '9PU' => 'E02004529',
        '9PW' => 'E02004529',
        '9PX' => 'E02004529',
        '9PY' => 'E02004529',
        '9PZ' => 'E02004529',
        '9QA' => 'E02004529',
        '9QB' => 'E02004529',
        '9QD' => 'E02004529',
        '9QE' => 'E02004529',
        '9QF' => 'E02004529',
        '9QG' => 'E02004529',
        '9QH' => 'E02004529',
        '9QJ' => 'E02004529',
        '9QL' => 'E02004529',
        '9QN' => 'E02004529',
        '9QP' => 'E02004529',
        '9QQ' => 'E02004529',
        '9QR' => 'E02004529',
        '9QS' => 'E02004529',
        '9QT' => 'E02004529',
        '9QU' => 'E02004530',
        '9QW' => 'E02004529',
        '9QX' => 'E02004530',
        '9QZ' => 'E02004529',
        '9RA' => 'E02004464',
        '9RB' => 'E02004464',
        '9RD' => 'E02004464',
        '9RE' => 'E02004464',
        '9RF' => 'E02004530',
        '9RG' => 'E02004464',
        '9RH' => 'E02004529',
        '9RJ' => 'E02004529',
        '9RL' => 'E02004529',
        '9RN' => 'E02004529',
        '9RP' => 'E02004529',
        '9RQ' => 'E02004529',
        '9RR' => 'E02004529',
        '9RS' => 'E02004529',
        '9RT' => 'E02004529',
        '9RU' => 'E02004529',
        '9RW' => 'E02004529',
        '9RX' => 'E02004464',
        '9RY' => 'E02004530',
        '9RZ' => 'E02004530',
        '9SA' => 'E02004529',
        '9SD' => 'E02004529',
        '9SE' => 'E02004529',
        '9SF' => 'E02004529',
        '9SG' => 'E02004529',
        '9SH' => 'E02004529',
        '9SJ' => 'E02004529',
        '9SQ' => 'E02004529',
        '9SS' => 'E02004530',
        '9SU' => 'E02004530',
        '9SX' => 'E02004530',
        '9SY' => 'E02004530',
        '9SZ' => 'E02004530',
        '9TA' => 'E02004529',
        '9TB' => 'E02004530',
        '9TL' => 'E02004530',
        '9UA' => 'E02004530',
        '9WA' => 'E02004530',
        '9WB' => 'E02004530',
        '9WD' => 'E02004530',
        '9WH' => 'E02004530',
        '9WJ' => 'E02004530',
        '9WL' => 'E02004530',
        '9WN' => 'E02004530',
        '9WP' => 'E02004530',
        '9WQ' => 'E02004530',
        '9WS' => 'E02004530',
        '9WT' => 'E02004530',
        '9WU' => 'E02004530',
        '9WW' => 'E02004530',
        '9WX' => 'E02004530',
        '9WY' => 'E02004530',
        '9WZ' => 'E02004530',
        '9XA' => 'E02004530',
        '9XB' => 'E02004530',
        '9XQ' => 'E02004530',
        '9XS' => 'E02004529',
        '9XT' => 'E02004530',
        '9YF' => 'E02004530',
        '9YQ' => 'E02004530',
        '9YZ' => 'E02004530',
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
