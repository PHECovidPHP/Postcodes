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
final class NG20
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02005881',
        '0AB' => 'E02005881',
        '0AD' => 'E02005881',
        '0AE' => 'E02005881',
        '0AF' => 'E02005881',
        '0AG' => 'E02005881',
        '0AH' => 'E02005881',
        '0AJ' => 'E02005881',
        '0AL' => 'E02005881',
        '0AN' => 'E02005881',
        '0AP' => 'E02005881',
        '0AQ' => 'E02005881',
        '0AR' => 'E02005881',
        '0AS' => 'E02005881',
        '0AT' => 'E02005880',
        '0AU' => 'E02005881',
        '0AW' => 'E02005881',
        '0AX' => 'E02005881',
        '0AY' => 'E02005881',
        '0AZ' => 'E02005881',
        '0BA' => 'E02005881',
        '0BB' => 'E02005881',
        '0BD' => 'E02005881',
        '0BE' => 'E02005881',
        '0BF' => 'E02005881',
        '0BG' => 'E02005881',
        '0BH' => 'E02005881',
        '0BJ' => 'E02005881',
        '0BL' => 'E02005881',
        '0BN' => 'E02005881',
        '0BP' => 'E02005881',
        '0BQ' => 'E02005881',
        '0BS' => 'E02005881',
        '0BT' => 'E02005881',
        '0BU' => 'E02005881',
        '0BW' => 'E02005881',
        '0BX' => 'E02005881',
        '0BY' => 'E02005881',
        '0BZ' => 'E02005881',
        '0DA' => 'E02005881',
        '0DB' => 'E02005881',
        '0DD' => 'E02005881',
        '0DE' => 'E02005881',
        '0DF' => 'E02005881',
        '0DG' => 'E02005881',
        '0DH' => 'E02005881',
        '0DJ' => 'E02005881',
        '0DL' => 'E02005881',
        '0DN' => 'E02005881',
        '0DP' => 'E02005881',
        '0DQ' => 'E02005881',
        '0DR' => 'E02005881',
        '0DS' => 'E02005881',
        '0DT' => 'E02005881',
        '0DU' => 'E02005881',
        '0DW' => 'E02005881',
        '0DX' => 'E02005881',
        '0DY' => 'E02005881',
        '0DZ' => 'E02005881',
        '0EA' => 'E02005881',
        '0EB' => 'E02005881',
        '0ED' => 'E02005881',
        '0EE' => 'E02005881',
        '0EF' => 'E02005881',
        '0EG' => 'E02005881',
        '0EH' => 'E02005881',
        '0EJ' => 'E02005881',
        '0EL' => 'E02005881',
        '0EN' => 'E02005881',
        '0EP' => 'E02005880',
        '0EQ' => 'E02005881',
        '0ER' => 'E02005880',
        '0ES' => 'E02005880',
        '0ET' => 'E02005880',
        '0EU' => 'E02005880',
        '0EW' => 'E02005881',
        '0EX' => 'E02005881',
        '0EY' => 'E02005881',
        '0EZ' => 'E02005881',
        '0FA' => 'E02005887',
        '0FB' => 'E02005881',
        '0FD' => 'E02005881',
        '0FE' => 'E02005881',
        '0FF' => 'E02005881',
        '0FG' => 'E02005881',
        '0FH' => 'E02005881',
        '0FJ' => 'E02005881',
        '0FL' => 'E02005881',
        '0FN' => 'E02005881',
        '0FP' => 'E02005881',
        '0GX' => 'E02005881',
        '0GY' => 'E02005881',
        '0GZ' => 'E02005881',
        '0HA' => 'E02005881',
        '0HB' => 'E02005881',
        '0HD' => 'E02005880',
        '0HE' => 'E02005881',
        '0HF' => 'E02005881',
        '0HG' => 'E02005881',
        '0HH' => 'E02005881',
        '0HJ' => 'E02005881',
        '0HL' => 'E02005881',
        '0HN' => 'E02005881',
        '0HP' => 'E02005880',
        '0HQ' => 'E02005881',
        '0HR' => 'E02005880',
        '0HS' => 'E02005881',
        '0HT' => 'E02005881',
        '0HU' => 'E02005881',
        '0HW' => 'E02005880',
        '0HX' => 'E02005881',
        '0HY' => 'E02005881',
        '0HZ' => 'E02005881',
        '0JA' => 'E02005881',
        '0JB' => 'E02005881',
        '0JD' => 'E02005881',
        '0JE' => 'E02005881',
        '0JF' => 'E02005881',
        '0JG' => 'E02005881',
        '0JH' => 'E02005881',
        '0JJ' => 'E02005881',
        '0JL' => 'E02005881',
        '0JN' => 'E02005881',
        '0JP' => 'E02005881',
        '0JQ' => 'E02005881',
        '0JR' => 'E02005881',
        '0JS' => 'E02005881',
        '0JT' => 'E02005881',
        '0JU' => 'E02005881',
        '0JW' => 'E02005881',
        '0JX' => 'E02005880',
        '0JY' => 'E02005881',
        '0JZ' => 'E02005880',
        '0LA' => 'E02005880',
        '0LB' => 'E02005881',
        '0LD' => 'E02005881',
        '0LE' => 'E02005881',
        '0LF' => 'E02005881',
        '0LG' => 'E02005881',
        '0LH' => 'E02005881',
        '0LJ' => 'E02005881',
        '0LL' => 'E02005881',
        '0LN' => 'E02005881',
        '0LP' => 'E02005881',
        '0LQ' => 'E02005881',
        '0LR' => 'E02005881',
        '0LS' => 'E02005881',
        '0LT' => 'E02005881',
        '0LU' => 'E02005881',
        '0LW' => 'E02005887',
        '0LX' => 'E02005881',
        '0LY' => 'E02005881',
        '0LZ' => 'E02005881',
        '0NA' => 'E02005881',
        '0NB' => 'E02005881',
        '0ND' => 'E02005881',
        '0NE' => 'E02005881',
        '0NF' => 'E02005881',
        '0NG' => 'E02005881',
        '0NH' => 'E02005881',
        '0NJ' => 'E02005881',
        '0NL' => 'E02005881',
        '0NN' => 'E02005881',
        '0NP' => 'E02005881',
        '0NQ' => 'E02005881',
        '0NR' => 'E02005881',
        '0NS' => 'E02005881',
        '0NT' => 'E02005881',
        '0NW' => 'E02005881',
        '0NZ' => 'E02005912',
        '0PA' => 'E02005881',
        '0PB' => 'E02005881',
        '0PD' => 'E02005881',
        '0PE' => 'E02005881',
        '0PF' => 'E02005881',
        '0PG' => 'E02005881',
        '0PH' => 'E02005881',
        '0PJ' => 'E02005881',
        '0PL' => 'E02005881',
        '0PN' => 'E02005881',
        '0PP' => 'E02005880',
        '0PQ' => 'E02005881',
        '0PR' => 'E02005880',
        '0PS' => 'E02005881',
        '0PT' => 'E02005880',
        '0PU' => 'E02005881',
        '0PW' => 'E02005880',
        '0PX' => 'E02005881',
        '0PY' => 'E02005880',
        '0PZ' => 'E02005880',
        '0QA' => 'E02005881',
        '0QB' => 'E02005880',
        '0QD' => 'E02005881',
        '0QE' => 'E02005881',
        '0QF' => 'E02005881',
        '0QG' => 'E02005881',
        '0QH' => 'E02005880',
        '0QJ' => 'E02005880',
        '0QL' => 'E02005880',
        '0QN' => 'E02005881',
        '0QP' => 'E02005880',
        '0QQ' => 'E02005880',
        '0QR' => 'E02005880',
        '0QS' => 'E02005880',
        '0QT' => 'E02005880',
        '0QU' => 'E02005880',
        '0QW' => 'E02005880',
        '0QX' => 'E02005880',
        '0QY' => 'E02005880',
        '0QZ' => 'E02005880',
        '0RE' => 'E02005880',
        '0RF' => 'E02005880',
        '0RG' => 'E02005880',
        '0RH' => 'E02005880',
        '0RJ' => 'E02005880',
        '0RL' => 'E02005880',
        '0RN' => 'E02005880',
        '0RP' => 'E02005880',
        '0RQ' => 'E02005880',
        '0RR' => 'E02005880',
        '0RS' => 'E02005880',
        '0RT' => 'E02005880',
        '0RU' => 'E02005880',
        '0RW' => 'E02005880',
        '0RX' => 'E02005880',
        '0RY' => 'E02005880',
        '0RZ' => 'E02005880',
        '0SA' => 'E02005880',
        '0SB' => 'E02005880',
        '0SD' => 'E02005880',
        '0SE' => 'E02005880',
        '0SF' => 'E02005880',
        '0SG' => 'E02005880',
        '0SH' => 'E02005880',
        '0SJ' => 'E02005880',
        '0SL' => 'E02005880',
        '0SN' => 'E02005880',
        '0SP' => 'E02005880',
        '0SQ' => 'E02005880',
        '0SR' => 'E02005880',
        '0SS' => 'E02005880',
        '0ST' => 'E02005880',
        '0SU' => 'E02005880',
        '0SW' => 'E02005880',
        '0SX' => 'E02005880',
        '0SY' => 'E02005880',
        '0SZ' => 'E02005880',
        '0TA' => 'E02005880',
        '0TB' => 'E02005880',
        '0TD' => 'E02005880',
        '0TE' => 'E02005880',
        '0TF' => 'E02005880',
        '0TG' => 'E02005880',
        '0TH' => 'E02005880',
        '0TJ' => 'E02005880',
        '0TL' => 'E02005880',
        '0TN' => 'E02005880',
        '0TP' => 'E02005880',
        '0TQ' => 'E02005880',
        '0TR' => 'E02005880',
        '0TS' => 'E02005887',
        '0TW' => 'E02005880',
        '0WA' => 'E02005881',
        '0WE' => 'E02005881',
        '0WR' => 'E02005881',
        '0WS' => 'E02005881',
        '0WT' => 'E02005881',
        '0WU' => 'E02005881',
        '0WW' => 'E02005881',
        '0WX' => 'E02005881',
        '0WY' => 'E02005881',
        '0WZ' => 'E02005881',
        '0YD' => 'E02005881',
        '0YY' => 'E02005881',
        '0YZ' => 'E02005881',
        '0ZZ' => 'E02005881',
        '8AA' => 'E02004051',
        '8AB' => 'E02004051',
        '8AD' => 'E02004051',
        '8AE' => 'E02004051',
        '8AF' => 'E02004051',
        '8AG' => 'E02004051',
        '8AH' => 'E02004051',
        '8AJ' => 'E02004051',
        '8AL' => 'E02004051',
        '8AN' => 'E02004051',
        '8AP' => 'E02004051',
        '8AQ' => 'E02004051',
        '8AR' => 'E02004051',
        '8AS' => 'E02004051',
        '8AT' => 'E02004051',
        '8AU' => 'E02004051',
        '8AW' => 'E02004051',
        '8AX' => 'E02004051',
        '8AY' => 'E02004051',
        '8AZ' => 'E02004051',
        '8BA' => 'E02004051',
        '8BB' => 'E02004051',
        '8BD' => 'E02004051',
        '8BE' => 'E02004051',
        '8BF' => 'E02004051',
        '8BG' => 'E02004051',
        '8BH' => 'E02004051',
        '8BJ' => 'E02004051',
        '8BL' => 'E02004051',
        '8BN' => 'E02004051',
        '8BP' => 'E02004051',
        '8BQ' => 'E02004051',
        '8BS' => 'E02004051',
        '8BT' => 'E02004051',
        '8BU' => 'E02004051',
        '8BW' => 'E02004051',
        '8BX' => 'E02004051',
        '8BY' => 'E02004051',
        '8BZ' => 'E02004051',
        '8DA' => 'E02004051',
        '8DB' => 'E02004051',
        '8DD' => 'E02004051',
        '8DE' => 'E02004051',
        '8DF' => 'E02004051',
        '8DG' => 'E02004051',
        '8DH' => 'E02004051',
        '8DJ' => 'E02004050',
        '8DL' => 'E02004050',
        '8DN' => 'E02004050',
        '8DP' => 'E02004050',
        '8DQ' => 'E02004050',
        '8DR' => 'E02004050',
        '8DS' => 'E02004050',
        '8DT' => 'E02004050',
        '8DU' => 'E02004050',
        '8DW' => 'E02004050',
        '8DX' => 'E02004050',
        '8DY' => 'E02004050',
        '8DZ' => 'E02004050',
        '8EA' => 'E02004050',
        '8EB' => 'E02004050',
        '8ED' => 'E02004050',
        '8EE' => 'E02004050',
        '8EF' => 'E02004050',
        '8EG' => 'E02004050',
        '8EH' => 'E02004051',
        '8EJ' => 'E02004051',
        '8EL' => 'E02004051',
        '8EN' => 'E02004051',
        '8EP' => 'E02004051',
        '8EQ' => 'E02004050',
        '8ER' => 'E02004050',
        '8ES' => 'E02004050',
        '8ET' => 'E02004050',
        '8EU' => 'E02004050',
        '8EW' => 'E02004051',
        '8EX' => 'E02004050',
        '8EY' => 'E02004050',
        '8EZ' => 'E02004050',
        '8FA' => 'E02004050',
        '8FB' => 'E02004050',
        '8FD' => 'E02004050',
        '8FE' => 'E02004050',
        '8FF' => 'E02004050',
        '8FG' => 'E02004050',
        '8FH' => 'E02004050',
        '8FJ' => 'E02004051',
        '8FL' => 'E02004051',
        '8FN' => 'E02004051',
        '8FP' => 'E02004051',
        '8FQ' => 'E02004051',
        '8FR' => 'E02004051',
        '8FS' => 'E02004050',
        '8FT' => 'E02004050',
        '8FU' => 'E02004050',
        '8FW' => 'E02004050',
        '8FX' => 'E02004050',
        '8FY' => 'E02004050',
        '8FZ' => 'E02004050',
        '8GA' => 'E02004050',
        '8GB' => 'E02004051',
        '8GD' => 'E02004050',
        '8GF' => 'E02004050',
        '8GG' => 'E02004050',
        '8GJ' => 'E02004050',
        '8HA' => 'E02004050',
        '8HB' => 'E02004050',
        '8HD' => 'E02004050',
        '8HE' => 'E02004050',
        '8HF' => 'E02004050',
        '8HG' => 'E02004050',
        '8HH' => 'E02004050',
        '8HJ' => 'E02004050',
        '8HL' => 'E02004050',
        '8HN' => 'E02004050',
        '8HP' => 'E02004050',
        '8HQ' => 'E02004050',
        '8HR' => 'E02004050',
        '8HS' => 'E02004050',
        '8HT' => 'E02004050',
        '8HU' => 'E02004050',
        '8HW' => 'E02004050',
        '8HX' => 'E02004050',
        '8JG' => 'E02004050',
        '8JH' => 'E02004050',
        '8JJ' => 'E02004050',
        '8JL' => 'E02004050',
        '8JN' => 'E02004050',
        '8JP' => 'E02004050',
        '8JQ' => 'E02004050',
        '8JR' => 'E02004050',
        '8JS' => 'E02004050',
        '8JT' => 'E02004050',
        '8JU' => 'E02004050',
        '8JW' => 'E02004050',
        '8JX' => 'E02004050',
        '8JY' => 'E02004050',
        '8JZ' => 'E02004050',
        '8LE' => 'E02004050',
        '8LF' => 'E02004050',
        '8LG' => 'E02004050',
        '8LH' => 'E02004050',
        '8LJ' => 'E02004050',
        '8LL' => 'E02004050',
        '8LN' => 'E02004050',
        '8LP' => 'E02004050',
        '8LQ' => 'E02004050',
        '8LR' => 'E02004050',
        '8LS' => 'E02004050',
        '8LT' => 'E02004050',
        '8LU' => 'E02004050',
        '8LW' => 'E02004050',
        '8LX' => 'E02004050',
        '8LY' => 'E02004050',
        '8LZ' => 'E02004050',
        '8NA' => 'E02004050',
        '8NB' => 'E02004050',
        '8ND' => 'E02004050',
        '8NE' => 'E02004050',
        '8NF' => 'E02004050',
        '8NG' => 'E02004050',
        '8NH' => 'E02004050',
        '8NJ' => 'E02004050',
        '8NL' => 'E02004050',
        '8NN' => 'E02004050',
        '8NP' => 'E02004050',
        '8NQ' => 'E02004050',
        '8NR' => 'E02004050',
        '8NS' => 'E02004050',
        '8NT' => 'E02004050',
        '8NU' => 'E02004050',
        '8NW' => 'E02004050',
        '8NX' => 'E02004050',
        '8NY' => 'E02004050',
        '8PA' => 'E02004050',
        '8PB' => 'E02004050',
        '8PD' => 'E02004050',
        '8PE' => 'E02004050',
        '8PF' => 'E02004051',
        '8PG' => 'E02004051',
        '8PH' => 'E02004051',
        '8PJ' => 'E02004051',
        '8PL' => 'E02004050',
        '8PN' => 'E02004050',
        '8PP' => 'E02004050',
        '8PQ' => 'E02004051',
        '8PR' => 'E02004050',
        '8PS' => 'E02004050',
        '8PT' => 'E02004050',
        '8PU' => 'E02004050',
        '8PW' => 'E02004050',
        '8PX' => 'E02004050',
        '8PY' => 'E02004050',
        '8PZ' => 'E02004050',
        '8QA' => 'E02004050',
        '8QB' => 'E02004050',
        '8QD' => 'E02004050',
        '8QE' => 'E02004050',
        '8QF' => 'E02004050',
        '8QG' => 'E02004050',
        '8QH' => 'E02004050',
        '8QJ' => 'E02004050',
        '8QL' => 'E02004050',
        '8QN' => 'E02004050',
        '8QP' => 'E02004050',
        '8QQ' => 'E02004050',
        '8QR' => 'E02004050',
        '8QS' => 'E02004050',
        '8QT' => 'E02004050',
        '8QW' => 'E02004050',
        '8QY' => 'E02004051',
        '8RA' => 'E02004051',
        '8RB' => 'E02004051',
        '8RD' => 'E02004051',
        '8RE' => 'E02004051',
        '8RF' => 'E02004051',
        '8RG' => 'E02004051',
        '8RH' => 'E02004051',
        '8RJ' => 'E02004051',
        '8RL' => 'E02004051',
        '8RN' => 'E02004051',
        '8RP' => 'E02004051',
        '8RQ' => 'E02004051',
        '8RR' => 'E02004051',
        '8RS' => 'E02004051',
        '8RT' => 'E02004051',
        '8RU' => 'E02004051',
        '8RW' => 'E02004051',
        '8RX' => 'E02004051',
        '8RY' => 'E02004051',
        '8RZ' => 'E02004051',
        '8SA' => 'E02004051',
        '8SB' => 'E02004051',
        '8SE' => 'E02004051',
        '8SF' => 'E02004051',
        '8SG' => 'E02004051',
        '8SH' => 'E02004051',
        '8SJ' => 'E02004051',
        '8SL' => 'E02004051',
        '8SN' => 'E02004051',
        '8SP' => 'E02004051',
        '8SQ' => 'E02004051',
        '8SR' => 'E02004051',
        '8SS' => 'E02004051',
        '8ST' => 'E02004051',
        '8SU' => 'E02004051',
        '8SX' => 'E02004051',
        '8SY' => 'E02004051',
        '8SZ' => 'E02004051',
        '8TA' => 'E02004051',
        '8TB' => 'E02004051',
        '8TD' => 'E02004051',
        '8TE' => 'E02004051',
        '8TF' => 'E02004051',
        '8TG' => 'E02004051',
        '8TH' => 'E02004051',
        '8TJ' => 'E02004051',
        '8TL' => 'E02004051',
        '8TN' => 'E02004051',
        '8TP' => 'E02004051',
        '8TQ' => 'E02004051',
        '8TR' => 'E02004051',
        '8TS' => 'E02004051',
        '8TU' => 'E02004051',
        '8TW' => 'E02004051',
        '8TX' => 'E02004051',
        '8TY' => 'E02004051',
        '8UA' => 'E02004051',
        '8UB' => 'E02004051',
        '8UD' => 'E02004051',
        '8UE' => 'E02004051',
        '8UF' => 'E02004051',
        '8UG' => 'E02004051',
        '8UL' => 'E02005881',
        '8UN' => 'E02004051',
        '8UP' => 'E02004051',
        '8UQ' => 'E02004051',
        '8UR' => 'E02004051',
        '8US' => 'E02004051',
        '8UT' => 'E02004051',
        '8UU' => 'E02004051',
        '8UW' => 'E02004051',
        '8WT' => 'E02005883',
        '8WU' => 'E02005883',
        '8WW' => 'E02005883',
        '8WX' => 'E02005883',
        '8WY' => 'E02005883',
        '8WZ' => 'E02005883',
        '8XA' => 'E02005880',
        '8XB' => 'E02005880',
        '8XD' => 'E02005880',
        '8XE' => 'E02005880',
        '8XF' => 'E02005880',
        '8XG' => 'E02005880',
        '8XH' => 'E02005880',
        '8XJ' => 'E02005880',
        '8XL' => 'E02005880',
        '8XN' => 'E02005880',
        '8XP' => 'E02005880',
        '8XQ' => 'E02005880',
        '8XR' => 'E02005880',
        '8XS' => 'E02005880',
        '8XT' => 'E02005880',
        '8XU' => 'E02005880',
        '8XW' => 'E02005880',
        '8XY' => 'E02005880',
        '8XZ' => 'E02005880',
        '8YF' => 'E02005880',
        '8YG' => 'E02005880',
        '8YH' => 'E02005880',
        '8YJ' => 'E02004051',
        '8YL' => 'E02005880',
        '8YS' => 'E02005880',
        '8YZ' => 'E02004051',
        '9AA' => 'E02004050',
        '9AB' => 'E02004050',
        '9AD' => 'E02004050',
        '9AE' => 'E02004050',
        '9AF' => 'E02004050',
        '9AG' => 'E02004050',
        '9AH' => 'E02004050',
        '9AJ' => 'E02004050',
        '9AL' => 'E02004051',
        '9AN' => 'E02004050',
        '9AP' => 'E02004050',
        '9AQ' => 'E02004050',
        '9AR' => 'E02004050',
        '9AS' => 'E02004050',
        '9AT' => 'E02004050',
        '9AU' => 'E02004050',
        '9AW' => 'E02004050',
        '9AX' => 'E02004050',
        '9AY' => 'E02004050',
        '9AZ' => 'E02004050',
        '9BA' => 'E02004050',
        '9BB' => 'E02004051',
        '9BD' => 'E02004051',
        '9BE' => 'E02004051',
        '9BF' => 'E02004051',
        '9BG' => 'E02004050',
        '9BH' => 'E02004051',
        '9BJ' => 'E02004051',
        '9BL' => 'E02004051',
        '9BN' => 'E02004051',
        '9BP' => 'E02004051',
        '9BQ' => 'E02004051',
        '9BS' => 'E02004051',
        '9BT' => 'E02004051',
        '9BU' => 'E02004051',
        '9BW' => 'E02004051',
        '9BX' => 'E02004051',
        '9BY' => 'E02004051',
        '9BZ' => 'E02004051',
        '9DA' => 'E02004051',
        '9DB' => 'E02004051',
        '9DD' => 'E02004051',
        '9DE' => 'E02004051',
        '9DF' => 'E02005848',
        '9DH' => 'E02004051',
        '9DJ' => 'E02004051',
        '9DL' => 'E02004051',
        '9DN' => 'E02004051',
        '9DP' => 'E02004051',
        '9DQ' => 'E02004051',
        '9DR' => 'E02004051',
        '9DS' => 'E02004051',
        '9DT' => 'E02004051',
        '9DU' => 'E02004051',
        '9DW' => 'E02004051',
        '9DX' => 'E02004051',
        '9DY' => 'E02004051',
        '9DZ' => 'E02004051',
        '9EA' => 'E02005848',
        '9EB' => 'E02004051',
        '9ED' => 'E02004051',
        '9EE' => 'E02004051',
        '9EF' => 'E02004051',
        '9EG' => 'E02004051',
        '9EH' => 'E02005848',
        '9EJ' => 'E02005848',
        '9EL' => 'E02004051',
        '9EN' => 'E02005848',
        '9EP' => 'E02005848',
        '9EQ' => 'E02005848',
        '9ER' => 'E02005848',
        '9ES' => 'E02005848',
        '9ET' => 'E02005848',
        '9EU' => 'E02005848',
        '9EW' => 'E02005848',
        '9EX' => 'E02005848',
        '9EY' => 'E02004051',
        '9EZ' => 'E02005848',
        '9FA' => 'E02005848',
        '9GZ' => 'E02005880',
        '9HA' => 'E02004051',
        '9HB' => 'E02004051',
        '9HD' => 'E02004051',
        '9HE' => 'E02004051',
        '9HF' => 'E02004051',
        '9HG' => 'E02004051',
        '9HH' => 'E02004051',
        '9HJ' => 'E02004051',
        '9HL' => 'E02004051',
        '9HN' => 'E02005887',
        '9HQ' => 'E02004051',
        '9HS' => 'E02004051',
        '9HT' => 'E02004051',
        '9HU' => 'E02004048',
        '9HW' => 'E02005887',
        '9HX' => 'E02004046',
        '9HY' => 'E02004048',
        '9HZ' => 'E02004051',
        '9JA' => 'E02005848',
        '9JB' => 'E02005848',
        '9JD' => 'E02005848',
        '9JE' => 'E02005848',
        '9JF' => 'E02005848',
        '9JG' => 'E02005848',
        '9JH' => 'E02004046',
        '9JL' => 'E02005848',
        '9JN' => 'E02005848',
        '9JP' => 'E02005848',
        '9JQ' => 'E02005848',
        '9JR' => 'E02005848',
        '9JS' => 'E02005848',
        '9JT' => 'E02005848',
        '9JW' => 'E02005848',
        '9JX' => 'E02005848',
        '9JY' => 'E02005848',
        '9JZ' => 'E02005848',
        '9LA' => 'E02005848',
        '9LB' => 'E02005848',
        '9LD' => 'E02005848',
        '9LE' => 'E02005848',
        '9LF' => 'E02005848',
        '9LG' => 'E02005848',
        '9LH' => 'E02005848',
        '9LJ' => 'E02005848',
        '9LL' => 'E02005848',
        '9LN' => 'E02005848',
        '9LP' => 'E02005848',
        '9LQ' => 'E02005848',
        '9LT' => 'E02005848',
        '9LU' => 'E02005848',
        '9LW' => 'E02005848',
        '9LX' => 'E02005848',
        '9LY' => 'E02005848',
        '9LZ' => 'E02005848',
        '9NA' => 'E02005848',
        '9NB' => 'E02005848',
        '9ND' => 'E02005848',
        '9NE' => 'E02005848',
        '9NF' => 'E02005848',
        '9NG' => 'E02005848',
        '9NH' => 'E02005848',
        '9NJ' => 'E02005848',
        '9NL' => 'E02005848',
        '9NN' => 'E02005848',
        '9NP' => 'E02005848',
        '9NQ' => 'E02005848',
        '9NR' => 'E02005848',
        '9NS' => 'E02005848',
        '9NT' => 'E02005848',
        '9NW' => 'E02005848',
        '9NY' => 'E02005883',
        '9NZ' => 'E02004051',
        '9PA' => 'E02005880',
        '9PB' => 'E02005880',
        '9PD' => 'E02005880',
        '9PE' => 'E02005880',
        '9PF' => 'E02005880',
        '9PG' => 'E02005880',
        '9PH' => 'E02005880',
        '9PJ' => 'E02005880',
        '9PL' => 'E02005880',
        '9PN' => 'E02005880',
        '9PP' => 'E02005880',
        '9PQ' => 'E02005880',
        '9PR' => 'E02005880',
        '9PS' => 'E02005880',
        '9PT' => 'E02005880',
        '9PU' => 'E02005848',
        '9PW' => 'E02005880',
        '9PX' => 'E02005880',
        '9PY' => 'E02005880',
        '9PZ' => 'E02005880',
        '9QA' => 'E02005880',
        '9QB' => 'E02005880',
        '9QD' => 'E02005880',
        '9QE' => 'E02005880',
        '9QF' => 'E02005880',
        '9QG' => 'E02005880',
        '9QH' => 'E02005880',
        '9QJ' => 'E02005880',
        '9QL' => 'E02005880',
        '9QN' => 'E02005880',
        '9QP' => 'E02005880',
        '9QQ' => 'E02005880',
        '9QR' => 'E02005880',
        '9QS' => 'E02005880',
        '9QT' => 'E02005880',
        '9QU' => 'E02005880',
        '9QW' => 'E02005880',
        '9QX' => 'E02005880',
        '9QY' => 'E02005848',
        '9QZ' => 'E02005880',
        '9RA' => 'E02005880',
        '9RD' => 'E02004051',
        '9RE' => 'E02004051',
        '9RF' => 'E02004051',
        '9RG' => 'E02004051',
        '9RH' => 'E02004051',
        '9RN' => 'E02004050',
        '9RP' => 'E02004050',
        '9RQ' => 'E02004051',
        '9RR' => 'E02004050',
        '9RS' => 'E02004050',
        '9RT' => 'E02004050',
        '9RU' => 'E02004050',
        '9RW' => 'E02004050',
        '9RX' => 'E02004050',
        '9RY' => 'E02004050',
        '9RZ' => 'E02004050',
        '9SA' => 'E02004050',
        '9SB' => 'E02005887',
        '9WW' => 'E02005883',
        '9WZ' => 'E02005883',
        '9XZ' => 'E02004051',
        '9YD' => 'E02005883',
        '9ZZ' => 'E02005887',
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
