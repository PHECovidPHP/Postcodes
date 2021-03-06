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
final class YO16
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '4AA' => 'E02002686',
        '4AB' => 'E02002686',
        '4AD' => 'E02002686',
        '4AE' => 'E02002686',
        '4AF' => 'E02002686',
        '4AG' => 'E02002686',
        '4AH' => 'E02002686',
        '4AJ' => 'E02002686',
        '4AL' => 'E02002686',
        '4AN' => 'E02002686',
        '4AP' => 'E02002686',
        '4AQ' => 'E02002686',
        '4AR' => 'E02002686',
        '4AS' => 'E02002686',
        '4AT' => 'E02002686',
        '4AU' => 'E02002686',
        '4AW' => 'E02002686',
        '4AX' => 'E02002686',
        '4AY' => 'E02002686',
        '4AZ' => 'E02002686',
        '4BA' => 'E02002686',
        '4BB' => 'E02002686',
        '4BD' => 'E02002686',
        '4BE' => 'E02002686',
        '4BF' => 'E02002687',
        '4BG' => 'E02002686',
        '4BH' => 'E02002686',
        '4BJ' => 'E02002686',
        '4BL' => 'E02002686',
        '4BN' => 'E02002686',
        '4BP' => 'E02002686',
        '4BQ' => 'E02002686',
        '4BS' => 'E02002686',
        '4BT' => 'E02002686',
        '4BW' => 'E02002686',
        '4BX' => 'E02002686',
        '4BY' => 'E02002689',
        '4DA' => 'E02002686',
        '4DB' => 'E02002686',
        '4DD' => 'E02002686',
        '4DE' => 'E02002686',
        '4DF' => 'E02002686',
        '4DG' => 'E02002686',
        '4DH' => 'E02002686',
        '4DJ' => 'E02002687',
        '4DL' => 'E02002687',
        '4DN' => 'E02002687',
        '4DP' => 'E02002687',
        '4DQ' => 'E02002686',
        '4DR' => 'E02002687',
        '4DS' => 'E02002687',
        '4DT' => 'E02002687',
        '4DU' => 'E02002687',
        '4DW' => 'E02002687',
        '4DX' => 'E02002687',
        '4DY' => 'E02002687',
        '4DZ' => 'E02002687',
        '4EA' => 'E02002687',
        '4EB' => 'E02002687',
        '4ED' => 'E02002687',
        '4EE' => 'E02002687',
        '4EF' => 'E02002685',
        '4EG' => 'E02002685',
        '4EH' => 'E02002687',
        '4EJ' => 'E02002687',
        '4EL' => 'E02002687',
        '4EN' => 'E02002685',
        '4EP' => 'E02002687',
        '4EQ' => 'E02002687',
        '4ER' => 'E02002687',
        '4ES' => 'E02002687',
        '4ET' => 'E02002685',
        '4EU' => 'E02002685',
        '4EW' => 'E02002687',
        '4EX' => 'E02002686',
        '4EY' => 'E02002686',
        '4EZ' => 'E02002686',
        '4FA' => 'E02002686',
        '4FB' => 'E02002686',
        '4FD' => 'E02002684',
        '4FE' => 'E02002686',
        '4GD' => 'E02002687',
        '4GE' => 'E02002687',
        '4GF' => 'E02002686',
        '4GG' => 'E02002687',
        '4GH' => 'E02002687',
        '4GJ' => 'E02002687',
        '4GL' => 'E02002687',
        '4GN' => 'E02002687',
        '4GP' => 'E02002687',
        '4GQ' => 'E02002687',
        '4GR' => 'E02002686',
        '4GS' => 'E02002686',
        '4GT' => 'E02002687',
        '4GU' => 'E02002687',
        '4GW' => 'E02002686',
        '4GX' => 'E02002686',
        '4GY' => 'E02002686',
        '4GZ' => 'E02002686',
        '4HA' => 'E02002686',
        '4HB' => 'E02002686',
        '4HD' => 'E02002686',
        '4HE' => 'E02002686',
        '4HF' => 'E02002686',
        '4HG' => 'E02002685',
        '4HH' => 'E02002687',
        '4HJ' => 'E02002687',
        '4HL' => 'E02002687',
        '4HN' => 'E02002687',
        '4HP' => 'E02002687',
        '4HQ' => 'E02002687',
        '4HR' => 'E02002685',
        '4HS' => 'E02002685',
        '4HT' => 'E02002685',
        '4HU' => 'E02002687',
        '4HW' => 'E02002687',
        '4HX' => 'E02002687',
        '4HY' => 'E02002687',
        '4HZ' => 'E02002687',
        '4JA' => 'E02002687',
        '4JB' => 'E02002687',
        '4JD' => 'E02002687',
        '4JE' => 'E02002687',
        '4JF' => 'E02002687',
        '4JG' => 'E02002687',
        '4JH' => 'E02002687',
        '4JJ' => 'E02002687',
        '4JL' => 'E02002687',
        '4JN' => 'E02002687',
        '4JP' => 'E02002687',
        '4JQ' => 'E02002687',
        '4JR' => 'E02002687',
        '4JS' => 'E02002687',
        '4JT' => 'E02002687',
        '4JU' => 'E02002687',
        '4JW' => 'E02002687',
        '4JX' => 'E02002687',
        '4JY' => 'E02002687',
        '4JZ' => 'E02002687',
        '4LA' => 'E02002687',
        '4LB' => 'E02002687',
        '4LD' => 'E02002687',
        '4LE' => 'E02002687',
        '4LF' => 'E02002687',
        '4LG' => 'E02002687',
        '4LH' => 'E02002687',
        '4LJ' => 'E02002687',
        '4LN' => 'E02002687',
        '4LP' => 'E02002687',
        '4LQ' => 'E02002687',
        '4LR' => 'E02002687',
        '4LS' => 'E02002687',
        '4LT' => 'E02002687',
        '4LX' => 'E02002687',
        '4LY' => 'E02002687',
        '4LZ' => 'E02002687',
        '4NA' => 'E02002687',
        '4NB' => 'E02002687',
        '4ND' => 'E02002687',
        '4NE' => 'E02002687',
        '4NF' => 'E02002687',
        '4NG' => 'E02002687',
        '4NH' => 'E02002687',
        '4NJ' => 'E02002687',
        '4NL' => 'E02002686',
        '4NN' => 'E02002686',
        '4NP' => 'E02002686',
        '4NQ' => 'E02002687',
        '4NR' => 'E02002686',
        '4NS' => 'E02002686',
        '4NT' => 'E02002686',
        '4NU' => 'E02002687',
        '4NW' => 'E02002686',
        '4NX' => 'E02002686',
        '4PA' => 'E02002687',
        '4PB' => 'E02002687',
        '4PD' => 'E02002687',
        '4PE' => 'E02002687',
        '4PF' => 'E02002687',
        '4PG' => 'E02002686',
        '4PH' => 'E02002686',
        '4PJ' => 'E02002686',
        '4PL' => 'E02002686',
        '4PN' => 'E02002686',
        '4PP' => 'E02002686',
        '4PQ' => 'E02002686',
        '4PR' => 'E02002686',
        '4PS' => 'E02002686',
        '4PT' => 'E02002686',
        '4PU' => 'E02002686',
        '4PW' => 'E02002686',
        '4PX' => 'E02002686',
        '4PY' => 'E02002686',
        '4PZ' => 'E02002686',
        '4QA' => 'E02002686',
        '4QB' => 'E02002686',
        '4QD' => 'E02002686',
        '4QE' => 'E02002686',
        '4QF' => 'E02002686',
        '4QG' => 'E02002686',
        '4QH' => 'E02002686',
        '4QJ' => 'E02002686',
        '4QL' => 'E02002686',
        '4QN' => 'E02002684',
        '4QP' => 'E02002686',
        '4QQ' => 'E02002686',
        '4QR' => 'E02002684',
        '4QS' => 'E02002684',
        '4QT' => 'E02002684',
        '4QU' => 'E02002686',
        '4QW' => 'E02002686',
        '4QX' => 'E02002686',
        '4QY' => 'E02002686',
        '4QZ' => 'E02002686',
        '4RA' => 'E02002686',
        '4RB' => 'E02002686',
        '4RD' => 'E02002686',
        '4RE' => 'E02002686',
        '4RF' => 'E02002686',
        '4RG' => 'E02002686',
        '4RH' => 'E02002686',
        '4RJ' => 'E02002686',
        '4RL' => 'E02002686',
        '4RN' => 'E02002686',
        '4RP' => 'E02002686',
        '4RQ' => 'E02002686',
        '4RR' => 'E02002686',
        '4RS' => 'E02002686',
        '4RT' => 'E02002686',
        '4RU' => 'E02002686',
        '4RW' => 'E02002686',
        '4RX' => 'E02002686',
        '4RY' => 'E02002686',
        '4RZ' => 'E02002686',
        '4SD' => 'E02002688',
        '4SF' => 'E02002686',
        '4SG' => 'E02002686',
        '4SH' => 'E02002686',
        '4SJ' => 'E02002689',
        '4SL' => 'E02002688',
        '4SN' => 'E02002688',
        '4SP' => 'E02002686',
        '4SQ' => 'E02002686',
        '4SR' => 'E02002689',
        '4SS' => 'E02002686',
        '4ST' => 'E02002686',
        '4SU' => 'E02002689',
        '4SW' => 'E02002688',
        '4SX' => 'E02002686',
        '4SY' => 'E02002686',
        '4SZ' => 'E02002686',
        '4TA' => 'E02002686',
        '4TB' => 'E02002686',
        '4TD' => 'E02002686',
        '4TE' => 'E02002686',
        '4TF' => 'E02002686',
        '4TG' => 'E02002686',
        '4TH' => 'E02002686',
        '4TJ' => 'E02002686',
        '4TL' => 'E02002686',
        '4TN' => 'E02002686',
        '4TP' => 'E02002686',
        '4TQ' => 'E02002686',
        '4TR' => 'E02002686',
        '4TS' => 'E02002686',
        '4TU' => 'E02002686',
        '4TW' => 'E02002686',
        '4TX' => 'E02002686',
        '4UB' => 'E02002684',
        '4UD' => 'E02002684',
        '4UE' => 'E02002684',
        '4UH' => 'E02002686',
        '4UJ' => 'E02002689',
        '4UL' => 'E02002689',
        '4UN' => 'E02002689',
        '4UP' => 'E02002689',
        '4UR' => 'E02002689',
        '4UT' => 'E02002689',
        '4UU' => 'E02002689',
        '4UW' => 'E02002689',
        '4UX' => 'E02002689',
        '4UY' => 'E02002686',
        '4UZ' => 'E02002689',
        '4WA' => 'E02002687',
        '4WB' => 'E02002689',
        '4WD' => 'E02002689',
        '4WQ' => 'E02002687',
        '4WR' => 'E02002687',
        '4WS' => 'E02002687',
        '4WT' => 'E02002687',
        '4WU' => 'E02002687',
        '4WW' => 'E02002687',
        '4WX' => 'E02002689',
        '4WY' => 'E02002689',
        '4WZ' => 'E02002689',
        '4XA' => 'E02002687',
        '4XB' => 'E02002687',
        '4XE' => 'E02002686',
        '4XF' => 'E02002684',
        '4XG' => 'E02002684',
        '4XH' => 'E02002684',
        '4XJ' => 'E02002684',
        '4XL' => 'E02002684',
        '4XN' => 'E02002684',
        '4XP' => 'E02002684',
        '4XQ' => 'E02002684',
        '4XR' => 'E02002684',
        '4XS' => 'E02002684',
        '4XT' => 'E02002684',
        '4XU' => 'E02002684',
        '4XW' => 'E02002684',
        '4XX' => 'E02002684',
        '4XY' => 'E02002684',
        '4XZ' => 'E02002684',
        '4YA' => 'E02002684',
        '4YB' => 'E02002684',
        '4YD' => 'E02002684',
        '4YE' => 'E02002684',
        '4YF' => 'E02002687',
        '4YG' => 'E02002687',
        '4YH' => 'E02002687',
        '4YJ' => 'E02002687',
        '4YL' => 'E02002686',
        '4YN' => 'E02002686',
        '4YY' => 'E02002687',
        '4ZS' => 'E02002687',
        '5AA' => 'E02002686',
        '5AB' => 'E02002686',
        '5AD' => 'E02002686',
        '5AE' => 'E02002686',
        '5AF' => 'E02002684',
        '5AG' => 'E02002684',
        '5AH' => 'E02002684',
        '5AJ' => 'E02002684',
        '5AL' => 'E02002684',
        '5AN' => 'E02002684',
        '5AP' => 'E02002684',
        '5AQ' => 'E02002684',
        '5AR' => 'E02002684',
        '5AS' => 'E02002684',
        '5AT' => 'E02002684',
        '5AU' => 'E02002684',
        '5AW' => 'E02002684',
        '5AX' => 'E02002684',
        '5AY' => 'E02002684',
        '5AZ' => 'E02002684',
        '5BA' => 'E02002686',
        '5BB' => 'E02002686',
        '5BD' => 'E02002686',
        '5BE' => 'E02002686',
        '5BF' => 'E02002686',
        '5BG' => 'E02002686',
        '5BH' => 'E02002684',
        '5BJ' => 'E02002686',
        '5BL' => 'E02002686',
        '5BN' => 'E02002686',
        '5BP' => 'E02002686',
        '5BQ' => 'E02002686',
        '5BR' => 'E02002686',
        '5BS' => 'E02002685',
        '5BT' => 'E02002686',
        '5BU' => 'E02002684',
        '5BW' => 'E02002686',
        '5BX' => 'E02002686',
        '5BY' => 'E02002686',
        '5BZ' => 'E02002685',
        '5DA' => 'E02002685',
        '5DB' => 'E02002685',
        '5DD' => 'E02002685',
        '5DE' => 'E02002685',
        '5DF' => 'E02002685',
        '5DG' => 'E02002685',
        '5DH' => 'E02002685',
        '5DJ' => 'E02002684',
        '5DL' => 'E02002684',
        '5DN' => 'E02002684',
        '5DP' => 'E02002686',
        '5DQ' => 'E02002685',
        '5DR' => 'E02002685',
        '5DS' => 'E02002685',
        '5DT' => 'E02002685',
        '5DU' => 'E02002685',
        '5DW' => 'E02002685',
        '5DX' => 'E02002685',
        '5DY' => 'E02002685',
        '5DZ' => 'E02002685',
        '5EA' => 'E02002685',
        '5EB' => 'E02002684',
        '5ED' => 'E02002684',
        '5EE' => 'E02002684',
        '5EF' => 'E02002685',
        '5EG' => 'E02002684',
        '5EH' => 'E02002684',
        '5EJ' => 'E02002684',
        '5EL' => 'E02002684',
        '5EN' => 'E02002684',
        '5EP' => 'E02002684',
        '5EQ' => 'E02002684',
        '5ER' => 'E02002684',
        '5ES' => 'E02002684',
        '5ET' => 'E02002684',
        '5EU' => 'E02002684',
        '5EW' => 'E02002684',
        '5EX' => 'E02002684',
        '5EY' => 'E02002684',
        '5EZ' => 'E02002684',
        '5FA' => 'E02002684',
        '5FB' => 'E02002684',
        '5FD' => 'E02002684',
        '5FF' => 'E02002684',
        '5FG' => 'E02002684',
        '5FH' => 'E02002684',
        '5FJ' => 'E02002684',
        '5FL' => 'E02002684',
        '5FN' => 'E02002684',
        '5FP' => 'E02002686',
        '5FQ' => 'E02002684',
        '5FR' => 'E02002684',
        '5FS' => 'E02002684',
        '5FW' => 'E02002684',
        '5FX' => 'E02002684',
        '5FY' => 'E02002684',
        '5FZ' => 'E02002684',
        '5GA' => 'E02002686',
        '5GB' => 'E02002686',
        '5GD' => 'E02002686',
        '5GE' => 'E02002684',
        '5GF' => 'E02002684',
        '5GG' => 'E02002684',
        '5GH' => 'E02002684',
        '5GJ' => 'E02002684',
        '5GL' => 'E02002684',
        '5GN' => 'E02002684',
        '5GP' => 'E02002684',
        '5GR' => 'E02002684',
        '5GS' => 'E02002684',
        '5GT' => 'E02002684',
        '5GU' => 'E02002684',
        '5GW' => 'E02002684',
        '5GX' => 'E02002684',
        '5GY' => 'E02002684',
        '5GZ' => 'E02002684',
        '5HA' => 'E02002684',
        '5HB' => 'E02002684',
        '5HD' => 'E02002684',
        '5HE' => 'E02002684',
        '5HF' => 'E02002684',
        '5HG' => 'E02002684',
        '5HH' => 'E02002684',
        '5HJ' => 'E02002684',
        '5HL' => 'E02002684',
        '5HN' => 'E02002684',
        '5HP' => 'E02002684',
        '5HQ' => 'E02002684',
        '5HR' => 'E02002684',
        '5HS' => 'E02002684',
        '5HT' => 'E02002684',
        '5HU' => 'E02002684',
        '5HW' => 'E02002684',
        '5HX' => 'E02002684',
        '5HY' => 'E02002684',
        '5HZ' => 'E02002684',
        '5JA' => 'E02002684',
        '5JB' => 'E02002687',
        '5JD' => 'E02002687',
        '5JE' => 'E02002685',
        '5JF' => 'E02002685',
        '5JG' => 'E02002685',
        '5JH' => 'E02002687',
        '5JJ' => 'E02002684',
        '5JP' => 'E02002687',
        '5JQ' => 'E02002685',
        '5JR' => 'E02002685',
        '5JS' => 'E02002685',
        '5JT' => 'E02002685',
        '5JU' => 'E02002686',
        '5JW' => 'E02002685',
        '5JX' => 'E02002686',
        '5JY' => 'E02002686',
        '5JZ' => 'E02002686',
        '5LA' => 'E02002685',
        '5LB' => 'E02002686',
        '5LD' => 'E02002686',
        '5LE' => 'E02002686',
        '5LF' => 'E02002685',
        '5LG' => 'E02002685',
        '5LH' => 'E02002685',
        '5LJ' => 'E02002685',
        '5LL' => 'E02002685',
        '5LN' => 'E02002687',
        '5LP' => 'E02002685',
        '5LQ' => 'E02002685',
        '5LR' => 'E02002685',
        '5LS' => 'E02002685',
        '5LT' => 'E02002685',
        '5LU' => 'E02002685',
        '5LW' => 'E02002685',
        '5LX' => 'E02002687',
        '5LY' => 'E02002685',
        '5LZ' => 'E02002686',
        '5NA' => 'E02002686',
        '5NB' => 'E02002686',
        '5ND' => 'E02002685',
        '5NE' => 'E02002687',
        '5NF' => 'E02002686',
        '5NG' => 'E02002686',
        '5NH' => 'E02002686',
        '5NJ' => 'E02002687',
        '5NL' => 'E02002685',
        '5NN' => 'E02002685',
        '5NP' => 'E02002686',
        '5NQ' => 'E02002686',
        '5NR' => 'E02002686',
        '5NS' => 'E02002684',
        '5NT' => 'E02002684',
        '5NU' => 'E02002684',
        '5NW' => 'E02002685',
        '5NX' => 'E02002684',
        '5NY' => 'E02002684',
        '5PA' => 'E02002684',
        '5PB' => 'E02002684',
        '5PD' => 'E02002686',
        '5PE' => 'E02002686',
        '5PF' => 'E02002686',
        '5PG' => 'E02002686',
        '5PH' => 'E02002686',
        '5PJ' => 'E02002686',
        '5PL' => 'E02002686',
        '5PN' => 'E02002686',
        '5PP' => 'E02002686',
        '5PQ' => 'E02002684',
        '5PR' => 'E02002684',
        '5PS' => 'E02002686',
        '5PT' => 'E02002685',
        '5PU' => 'E02002685',
        '5PW' => 'E02002686',
        '5PX' => 'E02002684',
        '5PY' => 'E02002684',
        '5PZ' => 'E02002684',
        '5QA' => 'E02002684',
        '5QB' => 'E02002684',
        '5QD' => 'E02002684',
        '5QE' => 'E02002684',
        '5QF' => 'E02002684',
        '5QG' => 'E02002686',
        '5QH' => 'E02002686',
        '5QJ' => 'E02002686',
        '5QL' => 'E02002686',
        '5QN' => 'E02002686',
        '5QP' => 'E02002684',
        '5QQ' => 'E02002686',
        '5QS' => 'E02002684',
        '5QT' => 'E02002685',
        '5QU' => 'E02002685',
        '5QW' => 'E02002686',
        '5QX' => 'E02002685',
        '5QY' => 'E02002685',
        '5QZ' => 'E02002685',
        '5RA' => 'E02002685',
        '5RB' => 'E02002685',
        '5RD' => 'E02002685',
        '5RE' => 'E02002685',
        '5RF' => 'E02002685',
        '5RG' => 'E02002685',
        '5RH' => 'E02002685',
        '5RJ' => 'E02002685',
        '5RL' => 'E02002685',
        '5RN' => 'E02002685',
        '5RQ' => 'E02002685',
        '5RW' => 'E02002685',
        '5RX' => 'E02002687',
        '5RY' => 'E02002685',
        '5RZ' => 'E02002685',
        '5SA' => 'E02002685',
        '5SB' => 'E02002685',
        '5SD' => 'E02002685',
        '5SE' => 'E02002685',
        '5SF' => 'E02002685',
        '5SG' => 'E02002685',
        '5SH' => 'E02002685',
        '5SJ' => 'E02002685',
        '5SL' => 'E02002685',
        '5SN' => 'E02002685',
        '5SP' => 'E02002685',
        '5SQ' => 'E02002685',
        '5SR' => 'E02002685',
        '5SS' => 'E02002685',
        '5ST' => 'E02002685',
        '5SU' => 'E02002685',
        '5SW' => 'E02002685',
        '5SX' => 'E02002685',
        '5SY' => 'E02002685',
        '5SZ' => 'E02002685',
        '5TA' => 'E02002685',
        '5TB' => 'E02002685',
        '5TD' => 'E02002685',
        '5TE' => 'E02002684',
        '5TF' => 'E02002684',
        '5TG' => 'E02002685',
        '5TH' => 'E02002685',
        '5TJ' => 'E02002685',
        '5TL' => 'E02002685',
        '5TN' => 'E02002685',
        '5TP' => 'E02002685',
        '5TQ' => 'E02002685',
        '5TR' => 'E02002685',
        '5TS' => 'E02002685',
        '5TT' => 'E02002685',
        '5TU' => 'E02002685',
        '5TW' => 'E02002685',
        '5TX' => 'E02002685',
        '5TY' => 'E02002685',
        '5TZ' => 'E02002685',
        '5UA' => 'E02002685',
        '5UB' => 'E02002684',
        '5UD' => 'E02002685',
        '5UE' => 'E02002685',
        '5UF' => 'E02002684',
        '5UG' => 'E02002685',
        '5UH' => 'E02002685',
        '5UJ' => 'E02002685',
        '5UL' => 'E02002685',
        '5UN' => 'E02002685',
        '5UP' => 'E02002685',
        '5UQ' => 'E02002685',
        '5UR' => 'E02002684',
        '5UT' => 'E02002685',
        '5UU' => 'E02002685',
        '5UW' => 'E02002684',
        '5UX' => 'E02002685',
        '5UY' => 'E02002685',
        '5UZ' => 'E02002685',
        '5WA' => 'E02002685',
        '5WZ' => 'E02002684',
        '5XA' => 'E02002684',
        '5XB' => 'E02002684',
        '5XD' => 'E02002684',
        '5XE' => 'E02002684',
        '5XF' => 'E02002684',
        '5XG' => 'E02002684',
        '5XH' => 'E02002684',
        '5XJ' => 'E02002684',
        '5XL' => 'E02002684',
        '5XN' => 'E02002684',
        '5XP' => 'E02002684',
        '5XQ' => 'E02002684',
        '5XR' => 'E02002684',
        '5XS' => 'E02002684',
        '5XT' => 'E02002684',
        '5XU' => 'E02002684',
        '5XW' => 'E02002684',
        '5XX' => 'E02002684',
        '5XY' => 'E02002684',
        '5XZ' => 'E02002684',
        '5YA' => 'E02002684',
        '5YB' => 'E02002684',
        '5YD' => 'E02002685',
        '5YE' => 'E02002684',
        '5YF' => 'E02002684',
        '5YG' => 'E02002684',
        '5YH' => 'E02002684',
        '5YJ' => 'E02002684',
        '5YL' => 'E02002684',
        '5YN' => 'E02002684',
        '5YP' => 'E02002684',
        '5YQ' => 'E02002684',
        '5YR' => 'E02002684',
        '5YS' => 'E02002684',
        '5YT' => 'E02002685',
        '5YU' => 'E02002684',
        '5YW' => 'E02002684',
        '5YX' => 'E02002685',
        '5YY' => 'E02002684',
        '5YZ' => 'E02002684',
        '5ZA' => 'E02002684',
        '5ZB' => 'E02002684',
        '5ZD' => 'E02002684',
        '5ZE' => 'E02002684',
        '5ZF' => 'E02002684',
        '5ZJ' => 'E02002684',
        '5ZL' => 'E02002684',
        '5ZN' => 'E02002684',
        '5ZP' => 'E02002684',
        '5ZQ' => 'E02002684',
        '5ZR' => 'E02002684',
        '5ZS' => 'E02002684',
        '5ZT' => 'E02002684',
        '5ZU' => 'E02002684',
        '5ZW' => 'E02002684',
        '5ZX' => 'E02002684',
        '5ZY' => 'E02002684',
        '5ZZ' => 'E02002684',
        '6AA' => 'E02002684',
        '6AB' => 'E02002684',
        '6AD' => 'E02002684',
        '6AE' => 'E02002684',
        '6BT' => 'E02002684',
        '6EB' => 'E02002684',
        '6ED' => 'E02002684',
        '6EL' => 'E02002684',
        '6EP' => 'E02002684',
        '6ER' => 'E02002684',
        '6ES' => 'E02002684',
        '6ET' => 'E02002684',
        '6EU' => 'E02002684',
        '6EX' => 'E02002684',
        '6EY' => 'E02002684',
        '6EZ' => 'E02002684',
        '6FA' => 'E02002684',
        '6FB' => 'E02002684',
        '6FD' => 'E02002684',
        '6FF' => 'E02002684',
        '6FG' => 'E02002684',
        '6FH' => 'E02002684',
        '6FJ' => 'E02002684',
        '6FL' => 'E02002684',
        '6FN' => 'E02002684',
        '6FQ' => 'E02002684',
        '6FR' => 'E02002684',
        '6FS' => 'E02002684',
        '6FW' => 'E02002684',
        '6FX' => 'E02002684',
        '6FY' => 'E02002684',
        '6FZ' => 'E02002684',
        '6GA' => 'E02002684',
        '6GB' => 'E02002684',
        '6GD' => 'E02002684',
        '6GE' => 'E02002684',
        '6GF' => 'E02002684',
        '6GG' => 'E02002684',
        '6GH' => 'E02002684',
        '6GJ' => 'E02002684',
        '6GL' => 'E02002684',
        '6GN' => 'E02002684',
        '6GP' => 'E02002684',
        '6GQ' => 'E02002684',
        '6GR' => 'E02002684',
        '6GS' => 'E02002684',
        '6GT' => 'E02002684',
        '6GU' => 'E02002684',
        '6GW' => 'E02002684',
        '6GX' => 'E02002684',
        '6GY' => 'E02002684',
        '6GZ' => 'E02002684',
        '6HA' => 'E02002684',
        '6HB' => 'E02002684',
        '6HD' => 'E02002684',
        '6HE' => 'E02002684',
        '6HF' => 'E02002684',
        '6HG' => 'E02002684',
        '6HH' => 'E02002684',
        '6HJ' => 'E02002684',
        '6HL' => 'E02002684',
        '6HN' => 'E02002684',
        '6HP' => 'E02002684',
        '6HQ' => 'E02002684',
        '6HR' => 'E02002684',
        '6HS' => 'E02002684',
        '6HT' => 'E02002684',
        '6HU' => 'E02002684',
        '6HW' => 'E02002684',
        '6HX' => 'E02002684',
        '6HY' => 'E02002684',
        '6HZ' => 'E02002684',
        '6JA' => 'E02002684',
        '6JJ' => 'E02002684',
        '6QT' => 'E02002685',
        '6QU' => 'E02002685',
        '6QX' => 'E02002685',
        '6QY' => 'E02002685',
        '6QZ' => 'E02002685',
        '6RA' => 'E02002685',
        '6RB' => 'E02002685',
        '6RD' => 'E02002685',
        '6RE' => 'E02002685',
        '6RF' => 'E02002685',
        '6RG' => 'E02002685',
        '6RH' => 'E02002685',
        '6RJ' => 'E02002685',
        '6RL' => 'E02002685',
        '6RN' => 'E02002685',
        '6RP' => 'E02002684',
        '6RQ' => 'E02002685',
        '6RR' => 'E02002684',
        '6RS' => 'E02002684',
        '6RT' => 'E02002684',
        '6RU' => 'E02002684',
        '6RW' => 'E02002685',
        '6RX' => 'E02002684',
        '6RY' => 'E02002684',
        '6RZ' => 'E02002684',
        '6SF' => 'E02002685',
        '6SZ' => 'E02002684',
        '6TA' => 'E02002685',
        '6TB' => 'E02002685',
        '6TD' => 'E02002685',
        '6TE' => 'E02002684',
        '6TF' => 'E02002684',
        '6TG' => 'E02002685',
        '6TH' => 'E02002685',
        '6TJ' => 'E02002685',
        '6TL' => 'E02002685',
        '6TN' => 'E02002685',
        '6TP' => 'E02002685',
        '6TQ' => 'E02002685',
        '6TR' => 'E02002685',
        '6TS' => 'E02002685',
        '6TT' => 'E02002685',
        '6TU' => 'E02002685',
        '6TW' => 'E02002685',
        '6TX' => 'E02002685',
        '6TY' => 'E02002685',
        '6TZ' => 'E02002685',
        '6UA' => 'E02002685',
        '6UB' => 'E02002684',
        '6UD' => 'E02002685',
        '6UE' => 'E02002685',
        '6UF' => 'E02002684',
        '6UG' => 'E02002685',
        '6UH' => 'E02002685',
        '6UJ' => 'E02002685',
        '6UL' => 'E02002685',
        '6UN' => 'E02002685',
        '6UP' => 'E02002685',
        '6UQ' => 'E02002685',
        '6UR' => 'E02002685',
        '6UT' => 'E02002685',
        '6UU' => 'E02002685',
        '6UW' => 'E02002684',
        '6UX' => 'E02002685',
        '6UY' => 'E02002685',
        '6UZ' => 'E02002685',
        '6WA' => 'E02002685',
        '6WN' => 'E02002684',
        '6WP' => 'E02002687',
        '6WQ' => 'E02002687',
        '6WR' => 'E02002687',
        '6WS' => 'E02002687',
        '6WT' => 'E02002687',
        '6WU' => 'E02002687',
        '6WW' => 'E02002685',
        '6WX' => 'E02002687',
        '6WY' => 'E02002685',
        '6WZ' => 'E02002684',
        '6XA' => 'E02002684',
        '6XB' => 'E02002684',
        '6XD' => 'E02002684',
        '6XE' => 'E02002684',
        '6XF' => 'E02002684',
        '6XG' => 'E02002684',
        '6XH' => 'E02002684',
        '6XJ' => 'E02002684',
        '6XL' => 'E02002684',
        '6XN' => 'E02002684',
        '6XP' => 'E02002684',
        '6XQ' => 'E02002684',
        '6XR' => 'E02002684',
        '6XS' => 'E02002684',
        '6XT' => 'E02002684',
        '6XU' => 'E02002684',
        '6XW' => 'E02002684',
        '6XX' => 'E02002684',
        '6XY' => 'E02002684',
        '6XZ' => 'E02002684',
        '6YA' => 'E02002684',
        '6YB' => 'E02002684',
        '6YD' => 'E02002685',
        '6YE' => 'E02002684',
        '6YF' => 'E02002687',
        '6YG' => 'E02002684',
        '6YH' => 'E02002684',
        '6YJ' => 'E02002684',
        '6YL' => 'E02002684',
        '6YN' => 'E02002684',
        '6YP' => 'E02002684',
        '6YQ' => 'E02002684',
        '6YR' => 'E02002684',
        '6YS' => 'E02002684',
        '6YT' => 'E02002685',
        '6YU' => 'E02002684',
        '6YW' => 'E02002684',
        '6YX' => 'E02002685',
        '6YY' => 'E02002684',
        '6YZ' => 'E02002684',
        '6ZA' => 'E02002684',
        '6ZB' => 'E02002684',
        '6ZD' => 'E02002684',
        '6ZE' => 'E02002684',
        '6ZF' => 'E02002684',
        '6ZG' => 'E02002684',
        '6ZH' => 'E02002687',
        '6ZJ' => 'E02002684',
        '6ZP' => 'E02002684',
        '6ZQ' => 'E02002684',
        '6ZR' => 'E02002684',
        '6ZT' => 'E02002684',
        '6ZW' => 'E02002684',
        '7AA' => 'E02002686',
        '7AB' => 'E02002686',
        '7AD' => 'E02002686',
        '7AE' => 'E02002686',
        '7AF' => 'E02002684',
        '7AG' => 'E02002684',
        '7AH' => 'E02002684',
        '7AJ' => 'E02002684',
        '7AL' => 'E02002684',
        '7AN' => 'E02002684',
        '7AP' => 'E02002684',
        '7AQ' => 'E02002684',
        '7AR' => 'E02002684',
        '7AS' => 'E02002684',
        '7AT' => 'E02002684',
        '7AU' => 'E02002684',
        '7AW' => 'E02002684',
        '7AX' => 'E02002684',
        '7AY' => 'E02002684',
        '7AZ' => 'E02002684',
        '7BA' => 'E02002686',
        '7BB' => 'E02002686',
        '7BD' => 'E02002686',
        '7BE' => 'E02002686',
        '7BF' => 'E02002686',
        '7BG' => 'E02002686',
        '7BH' => 'E02002684',
        '7BJ' => 'E02002686',
        '7BL' => 'E02002686',
        '7BN' => 'E02002686',
        '7BP' => 'E02002686',
        '7BQ' => 'E02002686',
        '7BR' => 'E02002686',
        '7BS' => 'E02002685',
        '7BT' => 'E02002686',
        '7BU' => 'E02002684',
        '7BW' => 'E02002686',
        '7BX' => 'E02002686',
        '7BY' => 'E02002686',
        '7BZ' => 'E02002685',
        '7DA' => 'E02002685',
        '7DB' => 'E02002685',
        '7DD' => 'E02002685',
        '7DE' => 'E02002685',
        '7DF' => 'E02002685',
        '7DG' => 'E02002685',
        '7DH' => 'E02002685',
        '7DJ' => 'E02002684',
        '7DL' => 'E02002684',
        '7DN' => 'E02002684',
        '7DP' => 'E02002686',
        '7DQ' => 'E02002685',
        '7DR' => 'E02002685',
        '7DS' => 'E02002685',
        '7DT' => 'E02002685',
        '7DU' => 'E02002685',
        '7DW' => 'E02002685',
        '7DX' => 'E02002685',
        '7DY' => 'E02002685',
        '7DZ' => 'E02002685',
        '7EA' => 'E02002685',
        '7EB' => 'E02002684',
        '7EE' => 'E02002684',
        '7EF' => 'E02002685',
        '7EG' => 'E02002684',
        '7EH' => 'E02002684',
        '7EJ' => 'E02002684',
        '7EL' => 'E02002684',
        '7EN' => 'E02002684',
        '7EP' => 'E02002684',
        '7EQ' => 'E02002684',
        '7EW' => 'E02002684',
        '7FP' => 'E02002686',
        '7GA' => 'E02002686',
        '7GB' => 'E02002686',
        '7GD' => 'E02002686',
        '7GE' => 'E02002684',
        '7GF' => 'E02002684',
        '7GG' => 'E02002684',
        '7GH' => 'E02002684',
        '7GJ' => 'E02002684',
        '7GT' => 'E02002684',
        '7GU' => 'E02002684',
        '7GX' => 'E02002684',
        '7GY' => 'E02002684',
        '7GZ' => 'E02002684',
        '7HF' => 'E02002684',
        '7HG' => 'E02002684',
        '7HH' => 'E02002684',
        '7HJ' => 'E02002684',
        '7HL' => 'E02002684',
        '7HN' => 'E02002684',
        '7HP' => 'E02002684',
        '7HQ' => 'E02002684',
        '7HR' => 'E02002684',
        '7HS' => 'E02002684',
        '7HT' => 'E02002684',
        '7HU' => 'E02002684',
        '7HW' => 'E02002684',
        '7HX' => 'E02002684',
        '7JB' => 'E02002687',
        '7JD' => 'E02002687',
        '7JE' => 'E02002685',
        '7JF' => 'E02002685',
        '7JG' => 'E02002685',
        '7JH' => 'E02002687',
        '7JP' => 'E02002687',
        '7JQ' => 'E02002685',
        '7JR' => 'E02002685',
        '7JS' => 'E02002685',
        '7JT' => 'E02002685',
        '7JU' => 'E02002686',
        '7JW' => 'E02002685',
        '7JX' => 'E02002686',
        '7JY' => 'E02002686',
        '7JZ' => 'E02002686',
        '7LA' => 'E02002685',
        '7LB' => 'E02002686',
        '7LD' => 'E02002686',
        '7LE' => 'E02002686',
        '7LF' => 'E02002685',
        '7LG' => 'E02002685',
        '7LH' => 'E02002685',
        '7LJ' => 'E02002685',
        '7LL' => 'E02002685',
        '7LN' => 'E02002687',
        '7LP' => 'E02002685',
        '7LQ' => 'E02002685',
        '7LR' => 'E02002685',
        '7LS' => 'E02002685',
        '7LT' => 'E02002685',
        '7LU' => 'E02002685',
        '7LW' => 'E02002685',
        '7LX' => 'E02002687',
        '7LY' => 'E02002685',
        '7LZ' => 'E02002686',
        '7NA' => 'E02002686',
        '7NB' => 'E02002686',
        '7ND' => 'E02002685',
        '7NE' => 'E02002686',
        '7NF' => 'E02002686',
        '7NG' => 'E02002684',
        '7NH' => 'E02002686',
        '7NJ' => 'E02002685',
        '7NL' => 'E02002685',
        '7NN' => 'E02002685',
        '7NP' => 'E02002686',
        '7NQ' => 'E02002686',
        '7NR' => 'E02002686',
        '7NS' => 'E02002684',
        '7NT' => 'E02002684',
        '7NU' => 'E02002684',
        '7NW' => 'E02002685',
        '7NX' => 'E02002684',
        '7NY' => 'E02002684',
        '7PA' => 'E02002684',
        '7PB' => 'E02002684',
        '7PD' => 'E02002686',
        '7PE' => 'E02002686',
        '7PF' => 'E02002686',
        '7PG' => 'E02002686',
        '7PH' => 'E02002686',
        '7PJ' => 'E02002686',
        '7PL' => 'E02002686',
        '7PN' => 'E02002686',
        '7PP' => 'E02002686',
        '7PQ' => 'E02002684',
        '7PR' => 'E02002684',
        '7PS' => 'E02002686',
        '7PT' => 'E02002685',
        '7PU' => 'E02002685',
        '7PW' => 'E02002686',
        '7PX' => 'E02002684',
        '7PY' => 'E02002684',
        '7PZ' => 'E02002684',
        '7QA' => 'E02002684',
        '7QB' => 'E02002684',
        '7QD' => 'E02002684',
        '7QE' => 'E02002684',
        '7QF' => 'E02002684',
        '7QG' => 'E02002686',
        '7QH' => 'E02002686',
        '7QJ' => 'E02002686',
        '7QL' => 'E02002686',
        '7QN' => 'E02002686',
        '7QP' => 'E02002684',
        '7QQ' => 'E02002686',
        '7QR' => 'E02002686',
        '7QS' => 'E02002684',
        '7QT' => 'E02002686',
        '7QU' => 'E02002686',
        '7QW' => 'E02002686',
        '7RW' => 'E02002685',
        '7RX' => 'E02002687',
        '7RY' => 'E02002685',
        '7RZ' => 'E02002685',
        '7SA' => 'E02002685',
        '7SB' => 'E02002685',
        '7SD' => 'E02002685',
        '7SE' => 'E02002685',
        '7SG' => 'E02002685',
        '7SH' => 'E02002685',
        '7SJ' => 'E02002685',
        '7SL' => 'E02002685',
        '7SN' => 'E02002685',
        '7SP' => 'E02002685',
        '7SQ' => 'E02002685',
        '7SR' => 'E02002685',
        '7SS' => 'E02002685',
        '7ST' => 'E02002685',
        '7SU' => 'E02002685',
        '7SW' => 'E02002685',
        '7SX' => 'E02002685',
        '7SY' => 'E02002685',
        '7SZ' => 'E02002685',
        '7TA' => 'E02002685',
        '7WP' => 'E02002687',
        '7WQ' => 'E02002687',
        '7WR' => 'E02002687',
        '7WS' => 'E02002687',
        '7WT' => 'E02002687',
        '7WU' => 'E02002687',
        '7WW' => 'E02002687',
        '7WX' => 'E02002685',
        '7WY' => 'E02002685',
        '7WZ' => 'E02002685',
        '7YA' => 'E02002684',
        '7YB' => 'E02002687',
        '7YD' => 'E02002687',
        '7YE' => 'E02002687',
        '7YX' => 'E02002686',
        '7YY' => 'E02002684',
        '7YZ' => 'E02002686',
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
