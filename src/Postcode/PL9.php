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
final class PL9
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02004197',
        '0AB' => 'E02004197',
        '0AD' => 'E02004197',
        '0AE' => 'E02004197',
        '0AF' => 'E02004197',
        '0AG' => 'E02004197',
        '0AH' => 'E02004197',
        '0AJ' => 'E02004197',
        '0AL' => 'E02004197',
        '0AN' => 'E02004197',
        '0AP' => 'E02004197',
        '0AQ' => 'E02004197',
        '0AR' => 'E02004197',
        '0AS' => 'E02004197',
        '0AT' => 'E02004197',
        '0AU' => 'E02004197',
        '0AW' => 'E02004197',
        '0AX' => 'E02004197',
        '0AY' => 'E02004197',
        '0AZ' => 'E02004197',
        '0BA' => 'E02004197',
        '0BB' => 'E02004197',
        '0BD' => 'E02004197',
        '0BE' => 'E02004197',
        '0BG' => 'E02004197',
        '0BH' => 'E02004197',
        '0BJ' => 'E02004197',
        '0BL' => 'E02004197',
        '0BN' => 'E02004197',
        '0BP' => 'E02004197',
        '0BQ' => 'E02004197',
        '0BS' => 'E02004197',
        '0BT' => 'E02004197',
        '0BU' => 'E02004197',
        '0BW' => 'E02004197',
        '0BX' => 'E02004197',
        '0BY' => 'E02004197',
        '0BZ' => 'E02004197',
        '0DA' => 'E02004197',
        '0DB' => 'E02004197',
        '0DD' => 'E02004197',
        '0DE' => 'E02004197',
        '0DF' => 'E02004197',
        '0DG' => 'E02004197',
        '0DH' => 'E02004197',
        '0DJ' => 'E02004197',
        '0DL' => 'E02004197',
        '0DN' => 'E02004197',
        '0DP' => 'E02004197',
        '0DQ' => 'E02004197',
        '0DR' => 'E02004197',
        '0DS' => 'E02004197',
        '0DT' => 'E02004197',
        '0DU' => 'E02004197',
        '0DW' => 'E02004197',
        '0DX' => 'E02004197',
        '0DY' => 'E02004197',
        '0DZ' => 'E02004197',
        '0EA' => 'E02004197',
        '0EB' => 'E02004197',
        '0ED' => 'E02004197',
        '0EE' => 'E02004197',
        '0EF' => 'E02004197',
        '0EG' => 'E02004197',
        '0EH' => 'E02004197',
        '0EJ' => 'E02004197',
        '0EL' => 'E02004197',
        '0EN' => 'E02004197',
        '0EP' => 'E02004197',
        '0EQ' => 'E02004197',
        '0ER' => 'E02004197',
        '0ES' => 'E02004197',
        '0ET' => 'E02004197',
        '0EU' => 'E02004197',
        '0EW' => 'E02004197',
        '0EX' => 'E02004197',
        '0EY' => 'E02004197',
        '0EZ' => 'E02004197',
        '0FA' => 'E02004197',
        '0FB' => 'E02004197',
        '0FD' => 'E02004197',
        '0HA' => 'E02004197',
        '0HB' => 'E02004197',
        '0HD' => 'E02004197',
        '0HE' => 'E02004197',
        '0HF' => 'E02004197',
        '0HG' => 'E02004197',
        '0HH' => 'E02004197',
        '0HJ' => 'E02004197',
        '0HL' => 'E02004197',
        '0HN' => 'E02004197',
        '0HP' => 'E02004197',
        '0HQ' => 'E02004197',
        '0HR' => 'E02004197',
        '0HS' => 'E02004197',
        '0HT' => 'E02004197',
        '0HU' => 'E02004197',
        '0HW' => 'E02004197',
        '0HX' => 'E02004197',
        '0HY' => 'E02004197',
        '0HZ' => 'E02004197',
        '0JA' => 'E02004197',
        '0JB' => 'E02004197',
        '0JD' => 'E02004197',
        '0JE' => 'E02004197',
        '0JF' => 'E02004197',
        '0JG' => 'E02004197',
        '0JH' => 'E02004197',
        '0JJ' => 'E02004197',
        '0JL' => 'E02004197',
        '0JN' => 'E02004197',
        '0JP' => 'E02004197',
        '0JQ' => 'E02004197',
        '0JR' => 'E02004197',
        '0JS' => 'E02004197',
        '0JT' => 'E02004197',
        '0JU' => 'E02004197',
        '0JW' => 'E02004197',
        '0JX' => 'E02004197',
        '0JY' => 'E02004197',
        '0JZ' => 'E02004197',
        '0LA' => 'E02004197',
        '0LB' => 'E02004197',
        '0LD' => 'E02004197',
        '0LE' => 'E02004197',
        '0LF' => 'E02004197',
        '0LG' => 'E02004197',
        '0LH' => 'E02004197',
        '0LJ' => 'E02004197',
        '0LQ' => 'E02004197',
        '0WA' => 'E02003152',
        '0WD' => 'E02004197',
        '0WT' => 'E02003152',
        '0WU' => 'E02003152',
        '0WW' => 'E02003152',
        '0WX' => 'E02003152',
        '0WY' => 'E02003152',
        '0WZ' => 'E02003152',
        '0XJ' => 'E02003152',
        '0YJ' => 'E02003152',
        '0YL' => 'E02003152',
        '0YN' => 'E02003152',
        '0YP' => 'E02003152',
        '0YQ' => 'E02003152',
        '0YR' => 'E02003152',
        '0YS' => 'E02003152',
        '0YT' => 'E02004197',
        '0YU' => 'E02003152',
        '0YW' => 'E02003152',
        '0YX' => 'E02003152',
        '0YY' => 'E02003152',
        '7AA' => 'E02003152',
        '7AB' => 'E02003152',
        '7AD' => 'E02003152',
        '7AE' => 'E02003152',
        '7AF' => 'E02003152',
        '7AG' => 'E02003152',
        '7AH' => 'E02003152',
        '7AJ' => 'E02003152',
        '7AL' => 'E02003152',
        '7AN' => 'E02003152',
        '7AP' => 'E02003152',
        '7AQ' => 'E02003152',
        '7AR' => 'E02003152',
        '7AS' => 'E02003152',
        '7AT' => 'E02003152',
        '7AU' => 'E02003152',
        '7AW' => 'E02003152',
        '7AX' => 'E02003152',
        '7AY' => 'E02003153',
        '7AZ' => 'E02003152',
        '7BA' => 'E02003152',
        '7BB' => 'E02003152',
        '7BD' => 'E02003152',
        '7BE' => 'E02003152',
        '7BG' => 'E02003152',
        '7BH' => 'E02003152',
        '7BJ' => 'E02003153',
        '7BL' => 'E02003152',
        '7BN' => 'E02003152',
        '7BP' => 'E02003152',
        '7BQ' => 'E02003153',
        '7BS' => 'E02003152',
        '7BT' => 'E02003152',
        '7BU' => 'E02003153',
        '7BW' => 'E02003152',
        '7BX' => 'E02003153',
        '7BY' => 'E02003153',
        '7BZ' => 'E02003153',
        '7DA' => 'E02003153',
        '7DB' => 'E02003153',
        '7DD' => 'E02003153',
        '7DE' => 'E02003153',
        '7DF' => 'E02003153',
        '7DG' => 'E02003152',
        '7DH' => 'E02003152',
        '7DJ' => 'E02003152',
        '7DL' => 'E02003152',
        '7DN' => 'E02003152',
        '7DP' => 'E02003153',
        '7DQ' => 'E02003152',
        '7DR' => 'E02003152',
        '7DS' => 'E02003152',
        '7DT' => 'E02003152',
        '7DU' => 'E02003152',
        '7DW' => 'E02003153',
        '7DX' => 'E02003152',
        '7DY' => 'E02003152',
        '7DZ' => 'E02003153',
        '7EA' => 'E02003152',
        '7EB' => 'E02003152',
        '7ED' => 'E02003151',
        '7EE' => 'E02003153',
        '7EF' => 'E02003151',
        '7EG' => 'E02003151',
        '7EH' => 'E02003152',
        '7EJ' => 'E02003151',
        '7EL' => 'E02003152',
        '7EN' => 'E02003152',
        '7EP' => 'E02003153',
        '7EQ' => 'E02003152',
        '7ER' => 'E02003152',
        '7ES' => 'E02003153',
        '7ET' => 'E02003152',
        '7EU' => 'E02003152',
        '7EW' => 'E02003153',
        '7EX' => 'E02003152',
        '7EY' => 'E02003152',
        '7EZ' => 'E02003152',
        '7FA' => 'E02003152',
        '7FB' => 'E02003152',
        '7FD' => 'E02003152',
        '7FE' => 'E02003152',
        '7FF' => 'E02003152',
        '7FG' => 'E02003152',
        '7FH' => 'E02003152',
        '7FJ' => 'E02003152',
        '7FL' => 'E02003152',
        '7FN' => 'E02003152',
        '7FQ' => 'E02003152',
        '7FR' => 'E02003152',
        '7FS' => 'E02003152',
        '7FT' => 'E02003152',
        '7FU' => 'E02003152',
        '7FW' => 'E02003152',
        '7FX' => 'E02003152',
        '7FY' => 'E02003152',
        '7FZ' => 'E02003152',
        '7GA' => 'E02003152',
        '7GB' => 'E02003152',
        '7GD' => 'E02003152',
        '7GE' => 'E02003152',
        '7GF' => 'E02003152',
        '7GH' => 'E02003152',
        '7GL' => 'E02003152',
        '7HA' => 'E02003152',
        '7HB' => 'E02003152',
        '7HD' => 'E02003152',
        '7HE' => 'E02003152',
        '7HF' => 'E02003152',
        '7HG' => 'E02003152',
        '7HH' => 'E02003152',
        '7HJ' => 'E02003152',
        '7HN' => 'E02003152',
        '7HP' => 'E02003152',
        '7HQ' => 'E02003152',
        '7HR' => 'E02003152',
        '7HS' => 'E02003152',
        '7HT' => 'E02003152',
        '7HU' => 'E02003152',
        '7HW' => 'E02003152',
        '7HX' => 'E02003152',
        '7HY' => 'E02003152',
        '7HZ' => 'E02003152',
        '7JA' => 'E02003152',
        '7JB' => 'E02003152',
        '7JD' => 'E02003152',
        '7JE' => 'E02003152',
        '7JF' => 'E02003152',
        '7JG' => 'E02003152',
        '7JH' => 'E02003152',
        '7JJ' => 'E02003152',
        '7JL' => 'E02003152',
        '7JN' => 'E02003152',
        '7JP' => 'E02003152',
        '7JQ' => 'E02003152',
        '7JR' => 'E02003152',
        '7JS' => 'E02003152',
        '7JT' => 'E02003152',
        '7JU' => 'E02003152',
        '7JW' => 'E02003152',
        '7JX' => 'E02003152',
        '7JY' => 'E02003152',
        '7JZ' => 'E02003152',
        '7LA' => 'E02003152',
        '7LB' => 'E02003152',
        '7LD' => 'E02003152',
        '7LE' => 'E02003152',
        '7LF' => 'E02003152',
        '7LG' => 'E02003152',
        '7LH' => 'E02003152',
        '7LJ' => 'E02003152',
        '7LL' => 'E02003152',
        '7LN' => 'E02003152',
        '7LP' => 'E02003152',
        '7LQ' => 'E02003152',
        '7LR' => 'E02003152',
        '7LS' => 'E02003152',
        '7LT' => 'E02003152',
        '7LU' => 'E02003152',
        '7LW' => 'E02003152',
        '7LX' => 'E02003152',
        '7LY' => 'E02003152',
        '7LZ' => 'E02003152',
        '7NA' => 'E02003152',
        '7NB' => 'E02003152',
        '7ND' => 'E02003152',
        '7NE' => 'E02003152',
        '7NF' => 'E02003152',
        '7NG' => 'E02003152',
        '7NH' => 'E02003152',
        '7NJ' => 'E02003152',
        '7NL' => 'E02003152',
        '7NN' => 'E02003152',
        '7NP' => 'E02003152',
        '7NQ' => 'E02003152',
        '7NR' => 'E02003152',
        '7NT' => 'E02003152',
        '7NU' => 'E02003152',
        '7NW' => 'E02003152',
        '7NX' => 'E02003152',
        '7NY' => 'E02003152',
        '7NZ' => 'E02003152',
        '7PA' => 'E02003152',
        '7PB' => 'E02003152',
        '7PD' => 'E02003152',
        '7PE' => 'E02003152',
        '7PF' => 'E02003152',
        '7PG' => 'E02003152',
        '7PH' => 'E02003152',
        '7PJ' => 'E02003152',
        '7PL' => 'E02003152',
        '7PN' => 'E02003152',
        '7PP' => 'E02003152',
        '7PQ' => 'E02003152',
        '7PR' => 'E02003152',
        '7PS' => 'E02003152',
        '7PT' => 'E02003152',
        '7PU' => 'E02003152',
        '7PW' => 'E02003152',
        '7PX' => 'E02003152',
        '7PY' => 'E02003152',
        '7PZ' => 'E02003152',
        '7QA' => 'E02003152',
        '7QB' => 'E02003152',
        '7QD' => 'E02003152',
        '7QE' => 'E02003152',
        '7QF' => 'E02003152',
        '7QJ' => 'E02003152',
        '7QL' => 'E02003152',
        '7QN' => 'E02003152',
        '7QP' => 'E02003152',
        '7QR' => 'E02003152',
        '7QS' => 'E02003152',
        '7QT' => 'E02003152',
        '7QU' => 'E02003152',
        '7QW' => 'E02003152',
        '7QX' => 'E02003152',
        '7QY' => 'E02003152',
        '7QZ' => 'E02003152',
        '7RA' => 'E02003152',
        '7RB' => 'E02003152',
        '7RD' => 'E02003152',
        '7RE' => 'E02003152',
        '7RF' => 'E02003152',
        '7RG' => 'E02003152',
        '7RH' => 'E02003152',
        '7RJ' => 'E02003152',
        '7RL' => 'E02003152',
        '7RN' => 'E02003152',
        '7RP' => 'E02003152',
        '7RQ' => 'E02003152',
        '7RR' => 'E02003152',
        '7RS' => 'E02003152',
        '7RT' => 'E02003152',
        '7RU' => 'E02003152',
        '7RW' => 'E02003152',
        '7WA' => 'E02003152',
        '7WY' => 'E02003152',
        '7WZ' => 'E02003152',
        '7XG' => 'E02003152',
        '7XN' => 'E02003152',
        '7XU' => 'E02003152',
        '7XX' => 'E02003152',
        '7YA' => 'E02003152',
        '7YB' => 'E02003152',
        '7YG' => 'E02003152',
        '7YH' => 'E02003152',
        '7YJ' => 'E02003152',
        '7YL' => 'E02003152',
        '7YN' => 'E02003152',
        '7YQ' => 'E02003152',
        '7YR' => 'E02003152',
        '7YS' => 'E02003152',
        '7YT' => 'E02003152',
        '7YU' => 'E02003152',
        '7YW' => 'E02003152',
        '7YX' => 'E02003152',
        '7YY' => 'E02003152',
        '7ZN' => 'E02003152',
        '7ZX' => 'E02003152',
        '8AA' => 'E02003152',
        '8AB' => 'E02003151',
        '8AD' => 'E02003151',
        '8AE' => 'E02003151',
        '8AF' => 'E02003151',
        '8AG' => 'E02003151',
        '8AH' => 'E02003151',
        '8AJ' => 'E02003151',
        '8AL' => 'E02003152',
        '8AN' => 'E02003151',
        '8AP' => 'E02003151',
        '8AQ' => 'E02003151',
        '8AR' => 'E02003151',
        '8AS' => 'E02003151',
        '8AT' => 'E02003151',
        '8AU' => 'E02003151',
        '8AW' => 'E02003151',
        '8AX' => 'E02003151',
        '8AY' => 'E02003151',
        '8AZ' => 'E02003151',
        '8BA' => 'E02003151',
        '8BB' => 'E02003151',
        '8BD' => 'E02003152',
        '8BE' => 'E02003151',
        '8BG' => 'E02003151',
        '8BH' => 'E02003151',
        '8BJ' => 'E02003151',
        '8BL' => 'E02003151',
        '8BN' => 'E02003151',
        '8BP' => 'E02003151',
        '8BQ' => 'E02003151',
        '8BR' => 'E02003151',
        '8BS' => 'E02003151',
        '8BT' => 'E02003151',
        '8BU' => 'E02003151',
        '8BW' => 'E02003151',
        '8BX' => 'E02003151',
        '8BY' => 'E02003151',
        '8BZ' => 'E02003151',
        '8DA' => 'E02003151',
        '8DB' => 'E02003151',
        '8DD' => 'E02003151',
        '8DE' => 'E02003151',
        '8DF' => 'E02003151',
        '8DG' => 'E02003151',
        '8DH' => 'E02003151',
        '8DJ' => 'E02003151',
        '8DL' => 'E02003151',
        '8DN' => 'E02003151',
        '8DP' => 'E02003151',
        '8DQ' => 'E02003151',
        '8DR' => 'E02003151',
        '8DS' => 'E02003153',
        '8DT' => 'E02003151',
        '8DU' => 'E02003151',
        '8DW' => 'E02003151',
        '8DX' => 'E02003151',
        '8DY' => 'E02003151',
        '8DZ' => 'E02003151',
        '8EA' => 'E02003151',
        '8EB' => 'E02003151',
        '8ED' => 'E02003151',
        '8EE' => 'E02003151',
        '8EF' => 'E02003151',
        '8EG' => 'E02003151',
        '8EH' => 'E02003151',
        '8EJ' => 'E02003151',
        '8EL' => 'E02003151',
        '8EN' => 'E02003151',
        '8EP' => 'E02003151',
        '8EQ' => 'E02003151',
        '8ER' => 'E02003153',
        '8ES' => 'E02003153',
        '8ET' => 'E02003153',
        '8EU' => 'E02003153',
        '8EW' => 'E02003152',
        '8EX' => 'E02003153',
        '8EY' => 'E02003153',
        '8EZ' => 'E02003153',
        '8FA' => 'E02003151',
        '8FB' => 'E02003151',
        '8FD' => 'E02003151',
        '8FE' => 'E02003151',
        '8FF' => 'E02003151',
        '8FG' => 'E02003151',
        '8FH' => 'E02003151',
        '8FJ' => 'E02003151',
        '8FL' => 'E02003151',
        '8FN' => 'E02003151',
        '8FP' => 'E02003151',
        '8FQ' => 'E02003151',
        '8FR' => 'E02003151',
        '8FS' => 'E02003151',
        '8FT' => 'E02003151',
        '8FU' => 'E02004197',
        '8FW' => 'E02004197',
        '8FX' => 'E02004197',
        '8FY' => 'E02004197',
        '8FZ' => 'E02003151',
        '8GA' => 'E02003151',
        '8GB' => 'E02003151',
        '8GD' => 'E02004197',
        '8GF' => 'E02004197',
        '8GG' => 'E02004197',
        '8GH' => 'E02004197',
        '8GJ' => 'E02004197',
        '8GL' => 'E02004197',
        '8GN' => 'E02003151',
        '8GP' => 'E02004197',
        '8GQ' => 'E02003151',
        '8GR' => 'E02003151',
        '8HA' => 'E02003153',
        '8HB' => 'E02003153',
        '8HD' => 'E02003153',
        '8HE' => 'E02003151',
        '8HF' => 'E02003151',
        '8HG' => 'E02003151',
        '8HH' => 'E02003151',
        '8HJ' => 'E02003151',
        '8HL' => 'E02003151',
        '8HN' => 'E02003151',
        '8HP' => 'E02003151',
        '8HQ' => 'E02003151',
        '8HR' => 'E02003151',
        '8HS' => 'E02003151',
        '8HT' => 'E02003151',
        '8HU' => 'E02003151',
        '8HW' => 'E02003151',
        '8HX' => 'E02003151',
        '8HY' => 'E02003151',
        '8HZ' => 'E02003151',
        '8JA' => 'E02003151',
        '8JB' => 'E02003151',
        '8JD' => 'E02003151',
        '8JE' => 'E02003151',
        '8JF' => 'E02003151',
        '8JG' => 'E02003151',
        '8JH' => 'E02003151',
        '8JJ' => 'E02003151',
        '8JL' => 'E02003151',
        '8JN' => 'E02003151',
        '8JP' => 'E02003151',
        '8JQ' => 'E02003151',
        '8JR' => 'E02003151',
        '8JS' => 'E02003151',
        '8JT' => 'E02003151',
        '8JU' => 'E02003151',
        '8JW' => 'E02003151',
        '8JX' => 'E02003151',
        '8JY' => 'E02003151',
        '8JZ' => 'E02003151',
        '8LA' => 'E02003151',
        '8LB' => 'E02003151',
        '8LD' => 'E02003151',
        '8LE' => 'E02003151',
        '8LF' => 'E02003151',
        '8LG' => 'E02003151',
        '8LH' => 'E02003151',
        '8LJ' => 'E02003151',
        '8LL' => 'E02003151',
        '8LN' => 'E02003151',
        '8LP' => 'E02003151',
        '8LQ' => 'E02003151',
        '8LR' => 'E02003151',
        '8LS' => 'E02003151',
        '8LT' => 'E02003151',
        '8LU' => 'E02003152',
        '8LW' => 'E02003151',
        '8LX' => 'E02003151',
        '8NA' => 'E02003151',
        '8NB' => 'E02003151',
        '8ND' => 'E02003151',
        '8NE' => 'E02003151',
        '8NF' => 'E02003151',
        '8NG' => 'E02003151',
        '8NH' => 'E02003151',
        '8NJ' => 'E02003151',
        '8NL' => 'E02003151',
        '8NN' => 'E02003151',
        '8NP' => 'E02003151',
        '8NQ' => 'E02003151',
        '8NR' => 'E02003151',
        '8NS' => 'E02003151',
        '8NT' => 'E02003151',
        '8NU' => 'E02003151',
        '8NW' => 'E02003151',
        '8NX' => 'E02003151',
        '8NY' => 'E02003151',
        '8NZ' => 'E02003151',
        '8PA' => 'E02003151',
        '8PB' => 'E02003151',
        '8PD' => 'E02003151',
        '8PE' => 'E02003151',
        '8PF' => 'E02003151',
        '8PG' => 'E02003151',
        '8PH' => 'E02003151',
        '8PJ' => 'E02003151',
        '8PL' => 'E02003151',
        '8PN' => 'E02003151',
        '8PP' => 'E02003151',
        '8PQ' => 'E02003151',
        '8PR' => 'E02003151',
        '8PS' => 'E02003151',
        '8PT' => 'E02003151',
        '8PU' => 'E02003151',
        '8PX' => 'E02003151',
        '8PY' => 'E02003151',
        '8PZ' => 'E02003151',
        '8QA' => 'E02003151',
        '8QB' => 'E02003151',
        '8QD' => 'E02003151',
        '8QE' => 'E02003151',
        '8QF' => 'E02003151',
        '8QG' => 'E02003151',
        '8QH' => 'E02003151',
        '8QJ' => 'E02003151',
        '8QL' => 'E02003151',
        '8QN' => 'E02003151',
        '8QP' => 'E02003151',
        '8QQ' => 'E02003151',
        '8QS' => 'E02003151',
        '8QT' => 'E02003151',
        '8QU' => 'E02003151',
        '8QW' => 'E02003151',
        '8QX' => 'E02003151',
        '8QY' => 'E02003153',
        '8QZ' => 'E02003151',
        '8RA' => 'E02003153',
        '8RB' => 'E02003153',
        '8RD' => 'E02003153',
        '8RE' => 'E02003153',
        '8RF' => 'E02003153',
        '8RG' => 'E02003151',
        '8RH' => 'E02003151',
        '8RJ' => 'E02003151',
        '8RL' => 'E02003151',
        '8RN' => 'E02003151',
        '8RP' => 'E02003151',
        '8RQ' => 'E02003151',
        '8RR' => 'E02003151',
        '8RS' => 'E02003151',
        '8RT' => 'E02003151',
        '8RU' => 'E02003151',
        '8RW' => 'E02003151',
        '8RX' => 'E02003151',
        '8RY' => 'E02003151',
        '8RZ' => 'E02003151',
        '8SA' => 'E02003151',
        '8SB' => 'E02003151',
        '8SD' => 'E02003151',
        '8SE' => 'E02003151',
        '8SF' => 'E02003151',
        '8SG' => 'E02003151',
        '8SH' => 'E02003151',
        '8SJ' => 'E02003151',
        '8SP' => 'E02003151',
        '8SQ' => 'E02003151',
        '8SR' => 'E02003151',
        '8SS' => 'E02003151',
        '8ST' => 'E02003151',
        '8SU' => 'E02003151',
        '8SX' => 'E02003151',
        '8SY' => 'E02003151',
        '8SZ' => 'E02003151',
        '8TA' => 'E02003151',
        '8TB' => 'E02003151',
        '8TD' => 'E02003151',
        '8TE' => 'E02003151',
        '8TF' => 'E02003151',
        '8TG' => 'E02003151',
        '8TH' => 'E02003151',
        '8TJ' => 'E02003151',
        '8TL' => 'E02003151',
        '8TN' => 'E02003151',
        '8TP' => 'E02003151',
        '8TQ' => 'E02003151',
        '8TR' => 'E02003151',
        '8TS' => 'E02003151',
        '8TT' => 'E02003151',
        '8TU' => 'E02003151',
        '8TW' => 'E02003151',
        '8TX' => 'E02003151',
        '8TY' => 'E02003151',
        '8TZ' => 'E02003151',
        '8UA' => 'E02003151',
        '8UB' => 'E02003151',
        '8UD' => 'E02003151',
        '8UE' => 'E02003151',
        '8UF' => 'E02003151',
        '8UG' => 'E02003151',
        '8UH' => 'E02003153',
        '8UJ' => 'E02003153',
        '8UL' => 'E02003151',
        '8UN' => 'E02003151',
        '8UP' => 'E02003151',
        '8UQ' => 'E02003153',
        '8UR' => 'E02003151',
        '8US' => 'E02003152',
        '8UT' => 'E02003151',
        '8UU' => 'E02003151',
        '8UW' => 'E02003151',
        '8UX' => 'E02003151',
        '8UY' => 'E02003151',
        '8WA' => 'E02003152',
        '8WT' => 'E02003152',
        '8WU' => 'E02003152',
        '8WW' => 'E02003152',
        '8WX' => 'E02003151',
        '8WY' => 'E02003152',
        '8WZ' => 'E02003152',
        '8XQ' => 'E02003152',
        '8YP' => 'E02003152',
        '8YR' => 'E02003152',
        '8YS' => 'E02003152',
        '8YT' => 'E02003152',
        '8YX' => 'E02003152',
        '8YY' => 'E02003152',
        '8YZ' => 'E02003151',
        '8ZG' => 'E02003152',
        '8ZL' => 'E02003152',
        '8ZN' => 'E02003152',
        '8ZQ' => 'E02003152',
        '8ZR' => 'E02003152',
        '8ZX' => 'E02003152',
        '9AA' => 'E02003152',
        '9AB' => 'E02003153',
        '9AD' => 'E02003153',
        '9AE' => 'E02003153',
        '9AF' => 'E02003153',
        '9AG' => 'E02003153',
        '9AH' => 'E02003153',
        '9AJ' => 'E02003153',
        '9AL' => 'E02003153',
        '9AN' => 'E02003153',
        '9AP' => 'E02003151',
        '9AQ' => 'E02003153',
        '9AR' => 'E02003151',
        '9AS' => 'E02003152',
        '9AT' => 'E02003151',
        '9AU' => 'E02003151',
        '9AW' => 'E02003153',
        '9AX' => 'E02003153',
        '9AY' => 'E02003153',
        '9AZ' => 'E02003153',
        '9BA' => 'E02003153',
        '9BB' => 'E02003153',
        '9BD' => 'E02003153',
        '9BE' => 'E02003153',
        '9BG' => 'E02003153',
        '9BH' => 'E02003153',
        '9BJ' => 'E02003151',
        '9BL' => 'E02003151',
        '9BN' => 'E02003153',
        '9BP' => 'E02003153',
        '9BQ' => 'E02003153',
        '9BR' => 'E02003153',
        '9BS' => 'E02003153',
        '9BT' => 'E02003153',
        '9BU' => 'E02003153',
        '9BW' => 'E02003153',
        '9BX' => 'E02003153',
        '9BY' => 'E02003153',
        '9BZ' => 'E02003151',
        '9DA' => 'E02003153',
        '9DB' => 'E02003153',
        '9DD' => 'E02003153',
        '9DE' => 'E02003153',
        '9DF' => 'E02003152',
        '9DG' => 'E02003152',
        '9DH' => 'E02003152',
        '9DJ' => 'E02003152',
        '9DL' => 'E02003152',
        '9DN' => 'E02003152',
        '9DP' => 'E02003152',
        '9DQ' => 'E02003152',
        '9DR' => 'E02003152',
        '9DS' => 'E02003152',
        '9DT' => 'E02003152',
        '9DU' => 'E02003152',
        '9DW' => 'E02003152',
        '9DX' => 'E02003152',
        '9DY' => 'E02003152',
        '9DZ' => 'E02003153',
        '9EA' => 'E02003152',
        '9EB' => 'E02003152',
        '9ED' => 'E02003152',
        '9EE' => 'E02003153',
        '9EF' => 'E02003153',
        '9EG' => 'E02003153',
        '9EH' => 'E02003152',
        '9EJ' => 'E02003153',
        '9EL' => 'E02003152',
        '9EN' => 'E02003153',
        '9EP' => 'E02003153',
        '9EQ' => 'E02003152',
        '9ER' => 'E02003153',
        '9ES' => 'E02003153',
        '9ET' => 'E02003153',
        '9EU' => 'E02003153',
        '9EW' => 'E02003153',
        '9EX' => 'E02003153',
        '9EY' => 'E02003153',
        '9EZ' => 'E02003153',
        '9FA' => 'E02003152',
        '9FB' => 'E02003152',
        '9FD' => 'E02004197',
        '9FE' => 'E02004197',
        '9FF' => 'E02004197',
        '9FG' => 'E02004197',
        '9FH' => 'E02003152',
        '9FJ' => 'E02004197',
        '9FL' => 'E02003152',
        '9FN' => 'E02003152',
        '9FP' => 'E02003152',
        '9FQ' => 'E02003152',
        '9FR' => 'E02003152',
        '9FS' => 'E02003152',
        '9FT' => 'E02003152',
        '9FU' => 'E02003152',
        '9GA' => 'E02003152',
        '9GB' => 'E02003152',
        '9GD' => 'E02003152',
        '9GE' => 'E02003152',
        '9GF' => 'E02003152',
        '9GH' => 'E02003153',
        '9HA' => 'E02003153',
        '9HB' => 'E02003153',
        '9HD' => 'E02003153',
        '9HE' => 'E02003153',
        '9HF' => 'E02003153',
        '9HG' => 'E02003153',
        '9HH' => 'E02003152',
        '9HJ' => 'E02003152',
        '9HL' => 'E02003153',
        '9HN' => 'E02003153',
        '9HP' => 'E02003153',
        '9HQ' => 'E02003153',
        '9HR' => 'E02003153',
        '9HS' => 'E02003153',
        '9HT' => 'E02003153',
        '9HU' => 'E02003153',
        '9HW' => 'E02003153',
        '9HX' => 'E02003153',
        '9HY' => 'E02003153',
        '9HZ' => 'E02003152',
        '9JA' => 'E02003152',
        '9JB' => 'E02003153',
        '9JD' => 'E02003153',
        '9JE' => 'E02003153',
        '9JF' => 'E02003153',
        '9JG' => 'E02003153',
        '9JH' => 'E02003153',
        '9JJ' => 'E02003153',
        '9JL' => 'E02003153',
        '9JN' => 'E02003153',
        '9JP' => 'E02003153',
        '9JQ' => 'E02003153',
        '9JR' => 'E02003153',
        '9JS' => 'E02003153',
        '9JT' => 'E02003153',
        '9JU' => 'E02003153',
        '9JW' => 'E02003153',
        '9JX' => 'E02003153',
        '9JY' => 'E02003153',
        '9JZ' => 'E02003153',
        '9LA' => 'E02003153',
        '9LB' => 'E02003153',
        '9LD' => 'E02003152',
        '9LE' => 'E02003153',
        '9LF' => 'E02003152',
        '9LG' => 'E02003152',
        '9LH' => 'E02003152',
        '9LJ' => 'E02003152',
        '9LL' => 'E02003152',
        '9LN' => 'E02003153',
        '9LP' => 'E02003153',
        '9LQ' => 'E02003152',
        '9LR' => 'E02003153',
        '9LS' => 'E02003153',
        '9LT' => 'E02003153',
        '9LU' => 'E02003153',
        '9LW' => 'E02003153',
        '9LX' => 'E02003153',
        '9LY' => 'E02003153',
        '9LZ' => 'E02003153',
        '9NA' => 'E02003153',
        '9NB' => 'E02003153',
        '9ND' => 'E02004197',
        '9NE' => 'E02003153',
        '9NF' => 'E02003152',
        '9NG' => 'E02003152',
        '9NH' => 'E02003152',
        '9NJ' => 'E02003152',
        '9NL' => 'E02003152',
        '9NN' => 'E02003152',
        '9NP' => 'E02003152',
        '9NQ' => 'E02003152',
        '9NR' => 'E02003152',
        '9NS' => 'E02003152',
        '9NT' => 'E02003152',
        '9NU' => 'E02003152',
        '9NW' => 'E02003152',
        '9NX' => 'E02003152',
        '9NY' => 'E02003152',
        '9NZ' => 'E02003152',
        '9PA' => 'E02003152',
        '9PB' => 'E02003152',
        '9PD' => 'E02003152',
        '9PE' => 'E02003152',
        '9PF' => 'E02003152',
        '9PG' => 'E02003152',
        '9PH' => 'E02003152',
        '9PJ' => 'E02003152',
        '9PL' => 'E02003152',
        '9PN' => 'E02003152',
        '9PP' => 'E02003152',
        '9PQ' => 'E02003152',
        '9PR' => 'E02003152',
        '9PS' => 'E02003152',
        '9PT' => 'E02003152',
        '9PU' => 'E02003152',
        '9PW' => 'E02003152',
        '9PX' => 'E02003152',
        '9PY' => 'E02003152',
        '9PZ' => 'E02003152',
        '9QA' => 'E02003152',
        '9QB' => 'E02003152',
        '9QD' => 'E02003152',
        '9QE' => 'E02003152',
        '9QF' => 'E02003152',
        '9QG' => 'E02003152',
        '9QH' => 'E02003152',
        '9QJ' => 'E02003152',
        '9QL' => 'E02003153',
        '9QN' => 'E02003153',
        '9QP' => 'E02003152',
        '9QQ' => 'E02003152',
        '9QR' => 'E02003152',
        '9QS' => 'E02003152',
        '9QT' => 'E02003152',
        '9QU' => 'E02003152',
        '9QW' => 'E02003153',
        '9QX' => 'E02003152',
        '9QY' => 'E02003152',
        '9QZ' => 'E02003152',
        '9RA' => 'E02003152',
        '9RB' => 'E02003152',
        '9RD' => 'E02003152',
        '9RE' => 'E02003152',
        '9RF' => 'E02003152',
        '9RG' => 'E02003152',
        '9RH' => 'E02003152',
        '9RJ' => 'E02003152',
        '9RL' => 'E02003152',
        '9RN' => 'E02003152',
        '9RP' => 'E02003152',
        '9RQ' => 'E02003152',
        '9RR' => 'E02003152',
        '9RS' => 'E02003152',
        '9RT' => 'E02003152',
        '9RU' => 'E02003152',
        '9RW' => 'E02003152',
        '9RX' => 'E02003153',
        '9RY' => 'E02003153',
        '9RZ' => 'E02003153',
        '9SA' => 'E02003152',
        '9SB' => 'E02003152',
        '9SD' => 'E02003152',
        '9SE' => 'E02003152',
        '9SF' => 'E02003152',
        '9SG' => 'E02003152',
        '9SH' => 'E02003152',
        '9SJ' => 'E02003152',
        '9SL' => 'E02003152',
        '9SN' => 'E02003152',
        '9SP' => 'E02003152',
        '9SQ' => 'E02003152',
        '9SR' => 'E02003152',
        '9SS' => 'E02003152',
        '9ST' => 'E02003152',
        '9SU' => 'E02003152',
        '9SW' => 'E02003152',
        '9SX' => 'E02003152',
        '9SY' => 'E02003152',
        '9SZ' => 'E02003152',
        '9TA' => 'E02003152',
        '9TB' => 'E02003152',
        '9TD' => 'E02003152',
        '9TE' => 'E02003152',
        '9TF' => 'E02003152',
        '9TG' => 'E02003152',
        '9TH' => 'E02003152',
        '9TJ' => 'E02003152',
        '9TL' => 'E02003152',
        '9TN' => 'E02003152',
        '9TP' => 'E02003152',
        '9TQ' => 'E02003152',
        '9TR' => 'E02003153',
        '9TS' => 'E02003153',
        '9TT' => 'E02003153',
        '9TU' => 'E02003152',
        '9TW' => 'E02003152',
        '9TX' => 'E02003153',
        '9TY' => 'E02003153',
        '9TZ' => 'E02003152',
        '9UA' => 'E02003152',
        '9UB' => 'E02003152',
        '9UD' => 'E02003153',
        '9UE' => 'E02003152',
        '9UF' => 'E02003153',
        '9UG' => 'E02003153',
        '9UH' => 'E02003153',
        '9UJ' => 'E02003153',
        '9UL' => 'E02003153',
        '9UN' => 'E02003153',
        '9UP' => 'E02003153',
        '9UQ' => 'E02003153',
        '9UR' => 'E02003153',
        '9US' => 'E02003152',
        '9UT' => 'E02003153',
        '9UU' => 'E02003153',
        '9UW' => 'E02003153',
        '9UX' => 'E02003153',
        '9UY' => 'E02003153',
        '9UZ' => 'E02003152',
        '9WA' => 'E02003152',
        '9WB' => 'E02003152',
        '9WD' => 'E02003152',
        '9WE' => 'E02003152',
        '9WH' => 'E02003153',
        '9WJ' => 'E02003152',
        '9WS' => 'E02003152',
        '9WT' => 'E02003152',
        '9WU' => 'E02003152',
        '9WW' => 'E02003152',
        '9WX' => 'E02003152',
        '9WY' => 'E02003152',
        '9WZ' => 'E02003152',
        '9XA' => 'E02003152',
        '9XB' => 'E02003152',
        '9XD' => 'E02003152',
        '9XH' => 'E02003152',
        '9XJ' => 'E02003151',
        '9XQ' => 'E02003152',
        '9XS' => 'E02003152',
        '9XU' => 'E02003152',
        '9XW' => 'E02003152',
        '9XX' => 'E02003152',
        '9XY' => 'E02003152',
        '9XZ' => 'E02003152',
        '9YA' => 'E02003152',
        '9YB' => 'E02003152',
        '9YD' => 'E02003152',
        '9YE' => 'E02003152',
        '9YF' => 'E02003152',
        '9YG' => 'E02003152',
        '9YH' => 'E02003152',
        '9YJ' => 'E02003152',
        '9YL' => 'E02003152',
        '9YN' => 'E02003152',
        '9YP' => 'E02003152',
        '9YQ' => 'E02003152',
        '9YR' => 'E02003152',
        '9YS' => 'E02003152',
        '9YT' => 'E02003152',
        '9YU' => 'E02003152',
        '9YW' => 'E02003152',
        '9YX' => 'E02003152',
        '9YY' => 'E02003152',
        '9YZ' => 'E02003152',
        '9ZE' => 'E02003152',
        '9ZQ' => 'E02003152',
        '9ZR' => 'E02003152',
        '9ZW' => 'E02003152',
        '9ZX' => 'E02003152',
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
