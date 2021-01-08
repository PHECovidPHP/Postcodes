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
final class ME3
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02003314',
        '0AB' => 'E02003314',
        '0AD' => 'E02003314',
        '0AE' => 'E02003314',
        '0AF' => 'E02003314',
        '0AG' => 'E02003314',
        '0AH' => 'E02003314',
        '0AJ' => 'E02003314',
        '0AL' => 'E02003314',
        '0AN' => 'E02003314',
        '0AP' => 'E02003314',
        '0AQ' => 'E02003314',
        '0AR' => 'E02003314',
        '0AS' => 'E02003314',
        '0AT' => 'E02003314',
        '0AU' => 'E02003314',
        '0AW' => 'E02003314',
        '0AX' => 'E02003314',
        '0AY' => 'E02003314',
        '0AZ' => 'E02003314',
        '0BA' => 'E02003314',
        '0BB' => 'E02003314',
        '0BD' => 'E02003314',
        '0BE' => 'E02003314',
        '0BF' => 'E02003314',
        '0BG' => 'E02003314',
        '0BH' => 'E02003314',
        '0BJ' => 'E02003314',
        '0BL' => 'E02003314',
        '0BN' => 'E02003314',
        '0BP' => 'E02003314',
        '0BQ' => 'E02003314',
        '0BS' => 'E02003314',
        '0BT' => 'E02003314',
        '0BU' => 'E02003314',
        '0BW' => 'E02003314',
        '0BX' => 'E02003314',
        '0BY' => 'E02003314',
        '0BZ' => 'E02003314',
        '0DA' => 'E02003314',
        '0DB' => 'E02003314',
        '0DD' => 'E02003314',
        '0DE' => 'E02003314',
        '0DF' => 'E02003314',
        '0DG' => 'E02003314',
        '0DH' => 'E02003314',
        '0DJ' => 'E02003314',
        '0DL' => 'E02003314',
        '0DN' => 'E02003314',
        '0DP' => 'E02003314',
        '0DQ' => 'E02003314',
        '0DR' => 'E02003314',
        '0DS' => 'E02003314',
        '0DT' => 'E02003314',
        '0DU' => 'E02003314',
        '0DW' => 'E02003314',
        '0DX' => 'E02003314',
        '0DY' => 'E02003314',
        '0DZ' => 'E02003314',
        '0EA' => 'E02003314',
        '0EB' => 'E02003314',
        '0ED' => 'E02003314',
        '0EE' => 'E02003314',
        '0EF' => 'E02003314',
        '0EG' => 'E02003314',
        '0EH' => 'E02003314',
        '0EJ' => 'E02003314',
        '0EL' => 'E02003314',
        '0EN' => 'E02003314',
        '0EP' => 'E02003314',
        '0ER' => 'E02003314',
        '0ES' => 'E02003314',
        '0ET' => 'E02003314',
        '0EW' => 'E02003314',
        '0EY' => 'E02003314',
        '0EZ' => 'E02003314',
        '0GT' => 'E02003314',
        '0HA' => 'E02003314',
        '0HD' => 'E02003314',
        '0HG' => 'E02003314',
        '0LA' => 'E02003314',
        '0WY' => 'E02003327',
        '0WZ' => 'E02003327',
        '7AA' => 'E02005064',
        '7AB' => 'E02005064',
        '7AD' => 'E02005064',
        '7AE' => 'E02005064',
        '7AF' => 'E02003327',
        '7AG' => 'E02005064',
        '7AH' => 'E02005064',
        '7AJ' => 'E02005064',
        '7AL' => 'E02005064',
        '7AN' => 'E02005064',
        '7AP' => 'E02005064',
        '7AQ' => 'E02003315',
        '7AR' => 'E02005064',
        '7AS' => 'E02005064',
        '7AT' => 'E02005064',
        '7AU' => 'E02003327',
        '7AW' => 'E02003327',
        '7AX' => 'E02005064',
        '7AY' => 'E02005064',
        '7AZ' => 'E02005064',
        '7BA' => 'E02005064',
        '7BB' => 'E02005064',
        '7BD' => 'E02005064',
        '7BE' => 'E02005064',
        '7BF' => 'E02003315',
        '7BG' => 'E02005064',
        '7BH' => 'E02005064',
        '7BJ' => 'E02005064',
        '7BL' => 'E02005064',
        '7BN' => 'E02005064',
        '7BP' => 'E02005064',
        '7BQ' => 'E02005064',
        '7BS' => 'E02005064',
        '7BT' => 'E02005064',
        '7BU' => 'E02005064',
        '7BW' => 'E02005064',
        '7BX' => 'E02005064',
        '7BY' => 'E02005064',
        '7BZ' => 'E02005064',
        '7DA' => 'E02005064',
        '7DB' => 'E02005064',
        '7DD' => 'E02005064',
        '7DE' => 'E02005064',
        '7DF' => 'E02005064',
        '7DG' => 'E02005064',
        '7DH' => 'E02005064',
        '7DJ' => 'E02005064',
        '7DL' => 'E02005064',
        '7DN' => 'E02005064',
        '7DP' => 'E02005064',
        '7DQ' => 'E02005064',
        '7DR' => 'E02005064',
        '7DS' => 'E02005064',
        '7DT' => 'E02005064',
        '7DU' => 'E02005064',
        '7DW' => 'E02003315',
        '7DX' => 'E02005064',
        '7DY' => 'E02003315',
        '7DZ' => 'E02005064',
        '7EA' => 'E02005064',
        '7EB' => 'E02005064',
        '7ED' => 'E02005064',
        '7EE' => 'E02005064',
        '7EF' => 'E02003315',
        '7EG' => 'E02005064',
        '7EH' => 'E02005064',
        '7EJ' => 'E02005064',
        '7EL' => 'E02005064',
        '7EN' => 'E02003315',
        '7EP' => 'E02005064',
        '7EQ' => 'E02005064',
        '7ER' => 'E02005064',
        '7ES' => 'E02003327',
        '7EW' => 'E02005064',
        '7EY' => 'E02003315',
        '7GA' => 'E02005064',
        '7GB' => 'E02005064',
        '7GL' => 'E02003315',
        '7HA' => 'E02005064',
        '7HB' => 'E02005064',
        '7HD' => 'E02005064',
        '7HE' => 'E02005064',
        '7HF' => 'E02005064',
        '7HG' => 'E02003327',
        '7HH' => 'E02005064',
        '7HJ' => 'E02005064',
        '7HL' => 'E02005064',
        '7HN' => 'E02005064',
        '7HP' => 'E02005064',
        '7HQ' => 'E02005064',
        '7HR' => 'E02005064',
        '7HS' => 'E02005064',
        '7HT' => 'E02005064',
        '7HU' => 'E02005064',
        '7HW' => 'E02005064',
        '7HX' => 'E02005064',
        '7HY' => 'E02005064',
        '7HZ' => 'E02005064',
        '7JA' => 'E02005064',
        '7JB' => 'E02005064',
        '7JD' => 'E02005064',
        '7JE' => 'E02005064',
        '7JF' => 'E02005064',
        '7JG' => 'E02005064',
        '7JH' => 'E02005064',
        '7JJ' => 'E02005064',
        '7JL' => 'E02005064',
        '7JN' => 'E02005064',
        '7JP' => 'E02005064',
        '7JQ' => 'E02005064',
        '7JR' => 'E02005064',
        '7JT' => 'E02005064',
        '7JU' => 'E02005064',
        '7JW' => 'E02005064',
        '7JX' => 'E02005064',
        '7JY' => 'E02005064',
        '7JZ' => 'E02005064',
        '7LA' => 'E02005064',
        '7LB' => 'E02005064',
        '7LD' => 'E02005064',
        '7LE' => 'E02005064',
        '7LF' => 'E02005064',
        '7LG' => 'E02005064',
        '7LH' => 'E02005064',
        '7LJ' => 'E02005064',
        '7LL' => 'E02005064',
        '7LN' => 'E02005064',
        '7LP' => 'E02005064',
        '7LQ' => 'E02003327',
        '7LR' => 'E02005064',
        '7LS' => 'E02005064',
        '7LT' => 'E02005064',
        '7LU' => 'E02005064',
        '7LW' => 'E02005064',
        '7LX' => 'E02005064',
        '7LY' => 'E02005064',
        '7LZ' => 'E02005064',
        '7NA' => 'E02005064',
        '7NB' => 'E02005064',
        '7ND' => 'E02005064',
        '7NE' => 'E02005064',
        '7NF' => 'E02005064',
        '7NG' => 'E02005064',
        '7NH' => 'E02005064',
        '7NJ' => 'E02005064',
        '7NL' => 'E02005064',
        '7NN' => 'E02005064',
        '7NP' => 'E02005064',
        '7NQ' => 'E02005064',
        '7NR' => 'E02005064',
        '7NT' => 'E02005064',
        '7NU' => 'E02005064',
        '7NW' => 'E02005064',
        '7NX' => 'E02005064',
        '7NY' => 'E02005064',
        '7NZ' => 'E02005064',
        '7PA' => 'E02005064',
        '7PB' => 'E02005064',
        '7PD' => 'E02005064',
        '7PE' => 'E02005064',
        '7PG' => 'E02005064',
        '7PJ' => 'E02003315',
        '7PL' => 'E02003315',
        '7PN' => 'E02003315',
        '7PP' => 'E02003315',
        '7PQ' => 'E02005064',
        '7PS' => 'E02003315',
        '7PT' => 'E02003315',
        '7PU' => 'E02003315',
        '7PW' => 'E02003315',
        '7PX' => 'E02003315',
        '7PY' => 'E02003315',
        '7PZ' => 'E02003315',
        '7QA' => 'E02003315',
        '7QB' => 'E02003315',
        '7QD' => 'E02003315',
        '7QE' => 'E02003315',
        '7QF' => 'E02003315',
        '7QH' => 'E02003315',
        '7QJ' => 'E02003315',
        '7QL' => 'E02003315',
        '7QN' => 'E02003315',
        '7QP' => 'E02003315',
        '7QR' => 'E02003315',
        '7QS' => 'E02003315',
        '7QT' => 'E02003315',
        '7QW' => 'E02003315',
        '7QX' => 'E02003315',
        '7QZ' => 'E02003315',
        '7RA' => 'E02003315',
        '7RB' => 'E02003315',
        '7RD' => 'E02003315',
        '7RE' => 'E02003315',
        '7RF' => 'E02003315',
        '7RG' => 'E02003315',
        '7RH' => 'E02003315',
        '7RL' => 'E02003315',
        '7RN' => 'E02003315',
        '7RP' => 'E02003315',
        '7RR' => 'E02003315',
        '7RS' => 'E02003315',
        '7RT' => 'E02003315',
        '7RU' => 'E02003315',
        '7RW' => 'E02003315',
        '7RX' => 'E02003315',
        '7RY' => 'E02003315',
        '7RZ' => 'E02003315',
        '7SA' => 'E02003315',
        '7SB' => 'E02003315',
        '7SD' => 'E02003315',
        '7SE' => 'E02003315',
        '7SF' => 'E02003315',
        '7SG' => 'E02003315',
        '7SH' => 'E02003315',
        '7SJ' => 'E02003315',
        '7SL' => 'E02003315',
        '7SN' => 'E02003315',
        '7SP' => 'E02003315',
        '7SQ' => 'E02003315',
        '7SR' => 'E02003315',
        '7SS' => 'E02003315',
        '7ST' => 'E02003315',
        '7SU' => 'E02003315',
        '7SW' => 'E02003315',
        '7SX' => 'E02003315',
        '7SY' => 'E02003315',
        '7SZ' => 'E02003315',
        '7TA' => 'E02003315',
        '7TB' => 'E02003315',
        '7TD' => 'E02005064',
        '7TE' => 'E02003315',
        '7TG' => 'E02003315',
        '7TH' => 'E02003315',
        '7TJ' => 'E02003315',
        '7TL' => 'E02003315',
        '7TN' => 'E02003315',
        '7TP' => 'E02003315',
        '7TQ' => 'E02003315',
        '7TR' => 'E02003315',
        '7TS' => 'E02005064',
        '7TW' => 'E02003315',
        '7TX' => 'E02003315',
        '7TY' => 'E02003315',
        '7TZ' => 'E02003315',
        '7UA' => 'E02003315',
        '7UB' => 'E02003315',
        '7UD' => 'E02003315',
        '7UE' => 'E02003315',
        '7UF' => 'E02003315',
        '7UG' => 'E02003315',
        '7UH' => 'E02003315',
        '7UJ' => 'E02003315',
        '7UL' => 'E02003315',
        '7UN' => 'E02003315',
        '7UQ' => 'E02003315',
        '7UR' => 'E02003315',
        '7UT' => 'E02003315',
        '7UU' => 'E02003327',
        '7UW' => 'E02003315',
        '7UY' => 'E02003327',
        '7WA' => 'E02003327',
        '7WB' => 'E02003327',
        '7WD' => 'E02003327',
        '7WE' => 'E02003327',
        '7WF' => 'E02003327',
        '7WG' => 'E02003327',
        '7WH' => 'E02003327',
        '7WP' => 'E02003327',
        '7WQ' => 'E02003327',
        '7WY' => 'E02003327',
        '7WZ' => 'E02003327',
        '7XQ' => 'E02003327',
        '7XW' => 'E02003327',
        '7YZ' => 'E02003327',
        '8AA' => 'E02003317',
        '8AB' => 'E02003316',
        '8AD' => 'E02003316',
        '8AE' => 'E02003327',
        '8AF' => 'E02003316',
        '8AG' => 'E02003317',
        '8AH' => 'E02003317',
        '8AJ' => 'E02003317',
        '8AL' => 'E02003317',
        '8AN' => 'E02003316',
        '8AP' => 'E02003317',
        '8AQ' => 'E02003327',
        '8AR' => 'E02003317',
        '8AS' => 'E02003317',
        '8AT' => 'E02003317',
        '8AU' => 'E02003317',
        '8AW' => 'E02003327',
        '8AX' => 'E02003327',
        '8AY' => 'E02003317',
        '8AZ' => 'E02003317',
        '8BA' => 'E02003316',
        '8BB' => 'E02003317',
        '8BD' => 'E02003317',
        '8BE' => 'E02003317',
        '8BF' => 'E02003317',
        '8BG' => 'E02003317',
        '8BH' => 'E02003317',
        '8BJ' => 'E02003315',
        '8BL' => 'E02003315',
        '8BN' => 'E02003315',
        '8BP' => 'E02003317',
        '8BQ' => 'E02003327',
        '8BS' => 'E02003317',
        '8BT' => 'E02003315',
        '8BU' => 'E02003317',
        '8BW' => 'E02003317',
        '8BX' => 'E02003316',
        '8BY' => 'E02003317',
        '8BZ' => 'E02003317',
        '8DA' => 'E02003315',
        '8DB' => 'E02003316',
        '8DD' => 'E02003316',
        '8DE' => 'E02003316',
        '8DF' => 'E02003316',
        '8DG' => 'E02003316',
        '8DH' => 'E02003316',
        '8DJ' => 'E02003316',
        '8DL' => 'E02003316',
        '8DN' => 'E02003327',
        '8DP' => 'E02003316',
        '8DQ' => 'E02003316',
        '8DR' => 'E02003316',
        '8DS' => 'E02003316',
        '8DT' => 'E02003316',
        '8DU' => 'E02003317',
        '8DW' => 'E02003316',
        '8DX' => 'E02003316',
        '8DY' => 'E02003327',
        '8DZ' => 'E02003315',
        '8EA' => 'E02003316',
        '8EB' => 'E02003317',
        '8ED' => 'E02003317',
        '8EE' => 'E02003317',
        '8EF' => 'E02003316',
        '8EG' => 'E02003315',
        '8EH' => 'E02003317',
        '8EJ' => 'E02003315',
        '8EL' => 'E02003315',
        '8EN' => 'E02003315',
        '8EP' => 'E02005064',
        '8EQ' => 'E02003316',
        '8ER' => 'E02003315',
        '8ES' => 'E02003315',
        '8ET' => 'E02003315',
        '8EU' => 'E02003315',
        '8EW' => 'E02003315',
        '8EX' => 'E02003315',
        '8EY' => 'E02003315',
        '8EZ' => 'E02003316',
        '8FA' => 'E02003314',
        '8FB' => 'E02003317',
        '8FD' => 'E02003317',
        '8FE' => 'E02003317',
        '8FF' => 'E02003317',
        '8FG' => 'E02003317',
        '8FH' => 'E02003317',
        '8FJ' => 'E02003317',
        '8FL' => 'E02003317',
        '8FN' => 'E02003317',
        '8FP' => 'E02003317',
        '8FQ' => 'E02003317',
        '8FR' => 'E02003317',
        '8FS' => 'E02003317',
        '8FT' => 'E02003317',
        '8FU' => 'E02003316',
        '8FW' => 'E02003316',
        '8FX' => 'E02003316',
        '8FY' => 'E02003316',
        '8GA' => 'E02003316',
        '8GB' => 'E02003316',
        '8GD' => 'E02003316',
        '8GE' => 'E02003317',
        '8GF' => 'E02003317',
        '8GJ' => 'E02003314',
        '8GL' => 'E02003316',
        '8GN' => 'E02003316',
        '8GP' => 'E02003316',
        '8GQ' => 'E02003317',
        '8GR' => 'E02003317',
        '8GS' => 'E02003317',
        '8GT' => 'E02003317',
        '8HA' => 'E02003316',
        '8HB' => 'E02003315',
        '8HD' => 'E02003315',
        '8HE' => 'E02003315',
        '8HF' => 'E02003315',
        '8HG' => 'E02003315',
        '8HH' => 'E02003315',
        '8HJ' => 'E02003315',
        '8HL' => 'E02003315',
        '8HN' => 'E02003315',
        '8HP' => 'E02003315',
        '8HQ' => 'E02003315',
        '8HR' => 'E02003315',
        '8HS' => 'E02003315',
        '8HT' => 'E02003315',
        '8HU' => 'E02003315',
        '8HW' => 'E02003315',
        '8HX' => 'E02003315',
        '8HY' => 'E02003315',
        '8HZ' => 'E02003315',
        '8JA' => 'E02003315',
        '8JB' => 'E02003315',
        '8JD' => 'E02003315',
        '8JE' => 'E02003315',
        '8JF' => 'E02003315',
        '8JG' => 'E02003315',
        '8JH' => 'E02003315',
        '8JJ' => 'E02003315',
        '8JL' => 'E02003315',
        '8JN' => 'E02003315',
        '8JP' => 'E02003315',
        '8JQ' => 'E02003315',
        '8JR' => 'E02003315',
        '8JS' => 'E02003315',
        '8JT' => 'E02003315',
        '8JU' => 'E02003315',
        '8JW' => 'E02003315',
        '8JX' => 'E02003315',
        '8JY' => 'E02003315',
        '8JZ' => 'E02003315',
        '8LA' => 'E02003315',
        '8LB' => 'E02003315',
        '8LD' => 'E02003316',
        '8LE' => 'E02003316',
        '8LF' => 'E02003316',
        '8LG' => 'E02003316',
        '8LH' => 'E02003316',
        '8LJ' => 'E02003316',
        '8LL' => 'E02003316',
        '8LN' => 'E02003316',
        '8LP' => 'E02003316',
        '8LQ' => 'E02003316',
        '8LR' => 'E02003315',
        '8LS' => 'E02003327',
        '8LT' => 'E02003316',
        '8LU' => 'E02003316',
        '8LW' => 'E02003316',
        '8LX' => 'E02003316',
        '8LY' => 'E02003316',
        '8LZ' => 'E02003316',
        '8NA' => 'E02003316',
        '8NB' => 'E02003316',
        '8ND' => 'E02003316',
        '8NE' => 'E02003316',
        '8NF' => 'E02003316',
        '8NG' => 'E02003316',
        '8NH' => 'E02003316',
        '8NJ' => 'E02003316',
        '8NL' => 'E02003316',
        '8NN' => 'E02003316',
        '8NP' => 'E02003316',
        '8NQ' => 'E02003316',
        '8NR' => 'E02003316',
        '8NS' => 'E02003316',
        '8NT' => 'E02003316',
        '8NU' => 'E02003317',
        '8NW' => 'E02003316',
        '8NX' => 'E02003316',
        '8NY' => 'E02003316',
        '8NZ' => 'E02003316',
        '8PA' => 'E02003316',
        '8PB' => 'E02003316',
        '8PD' => 'E02003316',
        '8PE' => 'E02003327',
        '8PF' => 'E02003316',
        '8PG' => 'E02003316',
        '8PH' => 'E02003316',
        '8PJ' => 'E02003316',
        '8PL' => 'E02003316',
        '8PN' => 'E02003316',
        '8PP' => 'E02003316',
        '8PQ' => 'E02003316',
        '8PR' => 'E02003316',
        '8PS' => 'E02003316',
        '8PT' => 'E02003314',
        '8PU' => 'E02003314',
        '8PW' => 'E02003316',
        '8PX' => 'E02003316',
        '8PY' => 'E02003316',
        '8PZ' => 'E02003316',
        '8QA' => 'E02003316',
        '8QB' => 'E02003316',
        '8QD' => 'E02003314',
        '8QE' => 'E02003314',
        '8QF' => 'E02003314',
        '8QG' => 'E02003316',
        '8QH' => 'E02003316',
        '8QJ' => 'E02003316',
        '8QL' => 'E02003316',
        '8QN' => 'E02003316',
        '8QP' => 'E02003314',
        '8QQ' => 'E02003316',
        '8QR' => 'E02003316',
        '8QS' => 'E02003314',
        '8QT' => 'E02003314',
        '8QU' => 'E02003314',
        '8QW' => 'E02003316',
        '8QX' => 'E02003314',
        '8RA' => 'E02003314',
        '8RB' => 'E02003314',
        '8RD' => 'E02003314',
        '8RE' => 'E02003314',
        '8RF' => 'E02003314',
        '8RG' => 'E02003314',
        '8RH' => 'E02003314',
        '8RJ' => 'E02003314',
        '8RL' => 'E02003314',
        '8RN' => 'E02003314',
        '8RP' => 'E02003314',
        '8RQ' => 'E02003314',
        '8RR' => 'E02003327',
        '8RS' => 'E02003314',
        '8RT' => 'E02003314',
        '8RU' => 'E02003316',
        '8RW' => 'E02003314',
        '8RY' => 'E02003316',
        '8RZ' => 'E02003314',
        '8SA' => 'E02003316',
        '8SB' => 'E02003316',
        '8SD' => 'E02003316',
        '8SE' => 'E02003316',
        '8SF' => 'E02003316',
        '8SG' => 'E02003316',
        '8SH' => 'E02003316',
        '8SJ' => 'E02003316',
        '8SL' => 'E02003316',
        '8SN' => 'E02003316',
        '8SP' => 'E02003316',
        '8SQ' => 'E02003316',
        '8SR' => 'E02003316',
        '8SS' => 'E02003316',
        '8ST' => 'E02003316',
        '8SU' => 'E02003316',
        '8SW' => 'E02003316',
        '8SX' => 'E02003316',
        '8SY' => 'E02003316',
        '8TA' => 'E02003316',
        '8TB' => 'E02003316',
        '8TD' => 'E02003316',
        '8TE' => 'E02003316',
        '8TF' => 'E02003316',
        '8TG' => 'E02003316',
        '8TH' => 'E02003316',
        '8TJ' => 'E02003316',
        '8TL' => 'E02003316',
        '8TN' => 'E02003316',
        '8TP' => 'E02003315',
        '8TQ' => 'E02003316',
        '8TR' => 'E02003315',
        '8TS' => 'E02003315',
        '8TT' => 'E02003315',
        '8TU' => 'E02003315',
        '8TW' => 'E02003316',
        '8TX' => 'E02003315',
        '8TY' => 'E02003327',
        '8TZ' => 'E02003315',
        '8UA' => 'E02003315',
        '8UB' => 'E02003315',
        '8UD' => 'E02003315',
        '8UE' => 'E02003315',
        '8UF' => 'E02003315',
        '8UG' => 'E02003315',
        '8UH' => 'E02003315',
        '8UJ' => 'E02003315',
        '8UL' => 'E02003315',
        '8UN' => 'E02003315',
        '8UQ' => 'E02003315',
        '8UY' => 'E02003327',
        '8WA' => 'E02003327',
        '8WB' => 'E02003327',
        '8WD' => 'E02003327',
        '8WE' => 'E02003327',
        '8WF' => 'E02003327',
        '8WR' => 'E02003327',
        '8WT' => 'E02003327',
        '8WW' => 'E02003327',
        '8WX' => 'E02003327',
        '8WY' => 'E02003327',
        '8WZ' => 'E02003327',
        '8XB' => 'E02003327',
        '8XL' => 'E02003327',
        '8XP' => 'E02003327',
        '8XZ' => 'E02003327',
        '8YA' => 'E02003327',
        '8YQ' => 'E02003327',
        '8YT' => 'E02003327',
        '8YX' => 'E02003327',
        '8YZ' => 'E02003327',
        '9AA' => 'E02003316',
        '9AB' => 'E02003316',
        '9AD' => 'E02003316',
        '9AE' => 'E02003316',
        '9AF' => 'E02003327',
        '9AG' => 'E02003314',
        '9AH' => 'E02003314',
        '9AJ' => 'E02003316',
        '9AL' => 'E02003314',
        '9AN' => 'E02003314',
        '9AP' => 'E02003314',
        '9AQ' => 'E02003314',
        '9AR' => 'E02003316',
        '9AS' => 'E02003314',
        '9AT' => 'E02003314',
        '9AU' => 'E02003314',
        '9AW' => 'E02003314',
        '9AX' => 'E02003316',
        '9AY' => 'E02003314',
        '9AZ' => 'E02003314',
        '9BA' => 'E02003314',
        '9BB' => 'E02003314',
        '9BD' => 'E02003316',
        '9BE' => 'E02003316',
        '9BF' => 'E02003314',
        '9BG' => 'E02003314',
        '9BH' => 'E02003316',
        '9BJ' => 'E02003314',
        '9BL' => 'E02003316',
        '9BN' => 'E02003314',
        '9BP' => 'E02003316',
        '9BQ' => 'E02003316',
        '9BS' => 'E02003316',
        '9BT' => 'E02003316',
        '9BU' => 'E02003316',
        '9BW' => 'E02003314',
        '9BX' => 'E02003316',
        '9BY' => 'E02003316',
        '9BZ' => 'E02003316',
        '9DA' => 'E02003316',
        '9DB' => 'E02003316',
        '9DD' => 'E02003316',
        '9DE' => 'E02003316',
        '9DF' => 'E02003316',
        '9DG' => 'E02003316',
        '9DH' => 'E02003316',
        '9DJ' => 'E02003327',
        '9DL' => 'E02003327',
        '9DN' => 'E02003327',
        '9DP' => 'E02003316',
        '9DQ' => 'E02003316',
        '9DR' => 'E02003316',
        '9DS' => 'E02003316',
        '9DT' => 'E02003316',
        '9DU' => 'E02003316',
        '9DW' => 'E02003316',
        '9DX' => 'E02003316',
        '9DY' => 'E02003316',
        '9DZ' => 'E02003316',
        '9EA' => 'E02003316',
        '9EB' => 'E02003316',
        '9ED' => 'E02003316',
        '9EE' => 'E02003316',
        '9EF' => 'E02003316',
        '9EG' => 'E02003316',
        '9EH' => 'E02003314',
        '9EJ' => 'E02003314',
        '9EL' => 'E02003316',
        '9EN' => 'E02003316',
        '9EP' => 'E02003316',
        '9EQ' => 'E02003316',
        '9ER' => 'E02003316',
        '9ES' => 'E02003316',
        '9ET' => 'E02003316',
        '9EU' => 'E02003316',
        '9EW' => 'E02003316',
        '9EX' => 'E02003316',
        '9EY' => 'E02003316',
        '9EZ' => 'E02003316',
        '9FA' => 'E02003316',
        '9FB' => 'E02003316',
        '9FD' => 'E02003316',
        '9FE' => 'E02003316',
        '9FF' => 'E02003316',
        '9FG' => 'E02003316',
        '9FH' => 'E02003316',
        '9FJ' => 'E02003316',
        '9FL' => 'E02003316',
        '9FN' => 'E02003316',
        '9FP' => 'E02003316',
        '9FQ' => 'E02003316',
        '9FR' => 'E02003316',
        '9FS' => 'E02003316',
        '9FT' => 'E02003316',
        '9FU' => 'E02003316',
        '9FW' => 'E02003316',
        '9FX' => 'E02003316',
        '9FY' => 'E02003316',
        '9GA' => 'E02003314',
        '9GB' => 'E02003316',
        '9GD' => 'E02003316',
        '9GE' => 'E02003316',
        '9GF' => 'E02003316',
        '9GJ' => 'E02003316',
        '9GL' => 'E02003316',
        '9GN' => 'E02003316',
        '9GP' => 'E02003316',
        '9GQ' => 'E02003316',
        '9GR' => 'E02003314',
        '9GS' => 'E02003314',
        '9GT' => 'E02003316',
        '9GU' => 'E02003314',
        '9GW' => 'E02003314',
        '9GX' => 'E02003314',
        '9GY' => 'E02003316',
        '9GZ' => 'E02003316',
        '9HA' => 'E02003316',
        '9HB' => 'E02003316',
        '9HD' => 'E02003316',
        '9HE' => 'E02003316',
        '9HF' => 'E02003314',
        '9HG' => 'E02003316',
        '9HH' => 'E02003316',
        '9HJ' => 'E02003316',
        '9HL' => 'E02003316',
        '9HN' => 'E02003316',
        '9HP' => 'E02003316',
        '9HQ' => 'E02003314',
        '9HR' => 'E02003314',
        '9HS' => 'E02003316',
        '9HT' => 'E02003316',
        '9HU' => 'E02003316',
        '9HW' => 'E02003316',
        '9HX' => 'E02003316',
        '9HY' => 'E02003316',
        '9HZ' => 'E02003316',
        '9JA' => 'E02003316',
        '9JB' => 'E02003316',
        '9JD' => 'E02003314',
        '9JE' => 'E02003316',
        '9JF' => 'E02003316',
        '9JG' => 'E02003316',
        '9JH' => 'E02003316',
        '9JJ' => 'E02003316',
        '9JL' => 'E02003316',
        '9JN' => 'E02003316',
        '9JP' => 'E02003316',
        '9JQ' => 'E02003316',
        '9JR' => 'E02003316',
        '9JS' => 'E02003316',
        '9JT' => 'E02003316',
        '9JU' => 'E02003314',
        '9JW' => 'E02003316',
        '9JX' => 'E02003314',
        '9JY' => 'E02003314',
        '9JZ' => 'E02003316',
        '9LA' => 'E02003314',
        '9LB' => 'E02003314',
        '9LD' => 'E02003327',
        '9LE' => 'E02003327',
        '9LF' => 'E02003314',
        '9LG' => 'E02003314',
        '9LH' => 'E02003316',
        '9LJ' => 'E02003314',
        '9LL' => 'E02003316',
        '9LN' => 'E02003316',
        '9LP' => 'E02003316',
        '9LQ' => 'E02003314',
        '9LR' => 'E02003314',
        '9LS' => 'E02003314',
        '9LT' => 'E02003314',
        '9LU' => 'E02003314',
        '9LW' => 'E02003314',
        '9LX' => 'E02003314',
        '9LY' => 'E02003314',
        '9LZ' => 'E02003316',
        '9NA' => 'E02003316',
        '9NB' => 'E02003327',
        '9ND' => 'E02003314',
        '9NE' => 'E02003314',
        '9NF' => 'E02003314',
        '9NG' => 'E02003327',
        '9NH' => 'E02003314',
        '9NJ' => 'E02003314',
        '9NL' => 'E02003314',
        '9NN' => 'E02003314',
        '9NP' => 'E02003314',
        '9NQ' => 'E02003314',
        '9NR' => 'E02003314',
        '9NS' => 'E02003314',
        '9NT' => 'E02003314',
        '9NU' => 'E02003314',
        '9NW' => 'E02003314',
        '9NX' => 'E02003327',
        '9NY' => 'E02003314',
        '9NZ' => 'E02003314',
        '9PA' => 'E02003314',
        '9PB' => 'E02003314',
        '9PD' => 'E02003314',
        '9PE' => 'E02003314',
        '9PF' => 'E02003314',
        '9PG' => 'E02003314',
        '9PH' => 'E02003314',
        '9PJ' => 'E02003314',
        '9PL' => 'E02003314',
        '9PN' => 'E02003314',
        '9PP' => 'E02003314',
        '9PQ' => 'E02003314',
        '9PR' => 'E02003314',
        '9PS' => 'E02003314',
        '9PT' => 'E02003314',
        '9PU' => 'E02003314',
        '9PW' => 'E02003314',
        '9PX' => 'E02003314',
        '9PY' => 'E02003314',
        '9PZ' => 'E02003314',
        '9QA' => 'E02003314',
        '9QB' => 'E02003314',
        '9QD' => 'E02003314',
        '9QE' => 'E02003314',
        '9QF' => 'E02003314',
        '9QG' => 'E02003314',
        '9QH' => 'E02003314',
        '9QJ' => 'E02003314',
        '9QL' => 'E02003314',
        '9QN' => 'E02003314',
        '9QP' => 'E02003314',
        '9QQ' => 'E02003314',
        '9QR' => 'E02003314',
        '9QS' => 'E02003314',
        '9QT' => 'E02003314',
        '9QU' => 'E02003314',
        '9QW' => 'E02003314',
        '9QX' => 'E02003314',
        '9QY' => 'E02003314',
        '9QZ' => 'E02003314',
        '9RA' => 'E02003314',
        '9RB' => 'E02003314',
        '9RD' => 'E02003314',
        '9RE' => 'E02003314',
        '9RF' => 'E02003314',
        '9RG' => 'E02003314',
        '9RH' => 'E02003314',
        '9RJ' => 'E02003314',
        '9RL' => 'E02003314',
        '9RN' => 'E02003314',
        '9RP' => 'E02003314',
        '9RQ' => 'E02003314',
        '9RR' => 'E02003314',
        '9RS' => 'E02003314',
        '9RT' => 'E02003314',
        '9RU' => 'E02003314',
        '9RW' => 'E02003314',
        '9RX' => 'E02003314',
        '9RY' => 'E02003314',
        '9RZ' => 'E02003314',
        '9SA' => 'E02003314',
        '9SB' => 'E02003314',
        '9SD' => 'E02003314',
        '9SE' => 'E02003314',
        '9SF' => 'E02003314',
        '9SG' => 'E02003314',
        '9SH' => 'E02003314',
        '9SJ' => 'E02003314',
        '9SL' => 'E02003314',
        '9SN' => 'E02003314',
        '9SP' => 'E02003314',
        '9SQ' => 'E02003314',
        '9SR' => 'E02003314',
        '9SS' => 'E02003314',
        '9ST' => 'E02003314',
        '9SU' => 'E02003314',
        '9SW' => 'E02003314',
        '9SX' => 'E02003314',
        '9SY' => 'E02003314',
        '9SZ' => 'E02003314',
        '9TA' => 'E02003314',
        '9TB' => 'E02003314',
        '9TD' => 'E02003314',
        '9TE' => 'E02003314',
        '9TF' => 'E02003314',
        '9TG' => 'E02003314',
        '9TH' => 'E02003314',
        '9TJ' => 'E02003314',
        '9TL' => 'E02003314',
        '9TN' => 'E02003314',
        '9TP' => 'E02003314',
        '9TQ' => 'E02003314',
        '9TR' => 'E02003314',
        '9TS' => 'E02003314',
        '9TT' => 'E02003314',
        '9TU' => 'E02003314',
        '9TW' => 'E02003314',
        '9TX' => 'E02003314',
        '9TY' => 'E02003314',
        '9UA' => 'E02003314',
        '9UB' => 'E02003316',
        '9UD' => 'E02003316',
        '9UE' => 'E02003314',
        '9UF' => 'E02003316',
        '9UG' => 'E02003314',
        '9UH' => 'E02003314',
        '9UJ' => 'E02003314',
        '9UL' => 'E02003314',
        '9UN' => 'E02003314',
        '9UP' => 'E02003316',
        '9UQ' => 'E02003314',
        '9UR' => 'E02003314',
        '9US' => 'E02003316',
        '9UT' => 'E02003316',
        '9WA' => 'E02003327',
        '9WB' => 'E02003327',
        '9WD' => 'E02003327',
        '9WE' => 'E02003327',
        '9WF' => 'E02003327',
        '9WG' => 'E02003327',
        '9WH' => 'E02003327',
        '9WJ' => 'E02003327',
        '9WL' => 'E02003327',
        '9WN' => 'E02003327',
        '9WP' => 'E02003327',
        '9WQ' => 'E02003327',
        '9WR' => 'E02003327',
        '9WS' => 'E02003327',
        '9WT' => 'E02003314',
        '9WU' => 'E02003327',
        '9WW' => 'E02003327',
        '9WX' => 'E02003327',
        '9WY' => 'E02003327',
        '9WZ' => 'E02003327',
        '9XA' => 'E02003327',
        '9XB' => 'E02003327',
        '9XD' => 'E02003314',
        '9XE' => 'E02003314',
        '9XF' => 'E02003314',
        '9XG' => 'E02003327',
        '9XH' => 'E02003327',
        '9XJ' => 'E02003327',
        '9XL' => 'E02003316',
        '9XN' => 'E02003327',
        '9XP' => 'E02003327',
        '9XQ' => 'E02003316',
        '9XT' => 'E02003316',
        '9YT' => 'E02003327',
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
