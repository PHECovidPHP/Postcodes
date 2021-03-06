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
final class HG5
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02005769',
        '0AB' => 'E02005769',
        '0AD' => 'E02005769',
        '0AE' => 'E02005769',
        '0AF' => 'E02005769',
        '0AG' => 'E02005769',
        '0AH' => 'E02005772',
        '0AJ' => 'E02005769',
        '0AL' => 'E02005769',
        '0AN' => 'E02005769',
        '0AP' => 'E02005769',
        '0AQ' => 'E02005769',
        '0AR' => 'E02005769',
        '0AS' => 'E02005769',
        '0AT' => 'E02005769',
        '0AU' => 'E02005769',
        '0AW' => 'E02005769',
        '0AX' => 'E02005769',
        '0AY' => 'E02005769',
        '0AZ' => 'E02005769',
        '0BA' => 'E02005772',
        '0BB' => 'E02005769',
        '0BD' => 'E02005769',
        '0BE' => 'E02005772',
        '0BG' => 'E02005772',
        '0BH' => 'E02005769',
        '0BJ' => 'E02005769',
        '0BL' => 'E02005769',
        '0BN' => 'E02005769',
        '0BP' => 'E02005769',
        '0BQ' => 'E02005772',
        '0BS' => 'E02005769',
        '0BT' => 'E02005769',
        '0BU' => 'E02005769',
        '0BW' => 'E02005769',
        '0BX' => 'E02005769',
        '0BY' => 'E02005769',
        '0BZ' => 'E02005769',
        '0DA' => 'E02005769',
        '0DB' => 'E02005769',
        '0DD' => 'E02005769',
        '0DE' => 'E02005769',
        '0DF' => 'E02005769',
        '0DG' => 'E02005769',
        '0DH' => 'E02005769',
        '0DJ' => 'E02005769',
        '0DL' => 'E02005769',
        '0DN' => 'E02005769',
        '0DP' => 'E02005769',
        '0DQ' => 'E02005772',
        '0DR' => 'E02005769',
        '0DS' => 'E02005769',
        '0DT' => 'E02005769',
        '0DU' => 'E02005772',
        '0DW' => 'E02005769',
        '0DX' => 'E02005769',
        '0DY' => 'E02005769',
        '0DZ' => 'E02005772',
        '0EA' => 'E02005769',
        '0EB' => 'E02005769',
        '0ED' => 'E02005769',
        '0EE' => 'E02005769',
        '0EF' => 'E02005769',
        '0EG' => 'E02005769',
        '0EH' => 'E02005769',
        '0EJ' => 'E02005769',
        '0EL' => 'E02005769',
        '0EN' => 'E02005769',
        '0EP' => 'E02005769',
        '0EQ' => 'E02005769',
        '0ER' => 'E02005769',
        '0ES' => 'E02005769',
        '0ET' => 'E02005769',
        '0EU' => 'E02005769',
        '0EW' => 'E02005769',
        '0EX' => 'E02005769',
        '0EY' => 'E02005769',
        '0EZ' => 'E02005769',
        '0FA' => 'E02005769',
        '0FB' => 'E02005772',
        '0FD' => 'E02005769',
        '0FE' => 'E02005767',
        '0FF' => 'E02005765',
        '0FH' => 'E02005769',
        '0FJ' => 'E02005769',
        '0HA' => 'E02005769',
        '0HB' => 'E02005769',
        '0HD' => 'E02005769',
        '0HE' => 'E02005769',
        '0HF' => 'E02005769',
        '0HG' => 'E02005769',
        '0HH' => 'E02005769',
        '0HJ' => 'E02005769',
        '0HL' => 'E02005769',
        '0HN' => 'E02005769',
        '0HP' => 'E02005769',
        '0HQ' => 'E02005772',
        '0HR' => 'E02005769',
        '0HS' => 'E02005769',
        '0HT' => 'E02005772',
        '0HU' => 'E02005772',
        '0HW' => 'E02005769',
        '0HX' => 'E02005772',
        '0HY' => 'E02005769',
        '0HZ' => 'E02005769',
        '0JA' => 'E02005769',
        '0JB' => 'E02005769',
        '0JD' => 'E02005769',
        '0JE' => 'E02005769',
        '0JF' => 'E02005772',
        '0JG' => 'E02005769',
        '0JH' => 'E02005769',
        '0JJ' => 'E02005769',
        '0JL' => 'E02005769',
        '0JN' => 'E02005769',
        '0JP' => 'E02005769',
        '0JQ' => 'E02005769',
        '0JR' => 'E02005769',
        '0JS' => 'E02005769',
        '0JT' => 'E02005769',
        '0JU' => 'E02005769',
        '0JW' => 'E02005769',
        '0JX' => 'E02005769',
        '0JY' => 'E02005769',
        '0JZ' => 'E02005769',
        '0LA' => 'E02005769',
        '0LB' => 'E02005769',
        '0LD' => 'E02005769',
        '0LE' => 'E02005769',
        '0LF' => 'E02005769',
        '0LG' => 'E02005769',
        '0LH' => 'E02005769',
        '0LJ' => 'E02005769',
        '0LL' => 'E02005769',
        '0LN' => 'E02005769',
        '0LP' => 'E02005772',
        '0LQ' => 'E02005769',
        '0LR' => 'E02005772',
        '0LS' => 'E02005772',
        '0LT' => 'E02005767',
        '0LU' => 'E02005772',
        '0LW' => 'E02005769',
        '0LX' => 'E02005767',
        '0LY' => 'E02005767',
        '0LZ' => 'E02005767',
        '0NA' => 'E02005767',
        '0NB' => 'E02005767',
        '0ND' => 'E02005767',
        '0NE' => 'E02005769',
        '0NF' => 'E02005772',
        '0NG' => 'E02005769',
        '0NH' => 'E02005769',
        '0NJ' => 'E02005767',
        '0NL' => 'E02005767',
        '0NN' => 'E02005767',
        '0NP' => 'E02005767',
        '0NQ' => 'E02005772',
        '0NR' => 'E02005767',
        '0NS' => 'E02005767',
        '0NT' => 'E02005769',
        '0NU' => 'E02005769',
        '0NW' => 'E02005767',
        '0NX' => 'E02005767',
        '0NY' => 'E02005772',
        '0NZ' => 'E02005772',
        '0PA' => 'E02005767',
        '0PB' => 'E02005769',
        '0PD' => 'E02005769',
        '0PE' => 'E02005769',
        '0PF' => 'E02005769',
        '0PG' => 'E02005769',
        '0PH' => 'E02005767',
        '0PJ' => 'E02005769',
        '0PL' => 'E02005769',
        '0PN' => 'E02005769',
        '0PP' => 'E02005769',
        '0PQ' => 'E02005769',
        '0PR' => 'E02005767',
        '0PS' => 'E02005769',
        '0PT' => 'E02005769',
        '0PU' => 'E02005772',
        '0PW' => 'E02005769',
        '0PX' => 'E02005772',
        '0PY' => 'E02005769',
        '0PZ' => 'E02005765',
        '0QA' => 'E02005765',
        '0QB' => 'E02005765',
        '0QD' => 'E02005765',
        '0QE' => 'E02005769',
        '0QF' => 'E02005767',
        '0QG' => 'E02005767',
        '0QH' => 'E02005765',
        '0QJ' => 'E02005765',
        '0QL' => 'E02005767',
        '0QN' => 'E02005765',
        '0QP' => 'E02005765',
        '0QQ' => 'E02005765',
        '0QR' => 'E02005765',
        '0QS' => 'E02005765',
        '0QT' => 'E02005765',
        '0QU' => 'E02005765',
        '0QW' => 'E02005765',
        '0QX' => 'E02005765',
        '0QY' => 'E02005765',
        '0QZ' => 'E02005765',
        '0RA' => 'E02005765',
        '0RB' => 'E02005765',
        '0RD' => 'E02005765',
        '0RE' => 'E02005765',
        '0RF' => 'E02005765',
        '0RG' => 'E02005765',
        '0RH' => 'E02005765',
        '0RJ' => 'E02005776',
        '0RL' => 'E02005765',
        '0RN' => 'E02005765',
        '0RP' => 'E02005772',
        '0RQ' => 'E02005765',
        '0RR' => 'E02005776',
        '0RS' => 'E02005772',
        '0RT' => 'E02005776',
        '0RU' => 'E02005776',
        '0RW' => 'E02005765',
        '0RX' => 'E02005772',
        '0RY' => 'E02005765',
        '0RZ' => 'E02005765',
        '0SA' => 'E02005765',
        '0SB' => 'E02005776',
        '0SD' => 'E02005776',
        '0SE' => 'E02005776',
        '0SF' => 'E02005776',
        '0SG' => 'E02005776',
        '0SH' => 'E02005769',
        '0SJ' => 'E02005769',
        '0SL' => 'E02005767',
        '0SN' => 'E02005772',
        '0SP' => 'E02005772',
        '0SQ' => 'E02005769',
        '0SR' => 'E02005772',
        '0SS' => 'E02005772',
        '0ST' => 'E02005772',
        '0SU' => 'E02005772',
        '0SW' => 'E02005772',
        '0SX' => 'E02005772',
        '0SY' => 'E02005772',
        '0SZ' => 'E02005767',
        '0TA' => 'E02005772',
        '0TB' => 'E02005769',
        '0TD' => 'E02005772',
        '0TE' => 'E02005769',
        '0TF' => 'E02005769',
        '0TG' => 'E02005769',
        '0TH' => 'E02005769',
        '0TJ' => 'E02005769',
        '0TL' => 'E02005769',
        '0TN' => 'E02005769',
        '0TP' => 'E02005769',
        '0TQ' => 'E02005765',
        '0TR' => 'E02005767',
        '0TS' => 'E02005772',
        '0TT' => 'E02005772',
        '0TU' => 'E02005772',
        '0TX' => 'E02005772',
        '0TY' => 'E02005772',
        '0TZ' => 'E02005772',
        '0UA' => 'E02005769',
        '0UB' => 'E02005769',
        '0UD' => 'E02005769',
        '0UE' => 'E02005769',
        '0UF' => 'E02005767',
        '0UG' => 'E02005767',
        '0UH' => 'E02005767',
        '0UJ' => 'E02005767',
        '0UL' => 'E02005767',
        '0UN' => 'E02005767',
        '0US' => 'E02005769',
        '0UT' => 'E02005769',
        '0UU' => 'E02005769',
        '0UW' => 'E02005769',
        '0UX' => 'E02005769',
        '0UY' => 'E02005769',
        '0UZ' => 'E02005767',
        '0WA' => 'E02005767',
        '0WB' => 'E02005769',
        '0WD' => 'E02005769',
        '0WE' => 'E02005769',
        '0WF' => 'E02005767',
        '0WG' => 'E02005767',
        '0WH' => 'E02005767',
        '0WJ' => 'E02005767',
        '0WL' => 'E02005767',
        '0WN' => 'E02005769',
        '0WP' => 'E02005769',
        '0WQ' => 'E02005769',
        '0WR' => 'E02005769',
        '0WS' => 'E02005769',
        '0WT' => 'E02005769',
        '0WU' => 'E02005769',
        '0WW' => 'E02005769',
        '0WX' => 'E02005769',
        '0WY' => 'E02005769',
        '0WZ' => 'E02005769',
        '0XA' => 'E02005769',
        '0XB' => 'E02005772',
        '0XD' => 'E02005772',
        '0XE' => 'E02005769',
        '0XF' => 'E02005769',
        '0XG' => 'E02005769',
        '0XH' => 'E02005769',
        '0XJ' => 'E02005776',
        '0XL' => 'E02005769',
        '0XN' => 'E02005772',
        '0XP' => 'E02005769',
        '0XQ' => 'E02005772',
        '0XR' => 'E02005769',
        '0XS' => 'E02005769',
        '0XT' => 'E02005769',
        '0XU' => 'E02005769',
        '0XW' => 'E02005772',
        '0XX' => 'E02005769',
        '0XY' => 'E02005769',
        '0XZ' => 'E02005769',
        '0YA' => 'E02005772',
        '0YB' => 'E02005769',
        '0YD' => 'E02005772',
        '0YE' => 'E02005772',
        '0YF' => 'E02005772',
        '0YG' => 'E02005769',
        '0YN' => 'E02005769',
        '0YQ' => 'E02005769',
        '0YR' => 'E02005769',
        '0YT' => 'E02005772',
        '0YZ' => 'E02005769',
        '0ZW' => 'E02005769',
        '5AD' => 'E02005769',
        '5AF' => 'E02005769',
        '5AG' => 'E02005769',
        '5AH' => 'E02005769',
        '5AL' => 'E02005769',
        '5AP' => 'E02005769',
        '5AR' => 'E02005769',
        '5AS' => 'E02005769',
        '5AT' => 'E02005769',
        '5AU' => 'E02005769',
        '5AW' => 'E02005769',
        '5AX' => 'E02005769',
        '5AY' => 'E02005769',
        '5AZ' => 'E02005769',
        '5BA' => 'E02005769',
        '5BB' => 'E02005769',
        '5BD' => 'E02005769',
        '5BE' => 'E02005769',
        '5BF' => 'E02005769',
        '5BG' => 'E02005769',
        '5BH' => 'E02005769',
        '5BJ' => 'E02005769',
        '5BL' => 'E02005769',
        '5BN' => 'E02005769',
        '5BP' => 'E02005769',
        '5BQ' => 'E02005769',
        '5BR' => 'E02005769',
        '5BS' => 'E02005769',
        '5BT' => 'E02005769',
        '5BU' => 'E02005769',
        '5BW' => 'E02005769',
        '5BX' => 'E02005769',
        '5BY' => 'E02005769',
        '5BZ' => 'E02005769',
        '5DA' => 'E02005769',
        '5DB' => 'E02005769',
        '8AA' => 'E02005769',
        '8AB' => 'E02005769',
        '8AD' => 'E02005769',
        '8AE' => 'E02005769',
        '8AF' => 'E02005769',
        '8AG' => 'E02005769',
        '8AH' => 'E02005769',
        '8AJ' => 'E02005769',
        '8AL' => 'E02005769',
        '8AN' => 'E02005769',
        '8AP' => 'E02005772',
        '8AQ' => 'E02005769',
        '8AR' => 'E02005769',
        '8AS' => 'E02005769',
        '8AT' => 'E02005769',
        '8AU' => 'E02005769',
        '8AW' => 'E02005769',
        '8AX' => 'E02005769',
        '8AY' => 'E02005769',
        '8AZ' => 'E02005769',
        '8BA' => 'E02005769',
        '8BB' => 'E02005769',
        '8BD' => 'E02005769',
        '8BE' => 'E02005769',
        '8BF' => 'E02005769',
        '8BG' => 'E02005769',
        '8BH' => 'E02005769',
        '8BJ' => 'E02005769',
        '8BL' => 'E02005769',
        '8BN' => 'E02005769',
        '8BP' => 'E02005769',
        '8BQ' => 'E02005769',
        '8BS' => 'E02005772',
        '8BT' => 'E02005769',
        '8BU' => 'E02005769',
        '8BW' => 'E02005769',
        '8BX' => 'E02005769',
        '8BY' => 'E02005769',
        '8BZ' => 'E02005769',
        '8DA' => 'E02005767',
        '8DB' => 'E02005767',
        '8DD' => 'E02005769',
        '8DE' => 'E02005769',
        '8DF' => 'E02005769',
        '8DG' => 'E02005769',
        '8DH' => 'E02005769',
        '8DJ' => 'E02005769',
        '8DL' => 'E02005769',
        '8DN' => 'E02005769',
        '8DP' => 'E02005769',
        '8DQ' => 'E02005769',
        '8DR' => 'E02005769',
        '8DS' => 'E02005769',
        '8DT' => 'E02005769',
        '8DU' => 'E02005769',
        '8DW' => 'E02005769',
        '8DX' => 'E02005769',
        '8DY' => 'E02005769',
        '8DZ' => 'E02005769',
        '8EA' => 'E02005769',
        '8EB' => 'E02005769',
        '8ED' => 'E02005769',
        '8EE' => 'E02005769',
        '8EF' => 'E02005772',
        '8EG' => 'E02005772',
        '8EH' => 'E02005772',
        '8EJ' => 'E02005772',
        '8EL' => 'E02005772',
        '8EN' => 'E02005772',
        '8EP' => 'E02005772',
        '8EQ' => 'E02005772',
        '8ER' => 'E02005772',
        '8ES' => 'E02005772',
        '8ET' => 'E02005772',
        '8EU' => 'E02005772',
        '8EW' => 'E02005772',
        '8EX' => 'E02005772',
        '8EY' => 'E02005772',
        '8EZ' => 'E02005772',
        '8FA' => 'E02005772',
        '8FB' => 'E02005776',
        '8FD' => 'E02005769',
        '8FE' => 'E02005769',
        '8FG' => 'E02005769',
        '8HA' => 'E02005772',
        '8HB' => 'E02005772',
        '8HD' => 'E02005772',
        '8HE' => 'E02005772',
        '8HF' => 'E02005772',
        '8HG' => 'E02005772',
        '8HH' => 'E02005772',
        '8HJ' => 'E02005772',
        '8HL' => 'E02005772',
        '8HN' => 'E02005772',
        '8HP' => 'E02005772',
        '8HQ' => 'E02005772',
        '8HR' => 'E02005772',
        '8HS' => 'E02005772',
        '8HT' => 'E02005772',
        '8HU' => 'E02005772',
        '8HW' => 'E02005772',
        '8HX' => 'E02005772',
        '8HY' => 'E02005772',
        '8HZ' => 'E02005769',
        '8JA' => 'E02005769',
        '8JB' => 'E02005769',
        '8JD' => 'E02005769',
        '8JE' => 'E02005769',
        '8JF' => 'E02005769',
        '8JG' => 'E02005772',
        '8JH' => 'E02005772',
        '8JJ' => 'E02005772',
        '8JL' => 'E02005769',
        '8JN' => 'E02005772',
        '8JP' => 'E02005772',
        '8JQ' => 'E02005769',
        '8JR' => 'E02005772',
        '8JS' => 'E02005772',
        '8JT' => 'E02005772',
        '8JU' => 'E02005772',
        '8JW' => 'E02005772',
        '8JX' => 'E02005777',
        '8JY' => 'E02005772',
        '8JZ' => 'E02005772',
        '8LA' => 'E02005772',
        '8LB' => 'E02005772',
        '8LD' => 'E02005772',
        '8LE' => 'E02005769',
        '8LF' => 'E02005772',
        '8LG' => 'E02005772',
        '8LH' => 'E02005772',
        '8LJ' => 'E02005772',
        '8LL' => 'E02005772',
        '8LN' => 'E02005772',
        '8LP' => 'E02005772',
        '8LQ' => 'E02005772',
        '8LR' => 'E02005772',
        '8LS' => 'E02005772',
        '8LT' => 'E02005777',
        '8LU' => 'E02005777',
        '8LW' => 'E02005772',
        '8LX' => 'E02005772',
        '8LY' => 'E02005772',
        '8LZ' => 'E02005772',
        '8NA' => 'E02005772',
        '8NB' => 'E02005781',
        '8ND' => 'E02005781',
        '8NE' => 'E02005772',
        '8NF' => 'E02005772',
        '8NG' => 'E02005772',
        '8NH' => 'E02005772',
        '8NJ' => 'E02005772',
        '8NL' => 'E02005772',
        '8NN' => 'E02005772',
        '8NP' => 'E02005772',
        '8NQ' => 'E02005772',
        '8NR' => 'E02005772',
        '8NS' => 'E02005772',
        '8NT' => 'E02005772',
        '8NU' => 'E02005772',
        '8NW' => 'E02005772',
        '8NX' => 'E02005776',
        '8NY' => 'E02005772',
        '8NZ' => 'E02005772',
        '8PA' => 'E02005776',
        '8PB' => 'E02005776',
        '8PD' => 'E02005776',
        '8PE' => 'E02005776',
        '8PF' => 'E02005769',
        '8PG' => 'E02005772',
        '8PH' => 'E02005769',
        '8PJ' => 'E02005772',
        '8PL' => 'E02005772',
        '8PN' => 'E02005769',
        '8PP' => 'E02005769',
        '8PQ' => 'E02005769',
        '8PR' => 'E02005772',
        '8PS' => 'E02005772',
        '8PT' => 'E02005772',
        '8PW' => 'E02005772',
        '8PX' => 'E02005772',
        '8PY' => 'E02005772',
        '8PZ' => 'E02005772',
        '8QA' => 'E02005772',
        '8QB' => 'E02005772',
        '8QD' => 'E02005772',
        '8TA' => 'E02005776',
        '8TB' => 'E02005776',
        '8TE' => 'E02005769',
        '8TF' => 'E02005776',
        '8TG' => 'E02005776',
        '8TH' => 'E02005776',
        '8TJ' => 'E02005776',
        '8TL' => 'E02005776',
        '8TN' => 'E02005776',
        '8TW' => 'E02005769',
        '8UQ' => 'E02005769',
        '8UR' => 'E02005769',
        '8US' => 'E02005769',
        '8UT' => 'E02005769',
        '8UU' => 'E02005769',
        '8UW' => 'E02005769',
        '8UX' => 'E02005769',
        '8UY' => 'E02005769',
        '8UZ' => 'E02005769',
        '8WA' => 'E02005769',
        '8WB' => 'E02005769',
        '8WD' => 'E02005769',
        '8WE' => 'E02005769',
        '8WF' => 'E02005769',
        '8WG' => 'E02005769',
        '8WH' => 'E02005769',
        '8WJ' => 'E02005769',
        '8WL' => 'E02005772',
        '8WN' => 'E02005769',
        '8WP' => 'E02005769',
        '8WQ' => 'E02005772',
        '8WR' => 'E02005769',
        '8WS' => 'E02005772',
        '8WT' => 'E02005769',
        '8WU' => 'E02005769',
        '8WW' => 'E02005769',
        '8WX' => 'E02005769',
        '8WY' => 'E02005772',
        '8WZ' => 'E02005769',
        '8XA' => 'E02005769',
        '8XB' => 'E02005769',
        '8XD' => 'E02005769',
        '8XE' => 'E02005769',
        '8XF' => 'E02005769',
        '8XG' => 'E02005769',
        '8XH' => 'E02005769',
        '8XJ' => 'E02005769',
        '8XL' => 'E02005769',
        '8XN' => 'E02005769',
        '8XP' => 'E02005769',
        '8XQ' => 'E02005769',
        '8XR' => 'E02005769',
        '8XS' => 'E02005769',
        '8XT' => 'E02005769',
        '8XU' => 'E02005769',
        '8XW' => 'E02005769',
        '8XX' => 'E02005772',
        '8XY' => 'E02005769',
        '8XZ' => 'E02005769',
        '8YA' => 'E02005772',
        '8YB' => 'E02005769',
        '8YD' => 'E02005769',
        '8YE' => 'E02005769',
        '8YF' => 'E02005769',
        '8YG' => 'E02005769',
        '8YH' => 'E02005769',
        '8YJ' => 'E02005769',
        '8YL' => 'E02005769',
        '8YQ' => 'E02005769',
        '8YW' => 'E02005769',
        '8YX' => 'E02005769',
        '8YZ' => 'E02005769',
        '8ZB' => 'E02005769',
        '8ZD' => 'E02005769',
        '8ZE' => 'E02005769',
        '8ZF' => 'E02005769',
        '8ZG' => 'E02005769',
        '8ZH' => 'E02005769',
        '8ZL' => 'E02005769',
        '8ZN' => 'E02005769',
        '8ZP' => 'E02005769',
        '8ZQ' => 'E02005769',
        '8ZS' => 'E02005769',
        '8ZT' => 'E02005769',
        '8ZU' => 'E02005769',
        '8ZW' => 'E02005769',
        '8ZX' => 'E02005769',
        '9AA' => 'E02005769',
        '9AB' => 'E02005769',
        '9AD' => 'E02005769',
        '9AE' => 'E02005769',
        '9AF' => 'E02005769',
        '9AG' => 'E02005769',
        '9AH' => 'E02005767',
        '9AJ' => 'E02005767',
        '9AL' => 'E02005767',
        '9AN' => 'E02005769',
        '9AP' => 'E02005767',
        '9AQ' => 'E02005767',
        '9AR' => 'E02005769',
        '9AS' => 'E02005769',
        '9AT' => 'E02005769',
        '9AU' => 'E02005769',
        '9AW' => 'E02005769',
        '9AX' => 'E02005767',
        '9AY' => 'E02005767',
        '9AZ' => 'E02005769',
        '9BA' => 'E02005767',
        '9BB' => 'E02005767',
        '9BD' => 'E02005767',
        '9BE' => 'E02005767',
        '9BG' => 'E02005767',
        '9BH' => 'E02005767',
        '9BJ' => 'E02005767',
        '9BL' => 'E02005767',
        '9BN' => 'E02005767',
        '9BP' => 'E02005767',
        '9BQ' => 'E02005767',
        '9BS' => 'E02005767',
        '9BT' => 'E02005767',
        '9BU' => 'E02005767',
        '9BW' => 'E02005767',
        '9BX' => 'E02005767',
        '9BY' => 'E02005767',
        '9BZ' => 'E02005767',
        '9DA' => 'E02005767',
        '9DB' => 'E02005767',
        '9DD' => 'E02005767',
        '9DE' => 'E02005767',
        '9DF' => 'E02005767',
        '9DG' => 'E02005767',
        '9DH' => 'E02005767',
        '9DJ' => 'E02005767',
        '9DL' => 'E02005767',
        '9DN' => 'E02005767',
        '9DP' => 'E02005767',
        '9DQ' => 'E02005767',
        '9DR' => 'E02005767',
        '9DS' => 'E02005767',
        '9DT' => 'E02005767',
        '9DU' => 'E02005767',
        '9DW' => 'E02005767',
        '9DX' => 'E02005767',
        '9DY' => 'E02005767',
        '9DZ' => 'E02005767',
        '9EA' => 'E02005767',
        '9EB' => 'E02005767',
        '9ED' => 'E02005767',
        '9EF' => 'E02005767',
        '9EG' => 'E02005767',
        '9EH' => 'E02005767',
        '9EJ' => 'E02005767',
        '9EL' => 'E02005767',
        '9EN' => 'E02005767',
        '9EP' => 'E02005767',
        '9EQ' => 'E02005767',
        '9ER' => 'E02005767',
        '9ES' => 'E02005767',
        '9ET' => 'E02005767',
        '9EU' => 'E02005767',
        '9EW' => 'E02005767',
        '9EX' => 'E02005767',
        '9HA' => 'E02005767',
        '9HB' => 'E02005767',
        '9HD' => 'E02005767',
        '9HE' => 'E02005767',
        '9HF' => 'E02005767',
        '9HG' => 'E02005767',
        '9HH' => 'E02005767',
        '9HJ' => 'E02005767',
        '9HL' => 'E02005767',
        '9HN' => 'E02005767',
        '9HP' => 'E02005767',
        '9HQ' => 'E02005767',
        '9HR' => 'E02005767',
        '9HS' => 'E02005767',
        '9HT' => 'E02005767',
        '9HU' => 'E02005767',
        '9HW' => 'E02005767',
        '9HX' => 'E02005767',
        '9HY' => 'E02005767',
        '9HZ' => 'E02005767',
        '9JA' => 'E02005767',
        '9JB' => 'E02005767',
        '9JD' => 'E02005767',
        '9JE' => 'E02005767',
        '9JF' => 'E02005767',
        '9JG' => 'E02005765',
        '9JH' => 'E02005767',
        '9JJ' => 'E02005767',
        '9JL' => 'E02005767',
        '9JN' => 'E02005767',
        '9JP' => 'E02005767',
        '9JQ' => 'E02005767',
        '9JR' => 'E02005767',
        '9JS' => 'E02005767',
        '9JT' => 'E02005767',
        '9JU' => 'E02005767',
        '9JW' => 'E02005767',
        '9JX' => 'E02005767',
        '9JY' => 'E02005767',
        '9JZ' => 'E02005767',
        '9LA' => 'E02005767',
        '9LB' => 'E02005767',
        '9LD' => 'E02005767',
        '9LE' => 'E02005767',
        '9LF' => 'E02005767',
        '9LG' => 'E02005767',
        '9LH' => 'E02005767',
        '9LJ' => 'E02005767',
        '9LL' => 'E02005767',
        '9LN' => 'E02005763',
        '9LP' => 'E02005767',
        '9LQ' => 'E02005767',
        '9LR' => 'E02005767',
        '9LS' => 'E02005767',
        '9LT' => 'E02005767',
        '9LU' => 'E02005767',
        '9LW' => 'E02005767',
        '9LX' => 'E02005767',
        '9LY' => 'E02005767',
        '9LZ' => 'E02005767',
        '9NA' => 'E02005767',
        '9NB' => 'E02005767',
        '9ND' => 'E02005767',
        '9NE' => 'E02005767',
        '9NF' => 'E02005767',
        '9NG' => 'E02005767',
        '9NH' => 'E02005767',
        '9NJ' => 'E02005767',
        '9NL' => 'E02005767',
        '9NQ' => 'E02005767',
        '9UZ' => 'E02005769',
        '9WA' => 'E02005769',
        '9WB' => 'E02005769',
        '9WD' => 'E02005769',
        '9WE' => 'E02005769',
        '9WF' => 'E02005769',
        '9WG' => 'E02005769',
        '9WH' => 'E02005769',
        '9WJ' => 'E02005769',
        '9WL' => 'E02005769',
        '9WN' => 'E02005769',
        '9WP' => 'E02005769',
        '9WQ' => 'E02005769',
        '9WR' => 'E02005767',
        '9WS' => 'E02005769',
        '9WT' => 'E02005769',
        '9WU' => 'E02005769',
        '9WW' => 'E02005767',
        '9WX' => 'E02005769',
        '9WY' => 'E02005769',
        '9WZ' => 'E02005769',
        '9XA' => 'E02005769',
        '9XB' => 'E02005767',
        '9XD' => 'E02005767',
        '9XE' => 'E02005767',
        '9XF' => 'E02005767',
        '9XG' => 'E02005767',
        '9XH' => 'E02005767',
        '9XJ' => 'E02005769',
        '9XL' => 'E02005767',
        '9XN' => 'E02005769',
        '9XP' => 'E02005767',
        '9XQ' => 'E02005769',
        '9XR' => 'E02005767',
        '9XS' => 'E02005767',
        '9XT' => 'E02005767',
        '9XU' => 'E02005769',
        '9XW' => 'E02005769',
        '9XX' => 'E02005769',
        '9XY' => 'E02005769',
        '9XZ' => 'E02005769',
        '9YA' => 'E02005769',
        '9YB' => 'E02005769',
        '9YD' => 'E02005769',
        '9YE' => 'E02005769',
        '9YF' => 'E02005769',
        '9ZS' => 'E02005769',
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
