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
final class S19
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '5AA' => 'E02001675',
        '5AB' => 'E02001675',
        '5AD' => 'E02006803',
        '5AE' => 'E02006803',
        '5AF' => 'E02006803',
        '5AG' => 'E02006803',
        '5AH' => 'E02006803',
        '5AJ' => 'E02006803',
        '5AL' => 'E02006803',
        '5AN' => 'E02006803',
        '5AP' => 'E02006803',
        '5AQ' => 'E02006803',
        '5AR' => 'E02006803',
        '5AS' => 'E02006803',
        '5AT' => 'E02006803',
        '5AU' => 'E02006803',
        '5AW' => 'E02006803',
        '5AX' => 'E02006803',
        '5AY' => 'E02006803',
        '5AZ' => 'E02006803',
        '5BA' => 'E02006803',
        '5BB' => 'E02006803',
        '5BD' => 'E02006803',
        '5BE' => 'E02006803',
        '5BF' => 'E02006803',
        '5BG' => 'E02006803',
        '5BH' => 'E02006803',
        '5BJ' => 'E02006803',
        '5BL' => 'E02006803',
        '5BN' => 'E02006803',
        '5BP' => 'E02006803',
        '5BQ' => 'E02006803',
        '5BR' => 'E02006803',
        '5BS' => 'E02006803',
        '5BT' => 'E02006803',
        '5BU' => 'E02006803',
        '5BW' => 'E02006803',
        '5BX' => 'E02006803',
        '5BY' => 'E02006803',
        '5BZ' => 'E02006803',
        '5DA' => 'E02006803',
        '5DB' => 'E02006803',
        '5DD' => 'E02006803',
        '5DE' => 'E02006803',
        '5DF' => 'E02006803',
        '5DG' => 'E02006803',
        '5DH' => 'E02001675',
        '5DJ' => 'E02006803',
        '5DL' => 'E02006803',
        '5DN' => 'E02006803',
        '5DP' => 'E02006803',
        '5DQ' => 'E02006803',
        '5DR' => 'E02006803',
        '5DS' => 'E02006803',
        '5DT' => 'E02006803',
        '5DU' => 'E02006803',
        '5DW' => 'E02006803',
        '5DX' => 'E02006803',
        '5DY' => 'E02006803',
        '5DZ' => 'E02006803',
        '5EA' => 'E02001675',
        '5EB' => 'E02006803',
        '5ED' => 'E02006803',
        '5EE' => 'E02006803',
        '5EF' => 'E02006803',
        '5EG' => 'E02001675',
        '5EH' => 'E02006803',
        '5EJ' => 'E02001675',
        '5EL' => 'E02001675',
        '5EN' => 'E02001675',
        '5EP' => 'E02001675',
        '5EQ' => 'E02001675',
        '5ER' => 'E02001675',
        '5ES' => 'E02001675',
        '5ET' => 'E02001675',
        '5EU' => 'E02001675',
        '5EW' => 'E02001675',
        '5EX' => 'E02001675',
        '5EY' => 'E02001675',
        '5EZ' => 'E02001675',
        '5FA' => 'E02006803',
        '5FB' => 'E02001675',
        '5FD' => 'E02006803',
        '5FE' => 'E02001673',
        '5FF' => 'E02001673',
        '5FG' => 'E02001673',
        '5FH' => 'E02001673',
        '5FJ' => 'E02001675',
        '5FL' => 'E02001673',
        '5FN' => 'E02001673',
        '5FP' => 'E02001675',
        '5FQ' => 'E02001673',
        '5FR' => 'E02001673',
        '5FS' => 'E02001673',
        '5FT' => 'E02001673',
        '5FU' => 'E02001673',
        '5FW' => 'E02001673',
        '5FX' => 'E02001673',
        '5FY' => 'E02001673',
        '5FZ' => 'E02001673',
        '5GA' => 'E02006803',
        '5GB' => 'E02001675',
        '5GD' => 'E02001675',
        '5GE' => 'E02001675',
        '5GF' => 'E02006803',
        '5GG' => 'E02001675',
        '5GH' => 'E02001673',
        '5GJ' => 'E02001675',
        '5GL' => 'E02006803',
        '5GN' => 'E02001675',
        '5GP' => 'E02001675',
        '5GQ' => 'E02006803',
        '5GR' => 'E02001675',
        '5GS' => 'E02004105',
        '5GT' => 'E02001673',
        '5GU' => 'E02001675',
        '5GW' => 'E02001675',
        '5GX' => 'E02001675',
        '5GY' => 'E02001675',
        '5GZ' => 'E02001675',
        '5HA' => 'E02006803',
        '5HB' => 'E02006803',
        '5HD' => 'E02001675',
        '5HE' => 'E02006803',
        '5HF' => 'E02006803',
        '5HG' => 'E02006803',
        '5HH' => 'E02006803',
        '5HL' => 'E02006803',
        '5HN' => 'E02006803',
        '5HP' => 'E02006803',
        '5HQ' => 'E02006803',
        '5HR' => 'E02006803',
        '5HS' => 'E02006803',
        '5HT' => 'E02006803',
        '5HU' => 'E02006803',
        '5HW' => 'E02006803',
        '5HX' => 'E02006803',
        '5HY' => 'E02006803',
        '5HZ' => 'E02001675',
        '5JA' => 'E02001675',
        '5JB' => 'E02001675',
        '5JD' => 'E02001675',
        '5JE' => 'E02001675',
        '5JF' => 'E02001675',
        '5JG' => 'E02001675',
        '5JH' => 'E02001675',
        '5JJ' => 'E02001675',
        '5JL' => 'E02001675',
        '5JN' => 'E02001675',
        '5JP' => 'E02006803',
        '5JR' => 'E02006803',
        '5JS' => 'E02006803',
        '5JT' => 'E02006803',
        '5JU' => 'E02006803',
        '5JW' => 'E02006803',
        '5JX' => 'E02006803',
        '5LA' => 'E02001675',
        '5LB' => 'E02001675',
        '5LD' => 'E02001675',
        '5LE' => 'E02001675',
        '5LF' => 'E02001675',
        '5LG' => 'E02001675',
        '5LH' => 'E02001675',
        '5LJ' => 'E02001675',
        '5LL' => 'E02001675',
        '5LN' => 'E02001675',
        '5LP' => 'E02001675',
        '5LQ' => 'E02001675',
        '5LR' => 'E02001675',
        '5LS' => 'E02001675',
        '5LT' => 'E02001675',
        '5LU' => 'E02001675',
        '5LW' => 'E02001675',
        '5LX' => 'E02001675',
        '5NA' => 'E02001675',
        '5NB' => 'E02001675',
        '5ND' => 'E02001675',
        '5NE' => 'E02001675',
        '5NF' => 'E02001675',
        '5NG' => 'E02001675',
        '5NH' => 'E02001675',
        '5NJ' => 'E02001675',
        '5NL' => 'E02001675',
        '5NN' => 'E02001675',
        '5NP' => 'E02001675',
        '5NQ' => 'E02001675',
        '5NZ' => 'E02001675',
        '5PA' => 'E02006803',
        '5PB' => 'E02006803',
        '5PD' => 'E02006803',
        '5PE' => 'E02006803',
        '5PF' => 'E02006803',
        '5PG' => 'E02006803',
        '5PH' => 'E02006803',
        '5PJ' => 'E02001673',
        '5PZ' => 'E02006803',
        '5RB' => 'E02001675',
        '5RP' => 'E02001673',
        '5RW' => 'E02001673',
        '5RY' => 'E02001675',
        '5RZ' => 'E02001675',
        '5SA' => 'E02006803',
        '5SB' => 'E02006803',
        '5SD' => 'E02006803',
        '5SE' => 'E02006803',
        '5SF' => 'E02006803',
        '5SG' => 'E02001675',
        '5SH' => 'E02001675',
        '5SJ' => 'E02006804',
        '5SL' => 'E02006803',
        '5SN' => 'E02006803',
        '5SP' => 'E02006803',
        '5SQ' => 'E02006803',
        '5SR' => 'E02006803',
        '5SS' => 'E02006803',
        '5ST' => 'E02006803',
        '5SU' => 'E02006803',
        '5SW' => 'E02006803',
        '5SX' => 'E02006803',
        '5SY' => 'E02006803',
        '5SZ' => 'E02006803',
        '5TA' => 'E02001675',
        '5TB' => 'E02001675',
        '5TD' => 'E02001675',
        '5TE' => 'E02001675',
        '5TF' => 'E02001675',
        '5TG' => 'E02001675',
        '5TH' => 'E02001675',
        '5TJ' => 'E02001675',
        '5TL' => 'E02001675',
        '5TN' => 'E02001675',
        '5TP' => 'E02006803',
        '5TQ' => 'E02006803',
        '5TR' => 'E02006803',
        '5TS' => 'E02006803',
        '5TT' => 'E02006803',
        '5TU' => 'E02006803',
        '5TW' => 'E02006803',
        '5TX' => 'E02006803',
        '5TY' => 'E02006803',
        '5TZ' => 'E02006803',
        '5UA' => 'E02006803',
        '5UB' => 'E02006803',
        '5UD' => 'E02006803',
        '5UE' => 'E02006803',
        '5UQ' => 'E02006804',
        '5US' => 'E02006803',
        '5UT' => 'E02006804',
        '5UU' => 'E02006804',
        '5UW' => 'E02006804',
        '5UX' => 'E02006804',
        '5UY' => 'E02006804',
        '5UZ' => 'E02006804',
        '5XA' => 'E02006803',
        '5XB' => 'E02006803',
        '5XD' => 'E02006803',
        '5XE' => 'E02006803',
        '5YD' => 'E02006804',
        '5YN' => 'E02006803',
        '5YP' => 'E02001673',
        '5YR' => 'E02006803',
        '5YS' => 'E02006803',
        '5YT' => 'E02006803',
        '5YU' => 'E02001675',
        '5YW' => 'E02006803',
        '5YX' => 'E02006803',
        '5YY' => 'E02006803',
        '5YZ' => 'E02006804',
        '5ZQ' => 'E02006803',
        '5ZY' => 'E02006803',
        '6AA' => 'E02001666',
        '6AB' => 'E02001666',
        '6AD' => 'E02001666',
        '6AE' => 'E02001666',
        '6AF' => 'E02001666',
        '6AG' => 'E02001666',
        '6AH' => 'E02001675',
        '6AJ' => 'E02001666',
        '6AL' => 'E02001666',
        '6AN' => 'E02001666',
        '6AP' => 'E02001666',
        '6AQ' => 'E02001666',
        '6AR' => 'E02001666',
        '6AS' => 'E02001666',
        '6AT' => 'E02001666',
        '6AU' => 'E02001666',
        '6AW' => 'E02001666',
        '6AX' => 'E02001666',
        '6AY' => 'E02001666',
        '6AZ' => 'E02001666',
        '6BA' => 'E02001666',
        '6BB' => 'E02001666',
        '6BD' => 'E02001666',
        '6BE' => 'E02001666',
        '6BF' => 'E02001666',
        '6BG' => 'E02001666',
        '6BH' => 'E02001666',
        '6BJ' => 'E02001666',
        '6BL' => 'E02001666',
        '6BN' => 'E02001666',
        '6BP' => 'E02001666',
        '6BQ' => 'E02001666',
        '6BR' => 'E02001666',
        '6BS' => 'E02001666',
        '6BT' => 'E02001666',
        '6BU' => 'E02001673',
        '6BW' => 'E02001673',
        '6BX' => 'E02001666',
        '6BY' => 'E02001666',
        '6BZ' => 'E02001666',
        '6DA' => 'E02001666',
        '6DB' => 'E02001666',
        '6DD' => 'E02001673',
        '6DE' => 'E02006803',
        '6DF' => 'E02001666',
        '6DG' => 'E02001673',
        '6DH' => 'E02001673',
        '6DJ' => 'E02001673',
        '6DL' => 'E02001673',
        '6DN' => 'E02001673',
        '6DP' => 'E02001673',
        '6DQ' => 'E02001673',
        '6DR' => 'E02001673',
        '6DS' => 'E02001673',
        '6DT' => 'E02001673',
        '6DU' => 'E02001673',
        '6DW' => 'E02001673',
        '6DX' => 'E02001673',
        '6DY' => 'E02001673',
        '6DZ' => 'E02001673',
        '6EA' => 'E02001673',
        '6EB' => 'E02001673',
        '6ED' => 'E02001673',
        '6EE' => 'E02001673',
        '6EF' => 'E02001673',
        '6EG' => 'E02001673',
        '6EH' => 'E02001673',
        '6EJ' => 'E02001673',
        '6EL' => 'E02001673',
        '6EN' => 'E02001673',
        '6EP' => 'E02001673',
        '6EQ' => 'E02001675',
        '6ER' => 'E02001673',
        '6ES' => 'E02001673',
        '6ET' => 'E02001673',
        '6EU' => 'E02001673',
        '6EW' => 'E02001673',
        '6EX' => 'E02001675',
        '6EY' => 'E02001675',
        '6EZ' => 'E02001675',
        '6FA' => 'E02001673',
        '6FB' => 'E02001666',
        '6FD' => 'E02001666',
        '6FE' => 'E02001666',
        '6FF' => 'E02001673',
        '6FG' => 'E02001666',
        '6FH' => 'E02001666',
        '6FJ' => 'E02001666',
        '6FL' => 'E02001666',
        '6FN' => 'E02001666',
        '6FP' => 'E02001666',
        '6FQ' => 'E02001666',
        '6FR' => 'E02001666',
        '6FS' => 'E02001666',
        '6FT' => 'E02001666',
        '6FU' => 'E02001675',
        '6FW' => 'E02001675',
        '6FX' => 'E02001666',
        '6FY' => 'E02001675',
        '6FZ' => 'E02001666',
        '6GA' => 'E02001673',
        '6GB' => 'E02001666',
        '6GD' => 'E02001666',
        '6GE' => 'E02001666',
        '6GF' => 'E02001673',
        '6GG' => 'E02001673',
        '6GH' => 'E02001675',
        '6GJ' => 'E02001675',
        '6GL' => 'E02001673',
        '6GN' => 'E02001673',
        '6GP' => 'E02001673',
        '6GQ' => 'E02001673',
        '6GR' => 'E02001673',
        '6GS' => 'E02001675',
        '6GT' => 'E02001673',
        '6GU' => 'E02001673',
        '6GW' => 'E02001666',
        '6GX' => 'E02001673',
        '6GY' => 'E02001673',
        '6GZ' => 'E02001673',
        '6HA' => 'E02001675',
        '6HB' => 'E02001675',
        '6HD' => 'E02001675',
        '6HE' => 'E02001675',
        '6HF' => 'E02001675',
        '6HG' => 'E02001675',
        '6HH' => 'E02001675',
        '6HJ' => 'E02001675',
        '6HL' => 'E02001675',
        '6HN' => 'E02001675',
        '6HP' => 'E02001675',
        '6HQ' => 'E02001675',
        '6HR' => 'E02001675',
        '6HS' => 'E02001671',
        '6HT' => 'E02001671',
        '6HU' => 'E02001675',
        '6HW' => 'E02001675',
        '6HX' => 'E02001675',
        '6HY' => 'E02001675',
        '6HZ' => 'E02001666',
        '6JA' => 'E02001671',
        '6JB' => 'E02001675',
        '6JD' => 'E02001675',
        '6JE' => 'E02001675',
        '6JH' => 'E02001675',
        '6JN' => 'E02001675',
        '6LA' => 'E02001675',
        '6LB' => 'E02001675',
        '6LD' => 'E02001675',
        '6LE' => 'E02001675',
        '6LF' => 'E02001675',
        '6LG' => 'E02001675',
        '6LH' => 'E02001675',
        '6LJ' => 'E02001675',
        '6LL' => 'E02001675',
        '6LN' => 'E02001675',
        '6LP' => 'E02001675',
        '6LQ' => 'E02001675',
        '6LR' => 'E02001671',
        '6LS' => 'E02001675',
        '6LT' => 'E02001675',
        '6LU' => 'E02001675',
        '6LW' => 'E02001675',
        '6LX' => 'E02001675',
        '6LY' => 'E02001671',
        '6LZ' => 'E02001675',
        '6NA' => 'E02001675',
        '6NB' => 'E02001671',
        '6ND' => 'E02001671',
        '6NE' => 'E02001675',
        '6NF' => 'E02001675',
        '6NG' => 'E02001675',
        '6NH' => 'E02001675',
        '6NJ' => 'E02001675',
        '6NL' => 'E02001675',
        '6NN' => 'E02001675',
        '6NP' => 'E02001675',
        '6NQ' => 'E02001671',
        '6NR' => 'E02001675',
        '6NS' => 'E02001673',
        '6NT' => 'E02001673',
        '6NU' => 'E02001675',
        '6NY' => 'E02001673',
        '6NZ' => 'E02001666',
        '6PA' => 'E02001673',
        '6PB' => 'E02001673',
        '6PD' => 'E02001673',
        '6PE' => 'E02001673',
        '6PF' => 'E02001673',
        '6PG' => 'E02001673',
        '6PH' => 'E02001673',
        '6PJ' => 'E02001673',
        '6PL' => 'E02001673',
        '6PN' => 'E02001673',
        '6PP' => 'E02001673',
        '6PQ' => 'E02001666',
        '6PR' => 'E02001673',
        '6PS' => 'E02001673',
        '6PT' => 'E02001673',
        '6PU' => 'E02001673',
        '6PW' => 'E02001673',
        '6PX' => 'E02001673',
        '6PY' => 'E02001673',
        '6PZ' => 'E02001673',
        '6QA' => 'E02001673',
        '6QB' => 'E02001673',
        '6QD' => 'E02001673',
        '6QE' => 'E02001673',
        '6QF' => 'E02001673',
        '6QG' => 'E02001673',
        '6QH' => 'E02001673',
        '6QJ' => 'E02001673',
        '6QL' => 'E02001673',
        '6QN' => 'E02001673',
        '6QP' => 'E02001673',
        '6QQ' => 'E02001673',
        '6QR' => 'E02001673',
        '6QS' => 'E02001673',
        '6QT' => 'E02001673',
        '6QU' => 'E02001673',
        '6QW' => 'E02001673',
        '6QX' => 'E02001673',
        '6QY' => 'E02001673',
        '6QZ' => 'E02001673',
        '6RA' => 'E02001671',
        '6RB' => 'E02001671',
        '6RD' => 'E02001671',
        '6RE' => 'E02001671',
        '6RF' => 'E02001671',
        '6RG' => 'E02001671',
        '6RH' => 'E02001671',
        '6RJ' => 'E02001671',
        '6RL' => 'E02001671',
        '6RN' => 'E02001671',
        '6RP' => 'E02001671',
        '6RQ' => 'E02001671',
        '6RR' => 'E02001671',
        '6RS' => 'E02001671',
        '6RT' => 'E02001671',
        '6RU' => 'E02001671',
        '6RW' => 'E02001671',
        '6RX' => 'E02001671',
        '6RY' => 'E02001671',
        '6RZ' => 'E02001671',
        '6SA' => 'E02001671',
        '6SB' => 'E02001671',
        '6SD' => 'E02001671',
        '6SE' => 'E02001671',
        '6SF' => 'E02001671',
        '6SG' => 'E02001671',
        '6SH' => 'E02001671',
        '6SJ' => 'E02001671',
        '6SL' => 'E02001671',
        '6SN' => 'E02001671',
        '6SP' => 'E02001671',
        '6SQ' => 'E02001671',
        '6SR' => 'E02001671',
        '6SS' => 'E02001671',
        '6ST' => 'E02001671',
        '6SU' => 'E02001671',
        '6SW' => 'E02001671',
        '6SX' => 'E02001671',
        '6SY' => 'E02001671',
        '6SZ' => 'E02001671',
        '6TA' => 'E02001671',
        '6TB' => 'E02001671',
        '6TD' => 'E02001671',
        '6TE' => 'E02001671',
        '6TF' => 'E02001671',
        '6TG' => 'E02001671',
        '6TH' => 'E02001671',
        '6UA' => 'E02001673',
        '6UB' => 'E02001673',
        '6WA' => 'E02001666',
        '6XA' => 'E02001666',
        '6XB' => 'E02001666',
        '6XD' => 'E02001666',
        '6XE' => 'E02001666',
        '6XX' => 'E02001671',
        '6YF' => 'E02001673',
        '6YG' => 'E02001666',
        '6YH' => 'E02001673',
        '6YJ' => 'E02001666',
        '6YL' => 'E02001675',
        '6YN' => 'E02001673',
        '6YP' => 'E02001673',
        '6YQ' => 'E02001675',
        '6YR' => 'E02001673',
        '6YS' => 'E02001673',
        '6YT' => 'E02001673',
        '6YU' => 'E02001675',
        '6YW' => 'E02001675',
        '6YX' => 'E02001671',
        '6YY' => 'E02001671',
        '6YZ' => 'E02001671',
        '6ZQ' => 'E02001673',
        '6ZY' => 'E02001673',
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