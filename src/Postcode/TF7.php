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
final class TF7
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '4AA' => 'E02002950',
        '4AB' => 'E02002950',
        '4AD' => 'E02002950',
        '4AE' => 'E02002950',
        '4AF' => 'E02002950',
        '4AG' => 'E02002950',
        '4AH' => 'E02002950',
        '4AJ' => 'E02002950',
        '4AL' => 'E02002950',
        '4AN' => 'E02002950',
        '4AP' => 'E02002950',
        '4AQ' => 'E02002950',
        '4AR' => 'E02002950',
        '4AS' => 'E02002950',
        '4AT' => 'E02002950',
        '4AU' => 'E02002950',
        '4AW' => 'E02002950',
        '4AX' => 'E02002950',
        '4AY' => 'E02002950',
        '4AZ' => 'E02002950',
        '4BA' => 'E02002950',
        '4BB' => 'E02002950',
        '4BD' => 'E02002949',
        '4BE' => 'E02002950',
        '4BF' => 'E02002950',
        '4BG' => 'E02002950',
        '4BH' => 'E02002949',
        '4BJ' => 'E02002950',
        '4BL' => 'E02002949',
        '4BN' => 'E02002949',
        '4BP' => 'E02002950',
        '4BQ' => 'E02002950',
        '4BS' => 'E02002950',
        '4BT' => 'E02002950',
        '4BU' => 'E02002950',
        '4BW' => 'E02002950',
        '4BX' => 'E02002950',
        '4BY' => 'E02002950',
        '4BZ' => 'E02002950',
        '4DA' => 'E02002950',
        '4DB' => 'E02002950',
        '4DD' => 'E02002950',
        '4DE' => 'E02002950',
        '4DF' => 'E02002950',
        '4DG' => 'E02002950',
        '4DH' => 'E02002950',
        '4DJ' => 'E02002950',
        '4DL' => 'E02002950',
        '4DN' => 'E02002950',
        '4DP' => 'E02002950',
        '4DQ' => 'E02002950',
        '4DR' => 'E02002950',
        '4DS' => 'E02002950',
        '4DT' => 'E02002950',
        '4DU' => 'E02002950',
        '4DW' => 'E02002950',
        '4DX' => 'E02002950',
        '4DY' => 'E02002949',
        '4DZ' => 'E02002949',
        '4EA' => 'E02002949',
        '4EB' => 'E02002949',
        '4ED' => 'E02002949',
        '4EE' => 'E02002949',
        '4EF' => 'E02002949',
        '4EG' => 'E02002949',
        '4EH' => 'E02002950',
        '4EJ' => 'E02002950',
        '4EL' => 'E02002950',
        '4EN' => 'E02002950',
        '4EP' => 'E02002949',
        '4EQ' => 'E02002949',
        '4ER' => 'E02002950',
        '4ES' => 'E02002950',
        '4ET' => 'E02002950',
        '4EU' => 'E02002950',
        '4EW' => 'E02002949',
        '4EX' => 'E02002950',
        '4EY' => 'E02002950',
        '4EZ' => 'E02002950',
        '4FP' => 'E02002950',
        '4FT' => 'E02002950',
        '4GA' => 'E02002950',
        '4GB' => 'E02002950',
        '4GD' => 'E02002950',
        '4GE' => 'E02002950',
        '4GF' => 'E02002950',
        '4GG' => 'E02002950',
        '4GH' => 'E02002950',
        '4GJ' => 'E02002950',
        '4GL' => 'E02002950',
        '4GN' => 'E02002950',
        '4GP' => 'E02002950',
        '4GQ' => 'E02002950',
        '4GR' => 'E02002950',
        '4GS' => 'E02002950',
        '4HA' => 'E02002950',
        '4HB' => 'E02002950',
        '4HD' => 'E02002950',
        '4HE' => 'E02002950',
        '4HF' => 'E02002950',
        '4HG' => 'E02002950',
        '4HH' => 'E02002950',
        '4HJ' => 'E02002950',
        '4HL' => 'E02002950',
        '4HN' => 'E02002950',
        '4HP' => 'E02002950',
        '4HQ' => 'E02002950',
        '4HR' => 'E02002950',
        '4HS' => 'E02002950',
        '4HT' => 'E02002950',
        '4HU' => 'E02002950',
        '4HW' => 'E02002950',
        '4HX' => 'E02002950',
        '4HY' => 'E02002950',
        '4HZ' => 'E02002950',
        '4JA' => 'E02002950',
        '4JB' => 'E02002949',
        '4JD' => 'E02002950',
        '4JE' => 'E02002950',
        '4JF' => 'E02002950',
        '4JG' => 'E02002950',
        '4JH' => 'E02002950',
        '4JJ' => 'E02002950',
        '4JL' => 'E02002950',
        '4JN' => 'E02002950',
        '4JP' => 'E02002950',
        '4JQ' => 'E02002950',
        '4JR' => 'E02002949',
        '4JS' => 'E02002950',
        '4JT' => 'E02002949',
        '4JU' => 'E02002950',
        '4JW' => 'E02002950',
        '4JX' => 'E02002950',
        '4JY' => 'E02002950',
        '4JZ' => 'E02002949',
        '4LA' => 'E02002950',
        '4LB' => 'E02002950',
        '4LD' => 'E02002950',
        '4LE' => 'E02002950',
        '4LF' => 'E02002950',
        '4LG' => 'E02002950',
        '4LH' => 'E02002950',
        '4LJ' => 'E02002950',
        '4LL' => 'E02002950',
        '4LN' => 'E02002950',
        '4LP' => 'E02002950',
        '4LQ' => 'E02002950',
        '4LR' => 'E02002950',
        '4LS' => 'E02002950',
        '4LT' => 'E02002950',
        '4LU' => 'E02002950',
        '4LW' => 'E02002950',
        '4LX' => 'E02002950',
        '4LY' => 'E02002950',
        '4LZ' => 'E02002950',
        '4NA' => 'E02002950',
        '4NB' => 'E02002950',
        '4ND' => 'E02002949',
        '4NE' => 'E02002950',
        '4NF' => 'E02002950',
        '4NG' => 'E02002950',
        '4NH' => 'E02002950',
        '4NJ' => 'E02002950',
        '4NL' => 'E02002950',
        '4NN' => 'E02002950',
        '4NP' => 'E02002950',
        '4NQ' => 'E02002950',
        '4NS' => 'E02002950',
        '4NW' => 'E02002950',
        '4NX' => 'E02002950',
        '4NY' => 'E02002950',
        '4NZ' => 'E02002950',
        '4PA' => 'E02002950',
        '4PB' => 'E02002950',
        '4PD' => 'E02002950',
        '4PE' => 'E02002949',
        '4PF' => 'E02002950',
        '4PG' => 'E02002950',
        '4PH' => 'E02002950',
        '4PJ' => 'E02002950',
        '4PL' => 'E02002950',
        '4PN' => 'E02002950',
        '4PP' => 'E02002950',
        '4PQ' => 'E02002950',
        '4PR' => 'E02002950',
        '4PS' => 'E02002950',
        '4PT' => 'E02002950',
        '4PU' => 'E02002950',
        '4PW' => 'E02002950',
        '4PX' => 'E02002949',
        '4PY' => 'E02002950',
        '4PZ' => 'E02002950',
        '4QA' => 'E02002950',
        '4QB' => 'E02002950',
        '4QD' => 'E02002950',
        '4QE' => 'E02002950',
        '4QF' => 'E02002950',
        '4QG' => 'E02002950',
        '4QH' => 'E02002950',
        '4QJ' => 'E02002950',
        '4QL' => 'E02002950',
        '4QN' => 'E02002950',
        '4QP' => 'E02002950',
        '4QQ' => 'E02002950',
        '4QR' => 'E02002950',
        '4QS' => 'E02002950',
        '4QT' => 'E02002950',
        '4QU' => 'E02002950',
        '4QW' => 'E02002950',
        '4QX' => 'E02002950',
        '4QY' => 'E02002950',
        '4QZ' => 'E02002950',
        '4RA' => 'E02002949',
        '4RB' => 'E02002949',
        '4RD' => 'E02002950',
        '4RE' => 'E02002950',
        '4RF' => 'E02002950',
        '4RG' => 'E02002950',
        '4RJ' => 'E02006010',
        '4RL' => 'E02006010',
        '4RN' => 'E02002950',
        '4RP' => 'E02002950',
        '4RQ' => 'E02002950',
        '4RT' => 'E02002950',
        '4RU' => 'E02002950',
        '4RW' => 'E02002949',
        '4RX' => 'E02002949',
        '4RY' => 'E02002945',
        '4RZ' => 'E02002949',
        '4SA' => 'E02002943',
        '4SB' => 'E02002943',
        '4SD' => 'E02002945',
        '4SE' => 'E02002950',
        '4SF' => 'E02002950',
        '4SG' => 'E02002950',
        '4SH' => 'E02002950',
        '4SJ' => 'E02002950',
        '4SL' => 'E02002950',
        '4SN' => 'E02002950',
        '4SP' => 'E02002950',
        '4SQ' => 'E02002950',
        '4SR' => 'E02002950',
        '4ST' => 'E02002949',
        '4SU' => 'E02002950',
        '4SW' => 'E02002950',
        '4SZ' => 'E02002950',
        '4TA' => 'E02002950',
        '4TD' => 'E02002950',
        '4TE' => 'E02002950',
        '4TF' => 'E02002950',
        '4TG' => 'E02002950',
        '4TJ' => 'E02002950',
        '4TL' => 'E02002950',
        '4TN' => 'E02002950',
        '4TQ' => 'E02002950',
        '4TS' => 'E02002950',
        '4TW' => 'E02002950',
        '4TX' => 'E02002950',
        '4TY' => 'E02002950',
        '4TZ' => 'E02002950',
        '4UA' => 'E02002950',
        '4UD' => 'E02002950',
        '4UE' => 'E02002950',
        '4UG' => 'E02002950',
        '4UH' => 'E02002950',
        '4UJ' => 'E02002950',
        '4UL' => 'E02002950',
        '4UN' => 'E02002950',
        '4UP' => 'E02002950',
        '4UQ' => 'E02002950',
        '4UT' => 'E02002950',
        '4UU' => 'E02002950',
        '4UX' => 'E02002950',
        '4WA' => 'E02002950',
        '4WB' => 'E02002949',
        '4WD' => 'E02002949',
        '4WE' => 'E02002950',
        '4WF' => 'E02002950',
        '4WG' => 'E02002949',
        '4WH' => 'E02002949',
        '4WJ' => 'E02002950',
        '4WL' => 'E02002950',
        '4WN' => 'E02002950',
        '4WP' => 'E02002949',
        '4WQ' => 'E02002949',
        '4WR' => 'E02002950',
        '4WS' => 'E02002949',
        '4WT' => 'E02002950',
        '4WU' => 'E02002949',
        '4WW' => 'E02002950',
        '4WX' => 'E02002950',
        '4WY' => 'E02002950',
        '4WZ' => 'E02002949',
        '4XA' => 'E02002949',
        '4XB' => 'E02002949',
        '4XD' => 'E02002949',
        '4XF' => 'E02002949',
        '4XP' => 'E02002949',
        '4XZ' => 'E02002949',
        '4YB' => 'E02002949',
        '4YR' => 'E02002949',
        '4ZA' => 'E02002949',
        '4ZE' => 'E02002949',
        '4ZF' => 'E02002949',
        '4ZG' => 'E02002949',
        '4ZH' => 'E02002949',
        '4ZL' => 'E02002949',
        '4ZP' => 'E02002949',
        '4ZR' => 'E02002949',
        '4ZT' => 'E02002949',
        '4ZW' => 'E02002949',
        '5AA' => 'E02002949',
        '5AB' => 'E02002949',
        '5AD' => 'E02002949',
        '5AE' => 'E02002949',
        '5AF' => 'E02002949',
        '5AG' => 'E02002949',
        '5AH' => 'E02002949',
        '5AJ' => 'E02002949',
        '5AL' => 'E02002949',
        '5AN' => 'E02002949',
        '5AP' => 'E02002949',
        '5AQ' => 'E02002949',
        '5AR' => 'E02002949',
        '5AS' => 'E02002949',
        '5AT' => 'E02002949',
        '5AU' => 'E02002949',
        '5AW' => 'E02002949',
        '5AX' => 'E02002949',
        '5AY' => 'E02002949',
        '5AZ' => 'E02002949',
        '5BA' => 'E02002949',
        '5BB' => 'E02002949',
        '5BD' => 'E02002949',
        '5BE' => 'E02002949',
        '5BF' => 'E02002949',
        '5BG' => 'E02002949',
        '5BH' => 'E02002949',
        '5BJ' => 'E02002949',
        '5BL' => 'E02002949',
        '5BN' => 'E02002949',
        '5BP' => 'E02002949',
        '5BQ' => 'E02002949',
        '5BS' => 'E02002949',
        '5BT' => 'E02002949',
        '5BU' => 'E02002949',
        '5BW' => 'E02002949',
        '5BX' => 'E02002949',
        '5BY' => 'E02002949',
        '5BZ' => 'E02002949',
        '5DA' => 'E02002949',
        '5DB' => 'E02002949',
        '5DD' => 'E02002949',
        '5DE' => 'E02002949',
        '5DF' => 'E02002949',
        '5DG' => 'E02002949',
        '5DH' => 'E02002949',
        '5DJ' => 'E02002949',
        '5DL' => 'E02002949',
        '5DN' => 'E02002949',
        '5DP' => 'E02002949',
        '5DQ' => 'E02002949',
        '5DR' => 'E02002949',
        '5DS' => 'E02002949',
        '5DT' => 'E02002937',
        '5DU' => 'E02002950',
        '5DW' => 'E02002949',
        '5DX' => 'E02002949',
        '5DY' => 'E02002949',
        '5DZ' => 'E02002949',
        '5EA' => 'E02002949',
        '5EB' => 'E02002949',
        '5ED' => 'E02002949',
        '5EE' => 'E02002949',
        '5EF' => 'E02002949',
        '5EG' => 'E02002949',
        '5EH' => 'E02002949',
        '5EJ' => 'E02002949',
        '5EL' => 'E02002949',
        '5EN' => 'E02002949',
        '5EP' => 'E02002949',
        '5EQ' => 'E02002949',
        '5ER' => 'E02002949',
        '5ES' => 'E02002949',
        '5ET' => 'E02002949',
        '5EU' => 'E02002949',
        '5EW' => 'E02002949',
        '5EX' => 'E02002949',
        '5EY' => 'E02002949',
        '5EZ' => 'E02002949',
        '5FA' => 'E02002949',
        '5FB' => 'E02002949',
        '5FD' => 'E02002949',
        '5FE' => 'E02002948',
        '5FF' => 'E02002949',
        '5FG' => 'E02002948',
        '5FH' => 'E02002948',
        '5FJ' => 'E02002948',
        '5FL' => 'E02002949',
        '5FN' => 'E02002943',
        '5FP' => 'E02002949',
        '5GA' => 'E02002948',
        '5GB' => 'E02002948',
        '5GD' => 'E02002948',
        '5GE' => 'E02002948',
        '5GF' => 'E02002948',
        '5GG' => 'E02002948',
        '5GH' => 'E02002948',
        '5GJ' => 'E02002948',
        '5GL' => 'E02002948',
        '5GY' => 'E02002948',
        '5HA' => 'E02002949',
        '5HB' => 'E02002949',
        '5HD' => 'E02002949',
        '5HE' => 'E02002949',
        '5HF' => 'E02002949',
        '5HG' => 'E02002949',
        '5HH' => 'E02002949',
        '5HJ' => 'E02002949',
        '5HL' => 'E02002948',
        '5HN' => 'E02002948',
        '5HP' => 'E02002948',
        '5HQ' => 'E02002949',
        '5HR' => 'E02002948',
        '5HS' => 'E02002948',
        '5HT' => 'E02002949',
        '5HU' => 'E02002949',
        '5HW' => 'E02002948',
        '5HX' => 'E02002949',
        '5HY' => 'E02002949',
        '5HZ' => 'E02002949',
        '5JA' => 'E02002949',
        '5JB' => 'E02002949',
        '5JD' => 'E02002949',
        '5JE' => 'E02002949',
        '5JF' => 'E02002949',
        '5JG' => 'E02002949',
        '5JH' => 'E02002949',
        '5JJ' => 'E02002949',
        '5JL' => 'E02002949',
        '5JN' => 'E02002937',
        '5JP' => 'E02002949',
        '5JQ' => 'E02002949',
        '5JR' => 'E02002949',
        '5JS' => 'E02002948',
        '5JT' => 'E02002949',
        '5JU' => 'E02002949',
        '5JW' => 'E02002949',
        '5JX' => 'E02002949',
        '5JY' => 'E02002949',
        '5JZ' => 'E02002949',
        '5LA' => 'E02002949',
        '5LB' => 'E02002949',
        '5LD' => 'E02002949',
        '5LE' => 'E02002937',
        '5LF' => 'E02002949',
        '5LG' => 'E02002948',
        '5LH' => 'E02002937',
        '5LJ' => 'E02002948',
        '5LL' => 'E02002949',
        '5LN' => 'E02002948',
        '5LP' => 'E02002949',
        '5LQ' => 'E02002937',
        '5LR' => 'E02002949',
        '5LS' => 'E02002948',
        '5LT' => 'E02002948',
        '5LU' => 'E02002948',
        '5LW' => 'E02002948',
        '5LX' => 'E02002948',
        '5LY' => 'E02002948',
        '5LZ' => 'E02002948',
        '5NA' => 'E02002948',
        '5NB' => 'E02002948',
        '5ND' => 'E02002948',
        '5NE' => 'E02002948',
        '5NF' => 'E02002948',
        '5NG' => 'E02002948',
        '5NH' => 'E02002948',
        '5NJ' => 'E02002948',
        '5NL' => 'E02002948',
        '5NN' => 'E02002948',
        '5NP' => 'E02002948',
        '5NQ' => 'E02002948',
        '5NR' => 'E02002948',
        '5NS' => 'E02002948',
        '5NT' => 'E02002948',
        '5NU' => 'E02002948',
        '5NW' => 'E02002948',
        '5NX' => 'E02002948',
        '5NY' => 'E02002948',
        '5NZ' => 'E02002948',
        '5PA' => 'E02002948',
        '5PB' => 'E02002948',
        '5PD' => 'E02002948',
        '5PE' => 'E02002948',
        '5PF' => 'E02002948',
        '5PG' => 'E02002948',
        '5PH' => 'E02002948',
        '5PJ' => 'E02002948',
        '5PL' => 'E02002948',
        '5PN' => 'E02002948',
        '5PP' => 'E02002948',
        '5PQ' => 'E02002948',
        '5PR' => 'E02002948',
        '5PS' => 'E02002948',
        '5PT' => 'E02002948',
        '5PU' => 'E02002948',
        '5PW' => 'E02002948',
        '5PX' => 'E02002948',
        '5PY' => 'E02002948',
        '5PZ' => 'E02002948',
        '5QA' => 'E02002948',
        '5QB' => 'E02002948',
        '5QD' => 'E02002948',
        '5QE' => 'E02002948',
        '5QF' => 'E02002948',
        '5QG' => 'E02002948',
        '5QH' => 'E02002948',
        '5QJ' => 'E02002948',
        '5QL' => 'E02002948',
        '5QN' => 'E02002948',
        '5QP' => 'E02002948',
        '5QQ' => 'E02002948',
        '5QR' => 'E02002948',
        '5QS' => 'E02002948',
        '5QT' => 'E02002943',
        '5QU' => 'E02002943',
        '5QW' => 'E02002948',
        '5QX' => 'E02002943',
        '5QY' => 'E02002943',
        '5QZ' => 'E02002948',
        '5RA' => 'E02002948',
        '5RB' => 'E02002948',
        '5RD' => 'E02002948',
        '5RE' => 'E02002948',
        '5RF' => 'E02002948',
        '5RG' => 'E02002948',
        '5RH' => 'E02002949',
        '5RJ' => 'E02002949',
        '5RL' => 'E02002949',
        '5RN' => 'E02002949',
        '5RP' => 'E02002949',
        '5RQ' => 'E02002948',
        '5RR' => 'E02002949',
        '5RS' => 'E02002949',
        '5RT' => 'E02002948',
        '5RU' => 'E02002949',
        '5RX' => 'E02002949',
        '5RY' => 'E02002948',
        '5RZ' => 'E02002948',
        '5SA' => 'E02002949',
        '5SB' => 'E02002949',
        '5SD' => 'E02002949',
        '5SE' => 'E02002949',
        '5SF' => 'E02002949',
        '5SG' => 'E02002949',
        '5SH' => 'E02002949',
        '5SJ' => 'E02002949',
        '5SL' => 'E02002949',
        '5SN' => 'E02002949',
        '5SP' => 'E02002949',
        '5SQ' => 'E02002949',
        '5SR' => 'E02002949',
        '5SS' => 'E02002949',
        '5ST' => 'E02002949',
        '5SU' => 'E02002949',
        '5SW' => 'E02002949',
        '5SX' => 'E02002949',
        '5SY' => 'E02002949',
        '5SZ' => 'E02002949',
        '5TA' => 'E02002949',
        '5TB' => 'E02002949',
        '5TD' => 'E02002949',
        '5TE' => 'E02002949',
        '5TF' => 'E02002949',
        '5TG' => 'E02002948',
        '5TH' => 'E02002948',
        '5TJ' => 'E02002948',
        '5TL' => 'E02002948',
        '5TN' => 'E02002948',
        '5TP' => 'E02002949',
        '5TQ' => 'E02002948',
        '5TR' => 'E02002949',
        '5TS' => 'E02002949',
        '5TT' => 'E02002948',
        '5TU' => 'E02002948',
        '5TW' => 'E02002949',
        '5TX' => 'E02002948',
        '5TY' => 'E02002948',
        '5TZ' => 'E02002948',
        '5UA' => 'E02002948',
        '5UB' => 'E02002948',
        '5UD' => 'E02002950',
        '5UE' => 'E02002948',
        '5UF' => 'E02002949',
        '5UG' => 'E02002948',
        '5UH' => 'E02002948',
        '5UJ' => 'E02002948',
        '5UL' => 'E02002948',
        '5UN' => 'E02002948',
        '5UP' => 'E02002937',
        '5WA' => 'E02002949',
        '5WB' => 'E02002949',
        '5WD' => 'E02002949',
        '5WE' => 'E02002949',
        '5WF' => 'E02002949',
        '5WG' => 'E02002949',
        '5WH' => 'E02002949',
        '5WJ' => 'E02002949',
        '5WL' => 'E02002949',
        '5WN' => 'E02002949',
        '5WP' => 'E02002948',
        '5WQ' => 'E02002949',
        '5WR' => 'E02002948',
        '5WS' => 'E02002948',
        '5WT' => 'E02002948',
        '5WU' => 'E02002948',
        '5WW' => 'E02002949',
        '5WX' => 'E02002948',
        '5WY' => 'E02002949',
        '5WZ' => 'E02002949',
        '5XA' => 'E02002949',
        '5XB' => 'E02002949',
        '5XD' => 'E02002949',
        '5XQ' => 'E02002949',
        '5XZ' => 'E02002949',
        '5ZD' => 'E02002949',
        '5ZQ' => 'E02002949',
        '5ZU' => 'E02002949',
        '5ZW' => 'E02002949',
        '5ZY' => 'E02002949',
        '9AB' => 'E02002949',
        '9AD' => 'E02002949',
        '9AE' => 'E02002949',
        '9AF' => 'E02002949',
        '9AG' => 'E02002949',
        '9AH' => 'E02002949',
        '9AJ' => 'E02002949',
        '9AL' => 'E02002949',
        '9AN' => 'E02002949',
        '9AP' => 'E02002949',
        '9AQ' => 'E02002949',
        '9AR' => 'E02002949',
        '9AS' => 'E02002949',
        '9AT' => 'E02002949',
        '9AU' => 'E02002949',
        '9AW' => 'E02002949',
        '9AX' => 'E02002949',
        '9AY' => 'E02002949',
        '9AZ' => 'E02002949',
        '9BA' => 'E02002949',
        '9BB' => 'E02002949',
        '9BD' => 'E02002949',
        '9BE' => 'E02002949',
        '9BF' => 'E02002949',
        '9BG' => 'E02002949',
        '9BH' => 'E02002949',
        '9BJ' => 'E02002949',
        '9BL' => 'E02002949',
        '9BN' => 'E02002949',
        '9BP' => 'E02002949',
        '9BQ' => 'E02002949',
        '9BR' => 'E02002949',
        '9BS' => 'E02002949',
        '9BT' => 'E02002949',
        '9BU' => 'E02002949',
        '9BW' => 'E02002949',
        '9BX' => 'E02002949',
        '9BY' => 'E02002949',
        '9BZ' => 'E02002949',
        '9DA' => 'E02002949',
        '9DB' => 'E02002949',
        '9DD' => 'E02002949',
        '9DE' => 'E02002949',
        '9DF' => 'E02002949',
        '9DG' => 'E02002949',
        '9DH' => 'E02002949',
        '9DJ' => 'E02002949',
        '9DL' => 'E02002949',
        '9DN' => 'E02002949',
        '9DP' => 'E02002949',
        '9DQ' => 'E02002949',
        '9DS' => 'E02002949',
        '9DT' => 'E02002949',
        '9DU' => 'E02002949',
        '9DW' => 'E02002949',
        '9DX' => 'E02002949',
        '9DY' => 'E02002949',
        '9DZ' => 'E02002949',
        '9EA' => 'E02002949',
        '9EB' => 'E02002949',
        '9ED' => 'E02002949',
        '9EF' => 'E02002949',
        '9EG' => 'E02002949',
        '9EH' => 'E02002949',
        '9EJ' => 'E02002949',
        '9EL' => 'E02002949',
        '9EN' => 'E02002949',
        '9EP' => 'E02002949',
        '9EQ' => 'E02002949',
        '9ER' => 'E02002949',
        '9ES' => 'E02002949',
        '9ET' => 'E02002949',
        '9EU' => 'E02002949',
        '9EW' => 'E02002949',
        '9EX' => 'E02002949',
        '9EY' => 'E02002949',
        '9EZ' => 'E02002949',
        '9FA' => 'E02002949',
        '9FB' => 'E02002949',
        '9FD' => 'E02002949',
        '9FE' => 'E02002949',
        '9FF' => 'E02002949',
        '9FG' => 'E02002949',
        '9FH' => 'E02002949',
        '9FJ' => 'E02002949',
        '9FL' => 'E02002949',
        '9FN' => 'E02002949',
        '9FP' => 'E02002949',
        '9FR' => 'E02002949',
        '9FS' => 'E02002949',
        '9FT' => 'E02002949',
        '9FU' => 'E02002949',
        '9FW' => 'E02002949',
        '9FY' => 'E02002949',
        '9FZ' => 'E02002949',
        '9GA' => 'E02002949',
        '9GB' => 'E02002949',
        '9GD' => 'E02002949',
        '9GE' => 'E02002949',
        '9GF' => 'E02002949',
        '9GG' => 'E02002949',
        '9GH' => 'E02002949',
        '9GJ' => 'E02002949',
        '9GL' => 'E02002949',
        '9GN' => 'E02002949',
        '9GP' => 'E02002949',
        '9GQ' => 'E02002949',
        '9GR' => 'E02002949',
        '9GS' => 'E02002949',
        '9GT' => 'E02002949',
        '9GU' => 'E02002949',
        '9GW' => 'E02002949',
        '9GX' => 'E02002949',
        '9GY' => 'E02002949',
        '9GZ' => 'E02002949',
        '9HA' => 'E02002949',
        '9HB' => 'E02002949',
        '9SA' => 'E02002945',
        '9SB' => 'E02002945',
        '9SD' => 'E02002945',
        '9SE' => 'E02002945',
        '9SF' => 'E02002945',
        '9SG' => 'E02002945',
        '9SH' => 'E02002945',
        '9SJ' => 'E02002945',
        '9SL' => 'E02002945',
        '9SN' => 'E02002945',
        '9SP' => 'E02002945',
        '9SQ' => 'E02002945',
        '9SR' => 'E02002945',
        '9SS' => 'E02002945',
        '9ST' => 'E02002945',
        '9SU' => 'E02002945',
        '9SW' => 'E02002945',
        '9SX' => 'E02002945',
        '9SY' => 'E02002945',
        '9SZ' => 'E02002945',
        '9TA' => 'E02002945',
        '9TB' => 'E02002945',
        '9TD' => 'E02002945',
        '9TE' => 'E02002945',
        '9TF' => 'E02002945',
        '9TG' => 'E02002945',
        '9TH' => 'E02002945',
        '9TJ' => 'E02002945',
        '9TL' => 'E02002945',
        '9TN' => 'E02002945',
        '9TP' => 'E02002945',
        '9TQ' => 'E02002945',
        '9TR' => 'E02002945',
        '9TS' => 'E02002945',
        '9TT' => 'E02002945',
        '9TU' => 'E02002945',
        '9ZZ' => 'E02002945',
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
