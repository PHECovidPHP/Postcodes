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
final class HU12
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02002714',
        '0AB' => 'E02002714',
        '0AD' => 'E02002714',
        '0AE' => 'E02002714',
        '0AF' => 'E02002714',
        '0AG' => 'E02002714',
        '0AH' => 'E02002714',
        '0AJ' => 'E02002714',
        '0AL' => 'E02002714',
        '0AN' => 'E02002714',
        '0AP' => 'E02002714',
        '0AQ' => 'E02002714',
        '0AR' => 'E02002722',
        '0AS' => 'E02002714',
        '0AT' => 'E02002714',
        '0AU' => 'E02002722',
        '0AW' => 'E02002722',
        '0AX' => 'E02002714',
        '0BA' => 'E02002722',
        '0BE' => 'E02002714',
        '0BG' => 'E02002714',
        '0BH' => 'E02002714',
        '0BJ' => 'E02002714',
        '0BL' => 'E02002714',
        '0BN' => 'E02002714',
        '0BP' => 'E02002714',
        '0BS' => 'E02002714',
        '0BT' => 'E02002714',
        '0BU' => 'E02002714',
        '0BX' => 'E02002714',
        '0BY' => 'E02002714',
        '0BZ' => 'E02002714',
        '0DA' => 'E02002714',
        '0DB' => 'E02002714',
        '0DD' => 'E02002714',
        '0DE' => 'E02002714',
        '0DG' => 'E02002714',
        '0DH' => 'E02002714',
        '0DJ' => 'E02002714',
        '0DN' => 'E02002714',
        '0DP' => 'E02002714',
        '0DQ' => 'E02002714',
        '0DR' => 'E02002714',
        '0DS' => 'E02002714',
        '0DT' => 'E02002714',
        '0DU' => 'E02002714',
        '0DX' => 'E02002714',
        '0DY' => 'E02002714',
        '0DZ' => 'E02002714',
        '0EA' => 'E02002714',
        '0EB' => 'E02002714',
        '0ED' => 'E02002714',
        '0EE' => 'E02002714',
        '0EF' => 'E02002714',
        '0EG' => 'E02002714',
        '0FD' => 'E02002722',
        '0GA' => 'E02002714',
        '0HA' => 'E02002714',
        '0HB' => 'E02002714',
        '0HD' => 'E02002714',
        '0HE' => 'E02002714',
        '0HF' => 'E02002714',
        '0HG' => 'E02002714',
        '0HH' => 'E02002714',
        '0HJ' => 'E02002714',
        '0HL' => 'E02002714',
        '0HN' => 'E02002714',
        '0HP' => 'E02002714',
        '0HQ' => 'E02002714',
        '0HR' => 'E02002714',
        '0HS' => 'E02002714',
        '0HT' => 'E02002714',
        '0HU' => 'E02002714',
        '0HW' => 'E02002714',
        '0HX' => 'E02002714',
        '0HY' => 'E02002714',
        '0HZ' => 'E02002714',
        '0JA' => 'E02002714',
        '0JB' => 'E02002714',
        '0JD' => 'E02002714',
        '0JE' => 'E02002714',
        '0JF' => 'E02002714',
        '0JG' => 'E02002714',
        '0JH' => 'E02002714',
        '0JJ' => 'E02002714',
        '0JL' => 'E02002714',
        '0JN' => 'E02002714',
        '0JQ' => 'E02002714',
        '0JR' => 'E02002714',
        '0LA' => 'E02002714',
        '0LB' => 'E02002714',
        '0LD' => 'E02002714',
        '0LE' => 'E02002714',
        '0LF' => 'E02002714',
        '0LG' => 'E02002714',
        '0LH' => 'E02002714',
        '0LJ' => 'E02002714',
        '0LL' => 'E02002714',
        '0LN' => 'E02002714',
        '0LP' => 'E02002714',
        '0LQ' => 'E02002714',
        '0NA' => 'E02002722',
        '0NB' => 'E02002722',
        '0ND' => 'E02002722',
        '0NE' => 'E02002722',
        '0NF' => 'E02002722',
        '0NG' => 'E02002722',
        '0NH' => 'E02002722',
        '0NJ' => 'E02002722',
        '0NL' => 'E02002722',
        '0NN' => 'E02002722',
        '0NP' => 'E02002722',
        '0NQ' => 'E02002722',
        '0NR' => 'E02002714',
        '0NS' => 'E02002714',
        '0NT' => 'E02002722',
        '0NU' => 'E02002714',
        '0NW' => 'E02002722',
        '0NX' => 'E02002722',
        '0NY' => 'E02002722',
        '0NZ' => 'E02002722',
        '0PA' => 'E02002722',
        '0PB' => 'E02002722',
        '0PD' => 'E02002722',
        '0PE' => 'E02002722',
        '0PF' => 'E02002722',
        '0PG' => 'E02002722',
        '0PH' => 'E02002722',
        '0PJ' => 'E02002722',
        '0PL' => 'E02002722',
        '0PN' => 'E02002722',
        '0PP' => 'E02002722',
        '0PQ' => 'E02002722',
        '0PR' => 'E02002722',
        '0PS' => 'E02002722',
        '0PT' => 'E02002722',
        '0PU' => 'E02002722',
        '0PX' => 'E02002722',
        '0PY' => 'E02002722',
        '0PZ' => 'E02002722',
        '0QA' => 'E02002722',
        '0QB' => 'E02002722',
        '0QD' => 'E02002722',
        '0QE' => 'E02002722',
        '0QF' => 'E02002722',
        '0QG' => 'E02002722',
        '0QH' => 'E02002722',
        '0QJ' => 'E02002722',
        '0QL' => 'E02002714',
        '0QN' => 'E02002714',
        '0QP' => 'E02002714',
        '0QR' => 'E02002714',
        '0QS' => 'E02002714',
        '0QT' => 'E02002714',
        '0QW' => 'E02002714',
        '0RA' => 'E02002722',
        '0RB' => 'E02002722',
        '0RD' => 'E02002722',
        '0RE' => 'E02002722',
        '0RF' => 'E02002722',
        '0RG' => 'E02002722',
        '0RH' => 'E02002722',
        '0RJ' => 'E02002722',
        '0RL' => 'E02002722',
        '0RN' => 'E02002722',
        '0RP' => 'E02002722',
        '0RQ' => 'E02002722',
        '0RR' => 'E02002722',
        '0RS' => 'E02002722',
        '0RT' => 'E02002722',
        '0RU' => 'E02002722',
        '0RW' => 'E02002722',
        '0RX' => 'E02002722',
        '0RY' => 'E02002722',
        '0RZ' => 'E02002722',
        '0SA' => 'E02002722',
        '0SB' => 'E02002722',
        '0SD' => 'E02002722',
        '0SE' => 'E02002722',
        '0SF' => 'E02002722',
        '0SG' => 'E02002722',
        '0SH' => 'E02002722',
        '0SJ' => 'E02002722',
        '0SL' => 'E02002722',
        '0SN' => 'E02002722',
        '0SP' => 'E02002722',
        '0SQ' => 'E02002722',
        '0SR' => 'E02002722',
        '0SS' => 'E02002722',
        '0ST' => 'E02002722',
        '0SU' => 'E02002722',
        '0SW' => 'E02002722',
        '0SX' => 'E02002722',
        '0SY' => 'E02002722',
        '0SZ' => 'E02002722',
        '0TA' => 'E02002722',
        '0TB' => 'E02002722',
        '0TD' => 'E02002722',
        '0TE' => 'E02002722',
        '0TF' => 'E02002722',
        '0TG' => 'E02002722',
        '0TH' => 'E02002722',
        '0TJ' => 'E02002722',
        '0TL' => 'E02002722',
        '0TN' => 'E02002722',
        '0TP' => 'E02002722',
        '0TQ' => 'E02002722',
        '0TR' => 'E02002722',
        '0TS' => 'E02002722',
        '0TT' => 'E02002722',
        '0TU' => 'E02002722',
        '0TW' => 'E02002722',
        '0TX' => 'E02002722',
        '0TY' => 'E02002722',
        '0TZ' => 'E02002722',
        '0UA' => 'E02002722',
        '0UB' => 'E02002722',
        '0UD' => 'E02002722',
        '0UE' => 'E02002722',
        '0UF' => 'E02002722',
        '0UG' => 'E02002722',
        '0UH' => 'E02002722',
        '0UP' => 'E02002722',
        '0UR' => 'E02002722',
        '0US' => 'E02002722',
        '0UT' => 'E02002722',
        '0UU' => 'E02002722',
        '0UX' => 'E02002722',
        '0UY' => 'E02002722',
        '0UZ' => 'E02002722',
        '0WA' => 'E02002722',
        '0WB' => 'E02002722',
        '0WD' => 'E02002722',
        '0WE' => 'E02002722',
        '0WF' => 'E02002722',
        '0WR' => 'E02002722',
        '0WS' => 'E02002722',
        '0WT' => 'E02002722',
        '0WU' => 'E02002722',
        '0WW' => 'E02002722',
        '0WX' => 'E02002722',
        '0WY' => 'E02002722',
        '0WZ' => 'E02002722',
        '0YA' => 'E02002677',
        '0YB' => 'E02002677',
        '0YD' => 'E02002722',
        '0YE' => 'E02002677',
        '0YF' => 'E02002722',
        '0YG' => 'E02002722',
        '0YH' => 'E02002722',
        '0YJ' => 'E02002722',
        '0YL' => 'E02002677',
        '0YN' => 'E02002677',
        '0YP' => 'E02002722',
        '0YQ' => 'E02002722',
        '0YR' => 'E02002677',
        '0YS' => 'E02002677',
        '0YT' => 'E02002677',
        '0YU' => 'E02002722',
        '0YW' => 'E02002722',
        '0YX' => 'E02002677',
        '0YY' => 'E02002722',
        '0YZ' => 'E02002722',
        '8AA' => 'E02002716',
        '8AB' => 'E02002716',
        '8AD' => 'E02002716',
        '8AE' => 'E02002716',
        '8AF' => 'E02002716',
        '8AG' => 'E02002716',
        '8AH' => 'E02002716',
        '8AJ' => 'E02002716',
        '8AL' => 'E02002716',
        '8AN' => 'E02002716',
        '8AP' => 'E02002716',
        '8AQ' => 'E02002716',
        '8AR' => 'E02002716',
        '8AS' => 'E02002716',
        '8AT' => 'E02002716',
        '8AU' => 'E02002716',
        '8AW' => 'E02002716',
        '8AX' => 'E02002716',
        '8AY' => 'E02002716',
        '8AZ' => 'E02002716',
        '8BA' => 'E02002716',
        '8BB' => 'E02002716',
        '8BD' => 'E02002716',
        '8BE' => 'E02002716',
        '8BG' => 'E02002716',
        '8BH' => 'E02002716',
        '8BJ' => 'E02002716',
        '8BL' => 'E02002712',
        '8BN' => 'E02002712',
        '8BP' => 'E02002712',
        '8BQ' => 'E02002712',
        '8BS' => 'E02002712',
        '8BT' => 'E02002712',
        '8BU' => 'E02002712',
        '8BW' => 'E02002712',
        '8BX' => 'E02002712',
        '8BY' => 'E02002712',
        '8BZ' => 'E02002712',
        '8DA' => 'E02002712',
        '8DB' => 'E02002712',
        '8DD' => 'E02002712',
        '8DE' => 'E02002712',
        '8DF' => 'E02002712',
        '8DG' => 'E02002712',
        '8DH' => 'E02002712',
        '8DJ' => 'E02002712',
        '8DL' => 'E02002712',
        '8DN' => 'E02002712',
        '8DP' => 'E02002712',
        '8DQ' => 'E02002712',
        '8DR' => 'E02002712',
        '8DS' => 'E02002712',
        '8DT' => 'E02002712',
        '8DU' => 'E02002716',
        '8DW' => 'E02002712',
        '8DX' => 'E02002712',
        '8DY' => 'E02002712',
        '8DZ' => 'E02002712',
        '8EA' => 'E02002712',
        '8EB' => 'E02002712',
        '8ED' => 'E02002712',
        '8EE' => 'E02002712',
        '8EF' => 'E02002716',
        '8EG' => 'E02002716',
        '8EH' => 'E02002716',
        '8EJ' => 'E02002712',
        '8EL' => 'E02002712',
        '8EN' => 'E02002712',
        '8EP' => 'E02002712',
        '8EQ' => 'E02002716',
        '8ER' => 'E02002712',
        '8ES' => 'E02002712',
        '8ET' => 'E02002712',
        '8EU' => 'E02002712',
        '8EW' => 'E02002712',
        '8EX' => 'E02002712',
        '8EY' => 'E02002712',
        '8EZ' => 'E02002712',
        '8FA' => 'E02002716',
        '8FB' => 'E02002712',
        '8FD' => 'E02002712',
        '8FE' => 'E02002716',
        '8FF' => 'E02002716',
        '8FG' => 'E02002712',
        '8FH' => 'E02002716',
        '8FJ' => 'E02002716',
        '8FL' => 'E02002712',
        '8FN' => 'E02002712',
        '8FP' => 'E02002716',
        '8FR' => 'E02002712',
        '8FT' => 'E02002712',
        '8GA' => 'E02002712',
        '8GB' => 'E02002712',
        '8GD' => 'E02002716',
        '8GE' => 'E02002716',
        '8GF' => 'E02002716',
        '8GG' => 'E02002716',
        '8GH' => 'E02002712',
        '8GJ' => 'E02002716',
        '8GL' => 'E02002716',
        '8GN' => 'E02002716',
        '8GP' => 'E02002716',
        '8GQ' => 'E02002716',
        '8GR' => 'E02002716',
        '8GS' => 'E02002716',
        '8GT' => 'E02002716',
        '8GU' => 'E02002716',
        '8GW' => 'E02002712',
        '8GY' => 'E02002716',
        '8GZ' => 'E02002712',
        '8HA' => 'E02002712',
        '8HB' => 'E02002716',
        '8HD' => 'E02002712',
        '8HE' => 'E02002712',
        '8HF' => 'E02002712',
        '8HG' => 'E02002712',
        '8HH' => 'E02002716',
        '8HJ' => 'E02002716',
        '8HL' => 'E02002716',
        '8HN' => 'E02002716',
        '8HP' => 'E02002716',
        '8HQ' => 'E02002716',
        '8HR' => 'E02002712',
        '8HS' => 'E02002712',
        '8HT' => 'E02002716',
        '8HU' => 'E02002716',
        '8HW' => 'E02002716',
        '8HX' => 'E02002716',
        '8HY' => 'E02002716',
        '8HZ' => 'E02002712',
        '8JA' => 'E02002712',
        '8JB' => 'E02002712',
        '8JD' => 'E02002712',
        '8JE' => 'E02002712',
        '8JF' => 'E02002712',
        '8JG' => 'E02002712',
        '8JH' => 'E02002712',
        '8JJ' => 'E02002712',
        '8JL' => 'E02002712',
        '8JN' => 'E02002712',
        '8JP' => 'E02002712',
        '8JQ' => 'E02002712',
        '8JR' => 'E02002712',
        '8JS' => 'E02002712',
        '8JT' => 'E02002712',
        '8JU' => 'E02002712',
        '8JW' => 'E02002712',
        '8JX' => 'E02002712',
        '8JY' => 'E02002712',
        '8JZ' => 'E02002712',
        '8LA' => 'E02002712',
        '8LB' => 'E02002712',
        '8LD' => 'E02002712',
        '8LE' => 'E02002712',
        '8LF' => 'E02002712',
        '8LG' => 'E02002712',
        '8LH' => 'E02002712',
        '8LJ' => 'E02002712',
        '8LL' => 'E02002712',
        '8LN' => 'E02002716',
        '8LP' => 'E02002716',
        '8LQ' => 'E02002712',
        '8LR' => 'E02002712',
        '8LS' => 'E02002712',
        '8LT' => 'E02002716',
        '8LU' => 'E02002712',
        '8LW' => 'E02002712',
        '8LX' => 'E02002712',
        '8LY' => 'E02002712',
        '8LZ' => 'E02002712',
        '8NA' => 'E02002716',
        '8NB' => 'E02002716',
        '8ND' => 'E02002716',
        '8NE' => 'E02002716',
        '8NF' => 'E02002712',
        '8NG' => 'E02002712',
        '8NH' => 'E02002712',
        '8NJ' => 'E02002712',
        '8NL' => 'E02002716',
        '8NN' => 'E02002712',
        '8NP' => 'E02002712',
        '8NQ' => 'E02002712',
        '8NR' => 'E02002712',
        '8NS' => 'E02002712',
        '8NT' => 'E02002712',
        '8NU' => 'E02002712',
        '8NW' => 'E02002712',
        '8NX' => 'E02002712',
        '8NY' => 'E02002716',
        '8NZ' => 'E02002712',
        '8PA' => 'E02002716',
        '8PB' => 'E02002712',
        '8PD' => 'E02002712',
        '8PE' => 'E02002716',
        '8PF' => 'E02002712',
        '8PG' => 'E02002716',
        '8PH' => 'E02002716',
        '8PJ' => 'E02002712',
        '8PL' => 'E02002712',
        '8PN' => 'E02002712',
        '8PP' => 'E02002712',
        '8PQ' => 'E02002716',
        '8PR' => 'E02002716',
        '8PS' => 'E02002716',
        '8PT' => 'E02002712',
        '8PU' => 'E02002716',
        '8PW' => 'E02002712',
        '8PX' => 'E02002712',
        '8PY' => 'E02002716',
        '8PZ' => 'E02002716',
        '8QA' => 'E02002712',
        '8QB' => 'E02002716',
        '8QD' => 'E02002716',
        '8QE' => 'E02002716',
        '8QF' => 'E02002716',
        '8QG' => 'E02002716',
        '8QH' => 'E02002712',
        '8QJ' => 'E02002712',
        '8QL' => 'E02002716',
        '8QN' => 'E02002712',
        '8QP' => 'E02002712',
        '8QQ' => 'E02002712',
        '8QR' => 'E02002712',
        '8QS' => 'E02002716',
        '8QT' => 'E02002712',
        '8QU' => 'E02002712',
        '8QW' => 'E02002712',
        '8QX' => 'E02002712',
        '8QY' => 'E02002712',
        '8QZ' => 'E02002716',
        '8RA' => 'E02002712',
        '8RB' => 'E02002716',
        '8RD' => 'E02002716',
        '8RE' => 'E02002716',
        '8RF' => 'E02002712',
        '8RH' => 'E02002712',
        '8RJ' => 'E02002712',
        '8RL' => 'E02002712',
        '8RN' => 'E02002712',
        '8RP' => 'E02002712',
        '8RQ' => 'E02002716',
        '8RR' => 'E02002714',
        '8RS' => 'E02002716',
        '8RW' => 'E02002716',
        '8RX' => 'E02002712',
        '8RY' => 'E02002677',
        '8RZ' => 'E02002712',
        '8SA' => 'E02002712',
        '8SB' => 'E02002712',
        '8SD' => 'E02002712',
        '8SE' => 'E02002712',
        '8SF' => 'E02002712',
        '8SG' => 'E02002712',
        '8SH' => 'E02002712',
        '8SJ' => 'E02002712',
        '8SL' => 'E02002714',
        '8SN' => 'E02002714',
        '8SP' => 'E02002714',
        '8SQ' => 'E02002712',
        '8SR' => 'E02002704',
        '8SS' => 'E02002714',
        '8ST' => 'E02002714',
        '8SU' => 'E02002714',
        '8SW' => 'E02002714',
        '8SX' => 'E02002712',
        '8SY' => 'E02002712',
        '8SZ' => 'E02002712',
        '8TA' => 'E02002712',
        '8TB' => 'E02002712',
        '8TD' => 'E02002712',
        '8TE' => 'E02002712',
        '8TF' => 'E02002712',
        '8TG' => 'E02002712',
        '8TH' => 'E02002712',
        '8TJ' => 'E02002712',
        '8TL' => 'E02002712',
        '8TN' => 'E02002712',
        '8TP' => 'E02002712',
        '8TQ' => 'E02002712',
        '8TR' => 'E02002712',
        '8TS' => 'E02002712',
        '8TT' => 'E02002712',
        '8TU' => 'E02002712',
        '8TW' => 'E02002712',
        '8TX' => 'E02002712',
        '8TY' => 'E02002712',
        '8TZ' => 'E02002712',
        '8UA' => 'E02002712',
        '8UB' => 'E02002712',
        '8UD' => 'E02002712',
        '8UE' => 'E02002712',
        '8UF' => 'E02002712',
        '8UG' => 'E02002712',
        '8UH' => 'E02002712',
        '8UJ' => 'E02002712',
        '8UL' => 'E02002712',
        '8UN' => 'E02002712',
        '8UP' => 'E02002712',
        '8UQ' => 'E02002712',
        '8UR' => 'E02002712',
        '8US' => 'E02002712',
        '8UT' => 'E02002712',
        '8UU' => 'E02002712',
        '8UW' => 'E02002712',
        '8UX' => 'E02002712',
        '8UY' => 'E02002712',
        '8UZ' => 'E02002712',
        '8WA' => 'E02002677',
        '8WB' => 'E02002677',
        '8WD' => 'E02002677',
        '8WE' => 'E02002677',
        '8WF' => 'E02002677',
        '8WG' => 'E02002677',
        '8WH' => 'E02002677',
        '8WJ' => 'E02002712',
        '8WP' => 'E02002677',
        '8WQ' => 'E02002677',
        '8WR' => 'E02002677',
        '8WS' => 'E02002677',
        '8WT' => 'E02002677',
        '8WU' => 'E02002677',
        '8WW' => 'E02002677',
        '8WX' => 'E02002677',
        '8WY' => 'E02002677',
        '8WZ' => 'E02002677',
        '8XA' => 'E02002712',
        '8XB' => 'E02002712',
        '8XD' => 'E02002712',
        '8XE' => 'E02002712',
        '8XF' => 'E02002712',
        '8XG' => 'E02002712',
        '8XH' => 'E02002712',
        '8XJ' => 'E02002712',
        '8XL' => 'E02002712',
        '8XN' => 'E02002712',
        '8XP' => 'E02002712',
        '8XQ' => 'E02002712',
        '8XR' => 'E02002712',
        '8XS' => 'E02002712',
        '8XT' => 'E02002712',
        '8XU' => 'E02002712',
        '8XW' => 'E02002712',
        '8XX' => 'E02002677',
        '8XY' => 'E02002712',
        '8XZ' => 'E02002712',
        '8YA' => 'E02002677',
        '8YB' => 'E02002712',
        '8YD' => 'E02002712',
        '8YE' => 'E02002712',
        '8YF' => 'E02002677',
        '8YG' => 'E02002677',
        '8YH' => 'E02002712',
        '8YJ' => 'E02002677',
        '8YL' => 'E02002712',
        '8YN' => 'E02002712',
        '8YP' => 'E02002677',
        '8YQ' => 'E02002712',
        '8YR' => 'E02002677',
        '8YS' => 'E02002677',
        '8YT' => 'E02002712',
        '8YU' => 'E02002677',
        '8YW' => 'E02002712',
        '8YX' => 'E02002712',
        '8YY' => 'E02002677',
        '8YZ' => 'E02002712',
        '9AA' => 'E02002714',
        '9AB' => 'E02002714',
        '9AD' => 'E02002714',
        '9AE' => 'E02002714',
        '9AF' => 'E02002714',
        '9AG' => 'E02002714',
        '9AH' => 'E02002704',
        '9AJ' => 'E02002704',
        '9AL' => 'E02002704',
        '9AN' => 'E02002714',
        '9AP' => 'E02002714',
        '9AQ' => 'E02002714',
        '9AR' => 'E02002714',
        '9AS' => 'E02002714',
        '9AT' => 'E02002714',
        '9AU' => 'E02002714',
        '9AW' => 'E02002714',
        '9AX' => 'E02002714',
        '9AY' => 'E02002714',
        '9AZ' => 'E02002714',
        '9BA' => 'E02002714',
        '9BB' => 'E02002714',
        '9BD' => 'E02002714',
        '9BE' => 'E02002714',
        '9BF' => 'E02002714',
        '9BG' => 'E02002714',
        '9BH' => 'E02002714',
        '9BJ' => 'E02002704',
        '9BL' => 'E02002714',
        '9BN' => 'E02002714',
        '9BP' => 'E02002714',
        '9BQ' => 'E02002714',
        '9BS' => 'E02002714',
        '9BT' => 'E02002714',
        '9BU' => 'E02002714',
        '9BW' => 'E02002714',
        '9BX' => 'E02002714',
        '9BY' => 'E02002714',
        '9DA' => 'E02002714',
        '9DB' => 'E02002716',
        '9DD' => 'E02002714',
        '9DE' => 'E02002714',
        '9DF' => 'E02002714',
        '9DG' => 'E02002714',
        '9DH' => 'E02002714',
        '9DJ' => 'E02002714',
        '9DL' => 'E02002714',
        '9DQ' => 'E02002714',
        '9DR' => 'E02002714',
        '9DU' => 'E02002716',
        '9DX' => 'E02002716',
        '9DY' => 'E02002716',
        '9DZ' => 'E02002714',
        '9EA' => 'E02002716',
        '9EB' => 'E02002716',
        '9ED' => 'E02002716',
        '9EE' => 'E02002716',
        '9EF' => 'E02002714',
        '9EG' => 'E02002716',
        '9EH' => 'E02002716',
        '9EJ' => 'E02002716',
        '9EL' => 'E02002716',
        '9EN' => 'E02002716',
        '9EP' => 'E02002716',
        '9EQ' => 'E02002716',
        '9ER' => 'E02002716',
        '9ES' => 'E02002716',
        '9ET' => 'E02002716',
        '9EU' => 'E02002716',
        '9EW' => 'E02002714',
        '9EX' => 'E02002716',
        '9EY' => 'E02002714',
        '9EZ' => 'E02002716',
        '9FB' => 'E02002716',
        '9FD' => 'E02002716',
        '9FE' => 'E02002716',
        '9FF' => 'E02002716',
        '9GA' => 'E02002716',
        '9GB' => 'E02002716',
        '9GD' => 'E02002716',
        '9GE' => 'E02002716',
        '9GF' => 'E02002716',
        '9HA' => 'E02002714',
        '9HB' => 'E02002714',
        '9HD' => 'E02002714',
        '9HE' => 'E02002714',
        '9HF' => 'E02002716',
        '9HG' => 'E02002716',
        '9HH' => 'E02002716',
        '9HJ' => 'E02002716',
        '9HN' => 'E02002716',
        '9HP' => 'E02002714',
        '9HQ' => 'E02002714',
        '9HR' => 'E02002716',
        '9HS' => 'E02002716',
        '9HT' => 'E02002714',
        '9HU' => 'E02002716',
        '9HW' => 'E02002716',
        '9HX' => 'E02002716',
        '9HY' => 'E02002716',
        '9HZ' => 'E02002716',
        '9JA' => 'E02002716',
        '9JD' => 'E02002716',
        '9JF' => 'E02002714',
        '9JG' => 'E02002716',
        '9JH' => 'E02002716',
        '9JJ' => 'E02002716',
        '9JL' => 'E02002716',
        '9JN' => 'E02002716',
        '9JP' => 'E02002716',
        '9JQ' => 'E02002716',
        '9JR' => 'E02002716',
        '9JS' => 'E02002716',
        '9JT' => 'E02002716',
        '9JU' => 'E02002716',
        '9JW' => 'E02002716',
        '9JX' => 'E02002716',
        '9JY' => 'E02002716',
        '9JZ' => 'E02002714',
        '9LB' => 'E02002716',
        '9LD' => 'E02002716',
        '9LE' => 'E02002716',
        '9LF' => 'E02002716',
        '9LG' => 'E02002716',
        '9LJ' => 'E02002716',
        '9LN' => 'E02002716',
        '9LR' => 'E02002716',
        '9LS' => 'E02002716',
        '9LT' => 'E02002716',
        '9LU' => 'E02002716',
        '9LW' => 'E02002716',
        '9LX' => 'E02002716',
        '9LY' => 'E02002716',
        '9LZ' => 'E02002716',
        '9NA' => 'E02002716',
        '9NB' => 'E02002716',
        '9ND' => 'E02002716',
        '9NE' => 'E02002716',
        '9NF' => 'E02002716',
        '9NG' => 'E02002716',
        '9NH' => 'E02002716',
        '9NJ' => 'E02002716',
        '9NL' => 'E02002716',
        '9NN' => 'E02002716',
        '9NP' => 'E02002716',
        '9NQ' => 'E02002716',
        '9NR' => 'E02002716',
        '9NS' => 'E02002716',
        '9NT' => 'E02002716',
        '9NU' => 'E02002716',
        '9NW' => 'E02002716',
        '9NX' => 'E02002716',
        '9PA' => 'E02002716',
        '9PB' => 'E02002716',
        '9PD' => 'E02002716',
        '9PE' => 'E02002716',
        '9PF' => 'E02002716',
        '9PG' => 'E02002716',
        '9PH' => 'E02002716',
        '9PJ' => 'E02002716',
        '9PL' => 'E02002716',
        '9PN' => 'E02002716',
        '9PP' => 'E02002716',
        '9PQ' => 'E02002716',
        '9PR' => 'E02002716',
        '9PS' => 'E02002716',
        '9PT' => 'E02002716',
        '9PU' => 'E02002716',
        '9PW' => 'E02002716',
        '9PX' => 'E02002716',
        '9PY' => 'E02002716',
        '9PZ' => 'E02002716',
        '9QA' => 'E02002716',
        '9QB' => 'E02002716',
        '9QD' => 'E02002716',
        '9QE' => 'E02002716',
        '9QF' => 'E02002716',
        '9QG' => 'E02002716',
        '9QH' => 'E02002716',
        '9QJ' => 'E02002716',
        '9QL' => 'E02002716',
        '9QN' => 'E02002716',
        '9QP' => 'E02002716',
        '9QQ' => 'E02002716',
        '9QR' => 'E02002714',
        '9QW' => 'E02002716',
        '9QZ' => 'E02002714',
        '9RA' => 'E02002714',
        '9RB' => 'E02002714',
        '9RD' => 'E02002714',
        '9RE' => 'E02002714',
        '9RF' => 'E02002714',
        '9RG' => 'E02002714',
        '9RH' => 'E02002714',
        '9RJ' => 'E02002714',
        '9RL' => 'E02002714',
        '9RN' => 'E02002714',
        '9RP' => 'E02002714',
        '9RQ' => 'E02002714',
        '9RR' => 'E02002714',
        '9RS' => 'E02002714',
        '9RT' => 'E02002714',
        '9RU' => 'E02002714',
        '9RW' => 'E02002714',
        '9RX' => 'E02002714',
        '9RY' => 'E02002714',
        '9RZ' => 'E02002714',
        '9SA' => 'E02002714',
        '9SB' => 'E02002714',
        '9SD' => 'E02002714',
        '9SE' => 'E02002714',
        '9SF' => 'E02002714',
        '9SG' => 'E02002714',
        '9SH' => 'E02002714',
        '9SJ' => 'E02002714',
        '9SL' => 'E02002714',
        '9SN' => 'E02002714',
        '9SP' => 'E02002714',
        '9SQ' => 'E02002714',
        '9SR' => 'E02002714',
        '9SS' => 'E02002714',
        '9ST' => 'E02002714',
        '9SU' => 'E02002714',
        '9SW' => 'E02002714',
        '9SX' => 'E02002714',
        '9SY' => 'E02002714',
        '9SZ' => 'E02002714',
        '9TA' => 'E02002714',
        '9TB' => 'E02002714',
        '9TD' => 'E02002714',
        '9TE' => 'E02002714',
        '9TF' => 'E02002714',
        '9TG' => 'E02002714',
        '9TH' => 'E02002714',
        '9TJ' => 'E02002714',
        '9TL' => 'E02002714',
        '9TN' => 'E02002714',
        '9TP' => 'E02002714',
        '9TQ' => 'E02002714',
        '9TR' => 'E02002714',
        '9TS' => 'E02002714',
        '9TT' => 'E02002714',
        '9TU' => 'E02002714',
        '9TW' => 'E02002714',
        '9TX' => 'E02002714',
        '9TY' => 'E02002714',
        '9TZ' => 'E02002714',
        '9UH' => 'E02002716',
        '9UJ' => 'E02002716',
        '9UY' => 'E02002714',
        '9UZ' => 'E02002677',
        '9WA' => 'E02002716',
        '9WB' => 'E02002716',
        '9WD' => 'E02002677',
        '9WE' => 'E02002677',
        '9WF' => 'E02002714',
        '9WG' => 'E02002677',
        '9WH' => 'E02002677',
        '9WJ' => 'E02002677',
        '9WL' => 'E02002677',
        '9WN' => 'E02002677',
        '9WP' => 'E02002677',
        '9WQ' => 'E02002677',
        '9WR' => 'E02002716',
        '9WS' => 'E02002716',
        '9WT' => 'E02002716',
        '9WU' => 'E02002716',
        '9WX' => 'E02002716',
        '9WY' => 'E02002716',
        '9WZ' => 'E02002677',
        '9XF' => 'E02002714',
        '9YD' => 'E02002677',
        '9YE' => 'E02002677',
        '9YF' => 'E02002677',
        '9YG' => 'E02002677',
        '9YH' => 'E02002716',
        '9YJ' => 'E02002677',
        '9YL' => 'E02002716',
        '9YN' => 'E02002677',
        '9YP' => 'E02002677',
        '9YQ' => 'E02002716',
        '9YR' => 'E02002716',
        '9YS' => 'E02002716',
        '9YT' => 'E02002677',
        '9YU' => 'E02002714',
        '9YW' => 'E02002677',
        '9YX' => 'E02002714',
        '9YY' => 'E02002714',
        '9YZ' => 'E02002714',
        '9ZL' => 'E02002677',
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
