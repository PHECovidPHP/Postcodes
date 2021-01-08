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
final class DL15
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02004351',
        '0AB' => 'E02004351',
        '0AD' => 'E02004351',
        '0AE' => 'E02004351',
        '0AF' => 'E02004350',
        '0AG' => 'E02004351',
        '0AH' => 'E02004351',
        '0AJ' => 'E02004351',
        '0AL' => 'E02004351',
        '0AN' => 'E02004351',
        '0AP' => 'E02004350',
        '0AQ' => 'E02004350',
        '0AR' => 'E02004351',
        '0AS' => 'E02004351',
        '0AT' => 'E02004351',
        '0AU' => 'E02004351',
        '0AW' => 'E02004351',
        '0AX' => 'E02004351',
        '0AY' => 'E02004351',
        '0AZ' => 'E02004351',
        '0BA' => 'E02004351',
        '0BB' => 'E02004351',
        '0BD' => 'E02004351',
        '0BE' => 'E02004351',
        '0BF' => 'E02004350',
        '0BG' => 'E02004351',
        '0BH' => 'E02004351',
        '0BJ' => 'E02004351',
        '0BL' => 'E02004351',
        '0BN' => 'E02004351',
        '0BP' => 'E02004351',
        '0BQ' => 'E02004351',
        '0BU' => 'E02004351',
        '0BW' => 'E02004351',
        '0DA' => 'E02004351',
        '0DB' => 'E02004351',
        '0DD' => 'E02004350',
        '0DE' => 'E02004351',
        '0DF' => 'E02004351',
        '0DG' => 'E02004351',
        '0DH' => 'E02004351',
        '0DJ' => 'E02004351',
        '0DL' => 'E02004351',
        '0DN' => 'E02004351',
        '0DP' => 'E02004350',
        '0DQ' => 'E02004351',
        '0DR' => 'E02004350',
        '0DS' => 'E02004350',
        '0DT' => 'E02004350',
        '0DU' => 'E02004350',
        '0DW' => 'E02004350',
        '0DX' => 'E02004350',
        '0DY' => 'E02004350',
        '0DZ' => 'E02004350',
        '0EA' => 'E02004350',
        '0EB' => 'E02004350',
        '0ED' => 'E02004350',
        '0EE' => 'E02004350',
        '0EF' => 'E02004350',
        '0EG' => 'E02004350',
        '0EH' => 'E02004351',
        '0EJ' => 'E02004350',
        '0EL' => 'E02004350',
        '0EN' => 'E02004350',
        '0EP' => 'E02004350',
        '0EQ' => 'E02004351',
        '0ER' => 'E02004350',
        '0ES' => 'E02004350',
        '0ET' => 'E02004350',
        '0EU' => 'E02004350',
        '0EW' => 'E02004350',
        '0EX' => 'E02004350',
        '0EY' => 'E02004350',
        '0EZ' => 'E02004351',
        '0FB' => 'E02004351',
        '0FG' => 'E02004350',
        '0GA' => 'E02004354',
        '0GB' => 'E02004350',
        '0GD' => 'E02004350',
        '0GE' => 'E02004350',
        '0GF' => 'E02004350',
        '0GG' => 'E02004350',
        '0GH' => 'E02004351',
        '0GJ' => 'E02004351',
        '0GL' => 'E02004351',
        '0GN' => 'E02004351',
        '0GP' => 'E02004351',
        '0GQ' => 'E02004351',
        '0GR' => 'E02004351',
        '0GS' => 'E02004351',
        '0GT' => 'E02004351',
        '0GU' => 'E02004351',
        '0HA' => 'E02004351',
        '0HB' => 'E02004350',
        '0HD' => 'E02004350',
        '0HG' => 'E02004350',
        '0HH' => 'E02004350',
        '0HJ' => 'E02004350',
        '0HL' => 'E02004350',
        '0HN' => 'E02004350',
        '0HP' => 'E02004350',
        '0HQ' => 'E02004350',
        '0HR' => 'E02004350',
        '0HS' => 'E02004350',
        '0HT' => 'E02004350',
        '0HU' => 'E02004350',
        '0HW' => 'E02004350',
        '0HX' => 'E02004350',
        '0HY' => 'E02004350',
        '0HZ' => 'E02004350',
        '0JA' => 'E02004350',
        '0JG' => 'E02004354',
        '0JH' => 'E02004354',
        '0JJ' => 'E02004354',
        '0JL' => 'E02004354',
        '0JN' => 'E02004354',
        '0JP' => 'E02004354',
        '0JQ' => 'E02004354',
        '0JR' => 'E02004354',
        '0JS' => 'E02004354',
        '0JT' => 'E02004354',
        '0JU' => 'E02004354',
        '0JW' => 'E02004354',
        '0JX' => 'E02004354',
        '0JY' => 'E02004354',
        '0JZ' => 'E02004354',
        '0LA' => 'E02004354',
        '0LB' => 'E02004354',
        '0LD' => 'E02004354',
        '0LE' => 'E02004354',
        '0LF' => 'E02004354',
        '0LG' => 'E02004354',
        '0LH' => 'E02004354',
        '0LJ' => 'E02004354',
        '0LL' => 'E02004354',
        '0LN' => 'E02004354',
        '0LP' => 'E02004354',
        '0LQ' => 'E02004354',
        '0LR' => 'E02004354',
        '0LS' => 'E02004354',
        '0LT' => 'E02004351',
        '0LU' => 'E02004351',
        '0LW' => 'E02004354',
        '0LX' => 'E02004350',
        '0LY' => 'E02004351',
        '0LZ' => 'E02004351',
        '0NA' => 'E02004351',
        '0ND' => 'E02004351',
        '0NF' => 'E02004351',
        '0NG' => 'E02004351',
        '0NH' => 'E02004351',
        '0NJ' => 'E02004351',
        '0NL' => 'E02004351',
        '0NN' => 'E02004351',
        '0NP' => 'E02004351',
        '0NQ' => 'E02004351',
        '0NR' => 'E02004351',
        '0NS' => 'E02004351',
        '0NT' => 'E02004351',
        '0NU' => 'E02004351',
        '0NW' => 'E02004351',
        '0NX' => 'E02004351',
        '0PA' => 'E02004350',
        '0PB' => 'E02004350',
        '0PD' => 'E02004350',
        '0PE' => 'E02004350',
        '0PF' => 'E02004350',
        '0PG' => 'E02004351',
        '0PH' => 'E02004351',
        '0PJ' => 'E02004351',
        '0PL' => 'E02004351',
        '0PN' => 'E02004351',
        '0PP' => 'E02004351',
        '0PQ' => 'E02004350',
        '0PR' => 'E02004351',
        '0PS' => 'E02004351',
        '0PT' => 'E02004351',
        '0PU' => 'E02004351',
        '0PW' => 'E02004351',
        '0PX' => 'E02004351',
        '0PY' => 'E02004351',
        '0PZ' => 'E02004351',
        '0QA' => 'E02004351',
        '0QB' => 'E02004351',
        '0QD' => 'E02004351',
        '0QE' => 'E02004351',
        '0QF' => 'E02004351',
        '0QG' => 'E02004351',
        '0QH' => 'E02004351',
        '0QJ' => 'E02004351',
        '0QL' => 'E02004351',
        '0QN' => 'E02004351',
        '0QP' => 'E02004351',
        '0QQ' => 'E02004351',
        '0QR' => 'E02004351',
        '0QS' => 'E02004351',
        '0QT' => 'E02004350',
        '0QU' => 'E02004351',
        '0QW' => 'E02004351',
        '0QX' => 'E02004351',
        '0QY' => 'E02004350',
        '0QZ' => 'E02004350',
        '0RA' => 'E02004354',
        '0RB' => 'E02004354',
        '0RD' => 'E02004354',
        '0RE' => 'E02004354',
        '0RF' => 'E02004354',
        '0RG' => 'E02004354',
        '0RH' => 'E02004354',
        '0RJ' => 'E02004354',
        '0RL' => 'E02004350',
        '0RN' => 'E02004350',
        '0RP' => 'E02004350',
        '0RQ' => 'E02004354',
        '0RR' => 'E02004350',
        '0RS' => 'E02004350',
        '0RT' => 'E02004350',
        '0RU' => 'E02004350',
        '0RW' => 'E02004350',
        '0RX' => 'E02004350',
        '0RY' => 'E02004350',
        '0RZ' => 'E02004351',
        '0SA' => 'E02004350',
        '0SB' => 'E02004350',
        '0SD' => 'E02004350',
        '0SE' => 'E02004350',
        '0SF' => 'E02004350',
        '0SG' => 'E02004354',
        '0SH' => 'E02004350',
        '0SP' => 'E02004350',
        '0SR' => 'E02004350',
        '0ST' => 'E02004350',
        '0SU' => 'E02004350',
        '0SW' => 'E02004350',
        '0SX' => 'E02004350',
        '0SY' => 'E02004350',
        '0SZ' => 'E02004350',
        '0TA' => 'E02004350',
        '0TB' => 'E02004350',
        '0TD' => 'E02004350',
        '0TE' => 'E02004350',
        '0TF' => 'E02004350',
        '0TG' => 'E02004350',
        '0TH' => 'E02004350',
        '0TJ' => 'E02004350',
        '0TL' => 'E02004350',
        '0TN' => 'E02004350',
        '0TP' => 'E02004351',
        '0TQ' => 'E02004350',
        '0TR' => 'E02004350',
        '0TS' => 'E02004350',
        '0TT' => 'E02004350',
        '0TU' => 'E02004350',
        '0TW' => 'E02004350',
        '0TX' => 'E02004350',
        '0TY' => 'E02004351',
        '0TZ' => 'E02004350',
        '0UA' => 'E02004350',
        '0UB' => 'E02004350',
        '0UE' => 'E02004350',
        '0UG' => 'E02004350',
        '0UH' => 'E02004351',
        '0UJ' => 'E02004350',
        '0UL' => 'E02004350',
        '0UN' => 'E02004350',
        '0UP' => 'E02004351',
        '0UQ' => 'E02004351',
        '0UR' => 'E02004351',
        '0UT' => 'E02004351',
        '0UU' => 'E02004351',
        '0UW' => 'E02004350',
        '0UX' => 'E02004351',
        '0UY' => 'E02004351',
        '0UZ' => 'E02004351',
        '0WW' => 'E02004353',
        '0WX' => 'E02004353',
        '0WY' => 'E02004353',
        '0WZ' => 'E02004353',
        '0XA' => 'E02004351',
        '0XB' => 'E02004351',
        '0XD' => 'E02004351',
        '0XE' => 'E02004351',
        '0XF' => 'E02004354',
        '0XG' => 'E02004350',
        '0XH' => 'E02004350',
        '0XJ' => 'E02004354',
        '0XL' => 'E02004354',
        '0XN' => 'E02004354',
        '0XP' => 'E02004354',
        '0XQ' => 'E02004350',
        '0XR' => 'E02004354',
        '0XW' => 'E02004354',
        '0YT' => 'E02004353',
        '0YU' => 'E02004353',
        '0YX' => 'E02004351',
        '0YY' => 'E02004351',
        '0YZ' => 'E02004351',
        '8AA' => 'E02004349',
        '8AB' => 'E02004349',
        '8AD' => 'E02004349',
        '8AE' => 'E02004349',
        '8AF' => 'E02004354',
        '8AG' => 'E02004354',
        '8AH' => 'E02004354',
        '8AJ' => 'E02004354',
        '8AL' => 'E02004354',
        '8AN' => 'E02004354',
        '8AP' => 'E02004354',
        '8AQ' => 'E02004354',
        '8AR' => 'E02004354',
        '8AS' => 'E02004354',
        '8AT' => 'E02004354',
        '8AU' => 'E02004354',
        '8AW' => 'E02004354',
        '8AX' => 'E02004354',
        '8AY' => 'E02004354',
        '8AZ' => 'E02004354',
        '8BA' => 'E02004348',
        '8BB' => 'E02004348',
        '8BD' => 'E02004348',
        '8BE' => 'E02004349',
        '8BF' => 'E02004349',
        '8BG' => 'E02004349',
        '8BH' => 'E02004349',
        '8BJ' => 'E02004349',
        '8BL' => 'E02004349',
        '8BN' => 'E02004349',
        '8BP' => 'E02004349',
        '8BQ' => 'E02004349',
        '8BW' => 'E02004349',
        '8DA' => 'E02004349',
        '8DB' => 'E02004349',
        '8DD' => 'E02004349',
        '8DE' => 'E02004349',
        '8DF' => 'E02004349',
        '8DG' => 'E02004349',
        '8DH' => 'E02004349',
        '8DJ' => 'E02004348',
        '8DL' => 'E02004348',
        '8DN' => 'E02004348',
        '8DP' => 'E02004348',
        '8DQ' => 'E02004349',
        '8DR' => 'E02004348',
        '8DS' => 'E02004348',
        '8DT' => 'E02004348',
        '8DU' => 'E02004349',
        '8DW' => 'E02004348',
        '8DX' => 'E02004348',
        '8DY' => 'E02004348',
        '8DZ' => 'E02004349',
        '8EA' => 'E02004349',
        '8EB' => 'E02004348',
        '8ED' => 'E02004348',
        '8EE' => 'E02004348',
        '8EF' => 'E02004354',
        '8EG' => 'E02004349',
        '8EH' => 'E02004349',
        '8EJ' => 'E02004349',
        '8EL' => 'E02004354',
        '8EN' => 'E02004349',
        '8EP' => 'E02004354',
        '8EQ' => 'E02004349',
        '8ER' => 'E02004354',
        '8ES' => 'E02004349',
        '8ET' => 'E02004349',
        '8EU' => 'E02004349',
        '8EW' => 'E02004354',
        '8EX' => 'E02004349',
        '8EY' => 'E02004349',
        '8EZ' => 'E02004349',
        '8FA' => 'E02004349',
        '8FB' => 'E02004349',
        '8FD' => 'E02004354',
        '8GA' => 'E02004349',
        '8GB' => 'E02004349',
        '8GH' => 'E02004349',
        '8HA' => 'E02004349',
        '8HB' => 'E02004349',
        '8HD' => 'E02004349',
        '8HE' => 'E02004349',
        '8HF' => 'E02004349',
        '8HG' => 'E02004349',
        '8HH' => 'E02004349',
        '8HJ' => 'E02004349',
        '8HL' => 'E02004349',
        '8HN' => 'E02004349',
        '8HP' => 'E02004349',
        '8HQ' => 'E02004349',
        '8HR' => 'E02004349',
        '8HS' => 'E02004349',
        '8HT' => 'E02004349',
        '8HU' => 'E02004349',
        '8HW' => 'E02004349',
        '8HX' => 'E02004349',
        '8HY' => 'E02004349',
        '8HZ' => 'E02004349',
        '8JA' => 'E02004349',
        '8JB' => 'E02004349',
        '8JD' => 'E02004349',
        '8JE' => 'E02004349',
        '8JF' => 'E02004349',
        '8JG' => 'E02004349',
        '8JH' => 'E02004349',
        '8JJ' => 'E02004350',
        '8JL' => 'E02004349',
        '8JN' => 'E02004349',
        '8JP' => 'E02004349',
        '8JQ' => 'E02004349',
        '8JR' => 'E02004349',
        '8JS' => 'E02004349',
        '8JT' => 'E02004350',
        '8JU' => 'E02004349',
        '8JW' => 'E02004349',
        '8JX' => 'E02004350',
        '8JY' => 'E02004349',
        '8JZ' => 'E02004350',
        '8LA' => 'E02004350',
        '8LB' => 'E02004350',
        '8LD' => 'E02004350',
        '8LE' => 'E02004350',
        '8LF' => 'E02004350',
        '8LG' => 'E02004350',
        '8LH' => 'E02004350',
        '8LJ' => 'E02004350',
        '8LL' => 'E02004350',
        '8LN' => 'E02004350',
        '8LP' => 'E02004350',
        '8LQ' => 'E02004350',
        '8LR' => 'E02004350',
        '8LS' => 'E02004350',
        '8LT' => 'E02004350',
        '8LU' => 'E02004350',
        '8LW' => 'E02004350',
        '8LX' => 'E02004350',
        '8LY' => 'E02004350',
        '8LZ' => 'E02004350',
        '8NA' => 'E02004350',
        '8NB' => 'E02004350',
        '8ND' => 'E02004350',
        '8NE' => 'E02004350',
        '8NF' => 'E02004350',
        '8NG' => 'E02004350',
        '8NH' => 'E02004350',
        '8NJ' => 'E02004350',
        '8NL' => 'E02004350',
        '8NN' => 'E02004350',
        '8NP' => 'E02004350',
        '8NQ' => 'E02004350',
        '8NR' => 'E02004350',
        '8NS' => 'E02004349',
        '8NT' => 'E02004349',
        '8NU' => 'E02004349',
        '8NX' => 'E02004349',
        '8PA' => 'E02004349',
        '8PB' => 'E02004349',
        '8PD' => 'E02004349',
        '8PE' => 'E02004349',
        '8PF' => 'E02004349',
        '8PG' => 'E02004349',
        '8PH' => 'E02004349',
        '8PJ' => 'E02004349',
        '8PL' => 'E02004349',
        '8PN' => 'E02004349',
        '8PP' => 'E02004349',
        '8PQ' => 'E02004349',
        '8PR' => 'E02004349',
        '8PS' => 'E02004349',
        '8PT' => 'E02004349',
        '8PU' => 'E02004350',
        '8PW' => 'E02004349',
        '8PX' => 'E02004349',
        '8PY' => 'E02004349',
        '8PZ' => 'E02004349',
        '8QB' => 'E02004350',
        '8QE' => 'E02004350',
        '8QF' => 'E02004350',
        '8QG' => 'E02004350',
        '8QH' => 'E02004350',
        '8QJ' => 'E02004350',
        '8QL' => 'E02004349',
        '8QN' => 'E02004349',
        '8QP' => 'E02004350',
        '8QQ' => 'E02004350',
        '8QR' => 'E02004350',
        '8QS' => 'E02004349',
        '8QT' => 'E02004350',
        '8QU' => 'E02004349',
        '8QW' => 'E02004350',
        '8QX' => 'E02004350',
        '8RA' => 'E02004350',
        '8RB' => 'E02004349',
        '8SA' => 'E02004350',
        '8WU' => 'E02004353',
        '8WW' => 'E02004353',
        '8WX' => 'E02004353',
        '8WY' => 'E02004350',
        '8WZ' => 'E02004350',
        '8XX' => 'E02004349',
        '8YP' => 'E02004353',
        '8YQ' => 'E02004353',
        '8YR' => 'E02004353',
        '8YS' => 'E02004349',
        '8YT' => 'E02004349',
        '8YU' => 'E02004350',
        '8YX' => 'E02004353',
        '8YY' => 'E02004350',
        '8YZ' => 'E02004353',
        '9AA' => 'E02004350',
        '9AB' => 'E02004350',
        '9AD' => 'E02004350',
        '9AE' => 'E02004350',
        '9AF' => 'E02004350',
        '9AG' => 'E02004350',
        '9AH' => 'E02004349',
        '9AJ' => 'E02004350',
        '9AL' => 'E02004350',
        '9AN' => 'E02004350',
        '9AP' => 'E02004317',
        '9AQ' => 'E02004350',
        '9AR' => 'E02004316',
        '9AS' => 'E02004316',
        '9AT' => 'E02004317',
        '9AU' => 'E02004316',
        '9AW' => 'E02004350',
        '9AX' => 'E02004350',
        '9AY' => 'E02004350',
        '9AZ' => 'E02004350',
        '9BA' => 'E02004350',
        '9BB' => 'E02004350',
        '9BD' => 'E02004350',
        '9BE' => 'E02004350',
        '9BG' => 'E02004350',
        '9BH' => 'E02004350',
        '9BJ' => 'E02004350',
        '9BL' => 'E02004350',
        '9BN' => 'E02004350',
        '9BP' => 'E02004350',
        '9BQ' => 'E02004350',
        '9BW' => 'E02004350',
        '9BY' => 'E02004350',
        '9DA' => 'E02004350',
        '9DB' => 'E02004350',
        '9DD' => 'E02004350',
        '9DE' => 'E02004350',
        '9DF' => 'E02004350',
        '9DG' => 'E02004350',
        '9DH' => 'E02004350',
        '9DJ' => 'E02004350',
        '9DL' => 'E02004350',
        '9DN' => 'E02004350',
        '9DP' => 'E02004350',
        '9DQ' => 'E02004350',
        '9DR' => 'E02004350',
        '9DS' => 'E02004350',
        '9DT' => 'E02004350',
        '9DU' => 'E02004350',
        '9DW' => 'E02004350',
        '9DX' => 'E02004350',
        '9DY' => 'E02004350',
        '9DZ' => 'E02004350',
        '9EA' => 'E02004350',
        '9EB' => 'E02004350',
        '9ED' => 'E02004350',
        '9EE' => 'E02004350',
        '9EF' => 'E02004350',
        '9EG' => 'E02004350',
        '9EH' => 'E02004350',
        '9EJ' => 'E02004350',
        '9EL' => 'E02004350',
        '9EN' => 'E02004350',
        '9EP' => 'E02004349',
        '9EQ' => 'E02004350',
        '9ER' => 'E02004350',
        '9ES' => 'E02004350',
        '9ET' => 'E02004350',
        '9EW' => 'E02004350',
        '9EY' => 'E02004350',
        '9EZ' => 'E02004350',
        '9FN' => 'E02004350',
        '9FP' => 'E02004349',
        '9FQ' => 'E02004350',
        '9FR' => 'E02004350',
        '9GA' => 'E02004349',
        '9GB' => 'E02004349',
        '9GD' => 'E02004349',
        '9GE' => 'E02004349',
        '9GF' => 'E02004349',
        '9GG' => 'E02004350',
        '9GH' => 'E02004350',
        '9GJ' => 'E02004350',
        '9GL' => 'E02004350',
        '9GN' => 'E02004350',
        '9GP' => 'E02004350',
        '9GQ' => 'E02004350',
        '9GR' => 'E02004350',
        '9GS' => 'E02004349',
        '9GW' => 'E02004350',
        '9HA' => 'E02004350',
        '9HB' => 'E02004350',
        '9HD' => 'E02004350',
        '9HE' => 'E02004350',
        '9HF' => 'E02004350',
        '9HH' => 'E02004350',
        '9HJ' => 'E02004350',
        '9HL' => 'E02004350',
        '9HN' => 'E02004350',
        '9HP' => 'E02004350',
        '9HQ' => 'E02004350',
        '9HR' => 'E02004350',
        '9HS' => 'E02004350',
        '9HT' => 'E02004350',
        '9HU' => 'E02004350',
        '9HW' => 'E02004349',
        '9HX' => 'E02004349',
        '9HY' => 'E02004349',
        '9HZ' => 'E02004349',
        '9JA' => 'E02004349',
        '9JB' => 'E02004349',
        '9JD' => 'E02004349',
        '9JE' => 'E02004349',
        '9JF' => 'E02004349',
        '9JG' => 'E02004349',
        '9JH' => 'E02004349',
        '9JJ' => 'E02004349',
        '9JL' => 'E02004349',
        '9JN' => 'E02004350',
        '9JP' => 'E02004350',
        '9JQ' => 'E02004349',
        '9JR' => 'E02004349',
        '9JS' => 'E02004350',
        '9JT' => 'E02004350',
        '9JU' => 'E02004350',
        '9JW' => 'E02004349',
        '9JX' => 'E02004349',
        '9JY' => 'E02004349',
        '9JZ' => 'E02004349',
        '9LA' => 'E02004349',
        '9LB' => 'E02004349',
        '9LD' => 'E02004349',
        '9LE' => 'E02004349',
        '9LF' => 'E02004349',
        '9LG' => 'E02004349',
        '9LH' => 'E02004349',
        '9LJ' => 'E02004349',
        '9LL' => 'E02004349',
        '9LN' => 'E02004349',
        '9LP' => 'E02004349',
        '9LQ' => 'E02004349',
        '9LR' => 'E02004349',
        '9LS' => 'E02004349',
        '9LT' => 'E02004349',
        '9LU' => 'E02004349',
        '9LW' => 'E02004349',
        '9LX' => 'E02004349',
        '9LY' => 'E02004349',
        '9LZ' => 'E02004349',
        '9NA' => 'E02004349',
        '9NB' => 'E02004349',
        '9ND' => 'E02004349',
        '9NE' => 'E02004349',
        '9NF' => 'E02004349',
        '9NG' => 'E02004349',
        '9NH' => 'E02004349',
        '9NJ' => 'E02004349',
        '9NL' => 'E02004349',
        '9NN' => 'E02004349',
        '9NP' => 'E02004349',
        '9NQ' => 'E02004349',
        '9NR' => 'E02004350',
        '9NS' => 'E02004350',
        '9NT' => 'E02004350',
        '9NU' => 'E02004350',
        '9NW' => 'E02004349',
        '9NX' => 'E02004350',
        '9NY' => 'E02004349',
        '9PA' => 'E02004349',
        '9PB' => 'E02004349',
        '9PD' => 'E02004349',
        '9PE' => 'E02004349',
        '9PF' => 'E02004349',
        '9PG' => 'E02004349',
        '9PH' => 'E02004349',
        '9PJ' => 'E02004349',
        '9PL' => 'E02004349',
        '9PN' => 'E02004349',
        '9PP' => 'E02004350',
        '9PQ' => 'E02004349',
        '9PR' => 'E02004350',
        '9PS' => 'E02004350',
        '9PT' => 'E02004350',
        '9PU' => 'E02004350',
        '9PW' => 'E02004349',
        '9PX' => 'E02004350',
        '9PY' => 'E02004349',
        '9PZ' => 'E02004350',
        '9QA' => 'E02004349',
        '9QB' => 'E02004350',
        '9QD' => 'E02004349',
        '9QE' => 'E02004349',
        '9QF' => 'E02004349',
        '9QG' => 'E02004349',
        '9QJ' => 'E02004349',
        '9QL' => 'E02004349',
        '9QN' => 'E02004350',
        '9QP' => 'E02004350',
        '9QQ' => 'E02004349',
        '9QR' => 'E02004350',
        '9QS' => 'E02004350',
        '9QT' => 'E02004350',
        '9QU' => 'E02004350',
        '9QW' => 'E02004350',
        '9QX' => 'E02004349',
        '9QY' => 'E02004349',
        '9QZ' => 'E02004349',
        '9RA' => 'E02004349',
        '9RB' => 'E02004349',
        '9RD' => 'E02004349',
        '9RE' => 'E02004349',
        '9RF' => 'E02004349',
        '9RG' => 'E02004349',
        '9RH' => 'E02004349',
        '9RJ' => 'E02004349',
        '9RL' => 'E02004349',
        '9RN' => 'E02004350',
        '9RP' => 'E02004349',
        '9RQ' => 'E02004349',
        '9RU' => 'E02004350',
        '9RW' => 'E02004349',
        '9RX' => 'E02004350',
        '9RY' => 'E02004350',
        '9RZ' => 'E02004350',
        '9SA' => 'E02004350',
        '9SB' => 'E02004350',
        '9SD' => 'E02004350',
        '9SE' => 'E02004350',
        '9SF' => 'E02004350',
        '9SG' => 'E02004350',
        '9SH' => 'E02004350',
        '9SJ' => 'E02004350',
        '9SL' => 'E02004350',
        '9SN' => 'E02004350',
        '9SP' => 'E02004350',
        '9SQ' => 'E02004350',
        '9SR' => 'E02004350',
        '9SS' => 'E02004350',
        '9ST' => 'E02004350',
        '9SU' => 'E02004350',
        '9SW' => 'E02004350',
        '9SX' => 'E02004350',
        '9SY' => 'E02004350',
        '9SZ' => 'E02004350',
        '9TA' => 'E02004350',
        '9TB' => 'E02004350',
        '9TD' => 'E02004350',
        '9TE' => 'E02004349',
        '9TF' => 'E02004350',
        '9TG' => 'E02004350',
        '9TH' => 'E02004350',
        '9TJ' => 'E02004350',
        '9TN' => 'E02004350',
        '9TP' => 'E02004350',
        '9TQ' => 'E02004350',
        '9TR' => 'E02004350',
        '9TS' => 'E02004350',
        '9TT' => 'E02004350',
        '9TU' => 'E02004350',
        '9TW' => 'E02004350',
        '9TX' => 'E02004350',
        '9TY' => 'E02004350',
        '9TZ' => 'E02004350',
        '9UA' => 'E02004350',
        '9UB' => 'E02004350',
        '9UD' => 'E02004349',
        '9UE' => 'E02004350',
        '9UF' => 'E02004350',
        '9UG' => 'E02004350',
        '9UH' => 'E02004349',
        '9UJ' => 'E02004349',
        '9UT' => 'E02004350',
        '9UU' => 'E02004350',
        '9UX' => 'E02004350',
        '9UY' => 'E02004350',
        '9UZ' => 'E02004350',
        '9WB' => 'E02004349',
        '9WX' => 'E02004353',
        '9WY' => 'E02004353',
        '9WZ' => 'E02004353',
        '9YE' => 'E02004353',
        '9YF' => 'E02004349',
        '9YG' => 'E02004349',
        '9YH' => 'E02004349',
        '9YJ' => 'E02004349',
        '9YL' => 'E02004349',
        '9YN' => 'E02004349',
        '9YP' => 'E02004349',
        '9YQ' => 'E02004353',
        '9YR' => 'E02004349',
        '9YS' => 'E02004353',
        '9YT' => 'E02004353',
        '9YU' => 'E02004349',
        '9YW' => 'E02004349',
        '9YX' => 'E02004350',
        '9YY' => 'E02004353',
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
