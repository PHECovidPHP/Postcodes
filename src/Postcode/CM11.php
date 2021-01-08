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
final class CM11
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02004426',
        '1AB' => 'E02004426',
        '1AD' => 'E02004427',
        '1AE' => 'E02004426',
        '1AF' => 'E02004426',
        '1AG' => 'E02004426',
        '1AH' => 'E02004426',
        '1AJ' => 'E02004426',
        '1AL' => 'E02004426',
        '1AN' => 'E02004426',
        '1AP' => 'E02004426',
        '1AQ' => 'E02004426',
        '1AR' => 'E02004426',
        '1AS' => 'E02004426',
        '1AT' => 'E02004426',
        '1AU' => 'E02004426',
        '1AW' => 'E02004426',
        '1AX' => 'E02004427',
        '1AY' => 'E02004426',
        '1BB' => 'E02004426',
        '1BD' => 'E02004426',
        '1BE' => 'E02004426',
        '1BF' => 'E02004427',
        '1BG' => 'E02004426',
        '1BH' => 'E02004426',
        '1BJ' => 'E02004426',
        '1BL' => 'E02004426',
        '1BN' => 'E02004426',
        '1BP' => 'E02004426',
        '1BQ' => 'E02004426',
        '1BS' => 'E02004426',
        '1BT' => 'E02004424',
        '1BU' => 'E02004424',
        '1BW' => 'E02004502',
        '1BX' => 'E02004502',
        '1BY' => 'E02004426',
        '1BZ' => 'E02004424',
        '1DA' => 'E02004427',
        '1DB' => 'E02004424',
        '1DD' => 'E02004424',
        '1DE' => 'E02004424',
        '1DF' => 'E02004424',
        '1DG' => 'E02004424',
        '1DH' => 'E02004424',
        '1DJ' => 'E02004424',
        '1DL' => 'E02004424',
        '1DN' => 'E02004502',
        '1DP' => 'E02004424',
        '1DQ' => 'E02004424',
        '1DR' => 'E02004424',
        '1DS' => 'E02004424',
        '1DT' => 'E02004424',
        '1DU' => 'E02004424',
        '1DW' => 'E02004424',
        '1DX' => 'E02004424',
        '1DY' => 'E02004424',
        '1DZ' => 'E02004424',
        '1EA' => 'E02004424',
        '1EB' => 'E02004424',
        '1ED' => 'E02004424',
        '1EE' => 'E02004424',
        '1EF' => 'E02004424',
        '1EG' => 'E02004424',
        '1EH' => 'E02004424',
        '1EJ' => 'E02004424',
        '1EL' => 'E02004424',
        '1EN' => 'E02004424',
        '1EP' => 'E02004424',
        '1EQ' => 'E02004424',
        '1ER' => 'E02004424',
        '1ES' => 'E02004424',
        '1ET' => 'E02004424',
        '1EU' => 'E02004424',
        '1EW' => 'E02004502',
        '1EX' => 'E02004424',
        '1EY' => 'E02004424',
        '1EZ' => 'E02004424',
        '1FF' => 'E02004427',
        '1FT' => 'E02004502',
        '1GG' => 'E02004426',
        '1GT' => 'E02004502',
        '1HA' => 'E02004424',
        '1HB' => 'E02004424',
        '1HD' => 'E02004424',
        '1HE' => 'E02004502',
        '1HF' => 'E02004502',
        '1HG' => 'E02004424',
        '1HH' => 'E02004424',
        '1HJ' => 'E02004502',
        '1HL' => 'E02004502',
        '1HN' => 'E02004502',
        '1HP' => 'E02004502',
        '1HQ' => 'E02004424',
        '1HR' => 'E02004502',
        '1HS' => 'E02004502',
        '1HT' => 'E02004427',
        '1HU' => 'E02004502',
        '1HW' => 'E02004427',
        '1HX' => 'E02004502',
        '1HY' => 'E02004502',
        '1HZ' => 'E02004502',
        '1JA' => 'E02004502',
        '1JB' => 'E02004502',
        '1JD' => 'E02004502',
        '1JE' => 'E02004502',
        '1JF' => 'E02004502',
        '1JG' => 'E02004502',
        '1JH' => 'E02004502',
        '1JJ' => 'E02004502',
        '1JL' => 'E02004502',
        '1JN' => 'E02004502',
        '1JP' => 'E02004502',
        '1JQ' => 'E02004502',
        '1JR' => 'E02004502',
        '1JS' => 'E02004502',
        '1JT' => 'E02004502',
        '1JU' => 'E02004502',
        '1JW' => 'E02004427',
        '1JX' => 'E02004502',
        '1JY' => 'E02004502',
        '1JZ' => 'E02004502',
        '1LA' => 'E02004502',
        '1LB' => 'E02004502',
        '1LD' => 'E02004502',
        '1LE' => 'E02004502',
        '1LF' => 'E02004502',
        '1LG' => 'E02004502',
        '1LH' => 'E02004502',
        '1LJ' => 'E02004502',
        '1LL' => 'E02004502',
        '1LN' => 'E02004426',
        '1LP' => 'E02004502',
        '1LQ' => 'E02004426',
        '1LR' => 'E02004426',
        '1LS' => 'E02004426',
        '1LT' => 'E02004426',
        '1LU' => 'E02004426',
        '1LW' => 'E02004502',
        '1LX' => 'E02004502',
        '1LY' => 'E02004502',
        '1LZ' => 'E02004502',
        '1NA' => 'E02004502',
        '1NB' => 'E02004502',
        '1ND' => 'E02004502',
        '1NE' => 'E02004502',
        '1NF' => 'E02004502',
        '1NH' => 'E02004502',
        '1NJ' => 'E02004502',
        '1NL' => 'E02004502',
        '1NN' => 'E02004502',
        '1NP' => 'E02004429',
        '1NQ' => 'E02004502',
        '1NR' => 'E02004429',
        '1NS' => 'E02004429',
        '1NU' => 'E02004502',
        '1NX' => 'E02004502',
        '1NY' => 'E02004502',
        '1NZ' => 'E02004502',
        '1PA' => 'E02004502',
        '1PB' => 'E02004502',
        '1PD' => 'E02004502',
        '1PF' => 'E02004502',
        '1PH' => 'E02004429',
        '1PJ' => 'E02004429',
        '1PL' => 'E02004429',
        '1PP' => 'E02004502',
        '1PQ' => 'E02004502',
        '1PR' => 'E02004502',
        '1PS' => 'E02004502',
        '1PT' => 'E02004502',
        '1PU' => 'E02004502',
        '1PW' => 'E02004502',
        '1PX' => 'E02004502',
        '1PY' => 'E02004502',
        '1PZ' => 'E02004502',
        '1QA' => 'E02004502',
        '1QB' => 'E02004502',
        '1QD' => 'E02004502',
        '1QE' => 'E02004502',
        '1QF' => 'E02004502',
        '1QH' => 'E02004502',
        '1QJ' => 'E02004502',
        '1QL' => 'E02004502',
        '1QN' => 'E02004502',
        '1QP' => 'E02004502',
        '1QQ' => 'E02004502',
        '1QR' => 'E02004502',
        '1QS' => 'E02004502',
        '1QT' => 'E02004502',
        '1QU' => 'E02004502',
        '1QW' => 'E02004427',
        '1QX' => 'E02004427',
        '1QY' => 'E02004502',
        '1QZ' => 'E02004502',
        '1RA' => 'E02004429',
        '1RE' => 'E02004429',
        '1RF' => 'E02004502',
        '1RG' => 'E02004432',
        '1RH' => 'E02004429',
        '1RJ' => 'E02004429',
        '1RL' => 'E02004429',
        '1RN' => 'E02004429',
        '1RP' => 'E02004429',
        '1RQ' => 'E02004502',
        '1RR' => 'E02004429',
        '1RS' => 'E02004429',
        '1RT' => 'E02004429',
        '1RU' => 'E02004427',
        '1RW' => 'E02004502',
        '1SA' => 'E02004424',
        '1SB' => 'E02004424',
        '1SD' => 'E02004424',
        '1SE' => 'E02004424',
        '1SF' => 'E02004424',
        '1SG' => 'E02004424',
        '1SH' => 'E02004424',
        '1SJ' => 'E02004424',
        '1SL' => 'E02004424',
        '1SN' => 'E02004424',
        '1SQ' => 'E02004424',
        '1SR' => 'E02004427',
        '1SX' => 'E02004424',
        '1SY' => 'E02004424',
        '1SZ' => 'E02004424',
        '1UZ' => 'E02004427',
        '1WA' => 'E02004424',
        '1WB' => 'E02004424',
        '1WD' => 'E02004427',
        '1WE' => 'E02004427',
        '1WF' => 'E02004427',
        '1WG' => 'E02004424',
        '1WH' => 'E02004427',
        '1WJ' => 'E02004424',
        '1WL' => 'E02004424',
        '1WN' => 'E02004427',
        '1WP' => 'E02004427',
        '1WQ' => 'E02004427',
        '1WR' => 'E02004427',
        '1WS' => 'E02004427',
        '1WT' => 'E02004502',
        '1WU' => 'E02004427',
        '1WW' => 'E02004427',
        '1WX' => 'E02004427',
        '1WY' => 'E02004427',
        '1WZ' => 'E02004427',
        '1XQ' => 'E02004502',
        '1XT' => 'E02004427',
        '1YB' => 'E02004424',
        '1YE' => 'E02004427',
        '1YZ' => 'E02004502',
        '1ZY' => 'E02004427',
        '2AA' => 'E02004426',
        '2AB' => 'E02004426',
        '2AD' => 'E02004426',
        '2AE' => 'E02004426',
        '2AF' => 'E02004432',
        '2AG' => 'E02004426',
        '2AH' => 'E02004426',
        '2AJ' => 'E02004426',
        '2AL' => 'E02004426',
        '2AN' => 'E02004426',
        '2AP' => 'E02004426',
        '2AQ' => 'E02004427',
        '2AR' => 'E02004426',
        '2AS' => 'E02004426',
        '2AT' => 'E02004426',
        '2AU' => 'E02004427',
        '2AW' => 'E02004426',
        '2AX' => 'E02004426',
        '2AY' => 'E02004427',
        '2AZ' => 'E02004426',
        '2BA' => 'E02004426',
        '2BB' => 'E02004426',
        '2BD' => 'E02004426',
        '2BE' => 'E02004426',
        '2BG' => 'E02004426',
        '2BH' => 'E02004426',
        '2BJ' => 'E02004426',
        '2BL' => 'E02004426',
        '2BN' => 'E02004426',
        '2BP' => 'E02004426',
        '2BQ' => 'E02004426',
        '2BS' => 'E02004426',
        '2BT' => 'E02004427',
        '2BU' => 'E02004427',
        '2BW' => 'E02004427',
        '2BX' => 'E02004427',
        '2BY' => 'E02004427',
        '2BZ' => 'E02004427',
        '2DA' => 'E02004426',
        '2DB' => 'E02004427',
        '2DD' => 'E02004427',
        '2DE' => 'E02004426',
        '2DF' => 'E02004426',
        '2DG' => 'E02004426',
        '2DH' => 'E02004426',
        '2DJ' => 'E02004426',
        '2DL' => 'E02004426',
        '2DN' => 'E02004426',
        '2DP' => 'E02004426',
        '2DQ' => 'E02004426',
        '2DR' => 'E02004426',
        '2DS' => 'E02004426',
        '2DT' => 'E02004426',
        '2DU' => 'E02004426',
        '2DW' => 'E02004426',
        '2DX' => 'E02004426',
        '2DY' => 'E02004432',
        '2DZ' => 'E02004426',
        '2EA' => 'E02004426',
        '2EB' => 'E02004426',
        '2ED' => 'E02004424',
        '2EE' => 'E02004426',
        '2EF' => 'E02004424',
        '2EG' => 'E02004424',
        '2EH' => 'E02004426',
        '2EJ' => 'E02004426',
        '2EL' => 'E02004427',
        '2EN' => 'E02004432',
        '2EP' => 'E02004426',
        '2EQ' => 'E02004432',
        '2ER' => 'E02004426',
        '2ES' => 'E02004426',
        '2ET' => 'E02004426',
        '2EU' => 'E02004426',
        '2EW' => 'E02004427',
        '2EX' => 'E02004426',
        '2EZ' => 'E02004426',
        '2HA' => 'E02004426',
        '2HB' => 'E02004426',
        '2HD' => 'E02004427',
        '2HE' => 'E02004432',
        '2HG' => 'E02004426',
        '2HH' => 'E02004426',
        '2HJ' => 'E02004426',
        '2HL' => 'E02004426',
        '2HN' => 'E02004426',
        '2HP' => 'E02004426',
        '2HQ' => 'E02004426',
        '2HR' => 'E02004426',
        '2HS' => 'E02004426',
        '2HT' => 'E02004426',
        '2HU' => 'E02004426',
        '2HW' => 'E02004426',
        '2HX' => 'E02004427',
        '2HY' => 'E02004427',
        '2HZ' => 'E02004426',
        '2JA' => 'E02004432',
        '2JB' => 'E02004427',
        '2JD' => 'E02004432',
        '2JE' => 'E02004432',
        '2JF' => 'E02004426',
        '2JG' => 'E02004426',
        '2JH' => 'E02004426',
        '2JJ' => 'E02004426',
        '2JL' => 'E02004426',
        '2JN' => 'E02004426',
        '2JP' => 'E02004426',
        '2JQ' => 'E02004426',
        '2JR' => 'E02004426',
        '2JS' => 'E02004426',
        '2JT' => 'E02004426',
        '2JU' => 'E02004426',
        '2JW' => 'E02004426',
        '2JX' => 'E02004426',
        '2JY' => 'E02004426',
        '2JZ' => 'E02004426',
        '2LA' => 'E02004426',
        '2LB' => 'E02004426',
        '2LD' => 'E02004426',
        '2LE' => 'E02004426',
        '2LF' => 'E02004427',
        '2LG' => 'E02004426',
        '2LH' => 'E02004426',
        '2LJ' => 'E02004426',
        '2LL' => 'E02004426',
        '2LN' => 'E02004424',
        '2LP' => 'E02004426',
        '2LQ' => 'E02004427',
        '2LR' => 'E02004426',
        '2LS' => 'E02004424',
        '2LT' => 'E02004424',
        '2LU' => 'E02004424',
        '2LW' => 'E02004426',
        '2LX' => 'E02004424',
        '2LY' => 'E02004424',
        '2LZ' => 'E02004424',
        '2NA' => 'E02004424',
        '2NB' => 'E02004424',
        '2ND' => 'E02004424',
        '2NE' => 'E02004424',
        '2NF' => 'E02004424',
        '2NG' => 'E02004424',
        '2NH' => 'E02004427',
        '2NJ' => 'E02004427',
        '2NL' => 'E02004427',
        '2NN' => 'E02004427',
        '2NP' => 'E02004427',
        '2NQ' => 'E02004424',
        '2NR' => 'E02004427',
        '2NS' => 'E02004427',
        '2NT' => 'E02004427',
        '2NU' => 'E02004427',
        '2NW' => 'E02004427',
        '2NX' => 'E02004427',
        '2NY' => 'E02004426',
        '2NZ' => 'E02004427',
        '2PA' => 'E02004427',
        '2PB' => 'E02004432',
        '2PD' => 'E02004432',
        '2PE' => 'E02004432',
        '2PF' => 'E02004432',
        '2PG' => 'E02004427',
        '2PH' => 'E02004427',
        '2PJ' => 'E02004427',
        '2PL' => 'E02004432',
        '2PN' => 'E02004427',
        '2PP' => 'E02004432',
        '2PQ' => 'E02004427',
        '2PR' => 'E02004432',
        '2PS' => 'E02004432',
        '2PT' => 'E02004432',
        '2PU' => 'E02004432',
        '2PW' => 'E02004432',
        '2PX' => 'E02004432',
        '2PY' => 'E02004432',
        '2PZ' => 'E02004432',
        '2QA' => 'E02004432',
        '2QB' => 'E02004432',
        '2QD' => 'E02004432',
        '2QE' => 'E02004432',
        '2QF' => 'E02004432',
        '2QG' => 'E02004432',
        '2QH' => 'E02004432',
        '2QJ' => 'E02004432',
        '2QL' => 'E02004432',
        '2QN' => 'E02004432',
        '2QP' => 'E02004432',
        '2QQ' => 'E02004432',
        '2QR' => 'E02004432',
        '2QS' => 'E02004432',
        '2QT' => 'E02004432',
        '2QU' => 'E02004432',
        '2QW' => 'E02004432',
        '2QX' => 'E02004427',
        '2QY' => 'E02004432',
        '2QZ' => 'E02004427',
        '2RA' => 'E02004427',
        '2RB' => 'E02004427',
        '2RD' => 'E02004427',
        '2RE' => 'E02004427',
        '2RF' => 'E02004427',
        '2RG' => 'E02004432',
        '2RH' => 'E02004432',
        '2RJ' => 'E02004432',
        '2RL' => 'E02004432',
        '2RN' => 'E02004432',
        '2RP' => 'E02004432',
        '2RQ' => 'E02004432',
        '2RR' => 'E02004432',
        '2RS' => 'E02004432',
        '2RT' => 'E02004432',
        '2RU' => 'E02004432',
        '2RW' => 'E02004432',
        '2RX' => 'E02004432',
        '2RY' => 'E02004432',
        '2RZ' => 'E02004432',
        '2SA' => 'E02004432',
        '2SB' => 'E02004432',
        '2SD' => 'E02004432',
        '2SE' => 'E02004432',
        '2SF' => 'E02004432',
        '2SG' => 'E02004432',
        '2SH' => 'E02004432',
        '2SJ' => 'E02004432',
        '2SL' => 'E02004432',
        '2SN' => 'E02004432',
        '2SP' => 'E02004432',
        '2SQ' => 'E02004427',
        '2SR' => 'E02004427',
        '2SS' => 'E02004432',
        '2ST' => 'E02004432',
        '2SU' => 'E02004432',
        '2SW' => 'E02004432',
        '2SX' => 'E02004432',
        '2SY' => 'E02004432',
        '2SZ' => 'E02004432',
        '2TA' => 'E02004432',
        '2TB' => 'E02004432',
        '2TD' => 'E02004432',
        '2TE' => 'E02004432',
        '2TF' => 'E02004432',
        '2TG' => 'E02004427',
        '2TH' => 'E02004432',
        '2TJ' => 'E02004427',
        '2TL' => 'E02004427',
        '2TN' => 'E02004432',
        '2TP' => 'E02004432',
        '2TQ' => 'E02004427',
        '2TR' => 'E02004432',
        '2TS' => 'E02004432',
        '2TT' => 'E02004427',
        '2TU' => 'E02004432',
        '2TW' => 'E02004432',
        '2TX' => 'E02004426',
        '2TY' => 'E02004432',
        '2TZ' => 'E02004432',
        '2UA' => 'E02004432',
        '2UB' => 'E02004432',
        '2UD' => 'E02004432',
        '2UE' => 'E02004432',
        '2UF' => 'E02004432',
        '2UG' => 'E02004432',
        '2UH' => 'E02004432',
        '2UJ' => 'E02004432',
        '2UL' => 'E02004432',
        '2UN' => 'E02004432',
        '2UP' => 'E02004432',
        '2UQ' => 'E02004432',
        '2UR' => 'E02004432',
        '2US' => 'E02004427',
        '2UT' => 'E02004432',
        '2UU' => 'E02004432',
        '2UW' => 'E02004427',
        '2UX' => 'E02004432',
        '2UY' => 'E02004432',
        '2UZ' => 'E02004432',
        '2WA' => 'E02004432',
        '2WB' => 'E02004427',
        '2WD' => 'E02004427',
        '2WE' => 'E02004427',
        '2WF' => 'E02004427',
        '2WG' => 'E02004427',
        '2WH' => 'E02004427',
        '2WJ' => 'E02004427',
        '2WL' => 'E02004427',
        '2WN' => 'E02004427',
        '2WP' => 'E02004427',
        '2WQ' => 'E02004427',
        '2WR' => 'E02004427',
        '2WS' => 'E02004427',
        '2WT' => 'E02004427',
        '2WU' => 'E02004427',
        '2WW' => 'E02004427',
        '2WX' => 'E02004427',
        '2WY' => 'E02004427',
        '2WZ' => 'E02004427',
        '2XA' => 'E02004432',
        '2XB' => 'E02004432',
        '2XD' => 'E02004432',
        '2XE' => 'E02004432',
        '2XF' => 'E02004429',
        '2XG' => 'E02004432',
        '2XH' => 'E02004432',
        '2XJ' => 'E02004432',
        '2XL' => 'E02004432',
        '2XN' => 'E02004432',
        '2XP' => 'E02004432',
        '2XQ' => 'E02004432',
        '2XR' => 'E02004432',
        '2XS' => 'E02004432',
        '2XT' => 'E02004432',
        '2XU' => 'E02004432',
        '2XW' => 'E02004432',
        '2XX' => 'E02004432',
        '2XY' => 'E02004432',
        '2XZ' => 'E02004432',
        '2YA' => 'E02004432',
        '2YB' => 'E02004432',
        '2YD' => 'E02004432',
        '2YE' => 'E02004432',
        '2YF' => 'E02004432',
        '2YG' => 'E02004432',
        '2YH' => 'E02004432',
        '2YJ' => 'E02004432',
        '2YL' => 'E02004432',
        '2YN' => 'E02004432',
        '2YP' => 'E02004432',
        '2YQ' => 'E02004432',
        '2YR' => 'E02004432',
        '2YS' => 'E02004426',
        '2YT' => 'E02004426',
        '2YU' => 'E02004426',
        '2YW' => 'E02004432',
        '2YX' => 'E02004426',
        '2YY' => 'E02004426',
        '2YZ' => 'E02004426',
        '2ZA' => 'E02004427',
        '2ZB' => 'E02004427',
        '2ZD' => 'E02004432',
        '2ZE' => 'E02004427',
        '2ZU' => 'E02004427',
        '2ZW' => 'E02004427',
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
