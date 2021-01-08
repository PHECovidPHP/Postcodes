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
final class KT2
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '2TW' => 'E02006346',
        '5AA' => 'E02000601',
        '5AB' => 'E02000601',
        '5AD' => 'E02000601',
        '5AE' => 'E02000601',
        '5AF' => 'E02000601',
        '5AG' => 'E02000601',
        '5AH' => 'E02000601',
        '5AJ' => 'E02000601',
        '5AL' => 'E02000601',
        '5AN' => 'E02000601',
        '5AP' => 'E02000601',
        '5AQ' => 'E02000601',
        '5AR' => 'E02000601',
        '5AS' => 'E02000601',
        '5AT' => 'E02000601',
        '5AU' => 'E02000601',
        '5AW' => 'E02000601',
        '5AX' => 'E02000601',
        '5AY' => 'E02000601',
        '5AZ' => 'E02000601',
        '5BA' => 'E02000601',
        '5BB' => 'E02000601',
        '5BD' => 'E02000598',
        '5BE' => 'E02000598',
        '5BF' => 'E02000601',
        '5BG' => 'E02000601',
        '5BH' => 'E02000598',
        '5BJ' => 'E02000601',
        '5BL' => 'E02000602',
        '5BN' => 'E02000602',
        '5BP' => 'E02000601',
        '5BQ' => 'E02000598',
        '5BS' => 'E02000601',
        '5BT' => 'E02000601',
        '5BU' => 'E02000601',
        '5BW' => 'E02000601',
        '5BX' => 'E02000601',
        '5BY' => 'E02000601',
        '5BZ' => 'E02000601',
        '5DA' => 'E02000598',
        '5DB' => 'E02000598',
        '5DD' => 'E02000601',
        '5DE' => 'E02000601',
        '5DF' => 'E02000601',
        '5DG' => 'E02000601',
        '5DH' => 'E02000598',
        '5DJ' => 'E02000598',
        '5DL' => 'E02000598',
        '5DN' => 'E02000598',
        '5DP' => 'E02000598',
        '5DQ' => 'E02000598',
        '5DR' => 'E02000598',
        '5DS' => 'E02000601',
        '5DT' => 'E02000601',
        '5DU' => 'E02000606',
        '5DW' => 'E02000598',
        '5DX' => 'E02000602',
        '5DY' => 'E02000601',
        '5DZ' => 'E02000598',
        '5EA' => 'E02000602',
        '5EB' => 'E02000606',
        '5ED' => 'E02000601',
        '5EE' => 'E02000601',
        '5EF' => 'E02000601',
        '5EG' => 'E02000602',
        '5EH' => 'E02000601',
        '5EJ' => 'E02000601',
        '5EL' => 'E02000601',
        '5EN' => 'E02000601',
        '5EP' => 'E02000601',
        '5EQ' => 'E02000598',
        '5ER' => 'E02000602',
        '5ES' => 'E02000601',
        '5ET' => 'E02000601',
        '5EU' => 'E02000601',
        '5EW' => 'E02000601',
        '5EX' => 'E02000602',
        '5EY' => 'E02000601',
        '5EZ' => 'E02000601',
        '5FA' => 'E02000795',
        '5FB' => 'E02000601',
        '5FD' => 'E02000601',
        '5FE' => 'E02000601',
        '5FF' => 'E02000601',
        '5FG' => 'E02000601',
        '5FH' => 'E02000601',
        '5FJ' => 'E02000601',
        '5FL' => 'E02000601',
        '5FN' => 'E02000601',
        '5FP' => 'E02000601',
        '5FQ' => 'E02000601',
        '5FR' => 'E02000601',
        '5FS' => 'E02000600',
        '5FT' => 'E02000601',
        '5FU' => 'E02000601',
        '5FW' => 'E02000601',
        '5FX' => 'E02000601',
        '5FY' => 'E02000601',
        '5GA' => 'E02000598',
        '5GB' => 'E02000598',
        '5GD' => 'E02000598',
        '5GE' => 'E02000598',
        '5GF' => 'E02000598',
        '5GG' => 'E02000598',
        '5GH' => 'E02000598',
        '5GJ' => 'E02000795',
        '5GL' => 'E02000598',
        '5GN' => 'E02000598',
        '5GP' => 'E02000598',
        '5GQ' => 'E02000598',
        '5GR' => 'E02000598',
        '5GS' => 'E02000598',
        '5GT' => 'E02000598',
        '5GU' => 'E02000598',
        '5GW' => 'E02000598',
        '5GX' => 'E02000598',
        '5HA' => 'E02000601',
        '5HB' => 'E02000601',
        '5HD' => 'E02000598',
        '5HE' => 'E02000598',
        '5HF' => 'E02000598',
        '5HG' => 'E02000598',
        '5HH' => 'E02000598',
        '5HJ' => 'E02000598',
        '5HL' => 'E02000606',
        '5HN' => 'E02000598',
        '5HP' => 'E02000601',
        '5HQ' => 'E02000598',
        '5HR' => 'E02000601',
        '5HS' => 'E02000601',
        '5HT' => 'E02000601',
        '5HU' => 'E02000601',
        '5HW' => 'E02000598',
        '5HX' => 'E02000600',
        '5HY' => 'E02000601',
        '5JA' => 'E02000601',
        '5JB' => 'E02000601',
        '5JD' => 'E02000601',
        '5JE' => 'E02000601',
        '5JF' => 'E02000601',
        '5JG' => 'E02000601',
        '5JH' => 'E02000600',
        '5JJ' => 'E02000598',
        '5JL' => 'E02000600',
        '5JN' => 'E02000795',
        '5JP' => 'E02000598',
        '5JQ' => 'E02000600',
        '5JR' => 'E02000600',
        '5JS' => 'E02000600',
        '5JT' => 'E02000600',
        '5JU' => 'E02000600',
        '5JX' => 'E02000600',
        '5JY' => 'E02000600',
        '5JZ' => 'E02000598',
        '5LA' => 'E02000598',
        '5LB' => 'E02000598',
        '5LD' => 'E02000598',
        '5LE' => 'E02000600',
        '5LF' => 'E02000598',
        '5LG' => 'E02000598',
        '5LH' => 'E02000598',
        '5LJ' => 'E02000602',
        '5LL' => 'E02000598',
        '5LN' => 'E02000600',
        '5LP' => 'E02000598',
        '5LQ' => 'E02000601',
        '5LR' => 'E02000598',
        '5LS' => 'E02000598',
        '5LT' => 'E02000598',
        '5LU' => 'E02000598',
        '5LW' => 'E02000598',
        '5LX' => 'E02000598',
        '5LY' => 'E02000598',
        '5LZ' => 'E02000598',
        '5NA' => 'E02000598',
        '5NB' => 'E02000598',
        '5ND' => 'E02000601',
        '5NE' => 'E02000598',
        '5NF' => 'E02000598',
        '5NG' => 'E02000598',
        '5NH' => 'E02000598',
        '5NJ' => 'E02000598',
        '5NL' => 'E02000598',
        '5NN' => 'E02000598',
        '5NP' => 'E02000598',
        '5NQ' => 'E02000598',
        '5NR' => 'E02000598',
        '5NS' => 'E02000598',
        '5NT' => 'E02000598',
        '5NU' => 'E02000598',
        '5NW' => 'E02000598',
        '5NX' => 'E02000795',
        '5NY' => 'E02000598',
        '5NZ' => 'E02000601',
        '5PA' => 'E02000598',
        '5PB' => 'E02000795',
        '5PD' => 'E02000795',
        '5PE' => 'E02000598',
        '5PF' => 'E02000598',
        '5PG' => 'E02000795',
        '5PH' => 'E02000602',
        '5PJ' => 'E02000598',
        '5PL' => 'E02000598',
        '5PN' => 'E02000598',
        '5PP' => 'E02000598',
        '5PQ' => 'E02000795',
        '5PR' => 'E02000598',
        '5PS' => 'E02000598',
        '5PT' => 'E02000598',
        '5PU' => 'E02000795',
        '5PW' => 'E02000598',
        '5PX' => 'E02000795',
        '5PY' => 'E02000795',
        '5PZ' => 'E02000598',
        '5QA' => 'E02000598',
        '5QB' => 'E02000598',
        '5QD' => 'E02000598',
        '5QE' => 'E02000598',
        '5QF' => 'E02000598',
        '5QG' => 'E02000598',
        '5QH' => 'E02000598',
        '5QJ' => 'E02000598',
        '5QL' => 'E02000598',
        '5QN' => 'E02000598',
        '5QP' => 'E02000598',
        '5QQ' => 'E02000598',
        '5QR' => 'E02000598',
        '5QS' => 'E02000598',
        '5QU' => 'E02000795',
        '5QW' => 'E02000602',
        '5QX' => 'E02000795',
        '5QY' => 'E02000598',
        '5QZ' => 'E02000598',
        '5RA' => 'E02000598',
        '5RB' => 'E02000598',
        '5RD' => 'E02000598',
        '5RE' => 'E02000598',
        '5RF' => 'E02000598',
        '5RG' => 'E02000598',
        '5RH' => 'E02000598',
        '5RJ' => 'E02000598',
        '5RL' => 'E02000598',
        '5RN' => 'E02000598',
        '5RP' => 'E02000598',
        '5RQ' => 'E02000598',
        '5RR' => 'E02000598',
        '5RS' => 'E02000598',
        '5RT' => 'E02000598',
        '5RU' => 'E02000598',
        '5RW' => 'E02000598',
        '5RX' => 'E02000598',
        '5RY' => 'E02000598',
        '5RZ' => 'E02000598',
        '5SA' => 'E02000598',
        '5SB' => 'E02000598',
        '5SD' => 'E02000598',
        '5SE' => 'E02000598',
        '5SF' => 'E02000598',
        '5SG' => 'E02000598',
        '5SH' => 'E02000600',
        '5SJ' => 'E02000598',
        '5SL' => 'E02000598',
        '5SN' => 'E02000601',
        '5SP' => 'E02000601',
        '5SQ' => 'E02000598',
        '5SR' => 'E02000601',
        '5SS' => 'E02000601',
        '5ST' => 'E02000601',
        '5SU' => 'E02000598',
        '5SW' => 'E02000601',
        '5SX' => 'E02000601',
        '5SY' => 'E02000601',
        '5SZ' => 'E02000601',
        '5TA' => 'E02000601',
        '5TB' => 'E02000601',
        '5TD' => 'E02000598',
        '5TE' => 'E02000601',
        '5TF' => 'E02000601',
        '5TG' => 'E02000601',
        '5TH' => 'E02000601',
        '5TJ' => 'E02000601',
        '5TL' => 'E02000601',
        '5TN' => 'E02000601',
        '5TP' => 'E02000598',
        '5TQ' => 'E02000601',
        '5TR' => 'E02000598',
        '5TS' => 'E02000598',
        '5TT' => 'E02000601',
        '5TU' => 'E02000600',
        '5TW' => 'E02000598',
        '5TX' => 'E02000598',
        '5TY' => 'E02000600',
        '5TZ' => 'E02000598',
        '5UA' => 'E02000601',
        '5UB' => 'E02000601',
        '5UD' => 'E02000601',
        '5UE' => 'E02000601',
        '5UF' => 'E02000600',
        '5UG' => 'E02000601',
        '5UH' => 'E02000601',
        '5UJ' => 'E02000598',
        '5UL' => 'E02000601',
        '5UN' => 'E02000601',
        '5UP' => 'E02000601',
        '5UQ' => 'E02000602',
        '5UR' => 'E02000601',
        '5US' => 'E02000601',
        '5UT' => 'E02000601',
        '5UU' => 'E02000601',
        '5UW' => 'E02000598',
        '5UX' => 'E02000601',
        '5UY' => 'E02000601',
        '5UZ' => 'E02000601',
        '5WA' => 'E02000602',
        '5WB' => 'E02000602',
        '5WD' => 'E02000602',
        '5WE' => 'E02000602',
        '5WF' => 'E02000602',
        '5WG' => 'E02000602',
        '5WH' => 'E02000602',
        '5WJ' => 'E02000602',
        '5WL' => 'E02000602',
        '5WN' => 'E02000602',
        '5WP' => 'E02000602',
        '5WQ' => 'E02000602',
        '5WR' => 'E02000602',
        '5WS' => 'E02000602',
        '5WT' => 'E02000602',
        '5WU' => 'E02000602',
        '5WW' => 'E02000602',
        '5WX' => 'E02000602',
        '5WY' => 'E02000602',
        '5WZ' => 'E02000602',
        '5XA' => 'E02000602',
        '5XB' => 'E02000602',
        '5XD' => 'E02000602',
        '5XE' => 'E02000602',
        '5XF' => 'E02000602',
        '5XG' => 'E02000602',
        '5XH' => 'E02000602',
        '5XJ' => 'E02000602',
        '5XL' => 'E02000602',
        '5XN' => 'E02000602',
        '5XP' => 'E02000602',
        '5XQ' => 'E02000602',
        '5XR' => 'E02000602',
        '5XS' => 'E02000602',
        '5XT' => 'E02000602',
        '5XU' => 'E02000598',
        '5YA' => 'E02000602',
        '5YB' => 'E02000598',
        '5YD' => 'E02000598',
        '5YE' => 'E02000602',
        '5YF' => 'E02000602',
        '5YG' => 'E02000602',
        '5YH' => 'E02000602',
        '5YJ' => 'E02000602',
        '5YL' => 'E02000598',
        '5YN' => 'E02000598',
        '5YP' => 'E02000601',
        '5YQ' => 'E02000602',
        '5YR' => 'E02000602',
        '5YS' => 'E02000602',
        '5YT' => 'E02000602',
        '5YU' => 'E02000598',
        '5YW' => 'E02000602',
        '5YX' => 'E02000602',
        '5YY' => 'E02000602',
        '5YZ' => 'E02000602',
        '5ZB' => 'E02000598',
        '5ZD' => 'E02000602',
        '5ZE' => 'E02000602',
        '5ZF' => 'E02000602',
        '5ZY' => 'E02000602',
        '6AA' => 'E02000601',
        '6AB' => 'E02000601',
        '6AD' => 'E02000601',
        '6AE' => 'E02000601',
        '6AF' => 'E02000601',
        '6AG' => 'E02000601',
        '6AH' => 'E02000601',
        '6AJ' => 'E02000601',
        '6AL' => 'E02000601',
        '6AN' => 'E02000602',
        '6AP' => 'E02000600',
        '6AQ' => 'E02000601',
        '6AR' => 'E02000600',
        '6AS' => 'E02000600',
        '6AT' => 'E02000600',
        '6AU' => 'E02000600',
        '6AW' => 'E02000600',
        '6AX' => 'E02000600',
        '6AY' => 'E02000600',
        '6AZ' => 'E02000600',
        '6BA' => 'E02000600',
        '6BB' => 'E02000601',
        '6BD' => 'E02000600',
        '6BE' => 'E02000600',
        '6BF' => 'E02000601',
        '6BG' => 'E02000600',
        '6BH' => 'E02000600',
        '6BJ' => 'E02000606',
        '6BL' => 'E02000600',
        '6BN' => 'E02000600',
        '6BP' => 'E02000600',
        '6BQ' => 'E02000600',
        '6BS' => 'E02000602',
        '6BT' => 'E02000602',
        '6BU' => 'E02000600',
        '6BW' => 'E02000600',
        '6BX' => 'E02000600',
        '6BY' => 'E02000600',
        '6BZ' => 'E02000601',
        '6DA' => 'E02000601',
        '6DB' => 'E02000600',
        '6DD' => 'E02000600',
        '6DE' => 'E02000600',
        '6DF' => 'E02000601',
        '6DG' => 'E02000601',
        '6DH' => 'E02000600',
        '6DJ' => 'E02000600',
        '6DL' => 'E02000601',
        '6DN' => 'E02000601',
        '6DP' => 'E02000601',
        '6DQ' => 'E02000600',
        '6DR' => 'E02000601',
        '6DS' => 'E02000602',
        '6DT' => 'E02000601',
        '6DU' => 'E02000601',
        '6DW' => 'E02000600',
        '6DX' => 'E02000601',
        '6DY' => 'E02000601',
        '6DZ' => 'E02000601',
        '6EA' => 'E02000601',
        '6EB' => 'E02000601',
        '6ED' => 'E02000601',
        '6EE' => 'E02000601',
        '6EF' => 'E02000601',
        '6EG' => 'E02000601',
        '6EH' => 'E02000601',
        '6EJ' => 'E02000601',
        '6EL' => 'E02000601',
        '6EN' => 'E02000601',
        '6EP' => 'E02000601',
        '6EQ' => 'E02000601',
        '6ER' => 'E02000601',
        '6ES' => 'E02000601',
        '6ET' => 'E02000601',
        '6EU' => 'E02000600',
        '6EW' => 'E02000601',
        '6EX' => 'E02000600',
        '6EY' => 'E02000600',
        '6EZ' => 'E02000600',
        '6FA' => 'E02000602',
        '6FB' => 'E02000602',
        '6FD' => 'E02000602',
        '6FE' => 'E02000601',
        '6FF' => 'E02000601',
        '6FG' => 'E02000600',
        '6FQ' => 'E02000602',
        '6FZ' => 'E02000601',
        '6GA' => 'E02000602',
        '6GW' => 'E02000602',
        '6GX' => 'E02000601',
        '6HA' => 'E02000601',
        '6HB' => 'E02000601',
        '6HD' => 'E02000600',
        '6HE' => 'E02000600',
        '6HF' => 'E02000600',
        '6HG' => 'E02000600',
        '6HH' => 'E02000601',
        '6HJ' => 'E02000601',
        '6HL' => 'E02000601',
        '6HN' => 'E02000601',
        '6HP' => 'E02000601',
        '6HQ' => 'E02000600',
        '6HR' => 'E02000601',
        '6HS' => 'E02000601',
        '6HT' => 'E02000601',
        '6HU' => 'E02000601',
        '6HW' => 'E02000601',
        '6HX' => 'E02000601',
        '6HY' => 'E02000600',
        '6HZ' => 'E02000601',
        '6JA' => 'E02000601',
        '6JB' => 'E02000601',
        '6JD' => 'E02000601',
        '6JE' => 'E02000601',
        '6JF' => 'E02000601',
        '6JG' => 'E02000601',
        '6JH' => 'E02000601',
        '6JJ' => 'E02000601',
        '6JL' => 'E02000601',
        '6JN' => 'E02000601',
        '6JP' => 'E02000601',
        '6JQ' => 'E02000601',
        '6JR' => 'E02000601',
        '6JS' => 'E02000601',
        '6JT' => 'E02000601',
        '6JU' => 'E02000601',
        '6JW' => 'E02000601',
        '6JX' => 'E02000601',
        '6JY' => 'E02000601',
        '6JZ' => 'E02000601',
        '6LA' => 'E02000601',
        '6LB' => 'E02000602',
        '6LD' => 'E02000602',
        '6LE' => 'E02000601',
        '6LF' => 'E02000601',
        '6LG' => 'E02000601',
        '6LH' => 'E02000601',
        '6LJ' => 'E02000601',
        '6LL' => 'E02000601',
        '6LN' => 'E02000601',
        '6LP' => 'E02000601',
        '6LQ' => 'E02000601',
        '6LR' => 'E02000601',
        '6LS' => 'E02000601',
        '6LT' => 'E02000601',
        '6LU' => 'E02000601',
        '6LW' => 'E02000601',
        '6LX' => 'E02000601',
        '6LY' => 'E02000602',
        '6LZ' => 'E02000601',
        '6NA' => 'E02000602',
        '6NB' => 'E02000602',
        '6ND' => 'E02000602',
        '6NE' => 'E02000601',
        '6NF' => 'E02000602',
        '6NG' => 'E02000602',
        '6NH' => 'E02000602',
        '6NJ' => 'E02000602',
        '6NL' => 'E02000602',
        '6NP' => 'E02000602',
        '6NQ' => 'E02000602',
        '6NR' => 'E02000602',
        '6NS' => 'E02000602',
        '6NU' => 'E02000602',
        '6NW' => 'E02000602',
        '6NX' => 'E02000602',
        '6NY' => 'E02000602',
        '6NZ' => 'E02000602',
        '6PA' => 'E02000602',
        '6PD' => 'E02000602',
        '6PE' => 'E02000602',
        '6PF' => 'E02000600',
        '6PG' => 'E02000600',
        '6PH' => 'E02000600',
        '6PJ' => 'E02000601',
        '6PL' => 'E02000601',
        '6PN' => 'E02000601',
        '6PP' => 'E02000600',
        '6PQ' => 'E02000600',
        '6PR' => 'E02000600',
        '6PS' => 'E02000602',
        '6PT' => 'E02000602',
        '6PW' => 'E02000600',
        '6PX' => 'E02000602',
        '6PY' => 'E02000602',
        '6PZ' => 'E02000600',
        '6QA' => 'E02000602',
        '6QB' => 'E02000602',
        '6QD' => 'E02000606',
        '6QE' => 'E02000606',
        '6QF' => 'E02000606',
        '6QG' => 'E02000606',
        '6QH' => 'E02000606',
        '6QJ' => 'E02000602',
        '6QL' => 'E02000602',
        '6QN' => 'E02000602',
        '6QP' => 'E02000600',
        '6QQ' => 'E02000602',
        '6QR' => 'E02000600',
        '6QS' => 'E02000602',
        '6QT' => 'E02000602',
        '6QU' => 'E02000602',
        '6QW' => 'E02000602',
        '6QX' => 'E02000602',
        '6QY' => 'E02000602',
        '6QZ' => 'E02000602',
        '6RA' => 'E02000602',
        '6RB' => 'E02000602',
        '6RD' => 'E02000606',
        '6RE' => 'E02000606',
        '6RF' => 'E02000606',
        '6RG' => 'E02000606',
        '6RH' => 'E02000606',
        '6RJ' => 'E02000606',
        '6RL' => 'E02000602',
        '6RN' => 'E02000606',
        '6RP' => 'E02000602',
        '6RQ' => 'E02000606',
        '6RR' => 'E02000602',
        '6RS' => 'E02000602',
        '6RT' => 'E02000602',
        '6RU' => 'E02000602',
        '6RW' => 'E02000602',
        '6RX' => 'E02000602',
        '6RY' => 'E02000602',
        '6RZ' => 'E02000602',
        '6SA' => 'E02000600',
        '6SB' => 'E02000600',
        '6SD' => 'E02000600',
        '6SE' => 'E02000600',
        '6SF' => 'E02000600',
        '6SG' => 'E02000600',
        '6SH' => 'E02000600',
        '6SJ' => 'E02000600',
        '6SL' => 'E02000600',
        '6SN' => 'E02000606',
        '6SQ' => 'E02000600',
        '6SR' => 'E02000602',
        '6SS' => 'E02000602',
        '6ST' => 'E02000606',
        '6SU' => 'E02000606',
        '6SW' => 'E02000606',
        '6SX' => 'E02000602',
        '6SZ' => 'E02000606',
        '6TA' => 'E02000600',
        '6TE' => 'E02000606',
        '6TH' => 'E02000602',
        '6TJ' => 'E02000606',
        '6TL' => 'E02000602',
        '6TN' => 'E02000602',
        '6TQ' => 'E02000606',
        '6WA' => 'E02000602',
        '6WB' => 'E02000601',
        '6WD' => 'E02000602',
        '6WE' => 'E02000602',
        '6WF' => 'E02000602',
        '6WG' => 'E02000601',
        '6WH' => 'E02000602',
        '6WJ' => 'E02000601',
        '6WL' => 'E02000602',
        '6WN' => 'E02000601',
        '6WP' => 'E02000601',
        '6WQ' => 'E02000601',
        '6WR' => 'E02000601',
        '6WS' => 'E02000601',
        '6WT' => 'E02000602',
        '6WU' => 'E02000602',
        '6WW' => 'E02000602',
        '6WX' => 'E02000602',
        '6WY' => 'E02000602',
        '6WZ' => 'E02000602',
        '6XA' => 'E02000602',
        '6XE' => 'E02000602',
        '6XF' => 'E02000602',
        '6XG' => 'E02000602',
        '6XP' => 'E02000602',
        '6XQ' => 'E02000602',
        '6XT' => 'E02000602',
        '6XW' => 'E02000602',
        '6YA' => 'E02000602',
        '6YB' => 'E02000602',
        '6YD' => 'E02000601',
        '6YE' => 'E02000602',
        '6YF' => 'E02000602',
        '6YG' => 'E02000602',
        '6YH' => 'E02000602',
        '6YJ' => 'E02000602',
        '6YL' => 'E02000601',
        '6YN' => 'E02000602',
        '6YP' => 'E02000601',
        '6YQ' => 'E02000602',
        '6YR' => 'E02000602',
        '6YS' => 'E02000602',
        '6YT' => 'E02000602',
        '6YU' => 'E02000601',
        '6YW' => 'E02000602',
        '6YX' => 'E02000601',
        '6YY' => 'E02000601',
        '6YZ' => 'E02000602',
        '6ZR' => 'E02000602',
        '7AA' => 'E02000602',
        '7AB' => 'E02000602',
        '7AD' => 'E02000602',
        '7AE' => 'E02000602',
        '7AF' => 'E02000602',
        '7AG' => 'E02000602',
        '7AH' => 'E02000600',
        '7AJ' => 'E02000600',
        '7AL' => 'E02000600',
        '7AN' => 'E02000600',
        '7AP' => 'E02000600',
        '7AQ' => 'E02000602',
        '7AR' => 'E02000602',
        '7AS' => 'E02000600',
        '7AT' => 'E02000602',
        '7AU' => 'E02000600',
        '7AW' => 'E02000600',
        '7AX' => 'E02000600',
        '7AY' => 'E02000600',
        '7AZ' => 'E02000600',
        '7BA' => 'E02000600',
        '7BB' => 'E02000600',
        '7BD' => 'E02000600',
        '7BE' => 'E02000600',
        '7BF' => 'E02000599',
        '7BG' => 'E02000603',
        '7BH' => 'E02000600',
        '7BJ' => 'E02000600',
        '7BL' => 'E02000600',
        '7BN' => 'E02000600',
        '7BP' => 'E02000600',
        '7BQ' => 'E02000600',
        '7BS' => 'E02000600',
        '7BT' => 'E02000600',
        '7BU' => 'E02000600',
        '7BW' => 'E02000600',
        '7BX' => 'E02000603',
        '7BY' => 'E02000603',
        '7BZ' => 'E02000599',
        '7DA' => 'E02000599',
        '7DB' => 'E02000599',
        '7DD' => 'E02000599',
        '7DE' => 'E02000599',
        '7DF' => 'E02000599',
        '7DG' => 'E02000599',
        '7DH' => 'E02000599',
        '7DJ' => 'E02000599',
        '7DL' => 'E02000599',
        '7DN' => 'E02000599',
        '7DP' => 'E02000599',
        '7DQ' => 'E02000599',
        '7DR' => 'E02000600',
        '7DS' => 'E02000599',
        '7DT' => 'E02000599',
        '7DU' => 'E02000599',
        '7DX' => 'E02000603',
        '7DY' => 'E02000599',
        '7DZ' => 'E02000599',
        '7EA' => 'E02000599',
        '7EB' => 'E02000599',
        '7ED' => 'E02000599',
        '7EE' => 'E02000599',
        '7EF' => 'E02000599',
        '7EG' => 'E02000599',
        '7EH' => 'E02000599',
        '7EJ' => 'E02000599',
        '7EL' => 'E02000600',
        '7EN' => 'E02000603',
        '7EP' => 'E02000599',
        '7EQ' => 'E02000599',
        '7ER' => 'E02000600',
        '7ES' => 'E02000599',
        '7ET' => 'E02000599',
        '7EU' => 'E02000599',
        '7EW' => 'E02000600',
        '7EX' => 'E02000599',
        '7EY' => 'E02000599',
        '7EZ' => 'E02000599',
        '7FA' => 'E02000602',
        '7FB' => 'E02000602',
        '7FD' => 'E02000602',
        '7FE' => 'E02000602',
        '7HA' => 'E02000599',
        '7HB' => 'E02000599',
        '7HD' => 'E02000599',
        '7HE' => 'E02000599',
        '7HF' => 'E02000599',
        '7HG' => 'E02000599',
        '7HH' => 'E02000599',
        '7HJ' => 'E02000599',
        '7HL' => 'E02000602',
        '7HN' => 'E02000599',
        '7HP' => 'E02000599',
        '7HQ' => 'E02000599',
        '7HR' => 'E02000599',
        '7HS' => 'E02000599',
        '7HT' => 'E02000599',
        '7HU' => 'E02000599',
        '7HW' => 'E02000599',
        '7HX' => 'E02000599',
        '7HY' => 'E02000599',
        '7HZ' => 'E02000599',
        '7JA' => 'E02000599',
        '7JB' => 'E02000599',
        '7JD' => 'E02000599',
        '7JE' => 'E02000600',
        '7JF' => 'E02000599',
        '7JG' => 'E02000600',
        '7JH' => 'E02000600',
        '7JJ' => 'E02000600',
        '7JL' => 'E02000600',
        '7JN' => 'E02000599',
        '7JP' => 'E02000599',
        '7JQ' => 'E02000600',
        '7JR' => 'E02000599',
        '7JS' => 'E02000599',
        '7JT' => 'E02000599',
        '7JU' => 'E02000599',
        '7JW' => 'E02000599',
        '7JX' => 'E02000599',
        '7JY' => 'E02000599',
        '7JZ' => 'E02000599',
        '7LA' => 'E02000599',
        '7LB' => 'E02000599',
        '7LD' => 'E02000599',
        '7LE' => 'E02000600',
        '7LF' => 'E02000599',
        '7LG' => 'E02000600',
        '7LH' => 'E02000600',
        '7LJ' => 'E02000600',
        '7LL' => 'E02000600',
        '7LN' => 'E02000599',
        '7LP' => 'E02000599',
        '7LQ' => 'E02000600',
        '7LR' => 'E02000795',
        '7LS' => 'E02000599',
        '7LT' => 'E02000599',
        '7LU' => 'E02000599',
        '7LW' => 'E02000602',
        '7LX' => 'E02000599',
        '7LY' => 'E02000599',
        '7LZ' => 'E02000599',
        '7NA' => 'E02000599',
        '7NB' => 'E02000599',
        '7NE' => 'E02000599',
        '7NF' => 'E02000599',
        '7NG' => 'E02000599',
        '7NH' => 'E02000600',
        '7NJ' => 'E02000600',
        '7NL' => 'E02000600',
        '7NN' => 'E02000600',
        '7NP' => 'E02000600',
        '7NQ' => 'E02000600',
        '7NR' => 'E02000600',
        '7NS' => 'E02000600',
        '7NT' => 'E02000600',
        '7NU' => 'E02000599',
        '7NW' => 'E02000599',
        '7NX' => 'E02000599',
        '7NY' => 'E02000599',
        '7NZ' => 'E02000602',
        '7PA' => 'E02000599',
        '7PB' => 'E02000599',
        '7PD' => 'E02000599',
        '7PE' => 'E02000599',
        '7PF' => 'E02000599',
        '7PG' => 'E02000599',
        '7PH' => 'E02000602',
        '7PJ' => 'E02000600',
        '7PL' => 'E02000600',
        '7PN' => 'E02000600',
        '7PP' => 'E02000600',
        '7PQ' => 'E02000600',
        '7PR' => 'E02000600',
        '7PS' => 'E02000600',
        '7PT' => 'E02000600',
        '7PU' => 'E02000600',
        '7PW' => 'E02000600',
        '7PX' => 'E02000600',
        '7PY' => 'E02000600',
        '7PZ' => 'E02000600',
        '7QA' => 'E02000600',
        '7QB' => 'E02000600',
        '7QD' => 'E02000600',
        '7QE' => 'E02000600',
        '7QF' => 'E02000600',
        '7QG' => 'E02000600',
        '7QH' => 'E02000600',
        '7QJ' => 'E02000600',
        '7QL' => 'E02000600',
        '7QN' => 'E02000600',
        '7QQ' => 'E02000600',
        '7QR' => 'E02000600',
        '7QS' => 'E02000600',
        '7QT' => 'E02000600',
        '7QU' => 'E02000600',
        '7QW' => 'E02000600',
        '7QX' => 'E02000600',
        '7QY' => 'E02000599',
        '7QZ' => 'E02000600',
        '7RA' => 'E02000600',
        '7RB' => 'E02000600',
        '7RD' => 'E02000600',
        '7RE' => 'E02000600',
        '7RF' => 'E02000600',
        '7RG' => 'E02000600',
        '7RH' => 'E02000600',
        '7RJ' => 'E02000600',
        '7RL' => 'E02000600',
        '7RN' => 'E02000600',
        '7RP' => 'E02000600',
        '7RQ' => 'E02000600',
        '7RR' => 'E02000600',
        '7RS' => 'E02000600',
        '7RT' => 'E02000600',
        '7RU' => 'E02000600',
        '7RW' => 'E02000600',
        '7RX' => 'E02000600',
        '7RY' => 'E02000600',
        '7RZ' => 'E02000600',
        '7SA' => 'E02000600',
        '7SB' => 'E02000600',
        '7SD' => 'E02000600',
        '7SE' => 'E02000600',
        '7SF' => 'E02000600',
        '7SG' => 'E02000600',
        '7SH' => 'E02000600',
        '7SJ' => 'E02000600',
        '7SL' => 'E02000600',
        '7SN' => 'E02000600',
        '7SP' => 'E02000600',
        '7SQ' => 'E02000600',
        '7SR' => 'E02000600',
        '7SS' => 'E02000600',
        '7ST' => 'E02000600',
        '7SU' => 'E02000600',
        '7SW' => 'E02000600',
        '7SX' => 'E02000600',
        '7SY' => 'E02000600',
        '7SZ' => 'E02000600',
        '7TA' => 'E02000600',
        '7TB' => 'E02000600',
        '7TD' => 'E02000600',
        '7TE' => 'E02000600',
        '7TF' => 'E02000600',
        '7TG' => 'E02000600',
        '7TH' => 'E02000600',
        '7TJ' => 'E02000600',
        '7TL' => 'E02000600',
        '7TN' => 'E02000600',
        '7TP' => 'E02000600',
        '7TQ' => 'E02000600',
        '7TR' => 'E02000600',
        '7TS' => 'E02000600',
        '7TT' => 'E02000600',
        '7TU' => 'E02000600',
        '7TW' => 'E02000600',
        '7TX' => 'E02000600',
        '7TY' => 'E02000600',
        '7UA' => 'E02000600',
        '7UB' => 'E02000600',
        '7UD' => 'E02000599',
        '7UG' => 'E02000602',
        '7UN' => 'E02000600',
        '7UZ' => 'E02000600',
        '7WA' => 'E02000602',
        '7WB' => 'E02000602',
        '7WD' => 'E02000602',
        '7WE' => 'E02000602',
        '7WF' => 'E02000602',
        '7WG' => 'E02000600',
        '7WH' => 'E02000602',
        '7WJ' => 'E02000600',
        '7WL' => 'E02000602',
        '7WN' => 'E02000602',
        '7WP' => 'E02000600',
        '7WQ' => 'E02000602',
        '7WR' => 'E02000602',
        '7WS' => 'E02000600',
        '7WT' => 'E02000602',
        '7WU' => 'E02000602',
        '7WW' => 'E02000600',
        '7WX' => 'E02000602',
        '7WY' => 'E02000602',
        '7WZ' => 'E02000602',
        '7XA' => 'E02000599',
        '7XB' => 'E02000602',
        '7XD' => 'E02000602',
        '7XE' => 'E02000599',
        '7XF' => 'E02000602',
        '7XG' => 'E02000602',
        '7XH' => 'E02000602',
        '7XJ' => 'E02000602',
        '7XL' => 'E02000602',
        '7XN' => 'E02000602',
        '7XP' => 'E02000600',
        '7XQ' => 'E02000602',
        '7XR' => 'E02000602',
        '7XT' => 'E02000602',
        '7XY' => 'E02000602',
        '7XZ' => 'E02000602',
        '7YA' => 'E02000599',
        '7YB' => 'E02000600',
        '7YD' => 'E02000602',
        '7YE' => 'E02000602',
        '7YF' => 'E02000602',
        '7YG' => 'E02000600',
        '7YH' => 'E02000602',
        '7YJ' => 'E02000602',
        '7YL' => 'E02000602',
        '7YN' => 'E02000602',
        '7YP' => 'E02000602',
        '7YQ' => 'E02000600',
        '7YR' => 'E02000602',
        '7YS' => 'E02000602',
        '7YT' => 'E02000602',
        '7YU' => 'E02000602',
        '7YW' => 'E02000602',
        '7YX' => 'E02000602',
        '7YY' => 'E02000600',
        '7YZ' => 'E02000602',
        '7ZA' => 'E02000599',
        '7ZB' => 'E02000602',
        '7ZD' => 'E02000602',
        '7ZE' => 'E02000602',
        '7ZF' => 'E02000600',
        '7ZG' => 'E02000602',
        '7ZH' => 'E02000602',
        '7ZJ' => 'E02000602',
        '7ZL' => 'E02000600',
        '7ZN' => 'E02000600',
        '7ZQ' => 'E02000602',
        '7ZS' => 'E02000600',
        '7ZW' => 'E02000602',
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
