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
final class B24
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02001849',
        '0AB' => 'E02001844',
        '0AD' => 'E02001844',
        '0AE' => 'E02001844',
        '0AF' => 'E02001851',
        '0AG' => 'E02001844',
        '0AH' => 'E02001844',
        '0AJ' => 'E02001854',
        '0AL' => 'E02001854',
        '0AN' => 'E02001849',
        '0AP' => 'E02001849',
        '0AQ' => 'E02001844',
        '0AR' => 'E02001844',
        '0AS' => 'E02001844',
        '0AT' => 'E02001844',
        '0AU' => 'E02001849',
        '0AW' => 'E02001849',
        '0AX' => 'E02001849',
        '0BA' => 'E02001844',
        '0BB' => 'E02001844',
        '0BD' => 'E02001844',
        '0BE' => 'E02001844',
        '0BG' => 'E02001844',
        '0BJ' => 'E02001851',
        '0BL' => 'E02001851',
        '0BN' => 'E02001851',
        '0BP' => 'E02001851',
        '0BQ' => 'E02001851',
        '0BS' => 'E02001851',
        '0BT' => 'E02001851',
        '0BU' => 'E02001851',
        '0BX' => 'E02001851',
        '0BY' => 'E02001844',
        '0DA' => 'E02001849',
        '0DB' => 'E02001854',
        '0DD' => 'E02001849',
        '0DE' => 'E02001854',
        '0DF' => 'E02001854',
        '0DG' => 'E02001854',
        '0DH' => 'E02001851',
        '0DJ' => 'E02001844',
        '0DL' => 'E02001851',
        '0DN' => 'E02001851',
        '0DP' => 'E02001851',
        '0DQ' => 'E02001854',
        '0DR' => 'E02001851',
        '0DS' => 'E02001851',
        '0DT' => 'E02001851',
        '0DU' => 'E02001851',
        '0DW' => 'E02001854',
        '0DX' => 'E02001849',
        '0DY' => 'E02001849',
        '0DZ' => 'E02001854',
        '0EA' => 'E02001844',
        '0EB' => 'E02001844',
        '0ED' => 'E02001844',
        '0EE' => 'E02001851',
        '0EF' => 'E02001851',
        '0EG' => 'E02001851',
        '0EH' => 'E02001851',
        '0EJ' => 'E02001851',
        '0EL' => 'E02001851',
        '0EN' => 'E02001851',
        '0EP' => 'E02001851',
        '0EQ' => 'E02001851',
        '0ER' => 'E02001851',
        '0ES' => 'E02001851',
        '0ET' => 'E02001851',
        '0EU' => 'E02001851',
        '0EW' => 'E02001851',
        '0EX' => 'E02001851',
        '0EY' => 'E02001851',
        '0EZ' => 'E02001851',
        '0FD' => 'E02001849',
        '0FG' => 'E02001849',
        '0FL' => 'E02001849',
        '0GA' => 'E02001851',
        '0GB' => 'E02001851',
        '0GD' => 'E02001851',
        '0GE' => 'E02001854',
        '0HA' => 'E02001851',
        '0HB' => 'E02001851',
        '0HD' => 'E02001841',
        '0HE' => 'E02001851',
        '0HF' => 'E02001851',
        '0HG' => 'E02001851',
        '0HH' => 'E02001851',
        '0HJ' => 'E02001851',
        '0HL' => 'E02001851',
        '0HN' => 'E02001851',
        '0HP' => 'E02001851',
        '0HQ' => 'E02001851',
        '0HR' => 'E02001851',
        '0HS' => 'E02001851',
        '0HT' => 'E02001851',
        '0HU' => 'E02001851',
        '0HW' => 'E02001851',
        '0HX' => 'E02001851',
        '0HY' => 'E02001851',
        '0HZ' => 'E02001851',
        '0JA' => 'E02001851',
        '0JB' => 'E02001854',
        '0JD' => 'E02001851',
        '0JE' => 'E02001851',
        '0JF' => 'E02001854',
        '0JG' => 'E02001851',
        '0JH' => 'E02001851',
        '0JJ' => 'E02001851',
        '0JL' => 'E02001851',
        '0JN' => 'E02001851',
        '0JP' => 'E02001851',
        '0JQ' => 'E02001854',
        '0JR' => 'E02001851',
        '0JS' => 'E02001854',
        '0JT' => 'E02001854',
        '0JU' => 'E02001854',
        '0JW' => 'E02001854',
        '0JX' => 'E02001851',
        '0JY' => 'E02001851',
        '0JZ' => 'E02001854',
        '0LA' => 'E02001854',
        '0LB' => 'E02001851',
        '0LD' => 'E02001854',
        '0LE' => 'E02001851',
        '0LF' => 'E02001851',
        '0LG' => 'E02001851',
        '0LH' => 'E02001851',
        '0LJ' => 'E02001851',
        '0LL' => 'E02001851',
        '0LN' => 'E02001851',
        '0LP' => 'E02001851',
        '0LQ' => 'E02001851',
        '0LR' => 'E02001851',
        '0LS' => 'E02001851',
        '0LT' => 'E02001851',
        '0LU' => 'E02001851',
        '0LW' => 'E02001851',
        '0LX' => 'E02001851',
        '0LY' => 'E02001851',
        '0LZ' => 'E02001851',
        '0NA' => 'E02001851',
        '0NB' => 'E02001851',
        '0ND' => 'E02001851',
        '0NE' => 'E02001851',
        '0NF' => 'E02001851',
        '0NG' => 'E02001851',
        '0NH' => 'E02001851',
        '0NJ' => 'E02001851',
        '0NL' => 'E02001851',
        '0NN' => 'E02001851',
        '0NP' => 'E02001851',
        '0NQ' => 'E02001851',
        '0NR' => 'E02001851',
        '0NS' => 'E02001851',
        '0NT' => 'E02001851',
        '0NU' => 'E02001851',
        '0NW' => 'E02001851',
        '0NX' => 'E02001851',
        '0NY' => 'E02001851',
        '0NZ' => 'E02001855',
        '0PA' => 'E02001851',
        '0PB' => 'E02001851',
        '0PD' => 'E02001851',
        '0PE' => 'E02001851',
        '0PF' => 'E02001851',
        '0PG' => 'E02001851',
        '0PH' => 'E02001851',
        '0PJ' => 'E02001851',
        '0PL' => 'E02001851',
        '0PN' => 'E02001849',
        '0PP' => 'E02001851',
        '0PQ' => 'E02001851',
        '0PR' => 'E02001851',
        '0PS' => 'E02001851',
        '0PT' => 'E02001851',
        '0PU' => 'E02001851',
        '0PW' => 'E02001851',
        '0PX' => 'E02001851',
        '0PY' => 'E02001851',
        '0PZ' => 'E02001851',
        '0QA' => 'E02001851',
        '0QB' => 'E02001851',
        '0QD' => 'E02001851',
        '0QE' => 'E02001851',
        '0QF' => 'E02001851',
        '0QG' => 'E02001851',
        '0QH' => 'E02001851',
        '0QJ' => 'E02001851',
        '0QL' => 'E02001851',
        '0QN' => 'E02001851',
        '0QP' => 'E02001855',
        '0QQ' => 'E02001851',
        '0QR' => 'E02001851',
        '0QS' => 'E02001851',
        '0QT' => 'E02001851',
        '0QU' => 'E02001849',
        '0QX' => 'E02001851',
        '0QY' => 'E02001851',
        '0QZ' => 'E02001851',
        '0RA' => 'E02001851',
        '0RB' => 'E02001851',
        '0RD' => 'E02001855',
        '0RE' => 'E02001855',
        '0RF' => 'E02001851',
        '0RG' => 'E02001851',
        '0RH' => 'E02001851',
        '0RJ' => 'E02001851',
        '0RL' => 'E02001854',
        '0RN' => 'E02001851',
        '0RP' => 'E02001851',
        '0RQ' => 'E02001851',
        '0RR' => 'E02001851',
        '0RS' => 'E02001851',
        '0RT' => 'E02001851',
        '0RU' => 'E02001851',
        '0RW' => 'E02001851',
        '0RX' => 'E02001851',
        '0RY' => 'E02001851',
        '0RZ' => 'E02001854',
        '0SA' => 'E02001851',
        '0SB' => 'E02001851',
        '0SD' => 'E02001851',
        '0SE' => 'E02001851',
        '0SF' => 'E02001851',
        '0SG' => 'E02001851',
        '0SH' => 'E02001851',
        '0SJ' => 'E02001851',
        '0SN' => 'E02001851',
        '0SP' => 'E02001851',
        '0SR' => 'E02001851',
        '0SS' => 'E02001851',
        '0ST' => 'E02001851',
        '0SU' => 'E02001851',
        '0SW' => 'E02001851',
        '0SX' => 'E02001851',
        '0SY' => 'E02001851',
        '0SZ' => 'E02001851',
        '0TA' => 'E02001851',
        '0TB' => 'E02001851',
        '0TD' => 'E02001851',
        '0TE' => 'E02001851',
        '0TF' => 'E02001851',
        '0TG' => 'E02001851',
        '0TH' => 'E02001851',
        '0TJ' => 'E02001851',
        '0TL' => 'E02001854',
        '0TN' => 'E02001851',
        '0TP' => 'E02001851',
        '0TQ' => 'E02001851',
        '0TR' => 'E02001851',
        '0TS' => 'E02001851',
        '0TW' => 'E02001851',
        '0UA' => 'E02001854',
        '0UB' => 'E02001851',
        '0UD' => 'E02001851',
        '0UE' => 'E02001851',
        '0UF' => 'E02001851',
        '0WA' => 'E02001851',
        '0WB' => 'E02001851',
        '0WD' => 'E02001851',
        '0WE' => 'E02001851',
        '0WF' => 'E02001851',
        '0WG' => 'E02001851',
        '0WH' => 'E02001849',
        '0WL' => 'E02001849',
        '0WS' => 'E02001851',
        '0XR' => 'E02001849',
        '0YF' => 'E02001849',
        '0YJ' => 'E02001849',
        '0YQ' => 'E02001849',
        '0YS' => 'E02001849',
        '0ZR' => 'E02001849',
        '8AA' => 'E02001857',
        '8AB' => 'E02001857',
        '8AD' => 'E02001857',
        '8AE' => 'E02001857',
        '8AF' => 'E02001857',
        '8AG' => 'E02001857',
        '8AH' => 'E02001857',
        '8AJ' => 'E02001857',
        '8AL' => 'E02001857',
        '8AN' => 'E02001857',
        '8AP' => 'E02001857',
        '8AQ' => 'E02001857',
        '8AR' => 'E02001857',
        '8AS' => 'E02001857',
        '8AT' => 'E02001857',
        '8AU' => 'E02001857',
        '8AW' => 'E02001857',
        '8AX' => 'E02001857',
        '8AY' => 'E02001857',
        '8AZ' => 'E02001857',
        '8BA' => 'E02001857',
        '8BB' => 'E02001857',
        '8BD' => 'E02001857',
        '8BE' => 'E02001857',
        '8BG' => 'E02001857',
        '8BH' => 'E02001857',
        '8BJ' => 'E02001857',
        '8BL' => 'E02001857',
        '8BN' => 'E02001857',
        '8BP' => 'E02001857',
        '8BQ' => 'E02001857',
        '8BS' => 'E02001857',
        '8BT' => 'E02001854',
        '8BU' => 'E02001854',
        '8BW' => 'E02001857',
        '8BX' => 'E02001854',
        '8BY' => 'E02001854',
        '8BZ' => 'E02001854',
        '8DA' => 'E02001857',
        '8DB' => 'E02001854',
        '8DD' => 'E02001857',
        '8DE' => 'E02001854',
        '8DF' => 'E02001857',
        '8DG' => 'E02001857',
        '8DH' => 'E02001857',
        '8DJ' => 'E02001857',
        '8DL' => 'E02001854',
        '8DN' => 'E02001854',
        '8DP' => 'E02001854',
        '8DQ' => 'E02001857',
        '8DR' => 'E02001857',
        '8DS' => 'E02001857',
        '8DT' => 'E02001857',
        '8DU' => 'E02001857',
        '8DW' => 'E02001857',
        '8DX' => 'E02001857',
        '8DY' => 'E02001857',
        '8DZ' => 'E02001857',
        '8EA' => 'E02001857',
        '8EB' => 'E02001857',
        '8ED' => 'E02001857',
        '8EE' => 'E02001857',
        '8EG' => 'E02001857',
        '8EH' => 'E02001857',
        '8EJ' => 'E02001857',
        '8EL' => 'E02001857',
        '8EN' => 'E02001857',
        '8EP' => 'E02001857',
        '8EQ' => 'E02001857',
        '8ER' => 'E02001857',
        '8ET' => 'E02001857',
        '8EU' => 'E02001857',
        '8EW' => 'E02001857',
        '8EX' => 'E02001857',
        '8EY' => 'E02001857',
        '8EZ' => 'E02001857',
        '8HA' => 'E02001857',
        '8HB' => 'E02001857',
        '8HD' => 'E02001857',
        '8HE' => 'E02001857',
        '8HF' => 'E02001857',
        '8HG' => 'E02001857',
        '8HH' => 'E02001857',
        '8HJ' => 'E02001857',
        '8HL' => 'E02001857',
        '8HN' => 'E02001857',
        '8HP' => 'E02001857',
        '8HQ' => 'E02001857',
        '8HR' => 'E02001857',
        '8HS' => 'E02001857',
        '8HT' => 'E02001857',
        '8HU' => 'E02001857',
        '8HW' => 'E02001857',
        '8HX' => 'E02001857',
        '8HY' => 'E02001857',
        '8HZ' => 'E02001857',
        '8JA' => 'E02001857',
        '8JB' => 'E02001857',
        '8JD' => 'E02001857',
        '8JE' => 'E02001857',
        '8JF' => 'E02001857',
        '8JG' => 'E02001857',
        '8JH' => 'E02001857',
        '8JJ' => 'E02001857',
        '8JL' => 'E02001857',
        '8JN' => 'E02001857',
        '8JP' => 'E02001857',
        '8JQ' => 'E02001857',
        '8JR' => 'E02001857',
        '8JS' => 'E02001857',
        '8JT' => 'E02001857',
        '8JU' => 'E02001857',
        '8JW' => 'E02001857',
        '8LA' => 'E02001857',
        '8LD' => 'E02001857',
        '8LE' => 'E02001857',
        '8LF' => 'E02001857',
        '8LG' => 'E02001857',
        '8LH' => 'E02001857',
        '8LJ' => 'E02001857',
        '8LL' => 'E02001857',
        '8LN' => 'E02001857',
        '8LP' => 'E02001857',
        '8LQ' => 'E02001857',
        '8LR' => 'E02001857',
        '8LS' => 'E02001857',
        '8LT' => 'E02001857',
        '8LU' => 'E02001857',
        '8LW' => 'E02001857',
        '8LX' => 'E02001857',
        '8LY' => 'E02001857',
        '8NA' => 'E02001857',
        '8NB' => 'E02001857',
        '8ND' => 'E02001849',
        '8NE' => 'E02001849',
        '8NG' => 'E02001857',
        '8NH' => 'E02001849',
        '8NJ' => 'E02001857',
        '8NN' => 'E02001857',
        '8NP' => 'E02001857',
        '8NQ' => 'E02001857',
        '8NT' => 'E02001857',
        '8NU' => 'E02001857',
        '8NW' => 'E02001869',
        '8NX' => 'E02001857',
        '8NY' => 'E02001857',
        '8PA' => 'E02001857',
        '8PB' => 'E02001857',
        '8PD' => 'E02001857',
        '8PE' => 'E02001857',
        '8PF' => 'E02001857',
        '8PG' => 'E02001857',
        '8PH' => 'E02001857',
        '8PJ' => 'E02001857',
        '8PL' => 'E02001857',
        '8PN' => 'E02001857',
        '8PP' => 'E02001857',
        '8PQ' => 'E02001857',
        '8PR' => 'E02001857',
        '8PS' => 'E02001857',
        '8PT' => 'E02001857',
        '8PU' => 'E02001857',
        '8PW' => 'E02001857',
        '8PX' => 'E02001857',
        '8PY' => 'E02001857',
        '8PZ' => 'E02001857',
        '8QA' => 'E02001857',
        '8QB' => 'E02001849',
        '8QE' => 'E02001849',
        '8QF' => 'E02001857',
        '8QG' => 'E02001857',
        '8QH' => 'E02001857',
        '8QJ' => 'E02001857',
        '8QL' => 'E02001857',
        '8QN' => 'E02001857',
        '8QP' => 'E02001857',
        '8QQ' => 'E02001857',
        '8QR' => 'E02001857',
        '8QS' => 'E02001857',
        '8QT' => 'E02001857',
        '8QU' => 'E02001857',
        '8QW' => 'E02001857',
        '8QX' => 'E02001857',
        '8QY' => 'E02001857',
        '8RA' => 'E02001857',
        '8RB' => 'E02001857',
        '8RD' => 'E02001857',
        '8RE' => 'E02001857',
        '8RF' => 'E02001849',
        '8RH' => 'E02001857',
        '8RJ' => 'E02001857',
        '8TA' => 'E02001857',
        '8TB' => 'E02001857',
        '8TD' => 'E02001857',
        '8TE' => 'E02001857',
        '8TF' => 'E02001857',
        '8TG' => 'E02001869',
        '8TH' => 'E02001849',
        '8TJ' => 'E02001869',
        '8TL' => 'E02001857',
        '8TN' => 'E02001857',
        '8TQ' => 'E02001869',
        '8TW' => 'E02001849',
        '8TZ' => 'E02001849',
        '8WA' => 'E02001849',
        '8WB' => 'E02001849',
        '8WD' => 'E02001876',
        '8WE' => 'E02001876',
        '8WF' => 'E02001849',
        '8WG' => 'E02001876',
        '8WH' => 'E02001849',
        '8WJ' => 'E02001849',
        '8WL' => 'E02001849',
        '8WP' => 'E02001849',
        '8WQ' => 'E02001849',
        '8WR' => 'E02001849',
        '8WU' => 'E02001849',
        '8XA' => 'E02001849',
        '8XR' => 'E02001849',
        '9AA' => 'E02001857',
        '9AB' => 'E02001857',
        '9AD' => 'E02001857',
        '9AE' => 'E02001857',
        '9AF' => 'E02001857',
        '9AG' => 'E02001857',
        '9AH' => 'E02001857',
        '9AJ' => 'E02001857',
        '9AL' => 'E02001857',
        '9AN' => 'E02001857',
        '9AP' => 'E02001857',
        '9AQ' => 'E02001857',
        '9AR' => 'E02001857',
        '9AS' => 'E02001857',
        '9AT' => 'E02001857',
        '9AU' => 'E02001854',
        '9AW' => 'E02001870',
        '9AX' => 'E02001857',
        '9AY' => 'E02001857',
        '9AZ' => 'E02001857',
        '9BA' => 'E02001857',
        '9BB' => 'E02001857',
        '9BD' => 'E02001857',
        '9BE' => 'E02001857',
        '9BF' => 'E02001854',
        '9BG' => 'E02001854',
        '9BH' => 'E02001857',
        '9BJ' => 'E02001857',
        '9BL' => 'E02001854',
        '9BN' => 'E02001857',
        '9BP' => 'E02001854',
        '9BQ' => 'E02001854',
        '9BS' => 'E02001849',
        '9BT' => 'E02001854',
        '9BU' => 'E02001854',
        '9BW' => 'E02001854',
        '9BX' => 'E02001854',
        '9BY' => 'E02001854',
        '9BZ' => 'E02001854',
        '9DA' => 'E02001854',
        '9DB' => 'E02001854',
        '9DD' => 'E02001854',
        '9DE' => 'E02001857',
        '9DF' => 'E02001854',
        '9DG' => 'E02001854',
        '9DH' => 'E02001854',
        '9DJ' => 'E02001854',
        '9DL' => 'E02001854',
        '9DN' => 'E02001854',
        '9DP' => 'E02001854',
        '9DQ' => 'E02001854',
        '9DR' => 'E02001849',
        '9DS' => 'E02001854',
        '9DT' => 'E02001854',
        '9DU' => 'E02001854',
        '9DW' => 'E02001849',
        '9DX' => 'E02001854',
        '9DY' => 'E02001854',
        '9DZ' => 'E02001854',
        '9EA' => 'E02001854',
        '9EB' => 'E02001854',
        '9ED' => 'E02001854',
        '9EE' => 'E02001854',
        '9EF' => 'E02001854',
        '9EG' => 'E02001854',
        '9EH' => 'E02001849',
        '9EJ' => 'E02001849',
        '9EL' => 'E02001849',
        '9EN' => 'E02001849',
        '9EP' => 'E02001849',
        '9EQ' => 'E02001849',
        '9ER' => 'E02001849',
        '9ES' => 'E02001849',
        '9ET' => 'E02001849',
        '9EU' => 'E02001849',
        '9EW' => 'E02001849',
        '9EX' => 'E02001849',
        '9EY' => 'E02001849',
        '9EZ' => 'E02001849',
        '9FD' => 'E02001854',
        '9FE' => 'E02001854',
        '9FF' => 'E02001854',
        '9FP' => 'E02001854',
        '9FQ' => 'E02001855',
        '9GZ' => 'E02001854',
        '9HA' => 'E02001849',
        '9HB' => 'E02001849',
        '9HD' => 'E02001849',
        '9HE' => 'E02001849',
        '9HF' => 'E02001854',
        '9HG' => 'E02001854',
        '9HH' => 'E02001854',
        '9HJ' => 'E02001854',
        '9HL' => 'E02001854',
        '9HN' => 'E02001849',
        '9HP' => 'E02001849',
        '9HQ' => 'E02001854',
        '9HR' => 'E02001849',
        '9HS' => 'E02001849',
        '9HT' => 'E02001849',
        '9HU' => 'E02001849',
        '9HW' => 'E02001849',
        '9HX' => 'E02001849',
        '9HY' => 'E02001854',
        '9HZ' => 'E02001849',
        '9JA' => 'E02001849',
        '9JB' => 'E02001849',
        '9JD' => 'E02001849',
        '9JE' => 'E02001849',
        '9JF' => 'E02001849',
        '9JG' => 'E02001849',
        '9JH' => 'E02001854',
        '9JJ' => 'E02001849',
        '9JL' => 'E02001849',
        '9JN' => 'E02001849',
        '9JP' => 'E02001854',
        '9JQ' => 'E02001849',
        '9JR' => 'E02001854',
        '9JS' => 'E02001849',
        '9JT' => 'E02001849',
        '9JU' => 'E02001849',
        '9JW' => 'E02001849',
        '9JX' => 'E02001854',
        '9JY' => 'E02001854',
        '9JZ' => 'E02001849',
        '9LA' => 'E02001854',
        '9LB' => 'E02001854',
        '9LD' => 'E02001854',
        '9LE' => 'E02001854',
        '9LF' => 'E02001849',
        '9LG' => 'E02001854',
        '9LH' => 'E02001854',
        '9LJ' => 'E02001854',
        '9LL' => 'E02001854',
        '9LN' => 'E02001854',
        '9LP' => 'E02001854',
        '9LQ' => 'E02001854',
        '9LR' => 'E02001854',
        '9LS' => 'E02001854',
        '9LT' => 'E02001854',
        '9LU' => 'E02001854',
        '9LW' => 'E02001854',
        '9LX' => 'E02001854',
        '9LY' => 'E02001854',
        '9LZ' => 'E02001854',
        '9NA' => 'E02001849',
        '9NB' => 'E02001854',
        '9ND' => 'E02001854',
        '9NE' => 'E02001854',
        '9NF' => 'E02001854',
        '9NG' => 'E02001854',
        '9NH' => 'E02001854',
        '9NJ' => 'E02001854',
        '9NL' => 'E02001854',
        '9NN' => 'E02001854',
        '9NP' => 'E02001854',
        '9NQ' => 'E02001854',
        '9NR' => 'E02001854',
        '9NS' => 'E02001854',
        '9NT' => 'E02001854',
        '9NU' => 'E02001854',
        '9NW' => 'E02001854',
        '9NX' => 'E02001854',
        '9NY' => 'E02001854',
        '9NZ' => 'E02001854',
        '9PA' => 'E02001854',
        '9PB' => 'E02001854',
        '9PD' => 'E02001854',
        '9PF' => 'E02001854',
        '9PG' => 'E02001854',
        '9PH' => 'E02001854',
        '9PJ' => 'E02001854',
        '9PL' => 'E02001854',
        '9PN' => 'E02001854',
        '9PP' => 'E02001854',
        '9PQ' => 'E02001854',
        '9PR' => 'E02001854',
        '9PS' => 'E02001851',
        '9PT' => 'E02001851',
        '9PU' => 'E02001854',
        '9PW' => 'E02001854',
        '9PX' => 'E02001854',
        '9PY' => 'E02001851',
        '9PZ' => 'E02001851',
        '9QA' => 'E02001851',
        '9QB' => 'E02001854',
        '9QD' => 'E02001854',
        '9QE' => 'E02001854',
        '9QF' => 'E02001854',
        '9QG' => 'E02001854',
        '9QH' => 'E02001854',
        '9QJ' => 'E02001854',
        '9QL' => 'E02001854',
        '9QN' => 'E02001854',
        '9QP' => 'E02001854',
        '9QQ' => 'E02001854',
        '9QR' => 'E02001854',
        '9QS' => 'E02001854',
        '9QT' => 'E02001854',
        '9QU' => 'E02001854',
        '9QW' => 'E02001854',
        '9QX' => 'E02001854',
        '9QY' => 'E02001854',
        '9QZ' => 'E02001854',
        '9RA' => 'E02001854',
        '9RB' => 'E02001854',
        '9RD' => 'E02001854',
        '9RE' => 'E02001854',
        '9RF' => 'E02001849',
        '9RG' => 'E02001854',
        '9RH' => 'E02001854',
        '9RJ' => 'E02001854',
        '9RL' => 'E02001854',
        '9RN' => 'E02001854',
        '9RP' => 'E02001854',
        '9RQ' => 'E02001854',
        '9RR' => 'E02001854',
        '9RS' => 'E02001854',
        '9RT' => 'E02001854',
        '9RU' => 'E02001854',
        '9RW' => 'E02001854',
        '9RX' => 'E02001854',
        '9RY' => 'E02001849',
        '9RZ' => 'E02001849',
        '9SA' => 'E02001857',
        '9SB' => 'E02001854',
        '9SD' => 'E02001854',
        '9SE' => 'E02001857',
        '9SF' => 'E02001857',
        '9SG' => 'E02001857',
        '9SH' => 'E02001854',
        '9SJ' => 'E02001854',
        '9SL' => 'E02001854',
        '9SN' => 'E02001854',
        '9SP' => 'E02001854',
        '9SR' => 'E02001854',
        '9SS' => 'E02001854',
        '9ST' => 'E02001854',
        '9SU' => 'E02001854',
        '9SW' => 'E02001857',
        '9SX' => 'E02001854',
        '9SY' => 'E02001854',
        '9SZ' => 'E02001854',
        '9TA' => 'E02001854',
        '9TB' => 'E02001854',
        '9TD' => 'E02001854',
        '9TE' => 'E02001854',
        '9TG' => 'E02001857',
        '9TH' => 'E02001849',
        '9TJ' => 'E02001854',
        '9TP' => 'E02001854',
        '9TQ' => 'E02001849',
        '9WA' => 'E02001849',
        '9WB' => 'E02001849',
        '9WH' => 'E02001849',
        '9WL' => 'E02001849',
        '9WN' => 'E02001849',
        '9WP' => 'E02001849',
        '9WQ' => 'E02001849',
        '9WU' => 'E02001849',
        '9WW' => 'E02001849',
        '9XA' => 'E02001849',
        '9XH' => 'E02001849',
        '9YG' => 'E02001849',
        '9ZN' => 'E02001849',
        '9ZR' => 'E02001849',
        '9ZS' => 'E02001849',
        '9ZT' => 'E02001849',
        '9ZY' => 'E02001849',
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
