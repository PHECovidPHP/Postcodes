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
final class SE14
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '5AA' => 'E02000658',
        '5AB' => 'E02000658',
        '5AD' => 'E02000658',
        '5AE' => 'E02000658',
        '5AF' => 'E02000658',
        '5AG' => 'E02000658',
        '5AH' => 'E02000658',
        '5AJ' => 'E02000655',
        '5AL' => 'E02000658',
        '5AN' => 'E02000655',
        '5AP' => 'E02000655',
        '5AQ' => 'E02000655',
        '5AR' => 'E02000658',
        '5AS' => 'E02000658',
        '5AT' => 'E02000658',
        '5AU' => 'E02000658',
        '5AW' => 'E02000655',
        '5AX' => 'E02000658',
        '5AY' => 'E02000655',
        '5AZ' => 'E02000658',
        '5BA' => 'E02000658',
        '5BB' => 'E02000655',
        '5BD' => 'E02000658',
        '5BE' => 'E02000829',
        '5BF' => 'E02000658',
        '5BG' => 'E02000829',
        '5BH' => 'E02000658',
        '5BJ' => 'E02000829',
        '5BL' => 'E02000658',
        '5BN' => 'E02000829',
        '5BP' => 'E02000658',
        '5BQ' => 'E02000658',
        '5BS' => 'E02000829',
        '5BT' => 'E02000829',
        '5BU' => 'E02000658',
        '5BW' => 'E02000658',
        '5BX' => 'E02000658',
        '5BY' => 'E02000829',
        '5BZ' => 'E02000658',
        '5DA' => 'E02000829',
        '5DB' => 'E02000655',
        '5DD' => 'E02000658',
        '5DE' => 'E02000655',
        '5DF' => 'E02000655',
        '5DG' => 'E02000655',
        '5DH' => 'E02000655',
        '5DJ' => 'E02000655',
        '5DL' => 'E02000655',
        '5DN' => 'E02000655',
        '5DP' => 'E02000655',
        '5DQ' => 'E02000655',
        '5DR' => 'E02000655',
        '5DS' => 'E02000655',
        '5DT' => 'E02000655',
        '5DU' => 'E02000655',
        '5DW' => 'E02000655',
        '5DX' => 'E02000655',
        '5DY' => 'E02000655',
        '5DZ' => 'E02000655',
        '5EA' => 'E02000655',
        '5EB' => 'E02000655',
        '5ED' => 'E02000655',
        '5EE' => 'E02000655',
        '5EF' => 'E02000655',
        '5EG' => 'E02000655',
        '5EH' => 'E02000655',
        '5EJ' => 'E02000655',
        '5EL' => 'E02000655',
        '5EN' => 'E02000655',
        '5EP' => 'E02000655',
        '5EQ' => 'E02000655',
        '5ER' => 'E02000655',
        '5ES' => 'E02000658',
        '5ET' => 'E02000655',
        '5EU' => 'E02000655',
        '5EW' => 'E02000655',
        '5EX' => 'E02000655',
        '5EY' => 'E02000655',
        '5EZ' => 'E02000655',
        '5FA' => 'E02000655',
        '5FB' => 'E02000655',
        '5FD' => 'E02000655',
        '5FF' => 'E02000655',
        '5FG' => 'E02000655',
        '5FH' => 'E02000655',
        '5FJ' => 'E02000655',
        '5FL' => 'E02000655',
        '5FN' => 'E02000655',
        '5FP' => 'E02000655',
        '5FQ' => 'E02000655',
        '5FR' => 'E02000655',
        '5FS' => 'E02000655',
        '5FT' => 'E02000655',
        '5FU' => 'E02000655',
        '5FW' => 'E02000655',
        '5FX' => 'E02000655',
        '5FY' => 'E02000658',
        '5FZ' => 'E02006798',
        '5GE' => 'E02006798',
        '5GR' => 'E02000655',
        '5GS' => 'E02000655',
        '5GT' => 'E02000655',
        '5GU' => 'E02000655',
        '5GX' => 'E02000655',
        '5GY' => 'E02000655',
        '5GZ' => 'E02000655',
        '5HA' => 'E02000655',
        '5HD' => 'E02000658',
        '5HE' => 'E02000655',
        '5HG' => 'E02000655',
        '5HH' => 'E02000655',
        '5HJ' => 'E02000655',
        '5HL' => 'E02000655',
        '5HN' => 'E02000655',
        '5HP' => 'E02000658',
        '5HQ' => 'E02000658',
        '5HR' => 'E02000658',
        '5HS' => 'E02000658',
        '5HT' => 'E02000658',
        '5HU' => 'E02000658',
        '5HW' => 'E02000658',
        '5HX' => 'E02000658',
        '5HY' => 'E02000658',
        '5HZ' => 'E02000658',
        '5JA' => 'E02000658',
        '5JB' => 'E02000658',
        '5JD' => 'E02000658',
        '5JE' => 'E02000658',
        '5JF' => 'E02000658',
        '5JG' => 'E02000658',
        '5JH' => 'E02000658',
        '5JJ' => 'E02000655',
        '5JL' => 'E02000658',
        '5JN' => 'E02000658',
        '5JP' => 'E02000658',
        '5JQ' => 'E02000658',
        '5JR' => 'E02000658',
        '5JS' => 'E02000655',
        '5JT' => 'E02000655',
        '5JU' => 'E02000655',
        '5JW' => 'E02000655',
        '5JX' => 'E02000655',
        '5JY' => 'E02000655',
        '5JZ' => 'E02000655',
        '5LA' => 'E02000658',
        '5LB' => 'E02000658',
        '5LD' => 'E02000658',
        '5LE' => 'E02000658',
        '5LF' => 'E02000658',
        '5LG' => 'E02000658',
        '5LH' => 'E02000658',
        '5LJ' => 'E02000658',
        '5LL' => 'E02000658',
        '5LN' => 'E02000658',
        '5LP' => 'E02000658',
        '5LQ' => 'E02000658',
        '5LR' => 'E02000658',
        '5LS' => 'E02000658',
        '5LT' => 'E02000658',
        '5LU' => 'E02000658',
        '5LW' => 'E02000658',
        '5LX' => 'E02000658',
        '5LY' => 'E02000658',
        '5LZ' => 'E02000658',
        '5NA' => 'E02000658',
        '5NB' => 'E02000658',
        '5ND' => 'E02000658',
        '5NE' => 'E02000658',
        '5NF' => 'E02000658',
        '5NG' => 'E02000658',
        '5NH' => 'E02000658',
        '5NJ' => 'E02000662',
        '5NL' => 'E02000662',
        '5NN' => 'E02000658',
        '5NP' => 'E02000658',
        '5NQ' => 'E02000658',
        '5NR' => 'E02000658',
        '5NS' => 'E02000658',
        '5NT' => 'E02000658',
        '5NU' => 'E02000658',
        '5NW' => 'E02000658',
        '5NX' => 'E02000658',
        '5NY' => 'E02000658',
        '5NZ' => 'E02000658',
        '5PA' => 'E02000658',
        '5PB' => 'E02000655',
        '5PD' => 'E02000655',
        '5PE' => 'E02000658',
        '5PF' => 'E02000658',
        '5PG' => 'E02000658',
        '5PH' => 'E02000658',
        '5PJ' => 'E02000658',
        '5PL' => 'E02000658',
        '5PN' => 'E02000658',
        '5PP' => 'E02000658',
        '5PQ' => 'E02000658',
        '5PR' => 'E02000655',
        '5PS' => 'E02000655',
        '5PT' => 'E02000658',
        '5PU' => 'E02000655',
        '5PW' => 'E02000658',
        '5PX' => 'E02000655',
        '5PY' => 'E02000655',
        '5PZ' => 'E02000655',
        '5QA' => 'E02000655',
        '5QB' => 'E02000655',
        '5QD' => 'E02000655',
        '5QE' => 'E02000655',
        '5QF' => 'E02000655',
        '5QG' => 'E02000655',
        '5QH' => 'E02000655',
        '5QJ' => 'E02000655',
        '5QL' => 'E02000655',
        '5QN' => 'E02000655',
        '5QP' => 'E02000655',
        '5QQ' => 'E02000655',
        '5QR' => 'E02000655',
        '5QS' => 'E02000655',
        '5QT' => 'E02000655',
        '5QU' => 'E02000655',
        '5QW' => 'E02000655',
        '5QX' => 'E02000655',
        '5QY' => 'E02000655',
        '5QZ' => 'E02000655',
        '5RA' => 'E02000655',
        '5RB' => 'E02000655',
        '5RD' => 'E02000655',
        '5RE' => 'E02000655',
        '5RF' => 'E02000655',
        '5RG' => 'E02000655',
        '5RH' => 'E02000655',
        '5RJ' => 'E02000655',
        '5RL' => 'E02000655',
        '5RN' => 'E02000655',
        '5RP' => 'E02000655',
        '5RQ' => 'E02000655',
        '5RR' => 'E02000655',
        '5RS' => 'E02000655',
        '5RT' => 'E02000655',
        '5RU' => 'E02000655',
        '5RW' => 'E02000655',
        '5RX' => 'E02000655',
        '5RY' => 'E02000655',
        '5RZ' => 'E02000655',
        '5SA' => 'E02000658',
        '5SB' => 'E02000658',
        '5SD' => 'E02000658',
        '5SE' => 'E02000658',
        '5SF' => 'E02000662',
        '5SG' => 'E02000662',
        '5SH' => 'E02000658',
        '5SJ' => 'E02000658',
        '5SL' => 'E02000658',
        '5SN' => 'E02000658',
        '5SP' => 'E02000655',
        '5SQ' => 'E02000662',
        '5SR' => 'E02000658',
        '5SS' => 'E02000655',
        '5ST' => 'E02000655',
        '5SU' => 'E02000655',
        '5SW' => 'E02000658',
        '5SX' => 'E02000655',
        '5SY' => 'E02000658',
        '5SZ' => 'E02000655',
        '5TA' => 'E02000658',
        '5TB' => 'E02000658',
        '5TD' => 'E02000658',
        '5TE' => 'E02000658',
        '5TF' => 'E02000658',
        '5TG' => 'E02000658',
        '5TH' => 'E02000658',
        '5TJ' => 'E02000658',
        '5TL' => 'E02000658',
        '5TN' => 'E02000658',
        '5TP' => 'E02000658',
        '5TQ' => 'E02000658',
        '5TR' => 'E02000658',
        '5TS' => 'E02000658',
        '5TT' => 'E02000658',
        '5TU' => 'E02000658',
        '5TW' => 'E02000658',
        '5TX' => 'E02000655',
        '5TY' => 'E02000658',
        '5TZ' => 'E02000655',
        '5UA' => 'E02000655',
        '5UB' => 'E02000658',
        '5UD' => 'E02000655',
        '5UE' => 'E02000658',
        '5UF' => 'E02000655',
        '5UG' => 'E02000655',
        '5UH' => 'E02000655',
        '5UJ' => 'E02000655',
        '5UL' => 'E02000655',
        '5UN' => 'E02000655',
        '5UP' => 'E02000655',
        '5UQ' => 'E02000655',
        '5UR' => 'E02000655',
        '5US' => 'E02000655',
        '5UT' => 'E02000655',
        '5UU' => 'E02000655',
        '5UW' => 'E02000655',
        '5UX' => 'E02000655',
        '5UY' => 'E02000655',
        '5UZ' => 'E02000655',
        '5WA' => 'E02000655',
        '5WB' => 'E02000655',
        '5WD' => 'E02000655',
        '5WE' => 'E02000655',
        '5WF' => 'E02000655',
        '5WG' => 'E02000655',
        '5WH' => 'E02000655',
        '5WJ' => 'E02000655',
        '5WL' => 'E02000655',
        '5WN' => 'E02000655',
        '5WP' => 'E02000655',
        '5WQ' => 'E02000655',
        '5WR' => 'E02000655',
        '5WS' => 'E02000655',
        '5WT' => 'E02000655',
        '5WU' => 'E02000655',
        '5WW' => 'E02000655',
        '5WX' => 'E02000655',
        '5WY' => 'E02000655',
        '5WZ' => 'E02000655',
        '5XA' => 'E02000655',
        '5XB' => 'E02000655',
        '5XD' => 'E02000655',
        '5XE' => 'E02000655',
        '5XF' => 'E02000655',
        '5XG' => 'E02000655',
        '5XH' => 'E02000655',
        '5XJ' => 'E02000655',
        '5XL' => 'E02000655',
        '5XN' => 'E02000655',
        '5XP' => 'E02000655',
        '5XQ' => 'E02000655',
        '5XR' => 'E02000655',
        '5XS' => 'E02000655',
        '5XT' => 'E02000655',
        '5XU' => 'E02000655',
        '5XW' => 'E02000655',
        '5XX' => 'E02000655',
        '5XY' => 'E02000655',
        '5XZ' => 'E02000655',
        '5YA' => 'E02000655',
        '5YB' => 'E02000655',
        '5YD' => 'E02000655',
        '5YE' => 'E02000655',
        '5YF' => 'E02000655',
        '5YG' => 'E02000655',
        '5YH' => 'E02000655',
        '5YJ' => 'E02000655',
        '5YL' => 'E02000655',
        '5YN' => 'E02000655',
        '5YP' => 'E02000655',
        '5YQ' => 'E02000655',
        '5YR' => 'E02000655',
        '5YS' => 'E02000655',
        '5YT' => 'E02000655',
        '5YU' => 'E02000655',
        '5YW' => 'E02000655',
        '5YX' => 'E02000655',
        '5YZ' => 'E02000655',
        '5ZA' => 'E02000655',
        '5ZB' => 'E02000655',
        '5ZD' => 'E02000655',
        '5ZE' => 'E02000655',
        '5ZF' => 'E02000655',
        '5ZG' => 'E02000655',
        '5ZH' => 'E02000658',
        '5ZJ' => 'E02000655',
        '5ZL' => 'E02000655',
        '5ZN' => 'E02000655',
        '5ZP' => 'E02000655',
        '5ZQ' => 'E02000655',
        '5ZR' => 'E02000655',
        '5ZS' => 'E02000655',
        '5ZT' => 'E02000655',
        '5ZU' => 'E02000655',
        '5ZW' => 'E02000655',
        '5ZZ' => 'E02000655',
        '6AA' => 'E02000657',
        '6AB' => 'E02000658',
        '6AD' => 'E02000657',
        '6AE' => 'E02000657',
        '6AF' => 'E02000657',
        '6AG' => 'E02000657',
        '6AH' => 'E02000657',
        '6AJ' => 'E02006798',
        '6AL' => 'E02006798',
        '6AN' => 'E02006798',
        '6AP' => 'E02006798',
        '6AQ' => 'E02006798',
        '6AR' => 'E02006798',
        '6AS' => 'E02006798',
        '6AT' => 'E02006798',
        '6AU' => 'E02000657',
        '6AW' => 'E02000655',
        '6AX' => 'E02000655',
        '6AY' => 'E02006798',
        '6AZ' => 'E02000654',
        '6BA' => 'E02006798',
        '6BB' => 'E02006798',
        '6BD' => 'E02006798',
        '6BE' => 'E02000657',
        '6BF' => 'E02000654',
        '6BG' => 'E02000654',
        '6BH' => 'E02000654',
        '6BJ' => 'E02006798',
        '6BL' => 'E02000655',
        '6BN' => 'E02000654',
        '6BP' => 'E02000654',
        '6BQ' => 'E02006798',
        '6BS' => 'E02000654',
        '6BT' => 'E02000654',
        '6BU' => 'E02000654',
        '6BW' => 'E02000655',
        '6BX' => 'E02006798',
        '6BY' => 'E02000654',
        '6BZ' => 'E02000658',
        '6DA' => 'E02000655',
        '6DB' => 'E02006798',
        '6DD' => 'E02000655',
        '6DE' => 'E02006798',
        '6DF' => 'E02000655',
        '6DG' => 'E02000655',
        '6DH' => 'E02000655',
        '6DJ' => 'E02000655',
        '6DL' => 'E02000655',
        '6DN' => 'E02000655',
        '6DP' => 'E02006798',
        '6DQ' => 'E02006798',
        '6DR' => 'E02006798',
        '6DS' => 'E02006798',
        '6DT' => 'E02006798',
        '6DU' => 'E02000655',
        '6DW' => 'E02000655',
        '6DX' => 'E02000654',
        '6DY' => 'E02000654',
        '6DZ' => 'E02006798',
        '6EA' => 'E02006798',
        '6EB' => 'E02000654',
        '6ED' => 'E02000654',
        '6EE' => 'E02006798',
        '6EF' => 'E02000654',
        '6EG' => 'E02006798',
        '6EH' => 'E02006798',
        '6EJ' => 'E02000655',
        '6EL' => 'E02006798',
        '6EN' => 'E02000654',
        '6EP' => 'E02006798',
        '6EQ' => 'E02000654',
        '6ER' => 'E02000655',
        '6ES' => 'E02006798',
        '6ET' => 'E02006798',
        '6EU' => 'E02006798',
        '6EW' => 'E02006798',
        '6EX' => 'E02006798',
        '6EY' => 'E02006798',
        '6EZ' => 'E02006798',
        '6FA' => 'E02000654',
        '6FB' => 'E02000654',
        '6FD' => 'E02006798',
        '6FE' => 'E02000655',
        '6FU' => 'E02000655',
        '6FX' => 'E02000655',
        '6FY' => 'E02000655',
        '6FZ' => 'E02000655',
        '6GA' => 'E02000655',
        '6GB' => 'E02000655',
        '6GD' => 'E02006798',
        '6GE' => 'E02000655',
        '6GF' => 'E02000655',
        '6GG' => 'E02000655',
        '6GH' => 'E02000655',
        '6GJ' => 'E02000655',
        '6GL' => 'E02000655',
        '6GN' => 'E02000655',
        '6GP' => 'E02000655',
        '6GQ' => 'E02000655',
        '6GR' => 'E02006798',
        '6GS' => 'E02000655',
        '6GT' => 'E02006798',
        '6GU' => 'E02000655',
        '6GW' => 'E02000655',
        '6GX' => 'E02006798',
        '6GY' => 'E02000655',
        '6GZ' => 'E02006798',
        '6HA' => 'E02006798',
        '6HB' => 'E02006798',
        '6HD' => 'E02006798',
        '6HE' => 'E02006798',
        '6HF' => 'E02006798',
        '6HG' => 'E02006798',
        '6HH' => 'E02006798',
        '6HJ' => 'E02006798',
        '6HL' => 'E02006798',
        '6HN' => 'E02006798',
        '6HP' => 'E02006798',
        '6HQ' => 'E02006798',
        '6HR' => 'E02006798',
        '6HS' => 'E02006798',
        '6HT' => 'E02006798',
        '6HU' => 'E02006798',
        '6HW' => 'E02006798',
        '6HX' => 'E02006798',
        '6HY' => 'E02006798',
        '6HZ' => 'E02006798',
        '6JA' => 'E02006798',
        '6JB' => 'E02006798',
        '6JD' => 'E02006798',
        '6JE' => 'E02006798',
        '6JF' => 'E02006798',
        '6JG' => 'E02006798',
        '6JH' => 'E02006798',
        '6JJ' => 'E02006798',
        '6JL' => 'E02006798',
        '6JN' => 'E02006798',
        '6JP' => 'E02006798',
        '6JQ' => 'E02006798',
        '6JR' => 'E02006798',
        '6JS' => 'E02006798',
        '6JT' => 'E02006798',
        '6JU' => 'E02006798',
        '6JW' => 'E02006798',
        '6JX' => 'E02006798',
        '6JY' => 'E02006798',
        '6JZ' => 'E02006798',
        '6LA' => 'E02006798',
        '6LB' => 'E02006798',
        '6LD' => 'E02006798',
        '6LE' => 'E02006798',
        '6LF' => 'E02006798',
        '6LG' => 'E02006798',
        '6LH' => 'E02006798',
        '6LJ' => 'E02006798',
        '6LL' => 'E02006798',
        '6LN' => 'E02006798',
        '6LP' => 'E02000655',
        '6LQ' => 'E02006798',
        '6LR' => 'E02006798',
        '6LS' => 'E02000657',
        '6LT' => 'E02000655',
        '6LU' => 'E02006798',
        '6LW' => 'E02006798',
        '6LX' => 'E02006798',
        '6LZ' => 'E02006798',
        '6NA' => 'E02000654',
        '6NB' => 'E02006798',
        '6NE' => 'E02006798',
        '6NF' => 'E02006798',
        '6NG' => 'E02006798',
        '6NH' => 'E02000657',
        '6NJ' => 'E02000657',
        '6NL' => 'E02000657',
        '6NN' => 'E02000657',
        '6NP' => 'E02000657',
        '6NQ' => 'E02006798',
        '6NR' => 'E02000657',
        '6NS' => 'E02000657',
        '6NT' => 'E02000657',
        '6NU' => 'E02000657',
        '6NW' => 'E02000657',
        '6NX' => 'E02000657',
        '6NY' => 'E02000657',
        '6NZ' => 'E02000657',
        '6PA' => 'E02000657',
        '6PB' => 'E02000657',
        '6PD' => 'E02000657',
        '6PE' => 'E02000657',
        '6PF' => 'E02000657',
        '6PG' => 'E02000657',
        '6PH' => 'E02000657',
        '6PJ' => 'E02000657',
        '6PL' => 'E02000657',
        '6PN' => 'E02000657',
        '6PP' => 'E02000657',
        '6PQ' => 'E02000657',
        '6PR' => 'E02000657',
        '6PS' => 'E02000657',
        '6PW' => 'E02000657',
        '6PX' => 'E02000657',
        '6PY' => 'E02000657',
        '6PZ' => 'E02000657',
        '6QA' => 'E02000657',
        '6QB' => 'E02000657',
        '6QD' => 'E02000657',
        '6QE' => 'E02000657',
        '6QF' => 'E02000657',
        '6QG' => 'E02000657',
        '6QH' => 'E02000657',
        '6QJ' => 'E02000657',
        '6QL' => 'E02000657',
        '6QN' => 'E02000657',
        '6QP' => 'E02000657',
        '6QQ' => 'E02000657',
        '6QR' => 'E02000655',
        '6QS' => 'E02000657',
        '6QU' => 'E02000657',
        '6QW' => 'E02000657',
        '6RD' => 'E02000657',
        '6RE' => 'E02000657',
        '6RF' => 'E02000657',
        '6RG' => 'E02000657',
        '6RH' => 'E02000657',
        '6RJ' => 'E02000662',
        '6RL' => 'E02000657',
        '6RN' => 'E02000657',
        '6RP' => 'E02000657',
        '6RQ' => 'E02000657',
        '6RR' => 'E02000657',
        '6RS' => 'E02000657',
        '6RT' => 'E02000657',
        '6RU' => 'E02000657',
        '6RW' => 'E02000657',
        '6RX' => 'E02000657',
        '6RY' => 'E02000657',
        '6RZ' => 'E02000657',
        '6SA' => 'E02000657',
        '6SL' => 'E02000657',
        '6TA' => 'E02006798',
        '6TB' => 'E02000657',
        '6TD' => 'E02006798',
        '6TE' => 'E02000657',
        '6TF' => 'E02000657',
        '6TG' => 'E02000657',
        '6TH' => 'E02000657',
        '6TJ' => 'E02000657',
        '6TL' => 'E02000657',
        '6TN' => 'E02000657',
        '6TP' => 'E02000657',
        '6TQ' => 'E02006798',
        '6TR' => 'E02000657',
        '6TS' => 'E02000657',
        '6TT' => 'E02000657',
        '6TU' => 'E02000657',
        '6TW' => 'E02000657',
        '6TX' => 'E02000657',
        '6TY' => 'E02000657',
        '6TZ' => 'E02000657',
        '6UA' => 'E02000657',
        '6UU' => 'E02000655',
        '6UW' => 'E02000655',
        '6UX' => 'E02000655',
        '6UY' => 'E02000655',
        '6UZ' => 'E02000655',
        '6WA' => 'E02000655',
        '6WB' => 'E02000655',
        '6WD' => 'E02000655',
        '6WE' => 'E02000655',
        '6WF' => 'E02000655',
        '6WG' => 'E02000655',
        '6WH' => 'E02000655',
        '6WJ' => 'E02000655',
        '6WL' => 'E02000655',
        '6WN' => 'E02000655',
        '6WP' => 'E02000655',
        '6WQ' => 'E02000655',
        '6WR' => 'E02000655',
        '6WS' => 'E02000655',
        '6WT' => 'E02000655',
        '6WU' => 'E02000655',
        '6WW' => 'E02000655',
        '6WX' => 'E02000655',
        '6WY' => 'E02000655',
        '6WZ' => 'E02000655',
        '6XA' => 'E02000655',
        '6XB' => 'E02000655',
        '6XD' => 'E02000655',
        '6XE' => 'E02000655',
        '6XF' => 'E02000655',
        '6XH' => 'E02000655',
        '6XJ' => 'E02000655',
        '6XL' => 'E02000655',
        '6XN' => 'E02000655',
        '6XP' => 'E02000655',
        '6XQ' => 'E02000655',
        '6XR' => 'E02000655',
        '6XS' => 'E02000655',
        '6XT' => 'E02000655',
        '6XU' => 'E02000655',
        '6XW' => 'E02000655',
        '6XX' => 'E02000655',
        '6XY' => 'E02000655',
        '6XZ' => 'E02000655',
        '6YA' => 'E02000657',
        '6YB' => 'E02000655',
        '6YD' => 'E02000655',
        '6YE' => 'E02000657',
        '6YF' => 'E02000655',
        '6YG' => 'E02000655',
        '6YH' => 'E02000655',
        '6YJ' => 'E02000655',
        '6YL' => 'E02000655',
        '6YP' => 'E02000655',
        '6YQ' => 'E02000657',
        '6YT' => 'E02000655',
        '6YW' => 'E02000657',
        '6YX' => 'E02000655',
        '6YY' => 'E02000655',
        '6YZ' => 'E02000657',
        '6ZA' => 'E02000655',
        '6ZB' => 'E02000655',
        '6ZD' => 'E02006798',
        '6ZE' => 'E02006798',
        '6ZF' => 'E02006798',
        '6ZG' => 'E02006798',
        '6ZH' => 'E02006798',
        '6ZJ' => 'E02000655',
        '6ZL' => 'E02000655',
        '6ZN' => 'E02006798',
        '6ZP' => 'E02000655',
        '6ZQ' => 'E02000655',
        '6ZR' => 'E02000655',
        '6ZS' => 'E02000655',
        '6ZT' => 'E02006798',
        '6ZU' => 'E02006798',
        '6ZW' => 'E02006798',
        '6ZZ' => 'E02006798',
        '9AG' => 'E02000655',
        '9AJ' => 'E02000655',
        '9AL' => 'E02000655',
        '9AN' => 'E02000655',
        '9AQ' => 'E02000655',
        '9AR' => 'E02000655',
        '9AT' => 'E02000655',
        '9AU' => 'E02000655',
        '9AX' => 'E02000655',
        '9AY' => 'E02000655',
        '9BA' => 'E02000655',
        '9BB' => 'E02000655',
        '9BD' => 'E02000655',
        '9BE' => 'E02000655',
        '9BF' => 'E02000655',
        '9BG' => 'E02000655',
        '9BH' => 'E02000655',
        '9BJ' => 'E02000655',
        '9BL' => 'E02000655',
        '9BN' => 'E02000655',
        '9BP' => 'E02000655',
        '9BQ' => 'E02000655',
        '9BR' => 'E02000655',
        '9BS' => 'E02000655',
        '9BT' => 'E02000655',
        '9BU' => 'E02000655',
        '9BW' => 'E02000655',
        '9BX' => 'E02000655',
        '9BY' => 'E02000655',
        '9BZ' => 'E02000655',
        '9DA' => 'E02000655',
        '9DB' => 'E02000655',
        '9DD' => 'E02000655',
        '9DE' => 'E02000655',
        '9DF' => 'E02000655',
        '9DG' => 'E02000655',
        '9DH' => 'E02000655',
        '9DJ' => 'E02000655',
        '9DL' => 'E02000655',
        '9DN' => 'E02000655',
        '9DP' => 'E02000655',
        '9DQ' => 'E02000655',
        '9DR' => 'E02000655',
        '9DS' => 'E02000655',
        '9DT' => 'E02000655',
        '9DU' => 'E02000655',
        '9DW' => 'E02000655',
        '9DX' => 'E02000655',
        '9DY' => 'E02000655',
        '9DZ' => 'E02000655',
        '9EA' => 'E02000655',
        '9EB' => 'E02000655',
        '9ED' => 'E02000655',
        '9EE' => 'E02000655',
        '9EF' => 'E02000655',
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
