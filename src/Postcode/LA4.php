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
final class LA4
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '4AA' => 'E02005226',
        '4AB' => 'E02005226',
        '4AD' => 'E02005226',
        '4AE' => 'E02005226',
        '4AF' => 'E02005226',
        '4AG' => 'E02005226',
        '4AH' => 'E02005226',
        '4AJ' => 'E02005226',
        '4AL' => 'E02005226',
        '4AN' => 'E02005226',
        '4AP' => 'E02005226',
        '4AQ' => 'E02005226',
        '4AR' => 'E02005226',
        '4AS' => 'E02005226',
        '4AT' => 'E02005226',
        '4AU' => 'E02005226',
        '4AW' => 'E02005226',
        '4AX' => 'E02005226',
        '4AY' => 'E02005226',
        '4AZ' => 'E02005226',
        '4BA' => 'E02005226',
        '4BB' => 'E02005226',
        '4BD' => 'E02005226',
        '4BE' => 'E02005226',
        '4BF' => 'E02005226',
        '4BG' => 'E02005228',
        '4BH' => 'E02005226',
        '4BJ' => 'E02005226',
        '4BL' => 'E02005226',
        '4BN' => 'E02005226',
        '4BP' => 'E02005226',
        '4BQ' => 'E02005226',
        '4BS' => 'E02005226',
        '4BT' => 'E02005226',
        '4BU' => 'E02005226',
        '4BW' => 'E02005226',
        '4BX' => 'E02005226',
        '4BY' => 'E02005226',
        '4BZ' => 'E02005226',
        '4DA' => 'E02005226',
        '4DB' => 'E02005226',
        '4DD' => 'E02005226',
        '4DE' => 'E02005226',
        '4DF' => 'E02005229',
        '4DG' => 'E02005229',
        '4DH' => 'E02005229',
        '4DJ' => 'E02005229',
        '4DL' => 'E02005226',
        '4DN' => 'E02005226',
        '4DP' => 'E02005226',
        '4DQ' => 'E02005229',
        '4DR' => 'E02005226',
        '4DS' => 'E02005226',
        '4DT' => 'E02005226',
        '4DU' => 'E02005226',
        '4DW' => 'E02005226',
        '4DX' => 'E02005226',
        '4DY' => 'E02005226',
        '4DZ' => 'E02005226',
        '4EA' => 'E02005226',
        '4EB' => 'E02005226',
        '4ED' => 'E02005228',
        '4EE' => 'E02005228',
        '4EF' => 'E02005228',
        '4EG' => 'E02005226',
        '4EH' => 'E02005228',
        '4EJ' => 'E02005226',
        '4EL' => 'E02005226',
        '4EN' => 'E02005226',
        '4EP' => 'E02005229',
        '4EQ' => 'E02005226',
        '4ER' => 'E02005229',
        '4ES' => 'E02005229',
        '4ET' => 'E02005229',
        '4EU' => 'E02005229',
        '4EW' => 'E02005226',
        '4EX' => 'E02005229',
        '4EY' => 'E02005229',
        '4EZ' => 'E02005229',
        '4FA' => 'E02005228',
        '4FD' => 'E02005226',
        '4FE' => 'E02005226',
        '4FG' => 'E02005230',
        '4GA' => 'E02005226',
        '4GB' => 'E02005228',
        '4GD' => 'E02005228',
        '4GE' => 'E02005228',
        '4GF' => 'E02005228',
        '4GG' => 'E02005228',
        '4GH' => 'E02005228',
        '4GJ' => 'E02005228',
        '4GL' => 'E02005229',
        '4GN' => 'E02005228',
        '4GP' => 'E02005228',
        '4GQ' => 'E02005228',
        '4GR' => 'E02005229',
        '4GS' => 'E02005226',
        '4GT' => 'E02005226',
        '4GU' => 'E02005226',
        '4GW' => 'E02005226',
        '4HA' => 'E02005229',
        '4HB' => 'E02005229',
        '4HD' => 'E02005229',
        '4HE' => 'E02005229',
        '4HF' => 'E02005229',
        '4HG' => 'E02005229',
        '4HH' => 'E02005229',
        '4HJ' => 'E02005229',
        '4HL' => 'E02005229',
        '4HP' => 'E02005229',
        '4HQ' => 'E02005229',
        '4HR' => 'E02005229',
        '4HS' => 'E02005229',
        '4HT' => 'E02005229',
        '4HU' => 'E02005229',
        '4HW' => 'E02005229',
        '4HX' => 'E02005229',
        '4HY' => 'E02005229',
        '4HZ' => 'E02005229',
        '4JA' => 'E02005226',
        '4JB' => 'E02005226',
        '4JD' => 'E02005226',
        '4JE' => 'E02005229',
        '4JF' => 'E02005226',
        '4JG' => 'E02005226',
        '4JH' => 'E02005229',
        '4JJ' => 'E02005226',
        '4JL' => 'E02005226',
        '4JN' => 'E02005226',
        '4JP' => 'E02005226',
        '4JQ' => 'E02005226',
        '4JR' => 'E02005226',
        '4JS' => 'E02005229',
        '4JU' => 'E02005228',
        '4JW' => 'E02005226',
        '4JX' => 'E02005228',
        '4JY' => 'E02005226',
        '4JZ' => 'E02005228',
        '4LA' => 'E02005228',
        '4LB' => 'E02005226',
        '4LD' => 'E02005226',
        '4LE' => 'E02005228',
        '4LF' => 'E02005228',
        '4LG' => 'E02005228',
        '4LH' => 'E02005228',
        '4LJ' => 'E02005228',
        '4LL' => 'E02005228',
        '4LN' => 'E02005228',
        '4LP' => 'E02005228',
        '4LQ' => 'E02005226',
        '4LR' => 'E02005228',
        '4LS' => 'E02005228',
        '4LT' => 'E02005228',
        '4LU' => 'E02005228',
        '4LW' => 'E02005228',
        '4LX' => 'E02005228',
        '4LY' => 'E02005228',
        '4LZ' => 'E02005228',
        '4NA' => 'E02005226',
        '4NB' => 'E02005228',
        '4ND' => 'E02005228',
        '4NE' => 'E02005226',
        '4NF' => 'E02005228',
        '4NG' => 'E02005226',
        '4NH' => 'E02005228',
        '4NJ' => 'E02005226',
        '4NL' => 'E02005228',
        '4NN' => 'E02005228',
        '4NP' => 'E02005228',
        '4NR' => 'E02005228',
        '4NS' => 'E02005228',
        '4NT' => 'E02005228',
        '4NU' => 'E02005228',
        '4NW' => 'E02005228',
        '4NX' => 'E02005228',
        '4NY' => 'E02005228',
        '4NZ' => 'E02005228',
        '4PA' => 'E02005228',
        '4PB' => 'E02005228',
        '4PD' => 'E02005228',
        '4PE' => 'E02005228',
        '4PF' => 'E02005228',
        '4PG' => 'E02005228',
        '4PH' => 'E02005228',
        '4PJ' => 'E02005228',
        '4PL' => 'E02005228',
        '4PN' => 'E02005228',
        '4PP' => 'E02005228',
        '4PQ' => 'E02005228',
        '4PR' => 'E02005228',
        '4PS' => 'E02005228',
        '4PT' => 'E02005228',
        '4PU' => 'E02005228',
        '4PW' => 'E02005228',
        '4PX' => 'E02005228',
        '4PY' => 'E02005228',
        '4PZ' => 'E02005228',
        '4QA' => 'E02005228',
        '4QB' => 'E02005228',
        '4QD' => 'E02005228',
        '4QE' => 'E02005228',
        '4QF' => 'E02005228',
        '4QG' => 'E02005228',
        '4QH' => 'E02005226',
        '4QJ' => 'E02005228',
        '4QL' => 'E02005228',
        '4QN' => 'E02005228',
        '4QP' => 'E02005229',
        '4QQ' => 'E02005228',
        '4QR' => 'E02005228',
        '4QS' => 'E02005228',
        '4QT' => 'E02005228',
        '4QU' => 'E02005228',
        '4QW' => 'E02005228',
        '4QX' => 'E02005228',
        '4QY' => 'E02005228',
        '4RB' => 'E02005230',
        '4RD' => 'E02005230',
        '4RE' => 'E02005230',
        '4RF' => 'E02005230',
        '4RG' => 'E02005230',
        '4RH' => 'E02005230',
        '4RJ' => 'E02005230',
        '4RL' => 'E02005230',
        '4RN' => 'E02005230',
        '4RP' => 'E02005230',
        '4RQ' => 'E02005230',
        '4RR' => 'E02005230',
        '4RS' => 'E02005230',
        '4RT' => 'E02005230',
        '4RU' => 'E02005230',
        '4RW' => 'E02005230',
        '4SA' => 'E02005230',
        '4SB' => 'E02005230',
        '4SD' => 'E02005230',
        '4SE' => 'E02005230',
        '4SF' => 'E02005230',
        '4SG' => 'E02005230',
        '4SH' => 'E02005230',
        '4SJ' => 'E02005230',
        '4SL' => 'E02005230',
        '4SN' => 'E02005230',
        '4SP' => 'E02005230',
        '4SQ' => 'E02005230',
        '4SR' => 'E02005230',
        '4SS' => 'E02005230',
        '4ST' => 'E02005230',
        '4SU' => 'E02005230',
        '4SW' => 'E02005230',
        '4SX' => 'E02005230',
        '4SY' => 'E02005230',
        '4SZ' => 'E02005230',
        '4TA' => 'E02005230',
        '4TB' => 'E02005230',
        '4TD' => 'E02005230',
        '4TE' => 'E02005230',
        '4TF' => 'E02005230',
        '4TG' => 'E02005230',
        '4TH' => 'E02005230',
        '4TJ' => 'E02005230',
        '4TL' => 'E02005230',
        '4TN' => 'E02005230',
        '4TP' => 'E02005230',
        '4TQ' => 'E02005230',
        '4TR' => 'E02005230',
        '4TS' => 'E02005230',
        '4TT' => 'E02005230',
        '4TU' => 'E02005230',
        '4TW' => 'E02005230',
        '4TX' => 'E02005230',
        '4TY' => 'E02005230',
        '4TZ' => 'E02005230',
        '4UA' => 'E02005230',
        '4UB' => 'E02005230',
        '4UD' => 'E02005230',
        '4UE' => 'E02005230',
        '4UF' => 'E02005230',
        '4UG' => 'E02005230',
        '4UH' => 'E02005230',
        '4UJ' => 'E02005230',
        '4UL' => 'E02005230',
        '4UN' => 'E02005230',
        '4UP' => 'E02005226',
        '4UQ' => 'E02005230',
        '4UR' => 'E02005230',
        '4UT' => 'E02005230',
        '4UU' => 'E02005230',
        '4UW' => 'E02005230',
        '4UX' => 'E02005226',
        '4UY' => 'E02005230',
        '4UZ' => 'E02005230',
        '4WB' => 'E02005226',
        '4WN' => 'E02005226',
        '4WP' => 'E02005226',
        '4WQ' => 'E02005226',
        '4WR' => 'E02005226',
        '4WS' => 'E02005226',
        '4WT' => 'E02005226',
        '4WU' => 'E02005226',
        '4WW' => 'E02005226',
        '4WX' => 'E02005230',
        '4WY' => 'E02005226',
        '4WZ' => 'E02005230',
        '4XA' => 'E02005230',
        '4XB' => 'E02005230',
        '4XD' => 'E02005230',
        '4XE' => 'E02005230',
        '4XF' => 'E02005230',
        '4XG' => 'E02005230',
        '4XH' => 'E02005226',
        '4ZS' => 'E02005226',
        '5AA' => 'E02005226',
        '5AB' => 'E02005226',
        '5AD' => 'E02005226',
        '5AE' => 'E02006871',
        '5AF' => 'E02005226',
        '5AG' => 'E02005226',
        '5AH' => 'E02005226',
        '5AJ' => 'E02005226',
        '5AL' => 'E02005226',
        '5AN' => 'E02005224',
        '5AP' => 'E02005224',
        '5AQ' => 'E02005226',
        '5AR' => 'E02005224',
        '5AS' => 'E02005226',
        '5AT' => 'E02005226',
        '5AU' => 'E02005226',
        '5AW' => 'E02005224',
        '5AX' => 'E02005226',
        '5BA' => 'E02005224',
        '5BB' => 'E02005224',
        '5BD' => 'E02005224',
        '5BE' => 'E02005224',
        '5BG' => 'E02005224',
        '5BH' => 'E02005224',
        '5BJ' => 'E02005224',
        '5BL' => 'E02005224',
        '5BN' => 'E02005224',
        '5BP' => 'E02005224',
        '5BQ' => 'E02005224',
        '5BR' => 'E02005224',
        '5BS' => 'E02005224',
        '5BT' => 'E02005226',
        '5BU' => 'E02005226',
        '5BW' => 'E02005226',
        '5BX' => 'E02005226',
        '5BY' => 'E02005226',
        '5BZ' => 'E02005226',
        '5DA' => 'E02005226',
        '5DB' => 'E02005226',
        '5DD' => 'E02005226',
        '5DE' => 'E02005226',
        '5DF' => 'E02005226',
        '5DG' => 'E02005226',
        '5DH' => 'E02005226',
        '5DJ' => 'E02005226',
        '5DL' => 'E02005226',
        '5DN' => 'E02005226',
        '5DP' => 'E02005226',
        '5DQ' => 'E02005226',
        '5DR' => 'E02006871',
        '5DS' => 'E02005226',
        '5DT' => 'E02005226',
        '5DU' => 'E02005226',
        '5DW' => 'E02005226',
        '5DX' => 'E02005226',
        '5DY' => 'E02005226',
        '5DZ' => 'E02005226',
        '5EA' => 'E02005226',
        '5EB' => 'E02005226',
        '5ED' => 'E02005226',
        '5EE' => 'E02005226',
        '5EF' => 'E02005226',
        '5EG' => 'E02005226',
        '5EH' => 'E02005226',
        '5EJ' => 'E02005226',
        '5EL' => 'E02005226',
        '5EN' => 'E02005226',
        '5EP' => 'E02005226',
        '5EQ' => 'E02005226',
        '5ER' => 'E02005226',
        '5ES' => 'E02005226',
        '5ET' => 'E02005226',
        '5EU' => 'E02005226',
        '5EW' => 'E02005226',
        '5EX' => 'E02005226',
        '5EY' => 'E02005226',
        '5EZ' => 'E02005226',
        '5FA' => 'E02005226',
        '5FB' => 'E02005226',
        '5FD' => 'E02005224',
        '5FG' => 'E02005226',
        '5GA' => 'E02005226',
        '5GB' => 'E02005226',
        '5GD' => 'E02005226',
        '5GE' => 'E02005226',
        '5GF' => 'E02005226',
        '5GG' => 'E02006871',
        '5GH' => 'E02006871',
        '5GJ' => 'E02005226',
        '5GL' => 'E02005226',
        '5GN' => 'E02006871',
        '5GP' => 'E02006871',
        '5GQ' => 'E02005226',
        '5HA' => 'E02005226',
        '5HB' => 'E02005226',
        '5HD' => 'E02005226',
        '5HE' => 'E02005226',
        '5HF' => 'E02005226',
        '5HG' => 'E02005226',
        '5HH' => 'E02005226',
        '5HJ' => 'E02005226',
        '5HL' => 'E02005226',
        '5HN' => 'E02005226',
        '5HP' => 'E02005226',
        '5HQ' => 'E02005226',
        '5HR' => 'E02005226',
        '5HS' => 'E02005226',
        '5HT' => 'E02005226',
        '5HU' => 'E02005226',
        '5HW' => 'E02005226',
        '5HX' => 'E02005226',
        '5HY' => 'E02005226',
        '5HZ' => 'E02005226',
        '5JA' => 'E02005226',
        '5JB' => 'E02005226',
        '5JD' => 'E02005226',
        '5JE' => 'E02005226',
        '5JF' => 'E02005226',
        '5JG' => 'E02005226',
        '5JH' => 'E02005226',
        '5JJ' => 'E02005226',
        '5JL' => 'E02005226',
        '5JN' => 'E02005224',
        '5JP' => 'E02005226',
        '5JQ' => 'E02005226',
        '5JR' => 'E02005226',
        '5JS' => 'E02005226',
        '5JT' => 'E02005226',
        '5JU' => 'E02005226',
        '5JW' => 'E02005226',
        '5JX' => 'E02005226',
        '5JY' => 'E02005226',
        '5JZ' => 'E02005226',
        '5LA' => 'E02005226',
        '5LB' => 'E02005226',
        '5LD' => 'E02005226',
        '5LE' => 'E02005226',
        '5LF' => 'E02005226',
        '5LG' => 'E02005226',
        '5LH' => 'E02005226',
        '5LJ' => 'E02005226',
        '5LL' => 'E02005226',
        '5LN' => 'E02005226',
        '5LP' => 'E02005226',
        '5LQ' => 'E02005226',
        '5LR' => 'E02005226',
        '5LS' => 'E02005226',
        '5LT' => 'E02005226',
        '5LU' => 'E02005226',
        '5LW' => 'E02005226',
        '5LX' => 'E02005226',
        '5LY' => 'E02005226',
        '5LZ' => 'E02005226',
        '5NA' => 'E02005226',
        '5NB' => 'E02005226',
        '5ND' => 'E02005226',
        '5NE' => 'E02005226',
        '5NF' => 'E02005226',
        '5NG' => 'E02005226',
        '5NH' => 'E02005226',
        '5NJ' => 'E02005226',
        '5NL' => 'E02005226',
        '5NN' => 'E02005226',
        '5NP' => 'E02005226',
        '5NQ' => 'E02005226',
        '5NR' => 'E02005226',
        '5NS' => 'E02005226',
        '5NT' => 'E02005226',
        '5NU' => 'E02005226',
        '5NW' => 'E02005226',
        '5NX' => 'E02005226',
        '5NY' => 'E02005226',
        '5NZ' => 'E02005226',
        '5PA' => 'E02005226',
        '5PB' => 'E02005224',
        '5PD' => 'E02005226',
        '5PE' => 'E02005226',
        '5PF' => 'E02005226',
        '5PG' => 'E02005226',
        '5PH' => 'E02005226',
        '5PJ' => 'E02005226',
        '5PL' => 'E02005226',
        '5PN' => 'E02005226',
        '5PP' => 'E02005226',
        '5PQ' => 'E02005226',
        '5PR' => 'E02005226',
        '5PS' => 'E02005226',
        '5PT' => 'E02005226',
        '5PU' => 'E02005226',
        '5PW' => 'E02005226',
        '5PX' => 'E02005226',
        '5PY' => 'E02005226',
        '5PZ' => 'E02005226',
        '5QA' => 'E02005226',
        '5QB' => 'E02005226',
        '5QD' => 'E02005226',
        '5QE' => 'E02005226',
        '5QF' => 'E02005226',
        '5QG' => 'E02005226',
        '5QH' => 'E02005226',
        '5QJ' => 'E02005226',
        '5QL' => 'E02005226',
        '5QN' => 'E02005226',
        '5QP' => 'E02005226',
        '5QQ' => 'E02005226',
        '5QR' => 'E02005226',
        '5QS' => 'E02005226',
        '5QT' => 'E02005226',
        '5QU' => 'E02005226',
        '5QW' => 'E02005226',
        '5QX' => 'E02005226',
        '5QY' => 'E02005226',
        '5RA' => 'E02006871',
        '5RB' => 'E02006871',
        '5RD' => 'E02005226',
        '5RE' => 'E02006871',
        '5RF' => 'E02006871',
        '5RG' => 'E02005226',
        '5RH' => 'E02006871',
        '5RJ' => 'E02005226',
        '5RL' => 'E02005226',
        '5RN' => 'E02006871',
        '5RQ' => 'E02005226',
        '5RU' => 'E02006871',
        '5RX' => 'E02005224',
        '5RY' => 'E02005226',
        '5RZ' => 'E02005226',
        '5SA' => 'E02006871',
        '5SB' => 'E02006871',
        '5SD' => 'E02006871',
        '5SE' => 'E02005226',
        '5SF' => 'E02006871',
        '5SG' => 'E02005226',
        '5SH' => 'E02005226',
        '5SJ' => 'E02005226',
        '5SL' => 'E02005226',
        '5SN' => 'E02005226',
        '5SP' => 'E02005226',
        '5SQ' => 'E02005226',
        '5SR' => 'E02005226',
        '5SS' => 'E02005226',
        '5ST' => 'E02005226',
        '5SU' => 'E02005226',
        '5SW' => 'E02005226',
        '5SX' => 'E02005226',
        '5SY' => 'E02005226',
        '5SZ' => 'E02005226',
        '5TA' => 'E02005226',
        '5TB' => 'E02005226',
        '5TD' => 'E02005226',
        '5TE' => 'E02005226',
        '5TF' => 'E02005226',
        '5TG' => 'E02005226',
        '5TH' => 'E02006871',
        '5TJ' => 'E02005230',
        '5TL' => 'E02006871',
        '5TN' => 'E02005230',
        '5TP' => 'E02005230',
        '5TR' => 'E02005230',
        '5TS' => 'E02005230',
        '5TT' => 'E02005230',
        '5TU' => 'E02005230',
        '5TW' => 'E02006871',
        '5TX' => 'E02005230',
        '5TY' => 'E02005230',
        '5TZ' => 'E02005230',
        '5UA' => 'E02005230',
        '5UB' => 'E02005230',
        '5UD' => 'E02005230',
        '5UE' => 'E02005230',
        '5UF' => 'E02005230',
        '5UG' => 'E02005230',
        '5UH' => 'E02005230',
        '5UJ' => 'E02005230',
        '5UL' => 'E02005230',
        '5UN' => 'E02005230',
        '5UP' => 'E02005230',
        '5UQ' => 'E02005230',
        '5UR' => 'E02005230',
        '5UT' => 'E02005230',
        '5UU' => 'E02005230',
        '5UW' => 'E02005230',
        '5UX' => 'E02005230',
        '5WA' => 'E02005230',
        '5WB' => 'E02005226',
        '5WD' => 'E02005226',
        '5WE' => 'E02005226',
        '5WF' => 'E02005226',
        '5WR' => 'E02005226',
        '5WS' => 'E02005226',
        '5WT' => 'E02005226',
        '5WU' => 'E02005226',
        '5WW' => 'E02005226',
        '5WX' => 'E02005230',
        '5WY' => 'E02005230',
        '5WZ' => 'E02005230',
        '5XA' => 'E02005226',
        '5XB' => 'E02006871',
        '5XD' => 'E02006871',
        '5XE' => 'E02006871',
        '5XF' => 'E02006871',
        '5XG' => 'E02006871',
        '5XH' => 'E02006871',
        '5XJ' => 'E02006871',
        '5XL' => 'E02006871',
        '5XN' => 'E02006871',
        '5XP' => 'E02006871',
        '5XQ' => 'E02006871',
        '5XR' => 'E02006871',
        '5XS' => 'E02006871',
        '5XT' => 'E02006871',
        '5XU' => 'E02006871',
        '5XW' => 'E02006871',
        '5XX' => 'E02006871',
        '5XY' => 'E02006871',
        '5XZ' => 'E02006871',
        '5YA' => 'E02006871',
        '5YB' => 'E02006871',
        '5YD' => 'E02006871',
        '5YE' => 'E02005226',
        '5YF' => 'E02006871',
        '5YH' => 'E02005226',
        '5YJ' => 'E02005226',
        '5YL' => 'E02005226',
        '5YN' => 'E02005226',
        '5YW' => 'E02005226',
        '5ZW' => 'E02005226',
        '5ZY' => 'E02005226',
        '6AA' => 'E02005224',
        '6AB' => 'E02005224',
        '6AD' => 'E02005224',
        '6AE' => 'E02005224',
        '6AF' => 'E02005224',
        '6AG' => 'E02005224',
        '6AH' => 'E02005224',
        '6AJ' => 'E02005224',
        '6AL' => 'E02005224',
        '6AN' => 'E02005224',
        '6AP' => 'E02005224',
        '6AQ' => 'E02005224',
        '6AR' => 'E02005224',
        '6AS' => 'E02005224',
        '6AT' => 'E02005224',
        '6AU' => 'E02005224',
        '6AW' => 'E02005224',
        '6AX' => 'E02005224',
        '6AY' => 'E02005224',
        '6AZ' => 'E02006871',
        '6BA' => 'E02005224',
        '6BB' => 'E02005224',
        '6BD' => 'E02005224',
        '6BE' => 'E02005224',
        '6BG' => 'E02005224',
        '6BH' => 'E02005224',
        '6BJ' => 'E02005224',
        '6BL' => 'E02005224',
        '6BN' => 'E02005224',
        '6BP' => 'E02005224',
        '6BQ' => 'E02005224',
        '6BS' => 'E02005224',
        '6BT' => 'E02005224',
        '6BU' => 'E02005224',
        '6BW' => 'E02005224',
        '6BX' => 'E02005224',
        '6BY' => 'E02005224',
        '6BZ' => 'E02005224',
        '6DA' => 'E02005224',
        '6DB' => 'E02005224',
        '6DD' => 'E02005224',
        '6DE' => 'E02005224',
        '6DF' => 'E02005224',
        '6DG' => 'E02005224',
        '6DH' => 'E02005224',
        '6DJ' => 'E02005224',
        '6DL' => 'E02005224',
        '6DN' => 'E02005224',
        '6DP' => 'E02005224',
        '6DQ' => 'E02005224',
        '6DR' => 'E02005224',
        '6DS' => 'E02005226',
        '6DT' => 'E02005224',
        '6DU' => 'E02005224',
        '6DW' => 'E02005224',
        '6DX' => 'E02005224',
        '6DY' => 'E02005224',
        '6DZ' => 'E02005224',
        '6EA' => 'E02005224',
        '6EB' => 'E02005224',
        '6ED' => 'E02005224',
        '6EE' => 'E02005224',
        '6EF' => 'E02005224',
        '6EG' => 'E02005224',
        '6EH' => 'E02005224',
        '6EJ' => 'E02005224',
        '6EL' => 'E02005224',
        '6EN' => 'E02005224',
        '6EP' => 'E02005224',
        '6EQ' => 'E02005224',
        '6ER' => 'E02005224',
        '6ES' => 'E02005224',
        '6ET' => 'E02005224',
        '6EU' => 'E02005224',
        '6EW' => 'E02006871',
        '6EX' => 'E02005224',
        '6EY' => 'E02005224',
        '6EZ' => 'E02005224',
        '6FA' => 'E02005224',
        '6GA' => 'E02005224',
        '6GB' => 'E02005226',
        '6GD' => 'E02005224',
        '6GE' => 'E02005224',
        '6GF' => 'E02005226',
        '6GG' => 'E02005226',
        '6GH' => 'E02005224',
        '6GJ' => 'E02005226',
        '6GL' => 'E02005226',
        '6GN' => 'E02005226',
        '6HA' => 'E02005224',
        '6HB' => 'E02005224',
        '6HD' => 'E02005224',
        '6HE' => 'E02005224',
        '6HF' => 'E02005224',
        '6HG' => 'E02005224',
        '6HH' => 'E02005224',
        '6HJ' => 'E02005224',
        '6HL' => 'E02005224',
        '6HN' => 'E02005224',
        '6HP' => 'E02005224',
        '6HQ' => 'E02005224',
        '6HR' => 'E02005224',
        '6HS' => 'E02005224',
        '6HT' => 'E02005224',
        '6HU' => 'E02005224',
        '6HW' => 'E02005224',
        '6HX' => 'E02005224',
        '6HY' => 'E02005224',
        '6HZ' => 'E02005224',
        '6JA' => 'E02005224',
        '6JB' => 'E02005224',
        '6JD' => 'E02005224',
        '6JH' => 'E02005224',
        '6JJ' => 'E02005224',
        '6JP' => 'E02006871',
        '6JR' => 'E02006871',
        '6JS' => 'E02005224',
        '6JT' => 'E02006871',
        '6JU' => 'E02006871',
        '6JX' => 'E02006871',
        '6JY' => 'E02005224',
        '6JZ' => 'E02005224',
        '6LA' => 'E02005224',
        '6LB' => 'E02005224',
        '6LD' => 'E02005224',
        '6LE' => 'E02005224',
        '6LF' => 'E02005224',
        '6LG' => 'E02005224',
        '6LH' => 'E02005224',
        '6LJ' => 'E02005224',
        '6LL' => 'E02005224',
        '6LN' => 'E02005224',
        '6LP' => 'E02006871',
        '6LQ' => 'E02005224',
        '6LR' => 'E02005224',
        '6LS' => 'E02006871',
        '6LT' => 'E02006871',
        '6LU' => 'E02006871',
        '6LX' => 'E02005224',
        '6LY' => 'E02006871',
        '6LZ' => 'E02006871',
        '6NA' => 'E02006871',
        '6NB' => 'E02006871',
        '6ND' => 'E02006871',
        '6NE' => 'E02006871',
        '6NF' => 'E02006871',
        '6NG' => 'E02006871',
        '6NH' => 'E02006871',
        '6NJ' => 'E02006871',
        '6NL' => 'E02006871',
        '6NN' => 'E02006871',
        '6NP' => 'E02006871',
        '6NQ' => 'E02006871',
        '6NR' => 'E02006871',
        '6NS' => 'E02006871',
        '6NT' => 'E02006871',
        '6NU' => 'E02006871',
        '6NW' => 'E02006871',
        '6NX' => 'E02006871',
        '6NY' => 'E02006871',
        '6NZ' => 'E02006871',
        '6PA' => 'E02006871',
        '6PB' => 'E02006871',
        '6PD' => 'E02006871',
        '6PE' => 'E02006871',
        '6PF' => 'E02006871',
        '6PG' => 'E02006871',
        '6PH' => 'E02006871',
        '6PJ' => 'E02006871',
        '6PL' => 'E02006871',
        '6PN' => 'E02006871',
        '6PP' => 'E02006871',
        '6PQ' => 'E02006871',
        '6PR' => 'E02005224',
        '6PS' => 'E02005224',
        '6PT' => 'E02006871',
        '6PU' => 'E02006871',
        '6PW' => 'E02006871',
        '6PX' => 'E02006871',
        '6PY' => 'E02006871',
        '6PZ' => 'E02006871',
        '6QA' => 'E02006871',
        '6QB' => 'E02006871',
        '6QD' => 'E02005224',
        '6QE' => 'E02005224',
        '6QF' => 'E02005224',
        '6QG' => 'E02005224',
        '6QH' => 'E02005224',
        '6QL' => 'E02006871',
        '6QP' => 'E02005224',
        '6QQ' => 'E02005224',
        '6QR' => 'E02006871',
        '6QS' => 'E02006871',
        '6QT' => 'E02006871',
        '6QU' => 'E02005224',
        '6QX' => 'E02005224',
        '6QY' => 'E02005224',
        '6QZ' => 'E02005224',
        '6RA' => 'E02005224',
        '6RB' => 'E02005224',
        '6RD' => 'E02005224',
        '6RE' => 'E02005224',
        '6RF' => 'E02005224',
        '6RG' => 'E02005224',
        '6RH' => 'E02006871',
        '6RJ' => 'E02006871',
        '6RL' => 'E02006871',
        '6RN' => 'E02005224',
        '6RP' => 'E02006871',
        '6RQ' => 'E02005224',
        '6RR' => 'E02006871',
        '6RS' => 'E02005224',
        '6RT' => 'E02005224',
        '6RU' => 'E02006871',
        '6RW' => 'E02005224',
        '6RX' => 'E02006871',
        '6RY' => 'E02006871',
        '6RZ' => 'E02006871',
        '6SA' => 'E02006871',
        '6SB' => 'E02006871',
        '6SD' => 'E02006871',
        '6SE' => 'E02006871',
        '6SF' => 'E02006871',
        '6SG' => 'E02006871',
        '6SH' => 'E02006871',
        '6SJ' => 'E02005224',
        '6SL' => 'E02005224',
        '6SN' => 'E02005224',
        '6SP' => 'E02005224',
        '6SQ' => 'E02006871',
        '6SR' => 'E02005224',
        '6SS' => 'E02005226',
        '6ST' => 'E02006871',
        '6SW' => 'E02005224',
        '6SX' => 'E02006871',
        '6SY' => 'E02006871',
        '6SZ' => 'E02006871',
        '6TA' => 'E02006871',
        '6TB' => 'E02006871',
        '6TD' => 'E02006871',
        '6TE' => 'E02006871',
        '6TF' => 'E02006871',
        '6TG' => 'E02006871',
        '6TH' => 'E02006871',
        '6TJ' => 'E02006871',
        '6TL' => 'E02006871',
        '6TN' => 'E02006871',
        '6TP' => 'E02006871',
        '6TQ' => 'E02006871',
        '6TR' => 'E02006871',
        '6TS' => 'E02006871',
        '6TT' => 'E02006871',
        '6TU' => 'E02006871',
        '6TW' => 'E02006871',
        '6TX' => 'E02006871',
        '6TY' => 'E02006871',
        '6TZ' => 'E02006871',
        '6UA' => 'E02006871',
        '6UB' => 'E02006871',
        '6UD' => 'E02006871',
        '6UE' => 'E02006871',
        '6UF' => 'E02006871',
        '6UG' => 'E02006871',
        '6UN' => 'E02006871',
        '6UQ' => 'E02006871',
        '6UZ' => 'E02006871',
        '6WA' => 'E02005226',
        '6WB' => 'E02005226',
        '6WD' => 'E02006871',
        '6WN' => 'E02005226',
        '6WP' => 'E02005226',
        '6WQ' => 'E02005226',
        '6WR' => 'E02005226',
        '6WS' => 'E02005226',
        '6WT' => 'E02005226',
        '6WU' => 'E02005226',
        '6WW' => 'E02005226',
        '6WX' => 'E02005226',
        '6WY' => 'E02005226',
        '6WZ' => 'E02005226',
        '6XA' => 'E02005226',
        '6XB' => 'E02005226',
        '6XD' => 'E02005226',
        '6XE' => 'E02005226',
        '9AD' => 'E02005226',
        '9AP' => 'E02005226',
        '9AQ' => 'E02005226',
        '9AS' => 'E02005226',
        '9AT' => 'E02005226',
        '9BA' => 'E02005226',
        '9BB' => 'E02005226',
        '9BE' => 'E02005226',
        '9BF' => 'E02005226',
        '9BG' => 'E02005226',
        '9BJ' => 'E02005226',
        '9BL' => 'E02005226',
        '9BN' => 'E02005226',
        '9BP' => 'E02005226',
        '9BQ' => 'E02005226',
        '9BR' => 'E02005226',
        '9BS' => 'E02005226',
        '9BT' => 'E02005226',
        '9BU' => 'E02005226',
        '9BW' => 'E02005226',
        '9BX' => 'E02005226',
        '9BY' => 'E02005226',
        '9BZ' => 'E02005226',
        '9DA' => 'E02005226',
        '9DB' => 'E02005226',
        '9DD' => 'E02005226',
        '9DE' => 'E02005226',
        '9DF' => 'E02005226',
        '9DG' => 'E02005226',
        '9DH' => 'E02005226',
        '9DJ' => 'E02005226',
        '9DL' => 'E02005226',
        '9DN' => 'E02005226',
        '9DP' => 'E02005226',
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