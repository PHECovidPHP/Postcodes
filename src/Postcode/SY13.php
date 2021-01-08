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
final class SY13
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02006015',
        '1AB' => 'E02006015',
        '1AD' => 'E02006015',
        '1AE' => 'E02006015',
        '1AF' => 'E02006015',
        '1AG' => 'E02006015',
        '1AH' => 'E02006015',
        '1AJ' => 'E02006015',
        '1AL' => 'E02006015',
        '1AN' => 'E02006015',
        '1AP' => 'E02006015',
        '1AQ' => 'E02006015',
        '1AR' => 'E02006015',
        '1AS' => 'E02006015',
        '1AT' => 'E02006015',
        '1AU' => 'E02006015',
        '1AW' => 'E02006015',
        '1AX' => 'E02006015',
        '1AY' => 'E02006015',
        '1AZ' => 'E02006015',
        '1BA' => 'E02006015',
        '1BB' => 'E02006015',
        '1BD' => 'E02006015',
        '1BE' => 'E02006015',
        '1BF' => 'E02006015',
        '1BG' => 'E02006015',
        '1BH' => 'E02006015',
        '1BJ' => 'E02006015',
        '1BL' => 'E02006015',
        '1BN' => 'E02006015',
        '1BP' => 'E02006015',
        '1BQ' => 'E02006015',
        '1BS' => 'E02006015',
        '1BT' => 'E02006015',
        '1BU' => 'E02006015',
        '1BW' => 'E02006015',
        '1BX' => 'E02006015',
        '1BY' => 'E02006015',
        '1BZ' => 'E02006015',
        '1DA' => 'E02006015',
        '1DB' => 'E02006015',
        '1DD' => 'E02006015',
        '1DE' => 'E02006015',
        '1DF' => 'E02006015',
        '1DG' => 'E02006015',
        '1DH' => 'E02006015',
        '1DJ' => 'E02006015',
        '1DL' => 'E02006015',
        '1DN' => 'E02006015',
        '1DP' => 'E02006015',
        '1DQ' => 'E02006015',
        '1DR' => 'E02006015',
        '1DS' => 'E02006015',
        '1DT' => 'E02006015',
        '1DU' => 'E02006015',
        '1DW' => 'E02006015',
        '1DX' => 'E02006015',
        '1DY' => 'E02006015',
        '1DZ' => 'E02006015',
        '1EA' => 'E02006015',
        '1EB' => 'E02006015',
        '1ED' => 'E02006015',
        '1EE' => 'E02006015',
        '1EF' => 'E02006015',
        '1EG' => 'E02006015',
        '1EH' => 'E02006015',
        '1EJ' => 'E02006015',
        '1EL' => 'E02006015',
        '1EN' => 'E02006015',
        '1EP' => 'E02006015',
        '1EQ' => 'E02006015',
        '1ER' => 'E02006015',
        '1ES' => 'E02006015',
        '1ET' => 'E02006015',
        '1EU' => 'E02006015',
        '1EW' => 'E02006015',
        '1EX' => 'E02006015',
        '1EY' => 'E02006015',
        '1EZ' => 'E02006015',
        '1FA' => 'E02006015',
        '1FB' => 'E02006015',
        '1FD' => 'E02006015',
        '1FE' => 'E02006015',
        '1FF' => 'E02006015',
        '1FG' => 'E02006015',
        '1FN' => 'E02006015',
        '1GA' => 'E02006015',
        '1GR' => 'E02006015',
        '1GT' => 'E02006015',
        '1GU' => 'E02006015',
        '1GW' => 'E02006015',
        '1GX' => 'E02006015',
        '1GY' => 'E02006015',
        '1GZ' => 'E02006015',
        '1HA' => 'E02006015',
        '1HB' => 'E02006015',
        '1HD' => 'E02006015',
        '1HE' => 'E02006015',
        '1HF' => 'E02006015',
        '1HG' => 'E02006015',
        '1HH' => 'E02006015',
        '1HJ' => 'E02006015',
        '1HL' => 'E02006015',
        '1HN' => 'E02006015',
        '1HP' => 'E02006015',
        '1HQ' => 'E02006015',
        '1HR' => 'E02006015',
        '1HS' => 'E02006015',
        '1HT' => 'E02006015',
        '1HU' => 'E02006015',
        '1HW' => 'E02006015',
        '1HX' => 'E02006015',
        '1HY' => 'E02006015',
        '1HZ' => 'E02006015',
        '1JA' => 'E02006015',
        '1JB' => 'E02006015',
        '1JD' => 'E02006015',
        '1JE' => 'E02006015',
        '1JF' => 'E02006015',
        '1JG' => 'E02006015',
        '1JH' => 'E02006015',
        '1JJ' => 'E02006015',
        '1JL' => 'E02006015',
        '1JN' => 'E02006015',
        '1JP' => 'E02006015',
        '1JQ' => 'E02006015',
        '1JR' => 'E02006015',
        '1JS' => 'E02006015',
        '1JT' => 'E02006015',
        '1JU' => 'E02006015',
        '1JW' => 'E02006015',
        '1JX' => 'E02006015',
        '1JY' => 'E02006015',
        '1JZ' => 'E02006015',
        '1LA' => 'E02006015',
        '1LB' => 'E02006015',
        '1LD' => 'E02006015',
        '1LE' => 'E02006015',
        '1LF' => 'E02006015',
        '1LG' => 'E02006015',
        '1LH' => 'E02006015',
        '1LJ' => 'E02006015',
        '1LL' => 'E02006015',
        '1LN' => 'E02006015',
        '1LP' => 'E02006015',
        '1LQ' => 'E02006015',
        '1LR' => 'E02006015',
        '1LS' => 'E02006015',
        '1LT' => 'E02006015',
        '1LU' => 'E02006015',
        '1LW' => 'E02006015',
        '1LX' => 'E02006015',
        '1LY' => 'E02006015',
        '1LZ' => 'E02006015',
        '1NA' => 'E02006015',
        '1NB' => 'E02006015',
        '1ND' => 'E02006015',
        '1NE' => 'E02006015',
        '1NF' => 'E02006015',
        '1NG' => 'E02006015',
        '1NH' => 'E02006015',
        '1NJ' => 'E02006015',
        '1NL' => 'E02006015',
        '1NN' => 'E02006015',
        '1NP' => 'E02006015',
        '1NQ' => 'E02006015',
        '1NR' => 'E02006015',
        '1NS' => 'E02006015',
        '1NT' => 'E02006015',
        '1NU' => 'E02006015',
        '1NW' => 'E02006015',
        '1NX' => 'E02006015',
        '1NY' => 'E02006015',
        '1NZ' => 'E02006015',
        '1PA' => 'E02006015',
        '1PB' => 'E02006015',
        '1PD' => 'E02006015',
        '1PE' => 'E02006015',
        '1PF' => 'E02006015',
        '1PG' => 'E02006015',
        '1PH' => 'E02006015',
        '1PJ' => 'E02006015',
        '1PL' => 'E02006015',
        '1PN' => 'E02006015',
        '1PP' => 'E02006015',
        '1PQ' => 'E02006015',
        '1PR' => 'E02006015',
        '1PS' => 'E02006015',
        '1PT' => 'E02006015',
        '1PU' => 'E02006015',
        '1PW' => 'E02006015',
        '1PX' => 'E02006015',
        '1PY' => 'E02006015',
        '1PZ' => 'E02006015',
        '1QA' => 'E02006015',
        '1QB' => 'E02006015',
        '1QD' => 'E02006015',
        '1QE' => 'E02006015',
        '1QF' => 'E02006015',
        '1QG' => 'E02006015',
        '1QH' => 'E02006015',
        '1QJ' => 'E02006015',
        '1QL' => 'E02006015',
        '1QN' => 'E02006015',
        '1QP' => 'E02006015',
        '1QQ' => 'E02006015',
        '1QR' => 'E02006015',
        '1QS' => 'E02006015',
        '1QT' => 'E02006015',
        '1QU' => 'E02006015',
        '1QW' => 'E02006015',
        '1QX' => 'E02006015',
        '1QY' => 'E02006015',
        '1QZ' => 'E02006015',
        '1RA' => 'E02006015',
        '1RB' => 'E02006015',
        '1RD' => 'E02006015',
        '1RE' => 'E02006015',
        '1RF' => 'E02006015',
        '1RG' => 'E02006015',
        '1RH' => 'E02006015',
        '1RJ' => 'E02006015',
        '1RL' => 'E02006015',
        '1RN' => 'E02006015',
        '1RP' => 'E02006015',
        '1RQ' => 'E02006015',
        '1RR' => 'E02006015',
        '1RS' => 'E02006015',
        '1RT' => 'E02006015',
        '1RU' => 'E02006015',
        '1RW' => 'E02006015',
        '1RX' => 'E02006015',
        '1RY' => 'E02006015',
        '1RZ' => 'E02006015',
        '1SA' => 'E02006015',
        '1SB' => 'E02006015',
        '1SD' => 'E02006015',
        '1SE' => 'E02006015',
        '1SF' => 'E02006015',
        '1SG' => 'E02006015',
        '1SH' => 'E02006015',
        '1SJ' => 'E02006015',
        '1SL' => 'E02006015',
        '1SN' => 'E02006015',
        '1SP' => 'E02006015',
        '1SQ' => 'E02006015',
        '1SR' => 'E02006015',
        '1SS' => 'E02006015',
        '1ST' => 'E02006015',
        '1SU' => 'E02006015',
        '1SW' => 'E02006015',
        '1SX' => 'E02006015',
        '1SY' => 'E02006015',
        '1SZ' => 'E02006015',
        '1TA' => 'E02006015',
        '1TB' => 'E02006015',
        '1TD' => 'E02006015',
        '1TE' => 'E02006015',
        '1TF' => 'E02006015',
        '1TG' => 'E02006015',
        '1TH' => 'E02006015',
        '1TJ' => 'E02006015',
        '1TL' => 'E02006015',
        '1TN' => 'E02006015',
        '1TP' => 'E02006015',
        '1TQ' => 'E02006015',
        '1TR' => 'E02006015',
        '1TS' => 'E02006015',
        '1TT' => 'E02006015',
        '1TU' => 'E02006015',
        '1TW' => 'E02006015',
        '1TX' => 'E02006015',
        '1TY' => 'E02006015',
        '1TZ' => 'E02006015',
        '1UA' => 'E02006015',
        '1UB' => 'E02006015',
        '1UD' => 'E02006015',
        '1UE' => 'E02006015',
        '1UF' => 'E02006015',
        '1UG' => 'E02006015',
        '1UH' => 'E02006015',
        '1UJ' => 'E02006015',
        '1UL' => 'E02006015',
        '1UN' => 'E02006015',
        '1UP' => 'E02006015',
        '1UQ' => 'E02006015',
        '1UR' => 'E02006015',
        '1UT' => 'E02006015',
        '1UU' => 'E02006015',
        '1UW' => 'E02006015',
        '1UX' => 'E02006015',
        '1UY' => 'E02006015',
        '1UZ' => 'E02006015',
        '1WA' => 'E02006015',
        '1WB' => 'E02006015',
        '1WD' => 'E02006015',
        '1WE' => 'E02006015',
        '1WF' => 'E02006015',
        '1WG' => 'E02006015',
        '1WH' => 'E02006015',
        '1WJ' => 'E02006015',
        '1WL' => 'E02006015',
        '1WN' => 'E02006015',
        '1WP' => 'E02006015',
        '1WQ' => 'E02006015',
        '1WR' => 'E02006015',
        '1WS' => 'E02006015',
        '1WT' => 'E02006015',
        '1WU' => 'E02006015',
        '1WW' => 'E02006015',
        '1WX' => 'E02006015',
        '1WY' => 'E02006015',
        '1WZ' => 'E02006015',
        '1XA' => 'E02006015',
        '1XB' => 'E02006015',
        '1XD' => 'E02006015',
        '1XE' => 'E02006015',
        '1XR' => 'E02006015',
        '1XS' => 'E02006015',
        '1XT' => 'E02006015',
        '1XU' => 'E02006015',
        '1XW' => 'E02006015',
        '1XX' => 'E02006015',
        '1XY' => 'E02006015',
        '1XZ' => 'E02006015',
        '1YB' => 'E02006015',
        '1YR' => 'E02006015',
        '1YY' => 'E02006015',
        '1YZ' => 'E02006015',
        '1ZD' => 'E02006015',
        '1ZZ' => 'E02006015',
        '2AA' => 'E02006015',
        '2AB' => 'E02006016',
        '2AD' => 'E02006016',
        '2AE' => 'E02006016',
        '2AF' => 'E02006016',
        '2AG' => 'E02006016',
        '2AH' => 'E02006016',
        '2AJ' => 'E02006016',
        '2AL' => 'E02006016',
        '2AN' => 'E02006016',
        '2AP' => 'E02006016',
        '2AQ' => 'E02006015',
        '2AR' => 'E02006016',
        '2AS' => 'E02006016',
        '2AT' => 'E02006016',
        '2AU' => 'E02006016',
        '2AW' => 'E02006016',
        '2AX' => 'E02006016',
        '2AY' => 'E02006016',
        '2AZ' => 'E02006016',
        '2BA' => 'E02006016',
        '2BB' => 'E02006016',
        '2BD' => 'E02006016',
        '2BE' => 'E02006016',
        '2BF' => 'E02006016',
        '2BG' => 'E02006016',
        '2BH' => 'E02006022',
        '2BJ' => 'E02006016',
        '2BL' => 'E02006016',
        '2BN' => 'E02006016',
        '2BP' => 'E02006016',
        '2BQ' => 'E02006016',
        '2BS' => 'E02006016',
        '2BT' => 'E02006016',
        '2BU' => 'E02006016',
        '2BW' => 'E02006016',
        '2BX' => 'E02006016',
        '2BY' => 'E02006015',
        '2BZ' => 'E02006016',
        '2DA' => 'E02006016',
        '2DB' => 'E02006016',
        '2DD' => 'E02006016',
        '2DE' => 'E02006016',
        '2DF' => 'E02006016',
        '2DG' => 'E02006016',
        '2DH' => 'E02006016',
        '2DJ' => 'E02006016',
        '2DL' => 'E02006016',
        '2DN' => 'E02006016',
        '2DP' => 'E02006016',
        '2DQ' => 'E02006016',
        '2DR' => 'E02006016',
        '2DS' => 'E02006016',
        '2DT' => 'E02006016',
        '2DU' => 'E02006016',
        '2DW' => 'E02006016',
        '2DX' => 'E02006016',
        '2DY' => 'E02006021',
        '2DZ' => 'E02006016',
        '2EA' => 'E02006016',
        '2EB' => 'E02006016',
        '2ED' => 'E02006016',
        '2EE' => 'E02006016',
        '2EF' => 'E02006016',
        '2EG' => 'E02006016',
        '2EH' => 'E02006016',
        '2EJ' => 'E02006016',
        '2EL' => 'E02006016',
        '2EN' => 'E02006016',
        '2EP' => 'E02006016',
        '2EQ' => 'E02006016',
        '2ER' => 'E02006016',
        '2ES' => 'E02006016',
        '2ET' => 'E02006016',
        '2EU' => 'E02006016',
        '2EW' => 'E02006016',
        '2EX' => 'E02006016',
        '2EY' => 'E02006016',
        '2EZ' => 'E02006016',
        '2FA' => 'E02006016',
        '2FB' => 'E02006016',
        '2FD' => 'E02006016',
        '2FE' => 'E02006016',
        '2FF' => 'E02006015',
        '2FG' => 'E02006016',
        '2GA' => 'E02006016',
        '2HA' => 'E02006016',
        '2HB' => 'E02006016',
        '2HD' => 'E02006016',
        '2HE' => 'E02006016',
        '2HF' => 'E02006016',
        '2HG' => 'E02006016',
        '2HH' => 'E02006016',
        '2HJ' => 'E02006016',
        '2HL' => 'E02006016',
        '2HN' => 'E02006016',
        '2HP' => 'E02006016',
        '2HQ' => 'E02006016',
        '2HR' => 'E02006016',
        '2HS' => 'E02006016',
        '2HT' => 'E02006016',
        '2HU' => 'E02006016',
        '2HW' => 'E02006016',
        '2HX' => 'E02006016',
        '2HY' => 'E02006016',
        '2HZ' => 'E02006016',
        '2JA' => 'E02006016',
        '2JB' => 'E02006016',
        '2JD' => 'E02006016',
        '2JE' => 'E02006016',
        '2JF' => 'E02006016',
        '2JG' => 'E02006016',
        '2JL' => 'E02006016',
        '2JY' => 'E02006016',
        '2LF' => 'E02006017',
        '2LG' => 'E02006017',
        '2LH' => 'E02006017',
        '2LT' => 'E02006021',
        '2LZ' => 'E02006016',
        '2NA' => 'E02006021',
        '2NB' => 'E02006021',
        '2ND' => 'E02006021',
        '2NE' => 'E02006021',
        '2NF' => 'E02006021',
        '2NG' => 'E02006021',
        '2NH' => 'E02006021',
        '2NJ' => 'E02006021',
        '2NL' => 'E02006021',
        '2NN' => 'E02006016',
        '2NP' => 'E02006016',
        '2NQ' => 'E02006021',
        '2NR' => 'E02006021',
        '2NS' => 'E02006021',
        '2NT' => 'E02006021',
        '2NU' => 'E02006021',
        '2NW' => 'E02006021',
        '2NX' => 'E02006021',
        '2NY' => 'E02006021',
        '2NZ' => 'E02006016',
        '2PA' => 'E02006021',
        '2PD' => 'E02006021',
        '2PE' => 'E02006021',
        '2PF' => 'E02006021',
        '2PG' => 'E02006021',
        '2PH' => 'E02006021',
        '2PP' => 'E02006021',
        '2PQ' => 'E02006021',
        '2PR' => 'E02006021',
        '2PS' => 'E02006021',
        '2PT' => 'E02006021',
        '2PU' => 'E02006021',
        '2PX' => 'E02006021',
        '2PY' => 'E02006021',
        '2PZ' => 'E02006021',
        '2QA' => 'E02006021',
        '2QB' => 'E02006021',
        '2QD' => 'E02006021',
        '2QE' => 'E02006021',
        '2QF' => 'E02006021',
        '2QG' => 'E02006021',
        '2QH' => 'E02006021',
        '2QJ' => 'E02006021',
        '2QL' => 'E02006021',
        '2QN' => 'E02006021',
        '2QP' => 'E02006021',
        '2QQ' => 'E02006021',
        '2QR' => 'E02006021',
        '2QS' => 'E02006021',
        '2QU' => 'E02006021',
        '2QW' => 'E02006021',
        '2QX' => 'E02006021',
        '2QY' => 'E02006021',
        '2QZ' => 'E02006021',
        '2RA' => 'E02006021',
        '2RB' => 'E02006021',
        '2RD' => 'E02006021',
        '2RE' => 'E02006021',
        '2RF' => 'E02006021',
        '2RL' => 'E02006021',
        '2RN' => 'E02006021',
        '2RP' => 'E02006021',
        '2RR' => 'E02006021',
        '2RS' => 'E02006021',
        '2RT' => 'E02006021',
        '2RU' => 'E02006021',
        '2RW' => 'E02006021',
        '2RX' => 'E02006021',
        '2RY' => 'E02006021',
        '2RZ' => 'E02006021',
        '2SA' => 'E02006021',
        '2SB' => 'E02006021',
        '2SD' => 'E02006021',
        '2SE' => 'E02006021',
        '2SF' => 'E02006021',
        '2SG' => 'E02006021',
        '2SH' => 'E02006021',
        '2SJ' => 'E02006021',
        '2SQ' => 'E02006021',
        '2TA' => 'E02006016',
        '2TB' => 'E02006016',
        '2WA' => 'E02006015',
        '2WB' => 'E02006015',
        '2WD' => 'E02006015',
        '2WE' => 'E02006016',
        '2WF' => 'E02006015',
        '2WG' => 'E02006016',
        '2WH' => 'E02006015',
        '2WJ' => 'E02006016',
        '2WL' => 'E02006016',
        '2WN' => 'E02006015',
        '2WP' => 'E02006016',
        '2WQ' => 'E02006015',
        '2WR' => 'E02006015',
        '2WS' => 'E02006015',
        '2WT' => 'E02006015',
        '2WU' => 'E02006015',
        '2WW' => 'E02006015',
        '2WX' => 'E02006015',
        '2WY' => 'E02006015',
        '2WZ' => 'E02006015',
        '2XZ' => 'E02006015',
        '2YY' => 'E02006015',
        '2ZQ' => 'E02006015',
        '3AA' => 'E02006015',
        '3AB' => 'E02006015',
        '3JG' => 'E02006015',
        '3JH' => 'E02006016',
        '3JJ' => 'E02006016',
        '3JL' => 'E02006016',
        '3JN' => 'E02006016',
        '3JP' => 'E02006016',
        '3JQ' => 'E02006015',
        '3JR' => 'E02006016',
        '3JS' => 'E02006016',
        '3JT' => 'E02006016',
        '3JU' => 'E02006016',
        '3JW' => 'E02006016',
        '3JX' => 'E02006016',
        '3JY' => 'E02006016',
        '3JZ' => 'E02006016',
        '3LA' => 'E02006016',
        '3LB' => 'E02006016',
        '3LD' => 'E02006016',
        '3LE' => 'E02006016',
        '3LF' => 'E02006016',
        '3LG' => 'E02006016',
        '3LH' => 'E02006021',
        '3LJ' => 'E02006021',
        '3LL' => 'E02006021',
        '3LN' => 'E02006021',
        '3LP' => 'E02006016',
        '3LQ' => 'E02006021',
        '3LR' => 'E02006021',
        '3LS' => 'E02006021',
        '3LT' => 'E02006021',
        '3LU' => 'E02006021',
        '3LW' => 'E02006021',
        '3LX' => 'E02006021',
        '3LY' => 'E02006016',
        '3NE' => 'E02006016',
        '3NF' => 'E02006016',
        '3NG' => 'E02006016',
        '3NH' => 'E02006016',
        '3NJ' => 'E02006016',
        '3NL' => 'E02006016',
        '3NN' => 'E02006016',
        '3NP' => 'E02006016',
        '3NQ' => 'E02006016',
        '3NR' => 'E02006016',
        '3NS' => 'E02006016',
        '3NT' => 'E02006016',
        '3NU' => 'E02006016',
        '3NW' => 'E02006016',
        '3NX' => 'E02006016',
        '3NY' => 'E02006015',
        '3PF' => 'E02006015',
        '3PG' => 'E02006016',
        '3WA' => 'E02006015',
        '3WD' => 'E02006015',
        '3WF' => 'E02006015',
        '3WG' => 'E02006016',
        '3WH' => 'E02006015',
        '3WJ' => 'E02006015',
        '3WX' => 'E02006015',
        '3WY' => 'E02006015',
        '3WZ' => 'E02006015',
        '3XF' => 'E02006015',
        '3YF' => 'E02006015',
        '4AA' => 'E02006015',
        '4AB' => 'E02006016',
        '4AD' => 'E02006016',
        '4AE' => 'E02006016',
        '4AF' => 'E02006016',
        '4AG' => 'E02006016',
        '4AH' => 'E02003840',
        '4AJ' => 'E02003840',
        '4AL' => 'E02003840',
        '4AN' => 'E02003840',
        '4AP' => 'E02003840',
        '4AQ' => 'E02006016',
        '4AR' => 'E02003840',
        '4AS' => 'E02003840',
        '4AT' => 'E02003840',
        '4AU' => 'E02003840',
        '4AW' => 'E02003840',
        '4AX' => 'E02003840',
        '4AY' => 'E02003840',
        '4AZ' => 'E02003840',
        '4BA' => 'E02003840',
        '4BB' => 'E02003840',
        '4BD' => 'E02003840',
        '4BE' => 'E02003840',
        '4BF' => 'E02006016',
        '4BG' => 'E02003840',
        '4BH' => 'E02006016',
        '4BJ' => 'E02003840',
        '4BL' => 'E02006016',
        '4BN' => 'E02006016',
        '4BP' => 'E02006016',
        '4BQ' => 'E02003840',
        '4BS' => 'E02006016',
        '4BT' => 'E02006016',
        '4BU' => 'E02006016',
        '4BW' => 'E02006016',
        '4BX' => 'E02006016',
        '4BY' => 'E02006016',
        '4BZ' => 'E02006016',
        '4DA' => 'E02003840',
        '4DB' => 'E02006016',
        '4DD' => 'E02003840',
        '4DE' => 'E02006015',
        '4DF' => 'E02006016',
        '4DG' => 'E02006016',
        '4DH' => 'E02006016',
        '4DJ' => 'E02006016',
        '4DL' => 'E02006016',
        '4DN' => 'E02006016',
        '4DP' => 'E02006016',
        '4DQ' => 'E02006016',
        '4DR' => 'E02006016',
        '4DS' => 'E02006016',
        '4DT' => 'E02006016',
        '4DU' => 'E02006016',
        '4DW' => 'E02006016',
        '4DX' => 'E02006016',
        '4DY' => 'E02006016',
        '4DZ' => 'E02006016',
        '4EA' => 'E02006016',
        '4EB' => 'E02003810',
        '4ED' => 'E02006016',
        '4EE' => 'E02006016',
        '4EF' => 'E02006016',
        '4EG' => 'E02006016',
        '4EH' => 'E02006016',
        '4EJ' => 'E02006016',
        '4EL' => 'E02006016',
        '4EN' => 'E02006016',
        '4EP' => 'E02006016',
        '4EQ' => 'E02006016',
        '4ER' => 'E02006016',
        '4ES' => 'E02006016',
        '4ET' => 'E02006016',
        '4EU' => 'E02006016',
        '4EW' => 'E02006016',
        '4HA' => 'E02006015',
        '4HB' => 'E02006015',
        '4HD' => 'E02003840',
        '4HE' => 'E02003840',
        '4HF' => 'E02003810',
        '4HG' => 'E02003840',
        '4HH' => 'E02003810',
        '4HJ' => 'E02006015',
        '4HL' => 'E02003840',
        '4HN' => 'E02006015',
        '4HP' => 'E02003840',
        '4HQ' => 'E02003810',
        '4HR' => 'E02003840',
        '4HS' => 'E02003840',
        '4HT' => 'E02003840',
        '4HU' => 'E02003840',
        '4HW' => 'E02003840',
        '4HX' => 'E02003840',
        '4HY' => 'E02003840',
        '4HZ' => 'E02003840',
        '4JA' => 'E02003840',
        '4JB' => 'E02003840',
        '4JD' => 'E02003840',
        '4JE' => 'E02003810',
        '4JF' => 'E02003810',
        '4JG' => 'E02003810',
        '4JH' => 'E02003810',
        '4JJ' => 'E02003840',
        '4JL' => 'E02006015',
        '4JN' => 'E02006015',
        '4JP' => 'E02006015',
        '4JQ' => 'E02003810',
        '4JR' => 'E02006015',
        '4JS' => 'E02006015',
        '4JT' => 'E02006015',
        '4JU' => 'E02006015',
        '4JW' => 'E02003840',
        '4JX' => 'E02006015',
        '4JY' => 'E02006015',
        '4JZ' => 'E02006015',
        '4LA' => 'E02003840',
        '4LB' => 'E02003840',
        '4LD' => 'E02003840',
        '4LE' => 'E02003840',
        '4LF' => 'E02003840',
        '4LG' => 'E02003840',
        '4LH' => 'E02003840',
        '4LJ' => 'E02003840',
        '4LL' => 'E02003840',
        '4LN' => 'E02003840',
        '4LP' => 'E02003840',
        '4LQ' => 'E02003840',
        '4LR' => 'E02006015',
        '4LS' => 'E02003840',
        '4LT' => 'E02003840',
        '4LU' => 'E02003840',
        '4LW' => 'E02003840',
        '4LX' => 'E02003840',
        '4LY' => 'E02003840',
        '4LZ' => 'E02006015',
        '4NA' => 'E02003840',
        '4NB' => 'E02006015',
        '4ND' => 'E02003840',
        '4NE' => 'E02003840',
        '4NG' => 'E02006015',
        '4NH' => 'E02006015',
        '4NJ' => 'E02006015',
        '4NL' => 'E02006015',
        '4NN' => 'E02006016',
        '4NP' => 'E02006016',
        '4NQ' => 'E02006015',
        '4NR' => 'E02006016',
        '4NS' => 'E02006016',
        '4NT' => 'E02006016',
        '4NU' => 'E02006016',
        '4NW' => 'E02006016',
        '4NX' => 'E02006016',
        '4NY' => 'E02006016',
        '4NZ' => 'E02006016',
        '4PA' => 'E02006016',
        '4PB' => 'E02006016',
        '4PD' => 'E02006016',
        '4PE' => 'E02006016',
        '4PF' => 'E02006016',
        '4PG' => 'E02006016',
        '4PH' => 'E02006016',
        '4PJ' => 'E02006016',
        '4PL' => 'E02006016',
        '4PN' => 'E02006016',
        '4PP' => 'E02006016',
        '4PQ' => 'E02006016',
        '4PR' => 'E02006016',
        '4PS' => 'E02006016',
        '4PT' => 'E02006016',
        '4PU' => 'E02006016',
        '4PW' => 'E02006016',
        '4PX' => 'E02006016',
        '4PY' => 'E02006016',
        '4PZ' => 'E02006016',
        '4QA' => 'E02006016',
        '4QB' => 'E02006016',
        '4QG' => 'E02006015',
        '4QH' => 'E02006015',
        '4QJ' => 'E02006015',
        '4QL' => 'E02003810',
        '4QN' => 'E02003810',
        '4QP' => 'E02003810',
        '4QQ' => 'E02006015',
        '4QR' => 'E02003810',
        '4QS' => 'E02003810',
        '4QT' => 'E02003810',
        '4QU' => 'E02003810',
        '4QW' => 'E02003810',
        '4QX' => 'E02003810',
        '4QY' => 'E02003810',
        '4QZ' => 'E02003810',
        '4RA' => 'E02003810',
        '4RB' => 'E02003810',
        '4RD' => 'E02003810',
        '4RF' => 'E02003810',
        '4RG' => 'E02003810',
        '4RH' => 'E02003810',
        '4WA' => 'E02006015',
        '4WB' => 'E02006015',
        '4WD' => 'E02006015',
        '4WE' => 'E02006015',
        '4WF' => 'E02006015',
        '4WG' => 'E02006015',
        '4WH' => 'E02006015',
        '4WJ' => 'E02006015',
        '4WT' => 'E02006015',
        '4WU' => 'E02006015',
        '4WW' => 'E02006015',
        '4WX' => 'E02006015',
        '4WY' => 'E02006015',
        '9AD' => 'E02006015',
        '9AG' => 'E02006015',
        '9AJ' => 'E02006015',
        '9AP' => 'E02006015',
        '9AQ' => 'E02006015',
        '9AT' => 'E02006015',
        '9AW' => 'E02006015',
        '9BA' => 'E02006015',
        '9BD' => 'E02006015',
        '9BE' => 'E02006015',
        '9BF' => 'E02006015',
        '9BG' => 'E02006015',
        '9BH' => 'E02006015',
        '9BJ' => 'E02006015',
        '9BL' => 'E02006015',
        '9BN' => 'E02006015',
        '9BP' => 'E02006015',
        '9BQ' => 'E02006015',
        '9BR' => 'E02006015',
        '9BS' => 'E02006015',
        '9BT' => 'E02006015',
        '9BU' => 'E02006015',
        '9BW' => 'E02006015',
        '9BX' => 'E02006015',
        '9BY' => 'E02006015',
        '9BZ' => 'E02006015',
        '9DA' => 'E02006015',
        '9DB' => 'E02006015',
        '9DD' => 'E02006015',
        '9DE' => 'E02006015',
        '9DF' => 'E02006015',
        '9DG' => 'E02006015',
        '9DH' => 'E02006015',
        '9DJ' => 'E02006015',
        '9DL' => 'E02006015',
        '9DN' => 'E02006015',
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
