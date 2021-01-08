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
final class CA13
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02003971',
        '0AB' => 'E02003970',
        '0AD' => 'E02003971',
        '0AE' => 'E02003971',
        '0AF' => 'E02003971',
        '0AG' => 'E02003970',
        '0AH' => 'E02003970',
        '0AJ' => 'E02003970',
        '0AL' => 'E02003970',
        '0AN' => 'E02003971',
        '0AP' => 'E02003971',
        '0AQ' => 'E02003970',
        '0AR' => 'E02003971',
        '0AS' => 'E02003971',
        '0AT' => 'E02003971',
        '0AU' => 'E02003971',
        '0AW' => 'E02003971',
        '0AX' => 'E02003971',
        '0AY' => 'E02003971',
        '0AZ' => 'E02003971',
        '0BA' => 'E02003971',
        '0BB' => 'E02003971',
        '0BD' => 'E02003971',
        '0BE' => 'E02003971',
        '0BF' => 'E02003970',
        '0BG' => 'E02003971',
        '0BH' => 'E02003971',
        '0BJ' => 'E02003971',
        '0BL' => 'E02003971',
        '0BN' => 'E02003971',
        '0BP' => 'E02003971',
        '0BQ' => 'E02003971',
        '0BS' => 'E02003971',
        '0BT' => 'E02003971',
        '0BU' => 'E02003971',
        '0BW' => 'E02003971',
        '0BX' => 'E02003971',
        '0BY' => 'E02003971',
        '0BZ' => 'E02003971',
        '0DA' => 'E02003971',
        '0DB' => 'E02003971',
        '0DF' => 'E02003971',
        '0DG' => 'E02003971',
        '0DH' => 'E02003971',
        '0DJ' => 'E02003970',
        '0DL' => 'E02003971',
        '0DN' => 'E02003971',
        '0DP' => 'E02003971',
        '0DQ' => 'E02003971',
        '0DR' => 'E02003971',
        '0DS' => 'E02003971',
        '0DT' => 'E02003970',
        '0DU' => 'E02003970',
        '0DW' => 'E02003971',
        '0DX' => 'E02003970',
        '0DY' => 'E02003970',
        '0DZ' => 'E02003970',
        '0EA' => 'E02003970',
        '0EB' => 'E02003970',
        '0ED' => 'E02003970',
        '0EE' => 'E02003970',
        '0EF' => 'E02003970',
        '0EG' => 'E02003970',
        '0EH' => 'E02003970',
        '0EJ' => 'E02003970',
        '0EL' => 'E02003970',
        '0EN' => 'E02003970',
        '0EP' => 'E02003970',
        '0EQ' => 'E02003970',
        '0ER' => 'E02003970',
        '0ES' => 'E02003970',
        '0ET' => 'E02003970',
        '0EU' => 'E02003970',
        '0EW' => 'E02003970',
        '0EX' => 'E02003970',
        '0EY' => 'E02003970',
        '0EZ' => 'E02003970',
        '0FA' => 'E02003970',
        '0FB' => 'E02003970',
        '0FD' => 'E02003970',
        '0GA' => 'E02003970',
        '0GB' => 'E02003970',
        '0GD' => 'E02003970',
        '0GE' => 'E02003970',
        '0GF' => 'E02003970',
        '0GG' => 'E02003970',
        '0GH' => 'E02003970',
        '0GJ' => 'E02003970',
        '0GL' => 'E02003970',
        '0GN' => 'E02003970',
        '0GP' => 'E02003970',
        '0GQ' => 'E02003970',
        '0GR' => 'E02003970',
        '0GS' => 'E02003970',
        '0GT' => 'E02003970',
        '0GU' => 'E02003971',
        '0GW' => 'E02003970',
        '0GZ' => 'E02003970',
        '0HA' => 'E02003970',
        '0HB' => 'E02003970',
        '0HD' => 'E02003970',
        '0HE' => 'E02003970',
        '0HF' => 'E02003970',
        '0HG' => 'E02003970',
        '0HH' => 'E02003970',
        '0HJ' => 'E02003970',
        '0HL' => 'E02003970',
        '0HN' => 'E02003970',
        '0HP' => 'E02003970',
        '0HQ' => 'E02003970',
        '0HR' => 'E02003970',
        '0HS' => 'E02003970',
        '0HT' => 'E02003970',
        '0HU' => 'E02003970',
        '0HW' => 'E02003970',
        '0HX' => 'E02003970',
        '0HY' => 'E02003970',
        '0HZ' => 'E02003970',
        '0JA' => 'E02003970',
        '0JB' => 'E02003970',
        '0JD' => 'E02003970',
        '0JE' => 'E02003970',
        '0JF' => 'E02003970',
        '0JG' => 'E02003970',
        '0JH' => 'E02003970',
        '0JJ' => 'E02003970',
        '0JL' => 'E02003970',
        '0JN' => 'E02003970',
        '0JP' => 'E02003970',
        '0JQ' => 'E02003970',
        '0JR' => 'E02003970',
        '0JS' => 'E02003970',
        '0JT' => 'E02003970',
        '0JU' => 'E02003970',
        '0JW' => 'E02003970',
        '0JX' => 'E02003970',
        '0JY' => 'E02003970',
        '0JZ' => 'E02003970',
        '0LA' => 'E02003970',
        '0LB' => 'E02003970',
        '0LD' => 'E02003970',
        '0LE' => 'E02003970',
        '0LF' => 'E02003970',
        '0LG' => 'E02003970',
        '0LH' => 'E02003970',
        '0LJ' => 'E02003970',
        '0LL' => 'E02003970',
        '0LN' => 'E02003970',
        '0LP' => 'E02003970',
        '0LQ' => 'E02003970',
        '0LR' => 'E02003970',
        '0LS' => 'E02003970',
        '0LT' => 'E02003970',
        '0LU' => 'E02003970',
        '0LW' => 'E02003970',
        '0LX' => 'E02003970',
        '0LY' => 'E02003970',
        '0LZ' => 'E02003970',
        '0NA' => 'E02003970',
        '0NB' => 'E02003970',
        '0ND' => 'E02003970',
        '0NE' => 'E02003970',
        '0NF' => 'E02003970',
        '0NG' => 'E02003971',
        '0NH' => 'E02003970',
        '0NJ' => 'E02003970',
        '0NL' => 'E02003970',
        '0NN' => 'E02003970',
        '0NP' => 'E02003970',
        '0NQ' => 'E02003970',
        '0NR' => 'E02003970',
        '0NS' => 'E02003970',
        '0NT' => 'E02003970',
        '0NU' => 'E02003970',
        '0NW' => 'E02003970',
        '0NX' => 'E02003970',
        '0NY' => 'E02003970',
        '0NZ' => 'E02003970',
        '0PA' => 'E02003970',
        '0PB' => 'E02003970',
        '0PD' => 'E02003970',
        '0PE' => 'E02003970',
        '0PF' => 'E02003970',
        '0PG' => 'E02003970',
        '0PH' => 'E02003970',
        '0PJ' => 'E02003970',
        '0PL' => 'E02003970',
        '0PN' => 'E02003970',
        '0PP' => 'E02003970',
        '0PQ' => 'E02003970',
        '0PR' => 'E02003970',
        '0PS' => 'E02003970',
        '0PT' => 'E02003970',
        '0PU' => 'E02003970',
        '0PW' => 'E02003970',
        '0PX' => 'E02003970',
        '0PY' => 'E02003970',
        '0PZ' => 'E02003971',
        '0QA' => 'E02003971',
        '0QB' => 'E02003971',
        '0QD' => 'E02003971',
        '0QE' => 'E02003971',
        '0QF' => 'E02003971',
        '0QG' => 'E02003971',
        '0QH' => 'E02003971',
        '0QJ' => 'E02003971',
        '0QL' => 'E02003971',
        '0QN' => 'E02003971',
        '0QP' => 'E02003971',
        '0QQ' => 'E02003971',
        '0QR' => 'E02003971',
        '0QS' => 'E02003971',
        '0QT' => 'E02003971',
        '0QU' => 'E02003970',
        '0QW' => 'E02003971',
        '0QX' => 'E02003970',
        '0QY' => 'E02003970',
        '0QZ' => 'E02003971',
        '0RA' => 'E02003971',
        '0RB' => 'E02003971',
        '0RD' => 'E02003971',
        '0RE' => 'E02003971',
        '0RF' => 'E02003970',
        '0RG' => 'E02003971',
        '0RH' => 'E02003970',
        '0RJ' => 'E02003971',
        '0RL' => 'E02003970',
        '0RN' => 'E02003970',
        '0RP' => 'E02003971',
        '0RQ' => 'E02003971',
        '0RR' => 'E02003971',
        '0RS' => 'E02003971',
        '0RT' => 'E02003971',
        '0RU' => 'E02003971',
        '0RW' => 'E02003971',
        '0RX' => 'E02003970',
        '0RY' => 'E02003970',
        '0RZ' => 'E02003970',
        '0SA' => 'E02003970',
        '0SB' => 'E02003970',
        '0SD' => 'E02003970',
        '0SE' => 'E02003970',
        '0SF' => 'E02003970',
        '0SG' => 'E02003970',
        '0SH' => 'E02003970',
        '0SJ' => 'E02003970',
        '0SL' => 'E02003970',
        '0SN' => 'E02003970',
        '0SP' => 'E02003970',
        '0SQ' => 'E02003970',
        '0SR' => 'E02003971',
        '0SS' => 'E02003971',
        '0ST' => 'E02003971',
        '0SU' => 'E02003971',
        '0SW' => 'E02003970',
        '0SX' => 'E02003970',
        '0SY' => 'E02003970',
        '0SZ' => 'E02003970',
        '0TA' => 'E02003970',
        '0TB' => 'E02003970',
        '0TD' => 'E02003970',
        '0TE' => 'E02003970',
        '0TF' => 'E02003970',
        '0TG' => 'E02003970',
        '0TH' => 'E02003970',
        '0TJ' => 'E02003970',
        '0TL' => 'E02003970',
        '0TN' => 'E02003970',
        '0TP' => 'E02003970',
        '0TQ' => 'E02003970',
        '0TR' => 'E02003970',
        '0TS' => 'E02003970',
        '0TT' => 'E02003970',
        '0TU' => 'E02003970',
        '0TW' => 'E02003970',
        '0TX' => 'E02003970',
        '0TY' => 'E02003970',
        '0TZ' => 'E02003970',
        '0UA' => 'E02003970',
        '0UB' => 'E02003970',
        '0UD' => 'E02003970',
        '0UE' => 'E02003970',
        '0UF' => 'E02003970',
        '0UG' => 'E02003970',
        '0UH' => 'E02003970',
        '0UJ' => 'E02003970',
        '0UL' => 'E02003970',
        '0UN' => 'E02003970',
        '0UP' => 'E02003970',
        '0UQ' => 'E02003970',
        '0UR' => 'E02003970',
        '0US' => 'E02003970',
        '0UT' => 'E02003970',
        '0UU' => 'E02003970',
        '0UW' => 'E02003970',
        '0UX' => 'E02003970',
        '0UY' => 'E02003970',
        '0UZ' => 'E02003970',
        '0WA' => 'E02003970',
        '0WB' => 'E02003970',
        '0WD' => 'E02003970',
        '0WE' => 'E02003970',
        '0WF' => 'E02003970',
        '0WG' => 'E02003970',
        '0WH' => 'E02003970',
        '0WJ' => 'E02003970',
        '0WL' => 'E02003970',
        '0WN' => 'E02003970',
        '0WP' => 'E02003970',
        '0WQ' => 'E02003970',
        '0WR' => 'E02003970',
        '0WS' => 'E02003970',
        '0WT' => 'E02003971',
        '0WU' => 'E02003970',
        '0WW' => 'E02003970',
        '0WX' => 'E02003971',
        '0WY' => 'E02003970',
        '0WZ' => 'E02003970',
        '0XA' => 'E02003970',
        '0XB' => 'E02003970',
        '0XD' => 'E02003970',
        '0XE' => 'E02003970',
        '0XF' => 'E02003970',
        '0XG' => 'E02003970',
        '0XH' => 'E02003970',
        '0XJ' => 'E02003970',
        '0XL' => 'E02003970',
        '0XN' => 'E02003970',
        '0XP' => 'E02003970',
        '0XQ' => 'E02003970',
        '0XR' => 'E02003970',
        '0XS' => 'E02003970',
        '0XT' => 'E02003970',
        '0XU' => 'E02003970',
        '0XW' => 'E02003970',
        '0XX' => 'E02003970',
        '0XY' => 'E02003970',
        '0XZ' => 'E02003970',
        '0YA' => 'E02003970',
        '0YB' => 'E02003970',
        '0YD' => 'E02003970',
        '0YE' => 'E02003970',
        '0YF' => 'E02003970',
        '0YG' => 'E02003970',
        '0YH' => 'E02003970',
        '0YJ' => 'E02003970',
        '0YL' => 'E02003970',
        '0YN' => 'E02003970',
        '0YP' => 'E02003970',
        '0YQ' => 'E02003970',
        '0YR' => 'E02003970',
        '0YS' => 'E02003970',
        '0YT' => 'E02003970',
        '0YU' => 'E02003970',
        '0YW' => 'E02003970',
        '0YX' => 'E02003970',
        '0YY' => 'E02003970',
        '0YZ' => 'E02003970',
        '0ZA' => 'E02003970',
        '0ZD' => 'E02003970',
        '0ZE' => 'E02003970',
        '0ZF' => 'E02003970',
        '0ZG' => 'E02003970',
        '0ZH' => 'E02003970',
        '0ZJ' => 'E02003970',
        '0ZL' => 'E02003970',
        '0ZR' => 'E02003970',
        '0ZZ' => 'E02003969',
        '3AB' => 'E02003970',
        '3AD' => 'E02003970',
        '3AE' => 'E02003970',
        '3AH' => 'E02003970',
        '3AJ' => 'E02003970',
        '3AL' => 'E02003970',
        '3AN' => 'E02003970',
        '3AP' => 'E02003970',
        '3AQ' => 'E02003970',
        '3AR' => 'E02003970',
        '3AS' => 'E02003970',
        '3AT' => 'E02003970',
        '3AU' => 'E02003970',
        '3AW' => 'E02003970',
        '3AX' => 'E02003970',
        '3AY' => 'E02003970',
        '3AZ' => 'E02003970',
        '3BA' => 'E02003970',
        '9AA' => 'E02003971',
        '9AB' => 'E02003971',
        '9AD' => 'E02003971',
        '9AE' => 'E02003971',
        '9AF' => 'E02003971',
        '9AG' => 'E02003971',
        '9AH' => 'E02003971',
        '9AJ' => 'E02003971',
        '9AL' => 'E02003971',
        '9AN' => 'E02003971',
        '9AP' => 'E02003971',
        '9AQ' => 'E02003971',
        '9AR' => 'E02003971',
        '9AS' => 'E02003971',
        '9AT' => 'E02003971',
        '9AU' => 'E02003971',
        '9AW' => 'E02003971',
        '9AX' => 'E02003971',
        '9AY' => 'E02003971',
        '9AZ' => 'E02003971',
        '9BA' => 'E02003971',
        '9BB' => 'E02003971',
        '9BD' => 'E02003971',
        '9BE' => 'E02003971',
        '9BF' => 'E02003971',
        '9BG' => 'E02003971',
        '9BH' => 'E02003971',
        '9BJ' => 'E02003971',
        '9BL' => 'E02003971',
        '9BN' => 'E02003971',
        '9BP' => 'E02003971',
        '9BQ' => 'E02003971',
        '9BS' => 'E02003971',
        '9BT' => 'E02003971',
        '9BU' => 'E02003971',
        '9BW' => 'E02003971',
        '9BX' => 'E02003971',
        '9BY' => 'E02003971',
        '9BZ' => 'E02003971',
        '9DA' => 'E02003971',
        '9DB' => 'E02003971',
        '9DD' => 'E02003971',
        '9DE' => 'E02003971',
        '9DF' => 'E02003971',
        '9DG' => 'E02003971',
        '9DH' => 'E02003971',
        '9DJ' => 'E02003971',
        '9DL' => 'E02003971',
        '9DN' => 'E02003971',
        '9DP' => 'E02003971',
        '9DQ' => 'E02003971',
        '9DR' => 'E02003971',
        '9DS' => 'E02003971',
        '9DT' => 'E02003971',
        '9DU' => 'E02003971',
        '9DW' => 'E02003971',
        '9DX' => 'E02003971',
        '9DY' => 'E02003971',
        '9DZ' => 'E02003971',
        '9EA' => 'E02003971',
        '9EB' => 'E02003971',
        '9ED' => 'E02003971',
        '9EE' => 'E02003971',
        '9EF' => 'E02003971',
        '9EG' => 'E02003971',
        '9EH' => 'E02003971',
        '9EJ' => 'E02003971',
        '9EL' => 'E02003971',
        '9EN' => 'E02003971',
        '9EP' => 'E02003971',
        '9EQ' => 'E02003971',
        '9ER' => 'E02003971',
        '9ES' => 'E02003971',
        '9ET' => 'E02003971',
        '9EU' => 'E02003971',
        '9EW' => 'E02003971',
        '9EX' => 'E02003971',
        '9EY' => 'E02003971',
        '9EZ' => 'E02003971',
        '9FA' => 'E02003971',
        '9FB' => 'E02003971',
        '9FD' => 'E02003971',
        '9FE' => 'E02003971',
        '9FG' => 'E02003971',
        '9GA' => 'E02003971',
        '9GB' => 'E02003971',
        '9GD' => 'E02003970',
        '9GE' => 'E02003971',
        '9GF' => 'E02003970',
        '9GG' => 'E02003971',
        '9GH' => 'E02003970',
        '9GJ' => 'E02003970',
        '9GX' => 'E02003970',
        '9GY' => 'E02003970',
        '9GZ' => 'E02003970',
        '9HA' => 'E02003971',
        '9HB' => 'E02003971',
        '9HD' => 'E02003971',
        '9HE' => 'E02003971',
        '9HF' => 'E02003971',
        '9HG' => 'E02003971',
        '9HH' => 'E02003971',
        '9HJ' => 'E02003971',
        '9HL' => 'E02003971',
        '9HN' => 'E02003971',
        '9HP' => 'E02003971',
        '9HQ' => 'E02003971',
        '9HR' => 'E02003971',
        '9HS' => 'E02003971',
        '9HT' => 'E02003971',
        '9HU' => 'E02003971',
        '9HW' => 'E02003971',
        '9HX' => 'E02003971',
        '9HY' => 'E02003971',
        '9HZ' => 'E02003971',
        '9JA' => 'E02003971',
        '9JB' => 'E02003971',
        '9JD' => 'E02003971',
        '9JE' => 'E02003971',
        '9JF' => 'E02003971',
        '9JG' => 'E02003971',
        '9JH' => 'E02003971',
        '9JJ' => 'E02003971',
        '9JL' => 'E02003971',
        '9JN' => 'E02003971',
        '9JP' => 'E02003971',
        '9JQ' => 'E02003971',
        '9JR' => 'E02003971',
        '9JS' => 'E02003970',
        '9JT' => 'E02003970',
        '9JU' => 'E02003970',
        '9JW' => 'E02003971',
        '9JX' => 'E02003970',
        '9JY' => 'E02003970',
        '9JZ' => 'E02003970',
        '9LA' => 'E02003970',
        '9LB' => 'E02003970',
        '9LD' => 'E02003970',
        '9LE' => 'E02003970',
        '9LF' => 'E02003970',
        '9LG' => 'E02003970',
        '9LH' => 'E02003970',
        '9LJ' => 'E02003970',
        '9LL' => 'E02003971',
        '9LN' => 'E02003970',
        '9LP' => 'E02003970',
        '9LQ' => 'E02003970',
        '9LR' => 'E02003970',
        '9LS' => 'E02003970',
        '9LT' => 'E02003971',
        '9LU' => 'E02003970',
        '9LW' => 'E02003971',
        '9LX' => 'E02003970',
        '9LY' => 'E02003970',
        '9LZ' => 'E02003970',
        '9NA' => 'E02003970',
        '9NB' => 'E02003970',
        '9ND' => 'E02003971',
        '9NE' => 'E02003971',
        '9NF' => 'E02003971',
        '9NG' => 'E02003971',
        '9NH' => 'E02003971',
        '9NJ' => 'E02003971',
        '9NL' => 'E02003971',
        '9NN' => 'E02003971',
        '9NP' => 'E02003971',
        '9NQ' => 'E02003971',
        '9NR' => 'E02003971',
        '9NS' => 'E02003971',
        '9NT' => 'E02003971',
        '9NU' => 'E02003971',
        '9NW' => 'E02003971',
        '9NX' => 'E02003971',
        '9NY' => 'E02003971',
        '9NZ' => 'E02003971',
        '9PA' => 'E02003971',
        '9PB' => 'E02003971',
        '9PD' => 'E02003970',
        '9PE' => 'E02003971',
        '9PF' => 'E02003971',
        '9PG' => 'E02003971',
        '9PH' => 'E02003971',
        '9PJ' => 'E02003971',
        '9PL' => 'E02003971',
        '9PN' => 'E02003971',
        '9PP' => 'E02003971',
        '9PQ' => 'E02003971',
        '9PR' => 'E02003970',
        '9PS' => 'E02003970',
        '9PT' => 'E02003970',
        '9PU' => 'E02003970',
        '9PW' => 'E02003971',
        '9PX' => 'E02003970',
        '9PY' => 'E02003970',
        '9PZ' => 'E02003970',
        '9QA' => 'E02003970',
        '9QB' => 'E02003970',
        '9QD' => 'E02003970',
        '9QE' => 'E02003970',
        '9QF' => 'E02003970',
        '9QG' => 'E02003970',
        '9QH' => 'E02003970',
        '9QJ' => 'E02003970',
        '9QL' => 'E02003970',
        '9QN' => 'E02003971',
        '9QP' => 'E02003970',
        '9QQ' => 'E02003970',
        '9QR' => 'E02003970',
        '9QS' => 'E02003970',
        '9QT' => 'E02003970',
        '9QU' => 'E02003970',
        '9QW' => 'E02003970',
        '9QX' => 'E02003970',
        '9QY' => 'E02003970',
        '9QZ' => 'E02003970',
        '9RA' => 'E02003970',
        '9RB' => 'E02003970',
        '9RD' => 'E02003970',
        '9RE' => 'E02003970',
        '9RF' => 'E02003970',
        '9RG' => 'E02003970',
        '9RH' => 'E02003970',
        '9RJ' => 'E02003970',
        '9RL' => 'E02003970',
        '9RN' => 'E02003970',
        '9RP' => 'E02003970',
        '9RQ' => 'E02003970',
        '9RR' => 'E02003970',
        '9RS' => 'E02003970',
        '9RT' => 'E02003970',
        '9RU' => 'E02003970',
        '9RW' => 'E02003970',
        '9RX' => 'E02003970',
        '9RZ' => 'E02003970',
        '9SA' => 'E02003971',
        '9SD' => 'E02003971',
        '9SF' => 'E02003971',
        '9SG' => 'E02003971',
        '9SH' => 'E02003971',
        '9SJ' => 'E02003971',
        '9SL' => 'E02003971',
        '9SP' => 'E02003971',
        '9SQ' => 'E02003971',
        '9SR' => 'E02003971',
        '9SS' => 'E02003971',
        '9ST' => 'E02003971',
        '9SU' => 'E02003966',
        '9SX' => 'E02003966',
        '9SY' => 'E02003966',
        '9SZ' => 'E02003966',
        '9TA' => 'E02003971',
        '9TB' => 'E02003971',
        '9TG' => 'E02003971',
        '9TH' => 'E02003971',
        '9TJ' => 'E02003971',
        '9TL' => 'E02003971',
        '9TN' => 'E02003971',
        '9TQ' => 'E02003971',
        '9TR' => 'E02003971',
        '9TS' => 'E02003971',
        '9TT' => 'E02003971',
        '9TU' => 'E02003971',
        '9TW' => 'E02003971',
        '9TX' => 'E02003971',
        '9TY' => 'E02003971',
        '9TZ' => 'E02003971',
        '9UA' => 'E02003971',
        '9UB' => 'E02003971',
        '9UD' => 'E02003971',
        '9UE' => 'E02003971',
        '9UG' => 'E02003971',
        '9UH' => 'E02003971',
        '9UJ' => 'E02003971',
        '9UL' => 'E02003971',
        '9UN' => 'E02003971',
        '9UP' => 'E02003971',
        '9UQ' => 'E02003971',
        '9UR' => 'E02003971',
        '9UU' => 'E02003971',
        '9UW' => 'E02003971',
        '9UX' => 'E02003971',
        '9UY' => 'E02003971',
        '9UZ' => 'E02003971',
        '9WA' => 'E02003971',
        '9WB' => 'E02003970',
        '9WX' => 'E02003970',
        '9WY' => 'E02003970',
        '9WZ' => 'E02003970',
        '9XA' => 'E02003971',
        '9XB' => 'E02003971',
        '9XD' => 'E02003971',
        '9XE' => 'E02003971',
        '9XF' => 'E02003971',
        '9XG' => 'E02003971',
        '9XH' => 'E02003971',
        '9XJ' => 'E02003971',
        '9XL' => 'E02003971',
        '9XN' => 'E02003971',
        '9XP' => 'E02003971',
        '9XQ' => 'E02003971',
        '9XR' => 'E02003971',
        '9XS' => 'E02003971',
        '9XT' => 'E02003971',
        '9XU' => 'E02003971',
        '9XW' => 'E02003971',
        '9XX' => 'E02003971',
        '9XY' => 'E02003971',
        '9XZ' => 'E02003971',
        '9YA' => 'E02003971',
        '9YB' => 'E02003971',
        '9YD' => 'E02003971',
        '9YE' => 'E02003971',
        '9YF' => 'E02003970',
        '9YG' => 'E02003971',
        '9YH' => 'E02003970',
        '9YJ' => 'E02003970',
        '9YL' => 'E02003971',
        '9YN' => 'E02003971',
        '9YP' => 'E02003971',
        '9YQ' => 'E02003970',
        '9YR' => 'E02003971',
        '9YS' => 'E02003971',
        '9YT' => 'E02003971',
        '9YU' => 'E02003971',
        '9YW' => 'E02003971',
        '9YY' => 'E02003970',
        '9YZ' => 'E02003970',
        '9ZB' => 'E02003971',
        '9ZD' => 'E02003971',
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