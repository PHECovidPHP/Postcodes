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
final class CT17
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02005052',
        '0AB' => 'E02005052',
        '0AD' => 'E02005053',
        '0AE' => 'E02005053',
        '0AF' => 'E02005053',
        '0AG' => 'E02005053',
        '0AH' => 'E02005053',
        '0AJ' => 'E02005053',
        '0AL' => 'E02005053',
        '0AN' => 'E02005053',
        '0AP' => 'E02005053',
        '0AQ' => 'E02005053',
        '0AR' => 'E02005053',
        '0AS' => 'E02005051',
        '0AT' => 'E02005051',
        '0AU' => 'E02005051',
        '0AW' => 'E02005053',
        '0AX' => 'E02005051',
        '0AY' => 'E02005051',
        '0AZ' => 'E02005051',
        '0BA' => 'E02005051',
        '0BB' => 'E02005051',
        '0BD' => 'E02005051',
        '0BE' => 'E02005053',
        '0BF' => 'E02005053',
        '0BG' => 'E02005051',
        '0BH' => 'E02005053',
        '0BJ' => 'E02005053',
        '0BL' => 'E02005053',
        '0BN' => 'E02005053',
        '0BP' => 'E02005053',
        '0BQ' => 'E02005051',
        '0BS' => 'E02005052',
        '0BT' => 'E02005051',
        '0BU' => 'E02005051',
        '0BW' => 'E02005053',
        '0BX' => 'E02005051',
        '0BY' => 'E02005051',
        '0BZ' => 'E02005051',
        '0DA' => 'E02005051',
        '0DB' => 'E02005051',
        '0DD' => 'E02005051',
        '0DE' => 'E02005051',
        '0DF' => 'E02005051',
        '0DG' => 'E02005051',
        '0DH' => 'E02005051',
        '0DJ' => 'E02005051',
        '0DL' => 'E02005053',
        '0DN' => 'E02005053',
        '0DP' => 'E02005051',
        '0DQ' => 'E02005051',
        '0DR' => 'E02005051',
        '0DS' => 'E02005053',
        '0DT' => 'E02005053',
        '0DU' => 'E02005053',
        '0DW' => 'E02005053',
        '0DX' => 'E02005051',
        '0DY' => 'E02005053',
        '0DZ' => 'E02005053',
        '0EA' => 'E02005053',
        '0EB' => 'E02005053',
        '0ED' => 'E02005053',
        '0EE' => 'E02005051',
        '0EF' => 'E02005052',
        '0EG' => 'E02005052',
        '0EH' => 'E02005052',
        '0EJ' => 'E02005052',
        '0EL' => 'E02005052',
        '0EN' => 'E02005052',
        '0EP' => 'E02005052',
        '0EQ' => 'E02005052',
        '0ER' => 'E02005050',
        '0ES' => 'E02005051',
        '0ET' => 'E02005051',
        '0EU' => 'E02005051',
        '0EW' => 'E02005052',
        '0EX' => 'E02005051',
        '0EY' => 'E02005051',
        '0EZ' => 'E02005051',
        '0FA' => 'E02005051',
        '0FB' => 'E02005051',
        '0FD' => 'E02005053',
        '0FE' => 'E02005051',
        '0FF' => 'E02005051',
        '0FG' => 'E02005051',
        '0FH' => 'E02005051',
        '0FJ' => 'E02005051',
        '0FL' => 'E02005051',
        '0FN' => 'E02005051',
        '0FP' => 'E02005051',
        '0FQ' => 'E02005051',
        '0FR' => 'E02005051',
        '0FS' => 'E02005051',
        '0FT' => 'E02005051',
        '0FU' => 'E02005052',
        '0FW' => 'E02005051',
        '0FX' => 'E02005051',
        '0FY' => 'E02005051',
        '0FZ' => 'E02005051',
        '0GA' => 'E02005053',
        '0GB' => 'E02005051',
        '0GD' => 'E02005051',
        '0GE' => 'E02005051',
        '0GF' => 'E02005051',
        '0GG' => 'E02005051',
        '0GH' => 'E02005051',
        '0GJ' => 'E02005052',
        '0GL' => 'E02005051',
        '0GN' => 'E02005052',
        '0GP' => 'E02005051',
        '0GQ' => 'E02005051',
        '0GR' => 'E02005051',
        '0GS' => 'E02005052',
        '0GT' => 'E02005051',
        '0GU' => 'E02005051',
        '0GW' => 'E02005052',
        '0GX' => 'E02005051',
        '0GY' => 'E02005051',
        '0GZ' => 'E02005052',
        '0HA' => 'E02005051',
        '0HB' => 'E02005051',
        '0HD' => 'E02005051',
        '0HE' => 'E02005051',
        '0HF' => 'E02005051',
        '0HG' => 'E02005051',
        '0HH' => 'E02005051',
        '0HJ' => 'E02005051',
        '0HL' => 'E02005051',
        '0HN' => 'E02005051',
        '0HP' => 'E02005051',
        '0HQ' => 'E02005051',
        '0HR' => 'E02005051',
        '0HS' => 'E02005051',
        '0HT' => 'E02005051',
        '0HU' => 'E02005051',
        '0HW' => 'E02005051',
        '0HX' => 'E02005051',
        '0HY' => 'E02005051',
        '0HZ' => 'E02005051',
        '0JA' => 'E02005051',
        '0JB' => 'E02005051',
        '0JD' => 'E02005051',
        '0JE' => 'E02005051',
        '0JF' => 'E02005051',
        '0JG' => 'E02005051',
        '0JH' => 'E02005051',
        '0JJ' => 'E02005051',
        '0JL' => 'E02005051',
        '0JN' => 'E02005051',
        '0JP' => 'E02005051',
        '0JQ' => 'E02005051',
        '0JR' => 'E02005051',
        '0JS' => 'E02005051',
        '0JT' => 'E02005051',
        '0JU' => 'E02005052',
        '0JW' => 'E02005051',
        '0JX' => 'E02005052',
        '0JY' => 'E02005051',
        '0JZ' => 'E02005051',
        '0LA' => 'E02005051',
        '0LB' => 'E02005051',
        '0LD' => 'E02005051',
        '0LE' => 'E02005051',
        '0LF' => 'E02005051',
        '0LG' => 'E02005051',
        '0LH' => 'E02005051',
        '0LJ' => 'E02005052',
        '0LL' => 'E02005051',
        '0LN' => 'E02005050',
        '0LP' => 'E02005050',
        '0LQ' => 'E02005051',
        '0LR' => 'E02005050',
        '0LS' => 'E02005050',
        '0LT' => 'E02005050',
        '0LU' => 'E02005050',
        '0LW' => 'E02005050',
        '0LX' => 'E02005050',
        '0LY' => 'E02005050',
        '0LZ' => 'E02005050',
        '0NA' => 'E02005050',
        '0NB' => 'E02005050',
        '0ND' => 'E02005050',
        '0NE' => 'E02005050',
        '0NF' => 'E02005050',
        '0NG' => 'E02005050',
        '0NH' => 'E02005054',
        '0NJ' => 'E02005054',
        '0NL' => 'E02005051',
        '0NN' => 'E02005054',
        '0NP' => 'E02005050',
        '0NQ' => 'E02005050',
        '0NR' => 'E02005050',
        '0NS' => 'E02005050',
        '0NT' => 'E02005050',
        '0NU' => 'E02005054',
        '0NW' => 'E02005054',
        '0NX' => 'E02005050',
        '0NY' => 'E02005050',
        '0NZ' => 'E02005051',
        '0PA' => 'E02005050',
        '0PB' => 'E02005050',
        '0PD' => 'E02005050',
        '0PE' => 'E02005050',
        '0PF' => 'E02005050',
        '0PG' => 'E02005050',
        '0PH' => 'E02005054',
        '0PJ' => 'E02005054',
        '0PL' => 'E02005054',
        '0PN' => 'E02005050',
        '0PP' => 'E02005050',
        '0PQ' => 'E02005050',
        '0PR' => 'E02005050',
        '0PS' => 'E02005050',
        '0PT' => 'E02005050',
        '0PU' => 'E02005054',
        '0PW' => 'E02005050',
        '0PX' => 'E02005054',
        '0PY' => 'E02005054',
        '0PZ' => 'E02005054',
        '0QA' => 'E02005054',
        '0QB' => 'E02005050',
        '0QD' => 'E02005050',
        '0QE' => 'E02005050',
        '0QF' => 'E02005050',
        '0QG' => 'E02005050',
        '0QH' => 'E02005050',
        '0QJ' => 'E02005050',
        '0QL' => 'E02005050',
        '0QN' => 'E02005050',
        '0QP' => 'E02005050',
        '0QQ' => 'E02005050',
        '0QR' => 'E02005050',
        '0QS' => 'E02005050',
        '0QT' => 'E02005050',
        '0QU' => 'E02005050',
        '0QW' => 'E02005050',
        '0QX' => 'E02005050',
        '0QY' => 'E02005050',
        '0QZ' => 'E02005050',
        '0RA' => 'E02005050',
        '0RB' => 'E02005050',
        '0RD' => 'E02005050',
        '0RE' => 'E02005050',
        '0RF' => 'E02005050',
        '0RG' => 'E02005050',
        '0RH' => 'E02005050',
        '0RJ' => 'E02005050',
        '0RL' => 'E02005050',
        '0RN' => 'E02005050',
        '0RP' => 'E02005051',
        '0RQ' => 'E02005050',
        '0RR' => 'E02005050',
        '0RS' => 'E02005051',
        '0RT' => 'E02005051',
        '0RU' => 'E02005051',
        '0RW' => 'E02005050',
        '0RX' => 'E02005051',
        '0RY' => 'E02005051',
        '0RZ' => 'E02005051',
        '0SA' => 'E02005051',
        '0SB' => 'E02005051',
        '0SD' => 'E02005051',
        '0SE' => 'E02005050',
        '0SF' => 'E02005050',
        '0SG' => 'E02005050',
        '0SH' => 'E02005052',
        '0SJ' => 'E02005052',
        '0SL' => 'E02005052',
        '0SN' => 'E02005052',
        '0SP' => 'E02005052',
        '0SQ' => 'E02005050',
        '0SR' => 'E02005052',
        '0SS' => 'E02005052',
        '0ST' => 'E02005052',
        '0SU' => 'E02005051',
        '0SW' => 'E02005052',
        '0SX' => 'E02005053',
        '0SY' => 'E02005052',
        '0SZ' => 'E02005052',
        '0TA' => 'E02005052',
        '0TB' => 'E02005052',
        '0TD' => 'E02005051',
        '0TE' => 'E02005051',
        '0TF' => 'E02005051',
        '0TG' => 'E02005051',
        '0TH' => 'E02005052',
        '0TJ' => 'E02005051',
        '0TL' => 'E02005054',
        '0TN' => 'E02005050',
        '0TP' => 'E02005052',
        '0TQ' => 'E02005052',
        '0TR' => 'E02005051',
        '0TS' => 'E02005052',
        '0TT' => 'E02005052',
        '0TU' => 'E02005051',
        '0TW' => 'E02005050',
        '0TX' => 'E02005052',
        '0TY' => 'E02005053',
        '0TZ' => 'E02005051',
        '0UA' => 'E02005051',
        '0UB' => 'E02005051',
        '0UD' => 'E02005050',
        '0UE' => 'E02005050',
        '0UF' => 'E02005051',
        '0UG' => 'E02005051',
        '0UH' => 'E02005051',
        '0UJ' => 'E02005051',
        '0UL' => 'E02005051',
        '0UN' => 'E02005051',
        '0UP' => 'E02005051',
        '0UQ' => 'E02005051',
        '0UR' => 'E02005050',
        '0US' => 'E02005050',
        '0UT' => 'E02005051',
        '0UU' => 'E02005052',
        '0UW' => 'E02005053',
        '0UX' => 'E02005050',
        '0UY' => 'E02005050',
        '0UZ' => 'E02005050',
        '0WA' => 'E02005052',
        '0WB' => 'E02005052',
        '0WD' => 'E02005052',
        '0WE' => 'E02005052',
        '0WF' => 'E02005052',
        '0WG' => 'E02005052',
        '0WH' => 'E02005052',
        '0WJ' => 'E02005052',
        '0WL' => 'E02005051',
        '0WN' => 'E02005051',
        '0WP' => 'E02005051',
        '0WQ' => 'E02005052',
        '0WR' => 'E02005052',
        '0WS' => 'E02005051',
        '0WT' => 'E02005052',
        '0WU' => 'E02005051',
        '0WW' => 'E02005052',
        '0WX' => 'E02005051',
        '0WY' => 'E02005052',
        '0WZ' => 'E02005052',
        '0XA' => 'E02005050',
        '0XB' => 'E02005051',
        '0XD' => 'E02005051',
        '0XE' => 'E02005052',
        '0XF' => 'E02005050',
        '0XG' => 'E02005052',
        '0XL' => 'E02005051',
        '0XN' => 'E02005053',
        '0XW' => 'E02005051',
        '0YF' => 'E02005052',
        '0YX' => 'E02005052',
        '0YY' => 'E02005050',
        '0YZ' => 'E02005050',
        '9AA' => 'E02005053',
        '9AB' => 'E02005053',
        '9AD' => 'E02005053',
        '9AE' => 'E02005053',
        '9AF' => 'E02005052',
        '9AG' => 'E02005052',
        '9AH' => 'E02005052',
        '9AJ' => 'E02005052',
        '9AL' => 'E02005052',
        '9AN' => 'E02005053',
        '9AP' => 'E02005053',
        '9AQ' => 'E02005052',
        '9AR' => 'E02005053',
        '9AS' => 'E02005053',
        '9AT' => 'E02005053',
        '9AU' => 'E02005053',
        '9AW' => 'E02005053',
        '9AX' => 'E02005053',
        '9AY' => 'E02005053',
        '9AZ' => 'E02005053',
        '9BA' => 'E02005053',
        '9BB' => 'E02005053',
        '9BD' => 'E02005053',
        '9BE' => 'E02005053',
        '9BF' => 'E02005052',
        '9BG' => 'E02005053',
        '9BH' => 'E02005053',
        '9BJ' => 'E02005053',
        '9BL' => 'E02005053',
        '9BN' => 'E02005053',
        '9BP' => 'E02005053',
        '9BQ' => 'E02005053',
        '9BS' => 'E02005053',
        '9BT' => 'E02005053',
        '9BU' => 'E02005053',
        '9BW' => 'E02005053',
        '9BX' => 'E02005053',
        '9BY' => 'E02005053',
        '9BZ' => 'E02005053',
        '9DA' => 'E02005053',
        '9DB' => 'E02005053',
        '9DD' => 'E02005053',
        '9DE' => 'E02005053',
        '9DF' => 'E02005053',
        '9DG' => 'E02005053',
        '9DH' => 'E02005053',
        '9DJ' => 'E02005053',
        '9DL' => 'E02005053',
        '9DN' => 'E02005053',
        '9DP' => 'E02005053',
        '9DQ' => 'E02005053',
        '9DR' => 'E02005053',
        '9DS' => 'E02005053',
        '9DT' => 'E02005053',
        '9DU' => 'E02005053',
        '9DW' => 'E02005053',
        '9DX' => 'E02005053',
        '9DY' => 'E02005053',
        '9DZ' => 'E02005053',
        '9EA' => 'E02005053',
        '9EB' => 'E02005053',
        '9ED' => 'E02005053',
        '9EE' => 'E02005053',
        '9EF' => 'E02005053',
        '9EG' => 'E02005053',
        '9EH' => 'E02005054',
        '9EJ' => 'E02005053',
        '9EL' => 'E02005053',
        '9EN' => 'E02005053',
        '9EP' => 'E02005054',
        '9EQ' => 'E02005053',
        '9ER' => 'E02005053',
        '9ES' => 'E02005053',
        '9ET' => 'E02005053',
        '9EU' => 'E02005053',
        '9EW' => 'E02005052',
        '9EX' => 'E02005054',
        '9EY' => 'E02005053',
        '9EZ' => 'E02005053',
        '9FA' => 'E02005052',
        '9FB' => 'E02005053',
        '9FD' => 'E02005053',
        '9FE' => 'E02005053',
        '9FH' => 'E02005053',
        '9FJ' => 'E02005053',
        '9FL' => 'E02005053',
        '9FS' => 'E02005053',
        '9GA' => 'E02005053',
        '9GB' => 'E02005052',
        '9GD' => 'E02005052',
        '9GE' => 'E02005053',
        '9GF' => 'E02005052',
        '9GG' => 'E02005053',
        '9GH' => 'E02005053',
        '9GJ' => 'E02005052',
        '9GL' => 'E02005052',
        '9GN' => 'E02005053',
        '9GP' => 'E02005052',
        '9GQ' => 'E02005052',
        '9GR' => 'E02005053',
        '9GS' => 'E02005052',
        '9GT' => 'E02005053',
        '9GU' => 'E02005052',
        '9GW' => 'E02005052',
        '9GX' => 'E02005052',
        '9GY' => 'E02005052',
        '9GZ' => 'E02005052',
        '9HA' => 'E02005053',
        '9HB' => 'E02005053',
        '9HD' => 'E02005053',
        '9HE' => 'E02005053',
        '9HF' => 'E02005053',
        '9HG' => 'E02005053',
        '9HH' => 'E02005053',
        '9HJ' => 'E02005053',
        '9HL' => 'E02005053',
        '9HN' => 'E02005053',
        '9HP' => 'E02005053',
        '9HQ' => 'E02005053',
        '9HR' => 'E02005053',
        '9HS' => 'E02005053',
        '9HT' => 'E02005053',
        '9HU' => 'E02005053',
        '9HW' => 'E02005053',
        '9HX' => 'E02005053',
        '9HY' => 'E02005053',
        '9HZ' => 'E02005053',
        '9JA' => 'E02005053',
        '9JB' => 'E02005053',
        '9JD' => 'E02005053',
        '9JE' => 'E02005053',
        '9JF' => 'E02005053',
        '9JG' => 'E02005054',
        '9JH' => 'E02005054',
        '9JJ' => 'E02005054',
        '9JL' => 'E02005054',
        '9JN' => 'E02005054',
        '9JP' => 'E02005054',
        '9JQ' => 'E02005054',
        '9JR' => 'E02005054',
        '9JS' => 'E02005053',
        '9JT' => 'E02005054',
        '9JU' => 'E02005054',
        '9JW' => 'E02005054',
        '9JX' => 'E02005054',
        '9JY' => 'E02005054',
        '9JZ' => 'E02005054',
        '9LA' => 'E02005054',
        '9LB' => 'E02005054',
        '9LD' => 'E02005054',
        '9LE' => 'E02005054',
        '9LF' => 'E02005054',
        '9LG' => 'E02005054',
        '9LH' => 'E02005054',
        '9LJ' => 'E02005054',
        '9LL' => 'E02005053',
        '9LN' => 'E02005053',
        '9LP' => 'E02005053',
        '9LQ' => 'E02005054',
        '9LR' => 'E02005053',
        '9LS' => 'E02005053',
        '9LT' => 'E02005053',
        '9LU' => 'E02005054',
        '9LW' => 'E02005053',
        '9LX' => 'E02005054',
        '9LY' => 'E02005054',
        '9LZ' => 'E02005054',
        '9NA' => 'E02005054',
        '9NB' => 'E02005054',
        '9ND' => 'E02005054',
        '9NE' => 'E02005054',
        '9NF' => 'E02005054',
        '9NG' => 'E02005054',
        '9NH' => 'E02005054',
        '9NJ' => 'E02005054',
        '9NL' => 'E02005054',
        '9NN' => 'E02005054',
        '9NP' => 'E02005053',
        '9NQ' => 'E02005054',
        '9NR' => 'E02005053',
        '9NS' => 'E02005053',
        '9NT' => 'E02005053',
        '9NU' => 'E02005053',
        '9NW' => 'E02005053',
        '9NX' => 'E02005053',
        '9NY' => 'E02005053',
        '9NZ' => 'E02005053',
        '9PA' => 'E02005053',
        '9PB' => 'E02005053',
        '9PD' => 'E02005053',
        '9PE' => 'E02005053',
        '9PF' => 'E02005053',
        '9PG' => 'E02005054',
        '9PH' => 'E02005054',
        '9PJ' => 'E02005053',
        '9PL' => 'E02005054',
        '9PN' => 'E02005054',
        '9PP' => 'E02005054',
        '9PQ' => 'E02005054',
        '9PR' => 'E02005054',
        '9PS' => 'E02005054',
        '9PT' => 'E02005054',
        '9PU' => 'E02005054',
        '9PW' => 'E02005054',
        '9PX' => 'E02005053',
        '9PY' => 'E02005053',
        '9PZ' => 'E02005053',
        '9QA' => 'E02005053',
        '9QB' => 'E02005053',
        '9QD' => 'E02005053',
        '9QE' => 'E02005053',
        '9QF' => 'E02005053',
        '9QG' => 'E02005053',
        '9QH' => 'E02005053',
        '9QJ' => 'E02005053',
        '9QL' => 'E02005054',
        '9QN' => 'E02005054',
        '9QP' => 'E02005054',
        '9QQ' => 'E02005053',
        '9QR' => 'E02005053',
        '9QS' => 'E02005053',
        '9QT' => 'E02005053',
        '9QU' => 'E02005053',
        '9QW' => 'E02005054',
        '9QX' => 'E02005053',
        '9QY' => 'E02005053',
        '9QZ' => 'E02005053',
        '9RA' => 'E02005053',
        '9RB' => 'E02005053',
        '9RD' => 'E02005053',
        '9RE' => 'E02005053',
        '9RF' => 'E02005053',
        '9RG' => 'E02005053',
        '9RH' => 'E02005053',
        '9RJ' => 'E02005053',
        '9RL' => 'E02005053',
        '9RN' => 'E02005053',
        '9RP' => 'E02005053',
        '9RQ' => 'E02005053',
        '9RR' => 'E02005053',
        '9RS' => 'E02005053',
        '9RT' => 'E02005053',
        '9RU' => 'E02005053',
        '9RW' => 'E02005053',
        '9RX' => 'E02005053',
        '9RY' => 'E02005053',
        '9RZ' => 'E02005053',
        '9SA' => 'E02005053',
        '9SB' => 'E02005053',
        '9SD' => 'E02005053',
        '9SE' => 'E02005053',
        '9SF' => 'E02005053',
        '9SG' => 'E02005053',
        '9SH' => 'E02005053',
        '9SJ' => 'E02005053',
        '9SL' => 'E02005053',
        '9SN' => 'E02005053',
        '9SP' => 'E02005053',
        '9SQ' => 'E02005053',
        '9SR' => 'E02005053',
        '9SS' => 'E02005053',
        '9ST' => 'E02005053',
        '9SU' => 'E02005053',
        '9SW' => 'E02005053',
        '9SX' => 'E02005053',
        '9SY' => 'E02005053',
        '9SZ' => 'E02005053',
        '9TA' => 'E02005053',
        '9TB' => 'E02005053',
        '9TD' => 'E02005053',
        '9TE' => 'E02005053',
        '9TF' => 'E02005053',
        '9TG' => 'E02005053',
        '9TH' => 'E02005053',
        '9TJ' => 'E02005053',
        '9TL' => 'E02005053',
        '9TN' => 'E02005053',
        '9TP' => 'E02005053',
        '9TQ' => 'E02005053',
        '9TR' => 'E02005053',
        '9TS' => 'E02005053',
        '9TT' => 'E02005053',
        '9TU' => 'E02005053',
        '9TW' => 'E02005053',
        '9TX' => 'E02005053',
        '9TY' => 'E02005053',
        '9TZ' => 'E02005053',
        '9UA' => 'E02005054',
        '9UB' => 'E02005054',
        '9UD' => 'E02005053',
        '9UE' => 'E02005053',
        '9UH' => 'E02005053',
        '9UJ' => 'E02005053',
        '9UL' => 'E02005052',
        '9UP' => 'E02005053',
        '9UQ' => 'E02005053',
        '9UR' => 'E02005053',
        '9UT' => 'E02005053',
        '9UU' => 'E02005053',
        '9UX' => 'E02005053',
        '9UZ' => 'E02005053',
        '9WA' => 'E02005053',
        '9WB' => 'E02005053',
        '9WD' => 'E02005053',
        '9WE' => 'E02005053',
        '9WF' => 'E02005053',
        '9WG' => 'E02005052',
        '9WP' => 'E02005053',
        '9WR' => 'E02005052',
        '9WZ' => 'E02005052',
        '9XA' => 'E02005053',
        '9XB' => 'E02005053',
        '9XD' => 'E02005053',
        '9XT' => 'E02005052',
        '9YJ' => 'E02005053',
        '9YL' => 'E02005053',
        '9YN' => 'E02005053',
        '9YP' => 'E02005053',
        '9YQ' => 'E02005052',
        '9YR' => 'E02005053',
        '9YS' => 'E02005053',
        '9YT' => 'E02005053',
        '9YU' => 'E02005053',
        '9YW' => 'E02005053',
        '9YX' => 'E02005053',
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
