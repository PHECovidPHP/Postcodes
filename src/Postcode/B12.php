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
final class B12
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02006896',
        '0AB' => 'E02001897',
        '0AD' => 'E02006896',
        '0AE' => 'E02006896',
        '0AF' => 'E02006896',
        '0AG' => 'E02006896',
        '0AH' => 'E02006896',
        '0AL' => 'E02006896',
        '0AN' => 'E02006896',
        '0AP' => 'E02001909',
        '0AQ' => 'E02001903',
        '0AR' => 'E02001909',
        '0AT' => 'E02001909',
        '0AU' => 'E02001909',
        '0AX' => 'E02001909',
        '0AY' => 'E02001909',
        '0AZ' => 'E02001909',
        '0BA' => 'E02001909',
        '0BG' => 'E02001909',
        '0BL' => 'E02001909',
        '0BP' => 'E02001909',
        '0BS' => 'E02001897',
        '0BT' => 'E02001909',
        '0BU' => 'E02001909',
        '0BX' => 'E02001897',
        '0BY' => 'E02001897',
        '0BZ' => 'E02001904',
        '0DA' => 'E02001897',
        '0DB' => 'E02001897',
        '0DD' => 'E02001897',
        '0DE' => 'E02001897',
        '0DF' => 'E02001897',
        '0DG' => 'E02001897',
        '0DH' => 'E02001897',
        '0DJ' => 'E02001897',
        '0DL' => 'E02001897',
        '0DN' => 'E02001909',
        '0DP' => 'E02001909',
        '0DQ' => 'E02001903',
        '0DS' => 'E02001909',
        '0DT' => 'E02001909',
        '0DU' => 'E02001909',
        '0DX' => 'E02001909',
        '0DY' => 'E02001909',
        '0DZ' => 'E02001909',
        '0EA' => 'E02001897',
        '0EB' => 'E02001909',
        '0EG' => 'E02001897',
        '0EH' => 'E02001897',
        '0EJ' => 'E02001897',
        '0EL' => 'E02001897',
        '0EN' => 'E02001897',
        '0EP' => 'E02001897',
        '0EQ' => 'E02001903',
        '0ER' => 'E02001897',
        '0ES' => 'E02001897',
        '0ET' => 'E02006896',
        '0EU' => 'E02001897',
        '0FW' => 'E02006896',
        '0HA' => 'E02006896',
        '0HB' => 'E02006896',
        '0HD' => 'E02006896',
        '0HE' => 'E02001897',
        '0HF' => 'E02001897',
        '0HG' => 'E02006896',
        '0HH' => 'E02006896',
        '0HJ' => 'E02006896',
        '0HL' => 'E02006896',
        '0HN' => 'E02001897',
        '0HP' => 'E02006896',
        '0HT' => 'E02001897',
        '0HU' => 'E02001897',
        '0HX' => 'E02001903',
        '0HZ' => 'E02001897',
        '0JA' => 'E02001897',
        '0JB' => 'E02001897',
        '0JD' => 'E02006896',
        '0JE' => 'E02006896',
        '0JG' => 'E02006896',
        '0JJ' => 'E02001897',
        '0JL' => 'E02001897',
        '0JP' => 'E02001897',
        '0JS' => 'E02006896',
        '0JT' => 'E02001903',
        '0JU' => 'E02006900',
        '0JX' => 'E02006896',
        '0JY' => 'E02006896',
        '0JZ' => 'E02006896',
        '0LA' => 'E02001897',
        '0LB' => 'E02006900',
        '0LD' => 'E02006900',
        '0LE' => 'E02006896',
        '0LH' => 'E02006900',
        '0LJ' => 'E02006900',
        '0LL' => 'E02006896',
        '0LN' => 'E02006896',
        '0LP' => 'E02006900',
        '0LQ' => 'E02006900',
        '0LR' => 'E02006900',
        '0LS' => 'E02006896',
        '0LT' => 'E02006900',
        '0LU' => 'E02006900',
        '0LW' => 'E02001904',
        '0LX' => 'E02006896',
        '0NA' => 'E02006896',
        '0NB' => 'E02006896',
        '0ND' => 'E02006896',
        '0NE' => 'E02006896',
        '0NF' => 'E02006896',
        '0NG' => 'E02006896',
        '0NH' => 'E02006896',
        '0NJ' => 'E02006896',
        '0NL' => 'E02006896',
        '0NN' => 'E02001903',
        '0NP' => 'E02006896',
        '0NQ' => 'E02006896',
        '0NR' => 'E02006896',
        '0NS' => 'E02006896',
        '0NT' => 'E02006896',
        '0NU' => 'E02006896',
        '0NW' => 'E02006896',
        '0NX' => 'E02006896',
        '0NY' => 'E02006896',
        '0NZ' => 'E02006896',
        '0PA' => 'E02006896',
        '0PB' => 'E02006896',
        '0PD' => 'E02001903',
        '0PE' => 'E02001897',
        '0PF' => 'E02006896',
        '0PG' => 'E02006896',
        '0PH' => 'E02006896',
        '0PJ' => 'E02006896',
        '0PL' => 'E02006896',
        '0PN' => 'E02006896',
        '0PP' => 'E02001897',
        '0PQ' => 'E02006896',
        '0PR' => 'E02006896',
        '0PS' => 'E02006896',
        '0PT' => 'E02006896',
        '0PU' => 'E02006896',
        '0PW' => 'E02006896',
        '0PX' => 'E02001897',
        '0PY' => 'E02006896',
        '0PZ' => 'E02001897',
        '0QA' => 'E02006896',
        '0QB' => 'E02006896',
        '0QD' => 'E02006896',
        '0QE' => 'E02006896',
        '0QF' => 'E02006896',
        '0QG' => 'E02006896',
        '0QH' => 'E02006896',
        '0QJ' => 'E02006896',
        '0QL' => 'E02006896',
        '0QN' => 'E02006896',
        '0QP' => 'E02006896',
        '0QR' => 'E02006896',
        '0QS' => 'E02006896',
        '0QU' => 'E02006896',
        '0QX' => 'E02006896',
        '0QY' => 'E02006896',
        '0RA' => 'E02006896',
        '0RB' => 'E02006896',
        '0RD' => 'E02006896',
        '0RE' => 'E02006896',
        '0RG' => 'E02006896',
        '0RH' => 'E02006896',
        '0RJ' => 'E02006896',
        '0RL' => 'E02006896',
        '0RN' => 'E02001897',
        '0RP' => 'E02006896',
        '0RQ' => 'E02001897',
        '0RR' => 'E02001897',
        '0RT' => 'E02006896',
        '0RX' => 'E02006896',
        '0RY' => 'E02006896',
        '0SA' => 'E02006896',
        '0SB' => 'E02006896',
        '0SD' => 'E02006896',
        '0SH' => 'E02006896',
        '0SJ' => 'E02006896',
        '0SL' => 'E02001897',
        '0SN' => 'E02006896',
        '0SP' => 'E02001904',
        '0SQ' => 'E02006896',
        '0SR' => 'E02001903',
        '0SS' => 'E02006896',
        '0ST' => 'E02006896',
        '0SU' => 'E02006896',
        '0SW' => 'E02006896',
        '0SX' => 'E02006896',
        '0SY' => 'E02001897',
        '0SZ' => 'E02001897',
        '0TA' => 'E02001897',
        '0TB' => 'E02001897',
        '0TD' => 'E02001897',
        '0TJ' => 'E02001897',
        '0TL' => 'E02001897',
        '0TN' => 'E02001897',
        '0TP' => 'E02001897',
        '0TR' => 'E02001897',
        '0TS' => 'E02001897',
        '0TT' => 'E02001897',
        '0TU' => 'E02001897',
        '0TX' => 'E02006896',
        '0TY' => 'E02001897',
        '0TZ' => 'E02001903',
        '0UA' => 'E02001897',
        '0UB' => 'E02006896',
        '0UD' => 'E02001897',
        '0UE' => 'E02001904',
        '0UF' => 'E02001897',
        '0UG' => 'E02001903',
        '0UH' => 'E02001897',
        '0UJ' => 'E02001897',
        '0UL' => 'E02001897',
        '0UN' => 'E02001903',
        '0UP' => 'E02001897',
        '0UQ' => 'E02001903',
        '0UR' => 'E02001897',
        '0US' => 'E02006896',
        '0UT' => 'E02001897',
        '0UU' => 'E02001897',
        '0UW' => 'E02001903',
        '0UX' => 'E02001897',
        '0UY' => 'E02001897',
        '0UZ' => 'E02001897',
        '0WA' => 'E02001904',
        '0WD' => 'E02001897',
        '0XA' => 'E02001897',
        '0XB' => 'E02001897',
        '0XD' => 'E02001897',
        '0XE' => 'E02001897',
        '0XF' => 'E02001897',
        '0XG' => 'E02001897',
        '0XH' => 'E02001897',
        '0XJ' => 'E02001897',
        '0XL' => 'E02001904',
        '0XN' => 'E02001897',
        '0XP' => 'E02001897',
        '0XQ' => 'E02001897',
        '0XR' => 'E02001897',
        '0XS' => 'E02001897',
        '0XT' => 'E02001897',
        '0XU' => 'E02001897',
        '0XW' => 'E02001903',
        '0XX' => 'E02001897',
        '0XY' => 'E02001897',
        '0XZ' => 'E02001897',
        '0YA' => 'E02001897',
        '0YB' => 'E02001897',
        '0YD' => 'E02001897',
        '0YE' => 'E02001897',
        '0YF' => 'E02006896',
        '0YG' => 'E02001897',
        '0YH' => 'E02001897',
        '0YJ' => 'E02001897',
        '0YL' => 'E02001897',
        '0YN' => 'E02006896',
        '0YP' => 'E02001903',
        '0YQ' => 'E02001897',
        '0YR' => 'E02001897',
        '0YS' => 'E02001897',
        '0YT' => 'E02001897',
        '0YU' => 'E02001897',
        '0YW' => 'E02001903',
        '0YX' => 'E02001904',
        '0YY' => 'E02001897',
        '0YZ' => 'E02001897',
        '0ZD' => 'E02001903',
        '0ZN' => 'E02001903',
        '0ZR' => 'E02001903',
        '8AA' => 'E02001909',
        '8AB' => 'E02001919',
        '8AD' => 'E02001909',
        '8AF' => 'E02001903',
        '8AG' => 'E02001903',
        '8AH' => 'E02001903',
        '8AJ' => 'E02001903',
        '8AL' => 'E02001909',
        '8AN' => 'E02001909',
        '8AP' => 'E02001909',
        '8AQ' => 'E02001903',
        '8AR' => 'E02001909',
        '8AS' => 'E02001909',
        '8AT' => 'E02001909',
        '8AU' => 'E02001909',
        '8AW' => 'E02006901',
        '8AX' => 'E02001909',
        '8AY' => 'E02001909',
        '8AZ' => 'E02001909',
        '8BA' => 'E02001909',
        '8BB' => 'E02001903',
        '8BD' => 'E02001903',
        '8BE' => 'E02001909',
        '8BG' => 'E02001909',
        '8BH' => 'E02001909',
        '8BJ' => 'E02001909',
        '8BL' => 'E02001909',
        '8BN' => 'E02001910',
        '8BP' => 'E02001910',
        '8BS' => 'E02001910',
        '8BT' => 'E02001909',
        '8BU' => 'E02001910',
        '8BW' => 'E02001909',
        '8BX' => 'E02001909',
        '8BY' => 'E02001909',
        '8BZ' => 'E02001903',
        '8DA' => 'E02001910',
        '8DB' => 'E02001909',
        '8DD' => 'E02001909',
        '8DE' => 'E02001909',
        '8DF' => 'E02001909',
        '8DG' => 'E02001909',
        '8DH' => 'E02001903',
        '8DJ' => 'E02001909',
        '8DL' => 'E02001903',
        '8DN' => 'E02001903',
        '8DP' => 'E02001903',
        '8DQ' => 'E02001909',
        '8DR' => 'E02001903',
        '8DS' => 'E02001903',
        '8DT' => 'E02001903',
        '8DU' => 'E02001909',
        '8DX' => 'E02001903',
        '8DZ' => 'E02001909',
        '8EA' => 'E02001903',
        '8EB' => 'E02001903',
        '8ED' => 'E02001903',
        '8EE' => 'E02001909',
        '8EG' => 'E02001903',
        '8EH' => 'E02001903',
        '8EJ' => 'E02001903',
        '8EL' => 'E02001903',
        '8EN' => 'E02001903',
        '8EP' => 'E02001903',
        '8EQ' => 'E02001903',
        '8ER' => 'E02001909',
        '8ES' => 'E02001903',
        '8ET' => 'E02001909',
        '8EU' => 'E02001903',
        '8EW' => 'E02001903',
        '8EY' => 'E02001903',
        '8HA' => 'E02001903',
        '8HB' => 'E02001909',
        '8HD' => 'E02006901',
        '8HE' => 'E02001903',
        '8HF' => 'E02001909',
        '8HG' => 'E02001903',
        '8HH' => 'E02001903',
        '8HJ' => 'E02001903',
        '8HL' => 'E02001903',
        '8HN' => 'E02001909',
        '8HP' => 'E02001909',
        '8HQ' => 'E02001903',
        '8HR' => 'E02001909',
        '8HS' => 'E02001903',
        '8HT' => 'E02001903',
        '8HU' => 'E02001910',
        '8HW' => 'E02001909',
        '8HX' => 'E02001910',
        '8HZ' => 'E02001910',
        '8JA' => 'E02001903',
        '8JB' => 'E02001909',
        '8JD' => 'E02001903',
        '8JE' => 'E02001909',
        '8JF' => 'E02001903',
        '8JG' => 'E02001903',
        '8JH' => 'E02001903',
        '8JJ' => 'E02001903',
        '8JL' => 'E02001903',
        '8JN' => 'E02001903',
        '8JP' => 'E02001909',
        '8JQ' => 'E02001903',
        '8JR' => 'E02001909',
        '8JS' => 'E02001909',
        '8JT' => 'E02001903',
        '8JU' => 'E02001903',
        '8JW' => 'E02001909',
        '8JX' => 'E02001909',
        '8JY' => 'E02001909',
        '8JZ' => 'E02001910',
        '8LA' => 'E02001910',
        '8LB' => 'E02001909',
        '8LD' => 'E02001909',
        '8LE' => 'E02001903',
        '8LF' => 'E02001909',
        '8LG' => 'E02001909',
        '8LH' => 'E02001909',
        '8LJ' => 'E02001909',
        '8LL' => 'E02001910',
        '8LN' => 'E02001909',
        '8LP' => 'E02001903',
        '8LQ' => 'E02001909',
        '8LR' => 'E02001909',
        '8LS' => 'E02001909',
        '8LT' => 'E02001903',
        '8LU' => 'E02001909',
        '8LW' => 'E02001904',
        '8LX' => 'E02001909',
        '8LY' => 'E02001909',
        '8LZ' => 'E02001909',
        '8NA' => 'E02001909',
        '8NB' => 'E02001909',
        '8ND' => 'E02001909',
        '8NE' => 'E02001909',
        '8NF' => 'E02001909',
        '8NG' => 'E02001909',
        '8NH' => 'E02001909',
        '8NJ' => 'E02001909',
        '8NN' => 'E02001909',
        '8NP' => 'E02001909',
        '8NQ' => 'E02001909',
        '8NS' => 'E02001909',
        '8NT' => 'E02001909',
        '8NU' => 'E02001909',
        '8NW' => 'E02001909',
        '8NX' => 'E02001909',
        '8NY' => 'E02001909',
        '8PA' => 'E02001909',
        '8PB' => 'E02001909',
        '8PD' => 'E02001909',
        '8PE' => 'E02001909',
        '8PF' => 'E02001903',
        '8PJ' => 'E02001903',
        '8PL' => 'E02001903',
        '8PP' => 'E02001910',
        '8PU' => 'E02001910',
        '8PY' => 'E02001910',
        '8PZ' => 'E02001918',
        '8QA' => 'E02001910',
        '8QB' => 'E02001910',
        '8QD' => 'E02001910',
        '8QE' => 'E02001910',
        '8QG' => 'E02001910',
        '8QH' => 'E02001910',
        '8QJ' => 'E02001909',
        '8QL' => 'E02001910',
        '8QN' => 'E02001910',
        '8QP' => 'E02001910',
        '8QQ' => 'E02001910',
        '8QR' => 'E02001909',
        '8QS' => 'E02001909',
        '8QT' => 'E02001909',
        '8QU' => 'E02001909',
        '8QW' => 'E02001910',
        '8QX' => 'E02001909',
        '8QY' => 'E02001909',
        '8QZ' => 'E02001909',
        '8RB' => 'E02001909',
        '8RD' => 'E02001909',
        '8RE' => 'E02001909',
        '8RF' => 'E02001909',
        '8RG' => 'E02001909',
        '8RH' => 'E02001909',
        '8RJ' => 'E02001910',
        '8RL' => 'E02001909',
        '8RQ' => 'E02001910',
        '8RS' => 'E02001909',
        '8RT' => 'E02001909',
        '8RU' => 'E02001909',
        '8RX' => 'E02001909',
        '8RY' => 'E02001909',
        '8RZ' => 'E02001909',
        '8SA' => 'E02001909',
        '8SB' => 'E02001909',
        '8SD' => 'E02001909',
        '8SE' => 'E02001909',
        '8SF' => 'E02001909',
        '8SG' => 'E02001909',
        '8SH' => 'E02001909',
        '8SJ' => 'E02001909',
        '8SL' => 'E02001909',
        '8SN' => 'E02001909',
        '8SP' => 'E02001909',
        '8SQ' => 'E02001903',
        '8SR' => 'E02001909',
        '8SS' => 'E02001909',
        '8ST' => 'E02001909',
        '8SU' => 'E02001910',
        '8SW' => 'E02001909',
        '8SX' => 'E02001909',
        '8SY' => 'E02001909',
        '8TD' => 'E02001909',
        '8TE' => 'E02001909',
        '8TF' => 'E02001909',
        '8TG' => 'E02001909',
        '8TH' => 'E02001909',
        '8TJ' => 'E02001909',
        '8TL' => 'E02001909',
        '8TN' => 'E02001909',
        '8TP' => 'E02001909',
        '8TR' => 'E02001909',
        '8TT' => 'E02001909',
        '8TY' => 'E02001909',
        '8TZ' => 'E02001909',
        '8UA' => 'E02001909',
        '8UB' => 'E02001909',
        '8UD' => 'E02001909',
        '8UE' => 'E02001909',
        '8UF' => 'E02001909',
        '8UG' => 'E02001909',
        '8UH' => 'E02001909',
        '8UJ' => 'E02001909',
        '8UL' => 'E02001909',
        '8UP' => 'E02001909',
        '8UQ' => 'E02001909',
        '8UR' => 'E02001909',
        '8US' => 'E02001909',
        '8UT' => 'E02001909',
        '8UU' => 'E02001909',
        '8UX' => 'E02001909',
        '8UY' => 'E02001909',
        '8UZ' => 'E02001909',
        '8XA' => 'E02001909',
        '8XB' => 'E02001909',
        '8XD' => 'E02001909',
        '8XE' => 'E02001909',
        '8XF' => 'E02001903',
        '8XH' => 'E02001903',
        '8XR' => 'E02001903',
        '8XZ' => 'E02001903',
        '8YB' => 'E02001903',
        '8ZH' => 'E02001903',
        '8ZX' => 'E02001903',
        '9AA' => 'E02001918',
        '9AB' => 'E02001910',
        '9AD' => 'E02001910',
        '9AE' => 'E02001910',
        '9AH' => 'E02001909',
        '9AJ' => 'E02001910',
        '9AL' => 'E02001909',
        '9AN' => 'E02001909',
        '9AQ' => 'E02001903',
        '9AS' => 'E02001903',
        '9AT' => 'E02001909',
        '9AU' => 'E02001909',
        '9AW' => 'E02001909',
        '9AY' => 'E02001914',
        '9AZ' => 'E02001909',
        '9BA' => 'E02001904',
        '9BB' => 'E02001909',
        '9BD' => 'E02001909',
        '9BE' => 'E02001909',
        '9BG' => 'E02001910',
        '9BH' => 'E02001910',
        '9BJ' => 'E02001910',
        '9BL' => 'E02001910',
        '9BN' => 'E02001918',
        '9BP' => 'E02001918',
        '9BQ' => 'E02001914',
        '9BS' => 'E02001910',
        '9BT' => 'E02001909',
        '9BU' => 'E02001910',
        '9BW' => 'E02001918',
        '9BX' => 'E02001909',
        '9BY' => 'E02001909',
        '9BZ' => 'E02001914',
        '9DA' => 'E02001909',
        '9DB' => 'E02001909',
        '9DD' => 'E02001909',
        '9DE' => 'E02001909',
        '9DJ' => 'E02001909',
        '9DL' => 'E02001910',
        '9DN' => 'E02001910',
        '9DP' => 'E02001910',
        '9DQ' => 'E02001914',
        '9DR' => 'E02001909',
        '9DS' => 'E02001910',
        '9DT' => 'E02001910',
        '9DU' => 'E02001910',
        '9DW' => 'E02001910',
        '9DX' => 'E02001910',
        '9DY' => 'E02001900',
        '9EA' => 'E02001914',
        '9ED' => 'E02001897',
        '9EE' => 'E02001897',
        '9EF' => 'E02001910',
        '9EG' => 'E02001910',
        '9EH' => 'E02001910',
        '9EL' => 'E02001910',
        '9EQ' => 'E02001910',
        '9ER' => 'E02001910',
        '9ES' => 'E02001910',
        '9EX' => 'E02001910',
        '9EY' => 'E02001914',
        '9FF' => 'E02001909',
        '9HA' => 'E02001910',
        '9HB' => 'E02001914',
        '9HD' => 'E02001910',
        '9HE' => 'E02001910',
        '9HF' => 'E02001910',
        '9HN' => 'E02001910',
        '9HP' => 'E02001910',
        '9HR' => 'E02001914',
        '9HS' => 'E02001910',
        '9JB' => 'E02001910',
        '9JF' => 'E02001910',
        '9JG' => 'E02001910',
        '9JL' => 'E02001909',
        '9JN' => 'E02001910',
        '9JQ' => 'E02001910',
        '9JT' => 'E02001914',
        '9JU' => 'E02001910',
        '9JZ' => 'E02001903',
        '9LA' => 'E02001910',
        '9LB' => 'E02001910',
        '9LD' => 'E02001910',
        '9LE' => 'E02001910',
        '9LF' => 'E02001910',
        '9LG' => 'E02001910',
        '9LH' => 'E02001910',
        '9LJ' => 'E02001910',
        '9LL' => 'E02001903',
        '9LN' => 'E02001910',
        '9LP' => 'E02001910',
        '9LQ' => 'E02001910',
        '9LR' => 'E02001910',
        '9LS' => 'E02001910',
        '9LT' => 'E02001914',
        '9LU' => 'E02001910',
        '9LW' => 'E02001910',
        '9LX' => 'E02001914',
        '9LY' => 'E02001914',
        '9LZ' => 'E02001914',
        '9NA' => 'E02001914',
        '9NB' => 'E02001914',
        '9ND' => 'E02001914',
        '9NE' => 'E02001914',
        '9NF' => 'E02001914',
        '9NG' => 'E02001914',
        '9NH' => 'E02001914',
        '9NJ' => 'E02001914',
        '9NL' => 'E02001914',
        '9NN' => 'E02001914',
        '9NP' => 'E02001914',
        '9NQ' => 'E02001914',
        '9NR' => 'E02001914',
        '9NS' => 'E02001914',
        '9NT' => 'E02001914',
        '9NU' => 'E02001914',
        '9NW' => 'E02001914',
        '9NX' => 'E02001914',
        '9NY' => 'E02001914',
        '9NZ' => 'E02001903',
        '9PA' => 'E02001914',
        '9PB' => 'E02001910',
        '9PD' => 'E02001918',
        '9PE' => 'E02001918',
        '9PF' => 'E02001918',
        '9PG' => 'E02001918',
        '9PH' => 'E02001918',
        '9PJ' => 'E02001918',
        '9PL' => 'E02001914',
        '9PN' => 'E02001914',
        '9PQ' => 'E02001904',
        '9PR' => 'E02001914',
        '9PS' => 'E02001914',
        '9PT' => 'E02001914',
        '9PU' => 'E02001914',
        '9PW' => 'E02001914',
        '9PX' => 'E02001914',
        '9PY' => 'E02001914',
        '9PZ' => 'E02001914',
        '9QA' => 'E02001914',
        '9QB' => 'E02001914',
        '9QD' => 'E02001914',
        '9QE' => 'E02001914',
        '9QF' => 'E02001914',
        '9QG' => 'E02001918',
        '9QH' => 'E02001914',
        '9QJ' => 'E02001914',
        '9QL' => 'E02001910',
        '9QN' => 'E02001903',
        '9QP' => 'E02001910',
        '9QQ' => 'E02001918',
        '9QR' => 'E02001918',
        '9QS' => 'E02001910',
        '9QT' => 'E02001910',
        '9QU' => 'E02001910',
        '9QW' => 'E02001910',
        '9QX' => 'E02001910',
        '9QY' => 'E02001910',
        '9QZ' => 'E02001910',
        '9RA' => 'E02001910',
        '9RB' => 'E02001910',
        '9RD' => 'E02001910',
        '9RE' => 'E02001910',
        '9RF' => 'E02001910',
        '9RG' => 'E02001910',
        '9RH' => 'E02001910',
        '9RJ' => 'E02001910',
        '9RL' => 'E02001903',
        '9RN' => 'E02001914',
        '9RP' => 'E02001918',
        '9RQ' => 'E02001903',
        '9RR' => 'E02001918',
        '9RS' => 'E02001918',
        '9RT' => 'E02001910',
        '9RU' => 'E02001910',
        '9RW' => 'E02001914',
        '9RX' => 'E02001914',
        '9RY' => 'E02001914',
        '9RZ' => 'E02001910',
        '9SA' => 'E02001903',
        '9SB' => 'E02001910',
        '9SD' => 'E02001903',
        '9SE' => 'E02001903',
        '9SG' => 'E02001909',
        '9SL' => 'E02001903',
        '9SP' => 'E02001910',
        '9SQ' => 'E02001910',
        '9SR' => 'E02001910',
        '9ST' => 'E02001910',
        '9SU' => 'E02001910',
        '9SX' => 'E02001910',
        '9SY' => 'E02001910',
        '9SZ' => 'E02001910',
        '9TA' => 'E02001910',
        '9TB' => 'E02001910',
        '9TD' => 'E02001910',
        '9TE' => 'E02001914',
        '9TF' => 'E02001914',
        '9TG' => 'E02001910',
        '9TH' => 'E02001910',
        '9TJ' => 'E02001910',
        '9TL' => 'E02001910',
        '9TN' => 'E02001910',
        '9TP' => 'E02001910',
        '9TQ' => 'E02001910',
        '9TR' => 'E02001910',
        '9TS' => 'E02001910',
        '9TT' => 'E02001910',
        '9TU' => 'E02001910',
        '9TW' => 'E02001910',
        '9TX' => 'E02001910',
        '9TY' => 'E02001910',
        '9TZ' => 'E02001910',
        '9WA' => 'E02001903',
        '9WB' => 'E02001910',
        '9WE' => 'E02001904',
        '9WJ' => 'E02001910',
        '9WN' => 'E02001903',
        '9WR' => 'E02001910',
        '9WS' => 'E02001910',
        '9WT' => 'E02001904',
        '9ZA' => 'E02001904',
        '9ZY' => 'E02001903',
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
