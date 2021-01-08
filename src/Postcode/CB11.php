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
final class CB11
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '3AA' => 'E02004592',
        '3AB' => 'E02004592',
        '3AD' => 'E02004592',
        '3AE' => 'E02004592',
        '3AF' => 'E02004592',
        '3AG' => 'E02004592',
        '3AH' => 'E02004592',
        '3AJ' => 'E02004592',
        '3AL' => 'E02004592',
        '3AN' => 'E02004592',
        '3AP' => 'E02004592',
        '3AQ' => 'E02004592',
        '3AR' => 'E02004592',
        '3AS' => 'E02004592',
        '3AT' => 'E02004592',
        '3AU' => 'E02004592',
        '3AW' => 'E02004592',
        '3AX' => 'E02004592',
        '3AY' => 'E02004592',
        '3AZ' => 'E02004592',
        '3BA' => 'E02004592',
        '3BB' => 'E02004592',
        '3BD' => 'E02004592',
        '3BE' => 'E02004592',
        '3BF' => 'E02004592',
        '3BG' => 'E02004592',
        '3BH' => 'E02004592',
        '3BJ' => 'E02004592',
        '3BL' => 'E02004592',
        '3BN' => 'E02004592',
        '3BP' => 'E02004592',
        '3BQ' => 'E02004593',
        '3BS' => 'E02004592',
        '3BT' => 'E02004592',
        '3BU' => 'E02004592',
        '3BW' => 'E02004592',
        '3BX' => 'E02004592',
        '3BY' => 'E02004592',
        '3BZ' => 'E02004593',
        '3DA' => 'E02004592',
        '3DB' => 'E02004592',
        '3DD' => 'E02004593',
        '3DE' => 'E02004591',
        '3DF' => 'E02004591',
        '3DG' => 'E02004592',
        '3DH' => 'E02004592',
        '3DJ' => 'E02004592',
        '3DL' => 'E02004591',
        '3DN' => 'E02004591',
        '3DP' => 'E02004592',
        '3DQ' => 'E02004592',
        '3DR' => 'E02004592',
        '3DS' => 'E02004591',
        '3DT' => 'E02004591',
        '3DU' => 'E02004591',
        '3DW' => 'E02004592',
        '3DX' => 'E02004591',
        '3DY' => 'E02004592',
        '3DZ' => 'E02004591',
        '3EA' => 'E02004591',
        '3EB' => 'E02004592',
        '3ED' => 'E02004592',
        '3EE' => 'E02004592',
        '3EF' => 'E02004592',
        '3EG' => 'E02004592',
        '3EH' => 'E02004592',
        '3EJ' => 'E02004592',
        '3EL' => 'E02004592',
        '3EN' => 'E02004592',
        '3EP' => 'E02004592',
        '3EQ' => 'E02004592',
        '3ER' => 'E02004592',
        '3ES' => 'E02004592',
        '3ET' => 'E02004592',
        '3EU' => 'E02004592',
        '3EW' => 'E02004592',
        '3EX' => 'E02004592',
        '3EY' => 'E02004592',
        '3EZ' => 'E02004592',
        '3FA' => 'E02004592',
        '3FB' => 'E02004592',
        '3FE' => 'E02004592',
        '3FF' => 'E02004592',
        '3FG' => 'E02004593',
        '3FH' => 'E02004592',
        '3FJ' => 'E02004593',
        '3FL' => 'E02004593',
        '3FN' => 'E02004593',
        '3FP' => 'E02004592',
        '3FQ' => 'E02004593',
        '3FR' => 'E02004593',
        '3FS' => 'E02004592',
        '3FT' => 'E02004593',
        '3FU' => 'E02004592',
        '3FW' => 'E02004592',
        '3FX' => 'E02004592',
        '3FY' => 'E02004592',
        '3FZ' => 'E02004592',
        '3GA' => 'E02004592',
        '3GB' => 'E02004592',
        '3GD' => 'E02004592',
        '3GE' => 'E02004593',
        '3GF' => 'E02004592',
        '3GG' => 'E02004592',
        '3GH' => 'E02004592',
        '3GJ' => 'E02004592',
        '3GL' => 'E02004592',
        '3GN' => 'E02004593',
        '3GP' => 'E02004592',
        '3GQ' => 'E02004592',
        '3GR' => 'E02004592',
        '3GU' => 'E02004593',
        '3GW' => 'E02004592',
        '3GX' => 'E02004592',
        '3GY' => 'E02004593',
        '3GZ' => 'E02004592',
        '3HA' => 'E02004592',
        '3HB' => 'E02004592',
        '3HD' => 'E02004592',
        '3HE' => 'E02004592',
        '3HF' => 'E02004592',
        '3HG' => 'E02004592',
        '3HH' => 'E02004592',
        '3HJ' => 'E02004592',
        '3HL' => 'E02004591',
        '3HN' => 'E02004592',
        '3HP' => 'E02004592',
        '3HQ' => 'E02004592',
        '3HR' => 'E02004592',
        '3HS' => 'E02004592',
        '3HT' => 'E02004592',
        '3HU' => 'E02004592',
        '3HW' => 'E02004592',
        '3HX' => 'E02004592',
        '3HY' => 'E02004592',
        '3HZ' => 'E02004593',
        '3JA' => 'E02004592',
        '3JB' => 'E02004592',
        '3JD' => 'E02004592',
        '3JE' => 'E02004592',
        '3JF' => 'E02004592',
        '3JG' => 'E02004591',
        '3JH' => 'E02004592',
        '3JJ' => 'E02004592',
        '3JL' => 'E02004592',
        '3JN' => 'E02004592',
        '3JP' => 'E02004592',
        '3JQ' => 'E02004592',
        '3JR' => 'E02004593',
        '3JS' => 'E02004592',
        '3JT' => 'E02004594',
        '3JU' => 'E02004594',
        '3JW' => 'E02004592',
        '3JX' => 'E02004594',
        '3JY' => 'E02004594',
        '3JZ' => 'E02004594',
        '3LA' => 'E02004594',
        '3LB' => 'E02004594',
        '3LD' => 'E02004594',
        '3LE' => 'E02004594',
        '3LF' => 'E02004594',
        '3LG' => 'E02004594',
        '3LH' => 'E02004594',
        '3LJ' => 'E02004594',
        '3LL' => 'E02004594',
        '3LN' => 'E02004594',
        '3LP' => 'E02004594',
        '3LQ' => 'E02004594',
        '3LR' => 'E02004594',
        '3LS' => 'E02004594',
        '3LT' => 'E02004594',
        '3LU' => 'E02004594',
        '3LW' => 'E02004594',
        '3LX' => 'E02004594',
        '3LY' => 'E02004594',
        '3LZ' => 'E02004594',
        '3NA' => 'E02004594',
        '3NB' => 'E02004592',
        '3ND' => 'E02004592',
        '3NE' => 'E02004593',
        '3NF' => 'E02004594',
        '3NG' => 'E02004594',
        '3NH' => 'E02004593',
        '3NJ' => 'E02004592',
        '3NL' => 'E02004592',
        '3NN' => 'E02004593',
        '3NP' => 'E02004593',
        '3NQ' => 'E02004592',
        '3NR' => 'E02004593',
        '3NS' => 'E02004592',
        '3NT' => 'E02004593',
        '3NU' => 'E02004593',
        '3NW' => 'E02004593',
        '3NX' => 'E02004593',
        '3NY' => 'E02004592',
        '3NZ' => 'E02004594',
        '3PA' => 'E02004593',
        '3PB' => 'E02004593',
        '3PD' => 'E02004593',
        '3PE' => 'E02004593',
        '3PF' => 'E02004593',
        '3PG' => 'E02004593',
        '3PH' => 'E02004593',
        '3PJ' => 'E02004593',
        '3PL' => 'E02004593',
        '3PN' => 'E02004593',
        '3PP' => 'E02004593',
        '3PQ' => 'E02004593',
        '3PR' => 'E02004593',
        '3PS' => 'E02004593',
        '3PT' => 'E02004593',
        '3PU' => 'E02004593',
        '3PW' => 'E02004593',
        '3PX' => 'E02004593',
        '3PY' => 'E02004593',
        '3PZ' => 'E02004593',
        '3QA' => 'E02004593',
        '3QB' => 'E02004593',
        '3QD' => 'E02004593',
        '3QE' => 'E02004593',
        '3QF' => 'E02004593',
        '3QG' => 'E02004593',
        '3QH' => 'E02004593',
        '3QJ' => 'E02004593',
        '3QL' => 'E02004593',
        '3QN' => 'E02004593',
        '3QP' => 'E02004593',
        '3QQ' => 'E02004593',
        '3QR' => 'E02004593',
        '3QS' => 'E02004593',
        '3QT' => 'E02004593',
        '3QU' => 'E02004593',
        '3QW' => 'E02004593',
        '3QX' => 'E02004593',
        '3QY' => 'E02004593',
        '3QZ' => 'E02004593',
        '3RA' => 'E02004593',
        '3RB' => 'E02004593',
        '3RD' => 'E02004593',
        '3RE' => 'E02004593',
        '3RF' => 'E02004593',
        '3RG' => 'E02004593',
        '3RH' => 'E02004593',
        '3RJ' => 'E02004593',
        '3RL' => 'E02004592',
        '3RN' => 'E02004593',
        '3RP' => 'E02004593',
        '3RQ' => 'E02004593',
        '3RR' => 'E02004593',
        '3RS' => 'E02004593',
        '3RT' => 'E02004593',
        '3RU' => 'E02004593',
        '3RW' => 'E02004593',
        '3RX' => 'E02004593',
        '3RY' => 'E02004593',
        '3RZ' => 'E02004593',
        '3SA' => 'E02004593',
        '3SB' => 'E02004593',
        '3SD' => 'E02004593',
        '3SE' => 'E02004593',
        '3SF' => 'E02004593',
        '3SG' => 'E02004593',
        '3SH' => 'E02004593',
        '3SJ' => 'E02004593',
        '3SL' => 'E02004593',
        '3SN' => 'E02004593',
        '3SP' => 'E02004593',
        '3SQ' => 'E02004593',
        '3SR' => 'E02004593',
        '3SS' => 'E02004593',
        '3ST' => 'E02004593',
        '3SU' => 'E02004593',
        '3SW' => 'E02004593',
        '3SX' => 'E02004593',
        '3SY' => 'E02004593',
        '3SZ' => 'E02004593',
        '3TA' => 'E02004593',
        '3TB' => 'E02004593',
        '3TH' => 'E02004593',
        '3TJ' => 'E02004593',
        '3TL' => 'E02004593',
        '3TN' => 'E02004593',
        '3TP' => 'E02004593',
        '3TQ' => 'E02004593',
        '3TR' => 'E02004593',
        '3TS' => 'E02004593',
        '3TT' => 'E02004593',
        '3TU' => 'E02004593',
        '3TW' => 'E02004593',
        '3TX' => 'E02004593',
        '3TY' => 'E02004593',
        '3TZ' => 'E02004593',
        '3UA' => 'E02004593',
        '3UB' => 'E02004593',
        '3UD' => 'E02004593',
        '3UE' => 'E02004593',
        '3UF' => 'E02004593',
        '3UG' => 'E02004593',
        '3UH' => 'E02004593',
        '3UJ' => 'E02004593',
        '3UL' => 'E02004593',
        '3UN' => 'E02004593',
        '3UQ' => 'E02004593',
        '3UR' => 'E02004593',
        '3UT' => 'E02004592',
        '3UU' => 'E02004593',
        '3UW' => 'E02004593',
        '3UX' => 'E02004593',
        '3UZ' => 'E02004592',
        '3WA' => 'E02004592',
        '3WB' => 'E02004592',
        '3WD' => 'E02004592',
        '3WE' => 'E02004592',
        '3WF' => 'E02004592',
        '3WG' => 'E02004592',
        '3WH' => 'E02004591',
        '3WJ' => 'E02004592',
        '3WN' => 'E02004592',
        '3WP' => 'E02004592',
        '3WQ' => 'E02004592',
        '3WR' => 'E02004593',
        '3WS' => 'E02004592',
        '3WT' => 'E02004593',
        '3WU' => 'E02004592',
        '3WW' => 'E02004592',
        '3WX' => 'E02004592',
        '3WY' => 'E02004592',
        '3WZ' => 'E02004592',
        '3XD' => 'E02004593',
        '3XE' => 'E02004593',
        '3XF' => 'E02004593',
        '3XG' => 'E02004593',
        '3XH' => 'E02004593',
        '3XJ' => 'E02004593',
        '3XL' => 'E02004593',
        '3XN' => 'E02004593',
        '3XP' => 'E02004595',
        '3XQ' => 'E02004593',
        '3XR' => 'E02004595',
        '3XS' => 'E02004595',
        '3XT' => 'E02004592',
        '3XU' => 'E02004593',
        '3XW' => 'E02004593',
        '3XY' => 'E02004593',
        '3YA' => 'E02004593',
        '3YB' => 'E02004593',
        '3YD' => 'E02004593',
        '3YE' => 'E02004593',
        '3YF' => 'E02004593',
        '3YG' => 'E02004593',
        '3YH' => 'E02004593',
        '3YJ' => 'E02004593',
        '3YL' => 'E02004593',
        '3YN' => 'E02004593',
        '3YP' => 'E02004592',
        '3YQ' => 'E02004593',
        '3YW' => 'E02004593',
        '3YX' => 'E02004592',
        '3YY' => 'E02004592',
        '3YZ' => 'E02004593',
        '3ZA' => 'E02004593',
        '3ZB' => 'E02004593',
        '3ZD' => 'E02004593',
        '3ZE' => 'E02004593',
        '3ZF' => 'E02004593',
        '3ZG' => 'E02004593',
        '3ZH' => 'E02004593',
        '3ZJ' => 'E02004592',
        '3ZL' => 'E02004593',
        '3ZN' => 'E02004593',
        '3ZQ' => 'E02004592',
        '3ZR' => 'E02004593',
        '3ZX' => 'E02004593',
        '4AA' => 'E02004591',
        '4AB' => 'E02004591',
        '4AD' => 'E02004591',
        '4AE' => 'E02004591',
        '4AF' => 'E02004591',
        '4AG' => 'E02004591',
        '4AH' => 'E02004591',
        '4AJ' => 'E02004591',
        '4AL' => 'E02004591',
        '4AN' => 'E02004591',
        '4AP' => 'E02004592',
        '4AQ' => 'E02004591',
        '4AR' => 'E02004592',
        '4AS' => 'E02004592',
        '4AT' => 'E02004592',
        '4AU' => 'E02004592',
        '4AW' => 'E02004592',
        '4AX' => 'E02004592',
        '4AY' => 'E02004592',
        '4AZ' => 'E02004592',
        '4BA' => 'E02004592',
        '4BB' => 'E02004592',
        '4BD' => 'E02004592',
        '4BE' => 'E02004592',
        '4BF' => 'E02004593',
        '4BG' => 'E02004592',
        '4BH' => 'E02004592',
        '4BJ' => 'E02004592',
        '4BL' => 'E02004592',
        '4BN' => 'E02004592',
        '4BP' => 'E02004591',
        '4BQ' => 'E02004592',
        '4BS' => 'E02004591',
        '4BT' => 'E02004591',
        '4BU' => 'E02004592',
        '4BW' => 'E02004592',
        '4BX' => 'E02004592',
        '4BY' => 'E02004592',
        '4BZ' => 'E02004592',
        '4DA' => 'E02004592',
        '4DB' => 'E02004592',
        '4DD' => 'E02004592',
        '4DE' => 'E02004592',
        '4DF' => 'E02004592',
        '4DG' => 'E02004592',
        '4DH' => 'E02004592',
        '4DJ' => 'E02004592',
        '4DL' => 'E02004591',
        '4DN' => 'E02004592',
        '4DP' => 'E02004592',
        '4DQ' => 'E02004592',
        '4DR' => 'E02004592',
        '4DS' => 'E02004592',
        '4DT' => 'E02004592',
        '4DU' => 'E02004592',
        '4DW' => 'E02004592',
        '4DX' => 'E02004591',
        '4DY' => 'E02004592',
        '4DZ' => 'E02004591',
        '4EA' => 'E02004592',
        '4EB' => 'E02004592',
        '4ED' => 'E02004592',
        '4EE' => 'E02004591',
        '4EF' => 'E02004591',
        '4EG' => 'E02004591',
        '4EH' => 'E02004591',
        '4EJ' => 'E02004592',
        '4EL' => 'E02004592',
        '4EN' => 'E02004591',
        '4EP' => 'E02004591',
        '4EQ' => 'E02004591',
        '4ER' => 'E02004591',
        '4ES' => 'E02004593',
        '4ET' => 'E02004592',
        '4EU' => 'E02004593',
        '4EW' => 'E02004592',
        '4EX' => 'E02004593',
        '4EY' => 'E02004593',
        '4EZ' => 'E02004593',
        '4FA' => 'E02004592',
        '4FB' => 'E02004593',
        '4FD' => 'E02004593',
        '4FE' => 'E02004592',
        '4FF' => 'E02004593',
        '4FG' => 'E02004591',
        '4FH' => 'E02004593',
        '4FJ' => 'E02004593',
        '4FL' => 'E02004592',
        '4FN' => 'E02004592',
        '4FP' => 'E02004593',
        '4FQ' => 'E02004592',
        '4FR' => 'E02004592',
        '4FS' => 'E02004591',
        '4FT' => 'E02004593',
        '4FU' => 'E02004593',
        '4FW' => 'E02004592',
        '4FX' => 'E02004592',
        '4FY' => 'E02004593',
        '4FZ' => 'E02004593',
        '4GA' => 'E02004592',
        '4GB' => 'E02004593',
        '4GD' => 'E02004591',
        '4GE' => 'E02004592',
        '4GF' => 'E02004592',
        '4GG' => 'E02004592',
        '4GH' => 'E02004592',
        '4GJ' => 'E02004592',
        '4GL' => 'E02004592',
        '4GN' => 'E02004592',
        '4GP' => 'E02004592',
        '4GQ' => 'E02004593',
        '4GR' => 'E02004593',
        '4HA' => 'E02004593',
        '4HB' => 'E02004593',
        '4HD' => 'E02004593',
        '4HE' => 'E02004593',
        '4HF' => 'E02004593',
        '4HG' => 'E02004593',
        '4HH' => 'E02004593',
        '4HJ' => 'E02004593',
        '4HL' => 'E02004593',
        '4HN' => 'E02004593',
        '4HQ' => 'E02004593',
        '4HR' => 'E02004593',
        '4HS' => 'E02004593',
        '4HT' => 'E02004592',
        '4HU' => 'E02004593',
        '4HW' => 'E02004593',
        '4JA' => 'E02004591',
        '4JB' => 'E02004591',
        '4JD' => 'E02004591',
        '4JE' => 'E02004591',
        '4JF' => 'E02004591',
        '4JG' => 'E02004593',
        '4JH' => 'E02004593',
        '4JJ' => 'E02004593',
        '4JL' => 'E02004593',
        '4JN' => 'E02004593',
        '4JP' => 'E02004593',
        '4JQ' => 'E02004593',
        '4JR' => 'E02004593',
        '4JS' => 'E02004593',
        '4JT' => 'E02004593',
        '4JU' => 'E02004593',
        '4JW' => 'E02004593',
        '4JX' => 'E02004593',
        '4JY' => 'E02004593',
        '4JZ' => 'E02004593',
        '4LA' => 'E02004593',
        '4LB' => 'E02004593',
        '4LD' => 'E02004593',
        '4LE' => 'E02004593',
        '4LF' => 'E02004591',
        '4LG' => 'E02004593',
        '4LH' => 'E02004591',
        '4LJ' => 'E02004592',
        '4LL' => 'E02004593',
        '4LN' => 'E02004593',
        '4LQ' => 'E02004593',
        '4LT' => 'E02004593',
        '4LU' => 'E02004593',
        '4LW' => 'E02004593',
        '4LX' => 'E02004593',
        '4LY' => 'E02004593',
        '4LZ' => 'E02004593',
        '4NA' => 'E02004593',
        '4NB' => 'E02004593',
        '4ND' => 'E02004593',
        '4NE' => 'E02004593',
        '4NF' => 'E02004593',
        '4NG' => 'E02004593',
        '4NH' => 'E02004593',
        '4NJ' => 'E02004593',
        '4NL' => 'E02004593',
        '4NN' => 'E02004593',
        '4NP' => 'E02004593',
        '4NQ' => 'E02004593',
        '4NR' => 'E02004593',
        '4NS' => 'E02004593',
        '4NW' => 'E02004593',
        '4PB' => 'E02004593',
        '4PE' => 'E02004593',
        '4PF' => 'E02004593',
        '4PG' => 'E02004593',
        '4PH' => 'E02004593',
        '4PJ' => 'E02004593',
        '4PL' => 'E02004593',
        '4PN' => 'E02004593',
        '4PP' => 'E02004593',
        '4PQ' => 'E02004593',
        '4PR' => 'E02004593',
        '4PS' => 'E02004593',
        '4PT' => 'E02004593',
        '4PU' => 'E02004593',
        '4PW' => 'E02004593',
        '4PX' => 'E02004593',
        '4PY' => 'E02004593',
        '4PZ' => 'E02004593',
        '4QB' => 'E02004593',
        '4QD' => 'E02004593',
        '4QE' => 'E02004593',
        '4QL' => 'E02004593',
        '4QN' => 'E02004593',
        '4QP' => 'E02004593',
        '4QR' => 'E02004593',
        '4QS' => 'E02004593',
        '4QT' => 'E02004593',
        '4QU' => 'E02004593',
        '4QW' => 'E02004593',
        '4QX' => 'E02004593',
        '4QY' => 'E02004593',
        '4QZ' => 'E02004593',
        '4RA' => 'E02004592',
        '4RB' => 'E02004592',
        '4RL' => 'E02004593',
        '4RN' => 'E02004593',
        '4RP' => 'E02004593',
        '4RR' => 'E02004593',
        '4RS' => 'E02004593',
        '4RT' => 'E02004593',
        '4RU' => 'E02004593',
        '4RW' => 'E02004593',
        '4RX' => 'E02004593',
        '4RY' => 'E02004593',
        '4RZ' => 'E02004593',
        '4SA' => 'E02004593',
        '4SB' => 'E02004593',
        '4SD' => 'E02004593',
        '4SE' => 'E02004593',
        '4SF' => 'E02004593',
        '4SG' => 'E02004593',
        '4SH' => 'E02004593',
        '4SJ' => 'E02004593',
        '4SL' => 'E02004593',
        '4SN' => 'E02004593',
        '4SQ' => 'E02004593',
        '4SW' => 'E02004593',
        '4TA' => 'E02004593',
        '4TB' => 'E02004593',
        '4TD' => 'E02004593',
        '4TE' => 'E02004593',
        '4TF' => 'E02004593',
        '4TG' => 'E02004593',
        '4TH' => 'E02004593',
        '4TJ' => 'E02004593',
        '4TL' => 'E02004593',
        '4TN' => 'E02004593',
        '4TP' => 'E02004593',
        '4TQ' => 'E02004593',
        '4TR' => 'E02004593',
        '4TS' => 'E02004593',
        '4TT' => 'E02004593',
        '4TU' => 'E02004593',
        '4TW' => 'E02004593',
        '4TX' => 'E02004593',
        '4TY' => 'E02004593',
        '4UH' => 'E02004591',
        '4UJ' => 'E02004593',
        '4UL' => 'E02004593',
        '4UN' => 'E02004593',
        '4UP' => 'E02004593',
        '4UR' => 'E02004593',
        '4US' => 'E02004593',
        '4UT' => 'E02004593',
        '4UU' => 'E02004593',
        '4UW' => 'E02004593',
        '4UX' => 'E02004593',
        '4UY' => 'E02004593',
        '4UZ' => 'E02004593',
        '4WA' => 'E02004593',
        '4WB' => 'E02004592',
        '4WD' => 'E02004592',
        '4WG' => 'E02004593',
        '4WQ' => 'E02004592',
        '4WR' => 'E02004592',
        '4WS' => 'E02004592',
        '4WT' => 'E02004592',
        '4WU' => 'E02004592',
        '4WW' => 'E02004592',
        '4WX' => 'E02004592',
        '4WY' => 'E02004592',
        '4WZ' => 'E02004592',
        '4XA' => 'E02004593',
        '4XB' => 'E02004593',
        '4XD' => 'E02004593',
        '4XE' => 'E02004593',
        '4XF' => 'E02004593',
        '4XG' => 'E02004593',
        '4XH' => 'E02004593',
        '4XJ' => 'E02004593',
        '4XL' => 'E02004593',
        '4XN' => 'E02004593',
        '4XP' => 'E02004592',
        '4XQ' => 'E02004593',
        '4XR' => 'E02004592',
        '4XS' => 'E02004593',
        '4XT' => 'E02004593',
        '4XU' => 'E02004593',
        '4XW' => 'E02004593',
        '4XZ' => 'E02004593',
        '4YA' => 'E02004593',
        '4YB' => 'E02004593',
        '4YD' => 'E02004593',
        '4YE' => 'E02004593',
        '4YF' => 'E02004592',
        '4YG' => 'E02004593',
        '4YH' => 'E02004593',
        '4YN' => 'E02004593',
        '4YP' => 'E02004593',
        '4YQ' => 'E02004592',
        '4YR' => 'E02004592',
        '4YS' => 'E02004593',
        '4YT' => 'E02004593',
        '4YU' => 'E02004592',
        '4YW' => 'E02004592',
        '4YX' => 'E02004593',
        '4YY' => 'E02004593',
        '4YZ' => 'E02004592',
        '4ZH' => 'E02004591',
        '4ZJ' => 'E02004592',
        '4ZL' => 'E02004592',
        '4ZN' => 'E02004592',
        '4ZQ' => 'E02004592',
        '4ZR' => 'E02004592',
        '4ZS' => 'E02004592',
        '4ZU' => 'E02004592',
        '4ZX' => 'E02004592',
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
