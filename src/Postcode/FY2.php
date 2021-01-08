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
final class FY2
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02002634',
        '0AB' => 'E02002634',
        '0AD' => 'E02002635',
        '0AE' => 'E02002635',
        '0AF' => 'E02002634',
        '0AG' => 'E02002635',
        '0AH' => 'E02002634',
        '0AJ' => 'E02002634',
        '0AL' => 'E02002634',
        '0AN' => 'E02002635',
        '0AP' => 'E02002635',
        '0AQ' => 'E02002634',
        '0AR' => 'E02002634',
        '0AS' => 'E02002634',
        '0AT' => 'E02002637',
        '0AU' => 'E02002634',
        '0AW' => 'E02002635',
        '0AX' => 'E02002636',
        '0AY' => 'E02002634',
        '0AZ' => 'E02002634',
        '0BA' => 'E02002634',
        '0BB' => 'E02002634',
        '0BD' => 'E02002634',
        '0BE' => 'E02002634',
        '0BF' => 'E02002634',
        '0BG' => 'E02002636',
        '0BH' => 'E02002634',
        '0BJ' => 'E02002634',
        '0BL' => 'E02002634',
        '0BN' => 'E02002634',
        '0BP' => 'E02002634',
        '0BQ' => 'E02002636',
        '0BR' => 'E02002634',
        '0BS' => 'E02002634',
        '0BT' => 'E02002634',
        '0BU' => 'E02002634',
        '0BW' => 'E02002634',
        '0BX' => 'E02002634',
        '0BY' => 'E02002634',
        '0BZ' => 'E02002634',
        '0DA' => 'E02002634',
        '0DB' => 'E02002634',
        '0DD' => 'E02002634',
        '0DE' => 'E02002634',
        '0DF' => 'E02002634',
        '0DG' => 'E02002634',
        '0DH' => 'E02002634',
        '0DJ' => 'E02002634',
        '0DL' => 'E02002634',
        '0DN' => 'E02002634',
        '0DP' => 'E02002634',
        '0DQ' => 'E02002634',
        '0DR' => 'E02002634',
        '0DS' => 'E02002634',
        '0DT' => 'E02002634',
        '0DU' => 'E02002634',
        '0DW' => 'E02002634',
        '0DX' => 'E02002634',
        '0DY' => 'E02002634',
        '0DZ' => 'E02002634',
        '0EA' => 'E02002634',
        '0EB' => 'E02002634',
        '0ED' => 'E02002634',
        '0EE' => 'E02002634',
        '0EF' => 'E02002634',
        '0EG' => 'E02002634',
        '0EH' => 'E02002634',
        '0EJ' => 'E02002634',
        '0EL' => 'E02002634',
        '0EN' => 'E02002634',
        '0EP' => 'E02002636',
        '0EQ' => 'E02002634',
        '0ER' => 'E02002634',
        '0ES' => 'E02002634',
        '0ET' => 'E02002634',
        '0EU' => 'E02002634',
        '0EW' => 'E02002636',
        '0EX' => 'E02002634',
        '0EY' => 'E02002634',
        '0EZ' => 'E02002634',
        '0FA' => 'E02002634',
        '0FB' => 'E02002634',
        '0FD' => 'E02002634',
        '0FE' => 'E02002634',
        '0FF' => 'E02002634',
        '0FG' => 'E02002634',
        '0FH' => 'E02002636',
        '0FJ' => 'E02002634',
        '0FL' => 'E02002642',
        '0FN' => 'E02002634',
        '0FP' => 'E02002634',
        '0FQ' => 'E02002634',
        '0FS' => 'E02002636',
        '0FT' => 'E02002634',
        '0FU' => 'E02002634',
        '0FX' => 'E02002634',
        '0FY' => 'E02002634',
        '0FZ' => 'E02002634',
        '0GA' => 'E02002634',
        '0GB' => 'E02002634',
        '0GD' => 'E02002634',
        '0GE' => 'E02002634',
        '0GF' => 'E02002634',
        '0GG' => 'E02002636',
        '0GH' => 'E02002634',
        '0GJ' => 'E02002636',
        '0GL' => 'E02002634',
        '0GN' => 'E02002636',
        '0GP' => 'E02002636',
        '0GQ' => 'E02002636',
        '0GR' => 'E02002642',
        '0GS' => 'E02002636',
        '0GT' => 'E02002636',
        '0GU' => 'E02002634',
        '0GW' => 'E02002642',
        '0GX' => 'E02002642',
        '0GY' => 'E02002636',
        '0GZ' => 'E02002642',
        '0HA' => 'E02002634',
        '0HB' => 'E02002634',
        '0HD' => 'E02002634',
        '0HE' => 'E02002634',
        '0HF' => 'E02002634',
        '0HG' => 'E02002636',
        '0HH' => 'E02002636',
        '0HJ' => 'E02002634',
        '0HL' => 'E02002634',
        '0HN' => 'E02002634',
        '0HP' => 'E02002634',
        '0HQ' => 'E02002636',
        '0HR' => 'E02002636',
        '0HS' => 'E02002636',
        '0HT' => 'E02002636',
        '0HU' => 'E02002636',
        '0HW' => 'E02002634',
        '0HX' => 'E02002636',
        '0HY' => 'E02002636',
        '0HZ' => 'E02002636',
        '0JA' => 'E02002636',
        '0JB' => 'E02002636',
        '0JD' => 'E02002636',
        '0JE' => 'E02002636',
        '0JF' => 'E02002634',
        '0JG' => 'E02002636',
        '0JH' => 'E02002634',
        '0JJ' => 'E02002634',
        '0JL' => 'E02002635',
        '0JN' => 'E02002634',
        '0JP' => 'E02002636',
        '0JQ' => 'E02002636',
        '0JR' => 'E02002636',
        '0JS' => 'E02002635',
        '0JT' => 'E02002635',
        '0JU' => 'E02002635',
        '0JW' => 'E02002634',
        '0JX' => 'E02002636',
        '0JY' => 'E02002634',
        '0JZ' => 'E02002636',
        '0LA' => 'E02002636',
        '0LB' => 'E02002636',
        '0LD' => 'E02002636',
        '0LE' => 'E02002636',
        '0LF' => 'E02002636',
        '0LG' => 'E02002636',
        '0LH' => 'E02002636',
        '0LJ' => 'E02002636',
        '0LL' => 'E02002636',
        '0LN' => 'E02002636',
        '0LP' => 'E02002636',
        '0LQ' => 'E02002636',
        '0LR' => 'E02002636',
        '0LS' => 'E02002636',
        '0LT' => 'E02002636',
        '0LU' => 'E02002636',
        '0LW' => 'E02002636',
        '0LX' => 'E02002636',
        '0LY' => 'E02002636',
        '0LZ' => 'E02002634',
        '0NA' => 'E02002634',
        '0NB' => 'E02002634',
        '0ND' => 'E02002636',
        '0NE' => 'E02002636',
        '0NF' => 'E02002636',
        '0NG' => 'E02002636',
        '0NH' => 'E02002636',
        '0NJ' => 'E02002636',
        '0NL' => 'E02002636',
        '0NN' => 'E02002636',
        '0NP' => 'E02002636',
        '0NQ' => 'E02002636',
        '0NR' => 'E02002636',
        '0NS' => 'E02002636',
        '0NT' => 'E02002636',
        '0NU' => 'E02002636',
        '0NW' => 'E02002636',
        '0NX' => 'E02002636',
        '0NY' => 'E02002636',
        '0NZ' => 'E02002636',
        '0PA' => 'E02002636',
        '0PB' => 'E02002636',
        '0PD' => 'E02002636',
        '0PE' => 'E02002636',
        '0PF' => 'E02002636',
        '0PG' => 'E02002636',
        '0PH' => 'E02002634',
        '0PJ' => 'E02002634',
        '0PL' => 'E02002634',
        '0PN' => 'E02002636',
        '0PP' => 'E02002636',
        '0PQ' => 'E02002634',
        '0PR' => 'E02002636',
        '0PS' => 'E02002636',
        '0PT' => 'E02002636',
        '0PU' => 'E02002636',
        '0PW' => 'E02002636',
        '0PX' => 'E02002636',
        '0PY' => 'E02002636',
        '0PZ' => 'E02002636',
        '0QA' => 'E02002636',
        '0QB' => 'E02002636',
        '0QD' => 'E02002636',
        '0QE' => 'E02002636',
        '0QF' => 'E02002636',
        '0QG' => 'E02002636',
        '0QH' => 'E02002636',
        '0QJ' => 'E02002636',
        '0QL' => 'E02002636',
        '0QN' => 'E02002636',
        '0QP' => 'E02002636',
        '0QQ' => 'E02002636',
        '0QR' => 'E02002636',
        '0QS' => 'E02002636',
        '0QT' => 'E02002636',
        '0QU' => 'E02002636',
        '0QW' => 'E02002636',
        '0QX' => 'E02002636',
        '0QY' => 'E02002636',
        '0QZ' => 'E02002636',
        '0RA' => 'E02002637',
        '0RB' => 'E02002637',
        '0RD' => 'E02002637',
        '0RE' => 'E02002637',
        '0RF' => 'E02002637',
        '0RG' => 'E02002636',
        '0RH' => 'E02002636',
        '0RJ' => 'E02002636',
        '0RL' => 'E02002636',
        '0RN' => 'E02002636',
        '0RP' => 'E02002636',
        '0RQ' => 'E02002636',
        '0RR' => 'E02002636',
        '0RS' => 'E02002636',
        '0RT' => 'E02002636',
        '0RU' => 'E02002636',
        '0RW' => 'E02002636',
        '0RX' => 'E02002636',
        '0RY' => 'E02002637',
        '0RZ' => 'E02002637',
        '0SA' => 'E02002636',
        '0SB' => 'E02002637',
        '0SD' => 'E02002637',
        '0SE' => 'E02002636',
        '0SF' => 'E02002636',
        '0SG' => 'E02002637',
        '0SH' => 'E02002637',
        '0SJ' => 'E02002637',
        '0SL' => 'E02002637',
        '0SN' => 'E02002636',
        '0SP' => 'E02002637',
        '0SQ' => 'E02002634',
        '0SR' => 'E02002636',
        '0SS' => 'E02002637',
        '0ST' => 'E02002637',
        '0SU' => 'E02002637',
        '0SW' => 'E02002637',
        '0SX' => 'E02002636',
        '0SY' => 'E02002637',
        '0SZ' => 'E02002637',
        '0TA' => 'E02002637',
        '0TB' => 'E02002636',
        '0TD' => 'E02002636',
        '0TE' => 'E02002637',
        '0TF' => 'E02002637',
        '0TG' => 'E02002637',
        '0TH' => 'E02002637',
        '0TJ' => 'E02002637',
        '0TL' => 'E02002637',
        '0TN' => 'E02002637',
        '0TP' => 'E02002637',
        '0TQ' => 'E02002636',
        '0TR' => 'E02002637',
        '0TS' => 'E02002637',
        '0TT' => 'E02002637',
        '0TU' => 'E02002637',
        '0TW' => 'E02002637',
        '0TX' => 'E02002637',
        '0TY' => 'E02002637',
        '0TZ' => 'E02002637',
        '0UA' => 'E02002637',
        '0UB' => 'E02002637',
        '0UD' => 'E02002637',
        '0UE' => 'E02002637',
        '0UF' => 'E02002637',
        '0UG' => 'E02002637',
        '0UH' => 'E02002637',
        '0UJ' => 'E02002637',
        '0UL' => 'E02002637',
        '0UN' => 'E02002637',
        '0UP' => 'E02002637',
        '0UQ' => 'E02002637',
        '0UR' => 'E02002640',
        '0US' => 'E02002636',
        '0UT' => 'E02002636',
        '0UU' => 'E02002636',
        '0UW' => 'E02002642',
        '0UX' => 'E02002636',
        '0UY' => 'E02002637',
        '0UZ' => 'E02002636',
        '0WA' => 'E02002636',
        '0WB' => 'E02002636',
        '0WD' => 'E02002636',
        '0WE' => 'E02002636',
        '0WF' => 'E02002636',
        '0WG' => 'E02002636',
        '0WH' => 'E02002636',
        '0WJ' => 'E02002636',
        '0WL' => 'E02002636',
        '0WN' => 'E02002636',
        '0WP' => 'E02002634',
        '0WQ' => 'E02002636',
        '0WR' => 'E02002636',
        '0WS' => 'E02002636',
        '0WT' => 'E02002636',
        '0WU' => 'E02002636',
        '0WW' => 'E02002636',
        '0WX' => 'E02002636',
        '0WY' => 'E02002636',
        '0WZ' => 'E02002642',
        '0XA' => 'E02002637',
        '0XB' => 'E02002637',
        '0XD' => 'E02002637',
        '0XE' => 'E02002636',
        '0XF' => 'E02002642',
        '0XG' => 'E02002637',
        '0XH' => 'E02002637',
        '0XJ' => 'E02002636',
        '0XL' => 'E02002636',
        '0XN' => 'E02002637',
        '0XP' => 'E02002637',
        '0XQ' => 'E02002634',
        '0XR' => 'E02002634',
        '0XS' => 'E02002634',
        '0XT' => 'E02002634',
        '0XU' => 'E02002634',
        '0XW' => 'E02002636',
        '0XX' => 'E02002634',
        '0XY' => 'E02002635',
        '0XZ' => 'E02002634',
        '0YA' => 'E02002636',
        '0YB' => 'E02002634',
        '0YD' => 'E02002634',
        '0YE' => 'E02002636',
        '0YF' => 'E02002636',
        '0YG' => 'E02002636',
        '0YH' => 'E02002636',
        '0YJ' => 'E02002636',
        '0YL' => 'E02002636',
        '0YN' => 'E02002636',
        '0YP' => 'E02002636',
        '0YQ' => 'E02002642',
        '0YR' => 'E02002642',
        '0YS' => 'E02002642',
        '0YT' => 'E02002642',
        '0YU' => 'E02002636',
        '0YW' => 'E02002636',
        '0YX' => 'E02002636',
        '0YY' => 'E02002636',
        '0ZA' => 'E02002636',
        '0ZB' => 'E02002636',
        '0ZD' => 'E02002636',
        '0ZE' => 'E02002636',
        '0ZG' => 'E02002636',
        '0ZN' => 'E02002636',
        '0ZP' => 'E02002636',
        '0ZQ' => 'E02002636',
        '0ZR' => 'E02002642',
        '0ZU' => 'E02002636',
        '0ZW' => 'E02002636',
        '0ZX' => 'E02002636',
        '0ZY' => 'E02002636',
        '9AA' => 'E02002633',
        '9AB' => 'E02002635',
        '9AD' => 'E02002635',
        '9AE' => 'E02002635',
        '9AF' => 'E02002635',
        '9AG' => 'E02002635',
        '9AH' => 'E02002635',
        '9AJ' => 'E02002635',
        '9AL' => 'E02002635',
        '9AN' => 'E02002635',
        '9AP' => 'E02002635',
        '9AQ' => 'E02002635',
        '9AR' => 'E02002635',
        '9AS' => 'E02002635',
        '9AT' => 'E02002635',
        '9AU' => 'E02002635',
        '9AW' => 'E02002635',
        '9AX' => 'E02002635',
        '9AY' => 'E02002635',
        '9AZ' => 'E02002635',
        '9BA' => 'E02002635',
        '9BB' => 'E02002635',
        '9BD' => 'E02002635',
        '9BE' => 'E02002635',
        '9BG' => 'E02002635',
        '9BH' => 'E02002635',
        '9BJ' => 'E02002635',
        '9BN' => 'E02002635',
        '9BT' => 'E02002635',
        '9BU' => 'E02002635',
        '9BW' => 'E02002635',
        '9BX' => 'E02002635',
        '9BY' => 'E02002635',
        '9BZ' => 'E02002635',
        '9DA' => 'E02002635',
        '9DB' => 'E02002635',
        '9DD' => 'E02002635',
        '9DE' => 'E02002635',
        '9DF' => 'E02002635',
        '9DG' => 'E02002635',
        '9DH' => 'E02002635',
        '9DJ' => 'E02002635',
        '9DL' => 'E02002635',
        '9DN' => 'E02002635',
        '9DP' => 'E02002635',
        '9DQ' => 'E02002635',
        '9DR' => 'E02002635',
        '9DS' => 'E02002635',
        '9DW' => 'E02002635',
        '9DZ' => 'E02002635',
        '9EA' => 'E02002635',
        '9EB' => 'E02002635',
        '9ED' => 'E02002635',
        '9EE' => 'E02002635',
        '9EF' => 'E02002635',
        '9EG' => 'E02002635',
        '9EH' => 'E02002635',
        '9EJ' => 'E02002635',
        '9EL' => 'E02002635',
        '9EN' => 'E02002635',
        '9EP' => 'E02002635',
        '9EQ' => 'E02002635',
        '9ER' => 'E02002635',
        '9ES' => 'E02002635',
        '9ET' => 'E02002635',
        '9EW' => 'E02002635',
        '9EX' => 'E02002635',
        '9EY' => 'E02002635',
        '9GA' => 'E02002635',
        '9GB' => 'E02002635',
        '9GD' => 'E02002635',
        '9GE' => 'E02002635',
        '9GF' => 'E02002642',
        '9GG' => 'E02002635',
        '9GH' => 'E02002635',
        '9GJ' => 'E02002635',
        '9GL' => 'E02002635',
        '9GN' => 'E02002635',
        '9GP' => 'E02002635',
        '9GQ' => 'E02002635',
        '9GR' => 'E02002635',
        '9GS' => 'E02002642',
        '9GT' => 'E02002635',
        '9GU' => 'E02002635',
        '9GW' => 'E02002635',
        '9GX' => 'E02002642',
        '9GY' => 'E02002635',
        '9GZ' => 'E02002642',
        '9HA' => 'E02002635',
        '9HB' => 'E02002635',
        '9HD' => 'E02002635',
        '9HE' => 'E02002635',
        '9HF' => 'E02002635',
        '9HG' => 'E02002635',
        '9HH' => 'E02002635',
        '9HJ' => 'E02002635',
        '9HL' => 'E02002635',
        '9HN' => 'E02002635',
        '9HP' => 'E02002635',
        '9HQ' => 'E02002635',
        '9HR' => 'E02002635',
        '9HS' => 'E02002635',
        '9HT' => 'E02002635',
        '9HU' => 'E02002635',
        '9HW' => 'E02002635',
        '9HX' => 'E02002635',
        '9HY' => 'E02002635',
        '9HZ' => 'E02002635',
        '9JA' => 'E02002635',
        '9JB' => 'E02002635',
        '9JD' => 'E02002635',
        '9JE' => 'E02002635',
        '9JF' => 'E02002635',
        '9JG' => 'E02002635',
        '9JH' => 'E02002635',
        '9JJ' => 'E02002635',
        '9JL' => 'E02002635',
        '9JN' => 'E02002635',
        '9JP' => 'E02002635',
        '9JQ' => 'E02002635',
        '9JR' => 'E02002635',
        '9JS' => 'E02002635',
        '9JT' => 'E02002635',
        '9JU' => 'E02002635',
        '9JW' => 'E02002635',
        '9JX' => 'E02002635',
        '9JY' => 'E02002635',
        '9JZ' => 'E02002635',
        '9LA' => 'E02002635',
        '9LB' => 'E02002635',
        '9LD' => 'E02002635',
        '9LE' => 'E02002635',
        '9LF' => 'E02002635',
        '9LG' => 'E02002635',
        '9LH' => 'E02002635',
        '9LJ' => 'E02002635',
        '9LL' => 'E02002635',
        '9LN' => 'E02002635',
        '9LQ' => 'E02002635',
        '9LR' => 'E02002635',
        '9LT' => 'E02002635',
        '9LU' => 'E02002635',
        '9LW' => 'E02002635',
        '9LX' => 'E02002635',
        '9LY' => 'E02002635',
        '9LZ' => 'E02002635',
        '9NA' => 'E02002635',
        '9NB' => 'E02002635',
        '9ND' => 'E02002635',
        '9NE' => 'E02002635',
        '9NF' => 'E02002635',
        '9NG' => 'E02002635',
        '9NH' => 'E02002635',
        '9NJ' => 'E02002635',
        '9NL' => 'E02002635',
        '9NN' => 'E02002635',
        '9NQ' => 'E02002635',
        '9NS' => 'E02002638',
        '9NT' => 'E02002635',
        '9NU' => 'E02002635',
        '9NW' => 'E02002635',
        '9NX' => 'E02002635',
        '9NY' => 'E02002635',
        '9PA' => 'E02002635',
        '9PB' => 'E02002635',
        '9PD' => 'E02002635',
        '9PE' => 'E02002635',
        '9PF' => 'E02002638',
        '9PG' => 'E02002635',
        '9PH' => 'E02002635',
        '9PJ' => 'E02002635',
        '9PL' => 'E02002635',
        '9PN' => 'E02002635',
        '9PP' => 'E02002635',
        '9PQ' => 'E02002635',
        '9PR' => 'E02002635',
        '9PS' => 'E02002635',
        '9PT' => 'E02002635',
        '9PU' => 'E02002635',
        '9PW' => 'E02002635',
        '9PX' => 'E02002635',
        '9PY' => 'E02002635',
        '9PZ' => 'E02002635',
        '9QA' => 'E02002635',
        '9QB' => 'E02002635',
        '9QD' => 'E02002635',
        '9QE' => 'E02002635',
        '9QF' => 'E02002638',
        '9QG' => 'E02002638',
        '9QH' => 'E02002638',
        '9QJ' => 'E02002638',
        '9QL' => 'E02002638',
        '9QN' => 'E02002638',
        '9QP' => 'E02002638',
        '9QQ' => 'E02002638',
        '9QR' => 'E02002638',
        '9QS' => 'E02002638',
        '9QT' => 'E02002638',
        '9QU' => 'E02002638',
        '9QW' => 'E02002638',
        '9QX' => 'E02002638',
        '9QY' => 'E02002638',
        '9QZ' => 'E02002638',
        '9RA' => 'E02002638',
        '9RB' => 'E02002638',
        '9RD' => 'E02002638',
        '9RE' => 'E02002638',
        '9RF' => 'E02002638',
        '9RG' => 'E02002638',
        '9RH' => 'E02002638',
        '9RJ' => 'E02002638',
        '9RL' => 'E02002638',
        '9RN' => 'E02002638',
        '9RP' => 'E02002638',
        '9RQ' => 'E02002638',
        '9RR' => 'E02002638',
        '9RS' => 'E02002638',
        '9RT' => 'E02002638',
        '9RU' => 'E02002638',
        '9RW' => 'E02002638',
        '9RX' => 'E02002638',
        '9RY' => 'E02002638',
        '9RZ' => 'E02002638',
        '9SA' => 'E02002638',
        '9SB' => 'E02002638',
        '9SD' => 'E02002638',
        '9SE' => 'E02002638',
        '9SF' => 'E02002638',
        '9SG' => 'E02002638',
        '9SH' => 'E02002638',
        '9SJ' => 'E02002638',
        '9SL' => 'E02002638',
        '9SN' => 'E02002638',
        '9SP' => 'E02002638',
        '9SQ' => 'E02002638',
        '9SR' => 'E02002638',
        '9SS' => 'E02002637',
        '9ST' => 'E02002637',
        '9SU' => 'E02002638',
        '9SW' => 'E02002638',
        '9SX' => 'E02002638',
        '9SY' => 'E02002638',
        '9SZ' => 'E02002638',
        '9TA' => 'E02002638',
        '9TB' => 'E02002638',
        '9TD' => 'E02002638',
        '9TE' => 'E02002638',
        '9TF' => 'E02002636',
        '9TG' => 'E02002637',
        '9TH' => 'E02002638',
        '9TJ' => 'E02002638',
        '9TL' => 'E02002638',
        '9TN' => 'E02002638',
        '9TP' => 'E02002637',
        '9TQ' => 'E02002637',
        '9TR' => 'E02002637',
        '9TS' => 'E02002637',
        '9TT' => 'E02002637',
        '9TU' => 'E02002637',
        '9TW' => 'E02002637',
        '9TX' => 'E02002637',
        '9TY' => 'E02002637',
        '9TZ' => 'E02002637',
        '9UA' => 'E02002637',
        '9UB' => 'E02002637',
        '9UD' => 'E02002637',
        '9UE' => 'E02002637',
        '9UF' => 'E02002637',
        '9UG' => 'E02002637',
        '9UH' => 'E02002637',
        '9UJ' => 'E02002637',
        '9UL' => 'E02002637',
        '9UN' => 'E02002642',
        '9UP' => 'E02002637',
        '9UQ' => 'E02002637',
        '9UR' => 'E02002637',
        '9UT' => 'E02002637',
        '9UU' => 'E02002637',
        '9UW' => 'E02002637',
        '9UX' => 'E02002637',
        '9UY' => 'E02002637',
        '9UZ' => 'E02002637',
        '9WA' => 'E02002635',
        '9WB' => 'E02002642',
        '9WD' => 'E02002642',
        '9WP' => 'E02002642',
        '9WQ' => 'E02002642',
        '9WR' => 'E02002637',
        '9WS' => 'E02002642',
        '9WT' => 'E02002642',
        '9WU' => 'E02002642',
        '9WW' => 'E02002637',
        '9WX' => 'E02002642',
        '9WY' => 'E02002637',
        '9WZ' => 'E02002642',
        '9XA' => 'E02002635',
        '9XB' => 'E02002635',
        '9XD' => 'E02002642',
        '9XE' => 'E02002642',
        '9XF' => 'E02002642',
        '9XG' => 'E02002642',
        '9YX' => 'E02002635',
        '9ZZ' => 'E02002635',
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