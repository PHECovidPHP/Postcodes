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
final class SG18
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02003603',
        '0AB' => 'E02003602',
        '0AD' => 'E02003603',
        '0AE' => 'E02003602',
        '0AF' => 'E02003603',
        '0AG' => 'E02003603',
        '0AH' => 'E02003603',
        '0AJ' => 'E02003603',
        '0AL' => 'E02003603',
        '0AN' => 'E02003603',
        '0AP' => 'E02003603',
        '0AQ' => 'E02003603',
        '0AR' => 'E02003603',
        '0AS' => 'E02003603',
        '0AT' => 'E02003603',
        '0AU' => 'E02003603',
        '0AW' => 'E02003603',
        '0AX' => 'E02003603',
        '0AY' => 'E02003604',
        '0AZ' => 'E02003603',
        '0BA' => 'E02003603',
        '0BB' => 'E02003603',
        '0BD' => 'E02003603',
        '0BE' => 'E02003603',
        '0BF' => 'E02003604',
        '0BG' => 'E02003603',
        '0BH' => 'E02003603',
        '0BJ' => 'E02003603',
        '0BL' => 'E02003603',
        '0BN' => 'E02003603',
        '0BP' => 'E02003603',
        '0BQ' => 'E02003603',
        '0BS' => 'E02003603',
        '0BT' => 'E02003603',
        '0BU' => 'E02003603',
        '0BW' => 'E02003603',
        '0BX' => 'E02003603',
        '0BY' => 'E02003603',
        '0BZ' => 'E02003603',
        '0DA' => 'E02003603',
        '0DB' => 'E02003603',
        '0DD' => 'E02003603',
        '0DE' => 'E02003603',
        '0DF' => 'E02003603',
        '0DG' => 'E02003603',
        '0DH' => 'E02003603',
        '0DJ' => 'E02003603',
        '0DL' => 'E02003603',
        '0DN' => 'E02003603',
        '0DP' => 'E02003603',
        '0DQ' => 'E02003603',
        '0DR' => 'E02003603',
        '0DS' => 'E02003603',
        '0DT' => 'E02003603',
        '0DU' => 'E02003603',
        '0DW' => 'E02003603',
        '0DX' => 'E02003603',
        '0DY' => 'E02003603',
        '0DZ' => 'E02003603',
        '0EA' => 'E02003603',
        '0EB' => 'E02003603',
        '0ED' => 'E02003603',
        '0EE' => 'E02003603',
        '0EF' => 'E02003603',
        '0EG' => 'E02003603',
        '0EH' => 'E02003603',
        '0EJ' => 'E02003604',
        '0EL' => 'E02003604',
        '0EN' => 'E02003603',
        '0EP' => 'E02003601',
        '0EQ' => 'E02003603',
        '0ER' => 'E02003601',
        '0ES' => 'E02003603',
        '0ET' => 'E02003603',
        '0EU' => 'E02003603',
        '0EW' => 'E02003603',
        '0EX' => 'E02003603',
        '0EY' => 'E02003603',
        '0EZ' => 'E02003603',
        '0FA' => 'E02003603',
        '0FB' => 'E02003603',
        '0FD' => 'E02003603',
        '0FE' => 'E02003603',
        '0FF' => 'E02003603',
        '0FG' => 'E02003603',
        '0FH' => 'E02003603',
        '0FJ' => 'E02003604',
        '0FL' => 'E02003604',
        '0FN' => 'E02003604',
        '0FP' => 'E02003604',
        '0FQ' => 'E02003604',
        '0FR' => 'E02003603',
        '0FS' => 'E02003604',
        '0FU' => 'E02003603',
        '0FW' => 'E02003603',
        '0GG' => 'E02003604',
        '0GJ' => 'E02003604',
        '0GN' => 'E02003604',
        '0GX' => 'E02003603',
        '0GY' => 'E02003603',
        '0GZ' => 'E02003603',
        '0HA' => 'E02003603',
        '0HB' => 'E02003603',
        '0HD' => 'E02003603',
        '0HE' => 'E02003603',
        '0HF' => 'E02003603',
        '0HG' => 'E02003603',
        '0HH' => 'E02003603',
        '0HJ' => 'E02003603',
        '0HL' => 'E02003604',
        '0HN' => 'E02003604',
        '0HP' => 'E02003604',
        '0HQ' => 'E02003603',
        '0HR' => 'E02003603',
        '0HS' => 'E02003603',
        '0HT' => 'E02003603',
        '0HU' => 'E02003603',
        '0HW' => 'E02003603',
        '0HX' => 'E02003603',
        '0HY' => 'E02003603',
        '0HZ' => 'E02003603',
        '0JA' => 'E02003603',
        '0JB' => 'E02003603',
        '0JD' => 'E02003603',
        '0JE' => 'E02003603',
        '0JF' => 'E02003603',
        '0JG' => 'E02003603',
        '0JH' => 'E02003603',
        '0JJ' => 'E02003603',
        '0JL' => 'E02003603',
        '0JN' => 'E02003603',
        '0JP' => 'E02003603',
        '0JQ' => 'E02003603',
        '0JR' => 'E02003603',
        '0JS' => 'E02003603',
        '0JT' => 'E02003603',
        '0JU' => 'E02003603',
        '0JW' => 'E02003603',
        '0JX' => 'E02003603',
        '0JY' => 'E02003603',
        '0JZ' => 'E02003603',
        '0LA' => 'E02003603',
        '0LB' => 'E02003603',
        '0LD' => 'E02003603',
        '0LE' => 'E02003603',
        '0LF' => 'E02003603',
        '0LG' => 'E02003603',
        '0LH' => 'E02003603',
        '0LJ' => 'E02003603',
        '0LL' => 'E02003603',
        '0LN' => 'E02003603',
        '0LP' => 'E02003603',
        '0LQ' => 'E02003603',
        '0LR' => 'E02003603',
        '0LS' => 'E02003603',
        '0LT' => 'E02003603',
        '0LU' => 'E02003603',
        '0LW' => 'E02003603',
        '0LX' => 'E02003603',
        '0LY' => 'E02003603',
        '0LZ' => 'E02003603',
        '0NA' => 'E02003602',
        '0NB' => 'E02003603',
        '0ND' => 'E02003603',
        '0NE' => 'E02003604',
        '0NF' => 'E02003604',
        '0NG' => 'E02003604',
        '0NH' => 'E02003604',
        '0NJ' => 'E02003604',
        '0NL' => 'E02003604',
        '0NN' => 'E02003604',
        '0NP' => 'E02003604',
        '0NQ' => 'E02003603',
        '0NR' => 'E02003604',
        '0NS' => 'E02003604',
        '0NT' => 'E02003604',
        '0NU' => 'E02003604',
        '0NW' => 'E02003604',
        '0NX' => 'E02003604',
        '0NY' => 'E02003604',
        '0NZ' => 'E02003604',
        '0PA' => 'E02003604',
        '0PB' => 'E02003604',
        '0PD' => 'E02003604',
        '0PE' => 'E02003604',
        '0PF' => 'E02003604',
        '0PG' => 'E02003604',
        '0PH' => 'E02003604',
        '0PJ' => 'E02003604',
        '0PL' => 'E02003604',
        '0PN' => 'E02003603',
        '0PP' => 'E02003604',
        '0PQ' => 'E02003604',
        '0PR' => 'E02003603',
        '0PS' => 'E02003603',
        '0PT' => 'E02003603',
        '0PU' => 'E02003603',
        '0PW' => 'E02003604',
        '0PX' => 'E02003603',
        '0PY' => 'E02003603',
        '0PZ' => 'E02003603',
        '0QA' => 'E02003603',
        '0QB' => 'E02003603',
        '0QD' => 'E02003603',
        '0QE' => 'E02003603',
        '0QF' => 'E02003603',
        '0QG' => 'E02003603',
        '0QH' => 'E02003603',
        '0QJ' => 'E02003603',
        '0QL' => 'E02003603',
        '0QN' => 'E02003603',
        '0QQ' => 'E02003603',
        '0QR' => 'E02003603',
        '0QS' => 'E02003603',
        '0QT' => 'E02003603',
        '0QU' => 'E02003603',
        '0QW' => 'E02003603',
        '0QX' => 'E02003603',
        '0QY' => 'E02003603',
        '0QZ' => 'E02003603',
        '0RA' => 'E02003603',
        '0RB' => 'E02003603',
        '0RD' => 'E02003603',
        '0RE' => 'E02003603',
        '0RF' => 'E02003603',
        '0RG' => 'E02003603',
        '0RH' => 'E02003603',
        '0RJ' => 'E02003603',
        '0RL' => 'E02003603',
        '0RN' => 'E02003603',
        '0RP' => 'E02003603',
        '0RQ' => 'E02003603',
        '0RR' => 'E02003603',
        '0RS' => 'E02003603',
        '0RT' => 'E02003603',
        '0RU' => 'E02003603',
        '0RW' => 'E02003603',
        '0SA' => 'E02003603',
        '0SB' => 'E02003603',
        '0SD' => 'E02003603',
        '0SH' => 'E02003603',
        '0SJ' => 'E02003603',
        '0SL' => 'E02003603',
        '0SP' => 'E02003603',
        '0SR' => 'E02003603',
        '0WA' => 'E02003603',
        '0WB' => 'E02003603',
        '0WD' => 'E02003603',
        '0WH' => 'E02003603',
        '0WJ' => 'E02003603',
        '0WQ' => 'E02003603',
        '0WR' => 'E02003603',
        '0WS' => 'E02003603',
        '0WT' => 'E02003603',
        '0WU' => 'E02003603',
        '0WW' => 'E02003603',
        '0WX' => 'E02003603',
        '0WY' => 'E02003603',
        '0WZ' => 'E02003603',
        '0XJ' => 'E02003603',
        '0XN' => 'E02003603',
        '0YY' => 'E02003603',
        '1AD' => 'E02003603',
        '1AE' => 'E02003603',
        '1AF' => 'E02003603',
        '1AG' => 'E02003603',
        '1AH' => 'E02003603',
        '1AJ' => 'E02003603',
        '1AL' => 'E02003603',
        '1AN' => 'E02003603',
        '1AP' => 'E02003603',
        '1AQ' => 'E02003603',
        '1AR' => 'E02003603',
        '1AS' => 'E02003603',
        '1AT' => 'E02003603',
        '1AU' => 'E02003603',
        '1AW' => 'E02003603',
        '1AX' => 'E02003603',
        '1AY' => 'E02003603',
        '1AZ' => 'E02003603',
        '1BA' => 'E02003603',
        '1BB' => 'E02003603',
        '1BD' => 'E02003603',
        '1BE' => 'E02003603',
        '1BF' => 'E02003603',
        '8AA' => 'E02003603',
        '8AB' => 'E02003603',
        '8AD' => 'E02003603',
        '8AE' => 'E02003601',
        '8AF' => 'E02003603',
        '8AG' => 'E02003604',
        '8AH' => 'E02003603',
        '8AJ' => 'E02003603',
        '8AL' => 'E02003603',
        '8AN' => 'E02003603',
        '8AP' => 'E02003603',
        '8AQ' => 'E02003603',
        '8AR' => 'E02003603',
        '8AS' => 'E02003603',
        '8AT' => 'E02003604',
        '8AU' => 'E02003603',
        '8AW' => 'E02003603',
        '8AX' => 'E02003603',
        '8AY' => 'E02003603',
        '8AZ' => 'E02003603',
        '8BA' => 'E02003603',
        '8BB' => 'E02003603',
        '8BD' => 'E02003603',
        '8BE' => 'E02003603',
        '8BF' => 'E02003603',
        '8BG' => 'E02003603',
        '8BH' => 'E02003603',
        '8BJ' => 'E02003603',
        '8BL' => 'E02003603',
        '8BN' => 'E02003603',
        '8BP' => 'E02003603',
        '8BQ' => 'E02003603',
        '8BS' => 'E02003603',
        '8BT' => 'E02003603',
        '8BU' => 'E02003603',
        '8BW' => 'E02003603',
        '8BX' => 'E02003603',
        '8BY' => 'E02003603',
        '8BZ' => 'E02003603',
        '8DA' => 'E02003603',
        '8DB' => 'E02003603',
        '8DD' => 'E02003603',
        '8DE' => 'E02003603',
        '8DF' => 'E02003603',
        '8DG' => 'E02003604',
        '8DH' => 'E02003603',
        '8DJ' => 'E02003603',
        '8DL' => 'E02003603',
        '8DN' => 'E02003604',
        '8DP' => 'E02003603',
        '8DQ' => 'E02003603',
        '8DR' => 'E02003603',
        '8DS' => 'E02003603',
        '8DT' => 'E02003603',
        '8DU' => 'E02003603',
        '8DW' => 'E02003603',
        '8DX' => 'E02003603',
        '8DY' => 'E02003603',
        '8DZ' => 'E02003603',
        '8EA' => 'E02003603',
        '8EB' => 'E02003604',
        '8ED' => 'E02003603',
        '8EE' => 'E02003603',
        '8EF' => 'E02003604',
        '8EG' => 'E02003604',
        '8EH' => 'E02003604',
        '8EJ' => 'E02003604',
        '8EL' => 'E02003604',
        '8EN' => 'E02003604',
        '8EP' => 'E02003603',
        '8EQ' => 'E02003603',
        '8ER' => 'E02003603',
        '8ES' => 'E02003604',
        '8ET' => 'E02003603',
        '8EU' => 'E02003603',
        '8EW' => 'E02003604',
        '8EX' => 'E02003604',
        '8EY' => 'E02003604',
        '8EZ' => 'E02003604',
        '8FA' => 'E02003604',
        '8FB' => 'E02003604',
        '8FD' => 'E02003604',
        '8FE' => 'E02003604',
        '8FF' => 'E02003604',
        '8FG' => 'E02003604',
        '8FH' => 'E02003604',
        '8FJ' => 'E02003604',
        '8FL' => 'E02003604',
        '8FN' => 'E02003603',
        '8FP' => 'E02003603',
        '8FQ' => 'E02003603',
        '8FR' => 'E02003603',
        '8FS' => 'E02003603',
        '8FT' => 'E02003604',
        '8FU' => 'E02003604',
        '8FW' => 'E02003604',
        '8FX' => 'E02003604',
        '8FY' => 'E02003604',
        '8FZ' => 'E02003604',
        '8GA' => 'E02003604',
        '8GB' => 'E02003604',
        '8GD' => 'E02003604',
        '8GE' => 'E02003604',
        '8GF' => 'E02003604',
        '8GG' => 'E02003604',
        '8GH' => 'E02003604',
        '8GJ' => 'E02003604',
        '8GL' => 'E02003604',
        '8GN' => 'E02003604',
        '8GP' => 'E02003604',
        '8GQ' => 'E02003604',
        '8GR' => 'E02003604',
        '8GS' => 'E02003604',
        '8GT' => 'E02003604',
        '8GU' => 'E02003604',
        '8GW' => 'E02003604',
        '8GX' => 'E02003604',
        '8GY' => 'E02003604',
        '8GZ' => 'E02003604',
        '8HA' => 'E02003604',
        '8HB' => 'E02003603',
        '8HD' => 'E02003603',
        '8HE' => 'E02003603',
        '8HF' => 'E02003603',
        '8HG' => 'E02003603',
        '8HH' => 'E02003603',
        '8HJ' => 'E02003603',
        '8HL' => 'E02003604',
        '8HN' => 'E02003603',
        '8HP' => 'E02003603',
        '8HQ' => 'E02003603',
        '8HR' => 'E02003603',
        '8HS' => 'E02003604',
        '8HT' => 'E02003604',
        '8HU' => 'E02003603',
        '8HW' => 'E02003603',
        '8HX' => 'E02003603',
        '8HY' => 'E02003603',
        '8HZ' => 'E02003603',
        '8JA' => 'E02003603',
        '8JB' => 'E02003604',
        '8JD' => 'E02003603',
        '8JE' => 'E02003603',
        '8JF' => 'E02003603',
        '8JG' => 'E02003604',
        '8JH' => 'E02003603',
        '8JJ' => 'E02003604',
        '8JL' => 'E02003604',
        '8JN' => 'E02003604',
        '8JP' => 'E02003604',
        '8JQ' => 'E02003604',
        '8JR' => 'E02003604',
        '8JS' => 'E02003604',
        '8JT' => 'E02003604',
        '8JU' => 'E02003604',
        '8JW' => 'E02003604',
        '8JX' => 'E02003604',
        '8JY' => 'E02003604',
        '8JZ' => 'E02003604',
        '8LA' => 'E02003604',
        '8LB' => 'E02003603',
        '8LD' => 'E02003604',
        '8LE' => 'E02003604',
        '8LF' => 'E02003604',
        '8LG' => 'E02003603',
        '8LH' => 'E02003603',
        '8LJ' => 'E02003603',
        '8LL' => 'E02003603',
        '8LN' => 'E02003604',
        '8LP' => 'E02003603',
        '8LQ' => 'E02003604',
        '8LR' => 'E02003604',
        '8LS' => 'E02003604',
        '8LT' => 'E02003604',
        '8LU' => 'E02003604',
        '8LW' => 'E02003604',
        '8LX' => 'E02003604',
        '8LY' => 'E02003604',
        '8LZ' => 'E02003604',
        '8NA' => 'E02003604',
        '8NB' => 'E02003604',
        '8ND' => 'E02003604',
        '8NE' => 'E02003604',
        '8NF' => 'E02003604',
        '8NG' => 'E02003604',
        '8NH' => 'E02003603',
        '8NJ' => 'E02003603',
        '8NL' => 'E02003603',
        '8NN' => 'E02003604',
        '8NP' => 'E02003604',
        '8NQ' => 'E02003604',
        '8NR' => 'E02003604',
        '8NS' => 'E02003604',
        '8NT' => 'E02003604',
        '8NU' => 'E02003604',
        '8NW' => 'E02003604',
        '8NX' => 'E02003604',
        '8NY' => 'E02003604',
        '8NZ' => 'E02003604',
        '8PA' => 'E02003604',
        '8PB' => 'E02003604',
        '8PD' => 'E02003604',
        '8PE' => 'E02003604',
        '8PF' => 'E02003604',
        '8PG' => 'E02003604',
        '8PH' => 'E02003604',
        '8PJ' => 'E02003604',
        '8PL' => 'E02003604',
        '8PN' => 'E02003604',
        '8PP' => 'E02003604',
        '8PQ' => 'E02003604',
        '8PR' => 'E02003604',
        '8PS' => 'E02003604',
        '8PT' => 'E02003604',
        '8PU' => 'E02003604',
        '8PW' => 'E02003604',
        '8PX' => 'E02003604',
        '8PY' => 'E02003603',
        '8PZ' => 'E02003604',
        '8QA' => 'E02003604',
        '8QB' => 'E02003604',
        '8QD' => 'E02003603',
        '8QE' => 'E02003603',
        '8QF' => 'E02003603',
        '8QG' => 'E02003603',
        '8QH' => 'E02003604',
        '8QJ' => 'E02003604',
        '8QL' => 'E02003604',
        '8QN' => 'E02003604',
        '8QP' => 'E02003604',
        '8QQ' => 'E02003603',
        '8QR' => 'E02003604',
        '8QS' => 'E02003604',
        '8QT' => 'E02003604',
        '8QU' => 'E02003604',
        '8QW' => 'E02003603',
        '8QX' => 'E02003601',
        '8QY' => 'E02003601',
        '8QZ' => 'E02003601',
        '8RA' => 'E02003601',
        '8RB' => 'E02003601',
        '8RD' => 'E02003601',
        '8RE' => 'E02003604',
        '8RF' => 'E02003601',
        '8RG' => 'E02003601',
        '8RH' => 'E02003601',
        '8RJ' => 'E02003601',
        '8RL' => 'E02003601',
        '8RN' => 'E02003601',
        '8RP' => 'E02003601',
        '8RQ' => 'E02003601',
        '8RR' => 'E02003601',
        '8RS' => 'E02003601',
        '8RT' => 'E02003601',
        '8RU' => 'E02003601',
        '8RW' => 'E02003601',
        '8RX' => 'E02003601',
        '8RY' => 'E02003601',
        '8RZ' => 'E02003601',
        '8SA' => 'E02003601',
        '8SB' => 'E02003601',
        '8SD' => 'E02003604',
        '8SE' => 'E02003604',
        '8SF' => 'E02003601',
        '8SG' => 'E02003603',
        '8SH' => 'E02003604',
        '8SJ' => 'E02003601',
        '8SL' => 'E02003604',
        '8SN' => 'E02003604',
        '8SP' => 'E02003604',
        '8SQ' => 'E02003604',
        '8SR' => 'E02003604',
        '8SS' => 'E02003604',
        '8ST' => 'E02003604',
        '8SU' => 'E02003604',
        '8SW' => 'E02003604',
        '8SX' => 'E02003604',
        '8SY' => 'E02003603',
        '8SZ' => 'E02003604',
        '8TA' => 'E02003604',
        '8TB' => 'E02003604',
        '8TD' => 'E02003601',
        '8TE' => 'E02003603',
        '8TF' => 'E02003603',
        '8TG' => 'E02003601',
        '8TH' => 'E02003604',
        '8TJ' => 'E02003603',
        '8TL' => 'E02003601',
        '8TN' => 'E02003604',
        '8TP' => 'E02003604',
        '8TQ' => 'E02003604',
        '8TR' => 'E02003604',
        '8TS' => 'E02003604',
        '8TT' => 'E02003604',
        '8TU' => 'E02003604',
        '8TW' => 'E02003604',
        '8TX' => 'E02003604',
        '8TY' => 'E02003604',
        '8TZ' => 'E02003604',
        '8UA' => 'E02003604',
        '8UB' => 'E02003604',
        '8UD' => 'E02003604',
        '8UE' => 'E02003604',
        '8UF' => 'E02003604',
        '8UG' => 'E02003604',
        '8UH' => 'E02003604',
        '8UJ' => 'E02003604',
        '8UL' => 'E02003604',
        '8UN' => 'E02003604',
        '8UP' => 'E02003601',
        '8UQ' => 'E02003604',
        '8UR' => 'E02003604',
        '8US' => 'E02003604',
        '8UT' => 'E02003604',
        '8UU' => 'E02003603',
        '8UW' => 'E02003604',
        '8UX' => 'E02003604',
        '8UY' => 'E02003604',
        '8UZ' => 'E02003603',
        '8WA' => 'E02003604',
        '8WB' => 'E02003604',
        '8WD' => 'E02003604',
        '8WE' => 'E02003603',
        '8WF' => 'E02003604',
        '8WG' => 'E02003603',
        '8WH' => 'E02003604',
        '8WJ' => 'E02003604',
        '8WL' => 'E02003604',
        '8WN' => 'E02003604',
        '8WP' => 'E02003603',
        '8WQ' => 'E02003603',
        '8WR' => 'E02003603',
        '8WS' => 'E02003603',
        '8WT' => 'E02003603',
        '8WU' => 'E02003603',
        '8WW' => 'E02003603',
        '8WX' => 'E02003603',
        '8WY' => 'E02003603',
        '8WZ' => 'E02003603',
        '8XA' => 'E02003603',
        '8XB' => 'E02003604',
        '8XD' => 'E02003604',
        '8XE' => 'E02003603',
        '8XF' => 'E02003603',
        '8XG' => 'E02003603',
        '8XH' => 'E02003603',
        '8XJ' => 'E02003603',
        '8XL' => 'E02003604',
        '8XN' => 'E02003603',
        '8XP' => 'E02003604',
        '8XQ' => 'E02003604',
        '8XR' => 'E02003604',
        '8XS' => 'E02003604',
        '8XT' => 'E02003601',
        '8XU' => 'E02003603',
        '8XW' => 'E02003603',
        '8XY' => 'E02003604',
        '8XZ' => 'E02003603',
        '8YD' => 'E02003601',
        '8YL' => 'E02003604',
        '8ZJ' => 'E02003603',
        '8ZN' => 'E02003603',
        '8ZQ' => 'E02003603',
        '8ZU' => 'E02003603',
        '8ZW' => 'E02003603',
        '8ZX' => 'E02003603',
        '9AA' => 'E02003602',
        '9AB' => 'E02003602',
        '9AD' => 'E02003602',
        '9AE' => 'E02003602',
        '9AF' => 'E02003602',
        '9AG' => 'E02003602',
        '9AH' => 'E02003602',
        '9AJ' => 'E02003602',
        '9AL' => 'E02003602',
        '9AN' => 'E02003602',
        '9AP' => 'E02003602',
        '9AQ' => 'E02003602',
        '9AR' => 'E02003602',
        '9AS' => 'E02003602',
        '9AT' => 'E02003602',
        '9AU' => 'E02003602',
        '9AW' => 'E02003602',
        '9AX' => 'E02003602',
        '9AY' => 'E02003602',
        '9AZ' => 'E02003603',
        '9BA' => 'E02003602',
        '9BB' => 'E02003602',
        '9BD' => 'E02003602',
        '9BE' => 'E02003602',
        '9BF' => 'E02003608',
        '9BG' => 'E02003602',
        '9BH' => 'E02003602',
        '9BJ' => 'E02003602',
        '9BL' => 'E02003602',
        '9BN' => 'E02003602',
        '9BP' => 'E02003602',
        '9BQ' => 'E02003602',
        '9BS' => 'E02003602',
        '9BT' => 'E02003602',
        '9BU' => 'E02003602',
        '9BW' => 'E02003603',
        '9BX' => 'E02003602',
        '9BY' => 'E02003603',
        '9BZ' => 'E02003608',
        '9DA' => 'E02003602',
        '9DB' => 'E02003602',
        '9DD' => 'E02003602',
        '9DE' => 'E02003602',
        '9DF' => 'E02003602',
        '9DG' => 'E02003602',
        '9DH' => 'E02003602',
        '9DJ' => 'E02003602',
        '9DL' => 'E02003602',
        '9DN' => 'E02003602',
        '9DP' => 'E02003602',
        '9DQ' => 'E02003602',
        '9DR' => 'E02003602',
        '9DS' => 'E02003602',
        '9DT' => 'E02003602',
        '9DU' => 'E02003602',
        '9DW' => 'E02003602',
        '9DX' => 'E02003602',
        '9DY' => 'E02003602',
        '9DZ' => 'E02003608',
        '9EA' => 'E02003602',
        '9EB' => 'E02003602',
        '9ED' => 'E02003602',
        '9EE' => 'E02003602',
        '9EF' => 'E02003602',
        '9EG' => 'E02003602',
        '9EH' => 'E02003602',
        '9EJ' => 'E02003602',
        '9EL' => 'E02003602',
        '9EN' => 'E02003602',
        '9EP' => 'E02003602',
        '9EQ' => 'E02003603',
        '9ER' => 'E02003602',
        '9ES' => 'E02003602',
        '9ET' => 'E02003602',
        '9EU' => 'E02003602',
        '9EW' => 'E02003602',
        '9EX' => 'E02003602',
        '9EY' => 'E02003602',
        '9EZ' => 'E02003602',
        '9FA' => 'E02003608',
        '9FB' => 'E02003602',
        '9FD' => 'E02003602',
        '9FE' => 'E02003602',
        '9FF' => 'E02003608',
        '9FG' => 'E02003608',
        '9FH' => 'E02003608',
        '9FJ' => 'E02003608',
        '9FL' => 'E02003608',
        '9FN' => 'E02003602',
        '9FP' => 'E02003608',
        '9FQ' => 'E02003608',
        '9FR' => 'E02003608',
        '9FS' => 'E02003608',
        '9FT' => 'E02003602',
        '9FU' => 'E02003608',
        '9FW' => 'E02003608',
        '9FX' => 'E02003602',
        '9GB' => 'E02003602',
        '9HA' => 'E02003602',
        '9HB' => 'E02003602',
        '9HD' => 'E02003602',
        '9HE' => 'E02003602',
        '9HF' => 'E02003602',
        '9HG' => 'E02003602',
        '9HH' => 'E02003602',
        '9HJ' => 'E02003602',
        '9HL' => 'E02003602',
        '9HN' => 'E02003603',
        '9HP' => 'E02003602',
        '9HQ' => 'E02003602',
        '9HT' => 'E02003602',
        '9HU' => 'E02003602',
        '9HX' => 'E02003602',
        '9HZ' => 'E02003602',
        '9JA' => 'E02003602',
        '9JB' => 'E02003602',
        '9JD' => 'E02003602',
        '9JE' => 'E02003602',
        '9JF' => 'E02003602',
        '9JG' => 'E02003602',
        '9JH' => 'E02003602',
        '9JJ' => 'E02003602',
        '9JL' => 'E02003602',
        '9JN' => 'E02003602',
        '9JP' => 'E02003602',
        '9JQ' => 'E02003602',
        '9JS' => 'E02003608',
        '9JT' => 'E02003603',
        '9JU' => 'E02003603',
        '9JW' => 'E02003602',
        '9JX' => 'E02003603',
        '9JY' => 'E02003603',
        '9JZ' => 'E02003603',
        '9LA' => 'E02003602',
        '9LB' => 'E02003602',
        '9LD' => 'E02003602',
        '9LH' => 'E02003602',
        '9LJ' => 'E02003602',
        '9LL' => 'E02003602',
        '9LN' => 'E02003602',
        '9LP' => 'E02003602',
        '9LR' => 'E02003602',
        '9LS' => 'E02003602',
        '9LT' => 'E02003602',
        '9LU' => 'E02003602',
        '9LW' => 'E02003602',
        '9LX' => 'E02003602',
        '9LZ' => 'E02003608',
        '9NA' => 'E02003602',
        '9NB' => 'E02003602',
        '9ND' => 'E02003602',
        '9NE' => 'E02003608',
        '9NG' => 'E02003608',
        '9NH' => 'E02003602',
        '9NJ' => 'E02003602',
        '9NL' => 'E02003602',
        '9NN' => 'E02003602',
        '9NP' => 'E02003602',
        '9NQ' => 'E02003608',
        '9NR' => 'E02003602',
        '9NS' => 'E02003608',
        '9NT' => 'E02003603',
        '9NU' => 'E02003608',
        '9NW' => 'E02003602',
        '9NX' => 'E02003608',
        '9NY' => 'E02003608',
        '9NZ' => 'E02003608',
        '9PA' => 'E02003608',
        '9PB' => 'E02003608',
        '9PD' => 'E02003608',
        '9PE' => 'E02003608',
        '9PF' => 'E02003608',
        '9PG' => 'E02003608',
        '9PH' => 'E02003608',
        '9PJ' => 'E02003608',
        '9PL' => 'E02003608',
        '9PN' => 'E02003608',
        '9PP' => 'E02003608',
        '9PQ' => 'E02003608',
        '9PR' => 'E02003608',
        '9PS' => 'E02003608',
        '9PT' => 'E02003608',
        '9PU' => 'E02003608',
        '9PW' => 'E02003608',
        '9PX' => 'E02003608',
        '9PY' => 'E02003608',
        '9QA' => 'E02003608',
        '9QB' => 'E02003608',
        '9QD' => 'E02003608',
        '9QE' => 'E02003608',
        '9QF' => 'E02003608',
        '9QG' => 'E02003608',
        '9QH' => 'E02003608',
        '9QJ' => 'E02003608',
        '9QL' => 'E02003608',
        '9QN' => 'E02003608',
        '9QP' => 'E02003608',
        '9QQ' => 'E02003608',
        '9QR' => 'E02003608',
        '9QS' => 'E02003608',
        '9QT' => 'E02003608',
        '9QU' => 'E02003608',
        '9QW' => 'E02003608',
        '9QX' => 'E02003608',
        '9QY' => 'E02003608',
        '9QZ' => 'E02003608',
        '9RA' => 'E02003608',
        '9RB' => 'E02003603',
        '9RD' => 'E02003602',
        '9RE' => 'E02003608',
        '9RJ' => 'E02003602',
        '9RL' => 'E02003608',
        '9RN' => 'E02003603',
        '9RP' => 'E02003608',
        '9RQ' => 'E02003603',
        '9RR' => 'E02003608',
        '9RS' => 'E02003608',
        '9RT' => 'E02003608',
        '9RU' => 'E02003608',
        '9RW' => 'E02003608',
        '9RX' => 'E02003608',
        '9RY' => 'E02003608',
        '9RZ' => 'E02003608',
        '9SA' => 'E02003608',
        '9SB' => 'E02003608',
        '9SD' => 'E02003608',
        '9SE' => 'E02003608',
        '9SF' => 'E02003608',
        '9SG' => 'E02003608',
        '9SH' => 'E02003608',
        '9SJ' => 'E02003608',
        '9SL' => 'E02003608',
        '9SN' => 'E02003604',
        '9SQ' => 'E02003608',
        '9SR' => 'E02003604',
        '9SS' => 'E02003604',
        '9ST' => 'E02003604',
        '9SU' => 'E02003604',
        '9SX' => 'E02003604',
        '9SY' => 'E02003604',
        '9SZ' => 'E02003604',
        '9TA' => 'E02003612',
        '9TB' => 'E02003604',
        '9TD' => 'E02003604',
        '9TE' => 'E02003604',
        '9TH' => 'E02003604',
        '9TJ' => 'E02003601',
        '9TL' => 'E02003608',
        '9TR' => 'E02003608',
        '9TS' => 'E02003603',
        '9TT' => 'E02003602',
        '9TU' => 'E02003612',
        '9TX' => 'E02003602',
        '9UA' => 'E02003608',
        '9UB' => 'E02003608',
        '9UD' => 'E02003602',
        '9UH' => 'E02003603',
        '9UJ' => 'E02003608',
        '9UL' => 'E02003602',
        '9UN' => 'E02003603',
        '9UP' => 'E02003608',
        '9UR' => 'E02003608',
        '9US' => 'E02003603',
        '9UT' => 'E02003602',
        '9UU' => 'E02003603',
        '9UW' => 'E02003602',
        '9UX' => 'E02003603',
        '9UY' => 'E02003603',
        '9UZ' => 'E02003603',
        '9WA' => 'E02003603',
        '9WB' => 'E02003608',
        '9WD' => 'E02003603',
        '9WF' => 'E02003608',
        '9WG' => 'E02003603',
        '9WH' => 'E02003608',
        '9WJ' => 'E02003603',
        '9WL' => 'E02003603',
        '9WN' => 'E02003603',
        '9WP' => 'E02003603',
        '9WQ' => 'E02003603',
        '9WR' => 'E02003603',
        '9WS' => 'E02003603',
        '9WT' => 'E02003608',
        '9WU' => 'E02003603',
        '9WW' => 'E02003603',
        '9WX' => 'E02003608',
        '9WY' => 'E02003603',
        '9WZ' => 'E02003608',
        '9XA' => 'E02003603',
        '9XB' => 'E02003603',
        '9XD' => 'E02003608',
        '9XE' => 'E02003603',
        '9XF' => 'E02003608',
        '9XJ' => 'E02003603',
        '9XN' => 'E02003603',
        '9XQ' => 'E02003603',
        '9XR' => 'E02003603',
        '9XY' => 'E02003608',
        '9XZ' => 'E02003603',
        '9YT' => 'E02003603',
        '9YU' => 'E02003603',
        '9YZ' => 'E02003608',
        '9ZN' => 'E02003603',
        '9ZQ' => 'E02003603',
        '9ZT' => 'E02003603',
        '9ZX' => 'E02003603',
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
