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
final class EX23
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02003932',
        '0AB' => 'E02003932',
        '0AD' => 'E02003932',
        '0AE' => 'E02003932',
        '0AF' => 'E02003932',
        '0AG' => 'E02003932',
        '0AH' => 'E02003932',
        '0AJ' => 'E02003932',
        '0AL' => 'E02003932',
        '0AN' => 'E02003932',
        '0AP' => 'E02003932',
        '0AQ' => 'E02003932',
        '0AR' => 'E02003932',
        '0AS' => 'E02003932',
        '0AT' => 'E02003932',
        '0AU' => 'E02003932',
        '0AW' => 'E02003932',
        '0AX' => 'E02003932',
        '0AY' => 'E02003933',
        '0AZ' => 'E02003932',
        '0BA' => 'E02003932',
        '0BB' => 'E02003932',
        '0BD' => 'E02003933',
        '0BE' => 'E02003933',
        '0BG' => 'E02003933',
        '0BH' => 'E02003933',
        '0BJ' => 'E02003932',
        '0BL' => 'E02003932',
        '0BN' => 'E02003932',
        '0BP' => 'E02003932',
        '0BQ' => 'E02003934',
        '0BR' => 'E02003932',
        '0BS' => 'E02003932',
        '0BT' => 'E02003932',
        '0BU' => 'E02003932',
        '0BW' => 'E02003932',
        '0BX' => 'E02003932',
        '0BY' => 'E02003932',
        '0BZ' => 'E02003932',
        '0DA' => 'E02003931',
        '0DD' => 'E02003932',
        '0DE' => 'E02003932',
        '0DF' => 'E02003932',
        '0DG' => 'E02003932',
        '0DH' => 'E02003932',
        '0DJ' => 'E02003932',
        '0DL' => 'E02003932',
        '0DN' => 'E02003932',
        '0DP' => 'E02003932',
        '0DQ' => 'E02003932',
        '0DR' => 'E02003932',
        '0DS' => 'E02003932',
        '0DT' => 'E02003932',
        '0DU' => 'E02003932',
        '0DW' => 'E02003932',
        '0DX' => 'E02003932',
        '0DY' => 'E02003932',
        '0DZ' => 'E02003932',
        '0EA' => 'E02003932',
        '0EB' => 'E02003932',
        '0ED' => 'E02003932',
        '0EE' => 'E02003932',
        '0EF' => 'E02003932',
        '0EG' => 'E02003932',
        '0EH' => 'E02003932',
        '0EJ' => 'E02003932',
        '0EL' => 'E02003932',
        '0EN' => 'E02003932',
        '0EP' => 'E02003932',
        '0EQ' => 'E02003932',
        '0ER' => 'E02003932',
        '0ES' => 'E02003932',
        '0ET' => 'E02003932',
        '0EU' => 'E02003932',
        '0EW' => 'E02003932',
        '0EX' => 'E02003932',
        '0EY' => 'E02003932',
        '0EZ' => 'E02003932',
        '0FA' => 'E02003933',
        '0FB' => 'E02003932',
        '0FD' => 'E02003932',
        '0FE' => 'E02003932',
        '0FF' => 'E02003932',
        '0FG' => 'E02003932',
        '0FH' => 'E02003932',
        '0FJ' => 'E02003932',
        '0HB' => 'E02003932',
        '0HD' => 'E02003932',
        '0HE' => 'E02003932',
        '0HF' => 'E02003932',
        '0HG' => 'E02003932',
        '0HH' => 'E02003932',
        '0HJ' => 'E02003932',
        '0HL' => 'E02003932',
        '0HN' => 'E02003932',
        '0HP' => 'E02003932',
        '0HQ' => 'E02003932',
        '0HR' => 'E02003932',
        '0HS' => 'E02003932',
        '0HT' => 'E02003932',
        '0HU' => 'E02003932',
        '0HW' => 'E02003932',
        '0HX' => 'E02003932',
        '0HY' => 'E02003932',
        '0HZ' => 'E02003932',
        '0JA' => 'E02003931',
        '0JB' => 'E02003931',
        '0JD' => 'E02003932',
        '0JE' => 'E02003932',
        '0JG' => 'E02003933',
        '0JH' => 'E02003933',
        '0JJ' => 'E02003933',
        '0JL' => 'E02003933',
        '0JN' => 'E02003933',
        '0JP' => 'E02003933',
        '0JQ' => 'E02003933',
        '0JR' => 'E02003933',
        '0JS' => 'E02003933',
        '0JT' => 'E02003933',
        '0JW' => 'E02003933',
        '0JY' => 'E02003933',
        '0JZ' => 'E02003933',
        '0LA' => 'E02003933',
        '0LB' => 'E02003933',
        '0LD' => 'E02003933',
        '0LE' => 'E02003933',
        '0LF' => 'E02003933',
        '0LG' => 'E02003933',
        '0LH' => 'E02003933',
        '0LJ' => 'E02003933',
        '0LL' => 'E02003932',
        '0LP' => 'E02003931',
        '0LQ' => 'E02003933',
        '0LR' => 'E02003931',
        '0LS' => 'E02003931',
        '0LT' => 'E02003931',
        '0LU' => 'E02003931',
        '0LW' => 'E02003931',
        '0LX' => 'E02003931',
        '0LY' => 'E02003931',
        '0LZ' => 'E02003932',
        '0NA' => 'E02003932',
        '0NB' => 'E02003932',
        '0ND' => 'E02003932',
        '0NE' => 'E02003932',
        '0NF' => 'E02003933',
        '0NG' => 'E02003932',
        '0NH' => 'E02003932',
        '0NJ' => 'E02003933',
        '0NL' => 'E02003933',
        '0NN' => 'E02003933',
        '0NP' => 'E02003933',
        '0NQ' => 'E02003933',
        '0NR' => 'E02003933',
        '0NS' => 'E02003933',
        '0NT' => 'E02003933',
        '0NU' => 'E02003933',
        '0NW' => 'E02003933',
        '0NX' => 'E02003933',
        '0NY' => 'E02003933',
        '0NZ' => 'E02003932',
        '0PA' => 'E02003933',
        '0PB' => 'E02003933',
        '0PD' => 'E02003933',
        '0PE' => 'E02003933',
        '0PF' => 'E02003933',
        '0PG' => 'E02003933',
        '0PH' => 'E02003933',
        '0PJ' => 'E02003932',
        '0PL' => 'E02003932',
        '0PP' => 'E02003932',
        '0PR' => 'E02003931',
        '0QA' => 'E02003932',
        '0QB' => 'E02003931',
        '0RA' => 'E02003931',
        '0RB' => 'E02003931',
        '0RD' => 'E02003931',
        '0WA' => 'E02003931',
        '0WB' => 'E02003931',
        '0WD' => 'E02003931',
        '0WE' => 'E02003931',
        '0WX' => 'E02003931',
        '0WY' => 'E02003931',
        '0WZ' => 'E02003931',
        '0YA' => 'E02003932',
        '0YH' => 'E02003931',
        '0YJ' => 'E02003931',
        '0YL' => 'E02003931',
        '0YN' => 'E02003932',
        '0YP' => 'E02003931',
        '0YQ' => 'E02003932',
        '0YR' => 'E02003931',
        '0YS' => 'E02003932',
        '0YT' => 'E02003932',
        '0YU' => 'E02003932',
        '0YW' => 'E02003932',
        '0YX' => 'E02003932',
        '0YY' => 'E02003932',
        '0ZN' => 'E02003931',
        '0ZU' => 'E02003931',
        '0ZW' => 'E02003931',
        '0ZX' => 'E02003931',
        '3AD' => 'E02003931',
        '3AE' => 'E02003931',
        '3AF' => 'E02003931',
        '3AG' => 'E02003931',
        '3AH' => 'E02003931',
        '3AJ' => 'E02003931',
        '3AL' => 'E02003931',
        '3AN' => 'E02003931',
        '3AP' => 'E02003931',
        '3AQ' => 'E02003931',
        '3AR' => 'E02003931',
        '3AS' => 'E02003931',
        '3AT' => 'E02003931',
        '3AU' => 'E02003931',
        '3AW' => 'E02003931',
        '3AX' => 'E02003931',
        '3AY' => 'E02003931',
        '3AZ' => 'E02003931',
        '3BA' => 'E02003931',
        '3BB' => 'E02003931',
        '3BD' => 'E02003931',
        '8AA' => 'E02003931',
        '8AB' => 'E02003931',
        '8AD' => 'E02003931',
        '8AE' => 'E02003931',
        '8AF' => 'E02003931',
        '8AG' => 'E02003931',
        '8AH' => 'E02003931',
        '8AJ' => 'E02003931',
        '8AL' => 'E02003931',
        '8AN' => 'E02003931',
        '8AP' => 'E02003931',
        '8AQ' => 'E02003931',
        '8AR' => 'E02003931',
        '8AS' => 'E02003931',
        '8AT' => 'E02003931',
        '8AU' => 'E02003931',
        '8AW' => 'E02003931',
        '8AX' => 'E02003931',
        '8AY' => 'E02003931',
        '8AZ' => 'E02003931',
        '8BA' => 'E02003931',
        '8BB' => 'E02003931',
        '8BD' => 'E02003931',
        '8BE' => 'E02003931',
        '8BG' => 'E02003931',
        '8BH' => 'E02003931',
        '8BJ' => 'E02003931',
        '8BL' => 'E02003931',
        '8BN' => 'E02003931',
        '8BP' => 'E02003931',
        '8BQ' => 'E02003931',
        '8BR' => 'E02003931',
        '8BS' => 'E02003931',
        '8BT' => 'E02003931',
        '8BU' => 'E02003931',
        '8BW' => 'E02003931',
        '8BX' => 'E02003931',
        '8BY' => 'E02003931',
        '8BZ' => 'E02003931',
        '8DA' => 'E02003931',
        '8DB' => 'E02003931',
        '8DD' => 'E02003931',
        '8DE' => 'E02003931',
        '8DF' => 'E02003931',
        '8DG' => 'E02003931',
        '8DH' => 'E02003931',
        '8DJ' => 'E02003931',
        '8DL' => 'E02003931',
        '8DN' => 'E02003931',
        '8DP' => 'E02003931',
        '8DQ' => 'E02003931',
        '8DR' => 'E02003931',
        '8DS' => 'E02003931',
        '8DT' => 'E02003931',
        '8DU' => 'E02003931',
        '8DW' => 'E02003931',
        '8DX' => 'E02003931',
        '8DY' => 'E02003931',
        '8DZ' => 'E02003931',
        '8EA' => 'E02003931',
        '8EB' => 'E02003931',
        '8ED' => 'E02003931',
        '8EE' => 'E02003931',
        '8EF' => 'E02003931',
        '8EG' => 'E02003931',
        '8EH' => 'E02003931',
        '8EJ' => 'E02003931',
        '8EL' => 'E02003931',
        '8EN' => 'E02003931',
        '8EP' => 'E02003931',
        '8EQ' => 'E02003931',
        '8ER' => 'E02003931',
        '8ES' => 'E02003931',
        '8ET' => 'E02003931',
        '8EU' => 'E02003931',
        '8EW' => 'E02003931',
        '8EX' => 'E02003931',
        '8EY' => 'E02003931',
        '8EZ' => 'E02003931',
        '8FA' => 'E02003931',
        '8FB' => 'E02003931',
        '8FD' => 'E02003931',
        '8FE' => 'E02003931',
        '8FF' => 'E02003931',
        '8FG' => 'E02003931',
        '8FH' => 'E02003931',
        '8FJ' => 'E02003931',
        '8FL' => 'E02003931',
        '8FP' => 'E02003931',
        '8FQ' => 'E02003931',
        '8FS' => 'E02003931',
        '8FX' => 'E02003931',
        '8FY' => 'E02003931',
        '8FZ' => 'E02003931',
        '8GA' => 'E02003931',
        '8GB' => 'E02003931',
        '8GD' => 'E02003931',
        '8GE' => 'E02003931',
        '8GF' => 'E02003931',
        '8GG' => 'E02003931',
        '8GH' => 'E02003931',
        '8GJ' => 'E02003931',
        '8GL' => 'E02003931',
        '8GN' => 'E02003931',
        '8GQ' => 'E02003931',
        '8GR' => 'E02003931',
        '8GS' => 'E02003931',
        '8GT' => 'E02003931',
        '8GU' => 'E02003931',
        '8GW' => 'E02003931',
        '8GX' => 'E02003931',
        '8GY' => 'E02003931',
        '8HA' => 'E02003931',
        '8HB' => 'E02003931',
        '8HD' => 'E02003931',
        '8HE' => 'E02003931',
        '8HF' => 'E02003931',
        '8HG' => 'E02003931',
        '8HH' => 'E02003931',
        '8HJ' => 'E02003931',
        '8HL' => 'E02003931',
        '8HN' => 'E02003931',
        '8HP' => 'E02003931',
        '8HQ' => 'E02003931',
        '8HR' => 'E02003931',
        '8HS' => 'E02003931',
        '8HT' => 'E02003931',
        '8HU' => 'E02003931',
        '8HW' => 'E02003931',
        '8HX' => 'E02003931',
        '8HY' => 'E02003931',
        '8HZ' => 'E02003931',
        '8JA' => 'E02003931',
        '8JB' => 'E02003931',
        '8JD' => 'E02003931',
        '8JE' => 'E02003931',
        '8JF' => 'E02003931',
        '8JG' => 'E02003931',
        '8JH' => 'E02003931',
        '8JJ' => 'E02003931',
        '8JL' => 'E02003931',
        '8JN' => 'E02003931',
        '8JP' => 'E02003931',
        '8JQ' => 'E02003931',
        '8JR' => 'E02003931',
        '8JS' => 'E02003931',
        '8JT' => 'E02003931',
        '8JU' => 'E02003931',
        '8JW' => 'E02003931',
        '8JX' => 'E02003931',
        '8JY' => 'E02003931',
        '8JZ' => 'E02003931',
        '8LA' => 'E02003931',
        '8LB' => 'E02003931',
        '8LD' => 'E02003931',
        '8LE' => 'E02003931',
        '8LF' => 'E02003931',
        '8LG' => 'E02003931',
        '8LH' => 'E02003931',
        '8LJ' => 'E02003931',
        '8LL' => 'E02003931',
        '8LN' => 'E02003931',
        '8LP' => 'E02003931',
        '8LQ' => 'E02003931',
        '8LR' => 'E02003931',
        '8LS' => 'E02003931',
        '8LT' => 'E02003931',
        '8LU' => 'E02003931',
        '8LW' => 'E02003931',
        '8LX' => 'E02003931',
        '8LY' => 'E02003931',
        '8LZ' => 'E02003931',
        '8NA' => 'E02003931',
        '8NB' => 'E02003931',
        '8ND' => 'E02003931',
        '8NE' => 'E02003931',
        '8NF' => 'E02003931',
        '8NG' => 'E02003931',
        '8NH' => 'E02003931',
        '8NJ' => 'E02003931',
        '8NL' => 'E02003931',
        '8NN' => 'E02003931',
        '8NP' => 'E02003931',
        '8NQ' => 'E02003931',
        '8NR' => 'E02003931',
        '8NS' => 'E02003931',
        '8NT' => 'E02003931',
        '8NU' => 'E02003931',
        '8NW' => 'E02003931',
        '8NX' => 'E02003931',
        '8NY' => 'E02003931',
        '8NZ' => 'E02003931',
        '8PA' => 'E02003931',
        '8PB' => 'E02003931',
        '8PD' => 'E02003931',
        '8PE' => 'E02003931',
        '8PF' => 'E02003931',
        '8PG' => 'E02003931',
        '8PH' => 'E02003931',
        '8PJ' => 'E02003931',
        '8PL' => 'E02003931',
        '8PN' => 'E02003931',
        '8PP' => 'E02003931',
        '8PQ' => 'E02003931',
        '8PR' => 'E02003931',
        '8PS' => 'E02003931',
        '8PT' => 'E02003931',
        '8PU' => 'E02003931',
        '8PW' => 'E02003931',
        '8PX' => 'E02003931',
        '8PY' => 'E02003931',
        '8PZ' => 'E02003931',
        '8QA' => 'E02003931',
        '8QB' => 'E02003931',
        '8QD' => 'E02003931',
        '8QE' => 'E02003931',
        '8QF' => 'E02003931',
        '8QG' => 'E02003931',
        '8QH' => 'E02003931',
        '8QJ' => 'E02003931',
        '8QL' => 'E02003931',
        '8QN' => 'E02003931',
        '8QP' => 'E02003931',
        '8QQ' => 'E02003931',
        '8QR' => 'E02003931',
        '8QS' => 'E02003931',
        '8QT' => 'E02003931',
        '8QU' => 'E02003931',
        '8QW' => 'E02003931',
        '8QX' => 'E02003931',
        '8QY' => 'E02003931',
        '8QZ' => 'E02003931',
        '8RA' => 'E02003931',
        '8RB' => 'E02003931',
        '8RD' => 'E02003931',
        '8RE' => 'E02003931',
        '8RF' => 'E02003931',
        '8RG' => 'E02003931',
        '8RH' => 'E02003931',
        '8RJ' => 'E02003931',
        '8RL' => 'E02003931',
        '8RN' => 'E02003931',
        '8RP' => 'E02003931',
        '8RQ' => 'E02003931',
        '8RR' => 'E02003931',
        '8RS' => 'E02003931',
        '8RT' => 'E02003931',
        '8RU' => 'E02003931',
        '8RW' => 'E02003931',
        '8RX' => 'E02003931',
        '8RY' => 'E02003931',
        '8RZ' => 'E02003931',
        '8SA' => 'E02003931',
        '8SB' => 'E02003931',
        '8SD' => 'E02003931',
        '8SE' => 'E02003931',
        '8SF' => 'E02003931',
        '8SG' => 'E02003931',
        '8SH' => 'E02003931',
        '8SJ' => 'E02003931',
        '8SL' => 'E02003931',
        '8SN' => 'E02003931',
        '8SP' => 'E02003931',
        '8SQ' => 'E02003931',
        '8SR' => 'E02003931',
        '8SS' => 'E02003931',
        '8ST' => 'E02003931',
        '8SU' => 'E02003931',
        '8SW' => 'E02003931',
        '8SX' => 'E02003931',
        '8SY' => 'E02003931',
        '8TA' => 'E02003931',
        '8TB' => 'E02003931',
        '8TD' => 'E02003931',
        '8TF' => 'E02003931',
        '8TG' => 'E02003931',
        '8TH' => 'E02003931',
        '8TJ' => 'E02003931',
        '8TQ' => 'E02003931',
        '8TR' => 'E02003931',
        '8TS' => 'E02003931',
        '8UA' => 'E02003931',
        '8UB' => 'E02003931',
        '8UD' => 'E02003931',
        '8UX' => 'E02003931',
        '8UY' => 'E02003931',
        '8UZ' => 'E02003931',
        '8WB' => 'E02003931',
        '8WD' => 'E02003931',
        '8WE' => 'E02003931',
        '8WF' => 'E02003931',
        '8WG' => 'E02003931',
        '8WH' => 'E02003931',
        '8WR' => 'E02003931',
        '8WS' => 'E02003931',
        '8WT' => 'E02003931',
        '8WU' => 'E02003931',
        '8WW' => 'E02003931',
        '8WX' => 'E02003931',
        '8WY' => 'E02003931',
        '8WZ' => 'E02003931',
        '8XQ' => 'E02003931',
        '8YG' => 'E02003931',
        '8YH' => 'E02003931',
        '8YJ' => 'E02003931',
        '8YL' => 'E02003931',
        '8YN' => 'E02003931',
        '8YP' => 'E02003931',
        '8YR' => 'E02003931',
        '8YS' => 'E02003931',
        '8YT' => 'E02003931',
        '8YU' => 'E02003931',
        '8YW' => 'E02003931',
        '8YX' => 'E02003931',
        '8YY' => 'E02003931',
        '8YZ' => 'E02003931',
        '8ZQ' => 'E02003931',
        '8ZR' => 'E02003931',
        '8ZX' => 'E02003931',
        '9AA' => 'E02003931',
        '9AB' => 'E02003931',
        '9AD' => 'E02003931',
        '9AE' => 'E02003931',
        '9AF' => 'E02003931',
        '9AG' => 'E02003931',
        '9AH' => 'E02003931',
        '9AJ' => 'E02003931',
        '9AL' => 'E02003931',
        '9AN' => 'E02003931',
        '9AP' => 'E02003931',
        '9AQ' => 'E02003931',
        '9AR' => 'E02003931',
        '9AS' => 'E02003931',
        '9AT' => 'E02003931',
        '9AU' => 'E02003931',
        '9AW' => 'E02003931',
        '9AX' => 'E02003931',
        '9AY' => 'E02003931',
        '9AZ' => 'E02003931',
        '9BA' => 'E02003931',
        '9BB' => 'E02003931',
        '9BD' => 'E02003931',
        '9BE' => 'E02003931',
        '9BG' => 'E02003931',
        '9BH' => 'E02003931',
        '9BJ' => 'E02003931',
        '9BL' => 'E02003931',
        '9BN' => 'E02003931',
        '9BP' => 'E02003931',
        '9BQ' => 'E02003931',
        '9BR' => 'E02003931',
        '9BS' => 'E02003931',
        '9BT' => 'E02003931',
        '9BU' => 'E02003931',
        '9BW' => 'E02003931',
        '9BX' => 'E02003931',
        '9BY' => 'E02003931',
        '9BZ' => 'E02003931',
        '9DA' => 'E02003931',
        '9DB' => 'E02003931',
        '9DD' => 'E02003931',
        '9DE' => 'E02003931',
        '9DF' => 'E02003931',
        '9DG' => 'E02003931',
        '9DH' => 'E02003931',
        '9DJ' => 'E02003931',
        '9DL' => 'E02003931',
        '9DN' => 'E02003931',
        '9DP' => 'E02003931',
        '9DQ' => 'E02003931',
        '9DR' => 'E02003931',
        '9DS' => 'E02003931',
        '9DT' => 'E02003931',
        '9DU' => 'E02003931',
        '9DW' => 'E02003931',
        '9DX' => 'E02003931',
        '9DY' => 'E02003931',
        '9DZ' => 'E02003931',
        '9EA' => 'E02003932',
        '9EB' => 'E02003931',
        '9ED' => 'E02003931',
        '9EE' => 'E02003931',
        '9EF' => 'E02003931',
        '9EG' => 'E02003932',
        '9EH' => 'E02003931',
        '9EJ' => 'E02003931',
        '9EL' => 'E02003931',
        '9EN' => 'E02003931',
        '9EP' => 'E02003931',
        '9EQ' => 'E02003931',
        '9ER' => 'E02003931',
        '9ES' => 'E02003931',
        '9ET' => 'E02003931',
        '9EU' => 'E02003931',
        '9EW' => 'E02003931',
        '9EX' => 'E02003931',
        '9EY' => 'E02003931',
        '9EZ' => 'E02003931',
        '9FA' => 'E02003932',
        '9FB' => 'E02003931',
        '9FD' => 'E02003931',
        '9FE' => 'E02003931',
        '9FF' => 'E02003932',
        '9FG' => 'E02003931',
        '9FH' => 'E02003932',
        '9FJ' => 'E02003932',
        '9FL' => 'E02003932',
        '9HA' => 'E02003931',
        '9HB' => 'E02003931',
        '9HD' => 'E02003931',
        '9HE' => 'E02003931',
        '9HF' => 'E02003931',
        '9HG' => 'E02003931',
        '9HH' => 'E02003931',
        '9HJ' => 'E02003931',
        '9HL' => 'E02003931',
        '9HN' => 'E02003932',
        '9HP' => 'E02003932',
        '9HQ' => 'E02003931',
        '9HR' => 'E02003932',
        '9HS' => 'E02003932',
        '9HT' => 'E02003932',
        '9HU' => 'E02003932',
        '9HW' => 'E02003932',
        '9HX' => 'E02003932',
        '9HY' => 'E02003932',
        '9HZ' => 'E02003932',
        '9JA' => 'E02003932',
        '9JB' => 'E02003932',
        '9JD' => 'E02003932',
        '9JE' => 'E02003932',
        '9JF' => 'E02003932',
        '9JG' => 'E02003932',
        '9JH' => 'E02003932',
        '9JJ' => 'E02003932',
        '9JL' => 'E02003932',
        '9JN' => 'E02003932',
        '9JP' => 'E02003932',
        '9JQ' => 'E02003932',
        '9JR' => 'E02003932',
        '9JS' => 'E02003932',
        '9JT' => 'E02003931',
        '9JU' => 'E02003932',
        '9JW' => 'E02003932',
        '9JX' => 'E02003932',
        '9JY' => 'E02003931',
        '9JZ' => 'E02003931',
        '9LA' => 'E02003931',
        '9LB' => 'E02003931',
        '9LD' => 'E02003932',
        '9LE' => 'E02003931',
        '9LF' => 'E02003932',
        '9LG' => 'E02003932',
        '9LH' => 'E02003932',
        '9LJ' => 'E02003932',
        '9LL' => 'E02003932',
        '9LN' => 'E02003932',
        '9LP' => 'E02003932',
        '9LQ' => 'E02003932',
        '9LR' => 'E02003932',
        '9LS' => 'E02003932',
        '9LT' => 'E02003932',
        '9LU' => 'E02003932',
        '9LW' => 'E02003932',
        '9LX' => 'E02003932',
        '9LY' => 'E02003932',
        '9LZ' => 'E02003932',
        '9NA' => 'E02003932',
        '9NB' => 'E02003931',
        '9ND' => 'E02003931',
        '9NE' => 'E02003931',
        '9NF' => 'E02003931',
        '9NG' => 'E02003932',
        '9NH' => 'E02003932',
        '9NJ' => 'E02003932',
        '9NL' => 'E02003932',
        '9NN' => 'E02003932',
        '9NP' => 'E02003932',
        '9NQ' => 'E02003932',
        '9NR' => 'E02003931',
        '9NS' => 'E02003931',
        '9NT' => 'E02003932',
        '9NW' => 'E02003932',
        '9PA' => 'E02003932',
        '9PB' => 'E02003932',
        '9PD' => 'E02003932',
        '9PE' => 'E02003932',
        '9PF' => 'E02003932',
        '9PG' => 'E02003932',
        '9PH' => 'E02003932',
        '9PJ' => 'E02003932',
        '9PL' => 'E02003932',
        '9PN' => 'E02003932',
        '9PP' => 'E02003932',
        '9PQ' => 'E02003932',
        '9PR' => 'E02003932',
        '9PS' => 'E02003932',
        '9PT' => 'E02004227',
        '9PU' => 'E02004227',
        '9PW' => 'E02003932',
        '9PX' => 'E02003932',
        '9PY' => 'E02003932',
        '9PZ' => 'E02003932',
        '9QA' => 'E02003932',
        '9QE' => 'E02003932',
        '9QF' => 'E02003932',
        '9QG' => 'E02003932',
        '9QH' => 'E02003932',
        '9QJ' => 'E02003932',
        '9QL' => 'E02003932',
        '9QN' => 'E02003932',
        '9QP' => 'E02003932',
        '9QQ' => 'E02003932',
        '9QR' => 'E02003932',
        '9QS' => 'E02003932',
        '9QT' => 'E02003932',
        '9QU' => 'E02003932',
        '9QW' => 'E02003932',
        '9QX' => 'E02003932',
        '9QY' => 'E02003932',
        '9QZ' => 'E02003932',
        '9RB' => 'E02003932',
        '9RD' => 'E02003932',
        '9RE' => 'E02003932',
        '9RF' => 'E02003932',
        '9RG' => 'E02003932',
        '9RH' => 'E02003932',
        '9RJ' => 'E02003932',
        '9RL' => 'E02003932',
        '9RN' => 'E02003932',
        '9RP' => 'E02003932',
        '9RQ' => 'E02003932',
        '9RT' => 'E02003932',
        '9RU' => 'E02003932',
        '9RW' => 'E02003932',
        '9RX' => 'E02003932',
        '9RY' => 'E02003932',
        '9RZ' => 'E02003932',
        '9SA' => 'E02003932',
        '9SB' => 'E02003932',
        '9SD' => 'E02003932',
        '9SF' => 'E02003932',
        '9SG' => 'E02003932',
        '9SH' => 'E02003932',
        '9SJ' => 'E02003932',
        '9SL' => 'E02003932',
        '9SN' => 'E02003932',
        '9SP' => 'E02003932',
        '9SQ' => 'E02003932',
        '9SR' => 'E02003932',
        '9SS' => 'E02003932',
        '9ST' => 'E02003932',
        '9SU' => 'E02003932',
        '9SW' => 'E02003932',
        '9SX' => 'E02003932',
        '9TA' => 'E02003931',
        '9TD' => 'E02003932',
        '9TE' => 'E02003932',
        '9TF' => 'E02003931',
        '9TG' => 'E02003931',
        '9TH' => 'E02003932',
        '9TJ' => 'E02003932',
        '9TL' => 'E02003932',
        '9WA' => 'E02003931',
        '9WB' => 'E02003931',
        '9WW' => 'E02003931',
        '9WX' => 'E02003931',
        '9WY' => 'E02003931',
        '9WZ' => 'E02003931',
        '9YA' => 'E02003931',
        '9YB' => 'E02003931',
        '9YD' => 'E02003931',
        '9YE' => 'E02003931',
        '9YF' => 'E02003932',
        '9YG' => 'E02003932',
        '9YH' => 'E02003932',
        '9YJ' => 'E02003932',
        '9YL' => 'E02003932',
        '9YN' => 'E02003932',
        '9YP' => 'E02003931',
        '9YQ' => 'E02003932',
        '9YR' => 'E02003931',
        '9YS' => 'E02003932',
        '9YT' => 'E02003932',
        '9YU' => 'E02003932',
        '9YW' => 'E02003931',
        '9YX' => 'E02003932',
        '9ZX' => 'E02003931',
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
