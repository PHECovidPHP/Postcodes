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
final class BD7
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02002226',
        '1AB' => 'E02002226',
        '1AD' => 'E02002226',
        '1AE' => 'E02002226',
        '1AF' => 'E02002226',
        '1AG' => 'E02002230',
        '1AH' => 'E02002226',
        '1AJ' => 'E02002226',
        '1AL' => 'E02002226',
        '1AN' => 'E02002226',
        '1AP' => 'E02002226',
        '1AQ' => 'E02002226',
        '1AS' => 'E02002226',
        '1AT' => 'E02002226',
        '1AU' => 'E02002226',
        '1AW' => 'E02002226',
        '1AX' => 'E02002226',
        '1AY' => 'E02002226',
        '1AZ' => 'E02002226',
        '1BA' => 'E02002226',
        '1BB' => 'E02002226',
        '1BD' => 'E02002226',
        '1BE' => 'E02002230',
        '1BG' => 'E02002226',
        '1BJ' => 'E02002226',
        '1BL' => 'E02002230',
        '1BN' => 'E02002226',
        '1BP' => 'E02002226',
        '1BQ' => 'E02002226',
        '1BS' => 'E02002226',
        '1BT' => 'E02002230',
        '1BW' => 'E02002226',
        '1BX' => 'E02002226',
        '1BZ' => 'E02002230',
        '1DA' => 'E02002226',
        '1DB' => 'E02002226',
        '1DD' => 'E02002226',
        '1DE' => 'E02002226',
        '1DF' => 'E02002226',
        '1DG' => 'E02002226',
        '1DH' => 'E02002226',
        '1DJ' => 'E02002226',
        '1DL' => 'E02002226',
        '1DN' => 'E02002223',
        '1DP' => 'E02002226',
        '1DQ' => 'E02002226',
        '1DR' => 'E02002226',
        '1DS' => 'E02002226',
        '1DT' => 'E02002226',
        '1DW' => 'E02002226',
        '1EA' => 'E02002226',
        '1EB' => 'E02002226',
        '1ED' => 'E02002226',
        '1ET' => 'E02002226',
        '1HD' => 'E02002226',
        '1HF' => 'E02002226',
        '1HG' => 'E02002226',
        '1HH' => 'E02002226',
        '1HJ' => 'E02002223',
        '1HL' => 'E02002226',
        '1HN' => 'E02002226',
        '1HP' => 'E02002226',
        '1HR' => 'E02002223',
        '1HT' => 'E02002226',
        '1HW' => 'E02002226',
        '1HX' => 'E02002226',
        '1HY' => 'E02002230',
        '1HZ' => 'E02002223',
        '1JA' => 'E02002226',
        '1JB' => 'E02002223',
        '1JD' => 'E02002223',
        '1JE' => 'E02002223',
        '1JF' => 'E02002223',
        '1JG' => 'E02002230',
        '1JH' => 'E02002223',
        '1JN' => 'E02002223',
        '1JP' => 'E02002223',
        '1JR' => 'E02002223',
        '1JS' => 'E02002223',
        '1JT' => 'E02002223',
        '1JU' => 'E02002223',
        '1JW' => 'E02002223',
        '1JX' => 'E02002223',
        '1JY' => 'E02002223',
        '1JZ' => 'E02002223',
        '1LA' => 'E02002223',
        '1LB' => 'E02002223',
        '1LD' => 'E02002223',
        '1LE' => 'E02002223',
        '1LF' => 'E02002226',
        '1LG' => 'E02002223',
        '1LH' => 'E02002223',
        '1LJ' => 'E02002223',
        '1LL' => 'E02002223',
        '1LN' => 'E02002223',
        '1LP' => 'E02002223',
        '1LQ' => 'E02002223',
        '1LR' => 'E02002223',
        '1LS' => 'E02002226',
        '1LU' => 'E02002223',
        '1LW' => 'E02002223',
        '1LX' => 'E02002223',
        '1LY' => 'E02002223',
        '1NA' => 'E02002226',
        '1NB' => 'E02002230',
        '1ND' => 'E02002223',
        '1NE' => 'E02002223',
        '1NF' => 'E02002226',
        '1NG' => 'E02002226',
        '1NH' => 'E02002223',
        '1NJ' => 'E02002226',
        '1NN' => 'E02002226',
        '1NP' => 'E02002226',
        '1NQ' => 'E02002223',
        '1NR' => 'E02002226',
        '1NS' => 'E02002223',
        '1NT' => 'E02002226',
        '1NU' => 'E02002226',
        '1NX' => 'E02002226',
        '1PA' => 'E02002226',
        '1PB' => 'E02002226',
        '1PD' => 'E02002226',
        '1PE' => 'E02002226',
        '1PH' => 'E02002226',
        '1PP' => 'E02002226',
        '1PR' => 'E02002226',
        '1PS' => 'E02002226',
        '1PU' => 'E02002226',
        '1PX' => 'E02002226',
        '1PY' => 'E02002226',
        '1PZ' => 'E02002226',
        '1QA' => 'E02002226',
        '1QB' => 'E02002226',
        '1QD' => 'E02002226',
        '1QE' => 'E02002226',
        '1QF' => 'E02002226',
        '1QG' => 'E02002226',
        '1QH' => 'E02002226',
        '1QJ' => 'E02002226',
        '1QL' => 'E02002223',
        '1QP' => 'E02002226',
        '1QQ' => 'E02002226',
        '1QR' => 'E02002226',
        '1QS' => 'E02002226',
        '1QT' => 'E02002226',
        '1QU' => 'E02002226',
        '1QX' => 'E02002226',
        '1QY' => 'E02002230',
        '1QZ' => 'E02002230',
        '1RA' => 'E02002226',
        '1RB' => 'E02002226',
        '1RD' => 'E02002226',
        '1RE' => 'E02002226',
        '1RF' => 'E02002226',
        '1RG' => 'E02002226',
        '1RH' => 'E02002226',
        '1RJ' => 'E02002226',
        '1RL' => 'E02002226',
        '1RN' => 'E02002226',
        '1RP' => 'E02002226',
        '1RQ' => 'E02002226',
        '1RR' => 'E02002226',
        '1RS' => 'E02002226',
        '1RT' => 'E02002226',
        '1RU' => 'E02002226',
        '1RW' => 'E02002226',
        '1RX' => 'E02002226',
        '1RY' => 'E02002226',
        '1RZ' => 'E02002226',
        '1SA' => 'E02002226',
        '1SD' => 'E02002230',
        '1SJ' => 'E02002226',
        '1SN' => 'E02002226',
        '1SP' => 'E02002226',
        '1SR' => 'E02002226',
        '1SS' => 'E02002226',
        '1SW' => 'E02002226',
        '1SY' => 'E02002226',
        '1SZ' => 'E02002226',
        '1TA' => 'E02002226',
        '1UT' => 'E02002230',
        '1WA' => 'E02002230',
        '1WR' => 'E02002230',
        '1WS' => 'E02002230',
        '1WT' => 'E02002230',
        '1WU' => 'E02002230',
        '1WW' => 'E02002230',
        '1WX' => 'E02002230',
        '1WY' => 'E02002230',
        '1WZ' => 'E02002230',
        '1XJ' => 'E02002230',
        '1XL' => 'E02002226',
        '1XN' => 'E02002226',
        '1XP' => 'E02002230',
        '1XQ' => 'E02002230',
        '1XR' => 'E02002226',
        '1XS' => 'E02002226',
        '1XT' => 'E02002230',
        '1XU' => 'E02002226',
        '1XW' => 'E02002226',
        '1XX' => 'E02002226',
        '1XY' => 'E02002230',
        '1XZ' => 'E02002226',
        '1YA' => 'E02002226',
        '1YB' => 'E02002230',
        '1YD' => 'E02002230',
        '1YF' => 'E02002226',
        '1YG' => 'E02002226',
        '1YH' => 'E02002226',
        '1YJ' => 'E02002230',
        '1YL' => 'E02002230',
        '1YN' => 'E02002226',
        '1YP' => 'E02002226',
        '1YQ' => 'E02002226',
        '1YR' => 'E02002226',
        '1YT' => 'E02002226',
        '1YU' => 'E02002226',
        '1YW' => 'E02002230',
        '1YX' => 'E02002226',
        '1YY' => 'E02002230',
        '1YZ' => 'E02002230',
        '2AA' => 'E02002223',
        '2AB' => 'E02002223',
        '2AD' => 'E02002223',
        '2AE' => 'E02002223',
        '2AF' => 'E02002231',
        '2AG' => 'E02002223',
        '2AH' => 'E02002223',
        '2AJ' => 'E02002231',
        '2AL' => 'E02002223',
        '2AN' => 'E02002223',
        '2AP' => 'E02002223',
        '2AQ' => 'E02002223',
        '2AR' => 'E02002223',
        '2AS' => 'E02002223',
        '2AT' => 'E02002223',
        '2AU' => 'E02002223',
        '2AW' => 'E02002223',
        '2AX' => 'E02002223',
        '2AY' => 'E02002223',
        '2AZ' => 'E02002223',
        '2BA' => 'E02002223',
        '2BB' => 'E02002223',
        '2BD' => 'E02002223',
        '2BE' => 'E02002223',
        '2BG' => 'E02002230',
        '2BH' => 'E02002223',
        '2BJ' => 'E02002223',
        '2BL' => 'E02002226',
        '2BN' => 'E02002226',
        '2BQ' => 'E02002223',
        '2BR' => 'E02002226',
        '2BS' => 'E02002226',
        '2BT' => 'E02002226',
        '2BU' => 'E02002226',
        '2BW' => 'E02002226',
        '2BX' => 'E02002226',
        '2BY' => 'E02002226',
        '2BZ' => 'E02002226',
        '2DA' => 'E02002226',
        '2DD' => 'E02002226',
        '2DE' => 'E02002226',
        '2DF' => 'E02002226',
        '2DG' => 'E02002226',
        '2DH' => 'E02002226',
        '2DJ' => 'E02002226',
        '2DL' => 'E02002226',
        '2DN' => 'E02002226',
        '2DP' => 'E02002223',
        '2DQ' => 'E02002226',
        '2DR' => 'E02002223',
        '2DS' => 'E02002223',
        '2DT' => 'E02002223',
        '2DU' => 'E02002223',
        '2DW' => 'E02002226',
        '2DX' => 'E02002223',
        '2DY' => 'E02002223',
        '2DZ' => 'E02002226',
        '2EA' => 'E02002223',
        '2EB' => 'E02002223',
        '2ED' => 'E02002226',
        '2EE' => 'E02002226',
        '2EF' => 'E02002226',
        '2EG' => 'E02002226',
        '2EH' => 'E02002223',
        '2EJ' => 'E02002226',
        '2EL' => 'E02002226',
        '2EN' => 'E02002226',
        '2EP' => 'E02002226',
        '2EQ' => 'E02002226',
        '2ER' => 'E02002226',
        '2ES' => 'E02002226',
        '2ET' => 'E02002226',
        '2EU' => 'E02002226',
        '2EW' => 'E02002226',
        '2EX' => 'E02002226',
        '2EY' => 'E02002226',
        '2EZ' => 'E02002226',
        '2HA' => 'E02002226',
        '2HD' => 'E02002226',
        '2HE' => 'E02002226',
        '2HF' => 'E02002231',
        '2HG' => 'E02002226',
        '2HH' => 'E02002231',
        '2HJ' => 'E02002231',
        '2HL' => 'E02002231',
        '2HN' => 'E02002231',
        '2HP' => 'E02002231',
        '2HQ' => 'E02002231',
        '2HR' => 'E02002223',
        '2HS' => 'E02002231',
        '2HT' => 'E02002231',
        '2HU' => 'E02002231',
        '2HW' => 'E02002231',
        '2HX' => 'E02002231',
        '2HY' => 'E02002231',
        '2JA' => 'E02002223',
        '2JB' => 'E02002223',
        '2JE' => 'E02002226',
        '2JH' => 'E02002231',
        '2JJ' => 'E02002231',
        '2JL' => 'E02002231',
        '2JN' => 'E02002231',
        '2JP' => 'E02002231',
        '2JR' => 'E02002226',
        '2JS' => 'E02002232',
        '2JT' => 'E02002226',
        '2JU' => 'E02002226',
        '2JW' => 'E02002231',
        '2JX' => 'E02002231',
        '2JZ' => 'E02002231',
        '2LA' => 'E02002231',
        '2LB' => 'E02002232',
        '2LD' => 'E02002231',
        '2LE' => 'E02002231',
        '2LF' => 'E02002231',
        '2LG' => 'E02002231',
        '2LH' => 'E02002231',
        '2LJ' => 'E02002231',
        '2LL' => 'E02002231',
        '2LN' => 'E02002231',
        '2LP' => 'E02002231',
        '2LQ' => 'E02002231',
        '2LR' => 'E02002231',
        '2LS' => 'E02002231',
        '2LT' => 'E02002231',
        '2LU' => 'E02002231',
        '2LW' => 'E02002231',
        '2LX' => 'E02002231',
        '2LY' => 'E02002231',
        '2LZ' => 'E02002231',
        '2NA' => 'E02002232',
        '2NB' => 'E02002223',
        '2ND' => 'E02002231',
        '2NF' => 'E02002231',
        '2NH' => 'E02002231',
        '2NJ' => 'E02002231',
        '2NL' => 'E02002231',
        '2NN' => 'E02002231',
        '2NP' => 'E02002223',
        '2NU' => 'E02002223',
        '2NW' => 'E02002231',
        '2NX' => 'E02002223',
        '2PA' => 'E02002231',
        '2PB' => 'E02002231',
        '2PD' => 'E02002231',
        '2PE' => 'E02002231',
        '2PF' => 'E02002231',
        '2PG' => 'E02002231',
        '2PH' => 'E02002231',
        '2PJ' => 'E02002231',
        '2PL' => 'E02002231',
        '2PN' => 'E02002231',
        '2PP' => 'E02002231',
        '2PQ' => 'E02002231',
        '2PR' => 'E02002231',
        '2PS' => 'E02002231',
        '2PT' => 'E02002231',
        '2PU' => 'E02002231',
        '2PW' => 'E02002231',
        '2PX' => 'E02002231',
        '2PY' => 'E02002223',
        '2PZ' => 'E02002223',
        '2QA' => 'E02002223',
        '2QB' => 'E02002223',
        '2QD' => 'E02002223',
        '2QE' => 'E02002223',
        '2QF' => 'E02002223',
        '2QG' => 'E02002223',
        '2QH' => 'E02002223',
        '2QJ' => 'E02002223',
        '2QL' => 'E02002223',
        '2QN' => 'E02002223',
        '2QP' => 'E02002223',
        '2QQ' => 'E02002223',
        '2QR' => 'E02002223',
        '2QS' => 'E02002223',
        '2QT' => 'E02002223',
        '2QU' => 'E02002223',
        '2QW' => 'E02002223',
        '2QX' => 'E02002223',
        '2QY' => 'E02002223',
        '2QZ' => 'E02002223',
        '2RA' => 'E02002231',
        '2RB' => 'E02002231',
        '2RD' => 'E02002231',
        '2RE' => 'E02002231',
        '2RH' => 'E02002231',
        '2RJ' => 'E02002231',
        '2RL' => 'E02002231',
        '2RN' => 'E02002231',
        '2RP' => 'E02002231',
        '2RQ' => 'E02002230',
        '2RR' => 'E02002231',
        '2RS' => 'E02002231',
        '2RT' => 'E02002231',
        '2RU' => 'E02002231',
        '2RW' => 'E02002231',
        '2RX' => 'E02002231',
        '2RY' => 'E02002231',
        '2RZ' => 'E02002231',
        '2SA' => 'E02002231',
        '2SB' => 'E02002231',
        '2SD' => 'E02002231',
        '2SE' => 'E02002231',
        '2SF' => 'E02002231',
        '2SG' => 'E02002231',
        '2SH' => 'E02002231',
        '2SJ' => 'E02002231',
        '2SL' => 'E02002231',
        '2SN' => 'E02002231',
        '2SQ' => 'E02002231',
        '2ST' => 'E02002231',
        '2SY' => 'E02002231',
        '2SZ' => 'E02002230',
        '2TA' => 'E02002231',
        '2TB' => 'E02002223',
        '2TD' => 'E02002223',
        '2TE' => 'E02002223',
        '2TG' => 'E02002223',
        '2TH' => 'E02002223',
        '2TJ' => 'E02002223',
        '2TL' => 'E02002230',
        '2TN' => 'E02002230',
        '2TP' => 'E02002223',
        '2TQ' => 'E02002223',
        '2TW' => 'E02002230',
        '2WA' => 'E02002230',
        '2WG' => 'E02002230',
        '2WH' => 'E02002230',
        '2WJ' => 'E02002230',
        '2WL' => 'E02002230',
        '2WN' => 'E02002230',
        '2WP' => 'E02002230',
        '2WQ' => 'E02002230',
        '2WR' => 'E02002230',
        '2WS' => 'E02002230',
        '2WT' => 'E02002230',
        '2WU' => 'E02002230',
        '2WW' => 'E02002230',
        '2WX' => 'E02002230',
        '2WY' => 'E02002230',
        '2WZ' => 'E02002230',
        '2XA' => 'E02002223',
        '2XB' => 'E02002231',
        '2XD' => 'E02002230',
        '2XE' => 'E02002223',
        '2XG' => 'E02002223',
        '2XP' => 'E02002230',
        '2XR' => 'E02002223',
        '2XS' => 'E02002223',
        '2XT' => 'E02002230',
        '2XW' => 'E02002230',
        '2XX' => 'E02002230',
        '2XY' => 'E02002230',
        '2XZ' => 'E02002230',
        '2YB' => 'E02002230',
        '2YE' => 'E02002230',
        '2YF' => 'E02002230',
        '2YG' => 'E02002223',
        '2YH' => 'E02002223',
        '2YJ' => 'E02002223',
        '2YL' => 'E02002223',
        '2YN' => 'E02002231',
        '2YP' => 'E02002230',
        '2YQ' => 'E02002223',
        '2YR' => 'E02002231',
        '2YS' => 'E02002230',
        '2YT' => 'E02002230',
        '2YU' => 'E02002230',
        '2YW' => 'E02002230',
        '2YX' => 'E02002231',
        '2YY' => 'E02002230',
        '2YZ' => 'E02002230',
        '3AA' => 'E02002226',
        '3AB' => 'E02002226',
        '3AD' => 'E02002226',
        '3AE' => 'E02002226',
        '3AF' => 'E02002226',
        '3AG' => 'E02002226',
        '3AH' => 'E02002226',
        '3AJ' => 'E02002226',
        '3AL' => 'E02002226',
        '3AN' => 'E02002226',
        '3AP' => 'E02002226',
        '3AQ' => 'E02002226',
        '3AR' => 'E02002226',
        '3AS' => 'E02002226',
        '3AU' => 'E02002226',
        '3AW' => 'E02002226',
        '3AX' => 'E02002226',
        '3AY' => 'E02002226',
        '3AZ' => 'E02002226',
        '3BB' => 'E02002226',
        '3BD' => 'E02002226',
        '3BE' => 'E02002226',
        '3BG' => 'E02002226',
        '3BH' => 'E02002226',
        '3BJ' => 'E02002226',
        '3BL' => 'E02002226',
        '3BN' => 'E02002226',
        '3BP' => 'E02002226',
        '3BQ' => 'E02002226',
        '3BS' => 'E02002226',
        '3BT' => 'E02002226',
        '3BU' => 'E02002226',
        '3BW' => 'E02002226',
        '3BX' => 'E02002226',
        '3BY' => 'E02002226',
        '3BZ' => 'E02002226',
        '3DA' => 'E02002226',
        '3DB' => 'E02002226',
        '3DD' => 'E02002226',
        '3DE' => 'E02002226',
        '3DF' => 'E02002226',
        '3DG' => 'E02002226',
        '3DH' => 'E02002226',
        '3DJ' => 'E02002232',
        '3DL' => 'E02002232',
        '3DN' => 'E02002232',
        '3DP' => 'E02002232',
        '3DQ' => 'E02002226',
        '3DR' => 'E02002232',
        '3DS' => 'E02002232',
        '3DT' => 'E02002232',
        '3DU' => 'E02002232',
        '3DW' => 'E02002232',
        '3DX' => 'E02002232',
        '3DY' => 'E02002232',
        '3DZ' => 'E02002226',
        '3EA' => 'E02002226',
        '3EB' => 'E02002226',
        '3ED' => 'E02002226',
        '3EE' => 'E02002232',
        '3EG' => 'E02002226',
        '3EJ' => 'E02002232',
        '3EL' => 'E02002232',
        '3EN' => 'E02002232',
        '3EP' => 'E02002232',
        '3ER' => 'E02002232',
        '3ES' => 'E02002232',
        '3ET' => 'E02002232',
        '3EU' => 'E02002226',
        '3EW' => 'E02002232',
        '3EX' => 'E02002232',
        '3EY' => 'E02002232',
        '3EZ' => 'E02002226',
        '3HA' => 'E02002232',
        '3HD' => 'E02002226',
        '3HE' => 'E02002226',
        '3HF' => 'E02002226',
        '3HG' => 'E02002226',
        '3HH' => 'E02002226',
        '3HJ' => 'E02002226',
        '3HL' => 'E02002226',
        '3HN' => 'E02002226',
        '3HP' => 'E02002226',
        '3HQ' => 'E02002226',
        '3HR' => 'E02002226',
        '3HS' => 'E02002226',
        '3HT' => 'E02002226',
        '3HU' => 'E02002226',
        '3HW' => 'E02002226',
        '3HX' => 'E02002226',
        '3HY' => 'E02002226',
        '3HZ' => 'E02002226',
        '3JA' => 'E02002226',
        '3JB' => 'E02002226',
        '3JD' => 'E02002226',
        '3JE' => 'E02002226',
        '3JF' => 'E02002226',
        '3JG' => 'E02002226',
        '3JQ' => 'E02002226',
        '3JT' => 'E02002226',
        '3JU' => 'E02002226',
        '3JX' => 'E02002233',
        '3JZ' => 'E02002233',
        '3LA' => 'E02002232',
        '3LB' => 'E02002232',
        '3LD' => 'E02002232',
        '3LE' => 'E02002232',
        '3LF' => 'E02002232',
        '3LG' => 'E02002232',
        '3LH' => 'E02002232',
        '3LJ' => 'E02002232',
        '3LL' => 'E02002232',
        '3LN' => 'E02002232',
        '3LP' => 'E02002232',
        '3LQ' => 'E02002232',
        '3LR' => 'E02002232',
        '3LS' => 'E02002232',
        '3LT' => 'E02002232',
        '3LU' => 'E02002232',
        '3LW' => 'E02002232',
        '3LX' => 'E02002232',
        '3LY' => 'E02002232',
        '3LZ' => 'E02002232',
        '3NA' => 'E02002232',
        '3NB' => 'E02002232',
        '3ND' => 'E02002232',
        '3NE' => 'E02002233',
        '3NF' => 'E02002232',
        '3NG' => 'E02002232',
        '3NH' => 'E02002232',
        '3NJ' => 'E02002232',
        '3NL' => 'E02002232',
        '3NN' => 'E02002232',
        '3NP' => 'E02002232',
        '3NQ' => 'E02002232',
        '3NR' => 'E02002232',
        '3NS' => 'E02002232',
        '3NT' => 'E02002232',
        '3NU' => 'E02002232',
        '3NW' => 'E02002232',
        '3NX' => 'E02002232',
        '3PA' => 'E02002232',
        '3PB' => 'E02002232',
        '3PD' => 'E02002232',
        '3PE' => 'E02002232',
        '3PF' => 'E02002232',
        '3PG' => 'E02002232',
        '3PH' => 'E02002232',
        '3PJ' => 'E02002232',
        '3PL' => 'E02002232',
        '3PN' => 'E02002232',
        '3PP' => 'E02002232',
        '3PR' => 'E02002232',
        '3PS' => 'E02002232',
        '3PU' => 'E02002232',
        '3PX' => 'E02002232',
        '3PY' => 'E02002230',
        '3PZ' => 'E02002232',
        '3WQ' => 'E02002230',
        '3WR' => 'E02002230',
        '3WS' => 'E02002230',
        '3WT' => 'E02002230',
        '3WU' => 'E02002230',
        '3WW' => 'E02002230',
        '3WX' => 'E02002230',
        '3WY' => 'E02002230',
        '3WZ' => 'E02002230',
        '3YG' => 'E02002230',
        '3YH' => 'E02002230',
        '3YJ' => 'E02002230',
        '3YL' => 'E02002226',
        '3YN' => 'E02002226',
        '3YP' => 'E02002226',
        '3YQ' => 'E02002230',
        '3YR' => 'E02002226',
        '3YS' => 'E02002226',
        '3YT' => 'E02002232',
        '3YU' => 'E02002232',
        '3YW' => 'E02002226',
        '3YX' => 'E02002232',
        '3YY' => 'E02002232',
        '3YZ' => 'E02002232',
        '3ZB' => 'E02002230',
        '3ZW' => 'E02002230',
        '4AA' => 'E02002232',
        '4AB' => 'E02002232',
        '4AD' => 'E02002232',
        '4AE' => 'E02002237',
        '4AF' => 'E02002237',
        '4AG' => 'E02002237',
        '4AH' => 'E02002237',
        '4AJ' => 'E02002237',
        '4AL' => 'E02002231',
        '4AN' => 'E02002231',
        '4AP' => 'E02002231',
        '4AQ' => 'E02002237',
        '4AR' => 'E02002231',
        '4AS' => 'E02002231',
        '4AT' => 'E02002231',
        '4AX' => 'E02002232',
        '4AY' => 'E02002231',
        '4AZ' => 'E02002237',
        '4BA' => 'E02002237',
        '4BB' => 'E02002237',
        '4BD' => 'E02002231',
        '4BE' => 'E02002231',
        '4BG' => 'E02002231',
        '4BH' => 'E02002231',
        '4BJ' => 'E02002231',
        '4BL' => 'E02002231',
        '4BP' => 'E02002231',
        '4BQ' => 'E02002231',
        '4BR' => 'E02002231',
        '4BS' => 'E02002231',
        '4BT' => 'E02002231',
        '4BU' => 'E02002231',
        '4BW' => 'E02002231',
        '4BX' => 'E02002231',
        '4BY' => 'E02002231',
        '4BZ' => 'E02002231',
        '4DA' => 'E02002231',
        '4DB' => 'E02002231',
        '4DD' => 'E02002231',
        '4DE' => 'E02002231',
        '4DF' => 'E02002231',
        '4DG' => 'E02002231',
        '4DH' => 'E02002231',
        '4DL' => 'E02002232',
        '4DN' => 'E02002232',
        '4DP' => 'E02002232',
        '4DQ' => 'E02002231',
        '4DR' => 'E02002232',
        '4DS' => 'E02002232',
        '4DT' => 'E02002232',
        '4DU' => 'E02002232',
        '4DW' => 'E02002232',
        '4DX' => 'E02002232',
        '4DY' => 'E02002232',
        '4DZ' => 'E02002232',
        '4EA' => 'E02002232',
        '4EB' => 'E02002232',
        '4ED' => 'E02002232',
        '4EE' => 'E02002232',
        '4EF' => 'E02002232',
        '4EG' => 'E02002232',
        '4EH' => 'E02002232',
        '4EJ' => 'E02002232',
        '4EL' => 'E02002232',
        '4EN' => 'E02002232',
        '4EP' => 'E02002232',
        '4EQ' => 'E02002232',
        '4ER' => 'E02002232',
        '4ES' => 'E02002232',
        '4EU' => 'E02002231',
        '4EW' => 'E02002231',
        '4EX' => 'E02002232',
        '4EY' => 'E02002232',
        '4EZ' => 'E02002232',
        '4HA' => 'E02002232',
        '4HB' => 'E02002232',
        '4HD' => 'E02002232',
        '4HE' => 'E02002232',
        '4HF' => 'E02002232',
        '4HG' => 'E02002232',
        '4HH' => 'E02002237',
        '4HJ' => 'E02002232',
        '4HL' => 'E02002232',
        '4HN' => 'E02002232',
        '4HP' => 'E02002237',
        '4HQ' => 'E02002232',
        '4HR' => 'E02002237',
        '4HS' => 'E02002232',
        '4HT' => 'E02002237',
        '4HU' => 'E02002232',
        '4HW' => 'E02002232',
        '4HX' => 'E02002232',
        '4HY' => 'E02002232',
        '4HZ' => 'E02002232',
        '4JA' => 'E02002232',
        '4JB' => 'E02002232',
        '4JD' => 'E02002232',
        '4JE' => 'E02002237',
        '4JF' => 'E02002237',
        '4JG' => 'E02002237',
        '4JH' => 'E02002237',
        '4JJ' => 'E02002237',
        '4JL' => 'E02002232',
        '4JN' => 'E02002237',
        '4JQ' => 'E02002237',
        '4JR' => 'E02002237',
        '4JS' => 'E02002237',
        '4JT' => 'E02002237',
        '4JU' => 'E02002237',
        '4JW' => 'E02002237',
        '4JX' => 'E02002237',
        '4JY' => 'E02002232',
        '4JZ' => 'E02002237',
        '4LA' => 'E02002237',
        '4LB' => 'E02002237',
        '4LD' => 'E02002237',
        '4LE' => 'E02002237',
        '4LF' => 'E02002237',
        '4LG' => 'E02002237',
        '4LH' => 'E02002237',
        '4LJ' => 'E02002237',
        '4LL' => 'E02002237',
        '4LP' => 'E02002237',
        '4LQ' => 'E02002237',
        '4LR' => 'E02002237',
        '4LT' => 'E02002231',
        '4LU' => 'E02002231',
        '4LX' => 'E02002231',
        '4LY' => 'E02002231',
        '4LZ' => 'E02002231',
        '4NA' => 'E02002231',
        '4NB' => 'E02002231',
        '4ND' => 'E02002237',
        '4NE' => 'E02002231',
        '4NF' => 'E02002237',
        '4NG' => 'E02002237',
        '4NH' => 'E02002237',
        '4NJ' => 'E02002237',
        '4NL' => 'E02002237',
        '4NN' => 'E02002237',
        '4NP' => 'E02002231',
        '4NQ' => 'E02002231',
        '4NR' => 'E02002237',
        '4NS' => 'E02002237',
        '4NT' => 'E02002231',
        '4NU' => 'E02002237',
        '4NW' => 'E02002237',
        '4NX' => 'E02002237',
        '4PA' => 'E02002237',
        '4PB' => 'E02002237',
        '4PD' => 'E02002237',
        '4PE' => 'E02002237',
        '4PF' => 'E02002237',
        '4PG' => 'E02002237',
        '4PH' => 'E02002237',
        '4PJ' => 'E02002237',
        '4PL' => 'E02002231',
        '4PN' => 'E02002237',
        '4PP' => 'E02002237',
        '4PQ' => 'E02002237',
        '4PR' => 'E02002237',
        '4PS' => 'E02002232',
        '4PT' => 'E02002232',
        '4PU' => 'E02002232',
        '4PW' => 'E02002237',
        '4PX' => 'E02002232',
        '4PY' => 'E02002232',
        '4PZ' => 'E02002232',
        '4QA' => 'E02002232',
        '4QB' => 'E02002232',
        '4QD' => 'E02002232',
        '4QE' => 'E02002232',
        '4QF' => 'E02002232',
        '4QG' => 'E02002232',
        '4QH' => 'E02002232',
        '4QL' => 'E02002231',
        '4QN' => 'E02002231',
        '4QP' => 'E02002232',
        '4QQ' => 'E02002232',
        '4QR' => 'E02002232',
        '4QS' => 'E02002232',
        '4QW' => 'E02002231',
        '4QX' => 'E02002232',
        '4QY' => 'E02002232',
        '4QZ' => 'E02002232',
        '4RA' => 'E02002232',
        '4RB' => 'E02002232',
        '4RD' => 'E02002232',
        '4RE' => 'E02002232',
        '4RF' => 'E02002231',
        '4RG' => 'E02002237',
        '4RH' => 'E02002232',
        '4RJ' => 'E02002237',
        '4RL' => 'E02002237',
        '4RN' => 'E02002237',
        '4RP' => 'E02002237',
        '4RQ' => 'E02002237',
        '4RR' => 'E02002231',
        '4RS' => 'E02002231',
        '4RT' => 'E02002232',
        '4RU' => 'E02002232',
        '4RW' => 'E02002232',
        '4RY' => 'E02002232',
        '4RZ' => 'E02002232',
        '4SA' => 'E02002237',
        '4WQ' => 'E02002232',
        '4WR' => 'E02002230',
        '4WS' => 'E02002230',
        '4WT' => 'E02002230',
        '4WU' => 'E02002230',
        '4WW' => 'E02002230',
        '4WX' => 'E02002230',
        '4WY' => 'E02002230',
        '4WZ' => 'E02002230',
        '4YL' => 'E02002230',
        '4YN' => 'E02002230',
        '4YP' => 'E02002237',
        '4YQ' => 'E02002230',
        '4YR' => 'E02002237',
        '4YS' => 'E02002237',
        '4YT' => 'E02002237',
        '4YU' => 'E02002237',
        '4YW' => 'E02002232',
        '4YX' => 'E02002237',
        '4YY' => 'E02002232',
        '4YZ' => 'E02002230',
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
