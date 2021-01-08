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
final class SS15
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '4AA' => 'E02004433',
        '4AB' => 'E02004433',
        '4AD' => 'E02004433',
        '4AE' => 'E02004433',
        '4AF' => 'E02004433',
        '4AG' => 'E02004433',
        '4AH' => 'E02004433',
        '4AJ' => 'E02004433',
        '4AL' => 'E02004433',
        '4AN' => 'E02004433',
        '4AP' => 'E02004432',
        '4AQ' => 'E02004433',
        '4AR' => 'E02004432',
        '4AS' => 'E02004433',
        '4AT' => 'E02004433',
        '4AU' => 'E02004433',
        '4AW' => 'E02004433',
        '4AX' => 'E02004433',
        '4AY' => 'E02004433',
        '4AZ' => 'E02004432',
        '4BA' => 'E02004433',
        '4BB' => 'E02004433',
        '4BD' => 'E02004433',
        '4BE' => 'E02004432',
        '4BF' => 'E02004433',
        '4BG' => 'E02004432',
        '4BH' => 'E02004433',
        '4BJ' => 'E02004433',
        '4BL' => 'E02004433',
        '4BN' => 'E02004433',
        '4BP' => 'E02004433',
        '4BQ' => 'E02004433',
        '4BS' => 'E02004433',
        '4BT' => 'E02004433',
        '4BU' => 'E02004433',
        '4BW' => 'E02004433',
        '4BX' => 'E02004433',
        '4BY' => 'E02004433',
        '4BZ' => 'E02004433',
        '4DA' => 'E02004433',
        '4DB' => 'E02004433',
        '4DD' => 'E02004433',
        '4DE' => 'E02004433',
        '4DF' => 'E02004433',
        '4DG' => 'E02004433',
        '4DH' => 'E02004433',
        '4DJ' => 'E02004433',
        '4DL' => 'E02004433',
        '4DN' => 'E02004433',
        '4DP' => 'E02004433',
        '4DQ' => 'E02004433',
        '4DR' => 'E02004433',
        '4DS' => 'E02004433',
        '4DT' => 'E02004433',
        '4DU' => 'E02004432',
        '4DW' => 'E02004433',
        '4DX' => 'E02004432',
        '4DY' => 'E02004433',
        '4DZ' => 'E02004433',
        '4EA' => 'E02004433',
        '4EB' => 'E02004433',
        '4ED' => 'E02004433',
        '4EE' => 'E02004433',
        '4EF' => 'E02004433',
        '4EG' => 'E02004433',
        '4EH' => 'E02004433',
        '4EJ' => 'E02004433',
        '4EL' => 'E02004433',
        '4EN' => 'E02004433',
        '4EP' => 'E02004433',
        '4EQ' => 'E02004433',
        '4ER' => 'E02004433',
        '4ES' => 'E02004433',
        '4ET' => 'E02004433',
        '4EU' => 'E02004433',
        '4EW' => 'E02004433',
        '4EX' => 'E02004433',
        '4EY' => 'E02004433',
        '4EZ' => 'E02004433',
        '4FA' => 'E02004433',
        '4FB' => 'E02004433',
        '4FD' => 'E02004433',
        '4FE' => 'E02004433',
        '4FF' => 'E02004433',
        '4FG' => 'E02004432',
        '4FH' => 'E02004432',
        '4FL' => 'E02004432',
        '4GG' => 'E02004438',
        '4GS' => 'E02004438',
        '4GX' => 'E02004438',
        '4GZ' => 'E02004432',
        '4HA' => 'E02004433',
        '4HB' => 'E02004433',
        '4HD' => 'E02004433',
        '4HE' => 'E02004433',
        '4HF' => 'E02004433',
        '4HG' => 'E02004433',
        '4HH' => 'E02004433',
        '4HJ' => 'E02004433',
        '4HL' => 'E02004433',
        '4HN' => 'E02004433',
        '4HP' => 'E02004433',
        '4HQ' => 'E02004433',
        '4HS' => 'E02004433',
        '4HT' => 'E02004433',
        '4HU' => 'E02004433',
        '4HX' => 'E02004433',
        '4HY' => 'E02004433',
        '4HZ' => 'E02004433',
        '4JA' => 'E02004438',
        '4JB' => 'E02004432',
        '4JD' => 'E02004432',
        '4JE' => 'E02004432',
        '4JF' => 'E02004433',
        '4JG' => 'E02004433',
        '4JN' => 'E02004433',
        '4JP' => 'E02004433',
        '4JQ' => 'E02004433',
        '4JR' => 'E02004433',
        '4JS' => 'E02004433',
        '4JT' => 'E02004432',
        '4JU' => 'E02004433',
        '4JW' => 'E02004433',
        '4JX' => 'E02004432',
        '4JY' => 'E02004433',
        '4JZ' => 'E02004433',
        '4LE' => 'E02004433',
        '4LX' => 'E02004433',
        '4WA' => 'E02004438',
        '4WB' => 'E02004433',
        '4WE' => 'E02004438',
        '4WF' => 'E02004438',
        '4WX' => 'E02004438',
        '4WY' => 'E02004438',
        '4WZ' => 'E02004438',
        '5AA' => 'E02004440',
        '5AB' => 'E02004440',
        '5AD' => 'E02004440',
        '5AE' => 'E02004440',
        '5AF' => 'E02004440',
        '5AG' => 'E02004439',
        '5AH' => 'E02004440',
        '5AJ' => 'E02004440',
        '5AL' => 'E02004440',
        '5AN' => 'E02004440',
        '5AP' => 'E02004440',
        '5AQ' => 'E02004440',
        '5AR' => 'E02004440',
        '5AS' => 'E02004440',
        '5AT' => 'E02004440',
        '5AU' => 'E02004440',
        '5AW' => 'E02004440',
        '5AX' => 'E02004439',
        '5AY' => 'E02004440',
        '5AZ' => 'E02004440',
        '5BA' => 'E02004440',
        '5BB' => 'E02004440',
        '5BD' => 'E02004440',
        '5BE' => 'E02004433',
        '5BF' => 'E02004439',
        '5BG' => 'E02004440',
        '5BH' => 'E02004440',
        '5BJ' => 'E02004440',
        '5BL' => 'E02004440',
        '5BN' => 'E02004440',
        '5BP' => 'E02004433',
        '5BQ' => 'E02004440',
        '5BS' => 'E02004433',
        '5BT' => 'E02004439',
        '5BU' => 'E02004440',
        '5BW' => 'E02004440',
        '5BX' => 'E02004440',
        '5BY' => 'E02004440',
        '5BZ' => 'E02004440',
        '5DA' => 'E02004440',
        '5DB' => 'E02004440',
        '5DD' => 'E02004440',
        '5DE' => 'E02004439',
        '5DF' => 'E02004440',
        '5DG' => 'E02004440',
        '5DH' => 'E02004440',
        '5DJ' => 'E02004440',
        '5DL' => 'E02004440',
        '5DN' => 'E02004440',
        '5DP' => 'E02004440',
        '5DQ' => 'E02004440',
        '5DR' => 'E02004440',
        '5DS' => 'E02004440',
        '5DT' => 'E02004439',
        '5DU' => 'E02004440',
        '5DW' => 'E02004440',
        '5DX' => 'E02004440',
        '5DY' => 'E02004440',
        '5DZ' => 'E02004440',
        '5EA' => 'E02004440',
        '5EB' => 'E02004440',
        '5ED' => 'E02004439',
        '5EE' => 'E02004440',
        '5EF' => 'E02004440',
        '5EG' => 'E02004440',
        '5EH' => 'E02004439',
        '5EJ' => 'E02004440',
        '5EL' => 'E02004440',
        '5EN' => 'E02004440',
        '5EP' => 'E02004440',
        '5EQ' => 'E02004440',
        '5ER' => 'E02004440',
        '5ES' => 'E02004440',
        '5ET' => 'E02004439',
        '5EU' => 'E02004440',
        '5EW' => 'E02004440',
        '5EX' => 'E02004440',
        '5EY' => 'E02004440',
        '5EZ' => 'E02004439',
        '5FA' => 'E02004439',
        '5FB' => 'E02004439',
        '5FD' => 'E02004439',
        '5FE' => 'E02004439',
        '5FF' => 'E02004439',
        '5FG' => 'E02004439',
        '5FH' => 'E02004439',
        '5FJ' => 'E02004439',
        '5FL' => 'E02004439',
        '5FN' => 'E02004439',
        '5FP' => 'E02004439',
        '5FQ' => 'E02004439',
        '5FR' => 'E02004433',
        '5FS' => 'E02004433',
        '5FT' => 'E02004439',
        '5FU' => 'E02004439',
        '5FW' => 'E02004439',
        '5FX' => 'E02004439',
        '5FY' => 'E02004439',
        '5FZ' => 'E02004439',
        '5GA' => 'E02004439',
        '5GB' => 'E02004439',
        '5GD' => 'E02004439',
        '5GE' => 'E02004439',
        '5GF' => 'E02004439',
        '5GG' => 'E02004439',
        '5GH' => 'E02004439',
        '5GJ' => 'E02004439',
        '5GL' => 'E02004440',
        '5GN' => 'E02004440',
        '5GP' => 'E02004440',
        '5GQ' => 'E02004439',
        '5GR' => 'E02004433',
        '5GS' => 'E02004433',
        '5GT' => 'E02004433',
        '5GU' => 'E02004433',
        '5GW' => 'E02004439',
        '5GX' => 'E02004432',
        '5GY' => 'E02004439',
        '5GZ' => 'E02004439',
        '5HA' => 'E02004439',
        '5HB' => 'E02004440',
        '5HD' => 'E02004440',
        '5HE' => 'E02004439',
        '5HF' => 'E02004439',
        '5HG' => 'E02004439',
        '5HH' => 'E02004438',
        '5HJ' => 'E02004439',
        '5HL' => 'E02004439',
        '5HN' => 'E02004439',
        '5HP' => 'E02004439',
        '5HQ' => 'E02004439',
        '5HR' => 'E02004439',
        '5HS' => 'E02004439',
        '5HT' => 'E02004440',
        '5HU' => 'E02004439',
        '5HW' => 'E02004440',
        '5HX' => 'E02004439',
        '5HY' => 'E02004439',
        '5HZ' => 'E02004439',
        '5JA' => 'E02004439',
        '5JB' => 'E02004439',
        '5JD' => 'E02004439',
        '5JE' => 'E02004439',
        '5JF' => 'E02004439',
        '5JG' => 'E02004439',
        '5JH' => 'E02004440',
        '5JJ' => 'E02004440',
        '5JN' => 'E02004438',
        '5JP' => 'E02004439',
        '5JQ' => 'E02004439',
        '5JR' => 'E02004439',
        '5JS' => 'E02004439',
        '5JT' => 'E02004438',
        '5JU' => 'E02004439',
        '5JW' => 'E02004439',
        '5JX' => 'E02004439',
        '5JY' => 'E02004439',
        '5JZ' => 'E02004439',
        '5LA' => 'E02004439',
        '5LB' => 'E02004439',
        '5LD' => 'E02004439',
        '5LE' => 'E02004439',
        '5LF' => 'E02004439',
        '5LG' => 'E02004440',
        '5LH' => 'E02004440',
        '5LJ' => 'E02004440',
        '5LL' => 'E02004440',
        '5LN' => 'E02004439',
        '5LP' => 'E02004439',
        '5LQ' => 'E02004440',
        '5LR' => 'E02004439',
        '5LS' => 'E02004440',
        '5LT' => 'E02004439',
        '5LU' => 'E02004440',
        '5LW' => 'E02004439',
        '5LX' => 'E02004440',
        '5LY' => 'E02004439',
        '5LZ' => 'E02004440',
        '5NA' => 'E02004438',
        '5NB' => 'E02004440',
        '5ND' => 'E02004438',
        '5NE' => 'E02004438',
        '5NF' => 'E02004438',
        '5NG' => 'E02004439',
        '5NH' => 'E02004433',
        '5NJ' => 'E02004439',
        '5NL' => 'E02004439',
        '5NN' => 'E02004439',
        '5NP' => 'E02004439',
        '5NQ' => 'E02004439',
        '5NR' => 'E02004439',
        '5NS' => 'E02004439',
        '5NT' => 'E02004439',
        '5NU' => 'E02004433',
        '5NW' => 'E02004439',
        '5NX' => 'E02004439',
        '5NY' => 'E02004433',
        '5NZ' => 'E02004439',
        '5PA' => 'E02004439',
        '5PB' => 'E02004439',
        '5PD' => 'E02004439',
        '5PE' => 'E02004439',
        '5PF' => 'E02004440',
        '5PG' => 'E02004439',
        '5PH' => 'E02004439',
        '5PJ' => 'E02004439',
        '5PL' => 'E02004439',
        '5PN' => 'E02004439',
        '5PP' => 'E02004439',
        '5PQ' => 'E02004439',
        '5PR' => 'E02004439',
        '5PS' => 'E02004439',
        '5PT' => 'E02004439',
        '5PU' => 'E02004437',
        '5PW' => 'E02004439',
        '5PX' => 'E02004433',
        '5PY' => 'E02004433',
        '5PZ' => 'E02004433',
        '5QA' => 'E02004433',
        '5QB' => 'E02004433',
        '5QD' => 'E02004433',
        '5QE' => 'E02004433',
        '5QF' => 'E02004433',
        '5QG' => 'E02004433',
        '5QH' => 'E02004433',
        '5QJ' => 'E02004437',
        '5QL' => 'E02004433',
        '5QN' => 'E02004433',
        '5QP' => 'E02004433',
        '5QQ' => 'E02004433',
        '5QR' => 'E02004433',
        '5QS' => 'E02004433',
        '5QT' => 'E02004433',
        '5QU' => 'E02004433',
        '5QW' => 'E02004433',
        '5QX' => 'E02004433',
        '5QY' => 'E02004433',
        '5QZ' => 'E02004433',
        '5RA' => 'E02004433',
        '5RB' => 'E02004433',
        '5RD' => 'E02004433',
        '5RE' => 'E02004433',
        '5RF' => 'E02004433',
        '5RG' => 'E02004433',
        '5RH' => 'E02004433',
        '5RJ' => 'E02004433',
        '5RL' => 'E02004433',
        '5RN' => 'E02004433',
        '5RP' => 'E02004433',
        '5RQ' => 'E02004433',
        '5RR' => 'E02004433',
        '5RS' => 'E02004433',
        '5RT' => 'E02004439',
        '5RU' => 'E02004439',
        '5RW' => 'E02004433',
        '5RX' => 'E02004433',
        '5RY' => 'E02004433',
        '5RZ' => 'E02004433',
        '5SA' => 'E02004433',
        '5SB' => 'E02004433',
        '5SD' => 'E02004438',
        '5SE' => 'E02004433',
        '5SF' => 'E02004433',
        '5SG' => 'E02004433',
        '5SH' => 'E02004433',
        '5SJ' => 'E02004433',
        '5SL' => 'E02004433',
        '5SN' => 'E02004433',
        '5SP' => 'E02004433',
        '5SQ' => 'E02004433',
        '5SR' => 'E02004433',
        '5SS' => 'E02004433',
        '5ST' => 'E02004433',
        '5SU' => 'E02004433',
        '5SW' => 'E02004433',
        '5SX' => 'E02004433',
        '5SY' => 'E02004433',
        '5SZ' => 'E02004433',
        '5TA' => 'E02004433',
        '5TB' => 'E02004433',
        '5TE' => 'E02004439',
        '5TF' => 'E02004439',
        '5TG' => 'E02004439',
        '5TH' => 'E02004439',
        '5TJ' => 'E02004439',
        '5TL' => 'E02004437',
        '5TN' => 'E02004437',
        '5TP' => 'E02004439',
        '5TQ' => 'E02004439',
        '5TR' => 'E02004439',
        '5TS' => 'E02004433',
        '5TT' => 'E02004440',
        '5TU' => 'E02004440',
        '5TW' => 'E02004439',
        '5TX' => 'E02004439',
        '5TY' => 'E02004433',
        '5TZ' => 'E02004439',
        '5UA' => 'E02004439',
        '5UB' => 'E02004439',
        '5UD' => 'E02004439',
        '5UE' => 'E02004439',
        '5UF' => 'E02004439',
        '5UG' => 'E02004439',
        '5UH' => 'E02004439',
        '5UJ' => 'E02004439',
        '5UL' => 'E02004440',
        '5UN' => 'E02004440',
        '5UP' => 'E02004439',
        '5UQ' => 'E02004439',
        '5UR' => 'E02004439',
        '5US' => 'E02004439',
        '5UT' => 'E02004439',
        '5UU' => 'E02004439',
        '5UW' => 'E02004439',
        '5UX' => 'E02004439',
        '5UY' => 'E02004439',
        '5UZ' => 'E02004439',
        '5WA' => 'E02004439',
        '5WB' => 'E02004439',
        '5WD' => 'E02004439',
        '5WE' => 'E02004439',
        '5WF' => 'E02004439',
        '5WG' => 'E02004439',
        '5WH' => 'E02004439',
        '5WJ' => 'E02004439',
        '5WL' => 'E02004439',
        '5WN' => 'E02004439',
        '5WP' => 'E02004439',
        '5WQ' => 'E02004439',
        '5WR' => 'E02004439',
        '5WS' => 'E02004439',
        '5WT' => 'E02004439',
        '5WU' => 'E02004438',
        '5WW' => 'E02004439',
        '5WX' => 'E02004439',
        '5WY' => 'E02004438',
        '5WZ' => 'E02004438',
        '5XA' => 'E02004439',
        '5XB' => 'E02004439',
        '5XD' => 'E02004439',
        '5XE' => 'E02004439',
        '5XF' => 'E02004439',
        '5XG' => 'E02004439',
        '5XH' => 'E02004439',
        '5XJ' => 'E02004440',
        '5XL' => 'E02004439',
        '5XN' => 'E02004439',
        '5XP' => 'E02004439',
        '5XQ' => 'E02004439',
        '5XR' => 'E02004439',
        '5XS' => 'E02004439',
        '5XT' => 'E02004439',
        '5XU' => 'E02004439',
        '5XW' => 'E02004439',
        '5XX' => 'E02004439',
        '5XY' => 'E02004438',
        '5XZ' => 'E02004438',
        '5YA' => 'E02004439',
        '5YB' => 'E02004439',
        '5YD' => 'E02004439',
        '5YE' => 'E02004439',
        '5YF' => 'E02004433',
        '5YG' => 'E02004433',
        '5YH' => 'E02004433',
        '5YJ' => 'E02004433',
        '5YL' => 'E02004439',
        '5YN' => 'E02004439',
        '5YP' => 'E02004439',
        '5YQ' => 'E02004433',
        '5YR' => 'E02004439',
        '5YS' => 'E02004439',
        '5YT' => 'E02004437',
        '5YU' => 'E02004433',
        '5YW' => 'E02004439',
        '5YX' => 'E02004433',
        '5YY' => 'E02004433',
        '5YZ' => 'E02004433',
        '5ZA' => 'E02004439',
        '5ZB' => 'E02004439',
        '5ZD' => 'E02004438',
        '5ZE' => 'E02004438',
        '5ZF' => 'E02004439',
        '5ZG' => 'E02004438',
        '5ZH' => 'E02004438',
        '5ZJ' => 'E02004438',
        '5ZL' => 'E02004438',
        '5ZN' => 'E02004438',
        '5ZP' => 'E02004438',
        '5ZQ' => 'E02004440',
        '5ZT' => 'E02004438',
        '6AA' => 'E02004439',
        '6AB' => 'E02004439',
        '6AD' => 'E02004438',
        '6AE' => 'E02004437',
        '6AF' => 'E02004437',
        '6AG' => 'E02004437',
        '6AH' => 'E02004437',
        '6AJ' => 'E02004437',
        '6AL' => 'E02004437',
        '6AN' => 'E02004437',
        '6AP' => 'E02004437',
        '6AQ' => 'E02004437',
        '6AR' => 'E02004437',
        '6AS' => 'E02004437',
        '6AT' => 'E02004437',
        '6AU' => 'E02004437',
        '6AW' => 'E02004437',
        '6AX' => 'E02004437',
        '6AY' => 'E02004437',
        '6AZ' => 'E02004437',
        '6BA' => 'E02004437',
        '6BB' => 'E02004437',
        '6BD' => 'E02004437',
        '6BE' => 'E02004437',
        '6BF' => 'E02004444',
        '6BG' => 'E02004437',
        '6BH' => 'E02004437',
        '6BJ' => 'E02004437',
        '6BL' => 'E02004437',
        '6BN' => 'E02004437',
        '6BP' => 'E02004437',
        '6BQ' => 'E02004437',
        '6BS' => 'E02004437',
        '6BT' => 'E02004437',
        '6BU' => 'E02004433',
        '6BW' => 'E02004437',
        '6BX' => 'E02004438',
        '6BY' => 'E02004437',
        '6BZ' => 'E02004437',
        '6DA' => 'E02004437',
        '6DB' => 'E02004433',
        '6DD' => 'E02004433',
        '6DE' => 'E02004433',
        '6DF' => 'E02004437',
        '6DG' => 'E02004437',
        '6DH' => 'E02004433',
        '6DJ' => 'E02004433',
        '6DL' => 'E02004437',
        '6DN' => 'E02004433',
        '6DP' => 'E02004433',
        '6DQ' => 'E02004433',
        '6DR' => 'E02004433',
        '6DS' => 'E02004433',
        '6DT' => 'E02004433',
        '6DU' => 'E02004433',
        '6DW' => 'E02004433',
        '6DX' => 'E02004437',
        '6DY' => 'E02004437',
        '6DZ' => 'E02004437',
        '6EA' => 'E02004437',
        '6EB' => 'E02004437',
        '6ED' => 'E02004433',
        '6EE' => 'E02004437',
        '6EF' => 'E02004437',
        '6EG' => 'E02004433',
        '6EH' => 'E02004437',
        '6EJ' => 'E02004437',
        '6EL' => 'E02004437',
        '6EN' => 'E02004437',
        '6EP' => 'E02004437',
        '6EQ' => 'E02004438',
        '6ER' => 'E02004437',
        '6ES' => 'E02004437',
        '6ET' => 'E02004437',
        '6EU' => 'E02004437',
        '6EW' => 'E02004437',
        '6EX' => 'E02004437',
        '6EY' => 'E02004437',
        '6EZ' => 'E02004437',
        '6FA' => 'E02004437',
        '6FB' => 'E02004437',
        '6FD' => 'E02004437',
        '6FE' => 'E02004437',
        '6FF' => 'E02004438',
        '6FG' => 'E02004437',
        '6FQ' => 'E02004437',
        '6FU' => 'E02004437',
        '6FY' => 'E02004437',
        '6GB' => 'E02004437',
        '6GE' => 'E02004438',
        '6GF' => 'E02004437',
        '6GH' => 'E02004437',
        '6GJ' => 'E02004437',
        '6GN' => 'E02004437',
        '6GP' => 'E02004433',
        '6GQ' => 'E02004437',
        '6GR' => 'E02004437',
        '6GS' => 'E02004433',
        '6GT' => 'E02004437',
        '6GU' => 'E02004437',
        '6GW' => 'E02004437',
        '6GX' => 'E02004438',
        '6GY' => 'E02004437',
        '6GZ' => 'E02004438',
        '6HA' => 'E02004437',
        '6HD' => 'E02004437',
        '6HE' => 'E02004437',
        '6HF' => 'E02004437',
        '6HG' => 'E02004437',
        '6HH' => 'E02004437',
        '6HJ' => 'E02004437',
        '6HL' => 'E02004437',
        '6HN' => 'E02004437',
        '6HP' => 'E02004437',
        '6HQ' => 'E02004437',
        '6HR' => 'E02004437',
        '6HS' => 'E02004437',
        '6HT' => 'E02004437',
        '6HU' => 'E02004437',
        '6HW' => 'E02004437',
        '6HX' => 'E02004437',
        '6HY' => 'E02004437',
        '6HZ' => 'E02004437',
        '6JA' => 'E02004437',
        '6JB' => 'E02004437',
        '6JD' => 'E02004437',
        '6JE' => 'E02004437',
        '6JF' => 'E02004437',
        '6JG' => 'E02004437',
        '6JH' => 'E02004437',
        '6JJ' => 'E02004437',
        '6JL' => 'E02004438',
        '6JN' => 'E02004437',
        '6JP' => 'E02004437',
        '6JQ' => 'E02004437',
        '6JR' => 'E02004437',
        '6JS' => 'E02004437',
        '6JT' => 'E02004437',
        '6JU' => 'E02004437',
        '6JW' => 'E02004437',
        '6JX' => 'E02004437',
        '6JY' => 'E02004437',
        '6JZ' => 'E02004437',
        '6LA' => 'E02004437',
        '6LB' => 'E02004438',
        '6LD' => 'E02004437',
        '6LE' => 'E02004437',
        '6LF' => 'E02004437',
        '6LG' => 'E02004437',
        '6LH' => 'E02004438',
        '6LJ' => 'E02004437',
        '6LL' => 'E02004444',
        '6LN' => 'E02004437',
        '6LP' => 'E02004437',
        '6LQ' => 'E02004437',
        '6LR' => 'E02004438',
        '6LS' => 'E02004437',
        '6LT' => 'E02004437',
        '6LU' => 'E02004437',
        '6LW' => 'E02004437',
        '6LX' => 'E02004437',
        '6LY' => 'E02004437',
        '6LZ' => 'E02004437',
        '6NA' => 'E02004437',
        '6NB' => 'E02004437',
        '6ND' => 'E02004437',
        '6NE' => 'E02004437',
        '6NF' => 'E02004437',
        '6NG' => 'E02004437',
        '6NL' => 'E02004439',
        '6NN' => 'E02004437',
        '6NP' => 'E02004439',
        '6NQ' => 'E02004437',
        '6NR' => 'E02004437',
        '6NS' => 'E02004437',
        '6NT' => 'E02004439',
        '6NU' => 'E02004437',
        '6NW' => 'E02004437',
        '6NX' => 'E02004437',
        '6NY' => 'E02004437',
        '6NZ' => 'E02004437',
        '6PA' => 'E02004437',
        '6PB' => 'E02004444',
        '6PD' => 'E02004439',
        '6PE' => 'E02004437',
        '6PF' => 'E02004439',
        '6PG' => 'E02004437',
        '6PH' => 'E02004437',
        '6PJ' => 'E02004437',
        '6PL' => 'E02004437',
        '6PN' => 'E02004439',
        '6PP' => 'E02004437',
        '6PQ' => 'E02004439',
        '6PR' => 'E02004437',
        '6PS' => 'E02004437',
        '6PT' => 'E02004437',
        '6PU' => 'E02004437',
        '6PW' => 'E02004437',
        '6PX' => 'E02004437',
        '6PY' => 'E02004437',
        '6PZ' => 'E02004437',
        '6QA' => 'E02004437',
        '6QB' => 'E02004437',
        '6QD' => 'E02004437',
        '6QE' => 'E02004437',
        '6QF' => 'E02004437',
        '6QG' => 'E02004437',
        '6QH' => 'E02004437',
        '6QJ' => 'E02004437',
        '6QL' => 'E02004437',
        '6QN' => 'E02004437',
        '6QP' => 'E02004437',
        '6QQ' => 'E02004437',
        '6QR' => 'E02004437',
        '6QS' => 'E02004437',
        '6QT' => 'E02004437',
        '6QU' => 'E02004437',
        '6QW' => 'E02004437',
        '6QX' => 'E02004437',
        '6QY' => 'E02004437',
        '6QZ' => 'E02004437',
        '6RA' => 'E02004437',
        '6RB' => 'E02004437',
        '6RD' => 'E02004437',
        '6RE' => 'E02004437',
        '6RF' => 'E02004437',
        '6RG' => 'E02004437',
        '6RH' => 'E02004437',
        '6RJ' => 'E02004437',
        '6RL' => 'E02004437',
        '6RP' => 'E02004437',
        '6RQ' => 'E02004437',
        '6RS' => 'E02004437',
        '6RT' => 'E02004437',
        '6RW' => 'E02004437',
        '6RZ' => 'E02004437',
        '6SA' => 'E02004437',
        '6SB' => 'E02004437',
        '6SD' => 'E02004437',
        '6SE' => 'E02004437',
        '6SF' => 'E02004437',
        '6SG' => 'E02004437',
        '6SH' => 'E02004437',
        '6SJ' => 'E02004437',
        '6SL' => 'E02004437',
        '6SN' => 'E02004437',
        '6SP' => 'E02004437',
        '6SQ' => 'E02004437',
        '6SR' => 'E02004437',
        '6SS' => 'E02004437',
        '6ST' => 'E02004437',
        '6SU' => 'E02004437',
        '6SW' => 'E02004437',
        '6SX' => 'E02004437',
        '6SY' => 'E02004437',
        '6SZ' => 'E02004437',
        '6TA' => 'E02004437',
        '6TB' => 'E02004437',
        '6TD' => 'E02004437',
        '6TE' => 'E02004437',
        '6TF' => 'E02004437',
        '6TG' => 'E02004437',
        '6TH' => 'E02004437',
        '6TJ' => 'E02004444',
        '6TL' => 'E02004437',
        '6TN' => 'E02004437',
        '6TP' => 'E02004437',
        '6TQ' => 'E02004437',
        '6TR' => 'E02004437',
        '6TS' => 'E02004437',
        '6TT' => 'E02004438',
        '6TU' => 'E02004437',
        '6TW' => 'E02004437',
        '6TX' => 'E02004437',
        '6TY' => 'E02004437',
        '6TZ' => 'E02004438',
        '6UA' => 'E02004439',
        '6UB' => 'E02004437',
        '6UD' => 'E02004437',
        '6UE' => 'E02004437',
        '6UJ' => 'E02004437',
        '6UP' => 'E02004437',
        '6WA' => 'E02004437',
        '6WP' => 'E02004437',
        '6YU' => 'E02004437',
        '6YW' => 'E02004438',
        '6YX' => 'E02004438',
        '6YY' => 'E02004437',
        '6YZ' => 'E02004438',
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