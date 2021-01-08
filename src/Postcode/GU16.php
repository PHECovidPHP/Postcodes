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
final class GU16
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '5AA' => 'E02006425',
        '5AB' => 'E02006425',
        '5AD' => 'E02006425',
        '5AE' => 'E02006425',
        '5AF' => 'E02006425',
        '5AG' => 'E02006425',
        '5AH' => 'E02006425',
        '5AJ' => 'E02006426',
        '5AL' => 'E02006425',
        '5AN' => 'E02006426',
        '5AP' => 'E02006426',
        '5AQ' => 'E02006425',
        '5AR' => 'E02006425',
        '5AS' => 'E02006426',
        '5AT' => 'E02006426',
        '5AU' => 'E02006426',
        '5AW' => 'E02006426',
        '5AX' => 'E02006426',
        '5AY' => 'E02006426',
        '5AZ' => 'E02006426',
        '5BA' => 'E02006426',
        '5BB' => 'E02006426',
        '5BD' => 'E02006426',
        '5BE' => 'E02006426',
        '5BG' => 'E02006426',
        '5BH' => 'E02006426',
        '5BJ' => 'E02006427',
        '5BL' => 'E02006422',
        '5BN' => 'E02006422',
        '5BP' => 'E02006422',
        '5BQ' => 'E02006426',
        '5BS' => 'E02006425',
        '5BT' => 'E02006425',
        '5BU' => 'E02006425',
        '5BW' => 'E02006422',
        '5BY' => 'E02006425',
        '5BZ' => 'E02006425',
        '5DA' => 'E02006425',
        '5DD' => 'E02006425',
        '5DE' => 'E02006425',
        '5DF' => 'E02006425',
        '5DG' => 'E02006425',
        '5DH' => 'E02006425',
        '5DJ' => 'E02006425',
        '5DL' => 'E02006425',
        '5DN' => 'E02006425',
        '5DP' => 'E02006425',
        '5DQ' => 'E02006425',
        '5DS' => 'E02006425',
        '5DU' => 'E02006425',
        '5DX' => 'E02006425',
        '5DY' => 'E02006425',
        '5DZ' => 'E02006425',
        '5EA' => 'E02006425',
        '5EB' => 'E02006425',
        '5ED' => 'E02006425',
        '5EE' => 'E02006425',
        '5EF' => 'E02006425',
        '5EG' => 'E02006425',
        '5EH' => 'E02006425',
        '5EJ' => 'E02006425',
        '5EL' => 'E02006425',
        '5EN' => 'E02006425',
        '5EP' => 'E02006425',
        '5EQ' => 'E02006425',
        '5ER' => 'E02006425',
        '5ES' => 'E02006425',
        '5ET' => 'E02006425',
        '5EU' => 'E02006425',
        '5EW' => 'E02006425',
        '5EX' => 'E02006425',
        '5EY' => 'E02006425',
        '5EZ' => 'E02006425',
        '5FA' => 'E02006426',
        '5FB' => 'E02006426',
        '5FD' => 'E02006426',
        '5FE' => 'E02006426',
        '5FF' => 'E02006426',
        '5FG' => 'E02006426',
        '5FH' => 'E02006426',
        '5FJ' => 'E02006426',
        '5FL' => 'E02006426',
        '5FN' => 'E02006426',
        '5FP' => 'E02006425',
        '5FQ' => 'E02006426',
        '5FS' => 'E02006425',
        '5FT' => 'E02006425',
        '5FU' => 'E02006425',
        '5FW' => 'E02006425',
        '5FX' => 'E02006426',
        '5FZ' => 'E02006426',
        '5GA' => 'E02006425',
        '5GB' => 'E02006425',
        '5GD' => 'E02006425',
        '5GF' => 'E02006425',
        '5GG' => 'E02006425',
        '5GH' => 'E02006425',
        '5GJ' => 'E02006425',
        '5GL' => 'E02006425',
        '5GN' => 'E02006425',
        '5GP' => 'E02006426',
        '5GQ' => 'E02006425',
        '5GR' => 'E02006426',
        '5GS' => 'E02006425',
        '5GT' => 'E02006425',
        '5GU' => 'E02006426',
        '5GW' => 'E02006425',
        '5GX' => 'E02006425',
        '5GY' => 'E02006425',
        '5GZ' => 'E02006426',
        '5HA' => 'E02006425',
        '5HB' => 'E02006425',
        '5HD' => 'E02006425',
        '5HE' => 'E02006425',
        '5HF' => 'E02006425',
        '5HG' => 'E02006425',
        '5HH' => 'E02006425',
        '5HJ' => 'E02006425',
        '5HL' => 'E02006425',
        '5HN' => 'E02006425',
        '5HP' => 'E02006425',
        '5HQ' => 'E02006425',
        '5HR' => 'E02006425',
        '5HS' => 'E02006425',
        '5HT' => 'E02006425',
        '5HU' => 'E02006425',
        '5HW' => 'E02006425',
        '5HX' => 'E02006425',
        '5HY' => 'E02006425',
        '5HZ' => 'E02006425',
        '5JA' => 'E02006425',
        '5JD' => 'E02006425',
        '5JE' => 'E02006425',
        '5JF' => 'E02006425',
        '5JG' => 'E02006425',
        '5JH' => 'E02006425',
        '5JJ' => 'E02006423',
        '5JL' => 'E02006425',
        '5JN' => 'E02006425',
        '5JP' => 'E02006425',
        '5JR' => 'E02006425',
        '5JS' => 'E02006425',
        '5JT' => 'E02006425',
        '5JU' => 'E02006425',
        '5JW' => 'E02006425',
        '5JX' => 'E02006425',
        '5JY' => 'E02006425',
        '5JZ' => 'E02006425',
        '5LA' => 'E02006425',
        '5LB' => 'E02006425',
        '5LD' => 'E02006425',
        '5LE' => 'E02006425',
        '5LF' => 'E02006425',
        '5LG' => 'E02006425',
        '5LH' => 'E02006425',
        '5LJ' => 'E02006425',
        '5LL' => 'E02006425',
        '5LN' => 'E02006425',
        '5LP' => 'E02006425',
        '5LQ' => 'E02006425',
        '5LR' => 'E02006425',
        '5LS' => 'E02006425',
        '5LT' => 'E02006425',
        '5LU' => 'E02006425',
        '5LW' => 'E02006425',
        '5LX' => 'E02006425',
        '5LY' => 'E02006425',
        '5LZ' => 'E02006425',
        '5NA' => 'E02006425',
        '5NB' => 'E02006425',
        '5ND' => 'E02006425',
        '5NE' => 'E02006425',
        '5NF' => 'E02006425',
        '5NG' => 'E02006427',
        '5NJ' => 'E02006427',
        '5NL' => 'E02006425',
        '5NN' => 'E02006426',
        '5NP' => 'E02006426',
        '5NQ' => 'E02006425',
        '5NR' => 'E02006425',
        '5NS' => 'E02006425',
        '5NT' => 'E02006425',
        '5NU' => 'E02006425',
        '5NW' => 'E02006426',
        '5NX' => 'E02006427',
        '5NY' => 'E02006422',
        '5NZ' => 'E02006422',
        '5PA' => 'E02006425',
        '5PB' => 'E02006425',
        '5PD' => 'E02006425',
        '5PE' => 'E02006425',
        '5PF' => 'E02006425',
        '5PG' => 'E02006424',
        '5PH' => 'E02006425',
        '5PJ' => 'E02006425',
        '5PL' => 'E02006425',
        '5PN' => 'E02006425',
        '5PP' => 'E02006425',
        '5PQ' => 'E02006425',
        '5PR' => 'E02006425',
        '5PS' => 'E02006424',
        '5PT' => 'E02006424',
        '5PU' => 'E02006424',
        '5PW' => 'E02006425',
        '5PX' => 'E02006424',
        '5PY' => 'E02006425',
        '5PZ' => 'E02006425',
        '5QA' => 'E02006424',
        '5QB' => 'E02006424',
        '5QD' => 'E02006422',
        '5QE' => 'E02006422',
        '5QF' => 'E02006422',
        '5QG' => 'E02006422',
        '5QH' => 'E02006425',
        '5QJ' => 'E02006422',
        '5QL' => 'E02006425',
        '5QN' => 'E02006422',
        '5QP' => 'E02006422',
        '5QQ' => 'E02006422',
        '5QR' => 'E02006422',
        '5QS' => 'E02006422',
        '5QT' => 'E02006422',
        '5QU' => 'E02006422',
        '5QW' => 'E02006422',
        '5QX' => 'E02006422',
        '5QY' => 'E02006427',
        '5QZ' => 'E02006422',
        '5RA' => 'E02006422',
        '5RB' => 'E02006422',
        '5RD' => 'E02006422',
        '5RE' => 'E02006422',
        '5RF' => 'E02006422',
        '5RG' => 'E02006424',
        '5RH' => 'E02006424',
        '5RJ' => 'E02006424',
        '5RL' => 'E02006424',
        '5RN' => 'E02006424',
        '5RP' => 'E02006424',
        '5RQ' => 'E02006424',
        '5RR' => 'E02006424',
        '5RS' => 'E02006424',
        '5RT' => 'E02006424',
        '5RU' => 'E02006424',
        '5RW' => 'E02006424',
        '5RX' => 'E02006424',
        '5RY' => 'E02006422',
        '5SA' => 'E02006424',
        '5SB' => 'E02006424',
        '5SD' => 'E02006424',
        '5SE' => 'E02006424',
        '5SG' => 'E02006425',
        '5SH' => 'E02006424',
        '5SJ' => 'E02006424',
        '5SL' => 'E02006424',
        '5SN' => 'E02006424',
        '5SP' => 'E02006424',
        '5SQ' => 'E02006424',
        '5SR' => 'E02006424',
        '5SS' => 'E02006424',
        '5ST' => 'E02006424',
        '5SU' => 'E02006424',
        '5SW' => 'E02006424',
        '5SX' => 'E02006424',
        '5SY' => 'E02006424',
        '5SZ' => 'E02006424',
        '5TA' => 'E02006424',
        '5TB' => 'E02006424',
        '5TD' => 'E02006424',
        '5TE' => 'E02006424',
        '5TF' => 'E02006424',
        '5TG' => 'E02006424',
        '5TH' => 'E02006424',
        '5TJ' => 'E02006424',
        '5TL' => 'E02006424',
        '5TN' => 'E02006422',
        '5TP' => 'E02006422',
        '5TQ' => 'E02006424',
        '5TR' => 'E02006424',
        '5TS' => 'E02006424',
        '5TT' => 'E02006424',
        '5TU' => 'E02006424',
        '5TW' => 'E02006422',
        '5TX' => 'E02006424',
        '5TY' => 'E02006424',
        '5TZ' => 'E02006424',
        '5UA' => 'E02006424',
        '5UB' => 'E02006424',
        '5UD' => 'E02006424',
        '5UE' => 'E02006424',
        '5UF' => 'E02006424',
        '5UG' => 'E02006424',
        '5UH' => 'E02006425',
        '5UJ' => 'E02006425',
        '5UN' => 'E02006425',
        '5UP' => 'E02006425',
        '5UQ' => 'E02006424',
        '5UR' => 'E02006426',
        '5US' => 'E02006425',
        '5UT' => 'E02006426',
        '5UU' => 'E02006426',
        '5UW' => 'E02006426',
        '5UX' => 'E02006426',
        '5UY' => 'E02006426',
        '5UZ' => 'E02006426',
        '5WA' => 'E02006425',
        '5WB' => 'E02006425',
        '5WD' => 'E02006425',
        '5WE' => 'E02006425',
        '5WF' => 'E02006425',
        '5WG' => 'E02006426',
        '5WH' => 'E02006426',
        '5WJ' => 'E02006425',
        '5WL' => 'E02006425',
        '5WN' => 'E02006425',
        '5WP' => 'E02006425',
        '5WQ' => 'E02006425',
        '5WR' => 'E02006425',
        '5WS' => 'E02006425',
        '5WT' => 'E02006425',
        '5WU' => 'E02006425',
        '5WW' => 'E02006425',
        '5WX' => 'E02006425',
        '5WY' => 'E02006425',
        '5WZ' => 'E02006425',
        '5XA' => 'E02006425',
        '5XB' => 'E02006425',
        '5XD' => 'E02006425',
        '5XE' => 'E02006425',
        '5XF' => 'E02006425',
        '5XG' => 'E02006425',
        '5XH' => 'E02006425',
        '5XJ' => 'E02006425',
        '5XL' => 'E02006425',
        '5XN' => 'E02006425',
        '5XP' => 'E02006425',
        '5XQ' => 'E02006425',
        '5XR' => 'E02006425',
        '5XS' => 'E02006425',
        '5XT' => 'E02006425',
        '5XU' => 'E02006425',
        '5XW' => 'E02006425',
        '5XX' => 'E02006425',
        '5XY' => 'E02006426',
        '5XZ' => 'E02006426',
        '5YA' => 'E02006426',
        '5YB' => 'E02006426',
        '5YD' => 'E02006426',
        '5YE' => 'E02006426',
        '5YF' => 'E02006426',
        '5YG' => 'E02006426',
        '5YH' => 'E02006426',
        '5YJ' => 'E02006426',
        '5YL' => 'E02006426',
        '5YN' => 'E02006426',
        '5YP' => 'E02006426',
        '5YQ' => 'E02006426',
        '5YR' => 'E02006426',
        '5YS' => 'E02006426',
        '5YT' => 'E02006426',
        '5YU' => 'E02006425',
        '5YW' => 'E02006426',
        '5YX' => 'E02006426',
        '5YY' => 'E02006425',
        '5YZ' => 'E02006426',
        '5ZA' => 'E02006425',
        '5ZB' => 'E02006425',
        '5ZD' => 'E02006425',
        '5ZE' => 'E02006426',
        '5ZF' => 'E02006426',
        '5ZG' => 'E02006425',
        '5ZJ' => 'E02006425',
        '5ZL' => 'E02006425',
        '5ZN' => 'E02006426',
        '5ZP' => 'E02006425',
        '5ZQ' => 'E02006425',
        '5ZR' => 'E02006425',
        '5ZS' => 'E02006425',
        '5ZT' => 'E02006425',
        '5ZU' => 'E02006425',
        '5ZW' => 'E02006425',
        '5ZX' => 'E02006425',
        '5ZY' => 'E02006425',
        '6AA' => 'E02006427',
        '6AB' => 'E02006427',
        '6AD' => 'E02006427',
        '6AE' => 'E02006427',
        '6AF' => 'E02006427',
        '6AG' => 'E02006427',
        '6AH' => 'E02006427',
        '6AJ' => 'E02006427',
        '6AL' => 'E02006427',
        '6AN' => 'E02006427',
        '6AP' => 'E02006427',
        '6AQ' => 'E02006427',
        '6AR' => 'E02006427',
        '6AS' => 'E02006427',
        '6AT' => 'E02006426',
        '6AU' => 'E02006427',
        '6AW' => 'E02006427',
        '6AX' => 'E02006427',
        '6AY' => 'E02006427',
        '6AZ' => 'E02006427',
        '6BA' => 'E02006427',
        '6BB' => 'E02006427',
        '6BD' => 'E02006427',
        '6BE' => 'E02006427',
        '6BF' => 'E02006423',
        '6BG' => 'E02006427',
        '6BH' => 'E02006426',
        '6BJ' => 'E02006427',
        '6BL' => 'E02006427',
        '6BN' => 'E02006426',
        '6BP' => 'E02006427',
        '6BQ' => 'E02006427',
        '6BS' => 'E02006427',
        '6BT' => 'E02006427',
        '6BU' => 'E02006427',
        '6BW' => 'E02006427',
        '6BX' => 'E02006427',
        '6BY' => 'E02006427',
        '6BZ' => 'E02006427',
        '6DA' => 'E02006427',
        '6DB' => 'E02006427',
        '6DD' => 'E02006427',
        '6DE' => 'E02006427',
        '6DF' => 'E02006427',
        '6DG' => 'E02006427',
        '6DH' => 'E02006427',
        '6DJ' => 'E02006427',
        '6DL' => 'E02006427',
        '6DN' => 'E02006427',
        '6DP' => 'E02006427',
        '6DQ' => 'E02006427',
        '6DR' => 'E02006427',
        '6DS' => 'E02006427',
        '6DT' => 'E02006427',
        '6DU' => 'E02006427',
        '6DW' => 'E02006427',
        '6DX' => 'E02006427',
        '6DY' => 'E02006427',
        '6DZ' => 'E02006427',
        '6EA' => 'E02006427',
        '6EB' => 'E02006427',
        '6ED' => 'E02006423',
        '6EE' => 'E02006427',
        '6EF' => 'E02006427',
        '6EG' => 'E02006427',
        '6EH' => 'E02006427',
        '6EJ' => 'E02006427',
        '6EL' => 'E02006427',
        '6EN' => 'E02006427',
        '6EP' => 'E02006427',
        '6EQ' => 'E02006427',
        '6ER' => 'E02006427',
        '6ES' => 'E02006427',
        '6ET' => 'E02006427',
        '6EU' => 'E02006427',
        '6EW' => 'E02006427',
        '6EX' => 'E02006427',
        '6EY' => 'E02006427',
        '6EZ' => 'E02006427',
        '6FA' => 'E02006427',
        '6FB' => 'E02006427',
        '6FE' => 'E02006427',
        '6FL' => 'E02006427',
        '6FP' => 'E02006427',
        '6FQ' => 'E02006427',
        '6FR' => 'E02006427',
        '6FS' => 'E02006427',
        '6FY' => 'E02006426',
        '6GA' => 'E02006427',
        '6GB' => 'E02006427',
        '6GD' => 'E02006427',
        '6GE' => 'E02006427',
        '6GF' => 'E02006427',
        '6GG' => 'E02006427',
        '6GH' => 'E02006427',
        '6GJ' => 'E02006427',
        '6GN' => 'E02006427',
        '6GP' => 'E02006427',
        '6GQ' => 'E02006427',
        '6GR' => 'E02006427',
        '6GT' => 'E02006427',
        '6HD' => 'E02006426',
        '6HE' => 'E02006426',
        '6HF' => 'E02006426',
        '6HG' => 'E02006426',
        '6HH' => 'E02006426',
        '6HJ' => 'E02006426',
        '6HL' => 'E02006426',
        '6HN' => 'E02006426',
        '6HP' => 'E02006426',
        '6HQ' => 'E02006426',
        '6HR' => 'E02006426',
        '6HS' => 'E02006426',
        '6HT' => 'E02006426',
        '6HU' => 'E02006426',
        '6HW' => 'E02006426',
        '6HX' => 'E02006426',
        '6HY' => 'E02006426',
        '6HZ' => 'E02006423',
        '6JA' => 'E02006427',
        '6JB' => 'E02006427',
        '6JD' => 'E02006427',
        '6JE' => 'E02006427',
        '6JF' => 'E02006427',
        '6JG' => 'E02006427',
        '6JH' => 'E02006427',
        '6JJ' => 'E02006427',
        '6JL' => 'E02006427',
        '6JN' => 'E02006427',
        '6JP' => 'E02006427',
        '6JQ' => 'E02006427',
        '6JR' => 'E02006426',
        '6JS' => 'E02006426',
        '6JT' => 'E02006426',
        '6JU' => 'E02006426',
        '6JW' => 'E02006423',
        '6JX' => 'E02006426',
        '6JY' => 'E02006426',
        '6JZ' => 'E02006426',
        '6LA' => 'E02006426',
        '6LB' => 'E02006426',
        '6LD' => 'E02006426',
        '6LE' => 'E02006426',
        '6LF' => 'E02006426',
        '6LG' => 'E02006427',
        '6LH' => 'E02006426',
        '6LJ' => 'E02006426',
        '6LL' => 'E02006426',
        '6LN' => 'E02006426',
        '6LP' => 'E02006426',
        '6LQ' => 'E02006426',
        '6LR' => 'E02006426',
        '6LS' => 'E02006426',
        '6LT' => 'E02006426',
        '6LU' => 'E02006426',
        '6LW' => 'E02006426',
        '6LX' => 'E02006426',
        '6LY' => 'E02006426',
        '6LZ' => 'E02006426',
        '6NA' => 'E02006426',
        '6NB' => 'E02006426',
        '6ND' => 'E02006426',
        '6NE' => 'E02006426',
        '6NF' => 'E02006426',
        '6NG' => 'E02006426',
        '6NH' => 'E02006426',
        '6NJ' => 'E02006426',
        '6NL' => 'E02006426',
        '6NN' => 'E02006426',
        '6NP' => 'E02006426',
        '6NQ' => 'E02006426',
        '6NR' => 'E02006426',
        '6NS' => 'E02006426',
        '6NT' => 'E02006427',
        '6NU' => 'E02006427',
        '6NW' => 'E02006426',
        '6NX' => 'E02006427',
        '6NY' => 'E02006427',
        '6NZ' => 'E02006427',
        '6PA' => 'E02006427',
        '6PB' => 'E02006427',
        '6PD' => 'E02006427',
        '6PE' => 'E02006427',
        '6PF' => 'E02006427',
        '6PG' => 'E02006427',
        '6PH' => 'E02006427',
        '6PJ' => 'E02006426',
        '6PL' => 'E02006426',
        '6PN' => 'E02006426',
        '6PP' => 'E02006426',
        '6PQ' => 'E02006427',
        '6PR' => 'E02006426',
        '6PS' => 'E02006426',
        '6PT' => 'E02006426',
        '6PU' => 'E02006426',
        '6PW' => 'E02006426',
        '6PX' => 'E02006426',
        '6PY' => 'E02006426',
        '6PZ' => 'E02006427',
        '6QA' => 'E02006427',
        '6QB' => 'E02006426',
        '6QD' => 'E02006426',
        '6QH' => 'E02006427',
        '6QJ' => 'E02006427',
        '6QL' => 'E02006427',
        '6QN' => 'E02006427',
        '6QP' => 'E02006427',
        '6QQ' => 'E02006426',
        '6QR' => 'E02006427',
        '6QS' => 'E02006427',
        '6QT' => 'E02006427',
        '6QU' => 'E02006427',
        '6QW' => 'E02006427',
        '6QX' => 'E02006427',
        '6QY' => 'E02006427',
        '6QZ' => 'E02006427',
        '6RA' => 'E02006427',
        '6RB' => 'E02006427',
        '6RD' => 'E02006427',
        '6RE' => 'E02006427',
        '6RF' => 'E02006427',
        '6RG' => 'E02006427',
        '6RH' => 'E02006427',
        '6RJ' => 'E02006427',
        '6RL' => 'E02006345',
        '6RN' => 'E02006427',
        '6RP' => 'E02006345',
        '6RQ' => 'E02006427',
        '6RR' => 'E02006345',
        '6RS' => 'E02006427',
        '6RT' => 'E02006427',
        '6RU' => 'E02006427',
        '6RW' => 'E02006427',
        '6SD' => 'E02006427',
        '6SH' => 'E02006427',
        '6SJ' => 'E02006427',
        '6SL' => 'E02006427',
        '6SP' => 'E02006427',
        '6SQ' => 'E02006427',
        '6SR' => 'E02006427',
        '6SS' => 'E02006427',
        '6ST' => 'E02006421',
        '6SU' => 'E02006427',
        '6SW' => 'E02006423',
        '6SX' => 'E02006427',
        '6SY' => 'E02006427',
        '6SZ' => 'E02006427',
        '6TA' => 'E02006427',
        '6TB' => 'E02006427',
        '6TD' => 'E02006427',
        '6TE' => 'E02006427',
        '6TF' => 'E02006427',
        '6TG' => 'E02006427',
        '6TH' => 'E02006427',
        '6TJ' => 'E02006427',
        '6TL' => 'E02006427',
        '6TN' => 'E02006427',
        '6TP' => 'E02006427',
        '6TQ' => 'E02006427',
        '6TR' => 'E02006427',
        '6TS' => 'E02006427',
        '6TT' => 'E02006427',
        '6TU' => 'E02006427',
        '6TW' => 'E02006427',
        '6TX' => 'E02006427',
        '6TY' => 'E02006423',
        '6TZ' => 'E02006427',
        '6UA' => 'E02006427',
        '6UB' => 'E02006427',
        '6UD' => 'E02006427',
        '6WA' => 'E02006423',
        '6WB' => 'E02006423',
        '6WD' => 'E02006423',
        '6WE' => 'E02006423',
        '6WG' => 'E02006423',
        '6WJ' => 'E02006423',
        '6WX' => 'E02006423',
        '6WZ' => 'E02006423',
        '6XG' => 'E02006423',
        '6XH' => 'E02006423',
        '6XJ' => 'E02006423',
        '6XL' => 'E02006423',
        '6XN' => 'E02006423',
        '6XP' => 'E02006426',
        '6XQ' => 'E02006423',
        '6XR' => 'E02006426',
        '6XS' => 'E02006423',
        '6XT' => 'E02006427',
        '6XU' => 'E02006423',
        '6XW' => 'E02006426',
        '6XX' => 'E02006427',
        '6XY' => 'E02006423',
        '6XZ' => 'E02006423',
        '6YA' => 'E02006426',
        '6YB' => 'E02006426',
        '6YD' => 'E02006426',
        '6YE' => 'E02006423',
        '6YF' => 'E02006426',
        '6YG' => 'E02006426',
        '6YH' => 'E02006426',
        '6YJ' => 'E02006426',
        '6YL' => 'E02006426',
        '6YN' => 'E02006426',
        '6YP' => 'E02006423',
        '6YQ' => 'E02006426',
        '6YR' => 'E02006426',
        '6YS' => 'E02006423',
        '6YT' => 'E02006423',
        '6YU' => 'E02006423',
        '6YW' => 'E02006426',
        '6YY' => 'E02006423',
        '6YZ' => 'E02006426',
        '6ZG' => 'E02006423',
        '6ZH' => 'E02006426',
        '6ZJ' => 'E02006423',
        '6ZL' => 'E02006426',
        '6ZN' => 'E02006426',
        '6ZP' => 'E02006423',
        '6ZQ' => 'E02006423',
        '6ZR' => 'E02006423',
        '6ZT' => 'E02006423',
        '6ZU' => 'E02006423',
        '6ZW' => 'E02006423',
        '6ZX' => 'E02006423',
        '6ZY' => 'E02006423',
        '7AA' => 'E02006425',
        '7AB' => 'E02006425',
        '7AD' => 'E02006425',
        '7AE' => 'E02006425',
        '7AF' => 'E02006425',
        '7AH' => 'E02006425',
        '7AJ' => 'E02006426',
        '7AL' => 'E02006425',
        '7AN' => 'E02006425',
        '7AP' => 'E02006425',
        '7AQ' => 'E02006425',
        '7AR' => 'E02006425',
        '7AS' => 'E02006425',
        '7AT' => 'E02006425',
        '7AU' => 'E02006425',
        '7AW' => 'E02006425',
        '7AX' => 'E02006425',
        '7AY' => 'E02006425',
        '7BA' => 'E02006423',
        '7DD' => 'E02006423',
        '7DU' => 'E02006425',
        '7DX' => 'E02006425',
        '7DY' => 'E02006425',
        '7DZ' => 'E02006425',
        '7EA' => 'E02006425',
        '7EB' => 'E02006425',
        '7ED' => 'E02006425',
        '7EE' => 'E02006425',
        '7EF' => 'E02006425',
        '7EG' => 'E02006425',
        '7EH' => 'E02006425',
        '7EJ' => 'E02006425',
        '7EL' => 'E02006425',
        '7EN' => 'E02006425',
        '7EP' => 'E02006425',
        '7EQ' => 'E02006425',
        '7ER' => 'E02006425',
        '7EW' => 'E02006425',
        '7EX' => 'E02006425',
        '7FG' => 'E02006423',
        '7FH' => 'E02006423',
        '7FP' => 'E02006423',
        '7FS' => 'E02006423',
        '7GB' => 'E02006423',
        '7GG' => 'E02006423',
        '7GH' => 'E02006423',
        '7GN' => 'E02006425',
        '7GW' => 'E02006425',
        '7GX' => 'E02006423',
        '7HB' => 'E02006425',
        '7HD' => 'E02006425',
        '7HE' => 'E02006425',
        '7HF' => 'E02006425',
        '7HG' => 'E02006425',
        '7HH' => 'E02006425',
        '7HJ' => 'E02006425',
        '7HL' => 'E02006425',
        '7HN' => 'E02006425',
        '7HP' => 'E02006425',
        '7HQ' => 'E02006425',
        '7HR' => 'E02006425',
        '7HS' => 'E02006425',
        '7HT' => 'E02006425',
        '7HU' => 'E02006425',
        '7HW' => 'E02006425',
        '7HX' => 'E02006425',
        '7HY' => 'E02006425',
        '7HZ' => 'E02006425',
        '7JA' => 'E02006425',
        '7JD' => 'E02006425',
        '7JE' => 'E02006425',
        '7JF' => 'E02006425',
        '7JG' => 'E02006425',
        '7JJ' => 'E02006425',
        '7JN' => 'E02006425',
        '7JQ' => 'E02006425',
        '7JR' => 'E02006425',
        '7JW' => 'E02006425',
        '7JX' => 'E02006425',
        '7JY' => 'E02006425',
        '7NJ' => 'E02006427',
        '7PA' => 'E02006425',
        '7PB' => 'E02006425',
        '7PD' => 'E02006425',
        '7PE' => 'E02006425',
        '7PF' => 'E02006425',
        '7PG' => 'E02006425',
        '7PH' => 'E02006425',
        '7PJ' => 'E02006425',
        '7PL' => 'E02006425',
        '7PN' => 'E02006425',
        '7PP' => 'E02006425',
        '7PQ' => 'E02006425',
        '7PR' => 'E02006425',
        '7PS' => 'E02006425',
        '7PT' => 'E02006425',
        '7PU' => 'E02006425',
        '7PW' => 'E02006425',
        '7PX' => 'E02006425',
        '7PY' => 'E02006425',
        '7PZ' => 'E02006425',
        '7QA' => 'E02006425',
        '7QB' => 'E02006425',
        '7QD' => 'E02006425',
        '7QE' => 'E02006425',
        '7QF' => 'E02006425',
        '7QG' => 'E02006425',
        '7QH' => 'E02006425',
        '7QJ' => 'E02006425',
        '7QL' => 'E02006425',
        '7QN' => 'E02006425',
        '7QP' => 'E02006425',
        '7QQ' => 'E02006425',
        '7QR' => 'E02006425',
        '7QW' => 'E02006425',
        '7RD' => 'E02006425',
        '7RE' => 'E02006425',
        '7RF' => 'E02006425',
        '7SG' => 'E02004802',
        '7SL' => 'E02006425',
        '7SQ' => 'E02004802',
        '7SR' => 'E02006425',
        '7SS' => 'E02004802',
        '7ST' => 'E02004802',
        '7SU' => 'E02004802',
        '7SX' => 'E02004802',
        '7SY' => 'E02004802',
        '7SZ' => 'E02004802',
        '7UJ' => 'E02006425',
        '7UN' => 'E02006423',
        '7WA' => 'E02006423',
        '7WB' => 'E02006423',
        '7WD' => 'E02006423',
        '7WE' => 'E02006423',
        '7WN' => 'E02006425',
        '7WT' => 'E02006423',
        '7WW' => 'E02006423',
        '7WX' => 'E02006425',
        '7XA' => 'E02006425',
        '7XD' => 'E02006425',
        '7XW' => 'E02006425',
        '7XZ' => 'E02006423',
        '7YU' => 'E02006423',
        '7ZN' => 'E02006423',
        '7ZR' => 'E02006423',
        '7ZS' => 'E02006423',
        '7ZT' => 'E02006423',
        '7ZU' => 'E02006423',
        '7ZW' => 'E02006423',
        '8AB' => 'E02006425',
        '8AD' => 'E02006425',
        '8AE' => 'E02006424',
        '8AF' => 'E02006424',
        '8AG' => 'E02006425',
        '8AL' => 'E02006425',
        '8BA' => 'E02006423',
        '8BB' => 'E02006423',
        '8BS' => 'E02006425',
        '8BT' => 'E02006425',
        '8BU' => 'E02006425',
        '8BX' => 'E02006425',
        '8BY' => 'E02006425',
        '8BZ' => 'E02006425',
        '8DA' => 'E02006425',
        '8DE' => 'E02006425',
        '8DF' => 'E02006425',
        '8DG' => 'E02006425',
        '8DH' => 'E02006425',
        '8DJ' => 'E02006425',
        '8DL' => 'E02006425',
        '8DP' => 'E02006425',
        '8DQ' => 'E02006425',
        '8FW' => 'E02006423',
        '8GH' => 'E02006423',
        '8GJ' => 'E02006425',
        '8GL' => 'E02006425',
        '8GN' => 'E02006423',
        '8GQ' => 'E02006423',
        '8HA' => 'E02006423',
        '8HY' => 'E02006425',
        '8HZ' => 'E02006425',
        '8JL' => 'E02006425',
        '8JP' => 'E02006425',
        '8JS' => 'E02006425',
        '8JT' => 'E02006425',
        '8JU' => 'E02006425',
        '8JZ' => 'E02006425',
        '8LA' => 'E02006425',
        '8LB' => 'E02006425',
        '8LD' => 'E02006425',
        '8LE' => 'E02006425',
        '8LF' => 'E02006425',
        '8LG' => 'E02006425',
        '8LH' => 'E02006425',
        '8LJ' => 'E02006425',
        '8LL' => 'E02006425',
        '8LN' => 'E02006425',
        '8LP' => 'E02006425',
        '8LR' => 'E02006425',
        '8LS' => 'E02006425',
        '8LT' => 'E02006425',
        '8LU' => 'E02006425',
        '8LW' => 'E02006425',
        '8LX' => 'E02006425',
        '8LY' => 'E02006425',
        '8LZ' => 'E02006425',
        '8NA' => 'E02006425',
        '8NL' => 'E02006425',
        '8NR' => 'E02006425',
        '8NS' => 'E02006425',
        '8NT' => 'E02006425',
        '8NU' => 'E02006425',
        '8PA' => 'E02006425',
        '8PB' => 'E02006425',
        '8PD' => 'E02006425',
        '8PE' => 'E02006425',
        '8PF' => 'E02006425',
        '8PG' => 'E02006424',
        '8PH' => 'E02006425',
        '8PJ' => 'E02006425',
        '8PL' => 'E02006425',
        '8PN' => 'E02006425',
        '8PP' => 'E02006425',
        '8PQ' => 'E02006425',
        '8PR' => 'E02006425',
        '8PS' => 'E02006424',
        '8PT' => 'E02006424',
        '8PU' => 'E02006424',
        '8PW' => 'E02006425',
        '8PX' => 'E02006424',
        '8PY' => 'E02006425',
        '8PZ' => 'E02006425',
        '8QA' => 'E02006424',
        '8QB' => 'E02006424',
        '8QD' => 'E02006425',
        '8RG' => 'E02006424',
        '8RH' => 'E02006424',
        '8RJ' => 'E02006424',
        '8RL' => 'E02006424',
        '8RN' => 'E02006424',
        '8RP' => 'E02006424',
        '8RR' => 'E02006424',
        '8RS' => 'E02006424',
        '8RT' => 'E02006424',
        '8RU' => 'E02006424',
        '8RW' => 'E02006424',
        '8RX' => 'E02006424',
        '8SA' => 'E02006424',
        '8SB' => 'E02006424',
        '8SD' => 'E02006424',
        '8SE' => 'E02006424',
        '8SH' => 'E02006424',
        '8SJ' => 'E02006424',
        '8SN' => 'E02006424',
        '8SP' => 'E02006424',
        '8SR' => 'E02006424',
        '8SS' => 'E02006424',
        '8ST' => 'E02006424',
        '8SU' => 'E02006424',
        '8SW' => 'E02006424',
        '8SX' => 'E02006424',
        '8SY' => 'E02006424',
        '8SZ' => 'E02006424',
        '8TA' => 'E02006424',
        '8TB' => 'E02006424',
        '8TD' => 'E02006424',
        '8TE' => 'E02006424',
        '8TF' => 'E02006424',
        '8TG' => 'E02006424',
        '8TH' => 'E02006424',
        '8TJ' => 'E02006424',
        '8TQ' => 'E02006424',
        '8TR' => 'E02006424',
        '8TS' => 'E02006424',
        '8TT' => 'E02006424',
        '8TU' => 'E02006424',
        '8TX' => 'E02006424',
        '8TY' => 'E02006424',
        '8TZ' => 'E02006424',
        '8UA' => 'E02006424',
        '8UB' => 'E02006424',
        '8UD' => 'E02006424',
        '8UE' => 'E02006424',
        '8UF' => 'E02006424',
        '8UG' => 'E02006424',
        '8UH' => 'E02006426',
        '8UP' => 'E02006425',
        '8UQ' => 'E02006424',
        '8UR' => 'E02006426',
        '8UT' => 'E02006426',
        '8WA' => 'E02006423',
        '8WB' => 'E02006423',
        '8WD' => 'E02006423',
        '8WE' => 'E02006426',
        '8WL' => 'E02006423',
        '8WP' => 'E02006423',
        '8WU' => 'E02006423',
        '8WX' => 'E02006423',
        '8WZ' => 'E02006423',
        '8XA' => 'E02006425',
        '8XB' => 'E02006425',
        '8XD' => 'E02006425',
        '8XE' => 'E02006425',
        '8XF' => 'E02006425',
        '8XG' => 'E02006425',
        '8XH' => 'E02006425',
        '8XJ' => 'E02006425',
        '8XL' => 'E02006425',
        '8XN' => 'E02006425',
        '8XP' => 'E02006425',
        '8XQ' => 'E02006425',
        '8XR' => 'E02006425',
        '8XS' => 'E02006425',
        '8XT' => 'E02006425',
        '8XU' => 'E02006425',
        '8XX' => 'E02006425',
        '8YL' => 'E02006426',
        '8YN' => 'E02006426',
        '8YP' => 'E02006426',
        '8YQ' => 'E02006426',
        '8YR' => 'E02006426',
        '8YS' => 'E02006426',
        '8YT' => 'E02006426',
        '8YU' => 'E02006426',
        '8YW' => 'E02006426',
        '8YX' => 'E02006426',
        '8YY' => 'E02006423',
        '8YZ' => 'E02006426',
        '8ZR' => 'E02006423',
        '8ZT' => 'E02006423',
        '8ZW' => 'E02006426',
        '8ZX' => 'E02006423',
        '9AB' => 'E02006422',
        '9AD' => 'E02006422',
        '9AE' => 'E02006422',
        '9AF' => 'E02006422',
        '9AG' => 'E02006422',
        '9AH' => 'E02006422',
        '9AP' => 'E02006426',
        '9AR' => 'E02006426',
        '9AS' => 'E02006426',
        '9AT' => 'E02006426',
        '9AU' => 'E02006426',
        '9AX' => 'E02006426',
        '9AY' => 'E02006426',
        '9AZ' => 'E02006426',
        '9BA' => 'E02006426',
        '9BB' => 'E02006426',
        '9BD' => 'E02006426',
        '9BE' => 'E02006426',
        '9BG' => 'E02006426',
        '9BH' => 'E02006426',
        '9BJ' => 'E02006425',
        '9BL' => 'E02006422',
        '9BN' => 'E02006422',
        '9BP' => 'E02006422',
        '9BQ' => 'E02006426',
        '9BW' => 'E02006422',
        '9FA' => 'E02006426',
        '9FB' => 'E02006426',
        '9FD' => 'E02006426',
        '9FE' => 'E02006426',
        '9FF' => 'E02006426',
        '9FG' => 'E02006426',
        '9FH' => 'E02006426',
        '9FJ' => 'E02006426',
        '9FL' => 'E02006426',
        '9FN' => 'E02006426',
        '9FQ' => 'E02006426',
        '9FT' => 'E02006423',
        '9FU' => 'E02006426',
        '9GD' => 'E02006423',
        '9GQ' => 'E02006423',
        '9GT' => 'E02006425',
        '9LQ' => 'E02006425',
        '9NN' => 'E02006426',
        '9NP' => 'E02006426',
        '9NW' => 'E02006426',
        '9NX' => 'E02006427',
        '9NY' => 'E02006422',
        '9NZ' => 'E02006422',
        '9QA' => 'E02006422',
        '9QD' => 'E02006422',
        '9QE' => 'E02006422',
        '9QF' => 'E02006422',
        '9QG' => 'E02006422',
        '9QJ' => 'E02006422',
        '9QL' => 'E02006423',
        '9QN' => 'E02006422',
        '9QP' => 'E02006422',
        '9QR' => 'E02006422',
        '9QS' => 'E02006422',
        '9QT' => 'E02006422',
        '9QU' => 'E02006422',
        '9QW' => 'E02006422',
        '9QX' => 'E02006422',
        '9QY' => 'E02006422',
        '9QZ' => 'E02006422',
        '9RA' => 'E02006422',
        '9RB' => 'E02006422',
        '9RD' => 'E02006422',
        '9RE' => 'E02006422',
        '9RF' => 'E02006422',
        '9RY' => 'E02006422',
        '9TN' => 'E02006422',
        '9TP' => 'E02006422',
        '9TW' => 'E02006422',
        '9US' => 'E02006423',
        '9UU' => 'E02006426',
        '9UW' => 'E02006426',
        '9UX' => 'E02006426',
        '9UY' => 'E02006426',
        '9UZ' => 'E02006426',
        '9WA' => 'E02006423',
        '9WB' => 'E02006423',
        '9WJ' => 'E02006423',
        '9WP' => 'E02006423',
        '9WZ' => 'E02006426',
        '9XA' => 'E02006426',
        '9XJ' => 'E02006423',
        '9XN' => 'E02006426',
        '9XQ' => 'E02006423',
        '9XY' => 'E02006426',
        '9XZ' => 'E02006426',
        '9YA' => 'E02006426',
        '9YB' => 'E02006426',
        '9YD' => 'E02006426',
        '9YE' => 'E02006426',
        '9YF' => 'E02006426',
        '9YG' => 'E02006426',
        '9YH' => 'E02006426',
        '9YJ' => 'E02006426',
        '9ZJ' => 'E02006423',
        '9ZN' => 'E02006427',
        '9ZP' => 'E02006426',
        '9ZQ' => 'E02006423',
        '9ZR' => 'E02006423',
        '9ZS' => 'E02006426',
        '9ZT' => 'E02006423',
        '9ZU' => 'E02006423',
        '9ZX' => 'E02006423',
        '9ZY' => 'E02006426',
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