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
final class ST15
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02006190',
        '0AB' => 'E02006190',
        '0AD' => 'E02006190',
        '0AE' => 'E02006190',
        '0AF' => 'E02006190',
        '0AG' => 'E02006190',
        '0AH' => 'E02006190',
        '0AJ' => 'E02006191',
        '0AL' => 'E02006191',
        '0AN' => 'E02006191',
        '0AP' => 'E02006191',
        '0AQ' => 'E02006190',
        '0AR' => 'E02006191',
        '0AS' => 'E02006191',
        '0AT' => 'E02006190',
        '0AU' => 'E02006191',
        '0AW' => 'E02006191',
        '0AX' => 'E02006191',
        '0AY' => 'E02006191',
        '0AZ' => 'E02006191',
        '0BA' => 'E02006191',
        '0BB' => 'E02006191',
        '0BD' => 'E02006191',
        '0BE' => 'E02006191',
        '0BF' => 'E02006192',
        '0BG' => 'E02006191',
        '0BH' => 'E02006191',
        '0BJ' => 'E02006191',
        '0BL' => 'E02006191',
        '0BN' => 'E02006191',
        '0BP' => 'E02006191',
        '0BQ' => 'E02006191',
        '0BS' => 'E02006191',
        '0BT' => 'E02006191',
        '0BU' => 'E02006191',
        '0BW' => 'E02006191',
        '0BX' => 'E02006191',
        '0BY' => 'E02006191',
        '0BZ' => 'E02006192',
        '0DA' => 'E02006191',
        '0DB' => 'E02006191',
        '0DD' => 'E02006191',
        '0DE' => 'E02006191',
        '0DF' => 'E02006191',
        '0DG' => 'E02006191',
        '0DH' => 'E02006190',
        '0DJ' => 'E02006190',
        '0DL' => 'E02006190',
        '0DN' => 'E02006190',
        '0DP' => 'E02006190',
        '0DQ' => 'E02006191',
        '0DR' => 'E02006190',
        '0DS' => 'E02006190',
        '0DT' => 'E02006190',
        '0DU' => 'E02006190',
        '0DW' => 'E02006190',
        '0DX' => 'E02006190',
        '0DY' => 'E02006190',
        '0DZ' => 'E02006190',
        '0EA' => 'E02006190',
        '0EB' => 'E02006190',
        '0ED' => 'E02006190',
        '0EE' => 'E02006190',
        '0EF' => 'E02006190',
        '0EG' => 'E02006190',
        '0EH' => 'E02006191',
        '0EJ' => 'E02006191',
        '0EL' => 'E02006191',
        '0EN' => 'E02006191',
        '0EP' => 'E02006191',
        '0EQ' => 'E02006190',
        '0ER' => 'E02006191',
        '0ES' => 'E02006191',
        '0ET' => 'E02006190',
        '0EU' => 'E02006192',
        '0EW' => 'E02006191',
        '0EX' => 'E02006190',
        '0EY' => 'E02006190',
        '0EZ' => 'E02006190',
        '0FA' => 'E02006191',
        '0FB' => 'E02006191',
        '0FD' => 'E02006190',
        '0FE' => 'E02006191',
        '0FF' => 'E02006191',
        '0FG' => 'E02006191',
        '0FH' => 'E02006190',
        '0FJ' => 'E02006190',
        '0FL' => 'E02006190',
        '0FN' => 'E02006190',
        '0FP' => 'E02006190',
        '0FQ' => 'E02006190',
        '0FR' => 'E02006190',
        '0FS' => 'E02006190',
        '0FW' => 'E02006190',
        '0FX' => 'E02006190',
        '0FZ' => 'E02006190',
        '0GA' => 'E02006192',
        '0GB' => 'E02006191',
        '0GD' => 'E02006191',
        '0GE' => 'E02006190',
        '0GF' => 'E02006189',
        '0GG' => 'E02006192',
        '0GH' => 'E02006192',
        '0GJ' => 'E02006191',
        '0GL' => 'E02006192',
        '0GN' => 'E02006192',
        '0GP' => 'E02006192',
        '0GQ' => 'E02006192',
        '0GR' => 'E02006192',
        '0GS' => 'E02006192',
        '0GT' => 'E02006192',
        '0GU' => 'E02006192',
        '0GW' => 'E02006192',
        '0GX' => 'E02006190',
        '0GY' => 'E02006190',
        '0GZ' => 'E02006190',
        '0HA' => 'E02006191',
        '0HB' => 'E02006191',
        '0HD' => 'E02006191',
        '0HE' => 'E02006190',
        '0HF' => 'E02006190',
        '0HG' => 'E02006190',
        '0HH' => 'E02006190',
        '0HJ' => 'E02006190',
        '0HL' => 'E02006190',
        '0HN' => 'E02006190',
        '0HP' => 'E02006190',
        '0HQ' => 'E02006190',
        '0HR' => 'E02006191',
        '0HS' => 'E02006190',
        '0HT' => 'E02006190',
        '0HU' => 'E02006190',
        '0HW' => 'E02006190',
        '0HX' => 'E02006190',
        '0HY' => 'E02006190',
        '0HZ' => 'E02006190',
        '0JA' => 'E02006190',
        '0JB' => 'E02006190',
        '0JD' => 'E02006190',
        '0JE' => 'E02006190',
        '0JF' => 'E02006190',
        '0JG' => 'E02006190',
        '0JH' => 'E02006191',
        '0JJ' => 'E02006191',
        '0JL' => 'E02006190',
        '0JN' => 'E02006190',
        '0JP' => 'E02006190',
        '0JQ' => 'E02006191',
        '0JR' => 'E02006191',
        '0JS' => 'E02006190',
        '0JT' => 'E02006191',
        '0JU' => 'E02006191',
        '0JW' => 'E02006190',
        '0JX' => 'E02006191',
        '0JY' => 'E02006191',
        '0JZ' => 'E02006191',
        '0LA' => 'E02006191',
        '0LB' => 'E02006191',
        '0LD' => 'E02006191',
        '0LE' => 'E02006191',
        '0LF' => 'E02006191',
        '0LG' => 'E02006191',
        '0LH' => 'E02006191',
        '0LJ' => 'E02006190',
        '0LL' => 'E02006191',
        '0LN' => 'E02006190',
        '0LP' => 'E02006191',
        '0LQ' => 'E02006191',
        '0LR' => 'E02006190',
        '0LS' => 'E02006190',
        '0LT' => 'E02006191',
        '0LU' => 'E02006191',
        '0LW' => 'E02006191',
        '0LX' => 'E02006191',
        '0LY' => 'E02006191',
        '0LZ' => 'E02006190',
        '0NA' => 'E02006192',
        '0NB' => 'E02006189',
        '0ND' => 'E02006189',
        '0NE' => 'E02006189',
        '0NF' => 'E02006192',
        '0NG' => 'E02006190',
        '0NH' => 'E02006192',
        '0NJ' => 'E02006192',
        '0NL' => 'E02006192',
        '0NN' => 'E02006191',
        '0NP' => 'E02006192',
        '0NQ' => 'E02006192',
        '0NR' => 'E02006192',
        '0NS' => 'E02006192',
        '0NT' => 'E02006192',
        '0NU' => 'E02006192',
        '0NW' => 'E02006191',
        '0NX' => 'E02006192',
        '0NY' => 'E02006192',
        '0NZ' => 'E02006192',
        '0PA' => 'E02006192',
        '0PB' => 'E02006192',
        '0PD' => 'E02006192',
        '0PE' => 'E02006192',
        '0PF' => 'E02006189',
        '0PG' => 'E02006189',
        '0PH' => 'E02006189',
        '0PJ' => 'E02006189',
        '0PL' => 'E02006189',
        '0PN' => 'E02006189',
        '0PP' => 'E02006189',
        '0PQ' => 'E02006189',
        '0PR' => 'E02006189',
        '0PS' => 'E02006190',
        '0PT' => 'E02006190',
        '0PU' => 'E02006190',
        '0PW' => 'E02006192',
        '0PX' => 'E02006189',
        '0PY' => 'E02006189',
        '0PZ' => 'E02006189',
        '0QA' => 'E02006189',
        '0QB' => 'E02006189',
        '0QD' => 'E02006189',
        '0QE' => 'E02006189',
        '0QF' => 'E02006189',
        '0QG' => 'E02006189',
        '0QH' => 'E02006192',
        '0QJ' => 'E02006192',
        '0QL' => 'E02006192',
        '0QN' => 'E02006192',
        '0QP' => 'E02006192',
        '0QQ' => 'E02006192',
        '0QR' => 'E02006189',
        '0QS' => 'E02006189',
        '0QT' => 'E02006189',
        '0QU' => 'E02006189',
        '0QW' => 'E02006192',
        '0QX' => 'E02006189',
        '0QY' => 'E02006189',
        '0QZ' => 'E02006189',
        '0RA' => 'E02006189',
        '0RB' => 'E02006189',
        '0RD' => 'E02006189',
        '0RE' => 'E02006189',
        '0RF' => 'E02006189',
        '0RG' => 'E02006189',
        '0RH' => 'E02006192',
        '0RJ' => 'E02006192',
        '0RL' => 'E02006192',
        '0RN' => 'E02006192',
        '0RP' => 'E02006192',
        '0RQ' => 'E02006189',
        '0RR' => 'E02006191',
        '0RS' => 'E02006190',
        '0RT' => 'E02006189',
        '0RU' => 'E02006191',
        '0RW' => 'E02006192',
        '0RX' => 'E02006191',
        '0RY' => 'E02006191',
        '0RZ' => 'E02006192',
        '0SA' => 'E02006191',
        '0SB' => 'E02006191',
        '0SD' => 'E02006191',
        '0SE' => 'E02006191',
        '0SF' => 'E02006191',
        '0SG' => 'E02006189',
        '0SH' => 'E02006191',
        '0SJ' => 'E02006191',
        '0SL' => 'E02006191',
        '0SN' => 'E02006191',
        '0SP' => 'E02006192',
        '0SQ' => 'E02006189',
        '0SR' => 'E02006191',
        '0SS' => 'E02006191',
        '0ST' => 'E02006192',
        '0SU' => 'E02006192',
        '0SW' => 'E02006191',
        '0SX' => 'E02006192',
        '0SY' => 'E02006192',
        '0SZ' => 'E02006192',
        '0TA' => 'E02006192',
        '0TB' => 'E02006192',
        '0TD' => 'E02006192',
        '0TE' => 'E02006191',
        '0TF' => 'E02006192',
        '0TG' => 'E02006192',
        '0TH' => 'E02006192',
        '0TJ' => 'E02006191',
        '0TL' => 'E02006191',
        '0TN' => 'E02006192',
        '0TP' => 'E02006191',
        '0TQ' => 'E02006192',
        '0TR' => 'E02006192',
        '0TS' => 'E02006190',
        '0TT' => 'E02006190',
        '0TU' => 'E02006191',
        '0TW' => 'E02006191',
        '0TX' => 'E02006192',
        '0TY' => 'E02006192',
        '0TZ' => 'E02006192',
        '0UA' => 'E02006189',
        '0UB' => 'E02006191',
        '0UD' => 'E02006192',
        '0UE' => 'E02006191',
        '0UF' => 'E02006191',
        '0UG' => 'E02006189',
        '0UH' => 'E02006191',
        '0UJ' => 'E02006190',
        '0UL' => 'E02006191',
        '0UN' => 'E02006191',
        '0UP' => 'E02006191',
        '0UQ' => 'E02006189',
        '0UR' => 'E02006191',
        '0US' => 'E02006191',
        '0UT' => 'E02006189',
        '0UU' => 'E02006189',
        '0UW' => 'E02006191',
        '0UX' => 'E02006189',
        '0UY' => 'E02006191',
        '0UZ' => 'E02006192',
        '0WA' => 'E02006190',
        '0WB' => 'E02006190',
        '0WD' => 'E02006190',
        '0WE' => 'E02006190',
        '0WF' => 'E02006190',
        '0WG' => 'E02006190',
        '0WH' => 'E02006190',
        '0WJ' => 'E02006191',
        '0WL' => 'E02006192',
        '0WN' => 'E02006192',
        '0WP' => 'E02006192',
        '0WQ' => 'E02006189',
        '0WZ' => 'E02006191',
        '0XE' => 'E02006191',
        '0XF' => 'E02006191',
        '0XG' => 'E02006191',
        '0XH' => 'E02006191',
        '0XJ' => 'E02006191',
        '0XL' => 'E02006191',
        '0XN' => 'E02006192',
        '0XP' => 'E02006191',
        '0XQ' => 'E02006191',
        '0XR' => 'E02006191',
        '0XS' => 'E02006191',
        '0XT' => 'E02006191',
        '0XU' => 'E02006191',
        '0XW' => 'E02006191',
        '0XX' => 'E02006191',
        '0XY' => 'E02006192',
        '0XZ' => 'E02006192',
        '0YA' => 'E02006192',
        '0YB' => 'E02006191',
        '0YD' => 'E02006191',
        '0YE' => 'E02006192',
        '0YF' => 'E02006191',
        '0YG' => 'E02006192',
        '0YH' => 'E02006192',
        '0YJ' => 'E02006191',
        '0YQ' => 'E02006192',
        '0YS' => 'E02006191',
        '0YY' => 'E02006191',
        '0ZG' => 'E02006191',
        '0ZR' => 'E02006191',
        '0ZT' => 'E02006191',
        '0ZU' => 'E02006191',
        '0ZW' => 'E02006191',
        '0ZX' => 'E02006191',
        '8AA' => 'E02006190',
        '8AB' => 'E02006190',
        '8AD' => 'E02006190',
        '8AE' => 'E02006190',
        '8AF' => 'E02006190',
        '8AG' => 'E02006190',
        '8AH' => 'E02006190',
        '8AJ' => 'E02006190',
        '8AL' => 'E02006190',
        '8AN' => 'E02006190',
        '8AP' => 'E02006190',
        '8AQ' => 'E02006190',
        '8AR' => 'E02006190',
        '8AS' => 'E02006190',
        '8AT' => 'E02006190',
        '8AU' => 'E02006190',
        '8AW' => 'E02006190',
        '8AX' => 'E02006190',
        '8AY' => 'E02006190',
        '8AZ' => 'E02006190',
        '8BA' => 'E02006190',
        '8BB' => 'E02006190',
        '8BD' => 'E02006190',
        '8BE' => 'E02006190',
        '8BF' => 'E02006190',
        '8BG' => 'E02006190',
        '8BH' => 'E02006190',
        '8BJ' => 'E02006190',
        '8BL' => 'E02006190',
        '8BN' => 'E02006190',
        '8BP' => 'E02006190',
        '8BQ' => 'E02006190',
        '8BS' => 'E02006190',
        '8BT' => 'E02006190',
        '8BU' => 'E02006190',
        '8BW' => 'E02006190',
        '8BX' => 'E02006190',
        '8BY' => 'E02006190',
        '8BZ' => 'E02006190',
        '8DA' => 'E02006190',
        '8DB' => 'E02006190',
        '8DD' => 'E02006190',
        '8DE' => 'E02006190',
        '8DF' => 'E02006190',
        '8DG' => 'E02006190',
        '8DH' => 'E02006190',
        '8DJ' => 'E02006190',
        '8DL' => 'E02006190',
        '8DN' => 'E02006190',
        '8DP' => 'E02006190',
        '8DQ' => 'E02006190',
        '8DR' => 'E02006190',
        '8DS' => 'E02006190',
        '8DT' => 'E02006190',
        '8DU' => 'E02006190',
        '8DW' => 'E02006190',
        '8DX' => 'E02006190',
        '8DY' => 'E02006190',
        '8DZ' => 'E02006190',
        '8EA' => 'E02006190',
        '8EB' => 'E02006190',
        '8ED' => 'E02006190',
        '8EE' => 'E02006190',
        '8EF' => 'E02006190',
        '8EG' => 'E02006190',
        '8EH' => 'E02006190',
        '8EJ' => 'E02006190',
        '8EL' => 'E02006190',
        '8EN' => 'E02006190',
        '8EP' => 'E02006190',
        '8EQ' => 'E02006191',
        '8ER' => 'E02006190',
        '8ES' => 'E02006190',
        '8ET' => 'E02006190',
        '8EU' => 'E02006190',
        '8EW' => 'E02006190',
        '8EX' => 'E02006190',
        '8EY' => 'E02006190',
        '8EZ' => 'E02006190',
        '8FA' => 'E02006191',
        '8FB' => 'E02006190',
        '8FD' => 'E02006191',
        '8FE' => 'E02006190',
        '8FF' => 'E02006191',
        '8FG' => 'E02006191',
        '8FH' => 'E02006191',
        '8FJ' => 'E02006191',
        '8FL' => 'E02006190',
        '8FN' => 'E02006191',
        '8FP' => 'E02006190',
        '8FQ' => 'E02006191',
        '8FR' => 'E02006190',
        '8FS' => 'E02006191',
        '8FT' => 'E02006191',
        '8FU' => 'E02006190',
        '8FW' => 'E02006191',
        '8FX' => 'E02006191',
        '8FY' => 'E02006191',
        '8FZ' => 'E02006191',
        '8GA' => 'E02006191',
        '8GB' => 'E02006191',
        '8GD' => 'E02006191',
        '8GE' => 'E02006191',
        '8GF' => 'E02006191',
        '8GG' => 'E02006190',
        '8GH' => 'E02006190',
        '8GJ' => 'E02006191',
        '8GL' => 'E02006190',
        '8GN' => 'E02006190',
        '8GP' => 'E02006190',
        '8GQ' => 'E02006190',
        '8GR' => 'E02006190',
        '8GS' => 'E02006190',
        '8GT' => 'E02006190',
        '8GU' => 'E02006190',
        '8GW' => 'E02006189',
        '8GX' => 'E02006190',
        '8GY' => 'E02006190',
        '8GZ' => 'E02006190',
        '8HA' => 'E02006190',
        '8HB' => 'E02006190',
        '8HD' => 'E02006190',
        '8HE' => 'E02006190',
        '8HF' => 'E02006190',
        '8HG' => 'E02006190',
        '8HH' => 'E02006190',
        '8HJ' => 'E02006190',
        '8HL' => 'E02006190',
        '8HN' => 'E02006190',
        '8HP' => 'E02006190',
        '8HQ' => 'E02006190',
        '8HR' => 'E02006190',
        '8HS' => 'E02006190',
        '8HT' => 'E02006190',
        '8HU' => 'E02006190',
        '8HW' => 'E02006190',
        '8HX' => 'E02006190',
        '8HY' => 'E02006190',
        '8HZ' => 'E02006190',
        '8JA' => 'E02006190',
        '8JB' => 'E02006190',
        '8JD' => 'E02006190',
        '8JE' => 'E02006190',
        '8JF' => 'E02006190',
        '8JG' => 'E02006190',
        '8JH' => 'E02006190',
        '8JJ' => 'E02006190',
        '8JL' => 'E02006190',
        '8JN' => 'E02006190',
        '8JP' => 'E02006190',
        '8JQ' => 'E02006190',
        '8JR' => 'E02006190',
        '8JS' => 'E02006190',
        '8JT' => 'E02006190',
        '8JU' => 'E02006190',
        '8JW' => 'E02006190',
        '8JX' => 'E02006190',
        '8JY' => 'E02006190',
        '8JZ' => 'E02006190',
        '8LA' => 'E02006191',
        '8LB' => 'E02006190',
        '8LD' => 'E02006190',
        '8LE' => 'E02006190',
        '8LF' => 'E02006190',
        '8LG' => 'E02006190',
        '8LH' => 'E02006190',
        '8LJ' => 'E02006190',
        '8LL' => 'E02006190',
        '8LN' => 'E02006190',
        '8LP' => 'E02006190',
        '8LQ' => 'E02006190',
        '8LR' => 'E02006190',
        '8LS' => 'E02006190',
        '8LT' => 'E02006190',
        '8LU' => 'E02006190',
        '8LW' => 'E02006190',
        '8LX' => 'E02006191',
        '8LY' => 'E02006190',
        '8LZ' => 'E02006190',
        '8NA' => 'E02006190',
        '8NB' => 'E02006190',
        '8ND' => 'E02006189',
        '8NE' => 'E02006190',
        '8NF' => 'E02006190',
        '8NG' => 'E02006190',
        '8NH' => 'E02006190',
        '8NJ' => 'E02006190',
        '8NL' => 'E02006190',
        '8NN' => 'E02006190',
        '8NP' => 'E02006190',
        '8NQ' => 'E02006190',
        '8NR' => 'E02006190',
        '8NS' => 'E02006190',
        '8NT' => 'E02006190',
        '8NU' => 'E02006190',
        '8NW' => 'E02006190',
        '8NX' => 'E02006190',
        '8NY' => 'E02006190',
        '8NZ' => 'E02006190',
        '8PA' => 'E02006190',
        '8PB' => 'E02006190',
        '8PD' => 'E02006190',
        '8PE' => 'E02006190',
        '8PF' => 'E02006190',
        '8PG' => 'E02006190',
        '8PH' => 'E02006190',
        '8PJ' => 'E02006190',
        '8PL' => 'E02006190',
        '8PN' => 'E02006190',
        '8PP' => 'E02006190',
        '8PQ' => 'E02006190',
        '8PR' => 'E02006190',
        '8PS' => 'E02006191',
        '8PT' => 'E02006191',
        '8PU' => 'E02006191',
        '8PW' => 'E02006190',
        '8PX' => 'E02006191',
        '8PY' => 'E02006191',
        '8PZ' => 'E02006191',
        '8QA' => 'E02006191',
        '8QB' => 'E02006191',
        '8QD' => 'E02006190',
        '8QE' => 'E02006190',
        '8QF' => 'E02006191',
        '8QG' => 'E02006190',
        '8QH' => 'E02006190',
        '8QJ' => 'E02006191',
        '8QL' => 'E02006190',
        '8QN' => 'E02006190',
        '8QP' => 'E02006191',
        '8QQ' => 'E02006190',
        '8QR' => 'E02006190',
        '8QS' => 'E02006190',
        '8QT' => 'E02006190',
        '8QU' => 'E02006191',
        '8QW' => 'E02006190',
        '8QX' => 'E02006191',
        '8QY' => 'E02006191',
        '8QZ' => 'E02006190',
        '8RA' => 'E02006191',
        '8RB' => 'E02006191',
        '8RD' => 'E02006191',
        '8RE' => 'E02006191',
        '8RF' => 'E02006191',
        '8RG' => 'E02006191',
        '8RH' => 'E02006188',
        '8RJ' => 'E02006188',
        '8RL' => 'E02006188',
        '8RN' => 'E02006189',
        '8RP' => 'E02006188',
        '8RQ' => 'E02006188',
        '8RR' => 'E02006189',
        '8RS' => 'E02006191',
        '8RT' => 'E02006191',
        '8RU' => 'E02006191',
        '8RW' => 'E02006189',
        '8RX' => 'E02006191',
        '8RY' => 'E02006191',
        '8RZ' => 'E02006191',
        '8SA' => 'E02006191',
        '8SB' => 'E02006191',
        '8SD' => 'E02006190',
        '8SE' => 'E02006191',
        '8SF' => 'E02006191',
        '8SG' => 'E02006191',
        '8SH' => 'E02006191',
        '8SJ' => 'E02006191',
        '8SL' => 'E02006215',
        '8SN' => 'E02006188',
        '8SP' => 'E02006191',
        '8SQ' => 'E02006191',
        '8SR' => 'E02006189',
        '8SS' => 'E02006191',
        '8ST' => 'E02006191',
        '8SU' => 'E02006191',
        '8SW' => 'E02006191',
        '8SX' => 'E02006191',
        '8SY' => 'E02006189',
        '8SZ' => 'E02006189',
        '8TA' => 'E02006189',
        '8TB' => 'E02006189',
        '8TD' => 'E02006189',
        '8TE' => 'E02006189',
        '8TF' => 'E02006189',
        '8TG' => 'E02006189',
        '8TH' => 'E02006189',
        '8TJ' => 'E02006189',
        '8TL' => 'E02006189',
        '8TN' => 'E02006189',
        '8TP' => 'E02006191',
        '8TQ' => 'E02006189',
        '8TR' => 'E02006190',
        '8TS' => 'E02006190',
        '8TT' => 'E02006190',
        '8TU' => 'E02006191',
        '8TW' => 'E02006189',
        '8TX' => 'E02006191',
        '8TY' => 'E02006189',
        '8TZ' => 'E02006189',
        '8UA' => 'E02006190',
        '8UB' => 'E02006189',
        '8UD' => 'E02006189',
        '8UE' => 'E02006189',
        '8UF' => 'E02006189',
        '8UG' => 'E02006189',
        '8UH' => 'E02006189',
        '8UJ' => 'E02006189',
        '8UL' => 'E02006189',
        '8UN' => 'E02006189',
        '8UP' => 'E02006189',
        '8UQ' => 'E02006189',
        '8UR' => 'E02006189',
        '8US' => 'E02006189',
        '8UT' => 'E02006189',
        '8UU' => 'E02006189',
        '8UW' => 'E02006189',
        '8UX' => 'E02006189',
        '8UY' => 'E02006190',
        '8UZ' => 'E02006189',
        '8WA' => 'E02006190',
        '8WB' => 'E02006190',
        '8WD' => 'E02006191',
        '8WE' => 'E02006191',
        '8WF' => 'E02006189',
        '8WG' => 'E02006190',
        '8WH' => 'E02006190',
        '8WJ' => 'E02006190',
        '8WL' => 'E02006190',
        '8WN' => 'E02006189',
        '8WP' => 'E02006190',
        '8WQ' => 'E02006190',
        '8WR' => 'E02006190',
        '8WS' => 'E02006190',
        '8WT' => 'E02006191',
        '8WU' => 'E02006190',
        '8WY' => 'E02006190',
        '8WZ' => 'E02006190',
        '8XA' => 'E02006191',
        '8XB' => 'E02006191',
        '8XD' => 'E02006191',
        '8XE' => 'E02006191',
        '8XF' => 'E02006191',
        '8XG' => 'E02006191',
        '8XH' => 'E02006191',
        '8XJ' => 'E02006191',
        '8XL' => 'E02006191',
        '8XN' => 'E02006191',
        '8XP' => 'E02006191',
        '8XQ' => 'E02006191',
        '8XR' => 'E02006191',
        '8XS' => 'E02006191',
        '8XT' => 'E02006191',
        '8XU' => 'E02006191',
        '8XW' => 'E02006191',
        '8XX' => 'E02006191',
        '8XY' => 'E02006191',
        '8XZ' => 'E02006191',
        '8YA' => 'E02006191',
        '8YB' => 'E02006191',
        '8YD' => 'E02006191',
        '8YE' => 'E02006190',
        '8YF' => 'E02006191',
        '8YG' => 'E02006190',
        '8YH' => 'E02006191',
        '8YJ' => 'E02006191',
        '8YL' => 'E02006190',
        '8YN' => 'E02006190',
        '8YP' => 'E02006191',
        '8YQ' => 'E02006190',
        '8YR' => 'E02006191',
        '8YS' => 'E02006191',
        '8YT' => 'E02006191',
        '8YU' => 'E02006190',
        '8YW' => 'E02006191',
        '8YX' => 'E02006190',
        '8YY' => 'E02006191',
        '8YZ' => 'E02006190',
        '8ZA' => 'E02006190',
        '8ZB' => 'E02006190',
        '8ZD' => 'E02006191',
        '8ZE' => 'E02006190',
        '8ZF' => 'E02006190',
        '8ZG' => 'E02006190',
        '8ZH' => 'E02006190',
        '8ZJ' => 'E02006190',
        '8ZL' => 'E02006190',
        '8ZN' => 'E02006190',
        '8ZP' => 'E02006190',
        '8ZQ' => 'E02006190',
        '8ZR' => 'E02006190',
        '8ZS' => 'E02006190',
        '8ZT' => 'E02006190',
        '8ZU' => 'E02006190',
        '8ZW' => 'E02006190',
        '8ZX' => 'E02006190',
        '8ZY' => 'E02006190',
        '8ZZ' => 'E02006190',
        '9AA' => 'E02006191',
        '9AB' => 'E02006191',
        '9AD' => 'E02006191',
        '9AE' => 'E02006191',
        '9AF' => 'E02006191',
        '9AG' => 'E02006191',
        '9AH' => 'E02006191',
        '9AJ' => 'E02006191',
        '9AL' => 'E02006191',
        '9AN' => 'E02006191',
        '9AP' => 'E02006191',
        '9AQ' => 'E02006191',
        '9AR' => 'E02006191',
        '9AS' => 'E02006191',
        '9AT' => 'E02006191',
        '9AU' => 'E02006191',
        '9AW' => 'E02006191',
        '9AX' => 'E02006191',
        '9AY' => 'E02006191',
        '9AZ' => 'E02006191',
        '9BA' => 'E02006191',
        '9BB' => 'E02006191',
        '9BD' => 'E02006191',
        '9BE' => 'E02006191',
        '9BF' => 'E02006191',
        '9BG' => 'E02006191',
        '9BJ' => 'E02006191',
        '9BL' => 'E02006191',
        '9BN' => 'E02006191',
        '9BP' => 'E02006191',
        '9BQ' => 'E02006191',
        '9BR' => 'E02006191',
        '9BS' => 'E02006191',
        '9BT' => 'E02006191',
        '9BU' => 'E02006191',
        '9BW' => 'E02006191',
        '9BX' => 'E02006191',
        '9BY' => 'E02006191',
        '9BZ' => 'E02006191',
        '9DA' => 'E02006191',
        '9DB' => 'E02006191',
        '9DD' => 'E02006191',
        '9DE' => 'E02006191',
        '9DF' => 'E02006191',
        '9DG' => 'E02006191',
        '9DH' => 'E02006191',
        '9DJ' => 'E02006191',
        '9DL' => 'E02006191',
        '9DN' => 'E02006191',
        '9DP' => 'E02006191',
        '9DQ' => 'E02006191',
        '9DS' => 'E02006191',
        '9DT' => 'E02006191',
        '9DU' => 'E02006191',
        '9DW' => 'E02006191',
        '9DX' => 'E02006191',
        '9DY' => 'E02006191',
        '9DZ' => 'E02006191',
        '9EA' => 'E02006191',
        '9EB' => 'E02006191',
        '9ED' => 'E02006191',
        '9EE' => 'E02006191',
        '9EF' => 'E02006191',
        '9EG' => 'E02006191',
        '9EH' => 'E02006191',
        '9EJ' => 'E02006191',
        '9EL' => 'E02006191',
        '9EN' => 'E02006191',
        '9EP' => 'E02006191',
        '9EQ' => 'E02006191',
        '9ER' => 'E02006191',
        '9ES' => 'E02006191',
        '9ET' => 'E02006191',
        '9EU' => 'E02006191',
        '9EW' => 'E02006191',
        '9EX' => 'E02006191',
        '9EY' => 'E02006191',
        '9EZ' => 'E02006191',
        '9FA' => 'E02006191',
        '9FB' => 'E02006191',
        '9FD' => 'E02006191',
        '9FE' => 'E02006191',
        '9FF' => 'E02006191',
        '9FG' => 'E02006191',
        '9FH' => 'E02006191',
        '9FJ' => 'E02006191',
        '9FL' => 'E02006191',
        '9FN' => 'E02006191',
        '9GS' => 'E02006191',
        '9GZ' => 'E02006191',
        '9QL' => 'E02006191',
        '9QQ' => 'E02006191',
        '9WE' => 'E02006191',
        '9WG' => 'E02006191',
        '9WQ' => 'E02006191',
        '9WY' => 'E02006191',
        '9YN' => 'E02006191',
        '9ZG' => 'E02006191',
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
