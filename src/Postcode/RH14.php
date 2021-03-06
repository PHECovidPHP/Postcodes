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
final class RH14
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02006562',
        '0AB' => 'E02006562',
        '0AD' => 'E02006562',
        '0AE' => 'E02006562',
        '0AF' => 'E02006562',
        '0AG' => 'E02006562',
        '0AH' => 'E02006562',
        '0AJ' => 'E02006562',
        '0AL' => 'E02006562',
        '0AN' => 'E02006562',
        '0AP' => 'E02006562',
        '0AQ' => 'E02006562',
        '0AR' => 'E02006562',
        '0AS' => 'E02006562',
        '0AT' => 'E02006562',
        '0AU' => 'E02006562',
        '0AW' => 'E02006562',
        '0AX' => 'E02006562',
        '0AY' => 'E02006562',
        '0AZ' => 'E02006562',
        '0BA' => 'E02006562',
        '0BB' => 'E02006562',
        '0BD' => 'E02006562',
        '0BE' => 'E02006562',
        '0BF' => 'E02006562',
        '0BG' => 'E02006562',
        '0BH' => 'E02006562',
        '0BJ' => 'E02006562',
        '0BL' => 'E02006562',
        '0BN' => 'E02006562',
        '0BP' => 'E02006562',
        '0BQ' => 'E02006562',
        '0BS' => 'E02006597',
        '0BT' => 'E02006562',
        '0BU' => 'E02006562',
        '0BW' => 'E02006562',
        '0BX' => 'E02006562',
        '0BY' => 'E02006562',
        '0BZ' => 'E02006562',
        '0DA' => 'E02006562',
        '0DB' => 'E02006562',
        '0DD' => 'E02006562',
        '0DE' => 'E02006562',
        '0DF' => 'E02006562',
        '0DG' => 'E02006562',
        '0DH' => 'E02006562',
        '0DJ' => 'E02006562',
        '0DL' => 'E02006562',
        '0DN' => 'E02006562',
        '0DP' => 'E02006562',
        '0DQ' => 'E02006562',
        '0DR' => 'E02006562',
        '0DS' => 'E02006562',
        '0DT' => 'E02006562',
        '0DU' => 'E02006562',
        '0DW' => 'E02006562',
        '0DX' => 'E02006562',
        '0DY' => 'E02006562',
        '0DZ' => 'E02006562',
        '0EA' => 'E02006562',
        '0EB' => 'E02006562',
        '0ED' => 'E02006562',
        '0EE' => 'E02006562',
        '0EF' => 'E02006562',
        '0EG' => 'E02006562',
        '0EH' => 'E02006562',
        '0EJ' => 'E02006562',
        '0EL' => 'E02006562',
        '0EN' => 'E02006562',
        '0EP' => 'E02006562',
        '0EQ' => 'E02006562',
        '0ER' => 'E02006562',
        '0ES' => 'E02006562',
        '0ET' => 'E02006562',
        '0EU' => 'E02006562',
        '0EW' => 'E02006597',
        '0EX' => 'E02006562',
        '0EY' => 'E02006562',
        '0EZ' => 'E02006562',
        '0FA' => 'E02006597',
        '0FB' => 'E02006562',
        '0FD' => 'E02006597',
        '0FE' => 'E02006597',
        '0FF' => 'E02006562',
        '0FG' => 'E02006597',
        '0FH' => 'E02006597',
        '0FJ' => 'E02006562',
        '0FL' => 'E02006597',
        '0FN' => 'E02006562',
        '0FP' => 'E02006597',
        '0FQ' => 'E02006597',
        '0FR' => 'E02006562',
        '0FS' => 'E02006597',
        '0FT' => 'E02006597',
        '0FU' => 'E02006562',
        '0FW' => 'E02006597',
        '0FX' => 'E02006562',
        '0FZ' => 'E02006562',
        '0HA' => 'E02006562',
        '0HB' => 'E02006562',
        '0HD' => 'E02006562',
        '0HE' => 'E02006562',
        '0HH' => 'E02006562',
        '0HJ' => 'E02006562',
        '0HL' => 'E02006562',
        '0HN' => 'E02006562',
        '0HP' => 'E02006562',
        '0HR' => 'E02006562',
        '0HS' => 'E02006562',
        '0HT' => 'E02006562',
        '0HU' => 'E02006565',
        '0HW' => 'E02006562',
        '0HX' => 'E02006562',
        '0HY' => 'E02006562',
        '0HZ' => 'E02006562',
        '0JA' => 'E02006562',
        '0JG' => 'E02006562',
        '0JH' => 'E02006562',
        '0JJ' => 'E02006562',
        '0JL' => 'E02006562',
        '0JN' => 'E02006562',
        '0JP' => 'E02006562',
        '0JQ' => 'E02006597',
        '0JR' => 'E02006562',
        '0JS' => 'E02006562',
        '0JT' => 'E02006562',
        '0JU' => 'E02006562',
        '0JW' => 'E02006562',
        '0JX' => 'E02006562',
        '0JY' => 'E02006562',
        '0JZ' => 'E02006562',
        '0LA' => 'E02006562',
        '0LB' => 'E02006562',
        '0LD' => 'E02006562',
        '0LE' => 'E02006562',
        '0LG' => 'E02006562',
        '0LH' => 'E02006562',
        '0LJ' => 'E02006562',
        '0LL' => 'E02006562',
        '0LN' => 'E02006562',
        '0LP' => 'E02006562',
        '0LS' => 'E02006562',
        '0LT' => 'E02006562',
        '0LU' => 'E02006562',
        '0LW' => 'E02006562',
        '0LX' => 'E02006562',
        '0LY' => 'E02006562',
        '0LZ' => 'E02006562',
        '0NA' => 'E02006562',
        '0NB' => 'E02006562',
        '0ND' => 'E02006562',
        '0NE' => 'E02006562',
        '0NF' => 'E02006562',
        '0NG' => 'E02006562',
        '0NH' => 'E02006562',
        '0NJ' => 'E02006562',
        '0NL' => 'E02006562',
        '0NN' => 'E02006562',
        '0NP' => 'E02006562',
        '0NQ' => 'E02006562',
        '0NR' => 'E02006562',
        '0NS' => 'E02006562',
        '0NT' => 'E02006562',
        '0NU' => 'E02006562',
        '0NW' => 'E02006562',
        '0NX' => 'E02006562',
        '0NY' => 'E02006562',
        '0NZ' => 'E02006562',
        '0PA' => 'E02006562',
        '0PB' => 'E02006453',
        '0PD' => 'E02006562',
        '0PE' => 'E02006562',
        '0PF' => 'E02006562',
        '0PG' => 'E02006562',
        '0PH' => 'E02006562',
        '0PJ' => 'E02006562',
        '0PL' => 'E02006562',
        '0PN' => 'E02006562',
        '0PP' => 'E02006562',
        '0PQ' => 'E02006562',
        '0PR' => 'E02006562',
        '0PT' => 'E02006562',
        '0PU' => 'E02006562',
        '0PW' => 'E02006562',
        '0PX' => 'E02006562',
        '0PY' => 'E02006562',
        '0PZ' => 'E02006562',
        '0QA' => 'E02006562',
        '0QB' => 'E02006562',
        '0QD' => 'E02006562',
        '0QE' => 'E02006562',
        '0QF' => 'E02006562',
        '0QG' => 'E02006562',
        '0QH' => 'E02006562',
        '0QJ' => 'E02006562',
        '0QL' => 'E02006562',
        '0QN' => 'E02006562',
        '0QP' => 'E02006562',
        '0QQ' => 'E02006562',
        '0QR' => 'E02006562',
        '0QS' => 'E02006562',
        '0QT' => 'E02006562',
        '0QW' => 'E02006562',
        '0QX' => 'E02006562',
        '0QY' => 'E02006562',
        '0QZ' => 'E02006562',
        '0RA' => 'E02006562',
        '0RB' => 'E02006562',
        '0RD' => 'E02006562',
        '0RE' => 'E02006562',
        '0RF' => 'E02006562',
        '0RG' => 'E02006562',
        '0RH' => 'E02006562',
        '0RJ' => 'E02006562',
        '0RL' => 'E02006562',
        '0RN' => 'E02006562',
        '0RP' => 'E02006562',
        '0RQ' => 'E02006562',
        '0RR' => 'E02006562',
        '0RS' => 'E02006562',
        '0RT' => 'E02006562',
        '0RU' => 'E02006562',
        '0RW' => 'E02006562',
        '0SA' => 'E02006562',
        '0SB' => 'E02006562',
        '0SD' => 'E02006562',
        '0SE' => 'E02006562',
        '0SF' => 'E02006562',
        '0SG' => 'E02006562',
        '0SH' => 'E02006562',
        '0SJ' => 'E02006562',
        '0SL' => 'E02006562',
        '0SN' => 'E02006562',
        '0SP' => 'E02006562',
        '0SQ' => 'E02006562',
        '0SR' => 'E02006562',
        '0SS' => 'E02006562',
        '0ST' => 'E02006562',
        '0SU' => 'E02006562',
        '0SW' => 'E02006562',
        '0SX' => 'E02006562',
        '0SY' => 'E02006562',
        '0SZ' => 'E02006562',
        '0TA' => 'E02006562',
        '0TB' => 'E02006562',
        '0TD' => 'E02006562',
        '0TE' => 'E02006562',
        '0TF' => 'E02006562',
        '0TG' => 'E02006562',
        '0TH' => 'E02006562',
        '0TJ' => 'E02006562',
        '0TL' => 'E02006562',
        '0TN' => 'E02006562',
        '0TP' => 'E02006562',
        '0TQ' => 'E02006562',
        '0TR' => 'E02006562',
        '0TS' => 'E02006562',
        '0TT' => 'E02006562',
        '0TU' => 'E02006562',
        '0TW' => 'E02006562',
        '0TX' => 'E02006562',
        '0TY' => 'E02006562',
        '0TZ' => 'E02006562',
        '0UA' => 'E02006562',
        '0UB' => 'E02006562',
        '0UD' => 'E02006562',
        '0UE' => 'E02006562',
        '0UF' => 'E02006562',
        '0UG' => 'E02006562',
        '0UH' => 'E02006562',
        '0UJ' => 'E02006562',
        '0UL' => 'E02006562',
        '0UN' => 'E02006562',
        '0UP' => 'E02006562',
        '0UT' => 'E02006562',
        '0UU' => 'E02006562',
        '0UW' => 'E02006597',
        '0UY' => 'E02006597',
        '0WA' => 'E02006562',
        '0WB' => 'E02006597',
        '0WD' => 'E02006597',
        '0WG' => 'E02006597',
        '0WH' => 'E02006597',
        '0WJ' => 'E02006597',
        '0WL' => 'E02006597',
        '0WN' => 'E02006597',
        '0WP' => 'E02006597',
        '0WQ' => 'E02006597',
        '0WR' => 'E02006597',
        '0WS' => 'E02006597',
        '0WT' => 'E02006597',
        '0WU' => 'E02006597',
        '0WW' => 'E02006562',
        '0WX' => 'E02006597',
        '0WY' => 'E02006597',
        '0WZ' => 'E02006562',
        '0XA' => 'E02006597',
        '0XB' => 'E02006597',
        '0XF' => 'E02006562',
        '0XQ' => 'E02006562',
        '0YA' => 'E02006597',
        '0YB' => 'E02006597',
        '0YD' => 'E02006562',
        '0YE' => 'E02006597',
        '0YF' => 'E02006597',
        '0YG' => 'E02006597',
        '0YH' => 'E02006597',
        '0YJ' => 'E02006562',
        '0YL' => 'E02006562',
        '0YN' => 'E02006597',
        '0YP' => 'E02006597',
        '0YQ' => 'E02006562',
        '0YR' => 'E02006597',
        '0YS' => 'E02006597',
        '0YT' => 'E02006597',
        '0YU' => 'E02006597',
        '0YW' => 'E02006597',
        '0YX' => 'E02006597',
        '0YY' => 'E02006562',
        '0YZ' => 'E02006597',
        '0ZR' => 'E02006597',
        '0ZS' => 'E02006597',
        '0ZT' => 'E02006597',
        '4AB' => 'E02006597',
        '4AE' => 'E02006597',
        '4AF' => 'E02006597',
        '4AG' => 'E02006597',
        '4AJ' => 'E02006597',
        '4AL' => 'E02006597',
        '4AR' => 'E02006597',
        '4AS' => 'E02006597',
        '4AT' => 'E02006597',
        '4AU' => 'E02006597',
        '4AW' => 'E02006597',
        '4AX' => 'E02006597',
        '4AY' => 'E02006597',
        '4AZ' => 'E02006597',
        '4BA' => 'E02006597',
        '4BB' => 'E02006597',
        '4BD' => 'E02006597',
        '4BE' => 'E02006597',
        '4BF' => 'E02006597',
        '4BG' => 'E02006597',
        '4BH' => 'E02006597',
        '4BJ' => 'E02006597',
        '4BL' => 'E02006597',
        '4BN' => 'E02006597',
        '4BP' => 'E02006597',
        '4BQ' => 'E02006597',
        '4BR' => 'E02006597',
        '4BS' => 'E02006597',
        '4BT' => 'E02006597',
        '4BU' => 'E02006597',
        '4BW' => 'E02006597',
        '4BX' => 'E02006597',
        '4BY' => 'E02006597',
        '4BZ' => 'E02006597',
        '4DA' => 'E02006597',
        '4DB' => 'E02006597',
        '4DD' => 'E02006597',
        '4DE' => 'E02006597',
        '9AA' => 'E02006597',
        '9AB' => 'E02006597',
        '9AD' => 'E02006597',
        '9AE' => 'E02006597',
        '9AF' => 'E02006597',
        '9AG' => 'E02006597',
        '9AH' => 'E02006597',
        '9AJ' => 'E02006597',
        '9AL' => 'E02006597',
        '9AN' => 'E02006597',
        '9AP' => 'E02006597',
        '9AQ' => 'E02006597',
        '9AR' => 'E02006597',
        '9AS' => 'E02006597',
        '9AT' => 'E02006597',
        '9AU' => 'E02006597',
        '9AW' => 'E02006597',
        '9AX' => 'E02006597',
        '9AY' => 'E02006597',
        '9AZ' => 'E02006597',
        '9BA' => 'E02006597',
        '9BB' => 'E02006592',
        '9BD' => 'E02006592',
        '9BE' => 'E02006592',
        '9BF' => 'E02006597',
        '9BG' => 'E02006592',
        '9BH' => 'E02006592',
        '9BJ' => 'E02006592',
        '9BL' => 'E02006592',
        '9BN' => 'E02006592',
        '9BP' => 'E02006592',
        '9BQ' => 'E02006592',
        '9BS' => 'E02006592',
        '9BT' => 'E02006597',
        '9BU' => 'E02006597',
        '9BW' => 'E02006592',
        '9BX' => 'E02006597',
        '9BY' => 'E02006597',
        '9BZ' => 'E02006592',
        '9DA' => 'E02006597',
        '9DB' => 'E02006597',
        '9DD' => 'E02006597',
        '9DE' => 'E02006597',
        '9DF' => 'E02006597',
        '9DG' => 'E02006597',
        '9DH' => 'E02006597',
        '9DJ' => 'E02006599',
        '9DL' => 'E02006597',
        '9DN' => 'E02006597',
        '9DP' => 'E02006597',
        '9DQ' => 'E02006597',
        '9DR' => 'E02006592',
        '9DS' => 'E02006597',
        '9DT' => 'E02006597',
        '9DU' => 'E02006597',
        '9DW' => 'E02006597',
        '9DX' => 'E02006597',
        '9DY' => 'E02006597',
        '9DZ' => 'E02006597',
        '9EA' => 'E02006599',
        '9EB' => 'E02006599',
        '9ED' => 'E02006599',
        '9EE' => 'E02006597',
        '9EF' => 'E02006597',
        '9EG' => 'E02006599',
        '9EH' => 'E02006597',
        '9EJ' => 'E02006597',
        '9EL' => 'E02006597',
        '9EN' => 'E02006597',
        '9EP' => 'E02006597',
        '9EQ' => 'E02006597',
        '9ER' => 'E02006597',
        '9ES' => 'E02006597',
        '9ET' => 'E02006597',
        '9EU' => 'E02006597',
        '9EW' => 'E02006597',
        '9EX' => 'E02006597',
        '9EY' => 'E02006597',
        '9EZ' => 'E02006597',
        '9FA' => 'E02006597',
        '9FB' => 'E02006597',
        '9FD' => 'E02006597',
        '9FE' => 'E02006597',
        '9FF' => 'E02006597',
        '9FG' => 'E02006597',
        '9FH' => 'E02006597',
        '9FJ' => 'E02006597',
        '9FL' => 'E02006597',
        '9FN' => 'E02006597',
        '9FP' => 'E02006597',
        '9FQ' => 'E02006597',
        '9FR' => 'E02006597',
        '9FS' => 'E02006597',
        '9FT' => 'E02006597',
        '9FU' => 'E02006597',
        '9FW' => 'E02006597',
        '9FX' => 'E02006597',
        '9FY' => 'E02006597',
        '9FZ' => 'E02006597',
        '9GA' => 'E02006597',
        '9GB' => 'E02006597',
        '9GD' => 'E02006597',
        '9GE' => 'E02006597',
        '9GF' => 'E02006597',
        '9GG' => 'E02006597',
        '9GH' => 'E02006597',
        '9GJ' => 'E02006597',
        '9GL' => 'E02006597',
        '9GN' => 'E02006597',
        '9GP' => 'E02006597',
        '9GQ' => 'E02006597',
        '9GR' => 'E02006597',
        '9GS' => 'E02006597',
        '9GT' => 'E02006597',
        '9GU' => 'E02006597',
        '9GW' => 'E02006597',
        '9GX' => 'E02006597',
        '9GY' => 'E02006597',
        '9GZ' => 'E02006597',
        '9HA' => 'E02006597',
        '9HB' => 'E02006597',
        '9HD' => 'E02006597',
        '9HE' => 'E02006597',
        '9HF' => 'E02006597',
        '9HG' => 'E02006597',
        '9HH' => 'E02006597',
        '9HJ' => 'E02006597',
        '9HL' => 'E02006597',
        '9HN' => 'E02006597',
        '9HP' => 'E02006597',
        '9HQ' => 'E02006597',
        '9HR' => 'E02006597',
        '9HS' => 'E02006597',
        '9HT' => 'E02006597',
        '9HU' => 'E02006597',
        '9HW' => 'E02006597',
        '9HX' => 'E02006597',
        '9HY' => 'E02006597',
        '9HZ' => 'E02006597',
        '9JA' => 'E02006597',
        '9JB' => 'E02006597',
        '9JD' => 'E02006597',
        '9JE' => 'E02006597',
        '9JF' => 'E02006597',
        '9JG' => 'E02006597',
        '9JH' => 'E02006597',
        '9JJ' => 'E02006597',
        '9JL' => 'E02006597',
        '9JN' => 'E02006597',
        '9JP' => 'E02006597',
        '9JQ' => 'E02006597',
        '9JR' => 'E02006597',
        '9JS' => 'E02006597',
        '9JT' => 'E02006597',
        '9JU' => 'E02006597',
        '9JW' => 'E02006597',
        '9JX' => 'E02006597',
        '9JY' => 'E02006597',
        '9JZ' => 'E02006597',
        '9LA' => 'E02006597',
        '9LB' => 'E02006597',
        '9LD' => 'E02006597',
        '9LE' => 'E02006597',
        '9LF' => 'E02006597',
        '9LG' => 'E02006597',
        '9LH' => 'E02006597',
        '9LJ' => 'E02006597',
        '9LL' => 'E02006597',
        '9LN' => 'E02006597',
        '9LP' => 'E02006597',
        '9LQ' => 'E02006597',
        '9LR' => 'E02006597',
        '9LS' => 'E02006597',
        '9LT' => 'E02006597',
        '9LU' => 'E02006597',
        '9LW' => 'E02006597',
        '9LX' => 'E02006597',
        '9LY' => 'E02006597',
        '9LZ' => 'E02006597',
        '9NA' => 'E02006597',
        '9NB' => 'E02006597',
        '9ND' => 'E02006597',
        '9NE' => 'E02006597',
        '9NF' => 'E02006597',
        '9NG' => 'E02006597',
        '9NH' => 'E02006597',
        '9NJ' => 'E02006597',
        '9NL' => 'E02006597',
        '9NN' => 'E02006597',
        '9NP' => 'E02006597',
        '9NQ' => 'E02006597',
        '9NR' => 'E02006597',
        '9NS' => 'E02006597',
        '9NT' => 'E02006597',
        '9NU' => 'E02006597',
        '9NW' => 'E02006597',
        '9NX' => 'E02006597',
        '9NY' => 'E02006597',
        '9NZ' => 'E02006597',
        '9PA' => 'E02006597',
        '9PB' => 'E02006597',
        '9PD' => 'E02006597',
        '9PE' => 'E02006597',
        '9PF' => 'E02006597',
        '9PG' => 'E02006597',
        '9PH' => 'E02006597',
        '9PJ' => 'E02006597',
        '9PL' => 'E02006597',
        '9PN' => 'E02006597',
        '9PP' => 'E02006597',
        '9PQ' => 'E02006597',
        '9PR' => 'E02006597',
        '9PS' => 'E02006597',
        '9PT' => 'E02006597',
        '9PU' => 'E02006597',
        '9PW' => 'E02006597',
        '9PX' => 'E02006597',
        '9PY' => 'E02006597',
        '9PZ' => 'E02006597',
        '9QA' => 'E02006597',
        '9QB' => 'E02006597',
        '9QD' => 'E02006597',
        '9QE' => 'E02006597',
        '9QF' => 'E02006597',
        '9QG' => 'E02006597',
        '9QH' => 'E02006597',
        '9QJ' => 'E02006597',
        '9QL' => 'E02006597',
        '9QN' => 'E02006597',
        '9QP' => 'E02006597',
        '9QQ' => 'E02006597',
        '9QR' => 'E02006597',
        '9QS' => 'E02006597',
        '9QT' => 'E02006597',
        '9QU' => 'E02006597',
        '9QW' => 'E02006597',
        '9QX' => 'E02006597',
        '9QY' => 'E02006597',
        '9QZ' => 'E02006597',
        '9RA' => 'E02006597',
        '9RB' => 'E02006597',
        '9RD' => 'E02006597',
        '9RE' => 'E02006597',
        '9RF' => 'E02006597',
        '9RG' => 'E02006597',
        '9RH' => 'E02006597',
        '9RJ' => 'E02006597',
        '9RL' => 'E02006597',
        '9RN' => 'E02006597',
        '9RP' => 'E02006597',
        '9RQ' => 'E02006597',
        '9RR' => 'E02006597',
        '9RS' => 'E02006597',
        '9RT' => 'E02006597',
        '9RU' => 'E02006597',
        '9RW' => 'E02006597',
        '9RX' => 'E02006597',
        '9RY' => 'E02006597',
        '9RZ' => 'E02006597',
        '9SA' => 'E02006597',
        '9SB' => 'E02006597',
        '9SD' => 'E02006597',
        '9SE' => 'E02006597',
        '9SF' => 'E02006597',
        '9SG' => 'E02006597',
        '9SH' => 'E02006597',
        '9SJ' => 'E02006597',
        '9SL' => 'E02006597',
        '9SN' => 'E02006597',
        '9SP' => 'E02006597',
        '9SQ' => 'E02006597',
        '9SR' => 'E02006597',
        '9SS' => 'E02006597',
        '9ST' => 'E02006597',
        '9SU' => 'E02006597',
        '9SW' => 'E02006597',
        '9SX' => 'E02006597',
        '9SY' => 'E02006597',
        '9SZ' => 'E02006597',
        '9TA' => 'E02006597',
        '9TB' => 'E02006597',
        '9TD' => 'E02006597',
        '9TE' => 'E02006597',
        '9TF' => 'E02006597',
        '9TG' => 'E02006597',
        '9TH' => 'E02006597',
        '9TJ' => 'E02006597',
        '9TL' => 'E02006597',
        '9TN' => 'E02006597',
        '9TP' => 'E02006597',
        '9TQ' => 'E02006597',
        '9TR' => 'E02006597',
        '9TS' => 'E02006597',
        '9TT' => 'E02006597',
        '9TU' => 'E02006597',
        '9TW' => 'E02006597',
        '9TX' => 'E02006597',
        '9TY' => 'E02006597',
        '9TZ' => 'E02006597',
        '9UA' => 'E02006597',
        '9UB' => 'E02006597',
        '9UD' => 'E02006597',
        '9UE' => 'E02006597',
        '9UF' => 'E02006597',
        '9UG' => 'E02006597',
        '9UH' => 'E02006597',
        '9UJ' => 'E02006597',
        '9UL' => 'E02006597',
        '9UN' => 'E02006597',
        '9UP' => 'E02006597',
        '9UQ' => 'E02006597',
        '9UR' => 'E02006597',
        '9US' => 'E02006597',
        '9UT' => 'E02006597',
        '9UU' => 'E02006597',
        '9UW' => 'E02006597',
        '9UX' => 'E02006597',
        '9UY' => 'E02006597',
        '9UZ' => 'E02006597',
        '9WA' => 'E02006597',
        '9WB' => 'E02006597',
        '9WD' => 'E02006597',
        '9WE' => 'E02006597',
        '9WF' => 'E02006597',
        '9WG' => 'E02006597',
        '9WH' => 'E02006597',
        '9WJ' => 'E02006597',
        '9WL' => 'E02006597',
        '9WN' => 'E02006597',
        '9WP' => 'E02006597',
        '9WQ' => 'E02006597',
        '9WR' => 'E02006597',
        '9WS' => 'E02006597',
        '9WT' => 'E02006597',
        '9WU' => 'E02006597',
        '9WW' => 'E02006597',
        '9WX' => 'E02006597',
        '9WY' => 'E02006597',
        '9WZ' => 'E02006597',
        '9XA' => 'E02006597',
        '9XB' => 'E02006597',
        '9XD' => 'E02006597',
        '9XE' => 'E02006597',
        '9XF' => 'E02006597',
        '9XG' => 'E02006597',
        '9XH' => 'E02006597',
        '9XJ' => 'E02006597',
        '9XL' => 'E02006597',
        '9XN' => 'E02006597',
        '9XP' => 'E02006597',
        '9XQ' => 'E02006597',
        '9XR' => 'E02006597',
        '9XT' => 'E02006597',
        '9XX' => 'E02006597',
        '9XY' => 'E02006597',
        '9XZ' => 'E02006597',
        '9YA' => 'E02006597',
        '9YB' => 'E02006597',
        '9YD' => 'E02006597',
        '9YE' => 'E02006597',
        '9YF' => 'E02006597',
        '9YG' => 'E02006597',
        '9YH' => 'E02006597',
        '9YJ' => 'E02006597',
        '9YL' => 'E02006597',
        '9YN' => 'E02006597',
        '9YP' => 'E02006597',
        '9YQ' => 'E02006597',
        '9YR' => 'E02006597',
        '9YS' => 'E02006597',
        '9YT' => 'E02006597',
        '9YU' => 'E02006597',
        '9YW' => 'E02006597',
        '9YX' => 'E02006597',
        '9YY' => 'E02006597',
        '9YZ' => 'E02006597',
        '9ZD' => 'E02006597',
        '9ZE' => 'E02006597',
        '9ZF' => 'E02006597',
        '9ZG' => 'E02006597',
        '9ZH' => 'E02006597',
        '9ZJ' => 'E02006597',
        '9ZL' => 'E02006597',
        '9ZN' => 'E02006597',
        '9ZP' => 'E02006597',
        '9ZQ' => 'E02006597',
        '9ZR' => 'E02006597',
        '9ZS' => 'E02006597',
        '9ZT' => 'E02006597',
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
