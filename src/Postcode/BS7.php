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
final class BS7
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02003021',
        '0AB' => 'E02003021',
        '0AD' => 'E02003021',
        '0AE' => 'E02003016',
        '0AF' => 'E02003016',
        '0AG' => 'E02003021',
        '0AH' => 'E02003021',
        '0AJ' => 'E02003021',
        '0AL' => 'E02003021',
        '0AN' => 'E02003021',
        '0AP' => 'E02003021',
        '0AQ' => 'E02003021',
        '0AR' => 'E02003021',
        '0AS' => 'E02003016',
        '0AT' => 'E02003021',
        '0AU' => 'E02003021',
        '0AW' => 'E02003021',
        '0AX' => 'E02003021',
        '0AY' => 'E02003016',
        '0AZ' => 'E02003016',
        '0BA' => 'E02003016',
        '0BB' => 'E02003016',
        '0BD' => 'E02003016',
        '0BE' => 'E02003016',
        '0BF' => 'E02003021',
        '0BG' => 'E02003016',
        '0BH' => 'E02003021',
        '0BJ' => 'E02003021',
        '0BL' => 'E02003016',
        '0BN' => 'E02003021',
        '0BP' => 'E02003021',
        '0BQ' => 'E02003021',
        '0BS' => 'E02003021',
        '0BT' => 'E02003021',
        '0BU' => 'E02003021',
        '0BW' => 'E02003021',
        '0BX' => 'E02003021',
        '0BY' => 'E02003021',
        '0BZ' => 'E02003021',
        '0DA' => 'E02003021',
        '0DB' => 'E02003021',
        '0DD' => 'E02003021',
        '0DE' => 'E02003021',
        '0DF' => 'E02003021',
        '0DG' => 'E02003016',
        '0DH' => 'E02003016',
        '0DJ' => 'E02003016',
        '0DL' => 'E02003016',
        '0DN' => 'E02003021',
        '0DP' => 'E02003016',
        '0DQ' => 'E02003021',
        '0DR' => 'E02003016',
        '0DS' => 'E02003016',
        '0DT' => 'E02003016',
        '0DU' => 'E02003016',
        '0DW' => 'E02003016',
        '0DX' => 'E02003016',
        '0DY' => 'E02003016',
        '0DZ' => 'E02003016',
        '0EA' => 'E02003016',
        '0EB' => 'E02003016',
        '0ED' => 'E02003016',
        '0EE' => 'E02003016',
        '0EF' => 'E02003016',
        '0EG' => 'E02003016',
        '0EH' => 'E02003016',
        '0EJ' => 'E02003016',
        '0EL' => 'E02003016',
        '0EN' => 'E02003016',
        '0EP' => 'E02003021',
        '0EQ' => 'E02003016',
        '0ER' => 'E02003016',
        '0ES' => 'E02003016',
        '0ET' => 'E02003016',
        '0EU' => 'E02003016',
        '0EW' => 'E02003016',
        '0EX' => 'E02003016',
        '0EY' => 'E02003016',
        '0EZ' => 'E02003016',
        '0FB' => 'E02003016',
        '0FD' => 'E02003015',
        '0FE' => 'E02003015',
        '0FF' => 'E02003021',
        '0FG' => 'E02003015',
        '0FH' => 'E02003015',
        '0FJ' => 'E02003015',
        '0FL' => 'E02003015',
        '0FN' => 'E02003015',
        '0FP' => 'E02003016',
        '0HA' => 'E02003015',
        '0HB' => 'E02003016',
        '0HD' => 'E02003016',
        '0HE' => 'E02003016',
        '0HF' => 'E02003016',
        '0HG' => 'E02003016',
        '0HH' => 'E02003021',
        '0HJ' => 'E02003016',
        '0HL' => 'E02003016',
        '0HN' => 'E02003016',
        '0HP' => 'E02003016',
        '0HQ' => 'E02003021',
        '0HR' => 'E02003016',
        '0HS' => 'E02003016',
        '0HT' => 'E02003016',
        '0HU' => 'E02003016',
        '0HW' => 'E02003016',
        '0HX' => 'E02003021',
        '0JA' => 'E02003016',
        '0JB' => 'E02003016',
        '0JD' => 'E02003021',
        '0JE' => 'E02003016',
        '0JF' => 'E02003016',
        '0JG' => 'E02003016',
        '0JH' => 'E02003016',
        '0JJ' => 'E02003015',
        '0JL' => 'E02003015',
        '0JN' => 'E02003016',
        '0JP' => 'E02003016',
        '0JQ' => 'E02003016',
        '0JR' => 'E02003015',
        '0JS' => 'E02003016',
        '0JT' => 'E02003016',
        '0JU' => 'E02003016',
        '0JW' => 'E02003016',
        '0JX' => 'E02003016',
        '0JZ' => 'E02003107',
        '0LA' => 'E02003016',
        '0LB' => 'E02003016',
        '0LD' => 'E02003016',
        '0LE' => 'E02003016',
        '0LF' => 'E02003016',
        '0LG' => 'E02003016',
        '0LH' => 'E02003016',
        '0LJ' => 'E02003016',
        '0LL' => 'E02003016',
        '0LN' => 'E02003016',
        '0LP' => 'E02003107',
        '0LQ' => 'E02003016',
        '0LR' => 'E02003107',
        '0LS' => 'E02003107',
        '0LT' => 'E02003107',
        '0LU' => 'E02003016',
        '0LW' => 'E02003107',
        '0LX' => 'E02003016',
        '0LY' => 'E02003016',
        '0LZ' => 'E02003016',
        '0NA' => 'E02003016',
        '0NB' => 'E02003016',
        '0ND' => 'E02003016',
        '0NE' => 'E02003016',
        '0NF' => 'E02003016',
        '0NG' => 'E02003016',
        '0NH' => 'E02003016',
        '0NJ' => 'E02003016',
        '0NL' => 'E02003016',
        '0NN' => 'E02003016',
        '0NP' => 'E02003016',
        '0NQ' => 'E02003016',
        '0NR' => 'E02003016',
        '0NS' => 'E02003016',
        '0NT' => 'E02003016',
        '0NU' => 'E02003016',
        '0NW' => 'E02003016',
        '0NX' => 'E02003016',
        '0NY' => 'E02003016',
        '0PA' => 'E02003016',
        '0PB' => 'E02003015',
        '0PD' => 'E02003015',
        '0PE' => 'E02003016',
        '0PF' => 'E02003016',
        '0PG' => 'E02003016',
        '0PH' => 'E02003016',
        '0PJ' => 'E02003016',
        '0PL' => 'E02003016',
        '0PN' => 'E02003016',
        '0PP' => 'E02003016',
        '0PQ' => 'E02003016',
        '0PR' => 'E02003016',
        '0PS' => 'E02003016',
        '0PT' => 'E02003107',
        '0PU' => 'E02003016',
        '0PW' => 'E02003016',
        '0PX' => 'E02003016',
        '0PY' => 'E02003016',
        '0PZ' => 'E02003016',
        '0QA' => 'E02003021',
        '0QB' => 'E02003021',
        '0QD' => 'E02003107',
        '0QE' => 'E02003107',
        '0QF' => 'E02003107',
        '0QG' => 'E02003107',
        '0QH' => 'E02003107',
        '0QJ' => 'E02003107',
        '0QL' => 'E02003107',
        '0QN' => 'E02003107',
        '0QP' => 'E02003107',
        '0QQ' => 'E02003107',
        '0QR' => 'E02003107',
        '0QS' => 'E02003107',
        '0QT' => 'E02003107',
        '0QU' => 'E02003016',
        '0QW' => 'E02003107',
        '0QX' => 'E02003016',
        '0QY' => 'E02003107',
        '0RG' => 'E02003107',
        '0RH' => 'E02003107',
        '0RJ' => 'E02003107',
        '0RL' => 'E02003107',
        '0RN' => 'E02003107',
        '0RP' => 'E02003107',
        '0RQ' => 'E02003107',
        '0RR' => 'E02003107',
        '0RS' => 'E02003107',
        '0RT' => 'E02003107',
        '0RU' => 'E02003107',
        '0RW' => 'E02003107',
        '0SA' => 'E02003107',
        '0SB' => 'E02003107',
        '0SD' => 'E02003107',
        '0SE' => 'E02003107',
        '0SF' => 'E02003107',
        '0SG' => 'E02003107',
        '0SH' => 'E02003107',
        '0SJ' => 'E02003107',
        '0SL' => 'E02003107',
        '0SN' => 'E02003107',
        '0SP' => 'E02003107',
        '0SQ' => 'E02003107',
        '0SR' => 'E02003107',
        '0SW' => 'E02003107',
        '0TA' => 'E02003107',
        '0TB' => 'E02003107',
        '0TD' => 'E02003107',
        '0TE' => 'E02003107',
        '0TF' => 'E02003107',
        '0TG' => 'E02003107',
        '0TH' => 'E02003107',
        '0TJ' => 'E02003107',
        '0TL' => 'E02003107',
        '0TN' => 'E02003107',
        '0TP' => 'E02003107',
        '0TQ' => 'E02003107',
        '0TR' => 'E02003107',
        '0TS' => 'E02003015',
        '0TT' => 'E02003015',
        '0TU' => 'E02003015',
        '0TW' => 'E02003107',
        '0UA' => 'E02003015',
        '0UB' => 'E02003015',
        '0UD' => 'E02003015',
        '0UE' => 'E02003015',
        '0UF' => 'E02003015',
        '0UG' => 'E02003015',
        '0UH' => 'E02003015',
        '0UJ' => 'E02003015',
        '0UL' => 'E02003015',
        '0UN' => 'E02003015',
        '0UP' => 'E02003015',
        '0UQ' => 'E02003015',
        '0UR' => 'E02003015',
        '0US' => 'E02003015',
        '0UT' => 'E02003015',
        '0UU' => 'E02003015',
        '0UW' => 'E02003015',
        '0UX' => 'E02003015',
        '0UY' => 'E02003015',
        '0UZ' => 'E02003015',
        '0WY' => 'E02003031',
        '0XA' => 'E02003015',
        '0XB' => 'E02003015',
        '0XD' => 'E02003015',
        '0XE' => 'E02003015',
        '0XF' => 'E02003021',
        '0XG' => 'E02003021',
        '0XH' => 'E02003021',
        '0XJ' => 'E02003021',
        '0XL' => 'E02003015',
        '0XN' => 'E02003015',
        '0XP' => 'E02003015',
        '0XQ' => 'E02003021',
        '0XR' => 'E02003015',
        '0XS' => 'E02003015',
        '0XT' => 'E02003015',
        '0XU' => 'E02003015',
        '0XW' => 'E02003015',
        '0XX' => 'E02003015',
        '0XY' => 'E02003015',
        '0XZ' => 'E02003016',
        '8AA' => 'E02003031',
        '8AB' => 'E02003031',
        '8AD' => 'E02003031',
        '8AE' => 'E02003031',
        '8AF' => 'E02003027',
        '8AG' => 'E02003027',
        '8AH' => 'E02003031',
        '8AJ' => 'E02003031',
        '8AL' => 'E02003031',
        '8AN' => 'E02003027',
        '8AP' => 'E02003031',
        '8AQ' => 'E02003031',
        '8AR' => 'E02003031',
        '8AS' => 'E02003031',
        '8AT' => 'E02003031',
        '8AU' => 'E02003031',
        '8AW' => 'E02003031',
        '8AX' => 'E02003031',
        '8AY' => 'E02003031',
        '8AZ' => 'E02003031',
        '8BA' => 'E02003031',
        '8BD' => 'E02003031',
        '8BE' => 'E02003031',
        '8BF' => 'E02003031',
        '8BG' => 'E02003031',
        '8BH' => 'E02003031',
        '8BJ' => 'E02003031',
        '8BL' => 'E02003031',
        '8BN' => 'E02003031',
        '8BP' => 'E02003031',
        '8BQ' => 'E02003031',
        '8BS' => 'E02003031',
        '8BW' => 'E02003031',
        '8BZ' => 'E02003031',
        '8DA' => 'E02003031',
        '8DB' => 'E02003031',
        '8DD' => 'E02003031',
        '8DE' => 'E02003031',
        '8DF' => 'E02003031',
        '8DG' => 'E02003031',
        '8DH' => 'E02003031',
        '8DJ' => 'E02003031',
        '8DL' => 'E02003031',
        '8DN' => 'E02003031',
        '8DP' => 'E02003031',
        '8DQ' => 'E02003031',
        '8DR' => 'E02003031',
        '8DS' => 'E02003031',
        '8DT' => 'E02003031',
        '8DU' => 'E02003031',
        '8DW' => 'E02003031',
        '8DX' => 'E02003031',
        '8EE' => 'E02003031',
        '8EF' => 'E02003031',
        '8EG' => 'E02003031',
        '8EH' => 'E02003031',
        '8EJ' => 'E02003031',
        '8EL' => 'E02003031',
        '8EN' => 'E02003031',
        '8EP' => 'E02003031',
        '8EQ' => 'E02003031',
        '8ER' => 'E02003031',
        '8ES' => 'E02003031',
        '8ET' => 'E02003031',
        '8EU' => 'E02003031',
        '8EW' => 'E02003031',
        '8EX' => 'E02003031',
        '8HA' => 'E02003027',
        '8HD' => 'E02003031',
        '8HE' => 'E02003031',
        '8HF' => 'E02003027',
        '8HG' => 'E02003031',
        '8HH' => 'E02003027',
        '8HJ' => 'E02003027',
        '8HL' => 'E02003027',
        '8HN' => 'E02003027',
        '8HP' => 'E02003027',
        '8HQ' => 'E02003027',
        '8HR' => 'E02003027',
        '8HS' => 'E02003027',
        '8HT' => 'E02003027',
        '8HU' => 'E02003027',
        '8HW' => 'E02003027',
        '8HX' => 'E02003027',
        '8HY' => 'E02003031',
        '8HZ' => 'E02003031',
        '8JB' => 'E02003028',
        '8JD' => 'E02003028',
        '8JE' => 'E02003031',
        '8JF' => 'E02003031',
        '8JG' => 'E02003028',
        '8JH' => 'E02003027',
        '8JJ' => 'E02003028',
        '8JL' => 'E02003028',
        '8JN' => 'E02003028',
        '8JP' => 'E02003027',
        '8JQ' => 'E02003028',
        '8JR' => 'E02003028',
        '8JS' => 'E02003028',
        '8JW' => 'E02003028',
        '8LA' => 'E02003027',
        '8LB' => 'E02003027',
        '8LD' => 'E02003027',
        '8LE' => 'E02003027',
        '8LF' => 'E02003027',
        '8LG' => 'E02003027',
        '8LH' => 'E02003027',
        '8LJ' => 'E02003027',
        '8LL' => 'E02003027',
        '8LQ' => 'E02003027',
        '8LS' => 'E02003027',
        '8LT' => 'E02003027',
        '8LU' => 'E02003027',
        '8LX' => 'E02003027',
        '8LY' => 'E02003027',
        '8LZ' => 'E02003027',
        '8NA' => 'E02003028',
        '8NB' => 'E02003028',
        '8ND' => 'E02003027',
        '8NE' => 'E02003027',
        '8NF' => 'E02003028',
        '8NH' => 'E02003027',
        '8NJ' => 'E02003027',
        '8NL' => 'E02003027',
        '8NN' => 'E02003027',
        '8NP' => 'E02003027',
        '8NQ' => 'E02003027',
        '8NR' => 'E02003027',
        '8NS' => 'E02003027',
        '8NT' => 'E02003027',
        '8NU' => 'E02003027',
        '8NW' => 'E02003027',
        '8NX' => 'E02003027',
        '8NY' => 'E02003027',
        '8NZ' => 'E02003027',
        '8PA' => 'E02003027',
        '8PB' => 'E02003027',
        '8PD' => 'E02003027',
        '8PE' => 'E02003027',
        '8PF' => 'E02003027',
        '8PG' => 'E02003027',
        '8PH' => 'E02003027',
        '8PJ' => 'E02003027',
        '8PL' => 'E02003027',
        '8PP' => 'E02003027',
        '8PQ' => 'E02003027',
        '8PR' => 'E02003027',
        '8PS' => 'E02003027',
        '8PT' => 'E02003027',
        '8PU' => 'E02003027',
        '8PX' => 'E02003027',
        '8PY' => 'E02003027',
        '8PZ' => 'E02003027',
        '8QA' => 'E02003027',
        '8QB' => 'E02003027',
        '8QD' => 'E02003027',
        '8QE' => 'E02003027',
        '8QF' => 'E02003027',
        '8QG' => 'E02003027',
        '8QH' => 'E02003027',
        '8QL' => 'E02003027',
        '8QN' => 'E02003027',
        '8QQ' => 'E02003027',
        '8QS' => 'E02003027',
        '8QT' => 'E02003027',
        '8QU' => 'E02003027',
        '8QX' => 'E02003027',
        '8QY' => 'E02003027',
        '8QZ' => 'E02003027',
        '8RA' => 'E02003027',
        '8RB' => 'E02003027',
        '8RD' => 'E02003027',
        '8RE' => 'E02003027',
        '8RF' => 'E02003027',
        '8RG' => 'E02003027',
        '8RH' => 'E02003027',
        '8RJ' => 'E02003027',
        '8RL' => 'E02003021',
        '8RN' => 'E02003027',
        '8RP' => 'E02003027',
        '8RQ' => 'E02003027',
        '8RR' => 'E02003027',
        '8RW' => 'E02003027',
        '8RY' => 'E02003027',
        '8RZ' => 'E02003027',
        '8SA' => 'E02003021',
        '8SB' => 'E02003021',
        '8SD' => 'E02003021',
        '8SE' => 'E02003021',
        '8SF' => 'E02003021',
        '8SG' => 'E02003021',
        '8SH' => 'E02003021',
        '8SJ' => 'E02003021',
        '8SL' => 'E02003021',
        '8SN' => 'E02003021',
        '8SP' => 'E02003021',
        '8SQ' => 'E02003021',
        '8SR' => 'E02003021',
        '8SS' => 'E02003021',
        '8ST' => 'E02003021',
        '8SU' => 'E02003021',
        '8SW' => 'E02003021',
        '8SX' => 'E02003015',
        '8SY' => 'E02003015',
        '8SZ' => 'E02003021',
        '8TG' => 'E02003027',
        '8TH' => 'E02003027',
        '8TJ' => 'E02003027',
        '8TL' => 'E02003027',
        '8TN' => 'E02003027',
        '8TP' => 'E02003027',
        '8TQ' => 'E02003027',
        '8TR' => 'E02003027',
        '8TS' => 'E02003027',
        '8TT' => 'E02003027',
        '8TU' => 'E02003027',
        '8TW' => 'E02003027',
        '8TX' => 'E02003021',
        '8TY' => 'E02003021',
        '8TZ' => 'E02003027',
        '8UA' => 'E02003021',
        '8UB' => 'E02003021',
        '8UD' => 'E02003021',
        '8UF' => 'E02003021',
        '8UG' => 'E02003021',
        '8UP' => 'E02003015',
        '8UR' => 'E02003015',
        '8US' => 'E02003015',
        '8UT' => 'E02003015',
        '8UU' => 'E02003015',
        '8UW' => 'E02003021',
        '8WZ' => 'E02003031',
        '9AA' => 'E02003031',
        '9AB' => 'E02003031',
        '9AD' => 'E02003027',
        '9AE' => 'E02003027',
        '9AF' => 'E02003027',
        '9AG' => 'E02003027',
        '9AH' => 'E02003027',
        '9AJ' => 'E02003031',
        '9AL' => 'E02003031',
        '9AN' => 'E02003027',
        '9AP' => 'E02003025',
        '9AQ' => 'E02003027',
        '9AR' => 'E02003034',
        '9AS' => 'E02003034',
        '9AT' => 'E02003034',
        '9AU' => 'E02003031',
        '9AW' => 'E02003027',
        '9AX' => 'E02003031',
        '9AY' => 'E02003034',
        '9AZ' => 'E02003031',
        '9BA' => 'E02003031',
        '9BB' => 'E02003031',
        '9BD' => 'E02003031',
        '9BE' => 'E02003031',
        '9BF' => 'E02003027',
        '9BG' => 'E02003031',
        '9BH' => 'E02003031',
        '9BJ' => 'E02003031',
        '9BL' => 'E02003031',
        '9BN' => 'E02003031',
        '9BP' => 'E02003027',
        '9BQ' => 'E02003031',
        '9BS' => 'E02003027',
        '9BT' => 'E02003031',
        '9BU' => 'E02003027',
        '9BW' => 'E02003031',
        '9BX' => 'E02003031',
        '9BY' => 'E02003025',
        '9DA' => 'E02003027',
        '9DB' => 'E02003027',
        '9DD' => 'E02003027',
        '9DE' => 'E02003027',
        '9DF' => 'E02003027',
        '9DG' => 'E02003027',
        '9DH' => 'E02003027',
        '9DJ' => 'E02003027',
        '9DL' => 'E02003027',
        '9DN' => 'E02003027',
        '9DP' => 'E02003027',
        '9DQ' => 'E02003027',
        '9DR' => 'E02003027',
        '9DS' => 'E02003027',
        '9DT' => 'E02003027',
        '9DU' => 'E02003027',
        '9DW' => 'E02003027',
        '9DX' => 'E02003027',
        '9DY' => 'E02003027',
        '9DZ' => 'E02003027',
        '9EA' => 'E02003031',
        '9EB' => 'E02003027',
        '9ED' => 'E02003025',
        '9EE' => 'E02003025',
        '9EF' => 'E02003027',
        '9EG' => 'E02003027',
        '9EH' => 'E02003027',
        '9EJ' => 'E02003027',
        '9EL' => 'E02003027',
        '9EN' => 'E02003027',
        '9EP' => 'E02003027',
        '9EQ' => 'E02003027',
        '9ER' => 'E02003027',
        '9ES' => 'E02003027',
        '9ET' => 'E02003027',
        '9EU' => 'E02003027',
        '9EW' => 'E02003027',
        '9EX' => 'E02003027',
        '9EY' => 'E02003027',
        '9EZ' => 'E02003025',
        '9FB' => 'E02003025',
        '9FD' => 'E02003025',
        '9FE' => 'E02003027',
        '9FF' => 'E02003025',
        '9FG' => 'E02003027',
        '9FJ' => 'E02003025',
        '9HA' => 'E02003027',
        '9HB' => 'E02003027',
        '9HD' => 'E02003027',
        '9HF' => 'E02003027',
        '9HG' => 'E02003027',
        '9HH' => 'E02003027',
        '9HJ' => 'E02003027',
        '9HL' => 'E02003027',
        '9HN' => 'E02003027',
        '9HP' => 'E02003027',
        '9HQ' => 'E02003027',
        '9HR' => 'E02003027',
        '9HS' => 'E02003027',
        '9HT' => 'E02003027',
        '9HU' => 'E02003027',
        '9HW' => 'E02003027',
        '9HX' => 'E02003027',
        '9HY' => 'E02003021',
        '9HZ' => 'E02003027',
        '9JA' => 'E02003027',
        '9JB' => 'E02003021',
        '9JD' => 'E02003021',
        '9JE' => 'E02003021',
        '9JL' => 'E02003027',
        '9JN' => 'E02003027',
        '9JP' => 'E02003027',
        '9JR' => 'E02003027',
        '9JS' => 'E02003027',
        '9JT' => 'E02003027',
        '9JU' => 'E02003027',
        '9JW' => 'E02003027',
        '9JX' => 'E02003027',
        '9JZ' => 'E02003027',
        '9LA' => 'E02003027',
        '9LB' => 'E02003027',
        '9LD' => 'E02003027',
        '9LE' => 'E02003027',
        '9LF' => 'E02003027',
        '9LG' => 'E02003021',
        '9LH' => 'E02003027',
        '9LJ' => 'E02003027',
        '9LL' => 'E02003021',
        '9LN' => 'E02003027',
        '9LP' => 'E02003027',
        '9LQ' => 'E02003027',
        '9LR' => 'E02003027',
        '9LS' => 'E02003027',
        '9LT' => 'E02003027',
        '9LU' => 'E02003027',
        '9LW' => 'E02003027',
        '9NA' => 'E02003021',
        '9NB' => 'E02003025',
        '9ND' => 'E02003025',
        '9NE' => 'E02003025',
        '9NF' => 'E02003025',
        '9NG' => 'E02003025',
        '9NH' => 'E02003025',
        '9NJ' => 'E02003025',
        '9NL' => 'E02003025',
        '9NN' => 'E02003025',
        '9NP' => 'E02003025',
        '9NQ' => 'E02003025',
        '9NR' => 'E02003025',
        '9NS' => 'E02003025',
        '9NT' => 'E02003025',
        '9NU' => 'E02003025',
        '9NW' => 'E02003025',
        '9NY' => 'E02003027',
        '9NZ' => 'E02003025',
        '9PA' => 'E02003027',
        '9PB' => 'E02003027',
        '9PD' => 'E02003027',
        '9PE' => 'E02003027',
        '9PF' => 'E02003027',
        '9PG' => 'E02003027',
        '9PH' => 'E02003027',
        '9PJ' => 'E02003027',
        '9PL' => 'E02003021',
        '9PN' => 'E02003021',
        '9PP' => 'E02003021',
        '9PQ' => 'E02003027',
        '9PR' => 'E02003021',
        '9PS' => 'E02003021',
        '9PT' => 'E02003021',
        '9PU' => 'E02003021',
        '9PW' => 'E02003021',
        '9PX' => 'E02003021',
        '9PY' => 'E02003021',
        '9PZ' => 'E02003021',
        '9QA' => 'E02003027',
        '9QG' => 'E02003021',
        '9QH' => 'E02003021',
        '9QJ' => 'E02003021',
        '9QP' => 'E02003027',
        '9QQ' => 'E02003021',
        '9QR' => 'E02003021',
        '9QS' => 'E02003021',
        '9QT' => 'E02003021',
        '9QU' => 'E02003021',
        '9QX' => 'E02003021',
        '9QY' => 'E02003021',
        '9QZ' => 'E02003021',
        '9RA' => 'E02003021',
        '9RB' => 'E02003021',
        '9RD' => 'E02003021',
        '9RE' => 'E02003021',
        '9RF' => 'E02003021',
        '9RG' => 'E02003021',
        '9RH' => 'E02003021',
        '9RP' => 'E02003016',
        '9RQ' => 'E02003021',
        '9RR' => 'E02003016',
        '9RS' => 'E02003021',
        '9RT' => 'E02003021',
        '9RU' => 'E02003016',
        '9RX' => 'E02003021',
        '9RY' => 'E02003016',
        '9RZ' => 'E02003021',
        '9SA' => 'E02003021',
        '9SB' => 'E02003021',
        '9SD' => 'E02003021',
        '9SE' => 'E02003021',
        '9SF' => 'E02003021',
        '9SG' => 'E02003021',
        '9SH' => 'E02003021',
        '9SJ' => 'E02003021',
        '9SL' => 'E02003025',
        '9SN' => 'E02003025',
        '9SQ' => 'E02003021',
        '9SR' => 'E02003025',
        '9SS' => 'E02003025',
        '9ST' => 'E02003025',
        '9SU' => 'E02003025',
        '9SX' => 'E02003025',
        '9SY' => 'E02003025',
        '9SZ' => 'E02003025',
        '9TA' => 'E02003025',
        '9TB' => 'E02003025',
        '9TD' => 'E02003025',
        '9TE' => 'E02003025',
        '9TF' => 'E02003025',
        '9TG' => 'E02003025',
        '9TH' => 'E02003025',
        '9TJ' => 'E02003025',
        '9TL' => 'E02003025',
        '9TN' => 'E02003025',
        '9TP' => 'E02003025',
        '9TQ' => 'E02003025',
        '9TS' => 'E02003025',
        '9TT' => 'E02003025',
        '9TU' => 'E02003025',
        '9TW' => 'E02003025',
        '9TX' => 'E02003025',
        '9TY' => 'E02003021',
        '9TZ' => 'E02003025',
        '9UA' => 'E02003025',
        '9UB' => 'E02003025',
        '9UD' => 'E02003025',
        '9UE' => 'E02003025',
        '9UF' => 'E02003025',
        '9UG' => 'E02003025',
        '9UH' => 'E02003016',
        '9UJ' => 'E02003025',
        '9UL' => 'E02003025',
        '9UN' => 'E02003016',
        '9UP' => 'E02003025',
        '9UQ' => 'E02003025',
        '9WX' => 'E02003031',
        '9WY' => 'E02003025',
        '9WZ' => 'E02003031',
        '9XA' => 'E02003025',
        '9XB' => 'E02003025',
        '9XD' => 'E02003025',
        '9XE' => 'E02003016',
        '9XF' => 'E02003016',
        '9XG' => 'E02003025',
        '9XH' => 'E02003025',
        '9XJ' => 'E02003025',
        '9XL' => 'E02003025',
        '9XN' => 'E02003025',
        '9XP' => 'E02003025',
        '9XQ' => 'E02003025',
        '9XR' => 'E02003025',
        '9XS' => 'E02003025',
        '9XT' => 'E02003025',
        '9XU' => 'E02003025',
        '9XW' => 'E02003025',
        '9XX' => 'E02003025',
        '9XY' => 'E02003025',
        '9YA' => 'E02003025',
        '9YB' => 'E02003025',
        '9YD' => 'E02003025',
        '9YE' => 'E02003025',
        '9YF' => 'E02003025',
        '9YG' => 'E02003025',
        '9YH' => 'E02003025',
        '9YJ' => 'E02003025',
        '9YL' => 'E02003016',
        '9YN' => 'E02003025',
        '9YP' => 'E02003016',
        '9YQ' => 'E02003025',
        '9YR' => 'E02003025',
        '9YS' => 'E02003016',
        '9YT' => 'E02003016',
        '9YU' => 'E02003106',
        '9YW' => 'E02003016',
        '9YZ' => 'E02003025',
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