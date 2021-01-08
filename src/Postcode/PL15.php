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
final class PL15
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AB' => 'E02003936',
        '0AF' => 'E02003936',
        '0AG' => 'E02003936',
        '0AL' => 'E02003936',
        '0AQ' => 'E02003936',
        '0AR' => 'E02003936',
        '0AS' => 'E02003936',
        '0AT' => 'E02003936',
        '0AU' => 'E02003936',
        '0AW' => 'E02003936',
        '0AX' => 'E02003936',
        '0AY' => 'E02003936',
        '0AZ' => 'E02003936',
        '0BA' => 'E02003936',
        '0BB' => 'E02003936',
        '0BD' => 'E02003936',
        '0BE' => 'E02003936',
        '0BF' => 'E02003936',
        '0BG' => 'E02003936',
        '0BH' => 'E02003936',
        '0BJ' => 'E02003936',
        '0BL' => 'E02003936',
        '0BN' => 'E02003936',
        '0BP' => 'E02003936',
        '0BQ' => 'E02003936',
        '0BR' => 'E02003936',
        '0BS' => 'E02003936',
        '0BT' => 'E02003936',
        '0BU' => 'E02003936',
        '7AA' => 'E02003935',
        '7AB' => 'E02003935',
        '7AD' => 'E02003935',
        '7AE' => 'E02003935',
        '7AF' => 'E02003936',
        '7AG' => 'E02003935',
        '7AH' => 'E02003935',
        '7AJ' => 'E02003936',
        '7AL' => 'E02003935',
        '7AN' => 'E02003935',
        '7AP' => 'E02003935',
        '7AQ' => 'E02003935',
        '7AR' => 'E02003935',
        '7AS' => 'E02003935',
        '7AT' => 'E02003935',
        '7AU' => 'E02003935',
        '7AW' => 'E02003935',
        '7AX' => 'E02003935',
        '7AY' => 'E02003935',
        '7AZ' => 'E02003935',
        '7BA' => 'E02003935',
        '7BB' => 'E02003936',
        '7BD' => 'E02003935',
        '7BE' => 'E02003935',
        '7BG' => 'E02003935',
        '7BH' => 'E02003935',
        '7BJ' => 'E02003935',
        '7BL' => 'E02003935',
        '7BN' => 'E02003935',
        '7BP' => 'E02003935',
        '7BQ' => 'E02003935',
        '7BS' => 'E02003935',
        '7BT' => 'E02003935',
        '7BU' => 'E02003935',
        '7BW' => 'E02003935',
        '7BX' => 'E02003936',
        '7BY' => 'E02003935',
        '7BZ' => 'E02003935',
        '7DA' => 'E02003935',
        '7DB' => 'E02003935',
        '7DD' => 'E02003935',
        '7DE' => 'E02003935',
        '7DF' => 'E02003935',
        '7DG' => 'E02003935',
        '7DH' => 'E02003935',
        '7DJ' => 'E02003935',
        '7DL' => 'E02003935',
        '7DN' => 'E02003935',
        '7DP' => 'E02003935',
        '7DQ' => 'E02003935',
        '7DR' => 'E02003935',
        '7DS' => 'E02003935',
        '7DT' => 'E02003935',
        '7DU' => 'E02003935',
        '7DW' => 'E02003935',
        '7DX' => 'E02003935',
        '7DY' => 'E02003935',
        '7DZ' => 'E02003935',
        '7EA' => 'E02003936',
        '7EB' => 'E02003936',
        '7ED' => 'E02003936',
        '7EE' => 'E02003935',
        '7EF' => 'E02003935',
        '7EG' => 'E02003935',
        '7EH' => 'E02003936',
        '7EJ' => 'E02003936',
        '7EL' => 'E02003936',
        '7EN' => 'E02003936',
        '7EP' => 'E02003936',
        '7EQ' => 'E02003935',
        '7ER' => 'E02003936',
        '7ES' => 'E02003936',
        '7ET' => 'E02003936',
        '7EU' => 'E02003936',
        '7EW' => 'E02003936',
        '7EX' => 'E02003936',
        '7EY' => 'E02003936',
        '7EZ' => 'E02003936',
        '7FA' => 'E02003936',
        '7FB' => 'E02003935',
        '7FD' => 'E02003936',
        '7FE' => 'E02003936',
        '7FF' => 'E02003936',
        '7FG' => 'E02003936',
        '7FH' => 'E02003936',
        '7FJ' => 'E02003935',
        '7FL' => 'E02003935',
        '7FN' => 'E02003936',
        '7FP' => 'E02003936',
        '7FQ' => 'E02003936',
        '7FR' => 'E02003935',
        '7FS' => 'E02003936',
        '7FT' => 'E02003936',
        '7HA' => 'E02003935',
        '7HB' => 'E02003936',
        '7HD' => 'E02003936',
        '7HE' => 'E02003935',
        '7HF' => 'E02003935',
        '7HG' => 'E02003935',
        '7HH' => 'E02003935',
        '7HJ' => 'E02003935',
        '7HL' => 'E02003935',
        '7HN' => 'E02003935',
        '7HP' => 'E02003935',
        '7HQ' => 'E02003935',
        '7HR' => 'E02003935',
        '7HS' => 'E02003935',
        '7HT' => 'E02003936',
        '7HW' => 'E02003935',
        '7HX' => 'E02003935',
        '7HY' => 'E02003935',
        '7HZ' => 'E02003935',
        '7JA' => 'E02003936',
        '7JB' => 'E02003936',
        '7JD' => 'E02003936',
        '7JE' => 'E02003936',
        '7JF' => 'E02003936',
        '7JG' => 'E02003936',
        '7JH' => 'E02003936',
        '7JJ' => 'E02003936',
        '7JL' => 'E02003936',
        '7JN' => 'E02003936',
        '7JP' => 'E02003936',
        '7JQ' => 'E02003936',
        '7JR' => 'E02003935',
        '7JS' => 'E02003936',
        '7JT' => 'E02003936',
        '7JU' => 'E02003936',
        '7JW' => 'E02003936',
        '7JX' => 'E02003936',
        '7JY' => 'E02003936',
        '7JZ' => 'E02003936',
        '7LA' => 'E02003936',
        '7LB' => 'E02003936',
        '7LD' => 'E02003936',
        '7LE' => 'E02003936',
        '7LF' => 'E02003936',
        '7LG' => 'E02003936',
        '7LH' => 'E02003936',
        '7LJ' => 'E02003936',
        '7LL' => 'E02003936',
        '7LN' => 'E02003935',
        '7LP' => 'E02003936',
        '7LQ' => 'E02003936',
        '7LR' => 'E02003936',
        '7LS' => 'E02003936',
        '7LT' => 'E02003936',
        '7LU' => 'E02003936',
        '7LW' => 'E02003936',
        '7LX' => 'E02003936',
        '7LY' => 'E02003936',
        '7LZ' => 'E02003936',
        '7NA' => 'E02003936',
        '7NB' => 'E02003936',
        '7ND' => 'E02003936',
        '7NE' => 'E02003936',
        '7NF' => 'E02003935',
        '7NG' => 'E02003936',
        '7NH' => 'E02003936',
        '7NJ' => 'E02003936',
        '7NL' => 'E02003936',
        '7NN' => 'E02003936',
        '7NP' => 'E02003936',
        '7NQ' => 'E02003936',
        '7NR' => 'E02003936',
        '7NS' => 'E02003936',
        '7NT' => 'E02003936',
        '7NU' => 'E02003936',
        '7NW' => 'E02003936',
        '7NX' => 'E02003935',
        '7NY' => 'E02003936',
        '7PA' => 'E02003936',
        '7PB' => 'E02003936',
        '7PD' => 'E02003936',
        '7PE' => 'E02003936',
        '7PF' => 'E02003935',
        '7PG' => 'E02003936',
        '7PH' => 'E02003935',
        '7PJ' => 'E02003936',
        '7PL' => 'E02003936',
        '7PN' => 'E02003936',
        '7PP' => 'E02003936',
        '7PQ' => 'E02003936',
        '7PR' => 'E02003936',
        '7PS' => 'E02003936',
        '7PT' => 'E02003936',
        '7PU' => 'E02003936',
        '7PW' => 'E02003936',
        '7PX' => 'E02003936',
        '7PY' => 'E02003936',
        '7QA' => 'E02003935',
        '7QB' => 'E02003936',
        '7QD' => 'E02003936',
        '7QE' => 'E02003936',
        '7QF' => 'E02003936',
        '7QG' => 'E02003936',
        '7QH' => 'E02003936',
        '7QJ' => 'E02003936',
        '7QL' => 'E02003936',
        '7QN' => 'E02003936',
        '7QP' => 'E02003936',
        '7QQ' => 'E02003936',
        '7QR' => 'E02003936',
        '7QS' => 'E02003936',
        '7QT' => 'E02003936',
        '7QU' => 'E02003936',
        '7QW' => 'E02003936',
        '7QX' => 'E02003936',
        '7QY' => 'E02003936',
        '7QZ' => 'E02003936',
        '7RA' => 'E02003936',
        '7RB' => 'E02003936',
        '7RD' => 'E02003936',
        '7RE' => 'E02003936',
        '7RF' => 'E02003936',
        '7RG' => 'E02003936',
        '7RH' => 'E02003936',
        '7RJ' => 'E02003936',
        '7RL' => 'E02003936',
        '7RN' => 'E02003936',
        '7RP' => 'E02003936',
        '7RQ' => 'E02003936',
        '7RR' => 'E02003936',
        '7RS' => 'E02003936',
        '7RT' => 'E02003936',
        '7RU' => 'E02003936',
        '7RW' => 'E02003936',
        '7RX' => 'E02003936',
        '7RY' => 'E02003936',
        '7RZ' => 'E02003936',
        '7SA' => 'E02003936',
        '7SB' => 'E02003936',
        '7SD' => 'E02003936',
        '7SE' => 'E02003936',
        '7SF' => 'E02003936',
        '7SG' => 'E02003936',
        '7SH' => 'E02003936',
        '7SJ' => 'E02003936',
        '7SL' => 'E02003936',
        '7SN' => 'E02003936',
        '7SP' => 'E02003936',
        '7ST' => 'E02003936',
        '7SW' => 'E02003936',
        '7SX' => 'E02003936',
        '7SY' => 'E02003936',
        '7SZ' => 'E02003936',
        '7TA' => 'E02003936',
        '7TD' => 'E02003936',
        '7TE' => 'E02003936',
        '7TF' => 'E02003936',
        '7TG' => 'E02003936',
        '7TH' => 'E02003936',
        '7TJ' => 'E02003936',
        '7TL' => 'E02003936',
        '7TN' => 'E02003936',
        '7TP' => 'E02003893',
        '7TS' => 'E02003936',
        '7TT' => 'E02003893',
        '7TU' => 'E02003893',
        '7TW' => 'E02003893',
        '7TX' => 'E02003893',
        '7TY' => 'E02003936',
        '7TZ' => 'E02003936',
        '7WA' => 'E02003936',
        '7WD' => 'E02003936',
        '7WE' => 'E02003936',
        '7WF' => 'E02003936',
        '7WU' => 'E02003936',
        '7WW' => 'E02003936',
        '7WX' => 'E02003936',
        '7WY' => 'E02003936',
        '7WZ' => 'E02003936',
        '7XF' => 'E02003936',
        '7XG' => 'E02003936',
        '7XH' => 'E02003936',
        '7XJ' => 'E02003936',
        '7XN' => 'E02003936',
        '7XP' => 'E02003936',
        '7XQ' => 'E02003936',
        '7XR' => 'E02003936',
        '7XS' => 'E02003936',
        '7XT' => 'E02003936',
        '7XU' => 'E02003936',
        '7XW' => 'E02003936',
        '7XX' => 'E02003936',
        '7XY' => 'E02003936',
        '7XZ' => 'E02003936',
        '7YA' => 'E02003936',
        '7YB' => 'E02003936',
        '7YD' => 'E02003936',
        '7YE' => 'E02003936',
        '7YF' => 'E02003936',
        '7YG' => 'E02003936',
        '7YH' => 'E02003936',
        '7YQ' => 'E02003936',
        '7YU' => 'E02003936',
        '7YX' => 'E02003936',
        '7YY' => 'E02003936',
        '7YZ' => 'E02003936',
        '7ZJ' => 'E02003936',
        '7ZN' => 'E02003936',
        '7ZQ' => 'E02003936',
        '7ZR' => 'E02003936',
        '7ZS' => 'E02003936',
        '7ZX' => 'E02003936',
        '8AA' => 'E02003935',
        '8AB' => 'E02003935',
        '8AD' => 'E02003935',
        '8AE' => 'E02003935',
        '8AF' => 'E02003935',
        '8AG' => 'E02003935',
        '8AH' => 'E02003935',
        '8AJ' => 'E02003935',
        '8AL' => 'E02003935',
        '8AN' => 'E02003935',
        '8AP' => 'E02003935',
        '8AQ' => 'E02003935',
        '8AR' => 'E02003935',
        '8AS' => 'E02003935',
        '8AT' => 'E02003935',
        '8AU' => 'E02003935',
        '8AW' => 'E02003935',
        '8AX' => 'E02003935',
        '8AY' => 'E02003935',
        '8AZ' => 'E02003935',
        '8BA' => 'E02003935',
        '8BB' => 'E02003935',
        '8BD' => 'E02003935',
        '8BE' => 'E02003935',
        '8BG' => 'E02003935',
        '8BH' => 'E02003935',
        '8BJ' => 'E02003935',
        '8BL' => 'E02003935',
        '8BN' => 'E02003935',
        '8BP' => 'E02003935',
        '8BQ' => 'E02003935',
        '8BS' => 'E02003935',
        '8BT' => 'E02003935',
        '8BU' => 'E02003935',
        '8BW' => 'E02003935',
        '8BX' => 'E02003935',
        '8BY' => 'E02003935',
        '8BZ' => 'E02003935',
        '8DA' => 'E02003935',
        '8DB' => 'E02003935',
        '8DD' => 'E02003935',
        '8DE' => 'E02003935',
        '8DF' => 'E02003935',
        '8DG' => 'E02003935',
        '8DH' => 'E02003935',
        '8DJ' => 'E02003935',
        '8DL' => 'E02003935',
        '8DN' => 'E02003935',
        '8DP' => 'E02003935',
        '8DQ' => 'E02003935',
        '8DR' => 'E02003935',
        '8DS' => 'E02003935',
        '8DT' => 'E02003935',
        '8DU' => 'E02003935',
        '8DW' => 'E02003935',
        '8DX' => 'E02003935',
        '8DY' => 'E02003935',
        '8DZ' => 'E02003936',
        '8EA' => 'E02003935',
        '8EB' => 'E02003935',
        '8ED' => 'E02003935',
        '8EE' => 'E02003935',
        '8EF' => 'E02003935',
        '8EG' => 'E02003935',
        '8EH' => 'E02003935',
        '8EJ' => 'E02003935',
        '8EL' => 'E02003935',
        '8EN' => 'E02003935',
        '8EP' => 'E02003935',
        '8EQ' => 'E02003935',
        '8ER' => 'E02003935',
        '8ES' => 'E02003935',
        '8ET' => 'E02003935',
        '8EU' => 'E02003935',
        '8EW' => 'E02003935',
        '8EX' => 'E02003935',
        '8EY' => 'E02003936',
        '8EZ' => 'E02003935',
        '8FA' => 'E02003934',
        '8FB' => 'E02003935',
        '8FD' => 'E02003934',
        '8FE' => 'E02003935',
        '8FF' => 'E02003935',
        '8FG' => 'E02003935',
        '8FH' => 'E02003934',
        '8FJ' => 'E02003934',
        '8GA' => 'E02003935',
        '8GW' => 'E02003934',
        '8GX' => 'E02003935',
        '8GY' => 'E02003935',
        '8GZ' => 'E02003935',
        '8HA' => 'E02003935',
        '8HB' => 'E02003935',
        '8HD' => 'E02003935',
        '8HE' => 'E02003935',
        '8HF' => 'E02003935',
        '8HG' => 'E02003935',
        '8HH' => 'E02003935',
        '8HJ' => 'E02003935',
        '8HL' => 'E02003935',
        '8HN' => 'E02003935',
        '8HP' => 'E02003935',
        '8HQ' => 'E02003935',
        '8HR' => 'E02003935',
        '8HS' => 'E02003935',
        '8HT' => 'E02003935',
        '8HU' => 'E02003935',
        '8HW' => 'E02003935',
        '8HX' => 'E02003935',
        '8HY' => 'E02003935',
        '8HZ' => 'E02003935',
        '8JA' => 'E02003935',
        '8JB' => 'E02003935',
        '8JD' => 'E02003935',
        '8JE' => 'E02003935',
        '8JF' => 'E02003935',
        '8JG' => 'E02003935',
        '8JH' => 'E02003935',
        '8JJ' => 'E02003935',
        '8JL' => 'E02003935',
        '8JN' => 'E02003935',
        '8JP' => 'E02003935',
        '8JQ' => 'E02003935',
        '8JR' => 'E02003935',
        '8JS' => 'E02003936',
        '8JT' => 'E02003935',
        '8JU' => 'E02003935',
        '8JW' => 'E02003935',
        '8JX' => 'E02003935',
        '8JY' => 'E02003936',
        '8JZ' => 'E02003936',
        '8LA' => 'E02003936',
        '8LB' => 'E02003936',
        '8LD' => 'E02003936',
        '8LE' => 'E02003935',
        '8LF' => 'E02003935',
        '8LG' => 'E02003935',
        '8LH' => 'E02003936',
        '8LJ' => 'E02003934',
        '8LL' => 'E02003934',
        '8LN' => 'E02003934',
        '8LP' => 'E02003934',
        '8LQ' => 'E02003935',
        '8LR' => 'E02003934',
        '8LS' => 'E02003934',
        '8LT' => 'E02003934',
        '8LU' => 'E02003934',
        '8LW' => 'E02003934',
        '8LX' => 'E02003934',
        '8LY' => 'E02003934',
        '8LZ' => 'E02003934',
        '8NA' => 'E02003934',
        '8NB' => 'E02003934',
        '8ND' => 'E02003934',
        '8NE' => 'E02003934',
        '8NF' => 'E02003936',
        '8NG' => 'E02003935',
        '8NH' => 'E02003934',
        '8NJ' => 'E02003934',
        '8NL' => 'E02003934',
        '8NN' => 'E02003934',
        '8NP' => 'E02003932',
        '8NQ' => 'E02003935',
        '8NR' => 'E02003932',
        '8NS' => 'E02003932',
        '8NT' => 'E02003932',
        '8NU' => 'E02003932',
        '8NW' => 'E02003932',
        '8NX' => 'E02003934',
        '8NY' => 'E02003934',
        '8NZ' => 'E02003934',
        '8PA' => 'E02003935',
        '8PB' => 'E02003935',
        '8PD' => 'E02003936',
        '8PE' => 'E02003936',
        '8PF' => 'E02003936',
        '8PG' => 'E02003936',
        '8PH' => 'E02003936',
        '8PJ' => 'E02003934',
        '8PL' => 'E02003934',
        '8PN' => 'E02003934',
        '8PP' => 'E02003936',
        '8PQ' => 'E02003936',
        '8PR' => 'E02003936',
        '8PS' => 'E02003934',
        '8PT' => 'E02003936',
        '8PU' => 'E02003936',
        '8PW' => 'E02003934',
        '8PX' => 'E02003936',
        '8PY' => 'E02003934',
        '8PZ' => 'E02003934',
        '8QA' => 'E02003934',
        '8QB' => 'E02003935',
        '8QD' => 'E02003934',
        '8QE' => 'E02003936',
        '8QF' => 'E02003936',
        '8QG' => 'E02003934',
        '8QH' => 'E02003936',
        '8QJ' => 'E02003936',
        '8QL' => 'E02003935',
        '8QN' => 'E02003936',
        '8QP' => 'E02003936',
        '8QQ' => 'E02003934',
        '8QR' => 'E02003936',
        '8QS' => 'E02003935',
        '8QT' => 'E02003934',
        '8QU' => 'E02003934',
        '8QW' => 'E02003936',
        '8QX' => 'E02003934',
        '8QY' => 'E02003934',
        '8QZ' => 'E02003935',
        '8RA' => 'E02003936',
        '8RB' => 'E02003936',
        '8RD' => 'E02003934',
        '8RE' => 'E02003934',
        '8RF' => 'E02003934',
        '8RG' => 'E02003934',
        '8RH' => 'E02003934',
        '8RJ' => 'E02003934',
        '8RL' => 'E02003934',
        '8RN' => 'E02003934',
        '8RP' => 'E02003934',
        '8RQ' => 'E02003934',
        '8RR' => 'E02003935',
        '8RS' => 'E02003934',
        '8RT' => 'E02003934',
        '8RU' => 'E02003934',
        '8RW' => 'E02003934',
        '8RX' => 'E02003934',
        '8RY' => 'E02003934',
        '8RZ' => 'E02003934',
        '8SA' => 'E02003934',
        '8SB' => 'E02003934',
        '8SD' => 'E02003935',
        '8SE' => 'E02003935',
        '8SF' => 'E02003935',
        '8SG' => 'E02003934',
        '8SH' => 'E02003936',
        '8SJ' => 'E02003936',
        '8SL' => 'E02003936',
        '8SN' => 'E02003936',
        '8SP' => 'E02003936',
        '8SQ' => 'E02003934',
        '8SS' => 'E02003934',
        '8ST' => 'E02003934',
        '8SU' => 'E02003934',
        '8SW' => 'E02003936',
        '8SX' => 'E02003934',
        '8SY' => 'E02003934',
        '8SZ' => 'E02003934',
        '8TA' => 'E02003934',
        '8TB' => 'E02003934',
        '8TD' => 'E02003934',
        '8TE' => 'E02003934',
        '8TF' => 'E02003934',
        '8TG' => 'E02003935',
        '8TH' => 'E02003934',
        '8TJ' => 'E02003936',
        '8TL' => 'E02003934',
        '8TN' => 'E02003934',
        '8TP' => 'E02003934',
        '8TQ' => 'E02003934',
        '8TR' => 'E02003934',
        '8TS' => 'E02003934',
        '8TT' => 'E02003934',
        '8TU' => 'E02003934',
        '8TW' => 'E02003934',
        '8TX' => 'E02003934',
        '8TY' => 'E02003934',
        '8TZ' => 'E02003934',
        '8UA' => 'E02003932',
        '8UB' => 'E02003934',
        '8UD' => 'E02003934',
        '8UE' => 'E02003934',
        '8UF' => 'E02003934',
        '8UG' => 'E02003934',
        '8UH' => 'E02003934',
        '8UJ' => 'E02003934',
        '8UL' => 'E02003934',
        '8UN' => 'E02003934',
        '8UP' => 'E02003934',
        '8UQ' => 'E02003934',
        '8UR' => 'E02003934',
        '8US' => 'E02003935',
        '8UT' => 'E02003934',
        '8UU' => 'E02003934',
        '8UW' => 'E02003934',
        '8UX' => 'E02003934',
        '8UY' => 'E02003934',
        '8UZ' => 'E02003934',
        '8WA' => 'E02003936',
        '8WB' => 'E02003936',
        '8WD' => 'E02003936',
        '8WE' => 'E02003934',
        '8WF' => 'E02003936',
        '8WG' => 'E02003934',
        '8WH' => 'E02003935',
        '8WJ' => 'E02003934',
        '8WL' => 'E02003935',
        '8WN' => 'E02003936',
        '8WP' => 'E02003936',
        '8WQ' => 'E02003936',
        '8WR' => 'E02003936',
        '8WS' => 'E02003936',
        '8WT' => 'E02003936',
        '8WU' => 'E02003936',
        '8WW' => 'E02003936',
        '8WX' => 'E02003936',
        '8WY' => 'E02003936',
        '8WZ' => 'E02003936',
        '8XA' => 'E02003935',
        '8XB' => 'E02003935',
        '8XD' => 'E02003935',
        '8XE' => 'E02003934',
        '8XF' => 'E02003935',
        '8XG' => 'E02003934',
        '8XJ' => 'E02003935',
        '8XL' => 'E02003935',
        '8XN' => 'E02003935',
        '8XQ' => 'E02003935',
        '8XU' => 'E02003935',
        '8XX' => 'E02003936',
        '8YE' => 'E02003936',
        '8YF' => 'E02003936',
        '8YG' => 'E02003936',
        '8YH' => 'E02003936',
        '8YJ' => 'E02003936',
        '8YL' => 'E02003935',
        '8YN' => 'E02003936',
        '8YP' => 'E02003936',
        '8YQ' => 'E02003935',
        '8YR' => 'E02003935',
        '8YS' => 'E02003936',
        '8YT' => 'E02003936',
        '8YU' => 'E02003936',
        '8YW' => 'E02003936',
        '8YX' => 'E02003935',
        '8YY' => 'E02003935',
        '8YZ' => 'E02003936',
        '8ZG' => 'E02003936',
        '8ZH' => 'E02003935',
        '8ZJ' => 'E02003935',
        '8ZN' => 'E02003936',
        '8ZP' => 'E02003936',
        '8ZQ' => 'E02003935',
        '8ZR' => 'E02003936',
        '8ZS' => 'E02003936',
        '8ZX' => 'E02003936',
        '9AA' => 'E02003935',
        '9AB' => 'E02003935',
        '9AD' => 'E02003935',
        '9AE' => 'E02003935',
        '9AF' => 'E02003935',
        '9AG' => 'E02003935',
        '9AH' => 'E02003935',
        '9AJ' => 'E02003935',
        '9AL' => 'E02003935',
        '9AN' => 'E02003935',
        '9AP' => 'E02003935',
        '9AQ' => 'E02003935',
        '9AR' => 'E02003935',
        '9AS' => 'E02003935',
        '9AT' => 'E02003935',
        '9AU' => 'E02003935',
        '9AW' => 'E02003935',
        '9AX' => 'E02003935',
        '9AY' => 'E02003935',
        '9AZ' => 'E02003935',
        '9BA' => 'E02003935',
        '9BB' => 'E02003935',
        '9BD' => 'E02003935',
        '9BE' => 'E02003935',
        '9BG' => 'E02003935',
        '9BH' => 'E02003935',
        '9BJ' => 'E02003935',
        '9BL' => 'E02003935',
        '9BN' => 'E02003935',
        '9BP' => 'E02003935',
        '9BQ' => 'E02003935',
        '9BS' => 'E02003935',
        '9BT' => 'E02003935',
        '9BU' => 'E02003935',
        '9BW' => 'E02003935',
        '9BX' => 'E02003935',
        '9BY' => 'E02003935',
        '9BZ' => 'E02003935',
        '9DA' => 'E02003935',
        '9DB' => 'E02003935',
        '9DD' => 'E02003935',
        '9DE' => 'E02003935',
        '9DF' => 'E02003935',
        '9DG' => 'E02003935',
        '9DH' => 'E02003935',
        '9DJ' => 'E02003935',
        '9DL' => 'E02003935',
        '9DN' => 'E02003935',
        '9DP' => 'E02003935',
        '9DQ' => 'E02003935',
        '9DR' => 'E02003935',
        '9DS' => 'E02003935',
        '9DT' => 'E02003935',
        '9DU' => 'E02003935',
        '9DW' => 'E02003936',
        '9DX' => 'E02003935',
        '9DY' => 'E02003935',
        '9DZ' => 'E02003935',
        '9EA' => 'E02003935',
        '9EB' => 'E02003935',
        '9ED' => 'E02003935',
        '9EE' => 'E02003935',
        '9EF' => 'E02003935',
        '9EG' => 'E02003935',
        '9EH' => 'E02003935',
        '9EJ' => 'E02003935',
        '9EL' => 'E02003935',
        '9EN' => 'E02003935',
        '9EP' => 'E02003935',
        '9EQ' => 'E02003935',
        '9ER' => 'E02003935',
        '9ES' => 'E02003935',
        '9ET' => 'E02003935',
        '9EU' => 'E02003935',
        '9EW' => 'E02003935',
        '9EX' => 'E02003935',
        '9EY' => 'E02003935',
        '9EZ' => 'E02003935',
        '9FA' => 'E02003935',
        '9FB' => 'E02003935',
        '9FD' => 'E02003935',
        '9FE' => 'E02003935',
        '9FF' => 'E02004228',
        '9FG' => 'E02003935',
        '9FH' => 'E02003935',
        '9FJ' => 'E02003935',
        '9FL' => 'E02003935',
        '9FN' => 'E02003935',
        '9FP' => 'E02003935',
        '9FQ' => 'E02003935',
        '9FR' => 'E02003935',
        '9FT' => 'E02003935',
        '9FU' => 'E02003935',
        '9FW' => 'E02003935',
        '9FX' => 'E02003935',
        '9FY' => 'E02003935',
        '9FZ' => 'E02003935',
        '9GA' => 'E02003935',
        '9GB' => 'E02003935',
        '9GD' => 'E02003935',
        '9GE' => 'E02003935',
        '9GF' => 'E02003935',
        '9GG' => 'E02003935',
        '9GH' => 'E02003935',
        '9GJ' => 'E02003935',
        '9GL' => 'E02003935',
        '9GN' => 'E02003935',
        '9GP' => 'E02003935',
        '9GQ' => 'E02003935',
        '9GR' => 'E02003935',
        '9GT' => 'E02003935',
        '9HA' => 'E02003935',
        '9HB' => 'E02003935',
        '9HD' => 'E02003935',
        '9HE' => 'E02003935',
        '9HF' => 'E02003935',
        '9HG' => 'E02003935',
        '9HH' => 'E02003935',
        '9HJ' => 'E02003935',
        '9HN' => 'E02003935',
        '9HP' => 'E02003935',
        '9HQ' => 'E02003935',
        '9HR' => 'E02003935',
        '9HS' => 'E02003935',
        '9HT' => 'E02003935',
        '9HU' => 'E02003935',
        '9HW' => 'E02003935',
        '9HX' => 'E02003935',
        '9HY' => 'E02003935',
        '9HZ' => 'E02003935',
        '9JA' => 'E02003935',
        '9JB' => 'E02003935',
        '9JD' => 'E02003935',
        '9JE' => 'E02003935',
        '9JF' => 'E02003935',
        '9JG' => 'E02003935',
        '9JH' => 'E02003935',
        '9JJ' => 'E02003935',
        '9JL' => 'E02003935',
        '9JN' => 'E02003935',
        '9JP' => 'E02003935',
        '9JQ' => 'E02003935',
        '9JR' => 'E02003935',
        '9JS' => 'E02003935',
        '9JT' => 'E02003935',
        '9JU' => 'E02003935',
        '9JW' => 'E02003935',
        '9JX' => 'E02003935',
        '9JY' => 'E02003935',
        '9JZ' => 'E02003935',
        '9LA' => 'E02003935',
        '9LB' => 'E02003935',
        '9LD' => 'E02003935',
        '9LE' => 'E02003935',
        '9LF' => 'E02003935',
        '9LG' => 'E02003936',
        '9LH' => 'E02003936',
        '9LJ' => 'E02003936',
        '9LL' => 'E02003936',
        '9LN' => 'E02003935',
        '9LP' => 'E02003935',
        '9LQ' => 'E02003935',
        '9LR' => 'E02003935',
        '9LS' => 'E02003935',
        '9LT' => 'E02003936',
        '9LU' => 'E02003936',
        '9LW' => 'E02003935',
        '9LX' => 'E02003936',
        '9LY' => 'E02003936',
        '9LZ' => 'E02003936',
        '9NA' => 'E02003936',
        '9NB' => 'E02003935',
        '9ND' => 'E02003936',
        '9NE' => 'E02003936',
        '9NF' => 'E02003936',
        '9NG' => 'E02003936',
        '9NH' => 'E02003936',
        '9NJ' => 'E02003936',
        '9NL' => 'E02003936',
        '9NN' => 'E02003936',
        '9NP' => 'E02003936',
        '9NQ' => 'E02003936',
        '9NR' => 'E02003936',
        '9NS' => 'E02003936',
        '9NT' => 'E02003936',
        '9NU' => 'E02003936',
        '9NW' => 'E02003936',
        '9NX' => 'E02003936',
        '9NY' => 'E02003936',
        '9NZ' => 'E02003936',
        '9PA' => 'E02003936',
        '9PB' => 'E02003936',
        '9PD' => 'E02004232',
        '9PE' => 'E02003936',
        '9PF' => 'E02003936',
        '9PG' => 'E02003936',
        '9PH' => 'E02003936',
        '9PJ' => 'E02003936',
        '9PL' => 'E02003936',
        '9PN' => 'E02003936',
        '9PP' => 'E02003936',
        '9PQ' => 'E02003936',
        '9PR' => 'E02003936',
        '9PS' => 'E02003936',
        '9PT' => 'E02003936',
        '9PU' => 'E02003936',
        '9PW' => 'E02003936',
        '9PX' => 'E02003936',
        '9PY' => 'E02003936',
        '9PZ' => 'E02003936',
        '9QA' => 'E02003936',
        '9QB' => 'E02003936',
        '9QD' => 'E02003936',
        '9QE' => 'E02003936',
        '9QF' => 'E02003936',
        '9QG' => 'E02003936',
        '9QH' => 'E02003936',
        '9QJ' => 'E02003893',
        '9QL' => 'E02003936',
        '9QN' => 'E02003935',
        '9QP' => 'E02003936',
        '9QQ' => 'E02003936',
        '9QR' => 'E02003935',
        '9QS' => 'E02003936',
        '9QT' => 'E02003936',
        '9QU' => 'E02004232',
        '9QW' => 'E02003935',
        '9QX' => 'E02004228',
        '9QY' => 'E02004228',
        '9QZ' => 'E02003935',
        '9RA' => 'E02003936',
        '9RB' => 'E02003934',
        '9RD' => 'E02003934',
        '9RE' => 'E02003934',
        '9RF' => 'E02003932',
        '9RG' => 'E02003932',
        '9RH' => 'E02004228',
        '9RJ' => 'E02003932',
        '9RL' => 'E02003932',
        '9RN' => 'E02003932',
        '9RP' => 'E02003934',
        '9RQ' => 'E02004228',
        '9RR' => 'E02003932',
        '9RS' => 'E02004228',
        '9RT' => 'E02004228',
        '9RU' => 'E02004228',
        '9RW' => 'E02003934',
        '9RX' => 'E02004228',
        '9RY' => 'E02004228',
        '9SA' => 'E02004228',
        '9SB' => 'E02004228',
        '9SD' => 'E02004228',
        '9SE' => 'E02004228',
        '9SF' => 'E02004228',
        '9SG' => 'E02004228',
        '9SH' => 'E02004228',
        '9SJ' => 'E02004228',
        '9SL' => 'E02004228',
        '9SN' => 'E02004228',
        '9SP' => 'E02003936',
        '9SQ' => 'E02004228',
        '9SR' => 'E02003934',
        '9SS' => 'E02004228',
        '9ST' => 'E02004228',
        '9SU' => 'E02004228',
        '9SW' => 'E02004228',
        '9SX' => 'E02004228',
        '9SY' => 'E02004228',
        '9SZ' => 'E02004228',
        '9TA' => 'E02004228',
        '9TB' => 'E02004228',
        '9TD' => 'E02003935',
        '9TE' => 'E02003935',
        '9TF' => 'E02003935',
        '9TG' => 'E02003935',
        '9TH' => 'E02003932',
        '9TJ' => 'E02003935',
        '9TL' => 'E02004228',
        '9TN' => 'E02003935',
        '9TP' => 'E02003932',
        '9TQ' => 'E02003935',
        '9TS' => 'E02003935',
        '9WA' => 'E02003935',
        '9WG' => 'E02003935',
        '9WT' => 'E02003936',
        '9WU' => 'E02003936',
        '9WW' => 'E02003936',
        '9WX' => 'E02003936',
        '9WY' => 'E02003936',
        '9WZ' => 'E02003936',
        '9XN' => 'E02003936',
        '9XZ' => 'E02003936',
        '9YH' => 'E02003936',
        '9YJ' => 'E02003935',
        '9YL' => 'E02003936',
        '9YN' => 'E02003936',
        '9YP' => 'E02003936',
        '9YR' => 'E02003936',
        '9YT' => 'E02003936',
        '9YU' => 'E02003936',
        '9YW' => 'E02003936',
        '9YX' => 'E02003936',
        '9YY' => 'E02003936',
        '9YZ' => 'E02003935',
        '9ZH' => 'E02003936',
        '9ZN' => 'E02003936',
        '9ZQ' => 'E02003936',
        '9ZW' => 'E02003936',
        '9ZX' => 'E02003936',
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
