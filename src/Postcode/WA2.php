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
final class WA2
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02002601',
        '0AB' => 'E02002596',
        '0AD' => 'E02002597',
        '0AE' => 'E02002597',
        '0AF' => 'E02002597',
        '0AG' => 'E02002596',
        '0AH' => 'E02002596',
        '0AJ' => 'E02002596',
        '0AL' => 'E02002596',
        '0AN' => 'E02002596',
        '0AP' => 'E02002596',
        '0AQ' => 'E02002596',
        '0AR' => 'E02002597',
        '0AS' => 'E02002596',
        '0AT' => 'E02002596',
        '0AU' => 'E02002596',
        '0AW' => 'E02002596',
        '0AX' => 'E02002596',
        '0AY' => 'E02002596',
        '0AZ' => 'E02002596',
        '0BA' => 'E02002596',
        '0BB' => 'E02002597',
        '0BD' => 'E02002596',
        '0BE' => 'E02002596',
        '0BF' => 'E02002597',
        '0BG' => 'E02002596',
        '0BH' => 'E02002596',
        '0BJ' => 'E02002597',
        '0BL' => 'E02002596',
        '0BN' => 'E02002596',
        '0BP' => 'E02002596',
        '0BQ' => 'E02002596',
        '0BS' => 'E02002596',
        '0BT' => 'E02002596',
        '0BU' => 'E02002596',
        '0BW' => 'E02002596',
        '0BX' => 'E02002596',
        '0BY' => 'E02002596',
        '0BZ' => 'E02002596',
        '0DA' => 'E02002596',
        '0DB' => 'E02002596',
        '0DD' => 'E02002596',
        '0DE' => 'E02002596',
        '0DF' => 'E02002601',
        '0DG' => 'E02002596',
        '0DH' => 'E02002596',
        '0DJ' => 'E02002596',
        '0DL' => 'E02002596',
        '0DN' => 'E02002596',
        '0DP' => 'E02002596',
        '0DQ' => 'E02002596',
        '0DR' => 'E02002596',
        '0DS' => 'E02002597',
        '0DT' => 'E02002597',
        '0DU' => 'E02002597',
        '0DW' => 'E02002596',
        '0DX' => 'E02002595',
        '0DY' => 'E02002595',
        '0DZ' => 'E02002597',
        '0EA' => 'E02002597',
        '0EB' => 'E02002597',
        '0ED' => 'E02002597',
        '0EE' => 'E02002597',
        '0EF' => 'E02002597',
        '0EG' => 'E02002597',
        '0EH' => 'E02002596',
        '0EJ' => 'E02002596',
        '0EL' => 'E02002596',
        '0EN' => 'E02002596',
        '0EP' => 'E02002596',
        '0EQ' => 'E02002597',
        '0ER' => 'E02002597',
        '0ES' => 'E02002597',
        '0ET' => 'E02002597',
        '0EU' => 'E02002597',
        '0EW' => 'E02002596',
        '0EX' => 'E02002597',
        '0EY' => 'E02002597',
        '0EZ' => 'E02002597',
        '0FA' => 'E02002597',
        '0FB' => 'E02002596',
        '0FD' => 'E02002597',
        '0FE' => 'E02002597',
        '0FF' => 'E02002597',
        '0FG' => 'E02002597',
        '0FH' => 'E02002597',
        '0FJ' => 'E02002596',
        '0FL' => 'E02002597',
        '0FN' => 'E02002596',
        '0FP' => 'E02002607',
        '0FQ' => 'E02002596',
        '0FR' => 'E02002607',
        '0FS' => 'E02002607',
        '0FT' => 'E02002596',
        '0FU' => 'E02002596',
        '0FW' => 'E02002596',
        '0FX' => 'E02002596',
        '0FY' => 'E02002596',
        '0FZ' => 'E02002596',
        '0GA' => 'E02002597',
        '0GB' => 'E02002597',
        '0GD' => 'E02002595',
        '0GE' => 'E02002595',
        '0GF' => 'E02002597',
        '0GG' => 'E02002597',
        '0GH' => 'E02002607',
        '0GJ' => 'E02002607',
        '0GL' => 'E02002597',
        '0GN' => 'E02002597',
        '0GP' => 'E02002597',
        '0GQ' => 'E02002607',
        '0GR' => 'E02002597',
        '0GS' => 'E02002607',
        '0GT' => 'E02002597',
        '0GU' => 'E02002597',
        '0GW' => 'E02002597',
        '0GX' => 'E02002597',
        '0GY' => 'E02002597',
        '0GZ' => 'E02002596',
        '0HA' => 'E02002597',
        '0HB' => 'E02002597',
        '0HD' => 'E02002596',
        '0HE' => 'E02002597',
        '0HF' => 'E02002597',
        '0HG' => 'E02002597',
        '0HH' => 'E02002597',
        '0HJ' => 'E02002597',
        '0HL' => 'E02002597',
        '0HN' => 'E02002597',
        '0HP' => 'E02002597',
        '0HQ' => 'E02002597',
        '0HR' => 'E02002597',
        '0HS' => 'E02002597',
        '0HT' => 'E02002597',
        '0HU' => 'E02002597',
        '0HW' => 'E02002597',
        '0HX' => 'E02002597',
        '0HY' => 'E02002597',
        '0HZ' => 'E02002597',
        '0JA' => 'E02002597',
        '0JB' => 'E02002597',
        '0JD' => 'E02002597',
        '0JE' => 'E02002597',
        '0JF' => 'E02002597',
        '0JG' => 'E02002597',
        '0JH' => 'E02002597',
        '0JJ' => 'E02002597',
        '0JL' => 'E02002597',
        '0JN' => 'E02002597',
        '0JP' => 'E02002597',
        '0JQ' => 'E02002597',
        '0JR' => 'E02002597',
        '0JS' => 'E02002597',
        '0JT' => 'E02002597',
        '0JU' => 'E02002595',
        '0JW' => 'E02002597',
        '0JX' => 'E02002595',
        '0JY' => 'E02002597',
        '0JZ' => 'E02002597',
        '0LA' => 'E02002597',
        '0LB' => 'E02002596',
        '0LD' => 'E02002597',
        '0LE' => 'E02002597',
        '0LF' => 'E02002596',
        '0LG' => 'E02002597',
        '0LH' => 'E02002596',
        '0LJ' => 'E02002596',
        '0LL' => 'E02002596',
        '0LN' => 'E02002597',
        '0LP' => 'E02002595',
        '0LQ' => 'E02002596',
        '0LR' => 'E02002595',
        '0LS' => 'E02002596',
        '0LT' => 'E02002596',
        '0LU' => 'E02002596',
        '0LW' => 'E02002597',
        '0LX' => 'E02002595',
        '0LY' => 'E02002596',
        '0LZ' => 'E02002595',
        '0NA' => 'E02002595',
        '0NB' => 'E02002595',
        '0ND' => 'E02002595',
        '0NE' => 'E02002595',
        '0NF' => 'E02002595',
        '0NG' => 'E02002595',
        '0NH' => 'E02002595',
        '0NJ' => 'E02002595',
        '0NL' => 'E02002595',
        '0NN' => 'E02002595',
        '0NP' => 'E02002595',
        '0NQ' => 'E02002595',
        '0NR' => 'E02002595',
        '0NS' => 'E02002595',
        '0NT' => 'E02002595',
        '0NU' => 'E02002601',
        '0NW' => 'E02002595',
        '0NX' => 'E02002601',
        '0NY' => 'E02002596',
        '0NZ' => 'E02002607',
        '0PA' => 'E02002596',
        '0PB' => 'E02002601',
        '0PD' => 'E02002601',
        '0PE' => 'E02002597',
        '0PF' => 'E02002596',
        '0PG' => 'E02002596',
        '0PH' => 'E02002596',
        '0PJ' => 'E02002596',
        '0PL' => 'E02002596',
        '0PN' => 'E02002596',
        '0PP' => 'E02002596',
        '0PQ' => 'E02002596',
        '0PR' => 'E02002596',
        '0PS' => 'E02002596',
        '0PT' => 'E02002596',
        '0PU' => 'E02002596',
        '0PW' => 'E02002596',
        '0PX' => 'E02002596',
        '0PY' => 'E02002596',
        '0PZ' => 'E02002596',
        '0QA' => 'E02002596',
        '0QB' => 'E02002596',
        '0QD' => 'E02002596',
        '0QE' => 'E02002596',
        '0QF' => 'E02002596',
        '0QG' => 'E02002596',
        '0QH' => 'E02002601',
        '0QJ' => 'E02002601',
        '0QL' => 'E02002597',
        '0QN' => 'E02002601',
        '0QP' => 'E02002601',
        '0QQ' => 'E02002596',
        '0QR' => 'E02002601',
        '0QS' => 'E02002601',
        '0QT' => 'E02002601',
        '0QU' => 'E02002601',
        '0QW' => 'E02002601',
        '0QX' => 'E02002601',
        '0QY' => 'E02002596',
        '0QZ' => 'E02002596',
        '0RA' => 'E02002592',
        '0RB' => 'E02002592',
        '0RD' => 'E02002592',
        '0RE' => 'E02002592',
        '0RF' => 'E02002592',
        '0RG' => 'E02002592',
        '0RH' => 'E02002592',
        '0RJ' => 'E02002592',
        '0RL' => 'E02002592',
        '0RN' => 'E02002592',
        '0RP' => 'E02002596',
        '0RQ' => 'E02002592',
        '0RR' => 'E02002596',
        '0RS' => 'E02002596',
        '0RT' => 'E02002596',
        '0RU' => 'E02002597',
        '0RW' => 'E02002596',
        '0RX' => 'E02002601',
        '0RY' => 'E02002596',
        '0SA' => 'E02002596',
        '0SB' => 'E02002596',
        '0SD' => 'E02002596',
        '0SE' => 'E02002596',
        '0SF' => 'E02002596',
        '0SG' => 'E02002596',
        '0SH' => 'E02002596',
        '0SJ' => 'E02002607',
        '0SL' => 'E02002596',
        '0SN' => 'E02002596',
        '0SP' => 'E02002597',
        '0SQ' => 'E02002596',
        '0SR' => 'E02002596',
        '0SS' => 'E02002596',
        '0ST' => 'E02002596',
        '0SU' => 'E02002595',
        '0SW' => 'E02002597',
        '0SX' => 'E02002596',
        '0SY' => 'E02002595',
        '0SZ' => 'E02002595',
        '0TA' => 'E02002595',
        '0TB' => 'E02002595',
        '0TD' => 'E02002592',
        '0TE' => 'E02002596',
        '0TF' => 'E02002596',
        '0TG' => 'E02002596',
        '0TH' => 'E02002596',
        '0TJ' => 'E02002597',
        '0TL' => 'E02002597',
        '0TN' => 'E02002597',
        '0TP' => 'E02002597',
        '0TQ' => 'E02002596',
        '0TR' => 'E02002597',
        '0TS' => 'E02002597',
        '0TT' => 'E02002597',
        '0TU' => 'E02002597',
        '0TW' => 'E02002597',
        '0TX' => 'E02002597',
        '0TY' => 'E02002597',
        '0TZ' => 'E02002597',
        '0UA' => 'E02002597',
        '0UB' => 'E02002597',
        '0UD' => 'E02002607',
        '0UE' => 'E02002596',
        '0UF' => 'E02002596',
        '0UG' => 'E02002596',
        '0UH' => 'E02002596',
        '0UJ' => 'E02002596',
        '0UL' => 'E02002596',
        '0UN' => 'E02002596',
        '0UP' => 'E02002596',
        '0UQ' => 'E02002596',
        '0UR' => 'E02002596',
        '0US' => 'E02002597',
        '0UT' => 'E02002596',
        '0UU' => 'E02002607',
        '0UW' => 'E02002596',
        '0UX' => 'E02002596',
        '0UY' => 'E02002595',
        '0UZ' => 'E02002596',
        '0WA' => 'E02002607',
        '0WB' => 'E02002596',
        '0WD' => 'E02002607',
        '0WE' => 'E02002607',
        '0WF' => 'E02002596',
        '0WG' => 'E02002596',
        '0WH' => 'E02002607',
        '0WJ' => 'E02002596',
        '0WL' => 'E02002597',
        '0WN' => 'E02002597',
        '0WP' => 'E02002607',
        '0WQ' => 'E02002607',
        '0WR' => 'E02002596',
        '0WS' => 'E02002596',
        '0WT' => 'E02002596',
        '0WU' => 'E02002596',
        '0WW' => 'E02002596',
        '0WX' => 'E02002597',
        '0WY' => 'E02002607',
        '0WZ' => 'E02002597',
        '0XA' => 'E02002596',
        '0XB' => 'E02002596',
        '0XD' => 'E02002596',
        '0XE' => 'E02002596',
        '0XF' => 'E02002596',
        '0XG' => 'E02002596',
        '0XH' => 'E02002607',
        '0XJ' => 'E02002607',
        '0XL' => 'E02002607',
        '0XN' => 'E02002596',
        '0XP' => 'E02002596',
        '0XQ' => 'E02002596',
        '0XR' => 'E02002596',
        '0XS' => 'E02002596',
        '0XT' => 'E02002596',
        '0XU' => 'E02002596',
        '0XW' => 'E02002596',
        '0XX' => 'E02002596',
        '0XY' => 'E02002607',
        '0XZ' => 'E02002596',
        '0YA' => 'E02002596',
        '0YB' => 'E02002596',
        '0YD' => 'E02002597',
        '0YE' => 'E02002607',
        '0YF' => 'E02002607',
        '0YG' => 'E02002607',
        '0YH' => 'E02002607',
        '0YJ' => 'E02002607',
        '0YL' => 'E02002596',
        '0YX' => 'E02002607',
        '0YY' => 'E02002607',
        '0YZ' => 'E02002607',
        '0ZS' => 'E02002607',
        '7AB' => 'E02002607',
        '7AD' => 'E02002607',
        '7AE' => 'E02002602',
        '7AF' => 'E02002607',
        '7AG' => 'E02002607',
        '7AH' => 'E02002607',
        '7AJ' => 'E02002607',
        '7AL' => 'E02002607',
        '7AN' => 'E02002607',
        '7AP' => 'E02002607',
        '7AQ' => 'E02002607',
        '7AR' => 'E02002606',
        '7AS' => 'E02002606',
        '7AT' => 'E02002606',
        '7AU' => 'E02002606',
        '7AW' => 'E02002607',
        '7AX' => 'E02002606',
        '7AY' => 'E02002606',
        '7AZ' => 'E02002606',
        '7BA' => 'E02002606',
        '7BB' => 'E02002600',
        '7BD' => 'E02002600',
        '7BE' => 'E02002606',
        '7BF' => 'E02002607',
        '7BG' => 'E02002606',
        '7BH' => 'E02002606',
        '7BJ' => 'E02002606',
        '7BL' => 'E02002607',
        '7BN' => 'E02002606',
        '7BP' => 'E02002607',
        '7BQ' => 'E02002606',
        '7BS' => 'E02002607',
        '7BT' => 'E02002607',
        '7BU' => 'E02002607',
        '7BW' => 'E02002607',
        '7BX' => 'E02002606',
        '7BY' => 'E02002606',
        '7BZ' => 'E02002607',
        '7DA' => 'E02002607',
        '7DB' => 'E02002606',
        '7DD' => 'E02002607',
        '7DE' => 'E02002607',
        '7DF' => 'E02002607',
        '7DG' => 'E02002607',
        '7DH' => 'E02002607',
        '7DJ' => 'E02002607',
        '7DL' => 'E02002607',
        '7DN' => 'E02002607',
        '7DP' => 'E02002607',
        '7DQ' => 'E02002607',
        '7DR' => 'E02002606',
        '7DS' => 'E02002607',
        '7DT' => 'E02002606',
        '7DU' => 'E02002606',
        '7DW' => 'E02002607',
        '7DX' => 'E02002606',
        '7DY' => 'E02002606',
        '7DZ' => 'E02002607',
        '7EA' => 'E02001420',
        '7EB' => 'E02002606',
        '7ED' => 'E02002606',
        '7EE' => 'E02002606',
        '7EF' => 'E02002606',
        '7EG' => 'E02002606',
        '7EH' => 'E02002607',
        '7EJ' => 'E02002607',
        '7EL' => 'E02002607',
        '7EN' => 'E02002607',
        '7EP' => 'E02002606',
        '7EQ' => 'E02002606',
        '7ER' => 'E02002607',
        '7ES' => 'E02002606',
        '7ET' => 'E02002606',
        '7EU' => 'E02002606',
        '7EW' => 'E02002607',
        '7EX' => 'E02002606',
        '7EY' => 'E02002606',
        '7EZ' => 'E02002606',
        '7FA' => 'E02002607',
        '7FB' => 'E02002606',
        '7FD' => 'E02002607',
        '7FE' => 'E02002606',
        '7FF' => 'E02002606',
        '7FG' => 'E02002607',
        '7FH' => 'E02002606',
        '7FJ' => 'E02002606',
        '7FL' => 'E02002606',
        '7FN' => 'E02002607',
        '7FP' => 'E02002606',
        '7FQ' => 'E02002606',
        '7FR' => 'E02002606',
        '7FS' => 'E02002606',
        '7FT' => 'E02002607',
        '7FU' => 'E02002607',
        '7FW' => 'E02002607',
        '7FY' => 'E02002607',
        '7GA' => 'E02002607',
        '7GB' => 'E02002600',
        '7GD' => 'E02002600',
        '7GE' => 'E02002600',
        '7GF' => 'E02002600',
        '7GH' => 'E02002606',
        '7GL' => 'E02002606',
        '7GP' => 'E02002606',
        '7HA' => 'E02002606',
        '7HB' => 'E02002606',
        '7HD' => 'E02002607',
        '7HE' => 'E02002606',
        '7HF' => 'E02002606',
        '7HG' => 'E02002607',
        '7HH' => 'E02002606',
        '7HJ' => 'E02002607',
        '7HP' => 'E02002607',
        '7HQ' => 'E02002607',
        '7HR' => 'E02002607',
        '7HS' => 'E02002607',
        '7HW' => 'E02002607',
        '7HZ' => 'E02002607',
        '7JA' => 'E02002607',
        '7JB' => 'E02002607',
        '7JD' => 'E02002607',
        '7JE' => 'E02002607',
        '7JF' => 'E02002607',
        '7JG' => 'E02002607',
        '7JH' => 'E02002607',
        '7JJ' => 'E02002607',
        '7JL' => 'E02002607',
        '7JN' => 'E02002607',
        '7JP' => 'E02002607',
        '7JQ' => 'E02002607',
        '7JR' => 'E02002607',
        '7JT' => 'E02002607',
        '7JU' => 'E02002607',
        '7JW' => 'E02002607',
        '7JX' => 'E02002607',
        '7JY' => 'E02002607',
        '7JZ' => 'E02002607',
        '7LD' => 'E02002607',
        '7LE' => 'E02002607',
        '7LF' => 'E02002607',
        '7LG' => 'E02002607',
        '7LH' => 'E02002607',
        '7LJ' => 'E02002607',
        '7LL' => 'E02002607',
        '7LN' => 'E02002607',
        '7LP' => 'E02002607',
        '7LQ' => 'E02002602',
        '7LR' => 'E02002602',
        '7LS' => 'E02002607',
        '7LT' => 'E02002602',
        '7LU' => 'E02002602',
        '7LW' => 'E02002607',
        '7LX' => 'E02002606',
        '7LY' => 'E02002607',
        '7LZ' => 'E02002607',
        '7NA' => 'E02002607',
        '7NB' => 'E02002607',
        '7ND' => 'E02002607',
        '7NE' => 'E02002607',
        '7NF' => 'E02002607',
        '7NG' => 'E02002607',
        '7NH' => 'E02002607',
        '7NJ' => 'E02002607',
        '7NL' => 'E02002607',
        '7NN' => 'E02002607',
        '7NP' => 'E02002607',
        '7NQ' => 'E02002607',
        '7NR' => 'E02002607',
        '7NS' => 'E02002607',
        '7NT' => 'E02002607',
        '7NU' => 'E02002607',
        '7NW' => 'E02002607',
        '7NX' => 'E02002607',
        '7NY' => 'E02002602',
        '7NZ' => 'E02002602',
        '7PA' => 'E02002602',
        '7PB' => 'E02002607',
        '7PD' => 'E02002607',
        '7PE' => 'E02002600',
        '7PF' => 'E02002607',
        '7PG' => 'E02002600',
        '7PH' => 'E02002600',
        '7PJ' => 'E02002606',
        '7PL' => 'E02002600',
        '7PN' => 'E02002600',
        '7PP' => 'E02002600',
        '7PQ' => 'E02002606',
        '7PR' => 'E02002600',
        '7PS' => 'E02002600',
        '7PT' => 'E02002600',
        '7PU' => 'E02002600',
        '7PW' => 'E02002600',
        '7PX' => 'E02002600',
        '7PY' => 'E02002602',
        '7PZ' => 'E02002602',
        '7QA' => 'E02002600',
        '7QB' => 'E02002600',
        '7QD' => 'E02002600',
        '7QE' => 'E02002600',
        '7QF' => 'E02002600',
        '7QG' => 'E02002600',
        '7QH' => 'E02002600',
        '7QJ' => 'E02002600',
        '7QL' => 'E02002600',
        '7QN' => 'E02002600',
        '7QP' => 'E02002600',
        '7QQ' => 'E02002600',
        '7QR' => 'E02002600',
        '7QS' => 'E02002600',
        '7QT' => 'E02002606',
        '7QW' => 'E02002600',
        '7QZ' => 'E02002600',
        '7RA' => 'E02002600',
        '7RB' => 'E02002600',
        '7RD' => 'E02002600',
        '7RE' => 'E02002600',
        '7RF' => 'E02002600',
        '7RG' => 'E02002600',
        '7RH' => 'E02002600',
        '7RJ' => 'E02002600',
        '7RL' => 'E02002600',
        '7RN' => 'E02002600',
        '7RP' => 'E02002600',
        '7RQ' => 'E02002600',
        '7RR' => 'E02002600',
        '7RS' => 'E02002600',
        '7RT' => 'E02002600',
        '7RU' => 'E02002600',
        '7RW' => 'E02002600',
        '7RX' => 'E02002600',
        '7RY' => 'E02002600',
        '7RZ' => 'E02002600',
        '7SA' => 'E02002600',
        '7SB' => 'E02002600',
        '7SD' => 'E02002600',
        '7SE' => 'E02002600',
        '7SF' => 'E02002600',
        '7SH' => 'E02002600',
        '7SP' => 'E02002600',
        '7SQ' => 'E02002600',
        '7SR' => 'E02002600',
        '7SS' => 'E02002600',
        '7SY' => 'E02002600',
        '7SZ' => 'E02002597',
        '7TA' => 'E02002597',
        '7TB' => 'E02002607',
        '7TD' => 'E02002607',
        '7TE' => 'E02002607',
        '7TF' => 'E02002607',
        '7TG' => 'E02002607',
        '7TH' => 'E02002600',
        '7TJ' => 'E02002607',
        '7TL' => 'E02002607',
        '7TP' => 'E02002607',
        '7TR' => 'E02002606',
        '7TS' => 'E02002607',
        '7TT' => 'E02002607',
        '7TU' => 'E02002607',
        '7TX' => 'E02002607',
        '7TY' => 'E02002607',
        '7UA' => 'E02002607',
        '7UB' => 'E02002607',
        '7UD' => 'E02002607',
        '7UE' => 'E02002607',
        '7UL' => 'E02002607',
        '7UN' => 'E02002607',
        '7UP' => 'E02002607',
        '7UR' => 'E02002607',
        '7UW' => 'E02002607',
        '7UY' => 'E02002607',
        '7UZ' => 'E02002607',
        '7WA' => 'E02002607',
        '7WN' => 'E02002607',
        '7WP' => 'E02002607',
        '7WQ' => 'E02002607',
        '7WR' => 'E02002607',
        '7WS' => 'E02002607',
        '7WT' => 'E02002607',
        '7WU' => 'E02002607',
        '7WW' => 'E02002607',
        '7WX' => 'E02002607',
        '7WY' => 'E02002607',
        '7WZ' => 'E02002607',
        '7XA' => 'E02002607',
        '7XB' => 'E02002607',
        '7XD' => 'E02002607',
        '7XE' => 'E02002607',
        '7XF' => 'E02002607',
        '7XG' => 'E02002607',
        '7XH' => 'E02002607',
        '7XQ' => 'E02002607',
        '7ZW' => 'E02002607',
        '8AA' => 'E02002602',
        '8AB' => 'E02002600',
        '8AD' => 'E02002600',
        '8AE' => 'E02002600',
        '8AF' => 'E02002600',
        '8AG' => 'E02002600',
        '8AH' => 'E02002600',
        '8AJ' => 'E02002600',
        '8AL' => 'E02002600',
        '8AN' => 'E02002600',
        '8AP' => 'E02002600',
        '8AQ' => 'E02002600',
        '8AR' => 'E02002600',
        '8AS' => 'E02002600',
        '8AT' => 'E02002600',
        '8AU' => 'E02002600',
        '8AW' => 'E02002600',
        '8AX' => 'E02002600',
        '8AY' => 'E02002600',
        '8AZ' => 'E02002600',
        '8BA' => 'E02002600',
        '8BB' => 'E02002600',
        '8BD' => 'E02002600',
        '8BE' => 'E02002600',
        '8BG' => 'E02002600',
        '8BH' => 'E02002600',
        '8BJ' => 'E02002600',
        '8BL' => 'E02002600',
        '8BN' => 'E02002600',
        '8BP' => 'E02002600',
        '8BQ' => 'E02002600',
        '8BS' => 'E02002600',
        '8BT' => 'E02002600',
        '8BU' => 'E02002600',
        '8BW' => 'E02002600',
        '8BX' => 'E02002600',
        '8BZ' => 'E02002600',
        '8DB' => 'E02002600',
        '8DH' => 'E02002600',
        '8DJ' => 'E02002600',
        '8DL' => 'E02002600',
        '8DN' => 'E02002600',
        '8DR' => 'E02002600',
        '8DS' => 'E02002600',
        '8DT' => 'E02002600',
        '8DU' => 'E02002600',
        '8DW' => 'E02002600',
        '8DX' => 'E02002600',
        '8DY' => 'E02002600',
        '8DZ' => 'E02002600',
        '8EA' => 'E02002600',
        '8EB' => 'E02002600',
        '8ED' => 'E02002600',
        '8EE' => 'E02002600',
        '8EF' => 'E02002600',
        '8EG' => 'E02002600',
        '8EH' => 'E02002600',
        '8EJ' => 'E02002600',
        '8EL' => 'E02002600',
        '8EN' => 'E02002600',
        '8EP' => 'E02002600',
        '8EQ' => 'E02002600',
        '8ER' => 'E02002600',
        '8ES' => 'E02002600',
        '8ET' => 'E02002600',
        '8EU' => 'E02002600',
        '8EW' => 'E02002600',
        '8EX' => 'E02002600',
        '8EY' => 'E02002600',
        '8EZ' => 'E02002600',
        '8FA' => 'E02002607',
        '8FB' => 'E02002600',
        '8FD' => 'E02002607',
        '8FE' => 'E02002600',
        '8FF' => 'E02002600',
        '8FG' => 'E02002607',
        '8FH' => 'E02002600',
        '8FJ' => 'E02002600',
        '8FL' => 'E02002607',
        '8FN' => 'E02002607',
        '8FP' => 'E02002607',
        '8FQ' => 'E02002600',
        '8FR' => 'E02002600',
        '8FS' => 'E02002607',
        '8FT' => 'E02002600',
        '8FU' => 'E02002607',
        '8FW' => 'E02002600',
        '8FX' => 'E02002600',
        '8FY' => 'E02002600',
        '8FZ' => 'E02002607',
        '8GA' => 'E02002607',
        '8GB' => 'E02002607',
        '8HA' => 'E02002600',
        '8HB' => 'E02002602',
        '8HD' => 'E02002592',
        '8HE' => 'E02002600',
        '8HG' => 'E02002602',
        '8HH' => 'E02002600',
        '8HJ' => 'E02002602',
        '8HL' => 'E02002600',
        '8HN' => 'E02002600',
        '8HP' => 'E02002600',
        '8HQ' => 'E02002602',
        '8HR' => 'E02002600',
        '8HS' => 'E02002600',
        '8HT' => 'E02002600',
        '8HU' => 'E02002600',
        '8HW' => 'E02002600',
        '8HY' => 'E02002600',
        '8HZ' => 'E02002602',
        '8JA' => 'E02002602',
        '8JB' => 'E02002602',
        '8JD' => 'E02002602',
        '8JE' => 'E02002602',
        '8JF' => 'E02002602',
        '8JG' => 'E02002602',
        '8JH' => 'E02002595',
        '8JJ' => 'E02002602',
        '8JL' => 'E02002602',
        '8JN' => 'E02002602',
        '8JP' => 'E02002602',
        '8JQ' => 'E02002602',
        '8JR' => 'E02002602',
        '8JS' => 'E02002602',
        '8JT' => 'E02002602',
        '8JU' => 'E02002602',
        '8JW' => 'E02002607',
        '8JX' => 'E02002602',
        '8JY' => 'E02002602',
        '8LA' => 'E02002595',
        '8LB' => 'E02002592',
        '8LD' => 'E02002592',
        '8LE' => 'E02002592',
        '8LF' => 'E02002592',
        '8LG' => 'E02002592',
        '8LH' => 'E02002592',
        '8LJ' => 'E02002592',
        '8LL' => 'E02002592',
        '8LN' => 'E02002592',
        '8LP' => 'E02002592',
        '8LQ' => 'E02002592',
        '8LR' => 'E02002592',
        '8LS' => 'E02002592',
        '8LT' => 'E02002595',
        '8LU' => 'E02002597',
        '8LW' => 'E02002592',
        '8LX' => 'E02002592',
        '8LY' => 'E02002600',
        '8LZ' => 'E02002607',
        '8NA' => 'E02002592',
        '8NB' => 'E02002592',
        '8ND' => 'E02002592',
        '8NE' => 'E02002592',
        '8NF' => 'E02002592',
        '8NG' => 'E02002592',
        '8NH' => 'E02002592',
        '8NJ' => 'E02002592',
        '8NL' => 'E02002595',
        '8NN' => 'E02002602',
        '8NP' => 'E02002607',
        '8NQ' => 'E02002592',
        '8NR' => 'E02002602',
        '8NS' => 'E02002602',
        '8NT' => 'E02002602',
        '8NU' => 'E02002602',
        '8NW' => 'E02002607',
        '8NX' => 'E02002602',
        '8NY' => 'E02002602',
        '8NZ' => 'E02002600',
        '8PA' => 'E02002600',
        '8PB' => 'E02002600',
        '8PD' => 'E02002600',
        '8PE' => 'E02002600',
        '8PF' => 'E02002600',
        '8PG' => 'E02002600',
        '8PH' => 'E02002600',
        '8PJ' => 'E02002600',
        '8PL' => 'E02002600',
        '8PN' => 'E02002597',
        '8PP' => 'E02002600',
        '8PQ' => 'E02002600',
        '8PR' => 'E02002600',
        '8PS' => 'E02002597',
        '8PT' => 'E02002597',
        '8PU' => 'E02002600',
        '8PW' => 'E02002600',
        '8PX' => 'E02002600',
        '8PY' => 'E02002600',
        '8PZ' => 'E02002600',
        '8QA' => 'E02002600',
        '8QB' => 'E02002600',
        '8QD' => 'E02002600',
        '8QE' => 'E02002600',
        '8QF' => 'E02002600',
        '8QG' => 'E02002595',
        '8QH' => 'E02002595',
        '8QJ' => 'E02002595',
        '8QL' => 'E02002595',
        '8QN' => 'E02002595',
        '8QP' => 'E02002595',
        '8QQ' => 'E02002600',
        '8QR' => 'E02002592',
        '8QS' => 'E02002595',
        '8QT' => 'E02002595',
        '8QU' => 'E02002595',
        '8QW' => 'E02002595',
        '8QX' => 'E02002600',
        '8QY' => 'E02002595',
        '8QZ' => 'E02002595',
        '8RA' => 'E02002595',
        '8RB' => 'E02002595',
        '8RD' => 'E02002592',
        '8RE' => 'E02002595',
        '8RF' => 'E02002602',
        '8RG' => 'E02002592',
        '8RH' => 'E02002600',
        '8RJ' => 'E02002595',
        '8RL' => 'E02002595',
        '8RN' => 'E02002595',
        '8RP' => 'E02002592',
        '8RQ' => 'E02002595',
        '8RR' => 'E02002592',
        '8RS' => 'E02002592',
        '8RT' => 'E02002592',
        '8RU' => 'E02002592',
        '8RW' => 'E02002592',
        '8RX' => 'E02002592',
        '8RY' => 'E02002592',
        '8RZ' => 'E02002592',
        '8SA' => 'E02002592',
        '8SB' => 'E02002592',
        '8SD' => 'E02002592',
        '8SE' => 'E02002592',
        '8SF' => 'E02002592',
        '8SG' => 'E02002592',
        '8SH' => 'E02002592',
        '8SJ' => 'E02002592',
        '8SL' => 'E02002592',
        '8SN' => 'E02002592',
        '8SP' => 'E02002592',
        '8SQ' => 'E02002592',
        '8SR' => 'E02002592',
        '8SS' => 'E02002592',
        '8ST' => 'E02002592',
        '8SU' => 'E02002592',
        '8SW' => 'E02002592',
        '8SX' => 'E02002592',
        '8SY' => 'E02002592',
        '8SZ' => 'E02002592',
        '8TA' => 'E02002592',
        '8TB' => 'E02002592',
        '8TD' => 'E02002592',
        '8TE' => 'E02002592',
        '8TF' => 'E02002592',
        '8TG' => 'E02002607',
        '8TH' => 'E02002595',
        '8TJ' => 'E02002595',
        '8TL' => 'E02002595',
        '8TN' => 'E02002602',
        '8TP' => 'E02002602',
        '8TQ' => 'E02002595',
        '8TR' => 'E02002592',
        '8TS' => 'E02002595',
        '8TT' => 'E02002592',
        '8TU' => 'E02002600',
        '8TW' => 'E02002602',
        '8TX' => 'E02002600',
        '8TY' => 'E02002592',
        '8TZ' => 'E02002602',
        '8UA' => 'E02002595',
        '8UB' => 'E02002600',
        '8UD' => 'E02002595',
        '8UE' => 'E02002595',
        '8UF' => 'E02002595',
        '8UG' => 'E02002592',
        '8UH' => 'E02002595',
        '8UP' => 'E02002595',
        '8UW' => 'E02002602',
        '8WA' => 'E02002592',
        '8WB' => 'E02002592',
        '8WD' => 'E02002607',
        '8WE' => 'E02002607',
        '8WN' => 'E02002607',
        '8WP' => 'E02002607',
        '8WQ' => 'E02002607',
        '8WR' => 'E02002607',
        '8WS' => 'E02002607',
        '8WT' => 'E02002607',
        '8WU' => 'E02002607',
        '8WW' => 'E02002607',
        '8WX' => 'E02002607',
        '8WY' => 'E02002607',
        '8WZ' => 'E02002592',
        '8XA' => 'E02002592',
        '8XB' => 'E02002592',
        '8XD' => 'E02002592',
        '8XE' => 'E02002592',
        '8XF' => 'E02002592',
        '8XG' => 'E02002592',
        '8XH' => 'E02002592',
        '8XJ' => 'E02002592',
        '8XL' => 'E02002592',
        '8XN' => 'E02002592',
        '8XP' => 'E02002592',
        '8XQ' => 'E02002592',
        '8XS' => 'E02002592',
        '8XT' => 'E02002592',
        '9AA' => 'E02002595',
        '9AB' => 'E02002597',
        '9AD' => 'E02002597',
        '9AE' => 'E02002597',
        '9AF' => 'E02002597',
        '9AG' => 'E02002600',
        '9AH' => 'E02002600',
        '9AJ' => 'E02002600',
        '9AL' => 'E02002597',
        '9AN' => 'E02002597',
        '9AP' => 'E02002597',
        '9AQ' => 'E02002600',
        '9AR' => 'E02002597',
        '9AS' => 'E02002597',
        '9AU' => 'E02002597',
        '9AW' => 'E02002597',
        '9AX' => 'E02002597',
        '9AY' => 'E02002597',
        '9AZ' => 'E02002597',
        '9BA' => 'E02002597',
        '9BB' => 'E02002597',
        '9BD' => 'E02002597',
        '9BE' => 'E02002597',
        '9BG' => 'E02002597',
        '9BH' => 'E02002600',
        '9BJ' => 'E02002600',
        '9BL' => 'E02002597',
        '9BN' => 'E02002597',
        '9BP' => 'E02002597',
        '9BQ' => 'E02002600',
        '9BS' => 'E02002597',
        '9BU' => 'E02002597',
        '9BW' => 'E02002597',
        '9BX' => 'E02002597',
        '9BY' => 'E02002597',
        '9BZ' => 'E02002597',
        '9DA' => 'E02002597',
        '9DB' => 'E02002597',
        '9DD' => 'E02002597',
        '9DE' => 'E02002597',
        '9DL' => 'E02002597',
        '9DN' => 'E02002597',
        '9DP' => 'E02002597',
        '9DQ' => 'E02002597',
        '9DR' => 'E02002597',
        '9DS' => 'E02002597',
        '9DT' => 'E02002597',
        '9DU' => 'E02002597',
        '9DW' => 'E02002597',
        '9DX' => 'E02002597',
        '9DY' => 'E02002597',
        '9DZ' => 'E02002595',
        '9EA' => 'E02002595',
        '9EB' => 'E02002595',
        '9ED' => 'E02002597',
        '9EE' => 'E02002595',
        '9EF' => 'E02002597',
        '9EG' => 'E02002597',
        '9EH' => 'E02002597',
        '9EJ' => 'E02002597',
        '9EL' => 'E02002597',
        '9EN' => 'E02002597',
        '9EP' => 'E02002597',
        '9EQ' => 'E02002597',
        '9ER' => 'E02002597',
        '9ES' => 'E02002597',
        '9ET' => 'E02002597',
        '9EU' => 'E02002597',
        '9EW' => 'E02002597',
        '9EX' => 'E02002597',
        '9EY' => 'E02002597',
        '9FA' => 'E02002607',
        '9FB' => 'E02002607',
        '9FD' => 'E02002595',
        '9FE' => 'E02002595',
        '9FF' => 'E02002595',
        '9FG' => 'E02002607',
        '9FH' => 'E02002595',
        '9FJ' => 'E02002595',
        '9FL' => 'E02002607',
        '9HE' => 'E02002595',
        '9HF' => 'E02002595',
        '9HG' => 'E02002595',
        '9HP' => 'E02002595',
        '9HR' => 'E02002595',
        '9HS' => 'E02002595',
        '9HU' => 'E02002595',
        '9HX' => 'E02002595',
        '9HY' => 'E02002595',
        '9HZ' => 'E02002595',
        '9JA' => 'E02002595',
        '9JB' => 'E02002595',
        '9JD' => 'E02002595',
        '9JE' => 'E02002595',
        '9JF' => 'E02002595',
        '9JG' => 'E02002595',
        '9JH' => 'E02002595',
        '9JJ' => 'E02002595',
        '9JL' => 'E02002595',
        '9JN' => 'E02002595',
        '9JP' => 'E02002595',
        '9JQ' => 'E02002595',
        '9JR' => 'E02002595',
        '9JS' => 'E02002595',
        '9JT' => 'E02002595',
        '9JU' => 'E02002595',
        '9JW' => 'E02002595',
        '9JX' => 'E02002595',
        '9JY' => 'E02002595',
        '9JZ' => 'E02002595',
        '9LA' => 'E02002595',
        '9LF' => 'E02002595',
        '9LG' => 'E02002597',
        '9LH' => 'E02002600',
        '9LJ' => 'E02002597',
        '9LL' => 'E02002597',
        '9LN' => 'E02002597',
        '9LP' => 'E02002597',
        '9LQ' => 'E02002597',
        '9LR' => 'E02002597',
        '9LT' => 'E02002597',
        '9LW' => 'E02002597',
        '9LX' => 'E02002597',
        '9LY' => 'E02002595',
        '9LZ' => 'E02002597',
        '9NA' => 'E02002595',
        '9NB' => 'E02002595',
        '9ND' => 'E02002595',
        '9NE' => 'E02002595',
        '9NF' => 'E02002595',
        '9NG' => 'E02002595',
        '9NH' => 'E02002595',
        '9NJ' => 'E02002595',
        '9NL' => 'E02002595',
        '9NN' => 'E02002595',
        '9NP' => 'E02002595',
        '9NQ' => 'E02002595',
        '9NR' => 'E02002595',
        '9NS' => 'E02002597',
        '9NU' => 'E02002597',
        '9NW' => 'E02002595',
        '9NX' => 'E02002597',
        '9NY' => 'E02002600',
        '9NZ' => 'E02002600',
        '9PA' => 'E02002600',
        '9PB' => 'E02002597',
        '9PD' => 'E02002597',
        '9PE' => 'E02002597',
        '9PF' => 'E02002600',
        '9PG' => 'E02002597',
        '9PH' => 'E02002595',
        '9PJ' => 'E02002600',
        '9PL' => 'E02002600',
        '9PN' => 'E02002595',
        '9PP' => 'E02002595',
        '9PQ' => 'E02002595',
        '9PR' => 'E02002595',
        '9PS' => 'E02002595',
        '9PT' => 'E02002595',
        '9PU' => 'E02002595',
        '9PW' => 'E02002595',
        '9PX' => 'E02002595',
        '9PY' => 'E02002600',
        '9PZ' => 'E02002595',
        '9QA' => 'E02002595',
        '9QB' => 'E02002600',
        '9QD' => 'E02002600',
        '9QE' => 'E02002595',
        '9QG' => 'E02002600',
        '9QH' => 'E02002595',
        '9QP' => 'E02002600',
        '9QQ' => 'E02002600',
        '9QR' => 'E02002600',
        '9QS' => 'E02002600',
        '9QT' => 'E02002595',
        '9QU' => 'E02002595',
        '9QX' => 'E02002595',
        '9QY' => 'E02002595',
        '9QZ' => 'E02002595',
        '9RA' => 'E02002595',
        '9RB' => 'E02002595',
        '9RD' => 'E02002595',
        '9RE' => 'E02002595',
        '9RF' => 'E02002595',
        '9RG' => 'E02002595',
        '9RH' => 'E02002595',
        '9RJ' => 'E02002595',
        '9RL' => 'E02002595',
        '9RN' => 'E02002595',
        '9RP' => 'E02002595',
        '9RQ' => 'E02002595',
        '9RR' => 'E02002600',
        '9RS' => 'E02002600',
        '9RU' => 'E02002600',
        '9RW' => 'E02002595',
        '9SA' => 'E02002595',
        '9SB' => 'E02002595',
        '9SD' => 'E02002595',
        '9SE' => 'E02002595',
        '9SF' => 'E02002595',
        '9SG' => 'E02002595',
        '9SH' => 'E02002595',
        '9SJ' => 'E02002595',
        '9SL' => 'E02002595',
        '9SN' => 'E02002595',
        '9SP' => 'E02002595',
        '9SQ' => 'E02002595',
        '9SR' => 'E02002595',
        '9SS' => 'E02002595',
        '9ST' => 'E02002595',
        '9SU' => 'E02002595',
        '9SW' => 'E02002595',
        '9SX' => 'E02002595',
        '9SY' => 'E02002595',
        '9SZ' => 'E02002595',
        '9TA' => 'E02002595',
        '9TB' => 'E02002595',
        '9TD' => 'E02002595',
        '9TE' => 'E02002595',
        '9TF' => 'E02002595',
        '9TG' => 'E02002595',
        '9TH' => 'E02002595',
        '9TJ' => 'E02002595',
        '9TL' => 'E02002595',
        '9TN' => 'E02002595',
        '9TQ' => 'E02002595',
        '9TU' => 'E02002595',
        '9TW' => 'E02002595',
        '9TX' => 'E02002595',
        '9TY' => 'E02002595',
        '9TZ' => 'E02002595',
        '9UA' => 'E02002595',
        '9UB' => 'E02002595',
        '9UD' => 'E02002595',
        '9UE' => 'E02002595',
        '9UF' => 'E02002595',
        '9UG' => 'E02002595',
        '9UH' => 'E02002595',
        '9UJ' => 'E02002595',
        '9UL' => 'E02002595',
        '9UQ' => 'E02002595',
        '9UY' => 'E02002595',
        '9UZ' => 'E02002595',
        '9WU' => 'E02002607',
        '9WW' => 'E02002607',
        '9WX' => 'E02002595',
        '9WY' => 'E02002607',
        '9WZ' => 'E02002607',
        '9YA' => 'E02002607',
        '9YB' => 'E02002607',
        '9YD' => 'E02002607',
        '9YZ' => 'E02002607',
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
