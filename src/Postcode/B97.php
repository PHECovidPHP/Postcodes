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
final class B97
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '4AA' => 'E02006724',
        '4AB' => 'E02006724',
        '4AD' => 'E02006724',
        '4AE' => 'E02006721',
        '4AF' => 'E02006726',
        '4AH' => 'E02006726',
        '4AJ' => 'E02006724',
        '4AL' => 'E02006724',
        '4AN' => 'E02006724',
        '4AP' => 'E02006726',
        '4AT' => 'E02006721',
        '4AU' => 'E02006726',
        '4AW' => 'E02006724',
        '4AX' => 'E02006726',
        '4AY' => 'E02006724',
        '4AZ' => 'E02006724',
        '4BA' => 'E02006724',
        '4BB' => 'E02006724',
        '4BD' => 'E02006724',
        '4BE' => 'E02006724',
        '4BG' => 'E02006724',
        '4BH' => 'E02006724',
        '4BJ' => 'E02006724',
        '4BL' => 'E02006724',
        '4BN' => 'E02006724',
        '4BP' => 'E02006724',
        '4BQ' => 'E02006726',
        '4BS' => 'E02006724',
        '4BT' => 'E02006724',
        '4BU' => 'E02006724',
        '4BW' => 'E02006724',
        '4BX' => 'E02006724',
        '4BY' => 'E02006721',
        '4BZ' => 'E02006721',
        '4DA' => 'E02006721',
        '4DB' => 'E02006721',
        '4DD' => 'E02006721',
        '4DE' => 'E02006721',
        '4DF' => 'E02006721',
        '4DG' => 'E02006721',
        '4DH' => 'E02006724',
        '4DJ' => 'E02006724',
        '4DL' => 'E02006724',
        '4DN' => 'E02006721',
        '4DP' => 'E02006724',
        '4DQ' => 'E02006724',
        '4DR' => 'E02006721',
        '4DS' => 'E02006724',
        '4DT' => 'E02006726',
        '4DU' => 'E02006724',
        '4DW' => 'E02006721',
        '4DX' => 'E02006724',
        '4DY' => 'E02006724',
        '4DZ' => 'E02006721',
        '4EA' => 'E02006724',
        '4EB' => 'E02006724',
        '4ED' => 'E02006724',
        '4EE' => 'E02006726',
        '4EF' => 'E02006726',
        '4EG' => 'E02006724',
        '4EH' => 'E02006724',
        '4EJ' => 'E02006726',
        '4EL' => 'E02006726',
        '4EN' => 'E02006726',
        '4EP' => 'E02006724',
        '4EQ' => 'E02006726',
        '4ER' => 'E02006721',
        '4ES' => 'E02006724',
        '4ET' => 'E02006724',
        '4EU' => 'E02006724',
        '4EW' => 'E02006724',
        '4EX' => 'E02006724',
        '4EY' => 'E02006724',
        '4EZ' => 'E02006724',
        '4HA' => 'E02006724',
        '4HB' => 'E02006724',
        '4HD' => 'E02006724',
        '4HF' => 'E02006721',
        '4HH' => 'E02006724',
        '4HJ' => 'E02006724',
        '4HL' => 'E02006724',
        '4HN' => 'E02006724',
        '4HP' => 'E02006724',
        '4HQ' => 'E02006721',
        '4HR' => 'E02006724',
        '4HS' => 'E02006724',
        '4HT' => 'E02006721',
        '4HU' => 'E02006724',
        '4HW' => 'E02006724',
        '4HX' => 'E02006724',
        '4HY' => 'E02006724',
        '4HZ' => 'E02006726',
        '4JA' => 'E02006724',
        '4JB' => 'E02006724',
        '4JD' => 'E02006726',
        '4JE' => 'E02006726',
        '4JF' => 'E02006726',
        '4JG' => 'E02006726',
        '4JH' => 'E02006726',
        '4JJ' => 'E02006726',
        '4JL' => 'E02006726',
        '4JN' => 'E02006726',
        '4JP' => 'E02006721',
        '4JQ' => 'E02006726',
        '4JR' => 'E02006726',
        '4JS' => 'E02006726',
        '4JT' => 'E02006726',
        '4JU' => 'E02006726',
        '4JW' => 'E02006726',
        '4JX' => 'E02006731',
        '4JY' => 'E02006721',
        '4JZ' => 'E02006721',
        '4LA' => 'E02006731',
        '4LB' => 'E02006731',
        '4LD' => 'E02006731',
        '4LE' => 'E02006728',
        '4LF' => 'E02006728',
        '4LG' => 'E02006731',
        '4LH' => 'E02006728',
        '4LJ' => 'E02006728',
        '4LL' => 'E02006731',
        '4LN' => 'E02006721',
        '4LP' => 'E02006731',
        '4LQ' => 'E02006731',
        '4LR' => 'E02006728',
        '4LS' => 'E02006726',
        '4LT' => 'E02006728',
        '4LU' => 'E02006728',
        '4LW' => 'E02006728',
        '4LX' => 'E02006728',
        '4LY' => 'E02006728',
        '4LZ' => 'E02006728',
        '4NA' => 'E02006728',
        '4NB' => 'E02006728',
        '4ND' => 'E02006728',
        '4NE' => 'E02006728',
        '4NF' => 'E02006728',
        '4NG' => 'E02006728',
        '4NH' => 'E02006728',
        '4NJ' => 'E02006728',
        '4NL' => 'E02006728',
        '4NN' => 'E02006728',
        '4NP' => 'E02006728',
        '4NQ' => 'E02006728',
        '4NR' => 'E02006728',
        '4NS' => 'E02006731',
        '4NT' => 'E02006726',
        '4NU' => 'E02006726',
        '4NW' => 'E02006721',
        '4NX' => 'E02006728',
        '4NY' => 'E02006726',
        '4NZ' => 'E02006726',
        '4PA' => 'E02006726',
        '4PB' => 'E02006726',
        '4PD' => 'E02006726',
        '4PE' => 'E02006726',
        '4PF' => 'E02006726',
        '4PG' => 'E02006726',
        '4PH' => 'E02006726',
        '4PJ' => 'E02006726',
        '4PL' => 'E02006726',
        '4PN' => 'E02006726',
        '4PP' => 'E02006726',
        '4PQ' => 'E02006726',
        '4PR' => 'E02006726',
        '4PS' => 'E02006726',
        '4PT' => 'E02006726',
        '4PU' => 'E02006726',
        '4PW' => 'E02006726',
        '4PX' => 'E02006726',
        '4PY' => 'E02006726',
        '4PZ' => 'E02006726',
        '4QA' => 'E02006721',
        '4QB' => 'E02006726',
        '4QN' => 'E02006724',
        '4QP' => 'E02006724',
        '4QR' => 'E02006724',
        '4QS' => 'E02006724',
        '4QT' => 'E02006724',
        '4QU' => 'E02006724',
        '4QW' => 'E02006724',
        '4QX' => 'E02006724',
        '4QY' => 'E02006726',
        '4QZ' => 'E02006726',
        '4RA' => 'E02006724',
        '4RB' => 'E02006724',
        '4RD' => 'E02006726',
        '4RE' => 'E02006726',
        '4RF' => 'E02006726',
        '4RG' => 'E02006726',
        '4RH' => 'E02006726',
        '4RJ' => 'E02006726',
        '4RL' => 'E02006726',
        '4RN' => 'E02006726',
        '4RP' => 'E02006726',
        '4RQ' => 'E02006726',
        '4RR' => 'E02006726',
        '4RS' => 'E02006726',
        '4RT' => 'E02006726',
        '4RU' => 'E02006726',
        '4RW' => 'E02006726',
        '4RX' => 'E02006726',
        '4RY' => 'E02006726',
        '4RZ' => 'E02006726',
        '4SA' => 'E02006726',
        '4SB' => 'E02006721',
        '4SD' => 'E02006726',
        '4SE' => 'E02006721',
        '4SF' => 'E02006726',
        '4SG' => 'E02006726',
        '4SH' => 'E02006723',
        '4SJ' => 'E02006723',
        '4SL' => 'E02006723',
        '4SN' => 'E02006723',
        '4SP' => 'E02006726',
        '4SQ' => 'E02006726',
        '4SR' => 'E02006726',
        '4SS' => 'E02006721',
        '4ST' => 'E02006721',
        '4SU' => 'E02006721',
        '4SW' => 'E02006723',
        '4SZ' => 'E02006721',
        '4WA' => 'E02006721',
        '4WB' => 'E02006721',
        '4WD' => 'E02006721',
        '4WE' => 'E02006721',
        '4WQ' => 'E02006723',
        '4YP' => 'E02006724',
        '4YR' => 'E02006724',
        '4YS' => 'E02006724',
        '4YX' => 'E02006724',
        '4ZY' => 'E02006724',
        '5AA' => 'E02006728',
        '5AB' => 'E02006731',
        '5AD' => 'E02006731',
        '5AE' => 'E02006728',
        '5AF' => 'E02006728',
        '5AG' => 'E02006732',
        '5AH' => 'E02006728',
        '5AJ' => 'E02006728',
        '5AL' => 'E02006728',
        '5AN' => 'E02006728',
        '5AP' => 'E02006728',
        '5AQ' => 'E02006728',
        '5AR' => 'E02006728',
        '5AS' => 'E02006728',
        '5AT' => 'E02006728',
        '5AU' => 'E02006728',
        '5AW' => 'E02006728',
        '5AX' => 'E02006728',
        '5AY' => 'E02006728',
        '5AZ' => 'E02006728',
        '5BA' => 'E02006728',
        '5BB' => 'E02006731',
        '5BD' => 'E02006731',
        '5BE' => 'E02006731',
        '5BF' => 'E02006732',
        '5BG' => 'E02006731',
        '5BH' => 'E02006731',
        '5BJ' => 'E02006732',
        '5BL' => 'E02006732',
        '5BN' => 'E02006728',
        '5BP' => 'E02006731',
        '5BQ' => 'E02006731',
        '5BS' => 'E02006731',
        '5BT' => 'E02006728',
        '5BU' => 'E02006728',
        '5BW' => 'E02006728',
        '5BX' => 'E02006728',
        '5BY' => 'E02006728',
        '5BZ' => 'E02006728',
        '5DA' => 'E02006731',
        '5DB' => 'E02006731',
        '5DD' => 'E02006731',
        '5DE' => 'E02006732',
        '5DF' => 'E02006732',
        '5DG' => 'E02006732',
        '5DH' => 'E02006731',
        '5DJ' => 'E02006732',
        '5DL' => 'E02006732',
        '5DN' => 'E02006731',
        '5DP' => 'E02006732',
        '5DQ' => 'E02006732',
        '5DR' => 'E02006732',
        '5DS' => 'E02006732',
        '5DT' => 'E02006731',
        '5DU' => 'E02006731',
        '5DW' => 'E02006731',
        '5DX' => 'E02006731',
        '5DY' => 'E02006728',
        '5DZ' => 'E02006721',
        '5EA' => 'E02006731',
        '5EB' => 'E02006731',
        '5ED' => 'E02006731',
        '5EE' => 'E02006728',
        '5EF' => 'E02006721',
        '5EG' => 'E02006731',
        '5EH' => 'E02006731',
        '5EJ' => 'E02006731',
        '5EL' => 'E02006731',
        '5EN' => 'E02006731',
        '5EP' => 'E02006732',
        '5EQ' => 'E02006731',
        '5ER' => 'E02006731',
        '5ES' => 'E02006731',
        '5ET' => 'E02006731',
        '5EU' => 'E02006731',
        '5EW' => 'E02006732',
        '5EX' => 'E02006731',
        '5EY' => 'E02006728',
        '5EZ' => 'E02006728',
        '5FA' => 'E02006732',
        '5FD' => 'E02006728',
        '5FE' => 'E02006733',
        '5FF' => 'E02006733',
        '5FG' => 'E02006721',
        '5FH' => 'E02006732',
        '5FJ' => 'E02006732',
        '5FL' => 'E02006728',
        '5FN' => 'E02006732',
        '5FP' => 'E02006728',
        '5FQ' => 'E02006721',
        '5FR' => 'E02006728',
        '5FS' => 'E02006731',
        '5FT' => 'E02006721',
        '5FW' => 'E02006721',
        '5FX' => 'E02006721',
        '5FY' => 'E02006721',
        '5FZ' => 'E02006721',
        '5GA' => 'E02006728',
        '5GB' => 'E02006721',
        '5GD' => 'E02006721',
        '5GE' => 'E02006728',
        '5GF' => 'E02006721',
        '5GG' => 'E02006732',
        '5GH' => 'E02006721',
        '5GJ' => 'E02006728',
        '5GL' => 'E02006733',
        '5GN' => 'E02006732',
        '5GP' => 'E02006733',
        '5GQ' => 'E02006721',
        '5GR' => 'E02006709',
        '5GS' => 'E02006721',
        '5GT' => 'E02006728',
        '5GU' => 'E02006728',
        '5GW' => 'E02006733',
        '5GX' => 'E02006721',
        '5GY' => 'E02006733',
        '5GZ' => 'E02006728',
        '5HA' => 'E02006732',
        '5HB' => 'E02006732',
        '5HD' => 'E02006732',
        '5HE' => 'E02006732',
        '5HF' => 'E02006732',
        '5HG' => 'E02006732',
        '5HH' => 'E02006732',
        '5HJ' => 'E02006732',
        '5HL' => 'E02006732',
        '5HN' => 'E02006732',
        '5HP' => 'E02006732',
        '5HQ' => 'E02006721',
        '5HR' => 'E02006732',
        '5HS' => 'E02006732',
        '5HT' => 'E02006732',
        '5HU' => 'E02006732',
        '5HW' => 'E02006732',
        '5HX' => 'E02006732',
        '5HY' => 'E02006732',
        '5HZ' => 'E02006732',
        '5JA' => 'E02006732',
        '5JB' => 'E02006732',
        '5JD' => 'E02006732',
        '5JE' => 'E02006732',
        '5JF' => 'E02006732',
        '5JG' => 'E02006732',
        '5JH' => 'E02006732',
        '5JJ' => 'E02006732',
        '5JL' => 'E02006732',
        '5JN' => 'E02006732',
        '5JP' => 'E02006732',
        '5JQ' => 'E02006732',
        '5JR' => 'E02006733',
        '5JS' => 'E02006504',
        '5JT' => 'E02006504',
        '5JU' => 'E02006732',
        '5JW' => 'E02006732',
        '5JX' => 'E02006732',
        '5JY' => 'E02006721',
        '5JZ' => 'E02006732',
        '5LA' => 'E02006732',
        '5LB' => 'E02006732',
        '5LD' => 'E02006732',
        '5LE' => 'E02006732',
        '5LF' => 'E02006732',
        '5LG' => 'E02006732',
        '5LH' => 'E02006733',
        '5LJ' => 'E02006733',
        '5LL' => 'E02006733',
        '5LN' => 'E02006732',
        '5LP' => 'E02006733',
        '5LQ' => 'E02006732',
        '5LR' => 'E02006732',
        '5LS' => 'E02006733',
        '5LT' => 'E02006733',
        '5LU' => 'E02006733',
        '5LW' => 'E02006732',
        '5LX' => 'E02006733',
        '5LY' => 'E02006732',
        '5LZ' => 'E02006732',
        '5NA' => 'E02006733',
        '5NB' => 'E02006732',
        '5ND' => 'E02006732',
        '5NE' => 'E02006732',
        '5NF' => 'E02006733',
        '5NG' => 'E02006732',
        '5NH' => 'E02006732',
        '5NJ' => 'E02006732',
        '5NL' => 'E02006732',
        '5NN' => 'E02006732',
        '5NP' => 'E02006732',
        '5NQ' => 'E02006732',
        '5NR' => 'E02006732',
        '5NS' => 'E02006732',
        '5NT' => 'E02006732',
        '5NU' => 'E02006732',
        '5NW' => 'E02006732',
        '5NX' => 'E02006732',
        '5NY' => 'E02006732',
        '5NZ' => 'E02006732',
        '5PA' => 'E02006732',
        '5PB' => 'E02006728',
        '5PD' => 'E02006728',
        '5PE' => 'E02006728',
        '5PF' => 'E02006728',
        '5PG' => 'E02006728',
        '5PH' => 'E02006728',
        '5PJ' => 'E02006728',
        '5PL' => 'E02006728',
        '5PN' => 'E02006728',
        '5PP' => 'E02006733',
        '5PQ' => 'E02006728',
        '5PR' => 'E02006733',
        '5PS' => 'E02006733',
        '5PT' => 'E02006732',
        '5PU' => 'E02006732',
        '5PW' => 'E02006728',
        '5PX' => 'E02006732',
        '5PY' => 'E02006732',
        '5PZ' => 'E02006732',
        '5QA' => 'E02006732',
        '5QB' => 'E02006732',
        '5QD' => 'E02006733',
        '5QE' => 'E02006732',
        '5QF' => 'E02006728',
        '5QG' => 'E02006733',
        '5QH' => 'E02006733',
        '5QJ' => 'E02006733',
        '5QL' => 'E02006733',
        '5QN' => 'E02006732',
        '5QP' => 'E02006733',
        '5QQ' => 'E02006728',
        '5QR' => 'E02006733',
        '5QS' => 'E02006733',
        '5QT' => 'E02006733',
        '5QU' => 'E02006733',
        '5QW' => 'E02006732',
        '5QX' => 'E02006728',
        '5QY' => 'E02006728',
        '5QZ' => 'E02006728',
        '5RA' => 'E02006728',
        '5RB' => 'E02006728',
        '5RD' => 'E02006728',
        '5RE' => 'E02006728',
        '5RF' => 'E02006721',
        '5RG' => 'E02006728',
        '5RH' => 'E02006728',
        '5RJ' => 'E02006728',
        '5RL' => 'E02006728',
        '5RN' => 'E02006728',
        '5RP' => 'E02006728',
        '5RQ' => 'E02006732',
        '5RR' => 'E02006728',
        '5RS' => 'E02006728',
        '5RT' => 'E02006728',
        '5RU' => 'E02006728',
        '5RW' => 'E02006728',
        '5RX' => 'E02006728',
        '5RY' => 'E02006728',
        '5RZ' => 'E02006728',
        '5SA' => 'E02006728',
        '5SB' => 'E02006728',
        '5SD' => 'E02006728',
        '5SE' => 'E02006728',
        '5SF' => 'E02006728',
        '5SG' => 'E02006728',
        '5SH' => 'E02006728',
        '5SJ' => 'E02006728',
        '5SL' => 'E02006728',
        '5SN' => 'E02006728',
        '5SP' => 'E02006709',
        '5SQ' => 'E02006728',
        '5SR' => 'E02006709',
        '5SS' => 'E02006709',
        '5ST' => 'E02006709',
        '5SU' => 'E02006709',
        '5SW' => 'E02006728',
        '5SX' => 'E02006709',
        '5SY' => 'E02006728',
        '5SZ' => 'E02006732',
        '5TA' => 'E02006709',
        '5TB' => 'E02006709',
        '5TD' => 'E02006709',
        '5TE' => 'E02006728',
        '5TF' => 'E02006728',
        '5TG' => 'E02006728',
        '5TH' => 'E02006733',
        '5TJ' => 'E02006733',
        '5TL' => 'E02006733',
        '5TN' => 'E02006732',
        '5TP' => 'E02006733',
        '5TQ' => 'E02006728',
        '5TR' => 'E02006733',
        '5TS' => 'E02006733',
        '5TT' => 'E02006733',
        '5TU' => 'E02006733',
        '5TW' => 'E02006733',
        '5TX' => 'E02006733',
        '5TY' => 'E02006721',
        '5TZ' => 'E02006733',
        '5UA' => 'E02006733',
        '5UB' => 'E02006733',
        '5UD' => 'E02006733',
        '5UE' => 'E02006732',
        '5UF' => 'E02006731',
        '5UG' => 'E02006728',
        '5UH' => 'E02006733',
        '5UJ' => 'E02006733',
        '5UL' => 'E02006728',
        '5UN' => 'E02006733',
        '5UP' => 'E02006733',
        '5UQ' => 'E02006728',
        '5UR' => 'E02006733',
        '5US' => 'E02006721',
        '5UT' => 'E02006733',
        '5UU' => 'E02006733',
        '5UW' => 'E02006733',
        '5UX' => 'E02006728',
        '5UY' => 'E02006728',
        '5UZ' => 'E02006732',
        '5WA' => 'E02006732',
        '5WB' => 'E02006732',
        '5WD' => 'E02006709',
        '5WE' => 'E02006721',
        '5WF' => 'E02006731',
        '5WG' => 'E02006732',
        '5WH' => 'E02006721',
        '5WJ' => 'E02006721',
        '5WL' => 'E02006728',
        '5WN' => 'E02006728',
        '5WP' => 'E02006728',
        '5WQ' => 'E02006732',
        '5WR' => 'E02006728',
        '5WS' => 'E02006723',
        '5WT' => 'E02006721',
        '5WU' => 'E02006732',
        '5WW' => 'E02006728',
        '5WX' => 'E02006721',
        '5WY' => 'E02006721',
        '5WZ' => 'E02006732',
        '5XA' => 'E02006728',
        '5XB' => 'E02006728',
        '5XD' => 'E02006728',
        '5XE' => 'E02006728',
        '5XF' => 'E02006728',
        '5XG' => 'E02006728',
        '5XH' => 'E02006728',
        '5XJ' => 'E02006728',
        '5XL' => 'E02006733',
        '5XN' => 'E02006732',
        '5XP' => 'E02006733',
        '5XQ' => 'E02006728',
        '5XR' => 'E02006732',
        '5XS' => 'E02006733',
        '5XT' => 'E02006733',
        '5XU' => 'E02006733',
        '5XW' => 'E02006732',
        '5XX' => 'E02006733',
        '5XY' => 'E02006733',
        '5XZ' => 'E02006728',
        '5YA' => 'E02006728',
        '5YB' => 'E02006728',
        '5YD' => 'E02006728',
        '5YE' => 'E02006732',
        '5YF' => 'E02006732',
        '5YG' => 'E02006732',
        '5YH' => 'E02006732',
        '5YJ' => 'E02006732',
        '5YL' => 'E02006732',
        '5YN' => 'E02006721',
        '5YP' => 'E02006732',
        '5YQ' => 'E02006732',
        '5YR' => 'E02006732',
        '5YS' => 'E02006732',
        '5YT' => 'E02006732',
        '5YU' => 'E02006732',
        '5YW' => 'E02006732',
        '5YX' => 'E02006732',
        '5YY' => 'E02006732',
        '5YZ' => 'E02006732',
        '5ZA' => 'E02006721',
        '5ZB' => 'E02006721',
        '5ZD' => 'E02006721',
        '5ZE' => 'E02006721',
        '5ZF' => 'E02006721',
        '5ZG' => 'E02006721',
        '5ZH' => 'E02006721',
        '5ZJ' => 'E02006721',
        '5ZL' => 'E02006721',
        '5ZN' => 'E02006721',
        '5ZP' => 'E02006721',
        '5ZQ' => 'E02006721',
        '5ZR' => 'E02006721',
        '5ZS' => 'E02006721',
        '5ZT' => 'E02006721',
        '5ZU' => 'E02006721',
        '5ZW' => 'E02006721',
        '5ZX' => 'E02006721',
        '5ZY' => 'E02006721',
        '6AA' => 'E02006721',
        '6AB' => 'E02006721',
        '6AD' => 'E02006721',
        '6AE' => 'E02006724',
        '6AF' => 'E02006709',
        '6AG' => 'E02006724',
        '6AH' => 'E02006724',
        '6AJ' => 'E02006721',
        '6AL' => 'E02006721',
        '6AN' => 'E02006724',
        '6AP' => 'E02006721',
        '6AQ' => 'E02006721',
        '6AR' => 'E02006724',
        '6AS' => 'E02006724',
        '6AT' => 'E02006723',
        '6AU' => 'E02006724',
        '6AW' => 'E02006723',
        '6AX' => 'E02006721',
        '6AY' => 'E02006724',
        '6AZ' => 'E02006723',
        '6BA' => 'E02006723',
        '6BB' => 'E02006723',
        '6BD' => 'E02006724',
        '6BE' => 'E02006723',
        '6BF' => 'E02006723',
        '6BG' => 'E02006724',
        '6BH' => 'E02006724',
        '6BJ' => 'E02006721',
        '6BL' => 'E02006724',
        '6BN' => 'E02006721',
        '6BP' => 'E02006723',
        '6BQ' => 'E02006723',
        '6BT' => 'E02006723',
        '6BU' => 'E02006723',
        '6BW' => 'E02006724',
        '6BX' => 'E02006724',
        '6BY' => 'E02006721',
        '6BZ' => 'E02006723',
        '6DA' => 'E02006724',
        '6DB' => 'E02006723',
        '6DD' => 'E02006723',
        '6DE' => 'E02006724',
        '6DF' => 'E02006721',
        '6DG' => 'E02006723',
        '6DH' => 'E02006723',
        '6DJ' => 'E02006724',
        '6DL' => 'E02006724',
        '6DN' => 'E02006723',
        '6DP' => 'E02006721',
        '6DR' => 'E02006724',
        '6DX' => 'E02006721',
        '6DY' => 'E02006724',
        '6EA' => 'E02006721',
        '6EB' => 'E02006721',
        '6ED' => 'E02006721',
        '6EE' => 'E02006721',
        '6EF' => 'E02006721',
        '6EG' => 'E02006721',
        '6EH' => 'E02006721',
        '6EJ' => 'E02006721',
        '6EL' => 'E02006721',
        '6EN' => 'E02006721',
        '6EP' => 'E02006721',
        '6EQ' => 'E02006723',
        '6ER' => 'E02006721',
        '6ES' => 'E02006721',
        '6ET' => 'E02006726',
        '6EU' => 'E02006726',
        '6EW' => 'E02006721',
        '6EX' => 'E02006721',
        '6EZ' => 'E02006726',
        '6GA' => 'E02006726',
        '6GB' => 'E02006726',
        '6GD' => 'E02006726',
        '6GE' => 'E02006726',
        '6GF' => 'E02006726',
        '6GG' => 'E02006726',
        '6GJ' => 'E02006726',
        '6GQ' => 'E02006726',
        '6GT' => 'E02006723',
        '6GU' => 'E02006723',
        '6GW' => 'E02006723',
        '6GX' => 'E02006723',
        '6GY' => 'E02006723',
        '6GZ' => 'E02006723',
        '6HA' => 'E02006726',
        '6HB' => 'E02006723',
        '6HD' => 'E02006726',
        '6HE' => 'E02006723',
        '6HF' => 'E02006723',
        '6HG' => 'E02006723',
        '6HH' => 'E02006723',
        '6HJ' => 'E02006723',
        '6HL' => 'E02006723',
        '6HN' => 'E02006723',
        '6HP' => 'E02006723',
        '6HQ' => 'E02006723',
        '6HR' => 'E02006723',
        '6HS' => 'E02006723',
        '6HT' => 'E02006723',
        '6HU' => 'E02006723',
        '6HW' => 'E02006723',
        '6HX' => 'E02006723',
        '6HY' => 'E02006723',
        '6HZ' => 'E02006723',
        '6JA' => 'E02006723',
        '6JB' => 'E02006723',
        '6JD' => 'E02006721',
        '6JE' => 'E02006723',
        '6JF' => 'E02006723',
        '6JG' => 'E02006723',
        '6JH' => 'E02006723',
        '6JJ' => 'E02006723',
        '6JL' => 'E02006723',
        '6JN' => 'E02006723',
        '6JP' => 'E02006723',
        '6JQ' => 'E02006723',
        '6JR' => 'E02006723',
        '6JS' => 'E02006723',
        '6JT' => 'E02006723',
        '6JU' => 'E02006723',
        '6JW' => 'E02006723',
        '6JX' => 'E02006723',
        '6JY' => 'E02006723',
        '6JZ' => 'E02006723',
        '6LA' => 'E02006723',
        '6LB' => 'E02006723',
        '6LD' => 'E02006723',
        '6LE' => 'E02006723',
        '6LF' => 'E02006723',
        '6LG' => 'E02006721',
        '6LH' => 'E02006721',
        '6LJ' => 'E02006723',
        '6LL' => 'E02006723',
        '6LN' => 'E02006723',
        '6LP' => 'E02006723',
        '6LQ' => 'E02006723',
        '6LR' => 'E02006723',
        '6LS' => 'E02006723',
        '6LT' => 'E02006723',
        '6LU' => 'E02006723',
        '6LW' => 'E02006723',
        '6LX' => 'E02006723',
        '6LY' => 'E02006723',
        '6LZ' => 'E02006723',
        '6NA' => 'E02006723',
        '6NB' => 'E02006723',
        '6ND' => 'E02006723',
        '6NE' => 'E02006723',
        '6NF' => 'E02006723',
        '6NG' => 'E02006723',
        '6NH' => 'E02006723',
        '6NJ' => 'E02006723',
        '6NL' => 'E02006723',
        '6NN' => 'E02006723',
        '6NP' => 'E02006723',
        '6NQ' => 'E02006723',
        '6NR' => 'E02006723',
        '6NS' => 'E02006723',
        '6NT' => 'E02006723',
        '6NU' => 'E02006723',
        '6NW' => 'E02006723',
        '6NX' => 'E02006721',
        '6NY' => 'E02006723',
        '6NZ' => 'E02006723',
        '6PA' => 'E02006723',
        '6PB' => 'E02006723',
        '6PD' => 'E02006723',
        '6PE' => 'E02006723',
        '6PF' => 'E02006723',
        '6PG' => 'E02006723',
        '6PH' => 'E02006723',
        '6PJ' => 'E02006723',
        '6PN' => 'E02006728',
        '6PQ' => 'E02006723',
        '6PT' => 'E02006728',
        '6PU' => 'E02006728',
        '6PW' => 'E02006728',
        '6PX' => 'E02006709',
        '6PY' => 'E02006728',
        '6PZ' => 'E02006723',
        '6QA' => 'E02006728',
        '6QB' => 'E02006723',
        '6QD' => 'E02006709',
        '6QE' => 'E02006709',
        '6QF' => 'E02006709',
        '6QG' => 'E02006728',
        '6QH' => 'E02006709',
        '6QJ' => 'E02006709',
        '6QL' => 'E02006709',
        '6QN' => 'E02006723',
        '6QP' => 'E02006709',
        '6QQ' => 'E02006709',
        '6QR' => 'E02006709',
        '6QS' => 'E02006709',
        '6QT' => 'E02006709',
        '6QU' => 'E02006723',
        '6QW' => 'E02006709',
        '6QX' => 'E02006723',
        '6QY' => 'E02006709',
        '6QZ' => 'E02006721',
        '6RA' => 'E02006709',
        '6RB' => 'E02006709',
        '6RD' => 'E02006709',
        '6RE' => 'E02006721',
        '6RF' => 'E02006721',
        '6RG' => 'E02006709',
        '6RH' => 'E02006704',
        '6RJ' => 'E02006704',
        '6RL' => 'E02006704',
        '6RN' => 'E02006709',
        '6RP' => 'E02006704',
        '6RQ' => 'E02006709',
        '6RR' => 'E02006721',
        '6RS' => 'E02006709',
        '6RT' => 'E02006721',
        '6RU' => 'E02006721',
        '6RW' => 'E02006721',
        '6RX' => 'E02006721',
        '6RY' => 'E02006721',
        '6RZ' => 'E02006721',
        '6SA' => 'E02006723',
        '6SB' => 'E02006723',
        '6SD' => 'E02006723',
        '6SE' => 'E02006723',
        '6SF' => 'E02006723',
        '6SG' => 'E02006723',
        '6SH' => 'E02006723',
        '6SJ' => 'E02006723',
        '6SL' => 'E02006723',
        '6SN' => 'E02006723',
        '6SP' => 'E02006723',
        '6SQ' => 'E02006721',
        '6SR' => 'E02006723',
        '6SS' => 'E02006723',
        '6ST' => 'E02006723',
        '6SU' => 'E02006723',
        '6SW' => 'E02006723',
        '6SX' => 'E02006723',
        '6SY' => 'E02006723',
        '6SZ' => 'E02006723',
        '6TA' => 'E02006721',
        '6TB' => 'E02006723',
        '6TD' => 'E02006723',
        '6TE' => 'E02006723',
        '6TF' => 'E02006723',
        '6TG' => 'E02006723',
        '6TH' => 'E02006723',
        '6TJ' => 'E02006723',
        '6TL' => 'E02006723',
        '6TN' => 'E02006723',
        '6TP' => 'E02006723',
        '6TQ' => 'E02006723',
        '6TR' => 'E02006723',
        '6TS' => 'E02006723',
        '6TT' => 'E02006723',
        '6TU' => 'E02006723',
        '6TW' => 'E02006723',
        '6TX' => 'E02006723',
        '6TY' => 'E02006723',
        '6TZ' => 'E02006723',
        '6UA' => 'E02006723',
        '6UB' => 'E02006723',
        '6UD' => 'E02006723',
        '6UE' => 'E02006721',
        '6UF' => 'E02006723',
        '6UG' => 'E02006723',
        '6UH' => 'E02006723',
        '6UJ' => 'E02006723',
        '6UL' => 'E02006723',
        '6UN' => 'E02006723',
        '6WA' => 'E02006723',
        '6WB' => 'E02006721',
        '6WD' => 'E02006721',
        '6WE' => 'E02006723',
        '6WF' => 'E02006723',
        '6WG' => 'E02006723',
        '6WL' => 'E02006721',
        '6WR' => 'E02006721',
        '6XR' => 'E02006721',
        '6XS' => 'E02006723',
        '6YR' => 'E02006721',
        '6YX' => 'E02006721',
        '6ZF' => 'E02006721',
        '6ZQ' => 'E02006723',
        '6ZR' => 'E02006721',
        '6ZT' => 'E02006721',
        '6ZU' => 'E02006721',
        '6ZW' => 'E02006721',
        '6ZX' => 'E02006721',
        '6ZY' => 'E02006723',
        '9AA' => 'E02006721',
        '9AB' => 'E02006721',
        '9AD' => 'E02006721',
        '9AE' => 'E02006724',
        '9AF' => 'E02006721',
        '9AG' => 'E02006724',
        '9AH' => 'E02006721',
        '9AJ' => 'E02006721',
        '9AL' => 'E02006721',
        '9AN' => 'E02006721',
        '9AP' => 'E02006721',
        '9AQ' => 'E02006721',
        '9AR' => 'E02006721',
        '9AS' => 'E02006721',
        '9AT' => 'E02006721',
        '9AU' => 'E02006721',
        '9AW' => 'E02006721',
        '9AX' => 'E02006721',
        '9AY' => 'E02006721',
        '9AZ' => 'E02006721',
        '9BA' => 'E02006721',
        '9BB' => 'E02006721',
        '9BD' => 'E02006721',
        '9BE' => 'E02006721',
        '9BF' => 'E02006721',
        '9BG' => 'E02006721',
        '9BH' => 'E02006721',
        '9BL' => 'E02006721',
        '9BN' => 'E02006721',
        '9BP' => 'E02006721',
        '9BQ' => 'E02006721',
        '9BR' => 'E02006721',
        '9BS' => 'E02006721',
        '9BT' => 'E02006721',
        '9BU' => 'E02006721',
        '9BW' => 'E02006721',
        '9BX' => 'E02006721',
        '9BY' => 'E02006721',
        '9BZ' => 'E02006721',
        '9DA' => 'E02006721',
        '9DB' => 'E02006721',
        '9DD' => 'E02006721',
        '9DE' => 'E02006721',
        '9DF' => 'E02006721',
        '9DG' => 'E02006721',
        '9DH' => 'E02006721',
        '9DJ' => 'E02006721',
        '9DL' => 'E02006721',
        '9DN' => 'E02006721',
        '9DP' => 'E02006721',
        '9DQ' => 'E02006721',
        '9DR' => 'E02006721',
        '9DS' => 'E02006721',
        '9DT' => 'E02006721',
        '9DU' => 'E02006721',
        '9DW' => 'E02006721',
        '9DX' => 'E02006721',
        '9DY' => 'E02006721',
        '9DZ' => 'E02006721',
        '9EA' => 'E02006721',
        '9EB' => 'E02006721',
        '9ED' => 'E02006721',
        '9EE' => 'E02006721',
        '9EG' => 'E02006721',
        '9EH' => 'E02006721',
        '9EJ' => 'E02006721',
        '9EL' => 'E02006721',
        '9EN' => 'E02006721',
        '9EP' => 'E02006721',
        '9EQ' => 'E02006721',
        '9ER' => 'E02006721',
        '9ET' => 'E02006721',
        '9EU' => 'E02006721',
        '9EW' => 'E02006721',
        '9EX' => 'E02006721',
        '9EY' => 'E02006721',
        '9EZ' => 'E02006721',
        '9FA' => 'E02006721',
        '9FB' => 'E02006721',
        '9FD' => 'E02006721',
        '9FE' => 'E02006721',
        '9FF' => 'E02006721',
        '9FH' => 'E02006721',
        '9FJ' => 'E02006721',
        '9FL' => 'E02006721',
        '9FN' => 'E02006721',
        '9FP' => 'E02006721',
        '9FQ' => 'E02006721',
        '9FR' => 'E02006721',
        '9FS' => 'E02006721',
        '9FT' => 'E02006721',
        '9FU' => 'E02006721',
        '9FW' => 'E02006721',
        '9FX' => 'E02006721',
        '9FY' => 'E02006721',
        '9FZ' => 'E02006721',
        '9GA' => 'E02006721',
        '9GB' => 'E02006721',
        '9GD' => 'E02006721',
        '9GE' => 'E02006721',
        '9GF' => 'E02006721',
        '9GG' => 'E02006721',
        '9GH' => 'E02006721',
        '9GJ' => 'E02006721',
        '9GL' => 'E02006721',
        '9GN' => 'E02006721',
        '9GP' => 'E02006721',
        '9GQ' => 'E02006724',
        '9GR' => 'E02006721',
        '9GS' => 'E02006721',
        '9GT' => 'E02006721',
        '9GU' => 'E02006724',
        '9GW' => 'E02006721',
        '9GX' => 'E02006721',
        '9GY' => 'E02006721',
        '9GZ' => 'E02006721',
        '9HA' => 'E02006721',
        '9HB' => 'E02006721',
        '9HD' => 'E02006721',
        '9HE' => 'E02006721',
        '9HF' => 'E02006721',
        '9HG' => 'E02006721',
        '9HH' => 'E02006721',
        '9HJ' => 'E02006721',
        '9HL' => 'E02006721',
        '9HN' => 'E02006721',
        '9HP' => 'E02006721',
        '9HQ' => 'E02006721',
        '9HR' => 'E02006721',
        '9HS' => 'E02006721',
        '9HT' => 'E02006721',
        '9HU' => 'E02006721',
        '9HW' => 'E02006721',
        '9HX' => 'E02006721',
        '9HY' => 'E02006721',
        '9HZ' => 'E02006721',
        '9JA' => 'E02006721',
        '9JB' => 'E02006721',
        '9JD' => 'E02006721',
        '9JE' => 'E02006721',
        '9JF' => 'E02006721',
        '9JG' => 'E02006721',
        '9JH' => 'E02006721',
        '9JJ' => 'E02006721',
        '9JL' => 'E02006721',
        '9JN' => 'E02006721',
        '9JP' => 'E02006721',
        '9JQ' => 'E02006721',
        '9JR' => 'E02006721',
        '9JS' => 'E02006721',
        '9JT' => 'E02006721',
        '9JU' => 'E02006721',
        '9JW' => 'E02006721',
        '9JX' => 'E02006721',
        '9JY' => 'E02006721',
        '9JZ' => 'E02006721',
        '9LA' => 'E02006721',
        '9LB' => 'E02006721',
        '9LD' => 'E02006721',
        '9LE' => 'E02006721',
        '9LF' => 'E02006721',
        '9LG' => 'E02006721',
        '9LH' => 'E02006721',
        '9LJ' => 'E02006721',
        '9LL' => 'E02006721',
        '9LN' => 'E02006721',
        '9LP' => 'E02006721',
        '9LQ' => 'E02006721',
        '9LR' => 'E02006721',
        '9LS' => 'E02006721',
        '9LT' => 'E02006721',
        '9LU' => 'E02006721',
        '9LW' => 'E02006721',
        '9LX' => 'E02006721',
        '9LY' => 'E02006721',
        '9LZ' => 'E02006721',
        '9NA' => 'E02006721',
        '9NB' => 'E02006721',
        '9ND' => 'E02006721',
        '9NE' => 'E02006721',
        '9NF' => 'E02006721',
        '9NG' => 'E02006721',
        '9NH' => 'E02006721',
        '9NJ' => 'E02006721',
        '9NL' => 'E02006721',
        '9NN' => 'E02006721',
        '9NP' => 'E02006721',
        '9NQ' => 'E02006721',
        '9NR' => 'E02006721',
        '9NS' => 'E02006721',
        '9NT' => 'E02006721',
        '9NU' => 'E02006721',
        '9NW' => 'E02006721',
        '9NX' => 'E02006721',
        '9NY' => 'E02006721',
        '9PA' => 'E02006721',
        '9PB' => 'E02006721',
        '9PD' => 'E02006721',
        '9PE' => 'E02006721',
        '9PF' => 'E02006721',
        '9PG' => 'E02006721',
        '9PH' => 'E02006721',
        '9PJ' => 'E02006721',
        '9PL' => 'E02006721',
        '9PN' => 'E02006721',
        '9PP' => 'E02006721',
        '9PR' => 'E02006721',
        '9PS' => 'E02006721',
        '9PT' => 'E02006721',
        '9PU' => 'E02006721',
        '9PW' => 'E02006721',
        '9PX' => 'E02006721',
        '9PY' => 'E02006721',
        '9PZ' => 'E02006721',
        '9QA' => 'E02006721',
        '9QB' => 'E02006721',
        '9QD' => 'E02006721',
        '9QE' => 'E02006721',
        '9QF' => 'E02006721',
        '9QG' => 'E02006721',
        '9QH' => 'E02006721',
        '9QJ' => 'E02006721',
        '9QL' => 'E02006721',
        '9QN' => 'E02006721',
        '9QP' => 'E02006721',
        '9QQ' => 'E02006721',
        '9QR' => 'E02006721',
        '9QS' => 'E02006721',
        '9QT' => 'E02006721',
        '9QU' => 'E02006721',
        '9QW' => 'E02006721',
        '9QX' => 'E02006724',
        '9QY' => 'E02006721',
        '9QZ' => 'E02006721',
        '9RA' => 'E02006721',
        '9RB' => 'E02006721',
        '9RD' => 'E02006721',
        '9RF' => 'E02006721',
        '9RG' => 'E02006721',
        '9RH' => 'E02006721',
        '9RL' => 'E02006721',
        '9RN' => 'E02006721',
        '9RP' => 'E02006721',
        '9RQ' => 'E02006721',
        '9RR' => 'E02006721',
        '9RS' => 'E02006721',
        '9RT' => 'E02006721',
        '9RU' => 'E02006721',
        '9RW' => 'E02006721',
        '9RX' => 'E02006721',
        '9RY' => 'E02006721',
        '9SA' => 'E02006724',
        '9SB' => 'E02006724',
        '9SD' => 'E02006724',
        '9SE' => 'E02006724',
        '9SF' => 'E02006724',
        '9SG' => 'E02006724',
        '9SH' => 'E02006724',
        '9SJ' => 'E02006724',
        '9SL' => 'E02006724',
        '9SN' => 'E02006724',
        '9SP' => 'E02006724',
        '9SQ' => 'E02006724',
        '9SR' => 'E02006724',
        '9SS' => 'E02006724',
        '9ST' => 'E02006724',
        '9SU' => 'E02006724',
        '9SW' => 'E02006724',
        '9SX' => 'E02006724',
        '9SY' => 'E02006724',
        '9SZ' => 'E02006724',
        '9TA' => 'E02006724',
        '9TB' => 'E02006724',
        '9TD' => 'E02006724',
        '9TE' => 'E02006724',
        '9TF' => 'E02006724',
        '9TG' => 'E02006724',
        '9TH' => 'E02006724',
        '9TJ' => 'E02006724',
        '9TL' => 'E02006724',
        '9TN' => 'E02006724',
        '9TP' => 'E02006724',
        '9TQ' => 'E02006724',
        '9TR' => 'E02006724',
        '9TS' => 'E02006724',
        '9TT' => 'E02006724',
        '9TU' => 'E02006724',
        '9TW' => 'E02006724',
        '9TX' => 'E02006724',
        '9TY' => 'E02006724',
        '9TZ' => 'E02006724',
        '9UA' => 'E02006724',
        '9UB' => 'E02006724',
        '9UD' => 'E02006724',
        '9UE' => 'E02006724',
        '9UF' => 'E02006721',
        '9UG' => 'E02006721',
        '9UH' => 'E02006721',
        '9UJ' => 'E02006721',
        '9UL' => 'E02006721',
        '9UP' => 'E02006721',
        '9UQ' => 'E02006721',
        '9UR' => 'E02006721',
        '9US' => 'E02006721',
        '9UT' => 'E02006721',
        '9UW' => 'E02006724',
        '9UX' => 'E02006724',
        '9UY' => 'E02006724',
        '9UZ' => 'E02006724',
        '9WA' => 'E02006721',
        '9WB' => 'E02006721',
        '9WD' => 'E02006721',
        '9WE' => 'E02006721',
        '9WG' => 'E02006721',
        '9WH' => 'E02006721',
        '9WJ' => 'E02006721',
        '9WL' => 'E02006721',
        '9WN' => 'E02006721',
        '9WP' => 'E02006721',
        '9WQ' => 'E02006721',
        '9WR' => 'E02006721',
        '9WT' => 'E02006721',
        '9WX' => 'E02006721',
        '9WY' => 'E02006721',
        '9WZ' => 'E02006721',
        '9XA' => 'E02006721',
        '9YN' => 'E02006721',
        '9ZA' => 'E02006721',
        '9ZB' => 'E02006721',
        '9ZF' => 'E02006721',
        '9ZG' => 'E02006721',
        '9ZN' => 'E02006721',
        '9ZP' => 'E02006721',
        '9ZR' => 'E02006724',
        '9ZT' => 'E02006721',
        '9ZU' => 'E02006724',
        '9ZW' => 'E02006721',
        '9ZY' => 'E02006721',
        '9ZZ' => 'E02006724',
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
