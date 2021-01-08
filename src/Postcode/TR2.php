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
final class TR2
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '4AA' => 'E02003912',
        '4AB' => 'E02003912',
        '4AD' => 'E02003912',
        '4AE' => 'E02003912',
        '4AF' => 'E02003912',
        '4AG' => 'E02003912',
        '4AH' => 'E02003912',
        '4AJ' => 'E02003912',
        '4AL' => 'E02003912',
        '4AN' => 'E02003912',
        '4AP' => 'E02003912',
        '4AQ' => 'E02003912',
        '4AR' => 'E02003912',
        '4AS' => 'E02003912',
        '4AT' => 'E02003912',
        '4AU' => 'E02003912',
        '4AW' => 'E02003912',
        '4AX' => 'E02003912',
        '4AY' => 'E02003912',
        '4AZ' => 'E02003912',
        '4BA' => 'E02003912',
        '4BB' => 'E02003912',
        '4BD' => 'E02003912',
        '4BE' => 'E02003912',
        '4BG' => 'E02003912',
        '4BH' => 'E02003912',
        '4BJ' => 'E02003912',
        '4BL' => 'E02003912',
        '4BN' => 'E02003912',
        '4BP' => 'E02003912',
        '4BQ' => 'E02003912',
        '4BS' => 'E02003912',
        '4BT' => 'E02003912',
        '4BU' => 'E02003905',
        '4BW' => 'E02003912',
        '4BX' => 'E02003905',
        '4BY' => 'E02003905',
        '4BZ' => 'E02003912',
        '4DA' => 'E02003912',
        '4DB' => 'E02003912',
        '4DD' => 'E02003912',
        '4DE' => 'E02003912',
        '4DF' => 'E02003912',
        '4DG' => 'E02003912',
        '4DH' => 'E02003905',
        '4DJ' => 'E02003905',
        '4DL' => 'E02003905',
        '4DN' => 'E02003905',
        '4DP' => 'E02003905',
        '4DQ' => 'E02003912',
        '4DR' => 'E02003905',
        '4DS' => 'E02003905',
        '4DT' => 'E02003905',
        '4DU' => 'E02003905',
        '4DW' => 'E02003905',
        '4DX' => 'E02003905',
        '4DY' => 'E02003905',
        '4DZ' => 'E02003905',
        '4EA' => 'E02003905',
        '4EB' => 'E02003905',
        '4ED' => 'E02003905',
        '4EE' => 'E02003905',
        '4EF' => 'E02003912',
        '4EG' => 'E02003905',
        '4EH' => 'E02003905',
        '4EJ' => 'E02003905',
        '4EL' => 'E02003905',
        '4EN' => 'E02003905',
        '4EP' => 'E02003905',
        '4EQ' => 'E02003905',
        '4ER' => 'E02003958',
        '4ES' => 'E02003958',
        '4ET' => 'E02003905',
        '4EU' => 'E02003958',
        '4EW' => 'E02003905',
        '4EX' => 'E02003958',
        '4EY' => 'E02003958',
        '4EZ' => 'E02003905',
        '4FA' => 'E02003964',
        '4FB' => 'E02003905',
        '4FD' => 'E02003905',
        '4FE' => 'E02003905',
        '4FF' => 'E02003912',
        '4FG' => 'E02003912',
        '4FH' => 'E02003912',
        '4FJ' => 'E02003912',
        '4FL' => 'E02003912',
        '4FN' => 'E02003912',
        '4FP' => 'E02003912',
        '4FQ' => 'E02003912',
        '4FR' => 'E02003905',
        '4FS' => 'E02003964',
        '4FT' => 'E02003905',
        '4GD' => 'E02003912',
        '4HA' => 'E02003905',
        '4HB' => 'E02003905',
        '4HD' => 'E02003905',
        '4HE' => 'E02003912',
        '4HF' => 'E02003912',
        '4HG' => 'E02003912',
        '4HH' => 'E02003912',
        '4HJ' => 'E02003912',
        '4HL' => 'E02003912',
        '4HN' => 'E02003912',
        '4HP' => 'E02003912',
        '4HQ' => 'E02003912',
        '4HR' => 'E02003912',
        '4HS' => 'E02003912',
        '4HT' => 'E02003912',
        '4HU' => 'E02003912',
        '4HW' => 'E02003912',
        '4HX' => 'E02003912',
        '4HY' => 'E02003912',
        '4HZ' => 'E02003912',
        '4JA' => 'E02003912',
        '4JB' => 'E02003912',
        '4JD' => 'E02003912',
        '4JE' => 'E02003912',
        '4JF' => 'E02003912',
        '4JG' => 'E02003912',
        '4JH' => 'E02003912',
        '4JJ' => 'E02003912',
        '4JL' => 'E02003912',
        '4JN' => 'E02003912',
        '4JP' => 'E02003912',
        '4JQ' => 'E02003905',
        '4JR' => 'E02003912',
        '4JS' => 'E02003912',
        '4JT' => 'E02003912',
        '4JU' => 'E02003912',
        '4JW' => 'E02003912',
        '4JX' => 'E02003912',
        '4JY' => 'E02003912',
        '4JZ' => 'E02003912',
        '4LA' => 'E02003912',
        '4LB' => 'E02003912',
        '4LD' => 'E02003912',
        '4LE' => 'E02003912',
        '4LF' => 'E02003912',
        '4LG' => 'E02003912',
        '4LH' => 'E02003912',
        '4LJ' => 'E02003912',
        '4LL' => 'E02003912',
        '4LN' => 'E02003912',
        '4LP' => 'E02003912',
        '4LQ' => 'E02003912',
        '4LR' => 'E02003912',
        '4LS' => 'E02003912',
        '4LT' => 'E02003912',
        '4LU' => 'E02003912',
        '4LW' => 'E02003912',
        '4LX' => 'E02003912',
        '4LY' => 'E02003912',
        '4LZ' => 'E02003912',
        '4NA' => 'E02003912',
        '4NB' => 'E02003912',
        '4ND' => 'E02003912',
        '4NE' => 'E02003912',
        '4NF' => 'E02003905',
        '4NG' => 'E02003905',
        '4NH' => 'E02003905',
        '4NJ' => 'E02003905',
        '4NL' => 'E02003905',
        '4NN' => 'E02003905',
        '4NP' => 'E02003953',
        '4NQ' => 'E02003905',
        '4NR' => 'E02003905',
        '4NS' => 'E02003905',
        '4NT' => 'E02003905',
        '4NU' => 'E02003905',
        '4NW' => 'E02003905',
        '4NX' => 'E02003905',
        '4NY' => 'E02003912',
        '4NZ' => 'E02003905',
        '4PA' => 'E02003905',
        '4PB' => 'E02003905',
        '4PD' => 'E02003905',
        '4PE' => 'E02003912',
        '4PF' => 'E02003964',
        '4PG' => 'E02003905',
        '4PH' => 'E02003905',
        '4PJ' => 'E02003905',
        '4PL' => 'E02003905',
        '4PN' => 'E02003905',
        '4PP' => 'E02003905',
        '4PQ' => 'E02003905',
        '4PR' => 'E02003905',
        '4PS' => 'E02003905',
        '4PT' => 'E02003905',
        '4PU' => 'E02003905',
        '4PW' => 'E02003905',
        '4PX' => 'E02003912',
        '4PY' => 'E02003912',
        '4PZ' => 'E02003964',
        '4QA' => 'E02003905',
        '4QB' => 'E02003905',
        '4QD' => 'E02003912',
        '4QE' => 'E02003912',
        '4QF' => 'E02003905',
        '4QG' => 'E02003905',
        '4QH' => 'E02003905',
        '4QJ' => 'E02003905',
        '4QL' => 'E02003905',
        '4QN' => 'E02003905',
        '4QP' => 'E02003964',
        '4QQ' => 'E02003905',
        '4QR' => 'E02003964',
        '4QS' => 'E02003964',
        '4QT' => 'E02003964',
        '4QU' => 'E02003964',
        '4QW' => 'E02003964',
        '4QX' => 'E02003964',
        '4QY' => 'E02003964',
        '4QZ' => 'E02003905',
        '4RA' => 'E02003964',
        '4RB' => 'E02003964',
        '4RD' => 'E02003964',
        '4RE' => 'E02003964',
        '4RF' => 'E02003964',
        '4RG' => 'E02003958',
        '4RH' => 'E02003964',
        '4RJ' => 'E02003964',
        '4RL' => 'E02003964',
        '4RN' => 'E02003964',
        '4RP' => 'E02003964',
        '4RQ' => 'E02003964',
        '4RR' => 'E02003964',
        '4RS' => 'E02003964',
        '4RT' => 'E02003964',
        '4RU' => 'E02003964',
        '4RW' => 'E02003912',
        '4RX' => 'E02003912',
        '4RY' => 'E02003964',
        '4RZ' => 'E02003905',
        '4SA' => 'E02003964',
        '4SB' => 'E02003964',
        '4SD' => 'E02003964',
        '4SE' => 'E02003964',
        '4SH' => 'E02003964',
        '4SJ' => 'E02003964',
        '4SL' => 'E02003964',
        '4SN' => 'E02003964',
        '4SP' => 'E02003964',
        '4SR' => 'E02003964',
        '4SS' => 'E02003964',
        '4ST' => 'E02003964',
        '4SW' => 'E02003964',
        '4SX' => 'E02003964',
        '4TA' => 'E02003905',
        '4TB' => 'E02003905',
        '4TD' => 'E02003905',
        '4TE' => 'E02003912',
        '4TF' => 'E02003912',
        '4TJ' => 'E02003912',
        '4TL' => 'E02003912',
        '4TN' => 'E02003912',
        '4TP' => 'E02003905',
        '4TR' => 'E02003912',
        '4TS' => 'E02003912',
        '4TT' => 'E02003905',
        '4TU' => 'E02003912',
        '4TW' => 'E02003905',
        '4TX' => 'E02003912',
        '4TY' => 'E02003905',
        '4TZ' => 'E02003905',
        '4UA' => 'E02003905',
        '4UD' => 'E02003905',
        '4WB' => 'E02003910',
        '4WD' => 'E02003910',
        '4WR' => 'E02003910',
        '4WS' => 'E02003910',
        '4WT' => 'E02003910',
        '4WU' => 'E02003910',
        '4WW' => 'E02003910',
        '4WX' => 'E02003910',
        '4WY' => 'E02003910',
        '4WZ' => 'E02003910',
        '4XR' => 'E02003910',
        '4XZ' => 'E02003910',
        '4YA' => 'E02003910',
        '4YB' => 'E02003912',
        '4YD' => 'E02003905',
        '4YE' => 'E02003905',
        '4YF' => 'E02003910',
        '4YG' => 'E02003910',
        '4ZN' => 'E02003910',
        '5AA' => 'E02003912',
        '5AB' => 'E02003912',
        '5AD' => 'E02003912',
        '5AE' => 'E02003912',
        '5AF' => 'E02003912',
        '5AG' => 'E02003912',
        '5AH' => 'E02003912',
        '5AJ' => 'E02003912',
        '5AL' => 'E02003912',
        '5AN' => 'E02003912',
        '5AP' => 'E02003912',
        '5AQ' => 'E02003912',
        '5AR' => 'E02003912',
        '5AS' => 'E02003912',
        '5AT' => 'E02003912',
        '5AU' => 'E02003912',
        '5AW' => 'E02003912',
        '5AX' => 'E02003912',
        '5AY' => 'E02003912',
        '5AZ' => 'E02003912',
        '5BA' => 'E02003912',
        '5BB' => 'E02003912',
        '5BD' => 'E02003912',
        '5BE' => 'E02003912',
        '5BG' => 'E02003912',
        '5BH' => 'E02003912',
        '5BJ' => 'E02003912',
        '5BL' => 'E02003912',
        '5BN' => 'E02003912',
        '5BP' => 'E02003912',
        '5BQ' => 'E02003912',
        '5BS' => 'E02003912',
        '5BT' => 'E02003912',
        '5BU' => 'E02003912',
        '5BW' => 'E02003912',
        '5BX' => 'E02003912',
        '5BY' => 'E02003912',
        '5BZ' => 'E02003912',
        '5DA' => 'E02003912',
        '5DB' => 'E02003912',
        '5DD' => 'E02003912',
        '5DE' => 'E02003912',
        '5DF' => 'E02003912',
        '5DG' => 'E02003912',
        '5DH' => 'E02003912',
        '5DJ' => 'E02003912',
        '5DL' => 'E02003912',
        '5DN' => 'E02003912',
        '5DP' => 'E02003912',
        '5DQ' => 'E02003912',
        '5DR' => 'E02003912',
        '5DS' => 'E02003912',
        '5DT' => 'E02003912',
        '5DU' => 'E02003912',
        '5DW' => 'E02003912',
        '5DX' => 'E02003912',
        '5DY' => 'E02003912',
        '5DZ' => 'E02003912',
        '5EA' => 'E02003912',
        '5EB' => 'E02003912',
        '5ED' => 'E02003912',
        '5EE' => 'E02003912',
        '5EF' => 'E02003912',
        '5EG' => 'E02003912',
        '5EH' => 'E02003912',
        '5EJ' => 'E02003912',
        '5EL' => 'E02003912',
        '5EN' => 'E02003912',
        '5EP' => 'E02003912',
        '5EQ' => 'E02003912',
        '5ER' => 'E02003912',
        '5ES' => 'E02003912',
        '5ET' => 'E02003912',
        '5EU' => 'E02003912',
        '5EW' => 'E02003912',
        '5EX' => 'E02003912',
        '5EY' => 'E02003912',
        '5EZ' => 'E02003912',
        '5FA' => 'E02003912',
        '5FB' => 'E02003912',
        '5GA' => 'E02003912',
        '5HA' => 'E02003912',
        '5HB' => 'E02003912',
        '5HD' => 'E02003912',
        '5HE' => 'E02003912',
        '5HF' => 'E02003912',
        '5HG' => 'E02003912',
        '5HH' => 'E02003912',
        '5HJ' => 'E02003912',
        '5HL' => 'E02003912',
        '5HN' => 'E02003912',
        '5HP' => 'E02003912',
        '5HQ' => 'E02003912',
        '5HR' => 'E02003912',
        '5HS' => 'E02003912',
        '5HT' => 'E02003912',
        '5HU' => 'E02003912',
        '5HW' => 'E02003912',
        '5HX' => 'E02003912',
        '5HY' => 'E02003912',
        '5HZ' => 'E02003912',
        '5JA' => 'E02003912',
        '5JB' => 'E02003912',
        '5JD' => 'E02003912',
        '5JE' => 'E02003912',
        '5JF' => 'E02003912',
        '5JG' => 'E02003912',
        '5JH' => 'E02003912',
        '5JJ' => 'E02003912',
        '5JL' => 'E02003912',
        '5JN' => 'E02003912',
        '5JP' => 'E02003912',
        '5JQ' => 'E02003912',
        '5JR' => 'E02003912',
        '5JS' => 'E02003912',
        '5JT' => 'E02003912',
        '5JU' => 'E02003912',
        '5JW' => 'E02003912',
        '5JX' => 'E02003912',
        '5JY' => 'E02003912',
        '5JZ' => 'E02003912',
        '5LA' => 'E02003912',
        '5LB' => 'E02003912',
        '5LD' => 'E02003912',
        '5LE' => 'E02003912',
        '5LF' => 'E02003912',
        '5LG' => 'E02003912',
        '5LH' => 'E02003912',
        '5LJ' => 'E02003912',
        '5LL' => 'E02003912',
        '5LN' => 'E02003912',
        '5LP' => 'E02003912',
        '5LR' => 'E02003912',
        '5LS' => 'E02003912',
        '5LU' => 'E02003912',
        '5LW' => 'E02003912',
        '5LX' => 'E02003912',
        '5LY' => 'E02003912',
        '5LZ' => 'E02003912',
        '5NA' => 'E02003912',
        '5NB' => 'E02003912',
        '5ND' => 'E02003912',
        '5NE' => 'E02003912',
        '5NF' => 'E02003912',
        '5NG' => 'E02003912',
        '5NH' => 'E02003912',
        '5NJ' => 'E02003912',
        '5NL' => 'E02003912',
        '5NN' => 'E02003912',
        '5NP' => 'E02003912',
        '5NQ' => 'E02003912',
        '5NR' => 'E02003912',
        '5NS' => 'E02003912',
        '5NT' => 'E02003912',
        '5NU' => 'E02003912',
        '5NW' => 'E02003912',
        '5NX' => 'E02003912',
        '5NY' => 'E02003912',
        '5NZ' => 'E02003912',
        '5PA' => 'E02003912',
        '5PB' => 'E02003912',
        '5PD' => 'E02003912',
        '5PE' => 'E02003912',
        '5PF' => 'E02003912',
        '5PG' => 'E02003912',
        '5PH' => 'E02003912',
        '5PJ' => 'E02003912',
        '5PL' => 'E02003912',
        '5PN' => 'E02003912',
        '5PP' => 'E02003912',
        '5PQ' => 'E02003912',
        '5PR' => 'E02003912',
        '5PS' => 'E02003912',
        '5PT' => 'E02003912',
        '5PU' => 'E02003912',
        '5PW' => 'E02003912',
        '5PX' => 'E02003912',
        '5PY' => 'E02003912',
        '5PZ' => 'E02003912',
        '5QA' => 'E02003912',
        '5QB' => 'E02003912',
        '5QD' => 'E02003912',
        '5QE' => 'E02003912',
        '5QF' => 'E02003912',
        '5QG' => 'E02003912',
        '5QH' => 'E02003912',
        '5QJ' => 'E02003912',
        '5QL' => 'E02003912',
        '5QN' => 'E02003912',
        '5QP' => 'E02003912',
        '5QQ' => 'E02003912',
        '5QR' => 'E02003912',
        '5QS' => 'E02003912',
        '5QT' => 'E02003912',
        '5QU' => 'E02003912',
        '5QW' => 'E02003912',
        '5QX' => 'E02003912',
        '5QY' => 'E02003912',
        '5QZ' => 'E02003912',
        '5RA' => 'E02003912',
        '5RB' => 'E02003912',
        '5RD' => 'E02003912',
        '5RE' => 'E02003912',
        '5RF' => 'E02003912',
        '5RG' => 'E02003912',
        '5RH' => 'E02003912',
        '5RJ' => 'E02003912',
        '5RL' => 'E02003912',
        '5RN' => 'E02003912',
        '5RP' => 'E02003912',
        '5RQ' => 'E02003912',
        '5RR' => 'E02003912',
        '5RS' => 'E02003912',
        '5RT' => 'E02003912',
        '5RU' => 'E02003912',
        '5RW' => 'E02003912',
        '5RX' => 'E02003912',
        '5RY' => 'E02003912',
        '5RZ' => 'E02003912',
        '5SA' => 'E02003912',
        '5SB' => 'E02003912',
        '5SD' => 'E02003912',
        '5SE' => 'E02003912',
        '5SF' => 'E02003912',
        '5SG' => 'E02003912',
        '5SH' => 'E02003964',
        '5SJ' => 'E02003964',
        '5SL' => 'E02003964',
        '5SN' => 'E02003964',
        '5SP' => 'E02003964',
        '5SQ' => 'E02003912',
        '5SR' => 'E02003912',
        '5SS' => 'E02003912',
        '5ST' => 'E02003912',
        '5SU' => 'E02003912',
        '5SW' => 'E02003964',
        '5SX' => 'E02003912',
        '5SY' => 'E02003912',
        '5SZ' => 'E02003912',
        '5TA' => 'E02003912',
        '5TB' => 'E02003912',
        '5TD' => 'E02003912',
        '5TE' => 'E02003912',
        '5TF' => 'E02003912',
        '5TG' => 'E02003912',
        '5TH' => 'E02003912',
        '5TJ' => 'E02003912',
        '5TL' => 'E02003912',
        '5TN' => 'E02003912',
        '5TP' => 'E02003912',
        '5TQ' => 'E02003912',
        '5TR' => 'E02003912',
        '5TS' => 'E02003912',
        '5TT' => 'E02003912',
        '5TU' => 'E02003912',
        '5TW' => 'E02003912',
        '5TY' => 'E02003912',
        '5TZ' => 'E02003912',
        '5UA' => 'E02003912',
        '5UB' => 'E02003912',
        '5UD' => 'E02003912',
        '5UE' => 'E02003912',
        '5UF' => 'E02003912',
        '5UH' => 'E02003912',
        '5UJ' => 'E02003912',
        '5UL' => 'E02003912',
        '5UN' => 'E02003912',
        '5UP' => 'E02003912',
        '5UQ' => 'E02003912',
        '5UR' => 'E02003912',
        '5UT' => 'E02003912',
        '5UU' => 'E02003912',
        '5UW' => 'E02003912',
        '5WG' => 'E02003910',
        '5WW' => 'E02003910',
        '5WX' => 'E02003910',
        '5WY' => 'E02003910',
        '5WZ' => 'E02003910',
        '5XA' => 'E02003912',
        '5XB' => 'E02003912',
        '5XY' => 'E02003912',
        '5YA' => 'E02003912',
        '5YB' => 'E02003912',
        '5YD' => 'E02003910',
        '5YE' => 'E02003910',
        '5YF' => 'E02003910',
        '5YG' => 'E02003910',
        '5YH' => 'E02003912',
        '5YJ' => 'E02003910',
        '5YL' => 'E02003910',
        '5YN' => 'E02003910',
        '5YP' => 'E02003912',
        '5YQ' => 'E02003910',
        '5YR' => 'E02003910',
        '5YS' => 'E02003910',
        '5YT' => 'E02003910',
        '5YU' => 'E02003910',
        '5ZX' => 'E02003910',
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