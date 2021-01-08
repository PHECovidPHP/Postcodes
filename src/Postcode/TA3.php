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
final class TA3
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '5AA' => 'E02006112',
        '5AB' => 'E02006112',
        '5AD' => 'E02006103',
        '5AE' => 'E02006103',
        '5AF' => 'E02006103',
        '5AG' => 'E02006103',
        '5AH' => 'E02006103',
        '5AJ' => 'E02006074',
        '5AL' => 'E02006074',
        '5AN' => 'E02006074',
        '5AP' => 'E02006074',
        '5AQ' => 'E02006103',
        '5AR' => 'E02006074',
        '5AS' => 'E02006074',
        '5AT' => 'E02006074',
        '5AU' => 'E02006074',
        '5AW' => 'E02006103',
        '5AX' => 'E02006112',
        '5AY' => 'E02006112',
        '5AZ' => 'E02006112',
        '5BA' => 'E02006112',
        '5BB' => 'E02006112',
        '5BD' => 'E02006112',
        '5BE' => 'E02006112',
        '5BF' => 'E02006103',
        '5BG' => 'E02006112',
        '5BH' => 'E02006112',
        '5BJ' => 'E02006112',
        '5BL' => 'E02006112',
        '5BN' => 'E02006112',
        '5BP' => 'E02006112',
        '5BQ' => 'E02006112',
        '5BS' => 'E02006112',
        '5BT' => 'E02006112',
        '5BU' => 'E02006112',
        '5BW' => 'E02006112',
        '5BX' => 'E02006112',
        '5BY' => 'E02006112',
        '5BZ' => 'E02006112',
        '5DA' => 'E02006112',
        '5DB' => 'E02006112',
        '5DD' => 'E02006112',
        '5DE' => 'E02006112',
        '5DF' => 'E02006112',
        '5DG' => 'E02006112',
        '5DH' => 'E02006103',
        '5DJ' => 'E02006103',
        '5DL' => 'E02006103',
        '5DN' => 'E02006103',
        '5DP' => 'E02006103',
        '5DQ' => 'E02006112',
        '5DR' => 'E02006103',
        '5DS' => 'E02006103',
        '5DT' => 'E02006103',
        '5DU' => 'E02006103',
        '5DW' => 'E02006103',
        '5DX' => 'E02006103',
        '5DY' => 'E02006103',
        '5DZ' => 'E02006103',
        '5EA' => 'E02006103',
        '5EB' => 'E02006103',
        '5ED' => 'E02006103',
        '5EE' => 'E02006103',
        '5EF' => 'E02006103',
        '5EG' => 'E02006103',
        '5EH' => 'E02006103',
        '5EJ' => 'E02006103',
        '5EL' => 'E02006103',
        '5EN' => 'E02006103',
        '5EP' => 'E02006103',
        '5EQ' => 'E02006103',
        '5ER' => 'E02006103',
        '5ES' => 'E02006103',
        '5ET' => 'E02006103',
        '5EU' => 'E02006103',
        '5EW' => 'E02006103',
        '5EX' => 'E02006103',
        '5EY' => 'E02006103',
        '5EZ' => 'E02006103',
        '5FA' => 'E02006103',
        '5FB' => 'E02006103',
        '5FD' => 'E02006103',
        '5FE' => 'E02006103',
        '5FF' => 'E02006103',
        '5FG' => 'E02006103',
        '5HA' => 'E02006112',
        '5HL' => 'E02006103',
        '5HP' => 'E02006103',
        '5HR' => 'E02006103',
        '5HS' => 'E02006103',
        '5HT' => 'E02006103',
        '5HU' => 'E02006103',
        '5HX' => 'E02006103',
        '5HY' => 'E02006103',
        '5HZ' => 'E02006103',
        '5JA' => 'E02006103',
        '5JB' => 'E02006103',
        '5JD' => 'E02006103',
        '5JE' => 'E02006103',
        '5JF' => 'E02006103',
        '5JG' => 'E02006103',
        '5JH' => 'E02006103',
        '5JJ' => 'E02006103',
        '5JL' => 'E02006103',
        '5JN' => 'E02006103',
        '5JP' => 'E02006103',
        '5JQ' => 'E02006103',
        '5JR' => 'E02006103',
        '5JS' => 'E02006103',
        '5JT' => 'E02006103',
        '5JU' => 'E02006103',
        '5JW' => 'E02006103',
        '5JX' => 'E02006103',
        '5JY' => 'E02006103',
        '5JZ' => 'E02006103',
        '5LA' => 'E02006103',
        '5LB' => 'E02006103',
        '5LD' => 'E02006103',
        '5LE' => 'E02006103',
        '5LF' => 'E02006103',
        '5LH' => 'E02006103',
        '5LJ' => 'E02006103',
        '5LL' => 'E02006103',
        '5LP' => 'E02006103',
        '5LQ' => 'E02006103',
        '5LS' => 'E02006103',
        '5LT' => 'E02006103',
        '5LU' => 'E02006103',
        '5LW' => 'E02006103',
        '5LX' => 'E02006103',
        '5LY' => 'E02006103',
        '5LZ' => 'E02006103',
        '5NA' => 'E02006103',
        '5NB' => 'E02006112',
        '5ND' => 'E02006103',
        '5NE' => 'E02006112',
        '5NF' => 'E02006103',
        '5NG' => 'E02006103',
        '5NH' => 'E02006103',
        '5NJ' => 'E02006103',
        '5NL' => 'E02006103',
        '5NN' => 'E02006103',
        '5NP' => 'E02006103',
        '5NQ' => 'E02006103',
        '5NR' => 'E02006103',
        '5NS' => 'E02006103',
        '5NT' => 'E02006103',
        '5NU' => 'E02006103',
        '5NW' => 'E02006103',
        '5NX' => 'E02006103',
        '5NY' => 'E02006103',
        '5NZ' => 'E02006103',
        '5PA' => 'E02006103',
        '5PB' => 'E02006103',
        '5PD' => 'E02006103',
        '5PE' => 'E02006103',
        '5PF' => 'E02006103',
        '5PG' => 'E02006103',
        '5PN' => 'E02006103',
        '5PP' => 'E02006103',
        '5PQ' => 'E02006103',
        '5PR' => 'E02006103',
        '5PS' => 'E02006103',
        '5PT' => 'E02006103',
        '5PU' => 'E02006103',
        '5PW' => 'E02006103',
        '5PX' => 'E02006103',
        '5PY' => 'E02006103',
        '5PZ' => 'E02006103',
        '5QA' => 'E02006103',
        '5QB' => 'E02006103',
        '5QD' => 'E02006103',
        '5QE' => 'E02006103',
        '5QF' => 'E02006103',
        '5QG' => 'E02006103',
        '5QH' => 'E02006103',
        '5QJ' => 'E02006103',
        '5QL' => 'E02006103',
        '5QN' => 'E02006103',
        '5QP' => 'E02006103',
        '5QQ' => 'E02006103',
        '5QR' => 'E02006103',
        '5QS' => 'E02006103',
        '5QT' => 'E02006103',
        '5QU' => 'E02006103',
        '5QW' => 'E02006103',
        '5QX' => 'E02006103',
        '5QY' => 'E02006103',
        '5QZ' => 'E02006103',
        '5RA' => 'E02006103',
        '5RB' => 'E02006103',
        '5RG' => 'E02006112',
        '5RH' => 'E02006112',
        '5RJ' => 'E02006112',
        '5RL' => 'E02006112',
        '5RN' => 'E02006112',
        '5RP' => 'E02006112',
        '5RQ' => 'E02006112',
        '5RR' => 'E02006112',
        '5RS' => 'E02006112',
        '5RT' => 'E02006112',
        '5RU' => 'E02006112',
        '5RW' => 'E02006112',
        '5RX' => 'E02006112',
        '5RY' => 'E02006112',
        '5RZ' => 'E02006103',
        '5SA' => 'E02006112',
        '5SB' => 'E02006112',
        '5SD' => 'E02006112',
        '5SE' => 'E02006112',
        '5SF' => 'E02006112',
        '5SG' => 'E02006112',
        '5SH' => 'E02006112',
        '5SJ' => 'E02006112',
        '5SL' => 'E02006112',
        '5SN' => 'E02006112',
        '5SP' => 'E02006112',
        '5SQ' => 'E02006112',
        '5SR' => 'E02006112',
        '5SU' => 'E02006112',
        '5SW' => 'E02006112',
        '5SX' => 'E02006112',
        '5SZ' => 'E02006112',
        '5TA' => 'E02006103',
        '5TB' => 'E02006103',
        '5TD' => 'E02006103',
        '5TE' => 'E02006103',
        '5TZ' => 'E02006112',
        '5WA' => 'E02006105',
        '5WB' => 'E02006105',
        '5WG' => 'E02006112',
        '5YA' => 'E02006105',
        '5YN' => 'E02006105',
        '5YP' => 'E02006112',
        '5YQ' => 'E02006105',
        '5YR' => 'E02006103',
        '5YS' => 'E02006103',
        '5YT' => 'E02006103',
        '5YU' => 'E02006103',
        '5YW' => 'E02006103',
        '5YX' => 'E02006103',
        '5YY' => 'E02006105',
        '5YZ' => 'E02006103',
        '5ZQ' => 'E02006105',
        '5ZY' => 'E02006105',
        '6AA' => 'E02006112',
        '6AB' => 'E02006112',
        '6AD' => 'E02006112',
        '6AE' => 'E02006112',
        '6AF' => 'E02006112',
        '6AG' => 'E02006081',
        '6AH' => 'E02006081',
        '6AJ' => 'E02006081',
        '6AL' => 'E02006081',
        '6AN' => 'E02006081',
        '6AP' => 'E02006081',
        '6AQ' => 'E02006081',
        '6AR' => 'E02006112',
        '6AS' => 'E02006103',
        '6AT' => 'E02006103',
        '6AU' => 'E02006103',
        '6AW' => 'E02006103',
        '6AX' => 'E02006103',
        '6AY' => 'E02006103',
        '6AZ' => 'E02006103',
        '6BA' => 'E02006103',
        '6BB' => 'E02006103',
        '6BD' => 'E02006103',
        '6BE' => 'E02006103',
        '6BF' => 'E02006105',
        '6BG' => 'E02006103',
        '6BH' => 'E02006103',
        '6BJ' => 'E02006103',
        '6BL' => 'E02006103',
        '6BN' => 'E02006103',
        '6BP' => 'E02006103',
        '6BQ' => 'E02006103',
        '6BS' => 'E02006103',
        '6BT' => 'E02006103',
        '6BU' => 'E02006103',
        '6BW' => 'E02006103',
        '6BX' => 'E02006103',
        '6BY' => 'E02006103',
        '6BZ' => 'E02006103',
        '6DA' => 'E02006112',
        '6DB' => 'E02006103',
        '6DD' => 'E02006103',
        '6DE' => 'E02006103',
        '6DF' => 'E02006103',
        '6DG' => 'E02006103',
        '6DH' => 'E02006103',
        '6DJ' => 'E02006103',
        '6DL' => 'E02006103',
        '6DN' => 'E02006103',
        '6DP' => 'E02006103',
        '6DQ' => 'E02006103',
        '6DR' => 'E02006103',
        '6DS' => 'E02006103',
        '6DT' => 'E02006103',
        '6DU' => 'E02006103',
        '6DW' => 'E02006103',
        '6DX' => 'E02006103',
        '6DY' => 'E02006103',
        '6DZ' => 'E02006103',
        '6EA' => 'E02006103',
        '6EB' => 'E02006081',
        '6ED' => 'E02006103',
        '6EE' => 'E02006103',
        '6EF' => 'E02006103',
        '6EG' => 'E02006103',
        '6EH' => 'E02006103',
        '6EJ' => 'E02006103',
        '6EL' => 'E02006103',
        '6EN' => 'E02006103',
        '6EP' => 'E02006103',
        '6EQ' => 'E02006103',
        '6ER' => 'E02006103',
        '6ES' => 'E02006103',
        '6ET' => 'E02006103',
        '6EU' => 'E02006103',
        '6EW' => 'E02006103',
        '6EX' => 'E02006103',
        '6EY' => 'E02006103',
        '6EZ' => 'E02006103',
        '6FA' => 'E02006103',
        '6FB' => 'E02006103',
        '6FD' => 'E02006103',
        '6HA' => 'E02006103',
        '6HL' => 'E02006103',
        '6HN' => 'E02006103',
        '6HP' => 'E02006103',
        '6HR' => 'E02006103',
        '6HS' => 'E02006103',
        '6HT' => 'E02006103',
        '6HU' => 'E02006103',
        '6HW' => 'E02006103',
        '6HX' => 'E02006103',
        '6HY' => 'E02006103',
        '6HZ' => 'E02006103',
        '6JA' => 'E02006103',
        '6JB' => 'E02006103',
        '6JD' => 'E02006103',
        '6JE' => 'E02006103',
        '6JF' => 'E02006103',
        '6JG' => 'E02006103',
        '6JH' => 'E02006103',
        '6JJ' => 'E02006103',
        '6JL' => 'E02006103',
        '6JN' => 'E02006103',
        '6JQ' => 'E02006103',
        '6JR' => 'E02006103',
        '6JS' => 'E02006103',
        '6JT' => 'E02006103',
        '6JU' => 'E02006103',
        '6JW' => 'E02006103',
        '6JX' => 'E02006103',
        '6JY' => 'E02006103',
        '6JZ' => 'E02006103',
        '6LA' => 'E02006103',
        '6LB' => 'E02006103',
        '6LD' => 'E02006103',
        '6LE' => 'E02006103',
        '6LF' => 'E02006103',
        '6LG' => 'E02006103',
        '6LH' => 'E02006103',
        '6LJ' => 'E02006103',
        '6LL' => 'E02006103',
        '6LN' => 'E02006103',
        '6LP' => 'E02006103',
        '6LQ' => 'E02006103',
        '6LR' => 'E02006103',
        '6LS' => 'E02006103',
        '6LT' => 'E02006103',
        '6LU' => 'E02006103',
        '6LW' => 'E02006103',
        '6LX' => 'E02006103',
        '6LY' => 'E02006103',
        '6LZ' => 'E02006103',
        '6NA' => 'E02006103',
        '6NB' => 'E02006103',
        '6ND' => 'E02006103',
        '6NE' => 'E02006103',
        '6NF' => 'E02006103',
        '6NG' => 'E02006103',
        '6NH' => 'E02006103',
        '6NJ' => 'E02006103',
        '6NL' => 'E02006103',
        '6NN' => 'E02006103',
        '6NP' => 'E02006103',
        '6NQ' => 'E02006103',
        '6NW' => 'E02006103',
        '6NZ' => 'E02006081',
        '6PA' => 'E02006081',
        '6PB' => 'E02006081',
        '6PD' => 'E02006081',
        '6PE' => 'E02006081',
        '6PF' => 'E02006081',
        '6PG' => 'E02006081',
        '6PH' => 'E02006081',
        '6PJ' => 'E02006081',
        '6PL' => 'E02006081',
        '6PN' => 'E02006081',
        '6PP' => 'E02006081',
        '6PQ' => 'E02006081',
        '6PR' => 'E02006081',
        '6PS' => 'E02006081',
        '6PT' => 'E02006081',
        '6PU' => 'E02006081',
        '6PW' => 'E02006081',
        '6PX' => 'E02006081',
        '6PY' => 'E02006081',
        '6PZ' => 'E02006081',
        '6QA' => 'E02006081',
        '6QB' => 'E02006081',
        '6QD' => 'E02006081',
        '6QE' => 'E02006081',
        '6QH' => 'E02006081',
        '6QJ' => 'E02006081',
        '6QL' => 'E02006081',
        '6QN' => 'E02006081',
        '6QP' => 'E02006081',
        '6QR' => 'E02006081',
        '6QS' => 'E02006081',
        '6QT' => 'E02006081',
        '6QU' => 'E02006081',
        '6QW' => 'E02006081',
        '6QX' => 'E02006081',
        '6QY' => 'E02006081',
        '6RE' => 'E02006103',
        '6RH' => 'E02006081',
        '6RJ' => 'E02006081',
        '6RL' => 'E02006081',
        '6RN' => 'E02006081',
        '6RP' => 'E02006081',
        '6RR' => 'E02006081',
        '6RS' => 'E02006081',
        '6RT' => 'E02006081',
        '6RU' => 'E02006081',
        '6RW' => 'E02006081',
        '6RX' => 'E02006081',
        '6RY' => 'E02006081',
        '6RZ' => 'E02006081',
        '6SA' => 'E02006112',
        '6SD' => 'E02006112',
        '6SE' => 'E02006112',
        '6SG' => 'E02006112',
        '6SH' => 'E02006112',
        '6SJ' => 'E02006112',
        '6SL' => 'E02006112',
        '6SN' => 'E02006112',
        '6SP' => 'E02006081',
        '6SQ' => 'E02006112',
        '6SR' => 'E02006081',
        '6SS' => 'E02006081',
        '6ST' => 'E02006081',
        '6SU' => 'E02006081',
        '6SW' => 'E02006112',
        '6SX' => 'E02006081',
        '6SY' => 'E02006081',
        '6SZ' => 'E02006081',
        '6TA' => 'E02006081',
        '6TB' => 'E02006081',
        '6TD' => 'E02006081',
        '6TE' => 'E02006081',
        '6TF' => 'E02006112',
        '6TG' => 'E02006112',
        '6TH' => 'E02006112',
        '6TJ' => 'E02006112',
        '6TL' => 'E02006112',
        '6TN' => 'E02006112',
        '6TP' => 'E02006112',
        '6TR' => 'E02006112',
        '6TS' => 'E02006112',
        '6TT' => 'E02006112',
        '6TU' => 'E02006112',
        '6TW' => 'E02006112',
        '6TX' => 'E02006112',
        '6TY' => 'E02006112',
        '6TZ' => 'E02006112',
        '6UA' => 'E02006112',
        '6UB' => 'E02006112',
        '6UD' => 'E02006112',
        '6UE' => 'E02006112',
        '6UF' => 'E02006093',
        '6WA' => 'E02006093',
        '6WB' => 'E02006093',
        '6WG' => 'E02006093',
        '6WH' => 'E02006093',
        '6WZ' => 'E02006105',
        '6YA' => 'E02006103',
        '6YB' => 'E02006105',
        '6YD' => 'E02006105',
        '6YE' => 'E02006105',
        '6YF' => 'E02006105',
        '6YG' => 'E02006105',
        '6YH' => 'E02006103',
        '6YJ' => 'E02006103',
        '6YL' => 'E02006103',
        '6YN' => 'E02006105',
        '6YP' => 'E02006103',
        '6YQ' => 'E02006112',
        '6YR' => 'E02006103',
        '6YS' => 'E02006105',
        '6YT' => 'E02006103',
        '6YU' => 'E02006103',
        '6YW' => 'E02006112',
        '6YX' => 'E02006105',
        '6YY' => 'E02006105',
        '6YZ' => 'E02006105',
        '6ZH' => 'E02006105',
        '6ZJ' => 'E02006105',
        '6ZN' => 'E02006105',
        '6ZX' => 'E02006105',
        '7AA' => 'E02006109',
        '7AB' => 'E02006109',
        '7AD' => 'E02006112',
        '7AE' => 'E02006112',
        '7AF' => 'E02006112',
        '7AG' => 'E02006112',
        '7AH' => 'E02006112',
        '7AJ' => 'E02006112',
        '7AL' => 'E02006112',
        '7AN' => 'E02006112',
        '7AP' => 'E02006112',
        '7AQ' => 'E02006112',
        '7AR' => 'E02006112',
        '7AS' => 'E02006112',
        '7AT' => 'E02006112',
        '7AU' => 'E02006112',
        '7AW' => 'E02006112',
        '7AX' => 'E02006112',
        '7AY' => 'E02006112',
        '7AZ' => 'E02006112',
        '7BA' => 'E02006112',
        '7BB' => 'E02006112',
        '7BD' => 'E02006112',
        '7BE' => 'E02006112',
        '7BG' => 'E02006112',
        '7BH' => 'E02006112',
        '7BJ' => 'E02006112',
        '7BL' => 'E02006112',
        '7BN' => 'E02006112',
        '7BP' => 'E02006112',
        '7BQ' => 'E02006112',
        '7BS' => 'E02006112',
        '7BT' => 'E02006112',
        '7BU' => 'E02006112',
        '7BW' => 'E02006112',
        '7BX' => 'E02006112',
        '7BY' => 'E02006112',
        '7BZ' => 'E02006112',
        '7DA' => 'E02006112',
        '7DB' => 'E02006112',
        '7DD' => 'E02006112',
        '7DE' => 'E02006112',
        '7DF' => 'E02006112',
        '7DG' => 'E02006112',
        '7DH' => 'E02006112',
        '7DJ' => 'E02006112',
        '7DL' => 'E02006112',
        '7DN' => 'E02006112',
        '7DP' => 'E02006112',
        '7DQ' => 'E02006112',
        '7DR' => 'E02006112',
        '7DS' => 'E02006112',
        '7DT' => 'E02006112',
        '7DU' => 'E02006112',
        '7DW' => 'E02006112',
        '7DX' => 'E02006112',
        '7DY' => 'E02006112',
        '7DZ' => 'E02006112',
        '7EA' => 'E02006112',
        '7EB' => 'E02006112',
        '7ED' => 'E02006112',
        '7EE' => 'E02006112',
        '7EF' => 'E02006112',
        '7EG' => 'E02006109',
        '7EH' => 'E02006109',
        '7EJ' => 'E02006112',
        '7EL' => 'E02006112',
        '7EN' => 'E02006109',
        '7EP' => 'E02006109',
        '7EQ' => 'E02006112',
        '7ER' => 'E02006109',
        '7ES' => 'E02006109',
        '7ET' => 'E02006109',
        '7EU' => 'E02006109',
        '7EW' => 'E02006109',
        '7EX' => 'E02006109',
        '7EY' => 'E02006109',
        '7EZ' => 'E02006109',
        '7FA' => 'E02006112',
        '7HA' => 'E02006109',
        '7HB' => 'E02006109',
        '7HD' => 'E02006109',
        '7HE' => 'E02006109',
        '7HF' => 'E02006109',
        '7HG' => 'E02006109',
        '7HH' => 'E02006109',
        '7HJ' => 'E02006109',
        '7HL' => 'E02006109',
        '7HN' => 'E02006109',
        '7HP' => 'E02006109',
        '7HQ' => 'E02006109',
        '7HR' => 'E02006109',
        '7HS' => 'E02006109',
        '7HT' => 'E02006109',
        '7HU' => 'E02006109',
        '7HW' => 'E02006109',
        '7HX' => 'E02006109',
        '7HY' => 'E02006109',
        '7HZ' => 'E02006105',
        '7JH' => 'E02006109',
        '7JJ' => 'E02006109',
        '7JL' => 'E02006109',
        '7JN' => 'E02006109',
        '7JP' => 'E02006109',
        '7JQ' => 'E02006109',
        '7JR' => 'E02006109',
        '7JS' => 'E02006109',
        '7JT' => 'E02006109',
        '7JU' => 'E02006109',
        '7JW' => 'E02006109',
        '7JX' => 'E02006109',
        '7JY' => 'E02006109',
        '7JZ' => 'E02006109',
        '7LA' => 'E02006109',
        '7LB' => 'E02006109',
        '7LD' => 'E02006109',
        '7LE' => 'E02006109',
        '7LF' => 'E02006109',
        '7LG' => 'E02006109',
        '7LH' => 'E02006109',
        '7LJ' => 'E02006109',
        '7LL' => 'E02006109',
        '7LN' => 'E02006109',
        '7LP' => 'E02006109',
        '7LQ' => 'E02006109',
        '7LR' => 'E02006109',
        '7LS' => 'E02006112',
        '7LT' => 'E02006105',
        '7LW' => 'E02006109',
        '7LZ' => 'E02006112',
        '7NA' => 'E02006109',
        '7ND' => 'E02006109',
        '7NE' => 'E02006109',
        '7NF' => 'E02006109',
        '7NG' => 'E02006109',
        '7NH' => 'E02006109',
        '7NJ' => 'E02006109',
        '7NL' => 'E02006109',
        '7NN' => 'E02006109',
        '7NP' => 'E02006109',
        '7NQ' => 'E02006109',
        '7NR' => 'E02006109',
        '7NS' => 'E02006109',
        '7NT' => 'E02006109',
        '7NU' => 'E02006109',
        '7NW' => 'E02006109',
        '7NX' => 'E02006109',
        '7NY' => 'E02006109',
        '7NZ' => 'E02006112',
        '7PA' => 'E02006112',
        '7PB' => 'E02006109',
        '7PD' => 'E02006109',
        '7PE' => 'E02006112',
        '7PF' => 'E02006112',
        '7PG' => 'E02006109',
        '7PL' => 'E02004129',
        '7PN' => 'E02004129',
        '7PP' => 'E02006112',
        '7PQ' => 'E02006112',
        '7PR' => 'E02006112',
        '7PS' => 'E02006112',
        '7PT' => 'E02006112',
        '7PU' => 'E02006112',
        '7PW' => 'E02006112',
        '7PX' => 'E02006112',
        '7PY' => 'E02006112',
        '7PZ' => 'E02006112',
        '7QA' => 'E02006112',
        '7QB' => 'E02006112',
        '7QD' => 'E02006112',
        '7QE' => 'E02006112',
        '7QF' => 'E02006112',
        '7QG' => 'E02006112',
        '7QH' => 'E02006112',
        '7QJ' => 'E02006112',
        '7QL' => 'E02006112',
        '7QN' => 'E02006112',
        '7QQ' => 'E02006112',
        '7QU' => 'E02006112',
        '7QW' => 'E02006112',
        '7QX' => 'E02006112',
        '7QY' => 'E02006112',
        '7QZ' => 'E02006112',
        '7RA' => 'E02006112',
        '7RB' => 'E02006112',
        '7RD' => 'E02006112',
        '7RE' => 'E02006112',
        '7RF' => 'E02006112',
        '7RG' => 'E02006112',
        '7RH' => 'E02006112',
        '7RJ' => 'E02006112',
        '7RL' => 'E02006112',
        '7RN' => 'E02006112',
        '7RP' => 'E02004129',
        '7RQ' => 'E02006112',
        '7RR' => 'E02006112',
        '7RW' => 'E02006112',
        '7RY' => 'E02006112',
        '7RZ' => 'E02006112',
        '7SA' => 'E02006112',
        '7SB' => 'E02006112',
        '7SD' => 'E02006112',
        '7SE' => 'E02006112',
        '7SF' => 'E02006112',
        '7SG' => 'E02006112',
        '7SH' => 'E02006112',
        '7SJ' => 'E02006112',
        '7SL' => 'E02006112',
        '7SN' => 'E02006112',
        '7SP' => 'E02006112',
        '7SQ' => 'E02006112',
        '7SR' => 'E02006112',
        '7SS' => 'E02006112',
        '7ST' => 'E02006112',
        '7SU' => 'E02006112',
        '7SW' => 'E02006112',
        '7SX' => 'E02006112',
        '7SY' => 'E02006112',
        '7SZ' => 'E02006112',
        '7TA' => 'E02006112',
        '7TB' => 'E02006112',
        '7WA' => 'E02006105',
        '7WB' => 'E02006105',
        '7WG' => 'E02006112',
        '7WZ' => 'E02006105',
        '7XA' => 'E02006112',
        '7XB' => 'E02006112',
        '7XD' => 'E02006105',
        '7YA' => 'E02006105',
        '7YB' => 'E02006112',
        '7YD' => 'E02006112',
        '7YE' => 'E02006105',
        '7YH' => 'E02006112',
        '7YL' => 'E02006105',
        '7YN' => 'E02006112',
        '7YP' => 'E02006105',
        '7YQ' => 'E02006112',
        '7YR' => 'E02006112',
        '7YS' => 'E02006112',
        '7YT' => 'E02006112',
        '7YU' => 'E02006105',
        '7YW' => 'E02006105',
        '7YX' => 'E02006112',
        '7YY' => 'E02006105',
        '7YZ' => 'E02006112',
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
