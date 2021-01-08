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
final class HU7
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02002667',
        '0AB' => 'E02002667',
        '0AD' => 'E02002667',
        '0AE' => 'E02002667',
        '0AF' => 'E02002657',
        '0AG' => 'E02002667',
        '0AH' => 'E02002657',
        '0AJ' => 'E02002667',
        '0AL' => 'E02002667',
        '0AN' => 'E02002667',
        '0AP' => 'E02002667',
        '0AS' => 'E02002655',
        '0AT' => 'E02002664',
        '0AW' => 'E02002667',
        '0AZ' => 'E02002667',
        '0BA' => 'E02002667',
        '0BB' => 'E02002667',
        '0BD' => 'E02002666',
        '0BE' => 'E02002667',
        '0BF' => 'E02002667',
        '0BG' => 'E02002667',
        '0BH' => 'E02002667',
        '0BJ' => 'E02002667',
        '0BL' => 'E02002667',
        '0BN' => 'E02002667',
        '0BP' => 'E02002657',
        '0BQ' => 'E02002667',
        '0BS' => 'E02002667',
        '0BT' => 'E02002667',
        '0BU' => 'E02002667',
        '0BW' => 'E02002667',
        '0BX' => 'E02002667',
        '0BY' => 'E02002667',
        '0BZ' => 'E02002664',
        '0DA' => 'E02002667',
        '0DB' => 'E02002667',
        '0DD' => 'E02002667',
        '0DE' => 'E02002667',
        '0DF' => 'E02002667',
        '0DG' => 'E02002664',
        '0DH' => 'E02002667',
        '0DJ' => 'E02002667',
        '0DL' => 'E02002664',
        '0DN' => 'E02002667',
        '0DP' => 'E02002667',
        '0DQ' => 'E02002664',
        '0DR' => 'E02002664',
        '0DS' => 'E02002664',
        '0DT' => 'E02002664',
        '0DU' => 'E02002664',
        '0DW' => 'E02002664',
        '0DX' => 'E02002667',
        '0DY' => 'E02002667',
        '0DZ' => 'E02002667',
        '0EA' => 'E02002664',
        '0EB' => 'E02002664',
        '0ED' => 'E02002664',
        '0EE' => 'E02002664',
        '0EF' => 'E02002664',
        '0EG' => 'E02002667',
        '0EH' => 'E02002664',
        '0EJ' => 'E02002664',
        '0EL' => 'E02002664',
        '0EN' => 'E02002664',
        '0ER' => 'E02002667',
        '0ES' => 'E02002667',
        '0FB' => 'E02002667',
        '0FD' => 'E02002667',
        '0FE' => 'E02002667',
        '0FF' => 'E02002667',
        '0FG' => 'E02002667',
        '0NZ' => 'E02002667',
        '0UQ' => 'E02002667',
        '0UR' => 'E02002667',
        '0US' => 'E02002667',
        '0UT' => 'E02002667',
        '0UU' => 'E02002667',
        '0UW' => 'E02002667',
        '0UX' => 'E02002667',
        '0UY' => 'E02002667',
        '0WD' => 'E02002667',
        '0WH' => 'E02002667',
        '0WJ' => 'E02002667',
        '0WL' => 'E02002667',
        '0WN' => 'E02002667',
        '0WP' => 'E02002667',
        '0WQ' => 'E02002667',
        '0WR' => 'E02002667',
        '0WS' => 'E02002667',
        '0WT' => 'E02002667',
        '0WU' => 'E02002667',
        '0WW' => 'E02002667',
        '0WX' => 'E02002667',
        '0WY' => 'E02002667',
        '0WZ' => 'E02002667',
        '0XA' => 'E02002667',
        '0XD' => 'E02002667',
        '0XE' => 'E02002667',
        '0XF' => 'E02002667',
        '0XG' => 'E02002667',
        '0XH' => 'E02002664',
        '0XJ' => 'E02002667',
        '0XL' => 'E02002667',
        '0XN' => 'E02002667',
        '0XP' => 'E02002667',
        '0XQ' => 'E02002667',
        '0XR' => 'E02002667',
        '0XS' => 'E02002667',
        '0XT' => 'E02002667',
        '0XU' => 'E02002667',
        '0XW' => 'E02002667',
        '0XX' => 'E02002667',
        '0XY' => 'E02002667',
        '0XZ' => 'E02002667',
        '0YA' => 'E02002667',
        '0YB' => 'E02002667',
        '0YD' => 'E02002667',
        '0YE' => 'E02002667',
        '0YF' => 'E02002667',
        '0YG' => 'E02002667',
        '0YH' => 'E02002667',
        '0YJ' => 'E02002667',
        '0YL' => 'E02002667',
        '0YN' => 'E02002667',
        '0YP' => 'E02002667',
        '0YQ' => 'E02002667',
        '0YR' => 'E02002667',
        '0YS' => 'E02002667',
        '0YT' => 'E02002667',
        '0YU' => 'E02002667',
        '0YW' => 'E02002667',
        '0YX' => 'E02002667',
        '0YY' => 'E02002667',
        '0YZ' => 'E02002667',
        '0ZY' => 'E02002667',
        '3AA' => 'E02002652',
        '3AB' => 'E02002652',
        '3AD' => 'E02002652',
        '3AE' => 'E02002652',
        '3AF' => 'E02002652',
        '3AG' => 'E02002652',
        '3AH' => 'E02002652',
        '3AJ' => 'E02002652',
        '3AL' => 'E02002652',
        '3AN' => 'E02002652',
        '3AP' => 'E02002652',
        '3AQ' => 'E02002652',
        '3AR' => 'E02002652',
        '3AS' => 'E02002652',
        '3AT' => 'E02002652',
        '3AU' => 'E02002652',
        '3AW' => 'E02002652',
        '3AX' => 'E02002652',
        '3AY' => 'E02002652',
        '3AZ' => 'E02002652',
        '3BA' => 'E02002657',
        '3BH' => 'E02002657',
        '3BN' => 'E02002657',
        '3BP' => 'E02002657',
        '3BQ' => 'E02002657',
        '3BW' => 'E02002657',
        '3BX' => 'E02002657',
        '3BY' => 'E02002657',
        '3BZ' => 'E02002657',
        '3DA' => 'E02002652',
        '3DB' => 'E02002652',
        '3DD' => 'E02002652',
        '3DE' => 'E02002657',
        '3DF' => 'E02002652',
        '3DG' => 'E02002652',
        '3DH' => 'E02002652',
        '3DJ' => 'E02002652',
        '3DL' => 'E02002652',
        '3DN' => 'E02002652',
        '3DP' => 'E02002652',
        '3DQ' => 'E02002652',
        '3DR' => 'E02002652',
        '3DS' => 'E02002652',
        '3DT' => 'E02002652',
        '3DU' => 'E02002652',
        '3DW' => 'E02002652',
        '3DX' => 'E02002652',
        '3DY' => 'E02002652',
        '3DZ' => 'E02002652',
        '3EA' => 'E02002652',
        '3EB' => 'E02002652',
        '3ED' => 'E02002652',
        '3EE' => 'E02002652',
        '3EF' => 'E02002652',
        '3EG' => 'E02002652',
        '3EH' => 'E02002652',
        '3EJ' => 'E02002652',
        '3EL' => 'E02002652',
        '3EN' => 'E02002652',
        '3EP' => 'E02002652',
        '3EQ' => 'E02002652',
        '3ER' => 'E02002652',
        '3ES' => 'E02002652',
        '3ET' => 'E02002652',
        '3EU' => 'E02002652',
        '3EW' => 'E02002652',
        '3EX' => 'E02002652',
        '3EY' => 'E02002652',
        '3EZ' => 'E02002652',
        '3FA' => 'E02002652',
        '3FB' => 'E02002652',
        '3FD' => 'E02002652',
        '3FF' => 'E02002652',
        '3FG' => 'E02002652',
        '3FH' => 'E02002652',
        '3FJ' => 'E02002652',
        '3FL' => 'E02002652',
        '3FN' => 'E02002652',
        '3FP' => 'E02002652',
        '3FQ' => 'E02002652',
        '3FR' => 'E02002652',
        '3FS' => 'E02002652',
        '3FT' => 'E02002652',
        '3FU' => 'E02002652',
        '3FW' => 'E02002652',
        '3FX' => 'E02002652',
        '3FY' => 'E02002652',
        '3FZ' => 'E02002652',
        '3GA' => 'E02002652',
        '3GB' => 'E02002652',
        '3GD' => 'E02002652',
        '3GE' => 'E02002652',
        '3GF' => 'E02002652',
        '3GG' => 'E02002652',
        '3GH' => 'E02002652',
        '3GJ' => 'E02002652',
        '3GL' => 'E02002652',
        '3GN' => 'E02002652',
        '3GP' => 'E02002652',
        '3GQ' => 'E02002652',
        '3GR' => 'E02002652',
        '3GS' => 'E02002652',
        '3GT' => 'E02002652',
        '3GX' => 'E02002652',
        '3GY' => 'E02002652',
        '3GZ' => 'E02002652',
        '3HA' => 'E02002652',
        '3HB' => 'E02002652',
        '3HD' => 'E02002652',
        '3HE' => 'E02002652',
        '3HF' => 'E02002652',
        '3HG' => 'E02002652',
        '3HH' => 'E02002652',
        '3HJ' => 'E02002652',
        '3HL' => 'E02002652',
        '3HN' => 'E02002652',
        '3HP' => 'E02002652',
        '3HQ' => 'E02002652',
        '3HR' => 'E02002652',
        '3HS' => 'E02002652',
        '3HT' => 'E02002652',
        '3HU' => 'E02002652',
        '3HW' => 'E02002652',
        '3HX' => 'E02002652',
        '3HY' => 'E02002652',
        '3HZ' => 'E02002652',
        '3JA' => 'E02002652',
        '3JB' => 'E02002652',
        '3JD' => 'E02002652',
        '3JE' => 'E02002652',
        '3JF' => 'E02002652',
        '3JG' => 'E02002652',
        '3JH' => 'E02002652',
        '3JJ' => 'E02002652',
        '3JL' => 'E02002652',
        '3JN' => 'E02002652',
        '3JP' => 'E02002652',
        '3JQ' => 'E02002652',
        '3JR' => 'E02002652',
        '3JS' => 'E02002652',
        '3JT' => 'E02002652',
        '3JU' => 'E02002652',
        '3JW' => 'E02002652',
        '3JX' => 'E02002652',
        '3JY' => 'E02002652',
        '3LA' => 'E02002652',
        '3LB' => 'E02002652',
        '3LD' => 'E02002652',
        '3LE' => 'E02002652',
        '3LF' => 'E02002652',
        '3LG' => 'E02002652',
        '3LH' => 'E02002652',
        '3LN' => 'E02002652',
        '3LP' => 'E02002652',
        '3LQ' => 'E02002652',
        '3LR' => 'E02002652',
        '3LS' => 'E02002652',
        '3LT' => 'E02002652',
        '3LU' => 'E02002652',
        '3LW' => 'E02002652',
        '3LX' => 'E02002652',
        '3LY' => 'E02002652',
        '3NA' => 'E02002652',
        '3NB' => 'E02002652',
        '3ND' => 'E02002652',
        '3NE' => 'E02002652',
        '3NF' => 'E02002652',
        '3NG' => 'E02002652',
        '3NH' => 'E02002652',
        '3NJ' => 'E02002652',
        '3NL' => 'E02002652',
        '3NN' => 'E02002652',
        '3NP' => 'E02002652',
        '3NQ' => 'E02002652',
        '3NR' => 'E02002652',
        '3NS' => 'E02002652',
        '3WA' => 'E02002667',
        '3WB' => 'E02002667',
        '3WR' => 'E02002667',
        '3WS' => 'E02002667',
        '3WT' => 'E02002667',
        '3WU' => 'E02002667',
        '3WW' => 'E02002667',
        '3WX' => 'E02002667',
        '3WY' => 'E02002667',
        '3WZ' => 'E02002667',
        '3XA' => 'E02002652',
        '3XB' => 'E02002667',
        '3XD' => 'E02002652',
        '3XE' => 'E02002667',
        '3YY' => 'E02002667',
        '3YZ' => 'E02002652',
        '3ZU' => 'E02002667',
        '3ZY' => 'E02002667',
        '4AA' => 'E02002657',
        '4AB' => 'E02002657',
        '4AD' => 'E02002657',
        '4AE' => 'E02002657',
        '4AF' => 'E02002653',
        '4AG' => 'E02002657',
        '4AH' => 'E02002657',
        '4AJ' => 'E02002657',
        '4AL' => 'E02002657',
        '4AN' => 'E02002657',
        '4AP' => 'E02002653',
        '4AQ' => 'E02002657',
        '4AR' => 'E02002657',
        '4AS' => 'E02002657',
        '4AT' => 'E02002657',
        '4AU' => 'E02002657',
        '4AW' => 'E02002657',
        '4AX' => 'E02002657',
        '4AY' => 'E02002657',
        '4AZ' => 'E02002657',
        '4BA' => 'E02002657',
        '4BB' => 'E02002657',
        '4BD' => 'E02002657',
        '4BE' => 'E02002657',
        '4BF' => 'E02002657',
        '4BG' => 'E02002657',
        '4BH' => 'E02002657',
        '4BJ' => 'E02002657',
        '4BL' => 'E02002657',
        '4BN' => 'E02002657',
        '4BP' => 'E02002657',
        '4BQ' => 'E02002657',
        '4BS' => 'E02002653',
        '4BT' => 'E02002657',
        '4BU' => 'E02002657',
        '4BW' => 'E02002657',
        '4BX' => 'E02002657',
        '4BY' => 'E02002657',
        '4BZ' => 'E02002657',
        '4DA' => 'E02002653',
        '4DB' => 'E02002653',
        '4DD' => 'E02002653',
        '4DE' => 'E02002653',
        '4DF' => 'E02002653',
        '4DG' => 'E02002653',
        '4DH' => 'E02002653',
        '4DJ' => 'E02002653',
        '4DL' => 'E02002653',
        '4DN' => 'E02002653',
        '4DP' => 'E02002653',
        '4DQ' => 'E02002653',
        '4DR' => 'E02002653',
        '4DS' => 'E02002653',
        '4DT' => 'E02002653',
        '4DU' => 'E02002653',
        '4DW' => 'E02002653',
        '4DX' => 'E02002653',
        '4DY' => 'E02002653',
        '4DZ' => 'E02002653',
        '4EA' => 'E02002653',
        '4EB' => 'E02002653',
        '4ED' => 'E02002653',
        '4EE' => 'E02002653',
        '4EF' => 'E02002653',
        '4EG' => 'E02002658',
        '4EH' => 'E02002653',
        '4EJ' => 'E02002653',
        '4EL' => 'E02002653',
        '4EN' => 'E02002653',
        '4EP' => 'E02002653',
        '4EQ' => 'E02002653',
        '4ER' => 'E02002653',
        '4ES' => 'E02002653',
        '4ET' => 'E02002653',
        '4EU' => 'E02002653',
        '4EW' => 'E02002653',
        '4EX' => 'E02002653',
        '4EY' => 'E02002653',
        '4EZ' => 'E02002653',
        '4FA' => 'E02002667',
        '4FB' => 'E02002655',
        '4FD' => 'E02002655',
        '4FE' => 'E02002655',
        '4FF' => 'E02002655',
        '4FG' => 'E02002655',
        '4FH' => 'E02002658',
        '4FJ' => 'E02002658',
        '4FL' => 'E02002658',
        '4FN' => 'E02002655',
        '4FP' => 'E02002653',
        '4FQ' => 'E02002658',
        '4FR' => 'E02002658',
        '4FS' => 'E02002658',
        '4FT' => 'E02002653',
        '4FU' => 'E02002655',
        '4FW' => 'E02002653',
        '4FX' => 'E02002658',
        '4FY' => 'E02002653',
        '4FZ' => 'E02002653',
        '4GA' => 'E02002658',
        '4GB' => 'E02002658',
        '4GD' => 'E02002667',
        '4GE' => 'E02002653',
        '4GF' => 'E02002653',
        '4GG' => 'E02002653',
        '4GH' => 'E02002658',
        '4GJ' => 'E02002667',
        '4GL' => 'E02002653',
        '4GN' => 'E02002653',
        '4GP' => 'E02002653',
        '4GQ' => 'E02002658',
        '4GR' => 'E02002653',
        '4GS' => 'E02002658',
        '4GT' => 'E02002653',
        '4GU' => 'E02002667',
        '4GW' => 'E02002667',
        '4GX' => 'E02002667',
        '4GY' => 'E02002667',
        '4HA' => 'E02002653',
        '4HB' => 'E02002653',
        '4HD' => 'E02002653',
        '4HE' => 'E02002653',
        '4HF' => 'E02002653',
        '4HG' => 'E02002653',
        '4HH' => 'E02002653',
        '4HJ' => 'E02002653',
        '4HL' => 'E02002653',
        '4HN' => 'E02002653',
        '4HP' => 'E02002653',
        '4HQ' => 'E02002653',
        '4HR' => 'E02002653',
        '4HS' => 'E02002657',
        '4HT' => 'E02002653',
        '4HU' => 'E02002653',
        '4HW' => 'E02002653',
        '4HX' => 'E02002653',
        '4HY' => 'E02002653',
        '4HZ' => 'E02002653',
        '4JA' => 'E02002653',
        '4JB' => 'E02002653',
        '4JD' => 'E02002653',
        '4JE' => 'E02002653',
        '4JF' => 'E02002653',
        '4JG' => 'E02002653',
        '4JH' => 'E02002653',
        '4JJ' => 'E02002653',
        '4JL' => 'E02002653',
        '4JN' => 'E02002653',
        '4JP' => 'E02002653',
        '4JQ' => 'E02002653',
        '4JR' => 'E02002655',
        '4JS' => 'E02002655',
        '4JT' => 'E02002655',
        '4JU' => 'E02002655',
        '4JW' => 'E02002653',
        '4JX' => 'E02002653',
        '4JY' => 'E02002658',
        '4JZ' => 'E02002658',
        '4LA' => 'E02002653',
        '4LB' => 'E02002653',
        '4LD' => 'E02002653',
        '4LE' => 'E02002653',
        '4LF' => 'E02002653',
        '4LG' => 'E02002653',
        '4LH' => 'E02002653',
        '4LJ' => 'E02002653',
        '4LL' => 'E02002653',
        '4LN' => 'E02002653',
        '4LP' => 'E02002653',
        '4LQ' => 'E02002653',
        '4LR' => 'E02002655',
        '4LS' => 'E02002655',
        '4LT' => 'E02002655',
        '4LU' => 'E02002655',
        '4LW' => 'E02002653',
        '4LX' => 'E02002655',
        '4LY' => 'E02002655',
        '4LZ' => 'E02002655',
        '4NA' => 'E02002655',
        '4NB' => 'E02002655',
        '4ND' => 'E02002655',
        '4NE' => 'E02002655',
        '4NF' => 'E02002655',
        '4NG' => 'E02002655',
        '4NH' => 'E02002653',
        '4NJ' => 'E02002655',
        '4NL' => 'E02002655',
        '4NN' => 'E02002653',
        '4NP' => 'E02002655',
        '4NQ' => 'E02002655',
        '4NR' => 'E02002655',
        '4NS' => 'E02002655',
        '4NT' => 'E02002655',
        '4NU' => 'E02002655',
        '4NW' => 'E02002653',
        '4NX' => 'E02002655',
        '4NY' => 'E02002655',
        '4NZ' => 'E02002655',
        '4PA' => 'E02002655',
        '4PB' => 'E02002655',
        '4PD' => 'E02002658',
        '4PE' => 'E02002655',
        '4PF' => 'E02002655',
        '4PG' => 'E02002655',
        '4PH' => 'E02002655',
        '4PJ' => 'E02002655',
        '4PL' => 'E02002655',
        '4PN' => 'E02002655',
        '4PP' => 'E02002655',
        '4PQ' => 'E02002655',
        '4PR' => 'E02002655',
        '4PS' => 'E02002655',
        '4PT' => 'E02002655',
        '4PU' => 'E02002655',
        '4PW' => 'E02002655',
        '4PX' => 'E02002655',
        '4PY' => 'E02002653',
        '4PZ' => 'E02002653',
        '4QA' => 'E02002653',
        '4QB' => 'E02002653',
        '4QD' => 'E02002653',
        '4QE' => 'E02002653',
        '4QF' => 'E02002653',
        '4QG' => 'E02002653',
        '4QH' => 'E02002653',
        '4QJ' => 'E02002653',
        '4QL' => 'E02002653',
        '4QN' => 'E02002653',
        '4QP' => 'E02002653',
        '4QQ' => 'E02002653',
        '4QR' => 'E02002658',
        '4QS' => 'E02002653',
        '4QT' => 'E02002658',
        '4QU' => 'E02002653',
        '4QW' => 'E02002653',
        '4QX' => 'E02002653',
        '4QY' => 'E02002652',
        '4QZ' => 'E02002667',
        '4RA' => 'E02002655',
        '4RB' => 'E02002655',
        '4RD' => 'E02002655',
        '4RE' => 'E02002655',
        '4RF' => 'E02002655',
        '4RG' => 'E02002655',
        '4RH' => 'E02002655',
        '4RJ' => 'E02002655',
        '4RL' => 'E02002655',
        '4RN' => 'E02002653',
        '4RP' => 'E02002653',
        '4RQ' => 'E02002655',
        '4RR' => 'E02002653',
        '4RS' => 'E02002653',
        '4RT' => 'E02002653',
        '4RU' => 'E02002653',
        '4RW' => 'E02002653',
        '4RX' => 'E02002653',
        '4RY' => 'E02002653',
        '4RZ' => 'E02002653',
        '4SA' => 'E02002653',
        '4SB' => 'E02002653',
        '4SD' => 'E02002653',
        '4SE' => 'E02002653',
        '4SF' => 'E02002653',
        '4SG' => 'E02002653',
        '4SH' => 'E02002658',
        '4SJ' => 'E02002655',
        '4SL' => 'E02002658',
        '4SN' => 'E02002655',
        '4SP' => 'E02002655',
        '4SQ' => 'E02002653',
        '4SR' => 'E02002655',
        '4SS' => 'E02002658',
        '4ST' => 'E02002655',
        '4SU' => 'E02002655',
        '4SW' => 'E02002655',
        '4SX' => 'E02002655',
        '4SY' => 'E02002655',
        '4SZ' => 'E02002655',
        '4TA' => 'E02002658',
        '4TB' => 'E02002658',
        '4TD' => 'E02002658',
        '4TE' => 'E02002658',
        '4TF' => 'E02002658',
        '4TG' => 'E02002658',
        '4TH' => 'E02002658',
        '4TJ' => 'E02002658',
        '4TL' => 'E02002658',
        '4TN' => 'E02002658',
        '4TP' => 'E02002658',
        '4TQ' => 'E02002658',
        '4TR' => 'E02002658',
        '4TS' => 'E02002658',
        '4TT' => 'E02002658',
        '4TU' => 'E02002655',
        '4TW' => 'E02002658',
        '4TX' => 'E02002655',
        '4TY' => 'E02002697',
        '4TZ' => 'E02002658',
        '4UA' => 'E02002658',
        '4UB' => 'E02002664',
        '4UD' => 'E02002658',
        '4UE' => 'E02002658',
        '4UF' => 'E02002658',
        '4UG' => 'E02002658',
        '4UH' => 'E02002658',
        '4UJ' => 'E02002658',
        '4UL' => 'E02002658',
        '4UN' => 'E02002658',
        '4UP' => 'E02002658',
        '4UQ' => 'E02002664',
        '4UR' => 'E02002658',
        '4US' => 'E02002658',
        '4UT' => 'E02002658',
        '4UU' => 'E02002658',
        '4UW' => 'E02002667',
        '4UX' => 'E02002658',
        '4UY' => 'E02002658',
        '4UZ' => 'E02002658',
        '4WA' => 'E02002664',
        '4WB' => 'E02002667',
        '4WD' => 'E02002655',
        '4WE' => 'E02002667',
        '4WF' => 'E02002657',
        '4WG' => 'E02002657',
        '4WH' => 'E02002657',
        '4WJ' => 'E02002657',
        '4WL' => 'E02002664',
        '4WN' => 'E02002655',
        '4WQ' => 'E02002667',
        '4WR' => 'E02002653',
        '4WS' => 'E02002667',
        '4WT' => 'E02002667',
        '4WU' => 'E02002664',
        '4WW' => 'E02002667',
        '4WX' => 'E02002667',
        '4WY' => 'E02002664',
        '4WZ' => 'E02002664',
        '4XA' => 'E02002664',
        '4XB' => 'E02002658',
        '4XD' => 'E02002658',
        '4XE' => 'E02002658',
        '4XF' => 'E02002658',
        '4XG' => 'E02002664',
        '4XH' => 'E02002664',
        '4XJ' => 'E02002664',
        '4XL' => 'E02002658',
        '4XN' => 'E02002664',
        '4XP' => 'E02002664',
        '4XQ' => 'E02002655',
        '4XR' => 'E02002658',
        '4XS' => 'E02002658',
        '4XT' => 'E02002655',
        '4XU' => 'E02002658',
        '4XW' => 'E02002664',
        '4XX' => 'E02002664',
        '4XY' => 'E02002655',
        '4XZ' => 'E02002658',
        '4YA' => 'E02002655',
        '4YB' => 'E02002658',
        '4YD' => 'E02002658',
        '4YE' => 'E02002658',
        '4YF' => 'E02002658',
        '4YG' => 'E02002655',
        '4YH' => 'E02002655',
        '4YJ' => 'E02002653',
        '4YL' => 'E02002653',
        '4YN' => 'E02002655',
        '4YP' => 'E02002655',
        '4YQ' => 'E02002655',
        '4YR' => 'E02002653',
        '4YS' => 'E02002658',
        '4YT' => 'E02002655',
        '4YU' => 'E02002655',
        '4YW' => 'E02002655',
        '4YX' => 'E02002664',
        '4YY' => 'E02002664',
        '4YZ' => 'E02002664',
        '4ZA' => 'E02002655',
        '4ZB' => 'E02002655',
        '4ZD' => 'E02002655',
        '4ZE' => 'E02002655',
        '4ZF' => 'E02002655',
        '4ZG' => 'E02002655',
        '4ZH' => 'E02002655',
        '4ZJ' => 'E02002655',
        '4ZL' => 'E02002655',
        '4ZN' => 'E02002655',
        '4ZP' => 'E02002655',
        '4ZQ' => 'E02002655',
        '4ZR' => 'E02002655',
        '4ZS' => 'E02002655',
        '4ZT' => 'E02002667',
        '4ZU' => 'E02002667',
        '4ZW' => 'E02002655',
        '4ZY' => 'E02002655',
        '4ZZ' => 'E02002655',
        '5AA' => 'E02002652',
        '5AB' => 'E02002652',
        '5AD' => 'E02002652',
        '5AE' => 'E02002652',
        '5AF' => 'E02002652',
        '5AG' => 'E02002652',
        '5AH' => 'E02002652',
        '5AJ' => 'E02002652',
        '5AL' => 'E02002652',
        '5AN' => 'E02002652',
        '5AP' => 'E02002652',
        '5AQ' => 'E02002652',
        '5AR' => 'E02002652',
        '5AS' => 'E02002652',
        '5AT' => 'E02002652',
        '5AU' => 'E02002652',
        '5AW' => 'E02002652',
        '5AX' => 'E02002652',
        '5AY' => 'E02002652',
        '5AZ' => 'E02002652',
        '5BA' => 'E02002652',
        '5BB' => 'E02002652',
        '5BD' => 'E02002652',
        '5BE' => 'E02002652',
        '5BG' => 'E02002652',
        '5BH' => 'E02002652',
        '5BJ' => 'E02002652',
        '5BL' => 'E02002652',
        '5BN' => 'E02002652',
        '5BP' => 'E02002652',
        '5BQ' => 'E02002652',
        '5BS' => 'E02002652',
        '5BT' => 'E02002652',
        '5BU' => 'E02002652',
        '5BW' => 'E02002652',
        '5BX' => 'E02002652',
        '5BY' => 'E02002652',
        '5BZ' => 'E02002652',
        '5DA' => 'E02002652',
        '5DB' => 'E02002652',
        '5DD' => 'E02002652',
        '5DE' => 'E02002652',
        '5DF' => 'E02002652',
        '5DG' => 'E02002652',
        '5DH' => 'E02002652',
        '5DJ' => 'E02002652',
        '5DL' => 'E02002652',
        '5DN' => 'E02002652',
        '5DP' => 'E02002652',
        '5DQ' => 'E02002652',
        '5DR' => 'E02002652',
        '5DS' => 'E02002652',
        '5DT' => 'E02002652',
        '5DU' => 'E02002652',
        '5DW' => 'E02002652',
        '5DX' => 'E02002652',
        '5DY' => 'E02002652',
        '5DZ' => 'E02002652',
        '5EA' => 'E02002652',
        '5EB' => 'E02002652',
        '5ED' => 'E02002652',
        '5EE' => 'E02002652',
        '5EF' => 'E02002652',
        '5EG' => 'E02002652',
        '5EH' => 'E02002652',
        '5EJ' => 'E02002652',
        '5EL' => 'E02002652',
        '5EN' => 'E02002652',
        '5EP' => 'E02002652',
        '5EQ' => 'E02002652',
        '5ER' => 'E02002652',
        '5ES' => 'E02002652',
        '5ET' => 'E02002697',
        '5EU' => 'E02002697',
        '5EW' => 'E02002652',
        '5FB' => 'E02002697',
        '5FD' => 'E02002697',
        '5GW' => 'E02002652',
        '5RA' => 'E02002667',
        '5UZ' => 'E02002697',
        '5WA' => 'E02002667',
        '5WY' => 'E02002667',
        '5WZ' => 'E02002667',
        '5XA' => 'E02002697',
        '5XB' => 'E02002697',
        '5XD' => 'E02002697',
        '5XE' => 'E02002697',
        '5XG' => 'E02002697',
        '5XH' => 'E02002697',
        '5XJ' => 'E02002697',
        '5XL' => 'E02002697',
        '5XN' => 'E02002697',
        '5XP' => 'E02002697',
        '5XR' => 'E02002697',
        '5XS' => 'E02002697',
        '5XT' => 'E02002697',
        '5XU' => 'E02002697',
        '5XW' => 'E02002697',
        '5XX' => 'E02002697',
        '5XY' => 'E02002697',
        '5XZ' => 'E02002697',
        '5YN' => 'E02002652',
        '5YP' => 'E02002652',
        '5YQ' => 'E02002652',
        '5YR' => 'E02002652',
        '5YS' => 'E02002652',
        '5YT' => 'E02002652',
        '5YU' => 'E02002652',
        '5YW' => 'E02002652',
        '5YX' => 'E02002697',
        '5YY' => 'E02002697',
        '5YZ' => 'E02002697',
        '6AA' => 'E02002655',
        '6AB' => 'E02002655',
        '6AD' => 'E02002655',
        '6AE' => 'E02002658',
        '6AF' => 'E02002658',
        '6AG' => 'E02002655',
        '6AH' => 'E02002655',
        '6AJ' => 'E02002655',
        '6AL' => 'E02002655',
        '6AN' => 'E02002655',
        '6AP' => 'E02002657',
        '6AQ' => 'E02002655',
        '6AR' => 'E02002655',
        '6AS' => 'E02002655',
        '6AT' => 'E02002655',
        '6AU' => 'E02002655',
        '6AW' => 'E02002655',
        '6AX' => 'E02002655',
        '6AY' => 'E02002655',
        '6AZ' => 'E02002655',
        '6BA' => 'E02002658',
        '6BB' => 'E02002657',
        '6BD' => 'E02002658',
        '6BE' => 'E02002657',
        '6BG' => 'E02002657',
        '6BH' => 'E02002657',
        '6BJ' => 'E02002657',
        '6BL' => 'E02002657',
        '6BN' => 'E02002657',
        '6BP' => 'E02002657',
        '6BQ' => 'E02002657',
        '6BS' => 'E02002657',
        '6BT' => 'E02002657',
        '6BU' => 'E02002657',
        '6BW' => 'E02002657',
        '6DA' => 'E02002657',
        '6DB' => 'E02002657',
        '6DD' => 'E02002657',
        '6DE' => 'E02002657',
        '6DF' => 'E02002657',
        '6DG' => 'E02002657',
        '6DH' => 'E02002657',
        '6DJ' => 'E02002657',
        '6DL' => 'E02002657',
        '6DN' => 'E02002657',
        '6DP' => 'E02002657',
        '6DQ' => 'E02002657',
        '6DR' => 'E02002657',
        '6DS' => 'E02002657',
        '6DT' => 'E02002657',
        '6DU' => 'E02002657',
        '6DW' => 'E02002657',
        '6DX' => 'E02002657',
        '6DY' => 'E02002658',
        '6DZ' => 'E02002657',
        '6EA' => 'E02002657',
        '6EB' => 'E02002657',
        '6ED' => 'E02002657',
        '6EE' => 'E02002657',
        '6EF' => 'E02002657',
        '6EG' => 'E02002657',
        '6EH' => 'E02002657',
        '6EJ' => 'E02002657',
        '6EL' => 'E02002657',
        '6WY' => 'E02002667',
        '6WZ' => 'E02002667',
        '6YU' => 'E02002667',
        '6YW' => 'E02002667',
        '6YX' => 'E02002657',
        '6YY' => 'E02002667',
        '6YZ' => 'E02002667',
        '9AB' => 'E02002667',
        '9AD' => 'E02002667',
        '9AE' => 'E02002667',
        '9AF' => 'E02002667',
        '9AG' => 'E02002667',
        '9AH' => 'E02002667',
        '9AJ' => 'E02002667',
        '9AL' => 'E02002667',
        '9AN' => 'E02002667',
        '9AP' => 'E02002667',
        '9AQ' => 'E02002667',
        '9AR' => 'E02002667',
        '9AS' => 'E02002667',
        '9AT' => 'E02002667',
        '9AU' => 'E02002667',
        '9AW' => 'E02002667',
        '9AX' => 'E02002667',
        '9AY' => 'E02002667',
        '9AZ' => 'E02002667',
        '9BA' => 'E02002667',
        '9BB' => 'E02002667',
        '9BD' => 'E02002667',
        '9BE' => 'E02002667',
        '9BF' => 'E02002667',
        '9BG' => 'E02002667',
        '9BH' => 'E02002667',
        '9BJ' => 'E02002667',
        '9BL' => 'E02002667',
        '9BN' => 'E02002667',
        '9BP' => 'E02002667',
        '9BQ' => 'E02002667',
        '9BR' => 'E02002667',
        '9BS' => 'E02002667',
        '9BT' => 'E02002667',
        '9BU' => 'E02002667',
        '9BW' => 'E02002667',
        '9BX' => 'E02002667',
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
