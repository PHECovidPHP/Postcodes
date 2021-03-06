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
final class RM17
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '5AA' => 'E02003304',
        '5AB' => 'E02003304',
        '5AD' => 'E02003304',
        '5AE' => 'E02003304',
        '5AF' => 'E02003304',
        '5AG' => 'E02003304',
        '5AH' => 'E02003304',
        '5AJ' => 'E02003304',
        '5AL' => 'E02003304',
        '5AN' => 'E02003304',
        '5AP' => 'E02003304',
        '5AQ' => 'E02003304',
        '5AR' => 'E02003304',
        '5AS' => 'E02003304',
        '5AT' => 'E02003304',
        '5AU' => 'E02003304',
        '5AW' => 'E02003304',
        '5AX' => 'E02003304',
        '5AY' => 'E02003304',
        '5AZ' => 'E02003304',
        '5BA' => 'E02003304',
        '5BB' => 'E02003304',
        '5BD' => 'E02003304',
        '5BE' => 'E02003311',
        '5BF' => 'E02003312',
        '5BG' => 'E02003304',
        '5BH' => 'E02003311',
        '5BJ' => 'E02003311',
        '5BL' => 'E02003304',
        '5BN' => 'E02003311',
        '5BP' => 'E02003311',
        '5BQ' => 'E02003311',
        '5BS' => 'E02003311',
        '5BT' => 'E02003311',
        '5BU' => 'E02003311',
        '5BW' => 'E02003311',
        '5BX' => 'E02003311',
        '5BY' => 'E02003311',
        '5BZ' => 'E02003304',
        '5DA' => 'E02003311',
        '5DB' => 'E02003311',
        '5DD' => 'E02003311',
        '5DE' => 'E02003311',
        '5DF' => 'E02003311',
        '5DG' => 'E02003311',
        '5DH' => 'E02003311',
        '5DJ' => 'E02003311',
        '5DL' => 'E02003311',
        '5DN' => 'E02003311',
        '5DP' => 'E02003311',
        '5DQ' => 'E02003311',
        '5DR' => 'E02003311',
        '5DS' => 'E02003311',
        '5DT' => 'E02003311',
        '5DU' => 'E02003304',
        '5DW' => 'E02003311',
        '5DX' => 'E02003311',
        '5DY' => 'E02003311',
        '5DZ' => 'E02003304',
        '5EA' => 'E02003311',
        '5EB' => 'E02003311',
        '5ED' => 'E02003311',
        '5EE' => 'E02003311',
        '5EF' => 'E02003311',
        '5EG' => 'E02003311',
        '5EH' => 'E02003311',
        '5EJ' => 'E02003311',
        '5EL' => 'E02003311',
        '5EN' => 'E02003311',
        '5EP' => 'E02003311',
        '5EQ' => 'E02003304',
        '5ER' => 'E02003311',
        '5ES' => 'E02003311',
        '5ET' => 'E02003311',
        '5EU' => 'E02003311',
        '5EW' => 'E02003311',
        '5EX' => 'E02003311',
        '5EY' => 'E02003311',
        '5EZ' => 'E02003311',
        '5FA' => 'E02003312',
        '5FB' => 'E02003311',
        '5FD' => 'E02003311',
        '5FE' => 'E02003312',
        '5FF' => 'E02003311',
        '5FG' => 'E02003312',
        '5FH' => 'E02003311',
        '5FJ' => 'E02003311',
        '5FL' => 'E02003311',
        '5FN' => 'E02003311',
        '5FW' => 'E02003311',
        '5FZ' => 'E02003311',
        '5GD' => 'E02003311',
        '5GE' => 'E02003304',
        '5GG' => 'E02003311',
        '5GH' => 'E02003311',
        '5GU' => 'E02003309',
        '5GW' => 'E02003311',
        '5GX' => 'E02003304',
        '5GY' => 'E02003311',
        '5GZ' => 'E02003311',
        '5HA' => 'E02003311',
        '5HB' => 'E02003311',
        '5HD' => 'E02003311',
        '5HE' => 'E02003311',
        '5HF' => 'E02003311',
        '5HG' => 'E02003311',
        '5HH' => 'E02003311',
        '5HJ' => 'E02003311',
        '5HL' => 'E02003311',
        '5HN' => 'E02003311',
        '5HP' => 'E02003311',
        '5HQ' => 'E02003311',
        '5HR' => 'E02003311',
        '5HS' => 'E02003311',
        '5HT' => 'E02003311',
        '5HU' => 'E02003304',
        '5HW' => 'E02003311',
        '5HX' => 'E02003311',
        '5HY' => 'E02003311',
        '5HZ' => 'E02003311',
        '5JA' => 'E02003311',
        '5JB' => 'E02003311',
        '5JD' => 'E02003311',
        '5JE' => 'E02003311',
        '5JF' => 'E02003311',
        '5JG' => 'E02003311',
        '5JH' => 'E02003311',
        '5JJ' => 'E02003311',
        '5JL' => 'E02003311',
        '5JN' => 'E02003311',
        '5JP' => 'E02003311',
        '5JQ' => 'E02003311',
        '5JR' => 'E02003311',
        '5JS' => 'E02003311',
        '5JT' => 'E02003311',
        '5JU' => 'E02003311',
        '5JW' => 'E02003311',
        '5JX' => 'E02003304',
        '5JY' => 'E02003311',
        '5JZ' => 'E02003311',
        '5LA' => 'E02003311',
        '5LB' => 'E02003311',
        '5LD' => 'E02003304',
        '5LE' => 'E02003304',
        '5LF' => 'E02003311',
        '5LG' => 'E02003304',
        '5LH' => 'E02003311',
        '5LJ' => 'E02003304',
        '5LL' => 'E02003309',
        '5LN' => 'E02003309',
        '5LP' => 'E02003304',
        '5LQ' => 'E02003304',
        '5LR' => 'E02003304',
        '5LS' => 'E02003304',
        '5LT' => 'E02003304',
        '5LU' => 'E02003311',
        '5LW' => 'E02003304',
        '5LX' => 'E02003304',
        '5LY' => 'E02003311',
        '5LZ' => 'E02003311',
        '5NA' => 'E02003309',
        '5NB' => 'E02003311',
        '5ND' => 'E02003311',
        '5NH' => 'E02003309',
        '5NJ' => 'E02003309',
        '5NL' => 'E02003309',
        '5NN' => 'E02003309',
        '5NP' => 'E02003309',
        '5NQ' => 'E02003311',
        '5NR' => 'E02003309',
        '5NS' => 'E02003309',
        '5NT' => 'E02003309',
        '5NU' => 'E02003309',
        '5NW' => 'E02003309',
        '5NX' => 'E02003309',
        '5NY' => 'E02003309',
        '5NZ' => 'E02003309',
        '5PA' => 'E02003309',
        '5PB' => 'E02003309',
        '5PD' => 'E02003311',
        '5PH' => 'E02003309',
        '5PJ' => 'E02003311',
        '5PP' => 'E02003304',
        '5PR' => 'E02003304',
        '5PS' => 'E02003309',
        '5PT' => 'E02003309',
        '5PU' => 'E02003309',
        '5PX' => 'E02003304',
        '5PY' => 'E02003304',
        '5QB' => 'E02003311',
        '5QH' => 'E02003311',
        '5QJ' => 'E02006926',
        '5QL' => 'E02003311',
        '5QN' => 'E02003304',
        '5QP' => 'E02006926',
        '5QQ' => 'E02003311',
        '5QR' => 'E02003304',
        '5QS' => 'E02003304',
        '5QT' => 'E02003304',
        '5QU' => 'E02003309',
        '5QW' => 'E02003304',
        '5QX' => 'E02003309',
        '5RA' => 'E02003309',
        '5RB' => 'E02003309',
        '5RD' => 'E02003309',
        '5RE' => 'E02003309',
        '5RF' => 'E02003304',
        '5RG' => 'E02003309',
        '5RH' => 'E02003309',
        '5RJ' => 'E02003309',
        '5RL' => 'E02003309',
        '5RN' => 'E02003309',
        '5RP' => 'E02003311',
        '5RQ' => 'E02003309',
        '5RR' => 'E02003311',
        '5RS' => 'E02003309',
        '5RT' => 'E02003309',
        '5RU' => 'E02003311',
        '5RW' => 'E02003309',
        '5RX' => 'E02003309',
        '5RY' => 'E02003309',
        '5RZ' => 'E02003309',
        '5SA' => 'E02003309',
        '5SB' => 'E02003311',
        '5SE' => 'E02003309',
        '5SF' => 'E02003309',
        '5SG' => 'E02003305',
        '5SH' => 'E02003309',
        '5SJ' => 'E02003309',
        '5SL' => 'E02003309',
        '5SN' => 'E02003309',
        '5SP' => 'E02003309',
        '5SR' => 'E02003309',
        '5SS' => 'E02003309',
        '5ST' => 'E02003309',
        '5SU' => 'E02003309',
        '5SW' => 'E02003309',
        '5SX' => 'E02003309',
        '5SY' => 'E02003309',
        '5SZ' => 'E02003309',
        '5TA' => 'E02003309',
        '5TB' => 'E02003309',
        '5TD' => 'E02003309',
        '5TE' => 'E02003309',
        '5TF' => 'E02003309',
        '5TG' => 'E02003309',
        '5TH' => 'E02003309',
        '5TJ' => 'E02003309',
        '5TL' => 'E02003309',
        '5TN' => 'E02003309',
        '5TP' => 'E02003311',
        '5TQ' => 'E02003309',
        '5TR' => 'E02003311',
        '5TS' => 'E02003311',
        '5TT' => 'E02003311',
        '5TU' => 'E02003311',
        '5TW' => 'E02003311',
        '5TX' => 'E02003311',
        '5TY' => 'E02003311',
        '5UA' => 'E02003311',
        '5UB' => 'E02003311',
        '5UD' => 'E02003311',
        '5UE' => 'E02003311',
        '5UH' => 'E02003309',
        '5UJ' => 'E02003311',
        '5UL' => 'E02003311',
        '5UN' => 'E02003311',
        '5UP' => 'E02003311',
        '5UQ' => 'E02003311',
        '5UR' => 'E02003311',
        '5UT' => 'E02003311',
        '5UU' => 'E02003311',
        '5UW' => 'E02003309',
        '5UX' => 'E02003311',
        '5UY' => 'E02003311',
        '5UZ' => 'E02003311',
        '5WA' => 'E02003311',
        '5WB' => 'E02003311',
        '5WD' => 'E02003311',
        '5WE' => 'E02003311',
        '5WF' => 'E02003311',
        '5WG' => 'E02003311',
        '5WH' => 'E02003311',
        '5WJ' => 'E02003311',
        '5WL' => 'E02003311',
        '5WN' => 'E02003311',
        '5WP' => 'E02003311',
        '5WQ' => 'E02003311',
        '5WR' => 'E02003311',
        '5WS' => 'E02003312',
        '5WT' => 'E02003311',
        '5WW' => 'E02003311',
        '5WX' => 'E02003312',
        '5WY' => 'E02003311',
        '5WZ' => 'E02003311',
        '5XA' => 'E02003309',
        '5XB' => 'E02003309',
        '5XD' => 'E02003309',
        '5XE' => 'E02003312',
        '5XF' => 'E02003311',
        '5XG' => 'E02003312',
        '5XH' => 'E02003309',
        '5XJ' => 'E02003304',
        '5XL' => 'E02003311',
        '5XN' => 'E02003312',
        '5XP' => 'E02003311',
        '5XQ' => 'E02003311',
        '5XR' => 'E02003311',
        '5XS' => 'E02003312',
        '5XT' => 'E02003311',
        '5XU' => 'E02003312',
        '5XW' => 'E02003311',
        '5XX' => 'E02003312',
        '5XY' => 'E02003311',
        '5XZ' => 'E02003311',
        '5YA' => 'E02003311',
        '5YB' => 'E02003312',
        '5YD' => 'E02003312',
        '5YE' => 'E02003311',
        '5YF' => 'E02003312',
        '5YG' => 'E02003312',
        '5YH' => 'E02003312',
        '5YJ' => 'E02003312',
        '5YL' => 'E02003311',
        '5YN' => 'E02003311',
        '5YP' => 'E02003312',
        '5YQ' => 'E02003312',
        '5YR' => 'E02003312',
        '5YS' => 'E02003312',
        '5YT' => 'E02003312',
        '5YU' => 'E02003310',
        '5YW' => 'E02003311',
        '5YX' => 'E02003312',
        '5YY' => 'E02003311',
        '5YZ' => 'E02003311',
        '6AA' => 'E02003309',
        '6AB' => 'E02003309',
        '6AD' => 'E02003309',
        '6AE' => 'E02003309',
        '6AF' => 'E02003309',
        '6AG' => 'E02003309',
        '6AH' => 'E02003312',
        '6AJ' => 'E02003309',
        '6AL' => 'E02003311',
        '6AN' => 'E02003309',
        '6AP' => 'E02003309',
        '6AQ' => 'E02003309',
        '6AR' => 'E02003309',
        '6AS' => 'E02003309',
        '6AT' => 'E02003309',
        '6AU' => 'E02003309',
        '6AW' => 'E02003309',
        '6AX' => 'E02003309',
        '6AY' => 'E02003309',
        '6AZ' => 'E02003309',
        '6BA' => 'E02003309',
        '6BB' => 'E02003311',
        '6BD' => 'E02003309',
        '6BE' => 'E02003309',
        '6BF' => 'E02003309',
        '6BG' => 'E02003312',
        '6BH' => 'E02003309',
        '6BJ' => 'E02003312',
        '6BL' => 'E02003312',
        '6BN' => 'E02003311',
        '6BP' => 'E02003312',
        '6BQ' => 'E02003312',
        '6BS' => 'E02003312',
        '6BT' => 'E02003312',
        '6BU' => 'E02003311',
        '6BW' => 'E02003312',
        '6BX' => 'E02003312',
        '6BY' => 'E02003312',
        '6BZ' => 'E02003312',
        '6DA' => 'E02003311',
        '6DB' => 'E02003311',
        '6DD' => 'E02003309',
        '6DE' => 'E02003311',
        '6DF' => 'E02003311',
        '6DG' => 'E02003311',
        '6DH' => 'E02003311',
        '6DJ' => 'E02003311',
        '6DL' => 'E02003311',
        '6DN' => 'E02003311',
        '6DP' => 'E02003312',
        '6DQ' => 'E02003311',
        '6DR' => 'E02003312',
        '6DS' => 'E02003312',
        '6DT' => 'E02003312',
        '6DU' => 'E02003309',
        '6DW' => 'E02003311',
        '6DX' => 'E02003311',
        '6DY' => 'E02003311',
        '6DZ' => 'E02003311',
        '6EA' => 'E02003309',
        '6EB' => 'E02003311',
        '6ED' => 'E02003311',
        '6EE' => 'E02003311',
        '6EF' => 'E02003311',
        '6EG' => 'E02003311',
        '6EH' => 'E02003311',
        '6EJ' => 'E02003311',
        '6EL' => 'E02003312',
        '6EN' => 'E02003311',
        '6EP' => 'E02003309',
        '6EQ' => 'E02003311',
        '6ER' => 'E02003309',
        '6ES' => 'E02003309',
        '6ET' => 'E02003309',
        '6EU' => 'E02003309',
        '6EW' => 'E02003311',
        '6EX' => 'E02003309',
        '6EY' => 'E02003309',
        '6EZ' => 'E02003309',
        '6FA' => 'E02003312',
        '6FB' => 'E02003312',
        '6FD' => 'E02003311',
        '6FE' => 'E02003312',
        '6FF' => 'E02003309',
        '6FG' => 'E02003309',
        '6FH' => 'E02003312',
        '6FJ' => 'E02003312',
        '6FL' => 'E02003309',
        '6FN' => 'E02003312',
        '6FP' => 'E02003311',
        '6FQ' => 'E02003312',
        '6FX' => 'E02003311',
        '6FY' => 'E02003312',
        '6FZ' => 'E02003311',
        '6GD' => 'E02003312',
        '6GE' => 'E02003311',
        '6GF' => 'E02003311',
        '6GG' => 'E02003312',
        '6GH' => 'E02003311',
        '6GJ' => 'E02003311',
        '6GL' => 'E02003311',
        '6GN' => 'E02003311',
        '6GP' => 'E02003311',
        '6GR' => 'E02003311',
        '6GT' => 'E02003312',
        '6GU' => 'E02003311',
        '6GW' => 'E02003311',
        '6GX' => 'E02003311',
        '6GY' => 'E02003311',
        '6GZ' => 'E02003309',
        '6HA' => 'E02003309',
        '6HB' => 'E02003309',
        '6HD' => 'E02003309',
        '6HE' => 'E02003312',
        '6HF' => 'E02003312',
        '6HG' => 'E02003312',
        '6HH' => 'E02003307',
        '6HJ' => 'E02003312',
        '6HL' => 'E02003312',
        '6HN' => 'E02003311',
        '6HP' => 'E02003309',
        '6HQ' => 'E02003312',
        '6HR' => 'E02003312',
        '6HS' => 'E02003309',
        '6HT' => 'E02003311',
        '6HU' => 'E02003312',
        '6HW' => 'E02003309',
        '6HX' => 'E02003312',
        '6HY' => 'E02003309',
        '6HZ' => 'E02003312',
        '6JA' => 'E02003309',
        '6JB' => 'E02003312',
        '6JD' => 'E02003312',
        '6JE' => 'E02003312',
        '6JF' => 'E02003312',
        '6JG' => 'E02003312',
        '6JH' => 'E02003312',
        '6JJ' => 'E02003312',
        '6JL' => 'E02003311',
        '6JN' => 'E02003311',
        '6JP' => 'E02003312',
        '6JQ' => 'E02003311',
        '6JR' => 'E02003312',
        '6JS' => 'E02003311',
        '6JT' => 'E02003312',
        '6JU' => 'E02003312',
        '6JW' => 'E02003312',
        '6JX' => 'E02003311',
        '6JY' => 'E02003311',
        '6JZ' => 'E02003311',
        '6LA' => 'E02003311',
        '6LB' => 'E02003311',
        '6LD' => 'E02003311',
        '6LE' => 'E02003312',
        '6LF' => 'E02003312',
        '6LH' => 'E02003311',
        '6LJ' => 'E02003309',
        '6LL' => 'E02003312',
        '6LN' => 'E02003312',
        '6LP' => 'E02003312',
        '6LQ' => 'E02003311',
        '6LR' => 'E02003312',
        '6LS' => 'E02003312',
        '6LT' => 'E02003311',
        '6LU' => 'E02003311',
        '6LW' => 'E02003312',
        '6LX' => 'E02003312',
        '6LY' => 'E02003311',
        '6LZ' => 'E02003312',
        '6NA' => 'E02003312',
        '6NB' => 'E02003312',
        '6ND' => 'E02003312',
        '6NE' => 'E02003311',
        '6NF' => 'E02003312',
        '6NG' => 'E02003312',
        '6NH' => 'E02003312',
        '6NJ' => 'E02003312',
        '6NL' => 'E02003312',
        '6NN' => 'E02003312',
        '6NP' => 'E02003312',
        '6NQ' => 'E02003312',
        '6NR' => 'E02003312',
        '6NS' => 'E02003312',
        '6NT' => 'E02003312',
        '6NU' => 'E02003312',
        '6NW' => 'E02003312',
        '6NX' => 'E02003312',
        '6NY' => 'E02003312',
        '6NZ' => 'E02003312',
        '6PA' => 'E02003312',
        '6PB' => 'E02003312',
        '6PD' => 'E02003312',
        '6PE' => 'E02003312',
        '6PF' => 'E02003312',
        '6PG' => 'E02003312',
        '6PH' => 'E02003312',
        '6PJ' => 'E02003312',
        '6PL' => 'E02003312',
        '6PN' => 'E02003312',
        '6PP' => 'E02003312',
        '6PQ' => 'E02003312',
        '6PR' => 'E02003312',
        '6PS' => 'E02003312',
        '6PT' => 'E02003311',
        '6PU' => 'E02003311',
        '6PW' => 'E02003312',
        '6PX' => 'E02003312',
        '6PY' => 'E02003311',
        '6PZ' => 'E02003311',
        '6QA' => 'E02003312',
        '6QB' => 'E02003312',
        '6QD' => 'E02003311',
        '6QE' => 'E02003312',
        '6QF' => 'E02003312',
        '6QG' => 'E02003312',
        '6QH' => 'E02003312',
        '6QJ' => 'E02003311',
        '6QL' => 'E02003311',
        '6QN' => 'E02003312',
        '6QP' => 'E02003312',
        '6QQ' => 'E02003311',
        '6QR' => 'E02003312',
        '6QS' => 'E02003311',
        '6QT' => 'E02003312',
        '6QU' => 'E02003312',
        '6QW' => 'E02003311',
        '6QX' => 'E02003311',
        '6QY' => 'E02003311',
        '6QZ' => 'E02003311',
        '6RA' => 'E02003311',
        '6RB' => 'E02003311',
        '6RD' => 'E02003311',
        '6RE' => 'E02003312',
        '6RF' => 'E02003312',
        '6RG' => 'E02003312',
        '6RH' => 'E02003311',
        '6RJ' => 'E02003312',
        '6RL' => 'E02003311',
        '6RN' => 'E02003312',
        '6RP' => 'E02003312',
        '6RQ' => 'E02003311',
        '6RR' => 'E02003312',
        '6RS' => 'E02003312',
        '6RT' => 'E02003312',
        '6RU' => 'E02003311',
        '6RW' => 'E02003312',
        '6RX' => 'E02003311',
        '6RY' => 'E02003312',
        '6RZ' => 'E02003312',
        '6SA' => 'E02003311',
        '6SB' => 'E02003312',
        '6SD' => 'E02003312',
        '6SE' => 'E02003312',
        '6SF' => 'E02003312',
        '6SG' => 'E02003312',
        '6SH' => 'E02003309',
        '6SJ' => 'E02003311',
        '6SL' => 'E02003312',
        '6SN' => 'E02003311',
        '6SP' => 'E02003311',
        '6SQ' => 'E02003311',
        '6SR' => 'E02003311',
        '6SS' => 'E02003309',
        '6ST' => 'E02003309',
        '6SU' => 'E02003309',
        '6SW' => 'E02003311',
        '6SX' => 'E02003309',
        '6SY' => 'E02003309',
        '6SZ' => 'E02003312',
        '6TA' => 'E02003312',
        '6TB' => 'E02003309',
        '6TD' => 'E02003311',
        '6TE' => 'E02003311',
        '6TF' => 'E02003312',
        '6TG' => 'E02003312',
        '6TJ' => 'E02003311',
        '6TL' => 'E02003311',
        '6TN' => 'E02003313',
        '6TP' => 'E02003313',
        '6TQ' => 'E02003311',
        '6TR' => 'E02003313',
        '6TS' => 'E02003309',
        '6TT' => 'E02003313',
        '6TU' => 'E02003313',
        '6TW' => 'E02003313',
        '6TX' => 'E02003313',
        '6TY' => 'E02003309',
        '6TZ' => 'E02003313',
        '6UA' => 'E02003313',
        '6UB' => 'E02003313',
        '6UD' => 'E02003313',
        '6UE' => 'E02003311',
        '6UG' => 'E02003309',
        '6UH' => 'E02003313',
        '6UJ' => 'E02003313',
        '6UL' => 'E02003313',
        '6UN' => 'E02003309',
        '6UP' => 'E02003313',
        '6UQ' => 'E02003309',
        '6UR' => 'E02003313',
        '6UT' => 'E02003313',
        '6UU' => 'E02003313',
        '6UW' => 'E02003309',
        '6UX' => 'E02003313',
        '6UY' => 'E02003312',
        '6UZ' => 'E02003312',
        '6WA' => 'E02003311',
        '6WB' => 'E02003312',
        '6WD' => 'E02003311',
        '6WE' => 'E02003311',
        '6WF' => 'E02003311',
        '6WG' => 'E02003311',
        '6WH' => 'E02003311',
        '6WJ' => 'E02003311',
        '6WL' => 'E02003311',
        '6WN' => 'E02003311',
        '6WP' => 'E02003311',
        '6WQ' => 'E02003311',
        '6WR' => 'E02003311',
        '6WS' => 'E02003311',
        '6WT' => 'E02003311',
        '6WU' => 'E02003311',
        '6WW' => 'E02003311',
        '6WX' => 'E02003311',
        '6WY' => 'E02003311',
        '6WZ' => 'E02003311',
        '6XA' => 'E02003313',
        '6XB' => 'E02003313',
        '6XD' => 'E02003311',
        '6XE' => 'E02003311',
        '6XF' => 'E02003311',
        '6XG' => 'E02003312',
        '6XH' => 'E02003311',
        '6XJ' => 'E02003309',
        '6XL' => 'E02003313',
        '6XP' => 'E02003312',
        '6XQ' => 'E02003311',
        '6XR' => 'E02003312',
        '6XT' => 'E02003311',
        '6XU' => 'E02003311',
        '6XW' => 'E02003311',
        '6XX' => 'E02003311',
        '6XY' => 'E02003311',
        '6XZ' => 'E02003311',
        '6YE' => 'E02003311',
        '6YF' => 'E02003311',
        '6YL' => 'E02003311',
        '6YQ' => 'E02003311',
        '6YR' => 'E02003311',
        '6YT' => 'E02003311',
        '6YU' => 'E02003311',
        '6YW' => 'E02003311',
        '6YX' => 'E02003311',
        '6YY' => 'E02003312',
        '6YZ' => 'E02003311',
        '9AA' => 'E02003311',
        '9AB' => 'E02003311',
        '9AD' => 'E02003311',
        '9AE' => 'E02003311',
        '9AF' => 'E02003311',
        '9AG' => 'E02003311',
        '9AH' => 'E02003311',
        '9AJ' => 'E02003311',
        '9AL' => 'E02003311',
        '9AN' => 'E02003311',
        '9AP' => 'E02003311',
        '9AQ' => 'E02003311',
        '9AR' => 'E02003311',
        '9AS' => 'E02003311',
        '9AT' => 'E02003311',
        '9AU' => 'E02003311',
        '9AW' => 'E02003311',
        '9AX' => 'E02003311',
        '9AY' => 'E02003311',
        '9AZ' => 'E02003311',
        '9BA' => 'E02003311',
        '9BB' => 'E02003311',
        '9BD' => 'E02003311',
        '9BE' => 'E02003311',
        '9BF' => 'E02003311',
        '9BG' => 'E02003311',
        '9BH' => 'E02003311',
        '9BJ' => 'E02003311',
        '9BL' => 'E02003311',
        '9BN' => 'E02003311',
        '9BP' => 'E02003311',
        '9BQ' => 'E02003311',
        '9BR' => 'E02003311',
        '9BS' => 'E02003311',
        '9BT' => 'E02003311',
        '9BU' => 'E02003311',
        '9BW' => 'E02003311',
        '9BX' => 'E02003311',
        '9BY' => 'E02003311',
        '9BZ' => 'E02003311',
        '9DA' => 'E02003311',
        '9DB' => 'E02003311',
        '9DD' => 'E02003311',
        '9DE' => 'E02003311',
        '9DF' => 'E02003311',
        '9DG' => 'E02003311',
        '9DH' => 'E02003311',
        '9DJ' => 'E02003311',
        '9DL' => 'E02003311',
        '9DN' => 'E02003311',
        '9DP' => 'E02003311',
        '9DQ' => 'E02003311',
        '9DR' => 'E02003311',
        '9DS' => 'E02003311',
        '9DT' => 'E02003311',
        '9DU' => 'E02003311',
        '9DW' => 'E02003311',
        '9DX' => 'E02003311',
        '9DY' => 'E02003311',
        '9DZ' => 'E02003311',
        '9EA' => 'E02003311',
        '9EB' => 'E02003311',
        '9ED' => 'E02003311',
        '9EE' => 'E02003311',
        '9EF' => 'E02003311',
        '9EG' => 'E02003311',
        '9EH' => 'E02003311',
        '9EJ' => 'E02003311',
        '9EL' => 'E02003311',
        '9EN' => 'E02003311',
        '9EP' => 'E02003311',
        '9EQ' => 'E02003311',
        '9ER' => 'E02003311',
        '9ES' => 'E02003311',
        '9ET' => 'E02003311',
        '9EU' => 'E02003311',
        '9EW' => 'E02003311',
        '9EX' => 'E02003311',
        '9EY' => 'E02003311',
        '9EZ' => 'E02003311',
        '9FA' => 'E02003311',
        '9FB' => 'E02003311',
        '9FD' => 'E02003311',
        '9FE' => 'E02003311',
        '9FF' => 'E02003311',
        '9FG' => 'E02003311',
        '9FH' => 'E02003311',
        '9FJ' => 'E02003311',
        '9FL' => 'E02003311',
        '9FN' => 'E02003311',
        '9FP' => 'E02003311',
        '9FQ' => 'E02003311',
        '9FR' => 'E02003311',
        '9FT' => 'E02003311',
        '9FU' => 'E02003311',
        '9FW' => 'E02003311',
        '9FX' => 'E02003311',
        '9FY' => 'E02003311',
        '9FZ' => 'E02003311',
        '9GA' => 'E02003311',
        '9GB' => 'E02003311',
        '9GD' => 'E02003311',
        '9GE' => 'E02003311',
        '9GF' => 'E02003311',
        '9GG' => 'E02003311',
        '9GH' => 'E02003311',
        '9GJ' => 'E02003311',
        '9GL' => 'E02003311',
        '9GN' => 'E02003311',
        '9GP' => 'E02003311',
        '9GQ' => 'E02003311',
        '9GR' => 'E02003311',
        '9GS' => 'E02003311',
        '9GT' => 'E02003311',
        '9GU' => 'E02003311',
        '9GW' => 'E02003311',
        '9GX' => 'E02003311',
        '9GY' => 'E02003311',
        '9GZ' => 'E02003311',
        '9HA' => 'E02003311',
        '9HB' => 'E02003311',
        '9HD' => 'E02003311',
        '9HE' => 'E02003311',
        '9HF' => 'E02003311',
        '9HG' => 'E02003311',
        '9HH' => 'E02003311',
        '9HJ' => 'E02003311',
        '9HL' => 'E02003311',
        '9HN' => 'E02003311',
        '9HP' => 'E02003311',
        '9HQ' => 'E02003311',
        '9HR' => 'E02003311',
        '9HS' => 'E02003311',
        '9HT' => 'E02003311',
        '9HU' => 'E02003311',
        '9HW' => 'E02003311',
        '9HX' => 'E02003311',
        '9HY' => 'E02003311',
        '9HZ' => 'E02003311',
        '9JA' => 'E02003311',
        '9JB' => 'E02003311',
        '9JD' => 'E02003311',
        '9JE' => 'E02003311',
        '9JF' => 'E02003311',
        '9JG' => 'E02003311',
        '9JH' => 'E02003311',
        '9JJ' => 'E02003311',
        '9JL' => 'E02003311',
        '9JN' => 'E02003311',
        '9JP' => 'E02003311',
        '9JQ' => 'E02003311',
        '9JR' => 'E02003311',
        '9JS' => 'E02003311',
        '9JT' => 'E02003311',
        '9JU' => 'E02003311',
        '9JW' => 'E02003311',
        '9JX' => 'E02003311',
        '9JY' => 'E02003311',
        '9JZ' => 'E02003311',
        '9LA' => 'E02003311',
        '9LB' => 'E02003311',
        '9LD' => 'E02003311',
        '9LE' => 'E02003311',
        '9LF' => 'E02003311',
        '9LG' => 'E02003311',
        '9LH' => 'E02003311',
        '9LJ' => 'E02003311',
        '9LL' => 'E02003311',
        '9LN' => 'E02003311',
        '9LP' => 'E02003311',
        '9LQ' => 'E02003311',
        '9LR' => 'E02003311',
        '9LS' => 'E02003311',
        '9LT' => 'E02003311',
        '9LU' => 'E02003311',
        '9LW' => 'E02003311',
        '9LX' => 'E02003311',
        '9LY' => 'E02003311',
        '9NA' => 'E02003311',
        '9NB' => 'E02003311',
        '9ND' => 'E02003311',
        '9NE' => 'E02003311',
        '9NF' => 'E02003311',
        '9NG' => 'E02003311',
        '9NH' => 'E02003311',
        '9NJ' => 'E02003311',
        '9NL' => 'E02003311',
        '9NN' => 'E02003311',
        '9NP' => 'E02003311',
        '9NQ' => 'E02003311',
        '9NR' => 'E02003311',
        '9NS' => 'E02003311',
        '9NT' => 'E02003311',
        '9NU' => 'E02003311',
        '9NW' => 'E02003311',
        '9NX' => 'E02003311',
        '9NY' => 'E02003311',
        '9NZ' => 'E02003311',
        '9PA' => 'E02003311',
        '9PB' => 'E02003311',
        '9PD' => 'E02003311',
        '9PE' => 'E02003311',
        '9PF' => 'E02003311',
        '9PG' => 'E02003311',
        '9PH' => 'E02003311',
        '9SA' => 'E02003312',
        '9SB' => 'E02003312',
        '9SD' => 'E02003312',
        '9SE' => 'E02003312',
        '9SF' => 'E02003312',
        '9SG' => 'E02003312',
        '9SH' => 'E02003312',
        '9SJ' => 'E02003312',
        '9SL' => 'E02003312',
        '9SN' => 'E02003312',
        '9SP' => 'E02003312',
        '9SQ' => 'E02003312',
        '9SR' => 'E02003312',
        '9SS' => 'E02003312',
        '9ST' => 'E02003312',
        '9SU' => 'E02003312',
        '9SW' => 'E02003312',
        '9SX' => 'E02003312',
        '9SY' => 'E02003312',
        '9SZ' => 'E02003312',
        '9TA' => 'E02003312',
        '9TB' => 'E02003312',
        '9TD' => 'E02003312',
        '9ZZ' => 'E02003311',
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
