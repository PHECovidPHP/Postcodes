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
final class SW10
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02000394',
        '0AB' => 'E02000597',
        '0AD' => 'E02000596',
        '0AE' => 'E02000596',
        '0AF' => 'E02000597',
        '0AG' => 'E02000596',
        '0AH' => 'E02000596',
        '0AJ' => 'E02000596',
        '0AL' => 'E02000596',
        '0AN' => 'E02000596',
        '0AP' => 'E02000596',
        '0AQ' => 'E02000596',
        '0AR' => 'E02000596',
        '0AS' => 'E02000596',
        '0AT' => 'E02000597',
        '0AU' => 'E02000596',
        '0AW' => 'E02000596',
        '0AX' => 'E02000596',
        '0AY' => 'E02000596',
        '0AZ' => 'E02000595',
        '0BA' => 'E02000597',
        '0BB' => 'E02000597',
        '0BD' => 'E02000394',
        '0BE' => 'E02000394',
        '0BF' => 'E02000394',
        '0BG' => 'E02000596',
        '0BH' => 'E02000596',
        '0BJ' => 'E02000596',
        '0BL' => 'E02000596',
        '0BN' => 'E02000597',
        '0BP' => 'E02000597',
        '0BQ' => 'E02000596',
        '0BS' => 'E02000597',
        '0BT' => 'E02000597',
        '0BU' => 'E02000597',
        '0BW' => 'E02000597',
        '0BX' => 'E02000597',
        '0BY' => 'E02000597',
        '0BZ' => 'E02000597',
        '0DA' => 'E02000597',
        '0DB' => 'E02000597',
        '0DD' => 'E02000394',
        '0DE' => 'E02000597',
        '0DF' => 'E02000597',
        '0DG' => 'E02000597',
        '0DH' => 'E02000597',
        '0DJ' => 'E02000597',
        '0DL' => 'E02000597',
        '0DN' => 'E02000597',
        '0DP' => 'E02000597',
        '0DQ' => 'E02000597',
        '0DR' => 'E02000597',
        '0DS' => 'E02000597',
        '0DT' => 'E02000597',
        '0DU' => 'E02000597',
        '0DW' => 'E02000597',
        '0DX' => 'E02000597',
        '0DY' => 'E02000597',
        '0DZ' => 'E02000597',
        '0EA' => 'E02000597',
        '0EB' => 'E02000597',
        '0ED' => 'E02000597',
        '0EE' => 'E02000597',
        '0EF' => 'E02000597',
        '0EG' => 'E02000597',
        '0EH' => 'E02000597',
        '0EJ' => 'E02000597',
        '0EL' => 'E02000597',
        '0EN' => 'E02000597',
        '0EP' => 'E02000597',
        '0EQ' => 'E02000597',
        '0ER' => 'E02000597',
        '0ES' => 'E02000597',
        '0ET' => 'E02000597',
        '0EU' => 'E02000596',
        '0EW' => 'E02000597',
        '0EX' => 'E02000597',
        '0EY' => 'E02000597',
        '0EZ' => 'E02000597',
        '0FA' => 'E02000394',
        '0FB' => 'E02000596',
        '0FD' => 'E02000597',
        '0FE' => 'E02000596',
        '0FF' => 'E02000597',
        '0FG' => 'E02000596',
        '0FH' => 'E02000597',
        '0FJ' => 'E02000597',
        '0FL' => 'E02000596',
        '0FN' => 'E02000596',
        '0FP' => 'E02000597',
        '0FQ' => 'E02000597',
        '0FR' => 'E02000596',
        '0FS' => 'E02000597',
        '0FT' => 'E02000597',
        '0FU' => 'E02000597',
        '0FW' => 'E02000597',
        '0FX' => 'E02000596',
        '0FY' => 'E02000597',
        '0FZ' => 'E02000596',
        '0GA' => 'E02000597',
        '0GB' => 'E02000596',
        '0GD' => 'E02000596',
        '0GE' => 'E02000596',
        '0GF' => 'E02000597',
        '0GG' => 'E02000596',
        '0GH' => 'E02000596',
        '0GJ' => 'E02000596',
        '0GL' => 'E02000596',
        '0GN' => 'E02000596',
        '0GP' => 'E02000597',
        '0GQ' => 'E02000596',
        '0GR' => 'E02000596',
        '0GS' => 'E02000596',
        '0GT' => 'E02000596',
        '0GU' => 'E02000596',
        '0GW' => 'E02000596',
        '0GX' => 'E02000596',
        '0GY' => 'E02000596',
        '0GZ' => 'E02000596',
        '0HA' => 'E02000597',
        '0HB' => 'E02000597',
        '0HD' => 'E02000597',
        '0HE' => 'E02000597',
        '0HF' => 'E02000597',
        '0HG' => 'E02000394',
        '0HH' => 'E02000596',
        '0HJ' => 'E02000595',
        '0HL' => 'E02000595',
        '0HN' => 'E02000595',
        '0HP' => 'E02000595',
        '0HQ' => 'E02000394',
        '0HR' => 'E02000595',
        '0HS' => 'E02000595',
        '0HT' => 'E02000595',
        '0HU' => 'E02000595',
        '0HW' => 'E02000394',
        '0HX' => 'E02000595',
        '0HY' => 'E02000595',
        '0HZ' => 'E02000595',
        '0JA' => 'E02000595',
        '0JB' => 'E02000595',
        '0JD' => 'E02000595',
        '0JE' => 'E02000595',
        '0JF' => 'E02000596',
        '0JG' => 'E02000596',
        '0JH' => 'E02000595',
        '0JJ' => 'E02000597',
        '0JL' => 'E02000597',
        '0JN' => 'E02000596',
        '0JP' => 'E02000597',
        '0JQ' => 'E02000596',
        '0JR' => 'E02000394',
        '0JS' => 'E02000595',
        '0JW' => 'E02000597',
        '0JX' => 'E02000597',
        '0JY' => 'E02000597',
        '0JZ' => 'E02000597',
        '0LA' => 'E02000597',
        '0LB' => 'E02000597',
        '0LD' => 'E02000597',
        '0LE' => 'E02000597',
        '0LF' => 'E02000597',
        '0LG' => 'E02000595',
        '0LH' => 'E02000595',
        '0LJ' => 'E02000595',
        '0LL' => 'E02000595',
        '0LN' => 'E02000595',
        '0LP' => 'E02000597',
        '0LQ' => 'E02000595',
        '0LR' => 'E02000597',
        '0LS' => 'E02000596',
        '0LT' => 'E02000597',
        '0LU' => 'E02000597',
        '0LW' => 'E02000596',
        '0LX' => 'E02000597',
        '0LY' => 'E02000596',
        '0LZ' => 'E02000596',
        '0NA' => 'E02000597',
        '0NB' => 'E02000597',
        '0ND' => 'E02000597',
        '0NE' => 'E02000596',
        '0NF' => 'E02000597',
        '0NG' => 'E02000596',
        '0NH' => 'E02000597',
        '0NJ' => 'E02000597',
        '0NL' => 'E02000597',
        '0NN' => 'E02000596',
        '0NP' => 'E02000597',
        '0NQ' => 'E02000596',
        '0NR' => 'E02000597',
        '0NS' => 'E02000597',
        '0NU' => 'E02000597',
        '0NW' => 'E02000596',
        '0NX' => 'E02000597',
        '0NY' => 'E02000597',
        '0NZ' => 'E02000597',
        '0PA' => 'E02000597',
        '0PB' => 'E02000597',
        '0PD' => 'E02000597',
        '0PE' => 'E02000597',
        '0PF' => 'E02000597',
        '0PG' => 'E02000597',
        '0PH' => 'E02000597',
        '0PJ' => 'E02000597',
        '0PL' => 'E02000597',
        '0PN' => 'E02000597',
        '0PP' => 'E02000597',
        '0PQ' => 'E02000597',
        '0PR' => 'E02000597',
        '0PS' => 'E02000597',
        '0PT' => 'E02000597',
        '0PU' => 'E02000597',
        '0PW' => 'E02000597',
        '0PX' => 'E02000597',
        '0PY' => 'E02000597',
        '0PZ' => 'E02000597',
        '0QA' => 'E02000597',
        '0QB' => 'E02000597',
        '0QD' => 'E02000597',
        '0QE' => 'E02000597',
        '0QF' => 'E02000597',
        '0QG' => 'E02000597',
        '0QH' => 'E02000597',
        '0QJ' => 'E02000597',
        '0QL' => 'E02000597',
        '0QN' => 'E02000597',
        '0QP' => 'E02000596',
        '0QQ' => 'E02000597',
        '0QR' => 'E02000596',
        '0QS' => 'E02000597',
        '0QT' => 'E02000596',
        '0QU' => 'E02000597',
        '0QW' => 'E02000597',
        '0QX' => 'E02000597',
        '0QY' => 'E02000596',
        '0QZ' => 'E02000597',
        '0RA' => 'E02000597',
        '0RB' => 'E02000597',
        '0RD' => 'E02000597',
        '0RE' => 'E02000597',
        '0RF' => 'E02000597',
        '0RG' => 'E02000597',
        '0RH' => 'E02000597',
        '0RJ' => 'E02000597',
        '0RL' => 'E02000597',
        '0RN' => 'E02000597',
        '0RP' => 'E02000597',
        '0RQ' => 'E02000597',
        '0RR' => 'E02000597',
        '0RS' => 'E02000597',
        '0RT' => 'E02000597',
        '0RU' => 'E02000597',
        '0RX' => 'E02000597',
        '0RY' => 'E02000597',
        '0RZ' => 'E02000597',
        '0SA' => 'E02000597',
        '0SB' => 'E02000597',
        '0SD' => 'E02000597',
        '0SE' => 'E02000597',
        '0SF' => 'E02000597',
        '0SG' => 'E02000597',
        '0SH' => 'E02000597',
        '0SJ' => 'E02000597',
        '0SN' => 'E02000597',
        '0SP' => 'E02000597',
        '0SQ' => 'E02000597',
        '0SR' => 'E02000597',
        '0SS' => 'E02000597',
        '0ST' => 'E02000597',
        '0SU' => 'E02000596',
        '0SW' => 'E02000597',
        '0SX' => 'E02000596',
        '0SY' => 'E02000391',
        '0SZ' => 'E02000597',
        '0TA' => 'E02000596',
        '0TB' => 'E02000597',
        '0TD' => 'E02000597',
        '0TE' => 'E02000597',
        '0TF' => 'E02000597',
        '0TG' => 'E02000597',
        '0TH' => 'E02000597',
        '0TJ' => 'E02000597',
        '0TL' => 'E02000597',
        '0TN' => 'E02000597',
        '0TP' => 'E02000597',
        '0TQ' => 'E02000597',
        '0TR' => 'E02000597',
        '0TS' => 'E02000597',
        '0TT' => 'E02000597',
        '0TU' => 'E02000597',
        '0TW' => 'E02000597',
        '0TX' => 'E02000597',
        '0TY' => 'E02000597',
        '0TZ' => 'E02000597',
        '0UA' => 'E02000597',
        '0UB' => 'E02000597',
        '0UD' => 'E02000597',
        '0UE' => 'E02000596',
        '0UF' => 'E02000596',
        '0UG' => 'E02000394',
        '0UH' => 'E02000596',
        '0UJ' => 'E02000597',
        '0UL' => 'E02000596',
        '0UN' => 'E02000597',
        '0UP' => 'E02000394',
        '0UQ' => 'E02000394',
        '0UR' => 'E02000394',
        '0US' => 'E02000596',
        '0UT' => 'E02000596',
        '0UU' => 'E02000394',
        '0UW' => 'E02000596',
        '0UX' => 'E02000394',
        '0UY' => 'E02000394',
        '0UZ' => 'E02000394',
        '0WA' => 'E02000596',
        '0WB' => 'E02000596',
        '0WD' => 'E02000596',
        '0WE' => 'E02000596',
        '0WF' => 'E02000596',
        '0WG' => 'E02000596',
        '0WH' => 'E02000596',
        '0WJ' => 'E02000596',
        '0WL' => 'E02000596',
        '0WN' => 'E02000596',
        '0WP' => 'E02000596',
        '0WQ' => 'E02000596',
        '0WR' => 'E02000596',
        '0WS' => 'E02000596',
        '0WT' => 'E02000596',
        '0WU' => 'E02000596',
        '0WW' => 'E02000596',
        '0WX' => 'E02000596',
        '0WY' => 'E02000596',
        '0WZ' => 'E02000596',
        '0XA' => 'E02000394',
        '0XB' => 'E02000394',
        '0XD' => 'E02000394',
        '0XE' => 'E02000394',
        '0XF' => 'E02000394',
        '0XG' => 'E02000394',
        '0XH' => 'E02000596',
        '0XJ' => 'E02000394',
        '0XL' => 'E02000394',
        '0XN' => 'E02000597',
        '0XP' => 'E02000596',
        '0XQ' => 'E02000394',
        '0XR' => 'E02000394',
        '0XS' => 'E02000394',
        '0XT' => 'E02000596',
        '0XU' => 'E02000394',
        '0XW' => 'E02000597',
        '0XX' => 'E02000596',
        '0XY' => 'E02000597',
        '0XZ' => 'E02000596',
        '0YA' => 'E02000596',
        '0YB' => 'E02000596',
        '0YD' => 'E02000596',
        '0YE' => 'E02000596',
        '0YF' => 'E02000597',
        '0YG' => 'E02000596',
        '0YH' => 'E02000596',
        '0YJ' => 'E02000394',
        '0YL' => 'E02000596',
        '0YN' => 'E02000597',
        '0YP' => 'E02000596',
        '0YQ' => 'E02000596',
        '0YR' => 'E02000596',
        '0YS' => 'E02000394',
        '0YT' => 'E02000596',
        '0YU' => 'E02000597',
        '0YW' => 'E02000596',
        '0ZA' => 'E02000394',
        '0ZB' => 'E02000596',
        '0ZD' => 'E02000394',
        '0ZE' => 'E02000597',
        '0ZF' => 'E02000597',
        '0ZG' => 'E02000597',
        '0ZH' => 'E02000597',
        '0ZJ' => 'E02000394',
        '0ZL' => 'E02000596',
        '0ZN' => 'E02000597',
        '0ZP' => 'E02000597',
        '0ZQ' => 'E02000597',
        '0ZR' => 'E02000596',
        '0ZS' => 'E02000597',
        '0ZT' => 'E02000597',
        '0ZU' => 'E02000596',
        '0ZW' => 'E02000596',
        '0ZZ' => 'E02000597',
        '1AA' => 'E02000596',
        '1AG' => 'E02000596',
        '1AH' => 'E02000596',
        '1AN' => 'E02000596',
        '1AR' => 'E02000596',
        '1AS' => 'E02000596',
        '1AU' => 'E02000596',
        '1AW' => 'E02000596',
        '1AX' => 'E02000596',
        '1AZ' => 'E02000596',
        '1BB' => 'E02000596',
        '1BD' => 'E02000596',
        '1BE' => 'E02000596',
        '1BF' => 'E02000596',
        '1BG' => 'E02000596',
        '1BH' => 'E02000596',
        '1BJ' => 'E02000596',
        '1BL' => 'E02000596',
        '1BN' => 'E02000596',
        '1BP' => 'E02000596',
        '1BQ' => 'E02000596',
        '1BR' => 'E02000596',
        '1BS' => 'E02000596',
        '1BT' => 'E02000596',
        '1BU' => 'E02000596',
        '1BW' => 'E02000596',
        '1BX' => 'E02000596',
        '1BY' => 'E02000596',
        '1BZ' => 'E02000596',
        '1DA' => 'E02000596',
        '1DB' => 'E02000596',
        '1DD' => 'E02000596',
        '1DE' => 'E02000596',
        '1DF' => 'E02000596',
        '1DG' => 'E02000596',
        '1DH' => 'E02000596',
        '1DJ' => 'E02000596',
        '1DL' => 'E02000596',
        '1DN' => 'E02000596',
        '1DP' => 'E02000596',
        '1DQ' => 'E02000596',
        '1DR' => 'E02000596',
        '1DS' => 'E02000596',
        '1DT' => 'E02000596',
        '1DU' => 'E02000596',
        '1DW' => 'E02000596',
        '1DY' => 'E02000596',
        '1DZ' => 'E02000596',
        '1EA' => 'E02000596',
        '1EB' => 'E02000596',
        '1ED' => 'E02000596',
        '1EE' => 'E02000596',
        '1EF' => 'E02000596',
        '1EG' => 'E02000596',
        '1EH' => 'E02000596',
        '1EJ' => 'E02000596',
        '9AA' => 'E02000596',
        '9AB' => 'E02000596',
        '9AD' => 'E02000596',
        '9AE' => 'E02000596',
        '9AF' => 'E02000593',
        '9AG' => 'E02000593',
        '9AH' => 'E02000593',
        '9AJ' => 'E02000593',
        '9AL' => 'E02000593',
        '9AN' => 'E02000593',
        '9AP' => 'E02000593',
        '9AQ' => 'E02000593',
        '9AR' => 'E02000593',
        '9AS' => 'E02000593',
        '9AT' => 'E02000596',
        '9AU' => 'E02000596',
        '9AW' => 'E02000593',
        '9AX' => 'E02000596',
        '9AY' => 'E02000596',
        '9AZ' => 'E02000596',
        '9BA' => 'E02000593',
        '9BB' => 'E02000596',
        '9BE' => 'E02000596',
        '9BG' => 'E02000596',
        '9BH' => 'E02000596',
        '9BJ' => 'E02000593',
        '9BL' => 'E02000593',
        '9BN' => 'E02000593',
        '9BP' => 'E02000593',
        '9BQ' => 'E02000593',
        '9BS' => 'E02000593',
        '9BT' => 'E02000593',
        '9BU' => 'E02000593',
        '9BW' => 'E02000593',
        '9BX' => 'E02000593',
        '9BY' => 'E02000597',
        '9BZ' => 'E02000596',
        '9DA' => 'E02000596',
        '9DB' => 'E02000596',
        '9DD' => 'E02000596',
        '9DE' => 'E02000596',
        '9DF' => 'E02000596',
        '9DG' => 'E02000593',
        '9DH' => 'E02000593',
        '9DJ' => 'E02000593',
        '9DL' => 'E02000593',
        '9DN' => 'E02000593',
        '9DP' => 'E02000593',
        '9DQ' => 'E02000593',
        '9DR' => 'E02000593',
        '9DS' => 'E02000593',
        '9DT' => 'E02000593',
        '9DU' => 'E02000593',
        '9DW' => 'E02000593',
        '9DX' => 'E02000593',
        '9DY' => 'E02000593',
        '9DZ' => 'E02000593',
        '9EA' => 'E02000593',
        '9EB' => 'E02000596',
        '9ED' => 'E02000593',
        '9EE' => 'E02000596',
        '9EF' => 'E02000593',
        '9EG' => 'E02000596',
        '9EH' => 'E02000596',
        '9EJ' => 'E02000596',
        '9EL' => 'E02000596',
        '9EN' => 'E02000596',
        '9EP' => 'E02000596',
        '9EQ' => 'E02000596',
        '9ER' => 'E02000596',
        '9ES' => 'E02000596',
        '9ET' => 'E02000596',
        '9EU' => 'E02000596',
        '9EW' => 'E02000596',
        '9EX' => 'E02000596',
        '9EY' => 'E02000596',
        '9EZ' => 'E02000593',
        '9FB' => 'E02000596',
        '9FD' => 'E02000596',
        '9FE' => 'E02000596',
        '9FF' => 'E02000596',
        '9FG' => 'E02000596',
        '9FH' => 'E02000596',
        '9FJ' => 'E02000596',
        '9FL' => 'E02000596',
        '9FN' => 'E02000596',
        '9FP' => 'E02000596',
        '9FR' => 'E02000596',
        '9FS' => 'E02000596',
        '9FT' => 'E02000596',
        '9FW' => 'E02000596',
        '9FX' => 'E02000596',
        '9FY' => 'E02000596',
        '9FZ' => 'E02000596',
        '9GA' => 'E02000596',
        '9GB' => 'E02000596',
        '9GD' => 'E02000596',
        '9GE' => 'E02000596',
        '9GF' => 'E02000596',
        '9GG' => 'E02000596',
        '9GH' => 'E02000596',
        '9GJ' => 'E02000596',
        '9GL' => 'E02000596',
        '9GN' => 'E02000596',
        '9GP' => 'E02000596',
        '9GQ' => 'E02000596',
        '9GR' => 'E02000596',
        '9GS' => 'E02000596',
        '9GT' => 'E02000596',
        '9GU' => 'E02000596',
        '9GW' => 'E02000596',
        '9GX' => 'E02000596',
        '9GY' => 'E02000596',
        '9GZ' => 'E02000596',
        '9HA' => 'E02000593',
        '9HB' => 'E02000596',
        '9HD' => 'E02000596',
        '9HE' => 'E02000593',
        '9HF' => 'E02000593',
        '9HG' => 'E02000593',
        '9HH' => 'E02000593',
        '9HJ' => 'E02000593',
        '9HL' => 'E02000596',
        '9HN' => 'E02000596',
        '9HP' => 'E02000596',
        '9HQ' => 'E02000593',
        '9HR' => 'E02000596',
        '9HS' => 'E02000596',
        '9HT' => 'E02000596',
        '9HU' => 'E02000596',
        '9HW' => 'E02000596',
        '9HX' => 'E02000596',
        '9HY' => 'E02000596',
        '9HZ' => 'E02000596',
        '9JA' => 'E02000596',
        '9JB' => 'E02000596',
        '9JD' => 'E02000596',
        '9JE' => 'E02000596',
        '9JF' => 'E02000596',
        '9JG' => 'E02000596',
        '9JH' => 'E02000596',
        '9JJ' => 'E02000596',
        '9JL' => 'E02000596',
        '9JN' => 'E02000596',
        '9JP' => 'E02000596',
        '9JQ' => 'E02000596',
        '9JR' => 'E02000596',
        '9JS' => 'E02000596',
        '9JT' => 'E02000596',
        '9JU' => 'E02000596',
        '9JW' => 'E02000596',
        '9JX' => 'E02000596',
        '9JY' => 'E02000593',
        '9JZ' => 'E02000593',
        '9LA' => 'E02000596',
        '9LB' => 'E02000596',
        '9LD' => 'E02000593',
        '9LE' => 'E02000596',
        '9LF' => 'E02000596',
        '9LG' => 'E02000596',
        '9LH' => 'E02000596',
        '9LJ' => 'E02000596',
        '9LL' => 'E02000593',
        '9LN' => 'E02000593',
        '9LP' => 'E02000596',
        '9LQ' => 'E02000596',
        '9LR' => 'E02000596',
        '9LS' => 'E02000596',
        '9LT' => 'E02000596',
        '9LU' => 'E02000596',
        '9LW' => 'E02000593',
        '9LX' => 'E02000596',
        '9LY' => 'E02000596',
        '9LZ' => 'E02000596',
        '9NA' => 'E02000596',
        '9NB' => 'E02000596',
        '9ND' => 'E02000596',
        '9NE' => 'E02000596',
        '9NF' => 'E02000596',
        '9NG' => 'E02000596',
        '9NH' => 'E02000596',
        '9NJ' => 'E02000596',
        '9NL' => 'E02000596',
        '9NN' => 'E02000596',
        '9NP' => 'E02000596',
        '9NQ' => 'E02000596',
        '9NR' => 'E02000596',
        '9NS' => 'E02000596',
        '9NT' => 'E02000596',
        '9NU' => 'E02000596',
        '9NW' => 'E02000596',
        '9NX' => 'E02000595',
        '9NY' => 'E02000595',
        '9NZ' => 'E02000595',
        '9PA' => 'E02000595',
        '9PB' => 'E02000595',
        '9PD' => 'E02000595',
        '9PE' => 'E02000595',
        '9PF' => 'E02000595',
        '9PG' => 'E02000596',
        '9PH' => 'E02000596',
        '9PJ' => 'E02000596',
        '9PL' => 'E02000596',
        '9PN' => 'E02000596',
        '9PQ' => 'E02000596',
        '9PR' => 'E02000596',
        '9PS' => 'E02000595',
        '9PT' => 'E02000596',
        '9PU' => 'E02000596',
        '9PW' => 'E02000596',
        '9PX' => 'E02000596',
        '9PY' => 'E02000596',
        '9PZ' => 'E02000595',
        '9QA' => 'E02000595',
        '9QB' => 'E02000595',
        '9QD' => 'E02000595',
        '9QE' => 'E02000595',
        '9QF' => 'E02000595',
        '9QG' => 'E02000595',
        '9QH' => 'E02000595',
        '9QJ' => 'E02000595',
        '9QL' => 'E02000596',
        '9QN' => 'E02000595',
        '9QP' => 'E02000596',
        '9QQ' => 'E02000595',
        '9QR' => 'E02000596',
        '9QS' => 'E02000596',
        '9QT' => 'E02000596',
        '9QU' => 'E02000596',
        '9QW' => 'E02000595',
        '9QX' => 'E02000596',
        '9QY' => 'E02000596',
        '9QZ' => 'E02000596',
        '9RA' => 'E02000596',
        '9RB' => 'E02000596',
        '9RD' => 'E02000596',
        '9RE' => 'E02000596',
        '9RF' => 'E02000596',
        '9RG' => 'E02000596',
        '9RH' => 'E02000596',
        '9RJ' => 'E02000596',
        '9RL' => 'E02000596',
        '9RN' => 'E02000596',
        '9RP' => 'E02000596',
        '9RQ' => 'E02000596',
        '9RR' => 'E02000596',
        '9RS' => 'E02000596',
        '9RT' => 'E02000592',
        '9RU' => 'E02000592',
        '9RW' => 'E02000596',
        '9RX' => 'E02000592',
        '9RY' => 'E02000592',
        '9RZ' => 'E02000592',
        '9SA' => 'E02000593',
        '9SB' => 'E02000596',
        '9SD' => 'E02000596',
        '9SE' => 'E02000592',
        '9SF' => 'E02000596',
        '9SG' => 'E02000596',
        '9SH' => 'E02000596',
        '9SJ' => 'E02000596',
        '9SL' => 'E02000596',
        '9SN' => 'E02000596',
        '9SP' => 'E02000596',
        '9SQ' => 'E02000596',
        '9SR' => 'E02000596',
        '9SS' => 'E02000596',
        '9ST' => 'E02000596',
        '9SU' => 'E02000593',
        '9SW' => 'E02000596',
        '9SX' => 'E02000593',
        '9SY' => 'E02000593',
        '9SZ' => 'E02000596',
        '9TA' => 'E02000593',
        '9TB' => 'E02000593',
        '9TD' => 'E02000596',
        '9TE' => 'E02000593',
        '9TF' => 'E02000596',
        '9TG' => 'E02000596',
        '9TH' => 'E02000596',
        '9TJ' => 'E02000596',
        '9TL' => 'E02000596',
        '9TN' => 'E02000596',
        '9TP' => 'E02000596',
        '9TQ' => 'E02000596',
        '9TR' => 'E02000596',
        '9TS' => 'E02000596',
        '9TT' => 'E02000596',
        '9TU' => 'E02000596',
        '9TW' => 'E02000596',
        '9TX' => 'E02000596',
        '9TY' => 'E02000596',
        '9TZ' => 'E02000596',
        '9UA' => 'E02000596',
        '9UB' => 'E02000596',
        '9UD' => 'E02000596',
        '9UE' => 'E02000596',
        '9UF' => 'E02000596',
        '9UG' => 'E02000596',
        '9UH' => 'E02000596',
        '9UJ' => 'E02000596',
        '9UL' => 'E02000596',
        '9UN' => 'E02000596',
        '9UP' => 'E02000596',
        '9UQ' => 'E02000596',
        '9UR' => 'E02000596',
        '9US' => 'E02000596',
        '9UT' => 'E02000596',
        '9UU' => 'E02000596',
        '9UW' => 'E02000596',
        '9UX' => 'E02000596',
        '9UY' => 'E02000596',
        '9UZ' => 'E02000596',
        '9WA' => 'E02000596',
        '9WB' => 'E02000596',
        '9WD' => 'E02000596',
        '9WE' => 'E02000596',
        '9WF' => 'E02000596',
        '9WG' => 'E02000596',
        '9WH' => 'E02000596',
        '9WJ' => 'E02000596',
        '9WL' => 'E02000596',
        '9WN' => 'E02000596',
        '9WP' => 'E02000596',
        '9WQ' => 'E02000596',
        '9WR' => 'E02000596',
        '9WS' => 'E02000596',
        '9WT' => 'E02000596',
        '9WU' => 'E02000596',
        '9WW' => 'E02000596',
        '9WX' => 'E02000596',
        '9WY' => 'E02000596',
        '9WZ' => 'E02000596',
        '9XA' => 'E02000596',
        '9XB' => 'E02000596',
        '9XD' => 'E02000596',
        '9XE' => 'E02000596',
        '9XF' => 'E02000596',
        '9XG' => 'E02000596',
        '9XH' => 'E02000596',
        '9XJ' => 'E02000596',
        '9XL' => 'E02000596',
        '9XN' => 'E02000596',
        '9XP' => 'E02000596',
        '9XQ' => 'E02000596',
        '9XR' => 'E02000596',
        '9XS' => 'E02000596',
        '9XT' => 'E02000596',
        '9XU' => 'E02000596',
        '9XW' => 'E02000596',
        '9XX' => 'E02000596',
        '9XY' => 'E02000596',
        '9XZ' => 'E02000596',
        '9YA' => 'E02000596',
        '9YB' => 'E02000596',
        '9YD' => 'E02000596',
        '9YE' => 'E02000596',
        '9YF' => 'E02000596',
        '9YG' => 'E02000596',
        '9YH' => 'E02000596',
        '9YJ' => 'E02000596',
        '9YL' => 'E02000596',
        '9YN' => 'E02000596',
        '9YP' => 'E02000596',
        '9YQ' => 'E02000596',
        '9YR' => 'E02000596',
        '9YS' => 'E02000596',
        '9YT' => 'E02000596',
        '9YU' => 'E02000596',
        '9YX' => 'E02000596',
        '9ZA' => 'E02000596',
        '9ZB' => 'E02000596',
        '9ZD' => 'E02000596',
        '9ZE' => 'E02000596',
        '9ZF' => 'E02000596',
        '9ZG' => 'E02000596',
        '9ZH' => 'E02000596',
        '9ZJ' => 'E02000596',
        '9ZL' => 'E02000596',
        '9ZN' => 'E02000596',
        '9ZP' => 'E02000596',
        '9ZQ' => 'E02000596',
        '9ZR' => 'E02000596',
        '9ZS' => 'E02000596',
        '9ZT' => 'E02000596',
        '9ZU' => 'E02000596',
        '9ZW' => 'E02000596',
        '9ZZ' => 'E02000596',
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
