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
final class S12
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '2AA' => 'E02001649',
        '2AB' => 'E02001658',
        '2AD' => 'E02001649',
        '2AE' => 'E02001662',
        '2AF' => 'E02001662',
        '2AG' => 'E02001662',
        '2AH' => 'E02001662',
        '2AJ' => 'E02001662',
        '2AL' => 'E02001662',
        '2AN' => 'E02001662',
        '2AP' => 'E02001662',
        '2AQ' => 'E02001662',
        '2AR' => 'E02001662',
        '2AS' => 'E02001662',
        '2AT' => 'E02001662',
        '2AU' => 'E02006869',
        '2AW' => 'E02001662',
        '2AX' => 'E02006869',
        '2AY' => 'E02001662',
        '2AZ' => 'E02001662',
        '2BB' => 'E02001662',
        '2BD' => 'E02001662',
        '2BE' => 'E02001662',
        '2BF' => 'E02001662',
        '2BG' => 'E02001662',
        '2BH' => 'E02001662',
        '2BJ' => 'E02001662',
        '2BL' => 'E02001662',
        '2BN' => 'E02001655',
        '2BP' => 'E02001662',
        '2BQ' => 'E02001662',
        '2BR' => 'E02001655',
        '2BS' => 'E02001655',
        '2BT' => 'E02001655',
        '2BU' => 'E02001655',
        '2BW' => 'E02001662',
        '2BX' => 'E02001662',
        '2BY' => 'E02001655',
        '2BZ' => 'E02001655',
        '2DA' => 'E02001655',
        '2DB' => 'E02006869',
        '2DD' => 'E02001662',
        '2DE' => 'E02001655',
        '2DF' => 'E02001655',
        '2DG' => 'E02001655',
        '2DH' => 'E02001655',
        '2DJ' => 'E02001655',
        '2DL' => 'E02001662',
        '2DN' => 'E02001662',
        '2DP' => 'E02001655',
        '2DQ' => 'E02001662',
        '2DR' => 'E02001662',
        '2DS' => 'E02001662',
        '2DT' => 'E02006869',
        '2DU' => 'E02001655',
        '2DW' => 'E02001664',
        '2DX' => 'E02001664',
        '2DY' => 'E02006869',
        '2DZ' => 'E02006869',
        '2EA' => 'E02001662',
        '2EB' => 'E02001662',
        '2ED' => 'E02001662',
        '2EE' => 'E02001662',
        '2EF' => 'E02001662',
        '2EG' => 'E02001662',
        '2EH' => 'E02001662',
        '2EJ' => 'E02001662',
        '2EL' => 'E02001662',
        '2EN' => 'E02001662',
        '2EP' => 'E02001662',
        '2EQ' => 'E02001662',
        '2ER' => 'E02001662',
        '2ES' => 'E02001662',
        '2ET' => 'E02001662',
        '2EU' => 'E02001662',
        '2EW' => 'E02001662',
        '2EX' => 'E02001662',
        '2EY' => 'E02001662',
        '2EZ' => 'E02001662',
        '2FA' => 'E02001662',
        '2FB' => 'E02001662',
        '2FD' => 'E02001662',
        '2FE' => 'E02001662',
        '2FF' => 'E02001662',
        '2FG' => 'E02001662',
        '2FH' => 'E02001662',
        '2FJ' => 'E02001662',
        '2FL' => 'E02001662',
        '2FN' => 'E02001662',
        '2FP' => 'E02001662',
        '2FQ' => 'E02001662',
        '2FR' => 'E02001662',
        '2FS' => 'E02001662',
        '2FT' => 'E02001664',
        '2FU' => 'E02001662',
        '2FW' => 'E02001662',
        '2FX' => 'E02001662',
        '2FY' => 'E02001662',
        '2FZ' => 'E02001662',
        '2GA' => 'E02001662',
        '2GB' => 'E02001662',
        '2GD' => 'E02001662',
        '2GE' => 'E02001662',
        '2GF' => 'E02001662',
        '2GG' => 'E02001664',
        '2GH' => 'E02001664',
        '2GJ' => 'E02001664',
        '2GL' => 'E02001662',
        '2GN' => 'E02001664',
        '2GP' => 'E02001664',
        '2GQ' => 'E02001664',
        '2GT' => 'E02001662',
        '2GU' => 'E02001662',
        '2GW' => 'E02001664',
        '2GZ' => 'E02001655',
        '2HA' => 'E02001664',
        '2HB' => 'E02001662',
        '2HD' => 'E02001664',
        '2HE' => 'E02001664',
        '2HG' => 'E02001664',
        '2JA' => 'E02001662',
        '2JB' => 'E02001662',
        '2JD' => 'E02001662',
        '2JE' => 'E02001662',
        '2JF' => 'E02001662',
        '2JG' => 'E02001662',
        '2JH' => 'E02001662',
        '2JJ' => 'E02001662',
        '2JL' => 'E02001664',
        '2JN' => 'E02001664',
        '2JP' => 'E02001662',
        '2JQ' => 'E02001662',
        '2JR' => 'E02001662',
        '2JS' => 'E02001662',
        '2JT' => 'E02001664',
        '2JU' => 'E02001664',
        '2JW' => 'E02001662',
        '2JX' => 'E02001664',
        '2JY' => 'E02001664',
        '2LA' => 'E02001672',
        '2LB' => 'E02001664',
        '2LD' => 'E02001664',
        '2LE' => 'E02001664',
        '2LF' => 'E02001670',
        '2LG' => 'E02001664',
        '2LH' => 'E02001670',
        '2LJ' => 'E02001664',
        '2LL' => 'E02001664',
        '2LN' => 'E02001664',
        '2LQ' => 'E02001670',
        '2LR' => 'E02001670',
        '2LS' => 'E02001670',
        '2LT' => 'E02001664',
        '2LU' => 'E02001664',
        '2LW' => 'E02001664',
        '2LX' => 'E02001664',
        '2LY' => 'E02001662',
        '2LZ' => 'E02001664',
        '2NA' => 'E02001664',
        '2NB' => 'E02001664',
        '2ND' => 'E02001664',
        '2NE' => 'E02001664',
        '2NF' => 'E02001664',
        '2NG' => 'E02001664',
        '2NH' => 'E02001664',
        '2NJ' => 'E02001662',
        '2NL' => 'E02001664',
        '2NN' => 'E02001664',
        '2NP' => 'E02001662',
        '2NQ' => 'E02001664',
        '2NR' => 'E02001664',
        '2NS' => 'E02001664',
        '2NT' => 'E02001662',
        '2PA' => 'E02006843',
        '2PB' => 'E02006843',
        '2PZ' => 'E02006843',
        '2QA' => 'E02001664',
        '2QB' => 'E02001664',
        '2QD' => 'E02001664',
        '2QE' => 'E02001664',
        '2QF' => 'E02001670',
        '2QG' => 'E02001664',
        '2QH' => 'E02001664',
        '2QJ' => 'E02001664',
        '2QL' => 'E02001664',
        '2QN' => 'E02001664',
        '2QP' => 'E02001664',
        '2QQ' => 'E02001664',
        '2QR' => 'E02001664',
        '2QS' => 'E02001664',
        '2QT' => 'E02001664',
        '2QU' => 'E02001664',
        '2QW' => 'E02001664',
        '2QX' => 'E02001664',
        '2QY' => 'E02001664',
        '2QZ' => 'E02001664',
        '2RA' => 'E02001664',
        '2RB' => 'E02001664',
        '2RD' => 'E02001664',
        '2RE' => 'E02001664',
        '2RX' => 'E02001664',
        '2RY' => 'E02001664',
        '2RZ' => 'E02001664',
        '2SA' => 'E02001664',
        '2SB' => 'E02001658',
        '2SD' => 'E02001664',
        '2SE' => 'E02001658',
        '2SF' => 'E02001664',
        '2SG' => 'E02001664',
        '2SH' => 'E02001658',
        '2SJ' => 'E02001658',
        '2SL' => 'E02001664',
        '2SN' => 'E02001658',
        '2SP' => 'E02001664',
        '2SQ' => 'E02001664',
        '2SR' => 'E02001664',
        '2SS' => 'E02001658',
        '2ST' => 'E02001658',
        '2SU' => 'E02001662',
        '2SW' => 'E02001664',
        '2SX' => 'E02001664',
        '2SY' => 'E02001664',
        '2SZ' => 'E02001662',
        '2TA' => 'E02001662',
        '2TB' => 'E02001664',
        '2TD' => 'E02001664',
        '2TE' => 'E02001664',
        '2TF' => 'E02001664',
        '2TG' => 'E02001664',
        '2TH' => 'E02001664',
        '2TJ' => 'E02001664',
        '2TL' => 'E02001664',
        '2TN' => 'E02001664',
        '2TP' => 'E02001664',
        '2TQ' => 'E02001664',
        '2TR' => 'E02001664',
        '2TS' => 'E02001664',
        '2TT' => 'E02001664',
        '2TU' => 'E02001664',
        '2TW' => 'E02001662',
        '2TX' => 'E02001664',
        '2TY' => 'E02001658',
        '2TZ' => 'E02001664',
        '2UA' => 'E02001662',
        '2UB' => 'E02001662',
        '2UD' => 'E02001662',
        '2UE' => 'E02001662',
        '2UF' => 'E02001662',
        '2UG' => 'E02001664',
        '2UH' => 'E02001664',
        '2UJ' => 'E02001664',
        '2UL' => 'E02001664',
        '2UN' => 'E02001662',
        '2UP' => 'E02001664',
        '2UQ' => 'E02001662',
        '2UR' => 'E02001664',
        '2US' => 'E02001664',
        '2UT' => 'E02001664',
        '2UU' => 'E02001664',
        '2UW' => 'E02001664',
        '2UX' => 'E02001664',
        '2UY' => 'E02001662',
        '2UZ' => 'E02001662',
        '2WA' => 'E02001664',
        '2WU' => 'E02001662',
        '2WW' => 'E02001662',
        '2WX' => 'E02001662',
        '2WY' => 'E02001664',
        '2WZ' => 'E02001662',
        '2XW' => 'E02001662',
        '2XX' => 'E02001662',
        '2XY' => 'E02001662',
        '2XZ' => 'E02001662',
        '2YA' => 'E02001662',
        '2YB' => 'E02001662',
        '2YD' => 'E02001662',
        '2YE' => 'E02001662',
        '2YF' => 'E02001662',
        '2YG' => 'E02001664',
        '2YH' => 'E02001664',
        '2YJ' => 'E02001662',
        '2YL' => 'E02001664',
        '2YN' => 'E02001664',
        '2YP' => 'E02001664',
        '2YQ' => 'E02001662',
        '2YR' => 'E02001664',
        '2YS' => 'E02001664',
        '2YT' => 'E02001664',
        '2YU' => 'E02001664',
        '2YW' => 'E02001664',
        '2YX' => 'E02001664',
        '2YY' => 'E02001662',
        '2YZ' => 'E02001664',
        '3AA' => 'E02006869',
        '3AB' => 'E02006869',
        '3AD' => 'E02006869',
        '3AE' => 'E02006869',
        '3AF' => 'E02006869',
        '3AG' => 'E02006869',
        '3AH' => 'E02006869',
        '3AJ' => 'E02006869',
        '3AL' => 'E02006869',
        '3AN' => 'E02006869',
        '3AP' => 'E02006869',
        '3AQ' => 'E02006869',
        '3AR' => 'E02006869',
        '3AS' => 'E02006869',
        '3AT' => 'E02006869',
        '3AU' => 'E02006869',
        '3AW' => 'E02006869',
        '3AX' => 'E02006869',
        '3AY' => 'E02006869',
        '3AZ' => 'E02006869',
        '3BA' => 'E02006869',
        '3BB' => 'E02006869',
        '3BD' => 'E02006869',
        '3BE' => 'E02006869',
        '3BF' => 'E02006869',
        '3BG' => 'E02006869',
        '3BH' => 'E02006869',
        '3BJ' => 'E02006869',
        '3BL' => 'E02006869',
        '3BN' => 'E02006869',
        '3BP' => 'E02006869',
        '3BQ' => 'E02006869',
        '3BR' => 'E02006869',
        '3BS' => 'E02006869',
        '3BT' => 'E02006869',
        '3BU' => 'E02006869',
        '3BX' => 'E02006869',
        '3DA' => 'E02001672',
        '3DB' => 'E02001672',
        '3DD' => 'E02001672',
        '3DE' => 'E02001672',
        '3DF' => 'E02001672',
        '3DG' => 'E02001672',
        '3DH' => 'E02001672',
        '3DJ' => 'E02001662',
        '3DL' => 'E02001662',
        '3DN' => 'E02001672',
        '3DQ' => 'E02006869',
        '3DR' => 'E02001672',
        '3DS' => 'E02001672',
        '3DT' => 'E02001672',
        '3DU' => 'E02001672',
        '3DW' => 'E02001672',
        '3DX' => 'E02001672',
        '3DY' => 'E02001672',
        '3DZ' => 'E02001672',
        '3EA' => 'E02006869',
        '3EB' => 'E02006869',
        '3ED' => 'E02006869',
        '3FA' => 'E02001672',
        '3FB' => 'E02001672',
        '3FD' => 'E02001672',
        '3FE' => 'E02001672',
        '3FF' => 'E02001672',
        '3FG' => 'E02001672',
        '3FH' => 'E02001672',
        '3FJ' => 'E02001672',
        '3FL' => 'E02001672',
        '3FN' => 'E02001672',
        '3FP' => 'E02001672',
        '3FQ' => 'E02001672',
        '3FR' => 'E02001672',
        '3FS' => 'E02001672',
        '3FT' => 'E02001672',
        '3FU' => 'E02001672',
        '3FW' => 'E02001672',
        '3FX' => 'E02001672',
        '3FY' => 'E02001672',
        '3FZ' => 'E02001672',
        '3GA' => 'E02001672',
        '3GB' => 'E02001672',
        '3GD' => 'E02001672',
        '3GE' => 'E02001672',
        '3GF' => 'E02001672',
        '3GG' => 'E02001664',
        '3GH' => 'E02001672',
        '3GJ' => 'E02001672',
        '3GL' => 'E02001672',
        '3GN' => 'E02001672',
        '3GQ' => 'E02001672',
        '3HA' => 'E02001672',
        '3HB' => 'E02001672',
        '3HD' => 'E02001672',
        '3HE' => 'E02001672',
        '3HF' => 'E02001672',
        '3HG' => 'E02001672',
        '3HH' => 'E02001672',
        '3HJ' => 'E02001672',
        '3HL' => 'E02001672',
        '3HN' => 'E02001672',
        '3HP' => 'E02001672',
        '3HQ' => 'E02001672',
        '3HR' => 'E02001672',
        '3HS' => 'E02001672',
        '3HT' => 'E02001672',
        '3HU' => 'E02001672',
        '3HW' => 'E02001672',
        '3HX' => 'E02001672',
        '3HY' => 'E02001672',
        '3HZ' => 'E02001672',
        '3JA' => 'E02001672',
        '3JB' => 'E02001672',
        '3JD' => 'E02001672',
        '3JE' => 'E02001672',
        '3JF' => 'E02001672',
        '3JG' => 'E02001672',
        '3JH' => 'E02001672',
        '3JJ' => 'E02001672',
        '3JL' => 'E02001672',
        '3JN' => 'E02001672',
        '3JQ' => 'E02001672',
        '3JR' => 'E02001672',
        '3JS' => 'E02001672',
        '3LA' => 'E02001672',
        '3LB' => 'E02001672',
        '3LD' => 'E02001672',
        '3LE' => 'E02001672',
        '3LF' => 'E02001672',
        '3LG' => 'E02001672',
        '3LH' => 'E02001672',
        '3LJ' => 'E02001672',
        '3LL' => 'E02001672',
        '3LN' => 'E02001672',
        '3LP' => 'E02001672',
        '3LQ' => 'E02001672',
        '3LR' => 'E02001672',
        '3LT' => 'E02001672',
        '3UR' => 'E02001672',
        '3UT' => 'E02001672',
        '3UU' => 'E02001662',
        '3UW' => 'E02001662',
        '3UX' => 'E02001672',
        '3UY' => 'E02001662',
        '3UZ' => 'E02001672',
        '3WA' => 'E02001662',
        '3WB' => 'E02001672',
        '3WS' => 'E02001662',
        '3WT' => 'E02001662',
        '3WU' => 'E02001662',
        '3WW' => 'E02001662',
        '3WX' => 'E02001672',
        '3WY' => 'E02001662',
        '3WZ' => 'E02001672',
        '3XA' => 'E02004106',
        '3XB' => 'E02006803',
        '3XD' => 'E02004106',
        '3XE' => 'E02006803',
        '3XF' => 'E02004106',
        '3XG' => 'E02001662',
        '3XH' => 'E02006803',
        '3XJ' => 'E02004106',
        '3XL' => 'E02006803',
        '3XN' => 'E02004106',
        '3XP' => 'E02004106',
        '3XQ' => 'E02006803',
        '3XR' => 'E02004106',
        '3XS' => 'E02004106',
        '3XT' => 'E02004106',
        '3XU' => 'E02001662',
        '3XW' => 'E02004106',
        '3XX' => 'E02004106',
        '3XY' => 'E02004106',
        '3XZ' => 'E02004106',
        '3YA' => 'E02004106',
        '3YB' => 'E02004106',
        '3YD' => 'E02004106',
        '3YF' => 'E02004106',
        '3YH' => 'E02004106',
        '4AA' => 'E02001666',
        '4AB' => 'E02001666',
        '4AD' => 'E02001666',
        '4AE' => 'E02001666',
        '4AF' => 'E02001666',
        '4AG' => 'E02001671',
        '4AH' => 'E02001671',
        '4AJ' => 'E02001671',
        '4AL' => 'E02001671',
        '4AN' => 'E02001671',
        '4AQ' => 'E02001666',
        '4AR' => 'E02001666',
        '4AS' => 'E02001666',
        '4AT' => 'E02001666',
        '4AU' => 'E02001666',
        '4AW' => 'E02001666',
        '4AX' => 'E02001666',
        '4AY' => 'E02001666',
        '4AZ' => 'E02001666',
        '4BA' => 'E02001666',
        '4BB' => 'E02001666',
        '4BD' => 'E02001666',
        '4BE' => 'E02001666',
        '4BG' => 'E02001666',
        '4BH' => 'E02001666',
        '4BJ' => 'E02001666',
        '4BL' => 'E02001666',
        '4BN' => 'E02001666',
        '4BP' => 'E02001666',
        '4BQ' => 'E02001671',
        '4BR' => 'E02001666',
        '4BS' => 'E02001671',
        '4BT' => 'E02001671',
        '4BU' => 'E02001671',
        '4BW' => 'E02001671',
        '4BX' => 'E02001671',
        '4BY' => 'E02001671',
        '4EA' => 'E02006869',
        '4EB' => 'E02006869',
        '4ED' => 'E02006869',
        '4EE' => 'E02006869',
        '4EF' => 'E02006869',
        '4EG' => 'E02001671',
        '4EH' => 'E02006869',
        '4EJ' => 'E02006869',
        '4EL' => 'E02006869',
        '4EN' => 'E02006869',
        '4EP' => 'E02006869',
        '4EQ' => 'E02006869',
        '4ER' => 'E02006869',
        '4ES' => 'E02006869',
        '4ET' => 'E02006869',
        '4EU' => 'E02006869',
        '4EZ' => 'E02006869',
        '4FA' => 'E02006869',
        '4FB' => 'E02006869',
        '4FD' => 'E02006869',
        '4FE' => 'E02006869',
        '4FF' => 'E02001671',
        '4FG' => 'E02006869',
        '4FH' => 'E02006869',
        '4FJ' => 'E02001671',
        '4FL' => 'E02001671',
        '4FN' => 'E02001666',
        '4FP' => 'E02001666',
        '4FQ' => 'E02001671',
        '4FR' => 'E02001671',
        '4FS' => 'E02001666',
        '4FT' => 'E02001671',
        '4FU' => 'E02001671',
        '4FW' => 'E02001666',
        '4FX' => 'E02001671',
        '4FY' => 'E02001666',
        '4GT' => 'E02001662',
        '4GU' => 'E02001666',
        '4GX' => 'E02006869',
        '4GY' => 'E02006869',
        '4GZ' => 'E02001662',
        '4HA' => 'E02006869',
        '4HB' => 'E02006869',
        '4HD' => 'E02006869',
        '4HE' => 'E02006869',
        '4HF' => 'E02006869',
        '4HG' => 'E02006869',
        '4HH' => 'E02006869',
        '4HJ' => 'E02006869',
        '4HL' => 'E02006869',
        '4HN' => 'E02006869',
        '4HP' => 'E02006869',
        '4HQ' => 'E02006869',
        '4HR' => 'E02006869',
        '4HS' => 'E02006869',
        '4HT' => 'E02006869',
        '4HU' => 'E02006869',
        '4HW' => 'E02006869',
        '4HX' => 'E02006869',
        '4HY' => 'E02006869',
        '4HZ' => 'E02006869',
        '4JA' => 'E02006869',
        '4JB' => 'E02006869',
        '4JD' => 'E02001671',
        '4JE' => 'E02001671',
        '4JF' => 'E02001671',
        '4JZ' => 'E02001671',
        '4LA' => 'E02001671',
        '4LB' => 'E02001671',
        '4LD' => 'E02001671',
        '4LE' => 'E02001671',
        '4LF' => 'E02001671',
        '4LG' => 'E02001671',
        '4LH' => 'E02001671',
        '4LJ' => 'E02001671',
        '4LL' => 'E02001671',
        '4LN' => 'E02001671',
        '4LP' => 'E02001671',
        '4LQ' => 'E02001671',
        '4LR' => 'E02001671',
        '4LS' => 'E02001671',
        '4LT' => 'E02001671',
        '4LU' => 'E02001671',
        '4LW' => 'E02006869',
        '4LX' => 'E02001671',
        '4LY' => 'E02001671',
        '4LZ' => 'E02006869',
        '4NA' => 'E02001671',
        '4NB' => 'E02001671',
        '4ND' => 'E02001671',
        '4NE' => 'E02001671',
        '4NF' => 'E02001671',
        '4NG' => 'E02001671',
        '4NH' => 'E02001671',
        '4NJ' => 'E02001671',
        '4NL' => 'E02001671',
        '4NN' => 'E02001671',
        '4NP' => 'E02001671',
        '4NQ' => 'E02001671',
        '4NR' => 'E02001671',
        '4NT' => 'E02001671',
        '4NU' => 'E02001671',
        '4NW' => 'E02001671',
        '4NX' => 'E02001671',
        '4PA' => 'E02006869',
        '4PB' => 'E02006869',
        '4PD' => 'E02006869',
        '4PE' => 'E02006869',
        '4PF' => 'E02006869',
        '4PG' => 'E02006869',
        '4PH' => 'E02006869',
        '4PJ' => 'E02006869',
        '4PL' => 'E02006869',
        '4PN' => 'E02006869',
        '4PP' => 'E02006869',
        '4PQ' => 'E02006869',
        '4PR' => 'E02006869',
        '4PS' => 'E02006869',
        '4PT' => 'E02006869',
        '4PU' => 'E02006869',
        '4PW' => 'E02006869',
        '4PY' => 'E02006869',
        '4PZ' => 'E02006869',
        '4QA' => 'E02006869',
        '4QB' => 'E02006869',
        '4QD' => 'E02006869',
        '4QE' => 'E02006869',
        '4QF' => 'E02006869',
        '4QG' => 'E02006869',
        '4QH' => 'E02006869',
        '4QJ' => 'E02006869',
        '4QL' => 'E02006869',
        '4QN' => 'E02006869',
        '4QP' => 'E02006869',
        '4QQ' => 'E02006869',
        '4QR' => 'E02006869',
        '4QS' => 'E02006869',
        '4QT' => 'E02006869',
        '4QU' => 'E02006869',
        '4RA' => 'E02006869',
        '4RB' => 'E02006869',
        '4RD' => 'E02006869',
        '4RE' => 'E02006869',
        '4RF' => 'E02006869',
        '4RG' => 'E02006869',
        '4RH' => 'E02006869',
        '4RJ' => 'E02006869',
        '4RL' => 'E02006869',
        '4RN' => 'E02006869',
        '4RP' => 'E02006869',
        '4RQ' => 'E02006869',
        '4RR' => 'E02006869',
        '4RT' => 'E02006869',
        '4RU' => 'E02006869',
        '4RW' => 'E02006869',
        '4RX' => 'E02006869',
        '4RY' => 'E02006869',
        '4SA' => 'E02006869',
        '4SB' => 'E02006869',
        '4SD' => 'E02006869',
        '4SE' => 'E02006869',
        '4SF' => 'E02006869',
        '4SG' => 'E02006869',
        '4SH' => 'E02006869',
        '4SJ' => 'E02006869',
        '4SL' => 'E02006869',
        '4SN' => 'E02006869',
        '4SP' => 'E02006869',
        '4SQ' => 'E02006869',
        '4SR' => 'E02006869',
        '4TA' => 'E02006869',
        '4TB' => 'E02006869',
        '4TD' => 'E02006869',
        '4TE' => 'E02006869',
        '4TF' => 'E02006869',
        '4TG' => 'E02006869',
        '4TH' => 'E02006869',
        '4TJ' => 'E02006869',
        '4TL' => 'E02006869',
        '4TN' => 'E02006869',
        '4TP' => 'E02006869',
        '4TQ' => 'E02006869',
        '4TR' => 'E02006869',
        '4TS' => 'E02006869',
        '4TT' => 'E02006869',
        '4TU' => 'E02006869',
        '4TW' => 'E02006869',
        '4TX' => 'E02006869',
        '4TY' => 'E02006869',
        '4TZ' => 'E02006869',
        '4UY' => 'E02006869',
        '4UZ' => 'E02006869',
        '4WA' => 'E02006869',
        '4WB' => 'E02006869',
        '4WD' => 'E02006869',
        '4WE' => 'E02006869',
        '4WF' => 'E02006869',
        '4WG' => 'E02006869',
        '4WH' => 'E02006869',
        '4WJ' => 'E02001662',
        '4WL' => 'E02006869',
        '4WN' => 'E02006869',
        '4WP' => 'E02006869',
        '4WQ' => 'E02006869',
        '4WR' => 'E02006869',
        '4WS' => 'E02006869',
        '4WT' => 'E02006869',
        '4WU' => 'E02006869',
        '4WW' => 'E02006869',
        '4WX' => 'E02006869',
        '4WY' => 'E02006869',
        '4WZ' => 'E02006869',
        '4XA' => 'E02006869',
        '4XB' => 'E02006869',
        '4XD' => 'E02006869',
        '4XE' => 'E02006869',
        '4XF' => 'E02006869',
        '4XG' => 'E02006869',
        '4XH' => 'E02006869',
        '4XJ' => 'E02006869',
        '4XL' => 'E02006869',
        '4XN' => 'E02006869',
        '4XP' => 'E02006869',
        '4XQ' => 'E02006869',
        '4XR' => 'E02006869',
        '4XS' => 'E02006869',
        '4XT' => 'E02006869',
        '4XU' => 'E02006869',
        '4XW' => 'E02006869',
        '4XX' => 'E02006869',
        '4XY' => 'E02006869',
        '4XZ' => 'E02006869',
        '4YA' => 'E02006869',
        '4YB' => 'E02006869',
        '4YD' => 'E02006869',
        '4YE' => 'E02006869',
        '4YF' => 'E02006869',
        '4YG' => 'E02006869',
        '4YH' => 'E02006869',
        '4YJ' => 'E02006869',
        '4YL' => 'E02006869',
        '4YN' => 'E02006869',
        '4YY' => 'E02001662',
        '4YZ' => 'E02001662',
        '4ZE' => 'E02001662',
        '4ZL' => 'E02001662',
        '4ZN' => 'E02001662',
        '4ZP' => 'E02006869',
        '4ZS' => 'E02006869',
        '4ZT' => 'E02006869',
        '4ZU' => 'E02006869',
        '4ZX' => 'E02006869',
        '4ZY' => 'E02006869',
        '4ZZ' => 'E02006869',
        '9AA' => 'E02001662',
        '9AB' => 'E02001662',
        '9AD' => 'E02001662',
        '9AE' => 'E02001662',
        '9AF' => 'E02001662',
        '9AG' => 'E02001662',
        '9AH' => 'E02001662',
        '9AL' => 'E02001662',
        '9AN' => 'E02001662',
        '9AP' => 'E02001662',
        '9AR' => 'E02001662',
        '9AS' => 'E02001662',
        '9AT' => 'E02001662',
        '9AU' => 'E02001662',
        '9AW' => 'E02001662',
        '9AX' => 'E02001662',
        '9AY' => 'E02001662',
        '9AZ' => 'E02001662',
        '9BB' => 'E02001662',
        '9BD' => 'E02001662',
        '9BE' => 'E02001662',
        '9BF' => 'E02001662',
        '9BG' => 'E02001662',
        '9BH' => 'E02001662',
        '9BJ' => 'E02001662',
        '9BL' => 'E02001662',
        '9BN' => 'E02001662',
        '9BP' => 'E02001662',
        '9BQ' => 'E02001662',
        '9BR' => 'E02001662',
        '9BS' => 'E02001662',
        '9BT' => 'E02001662',
        '9BU' => 'E02001662',
        '9BW' => 'E02001662',
        '9BX' => 'E02001662',
        '9BY' => 'E02001662',
        '9BZ' => 'E02001662',
        '9DA' => 'E02001662',
        '9DB' => 'E02001662',
        '9DD' => 'E02001662',
        '9DE' => 'E02001662',
        '9DF' => 'E02001662',
        '9DG' => 'E02001662',
        '9DH' => 'E02001662',
        '9DJ' => 'E02001662',
        '9DL' => 'E02001662',
        '9DN' => 'E02001662',
        '9DP' => 'E02001662',
        '9DQ' => 'E02001662',
        '9DR' => 'E02001662',
        '9DS' => 'E02001662',
        '9DT' => 'E02001662',
        '9DU' => 'E02001662',
        '9DW' => 'E02001662',
        '9DX' => 'E02001662',
        '9DZ' => 'E02001662',
        '9EA' => 'E02001662',
        '9EB' => 'E02001662',
        '9ED' => 'E02001662',
        '9EE' => 'E02001662',
        '9EF' => 'E02001662',
        '9EG' => 'E02001662',
        '9EH' => 'E02001662',
        '9EJ' => 'E02001662',
        '9EL' => 'E02001662',
        '9EN' => 'E02001662',
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
