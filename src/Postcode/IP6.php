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
final class IP6
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02006272',
        '0AB' => 'E02006272',
        '0AD' => 'E02006272',
        '0AE' => 'E02006272',
        '0AF' => 'E02006272',
        '0AG' => 'E02006272',
        '0AH' => 'E02006272',
        '0AJ' => 'E02006272',
        '0AL' => 'E02006272',
        '0AN' => 'E02006272',
        '0AP' => 'E02006272',
        '0AQ' => 'E02006272',
        '0AR' => 'E02006272',
        '0AS' => 'E02006272',
        '0AT' => 'E02006272',
        '0AU' => 'E02006272',
        '0AW' => 'E02006272',
        '0AX' => 'E02006272',
        '0AY' => 'E02006272',
        '0AZ' => 'E02006272',
        '0BA' => 'E02006272',
        '0BB' => 'E02006272',
        '0BD' => 'E02006272',
        '0BE' => 'E02006272',
        '0BF' => 'E02006272',
        '0BG' => 'E02006272',
        '0BH' => 'E02006272',
        '0BJ' => 'E02006272',
        '0BL' => 'E02006272',
        '0BN' => 'E02006272',
        '0BP' => 'E02006272',
        '0BQ' => 'E02006272',
        '0BS' => 'E02006272',
        '0BT' => 'E02006272',
        '0BU' => 'E02006272',
        '0BW' => 'E02006272',
        '0BX' => 'E02006272',
        '0BY' => 'E02006272',
        '0BZ' => 'E02006272',
        '0DA' => 'E02006272',
        '0DB' => 'E02006272',
        '0DD' => 'E02006272',
        '0DE' => 'E02006272',
        '0DF' => 'E02006272',
        '0DG' => 'E02006272',
        '0DH' => 'E02006272',
        '0DJ' => 'E02006272',
        '0DL' => 'E02006272',
        '0DN' => 'E02006272',
        '0DP' => 'E02006272',
        '0DQ' => 'E02006272',
        '0DR' => 'E02006272',
        '0DS' => 'E02006272',
        '0DT' => 'E02006272',
        '0DU' => 'E02006272',
        '0DW' => 'E02006272',
        '0DX' => 'E02006272',
        '0DY' => 'E02006272',
        '0DZ' => 'E02006272',
        '0EA' => 'E02006272',
        '0EB' => 'E02006272',
        '0ED' => 'E02006272',
        '0EE' => 'E02006272',
        '0EF' => 'E02006272',
        '0EG' => 'E02006272',
        '0EH' => 'E02006272',
        '0EJ' => 'E02006272',
        '0EL' => 'E02006272',
        '0EN' => 'E02006272',
        '0EP' => 'E02006272',
        '0EQ' => 'E02006272',
        '0ER' => 'E02006272',
        '0ES' => 'E02006272',
        '0ET' => 'E02006272',
        '0EU' => 'E02006272',
        '0EW' => 'E02006251',
        '0EX' => 'E02006272',
        '0EY' => 'E02006272',
        '0EZ' => 'E02006272',
        '0FA' => 'E02006271',
        '0FB' => 'E02006271',
        '0FD' => 'E02006271',
        '0FE' => 'E02006271',
        '0FF' => 'E02006271',
        '0FG' => 'E02006271',
        '0FH' => 'E02006271',
        '0FJ' => 'E02006271',
        '0GA' => 'E02006272',
        '0GB' => 'E02006272',
        '0GD' => 'E02006272',
        '0GE' => 'E02006271',
        '0GF' => 'E02006271',
        '0GG' => 'E02006271',
        '0GH' => 'E02006271',
        '0GJ' => 'E02006271',
        '0GL' => 'E02006271',
        '0GN' => 'E02006271',
        '0GP' => 'E02006271',
        '0GQ' => 'E02006271',
        '0GS' => 'E02006271',
        '0GT' => 'E02006271',
        '0HA' => 'E02006272',
        '0HD' => 'E02006272',
        '0HE' => 'E02006272',
        '0HF' => 'E02006272',
        '0HG' => 'E02006272',
        '0HH' => 'E02006272',
        '0HJ' => 'E02006272',
        '0HL' => 'E02006272',
        '0HN' => 'E02006251',
        '0HP' => 'E02006272',
        '0HQ' => 'E02006271',
        '0HR' => 'E02006271',
        '0HS' => 'E02006272',
        '0HT' => 'E02006272',
        '0HU' => 'E02006271',
        '0HW' => 'E02006271',
        '0HX' => 'E02006271',
        '0HY' => 'E02006272',
        '0HZ' => 'E02006272',
        '0JA' => 'E02006271',
        '0JB' => 'E02006271',
        '0JD' => 'E02006271',
        '0JE' => 'E02006271',
        '0JF' => 'E02006271',
        '0JG' => 'E02006271',
        '0JH' => 'E02006271',
        '0JJ' => 'E02006271',
        '0JL' => 'E02006271',
        '0JN' => 'E02006271',
        '0JP' => 'E02006271',
        '0JQ' => 'E02006271',
        '0JR' => 'E02006271',
        '0JS' => 'E02006271',
        '0JT' => 'E02006271',
        '0JU' => 'E02006271',
        '0JW' => 'E02006271',
        '0JX' => 'E02006271',
        '0JY' => 'E02006271',
        '0JZ' => 'E02006271',
        '0LA' => 'E02006272',
        '0LB' => 'E02006271',
        '0LD' => 'E02006272',
        '0LE' => 'E02006271',
        '0LF' => 'E02006271',
        '0LG' => 'E02006271',
        '0LH' => 'E02006271',
        '0LJ' => 'E02006271',
        '0LL' => 'E02006271',
        '0LN' => 'E02006271',
        '0LP' => 'E02006271',
        '0LQ' => 'E02006271',
        '0LR' => 'E02006271',
        '0LS' => 'E02006271',
        '0LT' => 'E02006271',
        '0LU' => 'E02006271',
        '0LW' => 'E02006271',
        '0LX' => 'E02006271',
        '0LY' => 'E02006271',
        '0LZ' => 'E02006271',
        '0NA' => 'E02006271',
        '0NB' => 'E02006271',
        '0ND' => 'E02006271',
        '0NE' => 'E02006271',
        '0NF' => 'E02006271',
        '0NG' => 'E02006271',
        '0NH' => 'E02006271',
        '0NJ' => 'E02006271',
        '0NL' => 'E02006271',
        '0NN' => 'E02006271',
        '0NP' => 'E02006271',
        '0NQ' => 'E02006271',
        '0NR' => 'E02006271',
        '0NS' => 'E02006251',
        '0NT' => 'E02006271',
        '0NU' => 'E02006272',
        '0NW' => 'E02006271',
        '0NX' => 'E02006271',
        '0NY' => 'E02006272',
        '0NZ' => 'E02006272',
        '0PA' => 'E02006272',
        '0PB' => 'E02006272',
        '0PD' => 'E02006272',
        '0PE' => 'E02006272',
        '0PF' => 'E02006272',
        '0PG' => 'E02006272',
        '0PH' => 'E02006272',
        '0PJ' => 'E02006272',
        '0PL' => 'E02006272',
        '0PN' => 'E02006272',
        '0PP' => 'E02006267',
        '0PQ' => 'E02006272',
        '0PR' => 'E02006267',
        '0PS' => 'E02006272',
        '0PT' => 'E02006272',
        '0PU' => 'E02006272',
        '0PW' => 'E02006272',
        '0PX' => 'E02006272',
        '0PY' => 'E02006272',
        '0PZ' => 'E02006272',
        '0QA' => 'E02006272',
        '0QB' => 'E02006272',
        '0QD' => 'E02006272',
        '0QE' => 'E02006272',
        '0QF' => 'E02006272',
        '0QG' => 'E02006272',
        '0QH' => 'E02006272',
        '0QJ' => 'E02006272',
        '0QL' => 'E02006272',
        '0QN' => 'E02006272',
        '0QP' => 'E02006272',
        '0QQ' => 'E02006272',
        '0QR' => 'E02006272',
        '0QS' => 'E02006272',
        '0QT' => 'E02006272',
        '0QU' => 'E02006272',
        '0QW' => 'E02006272',
        '0QX' => 'E02006272',
        '0QY' => 'E02006267',
        '0QZ' => 'E02006272',
        '0RA' => 'E02006272',
        '0RB' => 'E02006272',
        '0RD' => 'E02006272',
        '0RE' => 'E02006272',
        '0RF' => 'E02006272',
        '0RG' => 'E02006272',
        '0RH' => 'E02006272',
        '0RJ' => 'E02006272',
        '0RL' => 'E02006271',
        '0RN' => 'E02006272',
        '0RP' => 'E02006272',
        '0RQ' => 'E02006272',
        '0RR' => 'E02006272',
        '0RS' => 'E02006272',
        '0RT' => 'E02006272',
        '0RU' => 'E02006272',
        '0RW' => 'E02006272',
        '0RX' => 'E02006272',
        '0RY' => 'E02006272',
        '0RZ' => 'E02006272',
        '0SA' => 'E02006272',
        '0SB' => 'E02006272',
        '0SD' => 'E02006272',
        '0SE' => 'E02006272',
        '0SF' => 'E02006271',
        '0SG' => 'E02006272',
        '0SH' => 'E02006272',
        '0SJ' => 'E02006272',
        '0SL' => 'E02006271',
        '0SN' => 'E02006272',
        '0SP' => 'E02006272',
        '0SQ' => 'E02006272',
        '0SR' => 'E02006272',
        '0SS' => 'E02006272',
        '0ST' => 'E02006272',
        '0SU' => 'E02006267',
        '0TA' => 'E02006272',
        '0TB' => 'E02006272',
        '0TD' => 'E02006272',
        '0TE' => 'E02006272',
        '0TF' => 'E02006272',
        '0TG' => 'E02006272',
        '0TZ' => 'E02006251',
        '0WA' => 'E02006251',
        '0WB' => 'E02006251',
        '0WE' => 'E02006251',
        '0WG' => 'E02006251',
        '0WH' => 'E02006251',
        '0WP' => 'E02006272',
        '0WR' => 'E02006251',
        '0WU' => 'E02006251',
        '0WW' => 'E02006251',
        '0WX' => 'E02006251',
        '0WY' => 'E02006251',
        '0WZ' => 'E02006251',
        '0ZE' => 'E02006251',
        '0ZH' => 'E02006251',
        '0ZP' => 'E02006251',
        '0ZR' => 'E02006251',
        '8AA' => 'E02006270',
        '8AB' => 'E02006271',
        '8AD' => 'E02006271',
        '8AE' => 'E02006271',
        '8AF' => 'E02006269',
        '8AG' => 'E02006271',
        '8AH' => 'E02006271',
        '8AJ' => 'E02006271',
        '8AL' => 'E02006271',
        '8AN' => 'E02006271',
        '8AP' => 'E02006271',
        '8AQ' => 'E02006271',
        '8AR' => 'E02006271',
        '8AS' => 'E02006271',
        '8AT' => 'E02006271',
        '8AU' => 'E02006271',
        '8AW' => 'E02006271',
        '8AX' => 'E02006271',
        '8AY' => 'E02006271',
        '8AZ' => 'E02006271',
        '8BA' => 'E02006271',
        '8BB' => 'E02006271',
        '8BD' => 'E02006271',
        '8BE' => 'E02006271',
        '8BF' => 'E02006270',
        '8BG' => 'E02006271',
        '8BH' => 'E02006271',
        '8BJ' => 'E02006271',
        '8BL' => 'E02006271',
        '8BN' => 'E02006271',
        '8BP' => 'E02006271',
        '8BQ' => 'E02006271',
        '8BS' => 'E02006271',
        '8BT' => 'E02006271',
        '8BU' => 'E02006271',
        '8BW' => 'E02006271',
        '8BX' => 'E02006271',
        '8BY' => 'E02006271',
        '8BZ' => 'E02006271',
        '8DA' => 'E02006271',
        '8DB' => 'E02006270',
        '8DD' => 'E02006270',
        '8DE' => 'E02006270',
        '8DF' => 'E02006270',
        '8DG' => 'E02006271',
        '8DH' => 'E02006270',
        '8DJ' => 'E02006271',
        '8DL' => 'E02006270',
        '8DN' => 'E02006270',
        '8DP' => 'E02006270',
        '8DQ' => 'E02006271',
        '8DR' => 'E02006270',
        '8DS' => 'E02006270',
        '8DT' => 'E02006270',
        '8DU' => 'E02006270',
        '8DW' => 'E02006270',
        '8DX' => 'E02006270',
        '8DY' => 'E02006270',
        '8DZ' => 'E02006270',
        '8EA' => 'E02006270',
        '8EB' => 'E02006270',
        '8ED' => 'E02006270',
        '8EE' => 'E02006270',
        '8EF' => 'E02006270',
        '8EG' => 'E02006271',
        '8EH' => 'E02006271',
        '8EJ' => 'E02006271',
        '8EL' => 'E02006271',
        '8EN' => 'E02006271',
        '8EP' => 'E02006271',
        '8EQ' => 'E02006271',
        '8ER' => 'E02006271',
        '8ES' => 'E02006271',
        '8ET' => 'E02006271',
        '8EU' => 'E02006271',
        '8EW' => 'E02006271',
        '8EX' => 'E02006271',
        '8EY' => 'E02006271',
        '8EZ' => 'E02006271',
        '8FA' => 'E02006271',
        '8FE' => 'E02006270',
        '8FJ' => 'E02006271',
        '8FL' => 'E02006271',
        '8FN' => 'E02006271',
        '8FP' => 'E02006271',
        '8FQ' => 'E02006267',
        '8FR' => 'E02006270',
        '8GA' => 'E02006270',
        '8GB' => 'E02006270',
        '8GD' => 'E02006270',
        '8GE' => 'E02006270',
        '8GF' => 'E02006270',
        '8GG' => 'E02006270',
        '8GH' => 'E02006270',
        '8GJ' => 'E02006270',
        '8GL' => 'E02006270',
        '8GN' => 'E02006270',
        '8GP' => 'E02006270',
        '8GQ' => 'E02006270',
        '8GR' => 'E02006270',
        '8GS' => 'E02006270',
        '8GT' => 'E02006270',
        '8GU' => 'E02006270',
        '8GW' => 'E02006270',
        '8GX' => 'E02006270',
        '8GY' => 'E02006270',
        '8GZ' => 'E02006270',
        '8HA' => 'E02006271',
        '8HB' => 'E02006271',
        '8HD' => 'E02006271',
        '8HE' => 'E02006271',
        '8HF' => 'E02006271',
        '8HG' => 'E02006271',
        '8HH' => 'E02006271',
        '8HJ' => 'E02006271',
        '8HL' => 'E02006271',
        '8HN' => 'E02006269',
        '8HP' => 'E02006271',
        '8HQ' => 'E02006271',
        '8HR' => 'E02006271',
        '8HS' => 'E02006271',
        '8HT' => 'E02006271',
        '8HU' => 'E02006271',
        '8HW' => 'E02006271',
        '8HX' => 'E02006271',
        '8HY' => 'E02006271',
        '8HZ' => 'E02006271',
        '8JA' => 'E02006271',
        '8JB' => 'E02006271',
        '8JD' => 'E02006271',
        '8JE' => 'E02006271',
        '8JF' => 'E02006271',
        '8JG' => 'E02006271',
        '8JH' => 'E02006271',
        '8JJ' => 'E02006271',
        '8JL' => 'E02006271',
        '8JN' => 'E02006271',
        '8JP' => 'E02006271',
        '8JQ' => 'E02006271',
        '8JR' => 'E02006271',
        '8JS' => 'E02006271',
        '8JT' => 'E02006271',
        '8JU' => 'E02006271',
        '8JW' => 'E02006271',
        '8JX' => 'E02006271',
        '8JY' => 'E02006271',
        '8JZ' => 'E02006271',
        '8LA' => 'E02006271',
        '8LB' => 'E02006271',
        '8LD' => 'E02006271',
        '8LE' => 'E02006271',
        '8LF' => 'E02006271',
        '8LG' => 'E02006271',
        '8LH' => 'E02006267',
        '8LJ' => 'E02006267',
        '8LL' => 'E02006267',
        '8LN' => 'E02006251',
        '8LP' => 'E02006267',
        '8LQ' => 'E02006271',
        '8LR' => 'E02006267',
        '8LS' => 'E02006270',
        '8LT' => 'E02006270',
        '8LU' => 'E02006270',
        '8LW' => 'E02006271',
        '8LX' => 'E02006267',
        '8LY' => 'E02006267',
        '8LZ' => 'E02006267',
        '8NA' => 'E02006267',
        '8NB' => 'E02006267',
        '8ND' => 'E02006267',
        '8NE' => 'E02006267',
        '8NF' => 'E02006267',
        '8NG' => 'E02006267',
        '8NH' => 'E02006267',
        '8NJ' => 'E02006267',
        '8NL' => 'E02006267',
        '8NN' => 'E02006267',
        '8NP' => 'E02006267',
        '8NQ' => 'E02006267',
        '8NR' => 'E02006267',
        '8NS' => 'E02006271',
        '8NT' => 'E02006271',
        '8NU' => 'E02006271',
        '8NW' => 'E02006271',
        '8NX' => 'E02006267',
        '8NY' => 'E02006267',
        '8NZ' => 'E02006271',
        '8PA' => 'E02006267',
        '8PB' => 'E02006267',
        '8PD' => 'E02006267',
        '8PE' => 'E02006267',
        '8PF' => 'E02006267',
        '8PG' => 'E02006267',
        '8PH' => 'E02006267',
        '8PJ' => 'E02006267',
        '8PL' => 'E02006267',
        '8PN' => 'E02006267',
        '8PP' => 'E02006267',
        '8PQ' => 'E02006267',
        '8PR' => 'E02006267',
        '8PS' => 'E02006267',
        '8PT' => 'E02006267',
        '8PU' => 'E02006267',
        '8PW' => 'E02006267',
        '8PX' => 'E02006267',
        '8PY' => 'E02006267',
        '8PZ' => 'E02006267',
        '8QA' => 'E02006267',
        '8QB' => 'E02006267',
        '8QD' => 'E02006267',
        '8QE' => 'E02006267',
        '8QF' => 'E02006267',
        '8QG' => 'E02006265',
        '8QH' => 'E02006265',
        '8QJ' => 'E02006265',
        '8QL' => 'E02006265',
        '8QN' => 'E02006265',
        '8QP' => 'E02006265',
        '8QQ' => 'E02006265',
        '8QR' => 'E02006265',
        '8QS' => 'E02006265',
        '8QT' => 'E02006265',
        '8QU' => 'E02006265',
        '8QW' => 'E02006265',
        '8QX' => 'E02006265',
        '8QY' => 'E02006265',
        '8QZ' => 'E02006265',
        '8RA' => 'E02006271',
        '8RB' => 'E02006271',
        '8RD' => 'E02006267',
        '8RE' => 'E02006271',
        '8RF' => 'E02006271',
        '8RG' => 'E02006271',
        '8RH' => 'E02006270',
        '8RJ' => 'E02006270',
        '8RL' => 'E02006270',
        '8RN' => 'E02006270',
        '8RP' => 'E02006270',
        '8RQ' => 'E02006271',
        '8RR' => 'E02006270',
        '8RS' => 'E02006270',
        '8RT' => 'E02006270',
        '8RU' => 'E02006270',
        '8RW' => 'E02006271',
        '8RX' => 'E02006271',
        '8RY' => 'E02006271',
        '8RZ' => 'E02006271',
        '8SA' => 'E02006271',
        '8SB' => 'E02006271',
        '8SD' => 'E02006271',
        '8SE' => 'E02006271',
        '8SF' => 'E02006270',
        '8SG' => 'E02006270',
        '8SH' => 'E02006270',
        '8SJ' => 'E02006271',
        '8SL' => 'E02006270',
        '8SN' => 'E02006270',
        '8SP' => 'E02006270',
        '8SQ' => 'E02006270',
        '8SR' => 'E02006270',
        '8SS' => 'E02006271',
        '8ST' => 'E02006270',
        '8SU' => 'E02006270',
        '8SW' => 'E02006270',
        '8SZ' => 'E02006271',
        '8TA' => 'E02006271',
        '8TB' => 'E02006271',
        '8TD' => 'E02006271',
        '8TE' => 'E02006271',
        '8TF' => 'E02006271',
        '8TG' => 'E02006271',
        '8TH' => 'E02006271',
        '8TJ' => 'E02006271',
        '8TL' => 'E02006270',
        '8TQ' => 'E02006271',
        '8TW' => 'E02006271',
        '8TZ' => 'E02006271',
        '8UA' => 'E02006270',
        '8UB' => 'E02006270',
        '8UD' => 'E02006270',
        '8UQ' => 'E02006271',
        '8WA' => 'E02006251',
        '8WB' => 'E02006271',
        '8WD' => 'E02006271',
        '8WE' => 'E02006271',
        '8WG' => 'E02006271',
        '8WH' => 'E02006271',
        '8WJ' => 'E02006251',
        '8WL' => 'E02006251',
        '8WN' => 'E02006271',
        '8WP' => 'E02006251',
        '8WQ' => 'E02006271',
        '8WR' => 'E02006251',
        '8WS' => 'E02006251',
        '8WU' => 'E02006251',
        '8WW' => 'E02006271',
        '8WX' => 'E02006251',
        '8WY' => 'E02006251',
        '8WZ' => 'E02006251',
        '8XA' => 'E02006270',
        '8XB' => 'E02006270',
        '8XD' => 'E02006271',
        '8XE' => 'E02006270',
        '8XF' => 'E02006270',
        '8XG' => 'E02006270',
        '8XH' => 'E02006270',
        '8XQ' => 'E02006270',
        '8XY' => 'E02006270',
        '8XZ' => 'E02006270',
        '8YZ' => 'E02006271',
        '8ZR' => 'E02006251',
        '9AA' => 'E02006292',
        '9AB' => 'E02006292',
        '9AD' => 'E02006292',
        '9AE' => 'E02006292',
        '9AF' => 'E02006292',
        '9AG' => 'E02006292',
        '9AH' => 'E02006292',
        '9AJ' => 'E02006292',
        '9AL' => 'E02006292',
        '9AN' => 'E02006292',
        '9AP' => 'E02006292',
        '9AQ' => 'E02006292',
        '9AR' => 'E02006292',
        '9AS' => 'E02006292',
        '9AT' => 'E02006292',
        '9AU' => 'E02006292',
        '9AW' => 'E02006292',
        '9AX' => 'E02006292',
        '9AY' => 'E02006292',
        '9AZ' => 'E02006251',
        '9BA' => 'E02006292',
        '9BB' => 'E02006292',
        '9BD' => 'E02006292',
        '9BE' => 'E02006292',
        '9BF' => 'E02006292',
        '9BG' => 'E02006292',
        '9BH' => 'E02006292',
        '9BJ' => 'E02006292',
        '9BL' => 'E02006292',
        '9BN' => 'E02006292',
        '9BP' => 'E02006292',
        '9BQ' => 'E02006292',
        '9BS' => 'E02006292',
        '9BT' => 'E02006292',
        '9BU' => 'E02006292',
        '9BW' => 'E02006292',
        '9BX' => 'E02006292',
        '9BY' => 'E02006292',
        '9BZ' => 'E02006292',
        '9DA' => 'E02006292',
        '9DB' => 'E02006292',
        '9DD' => 'E02006292',
        '9DE' => 'E02006292',
        '9DF' => 'E02006292',
        '9DG' => 'E02006292',
        '9DH' => 'E02006292',
        '9DJ' => 'E02006292',
        '9DL' => 'E02006292',
        '9DN' => 'E02006292',
        '9DP' => 'E02006292',
        '9DQ' => 'E02006292',
        '9DR' => 'E02006292',
        '9DS' => 'E02006292',
        '9DT' => 'E02006292',
        '9DU' => 'E02006292',
        '9DW' => 'E02006292',
        '9DX' => 'E02006292',
        '9DY' => 'E02006292',
        '9DZ' => 'E02006292',
        '9EA' => 'E02006292',
        '9EB' => 'E02006292',
        '9ED' => 'E02006292',
        '9EE' => 'E02006292',
        '9EF' => 'E02006251',
        '9EG' => 'E02006292',
        '9EH' => 'E02006292',
        '9EJ' => 'E02006292',
        '9EL' => 'E02006292',
        '9EN' => 'E02006292',
        '9EP' => 'E02006251',
        '9EQ' => 'E02006251',
        '9ER' => 'E02006292',
        '9ES' => 'E02006292',
        '9ET' => 'E02006292',
        '9EU' => 'E02006292',
        '9EW' => 'E02006292',
        '9EX' => 'E02006292',
        '9EY' => 'E02006292',
        '9EZ' => 'E02006292',
        '9FA' => 'E02006292',
        '9FB' => 'E02006292',
        '9FD' => 'E02006292',
        '9FW' => 'E02006292',
        '9GA' => 'E02006267',
        '9HB' => 'E02006292',
        '9HD' => 'E02006251',
        '9HE' => 'E02006292',
        '9HF' => 'E02006292',
        '9HG' => 'E02006292',
        '9HH' => 'E02006292',
        '9HJ' => 'E02006292',
        '9HL' => 'E02006292',
        '9HN' => 'E02006292',
        '9HP' => 'E02006292',
        '9HQ' => 'E02006292',
        '9HR' => 'E02006292',
        '9HS' => 'E02006292',
        '9HT' => 'E02006292',
        '9HU' => 'E02006292',
        '9HW' => 'E02006251',
        '9HX' => 'E02006292',
        '9HY' => 'E02006292',
        '9HZ' => 'E02006292',
        '9JA' => 'E02006292',
        '9JB' => 'E02006292',
        '9JD' => 'E02006292',
        '9JE' => 'E02006292',
        '9JF' => 'E02006292',
        '9JH' => 'E02006267',
        '9JJ' => 'E02006267',
        '9JL' => 'E02006267',
        '9JN' => 'E02006292',
        '9JP' => 'E02006292',
        '9JQ' => 'E02006292',
        '9JR' => 'E02006292',
        '9JS' => 'E02006267',
        '9JT' => 'E02006267',
        '9JU' => 'E02006267',
        '9JW' => 'E02006292',
        '9JX' => 'E02006267',
        '9JY' => 'E02006267',
        '9JZ' => 'E02006267',
        '9LA' => 'E02006292',
        '9LB' => 'E02006292',
        '9LD' => 'E02006267',
        '9LE' => 'E02006292',
        '9LF' => 'E02006267',
        '9LG' => 'E02006267',
        '9LH' => 'E02006292',
        '9LJ' => 'E02006292',
        '9LL' => 'E02006292',
        '9LN' => 'E02006292',
        '9LP' => 'E02006292',
        '9LQ' => 'E02006267',
        '9LR' => 'E02006292',
        '9LS' => 'E02006292',
        '9LT' => 'E02006292',
        '9LU' => 'E02006292',
        '9LW' => 'E02006292',
        '9LX' => 'E02006292',
        '9LY' => 'E02006292',
        '9LZ' => 'E02006292',
        '9NA' => 'E02006292',
        '9NB' => 'E02006292',
        '9ND' => 'E02006292',
        '9NE' => 'E02006292',
        '9NF' => 'E02006292',
        '9NG' => 'E02006292',
        '9NH' => 'E02006292',
        '9NJ' => 'E02006292',
        '9NL' => 'E02006267',
        '9NN' => 'E02006292',
        '9NP' => 'E02006292',
        '9NQ' => 'E02006292',
        '9NR' => 'E02006292',
        '9NS' => 'E02006292',
        '9NT' => 'E02006292',
        '9NU' => 'E02006292',
        '9NW' => 'E02006292',
        '9NX' => 'E02006292',
        '9NY' => 'E02006292',
        '9NZ' => 'E02006292',
        '9PA' => 'E02006292',
        '9PB' => 'E02006292',
        '9PD' => 'E02006292',
        '9PE' => 'E02006292',
        '9PF' => 'E02006292',
        '9PG' => 'E02006267',
        '9PH' => 'E02006251',
        '9PJ' => 'E02006292',
        '9PL' => 'E02006251',
        '9PN' => 'E02006267',
        '9PP' => 'E02006267',
        '9PQ' => 'E02006267',
        '9PR' => 'E02006267',
        '9PS' => 'E02006267',
        '9PT' => 'E02006267',
        '9PU' => 'E02006267',
        '9PW' => 'E02006267',
        '9PX' => 'E02006267',
        '9PY' => 'E02006267',
        '9PZ' => 'E02006267',
        '9QA' => 'E02006267',
        '9QB' => 'E02006267',
        '9QD' => 'E02006272',
        '9QE' => 'E02006272',
        '9QF' => 'E02006272',
        '9QG' => 'E02006267',
        '9QH' => 'E02006272',
        '9QJ' => 'E02006272',
        '9QL' => 'E02006267',
        '9QN' => 'E02006267',
        '9QP' => 'E02006292',
        '9QQ' => 'E02006272',
        '9QR' => 'E02006292',
        '9QS' => 'E02006251',
        '9QT' => 'E02006272',
        '9QU' => 'E02006267',
        '9QW' => 'E02006267',
        '9QX' => 'E02006267',
        '9QY' => 'E02006267',
        '9QZ' => 'E02006272',
        '9RA' => 'E02006272',
        '9RB' => 'E02006272',
        '9RD' => 'E02006272',
        '9RE' => 'E02006272',
        '9RF' => 'E02006272',
        '9RG' => 'E02006272',
        '9RH' => 'E02006272',
        '9RJ' => 'E02006272',
        '9RL' => 'E02006272',
        '9RN' => 'E02006272',
        '9RP' => 'E02006272',
        '9RQ' => 'E02006272',
        '9RR' => 'E02006272',
        '9RS' => 'E02006272',
        '9RT' => 'E02006272',
        '9RU' => 'E02006267',
        '9RW' => 'E02006272',
        '9RX' => 'E02006267',
        '9RY' => 'E02006267',
        '9RZ' => 'E02006267',
        '9SA' => 'E02006267',
        '9SB' => 'E02006267',
        '9SD' => 'E02006267',
        '9SE' => 'E02006267',
        '9SF' => 'E02006267',
        '9SG' => 'E02006267',
        '9SH' => 'E02006267',
        '9SJ' => 'E02006267',
        '9SL' => 'E02006267',
        '9SN' => 'E02006267',
        '9SP' => 'E02006292',
        '9SQ' => 'E02006267',
        '9SR' => 'E02006267',
        '9SS' => 'E02006251',
        '9ST' => 'E02006251',
        '9SU' => 'E02006267',
        '9SW' => 'E02006267',
        '9SX' => 'E02006267',
        '9SY' => 'E02006267',
        '9SZ' => 'E02006267',
        '9TA' => 'E02006267',
        '9TB' => 'E02006267',
        '9TD' => 'E02006267',
        '9TE' => 'E02006267',
        '9TF' => 'E02006267',
        '9TG' => 'E02006267',
        '9TH' => 'E02006267',
        '9TJ' => 'E02006267',
        '9TL' => 'E02006267',
        '9TN' => 'E02006267',
        '9TP' => 'E02006267',
        '9TQ' => 'E02006267',
        '9TR' => 'E02006267',
        '9TS' => 'E02006267',
        '9TU' => 'E02006267',
        '9TW' => 'E02006267',
        '9TX' => 'E02006267',
        '9TY' => 'E02006267',
        '9TZ' => 'E02006267',
        '9UA' => 'E02006267',
        '9UB' => 'E02006267',
        '9UD' => 'E02006267',
        '9UE' => 'E02006267',
        '9UG' => 'E02006267',
        '9UJ' => 'E02006267',
        '9UL' => 'E02006267',
        '9UN' => 'E02006267',
        '9WA' => 'E02006251',
        '9WW' => 'E02006251',
        '9WX' => 'E02006251',
        '9WY' => 'E02006251',
        '9WZ' => 'E02006251',
        '9XA' => 'E02006251',
        '9XB' => 'E02006267',
        '9XD' => 'E02006251',
        '9XP' => 'E02006267',
        '9YE' => 'E02006251',
        '9YF' => 'E02006251',
        '9YN' => 'E02006267',
        '9ZR' => 'E02006267',
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
