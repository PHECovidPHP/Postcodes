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
final class TA4
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02006106',
        '1AB' => 'E02006106',
        '1AD' => 'E02006106',
        '1AE' => 'E02006106',
        '1AF' => 'E02006106',
        '1AG' => 'E02006106',
        '1AH' => 'E02006111',
        '1AJ' => 'E02006111',
        '1AL' => 'E02006111',
        '1AN' => 'E02006111',
        '1AP' => 'E02006111',
        '1AQ' => 'E02006106',
        '1AR' => 'E02006111',
        '1AS' => 'E02006111',
        '1AT' => 'E02006111',
        '1AU' => 'E02006111',
        '1AW' => 'E02006111',
        '1AX' => 'E02006111',
        '1AY' => 'E02006111',
        '1AZ' => 'E02006111',
        '1BA' => 'E02006111',
        '1BB' => 'E02006111',
        '1BD' => 'E02006111',
        '1BE' => 'E02006111',
        '1BF' => 'E02006105',
        '1BG' => 'E02006111',
        '1BH' => 'E02006111',
        '1BJ' => 'E02006101',
        '1BL' => 'E02006111',
        '1BN' => 'E02006111',
        '1BP' => 'E02006105',
        '1BQ' => 'E02006111',
        '1BS' => 'E02006106',
        '1BT' => 'E02006106',
        '1BU' => 'E02006099',
        '1BW' => 'E02006111',
        '1BX' => 'E02006106',
        '1BY' => 'E02006106',
        '1BZ' => 'E02006106',
        '1DA' => 'E02006099',
        '1DB' => 'E02006099',
        '1DD' => 'E02006099',
        '1DE' => 'E02006099',
        '1DF' => 'E02006099',
        '1DG' => 'E02006099',
        '1DH' => 'E02006106',
        '1DJ' => 'E02006111',
        '1DL' => 'E02006111',
        '1DN' => 'E02006111',
        '1DP' => 'E02006111',
        '1DQ' => 'E02006099',
        '1DR' => 'E02006111',
        '1DS' => 'E02006111',
        '1DT' => 'E02006111',
        '1DU' => 'E02006111',
        '1DW' => 'E02006111',
        '1DX' => 'E02006111',
        '1DY' => 'E02006111',
        '1DZ' => 'E02006111',
        '1EA' => 'E02006109',
        '1EB' => 'E02006099',
        '1EE' => 'E02006109',
        '1EF' => 'E02006109',
        '1EG' => 'E02006109',
        '1EH' => 'E02006106',
        '1EJ' => 'E02006106',
        '1EL' => 'E02006106',
        '1EN' => 'E02006111',
        '1EP' => 'E02006111',
        '1EQ' => 'E02006109',
        '1ER' => 'E02006111',
        '1ES' => 'E02006111',
        '1ET' => 'E02006111',
        '1EU' => 'E02006111',
        '1EW' => 'E02006106',
        '1EX' => 'E02006111',
        '1EY' => 'E02006111',
        '1EZ' => 'E02006111',
        '1GG' => 'E02006099',
        '1GQ' => 'E02006099',
        '1GY' => 'E02006099',
        '1HA' => 'E02006111',
        '1HB' => 'E02006111',
        '1HD' => 'E02006111',
        '1HF' => 'E02006111',
        '1HG' => 'E02006111',
        '1HH' => 'E02006111',
        '1HJ' => 'E02006111',
        '1HL' => 'E02006111',
        '1HN' => 'E02006111',
        '1HP' => 'E02006111',
        '1HQ' => 'E02006111',
        '1HR' => 'E02006111',
        '1HS' => 'E02006111',
        '1HT' => 'E02006111',
        '1HU' => 'E02006101',
        '1HW' => 'E02006111',
        '1HX' => 'E02006099',
        '1HY' => 'E02006099',
        '1HZ' => 'E02006099',
        '1JA' => 'E02006111',
        '1JB' => 'E02006099',
        '1JD' => 'E02006099',
        '1JE' => 'E02006099',
        '1JF' => 'E02006099',
        '1JG' => 'E02006099',
        '1JH' => 'E02006099',
        '1JJ' => 'E02006099',
        '1JL' => 'E02006099',
        '1JN' => 'E02006101',
        '1JP' => 'E02006101',
        '1JQ' => 'E02006099',
        '1JR' => 'E02006101',
        '1JS' => 'E02006101',
        '1JT' => 'E02006101',
        '1JU' => 'E02006101',
        '1JW' => 'E02006101',
        '1JX' => 'E02006101',
        '1JY' => 'E02006101',
        '1JZ' => 'E02006101',
        '1LA' => 'E02006101',
        '1LB' => 'E02006101',
        '1LD' => 'E02006101',
        '1LE' => 'E02006101',
        '1LF' => 'E02006101',
        '1LG' => 'E02006101',
        '1LH' => 'E02006101',
        '1LJ' => 'E02006101',
        '1LL' => 'E02006101',
        '1LN' => 'E02006101',
        '1LP' => 'E02006101',
        '1LQ' => 'E02006101',
        '1LR' => 'E02006101',
        '1LS' => 'E02006101',
        '1LT' => 'E02006099',
        '1LU' => 'E02006101',
        '1LW' => 'E02006101',
        '1LX' => 'E02006099',
        '1LY' => 'E02006101',
        '1LZ' => 'E02006101',
        '1NA' => 'E02006101',
        '1NB' => 'E02006101',
        '1ND' => 'E02006101',
        '1NE' => 'E02006101',
        '1NF' => 'E02006101',
        '1NG' => 'E02006101',
        '1NH' => 'E02006101',
        '1NJ' => 'E02006101',
        '1NL' => 'E02006101',
        '1NN' => 'E02006101',
        '1NP' => 'E02006101',
        '1NQ' => 'E02006101',
        '1NR' => 'E02006101',
        '1NS' => 'E02006101',
        '1NT' => 'E02006099',
        '1NU' => 'E02006099',
        '1NW' => 'E02006101',
        '1NX' => 'E02006099',
        '1NY' => 'E02006099',
        '1NZ' => 'E02006099',
        '1PA' => 'E02006101',
        '1PB' => 'E02006099',
        '1PD' => 'E02006099',
        '1PE' => 'E02006099',
        '1PF' => 'E02006101',
        '1PG' => 'E02006101',
        '1PH' => 'E02006101',
        '1PJ' => 'E02006101',
        '1PL' => 'E02006101',
        '1PN' => 'E02006101',
        '1PP' => 'E02006101',
        '1PQ' => 'E02006101',
        '1PR' => 'E02006101',
        '1PS' => 'E02006101',
        '1PT' => 'E02006101',
        '1PU' => 'E02006101',
        '1PW' => 'E02006101',
        '1PX' => 'E02006101',
        '1PY' => 'E02006101',
        '1PZ' => 'E02006101',
        '1QA' => 'E02006101',
        '1QB' => 'E02006101',
        '1QD' => 'E02006101',
        '1QE' => 'E02006101',
        '1QF' => 'E02006101',
        '1QH' => 'E02006101',
        '1QJ' => 'E02006099',
        '1QN' => 'E02006099',
        '1QS' => 'E02006101',
        '1QU' => 'E02006101',
        '1QW' => 'E02006099',
        '1QX' => 'E02006101',
        '1QY' => 'E02006101',
        '1QZ' => 'E02006101',
        '1RB' => 'E02006101',
        '1RD' => 'E02006101',
        '1RE' => 'E02006101',
        '1RF' => 'E02006101',
        '1RG' => 'E02006101',
        '1RW' => 'E02006101',
        '1WA' => 'E02006101',
        '1WB' => 'E02006101',
        '1WR' => 'E02006101',
        '1XJ' => 'E02006105',
        '1XN' => 'E02006105',
        '1XZ' => 'E02006105',
        '1YA' => 'E02006105',
        '1YQ' => 'E02006105',
        '1YR' => 'E02006105',
        '1YS' => 'E02006105',
        '1YT' => 'E02006111',
        '1YU' => 'E02006105',
        '1YW' => 'E02006111',
        '1YX' => 'E02006111',
        '1YY' => 'E02006101',
        '1YZ' => 'E02006101',
        '1ZN' => 'E02006105',
        '1ZQ' => 'E02006105',
        '1ZX' => 'E02006111',
        '2AA' => 'E02006101',
        '2AB' => 'E02006101',
        '2AD' => 'E02006101',
        '2AE' => 'E02006101',
        '2AF' => 'E02006101',
        '2AG' => 'E02006101',
        '2AH' => 'E02006101',
        '2AJ' => 'E02006101',
        '2AL' => 'E02006101',
        '2AN' => 'E02006101',
        '2AP' => 'E02006101',
        '2AQ' => 'E02006101',
        '2AR' => 'E02006101',
        '2AS' => 'E02006101',
        '2AT' => 'E02006101',
        '2AU' => 'E02006101',
        '2AW' => 'E02006101',
        '2AX' => 'E02006101',
        '2AY' => 'E02006101',
        '2AZ' => 'E02006101',
        '2BA' => 'E02006101',
        '2BB' => 'E02006101',
        '2BD' => 'E02006101',
        '2BE' => 'E02004164',
        '2BF' => 'E02006101',
        '2BG' => 'E02006101',
        '2BH' => 'E02006101',
        '2BJ' => 'E02006101',
        '2BL' => 'E02006101',
        '2BN' => 'E02006101',
        '2BP' => 'E02006101',
        '2BQ' => 'E02006101',
        '2BS' => 'E02006101',
        '2BT' => 'E02006101',
        '2BU' => 'E02006101',
        '2BW' => 'E02006101',
        '2BX' => 'E02006116',
        '2BY' => 'E02006116',
        '2BZ' => 'E02006116',
        '2DA' => 'E02006116',
        '2DB' => 'E02006116',
        '2DD' => 'E02006116',
        '2DE' => 'E02006116',
        '2DF' => 'E02006116',
        '2DG' => 'E02006116',
        '2DH' => 'E02006116',
        '2DJ' => 'E02006116',
        '2DL' => 'E02006116',
        '2DN' => 'E02006116',
        '2DP' => 'E02006117',
        '2DQ' => 'E02006116',
        '2DR' => 'E02006117',
        '2DS' => 'E02006116',
        '2DT' => 'E02006117',
        '2DU' => 'E02006101',
        '2DW' => 'E02006116',
        '2DX' => 'E02006101',
        '2DY' => 'E02006101',
        '2DZ' => 'E02006101',
        '2EA' => 'E02006116',
        '2EB' => 'E02006116',
        '2ED' => 'E02006116',
        '2EE' => 'E02006116',
        '2EF' => 'E02006116',
        '2EG' => 'E02006116',
        '2EH' => 'E02006116',
        '2EJ' => 'E02006116',
        '2EL' => 'E02006116',
        '2EN' => 'E02006116',
        '2EP' => 'E02006116',
        '2EQ' => 'E02006116',
        '2EW' => 'E02006116',
        '2EX' => 'E02006116',
        '2EY' => 'E02006116',
        '2EZ' => 'E02006116',
        '2GA' => 'E02006101',
        '2HA' => 'E02006116',
        '2HB' => 'E02006116',
        '2HD' => 'E02006116',
        '2HE' => 'E02006116',
        '2HF' => 'E02006116',
        '2HG' => 'E02006116',
        '2HH' => 'E02006116',
        '2HJ' => 'E02006116',
        '2HL' => 'E02006101',
        '2HN' => 'E02006101',
        '2HP' => 'E02006116',
        '2HQ' => 'E02006116',
        '2HU' => 'E02006116',
        '2HW' => 'E02006116',
        '2HX' => 'E02006116',
        '2HY' => 'E02006116',
        '2HZ' => 'E02006116',
        '2JA' => 'E02006116',
        '2JB' => 'E02006116',
        '2JD' => 'E02006116',
        '2JE' => 'E02006116',
        '2JF' => 'E02006116',
        '2JG' => 'E02006116',
        '2JH' => 'E02006116',
        '2JJ' => 'E02006116',
        '2JL' => 'E02006101',
        '2JN' => 'E02006101',
        '2JP' => 'E02006101',
        '2JQ' => 'E02006116',
        '2JR' => 'E02006101',
        '2JS' => 'E02006101',
        '2JT' => 'E02006101',
        '2JU' => 'E02006101',
        '2JW' => 'E02006101',
        '2JX' => 'E02006101',
        '2JY' => 'E02006101',
        '2JZ' => 'E02006101',
        '2LA' => 'E02006101',
        '2LB' => 'E02006101',
        '2LD' => 'E02006101',
        '2LE' => 'E02006101',
        '2LF' => 'E02006101',
        '2LG' => 'E02006101',
        '2LH' => 'E02006101',
        '2LJ' => 'E02006101',
        '2LL' => 'E02006101',
        '2LN' => 'E02006101',
        '2LP' => 'E02006101',
        '2LQ' => 'E02006101',
        '2LR' => 'E02006101',
        '2LS' => 'E02006101',
        '2LT' => 'E02006101',
        '2LU' => 'E02006101',
        '2LW' => 'E02006101',
        '2LX' => 'E02006101',
        '2LY' => 'E02006101',
        '2LZ' => 'E02006101',
        '2NA' => 'E02006101',
        '2NB' => 'E02006101',
        '2ND' => 'E02006101',
        '2NE' => 'E02006101',
        '2NF' => 'E02006101',
        '2NG' => 'E02006101',
        '2NH' => 'E02006101',
        '2NJ' => 'E02006101',
        '2NL' => 'E02006101',
        '2NN' => 'E02006101',
        '2NP' => 'E02006101',
        '2NQ' => 'E02006101',
        '2NR' => 'E02006101',
        '2NS' => 'E02006101',
        '2NT' => 'E02006101',
        '2NU' => 'E02006101',
        '2NW' => 'E02006101',
        '2NX' => 'E02006101',
        '2NY' => 'E02006101',
        '2NZ' => 'E02006101',
        '2PA' => 'E02006101',
        '2PB' => 'E02006101',
        '2PD' => 'E02006101',
        '2PE' => 'E02006101',
        '2PF' => 'E02006101',
        '2PG' => 'E02006101',
        '2PH' => 'E02006101',
        '2PJ' => 'E02006101',
        '2PL' => 'E02006101',
        '2PN' => 'E02006101',
        '2PP' => 'E02006101',
        '2PQ' => 'E02006101',
        '2PR' => 'E02006101',
        '2PS' => 'E02006101',
        '2PT' => 'E02006101',
        '2PU' => 'E02006101',
        '2PW' => 'E02006101',
        '2PX' => 'E02006101',
        '2PY' => 'E02006101',
        '2PZ' => 'E02006101',
        '2QA' => 'E02006101',
        '2QB' => 'E02006101',
        '2QD' => 'E02006101',
        '2QE' => 'E02006116',
        '2QF' => 'E02006101',
        '2QG' => 'E02006116',
        '2QH' => 'E02006116',
        '2QJ' => 'E02006116',
        '2QL' => 'E02006116',
        '2QN' => 'E02006116',
        '2QP' => 'E02004164',
        '2QQ' => 'E02006101',
        '2QR' => 'E02006101',
        '2QS' => 'E02006101',
        '2QT' => 'E02006101',
        '2QU' => 'E02006101',
        '2QW' => 'E02006101',
        '2QX' => 'E02006101',
        '2QY' => 'E02006101',
        '2RE' => 'E02006101',
        '2RF' => 'E02006101',
        '2RG' => 'E02006101',
        '2RH' => 'E02006101',
        '2RJ' => 'E02006101',
        '2RL' => 'E02006101',
        '2RN' => 'E02006101',
        '2RP' => 'E02006116',
        '2RQ' => 'E02006101',
        '2RR' => 'E02006116',
        '2RS' => 'E02006116',
        '2RT' => 'E02006116',
        '2RU' => 'E02006116',
        '2RW' => 'E02006116',
        '2RX' => 'E02006116',
        '2RY' => 'E02006116',
        '2RZ' => 'E02006116',
        '2SA' => 'E02006116',
        '2SB' => 'E02006116',
        '2SD' => 'E02006116',
        '2SE' => 'E02006116',
        '2SF' => 'E02006116',
        '2SG' => 'E02006116',
        '2SH' => 'E02006116',
        '2SJ' => 'E02006116',
        '2SL' => 'E02006116',
        '2SN' => 'E02006116',
        '2SQ' => 'E02006116',
        '2SU' => 'E02006101',
        '2SW' => 'E02006116',
        '2SX' => 'E02006101',
        '2SY' => 'E02006101',
        '2SZ' => 'E02006101',
        '2TA' => 'E02006101',
        '2TB' => 'E02006101',
        '2TD' => 'E02006101',
        '2TE' => 'E02006101',
        '2TF' => 'E02006101',
        '2TG' => 'E02006101',
        '2TH' => 'E02006101',
        '2TJ' => 'E02006101',
        '2TL' => 'E02006101',
        '2TN' => 'E02006101',
        '2TP' => 'E02006101',
        '2TQ' => 'E02006101',
        '2TR' => 'E02006101',
        '2TS' => 'E02006101',
        '2TT' => 'E02006101',
        '2TU' => 'E02006101',
        '2TW' => 'E02006101',
        '2TX' => 'E02006101',
        '2TY' => 'E02006101',
        '2UA' => 'E02006101',
        '2UB' => 'E02006101',
        '2UD' => 'E02006101',
        '2UE' => 'E02006101',
        '2UF' => 'E02006101',
        '2UG' => 'E02006101',
        '2UH' => 'E02006101',
        '2UJ' => 'E02006101',
        '2UL' => 'E02006101',
        '2UN' => 'E02006101',
        '2UP' => 'E02006101',
        '2UQ' => 'E02006101',
        '2UR' => 'E02006101',
        '2US' => 'E02006101',
        '2UT' => 'E02006101',
        '2UU' => 'E02006101',
        '2UW' => 'E02006101',
        '2UX' => 'E02006101',
        '2UY' => 'E02006101',
        '2UZ' => 'E02006101',
        '2WA' => 'E02006101',
        '2WD' => 'E02006101',
        '2WE' => 'E02006101',
        '2WF' => 'E02006101',
        '2WL' => 'E02006101',
        '2WN' => 'E02006101',
        '2WP' => 'E02006101',
        '2WQ' => 'E02006101',
        '2WR' => 'E02006101',
        '2WS' => 'E02006101',
        '2WT' => 'E02006101',
        '2WU' => 'E02006101',
        '2WW' => 'E02006101',
        '2WX' => 'E02006101',
        '2WY' => 'E02006101',
        '2WZ' => 'E02006101',
        '2XJ' => 'E02006101',
        '2XN' => 'E02006101',
        '2XX' => 'E02006101',
        '2XY' => 'E02006101',
        '2XZ' => 'E02006101',
        '2YA' => 'E02006101',
        '2YB' => 'E02006101',
        '2YD' => 'E02006101',
        '2YE' => 'E02006101',
        '2YF' => 'E02006101',
        '2YG' => 'E02006101',
        '2YH' => 'E02006101',
        '2YJ' => 'E02006101',
        '2YL' => 'E02006101',
        '2YN' => 'E02006101',
        '2YP' => 'E02006101',
        '2YQ' => 'E02006101',
        '2YR' => 'E02006101',
        '2YS' => 'E02006101',
        '2YT' => 'E02006101',
        '2YU' => 'E02006101',
        '2YW' => 'E02006101',
        '2YX' => 'E02006101',
        '2YY' => 'E02006101',
        '2YZ' => 'E02006101',
        '2ZD' => 'E02006101',
        '2ZE' => 'E02006101',
        '2ZF' => 'E02006101',
        '2ZG' => 'E02006101',
        '2ZH' => 'E02006101',
        '2ZJ' => 'E02006101',
        '2ZN' => 'E02006101',
        '2ZQ' => 'E02006101',
        '2ZR' => 'E02006101',
        '2ZX' => 'E02006101',
        '3AA' => 'E02006105',
        '3AB' => 'E02006099',
        '3AD' => 'E02006099',
        '3AE' => 'E02006099',
        '3AF' => 'E02006099',
        '3AG' => 'E02006099',
        '3AH' => 'E02006099',
        '3AJ' => 'E02006116',
        '3AL' => 'E02006099',
        '3AN' => 'E02006099',
        '3AP' => 'E02006099',
        '3AQ' => 'E02006099',
        '3AR' => 'E02006099',
        '3AS' => 'E02006099',
        '3AT' => 'E02006099',
        '3AU' => 'E02006099',
        '3AW' => 'E02006099',
        '3AX' => 'E02006099',
        '3AY' => 'E02006099',
        '3AZ' => 'E02006099',
        '3BA' => 'E02006099',
        '3BB' => 'E02006099',
        '3BD' => 'E02006099',
        '3BE' => 'E02006099',
        '3BF' => 'E02006105',
        '3BG' => 'E02006099',
        '3BH' => 'E02006099',
        '3BJ' => 'E02006099',
        '3BL' => 'E02006099',
        '3BN' => 'E02006099',
        '3BP' => 'E02006099',
        '3BQ' => 'E02006099',
        '3BS' => 'E02006099',
        '3BT' => 'E02006099',
        '3BU' => 'E02006099',
        '3BW' => 'E02006099',
        '3BX' => 'E02006099',
        '3BY' => 'E02006099',
        '3BZ' => 'E02006099',
        '3DA' => 'E02006099',
        '3DB' => 'E02006099',
        '3DD' => 'E02006099',
        '3DE' => 'E02006099',
        '3DF' => 'E02006099',
        '3DG' => 'E02006099',
        '3DH' => 'E02006099',
        '3DJ' => 'E02006099',
        '3DL' => 'E02006099',
        '3DN' => 'E02006099',
        '3DP' => 'E02006099',
        '3DQ' => 'E02006099',
        '3DR' => 'E02006099',
        '3DS' => 'E02006099',
        '3DT' => 'E02006099',
        '3DU' => 'E02006099',
        '3DW' => 'E02006099',
        '3DX' => 'E02006099',
        '3DY' => 'E02006099',
        '3DZ' => 'E02006099',
        '3EA' => 'E02006099',
        '3EB' => 'E02006099',
        '3ED' => 'E02006099',
        '3EE' => 'E02006099',
        '3EF' => 'E02006099',
        '3EG' => 'E02006099',
        '3EH' => 'E02006099',
        '3EJ' => 'E02006099',
        '3EL' => 'E02006099',
        '3EN' => 'E02006099',
        '3EP' => 'E02006099',
        '3EQ' => 'E02006099',
        '3ER' => 'E02006099',
        '3ES' => 'E02006099',
        '3ET' => 'E02006099',
        '3EU' => 'E02006099',
        '3EW' => 'E02006099',
        '3EX' => 'E02006099',
        '3EY' => 'E02006099',
        '3EZ' => 'E02006099',
        '3HA' => 'E02006099',
        '3HB' => 'E02006099',
        '3HD' => 'E02006116',
        '3HE' => 'E02006099',
        '3HF' => 'E02006099',
        '3HG' => 'E02006099',
        '3HH' => 'E02006099',
        '3HJ' => 'E02006099',
        '3HL' => 'E02006099',
        '3HQ' => 'E02006099',
        '3HR' => 'E02006099',
        '3HS' => 'E02006099',
        '3HT' => 'E02006099',
        '3HU' => 'E02006099',
        '3HX' => 'E02006099',
        '3HY' => 'E02006099',
        '3HZ' => 'E02006099',
        '3JA' => 'E02006099',
        '3JB' => 'E02006099',
        '3JD' => 'E02006099',
        '3JE' => 'E02006099',
        '3JF' => 'E02006099',
        '3JG' => 'E02006099',
        '3JH' => 'E02006099',
        '3JJ' => 'E02006099',
        '3JL' => 'E02006099',
        '3JN' => 'E02006101',
        '3JP' => 'E02006101',
        '3JQ' => 'E02006099',
        '3JR' => 'E02006101',
        '3JS' => 'E02006101',
        '3JT' => 'E02006101',
        '3JU' => 'E02006101',
        '3JW' => 'E02006101',
        '3JX' => 'E02006101',
        '3JY' => 'E02006101',
        '3JZ' => 'E02006101',
        '3LA' => 'E02006101',
        '3LB' => 'E02006099',
        '3LD' => 'E02006101',
        '3LE' => 'E02006099',
        '3LF' => 'E02006099',
        '3LH' => 'E02006099',
        '3LJ' => 'E02006099',
        '3LL' => 'E02006099',
        '3LN' => 'E02006099',
        '3LP' => 'E02006099',
        '3LR' => 'E02006099',
        '3LS' => 'E02006099',
        '3LT' => 'E02006099',
        '3LU' => 'E02006099',
        '3LW' => 'E02006099',
        '3LX' => 'E02006099',
        '3LY' => 'E02006099',
        '3LZ' => 'E02006099',
        '3NA' => 'E02006099',
        '3NB' => 'E02006099',
        '3ND' => 'E02006099',
        '3NE' => 'E02006099',
        '3NF' => 'E02006099',
        '3NG' => 'E02006099',
        '3NH' => 'E02006099',
        '3NJ' => 'E02006099',
        '3NL' => 'E02006099',
        '3NN' => 'E02006099',
        '3NP' => 'E02006099',
        '3NQ' => 'E02006099',
        '3NR' => 'E02006099',
        '3NS' => 'E02006099',
        '3NT' => 'E02006099',
        '3NU' => 'E02006099',
        '3NW' => 'E02006099',
        '3NX' => 'E02006099',
        '3NY' => 'E02006099',
        '3NZ' => 'E02006099',
        '3PA' => 'E02006099',
        '3PB' => 'E02006099',
        '3PD' => 'E02006099',
        '3PE' => 'E02006099',
        '3PF' => 'E02006099',
        '3PG' => 'E02006099',
        '3PH' => 'E02006099',
        '3PJ' => 'E02006099',
        '3PL' => 'E02006099',
        '3PN' => 'E02006099',
        '3PP' => 'E02006099',
        '3PQ' => 'E02006099',
        '3PR' => 'E02006099',
        '3PS' => 'E02006116',
        '3PT' => 'E02006116',
        '3PU' => 'E02006116',
        '3PW' => 'E02006099',
        '3PX' => 'E02006116',
        '3PY' => 'E02006116',
        '3PZ' => 'E02006116',
        '3QA' => 'E02006116',
        '3QB' => 'E02006116',
        '3QD' => 'E02006099',
        '3QE' => 'E02006116',
        '3QF' => 'E02006116',
        '3QG' => 'E02006116',
        '3QH' => 'E02006116',
        '3QJ' => 'E02006116',
        '3QL' => 'E02006116',
        '3QN' => 'E02006099',
        '3QP' => 'E02006116',
        '3QQ' => 'E02006116',
        '3QU' => 'E02006099',
        '3QW' => 'E02006116',
        '3QX' => 'E02006099',
        '3QY' => 'E02006099',
        '3QZ' => 'E02006099',
        '3RA' => 'E02006099',
        '3RB' => 'E02006099',
        '3RD' => 'E02006099',
        '3RE' => 'E02006099',
        '3RF' => 'E02006099',
        '3RG' => 'E02006116',
        '3RH' => 'E02006099',
        '3RJ' => 'E02006099',
        '3RL' => 'E02006099',
        '3RN' => 'E02006099',
        '3RQ' => 'E02006099',
        '3RU' => 'E02006099',
        '3RW' => 'E02006099',
        '3RX' => 'E02006099',
        '3RY' => 'E02006099',
        '3RZ' => 'E02006099',
        '3SA' => 'E02006099',
        '3SB' => 'E02006099',
        '3SD' => 'E02006099',
        '3SE' => 'E02006099',
        '3SF' => 'E02006099',
        '3SG' => 'E02006099',
        '3SH' => 'E02006099',
        '3SJ' => 'E02006116',
        '3SL' => 'E02006099',
        '3SN' => 'E02006099',
        '3SP' => 'E02006099',
        '3SQ' => 'E02006099',
        '3SW' => 'E02006099',
        '3SX' => 'E02006116',
        '3SY' => 'E02006116',
        '3SZ' => 'E02006116',
        '3TA' => 'E02006116',
        '3TB' => 'E02006116',
        '3TD' => 'E02006116',
        '3TE' => 'E02006116',
        '3TF' => 'E02006116',
        '3TG' => 'E02006116',
        '3TH' => 'E02006116',
        '3TJ' => 'E02006116',
        '3TL' => 'E02006116',
        '3TN' => 'E02006116',
        '3TP' => 'E02006116',
        '3TQ' => 'E02006116',
        '3TR' => 'E02006116',
        '3TS' => 'E02006116',
        '3TT' => 'E02006116',
        '3TU' => 'E02006116',
        '3TW' => 'E02006116',
        '3TX' => 'E02006116',
        '3TY' => 'E02006116',
        '3TZ' => 'E02006116',
        '3UA' => 'E02006099',
        '3UB' => 'E02006116',
        '3UD' => 'E02006099',
        '3UE' => 'E02006116',
        '3UF' => 'E02006116',
        '3WD' => 'E02006099',
        '3WE' => 'E02006099',
        '3WF' => 'E02006099',
        '3WG' => 'E02006099',
        '3WH' => 'E02006105',
        '3WJ' => 'E02006099',
        '3WL' => 'E02006099',
        '3WR' => 'E02006105',
        '3WS' => 'E02006105',
        '3WT' => 'E02006105',
        '3WU' => 'E02006105',
        '3WW' => 'E02006105',
        '3WX' => 'E02006105',
        '3WY' => 'E02006105',
        '3WZ' => 'E02006105',
        '3XA' => 'E02006105',
        '3XN' => 'E02006105',
        '3XZ' => 'E02006105',
        '3YA' => 'E02006105',
        '3YB' => 'E02006105',
        '3YD' => 'E02006099',
        '3YE' => 'E02006105',
        '3YF' => 'E02006105',
        '3YG' => 'E02006099',
        '3YH' => 'E02006099',
        '3YJ' => 'E02006099',
        '3YL' => 'E02006099',
        '3YN' => 'E02006105',
        '3YP' => 'E02006099',
        '3YQ' => 'E02006099',
        '3YR' => 'E02006099',
        '3YS' => 'E02006099',
        '3YT' => 'E02006099',
        '3YU' => 'E02006099',
        '3YW' => 'E02006099',
        '3YX' => 'E02006116',
        '3YY' => 'E02006105',
        '3YZ' => 'E02006105',
        '3ZD' => 'E02006105',
        '3ZE' => 'E02006105',
        '3ZQ' => 'E02006105',
        '3ZX' => 'E02006105',
        '4AA' => 'E02006116',
        '4AB' => 'E02006116',
        '4AD' => 'E02006116',
        '4AE' => 'E02006116',
        '4AF' => 'E02006116',
        '4AG' => 'E02006116',
        '4AH' => 'E02006116',
        '4AJ' => 'E02006116',
        '4AL' => 'E02006116',
        '4AN' => 'E02006116',
        '4AP' => 'E02006116',
        '4AQ' => 'E02006116',
        '4AR' => 'E02006116',
        '4AS' => 'E02006116',
        '4AT' => 'E02006115',
        '4AW' => 'E02006116',
        '4AX' => 'E02006116',
        '4AY' => 'E02006116',
        '4AZ' => 'E02006116',
        '4BA' => 'E02006116',
        '4BB' => 'E02006116',
        '4BD' => 'E02006116',
        '4BE' => 'E02006116',
        '4BF' => 'E02006116',
        '4BG' => 'E02006116',
        '4BH' => 'E02006116',
        '4BJ' => 'E02006116',
        '4BL' => 'E02006116',
        '4BN' => 'E02006116',
        '4BP' => 'E02006116',
        '4BQ' => 'E02006116',
        '4BS' => 'E02006116',
        '4BT' => 'E02006116',
        '4BU' => 'E02006116',
        '4BW' => 'E02006116',
        '4BX' => 'E02006116',
        '4BY' => 'E02006115',
        '4BZ' => 'E02006115',
        '4DA' => 'E02006116',
        '4DD' => 'E02006115',
        '4DE' => 'E02006116',
        '4DF' => 'E02006116',
        '4DH' => 'E02006116',
        '4DJ' => 'E02006116',
        '4DL' => 'E02006116',
        '4DN' => 'E02006116',
        '4DP' => 'E02006116',
        '4DQ' => 'E02006116',
        '4DR' => 'E02006116',
        '4DS' => 'E02006116',
        '4DT' => 'E02006116',
        '4DU' => 'E02006116',
        '4DW' => 'E02006116',
        '4DX' => 'E02006116',
        '4DY' => 'E02006116',
        '4DZ' => 'E02006116',
        '4EA' => 'E02006116',
        '4EB' => 'E02006116',
        '4ED' => 'E02006116',
        '4EE' => 'E02006116',
        '4EF' => 'E02006116',
        '4EG' => 'E02006116',
        '4EH' => 'E02006116',
        '4EJ' => 'E02006116',
        '4EL' => 'E02006116',
        '4EN' => 'E02006116',
        '4EP' => 'E02006116',
        '4EQ' => 'E02006116',
        '4ER' => 'E02006116',
        '4ES' => 'E02006116',
        '4ET' => 'E02006116',
        '4EU' => 'E02006116',
        '4EW' => 'E02006116',
        '4EX' => 'E02006116',
        '4EY' => 'E02006116',
        '4FA' => 'E02006116',
        '4HA' => 'E02006105',
        '4HH' => 'E02006116',
        '4HJ' => 'E02006116',
        '4HL' => 'E02006116',
        '4HN' => 'E02006116',
        '4HP' => 'E02006116',
        '4HR' => 'E02006116',
        '4HS' => 'E02006116',
        '4HT' => 'E02006116',
        '4HU' => 'E02006116',
        '4HW' => 'E02006116',
        '4HX' => 'E02006116',
        '4HY' => 'E02006116',
        '4HZ' => 'E02006116',
        '4JA' => 'E02006116',
        '4JB' => 'E02006116',
        '4JD' => 'E02006116',
        '4JE' => 'E02006116',
        '4JF' => 'E02006116',
        '4JG' => 'E02006116',
        '4JH' => 'E02006116',
        '4JL' => 'E02006116',
        '4JQ' => 'E02006116',
        '4JR' => 'E02006116',
        '4JT' => 'E02006116',
        '4JU' => 'E02006116',
        '4JW' => 'E02006116',
        '4JX' => 'E02006116',
        '4JY' => 'E02006116',
        '4JZ' => 'E02006116',
        '4LA' => 'E02006116',
        '4LB' => 'E02006116',
        '4LD' => 'E02006116',
        '4LE' => 'E02006116',
        '4LF' => 'E02006116',
        '4LG' => 'E02006116',
        '4LH' => 'E02006116',
        '4LJ' => 'E02006116',
        '4LL' => 'E02006116',
        '4LN' => 'E02006116',
        '4LP' => 'E02006116',
        '4LQ' => 'E02006116',
        '4LR' => 'E02006116',
        '4LS' => 'E02006116',
        '4LT' => 'E02006116',
        '4LU' => 'E02006116',
        '4LW' => 'E02006116',
        '4LX' => 'E02006116',
        '4LY' => 'E02006116',
        '4LZ' => 'E02006116',
        '4NA' => 'E02006116',
        '4NB' => 'E02006105',
        '4ND' => 'E02006116',
        '4NG' => 'E02006116',
        '4NH' => 'E02006116',
        '4NJ' => 'E02006116',
        '4NL' => 'E02006116',
        '4NN' => 'E02006116',
        '4NP' => 'E02006116',
        '4NQ' => 'E02006116',
        '4NR' => 'E02006116',
        '4NS' => 'E02006116',
        '4NT' => 'E02006116',
        '4NU' => 'E02006116',
        '4NW' => 'E02006116',
        '4NX' => 'E02006116',
        '4NY' => 'E02006116',
        '4NZ' => 'E02006116',
        '4PA' => 'E02006116',
        '4PB' => 'E02006116',
        '4PD' => 'E02006116',
        '4PE' => 'E02006116',
        '4PF' => 'E02006116',
        '4PG' => 'E02006116',
        '4PH' => 'E02006116',
        '4PJ' => 'E02006116',
        '4PL' => 'E02006116',
        '4PQ' => 'E02006116',
        '4PX' => 'E02006116',
        '4PY' => 'E02006116',
        '4PZ' => 'E02006116',
        '4QA' => 'E02006116',
        '4QB' => 'E02006115',
        '4QD' => 'E02006116',
        '4QE' => 'E02006116',
        '4QF' => 'E02006116',
        '4QG' => 'E02006116',
        '4QH' => 'E02006116',
        '4QJ' => 'E02006116',
        '4QL' => 'E02006116',
        '4QN' => 'E02006116',
        '4QP' => 'E02006116',
        '4QQ' => 'E02006116',
        '4QR' => 'E02006115',
        '4QS' => 'E02006115',
        '4QT' => 'E02006116',
        '4QU' => 'E02006116',
        '4QW' => 'E02006116',
        '4QX' => 'E02006116',
        '4QY' => 'E02006116',
        '4QZ' => 'E02006115',
        '4RA' => 'E02006116',
        '4RB' => 'E02006115',
        '4RD' => 'E02006116',
        '4RE' => 'E02006115',
        '4RF' => 'E02006116',
        '4RG' => 'E02006115',
        '4RH' => 'E02006116',
        '4RJ' => 'E02006115',
        '4RL' => 'E02006115',
        '4RN' => 'E02006115',
        '4RP' => 'E02006115',
        '4RQ' => 'E02006115',
        '4RR' => 'E02006115',
        '4RS' => 'E02006115',
        '4RT' => 'E02006115',
        '4RU' => 'E02006115',
        '4RW' => 'E02006115',
        '4RX' => 'E02006115',
        '4RY' => 'E02006115',
        '4RZ' => 'E02006115',
        '4SA' => 'E02006115',
        '4SB' => 'E02006115',
        '4SD' => 'E02006115',
        '4SE' => 'E02006115',
        '4SF' => 'E02006115',
        '4SG' => 'E02006116',
        '4SH' => 'E02006115',
        '4SJ' => 'E02006115',
        '4SL' => 'E02006116',
        '4SN' => 'E02006116',
        '4SP' => 'E02006115',
        '4SQ' => 'E02006115',
        '4SR' => 'E02006115',
        '4SS' => 'E02006116',
        '4ST' => 'E02006116',
        '4SU' => 'E02006116',
        '4SW' => 'E02006116',
        '4SX' => 'E02006116',
        '4SY' => 'E02006116',
        '4SZ' => 'E02006115',
        '4TA' => 'E02006116',
        '4TB' => 'E02006116',
        '4TE' => 'E02006116',
        '4TF' => 'E02006116',
        '4TG' => 'E02006116',
        '4TH' => 'E02006116',
        '4TJ' => 'E02006116',
        '4TL' => 'E02006115',
        '4TQ' => 'E02006116',
        '4WD' => 'E02006105',
        '4WE' => 'E02006116',
        '4WF' => 'E02006105',
        '4WW' => 'E02006105',
        '4WX' => 'E02006105',
        '4WY' => 'E02006105',
        '4WZ' => 'E02006105',
        '4XA' => 'E02006116',
        '4XN' => 'E02006116',
        '4XW' => 'E02006105',
        '4YA' => 'E02006105',
        '4YH' => 'E02006105',
        '4YJ' => 'E02006105',
        '4YL' => 'E02006105',
        '4YN' => 'E02006105',
        '4YP' => 'E02006105',
        '4YQ' => 'E02006105',
        '4YR' => 'E02006105',
        '4YS' => 'E02006116',
        '4YT' => 'E02006105',
        '4YU' => 'E02006105',
        '4YW' => 'E02006116',
        '4YX' => 'E02006116',
        '4YY' => 'E02006116',
        '4YZ' => 'E02006116',
        '4ZD' => 'E02006116',
        '4ZN' => 'E02006105',
        '4ZQ' => 'E02006105',
        '4ZY' => 'E02006105',
        '9TA' => 'E02006116',
        '9TB' => 'E02006116',
        '9TD' => 'E02006116',
        '9TE' => 'E02006116',
        '9TF' => 'E02006116',
        '9TG' => 'E02006116',
        '9TH' => 'E02006116',
        '9TJ' => 'E02006116',
        '9TL' => 'E02006116',
        '9TN' => 'E02006116',
        '9TQ' => 'E02006116',
        '9TW' => 'E02006116',
        '9TX' => 'E02006116',
        '9UA' => 'E02006116',
        '9UB' => 'E02006116',
        '9UD' => 'E02006116',
        '9UE' => 'E02006116',
        '9UF' => 'E02006116',
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
