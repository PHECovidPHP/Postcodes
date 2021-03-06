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
final class CW5
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '5AA' => 'E02003836',
        '5AB' => 'E02003839',
        '5AD' => 'E02003839',
        '5AE' => 'E02003839',
        '5AF' => 'E02003839',
        '5AG' => 'E02003839',
        '5AH' => 'E02003839',
        '5AJ' => 'E02003836',
        '5AL' => 'E02003839',
        '5AN' => 'E02003839',
        '5AP' => 'E02003839',
        '5AQ' => 'E02003839',
        '5AR' => 'E02003839',
        '5AS' => 'E02003839',
        '5AT' => 'E02003839',
        '5AU' => 'E02003839',
        '5AW' => 'E02003839',
        '5AX' => 'E02003839',
        '5AY' => 'E02003839',
        '5AZ' => 'E02003839',
        '5BA' => 'E02003839',
        '5BB' => 'E02003839',
        '5BD' => 'E02003839',
        '5BE' => 'E02003839',
        '5BG' => 'E02003839',
        '5BH' => 'E02003839',
        '5BJ' => 'E02003839',
        '5BL' => 'E02003839',
        '5BN' => 'E02003839',
        '5BP' => 'E02003839',
        '5BQ' => 'E02003839',
        '5BS' => 'E02003837',
        '5BT' => 'E02003839',
        '5BU' => 'E02003839',
        '5BW' => 'E02003839',
        '5BX' => 'E02003839',
        '5BY' => 'E02003839',
        '5BZ' => 'E02003839',
        '5DA' => 'E02003839',
        '5DB' => 'E02003839',
        '5DD' => 'E02003836',
        '5DE' => 'E02003839',
        '5DF' => 'E02003839',
        '5DG' => 'E02003836',
        '5DH' => 'E02003839',
        '5DJ' => 'E02003836',
        '5DL' => 'E02003839',
        '5DN' => 'E02003839',
        '5DP' => 'E02003836',
        '5DQ' => 'E02003839',
        '5DR' => 'E02003836',
        '5DS' => 'E02003839',
        '5DT' => 'E02003840',
        '5DU' => 'E02003839',
        '5DW' => 'E02003836',
        '5DX' => 'E02003840',
        '5DY' => 'E02003839',
        '5DZ' => 'E02003839',
        '5EA' => 'E02003839',
        '5EB' => 'E02003839',
        '5ED' => 'E02003839',
        '5EE' => 'E02003839',
        '5EF' => 'E02003839',
        '5EG' => 'E02003839',
        '5EH' => 'E02003839',
        '5EJ' => 'E02003839',
        '5EL' => 'E02003839',
        '5EN' => 'E02003839',
        '5EP' => 'E02003839',
        '5EQ' => 'E02003839',
        '5ER' => 'E02003839',
        '5ES' => 'E02003839',
        '5ET' => 'E02003839',
        '5EU' => 'E02003839',
        '5EW' => 'E02003839',
        '5EX' => 'E02003839',
        '5EY' => 'E02003839',
        '5EZ' => 'E02003839',
        '5FA' => 'E02003836',
        '5FB' => 'E02003839',
        '5FD' => 'E02003839',
        '5FE' => 'E02003839',
        '5FF' => 'E02003839',
        '5FG' => 'E02003836',
        '5FH' => 'E02003836',
        '5FJ' => 'E02003839',
        '5FL' => 'E02003839',
        '5FN' => 'E02003836',
        '5FP' => 'E02003836',
        '5FQ' => 'E02003836',
        '5FR' => 'E02003836',
        '5FS' => 'E02003836',
        '5FT' => 'E02003839',
        '5FU' => 'E02003839',
        '5FW' => 'E02003836',
        '5FX' => 'E02003839',
        '5FY' => 'E02003836',
        '5FZ' => 'E02003836',
        '5GA' => 'E02003839',
        '5GB' => 'E02003836',
        '5GD' => 'E02003839',
        '5GE' => 'E02003839',
        '5GF' => 'E02003839',
        '5GG' => 'E02003839',
        '5GH' => 'E02003839',
        '5GJ' => 'E02003839',
        '5GL' => 'E02003839',
        '5GN' => 'E02003836',
        '5GP' => 'E02003839',
        '5GQ' => 'E02003836',
        '5GR' => 'E02003839',
        '5GS' => 'E02003837',
        '5GT' => 'E02003836',
        '5GU' => 'E02003836',
        '5GW' => 'E02003837',
        '5GX' => 'E02003839',
        '5GY' => 'E02003837',
        '5GZ' => 'E02003839',
        '5HA' => 'E02003839',
        '5HB' => 'E02003839',
        '5HD' => 'E02003839',
        '5HE' => 'E02003839',
        '5HF' => 'E02003839',
        '5HG' => 'E02003839',
        '5HH' => 'E02003839',
        '5HJ' => 'E02003839',
        '5HL' => 'E02003839',
        '5HN' => 'E02003839',
        '5HP' => 'E02003839',
        '5HQ' => 'E02003839',
        '5HR' => 'E02003839',
        '5HS' => 'E02003839',
        '5HT' => 'E02003839',
        '5HU' => 'E02003839',
        '5HW' => 'E02003839',
        '5HX' => 'E02003839',
        '5HY' => 'E02003836',
        '5HZ' => 'E02003836',
        '5JA' => 'E02003839',
        '5JB' => 'E02003839',
        '5JD' => 'E02003839',
        '5JE' => 'E02003839',
        '5JF' => 'E02003839',
        '5JG' => 'E02003839',
        '5JH' => 'E02003839',
        '5JJ' => 'E02003839',
        '5JL' => 'E02003837',
        '5JN' => 'E02003839',
        '5JP' => 'E02003839',
        '5JQ' => 'E02003839',
        '5JR' => 'E02003839',
        '5JS' => 'E02003839',
        '5JT' => 'E02003839',
        '5JU' => 'E02003839',
        '5JW' => 'E02003839',
        '5JX' => 'E02003839',
        '5JY' => 'E02003839',
        '5JZ' => 'E02003839',
        '5LA' => 'E02003839',
        '5LB' => 'E02003839',
        '5LD' => 'E02003839',
        '5LE' => 'E02003839',
        '5LF' => 'E02003839',
        '5LG' => 'E02003839',
        '5LH' => 'E02003839',
        '5LJ' => 'E02003836',
        '5LL' => 'E02003839',
        '5LN' => 'E02003839',
        '5LP' => 'E02003839',
        '5LQ' => 'E02003839',
        '5LR' => 'E02003839',
        '5LS' => 'E02003839',
        '5LT' => 'E02003836',
        '5LU' => 'E02003836',
        '5LW' => 'E02003839',
        '5LX' => 'E02003839',
        '5LY' => 'E02003836',
        '5LZ' => 'E02003836',
        '5NA' => 'E02003839',
        '5NB' => 'E02003836',
        '5ND' => 'E02003836',
        '5NE' => 'E02003870',
        '5NF' => 'E02003839',
        '5NG' => 'E02003836',
        '5NH' => 'E02003836',
        '5NJ' => 'E02003836',
        '5NL' => 'E02003836',
        '5NN' => 'E02003836',
        '5NP' => 'E02003836',
        '5NQ' => 'E02003839',
        '5NR' => 'E02003836',
        '5NS' => 'E02003836',
        '5NT' => 'E02003836',
        '5NU' => 'E02003836',
        '5NW' => 'E02003836',
        '5NX' => 'E02003836',
        '5NY' => 'E02003836',
        '5NZ' => 'E02003836',
        '5PA' => 'E02003836',
        '5PB' => 'E02003836',
        '5PD' => 'E02003836',
        '5PE' => 'E02003836',
        '5PF' => 'E02003836',
        '5PG' => 'E02003836',
        '5PH' => 'E02003836',
        '5PJ' => 'E02003836',
        '5PL' => 'E02003836',
        '5PN' => 'E02003836',
        '5PP' => 'E02003836',
        '5PQ' => 'E02003836',
        '5PR' => 'E02003836',
        '5PS' => 'E02003836',
        '5PT' => 'E02003836',
        '5PU' => 'E02003836',
        '5PW' => 'E02003836',
        '5PX' => 'E02003836',
        '5PY' => 'E02003836',
        '5PZ' => 'E02003839',
        '5QA' => 'E02003836',
        '5QB' => 'E02003836',
        '5QD' => 'E02003836',
        '5QE' => 'E02003836',
        '5QF' => 'E02003836',
        '5QG' => 'E02003836',
        '5QH' => 'E02003836',
        '5QJ' => 'E02003836',
        '5QL' => 'E02003836',
        '5QN' => 'E02003836',
        '5QP' => 'E02003836',
        '5QQ' => 'E02003836',
        '5QR' => 'E02003836',
        '5QS' => 'E02003836',
        '5QT' => 'E02003836',
        '5QU' => 'E02003836',
        '5QW' => 'E02003836',
        '5QX' => 'E02003836',
        '5QY' => 'E02003836',
        '5QZ' => 'E02003836',
        '5RA' => 'E02003836',
        '5RB' => 'E02003836',
        '5RD' => 'E02003836',
        '5RE' => 'E02003836',
        '5RF' => 'E02003839',
        '5RG' => 'E02003839',
        '5RH' => 'E02003839',
        '5RJ' => 'E02003839',
        '5RL' => 'E02003839',
        '5RN' => 'E02003839',
        '5RP' => 'E02003839',
        '5RQ' => 'E02003839',
        '5RR' => 'E02003839',
        '5RS' => 'E02003836',
        '5RT' => 'E02003836',
        '5RU' => 'E02003836',
        '5RW' => 'E02003836',
        '5RX' => 'E02003836',
        '5RY' => 'E02003836',
        '5RZ' => 'E02003836',
        '5SA' => 'E02003839',
        '5SB' => 'E02003836',
        '5SD' => 'E02003836',
        '5SE' => 'E02003836',
        '5SF' => 'E02003836',
        '5SG' => 'E02003836',
        '5SH' => 'E02003836',
        '5SJ' => 'E02003836',
        '5SL' => 'E02003839',
        '5SN' => 'E02003836',
        '5SP' => 'E02003839',
        '5SQ' => 'E02003836',
        '5SR' => 'E02003839',
        '5SS' => 'E02003839',
        '5ST' => 'E02003839',
        '5SU' => 'E02003839',
        '5SW' => 'E02003836',
        '5SX' => 'E02003836',
        '5SY' => 'E02003839',
        '5SZ' => 'E02003836',
        '5TA' => 'E02003839',
        '5TB' => 'E02003836',
        '5TD' => 'E02003839',
        '5TE' => 'E02003839',
        '5TF' => 'E02003839',
        '5TG' => 'E02003839',
        '5TH' => 'E02003839',
        '5TJ' => 'E02003839',
        '5TL' => 'E02003837',
        '5TN' => 'E02003836',
        '5TP' => 'E02003839',
        '5TQ' => 'E02003836',
        '5TR' => 'E02003839',
        '5TS' => 'E02003836',
        '5TT' => 'E02003836',
        '5TU' => 'E02003839',
        '5TW' => 'E02003839',
        '5TX' => 'E02003836',
        '5TY' => 'E02003837',
        '5TZ' => 'E02003836',
        '5UA' => 'E02003836',
        '5UB' => 'E02003836',
        '5UD' => 'E02003836',
        '5UE' => 'E02003839',
        '5UF' => 'E02003839',
        '5UG' => 'E02003839',
        '5UH' => 'E02003839',
        '5UJ' => 'E02003839',
        '5UL' => 'E02003839',
        '5UN' => 'E02003839',
        '5UP' => 'E02003839',
        '5UQ' => 'E02003839',
        '5UR' => 'E02003839',
        '5US' => 'E02003839',
        '5UT' => 'E02003839',
        '5UW' => 'E02003839',
        '5UX' => 'E02003836',
        '5UY' => 'E02003836',
        '5UZ' => 'E02003839',
        '5WA' => 'E02003836',
        '5WB' => 'E02003837',
        '5WD' => 'E02003837',
        '5WE' => 'E02003837',
        '5WF' => 'E02003836',
        '5WG' => 'E02003836',
        '5WH' => 'E02003836',
        '5WJ' => 'E02003836',
        '5WL' => 'E02003836',
        '5WN' => 'E02003836',
        '5WP' => 'E02003836',
        '5WQ' => 'E02003836',
        '5WR' => 'E02003836',
        '5WS' => 'E02003836',
        '5WT' => 'E02003836',
        '5WU' => 'E02003839',
        '5WW' => 'E02003836',
        '5WX' => 'E02003836',
        '5WY' => 'E02003839',
        '5WZ' => 'E02003836',
        '5XA' => 'E02003836',
        '5XB' => 'E02003836',
        '5XD' => 'E02003836',
        '5XE' => 'E02003837',
        '5XF' => 'E02003837',
        '5XG' => 'E02003837',
        '5XH' => 'E02003837',
        '5XJ' => 'E02003837',
        '5XL' => 'E02003837',
        '5XN' => 'E02003837',
        '5XP' => 'E02003839',
        '5XQ' => 'E02003839',
        '5XR' => 'E02003837',
        '5XS' => 'E02003837',
        '5XT' => 'E02003837',
        '5XU' => 'E02003837',
        '5XW' => 'E02003837',
        '5XY' => 'E02003836',
        '5YA' => 'E02003836',
        '5YB' => 'E02003836',
        '5YD' => 'E02003836',
        '5YE' => 'E02003836',
        '5YF' => 'E02003836',
        '5YN' => 'E02003836',
        '5YP' => 'E02003836',
        '5YR' => 'E02003839',
        '6AB' => 'E02003839',
        '6AD' => 'E02003837',
        '6AE' => 'E02003837',
        '6AF' => 'E02003840',
        '6AG' => 'E02003837',
        '6AH' => 'E02003837',
        '6AJ' => 'E02003837',
        '6AL' => 'E02003837',
        '6AN' => 'E02003837',
        '6AP' => 'E02003837',
        '6AQ' => 'E02003840',
        '6AR' => 'E02003837',
        '6AS' => 'E02003837',
        '6AT' => 'E02003837',
        '6AU' => 'E02003837',
        '6AW' => 'E02003837',
        '6AX' => 'E02003837',
        '6AY' => 'E02003837',
        '6AZ' => 'E02003837',
        '6BA' => 'E02003837',
        '6BB' => 'E02003837',
        '6BD' => 'E02003840',
        '6BE' => 'E02003840',
        '6BG' => 'E02003840',
        '6BH' => 'E02003837',
        '6BJ' => 'E02003840',
        '6BL' => 'E02003837',
        '6BN' => 'E02003840',
        '6BP' => 'E02003840',
        '6BQ' => 'E02003840',
        '6BS' => 'E02003840',
        '6BT' => 'E02003837',
        '6BU' => 'E02003837',
        '6BW' => 'E02003840',
        '6BX' => 'E02003840',
        '6BY' => 'E02003840',
        '6BZ' => 'E02003840',
        '6DA' => 'E02003837',
        '6DB' => 'E02003840',
        '6DD' => 'E02003837',
        '6DE' => 'E02003837',
        '6DF' => 'E02003837',
        '6DG' => 'E02003837',
        '6DH' => 'E02003837',
        '6DJ' => 'E02003837',
        '6DL' => 'E02003837',
        '6DN' => 'E02003837',
        '6DP' => 'E02003837',
        '6DQ' => 'E02003837',
        '6DR' => 'E02003837',
        '6DS' => 'E02003837',
        '6DT' => 'E02003837',
        '6DU' => 'E02003837',
        '6DW' => 'E02003837',
        '6DX' => 'E02003837',
        '6DY' => 'E02003837',
        '6DZ' => 'E02003837',
        '6EA' => 'E02003837',
        '6EB' => 'E02003837',
        '6ED' => 'E02003837',
        '6EE' => 'E02003837',
        '6EF' => 'E02003837',
        '6EG' => 'E02003837',
        '6EH' => 'E02003837',
        '6EJ' => 'E02003835',
        '6EL' => 'E02003837',
        '6EN' => 'E02003835',
        '6EP' => 'E02003836',
        '6EQ' => 'E02003835',
        '6ER' => 'E02003836',
        '6ES' => 'E02003836',
        '6ET' => 'E02003836',
        '6EU' => 'E02003836',
        '6EW' => 'E02003837',
        '6EX' => 'E02003836',
        '6EY' => 'E02003836',
        '6EZ' => 'E02003836',
        '6FA' => 'E02003836',
        '6FB' => 'E02003836',
        '6FD' => 'E02003836',
        '6FE' => 'E02003835',
        '6FF' => 'E02003836',
        '6FG' => 'E02003836',
        '6FH' => 'E02003835',
        '6FJ' => 'E02003835',
        '6FL' => 'E02003835',
        '6FN' => 'E02003836',
        '6FP' => 'E02003836',
        '6FQ' => 'E02003835',
        '6FR' => 'E02003835',
        '6FS' => 'E02003835',
        '6FT' => 'E02003836',
        '6FU' => 'E02003835',
        '6FW' => 'E02003835',
        '6FX' => 'E02003836',
        '6FY' => 'E02003836',
        '6FZ' => 'E02003836',
        '6GA' => 'E02003836',
        '6GB' => 'E02003836',
        '6GD' => 'E02003836',
        '6GE' => 'E02003836',
        '6GF' => 'E02003836',
        '6GG' => 'E02003836',
        '6GH' => 'E02003836',
        '6GJ' => 'E02003836',
        '6GL' => 'E02003836',
        '6GN' => 'E02003836',
        '6GQ' => 'E02003836',
        '6GR' => 'E02003837',
        '6GS' => 'E02003838',
        '6GU' => 'E02003837',
        '6GW' => 'E02003839',
        '6GX' => 'E02003835',
        '6GY' => 'E02003840',
        '6GZ' => 'E02003836',
        '6HA' => 'E02003836',
        '6HB' => 'E02003836',
        '6HD' => 'E02003836',
        '6HE' => 'E02003836',
        '6HF' => 'E02003836',
        '6HG' => 'E02003836',
        '6HH' => 'E02003836',
        '6HJ' => 'E02003836',
        '6HL' => 'E02003836',
        '6HN' => 'E02003836',
        '6HP' => 'E02003836',
        '6HQ' => 'E02003836',
        '6HR' => 'E02003836',
        '6HS' => 'E02003836',
        '6HT' => 'E02003840',
        '6HU' => 'E02003836',
        '6HW' => 'E02003836',
        '6HX' => 'E02003836',
        '6HY' => 'E02003836',
        '6HZ' => 'E02003836',
        '6JA' => 'E02003836',
        '6JB' => 'E02003836',
        '6JD' => 'E02003836',
        '6JE' => 'E02003836',
        '6JF' => 'E02003836',
        '6JG' => 'E02003836',
        '6JH' => 'E02003836',
        '6JJ' => 'E02003836',
        '6JL' => 'E02003836',
        '6JN' => 'E02003836',
        '6JP' => 'E02003836',
        '6JQ' => 'E02003836',
        '6JR' => 'E02003836',
        '6JS' => 'E02003836',
        '6JT' => 'E02003836',
        '6JU' => 'E02003836',
        '6JW' => 'E02003836',
        '6JX' => 'E02003835',
        '6JY' => 'E02003836',
        '6JZ' => 'E02003836',
        '6LA' => 'E02003836',
        '6LB' => 'E02003836',
        '6LD' => 'E02003836',
        '6LE' => 'E02003836',
        '6LF' => 'E02003836',
        '6LG' => 'E02003838',
        '6LH' => 'E02003837',
        '6LJ' => 'E02003836',
        '6LL' => 'E02003836',
        '6LN' => 'E02003836',
        '6LP' => 'E02003836',
        '6LR' => 'E02003836',
        '6LS' => 'E02003836',
        '6LT' => 'E02003836',
        '6LU' => 'E02003836',
        '6LW' => 'E02003836',
        '6LX' => 'E02003836',
        '6LY' => 'E02003836',
        '6LZ' => 'E02003836',
        '6NA' => 'E02003835',
        '6NB' => 'E02003836',
        '6ND' => 'E02003835',
        '6NE' => 'E02003838',
        '6NF' => 'E02003838',
        '6NG' => 'E02003835',
        '6NH' => 'E02003836',
        '6NJ' => 'E02003835',
        '6NL' => 'E02003835',
        '6NN' => 'E02003835',
        '6NP' => 'E02003835',
        '6NQ' => 'E02003836',
        '6NR' => 'E02003835',
        '6NS' => 'E02003835',
        '6NT' => 'E02003835',
        '6NU' => 'E02003835',
        '6NW' => 'E02003835',
        '6NX' => 'E02003835',
        '6NY' => 'E02003835',
        '6PA' => 'E02003833',
        '6PB' => 'E02003833',
        '6PD' => 'E02003833',
        '6PE' => 'E02003833',
        '6PF' => 'E02003836',
        '6PG' => 'E02003836',
        '6PH' => 'E02003836',
        '6PJ' => 'E02003836',
        '6PL' => 'E02003838',
        '6PN' => 'E02003838',
        '6PP' => 'E02003838',
        '6PQ' => 'E02003836',
        '6PR' => 'E02003838',
        '6PS' => 'E02003838',
        '6PT' => 'E02003838',
        '6PU' => 'E02003838',
        '6PW' => 'E02003838',
        '6PX' => 'E02003838',
        '6PY' => 'E02003838',
        '6PZ' => 'E02003838',
        '6QA' => 'E02003838',
        '6QB' => 'E02003835',
        '6QD' => 'E02003838',
        '6QE' => 'E02003838',
        '6QF' => 'E02003838',
        '6QG' => 'E02003838',
        '6QH' => 'E02003838',
        '6QJ' => 'E02003838',
        '6QL' => 'E02003838',
        '6QN' => 'E02003838',
        '6QP' => 'E02003835',
        '6QQ' => 'E02003838',
        '6QR' => 'E02003838',
        '6QS' => 'E02003835',
        '6QT' => 'E02003835',
        '6QU' => 'E02003835',
        '6QW' => 'E02003835',
        '6QX' => 'E02003835',
        '6QY' => 'E02003838',
        '6QZ' => 'E02003838',
        '6RA' => 'E02003835',
        '6RB' => 'E02003838',
        '6RD' => 'E02003840',
        '6RE' => 'E02003836',
        '6RF' => 'E02003836',
        '6RG' => 'E02003836',
        '6RH' => 'E02003835',
        '6RJ' => 'E02003835',
        '6RL' => 'E02003838',
        '6RN' => 'E02003838',
        '6RP' => 'E02003835',
        '6RQ' => 'E02003838',
        '6RR' => 'E02003835',
        '6RS' => 'E02003840',
        '6RT' => 'E02003836',
        '6RU' => 'E02003836',
        '6RW' => 'E02003838',
        '6SA' => 'E02003836',
        '6SB' => 'E02003836',
        '6SD' => 'E02003836',
        '6SE' => 'E02003836',
        '6SH' => 'E02003836',
        '6SJ' => 'E02003836',
        '6SL' => 'E02003836',
        '6SN' => 'E02003836',
        '6SP' => 'E02003836',
        '6SQ' => 'E02003835',
        '6SR' => 'E02003835',
        '6SS' => 'E02003835',
        '6SU' => 'E02003835',
        '6SW' => 'E02003836',
        '6SX' => 'E02003835',
        '6SY' => 'E02003835',
        '6TA' => 'E02003837',
        '6TD' => 'E02003836',
        '6TE' => 'E02003836',
        '6TF' => 'E02003836',
        '6TG' => 'E02003836',
        '6TH' => 'E02003836',
        '6TJ' => 'E02003836',
        '6TQ' => 'E02003836',
        '6UY' => 'E02003836',
        '6UZ' => 'E02003836',
        '6WA' => 'E02003836',
        '6WB' => 'E02003836',
        '6WD' => 'E02003836',
        '6WE' => 'E02003836',
        '6WF' => 'E02003836',
        '6WG' => 'E02003836',
        '6WH' => 'E02003836',
        '6WJ' => 'E02003836',
        '6WL' => 'E02003836',
        '6WN' => 'E02003836',
        '6WP' => 'E02003836',
        '6WQ' => 'E02003836',
        '6WR' => 'E02003836',
        '6WS' => 'E02003836',
        '6WT' => 'E02003836',
        '6WU' => 'E02003836',
        '6WW' => 'E02003836',
        '6WX' => 'E02003836',
        '6WY' => 'E02003836',
        '6WZ' => 'E02003836',
        '6XA' => 'E02003836',
        '6XB' => 'E02003836',
        '6XD' => 'E02003836',
        '6XE' => 'E02003836',
        '6XF' => 'E02003837',
        '6XG' => 'E02003837',
        '6XH' => 'E02003837',
        '6XJ' => 'E02003837',
        '6XN' => 'E02003837',
        '6XP' => 'E02003837',
        '6XR' => 'E02003837',
        '6XU' => 'E02003837',
        '6XZ' => 'E02003837',
        '6YE' => 'E02003837',
        '6YF' => 'E02003837',
        '6YG' => 'E02003837',
        '6YJ' => 'E02003837',
        '6YL' => 'E02003837',
        '6YP' => 'E02003837',
        '6YT' => 'E02003837',
        '7AA' => 'E02003839',
        '7AD' => 'E02003839',
        '7AE' => 'E02003839',
        '7AF' => 'E02003839',
        '7AG' => 'E02003839',
        '7AH' => 'E02003839',
        '7AJ' => 'E02003839',
        '7AL' => 'E02003839',
        '7AN' => 'E02003839',
        '7AP' => 'E02003839',
        '7AQ' => 'E02003839',
        '7AR' => 'E02003839',
        '7AS' => 'E02003839',
        '7AT' => 'E02003839',
        '7AU' => 'E02003839',
        '7AW' => 'E02003839',
        '7AX' => 'E02003839',
        '7AY' => 'E02003839',
        '7AZ' => 'E02003839',
        '7BA' => 'E02003839',
        '7BB' => 'E02003839',
        '7BD' => 'E02003839',
        '7BF' => 'E02003839',
        '7BG' => 'E02003839',
        '7BH' => 'E02003839',
        '7BJ' => 'E02003839',
        '7BL' => 'E02003839',
        '7BN' => 'E02003839',
        '7BP' => 'E02003839',
        '7BQ' => 'E02003837',
        '7BS' => 'E02003839',
        '7BT' => 'E02003839',
        '7BU' => 'E02003839',
        '7BW' => 'E02003839',
        '7BX' => 'E02003839',
        '7BY' => 'E02003839',
        '7BZ' => 'E02003839',
        '7DA' => 'E02003839',
        '7DB' => 'E02003839',
        '7DD' => 'E02003839',
        '7DE' => 'E02003839',
        '7DF' => 'E02003839',
        '7DG' => 'E02003839',
        '7DH' => 'E02003839',
        '7DJ' => 'E02003839',
        '7DL' => 'E02003839',
        '7DN' => 'E02003839',
        '7DP' => 'E02003839',
        '7DQ' => 'E02003839',
        '7DR' => 'E02003839',
        '7DS' => 'E02003839',
        '7DT' => 'E02003839',
        '7DU' => 'E02003839',
        '7DW' => 'E02003839',
        '7DX' => 'E02003837',
        '7DY' => 'E02003839',
        '7DZ' => 'E02003839',
        '7EA' => 'E02003839',
        '7EB' => 'E02003839',
        '7ED' => 'E02003839',
        '7EE' => 'E02003839',
        '7EF' => 'E02003839',
        '7EG' => 'E02003839',
        '7EH' => 'E02003837',
        '7EJ' => 'E02003837',
        '7EL' => 'E02003838',
        '7EN' => 'E02003838',
        '7EP' => 'E02003837',
        '7EQ' => 'E02003837',
        '7ER' => 'E02003838',
        '7ES' => 'E02003838',
        '7ET' => 'E02003838',
        '7EU' => 'E02003838',
        '7EW' => 'E02003838',
        '7EX' => 'E02003837',
        '7EY' => 'E02003837',
        '7EZ' => 'E02003837',
        '7FA' => 'E02003836',
        '7FB' => 'E02003836',
        '7FD' => 'E02003836',
        '7FE' => 'E02003837',
        '7FF' => 'E02003836',
        '7FG' => 'E02003837',
        '7FH' => 'E02003837',
        '7FJ' => 'E02003837',
        '7FL' => 'E02003839',
        '7FN' => 'E02003836',
        '7FP' => 'E02003837',
        '7FQ' => 'E02003837',
        '7FR' => 'E02003836',
        '7FS' => 'E02003836',
        '7FT' => 'E02003836',
        '7FU' => 'E02003839',
        '7FW' => 'E02003836',
        '7FX' => 'E02003836',
        '7FY' => 'E02003837',
        '7FZ' => 'E02003837',
        '7GA' => 'E02003839',
        '7GB' => 'E02003837',
        '7GD' => 'E02003837',
        '7GE' => 'E02003837',
        '7GF' => 'E02003837',
        '7GG' => 'E02003837',
        '7GH' => 'E02003837',
        '7GJ' => 'E02003837',
        '7GL' => 'E02003837',
        '7GN' => 'E02003837',
        '7GP' => 'E02003837',
        '7GQ' => 'E02003837',
        '7GR' => 'E02003837',
        '7GS' => 'E02003837',
        '7GT' => 'E02003837',
        '7GU' => 'E02003837',
        '7GW' => 'E02003837',
        '7GX' => 'E02003837',
        '7GY' => 'E02003837',
        '7GZ' => 'E02003837',
        '7HA' => 'E02003837',
        '7HB' => 'E02003837',
        '7HD' => 'E02003837',
        '7HE' => 'E02003837',
        '7HF' => 'E02003837',
        '7HG' => 'E02003837',
        '7HH' => 'E02003837',
        '7HJ' => 'E02003838',
        '7HL' => 'E02003838',
        '7HN' => 'E02003838',
        '7HP' => 'E02003838',
        '7HQ' => 'E02003838',
        '7HS' => 'E02003838',
        '7HT' => 'E02003838',
        '7HU' => 'E02003835',
        '7HW' => 'E02003837',
        '7HX' => 'E02003838',
        '7HY' => 'E02003838',
        '7HZ' => 'E02003838',
        '7JA' => 'E02003838',
        '7JB' => 'E02003838',
        '7JD' => 'E02003837',
        '7JE' => 'E02003838',
        '7JF' => 'E02003838',
        '7JG' => 'E02003837',
        '7JH' => 'E02003837',
        '7JJ' => 'E02003837',
        '7JL' => 'E02003837',
        '7JN' => 'E02003837',
        '7JP' => 'E02003837',
        '7JQ' => 'E02003837',
        '7JR' => 'E02003837',
        '7JS' => 'E02003837',
        '7JT' => 'E02003837',
        '7JU' => 'E02003837',
        '7JW' => 'E02003837',
        '7JX' => 'E02003837',
        '7JY' => 'E02003837',
        '7JZ' => 'E02003837',
        '7LA' => 'E02003837',
        '7LB' => 'E02003837',
        '7LD' => 'E02003837',
        '7LE' => 'E02003837',
        '7LF' => 'E02003837',
        '7LG' => 'E02003837',
        '7LH' => 'E02003837',
        '7LJ' => 'E02003837',
        '7LL' => 'E02003837',
        '7LN' => 'E02003837',
        '7LP' => 'E02003837',
        '7LQ' => 'E02003837',
        '7LR' => 'E02003837',
        '7LS' => 'E02003837',
        '7LT' => 'E02003837',
        '7LU' => 'E02003837',
        '7LW' => 'E02003837',
        '7LX' => 'E02003837',
        '7LY' => 'E02003837',
        '7LZ' => 'E02003837',
        '7NA' => 'E02003837',
        '7NB' => 'E02003837',
        '7ND' => 'E02003837',
        '7NE' => 'E02003837',
        '7NF' => 'E02003837',
        '7NG' => 'E02003837',
        '7NH' => 'E02003837',
        '7NJ' => 'E02003837',
        '7NL' => 'E02003837',
        '7NN' => 'E02003837',
        '7NP' => 'E02003837',
        '7NQ' => 'E02003837',
        '7NR' => 'E02003837',
        '7NS' => 'E02003837',
        '7NT' => 'E02003837',
        '7NU' => 'E02003837',
        '7NW' => 'E02003837',
        '7NX' => 'E02003837',
        '7NY' => 'E02003837',
        '7NZ' => 'E02003837',
        '7PA' => 'E02003837',
        '7PB' => 'E02003836',
        '7PD' => 'E02003837',
        '7PE' => 'E02003837',
        '7PF' => 'E02003837',
        '7PG' => 'E02003837',
        '7PH' => 'E02003837',
        '7PJ' => 'E02003837',
        '7PL' => 'E02003837',
        '7PN' => 'E02003837',
        '7PP' => 'E02003837',
        '7PQ' => 'E02003837',
        '7PR' => 'E02003837',
        '7PS' => 'E02003837',
        '7PT' => 'E02003837',
        '7PU' => 'E02003837',
        '7PW' => 'E02003837',
        '7PX' => 'E02003837',
        '7PY' => 'E02003837',
        '7PZ' => 'E02003837',
        '7QA' => 'E02003837',
        '7QB' => 'E02003837',
        '7QD' => 'E02003839',
        '7QE' => 'E02003839',
        '7QF' => 'E02003836',
        '7QG' => 'E02003837',
        '7QH' => 'E02003837',
        '7QJ' => 'E02003839',
        '7QL' => 'E02003837',
        '7QN' => 'E02003837',
        '7QP' => 'E02003837',
        '7QQ' => 'E02003839',
        '7QR' => 'E02003837',
        '7QS' => 'E02003837',
        '7QT' => 'E02003837',
        '7QU' => 'E02003837',
        '7QW' => 'E02003837',
        '7QX' => 'E02003837',
        '7QY' => 'E02003837',
        '7RA' => 'E02003837',
        '7RB' => 'E02003837',
        '7RD' => 'E02003837',
        '7RE' => 'E02003837',
        '7RF' => 'E02003837',
        '7RG' => 'E02003837',
        '7RH' => 'E02003837',
        '7RJ' => 'E02003837',
        '7RL' => 'E02003837',
        '7RN' => 'E02003837',
        '7RP' => 'E02003837',
        '7RQ' => 'E02003837',
        '7RR' => 'E02003837',
        '7RS' => 'E02003837',
        '7RT' => 'E02003837',
        '7RU' => 'E02003837',
        '7RX' => 'E02003837',
        '7RY' => 'E02003837',
        '7RZ' => 'E02003837',
        '7SA' => 'E02003837',
        '7SB' => 'E02003837',
        '7SD' => 'E02003837',
        '7SE' => 'E02003837',
        '7SF' => 'E02003837',
        '7SG' => 'E02003837',
        '7SH' => 'E02003839',
        '7SJ' => 'E02003837',
        '7SL' => 'E02003837',
        '7SN' => 'E02003837',
        '7SP' => 'E02003837',
        '7SQ' => 'E02003837',
        '7SR' => 'E02003838',
        '7SS' => 'E02003837',
        '7ST' => 'E02003839',
        '7SU' => 'E02003837',
        '7SW' => 'E02003837',
        '7SX' => 'E02003837',
        '7SY' => 'E02003837',
        '7SZ' => 'E02003837',
        '7TA' => 'E02003837',
        '7TB' => 'E02003837',
        '7TD' => 'E02003838',
        '7TE' => 'E02003838',
        '7TF' => 'E02003837',
        '7TG' => 'E02003838',
        '7TH' => 'E02003838',
        '7TJ' => 'E02003838',
        '7TL' => 'E02003838',
        '7TN' => 'E02003838',
        '7TP' => 'E02003839',
        '7TQ' => 'E02003838',
        '7WA' => 'E02003836',
        '7WB' => 'E02003836',
        '7WD' => 'E02003836',
        '7WE' => 'E02003836',
        '7WF' => 'E02003836',
        '7WG' => 'E02003836',
        '7WH' => 'E02003836',
        '7WJ' => 'E02003836',
        '7WL' => 'E02003836',
        '7WN' => 'E02003836',
        '7WP' => 'E02003836',
        '7WQ' => 'E02003836',
        '7WR' => 'E02003836',
        '7WS' => 'E02003836',
        '7WT' => 'E02003836',
        '7WU' => 'E02003836',
        '7WW' => 'E02003836',
        '7WX' => 'E02003837',
        '7WY' => 'E02003836',
        '7WZ' => 'E02003836',
        '7XA' => 'E02003836',
        '7XB' => 'E02003836',
        '7XD' => 'E02003836',
        '7XE' => 'E02003836',
        '7XF' => 'E02003836',
        '7XG' => 'E02003836',
        '7ZA' => 'E02003836',
        '8AA' => 'E02003837',
        '8AB' => 'E02003837',
        '8AD' => 'E02003837',
        '8AE' => 'E02003837',
        '8AF' => 'E02003837',
        '8AG' => 'E02003837',
        '8AH' => 'E02003837',
        '8AJ' => 'E02003837',
        '8AL' => 'E02003837',
        '8AN' => 'E02003837',
        '8AP' => 'E02003837',
        '8AQ' => 'E02003836',
        '8AR' => 'E02003837',
        '8AS' => 'E02003837',
        '8AT' => 'E02003837',
        '8AU' => 'E02003837',
        '8AW' => 'E02003837',
        '8AX' => 'E02003837',
        '8AY' => 'E02003840',
        '8AZ' => 'E02003840',
        '8BA' => 'E02003837',
        '8BB' => 'E02003837',
        '8BD' => 'E02003837',
        '8BE' => 'E02003837',
        '8BF' => 'E02003840',
        '8BG' => 'E02003837',
        '8BH' => 'E02003837',
        '8BJ' => 'E02003840',
        '8BL' => 'E02003837',
        '8BP' => 'E02003840',
        '8BQ' => 'E02003837',
        '8BS' => 'E02003840',
        '8BT' => 'E02003837',
        '8BU' => 'E02003837',
        '8BW' => 'E02003840',
        '8BX' => 'E02003837',
        '8BY' => 'E02003837',
        '8BZ' => 'E02003837',
        '8DA' => 'E02003837',
        '8DB' => 'E02003840',
        '8DD' => 'E02003840',
        '8DE' => 'E02003840',
        '8DF' => 'E02003840',
        '8DG' => 'E02003840',
        '8DH' => 'E02003840',
        '8DJ' => 'E02003840',
        '8DL' => 'E02003840',
        '8DN' => 'E02003840',
        '8DP' => 'E02003840',
        '8DQ' => 'E02003840',
        '8DR' => 'E02003840',
        '8DS' => 'E02003840',
        '8DT' => 'E02003840',
        '8DU' => 'E02003840',
        '8DW' => 'E02003840',
        '8DX' => 'E02003840',
        '8DY' => 'E02003840',
        '8DZ' => 'E02003840',
        '8EA' => 'E02003840',
        '8EB' => 'E02003840',
        '8ED' => 'E02003840',
        '8EE' => 'E02003840',
        '8EF' => 'E02003840',
        '8EG' => 'E02003840',
        '8EH' => 'E02003840',
        '8EJ' => 'E02003840',
        '8EL' => 'E02003840',
        '8EN' => 'E02003840',
        '8EP' => 'E02003840',
        '8EQ' => 'E02003840',
        '8ER' => 'E02003840',
        '8ES' => 'E02003840',
        '8ET' => 'E02003840',
        '8EU' => 'E02003840',
        '8EW' => 'E02003840',
        '8EX' => 'E02003840',
        '8EY' => 'E02003840',
        '8EZ' => 'E02003840',
        '8FA' => 'E02003836',
        '8FB' => 'E02003840',
        '8FD' => 'E02003840',
        '8FE' => 'E02003836',
        '8FF' => 'E02003836',
        '8FG' => 'E02003836',
        '8FH' => 'E02003840',
        '8FJ' => 'E02003836',
        '8FL' => 'E02003836',
        '8FN' => 'E02003840',
        '8FP' => 'E02003837',
        '8FQ' => 'E02003840',
        '8FR' => 'E02003840',
        '8FS' => 'E02003840',
        '8FT' => 'E02003837',
        '8FW' => 'E02003840',
        '8GA' => 'E02003837',
        '8GU' => 'E02003840',
        '8GZ' => 'E02003840',
        '8HA' => 'E02003840',
        '8HB' => 'E02003840',
        '8HD' => 'E02003840',
        '8HE' => 'E02003840',
        '8HF' => 'E02003840',
        '8HG' => 'E02003840',
        '8HH' => 'E02003840',
        '8HJ' => 'E02003840',
        '8HL' => 'E02003840',
        '8HN' => 'E02003840',
        '8HP' => 'E02003840',
        '8HQ' => 'E02003840',
        '8HR' => 'E02003840',
        '8HS' => 'E02003840',
        '8HT' => 'E02003840',
        '8HU' => 'E02003837',
        '8HW' => 'E02003840',
        '8HX' => 'E02003840',
        '8HY' => 'E02003840',
        '8HZ' => 'E02003840',
        '8JA' => 'E02003840',
        '8JB' => 'E02003840',
        '8JD' => 'E02003840',
        '8JE' => 'E02003840',
        '8JF' => 'E02003840',
        '8JG' => 'E02003840',
        '8JH' => 'E02003840',
        '8JJ' => 'E02003840',
        '8JL' => 'E02003840',
        '8JN' => 'E02003840',
        '8JP' => 'E02003840',
        '8JQ' => 'E02003840',
        '8JR' => 'E02003840',
        '8JS' => 'E02003840',
        '8JT' => 'E02003840',
        '8JU' => 'E02003840',
        '8JW' => 'E02003840',
        '8JX' => 'E02003840',
        '8JZ' => 'E02003837',
        '8LA' => 'E02003837',
        '8LB' => 'E02003837',
        '8LD' => 'E02003837',
        '8LE' => 'E02003837',
        '8LF' => 'E02003837',
        '8LG' => 'E02003837',
        '8LH' => 'E02003837',
        '8LJ' => 'E02003837',
        '8LL' => 'E02003837',
        '8LN' => 'E02003837',
        '8LP' => 'E02003837',
        '8LQ' => 'E02003837',
        '8LR' => 'E02003837',
        '8LS' => 'E02003837',
        '8LT' => 'E02003837',
        '8LU' => 'E02003837',
        '8LW' => 'E02003837',
        '8LX' => 'E02003837',
        '8LY' => 'E02003837',
        '8LZ' => 'E02003837',
        '8NA' => 'E02003837',
        '8NB' => 'E02003840',
        '8ND' => 'E02003837',
        '8NE' => 'E02003837',
        '8NF' => 'E02003840',
        '8NG' => 'E02003837',
        '8NH' => 'E02003837',
        '8NJ' => 'E02003837',
        '8NL' => 'E02003837',
        '8NN' => 'E02003837',
        '8NP' => 'E02003840',
        '8NR' => 'E02003837',
        '8NY' => 'E02003837',
        '8PA' => 'E02003837',
        '8PB' => 'E02003837',
        '8PD' => 'E02003837',
        '8PE' => 'E02003837',
        '8PF' => 'E02003837',
        '8PG' => 'E02003837',
        '8PH' => 'E02003837',
        '8PJ' => 'E02003837',
        '8PL' => 'E02003837',
        '8PN' => 'E02003837',
        '8PP' => 'E02003837',
        '8PQ' => 'E02003836',
        '8PR' => 'E02003837',
        '8PS' => 'E02003837',
        '8PT' => 'E02003840',
        '8PU' => 'E02003840',
        '8PW' => 'E02003837',
        '8PX' => 'E02003837',
        '8PY' => 'E02003840',
        '8PZ' => 'E02003837',
        '8QA' => 'E02003837',
        '8QB' => 'E02003837',
        '8QD' => 'E02003837',
        '8QE' => 'E02003840',
        '8QH' => 'E02003837',
        '8QN' => 'E02003837',
        '8QQ' => 'E02003837',
        '8RA' => 'E02003840',
        '8WA' => 'E02003836',
        '8WN' => 'E02003836',
        '8WP' => 'E02003836',
        '8WQ' => 'E02003836',
        '8WR' => 'E02003836',
        '8WS' => 'E02003836',
        '8WT' => 'E02003836',
        '8WU' => 'E02003836',
        '8WW' => 'E02003836',
        '8WX' => 'E02003836',
        '8WY' => 'E02003840',
        '8WZ' => 'E02003840',
        '8XA' => 'E02003836',
        '8XB' => 'E02003836',
        '8XD' => 'E02003836',
        '9AA' => 'E02003836',
        '9AD' => 'E02003836',
        '9AF' => 'E02003836',
        '9AH' => 'E02003836',
        '9AL' => 'E02003836',
        '9AP' => 'E02003836',
        '9AQ' => 'E02003836',
        '9AR' => 'E02003836',
        '9AS' => 'E02003836',
        '9AT' => 'E02003836',
        '9AU' => 'E02003836',
        '9AW' => 'E02003836',
        '9AZ' => 'E02003836',
        '9BA' => 'E02003836',
        '9BB' => 'E02003836',
        '9BD' => 'E02003836',
        '9BG' => 'E02003836',
        '9BL' => 'E02003836',
        '9BN' => 'E02003836',
        '9BP' => 'E02003836',
        '9BQ' => 'E02003836',
        '9BR' => 'E02003836',
        '9BT' => 'E02003836',
        '9BW' => 'E02003836',
        '9BX' => 'E02003836',
        '9BY' => 'E02003836',
        '9BZ' => 'E02003836',
        '9DA' => 'E02003836',
        '9DB' => 'E02003836',
        '9DD' => 'E02003836',
        '9DE' => 'E02003836',
        '9DF' => 'E02003836',
        '9DG' => 'E02003836',
        '9DH' => 'E02003836',
        '9DJ' => 'E02003836',
        '9DL' => 'E02003836',
        '9DN' => 'E02003836',
        '9DP' => 'E02003836',
        '9DQ' => 'E02003836',
        '9DR' => 'E02003836',
        '9DT' => 'E02003836',
        '9DU' => 'E02003836',
        '9DW' => 'E02003836',
        '9DX' => 'E02003836',
        '9DY' => 'E02003836',
        '9DZ' => 'E02003836',
        '9EA' => 'E02003836',
        '9EB' => 'E02003836',
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
