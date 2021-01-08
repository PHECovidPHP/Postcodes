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
final class BS10
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '5AA' => 'E02003015',
        '5AB' => 'E02003015',
        '5AD' => 'E02003015',
        '5AE' => 'E02003015',
        '5AF' => 'E02003015',
        '5AG' => 'E02003015',
        '5AH' => 'E02003015',
        '5AJ' => 'E02003015',
        '5AL' => 'E02003015',
        '5AN' => 'E02003021',
        '5AP' => 'E02003015',
        '5AQ' => 'E02003015',
        '5AR' => 'E02003015',
        '5AS' => 'E02003015',
        '5AT' => 'E02003015',
        '5AU' => 'E02003015',
        '5AW' => 'E02003015',
        '5AX' => 'E02003015',
        '5AY' => 'E02003015',
        '5AZ' => 'E02003015',
        '5BA' => 'E02003015',
        '5BB' => 'E02003015',
        '5BD' => 'E02003015',
        '5BE' => 'E02003015',
        '5BF' => 'E02003013',
        '5BG' => 'E02003015',
        '5BH' => 'E02003015',
        '5BJ' => 'E02003015',
        '5BL' => 'E02003015',
        '5BN' => 'E02003015',
        '5BP' => 'E02003015',
        '5BQ' => 'E02003015',
        '5BS' => 'E02003015',
        '5BT' => 'E02003015',
        '5BU' => 'E02003015',
        '5BW' => 'E02003015',
        '5BX' => 'E02003015',
        '5BY' => 'E02003015',
        '5BZ' => 'E02003015',
        '5DA' => 'E02003015',
        '5DB' => 'E02003015',
        '5DD' => 'E02003015',
        '5DE' => 'E02003013',
        '5DF' => 'E02003015',
        '5DG' => 'E02003017',
        '5DH' => 'E02003013',
        '5DJ' => 'E02003015',
        '5DL' => 'E02003017',
        '5DN' => 'E02003017',
        '5DP' => 'E02003013',
        '5DQ' => 'E02003013',
        '5DR' => 'E02003015',
        '5DS' => 'E02003015',
        '5DT' => 'E02003017',
        '5DU' => 'E02003017',
        '5DW' => 'E02003017',
        '5DX' => 'E02003017',
        '5DY' => 'E02003017',
        '5DZ' => 'E02003017',
        '5EA' => 'E02003015',
        '5EB' => 'E02003015',
        '5ED' => 'E02003015',
        '5EE' => 'E02003017',
        '5EF' => 'E02003017',
        '5EG' => 'E02003017',
        '5EH' => 'E02003013',
        '5EJ' => 'E02003013',
        '5EL' => 'E02003013',
        '5EN' => 'E02003015',
        '5EP' => 'E02003015',
        '5EQ' => 'E02003017',
        '5ER' => 'E02003015',
        '5ES' => 'E02003015',
        '5ET' => 'E02003015',
        '5EU' => 'E02003015',
        '5EW' => 'E02003015',
        '5EX' => 'E02003015',
        '5EY' => 'E02003015',
        '5EZ' => 'E02003017',
        '5FB' => 'E02003015',
        '5FD' => 'E02003013',
        '5FE' => 'E02003013',
        '5FF' => 'E02003015',
        '5FG' => 'E02003015',
        '5FH' => 'E02003015',
        '5FJ' => 'E02003013',
        '5FL' => 'E02003013',
        '5FN' => 'E02003015',
        '5FP' => 'E02003015',
        '5HA' => 'E02003017',
        '5HB' => 'E02003015',
        '5HD' => 'E02003013',
        '5HE' => 'E02003017',
        '5HF' => 'E02003017',
        '5HG' => 'E02003017',
        '5HH' => 'E02003017',
        '5HJ' => 'E02003017',
        '5HL' => 'E02003017',
        '5HN' => 'E02003017',
        '5HQ' => 'E02003017',
        '5HU' => 'E02003013',
        '5HW' => 'E02003017',
        '5HX' => 'E02003013',
        '5HY' => 'E02003017',
        '5HZ' => 'E02003017',
        '5JA' => 'E02003017',
        '5JB' => 'E02003017',
        '5JD' => 'E02003017',
        '5JE' => 'E02003017',
        '5JF' => 'E02003017',
        '5JG' => 'E02003017',
        '5JH' => 'E02003013',
        '5JJ' => 'E02003013',
        '5JL' => 'E02003013',
        '5JN' => 'E02003013',
        '5JP' => 'E02003013',
        '5JQ' => 'E02003013',
        '5JR' => 'E02003013',
        '5JS' => 'E02003013',
        '5JT' => 'E02003013',
        '5JU' => 'E02003013',
        '5JW' => 'E02003013',
        '5JX' => 'E02003013',
        '5JY' => 'E02003013',
        '5JZ' => 'E02003013',
        '5LA' => 'E02003013',
        '5LG' => 'E02003013',
        '5LH' => 'E02003015',
        '5LJ' => 'E02003015',
        '5LL' => 'E02003015',
        '5LN' => 'E02003015',
        '5LP' => 'E02003015',
        '5LQ' => 'E02003013',
        '5LR' => 'E02003015',
        '5LS' => 'E02003013',
        '5LT' => 'E02003013',
        '5LU' => 'E02003013',
        '5LW' => 'E02003013',
        '5LX' => 'E02003015',
        '5LY' => 'E02003015',
        '5LZ' => 'E02003013',
        '5NA' => 'E02003013',
        '5NB' => 'E02003015',
        '5ND' => 'E02003015',
        '5NE' => 'E02003015',
        '5NF' => 'E02003015',
        '5NG' => 'E02003013',
        '5NH' => 'E02003015',
        '5NJ' => 'E02003015',
        '5NL' => 'E02003013',
        '5NN' => 'E02003013',
        '5NP' => 'E02003013',
        '5NQ' => 'E02003013',
        '5NR' => 'E02003013',
        '5NS' => 'E02003013',
        '5NT' => 'E02003013',
        '5NU' => 'E02003013',
        '5NW' => 'E02003013',
        '5NZ' => 'E02003013',
        '5PA' => 'E02003013',
        '5PB' => 'E02003013',
        '5PD' => 'E02003013',
        '5PE' => 'E02003013',
        '5PF' => 'E02003013',
        '5PG' => 'E02003013',
        '5PH' => 'E02003013',
        '5PJ' => 'E02003013',
        '5PL' => 'E02003013',
        '5PN' => 'E02003013',
        '5PP' => 'E02003013',
        '5PQ' => 'E02003013',
        '5PR' => 'E02003013',
        '5PS' => 'E02003013',
        '5PT' => 'E02003013',
        '5PU' => 'E02003013',
        '5PW' => 'E02003013',
        '5PX' => 'E02003013',
        '5PY' => 'E02003013',
        '5PZ' => 'E02003013',
        '5QA' => 'E02003013',
        '5QB' => 'E02003013',
        '5QD' => 'E02003013',
        '5QH' => 'E02003013',
        '5QJ' => 'E02003013',
        '5QL' => 'E02003013',
        '5QN' => 'E02003013',
        '5QP' => 'E02003013',
        '5QR' => 'E02003013',
        '5QS' => 'E02003013',
        '5QT' => 'E02003013',
        '5QU' => 'E02003013',
        '5QW' => 'E02003013',
        '5QX' => 'E02003013',
        '5QY' => 'E02003013',
        '5QZ' => 'E02003013',
        '5RA' => 'E02003013',
        '5RB' => 'E02003013',
        '5RD' => 'E02003013',
        '5RE' => 'E02003013',
        '5RF' => 'E02003013',
        '5RG' => 'E02003013',
        '5RH' => 'E02003013',
        '5RJ' => 'E02003013',
        '5RL' => 'E02003013',
        '5RN' => 'E02003013',
        '5RP' => 'E02003013',
        '5RQ' => 'E02003013',
        '5RR' => 'E02003013',
        '5RW' => 'E02003013',
        '5RZ' => 'E02003013',
        '5SA' => 'E02003013',
        '5SB' => 'E02003013',
        '5SD' => 'E02003013',
        '5SE' => 'E02003013',
        '5SF' => 'E02003013',
        '5SG' => 'E02003013',
        '5SH' => 'E02003013',
        '5SJ' => 'E02003013',
        '5SL' => 'E02003013',
        '5SN' => 'E02003013',
        '5SP' => 'E02003013',
        '5SQ' => 'E02003013',
        '5SR' => 'E02003013',
        '5SS' => 'E02003013',
        '5ST' => 'E02003013',
        '5SU' => 'E02003013',
        '5SW' => 'E02003013',
        '5SX' => 'E02003013',
        '5SY' => 'E02003013',
        '5SZ' => 'E02003013',
        '5WE' => 'E02003017',
        '5WG' => 'E02003013',
        '5WP' => 'E02003017',
        '5WQ' => 'E02003017',
        '5WR' => 'E02003017',
        '5WS' => 'E02003017',
        '5WT' => 'E02003017',
        '5WU' => 'E02003017',
        '5WW' => 'E02003017',
        '5WX' => 'E02003017',
        '5WY' => 'E02003017',
        '5WZ' => 'E02003017',
        '5XG' => 'E02003017',
        '5XJ' => 'E02003013',
        '5XT' => 'E02003013',
        '5YA' => 'E02003013',
        '5YB' => 'E02003013',
        '5YD' => 'E02003013',
        '5YE' => 'E02003017',
        '5YF' => 'E02003013',
        '5YG' => 'E02003017',
        '5YH' => 'E02003017',
        '5YJ' => 'E02003017',
        '5YL' => 'E02003017',
        '5YT' => 'E02003017',
        '5ZN' => 'E02003017',
        '5ZR' => 'E02003017',
        '5ZW' => 'E02003017',
        '5ZX' => 'E02003017',
        '6AA' => 'E02003012',
        '6AB' => 'E02003013',
        '6AD' => 'E02003013',
        '6AE' => 'E02003017',
        '6AF' => 'E02003013',
        '6AG' => 'E02003013',
        '6AH' => 'E02003013',
        '6AJ' => 'E02003013',
        '6AL' => 'E02003013',
        '6AN' => 'E02003013',
        '6AP' => 'E02003013',
        '6AQ' => 'E02003013',
        '6AR' => 'E02003013',
        '6AS' => 'E02003013',
        '6AT' => 'E02003013',
        '6AU' => 'E02003013',
        '6AW' => 'E02003013',
        '6AX' => 'E02003013',
        '6AY' => 'E02003013',
        '6AZ' => 'E02003013',
        '6BA' => 'E02003013',
        '6BB' => 'E02003013',
        '6BD' => 'E02003013',
        '6BE' => 'E02003013',
        '6BF' => 'E02003013',
        '6BG' => 'E02003013',
        '6BH' => 'E02003013',
        '6BJ' => 'E02003013',
        '6BL' => 'E02003013',
        '6BN' => 'E02003013',
        '6BP' => 'E02003013',
        '6BQ' => 'E02003013',
        '6BS' => 'E02003013',
        '6BT' => 'E02003013',
        '6BU' => 'E02003013',
        '6BW' => 'E02003013',
        '6BX' => 'E02003013',
        '6BY' => 'E02003013',
        '6BZ' => 'E02003013',
        '6DA' => 'E02003013',
        '6DB' => 'E02003013',
        '6DD' => 'E02003013',
        '6DE' => 'E02003013',
        '6DF' => 'E02003013',
        '6DG' => 'E02003013',
        '6DH' => 'E02003013',
        '6DJ' => 'E02003013',
        '6DL' => 'E02003013',
        '6DN' => 'E02003013',
        '6DP' => 'E02003013',
        '6DQ' => 'E02003013',
        '6DR' => 'E02003013',
        '6DS' => 'E02003013',
        '6DT' => 'E02003013',
        '6DU' => 'E02003013',
        '6DW' => 'E02003013',
        '6DX' => 'E02003013',
        '6DY' => 'E02003013',
        '6DZ' => 'E02003013',
        '6EA' => 'E02003013',
        '6EB' => 'E02003013',
        '6ED' => 'E02003013',
        '6EE' => 'E02003013',
        '6EF' => 'E02003013',
        '6EG' => 'E02003013',
        '6EH' => 'E02003013',
        '6EJ' => 'E02003013',
        '6EL' => 'E02003013',
        '6EN' => 'E02003013',
        '6EP' => 'E02003013',
        '6EQ' => 'E02003013',
        '6ER' => 'E02003013',
        '6ES' => 'E02003013',
        '6ET' => 'E02003013',
        '6EU' => 'E02003013',
        '6EW' => 'E02003013',
        '6EX' => 'E02003013',
        '6EY' => 'E02003013',
        '6EZ' => 'E02003013',
        '6FB' => 'E02003012',
        '6FD' => 'E02003012',
        '6FE' => 'E02003012',
        '6FF' => 'E02003012',
        '6FG' => 'E02003094',
        '6FH' => 'E02003012',
        '6GH' => 'E02003012',
        '6HA' => 'E02003013',
        '6HB' => 'E02003013',
        '6HD' => 'E02003013',
        '6HE' => 'E02003013',
        '6HF' => 'E02003013',
        '6HG' => 'E02003013',
        '6HH' => 'E02003013',
        '6HJ' => 'E02003013',
        '6HL' => 'E02003013',
        '6HN' => 'E02003013',
        '6HP' => 'E02003013',
        '6HQ' => 'E02003013',
        '6HR' => 'E02003013',
        '6HS' => 'E02003013',
        '6HT' => 'E02003013',
        '6HU' => 'E02003013',
        '6HW' => 'E02003013',
        '6HX' => 'E02003013',
        '6HY' => 'E02003013',
        '6HZ' => 'E02003013',
        '6JA' => 'E02003013',
        '6JB' => 'E02003013',
        '6JD' => 'E02003013',
        '6JE' => 'E02003013',
        '6JF' => 'E02003013',
        '6JG' => 'E02003012',
        '6JH' => 'E02003012',
        '6JJ' => 'E02003013',
        '6JL' => 'E02003012',
        '6JN' => 'E02003012',
        '6JP' => 'E02003012',
        '6JQ' => 'E02003012',
        '6JR' => 'E02003012',
        '6JS' => 'E02003012',
        '6JT' => 'E02003012',
        '6JU' => 'E02003013',
        '6JW' => 'E02003012',
        '6JX' => 'E02003012',
        '6JY' => 'E02003012',
        '6JZ' => 'E02003013',
        '6LA' => 'E02003013',
        '6LB' => 'E02003094',
        '6LD' => 'E02003013',
        '6LE' => 'E02003013',
        '6LF' => 'E02003013',
        '6LG' => 'E02003013',
        '6LH' => 'E02003013',
        '6LJ' => 'E02003013',
        '6LL' => 'E02003013',
        '6LN' => 'E02003013',
        '6LP' => 'E02003013',
        '6LQ' => 'E02003013',
        '6LR' => 'E02003013',
        '6LS' => 'E02003013',
        '6LT' => 'E02003013',
        '6LU' => 'E02003013',
        '6LW' => 'E02003013',
        '6LX' => 'E02003013',
        '6LY' => 'E02003094',
        '6LZ' => 'E02003013',
        '6NA' => 'E02003012',
        '6NB' => 'E02003012',
        '6ND' => 'E02003012',
        '6NE' => 'E02003013',
        '6NF' => 'E02003012',
        '6NG' => 'E02003013',
        '6NH' => 'E02003013',
        '6NJ' => 'E02003013',
        '6NL' => 'E02003013',
        '6NN' => 'E02003013',
        '6NP' => 'E02003012',
        '6NQ' => 'E02003013',
        '6NR' => 'E02003013',
        '6NS' => 'E02003013',
        '6NT' => 'E02003012',
        '6NU' => 'E02003012',
        '6NW' => 'E02003013',
        '6NX' => 'E02003012',
        '6NY' => 'E02003012',
        '6NZ' => 'E02003012',
        '6PA' => 'E02003012',
        '6PB' => 'E02003012',
        '6PD' => 'E02003012',
        '6PE' => 'E02003012',
        '6PF' => 'E02003012',
        '6PG' => 'E02003012',
        '6PH' => 'E02003012',
        '6PJ' => 'E02003012',
        '6PL' => 'E02003013',
        '6PN' => 'E02003013',
        '6PP' => 'E02003013',
        '6PQ' => 'E02003012',
        '6PR' => 'E02003013',
        '6PS' => 'E02003013',
        '6PT' => 'E02003013',
        '6PU' => 'E02003013',
        '6PW' => 'E02003013',
        '6PX' => 'E02003013',
        '6PY' => 'E02003013',
        '6PZ' => 'E02003013',
        '6QA' => 'E02003012',
        '6QB' => 'E02003012',
        '6QD' => 'E02003012',
        '6QE' => 'E02003012',
        '6QF' => 'E02003012',
        '6QG' => 'E02003012',
        '6QH' => 'E02003012',
        '6QJ' => 'E02003012',
        '6QL' => 'E02003012',
        '6QN' => 'E02003012',
        '6QP' => 'E02003012',
        '6QQ' => 'E02003012',
        '6QR' => 'E02003012',
        '6QS' => 'E02003012',
        '6QT' => 'E02003012',
        '6QU' => 'E02003012',
        '6QW' => 'E02003012',
        '6QX' => 'E02003012',
        '6QY' => 'E02003012',
        '6QZ' => 'E02003012',
        '6RA' => 'E02003012',
        '6RB' => 'E02003012',
        '6RD' => 'E02003012',
        '6RE' => 'E02003012',
        '6RF' => 'E02003012',
        '6RG' => 'E02003012',
        '6RH' => 'E02003012',
        '6RJ' => 'E02003012',
        '6RL' => 'E02003012',
        '6RN' => 'E02003012',
        '6RP' => 'E02003012',
        '6RQ' => 'E02003012',
        '6RR' => 'E02003012',
        '6RS' => 'E02003012',
        '6RT' => 'E02003012',
        '6RU' => 'E02003012',
        '6RW' => 'E02003012',
        '6RX' => 'E02003012',
        '6RY' => 'E02003012',
        '6RZ' => 'E02003013',
        '6SA' => 'E02003012',
        '6SB' => 'E02003012',
        '6SD' => 'E02003012',
        '6SE' => 'E02003012',
        '6SF' => 'E02003012',
        '6SG' => 'E02003012',
        '6SH' => 'E02003012',
        '6SJ' => 'E02003012',
        '6SL' => 'E02003012',
        '6SN' => 'E02003012',
        '6SP' => 'E02003012',
        '6SQ' => 'E02003012',
        '6SR' => 'E02003012',
        '6SS' => 'E02003012',
        '6ST' => 'E02003012',
        '6SU' => 'E02003012',
        '6SW' => 'E02003094',
        '6SX' => 'E02003012',
        '6SY' => 'E02003012',
        '6SZ' => 'E02003012',
        '6TA' => 'E02003017',
        '6TB' => 'E02003012',
        '6TD' => 'E02003012',
        '6TE' => 'E02003012',
        '6TF' => 'E02003012',
        '6TG' => 'E02003013',
        '6TH' => 'E02003012',
        '6TJ' => 'E02003012',
        '6TL' => 'E02003012',
        '6TN' => 'E02003013',
        '6TP' => 'E02003013',
        '6TQ' => 'E02003013',
        '6TR' => 'E02003012',
        '6TS' => 'E02003012',
        '6TU' => 'E02003013',
        '6TW' => 'E02003013',
        '6TX' => 'E02003013',
        '6TY' => 'E02003013',
        '6TZ' => 'E02003012',
        '6UA' => 'E02003094',
        '6UB' => 'E02003012',
        '6UD' => 'E02003012',
        '6UE' => 'E02003012',
        '6WA' => 'E02003017',
        '6WB' => 'E02003017',
        '6WD' => 'E02003017',
        '6WE' => 'E02003013',
        '6WF' => 'E02003013',
        '6WG' => 'E02003013',
        '6WH' => 'E02003013',
        '6WR' => 'E02003017',
        '6WS' => 'E02003017',
        '6WT' => 'E02003017',
        '6WU' => 'E02003017',
        '6WW' => 'E02003017',
        '6WX' => 'E02003017',
        '6WY' => 'E02003017',
        '6WZ' => 'E02003017',
        '6YA' => 'E02003013',
        '6YB' => 'E02003013',
        '6YD' => 'E02003017',
        '6YE' => 'E02003017',
        '6YF' => 'E02003017',
        '6YG' => 'E02003013',
        '6YH' => 'E02003013',
        '6YJ' => 'E02003017',
        '6YL' => 'E02003017',
        '6YU' => 'E02003017',
        '6YW' => 'E02003013',
        '6ZQ' => 'E02003017',
        '6ZX' => 'E02003017',
        '7AA' => 'E02003012',
        '7AB' => 'E02003012',
        '7AD' => 'E02003012',
        '7AE' => 'E02003012',
        '7AF' => 'E02003012',
        '7AG' => 'E02003012',
        '7AH' => 'E02003012',
        '7AJ' => 'E02003012',
        '7AL' => 'E02003012',
        '7AN' => 'E02003020',
        '7AP' => 'E02003012',
        '7AQ' => 'E02003012',
        '7AR' => 'E02003012',
        '7AS' => 'E02003012',
        '7AT' => 'E02003012',
        '7AU' => 'E02003012',
        '7AW' => 'E02003012',
        '7AX' => 'E02003012',
        '7AY' => 'E02003012',
        '7AZ' => 'E02003012',
        '7BA' => 'E02003012',
        '7BB' => 'E02003012',
        '7BD' => 'E02003012',
        '7BE' => 'E02003012',
        '7BF' => 'E02003012',
        '7BG' => 'E02003012',
        '7BH' => 'E02003012',
        '7BJ' => 'E02003012',
        '7BL' => 'E02003012',
        '7BN' => 'E02003012',
        '7BP' => 'E02003012',
        '7BQ' => 'E02003012',
        '7BS' => 'E02003012',
        '7BT' => 'E02003012',
        '7BU' => 'E02003012',
        '7BW' => 'E02003012',
        '7BX' => 'E02003012',
        '7BY' => 'E02003012',
        '7BZ' => 'E02003012',
        '7DA' => 'E02003017',
        '7DB' => 'E02003017',
        '7DD' => 'E02003094',
        '7DE' => 'E02003012',
        '7DF' => 'E02003020',
        '7DG' => 'E02003020',
        '7DH' => 'E02003012',
        '7DJ' => 'E02003012',
        '7DL' => 'E02003012',
        '7DN' => 'E02003012',
        '7DP' => 'E02003012',
        '7DQ' => 'E02003012',
        '7DR' => 'E02003012',
        '7DS' => 'E02003012',
        '7DT' => 'E02003012',
        '7DU' => 'E02003012',
        '7DW' => 'E02003012',
        '7DX' => 'E02003012',
        '7DY' => 'E02003012',
        '7DZ' => 'E02003012',
        '7EA' => 'E02003012',
        '7EB' => 'E02003012',
        '7ED' => 'E02003012',
        '7EE' => 'E02003012',
        '7EF' => 'E02003012',
        '7EG' => 'E02003012',
        '7EH' => 'E02003012',
        '7EJ' => 'E02003012',
        '7EL' => 'E02003012',
        '7EN' => 'E02003012',
        '7EP' => 'E02003012',
        '7EQ' => 'E02003012',
        '7ER' => 'E02003012',
        '7ES' => 'E02003094',
        '7ET' => 'E02003012',
        '7EU' => 'E02003012',
        '7EW' => 'E02003012',
        '7EX' => 'E02003012',
        '7EY' => 'E02003012',
        '7EZ' => 'E02003012',
        '7FB' => 'E02003012',
        '7FD' => 'E02003012',
        '7FE' => 'E02003020',
        '7FF' => 'E02003094',
        '7FG' => 'E02003020',
        '7FH' => 'E02003012',
        '7FJ' => 'E02003012',
        '7FL' => 'E02003094',
        '7FN' => 'E02003094',
        '7FP' => 'E02003020',
        '7FQ' => 'E02003020',
        '7FR' => 'E02003094',
        '7FS' => 'E02003012',
        '7FT' => 'E02003012',
        '7FU' => 'E02003012',
        '7FW' => 'E02003094',
        '7FX' => 'E02003012',
        '7GA' => 'E02003094',
        '7GB' => 'E02003094',
        '7GD' => 'E02003094',
        '7HE' => 'E02003012',
        '7HF' => 'E02003012',
        '7HG' => 'E02003012',
        '7HH' => 'E02003012',
        '7HJ' => 'E02003012',
        '7HL' => 'E02003012',
        '7HN' => 'E02003012',
        '7HP' => 'E02003012',
        '7HQ' => 'E02003012',
        '7HR' => 'E02003012',
        '7HS' => 'E02003012',
        '7HT' => 'E02003012',
        '7HU' => 'E02003012',
        '7HW' => 'E02003012',
        '7HX' => 'E02003012',
        '7HY' => 'E02003012',
        '7HZ' => 'E02003012',
        '7JA' => 'E02003012',
        '7JB' => 'E02003012',
        '7JD' => 'E02003012',
        '7JE' => 'E02003012',
        '7JF' => 'E02003012',
        '7JG' => 'E02003012',
        '7JH' => 'E02003012',
        '7JJ' => 'E02003012',
        '7JL' => 'E02003012',
        '7JN' => 'E02003012',
        '7JP' => 'E02003012',
        '7JQ' => 'E02003012',
        '7JR' => 'E02003012',
        '7JT' => 'E02003012',
        '7JU' => 'E02003012',
        '7JW' => 'E02003012',
        '7LA' => 'E02003012',
        '7LB' => 'E02003012',
        '7LD' => 'E02003012',
        '7LE' => 'E02003012',
        '7LF' => 'E02003012',
        '7LG' => 'E02003012',
        '7LH' => 'E02003012',
        '7LJ' => 'E02003012',
        '7LL' => 'E02003012',
        '7LN' => 'E02003012',
        '7LP' => 'E02003012',
        '7LQ' => 'E02003012',
        '7LR' => 'E02003012',
        '7LS' => 'E02003094',
        '7LT' => 'E02003094',
        '7LU' => 'E02003012',
        '7LW' => 'E02003012',
        '7LX' => 'E02003012',
        '7LY' => 'E02003012',
        '7LZ' => 'E02003012',
        '7NA' => 'E02003012',
        '7NB' => 'E02003012',
        '7ND' => 'E02003012',
        '7NE' => 'E02003094',
        '7NF' => 'E02003094',
        '7NG' => 'E02003012',
        '7NH' => 'E02003012',
        '7NJ' => 'E02003012',
        '7NL' => 'E02003012',
        '7NN' => 'E02003012',
        '7NP' => 'E02003012',
        '7NQ' => 'E02003012',
        '7NR' => 'E02003012',
        '7NS' => 'E02003012',
        '7NT' => 'E02003012',
        '7NU' => 'E02003012',
        '7NW' => 'E02003012',
        '7NX' => 'E02003012',
        '7NY' => 'E02003012',
        '7NZ' => 'E02003012',
        '7PA' => 'E02003012',
        '7PB' => 'E02003012',
        '7PD' => 'E02003012',
        '7PE' => 'E02003012',
        '7PF' => 'E02003012',
        '7PG' => 'E02003012',
        '7PH' => 'E02003012',
        '7PJ' => 'E02003012',
        '7PL' => 'E02003012',
        '7PN' => 'E02003012',
        '7PP' => 'E02003012',
        '7PQ' => 'E02003012',
        '7PR' => 'E02003012',
        '7PS' => 'E02003012',
        '7PT' => 'E02003012',
        '7PU' => 'E02003012',
        '7PW' => 'E02003012',
        '7PX' => 'E02003012',
        '7PY' => 'E02003012',
        '7PZ' => 'E02003012',
        '7QA' => 'E02003012',
        '7QB' => 'E02003020',
        '7QD' => 'E02003020',
        '7QE' => 'E02003012',
        '7QF' => 'E02003012',
        '7QG' => 'E02003012',
        '7QH' => 'E02003012',
        '7QJ' => 'E02003012',
        '7QL' => 'E02003012',
        '7QN' => 'E02003012',
        '7QP' => 'E02003012',
        '7QQ' => 'E02003012',
        '7QR' => 'E02003012',
        '7QS' => 'E02003012',
        '7QT' => 'E02003012',
        '7QU' => 'E02003012',
        '7QW' => 'E02003012',
        '7QX' => 'E02003012',
        '7QY' => 'E02003012',
        '7QZ' => 'E02003012',
        '7RA' => 'E02003012',
        '7RB' => 'E02003012',
        '7RD' => 'E02003012',
        '7RE' => 'E02003012',
        '7RF' => 'E02003012',
        '7RG' => 'E02003012',
        '7RH' => 'E02003094',
        '7RJ' => 'E02003094',
        '7RL' => 'E02003094',
        '7RN' => 'E02003094',
        '7RP' => 'E02003094',
        '7RQ' => 'E02003094',
        '7RR' => 'E02003094',
        '7RS' => 'E02003094',
        '7RT' => 'E02003094',
        '7RU' => 'E02003014',
        '7RW' => 'E02003094',
        '7RX' => 'E02003014',
        '7RY' => 'E02003014',
        '7RZ' => 'E02003094',
        '7SA' => 'E02003094',
        '7SB' => 'E02003094',
        '7SD' => 'E02003094',
        '7SE' => 'E02003094',
        '7SF' => 'E02003094',
        '7SG' => 'E02003094',
        '7SH' => 'E02003094',
        '7SJ' => 'E02003094',
        '7SL' => 'E02003014',
        '7SN' => 'E02003017',
        '7SP' => 'E02003094',
        '7SQ' => 'E02003094',
        '7SR' => 'E02003094',
        '7SS' => 'E02003012',
        '7ST' => 'E02003012',
        '7SU' => 'E02003012',
        '7SW' => 'E02003094',
        '7SX' => 'E02003012',
        '7SY' => 'E02003012',
        '7SZ' => 'E02003012',
        '7TA' => 'E02003094',
        '7TB' => 'E02003094',
        '7TD' => 'E02003094',
        '7TE' => 'E02003094',
        '7TF' => 'E02003094',
        '7TG' => 'E02003094',
        '7TH' => 'E02003094',
        '7TJ' => 'E02003094',
        '7TL' => 'E02003094',
        '7TN' => 'E02003094',
        '7TP' => 'E02003094',
        '7TQ' => 'E02003094',
        '7TR' => 'E02003094',
        '7TS' => 'E02003094',
        '7TT' => 'E02003094',
        '7TU' => 'E02003094',
        '7TW' => 'E02003094',
        '7TX' => 'E02003094',
        '7TY' => 'E02003094',
        '7TZ' => 'E02003094',
        '7UA' => 'E02003094',
        '7UB' => 'E02003094',
        '7UD' => 'E02003094',
        '7UE' => 'E02003094',
        '7UG' => 'E02003094',
        '7UH' => 'E02003094',
        '7WA' => 'E02003094',
        '7WB' => 'E02003094',
        '7WD' => 'E02003017',
        '7WE' => 'E02003017',
        '7WJ' => 'E02003017',
        '7WL' => 'E02003017',
        '7WN' => 'E02003017',
        '7WP' => 'E02003017',
        '7WQ' => 'E02003017',
        '7WR' => 'E02003017',
        '7WS' => 'E02003017',
        '7WT' => 'E02003017',
        '7WU' => 'E02003017',
        '7WW' => 'E02003017',
        '7WX' => 'E02003017',
        '7WY' => 'E02003017',
        '7WZ' => 'E02003017',
        '7XA' => 'E02003012',
        '7XB' => 'E02003012',
        '7XE' => 'E02003012',
        '7XF' => 'E02003012',
        '7XG' => 'E02003012',
        '7XH' => 'E02003012',
        '7XJ' => 'E02003012',
        '7XL' => 'E02003012',
        '7XN' => 'E02003012',
        '7XQ' => 'E02003012',
        '7XR' => 'E02003017',
        '7XS' => 'E02003017',
        '7XW' => 'E02003012',
        '7YA' => 'E02003012',
        '7YB' => 'E02003012',
        '7YD' => 'E02003012',
        '7YE' => 'E02003017',
        '7YF' => 'E02003012',
        '7YG' => 'E02003017',
        '7YH' => 'E02003017',
        '7YJ' => 'E02003017',
        '7YL' => 'E02003017',
        '7YN' => 'E02003017',
        '7ZE' => 'E02003094',
        '7ZJ' => 'E02003017',
        '7ZN' => 'E02003017',
        '7ZQ' => 'E02003017',
        '7ZX' => 'E02003017',
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
