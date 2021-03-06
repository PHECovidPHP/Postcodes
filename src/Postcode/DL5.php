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
final class DL5
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '4AA' => 'E02004343',
        '4AB' => 'E02004343',
        '4AD' => 'E02004343',
        '4AE' => 'E02004343',
        '4AF' => 'E02004343',
        '4AG' => 'E02004343',
        '4AH' => 'E02004343',
        '4AJ' => 'E02004343',
        '4AL' => 'E02004343',
        '4AN' => 'E02004343',
        '4AP' => 'E02004343',
        '4AQ' => 'E02004343',
        '4AR' => 'E02004343',
        '4AS' => 'E02004343',
        '4AT' => 'E02004343',
        '4AU' => 'E02004343',
        '4AW' => 'E02004343',
        '4AX' => 'E02004343',
        '4AY' => 'E02004343',
        '4AZ' => 'E02004343',
        '4BA' => 'E02004343',
        '4BB' => 'E02004343',
        '4BD' => 'E02004343',
        '4BE' => 'E02004343',
        '4BF' => 'E02004341',
        '4BG' => 'E02004343',
        '4BH' => 'E02004343',
        '4BJ' => 'E02004343',
        '4BL' => 'E02004343',
        '4BN' => 'E02004343',
        '4BP' => 'E02004343',
        '4BQ' => 'E02004343',
        '4BW' => 'E02004343',
        '4DA' => 'E02004343',
        '4DB' => 'E02004344',
        '4DD' => 'E02004343',
        '4DE' => 'E02004341',
        '4DF' => 'E02004341',
        '4DG' => 'E02004341',
        '4DH' => 'E02004344',
        '4DJ' => 'E02004344',
        '4DL' => 'E02004344',
        '4DN' => 'E02004344',
        '4DP' => 'E02004344',
        '4DQ' => 'E02004341',
        '4DR' => 'E02004344',
        '4DS' => 'E02004344',
        '4DT' => 'E02004344',
        '4DU' => 'E02004344',
        '4DW' => 'E02004344',
        '4DX' => 'E02004344',
        '4DY' => 'E02004344',
        '4DZ' => 'E02004344',
        '4EA' => 'E02004344',
        '4EB' => 'E02004344',
        '4ED' => 'E02004344',
        '4EE' => 'E02004344',
        '4EF' => 'E02004341',
        '4EG' => 'E02004344',
        '4EH' => 'E02004344',
        '4EJ' => 'E02004344',
        '4EL' => 'E02004344',
        '4EN' => 'E02004344',
        '4EP' => 'E02004344',
        '4EQ' => 'E02004344',
        '4ER' => 'E02004344',
        '4ES' => 'E02004344',
        '4ET' => 'E02004344',
        '4EU' => 'E02004344',
        '4EW' => 'E02004344',
        '4EX' => 'E02004344',
        '4EY' => 'E02004344',
        '4EZ' => 'E02004344',
        '4FA' => 'E02004341',
        '4FB' => 'E02004344',
        '4FD' => 'E02004341',
        '4FE' => 'E02004341',
        '4FF' => 'E02004341',
        '4FG' => 'E02004341',
        '4FH' => 'E02004341',
        '4HA' => 'E02004344',
        '4HB' => 'E02004344',
        '4HD' => 'E02004344',
        '4HE' => 'E02004344',
        '4HF' => 'E02004344',
        '4HP' => 'E02004343',
        '4HR' => 'E02004343',
        '4HS' => 'E02004343',
        '4HT' => 'E02004343',
        '4HX' => 'E02004343',
        '4HY' => 'E02004344',
        '4HZ' => 'E02004344',
        '4JA' => 'E02004344',
        '4JB' => 'E02004344',
        '4JD' => 'E02004344',
        '4JE' => 'E02004344',
        '4JF' => 'E02004344',
        '4JG' => 'E02004343',
        '4JH' => 'E02004343',
        '4JJ' => 'E02004343',
        '4JL' => 'E02004343',
        '4JN' => 'E02004343',
        '4JP' => 'E02004343',
        '4JQ' => 'E02004344',
        '4JR' => 'E02004343',
        '4JS' => 'E02004343',
        '4JT' => 'E02004343',
        '4JU' => 'E02004344',
        '4JW' => 'E02004343',
        '4JX' => 'E02004343',
        '4JY' => 'E02004344',
        '4LD' => 'E02004344',
        '4LE' => 'E02004344',
        '4LF' => 'E02004344',
        '4LG' => 'E02004344',
        '4LH' => 'E02004344',
        '4LJ' => 'E02004344',
        '4LL' => 'E02004344',
        '4LN' => 'E02004344',
        '4LP' => 'E02004344',
        '4LQ' => 'E02004344',
        '4LR' => 'E02004344',
        '4LS' => 'E02004344',
        '4LT' => 'E02004344',
        '4LU' => 'E02004344',
        '4LX' => 'E02004344',
        '4LY' => 'E02004344',
        '4LZ' => 'E02004344',
        '4NB' => 'E02004344',
        '4ND' => 'E02004344',
        '4NF' => 'E02004344',
        '4NG' => 'E02004344',
        '4NH' => 'E02004344',
        '4NJ' => 'E02004344',
        '4NL' => 'E02004343',
        '4NN' => 'E02004344',
        '4NP' => 'E02004344',
        '4NQ' => 'E02004344',
        '4NR' => 'E02004344',
        '4NS' => 'E02004344',
        '4NT' => 'E02004344',
        '4NU' => 'E02004344',
        '4NW' => 'E02004343',
        '4PA' => 'E02004341',
        '4PB' => 'E02004341',
        '4PD' => 'E02004344',
        '4PE' => 'E02004341',
        '4PF' => 'E02004341',
        '4PG' => 'E02004344',
        '4PH' => 'E02004341',
        '4PJ' => 'E02004342',
        '4PL' => 'E02004341',
        '4PN' => 'E02004341',
        '4PP' => 'E02004344',
        '4PR' => 'E02004344',
        '4PS' => 'E02004344',
        '4PT' => 'E02004344',
        '4PW' => 'E02004341',
        '4PZ' => 'E02004344',
        '4QA' => 'E02004342',
        '4QB' => 'E02004342',
        '4QD' => 'E02004342',
        '4QE' => 'E02004342',
        '4QF' => 'E02004342',
        '4QG' => 'E02004341',
        '4QH' => 'E02004342',
        '4QJ' => 'E02004342',
        '4QL' => 'E02004342',
        '4QN' => 'E02004342',
        '4QP' => 'E02004342',
        '4QQ' => 'E02004342',
        '4QR' => 'E02004341',
        '4QS' => 'E02004342',
        '4QT' => 'E02004342',
        '4QU' => 'E02004342',
        '4QW' => 'E02004342',
        '4QX' => 'E02004341',
        '4QY' => 'E02004341',
        '4QZ' => 'E02004341',
        '4RA' => 'E02004341',
        '4RB' => 'E02004342',
        '4RD' => 'E02004341',
        '4RE' => 'E02004341',
        '4RF' => 'E02004341',
        '4RG' => 'E02004341',
        '4RH' => 'E02004341',
        '4RJ' => 'E02004341',
        '4RL' => 'E02004341',
        '4RN' => 'E02004341',
        '4RP' => 'E02004341',
        '4RQ' => 'E02004341',
        '4RR' => 'E02004341',
        '4RS' => 'E02004341',
        '4RT' => 'E02004341',
        '4RU' => 'E02004341',
        '4RW' => 'E02004341',
        '4RX' => 'E02004341',
        '4RY' => 'E02004341',
        '4RZ' => 'E02004341',
        '4SA' => 'E02004344',
        '4SB' => 'E02004344',
        '4SD' => 'E02004344',
        '4SE' => 'E02004342',
        '4SF' => 'E02004342',
        '4SG' => 'E02004341',
        '4SH' => 'E02004344',
        '4SJ' => 'E02004342',
        '4SL' => 'E02004341',
        '4SN' => 'E02004341',
        '4SP' => 'E02004341',
        '4SQ' => 'E02004341',
        '4SR' => 'E02004341',
        '4SS' => 'E02004341',
        '4ST' => 'E02004341',
        '4SU' => 'E02004341',
        '4SW' => 'E02004341',
        '4SX' => 'E02004341',
        '4SY' => 'E02004341',
        '4SZ' => 'E02004341',
        '4TA' => 'E02004341',
        '4TB' => 'E02004341',
        '4TD' => 'E02004341',
        '4TE' => 'E02004341',
        '4TF' => 'E02004341',
        '4TG' => 'E02004341',
        '4TH' => 'E02004341',
        '4TJ' => 'E02004341',
        '4TL' => 'E02004341',
        '4TN' => 'E02004341',
        '4TP' => 'E02004341',
        '4TQ' => 'E02004341',
        '4TR' => 'E02004341',
        '4TS' => 'E02004341',
        '4TT' => 'E02004341',
        '4TU' => 'E02004341',
        '4TW' => 'E02004341',
        '4TX' => 'E02004341',
        '4TY' => 'E02004341',
        '4UA' => 'E02004341',
        '4UB' => 'E02004341',
        '4UD' => 'E02004341',
        '4UE' => 'E02004341',
        '4UF' => 'E02004341',
        '4UG' => 'E02004341',
        '4UH' => 'E02004341',
        '4UJ' => 'E02004341',
        '4UL' => 'E02004341',
        '4UN' => 'E02004341',
        '4UQ' => 'E02004341',
        '4UT' => 'E02004344',
        '4UU' => 'E02004342',
        '4UW' => 'E02004341',
        '4UX' => 'E02004341',
        '4UY' => 'E02004342',
        '4UZ' => 'E02004342',
        '4WA' => 'E02004344',
        '4WJ' => 'E02004344',
        '4WL' => 'E02004344',
        '4WN' => 'E02004344',
        '4WP' => 'E02004344',
        '4WR' => 'E02004344',
        '4WS' => 'E02004344',
        '4WT' => 'E02004342',
        '4WU' => 'E02004344',
        '4WW' => 'E02004344',
        '4WX' => 'E02004344',
        '4WY' => 'E02004344',
        '4WZ' => 'E02004342',
        '4XA' => 'E02004341',
        '4XB' => 'E02004341',
        '4XD' => 'E02004341',
        '4XE' => 'E02004341',
        '4XF' => 'E02004341',
        '4XG' => 'E02004341',
        '4XH' => 'E02004341',
        '4XJ' => 'E02004341',
        '4XL' => 'E02004341',
        '4XN' => 'E02004341',
        '4XP' => 'E02004341',
        '4XQ' => 'E02004341',
        '4XR' => 'E02004341',
        '4XS' => 'E02004341',
        '4XT' => 'E02004341',
        '4XU' => 'E02004344',
        '4XW' => 'E02004341',
        '4XX' => 'E02004341',
        '4XY' => 'E02004344',
        '4XZ' => 'E02004344',
        '4YA' => 'E02004344',
        '4YB' => 'E02004341',
        '4YD' => 'E02004341',
        '4YE' => 'E02004341',
        '4YF' => 'E02004341',
        '4YG' => 'E02004341',
        '4YH' => 'E02004341',
        '4YJ' => 'E02004344',
        '4YL' => 'E02004341',
        '4YN' => 'E02004341',
        '4YP' => 'E02004341',
        '4YQ' => 'E02004341',
        '4YR' => 'E02004341',
        '4YS' => 'E02004344',
        '4YT' => 'E02004344',
        '4YU' => 'E02004344',
        '4YW' => 'E02004344',
        '4YX' => 'E02004341',
        '4YY' => 'E02004344',
        '4YZ' => 'E02004344',
        '4ZD' => 'E02004341',
        '4ZE' => 'E02004341',
        '4ZF' => 'E02004341',
        '4ZY' => 'E02004344',
        '5AA' => 'E02004343',
        '5AB' => 'E02004343',
        '5AD' => 'E02004343',
        '5AE' => 'E02004343',
        '5AF' => 'E02004343',
        '5AG' => 'E02004343',
        '5AH' => 'E02004343',
        '5AJ' => 'E02004343',
        '5AL' => 'E02004343',
        '5AN' => 'E02004343',
        '5AP' => 'E02004343',
        '5AQ' => 'E02004343',
        '5AR' => 'E02004343',
        '5AS' => 'E02004343',
        '5AT' => 'E02004343',
        '5AU' => 'E02004343',
        '5AW' => 'E02004343',
        '5AX' => 'E02004343',
        '5AY' => 'E02004343',
        '5AZ' => 'E02004343',
        '5BA' => 'E02004343',
        '5BB' => 'E02004343',
        '5BD' => 'E02004343',
        '5BE' => 'E02004343',
        '5BF' => 'E02004343',
        '5BG' => 'E02004343',
        '5BH' => 'E02004343',
        '5BJ' => 'E02004343',
        '5BL' => 'E02004343',
        '5BN' => 'E02004343',
        '5BP' => 'E02004343',
        '5BQ' => 'E02004343',
        '5BW' => 'E02004343',
        '5DA' => 'E02004343',
        '5DB' => 'E02004343',
        '5DD' => 'E02004344',
        '5DH' => 'E02004343',
        '5DJ' => 'E02004343',
        '5DL' => 'E02004343',
        '5DN' => 'E02004343',
        '5DP' => 'E02004343',
        '5DR' => 'E02004343',
        '5DS' => 'E02004343',
        '5DT' => 'E02004343',
        '5DU' => 'E02004343',
        '5DW' => 'E02004343',
        '5DX' => 'E02004344',
        '5DY' => 'E02004344',
        '5DZ' => 'E02004344',
        '5EA' => 'E02004344',
        '5EB' => 'E02004344',
        '5ED' => 'E02004343',
        '5EE' => 'E02004343',
        '5EF' => 'E02004343',
        '5EG' => 'E02004343',
        '5EH' => 'E02004343',
        '5EJ' => 'E02004344',
        '5EL' => 'E02004343',
        '5EN' => 'E02004343',
        '5EP' => 'E02004343',
        '5EQ' => 'E02004343',
        '5ER' => 'E02004343',
        '5ES' => 'E02004343',
        '5ET' => 'E02004344',
        '5EU' => 'E02004343',
        '5EW' => 'E02004343',
        '5EX' => 'E02004343',
        '5EY' => 'E02004344',
        '5EZ' => 'E02004344',
        '5HA' => 'E02004344',
        '5HB' => 'E02004344',
        '5HD' => 'E02004344',
        '5HE' => 'E02004344',
        '5HF' => 'E02004344',
        '5HG' => 'E02004344',
        '5HH' => 'E02004344',
        '5HJ' => 'E02004344',
        '5HL' => 'E02004344',
        '5HN' => 'E02004344',
        '5HP' => 'E02004344',
        '5HQ' => 'E02004344',
        '5HR' => 'E02004344',
        '5HS' => 'E02004344',
        '5HT' => 'E02004344',
        '5HU' => 'E02004344',
        '5HW' => 'E02004344',
        '5HX' => 'E02004344',
        '5HY' => 'E02004344',
        '5HZ' => 'E02004344',
        '5JA' => 'E02004344',
        '5JB' => 'E02004344',
        '5JH' => 'E02004344',
        '5JJ' => 'E02004344',
        '5JL' => 'E02004344',
        '5JN' => 'E02004344',
        '5JP' => 'E02004344',
        '5JR' => 'E02004344',
        '5JS' => 'E02004344',
        '5JU' => 'E02004344',
        '5JW' => 'E02004344',
        '5JX' => 'E02004344',
        '5JY' => 'E02004344',
        '5JZ' => 'E02004344',
        '5LG' => 'E02004343',
        '5LH' => 'E02004344',
        '5LJ' => 'E02004344',
        '5LL' => 'E02004344',
        '5LN' => 'E02004343',
        '5LP' => 'E02004344',
        '5LQ' => 'E02004343',
        '5LR' => 'E02004344',
        '5LS' => 'E02004344',
        '5LT' => 'E02004344',
        '5LU' => 'E02004344',
        '5LW' => 'E02004344',
        '5LX' => 'E02004344',
        '5LY' => 'E02004343',
        '5LZ' => 'E02004343',
        '5NA' => 'E02004344',
        '5NB' => 'E02004344',
        '5ND' => 'E02004344',
        '5NE' => 'E02004344',
        '5NF' => 'E02004344',
        '5NG' => 'E02004344',
        '5NH' => 'E02004344',
        '5NP' => 'E02004343',
        '5NQ' => 'E02004344',
        '5NS' => 'E02004343',
        '5NT' => 'E02004343',
        '5NU' => 'E02004343',
        '5NX' => 'E02004343',
        '5PA' => 'E02004343',
        '5PB' => 'E02004343',
        '5PD' => 'E02004343',
        '5PE' => 'E02004343',
        '5PF' => 'E02004343',
        '5PG' => 'E02004343',
        '5PH' => 'E02004343',
        '5PJ' => 'E02004343',
        '5PL' => 'E02004343',
        '5PN' => 'E02004343',
        '5PP' => 'E02004343',
        '5PQ' => 'E02004343',
        '5PR' => 'E02004343',
        '5PS' => 'E02004343',
        '5PT' => 'E02004343',
        '5PU' => 'E02004343',
        '5PW' => 'E02004343',
        '5PX' => 'E02004343',
        '5PY' => 'E02004344',
        '5PZ' => 'E02004343',
        '5QA' => 'E02004343',
        '5QB' => 'E02004343',
        '5QG' => 'E02004344',
        '5QH' => 'E02004343',
        '5QJ' => 'E02004343',
        '5QL' => 'E02004343',
        '5QN' => 'E02004343',
        '5QP' => 'E02004343',
        '5QQ' => 'E02004344',
        '5QR' => 'E02004343',
        '5QS' => 'E02004343',
        '5QT' => 'E02004343',
        '5QU' => 'E02004343',
        '5QW' => 'E02004343',
        '5QX' => 'E02004343',
        '5QY' => 'E02004343',
        '5QZ' => 'E02004343',
        '5RA' => 'E02004343',
        '5RB' => 'E02004343',
        '5RD' => 'E02004343',
        '5RE' => 'E02004343',
        '5RF' => 'E02004343',
        '5RG' => 'E02004343',
        '5RH' => 'E02004343',
        '5RJ' => 'E02004343',
        '5RL' => 'E02004343',
        '5RN' => 'E02004343',
        '5RP' => 'E02004344',
        '5RQ' => 'E02004343',
        '5RR' => 'E02004344',
        '5RS' => 'E02004343',
        '5RT' => 'E02004344',
        '5RW' => 'E02004344',
        '5WA' => 'E02004344',
        '5WB' => 'E02004344',
        '5WU' => 'E02004344',
        '5WW' => 'E02004344',
        '5WX' => 'E02004344',
        '5WY' => 'E02004344',
        '5WZ' => 'E02004344',
        '5YP' => 'E02004344',
        '5YQ' => 'E02004344',
        '5YR' => 'E02004343',
        '5YS' => 'E02004344',
        '5YT' => 'E02004343',
        '5YU' => 'E02004344',
        '5YW' => 'E02004343',
        '5YX' => 'E02004344',
        '5YY' => 'E02004344',
        '5YZ' => 'E02004344',
        '6AB' => 'E02004344',
        '6AD' => 'E02004344',
        '6AE' => 'E02004344',
        '6AF' => 'E02004344',
        '6AG' => 'E02004344',
        '6AH' => 'E02004344',
        '6AJ' => 'E02004344',
        '6AL' => 'E02004344',
        '6AN' => 'E02002559',
        '6AP' => 'E02004344',
        '6AQ' => 'E02004344',
        '6AR' => 'E02004344',
        '6AS' => 'E02002559',
        '6AT' => 'E02004344',
        '6AU' => 'E02004344',
        '6AW' => 'E02004344',
        '6AX' => 'E02004344',
        '6AY' => 'E02004344',
        '6AZ' => 'E02004344',
        '6BA' => 'E02004344',
        '6BB' => 'E02002559',
        '6BD' => 'E02004344',
        '6BE' => 'E02004344',
        '6BF' => 'E02004344',
        '6BG' => 'E02004344',
        '6BH' => 'E02004344',
        '6BJ' => 'E02004344',
        '6BL' => 'E02004344',
        '6BN' => 'E02004344',
        '6BP' => 'E02004344',
        '6BQ' => 'E02004344',
        '6BW' => 'E02004344',
        '6DA' => 'E02004344',
        '6DB' => 'E02004344',
        '6DD' => 'E02004344',
        '6DE' => 'E02004344',
        '6DF' => 'E02004344',
        '6DG' => 'E02004344',
        '6DH' => 'E02004344',
        '6DJ' => 'E02004344',
        '6DL' => 'E02004344',
        '6DN' => 'E02004344',
        '6DP' => 'E02004344',
        '6DQ' => 'E02004344',
        '6DR' => 'E02004344',
        '6DS' => 'E02004344',
        '6DT' => 'E02004344',
        '6DU' => 'E02004344',
        '6DW' => 'E02004344',
        '6DX' => 'E02004344',
        '6DY' => 'E02004344',
        '6DZ' => 'E02004344',
        '6EA' => 'E02002559',
        '6EB' => 'E02004344',
        '6ED' => 'E02004344',
        '6EE' => 'E02004344',
        '6EF' => 'E02004344',
        '6EG' => 'E02004344',
        '6EH' => 'E02004344',
        '6EJ' => 'E02004344',
        '6EL' => 'E02004344',
        '6EN' => 'E02004344',
        '6EP' => 'E02004344',
        '6EQ' => 'E02004344',
        '6ES' => 'E02004344',
        '6EU' => 'E02004344',
        '6EW' => 'E02004344',
        '6EX' => 'E02004344',
        '6EY' => 'E02004344',
        '6EZ' => 'E02004344',
        '6FA' => 'E02004344',
        '6FB' => 'E02004344',
        '6FD' => 'E02002559',
        '6FE' => 'E02002559',
        '6FF' => 'E02004344',
        '6FG' => 'E02004344',
        '6FH' => 'E02004344',
        '6FJ' => 'E02004344',
        '6FL' => 'E02004344',
        '6FN' => 'E02004344',
        '6FP' => 'E02004344',
        '6FQ' => 'E02002559',
        '6FR' => 'E02004344',
        '6FS' => 'E02002559',
        '6FT' => 'E02004344',
        '6FW' => 'E02004344',
        '6FX' => 'E02002559',
        '6FY' => 'E02004344',
        '6FZ' => 'E02004344',
        '6GA' => 'E02002559',
        '6GB' => 'E02002559',
        '6GD' => 'E02004344',
        '6GE' => 'E02004344',
        '6GF' => 'E02004344',
        '6GG' => 'E02002559',
        '6GH' => 'E02002559',
        '6GJ' => 'E02002559',
        '6GL' => 'E02002559',
        '6GN' => 'E02002559',
        '6GP' => 'E02002559',
        '6GQ' => 'E02002559',
        '6GR' => 'E02002559',
        '6GS' => 'E02002559',
        '6GT' => 'E02004344',
        '6GU' => 'E02002559',
        '6HA' => 'E02004344',
        '6HB' => 'E02004344',
        '6HD' => 'E02004344',
        '6HE' => 'E02004344',
        '6HF' => 'E02004344',
        '6HJ' => 'E02004344',
        '6HL' => 'E02004344',
        '6HN' => 'E02004344',
        '6HP' => 'E02004344',
        '6HQ' => 'E02004344',
        '6HR' => 'E02004344',
        '6HS' => 'E02004344',
        '6HT' => 'E02004344',
        '6HU' => 'E02004344',
        '6HW' => 'E02004344',
        '6HX' => 'E02004344',
        '6HY' => 'E02004344',
        '6HZ' => 'E02004344',
        '6JA' => 'E02004343',
        '6JB' => 'E02004343',
        '6JD' => 'E02004343',
        '6JE' => 'E02004343',
        '6JF' => 'E02004343',
        '6JG' => 'E02004343',
        '6JH' => 'E02004339',
        '6JJ' => 'E02004339',
        '6JL' => 'E02004339',
        '6JN' => 'E02004343',
        '6JP' => 'E02004344',
        '6JQ' => 'E02004344',
        '6JR' => 'E02004344',
        '6JS' => 'E02004344',
        '6JT' => 'E02004344',
        '6JU' => 'E02004344',
        '6JW' => 'E02004344',
        '6JX' => 'E02004344',
        '6JY' => 'E02004344',
        '6JZ' => 'E02004344',
        '6LA' => 'E02004344',
        '6LB' => 'E02004344',
        '6LD' => 'E02004344',
        '6LE' => 'E02004344',
        '6LF' => 'E02004344',
        '6LG' => 'E02004344',
        '6LH' => 'E02004344',
        '6LJ' => 'E02004344',
        '6LL' => 'E02004344',
        '6LN' => 'E02004344',
        '6LP' => 'E02004344',
        '6LQ' => 'E02004344',
        '6LR' => 'E02004344',
        '6LS' => 'E02004339',
        '6LT' => 'E02004344',
        '6LU' => 'E02004344',
        '6LW' => 'E02004344',
        '6LX' => 'E02004344',
        '6LY' => 'E02004344',
        '6LZ' => 'E02004344',
        '6NA' => 'E02004344',
        '6NB' => 'E02004339',
        '6ND' => 'E02004344',
        '6NE' => 'E02004344',
        '6NF' => 'E02004344',
        '6NG' => 'E02004344',
        '6NH' => 'E02004344',
        '6NJ' => 'E02002559',
        '6NL' => 'E02002559',
        '6NN' => 'E02002559',
        '6NP' => 'E02002559',
        '6NQ' => 'E02004344',
        '6NR' => 'E02002559',
        '6NS' => 'E02002559',
        '6NT' => 'E02002559',
        '6NU' => 'E02002559',
        '6NW' => 'E02002559',
        '6NX' => 'E02002559',
        '6NY' => 'E02004344',
        '6NZ' => 'E02002559',
        '6PA' => 'E02002559',
        '6PB' => 'E02004344',
        '6PD' => 'E02002559',
        '6PE' => 'E02002559',
        '6PF' => 'E02002559',
        '6PG' => 'E02002559',
        '6PH' => 'E02002559',
        '6PJ' => 'E02002559',
        '6PL' => 'E02002559',
        '6PN' => 'E02002559',
        '6PP' => 'E02002559',
        '6PQ' => 'E02002559',
        '6PR' => 'E02002559',
        '6PS' => 'E02002559',
        '6PT' => 'E02002559',
        '6PU' => 'E02002559',
        '6PW' => 'E02002559',
        '6PX' => 'E02004344',
        '6PY' => 'E02004344',
        '6PZ' => 'E02004344',
        '6QA' => 'E02002559',
        '6QB' => 'E02004344',
        '6QD' => 'E02004344',
        '6QE' => 'E02002559',
        '6QF' => 'E02004344',
        '6QG' => 'E02004344',
        '6QH' => 'E02004344',
        '6QJ' => 'E02004344',
        '6QL' => 'E02004344',
        '6QN' => 'E02004344',
        '6QP' => 'E02004344',
        '6QQ' => 'E02002559',
        '6QR' => 'E02004344',
        '6QS' => 'E02004344',
        '6QT' => 'E02004344',
        '6QU' => 'E02004344',
        '6QW' => 'E02004344',
        '6QX' => 'E02002559',
        '6QY' => 'E02004344',
        '6QZ' => 'E02004344',
        '6RA' => 'E02002559',
        '6RB' => 'E02002559',
        '6RD' => 'E02002559',
        '6RE' => 'E02002559',
        '6RF' => 'E02002559',
        '6RG' => 'E02002559',
        '6RH' => 'E02002559',
        '6RJ' => 'E02002559',
        '6RL' => 'E02002559',
        '6RN' => 'E02002559',
        '6RP' => 'E02002559',
        '6RQ' => 'E02002559',
        '6RR' => 'E02002559',
        '6RS' => 'E02002559',
        '6RT' => 'E02002559',
        '6RU' => 'E02002559',
        '6RW' => 'E02002559',
        '6RX' => 'E02002559',
        '6RY' => 'E02002559',
        '6RZ' => 'E02002559',
        '6SA' => 'E02002559',
        '6SB' => 'E02002559',
        '6SD' => 'E02002559',
        '6SE' => 'E02002559',
        '6SF' => 'E02002559',
        '6SG' => 'E02004344',
        '6SH' => 'E02004344',
        '6SJ' => 'E02004344',
        '6SL' => 'E02004344',
        '6SN' => 'E02004344',
        '6SP' => 'E02004344',
        '6SQ' => 'E02004344',
        '6SR' => 'E02004344',
        '6SS' => 'E02004344',
        '6ST' => 'E02004344',
        '6SU' => 'E02004344',
        '6SW' => 'E02004344',
        '6SX' => 'E02004344',
        '6SY' => 'E02004344',
        '6SZ' => 'E02004344',
        '6TA' => 'E02004344',
        '6TB' => 'E02004344',
        '6TD' => 'E02004344',
        '6TE' => 'E02004344',
        '6TF' => 'E02004344',
        '6TG' => 'E02004344',
        '6TH' => 'E02004344',
        '6TJ' => 'E02004344',
        '6TL' => 'E02002559',
        '6TN' => 'E02002559',
        '6TP' => 'E02004344',
        '6TQ' => 'E02004344',
        '6TR' => 'E02004344',
        '6TS' => 'E02004344',
        '6TT' => 'E02004344',
        '6TU' => 'E02004344',
        '6TW' => 'E02002559',
        '6TX' => 'E02004344',
        '6UA' => 'E02004344',
        '6UB' => 'E02004344',
        '6UD' => 'E02004344',
        '6UE' => 'E02004344',
        '6UF' => 'E02004344',
        '6UG' => 'E02004344',
        '6UH' => 'E02004344',
        '6UJ' => 'E02004344',
        '6UL' => 'E02004344',
        '6UN' => 'E02004343',
        '6UP' => 'E02004344',
        '6UQ' => 'E02004343',
        '6UR' => 'E02004344',
        '6UT' => 'E02004343',
        '6UU' => 'E02004343',
        '6UW' => 'E02004344',
        '6UX' => 'E02004343',
        '6UY' => 'E02004344',
        '6UZ' => 'E02004344',
        '6WB' => 'E02004344',
        '6WD' => 'E02004344',
        '6WE' => 'E02004344',
        '6WF' => 'E02004344',
        '6WG' => 'E02004344',
        '6WH' => 'E02004344',
        '6WJ' => 'E02004344',
        '6WL' => 'E02004344',
        '6WN' => 'E02004344',
        '6WP' => 'E02004344',
        '6WQ' => 'E02004344',
        '6WR' => 'E02004344',
        '6WS' => 'E02004344',
        '6WT' => 'E02002559',
        '6WU' => 'E02002559',
        '6WW' => 'E02004344',
        '6WX' => 'E02004344',
        '6WY' => 'E02004344',
        '6WZ' => 'E02004343',
        '6XA' => 'E02004344',
        '6XB' => 'E02004344',
        '6XD' => 'E02004344',
        '6XE' => 'E02004344',
        '6XF' => 'E02004344',
        '6XH' => 'E02004344',
        '6XJ' => 'E02004344',
        '6XL' => 'E02002559',
        '6XN' => 'E02004344',
        '6XP' => 'E02004344',
        '6XQ' => 'E02004344',
        '6XR' => 'E02004344',
        '6XS' => 'E02004344',
        '6XT' => 'E02004344',
        '6XU' => 'E02004344',
        '6XW' => 'E02004344',
        '6XX' => 'E02004344',
        '6XY' => 'E02004344',
        '6XZ' => 'E02004344',
        '6YA' => 'E02004344',
        '6YB' => 'E02004344',
        '6YD' => 'E02004344',
        '6YE' => 'E02004344',
        '6YF' => 'E02004344',
        '6YG' => 'E02004344',
        '6YH' => 'E02004344',
        '6YJ' => 'E02004344',
        '6YL' => 'E02004344',
        '6YN' => 'E02004344',
        '6YP' => 'E02004344',
        '6YQ' => 'E02004344',
        '6YR' => 'E02004344',
        '6YS' => 'E02004344',
        '6YT' => 'E02004344',
        '6YU' => 'E02004344',
        '6YW' => 'E02004344',
        '6YX' => 'E02004344',
        '6YY' => 'E02004344',
        '6YZ' => 'E02004344',
        '6ZE' => 'E02004344',
        '6ZF' => 'E02004344',
        '7AA' => 'E02004344',
        '7AB' => 'E02004344',
        '7AD' => 'E02004344',
        '7AE' => 'E02004344',
        '7AF' => 'E02004344',
        '7AG' => 'E02004344',
        '7AH' => 'E02004344',
        '7AJ' => 'E02004344',
        '7AL' => 'E02004344',
        '7AN' => 'E02004342',
        '7AP' => 'E02004344',
        '7AQ' => 'E02004344',
        '7AR' => 'E02004344',
        '7AS' => 'E02004342',
        '7AT' => 'E02004342',
        '7AU' => 'E02004342',
        '7AW' => 'E02004341',
        '7AX' => 'E02004342',
        '7AY' => 'E02004344',
        '7AZ' => 'E02004344',
        '7BA' => 'E02004342',
        '7BB' => 'E02004342',
        '7BD' => 'E02004344',
        '7BE' => 'E02004344',
        '7BG' => 'E02004344',
        '7BQ' => 'E02004344',
        '7DA' => 'E02004344',
        '7DB' => 'E02004344',
        '7DD' => 'E02004344',
        '7DE' => 'E02004342',
        '7DF' => 'E02004342',
        '7DG' => 'E02004342',
        '7DH' => 'E02004342',
        '7DJ' => 'E02004342',
        '7DL' => 'E02004342',
        '7DN' => 'E02004342',
        '7DP' => 'E02004342',
        '7DQ' => 'E02004342',
        '7DR' => 'E02004342',
        '7DS' => 'E02004344',
        '7DT' => 'E02004342',
        '7DU' => 'E02004342',
        '7DW' => 'E02004342',
        '7DX' => 'E02004342',
        '7DY' => 'E02004342',
        '7DZ' => 'E02004342',
        '7EA' => 'E02004342',
        '7EB' => 'E02004342',
        '7ED' => 'E02004342',
        '7EE' => 'E02004342',
        '7EF' => 'E02004342',
        '7EG' => 'E02004342',
        '7EH' => 'E02004342',
        '7EJ' => 'E02004342',
        '7EL' => 'E02004341',
        '7EN' => 'E02004341',
        '7EP' => 'E02004342',
        '7EQ' => 'E02004342',
        '7ER' => 'E02004341',
        '7ES' => 'E02004342',
        '7ET' => 'E02004342',
        '7EU' => 'E02004342',
        '7EW' => 'E02004341',
        '7EX' => 'E02004342',
        '7EY' => 'E02004341',
        '7EZ' => 'E02004342',
        '7GA' => 'E02004342',
        '7HA' => 'E02004342',
        '7HB' => 'E02004342',
        '7HD' => 'E02004341',
        '7HE' => 'E02004341',
        '7HF' => 'E02004341',
        '7HG' => 'E02004342',
        '7HH' => 'E02004342',
        '7HJ' => 'E02004342',
        '7HL' => 'E02004341',
        '7HN' => 'E02004342',
        '7HP' => 'E02004341',
        '7HQ' => 'E02004342',
        '7HR' => 'E02004341',
        '7HS' => 'E02004341',
        '7HT' => 'E02004341',
        '7HU' => 'E02004341',
        '7HW' => 'E02004341',
        '7HX' => 'E02004341',
        '7HY' => 'E02004341',
        '7HZ' => 'E02004341',
        '7JA' => 'E02004341',
        '7JB' => 'E02004341',
        '7JD' => 'E02004341',
        '7JE' => 'E02004341',
        '7JF' => 'E02004341',
        '7JG' => 'E02004341',
        '7JH' => 'E02004341',
        '7JJ' => 'E02004341',
        '7JL' => 'E02004341',
        '7JN' => 'E02004341',
        '7JP' => 'E02004341',
        '7JQ' => 'E02004341',
        '7JR' => 'E02004341',
        '7JS' => 'E02004341',
        '7JT' => 'E02004341',
        '7LA' => 'E02004341',
        '7LB' => 'E02004341',
        '7LD' => 'E02004341',
        '7LE' => 'E02004341',
        '7LF' => 'E02004341',
        '7LG' => 'E02004341',
        '7LH' => 'E02004341',
        '7LJ' => 'E02004341',
        '7LL' => 'E02004341',
        '7LN' => 'E02004341',
        '7LP' => 'E02004341',
        '7LQ' => 'E02004341',
        '7LR' => 'E02004341',
        '7LS' => 'E02004341',
        '7LT' => 'E02004341',
        '7LU' => 'E02004341',
        '7LW' => 'E02004341',
        '7LX' => 'E02004341',
        '7LY' => 'E02004341',
        '7LZ' => 'E02004341',
        '7NA' => 'E02004342',
        '7NB' => 'E02004342',
        '7ND' => 'E02004342',
        '7NE' => 'E02004342',
        '7NF' => 'E02004342',
        '7NG' => 'E02004342',
        '7NH' => 'E02004342',
        '7NJ' => 'E02004342',
        '7NL' => 'E02004342',
        '7NN' => 'E02004342',
        '7NP' => 'E02004342',
        '7NQ' => 'E02004342',
        '7NR' => 'E02004342',
        '7NS' => 'E02004342',
        '7NT' => 'E02004342',
        '7NU' => 'E02004342',
        '7NW' => 'E02004342',
        '7NX' => 'E02004342',
        '7PA' => 'E02004342',
        '7PB' => 'E02004342',
        '7PE' => 'E02004342',
        '7PH' => 'E02004341',
        '7PJ' => 'E02004342',
        '7PL' => 'E02004341',
        '7PN' => 'E02004341',
        '7PP' => 'E02004341',
        '7PQ' => 'E02004341',
        '7PR' => 'E02004341',
        '7PS' => 'E02004341',
        '7PT' => 'E02004341',
        '7PU' => 'E02004341',
        '7PW' => 'E02004341',
        '7PX' => 'E02004341',
        '7PY' => 'E02004341',
        '7QA' => 'E02004341',
        '7QB' => 'E02004341',
        '7QD' => 'E02004341',
        '7QE' => 'E02004341',
        '7QG' => 'E02004341',
        '7QH' => 'E02004341',
        '7QJ' => 'E02004341',
        '7QL' => 'E02004341',
        '7QN' => 'E02004341',
        '7QP' => 'E02004341',
        '7QQ' => 'E02004341',
        '7QT' => 'E02004342',
        '7QU' => 'E02004341',
        '7QW' => 'E02004341',
        '7QX' => 'E02004341',
        '7QY' => 'E02004341',
        '7QZ' => 'E02004341',
        '7WP' => 'E02004344',
        '7WQ' => 'E02004344',
        '7WR' => 'E02004344',
        '7WT' => 'E02004344',
        '7WU' => 'E02004344',
        '7WW' => 'E02004344',
        '7WX' => 'E02004344',
        '7WY' => 'E02004341',
        '7WZ' => 'E02004341',
        '7YA' => 'E02004344',
        '7YB' => 'E02004344',
        '7YD' => 'E02004344',
        '7YE' => 'E02004344',
        '7YF' => 'E02004344',
        '7YG' => 'E02004344',
        '7YH' => 'E02004342',
        '7YJ' => 'E02004342',
        '7YL' => 'E02004342',
        '7YN' => 'E02004344',
        '7YP' => 'E02004342',
        '7YQ' => 'E02004341',
        '7YR' => 'E02004344',
        '7YS' => 'E02004342',
        '7YT' => 'E02004341',
        '7YU' => 'E02004341',
        '7YW' => 'E02004342',
        '7YX' => 'E02004341',
        '7YY' => 'E02004341',
        '7YZ' => 'E02004341',
        '9AD' => 'E02004344',
        '9AF' => 'E02004344',
        '9AJ' => 'E02004344',
        '9AN' => 'E02004344',
        '9AP' => 'E02004344',
        '9AQ' => 'E02004344',
        '9AS' => 'E02004344',
        '9AU' => 'E02004344',
        '9AW' => 'E02004344',
        '9AX' => 'E02004344',
        '9AY' => 'E02004344',
        '9AZ' => 'E02004344',
        '9BA' => 'E02004344',
        '9BB' => 'E02004344',
        '9BD' => 'E02004344',
        '9BE' => 'E02004344',
        '9BF' => 'E02004344',
        '9BG' => 'E02004344',
        '9BH' => 'E02004344',
        '9BJ' => 'E02004344',
        '9BL' => 'E02004344',
        '9BN' => 'E02004344',
        '9BP' => 'E02004344',
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
