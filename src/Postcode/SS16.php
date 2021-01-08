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
final class SS16
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '4AA' => 'E02004442',
        '4AB' => 'E02004443',
        '4AD' => 'E02004442',
        '4AE' => 'E02004443',
        '4AF' => 'E02004443',
        '4AG' => 'E02004443',
        '4AH' => 'E02004443',
        '4AJ' => 'E02004443',
        '4AL' => 'E02004443',
        '4AN' => 'E02004443',
        '4AP' => 'E02004443',
        '4AQ' => 'E02004443',
        '4AR' => 'E02004443',
        '4AS' => 'E02004443',
        '4AT' => 'E02004443',
        '4AU' => 'E02004443',
        '4AW' => 'E02004443',
        '4AX' => 'E02004443',
        '4AY' => 'E02004443',
        '4AZ' => 'E02004443',
        '4BA' => 'E02004443',
        '4BB' => 'E02004443',
        '4BD' => 'E02004443',
        '4BE' => 'E02004443',
        '4BF' => 'E02004442',
        '4BG' => 'E02004443',
        '4BH' => 'E02004442',
        '4BJ' => 'E02004442',
        '4BL' => 'E02004442',
        '4BN' => 'E02004442',
        '4BP' => 'E02004442',
        '4BQ' => 'E02004442',
        '4BS' => 'E02004442',
        '4BT' => 'E02004442',
        '4BU' => 'E02004442',
        '4BW' => 'E02004442',
        '4BX' => 'E02004442',
        '4BY' => 'E02004442',
        '4BZ' => 'E02004442',
        '4DA' => 'E02004442',
        '4DB' => 'E02004442',
        '4DD' => 'E02004442',
        '4DE' => 'E02004442',
        '4DF' => 'E02004442',
        '4DG' => 'E02004442',
        '4DH' => 'E02004442',
        '4DJ' => 'E02004442',
        '4DL' => 'E02004442',
        '4DN' => 'E02004442',
        '4DP' => 'E02004442',
        '4DQ' => 'E02004442',
        '4DR' => 'E02004442',
        '4DS' => 'E02004442',
        '4DT' => 'E02004442',
        '4DU' => 'E02004442',
        '4DW' => 'E02004442',
        '4DX' => 'E02004442',
        '4DY' => 'E02004442',
        '4DZ' => 'E02004442',
        '4EA' => 'E02004442',
        '4EB' => 'E02004442',
        '4ED' => 'E02004442',
        '4EE' => 'E02004442',
        '4EF' => 'E02004442',
        '4EG' => 'E02004442',
        '4EH' => 'E02004442',
        '4EJ' => 'E02004442',
        '4EL' => 'E02004442',
        '4EN' => 'E02004442',
        '4EP' => 'E02004442',
        '4EQ' => 'E02004442',
        '4ER' => 'E02004442',
        '4ES' => 'E02004442',
        '4ET' => 'E02004442',
        '4EU' => 'E02004442',
        '4EW' => 'E02004442',
        '4EX' => 'E02004442',
        '4EY' => 'E02004438',
        '4EZ' => 'E02004442',
        '4FB' => 'E02004442',
        '4FD' => 'E02004438',
        '4FE' => 'E02004442',
        '4FF' => 'E02004442',
        '4FG' => 'E02004438',
        '4FH' => 'E02004442',
        '4FJ' => 'E02004445',
        '4FN' => 'E02004442',
        '4FR' => 'E02004442',
        '4GB' => 'E02004442',
        '4GG' => 'E02004438',
        '4GH' => 'E02004438',
        '4GL' => 'E02004442',
        '4HA' => 'E02004442',
        '4HB' => 'E02004442',
        '4HD' => 'E02004442',
        '4HE' => 'E02004442',
        '4HF' => 'E02004442',
        '4HH' => 'E02004442',
        '4HJ' => 'E02004442',
        '4HL' => 'E02004442',
        '4HN' => 'E02004442',
        '4HP' => 'E02004442',
        '4HQ' => 'E02004442',
        '4HR' => 'E02004442',
        '4HS' => 'E02004442',
        '4HT' => 'E02004442',
        '4HU' => 'E02004442',
        '4HW' => 'E02004442',
        '4HX' => 'E02004442',
        '4HY' => 'E02004442',
        '4HZ' => 'E02004442',
        '4JA' => 'E02004442',
        '4JB' => 'E02004442',
        '4JD' => 'E02004442',
        '4JE' => 'E02004442',
        '4JF' => 'E02004442',
        '4JG' => 'E02004442',
        '4JH' => 'E02004442',
        '4JJ' => 'E02004442',
        '4JL' => 'E02004442',
        '4JN' => 'E02004442',
        '4JP' => 'E02004442',
        '4JQ' => 'E02004442',
        '4JS' => 'E02004445',
        '4JW' => 'E02004442',
        '4JX' => 'E02004442',
        '4JZ' => 'E02004445',
        '4LA' => 'E02004445',
        '4LB' => 'E02004442',
        '4LD' => 'E02004442',
        '4LE' => 'E02004442',
        '4LF' => 'E02004442',
        '4LG' => 'E02004442',
        '4LH' => 'E02004442',
        '4LJ' => 'E02004445',
        '4LL' => 'E02004445',
        '4LN' => 'E02004445',
        '4LP' => 'E02004445',
        '4LQ' => 'E02004445',
        '4LR' => 'E02004445',
        '4LS' => 'E02004445',
        '4LT' => 'E02004445',
        '4LU' => 'E02004445',
        '4LW' => 'E02004445',
        '4LX' => 'E02004445',
        '4LY' => 'E02004445',
        '4LZ' => 'E02004445',
        '4NA' => 'E02004445',
        '4NB' => 'E02004445',
        '4ND' => 'E02004442',
        '4NE' => 'E02004442',
        '4NF' => 'E02004442',
        '4NG' => 'E02004442',
        '4NH' => 'E02004442',
        '4NJ' => 'E02004442',
        '4NL' => 'E02004442',
        '4NN' => 'E02004442',
        '4NR' => 'E02004442',
        '4NS' => 'E02004442',
        '4NT' => 'E02004442',
        '4NU' => 'E02004442',
        '4NW' => 'E02004442',
        '4NX' => 'E02004442',
        '4NY' => 'E02004442',
        '4NZ' => 'E02004442',
        '4PA' => 'E02004442',
        '4PB' => 'E02004442',
        '4PD' => 'E02004442',
        '4PE' => 'E02004442',
        '4PF' => 'E02004442',
        '4PG' => 'E02004442',
        '4PH' => 'E02004442',
        '4PJ' => 'E02004442',
        '4PL' => 'E02004442',
        '4PN' => 'E02004442',
        '4PP' => 'E02004442',
        '4PQ' => 'E02004442',
        '4PR' => 'E02004443',
        '4PU' => 'E02004442',
        '4PW' => 'E02004442',
        '4PX' => 'E02004443',
        '4PY' => 'E02004445',
        '4PZ' => 'E02004443',
        '4QA' => 'E02004443',
        '4QB' => 'E02004445',
        '4QD' => 'E02004445',
        '4QE' => 'E02004445',
        '4QF' => 'E02004445',
        '4QG' => 'E02004445',
        '4QH' => 'E02004445',
        '4QJ' => 'E02004445',
        '4QL' => 'E02004445',
        '4QN' => 'E02004445',
        '4QP' => 'E02004445',
        '4QQ' => 'E02004445',
        '4QR' => 'E02004445',
        '4QS' => 'E02004445',
        '4QT' => 'E02004445',
        '4QU' => 'E02004445',
        '4QW' => 'E02004445',
        '4QX' => 'E02004445',
        '4QZ' => 'E02004445',
        '4RD' => 'E02004445',
        '4RE' => 'E02004445',
        '4RF' => 'E02004445',
        '4RG' => 'E02004442',
        '4RH' => 'E02004445',
        '4RJ' => 'E02004445',
        '4RL' => 'E02004445',
        '4RN' => 'E02004445',
        '4RP' => 'E02004442',
        '4RQ' => 'E02004445',
        '4RR' => 'E02004445',
        '4RS' => 'E02004445',
        '4RT' => 'E02004445',
        '4RU' => 'E02004445',
        '4RX' => 'E02004445',
        '4RY' => 'E02004445',
        '4RZ' => 'E02004445',
        '4SA' => 'E02004445',
        '4SB' => 'E02004445',
        '4SD' => 'E02004445',
        '4SG' => 'E02004445',
        '4SH' => 'E02004445',
        '4SJ' => 'E02004445',
        '4SL' => 'E02004445',
        '4SN' => 'E02004445',
        '4SP' => 'E02004445',
        '4SQ' => 'E02004445',
        '4SS' => 'E02004445',
        '4ST' => 'E02004445',
        '4SU' => 'E02004445',
        '4SW' => 'E02004445',
        '4SX' => 'E02004445',
        '4SY' => 'E02004445',
        '4SZ' => 'E02004445',
        '4TA' => 'E02004445',
        '4TB' => 'E02004445',
        '4TD' => 'E02004445',
        '4TE' => 'E02004445',
        '4TF' => 'E02004445',
        '4TG' => 'E02004445',
        '4TH' => 'E02004445',
        '4TJ' => 'E02004445',
        '4TL' => 'E02004445',
        '4TN' => 'E02004445',
        '4TP' => 'E02004445',
        '4TQ' => 'E02004445',
        '4TR' => 'E02004445',
        '4TS' => 'E02004445',
        '4TT' => 'E02004445',
        '4TU' => 'E02004445',
        '4TW' => 'E02004445',
        '4TX' => 'E02004445',
        '4TY' => 'E02004445',
        '4TZ' => 'E02004445',
        '4UA' => 'E02004445',
        '4UB' => 'E02004445',
        '4UD' => 'E02004445',
        '4UE' => 'E02004445',
        '4UF' => 'E02004445',
        '4UG' => 'E02004445',
        '4UH' => 'E02004445',
        '4UJ' => 'E02004445',
        '4UL' => 'E02004445',
        '4UN' => 'E02004445',
        '4UT' => 'E02004445',
        '4UU' => 'E02004445',
        '4UW' => 'E02004445',
        '4UX' => 'E02004445',
        '4UY' => 'E02004445',
        '4UZ' => 'E02004445',
        '4WA' => 'E02004438',
        '4WB' => 'E02004445',
        '4WE' => 'E02004445',
        '4WF' => 'E02004445',
        '4WJ' => 'E02004445',
        '4XA' => 'E02004445',
        '4XB' => 'E02004445',
        '4XD' => 'E02004445',
        '4XE' => 'E02004445',
        '4XF' => 'E02004442',
        '4XJ' => 'E02004445',
        '4XP' => 'E02004442',
        '4XQ' => 'E02004442',
        '4XR' => 'E02004442',
        '4XS' => 'E02004442',
        '4XT' => 'E02004442',
        '4XU' => 'E02004445',
        '4XW' => 'E02004442',
        '4XX' => 'E02004442',
        '4XY' => 'E02004442',
        '4XZ' => 'E02004438',
        '4YA' => 'E02004438',
        '4YQ' => 'E02004438',
        '4YT' => 'E02004438',
        '4YY' => 'E02004442',
        '4YZ' => 'E02004438',
        '4ZQ' => 'E02004438',
        '5AA' => 'E02004443',
        '5AB' => 'E02004443',
        '5AD' => 'E02004443',
        '5AE' => 'E02004443',
        '5AF' => 'E02004443',
        '5AG' => 'E02004443',
        '5AH' => 'E02004443',
        '5AJ' => 'E02004443',
        '5AL' => 'E02004443',
        '5AN' => 'E02004443',
        '5AP' => 'E02004443',
        '5AQ' => 'E02004443',
        '5AR' => 'E02004443',
        '5AS' => 'E02004440',
        '5AT' => 'E02004443',
        '5AU' => 'E02004443',
        '5AW' => 'E02004443',
        '5AX' => 'E02004443',
        '5AY' => 'E02004443',
        '5AZ' => 'E02004443',
        '5BA' => 'E02004443',
        '5BB' => 'E02004443',
        '5BD' => 'E02004443',
        '5BE' => 'E02004443',
        '5BF' => 'E02004443',
        '5BG' => 'E02004443',
        '5BH' => 'E02004443',
        '5BJ' => 'E02004443',
        '5BL' => 'E02004443',
        '5BN' => 'E02004443',
        '5BP' => 'E02004443',
        '5BQ' => 'E02004443',
        '5BR' => 'E02004443',
        '5BS' => 'E02004443',
        '5BT' => 'E02004443',
        '5BU' => 'E02004443',
        '5BW' => 'E02004443',
        '5BX' => 'E02004438',
        '5BY' => 'E02004443',
        '5BZ' => 'E02004438',
        '5DA' => 'E02004443',
        '5DB' => 'E02004443',
        '5DD' => 'E02004443',
        '5DE' => 'E02004443',
        '5DF' => 'E02004443',
        '5DG' => 'E02004443',
        '5DH' => 'E02004443',
        '5DJ' => 'E02004443',
        '5DL' => 'E02004443',
        '5DN' => 'E02004443',
        '5DP' => 'E02004443',
        '5DQ' => 'E02004443',
        '5DR' => 'E02004443',
        '5DS' => 'E02004443',
        '5DT' => 'E02004443',
        '5DU' => 'E02004443',
        '5DW' => 'E02004443',
        '5DX' => 'E02004443',
        '5DY' => 'E02004443',
        '5DZ' => 'E02004443',
        '5EA' => 'E02004443',
        '5EB' => 'E02004443',
        '5ED' => 'E02004443',
        '5EE' => 'E02004443',
        '5EF' => 'E02004443',
        '5EG' => 'E02004443',
        '5EH' => 'E02004443',
        '5EJ' => 'E02004443',
        '5EL' => 'E02004443',
        '5EN' => 'E02004443',
        '5EP' => 'E02004443',
        '5EQ' => 'E02004443',
        '5ER' => 'E02004443',
        '5ES' => 'E02004443',
        '5ET' => 'E02004443',
        '5EU' => 'E02004443',
        '5EW' => 'E02004443',
        '5EX' => 'E02004443',
        '5EY' => 'E02004443',
        '5EZ' => 'E02004443',
        '5FA' => 'E02004443',
        '5FB' => 'E02004443',
        '5FD' => 'E02004443',
        '5FE' => 'E02004443',
        '5FF' => 'E02004443',
        '5FG' => 'E02004438',
        '5FH' => 'E02004443',
        '5FJ' => 'E02004443',
        '5FN' => 'E02004438',
        '5FP' => 'E02004444',
        '5FQ' => 'E02004438',
        '5FR' => 'E02004443',
        '5FS' => 'E02004443',
        '5FT' => 'E02004443',
        '5FU' => 'E02004443',
        '5FW' => 'E02004443',
        '5FX' => 'E02004438',
        '5FY' => 'E02004443',
        '5FZ' => 'E02004438',
        '5GA' => 'E02004438',
        '5GB' => 'E02004443',
        '5GD' => 'E02004443',
        '5GE' => 'E02004443',
        '5GF' => 'E02004443',
        '5GG' => 'E02004443',
        '5GH' => 'E02004443',
        '5GJ' => 'E02004443',
        '5GL' => 'E02004443',
        '5GN' => 'E02004443',
        '5GP' => 'E02004443',
        '5GQ' => 'E02004443',
        '5GR' => 'E02004438',
        '5GS' => 'E02004443',
        '5GT' => 'E02004443',
        '5GU' => 'E02004443',
        '5GW' => 'E02004443',
        '5GX' => 'E02004443',
        '5GY' => 'E02004443',
        '5GZ' => 'E02004438',
        '5HA' => 'E02004443',
        '5HB' => 'E02004443',
        '5HD' => 'E02004443',
        '5HE' => 'E02004443',
        '5HF' => 'E02004443',
        '5HG' => 'E02004443',
        '5HH' => 'E02004438',
        '5HJ' => 'E02004443',
        '5HL' => 'E02004443',
        '5HN' => 'E02004443',
        '5HP' => 'E02004443',
        '5HQ' => 'E02004443',
        '5HR' => 'E02004443',
        '5HS' => 'E02004443',
        '5HT' => 'E02004443',
        '5HU' => 'E02004443',
        '5HW' => 'E02004443',
        '5HX' => 'E02004443',
        '5HY' => 'E02004443',
        '5HZ' => 'E02004443',
        '5JA' => 'E02004443',
        '5JB' => 'E02004443',
        '5JD' => 'E02004443',
        '5JE' => 'E02004445',
        '5JF' => 'E02004443',
        '5JG' => 'E02004443',
        '5JH' => 'E02004443',
        '5JJ' => 'E02004443',
        '5JL' => 'E02004443',
        '5JN' => 'E02004443',
        '5JP' => 'E02004443',
        '5JQ' => 'E02004443',
        '5JR' => 'E02004443',
        '5JS' => 'E02004443',
        '5JT' => 'E02004443',
        '5JU' => 'E02004443',
        '5JW' => 'E02004443',
        '5JX' => 'E02003296',
        '5JY' => 'E02003296',
        '5JZ' => 'E02004443',
        '5LA' => 'E02003296',
        '5LB' => 'E02003296',
        '5LD' => 'E02004443',
        '5LE' => 'E02004443',
        '5LF' => 'E02004443',
        '5LG' => 'E02004443',
        '5LH' => 'E02004444',
        '5LJ' => 'E02004444',
        '5LL' => 'E02004444',
        '5LN' => 'E02004444',
        '5LP' => 'E02004444',
        '5LQ' => 'E02004443',
        '5LR' => 'E02004444',
        '5LS' => 'E02004443',
        '5LT' => 'E02004444',
        '5LU' => 'E02004443',
        '5LW' => 'E02004443',
        '5LX' => 'E02004444',
        '5LY' => 'E02004444',
        '5LZ' => 'E02004444',
        '5NA' => 'E02004443',
        '5NB' => 'E02004444',
        '5ND' => 'E02004444',
        '5NE' => 'E02004444',
        '5NF' => 'E02004444',
        '5NG' => 'E02004444',
        '5NH' => 'E02004443',
        '5NJ' => 'E02004443',
        '5NL' => 'E02004443',
        '5NN' => 'E02004443',
        '5NP' => 'E02004443',
        '5NR' => 'E02004443',
        '5NS' => 'E02004443',
        '5NT' => 'E02004444',
        '5NU' => 'E02004444',
        '5NX' => 'E02004444',
        '5NZ' => 'E02004444',
        '5PA' => 'E02004444',
        '5PB' => 'E02004444',
        '5PD' => 'E02004443',
        '5PE' => 'E02004444',
        '5PF' => 'E02004444',
        '5PH' => 'E02004444',
        '5PJ' => 'E02004444',
        '5PN' => 'E02004444',
        '5PU' => 'E02004444',
        '5PW' => 'E02004444',
        '5PX' => 'E02004444',
        '5QB' => 'E02004443',
        '5QD' => 'E02004440',
        '5QE' => 'E02004443',
        '5QF' => 'E02004440',
        '5QG' => 'E02004440',
        '5QJ' => 'E02004440',
        '5QL' => 'E02004440',
        '5QN' => 'E02004440',
        '5QP' => 'E02004440',
        '5QQ' => 'E02004440',
        '5QR' => 'E02004440',
        '5QT' => 'E02004440',
        '5QU' => 'E02004440',
        '5QW' => 'E02004440',
        '5QX' => 'E02004440',
        '5RA' => 'E02004440',
        '5RB' => 'E02004440',
        '5RD' => 'E02004440',
        '5RE' => 'E02004440',
        '5RF' => 'E02004443',
        '5RG' => 'E02004443',
        '5RH' => 'E02004440',
        '5RJ' => 'E02004443',
        '5RL' => 'E02004443',
        '5RN' => 'E02004443',
        '5RP' => 'E02004440',
        '5RQ' => 'E02004440',
        '5RR' => 'E02004440',
        '5RS' => 'E02004440',
        '5RT' => 'E02004438',
        '5RU' => 'E02004443',
        '5RW' => 'E02004443',
        '5RX' => 'E02004443',
        '5RY' => 'E02004443',
        '5RZ' => 'E02004443',
        '5SA' => 'E02004443',
        '5SB' => 'E02004443',
        '5SD' => 'E02004443',
        '5SE' => 'E02004443',
        '5SF' => 'E02004443',
        '5SG' => 'E02004443',
        '5SH' => 'E02004443',
        '5SJ' => 'E02004443',
        '5SL' => 'E02004443',
        '5SN' => 'E02004443',
        '5SP' => 'E02004443',
        '5SQ' => 'E02004443',
        '5SR' => 'E02004443',
        '5SS' => 'E02004440',
        '5ST' => 'E02004443',
        '5SU' => 'E02004443',
        '5SW' => 'E02004443',
        '5SX' => 'E02004438',
        '5SY' => 'E02004443',
        '5TA' => 'E02004443',
        '5TB' => 'E02004440',
        '5TD' => 'E02004443',
        '5TE' => 'E02004443',
        '5TF' => 'E02004440',
        '5TG' => 'E02004443',
        '5TH' => 'E02004443',
        '5TJ' => 'E02004443',
        '5TL' => 'E02004443',
        '5TN' => 'E02004443',
        '5TP' => 'E02004443',
        '5TQ' => 'E02004443',
        '5TR' => 'E02004443',
        '5TS' => 'E02004443',
        '5TT' => 'E02004443',
        '5TU' => 'E02004443',
        '5TW' => 'E02004443',
        '5TX' => 'E02004443',
        '5TY' => 'E02004443',
        '5TZ' => 'E02004443',
        '5UA' => 'E02004443',
        '5UB' => 'E02004443',
        '5UD' => 'E02004443',
        '5UE' => 'E02004444',
        '5UF' => 'E02004444',
        '5UG' => 'E02004444',
        '5UH' => 'E02004440',
        '5UN' => 'E02004443',
        '5UP' => 'E02004443',
        '5UQ' => 'E02004444',
        '5UR' => 'E02004443',
        '5UT' => 'E02004443',
        '5UU' => 'E02004443',
        '5UW' => 'E02004443',
        '5UX' => 'E02004443',
        '5UY' => 'E02004443',
        '5UZ' => 'E02004443',
        '5WA' => 'E02004443',
        '5WB' => 'E02004438',
        '5WG' => 'E02004438',
        '5XA' => 'E02004444',
        '5XB' => 'E02004444',
        '5XD' => 'E02004444',
        '5XX' => 'E02004443',
        '5XY' => 'E02004443',
        '5XZ' => 'E02004443',
        '5YJ' => 'E02004444',
        '5YR' => 'E02004443',
        '5YZ' => 'E02004444',
        '5ZW' => 'E02004438',
        '6AA' => 'E02004444',
        '6AB' => 'E02004444',
        '6AD' => 'E02004444',
        '6AE' => 'E02004444',
        '6AF' => 'E02004444',
        '6AG' => 'E02004444',
        '6AH' => 'E02004444',
        '6AJ' => 'E02004444',
        '6AL' => 'E02004444',
        '6AN' => 'E02004444',
        '6AP' => 'E02004444',
        '6AQ' => 'E02004444',
        '6AR' => 'E02004444',
        '6AS' => 'E02004444',
        '6AT' => 'E02004444',
        '6AU' => 'E02004444',
        '6AW' => 'E02004444',
        '6AX' => 'E02004444',
        '6AY' => 'E02004444',
        '6AZ' => 'E02004444',
        '6BA' => 'E02004444',
        '6BB' => 'E02004444',
        '6BD' => 'E02004444',
        '6BE' => 'E02004438',
        '6BF' => 'E02004444',
        '6BG' => 'E02004444',
        '6BH' => 'E02004444',
        '6BJ' => 'E02004444',
        '6BL' => 'E02004444',
        '6BN' => 'E02004444',
        '6BP' => 'E02004444',
        '6BQ' => 'E02004444',
        '6BS' => 'E02004444',
        '6BT' => 'E02004444',
        '6BU' => 'E02004444',
        '6BW' => 'E02004444',
        '6BX' => 'E02004444',
        '6BY' => 'E02004444',
        '6BZ' => 'E02004444',
        '6DA' => 'E02004444',
        '6DB' => 'E02004444',
        '6DD' => 'E02004444',
        '6DE' => 'E02004444',
        '6DF' => 'E02004438',
        '6DG' => 'E02004438',
        '6DH' => 'E02003299',
        '6DJ' => 'E02004444',
        '6DL' => 'E02004444',
        '6DN' => 'E02004444',
        '6DP' => 'E02004444',
        '6DQ' => 'E02004444',
        '6DR' => 'E02004444',
        '6DS' => 'E02004444',
        '6DT' => 'E02004438',
        '6DU' => 'E02004444',
        '6DW' => 'E02004444',
        '6DX' => 'E02004444',
        '6DY' => 'E02004444',
        '6DZ' => 'E02004444',
        '6EA' => 'E02004444',
        '6EB' => 'E02004444',
        '6ED' => 'E02004444',
        '6EE' => 'E02004444',
        '6EF' => 'E02004444',
        '6EG' => 'E02004444',
        '6EH' => 'E02004438',
        '6EJ' => 'E02004444',
        '6EL' => 'E02004444',
        '6EN' => 'E02004444',
        '6EP' => 'E02004444',
        '6EQ' => 'E02004444',
        '6ER' => 'E02004444',
        '6ES' => 'E02004444',
        '6ET' => 'E02004444',
        '6EU' => 'E02004444',
        '6EW' => 'E02004444',
        '6EX' => 'E02004444',
        '6EY' => 'E02004444',
        '6EZ' => 'E02004444',
        '6GA' => 'E02004444',
        '6GB' => 'E02004444',
        '6GG' => 'E02004444',
        '6GH' => 'E02004444',
        '6GJ' => 'E02004444',
        '6GR' => 'E02004438',
        '6HA' => 'E02004444',
        '6HB' => 'E02004444',
        '6HD' => 'E02004444',
        '6HE' => 'E02004444',
        '6HF' => 'E02004444',
        '6HG' => 'E02004444',
        '6HH' => 'E02004444',
        '6HJ' => 'E02004444',
        '6HL' => 'E02004444',
        '6HN' => 'E02004444',
        '6HP' => 'E02004444',
        '6HQ' => 'E02004444',
        '6HR' => 'E02004444',
        '6HS' => 'E02004444',
        '6HT' => 'E02004444',
        '6HU' => 'E02004444',
        '6HW' => 'E02004444',
        '6HX' => 'E02004444',
        '6HY' => 'E02004444',
        '6HZ' => 'E02003299',
        '6JA' => 'E02003299',
        '6JB' => 'E02003299',
        '6JD' => 'E02003299',
        '6JE' => 'E02003299',
        '6JF' => 'E02003299',
        '6JG' => 'E02003299',
        '6JJ' => 'E02004444',
        '6JQ' => 'E02004444',
        '6JS' => 'E02004444',
        '6JU' => 'E02004444',
        '6JX' => 'E02004444',
        '6JY' => 'E02004444',
        '6JZ' => 'E02004444',
        '6LA' => 'E02004444',
        '6LD' => 'E02004444',
        '6LE' => 'E02004444',
        '6LF' => 'E02004444',
        '6LG' => 'E02004444',
        '6LH' => 'E02004444',
        '6LJ' => 'E02004444',
        '6LL' => 'E02004444',
        '6LN' => 'E02004444',
        '6LP' => 'E02004444',
        '6LQ' => 'E02004444',
        '6LR' => 'E02004444',
        '6LS' => 'E02004444',
        '6LT' => 'E02004444',
        '6LU' => 'E02004444',
        '6LW' => 'E02004444',
        '6LX' => 'E02004444',
        '6LY' => 'E02004444',
        '6LZ' => 'E02004444',
        '6NA' => 'E02004444',
        '6NB' => 'E02004444',
        '6ND' => 'E02004444',
        '6NF' => 'E02004444',
        '6NG' => 'E02004444',
        '6NH' => 'E02004444',
        '6NP' => 'E02004444',
        '6NQ' => 'E02004444',
        '6NR' => 'E02004444',
        '6NS' => 'E02004444',
        '6NT' => 'E02004444',
        '6NU' => 'E02004444',
        '6NX' => 'E02004444',
        '6NY' => 'E02004444',
        '6NZ' => 'E02004444',
        '6PA' => 'E02004444',
        '6PD' => 'E02004444',
        '6PE' => 'E02004444',
        '6PG' => 'E02004444',
        '6PH' => 'E02004444',
        '6PJ' => 'E02004444',
        '6PQ' => 'E02004444',
        '6QY' => 'E02004444',
        '6QZ' => 'E02004444',
        '6RA' => 'E02004444',
        '6RB' => 'E02004444',
        '6RD' => 'E02004444',
        '6RE' => 'E02004444',
        '6RF' => 'E02004444',
        '6RG' => 'E02004444',
        '6RH' => 'E02004444',
        '6RJ' => 'E02004444',
        '6RL' => 'E02004444',
        '6RN' => 'E02004437',
        '6RP' => 'E02004444',
        '6RQ' => 'E02004444',
        '6RR' => 'E02004444',
        '6RS' => 'E02004444',
        '6RT' => 'E02004444',
        '6RU' => 'E02004444',
        '6RW' => 'E02004437',
        '6RX' => 'E02004444',
        '6RY' => 'E02004444',
        '6RZ' => 'E02004444',
        '6SA' => 'E02004444',
        '6SB' => 'E02004444',
        '6SD' => 'E02004444',
        '6SE' => 'E02004444',
        '6SF' => 'E02004444',
        '6SG' => 'E02004444',
        '6SH' => 'E02004444',
        '6SJ' => 'E02004444',
        '6SL' => 'E02004444',
        '6SN' => 'E02004444',
        '6SP' => 'E02004444',
        '6SQ' => 'E02004444',
        '6SR' => 'E02004444',
        '6SS' => 'E02004444',
        '6ST' => 'E02004444',
        '6SU' => 'E02004444',
        '6SW' => 'E02004444',
        '6SX' => 'E02004444',
        '6SY' => 'E02004444',
        '6SZ' => 'E02004444',
        '6TA' => 'E02004438',
        '6TB' => 'E02004444',
        '6TD' => 'E02004444',
        '6TE' => 'E02004444',
        '6TF' => 'E02004444',
        '6TG' => 'E02004444',
        '6TH' => 'E02004444',
        '6TJ' => 'E02004444',
        '6TL' => 'E02004444',
        '6TN' => 'E02004444',
        '6TP' => 'E02004444',
        '6TQ' => 'E02004444',
        '6TR' => 'E02004444',
        '6TS' => 'E02004444',
        '6TT' => 'E02004444',
        '6TU' => 'E02004444',
        '6TW' => 'E02004444',
        '6TX' => 'E02004444',
        '6TY' => 'E02004444',
        '6TZ' => 'E02004444',
        '6UB' => 'E02004444',
        '6UD' => 'E02004444',
        '6UE' => 'E02004444',
        '6UF' => 'E02004444',
        '6UG' => 'E02004444',
        '6UH' => 'E02004438',
        '6UJ' => 'E02004444',
        '6UL' => 'E02004444',
        '6UN' => 'E02004444',
        '6UP' => 'E02004444',
        '6UQ' => 'E02004444',
        '6UR' => 'E02004444',
        '6UT' => 'E02004444',
        '6UW' => 'E02004444',
        '6WA' => 'E02004444',
        '6WB' => 'E02004444',
        '6WE' => 'E02004444',
        '6WG' => 'E02004444',
        '6WH' => 'E02004444',
        '6WQ' => 'E02004438',
        '6WY' => 'E02004444',
        '6WZ' => 'E02004444',
        '6XA' => 'E02004438',
        '6XB' => 'E02004438',
        '6XD' => 'E02004438',
        '6XE' => 'E02004444',
        '6XF' => 'E02004444',
        '6XQ' => 'E02004438',
        '6YQ' => 'E02004438',
        '6YZ' => 'E02004438',
        '6ZQ' => 'E02004438',
        '6ZR' => 'E02004438',
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