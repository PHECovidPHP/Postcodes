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
final class AL6
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02004887',
        '0AB' => 'E02004887',
        '0AD' => 'E02004980',
        '0AE' => 'E02004980',
        '0AF' => 'E02004980',
        '0AG' => 'E02004980',
        '0AH' => 'E02004980',
        '0AJ' => 'E02004980',
        '0AL' => 'E02004980',
        '0AN' => 'E02004980',
        '0AP' => 'E02004980',
        '0AQ' => 'E02004980',
        '0AR' => 'E02004980',
        '0AS' => 'E02004980',
        '0AT' => 'E02004980',
        '0AU' => 'E02004980',
        '0AW' => 'E02004980',
        '0AX' => 'E02004980',
        '0AY' => 'E02004980',
        '0AZ' => 'E02004980',
        '0BA' => 'E02004980',
        '0BB' => 'E02004980',
        '0BD' => 'E02004980',
        '0BE' => 'E02004980',
        '0BF' => 'E02004980',
        '0BG' => 'E02004980',
        '0BH' => 'E02004980',
        '0BJ' => 'E02004981',
        '0BL' => 'E02004981',
        '0BN' => 'E02004980',
        '0BP' => 'E02004980',
        '0BQ' => 'E02004980',
        '0BS' => 'E02004982',
        '0BT' => 'E02004980',
        '0BU' => 'E02004980',
        '0BW' => 'E02004887',
        '0BX' => 'E02004980',
        '0BY' => 'E02004980',
        '0BZ' => 'E02004887',
        '0DA' => 'E02004980',
        '0DB' => 'E02004980',
        '0DD' => 'E02004980',
        '0DE' => 'E02004980',
        '0DF' => 'E02004980',
        '0DG' => 'E02004980',
        '0DH' => 'E02004980',
        '0DJ' => 'E02004980',
        '0DL' => 'E02004980',
        '0DN' => 'E02004980',
        '0DP' => 'E02004986',
        '0DQ' => 'E02004980',
        '0DR' => 'E02004980',
        '0DS' => 'E02004980',
        '0DT' => 'E02004980',
        '0DU' => 'E02004980',
        '0DW' => 'E02004980',
        '0DX' => 'E02004980',
        '0DY' => 'E02004980',
        '0DZ' => 'E02004980',
        '0EA' => 'E02004980',
        '0EB' => 'E02004980',
        '0ED' => 'E02004980',
        '0EE' => 'E02004980',
        '0EF' => 'E02004980',
        '0EG' => 'E02004980',
        '0EH' => 'E02004980',
        '0EJ' => 'E02004980',
        '0EL' => 'E02004980',
        '0EN' => 'E02004980',
        '0EP' => 'E02004980',
        '0EQ' => 'E02004980',
        '0ER' => 'E02004980',
        '0ES' => 'E02004980',
        '0ET' => 'E02004980',
        '0EU' => 'E02004980',
        '0EW' => 'E02004980',
        '0EX' => 'E02004986',
        '0EY' => 'E02004980',
        '0EZ' => 'E02004980',
        '0FA' => 'E02004986',
        '0FB' => 'E02004986',
        '0FD' => 'E02004887',
        '0FE' => 'E02004980',
        '0FF' => 'E02004887',
        '0FG' => 'E02004887',
        '0FH' => 'E02004887',
        '0FJ' => 'E02004981',
        '0FL' => 'E02004879',
        '0GD' => 'E02004980',
        '0GY' => 'E02004986',
        '0HA' => 'E02004879',
        '0HB' => 'E02004980',
        '0HD' => 'E02004980',
        '0HE' => 'E02004879',
        '0HF' => 'E02004887',
        '0HG' => 'E02004887',
        '0HH' => 'E02004887',
        '0HJ' => 'E02004887',
        '0HL' => 'E02004887',
        '0HN' => 'E02004887',
        '0HP' => 'E02004887',
        '0HQ' => 'E02004887',
        '0HR' => 'E02004986',
        '0HS' => 'E02004980',
        '0HT' => 'E02004887',
        '0HU' => 'E02004980',
        '0HW' => 'E02004879',
        '0HY' => 'E02004887',
        '0HZ' => 'E02004887',
        '0JA' => 'E02004986',
        '0JB' => 'E02004887',
        '0JD' => 'E02004887',
        '0JE' => 'E02004984',
        '0JF' => 'E02004887',
        '0JG' => 'E02004887',
        '0JH' => 'E02004980',
        '0JJ' => 'E02004887',
        '0JL' => 'E02004887',
        '0JN' => 'E02004887',
        '0JP' => 'E02004887',
        '0JQ' => 'E02004887',
        '0JR' => 'E02004887',
        '0JS' => 'E02004887',
        '0JT' => 'E02004887',
        '0JU' => 'E02004887',
        '0JW' => 'E02004887',
        '0JX' => 'E02004887',
        '0JY' => 'E02004887',
        '0JZ' => 'E02004887',
        '0LA' => 'E02004887',
        '0LB' => 'E02004887',
        '0LD' => 'E02004887',
        '0LE' => 'E02004887',
        '0LF' => 'E02004887',
        '0LG' => 'E02004887',
        '0LH' => 'E02004887',
        '0LJ' => 'E02004887',
        '0LL' => 'E02004887',
        '0LN' => 'E02004887',
        '0LP' => 'E02004887',
        '0LQ' => 'E02004887',
        '0LR' => 'E02004887',
        '0LS' => 'E02004887',
        '0LT' => 'E02004887',
        '0LU' => 'E02004887',
        '0LW' => 'E02004887',
        '0LX' => 'E02004887',
        '0LY' => 'E02004887',
        '0LZ' => 'E02004887',
        '0NA' => 'E02004879',
        '0NB' => 'E02004879',
        '0ND' => 'E02004986',
        '0NE' => 'E02004980',
        '0NF' => 'E02004980',
        '0NG' => 'E02004980',
        '0NH' => 'E02004879',
        '0NJ' => 'E02004879',
        '0NL' => 'E02004879',
        '0NN' => 'E02004879',
        '0NP' => 'E02004887',
        '0NQ' => 'E02004879',
        '0NR' => 'E02004887',
        '0NS' => 'E02004887',
        '0NT' => 'E02004887',
        '0NU' => 'E02004887',
        '0NW' => 'E02004887',
        '0NX' => 'E02004887',
        '0NY' => 'E02004887',
        '0NZ' => 'E02004887',
        '0PA' => 'E02004887',
        '0PB' => 'E02004887',
        '0PD' => 'E02004887',
        '0PE' => 'E02004879',
        '0PF' => 'E02004980',
        '0PG' => 'E02004923',
        '0PH' => 'E02004980',
        '0PJ' => 'E02004980',
        '0PL' => 'E02004981',
        '0PN' => 'E02004980',
        '0PP' => 'E02004980',
        '0PQ' => 'E02004923',
        '0PR' => 'E02004980',
        '0PS' => 'E02004980',
        '0PT' => 'E02004980',
        '0PU' => 'E02004980',
        '0PW' => 'E02004980',
        '0PX' => 'E02004980',
        '0PY' => 'E02004980',
        '0PZ' => 'E02004980',
        '0QA' => 'E02004923',
        '0QB' => 'E02004980',
        '0QD' => 'E02004980',
        '0QE' => 'E02004980',
        '0QF' => 'E02004980',
        '0QG' => 'E02004980',
        '0QH' => 'E02004980',
        '0QJ' => 'E02004980',
        '0QL' => 'E02004980',
        '0QN' => 'E02004980',
        '0QP' => 'E02004980',
        '0QQ' => 'E02004980',
        '0QR' => 'E02004980',
        '0QS' => 'E02004980',
        '0QT' => 'E02004980',
        '0QU' => 'E02004980',
        '0QW' => 'E02004980',
        '0QX' => 'E02004980',
        '0QY' => 'E02004980',
        '0QZ' => 'E02004980',
        '0RA' => 'E02004980',
        '0RB' => 'E02004980',
        '0RD' => 'E02004980',
        '0RE' => 'E02004980',
        '0RF' => 'E02004980',
        '0RG' => 'E02004980',
        '0RH' => 'E02004980',
        '0RJ' => 'E02004980',
        '0RL' => 'E02004980',
        '0RN' => 'E02004980',
        '0RP' => 'E02004980',
        '0RQ' => 'E02004980',
        '0RR' => 'E02004980',
        '0RS' => 'E02004980',
        '0RT' => 'E02004986',
        '0RU' => 'E02004980',
        '0RW' => 'E02004980',
        '0RX' => 'E02004980',
        '0RY' => 'E02004980',
        '0RZ' => 'E02004980',
        '0SA' => 'E02004980',
        '0SB' => 'E02004980',
        '0SD' => 'E02004980',
        '0SE' => 'E02004980',
        '0SF' => 'E02004980',
        '0SG' => 'E02004980',
        '0SH' => 'E02004980',
        '0SJ' => 'E02004980',
        '0SL' => 'E02004980',
        '0SN' => 'E02004980',
        '0SP' => 'E02004980',
        '0SQ' => 'E02004980',
        '0SR' => 'E02004980',
        '0SS' => 'E02004980',
        '0ST' => 'E02004980',
        '0SU' => 'E02004980',
        '0SW' => 'E02004980',
        '0SX' => 'E02004980',
        '0SY' => 'E02004879',
        '0SZ' => 'E02004980',
        '0TA' => 'E02004980',
        '0TB' => 'E02004980',
        '0TD' => 'E02004980',
        '0TE' => 'E02004980',
        '0TF' => 'E02004980',
        '0TH' => 'E02004980',
        '0TJ' => 'E02004980',
        '0TL' => 'E02004980',
        '0TN' => 'E02004980',
        '0TP' => 'E02004980',
        '0TQ' => 'E02004980',
        '0TR' => 'E02004980',
        '0TS' => 'E02004980',
        '0TT' => 'E02004980',
        '0TU' => 'E02004980',
        '0TW' => 'E02004980',
        '0TX' => 'E02004980',
        '0TY' => 'E02004980',
        '0TZ' => 'E02004980',
        '0UA' => 'E02004980',
        '0UB' => 'E02004980',
        '0UD' => 'E02004980',
        '0UE' => 'E02004980',
        '0UG' => 'E02004980',
        '0UH' => 'E02004980',
        '0UJ' => 'E02004980',
        '0UL' => 'E02004980',
        '0UN' => 'E02004980',
        '0UP' => 'E02004980',
        '0UQ' => 'E02004980',
        '0UR' => 'E02004980',
        '0US' => 'E02004980',
        '0UU' => 'E02004980',
        '0UW' => 'E02004980',
        '0UX' => 'E02004980',
        '0UY' => 'E02004980',
        '0UZ' => 'E02004980',
        '0WA' => 'E02004980',
        '0WB' => 'E02004980',
        '0WG' => 'E02004986',
        '0WJ' => 'E02004986',
        '0WN' => 'E02004980',
        '0WQ' => 'E02004986',
        '0WT' => 'E02004986',
        '0WU' => 'E02004986',
        '0WW' => 'E02004986',
        '0WX' => 'E02004980',
        '0WY' => 'E02004986',
        '0WZ' => 'E02004980',
        '0XA' => 'E02004986',
        '0XB' => 'E02004980',
        '0XD' => 'E02004980',
        '0XE' => 'E02004980',
        '0XF' => 'E02004980',
        '0XG' => 'E02004980',
        '0XH' => 'E02004980',
        '0XJ' => 'E02004980',
        '0XL' => 'E02004986',
        '0XN' => 'E02004980',
        '0XP' => 'E02004980',
        '0XQ' => 'E02004980',
        '0XR' => 'E02004980',
        '0XS' => 'E02004980',
        '0XT' => 'E02004980',
        '0XU' => 'E02004986',
        '0XW' => 'E02004980',
        '0XX' => 'E02004986',
        '0XY' => 'E02004986',
        '0XZ' => 'E02004986',
        '0YJ' => 'E02004986',
        '0YQ' => 'E02004986',
        '0YX' => 'E02004986',
        '0YZ' => 'E02004986',
        '0ZD' => 'E02004986',
        '0ZE' => 'E02004980',
        '0ZF' => 'E02004980',
        '0ZG' => 'E02004986',
        '0ZH' => 'E02004980',
        '0ZJ' => 'E02004980',
        '0ZL' => 'E02004986',
        '0ZN' => 'E02004986',
        '0ZP' => 'E02004980',
        '0ZQ' => 'E02004986',
        '0ZR' => 'E02004986',
        '0ZS' => 'E02004986',
        '0ZT' => 'E02004980',
        '0ZU' => 'E02004986',
        '0ZW' => 'E02004986',
        '0ZX' => 'E02004980',
        '0ZY' => 'E02004986',
        '0ZZ' => 'E02004986',
        '9AA' => 'E02004981',
        '9AB' => 'E02004981',
        '9AD' => 'E02004981',
        '9AE' => 'E02004981',
        '9AF' => 'E02004981',
        '9AG' => 'E02004986',
        '9AH' => 'E02004982',
        '9AJ' => 'E02004985',
        '9AL' => 'E02004982',
        '9AN' => 'E02004982',
        '9AP' => 'E02004981',
        '9AQ' => 'E02004981',
        '9AR' => 'E02004981',
        '9AS' => 'E02004981',
        '9AT' => 'E02004981',
        '9AU' => 'E02004981',
        '9AW' => 'E02004981',
        '9AX' => 'E02004981',
        '9AY' => 'E02004981',
        '9AZ' => 'E02004986',
        '9BA' => 'E02004981',
        '9BB' => 'E02004981',
        '9BD' => 'E02004981',
        '9BE' => 'E02004981',
        '9BF' => 'E02004981',
        '9BG' => 'E02004981',
        '9BH' => 'E02004981',
        '9BJ' => 'E02004981',
        '9BL' => 'E02004981',
        '9BN' => 'E02004981',
        '9BP' => 'E02004981',
        '9BQ' => 'E02004981',
        '9BS' => 'E02004923',
        '9BT' => 'E02004981',
        '9BU' => 'E02004981',
        '9BW' => 'E02004981',
        '9BX' => 'E02004981',
        '9BY' => 'E02004981',
        '9BZ' => 'E02004981',
        '9DA' => 'E02004927',
        '9DB' => 'E02004927',
        '9DD' => 'E02004981',
        '9DE' => 'E02004981',
        '9DF' => 'E02004981',
        '9DG' => 'E02004981',
        '9DH' => 'E02004981',
        '9DJ' => 'E02004981',
        '9DL' => 'E02004981',
        '9DN' => 'E02004981',
        '9DP' => 'E02004981',
        '9DQ' => 'E02004981',
        '9DR' => 'E02004981',
        '9DS' => 'E02004981',
        '9DT' => 'E02004981',
        '9DU' => 'E02004981',
        '9DW' => 'E02004981',
        '9DX' => 'E02004981',
        '9DY' => 'E02004981',
        '9DZ' => 'E02004981',
        '9EA' => 'E02004981',
        '9EB' => 'E02004887',
        '9ED' => 'E02004981',
        '9EE' => 'E02004981',
        '9EF' => 'E02004981',
        '9EG' => 'E02004981',
        '9EH' => 'E02004981',
        '9EJ' => 'E02004981',
        '9EL' => 'E02004981',
        '9EN' => 'E02004981',
        '9EP' => 'E02004981',
        '9EQ' => 'E02004981',
        '9ER' => 'E02004981',
        '9ES' => 'E02004981',
        '9ET' => 'E02004981',
        '9EU' => 'E02004981',
        '9EW' => 'E02004981',
        '9EX' => 'E02004981',
        '9EY' => 'E02004981',
        '9EZ' => 'E02004981',
        '9FA' => 'E02004986',
        '9FB' => 'E02004981',
        '9FD' => 'E02004981',
        '9FE' => 'E02004981',
        '9FF' => 'E02004981',
        '9FG' => 'E02004981',
        '9FH' => 'E02004981',
        '9FJ' => 'E02004981',
        '9FL' => 'E02004981',
        '9FN' => 'E02004981',
        '9FP' => 'E02004981',
        '9FQ' => 'E02004981',
        '9FR' => 'E02004981',
        '9FS' => 'E02004981',
        '9FT' => 'E02004981',
        '9FU' => 'E02004981',
        '9FW' => 'E02004981',
        '9FX' => 'E02004981',
        '9FY' => 'E02004981',
        '9FZ' => 'E02004981',
        '9GA' => 'E02004981',
        '9GB' => 'E02004981',
        '9GD' => 'E02004981',
        '9GE' => 'E02004981',
        '9GF' => 'E02004981',
        '9GG' => 'E02004981',
        '9GH' => 'E02004981',
        '9GJ' => 'E02004981',
        '9GL' => 'E02004981',
        '9GN' => 'E02004981',
        '9GP' => 'E02004923',
        '9GQ' => 'E02004923',
        '9GR' => 'E02004923',
        '9GS' => 'E02004981',
        '9HA' => 'E02004981',
        '9HB' => 'E02004981',
        '9HD' => 'E02004981',
        '9HE' => 'E02004981',
        '9HF' => 'E02004981',
        '9HG' => 'E02004981',
        '9HH' => 'E02004986',
        '9HN' => 'E02004981',
        '9HP' => 'E02004981',
        '9HQ' => 'E02004981',
        '9HR' => 'E02004981',
        '9HS' => 'E02004981',
        '9HT' => 'E02004981',
        '9HU' => 'E02004981',
        '9HW' => 'E02004981',
        '9HX' => 'E02004981',
        '9HY' => 'E02004981',
        '9HZ' => 'E02004981',
        '9JA' => 'E02004981',
        '9JB' => 'E02004981',
        '9JD' => 'E02004981',
        '9JE' => 'E02004981',
        '9JF' => 'E02004981',
        '9JG' => 'E02004981',
        '9JH' => 'E02004981',
        '9JJ' => 'E02004981',
        '9JL' => 'E02004981',
        '9JN' => 'E02004981',
        '9JP' => 'E02004981',
        '9JQ' => 'E02004981',
        '9JR' => 'E02004981',
        '9JS' => 'E02004981',
        '9JT' => 'E02004981',
        '9JU' => 'E02004981',
        '9JW' => 'E02004981',
        '9JX' => 'E02004981',
        '9JY' => 'E02004981',
        '9JZ' => 'E02004981',
        '9LA' => 'E02004981',
        '9LB' => 'E02004981',
        '9LD' => 'E02004981',
        '9LE' => 'E02004981',
        '9LF' => 'E02004981',
        '9LG' => 'E02004981',
        '9LH' => 'E02004981',
        '9LJ' => 'E02004986',
        '9LL' => 'E02004981',
        '9LN' => 'E02004981',
        '9LP' => 'E02004981',
        '9LQ' => 'E02004981',
        '9LR' => 'E02004981',
        '9LS' => 'E02004981',
        '9LT' => 'E02004981',
        '9LU' => 'E02004981',
        '9LW' => 'E02004981',
        '9LX' => 'E02004981',
        '9LY' => 'E02004981',
        '9LZ' => 'E02004981',
        '9NA' => 'E02004981',
        '9NB' => 'E02004981',
        '9ND' => 'E02004981',
        '9NE' => 'E02004981',
        '9NF' => 'E02004981',
        '9NG' => 'E02004923',
        '9NH' => 'E02004981',
        '9NJ' => 'E02004981',
        '9NL' => 'E02004981',
        '9NN' => 'E02004923',
        '9NP' => 'E02004923',
        '9NQ' => 'E02004981',
        '9NR' => 'E02004923',
        '9NS' => 'E02004981',
        '9NT' => 'E02004981',
        '9NU' => 'E02004981',
        '9NW' => 'E02004923',
        '9NX' => 'E02004981',
        '9NY' => 'E02004981',
        '9NZ' => 'E02004986',
        '9PA' => 'E02004981',
        '9PB' => 'E02004981',
        '9PD' => 'E02004981',
        '9PE' => 'E02004981',
        '9PF' => 'E02004981',
        '9PG' => 'E02004981',
        '9PH' => 'E02004981',
        '9PJ' => 'E02004981',
        '9PL' => 'E02004981',
        '9PN' => 'E02004981',
        '9PP' => 'E02004981',
        '9PQ' => 'E02004981',
        '9PR' => 'E02004981',
        '9PS' => 'E02004981',
        '9PT' => 'E02004981',
        '9PU' => 'E02004981',
        '9PW' => 'E02004981',
        '9PX' => 'E02004981',
        '9PY' => 'E02004981',
        '9PZ' => 'E02004981',
        '9QA' => 'E02004981',
        '9QB' => 'E02004981',
        '9QD' => 'E02004981',
        '9QE' => 'E02004981',
        '9QF' => 'E02004981',
        '9QG' => 'E02004986',
        '9QH' => 'E02004981',
        '9QQ' => 'E02004981',
        '9RA' => 'E02004981',
        '9RB' => 'E02004981',
        '9RD' => 'E02004981',
        '9RE' => 'E02004981',
        '9RF' => 'E02004981',
        '9RG' => 'E02004981',
        '9RH' => 'E02004981',
        '9RJ' => 'E02004981',
        '9RL' => 'E02004981',
        '9RN' => 'E02004981',
        '9RP' => 'E02004981',
        '9RQ' => 'E02004981',
        '9RR' => 'E02004981',
        '9RS' => 'E02004981',
        '9RW' => 'E02004981',
        '9SA' => 'E02004981',
        '9SB' => 'E02004981',
        '9SD' => 'E02004923',
        '9SE' => 'E02004980',
        '9SF' => 'E02004923',
        '9SG' => 'E02004923',
        '9SH' => 'E02004923',
        '9SJ' => 'E02004980',
        '9SL' => 'E02004923',
        '9SN' => 'E02004923',
        '9SP' => 'E02004923',
        '9SQ' => 'E02004981',
        '9SR' => 'E02004923',
        '9SS' => 'E02004923',
        '9ST' => 'E02004923',
        '9SU' => 'E02004923',
        '9SW' => 'E02004923',
        '9SX' => 'E02004923',
        '9SY' => 'E02004923',
        '9SZ' => 'E02004923',
        '9TA' => 'E02004923',
        '9TB' => 'E02004980',
        '9TD' => 'E02004980',
        '9TE' => 'E02004980',
        '9TF' => 'E02004980',
        '9TG' => 'E02004980',
        '9TH' => 'E02004986',
        '9TJ' => 'E02004923',
        '9TP' => 'E02004981',
        '9TQ' => 'E02004980',
        '9TR' => 'E02004981',
        '9TS' => 'E02004981',
        '9TT' => 'E02004981',
        '9TU' => 'E02004923',
        '9TX' => 'E02004981',
        '9TY' => 'E02004923',
        '9TZ' => 'E02004923',
        '9UA' => 'E02004923',
        '9UB' => 'E02004923',
        '9UD' => 'E02004923',
        '9UE' => 'E02004923',
        '9UF' => 'E02004923',
        '9UG' => 'E02004923',
        '9UH' => 'E02004923',
        '9UJ' => 'E02004981',
        '9UL' => 'E02004923',
        '9UN' => 'E02004923',
        '9UQ' => 'E02004980',
        '9UZ' => 'E02004923',
        '9WA' => 'E02004980',
        '9WB' => 'E02004980',
        '9WD' => 'E02004980',
        '9WG' => 'E02004980',
        '9WJ' => 'E02004986',
        '9WQ' => 'E02004986',
        '9XA' => 'E02004981',
        '9XB' => 'E02004981',
        '9XJ' => 'E02004986',
        '9XL' => 'E02004986',
        '9XN' => 'E02004981',
        '9XP' => 'E02004981',
        '9XQ' => 'E02004986',
        '9XR' => 'E02004981',
        '9XS' => 'E02004981',
        '9XU' => 'E02004986',
        '9XW' => 'E02004986',
        '9XZ' => 'E02004986',
        '9ZF' => 'E02004986',
        '9ZG' => 'E02004981',
        '9ZH' => 'E02004981',
        '9ZJ' => 'E02004986',
        '9ZL' => 'E02004986',
        '9ZN' => 'E02004981',
        '9ZP' => 'E02004981',
        '9ZQ' => 'E02004986',
        '9ZR' => 'E02004986',
        '9ZS' => 'E02004986',
        '9ZT' => 'E02004986',
        '9ZU' => 'E02004981',
        '9ZW' => 'E02004986',
        '9ZX' => 'E02004986',
        '9ZY' => 'E02004981',
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