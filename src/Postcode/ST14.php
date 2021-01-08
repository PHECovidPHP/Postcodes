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
final class ST14
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '5AA' => 'E02006133',
        '5AB' => 'E02006132',
        '5AD' => 'E02006131',
        '5AE' => 'E02006131',
        '5AF' => 'E02006131',
        '5AG' => 'E02006131',
        '5AH' => 'E02006131',
        '5AJ' => 'E02006131',
        '5AL' => 'E02006131',
        '5AN' => 'E02006131',
        '5AP' => 'E02006131',
        '5AQ' => 'E02006131',
        '5AR' => 'E02006131',
        '5AS' => 'E02006131',
        '5AT' => 'E02006131',
        '5AU' => 'E02006133',
        '5AW' => 'E02006131',
        '5AX' => 'E02006131',
        '5AY' => 'E02006131',
        '5AZ' => 'E02006133',
        '5BA' => 'E02006131',
        '5BB' => 'E02006131',
        '5BD' => 'E02006132',
        '5BE' => 'E02006132',
        '5BF' => 'E02006132',
        '5BG' => 'E02006131',
        '5BH' => 'E02006131',
        '5BJ' => 'E02006131',
        '5BL' => 'E02006131',
        '5BN' => 'E02006131',
        '5BP' => 'E02004077',
        '5BQ' => 'E02006131',
        '5BS' => 'E02004077',
        '5BT' => 'E02004077',
        '5BU' => 'E02004077',
        '5BW' => 'E02006131',
        '5BX' => 'E02006131',
        '5BY' => 'E02006131',
        '5BZ' => 'E02006131',
        '5DA' => 'E02006131',
        '5DB' => 'E02006131',
        '5DD' => 'E02006131',
        '5DE' => 'E02006131',
        '5DF' => 'E02006131',
        '5DG' => 'E02006131',
        '5DH' => 'E02006131',
        '5DJ' => 'E02006131',
        '5DL' => 'E02006131',
        '5DN' => 'E02006131',
        '5DP' => 'E02006131',
        '5DQ' => 'E02006131',
        '5DR' => 'E02006131',
        '5DS' => 'E02006132',
        '5DT' => 'E02006132',
        '5DU' => 'E02006131',
        '5DW' => 'E02006131',
        '5DX' => 'E02006131',
        '5DY' => 'E02006131',
        '5DZ' => 'E02006131',
        '5EA' => 'E02006131',
        '5EB' => 'E02006131',
        '5ED' => 'E02006131',
        '5EE' => 'E02006131',
        '5EF' => 'E02006216',
        '5EG' => 'E02006216',
        '5EH' => 'E02006132',
        '5EJ' => 'E02006216',
        '5EL' => 'E02006131',
        '5EN' => 'E02006131',
        '5EP' => 'E02006131',
        '5EQ' => 'E02006132',
        '5ER' => 'E02006131',
        '5ES' => 'E02006131',
        '5ET' => 'E02006131',
        '5EU' => 'E02006131',
        '5EW' => 'E02006131',
        '5EX' => 'E02006131',
        '5EY' => 'E02006131',
        '5EZ' => 'E02006131',
        '5FA' => 'E02006131',
        '5FB' => 'E02006131',
        '5FD' => 'E02006132',
        '5FE' => 'E02006131',
        '5FF' => 'E02006132',
        '5FG' => 'E02006132',
        '5FH' => 'E02006131',
        '5FL' => 'E02006132',
        '5GA' => 'E02006131',
        '5GB' => 'E02006131',
        '5GZ' => 'E02006131',
        '5HA' => 'E02006131',
        '5HB' => 'E02006131',
        '5HD' => 'E02006131',
        '5HE' => 'E02006131',
        '5HF' => 'E02006131',
        '5HG' => 'E02006131',
        '5HH' => 'E02006131',
        '5HJ' => 'E02006131',
        '5HL' => 'E02006131',
        '5HN' => 'E02006131',
        '5HP' => 'E02006131',
        '5HQ' => 'E02006131',
        '5HR' => 'E02006131',
        '5HS' => 'E02006131',
        '5HT' => 'E02006131',
        '5HU' => 'E02006131',
        '5HW' => 'E02006131',
        '5HX' => 'E02006131',
        '5HY' => 'E02006131',
        '5HZ' => 'E02006131',
        '5JA' => 'E02006131',
        '5JB' => 'E02006131',
        '5JD' => 'E02006131',
        '5JE' => 'E02006131',
        '5JF' => 'E02006131',
        '5JG' => 'E02006131',
        '5JH' => 'E02006216',
        '5JJ' => 'E02006131',
        '5JL' => 'E02006131',
        '5JN' => 'E02006131',
        '5JP' => 'E02006131',
        '5JQ' => 'E02006131',
        '5JR' => 'E02006131',
        '5JS' => 'E02006131',
        '5JT' => 'E02006131',
        '5JU' => 'E02006131',
        '5JW' => 'E02006131',
        '5JX' => 'E02006131',
        '5JY' => 'E02006131',
        '5JZ' => 'E02006131',
        '5LA' => 'E02006131',
        '5LB' => 'E02006131',
        '5LD' => 'E02006131',
        '5LE' => 'E02006131',
        '5LF' => 'E02006131',
        '5LG' => 'E02006131',
        '5LH' => 'E02006131',
        '5LJ' => 'E02006131',
        '5LL' => 'E02006131',
        '5LN' => 'E02006131',
        '5LP' => 'E02006131',
        '5LQ' => 'E02006131',
        '5LR' => 'E02006131',
        '5LS' => 'E02006131',
        '5LT' => 'E02006131',
        '5LU' => 'E02006131',
        '5LW' => 'E02006131',
        '5LX' => 'E02006131',
        '5LY' => 'E02006131',
        '5LZ' => 'E02006131',
        '5NA' => 'E02006131',
        '5NB' => 'E02006131',
        '5ND' => 'E02006131',
        '5NE' => 'E02006131',
        '5NF' => 'E02006131',
        '5NG' => 'E02006131',
        '5NH' => 'E02006131',
        '5NJ' => 'E02006131',
        '5NL' => 'E02006131',
        '5NN' => 'E02006131',
        '5NP' => 'E02006132',
        '5NQ' => 'E02006131',
        '5NR' => 'E02006132',
        '5NS' => 'E02006132',
        '5NT' => 'E02006132',
        '5NU' => 'E02006132',
        '5NW' => 'E02006131',
        '5NX' => 'E02006131',
        '5NY' => 'E02006131',
        '5NZ' => 'E02006131',
        '5PA' => 'E02006131',
        '5PB' => 'E02006131',
        '5PD' => 'E02006133',
        '5PE' => 'E02006133',
        '5PF' => 'E02006133',
        '5PG' => 'E02006131',
        '5PH' => 'E02006133',
        '5PJ' => 'E02006133',
        '5PL' => 'E02006131',
        '5PN' => 'E02006131',
        '5PP' => 'E02006131',
        '5WA' => 'E02006133',
        '5WE' => 'E02006133',
        '5WH' => 'E02006133',
        '5WZ' => 'E02006133',
        '5YR' => 'E02006133',
        '5ZY' => 'E02006131',
        '7AA' => 'E02006133',
        '7AB' => 'E02006133',
        '7AD' => 'E02006133',
        '7AE' => 'E02006133',
        '7AF' => 'E02006133',
        '7AG' => 'E02006133',
        '7AH' => 'E02006133',
        '7AJ' => 'E02006133',
        '7AL' => 'E02006133',
        '7AN' => 'E02006132',
        '7AP' => 'E02006132',
        '7AQ' => 'E02006133',
        '7AR' => 'E02006132',
        '7AS' => 'E02006132',
        '7AT' => 'E02006132',
        '7AU' => 'E02006132',
        '7AW' => 'E02006133',
        '7AX' => 'E02006132',
        '7AY' => 'E02006132',
        '7AZ' => 'E02006132',
        '7BA' => 'E02006132',
        '7BB' => 'E02006132',
        '7BD' => 'E02006132',
        '7BE' => 'E02006132',
        '7BF' => 'E02006133',
        '7BG' => 'E02006132',
        '7BH' => 'E02006133',
        '7BJ' => 'E02006133',
        '7BL' => 'E02006133',
        '7BN' => 'E02006133',
        '7BP' => 'E02006133',
        '7BQ' => 'E02006133',
        '7BS' => 'E02006133',
        '7BT' => 'E02006133',
        '7BU' => 'E02006133',
        '7BW' => 'E02006133',
        '7BX' => 'E02006133',
        '7BY' => 'E02006132',
        '7BZ' => 'E02006132',
        '7DA' => 'E02006133',
        '7DB' => 'E02006132',
        '7DD' => 'E02006132',
        '7DE' => 'E02006132',
        '7DF' => 'E02006132',
        '7DG' => 'E02006132',
        '7DH' => 'E02006133',
        '7DJ' => 'E02006132',
        '7DL' => 'E02006132',
        '7DN' => 'E02006132',
        '7DP' => 'E02006132',
        '7DQ' => 'E02006132',
        '7DR' => 'E02006132',
        '7DS' => 'E02006133',
        '7DT' => 'E02006132',
        '7DU' => 'E02006132',
        '7DW' => 'E02006132',
        '7DX' => 'E02006133',
        '7DY' => 'E02006132',
        '7DZ' => 'E02006132',
        '7EA' => 'E02006132',
        '7EB' => 'E02006132',
        '7ED' => 'E02006133',
        '7EE' => 'E02006132',
        '7EF' => 'E02006132',
        '7EG' => 'E02006132',
        '7EH' => 'E02006132',
        '7EJ' => 'E02006132',
        '7EL' => 'E02006133',
        '7EN' => 'E02006132',
        '7EP' => 'E02006132',
        '7EQ' => 'E02006132',
        '7ER' => 'E02006132',
        '7ES' => 'E02006132',
        '7ET' => 'E02006132',
        '7EU' => 'E02006132',
        '7EW' => 'E02006132',
        '7EX' => 'E02006132',
        '7EY' => 'E02006132',
        '7EZ' => 'E02006132',
        '7FA' => 'E02006133',
        '7FB' => 'E02006133',
        '7FD' => 'E02006132',
        '7FE' => 'E02006132',
        '7FF' => 'E02006132',
        '7FG' => 'E02006133',
        '7FH' => 'E02006133',
        '7FJ' => 'E02006132',
        '7FL' => 'E02006131',
        '7FN' => 'E02006133',
        '7FP' => 'E02006132',
        '7GZ' => 'E02006133',
        '7HA' => 'E02006132',
        '7HB' => 'E02006132',
        '7HD' => 'E02006132',
        '7HE' => 'E02006132',
        '7HF' => 'E02006132',
        '7HG' => 'E02006132',
        '7HH' => 'E02006132',
        '7HJ' => 'E02006132',
        '7HL' => 'E02006132',
        '7HN' => 'E02006133',
        '7HP' => 'E02006133',
        '7HQ' => 'E02006132',
        '7HR' => 'E02006133',
        '7HS' => 'E02006133',
        '7HT' => 'E02006133',
        '7HU' => 'E02006133',
        '7HW' => 'E02006132',
        '7HX' => 'E02006133',
        '7HY' => 'E02006133',
        '7HZ' => 'E02006133',
        '7JA' => 'E02006132',
        '7JB' => 'E02006133',
        '7JD' => 'E02006133',
        '7JE' => 'E02006133',
        '7JF' => 'E02006132',
        '7JG' => 'E02006133',
        '7JH' => 'E02006133',
        '7JJ' => 'E02006133',
        '7JL' => 'E02006133',
        '7JN' => 'E02006133',
        '7JP' => 'E02006133',
        '7JQ' => 'E02006133',
        '7JR' => 'E02006133',
        '7JS' => 'E02006133',
        '7JT' => 'E02006133',
        '7JU' => 'E02006133',
        '7JW' => 'E02006133',
        '7JX' => 'E02006133',
        '7JY' => 'E02006133',
        '7JZ' => 'E02006133',
        '7LA' => 'E02006133',
        '7LB' => 'E02006133',
        '7LD' => 'E02006133',
        '7LE' => 'E02006133',
        '7LF' => 'E02006132',
        '7LG' => 'E02006133',
        '7LH' => 'E02006133',
        '7LJ' => 'E02006133',
        '7LL' => 'E02006133',
        '7LN' => 'E02006133',
        '7LP' => 'E02006132',
        '7LQ' => 'E02006133',
        '7LR' => 'E02006132',
        '7LS' => 'E02006133',
        '7LT' => 'E02006133',
        '7LU' => 'E02006133',
        '7LW' => 'E02006132',
        '7LX' => 'E02006133',
        '7LY' => 'E02006133',
        '7LZ' => 'E02006133',
        '7NA' => 'E02006132',
        '7NB' => 'E02006132',
        '7ND' => 'E02006133',
        '7NE' => 'E02006132',
        '7NF' => 'E02006132',
        '7NG' => 'E02006132',
        '7NH' => 'E02006132',
        '7NJ' => 'E02006132',
        '7NL' => 'E02006132',
        '7NN' => 'E02006132',
        '7NP' => 'E02006132',
        '7NQ' => 'E02006132',
        '7NR' => 'E02006132',
        '7NS' => 'E02006132',
        '7NT' => 'E02006132',
        '7NU' => 'E02006132',
        '7NW' => 'E02006133',
        '7NX' => 'E02006133',
        '7NY' => 'E02006132',
        '7NZ' => 'E02006132',
        '7PA' => 'E02006132',
        '7PB' => 'E02006132',
        '7PD' => 'E02006132',
        '7PE' => 'E02006132',
        '7PF' => 'E02006132',
        '7PG' => 'E02006132',
        '7PH' => 'E02006132',
        '7PJ' => 'E02006133',
        '7PL' => 'E02006133',
        '7PN' => 'E02006133',
        '7PP' => 'E02006133',
        '7PQ' => 'E02006132',
        '7PR' => 'E02006133',
        '7PS' => 'E02006132',
        '7PT' => 'E02006133',
        '7PU' => 'E02006133',
        '7PW' => 'E02006133',
        '7PX' => 'E02006133',
        '7PY' => 'E02006133',
        '7PZ' => 'E02006132',
        '7QA' => 'E02006133',
        '7QB' => 'E02006133',
        '7QD' => 'E02006133',
        '7QE' => 'E02006133',
        '7QF' => 'E02006132',
        '7QG' => 'E02006132',
        '7QH' => 'E02006133',
        '7QJ' => 'E02006133',
        '7QL' => 'E02006133',
        '7QN' => 'E02006133',
        '7QP' => 'E02006133',
        '7QQ' => 'E02006133',
        '7QR' => 'E02006133',
        '7QS' => 'E02006133',
        '7QT' => 'E02006133',
        '7QU' => 'E02006133',
        '7QW' => 'E02006133',
        '7QX' => 'E02006133',
        '7QY' => 'E02006132',
        '7QZ' => 'E02006133',
        '7RA' => 'E02006133',
        '7RB' => 'E02006133',
        '7RD' => 'E02006132',
        '7RE' => 'E02006132',
        '7RF' => 'E02006133',
        '7RG' => 'E02006132',
        '7RH' => 'E02006132',
        '7RJ' => 'E02006132',
        '7RL' => 'E02006133',
        '7RN' => 'E02006132',
        '7RP' => 'E02006132',
        '7RQ' => 'E02006132',
        '7RR' => 'E02006132',
        '7RS' => 'E02006133',
        '7RT' => 'E02006133',
        '7RU' => 'E02006133',
        '7RW' => 'E02006132',
        '7RX' => 'E02006133',
        '7RY' => 'E02006133',
        '7RZ' => 'E02006132',
        '7SA' => 'E02006133',
        '7SB' => 'E02006133',
        '7SD' => 'E02006133',
        '7SE' => 'E02006133',
        '7SF' => 'E02006133',
        '7SG' => 'E02006132',
        '7SH' => 'E02006133',
        '7SJ' => 'E02006132',
        '7SL' => 'E02006133',
        '7SN' => 'E02006133',
        '7SQ' => 'E02006133',
        '7SR' => 'E02006132',
        '7ST' => 'E02006132',
        '7SU' => 'E02006132',
        '7SW' => 'E02006132',
        '7SX' => 'E02006132',
        '7SY' => 'E02006132',
        '7SZ' => 'E02006132',
        '7TA' => 'E02006132',
        '7TB' => 'E02006132',
        '7WA' => 'E02006133',
        '7WB' => 'E02006133',
        '7WG' => 'E02006132',
        '7WH' => 'E02006133',
        '7WQ' => 'E02006133',
        '7XR' => 'E02006133',
        '7ZD' => 'E02006133',
        '7ZF' => 'E02006133',
        '7ZG' => 'E02006133',
        '7ZR' => 'E02006133',
        '7ZS' => 'E02006133',
        '8AA' => 'E02006133',
        '8AB' => 'E02006133',
        '8AD' => 'E02006133',
        '8AE' => 'E02006133',
        '8AF' => 'E02006133',
        '8AG' => 'E02006133',
        '8AH' => 'E02006133',
        '8AJ' => 'E02006133',
        '8AL' => 'E02006133',
        '8AN' => 'E02006133',
        '8AP' => 'E02006133',
        '8AQ' => 'E02006133',
        '8AR' => 'E02006133',
        '8AS' => 'E02006133',
        '8AT' => 'E02006133',
        '8AU' => 'E02006133',
        '8AW' => 'E02006133',
        '8AX' => 'E02006133',
        '8AY' => 'E02006133',
        '8AZ' => 'E02006133',
        '8BA' => 'E02006133',
        '8BB' => 'E02006133',
        '8BD' => 'E02006133',
        '8BE' => 'E02006133',
        '8BF' => 'E02006133',
        '8BG' => 'E02006133',
        '8BH' => 'E02006133',
        '8BJ' => 'E02006133',
        '8BL' => 'E02006133',
        '8BN' => 'E02006133',
        '8BP' => 'E02006133',
        '8BQ' => 'E02006133',
        '8BS' => 'E02006133',
        '8BT' => 'E02006133',
        '8BU' => 'E02006133',
        '8BW' => 'E02006133',
        '8BX' => 'E02006133',
        '8BY' => 'E02006133',
        '8BZ' => 'E02006133',
        '8DA' => 'E02006133',
        '8DB' => 'E02006133',
        '8DD' => 'E02006133',
        '8DE' => 'E02006133',
        '8DF' => 'E02006133',
        '8DG' => 'E02006133',
        '8DH' => 'E02006133',
        '8DJ' => 'E02006133',
        '8DL' => 'E02006133',
        '8DN' => 'E02006133',
        '8DP' => 'E02006133',
        '8DQ' => 'E02006133',
        '8DR' => 'E02006133',
        '8DS' => 'E02006133',
        '8DT' => 'E02006133',
        '8DU' => 'E02006133',
        '8DW' => 'E02006133',
        '8DX' => 'E02006133',
        '8DY' => 'E02006133',
        '8DZ' => 'E02006133',
        '8EA' => 'E02006133',
        '8EB' => 'E02006133',
        '8ED' => 'E02006133',
        '8EE' => 'E02006133',
        '8EF' => 'E02006133',
        '8EG' => 'E02006133',
        '8EH' => 'E02006133',
        '8EJ' => 'E02006133',
        '8EL' => 'E02006133',
        '8EN' => 'E02006132',
        '8EP' => 'E02006133',
        '8EQ' => 'E02006133',
        '8ER' => 'E02006133',
        '8ES' => 'E02006133',
        '8ET' => 'E02006133',
        '8EU' => 'E02006133',
        '8EW' => 'E02006133',
        '8EX' => 'E02006133',
        '8EY' => 'E02006133',
        '8EZ' => 'E02006133',
        '8FA' => 'E02006133',
        '8FB' => 'E02006133',
        '8FD' => 'E02006133',
        '8GA' => 'E02006133',
        '8GB' => 'E02006133',
        '8HA' => 'E02006133',
        '8HB' => 'E02006133',
        '8HD' => 'E02006133',
        '8HE' => 'E02006133',
        '8HF' => 'E02006133',
        '8HG' => 'E02006133',
        '8HH' => 'E02006133',
        '8HJ' => 'E02006133',
        '8HL' => 'E02006133',
        '8HN' => 'E02006133',
        '8HP' => 'E02006133',
        '8HQ' => 'E02006133',
        '8HR' => 'E02006133',
        '8HS' => 'E02006133',
        '8HT' => 'E02006133',
        '8HU' => 'E02006133',
        '8HW' => 'E02006133',
        '8HX' => 'E02006133',
        '8HY' => 'E02006133',
        '8HZ' => 'E02006133',
        '8JA' => 'E02006133',
        '8JB' => 'E02006133',
        '8JD' => 'E02006133',
        '8JE' => 'E02006133',
        '8JF' => 'E02006133',
        '8JG' => 'E02006133',
        '8JH' => 'E02006133',
        '8JJ' => 'E02006133',
        '8JL' => 'E02006133',
        '8JN' => 'E02006133',
        '8JP' => 'E02006136',
        '8JQ' => 'E02006133',
        '8JR' => 'E02006133',
        '8JS' => 'E02006131',
        '8JT' => 'E02006131',
        '8JU' => 'E02006133',
        '8JW' => 'E02006136',
        '8JX' => 'E02006131',
        '8JY' => 'E02006136',
        '8JZ' => 'E02006136',
        '8LA' => 'E02006136',
        '8LB' => 'E02006136',
        '8LD' => 'E02006136',
        '8LE' => 'E02006136',
        '8LF' => 'E02006136',
        '8LG' => 'E02006136',
        '8LH' => 'E02006136',
        '8LJ' => 'E02006136',
        '8LL' => 'E02006136',
        '8LN' => 'E02006136',
        '8LP' => 'E02006136',
        '8LQ' => 'E02006136',
        '8LR' => 'E02006136',
        '8LS' => 'E02006136',
        '8LT' => 'E02006136',
        '8LU' => 'E02006136',
        '8LW' => 'E02006136',
        '8LX' => 'E02006136',
        '8LY' => 'E02006136',
        '8LZ' => 'E02006136',
        '8NA' => 'E02006136',
        '8NB' => 'E02006136',
        '8ND' => 'E02006136',
        '8NE' => 'E02006133',
        '8NF' => 'E02006136',
        '8NG' => 'E02006136',
        '8NH' => 'E02006131',
        '8NJ' => 'E02006133',
        '8NL' => 'E02006131',
        '8NN' => 'E02006133',
        '8NP' => 'E02006136',
        '8NQ' => 'E02006136',
        '8NR' => 'E02006136',
        '8NS' => 'E02006136',
        '8NT' => 'E02006136',
        '8NU' => 'E02006136',
        '8NW' => 'E02006131',
        '8NX' => 'E02006136',
        '8NY' => 'E02006136',
        '8NZ' => 'E02006136',
        '8PA' => 'E02006136',
        '8PB' => 'E02006136',
        '8PD' => 'E02006136',
        '8PE' => 'E02006136',
        '8PF' => 'E02006136',
        '8PG' => 'E02006136',
        '8PH' => 'E02006136',
        '8PJ' => 'E02006136',
        '8PL' => 'E02006136',
        '8PN' => 'E02006136',
        '8PP' => 'E02006136',
        '8PQ' => 'E02006136',
        '8PR' => 'E02006131',
        '8PS' => 'E02006131',
        '8PT' => 'E02006133',
        '8PU' => 'E02006133',
        '8PW' => 'E02006131',
        '8PX' => 'E02006136',
        '8PY' => 'E02006133',
        '8PZ' => 'E02006136',
        '8QA' => 'E02006133',
        '8QB' => 'E02006131',
        '8QD' => 'E02006131',
        '8QE' => 'E02006136',
        '8QF' => 'E02006131',
        '8QG' => 'E02006136',
        '8QH' => 'E02006136',
        '8QJ' => 'E02006136',
        '8QL' => 'E02006136',
        '8QN' => 'E02006136',
        '8QP' => 'E02006136',
        '8QQ' => 'E02006136',
        '8QR' => 'E02006136',
        '8QS' => 'E02006136',
        '8QT' => 'E02006136',
        '8QU' => 'E02006136',
        '8QW' => 'E02006136',
        '8QX' => 'E02006133',
        '8QY' => 'E02006131',
        '8QZ' => 'E02006131',
        '8RA' => 'E02006131',
        '8RB' => 'E02006131',
        '8RD' => 'E02006136',
        '8RE' => 'E02006136',
        '8RF' => 'E02006136',
        '8RG' => 'E02006136',
        '8RH' => 'E02006136',
        '8RJ' => 'E02006136',
        '8RL' => 'E02006136',
        '8RN' => 'E02006136',
        '8RP' => 'E02006136',
        '8RQ' => 'E02006136',
        '8RR' => 'E02006131',
        '8RS' => 'E02006131',
        '8RT' => 'E02006131',
        '8RU' => 'E02006131',
        '8RW' => 'E02006136',
        '8RX' => 'E02006131',
        '8RY' => 'E02006136',
        '8RZ' => 'E02006131',
        '8SA' => 'E02006195',
        '8SB' => 'E02006136',
        '8SD' => 'E02006136',
        '8SE' => 'E02006136',
        '8SF' => 'E02006195',
        '8SG' => 'E02006131',
        '8SH' => 'E02006131',
        '8SJ' => 'E02006133',
        '8SL' => 'E02006133',
        '8SN' => 'E02006133',
        '8SP' => 'E02006133',
        '8SQ' => 'E02006131',
        '8SR' => 'E02006133',
        '8SS' => 'E02006133',
        '8ST' => 'E02006133',
        '8SU' => 'E02006133',
        '8SW' => 'E02006133',
        '8SX' => 'E02006133',
        '8SY' => 'E02006133',
        '8SZ' => 'E02006133',
        '8TA' => 'E02006133',
        '8TB' => 'E02006133',
        '8TD' => 'E02006131',
        '8TE' => 'E02006133',
        '8TF' => 'E02006133',
        '8TG' => 'E02006133',
        '8TH' => 'E02006133',
        '8TJ' => 'E02006133',
        '8TL' => 'E02006133',
        '8TN' => 'E02006133',
        '8TP' => 'E02006133',
        '8TQ' => 'E02006133',
        '8TR' => 'E02006133',
        '8TS' => 'E02006133',
        '8TT' => 'E02006133',
        '8TU' => 'E02006136',
        '8TW' => 'E02006133',
        '8TX' => 'E02006133',
        '8TY' => 'E02006133',
        '8TZ' => 'E02006133',
        '8UA' => 'E02006133',
        '8UB' => 'E02006133',
        '8UD' => 'E02006133',
        '8UE' => 'E02006133',
        '8UF' => 'E02006133',
        '8UG' => 'E02006133',
        '8UH' => 'E02006133',
        '8UJ' => 'E02006133',
        '8UL' => 'E02006133',
        '8UN' => 'E02006133',
        '8UP' => 'E02006133',
        '8UQ' => 'E02006133',
        '8UR' => 'E02006133',
        '8US' => 'E02006133',
        '8UT' => 'E02006133',
        '8UU' => 'E02006133',
        '8UW' => 'E02006133',
        '8UX' => 'E02006133',
        '8UY' => 'E02006133',
        '8UZ' => 'E02006133',
        '8WA' => 'E02006133',
        '8WD' => 'E02006136',
        '8WE' => 'E02006136',
        '8WY' => 'E02006133',
        '8WZ' => 'E02006133',
        '8XD' => 'E02006133',
        '8XE' => 'E02006133',
        '8XF' => 'E02006133',
        '8XG' => 'E02006133',
        '8XH' => 'E02006133',
        '8XJ' => 'E02006133',
        '8XL' => 'E02006133',
        '8XP' => 'E02006136',
        '8XQ' => 'E02006133',
        '8XR' => 'E02006136',
        '8XS' => 'E02006133',
        '8XT' => 'E02006133',
        '8XU' => 'E02006133',
        '8XW' => 'E02006133',
        '8XY' => 'E02006133',
        '8XZ' => 'E02006133',
        '8YA' => 'E02006133',
        '8YB' => 'E02006133',
        '8YD' => 'E02006133',
        '8YE' => 'E02006133',
        '8YF' => 'E02006133',
        '8YG' => 'E02006133',
        '8YH' => 'E02006133',
        '8YQ' => 'E02006133',
        '8YY' => 'E02006133',
        '8ZS' => 'E02006133',
        '8ZU' => 'E02006133',
        '8ZY' => 'E02006133',
        '9AA' => 'E02006133',
        '9AB' => 'E02006133',
        '9AD' => 'E02006133',
        '9AE' => 'E02006133',
        '9AF' => 'E02006133',
        '9AG' => 'E02006133',
        '9AH' => 'E02006133',
        '9AJ' => 'E02006133',
        '9AN' => 'E02006133',
        '9AP' => 'E02006133',
        '9AQ' => 'E02006133',
        '9AR' => 'E02006133',
        '9AS' => 'E02006133',
        '9AT' => 'E02006133',
        '9AU' => 'E02006133',
        '9AW' => 'E02006133',
        '9AX' => 'E02006133',
        '9AY' => 'E02006133',
        '9AZ' => 'E02006133',
        '9BA' => 'E02006133',
        '9BB' => 'E02006133',
        '9BD' => 'E02006133',
        '9BE' => 'E02006133',
        '9BF' => 'E02006133',
        '9BG' => 'E02006133',
        '9BH' => 'E02006133',
        '9BJ' => 'E02006133',
        '9BL' => 'E02006133',
        '9BN' => 'E02006133',
        '9BP' => 'E02006133',
        '9BQ' => 'E02006133',
        '9BR' => 'E02006133',
        '9BS' => 'E02006133',
        '9BT' => 'E02006133',
        '9BU' => 'E02006133',
        '9BW' => 'E02006133',
        '9BX' => 'E02006133',
        '9BY' => 'E02006133',
        '9BZ' => 'E02006133',
        '9DA' => 'E02006133',
        '9DB' => 'E02006133',
        '9DD' => 'E02006133',
        '9DE' => 'E02006133',
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