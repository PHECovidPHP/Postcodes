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
final class B8
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02001884',
        '1AB' => 'E02001878',
        '1AD' => 'E02001878',
        '1AE' => 'E02001878',
        '1AF' => 'E02001878',
        '1AG' => 'E02001878',
        '1AH' => 'E02001878',
        '1AJ' => 'E02001878',
        '1AL' => 'E02001878',
        '1AN' => 'E02001878',
        '1AP' => 'E02001878',
        '1AQ' => 'E02001884',
        '1AR' => 'E02001878',
        '1AS' => 'E02001877',
        '1AT' => 'E02001878',
        '1AU' => 'E02001878',
        '1AW' => 'E02001878',
        '1AX' => 'E02001877',
        '1AY' => 'E02001874',
        '1AZ' => 'E02001874',
        '1BA' => 'E02001884',
        '1BB' => 'E02001874',
        '1BD' => 'E02001874',
        '1BE' => 'E02001877',
        '1BG' => 'E02001877',
        '1BH' => 'E02001874',
        '1BJ' => 'E02001877',
        '1BL' => 'E02001877',
        '1BP' => 'E02001884',
        '1BQ' => 'E02001884',
        '1BS' => 'E02001878',
        '1BT' => 'E02001878',
        '1BU' => 'E02001878',
        '1BX' => 'E02001884',
        '1BY' => 'E02001884',
        '1BZ' => 'E02001878',
        '1DA' => 'E02001884',
        '1DB' => 'E02001878',
        '1DD' => 'E02001884',
        '1DE' => 'E02001878',
        '1DF' => 'E02001878',
        '1DG' => 'E02001878',
        '1DH' => 'E02001878',
        '1DJ' => 'E02001878',
        '1DL' => 'E02001884',
        '1DN' => 'E02001878',
        '1DP' => 'E02001878',
        '1DQ' => 'E02001878',
        '1DR' => 'E02001878',
        '1DS' => 'E02001878',
        '1DT' => 'E02001878',
        '1DU' => 'E02001878',
        '1DW' => 'E02001878',
        '1DX' => 'E02001878',
        '1DY' => 'E02001878',
        '1DZ' => 'E02001878',
        '1EA' => 'E02001878',
        '1EB' => 'E02001878',
        '1ED' => 'E02001878',
        '1EE' => 'E02001878',
        '1EF' => 'E02001884',
        '1EG' => 'E02001878',
        '1EH' => 'E02001878',
        '1EJ' => 'E02001878',
        '1EP' => 'E02001878',
        '1ER' => 'E02001878',
        '1ES' => 'E02001878',
        '1ET' => 'E02001877',
        '1EU' => 'E02001877',
        '1EW' => 'E02001877',
        '1EX' => 'E02001878',
        '1EY' => 'E02001878',
        '1EZ' => 'E02001878',
        '1HA' => 'E02001878',
        '1HB' => 'E02001878',
        '1HD' => 'E02001878',
        '1HE' => 'E02001878',
        '1HF' => 'E02001878',
        '1HG' => 'E02001878',
        '1HH' => 'E02001878',
        '1HJ' => 'E02001878',
        '1HL' => 'E02001878',
        '1HN' => 'E02001878',
        '1HP' => 'E02001878',
        '1HQ' => 'E02001878',
        '1HR' => 'E02001877',
        '1HS' => 'E02001877',
        '1HT' => 'E02001877',
        '1HU' => 'E02001877',
        '1HW' => 'E02001878',
        '1HX' => 'E02001877',
        '1HY' => 'E02001877',
        '1HZ' => 'E02001877',
        '1JA' => 'E02001877',
        '1JB' => 'E02001877',
        '1JD' => 'E02001878',
        '1JE' => 'E02001877',
        '1JF' => 'E02001877',
        '1JG' => 'E02001877',
        '1JH' => 'E02001878',
        '1JJ' => 'E02001878',
        '1JL' => 'E02001878',
        '1JN' => 'E02001878',
        '1JQ' => 'E02001878',
        '1JR' => 'E02001877',
        '1JS' => 'E02001878',
        '1JU' => 'E02001878',
        '1JW' => 'E02001877',
        '1LA' => 'E02001878',
        '1LB' => 'E02001878',
        '1LD' => 'E02001878',
        '1LE' => 'E02001878',
        '1LF' => 'E02001878',
        '1LH' => 'E02001884',
        '1LJ' => 'E02001878',
        '1LL' => 'E02001878',
        '1LN' => 'E02001878',
        '1LP' => 'E02001878',
        '1LQ' => 'E02001878',
        '1LR' => 'E02001878',
        '1LS' => 'E02001878',
        '1LT' => 'E02001878',
        '1LU' => 'E02001878',
        '1LW' => 'E02001878',
        '1LX' => 'E02001878',
        '1LY' => 'E02001878',
        '1NA' => 'E02001878',
        '1NB' => 'E02001878',
        '1ND' => 'E02001878',
        '1NE' => 'E02001878',
        '1NF' => 'E02001878',
        '1NG' => 'E02001878',
        '1NH' => 'E02001878',
        '1NJ' => 'E02001878',
        '1NL' => 'E02001877',
        '1NN' => 'E02001877',
        '1NP' => 'E02001877',
        '1NQ' => 'E02001878',
        '1NR' => 'E02001877',
        '1NS' => 'E02001877',
        '1NT' => 'E02001877',
        '1NU' => 'E02001874',
        '1NW' => 'E02001884',
        '1NX' => 'E02001874',
        '1NY' => 'E02001874',
        '1NZ' => 'E02001874',
        '1PA' => 'E02001874',
        '1PB' => 'E02001874',
        '1PD' => 'E02001874',
        '1PE' => 'E02001874',
        '1PF' => 'E02001884',
        '1PG' => 'E02001874',
        '1PH' => 'E02001874',
        '1PJ' => 'E02001874',
        '1PL' => 'E02001874',
        '1PN' => 'E02001874',
        '1PP' => 'E02001877',
        '1PQ' => 'E02001874',
        '1PR' => 'E02001877',
        '1PS' => 'E02001877',
        '1PT' => 'E02001877',
        '1PW' => 'E02001874',
        '1PX' => 'E02001877',
        '1QA' => 'E02001874',
        '1QB' => 'E02001874',
        '1QD' => 'E02001874',
        '1QE' => 'E02001874',
        '1QF' => 'E02001874',
        '1QG' => 'E02001874',
        '1QH' => 'E02001874',
        '1QJ' => 'E02001874',
        '1QL' => 'E02001874',
        '1QN' => 'E02001874',
        '1QP' => 'E02001877',
        '1QQ' => 'E02001874',
        '1QR' => 'E02001877',
        '1QS' => 'E02001877',
        '1QT' => 'E02001874',
        '1QU' => 'E02001877',
        '1QW' => 'E02001874',
        '1QX' => 'E02001874',
        '1RA' => 'E02001878',
        '1RB' => 'E02001877',
        '1RD' => 'E02001877',
        '1RE' => 'E02001874',
        '1RF' => 'E02001874',
        '1RG' => 'E02001874',
        '1RH' => 'E02001874',
        '1RJ' => 'E02001874',
        '1RL' => 'E02001874',
        '1RN' => 'E02001874',
        '1RP' => 'E02001884',
        '1RQ' => 'E02001874',
        '1RR' => 'E02001877',
        '1RS' => 'E02001877',
        '1RT' => 'E02001877',
        '1RU' => 'E02001877',
        '1RW' => 'E02001874',
        '1RX' => 'E02001877',
        '1RY' => 'E02001877',
        '1RZ' => 'E02001877',
        '1SA' => 'E02001877',
        '1SB' => 'E02001877',
        '1SD' => 'E02001877',
        '1SE' => 'E02001877',
        '1SF' => 'E02001877',
        '1SG' => 'E02001877',
        '1SH' => 'E02001877',
        '1SJ' => 'E02001877',
        '1SL' => 'E02001877',
        '1SN' => 'E02001884',
        '1SP' => 'E02001874',
        '1SR' => 'E02001874',
        '1SS' => 'E02001874',
        '1ST' => 'E02001874',
        '1SU' => 'E02001874',
        '1SX' => 'E02001877',
        '1SZ' => 'E02001877',
        '1TA' => 'E02001878',
        '1TB' => 'E02001878',
        '1TD' => 'E02001878',
        '1TE' => 'E02001878',
        '1TF' => 'E02001884',
        '1TG' => 'E02001877',
        '1TP' => 'E02001878',
        '1WA' => 'E02001884',
        '1WB' => 'E02001884',
        '1WD' => 'E02001884',
        '1WE' => 'E02001884',
        '1WH' => 'E02001884',
        '1WU' => 'E02001884',
        '1XB' => 'E02001884',
        '1XD' => 'E02001884',
        '1YB' => 'E02001884',
        '1YQ' => 'E02001884',
        '1ZB' => 'E02001884',
        '1ZD' => 'E02001884',
        '1ZQ' => 'E02001884',
        '1ZR' => 'E02001884',
        '1ZU' => 'E02001884',
        '2AA' => 'E02001881',
        '2AB' => 'E02001881',
        '2AD' => 'E02001870',
        '2AE' => 'E02001881',
        '2AF' => 'E02001870',
        '2AG' => 'E02001870',
        '2AH' => 'E02001881',
        '2AJ' => 'E02001881',
        '2AL' => 'E02001868',
        '2AN' => 'E02001868',
        '2AP' => 'E02001881',
        '2AQ' => 'E02001881',
        '2AR' => 'E02001881',
        '2AS' => 'E02001881',
        '2AT' => 'E02001881',
        '2AU' => 'E02001881',
        '2AW' => 'E02001881',
        '2AX' => 'E02001870',
        '2AY' => 'E02001870',
        '2BA' => 'E02001870',
        '2BB' => 'E02001870',
        '2BD' => 'E02001870',
        '2BE' => 'E02001870',
        '2BF' => 'E02001870',
        '2BG' => 'E02001870',
        '2BH' => 'E02001874',
        '2BJ' => 'E02001870',
        '2BL' => 'E02001874',
        '2BN' => 'E02001870',
        '2BP' => 'E02001870',
        '2BQ' => 'E02001870',
        '2BS' => 'E02001870',
        '2BT' => 'E02001874',
        '2BU' => 'E02001874',
        '2BW' => 'E02001870',
        '2BX' => 'E02001874',
        '2BY' => 'E02001874',
        '2BZ' => 'E02001874',
        '2DA' => 'E02001874',
        '2DB' => 'E02001874',
        '2DD' => 'E02001874',
        '2DE' => 'E02001874',
        '2DF' => 'E02001874',
        '2DG' => 'E02001874',
        '2DH' => 'E02001874',
        '2DJ' => 'E02001874',
        '2DL' => 'E02001870',
        '2DN' => 'E02001874',
        '2DP' => 'E02001868',
        '2DQ' => 'E02001874',
        '2DR' => 'E02001874',
        '2DS' => 'E02001868',
        '2DT' => 'E02001870',
        '2DU' => 'E02001870',
        '2DX' => 'E02001870',
        '2DY' => 'E02001870',
        '2DZ' => 'E02001870',
        '2EA' => 'E02001870',
        '2EB' => 'E02001870',
        '2ED' => 'E02001870',
        '2EE' => 'E02001870',
        '2EF' => 'E02001870',
        '2EG' => 'E02001870',
        '2EH' => 'E02001870',
        '2EJ' => 'E02001870',
        '2EL' => 'E02001870',
        '2EN' => 'E02001870',
        '2EP' => 'E02001870',
        '2EQ' => 'E02001870',
        '2ET' => 'E02001874',
        '2EU' => 'E02001874',
        '2EW' => 'E02001874',
        '2EX' => 'E02001874',
        '2EY' => 'E02001874',
        '2HA' => 'E02001874',
        '2HB' => 'E02001870',
        '2HD' => 'E02001870',
        '2HE' => 'E02001874',
        '2HF' => 'E02001874',
        '2HG' => 'E02001870',
        '2HH' => 'E02001870',
        '2HJ' => 'E02001870',
        '2HL' => 'E02001870',
        '2HN' => 'E02001870',
        '2HP' => 'E02001870',
        '2HQ' => 'E02001870',
        '2HR' => 'E02001870',
        '2HS' => 'E02001870',
        '2HT' => 'E02001870',
        '2HU' => 'E02001870',
        '2HW' => 'E02001884',
        '2HX' => 'E02001870',
        '2HY' => 'E02001870',
        '2JA' => 'E02001870',
        '2JD' => 'E02001870',
        '2JE' => 'E02001870',
        '2JF' => 'E02001870',
        '2JG' => 'E02001870',
        '2JH' => 'E02001870',
        '2JJ' => 'E02001870',
        '2JL' => 'E02001870',
        '2JN' => 'E02001870',
        '2JP' => 'E02001870',
        '2JR' => 'E02001870',
        '2JS' => 'E02001870',
        '2JT' => 'E02001870',
        '2JU' => 'E02001870',
        '2JW' => 'E02001884',
        '2JX' => 'E02001870',
        '2JY' => 'E02001870',
        '2JZ' => 'E02001884',
        '2LA' => 'E02001870',
        '2LB' => 'E02001870',
        '2LD' => 'E02001870',
        '2LE' => 'E02001870',
        '2LG' => 'E02001870',
        '2LH' => 'E02001870',
        '2LJ' => 'E02001870',
        '2LL' => 'E02001870',
        '2LQ' => 'E02001870',
        '2LS' => 'E02001870',
        '2LT' => 'E02001881',
        '2LU' => 'E02001881',
        '2LX' => 'E02001881',
        '2LY' => 'E02001881',
        '2LZ' => 'E02001881',
        '2NA' => 'E02001881',
        '2NB' => 'E02001870',
        '2ND' => 'E02001870',
        '2NE' => 'E02001870',
        '2NG' => 'E02001870',
        '2NH' => 'E02001870',
        '2NJ' => 'E02001870',
        '2NL' => 'E02001870',
        '2NN' => 'E02001884',
        '2NP' => 'E02001870',
        '2NR' => 'E02001870',
        '2NS' => 'E02001870',
        '2NT' => 'E02001881',
        '2NU' => 'E02001881',
        '2NW' => 'E02001870',
        '2NY' => 'E02001881',
        '2NZ' => 'E02001881',
        '2PA' => 'E02001881',
        '2PB' => 'E02001881',
        '2PD' => 'E02001881',
        '2PE' => 'E02001881',
        '2PF' => 'E02001881',
        '2PH' => 'E02001884',
        '2PJ' => 'E02001881',
        '2PL' => 'E02001881',
        '2PN' => 'E02001881',
        '2PP' => 'E02001881',
        '2PQ' => 'E02001881',
        '2PR' => 'E02001881',
        '2PS' => 'E02001881',
        '2PT' => 'E02001884',
        '2PU' => 'E02001881',
        '2PW' => 'E02001881',
        '2PX' => 'E02001881',
        '2PY' => 'E02001881',
        '2PZ' => 'E02001884',
        '2QD' => 'E02001870',
        '2QE' => 'E02001874',
        '2QF' => 'E02001874',
        '2QG' => 'E02001874',
        '2QH' => 'E02001874',
        '2QJ' => 'E02001870',
        '2QL' => 'E02001870',
        '2QP' => 'E02001870',
        '2QR' => 'E02001870',
        '2QS' => 'E02001870',
        '2QT' => 'E02001870',
        '2QU' => 'E02001874',
        '2QW' => 'E02001870',
        '2QX' => 'E02001874',
        '2QY' => 'E02001870',
        '2QZ' => 'E02001870',
        '2RA' => 'E02001874',
        '2RB' => 'E02001870',
        '2RD' => 'E02001870',
        '2RE' => 'E02001870',
        '2RF' => 'E02001870',
        '2RG' => 'E02001870',
        '2RH' => 'E02001870',
        '2RJ' => 'E02001870',
        '2RL' => 'E02001870',
        '2RN' => 'E02001870',
        '2RP' => 'E02001870',
        '2RQ' => 'E02001870',
        '2RR' => 'E02001870',
        '2RS' => 'E02001870',
        '2RT' => 'E02001870',
        '2RU' => 'E02001870',
        '2RW' => 'E02001870',
        '2RX' => 'E02001870',
        '2RY' => 'E02001870',
        '2RZ' => 'E02001870',
        '2SA' => 'E02001870',
        '2SB' => 'E02001870',
        '2SD' => 'E02001870',
        '2SE' => 'E02001870',
        '2SF' => 'E02001870',
        '2SG' => 'E02001874',
        '2SH' => 'E02001874',
        '2SJ' => 'E02001874',
        '2SL' => 'E02001874',
        '2SN' => 'E02001877',
        '2SQ' => 'E02001874',
        '2SR' => 'E02001870',
        '2SU' => 'E02001877',
        '2SW' => 'E02001874',
        '2SX' => 'E02001870',
        '2SY' => 'E02001870',
        '2SZ' => 'E02001877',
        '2TA' => 'E02001884',
        '2TE' => 'E02001870',
        '2TF' => 'E02001870',
        '2TG' => 'E02001870',
        '2TH' => 'E02001870',
        '2TJ' => 'E02001870',
        '2TL' => 'E02001870',
        '2TN' => 'E02001870',
        '2TP' => 'E02001870',
        '2TQ' => 'E02001870',
        '2TR' => 'E02001870',
        '2TS' => 'E02001870',
        '2TT' => 'E02001870',
        '2TU' => 'E02001870',
        '2TX' => 'E02001870',
        '2TY' => 'E02001870',
        '2UA' => 'E02001881',
        '2UB' => 'E02001884',
        '2UD' => 'E02001881',
        '2UE' => 'E02001881',
        '2UF' => 'E02001881',
        '2UG' => 'E02001881',
        '2UH' => 'E02001877',
        '2UJ' => 'E02001874',
        '2UL' => 'E02001874',
        '2UN' => 'E02001874',
        '2UP' => 'E02001874',
        '2UQ' => 'E02001884',
        '2UR' => 'E02001870',
        '2US' => 'E02001874',
        '2UT' => 'E02001874',
        '2UU' => 'E02001874',
        '2UW' => 'E02001874',
        '2UX' => 'E02001874',
        '2UY' => 'E02001874',
        '2UZ' => 'E02001870',
        '2WA' => 'E02001870',
        '2XA' => 'E02001874',
        '2XB' => 'E02001874',
        '2XD' => 'E02001874',
        '2XE' => 'E02001874',
        '2XF' => 'E02001874',
        '2XG' => 'E02001874',
        '2XH' => 'E02001874',
        '2XJ' => 'E02001874',
        '2XL' => 'E02001874',
        '2XN' => 'E02001874',
        '2XP' => 'E02001884',
        '2XQ' => 'E02001874',
        '2XR' => 'E02001874',
        '2XS' => 'E02001874',
        '2XT' => 'E02001874',
        '2XU' => 'E02001874',
        '2XW' => 'E02001874',
        '2XX' => 'E02001874',
        '2XY' => 'E02001874',
        '2XZ' => 'E02001884',
        '2YA' => 'E02001884',
        '2YB' => 'E02001884',
        '2YD' => 'E02001874',
        '2YE' => 'E02001874',
        '2YF' => 'E02001884',
        '2YG' => 'E02001874',
        '2YH' => 'E02001874',
        '2YJ' => 'E02001874',
        '2YL' => 'E02001874',
        '2YN' => 'E02001884',
        '2YQ' => 'E02001874',
        '2YT' => 'E02001884',
        '2YU' => 'E02001884',
        '2YY' => 'E02001884',
        '2ZL' => 'E02001884',
        '2ZQ' => 'E02001884',
        '2ZY' => 'E02001884',
        '3AA' => 'E02001877',
        '3AB' => 'E02001877',
        '3AD' => 'E02001877',
        '3AE' => 'E02001884',
        '3AF' => 'E02001877',
        '3AG' => 'E02001884',
        '3AH' => 'E02001884',
        '3AJ' => 'E02001877',
        '3AL' => 'E02001877',
        '3AN' => 'E02001877',
        '3AP' => 'E02001877',
        '3AQ' => 'E02001877',
        '3AR' => 'E02001884',
        '3AS' => 'E02001877',
        '3AT' => 'E02001877',
        '3AU' => 'E02001877',
        '3AW' => 'E02001877',
        '3AX' => 'E02001877',
        '3AY' => 'E02001877',
        '3AZ' => 'E02001877',
        '3BA' => 'E02001877',
        '3BB' => 'E02001877',
        '3BD' => 'E02001884',
        '3BE' => 'E02001877',
        '3BF' => 'E02001884',
        '3BG' => 'E02001877',
        '3BH' => 'E02001877',
        '3BJ' => 'E02001877',
        '3BL' => 'E02001877',
        '3BN' => 'E02001884',
        '3BP' => 'E02001884',
        '3BQ' => 'E02001877',
        '3BS' => 'E02001884',
        '3BT' => 'E02001884',
        '3BU' => 'E02001884',
        '3BW' => 'E02001881',
        '3BX' => 'E02001884',
        '3BY' => 'E02001884',
        '3BZ' => 'E02001877',
        '3DA' => 'E02001877',
        '3DB' => 'E02001877',
        '3DD' => 'E02001877',
        '3DE' => 'E02001884',
        '3DF' => 'E02001877',
        '3DG' => 'E02001877',
        '3DH' => 'E02001877',
        '3DJ' => 'E02001877',
        '3DL' => 'E02001877',
        '3DN' => 'E02001877',
        '3DP' => 'E02001877',
        '3DQ' => 'E02001884',
        '3DR' => 'E02001877',
        '3DS' => 'E02001884',
        '3DT' => 'E02001884',
        '3DU' => 'E02001884',
        '3DW' => 'E02001884',
        '3DX' => 'E02001884',
        '3DY' => 'E02001884',
        '3DZ' => 'E02001884',
        '3EA' => 'E02001884',
        '3EB' => 'E02001884',
        '3ED' => 'E02001884',
        '3EE' => 'E02001884',
        '3EF' => 'E02001884',
        '3EG' => 'E02001884',
        '3EH' => 'E02001877',
        '3EJ' => 'E02001884',
        '3EL' => 'E02001877',
        '3EN' => 'E02001881',
        '3EP' => 'E02001881',
        '3EQ' => 'E02001884',
        '3ER' => 'E02001881',
        '3ES' => 'E02001881',
        '3ET' => 'E02001877',
        '3EU' => 'E02001881',
        '3EW' => 'E02001881',
        '3EX' => 'E02001881',
        '3EY' => 'E02001881',
        '3EZ' => 'E02001877',
        '3GA' => 'E02001877',
        '3HA' => 'E02001884',
        '3HB' => 'E02001884',
        '3HD' => 'E02001884',
        '3HE' => 'E02001877',
        '3HF' => 'E02001877',
        '3HG' => 'E02001874',
        '3HH' => 'E02001877',
        '3HJ' => 'E02001877',
        '3HL' => 'E02001874',
        '3HN' => 'E02001874',
        '3HP' => 'E02001877',
        '3HQ' => 'E02001877',
        '3HR' => 'E02001877',
        '3HS' => 'E02001877',
        '3HT' => 'E02001877',
        '3HU' => 'E02001877',
        '3HW' => 'E02001877',
        '3HX' => 'E02001877',
        '3HY' => 'E02001877',
        '3HZ' => 'E02001884',
        '3JA' => 'E02001877',
        '3JB' => 'E02001877',
        '3JD' => 'E02001877',
        '3JE' => 'E02001877',
        '3JF' => 'E02001877',
        '3JG' => 'E02001877',
        '3JH' => 'E02001877',
        '3JJ' => 'E02001877',
        '3JL' => 'E02001877',
        '3JN' => 'E02001877',
        '3JP' => 'E02001874',
        '3JQ' => 'E02001877',
        '3JR' => 'E02001874',
        '3JS' => 'E02001874',
        '3JT' => 'E02001874',
        '3JU' => 'E02001874',
        '3JW' => 'E02001877',
        '3JX' => 'E02001877',
        '3JY' => 'E02001877',
        '3JZ' => 'E02001874',
        '3LA' => 'E02001874',
        '3LB' => 'E02001877',
        '3LD' => 'E02001877',
        '3LE' => 'E02001877',
        '3LF' => 'E02001877',
        '3LH' => 'E02001877',
        '3LJ' => 'E02001877',
        '3LL' => 'E02001877',
        '3LN' => 'E02001877',
        '3LP' => 'E02001877',
        '3LR' => 'E02001877',
        '3LS' => 'E02001877',
        '3LT' => 'E02001877',
        '3LU' => 'E02001877',
        '3LW' => 'E02001877',
        '3LX' => 'E02001877',
        '3LY' => 'E02001877',
        '3NA' => 'E02001877',
        '3NB' => 'E02001877',
        '3ND' => 'E02001877',
        '3NE' => 'E02001877',
        '3NF' => 'E02001877',
        '3NG' => 'E02001877',
        '3NH' => 'E02001877',
        '3NL' => 'E02001884',
        '3NN' => 'E02001877',
        '3NP' => 'E02001877',
        '3NQ' => 'E02001877',
        '3NR' => 'E02001877',
        '3NS' => 'E02001877',
        '3NT' => 'E02001881',
        '3NU' => 'E02001881',
        '3NW' => 'E02001884',
        '3NX' => 'E02001881',
        '3NY' => 'E02001877',
        '3NZ' => 'E02001877',
        '3PA' => 'E02001877',
        '3PB' => 'E02001877',
        '3PD' => 'E02001877',
        '3PE' => 'E02001877',
        '3PF' => 'E02001881',
        '3PH' => 'E02001874',
        '3PJ' => 'E02001874',
        '3PL' => 'E02001877',
        '3PN' => 'E02001877',
        '3PP' => 'E02001881',
        '3PR' => 'E02001881',
        '3PS' => 'E02001881',
        '3PT' => 'E02001881',
        '3PU' => 'E02001881',
        '3PX' => 'E02001881',
        '3QA' => 'E02001884',
        '3QB' => 'E02001877',
        '3QD' => 'E02001877',
        '3QE' => 'E02001877',
        '3QF' => 'E02001874',
        '3QG' => 'E02001877',
        '3QH' => 'E02001874',
        '3QJ' => 'E02001874',
        '3QL' => 'E02001874',
        '3QN' => 'E02001874',
        '3QP' => 'E02001874',
        '3QR' => 'E02001874',
        '3QS' => 'E02001874',
        '3QT' => 'E02001874',
        '3QU' => 'E02001877',
        '3QW' => 'E02001874',
        '3QX' => 'E02001877',
        '3QY' => 'E02001877',
        '3RB' => 'E02001881',
        '3RD' => 'E02001881',
        '3RE' => 'E02001881',
        '3RF' => 'E02001881',
        '3RG' => 'E02001881',
        '3RH' => 'E02001881',
        '3RJ' => 'E02001881',
        '3RL' => 'E02001881',
        '3RN' => 'E02001881',
        '3RP' => 'E02001881',
        '3RQ' => 'E02001881',
        '3RR' => 'E02001881',
        '3RS' => 'E02001881',
        '3RU' => 'E02001881',
        '3RX' => 'E02001881',
        '3RY' => 'E02001881',
        '3RZ' => 'E02001881',
        '3SA' => 'E02001881',
        '3SB' => 'E02001881',
        '3SE' => 'E02001877',
        '3SF' => 'E02001877',
        '3SG' => 'E02001877',
        '3SH' => 'E02001877',
        '3SJ' => 'E02001877',
        '3SL' => 'E02001877',
        '3SN' => 'E02001877',
        '3SP' => 'E02001877',
        '3SQ' => 'E02001878',
        '3SR' => 'E02001877',
        '3SS' => 'E02001877',
        '3ST' => 'E02001877',
        '3SU' => 'E02001877',
        '3SW' => 'E02001877',
        '3SX' => 'E02001877',
        '3SY' => 'E02001877',
        '3SZ' => 'E02001877',
        '3TA' => 'E02001877',
        '3TB' => 'E02001877',
        '3TD' => 'E02001877',
        '3TE' => 'E02001877',
        '3TF' => 'E02001877',
        '3TG' => 'E02001877',
        '3TH' => 'E02001878',
        '3TJ' => 'E02001878',
        '3TL' => 'E02001877',
        '3TQ' => 'E02001877',
        '3TW' => 'E02001877',
        '3UA' => 'E02001877',
        '3WB' => 'E02001877',
        '3WD' => 'E02001877',
        '3WF' => 'E02001877',
        '3WG' => 'E02001884',
        '3WP' => 'E02001884',
        '3XA' => 'E02001881',
        '3YF' => 'E02001884',
        '3YG' => 'E02001884',
        '3YQ' => 'E02001877',
        '3YW' => 'E02001884',
        '3ZY' => 'E02001884',
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
