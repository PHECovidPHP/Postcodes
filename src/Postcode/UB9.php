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
final class UB9
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '4AA' => 'E02003690',
        '4AB' => 'E02003690',
        '4AD' => 'E02003690',
        '4AE' => 'E02003690',
        '4AF' => 'E02003690',
        '4AG' => 'E02003690',
        '4AH' => 'E02003690',
        '4AJ' => 'E02003690',
        '4AL' => 'E02003690',
        '4AN' => 'E02003690',
        '4AP' => 'E02003690',
        '4AQ' => 'E02003690',
        '4AR' => 'E02003690',
        '4AS' => 'E02003690',
        '4AT' => 'E02003690',
        '4AU' => 'E02003690',
        '4AW' => 'E02003690',
        '4AX' => 'E02003690',
        '4AY' => 'E02003690',
        '4AZ' => 'E02003690',
        '4BA' => 'E02003690',
        '4BB' => 'E02003690',
        '4BD' => 'E02003690',
        '4BE' => 'E02003690',
        '4BF' => 'E02003690',
        '4BG' => 'E02003690',
        '4BH' => 'E02003690',
        '4BJ' => 'E02003690',
        '4BN' => 'E02003690',
        '4BP' => 'E02003690',
        '4BQ' => 'E02003690',
        '4BS' => 'E02003690',
        '4BT' => 'E02003690',
        '4BU' => 'E02003690',
        '4BW' => 'E02003690',
        '4BX' => 'E02003690',
        '4BY' => 'E02000509',
        '4DA' => 'E02003690',
        '4DB' => 'E02003690',
        '4DD' => 'E02003690',
        '4DE' => 'E02003690',
        '4DF' => 'E02003690',
        '4DG' => 'E02003690',
        '4DH' => 'E02003690',
        '4DJ' => 'E02003690',
        '4DL' => 'E02003690',
        '4DN' => 'E02003690',
        '4DP' => 'E02003690',
        '4DQ' => 'E02003690',
        '4DR' => 'E02003689',
        '4DS' => 'E02003690',
        '4DT' => 'E02003690',
        '4DU' => 'E02003690',
        '4DW' => 'E02003690',
        '4DX' => 'E02003690',
        '4DY' => 'E02003690',
        '4DZ' => 'E02003690',
        '4EA' => 'E02003690',
        '4EB' => 'E02003690',
        '4ED' => 'E02003690',
        '4EE' => 'E02003690',
        '4EF' => 'E02003690',
        '4EG' => 'E02003690',
        '4EH' => 'E02003690',
        '4EJ' => 'E02003690',
        '4EL' => 'E02003690',
        '4EN' => 'E02003690',
        '4EP' => 'E02003690',
        '4EQ' => 'E02003690',
        '4ET' => 'E02003690',
        '4EU' => 'E02003690',
        '4EW' => 'E02003690',
        '4EX' => 'E02003690',
        '4EY' => 'E02003690',
        '4GY' => 'E02003690',
        '4HA' => 'E02003690',
        '4HB' => 'E02003690',
        '4HD' => 'E02003690',
        '4HE' => 'E02003690',
        '4HF' => 'E02003690',
        '4HG' => 'E02003689',
        '4HH' => 'E02003689',
        '4HJ' => 'E02003689',
        '4HL' => 'E02003689',
        '4HN' => 'E02003689',
        '4HP' => 'E02003689',
        '4HQ' => 'E02003689',
        '4HR' => 'E02003689',
        '4HS' => 'E02003689',
        '4HT' => 'E02003689',
        '4HW' => 'E02003689',
        '4JB' => 'E02003689',
        '4LA' => 'E02003689',
        '4LB' => 'E02003689',
        '4LD' => 'E02003689',
        '4LE' => 'E02003690',
        '4LF' => 'E02003689',
        '4LG' => 'E02003689',
        '4LH' => 'E02003689',
        '4LJ' => 'E02003689',
        '4LN' => 'E02000509',
        '4LP' => 'E02003690',
        '4LQ' => 'E02003689',
        '4LR' => 'E02000509',
        '4LS' => 'E02000509',
        '4LT' => 'E02000509',
        '4LU' => 'E02000509',
        '4LX' => 'E02000509',
        '4LY' => 'E02000509',
        '4LZ' => 'E02000509',
        '4NA' => 'E02003690',
        '4NB' => 'E02003690',
        '4NE' => 'E02000509',
        '4NF' => 'E02000509',
        '4NG' => 'E02000509',
        '4UZ' => 'E02000509',
        '4XN' => 'E02000509',
        '4ZQ' => 'E02000509',
        '5AA' => 'E02003690',
        '5AB' => 'E02003690',
        '5AD' => 'E02003690',
        '5AE' => 'E02003690',
        '5AF' => 'E02003690',
        '5AG' => 'E02000509',
        '5AH' => 'E02003690',
        '5AJ' => 'E02003690',
        '5AL' => 'E02003690',
        '5AN' => 'E02003690',
        '5AP' => 'E02003690',
        '5AQ' => 'E02003690',
        '5AR' => 'E02003690',
        '5AS' => 'E02003690',
        '5AT' => 'E02003690',
        '5AU' => 'E02003690',
        '5AW' => 'E02003690',
        '5AX' => 'E02003690',
        '5AY' => 'E02003690',
        '5AZ' => 'E02003690',
        '5BA' => 'E02003690',
        '5BB' => 'E02003690',
        '5BD' => 'E02003690',
        '5BE' => 'E02003690',
        '5BF' => 'E02000509',
        '5BG' => 'E02003690',
        '5BH' => 'E02003690',
        '5BJ' => 'E02003690',
        '5BL' => 'E02003690',
        '5BN' => 'E02003690',
        '5BP' => 'E02003690',
        '5BQ' => 'E02003690',
        '5BS' => 'E02000509',
        '5BT' => 'E02003690',
        '5BU' => 'E02003690',
        '5BW' => 'E02003690',
        '5BX' => 'E02003690',
        '5BY' => 'E02003690',
        '5BZ' => 'E02003690',
        '5DA' => 'E02003690',
        '5DB' => 'E02003690',
        '5DD' => 'E02003690',
        '5DE' => 'E02003690',
        '5DF' => 'E02003690',
        '5DG' => 'E02003690',
        '5DH' => 'E02003690',
        '5DJ' => 'E02003690',
        '5DL' => 'E02003690',
        '5DN' => 'E02003690',
        '5DP' => 'E02003690',
        '5DQ' => 'E02003690',
        '5DR' => 'E02003690',
        '5DS' => 'E02003690',
        '5DT' => 'E02003690',
        '5DU' => 'E02003690',
        '5DW' => 'E02003690',
        '5DX' => 'E02003690',
        '5DY' => 'E02003690',
        '5DZ' => 'E02000509',
        '5EA' => 'E02003690',
        '5EB' => 'E02003690',
        '5ED' => 'E02003690',
        '5EE' => 'E02003690',
        '5EF' => 'E02003690',
        '5EG' => 'E02003690',
        '5EH' => 'E02003690',
        '5EJ' => 'E02003690',
        '5EL' => 'E02003690',
        '5EN' => 'E02003690',
        '5EP' => 'E02000509',
        '5EQ' => 'E02003690',
        '5ER' => 'E02003690',
        '5ES' => 'E02003690',
        '5ET' => 'E02003690',
        '5EU' => 'E02003690',
        '5EW' => 'E02003690',
        '5EX' => 'E02003690',
        '5EY' => 'E02003690',
        '5EZ' => 'E02003690',
        '5FA' => 'E02000509',
        '5FB' => 'E02003690',
        '5FD' => 'E02003690',
        '5FE' => 'E02003690',
        '5FF' => 'E02003690',
        '5FG' => 'E02003690',
        '5FH' => 'E02003690',
        '5FJ' => 'E02003690',
        '5FL' => 'E02003690',
        '5FN' => 'E02003690',
        '5FP' => 'E02003690',
        '5GA' => 'E02003690',
        '5GB' => 'E02003690',
        '5GD' => 'E02003690',
        '5GE' => 'E02003690',
        '5GF' => 'E02003690',
        '5GG' => 'E02003690',
        '5GH' => 'E02003690',
        '5HA' => 'E02003690',
        '5HB' => 'E02003690',
        '5HD' => 'E02003690',
        '5HE' => 'E02003690',
        '5HF' => 'E02003690',
        '5HG' => 'E02003690',
        '5HH' => 'E02003690',
        '5HJ' => 'E02003690',
        '5HL' => 'E02003690',
        '5HN' => 'E02000509',
        '5HP' => 'E02003690',
        '5HQ' => 'E02003690',
        '5HR' => 'E02003690',
        '5HS' => 'E02003690',
        '5HT' => 'E02003690',
        '5HU' => 'E02003690',
        '5HW' => 'E02003690',
        '5HX' => 'E02003690',
        '5HY' => 'E02003690',
        '5HZ' => 'E02003690',
        '5JA' => 'E02003690',
        '5JB' => 'E02003690',
        '5JD' => 'E02003690',
        '5JE' => 'E02003690',
        '5JF' => 'E02003690',
        '5JG' => 'E02003690',
        '5JH' => 'E02003690',
        '5JJ' => 'E02003690',
        '5JL' => 'E02003690',
        '5JN' => 'E02003690',
        '5JP' => 'E02003690',
        '5JQ' => 'E02003690',
        '5JR' => 'E02003690',
        '5JS' => 'E02003690',
        '5JT' => 'E02003690',
        '5JU' => 'E02003690',
        '5JW' => 'E02003690',
        '5JX' => 'E02003690',
        '5JY' => 'E02003690',
        '5JZ' => 'E02003690',
        '5LA' => 'E02003690',
        '5LB' => 'E02003690',
        '5LD' => 'E02003690',
        '5LE' => 'E02003690',
        '5LF' => 'E02003690',
        '5LG' => 'E02003690',
        '5LH' => 'E02003690',
        '5LJ' => 'E02003690',
        '5LL' => 'E02003690',
        '5LN' => 'E02003690',
        '5LP' => 'E02003690',
        '5LQ' => 'E02003690',
        '5LR' => 'E02003690',
        '5LS' => 'E02003690',
        '5LT' => 'E02003690',
        '5LU' => 'E02003690',
        '5LW' => 'E02003690',
        '5LX' => 'E02000509',
        '5LY' => 'E02003690',
        '5LZ' => 'E02003690',
        '5NA' => 'E02003690',
        '5NB' => 'E02003690',
        '5ND' => 'E02003690',
        '5NE' => 'E02003690',
        '5NF' => 'E02003690',
        '5NG' => 'E02003690',
        '5NH' => 'E02003690',
        '5NJ' => 'E02003690',
        '5NL' => 'E02003690',
        '5NN' => 'E02003690',
        '5NP' => 'E02003690',
        '5NQ' => 'E02003690',
        '5NR' => 'E02003690',
        '5NS' => 'E02003690',
        '5NT' => 'E02003690',
        '5NU' => 'E02003690',
        '5NW' => 'E02003690',
        '5NX' => 'E02000509',
        '5NY' => 'E02003690',
        '5NZ' => 'E02003690',
        '5PA' => 'E02003690',
        '5PB' => 'E02003690',
        '5PD' => 'E02000509',
        '5PE' => 'E02003690',
        '5PF' => 'E02003690',
        '5PG' => 'E02003690',
        '5PH' => 'E02003690',
        '5PJ' => 'E02003690',
        '5PL' => 'E02003690',
        '5PN' => 'E02003690',
        '5PP' => 'E02003690',
        '5QB' => 'E02000509',
        '5QD' => 'E02000509',
        '5QE' => 'E02000509',
        '5QF' => 'E02000509',
        '5QG' => 'E02000509',
        '5QH' => 'E02000509',
        '5QJ' => 'E02000509',
        '5QL' => 'E02003690',
        '5QN' => 'E02000509',
        '5QP' => 'E02000509',
        '5QQ' => 'E02000509',
        '5QR' => 'E02000509',
        '5QS' => 'E02000509',
        '5QT' => 'E02000509',
        '5QU' => 'E02003690',
        '5QW' => 'E02003690',
        '5QX' => 'E02003690',
        '5QY' => 'E02003690',
        '5QZ' => 'E02000509',
        '5UZ' => 'E02000509',
        '5WA' => 'E02000509',
        '5WB' => 'E02000509',
        '5WD' => 'E02000509',
        '5WE' => 'E02000509',
        '5WF' => 'E02000509',
        '5WG' => 'E02000509',
        '5WH' => 'E02000509',
        '5WJ' => 'E02000509',
        '5WN' => 'E02000509',
        '5XA' => 'E02000509',
        '5XZ' => 'E02000509',
        '5ZJ' => 'E02000509',
        '5ZN' => 'E02000509',
        '5ZQ' => 'E02000509',
        '5ZR' => 'E02000509',
        '5ZU' => 'E02000509',
        '5ZX' => 'E02000509',
        '6AA' => 'E02000496',
        '6AB' => 'E02000496',
        '6AD' => 'E02000496',
        '6AE' => 'E02000496',
        '6AF' => 'E02000496',
        '6AG' => 'E02000496',
        '6AH' => 'E02000496',
        '6AJ' => 'E02000496',
        '6AL' => 'E02000496',
        '6AN' => 'E02000496',
        '6AP' => 'E02000496',
        '6AQ' => 'E02000496',
        '6AR' => 'E02000496',
        '6AS' => 'E02000496',
        '6AT' => 'E02000496',
        '6AU' => 'E02000496',
        '6AW' => 'E02000496',
        '6AX' => 'E02000496',
        '6AY' => 'E02000496',
        '6AZ' => 'E02000496',
        '6BA' => 'E02000496',
        '6BB' => 'E02000496',
        '6BD' => 'E02000496',
        '6BE' => 'E02000496',
        '6BF' => 'E02000509',
        '6BG' => 'E02000496',
        '6BH' => 'E02000496',
        '6BJ' => 'E02000496',
        '6BL' => 'E02000496',
        '6BN' => 'E02000496',
        '6BP' => 'E02000496',
        '6BQ' => 'E02000496',
        '6BS' => 'E02000496',
        '6BT' => 'E02000496',
        '6BU' => 'E02000496',
        '6BW' => 'E02000496',
        '6BX' => 'E02000496',
        '6BY' => 'E02000496',
        '6BZ' => 'E02000496',
        '6DA' => 'E02000496',
        '6DB' => 'E02000496',
        '6DD' => 'E02000496',
        '6DE' => 'E02000496',
        '6DF' => 'E02000496',
        '6DG' => 'E02000496',
        '6DH' => 'E02000496',
        '6DJ' => 'E02000496',
        '6DL' => 'E02000496',
        '6DN' => 'E02000496',
        '6DP' => 'E02000496',
        '6DQ' => 'E02000496',
        '6DR' => 'E02000496',
        '6DS' => 'E02000496',
        '6DT' => 'E02000496',
        '6DU' => 'E02000496',
        '6DW' => 'E02000496',
        '6DX' => 'E02000496',
        '6DY' => 'E02000496',
        '6DZ' => 'E02000496',
        '6EA' => 'E02000496',
        '6EB' => 'E02000496',
        '6ED' => 'E02000496',
        '6EE' => 'E02000496',
        '6EF' => 'E02000496',
        '6EG' => 'E02000496',
        '6EH' => 'E02000496',
        '6EJ' => 'E02000496',
        '6EL' => 'E02000496',
        '6EN' => 'E02000496',
        '6EP' => 'E02000496',
        '6EQ' => 'E02000496',
        '6ER' => 'E02000496',
        '6ES' => 'E02000496',
        '6ET' => 'E02000496',
        '6EU' => 'E02000496',
        '6EW' => 'E02000496',
        '6EX' => 'E02000496',
        '6EY' => 'E02000496',
        '6EZ' => 'E02000496',
        '6FB' => 'E02000496',
        '6FD' => 'E02000496',
        '6FE' => 'E02000496',
        '6FF' => 'E02000496',
        '6FG' => 'E02000496',
        '6FH' => 'E02000496',
        '6HA' => 'E02000496',
        '6HB' => 'E02000496',
        '6HD' => 'E02000496',
        '6HE' => 'E02000496',
        '6HF' => 'E02000496',
        '6HG' => 'E02000496',
        '6HH' => 'E02000496',
        '6HJ' => 'E02000496',
        '6HL' => 'E02000496',
        '6HN' => 'E02000496',
        '6HP' => 'E02000496',
        '6HQ' => 'E02000496',
        '6HR' => 'E02000496',
        '6HS' => 'E02000496',
        '6HT' => 'E02000496',
        '6HU' => 'E02000496',
        '6HW' => 'E02000496',
        '6HX' => 'E02000496',
        '6HY' => 'E02000496',
        '6HZ' => 'E02004964',
        '6JA' => 'E02000496',
        '6JB' => 'E02000496',
        '6JD' => 'E02000496',
        '6JE' => 'E02000496',
        '6JF' => 'E02000496',
        '6JG' => 'E02000496',
        '6JH' => 'E02000496',
        '6JJ' => 'E02000504',
        '6JL' => 'E02000506',
        '6JN' => 'E02000496',
        '6JP' => 'E02000496',
        '6JQ' => 'E02000496',
        '6JR' => 'E02000496',
        '6JS' => 'E02000496',
        '6JT' => 'E02000496',
        '6JU' => 'E02000496',
        '6JW' => 'E02000496',
        '6JX' => 'E02000496',
        '6JY' => 'E02000496',
        '6JZ' => 'E02000496',
        '6LA' => 'E02000496',
        '6LB' => 'E02000496',
        '6LD' => 'E02000496',
        '6LE' => 'E02000496',
        '6LF' => 'E02000496',
        '6LG' => 'E02000496',
        '6LH' => 'E02000496',
        '6LJ' => 'E02000496',
        '6LL' => 'E02000496',
        '6LN' => 'E02000496',
        '6LP' => 'E02000496',
        '6LQ' => 'E02000496',
        '6LR' => 'E02000496',
        '6LS' => 'E02000496',
        '6LT' => 'E02000496',
        '6LU' => 'E02000496',
        '6LW' => 'E02000496',
        '6LX' => 'E02000496',
        '6LY' => 'E02000498',
        '6LZ' => 'E02000496',
        '6NA' => 'E02000496',
        '6NB' => 'E02000496',
        '6ND' => 'E02000496',
        '6NE' => 'E02000496',
        '6NF' => 'E02000496',
        '6NG' => 'E02000496',
        '6NH' => 'E02000496',
        '6NJ' => 'E02000496',
        '6NL' => 'E02000496',
        '6NN' => 'E02000496',
        '6NP' => 'E02000496',
        '6NQ' => 'E02000496',
        '6NR' => 'E02000496',
        '6NS' => 'E02000496',
        '6NT' => 'E02000496',
        '6NU' => 'E02000496',
        '6NW' => 'E02000496',
        '6NX' => 'E02000496',
        '6NY' => 'E02000496',
        '6NZ' => 'E02000496',
        '6PA' => 'E02000496',
        '6PB' => 'E02000496',
        '6PD' => 'E02000496',
        '6PE' => 'E02000496',
        '6PF' => 'E02000496',
        '6PG' => 'E02000496',
        '6PH' => 'E02000496',
        '6PJ' => 'E02000496',
        '6PL' => 'E02000496',
        '6PN' => 'E02000496',
        '6PP' => 'E02000496',
        '6PQ' => 'E02000496',
        '6PR' => 'E02000496',
        '6PS' => 'E02000496',
        '6PT' => 'E02000496',
        '6PU' => 'E02000496',
        '6PW' => 'E02000496',
        '6PX' => 'E02000496',
        '6PY' => 'E02000496',
        '6PZ' => 'E02000496',
        '6QA' => 'E02000496',
        '6QB' => 'E02000496',
        '6QD' => 'E02000496',
        '6QE' => 'E02000496',
        '6QF' => 'E02000496',
        '6QG' => 'E02000496',
        '6QH' => 'E02000496',
        '6QJ' => 'E02000496',
        '6QL' => 'E02000496',
        '6QN' => 'E02000496',
        '6QP' => 'E02000496',
        '6QQ' => 'E02000509',
        '6QR' => 'E02000509',
        '6QS' => 'E02000496',
        '6QT' => 'E02000496',
        '6QU' => 'E02000496',
        '6QW' => 'E02000496',
        '6QX' => 'E02000509',
        '6QY' => 'E02000496',
        '6QZ' => 'E02000496',
        '6RA' => 'E02000496',
        '6RB' => 'E02000496',
        '6RD' => 'E02000496',
        '6RE' => 'E02000496',
        '6RF' => 'E02000496',
        '6RG' => 'E02000496',
        '6RH' => 'E02000496',
        '6RJ' => 'E02000496',
        '6RL' => 'E02000496',
        '6RN' => 'E02000496',
        '6RP' => 'E02000506',
        '6RQ' => 'E02000496',
        '6RT' => 'E02000496',
        '6RY' => 'E02000509',
        '6RZ' => 'E02000509',
        '6SA' => 'E02000496',
        '6SB' => 'E02000496',
        '6SD' => 'E02000496',
        '6SE' => 'E02000496',
        '6SF' => 'E02000496',
        '6SG' => 'E02000496',
        '6SH' => 'E02000496',
        '6SJ' => 'E02000496',
        '6SL' => 'E02000496',
        '6SN' => 'E02000496',
        '6SP' => 'E02000509',
        '6SQ' => 'E02000509',
        '6SR' => 'E02000509',
        '6SS' => 'E02000496',
        '6ST' => 'E02000509',
        '6SU' => 'E02000509',
        '6SW' => 'E02000496',
        '6SX' => 'E02000496',
        '6SY' => 'E02000496',
        '6SZ' => 'E02000496',
        '6TA' => 'E02000496',
        '6TB' => 'E02000496',
        '6TD' => 'E02000496',
        '6TG' => 'E02000496',
        '6TH' => 'E02000496',
        '6TJ' => 'E02000496',
        '6TQ' => 'E02000496',
        '6UX' => 'E02000496',
        '6WA' => 'E02000496',
        '6WB' => 'E02000509',
        '6WD' => 'E02000496',
        '6WG' => 'E02000509',
        '6WJ' => 'E02000509',
        '6WZ' => 'E02000509',
        '6XA' => 'E02000496',
        '6XB' => 'E02000496',
        '6XD' => 'E02000509',
        '6XE' => 'E02000496',
        '6XF' => 'E02000509',
        '6XG' => 'E02000496',
        '6XH' => 'E02000496',
        '6XJ' => 'E02000496',
        '6XL' => 'E02000509',
        '6XN' => 'E02000509',
        '6XQ' => 'E02000496',
        '6XS' => 'E02000509',
        '6XZ' => 'E02000509',
        '6ZG' => 'E02000509',
        '6ZN' => 'E02000509',
        '6ZP' => 'E02000509',
        '6ZQ' => 'E02000509',
        '6ZR' => 'E02000509',
        '6ZU' => 'E02000509',
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