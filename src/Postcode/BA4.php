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
final class BA4
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '4AA' => 'E02006059',
        '4AB' => 'E02006059',
        '4AD' => 'E02006059',
        '4AE' => 'E02006059',
        '4AF' => 'E02006059',
        '4AG' => 'E02006059',
        '4AH' => 'E02006056',
        '4AJ' => 'E02006052',
        '4AL' => 'E02006055',
        '4AN' => 'E02006052',
        '4AP' => 'E02006059',
        '4AQ' => 'E02006059',
        '4AR' => 'E02006055',
        '4AS' => 'E02006055',
        '4AT' => 'E02006055',
        '4AU' => 'E02006059',
        '4AW' => 'E02006055',
        '4AX' => 'E02006059',
        '4AY' => 'E02006059',
        '4AZ' => 'E02006059',
        '4BA' => 'E02006059',
        '4BB' => 'E02006059',
        '4BD' => 'E02006059',
        '4BE' => 'E02006059',
        '4BG' => 'E02006059',
        '4BH' => 'E02006059',
        '4BJ' => 'E02006059',
        '4BL' => 'E02006059',
        '4BN' => 'E02006059',
        '4BP' => 'E02006059',
        '4BQ' => 'E02006059',
        '4BR' => 'E02006059',
        '4BS' => 'E02006059',
        '4BT' => 'E02006059',
        '4BU' => 'E02006055',
        '4BW' => 'E02006055',
        '4BX' => 'E02006055',
        '4BY' => 'E02006059',
        '4BZ' => 'E02006055',
        '4DA' => 'E02006055',
        '4DB' => 'E02006059',
        '4DD' => 'E02006059',
        '4DE' => 'E02006055',
        '4DF' => 'E02006059',
        '4DG' => 'E02006059',
        '4DH' => 'E02006059',
        '4DJ' => 'E02006055',
        '4DL' => 'E02006052',
        '4DN' => 'E02006055',
        '4DP' => 'E02006055',
        '4DQ' => 'E02006059',
        '4DR' => 'E02006059',
        '4DS' => 'E02006059',
        '4DT' => 'E02006059',
        '4DU' => 'E02006059',
        '4DW' => 'E02006055',
        '4DX' => 'E02006059',
        '4DY' => 'E02006059',
        '4DZ' => 'E02006059',
        '4EA' => 'E02006059',
        '4EB' => 'E02006059',
        '4ED' => 'E02006059',
        '4EE' => 'E02006059',
        '4EF' => 'E02006055',
        '4EG' => 'E02006055',
        '4EH' => 'E02006059',
        '4EJ' => 'E02006055',
        '4EL' => 'E02006059',
        '4EN' => 'E02006059',
        '4EP' => 'E02006059',
        '4EQ' => 'E02006056',
        '4ER' => 'E02006059',
        '4ES' => 'E02006059',
        '4ET' => 'E02006059',
        '4EU' => 'E02006059',
        '4EW' => 'E02006059',
        '4EX' => 'E02006055',
        '4EY' => 'E02006055',
        '4EZ' => 'E02006059',
        '4FA' => 'E02006059',
        '4FB' => 'E02006055',
        '4FD' => 'E02006055',
        '4FE' => 'E02006055',
        '4FF' => 'E02006059',
        '4FG' => 'E02006056',
        '4FH' => 'E02006052',
        '4FJ' => 'E02006059',
        '4FL' => 'E02006059',
        '4FN' => 'E02006056',
        '4FP' => 'E02006055',
        '4FQ' => 'E02006055',
        '4FR' => 'E02006055',
        '4FS' => 'E02006055',
        '4FT' => 'E02006055',
        '4FU' => 'E02006052',
        '4FW' => 'E02006055',
        '4FX' => 'E02006056',
        '4FY' => 'E02006059',
        '4FZ' => 'E02006056',
        '4GA' => 'E02006056',
        '4GB' => 'E02006059',
        '4GD' => 'E02006056',
        '4GE' => 'E02006055',
        '4HA' => 'E02006059',
        '4HB' => 'E02006059',
        '4HD' => 'E02006059',
        '4HE' => 'E02006059',
        '4HF' => 'E02006055',
        '4HG' => 'E02006055',
        '4HH' => 'E02006055',
        '4HJ' => 'E02006059',
        '4HL' => 'E02006059',
        '4HN' => 'E02006059',
        '4HP' => 'E02006059',
        '4HQ' => 'E02006059',
        '4HR' => 'E02006059',
        '4HS' => 'E02006059',
        '4HT' => 'E02006055',
        '4HU' => 'E02006055',
        '4HW' => 'E02006059',
        '4HX' => 'E02006055',
        '4HY' => 'E02006055',
        '4HZ' => 'E02006055',
        '4JA' => 'E02006059',
        '4JB' => 'E02006059',
        '4JD' => 'E02006052',
        '4JE' => 'E02006052',
        '4JF' => 'E02006052',
        '4JG' => 'E02006052',
        '4JH' => 'E02006052',
        '4JJ' => 'E02006052',
        '4JL' => 'E02006052',
        '4JN' => 'E02006052',
        '4JP' => 'E02006052',
        '4JQ' => 'E02006059',
        '4JR' => 'E02006052',
        '4JS' => 'E02006052',
        '4JT' => 'E02006052',
        '4JU' => 'E02006056',
        '4JW' => 'E02006052',
        '4JX' => 'E02006052',
        '4JZ' => 'E02006056',
        '4LA' => 'E02006056',
        '4LB' => 'E02006056',
        '4LD' => 'E02006056',
        '4LE' => 'E02006056',
        '4LF' => 'E02006056',
        '4LG' => 'E02006056',
        '4LH' => 'E02006056',
        '4LJ' => 'E02006056',
        '4LL' => 'E02006056',
        '4LN' => 'E02006055',
        '4LP' => 'E02006055',
        '4LQ' => 'E02006056',
        '4LR' => 'E02006055',
        '4LS' => 'E02006055',
        '4LT' => 'E02006055',
        '4LU' => 'E02006055',
        '4LW' => 'E02006055',
        '4LX' => 'E02006055',
        '4LY' => 'E02006055',
        '4LZ' => 'E02006055',
        '4NA' => 'E02006055',
        '4NB' => 'E02006059',
        '4ND' => 'E02006056',
        '4NE' => 'E02006055',
        '4NF' => 'E02006056',
        '4NG' => 'E02006056',
        '4NH' => 'E02006055',
        '4NJ' => 'E02006056',
        '4NL' => 'E02006056',
        '4NN' => 'E02006056',
        '4NR' => 'E02006059',
        '4NS' => 'E02006059',
        '4NT' => 'E02006059',
        '4NU' => 'E02006059',
        '4NX' => 'E02006059',
        '4NY' => 'E02006059',
        '4PA' => 'E02006059',
        '4PB' => 'E02006059',
        '4PD' => 'E02006059',
        '4PE' => 'E02006055',
        '4PF' => 'E02006059',
        '4PG' => 'E02006055',
        '4PH' => 'E02006055',
        '4PJ' => 'E02006056',
        '4PL' => 'E02006056',
        '4PN' => 'E02006055',
        '4PP' => 'E02006055',
        '4PQ' => 'E02006055',
        '4PR' => 'E02006055',
        '4PS' => 'E02006055',
        '4PT' => 'E02006056',
        '4PU' => 'E02006056',
        '4PW' => 'E02006055',
        '4PX' => 'E02006056',
        '4PY' => 'E02006056',
        '4PZ' => 'E02006056',
        '4QA' => 'E02006056',
        '4QB' => 'E02006056',
        '4QD' => 'E02006056',
        '4QE' => 'E02006056',
        '4QF' => 'E02006056',
        '4QG' => 'E02006056',
        '4QH' => 'E02006056',
        '4QJ' => 'E02006056',
        '4QL' => 'E02006056',
        '4QN' => 'E02006056',
        '4QP' => 'E02006056',
        '4QQ' => 'E02006056',
        '4QR' => 'E02006056',
        '4QS' => 'E02006056',
        '4QT' => 'E02006056',
        '4QU' => 'E02006056',
        '4QW' => 'E02006056',
        '4QX' => 'E02006056',
        '4QY' => 'E02006056',
        '4QZ' => 'E02006056',
        '4RA' => 'E02006056',
        '4RB' => 'E02006056',
        '4RD' => 'E02006056',
        '4RE' => 'E02006056',
        '4RF' => 'E02006056',
        '4RG' => 'E02006056',
        '4RH' => 'E02006056',
        '4RN' => 'E02006056',
        '4RP' => 'E02006056',
        '4RQ' => 'E02006056',
        '4RT' => 'E02006055',
        '4RW' => 'E02006056',
        '4RX' => 'E02006056',
        '4RY' => 'E02006056',
        '4RZ' => 'E02006056',
        '4SA' => 'E02006056',
        '4SB' => 'E02006056',
        '4SD' => 'E02006056',
        '4SE' => 'E02006056',
        '4SF' => 'E02006056',
        '4SG' => 'E02006056',
        '4SH' => 'E02006055',
        '4SJ' => 'E02006056',
        '4SL' => 'E02006056',
        '4SN' => 'E02006056',
        '4SP' => 'E02006056',
        '4SQ' => 'E02006056',
        '4SR' => 'E02006056',
        '4SS' => 'E02006056',
        '4ST' => 'E02006056',
        '4SU' => 'E02006056',
        '4SW' => 'E02006056',
        '4SX' => 'E02006056',
        '4SY' => 'E02006056',
        '4SZ' => 'E02006056',
        '4TA' => 'E02006056',
        '4TB' => 'E02006056',
        '4TD' => 'E02006056',
        '4TE' => 'E02006056',
        '4TF' => 'E02006056',
        '4TG' => 'E02006056',
        '4TH' => 'E02006056',
        '4TJ' => 'E02006055',
        '4TL' => 'E02006055',
        '4TN' => 'E02006055',
        '4TP' => 'E02006055',
        '4TQ' => 'E02006056',
        '4TR' => 'E02006055',
        '4TS' => 'E02006055',
        '4TT' => 'E02006055',
        '4TU' => 'E02006055',
        '4TW' => 'E02006055',
        '4TX' => 'E02006056',
        '4TY' => 'E02006056',
        '4UA' => 'E02006055',
        '4UB' => 'E02006056',
        '4WA' => 'E02006056',
        '4WB' => 'E02006056',
        '4WD' => 'E02006055',
        '4WX' => 'E02006055',
        '4WZ' => 'E02006055',
        '4XN' => 'E02006055',
        '4XY' => 'E02006055',
        '4XZ' => 'E02006055',
        '4YA' => 'E02006055',
        '4YB' => 'E02006055',
        '4YD' => 'E02006055',
        '4YE' => 'E02006055',
        '4YF' => 'E02006055',
        '4YG' => 'E02006055',
        '4YH' => 'E02006055',
        '4YJ' => 'E02006055',
        '4YL' => 'E02006055',
        '4YN' => 'E02006055',
        '4YP' => 'E02006055',
        '4YX' => 'E02006056',
        '4YY' => 'E02006055',
        '4YZ' => 'E02006055',
        '4ZJ' => 'E02006055',
        '4ZN' => 'E02006055',
        '4ZQ' => 'E02006055',
        '5AA' => 'E02006055',
        '5AB' => 'E02006055',
        '5AD' => 'E02006055',
        '5AE' => 'E02006055',
        '5AF' => 'E02006055',
        '5AG' => 'E02006052',
        '5AH' => 'E02006055',
        '5AJ' => 'E02006055',
        '5AL' => 'E02006052',
        '5AN' => 'E02006055',
        '5AP' => 'E02006055',
        '5AQ' => 'E02006055',
        '5AR' => 'E02006055',
        '5AS' => 'E02006055',
        '5AT' => 'E02006055',
        '5AU' => 'E02006055',
        '5AW' => 'E02006055',
        '5AX' => 'E02006055',
        '5AY' => 'E02006055',
        '5AZ' => 'E02006055',
        '5BA' => 'E02006055',
        '5BB' => 'E02006055',
        '5BD' => 'E02006055',
        '5BE' => 'E02006055',
        '5BG' => 'E02006055',
        '5BH' => 'E02006055',
        '5BJ' => 'E02006055',
        '5BL' => 'E02006052',
        '5BN' => 'E02006055',
        '5BP' => 'E02006052',
        '5BQ' => 'E02006055',
        '5BR' => 'E02006055',
        '5BS' => 'E02006052',
        '5BT' => 'E02006052',
        '5BU' => 'E02006055',
        '5BW' => 'E02006052',
        '5BX' => 'E02006055',
        '5BY' => 'E02006055',
        '5BZ' => 'E02006055',
        '5DA' => 'E02006055',
        '5DB' => 'E02006055',
        '5DD' => 'E02006055',
        '5DE' => 'E02006055',
        '5DF' => 'E02006055',
        '5DG' => 'E02006055',
        '5DH' => 'E02006055',
        '5DJ' => 'E02006055',
        '5DL' => 'E02006055',
        '5DN' => 'E02006055',
        '5DP' => 'E02006055',
        '5DQ' => 'E02006055',
        '5DR' => 'E02006055',
        '5DS' => 'E02006055',
        '5DT' => 'E02006055',
        '5DU' => 'E02006055',
        '5DW' => 'E02006055',
        '5DX' => 'E02006055',
        '5DY' => 'E02006055',
        '5DZ' => 'E02006055',
        '5EA' => 'E02006055',
        '5EB' => 'E02006055',
        '5ED' => 'E02006055',
        '5EE' => 'E02006052',
        '5EF' => 'E02006052',
        '5EG' => 'E02006055',
        '5EH' => 'E02006055',
        '5EJ' => 'E02006052',
        '5EL' => 'E02006055',
        '5EN' => 'E02006055',
        '5EP' => 'E02006055',
        '5EQ' => 'E02006055',
        '5ER' => 'E02006052',
        '5ES' => 'E02006055',
        '5ET' => 'E02006052',
        '5EU' => 'E02006055',
        '5EW' => 'E02006052',
        '5EX' => 'E02006055',
        '5EY' => 'E02006055',
        '5EZ' => 'E02006055',
        '5FA' => 'E02006052',
        '5FB' => 'E02006055',
        '5FD' => 'E02006055',
        '5FE' => 'E02006055',
        '5FF' => 'E02006055',
        '5FG' => 'E02006052',
        '5FH' => 'E02006055',
        '5FJ' => 'E02006055',
        '5FL' => 'E02006055',
        '5FN' => 'E02006052',
        '5GA' => 'E02006055',
        '5GB' => 'E02006055',
        '5GD' => 'E02006055',
        '5GE' => 'E02006055',
        '5GF' => 'E02006055',
        '5GG' => 'E02006055',
        '5GH' => 'E02006055',
        '5GJ' => 'E02006055',
        '5GL' => 'E02006055',
        '5GS' => 'E02006055',
        '5GU' => 'E02006055',
        '5GX' => 'E02006055',
        '5GY' => 'E02006055',
        '5GZ' => 'E02006055',
        '5HA' => 'E02006055',
        '5HB' => 'E02006055',
        '5HD' => 'E02006055',
        '5HE' => 'E02006055',
        '5HF' => 'E02006055',
        '5HG' => 'E02006055',
        '5HH' => 'E02006052',
        '5HJ' => 'E02006052',
        '5HL' => 'E02006052',
        '5HN' => 'E02006052',
        '5HP' => 'E02006055',
        '5HQ' => 'E02006052',
        '5HR' => 'E02006055',
        '5HS' => 'E02006055',
        '5HT' => 'E02006055',
        '5HU' => 'E02006055',
        '5HW' => 'E02006052',
        '5HX' => 'E02006055',
        '5HY' => 'E02006055',
        '5HZ' => 'E02006055',
        '5JA' => 'E02006055',
        '5JB' => 'E02006055',
        '5JD' => 'E02006055',
        '5JE' => 'E02006055',
        '5JF' => 'E02006055',
        '5JG' => 'E02006055',
        '5JH' => 'E02006055',
        '5JJ' => 'E02006055',
        '5JL' => 'E02006055',
        '5JN' => 'E02006055',
        '5JP' => 'E02006055',
        '5JQ' => 'E02006055',
        '5JR' => 'E02006055',
        '5JS' => 'E02006055',
        '5JT' => 'E02006055',
        '5JU' => 'E02006055',
        '5JW' => 'E02006055',
        '5JX' => 'E02006055',
        '5JY' => 'E02006052',
        '5JZ' => 'E02006055',
        '5LA' => 'E02006055',
        '5LB' => 'E02006055',
        '5LD' => 'E02006052',
        '5LE' => 'E02006052',
        '5LF' => 'E02006052',
        '5LG' => 'E02006052',
        '5LH' => 'E02006052',
        '5LJ' => 'E02006052',
        '5LL' => 'E02006052',
        '5LN' => 'E02006052',
        '5LP' => 'E02006052',
        '5LQ' => 'E02006052',
        '5LR' => 'E02006052',
        '5LS' => 'E02006052',
        '5LT' => 'E02006052',
        '5LU' => 'E02006052',
        '5LW' => 'E02006052',
        '5LX' => 'E02006052',
        '5LY' => 'E02006055',
        '5LZ' => 'E02006052',
        '5NA' => 'E02006052',
        '5NB' => 'E02006052',
        '5ND' => 'E02006052',
        '5NE' => 'E02006052',
        '5NF' => 'E02006052',
        '5NH' => 'E02006052',
        '5NJ' => 'E02006052',
        '5NL' => 'E02006052',
        '5NN' => 'E02006052',
        '5NP' => 'E02006052',
        '5NQ' => 'E02006052',
        '5NS' => 'E02006055',
        '5NT' => 'E02006055',
        '5NU' => 'E02006055',
        '5NW' => 'E02006052',
        '5NX' => 'E02006055',
        '5NY' => 'E02006052',
        '5NZ' => 'E02006055',
        '5PA' => 'E02006052',
        '5PB' => 'E02006052',
        '5PD' => 'E02006052',
        '5PE' => 'E02006052',
        '5PF' => 'E02006052',
        '5PG' => 'E02006052',
        '5PH' => 'E02006052',
        '5PJ' => 'E02006052',
        '5PL' => 'E02006055',
        '5PN' => 'E02006052',
        '5PP' => 'E02006055',
        '5PQ' => 'E02006052',
        '5PR' => 'E02006055',
        '5PS' => 'E02006055',
        '5PT' => 'E02006052',
        '5PU' => 'E02006055',
        '5PW' => 'E02006055',
        '5PX' => 'E02006055',
        '5PY' => 'E02006055',
        '5PZ' => 'E02006052',
        '5QA' => 'E02006055',
        '5QB' => 'E02006055',
        '5QD' => 'E02006052',
        '5QE' => 'E02006052',
        '5QF' => 'E02006055',
        '5QG' => 'E02006055',
        '5QH' => 'E02006055',
        '5QJ' => 'E02006055',
        '5QL' => 'E02006055',
        '5QN' => 'E02006052',
        '5QP' => 'E02006055',
        '5QQ' => 'E02006055',
        '5QR' => 'E02006055',
        '5QS' => 'E02006055',
        '5QT' => 'E02006055',
        '5QU' => 'E02006052',
        '5QX' => 'E02006055',
        '5QY' => 'E02006055',
        '5QZ' => 'E02006055',
        '5RA' => 'E02006055',
        '5RB' => 'E02006055',
        '5RD' => 'E02006055',
        '5RE' => 'E02006052',
        '5RF' => 'E02006055',
        '5RG' => 'E02006055',
        '5RH' => 'E02006055',
        '5RJ' => 'E02006055',
        '5RL' => 'E02006055',
        '5RN' => 'E02006055',
        '5RP' => 'E02006052',
        '5RQ' => 'E02006055',
        '5RR' => 'E02006055',
        '5RS' => 'E02006055',
        '5RT' => 'E02006052',
        '5RW' => 'E02006052',
        '5RX' => 'E02006055',
        '5SA' => 'E02006055',
        '5SB' => 'E02006055',
        '5SD' => 'E02006055',
        '5SE' => 'E02006055',
        '5SF' => 'E02006055',
        '5SG' => 'E02006055',
        '5SH' => 'E02006055',
        '5SJ' => 'E02006055',
        '5SL' => 'E02006055',
        '5SN' => 'E02006055',
        '5SP' => 'E02006055',
        '5SQ' => 'E02006055',
        '5SR' => 'E02006055',
        '5SS' => 'E02006055',
        '5ST' => 'E02006055',
        '5SU' => 'E02006055',
        '5SW' => 'E02006055',
        '5SX' => 'E02006055',
        '5SY' => 'E02006055',
        '5SZ' => 'E02006055',
        '5TA' => 'E02006055',
        '5TB' => 'E02006055',
        '5TD' => 'E02006055',
        '5TE' => 'E02006055',
        '5TF' => 'E02006055',
        '5TG' => 'E02006055',
        '5TH' => 'E02006055',
        '5TJ' => 'E02006055',
        '5TL' => 'E02006055',
        '5TN' => 'E02006055',
        '5TP' => 'E02006055',
        '5TQ' => 'E02006055',
        '5TR' => 'E02006055',
        '5TT' => 'E02006055',
        '5TU' => 'E02006055',
        '5TW' => 'E02006055',
        '5TX' => 'E02006055',
        '5TY' => 'E02006055',
        '5TZ' => 'E02006055',
        '5UA' => 'E02006055',
        '5UB' => 'E02006055',
        '5UD' => 'E02006055',
        '5UE' => 'E02006055',
        '5UG' => 'E02006055',
        '5UH' => 'E02006055',
        '5UJ' => 'E02006055',
        '5UL' => 'E02006055',
        '5UN' => 'E02006055',
        '5UP' => 'E02006055',
        '5UQ' => 'E02006055',
        '5UR' => 'E02006055',
        '5UT' => 'E02006055',
        '5UU' => 'E02006055',
        '5UW' => 'E02006055',
        '5UX' => 'E02006055',
        '5UY' => 'E02006055',
        '5UZ' => 'E02006055',
        '5WA' => 'E02006055',
        '5WB' => 'E02006055',
        '5WD' => 'E02006055',
        '5WG' => 'E02006055',
        '5WR' => 'E02006055',
        '5WS' => 'E02006055',
        '5WT' => 'E02006055',
        '5WU' => 'E02006055',
        '5WW' => 'E02006055',
        '5WX' => 'E02006055',
        '5WY' => 'E02006055',
        '5WZ' => 'E02006055',
        '5XA' => 'E02006055',
        '5XB' => 'E02006055',
        '5XD' => 'E02006055',
        '5XE' => 'E02006055',
        '5XF' => 'E02006055',
        '5XG' => 'E02006055',
        '5XH' => 'E02006055',
        '5XJ' => 'E02006055',
        '5XL' => 'E02006055',
        '5XN' => 'E02006055',
        '5XP' => 'E02006055',
        '5XQ' => 'E02006055',
        '5XR' => 'E02006055',
        '5XW' => 'E02006055',
        '5XX' => 'E02006055',
        '5XY' => 'E02006055',
        '5XZ' => 'E02006055',
        '5YA' => 'E02006055',
        '5YB' => 'E02006055',
        '5YD' => 'E02006055',
        '5YE' => 'E02006055',
        '5YF' => 'E02006055',
        '5YG' => 'E02006055',
        '5YH' => 'E02006055',
        '5YL' => 'E02006055',
        '5YN' => 'E02006055',
        '5YP' => 'E02006055',
        '5YQ' => 'E02006055',
        '5YR' => 'E02006055',
        '5YS' => 'E02006055',
        '5YT' => 'E02006055',
        '5YU' => 'E02006055',
        '5YW' => 'E02006052',
        '5YX' => 'E02006052',
        '5YY' => 'E02006052',
        '5YZ' => 'E02006052',
        '5ZA' => 'E02006055',
        '5ZB' => 'E02006055',
        '5ZJ' => 'E02006055',
        '5ZQ' => 'E02006055',
        '5ZU' => 'E02006052',
        '5ZW' => 'E02006055',
        '6AA' => 'E02006056',
        '6AB' => 'E02006056',
        '6AD' => 'E02006056',
        '6AE' => 'E02006056',
        '6AF' => 'E02006056',
        '6AG' => 'E02006056',
        '6AH' => 'E02006056',
        '6AJ' => 'E02006056',
        '6AL' => 'E02006056',
        '6AN' => 'E02006056',
        '6AP' => 'E02006056',
        '6AQ' => 'E02006056',
        '6AR' => 'E02006056',
        '6AS' => 'E02006056',
        '6AT' => 'E02006056',
        '6AU' => 'E02006056',
        '6AW' => 'E02006056',
        '6AX' => 'E02006056',
        '6AY' => 'E02006056',
        '6AZ' => 'E02006056',
        '6BA' => 'E02006056',
        '6BB' => 'E02006056',
        '6BD' => 'E02006056',
        '6BE' => 'E02006056',
        '6BG' => 'E02006056',
        '6BH' => 'E02006056',
        '6BJ' => 'E02006056',
        '6BL' => 'E02006056',
        '6BN' => 'E02006056',
        '6BP' => 'E02006056',
        '6BQ' => 'E02006056',
        '6BR' => 'E02006056',
        '6BS' => 'E02006056',
        '6BT' => 'E02006056',
        '6BU' => 'E02006056',
        '6BW' => 'E02006056',
        '6BY' => 'E02006056',
        '6BZ' => 'E02006056',
        '6DA' => 'E02006056',
        '6DD' => 'E02006056',
        '6DE' => 'E02006056',
        '6DG' => 'E02006056',
        '6DH' => 'E02006056',
        '6DP' => 'E02006056',
        '6DQ' => 'E02006056',
        '6DR' => 'E02006056',
        '6DS' => 'E02006056',
        '6DT' => 'E02006056',
        '6DU' => 'E02006056',
        '6DW' => 'E02006056',
        '6DX' => 'E02006056',
        '6DY' => 'E02006056',
        '6DZ' => 'E02006056',
        '6EA' => 'E02006056',
        '6EB' => 'E02006056',
        '6ED' => 'E02006056',
        '6EE' => 'E02006056',
        '6EF' => 'E02006056',
        '6EG' => 'E02006056',
        '6EH' => 'E02006056',
        '6EL' => 'E02006056',
        '6EN' => 'E02006056',
        '6EP' => 'E02006056',
        '6EQ' => 'E02006056',
        '6ER' => 'E02006056',
        '6ES' => 'E02006056',
        '6EU' => 'E02006056',
        '6EW' => 'E02006056',
        '6EX' => 'E02006056',
        '6EY' => 'E02006056',
        '6EZ' => 'E02006056',
        '6HA' => 'E02006056',
        '6HB' => 'E02006056',
        '6HD' => 'E02006056',
        '6HE' => 'E02006056',
        '6HF' => 'E02006056',
        '6HG' => 'E02006056',
        '6HH' => 'E02006055',
        '6HJ' => 'E02006056',
        '6HL' => 'E02006056',
        '6HN' => 'E02006056',
        '6HP' => 'E02006056',
        '6HQ' => 'E02006056',
        '6HR' => 'E02006056',
        '6HS' => 'E02006056',
        '6HT' => 'E02006056',
        '6HU' => 'E02006056',
        '6HX' => 'E02006056',
        '6HY' => 'E02006056',
        '6HZ' => 'E02006056',
        '6JA' => 'E02006056',
        '6JB' => 'E02006056',
        '6JD' => 'E02006056',
        '6JE' => 'E02006056',
        '6JF' => 'E02006056',
        '6JG' => 'E02006056',
        '6JH' => 'E02006056',
        '6JJ' => 'E02006056',
        '6JL' => 'E02006056',
        '6JN' => 'E02006056',
        '6JP' => 'E02006056',
        '6JQ' => 'E02006056',
        '6JR' => 'E02006056',
        '6JS' => 'E02006056',
        '6JT' => 'E02006056',
        '6JU' => 'E02006056',
        '6JW' => 'E02006056',
        '6JX' => 'E02006056',
        '6JY' => 'E02006056',
        '6JZ' => 'E02006056',
        '6LA' => 'E02006056',
        '6LB' => 'E02006056',
        '6LD' => 'E02006056',
        '6LE' => 'E02006056',
        '6LF' => 'E02006056',
        '6LG' => 'E02006056',
        '6LH' => 'E02006056',
        '6LJ' => 'E02006056',
        '6LL' => 'E02006056',
        '6LN' => 'E02006056',
        '6LP' => 'E02006056',
        '6LQ' => 'E02006056',
        '6LR' => 'E02006056',
        '6LS' => 'E02006056',
        '6LT' => 'E02006056',
        '6LU' => 'E02006056',
        '6LW' => 'E02006056',
        '6LX' => 'E02006056',
        '6LY' => 'E02006056',
        '6LZ' => 'E02006056',
        '6NA' => 'E02006056',
        '6NB' => 'E02006059',
        '6ND' => 'E02006059',
        '6NE' => 'E02006059',
        '6NF' => 'E02006059',
        '6NG' => 'E02006059',
        '6NH' => 'E02006059',
        '6NJ' => 'E02006059',
        '6NL' => 'E02006059',
        '6NP' => 'E02006059',
        '6NQ' => 'E02006059',
        '6NR' => 'E02006056',
        '6NS' => 'E02006056',
        '6NT' => 'E02006056',
        '6NU' => 'E02006075',
        '6NW' => 'E02006059',
        '6NX' => 'E02006059',
        '6NY' => 'E02006056',
        '6NZ' => 'E02006056',
        '6PA' => 'E02006056',
        '6PB' => 'E02006056',
        '6PD' => 'E02006056',
        '6PE' => 'E02006056',
        '6PF' => 'E02006056',
        '6PG' => 'E02006056',
        '6PH' => 'E02006056',
        '6PJ' => 'E02006059',
        '6PL' => 'E02006059',
        '6PN' => 'E02006059',
        '6PP' => 'E02006059',
        '6PQ' => 'E02006056',
        '6PR' => 'E02006059',
        '6PS' => 'E02006059',
        '6PT' => 'E02006059',
        '6PU' => 'E02006059',
        '6PW' => 'E02006059',
        '6PX' => 'E02006059',
        '6PY' => 'E02006059',
        '6PZ' => 'E02006059',
        '6QA' => 'E02006059',
        '6QB' => 'E02006059',
        '6QD' => 'E02006056',
        '6QF' => 'E02006059',
        '6QG' => 'E02006059',
        '6QH' => 'E02006059',
        '6QL' => 'E02006056',
        '6QN' => 'E02006056',
        '6QP' => 'E02006056',
        '6QQ' => 'E02006059',
        '6QR' => 'E02006059',
        '6QS' => 'E02006059',
        '6QT' => 'E02006059',
        '6QU' => 'E02006059',
        '6QW' => 'E02006056',
        '6QX' => 'E02006059',
        '6QY' => 'E02006059',
        '6QZ' => 'E02006059',
        '6RA' => 'E02006059',
        '6RB' => 'E02006059',
        '6RD' => 'E02006059',
        '6RE' => 'E02006059',
        '6RF' => 'E02006059',
        '6RG' => 'E02006059',
        '6RH' => 'E02006059',
        '6RJ' => 'E02006059',
        '6RL' => 'E02006059',
        '6RP' => 'E02006059',
        '6RQ' => 'E02006059',
        '6RR' => 'E02006059',
        '6RS' => 'E02006059',
        '6RT' => 'E02006059',
        '6RU' => 'E02006059',
        '6RW' => 'E02006059',
        '6RX' => 'E02006059',
        '6RY' => 'E02006059',
        '6RZ' => 'E02006059',
        '6SA' => 'E02006059',
        '6SB' => 'E02006059',
        '6SD' => 'E02006059',
        '6SE' => 'E02006059',
        '6SF' => 'E02006059',
        '6SG' => 'E02006059',
        '6SP' => 'E02006059',
        '6SR' => 'E02006059',
        '6SS' => 'E02006056',
        '6ST' => 'E02006059',
        '6SU' => 'E02006059',
        '6SX' => 'E02006056',
        '6SY' => 'E02006059',
        '6SZ' => 'E02006059',
        '6TA' => 'E02006059',
        '6TB' => 'E02006059',
        '6TD' => 'E02006059',
        '6TE' => 'E02006059',
        '6TF' => 'E02006059',
        '6TG' => 'E02006059',
        '6TL' => 'E02006059',
        '6TN' => 'E02006059',
        '6TP' => 'E02006059',
        '6TQ' => 'E02006059',
        '6TR' => 'E02006059',
        '6TS' => 'E02006059',
        '6TT' => 'E02006059',
        '6TU' => 'E02006059',
        '6TW' => 'E02006059',
        '6TX' => 'E02006059',
        '6TY' => 'E02006059',
        '6TZ' => 'E02006059',
        '6UA' => 'E02006059',
        '6UE' => 'E02006059',
        '6UF' => 'E02006059',
        '6UG' => 'E02006059',
        '6WA' => 'E02006059',
        '6WJ' => 'E02006059',
        '6WW' => 'E02006055',
        '6WX' => 'E02006055',
        '6WY' => 'E02006055',
        '6WZ' => 'E02006055',
        '6XA' => 'E02006056',
        '6XN' => 'E02006059',
        '6XZ' => 'E02006055',
        '6YA' => 'E02006055',
        '6YB' => 'E02006056',
        '6YD' => 'E02006055',
        '6YE' => 'E02006056',
        '6YF' => 'E02006056',
        '6YG' => 'E02006055',
        '6YJ' => 'E02006055',
        '6YL' => 'E02006055',
        '6YN' => 'E02006055',
        '6YZ' => 'E02006056',
        '6ZN' => 'E02006055',
        '6ZQ' => 'E02006055',
        '6ZR' => 'E02006055',
        '9AA' => 'E02006055',
        '9AB' => 'E02006055',
        '9AD' => 'E02006055',
        '9AE' => 'E02006055',
        '9AF' => 'E02006055',
        '9AG' => 'E02006055',
        '9AH' => 'E02006055',
        '9AJ' => 'E02006055',
        '9AL' => 'E02006055',
        '9AN' => 'E02006055',
        '9AP' => 'E02006055',
        '9AQ' => 'E02006055',
        '9AR' => 'E02006055',
        '9BA' => 'E02006055',
        '9BB' => 'E02006055',
        '9BD' => 'E02006055',
        '9BE' => 'E02006055',
        '9BF' => 'E02006055',
        '9BG' => 'E02006055',
        '9BH' => 'E02006055',
        '9BJ' => 'E02006055',
        '9BL' => 'E02006055',
        '9BN' => 'E02006055',
        '9BP' => 'E02006055',
        '9BQ' => 'E02006055',
        '9BR' => 'E02006055',
        '9BS' => 'E02006055',
        '9BT' => 'E02006055',
        '9BU' => 'E02006055',
        '9BX' => 'E02006055',
        '9BY' => 'E02006055',
        '9BZ' => 'E02006055',
        '9DA' => 'E02006055',
        '9DB' => 'E02006055',
        '9DD' => 'E02006055',
        '9DE' => 'E02006055',
        '9DF' => 'E02006055',
        '9DG' => 'E02006055',
        '9DH' => 'E02006055',
        '9DJ' => 'E02006055',
        '9DL' => 'E02006055',
        '9DN' => 'E02006055',
        '9DP' => 'E02006055',
        '9DQ' => 'E02006055',
        '9DR' => 'E02006055',
        '9DS' => 'E02006055',
        '9DU' => 'E02006055',
        '9DW' => 'E02006055',
        '9DX' => 'E02006055',
        '9SA' => 'E02006052',
        '9SB' => 'E02006052',
        '9SD' => 'E02006052',
        '9SE' => 'E02006052',
        '9SF' => 'E02006052',
        '9SG' => 'E02006052',
        '9SH' => 'E02006052',
        '9SJ' => 'E02006052',
        '9SL' => 'E02006052',
        '9SN' => 'E02006052',
        '9SP' => 'E02006052',
        '9SQ' => 'E02006052',
        '9SR' => 'E02006052',
        '9SS' => 'E02006052',
        '9ST' => 'E02006052',
        '9SU' => 'E02006052',
        '9SW' => 'E02006052',
        '9SX' => 'E02006052',
        '9SY' => 'E02006052',
        '9SZ' => 'E02006052',
        '9TA' => 'E02006052',
        '9TB' => 'E02006052',
        '9TD' => 'E02006052',
        '9TE' => 'E02006052',
        '9TF' => 'E02006052',
        '9TG' => 'E02006052',
        '9TH' => 'E02006052',
        '9TJ' => 'E02006052',
        '9TL' => 'E02006052',
        '9TN' => 'E02006052',
        '9TP' => 'E02006052',
        '9TQ' => 'E02006052',
        '9TR' => 'E02006052',
        '9TS' => 'E02006052',
        '9TT' => 'E02006052',
        '9TU' => 'E02006052',
        '9ZZ' => 'E02006055',
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
