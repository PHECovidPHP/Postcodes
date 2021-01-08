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
final class EX13
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '5AA' => 'E02004133',
        '5AB' => 'E02004133',
        '5AD' => 'E02004133',
        '5AE' => 'E02004133',
        '5AF' => 'E02004133',
        '5AG' => 'E02004133',
        '5AH' => 'E02004133',
        '5AJ' => 'E02004133',
        '5AL' => 'E02004133',
        '5AN' => 'E02004133',
        '5AP' => 'E02004133',
        '5AQ' => 'E02004133',
        '5AR' => 'E02004133',
        '5AS' => 'E02004133',
        '5AT' => 'E02004133',
        '5AU' => 'E02004133',
        '5AW' => 'E02004133',
        '5AX' => 'E02004133',
        '5AY' => 'E02004133',
        '5AZ' => 'E02004133',
        '5BA' => 'E02004133',
        '5BB' => 'E02004133',
        '5BD' => 'E02004133',
        '5BE' => 'E02004133',
        '5BG' => 'E02004133',
        '5BH' => 'E02004133',
        '5BJ' => 'E02004133',
        '5BL' => 'E02004133',
        '5BN' => 'E02004133',
        '5BP' => 'E02004133',
        '5BQ' => 'E02004133',
        '5BR' => 'E02004133',
        '5BS' => 'E02004133',
        '5BT' => 'E02004133',
        '5BU' => 'E02004133',
        '5BW' => 'E02004133',
        '5BX' => 'E02004133',
        '5BY' => 'E02004133',
        '5BZ' => 'E02004133',
        '5DA' => 'E02004133',
        '5DB' => 'E02004133',
        '5DD' => 'E02004133',
        '5DE' => 'E02004133',
        '5DF' => 'E02004133',
        '5DG' => 'E02004133',
        '5DH' => 'E02004133',
        '5DJ' => 'E02004133',
        '5DL' => 'E02004133',
        '5DN' => 'E02004133',
        '5DP' => 'E02004133',
        '5DQ' => 'E02004133',
        '5DR' => 'E02004133',
        '5DS' => 'E02004133',
        '5DT' => 'E02004133',
        '5DU' => 'E02004133',
        '5DW' => 'E02004133',
        '5DX' => 'E02004133',
        '5DY' => 'E02004133',
        '5DZ' => 'E02004133',
        '5EA' => 'E02004133',
        '5EB' => 'E02004133',
        '5ED' => 'E02004133',
        '5EE' => 'E02004133',
        '5EF' => 'E02004133',
        '5EG' => 'E02004133',
        '5EH' => 'E02004133',
        '5EJ' => 'E02004133',
        '5EL' => 'E02004133',
        '5EN' => 'E02004133',
        '5EP' => 'E02004133',
        '5EQ' => 'E02004133',
        '5ER' => 'E02004133',
        '5ES' => 'E02004133',
        '5ET' => 'E02004133',
        '5EU' => 'E02004133',
        '5EW' => 'E02004133',
        '5EX' => 'E02004133',
        '5EY' => 'E02004133',
        '5EZ' => 'E02004133',
        '5FA' => 'E02004133',
        '5FB' => 'E02004133',
        '5FD' => 'E02004133',
        '5FE' => 'E02004133',
        '5FF' => 'E02004133',
        '5FG' => 'E02004133',
        '5FH' => 'E02004133',
        '5FJ' => 'E02004133',
        '5FL' => 'E02004133',
        '5FN' => 'E02004133',
        '5FP' => 'E02004133',
        '5FQ' => 'E02004133',
        '5FR' => 'E02004133',
        '5FS' => 'E02004133',
        '5FT' => 'E02004133',
        '5FU' => 'E02004133',
        '5FW' => 'E02004133',
        '5FX' => 'E02004133',
        '5FY' => 'E02004133',
        '5FZ' => 'E02004133',
        '5GA' => 'E02004133',
        '5GB' => 'E02004133',
        '5GD' => 'E02004133',
        '5GE' => 'E02004133',
        '5GF' => 'E02004133',
        '5GG' => 'E02004133',
        '5GH' => 'E02004133',
        '5GJ' => 'E02004133',
        '5GL' => 'E02004133',
        '5GN' => 'E02004133',
        '5GP' => 'E02004133',
        '5GQ' => 'E02004133',
        '5GR' => 'E02004133',
        '5GS' => 'E02004133',
        '5GT' => 'E02004133',
        '5GU' => 'E02004133',
        '5GX' => 'E02004133',
        '5GY' => 'E02004133',
        '5HA' => 'E02004133',
        '5HB' => 'E02004133',
        '5HD' => 'E02004133',
        '5HE' => 'E02004133',
        '5HF' => 'E02004133',
        '5HG' => 'E02004133',
        '5HH' => 'E02004133',
        '5HJ' => 'E02004133',
        '5HL' => 'E02004133',
        '5HN' => 'E02004133',
        '5HP' => 'E02004133',
        '5HQ' => 'E02004133',
        '5HR' => 'E02004133',
        '5HS' => 'E02004133',
        '5HT' => 'E02004133',
        '5HU' => 'E02004133',
        '5HW' => 'E02004133',
        '5HX' => 'E02004133',
        '5HY' => 'E02004133',
        '5HZ' => 'E02004133',
        '5JA' => 'E02004133',
        '5JB' => 'E02004133',
        '5JD' => 'E02004133',
        '5JE' => 'E02004133',
        '5JF' => 'E02004133',
        '5JG' => 'E02004133',
        '5JH' => 'E02004133',
        '5JJ' => 'E02004133',
        '5JL' => 'E02004133',
        '5JN' => 'E02004133',
        '5JP' => 'E02004133',
        '5JQ' => 'E02004133',
        '5JR' => 'E02004133',
        '5JS' => 'E02004133',
        '5JT' => 'E02004133',
        '5JU' => 'E02004133',
        '5JW' => 'E02004133',
        '5JX' => 'E02004133',
        '5JY' => 'E02004133',
        '5JZ' => 'E02004133',
        '5LA' => 'E02004133',
        '5LB' => 'E02004133',
        '5LD' => 'E02004133',
        '5LE' => 'E02004133',
        '5LF' => 'E02004133',
        '5LG' => 'E02004133',
        '5LH' => 'E02004133',
        '5LJ' => 'E02004133',
        '5LL' => 'E02004133',
        '5LN' => 'E02004133',
        '5LP' => 'E02004133',
        '5LQ' => 'E02004133',
        '5LR' => 'E02004133',
        '5LS' => 'E02004133',
        '5LT' => 'E02004133',
        '5LW' => 'E02004133',
        '5LX' => 'E02004133',
        '5LY' => 'E02004133',
        '5LZ' => 'E02004133',
        '5NA' => 'E02004133',
        '5NB' => 'E02004133',
        '5ND' => 'E02004133',
        '5NE' => 'E02004133',
        '5NG' => 'E02004133',
        '5NH' => 'E02004133',
        '5NJ' => 'E02004133',
        '5NL' => 'E02004133',
        '5NN' => 'E02004133',
        '5NP' => 'E02004133',
        '5NQ' => 'E02004133',
        '5NR' => 'E02004133',
        '5NS' => 'E02004133',
        '5NT' => 'E02004133',
        '5NU' => 'E02004133',
        '5NW' => 'E02004133',
        '5NX' => 'E02004133',
        '5NY' => 'E02004133',
        '5NZ' => 'E02004133',
        '5PA' => 'E02004133',
        '5PB' => 'E02004133',
        '5PD' => 'E02004133',
        '5PE' => 'E02004133',
        '5PF' => 'E02004133',
        '5PG' => 'E02004133',
        '5PH' => 'E02004133',
        '5PJ' => 'E02004133',
        '5PL' => 'E02004133',
        '5PN' => 'E02004133',
        '5PP' => 'E02004133',
        '5PQ' => 'E02004133',
        '5PR' => 'E02004133',
        '5PS' => 'E02004133',
        '5PT' => 'E02004133',
        '5PU' => 'E02004133',
        '5PW' => 'E02004133',
        '5PX' => 'E02004133',
        '5PY' => 'E02004133',
        '5PZ' => 'E02004133',
        '5QA' => 'E02004133',
        '5QB' => 'E02004133',
        '5QD' => 'E02004133',
        '5QE' => 'E02004133',
        '5QF' => 'E02004133',
        '5QG' => 'E02004133',
        '5QH' => 'E02004133',
        '5QJ' => 'E02004133',
        '5QL' => 'E02004133',
        '5QN' => 'E02004133',
        '5QP' => 'E02004133',
        '5QQ' => 'E02004133',
        '5QR' => 'E02004133',
        '5QS' => 'E02004133',
        '5QT' => 'E02004133',
        '5QU' => 'E02004133',
        '5QW' => 'E02004133',
        '5QX' => 'E02004133',
        '5QY' => 'E02004133',
        '5QZ' => 'E02004133',
        '5RA' => 'E02004133',
        '5RB' => 'E02004133',
        '5RD' => 'E02004133',
        '5RE' => 'E02004133',
        '5RF' => 'E02004133',
        '5RG' => 'E02004133',
        '5RH' => 'E02004133',
        '5RJ' => 'E02004133',
        '5RL' => 'E02004133',
        '5RN' => 'E02004133',
        '5RP' => 'E02004133',
        '5RQ' => 'E02004133',
        '5RR' => 'E02004133',
        '5RS' => 'E02004133',
        '5RT' => 'E02004133',
        '5RU' => 'E02004133',
        '5RW' => 'E02004133',
        '5RX' => 'E02004133',
        '5RY' => 'E02004133',
        '5RZ' => 'E02004133',
        '5SA' => 'E02004133',
        '5SB' => 'E02004133',
        '5SD' => 'E02004133',
        '5SE' => 'E02004133',
        '5SF' => 'E02004133',
        '5SG' => 'E02004133',
        '5SH' => 'E02004133',
        '5SJ' => 'E02004133',
        '5SL' => 'E02004135',
        '5SN' => 'E02004133',
        '5SP' => 'E02004133',
        '5SQ' => 'E02004133',
        '5SR' => 'E02004133',
        '5SS' => 'E02004133',
        '5ST' => 'E02004133',
        '5SU' => 'E02004135',
        '5SW' => 'E02004133',
        '5SX' => 'E02004133',
        '5SY' => 'E02004133',
        '5SZ' => 'E02004133',
        '5TA' => 'E02004135',
        '5TB' => 'E02004135',
        '5TD' => 'E02004133',
        '5TE' => 'E02004133',
        '5TF' => 'E02004135',
        '5TG' => 'E02004133',
        '5TH' => 'E02004133',
        '5TJ' => 'E02004133',
        '5TL' => 'E02004133',
        '5TN' => 'E02004133',
        '5TP' => 'E02004133',
        '5TQ' => 'E02004133',
        '5TR' => 'E02004133',
        '5TS' => 'E02004133',
        '5TT' => 'E02004133',
        '5TU' => 'E02004133',
        '5TW' => 'E02004133',
        '5TX' => 'E02004133',
        '5TY' => 'E02004133',
        '5TZ' => 'E02004133',
        '5UA' => 'E02004133',
        '5UB' => 'E02004133',
        '5UD' => 'E02004133',
        '5UE' => 'E02004133',
        '5UF' => 'E02004133',
        '5UG' => 'E02004133',
        '5UH' => 'E02004133',
        '5UJ' => 'E02004133',
        '5UL' => 'E02004133',
        '5UN' => 'E02004133',
        '5UP' => 'E02004133',
        '5UQ' => 'E02004133',
        '5UR' => 'E02004133',
        '5UT' => 'E02004133',
        '5UU' => 'E02004133',
        '5UW' => 'E02004273',
        '5UX' => 'E02004273',
        '5WB' => 'E02004133',
        '5WX' => 'E02004133',
        '5WY' => 'E02004133',
        '5WZ' => 'E02004133',
        '5XA' => 'E02004133',
        '5XB' => 'E02004133',
        '5XD' => 'E02004133',
        '5XE' => 'E02004133',
        '5XF' => 'E02004133',
        '5XG' => 'E02004133',
        '5XH' => 'E02004133',
        '5XJ' => 'E02004133',
        '5XL' => 'E02004133',
        '5XN' => 'E02004133',
        '5XP' => 'E02004133',
        '5XQ' => 'E02004133',
        '5XR' => 'E02004133',
        '5XS' => 'E02004133',
        '5XT' => 'E02004133',
        '5XW' => 'E02004133',
        '5YJ' => 'E02004133',
        '5YL' => 'E02004133',
        '5YN' => 'E02004133',
        '5YP' => 'E02004133',
        '5YR' => 'E02004133',
        '5YS' => 'E02004133',
        '5YT' => 'E02004133',
        '5YU' => 'E02004133',
        '5YW' => 'E02004133',
        '5YX' => 'E02004133',
        '5YY' => 'E02004133',
        '5ZN' => 'E02004133',
        '5ZQ' => 'E02004133',
        '5ZR' => 'E02004133',
        '5ZW' => 'E02004133',
        '6AA' => 'E02004135',
        '6AB' => 'E02004135',
        '6AD' => 'E02004135',
        '6AE' => 'E02004135',
        '6AF' => 'E02004135',
        '6AG' => 'E02004135',
        '6AH' => 'E02004135',
        '6AJ' => 'E02004135',
        '6AL' => 'E02004135',
        '6AN' => 'E02004135',
        '6AP' => 'E02004135',
        '6AQ' => 'E02004135',
        '6AR' => 'E02004135',
        '6AS' => 'E02004135',
        '6AT' => 'E02004135',
        '6AU' => 'E02004135',
        '6AW' => 'E02004135',
        '6AX' => 'E02004135',
        '6AY' => 'E02004135',
        '6AZ' => 'E02004135',
        '6BA' => 'E02004135',
        '6BB' => 'E02004135',
        '6BD' => 'E02004135',
        '6BE' => 'E02004135',
        '6BF' => 'E02004135',
        '6BG' => 'E02004135',
        '6BH' => 'E02004137',
        '6BJ' => 'E02004137',
        '6BL' => 'E02004137',
        '6BN' => 'E02004137',
        '6BP' => 'E02004137',
        '6BQ' => 'E02004135',
        '6BR' => 'E02004137',
        '6BS' => 'E02004137',
        '6BT' => 'E02004137',
        '6BU' => 'E02004137',
        '6BW' => 'E02004137',
        '6BX' => 'E02004137',
        '6BY' => 'E02004135',
        '6BZ' => 'E02004137',
        '6DA' => 'E02004137',
        '6DB' => 'E02004135',
        '6DD' => 'E02004135',
        '6DE' => 'E02004137',
        '6DF' => 'E02004137',
        '6DG' => 'E02004137',
        '6DH' => 'E02004137',
        '6DJ' => 'E02004137',
        '6DL' => 'E02004137',
        '6DN' => 'E02004135',
        '6DP' => 'E02004135',
        '6DQ' => 'E02004137',
        '6DR' => 'E02004135',
        '6DS' => 'E02004135',
        '6DT' => 'E02004135',
        '6DU' => 'E02004135',
        '6DX' => 'E02004135',
        '6DY' => 'E02004137',
        '6DZ' => 'E02004135',
        '6EA' => 'E02004135',
        '6EB' => 'E02004137',
        '6ED' => 'E02004137',
        '6EE' => 'E02004137',
        '6EF' => 'E02004137',
        '6EG' => 'E02004137',
        '6EH' => 'E02004137',
        '6EJ' => 'E02004137',
        '6EL' => 'E02004137',
        '6EP' => 'E02004135',
        '6EQ' => 'E02004137',
        '6ER' => 'E02004135',
        '6ES' => 'E02004135',
        '6ET' => 'E02004135',
        '6EU' => 'E02004135',
        '6EX' => 'E02004135',
        '6EY' => 'E02004135',
        '6EZ' => 'E02004135',
        '6HA' => 'E02004135',
        '6HB' => 'E02004135',
        '6HD' => 'E02004135',
        '6HE' => 'E02004135',
        '6HF' => 'E02004135',
        '6HG' => 'E02004138',
        '6HH' => 'E02004135',
        '6HJ' => 'E02004135',
        '6HL' => 'E02004135',
        '6HN' => 'E02004135',
        '6HP' => 'E02004135',
        '6HQ' => 'E02004135',
        '6HR' => 'E02004135',
        '6HS' => 'E02004135',
        '6HT' => 'E02004135',
        '6HU' => 'E02004135',
        '6HW' => 'E02004135',
        '6HX' => 'E02004135',
        '6HY' => 'E02004135',
        '6HZ' => 'E02004135',
        '6JA' => 'E02004137',
        '6JB' => 'E02004137',
        '6JD' => 'E02004137',
        '6JE' => 'E02004137',
        '6JF' => 'E02004137',
        '6JG' => 'E02004137',
        '6JH' => 'E02004137',
        '6JJ' => 'E02004137',
        '6JL' => 'E02004137',
        '6JN' => 'E02004137',
        '6JP' => 'E02004135',
        '6JQ' => 'E02004137',
        '6JR' => 'E02004135',
        '6JS' => 'E02004135',
        '6JT' => 'E02004135',
        '6JU' => 'E02004135',
        '6JW' => 'E02004137',
        '6JX' => 'E02004135',
        '6JY' => 'E02004135',
        '6JZ' => 'E02004135',
        '6LA' => 'E02004135',
        '6LB' => 'E02004135',
        '6LD' => 'E02004135',
        '6LE' => 'E02004135',
        '6LF' => 'E02004135',
        '6LG' => 'E02004135',
        '6LH' => 'E02004135',
        '6LJ' => 'E02004135',
        '6LL' => 'E02004135',
        '6LN' => 'E02004135',
        '6LP' => 'E02004135',
        '6LQ' => 'E02004135',
        '6LR' => 'E02004135',
        '6LS' => 'E02004135',
        '6LT' => 'E02004135',
        '6LU' => 'E02004135',
        '6LW' => 'E02004135',
        '6LX' => 'E02004135',
        '6LY' => 'E02004135',
        '6LZ' => 'E02004135',
        '6NA' => 'E02004135',
        '6NB' => 'E02004135',
        '6ND' => 'E02004135',
        '6NE' => 'E02004135',
        '6NF' => 'E02004135',
        '6NG' => 'E02004135',
        '6NH' => 'E02004135',
        '6NJ' => 'E02004135',
        '6NL' => 'E02004135',
        '6NN' => 'E02004135',
        '6NP' => 'E02004135',
        '6NQ' => 'E02004135',
        '6NR' => 'E02004135',
        '6NS' => 'E02004135',
        '6NT' => 'E02004135',
        '6NU' => 'E02004135',
        '6NW' => 'E02004135',
        '6NX' => 'E02004135',
        '6NY' => 'E02004135',
        '6NZ' => 'E02004135',
        '6PA' => 'E02004135',
        '6PB' => 'E02004135',
        '6PD' => 'E02004135',
        '6PE' => 'E02004135',
        '6PF' => 'E02004135',
        '6PG' => 'E02004135',
        '6PH' => 'E02004135',
        '6PJ' => 'E02004135',
        '6PL' => 'E02004135',
        '6PN' => 'E02004135',
        '6PP' => 'E02004135',
        '6PQ' => 'E02004135',
        '6PR' => 'E02004135',
        '6PS' => 'E02004135',
        '6PT' => 'E02004135',
        '6PU' => 'E02004135',
        '6PW' => 'E02004135',
        '6PX' => 'E02004135',
        '6PY' => 'E02004135',
        '6PZ' => 'E02004135',
        '6QA' => 'E02004135',
        '6QB' => 'E02004135',
        '6QD' => 'E02004135',
        '6QE' => 'E02004135',
        '6QF' => 'E02004135',
        '6QG' => 'E02004135',
        '6QH' => 'E02004135',
        '6QJ' => 'E02004135',
        '6QL' => 'E02004135',
        '6QN' => 'E02004135',
        '6QP' => 'E02004135',
        '6QQ' => 'E02004135',
        '6QR' => 'E02004135',
        '6QS' => 'E02004135',
        '6QT' => 'E02004135',
        '6QU' => 'E02004135',
        '6QW' => 'E02004135',
        '6QX' => 'E02004135',
        '6QY' => 'E02004135',
        '6QZ' => 'E02004135',
        '6RA' => 'E02004135',
        '6RB' => 'E02004135',
        '6RD' => 'E02004135',
        '6RE' => 'E02004135',
        '6RF' => 'E02004135',
        '6RG' => 'E02004135',
        '6RH' => 'E02004135',
        '6RJ' => 'E02004135',
        '6RL' => 'E02004135',
        '6RN' => 'E02004135',
        '6RP' => 'E02004135',
        '6RQ' => 'E02004135',
        '6RR' => 'E02004135',
        '6RS' => 'E02004135',
        '6RT' => 'E02004135',
        '6RU' => 'E02004135',
        '6RW' => 'E02004135',
        '6RX' => 'E02004135',
        '6RY' => 'E02004137',
        '6RZ' => 'E02004137',
        '6SA' => 'E02004135',
        '6SB' => 'E02004135',
        '6SD' => 'E02004135',
        '6SE' => 'E02004135',
        '6SF' => 'E02004137',
        '6SG' => 'E02004135',
        '6SH' => 'E02004135',
        '6SJ' => 'E02004135',
        '6SL' => 'E02004135',
        '6SN' => 'E02004135',
        '6SP' => 'E02004135',
        '6SQ' => 'E02004135',
        '6SR' => 'E02004135',
        '6SS' => 'E02004135',
        '6ST' => 'E02004135',
        '6SU' => 'E02004135',
        '6SW' => 'E02004135',
        '6SX' => 'E02004135',
        '6SY' => 'E02004135',
        '6SZ' => 'E02004135',
        '6TA' => 'E02004135',
        '6TB' => 'E02004135',
        '6TD' => 'E02004135',
        '6TE' => 'E02004135',
        '6TF' => 'E02004135',
        '6TG' => 'E02004135',
        '6TH' => 'E02004133',
        '6TJ' => 'E02004133',
        '6TN' => 'E02004135',
        '6TP' => 'E02004135',
        '6TQ' => 'E02004135',
        '6TR' => 'E02004135',
        '6TS' => 'E02004135',
        '6TT' => 'E02004135',
        '6TW' => 'E02004135',
        '6TZ' => 'E02004135',
        '6YN' => 'E02004135',
        '6YP' => 'E02004135',
        '6YR' => 'E02004135',
        '6YS' => 'E02004135',
        '6YT' => 'E02004135',
        '6YU' => 'E02004135',
        '6YW' => 'E02004135',
        '6YX' => 'E02004135',
        '6YY' => 'E02004135',
        '6ZZ' => 'E02004135',
        '7AA' => 'E02004129',
        '7AB' => 'E02004129',
        '7AD' => 'E02004129',
        '7AE' => 'E02004129',
        '7AF' => 'E02004129',
        '7AG' => 'E02004129',
        '7AH' => 'E02004129',
        '7AJ' => 'E02004129',
        '7AL' => 'E02004133',
        '7AN' => 'E02004135',
        '7AP' => 'E02004135',
        '7AQ' => 'E02004129',
        '7AR' => 'E02004133',
        '7AS' => 'E02004133',
        '7AT' => 'E02004133',
        '7AU' => 'E02004133',
        '7AW' => 'E02004129',
        '7AX' => 'E02004273',
        '7AY' => 'E02004273',
        '7AZ' => 'E02004133',
        '7BA' => 'E02004133',
        '7BB' => 'E02004133',
        '7BD' => 'E02004133',
        '7BE' => 'E02004133',
        '7BG' => 'E02004133',
        '7BH' => 'E02004133',
        '7BJ' => 'E02004133',
        '7BL' => 'E02004133',
        '7BN' => 'E02004133',
        '7BP' => 'E02004133',
        '7BQ' => 'E02004133',
        '7BR' => 'E02004133',
        '7BS' => 'E02004133',
        '7BT' => 'E02004129',
        '7BU' => 'E02004129',
        '7BW' => 'E02004133',
        '7BX' => 'E02004129',
        '7BY' => 'E02004129',
        '7BZ' => 'E02004135',
        '7DA' => 'E02004129',
        '7DB' => 'E02004129',
        '7DD' => 'E02004129',
        '7DE' => 'E02004129',
        '7DF' => 'E02004129',
        '7DG' => 'E02004129',
        '7DH' => 'E02004129',
        '7DJ' => 'E02004133',
        '7DL' => 'E02004135',
        '7DN' => 'E02004135',
        '7DP' => 'E02004135',
        '7DQ' => 'E02004129',
        '7DR' => 'E02004135',
        '7DS' => 'E02004135',
        '7DT' => 'E02004135',
        '7DU' => 'E02004135',
        '7DW' => 'E02004135',
        '7DX' => 'E02004135',
        '7DY' => 'E02004135',
        '7DZ' => 'E02004135',
        '7EA' => 'E02004135',
        '7EB' => 'E02004135',
        '7ED' => 'E02004135',
        '7EE' => 'E02004135',
        '7EF' => 'E02004135',
        '7EG' => 'E02004135',
        '7EH' => 'E02004135',
        '7EJ' => 'E02004135',
        '7EL' => 'E02004135',
        '7EN' => 'E02004135',
        '7EP' => 'E02004135',
        '7EQ' => 'E02004135',
        '7ER' => 'E02004135',
        '7ES' => 'E02004135',
        '7ET' => 'E02004135',
        '7EU' => 'E02004135',
        '7EW' => 'E02004135',
        '7EX' => 'E02004135',
        '7EY' => 'E02004135',
        '7EZ' => 'E02004135',
        '7HA' => 'E02004135',
        '7HB' => 'E02004135',
        '7HD' => 'E02004135',
        '7HE' => 'E02004135',
        '7HF' => 'E02004135',
        '7HG' => 'E02004135',
        '7HH' => 'E02004129',
        '7HJ' => 'E02004129',
        '7HL' => 'E02004129',
        '7HN' => 'E02004129',
        '7HP' => 'E02004135',
        '7HQ' => 'E02004129',
        '7HR' => 'E02004135',
        '7HS' => 'E02004135',
        '7HT' => 'E02004135',
        '7HU' => 'E02004135',
        '7HW' => 'E02004135',
        '7JD' => 'E02004133',
        '7JE' => 'E02004133',
        '7JF' => 'E02004133',
        '7JG' => 'E02004133',
        '7JH' => 'E02004133',
        '7JJ' => 'E02004133',
        '7JL' => 'E02004133',
        '7JN' => 'E02004133',
        '7JP' => 'E02004129',
        '7JR' => 'E02004129',
        '7JS' => 'E02004129',
        '7JT' => 'E02004129',
        '7JU' => 'E02004129',
        '7JW' => 'E02004129',
        '7JX' => 'E02004129',
        '7JY' => 'E02004129',
        '7JZ' => 'E02004129',
        '7LA' => 'E02004129',
        '7LB' => 'E02004133',
        '7LD' => 'E02004133',
        '7LE' => 'E02004133',
        '7LF' => 'E02004133',
        '7LG' => 'E02004133',
        '7LH' => 'E02004133',
        '7LL' => 'E02004133',
        '7LN' => 'E02004133',
        '7LP' => 'E02004133',
        '7LR' => 'E02004133',
        '7LS' => 'E02004133',
        '7LT' => 'E02004133',
        '7LU' => 'E02004133',
        '7LW' => 'E02004133',
        '7LX' => 'E02004133',
        '7LY' => 'E02004133',
        '7LZ' => 'E02004133',
        '7NA' => 'E02004133',
        '7NB' => 'E02004133',
        '7ND' => 'E02004133',
        '7NE' => 'E02004133',
        '7NF' => 'E02004133',
        '7NG' => 'E02004133',
        '7NJ' => 'E02004135',
        '7NN' => 'E02004135',
        '7NP' => 'E02004135',
        '7NQ' => 'E02004135',
        '7NR' => 'E02004135',
        '7NS' => 'E02004135',
        '7NT' => 'E02004135',
        '7NU' => 'E02004135',
        '7NW' => 'E02004135',
        '7NX' => 'E02004135',
        '7NY' => 'E02004135',
        '7NZ' => 'E02004135',
        '7PA' => 'E02004135',
        '7PB' => 'E02004135',
        '7PD' => 'E02004135',
        '7PE' => 'E02004135',
        '7PF' => 'E02004135',
        '7PG' => 'E02004135',
        '7PH' => 'E02004135',
        '7PJ' => 'E02004135',
        '7PL' => 'E02004135',
        '7PN' => 'E02004135',
        '7PP' => 'E02004135',
        '7PQ' => 'E02004135',
        '7PR' => 'E02004135',
        '7PS' => 'E02004135',
        '7PT' => 'E02004135',
        '7PU' => 'E02004135',
        '7PW' => 'E02004135',
        '7PX' => 'E02004135',
        '7PY' => 'E02004135',
        '7PZ' => 'E02004135',
        '7QA' => 'E02004135',
        '7QB' => 'E02004135',
        '7QD' => 'E02004135',
        '7QE' => 'E02004135',
        '7QF' => 'E02004135',
        '7QG' => 'E02004135',
        '7QH' => 'E02004135',
        '7QJ' => 'E02004135',
        '7QL' => 'E02004135',
        '7QN' => 'E02004135',
        '7QP' => 'E02004135',
        '7QQ' => 'E02004135',
        '7QR' => 'E02004135',
        '7QW' => 'E02004135',
        '7QZ' => 'E02004135',
        '7RA' => 'E02004135',
        '7RB' => 'E02004135',
        '7RD' => 'E02004135',
        '7RE' => 'E02004135',
        '7RF' => 'E02004135',
        '7RG' => 'E02004135',
        '7RJ' => 'E02004135',
        '7RL' => 'E02004135',
        '7RN' => 'E02004135',
        '7RP' => 'E02004135',
        '7RQ' => 'E02004135',
        '7RR' => 'E02004135',
        '7RS' => 'E02004135',
        '7RT' => 'E02004135',
        '7RU' => 'E02004135',
        '7RW' => 'E02004135',
        '7RX' => 'E02004135',
        '7RY' => 'E02004135',
        '7RZ' => 'E02004135',
        '7SA' => 'E02004135',
        '7SB' => 'E02004135',
        '7SD' => 'E02004135',
        '7SE' => 'E02004135',
        '7SF' => 'E02004135',
        '7SG' => 'E02004135',
        '7SH' => 'E02004135',
        '7SJ' => 'E02004135',
        '7SL' => 'E02004135',
        '7SN' => 'E02004135',
        '7SP' => 'E02004135',
        '7SQ' => 'E02004135',
        '7SR' => 'E02004135',
        '7SS' => 'E02004135',
        '7ST' => 'E02004135',
        '7SU' => 'E02004135',
        '7SW' => 'E02004135',
        '7SX' => 'E02004133',
        '7SY' => 'E02004133',
        '7SZ' => 'E02004135',
        '7TA' => 'E02004133',
        '7TB' => 'E02004129',
        '7TD' => 'E02004129',
        '7TE' => 'E02004129',
        '7TF' => 'E02004129',
        '7TG' => 'E02004129',
        '7TH' => 'E02004129',
        '7TJ' => 'E02004129',
        '7TL' => 'E02004129',
        '7TN' => 'E02004129',
        '7TP' => 'E02004129',
        '7TQ' => 'E02004129',
        '7TR' => 'E02004129',
        '7TS' => 'E02004129',
        '7TT' => 'E02004129',
        '7TU' => 'E02004129',
        '7TW' => 'E02004129',
        '7TX' => 'E02004129',
        '7TY' => 'E02004129',
        '7TZ' => 'E02004129',
        '7UA' => 'E02004129',
        '7UB' => 'E02006098',
        '7UD' => 'E02004129',
        '7UE' => 'E02004129',
        '7UF' => 'E02004129',
        '7UG' => 'E02004135',
        '7UH' => 'E02004135',
        '7UJ' => 'E02004133',
        '7UL' => 'E02004133',
        '7WA' => 'E02004133',
        '7WW' => 'E02004133',
        '7WX' => 'E02004133',
        '7WY' => 'E02004133',
        '7WZ' => 'E02004133',
        '7YD' => 'E02004133',
        '7YE' => 'E02004133',
        '7YF' => 'E02004133',
        '7YG' => 'E02004133',
        '7YH' => 'E02004133',
        '7YJ' => 'E02004133',
        '7YL' => 'E02004133',
        '7YN' => 'E02004133',
        '7YP' => 'E02004133',
        '7YQ' => 'E02004133',
        '7YR' => 'E02004133',
        '7YS' => 'E02004133',
        '7YT' => 'E02004135',
        '7YU' => 'E02004135',
        '7YW' => 'E02004133',
        '7YX' => 'E02004135',
        '7YY' => 'E02004135',
        '8AA' => 'E02004135',
        '8AB' => 'E02004135',
        '8AD' => 'E02004135',
        '8AE' => 'E02004135',
        '8AF' => 'E02004135',
        '8AG' => 'E02004135',
        '8AH' => 'E02004135',
        '8AJ' => 'E02004135',
        '8AP' => 'E02004135',
        '8AQ' => 'E02004135',
        '8AR' => 'E02004135',
        '8AS' => 'E02004135',
        '8AT' => 'E02004135',
        '8AU' => 'E02004135',
        '8AW' => 'E02004135',
        '8AX' => 'E02004135',
        '8AY' => 'E02004135',
        '8AZ' => 'E02004135',
        '8BA' => 'E02004135',
        '8BB' => 'E02004135',
        '8BD' => 'E02004135',
        '8BE' => 'E02004135',
        '8BG' => 'E02004135',
        '8BQ' => 'E02004135',
        '8DB' => 'E02004135',
        '8DD' => 'E02004135',
        '8JT' => 'E02004133',
        '8SR' => 'E02004135',
        '8SS' => 'E02004135',
        '8ST' => 'E02004135',
        '8SU' => 'E02004135',
        '8SX' => 'E02004135',
        '8SY' => 'E02004135',
        '8SZ' => 'E02004135',
        '8TA' => 'E02004135',
        '8TB' => 'E02004135',
        '8TD' => 'E02004135',
        '8TE' => 'E02004135',
        '8TJ' => 'E02004133',
        '8TN' => 'E02004133',
        '8TP' => 'E02004133',
        '8TQ' => 'E02004133',
        '8TR' => 'E02004135',
        '8TS' => 'E02004133',
        '8TT' => 'E02004133',
        '8TU' => 'E02004133',
        '8TW' => 'E02004133',
        '8WA' => 'E02004133',
        '8WB' => 'E02004133',
        '8YN' => 'E02004135',
        '8YU' => 'E02004133',
        '8YW' => 'E02004135',
        '8YX' => 'E02004135',
        '8YY' => 'E02004133',
        '9AA' => 'E02004133',
        '9AB' => 'E02004133',
        '9AD' => 'E02004133',
        '9AE' => 'E02004133',
        '9AF' => 'E02004133',
        '9AG' => 'E02004133',
        '9AH' => 'E02004133',
        '9AJ' => 'E02004133',
        '9AL' => 'E02004133',
        '9AN' => 'E02004133',
        '9AP' => 'E02004133',
        '9AQ' => 'E02004133',
        '9AR' => 'E02004133',
        '9AS' => 'E02004133',
        '9AT' => 'E02004133',
        '9AU' => 'E02004133',
        '9AW' => 'E02004133',
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
