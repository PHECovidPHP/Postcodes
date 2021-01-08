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
final class CW2
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '5AA' => 'E02003834',
        '5AB' => 'E02003838',
        '5AD' => 'E02003838',
        '5AE' => 'E02003838',
        '5AF' => 'E02003838',
        '5AG' => 'E02003838',
        '5AH' => 'E02003838',
        '5AJ' => 'E02003838',
        '5AL' => 'E02003838',
        '5AN' => 'E02003838',
        '5AP' => 'E02003838',
        '5AQ' => 'E02003838',
        '5AR' => 'E02003838',
        '5AS' => 'E02003838',
        '5AT' => 'E02003838',
        '5AU' => 'E02003831',
        '5AW' => 'E02003838',
        '5AX' => 'E02003831',
        '5AY' => 'E02003831',
        '5AZ' => 'E02003831',
        '5BA' => 'E02003831',
        '5BB' => 'E02003831',
        '5BD' => 'E02003838',
        '5BE' => 'E02003838',
        '5BF' => 'E02003831',
        '5BH' => 'E02003838',
        '5BJ' => 'E02003838',
        '5BL' => 'E02003838',
        '5BN' => 'E02003838',
        '5BP' => 'E02003838',
        '5BQ' => 'E02003831',
        '5BS' => 'E02003838',
        '5BT' => 'E02003838',
        '5BU' => 'E02003838',
        '5BW' => 'E02003838',
        '5BX' => 'E02003838',
        '5BY' => 'E02003838',
        '5BZ' => 'E02003838',
        '5DA' => 'E02003838',
        '5DB' => 'E02003835',
        '5DD' => 'E02003838',
        '5DE' => 'E02003838',
        '5DF' => 'E02003831',
        '5DG' => 'E02003837',
        '5DH' => 'E02003835',
        '5DJ' => 'E02003835',
        '5DL' => 'E02003838',
        '5DN' => 'E02003838',
        '5DP' => 'E02003838',
        '5DQ' => 'E02003838',
        '5DR' => 'E02003838',
        '5DS' => 'E02003838',
        '5DT' => 'E02003838',
        '5DU' => 'E02003838',
        '5DW' => 'E02003838',
        '5DX' => 'E02003838',
        '5DY' => 'E02003838',
        '5DZ' => 'E02003838',
        '5EA' => 'E02003838',
        '5EB' => 'E02003838',
        '5ED' => 'E02003837',
        '5EE' => 'E02003838',
        '5EF' => 'E02003838',
        '5EG' => 'E02003838',
        '5EH' => 'E02003838',
        '5EJ' => 'E02003838',
        '5EL' => 'E02003838',
        '5EN' => 'E02003838',
        '5EP' => 'E02003838',
        '5EQ' => 'E02003838',
        '5ER' => 'E02003838',
        '5ES' => 'E02003838',
        '5ET' => 'E02003838',
        '5EU' => 'E02003838',
        '5EW' => 'E02003838',
        '5EX' => 'E02003838',
        '5EY' => 'E02003838',
        '5EZ' => 'E02003838',
        '5FA' => 'E02003838',
        '5FB' => 'E02003838',
        '5FD' => 'E02003838',
        '5FE' => 'E02003831',
        '5FF' => 'E02003831',
        '5FG' => 'E02003831',
        '5FH' => 'E02003831',
        '5FJ' => 'E02003831',
        '5FL' => 'E02003831',
        '5FN' => 'E02003838',
        '5FP' => 'E02003831',
        '5FQ' => 'E02003838',
        '5FR' => 'E02003831',
        '5FS' => 'E02003838',
        '5FT' => 'E02003838',
        '5FU' => 'E02003829',
        '5FW' => 'E02003837',
        '5FX' => 'E02003837',
        '5FY' => 'E02003837',
        '5FZ' => 'E02003831',
        '5GA' => 'E02003838',
        '5GB' => 'E02003838',
        '5GD' => 'E02003837',
        '5GE' => 'E02003837',
        '5GF' => 'E02003837',
        '5GG' => 'E02003837',
        '5GH' => 'E02003831',
        '5GJ' => 'E02003831',
        '5GL' => 'E02003831',
        '5GN' => 'E02003831',
        '5GP' => 'E02003831',
        '5GQ' => 'E02003831',
        '5GR' => 'E02003837',
        '5GS' => 'E02003837',
        '5GT' => 'E02003837',
        '5GU' => 'E02003831',
        '5GW' => 'E02003831',
        '5GX' => 'E02003831',
        '5GY' => 'E02003837',
        '5GZ' => 'E02003837',
        '5HA' => 'E02003838',
        '5HB' => 'E02003838',
        '5HD' => 'E02003838',
        '5HE' => 'E02003838',
        '5HF' => 'E02003838',
        '5HG' => 'E02003838',
        '5HH' => 'E02003838',
        '5HJ' => 'E02003838',
        '5HL' => 'E02003838',
        '5HN' => 'E02003838',
        '5HP' => 'E02003838',
        '5HQ' => 'E02003838',
        '5HR' => 'E02003838',
        '5HS' => 'E02003838',
        '5HT' => 'E02003838',
        '5HU' => 'E02003838',
        '5HW' => 'E02003838',
        '5HX' => 'E02003838',
        '5HY' => 'E02003837',
        '5HZ' => 'E02003838',
        '5JA' => 'E02003838',
        '5JB' => 'E02003838',
        '5JD' => 'E02003838',
        '5JE' => 'E02003838',
        '5JF' => 'E02003838',
        '5JG' => 'E02003837',
        '5JH' => 'E02003837',
        '5JJ' => 'E02003837',
        '5JL' => 'E02003837',
        '5JN' => 'E02003837',
        '5JP' => 'E02003837',
        '5JQ' => 'E02003837',
        '5JR' => 'E02003837',
        '5JS' => 'E02003837',
        '5JT' => 'E02003837',
        '5JU' => 'E02003838',
        '5JW' => 'E02003838',
        '5JX' => 'E02003837',
        '5JY' => 'E02003837',
        '5JZ' => 'E02003837',
        '5LA' => 'E02003837',
        '5LB' => 'E02003837',
        '5LD' => 'E02003831',
        '5LE' => 'E02003831',
        '5LF' => 'E02003831',
        '5LG' => 'E02003831',
        '5LH' => 'E02003831',
        '5LJ' => 'E02003831',
        '5LL' => 'E02003831',
        '5LN' => 'E02003831',
        '5LP' => 'E02003831',
        '5LQ' => 'E02003831',
        '5LR' => 'E02003831',
        '5LS' => 'E02003831',
        '5LT' => 'E02003831',
        '5LU' => 'E02003831',
        '5LW' => 'E02003831',
        '5LX' => 'E02003831',
        '5LY' => 'E02003831',
        '5LZ' => 'E02003831',
        '5NA' => 'E02003831',
        '5NB' => 'E02003831',
        '5ND' => 'E02003831',
        '5NE' => 'E02003831',
        '5NF' => 'E02003837',
        '5NG' => 'E02003837',
        '5NH' => 'E02003831',
        '5NJ' => 'E02003831',
        '5NL' => 'E02003831',
        '5NN' => 'E02003831',
        '5NP' => 'E02003831',
        '5NQ' => 'E02003837',
        '5NR' => 'E02003831',
        '5NS' => 'E02003837',
        '5NT' => 'E02003831',
        '5NU' => 'E02003831',
        '5NW' => 'E02003831',
        '5NX' => 'E02003831',
        '5NY' => 'E02003831',
        '5NZ' => 'E02003831',
        '5PA' => 'E02003831',
        '5PB' => 'E02003831',
        '5PD' => 'E02003831',
        '5PE' => 'E02003831',
        '5PF' => 'E02003831',
        '5PG' => 'E02003831',
        '5PH' => 'E02003831',
        '5PJ' => 'E02003831',
        '5PL' => 'E02003831',
        '5PN' => 'E02003831',
        '5PP' => 'E02003829',
        '5PQ' => 'E02003831',
        '5PR' => 'E02003831',
        '5PS' => 'E02003831',
        '5PT' => 'E02003831',
        '5PU' => 'E02006170',
        '5PW' => 'E02003831',
        '5PX' => 'E02003831',
        '5PY' => 'E02006170',
        '5PZ' => 'E02006170',
        '5QA' => 'E02003837',
        '5QB' => 'E02006170',
        '5QD' => 'E02006170',
        '5QE' => 'E02006170',
        '5QF' => 'E02006170',
        '5QG' => 'E02006170',
        '5QH' => 'E02006170',
        '5QJ' => 'E02003831',
        '5QL' => 'E02003831',
        '5QN' => 'E02003831',
        '5QP' => 'E02003831',
        '5QQ' => 'E02006170',
        '5QR' => 'E02003831',
        '5QS' => 'E02003831',
        '5QT' => 'E02003837',
        '5QU' => 'E02003837',
        '5QW' => 'E02003831',
        '5QX' => 'E02003837',
        '5QY' => 'E02003837',
        '5QZ' => 'E02003831',
        '5RA' => 'E02003837',
        '5RB' => 'E02003837',
        '5RD' => 'E02003837',
        '5RE' => 'E02003837',
        '5RF' => 'E02003837',
        '5RG' => 'E02003837',
        '5RH' => 'E02003837',
        '5RJ' => 'E02003837',
        '5RL' => 'E02003831',
        '5RN' => 'E02003837',
        '5RP' => 'E02003837',
        '5RQ' => 'E02003837',
        '5RR' => 'E02003837',
        '5RS' => 'E02003837',
        '5RT' => 'E02003831',
        '5RU' => 'E02003837',
        '5RW' => 'E02003831',
        '5RX' => 'E02003837',
        '5RY' => 'E02003831',
        '5RZ' => 'E02003831',
        '5SA' => 'E02003837',
        '5SB' => 'E02006170',
        '5SD' => 'E02003831',
        '5SF' => 'E02003838',
        '5SG' => 'E02003831',
        '5SH' => 'E02003831',
        '5SJ' => 'E02003831',
        '5SL' => 'E02003831',
        '5SN' => 'E02003831',
        '5SP' => 'E02003831',
        '5SQ' => 'E02003831',
        '5SS' => 'E02003838',
        '5ST' => 'E02003838',
        '5SU' => 'E02003838',
        '5SW' => 'E02003838',
        '5SX' => 'E02003835',
        '5SY' => 'E02003838',
        '5SZ' => 'E02003838',
        '5TA' => 'E02003838',
        '5TB' => 'E02003838',
        '5TD' => 'E02003831',
        '5TE' => 'E02003838',
        '5TF' => 'E02003838',
        '5TG' => 'E02003838',
        '5TH' => 'E02003838',
        '5TJ' => 'E02003838',
        '5TL' => 'E02003831',
        '5TN' => 'E02003838',
        '5TP' => 'E02003835',
        '5TQ' => 'E02003835',
        '5TR' => 'E02003838',
        '5TS' => 'E02003838',
        '5TT' => 'E02003837',
        '5TU' => 'E02003837',
        '5TX' => 'E02003837',
        '5TY' => 'E02003837',
        '5UA' => 'E02003838',
        '5UB' => 'E02003838',
        '5UD' => 'E02003838',
        '5UE' => 'E02003838',
        '5UF' => 'E02003838',
        '5UG' => 'E02003838',
        '5UH' => 'E02003838',
        '5UJ' => 'E02003838',
        '5UN' => 'E02003838',
        '5UZ' => 'E02003838',
        '5WA' => 'E02003829',
        '5WD' => 'E02003829',
        '5WE' => 'E02003838',
        '5WF' => 'E02003838',
        '5WG' => 'E02003838',
        '5WH' => 'E02003829',
        '5WJ' => 'E02003829',
        '5WL' => 'E02003829',
        '5WN' => 'E02003829',
        '5WP' => 'E02003829',
        '5WQ' => 'E02003837',
        '5WR' => 'E02003829',
        '5WS' => 'E02003837',
        '5WT' => 'E02003837',
        '5WU' => 'E02003829',
        '5WW' => 'E02003829',
        '5WX' => 'E02003837',
        '5WY' => 'E02003837',
        '5WZ' => 'E02003829',
        '5XA' => 'E02003829',
        '5XB' => 'E02003831',
        '5XE' => 'E02003838',
        '5XN' => 'E02003831',
        '5XP' => 'E02003838',
        '6AA' => 'E02003834',
        '6AB' => 'E02003834',
        '6AD' => 'E02003834',
        '6AE' => 'E02003834',
        '6AF' => 'E02003834',
        '6AG' => 'E02003834',
        '6AH' => 'E02003834',
        '6AJ' => 'E02003834',
        '6AL' => 'E02003834',
        '6AN' => 'E02003834',
        '6AP' => 'E02003834',
        '6AQ' => 'E02003832',
        '6AR' => 'E02003834',
        '6AS' => 'E02003834',
        '6AT' => 'E02003834',
        '6AU' => 'E02003834',
        '6AW' => 'E02003834',
        '6AX' => 'E02003834',
        '6AY' => 'E02003834',
        '6AZ' => 'E02003834',
        '6BA' => 'E02003834',
        '6BB' => 'E02003834',
        '6BD' => 'E02003832',
        '6BE' => 'E02003832',
        '6BF' => 'E02003834',
        '6BG' => 'E02003834',
        '6BH' => 'E02003834',
        '6BJ' => 'E02003834',
        '6BL' => 'E02003834',
        '6BN' => 'E02003834',
        '6BP' => 'E02003834',
        '6BQ' => 'E02003834',
        '6BS' => 'E02003834',
        '6BT' => 'E02003829',
        '6BU' => 'E02003834',
        '6BW' => 'E02003834',
        '6BX' => 'E02003834',
        '6BY' => 'E02003834',
        '6BZ' => 'E02003832',
        '6DA' => 'E02003834',
        '6DB' => 'E02003834',
        '6DD' => 'E02003834',
        '6DE' => 'E02003834',
        '6DF' => 'E02003834',
        '6DG' => 'E02003834',
        '6DH' => 'E02003834',
        '6DJ' => 'E02003834',
        '6DL' => 'E02003834',
        '6DN' => 'E02003829',
        '6DP' => 'E02003834',
        '6DQ' => 'E02003834',
        '6DR' => 'E02003829',
        '6DS' => 'E02003834',
        '6DT' => 'E02003834',
        '6DU' => 'E02003834',
        '6DW' => 'E02003834',
        '6DX' => 'E02003834',
        '6DY' => 'E02003834',
        '6DZ' => 'E02003834',
        '6EA' => 'E02003834',
        '6EB' => 'E02003834',
        '6ED' => 'E02003834',
        '6EE' => 'E02003834',
        '6EF' => 'E02003834',
        '6EG' => 'E02003834',
        '6EH' => 'E02003834',
        '6EJ' => 'E02003834',
        '6EL' => 'E02003834',
        '6EN' => 'E02003834',
        '6EP' => 'E02003834',
        '6EQ' => 'E02003834',
        '6ER' => 'E02003834',
        '6ES' => 'E02003834',
        '6ET' => 'E02003834',
        '6EU' => 'E02003834',
        '6EW' => 'E02003834',
        '6EX' => 'E02003834',
        '6EY' => 'E02003834',
        '6EZ' => 'E02003834',
        '6FA' => 'E02003829',
        '6FD' => 'E02003834',
        '6FE' => 'E02003834',
        '6FF' => 'E02003829',
        '6FG' => 'E02003829',
        '6FH' => 'E02003829',
        '6FJ' => 'E02003834',
        '6FL' => 'E02003834',
        '6FN' => 'E02003834',
        '6FP' => 'E02003834',
        '6FQ' => 'E02003834',
        '6FR' => 'E02003834',
        '6FS' => 'E02003834',
        '6FT' => 'E02003829',
        '6FU' => 'E02003834',
        '6FW' => 'E02003829',
        '6FX' => 'E02003834',
        '6FY' => 'E02003834',
        '6FZ' => 'E02003834',
        '6GA' => 'E02003834',
        '6GB' => 'E02003829',
        '6GD' => 'E02003829',
        '6GE' => 'E02003829',
        '6GF' => 'E02003829',
        '6GG' => 'E02003829',
        '6GH' => 'E02003834',
        '6GJ' => 'E02003835',
        '6GL' => 'E02003834',
        '6GN' => 'E02003834',
        '6GP' => 'E02003834',
        '6GQ' => 'E02003829',
        '6GR' => 'E02003835',
        '6GS' => 'E02003835',
        '6GT' => 'E02003834',
        '6GU' => 'E02003835',
        '6GW' => 'E02003835',
        '6GX' => 'E02003834',
        '6GY' => 'E02003834',
        '6GZ' => 'E02003834',
        '6HA' => 'E02003834',
        '6HB' => 'E02003834',
        '6HD' => 'E02003834',
        '6HE' => 'E02003834',
        '6HF' => 'E02003834',
        '6HG' => 'E02003834',
        '6HH' => 'E02003834',
        '6HJ' => 'E02003834',
        '6HL' => 'E02003834',
        '6HN' => 'E02003834',
        '6HP' => 'E02003834',
        '6HQ' => 'E02003834',
        '6HR' => 'E02003834',
        '6HS' => 'E02003834',
        '6HT' => 'E02003834',
        '6HU' => 'E02003834',
        '6HZ' => 'E02003834',
        '6JA' => 'E02003834',
        '6JB' => 'E02003834',
        '6JD' => 'E02003834',
        '6JE' => 'E02003834',
        '6JF' => 'E02003834',
        '6JG' => 'E02003834',
        '6JH' => 'E02003834',
        '6JJ' => 'E02003834',
        '6JL' => 'E02003834',
        '6JN' => 'E02003834',
        '6JP' => 'E02003834',
        '6JQ' => 'E02003834',
        '6JR' => 'E02003834',
        '6JS' => 'E02003834',
        '6JT' => 'E02003834',
        '6JU' => 'E02003834',
        '6JW' => 'E02003834',
        '6JX' => 'E02003834',
        '6JY' => 'E02003834',
        '6JZ' => 'E02003834',
        '6LA' => 'E02003834',
        '6LB' => 'E02003834',
        '6LD' => 'E02003834',
        '6LE' => 'E02003834',
        '6LF' => 'E02003834',
        '6LG' => 'E02003834',
        '6LH' => 'E02003834',
        '6LJ' => 'E02003834',
        '6LL' => 'E02003834',
        '6LN' => 'E02003834',
        '6LP' => 'E02003834',
        '6LQ' => 'E02003834',
        '6LR' => 'E02003834',
        '6LS' => 'E02003834',
        '6LT' => 'E02003834',
        '6LU' => 'E02003834',
        '6LW' => 'E02003834',
        '6LX' => 'E02003834',
        '6LY' => 'E02003834',
        '6LZ' => 'E02003834',
        '6NA' => 'E02003834',
        '6NB' => 'E02003834',
        '6ND' => 'E02003834',
        '6NE' => 'E02003834',
        '6NF' => 'E02003834',
        '6NG' => 'E02003834',
        '6NH' => 'E02003834',
        '6NJ' => 'E02003834',
        '6NL' => 'E02003834',
        '6NP' => 'E02003835',
        '6NQ' => 'E02003834',
        '6NR' => 'E02003834',
        '6NS' => 'E02003834',
        '6NT' => 'E02003834',
        '6NU' => 'E02003834',
        '6NW' => 'E02003834',
        '6NX' => 'E02003834',
        '6NY' => 'E02003834',
        '6NZ' => 'E02003835',
        '6PA' => 'E02003834',
        '6PB' => 'E02003834',
        '6PD' => 'E02003834',
        '6PE' => 'E02003834',
        '6PF' => 'E02003834',
        '6PG' => 'E02003835',
        '6PH' => 'E02003834',
        '6PJ' => 'E02003829',
        '6PL' => 'E02003834',
        '6PN' => 'E02003834',
        '6PP' => 'E02003835',
        '6PQ' => 'E02003835',
        '6PR' => 'E02003835',
        '6PS' => 'E02003835',
        '6PT' => 'E02003835',
        '6PU' => 'E02003835',
        '6PW' => 'E02003835',
        '6PX' => 'E02003835',
        '6PY' => 'E02003835',
        '6PZ' => 'E02003835',
        '6QA' => 'E02003835',
        '6QB' => 'E02003835',
        '6QD' => 'E02003835',
        '6QE' => 'E02003835',
        '6QF' => 'E02003835',
        '6QG' => 'E02003835',
        '6QH' => 'E02003835',
        '6QJ' => 'E02003835',
        '6QL' => 'E02003835',
        '6QN' => 'E02003835',
        '6QP' => 'E02003835',
        '6QQ' => 'E02003835',
        '6QR' => 'E02003835',
        '6QS' => 'E02003829',
        '6QT' => 'E02003835',
        '6QU' => 'E02003835',
        '6QW' => 'E02003835',
        '6QY' => 'E02003835',
        '6QZ' => 'E02003835',
        '6RA' => 'E02003835',
        '6RB' => 'E02003835',
        '6RD' => 'E02003835',
        '6RE' => 'E02003835',
        '6RF' => 'E02003835',
        '6RG' => 'E02003835',
        '6RH' => 'E02003835',
        '6RJ' => 'E02003835',
        '6RL' => 'E02003835',
        '6RN' => 'E02003835',
        '6RP' => 'E02003835',
        '6RQ' => 'E02003835',
        '6RR' => 'E02003835',
        '6RS' => 'E02003835',
        '6RT' => 'E02003835',
        '6RU' => 'E02003835',
        '6RW' => 'E02003835',
        '6RX' => 'E02003835',
        '6RY' => 'E02003835',
        '6RZ' => 'E02003835',
        '6SA' => 'E02003835',
        '6SB' => 'E02003835',
        '6SD' => 'E02003835',
        '6SE' => 'E02003835',
        '6SF' => 'E02003835',
        '6SG' => 'E02003835',
        '6SH' => 'E02003835',
        '6SJ' => 'E02003835',
        '6SL' => 'E02003835',
        '6SN' => 'E02003835',
        '6SP' => 'E02003835',
        '6SQ' => 'E02003835',
        '6SR' => 'E02003835',
        '6SS' => 'E02003835',
        '6ST' => 'E02003835',
        '6SU' => 'E02003835',
        '6SW' => 'E02003835',
        '6SX' => 'E02003835',
        '6SY' => 'E02003835',
        '6SZ' => 'E02003835',
        '6TA' => 'E02003835',
        '6TB' => 'E02003835',
        '6TD' => 'E02003835',
        '6TE' => 'E02003835',
        '6TF' => 'E02003835',
        '6TG' => 'E02003835',
        '6TH' => 'E02003835',
        '6TJ' => 'E02003835',
        '6TL' => 'E02003835',
        '6TN' => 'E02003835',
        '6TP' => 'E02003835',
        '6TQ' => 'E02003835',
        '6TR' => 'E02003835',
        '6TS' => 'E02003834',
        '6TT' => 'E02003834',
        '6TU' => 'E02003834',
        '6TW' => 'E02003835',
        '6TX' => 'E02003834',
        '6TY' => 'E02003834',
        '6TZ' => 'E02003834',
        '6UA' => 'E02003835',
        '6UD' => 'E02003835',
        '6UE' => 'E02003835',
        '6UF' => 'E02003835',
        '6UG' => 'E02003834',
        '6UH' => 'E02003834',
        '6UJ' => 'E02003834',
        '6UN' => 'E02003834',
        '6UP' => 'E02003834',
        '6UT' => 'E02003834',
        '6UW' => 'E02003834',
        '6WA' => 'E02003834',
        '6WB' => 'E02003834',
        '6WD' => 'E02003834',
        '6WE' => 'E02003834',
        '6WF' => 'E02003829',
        '6WG' => 'E02003829',
        '6WH' => 'E02003829',
        '6WN' => 'E02003829',
        '6WP' => 'E02003829',
        '6WQ' => 'E02003829',
        '6WR' => 'E02003829',
        '6WS' => 'E02003834',
        '6WT' => 'E02003834',
        '6WU' => 'E02003829',
        '6WW' => 'E02003834',
        '6WX' => 'E02003829',
        '6WY' => 'E02003829',
        '6WZ' => 'E02003834',
        '6XA' => 'E02003835',
        '6XB' => 'E02003835',
        '6XD' => 'E02003835',
        '6XE' => 'E02003835',
        '6XF' => 'E02003835',
        '6XG' => 'E02003835',
        '6XH' => 'E02003835',
        '6XJ' => 'E02003835',
        '6XL' => 'E02003835',
        '6XN' => 'E02003835',
        '6XP' => 'E02003835',
        '6XQ' => 'E02003834',
        '6XR' => 'E02003835',
        '6XS' => 'E02003829',
        '6XT' => 'E02003829',
        '6XU' => 'E02003829',
        '6XW' => 'E02003829',
        '6YZ' => 'E02003829',
        '6ZW' => 'E02003829',
        '7AA' => 'E02003832',
        '7AB' => 'E02003832',
        '7AD' => 'E02003832',
        '7AE' => 'E02003832',
        '7AF' => 'E02003832',
        '7AG' => 'E02003832',
        '7AH' => 'E02003832',
        '7AJ' => 'E02003832',
        '7AL' => 'E02003832',
        '7AN' => 'E02003832',
        '7AP' => 'E02003832',
        '7AQ' => 'E02003832',
        '7AR' => 'E02003832',
        '7AS' => 'E02003832',
        '7AT' => 'E02003832',
        '7AU' => 'E02003832',
        '7AW' => 'E02003830',
        '7AX' => 'E02003832',
        '7AY' => 'E02003832',
        '7AZ' => 'E02003832',
        '7BB' => 'E02003832',
        '7BD' => 'E02003832',
        '7BE' => 'E02003832',
        '7BG' => 'E02003830',
        '7BH' => 'E02003832',
        '7BJ' => 'E02003830',
        '7BL' => 'E02003830',
        '7BN' => 'E02003830',
        '7BP' => 'E02003830',
        '7BS' => 'E02003830',
        '7BT' => 'E02003830',
        '7BU' => 'E02003830',
        '7BX' => 'E02003830',
        '7BY' => 'E02003830',
        '7BZ' => 'E02003830',
        '7DA' => 'E02003830',
        '7DB' => 'E02003830',
        '7DD' => 'E02003832',
        '7DE' => 'E02003832',
        '7DF' => 'E02003832',
        '7DG' => 'E02003832',
        '7DH' => 'E02003832',
        '7DJ' => 'E02003832',
        '7DL' => 'E02003832',
        '7DN' => 'E02003832',
        '7DP' => 'E02003832',
        '7DQ' => 'E02003832',
        '7DR' => 'E02003832',
        '7DS' => 'E02003832',
        '7DT' => 'E02003832',
        '7DU' => 'E02003832',
        '7DW' => 'E02003832',
        '7DX' => 'E02003830',
        '7EA' => 'E02003830',
        '7EB' => 'E02003830',
        '7ED' => 'E02003830',
        '7EE' => 'E02003830',
        '7EF' => 'E02003830',
        '7EG' => 'E02003830',
        '7EH' => 'E02003830',
        '7EJ' => 'E02003830',
        '7EL' => 'E02003830',
        '7EN' => 'E02003832',
        '7EP' => 'E02003832',
        '7EQ' => 'E02003830',
        '7ER' => 'E02003832',
        '7ES' => 'E02003832',
        '7ET' => 'E02003832',
        '7EU' => 'E02003832',
        '7EW' => 'E02003832',
        '7EX' => 'E02003832',
        '7EY' => 'E02003832',
        '7EZ' => 'E02003832',
        '7FA' => 'E02003829',
        '7FB' => 'E02003829',
        '7FD' => 'E02003829',
        '7FE' => 'E02003832',
        '7FF' => 'E02003832',
        '7FG' => 'E02003832',
        '7FH' => 'E02003829',
        '7FJ' => 'E02003832',
        '7FL' => 'E02003832',
        '7FN' => 'E02003829',
        '7FP' => 'E02003829',
        '7HA' => 'E02003832',
        '7HB' => 'E02003832',
        '7HD' => 'E02003832',
        '7HE' => 'E02003832',
        '7HF' => 'E02003832',
        '7HH' => 'E02003832',
        '7HJ' => 'E02003832',
        '7HL' => 'E02003832',
        '7HN' => 'E02003832',
        '7HP' => 'E02003832',
        '7HQ' => 'E02003832',
        '7HR' => 'E02003832',
        '7HS' => 'E02003832',
        '7HT' => 'E02003832',
        '7HW' => 'E02003832',
        '7HX' => 'E02003832',
        '7HY' => 'E02003832',
        '7HZ' => 'E02003832',
        '7JA' => 'E02003832',
        '7JB' => 'E02003832',
        '7JD' => 'E02003832',
        '7JE' => 'E02003832',
        '7JF' => 'E02003832',
        '7JG' => 'E02003832',
        '7JH' => 'E02003832',
        '7JL' => 'E02003832',
        '7JN' => 'E02003832',
        '7JP' => 'E02003832',
        '7JR' => 'E02003832',
        '7JS' => 'E02003832',
        '7JT' => 'E02003832',
        '7JU' => 'E02003832',
        '7JW' => 'E02003832',
        '7JX' => 'E02003832',
        '7JY' => 'E02003830',
        '7JZ' => 'E02003830',
        '7LA' => 'E02003832',
        '7LB' => 'E02003832',
        '7LD' => 'E02003832',
        '7LE' => 'E02003832',
        '7LF' => 'E02003832',
        '7LG' => 'E02003832',
        '7LH' => 'E02003832',
        '7LJ' => 'E02003832',
        '7LL' => 'E02003832',
        '7LN' => 'E02003832',
        '7LP' => 'E02003832',
        '7LQ' => 'E02003832',
        '7LR' => 'E02003832',
        '7LS' => 'E02003832',
        '7LT' => 'E02003832',
        '7LW' => 'E02003832',
        '7LX' => 'E02003832',
        '7LY' => 'E02003832',
        '7LZ' => 'E02003832',
        '7NA' => 'E02003832',
        '7NB' => 'E02003832',
        '7ND' => 'E02003832',
        '7NE' => 'E02003832',
        '7NF' => 'E02003832',
        '7NG' => 'E02003832',
        '7NH' => 'E02003832',
        '7NJ' => 'E02003832',
        '7NL' => 'E02003832',
        '7NN' => 'E02003832',
        '7NP' => 'E02003832',
        '7NQ' => 'E02003832',
        '7NR' => 'E02003832',
        '7NS' => 'E02003832',
        '7NT' => 'E02003832',
        '7NU' => 'E02003832',
        '7NW' => 'E02003832',
        '7NX' => 'E02003832',
        '7NY' => 'E02003832',
        '7PA' => 'E02003832',
        '7PB' => 'E02003832',
        '7PD' => 'E02003830',
        '7PF' => 'E02003832',
        '7PG' => 'E02003832',
        '7PH' => 'E02003832',
        '7PJ' => 'E02003832',
        '7PL' => 'E02003832',
        '7PN' => 'E02003832',
        '7PP' => 'E02003830',
        '7PQ' => 'E02003830',
        '7PR' => 'E02003830',
        '7PS' => 'E02003830',
        '7PT' => 'E02003830',
        '7PU' => 'E02003830',
        '7PW' => 'E02003830',
        '7PX' => 'E02003830',
        '7PY' => 'E02003830',
        '7PZ' => 'E02003830',
        '7QA' => 'E02003830',
        '7QB' => 'E02003830',
        '7QD' => 'E02003830',
        '7QF' => 'E02003830',
        '7QG' => 'E02003830',
        '7QH' => 'E02003829',
        '7QL' => 'E02003830',
        '7QP' => 'E02003830',
        '7QQ' => 'E02003832',
        '7QR' => 'E02003830',
        '7QS' => 'E02003830',
        '7QT' => 'E02003830',
        '7QU' => 'E02003830',
        '7QX' => 'E02003830',
        '7QZ' => 'E02003830',
        '7RA' => 'E02003830',
        '7RB' => 'E02003830',
        '7RD' => 'E02003830',
        '7RE' => 'E02003830',
        '7RF' => 'E02003830',
        '7RG' => 'E02003830',
        '7RH' => 'E02003830',
        '7RJ' => 'E02003830',
        '7RL' => 'E02003830',
        '7RN' => 'E02003829',
        '7RP' => 'E02003830',
        '7RQ' => 'E02003830',
        '7RR' => 'E02003830',
        '7RS' => 'E02003830',
        '7RT' => 'E02003830',
        '7RU' => 'E02003830',
        '7RW' => 'E02003830',
        '7RX' => 'E02003830',
        '7RY' => 'E02003830',
        '7RZ' => 'E02003830',
        '7SA' => 'E02003833',
        '7SB' => 'E02003833',
        '7SD' => 'E02003830',
        '7SE' => 'E02003830',
        '7SF' => 'E02003830',
        '7SG' => 'E02003828',
        '7SH' => 'E02003828',
        '7SJ' => 'E02003830',
        '7SL' => 'E02003830',
        '7SN' => 'E02003828',
        '7SP' => 'E02003830',
        '7SQ' => 'E02003828',
        '7SR' => 'E02003830',
        '7SS' => 'E02003830',
        '7ST' => 'E02003830',
        '7SU' => 'E02003828',
        '7SW' => 'E02003828',
        '7SX' => 'E02003830',
        '7SY' => 'E02003830',
        '7SZ' => 'E02003832',
        '7TA' => 'E02003830',
        '7TB' => 'E02003833',
        '7TD' => 'E02003833',
        '7TE' => 'E02003832',
        '7TF' => 'E02003833',
        '7TG' => 'E02003830',
        '7UA' => 'E02003830',
        '7UB' => 'E02003830',
        '7UD' => 'E02003830',
        '7UE' => 'E02003830',
        '7UF' => 'E02003830',
        '7UG' => 'E02003830',
        '7UH' => 'E02003830',
        '7UJ' => 'E02003830',
        '7UL' => 'E02003830',
        '7UN' => 'E02003830',
        '7UP' => 'E02003830',
        '7UQ' => 'E02003830',
        '7WA' => 'E02003830',
        '7WT' => 'E02003829',
        '7WU' => 'E02003829',
        '7WW' => 'E02003830',
        '7WX' => 'E02003829',
        '7WY' => 'E02003829',
        '7WZ' => 'E02003829',
        '7XA' => 'E02003829',
        '7XB' => 'E02003829',
        '7XD' => 'E02003829',
        '7XE' => 'E02003829',
        '8AA' => 'E02003833',
        '8AB' => 'E02003832',
        '8AD' => 'E02003833',
        '8AE' => 'E02003833',
        '8AF' => 'E02003833',
        '8AG' => 'E02003833',
        '8AH' => 'E02003833',
        '8AJ' => 'E02003833',
        '8AL' => 'E02003833',
        '8AN' => 'E02003833',
        '8AP' => 'E02003833',
        '8AQ' => 'E02003833',
        '8AR' => 'E02003833',
        '8AS' => 'E02003833',
        '8AT' => 'E02003833',
        '8AU' => 'E02003833',
        '8AW' => 'E02003833',
        '8AX' => 'E02003833',
        '8AY' => 'E02003833',
        '8AZ' => 'E02003833',
        '8BA' => 'E02003833',
        '8BB' => 'E02003833',
        '8BD' => 'E02003833',
        '8BE' => 'E02003835',
        '8BF' => 'E02003833',
        '8BG' => 'E02003830',
        '8BH' => 'E02003833',
        '8BN' => 'E02003835',
        '8BP' => 'E02003835',
        '8BQ' => 'E02003835',
        '8BS' => 'E02003835',
        '8BT' => 'E02003835',
        '8BU' => 'E02003835',
        '8BW' => 'E02003835',
        '8BX' => 'E02003835',
        '8BY' => 'E02003835',
        '8BZ' => 'E02003835',
        '8DA' => 'E02003835',
        '8DB' => 'E02003835',
        '8DD' => 'E02003835',
        '8DE' => 'E02003835',
        '8DF' => 'E02003835',
        '8DG' => 'E02003835',
        '8DH' => 'E02003835',
        '8DJ' => 'E02003835',
        '8DL' => 'E02003835',
        '8DN' => 'E02003835',
        '8DP' => 'E02003835',
        '8DQ' => 'E02003835',
        '8DR' => 'E02003835',
        '8DS' => 'E02003835',
        '8DT' => 'E02003835',
        '8DU' => 'E02003835',
        '8DW' => 'E02003835',
        '8DX' => 'E02003835',
        '8DY' => 'E02003835',
        '8DZ' => 'E02003835',
        '8EA' => 'E02003835',
        '8EB' => 'E02003835',
        '8ED' => 'E02003835',
        '8EE' => 'E02003830',
        '8EF' => 'E02003832',
        '8EG' => 'E02003835',
        '8EH' => 'E02003835',
        '8EJ' => 'E02003835',
        '8EL' => 'E02003835',
        '8EN' => 'E02003835',
        '8EP' => 'E02003835',
        '8EQ' => 'E02003835',
        '8ER' => 'E02003835',
        '8ES' => 'E02003835',
        '8ET' => 'E02003835',
        '8EU' => 'E02003835',
        '8EW' => 'E02003835',
        '8EX' => 'E02003835',
        '8EY' => 'E02003835',
        '8EZ' => 'E02003835',
        '8FA' => 'E02003833',
        '8FB' => 'E02003833',
        '8FD' => 'E02003833',
        '8FE' => 'E02003833',
        '8FF' => 'E02003833',
        '8FG' => 'E02003833',
        '8FH' => 'E02003833',
        '8FJ' => 'E02003833',
        '8FL' => 'E02003833',
        '8FN' => 'E02003833',
        '8FP' => 'E02003833',
        '8FQ' => 'E02003829',
        '8FR' => 'E02003833',
        '8FS' => 'E02003833',
        '8FT' => 'E02003833',
        '8FU' => 'E02003835',
        '8FW' => 'E02003833',
        '8FX' => 'E02003833',
        '8FY' => 'E02003829',
        '8FZ' => 'E02003835',
        '8GA' => 'E02003833',
        '8GB' => 'E02003833',
        '8GD' => 'E02003829',
        '8GE' => 'E02003828',
        '8GF' => 'E02003830',
        '8GG' => 'E02003833',
        '8GL' => 'E02003833',
        '8GN' => 'E02003833',
        '8GS' => 'E02003830',
        '8HA' => 'E02003835',
        '8HB' => 'E02003835',
        '8HD' => 'E02003835',
        '8HE' => 'E02003835',
        '8HF' => 'E02003835',
        '8HG' => 'E02003835',
        '8HH' => 'E02003835',
        '8HJ' => 'E02003835',
        '8HL' => 'E02003835',
        '8HN' => 'E02003835',
        '8HP' => 'E02003835',
        '8HQ' => 'E02003835',
        '8HR' => 'E02003835',
        '8HS' => 'E02003835',
        '8HT' => 'E02003835',
        '8HU' => 'E02003835',
        '8HW' => 'E02003835',
        '8HX' => 'E02003835',
        '8HY' => 'E02003835',
        '8HZ' => 'E02003835',
        '8JA' => 'E02003835',
        '8JB' => 'E02003835',
        '8JD' => 'E02003835',
        '8JE' => 'E02003835',
        '8JF' => 'E02003835',
        '8JG' => 'E02003835',
        '8JH' => 'E02003835',
        '8JL' => 'E02003833',
        '8JN' => 'E02003835',
        '8JP' => 'E02003835',
        '8JQ' => 'E02003835',
        '8JR' => 'E02003835',
        '8JS' => 'E02003835',
        '8JT' => 'E02003835',
        '8JU' => 'E02003833',
        '8JW' => 'E02003835',
        '8JX' => 'E02003833',
        '8JY' => 'E02003833',
        '8JZ' => 'E02003833',
        '8LA' => 'E02003830',
        '8LB' => 'E02003830',
        '8LD' => 'E02003830',
        '8LE' => 'E02003830',
        '8LF' => 'E02003830',
        '8LG' => 'E02003830',
        '8LH' => 'E02003830',
        '8LJ' => 'E02003830',
        '8LL' => 'E02003830',
        '8LN' => 'E02003830',
        '8LP' => 'E02003830',
        '8LQ' => 'E02003830',
        '8LR' => 'E02003830',
        '8LS' => 'E02003830',
        '8LT' => 'E02003830',
        '8LU' => 'E02003830',
        '8LW' => 'E02003830',
        '8LX' => 'E02003830',
        '8LY' => 'E02003830',
        '8LZ' => 'E02003830',
        '8NA' => 'E02003830',
        '8NB' => 'E02003830',
        '8ND' => 'E02003830',
        '8NE' => 'E02003830',
        '8NF' => 'E02003830',
        '8NG' => 'E02003830',
        '8NH' => 'E02003830',
        '8NJ' => 'E02003833',
        '8NL' => 'E02003833',
        '8NN' => 'E02003833',
        '8NP' => 'E02003833',
        '8NQ' => 'E02003830',
        '8NR' => 'E02003833',
        '8NS' => 'E02003833',
        '8NT' => 'E02003828',
        '8NU' => 'E02003828',
        '8NW' => 'E02003833',
        '8NX' => 'E02003833',
        '8NY' => 'E02003833',
        '8NZ' => 'E02003833',
        '8PA' => 'E02003833',
        '8PB' => 'E02003833',
        '8PD' => 'E02003833',
        '8PE' => 'E02003833',
        '8PF' => 'E02003833',
        '8PG' => 'E02003833',
        '8PH' => 'E02003833',
        '8PJ' => 'E02003833',
        '8PL' => 'E02003833',
        '8PN' => 'E02003833',
        '8PP' => 'E02003833',
        '8PQ' => 'E02003833',
        '8PR' => 'E02003833',
        '8PS' => 'E02003833',
        '8PT' => 'E02003833',
        '8PU' => 'E02003833',
        '8PW' => 'E02003833',
        '8PX' => 'E02003833',
        '8PY' => 'E02003833',
        '8PZ' => 'E02003833',
        '8QA' => 'E02003833',
        '8QB' => 'E02003833',
        '8QD' => 'E02003833',
        '8QE' => 'E02003833',
        '8QF' => 'E02003833',
        '8QG' => 'E02003833',
        '8QH' => 'E02003833',
        '8QJ' => 'E02003833',
        '8QL' => 'E02003833',
        '8QN' => 'E02003833',
        '8QP' => 'E02003833',
        '8QQ' => 'E02003833',
        '8QR' => 'E02003833',
        '8QS' => 'E02003833',
        '8QT' => 'E02003833',
        '8QU' => 'E02003833',
        '8QW' => 'E02003833',
        '8QX' => 'E02003833',
        '8QY' => 'E02003833',
        '8QZ' => 'E02003833',
        '8RA' => 'E02003833',
        '8RB' => 'E02003833',
        '8RD' => 'E02003833',
        '8RE' => 'E02003833',
        '8RF' => 'E02003833',
        '8RG' => 'E02003833',
        '8RH' => 'E02003833',
        '8RJ' => 'E02003833',
        '8RL' => 'E02003833',
        '8RN' => 'E02003833',
        '8RP' => 'E02003833',
        '8RQ' => 'E02003833',
        '8RR' => 'E02003833',
        '8RS' => 'E02003833',
        '8RT' => 'E02003833',
        '8RU' => 'E02003833',
        '8RW' => 'E02003833',
        '8RX' => 'E02003833',
        '8RY' => 'E02003833',
        '8RZ' => 'E02003833',
        '8SA' => 'E02003833',
        '8SB' => 'E02003833',
        '8SD' => 'E02003828',
        '8SE' => 'E02003828',
        '8SF' => 'E02003833',
        '8SG' => 'E02003828',
        '8SH' => 'E02003828',
        '8SJ' => 'E02003828',
        '8SL' => 'E02003828',
        '8SN' => 'E02003828',
        '8SP' => 'E02003828',
        '8SQ' => 'E02003828',
        '8SR' => 'E02003828',
        '8SS' => 'E02003833',
        '8ST' => 'E02003833',
        '8SU' => 'E02003828',
        '8SW' => 'E02003828',
        '8SX' => 'E02003828',
        '8SY' => 'E02003828',
        '8SZ' => 'E02003828',
        '8TA' => 'E02003828',
        '8TB' => 'E02003828',
        '8TD' => 'E02003828',
        '8TE' => 'E02003828',
        '8TF' => 'E02003828',
        '8TG' => 'E02003828',
        '8TH' => 'E02003828',
        '8TJ' => 'E02003828',
        '8TL' => 'E02003828',
        '8TN' => 'E02003828',
        '8TP' => 'E02003828',
        '8TQ' => 'E02003828',
        '8TR' => 'E02003828',
        '8TS' => 'E02003828',
        '8TT' => 'E02003828',
        '8TU' => 'E02003828',
        '8TW' => 'E02003828',
        '8TX' => 'E02003828',
        '8TY' => 'E02003828',
        '8TZ' => 'E02003828',
        '8UA' => 'E02003828',
        '8UB' => 'E02003828',
        '8UD' => 'E02003828',
        '8UE' => 'E02003828',
        '8UF' => 'E02003828',
        '8UG' => 'E02003828',
        '8UH' => 'E02003828',
        '8UJ' => 'E02003828',
        '8UL' => 'E02003828',
        '8UN' => 'E02003833',
        '8UP' => 'E02003828',
        '8UQ' => 'E02003828',
        '8UR' => 'E02003833',
        '8US' => 'E02003833',
        '8UT' => 'E02003833',
        '8UU' => 'E02003833',
        '8UW' => 'E02003833',
        '8UY' => 'E02003828',
        '8UZ' => 'E02003833',
        '8WA' => 'E02003833',
        '8WB' => 'E02003828',
        '8WD' => 'E02003828',
        '8WE' => 'E02003829',
        '8WF' => 'E02003828',
        '8WG' => 'E02003835',
        '8WH' => 'E02003833',
        '8WJ' => 'E02003835',
        '8WP' => 'E02003835',
        '8WQ' => 'E02003835',
        '8WX' => 'E02003829',
        '8WY' => 'E02003829',
        '8WZ' => 'E02003828',
        '8XA' => 'E02003833',
        '8XB' => 'E02003829',
        '8XD' => 'E02003829',
        '8XE' => 'E02003829',
        '8XF' => 'E02003829',
        '8ZW' => 'E02003829',
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
