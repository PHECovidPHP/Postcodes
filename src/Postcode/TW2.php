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
final class TW2
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '5AA' => 'E02000799',
        '5AB' => 'E02000799',
        '5AD' => 'E02000797',
        '5AE' => 'E02000797',
        '5AF' => 'E02000794',
        '5AG' => 'E02000797',
        '5AH' => 'E02000798',
        '5AJ' => 'E02000798',
        '5AL' => 'E02000798',
        '5AN' => 'E02000798',
        '5AP' => 'E02000798',
        '5AQ' => 'E02000797',
        '5AR' => 'E02000798',
        '5AS' => 'E02000798',
        '5AT' => 'E02000798',
        '5AU' => 'E02000798',
        '5AW' => 'E02000798',
        '5AX' => 'E02000798',
        '5AY' => 'E02000798',
        '5AZ' => 'E02000799',
        '5BA' => 'E02000545',
        '5BB' => 'E02000798',
        '5BD' => 'E02000798',
        '5BE' => 'E02000798',
        '5BF' => 'E02000545',
        '5BG' => 'E02000798',
        '5BH' => 'E02000798',
        '5BJ' => 'E02000794',
        '5BL' => 'E02000794',
        '5BN' => 'E02000798',
        '5BP' => 'E02000798',
        '5BQ' => 'E02000794',
        '5BS' => 'E02000798',
        '5BT' => 'E02000798',
        '5BU' => 'E02000798',
        '5BW' => 'E02000798',
        '5BX' => 'E02000798',
        '5BY' => 'E02000798',
        '5BZ' => 'E02000798',
        '5DA' => 'E02000798',
        '5DB' => 'E02000798',
        '5DD' => 'E02000798',
        '5DE' => 'E02000798',
        '5DF' => 'E02000798',
        '5DG' => 'E02000798',
        '5DH' => 'E02000798',
        '5DJ' => 'E02000798',
        '5DL' => 'E02000798',
        '5DN' => 'E02000794',
        '5DP' => 'E02000545',
        '5DQ' => 'E02000798',
        '5DR' => 'E02000794',
        '5DS' => 'E02000798',
        '5DT' => 'E02000798',
        '5DU' => 'E02000798',
        '5DW' => 'E02000798',
        '5DX' => 'E02000798',
        '5DY' => 'E02000798',
        '5DZ' => 'E02000798',
        '5EA' => 'E02000798',
        '5EB' => 'E02000798',
        '5ED' => 'E02000798',
        '5EE' => 'E02000798',
        '5EF' => 'E02000798',
        '5EG' => 'E02000798',
        '5EH' => 'E02000798',
        '5EJ' => 'E02000798',
        '5EL' => 'E02000798',
        '5EN' => 'E02000798',
        '5EP' => 'E02000798',
        '5EQ' => 'E02000798',
        '5ER' => 'E02000798',
        '5ES' => 'E02000794',
        '5ET' => 'E02000798',
        '5EU' => 'E02000798',
        '5EW' => 'E02000798',
        '5EX' => 'E02000798',
        '5EY' => 'E02000799',
        '5EZ' => 'E02000794',
        '5FA' => 'E02000794',
        '5FB' => 'E02000794',
        '5FD' => 'E02000794',
        '5FE' => 'E02000794',
        '5FF' => 'E02000794',
        '5FG' => 'E02000794',
        '5FH' => 'E02000794',
        '5FJ' => 'E02000794',
        '5FL' => 'E02000794',
        '5FN' => 'E02000798',
        '5FP' => 'E02000798',
        '5FQ' => 'E02000794',
        '5FR' => 'E02000798',
        '5FS' => 'E02000798',
        '5GF' => 'E02000798',
        '5HA' => 'E02000798',
        '5HB' => 'E02000798',
        '5HD' => 'E02000798',
        '5HE' => 'E02000798',
        '5HF' => 'E02000798',
        '5HG' => 'E02000798',
        '5HH' => 'E02000798',
        '5HJ' => 'E02000798',
        '5HL' => 'E02000798',
        '5HN' => 'E02000798',
        '5HP' => 'E02000798',
        '5HQ' => 'E02000798',
        '5HR' => 'E02000798',
        '5HW' => 'E02000798',
        '5JA' => 'E02000798',
        '5JB' => 'E02000798',
        '5JD' => 'E02000798',
        '5JE' => 'E02000798',
        '5JF' => 'E02000798',
        '5JG' => 'E02000545',
        '5JH' => 'E02000798',
        '5JJ' => 'E02000798',
        '5JL' => 'E02000798',
        '5JN' => 'E02000798',
        '5JP' => 'E02000798',
        '5JQ' => 'E02000798',
        '5JR' => 'E02000798',
        '5JS' => 'E02000798',
        '5JT' => 'E02000798',
        '5JU' => 'E02000798',
        '5JW' => 'E02000798',
        '5JX' => 'E02000798',
        '5JY' => 'E02000798',
        '5JZ' => 'E02000798',
        '5LA' => 'E02000798',
        '5LB' => 'E02000798',
        '5LD' => 'E02000798',
        '5LE' => 'E02000798',
        '5LF' => 'E02000798',
        '5LG' => 'E02000798',
        '5LH' => 'E02000798',
        '5LJ' => 'E02000798',
        '5LL' => 'E02000798',
        '5LN' => 'E02000798',
        '5LP' => 'E02000798',
        '5LQ' => 'E02000798',
        '5LR' => 'E02000798',
        '5LS' => 'E02000798',
        '5LT' => 'E02000798',
        '5LU' => 'E02000798',
        '5LW' => 'E02000798',
        '5LX' => 'E02000798',
        '5LY' => 'E02000798',
        '5LZ' => 'E02000798',
        '5NA' => 'E02000798',
        '5NB' => 'E02000798',
        '5ND' => 'E02000798',
        '5NE' => 'E02000798',
        '5NF' => 'E02000794',
        '5NG' => 'E02000799',
        '5NH' => 'E02000799',
        '5NJ' => 'E02000798',
        '5NL' => 'E02000799',
        '5NN' => 'E02000799',
        '5NP' => 'E02000799',
        '5NQ' => 'E02000799',
        '5NR' => 'E02000799',
        '5NS' => 'E02000801',
        '5NT' => 'E02000801',
        '5NU' => 'E02000799',
        '5NW' => 'E02000799',
        '5NX' => 'E02000801',
        '5NY' => 'E02000801',
        '5PA' => 'E02000798',
        '5PB' => 'E02000798',
        '5PD' => 'E02000798',
        '5PE' => 'E02000798',
        '5PF' => 'E02000798',
        '5PG' => 'E02000798',
        '5PH' => 'E02000798',
        '5PJ' => 'E02000798',
        '5PL' => 'E02000798',
        '5PN' => 'E02000798',
        '5PQ' => 'E02000798',
        '5PR' => 'E02000794',
        '5PS' => 'E02000798',
        '5PT' => 'E02000798',
        '5PU' => 'E02000798',
        '5PX' => 'E02000798',
        '5PY' => 'E02000798',
        '5PZ' => 'E02000799',
        '5QA' => 'E02000798',
        '5QB' => 'E02000798',
        '5QD' => 'E02000798',
        '5QE' => 'E02000799',
        '5QF' => 'E02000798',
        '5QG' => 'E02000799',
        '5QH' => 'E02000799',
        '5QJ' => 'E02000799',
        '5QL' => 'E02000799',
        '5QN' => 'E02000799',
        '5QP' => 'E02000799',
        '5QQ' => 'E02000798',
        '5QR' => 'E02000798',
        '5QS' => 'E02000798',
        '5QT' => 'E02000794',
        '5QU' => 'E02000798',
        '5QW' => 'E02000799',
        '5QX' => 'E02000798',
        '5QY' => 'E02000798',
        '5QZ' => 'E02000798',
        '5RA' => 'E02000798',
        '5RB' => 'E02000798',
        '5RD' => 'E02000798',
        '5RE' => 'E02000798',
        '5RF' => 'E02000798',
        '5RG' => 'E02000798',
        '5RH' => 'E02000799',
        '5RJ' => 'E02000799',
        '5RL' => 'E02000799',
        '5RN' => 'E02000799',
        '5RP' => 'E02000799',
        '5RQ' => 'E02000545',
        '5RR' => 'E02000799',
        '5RS' => 'E02000799',
        '5RT' => 'E02000799',
        '5RU' => 'E02000799',
        '5RW' => 'E02000799',
        '5RX' => 'E02000799',
        '5RY' => 'E02000799',
        '5RZ' => 'E02000799',
        '5SA' => 'E02000799',
        '5SB' => 'E02000799',
        '5SD' => 'E02000799',
        '5SE' => 'E02000799',
        '5SF' => 'E02000799',
        '5SG' => 'E02000799',
        '5SH' => 'E02000799',
        '5SJ' => 'E02000799',
        '5SL' => 'E02000799',
        '5SN' => 'E02000799',
        '5SP' => 'E02000799',
        '5SQ' => 'E02000799',
        '5SR' => 'E02000799',
        '5SS' => 'E02000799',
        '5ST' => 'E02000799',
        '5SW' => 'E02000799',
        '5SZ' => 'E02000799',
        '5TA' => 'E02000799',
        '5TB' => 'E02000799',
        '5TD' => 'E02000799',
        '5TE' => 'E02000799',
        '5TF' => 'E02000799',
        '5TG' => 'E02000799',
        '5TH' => 'E02000799',
        '5TJ' => 'E02000799',
        '5TL' => 'E02000799',
        '5TN' => 'E02000799',
        '5TP' => 'E02000799',
        '5TQ' => 'E02000799',
        '5TR' => 'E02000799',
        '5TS' => 'E02000799',
        '5TT' => 'E02000799',
        '5TU' => 'E02000799',
        '5TW' => 'E02000799',
        '5TX' => 'E02000799',
        '5TY' => 'E02000799',
        '5TZ' => 'E02000799',
        '5UA' => 'E02000799',
        '5UB' => 'E02000798',
        '5UD' => 'E02000798',
        '5UE' => 'E02000798',
        '5UF' => 'E02000798',
        '5UG' => 'E02000798',
        '5UH' => 'E02000798',
        '5UJ' => 'E02000798',
        '5UL' => 'E02000798',
        '5UP' => 'E02000798',
        '5UR' => 'E02000798',
        '5UW' => 'E02000798',
        '5UX' => 'E02000545',
        '5UY' => 'E02000545',
        '5UZ' => 'E02000794',
        '5WA' => 'E02000794',
        '5WB' => 'E02000794',
        '5WD' => 'E02000794',
        '5WE' => 'E02000794',
        '5WF' => 'E02000794',
        '5WG' => 'E02000794',
        '5WH' => 'E02000794',
        '5WJ' => 'E02000545',
        '5WL' => 'E02000794',
        '5WN' => 'E02000794',
        '5WP' => 'E02000794',
        '5WQ' => 'E02000794',
        '5WR' => 'E02000794',
        '5WS' => 'E02000794',
        '5WT' => 'E02000794',
        '5WU' => 'E02000794',
        '5WW' => 'E02000794',
        '5WX' => 'E02000545',
        '5WY' => 'E02000545',
        '5WZ' => 'E02000794',
        '5XA' => 'E02000794',
        '5XB' => 'E02000794',
        '5XD' => 'E02000794',
        '5XE' => 'E02000794',
        '5XF' => 'E02000794',
        '5XG' => 'E02000798',
        '5XH' => 'E02000794',
        '5XJ' => 'E02000798',
        '5XL' => 'E02000794',
        '5XN' => 'E02000794',
        '5XP' => 'E02000798',
        '5XQ' => 'E02000794',
        '5XR' => 'E02000794',
        '5XS' => 'E02000798',
        '5XT' => 'E02000794',
        '5XU' => 'E02000798',
        '5XW' => 'E02000798',
        '5XX' => 'E02000798',
        '5XY' => 'E02000794',
        '5XZ' => 'E02000794',
        '5YA' => 'E02000794',
        '5YB' => 'E02000798',
        '5YD' => 'E02000798',
        '5YE' => 'E02000794',
        '5YF' => 'E02000794',
        '5YG' => 'E02000798',
        '5YH' => 'E02000794',
        '5YJ' => 'E02000798',
        '5YL' => 'E02000798',
        '5YN' => 'E02000794',
        '5YP' => 'E02000798',
        '5YQ' => 'E02000794',
        '5YR' => 'E02000794',
        '5YS' => 'E02000798',
        '5YT' => 'E02000794',
        '5YU' => 'E02000794',
        '5YW' => 'E02000794',
        '5YX' => 'E02000794',
        '5YY' => 'E02000794',
        '5YZ' => 'E02000794',
        '5ZE' => 'E02000794',
        '5ZX' => 'E02000545',
        '5ZY' => 'E02000794',
        '6AA' => 'E02000796',
        '6AB' => 'E02000796',
        '6AD' => 'E02000796',
        '6AE' => 'E02000796',
        '6AF' => 'E02000796',
        '6AG' => 'E02000796',
        '6AH' => 'E02000796',
        '6AJ' => 'E02000796',
        '6AL' => 'E02000796',
        '6AN' => 'E02000796',
        '6AP' => 'E02000794',
        '6AQ' => 'E02000796',
        '6AR' => 'E02000796',
        '6AS' => 'E02000796',
        '6AT' => 'E02000796',
        '6AU' => 'E02000796',
        '6AW' => 'E02000796',
        '6AX' => 'E02000545',
        '6AY' => 'E02000797',
        '6AZ' => 'E02000797',
        '6BA' => 'E02000796',
        '6BB' => 'E02000796',
        '6BD' => 'E02000796',
        '6BE' => 'E02000796',
        '6BG' => 'E02000796',
        '6BH' => 'E02000796',
        '6BJ' => 'E02000796',
        '6BL' => 'E02000796',
        '6BN' => 'E02000796',
        '6BP' => 'E02000796',
        '6BQ' => 'E02000796',
        '6BS' => 'E02000796',
        '6BT' => 'E02000796',
        '6BU' => 'E02000796',
        '6BW' => 'E02000796',
        '6BX' => 'E02000796',
        '6BY' => 'E02000796',
        '6BZ' => 'E02000796',
        '6DA' => 'E02000796',
        '6DD' => 'E02000545',
        '6DE' => 'E02000796',
        '6DF' => 'E02000796',
        '6DG' => 'E02000796',
        '6DH' => 'E02000796',
        '6DJ' => 'E02000796',
        '6DL' => 'E02000796',
        '6DN' => 'E02000796',
        '6DP' => 'E02000796',
        '6DQ' => 'E02000796',
        '6DW' => 'E02000796',
        '6DZ' => 'E02000796',
        '6EA' => 'E02000796',
        '6EB' => 'E02000796',
        '6ED' => 'E02000796',
        '6EE' => 'E02000796',
        '6EF' => 'E02000796',
        '6EG' => 'E02000796',
        '6EH' => 'E02000796',
        '6EJ' => 'E02000796',
        '6EL' => 'E02000796',
        '6EN' => 'E02000796',
        '6EP' => 'E02000796',
        '6EQ' => 'E02000796',
        '6ER' => 'E02000796',
        '6ES' => 'E02000796',
        '6ET' => 'E02000794',
        '6EU' => 'E02000796',
        '6EW' => 'E02000796',
        '6EX' => 'E02000796',
        '6GB' => 'E02000796',
        '6HA' => 'E02000796',
        '6HB' => 'E02000796',
        '6HD' => 'E02000796',
        '6HE' => 'E02000796',
        '6HF' => 'E02000796',
        '6HG' => 'E02000796',
        '6HH' => 'E02000796',
        '6HJ' => 'E02000796',
        '6HL' => 'E02000796',
        '6HN' => 'E02000796',
        '6HP' => 'E02000796',
        '6HQ' => 'E02000796',
        '6HR' => 'E02000796',
        '6HS' => 'E02000796',
        '6HT' => 'E02000796',
        '6HU' => 'E02000796',
        '6HW' => 'E02000796',
        '6HX' => 'E02000796',
        '6HY' => 'E02000796',
        '6HZ' => 'E02000794',
        '6JA' => 'E02000796',
        '6JB' => 'E02000796',
        '6JD' => 'E02000796',
        '6JE' => 'E02000796',
        '6JF' => 'E02000796',
        '6JG' => 'E02000796',
        '6JH' => 'E02000796',
        '6JJ' => 'E02000796',
        '6JL' => 'E02000796',
        '6JN' => 'E02000796',
        '6JP' => 'E02000796',
        '6JQ' => 'E02000796',
        '6JR' => 'E02000796',
        '6JS' => 'E02000796',
        '6JT' => 'E02000796',
        '6JU' => 'E02000796',
        '6JW' => 'E02000796',
        '6JX' => 'E02000796',
        '6JY' => 'E02000796',
        '6JZ' => 'E02000794',
        '6LA' => 'E02000796',
        '6LB' => 'E02000796',
        '6LD' => 'E02000796',
        '6LE' => 'E02000796',
        '6LF' => 'E02000796',
        '6LG' => 'E02000796',
        '6LH' => 'E02000796',
        '6LJ' => 'E02000796',
        '6LL' => 'E02000796',
        '6LP' => 'E02000798',
        '6LQ' => 'E02000796',
        '6LR' => 'E02000798',
        '6LS' => 'E02000796',
        '6LT' => 'E02000798',
        '6LX' => 'E02000798',
        '6LY' => 'E02000798',
        '6NA' => 'E02000798',
        '6NB' => 'E02000798',
        '6ND' => 'E02000798',
        '6NE' => 'E02000798',
        '6NF' => 'E02000798',
        '6NG' => 'E02000798',
        '6NH' => 'E02000798',
        '6NJ' => 'E02000798',
        '6NL' => 'E02000798',
        '6NN' => 'E02000798',
        '6NP' => 'E02000798',
        '6NQ' => 'E02000798',
        '6NR' => 'E02000798',
        '6NS' => 'E02000798',
        '6NT' => 'E02000798',
        '6NU' => 'E02000798',
        '6NW' => 'E02000798',
        '6NX' => 'E02000798',
        '6NY' => 'E02000798',
        '6NZ' => 'E02000798',
        '6PA' => 'E02000798',
        '6PB' => 'E02000798',
        '6PD' => 'E02000798',
        '6PE' => 'E02000798',
        '6PF' => 'E02000798',
        '6PG' => 'E02000798',
        '6PH' => 'E02000798',
        '6PJ' => 'E02000798',
        '6PL' => 'E02000798',
        '6PN' => 'E02000798',
        '6PP' => 'E02000798',
        '6PQ' => 'E02000798',
        '6PR' => 'E02000798',
        '6PS' => 'E02000798',
        '6PT' => 'E02000798',
        '6PU' => 'E02000798',
        '6PW' => 'E02000798',
        '6PX' => 'E02000798',
        '6PY' => 'E02000798',
        '6PZ' => 'E02000798',
        '6QA' => 'E02000799',
        '6QD' => 'E02000799',
        '6QE' => 'E02000799',
        '6QF' => 'E02000799',
        '6QH' => 'E02000797',
        '6QJ' => 'E02000797',
        '6QL' => 'E02000797',
        '6QN' => 'E02000797',
        '6QP' => 'E02000797',
        '6QQ' => 'E02000799',
        '6QR' => 'E02000797',
        '6QS' => 'E02000797',
        '6QT' => 'E02000797',
        '6QW' => 'E02000797',
        '6QX' => 'E02000797',
        '6RA' => 'E02000797',
        '6RB' => 'E02000798',
        '6RD' => 'E02000797',
        '6RE' => 'E02000798',
        '6RF' => 'E02000797',
        '6RG' => 'E02000798',
        '6RH' => 'E02000797',
        '6RJ' => 'E02000797',
        '6RL' => 'E02000797',
        '6RN' => 'E02000797',
        '6RP' => 'E02000797',
        '6RQ' => 'E02000797',
        '6RR' => 'E02000797',
        '6RS' => 'E02000797',
        '6RT' => 'E02000797',
        '6RU' => 'E02000797',
        '6RW' => 'E02000797',
        '6RX' => 'E02000797',
        '6RY' => 'E02000797',
        '6RZ' => 'E02000797',
        '6SA' => 'E02000797',
        '6SB' => 'E02000797',
        '6SD' => 'E02000797',
        '6SG' => 'E02000799',
        '6SH' => 'E02000797',
        '6SJ' => 'E02000797',
        '6SL' => 'E02000797',
        '6SN' => 'E02000797',
        '6SP' => 'E02000799',
        '6SQ' => 'E02000797',
        '6SR' => 'E02000797',
        '6SS' => 'E02000799',
        '6ST' => 'E02000797',
        '6SU' => 'E02000799',
        '6SW' => 'E02000797',
        '6SX' => 'E02000797',
        '6SY' => 'E02000797',
        '6SZ' => 'E02000797',
        '6TB' => 'E02000797',
        '6TD' => 'E02000796',
        '6TE' => 'E02000797',
        '6TG' => 'E02000794',
        '6TH' => 'E02000794',
        '6TJ' => 'E02000797',
        '6TL' => 'E02000797',
        '6TN' => 'E02000797',
        '6TP' => 'E02000797',
        '6TQ' => 'E02000797',
        '6TR' => 'E02000797',
        '6TS' => 'E02000796',
        '6TT' => 'E02000796',
        '6TU' => 'E02000796',
        '6TW' => 'E02000797',
        '6TY' => 'E02000794',
        '6TZ' => 'E02000794',
        '6UA' => 'E02000796',
        '6UB' => 'E02000796',
        '6UD' => 'E02000796',
        '6UE' => 'E02000796',
        '6UF' => 'E02000796',
        '6UG' => 'E02000796',
        '6UH' => 'E02000794',
        '6UJ' => 'E02000794',
        '6UL' => 'E02000794',
        '6UN' => 'E02000794',
        '6UP' => 'E02000545',
        '6UQ' => 'E02000796',
        '6UR' => 'E02000794',
        '6US' => 'E02000794',
        '6UT' => 'E02000794',
        '6UU' => 'E02000545',
        '6UW' => 'E02000797',
        '6UX' => 'E02000794',
        '6WA' => 'E02000794',
        '6WB' => 'E02000794',
        '6WD' => 'E02000794',
        '6WE' => 'E02000794',
        '6WF' => 'E02000545',
        '6WG' => 'E02000794',
        '6WH' => 'E02000794',
        '6WJ' => 'E02000794',
        '6WN' => 'E02000794',
        '6WX' => 'E02000794',
        '6WY' => 'E02000794',
        '6WZ' => 'E02000794',
        '6XT' => 'E02000545',
        '6XZ' => 'E02000545',
        '6YP' => 'E02000794',
        '6YQ' => 'E02000545',
        '6YT' => 'E02000794',
        '6YZ' => 'E02000794',
        '7AA' => 'E02000793',
        '7AB' => 'E02000793',
        '7AD' => 'E02000793',
        '7AE' => 'E02000793',
        '7AF' => 'E02000793',
        '7AG' => 'E02000793',
        '7AH' => 'E02000796',
        '7AJ' => 'E02000796',
        '7AL' => 'E02000793',
        '7AN' => 'E02000793',
        '7AP' => 'E02000793',
        '7AQ' => 'E02000793',
        '7AR' => 'E02000793',
        '7AS' => 'E02000793',
        '7AT' => 'E02000793',
        '7AU' => 'E02000793',
        '7AW' => 'E02000793',
        '7AX' => 'E02000793',
        '7AY' => 'E02000793',
        '7AZ' => 'E02000793',
        '7BA' => 'E02000794',
        '7BB' => 'E02000793',
        '7BD' => 'E02000793',
        '7BE' => 'E02000793',
        '7BF' => 'E02000793',
        '7BG' => 'E02000793',
        '7BH' => 'E02000793',
        '7BJ' => 'E02000793',
        '7BL' => 'E02000793',
        '7BN' => 'E02000793',
        '7BP' => 'E02000793',
        '7BQ' => 'E02000793',
        '7BS' => 'E02000793',
        '7BT' => 'E02000793',
        '7BU' => 'E02000793',
        '7BW' => 'E02000793',
        '7BX' => 'E02000793',
        '7BY' => 'E02000793',
        '7BZ' => 'E02000793',
        '7DA' => 'E02000793',
        '7DB' => 'E02000793',
        '7DD' => 'E02000793',
        '7DE' => 'E02000793',
        '7DF' => 'E02000793',
        '7DG' => 'E02000793',
        '7DH' => 'E02000793',
        '7DJ' => 'E02000793',
        '7DL' => 'E02000793',
        '7DN' => 'E02000793',
        '7DP' => 'E02000793',
        '7DQ' => 'E02000793',
        '7DR' => 'E02000793',
        '7DS' => 'E02000793',
        '7DT' => 'E02000793',
        '7DU' => 'E02000793',
        '7DW' => 'E02000793',
        '7DX' => 'E02000793',
        '7DY' => 'E02000793',
        '7DZ' => 'E02000793',
        '7EA' => 'E02000793',
        '7EB' => 'E02000793',
        '7ED' => 'E02000793',
        '7EE' => 'E02000793',
        '7EF' => 'E02000793',
        '7EG' => 'E02000794',
        '7EH' => 'E02000793',
        '7EJ' => 'E02000793',
        '7EL' => 'E02000793',
        '7EN' => 'E02000793',
        '7EP' => 'E02000793',
        '7EQ' => 'E02000793',
        '7ER' => 'E02000793',
        '7ES' => 'E02000793',
        '7ET' => 'E02000793',
        '7EU' => 'E02000793',
        '7EW' => 'E02000793',
        '7EX' => 'E02000793',
        '7EY' => 'E02000793',
        '7EZ' => 'E02000793',
        '7FA' => 'E02000794',
        '7HA' => 'E02000793',
        '7HB' => 'E02000793',
        '7HD' => 'E02000793',
        '7HE' => 'E02000793',
        '7HF' => 'E02000793',
        '7HG' => 'E02000793',
        '7HH' => 'E02000793',
        '7HJ' => 'E02000793',
        '7HL' => 'E02000793',
        '7HN' => 'E02000793',
        '7HP' => 'E02000793',
        '7HQ' => 'E02000793',
        '7HR' => 'E02000545',
        '7HS' => 'E02000793',
        '7HT' => 'E02000793',
        '7HW' => 'E02000794',
        '7HX' => 'E02000793',
        '7HY' => 'E02000793',
        '7HZ' => 'E02000793',
        '7JA' => 'E02000793',
        '7JB' => 'E02000793',
        '7JD' => 'E02000793',
        '7JE' => 'E02000793',
        '7JF' => 'E02000793',
        '7JG' => 'E02000793',
        '7JH' => 'E02000793',
        '7JJ' => 'E02000793',
        '7JL' => 'E02000793',
        '7JN' => 'E02000545',
        '7JQ' => 'E02000793',
        '7JU' => 'E02000793',
        '7JW' => 'E02000793',
        '7JX' => 'E02000793',
        '7JY' => 'E02000793',
        '7JZ' => 'E02000793',
        '7LA' => 'E02000793',
        '7LB' => 'E02000793',
        '7LD' => 'E02000793',
        '7LE' => 'E02000793',
        '7LF' => 'E02000793',
        '7LG' => 'E02000793',
        '7LH' => 'E02000793',
        '7LJ' => 'E02000793',
        '7LL' => 'E02000793',
        '7LN' => 'E02000793',
        '7LP' => 'E02000793',
        '7LQ' => 'E02000793',
        '7LR' => 'E02000793',
        '7LS' => 'E02000793',
        '7LT' => 'E02000793',
        '7LU' => 'E02000793',
        '7LW' => 'E02000793',
        '7LX' => 'E02000793',
        '7LY' => 'E02000793',
        '7NG' => 'E02000793',
        '7NH' => 'E02000793',
        '7NJ' => 'E02000794',
        '7NL' => 'E02000794',
        '7NN' => 'E02000793',
        '7NP' => 'E02000793',
        '7NQ' => 'E02000794',
        '7NR' => 'E02000793',
        '7NS' => 'E02000794',
        '7NT' => 'E02000793',
        '7NU' => 'E02000793',
        '7NW' => 'E02000793',
        '7NX' => 'E02000793',
        '7NY' => 'E02000793',
        '7PA' => 'E02000794',
        '7PB' => 'E02000794',
        '7PD' => 'E02000794',
        '7PE' => 'E02000794',
        '7PF' => 'E02000794',
        '7PG' => 'E02000794',
        '7PH' => 'E02000794',
        '7PJ' => 'E02000794',
        '7PL' => 'E02000794',
        '7PQ' => 'E02000794',
        '7PR' => 'E02000794',
        '7PS' => 'E02000794',
        '7PT' => 'E02000794',
        '7PU' => 'E02000794',
        '7PX' => 'E02000794',
        '7PY' => 'E02000794',
        '7PZ' => 'E02000794',
        '7QA' => 'E02000794',
        '7QB' => 'E02000794',
        '7QJ' => 'E02000794',
        '7QL' => 'E02000794',
        '7QN' => 'E02000794',
        '7QP' => 'E02000794',
        '7QR' => 'E02000794',
        '7QS' => 'E02000794',
        '7QT' => 'E02000794',
        '7QU' => 'E02000794',
        '7QW' => 'E02000794',
        '7QX' => 'E02000794',
        '7QY' => 'E02000794',
        '7QZ' => 'E02000794',
        '7RA' => 'E02000794',
        '7RB' => 'E02000794',
        '7RD' => 'E02000794',
        '7RE' => 'E02000794',
        '7RF' => 'E02000794',
        '7RG' => 'E02000794',
        '7RH' => 'E02000794',
        '7RJ' => 'E02000794',
        '7RL' => 'E02000794',
        '7RN' => 'E02000794',
        '7RQ' => 'E02000794',
        '7RU' => 'E02000794',
        '7RX' => 'E02000794',
        '7RY' => 'E02000794',
        '7RZ' => 'E02000794',
        '7SA' => 'E02000794',
        '7SB' => 'E02000794',
        '7SD' => 'E02000794',
        '7SE' => 'E02000794',
        '7SF' => 'E02000794',
        '7SG' => 'E02000794',
        '7SH' => 'E02000794',
        '7SJ' => 'E02000794',
        '7SL' => 'E02000794',
        '7SN' => 'E02000794',
        '7SP' => 'E02000794',
        '7SQ' => 'E02000794',
        '7SR' => 'E02000794',
        '7SS' => 'E02000794',
        '7ST' => 'E02000794',
        '7SU' => 'E02000794',
        '7SW' => 'E02000794',
        '7SX' => 'E02000794',
        '7SY' => 'E02000794',
        '7SZ' => 'E02000794',
        '7TA' => 'E02000794',
        '7TB' => 'E02000794',
        '7TD' => 'E02000798',
        '7TE' => 'E02000794',
        '7TF' => 'E02000794',
        '7TG' => 'E02000794',
        '7TH' => 'E02000794',
        '7TJ' => 'E02000794',
        '7TL' => 'E02000794',
        '7TN' => 'E02000794',
        '7TP' => 'E02000794',
        '7TQ' => 'E02000794',
        '7TR' => 'E02000794',
        '7TS' => 'E02000545',
        '7TT' => 'E02000794',
        '7TU' => 'E02000794',
        '7TW' => 'E02000794',
        '7TX' => 'E02000794',
        '7TY' => 'E02000794',
        '7TZ' => 'E02000794',
        '7UA' => 'E02000794',
        '7UB' => 'E02000794',
        '7UD' => 'E02000794',
        '7UE' => 'E02000794',
        '7UF' => 'E02000794',
        '7UG' => 'E02000794',
        '7UH' => 'E02000794',
        '7UJ' => 'E02000794',
        '7UL' => 'E02000545',
        '7UN' => 'E02000794',
        '7UP' => 'E02000794',
        '7UQ' => 'E02000794',
        '7UR' => 'E02000794',
        '7US' => 'E02000794',
        '7UT' => 'E02000798',
        '7UU' => 'E02000794',
        '7UW' => 'E02000794',
        '7UX' => 'E02000794',
        '7WA' => 'E02000794',
        '7WB' => 'E02000794',
        '7WD' => 'E02000794',
        '7WE' => 'E02000794',
        '7WF' => 'E02000794',
        '7WG' => 'E02000794',
        '7WH' => 'E02000794',
        '7WJ' => 'E02000794',
        '7WL' => 'E02000794',
        '7WN' => 'E02000794',
        '7WP' => 'E02000794',
        '7WU' => 'E02000794',
        '7WW' => 'E02000794',
        '7WX' => 'E02000794',
        '7WY' => 'E02000794',
        '7WZ' => 'E02000794',
        '7XA' => 'E02000545',
        '7XF' => 'E02000545',
        '7XY' => 'E02000794',
        '7YA' => 'E02000794',
        '7YL' => 'E02000545',
        '7YQ' => 'E02000794',
        '7ZF' => 'E02000794',
        '7ZP' => 'E02000794',
        '7ZR' => 'E02000794',
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
