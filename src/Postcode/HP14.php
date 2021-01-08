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
final class HP14
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '3AA' => 'E02003702',
        '3AB' => 'E02003702',
        '3AD' => 'E02003699',
        '3AE' => 'E02003702',
        '3AF' => 'E02003699',
        '3AG' => 'E02003702',
        '3AH' => 'E02003702',
        '3AJ' => 'E02003702',
        '3AL' => 'E02003702',
        '3AN' => 'E02003699',
        '3AP' => 'E02003702',
        '3AQ' => 'E02003699',
        '3AR' => 'E02003702',
        '3AS' => 'E02003702',
        '3AT' => 'E02003702',
        '3AU' => 'E02003699',
        '3AW' => 'E02003699',
        '3AX' => 'E02003699',
        '3AY' => 'E02003702',
        '3AZ' => 'E02003702',
        '3BA' => 'E02003702',
        '3BB' => 'E02003702',
        '3BD' => 'E02003702',
        '3BE' => 'E02003702',
        '3BF' => 'E02003699',
        '3BG' => 'E02003699',
        '3BH' => 'E02003702',
        '3BJ' => 'E02003702',
        '3BL' => 'E02003702',
        '3BN' => 'E02003702',
        '3BP' => 'E02003702',
        '3BQ' => 'E02003712',
        '3BS' => 'E02003702',
        '3BT' => 'E02003702',
        '3BU' => 'E02003702',
        '3BW' => 'E02003702',
        '3BX' => 'E02003712',
        '3BY' => 'E02003712',
        '3BZ' => 'E02003702',
        '3DA' => 'E02003699',
        '3DB' => 'E02003699',
        '3DD' => 'E02003712',
        '3DE' => 'E02003712',
        '3DF' => 'E02003712',
        '3DG' => 'E02003712',
        '3DH' => 'E02003712',
        '3DJ' => 'E02003712',
        '3DL' => 'E02003712',
        '3DN' => 'E02003712',
        '3DP' => 'E02003712',
        '3DQ' => 'E02003712',
        '3DR' => 'E02003712',
        '3DS' => 'E02003712',
        '3DT' => 'E02003712',
        '3DU' => 'E02003712',
        '3DW' => 'E02003712',
        '3DX' => 'E02003712',
        '3DY' => 'E02003712',
        '3DZ' => 'E02003712',
        '3EA' => 'E02003712',
        '3EB' => 'E02003712',
        '3ED' => 'E02003712',
        '3EE' => 'E02003712',
        '3EF' => 'E02003699',
        '3EG' => 'E02003712',
        '3EH' => 'E02003712',
        '3EJ' => 'E02003712',
        '3EL' => 'E02003702',
        '3EN' => 'E02003712',
        '3EP' => 'E02003712',
        '3EQ' => 'E02003712',
        '3ER' => 'E02003712',
        '3ES' => 'E02003712',
        '3ET' => 'E02003712',
        '3EU' => 'E02003712',
        '3EW' => 'E02003699',
        '3EX' => 'E02003712',
        '3EY' => 'E02003712',
        '3EZ' => 'E02003712',
        '3FB' => 'E02003710',
        '3FD' => 'E02003710',
        '3FE' => 'E02003699',
        '3FF' => 'E02003699',
        '3FG' => 'E02003699',
        '3FH' => 'E02003710',
        '3FJ' => 'E02003710',
        '3FL' => 'E02003699',
        '3FN' => 'E02003712',
        '3FP' => 'E02003710',
        '3FQ' => 'E02003712',
        '3FR' => 'E02003699',
        '3FS' => 'E02003710',
        '3FT' => 'E02003710',
        '3FU' => 'E02003710',
        '3FW' => 'E02003699',
        '3FX' => 'E02003699',
        '3FY' => 'E02003699',
        '3FZ' => 'E02003699',
        '3GA' => 'E02003712',
        '3GB' => 'E02003712',
        '3GD' => 'E02003712',
        '3GE' => 'E02003712',
        '3GF' => 'E02003710',
        '3GG' => 'E02003699',
        '3GH' => 'E02003710',
        '3GJ' => 'E02003710',
        '3GL' => 'E02003710',
        '3GN' => 'E02003710',
        '3GP' => 'E02003710',
        '3GQ' => 'E02003710',
        '3GR' => 'E02003699',
        '3GS' => 'E02003710',
        '3GT' => 'E02003710',
        '3GU' => 'E02003699',
        '3GW' => 'E02003710',
        '3GX' => 'E02003710',
        '3GY' => 'E02003699',
        '3GZ' => 'E02003710',
        '3HA' => 'E02003710',
        '3HB' => 'E02003712',
        '3HD' => 'E02003712',
        '3HE' => 'E02003712',
        '3HF' => 'E02003712',
        '3HG' => 'E02003712',
        '3HH' => 'E02003712',
        '3HJ' => 'E02003712',
        '3HL' => 'E02003712',
        '3HN' => 'E02003712',
        '3HP' => 'E02003710',
        '3HQ' => 'E02003712',
        '3HR' => 'E02003712',
        '3HS' => 'E02003712',
        '3HT' => 'E02003712',
        '3HU' => 'E02003712',
        '3HW' => 'E02003699',
        '3HX' => 'E02003712',
        '3HY' => 'E02003712',
        '3HZ' => 'E02003715',
        '3JA' => 'E02003712',
        '3JB' => 'E02003712',
        '3JD' => 'E02003712',
        '3JE' => 'E02003712',
        '3JF' => 'E02003712',
        '3JG' => 'E02003712',
        '3JH' => 'E02003712',
        '3JJ' => 'E02003712',
        '3JL' => 'E02003712',
        '3JN' => 'E02003712',
        '3JP' => 'E02003712',
        '3JQ' => 'E02003712',
        '3JR' => 'E02003712',
        '3JS' => 'E02003712',
        '3JT' => 'E02003710',
        '3JU' => 'E02003712',
        '3JW' => 'E02003712',
        '3JX' => 'E02003712',
        '3JY' => 'E02003699',
        '3JZ' => 'E02003712',
        '3LA' => 'E02003712',
        '3LB' => 'E02003712',
        '3LD' => 'E02003712',
        '3LE' => 'E02003712',
        '3LF' => 'E02003712',
        '3LG' => 'E02003712',
        '3LH' => 'E02003712',
        '3LJ' => 'E02003712',
        '3LL' => 'E02003712',
        '3LN' => 'E02003712',
        '3LP' => 'E02003702',
        '3LQ' => 'E02003712',
        '3LR' => 'E02003702',
        '3LS' => 'E02003702',
        '3LT' => 'E02003702',
        '3LU' => 'E02003702',
        '3LW' => 'E02003710',
        '3LX' => 'E02003712',
        '3LY' => 'E02003712',
        '3LZ' => 'E02003702',
        '3NA' => 'E02003702',
        '3NB' => 'E02003702',
        '3ND' => 'E02003702',
        '3NE' => 'E02003702',
        '3NF' => 'E02003702',
        '3NG' => 'E02003702',
        '3NH' => 'E02003702',
        '3NJ' => 'E02003702',
        '3NL' => 'E02003702',
        '3NN' => 'E02003712',
        '3NP' => 'E02003712',
        '3NQ' => 'E02003702',
        '3NR' => 'E02003712',
        '3NS' => 'E02003712',
        '3NT' => 'E02003699',
        '3NU' => 'E02003712',
        '3NW' => 'E02003712',
        '3NX' => 'E02003712',
        '3NY' => 'E02003699',
        '3NZ' => 'E02003699',
        '3PA' => 'E02003710',
        '3PB' => 'E02003699',
        '3PD' => 'E02003699',
        '3PE' => 'E02003702',
        '3PF' => 'E02003702',
        '3PG' => 'E02003702',
        '3PH' => 'E02003702',
        '3PJ' => 'E02003702',
        '3PL' => 'E02003702',
        '3PN' => 'E02003702',
        '3PP' => 'E02003702',
        '3PQ' => 'E02003702',
        '3PR' => 'E02003702',
        '3PS' => 'E02003702',
        '3PT' => 'E02003702',
        '3PU' => 'E02003699',
        '3PW' => 'E02003702',
        '3PX' => 'E02003699',
        '3PY' => 'E02003699',
        '3PZ' => 'E02003699',
        '3QA' => 'E02003699',
        '3QB' => 'E02003699',
        '3QD' => 'E02003699',
        '3QE' => 'E02003699',
        '3QF' => 'E02003699',
        '3QG' => 'E02003699',
        '3QH' => 'E02003699',
        '3QJ' => 'E02003699',
        '3QL' => 'E02003699',
        '3QN' => 'E02003699',
        '3QP' => 'E02003699',
        '3QQ' => 'E02003699',
        '3QR' => 'E02003699',
        '3QS' => 'E02003699',
        '3QT' => 'E02003699',
        '3QU' => 'E02003699',
        '3QW' => 'E02003699',
        '3QX' => 'E02003699',
        '3QY' => 'E02003699',
        '3QZ' => 'E02003699',
        '3RA' => 'E02003710',
        '3RB' => 'E02003699',
        '3RD' => 'E02003699',
        '3RE' => 'E02003699',
        '3RF' => 'E02003699',
        '3RG' => 'E02003699',
        '3RH' => 'E02003699',
        '3RJ' => 'E02003699',
        '3RL' => 'E02003699',
        '3RN' => 'E02003699',
        '3RP' => 'E02003699',
        '3RQ' => 'E02003699',
        '3RR' => 'E02003699',
        '3RS' => 'E02003699',
        '3RT' => 'E02003699',
        '3RU' => 'E02003699',
        '3RW' => 'E02003699',
        '3RX' => 'E02003699',
        '3RY' => 'E02003699',
        '3RZ' => 'E02003699',
        '3SA' => 'E02003699',
        '3SB' => 'E02003699',
        '3SD' => 'E02003699',
        '3SE' => 'E02003699',
        '3SF' => 'E02003699',
        '3SG' => 'E02003699',
        '3SH' => 'E02003699',
        '3SJ' => 'E02003699',
        '3SL' => 'E02003699',
        '3SN' => 'E02003699',
        '3SP' => 'E02003699',
        '3SQ' => 'E02003699',
        '3SR' => 'E02003699',
        '3SS' => 'E02003699',
        '3ST' => 'E02003699',
        '3SU' => 'E02003699',
        '3SW' => 'E02003699',
        '3SX' => 'E02003699',
        '3SY' => 'E02003699',
        '3SZ' => 'E02003699',
        '3TA' => 'E02003699',
        '3TB' => 'E02003699',
        '3TD' => 'E02003699',
        '3TE' => 'E02003699',
        '3TF' => 'E02003699',
        '3TG' => 'E02003699',
        '3TH' => 'E02003699',
        '3TJ' => 'E02003699',
        '3TL' => 'E02003699',
        '3TN' => 'E02003699',
        '3TP' => 'E02003699',
        '3TQ' => 'E02003699',
        '3TR' => 'E02003699',
        '3TS' => 'E02003699',
        '3TT' => 'E02003699',
        '3TU' => 'E02003699',
        '3TW' => 'E02003699',
        '3TX' => 'E02003699',
        '3TY' => 'E02003699',
        '3TZ' => 'E02003699',
        '3UA' => 'E02003699',
        '3UB' => 'E02003699',
        '3UD' => 'E02003699',
        '3UE' => 'E02003699',
        '3UF' => 'E02003699',
        '3UG' => 'E02003699',
        '3UH' => 'E02003699',
        '3UJ' => 'E02003699',
        '3UL' => 'E02003699',
        '3UN' => 'E02003699',
        '3UP' => 'E02003699',
        '3UQ' => 'E02003699',
        '3UR' => 'E02003699',
        '3US' => 'E02003699',
        '3UT' => 'E02003699',
        '3UU' => 'E02003699',
        '3UW' => 'E02003699',
        '3UX' => 'E02003699',
        '3UY' => 'E02003699',
        '3UZ' => 'E02003699',
        '3WA' => 'E02003710',
        '3WB' => 'E02003710',
        '3WD' => 'E02003710',
        '3WE' => 'E02003710',
        '3WF' => 'E02003710',
        '3WG' => 'E02003699',
        '3WH' => 'E02003710',
        '3WJ' => 'E02003710',
        '3WL' => 'E02003710',
        '3WN' => 'E02003699',
        '3WP' => 'E02003710',
        '3WQ' => 'E02003710',
        '3WR' => 'E02003710',
        '3WS' => 'E02003710',
        '3WT' => 'E02003710',
        '3WU' => 'E02003710',
        '3WW' => 'E02003710',
        '3WX' => 'E02003710',
        '3WY' => 'E02003710',
        '3WZ' => 'E02003710',
        '3XA' => 'E02003699',
        '3XB' => 'E02003699',
        '3XD' => 'E02003699',
        '3XE' => 'E02003699',
        '3XF' => 'E02003699',
        '3XG' => 'E02003699',
        '3XH' => 'E02003699',
        '3XJ' => 'E02003699',
        '3XL' => 'E02003699',
        '3XN' => 'E02003699',
        '3XP' => 'E02003710',
        '3XQ' => 'E02003699',
        '3XR' => 'E02003699',
        '3XS' => 'E02003699',
        '3XT' => 'E02003702',
        '3XU' => 'E02003699',
        '3XW' => 'E02003699',
        '3XX' => 'E02003702',
        '3XY' => 'E02003702',
        '3XZ' => 'E02003702',
        '3YA' => 'E02003702',
        '3YB' => 'E02003702',
        '3YD' => 'E02003702',
        '3YE' => 'E02003699',
        '3YF' => 'E02003699',
        '3YG' => 'E02003699',
        '3YH' => 'E02003699',
        '3YJ' => 'E02005962',
        '3YL' => 'E02005965',
        '3YN' => 'E02003699',
        '3YP' => 'E02003699',
        '3YQ' => 'E02005965',
        '3YR' => 'E02003699',
        '3YS' => 'E02003710',
        '3YT' => 'E02003699',
        '3YU' => 'E02003710',
        '3YW' => 'E02003702',
        '3YX' => 'E02003710',
        '3YY' => 'E02003710',
        '3YZ' => 'E02003710',
        '3ZD' => 'E02003699',
        '3ZE' => 'E02003699',
        '3ZF' => 'E02003710',
        '3ZG' => 'E02003710',
        '3ZH' => 'E02003710',
        '3ZJ' => 'E02003710',
        '3ZL' => 'E02003710',
        '3ZN' => 'E02003710',
        '3ZP' => 'E02003710',
        '3ZQ' => 'E02003710',
        '3ZR' => 'E02003710',
        '3ZU' => 'E02003710',
        '3ZW' => 'E02003710',
        '3ZX' => 'E02003710',
        '3ZZ' => 'E02003699',
        '4AA' => 'E02003702',
        '4AB' => 'E02003702',
        '4AD' => 'E02003710',
        '4AE' => 'E02003702',
        '4AF' => 'E02003702',
        '4AG' => 'E02003702',
        '4AH' => 'E02003702',
        '4AJ' => 'E02003702',
        '4AL' => 'E02003702',
        '4AN' => 'E02003702',
        '4AP' => 'E02003702',
        '4AQ' => 'E02003702',
        '4AR' => 'E02003702',
        '4AS' => 'E02003702',
        '4AT' => 'E02003702',
        '4AU' => 'E02003702',
        '4AW' => 'E02003702',
        '4AX' => 'E02003702',
        '4AY' => 'E02003702',
        '4AZ' => 'E02003702',
        '4BA' => 'E02003702',
        '4BB' => 'E02003702',
        '4BD' => 'E02003710',
        '4BE' => 'E02003702',
        '4BF' => 'E02003702',
        '4BG' => 'E02003702',
        '4BH' => 'E02003702',
        '4BJ' => 'E02003710',
        '4BL' => 'E02003702',
        '4BN' => 'E02003702',
        '4BP' => 'E02003699',
        '4BQ' => 'E02003702',
        '4BS' => 'E02003702',
        '4BT' => 'E02003710',
        '4BU' => 'E02003699',
        '4BW' => 'E02003702',
        '4BX' => 'E02003699',
        '4BY' => 'E02003699',
        '4BZ' => 'E02003699',
        '4DA' => 'E02003702',
        '4DB' => 'E02003699',
        '4DD' => 'E02003699',
        '4DE' => 'E02003699',
        '4DF' => 'E02003699',
        '4DH' => 'E02003699',
        '4DJ' => 'E02003699',
        '4DL' => 'E02003699',
        '4DN' => 'E02003699',
        '4DP' => 'E02003699',
        '4DS' => 'E02003710',
        '4DT' => 'E02003699',
        '4DU' => 'E02003699',
        '4DW' => 'E02003699',
        '4DX' => 'E02003702',
        '4DY' => 'E02003699',
        '4DZ' => 'E02003699',
        '4EB' => 'E02003699',
        '4ED' => 'E02005962',
        '4EE' => 'E02003699',
        '4EF' => 'E02003699',
        '4EH' => 'E02003702',
        '4EJ' => 'E02003702',
        '4EP' => 'E02003710',
        '4EQ' => 'E02003699',
        '4ER' => 'E02003702',
        '4ES' => 'E02003702',
        '4ET' => 'E02003710',
        '4EU' => 'E02003702',
        '4EX' => 'E02003702',
        '4EY' => 'E02003702',
        '4EZ' => 'E02003702',
        '4FB' => 'E02003702',
        '4FD' => 'E02003702',
        '4FH' => 'E02003702',
        '4FJ' => 'E02003702',
        '4FL' => 'E02003702',
        '4FP' => 'E02003702',
        '4FR' => 'E02003710',
        '4FS' => 'E02003710',
        '4FT' => 'E02003702',
        '4GA' => 'E02003710',
        '4GB' => 'E02003710',
        '4GD' => 'E02003710',
        '4GH' => 'E02003710',
        '4GJ' => 'E02003710',
        '4GL' => 'E02003702',
        '4GP' => 'E02003710',
        '4GR' => 'E02003710',
        '4GS' => 'E02003710',
        '4GT' => 'E02003710',
        '4GU' => 'E02003710',
        '4HA' => 'E02003702',
        '4HD' => 'E02003702',
        '4HE' => 'E02003702',
        '4HF' => 'E02003702',
        '4HH' => 'E02003702',
        '4HJ' => 'E02003710',
        '4HL' => 'E02003702',
        '4HN' => 'E02003702',
        '4HP' => 'E02003702',
        '4HR' => 'E02003702',
        '4HS' => 'E02003702',
        '4HT' => 'E02003702',
        '4HU' => 'E02003702',
        '4HW' => 'E02003702',
        '4HX' => 'E02003702',
        '4HY' => 'E02003702',
        '4HZ' => 'E02003702',
        '4JA' => 'E02003702',
        '4JB' => 'E02003702',
        '4JD' => 'E02003702',
        '4JE' => 'E02003702',
        '4JF' => 'E02003710',
        '4JG' => 'E02003702',
        '4JH' => 'E02003702',
        '4JJ' => 'E02003702',
        '4JL' => 'E02003702',
        '4JN' => 'E02003702',
        '4JQ' => 'E02003702',
        '4JR' => 'E02003702',
        '4JT' => 'E02003702',
        '4JW' => 'E02003702',
        '4JZ' => 'E02003698',
        '4LA' => 'E02003698',
        '4LB' => 'E02003698',
        '4LD' => 'E02003698',
        '4LE' => 'E02003698',
        '4LG' => 'E02003698',
        '4LJ' => 'E02003702',
        '4LL' => 'E02003698',
        '4LN' => 'E02003698',
        '4LP' => 'E02003698',
        '4LQ' => 'E02003698',
        '4LR' => 'E02003698',
        '4LS' => 'E02003702',
        '4LT' => 'E02003698',
        '4LU' => 'E02003698',
        '4LW' => 'E02003698',
        '4LX' => 'E02003698',
        '4LY' => 'E02003698',
        '4LZ' => 'E02003698',
        '4NA' => 'E02003702',
        '4NB' => 'E02003698',
        '4ND' => 'E02003698',
        '4NE' => 'E02003698',
        '4NF' => 'E02003698',
        '4NG' => 'E02003698',
        '4NH' => 'E02003698',
        '4NJ' => 'E02003698',
        '4NL' => 'E02003698',
        '4NN' => 'E02003698',
        '4NP' => 'E02003698',
        '4NQ' => 'E02003698',
        '4NR' => 'E02003698',
        '4NS' => 'E02003698',
        '4NT' => 'E02003698',
        '4NU' => 'E02003698',
        '4NW' => 'E02003698',
        '4NX' => 'E02003698',
        '4NY' => 'E02003698',
        '4NZ' => 'E02003698',
        '4PA' => 'E02003698',
        '4PB' => 'E02003698',
        '4PD' => 'E02003698',
        '4PE' => 'E02003698',
        '4PF' => 'E02003698',
        '4PG' => 'E02003698',
        '4PH' => 'E02003698',
        '4PJ' => 'E02003698',
        '4PL' => 'E02003698',
        '4PN' => 'E02003698',
        '4PP' => 'E02003698',
        '4PQ' => 'E02003698',
        '4PR' => 'E02003698',
        '4PS' => 'E02003702',
        '4PT' => 'E02003698',
        '4PU' => 'E02003702',
        '4PW' => 'E02003698',
        '4PX' => 'E02003710',
        '4PY' => 'E02003702',
        '4PZ' => 'E02003698',
        '4QA' => 'E02003698',
        '4QB' => 'E02003698',
        '4QD' => 'E02003698',
        '4QE' => 'E02003698',
        '4QF' => 'E02003698',
        '4QG' => 'E02003698',
        '4QH' => 'E02003698',
        '4QJ' => 'E02003698',
        '4QL' => 'E02003698',
        '4QN' => 'E02003698',
        '4QP' => 'E02003698',
        '4QQ' => 'E02003698',
        '4QR' => 'E02003698',
        '4QS' => 'E02003710',
        '4QT' => 'E02003701',
        '4QW' => 'E02003698',
        '4QX' => 'E02003698',
        '4QY' => 'E02003698',
        '4QZ' => 'E02003698',
        '4RA' => 'E02003698',
        '4RB' => 'E02003698',
        '4RD' => 'E02003698',
        '4RE' => 'E02003698',
        '4RF' => 'E02003698',
        '4RG' => 'E02003698',
        '4RH' => 'E02003698',
        '4RJ' => 'E02003698',
        '4RL' => 'E02003698',
        '4RN' => 'E02003702',
        '4RP' => 'E02003698',
        '4RQ' => 'E02003698',
        '4RR' => 'E02003698',
        '4RS' => 'E02003698',
        '4RT' => 'E02003698',
        '4RU' => 'E02003698',
        '4RW' => 'E02003698',
        '4RX' => 'E02003698',
        '4RY' => 'E02003698',
        '4RZ' => 'E02003698',
        '4SA' => 'E02003698',
        '4SB' => 'E02003698',
        '4SD' => 'E02003698',
        '4SE' => 'E02003698',
        '4SF' => 'E02003698',
        '4SG' => 'E02003698',
        '4SH' => 'E02003698',
        '4SJ' => 'E02003698',
        '4SL' => 'E02003698',
        '4SN' => 'E02003698',
        '4SP' => 'E02003698',
        '4SQ' => 'E02003698',
        '4SR' => 'E02003698',
        '4SS' => 'E02003698',
        '4ST' => 'E02003698',
        '4SU' => 'E02003698',
        '4SX' => 'E02003698',
        '4SY' => 'E02003698',
        '4SZ' => 'E02003698',
        '4TA' => 'E02003698',
        '4TB' => 'E02003698',
        '4TD' => 'E02003698',
        '4TH' => 'E02003698',
        '4TJ' => 'E02003698',
        '4TL' => 'E02003698',
        '4TN' => 'E02003698',
        '4TP' => 'E02003698',
        '4TR' => 'E02003698',
        '4TS' => 'E02003698',
        '4TT' => 'E02003698',
        '4TU' => 'E02003698',
        '4TW' => 'E02003698',
        '4TX' => 'E02003698',
        '4TY' => 'E02003698',
        '4TZ' => 'E02003702',
        '4UA' => 'E02003702',
        '4UB' => 'E02003698',
        '4UD' => 'E02003702',
        '4UE' => 'E02003702',
        '4UF' => 'E02003698',
        '4UG' => 'E02003702',
        '4UH' => 'E02003698',
        '4UJ' => 'E02003702',
        '4UL' => 'E02003698',
        '4UN' => 'E02003698',
        '4UP' => 'E02003698',
        '4UQ' => 'E02003702',
        '4UR' => 'E02003698',
        '4US' => 'E02003698',
        '4UT' => 'E02003698',
        '4UU' => 'E02003698',
        '4UW' => 'E02003698',
        '4UX' => 'E02003698',
        '4UY' => 'E02003698',
        '4UZ' => 'E02003698',
        '4WA' => 'E02003710',
        '4WB' => 'E02003710',
        '4WG' => 'E02003710',
        '4WH' => 'E02003710',
        '4WJ' => 'E02003710',
        '4WL' => 'E02003710',
        '4WN' => 'E02003710',
        '4WP' => 'E02003710',
        '4WQ' => 'E02003710',
        '4WR' => 'E02003710',
        '4WS' => 'E02003710',
        '4WT' => 'E02003710',
        '4WU' => 'E02003710',
        '4WW' => 'E02003710',
        '4WX' => 'E02003710',
        '4WY' => 'E02003710',
        '4WZ' => 'E02003710',
        '4XA' => 'E02003697',
        '4XB' => 'E02003697',
        '4XD' => 'E02003697',
        '4XE' => 'E02003697',
        '4XF' => 'E02003697',
        '4XG' => 'E02003697',
        '4XH' => 'E02003702',
        '4XJ' => 'E02003698',
        '4XL' => 'E02003702',
        '4XN' => 'E02003702',
        '4XP' => 'E02003698',
        '4XQ' => 'E02003702',
        '4XR' => 'E02003710',
        '4XS' => 'E02003710',
        '4XT' => 'E02003710',
        '4XU' => 'E02003702',
        '4XW' => 'E02003702',
        '4XX' => 'E02003710',
        '4XZ' => 'E02003710',
        '4YB' => 'E02003702',
        '4YD' => 'E02003702',
        '4YH' => 'E02003710',
        '4YJ' => 'E02003702',
        '4YL' => 'E02003710',
        '4YN' => 'E02003710',
        '4YP' => 'E02003710',
        '4YR' => 'E02003702',
        '4YS' => 'E02003710',
        '4YT' => 'E02003702',
        '4YU' => 'E02003710',
        '4YX' => 'E02003702',
        '4ZA' => 'E02003710',
        '4ZB' => 'E02003710',
        '4ZN' => 'E02003710',
        '4ZQ' => 'E02003710',
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