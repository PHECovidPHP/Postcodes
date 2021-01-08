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
final class KT6
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '4AA' => 'E02000608',
        '4AB' => 'E02000608',
        '4AD' => 'E02000608',
        '4AE' => 'E02000608',
        '4AF' => 'E02000608',
        '4AG' => 'E02000608',
        '4AH' => 'E02000608',
        '4AJ' => 'E02000608',
        '4AL' => 'E02000608',
        '4AN' => 'E02000608',
        '4AP' => 'E02000606',
        '4AQ' => 'E02000608',
        '4AR' => 'E02000606',
        '4AS' => 'E02000606',
        '4AT' => 'E02000606',
        '4AU' => 'E02000606',
        '4AW' => 'E02000608',
        '4AX' => 'E02000606',
        '4AY' => 'E02000606',
        '4AZ' => 'E02000606',
        '4BA' => 'E02000606',
        '4BB' => 'E02000606',
        '4BD' => 'E02000606',
        '4BE' => 'E02000606',
        '4BF' => 'E02000606',
        '4BG' => 'E02000608',
        '4BH' => 'E02000608',
        '4BJ' => 'E02000606',
        '4BL' => 'E02000606',
        '4BN' => 'E02000608',
        '4BP' => 'E02000606',
        '4BQ' => 'E02000608',
        '4BS' => 'E02000606',
        '4BT' => 'E02000606',
        '4BU' => 'E02000606',
        '4BW' => 'E02000608',
        '4BX' => 'E02000606',
        '4BY' => 'E02000606',
        '4BZ' => 'E02000606',
        '4DA' => 'E02000606',
        '4DB' => 'E02000606',
        '4DD' => 'E02000606',
        '4DE' => 'E02000608',
        '4DF' => 'E02000608',
        '4DG' => 'E02000608',
        '4DH' => 'E02000606',
        '4DJ' => 'E02000606',
        '4DL' => 'E02000606',
        '4DN' => 'E02000606',
        '4DP' => 'E02000606',
        '4DQ' => 'E02000606',
        '4DR' => 'E02000606',
        '4DS' => 'E02000608',
        '4DT' => 'E02000608',
        '4DU' => 'E02000608',
        '4DW' => 'E02000606',
        '4DX' => 'E02000608',
        '4DY' => 'E02000608',
        '4DZ' => 'E02000608',
        '4EA' => 'E02000608',
        '4EB' => 'E02000608',
        '4ED' => 'E02000608',
        '4EE' => 'E02000608',
        '4EF' => 'E02000608',
        '4EG' => 'E02000608',
        '4EH' => 'E02000608',
        '4EJ' => 'E02000608',
        '4EL' => 'E02000608',
        '4EN' => 'E02000608',
        '4EP' => 'E02000608',
        '4EQ' => 'E02000608',
        '4ER' => 'E02006322',
        '4ES' => 'E02000606',
        '4ET' => 'E02006322',
        '4EU' => 'E02000606',
        '4EW' => 'E02000608',
        '4EX' => 'E02000606',
        '4EY' => 'E02000606',
        '4EZ' => 'E02000606',
        '4FA' => 'E02000608',
        '4FB' => 'E02000608',
        '4FD' => 'E02000608',
        '4FE' => 'E02000608',
        '4GS' => 'E02000606',
        '4HA' => 'E02000606',
        '4HB' => 'E02000606',
        '4HD' => 'E02000606',
        '4HE' => 'E02000606',
        '4HF' => 'E02000606',
        '4HG' => 'E02000606',
        '4HH' => 'E02000606',
        '4HJ' => 'E02000606',
        '4HL' => 'E02000606',
        '4HN' => 'E02000606',
        '4HP' => 'E02000608',
        '4HQ' => 'E02000606',
        '4HR' => 'E02000608',
        '4HS' => 'E02000608',
        '4HT' => 'E02000608',
        '4HU' => 'E02000608',
        '4HW' => 'E02000606',
        '4HX' => 'E02000608',
        '4HY' => 'E02000608',
        '4HZ' => 'E02000608',
        '4JA' => 'E02000606',
        '4JB' => 'E02000606',
        '4JD' => 'E02000608',
        '4JE' => 'E02000608',
        '4JF' => 'E02000608',
        '4JG' => 'E02000608',
        '4JH' => 'E02000608',
        '4JJ' => 'E02000608',
        '4JL' => 'E02000608',
        '4JN' => 'E02000608',
        '4JP' => 'E02000608',
        '4JR' => 'E02000608',
        '4JS' => 'E02000602',
        '4JT' => 'E02000608',
        '4JU' => 'E02000608',
        '4JW' => 'E02000608',
        '4JX' => 'E02000608',
        '4JY' => 'E02000608',
        '4JZ' => 'E02000608',
        '4LA' => 'E02000608',
        '4LB' => 'E02000608',
        '4LD' => 'E02000608',
        '4LE' => 'E02000608',
        '4LF' => 'E02000608',
        '4LG' => 'E02000608',
        '4LH' => 'E02000608',
        '4LJ' => 'E02000608',
        '4LL' => 'E02000608',
        '4LN' => 'E02000608',
        '4LP' => 'E02000608',
        '4LQ' => 'E02000608',
        '4LR' => 'E02000608',
        '4LS' => 'E02000608',
        '4LT' => 'E02000608',
        '4LU' => 'E02000608',
        '4LW' => 'E02000608',
        '4LX' => 'E02000608',
        '4LY' => 'E02000608',
        '4LZ' => 'E02000608',
        '4NA' => 'E02000608',
        '4NB' => 'E02000608',
        '4ND' => 'E02000608',
        '4NF' => 'E02000608',
        '4NG' => 'E02000608',
        '4NH' => 'E02000608',
        '4NL' => 'E02000608',
        '4NN' => 'E02000608',
        '4NQ' => 'E02000608',
        '4NR' => 'E02000608',
        '4NS' => 'E02000608',
        '4NW' => 'E02000608',
        '4NX' => 'E02000608',
        '4NY' => 'E02000608',
        '4PB' => 'E02000608',
        '4PD' => 'E02000608',
        '4PE' => 'E02000608',
        '4PF' => 'E02000608',
        '4PG' => 'E02000608',
        '4PH' => 'E02000608',
        '4PJ' => 'E02000608',
        '4PL' => 'E02000608',
        '4PN' => 'E02000608',
        '4PP' => 'E02000608',
        '4PQ' => 'E02000608',
        '4PR' => 'E02000608',
        '4PS' => 'E02000608',
        '4PT' => 'E02000608',
        '4PU' => 'E02000608',
        '4PW' => 'E02000608',
        '4PX' => 'E02000608',
        '4PY' => 'E02000606',
        '4PZ' => 'E02000608',
        '4QB' => 'E02000608',
        '4QD' => 'E02000608',
        '4QG' => 'E02000608',
        '4QH' => 'E02000608',
        '4QJ' => 'E02000608',
        '4QL' => 'E02000608',
        '4QN' => 'E02000608',
        '4QP' => 'E02000608',
        '4QQ' => 'E02000608',
        '4QR' => 'E02000608',
        '4QS' => 'E02000608',
        '4QT' => 'E02000608',
        '4QU' => 'E02000608',
        '4QW' => 'E02000608',
        '4QX' => 'E02000608',
        '4QY' => 'E02000608',
        '4QZ' => 'E02000608',
        '4RA' => 'E02000608',
        '4RB' => 'E02000608',
        '4RD' => 'E02000608',
        '4RE' => 'E02000608',
        '4RF' => 'E02000608',
        '4RG' => 'E02000608',
        '4RH' => 'E02000606',
        '4RJ' => 'E02000602',
        '4RL' => 'E02000606',
        '4RN' => 'E02000606',
        '4RP' => 'E02000606',
        '4RQ' => 'E02000608',
        '4RR' => 'E02000606',
        '4RS' => 'E02000606',
        '4RT' => 'E02000606',
        '4RU' => 'E02000606',
        '4RW' => 'E02000606',
        '4RX' => 'E02000608',
        '4RY' => 'E02000606',
        '4SB' => 'E02000608',
        '4SD' => 'E02000608',
        '4SE' => 'E02000606',
        '4SF' => 'E02000606',
        '4SG' => 'E02000606',
        '4SH' => 'E02000606',
        '4SJ' => 'E02000606',
        '4SL' => 'E02000606',
        '4SN' => 'E02000606',
        '4SP' => 'E02000606',
        '4SQ' => 'E02000606',
        '4SR' => 'E02000606',
        '4SS' => 'E02000606',
        '4ST' => 'E02000606',
        '4SU' => 'E02000606',
        '4SW' => 'E02000606',
        '4SX' => 'E02000608',
        '4SY' => 'E02000608',
        '4SZ' => 'E02000608',
        '4TA' => 'E02000608',
        '4TB' => 'E02000608',
        '4TD' => 'E02000606',
        '4TE' => 'E02000606',
        '4TF' => 'E02000606',
        '4TG' => 'E02000606',
        '4TH' => 'E02000606',
        '4TJ' => 'E02000608',
        '4TL' => 'E02000606',
        '4TN' => 'E02000606',
        '4TP' => 'E02000606',
        '4TQ' => 'E02000606',
        '4TR' => 'E02000606',
        '4TS' => 'E02000606',
        '4TT' => 'E02000606',
        '4TU' => 'E02000606',
        '4TW' => 'E02000606',
        '4TX' => 'E02000606',
        '4TY' => 'E02000608',
        '4TZ' => 'E02000608',
        '4UA' => 'E02000608',
        '4UB' => 'E02000602',
        '4UD' => 'E02000608',
        '4UE' => 'E02000608',
        '4UF' => 'E02000608',
        '4UG' => 'E02000608',
        '4UJ' => 'E02000606',
        '4UL' => 'E02000606',
        '4UP' => 'E02000608',
        '4UQ' => 'E02000606',
        '4UR' => 'E02000606',
        '4US' => 'E02000608',
        '4UT' => 'E02000608',
        '4UU' => 'E02000602',
        '4UW' => 'E02000602',
        '4UX' => 'E02000608',
        '4UY' => 'E02000602',
        '4WA' => 'E02000602',
        '4WB' => 'E02000602',
        '4WD' => 'E02000602',
        '4WE' => 'E02000602',
        '4WF' => 'E02000602',
        '4WG' => 'E02000602',
        '4WH' => 'E02000602',
        '4WJ' => 'E02000608',
        '4WL' => 'E02000602',
        '4WN' => 'E02000608',
        '4WP' => 'E02000602',
        '4WQ' => 'E02000602',
        '4WR' => 'E02000608',
        '4WS' => 'E02000602',
        '4WT' => 'E02000608',
        '4WU' => 'E02000602',
        '4WW' => 'E02000608',
        '4WX' => 'E02000608',
        '4WY' => 'E02000602',
        '4WZ' => 'E02000608',
        '4XA' => 'E02000602',
        '4XB' => 'E02000602',
        '4XD' => 'E02000602',
        '4XE' => 'E02000602',
        '4XF' => 'E02000602',
        '4XT' => 'E02000602',
        '4XW' => 'E02000606',
        '4XY' => 'E02000602',
        '4XZ' => 'E02000602',
        '4YA' => 'E02000608',
        '4YB' => 'E02000602',
        '4YD' => 'E02000608',
        '4YE' => 'E02000608',
        '4YF' => 'E02000602',
        '4YG' => 'E02000602',
        '4YH' => 'E02000602',
        '4YJ' => 'E02000602',
        '4YL' => 'E02000602',
        '4YN' => 'E02000608',
        '4YP' => 'E02000602',
        '4YQ' => 'E02000602',
        '4YR' => 'E02000608',
        '4YS' => 'E02000608',
        '4YT' => 'E02000608',
        '4YU' => 'E02000602',
        '4YW' => 'E02000602',
        '4YX' => 'E02000602',
        '4YY' => 'E02000602',
        '4YZ' => 'E02000602',
        '4ZA' => 'E02000602',
        '4ZB' => 'E02000602',
        '4ZL' => 'E02000602',
        '5AA' => 'E02000613',
        '5AB' => 'E02000613',
        '5AD' => 'E02000613',
        '5AE' => 'E02000613',
        '5AF' => 'E02000613',
        '5AG' => 'E02000613',
        '5AH' => 'E02000613',
        '5AJ' => 'E02000613',
        '5AL' => 'E02000613',
        '5AN' => 'E02000613',
        '5AP' => 'E02000613',
        '5AQ' => 'E02000613',
        '5AR' => 'E02000613',
        '5AS' => 'E02000613',
        '5AT' => 'E02000613',
        '5AU' => 'E02000613',
        '5AW' => 'E02000608',
        '5AX' => 'E02000602',
        '5AY' => 'E02000613',
        '5AZ' => 'E02006322',
        '5BA' => 'E02006322',
        '5BB' => 'E02000613',
        '5BD' => 'E02000613',
        '5BE' => 'E02000613',
        '5BF' => 'E02000613',
        '5BG' => 'E02000608',
        '5BH' => 'E02000613',
        '5BJ' => 'E02000613',
        '5BL' => 'E02000613',
        '5BN' => 'E02000613',
        '5BP' => 'E02000613',
        '5BQ' => 'E02000613',
        '5BS' => 'E02000613',
        '5BT' => 'E02000613',
        '5BU' => 'E02000613',
        '5BW' => 'E02000613',
        '5BX' => 'E02000613',
        '5BY' => 'E02000613',
        '5BZ' => 'E02000613',
        '5DA' => 'E02000613',
        '5DB' => 'E02000613',
        '5DD' => 'E02000613',
        '5DE' => 'E02000615',
        '5DF' => 'E02000613',
        '5DG' => 'E02000610',
        '5DL' => 'E02000608',
        '5DN' => 'E02000608',
        '5DP' => 'E02000610',
        '5DR' => 'E02006322',
        '5DS' => 'E02006322',
        '5DT' => 'E02000613',
        '5DU' => 'E02000613',
        '5DW' => 'E02000608',
        '5DX' => 'E02006322',
        '5DY' => 'E02006322',
        '5DZ' => 'E02006322',
        '5EA' => 'E02006322',
        '5EB' => 'E02006322',
        '5ED' => 'E02006322',
        '5EH' => 'E02006322',
        '5EJ' => 'E02006322',
        '5EL' => 'E02006322',
        '5EN' => 'E02006322',
        '5EP' => 'E02006322',
        '5EQ' => 'E02006322',
        '5ER' => 'E02006322',
        '5ES' => 'E02000602',
        '5ET' => 'E02006322',
        '5EU' => 'E02006322',
        '5EW' => 'E02006322',
        '5EY' => 'E02006322',
        '5EZ' => 'E02006322',
        '5GD' => 'E02006322',
        '5HA' => 'E02006322',
        '5HB' => 'E02006322',
        '5HD' => 'E02006322',
        '5HE' => 'E02006322',
        '5HF' => 'E02006322',
        '5HG' => 'E02006322',
        '5HH' => 'E02006322',
        '5HJ' => 'E02006322',
        '5HL' => 'E02006322',
        '5HN' => 'E02006322',
        '5HP' => 'E02006322',
        '5HQ' => 'E02006322',
        '5HR' => 'E02006322',
        '5HS' => 'E02006322',
        '5HT' => 'E02006322',
        '5HU' => 'E02006322',
        '5HW' => 'E02006322',
        '5JB' => 'E02006322',
        '5JD' => 'E02006322',
        '5JE' => 'E02006322',
        '5JF' => 'E02006322',
        '5JG' => 'E02006322',
        '5JL' => 'E02000608',
        '5JN' => 'E02006322',
        '5JP' => 'E02006322',
        '5JQ' => 'E02006322',
        '5JR' => 'E02006322',
        '5JS' => 'E02006322',
        '5JT' => 'E02006322',
        '5JU' => 'E02006322',
        '5JW' => 'E02006322',
        '5JX' => 'E02006322',
        '5JY' => 'E02006322',
        '5JZ' => 'E02006322',
        '5LA' => 'E02006322',
        '5LB' => 'E02006322',
        '5LD' => 'E02006322',
        '5LE' => 'E02006322',
        '5LF' => 'E02006322',
        '5LG' => 'E02006322',
        '5LH' => 'E02006322',
        '5LJ' => 'E02000608',
        '5LQ' => 'E02006322',
        '5LR' => 'E02000608',
        '5LS' => 'E02000608',
        '5LU' => 'E02000608',
        '5LX' => 'E02000608',
        '5NA' => 'E02000608',
        '5NB' => 'E02000608',
        '5ND' => 'E02000608',
        '5NE' => 'E02000608',
        '5NF' => 'E02000608',
        '5NG' => 'E02000608',
        '5NH' => 'E02000608',
        '5NJ' => 'E02000608',
        '5NL' => 'E02000608',
        '5NN' => 'E02000608',
        '5NP' => 'E02000608',
        '5NR' => 'E02000608',
        '5NS' => 'E02000608',
        '5NT' => 'E02000608',
        '5NU' => 'E02000608',
        '5NW' => 'E02000608',
        '5NX' => 'E02000608',
        '5NY' => 'E02000608',
        '5PF' => 'E02000608',
        '5PG' => 'E02000610',
        '5PH' => 'E02000602',
        '5PJ' => 'E02000608',
        '5PL' => 'E02000608',
        '5PN' => 'E02000608',
        '5PP' => 'E02000608',
        '5PQ' => 'E02000608',
        '5PR' => 'E02000608',
        '5PS' => 'E02000608',
        '5PT' => 'E02000608',
        '5PU' => 'E02000608',
        '5PW' => 'E02000608',
        '5PX' => 'E02006322',
        '5PY' => 'E02006322',
        '5PZ' => 'E02006322',
        '5QA' => 'E02000608',
        '5QB' => 'E02006322',
        '5QD' => 'E02006322',
        '5QE' => 'E02006322',
        '5QF' => 'E02000608',
        '5QG' => 'E02006322',
        '5QH' => 'E02006322',
        '5QJ' => 'E02006322',
        '5QL' => 'E02006322',
        '5QN' => 'E02006325',
        '5QP' => 'E02000614',
        '5QQ' => 'E02006322',
        '5QR' => 'E02006322',
        '5QS' => 'E02006322',
        '5QT' => 'E02006322',
        '5QW' => 'E02000614',
        '5QZ' => 'E02000602',
        '5RA' => 'E02006322',
        '5RB' => 'E02006322',
        '5RD' => 'E02006322',
        '5RE' => 'E02006322',
        '5RG' => 'E02006322',
        '5RH' => 'E02006322',
        '5RJ' => 'E02006322',
        '5RL' => 'E02006322',
        '5RN' => 'E02006322',
        '5RP' => 'E02006322',
        '5RR' => 'E02006322',
        '5RS' => 'E02006322',
        '5RT' => 'E02006322',
        '5RU' => 'E02006322',
        '5RW' => 'E02006322',
        '5RX' => 'E02006322',
        '5RY' => 'E02000608',
        '5RZ' => 'E02006322',
        '5WA' => 'E02000602',
        '5WB' => 'E02000602',
        '5WD' => 'E02006322',
        '5WE' => 'E02000602',
        '5WF' => 'E02000602',
        '5WG' => 'E02000602',
        '5WH' => 'E02000602',
        '5WJ' => 'E02000602',
        '5WL' => 'E02000602',
        '5WN' => 'E02000602',
        '5WP' => 'E02000602',
        '5WQ' => 'E02000602',
        '5WR' => 'E02000602',
        '5WS' => 'E02000602',
        '5WT' => 'E02000602',
        '5WU' => 'E02000602',
        '5WX' => 'E02006322',
        '5WY' => 'E02000602',
        '5WZ' => 'E02000602',
        '5XT' => 'E02000602',
        '5XY' => 'E02000602',
        '5XZ' => 'E02000602',
        '5YA' => 'E02000602',
        '5YB' => 'E02000602',
        '5YD' => 'E02000602',
        '5YE' => 'E02000602',
        '5YF' => 'E02000602',
        '5YG' => 'E02000602',
        '5YH' => 'E02000602',
        '5YJ' => 'E02000602',
        '5YL' => 'E02000602',
        '5YN' => 'E02006322',
        '5YP' => 'E02000602',
        '5YQ' => 'E02000602',
        '5YR' => 'E02000602',
        '5YS' => 'E02006322',
        '5YT' => 'E02000602',
        '5YU' => 'E02006322',
        '5YW' => 'E02006322',
        '5YX' => 'E02000602',
        '5YY' => 'E02000602',
        '5YZ' => 'E02000602',
        '5ZA' => 'E02000602',
        '5ZD' => 'E02000602',
        '6AA' => 'E02000606',
        '6AB' => 'E02000608',
        '6AD' => 'E02000608',
        '6AE' => 'E02000608',
        '6AF' => 'E02000610',
        '6AG' => 'E02000608',
        '6AH' => 'E02000610',
        '6AJ' => 'E02000610',
        '6AL' => 'E02000610',
        '6AN' => 'E02000610',
        '6AP' => 'E02000610',
        '6AQ' => 'E02000608',
        '6AR' => 'E02000610',
        '6AS' => 'E02000610',
        '6AT' => 'E02000610',
        '6AU' => 'E02000610',
        '6AW' => 'E02000610',
        '6AX' => 'E02000610',
        '6AY' => 'E02000610',
        '6AZ' => 'E02000610',
        '6BA' => 'E02000610',
        '6BB' => 'E02000610',
        '6BD' => 'E02000610',
        '6BE' => 'E02000610',
        '6BF' => 'E02000610',
        '6BG' => 'E02000610',
        '6BH' => 'E02000610',
        '6BJ' => 'E02000610',
        '6BL' => 'E02000610',
        '6BN' => 'E02000610',
        '6BP' => 'E02000610',
        '6BQ' => 'E02000608',
        '6BS' => 'E02000610',
        '6BT' => 'E02000610',
        '6BU' => 'E02000610',
        '6BW' => 'E02000610',
        '6BX' => 'E02000610',
        '6BY' => 'E02000610',
        '6BZ' => 'E02000610',
        '6DA' => 'E02000608',
        '6DB' => 'E02000608',
        '6DD' => 'E02000608',
        '6DE' => 'E02000608',
        '6DF' => 'E02000610',
        '6DG' => 'E02000610',
        '6DH' => 'E02000610',
        '6DJ' => 'E02000608',
        '6DL' => 'E02000610',
        '6DN' => 'E02000608',
        '6DP' => 'E02000610',
        '6DQ' => 'E02000610',
        '6DR' => 'E02000602',
        '6DS' => 'E02000610',
        '6DT' => 'E02000610',
        '6DU' => 'E02000610',
        '6DW' => 'E02000608',
        '6DX' => 'E02000610',
        '6DY' => 'E02000610',
        '6DZ' => 'E02000610',
        '6EA' => 'E02000610',
        '6EB' => 'E02000610',
        '6ED' => 'E02000610',
        '6EE' => 'E02000610',
        '6EF' => 'E02000610',
        '6EG' => 'E02000610',
        '6EH' => 'E02000610',
        '6EJ' => 'E02000610',
        '6EL' => 'E02000610',
        '6EN' => 'E02000610',
        '6EP' => 'E02000610',
        '6EQ' => 'E02000610',
        '6ER' => 'E02000610',
        '6ET' => 'E02000610',
        '6EU' => 'E02000610',
        '6EX' => 'E02000610',
        '6EY' => 'E02000610',
        '6EZ' => 'E02000610',
        '6HA' => 'E02000610',
        '6HB' => 'E02000610',
        '6HE' => 'E02000610',
        '6HF' => 'E02000610',
        '6HG' => 'E02000610',
        '6HJ' => 'E02000610',
        '6HL' => 'E02000613',
        '6HN' => 'E02000602',
        '6HP' => 'E02000608',
        '6HQ' => 'E02000610',
        '6HR' => 'E02000608',
        '6HS' => 'E02000602',
        '6HT' => 'E02000608',
        '6HU' => 'E02000608',
        '6HW' => 'E02000608',
        '6HX' => 'E02000608',
        '6HY' => 'E02000608',
        '6HZ' => 'E02000608',
        '6JA' => 'E02000610',
        '6JB' => 'E02000610',
        '6JD' => 'E02000610',
        '6JE' => 'E02000610',
        '6JG' => 'E02000610',
        '6JH' => 'E02000613',
        '6JJ' => 'E02000613',
        '6JL' => 'E02000610',
        '6JN' => 'E02000613',
        '6JP' => 'E02000610',
        '6JQ' => 'E02000613',
        '6JR' => 'E02000613',
        '6JS' => 'E02000610',
        '6JT' => 'E02000610',
        '6JU' => 'E02000610',
        '6JW' => 'E02000610',
        '6JX' => 'E02000610',
        '6JY' => 'E02000610',
        '6JZ' => 'E02000613',
        '6LA' => 'E02000613',
        '6LB' => 'E02000610',
        '6LD' => 'E02000610',
        '6LE' => 'E02000610',
        '6LF' => 'E02000610',
        '6LG' => 'E02000610',
        '6LH' => 'E02000610',
        '6LJ' => 'E02000610',
        '6LL' => 'E02000610',
        '6LN' => 'E02000610',
        '6LP' => 'E02000610',
        '6LQ' => 'E02000610',
        '6LR' => 'E02000610',
        '6LS' => 'E02000610',
        '6LT' => 'E02000610',
        '6LU' => 'E02000610',
        '6LW' => 'E02000610',
        '6LX' => 'E02000610',
        '6LY' => 'E02000610',
        '6LZ' => 'E02000610',
        '6NA' => 'E02000610',
        '6NB' => 'E02000610',
        '6ND' => 'E02006322',
        '6NE' => 'E02000610',
        '6NF' => 'E02000610',
        '6NG' => 'E02000610',
        '6NH' => 'E02000610',
        '6NJ' => 'E02000610',
        '6NL' => 'E02000610',
        '6NN' => 'E02000610',
        '6NP' => 'E02000610',
        '6NQ' => 'E02000610',
        '6NR' => 'E02000610',
        '6NS' => 'E02000610',
        '6NT' => 'E02000610',
        '6NU' => 'E02000610',
        '6NW' => 'E02000610',
        '6NX' => 'E02000610',
        '6NY' => 'E02000610',
        '6NZ' => 'E02006322',
        '6PA' => 'E02000610',
        '6PB' => 'E02000610',
        '6PD' => 'E02000610',
        '6PE' => 'E02000610',
        '6PF' => 'E02006322',
        '6PG' => 'E02000610',
        '6PH' => 'E02006322',
        '6PJ' => 'E02000610',
        '6PL' => 'E02000610',
        '6PN' => 'E02000610',
        '6PP' => 'E02000610',
        '6PQ' => 'E02000610',
        '6PR' => 'E02000610',
        '6PS' => 'E02000613',
        '6PT' => 'E02000602',
        '6PU' => 'E02000610',
        '6PW' => 'E02000610',
        '6PX' => 'E02000610',
        '6PY' => 'E02000610',
        '6PZ' => 'E02000610',
        '6QA' => 'E02000610',
        '6QB' => 'E02000610',
        '6QD' => 'E02000610',
        '6QE' => 'E02006322',
        '6QF' => 'E02000602',
        '6QG' => 'E02000610',
        '6QH' => 'E02000610',
        '6QJ' => 'E02000610',
        '6QL' => 'E02000610',
        '6QN' => 'E02000610',
        '6QP' => 'E02000613',
        '6QQ' => 'E02000610',
        '6QR' => 'E02000613',
        '6QS' => 'E02000613',
        '6QT' => 'E02000613',
        '6QU' => 'E02000610',
        '6QW' => 'E02000613',
        '6QX' => 'E02000610',
        '6QY' => 'E02000613',
        '6QZ' => 'E02000613',
        '6RA' => 'E02000613',
        '6RB' => 'E02000613',
        '6RD' => 'E02000610',
        '6RE' => 'E02000613',
        '6RF' => 'E02000613',
        '6RG' => 'E02000613',
        '6RH' => 'E02000613',
        '6RJ' => 'E02000613',
        '6RL' => 'E02000613',
        '6RN' => 'E02000613',
        '6RP' => 'E02006322',
        '6RQ' => 'E02000613',
        '6RR' => 'E02000613',
        '6RS' => 'E02000602',
        '6RT' => 'E02000610',
        '6RU' => 'E02000610',
        '6RW' => 'E02000613',
        '6RX' => 'E02000610',
        '6RY' => 'E02000610',
        '6RZ' => 'E02000610',
        '6SA' => 'E02006322',
        '6SB' => 'E02000610',
        '6SD' => 'E02000610',
        '6SE' => 'E02000610',
        '6SF' => 'E02000610',
        '6SG' => 'E02000610',
        '6SH' => 'E02000610',
        '6SJ' => 'E02000610',
        '6SL' => 'E02000610',
        '6SN' => 'E02000610',
        '6SP' => 'E02000610',
        '6SQ' => 'E02000610',
        '6SR' => 'E02000610',
        '6SS' => 'E02000610',
        '6SU' => 'E02000610',
        '6SW' => 'E02000610',
        '6UB' => 'E02000602',
        '6WA' => 'E02000610',
        '6WB' => 'E02000602',
        '6WD' => 'E02000602',
        '6WE' => 'E02000602',
        '6WF' => 'E02000610',
        '6WG' => 'E02000602',
        '6WH' => 'E02000602',
        '6WJ' => 'E02000610',
        '6WL' => 'E02000610',
        '6WN' => 'E02000610',
        '6WP' => 'E02000602',
        '6WQ' => 'E02000602',
        '6WR' => 'E02000602',
        '6WS' => 'E02000602',
        '6WT' => 'E02000602',
        '6WU' => 'E02000602',
        '6WW' => 'E02000602',
        '6WX' => 'E02000602',
        '6WY' => 'E02000602',
        '6WZ' => 'E02000602',
        '6XA' => 'E02000602',
        '6XB' => 'E02000602',
        '6XE' => 'E02000602',
        '6XQ' => 'E02000602',
        '6XU' => 'E02000602',
        '6XW' => 'E02000602',
        '6YA' => 'E02000602',
        '6YB' => 'E02000602',
        '6YD' => 'E02000610',
        '6YE' => 'E02000602',
        '6YF' => 'E02000602',
        '6YG' => 'E02000602',
        '6YH' => 'E02000610',
        '6YJ' => 'E02000610',
        '6YL' => 'E02000602',
        '6YN' => 'E02000602',
        '6YP' => 'E02000602',
        '6YQ' => 'E02000602',
        '6YR' => 'E02000602',
        '6YS' => 'E02000602',
        '6YT' => 'E02000602',
        '6YU' => 'E02000610',
        '6YW' => 'E02000610',
        '6YX' => 'E02000602',
        '6YY' => 'E02000602',
        '6YZ' => 'E02000602',
        '6ZA' => 'E02000602',
        '7AA' => 'E02000610',
        '7AB' => 'E02000610',
        '7AD' => 'E02000610',
        '7AE' => 'E02000610',
        '7AF' => 'E02000613',
        '7AG' => 'E02000613',
        '7AH' => 'E02000613',
        '7AJ' => 'E02000613',
        '7AL' => 'E02000613',
        '7AN' => 'E02000613',
        '7AP' => 'E02000613',
        '7AQ' => 'E02000613',
        '7AR' => 'E02000613',
        '7AS' => 'E02000613',
        '7AT' => 'E02000613',
        '7AU' => 'E02000613',
        '7AW' => 'E02000613',
        '7AX' => 'E02000613',
        '7AY' => 'E02000614',
        '7AZ' => 'E02000614',
        '7BA' => 'E02000614',
        '7BB' => 'E02000614',
        '7BD' => 'E02000614',
        '7BE' => 'E02000614',
        '7BF' => 'E02000614',
        '7BG' => 'E02000614',
        '7BH' => 'E02000614',
        '7BJ' => 'E02000614',
        '7BL' => 'E02000614',
        '7BN' => 'E02000614',
        '7BP' => 'E02000614',
        '7BQ' => 'E02000613',
        '7BS' => 'E02000602',
        '7BT' => 'E02000602',
        '7BU' => 'E02000614',
        '7BW' => 'E02000614',
        '7BX' => 'E02000613',
        '7BY' => 'E02000613',
        '7BZ' => 'E02000613',
        '7DA' => 'E02000613',
        '7DB' => 'E02000613',
        '7DD' => 'E02000614',
        '7DE' => 'E02000611',
        '7DF' => 'E02000611',
        '7DG' => 'E02000611',
        '7DH' => 'E02000614',
        '7DJ' => 'E02000614',
        '7DL' => 'E02000614',
        '7DN' => 'E02000614',
        '7DP' => 'E02000614',
        '7DQ' => 'E02000614',
        '7DR' => 'E02000614',
        '7DS' => 'E02000614',
        '7DT' => 'E02000614',
        '7DU' => 'E02000614',
        '7DW' => 'E02000614',
        '7DX' => 'E02000614',
        '7DY' => 'E02000614',
        '7DZ' => 'E02000614',
        '7EA' => 'E02000614',
        '7EB' => 'E02000614',
        '7ED' => 'E02000614',
        '7EE' => 'E02000614',
        '7EF' => 'E02000614',
        '7EG' => 'E02000614',
        '7EH' => 'E02000614',
        '7EJ' => 'E02000614',
        '7EL' => 'E02000614',
        '7EN' => 'E02000614',
        '7EP' => 'E02000614',
        '7EQ' => 'E02000614',
        '7ER' => 'E02000614',
        '7ES' => 'E02000614',
        '7ET' => 'E02000614',
        '7EU' => 'E02000602',
        '7EW' => 'E02000614',
        '7EX' => 'E02000614',
        '7EY' => 'E02000614',
        '7EZ' => 'E02000614',
        '7GD' => 'E02000614',
        '7HA' => 'E02000614',
        '7HB' => 'E02000614',
        '7HD' => 'E02000614',
        '7HE' => 'E02000614',
        '7HF' => 'E02000614',
        '7HG' => 'E02000614',
        '7HH' => 'E02000611',
        '7HJ' => 'E02000614',
        '7HL' => 'E02000614',
        '7HN' => 'E02000614',
        '7HP' => 'E02000614',
        '7HQ' => 'E02000614',
        '7HR' => 'E02000614',
        '7HS' => 'E02000614',
        '7HT' => 'E02000614',
        '7HU' => 'E02000614',
        '7HW' => 'E02000614',
        '7HX' => 'E02000614',
        '7HY' => 'E02000614',
        '7HZ' => 'E02000614',
        '7JA' => 'E02000614',
        '7JB' => 'E02000614',
        '7JD' => 'E02000614',
        '7JE' => 'E02000614',
        '7JF' => 'E02000614',
        '7JG' => 'E02000614',
        '7JH' => 'E02000614',
        '7JJ' => 'E02000614',
        '7JL' => 'E02000614',
        '7JN' => 'E02000614',
        '7JP' => 'E02000614',
        '7JQ' => 'E02000614',
        '7JR' => 'E02000614',
        '7JS' => 'E02000614',
        '7JT' => 'E02000614',
        '7JU' => 'E02000614',
        '7JW' => 'E02000614',
        '7JX' => 'E02000614',
        '7JY' => 'E02000614',
        '7JZ' => 'E02000614',
        '7LA' => 'E02000614',
        '7LB' => 'E02000613',
        '7LD' => 'E02000614',
        '7LE' => 'E02000614',
        '7LF' => 'E02000613',
        '7LG' => 'E02000613',
        '7LH' => 'E02000615',
        '7LJ' => 'E02000615',
        '7LL' => 'E02000615',
        '7LN' => 'E02000615',
        '7LP' => 'E02000615',
        '7LQ' => 'E02000615',
        '7LR' => 'E02000613',
        '7LS' => 'E02000615',
        '7LT' => 'E02000615',
        '7LU' => 'E02000614',
        '7LW' => 'E02000615',
        '7LX' => 'E02000614',
        '7LY' => 'E02000614',
        '7LZ' => 'E02000614',
        '7NA' => 'E02000614',
        '7NB' => 'E02000614',
        '7ND' => 'E02000614',
        '7NE' => 'E02000614',
        '7NF' => 'E02000614',
        '7NG' => 'E02000614',
        '7NH' => 'E02000614',
        '7NL' => 'E02000614',
        '7NN' => 'E02000614',
        '7NP' => 'E02000614',
        '7NR' => 'E02000614',
        '7NS' => 'E02000614',
        '7NT' => 'E02000614',
        '7NU' => 'E02000614',
        '7NW' => 'E02000614',
        '7NX' => 'E02000614',
        '7NY' => 'E02000614',
        '7PA' => 'E02000614',
        '7PB' => 'E02000614',
        '7PD' => 'E02000614',
        '7PF' => 'E02000614',
        '7PG' => 'E02000614',
        '7PH' => 'E02000614',
        '7PJ' => 'E02000613',
        '7PL' => 'E02000613',
        '7PN' => 'E02000614',
        '7PP' => 'E02000614',
        '7PQ' => 'E02000614',
        '7PR' => 'E02000614',
        '7PS' => 'E02000614',
        '7PT' => 'E02000614',
        '7PU' => 'E02000614',
        '7PW' => 'E02000614',
        '7PX' => 'E02000614',
        '7PY' => 'E02000614',
        '7PZ' => 'E02000614',
        '7QA' => 'E02000614',
        '7QD' => 'E02000614',
        '7QG' => 'E02000613',
        '7QH' => 'E02000613',
        '7QJ' => 'E02000613',
        '7QL' => 'E02000613',
        '7QN' => 'E02000614',
        '7QP' => 'E02000613',
        '7QQ' => 'E02000614',
        '7QR' => 'E02000613',
        '7QS' => 'E02000613',
        '7QT' => 'E02000614',
        '7QU' => 'E02000614',
        '7QW' => 'E02000614',
        '7QX' => 'E02000614',
        '7QY' => 'E02000614',
        '7QZ' => 'E02000614',
        '7RA' => 'E02000614',
        '7RB' => 'E02000615',
        '7RD' => 'E02000614',
        '7RE' => 'E02000614',
        '7RF' => 'E02000614',
        '7RG' => 'E02000613',
        '7RH' => 'E02000613',
        '7RJ' => 'E02000613',
        '7RL' => 'E02000613',
        '7RN' => 'E02000613',
        '7RP' => 'E02000614',
        '7RQ' => 'E02000613',
        '7RR' => 'E02000613',
        '7RS' => 'E02000613',
        '7RU' => 'E02000613',
        '7RX' => 'E02000613',
        '7RY' => 'E02000613',
        '7RZ' => 'E02000613',
        '7SA' => 'E02000613',
        '7SB' => 'E02000613',
        '7SD' => 'E02000613',
        '7SE' => 'E02000613',
        '7SF' => 'E02000613',
        '7SG' => 'E02000613',
        '7SH' => 'E02000613',
        '7SJ' => 'E02000614',
        '7SL' => 'E02000613',
        '7SN' => 'E02000614',
        '7SP' => 'E02000615',
        '7SQ' => 'E02000614',
        '7SR' => 'E02000613',
        '7SS' => 'E02000613',
        '7ST' => 'E02000613',
        '7SU' => 'E02000613',
        '7SW' => 'E02000614',
        '7SX' => 'E02000613',
        '7SY' => 'E02000613',
        '7SZ' => 'E02000615',
        '7TA' => 'E02000615',
        '7TB' => 'E02000613',
        '7TD' => 'E02000614',
        '7TE' => 'E02000614',
        '7TF' => 'E02000614',
        '7TG' => 'E02000613',
        '7TH' => 'E02000614',
        '7TJ' => 'E02000613',
        '7TL' => 'E02000613',
        '7TN' => 'E02000613',
        '7TP' => 'E02000613',
        '7TQ' => 'E02000614',
        '7TR' => 'E02000614',
        '7TS' => 'E02000613',
        '7TT' => 'E02000613',
        '7TU' => 'E02000613',
        '7TW' => 'E02000613',
        '7TX' => 'E02000613',
        '7TY' => 'E02000613',
        '7TZ' => 'E02000613',
        '7UA' => 'E02000613',
        '7UB' => 'E02000613',
        '7UD' => 'E02000613',
        '7UE' => 'E02000613',
        '7UF' => 'E02000613',
        '7UG' => 'E02000613',
        '7UH' => 'E02000613',
        '7UJ' => 'E02000613',
        '7UL' => 'E02000613',
        '7UN' => 'E02000613',
        '7UQ' => 'E02000613',
        '7UR' => 'E02000613',
        '7UT' => 'E02000613',
        '7UU' => 'E02000613',
        '7UW' => 'E02000613',
        '7WA' => 'E02000602',
        '7WB' => 'E02000602',
        '7WD' => 'E02000602',
        '7WE' => 'E02000602',
        '7WF' => 'E02000602',
        '7WG' => 'E02000602',
        '7WH' => 'E02000613',
        '7WJ' => 'E02000602',
        '7WL' => 'E02000613',
        '7WN' => 'E02000602',
        '7WP' => 'E02000613',
        '7WQ' => 'E02000602',
        '7WR' => 'E02000602',
        '7WS' => 'E02000602',
        '7WT' => 'E02000602',
        '7WU' => 'E02000602',
        '7WW' => 'E02000602',
        '7WX' => 'E02000602',
        '7WY' => 'E02000602',
        '7WZ' => 'E02000602',
        '7XA' => 'E02000614',
        '7XB' => 'E02000614',
        '7XD' => 'E02000614',
        '7XE' => 'E02000602',
        '7XF' => 'E02000614',
        '7XG' => 'E02000602',
        '7XL' => 'E02000614',
        '7XP' => 'E02000602',
        '7XT' => 'E02000614',
        '7XX' => 'E02000602',
        '7XY' => 'E02000602',
        '7XZ' => 'E02000602',
        '7YA' => 'E02000602',
        '7YB' => 'E02000613',
        '7YD' => 'E02000602',
        '7YE' => 'E02000602',
        '7YF' => 'E02000602',
        '7YG' => 'E02000613',
        '7YH' => 'E02000613',
        '7YJ' => 'E02000613',
        '7YL' => 'E02000602',
        '7YN' => 'E02000613',
        '7YP' => 'E02000613',
        '7YQ' => 'E02000613',
        '7YR' => 'E02000602',
        '7YS' => 'E02000602',
        '7YT' => 'E02000613',
        '7YU' => 'E02000602',
        '7YW' => 'E02000613',
        '7YX' => 'E02000602',
        '7YY' => 'E02000602',
        '7YZ' => 'E02000602',
        '7ZA' => 'E02000613',
        '7ZB' => 'E02000613',
        '7ZD' => 'E02000602',
        '7ZE' => 'E02000602',
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