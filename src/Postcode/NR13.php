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
final class NR13
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '3AA' => 'E02005537',
        '3AB' => 'E02005537',
        '3AD' => 'E02005536',
        '3AE' => 'E02005537',
        '3AF' => 'E02005536',
        '3AG' => 'E02005537',
        '3AH' => 'E02005537',
        '3AJ' => 'E02005537',
        '3AL' => 'E02005536',
        '3AN' => 'E02005537',
        '3AP' => 'E02005537',
        '3AQ' => 'E02005537',
        '3AR' => 'E02005537',
        '3AS' => 'E02005533',
        '3AT' => 'E02005539',
        '3AU' => 'E02005539',
        '3AW' => 'E02005537',
        '3AX' => 'E02005539',
        '3AY' => 'E02005537',
        '3AZ' => 'E02005537',
        '3BA' => 'E02005537',
        '3BB' => 'E02005537',
        '3BD' => 'E02005537',
        '3BE' => 'E02005537',
        '3BF' => 'E02005537',
        '3BG' => 'E02005537',
        '3BH' => 'E02005537',
        '3BJ' => 'E02005537',
        '3BL' => 'E02005537',
        '3BN' => 'E02005537',
        '3BP' => 'E02005537',
        '3BQ' => 'E02005537',
        '3BS' => 'E02005537',
        '3BT' => 'E02005537',
        '3BU' => 'E02005537',
        '3BW' => 'E02005537',
        '3BX' => 'E02005537',
        '3BY' => 'E02005537',
        '3BZ' => 'E02005537',
        '3DA' => 'E02005537',
        '3DB' => 'E02005537',
        '3DD' => 'E02005537',
        '3DE' => 'E02005537',
        '3DF' => 'E02005537',
        '3DG' => 'E02005537',
        '3DH' => 'E02005537',
        '3DJ' => 'E02005537',
        '3DL' => 'E02005537',
        '3DN' => 'E02005537',
        '3DP' => 'E02005537',
        '3DQ' => 'E02005537',
        '3DR' => 'E02005537',
        '3DS' => 'E02005537',
        '3DT' => 'E02005537',
        '3DU' => 'E02005537',
        '3DW' => 'E02005537',
        '3DX' => 'E02005537',
        '3DY' => 'E02005537',
        '3DZ' => 'E02005537',
        '3EA' => 'E02005537',
        '3EB' => 'E02005537',
        '3ED' => 'E02005537',
        '3EE' => 'E02005537',
        '3EF' => 'E02005537',
        '3EG' => 'E02005537',
        '3EH' => 'E02005537',
        '3EJ' => 'E02005537',
        '3EL' => 'E02005537',
        '3EN' => 'E02005537',
        '3EP' => 'E02005537',
        '3EQ' => 'E02005537',
        '3ER' => 'E02005537',
        '3ES' => 'E02005537',
        '3ET' => 'E02005537',
        '3EU' => 'E02005537',
        '3EW' => 'E02005537',
        '3EX' => 'E02005537',
        '3EY' => 'E02005537',
        '3EZ' => 'E02005537',
        '3FA' => 'E02005537',
        '3FB' => 'E02005537',
        '3FD' => 'E02005537',
        '3FE' => 'E02005537',
        '3FF' => 'E02005537',
        '3FJ' => 'E02005537',
        '3GA' => 'E02005537',
        '3GX' => 'E02005537',
        '3GY' => 'E02005537',
        '3GZ' => 'E02005536',
        '3HA' => 'E02005537',
        '3HB' => 'E02005537',
        '3HD' => 'E02005537',
        '3HE' => 'E02005537',
        '3HF' => 'E02005537',
        '3HG' => 'E02005537',
        '3HH' => 'E02005537',
        '3HJ' => 'E02005537',
        '3HL' => 'E02005537',
        '3HN' => 'E02005537',
        '3HP' => 'E02005537',
        '3HQ' => 'E02005537',
        '3HR' => 'E02005537',
        '3HS' => 'E02005537',
        '3HT' => 'E02005536',
        '3HU' => 'E02005536',
        '3HW' => 'E02005537',
        '3HX' => 'E02005536',
        '3HY' => 'E02005536',
        '3HZ' => 'E02005536',
        '3JA' => 'E02005536',
        '3JB' => 'E02005536',
        '3JD' => 'E02005536',
        '3JE' => 'E02005536',
        '3JF' => 'E02005537',
        '3JG' => 'E02005536',
        '3JH' => 'E02005536',
        '3JJ' => 'E02005536',
        '3JL' => 'E02005537',
        '3JN' => 'E02005537',
        '3JP' => 'E02005537',
        '3JQ' => 'E02005536',
        '3JR' => 'E02005537',
        '3JS' => 'E02005537',
        '3JT' => 'E02005537',
        '3JU' => 'E02005537',
        '3JW' => 'E02005537',
        '3JX' => 'E02005537',
        '3JY' => 'E02005537',
        '3JZ' => 'E02005537',
        '3LA' => 'E02005537',
        '3LB' => 'E02005537',
        '3LD' => 'E02005537',
        '3LE' => 'E02005537',
        '3LF' => 'E02005537',
        '3LG' => 'E02005537',
        '3LH' => 'E02005537',
        '3LJ' => 'E02005537',
        '3LL' => 'E02005537',
        '3LN' => 'E02005537',
        '3LP' => 'E02005537',
        '3LQ' => 'E02005536',
        '3LR' => 'E02005536',
        '3LS' => 'E02005536',
        '3LT' => 'E02005537',
        '3LU' => 'E02005537',
        '3LW' => 'E02005537',
        '3LX' => 'E02005537',
        '3LY' => 'E02005537',
        '3LZ' => 'E02005537',
        '3NA' => 'E02005537',
        '3NB' => 'E02005537',
        '3ND' => 'E02005537',
        '3NE' => 'E02005537',
        '3NF' => 'E02005537',
        '3NG' => 'E02005537',
        '3NH' => 'E02005537',
        '3NJ' => 'E02005537',
        '3NL' => 'E02005537',
        '3NN' => 'E02005537',
        '3NP' => 'E02005537',
        '3NQ' => 'E02005537',
        '3NR' => 'E02005537',
        '3NS' => 'E02005537',
        '3NT' => 'E02005537',
        '3NU' => 'E02005537',
        '3NW' => 'E02005537',
        '3NX' => 'E02005537',
        '3NY' => 'E02005537',
        '3NZ' => 'E02005537',
        '3PA' => 'E02005537',
        '3PB' => 'E02005537',
        '3PD' => 'E02005537',
        '3PE' => 'E02005537',
        '3PF' => 'E02005537',
        '3PG' => 'E02005537',
        '3PH' => 'E02005537',
        '3PJ' => 'E02005537',
        '3PL' => 'E02005537',
        '3PN' => 'E02005537',
        '3PP' => 'E02005537',
        '3PQ' => 'E02005537',
        '3PR' => 'E02005537',
        '3PS' => 'E02005537',
        '3PT' => 'E02005537',
        '3PU' => 'E02005537',
        '3PW' => 'E02005537',
        '3PX' => 'E02005537',
        '3PY' => 'E02005537',
        '3PZ' => 'E02005537',
        '3QA' => 'E02005537',
        '3QB' => 'E02005537',
        '3QD' => 'E02005537',
        '3QE' => 'E02005537',
        '3QF' => 'E02005537',
        '3QG' => 'E02005537',
        '3QH' => 'E02005536',
        '3QJ' => 'E02005537',
        '3QL' => 'E02005537',
        '3QN' => 'E02005537',
        '3QP' => 'E02005537',
        '3QQ' => 'E02005537',
        '3QR' => 'E02005537',
        '3QS' => 'E02005537',
        '3QT' => 'E02005537',
        '3QU' => 'E02005537',
        '3QW' => 'E02005537',
        '3QX' => 'E02005537',
        '3QY' => 'E02005537',
        '3QZ' => 'E02005537',
        '3RA' => 'E02005537',
        '3RB' => 'E02005537',
        '3RD' => 'E02005537',
        '3RE' => 'E02005537',
        '3RF' => 'E02005537',
        '3RG' => 'E02005537',
        '3RH' => 'E02005537',
        '3RJ' => 'E02005537',
        '3RL' => 'E02005537',
        '3RN' => 'E02005536',
        '3RP' => 'E02005536',
        '3RQ' => 'E02005537',
        '3RR' => 'E02005537',
        '3RS' => 'E02005537',
        '3RT' => 'E02005536',
        '3RU' => 'E02005536',
        '3RW' => 'E02005536',
        '3RX' => 'E02005536',
        '3RY' => 'E02005537',
        '3RZ' => 'E02005537',
        '3SA' => 'E02005536',
        '3SB' => 'E02005536',
        '3SD' => 'E02005536',
        '3SE' => 'E02005536',
        '3SF' => 'E02005536',
        '3SG' => 'E02005536',
        '3SH' => 'E02005536',
        '3SJ' => 'E02005536',
        '3SL' => 'E02005536',
        '3SN' => 'E02005536',
        '3SP' => 'E02005536',
        '3SQ' => 'E02005536',
        '3SR' => 'E02005536',
        '3SS' => 'E02005536',
        '3ST' => 'E02005536',
        '3SU' => 'E02005537',
        '3SW' => 'E02005536',
        '3SX' => 'E02005537',
        '3SY' => 'E02005537',
        '3SZ' => 'E02005537',
        '3TA' => 'E02005537',
        '3TB' => 'E02005537',
        '3TD' => 'E02005537',
        '3TE' => 'E02005537',
        '3TF' => 'E02005537',
        '3TG' => 'E02005537',
        '3TH' => 'E02005537',
        '3TJ' => 'E02005537',
        '3TL' => 'E02005537',
        '3TN' => 'E02005537',
        '3TP' => 'E02005537',
        '3TQ' => 'E02005537',
        '3TR' => 'E02005537',
        '3TS' => 'E02005537',
        '3TT' => 'E02005537',
        '3TU' => 'E02005537',
        '3TW' => 'E02005537',
        '3TX' => 'E02005537',
        '3TY' => 'E02005537',
        '3TZ' => 'E02005537',
        '3UA' => 'E02005537',
        '3UB' => 'E02005606',
        '3UD' => 'E02005536',
        '3UE' => 'E02005537',
        '3UF' => 'E02005537',
        '3UG' => 'E02005537',
        '3UH' => 'E02005537',
        '3UL' => 'E02005537',
        '3UQ' => 'E02005537',
        '3WA' => 'E02005537',
        '3WB' => 'E02005537',
        '3WD' => 'E02005537',
        '3WR' => 'E02005537',
        '3WS' => 'E02005537',
        '3WT' => 'E02005537',
        '3WU' => 'E02005537',
        '3WW' => 'E02005537',
        '3WX' => 'E02005537',
        '3WY' => 'E02005537',
        '3WZ' => 'E02005537',
        '3XA' => 'E02005537',
        '3XB' => 'E02005537',
        '3XD' => 'E02005537',
        '3XE' => 'E02005537',
        '3XR' => 'E02005537',
        '3YA' => 'E02005537',
        '3YR' => 'E02005537',
        '3YT' => 'E02005537',
        '3YU' => 'E02005537',
        '3YW' => 'E02005537',
        '3YY' => 'E02005537',
        '3ZB' => 'E02005537',
        '3ZN' => 'E02005537',
        '4AA' => 'E02005533',
        '4AB' => 'E02005533',
        '4AD' => 'E02005533',
        '4AE' => 'E02005533',
        '4AF' => 'E02005536',
        '4AG' => 'E02005536',
        '4AH' => 'E02005533',
        '4AJ' => 'E02005533',
        '4AL' => 'E02005533',
        '4AN' => 'E02005533',
        '4AP' => 'E02005533',
        '4AQ' => 'E02005533',
        '4AR' => 'E02005533',
        '4AS' => 'E02005533',
        '4AT' => 'E02005533',
        '4AU' => 'E02005533',
        '4AW' => 'E02005533',
        '4AX' => 'E02005533',
        '4AY' => 'E02005533',
        '4AZ' => 'E02005533',
        '4BA' => 'E02005533',
        '4BB' => 'E02005533',
        '4BD' => 'E02005533',
        '4BE' => 'E02005533',
        '4BF' => 'E02005533',
        '4BG' => 'E02005533',
        '4BH' => 'E02005533',
        '4BJ' => 'E02005533',
        '4BL' => 'E02005533',
        '4BN' => 'E02005533',
        '4BP' => 'E02005533',
        '4BQ' => 'E02005533',
        '4BS' => 'E02005533',
        '4BT' => 'E02005533',
        '4BU' => 'E02005533',
        '4BW' => 'E02005533',
        '4BX' => 'E02005533',
        '4BY' => 'E02005533',
        '4BZ' => 'E02005533',
        '4DA' => 'E02005533',
        '4DB' => 'E02005533',
        '4DD' => 'E02005533',
        '4DE' => 'E02005533',
        '4DF' => 'E02005533',
        '4DG' => 'E02005533',
        '4DH' => 'E02005533',
        '4DJ' => 'E02005533',
        '4DL' => 'E02005533',
        '4DN' => 'E02005536',
        '4DP' => 'E02005533',
        '4DQ' => 'E02005533',
        '4DR' => 'E02005533',
        '4DS' => 'E02005533',
        '4DT' => 'E02005533',
        '4DU' => 'E02005533',
        '4DW' => 'E02005533',
        '4DX' => 'E02005533',
        '4DY' => 'E02005533',
        '4DZ' => 'E02005536',
        '4EA' => 'E02005533',
        '4EB' => 'E02005533',
        '4ED' => 'E02005533',
        '4EE' => 'E02005533',
        '4EF' => 'E02005533',
        '4EG' => 'E02005533',
        '4EH' => 'E02005533',
        '4EJ' => 'E02005533',
        '4EL' => 'E02005537',
        '4EN' => 'E02005537',
        '4EP' => 'E02005533',
        '4EQ' => 'E02005533',
        '4ER' => 'E02005533',
        '4ES' => 'E02005533',
        '4ET' => 'E02005533',
        '4EU' => 'E02005533',
        '4EW' => 'E02005533',
        '4EX' => 'E02005533',
        '4EY' => 'E02005533',
        '4EZ' => 'E02005533',
        '4FA' => 'E02005533',
        '4FB' => 'E02005533',
        '4FD' => 'E02005533',
        '4FE' => 'E02005533',
        '4FF' => 'E02005533',
        '4FG' => 'E02005533',
        '4FH' => 'E02005533',
        '4FJ' => 'E02005533',
        '4FL' => 'E02005533',
        '4FN' => 'E02005533',
        '4FP' => 'E02005536',
        '4FQ' => 'E02005536',
        '4FR' => 'E02005536',
        '4FS' => 'E02005536',
        '4FT' => 'E02005533',
        '4GJ' => 'E02005533',
        '4GZ' => 'E02005533',
        '4HA' => 'E02005537',
        '4HB' => 'E02005533',
        '4HD' => 'E02005533',
        '4HE' => 'E02005536',
        '4HF' => 'E02005536',
        '4HG' => 'E02005536',
        '4HH' => 'E02005536',
        '4HJ' => 'E02005536',
        '4HL' => 'E02005536',
        '4HN' => 'E02005536',
        '4HP' => 'E02005536',
        '4HQ' => 'E02005536',
        '4HR' => 'E02005536',
        '4HS' => 'E02005536',
        '4HT' => 'E02005536',
        '4HU' => 'E02005536',
        '4HW' => 'E02005536',
        '4HX' => 'E02005536',
        '4HY' => 'E02005536',
        '4HZ' => 'E02005536',
        '4JA' => 'E02005536',
        '4JB' => 'E02005533',
        '4JD' => 'E02005533',
        '4JE' => 'E02005533',
        '4JF' => 'E02005533',
        '4JG' => 'E02005533',
        '4JH' => 'E02005533',
        '4JJ' => 'E02005533',
        '4JL' => 'E02005533',
        '4JN' => 'E02005533',
        '4JP' => 'E02005533',
        '4JQ' => 'E02005533',
        '4JR' => 'E02005533',
        '4JS' => 'E02005533',
        '4JT' => 'E02005533',
        '4JU' => 'E02005533',
        '4JW' => 'E02005533',
        '4JX' => 'E02005533',
        '4JY' => 'E02005533',
        '4JZ' => 'E02005533',
        '4LA' => 'E02005533',
        '4LB' => 'E02005533',
        '4LD' => 'E02005533',
        '4LE' => 'E02005533',
        '4LF' => 'E02005533',
        '4LG' => 'E02005533',
        '4LH' => 'E02005533',
        '4LJ' => 'E02005533',
        '4LL' => 'E02005533',
        '4LN' => 'E02005533',
        '4LP' => 'E02005533',
        '4LQ' => 'E02005533',
        '4LR' => 'E02005533',
        '4LS' => 'E02005533',
        '4LT' => 'E02005533',
        '4LU' => 'E02005533',
        '4LW' => 'E02005533',
        '4LX' => 'E02005533',
        '4LY' => 'E02005533',
        '4LZ' => 'E02005533',
        '4NA' => 'E02005533',
        '4NB' => 'E02005533',
        '4ND' => 'E02005533',
        '4NE' => 'E02005536',
        '4NF' => 'E02005536',
        '4NG' => 'E02005533',
        '4NH' => 'E02005536',
        '4NJ' => 'E02005533',
        '4NL' => 'E02005536',
        '4NN' => 'E02005536',
        '4NP' => 'E02005536',
        '4NQ' => 'E02005533',
        '4NR' => 'E02005536',
        '4NS' => 'E02005536',
        '4NT' => 'E02005536',
        '4NU' => 'E02005536',
        '4NW' => 'E02005536',
        '4NX' => 'E02005533',
        '4NY' => 'E02005533',
        '4NZ' => 'E02005533',
        '4PA' => 'E02005536',
        '4PB' => 'E02005533',
        '4PD' => 'E02005533',
        '4PE' => 'E02005536',
        '4PF' => 'E02005536',
        '4PG' => 'E02005533',
        '4PH' => 'E02005533',
        '4PJ' => 'E02005533',
        '4PL' => 'E02005533',
        '4PN' => 'E02005533',
        '4PP' => 'E02005533',
        '4PQ' => 'E02005533',
        '4PR' => 'E02005533',
        '4PS' => 'E02005533',
        '4PT' => 'E02005533',
        '4PU' => 'E02005533',
        '4PW' => 'E02005533',
        '4PX' => 'E02005533',
        '4PY' => 'E02005533',
        '4PZ' => 'E02005533',
        '4QA' => 'E02005533',
        '4QB' => 'E02005533',
        '4QD' => 'E02005533',
        '4QE' => 'E02005533',
        '4QF' => 'E02005533',
        '4QG' => 'E02005533',
        '4QH' => 'E02005533',
        '4QJ' => 'E02005533',
        '4QL' => 'E02005533',
        '4QN' => 'E02005533',
        '4QP' => 'E02005533',
        '4QQ' => 'E02005533',
        '4QR' => 'E02005533',
        '4QS' => 'E02005533',
        '4QT' => 'E02005533',
        '4QU' => 'E02005533',
        '4QW' => 'E02005533',
        '4QX' => 'E02005533',
        '4QY' => 'E02005533',
        '4QZ' => 'E02005533',
        '4RA' => 'E02005533',
        '4RB' => 'E02005533',
        '4RD' => 'E02005533',
        '4RE' => 'E02005533',
        '4RF' => 'E02005533',
        '4RG' => 'E02005533',
        '4RH' => 'E02005533',
        '4RJ' => 'E02005533',
        '4RL' => 'E02005533',
        '4RN' => 'E02005533',
        '4RP' => 'E02005533',
        '4RQ' => 'E02005533',
        '4RR' => 'E02005533',
        '4RS' => 'E02005533',
        '4RT' => 'E02005533',
        '4RU' => 'E02005533',
        '4RW' => 'E02005533',
        '4RX' => 'E02005533',
        '4RY' => 'E02005533',
        '4RZ' => 'E02005533',
        '4SA' => 'E02005533',
        '4SB' => 'E02005533',
        '4SD' => 'E02005533',
        '4SE' => 'E02005533',
        '4SF' => 'E02005533',
        '4SG' => 'E02005533',
        '4SH' => 'E02005533',
        '4SJ' => 'E02005533',
        '4SL' => 'E02005533',
        '4SP' => 'E02005533',
        '4SQ' => 'E02005533',
        '4SR' => 'E02005533',
        '4SS' => 'E02005533',
        '4ST' => 'E02005533',
        '4SU' => 'E02005533',
        '4SX' => 'E02005533',
        '4SY' => 'E02005533',
        '4SZ' => 'E02005533',
        '4TA' => 'E02005533',
        '4TB' => 'E02005533',
        '4TD' => 'E02005533',
        '4TE' => 'E02005533',
        '4TF' => 'E02005533',
        '4TG' => 'E02005533',
        '4TH' => 'E02005533',
        '4TJ' => 'E02005533',
        '4TL' => 'E02005533',
        '4TN' => 'E02005533',
        '4TP' => 'E02005533',
        '4TQ' => 'E02005533',
        '4TR' => 'E02005533',
        '4TS' => 'E02005533',
        '4TT' => 'E02005533',
        '4TU' => 'E02005533',
        '4TW' => 'E02005533',
        '4TX' => 'E02005533',
        '4TY' => 'E02005533',
        '4TZ' => 'E02005533',
        '4UA' => 'E02005533',
        '4UD' => 'E02005533',
        '4UE' => 'E02005533',
        '4UF' => 'E02005533',
        '4UH' => 'E02005533',
        '4UN' => 'E02005533',
        '4UY' => 'E02005533',
        '4UZ' => 'E02005533',
        '4WA' => 'E02005533',
        '4WB' => 'E02005536',
        '4WE' => 'E02005533',
        '4WF' => 'E02005533',
        '4WG' => 'E02005533',
        '4WH' => 'E02005533',
        '4WJ' => 'E02005533',
        '4WL' => 'E02005533',
        '4WP' => 'E02005533',
        '4WQ' => 'E02005533',
        '4WR' => 'E02005533',
        '4WS' => 'E02005533',
        '4WT' => 'E02005533',
        '4WU' => 'E02005536',
        '4WW' => 'E02005533',
        '4WX' => 'E02005533',
        '4WY' => 'E02005533',
        '4WZ' => 'E02005533',
        '4XA' => 'E02005536',
        '4YB' => 'E02005533',
        '4YJ' => 'E02005533',
        '4YW' => 'E02005533',
        '4YY' => 'E02005533',
        '4ZZ' => 'E02005533',
        '5AA' => 'E02005536',
        '5AB' => 'E02005527',
        '5AD' => 'E02005527',
        '5AE' => 'E02005536',
        '5AF' => 'E02005536',
        '5AG' => 'E02005536',
        '5AH' => 'E02005536',
        '5AJ' => 'E02005527',
        '5AL' => 'E02005536',
        '5AN' => 'E02005536',
        '5AP' => 'E02005536',
        '5AQ' => 'E02005536',
        '5AR' => 'E02005536',
        '5AS' => 'E02005536',
        '5AT' => 'E02005536',
        '5AU' => 'E02005527',
        '5AW' => 'E02005536',
        '5AX' => 'E02005527',
        '5AY' => 'E02005527',
        '5AZ' => 'E02005536',
        '5BA' => 'E02005535',
        '5BB' => 'E02005527',
        '5BD' => 'E02005535',
        '5BE' => 'E02005535',
        '5BF' => 'E02005527',
        '5BG' => 'E02005527',
        '5BH' => 'E02005527',
        '5BJ' => 'E02005527',
        '5BL' => 'E02005527',
        '5BN' => 'E02005527',
        '5BP' => 'E02005527',
        '5BQ' => 'E02005527',
        '5BS' => 'E02005527',
        '5BT' => 'E02005527',
        '5BU' => 'E02005527',
        '5BW' => 'E02005527',
        '5BX' => 'E02005527',
        '5BY' => 'E02005527',
        '5BZ' => 'E02005527',
        '5DA' => 'E02005527',
        '5DB' => 'E02005527',
        '5DD' => 'E02005527',
        '5DE' => 'E02005527',
        '5DF' => 'E02005527',
        '5DG' => 'E02005527',
        '5DH' => 'E02005527',
        '5DJ' => 'E02005527',
        '5DL' => 'E02005527',
        '5DN' => 'E02005536',
        '5DP' => 'E02005536',
        '5DQ' => 'E02005527',
        '5DR' => 'E02005536',
        '5DS' => 'E02005536',
        '5DT' => 'E02005536',
        '5DU' => 'E02005536',
        '5DW' => 'E02005536',
        '5DX' => 'E02005536',
        '5DY' => 'E02005527',
        '5DZ' => 'E02005527',
        '5EA' => 'E02005527',
        '5EB' => 'E02005527',
        '5ED' => 'E02005527',
        '5EE' => 'E02005527',
        '5EF' => 'E02005527',
        '5EG' => 'E02005527',
        '5EH' => 'E02005527',
        '5EJ' => 'E02005527',
        '5EL' => 'E02005527',
        '5EN' => 'E02005527',
        '5EP' => 'E02005527',
        '5EQ' => 'E02005527',
        '5ER' => 'E02005527',
        '5ES' => 'E02005527',
        '5ET' => 'E02005527',
        '5EU' => 'E02005527',
        '5EW' => 'E02005527',
        '5EX' => 'E02005527',
        '5EY' => 'E02005527',
        '5EZ' => 'E02005527',
        '5FA' => 'E02005527',
        '5FB' => 'E02005527',
        '5FD' => 'E02005527',
        '5FE' => 'E02005527',
        '5FF' => 'E02005527',
        '5FG' => 'E02005527',
        '5FH' => 'E02005527',
        '5FJ' => 'E02005527',
        '5FL' => 'E02005527',
        '5FN' => 'E02005536',
        '5FP' => 'E02005527',
        '5FQ' => 'E02005536',
        '5FR' => 'E02005527',
        '5FS' => 'E02005527',
        '5FT' => 'E02005536',
        '5FU' => 'E02005536',
        '5FW' => 'E02005527',
        '5FX' => 'E02005527',
        '5FY' => 'E02005536',
        '5FZ' => 'E02005536',
        '5GA' => 'E02005527',
        '5GD' => 'E02005536',
        '5GX' => 'E02005536',
        '5GY' => 'E02005536',
        '5GZ' => 'E02005536',
        '5HA' => 'E02005536',
        '5HB' => 'E02005536',
        '5HD' => 'E02005536',
        '5HE' => 'E02005536',
        '5HF' => 'E02005536',
        '5HG' => 'E02005536',
        '5HH' => 'E02005536',
        '5HJ' => 'E02005536',
        '5HL' => 'E02005536',
        '5HN' => 'E02005536',
        '5HP' => 'E02005527',
        '5HQ' => 'E02005536',
        '5HR' => 'E02005527',
        '5HS' => 'E02005536',
        '5HT' => 'E02005527',
        '5HU' => 'E02005527',
        '5HW' => 'E02005527',
        '5HX' => 'E02005527',
        '5HY' => 'E02005533',
        '5HZ' => 'E02005527',
        '5JA' => 'E02005527',
        '5JB' => 'E02005527',
        '5JD' => 'E02005527',
        '5JE' => 'E02005527',
        '5JF' => 'E02005527',
        '5JG' => 'E02005527',
        '5JH' => 'E02005527',
        '5JJ' => 'E02005527',
        '5JL' => 'E02005527',
        '5JN' => 'E02005536',
        '5JP' => 'E02005536',
        '5JQ' => 'E02005527',
        '5JR' => 'E02005527',
        '5JS' => 'E02005536',
        '5JT' => 'E02005536',
        '5JU' => 'E02005536',
        '5JW' => 'E02005536',
        '5JX' => 'E02005536',
        '5JY' => 'E02005536',
        '5JZ' => 'E02005536',
        '5LA' => 'E02005536',
        '5LB' => 'E02005536',
        '5LD' => 'E02005536',
        '5LE' => 'E02005536',
        '5LF' => 'E02005536',
        '5LG' => 'E02005536',
        '5LH' => 'E02005536',
        '5LJ' => 'E02005536',
        '5LL' => 'E02005536',
        '5LN' => 'E02005536',
        '5LP' => 'E02005536',
        '5LQ' => 'E02005536',
        '5LR' => 'E02005536',
        '5LS' => 'E02005536',
        '5LT' => 'E02005536',
        '5LU' => 'E02005536',
        '5LW' => 'E02005536',
        '5LX' => 'E02005536',
        '5LY' => 'E02005536',
        '5LZ' => 'E02005536',
        '5NA' => 'E02005536',
        '5NB' => 'E02005536',
        '5ND' => 'E02005536',
        '5NE' => 'E02005536',
        '5NF' => 'E02005536',
        '5NG' => 'E02005536',
        '5NH' => 'E02005536',
        '5NJ' => 'E02005536',
        '5NL' => 'E02005536',
        '5NN' => 'E02005536',
        '5NP' => 'E02005536',
        '5NQ' => 'E02005536',
        '5NR' => 'E02005536',
        '5NS' => 'E02005536',
        '5NT' => 'E02005536',
        '5NU' => 'E02005536',
        '5NW' => 'E02005536',
        '5NX' => 'E02005536',
        '5NY' => 'E02005536',
        '5NZ' => 'E02005536',
        '5PA' => 'E02005536',
        '5PB' => 'E02005536',
        '5PD' => 'E02005536',
        '5PE' => 'E02005536',
        '5PF' => 'E02005536',
        '5PG' => 'E02005536',
        '5PH' => 'E02005536',
        '5PJ' => 'E02005536',
        '5PL' => 'E02005536',
        '5PN' => 'E02005536',
        '5PP' => 'E02005536',
        '5PQ' => 'E02005536',
        '5PR' => 'E02005536',
        '5PS' => 'E02005536',
        '5PT' => 'E02005536',
        '5PU' => 'E02005536',
        '5PW' => 'E02005536',
        '5PX' => 'E02005536',
        '5PY' => 'E02005536',
        '5PZ' => 'E02005536',
        '5QA' => 'E02005536',
        '5QB' => 'E02005536',
        '5QD' => 'E02005536',
        '5QE' => 'E02005536',
        '5QF' => 'E02005536',
        '5QG' => 'E02005536',
        '5QH' => 'E02005536',
        '5QJ' => 'E02005536',
        '5QL' => 'E02005536',
        '5QN' => 'E02005536',
        '5QP' => 'E02005536',
        '5QQ' => 'E02005536',
        '5QR' => 'E02005536',
        '5QS' => 'E02005536',
        '5QT' => 'E02005536',
        '5QU' => 'E02005536',
        '5QW' => 'E02005536',
        '5QX' => 'E02005536',
        '5QY' => 'E02005536',
        '5QZ' => 'E02005536',
        '5RA' => 'E02005536',
        '5RB' => 'E02005536',
        '5RD' => 'E02005536',
        '5RE' => 'E02005536',
        '5RF' => 'E02005536',
        '5RG' => 'E02005536',
        '5RH' => 'E02005536',
        '5RJ' => 'E02005536',
        '5RL' => 'E02005536',
        '5RN' => 'E02005536',
        '5RP' => 'E02005536',
        '5RQ' => 'E02005536',
        '5RR' => 'E02005536',
        '5RS' => 'E02005536',
        '5RT' => 'E02005536',
        '5RU' => 'E02005536',
        '5RW' => 'E02005536',
        '5RX' => 'E02005536',
        '5RY' => 'E02005536',
        '5RZ' => 'E02005536',
        '5SA' => 'E02005536',
        '5SB' => 'E02005536',
        '5SD' => 'E02005536',
        '5SE' => 'E02005536',
        '5SF' => 'E02005536',
        '5SG' => 'E02005536',
        '5UU' => 'E02005536',
        '5UW' => 'E02005533',
        '5UX' => 'E02005536',
        '5UY' => 'E02005536',
        '5UZ' => 'E02005533',
        '5WA' => 'E02005536',
        '5WB' => 'E02005536',
        '5WD' => 'E02005536',
        '5WE' => 'E02005536',
        '5WF' => 'E02005536',
        '5WG' => 'E02005533',
        '5WH' => 'E02005536',
        '5WJ' => 'E02005536',
        '5WL' => 'E02005536',
        '5WN' => 'E02005536',
        '5WP' => 'E02005536',
        '5WQ' => 'E02005536',
        '5WR' => 'E02005536',
        '5WS' => 'E02005533',
        '5WT' => 'E02005536',
        '5WU' => 'E02005536',
        '5WW' => 'E02005536',
        '5WX' => 'E02005536',
        '5WY' => 'E02005536',
        '5WZ' => 'E02005533',
        '5XA' => 'E02005536',
        '5XB' => 'E02005536',
        '5XD' => 'E02005536',
        '5XE' => 'E02005536',
        '5XF' => 'E02005533',
        '5XG' => 'E02005536',
        '5XT' => 'E02005536',
        '5XU' => 'E02005536',
        '5XZ' => 'E02005536',
        '5ZB' => 'E02005536',
        '5ZQ' => 'E02005536',
        '6AA' => 'E02005527',
        '6AB' => 'E02005533',
        '6AD' => 'E02005527',
        '6AE' => 'E02005533',
        '6AF' => 'E02005533',
        '6AG' => 'E02005533',
        '6AH' => 'E02005533',
        '6AJ' => 'E02005533',
        '6AL' => 'E02005533',
        '6AN' => 'E02005533',
        '6AP' => 'E02005533',
        '6AQ' => 'E02005533',
        '6AR' => 'E02005533',
        '6AS' => 'E02005533',
        '6AT' => 'E02005533',
        '6AU' => 'E02005533',
        '6AW' => 'E02005533',
        '6AX' => 'E02005533',
        '6AY' => 'E02005533',
        '6AZ' => 'E02005533',
        '6BA' => 'E02005533',
        '6BB' => 'E02005533',
        '6BD' => 'E02005533',
        '6BE' => 'E02005533',
        '6BF' => 'E02005533',
        '6BG' => 'E02005533',
        '6BH' => 'E02005533',
        '6BJ' => 'E02005533',
        '6BL' => 'E02005533',
        '6BN' => 'E02005533',
        '6BP' => 'E02005533',
        '6BQ' => 'E02005533',
        '6BS' => 'E02005533',
        '6BT' => 'E02005533',
        '6BU' => 'E02005533',
        '6BW' => 'E02005533',
        '6BX' => 'E02005533',
        '6BY' => 'E02005533',
        '6BZ' => 'E02005533',
        '6DA' => 'E02005533',
        '6DB' => 'E02005533',
        '6DD' => 'E02005533',
        '6DE' => 'E02005533',
        '6DF' => 'E02005533',
        '6DG' => 'E02005533',
        '6DH' => 'E02005533',
        '6DJ' => 'E02005533',
        '6DL' => 'E02005533',
        '6DN' => 'E02005533',
        '6DP' => 'E02005533',
        '6DQ' => 'E02005533',
        '6DR' => 'E02005533',
        '6DS' => 'E02005533',
        '6DT' => 'E02005533',
        '6DU' => 'E02005533',
        '6DW' => 'E02005533',
        '6DX' => 'E02005533',
        '6DY' => 'E02005533',
        '6DZ' => 'E02005533',
        '6EA' => 'E02005533',
        '6EB' => 'E02005533',
        '6ED' => 'E02005533',
        '6EE' => 'E02005533',
        '6EF' => 'E02005533',
        '6EG' => 'E02005533',
        '6EH' => 'E02005533',
        '6EJ' => 'E02005533',
        '6EL' => 'E02005533',
        '6EN' => 'E02005533',
        '6EP' => 'E02005533',
        '6EQ' => 'E02005533',
        '6ER' => 'E02005533',
        '6ES' => 'E02005533',
        '6ET' => 'E02005537',
        '6EU' => 'E02005527',
        '6EW' => 'E02005533',
        '6EX' => 'E02005527',
        '6EY' => 'E02005527',
        '6EZ' => 'E02005527',
        '6FA' => 'E02005533',
        '6FB' => 'E02005527',
        '6FD' => 'E02005533',
        '6FE' => 'E02005533',
        '6FH' => 'E02005527',
        '6GA' => 'E02005527',
        '6GD' => 'E02005527',
        '6HA' => 'E02005527',
        '6HB' => 'E02005527',
        '6HD' => 'E02005527',
        '6HE' => 'E02005527',
        '6HF' => 'E02005532',
        '6HG' => 'E02005533',
        '6HH' => 'E02005533',
        '6HJ' => 'E02005533',
        '6HL' => 'E02005533',
        '6HN' => 'E02005533',
        '6HP' => 'E02005533',
        '6HQ' => 'E02005533',
        '6HR' => 'E02005533',
        '6HS' => 'E02005533',
        '6HT' => 'E02005533',
        '6HU' => 'E02005533',
        '6HW' => 'E02005533',
        '6HX' => 'E02005533',
        '6HY' => 'E02005533',
        '6HZ' => 'E02005533',
        '6JA' => 'E02005533',
        '6JB' => 'E02005533',
        '6JD' => 'E02005533',
        '6JE' => 'E02005533',
        '6JF' => 'E02005533',
        '6JG' => 'E02005533',
        '6JH' => 'E02005533',
        '6JJ' => 'E02005533',
        '6JL' => 'E02005533',
        '6JN' => 'E02005533',
        '6JP' => 'E02005527',
        '6JQ' => 'E02005533',
        '6JR' => 'E02005527',
        '6JS' => 'E02005533',
        '6JT' => 'E02005533',
        '6JU' => 'E02005537',
        '6JW' => 'E02005527',
        '6JX' => 'E02005527',
        '6JY' => 'E02005527',
        '6JZ' => 'E02005533',
        '6LA' => 'E02005532',
        '6LB' => 'E02005532',
        '6LD' => 'E02005527',
        '6LE' => 'E02005527',
        '6LF' => 'E02005527',
        '6LG' => 'E02005527',
        '6LH' => 'E02005527',
        '6LJ' => 'E02005527',
        '6LL' => 'E02005533',
        '6LN' => 'E02005527',
        '6LP' => 'E02005527',
        '6LQ' => 'E02005527',
        '6LR' => 'E02005527',
        '6LS' => 'E02005527',
        '6LT' => 'E02005527',
        '6LU' => 'E02005527',
        '6LW' => 'E02005527',
        '6LX' => 'E02005527',
        '6LY' => 'E02005527',
        '6LZ' => 'E02005532',
        '6NA' => 'E02005531',
        '6NB' => 'E02005531',
        '6ND' => 'E02005531',
        '6NE' => 'E02005527',
        '6NF' => 'E02005527',
        '6NG' => 'E02005527',
        '6NH' => 'E02005527',
        '6NJ' => 'E02005527',
        '6NL' => 'E02005527',
        '6NN' => 'E02005527',
        '6NP' => 'E02005527',
        '6NQ' => 'E02005527',
        '6NR' => 'E02005532',
        '6NS' => 'E02005527',
        '6NT' => 'E02005527',
        '6NU' => 'E02005527',
        '6NW' => 'E02005527',
        '6NX' => 'E02005527',
        '6NY' => 'E02005527',
        '6NZ' => 'E02005527',
        '6PA' => 'E02005527',
        '6PB' => 'E02005527',
        '6PD' => 'E02005527',
        '6PE' => 'E02005527',
        '6PF' => 'E02005527',
        '6PG' => 'E02005527',
        '6PH' => 'E02005527',
        '6PJ' => 'E02005527',
        '6PL' => 'E02005527',
        '6PN' => 'E02005527',
        '6PP' => 'E02005527',
        '6PQ' => 'E02005527',
        '6PR' => 'E02005527',
        '6PS' => 'E02005527',
        '6PT' => 'E02005527',
        '6PU' => 'E02005527',
        '6PW' => 'E02005527',
        '6PX' => 'E02005527',
        '6PY' => 'E02005527',
        '6PZ' => 'E02005527',
        '6QA' => 'E02005527',
        '6QB' => 'E02005527',
        '6QD' => 'E02005527',
        '6QE' => 'E02005527',
        '6QF' => 'E02005527',
        '6QG' => 'E02005527',
        '6QH' => 'E02005527',
        '6QJ' => 'E02005527',
        '6QL' => 'E02005527',
        '6QN' => 'E02005527',
        '6QP' => 'E02005527',
        '6QQ' => 'E02005527',
        '6QR' => 'E02005527',
        '6QS' => 'E02005527',
        '6QT' => 'E02005527',
        '6QU' => 'E02005527',
        '6QW' => 'E02005527',
        '6QX' => 'E02005527',
        '6QY' => 'E02005527',
        '6QZ' => 'E02005527',
        '6RA' => 'E02005527',
        '6RB' => 'E02005527',
        '6RD' => 'E02005527',
        '6RE' => 'E02005527',
        '6RF' => 'E02005527',
        '6RG' => 'E02005527',
        '6RH' => 'E02005527',
        '6RJ' => 'E02005527',
        '6RL' => 'E02005527',
        '6RN' => 'E02005527',
        '6RP' => 'E02005527',
        '6RQ' => 'E02005527',
        '6RR' => 'E02005527',
        '6RS' => 'E02005527',
        '6RT' => 'E02005527',
        '6RU' => 'E02005527',
        '6RW' => 'E02005527',
        '6RX' => 'E02005527',
        '6RY' => 'E02005527',
        '6RZ' => 'E02005527',
        '6SA' => 'E02005527',
        '6SB' => 'E02005527',
        '6SD' => 'E02005527',
        '6SE' => 'E02005527',
        '6SF' => 'E02005527',
        '6SG' => 'E02005527',
        '6SH' => 'E02005527',
        '6SJ' => 'E02005527',
        '6SL' => 'E02005527',
        '6SN' => 'E02005527',
        '6SP' => 'E02005527',
        '6SQ' => 'E02005527',
        '6SR' => 'E02005527',
        '6SS' => 'E02005527',
        '6ST' => 'E02005527',
        '6SU' => 'E02005527',
        '6SW' => 'E02005533',
        '6SX' => 'E02005527',
        '6SY' => 'E02005527',
        '6TA' => 'E02005527',
        '6TB' => 'E02005527',
        '6TD' => 'E02005527',
        '6TE' => 'E02005527',
        '6UA' => 'E02005527',
        '6WA' => 'E02005533',
        '6WB' => 'E02005533',
        '6WD' => 'E02005537',
        '6WE' => 'E02005533',
        '6WF' => 'E02005537',
        '6WG' => 'E02005532',
        '6WH' => 'E02005537',
        '6WJ' => 'E02005537',
        '6WP' => 'E02005537',
        '6WQ' => 'E02005537',
        '6WR' => 'E02005537',
        '6WS' => 'E02005537',
        '6WT' => 'E02005537',
        '6WU' => 'E02005537',
        '6WW' => 'E02005537',
        '6WX' => 'E02005532',
        '6WY' => 'E02005537',
        '6WZ' => 'E02005537',
        '6XA' => 'E02005533',
        '6XW' => 'E02005533',
        '6YR' => 'E02005533',
        '6YU' => 'E02005537',
        '6ZA' => 'E02005537',
        '6ZR' => 'E02005532',
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
