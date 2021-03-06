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
final class PL12
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '4AA' => 'E02003899',
        '4AB' => 'E02003899',
        '4AD' => 'E02003899',
        '4AE' => 'E02003899',
        '4AF' => 'E02003900',
        '4AG' => 'E02003900',
        '4AH' => 'E02003899',
        '4AJ' => 'E02003900',
        '4AL' => 'E02003900',
        '4AN' => 'E02003899',
        '4AP' => 'E02003897',
        '4AQ' => 'E02003899',
        '4AR' => 'E02003897',
        '4AS' => 'E02003900',
        '4AT' => 'E02003900',
        '4AU' => 'E02003899',
        '4AW' => 'E02003899',
        '4AX' => 'E02003900',
        '4AY' => 'E02003900',
        '4AZ' => 'E02003899',
        '4BA' => 'E02003899',
        '4BB' => 'E02003899',
        '4BD' => 'E02003899',
        '4BE' => 'E02003899',
        '4BG' => 'E02003900',
        '4BH' => 'E02003899',
        '4BJ' => 'E02003899',
        '4BL' => 'E02003899',
        '4BN' => 'E02003899',
        '4BP' => 'E02003899',
        '4BQ' => 'E02003899',
        '4BS' => 'E02003899',
        '4BT' => 'E02003899',
        '4BU' => 'E02003900',
        '4BW' => 'E02003900',
        '4BX' => 'E02003900',
        '4BY' => 'E02003900',
        '4BZ' => 'E02003900',
        '4DA' => 'E02003899',
        '4DB' => 'E02003899',
        '4DD' => 'E02003899',
        '4DE' => 'E02003899',
        '4DF' => 'E02003899',
        '4DG' => 'E02003899',
        '4DH' => 'E02003900',
        '4DJ' => 'E02003899',
        '4DL' => 'E02003900',
        '4DN' => 'E02003900',
        '4DP' => 'E02003900',
        '4DQ' => 'E02003899',
        '4DR' => 'E02003900',
        '4DS' => 'E02003900',
        '4DT' => 'E02003900',
        '4DU' => 'E02003900',
        '4DW' => 'E02003900',
        '4DX' => 'E02003900',
        '4DY' => 'E02003900',
        '4DZ' => 'E02003899',
        '4EA' => 'E02003900',
        '4EB' => 'E02003900',
        '4ED' => 'E02003900',
        '4EE' => 'E02003900',
        '4EF' => 'E02003899',
        '4EG' => 'E02003900',
        '4EH' => 'E02003900',
        '4EJ' => 'E02003900',
        '4EL' => 'E02003900',
        '4EN' => 'E02003900',
        '4EP' => 'E02003900',
        '4EQ' => 'E02003900',
        '4ER' => 'E02003900',
        '4ES' => 'E02003900',
        '4ET' => 'E02003900',
        '4EU' => 'E02003900',
        '4EW' => 'E02003900',
        '4EX' => 'E02003900',
        '4EY' => 'E02003899',
        '4EZ' => 'E02003899',
        '4FA' => 'E02003899',
        '4FB' => 'E02003897',
        '4FD' => 'E02003897',
        '4FE' => 'E02003899',
        '4FF' => 'E02003899',
        '4FG' => 'E02003900',
        '4FH' => 'E02003899',
        '4FW' => 'E02003899',
        '4GT' => 'E02003900',
        '4HA' => 'E02003899',
        '4HB' => 'E02003899',
        '4HD' => 'E02003899',
        '4HE' => 'E02003899',
        '4HF' => 'E02003899',
        '4HG' => 'E02003897',
        '4HH' => 'E02003899',
        '4HJ' => 'E02003899',
        '4HL' => 'E02003899',
        '4HN' => 'E02003899',
        '4HP' => 'E02003899',
        '4HQ' => 'E02003899',
        '4HR' => 'E02003899',
        '4HS' => 'E02003899',
        '4HT' => 'E02003899',
        '4HU' => 'E02003899',
        '4HW' => 'E02003899',
        '4HX' => 'E02003899',
        '4HY' => 'E02003899',
        '4HZ' => 'E02003899',
        '4JA' => 'E02003899',
        '4JB' => 'E02003899',
        '4JD' => 'E02003899',
        '4JE' => 'E02003899',
        '4JF' => 'E02003899',
        '4JG' => 'E02003899',
        '4JH' => 'E02003899',
        '4JJ' => 'E02003899',
        '4JL' => 'E02003897',
        '4JN' => 'E02003899',
        '4JP' => 'E02003897',
        '4JQ' => 'E02003899',
        '4JR' => 'E02003897',
        '4JS' => 'E02003897',
        '4JT' => 'E02003897',
        '4JU' => 'E02003897',
        '4JW' => 'E02003897',
        '4JX' => 'E02003897',
        '4JY' => 'E02003899',
        '4JZ' => 'E02003897',
        '4LA' => 'E02003899',
        '4LB' => 'E02003899',
        '4LD' => 'E02003899',
        '4LE' => 'E02003899',
        '4LF' => 'E02003899',
        '4LG' => 'E02003899',
        '4LH' => 'E02003899',
        '4LJ' => 'E02003899',
        '4LL' => 'E02003899',
        '4LN' => 'E02003899',
        '4LP' => 'E02003899',
        '4LQ' => 'E02003899',
        '4LR' => 'E02003899',
        '4LS' => 'E02003899',
        '4LT' => 'E02003897',
        '4LU' => 'E02003899',
        '4LW' => 'E02003899',
        '4LX' => 'E02003899',
        '4LY' => 'E02003899',
        '4LZ' => 'E02003899',
        '4NA' => 'E02003899',
        '4NB' => 'E02003899',
        '4ND' => 'E02003899',
        '4NE' => 'E02003899',
        '4NF' => 'E02003900',
        '4NG' => 'E02003900',
        '4NH' => 'E02003900',
        '4NJ' => 'E02003897',
        '4NL' => 'E02003897',
        '4NN' => 'E02003900',
        '4NP' => 'E02003900',
        '4NQ' => 'E02003900',
        '4NR' => 'E02003897',
        '4NS' => 'E02003897',
        '4NT' => 'E02003900',
        '4NU' => 'E02003900',
        '4NW' => 'E02003900',
        '4NX' => 'E02003900',
        '4NY' => 'E02003900',
        '4NZ' => 'E02003900',
        '4PA' => 'E02003900',
        '4PB' => 'E02003900',
        '4PD' => 'E02003900',
        '4PE' => 'E02003900',
        '4PF' => 'E02003900',
        '4PG' => 'E02003900',
        '4PH' => 'E02003899',
        '4PJ' => 'E02003900',
        '4PL' => 'E02003899',
        '4PN' => 'E02003900',
        '4PP' => 'E02003897',
        '4PQ' => 'E02003900',
        '4PR' => 'E02003897',
        '4PS' => 'E02003897',
        '4PT' => 'E02003899',
        '4PU' => 'E02003899',
        '4PX' => 'E02003899',
        '4PY' => 'E02003899',
        '4PZ' => 'E02003899',
        '4QA' => 'E02003897',
        '4QB' => 'E02003899',
        '4QD' => 'E02003899',
        '4QE' => 'E02003899',
        '4QF' => 'E02003897',
        '4QG' => 'E02003897',
        '4QH' => 'E02003897',
        '4QJ' => 'E02003897',
        '4QL' => 'E02003897',
        '4QN' => 'E02003897',
        '4QP' => 'E02003897',
        '4QQ' => 'E02003897',
        '4QR' => 'E02003897',
        '4QS' => 'E02003897',
        '4QT' => 'E02003897',
        '4QU' => 'E02003897',
        '4QW' => 'E02003897',
        '4QX' => 'E02003897',
        '4QY' => 'E02003897',
        '4QZ' => 'E02003897',
        '4RA' => 'E02003897',
        '4RB' => 'E02003897',
        '4RD' => 'E02003897',
        '4RE' => 'E02003900',
        '4RF' => 'E02003897',
        '4RG' => 'E02003897',
        '4RH' => 'E02003897',
        '4RJ' => 'E02003897',
        '4RL' => 'E02003897',
        '4RN' => 'E02003897',
        '4RP' => 'E02003898',
        '4RQ' => 'E02003897',
        '4RR' => 'E02003898',
        '4RS' => 'E02003897',
        '4RT' => 'E02003897',
        '4RU' => 'E02003897',
        '4RW' => 'E02003898',
        '4RX' => 'E02003897',
        '4RY' => 'E02003897',
        '4RZ' => 'E02003897',
        '4SA' => 'E02003897',
        '4SB' => 'E02003897',
        '4SD' => 'E02003897',
        '4SE' => 'E02003897',
        '4SF' => 'E02003897',
        '4SG' => 'E02003897',
        '4SH' => 'E02003897',
        '4SJ' => 'E02003897',
        '4SL' => 'E02003900',
        '4SN' => 'E02003897',
        '4SP' => 'E02003897',
        '4SQ' => 'E02003897',
        '4SR' => 'E02003899',
        '4SS' => 'E02003899',
        '4ST' => 'E02003899',
        '4SU' => 'E02003900',
        '4SW' => 'E02003899',
        '4SX' => 'E02003897',
        '4SY' => 'E02003900',
        '4SZ' => 'E02003900',
        '4TA' => 'E02003900',
        '4TB' => 'E02003900',
        '4TD' => 'E02003900',
        '4TE' => 'E02003900',
        '4TF' => 'E02003899',
        '4TG' => 'E02003900',
        '4TH' => 'E02003899',
        '4TJ' => 'E02003899',
        '4TL' => 'E02003900',
        '4TN' => 'E02003900',
        '4TP' => 'E02003897',
        '4TQ' => 'E02003900',
        '4TR' => 'E02003897',
        '4TS' => 'E02003897',
        '4TT' => 'E02003897',
        '4TU' => 'E02003897',
        '4TW' => 'E02003897',
        '4TX' => 'E02003897',
        '4TY' => 'E02003897',
        '4TZ' => 'E02003897',
        '4UA' => 'E02003897',
        '4UB' => 'E02003897',
        '4UD' => 'E02003897',
        '4UE' => 'E02003897',
        '4UF' => 'E02003897',
        '4UG' => 'E02003897',
        '4UH' => 'E02003897',
        '4UJ' => 'E02003897',
        '4UL' => 'E02003897',
        '4UN' => 'E02003897',
        '4UP' => 'E02003897',
        '4UQ' => 'E02003897',
        '4UR' => 'E02003899',
        '4US' => 'E02003900',
        '4UT' => 'E02003897',
        '4UU' => 'E02003897',
        '4UW' => 'E02003897',
        '4UX' => 'E02003897',
        '4UY' => 'E02003897',
        '4WA' => 'E02003897',
        '4WB' => 'E02003900',
        '4WE' => 'E02003900',
        '4WT' => 'E02003900',
        '4WU' => 'E02003900',
        '4WW' => 'E02003900',
        '4WX' => 'E02003900',
        '4WY' => 'E02003900',
        '4WZ' => 'E02003900',
        '4XA' => 'E02003899',
        '4XB' => 'E02003899',
        '4XQ' => 'E02003900',
        '4XR' => 'E02003897',
        '4XS' => 'E02003897',
        '4XT' => 'E02003897',
        '4XU' => 'E02003897',
        '4XW' => 'E02003900',
        '4XX' => 'E02003897',
        '4XY' => 'E02003897',
        '4XZ' => 'E02003897',
        '4YA' => 'E02003899',
        '4YB' => 'E02003899',
        '4YD' => 'E02003899',
        '4YE' => 'E02003899',
        '4YF' => 'E02003899',
        '4YG' => 'E02003900',
        '4YH' => 'E02003899',
        '4YJ' => 'E02003899',
        '4YL' => 'E02003900',
        '4YN' => 'E02003900',
        '4YP' => 'E02003900',
        '4YQ' => 'E02003900',
        '4YR' => 'E02003899',
        '4YS' => 'E02003899',
        '4YT' => 'E02003899',
        '4YU' => 'E02003899',
        '4YW' => 'E02003900',
        '4YX' => 'E02003900',
        '4YY' => 'E02003900',
        '4YZ' => 'E02003899',
        '4ZN' => 'E02003900',
        '4ZQ' => 'E02003900',
        '4ZX' => 'E02003900',
        '5AA' => 'E02003898',
        '5AB' => 'E02003898',
        '5AD' => 'E02003898',
        '5AE' => 'E02003898',
        '5AF' => 'E02003898',
        '5AG' => 'E02003898',
        '5AH' => 'E02003898',
        '5AJ' => 'E02003898',
        '5AL' => 'E02003898',
        '5AN' => 'E02003897',
        '5AP' => 'E02003898',
        '5AQ' => 'E02003898',
        '5AR' => 'E02003898',
        '5AS' => 'E02003898',
        '5AT' => 'E02003898',
        '5AU' => 'E02003898',
        '5AW' => 'E02003898',
        '5AX' => 'E02003898',
        '5AY' => 'E02003898',
        '5AZ' => 'E02003898',
        '5BA' => 'E02003898',
        '5BB' => 'E02003898',
        '5BD' => 'E02003900',
        '5BE' => 'E02003898',
        '5BG' => 'E02003898',
        '5BH' => 'E02003898',
        '5BJ' => 'E02003898',
        '5BL' => 'E02003898',
        '5BN' => 'E02003898',
        '5BP' => 'E02003898',
        '5BQ' => 'E02003898',
        '5BS' => 'E02003898',
        '5BT' => 'E02003898',
        '5BU' => 'E02003898',
        '5BW' => 'E02003898',
        '5BX' => 'E02003898',
        '5BY' => 'E02003898',
        '5BZ' => 'E02003898',
        '5DA' => 'E02003898',
        '5DB' => 'E02003898',
        '5DD' => 'E02003898',
        '5DE' => 'E02003898',
        '5DF' => 'E02003898',
        '5DG' => 'E02003898',
        '5DH' => 'E02003898',
        '5DJ' => 'E02003898',
        '5DL' => 'E02003898',
        '5DN' => 'E02003898',
        '5DP' => 'E02003898',
        '5DQ' => 'E02003898',
        '5DR' => 'E02003898',
        '5DS' => 'E02003898',
        '5DT' => 'E02003898',
        '5DU' => 'E02003898',
        '5DW' => 'E02003898',
        '5DX' => 'E02003898',
        '5DY' => 'E02003898',
        '5DZ' => 'E02003898',
        '5EA' => 'E02003898',
        '5EB' => 'E02003898',
        '5ED' => 'E02003898',
        '5EE' => 'E02003898',
        '5EF' => 'E02003898',
        '5EG' => 'E02003898',
        '5EH' => 'E02003898',
        '5EJ' => 'E02003898',
        '5EL' => 'E02003898',
        '5EN' => 'E02003898',
        '5EP' => 'E02003898',
        '5EQ' => 'E02003898',
        '5ER' => 'E02003898',
        '5ES' => 'E02003898',
        '5ET' => 'E02003898',
        '5EU' => 'E02003898',
        '5EW' => 'E02003898',
        '5EX' => 'E02003898',
        '5EY' => 'E02003898',
        '5EZ' => 'E02003898',
        '5FA' => 'E02003898',
        '5FB' => 'E02003898',
        '5FD' => 'E02003898',
        '5FE' => 'E02003898',
        '5FF' => 'E02003898',
        '5FG' => 'E02003898',
        '5HA' => 'E02003898',
        '5HH' => 'E02003898',
        '5HJ' => 'E02003898',
        '5HL' => 'E02003898',
        '5HN' => 'E02003898',
        '5HP' => 'E02003898',
        '5HR' => 'E02003898',
        '5HS' => 'E02003898',
        '5HT' => 'E02003898',
        '5HU' => 'E02003898',
        '5HW' => 'E02003898',
        '5HX' => 'E02003898',
        '5HY' => 'E02003898',
        '5HZ' => 'E02003898',
        '5JA' => 'E02003898',
        '5JB' => 'E02003898',
        '5JD' => 'E02003898',
        '5JE' => 'E02003898',
        '5JF' => 'E02003898',
        '5JG' => 'E02003898',
        '5JN' => 'E02003898',
        '5JP' => 'E02003898',
        '5JR' => 'E02003898',
        '5JS' => 'E02003898',
        '5JT' => 'E02003898',
        '5JU' => 'E02003898',
        '5JW' => 'E02003898',
        '5JX' => 'E02003898',
        '5JY' => 'E02003898',
        '5JZ' => 'E02003898',
        '5LA' => 'E02003898',
        '5LB' => 'E02003898',
        '5LD' => 'E02003898',
        '5LG' => 'E02003898',
        '5LH' => 'E02003898',
        '5LJ' => 'E02003898',
        '5LL' => 'E02003898',
        '5LN' => 'E02003898',
        '5LP' => 'E02003898',
        '5LQ' => 'E02003898',
        '5LR' => 'E02003898',
        '5LS' => 'E02003898',
        '5LT' => 'E02003898',
        '5LU' => 'E02003898',
        '5LW' => 'E02003898',
        '5LX' => 'E02003898',
        '5LY' => 'E02003898',
        '5LZ' => 'E02003898',
        '5NA' => 'E02003898',
        '5NB' => 'E02003898',
        '5ND' => 'E02003898',
        '5NE' => 'E02003898',
        '5NF' => 'E02003898',
        '5NG' => 'E02003898',
        '5NH' => 'E02003898',
        '5NJ' => 'E02003898',
        '5NL' => 'E02003898',
        '5NN' => 'E02003898',
        '5NP' => 'E02003898',
        '5NQ' => 'E02003898',
        '5NR' => 'E02003898',
        '5NS' => 'E02003898',
        '5NT' => 'E02003898',
        '5NU' => 'E02003898',
        '5NW' => 'E02003898',
        '5NX' => 'E02003898',
        '5NY' => 'E02003898',
        '5NZ' => 'E02003898',
        '5PA' => 'E02003898',
        '5PB' => 'E02003898',
        '5PD' => 'E02003898',
        '5PE' => 'E02003898',
        '5WY' => 'E02003900',
        '5WZ' => 'E02003900',
        '5XN' => 'E02003900',
        '5XZ' => 'E02003900',
        '5YP' => 'E02003900',
        '5YR' => 'E02003898',
        '5YS' => 'E02003900',
        '5YT' => 'E02003898',
        '5YU' => 'E02003900',
        '5YW' => 'E02003900',
        '5YX' => 'E02003900',
        '5YY' => 'E02003898',
        '5YZ' => 'E02003900',
        '5ZG' => 'E02003900',
        '5ZX' => 'E02003900',
        '6AA' => 'E02003900',
        '6AB' => 'E02003900',
        '6AD' => 'E02003900',
        '6AE' => 'E02003900',
        '6AF' => 'E02003900',
        '6AG' => 'E02003900',
        '6AH' => 'E02003900',
        '6AJ' => 'E02003900',
        '6AL' => 'E02003900',
        '6AN' => 'E02003900',
        '6AP' => 'E02003900',
        '6AQ' => 'E02003899',
        '6AR' => 'E02003900',
        '6AS' => 'E02003900',
        '6AT' => 'E02003900',
        '6AU' => 'E02003898',
        '6AW' => 'E02003900',
        '6AX' => 'E02003900',
        '6AY' => 'E02003897',
        '6AZ' => 'E02003900',
        '6BA' => 'E02003900',
        '6BB' => 'E02003900',
        '6BD' => 'E02003900',
        '6BE' => 'E02003900',
        '6BG' => 'E02003900',
        '6BH' => 'E02003900',
        '6BJ' => 'E02003900',
        '6BL' => 'E02003900',
        '6BN' => 'E02003900',
        '6BP' => 'E02003900',
        '6BQ' => 'E02003900',
        '6BS' => 'E02003900',
        '6BT' => 'E02003900',
        '6BU' => 'E02003900',
        '6BW' => 'E02003900',
        '6BX' => 'E02003900',
        '6BY' => 'E02003900',
        '6BZ' => 'E02003900',
        '6DA' => 'E02003900',
        '6DB' => 'E02003900',
        '6DD' => 'E02003900',
        '6DE' => 'E02003900',
        '6DF' => 'E02003900',
        '6DG' => 'E02003900',
        '6DH' => 'E02003900',
        '6DJ' => 'E02003899',
        '6DL' => 'E02003899',
        '6DN' => 'E02003900',
        '6DP' => 'E02003900',
        '6DQ' => 'E02003900',
        '6DR' => 'E02003900',
        '6DS' => 'E02003899',
        '6DT' => 'E02003900',
        '6DU' => 'E02003900',
        '6DW' => 'E02003900',
        '6DX' => 'E02003899',
        '6DY' => 'E02003900',
        '6DZ' => 'E02003899',
        '6EA' => 'E02003899',
        '6EB' => 'E02003899',
        '6ED' => 'E02003899',
        '6EE' => 'E02003899',
        '6EF' => 'E02003899',
        '6EG' => 'E02003900',
        '6EH' => 'E02003899',
        '6EJ' => 'E02003900',
        '6EL' => 'E02003899',
        '6EN' => 'E02003899',
        '6EP' => 'E02003900',
        '6EQ' => 'E02003900',
        '6ER' => 'E02003899',
        '6ES' => 'E02003900',
        '6ET' => 'E02003900',
        '6EU' => 'E02003900',
        '6EW' => 'E02003900',
        '6EX' => 'E02003900',
        '6EY' => 'E02003900',
        '6EZ' => 'E02003900',
        '6FA' => 'E02003900',
        '6FB' => 'E02003899',
        '6FD' => 'E02003900',
        '6FE' => 'E02003897',
        '6FF' => 'E02003897',
        '6FG' => 'E02003897',
        '6GX' => 'E02003897',
        '6HA' => 'E02003900',
        '6HB' => 'E02003900',
        '6HD' => 'E02003900',
        '6HE' => 'E02003900',
        '6HF' => 'E02003900',
        '6HG' => 'E02003900',
        '6HH' => 'E02003899',
        '6HJ' => 'E02003899',
        '6HL' => 'E02003900',
        '6HN' => 'E02003899',
        '6HP' => 'E02003900',
        '6HQ' => 'E02003900',
        '6HR' => 'E02003900',
        '6HS' => 'E02003900',
        '6HT' => 'E02003900',
        '6HU' => 'E02003900',
        '6HW' => 'E02003899',
        '6HX' => 'E02003900',
        '6HY' => 'E02003900',
        '6HZ' => 'E02003899',
        '6JA' => 'E02003899',
        '6JB' => 'E02003899',
        '6JD' => 'E02003900',
        '6JE' => 'E02003899',
        '6JF' => 'E02003900',
        '6JG' => 'E02003900',
        '6JH' => 'E02003899',
        '6JJ' => 'E02003900',
        '6JL' => 'E02003900',
        '6JN' => 'E02003900',
        '6JP' => 'E02003899',
        '6JQ' => 'E02003900',
        '6JR' => 'E02003900',
        '6JS' => 'E02003900',
        '6JT' => 'E02003900',
        '6JU' => 'E02003900',
        '6JW' => 'E02003900',
        '6JX' => 'E02003900',
        '6JY' => 'E02003900',
        '6JZ' => 'E02003900',
        '6LA' => 'E02003900',
        '6LB' => 'E02003897',
        '6LD' => 'E02003897',
        '6LE' => 'E02003897',
        '6LF' => 'E02003897',
        '6LG' => 'E02003900',
        '6LH' => 'E02003900',
        '6LJ' => 'E02003900',
        '6LL' => 'E02003899',
        '6LN' => 'E02003897',
        '6LP' => 'E02003897',
        '6LQ' => 'E02003900',
        '6LR' => 'E02003900',
        '6LS' => 'E02003897',
        '6LT' => 'E02003900',
        '6LU' => 'E02003897',
        '6LW' => 'E02003897',
        '6LX' => 'E02003897',
        '6LY' => 'E02003897',
        '6LZ' => 'E02003897',
        '6NA' => 'E02003897',
        '6NB' => 'E02003897',
        '6ND' => 'E02003897',
        '6NE' => 'E02003897',
        '6NF' => 'E02003897',
        '6NG' => 'E02003897',
        '6NH' => 'E02003897',
        '6NJ' => 'E02003897',
        '6NL' => 'E02003897',
        '6NN' => 'E02003897',
        '6NP' => 'E02003897',
        '6NQ' => 'E02003897',
        '6NR' => 'E02003897',
        '6NS' => 'E02003897',
        '6NT' => 'E02003897',
        '6NU' => 'E02003898',
        '6NW' => 'E02003897',
        '6NX' => 'E02003897',
        '6NY' => 'E02003897',
        '6NZ' => 'E02003897',
        '6PA' => 'E02003897',
        '6PB' => 'E02003897',
        '6PD' => 'E02003897',
        '6PE' => 'E02003897',
        '6PF' => 'E02003897',
        '6PG' => 'E02003897',
        '6PH' => 'E02003897',
        '6PJ' => 'E02003897',
        '6PL' => 'E02003897',
        '6PN' => 'E02003897',
        '6PP' => 'E02003897',
        '6PQ' => 'E02003897',
        '6PR' => 'E02003897',
        '6PS' => 'E02003897',
        '6PT' => 'E02003897',
        '6PU' => 'E02003897',
        '6PW' => 'E02003897',
        '6PX' => 'E02003897',
        '6PY' => 'E02003897',
        '6PZ' => 'E02003897',
        '6QA' => 'E02003897',
        '6QB' => 'E02003897',
        '6QD' => 'E02003897',
        '6QE' => 'E02003897',
        '6QF' => 'E02003897',
        '6QG' => 'E02003897',
        '6QH' => 'E02003898',
        '6QP' => 'E02003897',
        '6QQ' => 'E02003897',
        '6QR' => 'E02003897',
        '6QS' => 'E02003898',
        '6QT' => 'E02003897',
        '6QU' => 'E02003897',
        '6QW' => 'E02003898',
        '6QX' => 'E02003898',
        '6QY' => 'E02003897',
        '6QZ' => 'E02003898',
        '6RA' => 'E02003898',
        '6RB' => 'E02003897',
        '6RD' => 'E02003897',
        '6RE' => 'E02003897',
        '6RF' => 'E02003898',
        '6RG' => 'E02003898',
        '6RH' => 'E02003897',
        '6RJ' => 'E02003898',
        '6RL' => 'E02003898',
        '6RN' => 'E02003898',
        '6RP' => 'E02003898',
        '6RQ' => 'E02003897',
        '6RR' => 'E02003898',
        '6RS' => 'E02003898',
        '6RT' => 'E02003898',
        '6RU' => 'E02003898',
        '6RW' => 'E02003898',
        '6RX' => 'E02003898',
        '6RY' => 'E02003898',
        '6RZ' => 'E02003897',
        '6SA' => 'E02003897',
        '6SB' => 'E02003897',
        '6SD' => 'E02003898',
        '6SE' => 'E02003898',
        '6SG' => 'E02003898',
        '6SH' => 'E02003898',
        '6SJ' => 'E02003898',
        '6SL' => 'E02003898',
        '6SN' => 'E02003898',
        '6SP' => 'E02003898',
        '6SQ' => 'E02003898',
        '6SR' => 'E02003898',
        '6SS' => 'E02003898',
        '6ST' => 'E02003898',
        '6SU' => 'E02003898',
        '6SW' => 'E02003898',
        '6SX' => 'E02003898',
        '6SY' => 'E02003898',
        '6SZ' => 'E02003898',
        '6TA' => 'E02003892',
        '6TB' => 'E02003898',
        '6TD' => 'E02003898',
        '6TE' => 'E02003898',
        '6TF' => 'E02003898',
        '6TG' => 'E02003898',
        '6TH' => 'E02003898',
        '6TJ' => 'E02003898',
        '6TL' => 'E02003898',
        '6TN' => 'E02003898',
        '6TP' => 'E02003898',
        '6TQ' => 'E02003898',
        '6TR' => 'E02003898',
        '6TS' => 'E02003898',
        '6TT' => 'E02003900',
        '6TU' => 'E02003898',
        '6TW' => 'E02003897',
        '6TX' => 'E02003900',
        '6TY' => 'E02003898',
        '6TZ' => 'E02003898',
        '6UA' => 'E02003897',
        '6UB' => 'E02003897',
        '6UD' => 'E02003897',
        '6UE' => 'E02003898',
        '6UF' => 'E02003898',
        '6UG' => 'E02003898',
        '6UH' => 'E02003900',
        '6UJ' => 'E02003900',
        '6UL' => 'E02003900',
        '6UN' => 'E02003900',
        '6UP' => 'E02003900',
        '6UQ' => 'E02003898',
        '6UR' => 'E02003898',
        '6UT' => 'E02003898',
        '6UU' => 'E02003898',
        '6UW' => 'E02003900',
        '6UX' => 'E02003898',
        '6UY' => 'E02003897',
        '6UZ' => 'E02003900',
        '6WA' => 'E02003897',
        '6WD' => 'E02003900',
        '6WE' => 'E02003897',
        '6WF' => 'E02003900',
        '6WG' => 'E02003900',
        '6WH' => 'E02003900',
        '6WJ' => 'E02003900',
        '6WL' => 'E02003900',
        '6WN' => 'E02003900',
        '6WP' => 'E02003900',
        '6WQ' => 'E02003900',
        '6WR' => 'E02003900',
        '6WS' => 'E02003900',
        '6WT' => 'E02003900',
        '6WU' => 'E02003900',
        '6WW' => 'E02003900',
        '6WX' => 'E02003900',
        '6WY' => 'E02003900',
        '6WZ' => 'E02003900',
        '6XA' => 'E02003897',
        '6XB' => 'E02003897',
        '6XD' => 'E02003897',
        '6XE' => 'E02003900',
        '6XF' => 'E02003900',
        '6XG' => 'E02003900',
        '6XH' => 'E02003900',
        '6XJ' => 'E02003900',
        '6XL' => 'E02003900',
        '6XN' => 'E02003900',
        '6XP' => 'E02003900',
        '6XQ' => 'E02003900',
        '6XR' => 'E02003900',
        '6XS' => 'E02003900',
        '6XT' => 'E02003898',
        '6XU' => 'E02003900',
        '6XW' => 'E02003900',
        '6XX' => 'E02003897',
        '6XY' => 'E02003897',
        '6XZ' => 'E02003897',
        '6YA' => 'E02003900',
        '6YB' => 'E02003897',
        '6YD' => 'E02003897',
        '6YE' => 'E02003898',
        '6YF' => 'E02003898',
        '6YG' => 'E02003900',
        '6YH' => 'E02003900',
        '6YJ' => 'E02003900',
        '6YL' => 'E02003897',
        '6YN' => 'E02003900',
        '6YP' => 'E02003900',
        '6YQ' => 'E02003897',
        '6YR' => 'E02003900',
        '6YS' => 'E02003900',
        '6YT' => 'E02003900',
        '6YU' => 'E02003900',
        '6YX' => 'E02003897',
        '6YY' => 'E02003897',
        '6ZJ' => 'E02003897',
        '6ZN' => 'E02003900',
        '6ZQ' => 'E02003900',
        '6ZR' => 'E02003897',
        '6ZU' => 'E02003900',
        '6ZX' => 'E02003900',
        '9AA' => 'E02003900',
        '9AB' => 'E02003900',
        '9AD' => 'E02003900',
        '9AE' => 'E02003900',
        '9AG' => 'E02003900',
        '9AH' => 'E02003900',
        '9AJ' => 'E02003900',
        '9AL' => 'E02003900',
        '9AN' => 'E02003900',
        '9AP' => 'E02003900',
        '9AQ' => 'E02003900',
        '9AR' => 'E02003900',
        '9AS' => 'E02003900',
        '9AT' => 'E02003900',
        '9AU' => 'E02003900',
        '9AW' => 'E02003900',
        '9AX' => 'E02003900',
        '9AY' => 'E02003900',
        '9AZ' => 'E02003900',
        '9BA' => 'E02003900',
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
