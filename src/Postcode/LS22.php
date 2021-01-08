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
final class LS22
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '4AA' => 'E02002330',
        '4AB' => 'E02002330',
        '4AD' => 'E02002330',
        '4AE' => 'E02002335',
        '4AF' => 'E02002335',
        '4AG' => 'E02005781',
        '4AH' => 'E02005781',
        '4AJ' => 'E02005781',
        '4AL' => 'E02005776',
        '4AN' => 'E02005781',
        '4AP' => 'E02005781',
        '4AQ' => 'E02002335',
        '4AR' => 'E02005781',
        '4AS' => 'E02005781',
        '4AT' => 'E02005781',
        '4AU' => 'E02005781',
        '4AW' => 'E02005781',
        '4AX' => 'E02005781',
        '4AY' => 'E02005781',
        '4AZ' => 'E02005781',
        '4BA' => 'E02005781',
        '4BB' => 'E02005781',
        '4BD' => 'E02005781',
        '4BE' => 'E02005781',
        '4BF' => 'E02002335',
        '4BG' => 'E02005781',
        '4BH' => 'E02005781',
        '4BJ' => 'E02005781',
        '4BL' => 'E02005781',
        '4BN' => 'E02005781',
        '4BP' => 'E02005781',
        '4BQ' => 'E02005781',
        '4BR' => 'E02005781',
        '4BS' => 'E02005781',
        '4BT' => 'E02005781',
        '4BU' => 'E02005781',
        '4BW' => 'E02005781',
        '4BX' => 'E02005781',
        '4BY' => 'E02005781',
        '4BZ' => 'E02005781',
        '4DA' => 'E02005781',
        '4DB' => 'E02005781',
        '4DD' => 'E02005781',
        '4DE' => 'E02005781',
        '4DF' => 'E02005781',
        '4DG' => 'E02002331',
        '4DH' => 'E02002331',
        '4DJ' => 'E02002331',
        '4DL' => 'E02002331',
        '4DN' => 'E02002331',
        '4DP' => 'E02005781',
        '4DQ' => 'E02002331',
        '4DR' => 'E02002330',
        '4DS' => 'E02005776',
        '4DT' => 'E02005776',
        '4DU' => 'E02005776',
        '4DW' => 'E02002331',
        '4DX' => 'E02005776',
        '4DY' => 'E02005776',
        '4DZ' => 'E02005776',
        '4EA' => 'E02005776',
        '4EB' => 'E02005776',
        '4ED' => 'E02005776',
        '4EE' => 'E02005776',
        '4EF' => 'E02005776',
        '4EG' => 'E02005776',
        '4EH' => 'E02005776',
        '4EJ' => 'E02005776',
        '4EL' => 'E02005776',
        '4EN' => 'E02005776',
        '4EP' => 'E02005776',
        '4EQ' => 'E02005776',
        '4ER' => 'E02005776',
        '4ES' => 'E02005776',
        '4ET' => 'E02005776',
        '4EU' => 'E02005776',
        '4EW' => 'E02005776',
        '4EX' => 'E02005776',
        '4EY' => 'E02005776',
        '4EZ' => 'E02005776',
        '4FA' => 'E02005781',
        '4FB' => 'E02002331',
        '4FD' => 'E02002331',
        '4FE' => 'E02002330',
        '4FF' => 'E02002330',
        '4FG' => 'E02002330',
        '4FH' => 'E02005776',
        '4FJ' => 'E02002330',
        '4FL' => 'E02002331',
        '4FN' => 'E02002331',
        '4FP' => 'E02002330',
        '4FQ' => 'E02002330',
        '4FR' => 'E02002330',
        '4FS' => 'E02002330',
        '4FT' => 'E02002330',
        '4FU' => 'E02002330',
        '4FW' => 'E02002330',
        '4FX' => 'E02002330',
        '4FY' => 'E02002330',
        '4FZ' => 'E02002330',
        '4GA' => 'E02002330',
        '4GB' => 'E02002330',
        '4GD' => 'E02002330',
        '4GE' => 'E02002330',
        '4GF' => 'E02002330',
        '4GG' => 'E02005781',
        '4GH' => 'E02002331',
        '4GJ' => 'E02002330',
        '4GL' => 'E02002331',
        '4GN' => 'E02002330',
        '4GP' => 'E02002330',
        '4GQ' => 'E02002330',
        '4GR' => 'E02002330',
        '4GS' => 'E02002330',
        '4GT' => 'E02002330',
        '4GX' => 'E02002330',
        '4GZ' => 'E02002331',
        '4HA' => 'E02002330',
        '4HB' => 'E02002330',
        '4HD' => 'E02002330',
        '4HE' => 'E02002330',
        '4HF' => 'E02002330',
        '4HG' => 'E02002330',
        '4HH' => 'E02002330',
        '4HJ' => 'E02002330',
        '4HL' => 'E02002330',
        '4HN' => 'E02002330',
        '4HP' => 'E02002330',
        '4HQ' => 'E02002330',
        '4HR' => 'E02002330',
        '4HS' => 'E02002330',
        '4HT' => 'E02002335',
        '4HU' => 'E02002335',
        '4HW' => 'E02002330',
        '4HX' => 'E02002335',
        '4HY' => 'E02002335',
        '4HZ' => 'E02005781',
        '4JA' => 'E02005781',
        '4JB' => 'E02002335',
        '4JD' => 'E02002335',
        '4JE' => 'E02002335',
        '4JF' => 'E02002330',
        '4JG' => 'E02002331',
        '4JH' => 'E02002331',
        '4JJ' => 'E02002331',
        '4JL' => 'E02002331',
        '4JN' => 'E02002331',
        '4JP' => 'E02002331',
        '4JQ' => 'E02002331',
        '4JR' => 'E02002331',
        '4JS' => 'E02002331',
        '4JT' => 'E02002331',
        '4JU' => 'E02002331',
        '4JW' => 'E02002331',
        '4JX' => 'E02002331',
        '4JY' => 'E02002331',
        '4JZ' => 'E02002331',
        '4LA' => 'E02002331',
        '4LB' => 'E02005781',
        '4LD' => 'E02002331',
        '4LE' => 'E02002331',
        '4LF' => 'E02002331',
        '4LG' => 'E02002331',
        '4LH' => 'E02002331',
        '4LJ' => 'E02002331',
        '4LL' => 'E02002331',
        '4LN' => 'E02002331',
        '4LP' => 'E02002331',
        '4LQ' => 'E02002331',
        '4LR' => 'E02002331',
        '4LS' => 'E02002331',
        '4LT' => 'E02002331',
        '4LU' => 'E02002331',
        '4LW' => 'E02002331',
        '4LX' => 'E02002331',
        '4LY' => 'E02002331',
        '4LZ' => 'E02002331',
        '4NA' => 'E02002331',
        '4NB' => 'E02002331',
        '4ND' => 'E02002331',
        '4NE' => 'E02002331',
        '4NF' => 'E02002331',
        '4NG' => 'E02002331',
        '4NH' => 'E02002331',
        '4NJ' => 'E02002331',
        '4NL' => 'E02002331',
        '4NN' => 'E02002331',
        '4NP' => 'E02002331',
        '4NQ' => 'E02002331',
        '4NR' => 'E02005781',
        '4NS' => 'E02002331',
        '4NT' => 'E02002331',
        '4NU' => 'E02002331',
        '4NW' => 'E02002331',
        '4NX' => 'E02002331',
        '4NY' => 'E02002331',
        '4NZ' => 'E02002331',
        '4PA' => 'E02002331',
        '4PB' => 'E02002331',
        '4PD' => 'E02002331',
        '4PE' => 'E02002331',
        '4PF' => 'E02002331',
        '4PG' => 'E02002330',
        '4PH' => 'E02002331',
        '4PJ' => 'E02002331',
        '4PL' => 'E02002330',
        '4PN' => 'E02002330',
        '4PP' => 'E02002330',
        '4PQ' => 'E02002331',
        '4PR' => 'E02002330',
        '4PS' => 'E02002330',
        '4PT' => 'E02002330',
        '4PU' => 'E02002330',
        '4PW' => 'E02002330',
        '4PX' => 'E02002330',
        '4PY' => 'E02002330',
        '4PZ' => 'E02002330',
        '4QA' => 'E02002330',
        '4QB' => 'E02002330',
        '4QD' => 'E02002330',
        '4QE' => 'E02002330',
        '4QF' => 'E02002330',
        '4QG' => 'E02002330',
        '4QH' => 'E02002330',
        '4QJ' => 'E02002330',
        '4QL' => 'E02002330',
        '4QN' => 'E02002330',
        '4QP' => 'E02002330',
        '4QQ' => 'E02002330',
        '4QR' => 'E02002330',
        '4QS' => 'E02002330',
        '4QT' => 'E02002330',
        '4QU' => 'E02002330',
        '4QW' => 'E02002330',
        '4QX' => 'E02002330',
        '4QY' => 'E02002330',
        '4QZ' => 'E02002330',
        '4RA' => 'E02002330',
        '4RB' => 'E02002330',
        '4RD' => 'E02002331',
        '4RE' => 'E02002331',
        '4RF' => 'E02002331',
        '4RG' => 'E02002331',
        '4RH' => 'E02002331',
        '4RJ' => 'E02002331',
        '4RL' => 'E02002331',
        '4RN' => 'E02002331',
        '4RP' => 'E02002331',
        '4RQ' => 'E02002331',
        '4RR' => 'E02002331',
        '4RS' => 'E02002331',
        '4RT' => 'E02002331',
        '4RU' => 'E02002331',
        '4RW' => 'E02002331',
        '4RX' => 'E02002330',
        '4RY' => 'E02002330',
        '4RZ' => 'E02002330',
        '4SA' => 'E02002330',
        '4SB' => 'E02002330',
        '4SD' => 'E02002330',
        '4SE' => 'E02002330',
        '4SF' => 'E02002330',
        '4SG' => 'E02002330',
        '4SH' => 'E02002330',
        '4SJ' => 'E02002330',
        '4SL' => 'E02002331',
        '4SN' => 'E02002331',
        '4SP' => 'E02002331',
        '4SQ' => 'E02002330',
        '4SR' => 'E02002331',
        '4SS' => 'E02002331',
        '4ST' => 'E02002331',
        '4SU' => 'E02002331',
        '4SW' => 'E02002331',
        '4SX' => 'E02002331',
        '4SY' => 'E02002331',
        '4SZ' => 'E02002331',
        '4TA' => 'E02002331',
        '4TB' => 'E02002330',
        '4TD' => 'E02002330',
        '4TE' => 'E02002331',
        '4TF' => 'E02002331',
        '4TG' => 'E02002331',
        '4TH' => 'E02002331',
        '4TJ' => 'E02002331',
        '4TL' => 'E02002330',
        '4TN' => 'E02002331',
        '4TP' => 'E02002331',
        '4TQ' => 'E02002331',
        '4TR' => 'E02002331',
        '4TS' => 'E02002331',
        '4TT' => 'E02002330',
        '4TU' => 'E02005776',
        '4TW' => 'E02002331',
        '4TX' => 'E02005781',
        '4TY' => 'E02002330',
        '4TZ' => 'E02002330',
        '4UA' => 'E02005781',
        '4UB' => 'E02002335',
        '4UD' => 'E02002335',
        '4UE' => 'E02002330',
        '4UF' => 'E02002330',
        '4UG' => 'E02002330',
        '4UH' => 'E02002330',
        '4UJ' => 'E02002330',
        '4UL' => 'E02002330',
        '4UN' => 'E02002330',
        '4UP' => 'E02002330',
        '4UQ' => 'E02002330',
        '4UR' => 'E02002330',
        '4US' => 'E02002335',
        '4UT' => 'E02002331',
        '4UU' => 'E02002331',
        '4UW' => 'E02002330',
        '4UX' => 'E02002331',
        '4UY' => 'E02002330',
        '4UZ' => 'E02002335',
        '4WA' => 'E02002331',
        '4WB' => 'E02002335',
        '4WD' => 'E02002330',
        '4WE' => 'E02002330',
        '4WF' => 'E02002330',
        '4WG' => 'E02002330',
        '4WH' => 'E02002330',
        '4WJ' => 'E02002330',
        '4WL' => 'E02002330',
        '4WN' => 'E02002330',
        '4WP' => 'E02002330',
        '4WQ' => 'E02002330',
        '4WR' => 'E02002330',
        '4WT' => 'E02002330',
        '4WW' => 'E02002330',
        '4WX' => 'E02002331',
        '4XA' => 'E02002330',
        '4XB' => 'E02002331',
        '4XD' => 'E02002330',
        '4XE' => 'E02002331',
        '4XF' => 'E02002331',
        '4XG' => 'E02005781',
        '4XH' => 'E02005781',
        '4XJ' => 'E02002331',
        '4XL' => 'E02002331',
        '4XN' => 'E02002335',
        '4XP' => 'E02002331',
        '4XQ' => 'E02005781',
        '4XR' => 'E02002331',
        '4XS' => 'E02002331',
        '4XT' => 'E02002331',
        '4XU' => 'E02002331',
        '4XW' => 'E02002330',
        '4XX' => 'E02002330',
        '4XY' => 'E02002330',
        '4XZ' => 'E02002330',
        '4YA' => 'E02002331',
        '4YB' => 'E02002330',
        '4YD' => 'E02002331',
        '4YE' => 'E02002330',
        '4YF' => 'E02002330',
        '4YG' => 'E02002330',
        '4YH' => 'E02002330',
        '4YJ' => 'E02002330',
        '4YL' => 'E02002330',
        '4YN' => 'E02002331',
        '4YP' => 'E02002330',
        '4YQ' => 'E02002330',
        '4YR' => 'E02002330',
        '4YS' => 'E02002330',
        '4YT' => 'E02002330',
        '4YU' => 'E02002331',
        '4YW' => 'E02002331',
        '4YX' => 'E02002331',
        '4YZ' => 'E02002330',
        '4ZR' => 'E02002331',
        '4ZS' => 'E02002331',
        '5AA' => 'E02002335',
        '5AB' => 'E02002335',
        '5AD' => 'E02002335',
        '5AE' => 'E02002335',
        '5AF' => 'E02002335',
        '5AG' => 'E02002335',
        '5AH' => 'E02002335',
        '5AJ' => 'E02002335',
        '5AL' => 'E02002335',
        '5AN' => 'E02002335',
        '5AP' => 'E02002335',
        '5AQ' => 'E02002335',
        '5AR' => 'E02002335',
        '5AS' => 'E02002335',
        '5AT' => 'E02002335',
        '5AU' => 'E02002335',
        '5AW' => 'E02002335',
        '5AX' => 'E02002335',
        '5AY' => 'E02002335',
        '5AZ' => 'E02002335',
        '5BA' => 'E02002335',
        '5BB' => 'E02002335',
        '5BD' => 'E02002335',
        '5BE' => 'E02002335',
        '5BG' => 'E02002335',
        '5BH' => 'E02002335',
        '5BJ' => 'E02002335',
        '5BL' => 'E02002335',
        '5BN' => 'E02002335',
        '5BP' => 'E02002335',
        '5BQ' => 'E02002335',
        '5BR' => 'E02002335',
        '5BS' => 'E02002335',
        '5BT' => 'E02002335',
        '5BU' => 'E02002335',
        '5BW' => 'E02002335',
        '5BX' => 'E02002335',
        '5BY' => 'E02002335',
        '5BZ' => 'E02002335',
        '5DA' => 'E02002331',
        '5DB' => 'E02002335',
        '5DD' => 'E02002335',
        '5DE' => 'E02002335',
        '5DF' => 'E02002335',
        '5DG' => 'E02002335',
        '5DH' => 'E02002335',
        '5DJ' => 'E02002335',
        '5DL' => 'E02002335',
        '5DN' => 'E02002335',
        '5DP' => 'E02002335',
        '5DQ' => 'E02002335',
        '5DR' => 'E02002331',
        '5DS' => 'E02002335',
        '5DT' => 'E02002335',
        '5DU' => 'E02002331',
        '5DW' => 'E02002335',
        '5DX' => 'E02002331',
        '5DY' => 'E02002331',
        '5DZ' => 'E02002331',
        '5EA' => 'E02002331',
        '5EB' => 'E02002331',
        '5ED' => 'E02002331',
        '5EE' => 'E02002331',
        '5EF' => 'E02002331',
        '5EG' => 'E02002331',
        '5EH' => 'E02005776',
        '5EJ' => 'E02002331',
        '5EL' => 'E02002331',
        '5EN' => 'E02005776',
        '5EP' => 'E02005776',
        '5EQ' => 'E02005776',
        '5ER' => 'E02005776',
        '5ES' => 'E02005776',
        '5ET' => 'E02005776',
        '5EU' => 'E02005776',
        '5EW' => 'E02005776',
        '5EX' => 'E02005776',
        '5EY' => 'E02005776',
        '5EZ' => 'E02005776',
        '5FA' => 'E02005776',
        '5FB' => 'E02002335',
        '5FD' => 'E02002335',
        '5FE' => 'E02002331',
        '5FF' => 'E02002331',
        '5FN' => 'E02002331',
        '5GA' => 'E02005776',
        '5GT' => 'E02005776',
        '5GZ' => 'E02002331',
        '5HA' => 'E02002331',
        '5HB' => 'E02002331',
        '5HD' => 'E02002331',
        '5HE' => 'E02002331',
        '5HF' => 'E02002331',
        '5HG' => 'E02005776',
        '5HH' => 'E02005776',
        '5HJ' => 'E02005776',
        '5HL' => 'E02005776',
        '5HN' => 'E02005776',
        '5HP' => 'E02005776',
        '5HQ' => 'E02005776',
        '5HR' => 'E02005776',
        '5HS' => 'E02005776',
        '5HT' => 'E02005776',
        '5HU' => 'E02005776',
        '5HW' => 'E02005776',
        '5HX' => 'E02005776',
        '5HY' => 'E02005776',
        '5HZ' => 'E02005776',
        '5JA' => 'E02005776',
        '5JB' => 'E02005776',
        '5JD' => 'E02005776',
        '5JE' => 'E02005776',
        '5JF' => 'E02005776',
        '5JG' => 'E02005776',
        '5JH' => 'E02005776',
        '5JJ' => 'E02005776',
        '5JL' => 'E02002335',
        '5JN' => 'E02002335',
        '5JP' => 'E02002335',
        '5JQ' => 'E02005776',
        '5JR' => 'E02002335',
        '5JS' => 'E02002335',
        '5JT' => 'E02002335',
        '5JU' => 'E02002331',
        '5JW' => 'E02005776',
        '5JX' => 'E02002331',
        '5JY' => 'E02002331',
        '5JZ' => 'E02002335',
        '5LA' => 'E02002331',
        '5LB' => 'E02002331',
        '5LD' => 'E02002331',
        '5LE' => 'E02002335',
        '5LF' => 'E02002335',
        '5LG' => 'E02002335',
        '5LH' => 'E02002335',
        '5LJ' => 'E02002335',
        '5LL' => 'E02002331',
        '5LN' => 'E02002335',
        '5LP' => 'E02002335',
        '5LQ' => 'E02002335',
        '5LR' => 'E02002335',
        '5LS' => 'E02002335',
        '5LT' => 'E02002335',
        '5LU' => 'E02002335',
        '5LX' => 'E02002335',
        '5LY' => 'E02002335',
        '5LZ' => 'E02002335',
        '5NA' => 'E02005776',
        '5NB' => 'E02002331',
        '5ND' => 'E02005776',
        '5NE' => 'E02002335',
        '5NF' => 'E02005776',
        '5NG' => 'E02005776',
        '5NH' => 'E02002335',
        '5NQ' => 'E02005776',
        '5NZ' => 'E02002335',
        '5PA' => 'E02002335',
        '5PB' => 'E02002331',
        '5PX' => 'E02005776',
        '5PY' => 'E02005776',
        '5PZ' => 'E02005776',
        '5QA' => 'E02005776',
        '5RA' => 'E02002330',
        '5RB' => 'E02002330',
        '5RD' => 'E02002330',
        '5RE' => 'E02002330',
        '5RF' => 'E02002331',
        '5TA' => 'E02002335',
        '5TE' => 'E02002335',
        '5TF' => 'E02002335',
        '5TG' => 'E02002335',
        '5TP' => 'E02002335',
        '5WA' => 'E02002331',
        '5WB' => 'E02002331',
        '5WD' => 'E02002331',
        '5WU' => 'E02002331',
        '5WW' => 'E02002331',
        '5WX' => 'E02002331',
        '5WY' => 'E02002331',
        '5WZ' => 'E02002331',
        '5XA' => 'E02002335',
        '5XB' => 'E02002331',
        '5XD' => 'E02002335',
        '5XE' => 'E02002335',
        '5XF' => 'E02002335',
        '5XG' => 'E02002331',
        '5XH' => 'E02002335',
        '5XJ' => 'E02002335',
        '5XL' => 'E02002331',
        '5XN' => 'E02002331',
        '5XP' => 'E02002331',
        '5XQ' => 'E02002331',
        '5XR' => 'E02002331',
        '5XS' => 'E02002331',
        '5XT' => 'E02002331',
        '5XU' => 'E02002331',
        '5XW' => 'E02002335',
        '5XX' => 'E02002331',
        '5XY' => 'E02002331',
        '5XZ' => 'E02002331',
        '5YA' => 'E02002331',
        '5YB' => 'E02002331',
        '5YD' => 'E02002335',
        '5YE' => 'E02002331',
        '5YF' => 'E02002331',
        '5YG' => 'E02002331',
        '5YH' => 'E02002331',
        '5YJ' => 'E02002331',
        '5YL' => 'E02002331',
        '5YN' => 'E02002331',
        '5YP' => 'E02002331',
        '5YQ' => 'E02002331',
        '5YR' => 'E02002331',
        '5YS' => 'E02002331',
        '6AA' => 'E02002330',
        '6AB' => 'E02002330',
        '6AD' => 'E02002330',
        '6AE' => 'E02002331',
        '6AF' => 'E02002331',
        '6AG' => 'E02002331',
        '6AH' => 'E02005781',
        '6AJ' => 'E02005781',
        '6AL' => 'E02002331',
        '6AN' => 'E02002331',
        '6AP' => 'E02002331',
        '6AQ' => 'E02002330',
        '6AR' => 'E02002330',
        '6AS' => 'E02002330',
        '6AT' => 'E02002330',
        '6AU' => 'E02002330',
        '6AW' => 'E02002330',
        '6AX' => 'E02005781',
        '6AY' => 'E02002330',
        '6AZ' => 'E02002331',
        '6BA' => 'E02002330',
        '6BB' => 'E02002330',
        '6BD' => 'E02002330',
        '6BE' => 'E02002330',
        '6BF' => 'E02002330',
        '6BG' => 'E02002331',
        '6BH' => 'E02002330',
        '6BJ' => 'E02002330',
        '6BL' => 'E02002330',
        '6DA' => 'E02002331',
        '6DP' => 'E02002330',
        '6DZ' => 'E02002331',
        '6FE' => 'E02002330',
        '6FF' => 'E02002330',
        '6FG' => 'E02002330',
        '6FL' => 'E02002331',
        '6FQ' => 'E02002330',
        '6FZ' => 'E02002330',
        '6GL' => 'E02002331',
        '6GN' => 'E02002330',
        '6GP' => 'E02002330',
        '6GQ' => 'E02002330',
        '6GR' => 'E02002330',
        '6GS' => 'E02002330',
        '6GT' => 'E02002330',
        '6GW' => 'E02002330',
        '6GX' => 'E02002330',
        '6GZ' => 'E02002330',
        '6HA' => 'E02002330',
        '6HB' => 'E02002330',
        '6HD' => 'E02002330',
        '6HE' => 'E02002330',
        '6HF' => 'E02002330',
        '6HG' => 'E02002330',
        '6HH' => 'E02002330',
        '6HX' => 'E02002331',
        '6HY' => 'E02002331',
        '6JA' => 'E02002331',
        '6JB' => 'E02002331',
        '6JD' => 'E02002331',
        '6JF' => 'E02002331',
        '6JG' => 'E02002331',
        '6JH' => 'E02002331',
        '6JJ' => 'E02002331',
        '6JL' => 'E02002331',
        '6JN' => 'E02002331',
        '6JP' => 'E02002331',
        '6JQ' => 'E02002331',
        '6JR' => 'E02002331',
        '6JS' => 'E02002331',
        '6JT' => 'E02002331',
        '6JU' => 'E02002331',
        '6JW' => 'E02002331',
        '6JX' => 'E02002331',
        '6JY' => 'E02002331',
        '6JZ' => 'E02002331',
        '6LA' => 'E02002331',
        '6LB' => 'E02002331',
        '6LD' => 'E02002331',
        '6LE' => 'E02002331',
        '6LF' => 'E02002331',
        '6LG' => 'E02002331',
        '6LH' => 'E02002331',
        '6LJ' => 'E02002331',
        '6LL' => 'E02002331',
        '6LN' => 'E02002331',
        '6LP' => 'E02002331',
        '6LQ' => 'E02002331',
        '6LR' => 'E02002331',
        '6LS' => 'E02002331',
        '6LT' => 'E02002331',
        '6LU' => 'E02002331',
        '6LW' => 'E02002331',
        '6LX' => 'E02002331',
        '6LY' => 'E02002331',
        '6LZ' => 'E02002331',
        '6NA' => 'E02002331',
        '6NB' => 'E02002331',
        '6ND' => 'E02002331',
        '6NE' => 'E02002331',
        '6NF' => 'E02002331',
        '6NG' => 'E02002331',
        '6NH' => 'E02002331',
        '6NJ' => 'E02002331',
        '6NL' => 'E02002331',
        '6NN' => 'E02002331',
        '6NP' => 'E02002331',
        '6NQ' => 'E02002331',
        '6NR' => 'E02002331',
        '6NT' => 'E02002331',
        '6NU' => 'E02002331',
        '6NW' => 'E02002331',
        '6NX' => 'E02002331',
        '6NY' => 'E02002331',
        '6NZ' => 'E02002331',
        '6PA' => 'E02002331',
        '6PB' => 'E02002331',
        '6PD' => 'E02002331',
        '6PE' => 'E02002331',
        '6PF' => 'E02002331',
        '6PG' => 'E02002330',
        '6PH' => 'E02002331',
        '6PJ' => 'E02002331',
        '6PL' => 'E02002330',
        '6PN' => 'E02002330',
        '6PP' => 'E02002330',
        '6PQ' => 'E02002331',
        '6PR' => 'E02002330',
        '6PS' => 'E02002330',
        '6PT' => 'E02002331',
        '6PU' => 'E02002331',
        '6PW' => 'E02002330',
        '6RD' => 'E02002331',
        '6RE' => 'E02002331',
        '6RF' => 'E02002331',
        '6RG' => 'E02002331',
        '6RH' => 'E02002331',
        '6RJ' => 'E02002331',
        '6RL' => 'E02002331',
        '6RN' => 'E02002331',
        '6RP' => 'E02002331',
        '6RQ' => 'E02002331',
        '6RR' => 'E02002331',
        '6RS' => 'E02002331',
        '6RT' => 'E02002331',
        '6RU' => 'E02002331',
        '6RW' => 'E02002331',
        '6RX' => 'E02002330',
        '6RY' => 'E02002330',
        '6RZ' => 'E02002330',
        '6SA' => 'E02002330',
        '6SB' => 'E02002330',
        '6SD' => 'E02002330',
        '6SE' => 'E02002330',
        '6SF' => 'E02002330',
        '6SG' => 'E02002330',
        '6SH' => 'E02002330',
        '6SJ' => 'E02002330',
        '6SL' => 'E02002331',
        '6SN' => 'E02002331',
        '6SP' => 'E02002331',
        '6SQ' => 'E02002330',
        '6SR' => 'E02002331',
        '6SS' => 'E02002330',
        '6ST' => 'E02002331',
        '6SU' => 'E02002330',
        '6SW' => 'E02002331',
        '6SX' => 'E02002331',
        '6SY' => 'E02002331',
        '6TA' => 'E02002331',
        '6TB' => 'E02002330',
        '6TD' => 'E02002330',
        '6TE' => 'E02002331',
        '6TF' => 'E02002331',
        '6TG' => 'E02002331',
        '6TH' => 'E02002331',
        '6TJ' => 'E02002331',
        '6TL' => 'E02002331',
        '6TN' => 'E02002331',
        '6TP' => 'E02002331',
        '6TQ' => 'E02002331',
        '6TR' => 'E02002331',
        '6TT' => 'E02002330',
        '6TW' => 'E02002331',
        '6TY' => 'E02002330',
        '6TZ' => 'E02002330',
        '6UA' => 'E02002330',
        '6UD' => 'E02002330',
        '6UF' => 'E02002331',
        '6UG' => 'E02002330',
        '6UH' => 'E02002331',
        '6UT' => 'E02002331',
        '6UX' => 'E02002331',
        '6UY' => 'E02002331',
        '6UZ' => 'E02002331',
        '6WA' => 'E02002330',
        '6WB' => 'E02002330',
        '6WD' => 'E02002330',
        '6WE' => 'E02002330',
        '6WF' => 'E02002330',
        '6WG' => 'E02002330',
        '6WH' => 'E02002330',
        '6WJ' => 'E02002330',
        '6WL' => 'E02002330',
        '6WN' => 'E02002330',
        '6WP' => 'E02002331',
        '6WQ' => 'E02002330',
        '6WR' => 'E02002330',
        '6WS' => 'E02002330',
        '6WT' => 'E02002330',
        '6WU' => 'E02002331',
        '6WW' => 'E02002330',
        '6WX' => 'E02002331',
        '6WY' => 'E02002331',
        '6WZ' => 'E02002331',
        '6XA' => 'E02002330',
        '6XB' => 'E02002331',
        '6XD' => 'E02002330',
        '6XE' => 'E02002330',
        '6XF' => 'E02002331',
        '6XG' => 'E02002331',
        '6XH' => 'E02002330',
        '6XJ' => 'E02002330',
        '6XL' => 'E02002330',
        '6XN' => 'E02002331',
        '6XP' => 'E02002330',
        '6XQ' => 'E02002330',
        '6XR' => 'E02002331',
        '6XS' => 'E02002331',
        '6XT' => 'E02002331',
        '6XU' => 'E02002331',
        '6XW' => 'E02002331',
        '6XX' => 'E02002331',
        '6XY' => 'E02002330',
        '6XZ' => 'E02002330',
        '6YA' => 'E02002331',
        '6YB' => 'E02002331',
        '6YD' => 'E02002331',
        '6YE' => 'E02002330',
        '6YF' => 'E02002330',
        '6YG' => 'E02002331',
        '6YH' => 'E02002331',
        '6YJ' => 'E02002331',
        '6YL' => 'E02002331',
        '6YN' => 'E02002331',
        '6YP' => 'E02002330',
        '6YQ' => 'E02002331',
        '6YR' => 'E02002330',
        '6YS' => 'E02002331',
        '6YT' => 'E02002330',
        '6YU' => 'E02002331',
        '6YW' => 'E02002331',
        '6YX' => 'E02002331',
        '6YZ' => 'E02002330',
        '6ZB' => 'E02002330',
        '6ZE' => 'E02002331',
        '6ZF' => 'E02002331',
        '6ZG' => 'E02002331',
        '6ZH' => 'E02002331',
        '6ZJ' => 'E02002331',
        '6ZP' => 'E02002331',
        '7AA' => 'E02002331',
        '7AB' => 'E02002331',
        '7AD' => 'E02002331',
        '7AE' => 'E02002331',
        '7AF' => 'E02002331',
        '7AG' => 'E02002331',
        '7BA' => 'E02002331',
        '7BB' => 'E02002331',
        '7DB' => 'E02002331',
        '7DD' => 'E02002331',
        '7DE' => 'E02002331',
        '7DF' => 'E02002331',
        '7DG' => 'E02002331',
        '7DH' => 'E02002331',
        '7DJ' => 'E02002331',
        '7DL' => 'E02002331',
        '7DN' => 'E02002331',
        '7DP' => 'E02002331',
        '7DQ' => 'E02002331',
        '7DR' => 'E02002330',
        '7DS' => 'E02002331',
        '7DT' => 'E02002331',
        '7DU' => 'E02002331',
        '7DW' => 'E02002331',
        '7FB' => 'E02002331',
        '7FD' => 'E02002331',
        '7FE' => 'E02002331',
        '7FJ' => 'E02002330',
        '7FL' => 'E02002331',
        '7FN' => 'E02002331',
        '7FP' => 'E02002330',
        '7FR' => 'E02002330',
        '7FS' => 'E02002330',
        '7FT' => 'E02002330',
        '7FU' => 'E02002330',
        '7FW' => 'E02002330',
        '7FX' => 'E02002330',
        '7FY' => 'E02002330',
        '7FZ' => 'E02002331',
        '7GA' => 'E02002330',
        '7GB' => 'E02002330',
        '7GD' => 'E02002330',
        '7GE' => 'E02002330',
        '7GF' => 'E02002330',
        '7GH' => 'E02002331',
        '7GZ' => 'E02002331',
        '7LA' => 'E02002331',
        '7LB' => 'E02002331',
        '7LD' => 'E02002331',
        '7LE' => 'E02002331',
        '7LL' => 'E02002330',
        '7NS' => 'E02002331',
        '7PA' => 'E02002330',
        '7PT' => 'E02002330',
        '7PU' => 'E02002330',
        '7PX' => 'E02002330',
        '7PY' => 'E02002330',
        '7PZ' => 'E02002330',
        '7QA' => 'E02002330',
        '7QB' => 'E02002330',
        '7QD' => 'E02002330',
        '7QE' => 'E02002330',
        '7QF' => 'E02002330',
        '7QG' => 'E02002330',
        '7QH' => 'E02002330',
        '7QJ' => 'E02002330',
        '7QL' => 'E02002330',
        '7QN' => 'E02002330',
        '7QP' => 'E02002330',
        '7QQ' => 'E02002330',
        '7QR' => 'E02002330',
        '7QS' => 'E02002330',
        '7QT' => 'E02002330',
        '7QU' => 'E02002330',
        '7QW' => 'E02002330',
        '7QX' => 'E02002330',
        '7QY' => 'E02002330',
        '7QZ' => 'E02002330',
        '7RA' => 'E02002330',
        '7RB' => 'E02002330',
        '7RD' => 'E02002331',
        '7SS' => 'E02002331',
        '7SU' => 'E02002331',
        '7SZ' => 'E02002330',
        '7TA' => 'E02002330',
        '7TB' => 'E02002331',
        '7TE' => 'E02002331',
        '7TF' => 'E02002331',
        '7TG' => 'E02002331',
        '7TH' => 'E02002331',
        '7TJ' => 'E02002331',
        '7TL' => 'E02002330',
        '7TN' => 'E02002331',
        '7TQ' => 'E02002331',
        '7TS' => 'E02002331',
        '7TW' => 'E02002331',
        '7UA' => 'E02002331',
        '7UB' => 'E02002331',
        '7UD' => 'E02002330',
        '7UE' => 'E02002330',
        '7UF' => 'E02002330',
        '7UG' => 'E02002330',
        '7UH' => 'E02002330',
        '7UJ' => 'E02002330',
        '7UL' => 'E02002330',
        '7UN' => 'E02002330',
        '7UP' => 'E02002330',
        '7UQ' => 'E02002330',
        '7UR' => 'E02002330',
        '7US' => 'E02002331',
        '7UT' => 'E02002331',
        '7UU' => 'E02002330',
        '7UW' => 'E02002330',
        '7UX' => 'E02002331',
        '7UY' => 'E02002330',
        '7UZ' => 'E02002331',
        '7WA' => 'E02002331',
        '7WL' => 'E02002331',
        '7WN' => 'E02002331',
        '7WQ' => 'E02002330',
        '7WR' => 'E02002330',
        '7WS' => 'E02002330',
        '7WT' => 'E02002331',
        '7WU' => 'E02002330',
        '7WW' => 'E02002330',
        '7WX' => 'E02002330',
        '7WY' => 'E02002331',
        '7WZ' => 'E02002331',
        '7XA' => 'E02002330',
        '7XB' => 'E02002330',
        '7XD' => 'E02002330',
        '7XE' => 'E02002330',
        '7XF' => 'E02002330',
        '7XG' => 'E02002331',
        '7XH' => 'E02002330',
        '7XJ' => 'E02002330',
        '7XL' => 'E02002330',
        '7XN' => 'E02002330',
        '7XP' => 'E02002331',
        '7XQ' => 'E02002330',
        '7XR' => 'E02002331',
        '7XS' => 'E02002331',
        '7XT' => 'E02002331',
        '7XU' => 'E02002331',
        '7XW' => 'E02002330',
        '7XX' => 'E02002330',
        '7XY' => 'E02002330',
        '7XZ' => 'E02002330',
        '7YA' => 'E02002330',
        '7YB' => 'E02002330',
        '7YD' => 'E02002331',
        '7YE' => 'E02002331',
        '7YF' => 'E02002330',
        '7YG' => 'E02002330',
        '7YH' => 'E02002330',
        '7YJ' => 'E02002330',
        '7YL' => 'E02002330',
        '7YN' => 'E02002330',
        '7YP' => 'E02002330',
        '7YQ' => 'E02002330',
        '7YR' => 'E02002331',
        '7YS' => 'E02002331',
        '7YX' => 'E02002331',
        '7ZX' => 'E02002331',
        '9AA' => 'E02002331',
        '9AD' => 'E02002331',
        '9AE' => 'E02002331',
        '9AF' => 'E02002331',
        '9AG' => 'E02002331',
        '9AH' => 'E02002331',
        '9AJ' => 'E02002331',
        '9AL' => 'E02002331',
        '9AN' => 'E02002331',
        '9AP' => 'E02002331',
        '9AQ' => 'E02002331',
        '9AR' => 'E02002331',
        '9AS' => 'E02002331',
        '9AT' => 'E02002331',
        '9AU' => 'E02002331',
        '9AW' => 'E02002331',
        '9AX' => 'E02002331',
        '9AY' => 'E02002331',
        '9AZ' => 'E02002331',
        '9BA' => 'E02002331',
        '9BB' => 'E02002331',
        '9BD' => 'E02002331',
        '9BE' => 'E02002331',
        '9BF' => 'E02002331',
        '9BG' => 'E02002331',
        '9BH' => 'E02002331',
        '9BJ' => 'E02002331',
        '9BL' => 'E02002331',
        '9BN' => 'E02002331',
        '9BP' => 'E02002331',
        '9BQ' => 'E02002331',
        '9BR' => 'E02002331',
        '9BS' => 'E02002331',
        '9BT' => 'E02002331',
        '9BU' => 'E02002331',
        '9BW' => 'E02002331',
        '9BX' => 'E02002331',
        '9BY' => 'E02002331',
        '9BZ' => 'E02002331',
        '9DA' => 'E02002331',
        '9DB' => 'E02002331',
        '9DD' => 'E02002331',
        '9DE' => 'E02002331',
        '9DF' => 'E02002331',
        '9DG' => 'E02002331',
        '9DH' => 'E02002331',
        '9DJ' => 'E02002331',
        '9DL' => 'E02002331',
        '9DN' => 'E02002331',
        '9DP' => 'E02002331',
        '9DQ' => 'E02002331',
        '9DR' => 'E02002331',
        '9DS' => 'E02002331',
        '9DT' => 'E02002331',
        '9DU' => 'E02002331',
        '9DW' => 'E02002331',
        '9DX' => 'E02002331',
        '9DZ' => 'E02002331',
        '9EA' => 'E02002331',
        '9EB' => 'E02002331',
        '9ED' => 'E02002331',
        '9EE' => 'E02002331',
        '9EF' => 'E02002331',
        '9EG' => 'E02002331',
        '9EH' => 'E02002331',
        '9EJ' => 'E02002331',
        '9EL' => 'E02002331',
        '9EN' => 'E02002331',
        '9EP' => 'E02002331',
        '9EQ' => 'E02002331',
        '9ER' => 'E02002331',
        '9ES' => 'E02002331',
        '9ET' => 'E02002331',
        '9EU' => 'E02002331',
        '9EW' => 'E02002331',
        '9EX' => 'E02002331',
        '9EY' => 'E02002331',
        '9EZ' => 'E02002331',
        '9FA' => 'E02002331',
        '9FB' => 'E02002331',
        '9FD' => 'E02002331',
        '9FE' => 'E02002331',
        '9FF' => 'E02002331',
        '9FG' => 'E02002331',
        '9FH' => 'E02002331',
        '9FJ' => 'E02002331',
        '9FL' => 'E02002331',
        '9FN' => 'E02002331',
        '9FP' => 'E02002331',
        '9FQ' => 'E02002331',
        '9FR' => 'E02002331',
        '9FS' => 'E02002331',
        '9FT' => 'E02002331',
        '9FW' => 'E02002331',
        '9FX' => 'E02002331',
        '9FY' => 'E02002331',
        '9FZ' => 'E02002331',
        '9GA' => 'E02002331',
        '9GB' => 'E02002331',
        '9GD' => 'E02002331',
        '9GE' => 'E02002331',
        '9GF' => 'E02002331',
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