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
final class GU12
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '4AA' => 'E02004813',
        '4AB' => 'E02004813',
        '4AD' => 'E02004813',
        '4AE' => 'E02004813',
        '4AF' => 'E02004813',
        '4AG' => 'E02004813',
        '4AH' => 'E02004813',
        '4AJ' => 'E02004813',
        '4AL' => 'E02004813',
        '4AN' => 'E02004813',
        '4AP' => 'E02004813',
        '4AQ' => 'E02004813',
        '4AR' => 'E02004813',
        '4AS' => 'E02004813',
        '4AT' => 'E02004813',
        '4AU' => 'E02004813',
        '4AW' => 'E02004813',
        '4AX' => 'E02004813',
        '4AY' => 'E02004813',
        '4AZ' => 'E02004813',
        '4BA' => 'E02004813',
        '4BB' => 'E02004813',
        '4BD' => 'E02004813',
        '4BE' => 'E02004813',
        '4BF' => 'E02004810',
        '4BG' => 'E02004810',
        '4BH' => 'E02004813',
        '4BJ' => 'E02004813',
        '4BL' => 'E02004813',
        '4BN' => 'E02004813',
        '4BP' => 'E02004813',
        '4BQ' => 'E02004813',
        '4BS' => 'E02004813',
        '4BT' => 'E02004810',
        '4BU' => 'E02004809',
        '4BW' => 'E02004813',
        '4BX' => 'E02004810',
        '4BY' => 'E02004810',
        '4BZ' => 'E02004813',
        '4DA' => 'E02004813',
        '4DB' => 'E02004813',
        '4DD' => 'E02004813',
        '4DE' => 'E02004810',
        '4DF' => 'E02004810',
        '4DG' => 'E02004812',
        '4DH' => 'E02004810',
        '4DJ' => 'E02004813',
        '4DL' => 'E02004813',
        '4DN' => 'E02004813',
        '4DP' => 'E02004813',
        '4DQ' => 'E02004813',
        '4DR' => 'E02004810',
        '4DS' => 'E02004810',
        '4DT' => 'E02004813',
        '4DU' => 'E02004810',
        '4DW' => 'E02004813',
        '4DX' => 'E02004813',
        '4DY' => 'E02004813',
        '4DZ' => 'E02004813',
        '4EA' => 'E02004812',
        '4EB' => 'E02004812',
        '4ED' => 'E02004812',
        '4EE' => 'E02004813',
        '4EF' => 'E02004812',
        '4EG' => 'E02004812',
        '4EH' => 'E02004810',
        '4EJ' => 'E02004813',
        '4EL' => 'E02004812',
        '4EN' => 'E02004813',
        '4EP' => 'E02004813',
        '4EQ' => 'E02004812',
        '4ER' => 'E02004813',
        '4ES' => 'E02004812',
        '4ET' => 'E02004812',
        '4EU' => 'E02004813',
        '4EW' => 'E02004813',
        '4EX' => 'E02004813',
        '4EY' => 'E02004812',
        '4EZ' => 'E02004812',
        '4FA' => 'E02004810',
        '4FB' => 'E02004812',
        '4FD' => 'E02004809',
        '4FE' => 'E02004810',
        '4FF' => 'E02004810',
        '4FG' => 'E02004810',
        '4FH' => 'E02004810',
        '4FJ' => 'E02004809',
        '4FL' => 'E02004810',
        '4FN' => 'E02004810',
        '4FP' => 'E02004809',
        '4FQ' => 'E02004810',
        '4FR' => 'E02004810',
        '4FS' => 'E02004812',
        '4FT' => 'E02004813',
        '4FU' => 'E02004809',
        '4FW' => 'E02004810',
        '4FX' => 'E02004809',
        '4FY' => 'E02004810',
        '4FZ' => 'E02004809',
        '4GA' => 'E02004810',
        '4GB' => 'E02004810',
        '4GD' => 'E02004810',
        '4GE' => 'E02004810',
        '4GF' => 'E02004809',
        '4GG' => 'E02004809',
        '4GH' => 'E02004809',
        '4GJ' => 'E02004809',
        '4GL' => 'E02004809',
        '4GN' => 'E02004809',
        '4GP' => 'E02004809',
        '4GQ' => 'E02004809',
        '4GR' => 'E02004809',
        '4GS' => 'E02004809',
        '4GT' => 'E02004809',
        '4GU' => 'E02004809',
        '4GW' => 'E02004809',
        '4GX' => 'E02004809',
        '4GY' => 'E02004809',
        '4GZ' => 'E02004809',
        '4HA' => 'E02004813',
        '4HB' => 'E02004810',
        '4HD' => 'E02004813',
        '4HE' => 'E02004810',
        '4HF' => 'E02004810',
        '4HG' => 'E02004812',
        '4HH' => 'E02004812',
        '4HJ' => 'E02004812',
        '4HL' => 'E02004812',
        '4HN' => 'E02004812',
        '4HP' => 'E02004812',
        '4HQ' => 'E02004812',
        '4HR' => 'E02004812',
        '4HS' => 'E02004812',
        '4HT' => 'E02004812',
        '4HU' => 'E02004812',
        '4HW' => 'E02004812',
        '4HX' => 'E02004812',
        '4HY' => 'E02004812',
        '4HZ' => 'E02004812',
        '4JA' => 'E02004812',
        '4JB' => 'E02004812',
        '4JD' => 'E02004812',
        '4JE' => 'E02004812',
        '4JF' => 'E02004810',
        '4JG' => 'E02004812',
        '4JH' => 'E02004812',
        '4JJ' => 'E02004812',
        '4JL' => 'E02004812',
        '4JN' => 'E02004812',
        '4JP' => 'E02004812',
        '4JQ' => 'E02004810',
        '4JR' => 'E02004812',
        '4JS' => 'E02004810',
        '4JT' => 'E02004810',
        '4JU' => 'E02004810',
        '4JW' => 'E02004812',
        '4JX' => 'E02004812',
        '4JY' => 'E02004812',
        '4JZ' => 'E02004809',
        '4LA' => 'E02004812',
        '4LB' => 'E02004812',
        '4LD' => 'E02004812',
        '4LE' => 'E02004812',
        '4LF' => 'E02004812',
        '4LG' => 'E02004812',
        '4LH' => 'E02004812',
        '4LJ' => 'E02004812',
        '4LL' => 'E02004810',
        '4LN' => 'E02004810',
        '4LP' => 'E02004810',
        '4LQ' => 'E02004812',
        '4LR' => 'E02004810',
        '4LS' => 'E02004812',
        '4LT' => 'E02004810',
        '4LU' => 'E02004810',
        '4LW' => 'E02004810',
        '4LX' => 'E02004810',
        '4LY' => 'E02004810',
        '4LZ' => 'E02004810',
        '4NA' => 'E02004810',
        '4NB' => 'E02004812',
        '4ND' => 'E02004810',
        '4NE' => 'E02004810',
        '4NF' => 'E02004812',
        '4NG' => 'E02004810',
        '4NH' => 'E02004810',
        '4NJ' => 'E02004810',
        '4NL' => 'E02004810',
        '4NN' => 'E02004813',
        '4NP' => 'E02004810',
        '4NQ' => 'E02004810',
        '4NR' => 'E02004810',
        '4NS' => 'E02004810',
        '4NT' => 'E02004810',
        '4NU' => 'E02004810',
        '4NW' => 'E02004810',
        '4NX' => 'E02004810',
        '4NY' => 'E02004810',
        '4NZ' => 'E02004810',
        '4PA' => 'E02004810',
        '4PB' => 'E02004810',
        '4PD' => 'E02004810',
        '4PE' => 'E02004813',
        '4PF' => 'E02004810',
        '4PG' => 'E02004810',
        '4PH' => 'E02004810',
        '4PJ' => 'E02004810',
        '4PL' => 'E02004810',
        '4PN' => 'E02004810',
        '4PP' => 'E02004813',
        '4PQ' => 'E02004813',
        '4PR' => 'E02004810',
        '4PS' => 'E02004810',
        '4PT' => 'E02004810',
        '4PU' => 'E02004813',
        '4PW' => 'E02004810',
        '4PX' => 'E02004810',
        '4PY' => 'E02004813',
        '4PZ' => 'E02004813',
        '4QA' => 'E02004813',
        '4QB' => 'E02004813',
        '4QD' => 'E02004813',
        '4QE' => 'E02004813',
        '4QF' => 'E02004813',
        '4QG' => 'E02004813',
        '4QH' => 'E02004810',
        '4QJ' => 'E02004813',
        '4QL' => 'E02004813',
        '4QN' => 'E02004810',
        '4QP' => 'E02004810',
        '4QQ' => 'E02004813',
        '4QR' => 'E02004810',
        '4QS' => 'E02004810',
        '4QT' => 'E02004810',
        '4QU' => 'E02004813',
        '4QW' => 'E02004810',
        '4QX' => 'E02004813',
        '4QY' => 'E02004813',
        '4QZ' => 'E02004813',
        '4RA' => 'E02004813',
        '4RB' => 'E02004813',
        '4RD' => 'E02004810',
        '4RE' => 'E02004813',
        '4RF' => 'E02004813',
        '4RG' => 'E02004810',
        '4RH' => 'E02004813',
        '4RJ' => 'E02004810',
        '4RL' => 'E02004810',
        '4RN' => 'E02004810',
        '4RP' => 'E02004810',
        '4RQ' => 'E02004810',
        '4RR' => 'E02004810',
        '4RS' => 'E02004810',
        '4RT' => 'E02004810',
        '4RU' => 'E02004810',
        '4RW' => 'E02004810',
        '4RX' => 'E02004810',
        '4RY' => 'E02004810',
        '4RZ' => 'E02004810',
        '4SA' => 'E02004810',
        '4SB' => 'E02004810',
        '4SD' => 'E02004810',
        '4SE' => 'E02004810',
        '4SF' => 'E02004813',
        '4SG' => 'E02004810',
        '4SH' => 'E02004810',
        '4SJ' => 'E02004810',
        '4SL' => 'E02004809',
        '4SN' => 'E02004809',
        '4SP' => 'E02004810',
        '4SQ' => 'E02004810',
        '4SR' => 'E02004810',
        '4SS' => 'E02004810',
        '4ST' => 'E02004810',
        '4SU' => 'E02004810',
        '4SW' => 'E02004810',
        '4SX' => 'E02004810',
        '4SY' => 'E02004810',
        '4SZ' => 'E02004810',
        '4TA' => 'E02004810',
        '4TB' => 'E02004810',
        '4TD' => 'E02004810',
        '4TE' => 'E02004810',
        '4TF' => 'E02004810',
        '4TG' => 'E02004810',
        '4TH' => 'E02004810',
        '4TJ' => 'E02004810',
        '4TL' => 'E02004810',
        '4TN' => 'E02004810',
        '4TP' => 'E02004810',
        '4TQ' => 'E02004810',
        '4TR' => 'E02004810',
        '4TS' => 'E02004810',
        '4TT' => 'E02004810',
        '4TU' => 'E02004810',
        '4TW' => 'E02004810',
        '4TX' => 'E02004810',
        '4TY' => 'E02004810',
        '4TZ' => 'E02004810',
        '4UA' => 'E02004810',
        '4UB' => 'E02004810',
        '4UD' => 'E02004810',
        '4UE' => 'E02004810',
        '4UF' => 'E02004810',
        '4UG' => 'E02004810',
        '4UH' => 'E02004810',
        '4UJ' => 'E02004810',
        '4UL' => 'E02004810',
        '4UN' => 'E02004810',
        '4UP' => 'E02004810',
        '4UQ' => 'E02004810',
        '4UR' => 'E02004810',
        '4US' => 'E02004813',
        '4UT' => 'E02004810',
        '4UU' => 'E02004810',
        '4UW' => 'E02004810',
        '4UX' => 'E02004810',
        '4UY' => 'E02004810',
        '4UZ' => 'E02004810',
        '4WA' => 'E02004810',
        '4WB' => 'E02004809',
        '4WD' => 'E02004813',
        '4WE' => 'E02004810',
        '4WF' => 'E02004809',
        '4WG' => 'E02004809',
        '4WH' => 'E02004813',
        '4WJ' => 'E02004810',
        '4WL' => 'E02004809',
        '4WN' => 'E02004809',
        '4WP' => 'E02004813',
        '4WQ' => 'E02004813',
        '4WR' => 'E02004809',
        '4WS' => 'E02004809',
        '4WT' => 'E02004809',
        '4WU' => 'E02004809',
        '4WW' => 'E02004813',
        '4WX' => 'E02004813',
        '4WY' => 'E02004809',
        '4XA' => 'E02004810',
        '4XB' => 'E02004810',
        '4XD' => 'E02004810',
        '4XE' => 'E02004810',
        '4XF' => 'E02004810',
        '4XG' => 'E02004810',
        '4XH' => 'E02004810',
        '4XJ' => 'E02004809',
        '4XL' => 'E02004810',
        '4XN' => 'E02004810',
        '4XP' => 'E02004809',
        '4XQ' => 'E02004810',
        '4XR' => 'E02004810',
        '4XS' => 'E02004813',
        '4XT' => 'E02004809',
        '4XU' => 'E02004810',
        '4XW' => 'E02004809',
        '4XX' => 'E02004809',
        '4XY' => 'E02004810',
        '4XZ' => 'E02004809',
        '4YA' => 'E02004810',
        '4YB' => 'E02004809',
        '4YD' => 'E02004810',
        '4YE' => 'E02004810',
        '4YF' => 'E02004809',
        '4YG' => 'E02004809',
        '4YH' => 'E02004809',
        '4YJ' => 'E02004809',
        '4YL' => 'E02004809',
        '4YN' => 'E02004809',
        '4YP' => 'E02004809',
        '4YQ' => 'E02004809',
        '4YR' => 'E02004809',
        '4YS' => 'E02004813',
        '4YT' => 'E02004809',
        '4YU' => 'E02004809',
        '4YW' => 'E02004813',
        '4YX' => 'E02004809',
        '4YY' => 'E02004813',
        '4YZ' => 'E02004810',
        '4ZD' => 'E02004810',
        '4ZF' => 'E02004810',
        '5AA' => 'E02006347',
        '5AB' => 'E02006347',
        '5AD' => 'E02006347',
        '5AE' => 'E02004809',
        '5AF' => 'E02006347',
        '5AG' => 'E02006347',
        '5AH' => 'E02006347',
        '5AJ' => 'E02006347',
        '5AL' => 'E02006347',
        '5AN' => 'E02006347',
        '5AP' => 'E02006347',
        '5AQ' => 'E02006347',
        '5AR' => 'E02006347',
        '5AS' => 'E02006347',
        '5AT' => 'E02006347',
        '5AU' => 'E02006347',
        '5AW' => 'E02006347',
        '5AX' => 'E02006347',
        '5AY' => 'E02006347',
        '5AZ' => 'E02006347',
        '5BA' => 'E02006347',
        '5BB' => 'E02006347',
        '5BD' => 'E02006353',
        '5BE' => 'E02006353',
        '5BF' => 'E02004809',
        '5BG' => 'E02006353',
        '5BH' => 'E02006353',
        '5BJ' => 'E02006353',
        '5BL' => 'E02006353',
        '5BN' => 'E02006353',
        '5BP' => 'E02006353',
        '5BQ' => 'E02006353',
        '5BS' => 'E02006353',
        '5BT' => 'E02006353',
        '5BU' => 'E02006353',
        '5BW' => 'E02006353',
        '5BX' => 'E02006353',
        '5BY' => 'E02006353',
        '5BZ' => 'E02006353',
        '5DA' => 'E02006353',
        '5DB' => 'E02006353',
        '5DD' => 'E02006347',
        '5DE' => 'E02006353',
        '5DF' => 'E02006347',
        '5DG' => 'E02006347',
        '5DH' => 'E02006353',
        '5DJ' => 'E02006347',
        '5DL' => 'E02006347',
        '5DN' => 'E02006353',
        '5DP' => 'E02006353',
        '5DQ' => 'E02006347',
        '5DR' => 'E02006347',
        '5DS' => 'E02006347',
        '5DT' => 'E02006347',
        '5DU' => 'E02006347',
        '5DW' => 'E02006347',
        '5DX' => 'E02006347',
        '5DY' => 'E02006347',
        '5DZ' => 'E02006347',
        '5EA' => 'E02006347',
        '5EB' => 'E02006347',
        '5ED' => 'E02006347',
        '5EE' => 'E02006347',
        '5EF' => 'E02006347',
        '5EG' => 'E02006347',
        '5EH' => 'E02006347',
        '5EJ' => 'E02006347',
        '5EL' => 'E02006347',
        '5EN' => 'E02006347',
        '5EP' => 'E02006347',
        '5EQ' => 'E02006347',
        '5ER' => 'E02006347',
        '5ES' => 'E02006347',
        '5ET' => 'E02006347',
        '5EU' => 'E02006347',
        '5EW' => 'E02006347',
        '5EX' => 'E02006353',
        '5EY' => 'E02006347',
        '5EZ' => 'E02006347',
        '5FA' => 'E02006347',
        '5FB' => 'E02006347',
        '5FD' => 'E02006347',
        '5FE' => 'E02006347',
        '5GN' => 'E02006347',
        '5HA' => 'E02006347',
        '5HB' => 'E02006353',
        '5HD' => 'E02006353',
        '5HE' => 'E02006353',
        '5HF' => 'E02006353',
        '5HG' => 'E02006347',
        '5HH' => 'E02006347',
        '5HJ' => 'E02006347',
        '5HL' => 'E02006347',
        '5HN' => 'E02006347',
        '5HP' => 'E02006347',
        '5HR' => 'E02006347',
        '5HS' => 'E02006347',
        '5HT' => 'E02006347',
        '5HU' => 'E02006347',
        '5HW' => 'E02006347',
        '5HX' => 'E02006347',
        '5HY' => 'E02006347',
        '5HZ' => 'E02006347',
        '5JA' => 'E02006347',
        '5JB' => 'E02006347',
        '5JD' => 'E02006347',
        '5JE' => 'E02006347',
        '5JF' => 'E02006347',
        '5JG' => 'E02006347',
        '5JH' => 'E02006347',
        '5JJ' => 'E02006347',
        '5JL' => 'E02006347',
        '5JN' => 'E02006347',
        '5JP' => 'E02006347',
        '5JQ' => 'E02006347',
        '5JR' => 'E02006347',
        '5JS' => 'E02006347',
        '5JT' => 'E02006347',
        '5JU' => 'E02006347',
        '5JW' => 'E02006347',
        '5JX' => 'E02006347',
        '5JY' => 'E02006347',
        '5JZ' => 'E02006347',
        '5LA' => 'E02006347',
        '5LB' => 'E02006347',
        '5LD' => 'E02006347',
        '5LE' => 'E02006347',
        '5LF' => 'E02006347',
        '5LG' => 'E02006347',
        '5LH' => 'E02006347',
        '5LJ' => 'E02006347',
        '5LL' => 'E02006347',
        '5LN' => 'E02006347',
        '5LP' => 'E02006347',
        '5LQ' => 'E02006347',
        '5LR' => 'E02006347',
        '5LS' => 'E02006347',
        '5LT' => 'E02006347',
        '5LU' => 'E02006347',
        '5LW' => 'E02006347',
        '5LX' => 'E02006347',
        '5LY' => 'E02006347',
        '5LZ' => 'E02006347',
        '5NA' => 'E02006347',
        '5NB' => 'E02006347',
        '5ND' => 'E02006347',
        '5NE' => 'E02006347',
        '5NF' => 'E02006347',
        '5NG' => 'E02006347',
        '5NH' => 'E02006347',
        '5NJ' => 'E02006347',
        '5NL' => 'E02006347',
        '5NN' => 'E02006347',
        '5NP' => 'E02006347',
        '5NQ' => 'E02006347',
        '5NR' => 'E02006347',
        '5NS' => 'E02006347',
        '5NT' => 'E02006347',
        '5NU' => 'E02006347',
        '5NW' => 'E02006347',
        '5NX' => 'E02006347',
        '5NY' => 'E02006347',
        '5NZ' => 'E02006347',
        '5PA' => 'E02006347',
        '5PB' => 'E02006347',
        '5PD' => 'E02006347',
        '5PE' => 'E02006347',
        '5PF' => 'E02006347',
        '5PG' => 'E02006347',
        '5PH' => 'E02006347',
        '5PJ' => 'E02006347',
        '5PL' => 'E02006347',
        '5PN' => 'E02006347',
        '5PP' => 'E02006347',
        '5PQ' => 'E02006347',
        '5PR' => 'E02006347',
        '5PS' => 'E02006347',
        '5PT' => 'E02006347',
        '5PU' => 'E02006347',
        '5PW' => 'E02006347',
        '5PX' => 'E02006347',
        '5PY' => 'E02006347',
        '5PZ' => 'E02006347',
        '5QA' => 'E02006347',
        '5QB' => 'E02006347',
        '5QD' => 'E02006347',
        '5QE' => 'E02006347',
        '5QF' => 'E02006347',
        '5QG' => 'E02006347',
        '5QH' => 'E02006347',
        '5QJ' => 'E02006347',
        '5QL' => 'E02006347',
        '5QN' => 'E02006347',
        '5QP' => 'E02006347',
        '5QQ' => 'E02006347',
        '5QR' => 'E02006347',
        '5QS' => 'E02006347',
        '5QT' => 'E02006347',
        '5QU' => 'E02006347',
        '5QW' => 'E02006347',
        '5QX' => 'E02006347',
        '5QY' => 'E02006347',
        '5QZ' => 'E02006347',
        '5RA' => 'E02006347',
        '5RB' => 'E02006347',
        '5RD' => 'E02006347',
        '5RE' => 'E02006347',
        '5RF' => 'E02006347',
        '5RG' => 'E02006347',
        '5RH' => 'E02006427',
        '5RJ' => 'E02006427',
        '5RL' => 'E02006427',
        '5RN' => 'E02006427',
        '5RP' => 'E02006347',
        '5RQ' => 'E02006347',
        '5RR' => 'E02006347',
        '5RS' => 'E02006347',
        '5RT' => 'E02006347',
        '5SA' => 'E02006347',
        '5SB' => 'E02006347',
        '5SD' => 'E02006347',
        '5SE' => 'E02006347',
        '5SF' => 'E02006347',
        '5SG' => 'E02006347',
        '5SH' => 'E02006347',
        '5SJ' => 'E02006347',
        '5SL' => 'E02006347',
        '5SN' => 'E02006347',
        '5SP' => 'E02006347',
        '5SQ' => 'E02006347',
        '5SR' => 'E02006347',
        '5SS' => 'E02006347',
        '5ST' => 'E02006347',
        '5SU' => 'E02006347',
        '5SW' => 'E02006347',
        '5SX' => 'E02006347',
        '5WA' => 'E02006347',
        '5WB' => 'E02006347',
        '5WD' => 'E02006347',
        '5WG' => 'E02004809',
        '5WQ' => 'E02006347',
        '5WX' => 'E02004809',
        '5WY' => 'E02004809',
        '5WZ' => 'E02004809',
        '5XA' => 'E02006347',
        '5XL' => 'E02004809',
        '5XN' => 'E02004809',
        '5XP' => 'E02006347',
        '5XQ' => 'E02004809',
        '5XR' => 'E02004809',
        '5XS' => 'E02004809',
        '5XU' => 'E02004809',
        '5XW' => 'E02004809',
        '5XX' => 'E02006347',
        '5XY' => 'E02006347',
        '5XZ' => 'E02004809',
        '5YA' => 'E02004809',
        '5YB' => 'E02006347',
        '5YD' => 'E02004809',
        '5YE' => 'E02006347',
        '5YF' => 'E02006347',
        '5YG' => 'E02004809',
        '5YH' => 'E02006347',
        '5YJ' => 'E02006347',
        '5YL' => 'E02004809',
        '5YN' => 'E02006347',
        '5YP' => 'E02004809',
        '5YQ' => 'E02004809',
        '5YR' => 'E02006347',
        '5YS' => 'E02006347',
        '5YT' => 'E02006347',
        '5YU' => 'E02004809',
        '5YW' => 'E02006347',
        '5YX' => 'E02006347',
        '5YY' => 'E02006347',
        '5YZ' => 'E02006347',
        '5ZN' => 'E02004809',
        '5ZQ' => 'E02004809',
        '5ZR' => 'E02004809',
        '5ZU' => 'E02004809',
        '5ZX' => 'E02004809',
        '6AA' => 'E02006353',
        '6AB' => 'E02006353',
        '6AD' => 'E02006353',
        '6AE' => 'E02006353',
        '6AF' => 'E02006353',
        '6AG' => 'E02006353',
        '6AH' => 'E02006353',
        '6AJ' => 'E02006353',
        '6AL' => 'E02006353',
        '6AN' => 'E02006353',
        '6AP' => 'E02006353',
        '6AQ' => 'E02006353',
        '6AR' => 'E02006353',
        '6AS' => 'E02006353',
        '6AT' => 'E02006353',
        '6AU' => 'E02006353',
        '6AW' => 'E02006353',
        '6AX' => 'E02006353',
        '6AY' => 'E02006353',
        '6AZ' => 'E02006353',
        '6BA' => 'E02006353',
        '6BB' => 'E02006353',
        '6BD' => 'E02004809',
        '6BE' => 'E02006353',
        '6BF' => 'E02004809',
        '6BG' => 'E02006353',
        '6BH' => 'E02006353',
        '6BJ' => 'E02006353',
        '6BL' => 'E02006345',
        '6BN' => 'E02006353',
        '6BP' => 'E02004809',
        '6BQ' => 'E02006353',
        '6BS' => 'E02006353',
        '6BT' => 'E02006353',
        '6BU' => 'E02006353',
        '6BW' => 'E02006353',
        '6BX' => 'E02006353',
        '6BY' => 'E02006353',
        '6BZ' => 'E02006353',
        '6DA' => 'E02006353',
        '6DB' => 'E02006353',
        '6DD' => 'E02006345',
        '6DE' => 'E02006345',
        '6DF' => 'E02006345',
        '6DG' => 'E02006345',
        '6DH' => 'E02006345',
        '6DJ' => 'E02006345',
        '6DL' => 'E02006345',
        '6DN' => 'E02006345',
        '6DP' => 'E02006353',
        '6DQ' => 'E02006345',
        '6DR' => 'E02006353',
        '6DS' => 'E02006353',
        '6DT' => 'E02006345',
        '6DU' => 'E02006345',
        '6DW' => 'E02006345',
        '6DX' => 'E02006345',
        '6DY' => 'E02006345',
        '6DZ' => 'E02006345',
        '6EA' => 'E02006345',
        '6EB' => 'E02006345',
        '6ED' => 'E02006345',
        '6EE' => 'E02006345',
        '6EF' => 'E02006345',
        '6EG' => 'E02006345',
        '6EH' => 'E02006345',
        '6EJ' => 'E02006345',
        '6EL' => 'E02006353',
        '6EN' => 'E02006353',
        '6EP' => 'E02006357',
        '6EQ' => 'E02006345',
        '6ER' => 'E02006357',
        '6ES' => 'E02006357',
        '6ET' => 'E02006357',
        '6EU' => 'E02006357',
        '6EW' => 'E02006353',
        '6EX' => 'E02006357',
        '6EY' => 'E02006357',
        '6EZ' => 'E02006357',
        '6FA' => 'E02006357',
        '6FE' => 'E02006357',
        '6FF' => 'E02006357',
        '6FH' => 'E02006357',
        '6FJ' => 'E02006357',
        '6FL' => 'E02006357',
        '6FN' => 'E02006357',
        '6FP' => 'E02006357',
        '6FQ' => 'E02006357',
        '6FR' => 'E02006357',
        '6GW' => 'E02006357',
        '6GZ' => 'E02006357',
        '6HA' => 'E02006357',
        '6HB' => 'E02006357',
        '6HD' => 'E02006357',
        '6HE' => 'E02006357',
        '6HF' => 'E02006357',
        '6HG' => 'E02006357',
        '6HH' => 'E02006357',
        '6HJ' => 'E02006357',
        '6HL' => 'E02006357',
        '6HN' => 'E02006357',
        '6HP' => 'E02006357',
        '6HQ' => 'E02006357',
        '6HR' => 'E02006357',
        '6HS' => 'E02006357',
        '6HT' => 'E02006357',
        '6HU' => 'E02006357',
        '6HW' => 'E02006357',
        '6HX' => 'E02006357',
        '6HY' => 'E02006357',
        '6HZ' => 'E02006357',
        '6JA' => 'E02006357',
        '6JB' => 'E02006357',
        '6JD' => 'E02006357',
        '6JE' => 'E02006357',
        '6JF' => 'E02006357',
        '6JG' => 'E02006357',
        '6JH' => 'E02006357',
        '6JJ' => 'E02006357',
        '6JL' => 'E02006353',
        '6JN' => 'E02006357',
        '6JP' => 'E02006353',
        '6JQ' => 'E02006357',
        '6JR' => 'E02006357',
        '6JS' => 'E02006357',
        '6JT' => 'E02006357',
        '6JU' => 'E02006357',
        '6JW' => 'E02006357',
        '6JX' => 'E02006353',
        '6JY' => 'E02004809',
        '6JZ' => 'E02006353',
        '6LA' => 'E02006353',
        '6LB' => 'E02006357',
        '6LD' => 'E02006353',
        '6LE' => 'E02006357',
        '6LF' => 'E02006353',
        '6LG' => 'E02006353',
        '6LH' => 'E02006357',
        '6LJ' => 'E02006353',
        '6LL' => 'E02006357',
        '6LN' => 'E02006357',
        '6LP' => 'E02006357',
        '6LQ' => 'E02006353',
        '6LR' => 'E02006353',
        '6LS' => 'E02006357',
        '6LT' => 'E02006357',
        '6LU' => 'E02006357',
        '6LW' => 'E02006357',
        '6LX' => 'E02006357',
        '6LY' => 'E02006357',
        '6LZ' => 'E02006357',
        '6NA' => 'E02006353',
        '6NB' => 'E02006353',
        '6ND' => 'E02006357',
        '6NE' => 'E02006353',
        '6NF' => 'E02006357',
        '6NG' => 'E02006357',
        '6NH' => 'E02006357',
        '6NJ' => 'E02006357',
        '6NL' => 'E02006357',
        '6NN' => 'E02006357',
        '6NP' => 'E02006357',
        '6NQ' => 'E02006357',
        '6NR' => 'E02006357',
        '6NS' => 'E02006357',
        '6NT' => 'E02006357',
        '6NU' => 'E02006357',
        '6NW' => 'E02006357',
        '6NX' => 'E02006357',
        '6NY' => 'E02006357',
        '6NZ' => 'E02006357',
        '6PA' => 'E02006353',
        '6PB' => 'E02006353',
        '6PD' => 'E02006353',
        '6PE' => 'E02006353',
        '6PF' => 'E02006353',
        '6PG' => 'E02006353',
        '6PH' => 'E02006353',
        '6PJ' => 'E02006353',
        '6PL' => 'E02006353',
        '6PN' => 'E02006353',
        '6PP' => 'E02006353',
        '6PQ' => 'E02006353',
        '6PR' => 'E02006353',
        '6PS' => 'E02006353',
        '6PT' => 'E02006353',
        '6PU' => 'E02006353',
        '6PW' => 'E02006353',
        '6PX' => 'E02006353',
        '6PY' => 'E02006353',
        '6PZ' => 'E02006353',
        '6QA' => 'E02006357',
        '6QB' => 'E02006357',
        '6QD' => 'E02006357',
        '6QE' => 'E02006357',
        '6QF' => 'E02006357',
        '6QG' => 'E02006357',
        '6QH' => 'E02006357',
        '6QJ' => 'E02006357',
        '6QL' => 'E02006353',
        '6QN' => 'E02006353',
        '6QP' => 'E02006353',
        '6QR' => 'E02006357',
        '6QS' => 'E02006357',
        '6QT' => 'E02006353',
        '6QU' => 'E02006353',
        '6QW' => 'E02006353',
        '6QX' => 'E02006353',
        '6QY' => 'E02006353',
        '6QZ' => 'E02006353',
        '6RA' => 'E02006353',
        '6RB' => 'E02006353',
        '6RD' => 'E02006353',
        '6RE' => 'E02006353',
        '6RF' => 'E02006353',
        '6RG' => 'E02006353',
        '6RH' => 'E02006353',
        '6RJ' => 'E02006353',
        '6RL' => 'E02006353',
        '6RN' => 'E02006353',
        '6RP' => 'E02006353',
        '6RQ' => 'E02006353',
        '6RR' => 'E02006353',
        '6RS' => 'E02006353',
        '6RT' => 'E02006353',
        '6RU' => 'E02006353',
        '6RW' => 'E02006353',
        '6RX' => 'E02006353',
        '6RY' => 'E02006353',
        '6RZ' => 'E02006353',
        '6SA' => 'E02006353',
        '6SB' => 'E02006353',
        '6SD' => 'E02006353',
        '6SG' => 'E02006353',
        '6SH' => 'E02006353',
        '6SJ' => 'E02006353',
        '6SL' => 'E02006353',
        '6SN' => 'E02006353',
        '6SP' => 'E02006353',
        '6SQ' => 'E02006353',
        '6SR' => 'E02006353',
        '6SS' => 'E02006353',
        '6ST' => 'E02006353',
        '6SU' => 'E02006353',
        '6SW' => 'E02006353',
        '6SX' => 'E02006353',
        '6SY' => 'E02006353',
        '6SZ' => 'E02006353',
        '6TA' => 'E02006353',
        '6TB' => 'E02006353',
        '6TD' => 'E02006353',
        '6TH' => 'E02006357',
        '6TJ' => 'E02006357',
        '6TL' => 'E02004809',
        '6WA' => 'E02004809',
        '6WY' => 'E02004809',
        '6WZ' => 'E02004809',
        '6XJ' => 'E02004809',
        '6XN' => 'E02004809',
        '6XQ' => 'E02004809',
        '6XZ' => 'E02004809',
        '6YE' => 'E02004809',
        '6YF' => 'E02004809',
        '6YG' => 'E02006353',
        '6YH' => 'E02004809',
        '6YJ' => 'E02004809',
        '6YN' => 'E02006357',
        '6YP' => 'E02006353',
        '6YQ' => 'E02004809',
        '6YR' => 'E02006353',
        '6YS' => 'E02006357',
        '6YT' => 'E02006357',
        '6YU' => 'E02006357',
        '6YW' => 'E02004809',
        '6YX' => 'E02004809',
        '6YY' => 'E02006357',
        '6ZN' => 'E02004809',
        '6ZQ' => 'E02004809',
        '6ZR' => 'E02004809',
        '6ZX' => 'E02004809',
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