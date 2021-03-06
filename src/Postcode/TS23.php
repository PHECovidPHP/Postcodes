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
final class TS23
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02002538',
        '1AB' => 'E02002538',
        '1AD' => 'E02002538',
        '1AE' => 'E02002538',
        '1AF' => 'E02002538',
        '1AG' => 'E02002538',
        '1AH' => 'E02002538',
        '1AJ' => 'E02002538',
        '1AL' => 'E02002538',
        '1AN' => 'E02002538',
        '1AP' => 'E02002538',
        '1AQ' => 'E02002538',
        '1AR' => 'E02002538',
        '1AS' => 'E02002538',
        '1AT' => 'E02002538',
        '1AU' => 'E02002538',
        '1AW' => 'E02002538',
        '1AX' => 'E02002538',
        '1AY' => 'E02002538',
        '1AZ' => 'E02002538',
        '1BA' => 'E02002538',
        '1BB' => 'E02002538',
        '1BD' => 'E02002538',
        '1BE' => 'E02002538',
        '1BF' => 'E02002538',
        '1BG' => 'E02002538',
        '1BH' => 'E02002538',
        '1BJ' => 'E02002538',
        '1BL' => 'E02002538',
        '1BN' => 'E02002538',
        '1BP' => 'E02002538',
        '1BQ' => 'E02002538',
        '1BS' => 'E02002538',
        '1BT' => 'E02002538',
        '1BU' => 'E02002538',
        '1BW' => 'E02002538',
        '1BX' => 'E02002538',
        '1BY' => 'E02002538',
        '1BZ' => 'E02002538',
        '1DA' => 'E02002538',
        '1DB' => 'E02002538',
        '1DD' => 'E02002538',
        '1DE' => 'E02002538',
        '1DF' => 'E02002538',
        '1DG' => 'E02002538',
        '1DH' => 'E02002538',
        '1DJ' => 'E02002538',
        '1DL' => 'E02002538',
        '1DN' => 'E02002538',
        '1DP' => 'E02002538',
        '1DQ' => 'E02002538',
        '1DR' => 'E02002538',
        '1DS' => 'E02002538',
        '1DT' => 'E02002538',
        '1DU' => 'E02002538',
        '1DW' => 'E02002538',
        '1DX' => 'E02002538',
        '1DY' => 'E02002538',
        '1DZ' => 'E02002538',
        '1EA' => 'E02002538',
        '1EB' => 'E02002538',
        '1ED' => 'E02002538',
        '1EE' => 'E02002538',
        '1EF' => 'E02002538',
        '1EG' => 'E02002538',
        '1EH' => 'E02002538',
        '1EJ' => 'E02002538',
        '1EL' => 'E02002538',
        '1EN' => 'E02002538',
        '1EP' => 'E02002538',
        '1EQ' => 'E02002538',
        '1ER' => 'E02002538',
        '1ES' => 'E02002538',
        '1ET' => 'E02002538',
        '1EU' => 'E02002538',
        '1EW' => 'E02002538',
        '1EX' => 'E02002538',
        '1EY' => 'E02002538',
        '1EZ' => 'E02002538',
        '1FB' => 'E02002538',
        '1FD' => 'E02002538',
        '1FE' => 'E02002538',
        '1FF' => 'E02002538',
        '1FG' => 'E02002538',
        '1HA' => 'E02002538',
        '1HB' => 'E02002538',
        '1HD' => 'E02002538',
        '1HE' => 'E02002538',
        '1HF' => 'E02002538',
        '1HG' => 'E02002538',
        '1HH' => 'E02002538',
        '1HJ' => 'E02002538',
        '1HL' => 'E02002538',
        '1HN' => 'E02002538',
        '1HP' => 'E02002538',
        '1HQ' => 'E02002538',
        '1HR' => 'E02002538',
        '1HS' => 'E02002538',
        '1HT' => 'E02002538',
        '1HU' => 'E02002538',
        '1HW' => 'E02002538',
        '1HX' => 'E02002538',
        '1HY' => 'E02002538',
        '1HZ' => 'E02002538',
        '1JA' => 'E02002538',
        '1JB' => 'E02002538',
        '1JD' => 'E02002538',
        '1JE' => 'E02002538',
        '1JF' => 'E02002538',
        '1JG' => 'E02002538',
        '1JH' => 'E02002538',
        '1JJ' => 'E02002538',
        '1JL' => 'E02002538',
        '1JN' => 'E02002538',
        '1JP' => 'E02002538',
        '1JQ' => 'E02002538',
        '1JR' => 'E02002538',
        '1JS' => 'E02002538',
        '1JT' => 'E02002538',
        '1JU' => 'E02002538',
        '1JW' => 'E02002538',
        '1LA' => 'E02002538',
        '1LB' => 'E02002546',
        '1LD' => 'E02002546',
        '1LE' => 'E02002538',
        '1LF' => 'E02002538',
        '1LG' => 'E02002538',
        '1LH' => 'E02002538',
        '1LJ' => 'E02002538',
        '1LL' => 'E02002538',
        '1LN' => 'E02002538',
        '1LP' => 'E02002538',
        '1LQ' => 'E02002537',
        '1LR' => 'E02002538',
        '1LS' => 'E02002538',
        '1LT' => 'E02002538',
        '1LU' => 'E02002538',
        '1LW' => 'E02002538',
        '1LX' => 'E02002538',
        '1LY' => 'E02002538',
        '1LZ' => 'E02002538',
        '1NA' => 'E02002538',
        '1NB' => 'E02002538',
        '1ND' => 'E02002538',
        '1NE' => 'E02002538',
        '1NF' => 'E02002538',
        '1NG' => 'E02002538',
        '1NH' => 'E02002538',
        '1NJ' => 'E02002538',
        '1NL' => 'E02002538',
        '1NN' => 'E02002538',
        '1NP' => 'E02002538',
        '1NQ' => 'E02002538',
        '1NR' => 'E02002538',
        '1NS' => 'E02002538',
        '1NW' => 'E02002538',
        '1PA' => 'E02002538',
        '1PB' => 'E02002538',
        '1PD' => 'E02002538',
        '1PE' => 'E02002538',
        '1PF' => 'E02002538',
        '1PG' => 'E02002538',
        '1PH' => 'E02002538',
        '1PJ' => 'E02002538',
        '1PL' => 'E02002538',
        '1PN' => 'E02002538',
        '1PP' => 'E02002538',
        '1PQ' => 'E02002538',
        '1PR' => 'E02002538',
        '1PS' => 'E02002538',
        '1PT' => 'E02002538',
        '1PU' => 'E02002538',
        '1PW' => 'E02002538',
        '1PX' => 'E02002538',
        '1PY' => 'E02002537',
        '1PZ' => 'E02002537',
        '1QA' => 'E02002537',
        '1QB' => 'E02002537',
        '1QD' => 'E02002537',
        '1QE' => 'E02002537',
        '1QF' => 'E02002537',
        '1QG' => 'E02002538',
        '1QH' => 'E02002538',
        '1QJ' => 'E02002538',
        '1QL' => 'E02002538',
        '1QN' => 'E02002538',
        '1QP' => 'E02002538',
        '1QQ' => 'E02002538',
        '1QW' => 'E02002538',
        '1QY' => 'E02002538',
        '1QZ' => 'E02002538',
        '1RA' => 'E02002538',
        '1RB' => 'E02002538',
        '1WY' => 'E02002538',
        '1WZ' => 'E02002538',
        '1XF' => 'E02002546',
        '1XG' => 'E02002546',
        '1XH' => 'E02002538',
        '1XJ' => 'E02002546',
        '1XL' => 'E02002546',
        '1XN' => 'E02002546',
        '1XP' => 'E02002538',
        '1XQ' => 'E02002546',
        '1XR' => 'E02002538',
        '1XS' => 'E02002538',
        '1XT' => 'E02002546',
        '1XU' => 'E02002546',
        '1XW' => 'E02002538',
        '1XX' => 'E02002546',
        '1XY' => 'E02002546',
        '1XZ' => 'E02002538',
        '1YA' => 'E02002538',
        '1YB' => 'E02002546',
        '1YD' => 'E02002546',
        '1YF' => 'E02002546',
        '1YG' => 'E02002546',
        '1YH' => 'E02002546',
        '1YJ' => 'E02002546',
        '1YL' => 'E02002538',
        '1YN' => 'E02002546',
        '1YQ' => 'E02002538',
        '1YR' => 'E02002538',
        '1YS' => 'E02002538',
        '1YT' => 'E02002538',
        '1YU' => 'E02002538',
        '1YW' => 'E02002546',
        '1YX' => 'E02002546',
        '2AA' => 'E02002536',
        '2AB' => 'E02002536',
        '2AD' => 'E02002536',
        '2AE' => 'E02002536',
        '2AF' => 'E02002536',
        '2AG' => 'E02002536',
        '2AH' => 'E02002536',
        '2AJ' => 'E02002536',
        '2AL' => 'E02002536',
        '2AN' => 'E02002536',
        '2AP' => 'E02002536',
        '2AQ' => 'E02002536',
        '2AR' => 'E02002536',
        '2AS' => 'E02002536',
        '2AT' => 'E02002536',
        '2AU' => 'E02002536',
        '2AW' => 'E02002536',
        '2AX' => 'E02002536',
        '2AY' => 'E02002536',
        '2AZ' => 'E02002536',
        '2BA' => 'E02002536',
        '2BB' => 'E02002536',
        '2BD' => 'E02002536',
        '2BE' => 'E02002536',
        '2BF' => 'E02002536',
        '2BG' => 'E02002536',
        '2BH' => 'E02002536',
        '2BJ' => 'E02002536',
        '2BL' => 'E02002536',
        '2BN' => 'E02002536',
        '2BP' => 'E02002536',
        '2BQ' => 'E02002536',
        '2BS' => 'E02002536',
        '2BT' => 'E02002536',
        '2BU' => 'E02002535',
        '2BW' => 'E02002536',
        '2BX' => 'E02002535',
        '2BY' => 'E02002536',
        '2DA' => 'E02002536',
        '2DB' => 'E02002536',
        '2DD' => 'E02002536',
        '2DE' => 'E02002536',
        '2DF' => 'E02002536',
        '2DG' => 'E02002536',
        '2DH' => 'E02002536',
        '2DJ' => 'E02002536',
        '2DL' => 'E02002536',
        '2DN' => 'E02002536',
        '2DP' => 'E02002536',
        '2DQ' => 'E02002536',
        '2DR' => 'E02002536',
        '2DS' => 'E02002536',
        '2DT' => 'E02002536',
        '2DU' => 'E02002536',
        '2DW' => 'E02002536',
        '2DX' => 'E02002536',
        '2DY' => 'E02002536',
        '2DZ' => 'E02002536',
        '2EA' => 'E02002536',
        '2EB' => 'E02002536',
        '2ED' => 'E02002536',
        '2EE' => 'E02002536',
        '2EF' => 'E02002536',
        '2EG' => 'E02002536',
        '2EH' => 'E02002536',
        '2EJ' => 'E02002536',
        '2EL' => 'E02002536',
        '2EN' => 'E02002536',
        '2EP' => 'E02002536',
        '2EQ' => 'E02002536',
        '2ER' => 'E02002536',
        '2ES' => 'E02002536',
        '2ET' => 'E02002536',
        '2EU' => 'E02002536',
        '2EW' => 'E02002536',
        '2EX' => 'E02002536',
        '2EY' => 'E02002536',
        '2FA' => 'E02002536',
        '2FR' => 'E02002536',
        '2GH' => 'E02002536',
        '2HA' => 'E02002537',
        '2HB' => 'E02002537',
        '2HD' => 'E02002537',
        '2HE' => 'E02002536',
        '2HF' => 'E02002536',
        '2HG' => 'E02002536',
        '2HH' => 'E02002536',
        '2HJ' => 'E02002536',
        '2HL' => 'E02002536',
        '2HN' => 'E02002536',
        '2HP' => 'E02002536',
        '2HQ' => 'E02002536',
        '2HR' => 'E02002536',
        '2HS' => 'E02002536',
        '2HT' => 'E02002536',
        '2HU' => 'E02002536',
        '2HW' => 'E02002536',
        '2HX' => 'E02002536',
        '2HY' => 'E02002536',
        '2HZ' => 'E02002536',
        '2JA' => 'E02002536',
        '2JB' => 'E02002536',
        '2JD' => 'E02002536',
        '2JE' => 'E02002536',
        '2JF' => 'E02002536',
        '2JG' => 'E02002536',
        '2JH' => 'E02002536',
        '2JJ' => 'E02002536',
        '2JL' => 'E02002536',
        '2JN' => 'E02002536',
        '2JP' => 'E02002536',
        '2JQ' => 'E02002536',
        '2JR' => 'E02002536',
        '2JS' => 'E02002536',
        '2JT' => 'E02002536',
        '2JW' => 'E02002536',
        '2JY' => 'E02002536',
        '2JZ' => 'E02002536',
        '2LA' => 'E02002536',
        '2LB' => 'E02002536',
        '2LD' => 'E02002536',
        '2LE' => 'E02002536',
        '2LF' => 'E02002536',
        '2LG' => 'E02002536',
        '2LH' => 'E02002536',
        '2LJ' => 'E02002536',
        '2LL' => 'E02002536',
        '2LN' => 'E02002536',
        '2LP' => 'E02002536',
        '2LQ' => 'E02002536',
        '2LR' => 'E02002536',
        '2LS' => 'E02002536',
        '2LT' => 'E02002536',
        '2LU' => 'E02002536',
        '2LW' => 'E02002536',
        '2LX' => 'E02002536',
        '2LY' => 'E02002536',
        '2LZ' => 'E02002536',
        '2NA' => 'E02002536',
        '2NB' => 'E02002536',
        '2ND' => 'E02002536',
        '2NE' => 'E02002536',
        '2NF' => 'E02002536',
        '2NG' => 'E02002536',
        '2NH' => 'E02002536',
        '2NJ' => 'E02002536',
        '2NL' => 'E02002536',
        '2NN' => 'E02002536',
        '2NP' => 'E02002536',
        '2NQ' => 'E02002536',
        '2NR' => 'E02002536',
        '2NS' => 'E02002536',
        '2NT' => 'E02002536',
        '2NU' => 'E02002536',
        '2NW' => 'E02002536',
        '2NX' => 'E02002536',
        '2PA' => 'E02002536',
        '2PB' => 'E02002536',
        '2PD' => 'E02002536',
        '2PE' => 'E02002536',
        '2PF' => 'E02002536',
        '2PG' => 'E02002536',
        '2PH' => 'E02002536',
        '2PJ' => 'E02002536',
        '2PL' => 'E02002536',
        '2PN' => 'E02002536',
        '2PP' => 'E02002536',
        '2PQ' => 'E02002536',
        '2PR' => 'E02002536',
        '2PS' => 'E02002536',
        '2PT' => 'E02002536',
        '2PW' => 'E02002536',
        '2QA' => 'E02002536',
        '2QB' => 'E02002536',
        '2QD' => 'E02002536',
        '2QE' => 'E02002536',
        '2QF' => 'E02002536',
        '2QG' => 'E02002536',
        '2QH' => 'E02002536',
        '2QJ' => 'E02002536',
        '2QL' => 'E02002536',
        '2QN' => 'E02002537',
        '2QP' => 'E02002537',
        '2QQ' => 'E02002536',
        '2QR' => 'E02002537',
        '2QS' => 'E02002537',
        '2QT' => 'E02002537',
        '2QU' => 'E02002537',
        '2QW' => 'E02002537',
        '2QX' => 'E02002537',
        '2QY' => 'E02002537',
        '2QZ' => 'E02002537',
        '2RA' => 'E02002537',
        '2RB' => 'E02002537',
        '2RD' => 'E02002537',
        '2RE' => 'E02002537',
        '2RF' => 'E02002536',
        '2RG' => 'E02002536',
        '2RH' => 'E02002536',
        '2RJ' => 'E02002536',
        '2RL' => 'E02002536',
        '2RN' => 'E02002536',
        '2RP' => 'E02002536',
        '2RQ' => 'E02002536',
        '2RR' => 'E02002536',
        '2RS' => 'E02002536',
        '2RT' => 'E02002536',
        '2RU' => 'E02002536',
        '2RW' => 'E02002536',
        '2RX' => 'E02002536',
        '2RY' => 'E02002536',
        '2RZ' => 'E02002536',
        '2SA' => 'E02002536',
        '2SB' => 'E02002536',
        '2SD' => 'E02002536',
        '2SE' => 'E02002536',
        '2SF' => 'E02002536',
        '2SG' => 'E02002536',
        '2TA' => 'E02002535',
        '2TB' => 'E02002535',
        '2TD' => 'E02002535',
        '2TE' => 'E02002535',
        '2TF' => 'E02002535',
        '2TG' => 'E02002535',
        '2TH' => 'E02002535',
        '2TJ' => 'E02002535',
        '2TL' => 'E02002535',
        '2TN' => 'E02002535',
        '2TP' => 'E02002535',
        '2TQ' => 'E02002535',
        '2TW' => 'E02002535',
        '2WA' => 'E02002546',
        '2WB' => 'E02002546',
        '2WD' => 'E02002546',
        '2WS' => 'E02002546',
        '2WT' => 'E02002546',
        '2WU' => 'E02002546',
        '2WW' => 'E02002546',
        '2WX' => 'E02002546',
        '2WY' => 'E02002546',
        '2WZ' => 'E02002546',
        '2XZ' => 'E02002546',
        '2YA' => 'E02002546',
        '2YB' => 'E02002546',
        '2YD' => 'E02002546',
        '2YE' => 'E02002546',
        '2YF' => 'E02002546',
        '2YG' => 'E02002546',
        '2YH' => 'E02002536',
        '2YJ' => 'E02002536',
        '2YL' => 'E02002546',
        '2YN' => 'E02002546',
        '2YP' => 'E02002536',
        '2YQ' => 'E02002546',
        '2YR' => 'E02002536',
        '2YS' => 'E02002546',
        '2YT' => 'E02002536',
        '2YU' => 'E02002536',
        '2YW' => 'E02002536',
        '2YX' => 'E02002546',
        '2YZ' => 'E02002546',
        '3AA' => 'E02002537',
        '3AB' => 'E02002537',
        '3AD' => 'E02002537',
        '3AE' => 'E02002537',
        '3AF' => 'E02002537',
        '3AG' => 'E02002537',
        '3AH' => 'E02002537',
        '3AJ' => 'E02002537',
        '3AL' => 'E02002537',
        '3AN' => 'E02002537',
        '3AP' => 'E02002537',
        '3AQ' => 'E02002537',
        '3AR' => 'E02002537',
        '3AS' => 'E02002537',
        '3AT' => 'E02002537',
        '3AU' => 'E02002537',
        '3AW' => 'E02002537',
        '3AX' => 'E02002537',
        '3AY' => 'E02002537',
        '3AZ' => 'E02002537',
        '3BA' => 'E02002537',
        '3BB' => 'E02002537',
        '3BD' => 'E02002537',
        '3BE' => 'E02002537',
        '3BG' => 'E02002537',
        '3BH' => 'E02002537',
        '3BJ' => 'E02002537',
        '3BL' => 'E02002537',
        '3BN' => 'E02002537',
        '3BP' => 'E02002537',
        '3BQ' => 'E02002537',
        '3BS' => 'E02002537',
        '3BT' => 'E02002537',
        '3BU' => 'E02002537',
        '3BW' => 'E02002537',
        '3BX' => 'E02002537',
        '3BY' => 'E02002537',
        '3BZ' => 'E02002537',
        '3DA' => 'E02002537',
        '3DB' => 'E02002537',
        '3DD' => 'E02002537',
        '3DE' => 'E02002537',
        '3DF' => 'E02002537',
        '3DG' => 'E02002535',
        '3DH' => 'E02002535',
        '3DJ' => 'E02002535',
        '3DL' => 'E02002537',
        '3DN' => 'E02002537',
        '3DP' => 'E02002537',
        '3DQ' => 'E02002535',
        '3DR' => 'E02002537',
        '3DS' => 'E02002537',
        '3DT' => 'E02002537',
        '3DU' => 'E02002537',
        '3DW' => 'E02002537',
        '3DX' => 'E02002537',
        '3DY' => 'E02002537',
        '3DZ' => 'E02002537',
        '3EA' => 'E02002537',
        '3EB' => 'E02002537',
        '3ED' => 'E02002537',
        '3EE' => 'E02002537',
        '3EF' => 'E02002537',
        '3EG' => 'E02002537',
        '3EH' => 'E02002535',
        '3EJ' => 'E02002537',
        '3EL' => 'E02002535',
        '3EN' => 'E02002535',
        '3EP' => 'E02002535',
        '3EQ' => 'E02002537',
        '3ER' => 'E02002535',
        '3ES' => 'E02002535',
        '3ET' => 'E02002535',
        '3EU' => 'E02002535',
        '3EW' => 'E02002535',
        '3EX' => 'E02002535',
        '3EY' => 'E02002535',
        '3EZ' => 'E02002535',
        '3FA' => 'E02002535',
        '3FB' => 'E02002535',
        '3FD' => 'E02002535',
        '3FE' => 'E02002535',
        '3FF' => 'E02002546',
        '3FG' => 'E02002535',
        '3FH' => 'E02002546',
        '3FJ' => 'E02002535',
        '3FL' => 'E02002535',
        '3FP' => 'E02002535',
        '3FQ' => 'E02002546',
        '3FR' => 'E02002535',
        '3FS' => 'E02002546',
        '3FT' => 'E02002535',
        '3FW' => 'E02002535',
        '3FX' => 'E02002535',
        '3FY' => 'E02002535',
        '3FZ' => 'E02002537',
        '3GA' => 'E02002535',
        '3GB' => 'E02002535',
        '3GD' => 'E02002535',
        '3GE' => 'E02002535',
        '3GF' => 'E02002535',
        '3GG' => 'E02002535',
        '3GH' => 'E02002535',
        '3GJ' => 'E02002535',
        '3GL' => 'E02002535',
        '3GN' => 'E02002535',
        '3GP' => 'E02002535',
        '3GQ' => 'E02002535',
        '3GR' => 'E02002535',
        '3GS' => 'E02002535',
        '3GT' => 'E02002535',
        '3GU' => 'E02002535',
        '3GW' => 'E02002535',
        '3GX' => 'E02002535',
        '3GY' => 'E02002535',
        '3HA' => 'E02002535',
        '3HB' => 'E02002535',
        '3HD' => 'E02002535',
        '3HE' => 'E02002535',
        '3HF' => 'E02002535',
        '3HG' => 'E02002535',
        '3HH' => 'E02002537',
        '3HJ' => 'E02002537',
        '3HL' => 'E02002537',
        '3HN' => 'E02002537',
        '3HP' => 'E02002537',
        '3HQ' => 'E02002535',
        '3HR' => 'E02002537',
        '3HS' => 'E02002537',
        '3HT' => 'E02002537',
        '3HU' => 'E02002537',
        '3HW' => 'E02002537',
        '3HX' => 'E02002537',
        '3HY' => 'E02002537',
        '3HZ' => 'E02002537',
        '3JA' => 'E02002537',
        '3JB' => 'E02002537',
        '3JD' => 'E02002537',
        '3JE' => 'E02002537',
        '3JF' => 'E02002537',
        '3JG' => 'E02002537',
        '3JH' => 'E02002537',
        '3JJ' => 'E02002537',
        '3JL' => 'E02002537',
        '3JN' => 'E02002537',
        '3JP' => 'E02002537',
        '3JQ' => 'E02002537',
        '3JR' => 'E02002537',
        '3JS' => 'E02002537',
        '3JT' => 'E02002537',
        '3JU' => 'E02002537',
        '3JW' => 'E02002537',
        '3JX' => 'E02002537',
        '3JY' => 'E02002537',
        '3JZ' => 'E02002535',
        '3LA' => 'E02002535',
        '3LB' => 'E02002535',
        '3LD' => 'E02002537',
        '3LE' => 'E02002537',
        '3LF' => 'E02002537',
        '3LG' => 'E02002537',
        '3LH' => 'E02002537',
        '3LJ' => 'E02002537',
        '3LL' => 'E02002537',
        '3LN' => 'E02002537',
        '3LP' => 'E02002537',
        '3LQ' => 'E02002537',
        '3LR' => 'E02002537',
        '3LS' => 'E02002537',
        '3LT' => 'E02002537',
        '3LU' => 'E02002537',
        '3LW' => 'E02002537',
        '3LX' => 'E02002535',
        '3LY' => 'E02002537',
        '3LZ' => 'E02002537',
        '3NA' => 'E02002537',
        '3NB' => 'E02002535',
        '3ND' => 'E02002535',
        '3NE' => 'E02002535',
        '3NF' => 'E02002537',
        '3NG' => 'E02002535',
        '3NH' => 'E02002535',
        '3NJ' => 'E02002535',
        '3NL' => 'E02002535',
        '3NN' => 'E02002537',
        '3NP' => 'E02002537',
        '3NQ' => 'E02002535',
        '3NR' => 'E02002537',
        '3NS' => 'E02002537',
        '3NT' => 'E02002537',
        '3NU' => 'E02002537',
        '3NW' => 'E02002537',
        '3NX' => 'E02002537',
        '3PA' => 'E02002537',
        '3PB' => 'E02002537',
        '3PD' => 'E02002537',
        '3PE' => 'E02002537',
        '3PF' => 'E02002537',
        '3PG' => 'E02002537',
        '3PH' => 'E02002537',
        '3PJ' => 'E02002537',
        '3PL' => 'E02002537',
        '3PN' => 'E02002535',
        '3PP' => 'E02002535',
        '3PQ' => 'E02002537',
        '3PR' => 'E02002535',
        '3PS' => 'E02002535',
        '3PT' => 'E02002535',
        '3PU' => 'E02002535',
        '3PW' => 'E02002535',
        '3PX' => 'E02002535',
        '3PY' => 'E02002535',
        '3PZ' => 'E02002535',
        '3QA' => 'E02002535',
        '3QB' => 'E02002535',
        '3QD' => 'E02002535',
        '3QE' => 'E02002535',
        '3QF' => 'E02002535',
        '3QG' => 'E02002535',
        '3QH' => 'E02002535',
        '3QJ' => 'E02002535',
        '3QL' => 'E02002537',
        '3QN' => 'E02002537',
        '3QP' => 'E02002537',
        '3QQ' => 'E02002535',
        '3QR' => 'E02002537',
        '3QS' => 'E02002537',
        '3QT' => 'E02002537',
        '3QU' => 'E02002537',
        '3QW' => 'E02002537',
        '3QX' => 'E02002537',
        '3QY' => 'E02002537',
        '3QZ' => 'E02002535',
        '3RA' => 'E02002535',
        '3RB' => 'E02002535',
        '3RD' => 'E02002535',
        '3RE' => 'E02002535',
        '3RF' => 'E02002536',
        '3RG' => 'E02002536',
        '3RH' => 'E02002536',
        '3RJ' => 'E02002536',
        '3RL' => 'E02002536',
        '3RN' => 'E02002535',
        '3RP' => 'E02002535',
        '3RQ' => 'E02002536',
        '3RR' => 'E02002535',
        '3RS' => 'E02002535',
        '3RT' => 'E02002535',
        '3RU' => 'E02002535',
        '3RW' => 'E02002535',
        '3RX' => 'E02002535',
        '3RY' => 'E02002535',
        '3RZ' => 'E02002535',
        '3SA' => 'E02002535',
        '3SB' => 'E02002535',
        '3SD' => 'E02002535',
        '3SE' => 'E02002535',
        '3SF' => 'E02002535',
        '3SG' => 'E02002535',
        '3SH' => 'E02002535',
        '3SJ' => 'E02002535',
        '3SL' => 'E02002535',
        '3SN' => 'E02002535',
        '3SP' => 'E02002535',
        '3SQ' => 'E02002535',
        '3SR' => 'E02002535',
        '3SS' => 'E02002535',
        '3ST' => 'E02002537',
        '3SU' => 'E02002535',
        '3SW' => 'E02002535',
        '3SX' => 'E02002535',
        '3SY' => 'E02002535',
        '3TA' => 'E02002537',
        '3TB' => 'E02002535',
        '3TD' => 'E02002537',
        '3TE' => 'E02002537',
        '3TF' => 'E02002537',
        '3TG' => 'E02002537',
        '3TH' => 'E02002535',
        '3TJ' => 'E02002537',
        '3TL' => 'E02002535',
        '3TN' => 'E02002535',
        '3TP' => 'E02002537',
        '3TQ' => 'E02006909',
        '3TR' => 'E02002535',
        '3TS' => 'E02002535',
        '3TT' => 'E02002535',
        '3TU' => 'E02002535',
        '3TW' => 'E02002535',
        '3TX' => 'E02002535',
        '3TY' => 'E02002535',
        '3TZ' => 'E02002535',
        '3UA' => 'E02002535',
        '3UB' => 'E02002535',
        '3UD' => 'E02002535',
        '3UE' => 'E02002535',
        '3UF' => 'E02002535',
        '3UG' => 'E02002535',
        '3UH' => 'E02002535',
        '3UJ' => 'E02002535',
        '3UL' => 'E02002535',
        '3UN' => 'E02002535',
        '3UP' => 'E02002535',
        '3UQ' => 'E02002535',
        '3UR' => 'E02002535',
        '3UT' => 'E02002535',
        '3UU' => 'E02002535',
        '3UW' => 'E02002535',
        '3UX' => 'E02002535',
        '3UY' => 'E02002535',
        '3UZ' => 'E02002535',
        '3WA' => 'E02002535',
        '3WB' => 'E02002546',
        '3WD' => 'E02002546',
        '3WE' => 'E02002546',
        '3WH' => 'E02002535',
        '3WJ' => 'E02002535',
        '3WL' => 'E02002535',
        '3WP' => 'E02002546',
        '3WR' => 'E02002535',
        '3WX' => 'E02002546',
        '3WY' => 'E02002546',
        '3WZ' => 'E02002535',
        '3XA' => 'E02002535',
        '3XB' => 'E02002535',
        '3XD' => 'E02002535',
        '3XE' => 'E02002535',
        '3XF' => 'E02002535',
        '3XG' => 'E02002535',
        '3XH' => 'E02002535',
        '3XJ' => 'E02002535',
        '3XL' => 'E02002535',
        '3XN' => 'E02002535',
        '3XP' => 'E02002535',
        '3XQ' => 'E02002535',
        '3XR' => 'E02002535',
        '3XS' => 'E02002546',
        '3XT' => 'E02002535',
        '3XU' => 'E02002535',
        '3XW' => 'E02002535',
        '3XX' => 'E02002535',
        '3XY' => 'E02002535',
        '3XZ' => 'E02002535',
        '3YA' => 'E02002535',
        '3YB' => 'E02002535',
        '3YD' => 'E02002535',
        '3YE' => 'E02002535',
        '3YF' => 'E02002535',
        '3YG' => 'E02002535',
        '3YH' => 'E02002535',
        '3YJ' => 'E02002535',
        '3YP' => 'E02002535',
        '3YQ' => 'E02002535',
        '3YR' => 'E02002535',
        '3YS' => 'E02002535',
        '3YT' => 'E02002535',
        '3YU' => 'E02002535',
        '3YX' => 'E02002535',
        '3ZY' => 'E02002546',
        '4AA' => 'E02002537',
        '4AB' => 'E02002537',
        '4AD' => 'E02002537',
        '4AE' => 'E02002537',
        '4AF' => 'E02002537',
        '4AG' => 'E02002537',
        '4AH' => 'E02002537',
        '4AJ' => 'E02002537',
        '4AL' => 'E02002537',
        '4AN' => 'E02002537',
        '4AP' => 'E02002537',
        '4AQ' => 'E02002537',
        '4AR' => 'E02002537',
        '4AS' => 'E02002537',
        '4AT' => 'E02002537',
        '4AU' => 'E02002537',
        '4AW' => 'E02002537',
        '4AX' => 'E02002537',
        '4AY' => 'E02002537',
        '4AZ' => 'E02002537',
        '4BA' => 'E02002537',
        '4BB' => 'E02002537',
        '4BD' => 'E02002537',
        '4BE' => 'E02002537',
        '4BG' => 'E02002537',
        '4BH' => 'E02002537',
        '4BJ' => 'E02002537',
        '4BL' => 'E02002537',
        '4BN' => 'E02002537',
        '4BP' => 'E02002537',
        '4BQ' => 'E02002537',
        '4BS' => 'E02002537',
        '4BT' => 'E02002537',
        '4BU' => 'E02002537',
        '4BW' => 'E02002537',
        '4BX' => 'E02002537',
        '4BY' => 'E02002537',
        '4BZ' => 'E02002537',
        '4DA' => 'E02002537',
        '4DB' => 'E02002537',
        '4DD' => 'E02002537',
        '4DE' => 'E02002537',
        '4DF' => 'E02002538',
        '4DG' => 'E02002537',
        '4DS' => 'E02002546',
        '4DT' => 'E02002537',
        '4DU' => 'E02002537',
        '4DX' => 'E02002537',
        '4EA' => 'E02002537',
        '4EB' => 'E02002537',
        '4ED' => 'E02002537',
        '4EE' => 'E02002537',
        '4EF' => 'E02002537',
        '4EG' => 'E02002537',
        '4EJ' => 'E02002537',
        '4EL' => 'E02002537',
        '4ER' => 'E02002537',
        '4ET' => 'E02002537',
        '4EX' => 'E02002537',
        '4EY' => 'E02002537',
        '4HA' => 'E02002537',
        '4HD' => 'E02002537',
        '4HE' => 'E02002537',
        '4HF' => 'E02002537',
        '4HH' => 'E02002537',
        '4HJ' => 'E02002537',
        '4HL' => 'E02002537',
        '4HN' => 'E02002537',
        '4HQ' => 'E02002537',
        '4HR' => 'E02002537',
        '4HS' => 'E02002537',
        '4HT' => 'E02002537',
        '4HU' => 'E02002537',
        '4HW' => 'E02002537',
        '4JA' => 'E02002537',
        '4JB' => 'E02002537',
        '4JD' => 'E02002537',
        '4JE' => 'E02002537',
        '4JF' => 'E02002537',
        '4JG' => 'E02002537',
        '4JQ' => 'E02002537',
        '4JZ' => 'E02002537',
        '4WZ' => 'E02002546',
        '4YB' => 'E02002546',
        '4YD' => 'E02002546',
        '4YE' => 'E02002546',
        '4YF' => 'E02002537',
        '4YH' => 'E02002537',
        '4YP' => 'E02002537',
        '4YQ' => 'E02002537',
        '4YR' => 'E02002537',
        '4YS' => 'E02002546',
        '4YT' => 'E02002546',
        '4YU' => 'E02002537',
        '4YW' => 'E02002546',
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
