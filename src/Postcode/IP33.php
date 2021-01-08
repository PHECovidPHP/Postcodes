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
final class IP33
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02006278',
        '1AB' => 'E02006278',
        '1AD' => 'E02006281',
        '1AE' => 'E02006281',
        '1AF' => 'E02006281',
        '1AG' => 'E02006281',
        '1AH' => 'E02006281',
        '1AJ' => 'E02006281',
        '1AL' => 'E02006278',
        '1AN' => 'E02006281',
        '1AP' => 'E02006281',
        '1AQ' => 'E02006281',
        '1AR' => 'E02006281',
        '1AS' => 'E02006278',
        '1AT' => 'E02006281',
        '1AX' => 'E02006277',
        '1AY' => 'E02006281',
        '1AZ' => 'E02006281',
        '1BA' => 'E02006278',
        '1BB' => 'E02006278',
        '1BD' => 'E02006278',
        '1BE' => 'E02006278',
        '1BG' => 'E02006278',
        '1BH' => 'E02006278',
        '1BJ' => 'E02006278',
        '1BL' => 'E02006278',
        '1BN' => 'E02006281',
        '1BP' => 'E02006278',
        '1BQ' => 'E02006278',
        '1BS' => 'E02006278',
        '1BT' => 'E02006278',
        '1BU' => 'E02006278',
        '1BW' => 'E02006278',
        '1BX' => 'E02006278',
        '1BY' => 'E02006278',
        '1BZ' => 'E02006278',
        '1DA' => 'E02006278',
        '1DB' => 'E02006278',
        '1DD' => 'E02006278',
        '1DE' => 'E02006278',
        '1DF' => 'E02006278',
        '1DG' => 'E02006278',
        '1DH' => 'E02006278',
        '1DJ' => 'E02006278',
        '1DL' => 'E02006278',
        '1DN' => 'E02006278',
        '1DP' => 'E02006278',
        '1DQ' => 'E02006278',
        '1DS' => 'E02006278',
        '1DT' => 'E02006278',
        '1DU' => 'E02006278',
        '1DW' => 'E02006278',
        '1DX' => 'E02006278',
        '1DY' => 'E02006278',
        '1DZ' => 'E02006278',
        '1EA' => 'E02006278',
        '1EB' => 'E02006281',
        '1ED' => 'E02006278',
        '1EE' => 'E02006281',
        '1EF' => 'E02006278',
        '1EG' => 'E02006278',
        '1EH' => 'E02006281',
        '1EJ' => 'E02006281',
        '1EL' => 'E02006281',
        '1EN' => 'E02006278',
        '1EP' => 'E02006281',
        '1EQ' => 'E02006281',
        '1ER' => 'E02006281',
        '1ES' => 'E02006278',
        '1ET' => 'E02006278',
        '1EU' => 'E02006281',
        '1EY' => 'E02006281',
        '1EZ' => 'E02006281',
        '1FA' => 'E02006281',
        '1GN' => 'E02006281',
        '1GZ' => 'E02006278',
        '1HA' => 'E02006281',
        '1HB' => 'E02006281',
        '1HD' => 'E02006281',
        '1HE' => 'E02006278',
        '1HF' => 'E02006278',
        '1HG' => 'E02006281',
        '1HH' => 'E02006281',
        '1HJ' => 'E02006281',
        '1HL' => 'E02006277',
        '1HN' => 'E02006281',
        '1HP' => 'E02006281',
        '1HQ' => 'E02006281',
        '1HR' => 'E02006281',
        '1HS' => 'E02006281',
        '1HT' => 'E02006281',
        '1HU' => 'E02006281',
        '1HW' => 'E02006281',
        '1HX' => 'E02006281',
        '1HY' => 'E02006281',
        '1HZ' => 'E02006281',
        '1JA' => 'E02006281',
        '1JB' => 'E02006278',
        '1JD' => 'E02006281',
        '1JE' => 'E02006278',
        '1JF' => 'E02006278',
        '1JG' => 'E02006278',
        '1JH' => 'E02006278',
        '1JJ' => 'E02006281',
        '1JL' => 'E02006278',
        '1JN' => 'E02006278',
        '1JP' => 'E02006281',
        '1JQ' => 'E02006278',
        '1JR' => 'E02006281',
        '1JS' => 'E02006278',
        '1JT' => 'E02006281',
        '1JU' => 'E02006281',
        '1JW' => 'E02006278',
        '1JX' => 'E02006281',
        '1JY' => 'E02006278',
        '1JZ' => 'E02006278',
        '1LA' => 'E02006278',
        '1LB' => 'E02006278',
        '1LD' => 'E02006278',
        '1LE' => 'E02006281',
        '1LF' => 'E02006277',
        '1LG' => 'E02006278',
        '1LH' => 'E02006278',
        '1LJ' => 'E02006278',
        '1LL' => 'E02006278',
        '1LN' => 'E02006278',
        '1LP' => 'E02006278',
        '1LQ' => 'E02006278',
        '1LR' => 'E02006278',
        '1LS' => 'E02006278',
        '1LT' => 'E02006278',
        '1LU' => 'E02006278',
        '1LW' => 'E02006278',
        '1LX' => 'E02006278',
        '1LY' => 'E02006278',
        '1LZ' => 'E02006278',
        '1NA' => 'E02006278',
        '1NB' => 'E02006278',
        '1ND' => 'E02006278',
        '1NE' => 'E02006278',
        '1NF' => 'E02006278',
        '1NG' => 'E02006278',
        '1NH' => 'E02006278',
        '1NJ' => 'E02006278',
        '1NL' => 'E02006278',
        '1NN' => 'E02006278',
        '1NP' => 'E02006278',
        '1NQ' => 'E02006278',
        '1NR' => 'E02006278',
        '1NS' => 'E02006278',
        '1NT' => 'E02006278',
        '1NU' => 'E02006278',
        '1NW' => 'E02006278',
        '1NX' => 'E02006278',
        '1NY' => 'E02006281',
        '1NZ' => 'E02006278',
        '1PA' => 'E02006278',
        '1PB' => 'E02006278',
        '1PD' => 'E02006278',
        '1PE' => 'E02006278',
        '1PF' => 'E02006278',
        '1PG' => 'E02006278',
        '1PH' => 'E02006277',
        '1PL' => 'E02006278',
        '1PP' => 'E02006281',
        '1PQ' => 'E02006278',
        '1PR' => 'E02006278',
        '1PS' => 'E02006278',
        '1PT' => 'E02006278',
        '1PU' => 'E02006278',
        '1PW' => 'E02006278',
        '1PX' => 'E02006278',
        '1PY' => 'E02006278',
        '1PZ' => 'E02006278',
        '1QA' => 'E02006278',
        '1QB' => 'E02006278',
        '1QD' => 'E02006278',
        '1QE' => 'E02006278',
        '1QF' => 'E02006278',
        '1QG' => 'E02006278',
        '1QH' => 'E02006281',
        '1QJ' => 'E02006278',
        '1QL' => 'E02006278',
        '1QN' => 'E02006278',
        '1QP' => 'E02006278',
        '1QQ' => 'E02006278',
        '1QR' => 'E02006278',
        '1QS' => 'E02006278',
        '1QT' => 'E02006278',
        '1QU' => 'E02006278',
        '1QW' => 'E02006277',
        '1QX' => 'E02006278',
        '1QY' => 'E02006278',
        '1QZ' => 'E02006278',
        '1RA' => 'E02006278',
        '1RB' => 'E02006278',
        '1RD' => 'E02006278',
        '1RE' => 'E02006278',
        '1RF' => 'E02006278',
        '1RG' => 'E02006278',
        '1RH' => 'E02006278',
        '1RJ' => 'E02006278',
        '1RL' => 'E02006278',
        '1RN' => 'E02006278',
        '1RP' => 'E02006278',
        '1RQ' => 'E02006278',
        '1RR' => 'E02006278',
        '1RS' => 'E02006278',
        '1RT' => 'E02006278',
        '1RW' => 'E02006278',
        '1RX' => 'E02006278',
        '1RY' => 'E02006278',
        '1RZ' => 'E02006278',
        '1SA' => 'E02006278',
        '1SB' => 'E02006278',
        '1SD' => 'E02006278',
        '1SE' => 'E02006278',
        '1SF' => 'E02006278',
        '1SG' => 'E02006278',
        '1SH' => 'E02006278',
        '1SJ' => 'E02006281',
        '1SL' => 'E02006278',
        '1SN' => 'E02006278',
        '1SP' => 'E02006278',
        '1SQ' => 'E02006278',
        '1SR' => 'E02006281',
        '1SS' => 'E02006278',
        '1ST' => 'E02006278',
        '1SU' => 'E02006278',
        '1SW' => 'E02006278',
        '1SX' => 'E02006278',
        '1SY' => 'E02006278',
        '1SZ' => 'E02006278',
        '1TA' => 'E02006278',
        '1TB' => 'E02006278',
        '1TD' => 'E02006278',
        '1TE' => 'E02006278',
        '1TF' => 'E02006278',
        '1TG' => 'E02006278',
        '1TH' => 'E02006278',
        '1TJ' => 'E02006278',
        '1TL' => 'E02006278',
        '1TN' => 'E02006278',
        '1TP' => 'E02006278',
        '1TQ' => 'E02006278',
        '1TR' => 'E02006278',
        '1TS' => 'E02006278',
        '1TT' => 'E02006278',
        '1TU' => 'E02006281',
        '1TW' => 'E02006278',
        '1TX' => 'E02006278',
        '1TZ' => 'E02006278',
        '1UA' => 'E02006278',
        '1UB' => 'E02006278',
        '1UE' => 'E02006278',
        '1UF' => 'E02006278',
        '1UH' => 'E02006281',
        '1UJ' => 'E02006278',
        '1UL' => 'E02006278',
        '1UN' => 'E02006278',
        '1UP' => 'E02006278',
        '1UQ' => 'E02006281',
        '1UR' => 'E02006278',
        '1UT' => 'E02006278',
        '1UU' => 'E02006278',
        '1UW' => 'E02006278',
        '1UX' => 'E02006278',
        '1UY' => 'E02006281',
        '1UZ' => 'E02006278',
        '1WA' => 'E02006278',
        '1WG' => 'E02006278',
        '1WL' => 'E02006278',
        '1WN' => 'E02006278',
        '1WP' => 'E02006278',
        '1WQ' => 'E02006278',
        '1WR' => 'E02006278',
        '1WS' => 'E02006277',
        '1WT' => 'E02006277',
        '1WU' => 'E02006277',
        '1WW' => 'E02006278',
        '1WX' => 'E02006281',
        '1WY' => 'E02006281',
        '1WZ' => 'E02006278',
        '1XA' => 'E02006278',
        '1XB' => 'E02006278',
        '1XD' => 'E02006277',
        '1XE' => 'E02006278',
        '1XF' => 'E02006278',
        '1XG' => 'E02006281',
        '1XH' => 'E02006278',
        '1XJ' => 'E02006278',
        '1XL' => 'E02006278',
        '1XN' => 'E02006278',
        '1XP' => 'E02006281',
        '1XQ' => 'E02006278',
        '1XR' => 'E02006281',
        '1XS' => 'E02006281',
        '1XT' => 'E02006281',
        '1XU' => 'E02006281',
        '1XW' => 'E02006281',
        '1XX' => 'E02006281',
        '1XY' => 'E02006281',
        '1XZ' => 'E02006281',
        '1YA' => 'E02006281',
        '1YB' => 'E02006281',
        '1YD' => 'E02006281',
        '1YE' => 'E02006281',
        '1YF' => 'E02006281',
        '1YG' => 'E02006281',
        '1YH' => 'E02006281',
        '1YJ' => 'E02006281',
        '1YL' => 'E02006281',
        '1YN' => 'E02006281',
        '1YP' => 'E02006281',
        '1YQ' => 'E02006281',
        '1YR' => 'E02006281',
        '1YS' => 'E02006281',
        '1YT' => 'E02006281',
        '1YU' => 'E02006281',
        '1YW' => 'E02006281',
        '1YX' => 'E02006278',
        '1YY' => 'E02006278',
        '1ZA' => 'E02006278',
        '1ZX' => 'E02006278',
        '2AA' => 'E02006278',
        '2AB' => 'E02006278',
        '2AD' => 'E02006278',
        '2AE' => 'E02006278',
        '2AF' => 'E02006278',
        '2AG' => 'E02006278',
        '2AJ' => 'E02006278',
        '2AL' => 'E02006278',
        '2AN' => 'E02006278',
        '2AP' => 'E02006278',
        '2AQ' => 'E02006278',
        '2AR' => 'E02006278',
        '2AS' => 'E02006278',
        '2AT' => 'E02006278',
        '2AU' => 'E02006278',
        '2AW' => 'E02006278',
        '2AX' => 'E02006278',
        '2AY' => 'E02006278',
        '2AZ' => 'E02006278',
        '2BA' => 'E02006278',
        '2BB' => 'E02006278',
        '2BD' => 'E02006278',
        '2BE' => 'E02006278',
        '2BF' => 'E02006281',
        '2BG' => 'E02006278',
        '2BH' => 'E02006278',
        '2BJ' => 'E02006278',
        '2BL' => 'E02006278',
        '2BN' => 'E02006281',
        '2BP' => 'E02006281',
        '2BQ' => 'E02006278',
        '2BS' => 'E02006281',
        '2BT' => 'E02006281',
        '2BU' => 'E02006281',
        '2BW' => 'E02006281',
        '2BX' => 'E02006281',
        '2BY' => 'E02006278',
        '2DA' => 'E02006281',
        '2DB' => 'E02006281',
        '2DD' => 'E02006281',
        '2DE' => 'E02006281',
        '2DF' => 'E02006281',
        '2DG' => 'E02006281',
        '2DH' => 'E02006279',
        '2DJ' => 'E02006281',
        '2DL' => 'E02006279',
        '2DN' => 'E02006279',
        '2DP' => 'E02006281',
        '2DQ' => 'E02006281',
        '2DR' => 'E02006281',
        '2DS' => 'E02006281',
        '2DT' => 'E02006281',
        '2DU' => 'E02006281',
        '2DW' => 'E02006279',
        '2DX' => 'E02006281',
        '2DY' => 'E02006281',
        '2DZ' => 'E02006281',
        '2EA' => 'E02006279',
        '2EB' => 'E02006277',
        '2ED' => 'E02006278',
        '2EE' => 'E02006279',
        '2EF' => 'E02006279',
        '2EG' => 'E02006279',
        '2EH' => 'E02006279',
        '2EJ' => 'E02006279',
        '2EL' => 'E02006279',
        '2EN' => 'E02006279',
        '2EP' => 'E02006279',
        '2EQ' => 'E02006279',
        '2ER' => 'E02006279',
        '2ES' => 'E02006279',
        '2ET' => 'E02006279',
        '2EU' => 'E02006279',
        '2EW' => 'E02006279',
        '2EX' => 'E02006279',
        '2EY' => 'E02006279',
        '2EZ' => 'E02006279',
        '2FA' => 'E02006281',
        '2FB' => 'E02006281',
        '2FD' => 'E02006278',
        '2FE' => 'E02006278',
        '2FF' => 'E02006281',
        '2FG' => 'E02006278',
        '2FH' => 'E02006281',
        '2GA' => 'E02006281',
        '2GB' => 'E02006281',
        '2GD' => 'E02006281',
        '2GE' => 'E02006281',
        '2GF' => 'E02006281',
        '2GG' => 'E02006281',
        '2GH' => 'E02006281',
        '2GJ' => 'E02006281',
        '2HA' => 'E02006279',
        '2HB' => 'E02006279',
        '2HD' => 'E02006279',
        '2HE' => 'E02006279',
        '2HF' => 'E02006279',
        '2HG' => 'E02006279',
        '2HH' => 'E02006279',
        '2HJ' => 'E02006279',
        '2HL' => 'E02006279',
        '2HN' => 'E02006279',
        '2HP' => 'E02006279',
        '2HQ' => 'E02006279',
        '2HR' => 'E02006279',
        '2HS' => 'E02006279',
        '2HT' => 'E02006279',
        '2HU' => 'E02006279',
        '2HW' => 'E02006279',
        '2HX' => 'E02006279',
        '2HY' => 'E02006279',
        '2HZ' => 'E02006279',
        '2JA' => 'E02006279',
        '2JB' => 'E02006279',
        '2JD' => 'E02006279',
        '2JE' => 'E02006279',
        '2JF' => 'E02006281',
        '2JG' => 'E02006278',
        '2JH' => 'E02006281',
        '2JJ' => 'E02006278',
        '2JL' => 'E02006278',
        '2JN' => 'E02006281',
        '2JP' => 'E02006281',
        '2JQ' => 'E02006281',
        '2JR' => 'E02006281',
        '2JS' => 'E02006281',
        '2JT' => 'E02006281',
        '2JU' => 'E02006281',
        '2JW' => 'E02006281',
        '2JX' => 'E02006281',
        '2JY' => 'E02006281',
        '2JZ' => 'E02006281',
        '2LA' => 'E02006281',
        '2LB' => 'E02006281',
        '2LD' => 'E02006281',
        '2LE' => 'E02006281',
        '2LF' => 'E02006281',
        '2LG' => 'E02006281',
        '2LH' => 'E02006281',
        '2LJ' => 'E02006281',
        '2LL' => 'E02006281',
        '2LN' => 'E02006281',
        '2LP' => 'E02006281',
        '2LQ' => 'E02006281',
        '2LR' => 'E02006281',
        '2LS' => 'E02006281',
        '2LT' => 'E02006281',
        '2LU' => 'E02006281',
        '2LW' => 'E02006281',
        '2LX' => 'E02006281',
        '2LY' => 'E02006281',
        '2LZ' => 'E02006281',
        '2NA' => 'E02006281',
        '2NB' => 'E02006281',
        '2ND' => 'E02006278',
        '2NE' => 'E02006277',
        '2NF' => 'E02006281',
        '2NG' => 'E02006281',
        '2NH' => 'E02006281',
        '2NJ' => 'E02006281',
        '2NL' => 'E02006281',
        '2NN' => 'E02006281',
        '2NP' => 'E02006281',
        '2NQ' => 'E02006281',
        '2NR' => 'E02006281',
        '2NS' => 'E02006281',
        '2NT' => 'E02006281',
        '2NU' => 'E02006281',
        '2NW' => 'E02006281',
        '2NX' => 'E02006281',
        '2NY' => 'E02006281',
        '2NZ' => 'E02006281',
        '2PA' => 'E02006281',
        '2PB' => 'E02006281',
        '2PD' => 'E02006281',
        '2PE' => 'E02006281',
        '2PF' => 'E02006281',
        '2PG' => 'E02006281',
        '2PH' => 'E02006281',
        '2PJ' => 'E02006281',
        '2PL' => 'E02006281',
        '2PN' => 'E02006281',
        '2PP' => 'E02006281',
        '2PQ' => 'E02006281',
        '2PR' => 'E02006281',
        '2PS' => 'E02006281',
        '2PT' => 'E02006281',
        '2PU' => 'E02006281',
        '2PW' => 'E02006281',
        '2PX' => 'E02006281',
        '2PY' => 'E02006281',
        '2PZ' => 'E02006281',
        '2QA' => 'E02006281',
        '2QB' => 'E02006281',
        '2QD' => 'E02006281',
        '2QE' => 'E02006278',
        '2QF' => 'E02006281',
        '2QG' => 'E02006278',
        '2QH' => 'E02006281',
        '2QJ' => 'E02006281',
        '2QL' => 'E02006281',
        '2QN' => 'E02006281',
        '2QP' => 'E02006281',
        '2QQ' => 'E02006278',
        '2QR' => 'E02006281',
        '2QS' => 'E02006281',
        '2QT' => 'E02006281',
        '2QU' => 'E02006281',
        '2QW' => 'E02006281',
        '2QX' => 'E02006281',
        '2QY' => 'E02006281',
        '2QZ' => 'E02006281',
        '2RA' => 'E02006281',
        '2RB' => 'E02006281',
        '2RD' => 'E02006281',
        '2RE' => 'E02006277',
        '2RF' => 'E02006281',
        '2RG' => 'E02006281',
        '2RH' => 'E02006281',
        '2RJ' => 'E02006281',
        '2RL' => 'E02006281',
        '2RN' => 'E02006281',
        '2RP' => 'E02006278',
        '2RQ' => 'E02006278',
        '2RR' => 'E02006281',
        '2RS' => 'E02006281',
        '2RT' => 'E02006281',
        '2RU' => 'E02006281',
        '2RW' => 'E02006281',
        '2RX' => 'E02006281',
        '2RY' => 'E02006278',
        '2RZ' => 'E02006278',
        '2SA' => 'E02006278',
        '2SB' => 'E02006278',
        '2SD' => 'E02006278',
        '2SE' => 'E02006278',
        '2SF' => 'E02006278',
        '2SG' => 'E02006278',
        '2SH' => 'E02006281',
        '2SJ' => 'E02006281',
        '2SL' => 'E02006281',
        '2SN' => 'E02006281',
        '2SP' => 'E02006278',
        '2SQ' => 'E02006281',
        '2SR' => 'E02006281',
        '2SS' => 'E02006281',
        '2ST' => 'E02006281',
        '2SU' => 'E02006278',
        '2SW' => 'E02006281',
        '2SX' => 'E02006281',
        '2SY' => 'E02006281',
        '2SZ' => 'E02006278',
        '2TA' => 'E02006281',
        '2TB' => 'E02006281',
        '2TD' => 'E02006281',
        '2TE' => 'E02006281',
        '2TF' => 'E02006281',
        '2TG' => 'E02006281',
        '2TH' => 'E02006281',
        '2TJ' => 'E02006281',
        '2TL' => 'E02006281',
        '2TN' => 'E02006281',
        '2TP' => 'E02006281',
        '2TQ' => 'E02006281',
        '2TR' => 'E02006277',
        '2TS' => 'E02006278',
        '2TX' => 'E02006278',
        '2TZ' => 'E02006278',
        '2UA' => 'E02006279',
        '2UB' => 'E02006279',
        '2UZ' => 'E02006277',
        '2WA' => 'E02006278',
        '2WB' => 'E02006278',
        '2WQ' => 'E02006278',
        '2WR' => 'E02006278',
        '2WS' => 'E02006278',
        '2WT' => 'E02006278',
        '2WU' => 'E02006278',
        '2WW' => 'E02006278',
        '2WX' => 'E02006278',
        '2WY' => 'E02006278',
        '2WZ' => 'E02006278',
        '2XA' => 'E02006278',
        '2XB' => 'E02006277',
        '2XL' => 'E02006278',
        '2YN' => 'E02006278',
        '2YY' => 'E02006281',
        '2ZF' => 'E02006278',
        '2ZJ' => 'E02006277',
        '2ZQ' => 'E02006278',
        '2ZR' => 'E02006277',
        '2ZU' => 'E02006278',
        '2ZY' => 'E02006278',
        '3AA' => 'E02006278',
        '3AB' => 'E02006278',
        '3AD' => 'E02006278',
        '3AE' => 'E02006278',
        '3AF' => 'E02006278',
        '3AG' => 'E02006278',
        '3AH' => 'E02006278',
        '3AJ' => 'E02006278',
        '3AL' => 'E02006278',
        '3AN' => 'E02006278',
        '3AP' => 'E02006278',
        '3AQ' => 'E02006278',
        '3AR' => 'E02006278',
        '3AS' => 'E02006278',
        '3AT' => 'E02006278',
        '3AU' => 'E02006278',
        '3AW' => 'E02006278',
        '3AX' => 'E02006281',
        '3AY' => 'E02006278',
        '3AZ' => 'E02006278',
        '3BA' => 'E02006279',
        '3BB' => 'E02006279',
        '3BD' => 'E02006279',
        '3BE' => 'E02006278',
        '3BF' => 'E02006279',
        '3BG' => 'E02006278',
        '3BH' => 'E02006278',
        '3BJ' => 'E02006278',
        '3BL' => 'E02006278',
        '3BN' => 'E02006278',
        '3BP' => 'E02006279',
        '3BQ' => 'E02006278',
        '3BS' => 'E02006279',
        '3BT' => 'E02006279',
        '3BU' => 'E02006279',
        '3BW' => 'E02006279',
        '3BX' => 'E02006277',
        '3BY' => 'E02006279',
        '3BZ' => 'E02006279',
        '3DA' => 'E02006281',
        '3DB' => 'E02006279',
        '3DD' => 'E02006279',
        '3DE' => 'E02006278',
        '3DF' => 'E02006279',
        '3DG' => 'E02006278',
        '3DH' => 'E02006278',
        '3DJ' => 'E02006278',
        '3DL' => 'E02006278',
        '3DN' => 'E02006278',
        '3DP' => 'E02006279',
        '3DQ' => 'E02006279',
        '3DR' => 'E02006279',
        '3DS' => 'E02006279',
        '3DT' => 'E02006279',
        '3DU' => 'E02006279',
        '3DW' => 'E02006279',
        '3DX' => 'E02006279',
        '3DY' => 'E02006278',
        '3DZ' => 'E02006278',
        '3EA' => 'E02006278',
        '3EB' => 'E02006278',
        '3ED' => 'E02006278',
        '3EE' => 'E02006278',
        '3EF' => 'E02006278',
        '3EG' => 'E02006278',
        '3EH' => 'E02006278',
        '3EJ' => 'E02006279',
        '3EL' => 'E02006278',
        '3EN' => 'E02006279',
        '3EP' => 'E02006278',
        '3EQ' => 'E02006278',
        '3ER' => 'E02006278',
        '3ES' => 'E02006278',
        '3ET' => 'E02006278',
        '3EU' => 'E02006278',
        '3EW' => 'E02006278',
        '3EX' => 'E02006279',
        '3EY' => 'E02006278',
        '3EZ' => 'E02006278',
        '3FA' => 'E02006278',
        '3FB' => 'E02006278',
        '3FD' => 'E02006278',
        '3FE' => 'E02006278',
        '3FF' => 'E02006278',
        '3FG' => 'E02006278',
        '3FH' => 'E02006278',
        '3FN' => 'E02006278',
        '3FP' => 'E02006280',
        '3FQ' => 'E02006278',
        '3FR' => 'E02006278',
        '3FS' => 'E02006278',
        '3FT' => 'E02006281',
        '3FU' => 'E02006279',
        '3GA' => 'E02006279',
        '3GB' => 'E02006278',
        '3GH' => 'E02006278',
        '3GY' => 'E02006279',
        '3GZ' => 'E02006279',
        '3HA' => 'E02006279',
        '3HB' => 'E02006278',
        '3HD' => 'E02006277',
        '3HE' => 'E02006279',
        '3HF' => 'E02006279',
        '3HG' => 'E02006279',
        '3HH' => 'E02006279',
        '3HJ' => 'E02006279',
        '3HL' => 'E02006279',
        '3HN' => 'E02006279',
        '3HP' => 'E02006279',
        '3HQ' => 'E02006279',
        '3HR' => 'E02006279',
        '3HS' => 'E02006279',
        '3HT' => 'E02006279',
        '3HU' => 'E02006279',
        '3HW' => 'E02006279',
        '3HX' => 'E02006279',
        '3HY' => 'E02006279',
        '3HZ' => 'E02006279',
        '3JA' => 'E02006279',
        '3JB' => 'E02006279',
        '3JD' => 'E02006279',
        '3JE' => 'E02006279',
        '3JF' => 'E02006279',
        '3JG' => 'E02006279',
        '3JH' => 'E02006279',
        '3JJ' => 'E02006279',
        '3JL' => 'E02006279',
        '3JN' => 'E02006279',
        '3JP' => 'E02006279',
        '3JQ' => 'E02006279',
        '3JR' => 'E02006281',
        '3JS' => 'E02006277',
        '3JT' => 'E02006278',
        '3JU' => 'E02006279',
        '3JW' => 'E02006281',
        '3JX' => 'E02006281',
        '3JY' => 'E02006281',
        '3JZ' => 'E02006281',
        '3LA' => 'E02006279',
        '3LB' => 'E02006281',
        '3LD' => 'E02006281',
        '3LE' => 'E02006281',
        '3LF' => 'E02006281',
        '3LG' => 'E02006281',
        '3LH' => 'E02006281',
        '3LJ' => 'E02006279',
        '3LL' => 'E02006279',
        '3LN' => 'E02006279',
        '3LP' => 'E02006279',
        '3LQ' => 'E02006281',
        '3LR' => 'E02006279',
        '3LS' => 'E02006279',
        '3LT' => 'E02006279',
        '3LU' => 'E02006279',
        '3LW' => 'E02006279',
        '3LX' => 'E02006279',
        '3LY' => 'E02006278',
        '3LZ' => 'E02006279',
        '3NA' => 'E02006279',
        '3NB' => 'E02006279',
        '3ND' => 'E02006279',
        '3NE' => 'E02006279',
        '3NF' => 'E02006279',
        '3NG' => 'E02006279',
        '3NH' => 'E02006278',
        '3NJ' => 'E02006279',
        '3NL' => 'E02006279',
        '3NN' => 'E02006279',
        '3NP' => 'E02006279',
        '3NQ' => 'E02006279',
        '3NR' => 'E02006279',
        '3NS' => 'E02006279',
        '3NT' => 'E02006279',
        '3NU' => 'E02006278',
        '3NW' => 'E02006279',
        '3NX' => 'E02006278',
        '3NY' => 'E02006278',
        '3NZ' => 'E02006278',
        '3PA' => 'E02006278',
        '3PB' => 'E02006278',
        '3PD' => 'E02006279',
        '3PE' => 'E02006281',
        '3PF' => 'E02006277',
        '3PG' => 'E02006278',
        '3PH' => 'E02006278',
        '3PJ' => 'E02006278',
        '3PL' => 'E02006279',
        '3PN' => 'E02006279',
        '3PP' => 'E02006278',
        '3PQ' => 'E02006278',
        '3PR' => 'E02006279',
        '3PS' => 'E02006278',
        '3PT' => 'E02006278',
        '3PU' => 'E02006279',
        '3PW' => 'E02006278',
        '3PX' => 'E02006279',
        '3PY' => 'E02006279',
        '3PZ' => 'E02006279',
        '3QA' => 'E02006279',
        '3QB' => 'E02006279',
        '3QD' => 'E02006279',
        '3QE' => 'E02006279',
        '3QF' => 'E02006279',
        '3QG' => 'E02006279',
        '3QH' => 'E02006278',
        '3QJ' => 'E02006279',
        '3QL' => 'E02006279',
        '3QN' => 'E02006279',
        '3QP' => 'E02006279',
        '3QQ' => 'E02006279',
        '3QR' => 'E02006279',
        '3QS' => 'E02006279',
        '3QT' => 'E02006279',
        '3QU' => 'E02006279',
        '3QW' => 'E02006279',
        '3QX' => 'E02006279',
        '3QY' => 'E02006279',
        '3QZ' => 'E02006279',
        '3RA' => 'E02006280',
        '3RB' => 'E02006280',
        '3RD' => 'E02006278',
        '3RE' => 'E02006278',
        '3RF' => 'E02006279',
        '3RG' => 'E02006278',
        '3RH' => 'E02006278',
        '3RJ' => 'E02006278',
        '3RL' => 'E02006278',
        '3RN' => 'E02006278',
        '3RP' => 'E02006279',
        '3RQ' => 'E02006278',
        '3RR' => 'E02006279',
        '3RS' => 'E02006279',
        '3RT' => 'E02006279',
        '3RU' => 'E02006279',
        '3RW' => 'E02006279',
        '3RX' => 'E02006279',
        '3RY' => 'E02006279',
        '3RZ' => 'E02006279',
        '3SA' => 'E02006279',
        '3SB' => 'E02006279',
        '3SD' => 'E02006279',
        '3SE' => 'E02006279',
        '3SF' => 'E02006279',
        '3SG' => 'E02006279',
        '3SH' => 'E02006278',
        '3SJ' => 'E02006279',
        '3SL' => 'E02006280',
        '3SN' => 'E02006279',
        '3SP' => 'E02006279',
        '3SQ' => 'E02006279',
        '3SR' => 'E02006279',
        '3SS' => 'E02006279',
        '3ST' => 'E02006278',
        '3SU' => 'E02006278',
        '3SW' => 'E02006279',
        '3SX' => 'E02006279',
        '3SY' => 'E02006279',
        '3SZ' => 'E02006279',
        '3TA' => 'E02006279',
        '3TB' => 'E02006279',
        '3TD' => 'E02006279',
        '3TE' => 'E02006279',
        '3TF' => 'E02006279',
        '3TG' => 'E02006279',
        '3TH' => 'E02006280',
        '3TJ' => 'E02006280',
        '3TL' => 'E02006280',
        '3TN' => 'E02006280',
        '3TP' => 'E02006279',
        '3TQ' => 'E02006280',
        '3TR' => 'E02006280',
        '3TS' => 'E02006279',
        '3TT' => 'E02006279',
        '3TU' => 'E02006279',
        '3TW' => 'E02006278',
        '3TX' => 'E02006279',
        '3TY' => 'E02006279',
        '3TZ' => 'E02006279',
        '3UA' => 'E02006281',
        '3UB' => 'E02006279',
        '3UD' => 'E02006279',
        '3UE' => 'E02006281',
        '3UF' => 'E02006281',
        '3UG' => 'E02006281',
        '3UH' => 'E02006279',
        '3UJ' => 'E02006279',
        '3UL' => 'E02006279',
        '3UN' => 'E02006279',
        '3UP' => 'E02006279',
        '3UQ' => 'E02006279',
        '3UR' => 'E02006279',
        '3US' => 'E02006279',
        '3UT' => 'E02006279',
        '3UU' => 'E02006279',
        '3UW' => 'E02006279',
        '3UX' => 'E02006279',
        '3UY' => 'E02006279',
        '3UZ' => 'E02006279',
        '3WA' => 'E02006279',
        '3WB' => 'E02006280',
        '3WD' => 'E02006280',
        '3WR' => 'E02006278',
        '3WU' => 'E02006278',
        '3WX' => 'E02006278',
        '3WY' => 'E02006278',
        '3WZ' => 'E02006278',
        '3XA' => 'E02006279',
        '3XB' => 'E02006279',
        '3XD' => 'E02006279',
        '3XE' => 'E02006279',
        '3XG' => 'E02006278',
        '3XH' => 'E02006279',
        '3XL' => 'E02006279',
        '3XN' => 'E02006279',
        '3XP' => 'E02006279',
        '3XQ' => 'E02006279',
        '3XR' => 'E02006278',
        '3XS' => 'E02006279',
        '3XT' => 'E02006279',
        '3XU' => 'E02006279',
        '3XW' => 'E02006279',
        '3XX' => 'E02006278',
        '3XY' => 'E02006278',
        '3XZ' => 'E02006278',
        '3YA' => 'E02006279',
        '3YB' => 'E02006279',
        '3YD' => 'E02006280',
        '3YE' => 'E02006279',
        '3YF' => 'E02006279',
        '3YG' => 'E02006279',
        '3YR' => 'E02006278',
        '3YS' => 'E02006277',
        '3YT' => 'E02006278',
        '3YU' => 'E02006279',
        '3YZ' => 'E02006279',
        '3ZA' => 'E02006278',
        '3ZB' => 'E02006278',
        '3ZD' => 'E02006278',
        '3ZE' => 'E02006278',
        '3ZF' => 'E02006278',
        '3ZG' => 'E02006278',
        '3ZR' => 'E02006278',
        '3ZY' => 'E02006278',
        '9AA' => 'E02006278',
        '9AB' => 'E02006278',
        '9AD' => 'E02006278',
        '9AE' => 'E02006278',
        '9AF' => 'E02006278',
        '9AG' => 'E02006278',
        '9AH' => 'E02006278',
        '9AJ' => 'E02006277',
        '9AL' => 'E02006278',
        '9AN' => 'E02006277',
        '9AP' => 'E02006278',
        '9AQ' => 'E02006278',
        '9AR' => 'E02006278',
        '9AS' => 'E02006278',
        '9AT' => 'E02006278',
        '9AU' => 'E02006278',
        '9AW' => 'E02006277',
        '9AX' => 'E02006278',
        '9AY' => 'E02006277',
        '9AZ' => 'E02006277',
        '9BA' => 'E02006278',
        '9BB' => 'E02006278',
        '9BD' => 'E02006277',
        '9BE' => 'E02006278',
        '9BF' => 'E02006278',
        '9BH' => 'E02006278',
        '9BJ' => 'E02006277',
        '9BL' => 'E02006278',
        '9BN' => 'E02006278',
        '9BP' => 'E02006278',
        '9BQ' => 'E02006277',
        '9BR' => 'E02006278',
        '9BS' => 'E02006278',
        '9BT' => 'E02006278',
        '9BU' => 'E02006277',
        '9BW' => 'E02006277',
        '9BX' => 'E02006277',
        '9BY' => 'E02006277',
        '9BZ' => 'E02006278',
        '9DA' => 'E02006278',
        '9DB' => 'E02006278',
        '9DD' => 'E02006278',
        '9DE' => 'E02006277',
        '9DF' => 'E02006277',
        '9DG' => 'E02006278',
        '9DH' => 'E02006278',
        '9DJ' => 'E02006278',
        '9DL' => 'E02006278',
        '9DN' => 'E02006278',
        '9DP' => 'E02006277',
        '9DQ' => 'E02006278',
        '9DR' => 'E02006277',
        '9DS' => 'E02006278',
        '9DT' => 'E02006277',
        '9DU' => 'E02006278',
        '9DW' => 'E02006277',
        '9DX' => 'E02006277',
        '9DY' => 'E02006278',
        '9DZ' => 'E02006277',
        '9EA' => 'E02006278',
        '9EB' => 'E02006277',
        '9ED' => 'E02006278',
        '9EE' => 'E02006278',
        '9EF' => 'E02006278',
        '9EG' => 'E02006278',
        '9EH' => 'E02006278',
        '9EJ' => 'E02006278',
        '9EL' => 'E02006277',
        '9EN' => 'E02006277',
        '9EP' => 'E02006278',
        '9EQ' => 'E02006278',
        '9ER' => 'E02006278',
        '9ES' => 'E02006278',
        '9ET' => 'E02006277',
        '9EU' => 'E02006277',
        '9EW' => 'E02006277',
        '9EX' => 'E02006277',
        '9EY' => 'E02006278',
        '9EZ' => 'E02006277',
        '9FA' => 'E02006278',
        '9FB' => 'E02006277',
        '9FD' => 'E02006278',
        '9FE' => 'E02006278',
        '9FF' => 'E02006278',
        '9FG' => 'E02006278',
        '9FH' => 'E02006278',
        '9FJ' => 'E02006278',
        '9FN' => 'E02006278',
        '9FP' => 'E02006278',
        '9FQ' => 'E02006277',
        '9FS' => 'E02006277',
        '9FT' => 'E02006278',
        '9FU' => 'E02006277',
        '9FW' => 'E02006278',
        '9FX' => 'E02006278',
        '9FY' => 'E02006277',
        '9FZ' => 'E02006278',
        '9GA' => 'E02006278',
        '9GB' => 'E02006277',
        '9GD' => 'E02006277',
        '9GE' => 'E02006277',
        '9GF' => 'E02006277',
        '9GG' => 'E02006278',
        '9GH' => 'E02006278',
        '9GL' => 'E02006277',
        '9GN' => 'E02006278',
        '9GP' => 'E02006277',
        '9GQ' => 'E02006277',
        '9GR' => 'E02006277',
        '9GS' => 'E02006277',
        '9GT' => 'E02006277',
        '9GU' => 'E02006277',
        '9GW' => 'E02006277',
        '9GX' => 'E02006277',
        '9GY' => 'E02006277',
        '9GZ' => 'E02006277',
        '9HA' => 'E02006277',
        '9HB' => 'E02006277',
        '9HD' => 'E02006277',
        '9HE' => 'E02006277',
        '9HF' => 'E02006277',
        '9HG' => 'E02006277',
        '9HH' => 'E02006277',
        '9HJ' => 'E02006277',
        '9HL' => 'E02006277',
        '9HN' => 'E02006277',
        '9HP' => 'E02006277',
        '9HQ' => 'E02006277',
        '9HR' => 'E02006277',
        '9HS' => 'E02006277',
        '9HT' => 'E02006277',
        '9HU' => 'E02006277',
        '9HW' => 'E02006277',
        '9HX' => 'E02006277',
        '9HY' => 'E02006277',
        '9HZ' => 'E02006277',
        '9JA' => 'E02006277',
        '9JB' => 'E02006277',
        '9JD' => 'E02006277',
        '9JE' => 'E02006277',
        '9JG' => 'E02006277',
        '9JH' => 'E02006277',
        '9JJ' => 'E02006277',
        '9JL' => 'E02006277',
        '9JN' => 'E02006277',
        '9JP' => 'E02006277',
        '9JQ' => 'E02006277',
        '9JR' => 'E02006277',
        '9JS' => 'E02006277',
        '9JT' => 'E02006277',
        '9JU' => 'E02006277',
        '9JW' => 'E02006277',
        '9JX' => 'E02006277',
        '9JY' => 'E02006277',
        '9JZ' => 'E02006277',
        '9LA' => 'E02006277',
        '9LB' => 'E02006277',
        '9LD' => 'E02006277',
        '9LE' => 'E02006277',
        '9LF' => 'E02006277',
        '9LG' => 'E02006277',
        '9LH' => 'E02006277',
        '9LJ' => 'E02006277',
        '9LL' => 'E02006277',
        '9LN' => 'E02006277',
        '9LP' => 'E02006277',
        '9LQ' => 'E02006277',
        '9LR' => 'E02006277',
        '9LS' => 'E02006277',
        '9LT' => 'E02006277',
        '9LU' => 'E02006277',
        '9LW' => 'E02006277',
        '9LX' => 'E02006277',
        '9LY' => 'E02006277',
        '9LZ' => 'E02006277',
        '9NA' => 'E02006277',
        '9NB' => 'E02006277',
        '9ND' => 'E02006277',
        '9NE' => 'E02006277',
        '9NF' => 'E02006277',
        '9NG' => 'E02006277',
        '9NH' => 'E02006277',
        '9NJ' => 'E02006277',
        '9NL' => 'E02006277',
        '9NN' => 'E02006277',
        '9NP' => 'E02006277',
        '9NQ' => 'E02006277',
        '9NR' => 'E02006277',
        '9NS' => 'E02006277',
        '9NT' => 'E02006277',
        '9NU' => 'E02006277',
        '9NW' => 'E02006277',
        '9NX' => 'E02006277',
        '9NY' => 'E02006277',
        '9SA' => 'E02006278',
        '9SB' => 'E02006279',
        '9SD' => 'E02006279',
        '9SE' => 'E02006279',
        '9SF' => 'E02006279',
        '9SG' => 'E02006279',
        '9SH' => 'E02006279',
        '9SJ' => 'E02006279',
        '9SL' => 'E02006279',
        '9SN' => 'E02006279',
        '9SP' => 'E02006279',
        '9SQ' => 'E02006279',
        '9SR' => 'E02006279',
        '9SS' => 'E02006279',
        '9ST' => 'E02006279',
        '9SU' => 'E02006279',
        '9SW' => 'E02006279',
        '9SX' => 'E02006279',
        '9SY' => 'E02006279',
        '9SZ' => 'E02006279',
        '9TA' => 'E02006279',
        '9TB' => 'E02006279',
        '9TD' => 'E02006279',
        '9TE' => 'E02006279',
        '9TF' => 'E02006279',
        '9TG' => 'E02006279',
        '9TH' => 'E02006279',
        '9TL' => 'E02006279',
        '9TN' => 'E02006279',
        '9TP' => 'E02006279',
        '9TQ' => 'E02006279',
        '9TR' => 'E02006279',
        '9TS' => 'E02006279',
        '9TT' => 'E02006279',
        '9TU' => 'E02006279',
        '9TW' => 'E02006279',
        '9TX' => 'E02006279',
        '9TY' => 'E02006279',
        '9TZ' => 'E02006279',
        '9UA' => 'E02006277',
        '9UB' => 'E02006279',
        '9UD' => 'E02006279',
        '9UE' => 'E02006279',
        '9UF' => 'E02006279',
        '9UG' => 'E02006279',
        '9UH' => 'E02006279',
        '9UJ' => 'E02006279',
        '9UL' => 'E02006279',
        '9UN' => 'E02006279',
        '9UP' => 'E02006279',
        '9UQ' => 'E02006279',
        '9UR' => 'E02006279',
        '9US' => 'E02006279',
        '9WA' => 'E02006278',
        '9ZU' => 'E02006279',
        '9ZZ' => 'E02006279',
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
