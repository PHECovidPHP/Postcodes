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
final class RG5
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '3AA' => 'E02003441',
        '3AB' => 'E02003441',
        '3AD' => 'E02003441',
        '3AE' => 'E02003443',
        '3AF' => 'E02003443',
        '3AG' => 'E02003443',
        '3AH' => 'E02003441',
        '3AJ' => 'E02003441',
        '3AL' => 'E02003441',
        '3AN' => 'E02003443',
        '3AP' => 'E02003441',
        '3AQ' => 'E02003443',
        '3AR' => 'E02003441',
        '3AS' => 'E02003441',
        '3AT' => 'E02003441',
        '3AU' => 'E02003441',
        '3AW' => 'E02003443',
        '3AX' => 'E02003441',
        '3AY' => 'E02003441',
        '3AZ' => 'E02003441',
        '3BA' => 'E02003441',
        '3BB' => 'E02003445',
        '3BD' => 'E02003399',
        '3BE' => 'E02003441',
        '3BF' => 'E02003443',
        '3BG' => 'E02003441',
        '3BH' => 'E02003441',
        '3BJ' => 'E02003441',
        '3BL' => 'E02003441',
        '3BN' => 'E02003441',
        '3BP' => 'E02003441',
        '3BQ' => 'E02003441',
        '3BS' => 'E02003441',
        '3BT' => 'E02003443',
        '3BU' => 'E02003441',
        '3BW' => 'E02003441',
        '3BX' => 'E02003443',
        '3BY' => 'E02003441',
        '3BZ' => 'E02003443',
        '3DA' => 'E02003443',
        '3DB' => 'E02003441',
        '3DD' => 'E02003441',
        '3DE' => 'E02003443',
        '3DF' => 'E02003443',
        '3DG' => 'E02003443',
        '3DH' => 'E02003443',
        '3DJ' => 'E02003443',
        '3DL' => 'E02003443',
        '3DN' => 'E02003443',
        '3DP' => 'E02003443',
        '3DQ' => 'E02003443',
        '3DR' => 'E02003443',
        '3DS' => 'E02003443',
        '3DT' => 'E02003443',
        '3DU' => 'E02003443',
        '3DW' => 'E02003443',
        '3DX' => 'E02003443',
        '3DY' => 'E02003443',
        '3DZ' => 'E02003443',
        '3EA' => 'E02003443',
        '3EB' => 'E02003443',
        '3ED' => 'E02003443',
        '3EE' => 'E02003443',
        '3EF' => 'E02003443',
        '3EG' => 'E02003443',
        '3EH' => 'E02003443',
        '3EJ' => 'E02003443',
        '3EL' => 'E02003443',
        '3EN' => 'E02003443',
        '3EP' => 'E02003443',
        '3EQ' => 'E02003445',
        '3ER' => 'E02003443',
        '3ES' => 'E02003443',
        '3ET' => 'E02003443',
        '3EU' => 'E02003443',
        '3EW' => 'E02003443',
        '3EX' => 'E02003443',
        '3EY' => 'E02003443',
        '3EZ' => 'E02003445',
        '3HA' => 'E02003443',
        '3HB' => 'E02003443',
        '3HD' => 'E02003443',
        '3HE' => 'E02003443',
        '3HF' => 'E02003445',
        '3HG' => 'E02003445',
        '3HH' => 'E02003445',
        '3HJ' => 'E02003443',
        '3HL' => 'E02003443',
        '3HN' => 'E02003445',
        '3HP' => 'E02003445',
        '3HQ' => 'E02003445',
        '3HR' => 'E02003445',
        '3HS' => 'E02003445',
        '3HT' => 'E02003445',
        '3HU' => 'E02003445',
        '3HW' => 'E02003445',
        '3HX' => 'E02003445',
        '3HY' => 'E02003445',
        '3HZ' => 'E02003443',
        '3JA' => 'E02003445',
        '3JB' => 'E02003445',
        '3JD' => 'E02003445',
        '3JE' => 'E02003445',
        '3JF' => 'E02003445',
        '3JG' => 'E02003445',
        '3JH' => 'E02003443',
        '3JJ' => 'E02003443',
        '3JL' => 'E02003443',
        '3JN' => 'E02003445',
        '3JP' => 'E02003443',
        '3JQ' => 'E02003445',
        '3JR' => 'E02003443',
        '3JS' => 'E02003443',
        '3JT' => 'E02003443',
        '3JU' => 'E02003443',
        '3JW' => 'E02003443',
        '3JX' => 'E02003443',
        '3JY' => 'E02003445',
        '3JZ' => 'E02003445',
        '3LA' => 'E02003443',
        '3LB' => 'E02003443',
        '3LD' => 'E02003443',
        '3LE' => 'E02003443',
        '3LF' => 'E02003443',
        '3LG' => 'E02003445',
        '3LH' => 'E02003445',
        '3LJ' => 'E02003445',
        '3LL' => 'E02003445',
        '3LN' => 'E02003445',
        '3LP' => 'E02003445',
        '3LQ' => 'E02003445',
        '3LR' => 'E02003445',
        '3LS' => 'E02003445',
        '3LT' => 'E02003445',
        '3LU' => 'E02003445',
        '3LW' => 'E02003445',
        '3LX' => 'E02003443',
        '3LY' => 'E02003445',
        '3LZ' => 'E02003445',
        '3NA' => 'E02003445',
        '3NB' => 'E02003445',
        '3ND' => 'E02003445',
        '3NE' => 'E02003445',
        '3NF' => 'E02003445',
        '3NG' => 'E02003445',
        '3NH' => 'E02003445',
        '3NJ' => 'E02003445',
        '3NL' => 'E02003445',
        '3NN' => 'E02003445',
        '3NP' => 'E02003445',
        '3NQ' => 'E02003445',
        '3NR' => 'E02003445',
        '3NS' => 'E02003445',
        '3NT' => 'E02003445',
        '3NU' => 'E02003445',
        '3NW' => 'E02003443',
        '3NX' => 'E02003445',
        '3NY' => 'E02003445',
        '3NZ' => 'E02003445',
        '3PA' => 'E02003445',
        '3PB' => 'E02003445',
        '3PD' => 'E02003445',
        '3PE' => 'E02003445',
        '3PF' => 'E02003445',
        '3PG' => 'E02003445',
        '3PH' => 'E02003443',
        '3PJ' => 'E02003443',
        '3PL' => 'E02003443',
        '3PN' => 'E02003443',
        '3PP' => 'E02003443',
        '3PQ' => 'E02003443',
        '3PR' => 'E02003443',
        '3PS' => 'E02003443',
        '3PT' => 'E02003443',
        '3PU' => 'E02003443',
        '3PW' => 'E02003445',
        '3PX' => 'E02003443',
        '3PY' => 'E02003445',
        '3PZ' => 'E02003443',
        '3QA' => 'E02003445',
        '3QB' => 'E02003443',
        '3QD' => 'E02003443',
        '3QE' => 'E02003443',
        '3QF' => 'E02003445',
        '3QG' => 'E02003443',
        '3QH' => 'E02003443',
        '3QJ' => 'E02003443',
        '3QL' => 'E02003443',
        '3QN' => 'E02003443',
        '3QP' => 'E02003443',
        '3QQ' => 'E02003443',
        '3QR' => 'E02003445',
        '3QS' => 'E02003445',
        '3QT' => 'E02003445',
        '3QU' => 'E02003445',
        '3QW' => 'E02003443',
        '3QX' => 'E02003445',
        '3QY' => 'E02003445',
        '3QZ' => 'E02003443',
        '3RA' => 'E02003445',
        '3RB' => 'E02003445',
        '3RD' => 'E02003445',
        '3RE' => 'E02003445',
        '3RG' => 'E02003445',
        '3RH' => 'E02003445',
        '3RJ' => 'E02003445',
        '3RL' => 'E02003445',
        '3RN' => 'E02003445',
        '3RP' => 'E02003445',
        '3RR' => 'E02003445',
        '3RS' => 'E02003445',
        '3RT' => 'E02003445',
        '3RU' => 'E02003445',
        '3RX' => 'E02003445',
        '3RY' => 'E02003445',
        '3RZ' => 'E02003445',
        '3SA' => 'E02003445',
        '3SD' => 'E02003405',
        '3SE' => 'E02003445',
        '3SF' => 'E02003445',
        '3SG' => 'E02003445',
        '3SH' => 'E02003445',
        '3SJ' => 'E02003445',
        '3SL' => 'E02003443',
        '3SN' => 'E02003399',
        '3SP' => 'E02003443',
        '3SQ' => 'E02003445',
        '3SS' => 'E02003443',
        '3SZ' => 'E02003443',
        '3UG' => 'E02003443',
        '3WA' => 'E02003445',
        '3WB' => 'E02003445',
        '3WD' => 'E02003445',
        '3WE' => 'E02003405',
        '3WG' => 'E02003399',
        '3WY' => 'E02003399',
        '3WZ' => 'E02003445',
        '3XA' => 'E02003399',
        '3XB' => 'E02003399',
        '3XD' => 'E02003445',
        '3XE' => 'E02003399',
        '3XF' => 'E02003399',
        '3XG' => 'E02003445',
        '3XH' => 'E02003445',
        '3XJ' => 'E02003405',
        '3XL' => 'E02003445',
        '3XN' => 'E02003399',
        '3XP' => 'E02003445',
        '3XQ' => 'E02003445',
        '3XR' => 'E02003445',
        '3XS' => 'E02003445',
        '3XT' => 'E02003445',
        '3XU' => 'E02003399',
        '3XW' => 'E02003399',
        '3XX' => 'E02003445',
        '3XY' => 'E02003445',
        '3XZ' => 'E02003399',
        '3YA' => 'E02003399',
        '3YB' => 'E02003399',
        '3YD' => 'E02003399',
        '3YE' => 'E02003443',
        '3YF' => 'E02003445',
        '3YG' => 'E02003399',
        '3YH' => 'E02003445',
        '3YJ' => 'E02003445',
        '3YL' => 'E02003443',
        '3YN' => 'E02003443',
        '3YP' => 'E02003399',
        '3YQ' => 'E02003399',
        '3YR' => 'E02003443',
        '3YS' => 'E02003443',
        '3YT' => 'E02003399',
        '3YU' => 'E02003443',
        '3YW' => 'E02003443',
        '3YX' => 'E02003443',
        '3YY' => 'E02003443',
        '3YZ' => 'E02003445',
        '3ZG' => 'E02003399',
        '3ZN' => 'E02003399',
        '3ZQ' => 'E02003399',
        '3ZW' => 'E02003399',
        '3ZX' => 'E02003399',
        '4AA' => 'E02003445',
        '4AB' => 'E02003443',
        '4AD' => 'E02003443',
        '4AE' => 'E02003443',
        '4AF' => 'E02003443',
        '4AG' => 'E02003443',
        '4AH' => 'E02003443',
        '4AJ' => 'E02003445',
        '4AL' => 'E02003445',
        '4AN' => 'E02003445',
        '4AP' => 'E02003445',
        '4AQ' => 'E02003443',
        '4AR' => 'E02003445',
        '4AS' => 'E02003445',
        '4AT' => 'E02003445',
        '4AU' => 'E02003445',
        '4AW' => 'E02003443',
        '4AX' => 'E02003443',
        '4AY' => 'E02003443',
        '4AZ' => 'E02003441',
        '4BA' => 'E02003445',
        '4BB' => 'E02003445',
        '4BD' => 'E02003442',
        '4BE' => 'E02003443',
        '4BF' => 'E02003442',
        '4BG' => 'E02003443',
        '4BH' => 'E02003442',
        '4BJ' => 'E02003442',
        '4BL' => 'E02003443',
        '4BN' => 'E02003443',
        '4BP' => 'E02003443',
        '4BQ' => 'E02003442',
        '4BS' => 'E02003443',
        '4BT' => 'E02003445',
        '4BU' => 'E02003445',
        '4BW' => 'E02003442',
        '4BX' => 'E02003445',
        '4BY' => 'E02003443',
        '4BZ' => 'E02003445',
        '4DA' => 'E02003445',
        '4DB' => 'E02003445',
        '4DD' => 'E02003442',
        '4DE' => 'E02003442',
        '4DF' => 'E02003442',
        '4DG' => 'E02003445',
        '4DH' => 'E02003445',
        '4DJ' => 'E02003445',
        '4DL' => 'E02003445',
        '4DN' => 'E02003445',
        '4DP' => 'E02003445',
        '4DQ' => 'E02003442',
        '4DR' => 'E02003442',
        '4DS' => 'E02003445',
        '4DT' => 'E02003445',
        '4DU' => 'E02003443',
        '4DW' => 'E02003445',
        '4DX' => 'E02003443',
        '4DY' => 'E02003442',
        '4DZ' => 'E02003443',
        '4EA' => 'E02003443',
        '4EB' => 'E02003442',
        '4ED' => 'E02003442',
        '4EE' => 'E02003442',
        '4EF' => 'E02003443',
        '4EG' => 'E02003445',
        '4EH' => 'E02003442',
        '4EJ' => 'E02003445',
        '4EL' => 'E02003445',
        '4EN' => 'E02003445',
        '4EP' => 'E02003445',
        '4EQ' => 'E02003445',
        '4ER' => 'E02003445',
        '4ES' => 'E02003445',
        '4ET' => 'E02003445',
        '4EU' => 'E02003445',
        '4EW' => 'E02003445',
        '4EX' => 'E02003445',
        '4EY' => 'E02003442',
        '4EZ' => 'E02003443',
        '4FA' => 'E02003442',
        '4FB' => 'E02003442',
        '4FD' => 'E02003442',
        '4FE' => 'E02003442',
        '4FF' => 'E02003399',
        '4FG' => 'E02003399',
        '4FH' => 'E02003442',
        '4FJ' => 'E02003399',
        '4FL' => 'E02003442',
        '4FN' => 'E02003441',
        '4FP' => 'E02003441',
        '4FQ' => 'E02003444',
        '4FR' => 'E02003441',
        '4FS' => 'E02003441',
        '4FT' => 'E02003444',
        '4FU' => 'E02003399',
        '4FW' => 'E02003399',
        '4FX' => 'E02003441',
        '4FY' => 'E02003441',
        '4FZ' => 'E02003441',
        '4GA' => 'E02003441',
        '4GB' => 'E02003444',
        '4GD' => 'E02003444',
        '4GE' => 'E02003445',
        '4GF' => 'E02003444',
        '4GG' => 'E02003399',
        '4GH' => 'E02003399',
        '4GJ' => 'E02003399',
        '4GL' => 'E02003399',
        '4GN' => 'E02003441',
        '4GP' => 'E02003444',
        '4GQ' => 'E02003399',
        '4GR' => 'E02003444',
        '4GS' => 'E02003441',
        '4GT' => 'E02003399',
        '4GU' => 'E02003444',
        '4GW' => 'E02003444',
        '4GX' => 'E02003441',
        '4GY' => 'E02003442',
        '4GZ' => 'E02003399',
        '4HA' => 'E02003442',
        '4HB' => 'E02003442',
        '4HD' => 'E02003442',
        '4HE' => 'E02003443',
        '4HF' => 'E02003443',
        '4HG' => 'E02003443',
        '4HH' => 'E02003443',
        '4HJ' => 'E02003441',
        '4HL' => 'E02003443',
        '4HN' => 'E02003443',
        '4HP' => 'E02003443',
        '4HQ' => 'E02003443',
        '4HR' => 'E02003443',
        '4HS' => 'E02003443',
        '4HT' => 'E02003441',
        '4HU' => 'E02003443',
        '4HW' => 'E02003443',
        '4HX' => 'E02003443',
        '4HY' => 'E02003443',
        '4HZ' => 'E02003442',
        '4JA' => 'E02003443',
        '4JB' => 'E02003441',
        '4JD' => 'E02003441',
        '4JE' => 'E02003443',
        '4JF' => 'E02003444',
        '4JG' => 'E02003441',
        '4JH' => 'E02003443',
        '4JJ' => 'E02003443',
        '4JL' => 'E02003443',
        '4JN' => 'E02003443',
        '4JP' => 'E02003443',
        '4JQ' => 'E02003441',
        '4JR' => 'E02003443',
        '4JS' => 'E02003443',
        '4JT' => 'E02003443',
        '4JU' => 'E02003443',
        '4JW' => 'E02003443',
        '4JX' => 'E02003443',
        '4JY' => 'E02003443',
        '4JZ' => 'E02003441',
        '4LA' => 'E02003443',
        '4LB' => 'E02003443',
        '4LD' => 'E02003441',
        '4LE' => 'E02003441',
        '4LF' => 'E02003441',
        '4LG' => 'E02003441',
        '4LH' => 'E02003441',
        '4LJ' => 'E02003441',
        '4LL' => 'E02003441',
        '4LN' => 'E02003441',
        '4LP' => 'E02003441',
        '4LQ' => 'E02003441',
        '4LR' => 'E02003441',
        '4LS' => 'E02003441',
        '4LT' => 'E02003441',
        '4LU' => 'E02003441',
        '4LW' => 'E02003441',
        '4LX' => 'E02003441',
        '4LY' => 'E02003441',
        '4LZ' => 'E02003441',
        '4NA' => 'E02003441',
        '4NB' => 'E02003441',
        '4ND' => 'E02003442',
        '4NE' => 'E02003442',
        '4NF' => 'E02003442',
        '4NG' => 'E02003442',
        '4NH' => 'E02003441',
        '4NJ' => 'E02003441',
        '4NL' => 'E02003442',
        '4NN' => 'E02003441',
        '4NP' => 'E02003441',
        '4NQ' => 'E02003442',
        '4NR' => 'E02003441',
        '4NS' => 'E02003441',
        '4NT' => 'E02003441',
        '4NU' => 'E02003441',
        '4NW' => 'E02003442',
        '4NX' => 'E02003441',
        '4NY' => 'E02003441',
        '4NZ' => 'E02003442',
        '4PA' => 'E02003442',
        '4PB' => 'E02003442',
        '4PD' => 'E02003442',
        '4PE' => 'E02003442',
        '4PF' => 'E02003442',
        '4PG' => 'E02003441',
        '4PH' => 'E02003441',
        '4PJ' => 'E02003441',
        '4PL' => 'E02003441',
        '4PN' => 'E02003441',
        '4PP' => 'E02003441',
        '4PQ' => 'E02003441',
        '4PR' => 'E02003441',
        '4PS' => 'E02003441',
        '4PT' => 'E02003441',
        '4PU' => 'E02003442',
        '4PW' => 'E02003442',
        '4PX' => 'E02003441',
        '4PY' => 'E02003441',
        '4PZ' => 'E02003441',
        '4QA' => 'E02003441',
        '4QB' => 'E02003441',
        '4QD' => 'E02003441',
        '4QE' => 'E02003441',
        '4QF' => 'E02003441',
        '4QG' => 'E02003441',
        '4QH' => 'E02003441',
        '4QJ' => 'E02003441',
        '4QL' => 'E02003441',
        '4QN' => 'E02003441',
        '4QP' => 'E02003441',
        '4QQ' => 'E02003441',
        '4QR' => 'E02003441',
        '4QS' => 'E02003441',
        '4QT' => 'E02003441',
        '4QU' => 'E02003441',
        '4QW' => 'E02003441',
        '4QX' => 'E02003441',
        '4QY' => 'E02003441',
        '4QZ' => 'E02003441',
        '4RA' => 'E02003441',
        '4RB' => 'E02003441',
        '4RD' => 'E02003441',
        '4RE' => 'E02003441',
        '4RF' => 'E02003442',
        '4RG' => 'E02003442',
        '4RH' => 'E02003443',
        '4RJ' => 'E02003441',
        '4RL' => 'E02003442',
        '4RN' => 'E02003442',
        '4RP' => 'E02003442',
        '4RQ' => 'E02003399',
        '4RR' => 'E02003442',
        '4RS' => 'E02003442',
        '4RT' => 'E02003442',
        '4RU' => 'E02003440',
        '4RW' => 'E02003442',
        '4RX' => 'E02003442',
        '4RY' => 'E02003442',
        '4RZ' => 'E02003441',
        '4SA' => 'E02003443',
        '4SB' => 'E02003441',
        '4SD' => 'E02003442',
        '4SE' => 'E02003441',
        '4SF' => 'E02003441',
        '4SG' => 'E02003443',
        '4SH' => 'E02003442',
        '4SJ' => 'E02003442',
        '4SL' => 'E02003443',
        '4SN' => 'E02003443',
        '4SP' => 'E02003443',
        '4SQ' => 'E02003441',
        '4SR' => 'E02003442',
        '4SS' => 'E02003442',
        '4ST' => 'E02003443',
        '4SU' => 'E02003442',
        '4SW' => 'E02003441',
        '4SX' => 'E02003442',
        '4SY' => 'E02003442',
        '4SZ' => 'E02003443',
        '4TA' => 'E02003442',
        '4TB' => 'E02003442',
        '4TD' => 'E02003442',
        '4TE' => 'E02003442',
        '4TF' => 'E02003443',
        '4TG' => 'E02003441',
        '4TH' => 'E02003442',
        '4TJ' => 'E02003442',
        '4TL' => 'E02003442',
        '4TN' => 'E02003444',
        '4TP' => 'E02003442',
        '4TQ' => 'E02003443',
        '4TR' => 'E02003443',
        '4TS' => 'E02003399',
        '4TT' => 'E02003441',
        '4TU' => 'E02003442',
        '4TW' => 'E02003441',
        '4TX' => 'E02003442',
        '4TY' => 'E02003442',
        '4TZ' => 'E02003442',
        '4UA' => 'E02003443',
        '4UB' => 'E02003442',
        '4UD' => 'E02003442',
        '4UE' => 'E02003442',
        '4UF' => 'E02003442',
        '4UG' => 'E02003442',
        '4UH' => 'E02003442',
        '4UJ' => 'E02003442',
        '4UL' => 'E02003442',
        '4UN' => 'E02003442',
        '4UP' => 'E02003442',
        '4UQ' => 'E02003442',
        '4UR' => 'E02003442',
        '4US' => 'E02003442',
        '4UT' => 'E02003442',
        '4UU' => 'E02003442',
        '4UW' => 'E02003442',
        '4UX' => 'E02003442',
        '4UY' => 'E02003442',
        '4UZ' => 'E02003442',
        '4WA' => 'E02003444',
        '4WB' => 'E02003444',
        '4WD' => 'E02003444',
        '4WE' => 'E02003399',
        '4WF' => 'E02003444',
        '4WG' => 'E02003444',
        '4WH' => 'E02003444',
        '4WJ' => 'E02003399',
        '4WL' => 'E02003442',
        '4WN' => 'E02003442',
        '4WP' => 'E02003442',
        '4WQ' => 'E02003442',
        '4WR' => 'E02003442',
        '4WS' => 'E02003399',
        '4WT' => 'E02003444',
        '4WX' => 'E02003444',
        '4WY' => 'E02003444',
        '4WZ' => 'E02003444',
        '4XA' => 'E02003442',
        '4XB' => 'E02003442',
        '4XD' => 'E02003442',
        '4XE' => 'E02003442',
        '4XF' => 'E02003442',
        '4XG' => 'E02003442',
        '4XH' => 'E02003442',
        '4XJ' => 'E02003442',
        '4XL' => 'E02003442',
        '4XN' => 'E02003442',
        '4XP' => 'E02003442',
        '4XQ' => 'E02003442',
        '4XR' => 'E02003442',
        '4XS' => 'E02003442',
        '4XT' => 'E02003444',
        '4XU' => 'E02003442',
        '4XW' => 'E02003442',
        '4XX' => 'E02003442',
        '4XY' => 'E02003442',
        '4XZ' => 'E02003442',
        '4YA' => 'E02003441',
        '4YB' => 'E02003441',
        '4YD' => 'E02003399',
        '4YE' => 'E02003442',
        '4YF' => 'E02003442',
        '4YG' => 'E02003442',
        '4YH' => 'E02003442',
        '4YJ' => 'E02003442',
        '4YL' => 'E02003442',
        '4YN' => 'E02003441',
        '4YP' => 'E02003442',
        '4YQ' => 'E02003444',
        '4YR' => 'E02003442',
        '4YS' => 'E02003442',
        '4YT' => 'E02003442',
        '4YU' => 'E02003441',
        '4YW' => 'E02003442',
        '4YX' => 'E02003442',
        '4YY' => 'E02003444',
        '4YZ' => 'E02003441',
        '4ZB' => 'E02003444',
        '4ZD' => 'E02003444',
        '4ZE' => 'E02003444',
        '4ZF' => 'E02003444',
        '4ZG' => 'E02003444',
        '4ZH' => 'E02003444',
        '4ZJ' => 'E02003444',
        '4ZL' => 'E02003444',
        '4ZN' => 'E02003444',
        '4ZP' => 'E02003399',
        '4ZQ' => 'E02003399',
        '4ZR' => 'E02003444',
        '4ZS' => 'E02003444',
        '4ZT' => 'E02003444',
        '4ZW' => 'E02003444',
        '4ZX' => 'E02003444',
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
