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
final class RM15
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '4AA' => 'E02003303',
        '4AB' => 'E02003303',
        '4AD' => 'E02003303',
        '4AE' => 'E02003303',
        '4AF' => 'E02003303',
        '4AG' => 'E02003303',
        '4AH' => 'E02003303',
        '4AJ' => 'E02003301',
        '4AL' => 'E02003303',
        '4AN' => 'E02003301',
        '4AP' => 'E02003303',
        '4AQ' => 'E02003301',
        '4AR' => 'E02003303',
        '4AS' => 'E02003303',
        '4AT' => 'E02003303',
        '4AU' => 'E02003303',
        '4AW' => 'E02003303',
        '4AX' => 'E02003310',
        '4AY' => 'E02003303',
        '4AZ' => 'E02003303',
        '4BA' => 'E02003303',
        '4BB' => 'E02003310',
        '4BD' => 'E02003310',
        '4BE' => 'E02003310',
        '4BF' => 'E02003303',
        '4BG' => 'E02003303',
        '4BH' => 'E02003303',
        '4BJ' => 'E02003310',
        '4BL' => 'E02003303',
        '4BN' => 'E02003301',
        '4BP' => 'E02003303',
        '4BQ' => 'E02003303',
        '4BS' => 'E02003303',
        '4BT' => 'E02003303',
        '4BU' => 'E02003303',
        '4BW' => 'E02003301',
        '4BX' => 'E02003310',
        '4BY' => 'E02003303',
        '4BZ' => 'E02003302',
        '4DA' => 'E02003303',
        '4DB' => 'E02003303',
        '4DD' => 'E02003303',
        '4DE' => 'E02003303',
        '4DF' => 'E02003303',
        '4DG' => 'E02003303',
        '4DH' => 'E02003303',
        '4DJ' => 'E02003303',
        '4DL' => 'E02003303',
        '4DN' => 'E02003303',
        '4DP' => 'E02003303',
        '4DQ' => 'E02003303',
        '4DR' => 'E02003303',
        '4DS' => 'E02003303',
        '4DT' => 'E02003303',
        '4DU' => 'E02003303',
        '4DW' => 'E02003303',
        '4DX' => 'E02003303',
        '4DY' => 'E02003303',
        '4DZ' => 'E02003301',
        '4EA' => 'E02003303',
        '4EB' => 'E02003303',
        '4ED' => 'E02003303',
        '4EE' => 'E02003303',
        '4EF' => 'E02003303',
        '4EG' => 'E02003303',
        '4EH' => 'E02003303',
        '4EJ' => 'E02003303',
        '4EL' => 'E02003303',
        '4EN' => 'E02003303',
        '4EP' => 'E02003303',
        '4EQ' => 'E02003303',
        '4ER' => 'E02003303',
        '4ES' => 'E02003303',
        '4ET' => 'E02003303',
        '4EU' => 'E02003303',
        '4EW' => 'E02003303',
        '4HA' => 'E02003303',
        '4HB' => 'E02003310',
        '4HD' => 'E02003303',
        '4HH' => 'E02003303',
        '4HJ' => 'E02003303',
        '4HL' => 'E02003303',
        '4HN' => 'E02003301',
        '4HP' => 'E02003303',
        '4HQ' => 'E02003310',
        '4HR' => 'E02003303',
        '4HS' => 'E02003303',
        '4HT' => 'E02003303',
        '4HU' => 'E02003303',
        '4HW' => 'E02003303',
        '4HX' => 'E02003303',
        '4HY' => 'E02003303',
        '4HZ' => 'E02003303',
        '4JA' => 'E02003303',
        '4JB' => 'E02003303',
        '4JD' => 'E02003303',
        '4JE' => 'E02003303',
        '4JH' => 'E02003303',
        '4JJ' => 'E02003303',
        '4JL' => 'E02003303',
        '4JN' => 'E02003303',
        '4JP' => 'E02003303',
        '4JR' => 'E02003303',
        '4JS' => 'E02003303',
        '4JT' => 'E02003303',
        '4JU' => 'E02003303',
        '4JX' => 'E02003303',
        '4JY' => 'E02003303',
        '4LA' => 'E02003303',
        '4LB' => 'E02003303',
        '4LD' => 'E02003303',
        '4LH' => 'E02003303',
        '4LJ' => 'E02003303',
        '4LU' => 'E02003303',
        '4LX' => 'E02003303',
        '4NA' => 'E02003303',
        '4NB' => 'E02003303',
        '4ND' => 'E02003303',
        '4NE' => 'E02003303',
        '4NH' => 'E02003303',
        '4NJ' => 'E02003303',
        '4NL' => 'E02003303',
        '4NP' => 'E02003303',
        '4NR' => 'E02003303',
        '4NS' => 'E02003303',
        '4NT' => 'E02003303',
        '4NU' => 'E02003303',
        '4NX' => 'E02003303',
        '4PA' => 'E02003303',
        '4PB' => 'E02003303',
        '4PD' => 'E02003303',
        '4PH' => 'E02003303',
        '4PJ' => 'E02003303',
        '4PL' => 'E02003303',
        '4PP' => 'E02003303',
        '4PR' => 'E02003303',
        '4PX' => 'E02003303',
        '4QA' => 'E02003303',
        '4QB' => 'E02003303',
        '4QD' => 'E02003303',
        '4QE' => 'E02003302',
        '4QH' => 'E02003303',
        '4QJ' => 'E02003303',
        '4QL' => 'E02003303',
        '4QP' => 'E02003303',
        '4QR' => 'E02003303',
        '4QS' => 'E02003303',
        '4QT' => 'E02003303',
        '4QU' => 'E02003303',
        '4QX' => 'E02003303',
        '4QY' => 'E02003303',
        '4RA' => 'E02003303',
        '4RB' => 'E02003303',
        '4RD' => 'E02003303',
        '4RH' => 'E02003303',
        '4RJ' => 'E02003303',
        '4RL' => 'E02003303',
        '4RN' => 'E02003303',
        '4RP' => 'E02003303',
        '4RR' => 'E02003303',
        '4RS' => 'E02003303',
        '4RT' => 'E02003303',
        '4RU' => 'E02003303',
        '4RW' => 'E02003303',
        '4RX' => 'E02003303',
        '4SA' => 'E02003303',
        '4SD' => 'E02003303',
        '4SH' => 'E02003303',
        '4SJ' => 'E02003303',
        '4SL' => 'E02003303',
        '4SP' => 'E02003303',
        '4SR' => 'E02003303',
        '4SS' => 'E02003303',
        '4ST' => 'E02003303',
        '4SU' => 'E02003303',
        '4SW' => 'E02003303',
        '4SX' => 'E02003303',
        '4SY' => 'E02003303',
        '4SZ' => 'E02003303',
        '4TA' => 'E02003303',
        '4TE' => 'E02003310',
        '4TH' => 'E02003303',
        '4TJ' => 'E02003303',
        '4TL' => 'E02003303',
        '4TP' => 'E02003303',
        '4TR' => 'E02003303',
        '4TS' => 'E02003303',
        '4TT' => 'E02003303',
        '4TU' => 'E02003303',
        '4TX' => 'E02003303',
        '4UA' => 'E02003303',
        '4UB' => 'E02003303',
        '4UD' => 'E02003303',
        '4UE' => 'E02003303',
        '4UT' => 'E02000492',
        '4UU' => 'E02000492',
        '4UX' => 'E02000492',
        '4WA' => 'E02000492',
        '4WB' => 'E02003301',
        '4WH' => 'E02003301',
        '4WR' => 'E02003301',
        '4WY' => 'E02003301',
        '4WZ' => 'E02003301',
        '4XA' => 'E02003303',
        '4XB' => 'E02003303',
        '4XD' => 'E02003303',
        '4XH' => 'E02003303',
        '4XJ' => 'E02000487',
        '4XL' => 'E02003303',
        '4XP' => 'E02003303',
        '4XR' => 'E02000492',
        '4XS' => 'E02003303',
        '4XT' => 'E02003303',
        '4XU' => 'E02003303',
        '4XZ' => 'E02003301',
        '4YA' => 'E02003303',
        '4YB' => 'E02003303',
        '4YD' => 'E02003303',
        '4YE' => 'E02003303',
        '4YF' => 'E02003303',
        '4YG' => 'E02003303',
        '4YH' => 'E02003303',
        '4YQ' => 'E02003303',
        '5AA' => 'E02003302',
        '5AB' => 'E02003301',
        '5AD' => 'E02003301',
        '5AE' => 'E02003302',
        '5AF' => 'E02003302',
        '5AG' => 'E02003301',
        '5AH' => 'E02003301',
        '5AJ' => 'E02003301',
        '5AL' => 'E02003301',
        '5AN' => 'E02003301',
        '5AP' => 'E02003301',
        '5AQ' => 'E02003301',
        '5AR' => 'E02003301',
        '5AS' => 'E02003301',
        '5AT' => 'E02003301',
        '5AU' => 'E02003301',
        '5AW' => 'E02003301',
        '5AX' => 'E02003301',
        '5AY' => 'E02003301',
        '5AZ' => 'E02003301',
        '5BA' => 'E02003301',
        '5BB' => 'E02003302',
        '5BD' => 'E02003301',
        '5BE' => 'E02003301',
        '5BF' => 'E02003301',
        '5BG' => 'E02003301',
        '5BH' => 'E02003301',
        '5BJ' => 'E02003302',
        '5BL' => 'E02003302',
        '5BN' => 'E02003302',
        '5BP' => 'E02003302',
        '5BQ' => 'E02003301',
        '5BS' => 'E02003302',
        '5BT' => 'E02003302',
        '5BU' => 'E02003302',
        '5BW' => 'E02003302',
        '5BX' => 'E02003302',
        '5BY' => 'E02003302',
        '5BZ' => 'E02003302',
        '5DA' => 'E02003302',
        '5DB' => 'E02003302',
        '5DD' => 'E02003302',
        '5DE' => 'E02003302',
        '5DF' => 'E02003302',
        '5DG' => 'E02003302',
        '5DH' => 'E02003302',
        '5DJ' => 'E02003302',
        '5DL' => 'E02003301',
        '5DN' => 'E02003302',
        '5DP' => 'E02003301',
        '5DQ' => 'E02003302',
        '5DR' => 'E02003302',
        '5DS' => 'E02003302',
        '5DT' => 'E02003302',
        '5DU' => 'E02003301',
        '5DW' => 'E02003302',
        '5DX' => 'E02003302',
        '5DY' => 'E02003301',
        '5DZ' => 'E02003302',
        '5EA' => 'E02003302',
        '5EB' => 'E02003302',
        '5ED' => 'E02003302',
        '5EE' => 'E02003302',
        '5EF' => 'E02003302',
        '5EG' => 'E02003302',
        '5EH' => 'E02003302',
        '5EJ' => 'E02003302',
        '5EL' => 'E02003302',
        '5EN' => 'E02003301',
        '5EP' => 'E02003301',
        '5EQ' => 'E02003302',
        '5ER' => 'E02003301',
        '5ES' => 'E02003301',
        '5ET' => 'E02003301',
        '5EU' => 'E02003301',
        '5EW' => 'E02003301',
        '5EX' => 'E02003302',
        '5EY' => 'E02003301',
        '5EZ' => 'E02003301',
        '5FA' => 'E02003301',
        '5FB' => 'E02003301',
        '5FD' => 'E02003301',
        '5FE' => 'E02003301',
        '5FF' => 'E02003301',
        '5FG' => 'E02003301',
        '5FJ' => 'E02003301',
        '5FL' => 'E02003301',
        '5FN' => 'E02003301',
        '5FP' => 'E02003301',
        '5FQ' => 'E02003301',
        '5FR' => 'E02003301',
        '5FS' => 'E02003301',
        '5FT' => 'E02003301',
        '5FU' => 'E02003301',
        '5FW' => 'E02003301',
        '5FX' => 'E02003301',
        '5FY' => 'E02003301',
        '5FZ' => 'E02003301',
        '5GD' => 'E02003302',
        '5GE' => 'E02003302',
        '5GF' => 'E02003301',
        '5GG' => 'E02003302',
        '5GH' => 'E02003301',
        '5GJ' => 'E02003302',
        '5GL' => 'E02003302',
        '5GN' => 'E02003301',
        '5GP' => 'E02003301',
        '5GR' => 'E02003301',
        '5GS' => 'E02003301',
        '5GU' => 'E02003301',
        '5GW' => 'E02003301',
        '5GX' => 'E02003301',
        '5GY' => 'E02003301',
        '5GZ' => 'E02003302',
        '5HA' => 'E02003302',
        '5HB' => 'E02003302',
        '5HD' => 'E02003302',
        '5HE' => 'E02003301',
        '5HF' => 'E02003301',
        '5HG' => 'E02003301',
        '5HH' => 'E02003301',
        '5HJ' => 'E02003302',
        '5HL' => 'E02003302',
        '5HN' => 'E02003302',
        '5HP' => 'E02003301',
        '5HQ' => 'E02003301',
        '5HR' => 'E02003302',
        '5HS' => 'E02003302',
        '5HT' => 'E02003302',
        '5HU' => 'E02003302',
        '5HW' => 'E02003302',
        '5HX' => 'E02003302',
        '5HY' => 'E02003302',
        '5HZ' => 'E02003302',
        '5JA' => 'E02003302',
        '5JB' => 'E02003302',
        '5JE' => 'E02003302',
        '5JF' => 'E02003302',
        '5JG' => 'E02003302',
        '5JH' => 'E02003302',
        '5JJ' => 'E02003302',
        '5JL' => 'E02003302',
        '5JN' => 'E02003302',
        '5JP' => 'E02003302',
        '5JQ' => 'E02003302',
        '5JR' => 'E02003302',
        '5JS' => 'E02003302',
        '5JT' => 'E02003302',
        '5JU' => 'E02003302',
        '5JW' => 'E02003302',
        '5JX' => 'E02003302',
        '5JY' => 'E02003302',
        '5JZ' => 'E02003302',
        '5LA' => 'E02003302',
        '5LD' => 'E02003301',
        '5LH' => 'E02003302',
        '5LJ' => 'E02003302',
        '5LL' => 'E02003301',
        '5LN' => 'E02003301',
        '5LP' => 'E02003302',
        '5LR' => 'E02003301',
        '5LS' => 'E02003302',
        '5LT' => 'E02003302',
        '5LU' => 'E02003302',
        '5LW' => 'E02003301',
        '5LX' => 'E02003302',
        '5LY' => 'E02003301',
        '5LZ' => 'E02003301',
        '5NA' => 'E02003302',
        '5NB' => 'E02003302',
        '5ND' => 'E02003302',
        '5NE' => 'E02003302',
        '5NF' => 'E02003302',
        '5NG' => 'E02003302',
        '5NH' => 'E02003302',
        '5NJ' => 'E02003302',
        '5NL' => 'E02003302',
        '5NN' => 'E02003302',
        '5NP' => 'E02003302',
        '5NQ' => 'E02003302',
        '5NR' => 'E02003301',
        '5NS' => 'E02003302',
        '5NT' => 'E02003301',
        '5NW' => 'E02003302',
        '5NX' => 'E02003302',
        '5NZ' => 'E02003302',
        '5PA' => 'E02003302',
        '5PD' => 'E02003302',
        '5PE' => 'E02003302',
        '5PF' => 'E02003302',
        '5PG' => 'E02003302',
        '5PH' => 'E02003302',
        '5PJ' => 'E02003302',
        '5PL' => 'E02003302',
        '5PN' => 'E02003302',
        '5PP' => 'E02003302',
        '5PQ' => 'E02003302',
        '5PS' => 'E02003302',
        '5PT' => 'E02003302',
        '5PU' => 'E02003302',
        '5PW' => 'E02003302',
        '5PX' => 'E02003302',
        '5PY' => 'E02003302',
        '5PZ' => 'E02003302',
        '5QA' => 'E02003302',
        '5QB' => 'E02003302',
        '5QD' => 'E02003302',
        '5QE' => 'E02003302',
        '5QH' => 'E02003302',
        '5QJ' => 'E02003302',
        '5QL' => 'E02003302',
        '5QN' => 'E02003302',
        '5QP' => 'E02003302',
        '5QQ' => 'E02003302',
        '5QR' => 'E02003302',
        '5QS' => 'E02003302',
        '5QT' => 'E02003302',
        '5QU' => 'E02003302',
        '5QW' => 'E02003302',
        '5QX' => 'E02003302',
        '5QY' => 'E02003302',
        '5QZ' => 'E02003302',
        '5RA' => 'E02003302',
        '5RB' => 'E02003302',
        '5RD' => 'E02003302',
        '5RE' => 'E02003302',
        '5RF' => 'E02003302',
        '5RG' => 'E02003302',
        '5RH' => 'E02003302',
        '5RJ' => 'E02003302',
        '5RL' => 'E02003302',
        '5RN' => 'E02003302',
        '5RP' => 'E02003302',
        '5RQ' => 'E02003302',
        '5RR' => 'E02003302',
        '5RS' => 'E02003302',
        '5RT' => 'E02003302',
        '5RU' => 'E02003302',
        '5RW' => 'E02003302',
        '5RX' => 'E02003301',
        '5RZ' => 'E02003302',
        '5SB' => 'E02003301',
        '5SD' => 'E02003301',
        '5SH' => 'E02003301',
        '5SJ' => 'E02003301',
        '5SS' => 'E02003301',
        '5SX' => 'E02003301',
        '5SY' => 'E02003301',
        '5SZ' => 'E02003302',
        '5TB' => 'E02003301',
        '5TD' => 'E02003301',
        '5TH' => 'E02003301',
        '5TJ' => 'E02003301',
        '5TP' => 'E02003301',
        '5TR' => 'E02003301',
        '5TT' => 'E02003301',
        '5TU' => 'E02003301',
        '5TX' => 'E02003302',
        '5TY' => 'E02003301',
        '5WA' => 'E02003301',
        '5WB' => 'E02003301',
        '5WD' => 'E02003301',
        '5WE' => 'E02003301',
        '5WF' => 'E02003301',
        '5WG' => 'E02003301',
        '5WH' => 'E02003301',
        '5WJ' => 'E02003301',
        '5WL' => 'E02003301',
        '5WN' => 'E02003301',
        '5WQ' => 'E02003301',
        '5WR' => 'E02003301',
        '5WS' => 'E02003301',
        '5WT' => 'E02003301',
        '5WU' => 'E02003301',
        '5WW' => 'E02003301',
        '5WX' => 'E02003301',
        '5WY' => 'E02003301',
        '5WZ' => 'E02003301',
        '5XA' => 'E02003302',
        '5XB' => 'E02003302',
        '5XD' => 'E02003302',
        '5XE' => 'E02003302',
        '5XF' => 'E02003302',
        '5XG' => 'E02003301',
        '5XH' => 'E02003301',
        '5YA' => 'E02003301',
        '5YB' => 'E02003301',
        '5YF' => 'E02003301',
        '5YP' => 'E02003301',
        '5YQ' => 'E02003301',
        '5YT' => 'E02003301',
        '5YX' => 'E02003302',
        '5YZ' => 'E02003302',
        '6AA' => 'E02003302',
        '6AB' => 'E02003302',
        '6AD' => 'E02003302',
        '6AE' => 'E02003301',
        '6AF' => 'E02003301',
        '6AG' => 'E02003301',
        '6AH' => 'E02003302',
        '6AJ' => 'E02003301',
        '6AL' => 'E02003302',
        '6AN' => 'E02003302',
        '6AP' => 'E02003302',
        '6AQ' => 'E02003301',
        '6AR' => 'E02003302',
        '6AS' => 'E02003302',
        '6AT' => 'E02003302',
        '6AU' => 'E02003302',
        '6AW' => 'E02003301',
        '6AX' => 'E02003302',
        '6AY' => 'E02003301',
        '6AZ' => 'E02003301',
        '6BA' => 'E02003302',
        '6BB' => 'E02003302',
        '6BD' => 'E02003302',
        '6BE' => 'E02003301',
        '6BF' => 'E02003301',
        '6BG' => 'E02003301',
        '6BH' => 'E02003302',
        '6BJ' => 'E02003301',
        '6BL' => 'E02003301',
        '6BN' => 'E02003301',
        '6BP' => 'E02003301',
        '6BQ' => 'E02003301',
        '6BS' => 'E02003301',
        '6BT' => 'E02003301',
        '6BU' => 'E02003301',
        '6BX' => 'E02003301',
        '6BY' => 'E02003301',
        '6BZ' => 'E02003301',
        '6DA' => 'E02003301',
        '6DB' => 'E02003301',
        '6DD' => 'E02003301',
        '6DE' => 'E02003301',
        '6DG' => 'E02003301',
        '6DH' => 'E02003301',
        '6DJ' => 'E02003301',
        '6DL' => 'E02003301',
        '6DN' => 'E02003301',
        '6DP' => 'E02003301',
        '6DR' => 'E02003301',
        '6DS' => 'E02003301',
        '6DT' => 'E02003301',
        '6DU' => 'E02003301',
        '6DW' => 'E02003301',
        '6DX' => 'E02003302',
        '6EA' => 'E02003302',
        '6EB' => 'E02003302',
        '6ED' => 'E02003302',
        '6EE' => 'E02003302',
        '6EF' => 'E02003301',
        '6EG' => 'E02003302',
        '6EH' => 'E02003302',
        '6EJ' => 'E02003302',
        '6EL' => 'E02003302',
        '6EN' => 'E02003302',
        '6EP' => 'E02003302',
        '6EQ' => 'E02003302',
        '6ER' => 'E02003302',
        '6ES' => 'E02003301',
        '6ET' => 'E02003301',
        '6EU' => 'E02003301',
        '6EX' => 'E02003301',
        '6EZ' => 'E02003301',
        '6GD' => 'E02003301',
        '6GR' => 'E02003301',
        '6GX' => 'E02003301',
        '6HA' => 'E02003301',
        '6HB' => 'E02003301',
        '6HD' => 'E02003301',
        '6HH' => 'E02003301',
        '6HJ' => 'E02003301',
        '6HL' => 'E02003301',
        '6HP' => 'E02003301',
        '6HR' => 'E02003301',
        '6HS' => 'E02003301',
        '6HT' => 'E02003301',
        '6HU' => 'E02003301',
        '6HX' => 'E02003301',
        '6HY' => 'E02003301',
        '6HZ' => 'E02003301',
        '6JA' => 'E02003301',
        '6JB' => 'E02003301',
        '6JD' => 'E02003301',
        '6JE' => 'E02003301',
        '6JF' => 'E02003301',
        '6JG' => 'E02003301',
        '6JH' => 'E02003301',
        '6JJ' => 'E02003301',
        '6JL' => 'E02003301',
        '6JP' => 'E02003301',
        '6JQ' => 'E02003301',
        '6JR' => 'E02003301',
        '6JS' => 'E02003301',
        '6JT' => 'E02003301',
        '6LH' => 'E02003301',
        '6NH' => 'E02003301',
        '6NJ' => 'E02003301',
        '6NL' => 'E02003301',
        '6NN' => 'E02003301',
        '6NP' => 'E02003301',
        '6NR' => 'E02003301',
        '6NS' => 'E02003301',
        '6NT' => 'E02003301',
        '6NU' => 'E02003301',
        '6NW' => 'E02003301',
        '6NX' => 'E02003301',
        '6PA' => 'E02003301',
        '6PB' => 'E02003301',
        '6PD' => 'E02003301',
        '6PE' => 'E02003301',
        '6PF' => 'E02003301',
        '6PG' => 'E02003301',
        '6PH' => 'E02003301',
        '6PJ' => 'E02003301',
        '6PL' => 'E02003301',
        '6PN' => 'E02003301',
        '6PP' => 'E02003301',
        '6PR' => 'E02003301',
        '6PS' => 'E02003301',
        '6PT' => 'E02003301',
        '6PU' => 'E02003301',
        '6PW' => 'E02003301',
        '6PX' => 'E02003301',
        '6PY' => 'E02003301',
        '6QA' => 'E02003301',
        '6QB' => 'E02003301',
        '6QD' => 'E02003301',
        '6QE' => 'E02003301',
        '6QH' => 'E02003301',
        '6QJ' => 'E02003301',
        '6QL' => 'E02003301',
        '6QP' => 'E02003301',
        '6QR' => 'E02003301',
        '6QS' => 'E02003301',
        '6QT' => 'E02003301',
        '6QU' => 'E02003301',
        '6RA' => 'E02003301',
        '6RB' => 'E02003301',
        '6RD' => 'E02003301',
        '6RE' => 'E02003301',
        '6RF' => 'E02003301',
        '6RG' => 'E02003301',
        '6RH' => 'E02003302',
        '6RJ' => 'E02003301',
        '6RL' => 'E02003302',
        '6RN' => 'E02003301',
        '6RP' => 'E02003301',
        '6RQ' => 'E02003301',
        '6RR' => 'E02003301',
        '6RS' => 'E02003301',
        '6RT' => 'E02003301',
        '6RU' => 'E02003301',
        '6RW' => 'E02003301',
        '6RX' => 'E02003301',
        '6RY' => 'E02003301',
        '6RZ' => 'E02003301',
        '6SA' => 'E02003301',
        '6SB' => 'E02003301',
        '6SD' => 'E02003301',
        '6SH' => 'E02003301',
        '6SJ' => 'E02003301',
        '6SL' => 'E02003301',
        '6SP' => 'E02003301',
        '6SR' => 'E02003301',
        '6SS' => 'E02003301',
        '6ST' => 'E02003301',
        '6SX' => 'E02003301',
        '6TA' => 'E02003301',
        '6TB' => 'E02003301',
        '6TD' => 'E02003301',
        '6TE' => 'E02003301',
        '6TG' => 'E02003301',
        '6TH' => 'E02003301',
        '6TJ' => 'E02003301',
        '6TP' => 'E02003301',
        '6TS' => 'E02003301',
        '6TT' => 'E02003301',
        '6TU' => 'E02003301',
        '6TW' => 'E02003301',
        '6TX' => 'E02003301',
        '6TY' => 'E02003301',
        '6TZ' => 'E02003301',
        '6WA' => 'E02003301',
        '6WB' => 'E02003301',
        '6WD' => 'E02003301',
        '6WE' => 'E02003301',
        '6WF' => 'E02003301',
        '6WG' => 'E02003301',
        '6WJ' => 'E02003301',
        '6WL' => 'E02003301',
        '6WN' => 'E02003301',
        '6WP' => 'E02003301',
        '6WQ' => 'E02003301',
        '6WR' => 'E02003301',
        '6WS' => 'E02003301',
        '6WT' => 'E02003301',
        '6WU' => 'E02003301',
        '6WW' => 'E02003301',
        '6WX' => 'E02003301',
        '6WY' => 'E02003301',
        '6WZ' => 'E02003301',
        '6XA' => 'E02003301',
        '6XB' => 'E02003301',
        '6XD' => 'E02003301',
        '6XE' => 'E02003301',
        '6XH' => 'E02003301',
        '6XQ' => 'E02003301',
        '6YF' => 'E02003301',
        '6YQ' => 'E02003301',
        '6ZE' => 'E02003301',
        '9AA' => 'E02003301',
        '9AE' => 'E02003301',
        '9AG' => 'E02003301',
        '9AJ' => 'E02003301',
        '9AL' => 'E02003301',
        '9AN' => 'E02003301',
        '9AP' => 'E02003301',
        '9AQ' => 'E02003301',
        '9AR' => 'E02003301',
        '9AS' => 'E02003301',
        '9AT' => 'E02003301',
        '9AU' => 'E02003301',
        '9AW' => 'E02003301',
        '9AX' => 'E02003301',
        '9AY' => 'E02003301',
        '9AZ' => 'E02003301',
        '9BA' => 'E02003301',
        '9BB' => 'E02003301',
        '9BD' => 'E02003301',
        '9BE' => 'E02003301',
        '9BF' => 'E02003301',
        '9BH' => 'E02003301',
        '9BJ' => 'E02003301',
        '9BL' => 'E02003301',
        '9BN' => 'E02003301',
        '9BP' => 'E02003301',
        '9BQ' => 'E02003301',
        '9BR' => 'E02003301',
        '9BS' => 'E02003301',
        '9BT' => 'E02003301',
        '9BU' => 'E02003301',
        '9BW' => 'E02003301',
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
