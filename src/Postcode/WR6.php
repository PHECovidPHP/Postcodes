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
final class WR6
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '5AA' => 'E02002909',
        '5AB' => 'E02002909',
        '5AD' => 'E02002909',
        '5AE' => 'E02002909',
        '5AF' => 'E02002909',
        '5AG' => 'E02002909',
        '5AH' => 'E02002913',
        '5AJ' => 'E02002909',
        '5AL' => 'E02006712',
        '5AN' => 'E02006712',
        '5AP' => 'E02002909',
        '5AQ' => 'E02002909',
        '5AR' => 'E02002909',
        '5AS' => 'E02002909',
        '5AT' => 'E02002909',
        '5AU' => 'E02002909',
        '5AW' => 'E02002909',
        '5AX' => 'E02002909',
        '5AY' => 'E02002909',
        '5AZ' => 'E02002909',
        '5BA' => 'E02002909',
        '5BB' => 'E02002909',
        '5BD' => 'E02002909',
        '5BE' => 'E02002909',
        '5BF' => 'E02002909',
        '5BG' => 'E02002909',
        '5BH' => 'E02002909',
        '5BJ' => 'E02002909',
        '5BL' => 'E02002909',
        '5BN' => 'E02002909',
        '5BP' => 'E02002909',
        '5BQ' => 'E02002909',
        '5BS' => 'E02002909',
        '5BT' => 'E02002909',
        '5BU' => 'E02002909',
        '5BW' => 'E02002909',
        '5BX' => 'E02002909',
        '5BY' => 'E02002909',
        '5BZ' => 'E02002909',
        '5DA' => 'E02002909',
        '5DB' => 'E02002909',
        '5DD' => 'E02006712',
        '5DE' => 'E02006712',
        '5DF' => 'E02006712',
        '5DG' => 'E02006712',
        '5DH' => 'E02006712',
        '5DJ' => 'E02006712',
        '5DL' => 'E02006712',
        '5DN' => 'E02006712',
        '5DP' => 'E02006712',
        '5DQ' => 'E02006712',
        '5DR' => 'E02006712',
        '5DS' => 'E02006712',
        '5DT' => 'E02006712',
        '5DU' => 'E02006712',
        '5DW' => 'E02006712',
        '5DX' => 'E02006712',
        '5EA' => 'E02006712',
        '5EB' => 'E02006712',
        '5ED' => 'E02006712',
        '5EE' => 'E02006712',
        '5EF' => 'E02006712',
        '5EG' => 'E02006712',
        '5EH' => 'E02006712',
        '5EJ' => 'E02002913',
        '5EL' => 'E02002909',
        '5EQ' => 'E02006712',
        '5ES' => 'E02006712',
        '5ET' => 'E02006712',
        '5EU' => 'E02006712',
        '5EW' => 'E02006712',
        '5EX' => 'E02006712',
        '5EY' => 'E02006712',
        '5EZ' => 'E02006712',
        '5HA' => 'E02006712',
        '5HB' => 'E02006712',
        '5HD' => 'E02006712',
        '5HE' => 'E02006712',
        '5HF' => 'E02006712',
        '5HH' => 'E02006712',
        '5HJ' => 'E02006712',
        '5HL' => 'E02006712',
        '5HN' => 'E02006712',
        '5HP' => 'E02006712',
        '5HQ' => 'E02006712',
        '5HR' => 'E02006712',
        '5HS' => 'E02006712',
        '5HT' => 'E02006712',
        '5HU' => 'E02006712',
        '5HW' => 'E02006712',
        '5HX' => 'E02006712',
        '5HY' => 'E02006712',
        '5HZ' => 'E02006712',
        '5JA' => 'E02006712',
        '5JB' => 'E02006712',
        '5JD' => 'E02006712',
        '5JE' => 'E02006712',
        '5JF' => 'E02006712',
        '5JG' => 'E02006712',
        '5JH' => 'E02006714',
        '5JJ' => 'E02006714',
        '5JL' => 'E02006712',
        '5JN' => 'E02006712',
        '5JP' => 'E02006712',
        '5JQ' => 'E02006712',
        '5JR' => 'E02006712',
        '5JS' => 'E02006712',
        '5JU' => 'E02006712',
        '5JX' => 'E02006712',
        '5JY' => 'E02006712',
        '5JZ' => 'E02006712',
        '5LA' => 'E02006712',
        '5LB' => 'E02006712',
        '5LD' => 'E02006712',
        '5LE' => 'E02006712',
        '5LF' => 'E02006712',
        '5LG' => 'E02006712',
        '5LN' => 'E02006712',
        '5LP' => 'E02006712',
        '5LQ' => 'E02006712',
        '5LR' => 'E02006712',
        '5LS' => 'E02006712',
        '5LT' => 'E02006712',
        '5LU' => 'E02006712',
        '5LW' => 'E02006712',
        '5LX' => 'E02006712',
        '5LY' => 'E02006712',
        '5LZ' => 'E02006712',
        '5NA' => 'E02002909',
        '5NE' => 'E02006712',
        '5NF' => 'E02006712',
        '5NG' => 'E02006712',
        '5NH' => 'E02006712',
        '5NJ' => 'E02006712',
        '5NL' => 'E02006712',
        '5NN' => 'E02006712',
        '5NP' => 'E02006711',
        '5NQ' => 'E02006712',
        '5NR' => 'E02006711',
        '5NS' => 'E02006711',
        '5NT' => 'E02006711',
        '5NU' => 'E02006711',
        '5NW' => 'E02006712',
        '5NX' => 'E02006712',
        '5NY' => 'E02006712',
        '5NZ' => 'E02006712',
        '5PA' => 'E02006712',
        '5PB' => 'E02006712',
        '5PH' => 'E02006712',
        '5PJ' => 'E02006712',
        '5PL' => 'E02006712',
        '5PN' => 'E02006712',
        '5PP' => 'E02006712',
        '5PR' => 'E02006711',
        '5PS' => 'E02006711',
        '5PT' => 'E02006711',
        '5PU' => 'E02006712',
        '5PW' => 'E02006712',
        '5PX' => 'E02006712',
        '5PY' => 'E02006712',
        '5QE' => 'E02006712',
        '5QF' => 'E02006712',
        '5QG' => 'E02006712',
        '5QL' => 'E02006712',
        '5QN' => 'E02006712',
        '5QP' => 'E02006712',
        '5QQ' => 'E02006712',
        '5QR' => 'E02006712',
        '5QS' => 'E02006712',
        '5QT' => 'E02006712',
        '5QU' => 'E02006712',
        '5QW' => 'E02006712',
        '5RB' => 'E02006712',
        '5RD' => 'E02002909',
        '5RE' => 'E02002909',
        '5RF' => 'E02002909',
        '5RG' => 'E02002909',
        '5RH' => 'E02006712',
        '5RJ' => 'E02002909',
        '5RN' => 'E02002909',
        '5RP' => 'E02002909',
        '5RQ' => 'E02002909',
        '5RR' => 'E02002909',
        '5RS' => 'E02002909',
        '5RT' => 'E02002909',
        '5RU' => 'E02002909',
        '5RW' => 'E02002909',
        '5RX' => 'E02002909',
        '5RY' => 'E02002909',
        '5RZ' => 'E02002909',
        '5SA' => 'E02002909',
        '5SB' => 'E02002909',
        '5SD' => 'E02002909',
        '5SE' => 'E02002909',
        '5SF' => 'E02002909',
        '5SG' => 'E02002909',
        '5SH' => 'E02002909',
        '5SJ' => 'E02002909',
        '5SL' => 'E02002909',
        '5SP' => 'E02002909',
        '5SQ' => 'E02002909',
        '5SR' => 'E02002909',
        '5SS' => 'E02002909',
        '5ST' => 'E02002909',
        '5SU' => 'E02002909',
        '5TA' => 'E02002909',
        '5TB' => 'E02002909',
        '5TD' => 'E02002909',
        '5TE' => 'E02002909',
        '5TF' => 'E02002909',
        '5TG' => 'E02002909',
        '5TH' => 'E02002909',
        '5TP' => 'E02002909',
        '5TQ' => 'E02002909',
        '5TR' => 'E02002909',
        '5TS' => 'E02002909',
        '5TT' => 'E02002909',
        '5TU' => 'E02002909',
        '5TW' => 'E02002909',
        '5TX' => 'E02002909',
        '5TY' => 'E02002909',
        '5TZ' => 'E02002909',
        '5UA' => 'E02002909',
        '5UB' => 'E02002909',
        '5UG' => 'E02002909',
        '5UH' => 'E02002909',
        '5UJ' => 'E02002909',
        '5UL' => 'E02002909',
        '5UN' => 'E02002909',
        '5UP' => 'E02002909',
        '5UQ' => 'E02002909',
        '5UW' => 'E02002909',
        '5UZ' => 'E02006712',
        '5WH' => 'E02006736',
        '5WJ' => 'E02006736',
        '5WL' => 'E02006736',
        '5WN' => 'E02006736',
        '5WP' => 'E02006744',
        '5WQ' => 'E02006712',
        '5WR' => 'E02002909',
        '5WS' => 'E02006736',
        '5WT' => 'E02002909',
        '5WU' => 'E02006744',
        '5WW' => 'E02006744',
        '5WX' => 'E02006736',
        '5WY' => 'E02006736',
        '5WZ' => 'E02006736',
        '5XA' => 'E02006744',
        '5XB' => 'E02006744',
        '5YA' => 'E02006736',
        '5YB' => 'E02006736',
        '5YD' => 'E02006736',
        '5YE' => 'E02002909',
        '5YF' => 'E02006712',
        '5YG' => 'E02006712',
        '5YH' => 'E02006736',
        '5YJ' => 'E02006744',
        '5YL' => 'E02006712',
        '5YN' => 'E02006736',
        '5YP' => 'E02006736',
        '5YQ' => 'E02006736',
        '5YR' => 'E02006736',
        '5YS' => 'E02006712',
        '5YT' => 'E02006736',
        '5YU' => 'E02006736',
        '5YW' => 'E02006744',
        '5YX' => 'E02002909',
        '5YY' => 'E02006736',
        '5YZ' => 'E02006736',
        '5ZB' => 'E02006736',
        '5ZE' => 'E02006736',
        '5ZF' => 'E02006744',
        '5ZR' => 'E02006736',
        '5ZT' => 'E02006736',
        '5ZY' => 'E02006736',
        '6AA' => 'E02006711',
        '6AB' => 'E02006711',
        '6AD' => 'E02006711',
        '6AE' => 'E02006711',
        '6AF' => 'E02006711',
        '6AG' => 'E02006711',
        '6AH' => 'E02006711',
        '6AJ' => 'E02006777',
        '6AL' => 'E02006711',
        '6AN' => 'E02006711',
        '6AP' => 'E02006711',
        '6AQ' => 'E02006777',
        '6AR' => 'E02006711',
        '6AS' => 'E02006711',
        '6AT' => 'E02006711',
        '6AU' => 'E02006711',
        '6AW' => 'E02006711',
        '6AX' => 'E02006711',
        '6AY' => 'E02006711',
        '6AZ' => 'E02006711',
        '6BA' => 'E02006711',
        '6BB' => 'E02006711',
        '6BD' => 'E02006777',
        '6BE' => 'E02006711',
        '6BF' => 'E02006711',
        '6BG' => 'E02006711',
        '6BH' => 'E02006711',
        '6BJ' => 'E02006711',
        '6BN' => 'E02006711',
        '6BP' => 'E02006711',
        '6BQ' => 'E02006777',
        '6BS' => 'E02006711',
        '6BT' => 'E02006711',
        '6BU' => 'E02006711',
        '6BX' => 'E02006711',
        '6BY' => 'E02006711',
        '6BZ' => 'E02006711',
        '6DA' => 'E02006711',
        '6DB' => 'E02006711',
        '6DD' => 'E02006711',
        '6DE' => 'E02006710',
        '6DF' => 'E02006710',
        '6DG' => 'E02006710',
        '6DH' => 'E02006710',
        '6DJ' => 'E02006710',
        '6DL' => 'E02006710',
        '6DN' => 'E02006710',
        '6DP' => 'E02006710',
        '6DQ' => 'E02006710',
        '6DR' => 'E02006710',
        '6DS' => 'E02006710',
        '6DT' => 'E02002909',
        '6DU' => 'E02006710',
        '6DW' => 'E02006710',
        '6DX' => 'E02006710',
        '6DY' => 'E02006710',
        '6DZ' => 'E02006710',
        '6EA' => 'E02006710',
        '6EB' => 'E02006710',
        '6ED' => 'E02002909',
        '6EE' => 'E02006710',
        '6EF' => 'E02002909',
        '6EG' => 'E02002909',
        '6EH' => 'E02006710',
        '6EJ' => 'E02002909',
        '6EL' => 'E02006710',
        '6EN' => 'E02006710',
        '6EP' => 'E02002909',
        '6EQ' => 'E02002909',
        '6ER' => 'E02002909',
        '6ES' => 'E02002909',
        '6ET' => 'E02002909',
        '6EU' => 'E02002909',
        '6EW' => 'E02006710',
        '6EX' => 'E02002909',
        '6EY' => 'E02002909',
        '6EZ' => 'E02002909',
        '6HA' => 'E02002909',
        '6HD' => 'E02006710',
        '6HE' => 'E02006710',
        '6HF' => 'E02002909',
        '6HG' => 'E02006710',
        '6HH' => 'E02006710',
        '6HJ' => 'E02006710',
        '6HL' => 'E02006711',
        '6HN' => 'E02006711',
        '6HP' => 'E02006711',
        '6HQ' => 'E02006710',
        '6HR' => 'E02006711',
        '6HS' => 'E02006711',
        '6HT' => 'E02006711',
        '6HU' => 'E02006711',
        '6HW' => 'E02006711',
        '6HX' => 'E02006711',
        '6HY' => 'E02006711',
        '6HZ' => 'E02006711',
        '6JA' => 'E02006711',
        '6JB' => 'E02006711',
        '6JD' => 'E02006711',
        '6JG' => 'E02006710',
        '6JH' => 'E02006711',
        '6JJ' => 'E02006711',
        '6JP' => 'E02006711',
        '6JQ' => 'E02006710',
        '6JR' => 'E02006711',
        '6JS' => 'E02006711',
        '6JT' => 'E02006711',
        '6JU' => 'E02006711',
        '6JX' => 'E02006711',
        '6JY' => 'E02006711',
        '6JZ' => 'E02006711',
        '6LA' => 'E02006711',
        '6LB' => 'E02006711',
        '6LD' => 'E02006711',
        '6LE' => 'E02006711',
        '6LF' => 'E02006711',
        '6LG' => 'E02006711',
        '6LH' => 'E02006711',
        '6LJ' => 'E02006711',
        '6LL' => 'E02006711',
        '6LN' => 'E02006711',
        '6LP' => 'E02006711',
        '6LQ' => 'E02006711',
        '6LR' => 'E02006711',
        '6LS' => 'E02006711',
        '6LT' => 'E02006711',
        '6LU' => 'E02006710',
        '6LW' => 'E02006711',
        '6LX' => 'E02006711',
        '6LY' => 'E02006711',
        '6LZ' => 'E02006711',
        '6NA' => 'E02006711',
        '6NB' => 'E02006711',
        '6ND' => 'E02006711',
        '6NE' => 'E02006711',
        '6NF' => 'E02006711',
        '6NG' => 'E02006711',
        '6NH' => 'E02006711',
        '6NJ' => 'E02006711',
        '6NL' => 'E02006711',
        '6NN' => 'E02006753',
        '6NP' => 'E02006753',
        '6NQ' => 'E02006711',
        '6NR' => 'E02006711',
        '6NS' => 'E02006711',
        '6NT' => 'E02006711',
        '6NU' => 'E02006711',
        '6NW' => 'E02006753',
        '6NX' => 'E02006711',
        '6NY' => 'E02006711',
        '6NZ' => 'E02006711',
        '6PA' => 'E02006711',
        '6PB' => 'E02006711',
        '6PD' => 'E02006711',
        '6PE' => 'E02006711',
        '6PF' => 'E02006711',
        '6PG' => 'E02006711',
        '6PH' => 'E02006711',
        '6PJ' => 'E02006711',
        '6PL' => 'E02006711',
        '6PN' => 'E02006711',
        '6PP' => 'E02006711',
        '6PQ' => 'E02006711',
        '6PR' => 'E02006711',
        '6PS' => 'E02006711',
        '6PT' => 'E02006711',
        '6PU' => 'E02006711',
        '6PW' => 'E02006711',
        '6PX' => 'E02006711',
        '6PY' => 'E02006711',
        '6PZ' => 'E02006711',
        '6QA' => 'E02006711',
        '6QB' => 'E02006711',
        '6QD' => 'E02006711',
        '6QE' => 'E02006711',
        '6QF' => 'E02006711',
        '6QG' => 'E02006711',
        '6QH' => 'E02006711',
        '6QJ' => 'E02006711',
        '6QL' => 'E02006711',
        '6QN' => 'E02006711',
        '6QP' => 'E02006711',
        '6QQ' => 'E02006711',
        '6QR' => 'E02006711',
        '6QS' => 'E02006710',
        '6QT' => 'E02006711',
        '6QU' => 'E02006711',
        '6QW' => 'E02006711',
        '6QX' => 'E02006711',
        '6QY' => 'E02006711',
        '6QZ' => 'E02006711',
        '6RA' => 'E02006710',
        '6RB' => 'E02006710',
        '6RD' => 'E02006710',
        '6RE' => 'E02006710',
        '6RF' => 'E02006710',
        '6RG' => 'E02006710',
        '6RH' => 'E02006710',
        '6RJ' => 'E02006710',
        '6RL' => 'E02006710',
        '6RN' => 'E02006710',
        '6RP' => 'E02006710',
        '6RQ' => 'E02006711',
        '6RR' => 'E02006710',
        '6RS' => 'E02006711',
        '6RT' => 'E02006711',
        '6RU' => 'E02006710',
        '6RW' => 'E02006711',
        '6RX' => 'E02006710',
        '6RY' => 'E02006710',
        '6RZ' => 'E02006710',
        '6SA' => 'E02006710',
        '6SB' => 'E02006710',
        '6SD' => 'E02006711',
        '6SE' => 'E02006711',
        '6SF' => 'E02006711',
        '6SG' => 'E02006710',
        '6SH' => 'E02006710',
        '6SJ' => 'E02006710',
        '6SL' => 'E02006736',
        '6SN' => 'E02006711',
        '6SP' => 'E02006710',
        '6SQ' => 'E02006710',
        '6SR' => 'E02006710',
        '6SS' => 'E02006710',
        '6ST' => 'E02006710',
        '6SU' => 'E02006710',
        '6SW' => 'E02006736',
        '6SX' => 'E02006710',
        '6SY' => 'E02006711',
        '6SZ' => 'E02006711',
        '6TA' => 'E02006711',
        '6TB' => 'E02006711',
        '6TD' => 'E02006711',
        '6TE' => 'E02006711',
        '6TF' => 'E02006711',
        '6TG' => 'E02006711',
        '6TH' => 'E02006711',
        '6TJ' => 'E02006711',
        '6TL' => 'E02002909',
        '6TN' => 'E02006711',
        '6TP' => 'E02006711',
        '6TQ' => 'E02006711',
        '6TR' => 'E02006711',
        '6TS' => 'E02006711',
        '6TT' => 'E02006711',
        '6TU' => 'E02006736',
        '6TW' => 'E02006711',
        '6TX' => 'E02006711',
        '6TY' => 'E02006736',
        '6TZ' => 'E02006710',
        '6UA' => 'E02006710',
        '6UB' => 'E02006710',
        '6UD' => 'E02006711',
        '6UE' => 'E02006711',
        '6UF' => 'E02006736',
        '6UG' => 'E02006710',
        '6UH' => 'E02006710',
        '6UJ' => 'E02006711',
        '6UL' => 'E02006777',
        '6UN' => 'E02006711',
        '6UP' => 'E02006736',
        '6UQ' => 'E02006711',
        '6UR' => 'E02006736',
        '6US' => 'E02006736',
        '6UT' => 'E02006710',
        '6UU' => 'E02006710',
        '6UW' => 'E02006711',
        '6UX' => 'E02006710',
        '6UY' => 'E02006711',
        '6UZ' => 'E02006711',
        '6WA' => 'E02006736',
        '6WB' => 'E02006736',
        '6WD' => 'E02006736',
        '6WE' => 'E02006736',
        '6WF' => 'E02006736',
        '6WG' => 'E02006736',
        '6WH' => 'E02006736',
        '6WJ' => 'E02006736',
        '6WL' => 'E02006736',
        '6WN' => 'E02006736',
        '6WP' => 'E02006711',
        '6WQ' => 'E02006711',
        '6WR' => 'E02006736',
        '6WS' => 'E02006736',
        '6WT' => 'E02006736',
        '6WU' => 'E02006736',
        '6WW' => 'E02006736',
        '6WX' => 'E02006736',
        '6WY' => 'E02006736',
        '6WZ' => 'E02006711',
        '6XA' => 'E02006710',
        '6XB' => 'E02006710',
        '6XD' => 'E02006711',
        '6XE' => 'E02006711',
        '6XF' => 'E02006710',
        '6XG' => 'E02006711',
        '6XH' => 'E02006711',
        '6XJ' => 'E02006711',
        '6XL' => 'E02006711',
        '6XN' => 'E02006711',
        '6XP' => 'E02002909',
        '6XQ' => 'E02006711',
        '6XR' => 'E02002909',
        '6XS' => 'E02002909',
        '6XT' => 'E02002909',
        '6XU' => 'E02002909',
        '6XW' => 'E02006711',
        '6XX' => 'E02002909',
        '6XY' => 'E02006711',
        '6XZ' => 'E02002909',
        '6YA' => 'E02006711',
        '6YB' => 'E02006711',
        '6YD' => 'E02006711',
        '6YE' => 'E02006711',
        '6YF' => 'E02006711',
        '6YG' => 'E02006711',
        '6YH' => 'E02006711',
        '6YJ' => 'E02006711',
        '6YL' => 'E02006711',
        '6YN' => 'E02006711',
        '6YP' => 'E02006711',
        '6YQ' => 'E02006711',
        '6YR' => 'E02006711',
        '6YS' => 'E02006711',
        '6YT' => 'E02006711',
        '6YU' => 'E02006711',
        '6YW' => 'E02006711',
        '6YX' => 'E02006711',
        '6YY' => 'E02006711',
        '6YZ' => 'E02006711',
        '6ZB' => 'E02006736',
        '6ZE' => 'E02006711',
        '6ZF' => 'E02006736',
        '6ZG' => 'E02006736',
        '6ZH' => 'E02006736',
        '6ZJ' => 'E02006736',
        '6ZL' => 'E02006711',
        '6ZN' => 'E02006736',
        '6ZP' => 'E02006736',
        '6ZQ' => 'E02006736',
        '6ZR' => 'E02006736',
        '6ZS' => 'E02006711',
        '6ZT' => 'E02006736',
        '6ZU' => 'E02006736',
        '6ZW' => 'E02006736',
        '6ZX' => 'E02006736',
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