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
final class CA12
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '4AA' => 'E02003976',
        '4AB' => 'E02003976',
        '4AD' => 'E02003976',
        '4AE' => 'E02004012',
        '4AF' => 'E02003976',
        '4AG' => 'E02003976',
        '4AH' => 'E02003976',
        '4AJ' => 'E02003976',
        '4AL' => 'E02004012',
        '4AN' => 'E02003976',
        '4AP' => 'E02003976',
        '4AQ' => 'E02003976',
        '4AR' => 'E02003976',
        '4AS' => 'E02003976',
        '4AT' => 'E02003976',
        '4AW' => 'E02003976',
        '4AY' => 'E02003976',
        '4AZ' => 'E02003976',
        '4BA' => 'E02003976',
        '4BB' => 'E02003976',
        '4BD' => 'E02003976',
        '4BE' => 'E02003976',
        '4BG' => 'E02003976',
        '4BL' => 'E02003976',
        '4BN' => 'E02003976',
        '4BP' => 'E02003976',
        '4BQ' => 'E02003976',
        '4BR' => 'E02003976',
        '4BU' => 'E02003976',
        '4BW' => 'E02003976',
        '4BX' => 'E02003976',
        '4BY' => 'E02003976',
        '4BZ' => 'E02003976',
        '4DA' => 'E02003976',
        '4DB' => 'E02003976',
        '4DD' => 'E02003976',
        '4DE' => 'E02003976',
        '4DF' => 'E02003976',
        '4DG' => 'E02003976',
        '4DH' => 'E02003976',
        '4DJ' => 'E02003976',
        '4DL' => 'E02003976',
        '4DN' => 'E02003976',
        '4DP' => 'E02003976',
        '4DQ' => 'E02003976',
        '4DR' => 'E02003976',
        '4DS' => 'E02003976',
        '4DT' => 'E02003976',
        '4DU' => 'E02003976',
        '4DW' => 'E02003976',
        '4DX' => 'E02003976',
        '4DY' => 'E02003976',
        '4DZ' => 'E02003976',
        '4EA' => 'E02003976',
        '4EB' => 'E02003976',
        '4ED' => 'E02003976',
        '4EE' => 'E02003976',
        '4EF' => 'E02003976',
        '4EG' => 'E02003976',
        '4EH' => 'E02003976',
        '4EJ' => 'E02003976',
        '4EL' => 'E02003976',
        '4EN' => 'E02003976',
        '4EP' => 'E02003976',
        '4EQ' => 'E02003976',
        '4ER' => 'E02003976',
        '4ES' => 'E02003976',
        '4ET' => 'E02003976',
        '4EU' => 'E02003976',
        '4EW' => 'E02003976',
        '4EX' => 'E02003976',
        '4GA' => 'E02003976',
        '4GB' => 'E02003966',
        '4GD' => 'E02003966',
        '4GE' => 'E02003976',
        '4GF' => 'E02003976',
        '4GG' => 'E02003976',
        '4GH' => 'E02003976',
        '4GJ' => 'E02003976',
        '4GL' => 'E02003976',
        '4GN' => 'E02003976',
        '4HA' => 'E02003976',
        '4HB' => 'E02003976',
        '4HD' => 'E02003976',
        '4HE' => 'E02003976',
        '4HF' => 'E02003976',
        '4HG' => 'E02003976',
        '4HH' => 'E02003976',
        '4HJ' => 'E02003976',
        '4HL' => 'E02003976',
        '4HN' => 'E02003976',
        '4HP' => 'E02003976',
        '4HQ' => 'E02003976',
        '4HR' => 'E02003976',
        '4HS' => 'E02003976',
        '4HT' => 'E02003976',
        '4HU' => 'E02003976',
        '4HW' => 'E02003976',
        '4HX' => 'E02003976',
        '4HY' => 'E02003976',
        '4HZ' => 'E02003976',
        '4JA' => 'E02003976',
        '4JB' => 'E02003976',
        '4JD' => 'E02003976',
        '4JE' => 'E02003976',
        '4JF' => 'E02003976',
        '4JG' => 'E02003976',
        '4JH' => 'E02003976',
        '4JJ' => 'E02003976',
        '4JL' => 'E02003976',
        '4JN' => 'E02003976',
        '4JP' => 'E02003976',
        '4JQ' => 'E02003976',
        '4JR' => 'E02003976',
        '4JS' => 'E02003976',
        '4JT' => 'E02003976',
        '4JU' => 'E02003976',
        '4JW' => 'E02003976',
        '4JX' => 'E02003976',
        '4JY' => 'E02003976',
        '4JZ' => 'E02003976',
        '4LA' => 'E02003976',
        '4LB' => 'E02003976',
        '4LD' => 'E02003976',
        '4LE' => 'E02003976',
        '4LF' => 'E02003976',
        '4LG' => 'E02003976',
        '4LH' => 'E02003976',
        '4LJ' => 'E02003976',
        '4LL' => 'E02003976',
        '4LN' => 'E02003976',
        '4LP' => 'E02003976',
        '4LQ' => 'E02003976',
        '4LR' => 'E02003976',
        '4LS' => 'E02003976',
        '4LT' => 'E02003976',
        '4LU' => 'E02003976',
        '4LW' => 'E02003976',
        '4LX' => 'E02003976',
        '4LY' => 'E02003976',
        '4LZ' => 'E02003966',
        '4NA' => 'E02003976',
        '4NB' => 'E02003976',
        '4ND' => 'E02003976',
        '4NE' => 'E02003976',
        '4NF' => 'E02003976',
        '4NG' => 'E02003976',
        '4NH' => 'E02003976',
        '4NJ' => 'E02003976',
        '4NL' => 'E02003966',
        '4NN' => 'E02003976',
        '4NP' => 'E02003976',
        '4NQ' => 'E02003976',
        '4NR' => 'E02003976',
        '4NS' => 'E02003966',
        '4NT' => 'E02003966',
        '4NU' => 'E02003966',
        '4NW' => 'E02003976',
        '4NX' => 'E02003976',
        '4NY' => 'E02003976',
        '4NZ' => 'E02003976',
        '4PA' => 'E02003976',
        '4PB' => 'E02003976',
        '4PD' => 'E02003976',
        '4PE' => 'E02003976',
        '4PF' => 'E02003966',
        '4PG' => 'E02003966',
        '4PH' => 'E02003966',
        '4PJ' => 'E02003966',
        '4PL' => 'E02003966',
        '4PN' => 'E02003966',
        '4PP' => 'E02003966',
        '4PQ' => 'E02003966',
        '4PS' => 'E02003966',
        '4PT' => 'E02003966',
        '4PU' => 'E02003966',
        '4PW' => 'E02003966',
        '4PY' => 'E02003966',
        '4PZ' => 'E02003966',
        '4QA' => 'E02003966',
        '4QD' => 'E02003966',
        '4QE' => 'E02003966',
        '4QG' => 'E02003966',
        '4QH' => 'E02003966',
        '4QJ' => 'E02003966',
        '4QL' => 'E02003966',
        '4QP' => 'E02003966',
        '4QR' => 'E02003966',
        '4QS' => 'E02003966',
        '4QT' => 'E02003966',
        '4QW' => 'E02003966',
        '4QX' => 'E02003966',
        '4QY' => 'E02003966',
        '4QZ' => 'E02003966',
        '4RA' => 'E02003966',
        '4RB' => 'E02003976',
        '4RD' => 'E02003966',
        '4RE' => 'E02003966',
        '4RG' => 'E02003966',
        '4RJ' => 'E02003966',
        '4RL' => 'E02003966',
        '4RN' => 'E02003976',
        '4RQ' => 'E02003966',
        '4RR' => 'E02003976',
        '4RS' => 'E02003976',
        '4RT' => 'E02004012',
        '4RX' => 'E02004012',
        '4RY' => 'E02004012',
        '4RZ' => 'E02004012',
        '4SA' => 'E02004012',
        '4SB' => 'E02004012',
        '4SD' => 'E02004012',
        '4SE' => 'E02004012',
        '4SF' => 'E02004012',
        '4SG' => 'E02004012',
        '4SH' => 'E02004012',
        '4SJ' => 'E02004012',
        '4SL' => 'E02004012',
        '4SN' => 'E02004012',
        '4SP' => 'E02004012',
        '4SQ' => 'E02004012',
        '4SR' => 'E02004012',
        '4SS' => 'E02004012',
        '4ST' => 'E02004012',
        '4SU' => 'E02004012',
        '4SW' => 'E02004012',
        '4SX' => 'E02004012',
        '4SY' => 'E02004012',
        '4SZ' => 'E02004012',
        '4TA' => 'E02004012',
        '4TB' => 'E02004012',
        '4TD' => 'E02003976',
        '4TE' => 'E02003976',
        '4TF' => 'E02003976',
        '4TG' => 'E02003976',
        '4TH' => 'E02003976',
        '4TJ' => 'E02003976',
        '4TL' => 'E02003976',
        '4TN' => 'E02003976',
        '4TP' => 'E02003976',
        '4TQ' => 'E02003976',
        '4TR' => 'E02003976',
        '4TS' => 'E02003976',
        '4TT' => 'E02003976',
        '4TU' => 'E02003976',
        '4TW' => 'E02003976',
        '4TX' => 'E02003976',
        '4TY' => 'E02003976',
        '4TZ' => 'E02004012',
        '4UB' => 'E02003976',
        '4UR' => 'E02003976',
        '4WW' => 'E02003976',
        '4WX' => 'E02003976',
        '4WY' => 'E02003976',
        '4WZ' => 'E02003976',
        '4YA' => 'E02003976',
        '4YB' => 'E02003976',
        '4YD' => 'E02003976',
        '4YE' => 'E02003976',
        '4YF' => 'E02003976',
        '4ZB' => 'E02003976',
        '5AA' => 'E02003976',
        '5AB' => 'E02003976',
        '5AD' => 'E02003976',
        '5AE' => 'E02003976',
        '5AF' => 'E02003976',
        '5AG' => 'E02003976',
        '5AH' => 'E02003976',
        '5AJ' => 'E02003976',
        '5AL' => 'E02003976',
        '5AN' => 'E02003976',
        '5AP' => 'E02003976',
        '5AQ' => 'E02003976',
        '5AR' => 'E02003976',
        '5AS' => 'E02003976',
        '5AT' => 'E02003976',
        '5AU' => 'E02003976',
        '5AW' => 'E02003976',
        '5AX' => 'E02003976',
        '5AY' => 'E02003976',
        '5AZ' => 'E02003976',
        '5BA' => 'E02003976',
        '5BB' => 'E02003976',
        '5BD' => 'E02003976',
        '5BE' => 'E02003976',
        '5BF' => 'E02003976',
        '5BG' => 'E02003976',
        '5BH' => 'E02003976',
        '5BJ' => 'E02003976',
        '5BL' => 'E02003976',
        '5BN' => 'E02003976',
        '5BP' => 'E02003976',
        '5BQ' => 'E02003976',
        '5BS' => 'E02003976',
        '5BT' => 'E02003976',
        '5BU' => 'E02003976',
        '5BW' => 'E02003976',
        '5BX' => 'E02003976',
        '5BY' => 'E02003976',
        '5BZ' => 'E02003976',
        '5DA' => 'E02003976',
        '5DB' => 'E02003976',
        '5DD' => 'E02003976',
        '5DE' => 'E02003976',
        '5DF' => 'E02003976',
        '5DG' => 'E02003976',
        '5DH' => 'E02003976',
        '5DJ' => 'E02003976',
        '5DL' => 'E02003976',
        '5DN' => 'E02003976',
        '5DP' => 'E02003976',
        '5DQ' => 'E02003976',
        '5DR' => 'E02003976',
        '5DS' => 'E02003976',
        '5DT' => 'E02003976',
        '5DU' => 'E02003976',
        '5DW' => 'E02003976',
        '5DX' => 'E02003976',
        '5DY' => 'E02003976',
        '5DZ' => 'E02003976',
        '5EA' => 'E02003976',
        '5EB' => 'E02003976',
        '5ED' => 'E02003976',
        '5EE' => 'E02003976',
        '5EF' => 'E02003976',
        '5EG' => 'E02003976',
        '5EH' => 'E02003976',
        '5EJ' => 'E02003976',
        '5EL' => 'E02003976',
        '5EN' => 'E02003976',
        '5EP' => 'E02003976',
        '5EQ' => 'E02003976',
        '5ER' => 'E02003976',
        '5ES' => 'E02003976',
        '5ET' => 'E02003976',
        '5EU' => 'E02003976',
        '5EW' => 'E02003976',
        '5EX' => 'E02003976',
        '5EY' => 'E02003976',
        '5EZ' => 'E02003976',
        '5FA' => 'E02003976',
        '5FB' => 'E02003976',
        '5FE' => 'E02003976',
        '5GA' => 'E02003976',
        '5GB' => 'E02003976',
        '5GD' => 'E02003976',
        '5HA' => 'E02003976',
        '5HB' => 'E02003976',
        '5HD' => 'E02003976',
        '5HE' => 'E02003976',
        '5HF' => 'E02003976',
        '5HG' => 'E02003976',
        '5HH' => 'E02003976',
        '5HJ' => 'E02003976',
        '5HN' => 'E02003976',
        '5HP' => 'E02003976',
        '5HQ' => 'E02003976',
        '5HR' => 'E02003976',
        '5HT' => 'E02003976',
        '5HU' => 'E02003976',
        '5HW' => 'E02003976',
        '5HY' => 'E02003976',
        '5HZ' => 'E02003976',
        '5JA' => 'E02003976',
        '5JB' => 'E02003976',
        '5JD' => 'E02003976',
        '5JE' => 'E02003976',
        '5JF' => 'E02003976',
        '5JG' => 'E02003976',
        '5JH' => 'E02003976',
        '5JJ' => 'E02003976',
        '5JL' => 'E02003976',
        '5JN' => 'E02003976',
        '5JP' => 'E02003976',
        '5JQ' => 'E02003976',
        '5JR' => 'E02003976',
        '5JS' => 'E02003976',
        '5JT' => 'E02003976',
        '5JU' => 'E02003976',
        '5JW' => 'E02003976',
        '5JX' => 'E02003976',
        '5JY' => 'E02003976',
        '5JZ' => 'E02003976',
        '5LB' => 'E02003976',
        '5LD' => 'E02003976',
        '5LE' => 'E02003976',
        '5LF' => 'E02003976',
        '5LG' => 'E02003976',
        '5LH' => 'E02003976',
        '5LJ' => 'E02003976',
        '5LL' => 'E02003976',
        '5LN' => 'E02003976',
        '5LP' => 'E02003976',
        '5LQ' => 'E02003976',
        '5LR' => 'E02003976',
        '5LS' => 'E02003976',
        '5LU' => 'E02003976',
        '5LW' => 'E02003976',
        '5LX' => 'E02003976',
        '5LY' => 'E02003976',
        '5LZ' => 'E02003976',
        '5NA' => 'E02003976',
        '5NB' => 'E02003976',
        '5ND' => 'E02003976',
        '5NE' => 'E02003976',
        '5NF' => 'E02003976',
        '5NG' => 'E02003976',
        '5NH' => 'E02003976',
        '5NJ' => 'E02003976',
        '5NL' => 'E02003976',
        '5NN' => 'E02003976',
        '5NP' => 'E02003976',
        '5NQ' => 'E02003976',
        '5NR' => 'E02003976',
        '5NS' => 'E02003976',
        '5NT' => 'E02003976',
        '5NU' => 'E02003976',
        '5NW' => 'E02003976',
        '5NX' => 'E02003976',
        '5NY' => 'E02003976',
        '5NZ' => 'E02003976',
        '5PA' => 'E02003976',
        '5PB' => 'E02003976',
        '5PD' => 'E02003976',
        '5PE' => 'E02003976',
        '5PF' => 'E02003976',
        '5PG' => 'E02003976',
        '5PH' => 'E02003976',
        '5PJ' => 'E02003976',
        '5PL' => 'E02003976',
        '5PN' => 'E02003976',
        '5PP' => 'E02003976',
        '5PQ' => 'E02003976',
        '5PR' => 'E02003976',
        '5PW' => 'E02003976',
        '5PY' => 'E02003976',
        '5PZ' => 'E02003976',
        '5QA' => 'E02003976',
        '5QB' => 'E02003976',
        '5QD' => 'E02003976',
        '5QE' => 'E02003976',
        '5QF' => 'E02003976',
        '5QG' => 'E02003976',
        '5QN' => 'E02003976',
        '5QQ' => 'E02003976',
        '5QU' => 'E02003976',
        '5RA' => 'E02003976',
        '5RB' => 'E02003976',
        '5RD' => 'E02003976',
        '5RE' => 'E02003976',
        '5RF' => 'E02003976',
        '5RG' => 'E02003976',
        '5RH' => 'E02003976',
        '5RJ' => 'E02003976',
        '5RN' => 'E02003976',
        '5RP' => 'E02003976',
        '5RQ' => 'E02003976',
        '5RS' => 'E02003976',
        '5RT' => 'E02003976',
        '5RU' => 'E02003976',
        '5RW' => 'E02003976',
        '5RX' => 'E02003976',
        '5RY' => 'E02003976',
        '5RZ' => 'E02003976',
        '5SA' => 'E02003976',
        '5SE' => 'E02003976',
        '5SF' => 'E02003976',
        '5SG' => 'E02003976',
        '5SH' => 'E02003976',
        '5SJ' => 'E02003976',
        '5SL' => 'E02003976',
        '5SP' => 'E02003976',
        '5SQ' => 'E02003976',
        '5SR' => 'E02003976',
        '5ST' => 'E02003976',
        '5SU' => 'E02003976',
        '5SX' => 'E02003976',
        '5SY' => 'E02003976',
        '5SZ' => 'E02003976',
        '5TB' => 'E02003976',
        '5TD' => 'E02003976',
        '5TE' => 'E02003976',
        '5TF' => 'E02003976',
        '5TG' => 'E02003976',
        '5TH' => 'E02003976',
        '5TJ' => 'E02003976',
        '5TL' => 'E02003976',
        '5TN' => 'E02003976',
        '5TP' => 'E02003976',
        '5TQ' => 'E02003976',
        '5TR' => 'E02003976',
        '5TS' => 'E02003976',
        '5TT' => 'E02003976',
        '5TU' => 'E02003976',
        '5TW' => 'E02003976',
        '5TX' => 'E02003976',
        '5TY' => 'E02003976',
        '5TZ' => 'E02003976',
        '5UA' => 'E02003976',
        '5UB' => 'E02003976',
        '5UE' => 'E02003976',
        '5UF' => 'E02003976',
        '5UG' => 'E02003976',
        '5UN' => 'E02003976',
        '5UP' => 'E02003976',
        '5UQ' => 'E02003976',
        '5UR' => 'E02003976',
        '5UU' => 'E02003976',
        '5UW' => 'E02003976',
        '5UX' => 'E02003976',
        '5UY' => 'E02003976',
        '5UZ' => 'E02003976',
        '5WA' => 'E02003976',
        '5WB' => 'E02003976',
        '5WD' => 'E02003976',
        '5WE' => 'E02003976',
        '5WT' => 'E02003976',
        '5WU' => 'E02003976',
        '5WW' => 'E02003976',
        '5WX' => 'E02003976',
        '5WY' => 'E02003976',
        '5WZ' => 'E02003976',
        '5XA' => 'E02003976',
        '5XB' => 'E02003976',
        '5XD' => 'E02003976',
        '5XE' => 'E02003976',
        '5XG' => 'E02003976',
        '5XH' => 'E02003976',
        '5XJ' => 'E02003976',
        '5XL' => 'E02003976',
        '5XN' => 'E02003976',
        '5XP' => 'E02003976',
        '5XQ' => 'E02003976',
        '5XW' => 'E02003976',
        '5YB' => 'E02003976',
        '5YY' => 'E02003976',
        '9AA' => 'E02003976',
        '9AD' => 'E02003976',
        '9AE' => 'E02003976',
        '9AF' => 'E02003976',
        '9AG' => 'E02003976',
        '9AH' => 'E02003976',
        '9AJ' => 'E02003976',
        '9AL' => 'E02003976',
        '9AN' => 'E02003976',
        '9AP' => 'E02003976',
        '9AQ' => 'E02003976',
        '9AR' => 'E02003976',
        '9AS' => 'E02003976',
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
