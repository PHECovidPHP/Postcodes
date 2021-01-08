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
final class PO6
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02006821',
        '1AB' => 'E02006821',
        '1AD' => 'E02006821',
        '1AE' => 'E02006821',
        '1AG' => 'E02006821',
        '1AH' => 'E02006821',
        '1AJ' => 'E02006821',
        '1AL' => 'E02006821',
        '1AN' => 'E02006821',
        '1AP' => 'E02006821',
        '1AQ' => 'E02006821',
        '1AR' => 'E02006821',
        '1AS' => 'E02006821',
        '1AT' => 'E02006821',
        '1AU' => 'E02006821',
        '1AW' => 'E02006821',
        '1AX' => 'E02006821',
        '1AY' => 'E02006821',
        '1AZ' => 'E02006821',
        '1BA' => 'E02006821',
        '1BB' => 'E02003526',
        '1BD' => 'E02003526',
        '1BE' => 'E02003526',
        '1BG' => 'E02003526',
        '1BH' => 'E02006821',
        '1BJ' => 'E02004772',
        '1BL' => 'E02006821',
        '1BN' => 'E02006821',
        '1BP' => 'E02006821',
        '1BQ' => 'E02003527',
        '1BS' => 'E02003526',
        '1BT' => 'E02006821',
        '1BU' => 'E02003526',
        '1BW' => 'E02004772',
        '1BY' => 'E02006821',
        '1BZ' => 'E02006821',
        '1DA' => 'E02003526',
        '1DB' => 'E02006821',
        '1DD' => 'E02006821',
        '1DE' => 'E02003526',
        '1DF' => 'E02003526',
        '1DG' => 'E02006821',
        '1DH' => 'E02006821',
        '1DJ' => 'E02006821',
        '1DL' => 'E02006821',
        '1DN' => 'E02006821',
        '1DP' => 'E02006821',
        '1DQ' => 'E02006821',
        '1DR' => 'E02006821',
        '1DS' => 'E02006821',
        '1DT' => 'E02006821',
        '1DU' => 'E02006821',
        '1DX' => 'E02006821',
        '1EA' => 'E02003526',
        '1EB' => 'E02003527',
        '1EE' => 'E02003526',
        '1EG' => 'E02006821',
        '1EH' => 'E02003526',
        '1EJ' => 'E02003526',
        '1EL' => 'E02003526',
        '1EN' => 'E02003526',
        '1EP' => 'E02006821',
        '1ER' => 'E02006821',
        '1ES' => 'E02006821',
        '1ET' => 'E02006821',
        '1EU' => 'E02006821',
        '1EW' => 'E02003526',
        '1EX' => 'E02006821',
        '1EY' => 'E02006821',
        '1EZ' => 'E02006821',
        '1HA' => 'E02003526',
        '1HB' => 'E02006821',
        '1HD' => 'E02003527',
        '1HE' => 'E02003526',
        '1HG' => 'E02003526',
        '1HH' => 'E02003526',
        '1HJ' => 'E02003526',
        '1HL' => 'E02003526',
        '1HN' => 'E02003526',
        '1HP' => 'E02003526',
        '1HQ' => 'E02003526',
        '1HR' => 'E02003526',
        '1HS' => 'E02003526',
        '1HT' => 'E02003526',
        '1HU' => 'E02003526',
        '1HW' => 'E02003526',
        '1HX' => 'E02003526',
        '1HY' => 'E02003526',
        '1HZ' => 'E02003526',
        '1JA' => 'E02006821',
        '1JB' => 'E02006821',
        '1JD' => 'E02006821',
        '1JG' => 'E02006821',
        '1JH' => 'E02006821',
        '1JJ' => 'E02006821',
        '1JL' => 'E02006821',
        '1JN' => 'E02006821',
        '1JP' => 'E02006821',
        '1JQ' => 'E02006821',
        '1JR' => 'E02006821',
        '1JS' => 'E02006821',
        '1JT' => 'E02006821',
        '1JU' => 'E02006821',
        '1JW' => 'E02006821',
        '1JY' => 'E02006821',
        '1JZ' => 'E02006821',
        '1LA' => 'E02006821',
        '1LB' => 'E02006821',
        '1LD' => 'E02006821',
        '1LE' => 'E02006821',
        '1LF' => 'E02006821',
        '1LG' => 'E02006821',
        '1LH' => 'E02006821',
        '1LJ' => 'E02006821',
        '1LL' => 'E02006821',
        '1LN' => 'E02006821',
        '1LP' => 'E02006821',
        '1LR' => 'E02006821',
        '1LS' => 'E02006821',
        '1LU' => 'E02006821',
        '1LW' => 'E02006821',
        '1LX' => 'E02006821',
        '1LY' => 'E02006821',
        '1LZ' => 'E02006821',
        '1NA' => 'E02006821',
        '1NB' => 'E02006821',
        '1ND' => 'E02006821',
        '1NE' => 'E02006821',
        '1NF' => 'E02006821',
        '1NG' => 'E02006821',
        '1NH' => 'E02006821',
        '1NJ' => 'E02006821',
        '1NL' => 'E02006821',
        '1NN' => 'E02006821',
        '1NP' => 'E02006821',
        '1NQ' => 'E02006821',
        '1NR' => 'E02006821',
        '1NS' => 'E02006821',
        '1NT' => 'E02006821',
        '1NU' => 'E02006821',
        '1NW' => 'E02006821',
        '1NX' => 'E02006821',
        '1NZ' => 'E02003526',
        '1PA' => 'E02003526',
        '1PB' => 'E02003526',
        '1PD' => 'E02006821',
        '1PE' => 'E02006821',
        '1PF' => 'E02006821',
        '1PG' => 'E02006821',
        '1PH' => 'E02006821',
        '1PJ' => 'E02006821',
        '1PL' => 'E02006821',
        '1PN' => 'E02006821',
        '1PP' => 'E02006821',
        '1PQ' => 'E02006821',
        '1PR' => 'E02003529',
        '1PS' => 'E02006821',
        '1PT' => 'E02006821',
        '1PU' => 'E02006821',
        '1PX' => 'E02006821',
        '1PY' => 'E02003529',
        '1PZ' => 'E02006821',
        '1QA' => 'E02006821',
        '1QB' => 'E02006821',
        '1QD' => 'E02006821',
        '1QE' => 'E02006821',
        '1QF' => 'E02006821',
        '1QG' => 'E02006821',
        '1QH' => 'E02006821',
        '1QJ' => 'E02006821',
        '1QL' => 'E02006821',
        '1QN' => 'E02006821',
        '1QP' => 'E02006821',
        '1QQ' => 'E02006821',
        '1QR' => 'E02003526',
        '1QS' => 'E02006821',
        '1QT' => 'E02006821',
        '1QU' => 'E02006821',
        '1QW' => 'E02006821',
        '1QX' => 'E02006821',
        '1QY' => 'E02003529',
        '1QZ' => 'E02006821',
        '1RA' => 'E02006821',
        '1RB' => 'E02006821',
        '1RD' => 'E02006821',
        '1RE' => 'E02003529',
        '1RF' => 'E02003529',
        '1RG' => 'E02006821',
        '1RH' => 'E02003527',
        '1RJ' => 'E02006821',
        '1RL' => 'E02006821',
        '1RN' => 'E02006821',
        '1RP' => 'E02006821',
        '1RQ' => 'E02006821',
        '1RR' => 'E02006821',
        '1RS' => 'E02006821',
        '1RT' => 'E02006821',
        '1RU' => 'E02006821',
        '1RW' => 'E02006821',
        '1RX' => 'E02006821',
        '1RY' => 'E02006821',
        '1RZ' => 'E02006821',
        '1SA' => 'E02006821',
        '1SB' => 'E02006821',
        '1SD' => 'E02006821',
        '1SE' => 'E02006821',
        '1SG' => 'E02006821',
        '1SH' => 'E02006821',
        '1SJ' => 'E02006821',
        '1SL' => 'E02006821',
        '1SN' => 'E02006821',
        '1SP' => 'E02006821',
        '1SQ' => 'E02006821',
        '1SR' => 'E02003529',
        '1SS' => 'E02006821',
        '1ST' => 'E02006821',
        '1SU' => 'E02006821',
        '1SW' => 'E02006821',
        '1SX' => 'E02006821',
        '1SY' => 'E02006821',
        '1SZ' => 'E02006821',
        '1TA' => 'E02003529',
        '1TB' => 'E02006821',
        '1TD' => 'E02003529',
        '1TE' => 'E02003529',
        '1TF' => 'E02003529',
        '1TG' => 'E02003529',
        '1TH' => 'E02003529',
        '1TJ' => 'E02006821',
        '1TL' => 'E02006821',
        '1TN' => 'E02003529',
        '1TP' => 'E02006821',
        '1TQ' => 'E02003529',
        '1TR' => 'E02006821',
        '1TS' => 'E02003529',
        '1TT' => 'E02006821',
        '1TU' => 'E02003529',
        '1TW' => 'E02003529',
        '1TX' => 'E02006821',
        '1TY' => 'E02003529',
        '1TZ' => 'E02003529',
        '1UA' => 'E02006821',
        '1UB' => 'E02006821',
        '1UD' => 'E02006821',
        '1UH' => 'E02006821',
        '1UJ' => 'E02006821',
        '1UL' => 'E02006821',
        '1UN' => 'E02006821',
        '1UP' => 'E02006821',
        '1UR' => 'E02006821',
        '1US' => 'E02006821',
        '1UW' => 'E02006821',
        '1WG' => 'E02006821',
        '1WJ' => 'E02003527',
        '1WY' => 'E02003527',
        '1WZ' => 'E02003527',
        '1XN' => 'E02003527',
        '1XQ' => 'E02003527',
        '1XU' => 'E02003527',
        '1YH' => 'E02003527',
        '1YJ' => 'E02006821',
        '1YL' => 'E02006821',
        '1YP' => 'E02006821',
        '1YQ' => 'E02003527',
        '1YR' => 'E02006821',
        '1YS' => 'E02006821',
        '1YT' => 'E02006821',
        '1YX' => 'E02003527',
        '1ZJ' => 'E02003527',
        '1ZN' => 'E02003527',
        '1ZR' => 'E02003527',
        '1ZS' => 'E02003527',
        '1ZT' => 'E02003527',
        '1ZU' => 'E02003527',
        '1ZW' => 'E02003527',
        '2AA' => 'E02003526',
        '2AB' => 'E02003525',
        '2AD' => 'E02003529',
        '2AE' => 'E02003525',
        '2AF' => 'E02003526',
        '2AG' => 'E02003526',
        '2AH' => 'E02003526',
        '2AJ' => 'E02003526',
        '2AL' => 'E02003526',
        '2AN' => 'E02003526',
        '2AP' => 'E02003526',
        '2AQ' => 'E02003526',
        '2AR' => 'E02003526',
        '2AS' => 'E02003526',
        '2AT' => 'E02003526',
        '2AU' => 'E02003526',
        '2AW' => 'E02003526',
        '2AX' => 'E02003526',
        '2AY' => 'E02003525',
        '2AZ' => 'E02003529',
        '2BA' => 'E02003529',
        '2BB' => 'E02003529',
        '2BD' => 'E02003527',
        '2BE' => 'E02003526',
        '2BF' => 'E02003526',
        '2BG' => 'E02003526',
        '2BH' => 'E02003526',
        '2BJ' => 'E02003526',
        '2BL' => 'E02003526',
        '2BN' => 'E02003526',
        '2BP' => 'E02003526',
        '2BQ' => 'E02003526',
        '2BS' => 'E02003526',
        '2BT' => 'E02003526',
        '2BU' => 'E02003526',
        '2BW' => 'E02003529',
        '2BX' => 'E02003526',
        '2BY' => 'E02003526',
        '2BZ' => 'E02003529',
        '2DA' => 'E02003529',
        '2DB' => 'E02003529',
        '2DD' => 'E02003526',
        '2DE' => 'E02003526',
        '2DH' => 'E02003526',
        '2DJ' => 'E02003526',
        '2DL' => 'E02003526',
        '2DN' => 'E02003526',
        '2DP' => 'E02003526',
        '2DR' => 'E02003526',
        '2DS' => 'E02003526',
        '2DT' => 'E02003526',
        '2DU' => 'E02003526',
        '2DX' => 'E02003526',
        '2DY' => 'E02003526',
        '2DZ' => 'E02003526',
        '2EA' => 'E02003526',
        '2EB' => 'E02003526',
        '2ED' => 'E02003526',
        '2EE' => 'E02003529',
        '2EF' => 'E02003529',
        '2EG' => 'E02003529',
        '2EH' => 'E02003526',
        '2EJ' => 'E02003526',
        '2EL' => 'E02003526',
        '2EN' => 'E02006821',
        '2EP' => 'E02003529',
        '2EQ' => 'E02003529',
        '2ER' => 'E02006821',
        '2ES' => 'E02003529',
        '2ET' => 'E02003529',
        '2EW' => 'E02003526',
        '2HA' => 'E02003526',
        '2HB' => 'E02003526',
        '2HD' => 'E02003529',
        '2HE' => 'E02003529',
        '2HF' => 'E02003527',
        '2HG' => 'E02003529',
        '2HH' => 'E02003526',
        '2HJ' => 'E02003526',
        '2HL' => 'E02003526',
        '2HN' => 'E02003526',
        '2HP' => 'E02003529',
        '2HR' => 'E02006821',
        '2HS' => 'E02003529',
        '2HT' => 'E02006821',
        '2HU' => 'E02006821',
        '2HX' => 'E02003529',
        '2HZ' => 'E02003526',
        '2JA' => 'E02003526',
        '2JB' => 'E02003526',
        '2JD' => 'E02003526',
        '2JE' => 'E02003526',
        '2JF' => 'E02003526',
        '2JG' => 'E02003526',
        '2JH' => 'E02003526',
        '2JJ' => 'E02003526',
        '2JL' => 'E02003526',
        '2JN' => 'E02003526',
        '2JP' => 'E02003526',
        '2JQ' => 'E02003526',
        '2JR' => 'E02003526',
        '2JS' => 'E02003526',
        '2JT' => 'E02003526',
        '2JU' => 'E02003526',
        '2JW' => 'E02003526',
        '2JX' => 'E02003526',
        '2JY' => 'E02003529',
        '2JZ' => 'E02003526',
        '2LA' => 'E02003529',
        '2LB' => 'E02003529',
        '2LD' => 'E02003526',
        '2LE' => 'E02003529',
        '2LF' => 'E02003529',
        '2LG' => 'E02003526',
        '2LH' => 'E02003529',
        '2LJ' => 'E02003529',
        '2LL' => 'E02003529',
        '2LN' => 'E02003526',
        '2LP' => 'E02003529',
        '2LQ' => 'E02003526',
        '2LR' => 'E02003529',
        '2LS' => 'E02003529',
        '2LT' => 'E02003526',
        '2LU' => 'E02003526',
        '2LW' => 'E02003529',
        '2LX' => 'E02003529',
        '2LY' => 'E02003529',
        '2LZ' => 'E02003529',
        '2NA' => 'E02003529',
        '2NB' => 'E02003529',
        '2ND' => 'E02003529',
        '2NE' => 'E02003529',
        '2NF' => 'E02003529',
        '2NG' => 'E02003526',
        '2NH' => 'E02003529',
        '2NJ' => 'E02003529',
        '2NL' => 'E02003529',
        '2NN' => 'E02003529',
        '2NP' => 'E02003529',
        '2NQ' => 'E02003529',
        '2NR' => 'E02003529',
        '2NS' => 'E02003529',
        '2NT' => 'E02003529',
        '2NU' => 'E02003529',
        '2NW' => 'E02003529',
        '2NX' => 'E02003526',
        '2NY' => 'E02003529',
        '2NZ' => 'E02003529',
        '2PA' => 'E02003527',
        '2PB' => 'E02003527',
        '2PD' => 'E02003529',
        '2PE' => 'E02003529',
        '2PF' => 'E02003529',
        '2PG' => 'E02003525',
        '2PH' => 'E02003529',
        '2PJ' => 'E02003529',
        '2PL' => 'E02003529',
        '2PN' => 'E02003529',
        '2PP' => 'E02003529',
        '2PQ' => 'E02003525',
        '2PR' => 'E02003529',
        '2PS' => 'E02003529',
        '2PT' => 'E02003529',
        '2PU' => 'E02003529',
        '2PX' => 'E02003529',
        '2PY' => 'E02003529',
        '2PZ' => 'E02003529',
        '2QA' => 'E02003526',
        '2QB' => 'E02003529',
        '2QD' => 'E02003525',
        '2QE' => 'E02003529',
        '2QF' => 'E02003529',
        '2QG' => 'E02003529',
        '2QH' => 'E02003529',
        '2QJ' => 'E02003529',
        '2QL' => 'E02003529',
        '2QN' => 'E02003525',
        '2QP' => 'E02003529',
        '2QQ' => 'E02003529',
        '2QR' => 'E02003529',
        '2QS' => 'E02003526',
        '2QT' => 'E02003529',
        '2QU' => 'E02003526',
        '2QW' => 'E02003525',
        '2QX' => 'E02003529',
        '2QY' => 'E02003526',
        '2QZ' => 'E02003526',
        '2RA' => 'E02003526',
        '2RB' => 'E02003529',
        '2RD' => 'E02003526',
        '2RH' => 'E02003529',
        '2RJ' => 'E02003529',
        '2RL' => 'E02003529',
        '2RN' => 'E02003529',
        '2RP' => 'E02003529',
        '2RR' => 'E02003529',
        '2RS' => 'E02003529',
        '2RT' => 'E02003529',
        '2RU' => 'E02003529',
        '2RW' => 'E02003529',
        '2RX' => 'E02003529',
        '2RY' => 'E02003529',
        '2RZ' => 'E02003529',
        '2SA' => 'E02003527',
        '2SB' => 'E02003526',
        '2SD' => 'E02003526',
        '2SE' => 'E02003529',
        '2SG' => 'E02003527',
        '2SH' => 'E02003527',
        '2SJ' => 'E02003527',
        '2SL' => 'E02003525',
        '2SN' => 'E02003527',
        '2SP' => 'E02003529',
        '2SQ' => 'E02003527',
        '2SR' => 'E02003527',
        '2SS' => 'E02003527',
        '2ST' => 'E02003529',
        '2SU' => 'E02003529',
        '2SW' => 'E02003527',
        '2SX' => 'E02003529',
        '2SY' => 'E02003529',
        '2SZ' => 'E02003527',
        '2TA' => 'E02003525',
        '2TB' => 'E02003527',
        '2TD' => 'E02003527',
        '2TG' => 'E02003529',
        '2TH' => 'E02003527',
        '2TJ' => 'E02003529',
        '2TL' => 'E02003529',
        '2TN' => 'E02003529',
        '2TP' => 'E02003527',
        '2TR' => 'E02003529',
        '2TS' => 'E02003529',
        '2TT' => 'E02003529',
        '2TU' => 'E02003529',
        '2TW' => 'E02003529',
        '2TX' => 'E02003529',
        '2TY' => 'E02003529',
        '2TZ' => 'E02003527',
        '2UA' => 'E02003529',
        '2UB' => 'E02003527',
        '2UD' => 'E02003525',
        '2UG' => 'E02003529',
        '2UH' => 'E02003529',
        '2UJ' => 'E02003529',
        '2UL' => 'E02003529',
        '2UN' => 'E02003529',
        '2UP' => 'E02003529',
        '2UQ' => 'E02003529',
        '2UR' => 'E02003527',
        '2US' => 'E02003529',
        '2UT' => 'E02003527',
        '2UU' => 'E02003527',
        '2UW' => 'E02003529',
        '2WA' => 'E02003527',
        '2WB' => 'E02003527',
        '2WD' => 'E02003527',
        '2WE' => 'E02003527',
        '2WT' => 'E02003527',
        '2WU' => 'E02003527',
        '2WW' => 'E02003527',
        '2WX' => 'E02003527',
        '2WY' => 'E02003527',
        '2WZ' => 'E02003527',
        '2XA' => 'E02003529',
        '2XB' => 'E02003529',
        '2XD' => 'E02003529',
        '2XG' => 'E02003529',
        '2XH' => 'E02003527',
        '2XJ' => 'E02003527',
        '2XL' => 'E02003527',
        '2XP' => 'E02003527',
        '2XQ' => 'E02003527',
        '2YB' => 'E02003529',
        '2YD' => 'E02003527',
        '2YE' => 'E02003527',
        '2YF' => 'E02003527',
        '2YG' => 'E02003529',
        '2YH' => 'E02003527',
        '2YJ' => 'E02003527',
        '2YQ' => 'E02003529',
        '2ZH' => 'E02003527',
        '2ZJ' => 'E02003527',
        '2ZQ' => 'E02003527',
        '2ZR' => 'E02003527',
        '3AA' => 'E02003527',
        '3AB' => 'E02003527',
        '3AD' => 'E02003525',
        '3AE' => 'E02003527',
        '3AF' => 'E02003527',
        '3AG' => 'E02003525',
        '3AH' => 'E02003525',
        '3AJ' => 'E02003525',
        '3AL' => 'E02003525',
        '3AN' => 'E02003525',
        '3AP' => 'E02003525',
        '3AQ' => 'E02003527',
        '3AR' => 'E02003525',
        '3AS' => 'E02003525',
        '3AT' => 'E02003525',
        '3AU' => 'E02003527',
        '3AW' => 'E02003525',
        '3AX' => 'E02003525',
        '3AY' => 'E02003527',
        '3AZ' => 'E02003525',
        '3BA' => 'E02003525',
        '3BB' => 'E02003525',
        '3BD' => 'E02003525',
        '3BE' => 'E02003529',
        '3BF' => 'E02003527',
        '3BG' => 'E02003525',
        '3BH' => 'E02003527',
        '3BJ' => 'E02003525',
        '3BL' => 'E02003525',
        '3BP' => 'E02003525',
        '3BQ' => 'E02003525',
        '3BS' => 'E02003525',
        '3BT' => 'E02003525',
        '3BU' => 'E02003525',
        '3BW' => 'E02003525',
        '3BX' => 'E02003529',
        '3BY' => 'E02003525',
        '3BZ' => 'E02003525',
        '3DA' => 'E02003529',
        '3DB' => 'E02003525',
        '3DD' => 'E02003529',
        '3DE' => 'E02003529',
        '3DF' => 'E02003529',
        '3DG' => 'E02003529',
        '3DH' => 'E02003527',
        '3DJ' => 'E02003525',
        '3DL' => 'E02003525',
        '3DN' => 'E02003525',
        '3DP' => 'E02003525',
        '3DQ' => 'E02003525',
        '3DR' => 'E02003525',
        '3DS' => 'E02003525',
        '3DT' => 'E02003525',
        '3DU' => 'E02003525',
        '3DW' => 'E02003527',
        '3DX' => 'E02003525',
        '3DY' => 'E02003525',
        '3DZ' => 'E02003525',
        '3EA' => 'E02003525',
        '3EB' => 'E02003529',
        '3ED' => 'E02003525',
        '3EE' => 'E02003525',
        '3EF' => 'E02003529',
        '3EG' => 'E02003525',
        '3EH' => 'E02003529',
        '3EJ' => 'E02003529',
        '3EL' => 'E02003529',
        '3EN' => 'E02003527',
        '3EP' => 'E02003525',
        '3EQ' => 'E02003525',
        '3ER' => 'E02003529',
        '3ES' => 'E02003529',
        '3ET' => 'E02003526',
        '3EU' => 'E02003525',
        '3EW' => 'E02003527',
        '3EX' => 'E02003525',
        '3EY' => 'E02003525',
        '3EZ' => 'E02003527',
        '3FA' => 'E02003527',
        '3FB' => 'E02003527',
        '3FD' => 'E02003527',
        '3FE' => 'E02003527',
        '3FF' => 'E02003525',
        '3FG' => 'E02003525',
        '3FH' => 'E02003525',
        '3FJ' => 'E02003525',
        '3FL' => 'E02003525',
        '3FN' => 'E02003526',
        '3FP' => 'E02003527',
        '3FQ' => 'E02003527',
        '3FR' => 'E02003527',
        '3FS' => 'E02003525',
        '3FT' => 'E02003527',
        '3FU' => 'E02003527',
        '3HA' => 'E02003527',
        '3HB' => 'E02003527',
        '3HD' => 'E02003527',
        '3HE' => 'E02003527',
        '3HF' => 'E02003525',
        '3HG' => 'E02003525',
        '3HH' => 'E02003527',
        '3HJ' => 'E02003527',
        '3HL' => 'E02003527',
        '3HN' => 'E02003527',
        '3HP' => 'E02003525',
        '3HQ' => 'E02003527',
        '3HR' => 'E02003525',
        '3HS' => 'E02003527',
        '3HT' => 'E02003527',
        '3HU' => 'E02003527',
        '3HW' => 'E02003527',
        '3HX' => 'E02003525',
        '3HY' => 'E02003525',
        '3HZ' => 'E02003525',
        '3JA' => 'E02003525',
        '3JB' => 'E02003525',
        '3JD' => 'E02003527',
        '3JH' => 'E02003525',
        '3JJ' => 'E02003525',
        '3JL' => 'E02003525',
        '3JN' => 'E02003525',
        '3JP' => 'E02003525',
        '3JR' => 'E02003525',
        '3JS' => 'E02003525',
        '3JT' => 'E02003525',
        '3JU' => 'E02003525',
        '3JW' => 'E02003525',
        '3JX' => 'E02003525',
        '3JY' => 'E02003525',
        '3JZ' => 'E02003525',
        '3LA' => 'E02003525',
        '3LB' => 'E02003525',
        '3LD' => 'E02003525',
        '3LE' => 'E02003525',
        '3LF' => 'E02003525',
        '3LG' => 'E02003525',
        '3LH' => 'E02003525',
        '3LJ' => 'E02003525',
        '3LL' => 'E02003526',
        '3LP' => 'E02003525',
        '3LR' => 'E02003526',
        '3LS' => 'E02003526',
        '3LT' => 'E02003526',
        '3LU' => 'E02003526',
        '3LX' => 'E02003524',
        '3LY' => 'E02003525',
        '3LZ' => 'E02003526',
        '3NA' => 'E02003526',
        '3NB' => 'E02003526',
        '3ND' => 'E02003526',
        '3NH' => 'E02003525',
        '3NJ' => 'E02003525',
        '3NL' => 'E02003525',
        '3NN' => 'E02003525',
        '3NP' => 'E02003525',
        '3NR' => 'E02003525',
        '3NS' => 'E02003525',
        '3NT' => 'E02003525',
        '3NU' => 'E02003525',
        '3NX' => 'E02003525',
        '3NY' => 'E02003525',
        '3NZ' => 'E02003525',
        '3PA' => 'E02003525',
        '3PB' => 'E02003525',
        '3PD' => 'E02003525',
        '3PE' => 'E02003525',
        '3PF' => 'E02003525',
        '3PG' => 'E02003525',
        '3PH' => 'E02003525',
        '3PJ' => 'E02003527',
        '3PL' => 'E02003524',
        '3PN' => 'E02003525',
        '3PP' => 'E02003524',
        '3PQ' => 'E02003527',
        '3PR' => 'E02003524',
        '3PS' => 'E02003524',
        '3PT' => 'E02003524',
        '3PU' => 'E02003524',
        '3PW' => 'E02003524',
        '3PX' => 'E02003524',
        '3PY' => 'E02003524',
        '3PZ' => 'E02003524',
        '3QA' => 'E02003524',
        '3QB' => 'E02003524',
        '3QD' => 'E02003524',
        '3QE' => 'E02003524',
        '3QG' => 'E02003524',
        '3QH' => 'E02003524',
        '3QJ' => 'E02003525',
        '3QL' => 'E02003525',
        '3QN' => 'E02003525',
        '3QP' => 'E02003524',
        '3QR' => 'E02003525',
        '3QS' => 'E02003525',
        '3QT' => 'E02003525',
        '3QU' => 'E02003525',
        '3QX' => 'E02003525',
        '3QY' => 'E02003525',
        '3QZ' => 'E02003525',
        '3RA' => 'E02003525',
        '3RB' => 'E02003525',
        '3RD' => 'E02003525',
        '3RE' => 'E02003525',
        '3RF' => 'E02003525',
        '3RG' => 'E02003525',
        '3RH' => 'E02003525',
        '3RJ' => 'E02003525',
        '3RL' => 'E02003525',
        '3RN' => 'E02003525',
        '3RP' => 'E02003525',
        '3RQ' => 'E02003525',
        '3RR' => 'E02003525',
        '3RS' => 'E02003525',
        '3RT' => 'E02003525',
        '3RU' => 'E02003524',
        '3RW' => 'E02003525',
        '3RX' => 'E02003527',
        '3SA' => 'E02003525',
        '3SB' => 'E02003525',
        '3SD' => 'E02003525',
        '3SE' => 'E02003525',
        '3SG' => 'E02003524',
        '3SH' => 'E02003524',
        '3SJ' => 'E02003524',
        '3SL' => 'E02003524',
        '3SN' => 'E02003524',
        '3SP' => 'E02003525',
        '3SQ' => 'E02003524',
        '3SR' => 'E02003525',
        '3SS' => 'E02003524',
        '3ST' => 'E02003524',
        '3SU' => 'E02003525',
        '3SW' => 'E02003524',
        '3SX' => 'E02003527',
        '3SY' => 'E02003525',
        '3TA' => 'E02003525',
        '3TB' => 'E02003525',
        '3TD' => 'E02003525',
        '3TE' => 'E02003527',
        '3TF' => 'E02003525',
        '3TG' => 'E02003527',
        '3TH' => 'E02003525',
        '3TJ' => 'E02003525',
        '3TL' => 'E02003525',
        '3TP' => 'E02003525',
        '3TQ' => 'E02003525',
        '3TR' => 'E02003527',
        '3TS' => 'E02003525',
        '3TT' => 'E02003525',
        '3TU' => 'E02003525',
        '3TX' => 'E02003525',
        '3UA' => 'E02003527',
        '3UB' => 'E02003525',
        '3UD' => 'E02003526',
        '3UE' => 'E02003526',
        '3UF' => 'E02003526',
        '3UG' => 'E02003526',
        '3UH' => 'E02003526',
        '3UJ' => 'E02003526',
        '3UL' => 'E02003525',
        '3UN' => 'E02003527',
        '3UP' => 'E02003525',
        '3UQ' => 'E02003526',
        '3UR' => 'E02003525',
        '3US' => 'E02003525',
        '3UT' => 'E02003525',
        '3UU' => 'E02003525',
        '3UX' => 'E02003525',
        '3WA' => 'E02003527',
        '3WB' => 'E02003525',
        '3WD' => 'E02003527',
        '3WN' => 'E02003527',
        '3WP' => 'E02003527',
        '3WQ' => 'E02003527',
        '3WR' => 'E02003527',
        '3WS' => 'E02003527',
        '3WT' => 'E02003525',
        '3WU' => 'E02003527',
        '3WW' => 'E02003527',
        '3WX' => 'E02003527',
        '3WY' => 'E02003527',
        '3WZ' => 'E02003527',
        '3XA' => 'E02003527',
        '3XB' => 'E02003527',
        '3XD' => 'E02003525',
        '3XE' => 'E02003526',
        '3XF' => 'E02003526',
        '3XG' => 'E02003526',
        '3XH' => 'E02003527',
        '3XJ' => 'E02003526',
        '3XL' => 'E02003529',
        '3XN' => 'E02003526',
        '3XP' => 'E02003527',
        '3XQ' => 'E02003525',
        '3XR' => 'E02003527',
        '3XS' => 'E02003527',
        '3XT' => 'E02003526',
        '3XU' => 'E02003526',
        '3XW' => 'E02003526',
        '3YA' => 'E02003525',
        '3YB' => 'E02003525',
        '3YG' => 'E02003525',
        '3YH' => 'E02003525',
        '3YJ' => 'E02003527',
        '3YQ' => 'E02003526',
        '3ZN' => 'E02003527',
        '3ZQ' => 'E02003527',
        '4AA' => 'E02003524',
        '4AB' => 'E02003527',
        '4AD' => 'E02003524',
        '4AE' => 'E02003524',
        '4AF' => 'E02003524',
        '4AG' => 'E02003524',
        '4AH' => 'E02003524',
        '4AJ' => 'E02003524',
        '4AL' => 'E02003524',
        '4AN' => 'E02003524',
        '4AP' => 'E02003524',
        '4AQ' => 'E02003524',
        '4AR' => 'E02003524',
        '4AS' => 'E02003524',
        '4AT' => 'E02003524',
        '4AU' => 'E02003524',
        '4AW' => 'E02003524',
        '4AX' => 'E02003524',
        '4AY' => 'E02003524',
        '4AZ' => 'E02003524',
        '4BA' => 'E02003524',
        '4BB' => 'E02003524',
        '4BD' => 'E02003524',
        '4BE' => 'E02003524',
        '4BF' => 'E02003527',
        '4BG' => 'E02003524',
        '4BH' => 'E02003524',
        '4BJ' => 'E02003524',
        '4BL' => 'E02003524',
        '4BN' => 'E02003524',
        '4BP' => 'E02003524',
        '4BQ' => 'E02003524',
        '4BS' => 'E02003524',
        '4BT' => 'E02003524',
        '4BU' => 'E02003524',
        '4BW' => 'E02003527',
        '4BX' => 'E02003524',
        '4BY' => 'E02003524',
        '4BZ' => 'E02003524',
        '4DA' => 'E02003524',
        '4DB' => 'E02003524',
        '4DD' => 'E02003524',
        '4DE' => 'E02003524',
        '4DF' => 'E02003524',
        '4DG' => 'E02003524',
        '4DH' => 'E02003524',
        '4DJ' => 'E02003524',
        '4DL' => 'E02003524',
        '4DN' => 'E02003524',
        '4DP' => 'E02003524',
        '4DQ' => 'E02003524',
        '4DR' => 'E02003524',
        '4DS' => 'E02003524',
        '4DT' => 'E02003524',
        '4DU' => 'E02003524',
        '4DW' => 'E02003524',
        '4DX' => 'E02003524',
        '4DY' => 'E02003524',
        '4DZ' => 'E02003524',
        '4EA' => 'E02003524',
        '4EB' => 'E02003524',
        '4ED' => 'E02003524',
        '4EE' => 'E02003524',
        '4EF' => 'E02003524',
        '4EG' => 'E02003524',
        '4EH' => 'E02003524',
        '4EJ' => 'E02003524',
        '4EL' => 'E02003524',
        '4EN' => 'E02003524',
        '4EP' => 'E02003524',
        '4EQ' => 'E02003524',
        '4ER' => 'E02003524',
        '4ES' => 'E02003524',
        '4ET' => 'E02003524',
        '4EU' => 'E02003524',
        '4EW' => 'E02003527',
        '4EX' => 'E02003524',
        '4EY' => 'E02003524',
        '4EZ' => 'E02003527',
        '4FA' => 'E02003524',
        '4FB' => 'E02003525',
        '4FD' => 'E02003524',
        '4FE' => 'E02003527',
        '4FF' => 'E02003527',
        '4FG' => 'E02003525',
        '4FH' => 'E02003524',
        '4FJ' => 'E02003524',
        '4HA' => 'E02003524',
        '4HB' => 'E02003524',
        '4HD' => 'E02003524',
        '4HE' => 'E02003524',
        '4HF' => 'E02003524',
        '4HG' => 'E02003524',
        '4HH' => 'E02003524',
        '4HJ' => 'E02003524',
        '4HL' => 'E02003524',
        '4HN' => 'E02003524',
        '4HP' => 'E02003524',
        '4HQ' => 'E02003524',
        '4HR' => 'E02003524',
        '4HS' => 'E02003524',
        '4HT' => 'E02003524',
        '4HU' => 'E02003524',
        '4HW' => 'E02003524',
        '4HX' => 'E02003524',
        '4HY' => 'E02003524',
        '4HZ' => 'E02003524',
        '4JA' => 'E02003524',
        '4JB' => 'E02003524',
        '4JD' => 'E02003524',
        '4JE' => 'E02003524',
        '4JF' => 'E02003527',
        '4JG' => 'E02003524',
        '4JH' => 'E02003527',
        '4JJ' => 'E02003524',
        '4JL' => 'E02003527',
        '4JN' => 'E02003524',
        '4JP' => 'E02003524',
        '4JQ' => 'E02003524',
        '4JR' => 'E02003524',
        '4JS' => 'E02003524',
        '4JT' => 'E02003524',
        '4JU' => 'E02003527',
        '4JW' => 'E02003524',
        '4LA' => 'E02003524',
        '4LB' => 'E02003524',
        '4LD' => 'E02003524',
        '4LE' => 'E02003524',
        '4LF' => 'E02003524',
        '4LG' => 'E02003524',
        '4LH' => 'E02003527',
        '4LJ' => 'E02003527',
        '4LL' => 'E02003527',
        '4LN' => 'E02003527',
        '4LP' => 'E02003524',
        '4LQ' => 'E02003524',
        '4LR' => 'E02003524',
        '4LS' => 'E02003524',
        '4LT' => 'E02003524',
        '4LU' => 'E02003524',
        '4LW' => 'E02003527',
        '4LX' => 'E02003527',
        '4LY' => 'E02003527',
        '4LZ' => 'E02003527',
        '4NA' => 'E02003527',
        '4NB' => 'E02003527',
        '4ND' => 'E02003527',
        '4NE' => 'E02003527',
        '4NF' => 'E02003524',
        '4NG' => 'E02003524',
        '4NH' => 'E02003524',
        '4NJ' => 'E02003524',
        '4NP' => 'E02003527',
        '4NQ' => 'E02003524',
        '4NR' => 'E02003527',
        '4NS' => 'E02003527',
        '4NT' => 'E02003527',
        '4NX' => 'E02003527',
        '4NY' => 'E02003527',
        '4NZ' => 'E02003527',
        '4PA' => 'E02003527',
        '4PB' => 'E02003527',
        '4PD' => 'E02003527',
        '4PE' => 'E02003527',
        '4PF' => 'E02003527',
        '4PG' => 'E02003527',
        '4PH' => 'E02003527',
        '4PJ' => 'E02003527',
        '4PL' => 'E02003527',
        '4PN' => 'E02003527',
        '4PP' => 'E02003527',
        '4PR' => 'E02003525',
        '4PS' => 'E02003525',
        '4PT' => 'E02003527',
        '4PU' => 'E02003527',
        '4PX' => 'E02003527',
        '4PY' => 'E02003527',
        '4PZ' => 'E02003527',
        '4QA' => 'E02003527',
        '4QB' => 'E02003527',
        '4QD' => 'E02003527',
        '4QE' => 'E02003527',
        '4QF' => 'E02003527',
        '4QG' => 'E02003527',
        '4QH' => 'E02003527',
        '4QJ' => 'E02003527',
        '4QL' => 'E02003527',
        '4QN' => 'E02003527',
        '4QP' => 'E02003527',
        '4QQ' => 'E02003527',
        '4QR' => 'E02003524',
        '4QS' => 'E02003527',
        '4QT' => 'E02003527',
        '4QU' => 'E02003524',
        '4QW' => 'E02003527',
        '4QX' => 'E02003527',
        '4QY' => 'E02003527',
        '4QZ' => 'E02003527',
        '4RA' => 'E02003527',
        '4RB' => 'E02003527',
        '4RD' => 'E02003527',
        '4RE' => 'E02003527',
        '4RF' => 'E02003527',
        '4RG' => 'E02003527',
        '4RH' => 'E02003524',
        '4RJ' => 'E02003524',
        '4RL' => 'E02003524',
        '4RN' => 'E02003527',
        '4RP' => 'E02003525',
        '4RQ' => 'E02003527',
        '4RR' => 'E02003527',
        '4RS' => 'E02003525',
        '4RT' => 'E02003527',
        '4RU' => 'E02003527',
        '4RW' => 'E02003524',
        '4RX' => 'E02003527',
        '4RY' => 'E02003527',
        '4RZ' => 'E02003527',
        '4SA' => 'E02003525',
        '4SB' => 'E02003525',
        '4SD' => 'E02003527',
        '4SE' => 'E02003527',
        '4SF' => 'E02003525',
        '4SG' => 'E02003527',
        '4SH' => 'E02003525',
        '4SJ' => 'E02003525',
        '4SL' => 'E02003527',
        '4SN' => 'E02003527',
        '4SP' => 'E02003527',
        '4SQ' => 'E02003527',
        '4SR' => 'E02003525',
        '4SS' => 'E02003527',
        '4ST' => 'E02003525',
        '4SU' => 'E02003527',
        '4SW' => 'E02003527',
        '4SX' => 'E02003527',
        '4SY' => 'E02003527',
        '4SZ' => 'E02003527',
        '4TA' => 'E02003527',
        '4TB' => 'E02003527',
        '4TD' => 'E02003527',
        '4TE' => 'E02003527',
        '4TF' => 'E02003527',
        '4TG' => 'E02003527',
        '4TH' => 'E02003527',
        '4TJ' => 'E02003527',
        '4TL' => 'E02003527',
        '4TN' => 'E02003527',
        '4TP' => 'E02003527',
        '4TQ' => 'E02003527',
        '4TR' => 'E02003527',
        '4TS' => 'E02003527',
        '4TT' => 'E02003527',
        '4TU' => 'E02003524',
        '4TW' => 'E02003527',
        '4TX' => 'E02003524',
        '4TY' => 'E02003527',
        '4TZ' => 'E02003527',
        '4UB' => 'E02003524',
        '4UD' => 'E02003527',
        '4UE' => 'E02003527',
        '4UF' => 'E02003527',
        '4UG' => 'E02003527',
        '4UH' => 'E02003527',
        '4UJ' => 'E02003524',
        '4UL' => 'E02003527',
        '4UP' => 'E02003524',
        '4UQ' => 'E02003527',
        '4UR' => 'E02003524',
        '4UT' => 'E02003524',
        '4UU' => 'E02003524',
        '4UW' => 'E02003527',
        '4UX' => 'E02003524',
        '4UY' => 'E02003527',
        '4UZ' => 'E02003527',
        '4WA' => 'E02003527',
        '4WB' => 'E02003527',
        '4WD' => 'E02003527',
        '4WE' => 'E02003527',
        '4WF' => 'E02003527',
        '4WG' => 'E02003527',
        '4WH' => 'E02003527',
        '4WL' => 'E02003527',
        '4WN' => 'E02003527',
        '4WP' => 'E02003527',
        '4WT' => 'E02003527',
        '4WU' => 'E02003527',
        '4WW' => 'E02003527',
        '4WX' => 'E02003527',
        '4WY' => 'E02003527',
        '4WZ' => 'E02003527',
        '4XA' => 'E02003527',
        '4XB' => 'E02003527',
        '4XD' => 'E02003527',
        '4XE' => 'E02003527',
        '4YA' => 'E02003527',
        '4YG' => 'E02003527',
        '4YH' => 'E02003527',
        '4YJ' => 'E02003524',
        '4YL' => 'E02003524',
        '4YN' => 'E02003527',
        '4YP' => 'E02003524',
        '4YQ' => 'E02003527',
        '4YR' => 'E02003524',
        '4YT' => 'E02003527',
        '4YU' => 'E02003524',
        '4YW' => 'E02003527',
        '4ZF' => 'E02003527',
        '4ZG' => 'E02003527',
        '4ZH' => 'E02003527',
        '4ZJ' => 'E02003527',
        '4ZL' => 'E02003527',
        '4ZN' => 'E02003527',
        '4ZP' => 'E02003527',
        '4ZQ' => 'E02003527',
        '4ZR' => 'E02003527',
        '4ZS' => 'E02003527',
        '4ZT' => 'E02003527',
        '4ZW' => 'E02003527',
        '9AA' => 'E02003527',
        '9AB' => 'E02003527',
        '9AD' => 'E02003527',
        '9AE' => 'E02003527',
        '9AF' => 'E02003527',
        '9AG' => 'E02003527',
        '9AH' => 'E02003527',
        '9AJ' => 'E02003527',
        '9AL' => 'E02003527',
        '9AN' => 'E02003527',
        '9AP' => 'E02003527',
        '9AQ' => 'E02003527',
        '9AR' => 'E02003527',
        '9AS' => 'E02003527',
        '9AT' => 'E02003527',
        '9AU' => 'E02003527',
        '9AW' => 'E02003527',
        '9AX' => 'E02003527',
        '9AY' => 'E02003527',
        '9AZ' => 'E02003527',
        '9BA' => 'E02003527',
        '9BB' => 'E02003527',
        '9BD' => 'E02003527',
        '9BE' => 'E02003527',
        '9BF' => 'E02003527',
        '9BG' => 'E02003527',
        '9BH' => 'E02003527',
        '9BJ' => 'E02003527',
        '9BL' => 'E02003527',
        '9BN' => 'E02003527',
        '9BP' => 'E02003527',
        '9BQ' => 'E02003527',
        '9BR' => 'E02003527',
        '9BS' => 'E02003527',
        '9BT' => 'E02003527',
        '9BU' => 'E02003527',
        '9BW' => 'E02003527',
        '9BX' => 'E02003527',
        '9BY' => 'E02003527',
        '9BZ' => 'E02003527',
        '9DA' => 'E02003527',
        '9DB' => 'E02003527',
        '9DD' => 'E02003527',
        '9DE' => 'E02003527',
        '9DF' => 'E02003527',
        '9DG' => 'E02003527',
        '9DH' => 'E02003527',
        '9DJ' => 'E02003527',
        '9DL' => 'E02003527',
        '9DN' => 'E02003527',
        '9DP' => 'E02003527',
        '9DQ' => 'E02003527',
        '9DR' => 'E02003527',
        '9DS' => 'E02003527',
        '9DT' => 'E02003527',
        '9DU' => 'E02003527',
        '9DW' => 'E02003527',
        '9DX' => 'E02003527',
        '9DY' => 'E02003527',
        '9DZ' => 'E02003527',
        '9EA' => 'E02003527',
        '9EB' => 'E02003527',
        '9ED' => 'E02003527',
        '9EE' => 'E02003527',
        '9EF' => 'E02003527',
        '9EG' => 'E02003527',
        '9EH' => 'E02003527',
        '9EJ' => 'E02003527',
        '9EL' => 'E02003527',
        '9EN' => 'E02003527',
        '9EP' => 'E02003527',
        '9EQ' => 'E02003527',
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
