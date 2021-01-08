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
final class ST18
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02006198',
        '0AB' => 'E02006198',
        '0AD' => 'E02006198',
        '0AE' => 'E02006198',
        '0AF' => 'E02006198',
        '0AG' => 'E02006198',
        '0AH' => 'E02006198',
        '0AJ' => 'E02006198',
        '0AL' => 'E02006198',
        '0AN' => 'E02006198',
        '0AP' => 'E02006198',
        '0AQ' => 'E02006198',
        '0AR' => 'E02006198',
        '0AS' => 'E02006198',
        '0AT' => 'E02006198',
        '0AU' => 'E02006198',
        '0AW' => 'E02006198',
        '0AX' => 'E02006198',
        '0AY' => 'E02006198',
        '0AZ' => 'E02006198',
        '0BA' => 'E02006195',
        '0BB' => 'E02006198',
        '0BD' => 'E02006198',
        '0BE' => 'E02006195',
        '0BF' => 'E02006198',
        '0BG' => 'E02006198',
        '0BH' => 'E02006195',
        '0BJ' => 'E02006195',
        '0BL' => 'E02006195',
        '0BN' => 'E02006195',
        '0BP' => 'E02006195',
        '0BQ' => 'E02006191',
        '0BS' => 'E02006195',
        '0BT' => 'E02006195',
        '0BU' => 'E02006195',
        '0BW' => 'E02006195',
        '0BX' => 'E02006195',
        '0BY' => 'E02006191',
        '0BZ' => 'E02006191',
        '0DA' => 'E02006191',
        '0DB' => 'E02006191',
        '0DD' => 'E02006198',
        '0DE' => 'E02006191',
        '0DF' => 'E02006195',
        '0DG' => 'E02006198',
        '0DH' => 'E02006191',
        '0DJ' => 'E02006191',
        '0DL' => 'E02006191',
        '0DN' => 'E02006191',
        '0DP' => 'E02006191',
        '0DQ' => 'E02006198',
        '0DR' => 'E02006191',
        '0DS' => 'E02006191',
        '0DT' => 'E02006191',
        '0DU' => 'E02006191',
        '0DW' => 'E02006191',
        '0DX' => 'E02006191',
        '0DY' => 'E02006191',
        '0DZ' => 'E02006191',
        '0EA' => 'E02006191',
        '0EB' => 'E02006191',
        '0ED' => 'E02006191',
        '0EE' => 'E02006198',
        '0EF' => 'E02006198',
        '0EG' => 'E02006191',
        '0EH' => 'E02006191',
        '0EJ' => 'E02006191',
        '0EL' => 'E02006191',
        '0EN' => 'E02006191',
        '0EP' => 'E02006191',
        '0EQ' => 'E02006191',
        '0ER' => 'E02006131',
        '0ES' => 'E02006198',
        '0ET' => 'E02006191',
        '0EU' => 'E02006191',
        '0EW' => 'E02006191',
        '0EX' => 'E02006191',
        '0EY' => 'E02006191',
        '0EZ' => 'E02006131',
        '0FA' => 'E02006195',
        '0FB' => 'E02006195',
        '0FD' => 'E02006195',
        '0FE' => 'E02006195',
        '0FF' => 'E02006195',
        '0FG' => 'E02006195',
        '0FH' => 'E02006195',
        '0FJ' => 'E02006198',
        '0FL' => 'E02006198',
        '0FN' => 'E02006195',
        '0FP' => 'E02006195',
        '0FQ' => 'E02006195',
        '0FR' => 'E02006195',
        '0FS' => 'E02006195',
        '0FT' => 'E02006195',
        '0FU' => 'E02006195',
        '0FW' => 'E02006195',
        '0FX' => 'E02006198',
        '0FY' => 'E02006195',
        '0FZ' => 'E02006198',
        '0GA' => 'E02006198',
        '0GB' => 'E02006198',
        '0GD' => 'E02006198',
        '0GE' => 'E02006198',
        '0GF' => 'E02006195',
        '0GG' => 'E02006198',
        '0GH' => 'E02006195',
        '0GJ' => 'E02006195',
        '0GL' => 'E02006195',
        '0GN' => 'E02006198',
        '0GP' => 'E02006198',
        '0GQ' => 'E02006195',
        '0GR' => 'E02006195',
        '0GS' => 'E02006195',
        '0GT' => 'E02006195',
        '0GU' => 'E02006198',
        '0GW' => 'E02006198',
        '0GX' => 'E02006191',
        '0GY' => 'E02006195',
        '0GZ' => 'E02006191',
        '0HA' => 'E02006191',
        '0HB' => 'E02006191',
        '0HD' => 'E02006191',
        '0HE' => 'E02006195',
        '0HF' => 'E02006195',
        '0HG' => 'E02006195',
        '0HH' => 'E02006195',
        '0HJ' => 'E02006195',
        '0HL' => 'E02006195',
        '0HN' => 'E02006195',
        '0HP' => 'E02006195',
        '0HQ' => 'E02006195',
        '0HR' => 'E02006195',
        '0HS' => 'E02006195',
        '0HT' => 'E02006195',
        '0HU' => 'E02006195',
        '0HW' => 'E02006195',
        '0HX' => 'E02006195',
        '0HY' => 'E02006195',
        '0HZ' => 'E02006195',
        '0JA' => 'E02006195',
        '0JB' => 'E02006195',
        '0JD' => 'E02006195',
        '0JE' => 'E02006195',
        '0JF' => 'E02006195',
        '0JG' => 'E02006195',
        '0JH' => 'E02006195',
        '0JJ' => 'E02006195',
        '0JL' => 'E02006195',
        '0JN' => 'E02006195',
        '0JP' => 'E02006195',
        '0JQ' => 'E02006195',
        '0JR' => 'E02006195',
        '0JS' => 'E02006195',
        '0JT' => 'E02006195',
        '0JU' => 'E02006195',
        '0JW' => 'E02006195',
        '0JX' => 'E02006195',
        '0JY' => 'E02006195',
        '0JZ' => 'E02006195',
        '0LA' => 'E02006195',
        '0LB' => 'E02006195',
        '0LD' => 'E02006195',
        '0LE' => 'E02006195',
        '0LF' => 'E02006195',
        '0LG' => 'E02006195',
        '0LH' => 'E02006195',
        '0LJ' => 'E02006195',
        '0LL' => 'E02006195',
        '0LN' => 'E02006195',
        '0LP' => 'E02006195',
        '0LQ' => 'E02006198',
        '0LR' => 'E02006195',
        '0LS' => 'E02006195',
        '0LT' => 'E02006136',
        '0LU' => 'E02006136',
        '0LW' => 'E02006195',
        '0LX' => 'E02006195',
        '0LY' => 'E02006195',
        '0LZ' => 'E02006195',
        '0NA' => 'E02006195',
        '0NB' => 'E02006195',
        '0ND' => 'E02006195',
        '0NE' => 'E02006195',
        '0NF' => 'E02006195',
        '0NG' => 'E02006195',
        '0NH' => 'E02006195',
        '0NJ' => 'E02006195',
        '0NL' => 'E02006195',
        '0NN' => 'E02006195',
        '0NP' => 'E02006195',
        '0NQ' => 'E02006195',
        '0NR' => 'E02006195',
        '0NS' => 'E02006195',
        '0NT' => 'E02006195',
        '0NU' => 'E02006195',
        '0NW' => 'E02006195',
        '0NX' => 'E02006195',
        '0NY' => 'E02006195',
        '0NZ' => 'E02006195',
        '0PA' => 'E02006195',
        '0PB' => 'E02006195',
        '0PD' => 'E02006195',
        '0PE' => 'E02006195',
        '0PF' => 'E02006195',
        '0PG' => 'E02006199',
        '0PH' => 'E02006195',
        '0PJ' => 'E02006195',
        '0PL' => 'E02006195',
        '0PN' => 'E02006195',
        '0PP' => 'E02006195',
        '0PQ' => 'E02006195',
        '0PR' => 'E02006195',
        '0PS' => 'E02006195',
        '0PT' => 'E02006195',
        '0PU' => 'E02006195',
        '0PW' => 'E02006195',
        '0PX' => 'E02006195',
        '0PY' => 'E02006195',
        '0PZ' => 'E02006198',
        '0QA' => 'E02006195',
        '0QB' => 'E02006195',
        '0QD' => 'E02006195',
        '0QE' => 'E02006195',
        '0QF' => 'E02006195',
        '0QG' => 'E02006195',
        '0QH' => 'E02006195',
        '0QJ' => 'E02006195',
        '0QL' => 'E02006195',
        '0QN' => 'E02006195',
        '0QP' => 'E02006195',
        '0QQ' => 'E02006195',
        '0QR' => 'E02006195',
        '0QS' => 'E02006195',
        '0QT' => 'E02006195',
        '0QU' => 'E02006195',
        '0QW' => 'E02006195',
        '0QX' => 'E02006195',
        '0QY' => 'E02006195',
        '0QZ' => 'E02006195',
        '0RA' => 'E02006195',
        '0RB' => 'E02006195',
        '0RD' => 'E02006195',
        '0RE' => 'E02006198',
        '0RF' => 'E02006198',
        '0RG' => 'E02006198',
        '0RH' => 'E02006195',
        '0RJ' => 'E02006195',
        '0RL' => 'E02006195',
        '0RN' => 'E02006195',
        '0RP' => 'E02006195',
        '0RQ' => 'E02006195',
        '0RR' => 'E02006195',
        '0RS' => 'E02006195',
        '0RT' => 'E02006195',
        '0RU' => 'E02006195',
        '0RW' => 'E02006195',
        '0RX' => 'E02006195',
        '0RY' => 'E02006195',
        '0RZ' => 'E02006195',
        '0SA' => 'E02006195',
        '0SB' => 'E02006195',
        '0SD' => 'E02006195',
        '0SE' => 'E02006195',
        '0SF' => 'E02006195',
        '0SG' => 'E02006195',
        '0SH' => 'E02006195',
        '0SJ' => 'E02006195',
        '0SL' => 'E02006195',
        '0SN' => 'E02006195',
        '0SP' => 'E02006195',
        '0SQ' => 'E02006195',
        '0SR' => 'E02006195',
        '0SS' => 'E02006195',
        '0ST' => 'E02006195',
        '0SU' => 'E02006195',
        '0SW' => 'E02006195',
        '0SX' => 'E02006195',
        '0SY' => 'E02006195',
        '0SZ' => 'E02006195',
        '0TA' => 'E02006195',
        '0TB' => 'E02006195',
        '0TD' => 'E02006195',
        '0TE' => 'E02006195',
        '0TF' => 'E02006195',
        '0TG' => 'E02006198',
        '0TH' => 'E02006195',
        '0TJ' => 'E02006198',
        '0TL' => 'E02006198',
        '0TN' => 'E02006198',
        '0TP' => 'E02006195',
        '0TQ' => 'E02006198',
        '0TR' => 'E02006195',
        '0TS' => 'E02006195',
        '0TT' => 'E02006195',
        '0TU' => 'E02006195',
        '0TW' => 'E02006198',
        '0TX' => 'E02006195',
        '0TY' => 'E02006195',
        '0TZ' => 'E02006195',
        '0UA' => 'E02006195',
        '0UB' => 'E02006195',
        '0UD' => 'E02006195',
        '0UE' => 'E02006195',
        '0UF' => 'E02006195',
        '0UG' => 'E02006195',
        '0UH' => 'E02006195',
        '0UJ' => 'E02006195',
        '0UL' => 'E02006195',
        '0UN' => 'E02006195',
        '0UP' => 'E02006195',
        '0UQ' => 'E02006195',
        '0UR' => 'E02006195',
        '0US' => 'E02006195',
        '0UT' => 'E02006195',
        '0UU' => 'E02006195',
        '0UW' => 'E02006195',
        '0UX' => 'E02006195',
        '0UY' => 'E02006195',
        '0UZ' => 'E02006195',
        '0WA' => 'E02006198',
        '0WB' => 'E02006198',
        '0WD' => 'E02006198',
        '0WE' => 'E02006198',
        '0WF' => 'E02006195',
        '0WG' => 'E02006195',
        '0WH' => 'E02006199',
        '0WJ' => 'E02006195',
        '0WL' => 'E02006198',
        '0WN' => 'E02006198',
        '0WP' => 'E02006198',
        '0WQ' => 'E02006198',
        '0WR' => 'E02006199',
        '0WS' => 'E02006199',
        '0WT' => 'E02006198',
        '0WU' => 'E02006195',
        '0WY' => 'E02006195',
        '0WZ' => 'E02006195',
        '0XA' => 'E02006195',
        '0XB' => 'E02006195',
        '0XD' => 'E02006195',
        '0XE' => 'E02006195',
        '0XF' => 'E02006198',
        '0XG' => 'E02006195',
        '0XH' => 'E02006199',
        '0XJ' => 'E02006198',
        '0XL' => 'E02006198',
        '0XN' => 'E02006198',
        '0XP' => 'E02006198',
        '0XQ' => 'E02006198',
        '0XR' => 'E02006198',
        '0XS' => 'E02006198',
        '0XT' => 'E02006198',
        '0XU' => 'E02006198',
        '0XW' => 'E02006199',
        '0XX' => 'E02006198',
        '0XY' => 'E02006198',
        '0XZ' => 'E02006198',
        '0YA' => 'E02006198',
        '0YB' => 'E02006198',
        '0YD' => 'E02006198',
        '0YE' => 'E02006201',
        '0YF' => 'E02006198',
        '0YG' => 'E02006198',
        '0YH' => 'E02006198',
        '0YJ' => 'E02006201',
        '0YL' => 'E02006201',
        '0YN' => 'E02006195',
        '0YP' => 'E02006195',
        '0YQ' => 'E02006198',
        '0YR' => 'E02006195',
        '0YS' => 'E02006195',
        '0YT' => 'E02006198',
        '0YU' => 'E02006199',
        '0YW' => 'E02006198',
        '0YX' => 'E02006198',
        '0YY' => 'E02006198',
        '0YZ' => 'E02006198',
        '0ZA' => 'E02006198',
        '0ZB' => 'E02006198',
        '0ZD' => 'E02006199',
        '0ZE' => 'E02006198',
        '0ZF' => 'E02006198',
        '0ZG' => 'E02006199',
        '0ZH' => 'E02006198',
        '0ZJ' => 'E02006198',
        '0ZL' => 'E02006199',
        '0ZN' => 'E02006199',
        '0ZP' => 'E02006191',
        '0ZQ' => 'E02006198',
        '0ZR' => 'E02006198',
        '0ZS' => 'E02006198',
        '0ZT' => 'E02006198',
        '0ZU' => 'E02006198',
        '0ZW' => 'E02006198',
        '0ZX' => 'E02006195',
        '9AA' => 'E02006174',
        '9AB' => 'E02006174',
        '9AD' => 'E02006174',
        '9AE' => 'E02006174',
        '9AF' => 'E02006174',
        '9AG' => 'E02006174',
        '9AH' => 'E02006174',
        '9AJ' => 'E02006174',
        '9AL' => 'E02006174',
        '9AN' => 'E02006174',
        '9AP' => 'E02006174',
        '9AQ' => 'E02006174',
        '9AR' => 'E02006174',
        '9AS' => 'E02006199',
        '9AT' => 'E02006199',
        '9AU' => 'E02006199',
        '9AW' => 'E02006199',
        '9AX' => 'E02006199',
        '9AY' => 'E02006199',
        '9AZ' => 'E02006199',
        '9BA' => 'E02006174',
        '9BB' => 'E02006199',
        '9BD' => 'E02006199',
        '9BE' => 'E02006199',
        '9BF' => 'E02006199',
        '9BG' => 'E02006199',
        '9BH' => 'E02006199',
        '9BJ' => 'E02006199',
        '9BL' => 'E02006174',
        '9BN' => 'E02006174',
        '9BP' => 'E02006199',
        '9BQ' => 'E02006199',
        '9BS' => 'E02006174',
        '9BT' => 'E02006174',
        '9BU' => 'E02006174',
        '9BW' => 'E02006174',
        '9BX' => 'E02006202',
        '9BY' => 'E02006199',
        '9BZ' => 'E02006174',
        '9DA' => 'E02006174',
        '9DB' => 'E02006202',
        '9DD' => 'E02006202',
        '9DE' => 'E02006199',
        '9DF' => 'E02006202',
        '9DG' => 'E02006199',
        '9DH' => 'E02006202',
        '9DJ' => 'E02006202',
        '9DL' => 'E02006202',
        '9DN' => 'E02006202',
        '9DP' => 'E02006202',
        '9DQ' => 'E02006202',
        '9DR' => 'E02006202',
        '9DS' => 'E02006202',
        '9DT' => 'E02006202',
        '9DU' => 'E02006202',
        '9DW' => 'E02006202',
        '9DX' => 'E02006202',
        '9DY' => 'E02006202',
        '9DZ' => 'E02006202',
        '9EA' => 'E02006202',
        '9EB' => 'E02006202',
        '9ED' => 'E02006202',
        '9EE' => 'E02006202',
        '9EF' => 'E02006202',
        '9EG' => 'E02006202',
        '9EH' => 'E02006202',
        '9EJ' => 'E02006202',
        '9EL' => 'E02006193',
        '9EN' => 'E02006202',
        '9EP' => 'E02006202',
        '9EQ' => 'E02006202',
        '9ER' => 'E02006202',
        '9ES' => 'E02006202',
        '9ET' => 'E02006202',
        '9EU' => 'E02006202',
        '9EW' => 'E02006202',
        '9EX' => 'E02006202',
        '9EY' => 'E02006202',
        '9EZ' => 'E02006202',
        '9FA' => 'E02006202',
        '9FB' => 'E02006174',
        '9FD' => 'E02006174',
        '9FE' => 'E02006202',
        '9FG' => 'E02006202',
        '9FH' => 'E02006193',
        '9GA' => 'E02006202',
        '9GB' => 'E02006202',
        '9GY' => 'E02006202',
        '9GZ' => 'E02006199',
        '9HA' => 'E02006202',
        '9HB' => 'E02006202',
        '9HD' => 'E02006202',
        '9HE' => 'E02006202',
        '9HF' => 'E02006202',
        '9HG' => 'E02006202',
        '9HH' => 'E02006202',
        '9HJ' => 'E02006202',
        '9HL' => 'E02006202',
        '9HN' => 'E02006202',
        '9HP' => 'E02006202',
        '9HQ' => 'E02006202',
        '9HR' => 'E02006202',
        '9HS' => 'E02006202',
        '9HT' => 'E02006202',
        '9HU' => 'E02006202',
        '9HW' => 'E02006202',
        '9HX' => 'E02006202',
        '9HY' => 'E02006202',
        '9HZ' => 'E02006199',
        '9JA' => 'E02006199',
        '9JB' => 'E02006199',
        '9JD' => 'E02006199',
        '9JE' => 'E02006199',
        '9JF' => 'E02006199',
        '9JG' => 'E02006202',
        '9JH' => 'E02006202',
        '9JJ' => 'E02006202',
        '9JL' => 'E02006202',
        '9JN' => 'E02006202',
        '9JP' => 'E02006202',
        '9JQ' => 'E02006202',
        '9JR' => 'E02006202',
        '9JS' => 'E02006199',
        '9JT' => 'E02006199',
        '9JU' => 'E02006199',
        '9JW' => 'E02006202',
        '9JX' => 'E02006199',
        '9JY' => 'E02006199',
        '9JZ' => 'E02006199',
        '9LA' => 'E02006199',
        '9LB' => 'E02006199',
        '9LD' => 'E02006199',
        '9LE' => 'E02006199',
        '9LF' => 'E02006199',
        '9LG' => 'E02006199',
        '9LH' => 'E02006174',
        '9LJ' => 'E02006199',
        '9LL' => 'E02006199',
        '9LN' => 'E02006199',
        '9LP' => 'E02006199',
        '9LQ' => 'E02006199',
        '9LR' => 'E02006199',
        '9LS' => 'E02006199',
        '9LT' => 'E02006199',
        '9LU' => 'E02006199',
        '9LW' => 'E02006199',
        '9LX' => 'E02006199',
        '9LY' => 'E02006199',
        '9LZ' => 'E02006199',
        '9NA' => 'E02006199',
        '9NB' => 'E02006199',
        '9ND' => 'E02006199',
        '9NE' => 'E02006199',
        '9NF' => 'E02006199',
        '9NG' => 'E02006199',
        '9NH' => 'E02006199',
        '9NJ' => 'E02006199',
        '9NL' => 'E02006199',
        '9NN' => 'E02006199',
        '9NP' => 'E02006199',
        '9NQ' => 'E02006199',
        '9NR' => 'E02006199',
        '9NS' => 'E02006202',
        '9NT' => 'E02006199',
        '9NU' => 'E02006202',
        '9NW' => 'E02006199',
        '9NX' => 'E02006174',
        '9PA' => 'E02006202',
        '9PB' => 'E02006199',
        '9PD' => 'E02006199',
        '9PE' => 'E02006199',
        '9PF' => 'E02006199',
        '9PG' => 'E02006199',
        '9PH' => 'E02006199',
        '9PJ' => 'E02006199',
        '9PL' => 'E02006199',
        '9PN' => 'E02006199',
        '9PP' => 'E02006199',
        '9PQ' => 'E02006199',
        '9PR' => 'E02006193',
        '9PS' => 'E02006193',
        '9PT' => 'E02006193',
        '9PU' => 'E02006193',
        '9PW' => 'E02006193',
        '9PX' => 'E02006193',
        '9PY' => 'E02006193',
        '9PZ' => 'E02006193',
        '9QA' => 'E02006193',
        '9QB' => 'E02006193',
        '9QD' => 'E02006193',
        '9QE' => 'E02006199',
        '9QF' => 'E02006193',
        '9QG' => 'E02006199',
        '9QH' => 'E02006199',
        '9QJ' => 'E02006199',
        '9QL' => 'E02006199',
        '9QN' => 'E02006199',
        '9QP' => 'E02006193',
        '9QQ' => 'E02006199',
        '9QR' => 'E02006193',
        '9QS' => 'E02006193',
        '9QT' => 'E02006193',
        '9QU' => 'E02006193',
        '9QX' => 'E02006193',
        '9QY' => 'E02006199',
        '9RB' => 'E02006193',
        '9RY' => 'E02006193',
        '9RZ' => 'E02006193',
        '9SA' => 'E02006193',
        '9SB' => 'E02006193',
        '9SD' => 'E02006193',
        '9SE' => 'E02006193',
        '9SF' => 'E02006195',
        '9SG' => 'E02006199',
        '9SH' => 'E02006193',
        '9SJ' => 'E02006193',
        '9SL' => 'E02006193',
        '9SN' => 'E02006193',
        '9SP' => 'E02006193',
        '9SQ' => 'E02006193',
        '9SR' => 'E02006193',
        '9ST' => 'E02006193',
        '9SU' => 'E02006193',
        '9SW' => 'E02006193',
        '9SX' => 'E02006193',
        '9SY' => 'E02006193',
        '9SZ' => 'E02006193',
        '9TA' => 'E02006193',
        '9TB' => 'E02006195',
        '9TD' => 'E02006195',
        '9TE' => 'E02006195',
        '9TF' => 'E02006199',
        '9TG' => 'E02006199',
        '9TH' => 'E02006198',
        '9TJ' => 'E02006193',
        '9TL' => 'E02006174',
        '9TN' => 'E02006193',
        '9TP' => 'E02006199',
        '9TQ' => 'E02006193',
        '9TS' => 'E02006193',
        '9TW' => 'E02006193',
        '9WF' => 'E02006193',
        '9WG' => 'E02006193',
        '9WQ' => 'E02006199',
        '9WT' => 'E02006199',
        '9WU' => 'E02006193',
        '9WY' => 'E02006199',
        '9WZ' => 'E02006199',
        '9XW' => 'E02006199',
        '9ZY' => 'E02006199',
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