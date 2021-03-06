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
final class B30
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02001942',
        '1AB' => 'E02001942',
        '1AD' => 'E02001942',
        '1AE' => 'E02001942',
        '1AF' => 'E02001942',
        '1AG' => 'E02001942',
        '1AH' => 'E02001942',
        '1AJ' => 'E02001942',
        '1AL' => 'E02001942',
        '1AN' => 'E02001942',
        '1AP' => 'E02001942',
        '1AQ' => 'E02001938',
        '1AR' => 'E02001942',
        '1AS' => 'E02001942',
        '1AT' => 'E02001942',
        '1AU' => 'E02001942',
        '1AX' => 'E02001942',
        '1AY' => 'E02001942',
        '1AZ' => 'E02001942',
        '1BA' => 'E02001942',
        '1BB' => 'E02001942',
        '1BD' => 'E02001942',
        '1BE' => 'E02001942',
        '1BG' => 'E02001942',
        '1BH' => 'E02001942',
        '1BJ' => 'E02001942',
        '1BL' => 'E02001942',
        '1BN' => 'E02001942',
        '1BP' => 'E02001938',
        '1BQ' => 'E02001942',
        '1BU' => 'E02001942',
        '1BW' => 'E02001942',
        '1BX' => 'E02001942',
        '1BY' => 'E02001942',
        '1BZ' => 'E02001942',
        '1DA' => 'E02001942',
        '1DB' => 'E02001938',
        '1DD' => 'E02001942',
        '1DE' => 'E02001942',
        '1DF' => 'E02001942',
        '1DG' => 'E02001942',
        '1DH' => 'E02001942',
        '1DJ' => 'E02001938',
        '1DL' => 'E02001942',
        '1DN' => 'E02001942',
        '1DP' => 'E02001942',
        '1DQ' => 'E02001942',
        '1DR' => 'E02001942',
        '1DS' => 'E02001938',
        '1DT' => 'E02001942',
        '1DU' => 'E02001942',
        '1DW' => 'E02001942',
        '1DX' => 'E02001942',
        '1DY' => 'E02001942',
        '1DZ' => 'E02001942',
        '1EA' => 'E02001942',
        '1EB' => 'E02001942',
        '1ED' => 'E02001942',
        '1EE' => 'E02001942',
        '1EF' => 'E02001942',
        '1EG' => 'E02001942',
        '1EH' => 'E02001939',
        '1EJ' => 'E02001939',
        '1EL' => 'E02001939',
        '1EN' => 'E02001939',
        '1EP' => 'E02001942',
        '1EQ' => 'E02001942',
        '1ER' => 'E02001942',
        '1ES' => 'E02001939',
        '1ET' => 'E02001942',
        '1EU' => 'E02001942',
        '1EW' => 'E02001939',
        '1EX' => 'E02001938',
        '1EY' => 'E02001946',
        '1EZ' => 'E02001942',
        '1GA' => 'E02001942',
        '1HA' => 'E02001946',
        '1HB' => 'E02001939',
        '1HD' => 'E02001939',
        '1HE' => 'E02001939',
        '1HF' => 'E02001939',
        '1HG' => 'E02001939',
        '1HH' => 'E02001938',
        '1HJ' => 'E02001938',
        '1HL' => 'E02001938',
        '1HN' => 'E02001938',
        '1HP' => 'E02001942',
        '1HQ' => 'E02001938',
        '1HR' => 'E02001942',
        '1HS' => 'E02001942',
        '1HT' => 'E02001938',
        '1HU' => 'E02001939',
        '1HW' => 'E02001938',
        '1HX' => 'E02001942',
        '1HY' => 'E02001942',
        '1HZ' => 'E02001942',
        '1JA' => 'E02001942',
        '1JB' => 'E02001942',
        '1JD' => 'E02001942',
        '1JE' => 'E02001942',
        '1JF' => 'E02001938',
        '1JG' => 'E02001942',
        '1JH' => 'E02001942',
        '1JJ' => 'E02001942',
        '1JL' => 'E02001942',
        '1JN' => 'E02001942',
        '1JP' => 'E02001938',
        '1JQ' => 'E02001942',
        '1JR' => 'E02001925',
        '1JS' => 'E02001925',
        '1JT' => 'E02001925',
        '1JU' => 'E02001925',
        '1JW' => 'E02001942',
        '1JX' => 'E02001925',
        '1JY' => 'E02001938',
        '1JZ' => 'E02001938',
        '1LA' => 'E02001938',
        '1LB' => 'E02001938',
        '1LD' => 'E02001938',
        '1LE' => 'E02001938',
        '1LG' => 'E02001938',
        '1LH' => 'E02001938',
        '1LJ' => 'E02001938',
        '1LL' => 'E02001938',
        '1LN' => 'E02001938',
        '1LP' => 'E02001938',
        '1LQ' => 'E02001942',
        '1LR' => 'E02001938',
        '1LS' => 'E02001938',
        '1LT' => 'E02001939',
        '1LU' => 'E02001939',
        '1LW' => 'E02001939',
        '1LX' => 'E02001939',
        '1LY' => 'E02001939',
        '1LZ' => 'E02001939',
        '1NA' => 'E02001939',
        '1NB' => 'E02001938',
        '1NE' => 'E02001938',
        '1NF' => 'E02001938',
        '1NG' => 'E02001942',
        '1NH' => 'E02001938',
        '1NL' => 'E02001938',
        '1NN' => 'E02001942',
        '1NP' => 'E02001942',
        '1NQ' => 'E02001942',
        '1NR' => 'E02001942',
        '1NS' => 'E02001938',
        '1NT' => 'E02001938',
        '1NU' => 'E02001938',
        '1NW' => 'E02001942',
        '1NX' => 'E02001938',
        '1NY' => 'E02001938',
        '1NZ' => 'E02001938',
        '1PA' => 'E02001938',
        '1PB' => 'E02001942',
        '1PD' => 'E02001942',
        '1PE' => 'E02001942',
        '1PF' => 'E02001938',
        '1PH' => 'E02001942',
        '1PJ' => 'E02001938',
        '1PL' => 'E02001938',
        '1PN' => 'E02001938',
        '1PQ' => 'E02001942',
        '1PS' => 'E02001939',
        '1PT' => 'E02001939',
        '1PU' => 'E02001939',
        '1PX' => 'E02001939',
        '1PY' => 'E02001939',
        '1PZ' => 'E02001942',
        '1QA' => 'E02001939',
        '1QB' => 'E02001939',
        '1QD' => 'E02001939',
        '1QE' => 'E02001939',
        '1QF' => 'E02001942',
        '1QG' => 'E02001939',
        '1QH' => 'E02001942',
        '1QJ' => 'E02001939',
        '1QL' => 'E02001939',
        '1QN' => 'E02001939',
        '1QP' => 'E02001939',
        '1QQ' => 'E02001939',
        '1QR' => 'E02001939',
        '1QS' => 'E02001939',
        '1QT' => 'E02001939',
        '1QU' => 'E02001939',
        '1QW' => 'E02001939',
        '1QX' => 'E02001939',
        '1QY' => 'E02001925',
        '1QZ' => 'E02001925',
        '1RA' => 'E02001939',
        '1RB' => 'E02001939',
        '1RD' => 'E02001925',
        '1RE' => 'E02001939',
        '1RF' => 'E02001939',
        '1RG' => 'E02001939',
        '1RH' => 'E02001939',
        '1RJ' => 'E02001939',
        '1RL' => 'E02001939',
        '1RN' => 'E02001938',
        '1RQ' => 'E02001939',
        '1RT' => 'E02001946',
        '1RU' => 'E02001939',
        '1RX' => 'E02001939',
        '1RY' => 'E02001939',
        '1SA' => 'E02001939',
        '1SB' => 'E02001939',
        '1SD' => 'E02001939',
        '1SE' => 'E02001939',
        '1SF' => 'E02001942',
        '1SG' => 'E02001939',
        '1SH' => 'E02001939',
        '1SJ' => 'E02001942',
        '1SL' => 'E02001939',
        '1SN' => 'E02001939',
        '1SP' => 'E02001939',
        '1SQ' => 'E02001942',
        '1SR' => 'E02001939',
        '1SS' => 'E02001939',
        '1ST' => 'E02001939',
        '1SU' => 'E02001939',
        '1SX' => 'E02001939',
        '1SY' => 'E02001939',
        '1TA' => 'E02001939',
        '1TB' => 'E02001939',
        '1TG' => 'E02001925',
        '1TH' => 'E02001925',
        '1TJ' => 'E02001925',
        '1TL' => 'E02001925',
        '1TN' => 'E02001925',
        '1TP' => 'E02001925',
        '1TQ' => 'E02001925',
        '1TR' => 'E02001925',
        '1TS' => 'E02001925',
        '1TT' => 'E02001925',
        '1TU' => 'E02001925',
        '1TX' => 'E02001925',
        '1TY' => 'E02001925',
        '1UA' => 'E02001925',
        '1UB' => 'E02001925',
        '1UD' => 'E02001925',
        '1UE' => 'E02001938',
        '1UG' => 'E02001938',
        '1UH' => 'E02001938',
        '1UJ' => 'E02001925',
        '1UL' => 'E02001925',
        '1UN' => 'E02001925',
        '1UP' => 'E02001939',
        '1UR' => 'E02001938',
        '1US' => 'E02001939',
        '1UT' => 'E02001939',
        '1UU' => 'E02001939',
        '1UW' => 'E02001939',
        '1UX' => 'E02001925',
        '1UY' => 'E02001925',
        '1UZ' => 'E02001925',
        '1WA' => 'E02001942',
        '1WB' => 'E02001942',
        '1WD' => 'E02001925',
        '1WE' => 'E02001925',
        '1WF' => 'E02001925',
        '1WH' => 'E02001942',
        '1WL' => 'E02001925',
        '1WP' => 'E02001942',
        '1WQ' => 'E02001925',
        '1WU' => 'E02001942',
        '1XA' => 'E02001925',
        '1XB' => 'E02001925',
        '1XD' => 'E02001925',
        '1XH' => 'E02001925',
        '1YA' => 'E02001925',
        '1YD' => 'E02001942',
        '1ZA' => 'E02001942',
        '1ZG' => 'E02001942',
        '1ZW' => 'E02001942',
        '2AA' => 'E02001925',
        '2AB' => 'E02001925',
        '2AD' => 'E02001925',
        '2AE' => 'E02001925',
        '2AF' => 'E02001925',
        '2AG' => 'E02001925',
        '2AH' => 'E02001925',
        '2AJ' => 'E02001925',
        '2AL' => 'E02001925',
        '2AN' => 'E02001926',
        '2AP' => 'E02001925',
        '2AR' => 'E02001925',
        '2AS' => 'E02001926',
        '2AT' => 'E02001926',
        '2AU' => 'E02001926',
        '2AW' => 'E02001942',
        '2AX' => 'E02001926',
        '2AY' => 'E02001926',
        '2AZ' => 'E02001942',
        '2BA' => 'E02001926',
        '2BB' => 'E02001926',
        '2BD' => 'E02001926',
        '2BE' => 'E02001942',
        '2BF' => 'E02001926',
        '2BG' => 'E02001926',
        '2BH' => 'E02001938',
        '2BJ' => 'E02001938',
        '2BL' => 'E02001938',
        '2BN' => 'E02001938',
        '2BP' => 'E02001938',
        '2BQ' => 'E02001938',
        '2BS' => 'E02001938',
        '2BT' => 'E02001938',
        '2BU' => 'E02001938',
        '2BW' => 'E02001942',
        '2BX' => 'E02001938',
        '2BY' => 'E02001938',
        '2BZ' => 'E02001938',
        '2DA' => 'E02001938',
        '2DB' => 'E02001938',
        '2DD' => 'E02001938',
        '2DE' => 'E02001938',
        '2DF' => 'E02001938',
        '2DG' => 'E02001926',
        '2DH' => 'E02001938',
        '2DJ' => 'E02001938',
        '2DL' => 'E02001938',
        '2DN' => 'E02001938',
        '2DP' => 'E02001938',
        '2DR' => 'E02001938',
        '2DS' => 'E02001938',
        '2DT' => 'E02001942',
        '2DX' => 'E02001938',
        '2DY' => 'E02001938',
        '2EA' => 'E02001938',
        '2EB' => 'E02001938',
        '2EE' => 'E02001942',
        '2EH' => 'E02001942',
        '2EJ' => 'E02001938',
        '2EL' => 'E02001938',
        '2EN' => 'E02001942',
        '2EP' => 'E02001942',
        '2EQ' => 'E02001942',
        '2ER' => 'E02001942',
        '2ES' => 'E02001942',
        '2ET' => 'E02001942',
        '2EU' => 'E02001942',
        '2EW' => 'E02001942',
        '2EX' => 'E02001942',
        '2EY' => 'E02001942',
        '2HA' => 'E02001942',
        '2HB' => 'E02001942',
        '2HD' => 'E02001938',
        '2HE' => 'E02001938',
        '2HF' => 'E02001938',
        '2HG' => 'E02001938',
        '2HH' => 'E02001938',
        '2HJ' => 'E02001938',
        '2HL' => 'E02001938',
        '2HN' => 'E02001938',
        '2HP' => 'E02001938',
        '2HQ' => 'E02001942',
        '2HR' => 'E02001942',
        '2HS' => 'E02001938',
        '2HT' => 'E02001938',
        '2HU' => 'E02001938',
        '2HW' => 'E02001938',
        '2HX' => 'E02001938',
        '2HY' => 'E02001938',
        '2HZ' => 'E02001938',
        '2JA' => 'E02001938',
        '2JB' => 'E02001938',
        '2JF' => 'E02001938',
        '2JG' => 'E02001942',
        '2JH' => 'E02001938',
        '2JJ' => 'E02001938',
        '2JL' => 'E02001938',
        '2JN' => 'E02001938',
        '2JP' => 'E02001938',
        '2JR' => 'E02001938',
        '2JS' => 'E02001938',
        '2JT' => 'E02001938',
        '2JU' => 'E02001938',
        '2JW' => 'E02001938',
        '2JX' => 'E02001938',
        '2JY' => 'E02001938',
        '2JZ' => 'E02001938',
        '2LA' => 'E02001938',
        '2LB' => 'E02001938',
        '2LD' => 'E02001938',
        '2LE' => 'E02001938',
        '2LF' => 'E02001942',
        '2LG' => 'E02001938',
        '2LH' => 'E02001938',
        '2LJ' => 'E02001938',
        '2LL' => 'E02001938',
        '2LN' => 'E02001938',
        '2LP' => 'E02001938',
        '2LQ' => 'E02001938',
        '2LR' => 'E02001942',
        '2LS' => 'E02001938',
        '2LT' => 'E02001938',
        '2LU' => 'E02001942',
        '2LW' => 'E02001938',
        '2LX' => 'E02001926',
        '2LY' => 'E02001926',
        '2LZ' => 'E02001926',
        '2NA' => 'E02001942',
        '2NB' => 'E02001942',
        '2ND' => 'E02001942',
        '2NE' => 'E02001938',
        '2NG' => 'E02001938',
        '2NH' => 'E02001933',
        '2NJ' => 'E02001933',
        '2NL' => 'E02001933',
        '2NN' => 'E02001933',
        '2NP' => 'E02001938',
        '2NQ' => 'E02001938',
        '2NR' => 'E02001938',
        '2NS' => 'E02001938',
        '2NT' => 'E02001938',
        '2NU' => 'E02001938',
        '2NW' => 'E02001938',
        '2NX' => 'E02001938',
        '2NY' => 'E02001938',
        '2NZ' => 'E02001938',
        '2PA' => 'E02001938',
        '2PB' => 'E02001938',
        '2PD' => 'E02001938',
        '2PE' => 'E02001938',
        '2PF' => 'E02001933',
        '2PG' => 'E02001938',
        '2PH' => 'E02001938',
        '2PJ' => 'E02001942',
        '2PL' => 'E02001938',
        '2PN' => 'E02001938',
        '2PP' => 'E02001938',
        '2PQ' => 'E02001942',
        '2PR' => 'E02001938',
        '2PS' => 'E02001938',
        '2PT' => 'E02001942',
        '2PW' => 'E02001938',
        '2PX' => 'E02001942',
        '2PY' => 'E02001942',
        '2PZ' => 'E02001942',
        '2QA' => 'E02001938',
        '2QB' => 'E02001942',
        '2QD' => 'E02001933',
        '2QE' => 'E02001933',
        '2QG' => 'E02001933',
        '2QH' => 'E02001933',
        '2QJ' => 'E02001933',
        '2QL' => 'E02001933',
        '2QN' => 'E02001933',
        '2QP' => 'E02001933',
        '2QQ' => 'E02001933',
        '2QR' => 'E02001933',
        '2QT' => 'E02001942',
        '2QU' => 'E02001942',
        '2RA' => 'E02001933',
        '2RB' => 'E02001938',
        '2RD' => 'E02001938',
        '2RE' => 'E02001933',
        '2RF' => 'E02001942',
        '2RG' => 'E02001933',
        '2RH' => 'E02001933',
        '2RJ' => 'E02001933',
        '2RL' => 'E02001933',
        '2RN' => 'E02001933',
        '2RP' => 'E02001933',
        '2RR' => 'E02001933',
        '2RS' => 'E02001933',
        '2RT' => 'E02001933',
        '2RU' => 'E02001933',
        '2RW' => 'E02001938',
        '2RX' => 'E02001933',
        '2RY' => 'E02001933',
        '2SA' => 'E02001933',
        '2SB' => 'E02001933',
        '2SD' => 'E02001933',
        '2SE' => 'E02001933',
        '2SF' => 'E02001933',
        '2SG' => 'E02001933',
        '2SH' => 'E02001933',
        '2SJ' => 'E02001933',
        '2SL' => 'E02001933',
        '2SN' => 'E02001938',
        '2SU' => 'E02001933',
        '2SX' => 'E02001933',
        '2SY' => 'E02001933',
        '2TA' => 'E02001933',
        '2TB' => 'E02001933',
        '2TD' => 'E02001933',
        '2TE' => 'E02001933',
        '2TG' => 'E02001933',
        '2TH' => 'E02001933',
        '2TJ' => 'E02001933',
        '2TL' => 'E02001933',
        '2TN' => 'E02001933',
        '2TP' => 'E02001933',
        '2TQ' => 'E02001942',
        '2TR' => 'E02001933',
        '2TS' => 'E02001933',
        '2TT' => 'E02001933',
        '2TU' => 'E02001933',
        '2TX' => 'E02001933',
        '2TY' => 'E02001933',
        '2TZ' => 'E02001933',
        '2UG' => 'E02001933',
        '2UH' => 'E02001933',
        '2UJ' => 'E02001933',
        '2UL' => 'E02001933',
        '2UN' => 'E02001933',
        '2UP' => 'E02001933',
        '2UQ' => 'E02001938',
        '2UR' => 'E02001933',
        '2US' => 'E02001933',
        '2UT' => 'E02001933',
        '2UU' => 'E02001933',
        '2UX' => 'E02001933',
        '2UY' => 'E02001933',
        '2UZ' => 'E02001933',
        '2WA' => 'E02001938',
        '2WB' => 'E02001942',
        '2WF' => 'E02001942',
        '2WH' => 'E02001942',
        '2WL' => 'E02001942',
        '2WQ' => 'E02001942',
        '2WR' => 'E02001942',
        '2WS' => 'E02001942',
        '2WT' => 'E02001942',
        '2WU' => 'E02001942',
        '2WY' => 'E02001942',
        '2XA' => 'E02001933',
        '2XB' => 'E02001933',
        '2XD' => 'E02001933',
        '2XE' => 'E02001933',
        '2XF' => 'E02001933',
        '2XG' => 'E02001933',
        '2XH' => 'E02001926',
        '2XJ' => 'E02001926',
        '2XL' => 'E02001926',
        '2XN' => 'E02001926',
        '2XP' => 'E02001942',
        '2XQ' => 'E02001933',
        '2XR' => 'E02001926',
        '2XS' => 'E02001938',
        '2XT' => 'E02001938',
        '2XU' => 'E02001938',
        '2XW' => 'E02001942',
        '2XX' => 'E02001942',
        '2XY' => 'E02001938',
        '2XZ' => 'E02001938',
        '2YA' => 'E02001938',
        '2YB' => 'E02001926',
        '2YD' => 'E02001938',
        '2YE' => 'E02001926',
        '2YF' => 'E02001942',
        '2YG' => 'E02001926',
        '2YH' => 'E02001926',
        '2YJ' => 'E02001926',
        '2YL' => 'E02001926',
        '2YN' => 'E02001926',
        '2YP' => 'E02001926',
        '2YQ' => 'E02001926',
        '2YR' => 'E02001942',
        '2YS' => 'E02001926',
        '2YT' => 'E02001938',
        '2YU' => 'E02001942',
        '2YW' => 'E02001926',
        '2YX' => 'E02001926',
        '2YY' => 'E02001938',
        '2YZ' => 'E02001938',
        '2ZL' => 'E02001938',
        '2ZQ' => 'E02001942',
        '2ZU' => 'E02001942',
        '3AA' => 'E02001933',
        '3AB' => 'E02001933',
        '3AD' => 'E02001933',
        '3AE' => 'E02001933',
        '3AF' => 'E02001933',
        '3AG' => 'E02001933',
        '3AH' => 'E02001933',
        '3AJ' => 'E02001944',
        '3AL' => 'E02001944',
        '3AN' => 'E02001938',
        '3AP' => 'E02001933',
        '3AQ' => 'E02001938',
        '3AR' => 'E02001949',
        '3AS' => 'E02001942',
        '3AT' => 'E02001938',
        '3AU' => 'E02001938',
        '3AW' => 'E02001938',
        '3AX' => 'E02001938',
        '3AY' => 'E02001938',
        '3AZ' => 'E02001938',
        '3BA' => 'E02001949',
        '3BB' => 'E02001938',
        '3BD' => 'E02001938',
        '3BE' => 'E02001938',
        '3BF' => 'E02001938',
        '3BG' => 'E02001938',
        '3BH' => 'E02001938',
        '3BJ' => 'E02001938',
        '3BL' => 'E02001938',
        '3BN' => 'E02001933',
        '3BP' => 'E02001938',
        '3BQ' => 'E02001938',
        '3BS' => 'E02001933',
        '3BT' => 'E02001933',
        '3BU' => 'E02001933',
        '3BW' => 'E02001933',
        '3BX' => 'E02001933',
        '3BY' => 'E02001933',
        '3BZ' => 'E02001938',
        '3DA' => 'E02001933',
        '3DB' => 'E02001938',
        '3DD' => 'E02001938',
        '3DE' => 'E02001938',
        '3DF' => 'E02001942',
        '3DG' => 'E02001942',
        '3DH' => 'E02001938',
        '3DJ' => 'E02001942',
        '3DL' => 'E02001938',
        '3DN' => 'E02001938',
        '3DP' => 'E02001938',
        '3DQ' => 'E02001949',
        '3DR' => 'E02001938',
        '3DS' => 'E02001938',
        '3DT' => 'E02001938',
        '3DU' => 'E02001938',
        '3DW' => 'E02001938',
        '3DX' => 'E02001938',
        '3DY' => 'E02001938',
        '3DZ' => 'E02001938',
        '3EA' => 'E02001942',
        '3EB' => 'E02001942',
        '3ED' => 'E02001938',
        '3EE' => 'E02001942',
        '3EF' => 'E02001942',
        '3EG' => 'E02001942',
        '3EH' => 'E02001942',
        '3EJ' => 'E02001942',
        '3EL' => 'E02001953',
        '3EN' => 'E02001938',
        '3EP' => 'E02001949',
        '3EQ' => 'E02001942',
        '3ER' => 'E02001938',
        '3ES' => 'E02001949',
        '3ET' => 'E02001938',
        '3EU' => 'E02001949',
        '3EW' => 'E02001942',
        '3EX' => 'E02001949',
        '3EY' => 'E02001949',
        '3EZ' => 'E02001942',
        '3FF' => 'E02001949',
        '3FG' => 'E02001949',
        '3FH' => 'E02001949',
        '3FJ' => 'E02001949',
        '3HA' => 'E02001942',
        '3HB' => 'E02001949',
        '3HD' => 'E02001949',
        '3HE' => 'E02001942',
        '3HF' => 'E02001949',
        '3HG' => 'E02001949',
        '3HH' => 'E02001949',
        '3HJ' => 'E02001949',
        '3HL' => 'E02001949',
        '3HN' => 'E02001949',
        '3HP' => 'E02001949',
        '3HQ' => 'E02001949',
        '3HR' => 'E02001949',
        '3HS' => 'E02001949',
        '3HT' => 'E02001949',
        '3HU' => 'E02001942',
        '3HW' => 'E02001942',
        '3HX' => 'E02001949',
        '3HY' => 'E02001949',
        '3HZ' => 'E02001949',
        '3JA' => 'E02001949',
        '3JB' => 'E02001942',
        '3JD' => 'E02001949',
        '3JE' => 'E02001949',
        '3JF' => 'E02001949',
        '3JG' => 'E02001949',
        '3JH' => 'E02001949',
        '3JJ' => 'E02001949',
        '3JN' => 'E02001949',
        '3JP' => 'E02001949',
        '3JQ' => 'E02001938',
        '3JR' => 'E02001949',
        '3JS' => 'E02001949',
        '3JW' => 'E02001949',
        '3JX' => 'E02001953',
        '3LB' => 'E02001949',
        '3LD' => 'E02001949',
        '3LE' => 'E02001949',
        '3LG' => 'E02001949',
        '3LH' => 'E02001949',
        '3LL' => 'E02001949',
        '3LN' => 'E02001949',
        '3LP' => 'E02001949',
        '3LR' => 'E02001949',
        '3LS' => 'E02001949',
        '3LT' => 'E02001949',
        '3LW' => 'E02001949',
        '3NA' => 'E02001949',
        '3NB' => 'E02001944',
        '3ND' => 'E02001944',
        '3NE' => 'E02001944',
        '3NF' => 'E02001944',
        '3NG' => 'E02001949',
        '3NH' => 'E02001949',
        '3NJ' => 'E02001949',
        '3NL' => 'E02001944',
        '3NN' => 'E02001944',
        '3NP' => 'E02001944',
        '3NQ' => 'E02001949',
        '3NR' => 'E02001944',
        '3NS' => 'E02001949',
        '3NT' => 'E02001944',
        '3NU' => 'E02001949',
        '3NW' => 'E02001944',
        '3NX' => 'E02001944',
        '3NY' => 'E02001944',
        '3NZ' => 'E02001944',
        '3PA' => 'E02001949',
        '3PB' => 'E02001949',
        '3PD' => 'E02001949',
        '3PE' => 'E02001949',
        '3PF' => 'E02001944',
        '3PG' => 'E02001949',
        '3PH' => 'E02001949',
        '3PJ' => 'E02001949',
        '3PL' => 'E02001949',
        '3PN' => 'E02001949',
        '3PP' => 'E02001949',
        '3PQ' => 'E02001944',
        '3PR' => 'E02001949',
        '3PS' => 'E02001944',
        '3PW' => 'E02001949',
        '3PX' => 'E02001944',
        '3PY' => 'E02001944',
        '3PZ' => 'E02001944',
        '3QA' => 'E02001944',
        '3QB' => 'E02001944',
        '3QD' => 'E02001944',
        '3QE' => 'E02001944',
        '3QF' => 'E02001944',
        '3QG' => 'E02001944',
        '3QH' => 'E02001944',
        '3QJ' => 'E02001944',
        '3QL' => 'E02001944',
        '3QN' => 'E02001949',
        '3QP' => 'E02001949',
        '3QQ' => 'E02001944',
        '3QR' => 'E02001944',
        '3QS' => 'E02001947',
        '3QT' => 'E02001947',
        '3QU' => 'E02001947',
        '3QW' => 'E02001949',
        '3QX' => 'E02001944',
        '3QY' => 'E02001944',
        '3QZ' => 'E02001944',
        '3RA' => 'E02001944',
        '3RB' => 'E02001944',
        '3RD' => 'E02001944',
        '3RE' => 'E02001944',
        '3RF' => 'E02001944',
        '3RG' => 'E02001944',
        '3RH' => 'E02001944',
        '3RJ' => 'E02001944',
        '3RL' => 'E02001944',
        '3RN' => 'E02001944',
        '3RP' => 'E02001949',
        '3RQ' => 'E02001942',
        '3RR' => 'E02001949',
        '3RS' => 'E02001944',
        '3RT' => 'E02001944',
        '3RU' => 'E02001944',
        '3RX' => 'E02001944',
        '3RY' => 'E02001944',
        '3RZ' => 'E02001944',
        '3SA' => 'E02001944',
        '3SB' => 'E02001944',
        '3SD' => 'E02001944',
        '3WA' => 'E02001944',
        '3WB' => 'E02001942',
        '3WD' => 'E02001944',
        '3WE' => 'E02001944',
        '3WS' => 'E02001944',
        '3XB' => 'E02001942',
        '3YB' => 'E02001942',
        '3YU' => 'E02001942',
        '9AB' => 'E02001942',
        '9AD' => 'E02001942',
        '9AE' => 'E02001942',
        '9AF' => 'E02001942',
        '9AG' => 'E02001942',
        '9AH' => 'E02001942',
        '9AJ' => 'E02001942',
        '9AL' => 'E02001942',
        '9AN' => 'E02001942',
        '9AP' => 'E02001942',
        '9AQ' => 'E02001942',
        '9AR' => 'E02001942',
        '9AS' => 'E02001942',
        '9AT' => 'E02001942',
        '9AU' => 'E02001942',
        '9AW' => 'E02001942',
        '9AX' => 'E02001942',
        '9AY' => 'E02001942',
        '9AZ' => 'E02001942',
        '9BA' => 'E02001942',
        '9BB' => 'E02001942',
        '9BD' => 'E02001942',
        '9BE' => 'E02001942',
        '9BF' => 'E02001942',
        '9BG' => 'E02001942',
        '9BH' => 'E02001942',
        '9BJ' => 'E02001942',
        '9BL' => 'E02001942',
        '9BN' => 'E02001942',
        '9BP' => 'E02001942',
        '9BQ' => 'E02001942',
        '9BR' => 'E02001942',
        '9BS' => 'E02001942',
        '9BT' => 'E02001942',
        '9BU' => 'E02001942',
        '9BW' => 'E02001942',
        '9BX' => 'E02001942',
        '9BY' => 'E02001942',
        '9BZ' => 'E02001942',
        '9DA' => 'E02001942',
        '9DB' => 'E02001942',
        '9DD' => 'E02001942',
        '9DE' => 'E02001942',
        '9DF' => 'E02001942',
        '9DG' => 'E02001942',
        '9DH' => 'E02001942',
        '9DJ' => 'E02001942',
        '9DL' => 'E02001942',
        '9DN' => 'E02001942',
        '9DP' => 'E02001942',
        '9DR' => 'E02001942',
        '9DS' => 'E02001942',
        '9DT' => 'E02001942',
        '9DU' => 'E02001942',
        '9DW' => 'E02001942',
        '9DX' => 'E02001942',
        '9DY' => 'E02001942',
        '9DZ' => 'E02001942',
        '9EA' => 'E02001942',
        '9EB' => 'E02001942',
        '9ED' => 'E02001942',
        '9EE' => 'E02001942',
        '9EF' => 'E02001942',
        '9EG' => 'E02001942',
        '9EH' => 'E02001942',
        '9EJ' => 'E02001942',
        '9EL' => 'E02001942',
        '9EN' => 'E02001942',
        '9EP' => 'E02001942',
        '9EQ' => 'E02001942',
        '9ER' => 'E02001942',
        '9ES' => 'E02001942',
        '9ET' => 'E02001942',
        '9EU' => 'E02001942',
        '9EW' => 'E02001942',
        '9EX' => 'E02001942',
        '9EY' => 'E02001942',
        '9EZ' => 'E02001942',
        '9FA' => 'E02001942',
        '9FB' => 'E02001942',
        '9FD' => 'E02001942',
        '9FE' => 'E02001942',
        '9FG' => 'E02001942',
        '9FH' => 'E02001942',
        '9FJ' => 'E02001942',
        '9FN' => 'E02001942',
        '9FP' => 'E02001942',
        '9FQ' => 'E02001942',
        '9FR' => 'E02001942',
        '9PF' => 'E02001942',
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
