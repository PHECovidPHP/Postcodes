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
final class N14
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '4AA' => 'E02000296',
        '4AB' => 'E02000296',
        '4AD' => 'E02000296',
        '4AE' => 'E02000296',
        '4AF' => 'E02000296',
        '4AG' => 'E02000296',
        '4AH' => 'E02000296',
        '4AJ' => 'E02000296',
        '4AL' => 'E02000296',
        '4AN' => 'E02000296',
        '4AP' => 'E02000287',
        '4AQ' => 'E02000287',
        '4AR' => 'E02000296',
        '4AS' => 'E02000287',
        '4AT' => 'E02000296',
        '4AU' => 'E02000287',
        '4AW' => 'E02000287',
        '4AX' => 'E02000287',
        '4AY' => 'E02000287',
        '4AZ' => 'E02000287',
        '4BA' => 'E02000287',
        '4BB' => 'E02000287',
        '4BD' => 'E02000296',
        '4BE' => 'E02000296',
        '4BF' => 'E02000296',
        '4BG' => 'E02000296',
        '4BH' => 'E02000296',
        '4BJ' => 'E02000296',
        '4BL' => 'E02000296',
        '4BN' => 'E02000296',
        '4BP' => 'E02000287',
        '4BQ' => 'E02000296',
        '4BS' => 'E02000296',
        '4BT' => 'E02000296',
        '4BU' => 'E02000296',
        '4BW' => 'E02000296',
        '4BX' => 'E02000296',
        '4BY' => 'E02000296',
        '4BZ' => 'E02000296',
        '4DA' => 'E02000296',
        '4DB' => 'E02000296',
        '4DD' => 'E02000296',
        '4DE' => 'E02000296',
        '4DF' => 'E02000296',
        '4DG' => 'E02000296',
        '4DH' => 'E02000296',
        '4DJ' => 'E02000296',
        '4DL' => 'E02000296',
        '4DN' => 'E02000296',
        '4DP' => 'E02000296',
        '4DQ' => 'E02000296',
        '4DR' => 'E02000296',
        '4DS' => 'E02000296',
        '4DT' => 'E02000295',
        '4DU' => 'E02000295',
        '4DW' => 'E02000296',
        '4DX' => 'E02000295',
        '4DY' => 'E02000295',
        '4DZ' => 'E02000296',
        '4EA' => 'E02000296',
        '4EB' => 'E02000296',
        '4ED' => 'E02000296',
        '4EE' => 'E02000296',
        '4EF' => 'E02000296',
        '4EG' => 'E02000296',
        '4EH' => 'E02000296',
        '4EJ' => 'E02000296',
        '4EL' => 'E02000296',
        '4EN' => 'E02000296',
        '4EP' => 'E02000296',
        '4EQ' => 'E02000296',
        '4ER' => 'E02000296',
        '4ES' => 'E02000296',
        '4ET' => 'E02000296',
        '4EU' => 'E02000296',
        '4EW' => 'E02000296',
        '4EX' => 'E02000296',
        '4EY' => 'E02000287',
        '4EZ' => 'E02000287',
        '4FA' => 'E02000296',
        '4FB' => 'E02000296',
        '4FD' => 'E02000296',
        '4FE' => 'E02000296',
        '4FF' => 'E02000296',
        '4FG' => 'E02000296',
        '4FH' => 'E02000296',
        '4HA' => 'E02000287',
        '4HB' => 'E02000287',
        '4HD' => 'E02000287',
        '4HE' => 'E02000287',
        '4HF' => 'E02000287',
        '4HG' => 'E02000296',
        '4HH' => 'E02000296',
        '4HJ' => 'E02000296',
        '4HL' => 'E02000296',
        '4HN' => 'E02000287',
        '4HP' => 'E02000287',
        '4HQ' => 'E02000287',
        '4HR' => 'E02000287',
        '4HS' => 'E02000287',
        '4HT' => 'E02000287',
        '4HU' => 'E02000287',
        '4HW' => 'E02000026',
        '4HX' => 'E02000296',
        '4HY' => 'E02000296',
        '4HZ' => 'E02000296',
        '4JA' => 'E02000287',
        '4JB' => 'E02000295',
        '4JD' => 'E02000296',
        '4JF' => 'E02000295',
        '4JG' => 'E02000296',
        '4JH' => 'E02000295',
        '4JJ' => 'E02000295',
        '4JL' => 'E02000296',
        '4JN' => 'E02000296',
        '4JP' => 'E02000296',
        '4JQ' => 'E02000296',
        '4JR' => 'E02000296',
        '4JS' => 'E02000296',
        '4JT' => 'E02000296',
        '4JU' => 'E02000295',
        '4JW' => 'E02000296',
        '4JX' => 'E02000296',
        '4JY' => 'E02000295',
        '4JZ' => 'E02000296',
        '4LA' => 'E02000295',
        '4LB' => 'E02000295',
        '4LD' => 'E02000295',
        '4LE' => 'E02000295',
        '4LF' => 'E02000295',
        '4LG' => 'E02000295',
        '4LH' => 'E02000295',
        '4LJ' => 'E02000295',
        '4LL' => 'E02000295',
        '4LN' => 'E02000295',
        '4LP' => 'E02000295',
        '4LQ' => 'E02000295',
        '4LR' => 'E02000295',
        '4LT' => 'E02000296',
        '4LU' => 'E02000296',
        '4LX' => 'E02000296',
        '4LY' => 'E02000296',
        '4LZ' => 'E02000296',
        '4NA' => 'E02000296',
        '4NB' => 'E02000296',
        '4ND' => 'E02000296',
        '4NE' => 'E02000296',
        '4NF' => 'E02000296',
        '4NG' => 'E02000296',
        '4NH' => 'E02000296',
        '4NJ' => 'E02000296',
        '4NL' => 'E02000296',
        '4NN' => 'E02000296',
        '4NP' => 'E02000296',
        '4NQ' => 'E02000296',
        '4NR' => 'E02000296',
        '4NS' => 'E02000296',
        '4NT' => 'E02000296',
        '4NU' => 'E02000296',
        '4NW' => 'E02000296',
        '4NX' => 'E02000296',
        '4NY' => 'E02000296',
        '4NZ' => 'E02000296',
        '4PA' => 'E02000296',
        '4PB' => 'E02000296',
        '4PD' => 'E02000296',
        '4PE' => 'E02000296',
        '4PF' => 'E02000026',
        '4PG' => 'E02000296',
        '4PH' => 'E02000296',
        '4PJ' => 'E02000296',
        '4PL' => 'E02000296',
        '4PN' => 'E02000296',
        '4PP' => 'E02000026',
        '4PQ' => 'E02000026',
        '4PR' => 'E02000296',
        '4PS' => 'E02000026',
        '4PT' => 'E02000296',
        '4PU' => 'E02000296',
        '4PW' => 'E02000026',
        '4PX' => 'E02000296',
        '4PY' => 'E02000296',
        '4PZ' => 'E02000296',
        '4QA' => 'E02000296',
        '4QB' => 'E02000296',
        '4QD' => 'E02000296',
        '4QE' => 'E02000296',
        '4QG' => 'E02000296',
        '4QH' => 'E02000296',
        '4QJ' => 'E02000296',
        '4QL' => 'E02000296',
        '4QN' => 'E02000296',
        '4QP' => 'E02000296',
        '4QQ' => 'E02000296',
        '4QR' => 'E02000296',
        '4QU' => 'E02000026',
        '4QW' => 'E02000296',
        '4QX' => 'E02000296',
        '4QY' => 'E02000296',
        '4QZ' => 'E02000296',
        '4RA' => 'E02000296',
        '4RB' => 'E02000296',
        '4RD' => 'E02000296',
        '4RE' => 'E02000296',
        '4RG' => 'E02000296',
        '4RH' => 'E02000296',
        '4RJ' => 'E02000296',
        '4RL' => 'E02000296',
        '4RN' => 'E02000296',
        '4RP' => 'E02000296',
        '4RR' => 'E02000296',
        '4RS' => 'E02000295',
        '4RT' => 'E02000295',
        '4RU' => 'E02000295',
        '4RW' => 'E02000296',
        '4RX' => 'E02000295',
        '4RY' => 'E02000295',
        '4RZ' => 'E02000295',
        '4SA' => 'E02000296',
        '4SD' => 'E02000296',
        '4SE' => 'E02000296',
        '4SG' => 'E02000296',
        '4SH' => 'E02000296',
        '4SJ' => 'E02000295',
        '4SL' => 'E02000289',
        '4SN' => 'E02000289',
        '4SP' => 'E02000289',
        '4SR' => 'E02000289',
        '4SS' => 'E02000289',
        '4ST' => 'E02000289',
        '4SU' => 'E02000289',
        '4SX' => 'E02000289',
        '4SY' => 'E02000289',
        '4SZ' => 'E02000296',
        '4TA' => 'E02000289',
        '4TB' => 'E02000295',
        '4TD' => 'E02000289',
        '4TE' => 'E02000289',
        '4TF' => 'E02000289',
        '4TG' => 'E02000289',
        '4TL' => 'E02000296',
        '4TN' => 'E02000296',
        '4TP' => 'E02000289',
        '4TQ' => 'E02000296',
        '4TR' => 'E02000289',
        '4TS' => 'E02000289',
        '4TT' => 'E02000289',
        '4TU' => 'E02000289',
        '4TW' => 'E02000296',
        '4TX' => 'E02000289',
        '4TY' => 'E02000289',
        '4TZ' => 'E02000289',
        '4UA' => 'E02000289',
        '4UB' => 'E02000296',
        '4UD' => 'E02000289',
        '4UE' => 'E02000289',
        '4UF' => 'E02000289',
        '4UG' => 'E02000289',
        '4UH' => 'E02000289',
        '4UJ' => 'E02000289',
        '4UL' => 'E02000296',
        '4UQ' => 'E02000289',
        '4UR' => 'E02000296',
        '4US' => 'E02000296',
        '4UT' => 'E02000296',
        '4UU' => 'E02000296',
        '4UW' => 'E02000296',
        '4UX' => 'E02000296',
        '4UY' => 'E02000296',
        '4UZ' => 'E02000296',
        '4WA' => 'E02000296',
        '4WB' => 'E02000296',
        '4WD' => 'E02000296',
        '4WE' => 'E02000296',
        '4WF' => 'E02000296',
        '4WG' => 'E02000296',
        '4WH' => 'E02000296',
        '4WJ' => 'E02000296',
        '4WL' => 'E02000296',
        '4WN' => 'E02000296',
        '4WP' => 'E02000296',
        '4WQ' => 'E02000296',
        '4WR' => 'E02000296',
        '4WS' => 'E02000296',
        '4WT' => 'E02000296',
        '4WU' => 'E02000296',
        '4WW' => 'E02000296',
        '4WX' => 'E02000296',
        '4WY' => 'E02000296',
        '4WZ' => 'E02000296',
        '4XA' => 'E02000296',
        '4XB' => 'E02000296',
        '4XD' => 'E02000289',
        '4XE' => 'E02000289',
        '4XF' => 'E02000296',
        '4XG' => 'E02000289',
        '4XH' => 'E02000289',
        '4XJ' => 'E02000289',
        '4XL' => 'E02000289',
        '4XN' => 'E02000289',
        '4XP' => 'E02000296',
        '4XQ' => 'E02000296',
        '4XR' => 'E02000289',
        '4XS' => 'E02000296',
        '4XT' => 'E02000296',
        '4XU' => 'E02000296',
        '4XW' => 'E02000296',
        '4XX' => 'E02000296',
        '4XY' => 'E02000296',
        '4XZ' => 'E02000296',
        '4YA' => 'E02000296',
        '4YB' => 'E02000296',
        '4YD' => 'E02000296',
        '4YE' => 'E02000296',
        '4YF' => 'E02000296',
        '4YG' => 'E02000296',
        '4YH' => 'E02000296',
        '4YJ' => 'E02000296',
        '4YL' => 'E02000296',
        '4YN' => 'E02000296',
        '4YP' => 'E02000296',
        '4YQ' => 'E02000296',
        '4YR' => 'E02000296',
        '4YT' => 'E02000296',
        '4YU' => 'E02000296',
        '4YW' => 'E02000296',
        '4YX' => 'E02000296',
        '4YY' => 'E02000296',
        '4YZ' => 'E02000287',
        '4ZA' => 'E02000296',
        '4ZB' => 'E02000296',
        '4ZD' => 'E02000296',
        '4ZE' => 'E02000296',
        '4ZF' => 'E02000296',
        '4ZG' => 'E02000296',
        '4ZH' => 'E02000296',
        '4ZJ' => 'E02000296',
        '4ZL' => 'E02000296',
        '4ZP' => 'E02000296',
        '5AA' => 'E02000296',
        '5AB' => 'E02000296',
        '5AD' => 'E02000296',
        '5AE' => 'E02000032',
        '5AF' => 'E02000032',
        '5AG' => 'E02000032',
        '5AH' => 'E02000032',
        '5AJ' => 'E02000032',
        '5AL' => 'E02000032',
        '5AN' => 'E02000296',
        '5AP' => 'E02000032',
        '5AQ' => 'E02000296',
        '5AR' => 'E02000032',
        '5AS' => 'E02000032',
        '5AT' => 'E02000032',
        '5AU' => 'E02000032',
        '5AW' => 'E02000032',
        '5AX' => 'E02000032',
        '5AY' => 'E02000032',
        '5AZ' => 'E02000296',
        '5BA' => 'E02000032',
        '5BB' => 'E02000032',
        '5BD' => 'E02000032',
        '5BE' => 'E02000032',
        '5BF' => 'E02000032',
        '5BG' => 'E02000296',
        '5BH' => 'E02000296',
        '5BJ' => 'E02000296',
        '5BL' => 'E02000296',
        '5BN' => 'E02000296',
        '5BP' => 'E02000296',
        '5BQ' => 'E02000296',
        '5BS' => 'E02000296',
        '5BT' => 'E02000296',
        '5BU' => 'E02000295',
        '5BW' => 'E02000296',
        '5BX' => 'E02000032',
        '5BY' => 'E02000032',
        '5DA' => 'E02000032',
        '5DB' => 'E02000296',
        '5DD' => 'E02000296',
        '5DE' => 'E02000032',
        '5DF' => 'E02000296',
        '5DG' => 'E02000032',
        '5DH' => 'E02000032',
        '5DJ' => 'E02000032',
        '5DL' => 'E02000032',
        '5DN' => 'E02000032',
        '5DP' => 'E02000032',
        '5DR' => 'E02000033',
        '5DS' => 'E02000032',
        '5DT' => 'E02000032',
        '5DU' => 'E02000033',
        '5DW' => 'E02000032',
        '5DX' => 'E02000032',
        '5DY' => 'E02000032',
        '5DZ' => 'E02000296',
        '5EA' => 'E02000032',
        '5EB' => 'E02000032',
        '5ED' => 'E02000032',
        '5EE' => 'E02000032',
        '5EF' => 'E02000032',
        '5EG' => 'E02000296',
        '5EH' => 'E02000296',
        '5EJ' => 'E02000296',
        '5EL' => 'E02000296',
        '5EN' => 'E02000296',
        '5EP' => 'E02000296',
        '5EQ' => 'E02000296',
        '5ER' => 'E02000032',
        '5ES' => 'E02000032',
        '5ET' => 'E02000296',
        '5EU' => 'E02000296',
        '5EW' => 'E02000296',
        '5EX' => 'E02000296',
        '5EY' => 'E02000296',
        '5EZ' => 'E02000296',
        '5HA' => 'E02000296',
        '5HB' => 'E02000032',
        '5HD' => 'E02000296',
        '5HE' => 'E02000032',
        '5HF' => 'E02000032',
        '5HG' => 'E02000296',
        '5HH' => 'E02000296',
        '5HJ' => 'E02000296',
        '5HL' => 'E02000296',
        '5HN' => 'E02000296',
        '5HP' => 'E02000296',
        '5HR' => 'E02000296',
        '5HS' => 'E02000296',
        '5HT' => 'E02000296',
        '5HU' => 'E02000296',
        '5HW' => 'E02000296',
        '5HX' => 'E02000032',
        '5HY' => 'E02000296',
        '5HZ' => 'E02000032',
        '5JA' => 'E02000032',
        '5JB' => 'E02000032',
        '5JD' => 'E02000032',
        '5JE' => 'E02000032',
        '5JF' => 'E02000032',
        '5JG' => 'E02000032',
        '5JH' => 'E02000032',
        '5JJ' => 'E02000032',
        '5JL' => 'E02000032',
        '5JN' => 'E02000032',
        '5JP' => 'E02000032',
        '5JR' => 'E02000032',
        '5JS' => 'E02000032',
        '5JT' => 'E02000032',
        '5JU' => 'E02000032',
        '5JW' => 'E02000032',
        '5JX' => 'E02000032',
        '5JY' => 'E02000032',
        '5LA' => 'E02000296',
        '5LD' => 'E02000032',
        '5LE' => 'E02000032',
        '5LF' => 'E02000032',
        '5LG' => 'E02000032',
        '5LH' => 'E02000032',
        '5LJ' => 'E02000032',
        '5LL' => 'E02000032',
        '5LN' => 'E02000032',
        '5LP' => 'E02000032',
        '5LR' => 'E02000032',
        '5LS' => 'E02000032',
        '5LT' => 'E02000032',
        '5LU' => 'E02000032',
        '5LW' => 'E02000296',
        '5LX' => 'E02000032',
        '5LY' => 'E02000032',
        '5LZ' => 'E02000296',
        '5NA' => 'E02000032',
        '5NB' => 'E02000032',
        '5ND' => 'E02000032',
        '5NE' => 'E02000032',
        '5NF' => 'E02000296',
        '5NG' => 'E02000032',
        '5NH' => 'E02000032',
        '5NJ' => 'E02000032',
        '5NL' => 'E02000032',
        '5NN' => 'E02000032',
        '5NP' => 'E02000032',
        '5NQ' => 'E02000032',
        '5NR' => 'E02000032',
        '5NS' => 'E02000032',
        '5NY' => 'E02000296',
        '5PA' => 'E02000296',
        '5PB' => 'E02000296',
        '5PD' => 'E02000296',
        '5PE' => 'E02000296',
        '5PF' => 'E02000032',
        '5PG' => 'E02000032',
        '5PH' => 'E02000296',
        '5PJ' => 'E02000296',
        '5PL' => 'E02000296',
        '5PN' => 'E02000296',
        '5PP' => 'E02000296',
        '5PQ' => 'E02000032',
        '5PR' => 'E02000296',
        '5PS' => 'E02000296',
        '5PT' => 'E02000296',
        '5PU' => 'E02000296',
        '5PW' => 'E02000296',
        '5PX' => 'E02000295',
        '5PY' => 'E02000296',
        '5QA' => 'E02000296',
        '5QB' => 'E02000296',
        '5QD' => 'E02000296',
        '5QE' => 'E02000296',
        '5QF' => 'E02000296',
        '5QG' => 'E02000296',
        '5QH' => 'E02000296',
        '5QJ' => 'E02000296',
        '5QL' => 'E02000296',
        '5QN' => 'E02000296',
        '5QP' => 'E02000296',
        '5QQ' => 'E02000296',
        '5QR' => 'E02000296',
        '5QS' => 'E02000296',
        '5QU' => 'E02000296',
        '5QW' => 'E02000296',
        '5QX' => 'E02000296',
        '5QZ' => 'E02000296',
        '5RA' => 'E02000032',
        '5RB' => 'E02000032',
        '5RD' => 'E02000032',
        '5RE' => 'E02000032',
        '5RG' => 'E02000032',
        '5RH' => 'E02000032',
        '5RJ' => 'E02000032',
        '5RL' => 'E02000032',
        '5RN' => 'E02000032',
        '5RP' => 'E02000032',
        '5RR' => 'E02000032',
        '5RS' => 'E02000032',
        '5RT' => 'E02000032',
        '5RU' => 'E02000032',
        '5RX' => 'E02000032',
        '5RY' => 'E02000032',
        '5SA' => 'E02000032',
        '5SB' => 'E02000032',
        '5SD' => 'E02000032',
        '5SE' => 'E02000032',
        '5SF' => 'E02000032',
        '5SG' => 'E02000032',
        '5SH' => 'E02000296',
        '5SJ' => 'E02000032',
        '5SL' => 'E02000296',
        '5SN' => 'E02000296',
        '5ST' => 'E02000296',
        '5UZ' => 'E02000296',
        '5WA' => 'E02000296',
        '5WB' => 'E02000296',
        '5WD' => 'E02000296',
        '5WE' => 'E02000296',
        '5WF' => 'E02000296',
        '5WG' => 'E02000296',
        '5WH' => 'E02000296',
        '5WJ' => 'E02000296',
        '5WL' => 'E02000296',
        '5WN' => 'E02000296',
        '5WP' => 'E02000296',
        '5WQ' => 'E02000296',
        '5WR' => 'E02000032',
        '5WS' => 'E02000296',
        '5WT' => 'E02000296',
        '5WU' => 'E02000296',
        '5WW' => 'E02000296',
        '5WX' => 'E02000296',
        '5WY' => 'E02000032',
        '5WZ' => 'E02000296',
        '5XA' => 'E02000296',
        '5XB' => 'E02000296',
        '5XD' => 'E02000296',
        '5XF' => 'E02000296',
        '5XH' => 'E02000296',
        '5XN' => 'E02000296',
        '5XR' => 'E02000296',
        '5XS' => 'E02000296',
        '5XT' => 'E02000296',
        '5XU' => 'E02000296',
        '5XW' => 'E02000296',
        '5XX' => 'E02000296',
        '5XY' => 'E02000296',
        '5XZ' => 'E02000296',
        '5YQ' => 'E02000296',
        '5ZA' => 'E02000032',
        '5ZB' => 'E02000296',
        '5ZD' => 'E02000296',
        '5ZE' => 'E02000296',
        '5ZP' => 'E02000296',
        '6AA' => 'E02000296',
        '6AB' => 'E02000296',
        '6AD' => 'E02000295',
        '6AE' => 'E02000295',
        '6AF' => 'E02000295',
        '6AG' => 'E02000295',
        '6AH' => 'E02000295',
        '6AJ' => 'E02000295',
        '6AL' => 'E02000295',
        '6AN' => 'E02000295',
        '6AP' => 'E02000295',
        '6AQ' => 'E02000296',
        '6AR' => 'E02000295',
        '6AS' => 'E02000295',
        '6AT' => 'E02000295',
        '6AU' => 'E02000295',
        '6AW' => 'E02000304',
        '6AX' => 'E02000295',
        '6AY' => 'E02000295',
        '6AZ' => 'E02000295',
        '6BA' => 'E02000295',
        '6BB' => 'E02000295',
        '6BD' => 'E02000295',
        '6BE' => 'E02000295',
        '6BF' => 'E02000295',
        '6BG' => 'E02000295',
        '6BH' => 'E02000295',
        '6BJ' => 'E02000296',
        '6BL' => 'E02000296',
        '6BN' => 'E02000296',
        '6BP' => 'E02000296',
        '6BQ' => 'E02000296',
        '6BS' => 'E02000296',
        '6BT' => 'E02000296',
        '6BU' => 'E02000296',
        '6BW' => 'E02000296',
        '6BX' => 'E02000296',
        '6BY' => 'E02000304',
        '6BZ' => 'E02000296',
        '6DA' => 'E02000296',
        '6DB' => 'E02000304',
        '6DD' => 'E02000304',
        '6DE' => 'E02000304',
        '6DF' => 'E02000296',
        '6DG' => 'E02000304',
        '6DH' => 'E02000304',
        '6DJ' => 'E02000296',
        '6DL' => 'E02000304',
        '6DN' => 'E02000304',
        '6DP' => 'E02000304',
        '6DQ' => 'E02000296',
        '6DR' => 'E02000304',
        '6DS' => 'E02000304',
        '6DT' => 'E02000296',
        '6DU' => 'E02000304',
        '6DW' => 'E02000304',
        '6DX' => 'E02000304',
        '6DY' => 'E02000304',
        '6DZ' => 'E02000296',
        '6EA' => 'E02000296',
        '6EB' => 'E02000296',
        '6ED' => 'E02000296',
        '6EE' => 'E02000296',
        '6EF' => 'E02000304',
        '6EG' => 'E02000296',
        '6EH' => 'E02000304',
        '6EJ' => 'E02000304',
        '6EL' => 'E02000304',
        '6EN' => 'E02000304',
        '6EP' => 'E02000304',
        '6EQ' => 'E02000296',
        '6ER' => 'E02000296',
        '6ES' => 'E02000296',
        '6ET' => 'E02000304',
        '6EU' => 'E02000296',
        '6EW' => 'E02000296',
        '6EX' => 'E02000296',
        '6EY' => 'E02000295',
        '6EZ' => 'E02000296',
        '6FS' => 'E02000296',
        '6GA' => 'E02000296',
        '6GT' => 'E02000296',
        '6HA' => 'E02000295',
        '6HB' => 'E02000295',
        '6HD' => 'E02000296',
        '6HE' => 'E02000295',
        '6HF' => 'E02000296',
        '6HG' => 'E02000295',
        '6HH' => 'E02000295',
        '6HJ' => 'E02000295',
        '6HL' => 'E02000295',
        '6HN' => 'E02000295',
        '6HP' => 'E02000295',
        '6HQ' => 'E02000296',
        '6HR' => 'E02000295',
        '6HS' => 'E02000295',
        '6HT' => 'E02000295',
        '6HU' => 'E02000295',
        '6HW' => 'E02000295',
        '6HX' => 'E02000295',
        '6HY' => 'E02000295',
        '6HZ' => 'E02000295',
        '6JA' => 'E02000295',
        '6JB' => 'E02000296',
        '6JD' => 'E02000296',
        '6JE' => 'E02000296',
        '6JF' => 'E02000296',
        '6JG' => 'E02000296',
        '6JH' => 'E02000296',
        '6JJ' => 'E02000296',
        '6JL' => 'E02000296',
        '6JN' => 'E02000296',
        '6JP' => 'E02000296',
        '6JQ' => 'E02000295',
        '6JR' => 'E02000296',
        '6JS' => 'E02000296',
        '6JT' => 'E02000296',
        '6JU' => 'E02000295',
        '6JW' => 'E02000296',
        '6JX' => 'E02000296',
        '6JY' => 'E02000296',
        '6LA' => 'E02000304',
        '6LB' => 'E02000304',
        '6LD' => 'E02000296',
        '6LE' => 'E02000296',
        '6LF' => 'E02000296',
        '6LG' => 'E02000304',
        '6LH' => 'E02000304',
        '6LJ' => 'E02000304',
        '6LL' => 'E02000304',
        '6LN' => 'E02000304',
        '6LP' => 'E02000304',
        '6LQ' => 'E02000304',
        '6LR' => 'E02000304',
        '6LS' => 'E02000304',
        '6LT' => 'E02000304',
        '6LU' => 'E02000304',
        '6LW' => 'E02000296',
        '6LX' => 'E02000304',
        '6LY' => 'E02000304',
        '6LZ' => 'E02000296',
        '6NA' => 'E02000304',
        '6NB' => 'E02000296',
        '6ND' => 'E02000304',
        '6NE' => 'E02000304',
        '6NG' => 'E02000304',
        '6NH' => 'E02000304',
        '6NJ' => 'E02000304',
        '6NL' => 'E02000304',
        '6NN' => 'E02000304',
        '6NP' => 'E02000304',
        '6NQ' => 'E02000295',
        '6NR' => 'E02000304',
        '6NS' => 'E02000304',
        '6NT' => 'E02000304',
        '6NU' => 'E02000304',
        '6NW' => 'E02000304',
        '6NX' => 'E02000304',
        '6NY' => 'E02000304',
        '6NZ' => 'E02000295',
        '6PA' => 'E02000304',
        '6PB' => 'E02000304',
        '6PD' => 'E02000304',
        '6PE' => 'E02000304',
        '6PF' => 'E02000304',
        '6PG' => 'E02000296',
        '6PH' => 'E02000296',
        '6PJ' => 'E02000296',
        '6PL' => 'E02000296',
        '6PN' => 'E02000296',
        '6PP' => 'E02000296',
        '6PQ' => 'E02000288',
        '6PR' => 'E02000296',
        '6PS' => 'E02000296',
        '6PT' => 'E02000296',
        '6PU' => 'E02000296',
        '6PW' => 'E02000296',
        '6PX' => 'E02000295',
        '6PY' => 'E02000295',
        '6QA' => 'E02000295',
        '6QB' => 'E02000295',
        '6QD' => 'E02000295',
        '6QE' => 'E02000295',
        '6QF' => 'E02000296',
        '6QG' => 'E02000295',
        '6QH' => 'E02000295',
        '6QJ' => 'E02000295',
        '6QL' => 'E02000295',
        '6QN' => 'E02000296',
        '6QP' => 'E02000304',
        '6QQ' => 'E02000295',
        '6QR' => 'E02000296',
        '6QS' => 'E02000304',
        '6QT' => 'E02000304',
        '6QU' => 'E02000304',
        '6QW' => 'E02000296',
        '6QX' => 'E02000304',
        '6QY' => 'E02000304',
        '6RA' => 'E02000295',
        '6RB' => 'E02000295',
        '6RD' => 'E02000295',
        '6RE' => 'E02000295',
        '6RF' => 'E02000295',
        '6RG' => 'E02000295',
        '6RH' => 'E02000295',
        '6RJ' => 'E02000295',
        '6RL' => 'E02000295',
        '6RN' => 'E02000295',
        '6RP' => 'E02000296',
        '6RR' => 'E02000296',
        '6RS' => 'E02000296',
        '6RT' => 'E02000296',
        '6SA' => 'E02000296',
        '6SB' => 'E02000296',
        '6SD' => 'E02000304',
        '6SG' => 'E02000296',
        '6SH' => 'E02000296',
        '6SJ' => 'E02000296',
        '6SL' => 'E02000296',
        '6SP' => 'E02000296',
        '6SR' => 'E02000296',
        '6SS' => 'E02000296',
        '6SY' => 'E02000304',
        '6SZ' => 'E02000296',
        '6TB' => 'E02000296',
        '6TG' => 'E02000296',
        '6UY' => 'E02000296',
        '6UZ' => 'E02000296',
        '6WA' => 'E02000296',
        '6WB' => 'E02000295',
        '6WD' => 'E02000295',
        '6WE' => 'E02000295',
        '6WF' => 'E02000295',
        '6WG' => 'E02000296',
        '6WH' => 'E02000296',
        '6WJ' => 'E02000296',
        '6WL' => 'E02000296',
        '6WN' => 'E02000296',
        '6WP' => 'E02000295',
        '6WQ' => 'E02000296',
        '6WR' => 'E02000296',
        '6WS' => 'E02000296',
        '6WT' => 'E02000296',
        '6WU' => 'E02000296',
        '6WW' => 'E02000296',
        '6WX' => 'E02000296',
        '6WY' => 'E02000296',
        '6WZ' => 'E02000296',
        '6XA' => 'E02000296',
        '6XB' => 'E02000296',
        '6XD' => 'E02000296',
        '6XE' => 'E02000296',
        '6XF' => 'E02000296',
        '6XG' => 'E02000296',
        '6XH' => 'E02000296',
        '6XJ' => 'E02000296',
        '6XL' => 'E02000296',
        '6XN' => 'E02000296',
        '6XP' => 'E02000296',
        '6XQ' => 'E02000296',
        '6XR' => 'E02000296',
        '6XS' => 'E02000296',
        '6XT' => 'E02000304',
        '6XU' => 'E02000296',
        '6XW' => 'E02000296',
        '6XY' => 'E02000296',
        '6XZ' => 'E02000296',
        '6YA' => 'E02000296',
        '6YB' => 'E02000296',
        '6YE' => 'E02000296',
        '6YF' => 'E02000296',
        '6YH' => 'E02000296',
        '6YP' => 'E02000296',
        '6YQ' => 'E02000304',
        '6YT' => 'E02000296',
        '6YX' => 'E02000296',
        '6YY' => 'E02000296',
        '6ZT' => 'E02000296',
        '7AA' => 'E02000304',
        '7AB' => 'E02000304',
        '7AD' => 'E02000304',
        '7AE' => 'E02000304',
        '7AG' => 'E02000304',
        '7AH' => 'E02000304',
        '7AJ' => 'E02000308',
        '7AL' => 'E02000308',
        '7AN' => 'E02000308',
        '7AP' => 'E02000308',
        '7AQ' => 'E02000296',
        '7AR' => 'E02000304',
        '7AS' => 'E02000304',
        '7AT' => 'E02000304',
        '7AU' => 'E02000304',
        '7AW' => 'E02000308',
        '7AX' => 'E02000296',
        '7AY' => 'E02000304',
        '7AZ' => 'E02000304',
        '7BA' => 'E02000304',
        '7BB' => 'E02000304',
        '7BD' => 'E02000304',
        '7BE' => 'E02000304',
        '7BG' => 'E02000304',
        '7BH' => 'E02000304',
        '7BJ' => 'E02000304',
        '7BL' => 'E02000304',
        '7BN' => 'E02000304',
        '7BP' => 'E02000312',
        '7BQ' => 'E02000304',
        '7BS' => 'E02000312',
        '7BT' => 'E02000304',
        '7BU' => 'E02000304',
        '7BW' => 'E02000312',
        '7BX' => 'E02000304',
        '7BY' => 'E02000304',
        '7BZ' => 'E02000296',
        '7DA' => 'E02000304',
        '7DB' => 'E02000304',
        '7DD' => 'E02000304',
        '7DE' => 'E02000304',
        '7DF' => 'E02000304',
        '7DG' => 'E02000304',
        '7DH' => 'E02000304',
        '7DJ' => 'E02000304',
        '7DL' => 'E02000304',
        '7DN' => 'E02000304',
        '7DP' => 'E02000304',
        '7DQ' => 'E02000296',
        '7DR' => 'E02000304',
        '7DS' => 'E02000304',
        '7DT' => 'E02000304',
        '7DU' => 'E02000304',
        '7DW' => 'E02000304',
        '7DX' => 'E02000304',
        '7DY' => 'E02000304',
        '7DZ' => 'E02000304',
        '7EA' => 'E02000312',
        '7EB' => 'E02000296',
        '7EF' => 'E02000296',
        '7EG' => 'E02000304',
        '7EH' => 'E02000304',
        '7EJ' => 'E02000304',
        '7EL' => 'E02000304',
        '7EN' => 'E02000304',
        '7EP' => 'E02000304',
        '7ER' => 'E02000308',
        '7ES' => 'E02000308',
        '7ET' => 'E02000304',
        '7EU' => 'E02000304',
        '7EW' => 'E02000308',
        '7EX' => 'E02000304',
        '7EY' => 'E02000304',
        '7EZ' => 'E02000312',
        '7HB' => 'E02000308',
        '7HD' => 'E02000304',
        '7HE' => 'E02000304',
        '7HF' => 'E02000296',
        '7HG' => 'E02000304',
        '7HH' => 'E02000304',
        '7HJ' => 'E02000304',
        '7HL' => 'E02000304',
        '7HN' => 'E02000304',
        '7HP' => 'E02000304',
        '7HQ' => 'E02000304',
        '7HR' => 'E02000304',
        '7HS' => 'E02000304',
        '7HT' => 'E02000304',
        '7HU' => 'E02000308',
        '7HW' => 'E02000304',
        '7HX' => 'E02000304',
        '7HY' => 'E02000304',
        '7HZ' => 'E02000296',
        '7JA' => 'E02000304',
        '7JB' => 'E02000304',
        '7JD' => 'E02000304',
        '7JE' => 'E02000304',
        '7JG' => 'E02000312',
        '7JN' => 'E02000304',
        '7JP' => 'E02000304',
        '7JQ' => 'E02000304',
        '7JR' => 'E02000304',
        '7JS' => 'E02000032',
        '7JT' => 'E02000308',
        '7JU' => 'E02000308',
        '7JW' => 'E02000296',
        '7JX' => 'E02000308',
        '7JY' => 'E02000032',
        '7JZ' => 'E02000304',
        '7LA' => 'E02000032',
        '7LB' => 'E02000308',
        '7LD' => 'E02000032',
        '7LE' => 'E02000032',
        '7LF' => 'E02000296',
        '7LG' => 'E02000032',
        '7LH' => 'E02000032',
        '7LJ' => 'E02000032',
        '7LL' => 'E02000032',
        '7LP' => 'E02000032',
        '7LQ' => 'E02000304',
        '7LR' => 'E02000033',
        '7LS' => 'E02000032',
        '7LT' => 'E02000032',
        '7LU' => 'E02000032',
        '7LX' => 'E02000032',
        '7LY' => 'E02000032',
        '7LZ' => 'E02000296',
        '7NA' => 'E02000032',
        '7NB' => 'E02000032',
        '7ND' => 'E02000032',
        '7NE' => 'E02000032',
        '7NG' => 'E02000032',
        '7NH' => 'E02000032',
        '7NJ' => 'E02000032',
        '7NL' => 'E02000032',
        '7NN' => 'E02000032',
        '7NP' => 'E02000032',
        '7NR' => 'E02000032',
        '7NS' => 'E02000032',
        '7NT' => 'E02000296',
        '7NU' => 'E02000304',
        '7PA' => 'E02000304',
        '7PB' => 'E02000304',
        '7PD' => 'E02000032',
        '7PE' => 'E02000032',
        '7PF' => 'E02000032',
        '7PG' => 'E02000032',
        '7PH' => 'E02000032',
        '7PJ' => 'E02000032',
        '7PL' => 'E02000032',
        '7PQ' => 'E02000032',
        '7WA' => 'E02000304',
        '7WB' => 'E02000296',
        '7WD' => 'E02000304',
        '7WE' => 'E02000304',
        '7WF' => 'E02000296',
        '7WG' => 'E02000296',
        '7WH' => 'E02000296',
        '7WJ' => 'E02000296',
        '7WL' => 'E02000296',
        '7WN' => 'E02000304',
        '7WP' => 'E02000296',
        '7WQ' => 'E02000296',
        '7WR' => 'E02000296',
        '7WS' => 'E02000296',
        '7WT' => 'E02000296',
        '7WU' => 'E02000296',
        '7WW' => 'E02000296',
        '7WX' => 'E02000296',
        '7WY' => 'E02000296',
        '7WZ' => 'E02000296',
        '7XA' => 'E02000296',
        '7XB' => 'E02000296',
        '7XD' => 'E02000296',
        '7XE' => 'E02000296',
        '7XF' => 'E02000296',
        '7XG' => 'E02000296',
        '7XH' => 'E02000296',
        '7XR' => 'E02000296',
        '7XS' => 'E02000296',
        '7XT' => 'E02000296',
        '7XU' => 'E02000296',
        '7XW' => 'E02000296',
        '7XX' => 'E02000296',
        '7XY' => 'E02000296',
        '7XZ' => 'E02000296',
        '7YA' => 'E02000296',
        '7YB' => 'E02000296',
        '7YE' => 'E02000296',
        '7YF' => 'E02000296',
        '7YT' => 'E02000296',
        '9AD' => 'E02000296',
        '9AE' => 'E02000296',
        '9AG' => 'E02000296',
        '9AH' => 'E02000296',
        '9AN' => 'E02000296',
        '9AQ' => 'E02000296',
        '9AT' => 'E02000296',
        '9AU' => 'E02000296',
        '9AW' => 'E02000296',
        '9AY' => 'E02000296',
        '9BB' => 'E02000296',
        '9BD' => 'E02000296',
        '9BE' => 'E02000296',
        '9BF' => 'E02000296',
        '9BG' => 'E02000296',
        '9BJ' => 'E02000296',
        '9BL' => 'E02000296',
        '9BN' => 'E02000296',
        '9BP' => 'E02000296',
        '9BQ' => 'E02000296',
        '9BR' => 'E02000296',
        '9BS' => 'E02000296',
        '9BU' => 'E02000296',
        '9BW' => 'E02000296',
        '9BX' => 'E02000296',
        '9BY' => 'E02000296',
        '9BZ' => 'E02000296',
        '9DA' => 'E02000296',
        '9DB' => 'E02000296',
        '9DD' => 'E02000296',
        '9DE' => 'E02000296',
        '9DF' => 'E02000296',
        '9DG' => 'E02000296',
        '9DH' => 'E02000296',
        '9DJ' => 'E02000296',
        '9DL' => 'E02000296',
        '9DN' => 'E02000296',
        '9DP' => 'E02000296',
        '9DQ' => 'E02000296',
        '9DR' => 'E02000296',
        '9DS' => 'E02000296',
        '9DT' => 'E02000296',
        '9DU' => 'E02000296',
        '9DX' => 'E02000296',
        '9DY' => 'E02000296',
        '9DZ' => 'E02000296',
        '9EA' => 'E02000296',
        '9EB' => 'E02000296',
        '9EE' => 'E02000296',
        '9EF' => 'E02000296',
        '9EG' => 'E02000296',
        '9EH' => 'E02000296',
        '9EJ' => 'E02000296',
        '9EL' => 'E02000296',
        '9EN' => 'E02000296',
        '9EP' => 'E02000296',
        '9EQ' => 'E02000296',
        '9ER' => 'E02000296',
        '9ES' => 'E02000296',
        '9ET' => 'E02000296',
        '9EU' => 'E02000296',
        '9EW' => 'E02000296',
        '9EX' => 'E02000296',
        '9EY' => 'E02000296',
        '9EZ' => 'E02000296',
        '9FA' => 'E02000296',
        '9FB' => 'E02000296',
        '9FD' => 'E02000296',
        '9FE' => 'E02000296',
        '9FF' => 'E02000296',
        '9FG' => 'E02000296',
        '9FH' => 'E02000296',
        '9FJ' => 'E02000296',
        '9FL' => 'E02000296',
        '9FN' => 'E02000296',
        '9FP' => 'E02000296',
        '9FQ' => 'E02000296',
        '9FR' => 'E02000296',
        '9FS' => 'E02000296',
        '9FT' => 'E02000296',
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
