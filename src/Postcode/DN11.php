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
final class DN11
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02001574',
        '0AB' => 'E02001574',
        '0AD' => 'E02001575',
        '0AE' => 'E02001575',
        '0AF' => 'E02001575',
        '0AG' => 'E02001574',
        '0AH' => 'E02001574',
        '0AJ' => 'E02001575',
        '0AL' => 'E02001574',
        '0AN' => 'E02001574',
        '0AP' => 'E02001574',
        '0AQ' => 'E02001574',
        '0AR' => 'E02001574',
        '0AS' => 'E02001574',
        '0AT' => 'E02001574',
        '0AU' => 'E02001574',
        '0AW' => 'E02001574',
        '0AX' => 'E02001574',
        '0AY' => 'E02001574',
        '0AZ' => 'E02001574',
        '0BA' => 'E02001574',
        '0BB' => 'E02001574',
        '0BD' => 'E02001575',
        '0BE' => 'E02001575',
        '0BF' => 'E02001577',
        '0BG' => 'E02001577',
        '0BH' => 'E02001574',
        '0BJ' => 'E02001575',
        '0BL' => 'E02001575',
        '0BN' => 'E02001575',
        '0BP' => 'E02001574',
        '0BQ' => 'E02001577',
        '0BS' => 'E02001574',
        '0BT' => 'E02001574',
        '0BU' => 'E02001574',
        '0BW' => 'E02001574',
        '0BX' => 'E02001574',
        '0BY' => 'E02001574',
        '0BZ' => 'E02001574',
        '0DA' => 'E02001574',
        '0DB' => 'E02001574',
        '0DD' => 'E02001574',
        '0DE' => 'E02001574',
        '0DF' => 'E02001574',
        '0DG' => 'E02001574',
        '0DH' => 'E02001574',
        '0DJ' => 'E02001574',
        '0DL' => 'E02001574',
        '0DN' => 'E02001574',
        '0DP' => 'E02001574',
        '0DQ' => 'E02001574',
        '0DR' => 'E02001574',
        '0DS' => 'E02001574',
        '0DT' => 'E02001575',
        '0DU' => 'E02001574',
        '0DW' => 'E02001574',
        '0DX' => 'E02001575',
        '0DY' => 'E02001575',
        '0DZ' => 'E02001574',
        '0EA' => 'E02001574',
        '0EB' => 'E02001574',
        '0ED' => 'E02001574',
        '0EE' => 'E02001574',
        '0EF' => 'E02001574',
        '0EG' => 'E02001574',
        '0EH' => 'E02001574',
        '0EJ' => 'E02001574',
        '0EL' => 'E02001574',
        '0EN' => 'E02001574',
        '0EP' => 'E02001574',
        '0EQ' => 'E02001574',
        '0ER' => 'E02001574',
        '0ES' => 'E02001574',
        '0ET' => 'E02001574',
        '0EU' => 'E02001574',
        '0EW' => 'E02001574',
        '0EX' => 'E02001574',
        '0EY' => 'E02001574',
        '0EZ' => 'E02001574',
        '0FB' => 'E02001574',
        '0FD' => 'E02001574',
        '0FE' => 'E02001574',
        '0FF' => 'E02001574',
        '0FG' => 'E02001574',
        '0FH' => 'E02001574',
        '0FJ' => 'E02001574',
        '0FL' => 'E02001574',
        '0FN' => 'E02001574',
        '0FP' => 'E02001574',
        '0FQ' => 'E02001574',
        '0FR' => 'E02001574',
        '0FS' => 'E02001574',
        '0FT' => 'E02001574',
        '0FW' => 'E02001574',
        '0FX' => 'E02001574',
        '0FY' => 'E02001574',
        '0FZ' => 'E02001574',
        '0GA' => 'E02001575',
        '0GB' => 'E02001575',
        '0GD' => 'E02001575',
        '0GE' => 'E02001575',
        '0GF' => 'E02001575',
        '0GG' => 'E02001575',
        '0GH' => 'E02001575',
        '0GJ' => 'E02001560',
        '0GL' => 'E02001575',
        '0GN' => 'E02001575',
        '0GP' => 'E02001575',
        '0GQ' => 'E02001560',
        '0GR' => 'E02001560',
        '0GT' => 'E02001574',
        '0GU' => 'E02001577',
        '0GX' => 'E02001575',
        '0HA' => 'E02001574',
        '0HB' => 'E02001574',
        '0HD' => 'E02001574',
        '0HE' => 'E02001575',
        '0HF' => 'E02001574',
        '0HG' => 'E02001574',
        '0HH' => 'E02001574',
        '0HJ' => 'E02001574',
        '0HL' => 'E02001576',
        '0HN' => 'E02001574',
        '0HP' => 'E02001574',
        '0HQ' => 'E02001574',
        '0HR' => 'E02001574',
        '0HS' => 'E02001574',
        '0HT' => 'E02001574',
        '0HU' => 'E02001574',
        '0HW' => 'E02001574',
        '0HX' => 'E02001574',
        '0HY' => 'E02001574',
        '0HZ' => 'E02001574',
        '0JA' => 'E02001574',
        '0JB' => 'E02001575',
        '0JD' => 'E02001575',
        '0JE' => 'E02001575',
        '0JF' => 'E02001575',
        '0JG' => 'E02001575',
        '0JH' => 'E02001575',
        '0JJ' => 'E02001575',
        '0JL' => 'E02001575',
        '0JN' => 'E02001575',
        '0JP' => 'E02001575',
        '0JQ' => 'E02001575',
        '0JR' => 'E02001575',
        '0JS' => 'E02001575',
        '0JT' => 'E02001575',
        '0JU' => 'E02001575',
        '0JW' => 'E02001575',
        '0JX' => 'E02001575',
        '0JY' => 'E02001575',
        '0JZ' => 'E02001575',
        '0LA' => 'E02001575',
        '0LD' => 'E02001575',
        '0LE' => 'E02001574',
        '0LF' => 'E02001574',
        '0LG' => 'E02001574',
        '0LH' => 'E02001575',
        '0LJ' => 'E02001575',
        '0LL' => 'E02001575',
        '0LN' => 'E02001575',
        '0LP' => 'E02001575',
        '0LQ' => 'E02001575',
        '0LR' => 'E02001575',
        '0LS' => 'E02001575',
        '0LT' => 'E02001575',
        '0LU' => 'E02001575',
        '0LW' => 'E02001575',
        '0LX' => 'E02001575',
        '0LY' => 'E02001575',
        '0LZ' => 'E02001575',
        '0NA' => 'E02001575',
        '0NB' => 'E02001575',
        '0ND' => 'E02001575',
        '0NE' => 'E02001574',
        '0NF' => 'E02001574',
        '0NG' => 'E02001575',
        '0NH' => 'E02001574',
        '0NJ' => 'E02001575',
        '0NL' => 'E02001575',
        '0NN' => 'E02001575',
        '0NP' => 'E02001575',
        '0NQ' => 'E02001575',
        '0NR' => 'E02001575',
        '0NS' => 'E02001575',
        '0NT' => 'E02001575',
        '0NU' => 'E02001575',
        '0NW' => 'E02001575',
        '0NY' => 'E02001574',
        '0NZ' => 'E02001574',
        '0PD' => 'E02001575',
        '0PE' => 'E02001575',
        '0PF' => 'E02001575',
        '0PG' => 'E02001575',
        '0PH' => 'E02001575',
        '0PJ' => 'E02001575',
        '0PL' => 'E02001575',
        '0PN' => 'E02001575',
        '0PP' => 'E02001575',
        '0PQ' => 'E02001575',
        '0PR' => 'E02001575',
        '0PS' => 'E02001575',
        '0PT' => 'E02001575',
        '0PU' => 'E02001575',
        '0PW' => 'E02001575',
        '0PX' => 'E02001575',
        '0PY' => 'E02001575',
        '0PZ' => 'E02001575',
        '0QA' => 'E02001575',
        '0QB' => 'E02001575',
        '0QD' => 'E02001575',
        '0QE' => 'E02001575',
        '0QF' => 'E02001575',
        '0QG' => 'E02001575',
        '0QH' => 'E02001575',
        '0QP' => 'E02001575',
        '0QQ' => 'E02001575',
        '0QR' => 'E02001575',
        '0QS' => 'E02001575',
        '0QT' => 'E02001575',
        '0QU' => 'E02001575',
        '0QW' => 'E02001575',
        '0QX' => 'E02001575',
        '0QY' => 'E02001575',
        '0QZ' => 'E02001575',
        '0RA' => 'E02001575',
        '0RB' => 'E02001575',
        '0RD' => 'E02001575',
        '0RE' => 'E02001575',
        '0RF' => 'E02001575',
        '0RG' => 'E02001575',
        '0RH' => 'E02001575',
        '0RJ' => 'E02001575',
        '0RL' => 'E02001575',
        '0RN' => 'E02001575',
        '0RP' => 'E02001575',
        '0RQ' => 'E02001575',
        '0RR' => 'E02001575',
        '0RS' => 'E02001575',
        '0RT' => 'E02001575',
        '0RU' => 'E02001575',
        '0RW' => 'E02001575',
        '0RX' => 'E02001575',
        '0RY' => 'E02001575',
        '0RZ' => 'E02001575',
        '0SA' => 'E02001575',
        '0SB' => 'E02001575',
        '0SD' => 'E02001575',
        '0SE' => 'E02001575',
        '0SF' => 'E02001575',
        '0SG' => 'E02001575',
        '0SH' => 'E02001575',
        '0SJ' => 'E02001575',
        '0SL' => 'E02001575',
        '0SN' => 'E02001575',
        '0SP' => 'E02001575',
        '0SQ' => 'E02001575',
        '0SR' => 'E02001575',
        '0SS' => 'E02001575',
        '0ST' => 'E02001575',
        '0SU' => 'E02001575',
        '0SW' => 'E02001575',
        '0SX' => 'E02001575',
        '0SY' => 'E02001575',
        '0SZ' => 'E02001575',
        '0TA' => 'E02001575',
        '0TB' => 'E02001575',
        '0TD' => 'E02001575',
        '0TE' => 'E02001575',
        '0TF' => 'E02001575',
        '0TG' => 'E02001575',
        '0TH' => 'E02001575',
        '0TJ' => 'E02001575',
        '0TL' => 'E02001575',
        '0TN' => 'E02001575',
        '0TP' => 'E02001575',
        '0TQ' => 'E02001575',
        '0TR' => 'E02001575',
        '0TS' => 'E02001575',
        '0TT' => 'E02001575',
        '0TU' => 'E02001575',
        '0TW' => 'E02001575',
        '0TX' => 'E02001575',
        '0TY' => 'E02001575',
        '0TZ' => 'E02001575',
        '0UA' => 'E02001574',
        '0UB' => 'E02001574',
        '0UD' => 'E02001574',
        '0UE' => 'E02001574',
        '0UF' => 'E02001574',
        '0UG' => 'E02001574',
        '0UH' => 'E02001574',
        '0UJ' => 'E02001574',
        '0UL' => 'E02001574',
        '0UN' => 'E02001574',
        '0UP' => 'E02001574',
        '0UQ' => 'E02001574',
        '0UR' => 'E02001574',
        '0US' => 'E02001574',
        '0UT' => 'E02001574',
        '0UU' => 'E02001575',
        '0UW' => 'E02001574',
        '0UX' => 'E02001574',
        '0UY' => 'E02001575',
        '0UZ' => 'E02001575',
        '0WA' => 'E02001575',
        '0WB' => 'E02001575',
        '0WE' => 'E02001575',
        '0WF' => 'E02001575',
        '0WG' => 'E02001575',
        '0WH' => 'E02001575',
        '0WJ' => 'E02001575',
        '0WL' => 'E02001575',
        '0WN' => 'E02001575',
        '0WP' => 'E02001575',
        '0WQ' => 'E02001575',
        '0WR' => 'E02001575',
        '0WS' => 'E02001575',
        '0WT' => 'E02001575',
        '0WU' => 'E02001575',
        '0WW' => 'E02001575',
        '0WX' => 'E02001575',
        '0WY' => 'E02001575',
        '0WZ' => 'E02001575',
        '0XA' => 'E02001575',
        '0XB' => 'E02001575',
        '0XD' => 'E02001575',
        '0XE' => 'E02001575',
        '0XF' => 'E02001575',
        '0XG' => 'E02001574',
        '0XH' => 'E02001574',
        '0XJ' => 'E02001574',
        '0XL' => 'E02001574',
        '0XN' => 'E02001574',
        '0XP' => 'E02001574',
        '0XQ' => 'E02001574',
        '0XR' => 'E02001575',
        '0XS' => 'E02001574',
        '0XT' => 'E02001574',
        '0XU' => 'E02001574',
        '0XW' => 'E02001575',
        '0XX' => 'E02001574',
        '0XY' => 'E02001574',
        '0XZ' => 'E02001574',
        '0YA' => 'E02001574',
        '0YB' => 'E02001574',
        '0YD' => 'E02001574',
        '0YE' => 'E02001575',
        '0YF' => 'E02001575',
        '0YG' => 'E02001574',
        '0YH' => 'E02001574',
        '0YJ' => 'E02001574',
        '0YL' => 'E02001575',
        '0YN' => 'E02001575',
        '0YP' => 'E02001575',
        '0YQ' => 'E02001575',
        '0YR' => 'E02001575',
        '0YS' => 'E02001575',
        '0YT' => 'E02001575',
        '0YU' => 'E02001574',
        '0YW' => 'E02001575',
        '0YX' => 'E02001574',
        '0YY' => 'E02001574',
        '0YZ' => 'E02001575',
        '0ZG' => 'E02001575',
        '0ZL' => 'E02001574',
        '0ZU' => 'E02001574',
        '8AA' => 'E02005835',
        '8AB' => 'E02005835',
        '8AD' => 'E02005835',
        '8AE' => 'E02005835',
        '8AF' => 'E02005835',
        '8AG' => 'E02005835',
        '8AH' => 'E02005835',
        '8AJ' => 'E02005835',
        '8AL' => 'E02005835',
        '8AN' => 'E02005835',
        '8AP' => 'E02005835',
        '8AQ' => 'E02005835',
        '8AR' => 'E02005835',
        '8AS' => 'E02005835',
        '8AT' => 'E02005835',
        '8AU' => 'E02005835',
        '8AW' => 'E02005835',
        '8AX' => 'E02005835',
        '8AY' => 'E02005835',
        '8AZ' => 'E02005835',
        '8BA' => 'E02005835',
        '8BB' => 'E02005835',
        '8BD' => 'E02005835',
        '8BE' => 'E02005835',
        '8BF' => 'E02005835',
        '8BG' => 'E02005835',
        '8BH' => 'E02005835',
        '8BJ' => 'E02005835',
        '8BL' => 'E02005835',
        '8BN' => 'E02005835',
        '8BP' => 'E02005835',
        '8BQ' => 'E02005835',
        '8BS' => 'E02005835',
        '8BT' => 'E02005835',
        '8BU' => 'E02005835',
        '8BW' => 'E02005835',
        '8BX' => 'E02005835',
        '8BY' => 'E02005835',
        '8BZ' => 'E02005835',
        '8DA' => 'E02005835',
        '8DB' => 'E02005835',
        '8DD' => 'E02005835',
        '8DE' => 'E02005835',
        '8DF' => 'E02005835',
        '8DG' => 'E02005835',
        '8DH' => 'E02005835',
        '8DJ' => 'E02005835',
        '8DL' => 'E02005835',
        '8DN' => 'E02005835',
        '8DP' => 'E02005835',
        '8DQ' => 'E02005835',
        '8DR' => 'E02005835',
        '8DS' => 'E02005835',
        '8DT' => 'E02005835',
        '8DU' => 'E02005835',
        '8DW' => 'E02005835',
        '8DX' => 'E02005835',
        '8DY' => 'E02005835',
        '8DZ' => 'E02005835',
        '8EA' => 'E02005835',
        '8EB' => 'E02005835',
        '8ED' => 'E02005835',
        '8EE' => 'E02005835',
        '8EF' => 'E02005835',
        '8EG' => 'E02005835',
        '8EH' => 'E02005835',
        '8EJ' => 'E02005835',
        '8EL' => 'E02005835',
        '8EN' => 'E02005835',
        '8EP' => 'E02005835',
        '8EQ' => 'E02005835',
        '8ER' => 'E02005835',
        '8ES' => 'E02005835',
        '8ET' => 'E02005835',
        '8EU' => 'E02005835',
        '8EW' => 'E02005835',
        '8EX' => 'E02005835',
        '8EY' => 'E02005835',
        '8EZ' => 'E02005835',
        '8FA' => 'E02005835',
        '8FB' => 'E02005835',
        '8FD' => 'E02005835',
        '8FE' => 'E02005835',
        '8FF' => 'E02005835',
        '8FG' => 'E02005835',
        '8FH' => 'E02005835',
        '8FL' => 'E02005835',
        '8FN' => 'E02005835',
        '8FQ' => 'E02005835',
        '8FS' => 'E02005835',
        '8FT' => 'E02005835',
        '8FU' => 'E02005835',
        '8FW' => 'E02005835',
        '8FX' => 'E02005835',
        '8FZ' => 'E02005835',
        '8HA' => 'E02005835',
        '8HB' => 'E02005835',
        '8HD' => 'E02005835',
        '8HE' => 'E02005835',
        '8HF' => 'E02005835',
        '8HG' => 'E02005835',
        '8HH' => 'E02005835',
        '8HJ' => 'E02005835',
        '8HL' => 'E02005835',
        '8HN' => 'E02005835',
        '8HP' => 'E02005835',
        '8HQ' => 'E02005835',
        '8HR' => 'E02005835',
        '8HS' => 'E02005835',
        '8HT' => 'E02005835',
        '8HU' => 'E02005835',
        '8HW' => 'E02005835',
        '8HX' => 'E02005835',
        '8HY' => 'E02005835',
        '8HZ' => 'E02005835',
        '8JA' => 'E02005835',
        '8JB' => 'E02005835',
        '8JD' => 'E02005835',
        '8JE' => 'E02005835',
        '8JF' => 'E02005835',
        '8JG' => 'E02005835',
        '8JH' => 'E02005835',
        '8JJ' => 'E02005835',
        '8JL' => 'E02005835',
        '8JN' => 'E02005835',
        '8JP' => 'E02005835',
        '8JQ' => 'E02005835',
        '8JR' => 'E02005835',
        '8JS' => 'E02005835',
        '8JT' => 'E02005835',
        '8JU' => 'E02005835',
        '8JW' => 'E02005835',
        '8JX' => 'E02005835',
        '8JY' => 'E02005835',
        '8JZ' => 'E02005835',
        '8LA' => 'E02005835',
        '8LB' => 'E02005835',
        '8LD' => 'E02005835',
        '8LE' => 'E02005835',
        '8LF' => 'E02005835',
        '8LG' => 'E02005835',
        '8LH' => 'E02005835',
        '8LJ' => 'E02005835',
        '8LL' => 'E02005835',
        '8LN' => 'E02005835',
        '8LP' => 'E02005835',
        '8LQ' => 'E02005835',
        '8LR' => 'E02005835',
        '8LS' => 'E02005835',
        '8LT' => 'E02005835',
        '8LU' => 'E02005835',
        '8LW' => 'E02005835',
        '8LX' => 'E02005835',
        '8LY' => 'E02005835',
        '8LZ' => 'E02005835',
        '8NA' => 'E02005835',
        '8NB' => 'E02005835',
        '8ND' => 'E02005835',
        '8NE' => 'E02005835',
        '8NF' => 'E02005835',
        '8NG' => 'E02005835',
        '8NH' => 'E02005835',
        '8NJ' => 'E02005835',
        '8NL' => 'E02005835',
        '8NN' => 'E02005835',
        '8NP' => 'E02005835',
        '8NQ' => 'E02005835',
        '8NR' => 'E02005835',
        '8NS' => 'E02005835',
        '8NT' => 'E02005835',
        '8NU' => 'E02005835',
        '8NW' => 'E02005835',
        '8NX' => 'E02005835',
        '8NY' => 'E02005835',
        '8NZ' => 'E02005835',
        '8PA' => 'E02005835',
        '8PB' => 'E02005835',
        '8PD' => 'E02005835',
        '8PE' => 'E02005835',
        '8PF' => 'E02005835',
        '8PG' => 'E02005835',
        '8PH' => 'E02005835',
        '8PJ' => 'E02005835',
        '8PL' => 'E02005835',
        '8PN' => 'E02005835',
        '8PP' => 'E02005835',
        '8PQ' => 'E02005835',
        '8PR' => 'E02005835',
        '8PS' => 'E02005835',
        '8PT' => 'E02005835',
        '8PU' => 'E02005835',
        '8PW' => 'E02005835',
        '8PX' => 'E02005835',
        '8PY' => 'E02005835',
        '8PZ' => 'E02005835',
        '8QA' => 'E02005835',
        '8QB' => 'E02005835',
        '8QD' => 'E02005835',
        '8QE' => 'E02005835',
        '8QF' => 'E02005835',
        '8QG' => 'E02005835',
        '8QH' => 'E02005835',
        '8QJ' => 'E02005835',
        '8QL' => 'E02005835',
        '8QN' => 'E02005835',
        '8QP' => 'E02005835',
        '8QQ' => 'E02005835',
        '8QR' => 'E02005835',
        '8QS' => 'E02005835',
        '8QT' => 'E02005835',
        '8QU' => 'E02005835',
        '8QW' => 'E02005835',
        '8QX' => 'E02005835',
        '8QY' => 'E02005835',
        '8QZ' => 'E02005835',
        '8RA' => 'E02005835',
        '8RB' => 'E02005835',
        '8RD' => 'E02005835',
        '8RE' => 'E02005835',
        '8RF' => 'E02005835',
        '8RG' => 'E02005835',
        '8RH' => 'E02005835',
        '8RJ' => 'E02005835',
        '8RL' => 'E02005835',
        '8RN' => 'E02005835',
        '8RP' => 'E02005835',
        '8RQ' => 'E02005835',
        '8RR' => 'E02005835',
        '8RS' => 'E02005835',
        '8RT' => 'E02005835',
        '8RU' => 'E02005835',
        '8RW' => 'E02005835',
        '8RX' => 'E02005835',
        '8RY' => 'E02005835',
        '8RZ' => 'E02005835',
        '8SA' => 'E02005838',
        '8SB' => 'E02005835',
        '8SD' => 'E02005835',
        '8SE' => 'E02005835',
        '8SF' => 'E02005835',
        '8SG' => 'E02005835',
        '8SH' => 'E02005835',
        '8SJ' => 'E02005835',
        '8SL' => 'E02005838',
        '8SN' => 'E02005835',
        '8SP' => 'E02005835',
        '8SQ' => 'E02005835',
        '8SR' => 'E02005835',
        '8ST' => 'E02005835',
        '8TA' => 'E02005835',
        '8WA' => 'E02005835',
        '8WB' => 'E02005835',
        '8WD' => 'E02005835',
        '8WP' => 'E02005835',
        '8WQ' => 'E02005835',
        '8WR' => 'E02005835',
        '8WS' => 'E02005835',
        '8WT' => 'E02005835',
        '8WU' => 'E02005835',
        '8WW' => 'E02005835',
        '8WX' => 'E02005835',
        '8WY' => 'E02005835',
        '8WZ' => 'E02005835',
        '8XA' => 'E02005835',
        '8XB' => 'E02001560',
        '8XD' => 'E02005835',
        '8XE' => 'E02005835',
        '8XF' => 'E02005835',
        '8XG' => 'E02005835',
        '8XH' => 'E02005835',
        '8XJ' => 'E02005835',
        '8XL' => 'E02005835',
        '8XN' => 'E02001560',
        '8XP' => 'E02005835',
        '8XQ' => 'E02005835',
        '8XR' => 'E02005835',
        '9AA' => 'E02001577',
        '9AB' => 'E02001577',
        '9AD' => 'E02001571',
        '9AE' => 'E02001571',
        '9AF' => 'E02001577',
        '9AG' => 'E02001571',
        '9AH' => 'E02001577',
        '9AJ' => 'E02001577',
        '9AL' => 'E02001577',
        '9AN' => 'E02001577',
        '9AP' => 'E02001577',
        '9AQ' => 'E02001577',
        '9AR' => 'E02001577',
        '9AS' => 'E02001577',
        '9AT' => 'E02001577',
        '9AU' => 'E02001577',
        '9AW' => 'E02001577',
        '9AX' => 'E02001577',
        '9AY' => 'E02001577',
        '9AZ' => 'E02001577',
        '9BA' => 'E02001577',
        '9BB' => 'E02001577',
        '9BD' => 'E02001577',
        '9BE' => 'E02001577',
        '9BF' => 'E02001577',
        '9BG' => 'E02001577',
        '9BH' => 'E02001577',
        '9BJ' => 'E02001577',
        '9BL' => 'E02001577',
        '9BN' => 'E02001577',
        '9BP' => 'E02001577',
        '9BQ' => 'E02001577',
        '9BS' => 'E02001577',
        '9BT' => 'E02001577',
        '9BU' => 'E02001577',
        '9BW' => 'E02001577',
        '9BX' => 'E02001577',
        '9BY' => 'E02001577',
        '9BZ' => 'E02001577',
        '9DA' => 'E02001577',
        '9DB' => 'E02001577',
        '9DD' => 'E02001577',
        '9DE' => 'E02001577',
        '9DF' => 'E02001577',
        '9DG' => 'E02001577',
        '9DH' => 'E02001577',
        '9DJ' => 'E02001577',
        '9DL' => 'E02001577',
        '9DN' => 'E02001577',
        '9DP' => 'E02001577',
        '9DQ' => 'E02001566',
        '9DR' => 'E02001572',
        '9DS' => 'E02001572',
        '9DT' => 'E02001577',
        '9DU' => 'E02001577',
        '9DW' => 'E02001577',
        '9DX' => 'E02001577',
        '9DY' => 'E02001577',
        '9DZ' => 'E02001577',
        '9EA' => 'E02001577',
        '9EB' => 'E02001577',
        '9ED' => 'E02001577',
        '9EE' => 'E02001577',
        '9EF' => 'E02001577',
        '9EG' => 'E02001577',
        '9EH' => 'E02001577',
        '9EJ' => 'E02001577',
        '9EL' => 'E02001577',
        '9EN' => 'E02001577',
        '9EP' => 'E02001577',
        '9EQ' => 'E02001577',
        '9ER' => 'E02001577',
        '9ES' => 'E02001577',
        '9ET' => 'E02001577',
        '9EU' => 'E02001577',
        '9EW' => 'E02001577',
        '9EX' => 'E02001577',
        '9EY' => 'E02001577',
        '9EZ' => 'E02001577',
        '9GA' => 'E02001577',
        '9GB' => 'E02001577',
        '9GD' => 'E02001571',
        '9HA' => 'E02005835',
        '9HB' => 'E02001577',
        '9HD' => 'E02001577',
        '9HE' => 'E02001577',
        '9HF' => 'E02001577',
        '9HG' => 'E02001577',
        '9HH' => 'E02001577',
        '9HJ' => 'E02001576',
        '9HL' => 'E02001577',
        '9HN' => 'E02001577',
        '9HP' => 'E02001577',
        '9HQ' => 'E02001577',
        '9HR' => 'E02001577',
        '9HS' => 'E02001577',
        '9HT' => 'E02001577',
        '9HU' => 'E02001577',
        '9HW' => 'E02001577',
        '9HX' => 'E02001577',
        '9HY' => 'E02001577',
        '9HZ' => 'E02001577',
        '9JA' => 'E02001577',
        '9JB' => 'E02001577',
        '9JD' => 'E02001577',
        '9JE' => 'E02001577',
        '9JF' => 'E02001577',
        '9JG' => 'E02001577',
        '9JH' => 'E02001577',
        '9JJ' => 'E02001577',
        '9JL' => 'E02001577',
        '9JN' => 'E02001577',
        '9JP' => 'E02001577',
        '9JQ' => 'E02001577',
        '9JR' => 'E02001577',
        '9JS' => 'E02001577',
        '9JT' => 'E02001577',
        '9JU' => 'E02001577',
        '9JW' => 'E02001577',
        '9JX' => 'E02001577',
        '9JY' => 'E02001577',
        '9JZ' => 'E02001577',
        '9LA' => 'E02001577',
        '9LB' => 'E02001577',
        '9LD' => 'E02001577',
        '9LE' => 'E02001577',
        '9LF' => 'E02001577',
        '9LG' => 'E02001577',
        '9LH' => 'E02001577',
        '9LJ' => 'E02001577',
        '9LL' => 'E02001577',
        '9LN' => 'E02001577',
        '9LP' => 'E02001577',
        '9LQ' => 'E02001577',
        '9LR' => 'E02001577',
        '9LS' => 'E02001577',
        '9LW' => 'E02001577',
        '9LX' => 'E02001577',
        '9LY' => 'E02001577',
        '9LZ' => 'E02001577',
        '9NA' => 'E02001577',
        '9NB' => 'E02001577',
        '9ND' => 'E02001577',
        '9NE' => 'E02001577',
        '9NF' => 'E02001577',
        '9NG' => 'E02001577',
        '9NH' => 'E02001577',
        '9NJ' => 'E02001577',
        '9NL' => 'E02001577',
        '9NN' => 'E02001577',
        '9NP' => 'E02001577',
        '9NQ' => 'E02001577',
        '9NR' => 'E02001577',
        '9NS' => 'E02001577',
        '9NT' => 'E02001577',
        '9NU' => 'E02001577',
        '9NX' => 'E02001577',
        '9NY' => 'E02001577',
        '9PA' => 'E02001577',
        '9PB' => 'E02001577',
        '9PD' => 'E02001577',
        '9PE' => 'E02001577',
        '9PF' => 'E02001577',
        '9PG' => 'E02001577',
        '9PH' => 'E02001597',
        '9PJ' => 'E02001597',
        '9PL' => 'E02001577',
        '9PN' => 'E02001577',
        '9PP' => 'E02001577',
        '9PQ' => 'E02001577',
        '9PR' => 'E02001577',
        '9PS' => 'E02001577',
        '9PT' => 'E02001577',
        '9PU' => 'E02001577',
        '9PW' => 'E02001577',
        '9PX' => 'E02001577',
        '9PY' => 'E02001577',
        '9PZ' => 'E02001577',
        '9QA' => 'E02001577',
        '9QB' => 'E02001577',
        '9QD' => 'E02001577',
        '9QE' => 'E02001577',
        '9QF' => 'E02001577',
        '9QH' => 'E02001577',
        '9QJ' => 'E02001577',
        '9QL' => 'E02001577',
        '9QN' => 'E02001577',
        '9QP' => 'E02001577',
        '9QQ' => 'E02001577',
        '9QR' => 'E02001577',
        '9QS' => 'E02001577',
        '9QT' => 'E02001577',
        '9QU' => 'E02001577',
        '9QW' => 'E02001577',
        '9QX' => 'E02001577',
        '9QY' => 'E02001577',
        '9QZ' => 'E02001577',
        '9RA' => 'E02001577',
        '9RB' => 'E02001577',
        '9RD' => 'E02001577',
        '9RE' => 'E02001577',
        '9RF' => 'E02001577',
        '9RG' => 'E02001597',
        '9RH' => 'E02001577',
        '9RJ' => 'E02001577',
        '9RL' => 'E02001577',
        '9RN' => 'E02001577',
        '9RP' => 'E02001577',
        '9RQ' => 'E02001577',
        '9RT' => 'E02001577',
        '9RU' => 'E02001577',
        '9RW' => 'E02001577',
        '9RX' => 'E02001577',
        '9RY' => 'E02001577',
        '9RZ' => 'E02001577',
        '9SA' => 'E02001577',
        '9SB' => 'E02001577',
        '9SD' => 'E02001577',
        '9TA' => 'E02001577',
        '9TB' => 'E02001577',
        '9TD' => 'E02001577',
        '9TE' => 'E02001577',
        '9TF' => 'E02001577',
        '9TG' => 'E02001577',
        '9TH' => 'E02001577',
        '9TZ' => 'E02001577',
        '9UA' => 'E02001577',
        '9UB' => 'E02001577',
        '9UD' => 'E02001577',
        '9UE' => 'E02001577',
        '9UF' => 'E02001577',
        '9UG' => 'E02001577',
        '9UH' => 'E02001577',
        '9UJ' => 'E02001577',
        '9UL' => 'E02001577',
        '9UN' => 'E02001577',
        '9UQ' => 'E02001577',
        '9US' => 'E02001577',
        '9UT' => 'E02001577',
        '9UU' => 'E02001577',
        '9UW' => 'E02001577',
        '9UX' => 'E02001577',
        '9UY' => 'E02001577',
        '9UZ' => 'E02001577',
        '9WA' => 'E02001577',
        '9WB' => 'E02001577',
        '9WD' => 'E02001577',
        '9WE' => 'E02001577',
        '9WF' => 'E02001577',
        '9WG' => 'E02001577',
        '9WL' => 'E02001577',
        '9WN' => 'E02001577',
        '9WP' => 'E02001577',
        '9WQ' => 'E02001577',
        '9WR' => 'E02001577',
        '9WS' => 'E02001577',
        '9WT' => 'E02001577',
        '9WU' => 'E02001577',
        '9WW' => 'E02001577',
        '9WX' => 'E02001560',
        '9WY' => 'E02001577',
        '9WZ' => 'E02001577',
        '9XA' => 'E02001560',
        '9XB' => 'E02001577',
        '9XD' => 'E02001577',
        '9XE' => 'E02001577',
        '9XF' => 'E02001560',
        '9XG' => 'E02001560',
        '9XH' => 'E02001560',
        '9XJ' => 'E02001577',
        '9XL' => 'E02001577',
        '9XN' => 'E02001560',
        '9XP' => 'E02001577',
        '9XQ' => 'E02001577',
        '9XR' => 'E02001577',
        '9XS' => 'E02001560',
        '9XT' => 'E02001577',
        '9XU' => 'E02001577',
        '9XW' => 'E02001577',
        '9XX' => 'E02001577',
        '9XY' => 'E02001560',
        '9XZ' => 'E02001577',
        '9YA' => 'E02001577',
        '9YB' => 'E02001577',
        '9YD' => 'E02001577',
        '9YE' => 'E02001560',
        '9YF' => 'E02001577',
        '9YG' => 'E02001577',
        '9YH' => 'E02001577',
        '9YJ' => 'E02001560',
        '9YL' => 'E02001577',
        '9YN' => 'E02001577',
        '9YP' => 'E02001577',
        '9YQ' => 'E02001577',
        '9YS' => 'E02001577',
        '9YT' => 'E02001577',
        '9YZ' => 'E02001560',
        '9ZW' => 'E02001577',
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
