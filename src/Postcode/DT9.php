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
final class DT9
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '3AA' => 'E02004269',
        '3AB' => 'E02004269',
        '3AD' => 'E02004269',
        '3AE' => 'E02004269',
        '3AF' => 'E02004269',
        '3AG' => 'E02004270',
        '3AH' => 'E02004269',
        '3AJ' => 'E02004270',
        '3AL' => 'E02004269',
        '3AN' => 'E02004269',
        '3AP' => 'E02004269',
        '3AQ' => 'E02004269',
        '3AR' => 'E02004269',
        '3AS' => 'E02004270',
        '3AT' => 'E02004269',
        '3AU' => 'E02004269',
        '3AW' => 'E02004269',
        '3AX' => 'E02004270',
        '3AY' => 'E02004269',
        '3AZ' => 'E02004269',
        '3BA' => 'E02004269',
        '3BB' => 'E02004269',
        '3BD' => 'E02004269',
        '3BE' => 'E02004269',
        '3BG' => 'E02004269',
        '3BH' => 'E02004269',
        '3BJ' => 'E02004270',
        '3BL' => 'E02004269',
        '3BN' => 'E02004269',
        '3BP' => 'E02004269',
        '3BQ' => 'E02004269',
        '3BS' => 'E02004269',
        '3BT' => 'E02004269',
        '3BU' => 'E02004269',
        '3BW' => 'E02004269',
        '3BX' => 'E02004269',
        '3BY' => 'E02004269',
        '3BZ' => 'E02004269',
        '3DA' => 'E02004269',
        '3DB' => 'E02004269',
        '3DD' => 'E02004269',
        '3DE' => 'E02004269',
        '3DF' => 'E02004270',
        '3DG' => 'E02004269',
        '3DH' => 'E02004270',
        '3DJ' => 'E02004270',
        '3DL' => 'E02004269',
        '3DN' => 'E02004269',
        '3DP' => 'E02004269',
        '3DQ' => 'E02004269',
        '3DR' => 'E02004269',
        '3DS' => 'E02004269',
        '3DT' => 'E02004269',
        '3DU' => 'E02004269',
        '3DW' => 'E02004269',
        '3DX' => 'E02004269',
        '3DY' => 'E02004269',
        '3DZ' => 'E02004269',
        '3EA' => 'E02004269',
        '3EB' => 'E02004269',
        '3ED' => 'E02004269',
        '3EE' => 'E02004269',
        '3EF' => 'E02004269',
        '3EG' => 'E02004269',
        '3EH' => 'E02004269',
        '3EJ' => 'E02004269',
        '3EL' => 'E02004269',
        '3EN' => 'E02004269',
        '3EP' => 'E02004269',
        '3EQ' => 'E02004269',
        '3ER' => 'E02004269',
        '3ES' => 'E02004270',
        '3ET' => 'E02004269',
        '3EU' => 'E02004269',
        '3EW' => 'E02004269',
        '3EX' => 'E02004270',
        '3EY' => 'E02004269',
        '3EZ' => 'E02004269',
        '3FA' => 'E02004269',
        '3FB' => 'E02004270',
        '3FD' => 'E02004269',
        '3FE' => 'E02004269',
        '3GA' => 'E02004269',
        '3GF' => 'E02004270',
        '3HA' => 'E02004269',
        '3HB' => 'E02004269',
        '3HD' => 'E02004269',
        '3HE' => 'E02004269',
        '3HF' => 'E02004269',
        '3HG' => 'E02004269',
        '3HH' => 'E02004269',
        '3HJ' => 'E02004269',
        '3HL' => 'E02004269',
        '3HN' => 'E02004269',
        '3HP' => 'E02004269',
        '3HQ' => 'E02004269',
        '3HR' => 'E02004269',
        '3HS' => 'E02004269',
        '3HW' => 'E02004269',
        '3HX' => 'E02004269',
        '3HY' => 'E02004269',
        '3HZ' => 'E02004269',
        '3JA' => 'E02004269',
        '3JB' => 'E02004269',
        '3JD' => 'E02004269',
        '3JE' => 'E02004270',
        '3JF' => 'E02004269',
        '3JG' => 'E02004269',
        '3JH' => 'E02004270',
        '3JJ' => 'E02004269',
        '3JL' => 'E02004269',
        '3JN' => 'E02004269',
        '3JP' => 'E02004269',
        '3JQ' => 'E02004269',
        '3JR' => 'E02004269',
        '3JS' => 'E02004269',
        '3JT' => 'E02004269',
        '3JU' => 'E02004269',
        '3JW' => 'E02004269',
        '3JX' => 'E02004269',
        '3JY' => 'E02004269',
        '3LB' => 'E02004269',
        '3LD' => 'E02004270',
        '3LE' => 'E02004270',
        '3LF' => 'E02004269',
        '3LG' => 'E02004269',
        '3LH' => 'E02004269',
        '3LJ' => 'E02004269',
        '3LL' => 'E02004269',
        '3LN' => 'E02004269',
        '3LP' => 'E02004269',
        '3LQ' => 'E02004269',
        '3LR' => 'E02004269',
        '3LS' => 'E02004269',
        '3LT' => 'E02004270',
        '3LU' => 'E02004269',
        '3LW' => 'E02004269',
        '3LX' => 'E02004269',
        '3LY' => 'E02004269',
        '3LZ' => 'E02004269',
        '3NA' => 'E02004269',
        '3NB' => 'E02004269',
        '3ND' => 'E02004269',
        '3NE' => 'E02004269',
        '3NF' => 'E02004269',
        '3NG' => 'E02004269',
        '3NH' => 'E02004269',
        '3NJ' => 'E02004270',
        '3NL' => 'E02004269',
        '3NN' => 'E02004269',
        '3NP' => 'E02004269',
        '3NQ' => 'E02004269',
        '3NR' => 'E02004269',
        '3NS' => 'E02004269',
        '3NT' => 'E02004269',
        '3NU' => 'E02004269',
        '3NW' => 'E02004269',
        '3NX' => 'E02004269',
        '3NY' => 'E02004269',
        '3NZ' => 'E02004269',
        '3PA' => 'E02004269',
        '3PB' => 'E02004269',
        '3PD' => 'E02004269',
        '3PE' => 'E02004269',
        '3PF' => 'E02004269',
        '3PG' => 'E02004269',
        '3PH' => 'E02004269',
        '3PJ' => 'E02004270',
        '3PL' => 'E02004269',
        '3PN' => 'E02004270',
        '3PP' => 'E02004269',
        '3PQ' => 'E02004269',
        '3PR' => 'E02004269',
        '3PS' => 'E02004269',
        '3PT' => 'E02004269',
        '3PU' => 'E02004269',
        '3PW' => 'E02004269',
        '3PX' => 'E02004269',
        '3PY' => 'E02004269',
        '3PZ' => 'E02004269',
        '3QA' => 'E02004269',
        '3QB' => 'E02004269',
        '3QD' => 'E02004269',
        '3QE' => 'E02004269',
        '3QF' => 'E02004269',
        '3QG' => 'E02004269',
        '3QH' => 'E02004270',
        '3QJ' => 'E02004269',
        '3QL' => 'E02004269',
        '3QN' => 'E02004269',
        '3QP' => 'E02004269',
        '3QQ' => 'E02004269',
        '3QR' => 'E02004269',
        '3QS' => 'E02004269',
        '3QT' => 'E02004269',
        '3QU' => 'E02004269',
        '3QW' => 'E02004269',
        '3QX' => 'E02004269',
        '3QY' => 'E02004269',
        '3QZ' => 'E02004269',
        '3RA' => 'E02004269',
        '3RB' => 'E02004269',
        '3RD' => 'E02004269',
        '3RE' => 'E02004269',
        '3RF' => 'E02004269',
        '3RG' => 'E02004269',
        '3RH' => 'E02004269',
        '3RL' => 'E02004269',
        '3RP' => 'E02004269',
        '3RQ' => 'E02004270',
        '3RR' => 'E02004269',
        '3RS' => 'E02004269',
        '3RT' => 'E02004269',
        '3RU' => 'E02004269',
        '3RW' => 'E02004269',
        '3RX' => 'E02004269',
        '3RY' => 'E02004269',
        '3RZ' => 'E02004269',
        '3SA' => 'E02004270',
        '3SB' => 'E02004269',
        '3SD' => 'E02004269',
        '3SE' => 'E02004269',
        '3SF' => 'E02004269',
        '3SG' => 'E02004269',
        '3SH' => 'E02004269',
        '3SJ' => 'E02004269',
        '3SL' => 'E02004269',
        '3SN' => 'E02004269',
        '3SP' => 'E02004269',
        '3SQ' => 'E02004269',
        '3SS' => 'E02004269',
        '3SW' => 'E02004269',
        '3TA' => 'E02004269',
        '3TB' => 'E02004269',
        '3TD' => 'E02004269',
        '3WA' => 'E02004269',
        '3WB' => 'E02004269',
        '3XJ' => 'E02004269',
        '3XN' => 'E02004269',
        '3XQ' => 'E02004269',
        '3XR' => 'E02004269',
        '3YA' => 'E02004269',
        '3YB' => 'E02004269',
        '3YD' => 'E02004269',
        '3YE' => 'E02004269',
        '3YF' => 'E02004269',
        '3YG' => 'E02004269',
        '3YH' => 'E02004269',
        '3YJ' => 'E02004269',
        '3YN' => 'E02004269',
        '3YP' => 'E02004269',
        '3YQ' => 'E02004269',
        '3YR' => 'E02004269',
        '3YS' => 'E02004269',
        '3YT' => 'E02004269',
        '3YU' => 'E02004269',
        '3YW' => 'E02004269',
        '3YX' => 'E02004269',
        '3YY' => 'E02004269',
        '3ZW' => 'E02004269',
        '3ZX' => 'E02004270',
        '4AA' => 'E02004270',
        '4AB' => 'E02004269',
        '4AD' => 'E02004269',
        '4AE' => 'E02004269',
        '4AF' => 'E02004269',
        '4AG' => 'E02004269',
        '4AH' => 'E02004269',
        '4AJ' => 'E02004269',
        '4AL' => 'E02004269',
        '4AN' => 'E02004269',
        '4AP' => 'E02004269',
        '4AQ' => 'E02004269',
        '4AR' => 'E02004269',
        '4AS' => 'E02004269',
        '4AT' => 'E02004269',
        '4AU' => 'E02004269',
        '4AW' => 'E02004269',
        '4AX' => 'E02004269',
        '4AY' => 'E02004270',
        '4AZ' => 'E02004270',
        '4BA' => 'E02004269',
        '4BB' => 'E02004269',
        '4BD' => 'E02004269',
        '4BE' => 'E02004269',
        '4BG' => 'E02004269',
        '4BH' => 'E02004270',
        '4BJ' => 'E02004269',
        '4BL' => 'E02004269',
        '4BN' => 'E02004269',
        '4BP' => 'E02004270',
        '4BQ' => 'E02004269',
        '4BS' => 'E02004269',
        '4BT' => 'E02004269',
        '4BU' => 'E02004269',
        '4BW' => 'E02004270',
        '4BX' => 'E02004269',
        '4BY' => 'E02004269',
        '4BZ' => 'E02004269',
        '4DA' => 'E02004269',
        '4DB' => 'E02004269',
        '4DD' => 'E02004269',
        '4DE' => 'E02004269',
        '4DF' => 'E02004269',
        '4DG' => 'E02004270',
        '4DH' => 'E02004269',
        '4DJ' => 'E02004270',
        '4DL' => 'E02004269',
        '4DN' => 'E02004269',
        '4DP' => 'E02004269',
        '4DQ' => 'E02004269',
        '4DR' => 'E02004269',
        '4DS' => 'E02004269',
        '4DT' => 'E02004269',
        '4DU' => 'E02004269',
        '4DW' => 'E02004269',
        '4DX' => 'E02004269',
        '4DY' => 'E02004269',
        '4DZ' => 'E02004270',
        '4EA' => 'E02004269',
        '4EB' => 'E02004269',
        '4ED' => 'E02004269',
        '4EE' => 'E02004270',
        '4EF' => 'E02004269',
        '4EG' => 'E02004269',
        '4EH' => 'E02004269',
        '4EJ' => 'E02004269',
        '4EL' => 'E02004269',
        '4EN' => 'E02004269',
        '4EP' => 'E02004270',
        '4EQ' => 'E02004269',
        '4ER' => 'E02004269',
        '4ES' => 'E02004269',
        '4ET' => 'E02004269',
        '4EU' => 'E02004269',
        '4EW' => 'E02004269',
        '4EX' => 'E02004269',
        '4EY' => 'E02004269',
        '4EZ' => 'E02004269',
        '4FA' => 'E02004270',
        '4FB' => 'E02004269',
        '4FD' => 'E02004269',
        '4FE' => 'E02004270',
        '4FF' => 'E02004270',
        '4FG' => 'E02006080',
        '4FH' => 'E02004270',
        '4FJ' => 'E02004269',
        '4FL' => 'E02004269',
        '4FN' => 'E02004269',
        '4FP' => 'E02004270',
        '4FQ' => 'E02004270',
        '4FR' => 'E02004270',
        '4FS' => 'E02004270',
        '4FT' => 'E02004270',
        '4FU' => 'E02004270',
        '4FW' => 'E02004270',
        '4FX' => 'E02004270',
        '4FY' => 'E02006079',
        '4HA' => 'E02004269',
        '4HB' => 'E02004269',
        '4HD' => 'E02004269',
        '4HE' => 'E02004270',
        '4HF' => 'E02004270',
        '4HG' => 'E02004269',
        '4HH' => 'E02004269',
        '4HJ' => 'E02004269',
        '4HL' => 'E02004269',
        '4HN' => 'E02004269',
        '4HP' => 'E02004269',
        '4HR' => 'E02004269',
        '4HS' => 'E02004269',
        '4HT' => 'E02004269',
        '4HU' => 'E02004269',
        '4HW' => 'E02004269',
        '4HX' => 'E02004269',
        '4HY' => 'E02004269',
        '4HZ' => 'E02004269',
        '4JA' => 'E02004269',
        '4JB' => 'E02004269',
        '4JD' => 'E02004269',
        '4JH' => 'E02004269',
        '4JJ' => 'E02004269',
        '4JL' => 'E02004269',
        '4JN' => 'E02004269',
        '4JT' => 'E02004269',
        '4JU' => 'E02004270',
        '4JW' => 'E02004269',
        '4JX' => 'E02004270',
        '4JY' => 'E02004270',
        '4JZ' => 'E02004270',
        '4LA' => 'E02004270',
        '4LB' => 'E02004270',
        '4LD' => 'E02004270',
        '4LE' => 'E02004270',
        '4LF' => 'E02004270',
        '4LG' => 'E02004270',
        '4LH' => 'E02006079',
        '4LJ' => 'E02006082',
        '4LL' => 'E02006079',
        '4LN' => 'E02006079',
        '4LP' => 'E02006079',
        '4LQ' => 'E02006079',
        '4LR' => 'E02006079',
        '4LS' => 'E02006079',
        '4LT' => 'E02006079',
        '4LU' => 'E02006079',
        '4LW' => 'E02006079',
        '4LX' => 'E02006079',
        '4LY' => 'E02004270',
        '4LZ' => 'E02006079',
        '4NA' => 'E02004270',
        '4ND' => 'E02006079',
        '4NF' => 'E02006079',
        '4NG' => 'E02006082',
        '4NH' => 'E02006079',
        '4NJ' => 'E02006079',
        '4NL' => 'E02006079',
        '4NN' => 'E02006079',
        '4NP' => 'E02006079',
        '4NQ' => 'E02006079',
        '4NR' => 'E02006079',
        '4NS' => 'E02006079',
        '4NT' => 'E02006079',
        '4NU' => 'E02006079',
        '4NW' => 'E02006079',
        '4NX' => 'E02006079',
        '4NY' => 'E02006079',
        '4NZ' => 'E02006079',
        '4PA' => 'E02006079',
        '4PB' => 'E02006079',
        '4PD' => 'E02006079',
        '4PE' => 'E02006079',
        '4PF' => 'E02006079',
        '4PG' => 'E02006079',
        '4PH' => 'E02006079',
        '4PJ' => 'E02006079',
        '4PL' => 'E02006079',
        '4PP' => 'E02006082',
        '4PQ' => 'E02006079',
        '4PR' => 'E02006079',
        '4PS' => 'E02004270',
        '4PW' => 'E02006082',
        '4PX' => 'E02004270',
        '4PY' => 'E02004270',
        '4PZ' => 'E02004270',
        '4QA' => 'E02004270',
        '4QB' => 'E02004270',
        '4QD' => 'E02004270',
        '4QE' => 'E02004270',
        '4QF' => 'E02004270',
        '4QG' => 'E02004270',
        '4QH' => 'E02004270',
        '4QJ' => 'E02004270',
        '4QL' => 'E02004270',
        '4QN' => 'E02004270',
        '4QP' => 'E02004270',
        '4QQ' => 'E02004270',
        '4QR' => 'E02004270',
        '4QS' => 'E02004270',
        '4QT' => 'E02004270',
        '4QU' => 'E02004270',
        '4QW' => 'E02004270',
        '4QX' => 'E02004270',
        '4QY' => 'E02004270',
        '4QZ' => 'E02004270',
        '4RA' => 'E02004270',
        '4RB' => 'E02004270',
        '4RD' => 'E02004270',
        '4RE' => 'E02004270',
        '4RF' => 'E02004270',
        '4RG' => 'E02004270',
        '4RH' => 'E02004269',
        '4RJ' => 'E02004270',
        '4RL' => 'E02004270',
        '4RN' => 'E02004270',
        '4RP' => 'E02004270',
        '4RQ' => 'E02004270',
        '4RR' => 'E02004270',
        '4RS' => 'E02004270',
        '4RT' => 'E02004270',
        '4RU' => 'E02004270',
        '4RW' => 'E02004269',
        '4RX' => 'E02004270',
        '4RY' => 'E02004270',
        '4RZ' => 'E02004270',
        '4SA' => 'E02004270',
        '4SB' => 'E02004270',
        '4SD' => 'E02004270',
        '4SE' => 'E02004270',
        '4SF' => 'E02004270',
        '4SG' => 'E02004270',
        '4SH' => 'E02004270',
        '4SJ' => 'E02004270',
        '4SL' => 'E02004270',
        '4SN' => 'E02004270',
        '4SP' => 'E02004270',
        '4SQ' => 'E02004270',
        '4SR' => 'E02004270',
        '4SS' => 'E02004270',
        '4ST' => 'E02004270',
        '4SU' => 'E02004270',
        '4SW' => 'E02004270',
        '4SX' => 'E02004270',
        '4SY' => 'E02004270',
        '4SZ' => 'E02004270',
        '4TA' => 'E02004270',
        '4TB' => 'E02004269',
        '4WA' => 'E02004269',
        '4WB' => 'E02004269',
        '4WD' => 'E02004269',
        '4WZ' => 'E02004269',
        '4XA' => 'E02004269',
        '4XY' => 'E02004269',
        '4XZ' => 'E02004269',
        '4YA' => 'E02004269',
        '4YB' => 'E02004269',
        '4YD' => 'E02004269',
        '4YE' => 'E02004269',
        '4YF' => 'E02004269',
        '4YG' => 'E02004269',
        '4YH' => 'E02004269',
        '4YJ' => 'E02004269',
        '4YL' => 'E02004269',
        '4YN' => 'E02004269',
        '4YP' => 'E02004269',
        '4YQ' => 'E02004269',
        '4YR' => 'E02004269',
        '4YS' => 'E02004269',
        '4YT' => 'E02004269',
        '4YU' => 'E02004269',
        '4YW' => 'E02004269',
        '4YX' => 'E02004269',
        '4YY' => 'E02004269',
        '4YZ' => 'E02004269',
        '4ZQ' => 'E02004269',
        '4ZR' => 'E02004269',
        '4ZX' => 'E02004269',
        '5AA' => 'E02004270',
        '5AB' => 'E02004270',
        '5AD' => 'E02006082',
        '5AE' => 'E02006082',
        '5AF' => 'E02006082',
        '5AG' => 'E02006082',
        '5AH' => 'E02006082',
        '5AJ' => 'E02006082',
        '5AL' => 'E02006082',
        '5AN' => 'E02006082',
        '5AP' => 'E02006082',
        '5AQ' => 'E02006082',
        '5AR' => 'E02006082',
        '5AS' => 'E02006082',
        '5AT' => 'E02006082',
        '5AU' => 'E02006082',
        '5AW' => 'E02006082',
        '5AX' => 'E02006082',
        '5AY' => 'E02006082',
        '5AZ' => 'E02006082',
        '5BA' => 'E02006082',
        '5BB' => 'E02006082',
        '5BD' => 'E02006082',
        '5BE' => 'E02006082',
        '5BG' => 'E02006082',
        '5BH' => 'E02006082',
        '5BJ' => 'E02006082',
        '5BL' => 'E02006082',
        '5BN' => 'E02006082',
        '5BP' => 'E02006082',
        '5BQ' => 'E02006082',
        '5BS' => 'E02006082',
        '5BT' => 'E02006082',
        '5BU' => 'E02006082',
        '5BW' => 'E02006082',
        '5BX' => 'E02006082',
        '5BY' => 'E02006082',
        '5BZ' => 'E02006082',
        '5DA' => 'E02006082',
        '5DB' => 'E02006082',
        '5DD' => 'E02006082',
        '5DE' => 'E02006082',
        '5DF' => 'E02006082',
        '5DG' => 'E02006082',
        '5DH' => 'E02006082',
        '5DJ' => 'E02006082',
        '5DL' => 'E02006082',
        '5DN' => 'E02006082',
        '5DP' => 'E02006082',
        '5DQ' => 'E02006082',
        '5DR' => 'E02006082',
        '5DS' => 'E02006082',
        '5DT' => 'E02004270',
        '5DU' => 'E02006082',
        '5DW' => 'E02006082',
        '5DX' => 'E02004270',
        '5DY' => 'E02004270',
        '5DZ' => 'E02006082',
        '5EA' => 'E02006082',
        '5EB' => 'E02006082',
        '5ED' => 'E02006082',
        '5EE' => 'E02006082',
        '5EF' => 'E02006082',
        '5EG' => 'E02006082',
        '5EH' => 'E02006082',
        '5EJ' => 'E02006082',
        '5EL' => 'E02006082',
        '5EN' => 'E02006082',
        '5EP' => 'E02006082',
        '5EQ' => 'E02006082',
        '5ER' => 'E02006082',
        '5ES' => 'E02006082',
        '5ET' => 'E02006082',
        '5EU' => 'E02006082',
        '5EW' => 'E02006082',
        '5EX' => 'E02006082',
        '5EY' => 'E02006082',
        '5EZ' => 'E02006082',
        '5FA' => 'E02004269',
        '5FB' => 'E02006082',
        '5FD' => 'E02006082',
        '5FE' => 'E02006082',
        '5FF' => 'E02006082',
        '5FG' => 'E02004270',
        '5FH' => 'E02006082',
        '5FP' => 'E02004270',
        '5FQ' => 'E02006082',
        '5FR' => 'E02006082',
        '5FS' => 'E02006082',
        '5FT' => 'E02006082',
        '5FU' => 'E02006082',
        '5FX' => 'E02006082',
        '5FZ' => 'E02004270',
        '5GA' => 'E02006082',
        '5GB' => 'E02006082',
        '5GF' => 'E02004270',
        '5HA' => 'E02006082',
        '5HB' => 'E02006082',
        '5HD' => 'E02006079',
        '5HE' => 'E02006082',
        '5HF' => 'E02006082',
        '5HG' => 'E02006082',
        '5HH' => 'E02006082',
        '5HJ' => 'E02006082',
        '5HL' => 'E02006082',
        '5HN' => 'E02006082',
        '5HP' => 'E02004270',
        '5HQ' => 'E02006082',
        '5HR' => 'E02004270',
        '5HS' => 'E02004270',
        '5HT' => 'E02004270',
        '5HU' => 'E02004270',
        '5HW' => 'E02006082',
        '5HX' => 'E02004270',
        '5HY' => 'E02004270',
        '5HZ' => 'E02004270',
        '5JA' => 'E02004270',
        '5JB' => 'E02004270',
        '5JD' => 'E02004270',
        '5JE' => 'E02004270',
        '5JF' => 'E02004258',
        '5JG' => 'E02004270',
        '5JH' => 'E02004270',
        '5JJ' => 'E02006082',
        '5JL' => 'E02006082',
        '5JP' => 'E02004270',
        '5JQ' => 'E02004270',
        '5JR' => 'E02004270',
        '5JS' => 'E02004270',
        '5JT' => 'E02004270',
        '5JU' => 'E02004270',
        '5JW' => 'E02004270',
        '5JX' => 'E02004270',
        '5JY' => 'E02004258',
        '5JZ' => 'E02004270',
        '5LA' => 'E02004270',
        '5LB' => 'E02004270',
        '5LD' => 'E02004270',
        '5LE' => 'E02004270',
        '5LF' => 'E02004270',
        '5LG' => 'E02004270',
        '5LH' => 'E02004270',
        '5LJ' => 'E02004270',
        '5LL' => 'E02004270',
        '5LN' => 'E02004270',
        '5LP' => 'E02004270',
        '5LQ' => 'E02004270',
        '5LR' => 'E02004270',
        '5LS' => 'E02006082',
        '5LT' => 'E02006082',
        '5LU' => 'E02004270',
        '5LW' => 'E02004270',
        '5LX' => 'E02004270',
        '5LY' => 'E02004270',
        '5LZ' => 'E02004270',
        '5NA' => 'E02004270',
        '5NB' => 'E02004270',
        '5ND' => 'E02004270',
        '5NE' => 'E02004270',
        '5NF' => 'E02004270',
        '5NG' => 'E02004270',
        '5NH' => 'E02004270',
        '5NJ' => 'E02004270',
        '5NL' => 'E02004270',
        '5NN' => 'E02004270',
        '5NP' => 'E02004270',
        '5NQ' => 'E02004270',
        '5NR' => 'E02004270',
        '5NS' => 'E02004270',
        '5NT' => 'E02004270',
        '5NU' => 'E02004270',
        '5NW' => 'E02004270',
        '5NX' => 'E02004270',
        '5NY' => 'E02004270',
        '5NZ' => 'E02004270',
        '5PA' => 'E02004270',
        '5PB' => 'E02004270',
        '5PD' => 'E02004270',
        '5PE' => 'E02004270',
        '5PF' => 'E02004270',
        '5PG' => 'E02004270',
        '5PH' => 'E02004270',
        '5PJ' => 'E02004270',
        '5PL' => 'E02004270',
        '5PN' => 'E02004270',
        '5PP' => 'E02004270',
        '5PQ' => 'E02004270',
        '5PR' => 'E02004270',
        '5PS' => 'E02004270',
        '5PT' => 'E02004270',
        '5PU' => 'E02004270',
        '5PW' => 'E02004270',
        '5PX' => 'E02004270',
        '5PY' => 'E02004262',
        '5PZ' => 'E02004262',
        '5QA' => 'E02004262',
        '5QB' => 'E02004262',
        '5QD' => 'E02004262',
        '5QE' => 'E02004262',
        '5QF' => 'E02004262',
        '5QG' => 'E02004262',
        '5QH' => 'E02004262',
        '5QJ' => 'E02004262',
        '5QL' => 'E02004272',
        '5QN' => 'E02004272',
        '5QP' => 'E02004272',
        '5QQ' => 'E02004262',
        '5QR' => 'E02004262',
        '5QU' => 'E02004270',
        '5QW' => 'E02004272',
        '5QX' => 'E02004270',
        '5QY' => 'E02004270',
        '5QZ' => 'E02004270',
        '5RA' => 'E02006082',
        '5RB' => 'E02006082',
        '5RD' => 'E02006082',
        '5RE' => 'E02006082',
        '5RF' => 'E02006082',
        '5WA' => 'E02004269',
        '5WB' => 'E02004269',
        '5YA' => 'E02006082',
        '5YB' => 'E02006082',
        '5YE' => 'E02006082',
        '5YF' => 'E02006082',
        '5YG' => 'E02006082',
        '5YH' => 'E02004269',
        '5YJ' => 'E02004269',
        '5YL' => 'E02004269',
        '5YN' => 'E02004270',
        '5YP' => 'E02004270',
        '5YQ' => 'E02004270',
        '5YR' => 'E02006082',
        '5YS' => 'E02004269',
        '5YT' => 'E02004269',
        '5YU' => 'E02004269',
        '5YW' => 'E02004269',
        '5YX' => 'E02004269',
        '5ZN' => 'E02004269',
        '6AA' => 'E02004269',
        '6AB' => 'E02004269',
        '6AD' => 'E02004270',
        '6AE' => 'E02004269',
        '6AF' => 'E02004269',
        '6AG' => 'E02004269',
        '6AH' => 'E02004269',
        '6AJ' => 'E02004269',
        '6AL' => 'E02004269',
        '6AN' => 'E02004269',
        '6AP' => 'E02004269',
        '6AQ' => 'E02004269',
        '6AR' => 'E02004269',
        '6AS' => 'E02004269',
        '6AT' => 'E02004269',
        '6AU' => 'E02004269',
        '6AW' => 'E02004269',
        '6AX' => 'E02004269',
        '6AY' => 'E02004269',
        '6AZ' => 'E02004269',
        '6BA' => 'E02004269',
        '6BB' => 'E02004269',
        '6BD' => 'E02004269',
        '6BE' => 'E02004270',
        '6BG' => 'E02004269',
        '6BH' => 'E02004269',
        '6BJ' => 'E02004270',
        '6BL' => 'E02004269',
        '6BN' => 'E02004270',
        '6BP' => 'E02004269',
        '6BQ' => 'E02004269',
        '6BS' => 'E02004269',
        '6BT' => 'E02004269',
        '6BU' => 'E02004269',
        '6BW' => 'E02004269',
        '6BX' => 'E02004269',
        '6BY' => 'E02004269',
        '6BZ' => 'E02004269',
        '6DA' => 'E02004269',
        '6DB' => 'E02004269',
        '6DD' => 'E02004269',
        '6DE' => 'E02004269',
        '6DF' => 'E02004269',
        '6DG' => 'E02004269',
        '6DH' => 'E02004269',
        '6DJ' => 'E02004269',
        '6DL' => 'E02004269',
        '6DN' => 'E02004269',
        '6DP' => 'E02004269',
        '6DQ' => 'E02004269',
        '6DR' => 'E02004269',
        '6DS' => 'E02004269',
        '6DT' => 'E02004269',
        '6DU' => 'E02004269',
        '6DW' => 'E02004269',
        '6DX' => 'E02004269',
        '6DY' => 'E02004269',
        '6DZ' => 'E02004269',
        '6EA' => 'E02004269',
        '6EB' => 'E02004269',
        '6ED' => 'E02004270',
        '6EE' => 'E02004269',
        '6EF' => 'E02004270',
        '6EG' => 'E02004269',
        '6EJ' => 'E02004270',
        '6EL' => 'E02004270',
        '6EN' => 'E02004270',
        '6EP' => 'E02004270',
        '6EQ' => 'E02004270',
        '6ER' => 'E02004270',
        '6ES' => 'E02004270',
        '6ET' => 'E02004270',
        '6EU' => 'E02004270',
        '6EW' => 'E02004270',
        '6EX' => 'E02004270',
        '6EY' => 'E02004270',
        '6EZ' => 'E02004270',
        '6FA' => 'E02004270',
        '6HA' => 'E02004270',
        '6HE' => 'E02004270',
        '6HF' => 'E02004270',
        '6HG' => 'E02004270',
        '6HH' => 'E02004270',
        '6HJ' => 'E02004270',
        '6HL' => 'E02004270',
        '6HN' => 'E02004270',
        '6HP' => 'E02004270',
        '6HQ' => 'E02004270',
        '6HR' => 'E02004270',
        '6HS' => 'E02004270',
        '6HT' => 'E02004270',
        '6HU' => 'E02004270',
        '6HW' => 'E02004270',
        '6HX' => 'E02004270',
        '6HY' => 'E02004270',
        '6HZ' => 'E02004270',
        '6JA' => 'E02004270',
        '6JB' => 'E02004270',
        '6JD' => 'E02004270',
        '6JE' => 'E02004270',
        '6JF' => 'E02004270',
        '6JG' => 'E02004270',
        '6JH' => 'E02004270',
        '6JJ' => 'E02004270',
        '6JL' => 'E02004270',
        '6JN' => 'E02004270',
        '6JP' => 'E02004270',
        '6JQ' => 'E02004271',
        '6JR' => 'E02004270',
        '6JS' => 'E02004270',
        '6JT' => 'E02004270',
        '6JU' => 'E02004270',
        '6JW' => 'E02004270',
        '6JX' => 'E02004270',
        '6JY' => 'E02004270',
        '6JZ' => 'E02004270',
        '6LA' => 'E02004270',
        '6LB' => 'E02004270',
        '6LF' => 'E02004270',
        '6LG' => 'E02004270',
        '6LH' => 'E02004270',
        '6LJ' => 'E02004270',
        '6LL' => 'E02004270',
        '6LN' => 'E02004270',
        '6LP' => 'E02004270',
        '6LQ' => 'E02004270',
        '6LR' => 'E02004270',
        '6LS' => 'E02004270',
        '6LT' => 'E02004270',
        '6LU' => 'E02004270',
        '6LW' => 'E02004270',
        '6LX' => 'E02004270',
        '6LY' => 'E02004270',
        '6LZ' => 'E02004270',
        '6NA' => 'E02004270',
        '6NB' => 'E02004270',
        '6ND' => 'E02004270',
        '6NE' => 'E02004270',
        '6NF' => 'E02004270',
        '6NG' => 'E02004270',
        '6NH' => 'E02004270',
        '6NJ' => 'E02004270',
        '6NL' => 'E02004270',
        '6NN' => 'E02004270',
        '6NP' => 'E02004270',
        '6NQ' => 'E02004270',
        '6NR' => 'E02004270',
        '6NS' => 'E02004270',
        '6NT' => 'E02004270',
        '6NU' => 'E02004270',
        '6NW' => 'E02004270',
        '6NX' => 'E02004270',
        '6NY' => 'E02004270',
        '6NZ' => 'E02004270',
        '6PA' => 'E02004270',
        '6PB' => 'E02004270',
        '6PD' => 'E02004270',
        '6PE' => 'E02004270',
        '6PF' => 'E02004270',
        '6PG' => 'E02004270',
        '6PH' => 'E02004270',
        '6PJ' => 'E02004270',
        '6PL' => 'E02004270',
        '6PN' => 'E02004270',
        '6PQ' => 'E02004270',
        '6PS' => 'E02004270',
        '6PT' => 'E02004270',
        '6PU' => 'E02004270',
        '6PX' => 'E02004270',
        '6PY' => 'E02004270',
        '6PZ' => 'E02004270',
        '6QA' => 'E02004270',
        '6QB' => 'E02004270',
        '6QD' => 'E02004270',
        '6QE' => 'E02004270',
        '6QF' => 'E02004270',
        '6QG' => 'E02004270',
        '6QH' => 'E02004270',
        '6QJ' => 'E02004270',
        '6QL' => 'E02004270',
        '6QN' => 'E02004270',
        '6QP' => 'E02004270',
        '6QQ' => 'E02004270',
        '6QR' => 'E02004270',
        '6QS' => 'E02004270',
        '6QT' => 'E02004270',
        '6QU' => 'E02004270',
        '6QW' => 'E02004270',
        '6QX' => 'E02004270',
        '6QY' => 'E02004270',
        '6QZ' => 'E02004270',
        '6RA' => 'E02004270',
        '6RB' => 'E02004270',
        '6RD' => 'E02004270',
        '6RE' => 'E02004270',
        '6RF' => 'E02004270',
        '6RG' => 'E02004270',
        '6RH' => 'E02004270',
        '6RJ' => 'E02004270',
        '6RL' => 'E02004270',
        '6RN' => 'E02004270',
        '6RP' => 'E02004270',
        '6RQ' => 'E02004270',
        '6RR' => 'E02004270',
        '6RS' => 'E02004270',
        '6RT' => 'E02004270',
        '6RU' => 'E02004270',
        '6RW' => 'E02004270',
        '6RX' => 'E02004270',
        '6RY' => 'E02004270',
        '6RZ' => 'E02004270',
        '6SA' => 'E02004270',
        '6SB' => 'E02004270',
        '6SD' => 'E02004270',
        '6SE' => 'E02004270',
        '6SF' => 'E02004270',
        '6SG' => 'E02004270',
        '6SH' => 'E02004270',
        '6SJ' => 'E02004270',
        '6SL' => 'E02004270',
        '6SN' => 'E02004270',
        '6SP' => 'E02004270',
        '6SQ' => 'E02004270',
        '6SR' => 'E02004270',
        '6SS' => 'E02004270',
        '6ST' => 'E02004270',
        '6SU' => 'E02004270',
        '6SW' => 'E02004269',
        '6SX' => 'E02004269',
        '6SY' => 'E02004270',
        '6SZ' => 'E02004270',
        '6WA' => 'E02004270',
        '6WB' => 'E02004270',
        '6WD' => 'E02004269',
        '6XA' => 'E02004270',
        '6YA' => 'E02004270',
        '6YB' => 'E02004270',
        '6YD' => 'E02004270',
        '6YE' => 'E02004270',
        '6YF' => 'E02004269',
        '6YG' => 'E02004270',
        '6YH' => 'E02004270',
        '6YJ' => 'E02004270',
        '6YL' => 'E02004269',
        '6YN' => 'E02004270',
        '6YP' => 'E02004270',
        '6YQ' => 'E02004270',
        '6YR' => 'E02004270',
        '6YS' => 'E02004270',
        '6YT' => 'E02004270',
        '6YU' => 'E02004270',
        '6YW' => 'E02004270',
        '6YX' => 'E02004270',
        '6YY' => 'E02004270',
        '6YZ' => 'E02004269',
        '6ZA' => 'E02004269',
        '6ZX' => 'E02004269',
        '9AA' => 'E02004269',
        '9AB' => 'E02004269',
        '9AD' => 'E02004269',
        '9AE' => 'E02004269',
        '9AF' => 'E02004269',
        '9AG' => 'E02004269',
        '9AH' => 'E02004269',
        '9AJ' => 'E02004269',
        '9AL' => 'E02004269',
        '9AN' => 'E02004269',
        '9AP' => 'E02004269',
        '9AQ' => 'E02004269',
        '9AR' => 'E02004269',
        '9AS' => 'E02004269',
        '9AT' => 'E02004269',
        '9AU' => 'E02004269',
        '9AW' => 'E02004269',
        '9AX' => 'E02004269',
        '9AY' => 'E02004269',
        '9AZ' => 'E02004269',
        '9BA' => 'E02004269',
        '9BB' => 'E02004269',
        '9BD' => 'E02004269',
        '9BE' => 'E02004269',
        '9BF' => 'E02004269',
        '9BG' => 'E02004269',
        '9BH' => 'E02004269',
        '9BJ' => 'E02004269',
        '9BL' => 'E02004269',
        '9BN' => 'E02004269',
        '9BP' => 'E02004269',
        '9BQ' => 'E02004269',
        '9BR' => 'E02004269',
        '9BS' => 'E02004269',
        '9BT' => 'E02004269',
        '9BU' => 'E02004269',
        '9BW' => 'E02004269',
        '9BX' => 'E02004269',
        '9BY' => 'E02004269',
        '9BZ' => 'E02004269',
        '9DA' => 'E02004269',
        '9DB' => 'E02004269',
        '9DD' => 'E02004269',
        '9DE' => 'E02004269',
        '9DF' => 'E02004269',
        '9DG' => 'E02004269',
        '9DH' => 'E02004269',
        '9DJ' => 'E02004269',
        '9DL' => 'E02004269',
        '9DN' => 'E02004269',
        '9DP' => 'E02004269',
        '9DQ' => 'E02004270',
        '9DR' => 'E02004269',
        '9DT' => 'E02004269',
        '9DW' => 'E02004269',
        '9DX' => 'E02004269',
        '9DY' => 'E02004269',
        '9DZ' => 'E02004269',
        '9EA' => 'E02004269',
        '9EB' => 'E02004269',
        '9ED' => 'E02004269',
        '9EE' => 'E02004269',
        '9EF' => 'E02004270',
        '9EG' => 'E02004270',
        '9EH' => 'E02004270',
        '9EJ' => 'E02004270',
        '9EL' => 'E02004270',
        '9EN' => 'E02004270',
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
