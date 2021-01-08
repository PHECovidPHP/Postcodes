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
final class CA2
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '4AA' => 'E02003996',
        '4AB' => 'E02003996',
        '4AD' => 'E02003996',
        '4AE' => 'E02003996',
        '4AF' => 'E02003996',
        '4AG' => 'E02003996',
        '4AH' => 'E02003996',
        '4AJ' => 'E02003996',
        '4AL' => 'E02003996',
        '4AN' => 'E02003996',
        '4AP' => 'E02003996',
        '4AQ' => 'E02003996',
        '4AR' => 'E02003996',
        '4AS' => 'E02003996',
        '4AT' => 'E02003996',
        '4AU' => 'E02003996',
        '4AW' => 'E02003996',
        '4AX' => 'E02003996',
        '4AY' => 'E02003996',
        '4AZ' => 'E02003996',
        '4BA' => 'E02003996',
        '4BB' => 'E02003996',
        '4BD' => 'E02003996',
        '4BE' => 'E02003996',
        '4BF' => 'E02003996',
        '4BG' => 'E02003996',
        '4BH' => 'E02003996',
        '4BJ' => 'E02003996',
        '4BL' => 'E02003998',
        '4BN' => 'E02003998',
        '4BP' => 'E02003998',
        '4BQ' => 'E02003996',
        '4BS' => 'E02003998',
        '4BT' => 'E02003998',
        '4BU' => 'E02003998',
        '4BW' => 'E02003998',
        '4BX' => 'E02003998',
        '4BY' => 'E02003998',
        '4BZ' => 'E02003998',
        '4DA' => 'E02003998',
        '4DB' => 'E02003998',
        '4DD' => 'E02003998',
        '4DE' => 'E02003998',
        '4DF' => 'E02003998',
        '4DG' => 'E02003996',
        '4DH' => 'E02003998',
        '4DJ' => 'E02003998',
        '4DL' => 'E02003998',
        '4DN' => 'E02003998',
        '4DP' => 'E02003996',
        '4DQ' => 'E02003999',
        '4DR' => 'E02003998',
        '4DS' => 'E02003996',
        '4DT' => 'E02003996',
        '4DU' => 'E02003996',
        '4DW' => 'E02003998',
        '4DX' => 'E02003996',
        '4DY' => 'E02003996',
        '4DZ' => 'E02003996',
        '4EA' => 'E02003996',
        '4EB' => 'E02003998',
        '4ED' => 'E02003996',
        '4EE' => 'E02003996',
        '4EF' => 'E02003996',
        '4EG' => 'E02003996',
        '4EH' => 'E02003996',
        '4EJ' => 'E02003996',
        '4EL' => 'E02003996',
        '4EN' => 'E02003996',
        '4EP' => 'E02003996',
        '4EQ' => 'E02003996',
        '4ER' => 'E02003996',
        '4ES' => 'E02003996',
        '4ET' => 'E02003999',
        '4EU' => 'E02003996',
        '4EW' => 'E02003996',
        '4EX' => 'E02003996',
        '4EY' => 'E02003996',
        '4EZ' => 'E02003998',
        '4GA' => 'E02003996',
        '4GB' => 'E02003998',
        '4GD' => 'E02003996',
        '4GE' => 'E02003994',
        '4GF' => 'E02003998',
        '4GG' => 'E02003998',
        '4GH' => 'E02003994',
        '4GJ' => 'E02003998',
        '4HA' => 'E02003996',
        '4HB' => 'E02003996',
        '4HD' => 'E02003996',
        '4HE' => 'E02003996',
        '4HF' => 'E02003996',
        '4HG' => 'E02003996',
        '4HH' => 'E02003996',
        '4HL' => 'E02003996',
        '4HP' => 'E02003996',
        '4HQ' => 'E02003998',
        '4HR' => 'E02003996',
        '4HS' => 'E02003996',
        '4HT' => 'E02003996',
        '4HU' => 'E02003996',
        '4HY' => 'E02003996',
        '4HZ' => 'E02003998',
        '4JA' => 'E02003998',
        '4JB' => 'E02003998',
        '4JD' => 'E02003998',
        '4JE' => 'E02003998',
        '4JF' => 'E02003998',
        '4JG' => 'E02003998',
        '4JH' => 'E02003998',
        '4JJ' => 'E02003998',
        '4JL' => 'E02003998',
        '4JN' => 'E02003998',
        '4JP' => 'E02003998',
        '4JQ' => 'E02003998',
        '4JR' => 'E02003998',
        '4JS' => 'E02003998',
        '4JT' => 'E02003998',
        '4JU' => 'E02003998',
        '4JW' => 'E02003998',
        '4JX' => 'E02003998',
        '4JY' => 'E02003998',
        '4JZ' => 'E02003998',
        '4LA' => 'E02003996',
        '4LB' => 'E02003996',
        '4LD' => 'E02003998',
        '4LE' => 'E02003998',
        '4LF' => 'E02003998',
        '4LH' => 'E02003998',
        '4LJ' => 'E02003998',
        '4LP' => 'E02003998',
        '4LQ' => 'E02003998',
        '4LR' => 'E02003998',
        '4LS' => 'E02003998',
        '4LT' => 'E02003998',
        '4LU' => 'E02003998',
        '4LW' => 'E02003998',
        '4LX' => 'E02003998',
        '4LZ' => 'E02003998',
        '4NA' => 'E02003998',
        '4NB' => 'E02003999',
        '4ND' => 'E02003998',
        '4NE' => 'E02003998',
        '4NF' => 'E02003998',
        '4NG' => 'E02003998',
        '4NH' => 'E02003998',
        '4NJ' => 'E02003998',
        '4NL' => 'E02003998',
        '4NN' => 'E02003998',
        '4NP' => 'E02003998',
        '4NQ' => 'E02003998',
        '4NR' => 'E02003998',
        '4NS' => 'E02003998',
        '4NT' => 'E02003998',
        '4NU' => 'E02003998',
        '4NW' => 'E02003998',
        '4NX' => 'E02003998',
        '4NY' => 'E02003998',
        '4PA' => 'E02003998',
        '4PB' => 'E02003998',
        '4PD' => 'E02003998',
        '4PE' => 'E02003998',
        '4PF' => 'E02003998',
        '4PG' => 'E02003998',
        '4PH' => 'E02003994',
        '4PJ' => 'E02003998',
        '4PL' => 'E02003998',
        '4PN' => 'E02003998',
        '4PP' => 'E02003998',
        '4PQ' => 'E02003998',
        '4PR' => 'E02003998',
        '4PS' => 'E02003998',
        '4PT' => 'E02003998',
        '4PU' => 'E02003998',
        '4PW' => 'E02003998',
        '4PX' => 'E02003998',
        '4PY' => 'E02003998',
        '4PZ' => 'E02003998',
        '4QA' => 'E02003998',
        '4QB' => 'E02003998',
        '4QD' => 'E02003998',
        '4QE' => 'E02003998',
        '4QF' => 'E02003998',
        '4QG' => 'E02003998',
        '4QH' => 'E02003998',
        '4QJ' => 'E02003998',
        '4QL' => 'E02003998',
        '4QN' => 'E02003999',
        '4QP' => 'E02003998',
        '4QQ' => 'E02003998',
        '4QR' => 'E02003998',
        '4QS' => 'E02003999',
        '4QT' => 'E02003999',
        '4QU' => 'E02003998',
        '4QW' => 'E02003999',
        '4QY' => 'E02003999',
        '4QZ' => 'E02003999',
        '4RA' => 'E02003998',
        '4RB' => 'E02003998',
        '4RD' => 'E02003998',
        '4RE' => 'E02003998',
        '4RF' => 'E02003998',
        '4RG' => 'E02003998',
        '4RH' => 'E02003998',
        '4RJ' => 'E02003998',
        '4RL' => 'E02003998',
        '4RN' => 'E02003998',
        '4RP' => 'E02003999',
        '4RQ' => 'E02003998',
        '4RR' => 'E02003998',
        '4RS' => 'E02003998',
        '4RT' => 'E02003999',
        '4RU' => 'E02003998',
        '4RW' => 'E02003998',
        '4RX' => 'E02003999',
        '4RY' => 'E02003998',
        '4RZ' => 'E02003998',
        '4SA' => 'E02003999',
        '4SB' => 'E02003999',
        '4SD' => 'E02003999',
        '4SE' => 'E02003999',
        '4SF' => 'E02003999',
        '4SG' => 'E02003996',
        '4SH' => 'E02003999',
        '4SJ' => 'E02003999',
        '4SL' => 'E02003999',
        '4SN' => 'E02003999',
        '4SQ' => 'E02003999',
        '4SR' => 'E02003999',
        '4SS' => 'E02003999',
        '4ST' => 'E02003999',
        '4SU' => 'E02003999',
        '4SW' => 'E02003999',
        '4SX' => 'E02003999',
        '4SY' => 'E02003999',
        '4SZ' => 'E02003999',
        '4TA' => 'E02003999',
        '4TB' => 'E02003998',
        '4TD' => 'E02003999',
        '4TH' => 'E02003999',
        '4TJ' => 'E02003999',
        '4TL' => 'E02003999',
        '4TP' => 'E02003999',
        '4TQ' => 'E02003999',
        '4TR' => 'E02003999',
        '4TS' => 'E02003999',
        '4TT' => 'E02003999',
        '4TU' => 'E02003999',
        '4TW' => 'E02003999',
        '4TX' => 'E02003999',
        '4TY' => 'E02003999',
        '4TZ' => 'E02003999',
        '4UH' => 'E02003999',
        '4UJ' => 'E02003999',
        '4UL' => 'E02003999',
        '4UN' => 'E02003999',
        '4UP' => 'E02003999',
        '4UQ' => 'E02003999',
        '4UW' => 'E02003999',
        '4YA' => 'E02003994',
        '4YB' => 'E02003994',
        '4YD' => 'E02003994',
        '5AA' => 'E02003996',
        '5AB' => 'E02003996',
        '5AD' => 'E02003996',
        '5AE' => 'E02003996',
        '5AF' => 'E02003996',
        '5AG' => 'E02003996',
        '5AH' => 'E02003996',
        '5AJ' => 'E02003996',
        '5AL' => 'E02003996',
        '5AN' => 'E02003996',
        '5AP' => 'E02003996',
        '5AQ' => 'E02003996',
        '5AR' => 'E02003996',
        '5AS' => 'E02003996',
        '5AT' => 'E02003996',
        '5AU' => 'E02003996',
        '5AW' => 'E02003996',
        '5AX' => 'E02003996',
        '5AY' => 'E02003996',
        '5AZ' => 'E02003996',
        '5BA' => 'E02003996',
        '5BB' => 'E02003996',
        '5BD' => 'E02003996',
        '5BE' => 'E02003996',
        '5BG' => 'E02003994',
        '5BH' => 'E02003992',
        '5BJ' => 'E02003994',
        '5BL' => 'E02003996',
        '5BN' => 'E02003992',
        '5BP' => 'E02003996',
        '5BS' => 'E02003992',
        '5BT' => 'E02003994',
        '5DA' => 'E02003996',
        '5DF' => 'E02003994',
        '5DR' => 'E02003996',
        '5DS' => 'E02003996',
        '5DT' => 'E02003996',
        '5DU' => 'E02003996',
        '5DW' => 'E02003996',
        '5DX' => 'E02003996',
        '5DY' => 'E02003996',
        '5DZ' => 'E02003996',
        '5EB' => 'E02003996',
        '5ED' => 'E02003996',
        '5EE' => 'E02003996',
        '5EF' => 'E02003996',
        '5EG' => 'E02003996',
        '5EH' => 'E02003996',
        '5EJ' => 'E02003996',
        '5EL' => 'E02003996',
        '5EN' => 'E02003996',
        '5EQ' => 'E02003996',
        '5ET' => 'E02003996',
        '5EU' => 'E02003996',
        '5EY' => 'E02003996',
        '5FY' => 'E02003996',
        '5FZ' => 'E02003996',
        '5GA' => 'E02003994',
        '5GB' => 'E02003994',
        '5GD' => 'E02003996',
        '5GE' => 'E02003994',
        '5GF' => 'E02003994',
        '5GG' => 'E02003994',
        '5GH' => 'E02003994',
        '5GJ' => 'E02003994',
        '5GL' => 'E02003994',
        '5GN' => 'E02003994',
        '5GP' => 'E02003994',
        '5GQ' => 'E02003994',
        '5GR' => 'E02003994',
        '5GS' => 'E02003994',
        '5GT' => 'E02003994',
        '5GU' => 'E02003994',
        '5GW' => 'E02003994',
        '5GX' => 'E02003996',
        '5GY' => 'E02003996',
        '5GZ' => 'E02003996',
        '5HA' => 'E02003996',
        '5HB' => 'E02003996',
        '5HD' => 'E02003996',
        '5HE' => 'E02003996',
        '5HF' => 'E02003996',
        '5HG' => 'E02003996',
        '5HH' => 'E02003996',
        '5HJ' => 'E02003996',
        '5HL' => 'E02003996',
        '5HN' => 'E02003996',
        '5HP' => 'E02003996',
        '5HQ' => 'E02003996',
        '5HR' => 'E02003996',
        '5HS' => 'E02003994',
        '5HT' => 'E02003996',
        '5HU' => 'E02003996',
        '5HW' => 'E02003994',
        '5HX' => 'E02003996',
        '5HY' => 'E02003996',
        '5HZ' => 'E02003996',
        '5JA' => 'E02003996',
        '5JB' => 'E02003996',
        '5JD' => 'E02003996',
        '5JE' => 'E02003996',
        '5JF' => 'E02003996',
        '5JG' => 'E02003996',
        '5JH' => 'E02003996',
        '5JJ' => 'E02003996',
        '5JL' => 'E02003996',
        '5JN' => 'E02003996',
        '5JP' => 'E02003996',
        '5JQ' => 'E02003996',
        '5JR' => 'E02003996',
        '5JS' => 'E02003996',
        '5JT' => 'E02003996',
        '5JU' => 'E02003996',
        '5JW' => 'E02003996',
        '5JX' => 'E02003996',
        '5JY' => 'E02003996',
        '5JZ' => 'E02003996',
        '5LA' => 'E02003996',
        '5LB' => 'E02003996',
        '5LD' => 'E02003996',
        '5LE' => 'E02003996',
        '5LF' => 'E02003996',
        '5LG' => 'E02003996',
        '5LH' => 'E02003996',
        '5LJ' => 'E02003996',
        '5LL' => 'E02003996',
        '5LN' => 'E02003996',
        '5LP' => 'E02003996',
        '5LQ' => 'E02003996',
        '5LR' => 'E02003996',
        '5LS' => 'E02003994',
        '5LT' => 'E02003996',
        '5LU' => 'E02003996',
        '5LW' => 'E02003996',
        '5LX' => 'E02003996',
        '5LY' => 'E02003996',
        '5LZ' => 'E02003996',
        '5NA' => 'E02003996',
        '5NB' => 'E02003996',
        '5ND' => 'E02003994',
        '5NE' => 'E02003994',
        '5NF' => 'E02003996',
        '5NG' => 'E02003994',
        '5NH' => 'E02003994',
        '5NJ' => 'E02003994',
        '5NL' => 'E02003994',
        '5NN' => 'E02003994',
        '5NP' => 'E02003994',
        '5NQ' => 'E02003996',
        '5NR' => 'E02003994',
        '5NS' => 'E02003994',
        '5NT' => 'E02003994',
        '5NU' => 'E02003994',
        '5NW' => 'E02003994',
        '5NX' => 'E02003994',
        '5NY' => 'E02003994',
        '5NZ' => 'E02003996',
        '5PA' => 'E02003994',
        '5PB' => 'E02003994',
        '5PD' => 'E02003994',
        '5PE' => 'E02003994',
        '5PF' => 'E02003994',
        '5PG' => 'E02003994',
        '5PH' => 'E02003996',
        '5PJ' => 'E02003995',
        '5PL' => 'E02003994',
        '5PN' => 'E02003995',
        '5PP' => 'E02003994',
        '5PQ' => 'E02003994',
        '5PR' => 'E02003994',
        '5PS' => 'E02003996',
        '5PT' => 'E02003994',
        '5PU' => 'E02003994',
        '5PW' => 'E02003994',
        '5PX' => 'E02003994',
        '5PY' => 'E02003994',
        '5PZ' => 'E02003995',
        '5QA' => 'E02003994',
        '5QB' => 'E02003994',
        '5QD' => 'E02003994',
        '5QE' => 'E02003995',
        '5QF' => 'E02003995',
        '5QG' => 'E02003995',
        '5QH' => 'E02003995',
        '5QJ' => 'E02003995',
        '5QL' => 'E02003995',
        '5QN' => 'E02003995',
        '5QP' => 'E02003995',
        '5QQ' => 'E02003995',
        '5QR' => 'E02003995',
        '5QS' => 'E02003994',
        '5QT' => 'E02003994',
        '5QU' => 'E02003996',
        '5QW' => 'E02003995',
        '5QX' => 'E02003994',
        '5QY' => 'E02003995',
        '5QZ' => 'E02003995',
        '5RA' => 'E02003995',
        '5RB' => 'E02003995',
        '5RD' => 'E02003995',
        '5RE' => 'E02003995',
        '5RF' => 'E02003995',
        '5RG' => 'E02003995',
        '5RH' => 'E02003995',
        '5RJ' => 'E02003995',
        '5RL' => 'E02003995',
        '5RN' => 'E02003992',
        '5RP' => 'E02003992',
        '5RQ' => 'E02003995',
        '5RR' => 'E02003992',
        '5RS' => 'E02003992',
        '5RT' => 'E02003992',
        '5RU' => 'E02003992',
        '5RW' => 'E02003992',
        '5RX' => 'E02003992',
        '5RY' => 'E02003992',
        '5RZ' => 'E02003992',
        '5SA' => 'E02003994',
        '5SB' => 'E02003992',
        '5SD' => 'E02003992',
        '5SE' => 'E02003994',
        '5SF' => 'E02003994',
        '5SG' => 'E02003996',
        '5SH' => 'E02003992',
        '5SJ' => 'E02003994',
        '5SL' => 'E02003996',
        '5SN' => 'E02003994',
        '5SP' => 'E02003994',
        '5SQ' => 'E02003992',
        '5SR' => 'E02003992',
        '5SS' => 'E02003992',
        '5ST' => 'E02003992',
        '5SU' => 'E02003992',
        '5SW' => 'E02003992',
        '5SX' => 'E02003992',
        '5SY' => 'E02003992',
        '5SZ' => 'E02003992',
        '5TA' => 'E02003992',
        '5TB' => 'E02003992',
        '5TD' => 'E02003992',
        '5TE' => 'E02003994',
        '5TF' => 'E02003992',
        '5TG' => 'E02003992',
        '5TH' => 'E02003992',
        '5TJ' => 'E02003992',
        '5TL' => 'E02003992',
        '5TN' => 'E02003992',
        '5TP' => 'E02003992',
        '5TQ' => 'E02003992',
        '5TR' => 'E02003992',
        '5TS' => 'E02003992',
        '5TT' => 'E02003992',
        '5TU' => 'E02003994',
        '5TW' => 'E02003992',
        '5TX' => 'E02003992',
        '5TY' => 'E02003994',
        '5TZ' => 'E02003994',
        '5UA' => 'E02003994',
        '5UB' => 'E02003992',
        '5UD' => 'E02003992',
        '5UE' => 'E02003994',
        '5UF' => 'E02003992',
        '5UG' => 'E02003992',
        '5UH' => 'E02003992',
        '5UJ' => 'E02003992',
        '5UL' => 'E02003992',
        '5UN' => 'E02003992',
        '5UP' => 'E02003992',
        '5UQ' => 'E02003994',
        '5UR' => 'E02003992',
        '5US' => 'E02003992',
        '5UT' => 'E02003992',
        '5UU' => 'E02003992',
        '5UW' => 'E02003992',
        '5UX' => 'E02003992',
        '5UY' => 'E02003994',
        '5UZ' => 'E02003994',
        '5WA' => 'E02003994',
        '5WB' => 'E02003994',
        '5WD' => 'E02003994',
        '5WE' => 'E02003994',
        '5WF' => 'E02003994',
        '5WG' => 'E02003992',
        '5WH' => 'E02003994',
        '5WJ' => 'E02003994',
        '5WX' => 'E02003994',
        '5WY' => 'E02003994',
        '5WZ' => 'E02003994',
        '5XA' => 'E02003994',
        '5XB' => 'E02003994',
        '5XD' => 'E02003994',
        '5XE' => 'E02003994',
        '5XF' => 'E02003994',
        '5XG' => 'E02003994',
        '5XH' => 'E02003994',
        '5XJ' => 'E02003994',
        '5XL' => 'E02003994',
        '5XN' => 'E02003994',
        '5XP' => 'E02003996',
        '5XQ' => 'E02003994',
        '5XR' => 'E02003996',
        '5XS' => 'E02003996',
        '5XT' => 'E02003996',
        '5XU' => 'E02003996',
        '5XW' => 'E02003994',
        '5XX' => 'E02003996',
        '5XY' => 'E02003996',
        '5XZ' => 'E02003994',
        '5YA' => 'E02003994',
        '5YB' => 'E02003994',
        '5YD' => 'E02003994',
        '5YE' => 'E02003994',
        '5YF' => 'E02003994',
        '5YG' => 'E02003994',
        '5YH' => 'E02003994',
        '5YL' => 'E02003994',
        '5YN' => 'E02003994',
        '6AA' => 'E02003996',
        '6AB' => 'E02003994',
        '6AD' => 'E02003994',
        '6AE' => 'E02003994',
        '6AF' => 'E02003999',
        '6AG' => 'E02003994',
        '6AH' => 'E02003994',
        '6AJ' => 'E02003996',
        '6AL' => 'E02003994',
        '6AN' => 'E02003994',
        '6AP' => 'E02003994',
        '6AQ' => 'E02003996',
        '6AR' => 'E02003994',
        '6AS' => 'E02003994',
        '6AT' => 'E02003994',
        '6AU' => 'E02003994',
        '6AW' => 'E02003994',
        '6AX' => 'E02003999',
        '6AY' => 'E02003999',
        '6AZ' => 'E02003996',
        '6BA' => 'E02003999',
        '6BB' => 'E02003999',
        '6BD' => 'E02003999',
        '6BE' => 'E02003999',
        '6BF' => 'E02003999',
        '6BG' => 'E02003999',
        '6BH' => 'E02003999',
        '6BJ' => 'E02003999',
        '6BL' => 'E02003999',
        '6BN' => 'E02003999',
        '6BP' => 'E02003999',
        '6BQ' => 'E02003999',
        '6BT' => 'E02003999',
        '6BU' => 'E02003999',
        '6BW' => 'E02003999',
        '6BX' => 'E02003999',
        '6BY' => 'E02003999',
        '6BZ' => 'E02003999',
        '6DA' => 'E02003999',
        '6DB' => 'E02003999',
        '6DD' => 'E02003995',
        '6DE' => 'E02003994',
        '6DF' => 'E02003994',
        '6DG' => 'E02003995',
        '6DH' => 'E02003994',
        '6DJ' => 'E02003994',
        '6DL' => 'E02003994',
        '6DP' => 'E02003995',
        '6DQ' => 'E02003995',
        '6DR' => 'E02003994',
        '6DS' => 'E02003994',
        '6DT' => 'E02003994',
        '6DU' => 'E02003995',
        '6DW' => 'E02003994',
        '6DX' => 'E02003994',
        '6DY' => 'E02003994',
        '6DZ' => 'E02003994',
        '6EA' => 'E02003994',
        '6EB' => 'E02003994',
        '6ED' => 'E02003994',
        '6EE' => 'E02003994',
        '6EF' => 'E02003994',
        '6EG' => 'E02003994',
        '6EH' => 'E02003994',
        '6EJ' => 'E02003994',
        '6EL' => 'E02003994',
        '6EN' => 'E02003994',
        '6EP' => 'E02003994',
        '6EQ' => 'E02003994',
        '6ER' => 'E02003994',
        '6ES' => 'E02003994',
        '6EW' => 'E02003994',
        '6EX' => 'E02003994',
        '6GA' => 'E02003994',
        '6GB' => 'E02003994',
        '6GD' => 'E02003994',
        '6GL' => 'E02003994',
        '6HA' => 'E02003994',
        '6HB' => 'E02003994',
        '6HD' => 'E02003994',
        '6HE' => 'E02003994',
        '6HF' => 'E02003994',
        '6HG' => 'E02003994',
        '6HH' => 'E02003994',
        '6HJ' => 'E02003994',
        '6HL' => 'E02003994',
        '6HN' => 'E02003995',
        '6HP' => 'E02003995',
        '6HQ' => 'E02003994',
        '6HR' => 'E02003995',
        '6HS' => 'E02003995',
        '6HT' => 'E02003995',
        '6HU' => 'E02003995',
        '6HW' => 'E02003995',
        '6HX' => 'E02003995',
        '6HY' => 'E02003995',
        '6HZ' => 'E02003995',
        '6JA' => 'E02003995',
        '6JB' => 'E02003995',
        '6JD' => 'E02003994',
        '6JE' => 'E02003994',
        '6JF' => 'E02003994',
        '6JG' => 'E02003995',
        '6JH' => 'E02003995',
        '6JJ' => 'E02003995',
        '6JL' => 'E02003995',
        '6JN' => 'E02003995',
        '6JP' => 'E02003995',
        '6JR' => 'E02003995',
        '6JS' => 'E02003999',
        '6JT' => 'E02003995',
        '6JU' => 'E02003995',
        '6JW' => 'E02003995',
        '6JX' => 'E02003995',
        '6JY' => 'E02003995',
        '6JZ' => 'E02003999',
        '6LA' => 'E02003999',
        '6LB' => 'E02003999',
        '6LD' => 'E02003995',
        '6LE' => 'E02003995',
        '6LF' => 'E02003995',
        '6LG' => 'E02003995',
        '6LH' => 'E02003995',
        '6LJ' => 'E02003995',
        '6LL' => 'E02003995',
        '6LN' => 'E02003995',
        '6LP' => 'E02003995',
        '6LQ' => 'E02003995',
        '6LR' => 'E02003995',
        '6LS' => 'E02003995',
        '6LT' => 'E02003995',
        '6LU' => 'E02003995',
        '6LW' => 'E02003995',
        '6LX' => 'E02003995',
        '6LY' => 'E02003995',
        '6LZ' => 'E02003995',
        '6NA' => 'E02003995',
        '6NB' => 'E02003995',
        '6ND' => 'E02003995',
        '6NE' => 'E02003995',
        '6NF' => 'E02003995',
        '6NG' => 'E02003995',
        '6NH' => 'E02003995',
        '6NJ' => 'E02003995',
        '6NL' => 'E02003995',
        '6NN' => 'E02003995',
        '6NP' => 'E02003995',
        '6NQ' => 'E02003995',
        '6NR' => 'E02003995',
        '6NS' => 'E02003995',
        '6NT' => 'E02003995',
        '6NU' => 'E02003995',
        '6NW' => 'E02003995',
        '6NX' => 'E02003995',
        '6NY' => 'E02003995',
        '6NZ' => 'E02003995',
        '6PA' => 'E02003995',
        '6PB' => 'E02003995',
        '6PD' => 'E02003995',
        '6PE' => 'E02003995',
        '6PF' => 'E02003995',
        '6PG' => 'E02003995',
        '6PH' => 'E02003995',
        '6PJ' => 'E02003995',
        '6PL' => 'E02003995',
        '6PN' => 'E02003995',
        '6PP' => 'E02003995',
        '6PQ' => 'E02003995',
        '6PR' => 'E02003995',
        '6PS' => 'E02003995',
        '6PT' => 'E02003995',
        '6PU' => 'E02003995',
        '6PW' => 'E02003995',
        '6PX' => 'E02003994',
        '6PY' => 'E02003994',
        '6PZ' => 'E02003994',
        '6QA' => 'E02003994',
        '6QB' => 'E02003994',
        '6QD' => 'E02003994',
        '6QE' => 'E02003994',
        '6QF' => 'E02003995',
        '6QG' => 'E02003995',
        '6QH' => 'E02003995',
        '6QJ' => 'E02003995',
        '6QL' => 'E02003999',
        '6QN' => 'E02003999',
        '6QP' => 'E02003999',
        '6QQ' => 'E02003995',
        '6QR' => 'E02003999',
        '6QS' => 'E02003995',
        '6QT' => 'E02003995',
        '6QU' => 'E02003999',
        '6QW' => 'E02003999',
        '6QX' => 'E02003999',
        '6QY' => 'E02003999',
        '6QZ' => 'E02003999',
        '6RA' => 'E02003991',
        '6RB' => 'E02003999',
        '6RD' => 'E02003999',
        '6RE' => 'E02003999',
        '6RF' => 'E02003999',
        '6RG' => 'E02003999',
        '6RH' => 'E02003995',
        '6RJ' => 'E02003999',
        '6RL' => 'E02003999',
        '6RN' => 'E02003999',
        '6RP' => 'E02003995',
        '6RQ' => 'E02003999',
        '6RR' => 'E02003995',
        '6RS' => 'E02003995',
        '6RT' => 'E02003999',
        '6RU' => 'E02003999',
        '6RW' => 'E02003995',
        '6RX' => 'E02003999',
        '6RY' => 'E02003999',
        '6RZ' => 'E02003999',
        '6SA' => 'E02003999',
        '6SB' => 'E02003999',
        '6SD' => 'E02003999',
        '6SE' => 'E02003999',
        '6SF' => 'E02003999',
        '6SG' => 'E02003999',
        '6SH' => 'E02003999',
        '6SJ' => 'E02003999',
        '6SL' => 'E02003999',
        '6SP' => 'E02003995',
        '6SQ' => 'E02003999',
        '6SS' => 'E02003995',
        '6ST' => 'E02003995',
        '6SU' => 'E02003999',
        '6SW' => 'E02003999',
        '6SX' => 'E02003995',
        '6SY' => 'E02003995',
        '6SZ' => 'E02003995',
        '6TD' => 'E02003999',
        '6TE' => 'E02003995',
        '6TF' => 'E02003999',
        '6TG' => 'E02003995',
        '6TH' => 'E02003999',
        '6TL' => 'E02003999',
        '6TN' => 'E02003999',
        '6TP' => 'E02003999',
        '6TQ' => 'E02003995',
        '6TR' => 'E02003999',
        '6TS' => 'E02003999',
        '6TT' => 'E02003999',
        '6TU' => 'E02003999',
        '6TW' => 'E02003999',
        '6WY' => 'E02003994',
        '6WZ' => 'E02003994',
        '6YA' => 'E02003994',
        '6YB' => 'E02003994',
        '7AA' => 'E02003992',
        '7AB' => 'E02003992',
        '7AD' => 'E02003994',
        '7AE' => 'E02003991',
        '7AF' => 'E02003994',
        '7AG' => 'E02003994',
        '7AH' => 'E02003994',
        '7AJ' => 'E02003994',
        '7AL' => 'E02003994',
        '7AN' => 'E02003994',
        '7AP' => 'E02003994',
        '7AQ' => 'E02003994',
        '7AR' => 'E02003994',
        '7AS' => 'E02003994',
        '7AT' => 'E02003994',
        '7AU' => 'E02003994',
        '7AW' => 'E02003994',
        '7AX' => 'E02003994',
        '7AY' => 'E02003994',
        '7AZ' => 'E02003994',
        '7BA' => 'E02003994',
        '7BB' => 'E02003994',
        '7BD' => 'E02003994',
        '7BE' => 'E02003994',
        '7BF' => 'E02003995',
        '7BG' => 'E02003994',
        '7BH' => 'E02003994',
        '7BJ' => 'E02003994',
        '7BL' => 'E02003994',
        '7BN' => 'E02003994',
        '7BP' => 'E02003994',
        '7BQ' => 'E02003994',
        '7BS' => 'E02003994',
        '7BT' => 'E02003994',
        '7BU' => 'E02003994',
        '7BW' => 'E02003994',
        '7BX' => 'E02003994',
        '7BY' => 'E02003994',
        '7BZ' => 'E02003994',
        '7DA' => 'E02003994',
        '7DB' => 'E02003995',
        '7DD' => 'E02003991',
        '7DE' => 'E02003994',
        '7DF' => 'E02003995',
        '7DG' => 'E02003994',
        '7DH' => 'E02003995',
        '7DJ' => 'E02003995',
        '7DL' => 'E02003994',
        '7DN' => 'E02003995',
        '7DP' => 'E02003995',
        '7DQ' => 'E02003994',
        '7DR' => 'E02003995',
        '7DS' => 'E02003995',
        '7DT' => 'E02003995',
        '7DU' => 'E02003995',
        '7DW' => 'E02003995',
        '7DX' => 'E02003995',
        '7DY' => 'E02003995',
        '7DZ' => 'E02003995',
        '7EA' => 'E02003995',
        '7EB' => 'E02003995',
        '7ED' => 'E02003995',
        '7EE' => 'E02003995',
        '7EF' => 'E02003995',
        '7EG' => 'E02003994',
        '7EH' => 'E02003994',
        '7EJ' => 'E02003995',
        '7EL' => 'E02003995',
        '7EN' => 'E02003995',
        '7EP' => 'E02003994',
        '7EQ' => 'E02003994',
        '7ER' => 'E02003995',
        '7ES' => 'E02003995',
        '7ET' => 'E02003995',
        '7EU' => 'E02003995',
        '7EW' => 'E02003995',
        '7EX' => 'E02003995',
        '7EY' => 'E02003995',
        '7EZ' => 'E02003995',
        '7FA' => 'E02003995',
        '7FB' => 'E02003995',
        '7FD' => 'E02003995',
        '7FE' => 'E02003995',
        '7FG' => 'E02003995',
        '7GA' => 'E02003994',
        '7GB' => 'E02003994',
        '7GD' => 'E02003995',
        '7GE' => 'E02003995',
        '7GF' => 'E02003995',
        '7GG' => 'E02003995',
        '7GH' => 'E02003995',
        '7GJ' => 'E02003995',
        '7GU' => 'E02003995',
        '7GW' => 'E02003995',
        '7GX' => 'E02003995',
        '7GY' => 'E02003995',
        '7GZ' => 'E02003995',
        '7HA' => 'E02003995',
        '7HB' => 'E02003995',
        '7HD' => 'E02003995',
        '7HE' => 'E02003995',
        '7HF' => 'E02003995',
        '7HG' => 'E02003995',
        '7HH' => 'E02003995',
        '7HJ' => 'E02003995',
        '7HL' => 'E02003995',
        '7HN' => 'E02003995',
        '7HP' => 'E02003995',
        '7HQ' => 'E02003995',
        '7HR' => 'E02003995',
        '7HS' => 'E02003995',
        '7HT' => 'E02003995',
        '7HU' => 'E02003995',
        '7HW' => 'E02003995',
        '7HX' => 'E02003994',
        '7HY' => 'E02003994',
        '7HZ' => 'E02003994',
        '7JA' => 'E02003994',
        '7JB' => 'E02003994',
        '7JD' => 'E02003994',
        '7JE' => 'E02003994',
        '7JF' => 'E02003994',
        '7JG' => 'E02003994',
        '7JH' => 'E02003994',
        '7JJ' => 'E02003994',
        '7JL' => 'E02003994',
        '7JN' => 'E02003994',
        '7JP' => 'E02003994',
        '7JQ' => 'E02003995',
        '7JR' => 'E02003994',
        '7JS' => 'E02003995',
        '7JT' => 'E02003995',
        '7JU' => 'E02003995',
        '7JW' => 'E02003994',
        '7JX' => 'E02003995',
        '7JY' => 'E02003995',
        '7JZ' => 'E02003995',
        '7LA' => 'E02003995',
        '7LB' => 'E02003995',
        '7LD' => 'E02003995',
        '7LE' => 'E02003995',
        '7LF' => 'E02003995',
        '7LG' => 'E02003995',
        '7LH' => 'E02003995',
        '7LJ' => 'E02003995',
        '7LL' => 'E02003994',
        '7LN' => 'E02003995',
        '7LP' => 'E02003995',
        '7LQ' => 'E02003995',
        '7LR' => 'E02003991',
        '7LS' => 'E02003991',
        '7LT' => 'E02003995',
        '7LU' => 'E02003991',
        '7LW' => 'E02003995',
        '7LX' => 'E02003991',
        '7LY' => 'E02003991',
        '7LZ' => 'E02003991',
        '7NA' => 'E02003991',
        '7NB' => 'E02003991',
        '7ND' => 'E02003991',
        '7NE' => 'E02003991',
        '7NF' => 'E02003991',
        '7NG' => 'E02003991',
        '7NH' => 'E02003994',
        '7NJ' => 'E02003991',
        '7NL' => 'E02003991',
        '7NN' => 'E02003991',
        '7NP' => 'E02003994',
        '7NQ' => 'E02003991',
        '7NR' => 'E02003991',
        '7NS' => 'E02003991',
        '7NT' => 'E02003994',
        '7NU' => 'E02003995',
        '7NW' => 'E02003995',
        '7NX' => 'E02003995',
        '7NY' => 'E02003995',
        '7NZ' => 'E02003994',
        '7PA' => 'E02003994',
        '7PB' => 'E02003994',
        '7PD' => 'E02003994',
        '7PE' => 'E02003994',
        '7PF' => 'E02003994',
        '7PG' => 'E02003994',
        '7PH' => 'E02003994',
        '7PJ' => 'E02003995',
        '7PL' => 'E02003994',
        '7PN' => 'E02003991',
        '7PP' => 'E02003995',
        '7PQ' => 'E02003994',
        '7PR' => 'E02003995',
        '7PS' => 'E02003991',
        '7PT' => 'E02003995',
        '7PU' => 'E02003995',
        '7PW' => 'E02003991',
        '7PX' => 'E02003995',
        '7PY' => 'E02003994',
        '7PZ' => 'E02003995',
        '7QA' => 'E02003995',
        '7QB' => 'E02003991',
        '7QD' => 'E02003995',
        '7QE' => 'E02003991',
        '7QF' => 'E02003995',
        '7QG' => 'E02003995',
        '7QH' => 'E02003991',
        '7QJ' => 'E02003991',
        '7QL' => 'E02003991',
        '7QN' => 'E02003991',
        '7QP' => 'E02003991',
        '7QQ' => 'E02003991',
        '7QR' => 'E02003991',
        '7QS' => 'E02003991',
        '7QT' => 'E02003991',
        '7QU' => 'E02003991',
        '7QW' => 'E02003991',
        '7QX' => 'E02003991',
        '7QY' => 'E02003991',
        '7QZ' => 'E02003995',
        '7RA' => 'E02003991',
        '7RB' => 'E02003991',
        '7RD' => 'E02003991',
        '7RE' => 'E02003991',
        '7RF' => 'E02003991',
        '7RG' => 'E02003991',
        '7RH' => 'E02003991',
        '7RJ' => 'E02003991',
        '7RL' => 'E02003991',
        '7RN' => 'E02003991',
        '7RP' => 'E02003995',
        '7RQ' => 'E02003995',
        '7RR' => 'E02003995',
        '7RS' => 'E02003995',
        '7RT' => 'E02003991',
        '7RU' => 'E02003991',
        '7RW' => 'E02003995',
        '7RX' => 'E02003991',
        '7RY' => 'E02003991',
        '7RZ' => 'E02003995',
        '7SA' => 'E02003995',
        '7SB' => 'E02003991',
        '7SD' => 'E02003991',
        '7SE' => 'E02003991',
        '7SF' => 'E02003991',
        '7SG' => 'E02003991',
        '7SH' => 'E02003991',
        '7SJ' => 'E02003991',
        '7SL' => 'E02003991',
        '7SN' => 'E02003991',
        '7SP' => 'E02003991',
        '7SQ' => 'E02003991',
        '7SR' => 'E02003991',
        '7SS' => 'E02003991',
        '7ST' => 'E02003991',
        '7SU' => 'E02003991',
        '7SW' => 'E02003991',
        '7SX' => 'E02003991',
        '7SY' => 'E02003991',
        '7SZ' => 'E02003995',
        '7TA' => 'E02003995',
        '7TB' => 'E02003995',
        '7TD' => 'E02003991',
        '7TE' => 'E02003991',
        '7TF' => 'E02003991',
        '7TG' => 'E02003991',
        '7TH' => 'E02003995',
        '7TJ' => 'E02003991',
        '7TL' => 'E02003991',
        '7TN' => 'E02003999',
        '7TP' => 'E02003999',
        '7TQ' => 'E02003991',
        '7TR' => 'E02003999',
        '7TS' => 'E02003995',
        '7TU' => 'E02003991',
        '7WA' => 'E02003994',
        '7WB' => 'E02003994',
        '7WD' => 'E02003994',
        '7WE' => 'E02003994',
        '7XB' => 'E02003991',
        '7XD' => 'E02003991',
        '7XE' => 'E02003991',
        '7XF' => 'E02003991',
        '7XG' => 'E02003991',
        '7XH' => 'E02003991',
        '7XJ' => 'E02003991',
        '7XL' => 'E02003991',
        '7XN' => 'E02003991',
        '7XQ' => 'E02003991',
        '7XS' => 'E02003991',
        '7XW' => 'E02003991',
        '7XX' => 'E02003991',
        '7XY' => 'E02003991',
        '7YA' => 'E02003994',
        '7YB' => 'E02003994',
        '7YD' => 'E02003994',
        '7YE' => 'E02003994',
        '8JT' => 'E02003992',
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
