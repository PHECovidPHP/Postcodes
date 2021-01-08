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
final class SS11
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '7AA' => 'E02004428',
        '7AB' => 'E02004428',
        '7AD' => 'E02004428',
        '7AE' => 'E02004428',
        '7AF' => 'E02004428',
        '7AG' => 'E02004428',
        '7AH' => 'E02004428',
        '7AJ' => 'E02004428',
        '7AL' => 'E02004428',
        '7AN' => 'E02004428',
        '7AP' => 'E02004428',
        '7AQ' => 'E02004428',
        '7AR' => 'E02004428',
        '7AS' => 'E02004428',
        '7AT' => 'E02004428',
        '7AU' => 'E02004429',
        '7AW' => 'E02004428',
        '7AX' => 'E02004505',
        '7AY' => 'E02004428',
        '7AZ' => 'E02004428',
        '7BA' => 'E02004428',
        '7BB' => 'E02004428',
        '7BD' => 'E02004428',
        '7BE' => 'E02004505',
        '7BF' => 'E02004428',
        '7BG' => 'E02004505',
        '7BH' => 'E02004505',
        '7BJ' => 'E02004505',
        '7BL' => 'E02004505',
        '7BN' => 'E02004505',
        '7BP' => 'E02004505',
        '7BQ' => 'E02004505',
        '7BS' => 'E02004505',
        '7BT' => 'E02004428',
        '7BU' => 'E02004428',
        '7BW' => 'E02004505',
        '7BX' => 'E02004428',
        '7BY' => 'E02004428',
        '7BZ' => 'E02004428',
        '7DA' => 'E02004428',
        '7DB' => 'E02004428',
        '7DD' => 'E02004428',
        '7DE' => 'E02004428',
        '7DF' => 'E02004505',
        '7DG' => 'E02004428',
        '7DH' => 'E02004505',
        '7DJ' => 'E02004428',
        '7DL' => 'E02004428',
        '7DN' => 'E02004505',
        '7DP' => 'E02004505',
        '7DQ' => 'E02004505',
        '7DR' => 'E02004505',
        '7DS' => 'E02004505',
        '7DT' => 'E02004505',
        '7DU' => 'E02004428',
        '7DW' => 'E02004505',
        '7DX' => 'E02004505',
        '7DY' => 'E02004505',
        '7DZ' => 'E02004505',
        '7EA' => 'E02004428',
        '7EB' => 'E02004428',
        '7EE' => 'E02004428',
        '7EF' => 'E02004428',
        '7EG' => 'E02004428',
        '7EH' => 'E02004428',
        '7EJ' => 'E02004428',
        '7EL' => 'E02004428',
        '7EN' => 'E02004428',
        '7EP' => 'E02004428',
        '7EQ' => 'E02004428',
        '7ER' => 'E02004428',
        '7ES' => 'E02004505',
        '7ET' => 'E02004505',
        '7EU' => 'E02004505',
        '7EW' => 'E02004428',
        '7EX' => 'E02004505',
        '7EY' => 'E02004505',
        '7EZ' => 'E02004505',
        '7FA' => 'E02004505',
        '7FB' => 'E02004428',
        '7FD' => 'E02004505',
        '7FE' => 'E02004505',
        '7FF' => 'E02004428',
        '7FG' => 'E02004505',
        '7FH' => 'E02004428',
        '7FL' => 'E02004428',
        '7FN' => 'E02004428',
        '7FP' => 'E02004428',
        '7FQ' => 'E02004428',
        '7FR' => 'E02004428',
        '7FS' => 'E02004428',
        '7FT' => 'E02004428',
        '7FU' => 'E02004505',
        '7FW' => 'E02004505',
        '7FX' => 'E02004505',
        '7FY' => 'E02004505',
        '7FZ' => 'E02004505',
        '7GA' => 'E02004505',
        '7GB' => 'E02004428',
        '7GD' => 'E02004505',
        '7GE' => 'E02004505',
        '7GF' => 'E02004505',
        '7GG' => 'E02004505',
        '7GH' => 'E02004505',
        '7GJ' => 'E02004505',
        '7GL' => 'E02004505',
        '7GN' => 'E02004505',
        '7GP' => 'E02004505',
        '7GQ' => 'E02004428',
        '7GR' => 'E02004505',
        '7GS' => 'E02004505',
        '7GT' => 'E02004505',
        '7GU' => 'E02004428',
        '7GW' => 'E02004505',
        '7GX' => 'E02004505',
        '7GY' => 'E02004505',
        '7GZ' => 'E02004505',
        '7HA' => 'E02004505',
        '7HB' => 'E02004505',
        '7HD' => 'E02004505',
        '7HE' => 'E02004505',
        '7HF' => 'E02004505',
        '7HG' => 'E02004428',
        '7HH' => 'E02004505',
        '7HJ' => 'E02004428',
        '7HL' => 'E02004428',
        '7HN' => 'E02004428',
        '7HP' => 'E02004505',
        '7HQ' => 'E02004428',
        '7HR' => 'E02004428',
        '7HS' => 'E02004505',
        '7HT' => 'E02004505',
        '7HU' => 'E02004505',
        '7HW' => 'E02004428',
        '7HX' => 'E02004505',
        '7HY' => 'E02004505',
        '7HZ' => 'E02004505',
        '7JA' => 'E02004505',
        '7JB' => 'E02004505',
        '7JD' => 'E02004505',
        '7JE' => 'E02004505',
        '7JF' => 'E02004505',
        '7JG' => 'E02004505',
        '7JH' => 'E02004428',
        '7JJ' => 'E02004505',
        '7JL' => 'E02004505',
        '7JN' => 'E02004505',
        '7JP' => 'E02004428',
        '7JQ' => 'E02004505',
        '7JR' => 'E02004428',
        '7JS' => 'E02004428',
        '7JT' => 'E02004428',
        '7JU' => 'E02004428',
        '7JW' => 'E02004505',
        '7JX' => 'E02004428',
        '7JY' => 'E02004428',
        '7JZ' => 'E02004428',
        '7LA' => 'E02004428',
        '7LB' => 'E02004505',
        '7LD' => 'E02004428',
        '7LE' => 'E02004428',
        '7LF' => 'E02004428',
        '7LG' => 'E02004428',
        '7LH' => 'E02004505',
        '7LN' => 'E02004505',
        '7LP' => 'E02004505',
        '7LR' => 'E02004505',
        '7LS' => 'E02004505',
        '7LT' => 'E02004428',
        '7LU' => 'E02004428',
        '7LW' => 'E02004505',
        '7LX' => 'E02004505',
        '7LY' => 'E02004505',
        '7LZ' => 'E02004505',
        '7NA' => 'E02004505',
        '7NB' => 'E02004505',
        '7ND' => 'E02004428',
        '7NE' => 'E02004428',
        '7NJ' => 'E02004505',
        '7NL' => 'E02004428',
        '7NN' => 'E02004428',
        '7NP' => 'E02004505',
        '7NR' => 'E02004505',
        '7NS' => 'E02004505',
        '7NT' => 'E02004505',
        '7NU' => 'E02004505',
        '7NW' => 'E02004505',
        '7NX' => 'E02004505',
        '7NY' => 'E02004505',
        '7PA' => 'E02004502',
        '7PB' => 'E02004502',
        '7PD' => 'E02004502',
        '7PE' => 'E02004502',
        '7PF' => 'E02004502',
        '7PG' => 'E02004428',
        '7PN' => 'E02004505',
        '7PP' => 'E02004505',
        '7PR' => 'E02004505',
        '7PS' => 'E02004505',
        '7PT' => 'E02004505',
        '7PU' => 'E02004505',
        '7PW' => 'E02004428',
        '7PX' => 'E02004505',
        '7PY' => 'E02004505',
        '7PZ' => 'E02004505',
        '7QA' => 'E02004505',
        '7QB' => 'E02004505',
        '7QD' => 'E02004505',
        '7QE' => 'E02004505',
        '7QF' => 'E02004505',
        '7QG' => 'E02004505',
        '7QH' => 'E02004505',
        '7QJ' => 'E02004505',
        '7QL' => 'E02004505',
        '7QN' => 'E02004505',
        '7QP' => 'E02004505',
        '7QQ' => 'E02004505',
        '7QR' => 'E02004505',
        '7QS' => 'E02004505',
        '7QT' => 'E02004505',
        '7QU' => 'E02004505',
        '7QW' => 'E02004505',
        '7QX' => 'E02004505',
        '7QY' => 'E02004505',
        '7QZ' => 'E02004568',
        '7RA' => 'E02004505',
        '7RE' => 'E02004505',
        '7RF' => 'E02004505',
        '7RG' => 'E02004505',
        '7RH' => 'E02004505',
        '7RJ' => 'E02004568',
        '7RL' => 'E02004505',
        '7RN' => 'E02004505',
        '7RP' => 'E02004505',
        '7RQ' => 'E02004505',
        '7RR' => 'E02004505',
        '7RS' => 'E02004505',
        '7RW' => 'E02004505',
        '7SB' => 'E02004505',
        '7SD' => 'E02004505',
        '7SE' => 'E02004505',
        '7SF' => 'E02004428',
        '7SG' => 'E02004505',
        '7SH' => 'E02004505',
        '7UD' => 'E02004428',
        '7WA' => 'E02004428',
        '7WB' => 'E02004428',
        '7WD' => 'E02004428',
        '7WE' => 'E02004428',
        '7WF' => 'E02004428',
        '7WQ' => 'E02004428',
        '7WR' => 'E02004428',
        '7WS' => 'E02004428',
        '7WT' => 'E02004428',
        '7WU' => 'E02004428',
        '7WW' => 'E02004428',
        '7WX' => 'E02004428',
        '7WY' => 'E02004428',
        '7WZ' => 'E02004428',
        '7XA' => 'E02004428',
        '7XB' => 'E02004428',
        '7XX' => 'E02004505',
        '7YQ' => 'E02004428',
        '7YR' => 'E02004428',
        '7YW' => 'E02004505',
        '7YX' => 'E02004428',
        '7YY' => 'E02004505',
        '7ZE' => 'E02004428',
        '7ZP' => 'E02004428',
        '8AA' => 'E02004428',
        '8AB' => 'E02004428',
        '8AD' => 'E02004428',
        '8AE' => 'E02004428',
        '8AF' => 'E02004428',
        '8AG' => 'E02004428',
        '8AH' => 'E02004428',
        '8AJ' => 'E02004428',
        '8AL' => 'E02004428',
        '8AN' => 'E02004428',
        '8AP' => 'E02004428',
        '8AQ' => 'E02004428',
        '8AR' => 'E02004428',
        '8AS' => 'E02004428',
        '8AT' => 'E02004428',
        '8AU' => 'E02004428',
        '8AW' => 'E02004428',
        '8AX' => 'E02004428',
        '8AY' => 'E02004428',
        '8AZ' => 'E02004428',
        '8BA' => 'E02004428',
        '8BB' => 'E02004428',
        '8BD' => 'E02004428',
        '8BE' => 'E02004428',
        '8BF' => 'E02004430',
        '8BG' => 'E02004428',
        '8BH' => 'E02004430',
        '8BJ' => 'E02004430',
        '8BL' => 'E02004430',
        '8BN' => 'E02004430',
        '8BP' => 'E02004430',
        '8BQ' => 'E02004430',
        '8BR' => 'E02004430',
        '8BS' => 'E02004430',
        '8BT' => 'E02004430',
        '8BU' => 'E02004428',
        '8BW' => 'E02004430',
        '8BX' => 'E02004430',
        '8BY' => 'E02004430',
        '8BZ' => 'E02004430',
        '8DA' => 'E02004428',
        '8DB' => 'E02004430',
        '8DD' => 'E02004430',
        '8DE' => 'E02004430',
        '8DF' => 'E02004430',
        '8DG' => 'E02004428',
        '8DH' => 'E02004430',
        '8DJ' => 'E02004430',
        '8DL' => 'E02004430',
        '8DN' => 'E02004430',
        '8DP' => 'E02004430',
        '8DQ' => 'E02004430',
        '8DR' => 'E02004430',
        '8DS' => 'E02004428',
        '8DT' => 'E02004428',
        '8DU' => 'E02004428',
        '8DW' => 'E02004428',
        '8DX' => 'E02004428',
        '8DY' => 'E02004430',
        '8DZ' => 'E02004428',
        '8EA' => 'E02004428',
        '8EB' => 'E02004428',
        '8ED' => 'E02004430',
        '8EE' => 'E02004428',
        '8EF' => 'E02004430',
        '8EG' => 'E02004430',
        '8EH' => 'E02004430',
        '8EJ' => 'E02004430',
        '8EL' => 'E02004430',
        '8EN' => 'E02004428',
        '8EP' => 'E02004430',
        '8EQ' => 'E02004430',
        '8ER' => 'E02004430',
        '8ES' => 'E02004428',
        '8ET' => 'E02004430',
        '8EU' => 'E02004430',
        '8EW' => 'E02004428',
        '8EX' => 'E02004428',
        '8EY' => 'E02004430',
        '8EZ' => 'E02004428',
        '8FA' => 'E02004428',
        '8FB' => 'E02004428',
        '8FD' => 'E02004428',
        '8FE' => 'E02004428',
        '8FF' => 'E02004430',
        '8FG' => 'E02004428',
        '8FH' => 'E02004428',
        '8FJ' => 'E02004428',
        '8FL' => 'E02004430',
        '8FN' => 'E02004428',
        '8FP' => 'E02004430',
        '8FQ' => 'E02004430',
        '8FR' => 'E02004430',
        '8FS' => 'E02004428',
        '8FT' => 'E02004430',
        '8FU' => 'E02004430',
        '8FW' => 'E02004430',
        '8FX' => 'E02004430',
        '8FY' => 'E02004428',
        '8FZ' => 'E02004428',
        '8GB' => 'E02004428',
        '8GD' => 'E02004428',
        '8GE' => 'E02004430',
        '8GF' => 'E02004430',
        '8GG' => 'E02004428',
        '8GH' => 'E02004568',
        '8GR' => 'E02004428',
        '8GZ' => 'E02004430',
        '8HA' => 'E02004428',
        '8HB' => 'E02004428',
        '8HD' => 'E02004428',
        '8HE' => 'E02004428',
        '8HF' => 'E02004428',
        '8HG' => 'E02004428',
        '8HH' => 'E02004428',
        '8HJ' => 'E02004428',
        '8HL' => 'E02004428',
        '8HN' => 'E02004428',
        '8HP' => 'E02004428',
        '8HQ' => 'E02004428',
        '8HR' => 'E02004428',
        '8HS' => 'E02004428',
        '8HT' => 'E02004428',
        '8HU' => 'E02004428',
        '8HW' => 'E02004428',
        '8HX' => 'E02004428',
        '8HY' => 'E02004428',
        '8HZ' => 'E02004428',
        '8JA' => 'E02004428',
        '8JB' => 'E02004428',
        '8JD' => 'E02004428',
        '8JE' => 'E02004428',
        '8JF' => 'E02004428',
        '8JJ' => 'E02004428',
        '8JL' => 'E02004428',
        '8JN' => 'E02004428',
        '8JP' => 'E02004428',
        '8JR' => 'E02004428',
        '8JS' => 'E02004430',
        '8JT' => 'E02004428',
        '8JU' => 'E02004430',
        '8JW' => 'E02004428',
        '8JX' => 'E02004428',
        '8JY' => 'E02004430',
        '8JZ' => 'E02004430',
        '8LA' => 'E02004428',
        '8LB' => 'E02004428',
        '8LE' => 'E02004430',
        '8LH' => 'E02004430',
        '8LJ' => 'E02004430',
        '8LL' => 'E02004430',
        '8LN' => 'E02004430',
        '8LP' => 'E02004430',
        '8LQ' => 'E02004430',
        '8LR' => 'E02004430',
        '8LS' => 'E02004430',
        '8LT' => 'E02004430',
        '8LU' => 'E02004430',
        '8LW' => 'E02004430',
        '8LX' => 'E02004430',
        '8LY' => 'E02004430',
        '8LZ' => 'E02004430',
        '8NA' => 'E02004430',
        '8NB' => 'E02004430',
        '8ND' => 'E02004430',
        '8NE' => 'E02004430',
        '8NF' => 'E02004430',
        '8NG' => 'E02004430',
        '8NH' => 'E02004430',
        '8NJ' => 'E02004430',
        '8NL' => 'E02004430',
        '8NN' => 'E02004430',
        '8NP' => 'E02004430',
        '8NQ' => 'E02004430',
        '8NR' => 'E02004430',
        '8NS' => 'E02004430',
        '8NT' => 'E02004430',
        '8NU' => 'E02004430',
        '8NW' => 'E02004430',
        '8NX' => 'E02004430',
        '8NZ' => 'E02004430',
        '8PA' => 'E02004430',
        '8PD' => 'E02004430',
        '8PE' => 'E02004430',
        '8PG' => 'E02004430',
        '8PH' => 'E02004430',
        '8PJ' => 'E02004430',
        '8PL' => 'E02004430',
        '8PN' => 'E02004430',
        '8PP' => 'E02004430',
        '8PQ' => 'E02004430',
        '8PR' => 'E02004430',
        '8PS' => 'E02004430',
        '8PT' => 'E02004430',
        '8PU' => 'E02004430',
        '8PW' => 'E02004430',
        '8PX' => 'E02004430',
        '8PZ' => 'E02004430',
        '8QA' => 'E02004430',
        '8QB' => 'E02004430',
        '8QE' => 'E02004430',
        '8QF' => 'E02004430',
        '8QG' => 'E02004430',
        '8QH' => 'E02004430',
        '8QJ' => 'E02004430',
        '8QL' => 'E02004430',
        '8QN' => 'E02004430',
        '8QP' => 'E02004430',
        '8QQ' => 'E02004430',
        '8QR' => 'E02004430',
        '8QS' => 'E02004430',
        '8QT' => 'E02004430',
        '8QU' => 'E02004430',
        '8QW' => 'E02004430',
        '8QX' => 'E02004430',
        '8QY' => 'E02004430',
        '8QZ' => 'E02004430',
        '8RA' => 'E02004430',
        '8RB' => 'E02004430',
        '8RD' => 'E02004430',
        '8RE' => 'E02004430',
        '8RF' => 'E02004430',
        '8RG' => 'E02004430',
        '8RH' => 'E02004430',
        '8RJ' => 'E02004430',
        '8RL' => 'E02004428',
        '8RN' => 'E02004430',
        '8RP' => 'E02004430',
        '8RQ' => 'E02004430',
        '8RR' => 'E02004430',
        '8RS' => 'E02004428',
        '8RT' => 'E02004430',
        '8RU' => 'E02004430',
        '8RW' => 'E02004430',
        '8RZ' => 'E02004430',
        '8SA' => 'E02004568',
        '8SB' => 'E02004430',
        '8SD' => 'E02004430',
        '8SE' => 'E02004428',
        '8SG' => 'E02004568',
        '8SH' => 'E02004568',
        '8SJ' => 'E02004568',
        '8SN' => 'E02004568',
        '8SP' => 'E02004568',
        '8SQ' => 'E02004568',
        '8SR' => 'E02004568',
        '8SS' => 'E02004568',
        '8SW' => 'E02004568',
        '8SX' => 'E02004568',
        '8SY' => 'E02004568',
        '8SZ' => 'E02004568',
        '8TA' => 'E02004568',
        '8TB' => 'E02004568',
        '8TD' => 'E02004568',
        '8TE' => 'E02004568',
        '8TF' => 'E02004568',
        '8TG' => 'E02004568',
        '8TH' => 'E02004568',
        '8TJ' => 'E02004568',
        '8TL' => 'E02004568',
        '8TN' => 'E02004568',
        '8TP' => 'E02004568',
        '8TQ' => 'E02004430',
        '8TR' => 'E02004568',
        '8TS' => 'E02004568',
        '8TT' => 'E02004568',
        '8TZ' => 'E02004568',
        '8UA' => 'E02004568',
        '8UB' => 'E02004568',
        '8UD' => 'E02004568',
        '8UE' => 'E02004568',
        '8UF' => 'E02004568',
        '8UJ' => 'E02004430',
        '8US' => 'E02004428',
        '8UT' => 'E02004428',
        '8UU' => 'E02004428',
        '8UW' => 'E02004428',
        '8UX' => 'E02004428',
        '8UY' => 'E02004428',
        '8UZ' => 'E02004430',
        '8WA' => 'E02004430',
        '8WB' => 'E02004428',
        '8WD' => 'E02004430',
        '8WE' => 'E02004430',
        '8WF' => 'E02004428',
        '8WG' => 'E02004428',
        '8WH' => 'E02004430',
        '8WJ' => 'E02004430',
        '8WL' => 'E02004428',
        '8WN' => 'E02004428',
        '8WP' => 'E02004428',
        '8WQ' => 'E02004430',
        '8WR' => 'E02004428',
        '8WS' => 'E02004428',
        '8WT' => 'E02004428',
        '8WU' => 'E02004428',
        '8WW' => 'E02004428',
        '8WX' => 'E02004428',
        '8WY' => 'E02004428',
        '8WZ' => 'E02004428',
        '8XA' => 'E02004430',
        '8XB' => 'E02004430',
        '8XD' => 'E02004430',
        '8XE' => 'E02004430',
        '8XF' => 'E02004430',
        '8XG' => 'E02004430',
        '8XH' => 'E02004430',
        '8XJ' => 'E02004430',
        '8XL' => 'E02004430',
        '8XN' => 'E02004430',
        '8XP' => 'E02004430',
        '8XQ' => 'E02004430',
        '8XR' => 'E02004430',
        '8XS' => 'E02004430',
        '8XT' => 'E02004430',
        '8XU' => 'E02004430',
        '8XW' => 'E02004430',
        '8XX' => 'E02004430',
        '8XY' => 'E02004430',
        '8XZ' => 'E02004430',
        '8YA' => 'E02004430',
        '8YB' => 'E02004430',
        '8YD' => 'E02004430',
        '8YE' => 'E02004430',
        '8YF' => 'E02004430',
        '8YG' => 'E02004430',
        '8YH' => 'E02004430',
        '8YJ' => 'E02004430',
        '8YL' => 'E02004430',
        '8YN' => 'E02004430',
        '8YP' => 'E02004430',
        '8YQ' => 'E02004430',
        '8YR' => 'E02004430',
        '8YS' => 'E02004430',
        '8YT' => 'E02004430',
        '8YU' => 'E02004430',
        '8YW' => 'E02004430',
        '8YX' => 'E02004430',
        '8YY' => 'E02004430',
        '8YZ' => 'E02004428',
        '8ZA' => 'E02004430',
        '8ZB' => 'E02004428',
        '8ZD' => 'E02004430',
        '8ZJ' => 'E02004428',
        '8ZL' => 'E02004428',
        '8ZN' => 'E02004428',
        '8ZP' => 'E02004428',
        '8ZQ' => 'E02004428',
        '8ZR' => 'E02004428',
        '8ZU' => 'E02004428',
        '8ZX' => 'E02004430',
        '9AB' => 'E02004428',
        '9AD' => 'E02004428',
        '9AE' => 'E02004428',
        '9AF' => 'E02004428',
        '9AH' => 'E02004428',
        '9AJ' => 'E02004428',
        '9AL' => 'E02004428',
        '9AN' => 'E02004428',
        '9AQ' => 'E02004428',
        '9AS' => 'E02004428',
        '9AT' => 'E02004428',
        '9AU' => 'E02004428',
        '9AY' => 'E02004428',
        '9BA' => 'E02004428',
        '9BB' => 'E02004428',
        '9BD' => 'E02004428',
        '9BE' => 'E02004428',
        '9BF' => 'E02004428',
        '9BG' => 'E02004428',
        '9BJ' => 'E02004428',
        '9BL' => 'E02004428',
        '9BN' => 'E02004428',
        '9BP' => 'E02004428',
        '9BQ' => 'E02004428',
        '9BR' => 'E02004428',
        '9BS' => 'E02004428',
        '9BT' => 'E02004428',
        '9BU' => 'E02004428',
        '9BW' => 'E02004428',
        '9BX' => 'E02004428',
        '9BY' => 'E02004428',
        '9BZ' => 'E02004428',
        '9DA' => 'E02004428',
        '9DB' => 'E02004428',
        '9DD' => 'E02004428',
        '9DE' => 'E02004428',
        '9DF' => 'E02004428',
        '9DG' => 'E02004428',
        '9DH' => 'E02004428',
        '9DJ' => 'E02004428',
        '9DL' => 'E02004428',
        '9DN' => 'E02004428',
        '9DP' => 'E02004428',
        '9DQ' => 'E02004428',
        '9DR' => 'E02004428',
        '9DS' => 'E02004428',
        '9DT' => 'E02004428',
        '9DU' => 'E02004428',
        '9DW' => 'E02004428',
        '9DX' => 'E02004428',
        '9DY' => 'E02004428',
        '9DZ' => 'E02004428',
        '9EA' => 'E02004428',
        '9EB' => 'E02004428',
        '9ED' => 'E02004428',
        '9EE' => 'E02004428',
        '9EF' => 'E02004428',
        '9EG' => 'E02004428',
        '9EJ' => 'E02004428',
        '9EL' => 'E02004428',
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
