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
final class M46
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02001309',
        '0AB' => 'E02001309',
        '0AD' => 'E02001309',
        '0AE' => 'E02001309',
        '0AF' => 'E02001309',
        '0AG' => 'E02001309',
        '0AH' => 'E02001309',
        '0AJ' => 'E02001309',
        '0AL' => 'E02001309',
        '0AN' => 'E02001309',
        '0AP' => 'E02001309',
        '0AQ' => 'E02001309',
        '0AR' => 'E02001309',
        '0AS' => 'E02001309',
        '0AT' => 'E02001309',
        '0AU' => 'E02001309',
        '0AW' => 'E02001309',
        '0AX' => 'E02001309',
        '0AY' => 'E02001309',
        '0AZ' => 'E02001309',
        '0BA' => 'E02001309',
        '0BB' => 'E02001309',
        '0BD' => 'E02001309',
        '0BE' => 'E02001309',
        '0BF' => 'E02001309',
        '0BG' => 'E02001309',
        '0BH' => 'E02001309',
        '0BJ' => 'E02001309',
        '0BL' => 'E02001309',
        '0BN' => 'E02001309',
        '0BP' => 'E02001309',
        '0BQ' => 'E02001309',
        '0BR' => 'E02001309',
        '0BS' => 'E02001309',
        '0BT' => 'E02001309',
        '0BU' => 'E02001309',
        '0BW' => 'E02001309',
        '0BX' => 'E02001309',
        '0BY' => 'E02001309',
        '0BZ' => 'E02001303',
        '0DA' => 'E02001309',
        '0DB' => 'E02001309',
        '0DD' => 'E02001309',
        '0DE' => 'E02001309',
        '0DF' => 'E02001309',
        '0DG' => 'E02001309',
        '0DH' => 'E02001309',
        '0DJ' => 'E02001309',
        '0DL' => 'E02001309',
        '0DN' => 'E02001309',
        '0DP' => 'E02001309',
        '0DQ' => 'E02001309',
        '0DR' => 'E02001309',
        '0DS' => 'E02001309',
        '0DT' => 'E02001303',
        '0DU' => 'E02001303',
        '0DW' => 'E02001309',
        '0DX' => 'E02001309',
        '0DY' => 'E02001303',
        '0DZ' => 'E02001303',
        '0EA' => 'E02001309',
        '0EB' => 'E02001309',
        '0ED' => 'E02001309',
        '0EE' => 'E02001309',
        '0EF' => 'E02001309',
        '0EG' => 'E02001309',
        '0EH' => 'E02001309',
        '0EJ' => 'E02001309',
        '0EL' => 'E02001303',
        '0EN' => 'E02001303',
        '0EP' => 'E02001309',
        '0EQ' => 'E02001309',
        '0ER' => 'E02001309',
        '0ES' => 'E02001309',
        '0ET' => 'E02001308',
        '0EU' => 'E02001309',
        '0EW' => 'E02001309',
        '0EX' => 'E02001308',
        '0EY' => 'E02001303',
        '0EZ' => 'E02001303',
        '0FA' => 'E02001309',
        '0FB' => 'E02001309',
        '0FD' => 'E02001309',
        '0FE' => 'E02001309',
        '0FF' => 'E02001309',
        '0FG' => 'E02001309',
        '0FH' => 'E02001303',
        '0FJ' => 'E02001303',
        '0FL' => 'E02001303',
        '0FN' => 'E02001303',
        '0FP' => 'E02001303',
        '0FQ' => 'E02001303',
        '0FR' => 'E02001303',
        '0FS' => 'E02001303',
        '0FT' => 'E02001309',
        '0FU' => 'E02001309',
        '0FW' => 'E02001308',
        '0FX' => 'E02001308',
        '0FY' => 'E02001309',
        '0FZ' => 'E02001309',
        '0GA' => 'E02001309',
        '0GB' => 'E02001309',
        '0GD' => 'E02001309',
        '0GE' => 'E02001309',
        '0GF' => 'E02001309',
        '0GG' => 'E02001309',
        '0GH' => 'E02001309',
        '0GJ' => 'E02001309',
        '0GL' => 'E02001309',
        '0GN' => 'E02001309',
        '0GP' => 'E02001309',
        '0GQ' => 'E02001309',
        '0GR' => 'E02001309',
        '0GS' => 'E02001309',
        '0GT' => 'E02001309',
        '0GU' => 'E02001309',
        '0GW' => 'E02001309',
        '0GX' => 'E02001309',
        '0GY' => 'E02001309',
        '0GZ' => 'E02001309',
        '0HA' => 'E02001303',
        '0HB' => 'E02001303',
        '0HD' => 'E02001303',
        '0HE' => 'E02001303',
        '0HF' => 'E02001303',
        '0HG' => 'E02001303',
        '0HH' => 'E02001303',
        '0HJ' => 'E02001303',
        '0HL' => 'E02001303',
        '0HN' => 'E02001303',
        '0HP' => 'E02001303',
        '0HQ' => 'E02001303',
        '0HR' => 'E02001303',
        '0HS' => 'E02001303',
        '0HT' => 'E02001303',
        '0HU' => 'E02001303',
        '0HW' => 'E02001303',
        '0HX' => 'E02001303',
        '0HY' => 'E02001303',
        '0HZ' => 'E02001303',
        '0JA' => 'E02001303',
        '0JB' => 'E02001303',
        '0JD' => 'E02001308',
        '0JE' => 'E02001309',
        '0JF' => 'E02001303',
        '0JG' => 'E02001309',
        '0JH' => 'E02001308',
        '0JJ' => 'E02001303',
        '0JL' => 'E02001303',
        '0JN' => 'E02001309',
        '0JP' => 'E02001309',
        '0JQ' => 'E02001309',
        '0JR' => 'E02001309',
        '0JS' => 'E02001309',
        '0JT' => 'E02001303',
        '0JU' => 'E02001308',
        '0JW' => 'E02001303',
        '0JX' => 'E02001309',
        '0JY' => 'E02001303',
        '0JZ' => 'E02001303',
        '0LA' => 'E02001309',
        '0LB' => 'E02001303',
        '0LD' => 'E02001309',
        '0LE' => 'E02001309',
        '0LF' => 'E02001303',
        '0LG' => 'E02001309',
        '0LH' => 'E02001303',
        '0LJ' => 'E02001309',
        '0LL' => 'E02001309',
        '0LN' => 'E02001309',
        '0LP' => 'E02001309',
        '0LQ' => 'E02001309',
        '0LR' => 'E02001309',
        '0LS' => 'E02001309',
        '0LT' => 'E02001309',
        '0LU' => 'E02001309',
        '0LW' => 'E02001309',
        '0LX' => 'E02001309',
        '0LY' => 'E02001303',
        '0LZ' => 'E02001309',
        '0NA' => 'E02001309',
        '0NB' => 'E02001303',
        '0ND' => 'E02001303',
        '0NE' => 'E02001309',
        '0NF' => 'E02001309',
        '0NG' => 'E02001309',
        '0NH' => 'E02001309',
        '0NJ' => 'E02001309',
        '0NL' => 'E02001309',
        '0NN' => 'E02001309',
        '0NP' => 'E02001309',
        '0NQ' => 'E02001309',
        '0NR' => 'E02001309',
        '0NS' => 'E02001309',
        '0NT' => 'E02001309',
        '0NU' => 'E02001309',
        '0NW' => 'E02001309',
        '0NX' => 'E02001309',
        '0NY' => 'E02001309',
        '0NZ' => 'E02001309',
        '0PA' => 'E02001309',
        '0PB' => 'E02001309',
        '0PD' => 'E02001309',
        '0PE' => 'E02001309',
        '0PF' => 'E02001309',
        '0PG' => 'E02001309',
        '0PH' => 'E02001309',
        '0PJ' => 'E02001309',
        '0PL' => 'E02001309',
        '0PN' => 'E02001309',
        '0PP' => 'E02001309',
        '0PQ' => 'E02001309',
        '0PR' => 'E02001309',
        '0PS' => 'E02001309',
        '0PT' => 'E02001309',
        '0PU' => 'E02001309',
        '0PW' => 'E02001309',
        '0PX' => 'E02001309',
        '0PY' => 'E02001309',
        '0PZ' => 'E02001309',
        '0QA' => 'E02001309',
        '0QB' => 'E02001309',
        '0QD' => 'E02001309',
        '0QE' => 'E02001309',
        '0QF' => 'E02001309',
        '0QG' => 'E02001309',
        '0QH' => 'E02001309',
        '0QJ' => 'E02001309',
        '0QL' => 'E02001309',
        '0QN' => 'E02001309',
        '0QP' => 'E02001309',
        '0QQ' => 'E02001309',
        '0QR' => 'E02001309',
        '0QS' => 'E02001309',
        '0QT' => 'E02001309',
        '0QU' => 'E02001309',
        '0QW' => 'E02001309',
        '0QX' => 'E02001309',
        '0QY' => 'E02001309',
        '0QZ' => 'E02001309',
        '0RA' => 'E02001309',
        '0RB' => 'E02001309',
        '0RD' => 'E02001309',
        '0RE' => 'E02001303',
        '0RF' => 'E02001303',
        '0RG' => 'E02001309',
        '0RH' => 'E02001309',
        '0RJ' => 'E02001309',
        '0RL' => 'E02001309',
        '0RN' => 'E02001309',
        '0RP' => 'E02001309',
        '0RQ' => 'E02001309',
        '0RR' => 'E02001309',
        '0RS' => 'E02001309',
        '0RT' => 'E02001309',
        '0RU' => 'E02001309',
        '0RW' => 'E02001309',
        '0RX' => 'E02001309',
        '0RY' => 'E02001309',
        '0RZ' => 'E02001309',
        '0SA' => 'E02001309',
        '0SB' => 'E02001309',
        '0SD' => 'E02001309',
        '0SE' => 'E02001309',
        '0SF' => 'E02001309',
        '0SG' => 'E02001303',
        '0SH' => 'E02001309',
        '0SJ' => 'E02001309',
        '0SL' => 'E02001309',
        '0SN' => 'E02001309',
        '0SP' => 'E02001309',
        '0SQ' => 'E02001309',
        '0SR' => 'E02001309',
        '0SS' => 'E02001309',
        '0ST' => 'E02001309',
        '0SU' => 'E02001303',
        '0SW' => 'E02001303',
        '0SX' => 'E02001309',
        '0SY' => 'E02001303',
        '0SZ' => 'E02001309',
        '0TA' => 'E02001309',
        '0TB' => 'E02001309',
        '0TE' => 'E02001303',
        '0TF' => 'E02001303',
        '0TG' => 'E02001309',
        '0TH' => 'E02001309',
        '0TJ' => 'E02001303',
        '0TL' => 'E02001309',
        '0TN' => 'E02001309',
        '0TP' => 'E02001303',
        '0TQ' => 'E02001309',
        '0TR' => 'E02001309',
        '0TS' => 'E02001303',
        '0TT' => 'E02001309',
        '0TU' => 'E02001309',
        '0TW' => 'E02001309',
        '0TX' => 'E02001309',
        '0TY' => 'E02001303',
        '0TZ' => 'E02001309',
        '0UA' => 'E02001309',
        '0UB' => 'E02001309',
        '0WA' => 'E02001309',
        '0WB' => 'E02001309',
        '0WD' => 'E02001309',
        '0WE' => 'E02001309',
        '0WH' => 'E02001303',
        '0WP' => 'E02001309',
        '0WQ' => 'E02001309',
        '0WR' => 'E02001309',
        '0WS' => 'E02001309',
        '0WT' => 'E02001309',
        '0WU' => 'E02001309',
        '0WW' => 'E02001309',
        '0WX' => 'E02001309',
        '0WY' => 'E02001303',
        '0WZ' => 'E02001309',
        '0XA' => 'E02001309',
        '0XB' => 'E02001309',
        '1AA' => 'E02001309',
        '1AG' => 'E02001309',
        '1AL' => 'E02001309',
        '1AQ' => 'E02001309',
        '1AT' => 'E02001309',
        '1AU' => 'E02001309',
        '6AB' => 'E02001309',
        '6AD' => 'E02001309',
        '6AF' => 'E02001309',
        '6AH' => 'E02001309',
        '6AJ' => 'E02001309',
        '6AL' => 'E02001309',
        '6AN' => 'E02001309',
        '6AP' => 'E02001309',
        '6AQ' => 'E02001309',
        '6AR' => 'E02001309',
        '6AS' => 'E02001309',
        '6AT' => 'E02001309',
        '6AU' => 'E02001309',
        '9AA' => 'E02001308',
        '9AB' => 'E02001308',
        '9AD' => 'E02001308',
        '9AE' => 'E02001308',
        '9AF' => 'E02001308',
        '9AG' => 'E02001308',
        '9AH' => 'E02001308',
        '9AJ' => 'E02001308',
        '9AL' => 'E02001308',
        '9AN' => 'E02001308',
        '9AP' => 'E02001308',
        '9AQ' => 'E02001308',
        '9AR' => 'E02001308',
        '9AS' => 'E02001308',
        '9AT' => 'E02001308',
        '9AU' => 'E02001308',
        '9AW' => 'E02001308',
        '9AX' => 'E02001308',
        '9AY' => 'E02001308',
        '9AZ' => 'E02001308',
        '9BA' => 'E02001308',
        '9BB' => 'E02001308',
        '9BD' => 'E02001308',
        '9BE' => 'E02001308',
        '9BF' => 'E02001308',
        '9BG' => 'E02001308',
        '9BH' => 'E02001308',
        '9BJ' => 'E02001308',
        '9BL' => 'E02001308',
        '9BN' => 'E02001308',
        '9BP' => 'E02001308',
        '9BQ' => 'E02001308',
        '9BR' => 'E02001308',
        '9BS' => 'E02001308',
        '9BT' => 'E02001308',
        '9BU' => 'E02001308',
        '9BW' => 'E02001309',
        '9BX' => 'E02001308',
        '9BY' => 'E02001308',
        '9BZ' => 'E02001308',
        '9DA' => 'E02001309',
        '9DB' => 'E02001308',
        '9DD' => 'E02001309',
        '9DE' => 'E02001309',
        '9DF' => 'E02001309',
        '9DG' => 'E02001308',
        '9DH' => 'E02001309',
        '9DJ' => 'E02001308',
        '9DL' => 'E02001308',
        '9DN' => 'E02001308',
        '9DP' => 'E02001309',
        '9DQ' => 'E02001309',
        '9DR' => 'E02001308',
        '9DS' => 'E02001308',
        '9DT' => 'E02001308',
        '9DU' => 'E02001308',
        '9DW' => 'E02001308',
        '9DX' => 'E02001308',
        '9DY' => 'E02001308',
        '9DZ' => 'E02001308',
        '9EA' => 'E02001308',
        '9EB' => 'E02001308',
        '9ED' => 'E02001308',
        '9EE' => 'E02001308',
        '9EF' => 'E02001308',
        '9EG' => 'E02001308',
        '9EH' => 'E02001308',
        '9EJ' => 'E02001308',
        '9EL' => 'E02001309',
        '9EN' => 'E02001308',
        '9EP' => 'E02001308',
        '9EQ' => 'E02001308',
        '9ER' => 'E02001308',
        '9ES' => 'E02001308',
        '9ET' => 'E02001308',
        '9EU' => 'E02001308',
        '9EW' => 'E02001308',
        '9EX' => 'E02001309',
        '9EY' => 'E02001308',
        '9EZ' => 'E02001308',
        '9FA' => 'E02001308',
        '9FB' => 'E02001308',
        '9FD' => 'E02001308',
        '9FE' => 'E02001308',
        '9FF' => 'E02001308',
        '9FG' => 'E02001303',
        '9FH' => 'E02001308',
        '9FJ' => 'E02001308',
        '9FL' => 'E02001308',
        '9FN' => 'E02001309',
        '9FP' => 'E02001308',
        '9FQ' => 'E02001308',
        '9FR' => 'E02001308',
        '9FS' => 'E02001308',
        '9FT' => 'E02001308',
        '9FU' => 'E02001303',
        '9FW' => 'E02001303',
        '9FX' => 'E02001308',
        '9FY' => 'E02001303',
        '9FZ' => 'E02001308',
        '9GA' => 'E02001303',
        '9GB' => 'E02001303',
        '9GD' => 'E02001303',
        '9GE' => 'E02001303',
        '9GF' => 'E02001303',
        '9GG' => 'E02001308',
        '9GH' => 'E02001303',
        '9GJ' => 'E02001303',
        '9GL' => 'E02001303',
        '9GN' => 'E02001308',
        '9GP' => 'E02001013',
        '9GQ' => 'E02001308',
        '9GR' => 'E02001308',
        '9GS' => 'E02001013',
        '9GT' => 'E02001013',
        '9GU' => 'E02001013',
        '9GW' => 'E02001308',
        '9GX' => 'E02001303',
        '9GY' => 'E02001013',
        '9GZ' => 'E02001013',
        '9HA' => 'E02001013',
        '9HB' => 'E02001013',
        '9HD' => 'E02001013',
        '9HE' => 'E02001013',
        '9HF' => 'E02001013',
        '9HG' => 'E02001308',
        '9HH' => 'E02001013',
        '9HJ' => 'E02001013',
        '9HL' => 'E02001013',
        '9HN' => 'E02001013',
        '9HP' => 'E02001308',
        '9HQ' => 'E02001308',
        '9HR' => 'E02001308',
        '9HS' => 'E02001013',
        '9HT' => 'E02001303',
        '9HU' => 'E02001303',
        '9HW' => 'E02001013',
        '9HX' => 'E02001013',
        '9HY' => 'E02001013',
        '9HZ' => 'E02001013',
        '9JA' => 'E02001308',
        '9JB' => 'E02001308',
        '9JD' => 'E02001308',
        '9JE' => 'E02001308',
        '9JF' => 'E02001308',
        '9JG' => 'E02001308',
        '9JH' => 'E02001308',
        '9JJ' => 'E02001308',
        '9JL' => 'E02001308',
        '9JN' => 'E02001308',
        '9JP' => 'E02001308',
        '9JQ' => 'E02001308',
        '9JR' => 'E02001013',
        '9JS' => 'E02001303',
        '9JT' => 'E02001303',
        '9JU' => 'E02001303',
        '9JW' => 'E02001308',
        '9JX' => 'E02001303',
        '9JY' => 'E02001308',
        '9JZ' => 'E02001308',
        '9LA' => 'E02001303',
        '9LB' => 'E02001303',
        '9LD' => 'E02001308',
        '9LE' => 'E02001308',
        '9LF' => 'E02001308',
        '9LG' => 'E02001308',
        '9LH' => 'E02001308',
        '9LJ' => 'E02001308',
        '9LL' => 'E02001303',
        '9LN' => 'E02001303',
        '9LP' => 'E02001303',
        '9LQ' => 'E02001303',
        '9LR' => 'E02001308',
        '9LS' => 'E02001308',
        '9LT' => 'E02001308',
        '9LU' => 'E02001303',
        '9LW' => 'E02001303',
        '9LX' => 'E02001303',
        '9LY' => 'E02001309',
        '9LZ' => 'E02001309',
        '9NA' => 'E02001303',
        '9NB' => 'E02001303',
        '9ND' => 'E02001303',
        '9NE' => 'E02001303',
        '9NF' => 'E02001303',
        '9NG' => 'E02001303',
        '9NH' => 'E02001303',
        '9NJ' => 'E02001303',
        '9NL' => 'E02001303',
        '9NN' => 'E02001303',
        '9NP' => 'E02001303',
        '9NQ' => 'E02001303',
        '9NR' => 'E02001303',
        '9NS' => 'E02001303',
        '9NT' => 'E02001303',
        '9NU' => 'E02001303',
        '9NW' => 'E02001303',
        '9NX' => 'E02001303',
        '9NY' => 'E02001303',
        '9NZ' => 'E02001303',
        '9PA' => 'E02001303',
        '9PB' => 'E02001303',
        '9PD' => 'E02001303',
        '9PE' => 'E02001303',
        '9PF' => 'E02001303',
        '9PG' => 'E02001303',
        '9PH' => 'E02001303',
        '9PJ' => 'E02001303',
        '9PL' => 'E02001303',
        '9PN' => 'E02001303',
        '9PP' => 'E02001303',
        '9PQ' => 'E02001303',
        '9PR' => 'E02001303',
        '9PS' => 'E02001303',
        '9PT' => 'E02001303',
        '9PU' => 'E02001303',
        '9PW' => 'E02001303',
        '9PX' => 'E02001303',
        '9PY' => 'E02001303',
        '9PZ' => 'E02001303',
        '9QA' => 'E02001303',
        '9QB' => 'E02001303',
        '9QD' => 'E02001303',
        '9QE' => 'E02001303',
        '9QF' => 'E02001303',
        '9QG' => 'E02001303',
        '9QH' => 'E02001303',
        '9QJ' => 'E02001303',
        '9QL' => 'E02001303',
        '9QN' => 'E02001013',
        '9QP' => 'E02001013',
        '9QQ' => 'E02001013',
        '9QR' => 'E02001013',
        '9QS' => 'E02001303',
        '9QT' => 'E02001013',
        '9QU' => 'E02001303',
        '9QW' => 'E02001013',
        '9QY' => 'E02001309',
        '9QZ' => 'E02001308',
        '9RA' => 'E02001303',
        '9RB' => 'E02001308',
        '9RD' => 'E02001303',
        '9RE' => 'E02001308',
        '9RF' => 'E02001308',
        '9RG' => 'E02001308',
        '9RH' => 'E02001308',
        '9RJ' => 'E02001303',
        '9RL' => 'E02001303',
        '9RN' => 'E02001303',
        '9RP' => 'E02001303',
        '9RQ' => 'E02001303',
        '9RR' => 'E02001308',
        '9RS' => 'E02001308',
        '9RT' => 'E02001303',
        '9RX' => 'E02001303',
        '9RY' => 'E02001303',
        '9RZ' => 'E02001303',
        '9SA' => 'E02001303',
        '9SB' => 'E02001303',
        '9SD' => 'E02001308',
        '9SE' => 'E02001309',
        '9SF' => 'E02001303',
        '9SG' => 'E02001303',
        '9SH' => 'E02001303',
        '9SJ' => 'E02001303',
        '9SL' => 'E02001303',
        '9SN' => 'E02001303',
        '9SP' => 'E02001303',
        '9SQ' => 'E02001303',
        '9SR' => 'E02001303',
        '9SS' => 'E02001303',
        '9ST' => 'E02001303',
        '9SU' => 'E02001303',
        '9SW' => 'E02001303',
        '9SX' => 'E02001303',
        '9SY' => 'E02001303',
        '9SZ' => 'E02001303',
        '9TA' => 'E02001303',
        '9TB' => 'E02001303',
        '9TD' => 'E02001303',
        '9TE' => 'E02001303',
        '9TF' => 'E02001303',
        '9TG' => 'E02001309',
        '9TH' => 'E02001308',
        '9TJ' => 'E02001303',
        '9TN' => 'E02001309',
        '9TP' => 'E02001309',
        '9TQ' => 'E02001303',
        '9TR' => 'E02001309',
        '9TS' => 'E02001309',
        '9TT' => 'E02001308',
        '9TU' => 'E02001303',
        '9TW' => 'E02001303',
        '9TZ' => 'E02001308',
        '9UB' => 'E02001308',
        '9UQ' => 'E02001303',
        '9UZ' => 'E02001308',
        '9WA' => 'E02001308',
        '9WB' => 'E02001303',
        '9WD' => 'E02001303',
        '9WE' => 'E02001303',
        '9WF' => 'E02001303',
        '9WG' => 'E02001303',
        '9WH' => 'E02001303',
        '9WJ' => 'E02001303',
        '9WL' => 'E02001303',
        '9WN' => 'E02001303',
        '9WP' => 'E02001303',
        '9WQ' => 'E02001303',
        '9WR' => 'E02001303',
        '9WS' => 'E02001303',
        '9WT' => 'E02001303',
        '9WU' => 'E02001303',
        '9WW' => 'E02001303',
        '9WX' => 'E02001303',
        '9WY' => 'E02001303',
        '9WZ' => 'E02001303',
        '9XA' => 'E02001308',
        '9XB' => 'E02001303',
        '9XD' => 'E02001303',
        '9XE' => 'E02001303',
        '9XF' => 'E02001303',
        '9XG' => 'E02001303',
        '9XH' => 'E02001309',
        '9XJ' => 'E02001309',
        '9XL' => 'E02001309',
        '9XN' => 'E02001309',
        '9XP' => 'E02001309',
        '9XQ' => 'E02001309',
        '9XR' => 'E02001309',
        '9XS' => 'E02001309',
        '9XY' => 'E02001309',
        '9XZ' => 'E02001309',
        '9YJ' => 'E02001308',
        '9YU' => 'E02001309',
        '9YW' => 'E02001309',
        '9YX' => 'E02001309',
        '9YY' => 'E02001309',
        '9YZ' => 'E02001303',
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
