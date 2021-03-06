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
final class BS34
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '5AA' => 'E02003100',
        '5AB' => 'E02003100',
        '5AD' => 'E02003100',
        '5AE' => 'E02003100',
        '5AF' => 'E02003100',
        '5AG' => 'E02003100',
        '5AH' => 'E02003100',
        '5AJ' => 'E02003100',
        '5AL' => 'E02003100',
        '5AN' => 'E02003100',
        '5AP' => 'E02003100',
        '5AQ' => 'E02003100',
        '5AR' => 'E02003100',
        '5AS' => 'E02003100',
        '5AT' => 'E02003100',
        '5AU' => 'E02003100',
        '5AW' => 'E02003100',
        '5AX' => 'E02003100',
        '5AY' => 'E02003100',
        '5AZ' => 'E02003100',
        '5BA' => 'E02003100',
        '5BB' => 'E02003100',
        '5BD' => 'E02003100',
        '5BE' => 'E02003100',
        '5BF' => 'E02003100',
        '5BG' => 'E02003100',
        '5BH' => 'E02003100',
        '5BJ' => 'E02003100',
        '5BL' => 'E02003100',
        '5BN' => 'E02003100',
        '5BP' => 'E02003100',
        '5BQ' => 'E02003100',
        '5BS' => 'E02003100',
        '5BT' => 'E02003100',
        '5BU' => 'E02003100',
        '5BW' => 'E02003094',
        '5BX' => 'E02003100',
        '5BY' => 'E02003100',
        '5BZ' => 'E02003100',
        '5DA' => 'E02003100',
        '5DB' => 'E02003100',
        '5DD' => 'E02003100',
        '5DE' => 'E02003100',
        '5DF' => 'E02003100',
        '5DG' => 'E02003094',
        '5DH' => 'E02003100',
        '5DJ' => 'E02003094',
        '5DL' => 'E02003100',
        '5DN' => 'E02003100',
        '5DP' => 'E02003100',
        '5DQ' => 'E02003100',
        '5DR' => 'E02003100',
        '5DS' => 'E02003100',
        '5DT' => 'E02003100',
        '5DU' => 'E02003100',
        '5DW' => 'E02003100',
        '5DX' => 'E02003100',
        '5DY' => 'E02003100',
        '5DZ' => 'E02003100',
        '5EA' => 'E02003100',
        '5EB' => 'E02003100',
        '5ED' => 'E02003100',
        '5EE' => 'E02003100',
        '5EF' => 'E02003100',
        '5EG' => 'E02003100',
        '5EH' => 'E02003100',
        '5EJ' => 'E02003100',
        '5EL' => 'E02003100',
        '5EN' => 'E02003100',
        '5EP' => 'E02003100',
        '5EQ' => 'E02003100',
        '5ER' => 'E02003100',
        '5ES' => 'E02003100',
        '5ET' => 'E02003100',
        '5EU' => 'E02003100',
        '5EW' => 'E02003100',
        '5EX' => 'E02003100',
        '5EY' => 'E02003100',
        '5EZ' => 'E02003100',
        '5FB' => 'E02003100',
        '5FD' => 'E02003100',
        '5FE' => 'E02003100',
        '5FF' => 'E02003100',
        '5FG' => 'E02003100',
        '5FH' => 'E02003100',
        '5FJ' => 'E02003100',
        '5FL' => 'E02003100',
        '5FN' => 'E02003100',
        '5FP' => 'E02003100',
        '5FQ' => 'E02003100',
        '5FR' => 'E02003100',
        '5FS' => 'E02003100',
        '5FT' => 'E02003100',
        '5FU' => 'E02003100',
        '5FW' => 'E02003100',
        '5FX' => 'E02003100',
        '5FY' => 'E02003100',
        '5FZ' => 'E02003100',
        '5GA' => 'E02003100',
        '5GB' => 'E02003100',
        '5GD' => 'E02003100',
        '5GE' => 'E02003100',
        '5GF' => 'E02003094',
        '5GG' => 'E02003094',
        '5GH' => 'E02003100',
        '5GJ' => 'E02003100',
        '5GL' => 'E02003100',
        '5GN' => 'E02003094',
        '5GP' => 'E02003100',
        '5GQ' => 'E02003100',
        '5GR' => 'E02003100',
        '5GS' => 'E02003100',
        '5GT' => 'E02003100',
        '5GU' => 'E02003100',
        '5GW' => 'E02003100',
        '5GX' => 'E02003100',
        '5GY' => 'E02003100',
        '5GZ' => 'E02003100',
        '5HA' => 'E02003100',
        '5HB' => 'E02003100',
        '5HD' => 'E02003100',
        '5HE' => 'E02003100',
        '5HF' => 'E02003100',
        '5HG' => 'E02003100',
        '5HH' => 'E02003100',
        '5HJ' => 'E02003100',
        '5HL' => 'E02003100',
        '5HN' => 'E02003100',
        '5HP' => 'E02003100',
        '5HQ' => 'E02003100',
        '5HR' => 'E02003100',
        '5HS' => 'E02003100',
        '5HT' => 'E02003100',
        '5HU' => 'E02003100',
        '5HW' => 'E02003100',
        '5HX' => 'E02003100',
        '5HY' => 'E02003100',
        '5HZ' => 'E02003100',
        '5JA' => 'E02003100',
        '5JB' => 'E02003100',
        '5JD' => 'E02003100',
        '5JE' => 'E02003100',
        '5JF' => 'E02003100',
        '5JG' => 'E02003100',
        '5JH' => 'E02003100',
        '5JJ' => 'E02003100',
        '5JL' => 'E02003100',
        '5JN' => 'E02003100',
        '5JP' => 'E02003100',
        '5JQ' => 'E02003100',
        '5JR' => 'E02003100',
        '5JS' => 'E02003100',
        '5JT' => 'E02003100',
        '5JU' => 'E02003100',
        '5JW' => 'E02003100',
        '5JX' => 'E02003100',
        '5JY' => 'E02003100',
        '5JZ' => 'E02003100',
        '5LA' => 'E02003100',
        '5LB' => 'E02003100',
        '5LD' => 'E02003100',
        '5LE' => 'E02003100',
        '5LF' => 'E02003100',
        '5LG' => 'E02003100',
        '5LH' => 'E02003100',
        '5LJ' => 'E02003100',
        '5LL' => 'E02003100',
        '5LN' => 'E02003100',
        '5LP' => 'E02003100',
        '5LQ' => 'E02003100',
        '5LR' => 'E02003100',
        '5LS' => 'E02003100',
        '5LT' => 'E02003100',
        '5LU' => 'E02003100',
        '5LW' => 'E02003100',
        '5LX' => 'E02003100',
        '5LY' => 'E02003100',
        '5LZ' => 'E02003100',
        '5NA' => 'E02003100',
        '5NB' => 'E02003100',
        '5ND' => 'E02003100',
        '5NE' => 'E02003100',
        '5NF' => 'E02003100',
        '5NG' => 'E02003100',
        '5NH' => 'E02003100',
        '5NJ' => 'E02003100',
        '5NL' => 'E02003100',
        '5NN' => 'E02003100',
        '5NP' => 'E02003100',
        '5NQ' => 'E02003100',
        '5NR' => 'E02003100',
        '5NS' => 'E02003100',
        '5NT' => 'E02003100',
        '5NU' => 'E02003100',
        '5NW' => 'E02003100',
        '5NX' => 'E02003100',
        '5NY' => 'E02003100',
        '5NZ' => 'E02003100',
        '5PA' => 'E02003100',
        '5PB' => 'E02003100',
        '5PD' => 'E02003100',
        '5PE' => 'E02003100',
        '5PF' => 'E02003100',
        '5PG' => 'E02003100',
        '5PH' => 'E02003100',
        '5PJ' => 'E02003100',
        '5PL' => 'E02003100',
        '5PN' => 'E02003100',
        '5PP' => 'E02003100',
        '5PQ' => 'E02003100',
        '5PR' => 'E02003100',
        '5PS' => 'E02003100',
        '5PT' => 'E02003100',
        '5PU' => 'E02003100',
        '5PW' => 'E02003100',
        '5PX' => 'E02003100',
        '5PY' => 'E02003100',
        '5PZ' => 'E02003100',
        '5QA' => 'E02003100',
        '5QB' => 'E02003100',
        '5QD' => 'E02003100',
        '5QE' => 'E02003100',
        '5QF' => 'E02003100',
        '5QG' => 'E02003100',
        '5QH' => 'E02003100',
        '5QJ' => 'E02003100',
        '5QL' => 'E02003100',
        '5QN' => 'E02003100',
        '5QP' => 'E02003100',
        '5QQ' => 'E02003100',
        '5QR' => 'E02003100',
        '5QS' => 'E02003100',
        '5QT' => 'E02003094',
        '5QU' => 'E02003094',
        '5QW' => 'E02003100',
        '5QX' => 'E02003100',
        '5QY' => 'E02003100',
        '5QZ' => 'E02003100',
        '5RA' => 'E02003100',
        '5RB' => 'E02003100',
        '5RD' => 'E02003100',
        '5RE' => 'E02003100',
        '5RF' => 'E02003100',
        '5RG' => 'E02003100',
        '5RH' => 'E02003100',
        '5RJ' => 'E02003100',
        '5RL' => 'E02003100',
        '5RN' => 'E02003100',
        '5RP' => 'E02003100',
        '5RQ' => 'E02003100',
        '5RR' => 'E02003100',
        '5RS' => 'E02003100',
        '5RT' => 'E02003100',
        '5RU' => 'E02003100',
        '5RW' => 'E02003100',
        '5RX' => 'E02003100',
        '5RY' => 'E02003100',
        '5RZ' => 'E02003100',
        '5SA' => 'E02003100',
        '5SB' => 'E02003100',
        '5SD' => 'E02003100',
        '5SE' => 'E02003100',
        '5SF' => 'E02003100',
        '5SG' => 'E02003100',
        '5SH' => 'E02003100',
        '5SJ' => 'E02003100',
        '5SL' => 'E02003094',
        '5SN' => 'E02003100',
        '5SP' => 'E02003094',
        '5SQ' => 'E02003100',
        '5SR' => 'E02003100',
        '5SS' => 'E02003100',
        '5ST' => 'E02003100',
        '5SU' => 'E02003100',
        '5SW' => 'E02003100',
        '5SX' => 'E02003100',
        '5SY' => 'E02003100',
        '5SZ' => 'E02003100',
        '5TA' => 'E02003100',
        '5TB' => 'E02003100',
        '5TD' => 'E02003100',
        '5TE' => 'E02003100',
        '5TF' => 'E02003100',
        '5TG' => 'E02003100',
        '5TH' => 'E02003100',
        '5TJ' => 'E02003100',
        '5TL' => 'E02003094',
        '5TN' => 'E02003094',
        '5TP' => 'E02003094',
        '5TQ' => 'E02003094',
        '5TR' => 'E02003094',
        '5TS' => 'E02003094',
        '5TT' => 'E02003094',
        '5TU' => 'E02003094',
        '5TW' => 'E02003094',
        '5TX' => 'E02003094',
        '5TY' => 'E02003094',
        '5UA' => 'E02003094',
        '5UB' => 'E02003094',
        '5UD' => 'E02003094',
        '5UE' => 'E02003094',
        '5UF' => 'E02003094',
        '5UG' => 'E02003094',
        '5UJ' => 'E02003094',
        '5UL' => 'E02003094',
        '5UN' => 'E02003100',
        '5UP' => 'E02003094',
        '5UQ' => 'E02003094',
        '5UR' => 'E02003094',
        '5US' => 'E02003100',
        '5UT' => 'E02003100',
        '5UU' => 'E02003100',
        '5UW' => 'E02003100',
        '5UY' => 'E02003100',
        '5WA' => 'E02003100',
        '5WB' => 'E02003100',
        '5WD' => 'E02003100',
        '5WE' => 'E02003100',
        '5WF' => 'E02003100',
        '5WG' => 'E02003100',
        '5WQ' => 'E02003100',
        '5WR' => 'E02003100',
        '5WS' => 'E02003100',
        '5WT' => 'E02003100',
        '5WU' => 'E02003100',
        '5WW' => 'E02003100',
        '5WX' => 'E02003100',
        '5WY' => 'E02003100',
        '5WZ' => 'E02003100',
        '5XA' => 'E02003100',
        '5XB' => 'E02003100',
        '5XD' => 'E02003100',
        '5XE' => 'E02003100',
        '5XF' => 'E02003100',
        '5YA' => 'E02003100',
        '5YB' => 'E02003100',
        '5YD' => 'E02003100',
        '5YE' => 'E02003100',
        '5ZJ' => 'E02003100',
        '5ZN' => 'E02003100',
        '5ZQ' => 'E02003100',
        '5ZT' => 'E02003100',
        '5ZW' => 'E02003100',
        '5ZX' => 'E02003100',
        '6AA' => 'E02003100',
        '6AB' => 'E02003100',
        '6AD' => 'E02003100',
        '6AE' => 'E02003100',
        '6AF' => 'E02003100',
        '6AG' => 'E02003100',
        '6AH' => 'E02003100',
        '6AJ' => 'E02003100',
        '6AL' => 'E02003100',
        '6AN' => 'E02003100',
        '6AP' => 'E02003100',
        '6AQ' => 'E02003100',
        '6AR' => 'E02003100',
        '6AS' => 'E02003100',
        '6AT' => 'E02003100',
        '6AU' => 'E02003100',
        '6AW' => 'E02003100',
        '6AX' => 'E02003100',
        '6AY' => 'E02003101',
        '6AZ' => 'E02003101',
        '6BA' => 'E02003101',
        '6BB' => 'E02003100',
        '6BD' => 'E02003100',
        '6BE' => 'E02003100',
        '6BF' => 'E02003098',
        '6BG' => 'E02003100',
        '6BH' => 'E02003098',
        '6BJ' => 'E02003100',
        '6BL' => 'E02003100',
        '6BN' => 'E02003100',
        '6BP' => 'E02003100',
        '6BQ' => 'E02003104',
        '6BR' => 'E02003100',
        '6BS' => 'E02003100',
        '6BT' => 'E02003100',
        '6BU' => 'E02003100',
        '6BW' => 'E02003100',
        '6BX' => 'E02003100',
        '6BY' => 'E02003100',
        '6BZ' => 'E02003100',
        '6DA' => 'E02003100',
        '6DB' => 'E02003100',
        '6DD' => 'E02003100',
        '6DE' => 'E02003100',
        '6DF' => 'E02003100',
        '6DG' => 'E02003100',
        '6DH' => 'E02003100',
        '6DJ' => 'E02003100',
        '6DL' => 'E02003104',
        '6DN' => 'E02003104',
        '6DP' => 'E02003104',
        '6DQ' => 'E02003100',
        '6DR' => 'E02003100',
        '6DS' => 'E02003100',
        '6DT' => 'E02003100',
        '6DU' => 'E02003100',
        '6DW' => 'E02003100',
        '6DX' => 'E02003100',
        '6DY' => 'E02003100',
        '6DZ' => 'E02003100',
        '6EA' => 'E02003100',
        '6EB' => 'E02003100',
        '6ED' => 'E02003100',
        '6EE' => 'E02003100',
        '6EF' => 'E02003100',
        '6EG' => 'E02003100',
        '6EH' => 'E02003104',
        '6EJ' => 'E02003104',
        '6EL' => 'E02003104',
        '6EN' => 'E02003104',
        '6EP' => 'E02003104',
        '6EQ' => 'E02003100',
        '6ER' => 'E02003104',
        '6ES' => 'E02003104',
        '6ET' => 'E02003104',
        '6EU' => 'E02003104',
        '6EW' => 'E02003104',
        '6EX' => 'E02003104',
        '6EY' => 'E02003104',
        '6EZ' => 'E02003104',
        '6FB' => 'E02003107',
        '6FD' => 'E02003107',
        '6FE' => 'E02003107',
        '6FG' => 'E02003107',
        '6HA' => 'E02003104',
        '6HB' => 'E02003104',
        '6HD' => 'E02003104',
        '6HE' => 'E02003104',
        '6HF' => 'E02003104',
        '6HG' => 'E02003104',
        '6HH' => 'E02003104',
        '6HJ' => 'E02003104',
        '6HL' => 'E02003104',
        '6HN' => 'E02003104',
        '6HP' => 'E02003106',
        '6HQ' => 'E02003104',
        '6HR' => 'E02003104',
        '6HS' => 'E02003104',
        '6HU' => 'E02003104',
        '6HW' => 'E02003106',
        '6HX' => 'E02003104',
        '6HY' => 'E02003104',
        '6HZ' => 'E02003104',
        '6JA' => 'E02003104',
        '6JB' => 'E02003104',
        '6JD' => 'E02003104',
        '6JE' => 'E02003104',
        '6JF' => 'E02003104',
        '6JG' => 'E02003104',
        '6JH' => 'E02003104',
        '6JJ' => 'E02003104',
        '6JL' => 'E02003104',
        '6JN' => 'E02003104',
        '6JP' => 'E02003104',
        '6JQ' => 'E02003104',
        '6JR' => 'E02003104',
        '6JS' => 'E02003104',
        '6JT' => 'E02003104',
        '6JU' => 'E02003104',
        '6JW' => 'E02003104',
        '6JX' => 'E02003104',
        '6JY' => 'E02003104',
        '6JZ' => 'E02003104',
        '6LA' => 'E02003104',
        '6LB' => 'E02003104',
        '6LD' => 'E02003104',
        '6LE' => 'E02003104',
        '6LF' => 'E02003104',
        '6LG' => 'E02003104',
        '6LH' => 'E02003104',
        '6LJ' => 'E02003104',
        '6LL' => 'E02003104',
        '6LP' => 'E02003100',
        '6LQ' => 'E02003104',
        '6LR' => 'E02003106',
        '6NA' => 'E02003100',
        '6NB' => 'E02003104',
        '6ND' => 'E02003100',
        '6NF' => 'E02003100',
        '6NP' => 'E02003100',
        '6NQ' => 'E02003100',
        '6NR' => 'E02003100',
        '6NS' => 'E02003100',
        '6PE' => 'E02003100',
        '6PH' => 'E02003100',
        '6PJ' => 'E02003100',
        '6PL' => 'E02003100',
        '6PT' => 'E02003098',
        '6PW' => 'E02003100',
        '6PX' => 'E02003100',
        '6PY' => 'E02003100',
        '6PZ' => 'E02003100',
        '6QA' => 'E02003100',
        '6QB' => 'E02003100',
        '6QD' => 'E02003106',
        '6QH' => 'E02003100',
        '6RA' => 'E02003104',
        '6RB' => 'E02003104',
        '6RD' => 'E02003104',
        '6RE' => 'E02003104',
        '6RF' => 'E02003104',
        '6RG' => 'E02003104',
        '6RH' => 'E02003104',
        '6RJ' => 'E02003104',
        '6RL' => 'E02003104',
        '6RN' => 'E02003104',
        '6RQ' => 'E02003104',
        '6RW' => 'E02003104',
        '6RY' => 'E02003100',
        '6SA' => 'E02003104',
        '6SB' => 'E02003104',
        '6SD' => 'E02003104',
        '6SE' => 'E02003104',
        '6SN' => 'E02003104',
        '6TP' => 'E02003104',
        '6WA' => 'E02003100',
        '6WB' => 'E02003100',
        '6WD' => 'E02003100',
        '6WU' => 'E02003100',
        '6WW' => 'E02003100',
        '6WX' => 'E02003100',
        '6WY' => 'E02003100',
        '6WZ' => 'E02003100',
        '6XA' => 'E02003100',
        '6YA' => 'E02003104',
        '6YB' => 'E02003104',
        '6YD' => 'E02003104',
        '6ZJ' => 'E02003100',
        '6ZW' => 'E02003100',
        '6ZX' => 'E02003100',
        '7AA' => 'E02003107',
        '7AB' => 'E02003107',
        '7AD' => 'E02003107',
        '7AE' => 'E02003107',
        '7AF' => 'E02003107',
        '7AG' => 'E02003107',
        '7AH' => 'E02003107',
        '7AJ' => 'E02003107',
        '7AL' => 'E02003107',
        '7AN' => 'E02003107',
        '7AP' => 'E02003107',
        '7AQ' => 'E02003107',
        '7AR' => 'E02003107',
        '7AS' => 'E02003107',
        '7AT' => 'E02003107',
        '7AU' => 'E02003107',
        '7AW' => 'E02003107',
        '7AX' => 'E02003107',
        '7AY' => 'E02003107',
        '7AZ' => 'E02003107',
        '7BA' => 'E02003107',
        '7BB' => 'E02003107',
        '7BD' => 'E02003107',
        '7BE' => 'E02003107',
        '7BF' => 'E02003107',
        '7BG' => 'E02003107',
        '7BH' => 'E02003107',
        '7BJ' => 'E02003107',
        '7BL' => 'E02003107',
        '7BN' => 'E02003107',
        '7BP' => 'E02003107',
        '7BQ' => 'E02003107',
        '7BR' => 'E02003107',
        '7BS' => 'E02003107',
        '7BT' => 'E02003107',
        '7BU' => 'E02003107',
        '7BW' => 'E02003107',
        '7BX' => 'E02003107',
        '7BY' => 'E02003107',
        '7BZ' => 'E02003107',
        '7DA' => 'E02003107',
        '7DB' => 'E02003107',
        '7DD' => 'E02003107',
        '7DE' => 'E02003107',
        '7DF' => 'E02003107',
        '7DG' => 'E02003107',
        '7DH' => 'E02003107',
        '7DJ' => 'E02003107',
        '7DL' => 'E02003107',
        '7DN' => 'E02003107',
        '7DP' => 'E02003107',
        '7DQ' => 'E02003107',
        '7DR' => 'E02003107',
        '7DS' => 'E02003107',
        '7DT' => 'E02003100',
        '7DU' => 'E02003013',
        '7DW' => 'E02003107',
        '7DX' => 'E02003013',
        '7DZ' => 'E02003107',
        '7EA' => 'E02003107',
        '7EB' => 'E02003107',
        '7ED' => 'E02003107',
        '7EE' => 'E02003107',
        '7EF' => 'E02003107',
        '7EG' => 'E02003107',
        '7EH' => 'E02003107',
        '7EJ' => 'E02003107',
        '7EL' => 'E02003107',
        '7EN' => 'E02003107',
        '7EP' => 'E02003107',
        '7EQ' => 'E02003107',
        '7ER' => 'E02003107',
        '7ES' => 'E02003107',
        '7ET' => 'E02003107',
        '7EU' => 'E02003107',
        '7EW' => 'E02003107',
        '7EX' => 'E02003107',
        '7HA' => 'E02003107',
        '7HB' => 'E02003107',
        '7HD' => 'E02003107',
        '7HE' => 'E02003107',
        '7HF' => 'E02003107',
        '7HG' => 'E02003107',
        '7HH' => 'E02003107',
        '7HJ' => 'E02003107',
        '7HL' => 'E02003107',
        '7HN' => 'E02003107',
        '7HP' => 'E02003107',
        '7HQ' => 'E02003107',
        '7HR' => 'E02003107',
        '7HS' => 'E02003107',
        '7HT' => 'E02003107',
        '7HU' => 'E02003107',
        '7HW' => 'E02003107',
        '7HX' => 'E02003107',
        '7HY' => 'E02003107',
        '7HZ' => 'E02003107',
        '7JA' => 'E02003107',
        '7JB' => 'E02003107',
        '7JD' => 'E02003107',
        '7JF' => 'E02003107',
        '7JG' => 'E02003107',
        '7JJ' => 'E02003107',
        '7JL' => 'E02003107',
        '7JN' => 'E02003107',
        '7JQ' => 'E02003107',
        '7JT' => 'E02003107',
        '7JU' => 'E02003107',
        '7JW' => 'E02003107',
        '7JX' => 'E02003107',
        '7JY' => 'E02003107',
        '7JZ' => 'E02003107',
        '7LA' => 'E02003107',
        '7LB' => 'E02003107',
        '7LD' => 'E02003107',
        '7LE' => 'E02003107',
        '7LF' => 'E02003107',
        '7LG' => 'E02003107',
        '7LH' => 'E02003107',
        '7LJ' => 'E02003107',
        '7LL' => 'E02003107',
        '7LQ' => 'E02003107',
        '7LS' => 'E02003107',
        '7LT' => 'E02003107',
        '7LU' => 'E02003107',
        '7LX' => 'E02003107',
        '7LY' => 'E02003107',
        '7LZ' => 'E02003107',
        '7NA' => 'E02003107',
        '7NB' => 'E02003107',
        '7ND' => 'E02003107',
        '7NE' => 'E02003107',
        '7NF' => 'E02003107',
        '7NG' => 'E02003107',
        '7NH' => 'E02003107',
        '7NJ' => 'E02003107',
        '7NL' => 'E02003107',
        '7NN' => 'E02003107',
        '7NP' => 'E02003107',
        '7NQ' => 'E02003107',
        '7NR' => 'E02003107',
        '7NS' => 'E02003107',
        '7NT' => 'E02003107',
        '7NU' => 'E02003107',
        '7NW' => 'E02003107',
        '7PA' => 'E02003107',
        '7PB' => 'E02003107',
        '7PD' => 'E02003107',
        '7PF' => 'E02003107',
        '7PH' => 'E02003107',
        '7PL' => 'E02003107',
        '7PP' => 'E02003107',
        '7PQ' => 'E02003107',
        '7PR' => 'E02003107',
        '7PS' => 'E02003107',
        '7PT' => 'E02003107',
        '7PU' => 'E02003107',
        '7PW' => 'E02003107',
        '7PX' => 'E02003107',
        '7PY' => 'E02003107',
        '7PZ' => 'E02003107',
        '7QA' => 'E02003107',
        '7QB' => 'E02003107',
        '7QD' => 'E02003107',
        '7QE' => 'E02003100',
        '7QF' => 'E02003107',
        '7QG' => 'E02003107',
        '7QH' => 'E02003107',
        '7QJ' => 'E02003107',
        '7QL' => 'E02003107',
        '7QN' => 'E02003107',
        '7QP' => 'E02003107',
        '7QQ' => 'E02003107',
        '7QR' => 'E02003107',
        '7QS' => 'E02003107',
        '7QT' => 'E02003107',
        '7QU' => 'E02003107',
        '7QW' => 'E02003100',
        '7QX' => 'E02003107',
        '7QY' => 'E02003107',
        '7QZ' => 'E02003107',
        '7RA' => 'E02003107',
        '7RB' => 'E02003107',
        '7RD' => 'E02003107',
        '7RE' => 'E02003107',
        '7RF' => 'E02003107',
        '7RG' => 'E02003107',
        '7RH' => 'E02003107',
        '7RJ' => 'E02003107',
        '7RL' => 'E02003107',
        '7RN' => 'E02003107',
        '7RP' => 'E02003107',
        '7RQ' => 'E02003107',
        '7RR' => 'E02003107',
        '7RT' => 'E02003107',
        '7ST' => 'E02003107',
        '7WA' => 'E02003107',
        '7WU' => 'E02003100',
        '7WW' => 'E02003100',
        '7WX' => 'E02003100',
        '7WY' => 'E02003100',
        '7WZ' => 'E02003100',
        '7XQ' => 'E02003100',
        '7XZ' => 'E02003100',
        '7YA' => 'E02003107',
        '7YB' => 'E02003100',
        '7YD' => 'E02003107',
        '7YE' => 'E02003107',
        '7YF' => 'E02003100',
        '7YG' => 'E02003107',
        '7YH' => 'E02003100',
        '7YJ' => 'E02003100',
        '7YL' => 'E02003100',
        '7YN' => 'E02003100',
        '7YP' => 'E02003100',
        '7ZH' => 'E02003100',
        '7ZX' => 'E02003100',
        '8AA' => 'E02003106',
        '8AB' => 'E02003106',
        '8AD' => 'E02003106',
        '8AE' => 'E02003106',
        '8AF' => 'E02003106',
        '8AG' => 'E02003106',
        '8AH' => 'E02003106',
        '8AJ' => 'E02003106',
        '8AL' => 'E02003106',
        '8AN' => 'E02003106',
        '8AP' => 'E02003106',
        '8AQ' => 'E02003106',
        '8AR' => 'E02003106',
        '8AS' => 'E02003106',
        '8AW' => 'E02003106',
        '8AX' => 'E02003106',
        '8AY' => 'E02003106',
        '8BA' => 'E02003104',
        '8BB' => 'E02003100',
        '8BD' => 'E02003100',
        '8BE' => 'E02003100',
        '8BF' => 'E02003106',
        '8BG' => 'E02003100',
        '8BH' => 'E02003100',
        '8BJ' => 'E02003106',
        '8BL' => 'E02003100',
        '8DR' => 'E02003100',
        '8DS' => 'E02003100',
        '8DU' => 'E02003100',
        '8DW' => 'E02003100',
        '8DX' => 'E02003104',
        '8DY' => 'E02003104',
        '8DZ' => 'E02003100',
        '8FB' => 'E02003104',
        '8FF' => 'E02003100',
        '8GD' => 'E02003106',
        '8GE' => 'E02003106',
        '8GF' => 'E02003106',
        '8GG' => 'E02003106',
        '8HL' => 'E02003106',
        '8HN' => 'E02003106',
        '8HP' => 'E02003106',
        '8HQ' => 'E02003106',
        '8HR' => 'E02003106',
        '8HT' => 'E02003100',
        '8JH' => 'E02003106',
        '8JT' => 'E02003107',
        '8JU' => 'E02003107',
        '8JZ' => 'E02003107',
        '8LH' => 'E02003106',
        '8LL' => 'E02003100',
        '8LN' => 'E02003104',
        '8LP' => 'E02003106',
        '8LQ' => 'E02003100',
        '8LR' => 'E02003107',
        '8LS' => 'E02003104',
        '8LT' => 'E02003104',
        '8LU' => 'E02003104',
        '8LW' => 'E02003104',
        '8LX' => 'E02003104',
        '8LY' => 'E02003104',
        '8LZ' => 'E02003104',
        '8NA' => 'E02003104',
        '8NB' => 'E02003104',
        '8ND' => 'E02003104',
        '8NE' => 'E02003104',
        '8NF' => 'E02003104',
        '8NG' => 'E02003104',
        '8NH' => 'E02003104',
        '8NJ' => 'E02003104',
        '8NL' => 'E02003104',
        '8NN' => 'E02003104',
        '8NP' => 'E02003104',
        '8NQ' => 'E02003104',
        '8NR' => 'E02003104',
        '8NS' => 'E02003104',
        '8NT' => 'E02003104',
        '8NU' => 'E02003104',
        '8NW' => 'E02003104',
        '8NX' => 'E02003106',
        '8NY' => 'E02003106',
        '8NZ' => 'E02003106',
        '8PA' => 'E02003104',
        '8PB' => 'E02003106',
        '8PD' => 'E02003106',
        '8PE' => 'E02003106',
        '8PF' => 'E02003106',
        '8PG' => 'E02003106',
        '8PH' => 'E02003104',
        '8PJ' => 'E02003106',
        '8PL' => 'E02003104',
        '8PN' => 'E02003106',
        '8PP' => 'E02003106',
        '8PQ' => 'E02003104',
        '8PR' => 'E02003104',
        '8PS' => 'E02003104',
        '8PT' => 'E02003101',
        '8PU' => 'E02003106',
        '8PW' => 'E02003106',
        '8PX' => 'E02003107',
        '8PY' => 'E02003104',
        '8PZ' => 'E02003104',
        '8QA' => 'E02003106',
        '8QB' => 'E02003106',
        '8QD' => 'E02003106',
        '8QE' => 'E02003106',
        '8QF' => 'E02003106',
        '8QG' => 'E02003106',
        '8QH' => 'E02003106',
        '8QJ' => 'E02003106',
        '8QL' => 'E02003107',
        '8QN' => 'E02003106',
        '8QP' => 'E02003107',
        '8QQ' => 'E02003106',
        '8QR' => 'E02003107',
        '8QS' => 'E02003106',
        '8QT' => 'E02003106',
        '8QU' => 'E02003106',
        '8QW' => 'E02003107',
        '8QX' => 'E02003104',
        '8QY' => 'E02003104',
        '8QZ' => 'E02003106',
        '8RA' => 'E02003106',
        '8RB' => 'E02003106',
        '8RD' => 'E02003106',
        '8RE' => 'E02003106',
        '8RF' => 'E02003106',
        '8RG' => 'E02003106',
        '8RH' => 'E02003106',
        '8RJ' => 'E02003106',
        '8RL' => 'E02003106',
        '8RN' => 'E02003106',
        '8RP' => 'E02003104',
        '8RQ' => 'E02003106',
        '8RR' => 'E02003106',
        '8RS' => 'E02003106',
        '8RT' => 'E02003106',
        '8RU' => 'E02003100',
        '8RW' => 'E02003106',
        '8RX' => 'E02003106',
        '8RY' => 'E02003106',
        '8RZ' => 'E02003104',
        '8SA' => 'E02003106',
        '8SB' => 'E02003106',
        '8SD' => 'E02003106',
        '8SE' => 'E02003100',
        '8SF' => 'E02003106',
        '8SG' => 'E02003104',
        '8SH' => 'E02003100',
        '8SJ' => 'E02003106',
        '8SL' => 'E02003106',
        '8SN' => 'E02003100',
        '8SP' => 'E02003106',
        '8SQ' => 'E02003106',
        '8SR' => 'E02003106',
        '8SS' => 'E02003106',
        '8ST' => 'E02003106',
        '8SU' => 'E02003106',
        '8SW' => 'E02003106',
        '8SX' => 'E02003106',
        '8SY' => 'E02003104',
        '8SZ' => 'E02003100',
        '8TA' => 'E02003104',
        '8TB' => 'E02003104',
        '8TD' => 'E02003104',
        '8TE' => 'E02003100',
        '8TF' => 'E02003106',
        '8TG' => 'E02003106',
        '8TH' => 'E02003106',
        '8TJ' => 'E02003106',
        '8TL' => 'E02003104',
        '8TN' => 'E02003100',
        '8TP' => 'E02003100',
        '8TQ' => 'E02003106',
        '8TR' => 'E02003104',
        '8TS' => 'E02003100',
        '8TT' => 'E02003106',
        '8TU' => 'E02003104',
        '8TW' => 'E02003100',
        '8TX' => 'E02003104',
        '8TY' => 'E02003104',
        '8TZ' => 'E02003104',
        '8UA' => 'E02003100',
        '8UB' => 'E02003104',
        '8UD' => 'E02003104',
        '8UE' => 'E02003104',
        '8UF' => 'E02003104',
        '8UG' => 'E02003104',
        '8UH' => 'E02003104',
        '8UJ' => 'E02003104',
        '8UL' => 'E02003104',
        '8UN' => 'E02003104',
        '8UP' => 'E02003104',
        '8UQ' => 'E02003104',
        '8UR' => 'E02003104',
        '8US' => 'E02003104',
        '8UT' => 'E02003104',
        '8UU' => 'E02003104',
        '8UW' => 'E02003104',
        '8UX' => 'E02003104',
        '8UY' => 'E02003104',
        '8UZ' => 'E02003104',
        '8WA' => 'E02003100',
        '8WB' => 'E02003100',
        '8WD' => 'E02003100',
        '8WE' => 'E02003100',
        '8WF' => 'E02003100',
        '8WG' => 'E02003100',
        '8WH' => 'E02003100',
        '8WJ' => 'E02003100',
        '8WL' => 'E02003100',
        '8WN' => 'E02003100',
        '8WP' => 'E02003100',
        '8WQ' => 'E02003100',
        '8WR' => 'E02003100',
        '8WS' => 'E02003100',
        '8WT' => 'E02003100',
        '8WU' => 'E02003100',
        '8WW' => 'E02003100',
        '8WX' => 'E02003100',
        '8WY' => 'E02003100',
        '8WZ' => 'E02003100',
        '8XA' => 'E02003104',
        '8XB' => 'E02003104',
        '8XD' => 'E02003104',
        '8XE' => 'E02003104',
        '8XF' => 'E02003104',
        '8XG' => 'E02003106',
        '8XH' => 'E02003104',
        '8XJ' => 'E02003104',
        '8XL' => 'E02003104',
        '8XN' => 'E02003104',
        '8XP' => 'E02003100',
        '8XQ' => 'E02003104',
        '8XR' => 'E02003100',
        '8XS' => 'E02003104',
        '8XT' => 'E02003106',
        '8XU' => 'E02003106',
        '8XW' => 'E02003104',
        '8XX' => 'E02003106',
        '8XY' => 'E02003106',
        '8XZ' => 'E02003100',
        '8YA' => 'E02003106',
        '8YB' => 'E02003106',
        '8YD' => 'E02003100',
        '8YE' => 'E02003100',
        '8YF' => 'E02003100',
        '8YG' => 'E02003100',
        '8YH' => 'E02003100',
        '8YJ' => 'E02003100',
        '8YL' => 'E02003100',
        '8YN' => 'E02003100',
        '8YP' => 'E02003100',
        '8YQ' => 'E02003100',
        '8YR' => 'E02003100',
        '8YS' => 'E02003100',
        '8YT' => 'E02003104',
        '8YU' => 'E02003106',
        '8YW' => 'E02003100',
        '8YX' => 'E02003100',
        '8YY' => 'E02003100',
        '8YZ' => 'E02003100',
        '8ZA' => 'E02003100',
        '8ZB' => 'E02003100',
        '8ZD' => 'E02003100',
        '8ZE' => 'E02003100',
        '8ZF' => 'E02003100',
        '8ZG' => 'E02003100',
        '8ZH' => 'E02003100',
        '8ZJ' => 'E02003100',
        '8ZL' => 'E02003100',
        '8ZN' => 'E02003100',
        '8ZP' => 'E02003100',
        '8ZQ' => 'E02003100',
        '8ZR' => 'E02003100',
        '8ZT' => 'E02003100',
        '9AE' => 'E02003100',
        '9AF' => 'E02003100',
        '9AG' => 'E02003100',
        '9AH' => 'E02003100',
        '9AN' => 'E02003100',
        '9AP' => 'E02003100',
        '9AR' => 'E02003100',
        '9AW' => 'E02003100',
        '9AX' => 'E02003100',
        '9AZ' => 'E02003100',
        '9BB' => 'E02003100',
        '9BD' => 'E02003100',
        '9BE' => 'E02003100',
        '9BG' => 'E02003100',
        '9BH' => 'E02003100',
        '9BP' => 'E02003100',
        '9BR' => 'E02003100',
        '9BS' => 'E02003100',
        '9BT' => 'E02003100',
        '9BU' => 'E02003100',
        '9BW' => 'E02003100',
        '9BX' => 'E02003100',
        '9BY' => 'E02003100',
        '9BZ' => 'E02003100',
        '9DA' => 'E02003100',
        '9DD' => 'E02003100',
        '9DF' => 'E02003100',
        '9DG' => 'E02003100',
        '9DH' => 'E02003100',
        '9DJ' => 'E02003100',
        '9DL' => 'E02003100',
        '9DN' => 'E02003100',
        '9DP' => 'E02003100',
        '9DQ' => 'E02003100',
        '9DR' => 'E02003100',
        '9DS' => 'E02003100',
        '9DT' => 'E02003100',
        '9DU' => 'E02003100',
        '9DW' => 'E02003100',
        '9DX' => 'E02003100',
        '9DY' => 'E02003100',
        '9DZ' => 'E02003100',
        '9EA' => 'E02003100',
        '9EB' => 'E02003100',
        '9ED' => 'E02003100',
        '9EE' => 'E02003100',
        '9EF' => 'E02003100',
        '9EG' => 'E02003100',
        '9EH' => 'E02003100',
        '9EJ' => 'E02003100',
        '9EL' => 'E02003100',
        '9EN' => 'E02003100',
        '9EP' => 'E02003100',
        '9EQ' => 'E02003100',
        '9ER' => 'E02003100',
        '9ES' => 'E02003100',
        '9ET' => 'E02003100',
        '9EU' => 'E02003100',
        '9EW' => 'E02003100',
        '9EX' => 'E02003100',
        '9EY' => 'E02003100',
        '9EZ' => 'E02003100',
        '9FA' => 'E02003100',
        '9FB' => 'E02003100',
        '9FD' => 'E02003100',
        '9FE' => 'E02003100',
        '9FF' => 'E02003100',
        '9FG' => 'E02003100',
        '9FH' => 'E02003100',
        '9FJ' => 'E02003100',
        '9FL' => 'E02003100',
        '9FN' => 'E02003100',
        '9FP' => 'E02003100',
        '9FQ' => 'E02003100',
        '9FR' => 'E02003100',
        '9FS' => 'E02003100',
        '9FT' => 'E02003100',
        '9FU' => 'E02003100',
        '9FW' => 'E02003100',
        '9FX' => 'E02003100',
        '9FY' => 'E02003100',
        '9FZ' => 'E02003100',
        '9GA' => 'E02003100',
        '9GB' => 'E02003100',
        '9GD' => 'E02003100',
        '9GE' => 'E02003100',
        '9GF' => 'E02003100',
        '9GG' => 'E02003100',
        '9GH' => 'E02003100',
        '9GJ' => 'E02003100',
        '9GL' => 'E02003100',
        '9GN' => 'E02003100',
        '9GQ' => 'E02003100',
        '9GR' => 'E02003100',
        '9GS' => 'E02003100',
        '9GT' => 'E02003100',
        '9GU' => 'E02003100',
        '9GW' => 'E02003100',
        '9GX' => 'E02003100',
        '9GY' => 'E02003100',
        '9GZ' => 'E02003100',
        '9HB' => 'E02003100',
        '9HE' => 'E02003100',
        '9HF' => 'E02003100',
        '9HG' => 'E02003100',
        '9HH' => 'E02003100',
        '9HJ' => 'E02003100',
        '9HL' => 'E02003100',
        '9HN' => 'E02003100',
        '9HP' => 'E02003100',
        '9HQ' => 'E02003100',
        '9HR' => 'E02003100',
        '9HS' => 'E02003100',
        '9HT' => 'E02003100',
        '9HU' => 'E02003100',
        '9HW' => 'E02003100',
        '9HX' => 'E02003100',
        '9HY' => 'E02003100',
        '9HZ' => 'E02003100',
        '9JA' => 'E02003100',
        '9JB' => 'E02003100',
        '9JD' => 'E02003100',
        '9JE' => 'E02003100',
        '9JG' => 'E02003100',
        '9JJ' => 'E02003100',
        '9JL' => 'E02003100',
        '9JN' => 'E02003100',
        '9JP' => 'E02003100',
        '9JQ' => 'E02003100',
        '9JR' => 'E02003100',
        '9JS' => 'E02003100',
        '9TF' => 'E02003100',
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
