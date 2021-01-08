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
final class OL13
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02005280',
        '0AB' => 'E02005280',
        '0AD' => 'E02005280',
        '0AE' => 'E02005280',
        '0AF' => 'E02005280',
        '0AG' => 'E02005280',
        '0AH' => 'E02005280',
        '0AJ' => 'E02005280',
        '0AL' => 'E02005280',
        '0AN' => 'E02005280',
        '0AP' => 'E02005280',
        '0AQ' => 'E02005280',
        '0AR' => 'E02005280',
        '0AS' => 'E02005280',
        '0AT' => 'E02005280',
        '0AU' => 'E02005280',
        '0AW' => 'E02005280',
        '0AX' => 'E02005280',
        '0AY' => 'E02005280',
        '0AZ' => 'E02005280',
        '0BA' => 'E02006884',
        '0BB' => 'E02006884',
        '0BD' => 'E02006884',
        '0BE' => 'E02005280',
        '0BF' => 'E02006884',
        '0BG' => 'E02006884',
        '0BH' => 'E02006884',
        '0BJ' => 'E02006884',
        '0BL' => 'E02006884',
        '0BN' => 'E02005280',
        '0BQ' => 'E02005280',
        '0BR' => 'E02006884',
        '0BS' => 'E02005280',
        '0BT' => 'E02006884',
        '0BU' => 'E02006884',
        '0BW' => 'E02006884',
        '0BX' => 'E02006884',
        '0BY' => 'E02006884',
        '0BZ' => 'E02006884',
        '0DA' => 'E02006884',
        '0DB' => 'E02005280',
        '0DD' => 'E02006884',
        '0DE' => 'E02006884',
        '0DF' => 'E02006884',
        '0DG' => 'E02005280',
        '0DH' => 'E02006884',
        '0DJ' => 'E02005280',
        '0DL' => 'E02006884',
        '0DN' => 'E02006884',
        '0DP' => 'E02006884',
        '0DQ' => 'E02005280',
        '0DR' => 'E02005280',
        '0DS' => 'E02005280',
        '0DT' => 'E02005280',
        '0DU' => 'E02005280',
        '0DW' => 'E02006884',
        '0DY' => 'E02005280',
        '0DZ' => 'E02006884',
        '0EA' => 'E02006884',
        '0EB' => 'E02006884',
        '0ED' => 'E02006884',
        '0EE' => 'E02006884',
        '0EF' => 'E02006884',
        '0EG' => 'E02006884',
        '0EH' => 'E02006884',
        '0EJ' => 'E02006884',
        '0EL' => 'E02006884',
        '0EN' => 'E02006884',
        '0EP' => 'E02006884',
        '0EQ' => 'E02006884',
        '0ER' => 'E02006884',
        '0ES' => 'E02006884',
        '0ET' => 'E02006884',
        '0EU' => 'E02006884',
        '0EW' => 'E02006884',
        '0EX' => 'E02006884',
        '0EY' => 'E02006884',
        '0EZ' => 'E02006884',
        '0FA' => 'E02006884',
        '0FB' => 'E02005280',
        '0FD' => 'E02006884',
        '0FE' => 'E02006884',
        '0FF' => 'E02006884',
        '0FG' => 'E02005280',
        '0FH' => 'E02005280',
        '0HB' => 'E02006884',
        '0HD' => 'E02006884',
        '0HE' => 'E02006884',
        '0HF' => 'E02006884',
        '0HG' => 'E02006884',
        '0HH' => 'E02006884',
        '0HJ' => 'E02006884',
        '0HL' => 'E02006884',
        '0HN' => 'E02006884',
        '0HP' => 'E02006884',
        '0HQ' => 'E02006884',
        '0HR' => 'E02006884',
        '0HS' => 'E02006884',
        '0HT' => 'E02006884',
        '0HU' => 'E02006884',
        '0HW' => 'E02006884',
        '0HY' => 'E02006884',
        '0HZ' => 'E02006884',
        '0JA' => 'E02006884',
        '0JB' => 'E02006884',
        '0JD' => 'E02006884',
        '0JH' => 'E02006884',
        '0JJ' => 'E02006884',
        '0JL' => 'E02006884',
        '0JN' => 'E02006884',
        '0JS' => 'E02006884',
        '0LA' => 'E02006884',
        '0LB' => 'E02006884',
        '0LD' => 'E02006884',
        '0LE' => 'E02006884',
        '0LF' => 'E02006884',
        '0LG' => 'E02006884',
        '0LH' => 'E02006884',
        '0LJ' => 'E02006884',
        '0LL' => 'E02006884',
        '0LN' => 'E02006884',
        '0LP' => 'E02006884',
        '0LQ' => 'E02006884',
        '0LR' => 'E02005280',
        '0LS' => 'E02006884',
        '0LT' => 'E02006884',
        '0LU' => 'E02006884',
        '0LW' => 'E02006884',
        '0LZ' => 'E02006884',
        '0NA' => 'E02006884',
        '0NB' => 'E02006884',
        '0ND' => 'E02006884',
        '0NE' => 'E02006884',
        '0NF' => 'E02006884',
        '0NG' => 'E02006884',
        '0NH' => 'E02006884',
        '0NJ' => 'E02006884',
        '0NL' => 'E02006884',
        '0NN' => 'E02006884',
        '0NP' => 'E02006884',
        '0NQ' => 'E02006884',
        '0NR' => 'E02006884',
        '0NS' => 'E02006884',
        '0NT' => 'E02006884',
        '0NU' => 'E02006884',
        '0NW' => 'E02006884',
        '0NX' => 'E02006884',
        '0NY' => 'E02006884',
        '0NZ' => 'E02006884',
        '0PA' => 'E02006884',
        '0PB' => 'E02006884',
        '0PD' => 'E02006884',
        '0PE' => 'E02006884',
        '0PF' => 'E02006884',
        '0PG' => 'E02006884',
        '0PH' => 'E02006884',
        '0PN' => 'E02006884',
        '0PP' => 'E02006884',
        '0PR' => 'E02006884',
        '0PS' => 'E02006884',
        '0PW' => 'E02006884',
        '0PZ' => 'E02006884',
        '0QA' => 'E02006884',
        '0QB' => 'E02006884',
        '0QD' => 'E02006884',
        '0QE' => 'E02006884',
        '0QF' => 'E02006884',
        '0QG' => 'E02006884',
        '0QN' => 'E02006884',
        '0QP' => 'E02006884',
        '0QQ' => 'E02006884',
        '0QR' => 'E02006884',
        '0QS' => 'E02006884',
        '0QT' => 'E02006884',
        '0QU' => 'E02006884',
        '0QW' => 'E02006884',
        '0QX' => 'E02006884',
        '0QY' => 'E02006884',
        '0QZ' => 'E02006884',
        '0RA' => 'E02006884',
        '0RB' => 'E02006884',
        '0RD' => 'E02006884',
        '0RE' => 'E02006884',
        '0RF' => 'E02006884',
        '0RG' => 'E02006884',
        '0RH' => 'E02006884',
        '0RJ' => 'E02006884',
        '0RL' => 'E02006884',
        '0RN' => 'E02006884',
        '0RP' => 'E02006884',
        '0RQ' => 'E02006884',
        '0RR' => 'E02006884',
        '0RS' => 'E02006884',
        '0RT' => 'E02006884',
        '0RU' => 'E02006884',
        '0RW' => 'E02006884',
        '0RX' => 'E02006884',
        '0RY' => 'E02006884',
        '0RZ' => 'E02006884',
        '0SA' => 'E02006884',
        '0SB' => 'E02006884',
        '0SE' => 'E02006884',
        '0SF' => 'E02006884',
        '0SG' => 'E02006884',
        '0SH' => 'E02006884',
        '0SJ' => 'E02006884',
        '0SN' => 'E02006884',
        '0SP' => 'E02006884',
        '0SQ' => 'E02006884',
        '0SR' => 'E02006884',
        '0SS' => 'E02006884',
        '0ST' => 'E02006884',
        '0SU' => 'E02006884',
        '0SW' => 'E02006884',
        '0TA' => 'E02006884',
        '0TB' => 'E02006884',
        '0TF' => 'E02006884',
        '0TG' => 'E02006884',
        '0TH' => 'E02006884',
        '0TJ' => 'E02006884',
        '0TS' => 'E02006884',
        '0TT' => 'E02006884',
        '0TU' => 'E02005280',
        '0TX' => 'E02006884',
        '0TY' => 'E02006884',
        '0TZ' => 'E02006884',
        '0UA' => 'E02006884',
        '0UB' => 'E02006884',
        '0UD' => 'E02006884',
        '0UE' => 'E02006884',
        '0UF' => 'E02006884',
        '0UG' => 'E02006884',
        '0UH' => 'E02006884',
        '0UJ' => 'E02006884',
        '0UL' => 'E02006884',
        '0UQ' => 'E02005280',
        '0UY' => 'E02006884',
        '0WS' => 'E02005280',
        '0WT' => 'E02005280',
        '0WU' => 'E02005280',
        '0WW' => 'E02006884',
        '0WX' => 'E02005280',
        '0WY' => 'E02005280',
        '0WZ' => 'E02005280',
        '0XA' => 'E02006884',
        '0ZZ' => 'E02005280',
        '3AA' => 'E02005280',
        '3AB' => 'E02005280',
        '3AD' => 'E02005280',
        '3AE' => 'E02005280',
        '3AF' => 'E02005280',
        '3BA' => 'E02005280',
        '3BB' => 'E02005280',
        '3BD' => 'E02005280',
        '3BE' => 'E02005280',
        '3BF' => 'E02005280',
        '3BG' => 'E02005280',
        '3BH' => 'E02005280',
        '3BJ' => 'E02005280',
        '3BL' => 'E02005280',
        '3BN' => 'E02005280',
        '3BP' => 'E02005280',
        '3BQ' => 'E02005280',
        '3BR' => 'E02005280',
        '3BS' => 'E02005280',
        '3BT' => 'E02005280',
        '3BU' => 'E02005280',
        '3BW' => 'E02005280',
        '3BX' => 'E02005280',
        '3BY' => 'E02005280',
        '3BZ' => 'E02005280',
        '3DA' => 'E02005280',
        '3DB' => 'E02005280',
        '3SA' => 'E02006884',
        '3SB' => 'E02006884',
        '3SD' => 'E02006884',
        '3SE' => 'E02006884',
        '3SF' => 'E02006884',
        '3SG' => 'E02006884',
        '3SH' => 'E02006884',
        '3SJ' => 'E02006884',
        '3SL' => 'E02006884',
        '3SN' => 'E02006884',
        '3SP' => 'E02006884',
        '3SQ' => 'E02006884',
        '3SR' => 'E02006884',
        '3SS' => 'E02006884',
        '3SW' => 'E02006884',
        '3WZ' => 'E02005280',
        '3ZZ' => 'E02005280',
        '8AA' => 'E02005280',
        '8AB' => 'E02005280',
        '8AD' => 'E02005280',
        '8AE' => 'E02005280',
        '8AF' => 'E02005280',
        '8AG' => 'E02005280',
        '8AH' => 'E02005280',
        '8AJ' => 'E02005280',
        '8AL' => 'E02005280',
        '8AN' => 'E02005280',
        '8AP' => 'E02005280',
        '8AQ' => 'E02005280',
        '8AR' => 'E02005280',
        '8AS' => 'E02005280',
        '8AT' => 'E02005280',
        '8AU' => 'E02005280',
        '8AW' => 'E02005280',
        '8AX' => 'E02005280',
        '8AY' => 'E02005280',
        '8AZ' => 'E02005280',
        '8BA' => 'E02005280',
        '8BB' => 'E02005280',
        '8BD' => 'E02005280',
        '8BE' => 'E02005280',
        '8BF' => 'E02005280',
        '8BG' => 'E02005280',
        '8BH' => 'E02005280',
        '8BJ' => 'E02005280',
        '8BL' => 'E02005280',
        '8BN' => 'E02005280',
        '8BP' => 'E02005280',
        '8BQ' => 'E02005280',
        '8BR' => 'E02005280',
        '8BS' => 'E02005280',
        '8BT' => 'E02005280',
        '8BU' => 'E02005280',
        '8BW' => 'E02005280',
        '8BX' => 'E02005280',
        '8BY' => 'E02005280',
        '8BZ' => 'E02005280',
        '8DA' => 'E02005280',
        '8DB' => 'E02005280',
        '8DD' => 'E02005280',
        '8DE' => 'E02005280',
        '8DF' => 'E02005280',
        '8DG' => 'E02005280',
        '8DH' => 'E02005280',
        '8DJ' => 'E02005280',
        '8DL' => 'E02005280',
        '8DN' => 'E02005280',
        '8DP' => 'E02005280',
        '8DQ' => 'E02005280',
        '8DR' => 'E02005280',
        '8DS' => 'E02005280',
        '8DT' => 'E02005280',
        '8DU' => 'E02005280',
        '8DW' => 'E02005280',
        '8DX' => 'E02005280',
        '8DY' => 'E02005280',
        '8DZ' => 'E02005280',
        '8EA' => 'E02005280',
        '8EB' => 'E02005280',
        '8ED' => 'E02005280',
        '8EE' => 'E02005280',
        '8EF' => 'E02005280',
        '8EG' => 'E02005280',
        '8EH' => 'E02005280',
        '8EJ' => 'E02005280',
        '8EL' => 'E02005280',
        '8EN' => 'E02005280',
        '8EP' => 'E02005280',
        '8EQ' => 'E02005280',
        '8EU' => 'E02005280',
        '8EW' => 'E02005280',
        '8EX' => 'E02005280',
        '8EY' => 'E02005280',
        '8EZ' => 'E02005280',
        '8FA' => 'E02005280',
        '8FB' => 'E02005280',
        '8FD' => 'E02005280',
        '8FE' => 'E02005280',
        '8FF' => 'E02005280',
        '8FG' => 'E02005280',
        '8FH' => 'E02005280',
        '8FJ' => 'E02005280',
        '8FL' => 'E02005280',
        '8GA' => 'E02005280',
        '8GB' => 'E02005280',
        '8GD' => 'E02005280',
        '8GE' => 'E02005280',
        '8GR' => 'E02005280',
        '8GS' => 'E02005280',
        '8GT' => 'E02005280',
        '8GU' => 'E02005280',
        '8GW' => 'E02005280',
        '8GX' => 'E02005280',
        '8GY' => 'E02005280',
        '8GZ' => 'E02005280',
        '8HA' => 'E02005280',
        '8HB' => 'E02005280',
        '8HD' => 'E02005280',
        '8HE' => 'E02005280',
        '8HG' => 'E02005280',
        '8HH' => 'E02005280',
        '8HJ' => 'E02005280',
        '8HL' => 'E02005280',
        '8HN' => 'E02005280',
        '8HP' => 'E02006884',
        '8HQ' => 'E02005280',
        '8HR' => 'E02005280',
        '8HS' => 'E02006884',
        '8HT' => 'E02005280',
        '8HU' => 'E02006884',
        '8HW' => 'E02005280',
        '8HX' => 'E02006884',
        '8HY' => 'E02005280',
        '8HZ' => 'E02006884',
        '8JA' => 'E02006884',
        '8JB' => 'E02006884',
        '8JD' => 'E02006884',
        '8JE' => 'E02006884',
        '8JF' => 'E02006884',
        '8JG' => 'E02006884',
        '8JH' => 'E02006884',
        '8JJ' => 'E02006884',
        '8JL' => 'E02006884',
        '8JN' => 'E02005280',
        '8JP' => 'E02006884',
        '8JQ' => 'E02006884',
        '8JR' => 'E02006884',
        '8JS' => 'E02006884',
        '8JT' => 'E02006884',
        '8JU' => 'E02006884',
        '8JX' => 'E02006884',
        '8JY' => 'E02006884',
        '8JZ' => 'E02006884',
        '8LA' => 'E02006884',
        '8LB' => 'E02006884',
        '8LD' => 'E02006884',
        '8LE' => 'E02006884',
        '8LF' => 'E02006884',
        '8LG' => 'E02006884',
        '8LH' => 'E02006884',
        '8LJ' => 'E02006884',
        '8LL' => 'E02006884',
        '8LN' => 'E02006884',
        '8LP' => 'E02006884',
        '8LQ' => 'E02006884',
        '8LR' => 'E02006884',
        '8LS' => 'E02006884',
        '8LT' => 'E02006884',
        '8LW' => 'E02006884',
        '8NA' => 'E02006884',
        '8NB' => 'E02006884',
        '8ND' => 'E02006884',
        '8NE' => 'E02006884',
        '8NF' => 'E02006884',
        '8NG' => 'E02006884',
        '8NH' => 'E02006884',
        '8NJ' => 'E02006884',
        '8NL' => 'E02006884',
        '8NN' => 'E02005278',
        '8NQ' => 'E02006884',
        '8NR' => 'E02005280',
        '8NS' => 'E02005280',
        '8NW' => 'E02005278',
        '8NZ' => 'E02005280',
        '8PA' => 'E02005280',
        '8PB' => 'E02005280',
        '8PD' => 'E02005280',
        '8PE' => 'E02005280',
        '8PF' => 'E02005280',
        '8PG' => 'E02005280',
        '8PH' => 'E02005280',
        '8PJ' => 'E02005280',
        '8PL' => 'E02005280',
        '8PN' => 'E02005280',
        '8PP' => 'E02005280',
        '8PQ' => 'E02005280',
        '8PR' => 'E02005280',
        '8PS' => 'E02005280',
        '8PT' => 'E02005280',
        '8PU' => 'E02005280',
        '8PW' => 'E02005280',
        '8PX' => 'E02005280',
        '8PY' => 'E02005280',
        '8PZ' => 'E02005280',
        '8QA' => 'E02005280',
        '8QB' => 'E02005280',
        '8QD' => 'E02005280',
        '8QE' => 'E02005280',
        '8QF' => 'E02005280',
        '8QG' => 'E02005280',
        '8QH' => 'E02005280',
        '8QJ' => 'E02005280',
        '8QL' => 'E02005280',
        '8QN' => 'E02005280',
        '8QP' => 'E02005280',
        '8QQ' => 'E02005280',
        '8QR' => 'E02005280',
        '8QS' => 'E02005280',
        '8QT' => 'E02005280',
        '8QU' => 'E02005280',
        '8QW' => 'E02005280',
        '8QX' => 'E02005280',
        '8QY' => 'E02005280',
        '8QZ' => 'E02005280',
        '8RA' => 'E02005280',
        '8RB' => 'E02005280',
        '8RD' => 'E02005280',
        '8RE' => 'E02005280',
        '8RF' => 'E02005280',
        '8RG' => 'E02005278',
        '8RH' => 'E02005280',
        '8RJ' => 'E02005280',
        '8RL' => 'E02005280',
        '8RN' => 'E02005280',
        '8RP' => 'E02005280',
        '8RQ' => 'E02005280',
        '8RR' => 'E02005280',
        '8RS' => 'E02005280',
        '8RT' => 'E02005280',
        '8RU' => 'E02005280',
        '8RW' => 'E02005280',
        '8RX' => 'E02005280',
        '8RY' => 'E02005280',
        '8RZ' => 'E02005280',
        '8SA' => 'E02005280',
        '8TS' => 'E02005280',
        '8UR' => 'E02006884',
        '8UY' => 'E02006884',
        '8WQ' => 'E02005280',
        '8WR' => 'E02005280',
        '8WS' => 'E02005280',
        '8WT' => 'E02005280',
        '8WU' => 'E02005280',
        '8WW' => 'E02005280',
        '8WX' => 'E02005280',
        '8WY' => 'E02005280',
        '8WZ' => 'E02006884',
        '8XA' => 'E02006884',
        '8XB' => 'E02005280',
        '8ZZ' => 'E02006884',
        '9AA' => 'E02005280',
        '9AB' => 'E02005280',
        '9AD' => 'E02005280',
        '9AE' => 'E02005280',
        '9AF' => 'E02005280',
        '9AG' => 'E02005280',
        '9AH' => 'E02005280',
        '9AJ' => 'E02005280',
        '9AL' => 'E02005280',
        '9AN' => 'E02005280',
        '9AP' => 'E02005280',
        '9AQ' => 'E02005280',
        '9AR' => 'E02005280',
        '9AS' => 'E02005280',
        '9AT' => 'E02005280',
        '9AU' => 'E02005280',
        '9AW' => 'E02005280',
        '9AX' => 'E02005280',
        '9AY' => 'E02005280',
        '9AZ' => 'E02005280',
        '9BA' => 'E02005280',
        '9BB' => 'E02005280',
        '9BD' => 'E02005280',
        '9BE' => 'E02005280',
        '9BF' => 'E02005280',
        '9BG' => 'E02005280',
        '9BH' => 'E02005280',
        '9BJ' => 'E02005280',
        '9BL' => 'E02005280',
        '9BN' => 'E02005280',
        '9BP' => 'E02005280',
        '9BQ' => 'E02005280',
        '9BR' => 'E02005280',
        '9BS' => 'E02005280',
        '9BT' => 'E02005280',
        '9BU' => 'E02005280',
        '9BW' => 'E02005280',
        '9BX' => 'E02005280',
        '9BY' => 'E02005280',
        '9BZ' => 'E02005280',
        '9DA' => 'E02005280',
        '9DB' => 'E02005280',
        '9DD' => 'E02005280',
        '9DE' => 'E02005280',
        '9DF' => 'E02005280',
        '9DG' => 'E02005280',
        '9DH' => 'E02005280',
        '9DJ' => 'E02005280',
        '9DL' => 'E02005280',
        '9DN' => 'E02005280',
        '9DP' => 'E02005280',
        '9DQ' => 'E02005280',
        '9DR' => 'E02005280',
        '9DS' => 'E02005280',
        '9DT' => 'E02005280',
        '9DU' => 'E02005280',
        '9DW' => 'E02005280',
        '9DX' => 'E02005280',
        '9DY' => 'E02005280',
        '9DZ' => 'E02005280',
        '9EA' => 'E02005280',
        '9EB' => 'E02005280',
        '9ED' => 'E02005280',
        '9EE' => 'E02005280',
        '9EF' => 'E02005280',
        '9EG' => 'E02005280',
        '9EH' => 'E02005280',
        '9EJ' => 'E02005280',
        '9EL' => 'E02005280',
        '9EN' => 'E02005280',
        '9EP' => 'E02005280',
        '9EQ' => 'E02005280',
        '9ER' => 'E02005280',
        '9ES' => 'E02005280',
        '9ET' => 'E02005280',
        '9EU' => 'E02005280',
        '9EW' => 'E02005280',
        '9EX' => 'E02005280',
        '9EY' => 'E02005280',
        '9EZ' => 'E02005280',
        '9FA' => 'E02005280',
        '9FB' => 'E02005280',
        '9FD' => 'E02005280',
        '9FE' => 'E02005280',
        '9FF' => 'E02005280',
        '9FG' => 'E02005280',
        '9FH' => 'E02005280',
        '9FJ' => 'E02005280',
        '9FL' => 'E02005280',
        '9FN' => 'E02005280',
        '9GY' => 'E02005280',
        '9GZ' => 'E02005280',
        '9HA' => 'E02005280',
        '9HB' => 'E02005280',
        '9HD' => 'E02005280',
        '9HE' => 'E02005280',
        '9HF' => 'E02005280',
        '9HG' => 'E02005280',
        '9HH' => 'E02005280',
        '9HJ' => 'E02005280',
        '9HL' => 'E02005280',
        '9HN' => 'E02005280',
        '9HP' => 'E02005280',
        '9HQ' => 'E02005280',
        '9HR' => 'E02005280',
        '9HS' => 'E02005280',
        '9HT' => 'E02005280',
        '9HU' => 'E02005280',
        '9HW' => 'E02005280',
        '9HX' => 'E02005280',
        '9HY' => 'E02005280',
        '9HZ' => 'E02005280',
        '9JA' => 'E02005280',
        '9JB' => 'E02005280',
        '9JD' => 'E02005280',
        '9JE' => 'E02005280',
        '9JF' => 'E02005280',
        '9JG' => 'E02005280',
        '9JH' => 'E02005280',
        '9JJ' => 'E02005280',
        '9JL' => 'E02005280',
        '9JN' => 'E02005280',
        '9JP' => 'E02005280',
        '9JQ' => 'E02005280',
        '9JR' => 'E02005280',
        '9JS' => 'E02005280',
        '9JT' => 'E02005280',
        '9JU' => 'E02005280',
        '9JW' => 'E02005280',
        '9JX' => 'E02005280',
        '9JY' => 'E02005280',
        '9JZ' => 'E02005280',
        '9LA' => 'E02005280',
        '9LB' => 'E02005280',
        '9LD' => 'E02005280',
        '9LE' => 'E02005280',
        '9LF' => 'E02005280',
        '9LG' => 'E02005280',
        '9LH' => 'E02005280',
        '9LJ' => 'E02005280',
        '9LL' => 'E02005280',
        '9LN' => 'E02005280',
        '9LP' => 'E02005280',
        '9LQ' => 'E02005280',
        '9LR' => 'E02005280',
        '9LS' => 'E02005280',
        '9LT' => 'E02005280',
        '9LU' => 'E02005280',
        '9LW' => 'E02005280',
        '9LX' => 'E02005280',
        '9LY' => 'E02005280',
        '9LZ' => 'E02005280',
        '9NA' => 'E02005280',
        '9NB' => 'E02005280',
        '9ND' => 'E02005280',
        '9NE' => 'E02005280',
        '9NF' => 'E02005280',
        '9NG' => 'E02005280',
        '9NH' => 'E02005280',
        '9NJ' => 'E02005280',
        '9NL' => 'E02005280',
        '9NN' => 'E02005280',
        '9NP' => 'E02005280',
        '9NQ' => 'E02005280',
        '9NR' => 'E02005280',
        '9NS' => 'E02005280',
        '9NT' => 'E02005280',
        '9NU' => 'E02005280',
        '9NW' => 'E02005280',
        '9NX' => 'E02006884',
        '9NY' => 'E02005280',
        '9NZ' => 'E02005280',
        '9PA' => 'E02005280',
        '9PB' => 'E02005280',
        '9PD' => 'E02005280',
        '9PE' => 'E02005280',
        '9PF' => 'E02005280',
        '9PG' => 'E02005280',
        '9PH' => 'E02005280',
        '9PJ' => 'E02005280',
        '9PL' => 'E02005280',
        '9PN' => 'E02005280',
        '9PP' => 'E02005280',
        '9PQ' => 'E02005280',
        '9PR' => 'E02005280',
        '9PS' => 'E02005280',
        '9PT' => 'E02005280',
        '9PU' => 'E02005280',
        '9PW' => 'E02005280',
        '9PX' => 'E02005280',
        '9PY' => 'E02005280',
        '9PZ' => 'E02005280',
        '9QA' => 'E02006884',
        '9QB' => 'E02006884',
        '9QD' => 'E02006884',
        '9QE' => 'E02006884',
        '9QF' => 'E02006884',
        '9QG' => 'E02005280',
        '9QH' => 'E02005280',
        '9QJ' => 'E02005280',
        '9QL' => 'E02005280',
        '9QN' => 'E02005280',
        '9QP' => 'E02005280',
        '9QQ' => 'E02005280',
        '9QR' => 'E02005280',
        '9QS' => 'E02005280',
        '9QT' => 'E02005280',
        '9QU' => 'E02005280',
        '9QW' => 'E02005280',
        '9QX' => 'E02005280',
        '9QY' => 'E02005280',
        '9QZ' => 'E02005280',
        '9RA' => 'E02005280',
        '9RB' => 'E02005280',
        '9RD' => 'E02005280',
        '9RE' => 'E02005280',
        '9RF' => 'E02005280',
        '9RG' => 'E02005280',
        '9RH' => 'E02005280',
        '9RJ' => 'E02005280',
        '9RL' => 'E02006884',
        '9RN' => 'E02005280',
        '9RP' => 'E02005280',
        '9RQ' => 'E02005280',
        '9RR' => 'E02006884',
        '9RS' => 'E02005280',
        '9RT' => 'E02005280',
        '9RU' => 'E02005280',
        '9RW' => 'E02005280',
        '9RX' => 'E02005280',
        '9RY' => 'E02005280',
        '9RZ' => 'E02005280',
        '9SA' => 'E02005286',
        '9SB' => 'E02005280',
        '9SD' => 'E02005280',
        '9SE' => 'E02005280',
        '9SF' => 'E02005280',
        '9SG' => 'E02005280',
        '9SH' => 'E02005280',
        '9SJ' => 'E02005280',
        '9SL' => 'E02005286',
        '9SN' => 'E02005286',
        '9SP' => 'E02005280',
        '9SR' => 'E02005286',
        '9SS' => 'E02005280',
        '9SU' => 'E02005280',
        '9SW' => 'E02005280',
        '9SY' => 'E02005286',
        '9SZ' => 'E02005280',
        '9TA' => 'E02005280',
        '9TB' => 'E02005280',
        '9TD' => 'E02005280',
        '9TE' => 'E02005280',
        '9TF' => 'E02005280',
        '9TG' => 'E02005280',
        '9TH' => 'E02005280',
        '9TJ' => 'E02005280',
        '9TL' => 'E02005280',
        '9TN' => 'E02005280',
        '9TP' => 'E02005280',
        '9TQ' => 'E02005280',
        '9TS' => 'E02005280',
        '9TT' => 'E02005280',
        '9TW' => 'E02005280',
        '9TX' => 'E02005280',
        '9TY' => 'E02005280',
        '9TZ' => 'E02005280',
        '9UA' => 'E02005280',
        '9UB' => 'E02005280',
        '9UD' => 'E02005280',
        '9UE' => 'E02005280',
        '9UF' => 'E02005280',
        '9UG' => 'E02005280',
        '9UH' => 'E02005280',
        '9UP' => 'E02005280',
        '9UQ' => 'E02005280',
        '9UR' => 'E02005280',
        '9UT' => 'E02005280',
        '9UU' => 'E02005280',
        '9UX' => 'E02005280',
        '9UY' => 'E02005280',
        '9UZ' => 'E02005280',
        '9WA' => 'E02005280',
        '9WB' => 'E02005280',
        '9WU' => 'E02005286',
        '9WW' => 'E02005280',
        '9WX' => 'E02005280',
        '9WY' => 'E02005280',
        '9WZ' => 'E02005280',
        '9XA' => 'E02005280',
        '9XB' => 'E02005280',
        '9XD' => 'E02005280',
        '9XE' => 'E02005286',
        '9XF' => 'E02005286',
        '9XG' => 'E02005280',
        '9XH' => 'E02005280',
        '9XJ' => 'E02005286',
        '9XT' => 'E02005280',
        '9ZT' => 'E02005280',
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
