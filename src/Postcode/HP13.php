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
final class HP13
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '5AA' => 'E02003703',
        '5AB' => 'E02003703',
        '5AD' => 'E02003703',
        '5AE' => 'E02003703',
        '5AF' => 'E02003703',
        '5AG' => 'E02003703',
        '5AH' => 'E02003701',
        '5AJ' => 'E02006824',
        '5AL' => 'E02003701',
        '5AN' => 'E02003701',
        '5AP' => 'E02003703',
        '5AQ' => 'E02003703',
        '5AR' => 'E02003701',
        '5AS' => 'E02003701',
        '5AT' => 'E02003701',
        '5AU' => 'E02003703',
        '5AW' => 'E02003703',
        '5AX' => 'E02003703',
        '5AY' => 'E02003703',
        '5AZ' => 'E02003703',
        '5BA' => 'E02003703',
        '5BB' => 'E02003698',
        '5BD' => 'E02003703',
        '5BE' => 'E02003703',
        '5BF' => 'E02003703',
        '5BG' => 'E02003703',
        '5BH' => 'E02003703',
        '5BJ' => 'E02003703',
        '5BL' => 'E02003703',
        '5BN' => 'E02003703',
        '5BP' => 'E02003703',
        '5BQ' => 'E02003703',
        '5BS' => 'E02003710',
        '5BT' => 'E02003703',
        '5BU' => 'E02003701',
        '5BW' => 'E02003703',
        '5BX' => 'E02003701',
        '5BY' => 'E02003703',
        '5BZ' => 'E02003703',
        '5DA' => 'E02003701',
        '5DB' => 'E02003701',
        '5DD' => 'E02003710',
        '5DE' => 'E02003701',
        '5DF' => 'E02003703',
        '5DG' => 'E02003710',
        '5DH' => 'E02003710',
        '5DJ' => 'E02003701',
        '5DL' => 'E02003710',
        '5DN' => 'E02003701',
        '5DP' => 'E02003701',
        '5DQ' => 'E02003710',
        '5DR' => 'E02003703',
        '5DS' => 'E02003703',
        '5DT' => 'E02003703',
        '5DU' => 'E02003703',
        '5DW' => 'E02003701',
        '5DX' => 'E02003710',
        '5DY' => 'E02003703',
        '5DZ' => 'E02003710',
        '5EA' => 'E02003701',
        '5EB' => 'E02003701',
        '5ED' => 'E02003701',
        '5EE' => 'E02003701',
        '5EF' => 'E02003701',
        '5EG' => 'E02003701',
        '5EH' => 'E02003701',
        '5EJ' => 'E02003701',
        '5EL' => 'E02003701',
        '5EN' => 'E02003701',
        '5EP' => 'E02003701',
        '5EQ' => 'E02003701',
        '5ER' => 'E02003701',
        '5ES' => 'E02003710',
        '5ET' => 'E02003701',
        '5EU' => 'E02003701',
        '5EW' => 'E02003701',
        '5EX' => 'E02003710',
        '5EY' => 'E02003701',
        '5EZ' => 'E02003701',
        '5FA' => 'E02003701',
        '5FB' => 'E02003710',
        '5FD' => 'E02003701',
        '5FE' => 'E02003703',
        '5FF' => 'E02003703',
        '5FG' => 'E02003703',
        '5FH' => 'E02003701',
        '5FJ' => 'E02003710',
        '5FL' => 'E02003701',
        '5FN' => 'E02003703',
        '5FP' => 'E02003710',
        '5FQ' => 'E02003701',
        '5FR' => 'E02003710',
        '5FS' => 'E02003710',
        '5FT' => 'E02003701',
        '5FU' => 'E02003710',
        '5FW' => 'E02003710',
        '5FX' => 'E02003710',
        '5FY' => 'E02003703',
        '5FZ' => 'E02003710',
        '5GA' => 'E02003701',
        '5GB' => 'E02003701',
        '5GD' => 'E02003701',
        '5GG' => 'E02003701',
        '5GH' => 'E02003701',
        '5GJ' => 'E02003701',
        '5GL' => 'E02003701',
        '5GN' => 'E02003701',
        '5GP' => 'E02003701',
        '5GQ' => 'E02003703',
        '5GR' => 'E02003701',
        '5GS' => 'E02003710',
        '5GT' => 'E02003710',
        '5GU' => 'E02003710',
        '5GW' => 'E02003710',
        '5GX' => 'E02003701',
        '5GY' => 'E02003710',
        '5GZ' => 'E02003710',
        '5HA' => 'E02003710',
        '5HB' => 'E02003701',
        '5HD' => 'E02003701',
        '5HE' => 'E02003701',
        '5HF' => 'E02003703',
        '5HG' => 'E02003701',
        '5HH' => 'E02003710',
        '5HJ' => 'E02003701',
        '5HL' => 'E02003710',
        '5HN' => 'E02003710',
        '5HP' => 'E02003701',
        '5HQ' => 'E02003710',
        '5HR' => 'E02003710',
        '5HS' => 'E02003701',
        '5HT' => 'E02003701',
        '5HU' => 'E02003701',
        '5HW' => 'E02003710',
        '5HX' => 'E02003701',
        '5HY' => 'E02003701',
        '5HZ' => 'E02003701',
        '5JA' => 'E02003701',
        '5JB' => 'E02003701',
        '5JD' => 'E02003701',
        '5JE' => 'E02003701',
        '5JF' => 'E02003701',
        '5JG' => 'E02003701',
        '5JH' => 'E02003701',
        '5JJ' => 'E02003701',
        '5JL' => 'E02003701',
        '5JN' => 'E02003701',
        '5JP' => 'E02003701',
        '5JQ' => 'E02003701',
        '5JR' => 'E02003701',
        '5JS' => 'E02003701',
        '5JT' => 'E02003701',
        '5JU' => 'E02003710',
        '5JW' => 'E02003701',
        '5JX' => 'E02003701',
        '5JY' => 'E02003701',
        '5JZ' => 'E02003701',
        '5LA' => 'E02003701',
        '5LB' => 'E02003701',
        '5LD' => 'E02003701',
        '5LE' => 'E02003701',
        '5LF' => 'E02003701',
        '5LG' => 'E02003701',
        '5LH' => 'E02003703',
        '5LJ' => 'E02003703',
        '5LL' => 'E02003701',
        '5LN' => 'E02003701',
        '5LP' => 'E02003701',
        '5LQ' => 'E02003701',
        '5LR' => 'E02003701',
        '5LS' => 'E02003701',
        '5LT' => 'E02003701',
        '5LU' => 'E02003701',
        '5LW' => 'E02003701',
        '5LX' => 'E02003701',
        '5LY' => 'E02003701',
        '5LZ' => 'E02003701',
        '5NA' => 'E02003701',
        '5NB' => 'E02003701',
        '5ND' => 'E02003701',
        '5NE' => 'E02003701',
        '5NF' => 'E02003703',
        '5NG' => 'E02003701',
        '5NH' => 'E02003701',
        '5NJ' => 'E02003701',
        '5NL' => 'E02003701',
        '5NN' => 'E02003701',
        '5NP' => 'E02003701',
        '5NQ' => 'E02003701',
        '5NR' => 'E02003701',
        '5NS' => 'E02003703',
        '5NT' => 'E02003703',
        '5NU' => 'E02003703',
        '5NW' => 'E02003701',
        '5NX' => 'E02003703',
        '5NY' => 'E02003703',
        '5NZ' => 'E02003703',
        '5PA' => 'E02003703',
        '5PB' => 'E02003703',
        '5PD' => 'E02003703',
        '5PE' => 'E02003703',
        '5PF' => 'E02003703',
        '5PG' => 'E02003701',
        '5PH' => 'E02003703',
        '5PJ' => 'E02003710',
        '5PL' => 'E02003701',
        '5PN' => 'E02003701',
        '5PP' => 'E02003701',
        '5PQ' => 'E02003703',
        '5PR' => 'E02003703',
        '5PS' => 'E02003703',
        '5PT' => 'E02003703',
        '5PU' => 'E02003703',
        '5PW' => 'E02003710',
        '5PX' => 'E02003703',
        '5PY' => 'E02003703',
        '5PZ' => 'E02003703',
        '5QA' => 'E02003703',
        '5QB' => 'E02003703',
        '5QD' => 'E02003703',
        '5QE' => 'E02003703',
        '5QF' => 'E02003703',
        '5QG' => 'E02003703',
        '5QH' => 'E02003703',
        '5QJ' => 'E02003703',
        '5QL' => 'E02003703',
        '5QN' => 'E02003710',
        '5QP' => 'E02003703',
        '5QQ' => 'E02003703',
        '5QR' => 'E02003703',
        '5QS' => 'E02003710',
        '5QT' => 'E02003710',
        '5QU' => 'E02003710',
        '5QW' => 'E02003710',
        '5QX' => 'E02003710',
        '5QY' => 'E02003703',
        '5QZ' => 'E02003710',
        '5RA' => 'E02003701',
        '5RB' => 'E02003701',
        '5RD' => 'E02003701',
        '5RE' => 'E02003701',
        '5RF' => 'E02003701',
        '5RG' => 'E02003701',
        '5RH' => 'E02003701',
        '5RJ' => 'E02003701',
        '5RL' => 'E02003701',
        '5RN' => 'E02003701',
        '5RP' => 'E02003701',
        '5RQ' => 'E02003701',
        '5RR' => 'E02003701',
        '5RS' => 'E02003701',
        '5RT' => 'E02003701',
        '5RU' => 'E02003701',
        '5RW' => 'E02003701',
        '5RX' => 'E02003701',
        '5RY' => 'E02003701',
        '5RZ' => 'E02003701',
        '5SA' => 'E02003701',
        '5SB' => 'E02003701',
        '5SD' => 'E02003701',
        '5SE' => 'E02003701',
        '5SF' => 'E02003701',
        '5SG' => 'E02003701',
        '5SH' => 'E02003701',
        '5SJ' => 'E02003701',
        '5SL' => 'E02003701',
        '5SN' => 'E02003701',
        '5SP' => 'E02003701',
        '5SQ' => 'E02003701',
        '5SR' => 'E02003701',
        '5SS' => 'E02003701',
        '5ST' => 'E02003701',
        '5SU' => 'E02003701',
        '5SW' => 'E02003701',
        '5SX' => 'E02003701',
        '5SY' => 'E02003701',
        '5SZ' => 'E02003701',
        '5TA' => 'E02003701',
        '5TB' => 'E02003701',
        '5TD' => 'E02003701',
        '5TE' => 'E02003701',
        '5TF' => 'E02003701',
        '5TG' => 'E02003701',
        '5TH' => 'E02003701',
        '5TJ' => 'E02003701',
        '5TL' => 'E02003701',
        '5TN' => 'E02003701',
        '5TP' => 'E02003701',
        '5TQ' => 'E02003701',
        '5TR' => 'E02003701',
        '5TS' => 'E02003701',
        '5TT' => 'E02003701',
        '5TU' => 'E02003701',
        '5TW' => 'E02003701',
        '5TX' => 'E02003710',
        '5TY' => 'E02003701',
        '5TZ' => 'E02003701',
        '5UA' => 'E02003701',
        '5UB' => 'E02003701',
        '5UD' => 'E02003701',
        '5UE' => 'E02003701',
        '5UF' => 'E02003701',
        '5UG' => 'E02003701',
        '5UH' => 'E02003701',
        '5UJ' => 'E02003701',
        '5UL' => 'E02003701',
        '5UN' => 'E02003701',
        '5UP' => 'E02003701',
        '5UQ' => 'E02003701',
        '5UR' => 'E02003701',
        '5US' => 'E02003701',
        '5UT' => 'E02003701',
        '5UU' => 'E02003701',
        '5UW' => 'E02003701',
        '5UX' => 'E02003701',
        '5UY' => 'E02003701',
        '5UZ' => 'E02003701',
        '5WA' => 'E02003710',
        '5WB' => 'E02003710',
        '5WD' => 'E02003710',
        '5WE' => 'E02003710',
        '5WF' => 'E02003710',
        '5WG' => 'E02003710',
        '5WH' => 'E02003710',
        '5WJ' => 'E02003710',
        '5WL' => 'E02003710',
        '5WN' => 'E02003710',
        '5WP' => 'E02003710',
        '5WQ' => 'E02003710',
        '5WR' => 'E02003710',
        '5WS' => 'E02003710',
        '5WT' => 'E02003710',
        '5WU' => 'E02003710',
        '5WW' => 'E02003710',
        '5WX' => 'E02003710',
        '5XA' => 'E02003701',
        '5XB' => 'E02003701',
        '5XD' => 'E02003701',
        '5XE' => 'E02003710',
        '5XF' => 'E02003701',
        '5XG' => 'E02003701',
        '5XH' => 'E02003701',
        '5XJ' => 'E02003701',
        '5XL' => 'E02003701',
        '5XN' => 'E02003701',
        '5XP' => 'E02003701',
        '5XQ' => 'E02003701',
        '5XR' => 'E02003701',
        '5XS' => 'E02003710',
        '5XT' => 'E02003701',
        '5XU' => 'E02003710',
        '5XW' => 'E02003701',
        '5XX' => 'E02003701',
        '5XY' => 'E02003701',
        '5XZ' => 'E02003701',
        '5YA' => 'E02003701',
        '5YB' => 'E02003701',
        '5YD' => 'E02003701',
        '5YE' => 'E02003701',
        '5YF' => 'E02003701',
        '5YG' => 'E02003701',
        '5YH' => 'E02003701',
        '5YJ' => 'E02003701',
        '5YL' => 'E02003701',
        '5YN' => 'E02003701',
        '5YP' => 'E02003701',
        '5YQ' => 'E02003701',
        '5YR' => 'E02003710',
        '5YS' => 'E02003701',
        '5YT' => 'E02003701',
        '5YU' => 'E02003701',
        '5YW' => 'E02003701',
        '5YX' => 'E02003701',
        '5YY' => 'E02003701',
        '5YZ' => 'E02003701',
        '5ZA' => 'E02003710',
        '5ZB' => 'E02003701',
        '5ZD' => 'E02003710',
        '5ZE' => 'E02003710',
        '5ZF' => 'E02003701',
        '5ZG' => 'E02003710',
        '5ZJ' => 'E02003701',
        '5ZL' => 'E02003710',
        '5ZN' => 'E02003710',
        '5ZP' => 'E02003710',
        '5ZQ' => 'E02003710',
        '5ZR' => 'E02003710',
        '5ZU' => 'E02003710',
        '5ZW' => 'E02003710',
        '6AA' => 'E02003711',
        '6AB' => 'E02003711',
        '6AD' => 'E02003711',
        '6AE' => 'E02003711',
        '6AF' => 'E02003711',
        '6AG' => 'E02003711',
        '6AH' => 'E02003711',
        '6AJ' => 'E02003705',
        '6AL' => 'E02003711',
        '6AN' => 'E02003711',
        '6AP' => 'E02003711',
        '6AQ' => 'E02003711',
        '6AR' => 'E02003711',
        '6AS' => 'E02003705',
        '6AT' => 'E02003705',
        '6AU' => 'E02003705',
        '6AW' => 'E02003711',
        '6AX' => 'E02003705',
        '6AY' => 'E02003705',
        '6AZ' => 'E02003705',
        '6BA' => 'E02003711',
        '6BB' => 'E02003710',
        '6BD' => 'E02003703',
        '6BE' => 'E02003711',
        '6BF' => 'E02003710',
        '6BG' => 'E02003703',
        '6BH' => 'E02003703',
        '6BJ' => 'E02003703',
        '6BL' => 'E02003703',
        '6BN' => 'E02003703',
        '6BP' => 'E02003703',
        '6BQ' => 'E02003703',
        '6BS' => 'E02003703',
        '6BT' => 'E02003703',
        '6BU' => 'E02003703',
        '6BW' => 'E02003703',
        '6BX' => 'E02003705',
        '6BY' => 'E02003705',
        '6BZ' => 'E02003705',
        '6DA' => 'E02003705',
        '6DB' => 'E02003705',
        '6DD' => 'E02003705',
        '6DE' => 'E02003703',
        '6DF' => 'E02003705',
        '6DG' => 'E02003705',
        '6DH' => 'E02003706',
        '6DJ' => 'E02003705',
        '6DL' => 'E02003703',
        '6DN' => 'E02003705',
        '6DP' => 'E02003705',
        '6DQ' => 'E02003705',
        '6DR' => 'E02003705',
        '6DS' => 'E02003705',
        '6DT' => 'E02003705',
        '6DU' => 'E02003705',
        '6DW' => 'E02003705',
        '6DX' => 'E02003705',
        '6DY' => 'E02003705',
        '6DZ' => 'E02003705',
        '6EA' => 'E02003705',
        '6EB' => 'E02003705',
        '6ED' => 'E02003705',
        '6EE' => 'E02003705',
        '6EF' => 'E02003703',
        '6EG' => 'E02003711',
        '6EH' => 'E02003705',
        '6EJ' => 'E02003710',
        '6EL' => 'E02003705',
        '6EN' => 'E02003711',
        '6EP' => 'E02003705',
        '6EQ' => 'E02003705',
        '6ER' => 'E02003705',
        '6ES' => 'E02003705',
        '6ET' => 'E02003705',
        '6EU' => 'E02003710',
        '6EW' => 'E02003705',
        '6EX' => 'E02003705',
        '6EY' => 'E02003705',
        '6EZ' => 'E02003705',
        '6FA' => 'E02003710',
        '6FB' => 'E02003703',
        '6FD' => 'E02003703',
        '6FE' => 'E02003710',
        '6FF' => 'E02003706',
        '6FH' => 'E02003703',
        '6FJ' => 'E02003703',
        '6FL' => 'E02003703',
        '6FN' => 'E02003710',
        '6FP' => 'E02003705',
        '6FQ' => 'E02003710',
        '6FR' => 'E02003710',
        '6FS' => 'E02003703',
        '6FT' => 'E02003710',
        '6FU' => 'E02003703',
        '6FW' => 'E02003703',
        '6FX' => 'E02003703',
        '6FY' => 'E02003703',
        '6FZ' => 'E02003703',
        '6GA' => 'E02003710',
        '6GB' => 'E02003710',
        '6GD' => 'E02003705',
        '6GE' => 'E02003710',
        '6GF' => 'E02003705',
        '6GG' => 'E02003710',
        '6GH' => 'E02003705',
        '6GJ' => 'E02003703',
        '6GL' => 'E02003703',
        '6GN' => 'E02003705',
        '6GP' => 'E02003710',
        '6GQ' => 'E02003703',
        '6GR' => 'E02003706',
        '6GS' => 'E02003710',
        '6GT' => 'E02003703',
        '6GU' => 'E02003705',
        '6GW' => 'E02003705',
        '6GX' => 'E02003703',
        '6GY' => 'E02003710',
        '6GZ' => 'E02003703',
        '6HA' => 'E02003705',
        '6HB' => 'E02003705',
        '6HD' => 'E02003705',
        '6HE' => 'E02003710',
        '6HF' => 'E02003703',
        '6HG' => 'E02003705',
        '6HH' => 'E02003705',
        '6HJ' => 'E02003705',
        '6HL' => 'E02003703',
        '6HN' => 'E02003703',
        '6HP' => 'E02003705',
        '6HQ' => 'E02003705',
        '6HR' => 'E02003705',
        '6HS' => 'E02003710',
        '6HT' => 'E02003705',
        '6HU' => 'E02003703',
        '6HW' => 'E02003705',
        '6HX' => 'E02003705',
        '6HY' => 'E02003705',
        '6HZ' => 'E02003705',
        '6JA' => 'E02003705',
        '6JB' => 'E02003705',
        '6JD' => 'E02003705',
        '6JE' => 'E02003705',
        '6JG' => 'E02003705',
        '6JH' => 'E02003706',
        '6JJ' => 'E02003706',
        '6JL' => 'E02003706',
        '6JN' => 'E02003706',
        '6JP' => 'E02003706',
        '6JQ' => 'E02003705',
        '6JR' => 'E02003706',
        '6JS' => 'E02003706',
        '6JT' => 'E02003706',
        '6JU' => 'E02003706',
        '6JW' => 'E02003706',
        '6JX' => 'E02003706',
        '6JY' => 'E02003706',
        '6JZ' => 'E02003705',
        '6LA' => 'E02003710',
        '6LB' => 'E02003710',
        '6LD' => 'E02003710',
        '6LE' => 'E02003710',
        '6LF' => 'E02003710',
        '6LG' => 'E02003710',
        '6LH' => 'E02003710',
        '6LJ' => 'E02003710',
        '6LL' => 'E02003703',
        '6LN' => 'E02003710',
        '6LP' => 'E02003710',
        '6LQ' => 'E02003710',
        '6LR' => 'E02003710',
        '6LS' => 'E02003710',
        '6LT' => 'E02003710',
        '6LU' => 'E02003710',
        '6LW' => 'E02003710',
        '6LX' => 'E02003703',
        '6LY' => 'E02003703',
        '6LZ' => 'E02003703',
        '6NA' => 'E02003705',
        '6NB' => 'E02003703',
        '6ND' => 'E02003710',
        '6NE' => 'E02003710',
        '6NF' => 'E02003703',
        '6NG' => 'E02003710',
        '6NH' => 'E02003703',
        '6NJ' => 'E02003703',
        '6NL' => 'E02003703',
        '6NN' => 'E02003710',
        '6NP' => 'E02003703',
        '6NQ' => 'E02003710',
        '6NR' => 'E02003703',
        '6NS' => 'E02003710',
        '6NT' => 'E02003703',
        '6NU' => 'E02003703',
        '6NW' => 'E02003710',
        '6NX' => 'E02003703',
        '6NY' => 'E02003703',
        '6NZ' => 'E02003705',
        '6PA' => 'E02003703',
        '6PB' => 'E02003703',
        '6PD' => 'E02003703',
        '6PE' => 'E02003703',
        '6PF' => 'E02003703',
        '6PG' => 'E02003703',
        '6PH' => 'E02003703',
        '6PJ' => 'E02003703',
        '6PL' => 'E02003703',
        '6PN' => 'E02003703',
        '6PP' => 'E02003703',
        '6PQ' => 'E02003703',
        '6PR' => 'E02003703',
        '6PS' => 'E02003703',
        '6PT' => 'E02003711',
        '6PU' => 'E02003703',
        '6PW' => 'E02003703',
        '6PX' => 'E02003703',
        '6PY' => 'E02003703',
        '6PZ' => 'E02003703',
        '6QA' => 'E02003703',
        '6QB' => 'E02003703',
        '6QD' => 'E02003703',
        '6QE' => 'E02003703',
        '6QF' => 'E02003703',
        '6QG' => 'E02003703',
        '6QH' => 'E02003703',
        '6QJ' => 'E02003703',
        '6QL' => 'E02003703',
        '6QN' => 'E02003703',
        '6QP' => 'E02003703',
        '6QQ' => 'E02003703',
        '6QR' => 'E02003703',
        '6QS' => 'E02003703',
        '6QT' => 'E02003703',
        '6QU' => 'E02003703',
        '6QW' => 'E02003703',
        '6QX' => 'E02003703',
        '6QY' => 'E02003703',
        '6QZ' => 'E02003703',
        '6RA' => 'E02003703',
        '6RB' => 'E02003705',
        '6RD' => 'E02003703',
        '6RE' => 'E02003710',
        '6RF' => 'E02003710',
        '6RG' => 'E02003710',
        '6RH' => 'E02003710',
        '6RJ' => 'E02003710',
        '6RL' => 'E02003710',
        '6RN' => 'E02003710',
        '6RP' => 'E02003710',
        '6RQ' => 'E02003710',
        '6RR' => 'E02003710',
        '6RS' => 'E02003703',
        '6RT' => 'E02003703',
        '6RU' => 'E02003710',
        '6RW' => 'E02003710',
        '6RX' => 'E02003710',
        '6RY' => 'E02003710',
        '6RZ' => 'E02003710',
        '6SA' => 'E02003710',
        '6SB' => 'E02003710',
        '6SD' => 'E02003703',
        '6SE' => 'E02003710',
        '6SF' => 'E02003710',
        '6SG' => 'E02003703',
        '6SH' => 'E02003703',
        '6SJ' => 'E02003710',
        '6SL' => 'E02003703',
        '6SN' => 'E02003703',
        '6SP' => 'E02003703',
        '6SQ' => 'E02003703',
        '6SR' => 'E02003703',
        '6SS' => 'E02003710',
        '6ST' => 'E02003703',
        '6SU' => 'E02003703',
        '6SW' => 'E02003703',
        '6SX' => 'E02003703',
        '6SY' => 'E02003706',
        '6SZ' => 'E02003703',
        '6TA' => 'E02003710',
        '6TB' => 'E02003703',
        '6TD' => 'E02003710',
        '6TE' => 'E02003703',
        '6TF' => 'E02003703',
        '6TG' => 'E02003710',
        '6TH' => 'E02003710',
        '6TJ' => 'E02003706',
        '6TL' => 'E02003706',
        '6TN' => 'E02003710',
        '6TP' => 'E02003706',
        '6TQ' => 'E02003710',
        '6TR' => 'E02003705',
        '6TS' => 'E02003705',
        '6TT' => 'E02003705',
        '6TU' => 'E02003706',
        '6TW' => 'E02003706',
        '6TX' => 'E02003705',
        '6TY' => 'E02003705',
        '6TZ' => 'E02003703',
        '6UA' => 'E02003705',
        '6UB' => 'E02003705',
        '6UD' => 'E02003705',
        '6UE' => 'E02003705',
        '6UF' => 'E02003705',
        '6UG' => 'E02003706',
        '6UH' => 'E02003706',
        '6UJ' => 'E02003705',
        '6UL' => 'E02003705',
        '6UN' => 'E02003705',
        '6UP' => 'E02003705',
        '6UQ' => 'E02003706',
        '6UR' => 'E02003705',
        '6US' => 'E02003703',
        '6UT' => 'E02003710',
        '6UU' => 'E02003703',
        '6UW' => 'E02003705',
        '6UX' => 'E02003703',
        '6UY' => 'E02003703',
        '6UZ' => 'E02003705',
        '6WA' => 'E02003710',
        '6WB' => 'E02003703',
        '6WD' => 'E02003710',
        '6WE' => 'E02003710',
        '6WF' => 'E02003710',
        '6WG' => 'E02003710',
        '6WH' => 'E02003710',
        '6WJ' => 'E02003710',
        '6WL' => 'E02003703',
        '6WN' => 'E02003710',
        '6WP' => 'E02003710',
        '6WQ' => 'E02003710',
        '6WR' => 'E02003710',
        '6WS' => 'E02003710',
        '6WT' => 'E02003710',
        '6WW' => 'E02003710',
        '6WX' => 'E02003710',
        '6WY' => 'E02003710',
        '6WZ' => 'E02003710',
        '6XA' => 'E02003703',
        '6XB' => 'E02003703',
        '6XD' => 'E02003703',
        '6XE' => 'E02003705',
        '6XF' => 'E02003710',
        '6XG' => 'E02003705',
        '6XH' => 'E02003705',
        '6XJ' => 'E02003705',
        '6XL' => 'E02003705',
        '6XN' => 'E02003710',
        '6XP' => 'E02003705',
        '6XQ' => 'E02003705',
        '6XR' => 'E02003705',
        '6XS' => 'E02003705',
        '6XT' => 'E02003705',
        '6XU' => 'E02003705',
        '6XW' => 'E02003705',
        '6XX' => 'E02003705',
        '6XY' => 'E02003705',
        '6XZ' => 'E02003705',
        '6YA' => 'E02003705',
        '6YB' => 'E02003705',
        '6YD' => 'E02003705',
        '6YE' => 'E02003710',
        '6YF' => 'E02003710',
        '6YG' => 'E02003710',
        '6YH' => 'E02003710',
        '6YJ' => 'E02003710',
        '6YL' => 'E02003710',
        '6YN' => 'E02003710',
        '6YP' => 'E02003710',
        '6YQ' => 'E02003710',
        '6YS' => 'E02003710',
        '6YT' => 'E02003710',
        '6YU' => 'E02003710',
        '6YW' => 'E02003710',
        '6YX' => 'E02003710',
        '6YY' => 'E02003710',
        '6YZ' => 'E02003710',
        '6ZB' => 'E02003710',
        '6ZD' => 'E02003710',
        '6ZE' => 'E02003710',
        '6ZF' => 'E02003710',
        '6ZH' => 'E02003710',
        '6ZJ' => 'E02003710',
        '6ZL' => 'E02003703',
        '6ZN' => 'E02003710',
        '6ZP' => 'E02003710',
        '6ZR' => 'E02003710',
        '6ZW' => 'E02003710',
        '6ZZ' => 'E02003710',
        '7AA' => 'E02003709',
        '7AB' => 'E02003711',
        '7AD' => 'E02003711',
        '7AE' => 'E02003706',
        '7AF' => 'E02003711',
        '7AG' => 'E02003711',
        '7AH' => 'E02003711',
        '7AJ' => 'E02003711',
        '7AL' => 'E02003711',
        '7AN' => 'E02003711',
        '7AP' => 'E02003711',
        '7AQ' => 'E02003711',
        '7AR' => 'E02003711',
        '7AS' => 'E02003711',
        '7AT' => 'E02003711',
        '7AU' => 'E02003711',
        '7AW' => 'E02003711',
        '7AX' => 'E02003711',
        '7AY' => 'E02003711',
        '7AZ' => 'E02003711',
        '7BA' => 'E02003711',
        '7BB' => 'E02003704',
        '7BD' => 'E02003704',
        '7BE' => 'E02003704',
        '7BF' => 'E02003711',
        '7BG' => 'E02003704',
        '7BH' => 'E02003711',
        '7BJ' => 'E02003704',
        '7BL' => 'E02003704',
        '7BN' => 'E02003704',
        '7BP' => 'E02003704',
        '7BQ' => 'E02003704',
        '7BS' => 'E02003704',
        '7BT' => 'E02003709',
        '7BU' => 'E02003709',
        '7BW' => 'E02003704',
        '7BX' => 'E02003704',
        '7BY' => 'E02003704',
        '7BZ' => 'E02003704',
        '7DA' => 'E02003704',
        '7DB' => 'E02003703',
        '7DD' => 'E02003709',
        '7DE' => 'E02003711',
        '7DF' => 'E02003709',
        '7DG' => 'E02003703',
        '7DH' => 'E02003711',
        '7DJ' => 'E02003711',
        '7DL' => 'E02003709',
        '7DN' => 'E02003703',
        '7DP' => 'E02003709',
        '7DQ' => 'E02003711',
        '7DR' => 'E02003711',
        '7DS' => 'E02003711',
        '7DT' => 'E02003711',
        '7DU' => 'E02003711',
        '7DW' => 'E02003711',
        '7DX' => 'E02003709',
        '7DY' => 'E02003709',
        '7DZ' => 'E02003709',
        '7EA' => 'E02003709',
        '7EB' => 'E02003711',
        '7ED' => 'E02003709',
        '7EE' => 'E02003709',
        '7EF' => 'E02003709',
        '7EG' => 'E02003709',
        '7EH' => 'E02003711',
        '7EJ' => 'E02003711',
        '7EL' => 'E02003709',
        '7EN' => 'E02003709',
        '7EP' => 'E02003709',
        '7EQ' => 'E02003711',
        '7ER' => 'E02003709',
        '7ES' => 'E02003709',
        '7ET' => 'E02003709',
        '7EU' => 'E02003709',
        '7EW' => 'E02003709',
        '7EX' => 'E02003709',
        '7EY' => 'E02003709',
        '7EZ' => 'E02003709',
        '7FA' => 'E02003710',
        '7FB' => 'E02003710',
        '7FD' => 'E02003706',
        '7FE' => 'E02003710',
        '7FF' => 'E02003711',
        '7FG' => 'E02003710',
        '7FH' => 'E02003709',
        '7FJ' => 'E02003710',
        '7FL' => 'E02003709',
        '7FN' => 'E02003711',
        '7FP' => 'E02003710',
        '7FQ' => 'E02003711',
        '7FR' => 'E02003709',
        '7FS' => 'E02003709',
        '7FT' => 'E02003706',
        '7FU' => 'E02003711',
        '7FW' => 'E02003706',
        '7FX' => 'E02003706',
        '7FY' => 'E02003709',
        '7FZ' => 'E02003706',
        '7GA' => 'E02003709',
        '7GB' => 'E02003710',
        '7GD' => 'E02003710',
        '7GE' => 'E02003710',
        '7GF' => 'E02003706',
        '7GG' => 'E02003706',
        '7GH' => 'E02003710',
        '7GJ' => 'E02003709',
        '7GL' => 'E02003710',
        '7GN' => 'E02003710',
        '7GP' => 'E02003710',
        '7GQ' => 'E02003711',
        '7GR' => 'E02003706',
        '7GS' => 'E02003710',
        '7GT' => 'E02003709',
        '7GU' => 'E02003709',
        '7GW' => 'E02003703',
        '7GX' => 'E02003709',
        '7GY' => 'E02003706',
        '7GZ' => 'E02003710',
        '7HA' => 'E02003709',
        '7HB' => 'E02003709',
        '7HD' => 'E02003709',
        '7HE' => 'E02003709',
        '7HF' => 'E02003711',
        '7HG' => 'E02003711',
        '7HH' => 'E02003709',
        '7HJ' => 'E02003709',
        '7HL' => 'E02003709',
        '7HN' => 'E02003709',
        '7HP' => 'E02003709',
        '7HQ' => 'E02003709',
        '7HR' => 'E02003709',
        '7HS' => 'E02003709',
        '7HT' => 'E02003709',
        '7HU' => 'E02003709',
        '7HW' => 'E02003709',
        '7HX' => 'E02003709',
        '7HY' => 'E02003709',
        '7HZ' => 'E02003709',
        '7JA' => 'E02003709',
        '7JB' => 'E02003709',
        '7JD' => 'E02003709',
        '7JE' => 'E02003709',
        '7JF' => 'E02003709',
        '7JG' => 'E02003711',
        '7JH' => 'E02003709',
        '7JJ' => 'E02003709',
        '7JL' => 'E02003709',
        '7JN' => 'E02003709',
        '7JP' => 'E02003705',
        '7JQ' => 'E02003710',
        '7JR' => 'E02003705',
        '7JS' => 'E02003705',
        '7JT' => 'E02003705',
        '7JU' => 'E02003705',
        '7JW' => 'E02003711',
        '7JX' => 'E02003710',
        '7JY' => 'E02003706',
        '7JZ' => 'E02003710',
        '7LA' => 'E02003705',
        '7LB' => 'E02003705',
        '7LD' => 'E02003705',
        '7LE' => 'E02003705',
        '7LF' => 'E02003705',
        '7LG' => 'E02003705',
        '7LH' => 'E02003706',
        '7LJ' => 'E02003706',
        '7LL' => 'E02003706',
        '7LN' => 'E02003706',
        '7LP' => 'E02003706',
        '7LQ' => 'E02003705',
        '7LR' => 'E02003706',
        '7LS' => 'E02003706',
        '7LT' => 'E02003706',
        '7LU' => 'E02003706',
        '7LW' => 'E02003706',
        '7LX' => 'E02003706',
        '7LY' => 'E02003706',
        '7LZ' => 'E02003706',
        '7NA' => 'E02003706',
        '7NB' => 'E02003706',
        '7ND' => 'E02003706',
        '7NE' => 'E02003706',
        '7NF' => 'E02003706',
        '7NG' => 'E02003706',
        '7NH' => 'E02003706',
        '7NJ' => 'E02003706',
        '7NL' => 'E02003706',
        '7NN' => 'E02003706',
        '7NP' => 'E02003706',
        '7NQ' => 'E02003706',
        '7NR' => 'E02003711',
        '7NS' => 'E02003711',
        '7NT' => 'E02003711',
        '7NU' => 'E02003711',
        '7NW' => 'E02003706',
        '7NX' => 'E02003711',
        '7NY' => 'E02003711',
        '7NZ' => 'E02003706',
        '7PA' => 'E02003706',
        '7PB' => 'E02003704',
        '7PD' => 'E02003709',
        '7PE' => 'E02003711',
        '7PF' => 'E02003711',
        '7PG' => 'E02003703',
        '7PH' => 'E02003703',
        '7PJ' => 'E02003703',
        '7PL' => 'E02003709',
        '7PN' => 'E02003703',
        '7PP' => 'E02003709',
        '7PQ' => 'E02003703',
        '7PR' => 'E02003709',
        '7PS' => 'E02003709',
        '7PT' => 'E02003703',
        '7PU' => 'E02003703',
        '7PW' => 'E02003709',
        '7PX' => 'E02003703',
        '7PY' => 'E02003703',
        '7PZ' => 'E02003703',
        '7QA' => 'E02003703',
        '7QB' => 'E02003703',
        '7QD' => 'E02003706',
        '7QE' => 'E02003706',
        '7QF' => 'E02003706',
        '7QG' => 'E02003706',
        '7QH' => 'E02003706',
        '7QJ' => 'E02003706',
        '7QL' => 'E02003709',
        '7QN' => 'E02003703',
        '7QP' => 'E02003706',
        '7QQ' => 'E02003706',
        '7QR' => 'E02003706',
        '7QS' => 'E02003706',
        '7QT' => 'E02003706',
        '7QU' => 'E02003706',
        '7QW' => 'E02003703',
        '7QX' => 'E02003706',
        '7QY' => 'E02003706',
        '7QZ' => 'E02003711',
        '7RA' => 'E02003706',
        '7RB' => 'E02003706',
        '7RD' => 'E02003706',
        '7RE' => 'E02003706',
        '7RF' => 'E02003706',
        '7RG' => 'E02003706',
        '7RH' => 'E02003706',
        '7RJ' => 'E02003709',
        '7RL' => 'E02003706',
        '7RN' => 'E02003706',
        '7RP' => 'E02003706',
        '7RQ' => 'E02003706',
        '7RR' => 'E02003706',
        '7RS' => 'E02003706',
        '7RT' => 'E02003706',
        '7RU' => 'E02003706',
        '7RW' => 'E02003706',
        '7RX' => 'E02003706',
        '7RY' => 'E02003706',
        '7RZ' => 'E02003705',
        '7SA' => 'E02003710',
        '7SB' => 'E02003706',
        '7SD' => 'E02003710',
        '7SE' => 'E02003711',
        '7SF' => 'E02003711',
        '7SG' => 'E02003706',
        '7SH' => 'E02003709',
        '7SL' => 'E02003711',
        '7SN' => 'E02003710',
        '7SP' => 'E02003706',
        '7SQ' => 'E02003706',
        '7SR' => 'E02003703',
        '7SS' => 'E02003710',
        '7ST' => 'E02003706',
        '7SU' => 'E02003706',
        '7SW' => 'E02003706',
        '7SX' => 'E02003706',
        '7SY' => 'E02003709',
        '7SZ' => 'E02003709',
        '7TA' => 'E02003709',
        '7TB' => 'E02003709',
        '7TD' => 'E02003709',
        '7TE' => 'E02003709',
        '7TF' => 'E02003709',
        '7TG' => 'E02003709',
        '7TH' => 'E02003706',
        '7TJ' => 'E02003706',
        '7TL' => 'E02003710',
        '7TN' => 'E02003709',
        '7TP' => 'E02003706',
        '7TQ' => 'E02003709',
        '7TR' => 'E02003706',
        '7TS' => 'E02003706',
        '7TT' => 'E02003706',
        '7TU' => 'E02003706',
        '7TW' => 'E02003709',
        '7TX' => 'E02003706',
        '7TY' => 'E02003706',
        '7TZ' => 'E02003706',
        '7UA' => 'E02003706',
        '7UB' => 'E02003706',
        '7UD' => 'E02003709',
        '7UE' => 'E02003706',
        '7UF' => 'E02003706',
        '7UG' => 'E02003709',
        '7UH' => 'E02003706',
        '7UJ' => 'E02003709',
        '7UL' => 'E02003706',
        '7UN' => 'E02003706',
        '7UP' => 'E02003706',
        '7UQ' => 'E02003710',
        '7UR' => 'E02003710',
        '7US' => 'E02003706',
        '7UT' => 'E02003706',
        '7UU' => 'E02003709',
        '7UW' => 'E02003706',
        '7UX' => 'E02003706',
        '7UY' => 'E02003706',
        '7UZ' => 'E02003706',
        '7WA' => 'E02003710',
        '7WB' => 'E02003706',
        '7WD' => 'E02003710',
        '7WE' => 'E02003710',
        '7WF' => 'E02003710',
        '7WG' => 'E02003710',
        '7WH' => 'E02003706',
        '7WJ' => 'E02003710',
        '7WL' => 'E02003710',
        '7WN' => 'E02003710',
        '7WP' => 'E02003710',
        '7WQ' => 'E02003710',
        '7WR' => 'E02003710',
        '7WS' => 'E02003710',
        '7WT' => 'E02003710',
        '7WU' => 'E02003710',
        '7WW' => 'E02003710',
        '7WX' => 'E02003711',
        '7WY' => 'E02003711',
        '7WZ' => 'E02003711',
        '7XA' => 'E02003709',
        '7XB' => 'E02003709',
        '7XD' => 'E02003709',
        '7XE' => 'E02003709',
        '7XF' => 'E02003709',
        '7XG' => 'E02003709',
        '7XH' => 'E02003709',
        '7XJ' => 'E02003709',
        '7XL' => 'E02003709',
        '7XN' => 'E02003709',
        '7XP' => 'E02003709',
        '7XQ' => 'E02003709',
        '7XR' => 'E02003709',
        '7XS' => 'E02003709',
        '7XT' => 'E02003709',
        '7XU' => 'E02003709',
        '7XW' => 'E02003709',
        '7XX' => 'E02003709',
        '7XY' => 'E02003709',
        '7XZ' => 'E02003709',
        '7YA' => 'E02003709',
        '7YB' => 'E02003709',
        '7YD' => 'E02003709',
        '7YE' => 'E02003709',
        '7YF' => 'E02003710',
        '7YG' => 'E02003711',
        '7YH' => 'E02003709',
        '7YJ' => 'E02003709',
        '7YL' => 'E02003710',
        '7YN' => 'E02003709',
        '7YP' => 'E02003710',
        '7YQ' => 'E02003711',
        '7YT' => 'E02003711',
        '7YU' => 'E02003709',
        '7YW' => 'E02003711',
        '7YX' => 'E02003710',
        '7YY' => 'E02003710',
        '7YZ' => 'E02003711',
        '7ZA' => 'E02003710',
        '7ZB' => 'E02003710',
        '7ZD' => 'E02003710',
        '7ZE' => 'E02003710',
        '7ZF' => 'E02003710',
        '7ZG' => 'E02003710',
        '7ZH' => 'E02003710',
        '7ZJ' => 'E02003710',
        '7ZL' => 'E02003710',
        '7ZN' => 'E02003710',
        '7ZP' => 'E02003711',
        '7ZQ' => 'E02003710',
        '7ZR' => 'E02003710',
        '7ZU' => 'E02003710',
        '7ZW' => 'E02003710',
        '7ZX' => 'E02003710',
        '7ZZ' => 'E02003710',
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
