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
final class KT21
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02006362',
        '1AB' => 'E02006362',
        '1AD' => 'E02006362',
        '1AE' => 'E02006362',
        '1AF' => 'E02006362',
        '1AG' => 'E02006363',
        '1AH' => 'E02006362',
        '1AJ' => 'E02006362',
        '1AL' => 'E02006362',
        '1AP' => 'E02006362',
        '1AQ' => 'E02006362',
        '1AS' => 'E02006362',
        '1AT' => 'E02006362',
        '1AW' => 'E02006362',
        '1AY' => 'E02006362',
        '1AZ' => 'E02006362',
        '1BA' => 'E02006362',
        '1BB' => 'E02006362',
        '1BD' => 'E02006362',
        '1BE' => 'E02006362',
        '1BG' => 'E02006362',
        '1BH' => 'E02006362',
        '1BJ' => 'E02006362',
        '1BL' => 'E02006362',
        '1BN' => 'E02006362',
        '1BQ' => 'E02006362',
        '1BS' => 'E02006362',
        '1BT' => 'E02006362',
        '1BU' => 'E02006362',
        '1BW' => 'E02006362',
        '1BX' => 'E02006362',
        '1BZ' => 'E02006362',
        '1DB' => 'E02006362',
        '1DD' => 'E02006362',
        '1DE' => 'E02006362',
        '1DF' => 'E02006362',
        '1DG' => 'E02006362',
        '1DH' => 'E02006362',
        '1DJ' => 'E02006362',
        '1DL' => 'E02006362',
        '1DP' => 'E02006362',
        '1DR' => 'E02006362',
        '1DS' => 'E02006362',
        '1DT' => 'E02006362',
        '1DU' => 'E02006362',
        '1DW' => 'E02006362',
        '1DX' => 'E02006362',
        '1DY' => 'E02006362',
        '1DZ' => 'E02006362',
        '1EA' => 'E02006362',
        '1EB' => 'E02006362',
        '1ED' => 'E02006362',
        '1EE' => 'E02006362',
        '1EG' => 'E02006362',
        '1EH' => 'E02006362',
        '1EJ' => 'E02006362',
        '1EN' => 'E02006362',
        '1ES' => 'E02006362',
        '1ET' => 'E02006362',
        '1EU' => 'E02006362',
        '1EW' => 'E02006362',
        '1EY' => 'E02006362',
        '1FA' => 'E02006362',
        '1FB' => 'E02006362',
        '1HA' => 'E02006362',
        '1HD' => 'E02006362',
        '1HF' => 'E02006362',
        '1HJ' => 'E02006362',
        '1HL' => 'E02006362',
        '1HN' => 'E02006362',
        '1HP' => 'E02006362',
        '1HQ' => 'E02006362',
        '1HR' => 'E02006362',
        '1HS' => 'E02006362',
        '1HU' => 'E02006362',
        '1HY' => 'E02006362',
        '1JA' => 'E02006362',
        '1JB' => 'E02006362',
        '1JE' => 'E02006362',
        '1JG' => 'E02006362',
        '1JL' => 'E02006362',
        '1JN' => 'E02006362',
        '1JQ' => 'E02006362',
        '1JR' => 'E02006362',
        '1JS' => 'E02006362',
        '1JT' => 'E02006362',
        '1JU' => 'E02006362',
        '1JX' => 'E02006362',
        '1LB' => 'E02006362',
        '1LD' => 'E02006362',
        '1LE' => 'E02006362',
        '1LF' => 'E02006362',
        '1LG' => 'E02006362',
        '1LH' => 'E02006362',
        '1LJ' => 'E02006362',
        '1LP' => 'E02006362',
        '1LQ' => 'E02006362',
        '1LR' => 'E02006362',
        '1LS' => 'E02006362',
        '1LT' => 'E02006362',
        '1LU' => 'E02006362',
        '1LW' => 'E02006362',
        '1LY' => 'E02006362',
        '1NA' => 'E02006362',
        '1NB' => 'E02006362',
        '1NE' => 'E02006362',
        '1NG' => 'E02006362',
        '1NH' => 'E02006362',
        '1NL' => 'E02006362',
        '1NN' => 'E02006362',
        '1NP' => 'E02006362',
        '1NQ' => 'E02006362',
        '1NR' => 'E02006362',
        '1NS' => 'E02006362',
        '1NT' => 'E02006362',
        '1NU' => 'E02006362',
        '1NW' => 'E02006362',
        '1NX' => 'E02006362',
        '1NY' => 'E02006362',
        '1NZ' => 'E02006343',
        '1PA' => 'E02006363',
        '1PB' => 'E02006362',
        '1PD' => 'E02006362',
        '1PE' => 'E02006362',
        '1PF' => 'E02006362',
        '1PG' => 'E02006362',
        '1PH' => 'E02006362',
        '1PJ' => 'E02006362',
        '1PL' => 'E02006362',
        '1PP' => 'E02006362',
        '1PQ' => 'E02006362',
        '1PR' => 'E02006362',
        '1PS' => 'E02006362',
        '1PT' => 'E02006362',
        '1PU' => 'E02006362',
        '1PW' => 'E02006362',
        '1PX' => 'E02006362',
        '1PY' => 'E02006362',
        '1PZ' => 'E02006363',
        '1QA' => 'E02006363',
        '1QB' => 'E02006363',
        '1QD' => 'E02006363',
        '1QE' => 'E02006363',
        '1QF' => 'E02006363',
        '1QG' => 'E02006363',
        '1QJ' => 'E02006363',
        '1QL' => 'E02006362',
        '1QN' => 'E02006363',
        '1QP' => 'E02006362',
        '1QQ' => 'E02006362',
        '1QR' => 'E02006362',
        '1QU' => 'E02006362',
        '1QX' => 'E02006362',
        '1QY' => 'E02006362',
        '1QZ' => 'E02006362',
        '1RB' => 'E02006362',
        '1RD' => 'E02006362',
        '1RE' => 'E02006362',
        '1RF' => 'E02006362',
        '1RG' => 'E02006362',
        '1RH' => 'E02006362',
        '1RL' => 'E02006362',
        '1RN' => 'E02006362',
        '1RP' => 'E02006362',
        '1RQ' => 'E02006362',
        '1RR' => 'E02006362',
        '1RS' => 'E02006362',
        '1RT' => 'E02006362',
        '1RU' => 'E02006362',
        '1RW' => 'E02006362',
        '1RX' => 'E02006362',
        '1RY' => 'E02006362',
        '1RZ' => 'E02006362',
        '1SA' => 'E02006362',
        '1SB' => 'E02006362',
        '1SD' => 'E02006362',
        '1SE' => 'E02006362',
        '1SF' => 'E02006362',
        '1SG' => 'E02006362',
        '1SH' => 'E02006362',
        '1SJ' => 'E02006362',
        '1SL' => 'E02006362',
        '1SN' => 'E02006362',
        '1SQ' => 'E02006362',
        '1SW' => 'E02006362',
        '1WA' => 'E02006362',
        '1WB' => 'E02006362',
        '1WD' => 'E02006362',
        '1WL' => 'E02006362',
        '1WN' => 'E02006362',
        '1WT' => 'E02006362',
        '1WY' => 'E02006362',
        '1YA' => 'E02006362',
        '1YB' => 'E02006362',
        '1YD' => 'E02006362',
        '1YE' => 'E02006362',
        '1YF' => 'E02006362',
        '1YG' => 'E02006362',
        '1YH' => 'E02006362',
        '1YJ' => 'E02006362',
        '1YL' => 'E02006362',
        '1YN' => 'E02006362',
        '1YP' => 'E02006362',
        '1YQ' => 'E02006362',
        '1YR' => 'E02006362',
        '1YS' => 'E02006362',
        '1YT' => 'E02006362',
        '1YU' => 'E02006362',
        '1YW' => 'E02006362',
        '1YX' => 'E02006362',
        '1YY' => 'E02006362',
        '1YZ' => 'E02006362',
        '2AA' => 'E02006363',
        '2AB' => 'E02006365',
        '2AD' => 'E02006363',
        '2AE' => 'E02006363',
        '2AF' => 'E02006362',
        '2AG' => 'E02006362',
        '2AH' => 'E02006362',
        '2AJ' => 'E02006362',
        '2AL' => 'E02006362',
        '2AN' => 'E02006362',
        '2AP' => 'E02006362',
        '2AQ' => 'E02006362',
        '2AR' => 'E02006362',
        '2AS' => 'E02006362',
        '2AT' => 'E02006362',
        '2AU' => 'E02006362',
        '2AW' => 'E02006362',
        '2AX' => 'E02006362',
        '2AY' => 'E02006362',
        '2AZ' => 'E02006362',
        '2BA' => 'E02006362',
        '2BB' => 'E02006362',
        '2BD' => 'E02006362',
        '2BE' => 'E02006362',
        '2BF' => 'E02006363',
        '2BG' => 'E02006363',
        '2BH' => 'E02006362',
        '2BJ' => 'E02006362',
        '2BL' => 'E02006363',
        '2BN' => 'E02006363',
        '2BP' => 'E02006362',
        '2BQ' => 'E02006362',
        '2BS' => 'E02006362',
        '2BT' => 'E02006363',
        '2BU' => 'E02006363',
        '2BW' => 'E02006362',
        '2BX' => 'E02006362',
        '2BY' => 'E02006363',
        '2BZ' => 'E02006363',
        '2DA' => 'E02006363',
        '2DB' => 'E02006363',
        '2DD' => 'E02006363',
        '2DE' => 'E02006363',
        '2DF' => 'E02006363',
        '2DG' => 'E02006363',
        '2DH' => 'E02006363',
        '2DJ' => 'E02006363',
        '2DL' => 'E02006363',
        '2DN' => 'E02006362',
        '2DP' => 'E02006363',
        '2DQ' => 'E02006363',
        '2DR' => 'E02006363',
        '2DS' => 'E02006365',
        '2DT' => 'E02006363',
        '2DU' => 'E02006363',
        '2DW' => 'E02006362',
        '2DX' => 'E02006363',
        '2DY' => 'E02006365',
        '2DZ' => 'E02006363',
        '2EA' => 'E02006365',
        '2ED' => 'E02006363',
        '2EF' => 'E02006363',
        '2EG' => 'E02006363',
        '2EH' => 'E02006363',
        '2EJ' => 'E02006363',
        '2EN' => 'E02006363',
        '2EP' => 'E02006363',
        '2EQ' => 'E02006363',
        '2ER' => 'E02006363',
        '2ET' => 'E02006363',
        '2EX' => 'E02006363',
        '2EY' => 'E02006363',
        '2EZ' => 'E02006363',
        '2FB' => 'E02006365',
        '2FD' => 'E02006365',
        '2FE' => 'E02006365',
        '2FF' => 'E02006365',
        '2FG' => 'E02006365',
        '2FH' => 'E02006365',
        '2FJ' => 'E02006365',
        '2FL' => 'E02006365',
        '2FN' => 'E02006365',
        '2GA' => 'E02006362',
        '2GX' => 'E02006362',
        '2GZ' => 'E02006363',
        '2HA' => 'E02006363',
        '2HB' => 'E02006363',
        '2HD' => 'E02006363',
        '2HE' => 'E02006363',
        '2HF' => 'E02006363',
        '2HG' => 'E02006363',
        '2HH' => 'E02006363',
        '2HJ' => 'E02006363',
        '2HL' => 'E02006363',
        '2HN' => 'E02006363',
        '2HP' => 'E02006363',
        '2HQ' => 'E02006363',
        '2HR' => 'E02006363',
        '2HS' => 'E02006363',
        '2HT' => 'E02006363',
        '2HU' => 'E02006363',
        '2HW' => 'E02006363',
        '2HX' => 'E02006363',
        '2HY' => 'E02006363',
        '2HZ' => 'E02006363',
        '2JA' => 'E02006363',
        '2JB' => 'E02006363',
        '2JD' => 'E02006363',
        '2JE' => 'E02006363',
        '2JG' => 'E02006363',
        '2JH' => 'E02006363',
        '2JJ' => 'E02006363',
        '2JL' => 'E02006363',
        '2JN' => 'E02006363',
        '2JP' => 'E02006363',
        '2JQ' => 'E02006363',
        '2JR' => 'E02006363',
        '2JS' => 'E02006363',
        '2JT' => 'E02006363',
        '2JU' => 'E02006363',
        '2JW' => 'E02006363',
        '2JX' => 'E02006363',
        '2JY' => 'E02006363',
        '2JZ' => 'E02006363',
        '2LA' => 'E02006363',
        '2LB' => 'E02006363',
        '2LD' => 'E02006363',
        '2LE' => 'E02006362',
        '2LF' => 'E02006363',
        '2LG' => 'E02006363',
        '2LH' => 'E02006363',
        '2LJ' => 'E02006363',
        '2LL' => 'E02006363',
        '2LN' => 'E02006363',
        '2LP' => 'E02006363',
        '2LQ' => 'E02006363',
        '2LR' => 'E02006363',
        '2LS' => 'E02006363',
        '2LT' => 'E02006363',
        '2LU' => 'E02006363',
        '2LW' => 'E02006363',
        '2LX' => 'E02006363',
        '2LY' => 'E02006363',
        '2LZ' => 'E02006363',
        '2NA' => 'E02006363',
        '2NB' => 'E02006363',
        '2ND' => 'E02006363',
        '2NE' => 'E02006363',
        '2NF' => 'E02006363',
        '2NG' => 'E02006363',
        '2NH' => 'E02006365',
        '2NJ' => 'E02006364',
        '2NL' => 'E02006363',
        '2NN' => 'E02006363',
        '2NP' => 'E02006363',
        '2NQ' => 'E02006363',
        '2NR' => 'E02006363',
        '2NS' => 'E02006363',
        '2NT' => 'E02006363',
        '2NU' => 'E02006363',
        '2NW' => 'E02006363',
        '2NX' => 'E02006363',
        '2NY' => 'E02006363',
        '2NZ' => 'E02006363',
        '2PA' => 'E02006363',
        '2PB' => 'E02006362',
        '2PD' => 'E02006365',
        '2PE' => 'E02006365',
        '2PF' => 'E02006365',
        '2PG' => 'E02006365',
        '2PH' => 'E02006365',
        '2PJ' => 'E02006363',
        '2PL' => 'E02006365',
        '2PN' => 'E02006365',
        '2PP' => 'E02006363',
        '2PQ' => 'E02006362',
        '2PR' => 'E02006363',
        '2PS' => 'E02006365',
        '2PT' => 'E02006365',
        '2PU' => 'E02006365',
        '2PW' => 'E02006363',
        '2PX' => 'E02006365',
        '2PY' => 'E02006365',
        '2PZ' => 'E02006365',
        '2QA' => 'E02006363',
        '2QB' => 'E02006363',
        '2QD' => 'E02006363',
        '2QE' => 'E02006363',
        '2QF' => 'E02006363',
        '2QG' => 'E02006363',
        '2QH' => 'E02006363',
        '2QJ' => 'E02006363',
        '2QL' => 'E02006363',
        '2QN' => 'E02006363',
        '2QP' => 'E02006363',
        '2QQ' => 'E02006363',
        '2QR' => 'E02006363',
        '2QS' => 'E02006363',
        '2QT' => 'E02006363',
        '2QU' => 'E02006363',
        '2QW' => 'E02006363',
        '2QX' => 'E02006363',
        '2QY' => 'E02006363',
        '2QZ' => 'E02006363',
        '2RA' => 'E02006363',
        '2RB' => 'E02006363',
        '2RD' => 'E02006363',
        '2RE' => 'E02006363',
        '2RF' => 'E02006363',
        '2RG' => 'E02006363',
        '2RH' => 'E02006363',
        '2RJ' => 'E02006363',
        '2RL' => 'E02006363',
        '2RN' => 'E02006363',
        '2RP' => 'E02006363',
        '2RQ' => 'E02006363',
        '2RS' => 'E02006363',
        '2RT' => 'E02006363',
        '2RU' => 'E02006363',
        '2RW' => 'E02006363',
        '2RX' => 'E02006362',
        '2RY' => 'E02006362',
        '2SA' => 'E02006362',
        '2SB' => 'E02006362',
        '2SD' => 'E02006363',
        '2SE' => 'E02006362',
        '2SG' => 'E02006362',
        '2SH' => 'E02006362',
        '2SL' => 'E02006362',
        '2SN' => 'E02006362',
        '2SP' => 'E02006362',
        '2SS' => 'E02006362',
        '2SU' => 'E02006362',
        '2SW' => 'E02006362',
        '2SY' => 'E02006362',
        '2TD' => 'E02006365',
        '2TE' => 'E02006365',
        '2TF' => 'E02006365',
        '2TH' => 'E02006365',
        '2TL' => 'E02006365',
        '2TN' => 'E02006365',
        '2TP' => 'E02006365',
        '2TQ' => 'E02006365',
        '2TR' => 'E02006365',
        '2TS' => 'E02006365',
        '2TU' => 'E02006362',
        '2TW' => 'E02006365',
        '2TX' => 'E02006362',
        '2TY' => 'E02006362',
        '2TZ' => 'E02006362',
        '2UA' => 'E02006362',
        '2UB' => 'E02006362',
        '2UD' => 'E02006362',
        '2UE' => 'E02006362',
        '2UF' => 'E02006362',
        '2UH' => 'E02006362',
        '2UJ' => 'E02006362',
        '2UP' => 'E02006362',
        '2UR' => 'E02006362',
        '2WA' => 'E02006362',
        '2WB' => 'E02006362',
        '2WD' => 'E02006363',
        '2WE' => 'E02006362',
        '2WF' => 'E02006362',
        '2WG' => 'E02006362',
        '2WH' => 'E02006363',
        '2WJ' => 'E02006362',
        '2WL' => 'E02006363',
        '2WN' => 'E02006363',
        '2WP' => 'E02006362',
        '2WQ' => 'E02006362',
        '2WR' => 'E02006362',
        '2WS' => 'E02006362',
        '2WT' => 'E02006362',
        '2WU' => 'E02006362',
        '2WX' => 'E02006362',
        '2WY' => 'E02006362',
        '2WZ' => 'E02006362',
        '2XA' => 'E02006362',
        '2XB' => 'E02006362',
        '2XD' => 'E02006362',
        '2XE' => 'E02006362',
        '2YA' => 'E02006362',
        '2YB' => 'E02006363',
        '2YD' => 'E02006363',
        '2YE' => 'E02006362',
        '2YF' => 'E02006362',
        '2YG' => 'E02006362',
        '2YH' => 'E02006362',
        '2YJ' => 'E02006362',
        '2YL' => 'E02006362',
        '2YN' => 'E02006362',
        '2YP' => 'E02006362',
        '2YQ' => 'E02006362',
        '2YR' => 'E02006363',
        '2YS' => 'E02006362',
        '2YT' => 'E02006362',
        '2YU' => 'E02006363',
        '2YW' => 'E02006362',
        '2YY' => 'E02006362',
        '2YZ' => 'E02006362',
        '2ZA' => 'E02006362',
        '2ZB' => 'E02006362',
        '2ZD' => 'E02006362',
        '2ZL' => 'E02006362',
        '2ZR' => 'E02006362',
        '9AA' => 'E02006362',
        '9AB' => 'E02006362',
        '9AD' => 'E02006362',
        '9AE' => 'E02006362',
        '9AF' => 'E02006362',
        '9AG' => 'E02006362',
        '9AH' => 'E02006362',
        '9AJ' => 'E02006362',
        '9AL' => 'E02006362',
        '9AN' => 'E02006362',
        '9AP' => 'E02006362',
        '9AQ' => 'E02006362',
        '9AR' => 'E02006362',
        '9AS' => 'E02006362',
        '9AT' => 'E02006362',
        '9AU' => 'E02006362',
        '9AW' => 'E02006362',
        '9AX' => 'E02006362',
        '9AY' => 'E02006362',
        '9AZ' => 'E02006362',
        '9BA' => 'E02006362',
        '9BB' => 'E02006362',
        '9BD' => 'E02006362',
        '9BE' => 'E02006362',
        '9BF' => 'E02006362',
        '9BG' => 'E02006362',
        '9BH' => 'E02006362',
        '9BJ' => 'E02006362',
        '9BL' => 'E02006362',
        '9BN' => 'E02006362',
        '9BP' => 'E02006362',
        '9BQ' => 'E02006362',
        '9BR' => 'E02006362',
        '9BS' => 'E02006362',
        '9BT' => 'E02006362',
        '9BU' => 'E02006362',
        '9BW' => 'E02006362',
        '9BX' => 'E02006362',
        '9BY' => 'E02006362',
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