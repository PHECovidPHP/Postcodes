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
final class GL16
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '7AA' => 'E02004632',
        '7AB' => 'E02004632',
        '7AD' => 'E02004632',
        '7AE' => 'E02004632',
        '7AF' => 'E02004632',
        '7AG' => 'E02004632',
        '7AH' => 'E02004631',
        '7AJ' => 'E02004631',
        '7AL' => 'E02004631',
        '7AN' => 'E02004631',
        '7AP' => 'E02004631',
        '7AQ' => 'E02004631',
        '7AR' => 'E02004631',
        '7AS' => 'E02004631',
        '7AT' => 'E02004631',
        '7AU' => 'E02004632',
        '7AW' => 'E02004631',
        '7AX' => 'E02004631',
        '7AY' => 'E02004631',
        '7AZ' => 'E02004631',
        '7BA' => 'E02004632',
        '7BB' => 'E02004631',
        '7BD' => 'E02004632',
        '7BE' => 'E02004632',
        '7BG' => 'E02004632',
        '7BH' => 'E02004632',
        '7BJ' => 'E02004632',
        '7BL' => 'E02004632',
        '7BN' => 'E02004632',
        '7BP' => 'E02004632',
        '7BQ' => 'E02004632',
        '7BS' => 'E02004632',
        '7BT' => 'E02004632',
        '7BU' => 'E02004632',
        '7BW' => 'E02004632',
        '7BX' => 'E02004632',
        '7BY' => 'E02004632',
        '7BZ' => 'E02004631',
        '7DA' => 'E02004632',
        '7DB' => 'E02004631',
        '7DD' => 'E02004632',
        '7DE' => 'E02004632',
        '7DF' => 'E02004632',
        '7DG' => 'E02004632',
        '7DH' => 'E02004632',
        '7DJ' => 'E02004632',
        '7DL' => 'E02004632',
        '7DN' => 'E02004632',
        '7DP' => 'E02004632',
        '7DQ' => 'E02004632',
        '7DR' => 'E02004632',
        '7DS' => 'E02004632',
        '7DT' => 'E02004632',
        '7DU' => 'E02004632',
        '7DW' => 'E02004632',
        '7DX' => 'E02004632',
        '7DY' => 'E02004631',
        '7DZ' => 'E02004631',
        '7EA' => 'E02004632',
        '7EB' => 'E02004632',
        '7ED' => 'E02004632',
        '7EE' => 'E02004632',
        '7EF' => 'E02004632',
        '7EG' => 'E02004631',
        '7EH' => 'E02004631',
        '7EJ' => 'E02004629',
        '7EL' => 'E02004633',
        '7EN' => 'E02004631',
        '7EP' => 'E02004631',
        '7EQ' => 'E02004631',
        '7ER' => 'E02004631',
        '7ES' => 'E02004631',
        '7ET' => 'E02004631',
        '7EU' => 'E02004631',
        '7EW' => 'E02004631',
        '7EX' => 'E02004632',
        '7EY' => 'E02004631',
        '7EZ' => 'E02004631',
        '7FA' => 'E02004631',
        '7FB' => 'E02004632',
        '7FD' => 'E02004632',
        '7FE' => 'E02004632',
        '7FF' => 'E02004632',
        '7FG' => 'E02004632',
        '7GA' => 'E02004632',
        '7GB' => 'E02004631',
        '7GD' => 'E02004632',
        '7GZ' => 'E02004632',
        '7HA' => 'E02004631',
        '7HB' => 'E02004631',
        '7HD' => 'E02004632',
        '7HE' => 'E02004632',
        '7HF' => 'E02004632',
        '7HG' => 'E02004632',
        '7HH' => 'E02004632',
        '7HJ' => 'E02004632',
        '7HL' => 'E02004632',
        '7HN' => 'E02004632',
        '7HP' => 'E02004632',
        '7HQ' => 'E02004632',
        '7HR' => 'E02004632',
        '7HS' => 'E02004632',
        '7HT' => 'E02004632',
        '7HU' => 'E02004632',
        '7HW' => 'E02004632',
        '7HX' => 'E02004632',
        '7HY' => 'E02004632',
        '7HZ' => 'E02004632',
        '7JA' => 'E02004632',
        '7JB' => 'E02004632',
        '7JD' => 'E02004632',
        '7JE' => 'E02004632',
        '7JF' => 'E02004632',
        '7JG' => 'E02004632',
        '7JH' => 'E02004632',
        '7JJ' => 'E02004632',
        '7JL' => 'E02004632',
        '7JN' => 'E02004632',
        '7JP' => 'E02004632',
        '7JQ' => 'E02004632',
        '7JR' => 'E02004632',
        '7JS' => 'E02004632',
        '7JT' => 'E02004632',
        '7JU' => 'E02004632',
        '7JW' => 'E02004632',
        '7JX' => 'E02004632',
        '7JY' => 'E02004632',
        '7JZ' => 'E02004632',
        '7LA' => 'E02004632',
        '7LB' => 'E02004632',
        '7LD' => 'E02004632',
        '7LE' => 'E02004632',
        '7LF' => 'E02004632',
        '7LG' => 'E02004632',
        '7LH' => 'E02004632',
        '7LJ' => 'E02004632',
        '7LL' => 'E02004632',
        '7LN' => 'E02004632',
        '7LP' => 'E02004632',
        '7LQ' => 'E02004632',
        '7LR' => 'E02004632',
        '7LS' => 'E02004633',
        '7LT' => 'E02004632',
        '7LU' => 'E02004633',
        '7LW' => 'E02004632',
        '7LX' => 'E02004633',
        '7LY' => 'E02004633',
        '7LZ' => 'E02004633',
        '7NA' => 'E02004633',
        '7NB' => 'E02004633',
        '7ND' => 'E02004633',
        '7NE' => 'E02004631',
        '7NF' => 'E02004631',
        '7NG' => 'E02004632',
        '7NH' => 'E02004632',
        '7NJ' => 'E02004632',
        '7NL' => 'E02004632',
        '7NN' => 'E02004631',
        '7NP' => 'E02004631',
        '7NQ' => 'E02004632',
        '7NR' => 'E02004631',
        '7NS' => 'E02004631',
        '7NT' => 'E02004631',
        '7NU' => 'E02004631',
        '7NW' => 'E02004631',
        '7NX' => 'E02004631',
        '7NY' => 'E02004631',
        '7NZ' => 'E02004631',
        '7PA' => 'E02004631',
        '7PB' => 'E02004631',
        '7PD' => 'E02004631',
        '7PE' => 'E02004631',
        '7PF' => 'E02004631',
        '7PG' => 'E02004631',
        '7PH' => 'E02004631',
        '7PJ' => 'E02004631',
        '7PL' => 'E02004631',
        '7PN' => 'E02004631',
        '7PP' => 'E02004631',
        '7PQ' => 'E02004631',
        '7PR' => 'E02004632',
        '7PS' => 'E02004632',
        '7PT' => 'E02004632',
        '7PU' => 'E02004632',
        '7PW' => 'E02004631',
        '7PX' => 'E02004632',
        '7PY' => 'E02004632',
        '7QA' => 'E02004632',
        '7QB' => 'E02004632',
        '7QD' => 'E02004632',
        '7QE' => 'E02004632',
        '7QF' => 'E02004632',
        '7QG' => 'E02004632',
        '7QH' => 'E02004632',
        '7QJ' => 'E02004632',
        '7QL' => 'E02004632',
        '7QN' => 'E02004632',
        '7QP' => 'E02004632',
        '7QQ' => 'E02004632',
        '7QR' => 'E02004632',
        '7QS' => 'E02004632',
        '7QT' => 'E02004632',
        '7QU' => 'E02004632',
        '7QW' => 'E02004632',
        '7QX' => 'E02004632',
        '7QY' => 'E02004632',
        '7QZ' => 'E02004632',
        '7RA' => 'E02004632',
        '7RB' => 'E02004632',
        '7RD' => 'E02004632',
        '7RE' => 'E02004632',
        '7RF' => 'E02004632',
        '7RG' => 'E02004632',
        '7RH' => 'E02004632',
        '7RJ' => 'E02004632',
        '7RL' => 'E02004632',
        '7RN' => 'E02004632',
        '7RP' => 'E02004632',
        '7RQ' => 'E02004632',
        '7RR' => 'E02004632',
        '7RS' => 'E02004632',
        '7RT' => 'E02004632',
        '7RU' => 'E02004632',
        '7RW' => 'E02004632',
        '7RX' => 'E02004632',
        '7RY' => 'E02004632',
        '7RZ' => 'E02004632',
        '7SA' => 'E02004632',
        '7SB' => 'E02004632',
        '7WY' => 'E02004632',
        '7WZ' => 'E02004632',
        '7XX' => 'E02004632',
        '7YA' => 'E02004632',
        '7YB' => 'E02004632',
        '7YD' => 'E02004632',
        '7YE' => 'E02004632',
        '7YF' => 'E02004632',
        '7YG' => 'E02004632',
        '7YH' => 'E02004632',
        '7YJ' => 'E02004632',
        '7YL' => 'E02004632',
        '7YN' => 'E02004632',
        '7YP' => 'E02004632',
        '7YQ' => 'E02004632',
        '7YR' => 'E02004632',
        '7YS' => 'E02004632',
        '7YU' => 'E02004632',
        '8AA' => 'E02004632',
        '8AB' => 'E02004632',
        '8AD' => 'E02004632',
        '8AE' => 'E02004632',
        '8AF' => 'E02004632',
        '8AG' => 'E02004632',
        '8AH' => 'E02004632',
        '8AJ' => 'E02004632',
        '8AL' => 'E02004632',
        '8AN' => 'E02004632',
        '8AP' => 'E02004632',
        '8AQ' => 'E02004632',
        '8AR' => 'E02004632',
        '8AS' => 'E02004632',
        '8AT' => 'E02004632',
        '8AU' => 'E02004632',
        '8AW' => 'E02004632',
        '8AX' => 'E02004632',
        '8AY' => 'E02004632',
        '8AZ' => 'E02004632',
        '8BA' => 'E02004632',
        '8BB' => 'E02004632',
        '8BD' => 'E02004632',
        '8BE' => 'E02004632',
        '8BG' => 'E02004632',
        '8BH' => 'E02004632',
        '8BJ' => 'E02004632',
        '8BL' => 'E02004632',
        '8BN' => 'E02004632',
        '8BP' => 'E02004632',
        '8BQ' => 'E02004632',
        '8BS' => 'E02004632',
        '8BT' => 'E02004632',
        '8BU' => 'E02004632',
        '8BW' => 'E02004632',
        '8BX' => 'E02004632',
        '8BY' => 'E02004632',
        '8BZ' => 'E02004632',
        '8DA' => 'E02004632',
        '8DB' => 'E02004632',
        '8DD' => 'E02004632',
        '8DE' => 'E02004632',
        '8DF' => 'E02004632',
        '8DG' => 'E02004632',
        '8DH' => 'E02004632',
        '8DJ' => 'E02004632',
        '8DL' => 'E02004632',
        '8DN' => 'E02004632',
        '8DP' => 'E02004632',
        '8DQ' => 'E02004632',
        '8DR' => 'E02004632',
        '8DS' => 'E02004632',
        '8DT' => 'E02004632',
        '8DU' => 'E02004632',
        '8DW' => 'E02004632',
        '8DX' => 'E02004632',
        '8DY' => 'E02004632',
        '8DZ' => 'E02004632',
        '8EA' => 'E02004632',
        '8EB' => 'E02004632',
        '8ED' => 'E02004632',
        '8EE' => 'E02004632',
        '8EF' => 'E02004632',
        '8EG' => 'E02004632',
        '8EH' => 'E02004632',
        '8EJ' => 'E02004632',
        '8EL' => 'E02004632',
        '8EN' => 'E02004632',
        '8EP' => 'E02004632',
        '8EQ' => 'E02004632',
        '8ER' => 'E02004632',
        '8ES' => 'E02004633',
        '8ET' => 'E02004632',
        '8EU' => 'E02004632',
        '8EW' => 'E02004632',
        '8EX' => 'E02004632',
        '8EY' => 'E02004632',
        '8EZ' => 'E02004632',
        '8FA' => 'E02004632',
        '8FB' => 'E02004632',
        '8FD' => 'E02004632',
        '8FE' => 'E02004632',
        '8FF' => 'E02004632',
        '8FG' => 'E02004632',
        '8GA' => 'E02004632',
        '8HA' => 'E02004632',
        '8HB' => 'E02004632',
        '8HD' => 'E02004632',
        '8HE' => 'E02004632',
        '8HF' => 'E02004632',
        '8HG' => 'E02004632',
        '8HH' => 'E02004632',
        '8HJ' => 'E02004632',
        '8HL' => 'E02004632',
        '8HN' => 'E02004632',
        '8HP' => 'E02004632',
        '8HQ' => 'E02004632',
        '8HR' => 'E02004632',
        '8HS' => 'E02004632',
        '8HT' => 'E02004632',
        '8HU' => 'E02004632',
        '8HW' => 'E02004632',
        '8HX' => 'E02004632',
        '8HY' => 'E02004632',
        '8HZ' => 'E02004632',
        '8JA' => 'E02004633',
        '8JB' => 'E02004632',
        '8JD' => 'E02004633',
        '8JE' => 'E02004633',
        '8JF' => 'E02004633',
        '8JG' => 'E02004633',
        '8JH' => 'E02004633',
        '8JJ' => 'E02004633',
        '8JL' => 'E02004633',
        '8JN' => 'E02004633',
        '8JP' => 'E02004633',
        '8JQ' => 'E02004633',
        '8JR' => 'E02004633',
        '8JS' => 'E02004633',
        '8JT' => 'E02004633',
        '8JU' => 'E02004633',
        '8JW' => 'E02004633',
        '8JX' => 'E02004633',
        '8JY' => 'E02004633',
        '8JZ' => 'E02004633',
        '8LA' => 'E02004633',
        '8LB' => 'E02004633',
        '8LD' => 'E02004633',
        '8LE' => 'E02004633',
        '8LF' => 'E02004633',
        '8LG' => 'E02004633',
        '8LH' => 'E02004633',
        '8LJ' => 'E02004633',
        '8LL' => 'E02004633',
        '8LN' => 'E02004633',
        '8LP' => 'E02004633',
        '8LQ' => 'E02004633',
        '8LR' => 'E02004633',
        '8LS' => 'E02004633',
        '8LT' => 'E02004633',
        '8LU' => 'E02004633',
        '8LW' => 'E02004633',
        '8LX' => 'E02004633',
        '8LY' => 'E02004633',
        '8LZ' => 'E02004633',
        '8NA' => 'E02004632',
        '8NB' => 'E02004632',
        '8ND' => 'E02004632',
        '8NE' => 'E02004632',
        '8NF' => 'E02004631',
        '8NG' => 'E02004631',
        '8NH' => 'E02004631',
        '8NJ' => 'E02004631',
        '8NL' => 'E02004631',
        '8NN' => 'E02004631',
        '8NP' => 'E02004631',
        '8NQ' => 'E02004631',
        '8NR' => 'E02004631',
        '8NS' => 'E02004632',
        '8NT' => 'E02004631',
        '8NU' => 'E02004631',
        '8NW' => 'E02004631',
        '8NX' => 'E02004631',
        '8NY' => 'E02004631',
        '8NZ' => 'E02004631',
        '8PA' => 'E02004631',
        '8PD' => 'E02004631',
        '8PE' => 'E02004631',
        '8PF' => 'E02004632',
        '8PG' => 'E02004631',
        '8PH' => 'E02004631',
        '8PJ' => 'E02004632',
        '8PL' => 'E02004632',
        '8PN' => 'E02004632',
        '8PP' => 'E02004632',
        '8PQ' => 'E02004631',
        '8PR' => 'E02004632',
        '8PS' => 'E02004632',
        '8PT' => 'E02004632',
        '8PU' => 'E02004632',
        '8PW' => 'E02004633',
        '8PX' => 'E02004632',
        '8PY' => 'E02004632',
        '8PZ' => 'E02004632',
        '8QA' => 'E02004632',
        '8QB' => 'E02004632',
        '8QD' => 'E02004632',
        '8QE' => 'E02004632',
        '8QF' => 'E02004632',
        '8QG' => 'E02004632',
        '8QH' => 'E02004632',
        '8QJ' => 'E02004632',
        '8QL' => 'E02004632',
        '8QN' => 'E02004631',
        '8QP' => 'E02004632',
        '8QQ' => 'E02004632',
        '8QR' => 'E02004632',
        '8QS' => 'E02004632',
        '8QT' => 'E02004632',
        '8QU' => 'E02004632',
        '8QW' => 'E02004632',
        '8QX' => 'E02004632',
        '8QY' => 'E02004632',
        '8QZ' => 'E02004632',
        '8RA' => 'E02004632',
        '8RB' => 'E02004632',
        '8RD' => 'E02004632',
        '8RE' => 'E02004632',
        '8RF' => 'E02004632',
        '8RG' => 'E02004632',
        '8RH' => 'E02004632',
        '8RJ' => 'E02004632',
        '8RL' => 'E02004632',
        '8RN' => 'E02004632',
        '8RP' => 'E02004632',
        '8RQ' => 'E02004632',
        '8RR' => 'E02004632',
        '8RS' => 'E02004632',
        '8RT' => 'E02004632',
        '8RU' => 'E02004632',
        '8RW' => 'E02004632',
        '8RX' => 'E02004633',
        '8RY' => 'E02004631',
        '8RZ' => 'E02004632',
        '8SA' => 'E02004632',
        '8SB' => 'E02004632',
        '8SD' => 'E02004632',
        '8SE' => 'E02004632',
        '8SF' => 'E02004632',
        '8SG' => 'E02004632',
        '8TA' => 'E02004633',
        '8TR' => 'E02004632',
        '8WA' => 'E02004632',
        '8WZ' => 'E02004632',
        '8YA' => 'E02004632',
        '8YB' => 'E02004632',
        '8YD' => 'E02004632',
        '8YE' => 'E02004633',
        '8YF' => 'E02004632',
        '8YG' => 'E02004632',
        '8YH' => 'E02004632',
        '8YJ' => 'E02004632',
        '8YL' => 'E02004633',
        '8YN' => 'E02004632',
        '8YP' => 'E02004632',
        '8YQ' => 'E02004632',
        '8YR' => 'E02004632',
        '8YS' => 'E02004632',
        '8YT' => 'E02004632',
        '8YU' => 'E02004632',
        '8YW' => 'E02004632',
        '8YX' => 'E02004632',
        '8YY' => 'E02004632',
        '8YZ' => 'E02004632',
        '8ZR' => 'E02004632',
        '8ZS' => 'E02004632',
        '8ZT' => 'E02004632',
        '8ZU' => 'E02004632',
        '8ZW' => 'E02004632',
        '8ZX' => 'E02004632',
        '9AA' => 'E02004632',
        '9AB' => 'E02004632',
        '9AD' => 'E02004632',
        '9AE' => 'E02004632',
        '9AF' => 'E02004632',
        '9AG' => 'E02004632',
        '9AH' => 'E02004632',
        '9AJ' => 'E02004632',
        '9AL' => 'E02004632',
        '9AN' => 'E02004632',
        '9AP' => 'E02004632',
        '9AQ' => 'E02004632',
        '9AR' => 'E02004632',
        '9AS' => 'E02004632',
        '9BA' => 'E02004632',
        '9BB' => 'E02004632',
        '9BD' => 'E02004632',
        '9BE' => 'E02004632',
        '9BF' => 'E02004632',
        '9BG' => 'E02004632',
        '9BH' => 'E02004632',
        '9BJ' => 'E02004632',
        '9BL' => 'E02004632',
        '9BN' => 'E02004632',
        '9SA' => 'E02004632',
        '9SB' => 'E02004632',
        '9SD' => 'E02004632',
        '9SE' => 'E02004632',
        '9SF' => 'E02004632',
        '9SG' => 'E02004632',
        '9SH' => 'E02004632',
        '9SJ' => 'E02004632',
        '9SL' => 'E02004632',
        '9SN' => 'E02004632',
        '9SP' => 'E02004632',
        '9SQ' => 'E02004632',
        '9SR' => 'E02004632',
        '9SS' => 'E02004632',
        '9ST' => 'E02004632',
        '9SU' => 'E02004632',
        '9SW' => 'E02004632',
        '9SX' => 'E02004632',
        '9SY' => 'E02004632',
        '9SZ' => 'E02004632',
        '9TA' => 'E02004632',
        '9TB' => 'E02004632',
        '9TD' => 'E02004632',
        '9TE' => 'E02004632',
        '9TF' => 'E02004632',
        '9TH' => 'E02004632',
        '9TJ' => 'E02004632',
        '9TL' => 'E02004632',
        '9ZZ' => 'E02004632',
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
