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
final class N18
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02006793',
        '1AB' => 'E02006793',
        '1AD' => 'E02006793',
        '1AE' => 'E02000311',
        '1AF' => 'E02000311',
        '1AG' => 'E02000311',
        '1AH' => 'E02000311',
        '1AJ' => 'E02000311',
        '1AL' => 'E02000311',
        '1AN' => 'E02000311',
        '1AP' => 'E02000311',
        '1AQ' => 'E02000311',
        '1AR' => 'E02000311',
        '1AS' => 'E02000311',
        '1AT' => 'E02006793',
        '1AU' => 'E02000311',
        '1AW' => 'E02000311',
        '1AX' => 'E02000311',
        '1AY' => 'E02000311',
        '1AZ' => 'E02000309',
        '1BA' => 'E02000311',
        '1BB' => 'E02006793',
        '1BD' => 'E02000307',
        '1BE' => 'E02000311',
        '1BF' => 'E02006793',
        '1BG' => 'E02000311',
        '1BH' => 'E02000311',
        '1BJ' => 'E02000311',
        '1BL' => 'E02000311',
        '1BN' => 'E02000311',
        '1BP' => 'E02000311',
        '1BQ' => 'E02000311',
        '1BS' => 'E02000311',
        '1BT' => 'E02000311',
        '1BU' => 'E02000311',
        '1BW' => 'E02000311',
        '1BX' => 'E02006793',
        '1BY' => 'E02006793',
        '1BZ' => 'E02006793',
        '1DA' => 'E02000311',
        '1DB' => 'E02006793',
        '1DD' => 'E02006793',
        '1DE' => 'E02000311',
        '1DF' => 'E02000311',
        '1DG' => 'E02000309',
        '1DH' => 'E02000309',
        '1DJ' => 'E02006793',
        '1DL' => 'E02006793',
        '1DN' => 'E02006793',
        '1DP' => 'E02006793',
        '1DQ' => 'E02006793',
        '1DR' => 'E02006793',
        '1DS' => 'E02006793',
        '1DT' => 'E02006793',
        '1DU' => 'E02006793',
        '1DW' => 'E02006793',
        '1DX' => 'E02006793',
        '1DY' => 'E02000311',
        '1DZ' => 'E02000311',
        '1EA' => 'E02006793',
        '1EB' => 'E02006793',
        '1ED' => 'E02006793',
        '1EE' => 'E02006793',
        '1EF' => 'E02006793',
        '1EG' => 'E02006793',
        '1EH' => 'E02006793',
        '1EJ' => 'E02006793',
        '1EL' => 'E02006793',
        '1EN' => 'E02000311',
        '1EP' => 'E02006793',
        '1EQ' => 'E02006793',
        '1ER' => 'E02006793',
        '1ES' => 'E02006793',
        '1ET' => 'E02006793',
        '1EU' => 'E02006793',
        '1EW' => 'E02000311',
        '1EX' => 'E02006793',
        '1EY' => 'E02006793',
        '1EZ' => 'E02006793',
        '1FA' => 'E02006793',
        '1FB' => 'E02006793',
        '1FD' => 'E02006793',
        '1FE' => 'E02006793',
        '1FF' => 'E02006793',
        '1FG' => 'E02000307',
        '1HA' => 'E02006793',
        '1HB' => 'E02006793',
        '1HD' => 'E02006793',
        '1HE' => 'E02006793',
        '1HF' => 'E02006793',
        '1HG' => 'E02006793',
        '1HH' => 'E02006793',
        '1HJ' => 'E02006793',
        '1HL' => 'E02006793',
        '1HN' => 'E02006793',
        '1HP' => 'E02000309',
        '1HQ' => 'E02006793',
        '1HR' => 'E02006793',
        '1HS' => 'E02006793',
        '1HT' => 'E02006793',
        '1HU' => 'E02000311',
        '1HW' => 'E02006793',
        '1HX' => 'E02000311',
        '1HY' => 'E02000311',
        '1HZ' => 'E02000311',
        '1JA' => 'E02000311',
        '1JB' => 'E02000311',
        '1JD' => 'E02000311',
        '1JE' => 'E02000311',
        '1JF' => 'E02000311',
        '1JG' => 'E02000311',
        '1JH' => 'E02000311',
        '1JJ' => 'E02000311',
        '1JL' => 'E02000311',
        '1JN' => 'E02000311',
        '1JP' => 'E02000309',
        '1JQ' => 'E02000309',
        '1JR' => 'E02000311',
        '1JS' => 'E02000311',
        '1JT' => 'E02000309',
        '1JU' => 'E02000309',
        '1JW' => 'E02000311',
        '1JX' => 'E02000307',
        '1JZ' => 'E02000307',
        '1LA' => 'E02000307',
        '1LB' => 'E02000307',
        '1LD' => 'E02000307',
        '1LE' => 'E02000307',
        '1LF' => 'E02000307',
        '1LG' => 'E02000307',
        '1LH' => 'E02000307',
        '1LJ' => 'E02000307',
        '1LL' => 'E02000307',
        '1LN' => 'E02000307',
        '1LP' => 'E02000307',
        '1LQ' => 'E02000307',
        '1LR' => 'E02000307',
        '1LS' => 'E02000307',
        '1LT' => 'E02000307',
        '1LU' => 'E02000307',
        '1LW' => 'E02000307',
        '1LX' => 'E02006793',
        '1LZ' => 'E02000307',
        '1NA' => 'E02006793',
        '1NB' => 'E02000307',
        '1ND' => 'E02000307',
        '1NE' => 'E02000307',
        '1NF' => 'E02000307',
        '1NG' => 'E02000307',
        '1NH' => 'E02000309',
        '1NJ' => 'E02000307',
        '1NL' => 'E02000307',
        '1NN' => 'E02000307',
        '1NP' => 'E02000307',
        '1NQ' => 'E02000307',
        '1NR' => 'E02000307',
        '1NS' => 'E02000307',
        '1NT' => 'E02000307',
        '1NU' => 'E02000307',
        '1NW' => 'E02000307',
        '1NX' => 'E02000307',
        '1NY' => 'E02000307',
        '1NZ' => 'E02000307',
        '1PA' => 'E02000307',
        '1PB' => 'E02006793',
        '1PD' => 'E02006793',
        '1PE' => 'E02006793',
        '1PF' => 'E02006793',
        '1PG' => 'E02006793',
        '1PH' => 'E02006793',
        '1PJ' => 'E02006793',
        '1PL' => 'E02006793',
        '1PN' => 'E02000307',
        '1PP' => 'E02000307',
        '1PQ' => 'E02006793',
        '1PR' => 'E02000307',
        '1PS' => 'E02000307',
        '1PT' => 'E02000307',
        '1PU' => 'E02000307',
        '1PW' => 'E02000307',
        '1PX' => 'E02000307',
        '1PY' => 'E02000307',
        '1PZ' => 'E02000307',
        '1QA' => 'E02000307',
        '1QB' => 'E02000307',
        '1QD' => 'E02000307',
        '1QE' => 'E02000307',
        '1QF' => 'E02000307',
        '1QG' => 'E02000307',
        '1QH' => 'E02000307',
        '1QJ' => 'E02000307',
        '1QL' => 'E02000307',
        '1QN' => 'E02006793',
        '1QP' => 'E02006793',
        '1QQ' => 'E02000307',
        '1QR' => 'E02006793',
        '1QS' => 'E02006793',
        '1QU' => 'E02006793',
        '1QW' => 'E02006793',
        '1QX' => 'E02006793',
        '1QY' => 'E02006793',
        '1QZ' => 'E02006793',
        '1RA' => 'E02006793',
        '1RB' => 'E02006793',
        '1RE' => 'E02006793',
        '1RF' => 'E02000307',
        '1RG' => 'E02006793',
        '1RH' => 'E02006793',
        '1RJ' => 'E02000307',
        '1RL' => 'E02000307',
        '1RN' => 'E02000307',
        '1RP' => 'E02006793',
        '1RQ' => 'E02000307',
        '1RR' => 'E02006793',
        '1RS' => 'E02000307',
        '1RT' => 'E02000307',
        '1RU' => 'E02000307',
        '1RW' => 'E02000307',
        '1RX' => 'E02006793',
        '1RY' => 'E02000307',
        '1RZ' => 'E02000307',
        '1SA' => 'E02000303',
        '1SB' => 'E02006793',
        '1SD' => 'E02006793',
        '1SG' => 'E02006793',
        '1SH' => 'E02006793',
        '1SJ' => 'E02006793',
        '1SL' => 'E02006793',
        '1SN' => 'E02006793',
        '1SP' => 'E02006793',
        '1SQ' => 'E02006793',
        '1SR' => 'E02006793',
        '1SS' => 'E02006793',
        '1ST' => 'E02006793',
        '1SU' => 'E02006793',
        '1SW' => 'E02006793',
        '1SX' => 'E02006793',
        '1SY' => 'E02006793',
        '1SZ' => 'E02006793',
        '1TA' => 'E02006793',
        '1TB' => 'E02006793',
        '1TF' => 'E02006793',
        '1TG' => 'E02006793',
        '1TH' => 'E02006793',
        '1TJ' => 'E02006793',
        '1TL' => 'E02006793',
        '1TN' => 'E02006793',
        '1TP' => 'E02006793',
        '1TQ' => 'E02006793',
        '1TR' => 'E02006793',
        '1TS' => 'E02006793',
        '1TT' => 'E02006793',
        '1TU' => 'E02006793',
        '1TW' => 'E02006793',
        '1TZ' => 'E02006793',
        '1UA' => 'E02006793',
        '1UB' => 'E02006793',
        '1UD' => 'E02006793',
        '1UE' => 'E02006793',
        '1UF' => 'E02006793',
        '1UG' => 'E02006793',
        '1UQ' => 'E02006793',
        '1UU' => 'E02000309',
        '1UW' => 'E02000309',
        '1UX' => 'E02000311',
        '1UY' => 'E02000311',
        '1UZ' => 'E02006793',
        '1WA' => 'E02000309',
        '1WB' => 'E02000309',
        '1WD' => 'E02006793',
        '1WE' => 'E02000309',
        '1WF' => 'E02000309',
        '1WG' => 'E02000309',
        '1WH' => 'E02000309',
        '1WJ' => 'E02000309',
        '1WL' => 'E02000309',
        '1WN' => 'E02000309',
        '1WP' => 'E02000347',
        '1WQ' => 'E02006793',
        '1WR' => 'E02000309',
        '1WS' => 'E02000309',
        '1WT' => 'E02000309',
        '1WU' => 'E02000309',
        '1WW' => 'E02000309',
        '1WX' => 'E02000309',
        '1WY' => 'E02000309',
        '1WZ' => 'E02000309',
        '1XA' => 'E02006793',
        '1XB' => 'E02006793',
        '1XD' => 'E02006793',
        '1XE' => 'E02006793',
        '1XF' => 'E02006793',
        '1XG' => 'E02006793',
        '1XH' => 'E02006793',
        '1XJ' => 'E02006793',
        '1XL' => 'E02006793',
        '1XN' => 'E02006793',
        '1XP' => 'E02000309',
        '1XQ' => 'E02006793',
        '1XR' => 'E02000309',
        '1XT' => 'E02000309',
        '1XU' => 'E02000309',
        '1XW' => 'E02000309',
        '1XX' => 'E02000309',
        '1XY' => 'E02000309',
        '1XZ' => 'E02000309',
        '1YA' => 'E02000309',
        '1YB' => 'E02000309',
        '1YD' => 'E02000309',
        '1YE' => 'E02000309',
        '1YT' => 'E02000309',
        '1YW' => 'E02000309',
        '1YX' => 'E02000309',
        '1YY' => 'E02000309',
        '1YZ' => 'E02000309',
        '1ZA' => 'E02006793',
        '1ZB' => 'E02000309',
        '1ZD' => 'E02006793',
        '1ZE' => 'E02000309',
        '1ZF' => 'E02000309',
        '1ZG' => 'E02000309',
        '1ZH' => 'E02000311',
        '1ZJ' => 'E02000309',
        '1ZL' => 'E02000309',
        '2AA' => 'E02000309',
        '2AB' => 'E02000309',
        '2AD' => 'E02000309',
        '2AE' => 'E02000309',
        '2AF' => 'E02000309',
        '2AG' => 'E02000309',
        '2AH' => 'E02000309',
        '2AJ' => 'E02000309',
        '2AL' => 'E02000309',
        '2AN' => 'E02000309',
        '2AP' => 'E02000309',
        '2AQ' => 'E02000309',
        '2AR' => 'E02000309',
        '2AS' => 'E02000309',
        '2AT' => 'E02000309',
        '2AU' => 'E02000309',
        '2AW' => 'E02000309',
        '2AX' => 'E02000309',
        '2AY' => 'E02000309',
        '2AZ' => 'E02000309',
        '2BA' => 'E02000309',
        '2BB' => 'E02000309',
        '2BD' => 'E02000309',
        '2BE' => 'E02000309',
        '2BF' => 'E02000309',
        '2BG' => 'E02000309',
        '2BH' => 'E02000309',
        '2BJ' => 'E02000309',
        '2BL' => 'E02000309',
        '2BN' => 'E02000309',
        '2BP' => 'E02000309',
        '2BQ' => 'E02000309',
        '2BS' => 'E02000309',
        '2BT' => 'E02000309',
        '2BU' => 'E02000309',
        '2BW' => 'E02000309',
        '2BX' => 'E02000309',
        '2BY' => 'E02000309',
        '2BZ' => 'E02000309',
        '2DA' => 'E02000306',
        '2DB' => 'E02000309',
        '2DD' => 'E02000309',
        '2DE' => 'E02000309',
        '2DF' => 'E02000309',
        '2DG' => 'E02000309',
        '2DH' => 'E02000309',
        '2DJ' => 'E02000309',
        '2DL' => 'E02000309',
        '2DN' => 'E02000309',
        '2DP' => 'E02000309',
        '2DQ' => 'E02000309',
        '2DR' => 'E02000309',
        '2DS' => 'E02000309',
        '2DT' => 'E02000309',
        '2DU' => 'E02000309',
        '2DW' => 'E02000309',
        '2DX' => 'E02000309',
        '2DY' => 'E02000309',
        '2DZ' => 'E02000309',
        '2EA' => 'E02000309',
        '2EB' => 'E02000306',
        '2ED' => 'E02000309',
        '2EE' => 'E02000309',
        '2EF' => 'E02000309',
        '2EG' => 'E02000309',
        '2EH' => 'E02000309',
        '2EJ' => 'E02000309',
        '2EL' => 'E02000306',
        '2EN' => 'E02000306',
        '2EP' => 'E02000309',
        '2EQ' => 'E02000309',
        '2ER' => 'E02000306',
        '2ES' => 'E02000306',
        '2ET' => 'E02000306',
        '2EU' => 'E02000309',
        '2EW' => 'E02000309',
        '2EX' => 'E02000309',
        '2EY' => 'E02000309',
        '2EZ' => 'E02000309',
        '2FA' => 'E02000309',
        '2FE' => 'E02000309',
        '2FF' => 'E02000309',
        '2GA' => 'E02000309',
        '2GD' => 'E02000309',
        '2GE' => 'E02000309',
        '2GF' => 'E02000309',
        '2GS' => 'E02000309',
        '2GT' => 'E02000309',
        '2GU' => 'E02000309',
        '2GW' => 'E02000309',
        '2GX' => 'E02000309',
        '2GY' => 'E02000309',
        '2GZ' => 'E02000303',
        '2HA' => 'E02000309',
        '2HB' => 'E02000309',
        '2HD' => 'E02000306',
        '2HE' => 'E02000306',
        '2HF' => 'E02000306',
        '2HG' => 'E02000306',
        '2HH' => 'E02000309',
        '2HJ' => 'E02000306',
        '2HL' => 'E02000306',
        '2HN' => 'E02000306',
        '2HP' => 'E02000309',
        '2HQ' => 'E02000309',
        '2HR' => 'E02000306',
        '2HS' => 'E02000306',
        '2HT' => 'E02000306',
        '2HU' => 'E02000306',
        '2HW' => 'E02000309',
        '2HX' => 'E02000309',
        '2HY' => 'E02000306',
        '2HZ' => 'E02000309',
        '2JA' => 'E02000309',
        '2JB' => 'E02000309',
        '2JD' => 'E02000309',
        '2JE' => 'E02000309',
        '2JF' => 'E02000309',
        '2JG' => 'E02000303',
        '2JH' => 'E02000309',
        '2JJ' => 'E02000309',
        '2JL' => 'E02000309',
        '2JN' => 'E02000309',
        '2JP' => 'E02000309',
        '2JQ' => 'E02000309',
        '2JR' => 'E02000309',
        '2JS' => 'E02000309',
        '2JT' => 'E02000309',
        '2JU' => 'E02000309',
        '2JW' => 'E02000309',
        '2JX' => 'E02000309',
        '2JY' => 'E02000309',
        '2JZ' => 'E02000309',
        '2LA' => 'E02000309',
        '2LB' => 'E02000309',
        '2LD' => 'E02000309',
        '2LE' => 'E02000309',
        '2LF' => 'E02000309',
        '2LG' => 'E02000309',
        '2LH' => 'E02000309',
        '2LJ' => 'E02000309',
        '2LL' => 'E02000309',
        '2LN' => 'E02000306',
        '2LP' => 'E02000306',
        '2LQ' => 'E02000309',
        '2LR' => 'E02000306',
        '2LS' => 'E02000309',
        '2LT' => 'E02000309',
        '2LU' => 'E02000306',
        '2LW' => 'E02000306',
        '2LX' => 'E02000309',
        '2LY' => 'E02000309',
        '2LZ' => 'E02000309',
        '2NA' => 'E02000306',
        '2NB' => 'E02000306',
        '2ND' => 'E02000306',
        '2NE' => 'E02000306',
        '2NF' => 'E02000306',
        '2NG' => 'E02000306',
        '2NH' => 'E02000306',
        '2NJ' => 'E02000309',
        '2NL' => 'E02000306',
        '2NN' => 'E02000306',
        '2NP' => 'E02000306',
        '2NQ' => 'E02000306',
        '2NR' => 'E02000306',
        '2NS' => 'E02000309',
        '2NT' => 'E02000306',
        '2NU' => 'E02000306',
        '2NW' => 'E02000306',
        '2NX' => 'E02000306',
        '2NY' => 'E02000306',
        '2NZ' => 'E02000306',
        '2PA' => 'E02000306',
        '2PB' => 'E02000306',
        '2PD' => 'E02000306',
        '2PE' => 'E02000306',
        '2PF' => 'E02000309',
        '2PG' => 'E02000306',
        '2PH' => 'E02000303',
        '2PJ' => 'E02000309',
        '2PL' => 'E02000309',
        '2PN' => 'E02000309',
        '2PP' => 'E02000309',
        '2PQ' => 'E02000306',
        '2PR' => 'E02000309',
        '2PS' => 'E02000306',
        '2PT' => 'E02000306',
        '2PU' => 'E02000306',
        '2PW' => 'E02000309',
        '2PX' => 'E02000309',
        '2PY' => 'E02000306',
        '2PZ' => 'E02000309',
        '2QA' => 'E02000309',
        '2QB' => 'E02000309',
        '2QD' => 'E02000309',
        '2QE' => 'E02000309',
        '2QF' => 'E02000309',
        '2QG' => 'E02000309',
        '2QH' => 'E02000309',
        '2QJ' => 'E02000309',
        '2QL' => 'E02000309',
        '2QN' => 'E02000309',
        '2QP' => 'E02000309',
        '2QQ' => 'E02000309',
        '2QR' => 'E02000309',
        '2QS' => 'E02000309',
        '2QT' => 'E02000309',
        '2QU' => 'E02000309',
        '2QW' => 'E02000309',
        '2QX' => 'E02000306',
        '2QY' => 'E02000306',
        '2QZ' => 'E02000306',
        '2RA' => 'E02000309',
        '2RB' => 'E02000309',
        '2RD' => 'E02000309',
        '2RE' => 'E02000309',
        '2RF' => 'E02000309',
        '2RG' => 'E02000309',
        '2RH' => 'E02000309',
        '2RJ' => 'E02000309',
        '2RL' => 'E02000309',
        '2RN' => 'E02000309',
        '2RP' => 'E02000309',
        '2RQ' => 'E02000309',
        '2RR' => 'E02000309',
        '2RS' => 'E02000309',
        '2RT' => 'E02000309',
        '2RU' => 'E02000398',
        '2RW' => 'E02000309',
        '2RX' => 'E02000398',
        '2RY' => 'E02000309',
        '2RZ' => 'E02000309',
        '2SA' => 'E02000309',
        '2SB' => 'E02000309',
        '2SD' => 'E02000309',
        '2SE' => 'E02000309',
        '2SF' => 'E02000309',
        '2SG' => 'E02000309',
        '2SH' => 'E02000309',
        '2SJ' => 'E02000309',
        '2SL' => 'E02000309',
        '2SN' => 'E02000309',
        '2SP' => 'E02006793',
        '2SQ' => 'E02000309',
        '2SR' => 'E02000303',
        '2SS' => 'E02000309',
        '2ST' => 'E02000309',
        '2SU' => 'E02000309',
        '2SW' => 'E02000309',
        '2SX' => 'E02006793',
        '2SY' => 'E02006793',
        '2SZ' => 'E02006793',
        '2TA' => 'E02006793',
        '2TB' => 'E02006793',
        '2TD' => 'E02006793',
        '2TE' => 'E02006793',
        '2TF' => 'E02006793',
        '2TG' => 'E02006793',
        '2TH' => 'E02006793',
        '2TJ' => 'E02006793',
        '2TL' => 'E02006793',
        '2TN' => 'E02000309',
        '2TP' => 'E02006793',
        '2TQ' => 'E02006793',
        '2TR' => 'E02006793',
        '2TS' => 'E02006793',
        '2TT' => 'E02000309',
        '2TU' => 'E02000309',
        '2TW' => 'E02000309',
        '2TX' => 'E02000309',
        '2TY' => 'E02000309',
        '2TZ' => 'E02000309',
        '2UA' => 'E02000303',
        '2UB' => 'E02000303',
        '2UD' => 'E02000303',
        '2UE' => 'E02000303',
        '2UF' => 'E02000303',
        '2UG' => 'E02000303',
        '2UH' => 'E02000303',
        '2UJ' => 'E02000303',
        '2UL' => 'E02000303',
        '2UN' => 'E02000303',
        '2UP' => 'E02000303',
        '2UQ' => 'E02000303',
        '2UR' => 'E02000303',
        '2US' => 'E02000309',
        '2UT' => 'E02000303',
        '2UU' => 'E02000309',
        '2UW' => 'E02000309',
        '2UX' => 'E02000309',
        '2UY' => 'E02000309',
        '2UZ' => 'E02000309',
        '2WA' => 'E02000309',
        '2WB' => 'E02000309',
        '2WD' => 'E02000309',
        '2WE' => 'E02000309',
        '2WF' => 'E02000309',
        '2WG' => 'E02000309',
        '2WH' => 'E02000309',
        '2WJ' => 'E02000309',
        '2WL' => 'E02000309',
        '2WN' => 'E02000309',
        '2WP' => 'E02000309',
        '2WQ' => 'E02000309',
        '2WR' => 'E02000309',
        '2WS' => 'E02000309',
        '2WT' => 'E02000309',
        '2WU' => 'E02000309',
        '2WW' => 'E02000309',
        '2WX' => 'E02000309',
        '2WY' => 'E02000309',
        '2WZ' => 'E02000309',
        '2XA' => 'E02000309',
        '2XB' => 'E02000309',
        '2XD' => 'E02000309',
        '2XE' => 'E02000309',
        '2XF' => 'E02000309',
        '2XG' => 'E02000309',
        '2XH' => 'E02006793',
        '2XJ' => 'E02000309',
        '2XL' => 'E02000309',
        '2XN' => 'E02006793',
        '2XP' => 'E02000309',
        '2XQ' => 'E02000309',
        '2XR' => 'E02000309',
        '2XS' => 'E02000309',
        '2XT' => 'E02006793',
        '2XU' => 'E02000309',
        '2XW' => 'E02000309',
        '2XX' => 'E02006793',
        '2XY' => 'E02006793',
        '2XZ' => 'E02000309',
        '2YA' => 'E02000309',
        '2YB' => 'E02000309',
        '2YD' => 'E02000309',
        '2YE' => 'E02000309',
        '2YF' => 'E02000309',
        '2YG' => 'E02000309',
        '2YH' => 'E02000309',
        '2YJ' => 'E02000309',
        '2YL' => 'E02000309',
        '2YN' => 'E02000306',
        '2YP' => 'E02000309',
        '2YQ' => 'E02000309',
        '2YR' => 'E02000309',
        '2YS' => 'E02000303',
        '2YT' => 'E02000309',
        '2YU' => 'E02000309',
        '2YW' => 'E02000306',
        '2YX' => 'E02000309',
        '2YY' => 'E02000309',
        '2YZ' => 'E02000309',
        '2ZA' => 'E02000309',
        '2ZB' => 'E02000309',
        '2ZD' => 'E02000309',
        '2ZE' => 'E02000309',
        '2ZF' => 'E02000309',
        '2ZG' => 'E02000309',
        '2ZH' => 'E02000309',
        '2ZJ' => 'E02000309',
        '2ZL' => 'E02000309',
        '2ZN' => 'E02000309',
        '2ZP' => 'E02000309',
        '2ZQ' => 'E02000309',
        '2ZR' => 'E02000309',
        '2ZS' => 'E02000309',
        '2ZT' => 'E02000309',
        '2ZU' => 'E02000309',
        '2ZW' => 'E02000309',
        '3AA' => 'E02000306',
        '3AB' => 'E02000306',
        '3AD' => 'E02000306',
        '3AE' => 'E02000306',
        '3AF' => 'E02000306',
        '3AG' => 'E02000306',
        '3AH' => 'E02000306',
        '3AJ' => 'E02000306',
        '3AL' => 'E02000306',
        '3AN' => 'E02000309',
        '3AP' => 'E02000306',
        '3AQ' => 'E02000306',
        '3AR' => 'E02000306',
        '3AS' => 'E02000306',
        '3AT' => 'E02000306',
        '3AU' => 'E02000306',
        '3AW' => 'E02000306',
        '3AX' => 'E02000306',
        '3AY' => 'E02000306',
        '3AZ' => 'E02000306',
        '3BA' => 'E02000306',
        '3BB' => 'E02000306',
        '3BD' => 'E02000306',
        '3BE' => 'E02000306',
        '3BF' => 'E02000306',
        '3BG' => 'E02000306',
        '3BH' => 'E02000306',
        '3BJ' => 'E02000306',
        '3BL' => 'E02000306',
        '3BP' => 'E02000309',
        '3BQ' => 'E02000306',
        '3BS' => 'E02000306',
        '3BW' => 'E02000309',
        '3BX' => 'E02000306',
        '3BY' => 'E02000309',
        '3BZ' => 'E02000309',
        '3DA' => 'E02000306',
        '3DB' => 'E02000306',
        '3DD' => 'E02000306',
        '3DE' => 'E02000306',
        '3DF' => 'E02000306',
        '3DG' => 'E02000306',
        '3DH' => 'E02000306',
        '3DJ' => 'E02000306',
        '3DN' => 'E02000306',
        '3DQ' => 'E02000306',
        '3DR' => 'E02000306',
        '3DU' => 'E02000306',
        '3DW' => 'E02000306',
        '3DX' => 'E02000306',
        '3DZ' => 'E02000306',
        '3EA' => 'E02000306',
        '3HA' => 'E02000309',
        '3HB' => 'E02000309',
        '3HD' => 'E02000309',
        '3HE' => 'E02000309',
        '3HF' => 'E02000309',
        '3HG' => 'E02000309',
        '3HJ' => 'E02000309',
        '3HL' => 'E02000309',
        '3HN' => 'E02000309',
        '3HP' => 'E02000309',
        '3HQ' => 'E02000309',
        '3HR' => 'E02000309',
        '3HT' => 'E02000309',
        '3HU' => 'E02000309',
        '3HW' => 'E02000309',
        '3HY' => 'E02000309',
        '3JD' => 'E02000309',
        '3JH' => 'E02000309',
        '3JL' => 'E02000309',
        '3JR' => 'E02000309',
        '3JT' => 'E02000309',
        '3LA' => 'E02000309',
        '3LD' => 'E02000309',
        '3LG' => 'E02000309',
        '3LH' => 'E02000309',
        '3LP' => 'E02000309',
        '3LR' => 'E02000309',
        '3PA' => 'E02000306',
        '3PB' => 'E02000306',
        '3PD' => 'E02000306',
        '3PE' => 'E02000306',
        '3PG' => 'E02000306',
        '3PH' => 'E02000306',
        '3PJ' => 'E02000306',
        '3PL' => 'E02000306',
        '3PN' => 'E02000306',
        '3PP' => 'E02000306',
        '3PQ' => 'E02000306',
        '3PR' => 'E02000306',
        '3PS' => 'E02000306',
        '3PT' => 'E02000306',
        '3PU' => 'E02000306',
        '3QA' => 'E02000309',
        '3QB' => 'E02000309',
        '3QH' => 'E02000309',
        '3QJ' => 'E02000309',
        '3QL' => 'E02000309',
        '3QN' => 'E02000309',
        '3QP' => 'E02000309',
        '3QQ' => 'E02000309',
        '3QR' => 'E02000309',
        '3QS' => 'E02000309',
        '3QT' => 'E02000309',
        '3QU' => 'E02000309',
        '3QW' => 'E02000309',
        '3QX' => 'E02000309',
        '3SB' => 'E02000309',
        '3WA' => 'E02000306',
        '3WB' => 'E02000306',
        '3WD' => 'E02000309',
        '3WE' => 'E02000309',
        '3WX' => 'E02000309',
        '3WY' => 'E02000309',
        '3WZ' => 'E02000309',
        '3YH' => 'E02000309',
        '9AB' => 'E02000309',
        '9AD' => 'E02000309',
        '9AN' => 'E02000309',
        '9AQ' => 'E02000309',
        '9AW' => 'E02000309',
        '9AX' => 'E02000309',
        '9AY' => 'E02000309',
        '9AZ' => 'E02000309',
        '9BA' => 'E02000309',
        '9BD' => 'E02000309',
        '9BE' => 'E02000309',
        '9BF' => 'E02000309',
        '9BG' => 'E02000309',
        '9BH' => 'E02000309',
        '9BJ' => 'E02000309',
        '9BL' => 'E02000309',
        '9BN' => 'E02000309',
        '9BP' => 'E02000309',
        '9BQ' => 'E02000309',
        '9BR' => 'E02000309',
        '9BS' => 'E02000309',
        '9BT' => 'E02000309',
        '9BU' => 'E02000309',
        '9BW' => 'E02000309',
        '9BX' => 'E02000309',
        '9BY' => 'E02000309',
        '9BZ' => 'E02000309',
        '9DA' => 'E02000309',
        '9DB' => 'E02000309',
        '9DD' => 'E02000309',
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
