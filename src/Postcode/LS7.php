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
final class LS7
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02002384',
        '1AB' => 'E02002384',
        '1AD' => 'E02002384',
        '1AE' => 'E02002384',
        '1AF' => 'E02002384',
        '1AG' => 'E02002384',
        '1AH' => 'E02002384',
        '1AJ' => 'E02002384',
        '1AL' => 'E02002384',
        '1AN' => 'E02002384',
        '1AP' => 'E02002384',
        '1AQ' => 'E02002384',
        '1AR' => 'E02002384',
        '1AS' => 'E02002384',
        '1AT' => 'E02002384',
        '1AU' => 'E02002384',
        '1AW' => 'E02002384',
        '1AX' => 'E02002393',
        '1AY' => 'E02002384',
        '1AZ' => 'E02002384',
        '1BA' => 'E02002384',
        '1BB' => 'E02002393',
        '1BD' => 'E02002393',
        '1BE' => 'E02002393',
        '1BF' => 'E02002393',
        '1BG' => 'E02002384',
        '1BH' => 'E02002393',
        '1BJ' => 'E02002384',
        '1BL' => 'E02002384',
        '1BN' => 'E02002384',
        '1BP' => 'E02002384',
        '1BQ' => 'E02002393',
        '1BS' => 'E02002384',
        '1BT' => 'E02002384',
        '1BU' => 'E02002384',
        '1BW' => 'E02002384',
        '1BY' => 'E02002384',
        '1BZ' => 'E02002384',
        '1DA' => 'E02002384',
        '1DB' => 'E02002384',
        '1DD' => 'E02002384',
        '1DE' => 'E02002384',
        '1DF' => 'E02002384',
        '1DG' => 'E02002384',
        '1DH' => 'E02002384',
        '1DJ' => 'E02002384',
        '1DL' => 'E02002384',
        '1DN' => 'E02002393',
        '1DP' => 'E02002384',
        '1DQ' => 'E02002384',
        '1DR' => 'E02002384',
        '1DS' => 'E02002384',
        '1DT' => 'E02002384',
        '1DU' => 'E02002384',
        '1DW' => 'E02002384',
        '1DX' => 'E02002384',
        '1DY' => 'E02002384',
        '1DZ' => 'E02002384',
        '1ED' => 'E02002384',
        '1EF' => 'E02002384',
        '1EG' => 'E02002384',
        '1EH' => 'E02002384',
        '1EJ' => 'E02002384',
        '1EL' => 'E02002384',
        '1EN' => 'E02002384',
        '1EP' => 'E02002384',
        '1EQ' => 'E02002384',
        '1ET' => 'E02002384',
        '1EU' => 'E02002384',
        '1EX' => 'E02002384',
        '1EY' => 'E02002384',
        '1EZ' => 'E02002384',
        '1HA' => 'E02002384',
        '1HB' => 'E02002384',
        '1HE' => 'E02002384',
        '1HF' => 'E02002384',
        '1HG' => 'E02002384',
        '1HH' => 'E02002384',
        '1HJ' => 'E02002384',
        '1HL' => 'E02002384',
        '1HP' => 'E02002384',
        '1HQ' => 'E02002384',
        '1HR' => 'E02002384',
        '1HS' => 'E02002384',
        '1HT' => 'E02002384',
        '1HW' => 'E02002384',
        '1HX' => 'E02002384',
        '1HY' => 'E02002384',
        '1JA' => 'E02002384',
        '1JB' => 'E02002384',
        '1JD' => 'E02002384',
        '1JE' => 'E02002384',
        '1JL' => 'E02002384',
        '1JP' => 'E02002384',
        '1JR' => 'E02002384',
        '1JT' => 'E02002384',
        '1JW' => 'E02002384',
        '1LA' => 'E02002393',
        '1LB' => 'E02002384',
        '1LD' => 'E02002384',
        '1LF' => 'E02002384',
        '1LG' => 'E02002384',
        '1LH' => 'E02002384',
        '1LJ' => 'E02002384',
        '1LL' => 'E02002384',
        '1LN' => 'E02002384',
        '1LP' => 'E02002384',
        '1LQ' => 'E02002384',
        '1LR' => 'E02002384',
        '1LW' => 'E02002384',
        '1LY' => 'E02002393',
        '1NA' => 'E02002384',
        '1NB' => 'E02002384',
        '1NJ' => 'E02002384',
        '1NL' => 'E02002384',
        '1NN' => 'E02002384',
        '1NP' => 'E02002384',
        '1NR' => 'E02002384',
        '1NS' => 'E02002384',
        '1NT' => 'E02002384',
        '1NU' => 'E02002384',
        '1NW' => 'E02002384',
        '1NX' => 'E02002384',
        '1PJ' => 'E02002384',
        '1PZ' => 'E02002384',
        '1QA' => 'E02002393',
        '1QB' => 'E02002393',
        '1QD' => 'E02002393',
        '1QN' => 'E02002393',
        '1QQ' => 'E02002393',
        '1QR' => 'E02002393',
        '1QS' => 'E02002371',
        '1QU' => 'E02002393',
        '1QW' => 'E02002384',
        '1RB' => 'E02002384',
        '1RD' => 'E02002384',
        '1RE' => 'E02002393',
        '1RF' => 'E02002384',
        '1RG' => 'E02002393',
        '1RQ' => 'E02002393',
        '1SA' => 'E02002384',
        '1SB' => 'E02002384',
        '1SD' => 'E02002384',
        '1SE' => 'E02002384',
        '1SF' => 'E02002384',
        '1SG' => 'E02002384',
        '1SH' => 'E02002384',
        '1SJ' => 'E02002384',
        '1SL' => 'E02002384',
        '1SN' => 'E02002384',
        '1SP' => 'E02002384',
        '1SQ' => 'E02002384',
        '1SR' => 'E02002384',
        '1ST' => 'E02002384',
        '1SW' => 'E02002384',
        '1TA' => 'E02002384',
        '1TB' => 'E02002384',
        '1TD' => 'E02002384',
        '1TE' => 'E02002384',
        '1TF' => 'E02002384',
        '1TG' => 'E02002384',
        '1TQ' => 'E02002384',
        '1WA' => 'E02006875',
        '1WZ' => 'E02002384',
        '1XA' => 'E02006875',
        '1XB' => 'E02002384',
        '1XD' => 'E02002384',
        '1XE' => 'E02002384',
        '1XG' => 'E02002384',
        '1XH' => 'E02002384',
        '1XJ' => 'E02002384',
        '1XL' => 'E02002384',
        '1XN' => 'E02002384',
        '1XP' => 'E02002384',
        '1XQ' => 'E02002384',
        '1XR' => 'E02002384',
        '1XS' => 'E02002384',
        '1XT' => 'E02002384',
        '1XU' => 'E02002384',
        '1XW' => 'E02002384',
        '1XX' => 'E02002384',
        '1XY' => 'E02002384',
        '1XZ' => 'E02002384',
        '1YA' => 'E02002384',
        '1YB' => 'E02006875',
        '1YD' => 'E02002384',
        '1YG' => 'E02006875',
        '2AA' => 'E02002384',
        '2AB' => 'E02002384',
        '2AD' => 'E02002384',
        '2AE' => 'E02002384',
        '2AF' => 'E02002384',
        '2AG' => 'E02002384',
        '2AH' => 'E02002384',
        '2AJ' => 'E02002384',
        '2AL' => 'E02002384',
        '2AN' => 'E02002384',
        '2AP' => 'E02002367',
        '2AQ' => 'E02002384',
        '2AR' => 'E02002384',
        '2AS' => 'E02002384',
        '2AT' => 'E02002384',
        '2AU' => 'E02002384',
        '2AW' => 'E02002384',
        '2AX' => 'E02002367',
        '2AY' => 'E02002384',
        '2AZ' => 'E02002384',
        '2BA' => 'E02002384',
        '2BB' => 'E02002384',
        '2BD' => 'E02002384',
        '2BE' => 'E02002367',
        '2BG' => 'E02006861',
        '2BH' => 'E02002367',
        '2BJ' => 'E02002384',
        '2BL' => 'E02002384',
        '2BN' => 'E02002367',
        '2BP' => 'E02002384',
        '2BQ' => 'E02002384',
        '2BR' => 'E02002367',
        '2BS' => 'E02002367',
        '2BT' => 'E02002384',
        '2BU' => 'E02002384',
        '2BW' => 'E02002384',
        '2BX' => 'E02002384',
        '2BY' => 'E02002367',
        '2BZ' => 'E02002367',
        '2DA' => 'E02002367',
        '2DB' => 'E02002367',
        '2DD' => 'E02002384',
        '2DE' => 'E02002384',
        '2DF' => 'E02002367',
        '2DG' => 'E02002384',
        '2DH' => 'E02006861',
        '2DJ' => 'E02006861',
        '2DL' => 'E02002367',
        '2DN' => 'E02002367',
        '2DP' => 'E02002367',
        '2DQ' => 'E02002384',
        '2DR' => 'E02002367',
        '2DS' => 'E02002367',
        '2DT' => 'E02002367',
        '2DU' => 'E02002367',
        '2DW' => 'E02002367',
        '2DX' => 'E02002367',
        '2DY' => 'E02002367',
        '2DZ' => 'E02006861',
        '2EA' => 'E02002354',
        '2EB' => 'E02002367',
        '2ED' => 'E02002367',
        '2EE' => 'E02002367',
        '2EF' => 'E02002367',
        '2EG' => 'E02002367',
        '2EH' => 'E02002367',
        '2EJ' => 'E02002367',
        '2EL' => 'E02002367',
        '2EN' => 'E02002367',
        '2EP' => 'E02002367',
        '2EQ' => 'E02002367',
        '2ER' => 'E02002367',
        '2ES' => 'E02002367',
        '2ET' => 'E02002367',
        '2EU' => 'E02002367',
        '2EW' => 'E02002367',
        '2EX' => 'E02002367',
        '2EY' => 'E02002367',
        '2EZ' => 'E02002367',
        '2FJ' => 'E02002367',
        '2FL' => 'E02002367',
        '2FN' => 'E02002367',
        '2HA' => 'E02002367',
        '2HB' => 'E02002367',
        '2HD' => 'E02002367',
        '2HE' => 'E02002354',
        '2HF' => 'E02002367',
        '2HG' => 'E02002384',
        '2HH' => 'E02002367',
        '2HJ' => 'E02002367',
        '2HL' => 'E02002367',
        '2HN' => 'E02002367',
        '2HP' => 'E02002367',
        '2HR' => 'E02002367',
        '2HS' => 'E02002367',
        '2HT' => 'E02002367',
        '2HU' => 'E02002367',
        '2HX' => 'E02002384',
        '2HY' => 'E02002384',
        '2HZ' => 'E02002384',
        '2JA' => 'E02006861',
        '2JB' => 'E02006861',
        '2JD' => 'E02006861',
        '2JE' => 'E02006861',
        '2JF' => 'E02006861',
        '2JH' => 'E02006861',
        '2JJ' => 'E02006861',
        '2JL' => 'E02006861',
        '2JN' => 'E02006861',
        '2JP' => 'E02006861',
        '2JQ' => 'E02006861',
        '2JR' => 'E02002384',
        '2JS' => 'E02006861',
        '2JT' => 'E02002367',
        '2JU' => 'E02006861',
        '2JW' => 'E02006861',
        '2JZ' => 'E02006861',
        '2LA' => 'E02006861',
        '2LB' => 'E02006861',
        '2LD' => 'E02006861',
        '2LE' => 'E02006861',
        '2LF' => 'E02006861',
        '2LG' => 'E02006861',
        '2LH' => 'E02006861',
        '2LJ' => 'E02006861',
        '2LL' => 'E02006861',
        '2LN' => 'E02006861',
        '2LP' => 'E02006861',
        '2LQ' => 'E02006861',
        '2LR' => 'E02002354',
        '2LS' => 'E02002354',
        '2LT' => 'E02002354',
        '2LU' => 'E02002354',
        '2LW' => 'E02006861',
        '2LX' => 'E02002354',
        '2LY' => 'E02002354',
        '2LZ' => 'E02002354',
        '2NA' => 'E02002354',
        '2NB' => 'E02002354',
        '2ND' => 'E02002354',
        '2NE' => 'E02002354',
        '2NF' => 'E02002354',
        '2NG' => 'E02002354',
        '2NH' => 'E02002354',
        '2NJ' => 'E02002354',
        '2NL' => 'E02002354',
        '2NN' => 'E02002354',
        '2NP' => 'E02002354',
        '2NQ' => 'E02002354',
        '2NR' => 'E02002354',
        '2NS' => 'E02002360',
        '2NT' => 'E02002360',
        '2NU' => 'E02002360',
        '2NW' => 'E02002354',
        '2NX' => 'E02002360',
        '2NY' => 'E02002360',
        '2NZ' => 'E02002360',
        '2PA' => 'E02002360',
        '2PB' => 'E02002360',
        '2PD' => 'E02002360',
        '2PE' => 'E02002360',
        '2PF' => 'E02002360',
        '2PG' => 'E02002360',
        '2PH' => 'E02002360',
        '2PJ' => 'E02002360',
        '2PL' => 'E02002360',
        '2PN' => 'E02002360',
        '2PP' => 'E02002360',
        '2PQ' => 'E02002360',
        '2PR' => 'E02002360',
        '2PS' => 'E02002360',
        '2PT' => 'E02002360',
        '2PU' => 'E02002360',
        '2PW' => 'E02002360',
        '2PX' => 'E02002360',
        '2PY' => 'E02002360',
        '2PZ' => 'E02002360',
        '2QA' => 'E02002367',
        '2QB' => 'E02002367',
        '2QD' => 'E02002367',
        '2QE' => 'E02002367',
        '2QF' => 'E02002367',
        '2QG' => 'E02002367',
        '2QH' => 'E02002367',
        '2QJ' => 'E02002367',
        '2QL' => 'E02002360',
        '2QN' => 'E02002360',
        '2QP' => 'E02002360',
        '2QQ' => 'E02002367',
        '2QR' => 'E02002360',
        '2QS' => 'E02002360',
        '2QT' => 'E02002360',
        '2QU' => 'E02002360',
        '2QW' => 'E02006852',
        '2QX' => 'E02002360',
        '2QY' => 'E02002367',
        '2QZ' => 'E02002360',
        '2RA' => 'E02002360',
        '2RB' => 'E02002384',
        '2RD' => 'E02002367',
        '2RE' => 'E02002384',
        '2RF' => 'E02002367',
        '2RG' => 'E02002367',
        '2RH' => 'E02002367',
        '2RJ' => 'E02002367',
        '2RL' => 'E02002367',
        '2RN' => 'E02002367',
        '2RP' => 'E02002360',
        '2RQ' => 'E02002367',
        '2RR' => 'E02006861',
        '2RS' => 'E02002367',
        '2RT' => 'E02002384',
        '2RU' => 'E02002367',
        '2RW' => 'E02002367',
        '2RX' => 'E02002367',
        '2RY' => 'E02002367',
        '2RZ' => 'E02002367',
        '2SA' => 'E02002367',
        '2SB' => 'E02002367',
        '2SD' => 'E02002367',
        '2SE' => 'E02002367',
        '2SF' => 'E02002367',
        '2SG' => 'E02002367',
        '2SH' => 'E02002367',
        '2SJ' => 'E02002360',
        '2SL' => 'E02002360',
        '2SN' => 'E02002360',
        '2SP' => 'E02002360',
        '2SQ' => 'E02002367',
        '2SR' => 'E02002360',
        '2ST' => 'E02002360',
        '2SU' => 'E02002384',
        '2SW' => 'E02006861',
        '2SX' => 'E02002367',
        '2SY' => 'E02006875',
        '2SZ' => 'E02002367',
        '2TA' => 'E02002360',
        '2TB' => 'E02002360',
        '2TD' => 'E02002360',
        '2TE' => 'E02002360',
        '2TF' => 'E02002360',
        '2TG' => 'E02002360',
        '2TH' => 'E02002360',
        '2TJ' => 'E02002360',
        '2TL' => 'E02002360',
        '2TN' => 'E02002360',
        '2TP' => 'E02002360',
        '2TQ' => 'E02002360',
        '2TR' => 'E02002367',
        '2TS' => 'E02002367',
        '2TT' => 'E02002360',
        '2TW' => 'E02002360',
        '2TX' => 'E02006875',
        '2TZ' => 'E02002367',
        '2UA' => 'E02002367',
        '2UB' => 'E02002360',
        '2UD' => 'E02002367',
        '2UE' => 'E02002360',
        '2UH' => 'E02002360',
        '2UL' => 'E02002360',
        '2UN' => 'E02002360',
        '2UP' => 'E02002360',
        '2UR' => 'E02002360',
        '2WA' => 'E02002384',
        '2WW' => 'E02002384',
        '2WX' => 'E02002360',
        '2WY' => 'E02002384',
        '2WZ' => 'E02002384',
        '2XA' => 'E02006875',
        '2XB' => 'E02002360',
        '2XD' => 'E02002360',
        '2XE' => 'E02002360',
        '2XF' => 'E02002360',
        '2XG' => 'E02006875',
        '2XH' => 'E02002367',
        '2XJ' => 'E02002367',
        '2XL' => 'E02002367',
        '2XN' => 'E02002384',
        '2XP' => 'E02002367',
        '2XQ' => 'E02006875',
        '2XR' => 'E02006875',
        '2XS' => 'E02002367',
        '2XT' => 'E02002367',
        '2XU' => 'E02006875',
        '2XW' => 'E02002367',
        '2XX' => 'E02002367',
        '2XY' => 'E02006875',
        '2XZ' => 'E02002367',
        '2YD' => 'E02002384',
        '2YG' => 'E02006875',
        '2YH' => 'E02006875',
        '2YJ' => 'E02006875',
        '2YN' => 'E02006875',
        '2YP' => 'E02002384',
        '2YQ' => 'E02002384',
        '2YR' => 'E02006875',
        '2YU' => 'E02002384',
        '2YW' => 'E02006875',
        '2YX' => 'E02006875',
        '2YY' => 'E02002384',
        '2ZH' => 'E02002384',
        '3AA' => 'E02002384',
        '3AB' => 'E02002371',
        '3AD' => 'E02002367',
        '3AE' => 'E02002367',
        '3AF' => 'E02002367',
        '3AG' => 'E02002367',
        '3AH' => 'E02002371',
        '3AJ' => 'E02002393',
        '3AL' => 'E02002371',
        '3AN' => 'E02002371',
        '3AP' => 'E02002384',
        '3AQ' => 'E02002367',
        '3AR' => 'E02002371',
        '3AW' => 'E02002384',
        '3BA' => 'E02002367',
        '3BE' => 'E02002393',
        '3BG' => 'E02002384',
        '3BH' => 'E02002384',
        '3BQ' => 'E02002393',
        '3BZ' => 'E02002371',
        '3DA' => 'E02002367',
        '3DB' => 'E02002371',
        '3DD' => 'E02002371',
        '3DE' => 'E02002371',
        '3DF' => 'E02002371',
        '3DG' => 'E02002371',
        '3DH' => 'E02002371',
        '3DJ' => 'E02002363',
        '3DL' => 'E02002363',
        '3DN' => 'E02002363',
        '3DP' => 'E02002363',
        '3DQ' => 'E02002371',
        '3DR' => 'E02002363',
        '3DS' => 'E02002367',
        '3DT' => 'E02002363',
        '3DU' => 'E02002371',
        '3DW' => 'E02002371',
        '3DX' => 'E02002371',
        '3DY' => 'E02002363',
        '3DZ' => 'E02002371',
        '3EA' => 'E02002371',
        '3EB' => 'E02002371',
        '3ED' => 'E02002371',
        '3EE' => 'E02002371',
        '3EF' => 'E02002371',
        '3EG' => 'E02002371',
        '3EH' => 'E02002371',
        '3EJ' => 'E02002367',
        '3EL' => 'E02002371',
        '3EN' => 'E02002371',
        '3EP' => 'E02002371',
        '3EQ' => 'E02002371',
        '3ER' => 'E02002371',
        '3ES' => 'E02002371',
        '3ET' => 'E02002371',
        '3EU' => 'E02002371',
        '3EW' => 'E02002371',
        '3EX' => 'E02002371',
        '3EY' => 'E02002367',
        '3EZ' => 'E02002371',
        '3HA' => 'E02002367',
        '3HB' => 'E02002367',
        '3HD' => 'E02002367',
        '3HE' => 'E02002367',
        '3HF' => 'E02002371',
        '3HG' => 'E02002367',
        '3HH' => 'E02002371',
        '3HJ' => 'E02002367',
        '3HL' => 'E02002371',
        '3HN' => 'E02002367',
        '3HP' => 'E02002367',
        '3HQ' => 'E02002367',
        '3HR' => 'E02002367',
        '3HS' => 'E02002367',
        '3HT' => 'E02002367',
        '3HU' => 'E02002367',
        '3HW' => 'E02002367',
        '3HX' => 'E02002371',
        '3HY' => 'E02002371',
        '3HZ' => 'E02002371',
        '3JA' => 'E02002371',
        '3JB' => 'E02002371',
        '3JD' => 'E02002384',
        '3JE' => 'E02002367',
        '3JF' => 'E02002367',
        '3JG' => 'E02002371',
        '3JH' => 'E02002371',
        '3JJ' => 'E02002371',
        '3JL' => 'E02002371',
        '3JN' => 'E02002371',
        '3JP' => 'E02002371',
        '3JQ' => 'E02002367',
        '3JR' => 'E02002371',
        '3JS' => 'E02002371',
        '3JT' => 'E02002371',
        '3JU' => 'E02002371',
        '3JW' => 'E02002371',
        '3JX' => 'E02002371',
        '3JY' => 'E02002371',
        '3JZ' => 'E02002367',
        '3LA' => 'E02002371',
        '3LB' => 'E02002371',
        '3LD' => 'E02002371',
        '3LE' => 'E02002371',
        '3LF' => 'E02002371',
        '3LG' => 'E02002371',
        '3LH' => 'E02002371',
        '3LJ' => 'E02002371',
        '3LL' => 'E02002371',
        '3LN' => 'E02002371',
        '3LP' => 'E02002363',
        '3LQ' => 'E02002371',
        '3LR' => 'E02002371',
        '3LS' => 'E02002363',
        '3LT' => 'E02002363',
        '3LU' => 'E02002363',
        '3LW' => 'E02002363',
        '3LX' => 'E02002371',
        '3LY' => 'E02002371',
        '3LZ' => 'E02002371',
        '3NA' => 'E02002363',
        '3NB' => 'E02002363',
        '3ND' => 'E02002371',
        '3NE' => 'E02002363',
        '3NF' => 'E02002363',
        '3NG' => 'E02002363',
        '3NH' => 'E02002363',
        '3NJ' => 'E02002363',
        '3NL' => 'E02002363',
        '3NN' => 'E02002363',
        '3NP' => 'E02002363',
        '3NQ' => 'E02002363',
        '3NR' => 'E02002363',
        '3NS' => 'E02002363',
        '3NT' => 'E02002363',
        '3NU' => 'E02002363',
        '3NW' => 'E02002363',
        '3NX' => 'E02002363',
        '3NY' => 'E02002363',
        '3NZ' => 'E02002363',
        '3PA' => 'E02002363',
        '3PB' => 'E02002363',
        '3PD' => 'E02002363',
        '3PE' => 'E02002363',
        '3PF' => 'E02002363',
        '3PG' => 'E02002363',
        '3PH' => 'E02002363',
        '3PJ' => 'E02002363',
        '3PL' => 'E02002363',
        '3PN' => 'E02002363',
        '3PP' => 'E02002363',
        '3PQ' => 'E02002363',
        '3PR' => 'E02002352',
        '3PS' => 'E02002363',
        '3PT' => 'E02002363',
        '3PU' => 'E02002363',
        '3PW' => 'E02002363',
        '3PX' => 'E02002363',
        '3PY' => 'E02002363',
        '3PZ' => 'E02002363',
        '3QA' => 'E02002363',
        '3QB' => 'E02002363',
        '3QD' => 'E02002363',
        '3QE' => 'E02002363',
        '3QF' => 'E02002363',
        '3QG' => 'E02002363',
        '3QH' => 'E02002363',
        '3QJ' => 'E02002363',
        '3QL' => 'E02002363',
        '3QN' => 'E02002363',
        '3QP' => 'E02002363',
        '3QQ' => 'E02002363',
        '3QR' => 'E02002363',
        '3QS' => 'E02002363',
        '3QT' => 'E02002363',
        '3QU' => 'E02002363',
        '3QW' => 'E02002363',
        '3QX' => 'E02002363',
        '3QY' => 'E02002363',
        '3QZ' => 'E02002363',
        '3RA' => 'E02002363',
        '3RB' => 'E02002363',
        '3RD' => 'E02002363',
        '3RE' => 'E02002363',
        '3RF' => 'E02002363',
        '3RG' => 'E02002363',
        '3RH' => 'E02002371',
        '3RJ' => 'E02002367',
        '3RL' => 'E02006875',
        '3RN' => 'E02002363',
        '3RP' => 'E02002371',
        '3RQ' => 'E02002363',
        '3RS' => 'E02002363',
        '3RT' => 'E02002363',
        '3RU' => 'E02002363',
        '3RW' => 'E02002371',
        '3RX' => 'E02002363',
        '3RY' => 'E02002363',
        '3RZ' => 'E02002363',
        '3SA' => 'E02002363',
        '3SB' => 'E02002367',
        '3SD' => 'E02002363',
        '3SE' => 'E02002371',
        '3SG' => 'E02002371',
        '3SH' => 'E02002363',
        '3SL' => 'E02002363',
        '3TE' => 'E02002367',
        '3TF' => 'E02002367',
        '3TH' => 'E02002367',
        '3TJ' => 'E02002384',
        '3TL' => 'E02002367',
        '3TN' => 'E02002371',
        '3TP' => 'E02002371',
        '3TS' => 'E02002384',
        '3TU' => 'E02002371',
        '3TW' => 'E02002371',
        '3TX' => 'E02006875',
        '3TY' => 'E02002371',
        '3TZ' => 'E02002384',
        '3UA' => 'E02002371',
        '3UB' => 'E02002371',
        '3UD' => 'E02006875',
        '3UE' => 'E02002371',
        '3UF' => 'E02002371',
        '3UG' => 'E02002384',
        '3UH' => 'E02002371',
        '3UJ' => 'E02006875',
        '3UP' => 'E02006875',
        '3UQ' => 'E02002384',
        '3UR' => 'E02002363',
        '3WA' => 'E02002384',
        '3WP' => 'E02002384',
        '3WQ' => 'E02002384',
        '3WR' => 'E02002384',
        '3WS' => 'E02002384',
        '3WT' => 'E02002384',
        '3WU' => 'E02002384',
        '3WW' => 'E02006875',
        '3WX' => 'E02006875',
        '3WY' => 'E02006875',
        '3WZ' => 'E02006875',
        '3XA' => 'E02002384',
        '3XB' => 'E02002371',
        '3XD' => 'E02002371',
        '3XE' => 'E02002371',
        '3XF' => 'E02002371',
        '3XG' => 'E02002384',
        '3XH' => 'E02002371',
        '3XL' => 'E02006875',
        '3XN' => 'E02002384',
        '3XP' => 'E02006875',
        '3XQ' => 'E02002371',
        '3XR' => 'E02006875',
        '3XS' => 'E02002371',
        '3XT' => 'E02002371',
        '3XU' => 'E02002371',
        '3XW' => 'E02002371',
        '3XX' => 'E02002371',
        '3XY' => 'E02002384',
        '3XZ' => 'E02002384',
        '3YA' => 'E02002384',
        '3YB' => 'E02002384',
        '3YD' => 'E02002384',
        '3YE' => 'E02002371',
        '3YF' => 'E02006875',
        '3YG' => 'E02002371',
        '3YH' => 'E02002371',
        '3YJ' => 'E02002384',
        '3YN' => 'E02002384',
        '3YP' => 'E02002384',
        '3YQ' => 'E02002371',
        '3YR' => 'E02002384',
        '3YX' => 'E02002384',
        '4AA' => 'E02002371',
        '4AB' => 'E02002371',
        '4AD' => 'E02002371',
        '4AE' => 'E02002393',
        '4AF' => 'E02002371',
        '4AG' => 'E02002371',
        '4AH' => 'E02002363',
        '4AJ' => 'E02002363',
        '4AL' => 'E02002371',
        '4AN' => 'E02002363',
        '4AP' => 'E02002371',
        '4AQ' => 'E02002363',
        '4AS' => 'E02002371',
        '4AW' => 'E02002371',
        '4AY' => 'E02002371',
        '4AZ' => 'E02002371',
        '4BA' => 'E02002371',
        '4BB' => 'E02002371',
        '4BD' => 'E02002371',
        '4BE' => 'E02002371',
        '4BF' => 'E02002363',
        '4BG' => 'E02002371',
        '4BH' => 'E02002371',
        '4BJ' => 'E02002371',
        '4BL' => 'E02002371',
        '4BN' => 'E02002371',
        '4BP' => 'E02002371',
        '4BQ' => 'E02002371',
        '4BR' => 'E02002371',
        '4BS' => 'E02002371',
        '4BT' => 'E02002371',
        '4BU' => 'E02002371',
        '4BW' => 'E02002371',
        '4BX' => 'E02002371',
        '4BY' => 'E02002371',
        '4BZ' => 'E02002371',
        '4DA' => 'E02002371',
        '4DB' => 'E02002371',
        '4DD' => 'E02002371',
        '4DE' => 'E02002371',
        '4DF' => 'E02002371',
        '4DG' => 'E02002371',
        '4DH' => 'E02002377',
        '4DJ' => 'E02002371',
        '4DL' => 'E02002371',
        '4DN' => 'E02002363',
        '4DP' => 'E02002371',
        '4DQ' => 'E02002377',
        '4DR' => 'E02002371',
        '4DS' => 'E02002371',
        '4DT' => 'E02002371',
        '4DU' => 'E02002377',
        '4DW' => 'E02002371',
        '4DX' => 'E02002377',
        '4DY' => 'E02002371',
        '4DZ' => 'E02002371',
        '4EA' => 'E02002371',
        '4EB' => 'E02002371',
        '4ED' => 'E02002371',
        '4EE' => 'E02002371',
        '4EF' => 'E02002371',
        '4EG' => 'E02002371',
        '4EH' => 'E02002371',
        '4EJ' => 'E02002371',
        '4EL' => 'E02002371',
        '4EN' => 'E02002371',
        '4EP' => 'E02002371',
        '4EQ' => 'E02002371',
        '4ER' => 'E02002371',
        '4ES' => 'E02002371',
        '4ET' => 'E02002371',
        '4EU' => 'E02002371',
        '4EW' => 'E02002371',
        '4EX' => 'E02002371',
        '4EY' => 'E02002371',
        '4EZ' => 'E02002371',
        '4FA' => 'E02002371',
        '4FB' => 'E02002377',
        '4HA' => 'E02002371',
        '4HB' => 'E02002371',
        '4HD' => 'E02002371',
        '4HE' => 'E02002371',
        '4HF' => 'E02002363',
        '4HG' => 'E02002371',
        '4HH' => 'E02002371',
        '4HJ' => 'E02002371',
        '4HL' => 'E02002371',
        '4HN' => 'E02002371',
        '4HP' => 'E02002371',
        '4HQ' => 'E02002371',
        '4HR' => 'E02002371',
        '4HS' => 'E02002371',
        '4HT' => 'E02002367',
        '4HU' => 'E02002371',
        '4HW' => 'E02002371',
        '4HX' => 'E02002371',
        '4HY' => 'E02002371',
        '4HZ' => 'E02002371',
        '4JA' => 'E02002371',
        '4JB' => 'E02002371',
        '4JD' => 'E02002371',
        '4JE' => 'E02002371',
        '4JF' => 'E02002363',
        '4JG' => 'E02002363',
        '4JH' => 'E02002363',
        '4JJ' => 'E02002363',
        '4JL' => 'E02002363',
        '4JN' => 'E02002363',
        '4JP' => 'E02002363',
        '4JQ' => 'E02002363',
        '4JR' => 'E02002363',
        '4JS' => 'E02002363',
        '4JT' => 'E02002363',
        '4JU' => 'E02002363',
        '4JW' => 'E02002363',
        '4JX' => 'E02002363',
        '4JY' => 'E02002363',
        '4JZ' => 'E02002371',
        '4LA' => 'E02002363',
        '4LB' => 'E02002363',
        '4LD' => 'E02002363',
        '4LE' => 'E02002363',
        '4LF' => 'E02002371',
        '4LG' => 'E02002371',
        '4LH' => 'E02002371',
        '4LJ' => 'E02002371',
        '4LL' => 'E02002371',
        '4LN' => 'E02002363',
        '4LP' => 'E02002363',
        '4LQ' => 'E02002371',
        '4LR' => 'E02002363',
        '4LS' => 'E02002363',
        '4LT' => 'E02002363',
        '4LU' => 'E02002363',
        '4LW' => 'E02002363',
        '4LX' => 'E02002363',
        '4LY' => 'E02002363',
        '4LZ' => 'E02002363',
        '4NA' => 'E02002363',
        '4NB' => 'E02002363',
        '4ND' => 'E02002363',
        '4NE' => 'E02002363',
        '4NF' => 'E02002363',
        '4NG' => 'E02002363',
        '4NH' => 'E02002363',
        '4NJ' => 'E02002363',
        '4NL' => 'E02002363',
        '4NN' => 'E02002363',
        '4NP' => 'E02002363',
        '4NQ' => 'E02002363',
        '4NR' => 'E02002371',
        '4NS' => 'E02002363',
        '4NT' => 'E02002371',
        '4NU' => 'E02002363',
        '4NW' => 'E02002363',
        '4NX' => 'E02002363',
        '4NY' => 'E02002363',
        '4NZ' => 'E02002363',
        '4PA' => 'E02002363',
        '4PB' => 'E02002363',
        '4PD' => 'E02002363',
        '4PE' => 'E02002363',
        '4PF' => 'E02002363',
        '4PH' => 'E02002363',
        '4PJ' => 'E02002363',
        '4PL' => 'E02002363',
        '4PN' => 'E02002363',
        '4PP' => 'E02002363',
        '4PQ' => 'E02002363',
        '4PR' => 'E02002363',
        '4PS' => 'E02002363',
        '4PT' => 'E02002363',
        '4PU' => 'E02002363',
        '4PW' => 'E02002363',
        '4PX' => 'E02002363',
        '4PY' => 'E02002363',
        '4PZ' => 'E02002363',
        '4QA' => 'E02002363',
        '4QB' => 'E02002363',
        '4QD' => 'E02002363',
        '4QE' => 'E02002363',
        '4QF' => 'E02002363',
        '4QG' => 'E02002363',
        '4QH' => 'E02002363',
        '4QJ' => 'E02002363',
        '4QL' => 'E02002363',
        '4QN' => 'E02002363',
        '4QP' => 'E02002363',
        '4QQ' => 'E02002363',
        '4QR' => 'E02002363',
        '4QS' => 'E02002363',
        '4QT' => 'E02002363',
        '4QU' => 'E02002363',
        '4QW' => 'E02002363',
        '4QX' => 'E02002363',
        '4QY' => 'E02002363',
        '4QZ' => 'E02002363',
        '4RA' => 'E02002363',
        '4RB' => 'E02002371',
        '4RD' => 'E02002371',
        '4RE' => 'E02002371',
        '4RF' => 'E02002371',
        '4RG' => 'E02002371',
        '4RH' => 'E02002371',
        '4RJ' => 'E02002371',
        '4RL' => 'E02002363',
        '4RN' => 'E02002363',
        '4RP' => 'E02002371',
        '4RQ' => 'E02002371',
        '4RR' => 'E02002371',
        '4RS' => 'E02006875',
        '4RT' => 'E02006875',
        '4RW' => 'E02002371',
        '4RX' => 'E02002363',
        '4SA' => 'E02002371',
        '4SF' => 'E02002371',
        '4SP' => 'E02002363',
        '4SS' => 'E02002363',
        '4ST' => 'E02002363',
        '4SU' => 'E02002363',
        '4SW' => 'E02002371',
        '4SX' => 'E02002363',
        '4SY' => 'E02002363',
        '4SZ' => 'E02002371',
        '4TA' => 'E02002371',
        '4TB' => 'E02002371',
        '4TD' => 'E02002371',
        '4TE' => 'E02002371',
        '4TG' => 'E02002371',
        '4TH' => 'E02002371',
        '4TJ' => 'E02002371',
        '4TL' => 'E02002371',
        '4TN' => 'E02002384',
        '4TP' => 'E02002371',
        '4TQ' => 'E02002371',
        '4TR' => 'E02002371',
        '4TS' => 'E02002371',
        '4TW' => 'E02002363',
        '4TX' => 'E02006875',
        '4TY' => 'E02006875',
        '4TZ' => 'E02006875',
        '4UA' => 'E02002384',
        '4UH' => 'E02002384',
        '4UL' => 'E02002371',
        '4UR' => 'E02002371',
        '4UW' => 'E02006875',
        '4UY' => 'E02002371',
        '4WA' => 'E02002384',
        '4WB' => 'E02002384',
        '4WD' => 'E02006875',
        '4WP' => 'E02002384',
        '4WQ' => 'E02002384',
        '4WR' => 'E02006875',
        '4WS' => 'E02002371',
        '4WT' => 'E02002384',
        '4WU' => 'E02002384',
        '4WW' => 'E02002384',
        '4WX' => 'E02002384',
        '4WY' => 'E02002384',
        '4WZ' => 'E02006875',
        '4XB' => 'E02002371',
        '4XD' => 'E02002371',
        '4XE' => 'E02002384',
        '4XF' => 'E02006875',
        '4XG' => 'E02006875',
        '4XH' => 'E02002371',
        '4XJ' => 'E02006875',
        '4XL' => 'E02002384',
        '4XN' => 'E02002384',
        '4XP' => 'E02002384',
        '4XR' => 'E02002371',
        '4XS' => 'E02006875',
        '4XT' => 'E02006875',
        '4XU' => 'E02002371',
        '4XW' => 'E02002371',
        '4XX' => 'E02002371',
        '4XY' => 'E02002371',
        '4XZ' => 'E02002371',
        '4YA' => 'E02006875',
        '4YB' => 'E02002371',
        '4YD' => 'E02002384',
        '4YE' => 'E02006875',
        '4YF' => 'E02002371',
        '4YG' => 'E02002371',
        '4YH' => 'E02002384',
        '4YN' => 'E02002384',
        '4YP' => 'E02002384',
        '4YW' => 'E02002371',
        '4ZB' => 'E02006875',
        '4ZU' => 'E02002384',
        '9AA' => 'E02002384',
        '9AD' => 'E02002384',
        '9AE' => 'E02002384',
        '9AF' => 'E02002384',
        '9AG' => 'E02002384',
        '9AH' => 'E02002384',
        '9AJ' => 'E02002384',
        '9AL' => 'E02002384',
        '9AN' => 'E02002384',
        '9AP' => 'E02002384',
        '9AQ' => 'E02002384',
        '9AR' => 'E02002384',
        '9AS' => 'E02002384',
        '9AT' => 'E02002384',
        '9AU' => 'E02002384',
        '9AW' => 'E02002384',
        '9AX' => 'E02002384',
        '9AY' => 'E02002384',
        '9BA' => 'E02002384',
        '9BB' => 'E02002384',
        '9BD' => 'E02002384',
        '9BE' => 'E02002384',
        '9BF' => 'E02002384',
        '9BG' => 'E02002384',
        '9BH' => 'E02002384',
        '9BJ' => 'E02002384',
        '9BL' => 'E02002384',
        '9BN' => 'E02002384',
        '9BP' => 'E02002384',
        '9BQ' => 'E02002384',
        '9BR' => 'E02002384',
        '9BS' => 'E02002384',
        '9BT' => 'E02002384',
        '9BU' => 'E02002384',
        '9BW' => 'E02002384',
        '9BX' => 'E02002384',
        '9BY' => 'E02002384',
        '9BZ' => 'E02002384',
        '9DA' => 'E02002384',
        '9DB' => 'E02002384',
        '9DD' => 'E02002384',
        '9DE' => 'E02002384',
        '9DF' => 'E02002384',
        '9DG' => 'E02002384',
        '9DH' => 'E02002384',
        '9DJ' => 'E02002384',
        '9DL' => 'E02002384',
        '9DN' => 'E02002384',
        '9DP' => 'E02002384',
        '9DQ' => 'E02002384',
        '9DR' => 'E02002384',
        '9DT' => 'E02002384',
        '9DU' => 'E02002384',
        '9DW' => 'E02002384',
        '9DX' => 'E02002384',
        '9DY' => 'E02002384',
        '9DZ' => 'E02002384',
        '9EA' => 'E02002384',
        '9EB' => 'E02002384',
        '9ED' => 'E02002384',
        '9EE' => 'E02002384',
        '9EF' => 'E02002384',
        '9EG' => 'E02002384',
        '9EH' => 'E02002384',
        '9EJ' => 'E02002384',
        '9EL' => 'E02002384',
        '9EN' => 'E02002384',
        '9EP' => 'E02002384',
        '9EQ' => 'E02002384',
        '9ER' => 'E02002384',
        '9ES' => 'E02002384',
        '9ET' => 'E02002384',
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
