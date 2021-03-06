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
final class DN37
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02002748',
        '0AB' => 'E02002748',
        '0AD' => 'E02002728',
        '0AE' => 'E02002748',
        '0AF' => 'E02002748',
        '0AG' => 'E02002740',
        '0AH' => 'E02002748',
        '0AJ' => 'E02002748',
        '0AL' => 'E02002748',
        '0AN' => 'E02002748',
        '0AP' => 'E02002748',
        '0AQ' => 'E02002748',
        '0AR' => 'E02002748',
        '0AS' => 'E02002748',
        '0AT' => 'E02002748',
        '0AU' => 'E02002748',
        '0AW' => 'E02002748',
        '0AX' => 'E02002748',
        '0AY' => 'E02002748',
        '0AZ' => 'E02002748',
        '0BA' => 'E02002748',
        '0BB' => 'E02002748',
        '0BD' => 'E02002748',
        '0BE' => 'E02002748',
        '0BF' => 'E02002748',
        '0BG' => 'E02002748',
        '0BH' => 'E02002748',
        '0BJ' => 'E02002748',
        '0BL' => 'E02002748',
        '0BN' => 'E02002748',
        '0BP' => 'E02002748',
        '0BQ' => 'E02002748',
        '0BS' => 'E02002748',
        '0BT' => 'E02002748',
        '0BU' => 'E02002748',
        '0BW' => 'E02002748',
        '0BX' => 'E02002748',
        '0BY' => 'E02002748',
        '0BZ' => 'E02002748',
        '0DA' => 'E02002748',
        '0DB' => 'E02002748',
        '0DD' => 'E02002748',
        '0DE' => 'E02002748',
        '0DF' => 'E02002748',
        '0DG' => 'E02002748',
        '0DH' => 'E02002748',
        '0DJ' => 'E02002748',
        '0DL' => 'E02002748',
        '0DN' => 'E02002748',
        '0DP' => 'E02002748',
        '0DQ' => 'E02002748',
        '0DR' => 'E02002748',
        '0DS' => 'E02002748',
        '0DT' => 'E02002748',
        '0DU' => 'E02002748',
        '0DW' => 'E02002748',
        '0DX' => 'E02002748',
        '0DY' => 'E02002748',
        '0DZ' => 'E02002748',
        '0EA' => 'E02002748',
        '0EB' => 'E02002748',
        '0ED' => 'E02002748',
        '0EE' => 'E02002748',
        '0EF' => 'E02002748',
        '0EG' => 'E02002748',
        '0EH' => 'E02002748',
        '0EJ' => 'E02002748',
        '0EL' => 'E02002748',
        '0EN' => 'E02002748',
        '0EP' => 'E02002748',
        '0EQ' => 'E02002748',
        '0ER' => 'E02002748',
        '0ES' => 'E02002748',
        '0ET' => 'E02002748',
        '0EU' => 'E02002748',
        '0EW' => 'E02002748',
        '0EX' => 'E02002748',
        '0EY' => 'E02002748',
        '0EZ' => 'E02002748',
        '0FA' => 'E02005424',
        '0FB' => 'E02002748',
        '0FD' => 'E02002748',
        '0GA' => 'E02002748',
        '0GB' => 'E02002748',
        '0GD' => 'E02002748',
        '0GE' => 'E02002728',
        '0GG' => 'E02002728',
        '0GH' => 'E02002748',
        '0GJ' => 'E02002728',
        '0GL' => 'E02002728',
        '0GN' => 'E02002748',
        '0GP' => 'E02002728',
        '0GQ' => 'E02002748',
        '0GR' => 'E02002728',
        '0GS' => 'E02002728',
        '0GT' => 'E02002728',
        '0GU' => 'E02002748',
        '0GW' => 'E02002748',
        '0GX' => 'E02002748',
        '0HA' => 'E02002748',
        '0HB' => 'E02002748',
        '0HD' => 'E02002748',
        '0HE' => 'E02002748',
        '0HF' => 'E02002748',
        '0HG' => 'E02002748',
        '0HH' => 'E02002748',
        '0HJ' => 'E02002748',
        '0HL' => 'E02002748',
        '0HN' => 'E02002748',
        '0HP' => 'E02002748',
        '0HQ' => 'E02002748',
        '0HR' => 'E02002748',
        '0HS' => 'E02002748',
        '0HT' => 'E02002748',
        '0HU' => 'E02002748',
        '0HW' => 'E02002748',
        '0HX' => 'E02002748',
        '0HY' => 'E02002748',
        '0HZ' => 'E02002748',
        '0JA' => 'E02002748',
        '0JB' => 'E02002748',
        '0JD' => 'E02002748',
        '0JE' => 'E02002748',
        '0JF' => 'E02005424',
        '0JG' => 'E02002748',
        '0JH' => 'E02002748',
        '0JJ' => 'E02002748',
        '0JL' => 'E02002748',
        '0JN' => 'E02002748',
        '0JP' => 'E02002748',
        '0JQ' => 'E02002748',
        '0JR' => 'E02002748',
        '0JS' => 'E02002748',
        '0JT' => 'E02002748',
        '0JU' => 'E02002748',
        '0JW' => 'E02002748',
        '0JX' => 'E02002748',
        '0JY' => 'E02002748',
        '0JZ' => 'E02002748',
        '0LA' => 'E02002748',
        '0LB' => 'E02002748',
        '0LD' => 'E02002748',
        '0LE' => 'E02002748',
        '0LJ' => 'E02002748',
        '0LL' => 'E02002748',
        '0LN' => 'E02002748',
        '0LP' => 'E02002748',
        '0LR' => 'E02002748',
        '0LS' => 'E02002748',
        '0LT' => 'E02002748',
        '0LU' => 'E02002748',
        '0LW' => 'E02002748',
        '0LX' => 'E02002748',
        '0LY' => 'E02002748',
        '0LZ' => 'E02002748',
        '0NB' => 'E02002748',
        '0ND' => 'E02002748',
        '0NE' => 'E02002748',
        '0NF' => 'E02002748',
        '0NG' => 'E02002748',
        '0NH' => 'E02002748',
        '0NJ' => 'E02002748',
        '0NL' => 'E02002748',
        '0NN' => 'E02002748',
        '0NP' => 'E02002748',
        '0NQ' => 'E02002748',
        '0NR' => 'E02002748',
        '0NS' => 'E02002748',
        '0NT' => 'E02002748',
        '0NU' => 'E02002748',
        '0NW' => 'E02002748',
        '0NX' => 'E02002748',
        '0NY' => 'E02002748',
        '0NZ' => 'E02002748',
        '0PA' => 'E02002748',
        '0PB' => 'E02002748',
        '0PD' => 'E02002748',
        '0PE' => 'E02002748',
        '0PF' => 'E02002748',
        '0PG' => 'E02002748',
        '0PH' => 'E02002748',
        '0PJ' => 'E02002748',
        '0PL' => 'E02002748',
        '0PN' => 'E02002748',
        '0PP' => 'E02002748',
        '0PQ' => 'E02002748',
        '0PR' => 'E02002748',
        '0PS' => 'E02002748',
        '0PT' => 'E02002748',
        '0PU' => 'E02002747',
        '0PW' => 'E02002748',
        '0PX' => 'E02002748',
        '0PY' => 'E02002748',
        '0PZ' => 'E02002748',
        '0QA' => 'E02002748',
        '0QB' => 'E02002748',
        '0QD' => 'E02002748',
        '0QE' => 'E02002748',
        '0QF' => 'E02002748',
        '0QG' => 'E02002748',
        '0QN' => 'E02002748',
        '0QP' => 'E02002748',
        '0QR' => 'E02002748',
        '0QS' => 'E02002748',
        '0QT' => 'E02002748',
        '0QU' => 'E02002748',
        '0QW' => 'E02002748',
        '0QX' => 'E02002748',
        '0RF' => 'E02002748',
        '0RG' => 'E02002748',
        '0RH' => 'E02002748',
        '0RJ' => 'E02002748',
        '0RL' => 'E02002748',
        '0RP' => 'E02002748',
        '0RQ' => 'E02002748',
        '0RT' => 'E02002748',
        '0RU' => 'E02002748',
        '0RW' => 'E02002748',
        '0RX' => 'E02002748',
        '0RY' => 'E02002748',
        '0RZ' => 'E02002732',
        '0SB' => 'E02002748',
        '0SG' => 'E02002748',
        '0SH' => 'E02002748',
        '0SJ' => 'E02002748',
        '0SL' => 'E02002748',
        '0SN' => 'E02002748',
        '0SP' => 'E02002748',
        '0SQ' => 'E02002748',
        '0SR' => 'E02005494',
        '0SS' => 'E02005494',
        '0ST' => 'E02005494',
        '0SU' => 'E02005494',
        '0SW' => 'E02002748',
        '0SX' => 'E02005494',
        '0SY' => 'E02005494',
        '0SZ' => 'E02005494',
        '0TA' => 'E02005494',
        '0TH' => 'E02002748',
        '0TJ' => 'E02002748',
        '0TL' => 'E02002748',
        '0TN' => 'E02002748',
        '0TP' => 'E02002748',
        '0TR' => 'E02005494',
        '0TT' => 'E02002728',
        '0TW' => 'E02002748',
        '0UA' => 'E02002748',
        '0UB' => 'E02002748',
        '0UD' => 'E02002748',
        '0UE' => 'E02002748',
        '0UF' => 'E02002748',
        '0UG' => 'E02002748',
        '0UH' => 'E02002748',
        '0UJ' => 'E02002748',
        '0UL' => 'E02002748',
        '0UN' => 'E02002748',
        '0UP' => 'E02002748',
        '0UQ' => 'E02002748',
        '0UR' => 'E02002748',
        '0UT' => 'E02002748',
        '0UU' => 'E02002748',
        '0UW' => 'E02002748',
        '0UX' => 'E02002748',
        '0UY' => 'E02002748',
        '0UZ' => 'E02002748',
        '0WW' => 'E02002728',
        '0WX' => 'E02002728',
        '0WY' => 'E02002748',
        '0WZ' => 'E02002728',
        '0XA' => 'E02002748',
        '0XB' => 'E02002748',
        '0XD' => 'E02002748',
        '0XE' => 'E02002748',
        '0XF' => 'E02002748',
        '0XG' => 'E02002748',
        '0XH' => 'E02002748',
        '0XL' => 'E02002748',
        '0XN' => 'E02002748',
        '0XP' => 'E02002748',
        '0XQ' => 'E02002748',
        '0XR' => 'E02002748',
        '0XS' => 'E02002748',
        '0XT' => 'E02002748',
        '0XU' => 'E02002748',
        '0XW' => 'E02002748',
        '0XX' => 'E02002748',
        '0XY' => 'E02002748',
        '0XZ' => 'E02002748',
        '0YA' => 'E02002748',
        '0YB' => 'E02002748',
        '0YD' => 'E02002748',
        '0YE' => 'E02002748',
        '0YF' => 'E02002748',
        '0YG' => 'E02002748',
        '0YH' => 'E02002728',
        '0YJ' => 'E02002748',
        '0YL' => 'E02002748',
        '0YN' => 'E02002728',
        '0YP' => 'E02002748',
        '0YQ' => 'E02002748',
        '0YR' => 'E02002748',
        '0YS' => 'E02002748',
        '0YT' => 'E02002748',
        '0YU' => 'E02002748',
        '0YW' => 'E02002748',
        '0YX' => 'E02002728',
        '0YY' => 'E02002728',
        '0YZ' => 'E02002728',
        '7AA' => 'E02002732',
        '7AB' => 'E02002732',
        '7AD' => 'E02002732',
        '7AE' => 'E02002732',
        '7AF' => 'E02002732',
        '7AG' => 'E02002732',
        '7AH' => 'E02002732',
        '7AJ' => 'E02002732',
        '7AL' => 'E02002732',
        '7AN' => 'E02002732',
        '7AP' => 'E02002732',
        '7AQ' => 'E02002732',
        '7AR' => 'E02002732',
        '7AS' => 'E02002732',
        '7AT' => 'E02002732',
        '7AU' => 'E02002732',
        '7AW' => 'E02002732',
        '7AX' => 'E02002732',
        '7AY' => 'E02002732',
        '7AZ' => 'E02002732',
        '7BA' => 'E02002732',
        '7BB' => 'E02002732',
        '7BD' => 'E02002732',
        '7BE' => 'E02002732',
        '7BF' => 'E02002732',
        '7BG' => 'E02002732',
        '7BH' => 'E02002732',
        '7BJ' => 'E02002732',
        '7BL' => 'E02002732',
        '7BN' => 'E02002732',
        '7BP' => 'E02002732',
        '7BQ' => 'E02002732',
        '7BS' => 'E02002732',
        '7BT' => 'E02002732',
        '7BU' => 'E02002732',
        '7BW' => 'E02002732',
        '7BX' => 'E02002732',
        '7BY' => 'E02002732',
        '7BZ' => 'E02002732',
        '7DA' => 'E02002732',
        '7DB' => 'E02002732',
        '7DD' => 'E02002732',
        '7DE' => 'E02002732',
        '7DF' => 'E02002732',
        '7DG' => 'E02002732',
        '7DH' => 'E02002732',
        '7DJ' => 'E02002732',
        '7DL' => 'E02002732',
        '7DN' => 'E02002732',
        '7DP' => 'E02002732',
        '7DQ' => 'E02002732',
        '7DR' => 'E02002732',
        '7DS' => 'E02002732',
        '7DT' => 'E02002732',
        '7DU' => 'E02002732',
        '7DW' => 'E02002732',
        '7DX' => 'E02002732',
        '7DY' => 'E02002732',
        '7DZ' => 'E02002732',
        '7EA' => 'E02002732',
        '7EB' => 'E02002732',
        '7ED' => 'E02002732',
        '7EE' => 'E02002732',
        '7EF' => 'E02002732',
        '7EG' => 'E02002732',
        '7EH' => 'E02002732',
        '7EJ' => 'E02002732',
        '7EN' => 'E02002732',
        '7EP' => 'E02002732',
        '7EQ' => 'E02002732',
        '7ER' => 'E02002732',
        '7ES' => 'E02002732',
        '7ET' => 'E02002732',
        '7EU' => 'E02002732',
        '7EW' => 'E02002732',
        '7EX' => 'E02002732',
        '7EY' => 'E02002732',
        '7EZ' => 'E02002732',
        '7FB' => 'E02002732',
        '7FD' => 'E02002732',
        '7FE' => 'E02002732',
        '7FF' => 'E02002732',
        '7FG' => 'E02002732',
        '7FH' => 'E02002732',
        '7FJ' => 'E02002732',
        '7HA' => 'E02002732',
        '7HB' => 'E02002732',
        '7HD' => 'E02002732',
        '7HE' => 'E02002732',
        '7HF' => 'E02002732',
        '7HG' => 'E02002732',
        '7HH' => 'E02002732',
        '7HJ' => 'E02002732',
        '7HL' => 'E02002732',
        '7HQ' => 'E02002732',
        '7HU' => 'E02002732',
        '7HW' => 'E02002732',
        '7HX' => 'E02002732',
        '7HY' => 'E02002732',
        '7HZ' => 'E02002732',
        '7JA' => 'E02002732',
        '7JB' => 'E02002732',
        '7JD' => 'E02002732',
        '7JE' => 'E02002732',
        '7JF' => 'E02002732',
        '7JG' => 'E02002732',
        '7JH' => 'E02002732',
        '7JJ' => 'E02002732',
        '7JL' => 'E02002732',
        '7JN' => 'E02002732',
        '7JP' => 'E02002748',
        '7JQ' => 'E02002732',
        '7JR' => 'E02002748',
        '7JS' => 'E02002748',
        '7JT' => 'E02002748',
        '7JU' => 'E02002748',
        '7JW' => 'E02002748',
        '7JX' => 'E02002748',
        '7JY' => 'E02002748',
        '7JZ' => 'E02002748',
        '7LA' => 'E02002748',
        '7LB' => 'E02002748',
        '7LD' => 'E02002732',
        '7LE' => 'E02002732',
        '7LF' => 'E02002732',
        '7LG' => 'E02002732',
        '7LH' => 'E02002732',
        '7LJ' => 'E02002732',
        '7LL' => 'E02002732',
        '7LN' => 'E02002732',
        '7LP' => 'E02002732',
        '7LQ' => 'E02002732',
        '7LW' => 'E02002732',
        '7LX' => 'E02002732',
        '7LY' => 'E02002732',
        '7LZ' => 'E02002732',
        '7NA' => 'E02002732',
        '7NB' => 'E02002732',
        '7ND' => 'E02002732',
        '7NE' => 'E02002732',
        '7NF' => 'E02002732',
        '7NG' => 'E02002732',
        '7NH' => 'E02002732',
        '7NJ' => 'E02002732',
        '7NL' => 'E02002732',
        '7NN' => 'E02002732',
        '7NP' => 'E02002732',
        '7NQ' => 'E02002732',
        '7NR' => 'E02002732',
        '7NS' => 'E02002732',
        '7NT' => 'E02002732',
        '7NU' => 'E02002732',
        '7NW' => 'E02002732',
        '7NX' => 'E02002732',
        '7PA' => 'E02002732',
        '7PH' => 'E02002732',
        '7PJ' => 'E02002732',
        '7PL' => 'E02002732',
        '7PN' => 'E02002732',
        '7PP' => 'E02002732',
        '7PR' => 'E02002732',
        '7PS' => 'E02002732',
        '7PT' => 'E02002732',
        '7PU' => 'E02002732',
        '7PW' => 'E02002732',
        '7PX' => 'E02002732',
        '7PY' => 'E02002732',
        '7PZ' => 'E02002732',
        '7QA' => 'E02002732',
        '7QB' => 'E02002732',
        '7QD' => 'E02002732',
        '7QE' => 'E02002732',
        '7QF' => 'E02002732',
        '7QG' => 'E02002732',
        '7QH' => 'E02002732',
        '7QJ' => 'E02002732',
        '7QL' => 'E02002732',
        '7QN' => 'E02002732',
        '7QP' => 'E02002732',
        '7QQ' => 'E02002732',
        '7QR' => 'E02002732',
        '7QS' => 'E02002732',
        '7QT' => 'E02002732',
        '7QU' => 'E02002732',
        '7QW' => 'E02002732',
        '7RB' => 'E02002732',
        '7RD' => 'E02002732',
        '7RE' => 'E02002732',
        '7RF' => 'E02002732',
        '7RG' => 'E02002732',
        '7RH' => 'E02002732',
        '7RJ' => 'E02002732',
        '7RL' => 'E02002732',
        '7RN' => 'E02002732',
        '7RP' => 'E02002732',
        '7RQ' => 'E02002732',
        '7RR' => 'E02002732',
        '7RS' => 'E02002732',
        '7RT' => 'E02002732',
        '7RU' => 'E02002732',
        '7RW' => 'E02002732',
        '7RX' => 'E02002732',
        '7RY' => 'E02002732',
        '7RZ' => 'E02002732',
        '7SA' => 'E02002732',
        '7SB' => 'E02002732',
        '7SP' => 'E02002732',
        '7SQ' => 'E02002732',
        '7SS' => 'E02002732',
        '7ST' => 'E02002732',
        '7SU' => 'E02002732',
        '7SW' => 'E02002732',
        '7TT' => 'E02002732',
        '7WA' => 'E02002732',
        '7WT' => 'E02002728',
        '7WU' => 'E02002728',
        '7WW' => 'E02002728',
        '7WX' => 'E02002728',
        '7WY' => 'E02002728',
        '7WZ' => 'E02002732',
        '7XB' => 'E02002728',
        '7XD' => 'E02002732',
        '7XE' => 'E02002732',
        '7XF' => 'E02002728',
        '7XG' => 'E02002728',
        '7XH' => 'E02002728',
        '7XJ' => 'E02002728',
        '7YY' => 'E02002728',
        '7YZ' => 'E02002728',
        '8AA' => 'E02002732',
        '8AB' => 'E02002732',
        '8AD' => 'E02002732',
        '8AE' => 'E02002732',
        '8AF' => 'E02002732',
        '8AG' => 'E02002732',
        '8AH' => 'E02002732',
        '8AJ' => 'E02002732',
        '8AL' => 'E02002732',
        '8AN' => 'E02002732',
        '8AP' => 'E02002732',
        '8AQ' => 'E02002732',
        '8AR' => 'E02002732',
        '8AS' => 'E02002732',
        '8AT' => 'E02002732',
        '8AU' => 'E02002732',
        '8AW' => 'E02002732',
        '8AX' => 'E02002732',
        '8AY' => 'E02002732',
        '8AZ' => 'E02002732',
        '8BA' => 'E02002732',
        '8BB' => 'E02002732',
        '8BD' => 'E02002732',
        '8BE' => 'E02002732',
        '8BF' => 'E02005492',
        '8BG' => 'E02002732',
        '8BH' => 'E02002732',
        '8BJ' => 'E02002732',
        '8BL' => 'E02002732',
        '8BN' => 'E02002732',
        '8BP' => 'E02002726',
        '8BQ' => 'E02002732',
        '8BS' => 'E02002732',
        '8BT' => 'E02002732',
        '8BU' => 'E02002732',
        '8BW' => 'E02002732',
        '8BX' => 'E02002732',
        '8BY' => 'E02002732',
        '8BZ' => 'E02002732',
        '8DA' => 'E02002732',
        '8DB' => 'E02002732',
        '8DD' => 'E02002732',
        '8DE' => 'E02005492',
        '8DF' => 'E02002732',
        '8DG' => 'E02002732',
        '8DH' => 'E02002732',
        '8DJ' => 'E02002732',
        '8DL' => 'E02002732',
        '8DN' => 'E02002732',
        '8DP' => 'E02002732',
        '8DQ' => 'E02002732',
        '8DR' => 'E02002726',
        '8DS' => 'E02002732',
        '8DT' => 'E02002732',
        '8DU' => 'E02002732',
        '8DW' => 'E02002732',
        '8DX' => 'E02002732',
        '8DY' => 'E02002732',
        '8DZ' => 'E02002732',
        '8EA' => 'E02005492',
        '8EB' => 'E02005492',
        '8ED' => 'E02005492',
        '8EE' => 'E02005492',
        '8EF' => 'E02005492',
        '8EG' => 'E02005492',
        '8EH' => 'E02005492',
        '8EJ' => 'E02005492',
        '8EL' => 'E02005492',
        '8EN' => 'E02005492',
        '8EP' => 'E02005492',
        '8EQ' => 'E02005492',
        '8ER' => 'E02005492',
        '8ES' => 'E02005492',
        '8ET' => 'E02005492',
        '8EU' => 'E02005492',
        '8EW' => 'E02005492',
        '8EX' => 'E02005492',
        '8EY' => 'E02005492',
        '8EZ' => 'E02005492',
        '8FX' => 'E02005492',
        '8HA' => 'E02005492',
        '8HB' => 'E02005492',
        '8HD' => 'E02005492',
        '8HE' => 'E02005492',
        '8HF' => 'E02005492',
        '8HG' => 'E02005492',
        '8HH' => 'E02005492',
        '8HJ' => 'E02005492',
        '8HL' => 'E02005492',
        '8HN' => 'E02005492',
        '8HP' => 'E02005492',
        '8HQ' => 'E02005492',
        '8HR' => 'E02005492',
        '8HS' => 'E02005492',
        '8HT' => 'E02005492',
        '8HU' => 'E02005492',
        '8HW' => 'E02005492',
        '8HX' => 'E02005492',
        '8HY' => 'E02005492',
        '8HZ' => 'E02005492',
        '8JA' => 'E02005492',
        '8JB' => 'E02005492',
        '8JD' => 'E02002732',
        '8JE' => 'E02005492',
        '8JF' => 'E02005492',
        '8JG' => 'E02005492',
        '8JH' => 'E02005492',
        '8JJ' => 'E02002732',
        '8JL' => 'E02005492',
        '8JN' => 'E02005492',
        '8JP' => 'E02005492',
        '8JQ' => 'E02005492',
        '8JR' => 'E02005492',
        '8JS' => 'E02005492',
        '8JT' => 'E02005492',
        '8JU' => 'E02005492',
        '8JW' => 'E02005492',
        '8JX' => 'E02005492',
        '8JY' => 'E02005492',
        '8JZ' => 'E02005492',
        '8LA' => 'E02005492',
        '8LB' => 'E02005492',
        '8LD' => 'E02005492',
        '8LE' => 'E02005492',
        '8LF' => 'E02005492',
        '8LG' => 'E02005492',
        '8LH' => 'E02005492',
        '8LJ' => 'E02005492',
        '8LL' => 'E02002752',
        '8LN' => 'E02005492',
        '8LQ' => 'E02005492',
        '8LW' => 'E02005492',
        '8LY' => 'E02005492',
        '8LZ' => 'E02005492',
        '8NA' => 'E02005492',
        '8NB' => 'E02005492',
        '8NE' => 'E02005492',
        '8NF' => 'E02005492',
        '8NG' => 'E02005492',
        '8NH' => 'E02005492',
        '8NJ' => 'E02005492',
        '8NL' => 'E02005492',
        '8NN' => 'E02005492',
        '8NP' => 'E02005492',
        '8NQ' => 'E02005492',
        '8NR' => 'E02005492',
        '8NS' => 'E02005492',
        '8NT' => 'E02005492',
        '8NU' => 'E02005492',
        '8NW' => 'E02005492',
        '8NX' => 'E02005492',
        '8PA' => 'E02005492',
        '8PH' => 'E02005492',
        '8PJ' => 'E02005492',
        '8PL' => 'E02005492',
        '8PN' => 'E02005492',
        '8PP' => 'E02005492',
        '8PW' => 'E02005492',
        '8PZ' => 'E02002726',
        '8QA' => 'E02002732',
        '8QB' => 'E02005492',
        '8RA' => 'E02005492',
        '8RB' => 'E02005492',
        '8RD' => 'E02005492',
        '8RE' => 'E02005492',
        '8SA' => 'E02005492',
        '8SB' => 'E02005492',
        '8SD' => 'E02005492',
        '8SE' => 'E02005492',
        '8SF' => 'E02005492',
        '8SG' => 'E02005492',
        '8SH' => 'E02005492',
        '8SJ' => 'E02005492',
        '8SL' => 'E02005492',
        '8SN' => 'E02002732',
        '8SQ' => 'E02005492',
        '8SR' => 'E02002732',
        '8SW' => 'E02005492',
        '8TA' => 'E02002732',
        '8TB' => 'E02002732',
        '8TD' => 'E02005492',
        '8TE' => 'E02002732',
        '8TG' => 'E02002732',
        '8TH' => 'E02002732',
        '8XA' => 'E02002732',
        '8XB' => 'E02002728',
        '8XD' => 'E02002728',
        '9AA' => 'E02002734',
        '9AB' => 'E02002734',
        '9AD' => 'E02002734',
        '9AE' => 'E02002734',
        '9AF' => 'E02002734',
        '9AG' => 'E02002734',
        '9AH' => 'E02002734',
        '9AJ' => 'E02002734',
        '9AL' => 'E02002734',
        '9AN' => 'E02002734',
        '9AP' => 'E02002734',
        '9AQ' => 'E02002734',
        '9AR' => 'E02002734',
        '9AS' => 'E02002734',
        '9AT' => 'E02002734',
        '9AU' => 'E02002729',
        '9AW' => 'E02002734',
        '9AX' => 'E02002734',
        '9AY' => 'E02002734',
        '9AZ' => 'E02002734',
        '9BA' => 'E02002734',
        '9BB' => 'E02002734',
        '9BD' => 'E02002734',
        '9BE' => 'E02002734',
        '9BF' => 'E02002729',
        '9BG' => 'E02002734',
        '9BH' => 'E02002734',
        '9BJ' => 'E02002734',
        '9BL' => 'E02002734',
        '9BN' => 'E02002729',
        '9BP' => 'E02002729',
        '9BQ' => 'E02002734',
        '9BX' => 'E02002734',
        '9BY' => 'E02002729',
        '9BZ' => 'E02002729',
        '9DA' => 'E02002729',
        '9DB' => 'E02002734',
        '9DD' => 'E02002729',
        '9DE' => 'E02002734',
        '9DF' => 'E02002734',
        '9DG' => 'E02002729',
        '9DH' => 'E02002729',
        '9DJ' => 'E02002729',
        '9DL' => 'E02002734',
        '9DN' => 'E02002734',
        '9DP' => 'E02002734',
        '9DQ' => 'E02002729',
        '9DR' => 'E02002734',
        '9DS' => 'E02002729',
        '9DT' => 'E02002729',
        '9DU' => 'E02002729',
        '9DW' => 'E02002734',
        '9DX' => 'E02002734',
        '9DY' => 'E02002729',
        '9DZ' => 'E02002729',
        '9EA' => 'E02002729',
        '9EB' => 'E02002729',
        '9ED' => 'E02002729',
        '9EE' => 'E02002729',
        '9EF' => 'E02002729',
        '9EG' => 'E02002729',
        '9EH' => 'E02002729',
        '9EJ' => 'E02002734',
        '9EL' => 'E02002734',
        '9EN' => 'E02002729',
        '9EP' => 'E02002729',
        '9EQ' => 'E02002729',
        '9ER' => 'E02002738',
        '9ET' => 'E02002734',
        '9EU' => 'E02002729',
        '9EW' => 'E02002729',
        '9EX' => 'E02002729',
        '9EY' => 'E02002734',
        '9EZ' => 'E02002734',
        '9FB' => 'E02002729',
        '9FD' => 'E02002729',
        '9FE' => 'E02002729',
        '9FF' => 'E02002729',
        '9GA' => 'E02002728',
        '9GB' => 'E02002729',
        '9GD' => 'E02002738',
        '9GE' => 'E02002729',
        '9GF' => 'E02002728',
        '9GG' => 'E02002738',
        '9GH' => 'E02002728',
        '9HA' => 'E02002729',
        '9HB' => 'E02002738',
        '9HD' => 'E02002738',
        '9HE' => 'E02002738',
        '9HF' => 'E02002738',
        '9HG' => 'E02002729',
        '9HH' => 'E02002729',
        '9HJ' => 'E02002729',
        '9HL' => 'E02002738',
        '9HN' => 'E02002738',
        '9HP' => 'E02002729',
        '9HQ' => 'E02002729',
        '9HR' => 'E02002729',
        '9HS' => 'E02002729',
        '9HT' => 'E02002729',
        '9HU' => 'E02002729',
        '9HW' => 'E02002729',
        '9HX' => 'E02002729',
        '9HY' => 'E02002729',
        '9HZ' => 'E02002729',
        '9JA' => 'E02002729',
        '9JB' => 'E02002729',
        '9JD' => 'E02002729',
        '9JE' => 'E02002729',
        '9JF' => 'E02002729',
        '9JG' => 'E02002729',
        '9JH' => 'E02002729',
        '9JJ' => 'E02002729',
        '9JL' => 'E02002729',
        '9JN' => 'E02002729',
        '9JP' => 'E02002729',
        '9JQ' => 'E02002729',
        '9JR' => 'E02002729',
        '9JS' => 'E02002728',
        '9JW' => 'E02002729',
        '9JY' => 'E02002734',
        '9JZ' => 'E02002729',
        '9LA' => 'E02002729',
        '9LB' => 'E02002729',
        '9LD' => 'E02002729',
        '9LE' => 'E02002729',
        '9LF' => 'E02002729',
        '9LG' => 'E02002729',
        '9LH' => 'E02002729',
        '9LJ' => 'E02002729',
        '9LL' => 'E02002729',
        '9LN' => 'E02002729',
        '9LP' => 'E02002729',
        '9LQ' => 'E02002729',
        '9LR' => 'E02002729',
        '9LS' => 'E02002729',
        '9LT' => 'E02002729',
        '9LU' => 'E02002729',
        '9LW' => 'E02002729',
        '9LX' => 'E02002729',
        '9LY' => 'E02002729',
        '9LZ' => 'E02002729',
        '9NA' => 'E02002729',
        '9NB' => 'E02002729',
        '9ND' => 'E02002729',
        '9NE' => 'E02002729',
        '9NF' => 'E02002729',
        '9NG' => 'E02002729',
        '9NH' => 'E02002729',
        '9NJ' => 'E02002729',
        '9NL' => 'E02002729',
        '9NN' => 'E02002729',
        '9NP' => 'E02002729',
        '9NQ' => 'E02002729',
        '9NR' => 'E02002729',
        '9NS' => 'E02002729',
        '9NT' => 'E02002729',
        '9NU' => 'E02002732',
        '9NW' => 'E02002729',
        '9NX' => 'E02002729',
        '9NY' => 'E02002732',
        '9NZ' => 'E02002729',
        '9PA' => 'E02002729',
        '9PB' => 'E02002729',
        '9PD' => 'E02002729',
        '9PE' => 'E02002729',
        '9PG' => 'E02002729',
        '9PH' => 'E02002729',
        '9PJ' => 'E02002729',
        '9PL' => 'E02002729',
        '9PN' => 'E02002729',
        '9PP' => 'E02002729',
        '9PQ' => 'E02002729',
        '9PR' => 'E02002729',
        '9PS' => 'E02002729',
        '9PT' => 'E02002729',
        '9PU' => 'E02002729',
        '9PW' => 'E02002729',
        '9PX' => 'E02002729',
        '9PY' => 'E02002729',
        '9PZ' => 'E02002729',
        '9QA' => 'E02002738',
        '9QB' => 'E02002738',
        '9QD' => 'E02002738',
        '9QE' => 'E02002738',
        '9QF' => 'E02002738',
        '9QG' => 'E02002738',
        '9QH' => 'E02002738',
        '9QJ' => 'E02002738',
        '9QL' => 'E02002738',
        '9QN' => 'E02002738',
        '9QP' => 'E02002738',
        '9QQ' => 'E02002738',
        '9QR' => 'E02002738',
        '9QS' => 'E02002738',
        '9QT' => 'E02002738',
        '9QU' => 'E02002738',
        '9QW' => 'E02002738',
        '9QX' => 'E02002738',
        '9QY' => 'E02002729',
        '9QZ' => 'E02002729',
        '9RA' => 'E02002729',
        '9RB' => 'E02002729',
        '9RD' => 'E02002729',
        '9RE' => 'E02002738',
        '9RF' => 'E02002738',
        '9RG' => 'E02002738',
        '9RH' => 'E02002738',
        '9RJ' => 'E02002738',
        '9RL' => 'E02002738',
        '9RN' => 'E02002729',
        '9RP' => 'E02002738',
        '9RQ' => 'E02002738',
        '9RR' => 'E02002738',
        '9RS' => 'E02002738',
        '9RT' => 'E02002738',
        '9RU' => 'E02002738',
        '9RW' => 'E02002738',
        '9RX' => 'E02002738',
        '9RY' => 'E02002738',
        '9RZ' => 'E02002738',
        '9SA' => 'E02002738',
        '9SB' => 'E02002729',
        '9SD' => 'E02002729',
        '9SE' => 'E02002729',
        '9SF' => 'E02002729',
        '9SG' => 'E02002729',
        '9SH' => 'E02002729',
        '9SJ' => 'E02002729',
        '9SL' => 'E02002729',
        '9SN' => 'E02002729',
        '9SP' => 'E02002729',
        '9SQ' => 'E02002729',
        '9SR' => 'E02002729',
        '9SS' => 'E02002729',
        '9ST' => 'E02002729',
        '9SU' => 'E02002729',
        '9SW' => 'E02002729',
        '9SX' => 'E02002729',
        '9SY' => 'E02002729',
        '9SZ' => 'E02002729',
        '9TA' => 'E02002728',
        '9TB' => 'E02002738',
        '9TE' => 'E02002729',
        '9TF' => 'E02002728',
        '9TG' => 'E02002729',
        '9TJ' => 'E02002732',
        '9TL' => 'E02002732',
        '9TR' => 'E02002732',
        '9TS' => 'E02002732',
        '9TT' => 'E02002732',
        '9TU' => 'E02002732',
        '9TW' => 'E02002732',
        '9TZ' => 'E02002732',
        '9UA' => 'E02002732',
        '9WA' => 'E02002728',
        '9WR' => 'E02002728',
        '9WS' => 'E02002728',
        '9WT' => 'E02002728',
        '9WU' => 'E02002728',
        '9WW' => 'E02002728',
        '9WX' => 'E02002728',
        '9WY' => 'E02002728',
        '9WZ' => 'E02002728',
        '9XA' => 'E02002728',
        '9XB' => 'E02002728',
        '9XX' => 'E02002729',
        '9XZ' => 'E02002728',
        '9YZ' => 'E02002728',
        '9ZT' => 'E02002728',
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
