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
final class GL15
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '4AA' => 'E02004630',
        '4AB' => 'E02004630',
        '4AD' => 'E02004630',
        '4AE' => 'E02004630',
        '4AF' => 'E02004630',
        '4AG' => 'E02004630',
        '4AH' => 'E02004630',
        '4AJ' => 'E02004630',
        '4AL' => 'E02004629',
        '4AN' => 'E02004629',
        '4AP' => 'E02004630',
        '4AQ' => 'E02004630',
        '4AR' => 'E02004630',
        '4AS' => 'E02004630',
        '4AT' => 'E02004630',
        '4AU' => 'E02004630',
        '4AW' => 'E02004629',
        '4AX' => 'E02004630',
        '4AY' => 'E02004630',
        '4AZ' => 'E02004630',
        '4BA' => 'E02004630',
        '4BB' => 'E02004634',
        '4BD' => 'E02004634',
        '4BE' => 'E02004630',
        '4BG' => 'E02004630',
        '4BH' => 'E02004630',
        '4BJ' => 'E02004630',
        '4BL' => 'E02004630',
        '4BN' => 'E02004630',
        '4BP' => 'E02004630',
        '4BQ' => 'E02004634',
        '4BS' => 'E02004630',
        '4BT' => 'E02004630',
        '4BW' => 'E02004630',
        '4BX' => 'E02004634',
        '4BY' => 'E02004634',
        '4DA' => 'E02004630',
        '4DB' => 'E02004630',
        '4DD' => 'E02004630',
        '4DE' => 'E02004630',
        '4DF' => 'E02004630',
        '4DG' => 'E02004630',
        '4DH' => 'E02004630',
        '4DJ' => 'E02004630',
        '4DP' => 'E02004630',
        '4DQ' => 'E02004630',
        '4DR' => 'E02004630',
        '4DS' => 'E02004630',
        '4DT' => 'E02004630',
        '4DU' => 'E02004630',
        '4DW' => 'E02004630',
        '4DX' => 'E02004630',
        '4DY' => 'E02004630',
        '4DZ' => 'E02004630',
        '4EA' => 'E02004630',
        '4EB' => 'E02004630',
        '4ED' => 'E02004630',
        '4EE' => 'E02004630',
        '4EF' => 'E02004630',
        '4EG' => 'E02004630',
        '4EH' => 'E02004630',
        '4EJ' => 'E02004634',
        '4EL' => 'E02004634',
        '4EN' => 'E02004634',
        '4EP' => 'E02004634',
        '4ER' => 'E02004634',
        '4ES' => 'E02004634',
        '4ET' => 'E02004634',
        '4EU' => 'E02004634',
        '4EW' => 'E02004634',
        '4EX' => 'E02004634',
        '4EY' => 'E02004634',
        '4EZ' => 'E02004634',
        '4HA' => 'E02004633',
        '4HB' => 'E02004633',
        '4HD' => 'E02004633',
        '4HG' => 'E02004633',
        '4HH' => 'E02004633',
        '4HJ' => 'E02004633',
        '4HL' => 'E02004633',
        '4HN' => 'E02004633',
        '4HP' => 'E02004633',
        '4HQ' => 'E02004633',
        '4HR' => 'E02004633',
        '4HS' => 'E02004633',
        '4HT' => 'E02004633',
        '4HU' => 'E02004633',
        '4HW' => 'E02004633',
        '4JA' => 'E02004633',
        '4JB' => 'E02004633',
        '4JD' => 'E02004633',
        '4JE' => 'E02004633',
        '4JF' => 'E02004633',
        '4JH' => 'E02004633',
        '4JJ' => 'E02004633',
        '4JL' => 'E02004633',
        '4JN' => 'E02004633',
        '4JP' => 'E02004633',
        '4JQ' => 'E02004633',
        '4JR' => 'E02004633',
        '4JS' => 'E02004633',
        '4JT' => 'E02004633',
        '4JU' => 'E02004633',
        '4JW' => 'E02004633',
        '4JX' => 'E02004633',
        '4JY' => 'E02004633',
        '4JZ' => 'E02004633',
        '4LA' => 'E02004633',
        '4LG' => 'E02004633',
        '4LH' => 'E02004634',
        '4LJ' => 'E02004634',
        '4LL' => 'E02004634',
        '4LN' => 'E02004634',
        '4LP' => 'E02004634',
        '4LQ' => 'E02004633',
        '4LR' => 'E02004630',
        '4LS' => 'E02004630',
        '4LT' => 'E02004630',
        '4LU' => 'E02004630',
        '4LW' => 'E02004634',
        '4LX' => 'E02004630',
        '4LY' => 'E02004630',
        '4LZ' => 'E02004633',
        '4NA' => 'E02004633',
        '4NB' => 'E02004633',
        '4ND' => 'E02004633',
        '4NE' => 'E02004633',
        '4NF' => 'E02004633',
        '4NG' => 'E02004634',
        '4NH' => 'E02004634',
        '4NJ' => 'E02004633',
        '4NL' => 'E02004633',
        '4NN' => 'E02004633',
        '4NP' => 'E02004633',
        '4NQ' => 'E02004633',
        '4NR' => 'E02004633',
        '4NS' => 'E02004633',
        '4NT' => 'E02004633',
        '4NU' => 'E02004633',
        '4NW' => 'E02004633',
        '4NX' => 'E02004633',
        '4NY' => 'E02004633',
        '4NZ' => 'E02004633',
        '4PA' => 'E02004633',
        '4PB' => 'E02004633',
        '4PD' => 'E02004633',
        '4PE' => 'E02004633',
        '4PF' => 'E02004633',
        '4PG' => 'E02004633',
        '4PH' => 'E02004633',
        '4PJ' => 'E02004633',
        '4PL' => 'E02004633',
        '4PN' => 'E02004633',
        '4PP' => 'E02004633',
        '4PQ' => 'E02004633',
        '4PR' => 'E02004633',
        '4PS' => 'E02004634',
        '4PT' => 'E02004633',
        '4PU' => 'E02004633',
        '4PW' => 'E02004633',
        '4PX' => 'E02004633',
        '4PY' => 'E02004633',
        '4PZ' => 'E02004633',
        '4QA' => 'E02004633',
        '4QB' => 'E02004633',
        '4QD' => 'E02004633',
        '4QE' => 'E02004633',
        '4QF' => 'E02004633',
        '4QG' => 'E02004633',
        '4QH' => 'E02004633',
        '4QJ' => 'E02004633',
        '4QL' => 'E02004633',
        '4QN' => 'E02004633',
        '4QP' => 'E02004633',
        '4QQ' => 'E02004633',
        '4QR' => 'E02004633',
        '4QS' => 'E02004633',
        '4QT' => 'E02004633',
        '4QU' => 'E02004633',
        '4QW' => 'E02004633',
        '4QX' => 'E02004633',
        '4QY' => 'E02004633',
        '4QZ' => 'E02004633',
        '4RA' => 'E02004633',
        '4RB' => 'E02004633',
        '4RD' => 'E02004633',
        '4RE' => 'E02004633',
        '4RF' => 'E02004633',
        '4RG' => 'E02004633',
        '4RH' => 'E02004633',
        '4RJ' => 'E02004633',
        '4RL' => 'E02004633',
        '4RN' => 'E02004633',
        '4RP' => 'E02004633',
        '4RQ' => 'E02004633',
        '4RR' => 'E02004633',
        '4RS' => 'E02004633',
        '4RT' => 'E02004633',
        '4RU' => 'E02004633',
        '4RW' => 'E02004633',
        '4RX' => 'E02004633',
        '4RY' => 'E02004633',
        '4RZ' => 'E02004633',
        '4SA' => 'E02004633',
        '4SB' => 'E02004633',
        '4SD' => 'E02004633',
        '4SE' => 'E02004633',
        '4SF' => 'E02004633',
        '4SG' => 'E02004633',
        '4SH' => 'E02004633',
        '4SJ' => 'E02004633',
        '4SL' => 'E02004633',
        '4SN' => 'E02004633',
        '4SP' => 'E02004633',
        '4SQ' => 'E02004633',
        '4SR' => 'E02004633',
        '4SS' => 'E02004633',
        '4ST' => 'E02004633',
        '4SU' => 'E02004633',
        '4SW' => 'E02004633',
        '4SX' => 'E02004633',
        '4SY' => 'E02004633',
        '4SZ' => 'E02004633',
        '4TA' => 'E02004633',
        '4TB' => 'E02004633',
        '4TD' => 'E02004633',
        '4TE' => 'E02004633',
        '4TF' => 'E02004633',
        '4TG' => 'E02004633',
        '4TH' => 'E02004633',
        '4TJ' => 'E02004633',
        '4TL' => 'E02004633',
        '4TN' => 'E02004633',
        '4TP' => 'E02004633',
        '4TQ' => 'E02004633',
        '4TR' => 'E02004633',
        '4TS' => 'E02004633',
        '4TT' => 'E02004633',
        '4TU' => 'E02004633',
        '4TW' => 'E02004633',
        '4TX' => 'E02004633',
        '4TY' => 'E02004633',
        '4TZ' => 'E02004633',
        '4UA' => 'E02004633',
        '4UB' => 'E02004633',
        '4UD' => 'E02004633',
        '4UE' => 'E02004633',
        '4WB' => 'E02004633',
        '4WF' => 'E02004633',
        '4WS' => 'E02004634',
        '4WT' => 'E02004634',
        '4WU' => 'E02004634',
        '4WW' => 'E02004633',
        '4WX' => 'E02004634',
        '4WY' => 'E02004634',
        '4WZ' => 'E02004634',
        '4YA' => 'E02004633',
        '4YB' => 'E02004634',
        '4YD' => 'E02004634',
        '4YE' => 'E02004634',
        '4YF' => 'E02004633',
        '4YG' => 'E02004634',
        '4YH' => 'E02004634',
        '4YJ' => 'E02004634',
        '4YL' => 'E02004633',
        '4YN' => 'E02004634',
        '4YP' => 'E02004633',
        '4YQ' => 'E02004634',
        '4YR' => 'E02004633',
        '4YS' => 'E02004634',
        '4YT' => 'E02004633',
        '4YU' => 'E02004634',
        '5AA' => 'E02004634',
        '5AB' => 'E02004634',
        '5AD' => 'E02004634',
        '5AE' => 'E02004634',
        '5AF' => 'E02004634',
        '5AG' => 'E02004634',
        '5AH' => 'E02004634',
        '5AJ' => 'E02004634',
        '5AL' => 'E02004634',
        '5AN' => 'E02004634',
        '5AP' => 'E02004634',
        '5AQ' => 'E02004634',
        '5AR' => 'E02004634',
        '5AS' => 'E02004634',
        '5AT' => 'E02004634',
        '5AU' => 'E02004634',
        '5AW' => 'E02004634',
        '5AX' => 'E02004634',
        '5AY' => 'E02004634',
        '5AZ' => 'E02004634',
        '5BA' => 'E02004634',
        '5BB' => 'E02004634',
        '5BD' => 'E02004634',
        '5BE' => 'E02004634',
        '5BG' => 'E02004634',
        '5BH' => 'E02004634',
        '5BJ' => 'E02004634',
        '5BL' => 'E02004634',
        '5BN' => 'E02004634',
        '5BP' => 'E02004634',
        '5BQ' => 'E02004634',
        '5BS' => 'E02004634',
        '5BT' => 'E02004634',
        '5BU' => 'E02004634',
        '5BW' => 'E02004634',
        '5BX' => 'E02004634',
        '5BY' => 'E02004634',
        '5BZ' => 'E02004634',
        '5DA' => 'E02004634',
        '5DB' => 'E02004634',
        '5DD' => 'E02004634',
        '5DE' => 'E02004634',
        '5DF' => 'E02004634',
        '5DG' => 'E02004634',
        '5DH' => 'E02004634',
        '5DJ' => 'E02004634',
        '5DL' => 'E02004634',
        '5DN' => 'E02004634',
        '5DP' => 'E02004634',
        '5DQ' => 'E02004634',
        '5DR' => 'E02004634',
        '5DS' => 'E02004634',
        '5DT' => 'E02004634',
        '5DU' => 'E02004634',
        '5DW' => 'E02004634',
        '5DX' => 'E02004634',
        '5DY' => 'E02004634',
        '5DZ' => 'E02004634',
        '5EA' => 'E02004634',
        '5EB' => 'E02004634',
        '5ED' => 'E02004634',
        '5EE' => 'E02004634',
        '5EF' => 'E02004634',
        '5EG' => 'E02004634',
        '5EH' => 'E02004634',
        '5EJ' => 'E02004634',
        '5EL' => 'E02004634',
        '5EN' => 'E02004634',
        '5EP' => 'E02004634',
        '5EQ' => 'E02004634',
        '5ER' => 'E02004634',
        '5ES' => 'E02004634',
        '5ET' => 'E02004634',
        '5EU' => 'E02004634',
        '5EW' => 'E02004634',
        '5EX' => 'E02004634',
        '5EY' => 'E02004634',
        '5EZ' => 'E02004634',
        '5FA' => 'E02004634',
        '5FB' => 'E02004634',
        '5FD' => 'E02004634',
        '5FE' => 'E02004634',
        '5FF' => 'E02004634',
        '5FG' => 'E02004634',
        '5FH' => 'E02004634',
        '5FJ' => 'E02004634',
        '5FL' => 'E02004634',
        '5FN' => 'E02004634',
        '5FP' => 'E02004634',
        '5FQ' => 'E02004634',
        '5FR' => 'E02004634',
        '5FS' => 'E02004634',
        '5FT' => 'E02004634',
        '5FU' => 'E02004634',
        '5FW' => 'E02004634',
        '5FX' => 'E02004634',
        '5FY' => 'E02004634',
        '5FZ' => 'E02004634',
        '5GA' => 'E02004634',
        '5GB' => 'E02004634',
        '5GD' => 'E02004634',
        '5GE' => 'E02004634',
        '5GF' => 'E02004634',
        '5GG' => 'E02004634',
        '5GH' => 'E02004634',
        '5GL' => 'E02004634',
        '5GZ' => 'E02004634',
        '5HA' => 'E02004634',
        '5HB' => 'E02004634',
        '5HD' => 'E02004634',
        '5HE' => 'E02004634',
        '5HF' => 'E02004634',
        '5HG' => 'E02004634',
        '5HH' => 'E02004634',
        '5HJ' => 'E02004634',
        '5HL' => 'E02004634',
        '5HN' => 'E02004634',
        '5HP' => 'E02004634',
        '5HQ' => 'E02004634',
        '5HR' => 'E02004634',
        '5HS' => 'E02004634',
        '5HT' => 'E02004634',
        '5HU' => 'E02004634',
        '5HW' => 'E02004634',
        '5HX' => 'E02004634',
        '5HY' => 'E02004634',
        '5HZ' => 'E02004634',
        '5JA' => 'E02004634',
        '5JB' => 'E02004634',
        '5JD' => 'E02004634',
        '5JE' => 'E02004634',
        '5JF' => 'E02004634',
        '5JG' => 'E02004634',
        '5JH' => 'E02004634',
        '5JJ' => 'E02004634',
        '5JL' => 'E02004634',
        '5JN' => 'E02004634',
        '5JP' => 'E02004634',
        '5JQ' => 'E02004634',
        '5JR' => 'E02004634',
        '5JS' => 'E02004634',
        '5JT' => 'E02004634',
        '5JU' => 'E02004634',
        '5JW' => 'E02004634',
        '5JX' => 'E02004634',
        '5JZ' => 'E02004634',
        '5LA' => 'E02004634',
        '5LB' => 'E02004634',
        '5LD' => 'E02004634',
        '5LE' => 'E02004634',
        '5LF' => 'E02004634',
        '5LG' => 'E02004634',
        '5LH' => 'E02004634',
        '5LJ' => 'E02004634',
        '5LL' => 'E02004634',
        '5LN' => 'E02004634',
        '5LP' => 'E02004634',
        '5LQ' => 'E02004634',
        '5LR' => 'E02004634',
        '5LS' => 'E02004634',
        '5LT' => 'E02004634',
        '5LU' => 'E02004634',
        '5LW' => 'E02004634',
        '5LX' => 'E02004634',
        '5LY' => 'E02004634',
        '5LZ' => 'E02004634',
        '5NA' => 'E02004634',
        '5NB' => 'E02004634',
        '5ND' => 'E02004634',
        '5NE' => 'E02004634',
        '5NF' => 'E02004634',
        '5NG' => 'E02004634',
        '5NH' => 'E02004634',
        '5NJ' => 'E02004634',
        '5NL' => 'E02004634',
        '5NN' => 'E02004634',
        '5NP' => 'E02004634',
        '5NQ' => 'E02004634',
        '5NR' => 'E02004634',
        '5NS' => 'E02004634',
        '5NT' => 'E02004634',
        '5NU' => 'E02004634',
        '5NW' => 'E02004634',
        '5NX' => 'E02004634',
        '5NY' => 'E02004634',
        '5NZ' => 'E02004634',
        '5PA' => 'E02004634',
        '5PB' => 'E02004634',
        '5PD' => 'E02004634',
        '5PE' => 'E02004634',
        '5PF' => 'E02004634',
        '5PG' => 'E02004634',
        '5PH' => 'E02004634',
        '5PJ' => 'E02004634',
        '5PL' => 'E02004634',
        '5PN' => 'E02004634',
        '5PP' => 'E02004634',
        '5PQ' => 'E02004634',
        '5PR' => 'E02004634',
        '5PS' => 'E02004634',
        '5PT' => 'E02004634',
        '5PU' => 'E02004634',
        '5PW' => 'E02004634',
        '5PX' => 'E02004634',
        '5PY' => 'E02004634',
        '5PZ' => 'E02004634',
        '5QA' => 'E02004634',
        '5QB' => 'E02004634',
        '5QD' => 'E02004634',
        '5QE' => 'E02004634',
        '5QF' => 'E02004634',
        '5QG' => 'E02004634',
        '5QH' => 'E02004634',
        '5QJ' => 'E02004634',
        '5QL' => 'E02004634',
        '5QN' => 'E02004634',
        '5QP' => 'E02004634',
        '5QQ' => 'E02004634',
        '5QR' => 'E02004634',
        '5QS' => 'E02004634',
        '5QT' => 'E02004634',
        '5QU' => 'E02004634',
        '5QW' => 'E02004634',
        '5QX' => 'E02004634',
        '5QY' => 'E02004634',
        '5QZ' => 'E02004634',
        '5RA' => 'E02004634',
        '5RB' => 'E02004634',
        '5RD' => 'E02004634',
        '5RE' => 'E02004634',
        '5RF' => 'E02004634',
        '5RG' => 'E02004634',
        '5RH' => 'E02004634',
        '5RJ' => 'E02004634',
        '5RL' => 'E02004634',
        '5RN' => 'E02004634',
        '5RP' => 'E02004634',
        '5RQ' => 'E02004634',
        '5RR' => 'E02004634',
        '5RS' => 'E02004634',
        '5RT' => 'E02004634',
        '5RU' => 'E02004634',
        '5RW' => 'E02004634',
        '5RX' => 'E02004634',
        '5SD' => 'E02004634',
        '5SE' => 'E02004634',
        '5SF' => 'E02004634',
        '5SG' => 'E02004634',
        '5SH' => 'E02004634',
        '5SJ' => 'E02004634',
        '5SL' => 'E02004634',
        '5SN' => 'E02004634',
        '5SP' => 'E02004634',
        '5SQ' => 'E02004634',
        '5SR' => 'E02004634',
        '5SS' => 'E02004634',
        '5ST' => 'E02004634',
        '5SU' => 'E02004634',
        '5SW' => 'E02004634',
        '5SX' => 'E02004634',
        '5SY' => 'E02004634',
        '5SZ' => 'E02004634',
        '5TA' => 'E02004634',
        '5TB' => 'E02004634',
        '5TD' => 'E02004634',
        '5TE' => 'E02004634',
        '5TF' => 'E02004634',
        '5TG' => 'E02004634',
        '5TH' => 'E02004634',
        '5TJ' => 'E02004634',
        '5TL' => 'E02004634',
        '5TN' => 'E02004634',
        '5TP' => 'E02004634',
        '5TQ' => 'E02004634',
        '5UA' => 'E02004634',
        '5UB' => 'E02004634',
        '5WD' => 'E02004634',
        '5WU' => 'E02004634',
        '5WW' => 'E02004634',
        '5WX' => 'E02004634',
        '5WY' => 'E02004634',
        '5WZ' => 'E02004634',
        '5YA' => 'E02004634',
        '5YB' => 'E02004634',
        '5YD' => 'E02004634',
        '5YE' => 'E02004634',
        '5YF' => 'E02004634',
        '5YG' => 'E02004634',
        '5YH' => 'E02004634',
        '5YJ' => 'E02004634',
        '5YL' => 'E02004634',
        '5YN' => 'E02004634',
        '5YP' => 'E02004634',
        '5YQ' => 'E02004634',
        '5YR' => 'E02004634',
        '5YS' => 'E02004634',
        '5YT' => 'E02004634',
        '5YU' => 'E02004634',
        '5YW' => 'E02004634',
        '5YX' => 'E02004634',
        '5YY' => 'E02004634',
        '5ZA' => 'E02004634',
        '5ZB' => 'E02004634',
        '5ZF' => 'E02004634',
        '6AA' => 'E02004634',
        '6AB' => 'E02004634',
        '6AD' => 'E02004635',
        '6AE' => 'E02004634',
        '6AF' => 'E02004634',
        '6AG' => 'E02004634',
        '6AH' => 'E02004631',
        '6AJ' => 'E02004634',
        '6AL' => 'E02004634',
        '6AN' => 'E02004634',
        '6AP' => 'E02004633',
        '6AQ' => 'E02004635',
        '6AR' => 'E02004633',
        '6AS' => 'E02004635',
        '6AT' => 'E02004634',
        '6AU' => 'E02004634',
        '6AW' => 'E02004633',
        '6AX' => 'E02004634',
        '6AY' => 'E02004634',
        '6AZ' => 'E02004634',
        '6BA' => 'E02004634',
        '6BB' => 'E02004634',
        '6BD' => 'E02004634',
        '6BE' => 'E02004634',
        '6BG' => 'E02004634',
        '6BH' => 'E02004634',
        '6BJ' => 'E02004634',
        '6BL' => 'E02004631',
        '6BN' => 'E02004634',
        '6BP' => 'E02004633',
        '6BQ' => 'E02004634',
        '6BS' => 'E02004634',
        '6BT' => 'E02004634',
        '6BU' => 'E02004634',
        '6BW' => 'E02004633',
        '6BX' => 'E02004634',
        '6BY' => 'E02004634',
        '6BZ' => 'E02004634',
        '6DA' => 'E02004634',
        '6DB' => 'E02004634',
        '6DD' => 'E02004634',
        '6DE' => 'E02004634',
        '6DF' => 'E02004634',
        '6DG' => 'E02004634',
        '6DH' => 'E02004634',
        '6DJ' => 'E02004634',
        '6DL' => 'E02004634',
        '6DN' => 'E02004634',
        '6DP' => 'E02004634',
        '6DQ' => 'E02004634',
        '6DR' => 'E02004634',
        '6DS' => 'E02004634',
        '6DT' => 'E02004634',
        '6DU' => 'E02004634',
        '6DW' => 'E02004634',
        '6DX' => 'E02004634',
        '6DY' => 'E02004634',
        '6DZ' => 'E02004634',
        '6EA' => 'E02004634',
        '6EB' => 'E02004634',
        '6ED' => 'E02004634',
        '6EE' => 'E02004633',
        '6EF' => 'E02004633',
        '6EG' => 'E02004633',
        '6EH' => 'E02004633',
        '6EJ' => 'E02004633',
        '6EL' => 'E02004633',
        '6EN' => 'E02004633',
        '6EP' => 'E02004633',
        '6EQ' => 'E02004633',
        '6ER' => 'E02004633',
        '6ES' => 'E02004633',
        '6ET' => 'E02004633',
        '6EU' => 'E02004633',
        '6EW' => 'E02004633',
        '6EX' => 'E02004631',
        '6EY' => 'E02004633',
        '6EZ' => 'E02004633',
        '6FB' => 'E02004633',
        '6FD' => 'E02004634',
        '6FE' => 'E02004633',
        '6FF' => 'E02004634',
        '6FG' => 'E02004633',
        '6GA' => 'E02004633',
        '6HA' => 'E02004633',
        '6HB' => 'E02004633',
        '6HD' => 'E02004633',
        '6HE' => 'E02004633',
        '6HF' => 'E02004633',
        '6HG' => 'E02004633',
        '6HH' => 'E02004633',
        '6HJ' => 'E02004633',
        '6HL' => 'E02004633',
        '6HN' => 'E02004633',
        '6HP' => 'E02004633',
        '6HQ' => 'E02004633',
        '6HR' => 'E02004633',
        '6HS' => 'E02004633',
        '6HT' => 'E02004633',
        '6HU' => 'E02004633',
        '6HW' => 'E02004633',
        '6HX' => 'E02004633',
        '6HY' => 'E02004634',
        '6HZ' => 'E02004633',
        '6JA' => 'E02004633',
        '6JB' => 'E02004633',
        '6JD' => 'E02004633',
        '6JE' => 'E02004633',
        '6JF' => 'E02004633',
        '6JG' => 'E02004633',
        '6JH' => 'E02004633',
        '6JJ' => 'E02004633',
        '6JL' => 'E02004633',
        '6JN' => 'E02004633',
        '6JP' => 'E02004633',
        '6JQ' => 'E02004633',
        '6JR' => 'E02004633',
        '6JS' => 'E02004633',
        '6JT' => 'E02004633',
        '6JU' => 'E02004633',
        '6JW' => 'E02004633',
        '6JX' => 'E02004633',
        '6JY' => 'E02004633',
        '6JZ' => 'E02004633',
        '6LA' => 'E02004633',
        '6LB' => 'E02004633',
        '6LD' => 'E02004633',
        '6LE' => 'E02004633',
        '6LF' => 'E02004633',
        '6LG' => 'E02004633',
        '6LH' => 'E02004633',
        '6LJ' => 'E02004633',
        '6LL' => 'E02004633',
        '6LN' => 'E02004633',
        '6LP' => 'E02004633',
        '6LQ' => 'E02004633',
        '6LR' => 'E02004633',
        '6LS' => 'E02004633',
        '6LT' => 'E02004633',
        '6LU' => 'E02004633',
        '6LW' => 'E02004633',
        '6LX' => 'E02004633',
        '6LY' => 'E02004633',
        '6LZ' => 'E02004633',
        '6NA' => 'E02004633',
        '6NB' => 'E02004633',
        '6ND' => 'E02004633',
        '6NE' => 'E02004633',
        '6NF' => 'E02004633',
        '6NG' => 'E02004633',
        '6NH' => 'E02004633',
        '6NJ' => 'E02004635',
        '6NL' => 'E02004635',
        '6NN' => 'E02004635',
        '6NP' => 'E02004635',
        '6NQ' => 'E02004635',
        '6NR' => 'E02004635',
        '6NS' => 'E02004635',
        '6NT' => 'E02004635',
        '6NU' => 'E02004635',
        '6NW' => 'E02004635',
        '6NX' => 'E02004635',
        '6NY' => 'E02004635',
        '6NZ' => 'E02004635',
        '6PA' => 'E02004635',
        '6PB' => 'E02004635',
        '6PD' => 'E02004635',
        '6PE' => 'E02004635',
        '6PF' => 'E02004635',
        '6PG' => 'E02004635',
        '6PH' => 'E02004635',
        '6PJ' => 'E02004635',
        '6PL' => 'E02004635',
        '6PN' => 'E02004635',
        '6PP' => 'E02004635',
        '6PQ' => 'E02004635',
        '6PR' => 'E02004635',
        '6PS' => 'E02004635',
        '6PT' => 'E02004635',
        '6PU' => 'E02004635',
        '6PW' => 'E02004635',
        '6PX' => 'E02004635',
        '6PY' => 'E02004635',
        '6PZ' => 'E02004634',
        '6QA' => 'E02004635',
        '6QB' => 'E02004635',
        '6QD' => 'E02004635',
        '6QE' => 'E02004631',
        '6QF' => 'E02004631',
        '6QG' => 'E02004631',
        '6QH' => 'E02004631',
        '6QJ' => 'E02004631',
        '6QL' => 'E02004635',
        '6QN' => 'E02004631',
        '6QP' => 'E02004633',
        '6QQ' => 'E02004631',
        '6QR' => 'E02004631',
        '6QS' => 'E02004631',
        '6QT' => 'E02004631',
        '6QU' => 'E02004631',
        '6QW' => 'E02004631',
        '6QX' => 'E02004631',
        '6QY' => 'E02004631',
        '6QZ' => 'E02004631',
        '6RA' => 'E02004631',
        '6RB' => 'E02004631',
        '6RD' => 'E02004633',
        '6RE' => 'E02004633',
        '6RF' => 'E02004633',
        '6RG' => 'E02004631',
        '6RH' => 'E02004631',
        '6RJ' => 'E02004631',
        '6RL' => 'E02004631',
        '6RN' => 'E02004631',
        '6RP' => 'E02004631',
        '6RQ' => 'E02004631',
        '6RR' => 'E02004631',
        '6RS' => 'E02004631',
        '6RT' => 'E02004631',
        '6RU' => 'E02004631',
        '6RW' => 'E02004631',
        '6RX' => 'E02004631',
        '6RY' => 'E02004631',
        '6RZ' => 'E02004633',
        '6SA' => 'E02004631',
        '6SB' => 'E02004631',
        '6SD' => 'E02004631',
        '6SE' => 'E02004631',
        '6SF' => 'E02004631',
        '6SG' => 'E02004631',
        '6SH' => 'E02004631',
        '6SJ' => 'E02004631',
        '6SL' => 'E02004631',
        '6SN' => 'E02004631',
        '6SP' => 'E02004631',
        '6SQ' => 'E02004631',
        '6SR' => 'E02004631',
        '6SS' => 'E02004631',
        '6ST' => 'E02004634',
        '6SU' => 'E02004635',
        '6SW' => 'E02004631',
        '6SY' => 'E02004631',
        '6TA' => 'E02004631',
        '6TB' => 'E02004631',
        '6TD' => 'E02004631',
        '6TE' => 'E02004631',
        '6TF' => 'E02004631',
        '6TG' => 'E02004631',
        '6TH' => 'E02004631',
        '6TJ' => 'E02004631',
        '6TL' => 'E02004631',
        '6TN' => 'E02004631',
        '6TP' => 'E02004631',
        '6TQ' => 'E02004631',
        '6TR' => 'E02004631',
        '6TS' => 'E02004631',
        '6TT' => 'E02004631',
        '6TU' => 'E02004631',
        '6TW' => 'E02004631',
        '6TX' => 'E02004635',
        '6TY' => 'E02004635',
        '6TZ' => 'E02004635',
        '6UA' => 'E02004631',
        '6UB' => 'E02004631',
        '6UD' => 'E02004631',
        '6UE' => 'E02004631',
        '6UF' => 'E02004631',
        '6UG' => 'E02004631',
        '6UH' => 'E02004635',
        '6UJ' => 'E02004635',
        '6UL' => 'E02004635',
        '6UN' => 'E02004635',
        '6UP' => 'E02004635',
        '6UQ' => 'E02004635',
        '6UR' => 'E02004635',
        '6US' => 'E02004635',
        '6UT' => 'E02004635',
        '6UU' => 'E02004635',
        '6UW' => 'E02004635',
        '6UX' => 'E02004635',
        '6UY' => 'E02004631',
        '6UZ' => 'E02004635',
        '6WA' => 'E02004634',
        '6WQ' => 'E02004635',
        '6WR' => 'E02004634',
        '6WS' => 'E02004634',
        '6WT' => 'E02004634',
        '6WU' => 'E02004634',
        '6WW' => 'E02004634',
        '6WX' => 'E02004634',
        '6WY' => 'E02004634',
        '6WZ' => 'E02004634',
        '6XA' => 'E02004635',
        '6XB' => 'E02004635',
        '6XD' => 'E02004635',
        '6XE' => 'E02004635',
        '6XF' => 'E02004635',
        '6XG' => 'E02004633',
        '6XN' => 'E02004633',
        '6XW' => 'E02004633',
        '6XZ' => 'E02004634',
        '6YA' => 'E02004634',
        '6YB' => 'E02004634',
        '6YD' => 'E02004634',
        '6YE' => 'E02004634',
        '6YF' => 'E02004634',
        '6YG' => 'E02004634',
        '6YH' => 'E02004634',
        '6YJ' => 'E02004634',
        '6YL' => 'E02004634',
        '6YN' => 'E02004634',
        '6YP' => 'E02004634',
        '6YQ' => 'E02004634',
        '6YR' => 'E02004634',
        '6YS' => 'E02004634',
        '6YT' => 'E02004634',
        '6YU' => 'E02004634',
        '6YW' => 'E02004634',
        '6YX' => 'E02004634',
        '6YY' => 'E02004634',
        '6ZA' => 'E02004634',
        '6ZB' => 'E02004634',
        '9AB' => 'E02004634',
        '9AD' => 'E02004634',
        '9AE' => 'E02004634',
        '9AF' => 'E02004634',
        '9AG' => 'E02004634',
        '9AH' => 'E02004634',
        '9AJ' => 'E02004634',
        '9AL' => 'E02004634',
        '9AN' => 'E02004634',
        '9AQ' => 'E02004634',
        '9AR' => 'E02004634',
        '9AS' => 'E02004634',
        '9AT' => 'E02004634',
        '9AU' => 'E02004634',
        '9AW' => 'E02004634',
        '9AX' => 'E02004634',
        '9AY' => 'E02004634',
        '9AZ' => 'E02004634',
        '9BA' => 'E02004634',
        '9BB' => 'E02004634',
        '9BD' => 'E02004634',
        '9BE' => 'E02004634',
        '9BF' => 'E02004634',
        '9BG' => 'E02004634',
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