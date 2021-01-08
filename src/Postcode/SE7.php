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
final class SE7
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '7AA' => 'E02000324',
        '7AB' => 'E02000326',
        '7AD' => 'E02000324',
        '7AE' => 'E02000324',
        '7AF' => 'E02000324',
        '7AG' => 'E02006929',
        '7AH' => 'E02006929',
        '7AJ' => 'E02006929',
        '7AL' => 'E02006929',
        '7AN' => 'E02006929',
        '7AP' => 'E02006929',
        '7AQ' => 'E02006929',
        '7AR' => 'E02006929',
        '7AS' => 'E02000324',
        '7AT' => 'E02006929',
        '7AU' => 'E02000326',
        '7AW' => 'E02006929',
        '7AX' => 'E02006929',
        '7AY' => 'E02006929',
        '7AZ' => 'E02000324',
        '7BA' => 'E02000324',
        '7BB' => 'E02000324',
        '7BD' => 'E02000331',
        '7BE' => 'E02000331',
        '7BF' => 'E02000331',
        '7BG' => 'E02000331',
        '7BH' => 'E02000331',
        '7BJ' => 'E02000331',
        '7BL' => 'E02000324',
        '7BN' => 'E02000331',
        '7BP' => 'E02000331',
        '7BQ' => 'E02000331',
        '7BS' => 'E02000331',
        '7BT' => 'E02000331',
        '7BU' => 'E02000331',
        '7BW' => 'E02000324',
        '7BX' => 'E02000331',
        '7BY' => 'E02000331',
        '7BZ' => 'E02000324',
        '7DA' => 'E02000331',
        '7DB' => 'E02000324',
        '7DD' => 'E02000324',
        '7DE' => 'E02000324',
        '7DF' => 'E02000324',
        '7DG' => 'E02000324',
        '7DH' => 'E02000324',
        '7DJ' => 'E02006930',
        '7DL' => 'E02000324',
        '7DN' => 'E02000326',
        '7DP' => 'E02000326',
        '7DQ' => 'E02000324',
        '7DR' => 'E02000324',
        '7DS' => 'E02000324',
        '7DT' => 'E02000324',
        '7DU' => 'E02000324',
        '7DW' => 'E02000324',
        '7DX' => 'E02000326',
        '7DY' => 'E02000326',
        '7DZ' => 'E02000326',
        '7EA' => 'E02000326',
        '7EB' => 'E02000326',
        '7ED' => 'E02000326',
        '7EE' => 'E02000316',
        '7EF' => 'E02000331',
        '7EG' => 'E02000316',
        '7EH' => 'E02000324',
        '7EJ' => 'E02000324',
        '7EL' => 'E02000324',
        '7EN' => 'E02000324',
        '7EP' => 'E02000324',
        '7EQ' => 'E02000324',
        '7ER' => 'E02000324',
        '7ES' => 'E02000324',
        '7ET' => 'E02000324',
        '7EU' => 'E02000326',
        '7EW' => 'E02000326',
        '7EX' => 'E02000326',
        '7EY' => 'E02000326',
        '7EZ' => 'E02000326',
        '7FA' => 'E02006929',
        '7FB' => 'E02000326',
        '7FD' => 'E02000326',
        '7FE' => 'E02000326',
        '7FF' => 'E02000326',
        '7FG' => 'E02000326',
        '7FH' => 'E02000326',
        '7FJ' => 'E02000326',
        '7FL' => 'E02000326',
        '7FN' => 'E02000326',
        '7FP' => 'E02000326',
        '7FQ' => 'E02000324',
        '7FR' => 'E02006929',
        '7FS' => 'E02006930',
        '7FT' => 'E02006930',
        '7FW' => 'E02006930',
        '7FX' => 'E02006930',
        '7FZ' => 'E02006929',
        '7GA' => 'E02006929',
        '7GB' => 'E02006929',
        '7GH' => 'E02006929',
        '7GJ' => 'E02006929',
        '7GP' => 'E02006929',
        '7GR' => 'E02006930',
        '7HA' => 'E02006930',
        '7HD' => 'E02000326',
        '7HE' => 'E02000326',
        '7HF' => 'E02000326',
        '7HG' => 'E02000326',
        '7HH' => 'E02000326',
        '7HJ' => 'E02000326',
        '7HL' => 'E02000326',
        '7HN' => 'E02000326',
        '7HP' => 'E02000326',
        '7HQ' => 'E02000326',
        '7HR' => 'E02000326',
        '7HS' => 'E02000326',
        '7HT' => 'E02000326',
        '7HU' => 'E02000326',
        '7HW' => 'E02000326',
        '7HX' => 'E02000326',
        '7HY' => 'E02000326',
        '7JA' => 'E02000326',
        '7JB' => 'E02006930',
        '7JD' => 'E02000326',
        '7JE' => 'E02000326',
        '7JF' => 'E02000326',
        '7JG' => 'E02000326',
        '7JH' => 'E02000326',
        '7JJ' => 'E02000326',
        '7JL' => 'E02000324',
        '7JN' => 'E02000326',
        '7JP' => 'E02000326',
        '7JQ' => 'E02000326',
        '7JW' => 'E02000326',
        '7JX' => 'E02000326',
        '7JY' => 'E02000326',
        '7JZ' => 'E02000326',
        '7LA' => 'E02000326',
        '7LB' => 'E02000326',
        '7LD' => 'E02000326',
        '7LE' => 'E02000326',
        '7LF' => 'E02000326',
        '7LG' => 'E02000326',
        '7LH' => 'E02000326',
        '7LJ' => 'E02000326',
        '7LL' => 'E02000326',
        '7LN' => 'E02000326',
        '7LP' => 'E02000326',
        '7LQ' => 'E02000326',
        '7LR' => 'E02000326',
        '7LS' => 'E02006929',
        '7LT' => 'E02006930',
        '7LU' => 'E02000326',
        '7LW' => 'E02000326',
        '7LX' => 'E02000326',
        '7LY' => 'E02000326',
        '7LZ' => 'E02000326',
        '7NA' => 'E02000326',
        '7NB' => 'E02000326',
        '7ND' => 'E02000326',
        '7NE' => 'E02000326',
        '7NF' => 'E02000326',
        '7NG' => 'E02000326',
        '7NH' => 'E02000326',
        '7NJ' => 'E02000326',
        '7NL' => 'E02000326',
        '7NN' => 'E02000326',
        '7NP' => 'E02000326',
        '7NQ' => 'E02000326',
        '7NR' => 'E02000326',
        '7NS' => 'E02000326',
        '7NT' => 'E02000326',
        '7NU' => 'E02000326',
        '7NW' => 'E02000326',
        '7NX' => 'E02000326',
        '7NY' => 'E02000326',
        '7NZ' => 'E02000326',
        '7PA' => 'E02000326',
        '7PB' => 'E02000326',
        '7PD' => 'E02000324',
        '7PE' => 'E02000324',
        '7PF' => 'E02000324',
        '7PG' => 'E02000326',
        '7PH' => 'E02000326',
        '7PJ' => 'E02000326',
        '7PL' => 'E02000326',
        '7PN' => 'E02000326',
        '7PP' => 'E02000326',
        '7PQ' => 'E02000326',
        '7PR' => 'E02000326',
        '7PS' => 'E02006929',
        '7PT' => 'E02000326',
        '7PU' => 'E02000326',
        '7PW' => 'E02000326',
        '7PX' => 'E02000326',
        '7PY' => 'E02000324',
        '7PZ' => 'E02000326',
        '7QA' => 'E02000326',
        '7QB' => 'E02000326',
        '7QD' => 'E02006929',
        '7QE' => 'E02006929',
        '7QF' => 'E02006929',
        '7QG' => 'E02006929',
        '7QH' => 'E02006929',
        '7QJ' => 'E02006929',
        '7QL' => 'E02006929',
        '7QN' => 'E02006929',
        '7QP' => 'E02006929',
        '7QQ' => 'E02006929',
        '7QR' => 'E02006929',
        '7QS' => 'E02006929',
        '7QT' => 'E02006929',
        '7QU' => 'E02006929',
        '7QW' => 'E02006929',
        '7QX' => 'E02006929',
        '7QY' => 'E02006930',
        '7QZ' => 'E02006930',
        '7RA' => 'E02006930',
        '7RB' => 'E02006930',
        '7RD' => 'E02006930',
        '7RE' => 'E02006929',
        '7RF' => 'E02006930',
        '7RG' => 'E02000326',
        '7RH' => 'E02006930',
        '7RJ' => 'E02000316',
        '7RL' => 'E02006930',
        '7RN' => 'E02006930',
        '7RP' => 'E02006929',
        '7RQ' => 'E02006930',
        '7RR' => 'E02006929',
        '7RS' => 'E02006929',
        '7RT' => 'E02006929',
        '7RU' => 'E02000316',
        '7RW' => 'E02006930',
        '7RX' => 'E02000316',
        '7RY' => 'E02000316',
        '7RZ' => 'E02006929',
        '7SA' => 'E02006929',
        '7SB' => 'E02000316',
        '7SD' => 'E02006929',
        '7SE' => 'E02006930',
        '7SF' => 'E02006929',
        '7SG' => 'E02006929',
        '7SH' => 'E02006929',
        '7SJ' => 'E02006929',
        '7SL' => 'E02006929',
        '7SN' => 'E02006929',
        '7SP' => 'E02006929',
        '7SQ' => 'E02000316',
        '7SR' => 'E02006929',
        '7SS' => 'E02006929',
        '7ST' => 'E02006930',
        '7SU' => 'E02006929',
        '7SW' => 'E02006929',
        '7SX' => 'E02006929',
        '7SY' => 'E02006927',
        '7SZ' => 'E02000316',
        '7TA' => 'E02000316',
        '7TB' => 'E02000316',
        '7TD' => 'E02000326',
        '7TE' => 'E02000316',
        '7TF' => 'E02000324',
        '7TG' => 'E02000324',
        '7TH' => 'E02000324',
        '7TJ' => 'E02000324',
        '7TL' => 'E02000324',
        '7TN' => 'E02000324',
        '7TP' => 'E02000326',
        '7TQ' => 'E02000324',
        '7TR' => 'E02000326',
        '7TS' => 'E02000326',
        '7TT' => 'E02000326',
        '7TU' => 'E02000326',
        '7TW' => 'E02000326',
        '7TX' => 'E02000326',
        '7TY' => 'E02006929',
        '7TZ' => 'E02006930',
        '7UA' => 'E02000326',
        '7UB' => 'E02000326',
        '7UD' => 'E02000326',
        '7UE' => 'E02000326',
        '7UF' => 'E02000326',
        '7UG' => 'E02000326',
        '7UL' => 'E02006929',
        '7UN' => 'E02000326',
        '7UP' => 'E02006930',
        '7UY' => 'E02006930',
        '7UZ' => 'E02006930',
        '7WA' => 'E02006929',
        '7WB' => 'E02006929',
        '7WD' => 'E02006929',
        '7WE' => 'E02006929',
        '7WF' => 'E02006929',
        '7WG' => 'E02006930',
        '7WH' => 'E02006929',
        '7WJ' => 'E02006930',
        '7WL' => 'E02000326',
        '7WN' => 'E02000326',
        '7WP' => 'E02006929',
        '7WQ' => 'E02006929',
        '7WR' => 'E02000326',
        '7WS' => 'E02000326',
        '7WT' => 'E02006930',
        '7WU' => 'E02000326',
        '7WW' => 'E02000326',
        '7WX' => 'E02006929',
        '7WY' => 'E02000326',
        '7WZ' => 'E02006929',
        '7XA' => 'E02006929',
        '7XB' => 'E02006929',
        '7XD' => 'E02000326',
        '7XE' => 'E02006930',
        '7XF' => 'E02006930',
        '7XG' => 'E02006929',
        '7XH' => 'E02006929',
        '7XJ' => 'E02006930',
        '7XL' => 'E02006930',
        '7XN' => 'E02006929',
        '7XP' => 'E02006929',
        '7XQ' => 'E02006930',
        '7XR' => 'E02006930',
        '7XS' => 'E02006929',
        '7XT' => 'E02006930',
        '7XU' => 'E02006930',
        '7XW' => 'E02006930',
        '7XX' => 'E02006930',
        '7XY' => 'E02006930',
        '7XZ' => 'E02006930',
        '7YA' => 'E02006929',
        '7YB' => 'E02006929',
        '7YE' => 'E02006929',
        '7YF' => 'E02006929',
        '7YH' => 'E02006929',
        '7YQ' => 'E02006930',
        '7YW' => 'E02006929',
        '7YY' => 'E02006929',
        '7ZA' => 'E02000326',
        '7ZB' => 'E02000326',
        '7ZD' => 'E02000326',
        '7ZE' => 'E02000326',
        '7ZF' => 'E02000326',
        '7ZG' => 'E02000326',
        '7ZH' => 'E02000326',
        '7ZJ' => 'E02000326',
        '7ZL' => 'E02000326',
        '7ZN' => 'E02006930',
        '7ZP' => 'E02000326',
        '7ZQ' => 'E02000326',
        '7ZR' => 'E02006930',
        '7ZS' => 'E02000326',
        '7ZT' => 'E02000326',
        '7ZU' => 'E02000326',
        '7ZW' => 'E02006930',
        '7ZZ' => 'E02000326',
        '8AA' => 'E02000324',
        '8AB' => 'E02000324',
        '8AD' => 'E02000324',
        '8AE' => 'E02000324',
        '8AF' => 'E02000324',
        '8AG' => 'E02000324',
        '8AH' => 'E02000324',
        '8AJ' => 'E02000324',
        '8AL' => 'E02000324',
        '8AN' => 'E02000324',
        '8AP' => 'E02000324',
        '8AQ' => 'E02000324',
        '8AR' => 'E02000324',
        '8AS' => 'E02000324',
        '8AT' => 'E02000324',
        '8AU' => 'E02000324',
        '8AW' => 'E02000324',
        '8AX' => 'E02000324',
        '8AY' => 'E02000324',
        '8AZ' => 'E02000324',
        '8BA' => 'E02000324',
        '8BB' => 'E02000324',
        '8BD' => 'E02000324',
        '8BE' => 'E02000324',
        '8BF' => 'E02000324',
        '8BG' => 'E02000324',
        '8BH' => 'E02000324',
        '8BJ' => 'E02000317',
        '8BL' => 'E02000324',
        '8BN' => 'E02000317',
        '8BP' => 'E02000317',
        '8BQ' => 'E02000324',
        '8BS' => 'E02000316',
        '8BT' => 'E02000317',
        '8BU' => 'E02000324',
        '8BW' => 'E02000324',
        '8BX' => 'E02000317',
        '8BY' => 'E02000317',
        '8BZ' => 'E02000317',
        '8DA' => 'E02000317',
        '8DB' => 'E02000317',
        '8DD' => 'E02000317',
        '8DE' => 'E02000317',
        '8DF' => 'E02000316',
        '8DG' => 'E02000316',
        '8DH' => 'E02000316',
        '8DJ' => 'E02000317',
        '8DL' => 'E02000317',
        '8DN' => 'E02000316',
        '8DP' => 'E02000316',
        '8DQ' => 'E02000316',
        '8DR' => 'E02000317',
        '8DS' => 'E02000317',
        '8DT' => 'E02000324',
        '8DU' => 'E02000324',
        '8DW' => 'E02006930',
        '8DX' => 'E02000324',
        '8DY' => 'E02000324',
        '8DZ' => 'E02000324',
        '8EA' => 'E02000324',
        '8EB' => 'E02000324',
        '8ED' => 'E02000317',
        '8EE' => 'E02000317',
        '8EF' => 'E02000317',
        '8EG' => 'E02000317',
        '8EH' => 'E02000317',
        '8EJ' => 'E02000317',
        '8EL' => 'E02000317',
        '8EN' => 'E02000316',
        '8EP' => 'E02000317',
        '8EQ' => 'E02000317',
        '8ER' => 'E02000317',
        '8ES' => 'E02000317',
        '8ET' => 'E02000317',
        '8EU' => 'E02000317',
        '8EW' => 'E02000317',
        '8EX' => 'E02000317',
        '8EY' => 'E02000317',
        '8EZ' => 'E02000317',
        '8FA' => 'E02000317',
        '8FD' => 'E02000324',
        '8FE' => 'E02000316',
        '8FF' => 'E02000324',
        '8FG' => 'E02000324',
        '8FH' => 'E02000317',
        '8FJ' => 'E02000317',
        '8FL' => 'E02000317',
        '8FN' => 'E02000317',
        '8HA' => 'E02000317',
        '8HB' => 'E02000317',
        '8HD' => 'E02000317',
        '8HE' => 'E02000317',
        '8HF' => 'E02000317',
        '8HG' => 'E02000317',
        '8HH' => 'E02000324',
        '8HJ' => 'E02000324',
        '8HL' => 'E02000324',
        '8HN' => 'E02000324',
        '8HP' => 'E02000324',
        '8HQ' => 'E02000317',
        '8HR' => 'E02000324',
        '8HS' => 'E02000324',
        '8HT' => 'E02000324',
        '8HU' => 'E02000324',
        '8HW' => 'E02000324',
        '8HX' => 'E02000324',
        '8HY' => 'E02000324',
        '8HZ' => 'E02000324',
        '8JA' => 'E02000324',
        '8JB' => 'E02000324',
        '8JD' => 'E02006930',
        '8JE' => 'E02000324',
        '8JH' => 'E02000324',
        '8JJ' => 'E02000324',
        '8JL' => 'E02000324',
        '8JQ' => 'E02000324',
        '8JR' => 'E02000324',
        '8LA' => 'E02000324',
        '8LB' => 'E02000324',
        '8LD' => 'E02000324',
        '8LE' => 'E02000324',
        '8LF' => 'E02000324',
        '8LG' => 'E02000324',
        '8LH' => 'E02000316',
        '8LJ' => 'E02000316',
        '8LL' => 'E02000316',
        '8LN' => 'E02000316',
        '8LP' => 'E02000316',
        '8LQ' => 'E02000316',
        '8LR' => 'E02000316',
        '8LS' => 'E02000324',
        '8LT' => 'E02000316',
        '8LU' => 'E02000316',
        '8LW' => 'E02000316',
        '8LX' => 'E02000316',
        '8LY' => 'E02000316',
        '8LZ' => 'E02000316',
        '8NA' => 'E02000316',
        '8NB' => 'E02000316',
        '8ND' => 'E02000316',
        '8NE' => 'E02000316',
        '8NF' => 'E02000316',
        '8NH' => 'E02000316',
        '8NJ' => 'E02000316',
        '8NL' => 'E02000316',
        '8NN' => 'E02000316',
        '8NP' => 'E02000316',
        '8NQ' => 'E02000316',
        '8NR' => 'E02000316',
        '8NS' => 'E02000316',
        '8NT' => 'E02000316',
        '8NU' => 'E02000316',
        '8NW' => 'E02000316',
        '8PE' => 'E02000331',
        '8PF' => 'E02000324',
        '8PG' => 'E02000331',
        '8PH' => 'E02000331',
        '8PJ' => 'E02000331',
        '8PL' => 'E02000331',
        '8PN' => 'E02000331',
        '8PP' => 'E02000331',
        '8PQ' => 'E02000331',
        '8PR' => 'E02000331',
        '8PS' => 'E02000331',
        '8PT' => 'E02000331',
        '8PU' => 'E02000331',
        '8PW' => 'E02000331',
        '8PX' => 'E02000331',
        '8PY' => 'E02000331',
        '8PZ' => 'E02000331',
        '8QG' => 'E02000331',
        '8QH' => 'E02000331',
        '8QJ' => 'E02000331',
        '8QL' => 'E02000331',
        '8QN' => 'E02000331',
        '8QP' => 'E02000331',
        '8QQ' => 'E02000331',
        '8QR' => 'E02000331',
        '8QS' => 'E02000331',
        '8QT' => 'E02000331',
        '8QU' => 'E02000331',
        '8QW' => 'E02000331',
        '8QX' => 'E02000331',
        '8RD' => 'E02000324',
        '8RE' => 'E02000324',
        '8RG' => 'E02000324',
        '8RH' => 'E02000316',
        '8RQ' => 'E02000324',
        '8RU' => 'E02000316',
        '8RX' => 'E02000316',
        '8RY' => 'E02000316',
        '8RZ' => 'E02000316',
        '8SA' => 'E02000316',
        '8SB' => 'E02000316',
        '8SD' => 'E02000316',
        '8SH' => 'E02000316',
        '8SJ' => 'E02000316',
        '8SL' => 'E02000316',
        '8SN' => 'E02006929',
        '8SP' => 'E02000324',
        '8SQ' => 'E02000316',
        '8SR' => 'E02000324',
        '8SS' => 'E02006929',
        '8ST' => 'E02006929',
        '8SU' => 'E02006929',
        '8SX' => 'E02006929',
        '8SY' => 'E02000316',
        '8SZ' => 'E02000316',
        '8TA' => 'E02000324',
        '8TB' => 'E02000324',
        '8TD' => 'E02000324',
        '8TE' => 'E02000324',
        '8TF' => 'E02000324',
        '8TG' => 'E02000324',
        '8TH' => 'E02000324',
        '8TJ' => 'E02000324',
        '8TL' => 'E02000324',
        '8TN' => 'E02000324',
        '8TP' => 'E02000324',
        '8TQ' => 'E02000324',
        '8TR' => 'E02000324',
        '8TS' => 'E02000324',
        '8TT' => 'E02000324',
        '8TU' => 'E02000324',
        '8TW' => 'E02000324',
        '8TX' => 'E02000324',
        '8TY' => 'E02000324',
        '8TZ' => 'E02000324',
        '8UA' => 'E02000324',
        '8UB' => 'E02000324',
        '8UD' => 'E02000324',
        '8UE' => 'E02000324',
        '8UF' => 'E02000324',
        '8UG' => 'E02000324',
        '8UH' => 'E02000324',
        '8UJ' => 'E02000324',
        '8UQ' => 'E02000324',
        '8UZ' => 'E02006930',
        '8WA' => 'E02006930',
        '8WB' => 'E02000324',
        '8WD' => 'E02000324',
        '8WE' => 'E02006930',
        '8WF' => 'E02000324',
        '8WG' => 'E02000324',
        '8WH' => 'E02000324',
        '8WJ' => 'E02006930',
        '8WN' => 'E02006930',
        '8WP' => 'E02006929',
        '8WQ' => 'E02000324',
        '8WR' => 'E02006930',
        '8WS' => 'E02006930',
        '8WT' => 'E02006930',
        '8WU' => 'E02006930',
        '8WW' => 'E02006930',
        '8WX' => 'E02006930',
        '8WY' => 'E02006930',
        '8WZ' => 'E02000324',
        '8XA' => 'E02000324',
        '8XB' => 'E02000324',
        '8XD' => 'E02000324',
        '8XF' => 'E02006930',
        '8XG' => 'E02006930',
        '8XL' => 'E02006930',
        '8XR' => 'E02006930',
        '8XS' => 'E02006930',
        '8XT' => 'E02006930',
        '8XZ' => 'E02006930',
        '8YB' => 'E02000324',
        '8ZA' => 'E02000324',
        '8ZB' => 'E02000324',
        '8ZD' => 'E02000324',
        '8ZE' => 'E02000324',
        '8ZF' => 'E02000324',
        '8ZG' => 'E02000324',
        '8ZH' => 'E02000324',
        '8ZJ' => 'E02000324',
        '8ZL' => 'E02000324',
        '8ZN' => 'E02000324',
        '8ZP' => 'E02006930',
        '8ZQ' => 'E02000324',
        '8ZR' => 'E02000324',
        '8ZS' => 'E02006929',
        '8ZT' => 'E02000324',
        '8ZU' => 'E02006930',
        '8ZW' => 'E02000324',
        '9AD' => 'E02006930',
        '9AE' => 'E02006930',
        '9AQ' => 'E02006930',
        '9AR' => 'E02006930',
        '9AT' => 'E02006930',
        '9AW' => 'E02006930',
        '9AZ' => 'E02006930',
        '9BA' => 'E02006930',
        '9BB' => 'E02006930',
        '9BD' => 'E02006930',
        '9BE' => 'E02006930',
        '9BF' => 'E02006930',
        '9BG' => 'E02006930',
        '9BH' => 'E02006930',
        '9BJ' => 'E02006930',
        '9BL' => 'E02006930',
        '9BN' => 'E02006930',
        '9BP' => 'E02006930',
        '9BQ' => 'E02006930',
        '9BR' => 'E02006930',
        '9BS' => 'E02006930',
        '9BT' => 'E02006930',
        '9BU' => 'E02006930',
        '9BW' => 'E02006930',
        '9BX' => 'E02006930',
        '9BY' => 'E02006930',
        '9BZ' => 'E02006930',
        '9DA' => 'E02006930',
        '9DB' => 'E02006930',
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
