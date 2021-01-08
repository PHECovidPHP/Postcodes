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
final class SY2
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '2PZ' => 'E02006035',
        '5AA' => 'E02006033',
        '5AB' => 'E02006033',
        '5AD' => 'E02006033',
        '5AE' => 'E02006033',
        '5AF' => 'E02006033',
        '5AG' => 'E02006033',
        '5AH' => 'E02006033',
        '5AJ' => 'E02006033',
        '5AL' => 'E02006033',
        '5AN' => 'E02006033',
        '5AP' => 'E02006033',
        '5AQ' => 'E02006033',
        '5AR' => 'E02006032',
        '5AS' => 'E02006032',
        '5AT' => 'E02006032',
        '5AU' => 'E02006032',
        '5AW' => 'E02006033',
        '5AX' => 'E02006032',
        '5AY' => 'E02006032',
        '5AZ' => 'E02006032',
        '5BA' => 'E02006032',
        '5BB' => 'E02006032',
        '5BD' => 'E02006032',
        '5BE' => 'E02006032',
        '5BF' => 'E02006033',
        '5BG' => 'E02006032',
        '5BH' => 'E02006032',
        '5BJ' => 'E02006032',
        '5BL' => 'E02006032',
        '5BN' => 'E02006032',
        '5BP' => 'E02006032',
        '5BQ' => 'E02006032',
        '5BS' => 'E02006032',
        '5BT' => 'E02006032',
        '5BU' => 'E02006032',
        '5BW' => 'E02006032',
        '5BX' => 'E02006032',
        '5BY' => 'E02006033',
        '5BZ' => 'E02006032',
        '5DA' => 'E02006033',
        '5DB' => 'E02006033',
        '5DD' => 'E02006032',
        '5DE' => 'E02006033',
        '5DF' => 'E02006033',
        '5DG' => 'E02006033',
        '5DH' => 'E02006033',
        '5DJ' => 'E02006032',
        '5DL' => 'E02006033',
        '5DN' => 'E02006032',
        '5DP' => 'E02006033',
        '5DQ' => 'E02006033',
        '5DR' => 'E02006033',
        '5DS' => 'E02006032',
        '5DT' => 'E02006033',
        '5DU' => 'E02006032',
        '5DW' => 'E02006033',
        '5DX' => 'E02006032',
        '5DY' => 'E02006032',
        '5DZ' => 'E02006032',
        '5EA' => 'E02006032',
        '5EB' => 'E02006032',
        '5ED' => 'E02006032',
        '5EE' => 'E02006032',
        '5EF' => 'E02006032',
        '5EG' => 'E02006032',
        '5EH' => 'E02006033',
        '5EJ' => 'E02006032',
        '5EL' => 'E02006032',
        '5EN' => 'E02006033',
        '5EP' => 'E02006035',
        '5EQ' => 'E02006032',
        '5ER' => 'E02006033',
        '5ES' => 'E02006033',
        '5ET' => 'E02006033',
        '5EU' => 'E02006033',
        '5EW' => 'E02006033',
        '5EX' => 'E02006032',
        '5EY' => 'E02006033',
        '5EZ' => 'E02006033',
        '5GA' => 'E02006032',
        '5GB' => 'E02006033',
        '5GY' => 'E02006035',
        '5HA' => 'E02006033',
        '5HB' => 'E02006032',
        '5HD' => 'E02006032',
        '5HE' => 'E02006032',
        '5HF' => 'E02006032',
        '5HG' => 'E02006033',
        '5HH' => 'E02006032',
        '5HJ' => 'E02006032',
        '5HL' => 'E02006032',
        '5HN' => 'E02006032',
        '5HP' => 'E02006032',
        '5HQ' => 'E02006032',
        '5HR' => 'E02006035',
        '5HS' => 'E02006032',
        '5HT' => 'E02006032',
        '5HU' => 'E02006032',
        '5HW' => 'E02006032',
        '5HX' => 'E02006032',
        '5HY' => 'E02006032',
        '5HZ' => 'E02006032',
        '5JA' => 'E02006032',
        '5JB' => 'E02006032',
        '5JD' => 'E02006032',
        '5JE' => 'E02006032',
        '5JF' => 'E02006032',
        '5JG' => 'E02006032',
        '5JH' => 'E02006032',
        '5JJ' => 'E02006032',
        '5JL' => 'E02006032',
        '5JN' => 'E02006032',
        '5JP' => 'E02006032',
        '5JQ' => 'E02006032',
        '5JR' => 'E02006032',
        '5JS' => 'E02006032',
        '5JT' => 'E02006032',
        '5JU' => 'E02006032',
        '5JW' => 'E02006032',
        '5JX' => 'E02006032',
        '5JY' => 'E02006032',
        '5JZ' => 'E02006032',
        '5LA' => 'E02006032',
        '5LB' => 'E02006032',
        '5LD' => 'E02006032',
        '5LE' => 'E02006032',
        '5LF' => 'E02006032',
        '5LG' => 'E02006032',
        '5LH' => 'E02006032',
        '5LJ' => 'E02006032',
        '5LL' => 'E02006032',
        '5LN' => 'E02006032',
        '5LP' => 'E02006035',
        '5LQ' => 'E02006032',
        '5LR' => 'E02006035',
        '5LS' => 'E02006035',
        '5LT' => 'E02006035',
        '5LU' => 'E02006035',
        '5LW' => 'E02006032',
        '5LX' => 'E02006035',
        '5LY' => 'E02006035',
        '5LZ' => 'E02006035',
        '5NA' => 'E02006035',
        '5NB' => 'E02006035',
        '5ND' => 'E02006035',
        '5NE' => 'E02006035',
        '5NF' => 'E02006035',
        '5NG' => 'E02006035',
        '5NH' => 'E02006035',
        '5NJ' => 'E02006035',
        '5NL' => 'E02006035',
        '5NN' => 'E02006035',
        '5NP' => 'E02006035',
        '5NQ' => 'E02006035',
        '5NR' => 'E02006035',
        '5NS' => 'E02006035',
        '5NT' => 'E02006035',
        '5NU' => 'E02006035',
        '5NW' => 'E02006035',
        '5NX' => 'E02006035',
        '5NY' => 'E02006035',
        '5NZ' => 'E02006035',
        '5PA' => 'E02006035',
        '5PB' => 'E02006035',
        '5PD' => 'E02006035',
        '5PE' => 'E02006035',
        '5PF' => 'E02006035',
        '5PG' => 'E02006035',
        '5PH' => 'E02006035',
        '5PJ' => 'E02006035',
        '5PL' => 'E02006035',
        '5PN' => 'E02006035',
        '5PP' => 'E02006035',
        '5PQ' => 'E02006035',
        '5PR' => 'E02006032',
        '5PS' => 'E02006032',
        '5PT' => 'E02006032',
        '5PU' => 'E02006032',
        '5PW' => 'E02006035',
        '5PX' => 'E02006032',
        '5PY' => 'E02006032',
        '5PZ' => 'E02006032',
        '5QA' => 'E02006032',
        '5QB' => 'E02006032',
        '5QD' => 'E02006032',
        '5QE' => 'E02006032',
        '5QF' => 'E02006032',
        '5QG' => 'E02006032',
        '5QH' => 'E02006032',
        '5QJ' => 'E02006032',
        '5QL' => 'E02006032',
        '5QN' => 'E02006032',
        '5QP' => 'E02006032',
        '5QQ' => 'E02006032',
        '5QR' => 'E02006032',
        '5QS' => 'E02006032',
        '5QT' => 'E02006032',
        '5QU' => 'E02006032',
        '5QW' => 'E02006032',
        '5QX' => 'E02006032',
        '5QY' => 'E02006032',
        '5QZ' => 'E02006032',
        '5RA' => 'E02006032',
        '5RB' => 'E02006032',
        '5RD' => 'E02006032',
        '5RE' => 'E02006032',
        '5RF' => 'E02006032',
        '5RG' => 'E02006032',
        '5RH' => 'E02006032',
        '5RJ' => 'E02006032',
        '5RL' => 'E02006032',
        '5RN' => 'E02006032',
        '5RP' => 'E02006032',
        '5RQ' => 'E02006032',
        '5RR' => 'E02006032',
        '5RS' => 'E02006032',
        '5RT' => 'E02006032',
        '5RU' => 'E02006032',
        '5RW' => 'E02006032',
        '5RX' => 'E02006032',
        '5RY' => 'E02006032',
        '5RZ' => 'E02006032',
        '5SA' => 'E02006032',
        '5SB' => 'E02006032',
        '5SD' => 'E02006032',
        '5SE' => 'E02006032',
        '5SF' => 'E02006032',
        '5SG' => 'E02006032',
        '5SH' => 'E02006032',
        '5SJ' => 'E02006032',
        '5SL' => 'E02006032',
        '5SN' => 'E02006032',
        '5SP' => 'E02006032',
        '5SQ' => 'E02006032',
        '5SR' => 'E02006032',
        '5SS' => 'E02006032',
        '5ST' => 'E02006032',
        '5SU' => 'E02006032',
        '5SW' => 'E02006032',
        '5SX' => 'E02006032',
        '5SY' => 'E02006032',
        '5SZ' => 'E02006032',
        '5TA' => 'E02006032',
        '5TB' => 'E02006032',
        '5TD' => 'E02006032',
        '5TE' => 'E02006032',
        '5TF' => 'E02006032',
        '5TG' => 'E02006032',
        '5TH' => 'E02006035',
        '5TJ' => 'E02006032',
        '5TL' => 'E02006032',
        '5TN' => 'E02006032',
        '5TP' => 'E02006032',
        '5TQ' => 'E02006032',
        '5TR' => 'E02006032',
        '5TS' => 'E02006032',
        '5TT' => 'E02006032',
        '5TU' => 'E02006033',
        '5TW' => 'E02006032',
        '5TX' => 'E02006032',
        '5TY' => 'E02006032',
        '5TZ' => 'E02006032',
        '5UA' => 'E02006032',
        '5UB' => 'E02006032',
        '5UD' => 'E02006032',
        '5UE' => 'E02006032',
        '5UF' => 'E02006032',
        '5UG' => 'E02006032',
        '5UH' => 'E02006032',
        '5UJ' => 'E02006032',
        '5UL' => 'E02006032',
        '5UN' => 'E02006032',
        '5UP' => 'E02006032',
        '5UQ' => 'E02006032',
        '5UR' => 'E02006032',
        '5US' => 'E02006033',
        '5UT' => 'E02006032',
        '5UU' => 'E02006032',
        '5UW' => 'E02006032',
        '5UX' => 'E02006032',
        '5UY' => 'E02006032',
        '5UZ' => 'E02006032',
        '5WA' => 'E02006035',
        '5WB' => 'E02006035',
        '5WD' => 'E02006032',
        '5WE' => 'E02006033',
        '5WF' => 'E02006033',
        '5WG' => 'E02006033',
        '5WH' => 'E02006033',
        '5WJ' => 'E02006033',
        '5WL' => 'E02006035',
        '5WN' => 'E02006035',
        '5WP' => 'E02006033',
        '5WQ' => 'E02006033',
        '5WR' => 'E02006033',
        '5WS' => 'E02006032',
        '5WT' => 'E02006032',
        '5WU' => 'E02006033',
        '5WW' => 'E02006033',
        '5WX' => 'E02006033',
        '5WY' => 'E02006033',
        '5WZ' => 'E02006033',
        '5XA' => 'E02006032',
        '5XB' => 'E02006032',
        '5XD' => 'E02006032',
        '5XE' => 'E02006032',
        '5XF' => 'E02006032',
        '5XG' => 'E02006032',
        '5XH' => 'E02006032',
        '5XJ' => 'E02006032',
        '5XL' => 'E02006032',
        '5XN' => 'E02006032',
        '5XP' => 'E02006032',
        '5XQ' => 'E02006032',
        '5XR' => 'E02006032',
        '5XS' => 'E02006032',
        '5XT' => 'E02006032',
        '5XU' => 'E02006032',
        '5XW' => 'E02006032',
        '5XX' => 'E02006032',
        '5XY' => 'E02006033',
        '5XZ' => 'E02006032',
        '5YA' => 'E02006032',
        '5YB' => 'E02006032',
        '5YD' => 'E02006032',
        '5YE' => 'E02006032',
        '5YF' => 'E02006032',
        '5YG' => 'E02006032',
        '5YH' => 'E02006032',
        '5YJ' => 'E02006032',
        '5YL' => 'E02006032',
        '5YN' => 'E02006032',
        '5YP' => 'E02006032',
        '5YQ' => 'E02006032',
        '5YR' => 'E02006033',
        '5YS' => 'E02006032',
        '5YT' => 'E02006035',
        '5YU' => 'E02006035',
        '5YW' => 'E02006032',
        '5YX' => 'E02006033',
        '5YY' => 'E02006033',
        '5YZ' => 'E02006033',
        '5ZF' => 'E02006033',
        '5ZH' => 'E02006033',
        '5ZJ' => 'E02006033',
        '5ZR' => 'E02006033',
        '5ZS' => 'E02006033',
        '5ZU' => 'E02006033',
        '6AA' => 'E02006033',
        '6AB' => 'E02006033',
        '6AD' => 'E02006033',
        '6AE' => 'E02006033',
        '6AF' => 'E02006033',
        '6AG' => 'E02006033',
        '6AH' => 'E02006033',
        '6AJ' => 'E02006033',
        '6AL' => 'E02006033',
        '6AN' => 'E02006033',
        '6AP' => 'E02006033',
        '6AQ' => 'E02006033',
        '6AR' => 'E02006033',
        '6AS' => 'E02006033',
        '6AT' => 'E02006033',
        '6AU' => 'E02006033',
        '6AW' => 'E02006033',
        '6AX' => 'E02006035',
        '6AY' => 'E02006033',
        '6AZ' => 'E02006035',
        '6BA' => 'E02006033',
        '6BB' => 'E02006033',
        '6BD' => 'E02006033',
        '6BE' => 'E02006033',
        '6BF' => 'E02006033',
        '6BG' => 'E02006033',
        '6BH' => 'E02006033',
        '6BJ' => 'E02006035',
        '6BL' => 'E02006033',
        '6BN' => 'E02006033',
        '6BP' => 'E02006033',
        '6BQ' => 'E02006033',
        '6BS' => 'E02006033',
        '6BT' => 'E02006033',
        '6BU' => 'E02006033',
        '6BW' => 'E02006033',
        '6BX' => 'E02006033',
        '6BY' => 'E02006033',
        '6BZ' => 'E02006033',
        '6DA' => 'E02006033',
        '6DB' => 'E02006033',
        '6DD' => 'E02006035',
        '6DE' => 'E02006035',
        '6DF' => 'E02006035',
        '6DG' => 'E02006035',
        '6DH' => 'E02006035',
        '6DJ' => 'E02006035',
        '6DL' => 'E02006035',
        '6DN' => 'E02006035',
        '6DP' => 'E02006035',
        '6DQ' => 'E02006035',
        '6DR' => 'E02006035',
        '6DS' => 'E02006035',
        '6DT' => 'E02006035',
        '6DU' => 'E02006035',
        '6DW' => 'E02006035',
        '6DX' => 'E02006035',
        '6DY' => 'E02006035',
        '6DZ' => 'E02006035',
        '6EA' => 'E02006035',
        '6EB' => 'E02006035',
        '6ED' => 'E02006035',
        '6EE' => 'E02006035',
        '6EF' => 'E02006035',
        '6EG' => 'E02006035',
        '6EH' => 'E02006035',
        '6EJ' => 'E02006035',
        '6EL' => 'E02006035',
        '6EN' => 'E02006035',
        '6EP' => 'E02006035',
        '6EQ' => 'E02006035',
        '6ER' => 'E02006035',
        '6ES' => 'E02006035',
        '6ET' => 'E02006036',
        '6EU' => 'E02006035',
        '6EW' => 'E02006035',
        '6EX' => 'E02006036',
        '6EY' => 'E02006036',
        '6EZ' => 'E02006036',
        '6FA' => 'E02006036',
        '6FB' => 'E02006036',
        '6FD' => 'E02006033',
        '6FE' => 'E02006035',
        '6FF' => 'E02006036',
        '6FG' => 'E02006035',
        '6FH' => 'E02006036',
        '6FJ' => 'E02006036',
        '6FL' => 'E02006036',
        '6FN' => 'E02006036',
        '6FP' => 'E02006033',
        '6FQ' => 'E02006035',
        '6FR' => 'E02006033',
        '6FS' => 'E02006033',
        '6FT' => 'E02006036',
        '6FU' => 'E02006036',
        '6FW' => 'E02006036',
        '6FX' => 'E02006036',
        '6GA' => 'E02006033',
        '6GD' => 'E02006036',
        '6GE' => 'E02006036',
        '6GF' => 'E02006038',
        '6GG' => 'E02006035',
        '6GH' => 'E02006038',
        '6HA' => 'E02006036',
        '6HB' => 'E02006036',
        '6HD' => 'E02006036',
        '6HE' => 'E02006036',
        '6HF' => 'E02006036',
        '6HG' => 'E02006036',
        '6HH' => 'E02006036',
        '6HJ' => 'E02006036',
        '6HL' => 'E02006036',
        '6HN' => 'E02006036',
        '6HP' => 'E02006036',
        '6HQ' => 'E02006036',
        '6HR' => 'E02006036',
        '6HS' => 'E02006036',
        '6HT' => 'E02006036',
        '6HU' => 'E02006036',
        '6HW' => 'E02006036',
        '6HX' => 'E02006036',
        '6HY' => 'E02006036',
        '6HZ' => 'E02006036',
        '6JA' => 'E02006036',
        '6JB' => 'E02006036',
        '6JD' => 'E02006036',
        '6JE' => 'E02006036',
        '6JF' => 'E02006038',
        '6JG' => 'E02006038',
        '6JH' => 'E02006038',
        '6JJ' => 'E02006035',
        '6JL' => 'E02006038',
        '6JN' => 'E02006035',
        '6JP' => 'E02006035',
        '6JQ' => 'E02006035',
        '6JR' => 'E02006035',
        '6JS' => 'E02006035',
        '6JT' => 'E02006035',
        '6JU' => 'E02006035',
        '6JW' => 'E02006035',
        '6JX' => 'E02006035',
        '6JY' => 'E02006035',
        '6JZ' => 'E02006035',
        '6LA' => 'E02006035',
        '6LB' => 'E02006035',
        '6LD' => 'E02006035',
        '6LE' => 'E02006035',
        '6LF' => 'E02006035',
        '6LG' => 'E02006035',
        '6LH' => 'E02006035',
        '6LJ' => 'E02006035',
        '6LL' => 'E02006035',
        '6LN' => 'E02006035',
        '6LP' => 'E02006035',
        '6LQ' => 'E02006035',
        '6LR' => 'E02006035',
        '6LS' => 'E02006035',
        '6LT' => 'E02006035',
        '6LU' => 'E02006035',
        '6LW' => 'E02006035',
        '6LX' => 'E02006038',
        '6LY' => 'E02006035',
        '6LZ' => 'E02006035',
        '6NA' => 'E02006035',
        '6ND' => 'E02006035',
        '6NF' => 'E02006035',
        '6NG' => 'E02006035',
        '6NL' => 'E02006035',
        '6NN' => 'E02006035',
        '6NP' => 'E02006035',
        '6NQ' => 'E02006035',
        '6NS' => 'E02006035',
        '6NT' => 'E02006035',
        '6NU' => 'E02006035',
        '6NW' => 'E02006035',
        '6NX' => 'E02006035',
        '6NY' => 'E02006035',
        '6NZ' => 'E02006035',
        '6PA' => 'E02006035',
        '6PB' => 'E02006035',
        '6PD' => 'E02006035',
        '6PE' => 'E02006035',
        '6PF' => 'E02006035',
        '6PG' => 'E02006035',
        '6PH' => 'E02006035',
        '6PJ' => 'E02006035',
        '6PL' => 'E02006035',
        '6PN' => 'E02006035',
        '6PP' => 'E02006035',
        '6PQ' => 'E02006035',
        '6PR' => 'E02006035',
        '6PS' => 'E02006035',
        '6PT' => 'E02006035',
        '6PU' => 'E02006035',
        '6PW' => 'E02006035',
        '6PX' => 'E02006035',
        '6PY' => 'E02006035',
        '6PZ' => 'E02006035',
        '6QA' => 'E02006033',
        '6QH' => 'E02006036',
        '6QJ' => 'E02006036',
        '6QL' => 'E02006036',
        '6QN' => 'E02006036',
        '6QP' => 'E02006036',
        '6QQ' => 'E02006036',
        '6QR' => 'E02006036',
        '6QS' => 'E02006036',
        '6QT' => 'E02006036',
        '6QU' => 'E02006036',
        '6QW' => 'E02006036',
        '6QX' => 'E02006036',
        '6QY' => 'E02006036',
        '6QZ' => 'E02006036',
        '6RA' => 'E02006036',
        '6RB' => 'E02006036',
        '6RD' => 'E02006035',
        '6RE' => 'E02006036',
        '6RF' => 'E02006036',
        '6RG' => 'E02006035',
        '6RH' => 'E02006036',
        '6RJ' => 'E02006036',
        '6RQ' => 'E02006035',
        '6SA' => 'E02006035',
        '6SB' => 'E02006035',
        '6SD' => 'E02006035',
        '6SE' => 'E02006035',
        '6SF' => 'E02006035',
        '6SG' => 'E02006035',
        '6SH' => 'E02006035',
        '6SJ' => 'E02006035',
        '6SL' => 'E02006035',
        '6SN' => 'E02006035',
        '6SP' => 'E02006035',
        '6SQ' => 'E02006035',
        '6SR' => 'E02006035',
        '6SS' => 'E02006035',
        '6ST' => 'E02006036',
        '6SU' => 'E02006035',
        '6SW' => 'E02006035',
        '6SX' => 'E02006035',
        '6TA' => 'E02006035',
        '6TB' => 'E02006035',
        '6TD' => 'E02006035',
        '6TE' => 'E02006035',
        '6TF' => 'E02006035',
        '6TG' => 'E02006035',
        '6TH' => 'E02006035',
        '6TQ' => 'E02006035',
        '6UA' => 'E02006033',
        '6WA' => 'E02006033',
        '6WB' => 'E02006033',
        '6WD' => 'E02006033',
        '6WE' => 'E02006033',
        '6WF' => 'E02006033',
        '6WG' => 'E02006033',
        '6WH' => 'E02006033',
        '6WJ' => 'E02006033',
        '6WL' => 'E02006033',
        '6WN' => 'E02006033',
        '6WP' => 'E02006033',
        '6WQ' => 'E02006033',
        '6WR' => 'E02006033',
        '6WS' => 'E02006035',
        '6WT' => 'E02006033',
        '6WU' => 'E02006033',
        '6WW' => 'E02006033',
        '6WX' => 'E02006033',
        '6WY' => 'E02006033',
        '6WZ' => 'E02006033',
        '6XA' => 'E02006033',
        '6XB' => 'E02006033',
        '6XZ' => 'E02006033',
        '6YU' => 'E02006035',
        '6YX' => 'E02006033',
        '6ZW' => 'E02006033',
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
