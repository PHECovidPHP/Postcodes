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
final class M6
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '5AA' => 'E02001180',
        '5AB' => 'E02001180',
        '5AD' => 'E02001180',
        '5AE' => 'E02001180',
        '5AF' => 'E02001180',
        '5AG' => 'E02001180',
        '5AH' => 'E02001180',
        '5AJ' => 'E02001180',
        '5AL' => 'E02001180',
        '5AN' => 'E02001180',
        '5AP' => 'E02001180',
        '5AQ' => 'E02001180',
        '5AR' => 'E02001178',
        '5AS' => 'E02001180',
        '5AT' => 'E02001180',
        '5AU' => 'E02001180',
        '5AW' => 'E02001180',
        '5AX' => 'E02001180',
        '5AY' => 'E02001180',
        '5AZ' => 'E02001180',
        '5BA' => 'E02001180',
        '5BB' => 'E02001180',
        '5BD' => 'E02001179',
        '5BE' => 'E02001180',
        '5BF' => 'E02001179',
        '5BG' => 'E02001178',
        '5BH' => 'E02001180',
        '5BJ' => 'E02001179',
        '5BL' => 'E02001180',
        '5BN' => 'E02001178',
        '5BP' => 'E02001179',
        '5BQ' => 'E02001180',
        '5BR' => 'E02001173',
        '5BS' => 'E02001180',
        '5BT' => 'E02001180',
        '5BU' => 'E02001180',
        '5BW' => 'E02001180',
        '5BX' => 'E02001178',
        '5BY' => 'E02001180',
        '5BZ' => 'E02001180',
        '5DA' => 'E02001180',
        '5DB' => 'E02001178',
        '5DE' => 'E02001178',
        '5DF' => 'E02001178',
        '5DG' => 'E02001178',
        '5DH' => 'E02001177',
        '5DJ' => 'E02001178',
        '5DP' => 'E02001180',
        '5DQ' => 'E02001180',
        '5DR' => 'E02001178',
        '5DS' => 'E02001173',
        '5DT' => 'E02001180',
        '5DU' => 'E02001179',
        '5DW' => 'E02001179',
        '5DX' => 'E02001180',
        '5DY' => 'E02001180',
        '5DZ' => 'E02001179',
        '5EA' => 'E02001178',
        '5EB' => 'E02001178',
        '5ED' => 'E02001180',
        '5EE' => 'E02001180',
        '5EF' => 'E02001180',
        '5EG' => 'E02001180',
        '5EH' => 'E02001173',
        '5EJ' => 'E02001180',
        '5EL' => 'E02001180',
        '5EN' => 'E02001180',
        '5EP' => 'E02001179',
        '5EQ' => 'E02001180',
        '5ER' => 'E02001180',
        '5ES' => 'E02001180',
        '5ET' => 'E02001180',
        '5EU' => 'E02001180',
        '5EW' => 'E02001180',
        '5EX' => 'E02001180',
        '5EY' => 'E02001179',
        '5EZ' => 'E02001179',
        '5FA' => 'E02001180',
        '5FB' => 'E02001180',
        '5FD' => 'E02001173',
        '5FE' => 'E02001178',
        '5FF' => 'E02001173',
        '5FG' => 'E02001180',
        '5FH' => 'E02001173',
        '5FJ' => 'E02001180',
        '5FL' => 'E02001180',
        '5FN' => 'E02001180',
        '5FP' => 'E02001180',
        '5FQ' => 'E02001180',
        '5FR' => 'E02001180',
        '5FS' => 'E02001180',
        '5FT' => 'E02001180',
        '5FU' => 'E02001180',
        '5FW' => 'E02001173',
        '5FX' => 'E02001180',
        '5FY' => 'E02001179',
        '5FZ' => 'E02001177',
        '5GA' => 'E02001179',
        '5GB' => 'E02001179',
        '5GD' => 'E02001179',
        '5GE' => 'E02001179',
        '5GF' => 'E02001179',
        '5GG' => 'E02001179',
        '5GH' => 'E02001179',
        '5GJ' => 'E02001179',
        '5GL' => 'E02001179',
        '5GN' => 'E02001179',
        '5GP' => 'E02001179',
        '5GQ' => 'E02001179',
        '5GR' => 'E02001179',
        '5GS' => 'E02001179',
        '5GT' => 'E02001179',
        '5GU' => 'E02001179',
        '5GW' => 'E02001178',
        '5GX' => 'E02001179',
        '5GY' => 'E02001177',
        '5GZ' => 'E02001177',
        '5HA' => 'E02001180',
        '5HB' => 'E02001180',
        '5HD' => 'E02001180',
        '5HE' => 'E02001180',
        '5HF' => 'E02001180',
        '5HG' => 'E02001173',
        '5HH' => 'E02001180',
        '5HJ' => 'E02001179',
        '5HL' => 'E02001180',
        '5HN' => 'E02001178',
        '5HP' => 'E02001180',
        '5HQ' => 'E02001173',
        '5HR' => 'E02001173',
        '5HS' => 'E02001173',
        '5HT' => 'E02001173',
        '5HU' => 'E02001173',
        '5HW' => 'E02001173',
        '5HX' => 'E02001173',
        '5HY' => 'E02001179',
        '5HZ' => 'E02001179',
        '5JA' => 'E02001173',
        '5JB' => 'E02001180',
        '5JD' => 'E02001180',
        '5JE' => 'E02001180',
        '5JF' => 'E02001180',
        '5JG' => 'E02001173',
        '5JH' => 'E02001173',
        '5JJ' => 'E02001180',
        '5JL' => 'E02001180',
        '5JN' => 'E02001180',
        '5JP' => 'E02001173',
        '5JQ' => 'E02001173',
        '5JR' => 'E02001173',
        '5JS' => 'E02001173',
        '5JT' => 'E02001180',
        '5JU' => 'E02001179',
        '5JW' => 'E02001180',
        '5JX' => 'E02001180',
        '5JY' => 'E02001179',
        '5JZ' => 'E02001179',
        '5LA' => 'E02001180',
        '5LB' => 'E02001179',
        '5LD' => 'E02001173',
        '5LE' => 'E02001180',
        '5LF' => 'E02001179',
        '5LG' => 'E02001179',
        '5LH' => 'E02001179',
        '5LJ' => 'E02001173',
        '5LL' => 'E02001173',
        '5LN' => 'E02001180',
        '5LP' => 'E02001179',
        '5LQ' => 'E02001179',
        '5LR' => 'E02001179',
        '5LS' => 'E02001179',
        '5LT' => 'E02001179',
        '5LU' => 'E02001179',
        '5LW' => 'E02001173',
        '5LX' => 'E02001179',
        '5LY' => 'E02001179',
        '5LZ' => 'E02001179',
        '5NA' => 'E02001179',
        '5NB' => 'E02001179',
        '5ND' => 'E02001179',
        '5NE' => 'E02001173',
        '5NF' => 'E02001180',
        '5NG' => 'E02001179',
        '5NH' => 'E02001180',
        '5NJ' => 'E02001179',
        '5NL' => 'E02001179',
        '5NN' => 'E02001179',
        '5NP' => 'E02001179',
        '5NQ' => 'E02001179',
        '5NR' => 'E02001179',
        '5NS' => 'E02001179',
        '5NT' => 'E02001179',
        '5NU' => 'E02001179',
        '5NW' => 'E02001179',
        '5NX' => 'E02001179',
        '5NY' => 'E02001179',
        '5NZ' => 'E02001178',
        '5PA' => 'E02001179',
        '5PB' => 'E02001179',
        '5PD' => 'E02001179',
        '5PE' => 'E02001179',
        '5PF' => 'E02001179',
        '5PG' => 'E02001179',
        '5PH' => 'E02001179',
        '5PJ' => 'E02001178',
        '5PL' => 'E02001180',
        '5PN' => 'E02001179',
        '5PP' => 'E02001179',
        '5PQ' => 'E02001179',
        '5PR' => 'E02001179',
        '5PS' => 'E02001180',
        '5PT' => 'E02001179',
        '5PU' => 'E02001179',
        '5PW' => 'E02001179',
        '5PX' => 'E02001179',
        '5PY' => 'E02001179',
        '5PZ' => 'E02001179',
        '5QA' => 'E02001179',
        '5QB' => 'E02001179',
        '5QD' => 'E02001179',
        '5QE' => 'E02001179',
        '5QF' => 'E02001179',
        '5QG' => 'E02001179',
        '5QH' => 'E02001179',
        '5QJ' => 'E02001179',
        '5QL' => 'E02001179',
        '5QN' => 'E02001179',
        '5QP' => 'E02001179',
        '5QQ' => 'E02001179',
        '5QR' => 'E02001179',
        '5QS' => 'E02001179',
        '5QT' => 'E02001179',
        '5QU' => 'E02001179',
        '5QW' => 'E02001179',
        '5QX' => 'E02001180',
        '5QY' => 'E02001179',
        '5QZ' => 'E02001179',
        '5RA' => 'E02001177',
        '5RB' => 'E02001177',
        '5RD' => 'E02001177',
        '5RE' => 'E02001180',
        '5RG' => 'E02001179',
        '5RH' => 'E02001177',
        '5RJ' => 'E02001177',
        '5RL' => 'E02001180',
        '5RN' => 'E02001180',
        '5RP' => 'E02001179',
        '5RQ' => 'E02001180',
        '5RR' => 'E02001180',
        '5RS' => 'E02001179',
        '5RT' => 'E02001179',
        '5RU' => 'E02001179',
        '5RW' => 'E02001179',
        '5RX' => 'E02001179',
        '5RY' => 'E02001179',
        '5RZ' => 'E02001179',
        '5SA' => 'E02001179',
        '5SB' => 'E02001180',
        '5SD' => 'E02001179',
        '5SE' => 'E02001179',
        '5SF' => 'E02001179',
        '5SG' => 'E02001180',
        '5SH' => 'E02001180',
        '5SJ' => 'E02001184',
        '5SL' => 'E02001180',
        '5SN' => 'E02001180',
        '5SR' => 'E02001180',
        '5ST' => 'E02001178',
        '5SU' => 'E02001180',
        '5SW' => 'E02001179',
        '5SX' => 'E02001179',
        '5SY' => 'E02001179',
        '5SZ' => 'E02001179',
        '5TA' => 'E02001180',
        '5TB' => 'E02001178',
        '5TD' => 'E02001179',
        '5TE' => 'E02001179',
        '5TF' => 'E02001179',
        '5TG' => 'E02001179',
        '5TH' => 'E02001180',
        '5TJ' => 'E02001179',
        '5TL' => 'E02001180',
        '5TN' => 'E02001180',
        '5TP' => 'E02001173',
        '5TQ' => 'E02001180',
        '5TR' => 'E02001179',
        '5TS' => 'E02001179',
        '5TT' => 'E02001180',
        '5TU' => 'E02001179',
        '5TW' => 'E02001179',
        '5TX' => 'E02001179',
        '5TY' => 'E02001179',
        '5TZ' => 'E02001179',
        '5UA' => 'E02001180',
        '5UB' => 'E02001180',
        '5UD' => 'E02001180',
        '5UE' => 'E02001180',
        '5UF' => 'E02001180',
        '5UG' => 'E02001180',
        '5UH' => 'E02001180',
        '5UJ' => 'E02001180',
        '5UL' => 'E02001180',
        '5UN' => 'E02001180',
        '5UP' => 'E02001179',
        '5UQ' => 'E02001179',
        '5UR' => 'E02001179',
        '5US' => 'E02001180',
        '5UW' => 'E02001179',
        '5UX' => 'E02001180',
        '5UY' => 'E02001178',
        '5UZ' => 'E02001180',
        '5WA' => 'E02001179',
        '5WB' => 'E02001179',
        '5WD' => 'E02001179',
        '5WE' => 'E02001178',
        '5WF' => 'E02001179',
        '5WG' => 'E02001179',
        '5WH' => 'E02001179',
        '5WJ' => 'E02001179',
        '5WL' => 'E02001179',
        '5WN' => 'E02001179',
        '5WP' => 'E02001179',
        '5WQ' => 'E02001179',
        '5WR' => 'E02001179',
        '5WS' => 'E02001179',
        '5WT' => 'E02001179',
        '5WU' => 'E02001179',
        '5WW' => 'E02001179',
        '5WX' => 'E02001179',
        '5WY' => 'E02001179',
        '5WZ' => 'E02001178',
        '5XA' => 'E02001180',
        '5XB' => 'E02001178',
        '5XD' => 'E02001178',
        '5XE' => 'E02001178',
        '5XF' => 'E02001177',
        '5XG' => 'E02001177',
        '5XU' => 'E02001178',
        '5XW' => 'E02001178',
        '5XX' => 'E02001178',
        '5XY' => 'E02001177',
        '5XZ' => 'E02001177',
        '5YA' => 'E02001179',
        '5YB' => 'E02001179',
        '5YD' => 'E02001177',
        '5ZZ' => 'E02001178',
        '6AA' => 'E02001173',
        '6AB' => 'E02001178',
        '6AD' => 'E02001178',
        '6AE' => 'E02001173',
        '6AF' => 'E02001178',
        '6AG' => 'E02001173',
        '6AH' => 'E02001178',
        '6AJ' => 'E02001178',
        '6AL' => 'E02001178',
        '6AN' => 'E02001178',
        '6AP' => 'E02001178',
        '6AQ' => 'E02001173',
        '6AR' => 'E02001173',
        '6AS' => 'E02001173',
        '6AT' => 'E02001173',
        '6AU' => 'E02001173',
        '6AW' => 'E02001178',
        '6AX' => 'E02001173',
        '6AY' => 'E02001173',
        '6AZ' => 'E02001173',
        '6BA' => 'E02001173',
        '6BB' => 'E02001173',
        '6BD' => 'E02001173',
        '6BE' => 'E02001173',
        '6BF' => 'E02001173',
        '6BG' => 'E02001173',
        '6BH' => 'E02001173',
        '6BJ' => 'E02001173',
        '6BL' => 'E02001173',
        '6BN' => 'E02001173',
        '6BP' => 'E02001178',
        '6BQ' => 'E02001173',
        '6BR' => 'E02001178',
        '6BS' => 'E02001178',
        '6BT' => 'E02001173',
        '6BU' => 'E02001173',
        '6BW' => 'E02001173',
        '6BX' => 'E02001173',
        '6BY' => 'E02001173',
        '6BZ' => 'E02001173',
        '6DA' => 'E02001173',
        '6DB' => 'E02001173',
        '6DD' => 'E02001173',
        '6DE' => 'E02001173',
        '6DF' => 'E02001173',
        '6DG' => 'E02001173',
        '6DH' => 'E02001173',
        '6DJ' => 'E02001173',
        '6DL' => 'E02001173',
        '6DN' => 'E02001173',
        '6DP' => 'E02001173',
        '6DQ' => 'E02001173',
        '6DR' => 'E02001173',
        '6DS' => 'E02001173',
        '6DT' => 'E02001173',
        '6DU' => 'E02001173',
        '6DW' => 'E02001173',
        '6DX' => 'E02001173',
        '6DY' => 'E02001173',
        '6DZ' => 'E02001173',
        '6EA' => 'E02001173',
        '6EB' => 'E02001173',
        '6ED' => 'E02001173',
        '6EE' => 'E02001173',
        '6EF' => 'E02001173',
        '6EG' => 'E02001173',
        '6EH' => 'E02001173',
        '6EJ' => 'E02001173',
        '6EL' => 'E02001173',
        '6EN' => 'E02001173',
        '6EP' => 'E02001173',
        '6EQ' => 'E02001173',
        '6ER' => 'E02001173',
        '6ES' => 'E02001173',
        '6ET' => 'E02001173',
        '6EU' => 'E02001173',
        '6EW' => 'E02001173',
        '6EX' => 'E02001173',
        '6EY' => 'E02001173',
        '6EZ' => 'E02001173',
        '6FA' => 'E02001173',
        '6FB' => 'E02001173',
        '6FD' => 'E02001173',
        '6FE' => 'E02001173',
        '6FF' => 'E02001173',
        '6FG' => 'E02001164',
        '6FH' => 'E02001173',
        '6FJ' => 'E02001173',
        '6FL' => 'E02001173',
        '6FN' => 'E02001173',
        '6FP' => 'E02001173',
        '6FQ' => 'E02001173',
        '6FR' => 'E02001173',
        '6FS' => 'E02001173',
        '6FT' => 'E02001173',
        '6FU' => 'E02001173',
        '6FW' => 'E02001173',
        '6FX' => 'E02001173',
        '6FY' => 'E02001173',
        '6FZ' => 'E02001173',
        '6GB' => 'E02001173',
        '6GD' => 'E02001173',
        '6GE' => 'E02001173',
        '6GG' => 'E02001173',
        '6GH' => 'E02001173',
        '6GJ' => 'E02001173',
        '6GL' => 'E02001173',
        '6GN' => 'E02001173',
        '6GP' => 'E02001173',
        '6GQ' => 'E02001173',
        '6GR' => 'E02001173',
        '6GS' => 'E02001173',
        '6GT' => 'E02001173',
        '6GU' => 'E02001173',
        '6GW' => 'E02001173',
        '6GX' => 'E02001173',
        '6GY' => 'E02001173',
        '6GZ' => 'E02001178',
        '6HA' => 'E02001173',
        '6HB' => 'E02001173',
        '6HD' => 'E02001173',
        '6HE' => 'E02001173',
        '6HF' => 'E02001173',
        '6HG' => 'E02001173',
        '6HH' => 'E02001173',
        '6HJ' => 'E02001173',
        '6HL' => 'E02001173',
        '6HN' => 'E02001173',
        '6HP' => 'E02001173',
        '6HQ' => 'E02001173',
        '6HR' => 'E02001173',
        '6HS' => 'E02001173',
        '6HT' => 'E02001173',
        '6HU' => 'E02001173',
        '6HW' => 'E02001173',
        '6HX' => 'E02001173',
        '6HY' => 'E02001178',
        '6HZ' => 'E02001173',
        '6JA' => 'E02001173',
        '6JB' => 'E02001173',
        '6JD' => 'E02001164',
        '6JE' => 'E02001173',
        '6JF' => 'E02001173',
        '6JG' => 'E02001178',
        '6JH' => 'E02001164',
        '6JJ' => 'E02001173',
        '6JL' => 'E02001173',
        '6JN' => 'E02001178',
        '6JP' => 'E02001164',
        '6JQ' => 'E02001164',
        '6JR' => 'E02001164',
        '6JS' => 'E02001164',
        '6JT' => 'E02001164',
        '6JU' => 'E02001164',
        '6JW' => 'E02001164',
        '6JX' => 'E02001164',
        '6JY' => 'E02001164',
        '6JZ' => 'E02001164',
        '6LA' => 'E02001173',
        '6LB' => 'E02001173',
        '6LD' => 'E02001173',
        '6LE' => 'E02001178',
        '6LL' => 'E02001173',
        '6LN' => 'E02001180',
        '6LQ' => 'E02001180',
        '6LR' => 'E02001180',
        '6LS' => 'E02001173',
        '6LX' => 'E02001173',
        '6LY' => 'E02001173',
        '6LZ' => 'E02001173',
        '6NA' => 'E02001173',
        '6NB' => 'E02001173',
        '6NE' => 'E02001173',
        '6NF' => 'E02001173',
        '6NH' => 'E02001173',
        '6NJ' => 'E02001173',
        '6NL' => 'E02001173',
        '6NN' => 'E02001173',
        '6NP' => 'E02001173',
        '6NR' => 'E02001173',
        '6NS' => 'E02001180',
        '6NT' => 'E02001178',
        '6NU' => 'E02001178',
        '6NW' => 'E02001173',
        '6NX' => 'E02001180',
        '6NY' => 'E02001178',
        '6NZ' => 'E02001180',
        '6PA' => 'E02001173',
        '6PB' => 'E02001173',
        '6PD' => 'E02001173',
        '6PE' => 'E02001173',
        '6PF' => 'E02001173',
        '6PG' => 'E02001180',
        '6PH' => 'E02001180',
        '6PJ' => 'E02001180',
        '6PL' => 'E02001180',
        '6PN' => 'E02001180',
        '6PP' => 'E02001180',
        '6PQ' => 'E02001180',
        '6PR' => 'E02001180',
        '6PS' => 'E02001180',
        '6PT' => 'E02001180',
        '6PU' => 'E02001178',
        '6PW' => 'E02001180',
        '6PX' => 'E02001180',
        '6PY' => 'E02001180',
        '6PZ' => 'E02001180',
        '6QA' => 'E02001173',
        '6QE' => 'E02001173',
        '6QF' => 'E02001178',
        '6QH' => 'E02001178',
        '6QJ' => 'E02001173',
        '6QL' => 'E02001173',
        '6QN' => 'E02001173',
        '6QP' => 'E02001173',
        '6QQ' => 'E02001173',
        '6QR' => 'E02001173',
        '6QT' => 'E02001173',
        '6QW' => 'E02001173',
        '6QX' => 'E02001173',
        '6QY' => 'E02001173',
        '6RB' => 'E02001173',
        '6RG' => 'E02001173',
        '6RH' => 'E02001173',
        '6RJ' => 'E02001173',
        '6RL' => 'E02001173',
        '6RN' => 'E02001180',
        '6RP' => 'E02001173',
        '6RQ' => 'E02001173',
        '6RR' => 'E02001173',
        '6RS' => 'E02001173',
        '6RT' => 'E02001173',
        '6RU' => 'E02001173',
        '6RW' => 'E02001173',
        '6RX' => 'E02001173',
        '6RY' => 'E02001173',
        '6RZ' => 'E02001173',
        '6SA' => 'E02001173',
        '6SB' => 'E02001173',
        '6SD' => 'E02001173',
        '6SE' => 'E02001173',
        '6SF' => 'E02001173',
        '6SG' => 'E02001173',
        '6SH' => 'E02001178',
        '6SJ' => 'E02001173',
        '6SL' => 'E02001173',
        '6SN' => 'E02001173',
        '6SP' => 'E02001173',
        '6SQ' => 'E02001173',
        '6SR' => 'E02001173',
        '6SS' => 'E02001178',
        '6ST' => 'E02001173',
        '6SU' => 'E02001173',
        '6SW' => 'E02001173',
        '6SX' => 'E02001173',
        '6SY' => 'E02001173',
        '6TA' => 'E02001173',
        '6TH' => 'E02001173',
        '6TT' => 'E02001173',
        '6TZ' => 'E02001173',
        '6WA' => 'E02001173',
        '6WB' => 'E02001173',
        '6WD' => 'E02001173',
        '6WE' => 'E02001173',
        '6WF' => 'E02001173',
        '6WG' => 'E02001173',
        '6WH' => 'E02001173',
        '6WJ' => 'E02001173',
        '6WL' => 'E02001173',
        '6WN' => 'E02001178',
        '6WP' => 'E02001173',
        '6WQ' => 'E02001173',
        '6WR' => 'E02001173',
        '6WS' => 'E02001173',
        '6WT' => 'E02001173',
        '6WU' => 'E02001178',
        '6WW' => 'E02001178',
        '6WX' => 'E02001180',
        '6WY' => 'E02001180',
        '6WZ' => 'E02001180',
        '6XA' => 'E02001178',
        '6XB' => 'E02001178',
        '6XD' => 'E02001178',
        '6XE' => 'E02001178',
        '6XF' => 'E02001178',
        '6XG' => 'E02001178',
        '6XH' => 'E02001178',
        '6XJ' => 'E02001178',
        '6XY' => 'E02001178',
        '6XZ' => 'E02001178',
        '6YZ' => 'E02001178',
        '6ZZ' => 'E02001178',
        '7AA' => 'E02001173',
        '7AB' => 'E02001173',
        '7AD' => 'E02001173',
        '7AE' => 'E02001173',
        '7AF' => 'E02001173',
        '7AG' => 'E02001179',
        '7AH' => 'E02001174',
        '7AJ' => 'E02001179',
        '7AL' => 'E02001174',
        '7AN' => 'E02001174',
        '7AP' => 'E02001179',
        '7AQ' => 'E02001173',
        '7AR' => 'E02001173',
        '7AS' => 'E02001173',
        '7AT' => 'E02001173',
        '7AU' => 'E02001174',
        '7AW' => 'E02001174',
        '7AX' => 'E02001173',
        '7AY' => 'E02001173',
        '7AZ' => 'E02001173',
        '7BA' => 'E02001174',
        '7BB' => 'E02001173',
        '7BD' => 'E02001173',
        '7BE' => 'E02001173',
        '7BF' => 'E02001173',
        '7BG' => 'E02001173',
        '7BH' => 'E02001173',
        '7BJ' => 'E02001173',
        '7BL' => 'E02001173',
        '7BN' => 'E02001173',
        '7BP' => 'E02001173',
        '7BQ' => 'E02001173',
        '7BR' => 'E02001173',
        '7BS' => 'E02001173',
        '7BT' => 'E02001173',
        '7BU' => 'E02001178',
        '7BW' => 'E02001173',
        '7BX' => 'E02001173',
        '7BY' => 'E02001178',
        '7BZ' => 'E02001173',
        '7DA' => 'E02001174',
        '7DB' => 'E02001173',
        '7DD' => 'E02001174',
        '7DE' => 'E02001173',
        '7DF' => 'E02001174',
        '7DG' => 'E02001173',
        '7DH' => 'E02001173',
        '7DJ' => 'E02001174',
        '7DL' => 'E02001173',
        '7DN' => 'E02001174',
        '7DP' => 'E02001173',
        '7DQ' => 'E02001173',
        '7DR' => 'E02001173',
        '7DS' => 'E02001173',
        '7DT' => 'E02001173',
        '7DU' => 'E02001173',
        '7DW' => 'E02001174',
        '7DX' => 'E02001174',
        '7DY' => 'E02001174',
        '7DZ' => 'E02001174',
        '7EA' => 'E02001174',
        '7EB' => 'E02001174',
        '7ED' => 'E02001173',
        '7EE' => 'E02001173',
        '7EF' => 'E02001173',
        '7EG' => 'E02001174',
        '7EH' => 'E02001174',
        '7EJ' => 'E02001174',
        '7EL' => 'E02001174',
        '7EN' => 'E02001174',
        '7EP' => 'E02001174',
        '7EQ' => 'E02001174',
        '7ER' => 'E02001174',
        '7ES' => 'E02001174',
        '7ET' => 'E02001174',
        '7EU' => 'E02001174',
        '7EW' => 'E02001174',
        '7EX' => 'E02001174',
        '7EY' => 'E02001174',
        '7EZ' => 'E02001174',
        '7FA' => 'E02001174',
        '7FB' => 'E02001174',
        '7FD' => 'E02001178',
        '7FE' => 'E02001173',
        '7FF' => 'E02001178',
        '7FG' => 'E02001174',
        '7FH' => 'E02001173',
        '7FJ' => 'E02001173',
        '7FL' => 'E02001174',
        '7FN' => 'E02001174',
        '7FP' => 'E02001174',
        '7FQ' => 'E02001174',
        '7FR' => 'E02001174',
        '7FS' => 'E02001174',
        '7FT' => 'E02001174',
        '7FU' => 'E02001174',
        '7FW' => 'E02001174',
        '7GB' => 'E02001177',
        '7GD' => 'E02001174',
        '7GE' => 'E02001174',
        '7GF' => 'E02001177',
        '7GG' => 'E02001174',
        '7GH' => 'E02001174',
        '7GJ' => 'E02001174',
        '7GL' => 'E02001177',
        '7GN' => 'E02001177',
        '7GP' => 'E02001174',
        '7GQ' => 'E02001174',
        '7GR' => 'E02001178',
        '7GS' => 'E02001173',
        '7GT' => 'E02001174',
        '7GU' => 'E02001173',
        '7GW' => 'E02001177',
        '7GX' => 'E02001174',
        '7GY' => 'E02001174',
        '7GZ' => 'E02001174',
        '7HA' => 'E02001173',
        '7HB' => 'E02001173',
        '7HD' => 'E02001173',
        '7HE' => 'E02001173',
        '7HG' => 'E02001173',
        '7HH' => 'E02001174',
        '7HJ' => 'E02001174',
        '7HL' => 'E02001173',
        '7HN' => 'E02001174',
        '7HP' => 'E02001174',
        '7HQ' => 'E02001173',
        '7HR' => 'E02001173',
        '7HS' => 'E02001173',
        '7HT' => 'E02001173',
        '7HU' => 'E02001173',
        '7HW' => 'E02001174',
        '7HX' => 'E02001173',
        '7HY' => 'E02001173',
        '7HZ' => 'E02001173',
        '7JA' => 'E02001173',
        '7JB' => 'E02001174',
        '7JD' => 'E02001178',
        '7JE' => 'E02001174',
        '7JF' => 'E02001173',
        '7JG' => 'E02001173',
        '7JH' => 'E02001173',
        '7JP' => 'E02001173',
        '7JQ' => 'E02001173',
        '7JR' => 'E02001173',
        '7JS' => 'E02001173',
        '7JT' => 'E02001173',
        '7JU' => 'E02001173',
        '7JW' => 'E02001178',
        '7JX' => 'E02001173',
        '7JY' => 'E02001173',
        '7JZ' => 'E02001173',
        '7LA' => 'E02001173',
        '7LB' => 'E02001173',
        '7LD' => 'E02001173',
        '7LE' => 'E02001173',
        '7LF' => 'E02001173',
        '7LG' => 'E02001173',
        '7LH' => 'E02001173',
        '7LJ' => 'E02001173',
        '7LL' => 'E02001173',
        '7LN' => 'E02001173',
        '7LP' => 'E02001173',
        '7LQ' => 'E02001173',
        '7LR' => 'E02001173',
        '7LS' => 'E02001173',
        '7LT' => 'E02001174',
        '7LU' => 'E02001173',
        '7LW' => 'E02001173',
        '7LX' => 'E02001173',
        '7LY' => 'E02001173',
        '7LZ' => 'E02001173',
        '7NA' => 'E02001173',
        '7NB' => 'E02001173',
        '7NG' => 'E02001174',
        '7NJ' => 'E02001174',
        '7NL' => 'E02001174',
        '7NN' => 'E02001174',
        '7NP' => 'E02001174',
        '7NQ' => 'E02001174',
        '7NR' => 'E02001174',
        '7NS' => 'E02001174',
        '7NT' => 'E02001174',
        '7NU' => 'E02001174',
        '7NW' => 'E02001174',
        '7PA' => 'E02001174',
        '7PB' => 'E02001174',
        '7PD' => 'E02001171',
        '7PE' => 'E02001171',
        '7PF' => 'E02001171',
        '7PG' => 'E02001171',
        '7PH' => 'E02001171',
        '7PJ' => 'E02001171',
        '7PL' => 'E02001171',
        '7PN' => 'E02001171',
        '7PP' => 'E02001171',
        '7PQ' => 'E02001171',
        '7PR' => 'E02001171',
        '7PS' => 'E02001171',
        '7PT' => 'E02001178',
        '7PU' => 'E02001171',
        '7PW' => 'E02001171',
        '7PX' => 'E02001171',
        '7PY' => 'E02001174',
        '7PZ' => 'E02001174',
        '7QA' => 'E02001174',
        '7QD' => 'E02001174',
        '7QE' => 'E02001174',
        '7QF' => 'E02001177',
        '7QH' => 'E02001174',
        '7QJ' => 'E02001174',
        '7QL' => 'E02001174',
        '7QN' => 'E02001177',
        '7QP' => 'E02001177',
        '7QQ' => 'E02001178',
        '7QU' => 'E02001174',
        '7QW' => 'E02001177',
        '7QX' => 'E02001173',
        '7QY' => 'E02001173',
        '7QZ' => 'E02001173',
        '7RA' => 'E02001174',
        '7RB' => 'E02001174',
        '7RD' => 'E02001174',
        '7RE' => 'E02001174',
        '7RF' => 'E02001174',
        '7RG' => 'E02001174',
        '7RH' => 'E02001174',
        '7RJ' => 'E02001174',
        '7RL' => 'E02001178',
        '7RN' => 'E02001177',
        '7RP' => 'E02001174',
        '7RQ' => 'E02001174',
        '7RR' => 'E02001174',
        '7RS' => 'E02001178',
        '7RT' => 'E02001173',
        '7RU' => 'E02001174',
        '7RW' => 'E02001174',
        '7RY' => 'E02001174',
        '7TD' => 'E02001178',
        '7TH' => 'E02001174',
        '7WA' => 'E02001178',
        '7WB' => 'E02001178',
        '7WG' => 'E02001174',
        '7WH' => 'E02001178',
        '7WJ' => 'E02001178',
        '7WL' => 'E02001178',
        '7WN' => 'E02001174',
        '7WP' => 'E02001174',
        '7WQ' => 'E02001174',
        '7WR' => 'E02001174',
        '7WS' => 'E02001174',
        '7WT' => 'E02001174',
        '7WU' => 'E02001174',
        '7WW' => 'E02001174',
        '7WX' => 'E02001174',
        '7WY' => 'E02001174',
        '7WZ' => 'E02001174',
        '7XA' => 'E02001178',
        '7XB' => 'E02001178',
        '7XD' => 'E02001178',
        '7XE' => 'E02001178',
        '7XZ' => 'E02001178',
        '7YZ' => 'E02001178',
        '7ZZ' => 'E02001178',
        '8AA' => 'E02001177',
        '8AB' => 'E02001177',
        '8AD' => 'E02001177',
        '8AE' => 'E02001177',
        '8AF' => 'E02001177',
        '8AG' => 'E02001177',
        '8AH' => 'E02001177',
        '8AJ' => 'E02001177',
        '8AL' => 'E02001177',
        '8AN' => 'E02001177',
        '8AP' => 'E02001177',
        '8AQ' => 'E02001177',
        '8AR' => 'E02001177',
        '8AS' => 'E02001177',
        '8AT' => 'E02001177',
        '8AU' => 'E02001177',
        '8AW' => 'E02001177',
        '8AX' => 'E02001177',
        '8AY' => 'E02001177',
        '8AZ' => 'E02001177',
        '8BA' => 'E02001178',
        '8BB' => 'E02001177',
        '8BD' => 'E02001177',
        '8BE' => 'E02001178',
        '8BF' => 'E02001177',
        '8BG' => 'E02001177',
        '8BH' => 'E02001177',
        '8BJ' => 'E02001177',
        '8BL' => 'E02001177',
        '8BN' => 'E02001177',
        '8BP' => 'E02001177',
        '8BQ' => 'E02001177',
        '8BR' => 'E02001177',
        '8BS' => 'E02001177',
        '8BT' => 'E02001177',
        '8BU' => 'E02001177',
        '8BW' => 'E02001177',
        '8BX' => 'E02001177',
        '8BY' => 'E02001177',
        '8BZ' => 'E02001177',
        '8DA' => 'E02001177',
        '8DB' => 'E02001177',
        '8DD' => 'E02001177',
        '8DE' => 'E02001177',
        '8DF' => 'E02001178',
        '8DG' => 'E02001177',
        '8DH' => 'E02001177',
        '8DJ' => 'E02001177',
        '8DL' => 'E02001177',
        '8DN' => 'E02001177',
        '8DP' => 'E02001177',
        '8DQ' => 'E02001177',
        '8DR' => 'E02001177',
        '8DS' => 'E02001177',
        '8DT' => 'E02001177',
        '8DU' => 'E02001177',
        '8DW' => 'E02001177',
        '8DX' => 'E02001177',
        '8DY' => 'E02001177',
        '8DZ' => 'E02001177',
        '8EA' => 'E02001177',
        '8EB' => 'E02001174',
        '8ED' => 'E02001177',
        '8EE' => 'E02001177',
        '8EF' => 'E02001177',
        '8EG' => 'E02001177',
        '8EH' => 'E02001177',
        '8EJ' => 'E02001177',
        '8EL' => 'E02001177',
        '8EN' => 'E02001177',
        '8EP' => 'E02001174',
        '8EQ' => 'E02001177',
        '8ER' => 'E02001177',
        '8ES' => 'E02001177',
        '8ET' => 'E02001177',
        '8EU' => 'E02001177',
        '8EW' => 'E02001177',
        '8EX' => 'E02001177',
        '8EY' => 'E02001177',
        '8EZ' => 'E02001177',
        '8FA' => 'E02001177',
        '8FB' => 'E02001177',
        '8FD' => 'E02001177',
        '8FE' => 'E02001177',
        '8FF' => 'E02001177',
        '8FG' => 'E02001177',
        '8FH' => 'E02001177',
        '8FJ' => 'E02001177',
        '8FL' => 'E02001177',
        '8FN' => 'E02001177',
        '8FP' => 'E02001177',
        '8FQ' => 'E02001177',
        '8FR' => 'E02001177',
        '8FS' => 'E02001177',
        '8FT' => 'E02001177',
        '8FU' => 'E02001177',
        '8FW' => 'E02001174',
        '8FX' => 'E02001177',
        '8FY' => 'E02001177',
        '8FZ' => 'E02001177',
        '8GA' => 'E02001178',
        '8GB' => 'E02001177',
        '8GD' => 'E02001177',
        '8GE' => 'E02001177',
        '8GG' => 'E02001177',
        '8GH' => 'E02001174',
        '8GL' => 'E02001179',
        '8GN' => 'E02001174',
        '8GP' => 'E02001174',
        '8GQ' => 'E02001177',
        '8GR' => 'E02001177',
        '8GT' => 'E02001177',
        '8GW' => 'E02001174',
        '8HA' => 'E02001177',
        '8HB' => 'E02001177',
        '8HD' => 'E02001177',
        '8HE' => 'E02001177',
        '8HF' => 'E02001177',
        '8HG' => 'E02001177',
        '8HH' => 'E02001177',
        '8HJ' => 'E02001177',
        '8HL' => 'E02001177',
        '8HN' => 'E02001177',
        '8HQ' => 'E02001178',
        '8HT' => 'E02001178',
        '8HU' => 'E02001177',
        '8HX' => 'E02001177',
        '8HY' => 'E02001177',
        '8HZ' => 'E02001177',
        '8JA' => 'E02001177',
        '8JB' => 'E02001176',
        '8JD' => 'E02001177',
        '8JE' => 'E02001177',
        '8JF' => 'E02001177',
        '8JG' => 'E02001177',
        '8JH' => 'E02001177',
        '8JJ' => 'E02001177',
        '8JL' => 'E02001177',
        '8JN' => 'E02001177',
        '8JP' => 'E02001177',
        '8JQ' => 'E02001178',
        '8JR' => 'E02001177',
        '8JS' => 'E02001177',
        '8JT' => 'E02001177',
        '8JW' => 'E02001177',
        '8LA' => 'E02001177',
        '8LB' => 'E02001177',
        '8LD' => 'E02001171',
        '8LE' => 'E02001177',
        '8LF' => 'E02001171',
        '8LG' => 'E02001171',
        '8LH' => 'E02001171',
        '8LJ' => 'E02001171',
        '8LL' => 'E02001171',
        '8LN' => 'E02001171',
        '8LP' => 'E02001171',
        '8LQ' => 'E02001171',
        '8LR' => 'E02001171',
        '8LS' => 'E02001171',
        '8LT' => 'E02001171',
        '8LU' => 'E02001171',
        '8LW' => 'E02001171',
        '8LX' => 'E02001171',
        '8LY' => 'E02001171',
        '8LZ' => 'E02001171',
        '8NA' => 'E02001171',
        '8NB' => 'E02001171',
        '8ND' => 'E02001171',
        '8NG' => 'E02001171',
        '8NH' => 'E02001177',
        '8NL' => 'E02001177',
        '8NN' => 'E02001177',
        '8NP' => 'E02001174',
        '8NQ' => 'E02001171',
        '8NR' => 'E02001174',
        '8NS' => 'E02001174',
        '8NW' => 'E02001174',
        '8NZ' => 'E02001179',
        '8PA' => 'E02001177',
        '8PB' => 'E02001177',
        '8PD' => 'E02001177',
        '8PE' => 'E02001177',
        '8PF' => 'E02001177',
        '8PG' => 'E02001177',
        '8PH' => 'E02001177',
        '8PJ' => 'E02001177',
        '8PL' => 'E02001177',
        '8PN' => 'E02001177',
        '8PP' => 'E02001177',
        '8PQ' => 'E02001177',
        '8PR' => 'E02001177',
        '8PS' => 'E02001177',
        '8PT' => 'E02001177',
        '8PU' => 'E02001177',
        '8PW' => 'E02001177',
        '8PX' => 'E02001177',
        '8PY' => 'E02001171',
        '8PZ' => 'E02001177',
        '8QA' => 'E02001177',
        '8QB' => 'E02001177',
        '8QG' => 'E02001177',
        '8QH' => 'E02001177',
        '8QJ' => 'E02001174',
        '8QL' => 'E02001177',
        '8QN' => 'E02001174',
        '8QP' => 'E02001174',
        '8QQ' => 'E02001177',
        '8QR' => 'E02001177',
        '8QS' => 'E02001177',
        '8QU' => 'E02001179',
        '8QW' => 'E02001177',
        '8QX' => 'E02001179',
        '8QY' => 'E02001179',
        '8QZ' => 'E02001179',
        '8RA' => 'E02001174',
        '8RB' => 'E02001179',
        '8RD' => 'E02001174',
        '8RE' => 'E02001174',
        '8RF' => 'E02001179',
        '8RG' => 'E02001179',
        '8RH' => 'E02001179',
        '8RJ' => 'E02001179',
        '8RL' => 'E02001179',
        '8RN' => 'E02001179',
        '8RP' => 'E02001179',
        '8RQ' => 'E02001179',
        '8RR' => 'E02001179',
        '8RS' => 'E02001179',
        '8RT' => 'E02001179',
        '8RU' => 'E02001179',
        '8RW' => 'E02001179',
        '8RX' => 'E02001179',
        '8RY' => 'E02001179',
        '8RZ' => 'E02001179',
        '8SA' => 'E02001179',
        '8SB' => 'E02001179',
        '8SD' => 'E02001179',
        '8SE' => 'E02001179',
        '8SF' => 'E02001179',
        '8SG' => 'E02001179',
        '8SX' => 'E02001179',
        '8UY' => 'E02001178',
        '8UZ' => 'E02001178',
        '8WA' => 'E02001171',
        '8WB' => 'E02001171',
        '8WD' => 'E02001171',
        '8WE' => 'E02001178',
        '8WF' => 'E02001171',
        '8WG' => 'E02001171',
        '8WH' => 'E02001177',
        '8WJ' => 'E02001178',
        '8WL' => 'E02001177',
        '8WN' => 'E02001174',
        '8WP' => 'E02001177',
        '8WQ' => 'E02001174',
        '8WR' => 'E02001174',
        '8WS' => 'E02001178',
        '8WT' => 'E02001178',
        '8WW' => 'E02001174',
        '8WX' => 'E02001178',
        '8WY' => 'E02001174',
        '8WZ' => 'E02001174',
        '8XA' => 'E02001178',
        '8XB' => 'E02001178',
        '8XD' => 'E02001178',
        '8XE' => 'E02001178',
        '8XF' => 'E02001178',
        '8XG' => 'E02001178',
        '8XP' => 'E02001178',
        '8XX' => 'E02001178',
        '8XY' => 'E02001178',
        '8XZ' => 'E02001178',
        '8YT' => 'E02001179',
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
