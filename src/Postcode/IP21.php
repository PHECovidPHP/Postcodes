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
final class IP21
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '4AA' => 'E02006261',
        '4AB' => 'E02006261',
        '4AD' => 'E02006261',
        '4AE' => 'E02006261',
        '4AF' => 'E02006261',
        '4AG' => 'E02006261',
        '4AH' => 'E02006261',
        '4AJ' => 'E02006261',
        '4AL' => 'E02006261',
        '4AN' => 'E02006261',
        '4AP' => 'E02006261',
        '4AQ' => 'E02006261',
        '4AR' => 'E02006261',
        '4AS' => 'E02006261',
        '4AT' => 'E02006261',
        '4AU' => 'E02006261',
        '4AW' => 'E02005610',
        '4AX' => 'E02006261',
        '4AY' => 'E02006261',
        '4AZ' => 'E02006261',
        '4BA' => 'E02005610',
        '4BB' => 'E02006261',
        '4BD' => 'E02006261',
        '4BE' => 'E02005609',
        '4BF' => 'E02006261',
        '4BG' => 'E02005611',
        '4BH' => 'E02006261',
        '4BJ' => 'E02006261',
        '4BL' => 'E02006261',
        '4BN' => 'E02006261',
        '4BP' => 'E02006261',
        '4BQ' => 'E02006261',
        '4BS' => 'E02006261',
        '4BT' => 'E02006261',
        '4BU' => 'E02006261',
        '4BW' => 'E02006261',
        '4BX' => 'E02006261',
        '4BY' => 'E02006261',
        '4BZ' => 'E02006261',
        '4DA' => 'E02005611',
        '4DB' => 'E02005610',
        '4DD' => 'E02005610',
        '4DE' => 'E02005611',
        '4DF' => 'E02005610',
        '4DG' => 'E02005610',
        '4DH' => 'E02005610',
        '4DJ' => 'E02005610',
        '4DL' => 'E02005610',
        '4DN' => 'E02005610',
        '4DP' => 'E02005610',
        '4DQ' => 'E02005610',
        '4DR' => 'E02005610',
        '4DS' => 'E02005610',
        '4DT' => 'E02005610',
        '4DU' => 'E02005610',
        '4DW' => 'E02005610',
        '4DX' => 'E02005610',
        '4DY' => 'E02005610',
        '4DZ' => 'E02005610',
        '4EA' => 'E02005610',
        '4EB' => 'E02005610',
        '4ED' => 'E02005610',
        '4EE' => 'E02005610',
        '4EF' => 'E02005610',
        '4EG' => 'E02005610',
        '4EH' => 'E02005610',
        '4EJ' => 'E02005610',
        '4EL' => 'E02005610',
        '4EN' => 'E02005610',
        '4EP' => 'E02005610',
        '4EQ' => 'E02005610',
        '4ER' => 'E02005610',
        '4ES' => 'E02005610',
        '4ET' => 'E02005610',
        '4EU' => 'E02005610',
        '4EW' => 'E02005610',
        '4EX' => 'E02005610',
        '4EY' => 'E02005610',
        '4EZ' => 'E02005610',
        '4FA' => 'E02005609',
        '4FB' => 'E02006261',
        '4FD' => 'E02006261',
        '4FE' => 'E02005610',
        '4FF' => 'E02005610',
        '4GA' => 'E02005610',
        '4GN' => 'E02005611',
        '4HA' => 'E02005610',
        '4HB' => 'E02005610',
        '4HD' => 'E02005610',
        '4HE' => 'E02005610',
        '4HF' => 'E02005611',
        '4HG' => 'E02005610',
        '4HH' => 'E02005610',
        '4HJ' => 'E02005610',
        '4HL' => 'E02005610',
        '4HN' => 'E02005610',
        '4HP' => 'E02005610',
        '4HQ' => 'E02005611',
        '4HR' => 'E02005610',
        '4HS' => 'E02005610',
        '4HT' => 'E02005610',
        '4HU' => 'E02005610',
        '4HW' => 'E02005610',
        '4HX' => 'E02005610',
        '4HY' => 'E02005610',
        '4HZ' => 'E02005610',
        '4JA' => 'E02005610',
        '4JB' => 'E02005610',
        '4JD' => 'E02005610',
        '4JE' => 'E02005610',
        '4JF' => 'E02005610',
        '4JG' => 'E02005610',
        '4JH' => 'E02005610',
        '4JJ' => 'E02005610',
        '4JL' => 'E02005610',
        '4JN' => 'E02005611',
        '4JP' => 'E02005610',
        '4JQ' => 'E02005610',
        '4JR' => 'E02005610',
        '4JS' => 'E02005610',
        '4JT' => 'E02005610',
        '4JU' => 'E02005610',
        '4JW' => 'E02005610',
        '4JX' => 'E02005610',
        '4JY' => 'E02005610',
        '4JZ' => 'E02005610',
        '4LA' => 'E02005610',
        '4LB' => 'E02005610',
        '4LD' => 'E02005610',
        '4LE' => 'E02005610',
        '4LF' => 'E02005611',
        '4LG' => 'E02005611',
        '4LH' => 'E02005610',
        '4LJ' => 'E02006261',
        '4LL' => 'E02006261',
        '4LN' => 'E02006261',
        '4LP' => 'E02006261',
        '4LQ' => 'E02006261',
        '4LR' => 'E02006261',
        '4LS' => 'E02006261',
        '4LT' => 'E02006261',
        '4LU' => 'E02006261',
        '4LW' => 'E02006261',
        '4LX' => 'E02006261',
        '4LY' => 'E02006261',
        '4LZ' => 'E02006261',
        '4NA' => 'E02005610',
        '4NB' => 'E02005609',
        '4ND' => 'E02005610',
        '4NE' => 'E02005610',
        '4NG' => 'E02005610',
        '4NH' => 'E02005610',
        '4NJ' => 'E02005610',
        '4NL' => 'E02005610',
        '4NN' => 'E02005610',
        '4NP' => 'E02005610',
        '4NQ' => 'E02005610',
        '4NR' => 'E02005610',
        '4NS' => 'E02005610',
        '4NT' => 'E02005610',
        '4NU' => 'E02005610',
        '4NW' => 'E02005610',
        '4NX' => 'E02005610',
        '4NY' => 'E02005610',
        '4NZ' => 'E02005610',
        '4PA' => 'E02005610',
        '4PB' => 'E02005610',
        '4PD' => 'E02005610',
        '4PE' => 'E02005610',
        '4PF' => 'E02005610',
        '4PG' => 'E02005610',
        '4PH' => 'E02005610',
        '4PJ' => 'E02005610',
        '4PL' => 'E02005610',
        '4PN' => 'E02005611',
        '4PP' => 'E02005610',
        '4PQ' => 'E02005610',
        '4PR' => 'E02005610',
        '4PS' => 'E02005610',
        '4PT' => 'E02005610',
        '4PU' => 'E02005611',
        '4PW' => 'E02005610',
        '4PX' => 'E02005610',
        '4PY' => 'E02005610',
        '4PZ' => 'E02005610',
        '4QA' => 'E02005610',
        '4QB' => 'E02005610',
        '4QD' => 'E02005610',
        '4QE' => 'E02005610',
        '4QF' => 'E02005610',
        '4QG' => 'E02005610',
        '4QH' => 'E02005610',
        '4QJ' => 'E02005610',
        '4QL' => 'E02005609',
        '4QN' => 'E02005609',
        '4QP' => 'E02005609',
        '4QQ' => 'E02005609',
        '4QR' => 'E02005609',
        '4QS' => 'E02005609',
        '4QT' => 'E02005609',
        '4QU' => 'E02005609',
        '4QW' => 'E02005609',
        '4QX' => 'E02005609',
        '4QY' => 'E02005609',
        '4QZ' => 'E02005609',
        '4RA' => 'E02005609',
        '4RB' => 'E02005609',
        '4RD' => 'E02005609',
        '4RE' => 'E02005609',
        '4RF' => 'E02005609',
        '4RG' => 'E02005609',
        '4RH' => 'E02005609',
        '4RJ' => 'E02005609',
        '4RL' => 'E02005609',
        '4RN' => 'E02005609',
        '4RP' => 'E02005609',
        '4RQ' => 'E02005610',
        '4RR' => 'E02005609',
        '4RS' => 'E02005611',
        '4RT' => 'E02005610',
        '4RU' => 'E02005609',
        '4RW' => 'E02005609',
        '4RX' => 'E02005610',
        '4RY' => 'E02005610',
        '4RZ' => 'E02005610',
        '4SH' => 'E02005609',
        '4SJ' => 'E02005609',
        '4SL' => 'E02005609',
        '4SN' => 'E02005609',
        '4SP' => 'E02005609',
        '4SQ' => 'E02005609',
        '4SR' => 'E02005609',
        '4SS' => 'E02005609',
        '4SU' => 'E02005609',
        '4SW' => 'E02005609',
        '4SX' => 'E02005609',
        '4SY' => 'E02005609',
        '4SZ' => 'E02005609',
        '4TA' => 'E02005609',
        '4TB' => 'E02005609',
        '4TD' => 'E02005609',
        '4TE' => 'E02005609',
        '4TF' => 'E02005609',
        '4TG' => 'E02005609',
        '4TH' => 'E02005609',
        '4TJ' => 'E02005609',
        '4TL' => 'E02005609',
        '4TN' => 'E02005609',
        '4TP' => 'E02005609',
        '4TQ' => 'E02005609',
        '4TR' => 'E02005609',
        '4TS' => 'E02005609',
        '4TX' => 'E02005609',
        '4TY' => 'E02005611',
        '4TZ' => 'E02005610',
        '4UA' => 'E02005610',
        '4UB' => 'E02005610',
        '4UD' => 'E02005610',
        '4UE' => 'E02005610',
        '4UF' => 'E02005610',
        '4UH' => 'E02005610',
        '4UJ' => 'E02005610',
        '4UL' => 'E02005610',
        '4UU' => 'E02005610',
        '4WF' => 'E02005609',
        '4WQ' => 'E02005611',
        '4WR' => 'E02005611',
        '4WS' => 'E02005611',
        '4WT' => 'E02005611',
        '4WU' => 'E02005611',
        '4WW' => 'E02005611',
        '4WX' => 'E02005611',
        '4WY' => 'E02005611',
        '4WZ' => 'E02005609',
        '4XA' => 'E02005610',
        '4XB' => 'E02005609',
        '4XD' => 'E02005609',
        '4XE' => 'E02005609',
        '4XF' => 'E02005609',
        '4XG' => 'E02005609',
        '4XH' => 'E02005609',
        '4XJ' => 'E02005609',
        '4XL' => 'E02005609',
        '4XN' => 'E02005609',
        '4XP' => 'E02005609',
        '4XQ' => 'E02005609',
        '4XR' => 'E02005609',
        '4XS' => 'E02005609',
        '4XT' => 'E02005609',
        '4XU' => 'E02005609',
        '4XW' => 'E02005609',
        '4XX' => 'E02005609',
        '4XY' => 'E02005609',
        '4XZ' => 'E02005609',
        '4YA' => 'E02005609',
        '4YB' => 'E02005609',
        '4YD' => 'E02005609',
        '4YE' => 'E02005609',
        '4YF' => 'E02005609',
        '4YG' => 'E02005609',
        '4YH' => 'E02005609',
        '4YJ' => 'E02005609',
        '4YL' => 'E02005609',
        '4YQ' => 'E02005609',
        '4YS' => 'E02005611',
        '4YX' => 'E02005611',
        '4YZ' => 'E02005611',
        '4ZA' => 'E02005611',
        '4ZY' => 'E02005611',
        '5AA' => 'E02006261',
        '5AB' => 'E02006261',
        '5AD' => 'E02006261',
        '5AE' => 'E02006261',
        '5AF' => 'E02006261',
        '5AG' => 'E02006261',
        '5AH' => 'E02006261',
        '5AJ' => 'E02006261',
        '5AL' => 'E02006261',
        '5AN' => 'E02006261',
        '5AP' => 'E02006261',
        '5AQ' => 'E02006261',
        '5AR' => 'E02006261',
        '5AS' => 'E02006261',
        '5AT' => 'E02006261',
        '5AU' => 'E02006261',
        '5AW' => 'E02006261',
        '5AX' => 'E02006261',
        '5AY' => 'E02006261',
        '5AZ' => 'E02006261',
        '5BA' => 'E02006261',
        '5BB' => 'E02006261',
        '5BD' => 'E02006261',
        '5BE' => 'E02006261',
        '5BF' => 'E02006261',
        '5BG' => 'E02006261',
        '5BH' => 'E02006263',
        '5BJ' => 'E02006261',
        '5BL' => 'E02006263',
        '5BN' => 'E02006263',
        '5BP' => 'E02006261',
        '5BQ' => 'E02006261',
        '5BS' => 'E02006261',
        '5BT' => 'E02006261',
        '5BU' => 'E02006263',
        '5BW' => 'E02006263',
        '5BX' => 'E02006261',
        '5BY' => 'E02006261',
        '5BZ' => 'E02006261',
        '5DA' => 'E02006261',
        '5DB' => 'E02006261',
        '5DD' => 'E02006263',
        '5DE' => 'E02006261',
        '5DF' => 'E02006261',
        '5DG' => 'E02006261',
        '5DH' => 'E02006261',
        '5DJ' => 'E02006261',
        '5DL' => 'E02006261',
        '5DN' => 'E02006261',
        '5DP' => 'E02006261',
        '5DQ' => 'E02006261',
        '5DR' => 'E02006261',
        '5DS' => 'E02006261',
        '5DT' => 'E02006261',
        '5DU' => 'E02006261',
        '5DX' => 'E02006261',
        '5DY' => 'E02006261',
        '5DZ' => 'E02006261',
        '5EA' => 'E02006261',
        '5EB' => 'E02006261',
        '5ED' => 'E02006261',
        '5EE' => 'E02006261',
        '5EF' => 'E02006261',
        '5EG' => 'E02006261',
        '5EH' => 'E02006261',
        '5EJ' => 'E02006261',
        '5EL' => 'E02006261',
        '5EN' => 'E02006263',
        '5EP' => 'E02006261',
        '5EQ' => 'E02006261',
        '5ER' => 'E02006261',
        '5ES' => 'E02006261',
        '5ET' => 'E02006261',
        '5EU' => 'E02006261',
        '5EW' => 'E02006261',
        '5EX' => 'E02006261',
        '5EY' => 'E02006261',
        '5HA' => 'E02005611',
        '5HB' => 'E02006263',
        '5HD' => 'E02006263',
        '5HE' => 'E02006263',
        '5HF' => 'E02005611',
        '5HG' => 'E02006263',
        '5HH' => 'E02006263',
        '5HJ' => 'E02006263',
        '5HL' => 'E02006263',
        '5HN' => 'E02006263',
        '5HP' => 'E02006263',
        '5HQ' => 'E02006263',
        '5HR' => 'E02006263',
        '5HS' => 'E02006263',
        '5HT' => 'E02006263',
        '5HU' => 'E02006263',
        '5HW' => 'E02006263',
        '5HX' => 'E02006263',
        '5HY' => 'E02006263',
        '5HZ' => 'E02006263',
        '5JA' => 'E02006263',
        '5JB' => 'E02006263',
        '5JD' => 'E02006263',
        '5JE' => 'E02006263',
        '5JF' => 'E02006263',
        '5JG' => 'E02006263',
        '5JH' => 'E02006263',
        '5JJ' => 'E02006263',
        '5JL' => 'E02006263',
        '5JN' => 'E02006263',
        '5JP' => 'E02006263',
        '5JQ' => 'E02006263',
        '5JR' => 'E02006263',
        '5JS' => 'E02006263',
        '5JT' => 'E02006263',
        '5JU' => 'E02006263',
        '5JW' => 'E02006263',
        '5JX' => 'E02006263',
        '5JY' => 'E02006263',
        '5JZ' => 'E02006263',
        '5LA' => 'E02006263',
        '5LB' => 'E02006263',
        '5LD' => 'E02006263',
        '5LE' => 'E02006263',
        '5LF' => 'E02006263',
        '5LG' => 'E02006263',
        '5LH' => 'E02006263',
        '5LJ' => 'E02006263',
        '5LL' => 'E02006263',
        '5LN' => 'E02006263',
        '5LP' => 'E02006263',
        '5LQ' => 'E02006263',
        '5LR' => 'E02006263',
        '5LS' => 'E02006263',
        '5LT' => 'E02006263',
        '5LU' => 'E02006263',
        '5LW' => 'E02006263',
        '5LX' => 'E02006263',
        '5LY' => 'E02006263',
        '5NA' => 'E02006263',
        '5NB' => 'E02006263',
        '5ND' => 'E02006261',
        '5NE' => 'E02006263',
        '5NF' => 'E02006261',
        '5NG' => 'E02006263',
        '5NH' => 'E02006263',
        '5NJ' => 'E02006263',
        '5NL' => 'E02006263',
        '5NN' => 'E02006263',
        '5NP' => 'E02006263',
        '5NQ' => 'E02006263',
        '5NR' => 'E02006263',
        '5NS' => 'E02006263',
        '5NT' => 'E02006263',
        '5NW' => 'E02006261',
        '5NZ' => 'E02006263',
        '5PA' => 'E02006263',
        '5PB' => 'E02006263',
        '5PD' => 'E02006263',
        '5PE' => 'E02006263',
        '5PF' => 'E02006263',
        '5PG' => 'E02006263',
        '5PH' => 'E02006263',
        '5PJ' => 'E02006263',
        '5PL' => 'E02006263',
        '5PN' => 'E02006263',
        '5PP' => 'E02006263',
        '5PQ' => 'E02006263',
        '5PR' => 'E02006263',
        '5PS' => 'E02006263',
        '5PT' => 'E02006263',
        '5PU' => 'E02006263',
        '5PW' => 'E02006263',
        '5PX' => 'E02006263',
        '5PY' => 'E02006263',
        '5PZ' => 'E02006263',
        '5QA' => 'E02006263',
        '5QB' => 'E02006263',
        '5QD' => 'E02006263',
        '5QE' => 'E02006263',
        '5QF' => 'E02006263',
        '5QG' => 'E02006263',
        '5QH' => 'E02006263',
        '5QJ' => 'E02006263',
        '5QL' => 'E02006263',
        '5QN' => 'E02006263',
        '5QP' => 'E02006263',
        '5QQ' => 'E02006263',
        '5QR' => 'E02006263',
        '5QS' => 'E02006261',
        '5QT' => 'E02006261',
        '5QW' => 'E02006263',
        '5QX' => 'E02006261',
        '5QY' => 'E02006261',
        '5QZ' => 'E02006261',
        '5RA' => 'E02006261',
        '5RB' => 'E02006261',
        '5RD' => 'E02006261',
        '5RE' => 'E02006261',
        '5RF' => 'E02006261',
        '5RG' => 'E02006261',
        '5RH' => 'E02006261',
        '5RJ' => 'E02006261',
        '5RL' => 'E02006263',
        '5RN' => 'E02006263',
        '5RP' => 'E02006263',
        '5RQ' => 'E02006263',
        '5RR' => 'E02006263',
        '5RS' => 'E02006263',
        '5RT' => 'E02006263',
        '5RU' => 'E02006263',
        '5RZ' => 'E02006263',
        '5SA' => 'E02006263',
        '5SB' => 'E02006263',
        '5SD' => 'E02006263',
        '5SE' => 'E02006263',
        '5SF' => 'E02006263',
        '5SG' => 'E02006263',
        '5SH' => 'E02006263',
        '5SJ' => 'E02006263',
        '5SL' => 'E02006263',
        '5SN' => 'E02006263',
        '5SP' => 'E02006263',
        '5SQ' => 'E02006263',
        '5ST' => 'E02006263',
        '5SW' => 'E02006263',
        '5SX' => 'E02006263',
        '5SY' => 'E02006263',
        '5SZ' => 'E02006263',
        '5TA' => 'E02006263',
        '5TB' => 'E02006263',
        '5TD' => 'E02006263',
        '5TE' => 'E02006263',
        '5TF' => 'E02006263',
        '5TG' => 'E02006263',
        '5TH' => 'E02006263',
        '5TJ' => 'E02006263',
        '5TL' => 'E02006263',
        '5TN' => 'E02006263',
        '5TP' => 'E02006263',
        '5TQ' => 'E02006263',
        '5TR' => 'E02006263',
        '5TS' => 'E02006263',
        '5TT' => 'E02006263',
        '5TU' => 'E02006263',
        '5TW' => 'E02006263',
        '5TX' => 'E02006263',
        '5TY' => 'E02006263',
        '5TZ' => 'E02006263',
        '5UA' => 'E02006263',
        '5UB' => 'E02006263',
        '5UD' => 'E02006263',
        '5UE' => 'E02006263',
        '5UF' => 'E02006263',
        '5UH' => 'E02006263',
        '5UJ' => 'E02006263',
        '5UL' => 'E02006263',
        '5UX' => 'E02006261',
        '5UY' => 'E02006261',
        '5WA' => 'E02005611',
        '5WE' => 'E02005611',
        '5WT' => 'E02005611',
        '5WU' => 'E02006261',
        '5WX' => 'E02005611',
        '5WY' => 'E02005611',
        '5WZ' => 'E02005611',
        '5XB' => 'E02006261',
        '5YB' => 'E02005611',
        '5ZB' => 'E02005611',
        '5ZU' => 'E02005611',
        '5ZY' => 'E02006261',
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
