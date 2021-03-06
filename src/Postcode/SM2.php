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
final class SM2
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '5AA' => 'E02000860',
        '5AB' => 'E02000857',
        '5AD' => 'E02000857',
        '5AE' => 'E02000857',
        '5AF' => 'E02000851',
        '5AG' => 'E02000851',
        '5AH' => 'E02000860',
        '5AJ' => 'E02000860',
        '5AL' => 'E02000851',
        '5AN' => 'E02000860',
        '5AP' => 'E02000857',
        '5AQ' => 'E02000860',
        '5AR' => 'E02000860',
        '5AS' => 'E02000860',
        '5AT' => 'E02006836',
        '5AU' => 'E02006836',
        '5AW' => 'E02000851',
        '5AX' => 'E02000860',
        '5AY' => 'E02000860',
        '5AZ' => 'E02000851',
        '5BA' => 'E02006836',
        '5BB' => 'E02006836',
        '5BD' => 'E02006836',
        '5BE' => 'E02006836',
        '5BF' => 'E02006836',
        '5BG' => 'E02006836',
        '5BH' => 'E02006836',
        '5BJ' => 'E02006836',
        '5BL' => 'E02000857',
        '5BN' => 'E02000857',
        '5BP' => 'E02000857',
        '5BQ' => 'E02000857',
        '5BS' => 'E02000860',
        '5BT' => 'E02000857',
        '5BU' => 'E02000857',
        '5BW' => 'E02000860',
        '5BX' => 'E02000857',
        '5BY' => 'E02000857',
        '5BZ' => 'E02006836',
        '5DA' => 'E02000860',
        '5DB' => 'E02000860',
        '5DD' => 'E02000860',
        '5DE' => 'E02000860',
        '5DF' => 'E02000861',
        '5DG' => 'E02000860',
        '5DH' => 'E02000860',
        '5DJ' => 'E02000860',
        '5DL' => 'E02000860',
        '5DN' => 'E02000860',
        '5DP' => 'E02000860',
        '5DQ' => 'E02000860',
        '5DR' => 'E02000860',
        '5DS' => 'E02000860',
        '5DT' => 'E02000860',
        '5DU' => 'E02000860',
        '5DW' => 'E02000860',
        '5DX' => 'E02000860',
        '5DY' => 'E02000860',
        '5DZ' => 'E02000860',
        '5EA' => 'E02000860',
        '5EB' => 'E02000860',
        '5ED' => 'E02000860',
        '5EE' => 'E02000860',
        '5EF' => 'E02000860',
        '5EG' => 'E02000860',
        '5EH' => 'E02000860',
        '5EJ' => 'E02000860',
        '5EL' => 'E02000860',
        '5EN' => 'E02000860',
        '5EP' => 'E02000860',
        '5EQ' => 'E02000860',
        '5ER' => 'E02000860',
        '5ES' => 'E02000860',
        '5ET' => 'E02000857',
        '5EU' => 'E02000860',
        '5EW' => 'E02000860',
        '5EX' => 'E02000857',
        '5EY' => 'E02000860',
        '5EZ' => 'E02000860',
        '5FA' => 'E02000860',
        '5FE' => 'E02000851',
        '5FF' => 'E02000851',
        '5FG' => 'E02000860',
        '5FH' => 'E02000860',
        '5FJ' => 'E02000860',
        '5FL' => 'E02000860',
        '5FP' => 'E02000860',
        '5FQ' => 'E02006836',
        '5FR' => 'E02000860',
        '5FS' => 'E02000860',
        '5FT' => 'E02000860',
        '5FU' => 'E02000860',
        '5FW' => 'E02000860',
        '5FX' => 'E02000860',
        '5FY' => 'E02000860',
        '5FZ' => 'E02000860',
        '5GA' => 'E02000851',
        '5GN' => 'E02000857',
        '5GX' => 'E02000851',
        '5GY' => 'E02000860',
        '5GZ' => 'E02000860',
        '5HA' => 'E02000860',
        '5HB' => 'E02000860',
        '5HD' => 'E02000860',
        '5HE' => 'E02000860',
        '5HF' => 'E02000860',
        '5HG' => 'E02000861',
        '5HH' => 'E02000861',
        '5HJ' => 'E02000860',
        '5HL' => 'E02000860',
        '5HN' => 'E02000860',
        '5HP' => 'E02000861',
        '5HQ' => 'E02000860',
        '5HR' => 'E02000861',
        '5HS' => 'E02000861',
        '5HT' => 'E02000861',
        '5HU' => 'E02000861',
        '5HW' => 'E02000861',
        '5HX' => 'E02000861',
        '5HY' => 'E02000861',
        '5HZ' => 'E02000861',
        '5JA' => 'E02000861',
        '5JB' => 'E02000861',
        '5JD' => 'E02000861',
        '5JE' => 'E02000861',
        '5JF' => 'E02000851',
        '5JG' => 'E02000860',
        '5JH' => 'E02000857',
        '5JJ' => 'E02000860',
        '5JL' => 'E02000860',
        '5JN' => 'E02000860',
        '5JP' => 'E02000851',
        '5JQ' => 'E02000857',
        '5JR' => 'E02000860',
        '5JS' => 'E02000861',
        '5JT' => 'E02000861',
        '5JU' => 'E02000861',
        '5JW' => 'E02000860',
        '5JX' => 'E02000861',
        '5JY' => 'E02000861',
        '5JZ' => 'E02000861',
        '5LA' => 'E02000860',
        '5LB' => 'E02000861',
        '5LD' => 'E02000861',
        '5LE' => 'E02000861',
        '5LF' => 'E02000861',
        '5LG' => 'E02000861',
        '5LH' => 'E02000861',
        '5LJ' => 'E02000861',
        '5LL' => 'E02000861',
        '5LN' => 'E02000860',
        '5LP' => 'E02000860',
        '5LQ' => 'E02000861',
        '5LR' => 'E02000851',
        '5LS' => 'E02006836',
        '5LT' => 'E02006836',
        '5LU' => 'E02000860',
        '5LW' => 'E02000861',
        '5LX' => 'E02000860',
        '5LY' => 'E02006836',
        '5LZ' => 'E02000851',
        '5NA' => 'E02000860',
        '5NB' => 'E02000860',
        '5ND' => 'E02006836',
        '5NE' => 'E02006836',
        '5NF' => 'E02000861',
        '5NG' => 'E02000860',
        '5NH' => 'E02000851',
        '5NJ' => 'E02000860',
        '5NL' => 'E02000860',
        '5NN' => 'E02006836',
        '5NP' => 'E02000860',
        '5NQ' => 'E02006836',
        '5NR' => 'E02006836',
        '5NS' => 'E02000860',
        '5NT' => 'E02000860',
        '5NW' => 'E02006836',
        '5PA' => 'E02006376',
        '5PD' => 'E02006376',
        '5PG' => 'E02000860',
        '5PH' => 'E02000860',
        '5PJ' => 'E02006376',
        '5PP' => 'E02006376',
        '5PQ' => 'E02006376',
        '5PR' => 'E02006836',
        '5PS' => 'E02006836',
        '5PT' => 'E02000861',
        '5PU' => 'E02000851',
        '5PX' => 'E02000860',
        '5PY' => 'E02000861',
        '5QD' => 'E02000861',
        '5QE' => 'E02000861',
        '5QF' => 'E02000861',
        '5QG' => 'E02000851',
        '5QH' => 'E02000861',
        '5QJ' => 'E02000861',
        '5QL' => 'E02000861',
        '5QN' => 'E02000861',
        '5QP' => 'E02000861',
        '5QR' => 'E02000861',
        '5QS' => 'E02000861',
        '5QT' => 'E02000861',
        '5QU' => 'E02000861',
        '5QY' => 'E02000861',
        '5QZ' => 'E02000861',
        '5RA' => 'E02000861',
        '5RB' => 'E02000861',
        '5RD' => 'E02000861',
        '5RE' => 'E02000860',
        '5RF' => 'E02000860',
        '5RH' => 'E02000860',
        '5RJ' => 'E02000860',
        '5RL' => 'E02000860',
        '5RN' => 'E02000861',
        '5RP' => 'E02000861',
        '5RQ' => 'E02000860',
        '5RS' => 'E02000861',
        '5RU' => 'E02000861',
        '5RY' => 'E02000861',
        '5SA' => 'E02000861',
        '5SB' => 'E02000861',
        '5SE' => 'E02000861',
        '5SF' => 'E02000860',
        '5SJ' => 'E02000860',
        '5SL' => 'E02000860',
        '5SN' => 'E02000860',
        '5SP' => 'E02006836',
        '5SR' => 'E02000860',
        '5ST' => 'E02006836',
        '5SU' => 'E02006836',
        '5SW' => 'E02000860',
        '5SX' => 'E02006836',
        '5TA' => 'E02000860',
        '5TB' => 'E02000860',
        '5TD' => 'E02000861',
        '5TE' => 'E02000861',
        '5TF' => 'E02000860',
        '5TG' => 'E02000860',
        '5TH' => 'E02000861',
        '5TJ' => 'E02000860',
        '5TL' => 'E02000860',
        '5TN' => 'E02000857',
        '5TP' => 'E02000860',
        '5TQ' => 'E02000860',
        '5TR' => 'E02000857',
        '5TS' => 'E02000857',
        '5TT' => 'E02000857',
        '5TU' => 'E02000857',
        '5TX' => 'E02000860',
        '5TY' => 'E02000860',
        '5TZ' => 'E02000860',
        '5UA' => 'E02000860',
        '5UB' => 'E02000860',
        '5UD' => 'E02000860',
        '5UE' => 'E02000860',
        '5UF' => 'E02000860',
        '5UL' => 'E02000860',
        '5UN' => 'E02000851',
        '5UP' => 'E02000851',
        '5UR' => 'E02000851',
        '5UW' => 'E02000860',
        '5UZ' => 'E02000860',
        '5WA' => 'E02000860',
        '5WB' => 'E02000860',
        '5WD' => 'E02000851',
        '5WE' => 'E02000860',
        '5WF' => 'E02000851',
        '5WG' => 'E02000851',
        '5WH' => 'E02000860',
        '5WJ' => 'E02000851',
        '5WL' => 'E02000851',
        '5WN' => 'E02000851',
        '5WP' => 'E02000851',
        '5WQ' => 'E02000860',
        '5WR' => 'E02000851',
        '5WS' => 'E02000851',
        '5WT' => 'E02000851',
        '5WU' => 'E02000851',
        '5WW' => 'E02000857',
        '5WX' => 'E02006376',
        '5WY' => 'E02000851',
        '5WZ' => 'E02000851',
        '5XA' => 'E02000851',
        '5XB' => 'E02000851',
        '5XD' => 'E02000851',
        '5XE' => 'E02000851',
        '5XF' => 'E02000851',
        '5XG' => 'E02000851',
        '5XH' => 'E02000851',
        '5XT' => 'E02000851',
        '5XW' => 'E02000851',
        '5XX' => 'E02000851',
        '5XY' => 'E02000851',
        '5XZ' => 'E02000851',
        '5YB' => 'E02000851',
        '5YF' => 'E02000851',
        '5YQ' => 'E02000851',
        '5YT' => 'E02000851',
        '5YX' => 'E02000860',
        '5YY' => 'E02000851',
        '5YZ' => 'E02000851',
        '5ZA' => 'E02000860',
        '5ZB' => 'E02000851',
        '5ZD' => 'E02000860',
        '5ZE' => 'E02000860',
        '5ZF' => 'E02000860',
        '5ZG' => 'E02000860',
        '5ZH' => 'E02000860',
        '5ZJ' => 'E02000860',
        '5ZL' => 'E02000851',
        '5ZN' => 'E02000851',
        '5ZP' => 'E02000860',
        '5ZQ' => 'E02000860',
        '5ZR' => 'E02000851',
        '5ZS' => 'E02000860',
        '5ZT' => 'E02000851',
        '5ZU' => 'E02000860',
        '5ZW' => 'E02000851',
        '5ZY' => 'E02000860',
        '6AA' => 'E02000860',
        '6AB' => 'E02000860',
        '6AD' => 'E02000857',
        '6AE' => 'E02000860',
        '6AF' => 'E02000857',
        '6AG' => 'E02000860',
        '6AH' => 'E02000857',
        '6AJ' => 'E02000860',
        '6AL' => 'E02000857',
        '6AN' => 'E02000860',
        '6AP' => 'E02000860',
        '6AQ' => 'E02000860',
        '6AR' => 'E02000860',
        '6AS' => 'E02000860',
        '6AT' => 'E02000860',
        '6AU' => 'E02000860',
        '6AW' => 'E02000860',
        '6AX' => 'E02000860',
        '6AY' => 'E02000860',
        '6AZ' => 'E02000860',
        '6BA' => 'E02000857',
        '6BB' => 'E02000857',
        '6BD' => 'E02000860',
        '6BE' => 'E02000860',
        '6BF' => 'E02000860',
        '6BG' => 'E02006836',
        '6BH' => 'E02006836',
        '6BJ' => 'E02006836',
        '6BL' => 'E02006836',
        '6BN' => 'E02006836',
        '6BP' => 'E02006836',
        '6BQ' => 'E02006836',
        '6BS' => 'E02006836',
        '6BT' => 'E02000860',
        '6BU' => 'E02006836',
        '6BW' => 'E02006836',
        '6BX' => 'E02006836',
        '6BY' => 'E02000851',
        '6BZ' => 'E02006836',
        '6DA' => 'E02000851',
        '6DB' => 'E02000857',
        '6DD' => 'E02006836',
        '6DE' => 'E02006836',
        '6DF' => 'E02006836',
        '6DG' => 'E02006836',
        '6DH' => 'E02006836',
        '6DJ' => 'E02006836',
        '6DL' => 'E02000851',
        '6DN' => 'E02006836',
        '6DP' => 'E02006836',
        '6DQ' => 'E02006836',
        '6DR' => 'E02006836',
        '6DS' => 'E02006836',
        '6DT' => 'E02006836',
        '6DU' => 'E02006836',
        '6DW' => 'E02006836',
        '6DX' => 'E02006836',
        '6DY' => 'E02006836',
        '6DZ' => 'E02000851',
        '6EA' => 'E02006836',
        '6EB' => 'E02006836',
        '6ED' => 'E02006836',
        '6EE' => 'E02006836',
        '6EF' => 'E02006836',
        '6EG' => 'E02006836',
        '6EH' => 'E02000857',
        '6EJ' => 'E02006836',
        '6EL' => 'E02006836',
        '6EN' => 'E02000857',
        '6EP' => 'E02006836',
        '6EQ' => 'E02006836',
        '6ER' => 'E02006836',
        '6ES' => 'E02006836',
        '6ET' => 'E02006836',
        '6EU' => 'E02006836',
        '6EW' => 'E02006836',
        '6EX' => 'E02000857',
        '6EY' => 'E02000857',
        '6EZ' => 'E02000857',
        '6FA' => 'E02006836',
        '6FB' => 'E02006836',
        '6FD' => 'E02000857',
        '6FE' => 'E02000860',
        '6FY' => 'E02000851',
        '6GE' => 'E02000857',
        '6GP' => 'E02000857',
        '6GS' => 'E02006836',
        '6HA' => 'E02000857',
        '6HB' => 'E02000857',
        '6HD' => 'E02000857',
        '6HE' => 'E02000857',
        '6HF' => 'E02006836',
        '6HG' => 'E02006836',
        '6HH' => 'E02006836',
        '6HJ' => 'E02006836',
        '6HL' => 'E02006836',
        '6HN' => 'E02006836',
        '6HP' => 'E02000857',
        '6HQ' => 'E02006836',
        '6HR' => 'E02006836',
        '6HS' => 'E02006836',
        '6HT' => 'E02006836',
        '6HU' => 'E02006836',
        '6HW' => 'E02006836',
        '6HX' => 'E02006836',
        '6HY' => 'E02006836',
        '6HZ' => 'E02000857',
        '6JA' => 'E02006836',
        '6JB' => 'E02006836',
        '6JD' => 'E02006836',
        '6JE' => 'E02006836',
        '6JF' => 'E02006836',
        '6JG' => 'E02000857',
        '6JH' => 'E02006836',
        '6JJ' => 'E02006836',
        '6JL' => 'E02000857',
        '6JN' => 'E02000857',
        '6JP' => 'E02000857',
        '6JQ' => 'E02000857',
        '6JR' => 'E02000857',
        '6JS' => 'E02000857',
        '6JT' => 'E02000855',
        '6JU' => 'E02000855',
        '6JW' => 'E02000857',
        '6JX' => 'E02000855',
        '6JY' => 'E02000857',
        '6JZ' => 'E02000857',
        '6LA' => 'E02000857',
        '6LB' => 'E02000857',
        '6LD' => 'E02000857',
        '6LE' => 'E02000857',
        '6LF' => 'E02000857',
        '6LG' => 'E02000857',
        '6LH' => 'E02000857',
        '6LJ' => 'E02000857',
        '6LL' => 'E02000857',
        '6LN' => 'E02000857',
        '6LP' => 'E02000857',
        '6LQ' => 'E02000857',
        '6LR' => 'E02000857',
        '6LS' => 'E02000851',
        '6LT' => 'E02000857',
        '6LU' => 'E02000857',
        '6LW' => 'E02000851',
        '6LX' => 'E02000857',
        '6LY' => 'E02000857',
        '6LZ' => 'E02000857',
        '6NA' => 'E02000857',
        '6NB' => 'E02000857',
        '6ND' => 'E02000857',
        '6NE' => 'E02000857',
        '6NF' => 'E02000857',
        '6NG' => 'E02006836',
        '6NH' => 'E02000857',
        '6NJ' => 'E02000857',
        '6NL' => 'E02006836',
        '6NN' => 'E02000851',
        '6NP' => 'E02000851',
        '6NQ' => 'E02006836',
        '6NR' => 'E02000857',
        '6NS' => 'E02006836',
        '6NT' => 'E02000857',
        '6NU' => 'E02000851',
        '6NW' => 'E02000857',
        '6NX' => 'E02000851',
        '6NY' => 'E02000860',
        '6NZ' => 'E02000860',
        '6PA' => 'E02000857',
        '6PB' => 'E02000857',
        '6PD' => 'E02006836',
        '6PE' => 'E02000857',
        '6PF' => 'E02000857',
        '6PG' => 'E02000857',
        '6PH' => 'E02000857',
        '6PJ' => 'E02000857',
        '6PL' => 'E02000857',
        '6PN' => 'E02000857',
        '6PP' => 'E02000857',
        '6PQ' => 'E02000857',
        '6PR' => 'E02000857',
        '6PS' => 'E02000857',
        '6PT' => 'E02000857',
        '6PU' => 'E02000857',
        '6PW' => 'E02000857',
        '6PX' => 'E02000857',
        '6PY' => 'E02000857',
        '6PZ' => 'E02000857',
        '6QA' => 'E02000857',
        '6QB' => 'E02000857',
        '6QD' => 'E02006836',
        '6QE' => 'E02000857',
        '6QF' => 'E02000857',
        '6QG' => 'E02000857',
        '6QH' => 'E02000857',
        '6QJ' => 'E02000857',
        '6QL' => 'E02000857',
        '6QN' => 'E02000857',
        '6QP' => 'E02000857',
        '6QQ' => 'E02000857',
        '6QR' => 'E02000857',
        '6QS' => 'E02006836',
        '6QT' => 'E02006836',
        '6QU' => 'E02000857',
        '6QW' => 'E02000857',
        '6QX' => 'E02000857',
        '6QY' => 'E02000857',
        '6QZ' => 'E02000857',
        '6RA' => 'E02000857',
        '6RB' => 'E02006836',
        '6RD' => 'E02000857',
        '6RE' => 'E02000857',
        '6RF' => 'E02000857',
        '6RG' => 'E02000857',
        '6RH' => 'E02000857',
        '6RJ' => 'E02000857',
        '6RL' => 'E02000857',
        '6RN' => 'E02000857',
        '6RP' => 'E02000857',
        '6RQ' => 'E02000857',
        '6RR' => 'E02000857',
        '6RS' => 'E02000857',
        '6RT' => 'E02000857',
        '6RU' => 'E02000857',
        '6RW' => 'E02000857',
        '6RX' => 'E02000857',
        '6RY' => 'E02000857',
        '6RZ' => 'E02000857',
        '6SA' => 'E02000857',
        '6SB' => 'E02000857',
        '6SD' => 'E02000857',
        '6SE' => 'E02006836',
        '6SF' => 'E02000857',
        '6SG' => 'E02000857',
        '6SH' => 'E02000857',
        '6SJ' => 'E02000857',
        '6SL' => 'E02006836',
        '6SN' => 'E02006836',
        '6SP' => 'E02006836',
        '6SQ' => 'E02000857',
        '6SR' => 'E02006836',
        '6SS' => 'E02006836',
        '6ST' => 'E02000857',
        '6SU' => 'E02006836',
        '6SW' => 'E02006836',
        '6SX' => 'E02000857',
        '6SY' => 'E02000857',
        '6SZ' => 'E02000857',
        '6TA' => 'E02000857',
        '6TB' => 'E02000857',
        '6TD' => 'E02000857',
        '6TE' => 'E02000851',
        '6TG' => 'E02000857',
        '6TH' => 'E02000857',
        '6TJ' => 'E02000857',
        '6TP' => 'E02000860',
        '6TQ' => 'E02000857',
        '6TR' => 'E02000860',
        '6TS' => 'E02000860',
        '6TT' => 'E02000860',
        '6TU' => 'E02000860',
        '6TW' => 'E02000857',
        '6TX' => 'E02000860',
        '6TY' => 'E02000860',
        '6TZ' => 'E02000860',
        '6UA' => 'E02000860',
        '6UB' => 'E02000860',
        '6UE' => 'E02000851',
        '6UF' => 'E02000860',
        '6UG' => 'E02000857',
        '6UJ' => 'E02006836',
        '6UL' => 'E02000860',
        '6UN' => 'E02006836',
        '6UP' => 'E02000855',
        '6UQ' => 'E02000857',
        '6UR' => 'E02000857',
        '6US' => 'E02000857',
        '6UT' => 'E02000851',
        '6UU' => 'E02000857',
        '6UW' => 'E02000857',
        '6UX' => 'E02000851',
        '6UY' => 'E02000860',
        '6UZ' => 'E02000851',
        '6WA' => 'E02000857',
        '6WB' => 'E02000851',
        '6WD' => 'E02000857',
        '6WE' => 'E02000851',
        '6WF' => 'E02000851',
        '6WG' => 'E02000857',
        '6WH' => 'E02000857',
        '6WJ' => 'E02000860',
        '6WL' => 'E02000851',
        '6WN' => 'E02000851',
        '6WP' => 'E02000851',
        '6WQ' => 'E02000860',
        '6WR' => 'E02000857',
        '6WS' => 'E02000857',
        '6WT' => 'E02000851',
        '6WU' => 'E02000857',
        '6WW' => 'E02000857',
        '6WX' => 'E02000857',
        '6WY' => 'E02000851',
        '6WZ' => 'E02000851',
        '6XA' => 'E02000851',
        '6XB' => 'E02000851',
        '6XD' => 'E02000851',
        '6XE' => 'E02000851',
        '6XF' => 'E02000851',
        '6XG' => 'E02000851',
        '6XH' => 'E02000851',
        '6XJ' => 'E02000851',
        '6XP' => 'E02000851',
        '6XR' => 'E02000851',
        '6XT' => 'E02000851',
        '6XX' => 'E02000851',
        '6XY' => 'E02000851',
        '6XZ' => 'E02000851',
        '6YB' => 'E02000851',
        '6YF' => 'E02000851',
        '6YH' => 'E02000851',
        '6YP' => 'E02000851',
        '6YQ' => 'E02000851',
        '6YR' => 'E02000851',
        '6YZ' => 'E02000851',
        '6ZE' => 'E02000851',
        '6ZF' => 'E02000857',
        '6ZG' => 'E02000857',
        '6ZH' => 'E02000851',
        '6ZJ' => 'E02000857',
        '6ZL' => 'E02000857',
        '6ZN' => 'E02000860',
        '6ZP' => 'E02000857',
        '6ZQ' => 'E02000857',
        '6ZR' => 'E02000851',
        '6ZS' => 'E02000851',
        '6ZT' => 'E02000851',
        '6ZU' => 'E02000851',
        '6ZX' => 'E02000857',
        '6ZY' => 'E02000851',
        '7AA' => 'E02006836',
        '7AB' => 'E02006836',
        '7AD' => 'E02006836',
        '7AE' => 'E02000855',
        '7AF' => 'E02000855',
        '7AG' => 'E02006836',
        '7AJ' => 'E02000855',
        '7AL' => 'E02000855',
        '7AP' => 'E02000851',
        '7AQ' => 'E02000855',
        '7AR' => 'E02000851',
        '7AS' => 'E02000851',
        '7AT' => 'E02000855',
        '7AU' => 'E02000855',
        '7AW' => 'E02000855',
        '7AY' => 'E02000855',
        '7AZ' => 'E02000855',
        '7BA' => 'E02000855',
        '7BB' => 'E02000855',
        '7BD' => 'E02000855',
        '7BE' => 'E02000855',
        '7BG' => 'E02000855',
        '7BH' => 'E02000855',
        '7BJ' => 'E02000855',
        '7BL' => 'E02000855',
        '7BN' => 'E02000855',
        '7BP' => 'E02000855',
        '7BQ' => 'E02000855',
        '7BS' => 'E02006836',
        '7BT' => 'E02006836',
        '7BW' => 'E02000855',
        '7BX' => 'E02006836',
        '7BY' => 'E02006836',
        '7BZ' => 'E02006836',
        '7DA' => 'E02006836',
        '7DB' => 'E02006836',
        '7DD' => 'E02006836',
        '7DH' => 'E02006836',
        '7DJ' => 'E02006836',
        '7DL' => 'E02000851',
        '7DP' => 'E02006836',
        '7DQ' => 'E02006836',
        '7DU' => 'E02006836',
        '7DX' => 'E02006836',
        '7DY' => 'E02006836',
        '7DZ' => 'E02006836',
        '7EA' => 'E02006836',
        '7EB' => 'E02006836',
        '7ED' => 'E02006836',
        '7EE' => 'E02000851',
        '7EG' => 'E02006836',
        '7EH' => 'E02006836',
        '7EN' => 'E02006836',
        '7EP' => 'E02006836',
        '7EQ' => 'E02006836',
        '7ER' => 'E02006836',
        '7ES' => 'E02006836',
        '7ET' => 'E02006836',
        '7EU' => 'E02006836',
        '7EW' => 'E02006836',
        '7EX' => 'E02006836',
        '7EZ' => 'E02006836',
        '7HA' => 'E02006836',
        '7HB' => 'E02006836',
        '7HE' => 'E02006836',
        '7HF' => 'E02006836',
        '7HG' => 'E02006836',
        '7HH' => 'E02006836',
        '7HJ' => 'E02006837',
        '7HQ' => 'E02000855',
        '7HR' => 'E02006837',
        '7HS' => 'E02006837',
        '7HT' => 'E02006836',
        '7HU' => 'E02006837',
        '7HX' => 'E02006836',
        '7HY' => 'E02006836',
        '7HZ' => 'E02006836',
        '7JA' => 'E02006836',
        '7JB' => 'E02006836',
        '7JD' => 'E02006836',
        '7JE' => 'E02006836',
        '7JL' => 'E02006837',
        '7JP' => 'E02006837',
        '7JR' => 'E02006837',
        '7JS' => 'E02006837',
        '7JT' => 'E02006837',
        '7JU' => 'E02006837',
        '7JX' => 'E02006837',
        '7JY' => 'E02006837',
        '7JZ' => 'E02006837',
        '7LA' => 'E02006837',
        '7LB' => 'E02006837',
        '7LE' => 'E02000851',
        '7LF' => 'E02006837',
        '7LG' => 'E02006837',
        '7LH' => 'E02006837',
        '7LJ' => 'E02006837',
        '7LL' => 'E02006837',
        '7LN' => 'E02006837',
        '7LP' => 'E02006837',
        '7LQ' => 'E02006837',
        '7LR' => 'E02006837',
        '7LS' => 'E02006837',
        '7LT' => 'E02006837',
        '7LU' => 'E02006837',
        '7LW' => 'E02006837',
        '7LX' => 'E02006837',
        '7NA' => 'E02000855',
        '7NB' => 'E02000855',
        '7ND' => 'E02006837',
        '7NE' => 'E02006837',
        '7NF' => 'E02006837',
        '7NG' => 'E02006837',
        '7NH' => 'E02006837',
        '7NJ' => 'E02000855',
        '7NN' => 'E02000855',
        '7NQ' => 'E02006837',
        '7NR' => 'E02000855',
        '7NS' => 'E02000855',
        '7NT' => 'E02000855',
        '7NU' => 'E02000855',
        '7NW' => 'E02000855',
        '7NZ' => 'E02000855',
        '7PD' => 'E02000855',
        '7PE' => 'E02000855',
        '7PF' => 'E02000855',
        '7PG' => 'E02000855',
        '7PH' => 'E02000855',
        '7PJ' => 'E02000851',
        '7PN' => 'E02000855',
        '7PP' => 'E02006836',
        '7PQ' => 'E02006836',
        '7PS' => 'E02006836',
        '7PT' => 'E02000855',
        '7PU' => 'E02006836',
        '7PX' => 'E02006836',
        '7PY' => 'E02000851',
        '7PZ' => 'E02000855',
        '7QA' => 'E02006836',
        '7QB' => 'E02006836',
        '7QE' => 'E02006836',
        '7QF' => 'E02000851',
        '7QL' => 'E02006836',
        '7QN' => 'E02006836',
        '7QQ' => 'E02006836',
        '7QR' => 'E02006836',
        '7QS' => 'E02006836',
        '7QT' => 'E02006836',
        '7QU' => 'E02000851',
        '7QW' => 'E02000851',
        '7QY' => 'E02006836',
        '7QZ' => 'E02000851',
        '7RA' => 'E02000851',
        '7RB' => 'E02000851',
        '7RD' => 'E02000851',
        '7RE' => 'E02006836',
        '7RF' => 'E02006836',
        '7RG' => 'E02000851',
        '7RH' => 'E02006836',
        '7RJ' => 'E02006836',
        '7RL' => 'E02000855',
        '7RN' => 'E02006836',
        '7RP' => 'E02000851',
        '7RQ' => 'E02000851',
        '7RR' => 'E02000851',
        '7RS' => 'E02000851',
        '7RT' => 'E02000851',
        '7RW' => 'E02000855',
        '7SJ' => 'E02000855',
        '7WA' => 'E02000851',
        '7WB' => 'E02000851',
        '7WD' => 'E02000851',
        '7WE' => 'E02000851',
        '7WF' => 'E02000851',
        '7WG' => 'E02000851',
        '7WH' => 'E02000851',
        '7WJ' => 'E02000851',
        '7WN' => 'E02000851',
        '7WP' => 'E02000851',
        '7WQ' => 'E02000851',
        '7WZ' => 'E02000851',
        '7ZU' => 'E02000851',
        '7ZW' => 'E02000851',
        '7ZX' => 'E02000851',
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
