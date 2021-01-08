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
final class CM12
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02004426',
        '0AB' => 'E02004426',
        '0AD' => 'E02004426',
        '0AE' => 'E02004426',
        '0AF' => 'E02004425',
        '0AG' => 'E02004426',
        '0AH' => 'E02004426',
        '0AJ' => 'E02004426',
        '0AL' => 'E02004427',
        '0AN' => 'E02004426',
        '0AP' => 'E02004426',
        '0AQ' => 'E02004426',
        '0AR' => 'E02004426',
        '0AS' => 'E02004427',
        '0AT' => 'E02004426',
        '0AU' => 'E02004426',
        '0AW' => 'E02004427',
        '0AX' => 'E02004426',
        '0AY' => 'E02004427',
        '0AZ' => 'E02004426',
        '0BA' => 'E02004426',
        '0BB' => 'E02004426',
        '0BD' => 'E02004426',
        '0BE' => 'E02004426',
        '0BG' => 'E02004426',
        '0BH' => 'E02004426',
        '0BJ' => 'E02004426',
        '0BL' => 'E02004424',
        '0BN' => 'E02004425',
        '0BP' => 'E02004426',
        '0BQ' => 'E02004426',
        '0BS' => 'E02004426',
        '0BT' => 'E02004425',
        '0BU' => 'E02004427',
        '0BW' => 'E02004426',
        '0BX' => 'E02004425',
        '0BY' => 'E02004427',
        '0BZ' => 'E02004425',
        '0DA' => 'E02004426',
        '0DB' => 'E02004427',
        '0DD' => 'E02004427',
        '0DE' => 'E02004426',
        '0DF' => 'E02004427',
        '0DG' => 'E02004425',
        '0DH' => 'E02004427',
        '0DJ' => 'E02004427',
        '0DL' => 'E02004427',
        '0DN' => 'E02004425',
        '0DP' => 'E02004425',
        '0DQ' => 'E02004427',
        '0DR' => 'E02004426',
        '0DS' => 'E02004425',
        '0DT' => 'E02004426',
        '0DU' => 'E02004426',
        '0DW' => 'E02004426',
        '0DX' => 'E02004426',
        '0DY' => 'E02004426',
        '0DZ' => 'E02004426',
        '0EA' => 'E02004425',
        '0EB' => 'E02004427',
        '0ED' => 'E02004425',
        '0EE' => 'E02004425',
        '0EF' => 'E02004425',
        '0EG' => 'E02004425',
        '0EH' => 'E02004425',
        '0EJ' => 'E02004425',
        '0EL' => 'E02004425',
        '0EN' => 'E02004425',
        '0EP' => 'E02004425',
        '0EQ' => 'E02004425',
        '0ER' => 'E02004425',
        '0ES' => 'E02004425',
        '0ET' => 'E02004425',
        '0EU' => 'E02004425',
        '0EW' => 'E02004425',
        '0EX' => 'E02004425',
        '0EZ' => 'E02004425',
        '0FA' => 'E02004424',
        '0FB' => 'E02004424',
        '0FD' => 'E02004424',
        '0FE' => 'E02004424',
        '0FF' => 'E02004424',
        '0FG' => 'E02004424',
        '0FH' => 'E02004424',
        '0FJ' => 'E02004424',
        '0FL' => 'E02004424',
        '0FN' => 'E02004424',
        '0FP' => 'E02004425',
        '0FQ' => 'E02004424',
        '0FR' => 'E02004425',
        '0FS' => 'E02004425',
        '0FT' => 'E02004427',
        '0FU' => 'E02004425',
        '0FW' => 'E02004424',
        '0FX' => 'E02004426',
        '0FY' => 'E02004427',
        '0FZ' => 'E02004427',
        '0GA' => 'E02004427',
        '0GB' => 'E02004426',
        '0GD' => 'E02004425',
        '0GE' => 'E02004425',
        '0GF' => 'E02004425',
        '0GG' => 'E02004425',
        '0GH' => 'E02004425',
        '0GL' => 'E02004427',
        '0GN' => 'E02004427',
        '0GP' => 'E02004425',
        '0GS' => 'E02004427',
        '0GU' => 'E02004427',
        '0GW' => 'E02004424',
        '0GX' => 'E02004427',
        '0GY' => 'E02004427',
        '0GZ' => 'E02004426',
        '0HA' => 'E02004425',
        '0HB' => 'E02004425',
        '0HD' => 'E02004425',
        '0HE' => 'E02004425',
        '0HF' => 'E02004425',
        '0HG' => 'E02004425',
        '0HH' => 'E02004425',
        '0HJ' => 'E02004425',
        '0HL' => 'E02004425',
        '0HN' => 'E02004425',
        '0HP' => 'E02004425',
        '0HQ' => 'E02004425',
        '0HR' => 'E02004425',
        '0HS' => 'E02004425',
        '0HT' => 'E02004425',
        '0HU' => 'E02004425',
        '0HW' => 'E02004425',
        '0HX' => 'E02004425',
        '0HY' => 'E02004426',
        '0HZ' => 'E02004425',
        '0JA' => 'E02004425',
        '0JB' => 'E02004425',
        '0JD' => 'E02004425',
        '0JE' => 'E02004425',
        '0JF' => 'E02004425',
        '0JG' => 'E02004425',
        '0JH' => 'E02004425',
        '0JJ' => 'E02004427',
        '0JL' => 'E02004425',
        '0JN' => 'E02004426',
        '0JP' => 'E02004425',
        '0JQ' => 'E02004425',
        '0JR' => 'E02004425',
        '0JS' => 'E02004425',
        '0JT' => 'E02004425',
        '0JU' => 'E02004425',
        '0JW' => 'E02004425',
        '0JX' => 'E02004425',
        '0JY' => 'E02004425',
        '0JZ' => 'E02004425',
        '0LA' => 'E02004425',
        '0LB' => 'E02004425',
        '0LD' => 'E02004425',
        '0LE' => 'E02004425',
        '0LF' => 'E02004425',
        '0LG' => 'E02004425',
        '0LH' => 'E02004425',
        '0LJ' => 'E02004425',
        '0LL' => 'E02004425',
        '0LN' => 'E02004425',
        '0LP' => 'E02004425',
        '0LQ' => 'E02004427',
        '0LR' => 'E02004425',
        '0LS' => 'E02004424',
        '0LT' => 'E02004426',
        '0LU' => 'E02004425',
        '0LW' => 'E02004425',
        '0LX' => 'E02004425',
        '0LY' => 'E02004425',
        '0LZ' => 'E02004425',
        '0NA' => 'E02004425',
        '0NB' => 'E02004425',
        '0ND' => 'E02004425',
        '0NE' => 'E02004425',
        '0NF' => 'E02004425',
        '0NG' => 'E02004425',
        '0NH' => 'E02004426',
        '0NJ' => 'E02004426',
        '0NL' => 'E02004426',
        '0NN' => 'E02004425',
        '0NP' => 'E02004425',
        '0NQ' => 'E02004426',
        '0NR' => 'E02004426',
        '0NS' => 'E02004426',
        '0NT' => 'E02004426',
        '0NU' => 'E02004426',
        '0NW' => 'E02004425',
        '0NX' => 'E02004424',
        '0NY' => 'E02004426',
        '0NZ' => 'E02004424',
        '0PA' => 'E02004424',
        '0PB' => 'E02004425',
        '0PD' => 'E02004427',
        '0PE' => 'E02004424',
        '0PF' => 'E02004425',
        '0PG' => 'E02004427',
        '0PH' => 'E02004426',
        '0PJ' => 'E02004426',
        '0PL' => 'E02004426',
        '0PN' => 'E02004426',
        '0PP' => 'E02004424',
        '0PQ' => 'E02004427',
        '0PR' => 'E02004424',
        '0PS' => 'E02004424',
        '0PT' => 'E02004424',
        '0PU' => 'E02004424',
        '0PW' => 'E02004427',
        '0PX' => 'E02004424',
        '0PY' => 'E02004425',
        '0PZ' => 'E02004424',
        '0QA' => 'E02004424',
        '0QB' => 'E02004424',
        '0QD' => 'E02004424',
        '0QE' => 'E02004424',
        '0QF' => 'E02004424',
        '0QG' => 'E02004424',
        '0QH' => 'E02004425',
        '0QJ' => 'E02004425',
        '0QL' => 'E02004425',
        '0QN' => 'E02004424',
        '0QP' => 'E02004424',
        '0QQ' => 'E02004424',
        '0QR' => 'E02004424',
        '0QS' => 'E02004424',
        '0QT' => 'E02004424',
        '0QU' => 'E02004424',
        '0QW' => 'E02004424',
        '0QX' => 'E02004424',
        '0QY' => 'E02004424',
        '0QZ' => 'E02004424',
        '0RA' => 'E02004424',
        '0RB' => 'E02004424',
        '0RD' => 'E02004424',
        '0RE' => 'E02004427',
        '0RF' => 'E02004424',
        '0RG' => 'E02004427',
        '0RH' => 'E02004426',
        '0RJ' => 'E02004427',
        '0RL' => 'E02004427',
        '0RN' => 'E02004426',
        '0RP' => 'E02004424',
        '0RQ' => 'E02004426',
        '0RR' => 'E02004424',
        '0RS' => 'E02004424',
        '0RT' => 'E02004424',
        '0RU' => 'E02004426',
        '0RW' => 'E02004426',
        '0RX' => 'E02004426',
        '0RY' => 'E02004427',
        '0RZ' => 'E02004427',
        '0SA' => 'E02004424',
        '0SB' => 'E02004424',
        '0SD' => 'E02004424',
        '0SE' => 'E02004424',
        '0SF' => 'E02004426',
        '0SG' => 'E02004424',
        '0SH' => 'E02004424',
        '0SJ' => 'E02004424',
        '0SL' => 'E02004427',
        '0SN' => 'E02004425',
        '0SP' => 'E02004425',
        '0SQ' => 'E02004426',
        '0SR' => 'E02004425',
        '0SS' => 'E02004425',
        '0ST' => 'E02004425',
        '0SU' => 'E02004425',
        '0SW' => 'E02004425',
        '0SX' => 'E02004425',
        '0SY' => 'E02004425',
        '0SZ' => 'E02004425',
        '0TA' => 'E02004425',
        '0TB' => 'E02004425',
        '0TD' => 'E02004425',
        '0TE' => 'E02004425',
        '0TF' => 'E02004425',
        '0TG' => 'E02004427',
        '0TH' => 'E02004425',
        '0TJ' => 'E02004425',
        '0TL' => 'E02004425',
        '0TN' => 'E02004425',
        '0TP' => 'E02004425',
        '0TQ' => 'E02004425',
        '0TR' => 'E02004426',
        '0TS' => 'E02004425',
        '0TT' => 'E02004427',
        '0TU' => 'E02004465',
        '0TW' => 'E02004426',
        '0TX' => 'E02004426',
        '0TY' => 'E02004425',
        '0TZ' => 'E02004426',
        '0UA' => 'E02004425',
        '0UB' => 'E02004425',
        '0UD' => 'E02004425',
        '0UE' => 'E02004425',
        '0UF' => 'E02004425',
        '0UG' => 'E02004425',
        '0UH' => 'E02004425',
        '0UJ' => 'E02004425',
        '0UL' => 'E02004425',
        '0UN' => 'E02004425',
        '0UP' => 'E02004425',
        '0UQ' => 'E02004425',
        '0UR' => 'E02004425',
        '0US' => 'E02004427',
        '0UT' => 'E02004424',
        '0UU' => 'E02004424',
        '0UW' => 'E02004425',
        '0UX' => 'E02004427',
        '0UY' => 'E02004427',
        '0UZ' => 'E02004427',
        '0WA' => 'E02004427',
        '0WB' => 'E02004427',
        '0WD' => 'E02004427',
        '0WE' => 'E02004425',
        '0WF' => 'E02004427',
        '0WG' => 'E02004427',
        '0WH' => 'E02004427',
        '0WJ' => 'E02004427',
        '0WL' => 'E02004427',
        '0WN' => 'E02004425',
        '0WP' => 'E02004427',
        '0WQ' => 'E02004425',
        '0WR' => 'E02004427',
        '0WS' => 'E02004427',
        '0WT' => 'E02004427',
        '0WU' => 'E02004427',
        '0WW' => 'E02004427',
        '0WX' => 'E02004427',
        '0WY' => 'E02004425',
        '0WZ' => 'E02004427',
        '0XA' => 'E02004425',
        '0XB' => 'E02004425',
        '0XD' => 'E02004425',
        '0XE' => 'E02004425',
        '0XF' => 'E02004427',
        '0XG' => 'E02004425',
        '0XH' => 'E02004425',
        '0XJ' => 'E02004425',
        '0XL' => 'E02004425',
        '0XN' => 'E02004425',
        '0XP' => 'E02004425',
        '0XQ' => 'E02004425',
        '0XR' => 'E02004425',
        '0XS' => 'E02004425',
        '0XT' => 'E02004427',
        '0XU' => 'E02004427',
        '0XW' => 'E02004425',
        '0XX' => 'E02004424',
        '0XY' => 'E02004424',
        '0XZ' => 'E02004425',
        '0YA' => 'E02004425',
        '0YB' => 'E02004425',
        '0YD' => 'E02004424',
        '0YE' => 'E02004424',
        '0YF' => 'E02004424',
        '0YG' => 'E02004424',
        '0YH' => 'E02004425',
        '0YJ' => 'E02004425',
        '0YL' => 'E02004425',
        '0YN' => 'E02004425',
        '0YP' => 'E02004425',
        '0YQ' => 'E02004424',
        '0YR' => 'E02004425',
        '0YS' => 'E02004425',
        '0YT' => 'E02004427',
        '0YU' => 'E02004425',
        '0YW' => 'E02004425',
        '0YX' => 'E02004425',
        '0YY' => 'E02004425',
        '0YZ' => 'E02004425',
        '0ZA' => 'E02004427',
        '0ZB' => 'E02004427',
        '0ZD' => 'E02004427',
        '0ZQ' => 'E02004425',
        '2AH' => 'E02004427',
        '2AL' => 'E02004427',
        '2AN' => 'E02004427',
        '2AP' => 'E02004427',
        '2AQ' => 'E02004427',
        '2AR' => 'E02004427',
        '2AW' => 'E02004427',
        '2AY' => 'E02004427',
        '2BA' => 'E02004427',
        '2BB' => 'E02004427',
        '2BD' => 'E02004427',
        '2BF' => 'E02004427',
        '2BG' => 'E02004427',
        '2BH' => 'E02004427',
        '2BN' => 'E02004427',
        '2BQ' => 'E02004427',
        '2BR' => 'E02004427',
        '2BS' => 'E02004427',
        '2BT' => 'E02004427',
        '2BU' => 'E02004427',
        '2BW' => 'E02004427',
        '2BX' => 'E02004427',
        '2BY' => 'E02004427',
        '2BZ' => 'E02004427',
        '2DA' => 'E02004427',
        '2DB' => 'E02004427',
        '2DD' => 'E02004427',
        '2DE' => 'E02004427',
        '2DF' => 'E02004427',
        '2DG' => 'E02004427',
        '2DH' => 'E02004427',
        '2DJ' => 'E02004427',
        '2DL' => 'E02004427',
        '2DN' => 'E02004427',
        '2DP' => 'E02004427',
        '2DR' => 'E02004427',
        '2DS' => 'E02004427',
        '2DT' => 'E02004427',
        '2DU' => 'E02004427',
        '2DW' => 'E02004427',
        '2DX' => 'E02004427',
        '2DY' => 'E02004427',
        '2DZ' => 'E02004427',
        '2EA' => 'E02004427',
        '2EB' => 'E02004427',
        '2ED' => 'E02004427',
        '2EE' => 'E02004427',
        '2EF' => 'E02004427',
        '2EG' => 'E02004427',
        '2EH' => 'E02004427',
        '2EJ' => 'E02004427',
        '2EL' => 'E02004427',
        '2EN' => 'E02004427',
        '2EP' => 'E02004427',
        '2EQ' => 'E02004427',
        '2ER' => 'E02004427',
        '2ES' => 'E02004427',
        '2ET' => 'E02004427',
        '2EW' => 'E02004427',
        '2EX' => 'E02004427',
        '2EY' => 'E02004427',
        '2EZ' => 'E02004427',
        '2FA' => 'E02004427',
        '2FB' => 'E02004427',
        '2FD' => 'E02004427',
        '2FE' => 'E02004427',
        '2FF' => 'E02004427',
        '2FG' => 'E02004427',
        '2FH' => 'E02004427',
        '2FJ' => 'E02004427',
        '2FL' => 'E02004427',
        '2FN' => 'E02004427',
        '2FP' => 'E02004427',
        '2FQ' => 'E02004427',
        '2FR' => 'E02004427',
        '2FS' => 'E02004427',
        '2FT' => 'E02004427',
        '9AA' => 'E02004427',
        '9AB' => 'E02004427',
        '9AD' => 'E02004426',
        '9AE' => 'E02004427',
        '9AF' => 'E02004427',
        '9AG' => 'E02004427',
        '9AH' => 'E02004427',
        '9AJ' => 'E02004426',
        '9AL' => 'E02004427',
        '9AN' => 'E02004426',
        '9AP' => 'E02004427',
        '9AQ' => 'E02004427',
        '9AR' => 'E02004427',
        '9AS' => 'E02004426',
        '9AT' => 'E02004426',
        '9AU' => 'E02004426',
        '9AW' => 'E02004427',
        '9AX' => 'E02004426',
        '9AY' => 'E02004426',
        '9AZ' => 'E02004426',
        '9BA' => 'E02004426',
        '9BB' => 'E02004426',
        '9BD' => 'E02004426',
        '9BE' => 'E02004427',
        '9BF' => 'E02004426',
        '9BG' => 'E02004426',
        '9BH' => 'E02004427',
        '9BJ' => 'E02004426',
        '9BL' => 'E02004427',
        '9BN' => 'E02004426',
        '9BP' => 'E02004426',
        '9BQ' => 'E02004426',
        '9BS' => 'E02004426',
        '9BT' => 'E02004426',
        '9BU' => 'E02004427',
        '9BW' => 'E02004427',
        '9BX' => 'E02004426',
        '9BY' => 'E02004427',
        '9BZ' => 'E02004427',
        '9DA' => 'E02004427',
        '9DB' => 'E02004427',
        '9DD' => 'E02004427',
        '9DE' => 'E02004427',
        '9DF' => 'E02004427',
        '9DG' => 'E02004427',
        '9DH' => 'E02004427',
        '9DJ' => 'E02004427',
        '9DL' => 'E02004427',
        '9DN' => 'E02004427',
        '9DP' => 'E02004427',
        '9DQ' => 'E02004427',
        '9DR' => 'E02004427',
        '9DS' => 'E02004427',
        '9DT' => 'E02004427',
        '9DU' => 'E02004427',
        '9DW' => 'E02004427',
        '9DX' => 'E02004427',
        '9DY' => 'E02004426',
        '9DZ' => 'E02004427',
        '9EA' => 'E02004427',
        '9EB' => 'E02004427',
        '9ED' => 'E02004427',
        '9EE' => 'E02004427',
        '9EF' => 'E02004427',
        '9EG' => 'E02004427',
        '9EH' => 'E02004427',
        '9EJ' => 'E02004427',
        '9EL' => 'E02004427',
        '9EN' => 'E02004427',
        '9EP' => 'E02004427',
        '9EQ' => 'E02004427',
        '9ER' => 'E02004427',
        '9ES' => 'E02004427',
        '9ET' => 'E02004427',
        '9EU' => 'E02004427',
        '9EW' => 'E02004427',
        '9EX' => 'E02004427',
        '9EY' => 'E02004427',
        '9EZ' => 'E02004427',
        '9FA' => 'E02004427',
        '9FB' => 'E02004427',
        '9FD' => 'E02004427',
        '9FF' => 'E02004427',
        '9FG' => 'E02004427',
        '9FH' => 'E02004427',
        '9FJ' => 'E02004427',
        '9FL' => 'E02004427',
        '9FN' => 'E02004427',
        '9FP' => 'E02004426',
        '9FQ' => 'E02004427',
        '9FR' => 'E02004427',
        '9FS' => 'E02004427',
        '9FT' => 'E02004427',
        '9FU' => 'E02004427',
        '9FW' => 'E02004427',
        '9FZ' => 'E02004427',
        '9GA' => 'E02004427',
        '9GB' => 'E02004427',
        '9GD' => 'E02004427',
        '9GE' => 'E02004427',
        '9GF' => 'E02004426',
        '9GG' => 'E02004427',
        '9GN' => 'E02004427',
        '9GW' => 'E02004427',
        '9GX' => 'E02004427',
        '9GY' => 'E02004427',
        '9HA' => 'E02004427',
        '9HB' => 'E02004427',
        '9HD' => 'E02004427',
        '9HE' => 'E02004427',
        '9HF' => 'E02004427',
        '9HG' => 'E02004427',
        '9HH' => 'E02004427',
        '9HJ' => 'E02004427',
        '9HL' => 'E02004427',
        '9HN' => 'E02004427',
        '9HP' => 'E02004427',
        '9HQ' => 'E02004427',
        '9HR' => 'E02004427',
        '9HS' => 'E02004427',
        '9HT' => 'E02004427',
        '9HU' => 'E02004427',
        '9HW' => 'E02004427',
        '9HX' => 'E02004427',
        '9HY' => 'E02004427',
        '9HZ' => 'E02004427',
        '9JA' => 'E02004427',
        '9JB' => 'E02004427',
        '9JD' => 'E02004427',
        '9JE' => 'E02004427',
        '9JF' => 'E02004427',
        '9JG' => 'E02004427',
        '9JH' => 'E02004427',
        '9JJ' => 'E02004427',
        '9JL' => 'E02004427',
        '9JN' => 'E02004427',
        '9JP' => 'E02004427',
        '9JQ' => 'E02004427',
        '9JR' => 'E02004427',
        '9JS' => 'E02004427',
        '9JT' => 'E02004427',
        '9JU' => 'E02004427',
        '9JW' => 'E02004426',
        '9JX' => 'E02004427',
        '9JY' => 'E02004427',
        '9JZ' => 'E02004427',
        '9LA' => 'E02004427',
        '9LB' => 'E02004427',
        '9LD' => 'E02004427',
        '9LE' => 'E02004427',
        '9LF' => 'E02004427',
        '9LG' => 'E02004427',
        '9LH' => 'E02004427',
        '9LJ' => 'E02004427',
        '9LL' => 'E02004427',
        '9LN' => 'E02004427',
        '9LP' => 'E02004427',
        '9LQ' => 'E02004427',
        '9LR' => 'E02004427',
        '9LS' => 'E02004427',
        '9LT' => 'E02004426',
        '9LU' => 'E02004426',
        '9LW' => 'E02004427',
        '9LX' => 'E02004426',
        '9LY' => 'E02004426',
        '9LZ' => 'E02004427',
        '9NA' => 'E02004426',
        '9NB' => 'E02004427',
        '9ND' => 'E02004427',
        '9NE' => 'E02004427',
        '9NF' => 'E02004427',
        '9NG' => 'E02004427',
        '9NH' => 'E02004427',
        '9NJ' => 'E02004427',
        '9NL' => 'E02004427',
        '9NN' => 'E02004427',
        '9NP' => 'E02004427',
        '9NQ' => 'E02004427',
        '9NR' => 'E02004427',
        '9NS' => 'E02004427',
        '9NT' => 'E02004427',
        '9NU' => 'E02004427',
        '9NW' => 'E02004427',
        '9NX' => 'E02004427',
        '9NY' => 'E02004427',
        '9NZ' => 'E02004427',
        '9PA' => 'E02004427',
        '9PB' => 'E02004427',
        '9PD' => 'E02004427',
        '9PE' => 'E02004427',
        '9PF' => 'E02004427',
        '9PG' => 'E02004427',
        '9PH' => 'E02004427',
        '9PJ' => 'E02004427',
        '9PL' => 'E02004427',
        '9PN' => 'E02004427',
        '9PP' => 'E02004427',
        '9PQ' => 'E02004427',
        '9PR' => 'E02004427',
        '9PS' => 'E02004427',
        '9PT' => 'E02004427',
        '9PU' => 'E02004427',
        '9PW' => 'E02004427',
        '9PX' => 'E02004427',
        '9PY' => 'E02004427',
        '9PZ' => 'E02004427',
        '9QA' => 'E02004427',
        '9QB' => 'E02004427',
        '9QD' => 'E02004427',
        '9QE' => 'E02004427',
        '9QF' => 'E02004427',
        '9QG' => 'E02004427',
        '9QH' => 'E02004427',
        '9QJ' => 'E02004427',
        '9QL' => 'E02004427',
        '9QN' => 'E02004427',
        '9QP' => 'E02004427',
        '9QQ' => 'E02004427',
        '9QR' => 'E02004427',
        '9QS' => 'E02004427',
        '9QT' => 'E02004427',
        '9QU' => 'E02004427',
        '9QW' => 'E02004427',
        '9QX' => 'E02004427',
        '9QY' => 'E02004427',
        '9QZ' => 'E02004427',
        '9RA' => 'E02004427',
        '9RB' => 'E02004427',
        '9RD' => 'E02004427',
        '9RE' => 'E02004427',
        '9RF' => 'E02004427',
        '9RG' => 'E02004427',
        '9RH' => 'E02004427',
        '9RJ' => 'E02004427',
        '9RL' => 'E02004427',
        '9RN' => 'E02004427',
        '9RP' => 'E02004427',
        '9RQ' => 'E02004426',
        '9RR' => 'E02004432',
        '9RS' => 'E02004432',
        '9RT' => 'E02004432',
        '9RU' => 'E02004427',
        '9RW' => 'E02004427',
        '9SA' => 'E02004427',
        '9SB' => 'E02004432',
        '9SD' => 'E02004432',
        '9SE' => 'E02004432',
        '9SG' => 'E02004432',
        '9SH' => 'E02004432',
        '9SJ' => 'E02004432',
        '9SL' => 'E02004472',
        '9SN' => 'E02004472',
        '9SP' => 'E02004432',
        '9SQ' => 'E02004427',
        '9SR' => 'E02004432',
        '9SS' => 'E02004432',
        '9ST' => 'E02004432',
        '9SU' => 'E02004432',
        '9SW' => 'E02004427',
        '9SX' => 'E02004432',
        '9SY' => 'E02004432',
        '9SZ' => 'E02004432',
        '9TA' => 'E02004432',
        '9TB' => 'E02004432',
        '9TD' => 'E02004432',
        '9TE' => 'E02004432',
        '9TF' => 'E02004432',
        '9TG' => 'E02004432',
        '9TH' => 'E02004432',
        '9TJ' => 'E02004432',
        '9TL' => 'E02004432',
        '9TN' => 'E02004432',
        '9TP' => 'E02004432',
        '9TQ' => 'E02004427',
        '9TR' => 'E02004432',
        '9TS' => 'E02004432',
        '9TT' => 'E02004432',
        '9TU' => 'E02004432',
        '9TW' => 'E02004432',
        '9TX' => 'E02004432',
        '9TY' => 'E02004433',
        '9TZ' => 'E02004433',
        '9UA' => 'E02004432',
        '9UB' => 'E02004432',
        '9UG' => 'E02004432',
        '9UH' => 'E02004432',
        '9UJ' => 'E02004432',
        '9UL' => 'E02004432',
        '9UN' => 'E02004432',
        '9UP' => 'E02004432',
        '9UR' => 'E02004432',
        '9UT' => 'E02004432',
        '9UU' => 'E02004432',
        '9UW' => 'E02004432',
        '9UX' => 'E02004432',
        '9UY' => 'E02004427',
        '9UZ' => 'E02004432',
        '9WA' => 'E02004432',
        '9WB' => 'E02004427',
        '9WD' => 'E02004427',
        '9WE' => 'E02004432',
        '9WF' => 'E02004427',
        '9WG' => 'E02004432',
        '9WH' => 'E02004432',
        '9WJ' => 'E02004427',
        '9WL' => 'E02004427',
        '9WN' => 'E02004427',
        '9WP' => 'E02004427',
        '9WQ' => 'E02004427',
        '9WR' => 'E02004427',
        '9WS' => 'E02004427',
        '9WT' => 'E02004427',
        '9WU' => 'E02004427',
        '9WW' => 'E02004427',
        '9WX' => 'E02004427',
        '9WY' => 'E02004427',
        '9WZ' => 'E02004427',
        '9XA' => 'E02004432',
        '9XB' => 'E02004432',
        '9XD' => 'E02004427',
        '9XE' => 'E02004427',
        '9XF' => 'E02004427',
        '9XG' => 'E02004427',
        '9XH' => 'E02004427',
        '9XJ' => 'E02004427',
        '9XL' => 'E02004427',
        '9XN' => 'E02004427',
        '9XQ' => 'E02004427',
        '9XS' => 'E02004427',
        '9XT' => 'E02004427',
        '9XU' => 'E02004427',
        '9XX' => 'E02004426',
        '9XY' => 'E02004427',
        '9XZ' => 'E02004427',
        '9YA' => 'E02004427',
        '9YB' => 'E02004427',
        '9YD' => 'E02004427',
        '9YE' => 'E02004427',
        '9YF' => 'E02004427',
        '9YJ' => 'E02004427',
        '9YQ' => 'E02004427',
        '9YY' => 'E02004426',
        '9YZ' => 'E02004427',
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