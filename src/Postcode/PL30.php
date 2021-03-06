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
final class PL30
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '3AA' => 'E02003940',
        '3AB' => 'E02003937',
        '3AD' => 'E02003937',
        '3AE' => 'E02003937',
        '3AF' => 'E02003940',
        '3AG' => 'E02003937',
        '3AH' => 'E02003937',
        '3AJ' => 'E02003937',
        '3AL' => 'E02003937',
        '3AN' => 'E02003937',
        '3AP' => 'E02003937',
        '3AQ' => 'E02003937',
        '3AR' => 'E02003937',
        '3AS' => 'E02003940',
        '3AT' => 'E02003940',
        '3AU' => 'E02003940',
        '3AW' => 'E02003937',
        '3AX' => 'E02003940',
        '3AY' => 'E02003940',
        '3AZ' => 'E02003933',
        '3BA' => 'E02003940',
        '3BB' => 'E02003940',
        '3BD' => 'E02003940',
        '3BE' => 'E02003940',
        '3BG' => 'E02003940',
        '3BH' => 'E02003940',
        '3BJ' => 'E02003940',
        '3BL' => 'E02003940',
        '3BN' => 'E02003940',
        '3BP' => 'E02003937',
        '3BQ' => 'E02003940',
        '3BR' => 'E02003937',
        '3BS' => 'E02003940',
        '3BT' => 'E02003937',
        '3BU' => 'E02003940',
        '3BW' => 'E02003940',
        '3BX' => 'E02003940',
        '3BY' => 'E02003940',
        '3BZ' => 'E02003940',
        '3DA' => 'E02003940',
        '3DB' => 'E02003940',
        '3DD' => 'E02003940',
        '3DE' => 'E02003940',
        '3DF' => 'E02003940',
        '3DG' => 'E02003940',
        '3DH' => 'E02003937',
        '3DJ' => 'E02003940',
        '3DL' => 'E02003937',
        '3DN' => 'E02003937',
        '3DP' => 'E02003937',
        '3DQ' => 'E02003937',
        '3DR' => 'E02003937',
        '3DS' => 'E02003937',
        '3DT' => 'E02003940',
        '3DU' => 'E02003937',
        '3DW' => 'E02003937',
        '3DX' => 'E02003937',
        '3DY' => 'E02003937',
        '3DZ' => 'E02003937',
        '3EA' => 'E02003937',
        '3EB' => 'E02003937',
        '3ED' => 'E02003937',
        '3EE' => 'E02003937',
        '3EF' => 'E02003937',
        '3EG' => 'E02003937',
        '3EH' => 'E02003937',
        '3EJ' => 'E02003937',
        '3EL' => 'E02003937',
        '3EN' => 'E02003937',
        '3EP' => 'E02003937',
        '3EQ' => 'E02003937',
        '3ER' => 'E02003937',
        '3ES' => 'E02003937',
        '3ET' => 'E02003937',
        '3EU' => 'E02003937',
        '3EW' => 'E02003937',
        '3EX' => 'E02003937',
        '3EY' => 'E02003940',
        '3EZ' => 'E02003933',
        '3FA' => 'E02003940',
        '3FB' => 'E02003933',
        '3FD' => 'E02003940',
        '3FE' => 'E02003940',
        '3FG' => 'E02003933',
        '3HA' => 'E02003937',
        '3HB' => 'E02003937',
        '3HD' => 'E02003937',
        '3HE' => 'E02003937',
        '3HF' => 'E02003937',
        '3HG' => 'E02003937',
        '3HH' => 'E02003937',
        '3HJ' => 'E02003937',
        '3HL' => 'E02003937',
        '3HN' => 'E02003937',
        '3HP' => 'E02003937',
        '3HQ' => 'E02003937',
        '3HR' => 'E02003937',
        '3HT' => 'E02003937',
        '3HU' => 'E02003937',
        '3HW' => 'E02003937',
        '3HX' => 'E02003937',
        '3HY' => 'E02003937',
        '3HZ' => 'E02003937',
        '3JA' => 'E02003933',
        '3JB' => 'E02003933',
        '3JD' => 'E02003933',
        '3JE' => 'E02003934',
        '3JF' => 'E02003933',
        '3JG' => 'E02003933',
        '3JH' => 'E02003934',
        '3JJ' => 'E02003933',
        '3JL' => 'E02003933',
        '3JN' => 'E02003933',
        '3JP' => 'E02003933',
        '3JQ' => 'E02003934',
        '3JR' => 'E02003933',
        '3JS' => 'E02003933',
        '3JT' => 'E02003933',
        '3JU' => 'E02003933',
        '3JW' => 'E02003933',
        '3JX' => 'E02003933',
        '3JY' => 'E02003933',
        '3JZ' => 'E02003933',
        '3LA' => 'E02003933',
        '3LB' => 'E02003933',
        '3LD' => 'E02003933',
        '3LE' => 'E02003933',
        '3LF' => 'E02003933',
        '3LG' => 'E02003933',
        '3LH' => 'E02003933',
        '3LJ' => 'E02003933',
        '3LL' => 'E02003937',
        '3LN' => 'E02003933',
        '3LP' => 'E02003933',
        '3LQ' => 'E02003933',
        '3LR' => 'E02003933',
        '3LS' => 'E02003933',
        '3LT' => 'E02003933',
        '3LU' => 'E02003933',
        '3LW' => 'E02003937',
        '3NA' => 'E02003940',
        '3NB' => 'E02003940',
        '3ND' => 'E02003940',
        '3NE' => 'E02003940',
        '3NF' => 'E02003940',
        '3NG' => 'E02003940',
        '3NH' => 'E02003940',
        '3NJ' => 'E02003940',
        '3NL' => 'E02003940',
        '3NN' => 'E02003940',
        '3NP' => 'E02003940',
        '3NQ' => 'E02003940',
        '3NR' => 'E02003940',
        '3NS' => 'E02003937',
        '3NU' => 'E02003940',
        '3NW' => 'E02003940',
        '3NX' => 'E02003940',
        '3NY' => 'E02003940',
        '3NZ' => 'E02003940',
        '3PA' => 'E02003940',
        '3PB' => 'E02003933',
        '3PD' => 'E02003933',
        '3PE' => 'E02003933',
        '3PF' => 'E02003933',
        '3PG' => 'E02003940',
        '3PH' => 'E02003940',
        '3PJ' => 'E02003940',
        '3PL' => 'E02003940',
        '3PN' => 'E02003940',
        '3PP' => 'E02003940',
        '3PR' => 'E02003940',
        '3PS' => 'E02003940',
        '3PT' => 'E02003940',
        '3PU' => 'E02003940',
        '3PW' => 'E02003940',
        '3PX' => 'E02003940',
        '3PY' => 'E02003940',
        '3WA' => 'E02003941',
        '3WU' => 'E02003941',
        '3WW' => 'E02003941',
        '3WX' => 'E02003941',
        '3WY' => 'E02003941',
        '3WZ' => 'E02003941',
        '3YP' => 'E02003940',
        '3YR' => 'E02003940',
        '3YS' => 'E02003940',
        '3YT' => 'E02003937',
        '3YU' => 'E02003941',
        '3YW' => 'E02003941',
        '3YX' => 'E02003941',
        '3YY' => 'E02003941',
        '3YZ' => 'E02003941',
        '3ZN' => 'E02003941',
        '3ZR' => 'E02003941',
        '3ZX' => 'E02003941',
        '4AA' => 'E02003941',
        '4AB' => 'E02003940',
        '4AD' => 'E02003940',
        '4AE' => 'E02003940',
        '4AF' => 'E02003940',
        '4AG' => 'E02003940',
        '4AH' => 'E02003940',
        '4AJ' => 'E02003941',
        '4AL' => 'E02003940',
        '4AN' => 'E02003941',
        '4AP' => 'E02003941',
        '4AQ' => 'E02003940',
        '4AR' => 'E02003941',
        '4AS' => 'E02003941',
        '4AT' => 'E02003940',
        '4AU' => 'E02003940',
        '4AW' => 'E02003941',
        '4AX' => 'E02003940',
        '4AY' => 'E02003940',
        '4AZ' => 'E02003940',
        '4BA' => 'E02003940',
        '4BB' => 'E02003901',
        '4BD' => 'E02003940',
        '4BE' => 'E02003940',
        '4BG' => 'E02003940',
        '4BH' => 'E02003940',
        '4BJ' => 'E02003940',
        '4BL' => 'E02003940',
        '4BN' => 'E02003940',
        '4BP' => 'E02003940',
        '4BQ' => 'E02003940',
        '4BR' => 'E02003940',
        '4BS' => 'E02003940',
        '4BT' => 'E02003940',
        '4BU' => 'E02003940',
        '4BW' => 'E02003940',
        '4BX' => 'E02003940',
        '4BY' => 'E02003940',
        '4BZ' => 'E02003940',
        '4DA' => 'E02003940',
        '4DB' => 'E02003940',
        '4DD' => 'E02003940',
        '4DE' => 'E02003940',
        '4DF' => 'E02003940',
        '4DG' => 'E02003893',
        '4DH' => 'E02003940',
        '4DJ' => 'E02003940',
        '4DL' => 'E02003940',
        '4DN' => 'E02003940',
        '4DP' => 'E02003893',
        '4DQ' => 'E02003940',
        '4DR' => 'E02003893',
        '4DS' => 'E02003940',
        '4DT' => 'E02003940',
        '4DU' => 'E02003893',
        '4DW' => 'E02003940',
        '4DX' => 'E02003940',
        '4DY' => 'E02003940',
        '4DZ' => 'E02003940',
        '4EA' => 'E02003940',
        '4EB' => 'E02003940',
        '4ED' => 'E02003940',
        '4EE' => 'E02003940',
        '4EF' => 'E02003940',
        '4EG' => 'E02003940',
        '4EH' => 'E02003940',
        '4EJ' => 'E02003940',
        '4EL' => 'E02003940',
        '4EN' => 'E02003940',
        '4EP' => 'E02003940',
        '4EQ' => 'E02003940',
        '4ES' => 'E02003893',
        '4ET' => 'E02003893',
        '4EU' => 'E02003893',
        '4EX' => 'E02003893',
        '4EY' => 'E02003940',
        '4EZ' => 'E02003940',
        '4HA' => 'E02003893',
        '4HB' => 'E02003893',
        '4HD' => 'E02003893',
        '4HE' => 'E02003893',
        '4HF' => 'E02003893',
        '4HH' => 'E02003940',
        '4HJ' => 'E02003940',
        '4HL' => 'E02003940',
        '4HN' => 'E02003940',
        '4HP' => 'E02003940',
        '4HR' => 'E02003940',
        '4HS' => 'E02003940',
        '4HT' => 'E02003940',
        '4HU' => 'E02003940',
        '4HW' => 'E02003940',
        '4HX' => 'E02003940',
        '4HY' => 'E02003940',
        '4HZ' => 'E02003940',
        '4JA' => 'E02003940',
        '4JB' => 'E02003940',
        '4JD' => 'E02003940',
        '4JE' => 'E02003940',
        '4JF' => 'E02003940',
        '4JG' => 'E02003940',
        '4JH' => 'E02003940',
        '4JJ' => 'E02003940',
        '4JL' => 'E02003940',
        '4JN' => 'E02003940',
        '4JP' => 'E02003940',
        '4JQ' => 'E02003940',
        '4JR' => 'E02003940',
        '4JS' => 'E02003940',
        '4JT' => 'E02003940',
        '4JU' => 'E02003940',
        '4JW' => 'E02003940',
        '4JX' => 'E02003940',
        '4JY' => 'E02003940',
        '4JZ' => 'E02003940',
        '4LA' => 'E02003940',
        '4LB' => 'E02003940',
        '4LD' => 'E02003940',
        '4LE' => 'E02003940',
        '4LF' => 'E02003940',
        '4LG' => 'E02003940',
        '4LH' => 'E02003940',
        '4LJ' => 'E02003940',
        '4LL' => 'E02003940',
        '4LN' => 'E02003940',
        '4LP' => 'E02003940',
        '4LQ' => 'E02003940',
        '4LR' => 'E02003940',
        '4LS' => 'E02003940',
        '4LT' => 'E02003940',
        '4LU' => 'E02003940',
        '4LW' => 'E02003940',
        '4LX' => 'E02003940',
        '4LY' => 'E02003940',
        '4LZ' => 'E02003940',
        '4NA' => 'E02003940',
        '4NB' => 'E02003940',
        '4ND' => 'E02003940',
        '4NG' => 'E02003940',
        '4NH' => 'E02003940',
        '4NJ' => 'E02003940',
        '4NL' => 'E02003940',
        '4NN' => 'E02003940',
        '4NP' => 'E02003940',
        '4NQ' => 'E02003940',
        '4NR' => 'E02003940',
        '4NS' => 'E02003940',
        '4NT' => 'E02003940',
        '4NU' => 'E02003940',
        '4NW' => 'E02003940',
        '4NX' => 'E02003940',
        '4NY' => 'E02003940',
        '4NZ' => 'E02003940',
        '4PA' => 'E02003940',
        '4PE' => 'E02003940',
        '4PF' => 'E02003940',
        '4PG' => 'E02003940',
        '4PH' => 'E02003940',
        '4PJ' => 'E02003933',
        '4PL' => 'E02003940',
        '4PN' => 'E02003940',
        '4PP' => 'E02003940',
        '4PQ' => 'E02003940',
        '4PR' => 'E02003940',
        '4PT' => 'E02003940',
        '4PU' => 'E02003940',
        '4PW' => 'E02003940',
        '4PX' => 'E02003940',
        '4PY' => 'E02003940',
        '4PZ' => 'E02003940',
        '4QA' => 'E02003940',
        '4QB' => 'E02003940',
        '4QD' => 'E02003940',
        '4QE' => 'E02003940',
        '4QF' => 'E02003940',
        '4QG' => 'E02003940',
        '4QH' => 'E02003940',
        '4QJ' => 'E02003940',
        '4QL' => 'E02003940',
        '4QN' => 'E02003940',
        '4QP' => 'E02003940',
        '4QQ' => 'E02003940',
        '4QR' => 'E02003940',
        '4QS' => 'E02003940',
        '4QT' => 'E02003940',
        '4QU' => 'E02003940',
        '4QW' => 'E02003940',
        '4QX' => 'E02003940',
        '4QY' => 'E02003940',
        '4QZ' => 'E02003940',
        '4RA' => 'E02003901',
        '4WA' => 'E02003941',
        '4WW' => 'E02003941',
        '4WX' => 'E02003941',
        '4WY' => 'E02003901',
        '4WZ' => 'E02003941',
        '4YG' => 'E02003941',
        '4YH' => 'E02003941',
        '4YJ' => 'E02003941',
        '4YN' => 'E02003940',
        '4YP' => 'E02003941',
        '4YQ' => 'E02003941',
        '4YR' => 'E02003941',
        '4YS' => 'E02003940',
        '4YT' => 'E02003940',
        '4YW' => 'E02003940',
        '4YX' => 'E02003941',
        '4YY' => 'E02003940',
        '4YZ' => 'E02003940',
        '4ZX' => 'E02003941',
        '5AA' => 'E02003941',
        '5AB' => 'E02003941',
        '5AD' => 'E02003940',
        '5AE' => 'E02003940',
        '5AF' => 'E02003940',
        '5AG' => 'E02003940',
        '5AH' => 'E02003957',
        '5AJ' => 'E02003957',
        '5AL' => 'E02003957',
        '5AN' => 'E02003957',
        '5AP' => 'E02003957',
        '5AQ' => 'E02003940',
        '5AR' => 'E02003957',
        '5AS' => 'E02003957',
        '5AT' => 'E02003957',
        '5AU' => 'E02003942',
        '5AW' => 'E02003957',
        '5AX' => 'E02003940',
        '5AY' => 'E02003940',
        '5AZ' => 'E02003940',
        '5BA' => 'E02003940',
        '5BB' => 'E02003940',
        '5BD' => 'E02003942',
        '5BE' => 'E02003940',
        '5BG' => 'E02003940',
        '5BH' => 'E02003940',
        '5BJ' => 'E02003942',
        '5BL' => 'E02003940',
        '5BN' => 'E02003942',
        '5BP' => 'E02003940',
        '5BQ' => 'E02003940',
        '5BS' => 'E02003957',
        '5BT' => 'E02003957',
        '5BU' => 'E02003957',
        '5BW' => 'E02003940',
        '5BX' => 'E02003957',
        '5BY' => 'E02003957',
        '5BZ' => 'E02003957',
        '5DA' => 'E02003957',
        '5DB' => 'E02003957',
        '5DD' => 'E02003957',
        '5DE' => 'E02003957',
        '5DF' => 'E02003957',
        '5DG' => 'E02003957',
        '5DH' => 'E02003957',
        '5DJ' => 'E02003957',
        '5DL' => 'E02003957',
        '5DN' => 'E02003957',
        '5DP' => 'E02003957',
        '5DQ' => 'E02003940',
        '5DR' => 'E02003957',
        '5DS' => 'E02003957',
        '5DT' => 'E02003957',
        '5DU' => 'E02003957',
        '5DW' => 'E02003957',
        '5DX' => 'E02003957',
        '5DY' => 'E02003957',
        '5DZ' => 'E02003957',
        '5EA' => 'E02003957',
        '5EB' => 'E02003957',
        '5ED' => 'E02003957',
        '5EE' => 'E02003957',
        '5EF' => 'E02003957',
        '5EG' => 'E02003957',
        '5EH' => 'E02003957',
        '5EJ' => 'E02003957',
        '5EL' => 'E02003957',
        '5EN' => 'E02003957',
        '5EP' => 'E02003957',
        '5EQ' => 'E02003957',
        '5ER' => 'E02003940',
        '5ES' => 'E02003940',
        '5ET' => 'E02003940',
        '5EU' => 'E02003940',
        '5EW' => 'E02003957',
        '5EX' => 'E02003940',
        '5EY' => 'E02003940',
        '5EZ' => 'E02003940',
        '5FA' => 'E02003957',
        '5FB' => 'E02003957',
        '5FD' => 'E02003957',
        '5FE' => 'E02003957',
        '5FF' => 'E02003957',
        '5GD' => 'E02003940',
        '5HA' => 'E02003940',
        '5HB' => 'E02003940',
        '5HD' => 'E02003940',
        '5HE' => 'E02003940',
        '5HF' => 'E02003940',
        '5HG' => 'E02003940',
        '5HH' => 'E02003940',
        '5HJ' => 'E02003940',
        '5HL' => 'E02003940',
        '5HN' => 'E02003940',
        '5HP' => 'E02003940',
        '5HQ' => 'E02003940',
        '5HR' => 'E02003940',
        '5HS' => 'E02003940',
        '5HT' => 'E02003940',
        '5HU' => 'E02003957',
        '5HW' => 'E02003940',
        '5HX' => 'E02003957',
        '5HY' => 'E02003957',
        '5HZ' => 'E02003957',
        '5JA' => 'E02003940',
        '5JB' => 'E02003940',
        '5JD' => 'E02003940',
        '5JE' => 'E02003957',
        '5JF' => 'E02003940',
        '5JG' => 'E02003940',
        '5JH' => 'E02003942',
        '5JJ' => 'E02003940',
        '5JL' => 'E02003940',
        '5JN' => 'E02003940',
        '5JP' => 'E02003940',
        '5JQ' => 'E02003942',
        '5JR' => 'E02003940',
        '5JS' => 'E02003940',
        '5JT' => 'E02003940',
        '5JU' => 'E02003942',
        '5JW' => 'E02003940',
        '5JX' => 'E02003940',
        '5JY' => 'E02003940',
        '5JZ' => 'E02003940',
        '5LA' => 'E02003940',
        '5LB' => 'E02003940',
        '5LD' => 'E02003940',
        '5LE' => 'E02003940',
        '5LF' => 'E02003940',
        '5LG' => 'E02003940',
        '5LH' => 'E02003940',
        '5LJ' => 'E02003940',
        '5LL' => 'E02003940',
        '5LN' => 'E02003940',
        '5LP' => 'E02003940',
        '5LQ' => 'E02003940',
        '5LR' => 'E02003940',
        '5LS' => 'E02003940',
        '5LT' => 'E02003940',
        '5LU' => 'E02003940',
        '5LW' => 'E02003940',
        '5LX' => 'E02003940',
        '5LY' => 'E02003940',
        '5LZ' => 'E02003940',
        '5NA' => 'E02003940',
        '5NG' => 'E02003940',
        '5NH' => 'E02003940',
        '5NJ' => 'E02003940',
        '5NL' => 'E02003940',
        '5NN' => 'E02003940',
        '5NP' => 'E02003940',
        '5NQ' => 'E02003940',
        '5NR' => 'E02003940',
        '5NS' => 'E02003940',
        '5NT' => 'E02003956',
        '5NW' => 'E02003940',
        '5PA' => 'E02003940',
        '5PB' => 'E02003940',
        '5PD' => 'E02003956',
        '5PE' => 'E02003956',
        '5PF' => 'E02003956',
        '5PG' => 'E02003956',
        '5PH' => 'E02003956',
        '5PJ' => 'E02003956',
        '5PL' => 'E02003956',
        '5PN' => 'E02003937',
        '5PP' => 'E02003956',
        '5PQ' => 'E02003956',
        '5PR' => 'E02003956',
        '5PS' => 'E02003956',
        '5PT' => 'E02003940',
        '5PW' => 'E02003956',
        '5QA' => 'E02003957',
        '5RA' => 'E02003940',
        '5WA' => 'E02003941',
        '5WB' => 'E02003941',
        '5WH' => 'E02003941',
        '5WJ' => 'E02003940',
        '5WX' => 'E02003941',
        '5WY' => 'E02003941',
        '5WZ' => 'E02003941',
        '5XZ' => 'E02003941',
        '5YJ' => 'E02003941',
        '5YL' => 'E02003941',
        '5YN' => 'E02003941',
        '5YP' => 'E02003941',
        '5YR' => 'E02003957',
        '5YS' => 'E02003957',
        '5YT' => 'E02003957',
        '5YU' => 'E02003941',
        '5YW' => 'E02003941',
        '5YX' => 'E02003957',
        '5YY' => 'E02003957',
        '5YZ' => 'E02003957',
        '5ZJ' => 'E02003941',
        '5ZN' => 'E02003941',
        '5ZQ' => 'E02003941',
        '5ZX' => 'E02003941',
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
