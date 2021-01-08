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
final class S44
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '5AA' => 'E02004111',
        '5AB' => 'E02004111',
        '5AD' => 'E02004111',
        '5AE' => 'E02004111',
        '5AF' => 'E02004111',
        '5AG' => 'E02004111',
        '5AH' => 'E02004111',
        '5AJ' => 'E02004111',
        '5AL' => 'E02004111',
        '5AN' => 'E02004111',
        '5AP' => 'E02004111',
        '5AQ' => 'E02004111',
        '5AR' => 'E02004111',
        '5AS' => 'E02004111',
        '5AT' => 'E02004111',
        '5AU' => 'E02004111',
        '5AW' => 'E02004111',
        '5AX' => 'E02004111',
        '5AY' => 'E02004111',
        '5AZ' => 'E02004111',
        '5BA' => 'E02004111',
        '5BB' => 'E02004111',
        '5BD' => 'E02004111',
        '5BE' => 'E02004111',
        '5BG' => 'E02004111',
        '5BH' => 'E02004111',
        '5BJ' => 'E02004111',
        '5BL' => 'E02004066',
        '5BN' => 'E02004111',
        '5BP' => 'E02004111',
        '5BQ' => 'E02004111',
        '5BS' => 'E02004111',
        '5BT' => 'E02004111',
        '5BU' => 'E02004111',
        '5BW' => 'E02004111',
        '5BX' => 'E02004111',
        '5BY' => 'E02004111',
        '5BZ' => 'E02004111',
        '5DA' => 'E02004111',
        '5DB' => 'E02004111',
        '5DD' => 'E02004111',
        '5DE' => 'E02004111',
        '5DF' => 'E02004111',
        '5DG' => 'E02004111',
        '5DH' => 'E02004111',
        '5DJ' => 'E02004111',
        '5DL' => 'E02004052',
        '5DN' => 'E02004111',
        '5DP' => 'E02004111',
        '5DQ' => 'E02004111',
        '5DR' => 'E02004111',
        '5DS' => 'E02004111',
        '5DT' => 'E02004111',
        '5DU' => 'E02004111',
        '5DW' => 'E02004111',
        '5DX' => 'E02004066',
        '5DY' => 'E02004052',
        '5EA' => 'E02004060',
        '5EB' => 'E02004060',
        '5ED' => 'E02004060',
        '5EE' => 'E02004060',
        '5EF' => 'E02004060',
        '5EG' => 'E02004060',
        '5EH' => 'E02004060',
        '5EJ' => 'E02004060',
        '5EL' => 'E02004060',
        '5EN' => 'E02004060',
        '5EP' => 'E02004060',
        '5EQ' => 'E02004060',
        '5ER' => 'E02004060',
        '5ES' => 'E02004060',
        '5ET' => 'E02004060',
        '5EU' => 'E02004111',
        '5EW' => 'E02004060',
        '5EX' => 'E02004060',
        '5EY' => 'E02004060',
        '5EZ' => 'E02004060',
        '5FA' => 'E02004111',
        '5FB' => 'E02004060',
        '5FD' => 'E02004060',
        '5FE' => 'E02004111',
        '5FF' => 'E02004111',
        '5FG' => 'E02004060',
        '5FH' => 'E02004111',
        '5FJ' => 'E02004111',
        '5FL' => 'E02004111',
        '5GA' => 'E02004052',
        '5HA' => 'E02004060',
        '5HB' => 'E02004060',
        '5HD' => 'E02004060',
        '5HE' => 'E02004060',
        '5HF' => 'E02004060',
        '5HG' => 'E02004060',
        '5HH' => 'E02004060',
        '5HJ' => 'E02004060',
        '5HL' => 'E02004060',
        '5HN' => 'E02004060',
        '5HP' => 'E02004060',
        '5HQ' => 'E02004060',
        '5HR' => 'E02004060',
        '5HS' => 'E02004060',
        '5HT' => 'E02004111',
        '5HU' => 'E02004111',
        '5HX' => 'E02004111',
        '5HY' => 'E02004060',
        '5HZ' => 'E02004111',
        '5JA' => 'E02004111',
        '5JB' => 'E02004111',
        '5JD' => 'E02004111',
        '5JE' => 'E02004111',
        '5JF' => 'E02004111',
        '5JG' => 'E02004111',
        '5JH' => 'E02004111',
        '5JJ' => 'E02004111',
        '5JL' => 'E02004111',
        '5JN' => 'E02004111',
        '5JP' => 'E02004111',
        '5JQ' => 'E02004111',
        '5JR' => 'E02004111',
        '5JS' => 'E02004111',
        '5JT' => 'E02004111',
        '5JU' => 'E02004111',
        '5JW' => 'E02004111',
        '5JX' => 'E02004060',
        '5JZ' => 'E02004049',
        '5LA' => 'E02004049',
        '5LB' => 'E02004049',
        '5LD' => 'E02004049',
        '5LE' => 'E02004049',
        '5LF' => 'E02004049',
        '5LG' => 'E02004049',
        '5LH' => 'E02004049',
        '5LJ' => 'E02004049',
        '5LL' => 'E02004049',
        '5LN' => 'E02004049',
        '5LP' => 'E02004049',
        '5LQ' => 'E02004049',
        '5LR' => 'E02004049',
        '5LS' => 'E02004049',
        '5LT' => 'E02004049',
        '5LU' => 'E02004049',
        '5LW' => 'E02004049',
        '5LX' => 'E02004049',
        '5LY' => 'E02004049',
        '5LZ' => 'E02004049',
        '5NA' => 'E02004049',
        '5NB' => 'E02004049',
        '5ND' => 'E02004049',
        '5NE' => 'E02004049',
        '5NF' => 'E02004049',
        '5NG' => 'E02004049',
        '5NH' => 'E02004049',
        '5NJ' => 'E02004049',
        '5NL' => 'E02004049',
        '5NN' => 'E02004049',
        '5NP' => 'E02004052',
        '5NQ' => 'E02004049',
        '5NR' => 'E02004052',
        '5NS' => 'E02004049',
        '5NT' => 'E02004049',
        '5NU' => 'E02004052',
        '5NW' => 'E02004052',
        '5NX' => 'E02004052',
        '5NY' => 'E02004052',
        '5PA' => 'E02004052',
        '5PB' => 'E02004052',
        '5PD' => 'E02004052',
        '5PE' => 'E02004052',
        '5PF' => 'E02004052',
        '5PG' => 'E02004052',
        '5PH' => 'E02004052',
        '5PJ' => 'E02004052',
        '5PL' => 'E02004052',
        '5PN' => 'E02004052',
        '5PP' => 'E02004052',
        '5PQ' => 'E02004052',
        '5PR' => 'E02004052',
        '5PS' => 'E02004052',
        '5PU' => 'E02004049',
        '5PW' => 'E02004052',
        '5PX' => 'E02004049',
        '5PY' => 'E02004049',
        '5PZ' => 'E02004049',
        '5QA' => 'E02004049',
        '5QB' => 'E02004049',
        '5QD' => 'E02004049',
        '5QE' => 'E02004049',
        '5QF' => 'E02004049',
        '5QG' => 'E02004049',
        '5QH' => 'E02004052',
        '5QJ' => 'E02004052',
        '5QL' => 'E02004113',
        '5QQ' => 'E02004052',
        '5QS' => 'E02004113',
        '5QT' => 'E02004113',
        '5QU' => 'E02004113',
        '5QX' => 'E02004113',
        '5QY' => 'E02004113',
        '5QZ' => 'E02004113',
        '5RA' => 'E02004113',
        '5RB' => 'E02004113',
        '5RD' => 'E02004113',
        '5RE' => 'E02004113',
        '5RF' => 'E02004113',
        '5RG' => 'E02004113',
        '5RH' => 'E02004113',
        '5RL' => 'E02004052',
        '5RN' => 'E02004052',
        '5RP' => 'E02004113',
        '5RQ' => 'E02004113',
        '5RW' => 'E02004052',
        '5RX' => 'E02004113',
        '5RY' => 'E02004113',
        '5RZ' => 'E02004113',
        '5SA' => 'E02004113',
        '5SB' => 'E02004113',
        '5SD' => 'E02004113',
        '5SE' => 'E02004113',
        '5SF' => 'E02004113',
        '5SG' => 'E02004113',
        '5SH' => 'E02004113',
        '5SJ' => 'E02004113',
        '5SL' => 'E02004113',
        '5SN' => 'E02004113',
        '5SP' => 'E02004113',
        '5SQ' => 'E02004113',
        '5SR' => 'E02004113',
        '5ST' => 'E02004111',
        '5SU' => 'E02004111',
        '5SW' => 'E02004113',
        '5SX' => 'E02004111',
        '5SY' => 'E02004111',
        '5SZ' => 'E02004111',
        '5TA' => 'E02004111',
        '5TB' => 'E02004111',
        '5TD' => 'E02004111',
        '5TE' => 'E02004111',
        '5TF' => 'E02004111',
        '5TG' => 'E02004111',
        '5TH' => 'E02004111',
        '5TJ' => 'E02004111',
        '5TL' => 'E02004111',
        '5TN' => 'E02004111',
        '5TP' => 'E02004111',
        '5TQ' => 'E02004111',
        '5TR' => 'E02004111',
        '5TS' => 'E02004111',
        '5TT' => 'E02004111',
        '5TU' => 'E02004111',
        '5TW' => 'E02004111',
        '5TX' => 'E02004111',
        '5TY' => 'E02004111',
        '5TZ' => 'E02004111',
        '5UA' => 'E02004111',
        '5UB' => 'E02004111',
        '5UD' => 'E02004111',
        '5UE' => 'E02004111',
        '5UH' => 'E02004111',
        '5UJ' => 'E02004111',
        '5UL' => 'E02004111',
        '5UN' => 'E02004111',
        '5UP' => 'E02004111',
        '5UQ' => 'E02004111',
        '5UR' => 'E02004111',
        '5UT' => 'E02004111',
        '5UU' => 'E02004111',
        '5UW' => 'E02004111',
        '5UX' => 'E02004111',
        '5UY' => 'E02004111',
        '5UZ' => 'E02004111',
        '5WT' => 'E02004048',
        '5WU' => 'E02004111',
        '5WW' => 'E02004111',
        '5WX' => 'E02004111',
        '5WY' => 'E02004048',
        '5XA' => 'E02004111',
        '5XB' => 'E02004111',
        '5XD' => 'E02004111',
        '5XE' => 'E02004111',
        '5XF' => 'E02004111',
        '5XG' => 'E02004111',
        '5XH' => 'E02004111',
        '5XJ' => 'E02004111',
        '5XL' => 'E02004111',
        '5XQ' => 'E02004111',
        '5YN' => 'E02004111',
        '5YP' => 'E02004048',
        '5YQ' => 'E02004048',
        '5YR' => 'E02004111',
        '5YS' => 'E02004111',
        '5YT' => 'E02004111',
        '5YU' => 'E02004048',
        '5YW' => 'E02004048',
        '5YX' => 'E02004111',
        '5YY' => 'E02004111',
        '5YZ' => 'E02004048',
        '6AA' => 'E02004048',
        '6AB' => 'E02004048',
        '6AD' => 'E02004048',
        '6AE' => 'E02004111',
        '6AF' => 'E02004048',
        '6AG' => 'E02004048',
        '6AH' => 'E02004048',
        '6AJ' => 'E02004048',
        '6AL' => 'E02004045',
        '6AN' => 'E02004045',
        '6AP' => 'E02004048',
        '6AQ' => 'E02004048',
        '6AR' => 'E02004048',
        '6AS' => 'E02004048',
        '6AT' => 'E02004048',
        '6AU' => 'E02004048',
        '6AW' => 'E02004048',
        '6AX' => 'E02004048',
        '6AY' => 'E02004048',
        '6AZ' => 'E02004048',
        '6BA' => 'E02004048',
        '6BB' => 'E02004048',
        '6BD' => 'E02004048',
        '6BE' => 'E02004048',
        '6BF' => 'E02004048',
        '6BG' => 'E02004048',
        '6BH' => 'E02004048',
        '6BJ' => 'E02004048',
        '6BL' => 'E02004048',
        '6BN' => 'E02004048',
        '6BP' => 'E02004048',
        '6BQ' => 'E02004048',
        '6BS' => 'E02004111',
        '6BT' => 'E02004111',
        '6BU' => 'E02004111',
        '6BW' => 'E02004048',
        '6BX' => 'E02004048',
        '6BY' => 'E02004048',
        '6BZ' => 'E02004049',
        '6DA' => 'E02004048',
        '6DB' => 'E02004048',
        '6DD' => 'E02004049',
        '6DE' => 'E02004048',
        '6DF' => 'E02004048',
        '6DG' => 'E02004048',
        '6DH' => 'E02004049',
        '6DJ' => 'E02004048',
        '6DL' => 'E02004048',
        '6DN' => 'E02004048',
        '6DP' => 'E02004048',
        '6DQ' => 'E02004048',
        '6DR' => 'E02004048',
        '6DS' => 'E02004048',
        '6DT' => 'E02004048',
        '6DU' => 'E02004048',
        '6DW' => 'E02004048',
        '6DX' => 'E02004049',
        '6DY' => 'E02004049',
        '6DZ' => 'E02004049',
        '6EA' => 'E02004049',
        '6EB' => 'E02004049',
        '6ED' => 'E02004049',
        '6EE' => 'E02004049',
        '6EF' => 'E02004049',
        '6EG' => 'E02004049',
        '6EH' => 'E02004049',
        '6EJ' => 'E02004049',
        '6EL' => 'E02004049',
        '6EN' => 'E02004049',
        '6EP' => 'E02004049',
        '6EQ' => 'E02004049',
        '6ER' => 'E02004049',
        '6ES' => 'E02004049',
        '6ET' => 'E02004049',
        '6EU' => 'E02004049',
        '6EW' => 'E02004049',
        '6EX' => 'E02004049',
        '6EY' => 'E02004049',
        '6EZ' => 'E02004049',
        '6FA' => 'E02004049',
        '6FB' => 'E02004048',
        '6FD' => 'E02004048',
        '6FE' => 'E02004048',
        '6FF' => 'E02004048',
        '6FG' => 'E02004048',
        '6FJ' => 'E02004048',
        '6FL' => 'E02004048',
        '6FN' => 'E02004049',
        '6FP' => 'E02004048',
        '6FQ' => 'E02004048',
        '6FR' => 'E02004048',
        '6FS' => 'E02004049',
        '6FT' => 'E02004049',
        '6FZ' => 'E02004049',
        '6GA' => 'E02004048',
        '6GB' => 'E02004049',
        '6GD' => 'E02004048',
        '6GF' => 'E02004048',
        '6GG' => 'E02004048',
        '6GQ' => 'E02004048',
        '6GT' => 'E02004048',
        '6GU' => 'E02004048',
        '6GX' => 'E02004048',
        '6GY' => 'E02004048',
        '6GZ' => 'E02004048',
        '6HA' => 'E02004048',
        '6HB' => 'E02004048',
        '6HD' => 'E02004048',
        '6HE' => 'E02004049',
        '6HF' => 'E02004049',
        '6HG' => 'E02004049',
        '6HH' => 'E02004049',
        '6HJ' => 'E02004049',
        '6HL' => 'E02004049',
        '6HN' => 'E02004049',
        '6HP' => 'E02004049',
        '6HQ' => 'E02004049',
        '6HR' => 'E02004048',
        '6HS' => 'E02004049',
        '6HT' => 'E02004049',
        '6HU' => 'E02004049',
        '6HW' => 'E02004049',
        '6HX' => 'E02004049',
        '6HY' => 'E02004049',
        '6HZ' => 'E02004049',
        '6JA' => 'E02004048',
        '6JB' => 'E02004049',
        '6JD' => 'E02004048',
        '6JE' => 'E02004048',
        '6JF' => 'E02004048',
        '6JG' => 'E02004048',
        '6JH' => 'E02004048',
        '6JJ' => 'E02004048',
        '6JL' => 'E02004048',
        '6JN' => 'E02004048',
        '6JP' => 'E02004048',
        '6JQ' => 'E02004048',
        '6JR' => 'E02004048',
        '6JS' => 'E02004048',
        '6JT' => 'E02004048',
        '6JU' => 'E02004048',
        '6JW' => 'E02004048',
        '6JX' => 'E02004048',
        '6JY' => 'E02004048',
        '6JZ' => 'E02004048',
        '6LA' => 'E02004049',
        '6LB' => 'E02004049',
        '6LD' => 'E02004049',
        '6LE' => 'E02004049',
        '6LF' => 'E02004049',
        '6LG' => 'E02004049',
        '6LH' => 'E02004049',
        '6LJ' => 'E02004049',
        '6LL' => 'E02004049',
        '6LN' => 'E02004049',
        '6LP' => 'E02004049',
        '6LQ' => 'E02004049',
        '6LR' => 'E02004049',
        '6LS' => 'E02004049',
        '6LT' => 'E02004049',
        '6LU' => 'E02004049',
        '6LW' => 'E02004049',
        '6LX' => 'E02004049',
        '6LY' => 'E02004049',
        '6LZ' => 'E02004049',
        '6NA' => 'E02004049',
        '6NB' => 'E02004049',
        '6ND' => 'E02004048',
        '6NE' => 'E02004048',
        '6NF' => 'E02004048',
        '6NG' => 'E02004048',
        '6NH' => 'E02004048',
        '6NJ' => 'E02004048',
        '6NL' => 'E02004048',
        '6NN' => 'E02004048',
        '6NP' => 'E02004048',
        '6NQ' => 'E02004048',
        '6NR' => 'E02004048',
        '6NS' => 'E02004048',
        '6NT' => 'E02004048',
        '6NU' => 'E02004048',
        '6NW' => 'E02004048',
        '6NX' => 'E02004048',
        '6NY' => 'E02004048',
        '6NZ' => 'E02004049',
        '6PA' => 'E02004048',
        '6PB' => 'E02004048',
        '6PD' => 'E02004048',
        '6PE' => 'E02004048',
        '6PF' => 'E02004048',
        '6PG' => 'E02004048',
        '6PH' => 'E02004048',
        '6PJ' => 'E02004048',
        '6PL' => 'E02004048',
        '6PN' => 'E02004048',
        '6PP' => 'E02004048',
        '6PQ' => 'E02004048',
        '6PR' => 'E02004048',
        '6PS' => 'E02004049',
        '6PT' => 'E02004049',
        '6PU' => 'E02004049',
        '6PW' => 'E02004048',
        '6PX' => 'E02004049',
        '6PY' => 'E02004048',
        '6PZ' => 'E02004048',
        '6QA' => 'E02004048',
        '6QB' => 'E02004048',
        '6QD' => 'E02004048',
        '6QE' => 'E02004048',
        '6QF' => 'E02004048',
        '6QG' => 'E02004048',
        '6QH' => 'E02004048',
        '6QJ' => 'E02004048',
        '6QL' => 'E02004048',
        '6QN' => 'E02004048',
        '6QP' => 'E02004048',
        '6QQ' => 'E02004048',
        '6QR' => 'E02004048',
        '6QS' => 'E02004048',
        '6QT' => 'E02004048',
        '6QU' => 'E02004048',
        '6QW' => 'E02004048',
        '6QX' => 'E02004048',
        '6QY' => 'E02004048',
        '6QZ' => 'E02004048',
        '6RA' => 'E02004048',
        '6RB' => 'E02004048',
        '6RD' => 'E02004048',
        '6RE' => 'E02004048',
        '6RF' => 'E02004048',
        '6RG' => 'E02004048',
        '6RH' => 'E02004049',
        '6RJ' => 'E02004049',
        '6RL' => 'E02004049',
        '6RN' => 'E02004049',
        '6RP' => 'E02004048',
        '6RQ' => 'E02004048',
        '6RR' => 'E02004048',
        '6RS' => 'E02004048',
        '6RT' => 'E02004048',
        '6RU' => 'E02004048',
        '6RW' => 'E02004049',
        '6RX' => 'E02004048',
        '6RY' => 'E02004048',
        '6RZ' => 'E02004048',
        '6SA' => 'E02004048',
        '6SB' => 'E02004048',
        '6SD' => 'E02004048',
        '6SE' => 'E02004048',
        '6SF' => 'E02004048',
        '6SG' => 'E02004048',
        '6SH' => 'E02004048',
        '6SJ' => 'E02004048',
        '6SL' => 'E02004048',
        '6SN' => 'E02004049',
        '6SP' => 'E02004049',
        '6SQ' => 'E02004048',
        '6SR' => 'E02004049',
        '6SS' => 'E02004049',
        '6ST' => 'E02004051',
        '6SU' => 'E02004051',
        '6SW' => 'E02004048',
        '6SX' => 'E02004051',
        '6SY' => 'E02004051',
        '6SZ' => 'E02004051',
        '6TA' => 'E02004051',
        '6TB' => 'E02004051',
        '6TD' => 'E02004051',
        '6TE' => 'E02004051',
        '6TF' => 'E02004051',
        '6TG' => 'E02004051',
        '6TH' => 'E02004051',
        '6TJ' => 'E02004051',
        '6TL' => 'E02004049',
        '6TN' => 'E02004049',
        '6TP' => 'E02004049',
        '6TQ' => 'E02004051',
        '6TR' => 'E02004049',
        '6TS' => 'E02004049',
        '6TT' => 'E02004049',
        '6TU' => 'E02004049',
        '6TW' => 'E02004049',
        '6TX' => 'E02004049',
        '6TY' => 'E02004049',
        '6TZ' => 'E02004049',
        '6UA' => 'E02004049',
        '6UB' => 'E02004049',
        '6UD' => 'E02004049',
        '6UE' => 'E02004049',
        '6UF' => 'E02004049',
        '6UG' => 'E02004049',
        '6UH' => 'E02004049',
        '6UJ' => 'E02004049',
        '6UL' => 'E02004049',
        '6UN' => 'E02004049',
        '6UP' => 'E02004049',
        '6UQ' => 'E02004049',
        '6UR' => 'E02004049',
        '6UT' => 'E02004049',
        '6UU' => 'E02004049',
        '6UW' => 'E02004049',
        '6UX' => 'E02004049',
        '6UY' => 'E02004049',
        '6UZ' => 'E02004113',
        '6WA' => 'E02004048',
        '6WQ' => 'E02004048',
        '6WR' => 'E02004048',
        '6WS' => 'E02004048',
        '6WT' => 'E02004048',
        '6WU' => 'E02004049',
        '6WW' => 'E02004049',
        '6WX' => 'E02004048',
        '6WY' => 'E02004049',
        '6XA' => 'E02004048',
        '6XB' => 'E02004048',
        '6XD' => 'E02004048',
        '6XE' => 'E02004048',
        '6XF' => 'E02004048',
        '6XG' => 'E02004048',
        '6XH' => 'E02004049',
        '6XJ' => 'E02004049',
        '6XL' => 'E02004049',
        '6XN' => 'E02004049',
        '6XP' => 'E02004049',
        '6XQ' => 'E02004049',
        '6XR' => 'E02004049',
        '6XS' => 'E02004049',
        '6XT' => 'E02004049',
        '6XU' => 'E02004049',
        '6XW' => 'E02004048',
        '6XX' => 'E02004049',
        '6XY' => 'E02004048',
        '6XZ' => 'E02004048',
        '6YA' => 'E02004048',
        '6YB' => 'E02004048',
        '6YD' => 'E02004048',
        '6YE' => 'E02004048',
        '6YF' => 'E02004048',
        '6YG' => 'E02004048',
        '6YH' => 'E02004048',
        '6YJ' => 'E02004048',
        '6YL' => 'E02004048',
        '6YN' => 'E02004048',
        '6YP' => 'E02004048',
        '6YQ' => 'E02004048',
        '6YR' => 'E02004048',
        '6YS' => 'E02004048',
        '6YT' => 'E02004048',
        '6YU' => 'E02004048',
        '6YW' => 'E02004048',
        '6YX' => 'E02004048',
        '6YY' => 'E02004048',
        '6YZ' => 'E02004048',
        '6ZS' => 'E02004048',
        '9AA' => 'E02004048',
        '9AB' => 'E02004048',
        '9AD' => 'E02004048',
        '9AE' => 'E02004048',
        '9AF' => 'E02004048',
        '9AG' => 'E02004048',
        '9AH' => 'E02004048',
        '9AJ' => 'E02004048',
        '9AL' => 'E02004048',
        '9AN' => 'E02004048',
        '9AP' => 'E02004048',
        '9AQ' => 'E02004048',
        '9AR' => 'E02004048',
        '9AS' => 'E02004048',
        '9AT' => 'E02004048',
        '9AU' => 'E02004048',
        '9AW' => 'E02004048',
        '9AX' => 'E02004048',
        '9AY' => 'E02004048',
        '9AZ' => 'E02004048',
        '9BA' => 'E02004048',
        '9BB' => 'E02004048',
        '9BD' => 'E02004048',
        '9BE' => 'E02004048',
        '9BF' => 'E02004048',
        '9BH' => 'E02004048',
        '9BJ' => 'E02004048',
        '9SA' => 'E02004048',
        '9SB' => 'E02004048',
        '9SD' => 'E02004048',
        '9SE' => 'E02004048',
        '9SF' => 'E02004048',
        '9SG' => 'E02004048',
        '9SH' => 'E02004048',
        '9SJ' => 'E02004048',
        '9SL' => 'E02004048',
        '9SN' => 'E02004048',
        '9SP' => 'E02004048',
        '9SQ' => 'E02004048',
        '9SR' => 'E02004048',
        '9SS' => 'E02004048',
        '9ST' => 'E02004048',
        '9SU' => 'E02004048',
        '9SW' => 'E02004048',
        '9SX' => 'E02004048',
        '9SY' => 'E02004048',
        '9SZ' => 'E02004048',
        '9TA' => 'E02004048',
        '9TB' => 'E02004048',
        '9TD' => 'E02004048',
        '9TE' => 'E02004048',
        '9TF' => 'E02004048',
        '9TG' => 'E02004048',
        '9ZZ' => 'E02004048',
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