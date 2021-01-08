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
final class SN13
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02006660',
        '0AB' => 'E02006660',
        '0AD' => 'E02006660',
        '0AE' => 'E02006660',
        '0AG' => 'E02006660',
        '0AH' => 'E02006660',
        '0AJ' => 'E02006660',
        '0AL' => 'E02006660',
        '0AN' => 'E02006660',
        '0AP' => 'E02006660',
        '0AQ' => 'E02006660',
        '0AR' => 'E02006660',
        '0AS' => 'E02006660',
        '0AT' => 'E02006660',
        '0AU' => 'E02006660',
        '0AW' => 'E02006660',
        '0AX' => 'E02006660',
        '0AY' => 'E02006660',
        '0AZ' => 'E02006660',
        '0BA' => 'E02006660',
        '0BB' => 'E02006660',
        '0BD' => 'E02006660',
        '0BE' => 'E02006660',
        '0BF' => 'E02006660',
        '0BG' => 'E02006660',
        '0BH' => 'E02006660',
        '0BJ' => 'E02006660',
        '0BL' => 'E02006660',
        '0BN' => 'E02006660',
        '0BP' => 'E02006660',
        '0BQ' => 'E02006660',
        '0BS' => 'E02006660',
        '0BT' => 'E02006660',
        '0BU' => 'E02006659',
        '0BW' => 'E02006660',
        '0BX' => 'E02006659',
        '0BY' => 'E02006660',
        '0BZ' => 'E02006660',
        '0DA' => 'E02006660',
        '0DB' => 'E02006660',
        '0DD' => 'E02006660',
        '0DE' => 'E02006660',
        '0DF' => 'E02006660',
        '0DG' => 'E02006660',
        '0DH' => 'E02006660',
        '0DJ' => 'E02006660',
        '0DL' => 'E02006660',
        '0DN' => 'E02006660',
        '0DP' => 'E02006660',
        '0DQ' => 'E02006660',
        '0DR' => 'E02006660',
        '0DS' => 'E02006660',
        '0DT' => 'E02006660',
        '0DU' => 'E02006660',
        '0DW' => 'E02006660',
        '0DX' => 'E02006660',
        '0DY' => 'E02006659',
        '0DZ' => 'E02006659',
        '0EA' => 'E02006660',
        '0EB' => 'E02006660',
        '0ED' => 'E02006660',
        '0EE' => 'E02006660',
        '0EF' => 'E02006660',
        '0EG' => 'E02006660',
        '0EH' => 'E02006660',
        '0EJ' => 'E02006660',
        '0EL' => 'E02006660',
        '0EN' => 'E02006660',
        '0EP' => 'E02006659',
        '0EQ' => 'E02006660',
        '0ER' => 'E02006659',
        '0ES' => 'E02006660',
        '0ET' => 'E02006660',
        '0EU' => 'E02006660',
        '0EW' => 'E02006659',
        '0EX' => 'E02006660',
        '0EY' => 'E02006660',
        '0EZ' => 'E02006660',
        '0FA' => 'E02006659',
        '0FB' => 'E02006659',
        '0FD' => 'E02006659',
        '0FE' => 'E02006659',
        '0FF' => 'E02006659',
        '0FG' => 'E02006659',
        '0FH' => 'E02006659',
        '0FJ' => 'E02006659',
        '0FL' => 'E02006659',
        '0FN' => 'E02006659',
        '0FP' => 'E02006659',
        '0FQ' => 'E02006659',
        '0FS' => 'E02006659',
        '0FW' => 'E02006659',
        '0GT' => 'E02006659',
        '0HA' => 'E02006660',
        '0HB' => 'E02006660',
        '0HD' => 'E02006660',
        '0HE' => 'E02006660',
        '0HF' => 'E02006660',
        '0HG' => 'E02006660',
        '0HH' => 'E02006660',
        '0HJ' => 'E02006660',
        '0HL' => 'E02006660',
        '0HN' => 'E02006660',
        '0HP' => 'E02006660',
        '0HQ' => 'E02006660',
        '0HS' => 'E02006660',
        '0HT' => 'E02006660',
        '0HU' => 'E02006660',
        '0HW' => 'E02006660',
        '0HX' => 'E02006660',
        '0HY' => 'E02006660',
        '0HZ' => 'E02006660',
        '0JA' => 'E02006660',
        '0JB' => 'E02006660',
        '0JD' => 'E02006660',
        '0JE' => 'E02006660',
        '0JF' => 'E02006660',
        '0JH' => 'E02006660',
        '0JJ' => 'E02006660',
        '0JP' => 'E02006659',
        '0JR' => 'E02006659',
        '0JS' => 'E02006659',
        '0JT' => 'E02006659',
        '0JY' => 'E02006659',
        '0JZ' => 'E02006659',
        '0LA' => 'E02006659',
        '0LB' => 'E02006659',
        '0LD' => 'E02006659',
        '0LE' => 'E02006659',
        '0LF' => 'E02006659',
        '0LG' => 'E02006659',
        '0LH' => 'E02006659',
        '0LJ' => 'E02006659',
        '0LL' => 'E02006659',
        '0LN' => 'E02006659',
        '0LP' => 'E02006659',
        '0LQ' => 'E02006659',
        '0LR' => 'E02006659',
        '0LS' => 'E02006659',
        '0LT' => 'E02006659',
        '0LU' => 'E02006659',
        '0LW' => 'E02006659',
        '0LX' => 'E02006659',
        '0LY' => 'E02006659',
        '0LZ' => 'E02006659',
        '0NA' => 'E02006659',
        '0NB' => 'E02006659',
        '0ND' => 'E02006659',
        '0NE' => 'E02006659',
        '0NF' => 'E02006659',
        '0NG' => 'E02006659',
        '0NH' => 'E02006659',
        '0NJ' => 'E02006659',
        '0NL' => 'E02006659',
        '0NN' => 'E02006659',
        '0NP' => 'E02006659',
        '0NQ' => 'E02006659',
        '0NR' => 'E02006659',
        '0NS' => 'E02006659',
        '0NT' => 'E02006659',
        '0NU' => 'E02006659',
        '0NW' => 'E02006659',
        '0NX' => 'E02006659',
        '0NY' => 'E02006659',
        '0NZ' => 'E02006659',
        '0PA' => 'E02006659',
        '0PB' => 'E02006659',
        '0PD' => 'E02006659',
        '0PE' => 'E02006659',
        '0PF' => 'E02006659',
        '0PG' => 'E02006659',
        '0PH' => 'E02006659',
        '0PJ' => 'E02006659',
        '0PL' => 'E02006660',
        '0PP' => 'E02006659',
        '0PQ' => 'E02006659',
        '0PR' => 'E02006660',
        '0PS' => 'E02006659',
        '0PT' => 'E02006660',
        '0PU' => 'E02006660',
        '0PW' => 'E02006659',
        '0PX' => 'E02006660',
        '0PY' => 'E02006660',
        '0PZ' => 'E02006660',
        '0QA' => 'E02006660',
        '0QB' => 'E02006660',
        '0QD' => 'E02006660',
        '0QE' => 'E02006660',
        '0QF' => 'E02006651',
        '0QG' => 'E02006660',
        '0QH' => 'E02006660',
        '0QJ' => 'E02006660',
        '0QL' => 'E02006660',
        '0QN' => 'E02006660',
        '0QP' => 'E02006660',
        '0QQ' => 'E02006660',
        '0QR' => 'E02006660',
        '0QS' => 'E02006660',
        '0QT' => 'E02006660',
        '0QU' => 'E02006660',
        '0QW' => 'E02006660',
        '0QX' => 'E02006660',
        '0QY' => 'E02006659',
        '0RA' => 'E02006660',
        '0RB' => 'E02006660',
        '0RD' => 'E02006660',
        '0RG' => 'E02006660',
        '0RH' => 'E02006660',
        '0RJ' => 'E02006660',
        '0RL' => 'E02006660',
        '0RN' => 'E02006660',
        '0RP' => 'E02006660',
        '0RQ' => 'E02006660',
        '0RR' => 'E02006660',
        '0RS' => 'E02006660',
        '0RT' => 'E02006660',
        '0RU' => 'E02006660',
        '0RW' => 'E02006660',
        '0RX' => 'E02006660',
        '0RY' => 'E02006660',
        '0RZ' => 'E02006660',
        '0SA' => 'E02006660',
        '0SB' => 'E02006660',
        '0SD' => 'E02006660',
        '0SE' => 'E02006660',
        '0SF' => 'E02006660',
        '0SG' => 'E02006660',
        '0SZ' => 'E02006659',
        '0TA' => 'E02006660',
        '0WA' => 'E02006660',
        '0WB' => 'E02006660',
        '0WS' => 'E02006660',
        '0WT' => 'E02006660',
        '0WU' => 'E02006653',
        '0WX' => 'E02006653',
        '0WZ' => 'E02006660',
        '0XJ' => 'E02006660',
        '0XZ' => 'E02006660',
        '0ZQ' => 'E02006653',
        '0ZR' => 'E02006653',
        '0ZX' => 'E02006660',
        '7AB' => 'E02006653',
        '7AD' => 'E02006653',
        '7AE' => 'E02006653',
        '8AA' => 'E02006659',
        '8AB' => 'E02006659',
        '8AD' => 'E02006659',
        '8AE' => 'E02006659',
        '8AF' => 'E02006659',
        '8AG' => 'E02006659',
        '8AH' => 'E02006659',
        '8AJ' => 'E02006659',
        '8AL' => 'E02006659',
        '8AN' => 'E02006659',
        '8AP' => 'E02006659',
        '8AQ' => 'E02006659',
        '8AR' => 'E02006659',
        '8AS' => 'E02006659',
        '8AT' => 'E02006659',
        '8AU' => 'E02006659',
        '8AW' => 'E02006659',
        '8AX' => 'E02006659',
        '8AY' => 'E02006659',
        '8AZ' => 'E02006659',
        '8BA' => 'E02006659',
        '8BB' => 'E02006659',
        '8BD' => 'E02006659',
        '8BE' => 'E02006659',
        '8BF' => 'E02006660',
        '8BG' => 'E02006659',
        '8BH' => 'E02006659',
        '8BJ' => 'E02006659',
        '8BL' => 'E02006659',
        '8BN' => 'E02006659',
        '8BP' => 'E02006659',
        '8BQ' => 'E02006659',
        '8BS' => 'E02006659',
        '8BT' => 'E02006659',
        '8BU' => 'E02006659',
        '8BW' => 'E02006659',
        '8BX' => 'E02006659',
        '8BY' => 'E02006659',
        '8BZ' => 'E02006659',
        '8DA' => 'E02006659',
        '8DB' => 'E02006659',
        '8DD' => 'E02006659',
        '8DE' => 'E02006659',
        '8DF' => 'E02006659',
        '8DG' => 'E02006659',
        '8DH' => 'E02006659',
        '8DJ' => 'E02006659',
        '8DL' => 'E02006659',
        '8DN' => 'E02006659',
        '8DP' => 'E02006659',
        '8DQ' => 'E02006659',
        '8DR' => 'E02006659',
        '8DS' => 'E02006659',
        '8DT' => 'E02006659',
        '8DU' => 'E02006659',
        '8DX' => 'E02006659',
        '8DY' => 'E02006659',
        '8DZ' => 'E02006659',
        '8EA' => 'E02006659',
        '8EB' => 'E02006659',
        '8ED' => 'E02006659',
        '8EE' => 'E02006659',
        '8EF' => 'E02006659',
        '8EG' => 'E02006659',
        '8EH' => 'E02006659',
        '8EJ' => 'E02006659',
        '8EL' => 'E02006659',
        '8EN' => 'E02006659',
        '8EP' => 'E02006659',
        '8EQ' => 'E02006659',
        '8ER' => 'E02006659',
        '8ES' => 'E02006659',
        '8ET' => 'E02006659',
        '8EU' => 'E02006659',
        '8EW' => 'E02006659',
        '8EX' => 'E02006659',
        '8EY' => 'E02006659',
        '8EZ' => 'E02006659',
        '8GA' => 'E02006659',
        '8HA' => 'E02006659',
        '8HB' => 'E02006659',
        '8HD' => 'E02006659',
        '8HE' => 'E02006659',
        '8HF' => 'E02006659',
        '8HG' => 'E02006659',
        '8HH' => 'E02006659',
        '8HJ' => 'E02006659',
        '8HL' => 'E02006659',
        '8HN' => 'E02006659',
        '8HP' => 'E02006659',
        '8HQ' => 'E02006659',
        '8HR' => 'E02006659',
        '8HS' => 'E02006659',
        '8HT' => 'E02006659',
        '8HW' => 'E02006659',
        '8HX' => 'E02006659',
        '8HY' => 'E02006659',
        '8HZ' => 'E02006659',
        '8JA' => 'E02006659',
        '8JB' => 'E02006659',
        '8JD' => 'E02006659',
        '8JE' => 'E02006659',
        '8JF' => 'E02006659',
        '8JG' => 'E02006659',
        '8JH' => 'E02006679',
        '8JJ' => 'E02006681',
        '8JL' => 'E02006659',
        '8JN' => 'E02006659',
        '8JQ' => 'E02006659',
        '8JR' => 'E02006659',
        '8JS' => 'E02006659',
        '8JT' => 'E02006659',
        '8JU' => 'E02006659',
        '8JX' => 'E02006659',
        '8JY' => 'E02006659',
        '8JZ' => 'E02006659',
        '8LA' => 'E02006659',
        '8LB' => 'E02006659',
        '8LD' => 'E02006659',
        '8LE' => 'E02006659',
        '8LF' => 'E02006659',
        '8LG' => 'E02006659',
        '8LH' => 'E02006659',
        '8LJ' => 'E02006659',
        '8LL' => 'E02006659',
        '8LN' => 'E02006659',
        '8LP' => 'E02006659',
        '8LQ' => 'E02006659',
        '8LR' => 'E02006659',
        '8LS' => 'E02006659',
        '8LT' => 'E02006659',
        '8LU' => 'E02006659',
        '8LW' => 'E02006659',
        '8LX' => 'E02006659',
        '8LY' => 'E02006659',
        '8LZ' => 'E02006659',
        '8NA' => 'E02006659',
        '8NB' => 'E02006659',
        '8ND' => 'E02006659',
        '8NE' => 'E02006659',
        '8NF' => 'E02006659',
        '8NG' => 'E02006659',
        '8NH' => 'E02006659',
        '8NJ' => 'E02006659',
        '8NN' => 'E02006659',
        '8NP' => 'E02006659',
        '8NQ' => 'E02006659',
        '8NR' => 'E02006659',
        '8NS' => 'E02006659',
        '8NT' => 'E02006659',
        '8NU' => 'E02006659',
        '8NW' => 'E02006659',
        '8NX' => 'E02006659',
        '8NY' => 'E02006659',
        '8NZ' => 'E02006659',
        '8PA' => 'E02006659',
        '8PB' => 'E02006659',
        '8PD' => 'E02006659',
        '8PE' => 'E02006659',
        '8PH' => 'E02006659',
        '8PJ' => 'E02006659',
        '8PL' => 'E02006659',
        '8PN' => 'E02006659',
        '8PP' => 'E02006659',
        '8PQ' => 'E02006659',
        '8PR' => 'E02006659',
        '8PS' => 'E02006659',
        '8PT' => 'E02006659',
        '8PW' => 'E02006659',
        '8PY' => 'E02006659',
        '8PZ' => 'E02006659',
        '8QA' => 'E02006659',
        '8QB' => 'E02006659',
        '8QD' => 'E02006659',
        '8QE' => 'E02006659',
        '8QF' => 'E02006659',
        '8QG' => 'E02006659',
        '8QH' => 'E02006659',
        '8QJ' => 'E02006659',
        '8QL' => 'E02006659',
        '8QN' => 'E02006659',
        '8QP' => 'E02006659',
        '8QQ' => 'E02006659',
        '8QR' => 'E02006659',
        '8QS' => 'E02006659',
        '8QT' => 'E02006659',
        '8QW' => 'E02006659',
        '8QX' => 'E02006660',
        '8QY' => 'E02006659',
        '8RB' => 'E02006653',
        '8RL' => 'E02006659',
        '8RN' => 'E02006660',
        '8RP' => 'E02006660',
        '8RR' => 'E02006653',
        '8RW' => 'E02006659',
        '8SY' => 'E02006660',
        '8SZ' => 'E02006653',
        '8WA' => 'E02006660',
        '8WB' => 'E02006660',
        '8WP' => 'E02006660',
        '8WQ' => 'E02006653',
        '8WR' => 'E02006653',
        '8WS' => 'E02006653',
        '8WT' => 'E02006653',
        '8WU' => 'E02006653',
        '8WX' => 'E02006660',
        '8WZ' => 'E02006653',
        '8XG' => 'E02006660',
        '8XX' => 'E02006660',
        '8XZ' => 'E02006660',
        '8ZN' => 'E02006660',
        '8ZX' => 'E02006653',
        '9AA' => 'E02006660',
        '9AB' => 'E02006660',
        '9AD' => 'E02006660',
        '9AE' => 'E02006660',
        '9AF' => 'E02006660',
        '9AG' => 'E02006660',
        '9AH' => 'E02006660',
        '9AJ' => 'E02006660',
        '9AL' => 'E02006660',
        '9AN' => 'E02006660',
        '9AP' => 'E02006660',
        '9AQ' => 'E02006660',
        '9AR' => 'E02006660',
        '9AS' => 'E02006660',
        '9AT' => 'E02006660',
        '9AU' => 'E02006660',
        '9AW' => 'E02006660',
        '9AX' => 'E02006660',
        '9AY' => 'E02006660',
        '9AZ' => 'E02006660',
        '9BA' => 'E02006660',
        '9BB' => 'E02006660',
        '9BD' => 'E02006653',
        '9BE' => 'E02006660',
        '9BF' => 'E02006660',
        '9BG' => 'E02006660',
        '9BH' => 'E02006660',
        '9BJ' => 'E02006660',
        '9BL' => 'E02006660',
        '9BN' => 'E02006660',
        '9BP' => 'E02006660',
        '9BQ' => 'E02006660',
        '9BS' => 'E02006660',
        '9BT' => 'E02006660',
        '9BU' => 'E02006660',
        '9BW' => 'E02006660',
        '9BX' => 'E02006660',
        '9BY' => 'E02006660',
        '9BZ' => 'E02006660',
        '9DA' => 'E02006660',
        '9DB' => 'E02006660',
        '9DD' => 'E02006660',
        '9DE' => 'E02006660',
        '9DF' => 'E02006660',
        '9DG' => 'E02006660',
        '9DH' => 'E02006660',
        '9DJ' => 'E02006660',
        '9DL' => 'E02006660',
        '9DN' => 'E02006660',
        '9DP' => 'E02006660',
        '9DQ' => 'E02006660',
        '9DR' => 'E02006660',
        '9DS' => 'E02006660',
        '9DT' => 'E02006660',
        '9DU' => 'E02006660',
        '9DW' => 'E02006660',
        '9DX' => 'E02006660',
        '9DY' => 'E02006660',
        '9DZ' => 'E02006660',
        '9EA' => 'E02006659',
        '9EB' => 'E02006659',
        '9ED' => 'E02006659',
        '9EE' => 'E02006659',
        '9EF' => 'E02006659',
        '9EG' => 'E02006659',
        '9EH' => 'E02006659',
        '9EJ' => 'E02006660',
        '9EL' => 'E02006659',
        '9EN' => 'E02006660',
        '9EP' => 'E02006659',
        '9EQ' => 'E02006659',
        '9ER' => 'E02006659',
        '9ES' => 'E02006660',
        '9ET' => 'E02006660',
        '9EU' => 'E02006660',
        '9EW' => 'E02006660',
        '9EX' => 'E02006660',
        '9EY' => 'E02006660',
        '9EZ' => 'E02006660',
        '9FA' => 'E02006660',
        '9FB' => 'E02006660',
        '9FD' => 'E02006660',
        '9FE' => 'E02006660',
        '9FF' => 'E02006660',
        '9FG' => 'E02006660',
        '9FH' => 'E02006660',
        '9FJ' => 'E02006660',
        '9FL' => 'E02006660',
        '9FN' => 'E02006660',
        '9FP' => 'E02006660',
        '9FQ' => 'E02006660',
        '9FR' => 'E02006660',
        '9FS' => 'E02006660',
        '9FT' => 'E02006660',
        '9FU' => 'E02006659',
        '9FW' => 'E02006660',
        '9FX' => 'E02006653',
        '9FY' => 'E02006660',
        '9FZ' => 'E02006660',
        '9GB' => 'E02006660',
        '9GD' => 'E02006660',
        '9GE' => 'E02006660',
        '9GF' => 'E02006660',
        '9GG' => 'E02006653',
        '9GH' => 'E02006660',
        '9GJ' => 'E02006660',
        '9GL' => 'E02006660',
        '9GN' => 'E02006660',
        '9GP' => 'E02006660',
        '9GQ' => 'E02006659',
        '9GR' => 'E02006660',
        '9GS' => 'E02006660',
        '9GT' => 'E02006660',
        '9GU' => 'E02006660',
        '9GW' => 'E02006659',
        '9GX' => 'E02006660',
        '9HA' => 'E02006660',
        '9HB' => 'E02006660',
        '9HD' => 'E02006660',
        '9HE' => 'E02006660',
        '9HF' => 'E02006660',
        '9HG' => 'E02006660',
        '9HH' => 'E02006660',
        '9HJ' => 'E02006660',
        '9HP' => 'E02006660',
        '9HQ' => 'E02006660',
        '9HR' => 'E02006660',
        '9HS' => 'E02006660',
        '9HT' => 'E02006660',
        '9HU' => 'E02006660',
        '9HX' => 'E02006660',
        '9HY' => 'E02006660',
        '9HZ' => 'E02006660',
        '9JA' => 'E02006660',
        '9JB' => 'E02006660',
        '9JD' => 'E02006660',
        '9JE' => 'E02006660',
        '9JF' => 'E02006660',
        '9JG' => 'E02006660',
        '9JH' => 'E02006660',
        '9JL' => 'E02006660',
        '9JN' => 'E02006660',
        '9JP' => 'E02006660',
        '9JQ' => 'E02006660',
        '9JR' => 'E02006660',
        '9JS' => 'E02006660',
        '9JW' => 'E02006660',
        '9LA' => 'E02006659',
        '9LB' => 'E02006659',
        '9LD' => 'E02006660',
        '9LE' => 'E02006660',
        '9LF' => 'E02006660',
        '9LG' => 'E02006660',
        '9LH' => 'E02006660',
        '9LJ' => 'E02006660',
        '9LL' => 'E02006660',
        '9LN' => 'E02006660',
        '9LP' => 'E02006660',
        '9LQ' => 'E02006660',
        '9LR' => 'E02006660',
        '9LS' => 'E02006660',
        '9LT' => 'E02006660',
        '9LU' => 'E02006660',
        '9LW' => 'E02006660',
        '9LX' => 'E02006660',
        '9LY' => 'E02006660',
        '9LZ' => 'E02006660',
        '9NA' => 'E02006660',
        '9NB' => 'E02006660',
        '9ND' => 'E02006660',
        '9NE' => 'E02006660',
        '9NF' => 'E02006660',
        '9NG' => 'E02006660',
        '9NH' => 'E02006660',
        '9NJ' => 'E02006660',
        '9NL' => 'E02006660',
        '9NN' => 'E02006660',
        '9NP' => 'E02006659',
        '9NQ' => 'E02006660',
        '9NR' => 'E02006660',
        '9NS' => 'E02006659',
        '9NT' => 'E02006659',
        '9NU' => 'E02006659',
        '9NW' => 'E02006659',
        '9NX' => 'E02006659',
        '9NY' => 'E02006660',
        '9NZ' => 'E02006660',
        '9PA' => 'E02006660',
        '9PB' => 'E02006660',
        '9PD' => 'E02006660',
        '9PE' => 'E02006660',
        '9PF' => 'E02006660',
        '9PG' => 'E02006660',
        '9PH' => 'E02006660',
        '9PJ' => 'E02006660',
        '9PL' => 'E02006660',
        '9PN' => 'E02006660',
        '9PP' => 'E02006660',
        '9PQ' => 'E02006660',
        '9PR' => 'E02006660',
        '9PS' => 'E02006660',
        '9PT' => 'E02006660',
        '9PU' => 'E02006660',
        '9PW' => 'E02006660',
        '9PX' => 'E02006660',
        '9PY' => 'E02006660',
        '9PZ' => 'E02006660',
        '9QB' => 'E02006660',
        '9QD' => 'E02006660',
        '9QE' => 'E02006660',
        '9QF' => 'E02006660',
        '9QG' => 'E02006660',
        '9QH' => 'E02006660',
        '9QJ' => 'E02006660',
        '9QL' => 'E02006660',
        '9QN' => 'E02006660',
        '9QP' => 'E02006660',
        '9QQ' => 'E02006660',
        '9QR' => 'E02006660',
        '9QS' => 'E02006660',
        '9QT' => 'E02006660',
        '9QW' => 'E02006660',
        '9QX' => 'E02006653',
        '9QY' => 'E02006660',
        '9QZ' => 'E02006660',
        '9RA' => 'E02006659',
        '9RB' => 'E02006660',
        '9RD' => 'E02006660',
        '9RE' => 'E02006660',
        '9RF' => 'E02006660',
        '9RG' => 'E02006659',
        '9RH' => 'E02006660',
        '9RJ' => 'E02006660',
        '9RL' => 'E02006660',
        '9RN' => 'E02006660',
        '9RP' => 'E02006660',
        '9RQ' => 'E02006660',
        '9RR' => 'E02006660',
        '9RS' => 'E02006660',
        '9RT' => 'E02006660',
        '9RU' => 'E02006660',
        '9RW' => 'E02006660',
        '9RX' => 'E02006660',
        '9RY' => 'E02006660',
        '9RZ' => 'E02006660',
        '9SA' => 'E02006660',
        '9SB' => 'E02006660',
        '9SD' => 'E02006660',
        '9SE' => 'E02006660',
        '9SF' => 'E02006660',
        '9SG' => 'E02006660',
        '9SH' => 'E02006660',
        '9SJ' => 'E02006660',
        '9SL' => 'E02006660',
        '9SN' => 'E02006660',
        '9SP' => 'E02006660',
        '9SQ' => 'E02006660',
        '9SR' => 'E02006660',
        '9SS' => 'E02006660',
        '9ST' => 'E02006660',
        '9SU' => 'E02006660',
        '9SW' => 'E02006660',
        '9SX' => 'E02006660',
        '9SY' => 'E02006660',
        '9SZ' => 'E02006660',
        '9TA' => 'E02006660',
        '9TB' => 'E02006660',
        '9TD' => 'E02006660',
        '9TE' => 'E02006660',
        '9TF' => 'E02006660',
        '9TG' => 'E02006660',
        '9TH' => 'E02006660',
        '9TJ' => 'E02006660',
        '9TL' => 'E02006660',
        '9TN' => 'E02006660',
        '9TP' => 'E02006660',
        '9TQ' => 'E02006679',
        '9TR' => 'E02006660',
        '9TS' => 'E02006660',
        '9TT' => 'E02006660',
        '9TU' => 'E02006660',
        '9TW' => 'E02006660',
        '9TX' => 'E02006660',
        '9TY' => 'E02006660',
        '9TZ' => 'E02006660',
        '9UA' => 'E02006660',
        '9UB' => 'E02006660',
        '9UD' => 'E02006660',
        '9UE' => 'E02006660',
        '9UF' => 'E02006660',
        '9UG' => 'E02006660',
        '9UH' => 'E02006660',
        '9UJ' => 'E02006660',
        '9UL' => 'E02006660',
        '9UN' => 'E02006660',
        '9UP' => 'E02006660',
        '9UQ' => 'E02006660',
        '9UR' => 'E02006660',
        '9US' => 'E02006660',
        '9UT' => 'E02006660',
        '9UU' => 'E02006660',
        '9UW' => 'E02006660',
        '9UX' => 'E02006660',
        '9UY' => 'E02006660',
        '9UZ' => 'E02006660',
        '9WA' => 'E02006660',
        '9WB' => 'E02006660',
        '9WD' => 'E02006660',
        '9WE' => 'E02006660',
        '9WF' => 'E02006660',
        '9WG' => 'E02006660',
        '9WH' => 'E02006660',
        '9WJ' => 'E02006660',
        '9WL' => 'E02006660',
        '9WN' => 'E02006660',
        '9WP' => 'E02006660',
        '9WQ' => 'E02006660',
        '9WR' => 'E02006660',
        '9WS' => 'E02006660',
        '9WT' => 'E02006653',
        '9WU' => 'E02006660',
        '9WX' => 'E02006660',
        '9WZ' => 'E02006660',
        '9XA' => 'E02006653',
        '9XB' => 'E02006660',
        '9XD' => 'E02006660',
        '9XE' => 'E02006660',
        '9XF' => 'E02006660',
        '9XG' => 'E02006660',
        '9XH' => 'E02006660',
        '9XJ' => 'E02006660',
        '9XL' => 'E02006660',
        '9XN' => 'E02006660',
        '9XP' => 'E02006660',
        '9XQ' => 'E02006660',
        '9XR' => 'E02006660',
        '9XS' => 'E02006660',
        '9XT' => 'E02006660',
        '9XU' => 'E02006660',
        '9XW' => 'E02006660',
        '9XX' => 'E02006660',
        '9XY' => 'E02006653',
        '9XZ' => 'E02006660',
        '9YA' => 'E02006660',
        '9YB' => 'E02006660',
        '9YD' => 'E02006653',
        '9YE' => 'E02006660',
        '9YF' => 'E02006660',
        '9YG' => 'E02006660',
        '9YH' => 'E02006653',
        '9YJ' => 'E02006660',
        '9YL' => 'E02006660',
        '9YN' => 'E02006660',
        '9YP' => 'E02006660',
        '9YQ' => 'E02006660',
        '9YR' => 'E02006660',
        '9YS' => 'E02006660',
        '9YT' => 'E02006660',
        '9YU' => 'E02006660',
        '9YW' => 'E02006660',
        '9YZ' => 'E02006660',
        '9ZA' => 'E02006660',
        '9ZB' => 'E02006653',
        '9ZD' => 'E02006660',
        '9ZE' => 'E02006660',
        '9ZJ' => 'E02006653',
        '9ZL' => 'E02006660',
        '9ZN' => 'E02006660',
        '9ZQ' => 'E02006660',
        '9ZR' => 'E02006660',
        '9ZU' => 'E02006653',
        '9ZW' => 'E02006660',
        '9ZX' => 'E02006660',
        '9ZY' => 'E02006660',
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
