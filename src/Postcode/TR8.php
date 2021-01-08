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
final class TR8
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '4AA' => 'E02003952',
        '4AB' => 'E02003952',
        '4AD' => 'E02003952',
        '4AE' => 'E02003952',
        '4AF' => 'E02003953',
        '4AG' => 'E02003953',
        '4AH' => 'E02003953',
        '4AJ' => 'E02003953',
        '4AL' => 'E02003953',
        '4AN' => 'E02003952',
        '4AP' => 'E02003952',
        '4AQ' => 'E02003953',
        '4AR' => 'E02003952',
        '4AS' => 'E02003952',
        '4AT' => 'E02003952',
        '4AU' => 'E02003953',
        '4AW' => 'E02003952',
        '4AX' => 'E02003952',
        '4AY' => 'E02003952',
        '4AZ' => 'E02003953',
        '4BA' => 'E02003953',
        '4BB' => 'E02003953',
        '4BD' => 'E02003953',
        '4BE' => 'E02003953',
        '4BG' => 'E02003953',
        '4BH' => 'E02003953',
        '4BJ' => 'E02003953',
        '4BL' => 'E02003953',
        '4BN' => 'E02003953',
        '4BP' => 'E02003953',
        '4BQ' => 'E02003953',
        '4BS' => 'E02003953',
        '4BT' => 'E02003953',
        '4BU' => 'E02003953',
        '4BW' => 'E02003953',
        '4BX' => 'E02003953',
        '4BY' => 'E02003953',
        '4BZ' => 'E02003953',
        '4DA' => 'E02003953',
        '4DB' => 'E02003953',
        '4DD' => 'E02003953',
        '4DE' => 'E02003953',
        '4DF' => 'E02003953',
        '4DG' => 'E02003953',
        '4DH' => 'E02003953',
        '4DJ' => 'E02003953',
        '4DL' => 'E02003953',
        '4DN' => 'E02003953',
        '4DP' => 'E02003953',
        '4DQ' => 'E02003953',
        '4DR' => 'E02003953',
        '4DS' => 'E02003952',
        '4DT' => 'E02003953',
        '4DU' => 'E02003952',
        '4DW' => 'E02003953',
        '4DX' => 'E02003952',
        '4DY' => 'E02003953',
        '4DZ' => 'E02003953',
        '4EA' => 'E02003953',
        '4EB' => 'E02003953',
        '4ED' => 'E02003953',
        '4EE' => 'E02003953',
        '4EF' => 'E02003953',
        '4EG' => 'E02003953',
        '4EH' => 'E02003953',
        '4EJ' => 'E02003953',
        '4EL' => 'E02003953',
        '4EN' => 'E02003953',
        '4EP' => 'E02003953',
        '4EQ' => 'E02003953',
        '4ER' => 'E02003953',
        '4ES' => 'E02003953',
        '4ET' => 'E02003953',
        '4EU' => 'E02003953',
        '4EW' => 'E02003953',
        '4EX' => 'E02003953',
        '4EY' => 'E02003953',
        '4EZ' => 'E02003953',
        '4FA' => 'E02003952',
        '4FB' => 'E02003952',
        '4FD' => 'E02003952',
        '4FE' => 'E02003952',
        '4FF' => 'E02003952',
        '4FG' => 'E02003952',
        '4FH' => 'E02003952',
        '4FJ' => 'E02003952',
        '4FL' => 'E02003952',
        '4FN' => 'E02003952',
        '4FP' => 'E02003952',
        '4FQ' => 'E02003952',
        '4FR' => 'E02003952',
        '4FS' => 'E02003952',
        '4FT' => 'E02003952',
        '4FU' => 'E02003952',
        '4FW' => 'E02003952',
        '4FX' => 'E02003952',
        '4FY' => 'E02003952',
        '4FZ' => 'E02003952',
        '4GA' => 'E02003952',
        '4GB' => 'E02003952',
        '4GD' => 'E02003952',
        '4GE' => 'E02003952',
        '4GF' => 'E02003952',
        '4GG' => 'E02003952',
        '4GH' => 'E02003952',
        '4GJ' => 'E02003952',
        '4GL' => 'E02003952',
        '4GN' => 'E02003952',
        '4GP' => 'E02003952',
        '4GQ' => 'E02003952',
        '4GR' => 'E02003952',
        '4GS' => 'E02003952',
        '4GT' => 'E02003952',
        '4GU' => 'E02003952',
        '4GW' => 'E02003952',
        '4GX' => 'E02003952',
        '4GY' => 'E02003952',
        '4GZ' => 'E02003952',
        '4HA' => 'E02003953',
        '4HB' => 'E02003953',
        '4HD' => 'E02003953',
        '4HE' => 'E02003953',
        '4HF' => 'E02003953',
        '4HG' => 'E02003953',
        '4HH' => 'E02003953',
        '4HJ' => 'E02003953',
        '4HL' => 'E02003952',
        '4HN' => 'E02003952',
        '4HP' => 'E02003953',
        '4HQ' => 'E02003938',
        '4HR' => 'E02003952',
        '4HS' => 'E02003952',
        '4HT' => 'E02003953',
        '4HU' => 'E02003953',
        '4HW' => 'E02003952',
        '4HX' => 'E02003953',
        '4HY' => 'E02003953',
        '4HZ' => 'E02003953',
        '4JA' => 'E02003953',
        '4JB' => 'E02003953',
        '4JD' => 'E02003953',
        '4JE' => 'E02003953',
        '4JF' => 'E02003953',
        '4JG' => 'E02003953',
        '4JH' => 'E02003952',
        '4JJ' => 'E02003952',
        '4JL' => 'E02003952',
        '4JN' => 'E02003952',
        '4JP' => 'E02003952',
        '4JQ' => 'E02003953',
        '4JR' => 'E02003952',
        '4JS' => 'E02003952',
        '4JT' => 'E02003952',
        '4JU' => 'E02003952',
        '4JW' => 'E02003952',
        '4JX' => 'E02003952',
        '4JY' => 'E02003952',
        '4JZ' => 'E02003953',
        '4LA' => 'E02003952',
        '4LB' => 'E02003952',
        '4LD' => 'E02003952',
        '4LE' => 'E02003952',
        '4LF' => 'E02003952',
        '4LG' => 'E02003952',
        '4LH' => 'E02003952',
        '4LJ' => 'E02003952',
        '4LL' => 'E02003952',
        '4LN' => 'E02003952',
        '4LP' => 'E02003953',
        '4LQ' => 'E02003952',
        '4LR' => 'E02003953',
        '4LS' => 'E02003953',
        '4LT' => 'E02003953',
        '4LU' => 'E02003953',
        '4LW' => 'E02003952',
        '4LX' => 'E02003953',
        '4LY' => 'E02003952',
        '4LZ' => 'E02003952',
        '4NA' => 'E02003952',
        '4NB' => 'E02003952',
        '4ND' => 'E02003952',
        '4NE' => 'E02003953',
        '4NF' => 'E02003952',
        '4NG' => 'E02003952',
        '4NH' => 'E02003952',
        '4NJ' => 'E02003952',
        '4NL' => 'E02003952',
        '4NN' => 'E02003952',
        '4NP' => 'E02003955',
        '4NQ' => 'E02003952',
        '4NR' => 'E02003955',
        '4NS' => 'E02003955',
        '4NT' => 'E02003955',
        '4NU' => 'E02003955',
        '4NW' => 'E02003955',
        '4NX' => 'E02003955',
        '4NY' => 'E02003952',
        '4NZ' => 'E02003952',
        '4PA' => 'E02003952',
        '4PB' => 'E02003952',
        '4PD' => 'E02003952',
        '4PE' => 'E02003905',
        '4PF' => 'E02003905',
        '4PG' => 'E02003905',
        '4PH' => 'E02003905',
        '4PJ' => 'E02003905',
        '4PL' => 'E02003905',
        '4PN' => 'E02003905',
        '4PP' => 'E02003953',
        '4PQ' => 'E02003905',
        '4PR' => 'E02003905',
        '4PS' => 'E02003905',
        '4PT' => 'E02003905',
        '4PU' => 'E02003952',
        '4PW' => 'E02003905',
        '4PX' => 'E02003952',
        '4PY' => 'E02003955',
        '4PZ' => 'E02003952',
        '4QA' => 'E02003952',
        '4QB' => 'E02003952',
        '4QD' => 'E02003952',
        '4QE' => 'E02003905',
        '4QF' => 'E02003952',
        '4QG' => 'E02003952',
        '4QH' => 'E02003952',
        '4QJ' => 'E02003953',
        '4QL' => 'E02003953',
        '4QN' => 'E02003952',
        '4QP' => 'E02003952',
        '4QQ' => 'E02003952',
        '4QR' => 'E02003952',
        '4QS' => 'E02003952',
        '4QT' => 'E02003952',
        '4QU' => 'E02003952',
        '4QW' => 'E02003952',
        '4QX' => 'E02003952',
        '4QY' => 'E02003953',
        '4QZ' => 'E02003952',
        '4RA' => 'E02003952',
        '4RB' => 'E02003952',
        '4RD' => 'E02003952',
        '4RE' => 'E02003952',
        '4RF' => 'E02003952',
        '4RG' => 'E02003952',
        '4RH' => 'E02003905',
        '4RJ' => 'E02003953',
        '4RL' => 'E02003952',
        '4RN' => 'E02003952',
        '4RP' => 'E02003952',
        '4RQ' => 'E02003953',
        '4RS' => 'E02003952',
        '4RT' => 'E02003952',
        '4RU' => 'E02003952',
        '4RW' => 'E02003952',
        '4RX' => 'E02003953',
        '4RY' => 'E02003952',
        '4RZ' => 'E02003952',
        '4SA' => 'E02003952',
        '4SD' => 'E02003952',
        '4SQ' => 'E02003952',
        '4TP' => 'E02003952',
        '4TQ' => 'E02003952',
        '4TS' => 'E02003938',
        '4TZ' => 'E02003952',
        '4WA' => 'E02003953',
        '4WB' => 'E02003952',
        '4WD' => 'E02003952',
        '4WE' => 'E02003952',
        '4WF' => 'E02003952',
        '4WG' => 'E02003952',
        '4WH' => 'E02003952',
        '4WY' => 'E02003954',
        '4WZ' => 'E02003954',
        '4XN' => 'E02003954',
        '4XZ' => 'E02003954',
        '4YA' => 'E02003952',
        '4YB' => 'E02003952',
        '4YD' => 'E02003952',
        '4YE' => 'E02003952',
        '4YF' => 'E02003952',
        '4YG' => 'E02003952',
        '4YH' => 'E02003952',
        '4YJ' => 'E02003954',
        '4YL' => 'E02003952',
        '4YN' => 'E02003954',
        '4YP' => 'E02003954',
        '4YQ' => 'E02003952',
        '4YR' => 'E02003954',
        '4YS' => 'E02003954',
        '4YZ' => 'E02003952',
        '5AA' => 'E02003905',
        '5AB' => 'E02003953',
        '5AD' => 'E02003953',
        '5AE' => 'E02003953',
        '5AF' => 'E02003953',
        '5AG' => 'E02003953',
        '5AH' => 'E02003953',
        '5AJ' => 'E02003953',
        '5AL' => 'E02003953',
        '5AN' => 'E02003905',
        '5AP' => 'E02003905',
        '5AQ' => 'E02003953',
        '5AR' => 'E02003905',
        '5AS' => 'E02003905',
        '5AT' => 'E02003905',
        '5AU' => 'E02003905',
        '5AW' => 'E02003905',
        '5AX' => 'E02003905',
        '5AY' => 'E02003905',
        '5AZ' => 'E02003905',
        '5BA' => 'E02003905',
        '5BB' => 'E02003905',
        '5BD' => 'E02003953',
        '5BE' => 'E02003953',
        '5BG' => 'E02003953',
        '5BH' => 'E02003953',
        '5BJ' => 'E02003953',
        '5BL' => 'E02003953',
        '5BN' => 'E02003953',
        '5BP' => 'E02003953',
        '5BQ' => 'E02003953',
        '5BS' => 'E02003953',
        '5BT' => 'E02003953',
        '5BU' => 'E02003953',
        '5BW' => 'E02003953',
        '5BX' => 'E02003953',
        '5BY' => 'E02003953',
        '5BZ' => 'E02003953',
        '5DA' => 'E02003905',
        '5DB' => 'E02003905',
        '5DD' => 'E02003905',
        '5DE' => 'E02003953',
        '5DF' => 'E02003953',
        '5DG' => 'E02003953',
        '5DH' => 'E02003953',
        '5DJ' => 'E02003953',
        '5DL' => 'E02003953',
        '5DN' => 'E02003953',
        '5DP' => 'E02003953',
        '5DQ' => 'E02003953',
        '5DR' => 'E02003953',
        '5DS' => 'E02003953',
        '5DT' => 'E02003953',
        '5DU' => 'E02003953',
        '5DW' => 'E02003953',
        '5DX' => 'E02003953',
        '5DY' => 'E02003953',
        '5DZ' => 'E02003953',
        '5EA' => 'E02003953',
        '5EB' => 'E02003953',
        '5ED' => 'E02003953',
        '5EE' => 'E02003953',
        '5EF' => 'E02003953',
        '5EG' => 'E02003953',
        '5EH' => 'E02003905',
        '5EJ' => 'E02003905',
        '5EL' => 'E02003954',
        '5EN' => 'E02003954',
        '5EP' => 'E02003954',
        '5EQ' => 'E02003905',
        '5ER' => 'E02003954',
        '5ES' => 'E02003954',
        '5ET' => 'E02003905',
        '5EU' => 'E02003905',
        '5EW' => 'E02003954',
        '5EX' => 'E02003905',
        '5EY' => 'E02003905',
        '5EZ' => 'E02003905',
        '5FA' => 'E02003905',
        '5FB' => 'E02003905',
        '5FD' => 'E02003905',
        '5FE' => 'E02003905',
        '5FF' => 'E02003905',
        '5FG' => 'E02003905',
        '5FJ' => 'E02003953',
        '5FL' => 'E02003905',
        '5FN' => 'E02003906',
        '5FP' => 'E02003905',
        '5FQ' => 'E02003905',
        '5FR' => 'E02003954',
        '5FS' => 'E02003954',
        '5FW' => 'E02003905',
        '5FX' => 'E02003953',
        '5FY' => 'E02003953',
        '5GS' => 'E02003905',
        '5HA' => 'E02003905',
        '5HB' => 'E02003905',
        '5HD' => 'E02003905',
        '5HE' => 'E02003905',
        '5HF' => 'E02003905',
        '5HG' => 'E02003905',
        '5HH' => 'E02003905',
        '5HJ' => 'E02003905',
        '5HL' => 'E02003905',
        '5HN' => 'E02003905',
        '5HP' => 'E02003905',
        '5HQ' => 'E02003905',
        '5HR' => 'E02003905',
        '5HS' => 'E02003905',
        '5HT' => 'E02003905',
        '5HU' => 'E02003905',
        '5HW' => 'E02003905',
        '5HX' => 'E02003905',
        '5HY' => 'E02003905',
        '5HZ' => 'E02003905',
        '5JA' => 'E02003905',
        '5JB' => 'E02003905',
        '5JD' => 'E02003905',
        '5JE' => 'E02003905',
        '5JF' => 'E02003905',
        '5JG' => 'E02003905',
        '5JH' => 'E02003905',
        '5JJ' => 'E02003905',
        '5JL' => 'E02003905',
        '5JN' => 'E02003905',
        '5JP' => 'E02003905',
        '5JQ' => 'E02003905',
        '5JR' => 'E02003905',
        '5JS' => 'E02003905',
        '5JT' => 'E02003905',
        '5JU' => 'E02003905',
        '5JW' => 'E02003905',
        '5JX' => 'E02003905',
        '5JY' => 'E02003905',
        '5JZ' => 'E02003905',
        '5LA' => 'E02003905',
        '5LB' => 'E02003905',
        '5LD' => 'E02003905',
        '5LE' => 'E02003905',
        '5LF' => 'E02003905',
        '5LG' => 'E02003905',
        '5LH' => 'E02003905',
        '5LJ' => 'E02003905',
        '5LL' => 'E02003905',
        '5LN' => 'E02003905',
        '5LP' => 'E02003905',
        '5LQ' => 'E02003905',
        '5LR' => 'E02003905',
        '5LS' => 'E02003905',
        '5LT' => 'E02003905',
        '5LU' => 'E02003905',
        '5LW' => 'E02003905',
        '5LX' => 'E02003905',
        '5LY' => 'E02003905',
        '5LZ' => 'E02003905',
        '5NA' => 'E02003905',
        '5NB' => 'E02003905',
        '5ND' => 'E02003905',
        '5NE' => 'E02003905',
        '5NF' => 'E02003905',
        '5NG' => 'E02003905',
        '5NH' => 'E02003905',
        '5NJ' => 'E02003905',
        '5NL' => 'E02003905',
        '5NN' => 'E02003905',
        '5NP' => 'E02003905',
        '5NQ' => 'E02003905',
        '5NR' => 'E02003905',
        '5NS' => 'E02003905',
        '5NT' => 'E02003905',
        '5NU' => 'E02003905',
        '5NW' => 'E02003905',
        '5NX' => 'E02003905',
        '5NY' => 'E02003905',
        '5NZ' => 'E02003905',
        '5PA' => 'E02003905',
        '5PB' => 'E02003905',
        '5PD' => 'E02003954',
        '5PE' => 'E02003905',
        '5PF' => 'E02003906',
        '5PG' => 'E02003905',
        '5PH' => 'E02003905',
        '5PJ' => 'E02003905',
        '5PL' => 'E02003905',
        '5PN' => 'E02003905',
        '5PP' => 'E02003905',
        '5PQ' => 'E02003905',
        '5PR' => 'E02003905',
        '5PS' => 'E02003905',
        '5PT' => 'E02003905',
        '5PU' => 'E02003905',
        '5PW' => 'E02003905',
        '5PX' => 'E02003905',
        '5PY' => 'E02003905',
        '5PZ' => 'E02003906',
        '5QA' => 'E02003905',
        '5QB' => 'E02003905',
        '5QD' => 'E02003905',
        '5QE' => 'E02003905',
        '5QF' => 'E02003906',
        '5QG' => 'E02003906',
        '5QH' => 'E02003906',
        '5QJ' => 'E02003906',
        '5QL' => 'E02003906',
        '5QN' => 'E02003906',
        '5QP' => 'E02003905',
        '5QQ' => 'E02003906',
        '5QR' => 'E02003905',
        '5QS' => 'E02003954',
        '5QT' => 'E02003905',
        '5QU' => 'E02003905',
        '5QW' => 'E02003906',
        '5QX' => 'E02003905',
        '5RA' => 'E02003954',
        '5RB' => 'E02003954',
        '5RD' => 'E02003954',
        '5RE' => 'E02003954',
        '5RF' => 'E02003954',
        '5RG' => 'E02003954',
        '5RH' => 'E02003954',
        '5RJ' => 'E02003954',
        '5RL' => 'E02003954',
        '5RN' => 'E02003954',
        '5RP' => 'E02003954',
        '5RQ' => 'E02003954',
        '5RR' => 'E02003954',
        '5RS' => 'E02003954',
        '5RT' => 'E02003954',
        '5RU' => 'E02003954',
        '5RW' => 'E02003954',
        '5RX' => 'E02003954',
        '5RY' => 'E02003954',
        '5RZ' => 'E02003954',
        '5SA' => 'E02003954',
        '5SB' => 'E02003954',
        '5SD' => 'E02003954',
        '5SE' => 'E02003954',
        '5SF' => 'E02003954',
        '5SG' => 'E02003954',
        '5SH' => 'E02003905',
        '5SJ' => 'E02003905',
        '5SL' => 'E02003905',
        '5SN' => 'E02003954',
        '5SP' => 'E02003905',
        '5SQ' => 'E02003954',
        '5SR' => 'E02003954',
        '5TA' => 'E02003905',
        '5TG' => 'E02003954',
        '5TR' => 'E02003954',
        '5TW' => 'E02003953',
        '5UA' => 'E02003953',
        '5UE' => 'E02003953',
        '5WA' => 'E02003954',
        '5WG' => 'E02003954',
        '5WU' => 'E02003954',
        '5WW' => 'E02003954',
        '5WX' => 'E02003954',
        '5WY' => 'E02003954',
        '5WZ' => 'E02003954',
        '5XN' => 'E02003954',
        '5YA' => 'E02003953',
        '5YB' => 'E02003953',
        '5YD' => 'E02003953',
        '5YE' => 'E02003953',
        '5YF' => 'E02003905',
        '5YG' => 'E02003953',
        '5YH' => 'E02003954',
        '5YJ' => 'E02003905',
        '5YL' => 'E02003905',
        '5YN' => 'E02003905',
        '5YP' => 'E02003905',
        '5YQ' => 'E02003905',
        '5YR' => 'E02003953',
        '5YS' => 'E02003954',
        '5YT' => 'E02003905',
        '5YU' => 'E02003954',
        '5YW' => 'E02003905',
        '5YX' => 'E02003954',
        '5YY' => 'E02003954',
        '5YZ' => 'E02003954',
        '5ZA' => 'E02003954',
        '5ZN' => 'E02003954',
        '5ZQ' => 'E02003954',
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
