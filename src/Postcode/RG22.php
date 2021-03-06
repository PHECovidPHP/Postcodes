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
final class RG22
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '4AA' => 'E02004690',
        '4AB' => 'E02004690',
        '4AD' => 'E02004690',
        '4AE' => 'E02004681',
        '4AF' => 'E02004690',
        '4AG' => 'E02004690',
        '4AH' => 'E02004690',
        '4AJ' => 'E02004695',
        '4AL' => 'E02004695',
        '4AN' => 'E02004690',
        '4AP' => 'E02004690',
        '4AQ' => 'E02004695',
        '4AR' => 'E02004690',
        '4AS' => 'E02004690',
        '4AT' => 'E02004690',
        '4AU' => 'E02004690',
        '4AW' => 'E02004690',
        '4AX' => 'E02004690',
        '4AY' => 'E02004690',
        '4AZ' => 'E02004690',
        '4BA' => 'E02004690',
        '4BB' => 'E02004690',
        '4BD' => 'E02004690',
        '4BE' => 'E02004690',
        '4BF' => 'E02004690',
        '4BG' => 'E02004690',
        '4BH' => 'E02004690',
        '4BJ' => 'E02004690',
        '4BL' => 'E02004690',
        '4BN' => 'E02004681',
        '4BP' => 'E02004690',
        '4BQ' => 'E02004690',
        '4BS' => 'E02004690',
        '4BT' => 'E02004690',
        '4BU' => 'E02004690',
        '4BW' => 'E02004693',
        '4BX' => 'E02004690',
        '4BY' => 'E02004690',
        '4BZ' => 'E02004693',
        '4DA' => 'E02004695',
        '4DB' => 'E02004695',
        '4DD' => 'E02004695',
        '4DE' => 'E02004690',
        '4DF' => 'E02004690',
        '4DG' => 'E02004695',
        '4DH' => 'E02004693',
        '4DJ' => 'E02004693',
        '4DL' => 'E02004693',
        '4DN' => 'E02004693',
        '4DP' => 'E02004693',
        '4DQ' => 'E02004690',
        '4DR' => 'E02004693',
        '4DS' => 'E02004690',
        '4DT' => 'E02004690',
        '4DU' => 'E02004690',
        '4DW' => 'E02004693',
        '4DX' => 'E02004690',
        '4DY' => 'E02004690',
        '4DZ' => 'E02004690',
        '4EA' => 'E02004690',
        '4EB' => 'E02004690',
        '4ED' => 'E02004690',
        '4EE' => 'E02004690',
        '4EF' => 'E02004690',
        '4EG' => 'E02004690',
        '4EH' => 'E02004693',
        '4EJ' => 'E02004690',
        '4EL' => 'E02004690',
        '4EN' => 'E02004690',
        '4EP' => 'E02004690',
        '4EQ' => 'E02004693',
        '4ER' => 'E02004690',
        '4ES' => 'E02004692',
        '4ET' => 'E02004692',
        '4EU' => 'E02004693',
        '4EW' => 'E02004690',
        '4EX' => 'E02004693',
        '4EY' => 'E02004693',
        '4EZ' => 'E02004693',
        '4FA' => 'E02004695',
        '4FB' => 'E02004681',
        '4FD' => 'E02004692',
        '4FE' => 'E02004695',
        '4FF' => 'E02004695',
        '4FG' => 'E02004681',
        '4FH' => 'E02004695',
        '4FJ' => 'E02004695',
        '4FL' => 'E02004693',
        '4FN' => 'E02004695',
        '4FP' => 'E02004695',
        '4FQ' => 'E02004690',
        '4FR' => 'E02004695',
        '4FS' => 'E02004695',
        '4FT' => 'E02004681',
        '4FU' => 'E02004681',
        '4FW' => 'E02004695',
        '4FX' => 'E02004695',
        '4FY' => 'E02004681',
        '4FZ' => 'E02004681',
        '4GA' => 'E02004690',
        '4GB' => 'E02004690',
        '4GD' => 'E02004693',
        '4GE' => 'E02004693',
        '4GF' => 'E02004693',
        '4GG' => 'E02004693',
        '4GH' => 'E02004693',
        '4GJ' => 'E02004690',
        '4GL' => 'E02004693',
        '4GN' => 'E02004693',
        '4GP' => 'E02004693',
        '4GQ' => 'E02004693',
        '4GR' => 'E02004681',
        '4GS' => 'E02004681',
        '4GT' => 'E02004681',
        '4GU' => 'E02004693',
        '4GW' => 'E02004681',
        '4GX' => 'E02004681',
        '4GY' => 'E02004693',
        '4HA' => 'E02004693',
        '4HB' => 'E02004693',
        '4HD' => 'E02004693',
        '4HE' => 'E02004693',
        '4HF' => 'E02004693',
        '4HG' => 'E02004693',
        '4HH' => 'E02004693',
        '4HJ' => 'E02004693',
        '4HL' => 'E02004693',
        '4HN' => 'E02004690',
        '4HP' => 'E02004690',
        '4HQ' => 'E02004693',
        '4HR' => 'E02004690',
        '4HS' => 'E02004693',
        '4HT' => 'E02004693',
        '4HU' => 'E02004690',
        '4HW' => 'E02004690',
        '4HX' => 'E02004693',
        '4HY' => 'E02004690',
        '4HZ' => 'E02004690',
        '4JA' => 'E02004690',
        '4JB' => 'E02004690',
        '4JD' => 'E02004690',
        '4JE' => 'E02004693',
        '4JF' => 'E02004693',
        '4JG' => 'E02004693',
        '4JH' => 'E02004690',
        '4JJ' => 'E02004693',
        '4JL' => 'E02004690',
        '4JN' => 'E02004693',
        '4JP' => 'E02004693',
        '4JQ' => 'E02004693',
        '4JR' => 'E02004690',
        '4JS' => 'E02004690',
        '4JT' => 'E02004690',
        '4JU' => 'E02004693',
        '4JW' => 'E02004693',
        '4JX' => 'E02004693',
        '4JY' => 'E02004693',
        '4JZ' => 'E02004693',
        '4LA' => 'E02004690',
        '4LB' => 'E02004693',
        '4LD' => 'E02004693',
        '4LE' => 'E02004693',
        '4LF' => 'E02004693',
        '4LG' => 'E02004681',
        '4LH' => 'E02004693',
        '4LJ' => 'E02004693',
        '4LL' => 'E02004693',
        '4LN' => 'E02004693',
        '4LP' => 'E02004693',
        '4LQ' => 'E02004693',
        '4LR' => 'E02004693',
        '4LS' => 'E02004693',
        '4LT' => 'E02004690',
        '4LU' => 'E02004690',
        '4LW' => 'E02004693',
        '4LX' => 'E02004690',
        '4LY' => 'E02004690',
        '4LZ' => 'E02004690',
        '4NA' => 'E02004690',
        '4NB' => 'E02004690',
        '4ND' => 'E02004693',
        '4NE' => 'E02004693',
        '4NF' => 'E02004693',
        '4NG' => 'E02004693',
        '4NH' => 'E02004693',
        '4NJ' => 'E02004693',
        '4NL' => 'E02004693',
        '4NN' => 'E02004693',
        '4NP' => 'E02004690',
        '4NQ' => 'E02004693',
        '4NR' => 'E02004690',
        '4NS' => 'E02004690',
        '4NT' => 'E02004690',
        '4NU' => 'E02004690',
        '4NW' => 'E02004690',
        '4NX' => 'E02004693',
        '4NY' => 'E02004693',
        '4NZ' => 'E02004693',
        '4PA' => 'E02004693',
        '4PB' => 'E02004693',
        '4PD' => 'E02004690',
        '4PE' => 'E02004690',
        '4PF' => 'E02004682',
        '4PG' => 'E02004695',
        '4PH' => 'E02004693',
        '4PJ' => 'E02004693',
        '4PL' => 'E02004693',
        '4PN' => 'E02004693',
        '4PP' => 'E02004693',
        '4PQ' => 'E02004695',
        '4PR' => 'E02004693',
        '4PS' => 'E02004693',
        '4PT' => 'E02004693',
        '4PU' => 'E02004693',
        '4PW' => 'E02004693',
        '4PX' => 'E02004693',
        '4PY' => 'E02004693',
        '4PZ' => 'E02004693',
        '4QA' => 'E02004695',
        '4QB' => 'E02004695',
        '4QD' => 'E02004695',
        '4QE' => 'E02004695',
        '4QF' => 'E02004695',
        '4QG' => 'E02004695',
        '4QH' => 'E02004695',
        '4QJ' => 'E02004695',
        '4QL' => 'E02004681',
        '4QN' => 'E02004693',
        '4QP' => 'E02004695',
        '4QQ' => 'E02004695',
        '4QR' => 'E02004695',
        '4QS' => 'E02004681',
        '4QT' => 'E02004695',
        '4QU' => 'E02004695',
        '4QW' => 'E02004681',
        '4QX' => 'E02004695',
        '4QY' => 'E02004695',
        '4QZ' => 'E02004695',
        '4RA' => 'E02004695',
        '4RB' => 'E02004695',
        '4RD' => 'E02004695',
        '4RE' => 'E02004695',
        '4RF' => 'E02004695',
        '4RG' => 'E02004695',
        '4RH' => 'E02004695',
        '4RJ' => 'E02004695',
        '4RL' => 'E02004695',
        '4RN' => 'E02004695',
        '4RP' => 'E02004695',
        '4RQ' => 'E02004695',
        '4RR' => 'E02004695',
        '4RS' => 'E02004695',
        '4RT' => 'E02004695',
        '4RU' => 'E02004681',
        '4RW' => 'E02004695',
        '4RX' => 'E02004681',
        '4RY' => 'E02004695',
        '4RZ' => 'E02004695',
        '4SA' => 'E02004681',
        '4SB' => 'E02004690',
        '4SD' => 'E02004681',
        '4SE' => 'E02004695',
        '4SF' => 'E02004695',
        '4SG' => 'E02004695',
        '4SH' => 'E02004681',
        '4SJ' => 'E02004681',
        '4SL' => 'E02004681',
        '4SN' => 'E02004681',
        '4SP' => 'E02004681',
        '4SQ' => 'E02004681',
        '4SR' => 'E02004695',
        '4SS' => 'E02004695',
        '4ST' => 'E02004681',
        '4SU' => 'E02004681',
        '4SW' => 'E02004681',
        '4SX' => 'E02004681',
        '4SY' => 'E02004681',
        '4SZ' => 'E02004681',
        '4TA' => 'E02004693',
        '4TB' => 'E02004693',
        '4TD' => 'E02004693',
        '4TE' => 'E02004681',
        '4TF' => 'E02004693',
        '4TG' => 'E02004693',
        '4TH' => 'E02004693',
        '4TJ' => 'E02004695',
        '4TL' => 'E02004695',
        '4TN' => 'E02004695',
        '4TP' => 'E02004695',
        '4TQ' => 'E02004693',
        '4TR' => 'E02004695',
        '4TS' => 'E02004693',
        '4TT' => 'E02004695',
        '4TU' => 'E02004693',
        '4TW' => 'E02004695',
        '4TX' => 'E02004695',
        '4TY' => 'E02004693',
        '4TZ' => 'E02004681',
        '4UA' => 'E02004695',
        '4UB' => 'E02004695',
        '4UD' => 'E02004695',
        '4UE' => 'E02004695',
        '4UF' => 'E02004695',
        '4UG' => 'E02004693',
        '4UH' => 'E02004693',
        '4UJ' => 'E02004695',
        '4UL' => 'E02004693',
        '4UN' => 'E02004681',
        '4UP' => 'E02004693',
        '4UQ' => 'E02004695',
        '4UR' => 'E02004695',
        '4US' => 'E02004695',
        '4UT' => 'E02004695',
        '4UU' => 'E02004695',
        '4UW' => 'E02004693',
        '4UX' => 'E02004695',
        '4UY' => 'E02004695',
        '4UZ' => 'E02004695',
        '4WA' => 'E02004681',
        '4WB' => 'E02004681',
        '4WD' => 'E02004681',
        '4WE' => 'E02004681',
        '4WF' => 'E02004681',
        '4WG' => 'E02004681',
        '4WH' => 'E02004681',
        '4WJ' => 'E02004681',
        '4WL' => 'E02004681',
        '4WN' => 'E02004681',
        '4WP' => 'E02004681',
        '4WQ' => 'E02004681',
        '4WR' => 'E02004695',
        '4WS' => 'E02004695',
        '4WT' => 'E02004695',
        '4WU' => 'E02004695',
        '4WW' => 'E02004681',
        '4WX' => 'E02004695',
        '4WY' => 'E02004695',
        '4WZ' => 'E02004695',
        '4XA' => 'E02004695',
        '4XB' => 'E02004695',
        '4XD' => 'E02004695',
        '4XE' => 'E02004695',
        '4XF' => 'E02004695',
        '4XG' => 'E02004695',
        '4XH' => 'E02004695',
        '4XJ' => 'E02004695',
        '4XL' => 'E02004695',
        '4XN' => 'E02004695',
        '4XP' => 'E02004695',
        '4XQ' => 'E02004695',
        '4XR' => 'E02004695',
        '4XS' => 'E02004695',
        '4XT' => 'E02004695',
        '4XU' => 'E02004695',
        '4XW' => 'E02004695',
        '4XX' => 'E02004695',
        '4XY' => 'E02004681',
        '4XZ' => 'E02004695',
        '4YA' => 'E02004681',
        '4YB' => 'E02004695',
        '4YD' => 'E02004681',
        '4YE' => 'E02004695',
        '4YF' => 'E02004695',
        '4YG' => 'E02004695',
        '4YH' => 'E02004681',
        '4YJ' => 'E02004695',
        '4YL' => 'E02004695',
        '4YN' => 'E02004695',
        '4YP' => 'E02004693',
        '4YQ' => 'E02004695',
        '4YR' => 'E02004681',
        '4YS' => 'E02004681',
        '4YT' => 'E02004681',
        '4YU' => 'E02004681',
        '4YW' => 'E02004695',
        '4YX' => 'E02004681',
        '4YY' => 'E02004681',
        '4YZ' => 'E02004681',
        '4ZB' => 'E02004681',
        '4ZD' => 'E02004681',
        '4ZG' => 'E02004681',
        '4ZH' => 'E02004681',
        '4ZJ' => 'E02004681',
        '4ZL' => 'E02004681',
        '4ZN' => 'E02004681',
        '4ZP' => 'E02004681',
        '4ZQ' => 'E02004681',
        '4ZR' => 'E02004681',
        '4ZW' => 'E02004681',
        '4ZX' => 'E02004681',
        '4ZZ' => 'E02004695',
        '5AA' => 'E02004688',
        '5AB' => 'E02004687',
        '5AD' => 'E02004687',
        '5AE' => 'E02004687',
        '5AF' => 'E02004687',
        '5AG' => 'E02004687',
        '5AH' => 'E02004687',
        '5AJ' => 'E02004687',
        '5AL' => 'E02004687',
        '5AN' => 'E02004687',
        '5AP' => 'E02004692',
        '5AQ' => 'E02004687',
        '5AR' => 'E02004692',
        '5AS' => 'E02004687',
        '5AT' => 'E02004687',
        '5AU' => 'E02004687',
        '5AW' => 'E02004687',
        '5AX' => 'E02004687',
        '5AY' => 'E02004687',
        '5AZ' => 'E02004687',
        '5BA' => 'E02004687',
        '5BB' => 'E02004687',
        '5BD' => 'E02004687',
        '5BE' => 'E02004687',
        '5BF' => 'E02004687',
        '5BG' => 'E02004687',
        '5BH' => 'E02004687',
        '5BJ' => 'E02004687',
        '5BL' => 'E02004687',
        '5BN' => 'E02004687',
        '5BP' => 'E02004687',
        '5BQ' => 'E02004687',
        '5BS' => 'E02004687',
        '5BT' => 'E02004687',
        '5BU' => 'E02004687',
        '5BW' => 'E02004687',
        '5BX' => 'E02004687',
        '5BY' => 'E02004687',
        '5BZ' => 'E02004687',
        '5DA' => 'E02004687',
        '5DB' => 'E02004687',
        '5DD' => 'E02004687',
        '5DE' => 'E02004687',
        '5DF' => 'E02004687',
        '5DG' => 'E02004687',
        '5DH' => 'E02004692',
        '5DJ' => 'E02004687',
        '5DL' => 'E02004687',
        '5DN' => 'E02004687',
        '5DP' => 'E02004687',
        '5DQ' => 'E02004687',
        '5DR' => 'E02004687',
        '5DS' => 'E02004687',
        '5DT' => 'E02004687',
        '5DU' => 'E02004687',
        '5DW' => 'E02004687',
        '5DX' => 'E02004687',
        '5DY' => 'E02004687',
        '5DZ' => 'E02004687',
        '5EA' => 'E02004687',
        '5EB' => 'E02004687',
        '5ED' => 'E02004687',
        '5EE' => 'E02004687',
        '5EF' => 'E02004687',
        '5EG' => 'E02004687',
        '5EH' => 'E02004687',
        '5EJ' => 'E02004692',
        '5EL' => 'E02004687',
        '5EN' => 'E02004692',
        '5EP' => 'E02004687',
        '5EQ' => 'E02004687',
        '5ER' => 'E02004687',
        '5ES' => 'E02004687',
        '5ET' => 'E02004687',
        '5EU' => 'E02004687',
        '5EW' => 'E02004692',
        '5EX' => 'E02004687',
        '5EY' => 'E02004687',
        '5EZ' => 'E02004692',
        '5FA' => 'E02004687',
        '5FB' => 'E02004687',
        '5FD' => 'E02004687',
        '5FE' => 'E02004687',
        '5FF' => 'E02004687',
        '5FG' => 'E02004687',
        '5FH' => 'E02004687',
        '5FJ' => 'E02004692',
        '5FL' => 'E02004687',
        '5FN' => 'E02004692',
        '5FP' => 'E02004692',
        '5FY' => 'E02004687',
        '5GA' => 'E02004681',
        '5GZ' => 'E02004692',
        '5HA' => 'E02004692',
        '5HB' => 'E02004692',
        '5HD' => 'E02004692',
        '5HE' => 'E02004692',
        '5HF' => 'E02004692',
        '5HG' => 'E02004692',
        '5HH' => 'E02004692',
        '5HJ' => 'E02004692',
        '5HL' => 'E02004692',
        '5HN' => 'E02004692',
        '5HP' => 'E02004692',
        '5HQ' => 'E02004692',
        '5HR' => 'E02004692',
        '5HS' => 'E02004692',
        '5HT' => 'E02004692',
        '5HU' => 'E02004692',
        '5HW' => 'E02004692',
        '5HX' => 'E02004692',
        '5HY' => 'E02004692',
        '5HZ' => 'E02004692',
        '5JA' => 'E02004692',
        '5JB' => 'E02004692',
        '5JD' => 'E02004692',
        '5JE' => 'E02004692',
        '5JF' => 'E02004692',
        '5JG' => 'E02004692',
        '5JH' => 'E02004692',
        '5JJ' => 'E02004692',
        '5JL' => 'E02004692',
        '5JN' => 'E02004692',
        '5JP' => 'E02004692',
        '5JQ' => 'E02004692',
        '5JR' => 'E02004692',
        '5JS' => 'E02004692',
        '5JT' => 'E02004687',
        '5JU' => 'E02004692',
        '5JW' => 'E02004692',
        '5JX' => 'E02004692',
        '5JY' => 'E02004692',
        '5JZ' => 'E02004692',
        '5LA' => 'E02004692',
        '5LB' => 'E02004692',
        '5LD' => 'E02004692',
        '5LE' => 'E02004692',
        '5LF' => 'E02004692',
        '5LG' => 'E02004692',
        '5LH' => 'E02004692',
        '5LJ' => 'E02004692',
        '5LL' => 'E02004692',
        '5LN' => 'E02004692',
        '5LP' => 'E02004692',
        '5LQ' => 'E02004692',
        '5LR' => 'E02004692',
        '5LS' => 'E02004692',
        '5LT' => 'E02004692',
        '5LU' => 'E02004692',
        '5LW' => 'E02004692',
        '5LX' => 'E02004692',
        '5LY' => 'E02004692',
        '5LZ' => 'E02004692',
        '5NA' => 'E02004692',
        '5NB' => 'E02004692',
        '5ND' => 'E02004692',
        '5NE' => 'E02004692',
        '5NF' => 'E02004692',
        '5NG' => 'E02004692',
        '5NH' => 'E02004692',
        '5NJ' => 'E02004692',
        '5NL' => 'E02004692',
        '5NN' => 'E02004692',
        '5NP' => 'E02004692',
        '5NQ' => 'E02004692',
        '5NR' => 'E02004692',
        '5NS' => 'E02004692',
        '5NT' => 'E02004692',
        '5NU' => 'E02004692',
        '5NW' => 'E02004692',
        '5NX' => 'E02004692',
        '5NY' => 'E02004692',
        '5NZ' => 'E02004692',
        '5PA' => 'E02004692',
        '5PB' => 'E02004692',
        '5PD' => 'E02004692',
        '5PE' => 'E02004692',
        '5PF' => 'E02004692',
        '5PG' => 'E02004692',
        '5PH' => 'E02004692',
        '5PJ' => 'E02004692',
        '5PL' => 'E02004692',
        '5PN' => 'E02004692',
        '5PP' => 'E02004692',
        '5PQ' => 'E02004692',
        '5PR' => 'E02004692',
        '5PS' => 'E02004692',
        '5PT' => 'E02004692',
        '5PU' => 'E02004692',
        '5PW' => 'E02004692',
        '5PX' => 'E02004692',
        '5PY' => 'E02004692',
        '5PZ' => 'E02004692',
        '5QA' => 'E02004692',
        '5QB' => 'E02004692',
        '5QD' => 'E02004692',
        '5QE' => 'E02004692',
        '5QF' => 'E02004692',
        '5QG' => 'E02004692',
        '5QH' => 'E02004692',
        '5QJ' => 'E02004692',
        '5QL' => 'E02004692',
        '5QN' => 'E02004692',
        '5QP' => 'E02004692',
        '5QQ' => 'E02004692',
        '5QR' => 'E02004692',
        '5QS' => 'E02004692',
        '5QT' => 'E02004692',
        '5QU' => 'E02004692',
        '5QW' => 'E02004692',
        '5QX' => 'E02004692',
        '5QY' => 'E02004692',
        '5QZ' => 'E02004692',
        '5RA' => 'E02004692',
        '5RB' => 'E02004692',
        '5RD' => 'E02004692',
        '5RE' => 'E02004692',
        '5RF' => 'E02004692',
        '5RG' => 'E02004692',
        '5RH' => 'E02004692',
        '5RJ' => 'E02004692',
        '5RL' => 'E02004692',
        '5RN' => 'E02004692',
        '5RP' => 'E02004692',
        '5RQ' => 'E02004692',
        '5RR' => 'E02004692',
        '5RS' => 'E02004692',
        '5RT' => 'E02004689',
        '5RU' => 'E02004689',
        '5RW' => 'E02004692',
        '5RX' => 'E02004681',
        '5RY' => 'E02004689',
        '5RZ' => 'E02004692',
        '5SA' => 'E02004689',
        '5SB' => 'E02004681',
        '5SE' => 'E02004689',
        '5SF' => 'E02004689',
        '5SG' => 'E02004689',
        '5SH' => 'E02004689',
        '5SN' => 'E02004692',
        '5ST' => 'E02004689',
        '5TD' => 'E02004689',
        '5TF' => 'E02004689',
        '5TH' => 'E02004692',
        '5UA' => 'E02004692',
        '5UB' => 'E02004692',
        '5UD' => 'E02004692',
        '5UE' => 'E02004692',
        '5UF' => 'E02004692',
        '5UG' => 'E02004692',
        '5UH' => 'E02004692',
        '5UJ' => 'E02004692',
        '5UL' => 'E02004692',
        '5UN' => 'E02004692',
        '5UP' => 'E02004692',
        '5UQ' => 'E02004692',
        '5UR' => 'E02004692',
        '5US' => 'E02004692',
        '5UT' => 'E02004692',
        '5UU' => 'E02004692',
        '5UW' => 'E02004692',
        '5UX' => 'E02004692',
        '5UY' => 'E02004692',
        '5WA' => 'E02004681',
        '5WB' => 'E02004692',
        '5WD' => 'E02004681',
        '5WE' => 'E02004692',
        '5WJ' => 'E02004681',
        '5WL' => 'E02004681',
        '5WW' => 'E02004681',
        '5WX' => 'E02004681',
        '5WY' => 'E02004681',
        '5WZ' => 'E02004681',
        '5XA' => 'E02004681',
        '5XB' => 'E02004681',
        '5XF' => 'E02004692',
        '5XG' => 'E02004681',
        '5XH' => 'E02004681',
        '5XJ' => 'E02004681',
        '5XL' => 'E02004681',
        '5XN' => 'E02004681',
        '5XP' => 'E02004681',
        '5XQ' => 'E02004681',
        '5XR' => 'E02004681',
        '5XS' => 'E02004681',
        '5XT' => 'E02004692',
        '5XU' => 'E02004681',
        '5XW' => 'E02004681',
        '5XX' => 'E02004692',
        '5XY' => 'E02004681',
        '5XZ' => 'E02004692',
        '5YA' => 'E02004692',
        '5YB' => 'E02004692',
        '5YD' => 'E02004692',
        '5YE' => 'E02004692',
        '5YF' => 'E02004681',
        '5YG' => 'E02004692',
        '5YH' => 'E02004681',
        '5YJ' => 'E02004692',
        '5YL' => 'E02004692',
        '5YN' => 'E02004681',
        '5YP' => 'E02004692',
        '5YQ' => 'E02004692',
        '5YR' => 'E02004681',
        '5YS' => 'E02004681',
        '5YT' => 'E02004692',
        '5YU' => 'E02004692',
        '5YW' => 'E02004681',
        '5YX' => 'E02004692',
        '5YY' => 'E02004681',
        '5YZ' => 'E02004689',
        '5ZH' => 'E02004681',
        '5ZJ' => 'E02004681',
        '5ZL' => 'E02004681',
        '5ZN' => 'E02004681',
        '5ZQ' => 'E02004681',
        '5ZR' => 'E02004681',
        '5ZS' => 'E02004681',
        '5ZX' => 'E02004681',
        '6AA' => 'E02004688',
        '6AB' => 'E02004688',
        '6AD' => 'E02004688',
        '6AE' => 'E02004688',
        '6AF' => 'E02004688',
        '6AG' => 'E02004688',
        '6AH' => 'E02004688',
        '6AJ' => 'E02004688',
        '6AL' => 'E02004688',
        '6AN' => 'E02004688',
        '6AP' => 'E02004688',
        '6AQ' => 'E02004688',
        '6AR' => 'E02004688',
        '6AS' => 'E02004688',
        '6AT' => 'E02004688',
        '6AU' => 'E02004688',
        '6AW' => 'E02004688',
        '6AX' => 'E02004688',
        '6AY' => 'E02004688',
        '6AZ' => 'E02004688',
        '6BA' => 'E02004688',
        '6BB' => 'E02004688',
        '6BD' => 'E02004688',
        '6BE' => 'E02004688',
        '6BF' => 'E02004687',
        '6BG' => 'E02004688',
        '6BH' => 'E02004688',
        '6BJ' => 'E02004688',
        '6BL' => 'E02004688',
        '6BN' => 'E02004688',
        '6BQ' => 'E02004688',
        '6BS' => 'E02004688',
        '6BW' => 'E02004688',
        '6BZ' => 'E02004688',
        '6DA' => 'E02004688',
        '6DB' => 'E02004688',
        '6DD' => 'E02004688',
        '6DE' => 'E02004688',
        '6DF' => 'E02004688',
        '6DG' => 'E02004688',
        '6DH' => 'E02004688',
        '6DJ' => 'E02004688',
        '6DL' => 'E02004688',
        '6DN' => 'E02004688',
        '6DP' => 'E02004688',
        '6DQ' => 'E02004688',
        '6DR' => 'E02004688',
        '6DS' => 'E02004688',
        '6DT' => 'E02004688',
        '6DU' => 'E02004688',
        '6DW' => 'E02004688',
        '6DX' => 'E02004688',
        '6DY' => 'E02004688',
        '6DZ' => 'E02004688',
        '6EA' => 'E02004688',
        '6EB' => 'E02004688',
        '6ED' => 'E02004688',
        '6EE' => 'E02004688',
        '6EF' => 'E02004688',
        '6EG' => 'E02004688',
        '6EH' => 'E02004688',
        '6EJ' => 'E02004688',
        '6EL' => 'E02004681',
        '6EN' => 'E02004681',
        '6EP' => 'E02004688',
        '6EQ' => 'E02004688',
        '6ER' => 'E02004688',
        '6ES' => 'E02004688',
        '6ET' => 'E02004688',
        '6EU' => 'E02004688',
        '6EW' => 'E02004688',
        '6EX' => 'E02004688',
        '6EY' => 'E02004688',
        '6EZ' => 'E02004688',
        '6HA' => 'E02004688',
        '6HB' => 'E02004688',
        '6HD' => 'E02004688',
        '6HE' => 'E02004688',
        '6HF' => 'E02004688',
        '6HG' => 'E02004688',
        '6HH' => 'E02004688',
        '6HJ' => 'E02004688',
        '6HL' => 'E02004688',
        '6HN' => 'E02004688',
        '6HP' => 'E02004690',
        '6HQ' => 'E02004688',
        '6HR' => 'E02004688',
        '6HS' => 'E02004690',
        '6HT' => 'E02004688',
        '6HU' => 'E02004688',
        '6HW' => 'E02004688',
        '6HX' => 'E02004688',
        '6HY' => 'E02004688',
        '6HZ' => 'E02004688',
        '6JA' => 'E02004688',
        '6JB' => 'E02004688',
        '6JD' => 'E02004688',
        '6JE' => 'E02004688',
        '6JF' => 'E02004688',
        '6JG' => 'E02004688',
        '6JH' => 'E02004688',
        '6JJ' => 'E02004688',
        '6JL' => 'E02004692',
        '6JN' => 'E02004688',
        '6JP' => 'E02004688',
        '6JQ' => 'E02004688',
        '6JR' => 'E02004692',
        '6JS' => 'E02004688',
        '6JT' => 'E02004688',
        '6JU' => 'E02004688',
        '6JW' => 'E02004688',
        '6JX' => 'E02004692',
        '6JY' => 'E02004692',
        '6LA' => 'E02004692',
        '6LB' => 'E02004692',
        '6LD' => 'E02004688',
        '6LE' => 'E02004688',
        '6LF' => 'E02004688',
        '6LG' => 'E02004688',
        '6LH' => 'E02004692',
        '6LJ' => 'E02004692',
        '6LL' => 'E02004692',
        '6LN' => 'E02004692',
        '6LP' => 'E02004688',
        '6LQ' => 'E02004688',
        '6LR' => 'E02004692',
        '6LS' => 'E02004692',
        '6LT' => 'E02004692',
        '6LU' => 'E02004692',
        '6LW' => 'E02004692',
        '6LX' => 'E02004692',
        '6LY' => 'E02004692',
        '6LZ' => 'E02004692',
        '6NA' => 'E02004692',
        '6NB' => 'E02004692',
        '6ND' => 'E02004692',
        '6NE' => 'E02004688',
        '6NG' => 'E02004687',
        '6NH' => 'E02004692',
        '6NJ' => 'E02004688',
        '6NL' => 'E02004688',
        '6NN' => 'E02004688',
        '6NP' => 'E02004688',
        '6NQ' => 'E02004687',
        '6NR' => 'E02004688',
        '6NS' => 'E02004688',
        '6NT' => 'E02004688',
        '6NU' => 'E02004688',
        '6NW' => 'E02004688',
        '6NX' => 'E02004688',
        '6NY' => 'E02004688',
        '6NZ' => 'E02004688',
        '6PA' => 'E02004688',
        '6PB' => 'E02004688',
        '6PD' => 'E02004688',
        '6PE' => 'E02004688',
        '6PF' => 'E02004688',
        '6PG' => 'E02004688',
        '6PH' => 'E02004688',
        '6PJ' => 'E02004688',
        '6PL' => 'E02004688',
        '6PN' => 'E02004688',
        '6PP' => 'E02004688',
        '6PQ' => 'E02004688',
        '6PR' => 'E02004688',
        '6PS' => 'E02004688',
        '6PT' => 'E02004688',
        '6PU' => 'E02004688',
        '6PW' => 'E02004688',
        '6PX' => 'E02004688',
        '6PY' => 'E02004688',
        '6PZ' => 'E02004688',
        '6QA' => 'E02004688',
        '6QB' => 'E02004688',
        '6QD' => 'E02004688',
        '6QE' => 'E02004688',
        '6QF' => 'E02004688',
        '6QG' => 'E02004688',
        '6QH' => 'E02004688',
        '6QJ' => 'E02004688',
        '6QL' => 'E02004688',
        '6QN' => 'E02004688',
        '6QP' => 'E02004688',
        '6QQ' => 'E02004688',
        '6QR' => 'E02004688',
        '6QS' => 'E02004688',
        '6QT' => 'E02004688',
        '6QU' => 'E02004688',
        '6QW' => 'E02004688',
        '6QX' => 'E02004688',
        '6QY' => 'E02004688',
        '6QZ' => 'E02004688',
        '6RA' => 'E02004683',
        '6RB' => 'E02004683',
        '6RD' => 'E02004681',
        '6RE' => 'E02004688',
        '6RF' => 'E02004688',
        '6RG' => 'E02004688',
        '6RH' => 'E02004688',
        '6RJ' => 'E02004688',
        '6RL' => 'E02004688',
        '6RN' => 'E02004688',
        '6RP' => 'E02004688',
        '6RQ' => 'E02004688',
        '6RR' => 'E02004688',
        '6RS' => 'E02004688',
        '6RT' => 'E02004688',
        '6RU' => 'E02004688',
        '6RW' => 'E02004688',
        '6RX' => 'E02004688',
        '6RY' => 'E02004688',
        '6RZ' => 'E02004688',
        '6SA' => 'E02004688',
        '6SB' => 'E02004688',
        '6SD' => 'E02004687',
        '6SE' => 'E02004687',
        '6SF' => 'E02004687',
        '6SG' => 'E02004687',
        '6SH' => 'E02004687',
        '6SJ' => 'E02004687',
        '6SL' => 'E02004687',
        '6SN' => 'E02004687',
        '6SP' => 'E02004687',
        '6SQ' => 'E02004687',
        '6SR' => 'E02004688',
        '6ST' => 'E02004687',
        '6SU' => 'E02004687',
        '6SW' => 'E02004687',
        '6SX' => 'E02004687',
        '6SY' => 'E02004688',
        '6SZ' => 'E02004688',
        '6TA' => 'E02004688',
        '6TB' => 'E02004688',
        '6TD' => 'E02004688',
        '6TE' => 'E02004688',
        '6TF' => 'E02004688',
        '6TG' => 'E02004688',
        '6TH' => 'E02004688',
        '6TJ' => 'E02004688',
        '6TL' => 'E02004688',
        '6TN' => 'E02004688',
        '6TP' => 'E02004688',
        '6TQ' => 'E02004688',
        '6TR' => 'E02004688',
        '6TS' => 'E02004688',
        '6TT' => 'E02004688',
        '6TU' => 'E02004688',
        '6TW' => 'E02004688',
        '6TX' => 'E02004688',
        '6TY' => 'E02004688',
        '6TZ' => 'E02004687',
        '6UA' => 'E02004688',
        '6UB' => 'E02004688',
        '6UD' => 'E02004688',
        '6UE' => 'E02004687',
        '6UF' => 'E02004687',
        '6UG' => 'E02004687',
        '6UH' => 'E02004688',
        '6UJ' => 'E02004687',
        '6UL' => 'E02004687',
        '6UN' => 'E02004687',
        '6UP' => 'E02004688',
        '6UQ' => 'E02004687',
        '6US' => 'E02004688',
        '6UT' => 'E02004688',
        '6UU' => 'E02004688',
        '6UW' => 'E02004687',
        '6WA' => 'E02004681',
        '6WB' => 'E02004681',
        '6WD' => 'E02004687',
        '6WE' => 'E02004681',
        '6WZ' => 'E02004681',
        '6XA' => 'E02004687',
        '6XB' => 'E02004687',
        '6XD' => 'E02004688',
        '6XE' => 'E02004681',
        '6XG' => 'E02004681',
        '6XP' => 'E02004681',
        '6XS' => 'E02004681',
        '6XT' => 'E02004681',
        '6XU' => 'E02004681',
        '6XW' => 'E02004681',
        '6XX' => 'E02004688',
        '6XY' => 'E02004688',
        '6XZ' => 'E02004688',
        '6YA' => 'E02004688',
        '6YB' => 'E02004687',
        '6YD' => 'E02004688',
        '6YE' => 'E02004688',
        '6YF' => 'E02004687',
        '6YG' => 'E02004681',
        '6YH' => 'E02004688',
        '6YJ' => 'E02004681',
        '6YL' => 'E02004688',
        '6YN' => 'E02004688',
        '6YP' => 'E02004688',
        '6YQ' => 'E02004681',
        '6YR' => 'E02004687',
        '6YS' => 'E02004688',
        '6YT' => 'E02004688',
        '6YU' => 'E02004687',
        '6YW' => 'E02004681',
        '6YX' => 'E02004688',
        '6YY' => 'E02004681',
        '6YZ' => 'E02004687',
        '6ZN' => 'E02004681',
        '6ZQ' => 'E02004681',
        '6ZX' => 'E02004681',
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
