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
final class TS24
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02002484',
        '0AB' => 'E02002484',
        '0AD' => 'E02002484',
        '0AE' => 'E02002484',
        '0AF' => 'E02002484',
        '0AG' => 'E02002484',
        '0AH' => 'E02002484',
        '0AJ' => 'E02002484',
        '0AL' => 'E02002484',
        '0AN' => 'E02002484',
        '0AP' => 'E02002484',
        '0AQ' => 'E02002484',
        '0AR' => 'E02002484',
        '0AS' => 'E02002484',
        '0AT' => 'E02002484',
        '0AU' => 'E02002484',
        '0AW' => 'E02002484',
        '0AX' => 'E02002484',
        '0AY' => 'E02002484',
        '0AZ' => 'E02002484',
        '0BA' => 'E02002484',
        '0BB' => 'E02002484',
        '0BD' => 'E02002484',
        '0BE' => 'E02002484',
        '0BG' => 'E02002484',
        '0BH' => 'E02002484',
        '0BJ' => 'E02002484',
        '0BL' => 'E02002484',
        '0BN' => 'E02002484',
        '0BP' => 'E02002484',
        '0BQ' => 'E02002484',
        '0BS' => 'E02002484',
        '0BT' => 'E02002484',
        '0BU' => 'E02002484',
        '0BW' => 'E02002484',
        '0BX' => 'E02002484',
        '0BY' => 'E02002489',
        '0BZ' => 'E02002484',
        '0DA' => 'E02002484',
        '0DB' => 'E02002484',
        '0DF' => 'E02002484',
        '0DG' => 'E02002484',
        '0DH' => 'E02002484',
        '0DJ' => 'E02002484',
        '0DL' => 'E02002484',
        '0DN' => 'E02002484',
        '0DP' => 'E02002484',
        '0DQ' => 'E02002484',
        '0DR' => 'E02002484',
        '0DS' => 'E02002484',
        '0DT' => 'E02002484',
        '0DU' => 'E02002484',
        '0DW' => 'E02002484',
        '0DX' => 'E02002484',
        '0DY' => 'E02002484',
        '0DZ' => 'E02002484',
        '0EA' => 'E02002484',
        '0EB' => 'E02002484',
        '0ED' => 'E02002484',
        '0EE' => 'E02002484',
        '0EF' => 'E02002484',
        '0EG' => 'E02002484',
        '0EH' => 'E02002484',
        '0EJ' => 'E02002484',
        '0EL' => 'E02002484',
        '0EN' => 'E02002484',
        '0EP' => 'E02002484',
        '0EQ' => 'E02002484',
        '0ER' => 'E02002484',
        '0ES' => 'E02002484',
        '0ET' => 'E02002484',
        '0EU' => 'E02002484',
        '0EW' => 'E02002484',
        '0EX' => 'E02002484',
        '0EY' => 'E02002484',
        '0EZ' => 'E02002484',
        '0FA' => 'E02002489',
        '0FB' => 'E02002487',
        '0FD' => 'E02002484',
        '0GA' => 'E02002484',
        '0GB' => 'E02002484',
        '0GD' => 'E02002484',
        '0GE' => 'E02002484',
        '0GF' => 'E02002484',
        '0GG' => 'E02002484',
        '0GH' => 'E02002484',
        '0GL' => 'E02002484',
        '0HA' => 'E02002484',
        '0HB' => 'E02002484',
        '0HD' => 'E02002484',
        '0HE' => 'E02002484',
        '0HF' => 'E02002484',
        '0HG' => 'E02002484',
        '0HH' => 'E02002484',
        '0HJ' => 'E02002484',
        '0HL' => 'E02002484',
        '0HN' => 'E02002484',
        '0HP' => 'E02002484',
        '0HQ' => 'E02002484',
        '0HR' => 'E02002484',
        '0HS' => 'E02002484',
        '0HT' => 'E02002484',
        '0HU' => 'E02002484',
        '0HW' => 'E02002484',
        '0HX' => 'E02002484',
        '0HY' => 'E02002484',
        '0HZ' => 'E02002484',
        '0JA' => 'E02002484',
        '0JB' => 'E02002484',
        '0JD' => 'E02002484',
        '0JE' => 'E02002484',
        '0JF' => 'E02002484',
        '0JG' => 'E02002484',
        '0JH' => 'E02002484',
        '0JJ' => 'E02002484',
        '0JL' => 'E02002484',
        '0JN' => 'E02002484',
        '0JP' => 'E02002484',
        '0JQ' => 'E02002484',
        '0JR' => 'E02002484',
        '0JS' => 'E02002484',
        '0JT' => 'E02002484',
        '0JU' => 'E02002484',
        '0JW' => 'E02002484',
        '0JX' => 'E02002484',
        '0JY' => 'E02002484',
        '0JZ' => 'E02002484',
        '0LA' => 'E02002484',
        '0LB' => 'E02002484',
        '0LD' => 'E02002484',
        '0LE' => 'E02002484',
        '0LF' => 'E02002484',
        '0LG' => 'E02002484',
        '0LH' => 'E02002484',
        '0LJ' => 'E02002484',
        '0LL' => 'E02002484',
        '0LN' => 'E02002484',
        '0LP' => 'E02002484',
        '0LQ' => 'E02002484',
        '0LR' => 'E02002484',
        '0LS' => 'E02002484',
        '0LT' => 'E02002484',
        '0LU' => 'E02002484',
        '0LW' => 'E02002484',
        '0LX' => 'E02002484',
        '0LY' => 'E02002484',
        '0LZ' => 'E02002484',
        '0NA' => 'E02002484',
        '0NB' => 'E02002484',
        '0ND' => 'E02002484',
        '0NE' => 'E02002484',
        '0NF' => 'E02002484',
        '0NG' => 'E02002484',
        '0NH' => 'E02002484',
        '0NJ' => 'E02002484',
        '0NL' => 'E02002484',
        '0NN' => 'E02002484',
        '0NP' => 'E02002484',
        '0NQ' => 'E02002484',
        '0NR' => 'E02002484',
        '0NS' => 'E02002484',
        '0NT' => 'E02002484',
        '0NU' => 'E02002484',
        '0NW' => 'E02002484',
        '0NX' => 'E02002484',
        '0NY' => 'E02002484',
        '0NZ' => 'E02002484',
        '0PA' => 'E02002484',
        '0PB' => 'E02002484',
        '0PD' => 'E02002484',
        '0PE' => 'E02002484',
        '0PF' => 'E02002484',
        '0PG' => 'E02002484',
        '0PH' => 'E02002484',
        '0PJ' => 'E02002484',
        '0PL' => 'E02002484',
        '0PN' => 'E02002484',
        '0PP' => 'E02002484',
        '0PQ' => 'E02002484',
        '0PR' => 'E02002484',
        '0PS' => 'E02002484',
        '0PT' => 'E02002484',
        '0PU' => 'E02002484',
        '0PW' => 'E02002484',
        '0PX' => 'E02002484',
        '0PY' => 'E02002484',
        '0PZ' => 'E02002484',
        '0QA' => 'E02002484',
        '0QB' => 'E02002484',
        '0QD' => 'E02002484',
        '0QE' => 'E02002484',
        '0QF' => 'E02002484',
        '0QG' => 'E02002484',
        '0QH' => 'E02002484',
        '0QJ' => 'E02002484',
        '0QL' => 'E02002484',
        '0QN' => 'E02002484',
        '0QP' => 'E02002484',
        '0QQ' => 'E02002484',
        '0QR' => 'E02002484',
        '0QS' => 'E02002484',
        '0QT' => 'E02002484',
        '0QU' => 'E02002484',
        '0QW' => 'E02002484',
        '0QX' => 'E02002484',
        '0QY' => 'E02002484',
        '0QZ' => 'E02002484',
        '0RA' => 'E02002484',
        '0RB' => 'E02002484',
        '0RD' => 'E02002484',
        '0RE' => 'E02002484',
        '0RF' => 'E02002484',
        '0RG' => 'E02002484',
        '0RH' => 'E02002484',
        '0RJ' => 'E02002484',
        '0RL' => 'E02002484',
        '0RN' => 'E02002484',
        '0RP' => 'E02002484',
        '0RQ' => 'E02002484',
        '0RR' => 'E02002484',
        '0RS' => 'E02002484',
        '0RT' => 'E02002484',
        '0RU' => 'E02002487',
        '0RW' => 'E02002484',
        '0RX' => 'E02002487',
        '0RY' => 'E02002484',
        '0RZ' => 'E02002487',
        '0SA' => 'E02002487',
        '0SB' => 'E02002487',
        '0SD' => 'E02002487',
        '0SE' => 'E02002487',
        '0SF' => 'E02002487',
        '0SG' => 'E02002487',
        '0SH' => 'E02002489',
        '0SJ' => 'E02002489',
        '0SL' => 'E02002489',
        '0SN' => 'E02002484',
        '0SP' => 'E02002487',
        '0SQ' => 'E02002487',
        '0SR' => 'E02002484',
        '0SS' => 'E02002484',
        '0ST' => 'E02002485',
        '0SU' => 'E02002484',
        '0SW' => 'E02002487',
        '0SX' => 'E02002484',
        '0SY' => 'E02002484',
        '0SZ' => 'E02002484',
        '0TA' => 'E02002484',
        '0TB' => 'E02002484',
        '0TD' => 'E02002484',
        '0TE' => 'E02002484',
        '0TF' => 'E02002484',
        '0TG' => 'E02002484',
        '0TH' => 'E02002484',
        '0TJ' => 'E02002484',
        '0TL' => 'E02002484',
        '0TN' => 'E02002484',
        '0TP' => 'E02002484',
        '0TQ' => 'E02002484',
        '0TR' => 'E02002484',
        '0TS' => 'E02002484',
        '0TT' => 'E02002484',
        '0TU' => 'E02002484',
        '0TW' => 'E02002484',
        '0TX' => 'E02002484',
        '0TY' => 'E02002484',
        '0TZ' => 'E02002484',
        '0UA' => 'E02002484',
        '0UB' => 'E02002484',
        '0UD' => 'E02002484',
        '0UE' => 'E02002484',
        '0UF' => 'E02002484',
        '0UG' => 'E02002487',
        '0UH' => 'E02002487',
        '0UJ' => 'E02002487',
        '0UL' => 'E02002484',
        '0UN' => 'E02002484',
        '0UQ' => 'E02002487',
        '0UR' => 'E02002484',
        '0UT' => 'E02002484',
        '0UX' => 'E02002487',
        '0UY' => 'E02002487',
        '0UZ' => 'E02002484',
        '0WA' => 'E02002487',
        '0WB' => 'E02002487',
        '0WE' => 'E02002487',
        '0WF' => 'E02002487',
        '0WG' => 'E02002487',
        '0WH' => 'E02002487',
        '0WJ' => 'E02002487',
        '0WL' => 'E02002487',
        '0WN' => 'E02002487',
        '0WP' => 'E02002489',
        '0WU' => 'E02002489',
        '0WW' => 'E02002489',
        '0WX' => 'E02002489',
        '0WY' => 'E02002489',
        '0WZ' => 'E02002484',
        '0XA' => 'E02002487',
        '0XB' => 'E02002487',
        '0XD' => 'E02002487',
        '0XE' => 'E02002487',
        '0XF' => 'E02002487',
        '0XG' => 'E02002487',
        '0XH' => 'E02002489',
        '0XJ' => 'E02002489',
        '0XL' => 'E02002489',
        '0XN' => 'E02002487',
        '0XP' => 'E02002487',
        '0XQ' => 'E02002487',
        '0XR' => 'E02002487',
        '0XS' => 'E02002487',
        '0XT' => 'E02002487',
        '0XU' => 'E02002487',
        '0XW' => 'E02002489',
        '0XX' => 'E02002487',
        '0XY' => 'E02002487',
        '0XZ' => 'E02002487',
        '0YA' => 'E02002487',
        '0YB' => 'E02002487',
        '0YD' => 'E02002487',
        '0YE' => 'E02002484',
        '0YF' => 'E02002487',
        '0YG' => 'E02002487',
        '0YH' => 'E02002489',
        '0YJ' => 'E02002484',
        '0YL' => 'E02002484',
        '0YN' => 'E02002484',
        '0YP' => 'E02002484',
        '0YQ' => 'E02002487',
        '0YR' => 'E02002484',
        '0YS' => 'E02002489',
        '0YT' => 'E02002484',
        '0YU' => 'E02002484',
        '0YW' => 'E02002487',
        '0YX' => 'E02002484',
        '0YY' => 'E02002489',
        '0YZ' => 'E02002489',
        '0ZD' => 'E02002487',
        '0ZY' => 'E02002489',
        '4AA' => 'E02002489',
        '4AB' => 'E02002489',
        '4AD' => 'E02002489',
        '4AE' => 'E02002489',
        '4AF' => 'E02002489',
        '4AG' => 'E02002489',
        '4AH' => 'E02002489',
        '4AJ' => 'E02002489',
        '4AL' => 'E02002489',
        '4AN' => 'E02002489',
        '4AP' => 'E02002489',
        '4AQ' => 'E02002489',
        '4AR' => 'E02002489',
        '4AS' => 'E02002489',
        '4AT' => 'E02002489',
        '4AU' => 'E02002489',
        '4AW' => 'E02002489',
        '4AX' => 'E02002489',
        '4AY' => 'E02002489',
        '4AZ' => 'E02002489',
        '4BA' => 'E02002489',
        '4BB' => 'E02002489',
        '4BD' => 'E02002489',
        '4BE' => 'E02002489',
        '4BF' => 'E02002489',
        '4BG' => 'E02002489',
        '4BH' => 'E02002489',
        '4BJ' => 'E02002489',
        '4BL' => 'E02002489',
        '4BN' => 'E02002489',
        '4BP' => 'E02002489',
        '4BQ' => 'E02002489',
        '4BR' => 'E02002489',
        '4BS' => 'E02002489',
        '4BT' => 'E02002489',
        '4BU' => 'E02002489',
        '4BW' => 'E02002489',
        '4BX' => 'E02002489',
        '4BY' => 'E02002489',
        '4BZ' => 'E02002489',
        '4DA' => 'E02002489',
        '4DB' => 'E02002489',
        '4DD' => 'E02002489',
        '4DE' => 'E02002489',
        '4DF' => 'E02002489',
        '4DG' => 'E02002489',
        '4DH' => 'E02002489',
        '4DJ' => 'E02002489',
        '4DL' => 'E02002489',
        '4DN' => 'E02002489',
        '4DP' => 'E02002489',
        '4DQ' => 'E02002489',
        '4DR' => 'E02002489',
        '4DS' => 'E02002489',
        '4DT' => 'E02002489',
        '4DU' => 'E02002489',
        '4DW' => 'E02002489',
        '4DZ' => 'E02002489',
        '4EA' => 'E02002489',
        '4EB' => 'E02002489',
        '4ED' => 'E02002489',
        '4EE' => 'E02002489',
        '4EF' => 'E02002489',
        '4EG' => 'E02002489',
        '4EH' => 'E02002489',
        '4EJ' => 'E02002489',
        '4EL' => 'E02002489',
        '4EN' => 'E02002489',
        '4EP' => 'E02002489',
        '4EQ' => 'E02002489',
        '4ER' => 'E02002489',
        '4ES' => 'E02002489',
        '4ET' => 'E02002489',
        '4EU' => 'E02002489',
        '4EX' => 'E02002489',
        '4EY' => 'E02002489',
        '4EZ' => 'E02002489',
        '4FA' => 'E02002489',
        '4FB' => 'E02002489',
        '4FD' => 'E02002489',
        '4FE' => 'E02002489',
        '4FF' => 'E02002489',
        '4FG' => 'E02002489',
        '4FH' => 'E02002489',
        '4FJ' => 'E02002489',
        '4FL' => 'E02002489',
        '4FN' => 'E02002489',
        '4FP' => 'E02002489',
        '4FQ' => 'E02002489',
        '4FR' => 'E02002489',
        '4FS' => 'E02002489',
        '4FT' => 'E02002489',
        '4FU' => 'E02002489',
        '4FW' => 'E02002489',
        '4FX' => 'E02002489',
        '4FY' => 'E02002489',
        '4FZ' => 'E02002489',
        '4GB' => 'E02002489',
        '4GD' => 'E02002489',
        '4GE' => 'E02002489',
        '4GF' => 'E02002489',
        '4GG' => 'E02002489',
        '4GH' => 'E02002489',
        '4SA' => 'E02002484',
        '4SB' => 'E02002484',
        '4SD' => 'E02002487',
        '4SE' => 'E02002484',
        '4SF' => 'E02002484',
        '4SG' => 'E02002484',
        '4SH' => 'E02002484',
        '4SJ' => 'E02002484',
        '4SL' => 'E02002484',
        '4SN' => 'E02002484',
        '4SP' => 'E02002484',
        '4SQ' => 'E02002484',
        '4SR' => 'E02002484',
        '4SS' => 'E02002484',
        '4ST' => 'E02002484',
        '4SU' => 'E02002484',
        '4SW' => 'E02002484',
        '4WZ' => 'E02002489',
        '4ZZ' => 'E02002489',
        '7AA' => 'E02002489',
        '7AB' => 'E02002489',
        '7AD' => 'E02002489',
        '7AE' => 'E02002489',
        '7AF' => 'E02002489',
        '7AG' => 'E02002489',
        '7AH' => 'E02002487',
        '7AJ' => 'E02002489',
        '7AL' => 'E02002489',
        '7AN' => 'E02002489',
        '7AP' => 'E02002489',
        '7AQ' => 'E02002489',
        '7AR' => 'E02002489',
        '7AS' => 'E02002489',
        '7AT' => 'E02002489',
        '7AU' => 'E02002489',
        '7AW' => 'E02002489',
        '7AX' => 'E02002489',
        '7AY' => 'E02002489',
        '7AZ' => 'E02002489',
        '7BA' => 'E02002489',
        '7BB' => 'E02002489',
        '7BD' => 'E02002489',
        '7BE' => 'E02002489',
        '7BG' => 'E02002489',
        '7BH' => 'E02002489',
        '7BJ' => 'E02002489',
        '7BL' => 'E02002489',
        '7BN' => 'E02002489',
        '7BP' => 'E02002489',
        '7BQ' => 'E02002489',
        '7BS' => 'E02002489',
        '7BT' => 'E02002489',
        '7BU' => 'E02002489',
        '7BW' => 'E02002489',
        '7BX' => 'E02002489',
        '7BY' => 'E02002489',
        '7DA' => 'E02002489',
        '7DB' => 'E02002489',
        '7DD' => 'E02002489',
        '7DE' => 'E02002489',
        '7DF' => 'E02002489',
        '7DG' => 'E02002489',
        '7DH' => 'E02002489',
        '7DJ' => 'E02002489',
        '7DL' => 'E02002489',
        '7DN' => 'E02002489',
        '7DP' => 'E02002489',
        '7DQ' => 'E02002489',
        '7DR' => 'E02002489',
        '7DS' => 'E02002489',
        '7DT' => 'E02002489',
        '7DU' => 'E02002487',
        '7DW' => 'E02002489',
        '7DX' => 'E02002489',
        '7DY' => 'E02002489',
        '7DZ' => 'E02002489',
        '7EA' => 'E02002489',
        '7EB' => 'E02002489',
        '7ED' => 'E02002489',
        '7EE' => 'E02002489',
        '7EF' => 'E02002489',
        '7EG' => 'E02002489',
        '7EH' => 'E02002489',
        '7EJ' => 'E02002487',
        '7EL' => 'E02002489',
        '7EN' => 'E02002489',
        '7EP' => 'E02002487',
        '7EQ' => 'E02002489',
        '7ER' => 'E02002489',
        '7ET' => 'E02002489',
        '7EU' => 'E02002489',
        '7EW' => 'E02002489',
        '7EX' => 'E02002489',
        '7EY' => 'E02002489',
        '7EZ' => 'E02002489',
        '7GQ' => 'E02002489',
        '7HA' => 'E02002489',
        '7HD' => 'E02002489',
        '7HE' => 'E02002489',
        '7HF' => 'E02002489',
        '7HG' => 'E02002489',
        '7HH' => 'E02002489',
        '7HJ' => 'E02002489',
        '7HL' => 'E02002489',
        '7HN' => 'E02002489',
        '7HP' => 'E02002489',
        '7HQ' => 'E02002489',
        '7HR' => 'E02002489',
        '7HT' => 'E02002489',
        '7HU' => 'E02002489',
        '7HW' => 'E02002489',
        '7HX' => 'E02002489',
        '7HY' => 'E02002489',
        '7HZ' => 'E02002489',
        '7JA' => 'E02002489',
        '7JB' => 'E02002489',
        '7JD' => 'E02002489',
        '7JE' => 'E02002489',
        '7JF' => 'E02002489',
        '7JG' => 'E02002489',
        '7JH' => 'E02002489',
        '7JJ' => 'E02002489',
        '7JL' => 'E02002489',
        '7JN' => 'E02002489',
        '7JP' => 'E02002489',
        '7JQ' => 'E02002489',
        '7JR' => 'E02002489',
        '7JS' => 'E02002489',
        '7JT' => 'E02002489',
        '7JU' => 'E02002489',
        '7JW' => 'E02002489',
        '7JX' => 'E02002489',
        '7JY' => 'E02002489',
        '7JZ' => 'E02002489',
        '7LA' => 'E02002489',
        '7LB' => 'E02002489',
        '7LD' => 'E02002489',
        '7LE' => 'E02002489',
        '7LF' => 'E02002489',
        '7LG' => 'E02002489',
        '7LH' => 'E02002489',
        '7LJ' => 'E02002489',
        '7LL' => 'E02002489',
        '7LN' => 'E02002489',
        '7LP' => 'E02002489',
        '7LQ' => 'E02002489',
        '7LR' => 'E02002489',
        '7LS' => 'E02002489',
        '7LT' => 'E02002489',
        '7LU' => 'E02002489',
        '7LW' => 'E02002489',
        '7LX' => 'E02002489',
        '7LY' => 'E02002489',
        '7LZ' => 'E02002489',
        '7NA' => 'E02002489',
        '7NB' => 'E02002489',
        '7ND' => 'E02002489',
        '7NE' => 'E02002489',
        '7NF' => 'E02002489',
        '7NG' => 'E02002489',
        '7NH' => 'E02002489',
        '7NJ' => 'E02002489',
        '7NL' => 'E02002489',
        '7NN' => 'E02002489',
        '7NP' => 'E02002489',
        '7NQ' => 'E02002489',
        '7NR' => 'E02002489',
        '7NS' => 'E02002489',
        '7NT' => 'E02002489',
        '7NU' => 'E02002489',
        '7NW' => 'E02002489',
        '7NX' => 'E02002489',
        '7NY' => 'E02002489',
        '7PA' => 'E02002489',
        '7PD' => 'E02002489',
        '7PE' => 'E02002489',
        '7PF' => 'E02002489',
        '7PH' => 'E02002489',
        '7PJ' => 'E02002489',
        '7PL' => 'E02002489',
        '7PN' => 'E02002489',
        '7PP' => 'E02002489',
        '7PQ' => 'E02002489',
        '7PR' => 'E02002489',
        '7PS' => 'E02002489',
        '7PT' => 'E02002489',
        '7PU' => 'E02002489',
        '7PW' => 'E02002489',
        '7PX' => 'E02002489',
        '7PY' => 'E02002489',
        '7PZ' => 'E02002489',
        '7QA' => 'E02002489',
        '7QB' => 'E02002489',
        '7QD' => 'E02002489',
        '7QE' => 'E02002489',
        '7QF' => 'E02002489',
        '7QG' => 'E02002489',
        '7QH' => 'E02002489',
        '7QJ' => 'E02002489',
        '7QL' => 'E02002489',
        '7QN' => 'E02002489',
        '7QP' => 'E02002489',
        '7QQ' => 'E02002489',
        '7QR' => 'E02002489',
        '7QS' => 'E02002489',
        '7QT' => 'E02002489',
        '7QU' => 'E02002490',
        '7QW' => 'E02002489',
        '7QX' => 'E02002489',
        '7QY' => 'E02002489',
        '7QZ' => 'E02002489',
        '7RA' => 'E02002489',
        '7RB' => 'E02002489',
        '7RD' => 'E02002489',
        '7RE' => 'E02002489',
        '7RF' => 'E02002489',
        '7RG' => 'E02002489',
        '7RH' => 'E02002489',
        '7RJ' => 'E02002489',
        '7RL' => 'E02002489',
        '7RN' => 'E02002489',
        '7RP' => 'E02002489',
        '7RQ' => 'E02002489',
        '7RR' => 'E02002489',
        '7RS' => 'E02002489',
        '7RT' => 'E02002489',
        '7RU' => 'E02002489',
        '7RW' => 'E02002489',
        '7RX' => 'E02002489',
        '7RY' => 'E02002489',
        '7RZ' => 'E02002489',
        '7SA' => 'E02002489',
        '7SB' => 'E02002489',
        '7SD' => 'E02002487',
        '7SE' => 'E02002489',
        '7SF' => 'E02002489',
        '7SG' => 'E02002489',
        '7SH' => 'E02002489',
        '7SJ' => 'E02002489',
        '7SQ' => 'E02002489',
        '7WT' => 'E02002489',
        '7WU' => 'E02002489',
        '7WW' => 'E02002489',
        '7WX' => 'E02002489',
        '7WY' => 'E02002489',
        '7WZ' => 'E02002489',
        '7XQ' => 'E02002489',
        '7XR' => 'E02002489',
        '7XS' => 'E02002489',
        '7XT' => 'E02002489',
        '7XU' => 'E02002489',
        '7XX' => 'E02002489',
        '7XY' => 'E02002489',
        '7XZ' => 'E02002489',
        '7YA' => 'E02002489',
        '7YB' => 'E02002489',
        '7YD' => 'E02002489',
        '7YE' => 'E02002489',
        '7YF' => 'E02002489',
        '7YG' => 'E02002489',
        '7YH' => 'E02002489',
        '7YJ' => 'E02002489',
        '7YL' => 'E02002489',
        '7YN' => 'E02002489',
        '7YP' => 'E02002489',
        '7YQ' => 'E02002489',
        '7YR' => 'E02002489',
        '7YS' => 'E02002489',
        '7YT' => 'E02002489',
        '7YU' => 'E02002489',
        '7YY' => 'E02002489',
        '7YZ' => 'E02002489',
        '8AA' => 'E02002487',
        '8AB' => 'E02002489',
        '8AD' => 'E02002489',
        '8AE' => 'E02002487',
        '8AF' => 'E02002487',
        '8AG' => 'E02002487',
        '8AH' => 'E02002487',
        '8AJ' => 'E02002487',
        '8AL' => 'E02002487',
        '8AN' => 'E02002487',
        '8AP' => 'E02002487',
        '8AQ' => 'E02002487',
        '8AR' => 'E02002487',
        '8AS' => 'E02002487',
        '8AT' => 'E02002487',
        '8AU' => 'E02002487',
        '8AW' => 'E02002487',
        '8AX' => 'E02002487',
        '8AY' => 'E02002487',
        '8AZ' => 'E02002485',
        '8BA' => 'E02002485',
        '8BB' => 'E02002487',
        '8BD' => 'E02002487',
        '8BE' => 'E02002487',
        '8BF' => 'E02002485',
        '8BG' => 'E02002487',
        '8BH' => 'E02002487',
        '8BJ' => 'E02002487',
        '8BL' => 'E02002487',
        '8BN' => 'E02002487',
        '8BP' => 'E02002485',
        '8BQ' => 'E02002487',
        '8BS' => 'E02002487',
        '8BT' => 'E02002487',
        '8BU' => 'E02002489',
        '8BW' => 'E02002487',
        '8BX' => 'E02002487',
        '8BY' => 'E02002487',
        '8BZ' => 'E02002487',
        '8DA' => 'E02002487',
        '8DB' => 'E02002487',
        '8DD' => 'E02002487',
        '8DE' => 'E02002487',
        '8DF' => 'E02002487',
        '8DG' => 'E02002487',
        '8DH' => 'E02002487',
        '8DJ' => 'E02002487',
        '8DL' => 'E02002487',
        '8DN' => 'E02002487',
        '8DP' => 'E02002487',
        '8DQ' => 'E02002487',
        '8DR' => 'E02002485',
        '8DS' => 'E02002487',
        '8DT' => 'E02002487',
        '8DU' => 'E02002487',
        '8DW' => 'E02002487',
        '8DX' => 'E02002485',
        '8DY' => 'E02002485',
        '8DZ' => 'E02002487',
        '8EA' => 'E02002485',
        '8EB' => 'E02002485',
        '8ED' => 'E02002485',
        '8EE' => 'E02002485',
        '8EF' => 'E02002487',
        '8EG' => 'E02002485',
        '8EH' => 'E02002485',
        '8EJ' => 'E02002485',
        '8EL' => 'E02002485',
        '8EN' => 'E02002485',
        '8EP' => 'E02002485',
        '8EQ' => 'E02002485',
        '8ER' => 'E02002485',
        '8ES' => 'E02002485',
        '8ET' => 'E02002485',
        '8EU' => 'E02002485',
        '8EW' => 'E02002485',
        '8EX' => 'E02002485',
        '8EY' => 'E02002485',
        '8EZ' => 'E02002487',
        '8FD' => 'E02002485',
        '8FE' => 'E02002485',
        '8FF' => 'E02002485',
        '8FG' => 'E02002485',
        '8FH' => 'E02002485',
        '8FJ' => 'E02002485',
        '8FL' => 'E02002485',
        '8FN' => 'E02002485',
        '8FP' => 'E02002485',
        '8GX' => 'E02002485',
        '8GY' => 'E02002485',
        '8GZ' => 'E02002485',
        '8HA' => 'E02002487',
        '8HB' => 'E02002487',
        '8HD' => 'E02002487',
        '8HE' => 'E02002485',
        '8HF' => 'E02002485',
        '8HG' => 'E02002485',
        '8HH' => 'E02002485',
        '8HJ' => 'E02002485',
        '8HL' => 'E02002485',
        '8HN' => 'E02002485',
        '8HP' => 'E02002485',
        '8HQ' => 'E02002485',
        '8HR' => 'E02002485',
        '8HS' => 'E02002485',
        '8HT' => 'E02002485',
        '8HU' => 'E02002485',
        '8HW' => 'E02002485',
        '8HX' => 'E02002485',
        '8HY' => 'E02002485',
        '8HZ' => 'E02002485',
        '8JA' => 'E02002485',
        '8JB' => 'E02002485',
        '8JD' => 'E02002485',
        '8JE' => 'E02002485',
        '8JF' => 'E02002485',
        '8JG' => 'E02002485',
        '8JH' => 'E02002485',
        '8JJ' => 'E02002485',
        '8JL' => 'E02002485',
        '8JN' => 'E02002485',
        '8JP' => 'E02002485',
        '8JQ' => 'E02002485',
        '8JR' => 'E02002485',
        '8JS' => 'E02002485',
        '8JT' => 'E02002485',
        '8JU' => 'E02002485',
        '8JW' => 'E02002485',
        '8JX' => 'E02002485',
        '8JY' => 'E02002484',
        '8JZ' => 'E02002484',
        '8LA' => 'E02002485',
        '8LB' => 'E02002485',
        '8LD' => 'E02002485',
        '8LE' => 'E02002485',
        '8LF' => 'E02002485',
        '8LG' => 'E02002485',
        '8LH' => 'E02002485',
        '8LJ' => 'E02002485',
        '8LL' => 'E02002485',
        '8LN' => 'E02002485',
        '8LP' => 'E02002485',
        '8LQ' => 'E02002485',
        '8LR' => 'E02002485',
        '8LS' => 'E02002485',
        '8LT' => 'E02002485',
        '8LU' => 'E02002485',
        '8LW' => 'E02002485',
        '8LX' => 'E02002485',
        '8LY' => 'E02002484',
        '8LZ' => 'E02002485',
        '8NA' => 'E02002485',
        '8NB' => 'E02002485',
        '8ND' => 'E02002485',
        '8NE' => 'E02002485',
        '8NF' => 'E02002485',
        '8NG' => 'E02002485',
        '8NH' => 'E02002485',
        '8NJ' => 'E02002485',
        '8NL' => 'E02002485',
        '8NN' => 'E02002485',
        '8NP' => 'E02002485',
        '8NQ' => 'E02002485',
        '8NR' => 'E02002485',
        '8NS' => 'E02002485',
        '8NT' => 'E02002485',
        '8NU' => 'E02002485',
        '8NW' => 'E02002485',
        '8NX' => 'E02002485',
        '8NY' => 'E02002484',
        '8PA' => 'E02002485',
        '8PB' => 'E02002485',
        '8PD' => 'E02002485',
        '8PE' => 'E02002485',
        '8PF' => 'E02002485',
        '8PG' => 'E02002485',
        '8PH' => 'E02002485',
        '8PJ' => 'E02002485',
        '8PL' => 'E02002485',
        '8PN' => 'E02002485',
        '8PP' => 'E02002485',
        '8PQ' => 'E02002485',
        '8PR' => 'E02002485',
        '8PS' => 'E02002485',
        '8PT' => 'E02002485',
        '8PU' => 'E02002485',
        '8PW' => 'E02002485',
        '8PX' => 'E02002485',
        '8PY' => 'E02002485',
        '8PZ' => 'E02002485',
        '8QA' => 'E02002485',
        '8QB' => 'E02002485',
        '8QD' => 'E02002485',
        '8QE' => 'E02002485',
        '8QF' => 'E02002485',
        '8QG' => 'E02002485',
        '8QH' => 'E02002485',
        '8QJ' => 'E02002485',
        '8QL' => 'E02002485',
        '8QN' => 'E02002485',
        '8QP' => 'E02002485',
        '8QQ' => 'E02002485',
        '8QR' => 'E02002485',
        '8QS' => 'E02002485',
        '8QT' => 'E02002485',
        '8QU' => 'E02002485',
        '8QW' => 'E02002485',
        '8QX' => 'E02002485',
        '8QY' => 'E02002485',
        '8QZ' => 'E02002485',
        '8RA' => 'E02002484',
        '8RB' => 'E02002484',
        '8RD' => 'E02002484',
        '8RE' => 'E02002484',
        '8RF' => 'E02002484',
        '8RG' => 'E02002485',
        '8RH' => 'E02002485',
        '8RZ' => 'E02002487',
        '8SA' => 'E02002487',
        '8WB' => 'E02002489',
        '8WX' => 'E02002489',
        '8WY' => 'E02002489',
        '8WZ' => 'E02002484',
        '8YF' => 'E02002489',
        '8YG' => 'E02002489',
        '8YH' => 'E02002485',
        '8YJ' => 'E02002485',
        '8YL' => 'E02002485',
        '8YN' => 'E02002485',
        '8YP' => 'E02002485',
        '8YR' => 'E02002485',
        '8YS' => 'E02002485',
        '8YW' => 'E02002489',
        '8ZR' => 'E02002489',
        '9AA' => 'E02002484',
        '9AB' => 'E02002484',
        '9AD' => 'E02002484',
        '9AE' => 'E02002484',
        '9AF' => 'E02002484',
        '9AG' => 'E02002485',
        '9AH' => 'E02002484',
        '9AJ' => 'E02002484',
        '9AL' => 'E02002484',
        '9AN' => 'E02002484',
        '9AP' => 'E02002484',
        '9AQ' => 'E02002484',
        '9AR' => 'E02002484',
        '9AS' => 'E02002484',
        '9AT' => 'E02002484',
        '9AU' => 'E02002484',
        '9AW' => 'E02002484',
        '9AX' => 'E02002484',
        '9AY' => 'E02002484',
        '9AZ' => 'E02002483',
        '9BA' => 'E02002484',
        '9BB' => 'E02002484',
        '9BD' => 'E02002484',
        '9BE' => 'E02002484',
        '9BG' => 'E02002484',
        '9BH' => 'E02002484',
        '9BJ' => 'E02002484',
        '9BL' => 'E02002484',
        '9BN' => 'E02002484',
        '9BP' => 'E02002484',
        '9BQ' => 'E02002484',
        '9BS' => 'E02002484',
        '9BT' => 'E02002484',
        '9BU' => 'E02002484',
        '9BW' => 'E02002484',
        '9BX' => 'E02002484',
        '9BY' => 'E02002484',
        '9BZ' => 'E02002484',
        '9DA' => 'E02002484',
        '9DB' => 'E02002484',
        '9DD' => 'E02002484',
        '9DE' => 'E02002484',
        '9DF' => 'E02002484',
        '9DG' => 'E02002484',
        '9DH' => 'E02002484',
        '9DJ' => 'E02002484',
        '9DL' => 'E02002484',
        '9DN' => 'E02002484',
        '9DP' => 'E02002484',
        '9DQ' => 'E02002484',
        '9DR' => 'E02002484',
        '9EU' => 'E02002484',
        '9EX' => 'E02002484',
        '9EY' => 'E02002484',
        '9EZ' => 'E02002484',
        '9GZ' => 'E02002484',
        '9HA' => 'E02002484',
        '9HB' => 'E02002484',
        '9HD' => 'E02002484',
        '9HE' => 'E02002484',
        '9HF' => 'E02002484',
        '9HG' => 'E02002484',
        '9HH' => 'E02002484',
        '9HJ' => 'E02002484',
        '9HL' => 'E02002484',
        '9HN' => 'E02002484',
        '9HP' => 'E02002484',
        '9HQ' => 'E02002484',
        '9HR' => 'E02002484',
        '9HS' => 'E02002484',
        '9HT' => 'E02002484',
        '9HU' => 'E02002484',
        '9HW' => 'E02002484',
        '9HX' => 'E02002484',
        '9HY' => 'E02002484',
        '9HZ' => 'E02002484',
        '9JA' => 'E02002484',
        '9JB' => 'E02002484',
        '9JD' => 'E02002484',
        '9JE' => 'E02002484',
        '9JF' => 'E02002484',
        '9JG' => 'E02002484',
        '9JH' => 'E02002484',
        '9JJ' => 'E02002484',
        '9JL' => 'E02002484',
        '9JN' => 'E02002484',
        '9JQ' => 'E02002484',
        '9LA' => 'E02002484',
        '9LB' => 'E02002484',
        '9LD' => 'E02002484',
        '9LE' => 'E02002484',
        '9LF' => 'E02002484',
        '9LG' => 'E02002484',
        '9LH' => 'E02002484',
        '9LJ' => 'E02002484',
        '9LL' => 'E02002484',
        '9LN' => 'E02002484',
        '9LP' => 'E02002483',
        '9LQ' => 'E02002484',
        '9LR' => 'E02002483',
        '9LS' => 'E02002484',
        '9LT' => 'E02002484',
        '9LU' => 'E02002484',
        '9LW' => 'E02002483',
        '9LX' => 'E02002484',
        '9LY' => 'E02002484',
        '9LZ' => 'E02002484',
        '9NA' => 'E02002484',
        '9NB' => 'E02002484',
        '9ND' => 'E02002484',
        '9NE' => 'E02002484',
        '9NF' => 'E02002484',
        '9NG' => 'E02002484',
        '9NH' => 'E02002484',
        '9NJ' => 'E02002483',
        '9NL' => 'E02002483',
        '9NN' => 'E02002483',
        '9NQ' => 'E02002484',
        '9NT' => 'E02002483',
        '9NU' => 'E02002483',
        '9NW' => 'E02002484',
        '9NX' => 'E02002483',
        '9PA' => 'E02002484',
        '9PB' => 'E02002483',
        '9PD' => 'E02002483',
        '9PE' => 'E02002483',
        '9PF' => 'E02002483',
        '9PG' => 'E02002483',
        '9PH' => 'E02002483',
        '9PJ' => 'E02002483',
        '9PL' => 'E02002483',
        '9PN' => 'E02002483',
        '9PP' => 'E02002483',
        '9PQ' => 'E02002483',
        '9PR' => 'E02002483',
        '9PS' => 'E02002483',
        '9PT' => 'E02002483',
        '9PU' => 'E02002483',
        '9PW' => 'E02002483',
        '9PX' => 'E02002483',
        '9PY' => 'E02002483',
        '9PZ' => 'E02002483',
        '9QA' => 'E02002483',
        '9QB' => 'E02002483',
        '9QD' => 'E02002483',
        '9QE' => 'E02002483',
        '9QF' => 'E02002483',
        '9QG' => 'E02002483',
        '9QH' => 'E02002483',
        '9QJ' => 'E02002483',
        '9QL' => 'E02002483',
        '9QN' => 'E02002483',
        '9QP' => 'E02002483',
        '9QQ' => 'E02002483',
        '9QR' => 'E02002483',
        '9QS' => 'E02002483',
        '9QT' => 'E02002483',
        '9QU' => 'E02002483',
        '9QW' => 'E02002483',
        '9QX' => 'E02002483',
        '9QY' => 'E02002483',
        '9QZ' => 'E02002483',
        '9RA' => 'E02002483',
        '9RB' => 'E02002483',
        '9RD' => 'E02002483',
        '9RE' => 'E02002483',
        '9RF' => 'E02002483',
        '9RG' => 'E02002483',
        '9RH' => 'E02002483',
        '9RJ' => 'E02002483',
        '9RL' => 'E02002483',
        '9RN' => 'E02002483',
        '9RP' => 'E02002483',
        '9RQ' => 'E02002483',
        '9RR' => 'E02002483',
        '9RS' => 'E02002483',
        '9RT' => 'E02002483',
        '9RU' => 'E02002483',
        '9RW' => 'E02002483',
        '9RX' => 'E02002483',
        '9RY' => 'E02002483',
        '9RZ' => 'E02002483',
        '9SA' => 'E02002483',
        '9SB' => 'E02002483',
        '9SD' => 'E02002483',
        '9SE' => 'E02002483',
        '9SF' => 'E02002483',
        '9SG' => 'E02002483',
        '9SH' => 'E02002483',
        '9SJ' => 'E02002483',
        '9SL' => 'E02002483',
        '9SQ' => 'E02002483',
        '9YP' => 'E02002489',
        '9YR' => 'E02002489',
        '9YS' => 'E02002489',
        '9YT' => 'E02002483',
        '9YU' => 'E02002489',
        '9YW' => 'E02002483',
        '9YX' => 'E02002489',
        '9YY' => 'E02002489',
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
