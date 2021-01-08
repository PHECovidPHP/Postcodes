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
final class M15
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '4AA' => 'E02006914',
        '4AB' => 'E02001259',
        '4AD' => 'E02001259',
        '4AE' => 'E02006916',
        '4AF' => 'E02006916',
        '4AG' => 'E02001259',
        '4AH' => 'E02001063',
        '4AJ' => 'E02001259',
        '4AL' => 'E02001259',
        '4AN' => 'E02001259',
        '4AP' => 'E02001063',
        '4AQ' => 'E02001259',
        '4AR' => 'E02001063',
        '4AS' => 'E02001259',
        '4AT' => 'E02001259',
        '4AU' => 'E02006916',
        '4AW' => 'E02006916',
        '4AX' => 'E02006917',
        '4AY' => 'E02001063',
        '4AZ' => 'E02001259',
        '4BA' => 'E02001259',
        '4BB' => 'E02006914',
        '4BD' => 'E02006916',
        '4BE' => 'E02006916',
        '4BF' => 'E02001259',
        '4BG' => 'E02001259',
        '4BH' => 'E02001259',
        '4BJ' => 'E02001259',
        '4BL' => 'E02001259',
        '4BN' => 'E02001259',
        '4BP' => 'E02001063',
        '4BQ' => 'E02006916',
        '4BR' => 'E02006916',
        '4BS' => 'E02001259',
        '4BT' => 'E02001259',
        '4BU' => 'E02001259',
        '4BW' => 'E02001063',
        '4BX' => 'E02001259',
        '4BY' => 'E02001259',
        '4BZ' => 'E02001259',
        '4DA' => 'E02001259',
        '4DB' => 'E02006916',
        '4DD' => 'E02006916',
        '4DE' => 'E02001259',
        '4DF' => 'E02006916',
        '4DG' => 'E02006916',
        '4DH' => 'E02006916',
        '4DJ' => 'E02006916',
        '4DL' => 'E02006916',
        '4DN' => 'E02006916',
        '4DP' => 'E02006916',
        '4DQ' => 'E02006916',
        '4DR' => 'E02006916',
        '4DS' => 'E02006916',
        '4DT' => 'E02006916',
        '4DU' => 'E02006916',
        '4DW' => 'E02006916',
        '4DX' => 'E02006916',
        '4DY' => 'E02006916',
        '4DZ' => 'E02006916',
        '4EA' => 'E02006916',
        '4EB' => 'E02006917',
        '4ED' => 'E02001259',
        '4EE' => 'E02001259',
        '4EF' => 'E02001259',
        '4EG' => 'E02006917',
        '4EH' => 'E02001259',
        '4EJ' => 'E02001259',
        '4EL' => 'E02006916',
        '4EN' => 'E02006916',
        '4EP' => 'E02001259',
        '4EQ' => 'E02006916',
        '4ER' => 'E02006916',
        '4ES' => 'E02006916',
        '4ET' => 'E02006916',
        '4EU' => 'E02006916',
        '4EW' => 'E02006916',
        '4EX' => 'E02006916',
        '4EY' => 'E02006916',
        '4EZ' => 'E02001259',
        '4FA' => 'E02006916',
        '4FB' => 'E02001259',
        '4FD' => 'E02001259',
        '4FE' => 'E02001259',
        '4FF' => 'E02001259',
        '4FG' => 'E02006914',
        '4FH' => 'E02001259',
        '4FJ' => 'E02001259',
        '4FL' => 'E02001259',
        '4FN' => 'E02006914',
        '4FP' => 'E02001259',
        '4FQ' => 'E02006916',
        '4FR' => 'E02006916',
        '4FS' => 'E02006916',
        '4FT' => 'E02006916',
        '4FU' => 'E02001259',
        '4FW' => 'E02001259',
        '4FX' => 'E02006916',
        '4FY' => 'E02006916',
        '4FZ' => 'E02006916',
        '4GA' => 'E02006917',
        '4GB' => 'E02006917',
        '4GD' => 'E02006917',
        '4GE' => 'E02006916',
        '4GF' => 'E02001259',
        '4GG' => 'E02006917',
        '4GH' => 'E02001259',
        '4GJ' => 'E02006916',
        '4GL' => 'E02006916',
        '4GN' => 'E02006916',
        '4GP' => 'E02006916',
        '4GQ' => 'E02006916',
        '4GR' => 'E02006916',
        '4GS' => 'E02006916',
        '4GT' => 'E02006916',
        '4GU' => 'E02006914',
        '4GW' => 'E02001259',
        '4GX' => 'E02001259',
        '4GY' => 'E02006916',
        '4GZ' => 'E02006916',
        '4HA' => 'E02006916',
        '4HB' => 'E02006916',
        '4HD' => 'E02006916',
        '4HE' => 'E02006916',
        '4HF' => 'E02006916',
        '4HG' => 'E02006916',
        '4HH' => 'E02006916',
        '4HJ' => 'E02006916',
        '4HL' => 'E02006916',
        '4HN' => 'E02006916',
        '4HP' => 'E02006916',
        '4HQ' => 'E02006916',
        '4HR' => 'E02006916',
        '4HS' => 'E02006916',
        '4HT' => 'E02006916',
        '4HU' => 'E02006916',
        '4HW' => 'E02006916',
        '4HX' => 'E02006916',
        '4HY' => 'E02006916',
        '4HZ' => 'E02006916',
        '4JA' => 'E02006916',
        '4JB' => 'E02006916',
        '4JD' => 'E02006916',
        '4JE' => 'E02006916',
        '4JF' => 'E02006916',
        '4JG' => 'E02001063',
        '4JH' => 'E02006916',
        '4JJ' => 'E02006917',
        '4JL' => 'E02001259',
        '4JN' => 'E02001259',
        '4JP' => 'E02006916',
        '4JQ' => 'E02006917',
        '4JR' => 'E02006916',
        '4JS' => 'E02006917',
        '4JT' => 'E02006917',
        '4JU' => 'E02006917',
        '4JW' => 'E02006916',
        '4JX' => 'E02006916',
        '4JY' => 'E02006916',
        '4JZ' => 'E02006916',
        '4LA' => 'E02006916',
        '4LB' => 'E02006916',
        '4LD' => 'E02006916',
        '4LE' => 'E02006916',
        '4LF' => 'E02006917',
        '4LG' => 'E02006917',
        '4LH' => 'E02006917',
        '4LJ' => 'E02006917',
        '4LL' => 'E02006916',
        '4LN' => 'E02006916',
        '4LP' => 'E02006916',
        '4LQ' => 'E02006916',
        '4LR' => 'E02006916',
        '4LS' => 'E02001259',
        '4LT' => 'E02006916',
        '4LU' => 'E02006916',
        '4LW' => 'E02006916',
        '4LX' => 'E02006916',
        '4LY' => 'E02006916',
        '4LZ' => 'E02006916',
        '4NA' => 'E02006916',
        '4NB' => 'E02006917',
        '4ND' => 'E02001259',
        '4NE' => 'E02001259',
        '4NF' => 'E02001259',
        '4NG' => 'E02006917',
        '4NH' => 'E02006917',
        '4NJ' => 'E02006917',
        '4NL' => 'E02006917',
        '4NN' => 'E02006917',
        '4NP' => 'E02006917',
        '4NQ' => 'E02006916',
        '4NR' => 'E02006917',
        '4NS' => 'E02006917',
        '4NT' => 'E02006917',
        '4NU' => 'E02006916',
        '4NW' => 'E02006917',
        '4NX' => 'E02006916',
        '4NY' => 'E02006916',
        '4NZ' => 'E02006916',
        '4PA' => 'E02006917',
        '4PB' => 'E02006916',
        '4PD' => 'E02006916',
        '4PE' => 'E02001259',
        '4PF' => 'E02001259',
        '4PG' => 'E02006914',
        '4PH' => 'E02006916',
        '4PJ' => 'E02006914',
        '4PL' => 'E02001259',
        '4PN' => 'E02006914',
        '4PP' => 'E02006917',
        '4PQ' => 'E02006914',
        '4PR' => 'E02006917',
        '4PS' => 'E02006917',
        '4PT' => 'E02006916',
        '4PU' => 'E02006914',
        '4PW' => 'E02006917',
        '4PX' => 'E02006917',
        '4PY' => 'E02006917',
        '4PZ' => 'E02006917',
        '4QA' => 'E02006917',
        '4QB' => 'E02006917',
        '4QD' => 'E02006917',
        '4QE' => 'E02006917',
        '4QF' => 'E02006917',
        '4QG' => 'E02006917',
        '4QH' => 'E02006917',
        '4QJ' => 'E02006917',
        '4QL' => 'E02006914',
        '4QN' => 'E02006914',
        '4QP' => 'E02006917',
        '4QQ' => 'E02006916',
        '4QR' => 'E02006916',
        '4QS' => 'E02006916',
        '4QT' => 'E02006916',
        '4QU' => 'E02006914',
        '4QW' => 'E02006917',
        '4QX' => 'E02006914',
        '4QY' => 'E02006917',
        '4QZ' => 'E02001259',
        '4RA' => 'E02006914',
        '4RB' => 'E02006914',
        '4RD' => 'E02001259',
        '4RE' => 'E02006916',
        '4RF' => 'E02006914',
        '4RG' => 'E02006914',
        '4RH' => 'E02006914',
        '4RL' => 'E02006914',
        '4RN' => 'E02006916',
        '4RP' => 'E02006914',
        '4RQ' => 'E02006917',
        '4RR' => 'E02001259',
        '4RS' => 'E02006916',
        '4RT' => 'E02006917',
        '4RU' => 'E02006916',
        '4RW' => 'E02006916',
        '4RX' => 'E02006916',
        '4RY' => 'E02006916',
        '4RZ' => 'E02006916',
        '4SF' => 'E02001259',
        '4SG' => 'E02001259',
        '4SH' => 'E02001063',
        '4SJ' => 'E02001063',
        '4SL' => 'E02006916',
        '4SN' => 'E02001063',
        '4SQ' => 'E02006917',
        '4ST' => 'E02006917',
        '4SU' => 'E02006917',
        '4SW' => 'E02006917',
        '4SX' => 'E02006917',
        '4SY' => 'E02006917',
        '4SZ' => 'E02006917',
        '4TA' => 'E02006914',
        '4TB' => 'E02006914',
        '4TD' => 'E02006914',
        '4TE' => 'E02006914',
        '4TF' => 'E02006917',
        '4TG' => 'E02006916',
        '4TH' => 'E02006917',
        '4TL' => 'E02006916',
        '4TN' => 'E02006917',
        '4TP' => 'E02006917',
        '4TQ' => 'E02006917',
        '4TR' => 'E02006916',
        '4TS' => 'E02001259',
        '4TT' => 'E02006917',
        '4TU' => 'E02006917',
        '4TW' => 'E02006917',
        '4TX' => 'E02006917',
        '4TY' => 'E02006914',
        '4TZ' => 'E02006916',
        '4UE' => 'E02006916',
        '4UP' => 'E02006917',
        '4UQ' => 'E02006917',
        '4UR' => 'E02001063',
        '4US' => 'E02006917',
        '4UT' => 'E02006917',
        '4UW' => 'E02001063',
        '4UY' => 'E02006916',
        '4UZ' => 'E02006916',
        '4WA' => 'E02006916',
        '4WB' => 'E02001259',
        '4WD' => 'E02001259',
        '4WE' => 'E02006916',
        '4WF' => 'E02001259',
        '4WG' => 'E02006917',
        '4WH' => 'E02006917',
        '4WJ' => 'E02001259',
        '4WL' => 'E02006916',
        '4WN' => 'E02001259',
        '4WP' => 'E02006916',
        '4WQ' => 'E02006917',
        '4WR' => 'E02006917',
        '4WS' => 'E02001259',
        '4WT' => 'E02006917',
        '4WU' => 'E02001259',
        '4WW' => 'E02006917',
        '4WX' => 'E02006917',
        '4WY' => 'E02006917',
        '4WZ' => 'E02001259',
        '4XA' => 'E02001259',
        '4XB' => 'E02001259',
        '4XD' => 'E02001259',
        '4XE' => 'E02001259',
        '4XF' => 'E02001259',
        '4XG' => 'E02001259',
        '4XH' => 'E02001259',
        '4XJ' => 'E02001259',
        '4XQ' => 'E02001259',
        '4XR' => 'E02001259',
        '4XS' => 'E02001259',
        '4XT' => 'E02001259',
        '4XU' => 'E02001259',
        '4XW' => 'E02001259',
        '4XX' => 'E02001259',
        '4XY' => 'E02001259',
        '4XZ' => 'E02001259',
        '4YB' => 'E02006917',
        '4ZA' => 'E02006917',
        '4ZY' => 'E02001063',
        '4ZZ' => 'E02001259',
        '5AA' => 'E02006916',
        '5AB' => 'E02006916',
        '5AD' => 'E02006916',
        '5AE' => 'E02001063',
        '5AF' => 'E02001063',
        '5AG' => 'E02001259',
        '5AH' => 'E02006916',
        '5AJ' => 'E02006916',
        '5AL' => 'E02006916',
        '5AN' => 'E02006916',
        '5AP' => 'E02006916',
        '5AQ' => 'E02001063',
        '5AR' => 'E02006916',
        '5AS' => 'E02001063',
        '5AT' => 'E02001063',
        '5AU' => 'E02001063',
        '5AW' => 'E02006914',
        '5AX' => 'E02001063',
        '5AY' => 'E02001063',
        '5AZ' => 'E02001063',
        '5BA' => 'E02001259',
        '5BB' => 'E02001063',
        '5BD' => 'E02006916',
        '5BE' => 'E02001259',
        '5BF' => 'E02001063',
        '5BG' => 'E02001063',
        '5BH' => 'E02006916',
        '5BJ' => 'E02006916',
        '5BL' => 'E02006916',
        '5BN' => 'E02006916',
        '5BP' => 'E02006916',
        '5BQ' => 'E02006916',
        '5BR' => 'E02001259',
        '5BS' => 'E02006916',
        '5BT' => 'E02001063',
        '5BU' => 'E02006916',
        '5BW' => 'E02006916',
        '5BY' => 'E02001063',
        '5BZ' => 'E02001063',
        '5DB' => 'E02001259',
        '5DD' => 'E02001063',
        '5DE' => 'E02001063',
        '5DF' => 'E02001063',
        '5DG' => 'E02001063',
        '5DH' => 'E02001063',
        '5DJ' => 'E02001063',
        '5DL' => 'E02001063',
        '5DN' => 'E02001063',
        '5DP' => 'E02001063',
        '5DQ' => 'E02001063',
        '5DR' => 'E02001063',
        '5DS' => 'E02001063',
        '5DT' => 'E02001063',
        '5DU' => 'E02001063',
        '5DW' => 'E02001063',
        '5DX' => 'E02001063',
        '5DY' => 'E02001063',
        '5DZ' => 'E02001063',
        '5EA' => 'E02006916',
        '5EB' => 'E02006916',
        '5ED' => 'E02006914',
        '5EE' => 'E02006916',
        '5EF' => 'E02006916',
        '5EG' => 'E02006916',
        '5EH' => 'E02006914',
        '5EJ' => 'E02001063',
        '5EL' => 'E02001063',
        '5EN' => 'E02001063',
        '5EP' => 'E02001063',
        '5EQ' => 'E02001063',
        '5ER' => 'E02001063',
        '5ES' => 'E02001063',
        '5ET' => 'E02001063',
        '5EU' => 'E02001063',
        '5EW' => 'E02001063',
        '5EX' => 'E02001063',
        '5EY' => 'E02001063',
        '5EZ' => 'E02001063',
        '5FB' => 'E02001068',
        '5FD' => 'E02006916',
        '5FE' => 'E02006916',
        '5FF' => 'E02006916',
        '5FG' => 'E02001063',
        '5FH' => 'E02006914',
        '5FJ' => 'E02006914',
        '5FL' => 'E02001063',
        '5FN' => 'E02006916',
        '5FP' => 'E02001063',
        '5FQ' => 'E02001063',
        '5FR' => 'E02001063',
        '5FS' => 'E02001063',
        '5FT' => 'E02001063',
        '5FU' => 'E02001063',
        '5FW' => 'E02001063',
        '5FX' => 'E02001063',
        '5FY' => 'E02001063',
        '5FZ' => 'E02001063',
        '5GA' => 'E02006914',
        '5GB' => 'E02001063',
        '5GD' => 'E02001063',
        '5GE' => 'E02001063',
        '5GF' => 'E02006914',
        '5GG' => 'E02006916',
        '5GH' => 'E02006916',
        '5GJ' => 'E02001063',
        '5GL' => 'E02001063',
        '5GN' => 'E02001063',
        '5GP' => 'E02006916',
        '5GQ' => 'E02006917',
        '5GT' => 'E02006917',
        '5GU' => 'E02006917',
        '5GX' => 'E02001063',
        '5HA' => 'E02001063',
        '5HB' => 'E02001063',
        '5HD' => 'E02001063',
        '5HE' => 'E02001063',
        '5HF' => 'E02001063',
        '5HG' => 'E02001063',
        '5HH' => 'E02001063',
        '5HJ' => 'E02001259',
        '5HL' => 'E02001259',
        '5HN' => 'E02006914',
        '5HP' => 'E02006914',
        '5HQ' => 'E02001063',
        '5HR' => 'E02001063',
        '5HS' => 'E02001063',
        '5HT' => 'E02001063',
        '5HU' => 'E02006916',
        '5HW' => 'E02001259',
        '5HX' => 'E02001063',
        '5HY' => 'E02001063',
        '5HZ' => 'E02001063',
        '5JA' => 'E02001063',
        '5JB' => 'E02001063',
        '5JD' => 'E02006916',
        '5JE' => 'E02001063',
        '5JF' => 'E02001063',
        '5JG' => 'E02001063',
        '5JH' => 'E02006914',
        '5JJ' => 'E02001063',
        '5JL' => 'E02001063',
        '5JN' => 'E02001063',
        '5JP' => 'E02001063',
        '5JQ' => 'E02006916',
        '5JR' => 'E02001063',
        '5JS' => 'E02001063',
        '5JT' => 'E02001063',
        '5JU' => 'E02001259',
        '5JW' => 'E02001063',
        '5JX' => 'E02001063',
        '5JY' => 'E02001063',
        '5JZ' => 'E02001063',
        '5LA' => 'E02006916',
        '5LB' => 'E02006916',
        '5LD' => 'E02001063',
        '5LE' => 'E02006914',
        '5LF' => 'E02001063',
        '5LJ' => 'E02001063',
        '5LL' => 'E02001063',
        '5LN' => 'E02001063',
        '5LP' => 'E02001063',
        '5LQ' => 'E02001063',
        '5LR' => 'E02006916',
        '5LS' => 'E02001068',
        '5LX' => 'E02006916',
        '5LY' => 'E02001063',
        '5LZ' => 'E02001063',
        '5NA' => 'E02006914',
        '5NB' => 'E02006914',
        '5ND' => 'E02006914',
        '5NE' => 'E02001063',
        '5NF' => 'E02001259',
        '5NG' => 'E02001063',
        '5NH' => 'E02001063',
        '5NJ' => 'E02001063',
        '5NL' => 'E02001063',
        '5NN' => 'E02001063',
        '5NP' => 'E02001063',
        '5NQ' => 'E02001063',
        '5NR' => 'E02001063',
        '5NS' => 'E02001063',
        '5NU' => 'E02001063',
        '5NW' => 'E02001063',
        '5NX' => 'E02001063',
        '5NY' => 'E02001063',
        '5NZ' => 'E02001063',
        '5PA' => 'E02001063',
        '5PB' => 'E02001063',
        '5PD' => 'E02001068',
        '5PE' => 'E02001259',
        '5PF' => 'E02001259',
        '5PH' => 'E02001068',
        '5PJ' => 'E02001063',
        '5PL' => 'E02001063',
        '5PN' => 'E02001063',
        '5PP' => 'E02001259',
        '5PQ' => 'E02001259',
        '5PR' => 'E02001063',
        '5PS' => 'E02001063',
        '5PT' => 'E02001063',
        '5PU' => 'E02001063',
        '5PW' => 'E02001259',
        '5PX' => 'E02001063',
        '5PY' => 'E02001259',
        '5PZ' => 'E02001063',
        '5QA' => 'E02001259',
        '5QB' => 'E02001259',
        '5QD' => 'E02001259',
        '5QE' => 'E02001259',
        '5QG' => 'E02001259',
        '5QH' => 'E02001063',
        '5QJ' => 'E02001063',
        '5QL' => 'E02001068',
        '5QP' => 'E02001259',
        '5QQ' => 'E02001063',
        '5QR' => 'E02001063',
        '5RA' => 'E02001063',
        '5RB' => 'E02001063',
        '5RD' => 'E02001063',
        '5RE' => 'E02001063',
        '5RF' => 'E02001063',
        '5RG' => 'E02001063',
        '5RH' => 'E02001063',
        '5RJ' => 'E02001063',
        '5RL' => 'E02001063',
        '5RN' => 'E02001063',
        '5RP' => 'E02001063',
        '5RR' => 'E02006916',
        '5RS' => 'E02006916',
        '5SL' => 'E02001259',
        '5SR' => 'E02006916',
        '5SS' => 'E02001063',
        '5TA' => 'E02001063',
        '5TB' => 'E02001063',
        '5TD' => 'E02001063',
        '5TE' => 'E02001063',
        '5TF' => 'E02001063',
        '5TG' => 'E02001063',
        '5TH' => 'E02001063',
        '5TJ' => 'E02001063',
        '5TL' => 'E02001063',
        '5TN' => 'E02001063',
        '5TP' => 'E02001063',
        '5TQ' => 'E02001063',
        '5TR' => 'E02001063',
        '5TS' => 'E02001063',
        '5TT' => 'E02001063',
        '5TU' => 'E02001259',
        '5TZ' => 'E02001259',
        '5UP' => 'E02001063',
        '5UU' => 'E02001259',
        '5UW' => 'E02001259',
        '5UX' => 'E02001259',
        '5UY' => 'E02001259',
        '5UZ' => 'E02001259',
        '5WA' => 'E02001259',
        '5WB' => 'E02001063',
        '5WD' => 'E02001063',
        '5WE' => 'E02001259',
        '5WF' => 'E02001259',
        '5WG' => 'E02001259',
        '5WH' => 'E02001259',
        '5WJ' => 'E02001259',
        '5WL' => 'E02001063',
        '5WN' => 'E02001259',
        '5WP' => 'E02001259',
        '5WQ' => 'E02001259',
        '5WR' => 'E02001259',
        '5WS' => 'E02001259',
        '5WT' => 'E02001259',
        '5WU' => 'E02001063',
        '5WW' => 'E02001259',
        '5WX' => 'E02001063',
        '5WY' => 'E02001259',
        '5WZ' => 'E02001259',
        '5XA' => 'E02001259',
        '5XB' => 'E02001259',
        '5XD' => 'E02001259',
        '5XE' => 'E02006916',
        '5XF' => 'E02006916',
        '5XG' => 'E02006916',
        '5XH' => 'E02006916',
        '5XJ' => 'E02001259',
        '5XL' => 'E02001259',
        '5XN' => 'E02001259',
        '5XT' => 'E02001259',
        '5XU' => 'E02001259',
        '5XW' => 'E02001259',
        '5XX' => 'E02001259',
        '5XY' => 'E02001259',
        '5XZ' => 'E02001259',
        '5YW' => 'E02001063',
        '5YY' => 'E02001259',
        '5YZ' => 'E02001259',
        '5ZA' => 'E02001063',
        '5ZU' => 'E02001259',
        '5ZY' => 'E02001063',
        '6AA' => 'E02001063',
        '6AB' => 'E02001063',
        '6AD' => 'E02001063',
        '6AE' => 'E02006914',
        '6AF' => 'E02006914',
        '6AG' => 'E02001063',
        '6AH' => 'E02006914',
        '6AJ' => 'E02006914',
        '6AL' => 'E02006914',
        '6AN' => 'E02001063',
        '6AP' => 'E02001063',
        '6AQ' => 'E02001063',
        '6AR' => 'E02001063',
        '6AS' => 'E02006914',
        '6AT' => 'E02001063',
        '6AU' => 'E02001063',
        '6AW' => 'E02006914',
        '6AX' => 'E02001063',
        '6AY' => 'E02001063',
        '6AZ' => 'E02001063',
        '6BA' => 'E02006914',
        '6BB' => 'E02001063',
        '6BD' => 'E02006914',
        '6BE' => 'E02006914',
        '6BF' => 'E02006914',
        '6BG' => 'E02006914',
        '6BH' => 'E02006914',
        '6BJ' => 'E02006914',
        '6BL' => 'E02001063',
        '6BN' => 'E02001063',
        '6BP' => 'E02006914',
        '6BQ' => 'E02006914',
        '6BR' => 'E02006914',
        '6BS' => 'E02006914',
        '6BT' => 'E02006914',
        '6BU' => 'E02006914',
        '6BW' => 'E02006914',
        '6BX' => 'E02006914',
        '6BY' => 'E02006914',
        '6BZ' => 'E02006914',
        '6DA' => 'E02006914',
        '6DB' => 'E02006914',
        '6DD' => 'E02001063',
        '6DE' => 'E02006914',
        '6DF' => 'E02006914',
        '6DG' => 'E02001063',
        '6DH' => 'E02001063',
        '6DJ' => 'E02006914',
        '6DL' => 'E02001063',
        '6DN' => 'E02001063',
        '6DP' => 'E02006914',
        '6DQ' => 'E02001063',
        '6DR' => 'E02006914',
        '6DS' => 'E02006914',
        '6DT' => 'E02006914',
        '6DU' => 'E02001063',
        '6DW' => 'E02006914',
        '6DX' => 'E02001063',
        '6DY' => 'E02006914',
        '6DZ' => 'E02001063',
        '6EA' => 'E02001063',
        '6EB' => 'E02001063',
        '6ED' => 'E02001063',
        '6EE' => 'E02006914',
        '6EF' => 'E02001063',
        '6EG' => 'E02001063',
        '6EH' => 'E02001063',
        '6EJ' => 'E02001063',
        '6EL' => 'E02001063',
        '6EN' => 'E02001063',
        '6EP' => 'E02001063',
        '6EQ' => 'E02001063',
        '6ER' => 'E02001063',
        '6ES' => 'E02006914',
        '6ET' => 'E02001063',
        '6EU' => 'E02001063',
        '6EW' => 'E02001063',
        '6EX' => 'E02001063',
        '6EY' => 'E02001063',
        '6EZ' => 'E02001063',
        '6FA' => 'E02006914',
        '6FB' => 'E02001063',
        '6FD' => 'E02006914',
        '6FE' => 'E02001063',
        '6FF' => 'E02006914',
        '6FG' => 'E02001063',
        '6FH' => 'E02001063',
        '6FJ' => 'E02001063',
        '6FL' => 'E02001063',
        '6FN' => 'E02001063',
        '6FP' => 'E02001063',
        '6FQ' => 'E02001063',
        '6FR' => 'E02001063',
        '6FS' => 'E02001063',
        '6FT' => 'E02001063',
        '6FU' => 'E02001063',
        '6FW' => 'E02001063',
        '6FX' => 'E02001063',
        '6FY' => 'E02001063',
        '6FZ' => 'E02001063',
        '6GA' => 'E02001063',
        '6GB' => 'E02001063',
        '6GD' => 'E02001063',
        '6GE' => 'E02001063',
        '6GF' => 'E02001063',
        '6GG' => 'E02001063',
        '6GH' => 'E02006914',
        '6GJ' => 'E02001259',
        '6GL' => 'E02001063',
        '6GN' => 'E02001063',
        '6GP' => 'E02006914',
        '6GQ' => 'E02001063',
        '6GR' => 'E02006914',
        '6GS' => 'E02001063',
        '6GT' => 'E02006914',
        '6GU' => 'E02001063',
        '6GW' => 'E02006914',
        '6GX' => 'E02001063',
        '6GY' => 'E02001063',
        '6GZ' => 'E02001063',
        '6HA' => 'E02006914',
        '6HB' => 'E02006914',
        '6HD' => 'E02001063',
        '6HE' => 'E02006914',
        '6HF' => 'E02006914',
        '6HG' => 'E02001063',
        '6HN' => 'E02001063',
        '6HP' => 'E02001063',
        '6HQ' => 'E02001063',
        '6HR' => 'E02001063',
        '6HS' => 'E02001063',
        '6HU' => 'E02001063',
        '6HW' => 'E02001063',
        '6HX' => 'E02001063',
        '6HY' => 'E02001063',
        '6JA' => 'E02001063',
        '6JB' => 'E02001259',
        '6JD' => 'E02001063',
        '6JE' => 'E02006914',
        '6JF' => 'E02001063',
        '6JG' => 'E02006914',
        '6JH' => 'E02006914',
        '6JJ' => 'E02001063',
        '6JL' => 'E02001063',
        '6JN' => 'E02001063',
        '6JS' => 'E02001063',
        '6JT' => 'E02001063',
        '6JU' => 'E02001063',
        '6JX' => 'E02006914',
        '6JY' => 'E02006914',
        '6JZ' => 'E02006914',
        '6LA' => 'E02001063',
        '6LD' => 'E02001063',
        '6LE' => 'E02001063',
        '6LF' => 'E02006914',
        '6LG' => 'E02001063',
        '6LJ' => 'E02001259',
        '6LL' => 'E02006914',
        '6LN' => 'E02001063',
        '6LP' => 'E02001063',
        '6LQ' => 'E02001063',
        '6LR' => 'E02001063',
        '6LU' => 'E02001069',
        '6LX' => 'E02001063',
        '6LY' => 'E02001068',
        '6LZ' => 'E02001063',
        '6NA' => 'E02001063',
        '6NB' => 'E02001063',
        '6ND' => 'E02001063',
        '6NE' => 'E02001063',
        '6NF' => 'E02001063',
        '6NG' => 'E02001063',
        '6NH' => 'E02001063',
        '6NJ' => 'E02001063',
        '6NL' => 'E02001063',
        '6NN' => 'E02001063',
        '6NP' => 'E02001063',
        '6NQ' => 'E02001063',
        '6NR' => 'E02001063',
        '6NS' => 'E02001063',
        '6NT' => 'E02001063',
        '6NU' => 'E02001063',
        '6NW' => 'E02001063',
        '6NX' => 'E02001259',
        '6NY' => 'E02001063',
        '6PA' => 'E02001063',
        '6PB' => 'E02001063',
        '6PF' => 'E02001063',
        '6PG' => 'E02001063',
        '6PH' => 'E02001063',
        '6PJ' => 'E02001063',
        '6PL' => 'E02006914',
        '6PN' => 'E02006914',
        '6PP' => 'E02001063',
        '6PQ' => 'E02001063',
        '6PR' => 'E02001063',
        '6PS' => 'E02001063',
        '6PT' => 'E02001063',
        '6PU' => 'E02001063',
        '6PW' => 'E02001063',
        '6PX' => 'E02001063',
        '6PY' => 'E02001063',
        '6PZ' => 'E02001063',
        '6QL' => 'E02001063',
        '6RP' => 'E02001063',
        '6RS' => 'E02001063',
        '6SE' => 'E02001063',
        '6SH' => 'E02001063',
        '6SS' => 'E02006914',
        '6SX' => 'E02001063',
        '6SY' => 'E02001063',
        '6SZ' => 'E02001063',
        '6TB' => 'E02006914',
        '6TT' => 'E02006914',
        '6UU' => 'E02006914',
        '6WA' => 'E02001259',
        '6WB' => 'E02001259',
        '6WD' => 'E02001259',
        '6WE' => 'E02001259',
        '6WF' => 'E02001259',
        '6WG' => 'E02001063',
        '6WH' => 'E02001063',
        '6WJ' => 'E02001063',
        '6WL' => 'E02001063',
        '6WN' => 'E02001063',
        '6WP' => 'E02001063',
        '6WQ' => 'E02001259',
        '6WR' => 'E02001063',
        '6WS' => 'E02001063',
        '6WT' => 'E02001259',
        '6WU' => 'E02001259',
        '6WW' => 'E02001259',
        '6WX' => 'E02001063',
        '6WY' => 'E02001063',
        '6WZ' => 'E02001063',
        '6XA' => 'E02001259',
        '6XB' => 'E02001259',
        '6XD' => 'E02001259',
        '6XJ' => 'E02006914',
        '6XL' => 'E02006914',
        '6ZZ' => 'E02001259',
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
