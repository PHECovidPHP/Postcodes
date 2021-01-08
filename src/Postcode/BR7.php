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
final class BR7
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '5AA' => 'E02000133',
        '5AB' => 'E02000133',
        '5AD' => 'E02000133',
        '5AE' => 'E02000128',
        '5AF' => 'E02000128',
        '5AG' => 'E02000128',
        '5AH' => 'E02000133',
        '5AJ' => 'E02000133',
        '5AL' => 'E02000133',
        '5AN' => 'E02000128',
        '5AP' => 'E02000128',
        '5AQ' => 'E02000128',
        '5AR' => 'E02000134',
        '5AS' => 'E02000128',
        '5AT' => 'E02000133',
        '5AU' => 'E02000133',
        '5AW' => 'E02000128',
        '5AX' => 'E02000133',
        '5AY' => 'E02000128',
        '5AZ' => 'E02000128',
        '5BA' => 'E02000128',
        '5BB' => 'E02000133',
        '5BD' => 'E02000128',
        '5BE' => 'E02000128',
        '5BF' => 'E02000133',
        '5BG' => 'E02000133',
        '5BH' => 'E02000133',
        '5BJ' => 'E02000133',
        '5BL' => 'E02000128',
        '5BN' => 'E02000133',
        '5BP' => 'E02000133',
        '5BQ' => 'E02000133',
        '5BS' => 'E02000133',
        '5BT' => 'E02000133',
        '5BU' => 'E02000133',
        '5BW' => 'E02000133',
        '5BX' => 'E02000133',
        '5BY' => 'E02000133',
        '5BZ' => 'E02000133',
        '5DA' => 'E02000133',
        '5DB' => 'E02000133',
        '5DD' => 'E02000133',
        '5DE' => 'E02000133',
        '5DF' => 'E02000133',
        '5DG' => 'E02000133',
        '5DH' => 'E02000133',
        '5DJ' => 'E02000133',
        '5DL' => 'E02000133',
        '5DN' => 'E02000133',
        '5DP' => 'E02000133',
        '5DQ' => 'E02000133',
        '5DR' => 'E02000133',
        '5DS' => 'E02000133',
        '5DT' => 'E02000133',
        '5DU' => 'E02000133',
        '5DW' => 'E02000133',
        '5DX' => 'E02000133',
        '5DY' => 'E02000133',
        '5DZ' => 'E02000133',
        '5EA' => 'E02000133',
        '5EB' => 'E02000133',
        '5ED' => 'E02000133',
        '5EE' => 'E02000133',
        '5EF' => 'E02000133',
        '5EG' => 'E02000133',
        '5EH' => 'E02000133',
        '5EJ' => 'E02000133',
        '5EL' => 'E02000133',
        '5EN' => 'E02000127',
        '5EP' => 'E02000133',
        '5EQ' => 'E02000133',
        '5ER' => 'E02000133',
        '5ES' => 'E02000133',
        '5ET' => 'E02000133',
        '5EU' => 'E02000133',
        '5EW' => 'E02000128',
        '5EX' => 'E02000133',
        '5EY' => 'E02000133',
        '5EZ' => 'E02000133',
        '5FA' => 'E02000128',
        '5FB' => 'E02000133',
        '5FD' => 'E02000128',
        '5FE' => 'E02000133',
        '5FF' => 'E02000133',
        '5FG' => 'E02000133',
        '5FH' => 'E02000133',
        '5FJ' => 'E02000133',
        '5FL' => 'E02000133',
        '5FN' => 'E02000133',
        '5FP' => 'E02000133',
        '5FR' => 'E02000133',
        '5FS' => 'E02000133',
        '5FT' => 'E02000136',
        '5FZ' => 'E02000134',
        '5HA' => 'E02000133',
        '5HB' => 'E02000133',
        '5HD' => 'E02000133',
        '5HE' => 'E02000133',
        '5HF' => 'E02000133',
        '5HG' => 'E02000133',
        '5HH' => 'E02000133',
        '5HJ' => 'E02000133',
        '5HL' => 'E02000133',
        '5HN' => 'E02000133',
        '5HP' => 'E02000133',
        '5HQ' => 'E02000133',
        '5HR' => 'E02000133',
        '5HS' => 'E02000133',
        '5HT' => 'E02000133',
        '5HU' => 'E02000133',
        '5HW' => 'E02000133',
        '5HX' => 'E02000133',
        '5HY' => 'E02000133',
        '5HZ' => 'E02000133',
        '5JA' => 'E02000133',
        '5JB' => 'E02000133',
        '5JD' => 'E02000133',
        '5JE' => 'E02000133',
        '5JF' => 'E02000133',
        '5JG' => 'E02000133',
        '5JH' => 'E02000133',
        '5JJ' => 'E02000133',
        '5JL' => 'E02000133',
        '5JN' => 'E02000133',
        '5JP' => 'E02000133',
        '5JQ' => 'E02000133',
        '5JR' => 'E02000133',
        '5JS' => 'E02000133',
        '5JT' => 'E02000133',
        '5JU' => 'E02000133',
        '5JW' => 'E02000133',
        '5JX' => 'E02000133',
        '5JY' => 'E02000133',
        '5JZ' => 'E02000133',
        '5LA' => 'E02000133',
        '5LB' => 'E02000133',
        '5LD' => 'E02000133',
        '5LE' => 'E02000133',
        '5LF' => 'E02000133',
        '5LG' => 'E02000133',
        '5LH' => 'E02000133',
        '5LJ' => 'E02000133',
        '5LL' => 'E02000133',
        '5LN' => 'E02000133',
        '5LP' => 'E02000133',
        '5LQ' => 'E02000133',
        '5LR' => 'E02000133',
        '5LS' => 'E02000133',
        '5LT' => 'E02000133',
        '5LU' => 'E02000133',
        '5LW' => 'E02000133',
        '5LX' => 'E02000133',
        '5LY' => 'E02000133',
        '5LZ' => 'E02000133',
        '5NA' => 'E02000133',
        '5NB' => 'E02000133',
        '5ND' => 'E02000133',
        '5NE' => 'E02000133',
        '5NF' => 'E02000133',
        '5NG' => 'E02000133',
        '5NH' => 'E02000133',
        '5NJ' => 'E02000133',
        '5NL' => 'E02000133',
        '5NN' => 'E02000133',
        '5NP' => 'E02000133',
        '5NQ' => 'E02000133',
        '5NR' => 'E02000133',
        '5NS' => 'E02000133',
        '5NT' => 'E02000133',
        '5NU' => 'E02000133',
        '5NW' => 'E02000133',
        '5NX' => 'E02000133',
        '5NY' => 'E02000133',
        '5NZ' => 'E02000133',
        '5PA' => 'E02000133',
        '5PB' => 'E02000133',
        '5PD' => 'E02000133',
        '5PE' => 'E02000136',
        '5PF' => 'E02000136',
        '5PG' => 'E02000136',
        '5PH' => 'E02000133',
        '5PJ' => 'E02000133',
        '5PL' => 'E02000133',
        '5PN' => 'E02000133',
        '5PP' => 'E02000133',
        '5PQ' => 'E02000133',
        '5PR' => 'E02000133',
        '5PS' => 'E02000133',
        '5PT' => 'E02000133',
        '5PU' => 'E02000133',
        '5PW' => 'E02000133',
        '5PX' => 'E02000133',
        '5PY' => 'E02000136',
        '5PZ' => 'E02000133',
        '5QA' => 'E02000133',
        '5QB' => 'E02000136',
        '5QD' => 'E02000136',
        '5QE' => 'E02000133',
        '5QF' => 'E02000133',
        '5QG' => 'E02000133',
        '5QH' => 'E02000133',
        '5QJ' => 'E02000133',
        '5QL' => 'E02000133',
        '5QN' => 'E02000136',
        '5QP' => 'E02000133',
        '5QQ' => 'E02000133',
        '5QR' => 'E02000133',
        '5QS' => 'E02000133',
        '5QT' => 'E02000133',
        '5QU' => 'E02000133',
        '5QW' => 'E02000136',
        '5QX' => 'E02000133',
        '5QY' => 'E02000133',
        '5QZ' => 'E02000133',
        '5RA' => 'E02000133',
        '5RB' => 'E02000133',
        '5RD' => 'E02000133',
        '5RE' => 'E02000133',
        '5RF' => 'E02000133',
        '5RG' => 'E02000133',
        '5RH' => 'E02000133',
        '5RJ' => 'E02000133',
        '5RL' => 'E02000133',
        '5RN' => 'E02000133',
        '5RP' => 'E02000133',
        '5RQ' => 'E02000133',
        '5RR' => 'E02000133',
        '5RS' => 'E02000133',
        '5RT' => 'E02000133',
        '5RU' => 'E02000133',
        '5RW' => 'E02000133',
        '5RX' => 'E02000133',
        '5RY' => 'E02000133',
        '5RZ' => 'E02000133',
        '5SA' => 'E02000133',
        '5SB' => 'E02000133',
        '5SD' => 'E02000133',
        '5SE' => 'E02000133',
        '5SF' => 'E02000133',
        '5SG' => 'E02000133',
        '5SH' => 'E02000133',
        '5SJ' => 'E02000133',
        '5SL' => 'E02000133',
        '5SN' => 'E02000133',
        '5SP' => 'E02000134',
        '5SQ' => 'E02000133',
        '5SR' => 'E02000133',
        '5SS' => 'E02000133',
        '5ST' => 'E02000133',
        '5SU' => 'E02000154',
        '5SW' => 'E02000133',
        '5SX' => 'E02000134',
        '5SY' => 'E02000133',
        '5SZ' => 'E02000134',
        '5TA' => 'E02000133',
        '5TB' => 'E02000133',
        '5TD' => 'E02000133',
        '5TE' => 'E02000133',
        '5TF' => 'E02000133',
        '5TG' => 'E02000154',
        '5TH' => 'E02000133',
        '5TJ' => 'E02000133',
        '5TL' => 'E02000133',
        '5TN' => 'E02000134',
        '5TP' => 'E02000154',
        '5TQ' => 'E02000133',
        '5TR' => 'E02000133',
        '5TS' => 'E02000133',
        '5TT' => 'E02000134',
        '5TU' => 'E02000134',
        '5TW' => 'E02000134',
        '5TX' => 'E02000133',
        '5TY' => 'E02000133',
        '5TZ' => 'E02000134',
        '5UA' => 'E02000154',
        '5UB' => 'E02000133',
        '5UD' => 'E02000134',
        '5UE' => 'E02000134',
        '5UF' => 'E02000134',
        '5UG' => 'E02000134',
        '5UH' => 'E02000134',
        '5UJ' => 'E02000134',
        '5UL' => 'E02000133',
        '5UN' => 'E02000134',
        '5UP' => 'E02000134',
        '5UT' => 'E02000134',
        '5UU' => 'E02000134',
        '5UW' => 'E02000134',
        '5UX' => 'E02000134',
        '5UY' => 'E02000154',
        '5UZ' => 'E02000134',
        '5WA' => 'E02000154',
        '5WB' => 'E02000134',
        '5WD' => 'E02000154',
        '5WE' => 'E02000134',
        '5WF' => 'E02000154',
        '5WG' => 'E02000134',
        '5WH' => 'E02000134',
        '5WJ' => 'E02000154',
        '5WL' => 'E02000134',
        '5WN' => 'E02000154',
        '5WP' => 'E02000134',
        '5WQ' => 'E02000154',
        '5WR' => 'E02000134',
        '5WS' => 'E02000154',
        '5WT' => 'E02000154',
        '5WU' => 'E02000134',
        '5WW' => 'E02000154',
        '5WX' => 'E02000134',
        '5WY' => 'E02000134',
        '5WZ' => 'E02000134',
        '5XA' => 'E02000134',
        '5XB' => 'E02000133',
        '5XD' => 'E02000134',
        '5XE' => 'E02000134',
        '5XF' => 'E02000134',
        '5XG' => 'E02000134',
        '5XH' => 'E02000134',
        '5XJ' => 'E02000134',
        '5XL' => 'E02000134',
        '5XP' => 'E02000134',
        '5XQ' => 'E02000133',
        '5XS' => 'E02000127',
        '5XT' => 'E02000133',
        '5XU' => 'E02000134',
        '5XW' => 'E02000134',
        '5XX' => 'E02000134',
        '5XY' => 'E02000134',
        '5XZ' => 'E02000134',
        '5YB' => 'E02000134',
        '5YH' => 'E02000134',
        '5YW' => 'E02000154',
        '5YZ' => 'E02000134',
        '5ZD' => 'E02000134',
        '5ZE' => 'E02000134',
        '5ZF' => 'E02000134',
        '5ZG' => 'E02000134',
        '5ZH' => 'E02000154',
        '5ZJ' => 'E02000133',
        '5ZL' => 'E02000134',
        '5ZN' => 'E02000154',
        '5ZP' => 'E02000134',
        '5ZQ' => 'E02000133',
        '5ZR' => 'E02000134',
        '5ZS' => 'E02000133',
        '5ZT' => 'E02000133',
        '5ZU' => 'E02000134',
        '5ZW' => 'E02000133',
        '5ZX' => 'E02000133',
        '5ZY' => 'E02000154',
        '5ZZ' => 'E02000133',
        '6AA' => 'E02000128',
        '6AB' => 'E02000133',
        '6AD' => 'E02000128',
        '6AE' => 'E02000133',
        '6AF' => 'E02000133',
        '6AG' => 'E02000128',
        '6AH' => 'E02000128',
        '6AJ' => 'E02000128',
        '6AL' => 'E02000128',
        '6AN' => 'E02000128',
        '6AP' => 'E02000128',
        '6AQ' => 'E02000128',
        '6AR' => 'E02000128',
        '6AS' => 'E02000128',
        '6AT' => 'E02000128',
        '6AU' => 'E02000128',
        '6AW' => 'E02000128',
        '6AX' => 'E02000128',
        '6AY' => 'E02000128',
        '6AZ' => 'E02000128',
        '6BA' => 'E02000128',
        '6BB' => 'E02000128',
        '6BD' => 'E02000128',
        '6BE' => 'E02000133',
        '6BF' => 'E02000136',
        '6BG' => 'E02000128',
        '6BH' => 'E02000128',
        '6BJ' => 'E02000128',
        '6BL' => 'E02000128',
        '6BN' => 'E02000128',
        '6BP' => 'E02000128',
        '6BQ' => 'E02000128',
        '6BS' => 'E02000128',
        '6BT' => 'E02000128',
        '6BU' => 'E02000128',
        '6BW' => 'E02000128',
        '6BX' => 'E02000128',
        '6BY' => 'E02000128',
        '6BZ' => 'E02000128',
        '6DA' => 'E02000133',
        '6DB' => 'E02000128',
        '6DD' => 'E02000133',
        '6DE' => 'E02000133',
        '6DF' => 'E02000128',
        '6DG' => 'E02000128',
        '6DH' => 'E02000128',
        '6DJ' => 'E02000128',
        '6DL' => 'E02000128',
        '6DN' => 'E02000344',
        '6DP' => 'E02000128',
        '6DQ' => 'E02000128',
        '6DR' => 'E02000344',
        '6DS' => 'E02000344',
        '6DT' => 'E02000344',
        '6DU' => 'E02000344',
        '6DW' => 'E02000344',
        '6DX' => 'E02000128',
        '6DY' => 'E02000128',
        '6DZ' => 'E02000128',
        '6EA' => 'E02000128',
        '6EB' => 'E02000128',
        '6ED' => 'E02000127',
        '6EE' => 'E02000128',
        '6EF' => 'E02000128',
        '6EG' => 'E02000128',
        '6EH' => 'E02000127',
        '6EJ' => 'E02000128',
        '6EL' => 'E02000128',
        '6EN' => 'E02000128',
        '6EP' => 'E02000128',
        '6EQ' => 'E02000128',
        '6ER' => 'E02000128',
        '6ES' => 'E02000128',
        '6ET' => 'E02000128',
        '6EU' => 'E02000128',
        '6EW' => 'E02000128',
        '6EX' => 'E02000128',
        '6EY' => 'E02000128',
        '6EZ' => 'E02000128',
        '6FA' => 'E02000136',
        '6FB' => 'E02000128',
        '6FD' => 'E02000133',
        '6FE' => 'E02000128',
        '6FQ' => 'E02000134',
        '6GL' => 'E02000128',
        '6GZ' => 'E02000134',
        '6HA' => 'E02000136',
        '6HB' => 'E02000136',
        '6HD' => 'E02000136',
        '6HE' => 'E02000136',
        '6HF' => 'E02000136',
        '6HG' => 'E02000133',
        '6HH' => 'E02000136',
        '6HJ' => 'E02000128',
        '6HL' => 'E02000128',
        '6HN' => 'E02000128',
        '6HP' => 'E02000128',
        '6HQ' => 'E02000133',
        '6HR' => 'E02000128',
        '6HS' => 'E02000128',
        '6HT' => 'E02000128',
        '6HU' => 'E02000128',
        '6HW' => 'E02000128',
        '6HX' => 'E02000128',
        '6HY' => 'E02000128',
        '6HZ' => 'E02000128',
        '6JA' => 'E02000128',
        '6JB' => 'E02000128',
        '6JD' => 'E02000128',
        '6JE' => 'E02000128',
        '6JF' => 'E02000128',
        '6JG' => 'E02000128',
        '6JH' => 'E02000128',
        '6JJ' => 'E02000128',
        '6JL' => 'E02000128',
        '6JN' => 'E02000128',
        '6JP' => 'E02000128',
        '6JQ' => 'E02000128',
        '6JR' => 'E02000128',
        '6JS' => 'E02000128',
        '6JT' => 'E02000128',
        '6JU' => 'E02000128',
        '6JW' => 'E02000128',
        '6JX' => 'E02000128',
        '6JY' => 'E02000128',
        '6JZ' => 'E02000128',
        '6LA' => 'E02000128',
        '6LB' => 'E02000128',
        '6LD' => 'E02000128',
        '6LE' => 'E02000136',
        '6LF' => 'E02000136',
        '6LG' => 'E02000133',
        '6LH' => 'E02000136',
        '6LJ' => 'E02000128',
        '6LL' => 'E02000136',
        '6LN' => 'E02000136',
        '6LP' => 'E02000134',
        '6LQ' => 'E02000133',
        '6LR' => 'E02000136',
        '6LS' => 'E02000136',
        '6LT' => 'E02000128',
        '6LU' => 'E02000128',
        '6LW' => 'E02000136',
        '6LX' => 'E02000128',
        '6LY' => 'E02000128',
        '6LZ' => 'E02000128',
        '6NA' => 'E02000128',
        '6NB' => 'E02000128',
        '6ND' => 'E02000133',
        '6NE' => 'E02000128',
        '6NF' => 'E02000128',
        '6NG' => 'E02000133',
        '6NH' => 'E02000133',
        '6NJ' => 'E02000136',
        '6NL' => 'E02000128',
        '6NN' => 'E02000136',
        '6NP' => 'E02000128',
        '6NQ' => 'E02000133',
        '6NR' => 'E02000136',
        '6NS' => 'E02000136',
        '6NT' => 'E02000136',
        '6NU' => 'E02000136',
        '6NW' => 'E02000136',
        '6NX' => 'E02000136',
        '6NY' => 'E02000136',
        '6NZ' => 'E02000136',
        '6PA' => 'E02000136',
        '6PB' => 'E02000136',
        '6PD' => 'E02000136',
        '6PE' => 'E02000136',
        '6PF' => 'E02000136',
        '6PG' => 'E02000136',
        '6PH' => 'E02000136',
        '6PJ' => 'E02000136',
        '6PL' => 'E02000136',
        '6PN' => 'E02000136',
        '6PP' => 'E02000136',
        '6PQ' => 'E02000136',
        '6PR' => 'E02000136',
        '6PS' => 'E02000136',
        '6PT' => 'E02000136',
        '6PU' => 'E02000136',
        '6PW' => 'E02000136',
        '6PX' => 'E02000136',
        '6PY' => 'E02000136',
        '6PZ' => 'E02000136',
        '6QA' => 'E02000136',
        '6QB' => 'E02000136',
        '6QD' => 'E02000136',
        '6QE' => 'E02000136',
        '6QF' => 'E02000136',
        '6QG' => 'E02000136',
        '6QH' => 'E02000136',
        '6QJ' => 'E02000136',
        '6QL' => 'E02000136',
        '6QN' => 'E02000136',
        '6QP' => 'E02000136',
        '6QQ' => 'E02000136',
        '6QR' => 'E02000136',
        '6QS' => 'E02000136',
        '6QT' => 'E02000136',
        '6QU' => 'E02000136',
        '6QW' => 'E02000136',
        '6QX' => 'E02000136',
        '6QY' => 'E02000136',
        '6QZ' => 'E02000136',
        '6RA' => 'E02000136',
        '6RB' => 'E02000136',
        '6RD' => 'E02000136',
        '6RE' => 'E02000136',
        '6RF' => 'E02000136',
        '6RG' => 'E02000136',
        '6RH' => 'E02000136',
        '6RJ' => 'E02000136',
        '6RL' => 'E02000136',
        '6RN' => 'E02000136',
        '6RP' => 'E02000128',
        '6RQ' => 'E02000136',
        '6RR' => 'E02000128',
        '6RS' => 'E02000133',
        '6RT' => 'E02000133',
        '6RU' => 'E02000128',
        '6RW' => 'E02000136',
        '6RX' => 'E02000128',
        '6RY' => 'E02000128',
        '6RZ' => 'E02000128',
        '6SA' => 'E02000136',
        '6SB' => 'E02000128',
        '6SD' => 'E02000128',
        '6SE' => 'E02000136',
        '6SF' => 'E02000128',
        '6SG' => 'E02000128',
        '6SH' => 'E02000136',
        '6SJ' => 'E02000128',
        '6SL' => 'E02000136',
        '6SN' => 'E02000136',
        '6SP' => 'E02000136',
        '6SR' => 'E02000136',
        '6ST' => 'E02000136',
        '6SY' => 'E02000128',
        '6SZ' => 'E02000136',
        '6TA' => 'E02000128',
        '6TB' => 'E02000128',
        '6TD' => 'E02000128',
        '6TE' => 'E02000128',
        '6TF' => 'E02000128',
        '6TG' => 'E02000128',
        '6TH' => 'E02000128',
        '6TJ' => 'E02000128',
        '6TL' => 'E02000136',
        '6TN' => 'E02000136',
        '6TP' => 'E02000133',
        '6TQ' => 'E02000134',
        '6TR' => 'E02000133',
        '6TS' => 'E02000133',
        '6TT' => 'E02000133',
        '6TU' => 'E02000128',
        '6TW' => 'E02000136',
        '6TY' => 'E02000134',
        '6TZ' => 'E02000134',
        '6UA' => 'E02000134',
        '6UB' => 'E02000154',
        '6UD' => 'E02000128',
        '6UE' => 'E02000154',
        '6UF' => 'E02000134',
        '6UG' => 'E02000154',
        '6UH' => 'E02000154',
        '6UJ' => 'E02000128',
        '6UL' => 'E02000154',
        '6UN' => 'E02000133',
        '6UP' => 'E02000133',
        '6UQ' => 'E02000128',
        '6UR' => 'E02000133',
        '6US' => 'E02000134',
        '6UT' => 'E02000133',
        '6UU' => 'E02000133',
        '6UW' => 'E02000133',
        '6UX' => 'E02000134',
        '6UY' => 'E02000128',
        '6UZ' => 'E02000134',
        '6WA' => 'E02000134',
        '6WB' => 'E02000134',
        '6WD' => 'E02000134',
        '6WE' => 'E02000134',
        '6WF' => 'E02000134',
        '6WG' => 'E02000154',
        '6WH' => 'E02000154',
        '6WJ' => 'E02000154',
        '6WL' => 'E02000134',
        '6WN' => 'E02000134',
        '6WP' => 'E02000134',
        '6WQ' => 'E02000154',
        '6WR' => 'E02000134',
        '6WS' => 'E02000154',
        '6WT' => 'E02000134',
        '6WU' => 'E02000154',
        '6WW' => 'E02000154',
        '6WX' => 'E02000134',
        '6WY' => 'E02000154',
        '6WZ' => 'E02000154',
        '6XA' => 'E02000154',
        '6XB' => 'E02000134',
        '6XD' => 'E02000134',
        '6XE' => 'E02000133',
        '6XF' => 'E02000128',
        '6XG' => 'E02000128',
        '6XH' => 'E02000128',
        '6XJ' => 'E02000154',
        '6XL' => 'E02000128',
        '6XN' => 'E02000128',
        '6XP' => 'E02000128',
        '6XQ' => 'E02000134',
        '6XR' => 'E02000134',
        '6XS' => 'E02000134',
        '6XT' => 'E02000134',
        '6XU' => 'E02000134',
        '6XW' => 'E02000134',
        '6YE' => 'E02000134',
        '6YQ' => 'E02000154',
        '6ZA' => 'E02000154',
        '6ZG' => 'E02000154',
        '6ZH' => 'E02000134',
        '6ZJ' => 'E02000154',
        '6ZL' => 'E02000134',
        '6ZN' => 'E02000134',
        '6ZP' => 'E02000154',
        '6ZQ' => 'E02000128',
        '6ZR' => 'E02000134',
        '6ZS' => 'E02000134',
        '6ZT' => 'E02000128',
        '6ZU' => 'E02000154',
        '6ZW' => 'E02000128',
        '6ZX' => 'E02000133',
        '6ZY' => 'E02000134',
        '6ZZ' => 'E02000128',
        '9AB' => 'E02000134',
        '9AD' => 'E02000134',
        '9AH' => 'E02000134',
        '9AJ' => 'E02000134',
        '9AP' => 'E02000134',
        '9AR' => 'E02000134',
        '9AS' => 'E02000134',
        '9AT' => 'E02000134',
        '9AU' => 'E02000134',
        '9AW' => 'E02000134',
        '9AX' => 'E02000134',
        '9AY' => 'E02000134',
        '9AZ' => 'E02000134',
        '9BA' => 'E02000134',
        '9BB' => 'E02000134',
        '9BD' => 'E02000134',
        '9BE' => 'E02000134',
        '9BF' => 'E02000134',
        '9BG' => 'E02000134',
        '9BH' => 'E02000134',
        '9BJ' => 'E02000134',
        '9BL' => 'E02000134',
        '9BN' => 'E02000134',
        '9BP' => 'E02000134',
        '9BQ' => 'E02000134',
        '9BR' => 'E02000134',
        '9BS' => 'E02000134',
        '9BT' => 'E02000134',
        '9BU' => 'E02000134',
        '9BW' => 'E02000134',
        '9BX' => 'E02000134',
        '9BY' => 'E02000134',
        '9BZ' => 'E02000134',
        '9DA' => 'E02000134',
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