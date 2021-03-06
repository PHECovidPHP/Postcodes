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
final class TQ9
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '5AA' => 'E02004191',
        '5AB' => 'E02004191',
        '5AD' => 'E02004191',
        '5AE' => 'E02004191',
        '5AF' => 'E02004191',
        '5AG' => 'E02004191',
        '5AH' => 'E02004191',
        '5AJ' => 'E02004191',
        '5AL' => 'E02004191',
        '5AN' => 'E02004191',
        '5AP' => 'E02004191',
        '5AQ' => 'E02004191',
        '5AR' => 'E02004191',
        '5AS' => 'E02004191',
        '5AT' => 'E02004191',
        '5AU' => 'E02004191',
        '5AW' => 'E02004191',
        '5AX' => 'E02004191',
        '5AY' => 'E02004191',
        '5AZ' => 'E02004191',
        '5BA' => 'E02004191',
        '5BB' => 'E02004191',
        '5BD' => 'E02004191',
        '5BE' => 'E02004191',
        '5BG' => 'E02004191',
        '5BH' => 'E02004191',
        '5BJ' => 'E02004191',
        '5BL' => 'E02004191',
        '5BN' => 'E02004191',
        '5BP' => 'E02004191',
        '5BQ' => 'E02004191',
        '5BS' => 'E02004191',
        '5BT' => 'E02004191',
        '5BU' => 'E02004191',
        '5BW' => 'E02004191',
        '5BX' => 'E02004191',
        '5BY' => 'E02004191',
        '5BZ' => 'E02004191',
        '5DA' => 'E02004191',
        '5DB' => 'E02004191',
        '5DD' => 'E02004191',
        '5DE' => 'E02004191',
        '5DF' => 'E02004191',
        '5DG' => 'E02004191',
        '5DH' => 'E02004191',
        '5DJ' => 'E02004191',
        '5DL' => 'E02004191',
        '5DN' => 'E02004191',
        '5DP' => 'E02004191',
        '5DQ' => 'E02004191',
        '5DR' => 'E02004191',
        '5DS' => 'E02004191',
        '5DT' => 'E02004191',
        '5DU' => 'E02004191',
        '5DW' => 'E02004191',
        '5DX' => 'E02004191',
        '5DY' => 'E02004191',
        '5DZ' => 'E02004191',
        '5EA' => 'E02004191',
        '5EB' => 'E02004191',
        '5ED' => 'E02004191',
        '5EE' => 'E02004191',
        '5EF' => 'E02004191',
        '5EG' => 'E02004191',
        '5EH' => 'E02004191',
        '5EJ' => 'E02004191',
        '5EL' => 'E02004191',
        '5EN' => 'E02004191',
        '5EP' => 'E02004191',
        '5EQ' => 'E02004191',
        '5ER' => 'E02004191',
        '5ES' => 'E02004191',
        '5ET' => 'E02004191',
        '5EU' => 'E02004191',
        '5EW' => 'E02004191',
        '5EX' => 'E02004191',
        '5EY' => 'E02004191',
        '5EZ' => 'E02004191',
        '5FA' => 'E02004191',
        '5FB' => 'E02004191',
        '5FD' => 'E02004191',
        '5FE' => 'E02004191',
        '5FF' => 'E02004191',
        '5FG' => 'E02004191',
        '5FH' => 'E02004191',
        '5FJ' => 'E02004191',
        '5FL' => 'E02004191',
        '5FN' => 'E02004191',
        '5FP' => 'E02004191',
        '5FQ' => 'E02004191',
        '5FR' => 'E02004191',
        '5FS' => 'E02004191',
        '5FT' => 'E02004191',
        '5FW' => 'E02004191',
        '5FX' => 'E02004191',
        '5FY' => 'E02004191',
        '5FZ' => 'E02004191',
        '5GA' => 'E02004191',
        '5GB' => 'E02004191',
        '5GD' => 'E02004191',
        '5GE' => 'E02004191',
        '5GF' => 'E02004191',
        '5GG' => 'E02004191',
        '5GH' => 'E02004191',
        '5GJ' => 'E02004191',
        '5GL' => 'E02004191',
        '5GN' => 'E02004191',
        '5GP' => 'E02004191',
        '5GQ' => 'E02004191',
        '5GR' => 'E02004191',
        '5GS' => 'E02004191',
        '5GT' => 'E02004191',
        '5GU' => 'E02004191',
        '5GW' => 'E02004191',
        '5GX' => 'E02004191',
        '5GY' => 'E02004191',
        '5GZ' => 'E02004191',
        '5HA' => 'E02004191',
        '5HB' => 'E02004191',
        '5HD' => 'E02004191',
        '5HE' => 'E02004191',
        '5HF' => 'E02004191',
        '5HG' => 'E02004191',
        '5HH' => 'E02004191',
        '5HJ' => 'E02004191',
        '5HL' => 'E02004191',
        '5HN' => 'E02004191',
        '5HP' => 'E02004191',
        '5HQ' => 'E02004191',
        '5HR' => 'E02004191',
        '5HS' => 'E02004191',
        '5HT' => 'E02004191',
        '5HU' => 'E02004191',
        '5HW' => 'E02004191',
        '5HX' => 'E02004191',
        '5HY' => 'E02004191',
        '5HZ' => 'E02004191',
        '5JA' => 'E02004191',
        '5JB' => 'E02004191',
        '5JD' => 'E02004191',
        '5JE' => 'E02004191',
        '5JF' => 'E02004191',
        '5JG' => 'E02004191',
        '5JH' => 'E02004191',
        '5JJ' => 'E02004191',
        '5JL' => 'E02004191',
        '5JN' => 'E02004191',
        '5JP' => 'E02004191',
        '5JQ' => 'E02004191',
        '5JR' => 'E02004191',
        '5JS' => 'E02004191',
        '5JT' => 'E02004191',
        '5JU' => 'E02004191',
        '5JW' => 'E02004191',
        '5JX' => 'E02004191',
        '5JY' => 'E02004191',
        '5JZ' => 'E02004191',
        '5LA' => 'E02004191',
        '5LB' => 'E02004191',
        '5LD' => 'E02004191',
        '5LE' => 'E02004191',
        '5LF' => 'E02004191',
        '5LG' => 'E02004191',
        '5LH' => 'E02004191',
        '5LJ' => 'E02004191',
        '5LL' => 'E02004191',
        '5LN' => 'E02004191',
        '5LP' => 'E02004191',
        '5LQ' => 'E02004191',
        '5LR' => 'E02004191',
        '5LS' => 'E02004191',
        '5LT' => 'E02004191',
        '5LU' => 'E02004191',
        '5LW' => 'E02004191',
        '5LX' => 'E02004191',
        '5LY' => 'E02004191',
        '5LZ' => 'E02004191',
        '5NA' => 'E02004191',
        '5NB' => 'E02004191',
        '5ND' => 'E02004191',
        '5NE' => 'E02004191',
        '5NF' => 'E02004191',
        '5NG' => 'E02004191',
        '5NH' => 'E02004191',
        '5NJ' => 'E02004191',
        '5NL' => 'E02004191',
        '5NN' => 'E02004191',
        '5NP' => 'E02004191',
        '5NQ' => 'E02004191',
        '5NR' => 'E02004191',
        '5NS' => 'E02004191',
        '5NT' => 'E02004191',
        '5NU' => 'E02004191',
        '5NW' => 'E02004191',
        '5NX' => 'E02004191',
        '5NY' => 'E02004191',
        '5NZ' => 'E02004191',
        '5PA' => 'E02004191',
        '5PB' => 'E02004191',
        '5PD' => 'E02004191',
        '5PE' => 'E02004191',
        '5PF' => 'E02004191',
        '5PG' => 'E02004191',
        '5PH' => 'E02004191',
        '5PJ' => 'E02004191',
        '5PL' => 'E02004191',
        '5PN' => 'E02004191',
        '5PP' => 'E02004191',
        '5PQ' => 'E02004191',
        '5PR' => 'E02004191',
        '5PS' => 'E02004191',
        '5PT' => 'E02004191',
        '5PU' => 'E02004191',
        '5PW' => 'E02004191',
        '5PX' => 'E02004191',
        '5PY' => 'E02004191',
        '5PZ' => 'E02004191',
        '5QA' => 'E02004191',
        '5QB' => 'E02004191',
        '5QD' => 'E02004191',
        '5QE' => 'E02004191',
        '5QF' => 'E02004191',
        '5QG' => 'E02004191',
        '5QH' => 'E02004191',
        '5QJ' => 'E02004191',
        '5QL' => 'E02004191',
        '5QN' => 'E02004191',
        '5QP' => 'E02004191',
        '5QQ' => 'E02004191',
        '5QR' => 'E02004191',
        '5QS' => 'E02004191',
        '5QT' => 'E02004191',
        '5QU' => 'E02004191',
        '5QW' => 'E02004191',
        '5QX' => 'E02004191',
        '5QY' => 'E02004191',
        '5QZ' => 'E02004191',
        '5RA' => 'E02004191',
        '5RB' => 'E02004191',
        '5RD' => 'E02004191',
        '5RE' => 'E02004191',
        '5RF' => 'E02004191',
        '5RG' => 'E02004191',
        '5RH' => 'E02004191',
        '5RJ' => 'E02004191',
        '5RL' => 'E02004191',
        '5RN' => 'E02004191',
        '5RP' => 'E02004191',
        '5RQ' => 'E02004191',
        '5RR' => 'E02004191',
        '5RS' => 'E02004191',
        '5RT' => 'E02004191',
        '5RU' => 'E02004191',
        '5RW' => 'E02004191',
        '5RX' => 'E02004191',
        '5RY' => 'E02004191',
        '5RZ' => 'E02004191',
        '5SA' => 'E02004191',
        '5SB' => 'E02004191',
        '5SD' => 'E02004191',
        '5SE' => 'E02004191',
        '5SF' => 'E02004191',
        '5SG' => 'E02004191',
        '5SH' => 'E02004191',
        '5SJ' => 'E02004191',
        '5SL' => 'E02004191',
        '5SN' => 'E02004191',
        '5SP' => 'E02004191',
        '5SQ' => 'E02004191',
        '5SR' => 'E02004191',
        '5SS' => 'E02004191',
        '5ST' => 'E02004191',
        '5SU' => 'E02004191',
        '5SW' => 'E02004191',
        '5SX' => 'E02004191',
        '5SY' => 'E02004191',
        '5SZ' => 'E02004191',
        '5TA' => 'E02004191',
        '5TB' => 'E02004191',
        '5TD' => 'E02004191',
        '5TE' => 'E02004191',
        '5TF' => 'E02004191',
        '5TG' => 'E02004191',
        '5TH' => 'E02004191',
        '5TJ' => 'E02004191',
        '5TL' => 'E02004191',
        '5TN' => 'E02004191',
        '5TP' => 'E02004191',
        '5TQ' => 'E02004191',
        '5TR' => 'E02004191',
        '5TS' => 'E02004191',
        '5TT' => 'E02004191',
        '5TU' => 'E02004191',
        '5TW' => 'E02004191',
        '5TX' => 'E02004191',
        '5TY' => 'E02004191',
        '5TZ' => 'E02004191',
        '5UA' => 'E02004191',
        '5UB' => 'E02004191',
        '5UD' => 'E02004191',
        '5UE' => 'E02004191',
        '5UF' => 'E02004191',
        '5UG' => 'E02004191',
        '5UH' => 'E02004191',
        '5UJ' => 'E02004191',
        '5UL' => 'E02004191',
        '5UN' => 'E02004191',
        '5UP' => 'E02004191',
        '5UQ' => 'E02004191',
        '5UR' => 'E02004191',
        '5US' => 'E02004191',
        '5UT' => 'E02004191',
        '5UU' => 'E02004191',
        '5UW' => 'E02004191',
        '5UX' => 'E02004191',
        '5UY' => 'E02004191',
        '5UZ' => 'E02004191',
        '5WA' => 'E02004191',
        '5WB' => 'E02004191',
        '5WD' => 'E02004191',
        '5WE' => 'E02004191',
        '5WF' => 'E02004191',
        '5WG' => 'E02004191',
        '5WH' => 'E02004191',
        '5WJ' => 'E02004191',
        '5WL' => 'E02004191',
        '5WN' => 'E02004191',
        '5WP' => 'E02004191',
        '5WQ' => 'E02004191',
        '5WR' => 'E02004191',
        '5WS' => 'E02004191',
        '5WT' => 'E02004191',
        '5WU' => 'E02004191',
        '5WW' => 'E02004191',
        '5WX' => 'E02004191',
        '5WY' => 'E02004191',
        '5WZ' => 'E02004191',
        '5XA' => 'E02004191',
        '5XB' => 'E02004191',
        '5XD' => 'E02004191',
        '5XE' => 'E02004191',
        '5XF' => 'E02004191',
        '5XG' => 'E02004191',
        '5XH' => 'E02004191',
        '5XJ' => 'E02004191',
        '5XL' => 'E02004191',
        '5XN' => 'E02004191',
        '5XP' => 'E02004191',
        '5XQ' => 'E02004191',
        '5XR' => 'E02004191',
        '5XS' => 'E02004191',
        '5XT' => 'E02004191',
        '5XU' => 'E02004191',
        '5XW' => 'E02004191',
        '5XX' => 'E02004191',
        '5XY' => 'E02004191',
        '5XZ' => 'E02004191',
        '5YA' => 'E02004191',
        '5YB' => 'E02004191',
        '5YD' => 'E02004191',
        '5YE' => 'E02004191',
        '5YF' => 'E02004191',
        '5YG' => 'E02004191',
        '5YH' => 'E02004191',
        '5YJ' => 'E02004191',
        '5YL' => 'E02004191',
        '5YN' => 'E02004191',
        '5YP' => 'E02004191',
        '5YQ' => 'E02004191',
        '5YR' => 'E02004191',
        '5YS' => 'E02004191',
        '5YT' => 'E02004191',
        '5YU' => 'E02004191',
        '5YW' => 'E02004191',
        '5YX' => 'E02004191',
        '5YY' => 'E02004191',
        '5YZ' => 'E02004191',
        '5ZA' => 'E02004191',
        '5ZB' => 'E02004191',
        '5ZD' => 'E02004191',
        '5ZE' => 'E02004191',
        '5ZF' => 'E02004191',
        '5ZG' => 'E02004191',
        '5ZH' => 'E02004191',
        '5ZJ' => 'E02004191',
        '5ZL' => 'E02004191',
        '5ZN' => 'E02004191',
        '5ZP' => 'E02004191',
        '5ZQ' => 'E02004191',
        '5ZR' => 'E02004191',
        '5ZS' => 'E02004191',
        '5ZT' => 'E02004191',
        '5ZU' => 'E02004191',
        '5ZW' => 'E02004191',
        '5ZX' => 'E02004191',
        '5ZY' => 'E02004191',
        '6AA' => 'E02004194',
        '6AB' => 'E02004194',
        '6AD' => 'E02004190',
        '6AE' => 'E02004194',
        '6AF' => 'E02004190',
        '6AG' => 'E02004190',
        '6AH' => 'E02004190',
        '6AJ' => 'E02004190',
        '6AL' => 'E02004190',
        '6AN' => 'E02004190',
        '6AP' => 'E02004190',
        '6AQ' => 'E02004190',
        '6AR' => 'E02004190',
        '6AS' => 'E02004190',
        '6AT' => 'E02004219',
        '6AU' => 'E02004219',
        '6AW' => 'E02004190',
        '6AX' => 'E02004219',
        '6AY' => 'E02004219',
        '6AZ' => 'E02004219',
        '6BA' => 'E02004219',
        '6BB' => 'E02004219',
        '6BD' => 'E02004219',
        '6BE' => 'E02004219',
        '6BG' => 'E02004219',
        '6BH' => 'E02004219',
        '6BJ' => 'E02004219',
        '6BL' => 'E02004219',
        '6BN' => 'E02004219',
        '6BP' => 'E02004219',
        '6BQ' => 'E02004219',
        '6BR' => 'E02004219',
        '6BS' => 'E02004219',
        '6BT' => 'E02004219',
        '6BU' => 'E02004213',
        '6BW' => 'E02004219',
        '6BX' => 'E02004219',
        '6BY' => 'E02004219',
        '6BZ' => 'E02004219',
        '6DA' => 'E02004219',
        '6DB' => 'E02004219',
        '6DD' => 'E02004219',
        '6DE' => 'E02004194',
        '6DF' => 'E02004219',
        '6DG' => 'E02004194',
        '6DH' => 'E02004194',
        '6DJ' => 'E02004194',
        '6DL' => 'E02004194',
        '6DN' => 'E02004194',
        '6DP' => 'E02004194',
        '6DQ' => 'E02004194',
        '6DR' => 'E02004194',
        '6DS' => 'E02004194',
        '6DT' => 'E02004194',
        '6DU' => 'E02004194',
        '6DW' => 'E02004194',
        '6DX' => 'E02004194',
        '6DY' => 'E02004194',
        '6DZ' => 'E02004194',
        '6EA' => 'E02004194',
        '6EB' => 'E02004194',
        '6ED' => 'E02004194',
        '6EE' => 'E02004194',
        '6EF' => 'E02004194',
        '6EG' => 'E02004194',
        '6EH' => 'E02004194',
        '6EJ' => 'E02004194',
        '6EL' => 'E02004194',
        '6EN' => 'E02004194',
        '6EP' => 'E02004194',
        '6EQ' => 'E02004194',
        '6ER' => 'E02004194',
        '6ES' => 'E02004194',
        '6ET' => 'E02004194',
        '6EU' => 'E02004194',
        '6EW' => 'E02004194',
        '6EX' => 'E02004194',
        '6EY' => 'E02004194',
        '6EZ' => 'E02004194',
        '6FA' => 'E02004191',
        '6FB' => 'E02004194',
        '6FE' => 'E02004190',
        '6FF' => 'E02004192',
        '6FG' => 'E02004192',
        '6FH' => 'E02004192',
        '6FJ' => 'E02004194',
        '6FL' => 'E02004194',
        '6FN' => 'E02004194',
        '6FP' => 'E02004194',
        '6FQ' => 'E02004194',
        '6FR' => 'E02004194',
        '6FS' => 'E02004194',
        '6FT' => 'E02004194',
        '6FU' => 'E02004194',
        '6FW' => 'E02004219',
        '6FX' => 'E02004192',
        '6FY' => 'E02004219',
        '6FZ' => 'E02004192',
        '6GA' => 'E02004194',
        '6GB' => 'E02004219',
        '6GD' => 'E02004192',
        '6GE' => 'E02004192',
        '6GF' => 'E02004192',
        '6GG' => 'E02004192',
        '6GH' => 'E02004194',
        '6GJ' => 'E02004192',
        '6GL' => 'E02004192',
        '6GN' => 'E02004194',
        '6GP' => 'E02004194',
        '6GQ' => 'E02004194',
        '6GR' => 'E02004191',
        '6GS' => 'E02004191',
        '6GT' => 'E02004191',
        '6GU' => 'E02004191',
        '6GW' => 'E02004191',
        '6GX' => 'E02004192',
        '6GY' => 'E02004190',
        '6GZ' => 'E02004194',
        '6HA' => 'E02004194',
        '6HB' => 'E02004194',
        '6HD' => 'E02004194',
        '6HE' => 'E02004194',
        '6HF' => 'E02004194',
        '6HG' => 'E02004194',
        '6HH' => 'E02004194',
        '6HJ' => 'E02004194',
        '6HL' => 'E02004194',
        '6HN' => 'E02004194',
        '6HP' => 'E02004194',
        '6HQ' => 'E02004194',
        '6HR' => 'E02004194',
        '6HS' => 'E02004194',
        '6HT' => 'E02004194',
        '6HU' => 'E02004194',
        '6HW' => 'E02004194',
        '6HX' => 'E02004194',
        '6HY' => 'E02004194',
        '6HZ' => 'E02004194',
        '6JA' => 'E02004194',
        '6JB' => 'E02004194',
        '6JD' => 'E02004194',
        '6JE' => 'E02004194',
        '6JF' => 'E02004194',
        '6JG' => 'E02004194',
        '6JH' => 'E02004194',
        '6JJ' => 'E02004194',
        '6JL' => 'E02004194',
        '6JN' => 'E02004194',
        '6JP' => 'E02004194',
        '6JQ' => 'E02004194',
        '6JR' => 'E02004194',
        '6JS' => 'E02004194',
        '6JT' => 'E02004194',
        '6JU' => 'E02004194',
        '6JW' => 'E02004194',
        '6JX' => 'E02004194',
        '6JY' => 'E02004194',
        '6JZ' => 'E02004194',
        '6LA' => 'E02004192',
        '6LB' => 'E02004192',
        '6LD' => 'E02004191',
        '6LE' => 'E02004192',
        '6LF' => 'E02004192',
        '6LG' => 'E02004192',
        '6LH' => 'E02004192',
        '6LJ' => 'E02004192',
        '6LL' => 'E02004192',
        '6LN' => 'E02004192',
        '6LP' => 'E02004192',
        '6LQ' => 'E02004192',
        '6LR' => 'E02004192',
        '6LS' => 'E02004192',
        '6LT' => 'E02004192',
        '6LU' => 'E02004192',
        '6LW' => 'E02004192',
        '6LX' => 'E02004192',
        '6LY' => 'E02004192',
        '6LZ' => 'E02004192',
        '6NA' => 'E02004192',
        '6NB' => 'E02004192',
        '6ND' => 'E02004192',
        '6NE' => 'E02004219',
        '6NF' => 'E02004192',
        '6NG' => 'E02004219',
        '6NH' => 'E02004192',
        '6NJ' => 'E02004192',
        '6NL' => 'E02004192',
        '6NN' => 'E02004192',
        '6NQ' => 'E02004219',
        '6NR' => 'E02004194',
        '6NS' => 'E02004194',
        '6NT' => 'E02004194',
        '6NU' => 'E02004194',
        '6NW' => 'E02004192',
        '6NX' => 'E02004190',
        '6NY' => 'E02004190',
        '6NZ' => 'E02004190',
        '6PA' => 'E02004190',
        '6PB' => 'E02004190',
        '6PD' => 'E02004190',
        '6PE' => 'E02004190',
        '6PF' => 'E02004190',
        '6PG' => 'E02004190',
        '6PH' => 'E02004190',
        '6PJ' => 'E02004190',
        '6PL' => 'E02004192',
        '6PN' => 'E02004192',
        '6PP' => 'E02004192',
        '6PQ' => 'E02004190',
        '6PR' => 'E02004192',
        '6PS' => 'E02004192',
        '6PT' => 'E02004192',
        '6PU' => 'E02004192',
        '6PW' => 'E02004192',
        '6PX' => 'E02004192',
        '6PY' => 'E02004192',
        '6PZ' => 'E02004192',
        '6QA' => 'E02004192',
        '6QB' => 'E02004192',
        '6QD' => 'E02004192',
        '6QE' => 'E02004192',
        '6QF' => 'E02004192',
        '6QG' => 'E02004192',
        '6QH' => 'E02004192',
        '6QJ' => 'E02004192',
        '6QL' => 'E02004192',
        '6QN' => 'E02004192',
        '6QP' => 'E02004192',
        '6QQ' => 'E02004192',
        '6QR' => 'E02004192',
        '6QS' => 'E02004192',
        '6QT' => 'E02004192',
        '6QU' => 'E02004192',
        '6QW' => 'E02004192',
        '6QX' => 'E02004192',
        '6QY' => 'E02004192',
        '6QZ' => 'E02004192',
        '6RA' => 'E02004192',
        '6RB' => 'E02004192',
        '6RD' => 'E02004192',
        '6RE' => 'E02004192',
        '6RF' => 'E02004192',
        '6RG' => 'E02004192',
        '6RH' => 'E02004192',
        '6RJ' => 'E02004192',
        '6RL' => 'E02004192',
        '6RN' => 'E02004192',
        '6RP' => 'E02004192',
        '6RQ' => 'E02004192',
        '6RR' => 'E02004192',
        '6RS' => 'E02004190',
        '6RT' => 'E02004192',
        '6RU' => 'E02004192',
        '6RW' => 'E02004192',
        '6RX' => 'E02004192',
        '6RY' => 'E02004192',
        '6RZ' => 'E02004192',
        '6SA' => 'E02004192',
        '6SB' => 'E02004192',
        '6SD' => 'E02004192',
        '6SE' => 'E02004192',
        '6SF' => 'E02004192',
        '6SG' => 'E02004194',
        '6SH' => 'E02004192',
        '6SJ' => 'E02004192',
        '6SL' => 'E02004192',
        '6SN' => 'E02004192',
        '6SP' => 'E02004192',
        '6SQ' => 'E02004192',
        '6SR' => 'E02004192',
        '6SS' => 'E02004192',
        '6ST' => 'E02004192',
        '6SU' => 'E02004192',
        '6SW' => 'E02004192',
        '6SX' => 'E02004192',
        '6SY' => 'E02004192',
        '6SZ' => 'E02004192',
        '6TA' => 'E02004194',
        '6TD' => 'E02004192',
        '6TE' => 'E02004194',
        '6TH' => 'E02004194',
        '6TJ' => 'E02004194',
        '6TL' => 'E02004194',
        '6TN' => 'E02004194',
        '6TQ' => 'E02004194',
        '6TR' => 'E02004194',
        '6TS' => 'E02004194',
        '6TT' => 'E02004194',
        '6TW' => 'E02004194',
        '6UA' => 'E02004194',
        '6UB' => 'E02004194',
        '6UD' => 'E02004192',
        '6UE' => 'E02004194',
        '6UF' => 'E02004194',
        '6UQ' => 'E02004194',
        '6WA' => 'E02004194',
        '6WX' => 'E02004191',
        '6WY' => 'E02004191',
        '6WZ' => 'E02004191',
        '6XA' => 'E02004192',
        '6XB' => 'E02004191',
        '6XJ' => 'E02004191',
        '6XP' => 'E02004191',
        '6XT' => 'E02004192',
        '6XU' => 'E02004191',
        '6XW' => 'E02004191',
        '6XX' => 'E02004194',
        '6XY' => 'E02004191',
        '6XZ' => 'E02004192',
        '6YA' => 'E02004191',
        '6YB' => 'E02004191',
        '6YD' => 'E02004192',
        '6YE' => 'E02004191',
        '6YF' => 'E02004191',
        '6YG' => 'E02004191',
        '6YH' => 'E02004192',
        '6YJ' => 'E02004192',
        '6YL' => 'E02004192',
        '6YN' => 'E02004194',
        '6YP' => 'E02004192',
        '6YQ' => 'E02004191',
        '6YR' => 'E02004191',
        '6YS' => 'E02004191',
        '6YT' => 'E02004191',
        '6YU' => 'E02004191',
        '6YW' => 'E02004192',
        '6YX' => 'E02004192',
        '6YY' => 'E02004192',
        '6YZ' => 'E02004192',
        '6ZA' => 'E02004191',
        '6ZB' => 'E02004192',
        '6ZD' => 'E02004192',
        '6ZE' => 'E02004191',
        '6ZF' => 'E02004191',
        '6ZG' => 'E02004191',
        '6ZN' => 'E02004191',
        '6ZP' => 'E02004191',
        '6ZQ' => 'E02004191',
        '6ZW' => 'E02004191',
        '6ZX' => 'E02004191',
        '7AA' => 'E02004192',
        '7AB' => 'E02004192',
        '7AD' => 'E02004192',
        '7AE' => 'E02004192',
        '7AF' => 'E02004192',
        '7AG' => 'E02004199',
        '7AH' => 'E02004192',
        '7AJ' => 'E02004192',
        '7AL' => 'E02004192',
        '7AN' => 'E02004192',
        '7AP' => 'E02004192',
        '7AQ' => 'E02004199',
        '7AR' => 'E02004192',
        '7AS' => 'E02004191',
        '7AT' => 'E02004194',
        '7AU' => 'E02004192',
        '7AW' => 'E02004199',
        '7AX' => 'E02004192',
        '7AY' => 'E02004192',
        '7AZ' => 'E02004192',
        '7BA' => 'E02004192',
        '7BB' => 'E02004192',
        '7BD' => 'E02004192',
        '7BE' => 'E02004192',
        '7BG' => 'E02004192',
        '7BH' => 'E02004192',
        '7BJ' => 'E02004192',
        '7BL' => 'E02004192',
        '7BN' => 'E02004192',
        '7BP' => 'E02004192',
        '7BQ' => 'E02004192',
        '7BS' => 'E02004192',
        '7BT' => 'E02004192',
        '7BU' => 'E02004192',
        '7BW' => 'E02004192',
        '7BX' => 'E02004192',
        '7BY' => 'E02004191',
        '7BZ' => 'E02004192',
        '7DA' => 'E02004192',
        '7DB' => 'E02004192',
        '7DD' => 'E02004192',
        '7DE' => 'E02004192',
        '7DF' => 'E02004192',
        '7DG' => 'E02004192',
        '7DH' => 'E02004192',
        '7DJ' => 'E02004192',
        '7DL' => 'E02004192',
        '7DN' => 'E02004192',
        '7DP' => 'E02004192',
        '7DQ' => 'E02004192',
        '7DR' => 'E02004192',
        '7DT' => 'E02004192',
        '7DU' => 'E02004191',
        '7DW' => 'E02004194',
        '7DX' => 'E02004192',
        '7DY' => 'E02004192',
        '7DZ' => 'E02004192',
        '7EA' => 'E02004192',
        '7EB' => 'E02004192',
        '7ED' => 'E02004192',
        '7EE' => 'E02004192',
        '7EF' => 'E02004194',
        '7EG' => 'E02004192',
        '7EH' => 'E02004192',
        '7EJ' => 'E02004192',
        '7EL' => 'E02004192',
        '7EN' => 'E02004192',
        '7EP' => 'E02004192',
        '7EQ' => 'E02004192',
        '7ER' => 'E02004192',
        '7ES' => 'E02004192',
        '7ET' => 'E02004192',
        '7EU' => 'E02004192',
        '7EW' => 'E02004192',
        '7EX' => 'E02004192',
        '7EY' => 'E02004192',
        '7EZ' => 'E02004192',
        '7FA' => 'E02004200',
        '7FB' => 'E02004194',
        '7FE' => 'E02004192',
        '7FF' => 'E02004192',
        '7FG' => 'E02004194',
        '7FH' => 'E02004194',
        '7FJ' => 'E02004192',
        '7FL' => 'E02004194',
        '7FN' => 'E02004192',
        '7FQ' => 'E02004192',
        '7FR' => 'E02004194',
        '7HA' => 'E02004192',
        '7HB' => 'E02004192',
        '7HD' => 'E02004192',
        '7HE' => 'E02004192',
        '7HF' => 'E02004192',
        '7HG' => 'E02004192',
        '7HH' => 'E02004192',
        '7HJ' => 'E02004192',
        '7HL' => 'E02004192',
        '7HN' => 'E02004192',
        '7HP' => 'E02004192',
        '7HQ' => 'E02004192',
        '7HR' => 'E02004192',
        '7HS' => 'E02004192',
        '7HT' => 'E02004194',
        '7HU' => 'E02004194',
        '7HW' => 'E02004192',
        '7HX' => 'E02004192',
        '7HY' => 'E02004194',
        '7HZ' => 'E02004194',
        '7JA' => 'E02004194',
        '7JB' => 'E02004194',
        '7JD' => 'E02004194',
        '7JE' => 'E02004194',
        '7JF' => 'E02004194',
        '7JG' => 'E02004194',
        '7JH' => 'E02004194',
        '7JJ' => 'E02004194',
        '7JL' => 'E02004194',
        '7JN' => 'E02004194',
        '7JP' => 'E02004194',
        '7JQ' => 'E02004194',
        '7JR' => 'E02004194',
        '7JS' => 'E02004194',
        '7JT' => 'E02004194',
        '7JU' => 'E02004194',
        '7JW' => 'E02004194',
        '7JX' => 'E02004194',
        '7JY' => 'E02004194',
        '7JZ' => 'E02004194',
        '7LA' => 'E02004194',
        '7LB' => 'E02004194',
        '7LD' => 'E02004194',
        '7LE' => 'E02004194',
        '7LF' => 'E02004194',
        '7LG' => 'E02004194',
        '7LH' => 'E02004194',
        '7LJ' => 'E02004194',
        '7LL' => 'E02004194',
        '7LN' => 'E02004194',
        '7LP' => 'E02004194',
        '7LQ' => 'E02004194',
        '7LR' => 'E02004194',
        '7LS' => 'E02004190',
        '7LT' => 'E02004194',
        '7LU' => 'E02004194',
        '7LW' => 'E02004194',
        '7LX' => 'E02004194',
        '7LY' => 'E02004194',
        '7LZ' => 'E02004194',
        '7NA' => 'E02004194',
        '7NB' => 'E02004194',
        '7ND' => 'E02004194',
        '7NE' => 'E02004194',
        '7NF' => 'E02004194',
        '7NG' => 'E02004194',
        '7NH' => 'E02004194',
        '7NJ' => 'E02004194',
        '7NL' => 'E02004194',
        '7NN' => 'E02004194',
        '7NP' => 'E02004194',
        '7NQ' => 'E02004194',
        '7NT' => 'E02004194',
        '7NU' => 'E02004194',
        '7NW' => 'E02004194',
        '7NX' => 'E02004194',
        '7NY' => 'E02004194',
        '7NZ' => 'E02004194',
        '7PA' => 'E02004194',
        '7PB' => 'E02004194',
        '7PD' => 'E02004194',
        '7PE' => 'E02004190',
        '7PF' => 'E02004190',
        '7PG' => 'E02004190',
        '7PH' => 'E02004194',
        '7PJ' => 'E02004194',
        '7PL' => 'E02004194',
        '7PN' => 'E02004191',
        '7PP' => 'E02004194',
        '7PQ' => 'E02004194',
        '7PR' => 'E02004194',
        '7PS' => 'E02004194',
        '7PT' => 'E02004194',
        '7PU' => 'E02004194',
        '7PW' => 'E02004191',
        '7PX' => 'E02004194',
        '7PY' => 'E02004194',
        '7PZ' => 'E02004194',
        '7QA' => 'E02004192',
        '7QB' => 'E02004192',
        '7QD' => 'E02004194',
        '7QE' => 'E02004194',
        '7QF' => 'E02004194',
        '7QG' => 'E02004194',
        '7QH' => 'E02004194',
        '7QJ' => 'E02004194',
        '7QL' => 'E02004194',
        '7QN' => 'E02004194',
        '7QP' => 'E02004200',
        '7QQ' => 'E02004200',
        '7QR' => 'E02004194',
        '7QS' => 'E02004194',
        '7QT' => 'E02004194',
        '7QU' => 'E02004194',
        '7QW' => 'E02004194',
        '7QX' => 'E02004194',
        '7QY' => 'E02004194',
        '7QZ' => 'E02004194',
        '7RA' => 'E02004194',
        '7RB' => 'E02004194',
        '7RD' => 'E02004194',
        '7RE' => 'E02004194',
        '7RF' => 'E02004194',
        '7RG' => 'E02004200',
        '7RH' => 'E02004194',
        '7RJ' => 'E02004194',
        '7RL' => 'E02004194',
        '7RN' => 'E02004199',
        '7RP' => 'E02004194',
        '7RQ' => 'E02004194',
        '7RR' => 'E02004194',
        '7RS' => 'E02004194',
        '7RT' => 'E02004194',
        '7RU' => 'E02004194',
        '7RW' => 'E02004194',
        '7RX' => 'E02004191',
        '7RY' => 'E02004191',
        '7RZ' => 'E02004194',
        '7SA' => 'E02004194',
        '7SB' => 'E02004194',
        '7SD' => 'E02004194',
        '7SE' => 'E02004194',
        '7SF' => 'E02004194',
        '7SG' => 'E02004194',
        '7SH' => 'E02004194',
        '7SJ' => 'E02004194',
        '7SL' => 'E02004194',
        '7SN' => 'E02004194',
        '7SP' => 'E02004194',
        '7SQ' => 'E02004194',
        '7SR' => 'E02004194',
        '7SS' => 'E02004194',
        '7ST' => 'E02004194',
        '7SU' => 'E02004194',
        '7SW' => 'E02004194',
        '7SX' => 'E02004194',
        '7SY' => 'E02004194',
        '7SZ' => 'E02004194',
        '7TA' => 'E02004194',
        '7TB' => 'E02004194',
        '7TD' => 'E02004194',
        '7TE' => 'E02004194',
        '7TF' => 'E02004194',
        '7TG' => 'E02004194',
        '7TH' => 'E02004194',
        '7TJ' => 'E02004194',
        '7TL' => 'E02004194',
        '7TN' => 'E02004194',
        '7TP' => 'E02004194',
        '7TQ' => 'E02004194',
        '7TR' => 'E02004194',
        '7TS' => 'E02004194',
        '7TT' => 'E02004194',
        '7TU' => 'E02004194',
        '7TW' => 'E02004194',
        '7TX' => 'E02004194',
        '7TY' => 'E02004194',
        '7TZ' => 'E02004194',
        '7UA' => 'E02004194',
        '7UB' => 'E02004194',
        '7UD' => 'E02004194',
        '7UE' => 'E02004192',
        '7UF' => 'E02004192',
        '7UG' => 'E02004194',
        '7UH' => 'E02004194',
        '7UL' => 'E02004192',
        '7UN' => 'E02004192',
        '7UP' => 'E02004192',
        '7UR' => 'E02004192',
        '7UT' => 'E02004192',
        '7UU' => 'E02004192',
        '7UW' => 'E02004192',
        '7UX' => 'E02004192',
        '7UY' => 'E02004192',
        '7UZ' => 'E02004192',
        '7WA' => 'E02004191',
        '7WB' => 'E02004192',
        '7WD' => 'E02004191',
        '7WE' => 'E02004191',
        '7WG' => 'E02004191',
        '7WY' => 'E02004191',
        '7WZ' => 'E02004192',
        '7XA' => 'E02004192',
        '7XG' => 'E02004192',
        '7XQ' => 'E02004191',
        '7YA' => 'E02004192',
        '7YB' => 'E02004194',
        '7YD' => 'E02004191',
        '7YE' => 'E02004194',
        '7YF' => 'E02004194',
        '7YG' => 'E02004194',
        '7YH' => 'E02004192',
        '7YJ' => 'E02004194',
        '7YL' => 'E02004194',
        '7YN' => 'E02004194',
        '7YP' => 'E02004194',
        '7YQ' => 'E02004194',
        '7YR' => 'E02004191',
        '7YS' => 'E02004191',
        '7YT' => 'E02004194',
        '7YU' => 'E02004191',
        '7YW' => 'E02004194',
        '7YX' => 'E02004191',
        '7YY' => 'E02004191',
        '7YZ' => 'E02004191',
        '7ZD' => 'E02004191',
        '7ZQ' => 'E02004191',
        '7ZR' => 'E02004191',
        '7ZX' => 'E02004191',
        '9AA' => 'E02004191',
        '9AB' => 'E02004191',
        '9AD' => 'E02004191',
        '9AE' => 'E02004191',
        '9AF' => 'E02004191',
        '9AG' => 'E02004191',
        '9AH' => 'E02004191',
        '9AJ' => 'E02004191',
        '9AL' => 'E02004191',
        '9AN' => 'E02004191',
        '9AP' => 'E02004191',
        '9AQ' => 'E02004191',
        '9AR' => 'E02004191',
        '9AS' => 'E02004191',
        '9AT' => 'E02004191',
        '9AU' => 'E02004191',
        '9AW' => 'E02004191',
        '9AX' => 'E02004191',
        '9AY' => 'E02004191',
        '9AZ' => 'E02004191',
        '9BA' => 'E02004191',
        '9BB' => 'E02004191',
        '9BD' => 'E02004191',
        '9BE' => 'E02004191',
        '9BF' => 'E02004191',
        '9BG' => 'E02004191',
        '9BH' => 'E02004191',
        '9BJ' => 'E02004191',
        '9BL' => 'E02004191',
        '9BN' => 'E02004191',
        '9BP' => 'E02004191',
        '9BQ' => 'E02004191',
        '9BR' => 'E02004191',
        '9BS' => 'E02004191',
        '9BT' => 'E02004191',
        '9BU' => 'E02004191',
        '9BW' => 'E02004191',
        '9BX' => 'E02004191',
        '9BY' => 'E02004191',
        '9BZ' => 'E02004191',
        '9DA' => 'E02004191',
        '9DB' => 'E02004191',
        '9DD' => 'E02004191',
        '9DE' => 'E02004191',
        '9DF' => 'E02004191',
        '9DG' => 'E02004191',
        '9DH' => 'E02004191',
        '9DJ' => 'E02004191',
        '9DL' => 'E02004191',
        '9DN' => 'E02004191',
        '9DP' => 'E02004191',
        '9DQ' => 'E02004191',
        '9DR' => 'E02004191',
        '9DS' => 'E02004191',
        '9DT' => 'E02004191',
        '9DU' => 'E02004191',
        '9DW' => 'E02004191',
        '9DX' => 'E02004191',
        '9DY' => 'E02004191',
        '9DZ' => 'E02004191',
        '9EA' => 'E02004191',
        '9EB' => 'E02004191',
        '9ED' => 'E02004191',
        '9EE' => 'E02004191',
        '9EF' => 'E02004191',
        '9EG' => 'E02004191',
        '9EH' => 'E02004191',
        '9EJ' => 'E02004191',
        '9EL' => 'E02004191',
        '9EN' => 'E02004191',
        '9EP' => 'E02004191',
        '9EQ' => 'E02004191',
        '9ER' => 'E02004191',
        '9ES' => 'E02004191',
        '9ET' => 'E02004191',
        '9EU' => 'E02004191',
        '9EW' => 'E02004191',
        '9EX' => 'E02004191',
        '9EY' => 'E02004191',
        '9EZ' => 'E02004191',
        '9FA' => 'E02004191',
        '9FB' => 'E02004191',
        '9FD' => 'E02004191',
        '9FE' => 'E02004191',
        '9FF' => 'E02004191',
        '9FG' => 'E02004191',
        '9FH' => 'E02004191',
        '9FJ' => 'E02004191',
        '9FL' => 'E02004191',
        '9FN' => 'E02004191',
        '9FP' => 'E02004191',
        '9FQ' => 'E02004191',
        '9FR' => 'E02004191',
        '9FS' => 'E02004191',
        '9FT' => 'E02004191',
        '9FU' => 'E02004191',
        '9FW' => 'E02004191',
        '9FX' => 'E02004191',
        '9FY' => 'E02004191',
        '9SA' => 'E02004191',
        '9SB' => 'E02004191',
        '9SD' => 'E02004191',
        '9SE' => 'E02004191',
        '9SF' => 'E02004191',
        '9SG' => 'E02004191',
        '9SH' => 'E02004191',
        '9SJ' => 'E02004191',
        '9SL' => 'E02004191',
        '9SN' => 'E02004191',
        '9SP' => 'E02004191',
        '9SQ' => 'E02004191',
        '9SR' => 'E02004191',
        '9SS' => 'E02004191',
        '9ST' => 'E02004191',
        '9SU' => 'E02004191',
        '9SW' => 'E02004191',
        '9SX' => 'E02004191',
        '9SY' => 'E02004191',
        '9SZ' => 'E02004191',
        '9TA' => 'E02004191',
        '9TB' => 'E02004191',
        '9TD' => 'E02004191',
        '9TE' => 'E02004191',
        '9TF' => 'E02004191',
        '9TG' => 'E02004191',
        '9TH' => 'E02004191',
        '9TJ' => 'E02004191',
        '9TL' => 'E02004191',
        '9TP' => 'E02004191',
        '9TQ' => 'E02004191',
        '9ZZ' => 'E02004191',
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
