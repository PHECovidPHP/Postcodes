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
final class PL21
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02004193',
        '0AB' => 'E02004193',
        '0AD' => 'E02004193',
        '0AE' => 'E02004193',
        '0AF' => 'E02004193',
        '0AG' => 'E02004193',
        '0AH' => 'E02004193',
        '0AJ' => 'E02004193',
        '0AL' => 'E02004193',
        '0AN' => 'E02004193',
        '0AP' => 'E02004193',
        '0AQ' => 'E02004193',
        '0AR' => 'E02004193',
        '0AS' => 'E02004193',
        '0AT' => 'E02004193',
        '0AU' => 'E02004193',
        '0AW' => 'E02004193',
        '0AX' => 'E02004193',
        '0AY' => 'E02004193',
        '0AZ' => 'E02004193',
        '0BA' => 'E02004193',
        '0BB' => 'E02004193',
        '0BD' => 'E02004193',
        '0BE' => 'E02004193',
        '0BG' => 'E02004193',
        '0BH' => 'E02004193',
        '0BJ' => 'E02004193',
        '0BL' => 'E02004193',
        '0BN' => 'E02004193',
        '0BP' => 'E02004193',
        '0BQ' => 'E02004193',
        '0BS' => 'E02004193',
        '0BT' => 'E02004193',
        '0BU' => 'E02004193',
        '0BW' => 'E02004193',
        '0BX' => 'E02004193',
        '0BY' => 'E02004193',
        '0BZ' => 'E02004193',
        '0DA' => 'E02004190',
        '0DB' => 'E02004193',
        '0DD' => 'E02004193',
        '0DE' => 'E02004193',
        '0DF' => 'E02004193',
        '0DG' => 'E02004193',
        '0DH' => 'E02004190',
        '0DJ' => 'E02004190',
        '0DL' => 'E02004190',
        '0DN' => 'E02004190',
        '0DP' => 'E02004190',
        '0DQ' => 'E02004190',
        '0DR' => 'E02004190',
        '0DS' => 'E02004190',
        '0DT' => 'E02004190',
        '0DU' => 'E02004190',
        '0DW' => 'E02004190',
        '0DX' => 'E02004190',
        '0DY' => 'E02004190',
        '0DZ' => 'E02004190',
        '0EA' => 'E02004190',
        '0EB' => 'E02004190',
        '0ED' => 'E02004190',
        '0EE' => 'E02004190',
        '0EF' => 'E02004190',
        '0EG' => 'E02004190',
        '0EH' => 'E02004190',
        '0EJ' => 'E02004190',
        '0EL' => 'E02004190',
        '0EN' => 'E02004190',
        '0EP' => 'E02004190',
        '0EQ' => 'E02004190',
        '0ER' => 'E02004190',
        '0ES' => 'E02004190',
        '0ET' => 'E02004190',
        '0EU' => 'E02004190',
        '0EW' => 'E02004190',
        '0EX' => 'E02004190',
        '0EY' => 'E02004193',
        '0EZ' => 'E02004190',
        '0FA' => 'E02004190',
        '0FB' => 'E02004193',
        '0FD' => 'E02004193',
        '0FE' => 'E02004193',
        '0FF' => 'E02004196',
        '0FG' => 'E02004193',
        '0FH' => 'E02004193',
        '0FJ' => 'E02004193',
        '0FL' => 'E02004193',
        '0FN' => 'E02004193',
        '0FP' => 'E02004190',
        '0FQ' => 'E02004193',
        '0FR' => 'E02004196',
        '0FS' => 'E02004196',
        '0FT' => 'E02004193',
        '0FU' => 'E02004196',
        '0FW' => 'E02004196',
        '0FX' => 'E02004196',
        '0FY' => 'E02004196',
        '0FZ' => 'E02004196',
        '0GA' => 'E02004193',
        '0GB' => 'E02004190',
        '0GD' => 'E02004190',
        '0GE' => 'E02004190',
        '0GF' => 'E02004190',
        '0GH' => 'E02004190',
        '0GJ' => 'E02004193',
        '0GL' => 'E02004190',
        '0GN' => 'E02004190',
        '0GP' => 'E02004190',
        '0GQ' => 'E02004193',
        '0GR' => 'E02004190',
        '0GS' => 'E02004193',
        '0GT' => 'E02004190',
        '0GU' => 'E02004190',
        '0GW' => 'E02004190',
        '0GX' => 'E02004190',
        '0GY' => 'E02004193',
        '0GZ' => 'E02004190',
        '0HA' => 'E02004190',
        '0HB' => 'E02004190',
        '0HD' => 'E02004190',
        '0HE' => 'E02004190',
        '0HF' => 'E02004193',
        '0HG' => 'E02004190',
        '0HH' => 'E02004190',
        '0HJ' => 'E02004190',
        '0HL' => 'E02004196',
        '0HN' => 'E02004190',
        '0HP' => 'E02004190',
        '0HQ' => 'E02004190',
        '0HR' => 'E02004190',
        '0HS' => 'E02004193',
        '0HT' => 'E02004193',
        '0HU' => 'E02004193',
        '0HW' => 'E02004190',
        '0HX' => 'E02004193',
        '0HY' => 'E02004193',
        '0HZ' => 'E02004193',
        '0JA' => 'E02004193',
        '0JB' => 'E02004193',
        '0JD' => 'E02004190',
        '0JE' => 'E02004190',
        '0JF' => 'E02004190',
        '0JG' => 'E02004190',
        '0JH' => 'E02004190',
        '0JJ' => 'E02004190',
        '0JL' => 'E02004190',
        '0JN' => 'E02004193',
        '0JP' => 'E02004193',
        '0JQ' => 'E02004190',
        '0JR' => 'E02004193',
        '0JS' => 'E02004193',
        '0JT' => 'E02004193',
        '0JU' => 'E02004193',
        '0JW' => 'E02004193',
        '0JX' => 'E02004193',
        '0JY' => 'E02004193',
        '0JZ' => 'E02004193',
        '0LA' => 'E02004190',
        '0LB' => 'E02004196',
        '0LD' => 'E02004190',
        '0LE' => 'E02004190',
        '0LF' => 'E02004190',
        '0LG' => 'E02004196',
        '0LH' => 'E02004196',
        '0LJ' => 'E02004196',
        '0LL' => 'E02004190',
        '0LN' => 'E02004196',
        '0LP' => 'E02004196',
        '0LQ' => 'E02004196',
        '0LR' => 'E02004190',
        '0LS' => 'E02004193',
        '0LT' => 'E02004193',
        '0LU' => 'E02004196',
        '0LW' => 'E02004196',
        '0LX' => 'E02004196',
        '0LY' => 'E02004196',
        '0LZ' => 'E02004196',
        '0NA' => 'E02004193',
        '0NB' => 'E02004193',
        '0ND' => 'E02004193',
        '0NE' => 'E02004190',
        '0NF' => 'E02004190',
        '0NG' => 'E02004190',
        '0NH' => 'E02004190',
        '0NJ' => 'E02004190',
        '0NL' => 'E02004190',
        '0NN' => 'E02004190',
        '0NP' => 'E02004190',
        '0NQ' => 'E02004196',
        '0NR' => 'E02004190',
        '0NS' => 'E02004190',
        '0NT' => 'E02004190',
        '0NU' => 'E02004196',
        '0NW' => 'E02004190',
        '0NX' => 'E02004190',
        '0NY' => 'E02004190',
        '0NZ' => 'E02004190',
        '0PA' => 'E02004190',
        '0PB' => 'E02004190',
        '0PD' => 'E02004190',
        '0PE' => 'E02004190',
        '0PF' => 'E02004190',
        '0PG' => 'E02004190',
        '0PH' => 'E02004190',
        '0PJ' => 'E02004193',
        '0PL' => 'E02004193',
        '0PN' => 'E02004193',
        '0PP' => 'E02004193',
        '0PQ' => 'E02004190',
        '0PR' => 'E02004196',
        '0PS' => 'E02004196',
        '0PT' => 'E02004196',
        '0PU' => 'E02004196',
        '0PW' => 'E02004193',
        '0PX' => 'E02004196',
        '0PY' => 'E02004196',
        '0PZ' => 'E02004196',
        '0QA' => 'E02004196',
        '0QB' => 'E02004196',
        '0QD' => 'E02004196',
        '0QE' => 'E02004196',
        '0QF' => 'E02004196',
        '0QG' => 'E02004196',
        '0QH' => 'E02004196',
        '0QJ' => 'E02004196',
        '0QL' => 'E02004196',
        '0QN' => 'E02004196',
        '0QP' => 'E02004196',
        '0QQ' => 'E02004196',
        '0QR' => 'E02004196',
        '0QS' => 'E02004196',
        '0QT' => 'E02004196',
        '0QU' => 'E02004196',
        '0QW' => 'E02004196',
        '0QX' => 'E02004196',
        '0QY' => 'E02004196',
        '0QZ' => 'E02004196',
        '0RA' => 'E02004196',
        '0RB' => 'E02004196',
        '0RD' => 'E02004196',
        '0RE' => 'E02004196',
        '0RF' => 'E02004196',
        '0RG' => 'E02004196',
        '0RH' => 'E02004196',
        '0RJ' => 'E02004196',
        '0RL' => 'E02004196',
        '0RN' => 'E02004196',
        '0RP' => 'E02004196',
        '0RQ' => 'E02004196',
        '0RR' => 'E02004196',
        '0RS' => 'E02004196',
        '0RT' => 'E02004196',
        '0RU' => 'E02004193',
        '0RW' => 'E02004196',
        '0RX' => 'E02004193',
        '0RY' => 'E02004196',
        '0RZ' => 'E02004196',
        '0SA' => 'E02004196',
        '0SB' => 'E02004196',
        '0SD' => 'E02004196',
        '0SE' => 'E02004196',
        '0SF' => 'E02004194',
        '0SG' => 'E02004194',
        '0SH' => 'E02004196',
        '0SJ' => 'E02004196',
        '0SL' => 'E02004193',
        '0SN' => 'E02004196',
        '0SP' => 'E02004196',
        '0SQ' => 'E02004196',
        '0SR' => 'E02004196',
        '0SS' => 'E02004196',
        '0ST' => 'E02004196',
        '0SU' => 'E02004196',
        '0SW' => 'E02004193',
        '0SX' => 'E02004196',
        '0SY' => 'E02004193',
        '0SZ' => 'E02004193',
        '0TA' => 'E02004196',
        '0TB' => 'E02004196',
        '0TD' => 'E02004196',
        '0TE' => 'E02004196',
        '0TF' => 'E02004196',
        '0TG' => 'E02004196',
        '0TH' => 'E02004196',
        '0TJ' => 'E02004196',
        '0TL' => 'E02004196',
        '0TN' => 'E02004193',
        '0TP' => 'E02004196',
        '0TQ' => 'E02004196',
        '0TR' => 'E02004193',
        '0TS' => 'E02004196',
        '0TT' => 'E02004196',
        '0TU' => 'E02004196',
        '0TW' => 'E02004196',
        '0TX' => 'E02004196',
        '0TY' => 'E02004196',
        '0TZ' => 'E02004190',
        '0UA' => 'E02004193',
        '0UB' => 'E02004193',
        '0UD' => 'E02004193',
        '0UE' => 'E02004193',
        '0UF' => 'E02004193',
        '0UG' => 'E02004193',
        '0UH' => 'E02004193',
        '0UJ' => 'E02004193',
        '0UL' => 'E02004193',
        '0UN' => 'E02004193',
        '0UP' => 'E02004193',
        '0UQ' => 'E02004193',
        '0UR' => 'E02004193',
        '0US' => 'E02004193',
        '0UT' => 'E02004196',
        '0UW' => 'E02004193',
        '0UX' => 'E02004193',
        '0UY' => 'E02004193',
        '0WA' => 'E02004193',
        '0WB' => 'E02004193',
        '0WD' => 'E02004193',
        '0WE' => 'E02004193',
        '0WF' => 'E02004193',
        '0WG' => 'E02004193',
        '0WH' => 'E02004193',
        '0WJ' => 'E02004193',
        '0WS' => 'E02004193',
        '0WT' => 'E02004193',
        '0WU' => 'E02004193',
        '0WW' => 'E02004193',
        '0WX' => 'E02004193',
        '0WY' => 'E02004193',
        '0WZ' => 'E02004193',
        '0XA' => 'E02004193',
        '0XB' => 'E02004193',
        '0XF' => 'E02004190',
        '0XG' => 'E02004190',
        '0XH' => 'E02004193',
        '0XJ' => 'E02004190',
        '0XL' => 'E02004190',
        '0XN' => 'E02004190',
        '0XP' => 'E02004190',
        '0XQ' => 'E02004190',
        '0XR' => 'E02004190',
        '0XS' => 'E02004190',
        '0XT' => 'E02004193',
        '0XU' => 'E02004193',
        '0XW' => 'E02004190',
        '0XX' => 'E02004196',
        '0XY' => 'E02004196',
        '0XZ' => 'E02004193',
        '0YA' => 'E02004193',
        '0YB' => 'E02004193',
        '0YD' => 'E02004193',
        '0YE' => 'E02004193',
        '0YF' => 'E02004193',
        '0YG' => 'E02004193',
        '0YH' => 'E02004193',
        '0YJ' => 'E02004193',
        '0YL' => 'E02004193',
        '0YN' => 'E02004193',
        '0YP' => 'E02004193',
        '0YQ' => 'E02004193',
        '0YR' => 'E02004193',
        '0YS' => 'E02004193',
        '0YT' => 'E02004190',
        '0YU' => 'E02004193',
        '0YW' => 'E02004193',
        '0YX' => 'E02004190',
        '0YY' => 'E02004193',
        '0YZ' => 'E02004193',
        '0ZJ' => 'E02004193',
        '0ZL' => 'E02004193',
        '0ZN' => 'E02004193',
        '0ZQ' => 'E02004193',
        '0ZR' => 'E02004193',
        '0ZW' => 'E02004193',
        '0ZX' => 'E02004193',
        '1AD' => 'E02004193',
        '1AF' => 'E02004193',
        '1AG' => 'E02004193',
        '1AJ' => 'E02004193',
        '1AL' => 'E02004193',
        '1AN' => 'E02004193',
        '1AP' => 'E02004193',
        '1AQ' => 'E02004193',
        '1AR' => 'E02004193',
        '1AS' => 'E02004193',
        '1AT' => 'E02004193',
        '1AU' => 'E02004193',
        '1AW' => 'E02004193',
        '1AX' => 'E02004193',
        '1AY' => 'E02004193',
        '1AZ' => 'E02004193',
        '9AA' => 'E02004193',
        '9AB' => 'E02004193',
        '9AD' => 'E02004193',
        '9AE' => 'E02004193',
        '9AF' => 'E02004193',
        '9AG' => 'E02004193',
        '9AH' => 'E02004193',
        '9AJ' => 'E02004193',
        '9AL' => 'E02004193',
        '9AN' => 'E02004193',
        '9AP' => 'E02004193',
        '9AQ' => 'E02004193',
        '9AR' => 'E02004193',
        '9AS' => 'E02004193',
        '9AT' => 'E02004193',
        '9AU' => 'E02004193',
        '9AW' => 'E02004193',
        '9AX' => 'E02004193',
        '9AY' => 'E02004193',
        '9AZ' => 'E02004193',
        '9BA' => 'E02004193',
        '9BB' => 'E02004193',
        '9BD' => 'E02004193',
        '9BE' => 'E02004193',
        '9BG' => 'E02004193',
        '9BH' => 'E02004193',
        '9BJ' => 'E02004193',
        '9BL' => 'E02004193',
        '9BN' => 'E02004193',
        '9BP' => 'E02004193',
        '9BQ' => 'E02004193',
        '9BS' => 'E02004193',
        '9BT' => 'E02004193',
        '9BU' => 'E02004193',
        '9BW' => 'E02004193',
        '9BX' => 'E02004193',
        '9BY' => 'E02004193',
        '9BZ' => 'E02004193',
        '9DA' => 'E02004193',
        '9DB' => 'E02004193',
        '9DD' => 'E02004193',
        '9DE' => 'E02004193',
        '9DF' => 'E02004193',
        '9DG' => 'E02004193',
        '9DH' => 'E02004193',
        '9DJ' => 'E02004193',
        '9DL' => 'E02004193',
        '9DN' => 'E02004193',
        '9DP' => 'E02004193',
        '9DQ' => 'E02004196',
        '9DR' => 'E02004193',
        '9DS' => 'E02004193',
        '9DT' => 'E02004193',
        '9DU' => 'E02004193',
        '9DW' => 'E02004193',
        '9DX' => 'E02004189',
        '9DY' => 'E02004189',
        '9DZ' => 'E02004189',
        '9EA' => 'E02004189',
        '9EB' => 'E02004189',
        '9ED' => 'E02004189',
        '9EE' => 'E02004189',
        '9EF' => 'E02004189',
        '9EG' => 'E02004189',
        '9EH' => 'E02004193',
        '9EJ' => 'E02004189',
        '9EL' => 'E02004189',
        '9EN' => 'E02004196',
        '9EP' => 'E02004196',
        '9EQ' => 'E02004189',
        '9ER' => 'E02004196',
        '9ES' => 'E02004193',
        '9ET' => 'E02004190',
        '9EU' => 'E02004189',
        '9EW' => 'E02004196',
        '9EX' => 'E02004189',
        '9EY' => 'E02004193',
        '9EZ' => 'E02004196',
        '9FA' => 'E02004193',
        '9FB' => 'E02004193',
        '9FD' => 'E02004193',
        '9FE' => 'E02004193',
        '9FF' => 'E02004193',
        '9FG' => 'E02004189',
        '9FH' => 'E02004189',
        '9FJ' => 'E02004189',
        '9FL' => 'E02004189',
        '9FN' => 'E02004193',
        '9FQ' => 'E02004196',
        '9FR' => 'E02004196',
        '9FS' => 'E02004196',
        '9FT' => 'E02004193',
        '9FU' => 'E02004193',
        '9FW' => 'E02004193',
        '9FX' => 'E02004193',
        '9FY' => 'E02004193',
        '9FZ' => 'E02004193',
        '9GA' => 'E02004196',
        '9GB' => 'E02004196',
        '9GD' => 'E02004196',
        '9GE' => 'E02004196',
        '9GG' => 'E02004196',
        '9GH' => 'E02004193',
        '9GL' => 'E02004196',
        '9GN' => 'E02004196',
        '9GP' => 'E02004196',
        '9GS' => 'E02004196',
        '9GT' => 'E02004189',
        '9GX' => 'E02004193',
        '9HA' => 'E02004193',
        '9HB' => 'E02004193',
        '9HD' => 'E02004193',
        '9HE' => 'E02004193',
        '9HG' => 'E02004193',
        '9HH' => 'E02004193',
        '9HJ' => 'E02004193',
        '9HL' => 'E02004196',
        '9HN' => 'E02004196',
        '9HP' => 'E02004190',
        '9HQ' => 'E02004193',
        '9HR' => 'E02004190',
        '9HS' => 'E02004190',
        '9HT' => 'E02004190',
        '9HU' => 'E02004190',
        '9HW' => 'E02004196',
        '9HX' => 'E02004190',
        '9HY' => 'E02004193',
        '9HZ' => 'E02004193',
        '9JA' => 'E02004193',
        '9JB' => 'E02004193',
        '9JD' => 'E02004193',
        '9JE' => 'E02004193',
        '9JF' => 'E02004193',
        '9JG' => 'E02004193',
        '9JH' => 'E02004193',
        '9JJ' => 'E02004193',
        '9JL' => 'E02004196',
        '9JN' => 'E02004196',
        '9JP' => 'E02004196',
        '9JQ' => 'E02004193',
        '9JR' => 'E02004196',
        '9JS' => 'E02004196',
        '9JT' => 'E02004196',
        '9JU' => 'E02004196',
        '9JW' => 'E02004196',
        '9JX' => 'E02004196',
        '9JY' => 'E02004196',
        '9JZ' => 'E02004196',
        '9LA' => 'E02004196',
        '9LB' => 'E02004196',
        '9LD' => 'E02004196',
        '9LE' => 'E02004196',
        '9LF' => 'E02004196',
        '9LG' => 'E02004193',
        '9LH' => 'E02004196',
        '9LJ' => 'E02004193',
        '9LL' => 'E02004196',
        '9LN' => 'E02004196',
        '9LP' => 'E02004196',
        '9LQ' => 'E02004196',
        '9LR' => 'E02004196',
        '9LS' => 'E02004196',
        '9LT' => 'E02004196',
        '9LU' => 'E02004196',
        '9LX' => 'E02004196',
        '9LY' => 'E02004196',
        '9LZ' => 'E02004196',
        '9NA' => 'E02004196',
        '9NB' => 'E02004196',
        '9ND' => 'E02004196',
        '9NE' => 'E02004196',
        '9NF' => 'E02004196',
        '9NG' => 'E02004196',
        '9NH' => 'E02004196',
        '9NJ' => 'E02004196',
        '9NL' => 'E02004196',
        '9NN' => 'E02004196',
        '9NP' => 'E02004196',
        '9NQ' => 'E02004196',
        '9NR' => 'E02004196',
        '9NS' => 'E02004196',
        '9NT' => 'E02004196',
        '9NU' => 'E02004196',
        '9NW' => 'E02004196',
        '9NX' => 'E02004196',
        '9NY' => 'E02004196',
        '9NZ' => 'E02004196',
        '9PA' => 'E02004193',
        '9PB' => 'E02004196',
        '9PD' => 'E02004193',
        '9PE' => 'E02004196',
        '9PF' => 'E02004193',
        '9PG' => 'E02004193',
        '9PH' => 'E02004190',
        '9PJ' => 'E02004189',
        '9PL' => 'E02004190',
        '9PN' => 'E02004189',
        '9PP' => 'E02004190',
        '9PQ' => 'E02004193',
        '9PR' => 'E02004193',
        '9PS' => 'E02004193',
        '9PT' => 'E02004193',
        '9PU' => 'E02004190',
        '9PW' => 'E02004190',
        '9PX' => 'E02004190',
        '9PY' => 'E02004190',
        '9PZ' => 'E02004190',
        '9QA' => 'E02004190',
        '9QB' => 'E02004190',
        '9QD' => 'E02004190',
        '9QE' => 'E02004190',
        '9QF' => 'E02004190',
        '9QG' => 'E02004190',
        '9QH' => 'E02004190',
        '9QJ' => 'E02004190',
        '9QL' => 'E02004190',
        '9QN' => 'E02004190',
        '9QP' => 'E02004190',
        '9QQ' => 'E02004190',
        '9QR' => 'E02004190',
        '9QS' => 'E02004190',
        '9QT' => 'E02004190',
        '9QU' => 'E02004190',
        '9QW' => 'E02004190',
        '9QX' => 'E02004190',
        '9QY' => 'E02004190',
        '9QZ' => 'E02004190',
        '9RA' => 'E02004190',
        '9RB' => 'E02004190',
        '9RD' => 'E02004190',
        '9RE' => 'E02004190',
        '9RF' => 'E02004190',
        '9RG' => 'E02004190',
        '9RH' => 'E02004190',
        '9RJ' => 'E02004193',
        '9RL' => 'E02004196',
        '9RN' => 'E02004193',
        '9RP' => 'E02004190',
        '9RQ' => 'E02004190',
        '9RR' => 'E02004190',
        '9RS' => 'E02004190',
        '9RT' => 'E02004190',
        '9RU' => 'E02004190',
        '9RW' => 'E02004193',
        '9RX' => 'E02004190',
        '9RY' => 'E02004190',
        '9RZ' => 'E02004190',
        '9SA' => 'E02004190',
        '9SB' => 'E02004190',
        '9SD' => 'E02004190',
        '9SE' => 'E02004190',
        '9SF' => 'E02004190',
        '9SG' => 'E02004190',
        '9SH' => 'E02004190',
        '9SJ' => 'E02004190',
        '9SL' => 'E02004190',
        '9SN' => 'E02004190',
        '9SP' => 'E02004190',
        '9SQ' => 'E02004190',
        '9SR' => 'E02004190',
        '9SS' => 'E02004190',
        '9ST' => 'E02004190',
        '9SU' => 'E02004190',
        '9SW' => 'E02004190',
        '9SX' => 'E02004190',
        '9SY' => 'E02004190',
        '9SZ' => 'E02004190',
        '9TA' => 'E02004190',
        '9TD' => 'E02004193',
        '9TE' => 'E02004193',
        '9TF' => 'E02004193',
        '9TG' => 'E02004193',
        '9TH' => 'E02004193',
        '9TJ' => 'E02004193',
        '9TL' => 'E02004193',
        '9TN' => 'E02004193',
        '9TP' => 'E02004193',
        '9TQ' => 'E02004193',
        '9TR' => 'E02004193',
        '9TS' => 'E02004193',
        '9TT' => 'E02004193',
        '9TU' => 'E02004193',
        '9TW' => 'E02004193',
        '9TX' => 'E02004193',
        '9TY' => 'E02004193',
        '9TZ' => 'E02004193',
        '9UA' => 'E02004193',
        '9UB' => 'E02004193',
        '9UD' => 'E02004193',
        '9UE' => 'E02004193',
        '9UF' => 'E02004193',
        '9UG' => 'E02004193',
        '9UH' => 'E02004196',
        '9UJ' => 'E02004193',
        '9UL' => 'E02004193',
        '9UN' => 'E02004193',
        '9UP' => 'E02004193',
        '9UQ' => 'E02004193',
        '9UR' => 'E02004193',
        '9UT' => 'E02004193',
        '9UU' => 'E02004193',
        '9UW' => 'E02004193',
        '9UX' => 'E02004193',
        '9UY' => 'E02004193',
        '9UZ' => 'E02004193',
        '9WA' => 'E02004193',
        '9WD' => 'E02004193',
        '9WS' => 'E02004193',
        '9WT' => 'E02004193',
        '9WU' => 'E02004193',
        '9WW' => 'E02004193',
        '9WX' => 'E02004193',
        '9WY' => 'E02004193',
        '9WZ' => 'E02004193',
        '9XA' => 'E02004193',
        '9XB' => 'E02004193',
        '9XD' => 'E02004193',
        '9XE' => 'E02004193',
        '9XG' => 'E02004193',
        '9XH' => 'E02004193',
        '9XJ' => 'E02004193',
        '9XL' => 'E02004193',
        '9XN' => 'E02004193',
        '9XP' => 'E02004193',
        '9XQ' => 'E02004193',
        '9XR' => 'E02004193',
        '9XS' => 'E02004193',
        '9XT' => 'E02004193',
        '9XU' => 'E02004193',
        '9XW' => 'E02004193',
        '9XX' => 'E02004193',
        '9XY' => 'E02004193',
        '9XZ' => 'E02004193',
        '9YA' => 'E02004193',
        '9YB' => 'E02004193',
        '9YD' => 'E02004193',
        '9YE' => 'E02004193',
        '9YF' => 'E02004193',
        '9YS' => 'E02004193',
        '9YT' => 'E02004193',
        '9YX' => 'E02004193',
        '9YY' => 'E02004193',
        '9YZ' => 'E02004193',
        '9ZH' => 'E02004193',
        '9ZJ' => 'E02004193',
        '9ZN' => 'E02004193',
        '9ZP' => 'E02004193',
        '9ZQ' => 'E02004193',
        '9ZR' => 'E02004193',
        '9ZS' => 'E02004193',
        '9ZX' => 'E02004193',
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
