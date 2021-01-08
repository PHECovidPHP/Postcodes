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
final class RM14
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02000482',
        '1AB' => 'E02000487',
        '1AD' => 'E02000482',
        '1AE' => 'E02000482',
        '1AF' => 'E02000482',
        '1AG' => 'E02000482',
        '1AH' => 'E02000482',
        '1AJ' => 'E02000481',
        '1AL' => 'E02000482',
        '1AN' => 'E02000482',
        '1AP' => 'E02000487',
        '1AQ' => 'E02000482',
        '1AR' => 'E02000482',
        '1AS' => 'E02000482',
        '1AT' => 'E02000482',
        '1AU' => 'E02000482',
        '1AW' => 'E02000482',
        '1AX' => 'E02000482',
        '1AY' => 'E02000482',
        '1AZ' => 'E02000482',
        '1BA' => 'E02000482',
        '1BB' => 'E02000482',
        '1BD' => 'E02000487',
        '1BE' => 'E02000487',
        '1BF' => 'E02000481',
        '1BG' => 'E02000482',
        '1BH' => 'E02000482',
        '1BJ' => 'E02000482',
        '1BL' => 'E02000482',
        '1BN' => 'E02000482',
        '1BP' => 'E02000482',
        '1BQ' => 'E02000482',
        '1BS' => 'E02000482',
        '1BT' => 'E02000482',
        '1BU' => 'E02000482',
        '1BW' => 'E02000482',
        '1BX' => 'E02000481',
        '1BY' => 'E02000481',
        '1BZ' => 'E02000487',
        '1DA' => 'E02000481',
        '1DB' => 'E02000481',
        '1DD' => 'E02000482',
        '1DE' => 'E02000482',
        '1DF' => 'E02000482',
        '1DG' => 'E02000482',
        '1DH' => 'E02000482',
        '1DJ' => 'E02000482',
        '1DL' => 'E02000482',
        '1DN' => 'E02000482',
        '1DP' => 'E02000482',
        '1DQ' => 'E02000482',
        '1DR' => 'E02000482',
        '1DS' => 'E02000487',
        '1DT' => 'E02000481',
        '1DU' => 'E02000482',
        '1DW' => 'E02000482',
        '1DX' => 'E02000487',
        '1DY' => 'E02000482',
        '1DZ' => 'E02000482',
        '1EA' => 'E02000481',
        '1EB' => 'E02000481',
        '1ED' => 'E02000481',
        '1EE' => 'E02000481',
        '1EF' => 'E02000481',
        '1EG' => 'E02000481',
        '1EH' => 'E02000481',
        '1EJ' => 'E02000481',
        '1EL' => 'E02000481',
        '1EN' => 'E02000481',
        '1EP' => 'E02000481',
        '1EQ' => 'E02000481',
        '1ER' => 'E02000481',
        '1ES' => 'E02000481',
        '1ET' => 'E02000481',
        '1EU' => 'E02000481',
        '1EW' => 'E02000481',
        '1EX' => 'E02000481',
        '1EY' => 'E02000481',
        '1EZ' => 'E02000481',
        '1FA' => 'E02000481',
        '1GD' => 'E02000481',
        '1GE' => 'E02000481',
        '1GG' => 'E02000481',
        '1GH' => 'E02000481',
        '1GL' => 'E02000487',
        '1GR' => 'E02000487',
        '1GX' => 'E02000487',
        '1GZ' => 'E02000487',
        '1HA' => 'E02000487',
        '1HB' => 'E02000487',
        '1HD' => 'E02000487',
        '1HE' => 'E02000481',
        '1HF' => 'E02000481',
        '1HG' => 'E02000481',
        '1HH' => 'E02000481',
        '1HJ' => 'E02000481',
        '1HL' => 'E02000481',
        '1HN' => 'E02000481',
        '1HP' => 'E02000481',
        '1HQ' => 'E02000481',
        '1HR' => 'E02000481',
        '1HS' => 'E02000481',
        '1HT' => 'E02000481',
        '1HU' => 'E02000481',
        '1HW' => 'E02000481',
        '1HX' => 'E02000481',
        '1HY' => 'E02000481',
        '1HZ' => 'E02000481',
        '1JA' => 'E02000481',
        '1JB' => 'E02000481',
        '1JD' => 'E02000481',
        '1JE' => 'E02000481',
        '1JG' => 'E02000481',
        '1JN' => 'E02000481',
        '1JP' => 'E02000481',
        '1JQ' => 'E02000481',
        '1JR' => 'E02000481',
        '1JS' => 'E02000481',
        '1JT' => 'E02000481',
        '1JU' => 'E02000481',
        '1JW' => 'E02000481',
        '1JX' => 'E02000481',
        '1JY' => 'E02000481',
        '1JZ' => 'E02000481',
        '1LA' => 'E02000481',
        '1LD' => 'E02000481',
        '1LH' => 'E02000481',
        '1LJ' => 'E02000481',
        '1LL' => 'E02000481',
        '1LN' => 'E02000481',
        '1LP' => 'E02000481',
        '1LQ' => 'E02000487',
        '1LR' => 'E02000481',
        '1LS' => 'E02000481',
        '1LW' => 'E02000481',
        '1LX' => 'E02000481',
        '1LY' => 'E02000481',
        '1LZ' => 'E02000481',
        '1NA' => 'E02000481',
        '1NB' => 'E02000481',
        '1ND' => 'E02000481',
        '1NE' => 'E02000481',
        '1NF' => 'E02000481',
        '1NG' => 'E02000481',
        '1NH' => 'E02000481',
        '1NJ' => 'E02000481',
        '1NL' => 'E02000481',
        '1NN' => 'E02000481',
        '1NP' => 'E02000481',
        '1NQ' => 'E02000481',
        '1NR' => 'E02000481',
        '1NS' => 'E02000481',
        '1NT' => 'E02000481',
        '1NU' => 'E02000481',
        '1NW' => 'E02000481',
        '1NX' => 'E02000481',
        '1NY' => 'E02000481',
        '1NZ' => 'E02000481',
        '1PA' => 'E02000481',
        '1PB' => 'E02000481',
        '1PD' => 'E02000481',
        '1PN' => 'E02000482',
        '1PP' => 'E02000482',
        '1PR' => 'E02000482',
        '1PS' => 'E02000481',
        '1PT' => 'E02000482',
        '1PU' => 'E02000481',
        '1PW' => 'E02000482',
        '1PX' => 'E02000482',
        '1PY' => 'E02000482',
        '1PZ' => 'E02000482',
        '1QA' => 'E02000482',
        '1QB' => 'E02000482',
        '1QD' => 'E02000481',
        '1QE' => 'E02000481',
        '1QF' => 'E02000481',
        '1QG' => 'E02000481',
        '1QH' => 'E02000481',
        '1QJ' => 'E02000481',
        '1QQ' => 'E02000481',
        '1QS' => 'E02000482',
        '1QT' => 'E02000482',
        '1QU' => 'E02000482',
        '1QX' => 'E02000481',
        '1QY' => 'E02000482',
        '1QZ' => 'E02000482',
        '1RA' => 'E02000482',
        '1RB' => 'E02000482',
        '1RD' => 'E02000482',
        '1RE' => 'E02000482',
        '1RF' => 'E02000482',
        '1RG' => 'E02000481',
        '1RH' => 'E02000482',
        '1RJ' => 'E02000482',
        '1RL' => 'E02000482',
        '1RN' => 'E02000482',
        '1RP' => 'E02000482',
        '1RQ' => 'E02000481',
        '1RR' => 'E02000481',
        '1RS' => 'E02000481',
        '1RT' => 'E02000481',
        '1RU' => 'E02000481',
        '1RW' => 'E02000481',
        '1RX' => 'E02000481',
        '1SB' => 'E02000482',
        '1SD' => 'E02000482',
        '1SE' => 'E02000482',
        '1SF' => 'E02000482',
        '1SG' => 'E02000482',
        '1SH' => 'E02000482',
        '1SJ' => 'E02000481',
        '1SL' => 'E02000481',
        '1SN' => 'E02000481',
        '1SP' => 'E02000481',
        '1SQ' => 'E02000482',
        '1SR' => 'E02000481',
        '1SS' => 'E02000481',
        '1ST' => 'E02000481',
        '1SU' => 'E02000481',
        '1SW' => 'E02000481',
        '1SX' => 'E02000481',
        '1SY' => 'E02000481',
        '1SZ' => 'E02000487',
        '1TD' => 'E02000482',
        '1TE' => 'E02000481',
        '1TF' => 'E02000481',
        '1TH' => 'E02000481',
        '1TJ' => 'E02000481',
        '1TL' => 'E02000481',
        '1TP' => 'E02000470',
        '1TQ' => 'E02000470',
        '1TR' => 'E02000470',
        '1TS' => 'E02000470',
        '1TT' => 'E02000470',
        '1TU' => 'E02000470',
        '1TW' => 'E02000482',
        '1TX' => 'E02000470',
        '1TY' => 'E02000481',
        '1TZ' => 'E02000481',
        '1UA' => 'E02000481',
        '1UB' => 'E02000481',
        '1UH' => 'E02000487',
        '1UL' => 'E02000482',
        '1UP' => 'E02000482',
        '1UR' => 'E02000482',
        '1US' => 'E02000487',
        '1UT' => 'E02000482',
        '1UU' => 'E02000485',
        '1UW' => 'E02000487',
        '1UX' => 'E02000482',
        '1UY' => 'E02000482',
        '1UZ' => 'E02000482',
        '1WA' => 'E02000487',
        '1WB' => 'E02000487',
        '1WD' => 'E02000487',
        '1WE' => 'E02000487',
        '1WF' => 'E02000487',
        '1WG' => 'E02000487',
        '1WH' => 'E02000487',
        '1WJ' => 'E02000487',
        '1WL' => 'E02000487',
        '1WN' => 'E02000487',
        '1WP' => 'E02000487',
        '1WQ' => 'E02000487',
        '1WR' => 'E02000487',
        '1WS' => 'E02000487',
        '1WT' => 'E02000487',
        '1WU' => 'E02000487',
        '1WW' => 'E02000487',
        '1WX' => 'E02000487',
        '1WY' => 'E02000487',
        '1WZ' => 'E02000487',
        '1XA' => 'E02000482',
        '1XH' => 'E02000482',
        '1XJ' => 'E02000482',
        '1XL' => 'E02000482',
        '1XN' => 'E02000482',
        '1XP' => 'E02000482',
        '1XQ' => 'E02000487',
        '1XR' => 'E02000481',
        '1XS' => 'E02000481',
        '1XT' => 'E02000482',
        '1XU' => 'E02000481',
        '1XW' => 'E02000482',
        '1XX' => 'E02000482',
        '1XY' => 'E02000482',
        '1XZ' => 'E02000481',
        '1YA' => 'E02000481',
        '1YB' => 'E02000481',
        '1YD' => 'E02000487',
        '1YE' => 'E02000481',
        '1YF' => 'E02000481',
        '1YG' => 'E02000481',
        '1YH' => 'E02000481',
        '1YJ' => 'E02000487',
        '1YQ' => 'E02000487',
        '1YT' => 'E02000487',
        '1YZ' => 'E02000487',
        '2AA' => 'E02000485',
        '2AB' => 'E02000487',
        '2AD' => 'E02000485',
        '2AE' => 'E02000487',
        '2AF' => 'E02000487',
        '2AG' => 'E02000485',
        '2AH' => 'E02000485',
        '2AJ' => 'E02000485',
        '2AL' => 'E02000485',
        '2AN' => 'E02000487',
        '2AP' => 'E02000485',
        '2AQ' => 'E02000485',
        '2AR' => 'E02000485',
        '2AS' => 'E02000487',
        '2AT' => 'E02000485',
        '2AU' => 'E02000485',
        '2AW' => 'E02000485',
        '2AX' => 'E02000487',
        '2AY' => 'E02000487',
        '2AZ' => 'E02000487',
        '2BA' => 'E02000487',
        '2BB' => 'E02000485',
        '2BD' => 'E02000487',
        '2BE' => 'E02000485',
        '2BF' => 'E02000485',
        '2BG' => 'E02000487',
        '2BH' => 'E02000487',
        '2BJ' => 'E02000487',
        '2BL' => 'E02000487',
        '2BN' => 'E02000487',
        '2BP' => 'E02000487',
        '2BQ' => 'E02000487',
        '2BS' => 'E02000487',
        '2BT' => 'E02000487',
        '2BU' => 'E02000487',
        '2BW' => 'E02000487',
        '2BX' => 'E02000487',
        '2BY' => 'E02000487',
        '2BZ' => 'E02000487',
        '2DA' => 'E02000487',
        '2DB' => 'E02000487',
        '2DD' => 'E02000487',
        '2DE' => 'E02000487',
        '2DF' => 'E02000487',
        '2DG' => 'E02000487',
        '2DH' => 'E02000487',
        '2DJ' => 'E02000487',
        '2DL' => 'E02000487',
        '2DN' => 'E02000487',
        '2DP' => 'E02000487',
        '2DQ' => 'E02000487',
        '2DR' => 'E02000487',
        '2DS' => 'E02000487',
        '2DT' => 'E02000487',
        '2DU' => 'E02000487',
        '2DW' => 'E02000487',
        '2DX' => 'E02000487',
        '2DY' => 'E02000487',
        '2DZ' => 'E02000487',
        '2EA' => 'E02000487',
        '2EB' => 'E02000487',
        '2ED' => 'E02000487',
        '2EE' => 'E02000487',
        '2EF' => 'E02000487',
        '2EG' => 'E02000487',
        '2EH' => 'E02000487',
        '2EJ' => 'E02000487',
        '2EL' => 'E02000487',
        '2EN' => 'E02000487',
        '2EP' => 'E02000487',
        '2EQ' => 'E02000487',
        '2ER' => 'E02000487',
        '2ES' => 'E02000487',
        '2ET' => 'E02000487',
        '2EU' => 'E02000487',
        '2EW' => 'E02000487',
        '2EX' => 'E02000487',
        '2EY' => 'E02000487',
        '2EZ' => 'E02000487',
        '2FA' => 'E02000485',
        '2FB' => 'E02000487',
        '2FD' => 'E02000487',
        '2FF' => 'E02000482',
        '2FX' => 'E02000487',
        '2FZ' => 'E02000487',
        '2GD' => 'E02000487',
        '2GE' => 'E02000487',
        '2GG' => 'E02000487',
        '2GN' => 'E02000487',
        '2GX' => 'E02000487',
        '2GY' => 'E02000487',
        '2GZ' => 'E02000487',
        '2HA' => 'E02000487',
        '2HB' => 'E02000487',
        '2HD' => 'E02000485',
        '2HE' => 'E02000487',
        '2HF' => 'E02000487',
        '2HG' => 'E02000487',
        '2HH' => 'E02000487',
        '2HJ' => 'E02000487',
        '2HL' => 'E02000487',
        '2HN' => 'E02000487',
        '2HP' => 'E02000487',
        '2HR' => 'E02000487',
        '2HS' => 'E02000487',
        '2HT' => 'E02000487',
        '2HU' => 'E02000487',
        '2HW' => 'E02000487',
        '2HX' => 'E02000487',
        '2HY' => 'E02000487',
        '2HZ' => 'E02000487',
        '2JA' => 'E02000487',
        '2JB' => 'E02000487',
        '2JD' => 'E02000487',
        '2JE' => 'E02000487',
        '2JF' => 'E02000487',
        '2JG' => 'E02000487',
        '2JH' => 'E02000487',
        '2JJ' => 'E02000487',
        '2JL' => 'E02000487',
        '2JP' => 'E02000487',
        '2JQ' => 'E02000487',
        '2JR' => 'E02000487',
        '2JS' => 'E02000485',
        '2JT' => 'E02000485',
        '2JU' => 'E02000487',
        '2JW' => 'E02000487',
        '2JZ' => 'E02000487',
        '2LA' => 'E02000487',
        '2LB' => 'E02000487',
        '2LD' => 'E02000487',
        '2LE' => 'E02000487',
        '2LF' => 'E02000487',
        '2LH' => 'E02000487',
        '2LJ' => 'E02000487',
        '2LL' => 'E02000487',
        '2LN' => 'E02000487',
        '2LP' => 'E02000485',
        '2LR' => 'E02000485',
        '2LS' => 'E02000485',
        '2LT' => 'E02000485',
        '2LU' => 'E02000485',
        '2LW' => 'E02000487',
        '2LX' => 'E02000485',
        '2NA' => 'E02000487',
        '2NB' => 'E02000487',
        '2NH' => 'E02000487',
        '2NJ' => 'E02000487',
        '2NL' => 'E02000487',
        '2NP' => 'E02000485',
        '2NR' => 'E02000485',
        '2NS' => 'E02000485',
        '2NT' => 'E02000485',
        '2NU' => 'E02000485',
        '2NX' => 'E02000485',
        '2NY' => 'E02000487',
        '2PA' => 'E02000485',
        '2PB' => 'E02000485',
        '2PD' => 'E02000485',
        '2PE' => 'E02000485',
        '2PF' => 'E02000485',
        '2PH' => 'E02000485',
        '2PJ' => 'E02000485',
        '2PL' => 'E02000485',
        '2PP' => 'E02000485',
        '2PR' => 'E02000485',
        '2PS' => 'E02000485',
        '2PT' => 'E02000485',
        '2QA' => 'E02000485',
        '2QB' => 'E02000485',
        '2QD' => 'E02000485',
        '2QE' => 'E02000485',
        '2QF' => 'E02000487',
        '2QH' => 'E02000485',
        '2QJ' => 'E02000485',
        '2QL' => 'E02000485',
        '2QP' => 'E02000485',
        '2QR' => 'E02000485',
        '2QS' => 'E02000485',
        '2QT' => 'E02000485',
        '2QU' => 'E02000485',
        '2QW' => 'E02000485',
        '2QX' => 'E02000485',
        '2RA' => 'E02000485',
        '2RB' => 'E02000485',
        '2RE' => 'E02000485',
        '2RF' => 'E02000485',
        '2RJ' => 'E02000485',
        '2RL' => 'E02000485',
        '2RN' => 'E02000485',
        '2RP' => 'E02000485',
        '2RR' => 'E02000485',
        '2RS' => 'E02000485',
        '2RT' => 'E02000485',
        '2RU' => 'E02000485',
        '2RX' => 'E02000485',
        '2SH' => 'E02000485',
        '2SJ' => 'E02000485',
        '2SP' => 'E02000487',
        '2SQ' => 'E02000485',
        '2SS' => 'E02000485',
        '2ST' => 'E02000485',
        '2SU' => 'E02000485',
        '2SW' => 'E02000485',
        '2SX' => 'E02000485',
        '2SY' => 'E02000485',
        '2SZ' => 'E02000485',
        '2TA' => 'E02000485',
        '2TB' => 'E02000485',
        '2TD' => 'E02000482',
        '2TE' => 'E02000487',
        '2TF' => 'E02000487',
        '2TG' => 'E02000487',
        '2TH' => 'E02000482',
        '2TJ' => 'E02000482',
        '2TL' => 'E02000487',
        '2TN' => 'E02000487',
        '2TP' => 'E02000485',
        '2TQ' => 'E02000487',
        '2TR' => 'E02000485',
        '2TS' => 'E02000485',
        '2TT' => 'E02000485',
        '2TU' => 'E02000485',
        '2TW' => 'E02000487',
        '2TX' => 'E02000485',
        '2TY' => 'E02000487',
        '2TZ' => 'E02000487',
        '2UA' => 'E02000485',
        '2UB' => 'E02000485',
        '2UD' => 'E02000485',
        '2UE' => 'E02000482',
        '2UF' => 'E02000482',
        '2UG' => 'E02000482',
        '2UH' => 'E02000485',
        '2UJ' => 'E02000485',
        '2UL' => 'E02000485',
        '2UN' => 'E02000482',
        '2UP' => 'E02000485',
        '2UQ' => 'E02000482',
        '2UR' => 'E02000485',
        '2UU' => 'E02000482',
        '2UW' => 'E02000482',
        '2UX' => 'E02000482',
        '2UY' => 'E02000487',
        '2UZ' => 'E02000487',
        '2WA' => 'E02000487',
        '2WB' => 'E02000487',
        '2WD' => 'E02000487',
        '2WE' => 'E02000487',
        '2WF' => 'E02000487',
        '2WJ' => 'E02000487',
        '2WL' => 'E02000487',
        '2WN' => 'E02000487',
        '2WP' => 'E02000487',
        '2WQ' => 'E02000487',
        '2WR' => 'E02000487',
        '2WS' => 'E02000487',
        '2WT' => 'E02000487',
        '2WU' => 'E02000487',
        '2WW' => 'E02000487',
        '2WX' => 'E02000487',
        '2WY' => 'E02000487',
        '2WZ' => 'E02000487',
        '2XA' => 'E02000482',
        '2XB' => 'E02003301',
        '2XD' => 'E02000487',
        '2XF' => 'E02000487',
        '2XH' => 'E02000487',
        '2XJ' => 'E02000487',
        '2XL' => 'E02000487',
        '2XP' => 'E02000487',
        '2XR' => 'E02000487',
        '2XS' => 'E02000487',
        '2XT' => 'E02000487',
        '2XU' => 'E02000487',
        '2XX' => 'E02000485',
        '2XY' => 'E02000487',
        '2XZ' => 'E02000487',
        '2YA' => 'E02000487',
        '2YB' => 'E02000487',
        '2YD' => 'E02000487',
        '2YE' => 'E02000487',
        '2YF' => 'E02000487',
        '2YG' => 'E02000487',
        '2YH' => 'E02000487',
        '2YJ' => 'E02000487',
        '2YL' => 'E02000487',
        '2YN' => 'E02000487',
        '2YP' => 'E02000487',
        '2YQ' => 'E02000487',
        '2YR' => 'E02000485',
        '2YS' => 'E02000485',
        '2YT' => 'E02000485',
        '2YU' => 'E02000485',
        '2YW' => 'E02000487',
        '2YX' => 'E02000485',
        '2YY' => 'E02000485',
        '2YZ' => 'E02000485',
        '3AA' => 'E02000487',
        '3AB' => 'E02000487',
        '3AD' => 'E02000487',
        '3AE' => 'E02000487',
        '3AF' => 'E02000487',
        '3AG' => 'E02000487',
        '3AH' => 'E02000487',
        '3AJ' => 'E02000487',
        '3AL' => 'E02000487',
        '3AN' => 'E02000487',
        '3AP' => 'E02000487',
        '3AQ' => 'E02000487',
        '3AR' => 'E02000487',
        '3AS' => 'E02000487',
        '3AT' => 'E02000487',
        '3AU' => 'E02000487',
        '3AW' => 'E02000487',
        '3AX' => 'E02000487',
        '3AY' => 'E02000487',
        '3AZ' => 'E02000487',
        '3BA' => 'E02000487',
        '3BB' => 'E02000487',
        '3BD' => 'E02000481',
        '3BE' => 'E02000487',
        '3BF' => 'E02003299',
        '3BG' => 'E02000481',
        '3BH' => 'E02000482',
        '3BJ' => 'E02003299',
        '3BL' => 'E02000485',
        '3BN' => 'E02003299',
        '3BP' => 'E02003299',
        '3BQ' => 'E02000487',
        '3BS' => 'E02000485',
        '3BT' => 'E02000485',
        '3BU' => 'E02000485',
        '3BW' => 'E02000487',
        '3BX' => 'E02000482',
        '3BY' => 'E02000487',
        '3BZ' => 'E02000481',
        '3DA' => 'E02000482',
        '3DB' => 'E02000487',
        '3DD' => 'E02000482',
        '3DE' => 'E02000487',
        '3DF' => 'E02000487',
        '3DG' => 'E02000487',
        '3DH' => 'E02000482',
        '3DJ' => 'E02000487',
        '3DL' => 'E02000482',
        '3DN' => 'E02000487',
        '3DP' => 'E02000487',
        '3DQ' => 'E02000482',
        '3DR' => 'E02000487',
        '3DS' => 'E02000487',
        '3DT' => 'E02000487',
        '3DU' => 'E02000482',
        '3DX' => 'E02000481',
        '3DY' => 'E02000481',
        '3DZ' => 'E02000487',
        '3EA' => 'E02000482',
        '3EB' => 'E02003299',
        '3EF' => 'E02003299',
        '3EG' => 'E02003299',
        '3EH' => 'E02000487',
        '3EJ' => 'E02000487',
        '3EL' => 'E02000487',
        '3EP' => 'E02000487',
        '3ER' => 'E02000487',
        '3ES' => 'E02000487',
        '3ET' => 'E02000487',
        '3EU' => 'E02000487',
        '3EX' => 'E02000487',
        '3FZ' => 'E02000487',
        '3GQ' => 'E02000481',
        '3HA' => 'E02000487',
        '3HB' => 'E02000487',
        '3HD' => 'E02000482',
        '3HH' => 'E02000482',
        '3HJ' => 'E02000482',
        '3HL' => 'E02000482',
        '3HP' => 'E02000482',
        '3HR' => 'E02000482',
        '3HS' => 'E02000482',
        '3JB' => 'E02000482',
        '3JD' => 'E02000481',
        '3JH' => 'E02000481',
        '3JJ' => 'E02000481',
        '3JL' => 'E02000481',
        '3JN' => 'E02000482',
        '3JP' => 'E02000481',
        '3JR' => 'E02000481',
        '3JS' => 'E02000481',
        '3JT' => 'E02000481',
        '3JU' => 'E02000481',
        '3JX' => 'E02000481',
        '3LA' => 'E02000481',
        '3LB' => 'E02000481',
        '3LD' => 'E02000481',
        '3LH' => 'E02000481',
        '3LJ' => 'E02000481',
        '3LL' => 'E02000481',
        '3LP' => 'E02000481',
        '3LR' => 'E02000481',
        '3LS' => 'E02000481',
        '3LT' => 'E02000481',
        '3LU' => 'E02000481',
        '3LX' => 'E02000481',
        '3LZ' => 'E02000487',
        '3NA' => 'E02000481',
        '3NB' => 'E02000481',
        '3ND' => 'E02000481',
        '3NE' => 'E02000487',
        '3NS' => 'E02000481',
        '3NT' => 'E02000481',
        '3NU' => 'E02000481',
        '3NX' => 'E02000481',
        '3PA' => 'E02000481',
        '3PB' => 'E02000481',
        '3PD' => 'E02003299',
        '3PE' => 'E02000481',
        '3PF' => 'E02000481',
        '3PG' => 'E02000487',
        '3PH' => 'E02000481',
        '3PJ' => 'E02004471',
        '3PL' => 'E02000481',
        '3PN' => 'E02004471',
        '3PP' => 'E02000481',
        '3PQ' => 'E02004471',
        '3PR' => 'E02000481',
        '3PS' => 'E02000481',
        '3PT' => 'E02000487',
        '3PU' => 'E02000487',
        '3PX' => 'E02000487',
        '3QA' => 'E02000487',
        '3QB' => 'E02000487',
        '3QH' => 'E02000487',
        '3QJ' => 'E02000487',
        '3QL' => 'E02000487',
        '3QN' => 'E02000487',
        '3QP' => 'E02000487',
        '3QR' => 'E02000487',
        '3RA' => 'E02000485',
        '3RB' => 'E02000481',
        '3RD' => 'E02000481',
        '3RE' => 'E02003299',
        '3RH' => 'E02003299',
        '3RJ' => 'E02003299',
        '3RL' => 'E02003299',
        '3RP' => 'E02003299',
        '3RR' => 'E02003299',
        '3RS' => 'E02003299',
        '3RT' => 'E02003299',
        '3RU' => 'E02003299',
        '3RX' => 'E02003299',
        '3SA' => 'E02003299',
        '3SB' => 'E02003299',
        '3SD' => 'E02003299',
        '3SJ' => 'E02003299',
        '3SL' => 'E02003299',
        '3SP' => 'E02003299',
        '3SR' => 'E02003299',
        '3SS' => 'E02003299',
        '3ST' => 'E02003299',
        '3SU' => 'E02003299',
        '3SW' => 'E02003299',
        '3SX' => 'E02003299',
        '3TA' => 'E02003299',
        '3TB' => 'E02003299',
        '3TD' => 'E02003299',
        '3TE' => 'E02003299',
        '3TF' => 'E02003299',
        '3TH' => 'E02003299',
        '3TJ' => 'E02003299',
        '3TL' => 'E02003299',
        '3TP' => 'E02003299',
        '3TR' => 'E02003299',
        '3TS' => 'E02003299',
        '3TT' => 'E02003299',
        '3TU' => 'E02003299',
        '3TY' => 'E02003299',
        '3UH' => 'E02000487',
        '3UJ' => 'E02000487',
        '3UL' => 'E02000487',
        '3UP' => 'E02000487',
        '3UR' => 'E02000487',
        '3UT' => 'E02000487',
        '3UU' => 'E02000487',
        '3UX' => 'E02000487',
        '3WA' => 'E02000487',
        '3WB' => 'E02000487',
        '3WD' => 'E02000487',
        '3WE' => 'E02000487',
        '3WF' => 'E02000487',
        '3WG' => 'E02000481',
        '3WH' => 'E02000487',
        '3WJ' => 'E02000487',
        '3WL' => 'E02000487',
        '3WN' => 'E02000487',
        '3WP' => 'E02000487',
        '3WQ' => 'E02000487',
        '3WU' => 'E02000487',
        '3WW' => 'E02000487',
        '3WX' => 'E02000487',
        '3WY' => 'E02000487',
        '3WZ' => 'E02000487',
        '3XA' => 'E02000487',
        '3XB' => 'E02000487',
        '3XD' => 'E02000487',
        '3XH' => 'E02000487',
        '3XJ' => 'E02000487',
        '3XL' => 'E02000487',
        '3XN' => 'E02000487',
        '3XP' => 'E02000487',
        '3XR' => 'E02000487',
        '3XS' => 'E02003299',
        '3XT' => 'E02000487',
        '3YA' => 'E02000482',
        '3YB' => 'E02000487',
        '3YD' => 'E02000482',
        '3YE' => 'E02000487',
        '3YF' => 'E02000487',
        '3YH' => 'E02000482',
        '3YJ' => 'E02000482',
        '3YL' => 'E02000482',
        '3YP' => 'E02000482',
        '3YQ' => 'E02000487',
        '3YR' => 'E02000481',
        '3YS' => 'E02000487',
        '3YT' => 'E02000487',
        '3YU' => 'E02000487',
        '3YX' => 'E02000487',
        '3YZ' => 'E02000487',
        '9AA' => 'E02000487',
        '9AB' => 'E02000487',
        '9AF' => 'E02000487',
        '9AG' => 'E02000487',
        '9AJ' => 'E02000487',
        '9AN' => 'E02000487',
        '9AP' => 'E02000487',
        '9AQ' => 'E02000487',
        '9AR' => 'E02000487',
        '9AS' => 'E02000487',
        '9AT' => 'E02000487',
        '9AU' => 'E02000487',
        '9AW' => 'E02000487',
        '9AZ' => 'E02000487',
        '9BA' => 'E02000487',
        '9BB' => 'E02000487',
        '9BD' => 'E02000487',
        '9BF' => 'E02000487',
        '9BG' => 'E02000487',
        '9BH' => 'E02000487',
        '9BJ' => 'E02000487',
        '9BL' => 'E02000487',
        '9BN' => 'E02000487',
        '9BP' => 'E02000487',
        '9BQ' => 'E02000487',
        '9BR' => 'E02000487',
        '9BS' => 'E02000487',
        '9BT' => 'E02000487',
        '9BU' => 'E02000487',
        '9BW' => 'E02000487',
        '9BX' => 'E02000487',
        '9BY' => 'E02000487',
        '9BZ' => 'E02000487',
        '9DA' => 'E02000487',
        '9DB' => 'E02000487',
        '9DD' => 'E02000487',
        '9DE' => 'E02000487',
        '9DF' => 'E02000487',
        '9DG' => 'E02000487',
        '9DH' => 'E02000487',
        '9DJ' => 'E02000487',
        '9DL' => 'E02000487',
        '9DN' => 'E02000487',
        '9DP' => 'E02000487',
        '9DQ' => 'E02000487',
        '9DR' => 'E02000487',
        '9DS' => 'E02000487',
        '9DT' => 'E02000487',
        '9DU' => 'E02000487',
        '9DW' => 'E02000487',
        '9DX' => 'E02000487',
        '9DY' => 'E02000487',
        '9DZ' => 'E02000487',
        '9EA' => 'E02000487',
        '9EB' => 'E02000487',
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
