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
final class BH25
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '5AA' => 'E02004799',
        '5AB' => 'E02004798',
        '5AD' => 'E02004799',
        '5AE' => 'E02004799',
        '5AF' => 'E02004799',
        '5AG' => 'E02004799',
        '5AH' => 'E02004799',
        '5AJ' => 'E02004799',
        '5AL' => 'E02004798',
        '5AN' => 'E02004798',
        '5AP' => 'E02004799',
        '5AQ' => 'E02004799',
        '5AR' => 'E02004798',
        '5AS' => 'E02004796',
        '5AT' => 'E02004798',
        '5AU' => 'E02004799',
        '5AW' => 'E02004799',
        '5AX' => 'E02004799',
        '5AY' => 'E02004799',
        '5AZ' => 'E02004799',
        '5BA' => 'E02004799',
        '5BB' => 'E02004799',
        '5BD' => 'E02004799',
        '5BE' => 'E02004799',
        '5BG' => 'E02004799',
        '5BH' => 'E02004799',
        '5BJ' => 'E02004799',
        '5BL' => 'E02004799',
        '5BN' => 'E02004796',
        '5BP' => 'E02004799',
        '5BQ' => 'E02004799',
        '5BR' => 'E02004799',
        '5BS' => 'E02004799',
        '5BT' => 'E02004799',
        '5BU' => 'E02004799',
        '5BW' => 'E02004799',
        '5BX' => 'E02004799',
        '5BY' => 'E02004799',
        '5BZ' => 'E02004799',
        '5DA' => 'E02004799',
        '5DB' => 'E02004799',
        '5DD' => 'E02004799',
        '5DE' => 'E02004798',
        '5DF' => 'E02004799',
        '5DG' => 'E02004796',
        '5DH' => 'E02004796',
        '5DJ' => 'E02004796',
        '5DL' => 'E02004799',
        '5DN' => 'E02004796',
        '5DP' => 'E02004796',
        '5DQ' => 'E02004796',
        '5DR' => 'E02004796',
        '5DS' => 'E02004798',
        '5DT' => 'E02004796',
        '5DU' => 'E02004796',
        '5DW' => 'E02004798',
        '5DX' => 'E02004796',
        '5DY' => 'E02004798',
        '5DZ' => 'E02004796',
        '5EA' => 'E02004796',
        '5EB' => 'E02004798',
        '5ED' => 'E02004798',
        '5EE' => 'E02004796',
        '5EF' => 'E02004798',
        '5EG' => 'E02004798',
        '5EH' => 'E02004796',
        '5EJ' => 'E02004798',
        '5EL' => 'E02004798',
        '5EN' => 'E02004798',
        '5EP' => 'E02004796',
        '5EQ' => 'E02004798',
        '5ER' => 'E02004796',
        '5ES' => 'E02004796',
        '5ET' => 'E02004796',
        '5EU' => 'E02004796',
        '5EW' => 'E02004798',
        '5EX' => 'E02004796',
        '5EY' => 'E02004796',
        '5EZ' => 'E02004796',
        '5FA' => 'E02004799',
        '5FB' => 'E02004799',
        '5FD' => 'E02004798',
        '5FE' => 'E02004799',
        '5FF' => 'E02004799',
        '5FG' => 'E02004799',
        '5FH' => 'E02004798',
        '5FJ' => 'E02004799',
        '5FL' => 'E02004799',
        '5FN' => 'E02004799',
        '5FP' => 'E02004799',
        '5FQ' => 'E02004799',
        '5FR' => 'E02004798',
        '5FS' => 'E02004798',
        '5FT' => 'E02004798',
        '5FU' => 'E02004798',
        '5FW' => 'E02004799',
        '5FX' => 'E02004798',
        '5FY' => 'E02004798',
        '5FZ' => 'E02004798',
        '5GA' => 'E02004796',
        '5GB' => 'E02004796',
        '5GD' => 'E02004796',
        '5GE' => 'E02004796',
        '5GF' => 'E02004796',
        '5GG' => 'E02004796',
        '5GH' => 'E02004796',
        '5GJ' => 'E02004796',
        '5GL' => 'E02004796',
        '5GN' => 'E02004796',
        '5GP' => 'E02004799',
        '5GQ' => 'E02004798',
        '5GR' => 'E02004799',
        '5GS' => 'E02004798',
        '5GT' => 'E02004798',
        '5GU' => 'E02004798',
        '5GW' => 'E02004798',
        '5GX' => 'E02004798',
        '5GY' => 'E02004798',
        '5GZ' => 'E02004798',
        '5HA' => 'E02004796',
        '5HB' => 'E02004798',
        '5HD' => 'E02004798',
        '5HE' => 'E02004798',
        '5HF' => 'E02004796',
        '5HG' => 'E02004796',
        '5HH' => 'E02004796',
        '5HJ' => 'E02004798',
        '5HL' => 'E02004798',
        '5HN' => 'E02004798',
        '5HP' => 'E02004798',
        '5HQ' => 'E02004798',
        '5HR' => 'E02004798',
        '5HS' => 'E02004798',
        '5HT' => 'E02004796',
        '5HU' => 'E02004796',
        '5HW' => 'E02004798',
        '5HX' => 'E02004796',
        '5HY' => 'E02004796',
        '5HZ' => 'E02004796',
        '5JA' => 'E02004796',
        '5JB' => 'E02004798',
        '5JD' => 'E02004798',
        '5JE' => 'E02004798',
        '5JF' => 'E02004798',
        '5JG' => 'E02004798',
        '5JH' => 'E02004798',
        '5JJ' => 'E02004798',
        '5JL' => 'E02004796',
        '5JN' => 'E02004798',
        '5JP' => 'E02004798',
        '5JQ' => 'E02004796',
        '5JR' => 'E02004798',
        '5JS' => 'E02004798',
        '5JT' => 'E02004796',
        '5JU' => 'E02004798',
        '5JW' => 'E02004798',
        '5JX' => 'E02004796',
        '5JY' => 'E02004798',
        '5JZ' => 'E02004798',
        '5LA' => 'E02004798',
        '5LB' => 'E02004798',
        '5LD' => 'E02004798',
        '5LE' => 'E02004798',
        '5LF' => 'E02004798',
        '5LG' => 'E02004798',
        '5LH' => 'E02004796',
        '5LJ' => 'E02004796',
        '5LL' => 'E02004796',
        '5LN' => 'E02004798',
        '5LP' => 'E02004798',
        '5LQ' => 'E02004796',
        '5LR' => 'E02004798',
        '5LS' => 'E02004798',
        '5LT' => 'E02004798',
        '5LU' => 'E02004798',
        '5LW' => 'E02004798',
        '5LX' => 'E02004796',
        '5LY' => 'E02004796',
        '5LZ' => 'E02004796',
        '5NA' => 'E02004796',
        '5NB' => 'E02004796',
        '5ND' => 'E02004796',
        '5NE' => 'E02004798',
        '5NF' => 'E02004796',
        '5NG' => 'E02004798',
        '5NH' => 'E02004796',
        '5NJ' => 'E02004796',
        '5NL' => 'E02004796',
        '5NN' => 'E02004798',
        '5NP' => 'E02004796',
        '5NQ' => 'E02004798',
        '5NR' => 'E02004798',
        '5NS' => 'E02004798',
        '5NT' => 'E02004796',
        '5NU' => 'E02004798',
        '5NW' => 'E02004798',
        '5NX' => 'E02004798',
        '5NY' => 'E02004798',
        '5NZ' => 'E02004798',
        '5PA' => 'E02004798',
        '5PB' => 'E02004798',
        '5PD' => 'E02004798',
        '5PE' => 'E02004796',
        '5PF' => 'E02004799',
        '5PG' => 'E02004798',
        '5PH' => 'E02004799',
        '5PJ' => 'E02004799',
        '5PL' => 'E02004800',
        '5PN' => 'E02004800',
        '5PP' => 'E02004800',
        '5PQ' => 'E02004799',
        '5PR' => 'E02004800',
        '5PS' => 'E02004800',
        '5PT' => 'E02004800',
        '5PU' => 'E02004796',
        '5PW' => 'E02004800',
        '5PX' => 'E02004799',
        '5PY' => 'E02004800',
        '5PZ' => 'E02004800',
        '5QA' => 'E02004799',
        '5QB' => 'E02004799',
        '5QD' => 'E02004799',
        '5QE' => 'E02004799',
        '5QF' => 'E02004799',
        '5QG' => 'E02004799',
        '5QH' => 'E02004796',
        '5QJ' => 'E02004796',
        '5QL' => 'E02004796',
        '5QN' => 'E02004796',
        '5QP' => 'E02004796',
        '5QQ' => 'E02004796',
        '5QR' => 'E02004796',
        '5QS' => 'E02004796',
        '5QT' => 'E02004796',
        '5QU' => 'E02004796',
        '5QW' => 'E02004796',
        '5QX' => 'E02004799',
        '5QY' => 'E02004799',
        '5QZ' => 'E02004798',
        '5RA' => 'E02004796',
        '5RD' => 'E02004799',
        '5RE' => 'E02004798',
        '5RF' => 'E02004798',
        '5RG' => 'E02004799',
        '5RH' => 'E02004798',
        '5RJ' => 'E02004798',
        '5RL' => 'E02004798',
        '5RN' => 'E02004798',
        '5RP' => 'E02004796',
        '5RQ' => 'E02004798',
        '5RR' => 'E02004796',
        '5RS' => 'E02004796',
        '5RT' => 'E02004796',
        '5RU' => 'E02004796',
        '5RW' => 'E02004798',
        '5RX' => 'E02004796',
        '5RY' => 'E02004796',
        '5RZ' => 'E02004796',
        '5SA' => 'E02004796',
        '5SB' => 'E02004796',
        '5SD' => 'E02004796',
        '5SE' => 'E02004796',
        '5SF' => 'E02004796',
        '5SG' => 'E02004796',
        '5SH' => 'E02004796',
        '5SJ' => 'E02004796',
        '5SL' => 'E02004796',
        '5SN' => 'E02004796',
        '5SP' => 'E02004799',
        '5SQ' => 'E02004796',
        '5SR' => 'E02004798',
        '5SS' => 'E02004798',
        '5ST' => 'E02004798',
        '5SU' => 'E02004796',
        '5SW' => 'E02004796',
        '5SX' => 'E02004798',
        '5SY' => 'E02004796',
        '5SZ' => 'E02004796',
        '5TA' => 'E02004796',
        '5TB' => 'E02004796',
        '5TD' => 'E02004796',
        '5TE' => 'E02004796',
        '5TF' => 'E02004796',
        '5TG' => 'E02004796',
        '5TH' => 'E02004796',
        '5TJ' => 'E02004796',
        '5TL' => 'E02004796',
        '5TN' => 'E02004796',
        '5TP' => 'E02004796',
        '5TQ' => 'E02004796',
        '5TR' => 'E02004793',
        '5TS' => 'E02004793',
        '5TT' => 'E02004793',
        '5TU' => 'E02004793',
        '5TW' => 'E02004796',
        '5TX' => 'E02004793',
        '5TY' => 'E02004793',
        '5TZ' => 'E02004793',
        '5UA' => 'E02004796',
        '5UB' => 'E02004798',
        '5UD' => 'E02004799',
        '5UE' => 'E02004798',
        '5UF' => 'E02004798',
        '5UG' => 'E02004798',
        '5UH' => 'E02004798',
        '5UJ' => 'E02004798',
        '5UL' => 'E02004798',
        '5UN' => 'E02004798',
        '5UP' => 'E02004798',
        '5UQ' => 'E02004798',
        '5UR' => 'E02004798',
        '5US' => 'E02004798',
        '5UT' => 'E02004798',
        '5UU' => 'E02004798',
        '5UW' => 'E02004798',
        '5UX' => 'E02004798',
        '5UY' => 'E02004798',
        '5UZ' => 'E02004798',
        '5WA' => 'E02004793',
        '5WB' => 'E02004799',
        '5WD' => 'E02004798',
        '5WE' => 'E02004798',
        '5WF' => 'E02004798',
        '5WG' => 'E02004798',
        '5WH' => 'E02004793',
        '5WJ' => 'E02004799',
        '5WL' => 'E02004799',
        '5WP' => 'E02004798',
        '5WQ' => 'E02004798',
        '5WR' => 'E02004798',
        '5WS' => 'E02004798',
        '5WT' => 'E02004798',
        '5WU' => 'E02004798',
        '5WW' => 'E02004798',
        '5WX' => 'E02004793',
        '5WY' => 'E02004798',
        '5WZ' => 'E02004799',
        '5XA' => 'E02004798',
        '5XB' => 'E02004798',
        '5XD' => 'E02004798',
        '5XE' => 'E02004798',
        '5XF' => 'E02004798',
        '5XG' => 'E02004798',
        '5XH' => 'E02004798',
        '5XJ' => 'E02004798',
        '5XL' => 'E02004798',
        '5XN' => 'E02004799',
        '5XP' => 'E02004799',
        '5XQ' => 'E02004798',
        '5XR' => 'E02004799',
        '5XS' => 'E02004799',
        '5XT' => 'E02004799',
        '5XU' => 'E02004799',
        '5XW' => 'E02004799',
        '5XX' => 'E02004799',
        '5XY' => 'E02004799',
        '5XZ' => 'E02004799',
        '5YA' => 'E02004799',
        '5YB' => 'E02004799',
        '5YD' => 'E02004799',
        '5YE' => 'E02004799',
        '5YF' => 'E02004799',
        '5YG' => 'E02004798',
        '5YH' => 'E02004799',
        '5YJ' => 'E02004799',
        '5YL' => 'E02004799',
        '5YN' => 'E02004798',
        '5YP' => 'E02004798',
        '5YQ' => 'E02004798',
        '5YR' => 'E02004799',
        '5YS' => 'E02004799',
        '5YT' => 'E02004799',
        '5YU' => 'E02004798',
        '5YW' => 'E02004798',
        '5YX' => 'E02004798',
        '5YY' => 'E02004799',
        '5YZ' => 'E02004799',
        '5ZA' => 'E02004798',
        '5ZB' => 'E02004799',
        '5ZD' => 'E02004796',
        '5ZE' => 'E02004798',
        '5ZF' => 'E02004796',
        '5ZG' => 'E02004799',
        '5ZH' => 'E02004798',
        '5ZJ' => 'E02004799',
        '5ZL' => 'E02004799',
        '5ZN' => 'E02004799',
        '5ZP' => 'E02004799',
        '5ZQ' => 'E02004799',
        '5ZR' => 'E02004799',
        '5ZS' => 'E02004799',
        '5ZT' => 'E02004799',
        '5ZU' => 'E02004799',
        '5ZW' => 'E02004799',
        '5ZX' => 'E02004799',
        '5ZY' => 'E02004799',
        '6AA' => 'E02004799',
        '6AB' => 'E02004799',
        '6AD' => 'E02004799',
        '6AE' => 'E02004799',
        '6AF' => 'E02004799',
        '6AG' => 'E02004799',
        '6AH' => 'E02004799',
        '6AJ' => 'E02004799',
        '6AL' => 'E02004799',
        '6AN' => 'E02004799',
        '6AP' => 'E02004799',
        '6AQ' => 'E02004799',
        '6AR' => 'E02004799',
        '6AS' => 'E02004799',
        '6AT' => 'E02004799',
        '6AU' => 'E02004799',
        '6AW' => 'E02004799',
        '6AX' => 'E02004798',
        '6AY' => 'E02004799',
        '6AZ' => 'E02004799',
        '6BA' => 'E02004799',
        '6BB' => 'E02004799',
        '6BD' => 'E02004799',
        '6BE' => 'E02004799',
        '6BG' => 'E02004799',
        '6BH' => 'E02004799',
        '6BJ' => 'E02004799',
        '6BL' => 'E02004799',
        '6BN' => 'E02004799',
        '6BP' => 'E02004799',
        '6BQ' => 'E02004799',
        '6BS' => 'E02004799',
        '6BT' => 'E02004799',
        '6BU' => 'E02004799',
        '6BW' => 'E02004799',
        '6BX' => 'E02004799',
        '6BY' => 'E02004799',
        '6BZ' => 'E02004799',
        '6DA' => 'E02004799',
        '6DB' => 'E02004799',
        '6DD' => 'E02004799',
        '6DE' => 'E02004799',
        '6DF' => 'E02004799',
        '6DG' => 'E02004799',
        '6DH' => 'E02004799',
        '6DJ' => 'E02004799',
        '6DL' => 'E02004799',
        '6DN' => 'E02004799',
        '6DP' => 'E02004799',
        '6DQ' => 'E02004799',
        '6DR' => 'E02004799',
        '6DS' => 'E02004799',
        '6DT' => 'E02004799',
        '6DU' => 'E02004799',
        '6DW' => 'E02004799',
        '6DX' => 'E02004799',
        '6DY' => 'E02004799',
        '6DZ' => 'E02004799',
        '6EA' => 'E02004799',
        '6EB' => 'E02004799',
        '6ED' => 'E02004799',
        '6EE' => 'E02004799',
        '6EF' => 'E02004799',
        '6EG' => 'E02004799',
        '6EH' => 'E02004799',
        '6EJ' => 'E02004799',
        '6EL' => 'E02004799',
        '6EN' => 'E02004799',
        '6EP' => 'E02004799',
        '6EQ' => 'E02004799',
        '6ER' => 'E02004799',
        '6ES' => 'E02004799',
        '6ET' => 'E02004799',
        '6EU' => 'E02004799',
        '6EW' => 'E02004799',
        '6EX' => 'E02004799',
        '6EY' => 'E02004799',
        '6EZ' => 'E02004799',
        '6FA' => 'E02004799',
        '6FB' => 'E02004798',
        '6FD' => 'E02004799',
        '6FE' => 'E02004799',
        '6FG' => 'E02004799',
        '6HA' => 'E02004799',
        '6HB' => 'E02004799',
        '6HD' => 'E02004799',
        '6HE' => 'E02004799',
        '6HF' => 'E02004799',
        '6HG' => 'E02004799',
        '6HH' => 'E02004800',
        '6HJ' => 'E02004799',
        '6HL' => 'E02004799',
        '6HN' => 'E02004798',
        '6HP' => 'E02004799',
        '6HR' => 'E02004799',
        '6HS' => 'E02004799',
        '6HT' => 'E02004799',
        '6HU' => 'E02004799',
        '6HW' => 'E02004798',
        '6HX' => 'E02004799',
        '6HY' => 'E02004799',
        '6HZ' => 'E02004799',
        '6JA' => 'E02004799',
        '6JB' => 'E02004799',
        '6JD' => 'E02004799',
        '6JE' => 'E02004799',
        '6JF' => 'E02004799',
        '6JG' => 'E02004799',
        '6JH' => 'E02004799',
        '6JJ' => 'E02004799',
        '6JL' => 'E02004799',
        '6JP' => 'E02004799',
        '6JQ' => 'E02004799',
        '6JR' => 'E02004798',
        '6JS' => 'E02004798',
        '6JT' => 'E02004799',
        '6JU' => 'E02004799',
        '6JW' => 'E02004799',
        '6JX' => 'E02004799',
        '6JY' => 'E02004799',
        '6JZ' => 'E02004799',
        '6LA' => 'E02004799',
        '6LB' => 'E02004799',
        '6LD' => 'E02004799',
        '6LE' => 'E02004799',
        '6LF' => 'E02004799',
        '6LG' => 'E02004799',
        '6LH' => 'E02004799',
        '6LJ' => 'E02004799',
        '6LL' => 'E02004799',
        '6LN' => 'E02004799',
        '6LP' => 'E02004799',
        '6LQ' => 'E02004799',
        '6LR' => 'E02004799',
        '6LS' => 'E02004799',
        '6LT' => 'E02004799',
        '6LU' => 'E02004799',
        '6LW' => 'E02004799',
        '6LX' => 'E02004799',
        '6LY' => 'E02004799',
        '6NA' => 'E02004799',
        '6NF' => 'E02004799',
        '6NG' => 'E02004799',
        '6NH' => 'E02004799',
        '6NJ' => 'E02004799',
        '6NL' => 'E02004799',
        '6NN' => 'E02004799',
        '6NP' => 'E02004799',
        '6NQ' => 'E02004799',
        '6NR' => 'E02004799',
        '6NS' => 'E02004799',
        '6NT' => 'E02004799',
        '6NU' => 'E02004799',
        '6NW' => 'E02004799',
        '6NX' => 'E02004799',
        '6NY' => 'E02004799',
        '6NZ' => 'E02004799',
        '6PA' => 'E02004799',
        '6PB' => 'E02004799',
        '6PD' => 'E02004799',
        '6PE' => 'E02004798',
        '6PG' => 'E02004800',
        '6PH' => 'E02004799',
        '6PJ' => 'E02004799',
        '6PL' => 'E02004799',
        '6PN' => 'E02004800',
        '6PP' => 'E02004800',
        '6PQ' => 'E02004799',
        '6PR' => 'E02004800',
        '6PS' => 'E02004799',
        '6PT' => 'E02004800',
        '6PU' => 'E02004800',
        '6PW' => 'E02004800',
        '6PX' => 'E02004799',
        '6PY' => 'E02004799',
        '6PZ' => 'E02004799',
        '6QA' => 'E02004800',
        '6QB' => 'E02004800',
        '6QD' => 'E02004800',
        '6QE' => 'E02004800',
        '6QF' => 'E02004800',
        '6QG' => 'E02004800',
        '6QH' => 'E02004800',
        '6QJ' => 'E02004799',
        '6QL' => 'E02004798',
        '6QN' => 'E02004798',
        '6QP' => 'E02004798',
        '6QQ' => 'E02004800',
        '6QR' => 'E02004800',
        '6QS' => 'E02004798',
        '6QT' => 'E02004800',
        '6QU' => 'E02004798',
        '6QW' => 'E02004800',
        '6QX' => 'E02004798',
        '6QY' => 'E02004800',
        '6QZ' => 'E02004800',
        '6RA' => 'E02004798',
        '6RB' => 'E02004798',
        '6RD' => 'E02004798',
        '6RE' => 'E02004798',
        '6RF' => 'E02004798',
        '6RG' => 'E02004798',
        '6RH' => 'E02004798',
        '6RJ' => 'E02004798',
        '6RL' => 'E02004799',
        '6RN' => 'E02004798',
        '6RP' => 'E02004799',
        '6RQ' => 'E02004798',
        '6RR' => 'E02004798',
        '6RS' => 'E02004798',
        '6RT' => 'E02004798',
        '6RU' => 'E02004799',
        '6RW' => 'E02004799',
        '6RX' => 'E02004799',
        '6RY' => 'E02004799',
        '6RZ' => 'E02004799',
        '6SA' => 'E02004798',
        '6SB' => 'E02004798',
        '6SD' => 'E02004798',
        '6SE' => 'E02004798',
        '6SF' => 'E02004798',
        '6SG' => 'E02004798',
        '6SH' => 'E02004798',
        '6SJ' => 'E02004798',
        '6SL' => 'E02004799',
        '6SN' => 'E02004799',
        '6SP' => 'E02004799',
        '6SQ' => 'E02004798',
        '6SR' => 'E02004799',
        '6SS' => 'E02004798',
        '6ST' => 'E02004798',
        '6SU' => 'E02004798',
        '6SW' => 'E02004799',
        '6SX' => 'E02004798',
        '6SY' => 'E02004798',
        '6SZ' => 'E02004798',
        '6TA' => 'E02004798',
        '6TB' => 'E02004798',
        '6TD' => 'E02004798',
        '6TE' => 'E02004798',
        '6TF' => 'E02004798',
        '6TG' => 'E02004798',
        '6TH' => 'E02004798',
        '6TJ' => 'E02004798',
        '6TL' => 'E02004798',
        '6TP' => 'E02004799',
        '6TQ' => 'E02004798',
        '6TR' => 'E02004799',
        '6TS' => 'E02004799',
        '6TT' => 'E02004799',
        '6TU' => 'E02004799',
        '6TX' => 'E02004799',
        '6TY' => 'E02004799',
        '6TZ' => 'E02004799',
        '6UA' => 'E02004799',
        '6UB' => 'E02004799',
        '6UD' => 'E02004799',
        '6UE' => 'E02004799',
        '6UF' => 'E02004799',
        '6UG' => 'E02004800',
        '6UH' => 'E02004800',
        '6UU' => 'E02004798',
        '6UX' => 'E02004798',
        '6WG' => 'E02004800',
        '6XA' => 'E02004799',
        '6XB' => 'E02004799',
        '6XD' => 'E02004798',
        '6XE' => 'E02004799',
        '6XF' => 'E02004798',
        '6XG' => 'E02004799',
        '6XH' => 'E02004800',
        '6XN' => 'E02004799',
        '6YA' => 'E02004799',
        '6YB' => 'E02004799',
        '6YD' => 'E02004799',
        '6YE' => 'E02004799',
        '6YF' => 'E02004800',
        '6YG' => 'E02004799',
        '6YH' => 'E02004799',
        '6YJ' => 'E02004799',
        '6YL' => 'E02004798',
        '6YN' => 'E02004799',
        '6YP' => 'E02004799',
        '6YQ' => 'E02004799',
        '6YR' => 'E02004799',
        '6YS' => 'E02004799',
        '6YT' => 'E02004799',
        '6YU' => 'E02004799',
        '6YW' => 'E02004799',
        '6YX' => 'E02004799',
        '6YY' => 'E02004799',
        '6YZ' => 'E02004799',
        '6ZQ' => 'E02004799',
        '6ZX' => 'E02004799',
        '7AA' => 'E02004800',
        '7AB' => 'E02004800',
        '7AD' => 'E02004800',
        '7AE' => 'E02004800',
        '7AF' => 'E02004800',
        '7AG' => 'E02004800',
        '7AH' => 'E02004800',
        '7AJ' => 'E02004800',
        '7AL' => 'E02004800',
        '7AN' => 'E02004800',
        '7AP' => 'E02004800',
        '7AQ' => 'E02004800',
        '7AR' => 'E02004800',
        '7AS' => 'E02004800',
        '7AT' => 'E02004800',
        '7AU' => 'E02004800',
        '7AW' => 'E02004800',
        '7AX' => 'E02004800',
        '7AY' => 'E02004800',
        '7AZ' => 'E02004800',
        '7BA' => 'E02004800',
        '7BB' => 'E02004800',
        '7BD' => 'E02004800',
        '7BE' => 'E02004800',
        '7BG' => 'E02004800',
        '7BH' => 'E02004800',
        '7BJ' => 'E02004800',
        '7BL' => 'E02004800',
        '7BN' => 'E02004800',
        '7BP' => 'E02004800',
        '7BQ' => 'E02004800',
        '7BR' => 'E02004800',
        '7BS' => 'E02004800',
        '7BT' => 'E02004800',
        '7BU' => 'E02004800',
        '7BW' => 'E02004800',
        '7BX' => 'E02004800',
        '7BY' => 'E02004800',
        '7BZ' => 'E02004800',
        '7DA' => 'E02004800',
        '7DB' => 'E02004800',
        '7DD' => 'E02004800',
        '7DE' => 'E02004800',
        '7DF' => 'E02004800',
        '7DG' => 'E02004800',
        '7DH' => 'E02004800',
        '7DJ' => 'E02004800',
        '7DL' => 'E02004800',
        '7DN' => 'E02004800',
        '7DP' => 'E02004800',
        '7DQ' => 'E02004800',
        '7DR' => 'E02004800',
        '7DS' => 'E02004800',
        '7DT' => 'E02004800',
        '7DU' => 'E02004800',
        '7DW' => 'E02004800',
        '7DX' => 'E02004800',
        '7DY' => 'E02004799',
        '7DZ' => 'E02004800',
        '7EA' => 'E02004800',
        '7EB' => 'E02004800',
        '7ED' => 'E02004800',
        '7EE' => 'E02004800',
        '7EF' => 'E02004800',
        '7EG' => 'E02004800',
        '7EH' => 'E02004800',
        '7EJ' => 'E02004800',
        '7EL' => 'E02004800',
        '7EN' => 'E02004800',
        '7EP' => 'E02004800',
        '7EQ' => 'E02004800',
        '7ER' => 'E02004800',
        '7ES' => 'E02004800',
        '7ET' => 'E02004800',
        '7EU' => 'E02004800',
        '7EW' => 'E02004800',
        '7EX' => 'E02004800',
        '7EY' => 'E02004800',
        '7EZ' => 'E02004800',
        '7FA' => 'E02004799',
        '7FB' => 'E02004800',
        '7FD' => 'E02004800',
        '7FE' => 'E02004800',
        '7FF' => 'E02004800',
        '7FG' => 'E02004800',
        '7FH' => 'E02004800',
        '7FJ' => 'E02004800',
        '7FL' => 'E02004800',
        '7HA' => 'E02004800',
        '7HB' => 'E02004800',
        '7HD' => 'E02004800',
        '7HE' => 'E02004800',
        '7HF' => 'E02004800',
        '7HG' => 'E02004800',
        '7HH' => 'E02004800',
        '7HJ' => 'E02004800',
        '7HL' => 'E02004800',
        '7HN' => 'E02004800',
        '7HP' => 'E02004800',
        '7HQ' => 'E02004800',
        '7HR' => 'E02004800',
        '7HS' => 'E02004800',
        '7HT' => 'E02004800',
        '7HU' => 'E02004800',
        '7HW' => 'E02004800',
        '7HX' => 'E02004800',
        '7HY' => 'E02004800',
        '7HZ' => 'E02004800',
        '7JA' => 'E02004800',
        '7JB' => 'E02004800',
        '7JD' => 'E02004800',
        '7JE' => 'E02004800',
        '7JF' => 'E02004800',
        '7JG' => 'E02004800',
        '7JH' => 'E02004800',
        '7JJ' => 'E02004800',
        '7JL' => 'E02004800',
        '7JN' => 'E02004800',
        '7JP' => 'E02004800',
        '7JQ' => 'E02004800',
        '7JR' => 'E02004800',
        '7JS' => 'E02004800',
        '7JT' => 'E02004800',
        '7JU' => 'E02004800',
        '7JW' => 'E02004800',
        '7JX' => 'E02004800',
        '7JY' => 'E02004800',
        '7JZ' => 'E02004800',
        '7LA' => 'E02004800',
        '7LB' => 'E02004800',
        '7LD' => 'E02004800',
        '7LE' => 'E02004800',
        '7LF' => 'E02004800',
        '7LG' => 'E02004800',
        '7LH' => 'E02004800',
        '7LJ' => 'E02004800',
        '7LL' => 'E02004800',
        '7LN' => 'E02004800',
        '7LP' => 'E02004800',
        '7LQ' => 'E02004800',
        '7LR' => 'E02004800',
        '7LS' => 'E02004800',
        '7LT' => 'E02004800',
        '7LU' => 'E02004800',
        '7LW' => 'E02004800',
        '7LX' => 'E02004800',
        '7LY' => 'E02004800',
        '7LZ' => 'E02004800',
        '7NA' => 'E02004800',
        '7NB' => 'E02004800',
        '7ND' => 'E02004800',
        '7NE' => 'E02004800',
        '7NF' => 'E02004800',
        '7NG' => 'E02004800',
        '7NH' => 'E02004800',
        '7NJ' => 'E02004800',
        '7NL' => 'E02004800',
        '7NN' => 'E02004800',
        '7NP' => 'E02004800',
        '7NQ' => 'E02004800',
        '7NR' => 'E02004800',
        '7NS' => 'E02004800',
        '7NT' => 'E02004800',
        '7NU' => 'E02004800',
        '7NW' => 'E02004800',
        '7NX' => 'E02004800',
        '7NY' => 'E02004800',
        '7NZ' => 'E02004800',
        '7PA' => 'E02004800',
        '7PB' => 'E02004800',
        '7PD' => 'E02004800',
        '7PE' => 'E02004800',
        '7PF' => 'E02004800',
        '7PG' => 'E02004800',
        '7PH' => 'E02004800',
        '7PJ' => 'E02004800',
        '7PL' => 'E02004800',
        '7PN' => 'E02004800',
        '7PP' => 'E02004800',
        '7PQ' => 'E02004800',
        '7PR' => 'E02004800',
        '7PS' => 'E02004800',
        '7PT' => 'E02004800',
        '7PU' => 'E02004800',
        '7PW' => 'E02004800',
        '7PX' => 'E02004800',
        '7PY' => 'E02004800',
        '7PZ' => 'E02004800',
        '7QA' => 'E02004800',
        '7QB' => 'E02004800',
        '7QD' => 'E02004800',
        '7QE' => 'E02004800',
        '7QF' => 'E02004800',
        '7QG' => 'E02004800',
        '7QH' => 'E02004800',
        '7QJ' => 'E02004800',
        '7QL' => 'E02004800',
        '7QN' => 'E02004800',
        '7QP' => 'E02004800',
        '7QQ' => 'E02004800',
        '7QR' => 'E02004800',
        '7QS' => 'E02004800',
        '7QT' => 'E02004800',
        '7QW' => 'E02004800',
        '7QX' => 'E02004800',
        '7QY' => 'E02004800',
        '7QZ' => 'E02004800',
        '7RA' => 'E02004800',
        '7RB' => 'E02004800',
        '7RD' => 'E02004800',
        '7RE' => 'E02004800',
        '7RF' => 'E02004800',
        '7RG' => 'E02004800',
        '7RH' => 'E02004800',
        '7RJ' => 'E02004800',
        '7RL' => 'E02004800',
        '7RN' => 'E02004800',
        '7RP' => 'E02004800',
        '7RQ' => 'E02004800',
        '7RR' => 'E02004800',
        '7RS' => 'E02004800',
        '7RT' => 'E02004800',
        '7RU' => 'E02004800',
        '7RW' => 'E02004800',
        '7RX' => 'E02004800',
        '7RY' => 'E02004800',
        '7RZ' => 'E02004800',
        '7SA' => 'E02004800',
        '7SB' => 'E02004800',
        '7SD' => 'E02004800',
        '7SE' => 'E02004800',
        '7SF' => 'E02004800',
        '7SG' => 'E02004800',
        '7SH' => 'E02004800',
        '7SJ' => 'E02004800',
        '7SL' => 'E02004800',
        '7SN' => 'E02004800',
        '7SP' => 'E02004800',
        '7SQ' => 'E02004800',
        '7SR' => 'E02004800',
        '7SS' => 'E02004800',
        '7ST' => 'E02004800',
        '7SU' => 'E02004800',
        '7SW' => 'E02004800',
        '7SX' => 'E02004800',
        '7SY' => 'E02004800',
        '7SZ' => 'E02004800',
        '7TA' => 'E02004800',
        '7TB' => 'E02004800',
        '7TD' => 'E02004800',
        '7TE' => 'E02004800',
        '7TF' => 'E02004800',
        '7TG' => 'E02004800',
        '7TH' => 'E02004800',
        '7TJ' => 'E02004800',
        '7TL' => 'E02004800',
        '7TQ' => 'E02004800',
        '7WA' => 'E02004800',
        '7WB' => 'E02004799',
        '7WD' => 'E02004799',
        '7WG' => 'E02004800',
        '7XB' => 'E02004800',
        '7XD' => 'E02004800',
        '7XE' => 'E02004800',
        '7XF' => 'E02004800',
        '7XG' => 'E02004799',
        '7XH' => 'E02004799',
        '7XN' => 'E02004799',
        '7XQ' => 'E02004799',
        '7XY' => 'E02004799',
        '7XZ' => 'E02004799',
        '7YA' => 'E02004799',
        '7YB' => 'E02004799',
        '7YD' => 'E02004799',
        '7YE' => 'E02004800',
        '7YF' => 'E02004799',
        '7YG' => 'E02004800',
        '7YH' => 'E02004799',
        '7YJ' => 'E02004799',
        '7YL' => 'E02004799',
        '7YN' => 'E02004800',
        '7YP' => 'E02004800',
        '7YQ' => 'E02004800',
        '7YR' => 'E02004800',
        '7YS' => 'E02004800',
        '7YT' => 'E02004800',
        '7YU' => 'E02004800',
        '7YW' => 'E02004800',
        '7YX' => 'E02004800',
        '7YY' => 'E02004800',
        '7YZ' => 'E02004800',
        '7ZN' => 'E02004799',
        '7ZQ' => 'E02004799',
        '7ZX' => 'E02004799',
        '9AB' => 'E02004799',
        '9AE' => 'E02004799',
        '9AF' => 'E02004799',
        '9AG' => 'E02004799',
        '9AJ' => 'E02004799',
        '9AL' => 'E02004799',
        '9AN' => 'E02004799',
        '9AP' => 'E02004799',
        '9AQ' => 'E02004799',
        '9AR' => 'E02004799',
        '9AS' => 'E02004799',
        '9AT' => 'E02004799',
        '9AU' => 'E02004799',
        '9AW' => 'E02004799',
        '9AX' => 'E02004799',
        '9AY' => 'E02004799',
        '9AZ' => 'E02004799',
        '9BA' => 'E02004799',
        '9BB' => 'E02004799',
        '9BD' => 'E02004799',
        '9BE' => 'E02004799',
        '9BF' => 'E02004799',
        '9BG' => 'E02004799',
        '9BH' => 'E02004799',
        '9BJ' => 'E02004799',
        '9BL' => 'E02004799',
        '9BN' => 'E02004799',
        '9BP' => 'E02004799',
        '9BQ' => 'E02004799',
        '9BR' => 'E02004799',
        '9BS' => 'E02004799',
        '9BT' => 'E02004799',
        '9BU' => 'E02004799',
        '9BW' => 'E02004799',
        '9BX' => 'E02004799',
        '9BY' => 'E02004799',
        '9BZ' => 'E02004799',
        '9DA' => 'E02004799',
        '9DB' => 'E02004799',
        '9DD' => 'E02004799',
        '9DE' => 'E02004799',
        '9DF' => 'E02004799',
        '9DG' => 'E02004799',
        '9DH' => 'E02004799',
        '9DJ' => 'E02004799',
        '9DL' => 'E02004799',
        '9DN' => 'E02004799',
        '9DP' => 'E02004799',
        '9DQ' => 'E02004799',
        '9DR' => 'E02004799',
        '9DS' => 'E02004799',
        '9DT' => 'E02004799',
        '9DU' => 'E02004799',
        '9DW' => 'E02004799',
        '9DX' => 'E02004799',
        '9DY' => 'E02004799',
        '9DZ' => 'E02004799',
        '9EA' => 'E02004799',
        '9EB' => 'E02004799',
        '9EE' => 'E02004799',
        '9EF' => 'E02004799',
        '9EG' => 'E02004799',
        '9EH' => 'E02004799',
        '9EJ' => 'E02004799',
        '9EL' => 'E02004799',
        '9EN' => 'E02004799',
        '9EP' => 'E02004799',
        '9EQ' => 'E02004799',
        '9ER' => 'E02004799',
        '9ES' => 'E02004799',
        '9ET' => 'E02004799',
        '9EU' => 'E02004799',
        '9EW' => 'E02004799',
        '9EX' => 'E02004799',
        '9EY' => 'E02004799',
        '9EZ' => 'E02004799',
        '9FA' => 'E02004799',
        '9FB' => 'E02004799',
        '9FD' => 'E02004799',
        '9FE' => 'E02004799',
        '9FF' => 'E02004799',
        '9FG' => 'E02004799',
        '9FJ' => 'E02004799',
        '9FL' => 'E02004799',
        '9FN' => 'E02004799',
        '9FP' => 'E02004799',
        '9FQ' => 'E02004799',
        '9FR' => 'E02004799',
        '9FS' => 'E02004799',
        '9FT' => 'E02004799',
        '9FU' => 'E02004799',
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
