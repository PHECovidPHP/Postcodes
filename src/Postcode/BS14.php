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
final class BS14
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02003058',
        '0AB' => 'E02003058',
        '0AD' => 'E02003058',
        '0AE' => 'E02003058',
        '0AF' => 'E02003058',
        '0AG' => 'E02003058',
        '0AH' => 'E02003058',
        '0AJ' => 'E02003058',
        '0AL' => 'E02003058',
        '0AN' => 'E02003058',
        '0AP' => 'E02003058',
        '0AQ' => 'E02003058',
        '0AR' => 'E02003058',
        '0AS' => 'E02003058',
        '0AT' => 'E02003058',
        '0AU' => 'E02003058',
        '0AW' => 'E02003058',
        '0AX' => 'E02003058',
        '0AY' => 'E02003058',
        '0AZ' => 'E02003058',
        '0BA' => 'E02003064',
        '0BB' => 'E02003064',
        '0BD' => 'E02003064',
        '0BE' => 'E02003064',
        '0BF' => 'E02003058',
        '0BG' => 'E02003058',
        '0BH' => 'E02003063',
        '0BJ' => 'E02003063',
        '0BL' => 'E02003064',
        '0BN' => 'E02003064',
        '0BP' => 'E02003004',
        '0BQ' => 'E02003063',
        '0BS' => 'E02003004',
        '0BT' => 'E02003004',
        '0BU' => 'E02003005',
        '0BW' => 'E02003063',
        '0BX' => 'E02003005',
        '0BY' => 'E02003064',
        '0BZ' => 'E02003058',
        '0DB' => 'E02003063',
        '0DD' => 'E02003064',
        '0DE' => 'E02003058',
        '0DF' => 'E02003063',
        '0DG' => 'E02003063',
        '0DH' => 'E02003063',
        '0DJ' => 'E02003063',
        '0DL' => 'E02003063',
        '0DN' => 'E02003063',
        '0DP' => 'E02003063',
        '0DQ' => 'E02003063',
        '0DR' => 'E02003063',
        '0DS' => 'E02003063',
        '0DT' => 'E02003063',
        '0DU' => 'E02003063',
        '0DW' => 'E02003063',
        '0DX' => 'E02003063',
        '0DY' => 'E02003063',
        '0DZ' => 'E02003063',
        '0EA' => 'E02003063',
        '0EB' => 'E02003063',
        '0ED' => 'E02003063',
        '0EE' => 'E02003063',
        '0EF' => 'E02003063',
        '0EG' => 'E02003063',
        '0EH' => 'E02003063',
        '0EJ' => 'E02003063',
        '0EL' => 'E02003063',
        '0EN' => 'E02003063',
        '0EP' => 'E02003063',
        '0EQ' => 'E02003063',
        '0ER' => 'E02003063',
        '0ES' => 'E02003063',
        '0ET' => 'E02003063',
        '0EU' => 'E02003063',
        '0EW' => 'E02003063',
        '0EX' => 'E02003063',
        '0EY' => 'E02003063',
        '0EZ' => 'E02003004',
        '0FB' => 'E02003063',
        '0FD' => 'E02003004',
        '0FE' => 'E02003058',
        '0FF' => 'E02003004',
        '0FG' => 'E02003004',
        '0FH' => 'E02003004',
        '0FJ' => 'E02003004',
        '0FL' => 'E02003004',
        '0FN' => 'E02003063',
        '0FP' => 'E02003004',
        '0FQ' => 'E02003004',
        '0FR' => 'E02003004',
        '0FS' => 'E02003004',
        '0FT' => 'E02003004',
        '0FU' => 'E02003058',
        '0FW' => 'E02003058',
        '0FY' => 'E02003058',
        '0GB' => 'E02003058',
        '0GN' => 'E02003058',
        '0GT' => 'E02003064',
        '0HA' => 'E02003063',
        '0HB' => 'E02003063',
        '0HD' => 'E02003063',
        '0HE' => 'E02003063',
        '0HF' => 'E02003063',
        '0HG' => 'E02003063',
        '0HH' => 'E02003063',
        '0HJ' => 'E02003063',
        '0HL' => 'E02003063',
        '0HN' => 'E02003063',
        '0HP' => 'E02003063',
        '0HQ' => 'E02003063',
        '0HR' => 'E02003058',
        '0HS' => 'E02003063',
        '0HT' => 'E02003063',
        '0HU' => 'E02003063',
        '0HW' => 'E02003063',
        '0HX' => 'E02003063',
        '0HY' => 'E02003063',
        '0HZ' => 'E02003063',
        '0JA' => 'E02003063',
        '0JB' => 'E02003063',
        '0JD' => 'E02003063',
        '0JE' => 'E02003063',
        '0JF' => 'E02003063',
        '0JG' => 'E02003063',
        '0JH' => 'E02003063',
        '0JJ' => 'E02003063',
        '0JL' => 'E02003063',
        '0JN' => 'E02003063',
        '0JP' => 'E02003063',
        '0JQ' => 'E02003063',
        '0JR' => 'E02003063',
        '0JS' => 'E02003063',
        '0JT' => 'E02003063',
        '0JU' => 'E02003063',
        '0JW' => 'E02003063',
        '0JX' => 'E02003063',
        '0JY' => 'E02003063',
        '0JZ' => 'E02003063',
        '0LA' => 'E02003064',
        '0LB' => 'E02003063',
        '0LD' => 'E02003063',
        '0LE' => 'E02003063',
        '0LF' => 'E02003063',
        '0LG' => 'E02003063',
        '0LH' => 'E02003063',
        '0LJ' => 'E02003063',
        '0LL' => 'E02003063',
        '0LN' => 'E02003063',
        '0LP' => 'E02003063',
        '0LQ' => 'E02003063',
        '0LR' => 'E02003063',
        '0LS' => 'E02003063',
        '0LT' => 'E02003063',
        '0LU' => 'E02003063',
        '0LW' => 'E02003063',
        '0LX' => 'E02003063',
        '0LY' => 'E02003063',
        '0LZ' => 'E02003063',
        '0NA' => 'E02003063',
        '0NB' => 'E02003063',
        '0ND' => 'E02003063',
        '0NE' => 'E02003063',
        '0NF' => 'E02003063',
        '0NG' => 'E02003063',
        '0NH' => 'E02003063',
        '0NJ' => 'E02003063',
        '0NL' => 'E02003063',
        '0NN' => 'E02003063',
        '0NP' => 'E02003063',
        '0NQ' => 'E02003063',
        '0NR' => 'E02003063',
        '0NS' => 'E02003063',
        '0NT' => 'E02003063',
        '0NU' => 'E02003063',
        '0NW' => 'E02003063',
        '0NX' => 'E02003063',
        '0NY' => 'E02003063',
        '0NZ' => 'E02003063',
        '0PA' => 'E02003060',
        '0PB' => 'E02003058',
        '0PD' => 'E02003058',
        '0PE' => 'E02003004',
        '0PF' => 'E02003004',
        '0PG' => 'E02003004',
        '0PH' => 'E02003004',
        '0PJ' => 'E02003004',
        '0PL' => 'E02003004',
        '0PN' => 'E02003004',
        '0PP' => 'E02003004',
        '0PQ' => 'E02003004',
        '0PR' => 'E02003004',
        '0PS' => 'E02003004',
        '0PT' => 'E02003004',
        '0PU' => 'E02003004',
        '0PW' => 'E02003063',
        '0PX' => 'E02003004',
        '0PY' => 'E02003004',
        '0PZ' => 'E02003060',
        '0QA' => 'E02003004',
        '0QB' => 'E02003004',
        '0QD' => 'E02003004',
        '0QE' => 'E02003004',
        '0QF' => 'E02003004',
        '0QG' => 'E02003004',
        '0QH' => 'E02003004',
        '0QJ' => 'E02003004',
        '0QL' => 'E02003004',
        '0QN' => 'E02003004',
        '0QP' => 'E02003004',
        '0QQ' => 'E02003004',
        '0QR' => 'E02003004',
        '0QS' => 'E02003004',
        '0QT' => 'E02003004',
        '0QU' => 'E02003000',
        '0QW' => 'E02003004',
        '0QX' => 'E02003004',
        '0QY' => 'E02003004',
        '0QZ' => 'E02003004',
        '0RA' => 'E02003058',
        '0RB' => 'E02003058',
        '0RD' => 'E02003058',
        '0RE' => 'E02003058',
        '0RF' => 'E02003058',
        '0RG' => 'E02003058',
        '0RH' => 'E02003058',
        '0RJ' => 'E02003058',
        '0RL' => 'E02003058',
        '0RN' => 'E02003058',
        '0RP' => 'E02003058',
        '0RQ' => 'E02003058',
        '0RR' => 'E02003058',
        '0RS' => 'E02003058',
        '0RT' => 'E02003058',
        '0RU' => 'E02003058',
        '0RW' => 'E02003058',
        '0RX' => 'E02003058',
        '0RY' => 'E02003058',
        '0RZ' => 'E02003058',
        '0SA' => 'E02003058',
        '0SB' => 'E02003058',
        '0SD' => 'E02003058',
        '0SE' => 'E02003058',
        '0SF' => 'E02003058',
        '0SG' => 'E02003058',
        '0SH' => 'E02003058',
        '0SJ' => 'E02003058',
        '0SL' => 'E02003058',
        '0SN' => 'E02003058',
        '0SP' => 'E02003058',
        '0SQ' => 'E02003058',
        '0SR' => 'E02003058',
        '0SS' => 'E02003058',
        '0ST' => 'E02003058',
        '0SU' => 'E02003063',
        '0SW' => 'E02003058',
        '0SX' => 'E02003058',
        '0SY' => 'E02003058',
        '0SZ' => 'E02003004',
        '0TA' => 'E02003063',
        '0TB' => 'E02003063',
        '0TD' => 'E02003063',
        '0TE' => 'E02003063',
        '0TF' => 'E02003063',
        '0TG' => 'E02003063',
        '0TH' => 'E02003063',
        '0TJ' => 'E02003064',
        '0TP' => 'E02003004',
        '0TQ' => 'E02003063',
        '0TR' => 'E02003004',
        '0TS' => 'E02003004',
        '0TT' => 'E02003004',
        '0TU' => 'E02003004',
        '0UA' => 'E02003063',
        '0UB' => 'E02003063',
        '0UD' => 'E02003063',
        '0UE' => 'E02003063',
        '0UQ' => 'E02003063',
        '0WW' => 'E02003050',
        '0WX' => 'E02003050',
        '0WY' => 'E02003050',
        '0WZ' => 'E02003050',
        '0XA' => 'E02003063',
        '0XB' => 'E02003063',
        '0XD' => 'E02003063',
        '8AA' => 'E02003060',
        '8AB' => 'E02003060',
        '8AD' => 'E02003060',
        '8AF' => 'E02003060',
        '8AG' => 'E02003060',
        '8AH' => 'E02003060',
        '8AJ' => 'E02003060',
        '8AL' => 'E02003060',
        '8AN' => 'E02003060',
        '8AP' => 'E02003060',
        '8AQ' => 'E02003060',
        '8AR' => 'E02003060',
        '8AS' => 'E02003060',
        '8AT' => 'E02003060',
        '8AU' => 'E02003060',
        '8AW' => 'E02003060',
        '8AX' => 'E02003060',
        '8AY' => 'E02003060',
        '8AZ' => 'E02003060',
        '8BA' => 'E02003060',
        '8BB' => 'E02003060',
        '8BD' => 'E02003060',
        '8BE' => 'E02003060',
        '8BG' => 'E02003060',
        '8BH' => 'E02003060',
        '8BL' => 'E02003060',
        '8BN' => 'E02003060',
        '8BP' => 'E02003060',
        '8BQ' => 'E02003060',
        '8BS' => 'E02003060',
        '8BT' => 'E02003060',
        '8BU' => 'E02003060',
        '8BW' => 'E02003060',
        '8BX' => 'E02003060',
        '8BY' => 'E02003060',
        '8BZ' => 'E02003060',
        '8DA' => 'E02003060',
        '8DB' => 'E02003060',
        '8DD' => 'E02003060',
        '8DE' => 'E02003060',
        '8DF' => 'E02003060',
        '8DG' => 'E02003060',
        '8DH' => 'E02003060',
        '8DJ' => 'E02003060',
        '8DL' => 'E02003060',
        '8DN' => 'E02003060',
        '8DP' => 'E02003060',
        '8DQ' => 'E02003060',
        '8DR' => 'E02003060',
        '8DS' => 'E02003060',
        '8DT' => 'E02003060',
        '8DU' => 'E02003060',
        '8DW' => 'E02003060',
        '8DX' => 'E02003060',
        '8DY' => 'E02003060',
        '8DZ' => 'E02003060',
        '8ED' => 'E02003060',
        '8EH' => 'E02003060',
        '8EJ' => 'E02003060',
        '8EL' => 'E02003060',
        '8EN' => 'E02003060',
        '8EP' => 'E02003060',
        '8EQ' => 'E02003060',
        '8ER' => 'E02003060',
        '8ES' => 'E02003060',
        '8ET' => 'E02003060',
        '8EU' => 'E02003060',
        '8EW' => 'E02003060',
        '8EX' => 'E02003060',
        '8EY' => 'E02003060',
        '8EZ' => 'E02003060',
        '8HA' => 'E02003060',
        '8HB' => 'E02003060',
        '8HD' => 'E02003060',
        '8HE' => 'E02003060',
        '8HR' => 'E02003060',
        '8HS' => 'E02003060',
        '8HT' => 'E02003060',
        '8HU' => 'E02003060',
        '8HW' => 'E02003060',
        '8HX' => 'E02003060',
        '8HY' => 'E02003060',
        '8HZ' => 'E02003060',
        '8JA' => 'E02003060',
        '8JB' => 'E02003060',
        '8JD' => 'E02003060',
        '8JE' => 'E02003060',
        '8JF' => 'E02003060',
        '8JG' => 'E02003060',
        '8JH' => 'E02003060',
        '8JJ' => 'E02003060',
        '8JL' => 'E02003060',
        '8JN' => 'E02003060',
        '8JP' => 'E02003060',
        '8JQ' => 'E02003060',
        '8JR' => 'E02003060',
        '8JS' => 'E02003060',
        '8JT' => 'E02003060',
        '8JU' => 'E02003060',
        '8JW' => 'E02003060',
        '8JX' => 'E02003060',
        '8JY' => 'E02003060',
        '8JZ' => 'E02003060',
        '8LA' => 'E02003060',
        '8LB' => 'E02003060',
        '8LD' => 'E02003060',
        '8LE' => 'E02003060',
        '8LF' => 'E02003060',
        '8LG' => 'E02003060',
        '8LH' => 'E02003060',
        '8LJ' => 'E02003060',
        '8LN' => 'E02003060',
        '8LP' => 'E02003060',
        '8LQ' => 'E02003060',
        '8LR' => 'E02003060',
        '8LS' => 'E02003060',
        '8LT' => 'E02003060',
        '8LU' => 'E02003060',
        '8LW' => 'E02003060',
        '8LX' => 'E02003060',
        '8LY' => 'E02003060',
        '8LZ' => 'E02003060',
        '8NA' => 'E02003060',
        '8NB' => 'E02003060',
        '8ND' => 'E02003060',
        '8NE' => 'E02002985',
        '8NF' => 'E02003060',
        '8NG' => 'E02003060',
        '8NH' => 'E02003060',
        '8NJ' => 'E02003060',
        '8NL' => 'E02003060',
        '8NN' => 'E02003060',
        '8NP' => 'E02003060',
        '8NQ' => 'E02003060',
        '8NR' => 'E02003060',
        '8NW' => 'E02003060',
        '8PG' => 'E02003060',
        '8PH' => 'E02003060',
        '8PL' => 'E02003060',
        '8PN' => 'E02003060',
        '8PP' => 'E02003060',
        '8PQ' => 'E02003060',
        '8PR' => 'E02003060',
        '8PS' => 'E02003060',
        '8PT' => 'E02003060',
        '8PU' => 'E02003060',
        '8PW' => 'E02003060',
        '8PX' => 'E02003060',
        '8PY' => 'E02003060',
        '8PZ' => 'E02003060',
        '8QA' => 'E02003060',
        '8QB' => 'E02003060',
        '8QD' => 'E02003060',
        '8QE' => 'E02003060',
        '8QF' => 'E02003060',
        '8QG' => 'E02003060',
        '8QH' => 'E02003060',
        '8QJ' => 'E02003060',
        '8QL' => 'E02003060',
        '8QN' => 'E02003060',
        '8QP' => 'E02003060',
        '8QQ' => 'E02003060',
        '8QR' => 'E02003060',
        '8QS' => 'E02003060',
        '8QW' => 'E02003060',
        '8SJ' => 'E02003060',
        '8SL' => 'E02003060',
        '8SN' => 'E02003060',
        '8SP' => 'E02003060',
        '8SR' => 'E02003060',
        '8SS' => 'E02003060',
        '8ST' => 'E02003060',
        '8SU' => 'E02003060',
        '8SW' => 'E02003060',
        '8SX' => 'E02003060',
        '8SY' => 'E02003060',
        '8SZ' => 'E02003060',
        '8TA' => 'E02003060',
        '8TB' => 'E02003060',
        '8TD' => 'E02003060',
        '8TE' => 'E02003060',
        '8TF' => 'E02003060',
        '8TG' => 'E02003060',
        '8TH' => 'E02003004',
        '8TJ' => 'E02003060',
        '8TL' => 'E02003060',
        '8TN' => 'E02003060',
        '8TP' => 'E02003060',
        '8TQ' => 'E02003060',
        '8TR' => 'E02003060',
        '8TS' => 'E02003060',
        '8TT' => 'E02003060',
        '8TU' => 'E02003060',
        '8TW' => 'E02003060',
        '9AA' => 'E02003053',
        '9AB' => 'E02003053',
        '9AD' => 'E02003053',
        '9AE' => 'E02003053',
        '9AF' => 'E02003053',
        '9AG' => 'E02003053',
        '9AH' => 'E02003053',
        '9AJ' => 'E02003058',
        '9AL' => 'E02003058',
        '9AN' => 'E02003060',
        '9AP' => 'E02003058',
        '9AQ' => 'E02003053',
        '9AR' => 'E02003058',
        '9AS' => 'E02003058',
        '9AT' => 'E02003058',
        '9AU' => 'E02003058',
        '9AW' => 'E02003058',
        '9AX' => 'E02003058',
        '9AY' => 'E02003058',
        '9AZ' => 'E02003058',
        '9BA' => 'E02003058',
        '9BB' => 'E02003060',
        '9BD' => 'E02003060',
        '9BE' => 'E02003058',
        '9BF' => 'E02003058',
        '9BG' => 'E02003058',
        '9BH' => 'E02003060',
        '9BJ' => 'E02003058',
        '9BL' => 'E02003060',
        '9BN' => 'E02003058',
        '9BP' => 'E02003058',
        '9BQ' => 'E02003060',
        '9BS' => 'E02003058',
        '9BT' => 'E02003058',
        '9BU' => 'E02003058',
        '9BW' => 'E02003058',
        '9BX' => 'E02003058',
        '9BY' => 'E02003058',
        '9BZ' => 'E02003058',
        '9DA' => 'E02003060',
        '9DB' => 'E02003058',
        '9DD' => 'E02003058',
        '9DE' => 'E02003058',
        '9DF' => 'E02003058',
        '9DG' => 'E02003058',
        '9DH' => 'E02003058',
        '9DJ' => 'E02003058',
        '9DL' => 'E02003058',
        '9DN' => 'E02003058',
        '9DP' => 'E02003058',
        '9DQ' => 'E02003058',
        '9DR' => 'E02003058',
        '9DW' => 'E02003058',
        '9EA' => 'E02003060',
        '9EB' => 'E02003060',
        '9ED' => 'E02003060',
        '9EE' => 'E02003060',
        '9EF' => 'E02003060',
        '9EG' => 'E02003060',
        '9EP' => 'E02003060',
        '9ER' => 'E02003060',
        '9ES' => 'E02003060',
        '9ET' => 'E02003060',
        '9EU' => 'E02003060',
        '9EW' => 'E02003058',
        '9EX' => 'E02003060',
        '9EY' => 'E02003060',
        '9EZ' => 'E02003060',
        '9FQ' => 'E02003058',
        '9HA' => 'E02003060',
        '9HB' => 'E02003060',
        '9HD' => 'E02003060',
        '9HE' => 'E02003060',
        '9HF' => 'E02003060',
        '9HG' => 'E02003060',
        '9HH' => 'E02003060',
        '9HL' => 'E02003060',
        '9HP' => 'E02003058',
        '9HQ' => 'E02003058',
        '9HR' => 'E02003060',
        '9HS' => 'E02003060',
        '9HT' => 'E02003060',
        '9HU' => 'E02003058',
        '9HX' => 'E02003060',
        '9HY' => 'E02003058',
        '9HZ' => 'E02003060',
        '9JA' => 'E02003060',
        '9JB' => 'E02003060',
        '9JD' => 'E02003060',
        '9JE' => 'E02003060',
        '9JF' => 'E02003060',
        '9JG' => 'E02003060',
        '9JH' => 'E02003060',
        '9JJ' => 'E02003060',
        '9JL' => 'E02003060',
        '9JN' => 'E02003060',
        '9JP' => 'E02003058',
        '9JQ' => 'E02003060',
        '9JR' => 'E02003058',
        '9JS' => 'E02003058',
        '9JT' => 'E02003058',
        '9JU' => 'E02003058',
        '9JW' => 'E02003060',
        '9JX' => 'E02003058',
        '9JY' => 'E02003058',
        '9JZ' => 'E02003058',
        '9LA' => 'E02003058',
        '9LB' => 'E02003058',
        '9LD' => 'E02003058',
        '9LE' => 'E02003058',
        '9LF' => 'E02003058',
        '9LG' => 'E02003058',
        '9LH' => 'E02003058',
        '9LJ' => 'E02003058',
        '9LL' => 'E02003058',
        '9LN' => 'E02003058',
        '9LP' => 'E02003058',
        '9LQ' => 'E02003058',
        '9LR' => 'E02003058',
        '9LS' => 'E02003058',
        '9LT' => 'E02003058',
        '9LU' => 'E02003063',
        '9LW' => 'E02003058',
        '9LX' => 'E02003063',
        '9LY' => 'E02003058',
        '9LZ' => 'E02003058',
        '9NA' => 'E02003058',
        '9NB' => 'E02003058',
        '9ND' => 'E02003058',
        '9NE' => 'E02003058',
        '9NF' => 'E02003058',
        '9NG' => 'E02003058',
        '9NH' => 'E02003063',
        '9NJ' => 'E02003063',
        '9NL' => 'E02003058',
        '9NN' => 'E02003058',
        '9NP' => 'E02003063',
        '9NQ' => 'E02003058',
        '9NR' => 'E02003063',
        '9NS' => 'E02003058',
        '9NT' => 'E02003058',
        '9NU' => 'E02003058',
        '9NW' => 'E02003058',
        '9NX' => 'E02003058',
        '9NY' => 'E02003063',
        '9NZ' => 'E02003058',
        '9PA' => 'E02003058',
        '9PB' => 'E02003063',
        '9PD' => 'E02003058',
        '9PE' => 'E02003058',
        '9PF' => 'E02003058',
        '9PG' => 'E02003058',
        '9PH' => 'E02003058',
        '9PJ' => 'E02003063',
        '9PL' => 'E02003058',
        '9PN' => 'E02003063',
        '9PP' => 'E02003063',
        '9PQ' => 'E02003063',
        '9PR' => 'E02003063',
        '9PS' => 'E02003063',
        '9PT' => 'E02003063',
        '9PU' => 'E02003063',
        '9PW' => 'E02003063',
        '9PX' => 'E02003063',
        '9PY' => 'E02003063',
        '9PZ' => 'E02003063',
        '9QA' => 'E02003063',
        '9QB' => 'E02003063',
        '9QD' => 'E02003063',
        '9QE' => 'E02003063',
        '9QF' => 'E02003063',
        '9QG' => 'E02003063',
        '9QH' => 'E02003058',
        '9QJ' => 'E02003063',
        '9QL' => 'E02003063',
        '9QN' => 'E02003063',
        '9QP' => 'E02003063',
        '9QQ' => 'E02003063',
        '9QR' => 'E02003063',
        '9QS' => 'E02003063',
        '9QT' => 'E02003063',
        '9QU' => 'E02003058',
        '9QW' => 'E02003063',
        '9QX' => 'E02003058',
        '9QY' => 'E02003063',
        '9QZ' => 'E02003063',
        '9RA' => 'E02003063',
        '9RB' => 'E02003063',
        '9RD' => 'E02003063',
        '9RE' => 'E02003063',
        '9RF' => 'E02003063',
        '9RG' => 'E02003063',
        '9RH' => 'E02003063',
        '9RJ' => 'E02003058',
        '9RL' => 'E02003063',
        '9RQ' => 'E02003063',
        '9RS' => 'E02003058',
        '9RT' => 'E02003058',
        '9RU' => 'E02003058',
        '9RX' => 'E02003058',
        '9RY' => 'E02003058',
        '9RZ' => 'E02003058',
        '9SA' => 'E02003058',
        '9SB' => 'E02003058',
        '9SD' => 'E02003058',
        '9SE' => 'E02003058',
        '9SF' => 'E02003058',
        '9SG' => 'E02003058',
        '9SH' => 'E02003058',
        '9SJ' => 'E02003058',
        '9SL' => 'E02003058',
        '9SN' => 'E02003058',
        '9SP' => 'E02003058',
        '9SQ' => 'E02003058',
        '9SW' => 'E02003058',
        '9TA' => 'E02003053',
        '9TB' => 'E02003058',
        '9TD' => 'E02003058',
        '9TE' => 'E02003058',
        '9TF' => 'E02003058',
        '9TG' => 'E02003058',
        '9TH' => 'E02003058',
        '9TJ' => 'E02003058',
        '9TL' => 'E02003058',
        '9TN' => 'E02003058',
        '9TP' => 'E02003058',
        '9TQ' => 'E02003058',
        '9TR' => 'E02003058',
        '9TW' => 'E02003058',
        '9TX' => 'E02003058',
        '9TY' => 'E02003058',
        '9TZ' => 'E02003058',
        '9UA' => 'E02003058',
        '9UB' => 'E02003058',
        '9UD' => 'E02003058',
        '9UE' => 'E02003058',
        '9UF' => 'E02003058',
        '9UG' => 'E02003058',
        '9UQ' => 'E02003058',
        '9YA' => 'E02003063',
        '9YB' => 'E02003063',
        '9YD' => 'E02003063',
        '9YE' => 'E02003063',
        '9YF' => 'E02003063',
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