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
final class RG25
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02004761',
        '1AB' => 'E02004761',
        '1AD' => 'E02004761',
        '1AE' => 'E02004761',
        '1AF' => 'E02004761',
        '1AG' => 'E02004758',
        '1AH' => 'E02004758',
        '1AJ' => 'E02004761',
        '1AL' => 'E02004761',
        '1AN' => 'E02004761',
        '1AP' => 'E02004761',
        '1AQ' => 'E02004758',
        '1AR' => 'E02004761',
        '1AS' => 'E02004761',
        '1AT' => 'E02004761',
        '1AU' => 'E02004761',
        '1AW' => 'E02004761',
        '1AX' => 'E02004761',
        '1AY' => 'E02004761',
        '1AZ' => 'E02004761',
        '1BA' => 'E02004761',
        '1BB' => 'E02004761',
        '1BD' => 'E02004761',
        '1BE' => 'E02004761',
        '1BG' => 'E02004761',
        '1BH' => 'E02004761',
        '1BJ' => 'E02004761',
        '1BL' => 'E02004761',
        '1BN' => 'E02004761',
        '1BP' => 'E02004761',
        '1BQ' => 'E02004761',
        '1BS' => 'E02004761',
        '1BT' => 'E02004761',
        '1BU' => 'E02004761',
        '1BW' => 'E02004761',
        '1BX' => 'E02004761',
        '1BY' => 'E02004761',
        '1BZ' => 'E02004761',
        '1DA' => 'E02004761',
        '1DB' => 'E02004761',
        '1DD' => 'E02004761',
        '1DE' => 'E02004761',
        '1DF' => 'E02004761',
        '1DG' => 'E02004761',
        '1DH' => 'E02004761',
        '1DJ' => 'E02004761',
        '1DL' => 'E02004761',
        '1DN' => 'E02004761',
        '1DP' => 'E02004761',
        '1DQ' => 'E02004761',
        '1DR' => 'E02004761',
        '1DS' => 'E02004761',
        '1DT' => 'E02004761',
        '1DU' => 'E02004761',
        '1DW' => 'E02004761',
        '1DX' => 'E02004761',
        '1DY' => 'E02004761',
        '1DZ' => 'E02004761',
        '1EA' => 'E02004761',
        '1EB' => 'E02004761',
        '1ED' => 'E02004761',
        '1EE' => 'E02004761',
        '1EF' => 'E02004761',
        '1EG' => 'E02004761',
        '1EH' => 'E02004761',
        '1EJ' => 'E02004761',
        '1EL' => 'E02004761',
        '1EN' => 'E02004761',
        '1EP' => 'E02004761',
        '1EQ' => 'E02004761',
        '1ER' => 'E02004761',
        '1ES' => 'E02004761',
        '1ET' => 'E02004761',
        '1EU' => 'E02004761',
        '1EW' => 'E02004761',
        '1EX' => 'E02004761',
        '1EY' => 'E02004761',
        '1EZ' => 'E02004761',
        '1HA' => 'E02004758',
        '1HB' => 'E02004761',
        '1HD' => 'E02004758',
        '1HE' => 'E02004761',
        '1HF' => 'E02004758',
        '1HG' => 'E02004758',
        '1HH' => 'E02004758',
        '1HJ' => 'E02004758',
        '1HN' => 'E02004761',
        '1HQ' => 'E02004758',
        '1HR' => 'E02004758',
        '1HS' => 'E02004758',
        '1HT' => 'E02004758',
        '1HU' => 'E02004758',
        '1HW' => 'E02004758',
        '1HX' => 'E02004758',
        '1HY' => 'E02004758',
        '1HZ' => 'E02004758',
        '1JA' => 'E02004758',
        '1JB' => 'E02004758',
        '1JD' => 'E02004758',
        '1JE' => 'E02004758',
        '1JF' => 'E02004758',
        '1JG' => 'E02004758',
        '1JH' => 'E02004758',
        '1JJ' => 'E02004758',
        '1JL' => 'E02004758',
        '1JN' => 'E02004758',
        '1JP' => 'E02004758',
        '1JQ' => 'E02004758',
        '1JR' => 'E02004758',
        '1JT' => 'E02004761',
        '1JW' => 'E02004758',
        '1JX' => 'E02004761',
        '1JY' => 'E02004761',
        '1JZ' => 'E02004761',
        '1LA' => 'E02004761',
        '1LB' => 'E02004761',
        '1LD' => 'E02004761',
        '1LE' => 'E02004761',
        '1LF' => 'E02004761',
        '1LG' => 'E02004761',
        '1LH' => 'E02004761',
        '1LJ' => 'E02004761',
        '1LL' => 'E02004761',
        '1LN' => 'E02004761',
        '1LP' => 'E02004761',
        '1LQ' => 'E02004761',
        '1LR' => 'E02004761',
        '1LS' => 'E02004761',
        '1LT' => 'E02004761',
        '1LU' => 'E02004761',
        '1LW' => 'E02004761',
        '1LX' => 'E02004761',
        '1LY' => 'E02004761',
        '1LZ' => 'E02004761',
        '1NA' => 'E02004761',
        '1NB' => 'E02004761',
        '1ND' => 'E02004761',
        '1NE' => 'E02004761',
        '1NF' => 'E02004761',
        '1NG' => 'E02004761',
        '1NH' => 'E02004761',
        '1NJ' => 'E02004761',
        '1NL' => 'E02004761',
        '1NN' => 'E02004761',
        '1NP' => 'E02004761',
        '1NQ' => 'E02004761',
        '1NR' => 'E02004761',
        '1NS' => 'E02004761',
        '1NT' => 'E02004761',
        '1NU' => 'E02004761',
        '1NW' => 'E02004761',
        '1NX' => 'E02004761',
        '1NY' => 'E02004761',
        '1NZ' => 'E02004761',
        '1PA' => 'E02004761',
        '1PB' => 'E02004761',
        '1PD' => 'E02004761',
        '1PE' => 'E02004761',
        '1PF' => 'E02004761',
        '1PG' => 'E02004761',
        '1PH' => 'E02004761',
        '1PJ' => 'E02004761',
        '1PL' => 'E02004761',
        '1PN' => 'E02004761',
        '1PP' => 'E02004761',
        '1PQ' => 'E02004761',
        '1PR' => 'E02004761',
        '1PS' => 'E02004761',
        '1PT' => 'E02004761',
        '1PU' => 'E02004761',
        '1PW' => 'E02004761',
        '1PX' => 'E02004761',
        '1PY' => 'E02004761',
        '1PZ' => 'E02004761',
        '1QA' => 'E02004761',
        '1QB' => 'E02004761',
        '1QD' => 'E02004761',
        '1QE' => 'E02004761',
        '1QF' => 'E02004761',
        '1QG' => 'E02004761',
        '1QH' => 'E02004761',
        '1QJ' => 'E02004761',
        '1QL' => 'E02004761',
        '1QN' => 'E02004761',
        '1QP' => 'E02004761',
        '1QQ' => 'E02004761',
        '1QR' => 'E02004761',
        '1QS' => 'E02004761',
        '1QT' => 'E02004761',
        '1QU' => 'E02004761',
        '1QW' => 'E02004761',
        '1QX' => 'E02004761',
        '1QY' => 'E02004761',
        '1RA' => 'E02004761',
        '1RB' => 'E02004761',
        '1RD' => 'E02004761',
        '1RE' => 'E02004761',
        '1RF' => 'E02004761',
        '1RG' => 'E02004761',
        '1RH' => 'E02004761',
        '1RJ' => 'E02004761',
        '1RL' => 'E02004761',
        '1RN' => 'E02004761',
        '1RP' => 'E02004761',
        '1RQ' => 'E02004761',
        '1RR' => 'E02004761',
        '1RS' => 'E02004761',
        '1RT' => 'E02004761',
        '1RU' => 'E02004761',
        '1RW' => 'E02004761',
        '1RX' => 'E02004761',
        '1RY' => 'E02004691',
        '1RZ' => 'E02004761',
        '1SA' => 'E02004761',
        '1SB' => 'E02004761',
        '1SD' => 'E02004761',
        '1SE' => 'E02004761',
        '1SF' => 'E02004761',
        '1SG' => 'E02004761',
        '1SH' => 'E02004761',
        '1SJ' => 'E02004761',
        '1SL' => 'E02004761',
        '1SN' => 'E02004761',
        '1SP' => 'E02004761',
        '1SQ' => 'E02004761',
        '1SR' => 'E02004761',
        '1SS' => 'E02004761',
        '1ST' => 'E02004761',
        '1SU' => 'E02004761',
        '1SW' => 'E02004761',
        '1SX' => 'E02004761',
        '1SY' => 'E02004761',
        '1SZ' => 'E02004761',
        '1TA' => 'E02004761',
        '1TB' => 'E02004761',
        '1TD' => 'E02004761',
        '1TE' => 'E02004761',
        '1TF' => 'E02004761',
        '1TG' => 'E02004761',
        '1TH' => 'E02004761',
        '1TJ' => 'E02004761',
        '1TL' => 'E02004761',
        '1TN' => 'E02004761',
        '1TP' => 'E02004761',
        '1TQ' => 'E02004761',
        '1TR' => 'E02004761',
        '1TS' => 'E02004761',
        '1TU' => 'E02004761',
        '1TX' => 'E02004761',
        '1TY' => 'E02004761',
        '1UA' => 'E02004761',
        '1UB' => 'E02004761',
        '1UD' => 'E02004761',
        '1UF' => 'E02004761',
        '1UH' => 'E02004761',
        '1UQ' => 'E02004761',
        '2AA' => 'E02004696',
        '2AB' => 'E02004696',
        '2AD' => 'E02004696',
        '2AE' => 'E02004696',
        '2AF' => 'E02004696',
        '2AG' => 'E02004696',
        '2AH' => 'E02004696',
        '2AJ' => 'E02004696',
        '2AL' => 'E02004696',
        '2AN' => 'E02004696',
        '2AP' => 'E02004696',
        '2AQ' => 'E02004696',
        '2AR' => 'E02004696',
        '2AS' => 'E02004696',
        '2AT' => 'E02004696',
        '2AU' => 'E02004696',
        '2AW' => 'E02004696',
        '2AX' => 'E02004691',
        '2AY' => 'E02004696',
        '2AZ' => 'E02004696',
        '2BA' => 'E02004696',
        '2BB' => 'E02004696',
        '2BD' => 'E02004696',
        '2BE' => 'E02004696',
        '2BF' => 'E02004681',
        '2BG' => 'E02004696',
        '2BH' => 'E02004696',
        '2BJ' => 'E02004696',
        '2BL' => 'E02004696',
        '2BN' => 'E02004696',
        '2BP' => 'E02004696',
        '2BQ' => 'E02004696',
        '2BS' => 'E02004696',
        '2BT' => 'E02004696',
        '2BU' => 'E02004696',
        '2BW' => 'E02004696',
        '2BX' => 'E02004696',
        '2BY' => 'E02004696',
        '2BZ' => 'E02004696',
        '2DA' => 'E02004696',
        '2DB' => 'E02004696',
        '2DD' => 'E02004696',
        '2DE' => 'E02004696',
        '2DF' => 'E02004696',
        '2DG' => 'E02004696',
        '2DH' => 'E02004696',
        '2DJ' => 'E02004696',
        '2DL' => 'E02004696',
        '2DN' => 'E02004691',
        '2DP' => 'E02004691',
        '2DQ' => 'E02004696',
        '2DR' => 'E02004691',
        '2DS' => 'E02004691',
        '2DT' => 'E02004691',
        '2DU' => 'E02004691',
        '2DW' => 'E02004691',
        '2DX' => 'E02004691',
        '2DY' => 'E02004691',
        '2DZ' => 'E02004691',
        '2EA' => 'E02004691',
        '2EB' => 'E02004691',
        '2ED' => 'E02004691',
        '2EE' => 'E02004691',
        '2EF' => 'E02004691',
        '2EG' => 'E02004691',
        '2EH' => 'E02004691',
        '2EJ' => 'E02004691',
        '2EL' => 'E02004696',
        '2EN' => 'E02004691',
        '2EP' => 'E02004691',
        '2EQ' => 'E02004691',
        '2ER' => 'E02004691',
        '2ES' => 'E02004691',
        '2ET' => 'E02004691',
        '2EU' => 'E02004696',
        '2EW' => 'E02004691',
        '2EX' => 'E02004691',
        '2EY' => 'E02004691',
        '2EZ' => 'E02004691',
        '2FA' => 'E02004691',
        '2FB' => 'E02004691',
        '2FD' => 'E02004691',
        '2FE' => 'E02004691',
        '2FG' => 'E02004691',
        '2GZ' => 'E02004691',
        '2HA' => 'E02004691',
        '2HB' => 'E02004691',
        '2HD' => 'E02004691',
        '2HE' => 'E02004691',
        '2HF' => 'E02004691',
        '2HG' => 'E02004691',
        '2HH' => 'E02004691',
        '2HJ' => 'E02004691',
        '2HL' => 'E02004691',
        '2HN' => 'E02004691',
        '2HP' => 'E02004691',
        '2HQ' => 'E02004691',
        '2HR' => 'E02004691',
        '2HS' => 'E02004691',
        '2HT' => 'E02004691',
        '2HU' => 'E02004691',
        '2HW' => 'E02004691',
        '2HX' => 'E02004691',
        '2HY' => 'E02004691',
        '2HZ' => 'E02004691',
        '2JA' => 'E02004691',
        '2JB' => 'E02004691',
        '2JD' => 'E02004691',
        '2JE' => 'E02004691',
        '2JF' => 'E02004691',
        '2JG' => 'E02004691',
        '2JH' => 'E02004691',
        '2JJ' => 'E02004691',
        '2JL' => 'E02004691',
        '2JN' => 'E02004691',
        '2JP' => 'E02004691',
        '2JQ' => 'E02004691',
        '2JR' => 'E02004691',
        '2JS' => 'E02004691',
        '2JT' => 'E02004691',
        '2JU' => 'E02004691',
        '2JW' => 'E02004691',
        '2JX' => 'E02004691',
        '2JY' => 'E02004691',
        '2JZ' => 'E02004691',
        '2LA' => 'E02004691',
        '2LB' => 'E02004691',
        '2LD' => 'E02004691',
        '2LE' => 'E02004691',
        '2LF' => 'E02004691',
        '2LG' => 'E02004691',
        '2LH' => 'E02004691',
        '2LJ' => 'E02004691',
        '2LL' => 'E02004691',
        '2LN' => 'E02004691',
        '2LP' => 'E02004691',
        '2LQ' => 'E02004691',
        '2LR' => 'E02004691',
        '2LS' => 'E02004691',
        '2LT' => 'E02004691',
        '2LU' => 'E02004691',
        '2LW' => 'E02004691',
        '2LX' => 'E02004691',
        '2LY' => 'E02004691',
        '2LZ' => 'E02004691',
        '2NA' => 'E02004691',
        '2NB' => 'E02004691',
        '2ND' => 'E02004691',
        '2NE' => 'E02004691',
        '2NF' => 'E02004691',
        '2NG' => 'E02004691',
        '2NH' => 'E02004691',
        '2NJ' => 'E02004691',
        '2NL' => 'E02004691',
        '2NN' => 'E02004691',
        '2NP' => 'E02004691',
        '2NQ' => 'E02004691',
        '2NR' => 'E02004691',
        '2NS' => 'E02004691',
        '2NT' => 'E02004691',
        '2NU' => 'E02004691',
        '2NW' => 'E02004691',
        '2NX' => 'E02004691',
        '2NY' => 'E02004691',
        '2NZ' => 'E02004691',
        '2PA' => 'E02004691',
        '2PB' => 'E02004691',
        '2PD' => 'E02004691',
        '2PE' => 'E02004691',
        '2PF' => 'E02004691',
        '2PG' => 'E02004691',
        '2PH' => 'E02004691',
        '2PJ' => 'E02004691',
        '2PL' => 'E02004691',
        '2PN' => 'E02004691',
        '2PP' => 'E02004697',
        '2PQ' => 'E02004691',
        '2PR' => 'E02004691',
        '2PS' => 'E02004691',
        '2PT' => 'E02004691',
        '2PU' => 'E02004691',
        '2PW' => 'E02004691',
        '2PX' => 'E02004691',
        '2PY' => 'E02004691',
        '2PZ' => 'E02004691',
        '2QA' => 'E02004691',
        '2QB' => 'E02004691',
        '2QD' => 'E02004691',
        '2QE' => 'E02004691',
        '2QF' => 'E02004691',
        '2QG' => 'E02004691',
        '2QH' => 'E02004691',
        '2QJ' => 'E02004691',
        '2QL' => 'E02004691',
        '2QN' => 'E02004691',
        '2QP' => 'E02004691',
        '2QQ' => 'E02004691',
        '2QR' => 'E02004691',
        '2QS' => 'E02004691',
        '2QT' => 'E02004691',
        '2QU' => 'E02004691',
        '2QW' => 'E02004691',
        '2QX' => 'E02004691',
        '2RA' => 'E02004691',
        '2RB' => 'E02004691',
        '2RD' => 'E02004691',
        '2RE' => 'E02004691',
        '2RF' => 'E02004691',
        '2RG' => 'E02004691',
        '2RH' => 'E02004691',
        '2RJ' => 'E02004691',
        '2RL' => 'E02004691',
        '2RN' => 'E02004691',
        '2RP' => 'E02004761',
        '2RQ' => 'E02004691',
        '2RR' => 'E02004691',
        '2RS' => 'E02004691',
        '2RT' => 'E02004691',
        '2RU' => 'E02004691',
        '2RW' => 'E02004691',
        '2RX' => 'E02004691',
        '2RY' => 'E02004691',
        '2RZ' => 'E02004691',
        '2SA' => 'E02004691',
        '2SB' => 'E02004683',
        '2SD' => 'E02004683',
        '2SE' => 'E02004683',
        '2SF' => 'E02004683',
        '2SG' => 'E02004691',
        '2SH' => 'E02004691',
        '2SJ' => 'E02004683',
        '2SL' => 'E02004691',
        '2SP' => 'E02004683',
        '2SQ' => 'E02004683',
        '2SR' => 'E02004696',
        '2SS' => 'E02004691',
        '2ST' => 'E02004696',
        '2SU' => 'E02004696',
        '2SX' => 'E02004696',
        '2SY' => 'E02004696',
        '2SZ' => 'E02004696',
        '2TX' => 'E02004691',
        '2UN' => 'E02004691',
        '2WA' => 'E02004681',
        '2WB' => 'E02004681',
        '2WD' => 'E02004681',
        '2WE' => 'E02004681',
        '2WF' => 'E02004681',
        '2WG' => 'E02004681',
        '2WJ' => 'E02004681',
        '2XH' => 'E02004681',
        '2XJ' => 'E02004681',
        '2XL' => 'E02004681',
        '2XN' => 'E02004681',
        '2XP' => 'E02004691',
        '2XQ' => 'E02004681',
        '2XR' => 'E02004691',
        '2XS' => 'E02004691',
        '2XT' => 'E02004691',
        '2XU' => 'E02004691',
        '2XW' => 'E02004691',
        '2XX' => 'E02004691',
        '2XY' => 'E02004691',
        '2XZ' => 'E02004691',
        '2YA' => 'E02004691',
        '2YB' => 'E02004681',
        '2YD' => 'E02004691',
        '2YE' => 'E02004691',
        '2YF' => 'E02004691',
        '2YG' => 'E02004691',
        '2YH' => 'E02004691',
        '2YJ' => 'E02004691',
        '2YL' => 'E02004691',
        '2YN' => 'E02004681',
        '2YP' => 'E02004681',
        '2YQ' => 'E02004691',
        '2YR' => 'E02004691',
        '2YS' => 'E02004691',
        '2YT' => 'E02004691',
        '2YU' => 'E02004681',
        '2YW' => 'E02004681',
        '2YX' => 'E02004681',
        '2YY' => 'E02004691',
        '2YZ' => 'E02004691',
        '2ZB' => 'E02004681',
        '2ZJ' => 'E02004681',
        '2ZN' => 'E02004681',
        '2ZQ' => 'E02004681',
        '2ZX' => 'E02004681',
        '3AA' => 'E02004696',
        '3AB' => 'E02004696',
        '3AD' => 'E02004696',
        '3AE' => 'E02004696',
        '3AF' => 'E02004696',
        '3AG' => 'E02004696',
        '3AH' => 'E02004696',
        '3AJ' => 'E02004696',
        '3AL' => 'E02004696',
        '3AN' => 'E02004696',
        '3AP' => 'E02004696',
        '3AQ' => 'E02004696',
        '3AR' => 'E02004689',
        '3AS' => 'E02004689',
        '3AT' => 'E02004689',
        '3AU' => 'E02004689',
        '3AW' => 'E02004696',
        '3AX' => 'E02004689',
        '3AY' => 'E02004696',
        '3AZ' => 'E02004696',
        '3BA' => 'E02004696',
        '3BB' => 'E02004696',
        '3BD' => 'E02004696',
        '3BE' => 'E02004696',
        '3BF' => 'E02004696',
        '3BG' => 'E02004696',
        '3BH' => 'E02004696',
        '3BJ' => 'E02004696',
        '3BL' => 'E02004696',
        '3BN' => 'E02004696',
        '3BP' => 'E02004696',
        '3BQ' => 'E02004696',
        '3BS' => 'E02004696',
        '3BT' => 'E02004696',
        '3BU' => 'E02004696',
        '3BW' => 'E02004696',
        '3BY' => 'E02004696',
        '3BZ' => 'E02004696',
        '3DA' => 'E02004696',
        '3DB' => 'E02004696',
        '3DD' => 'E02004696',
        '3DE' => 'E02004696',
        '3DF' => 'E02004696',
        '3DG' => 'E02004696',
        '3DH' => 'E02004696',
        '3DJ' => 'E02004696',
        '3DL' => 'E02004696',
        '3DN' => 'E02004696',
        '3DP' => 'E02004696',
        '3DQ' => 'E02004696',
        '3DR' => 'E02004696',
        '3DS' => 'E02004696',
        '3DT' => 'E02004696',
        '3DU' => 'E02004696',
        '3DW' => 'E02004696',
        '3DX' => 'E02004696',
        '3DY' => 'E02004696',
        '3DZ' => 'E02004696',
        '3EA' => 'E02004696',
        '3EB' => 'E02004696',
        '3ED' => 'E02004696',
        '3EE' => 'E02004696',
        '3EF' => 'E02004696',
        '3EG' => 'E02004678',
        '3EH' => 'E02004696',
        '3EJ' => 'E02004678',
        '3EL' => 'E02004678',
        '3EN' => 'E02004678',
        '3EP' => 'E02004696',
        '3EQ' => 'E02004696',
        '3ER' => 'E02004696',
        '3ES' => 'E02004696',
        '3ET' => 'E02004677',
        '3EU' => 'E02004696',
        '3EW' => 'E02004696',
        '3EZ' => 'E02004696',
        '3FA' => 'E02004696',
        '3FB' => 'E02004696',
        '3FD' => 'E02004696',
        '3FE' => 'E02004696',
        '3HA' => 'E02004696',
        '3HB' => 'E02004696',
        '3HD' => 'E02004696',
        '3HE' => 'E02004696',
        '3HF' => 'E02004696',
        '3HG' => 'E02004696',
        '3HH' => 'E02004696',
        '3HJ' => 'E02004696',
        '3HL' => 'E02004696',
        '3HN' => 'E02004696',
        '3HP' => 'E02004696',
        '3HQ' => 'E02004696',
        '3HR' => 'E02004696',
        '3HS' => 'E02004696',
        '3HT' => 'E02004696',
        '3HU' => 'E02004696',
        '3HW' => 'E02004696',
        '3HX' => 'E02004696',
        '3HY' => 'E02004696',
        '3HZ' => 'E02004696',
        '3JA' => 'E02004696',
        '3JB' => 'E02004696',
        '3JD' => 'E02004696',
        '3JE' => 'E02004696',
        '3JF' => 'E02004696',
        '3JG' => 'E02004696',
        '3JH' => 'E02004696',
        '3JJ' => 'E02004696',
        '3JL' => 'E02004696',
        '3JN' => 'E02004696',
        '3JP' => 'E02004696',
        '3JQ' => 'E02004696',
        '3JR' => 'E02004696',
        '3JS' => 'E02004696',
        '3JT' => 'E02004696',
        '3JU' => 'E02004696',
        '3JW' => 'E02004696',
        '3JY' => 'E02004696',
        '3JZ' => 'E02004696',
        '3LA' => 'E02004696',
        '3LB' => 'E02004696',
        '3LD' => 'E02004696',
        '3LE' => 'E02004696',
        '3LF' => 'E02004696',
        '3LG' => 'E02004696',
        '3LH' => 'E02004696',
        '3LJ' => 'E02004696',
        '3LL' => 'E02004696',
        '3LN' => 'E02004696',
        '3LP' => 'E02004696',
        '3LQ' => 'E02004696',
        '3LR' => 'E02004696',
        '3LS' => 'E02004696',
        '3LT' => 'E02004696',
        '3LU' => 'E02004696',
        '3LW' => 'E02004696',
        '3LX' => 'E02004696',
        '3LY' => 'E02004696',
        '3LZ' => 'E02004696',
        '3NA' => 'E02004696',
        '3NB' => 'E02004696',
        '3ND' => 'E02004696',
        '3NE' => 'E02004696',
        '3NF' => 'E02004696',
        '3NG' => 'E02004696',
        '3NH' => 'E02004696',
        '3NJ' => 'E02004696',
        '3NL' => 'E02004696',
        '3NN' => 'E02004696',
        '3NP' => 'E02004696',
        '3NQ' => 'E02004696',
        '3NR' => 'E02004696',
        '3NS' => 'E02004696',
        '3NT' => 'E02004696',
        '3NU' => 'E02004696',
        '3NW' => 'E02004696',
        '3NX' => 'E02004696',
        '3NY' => 'E02004696',
        '3NZ' => 'E02004696',
        '3PA' => 'E02004696',
        '3PB' => 'E02004696',
        '3PD' => 'E02004696',
        '3PE' => 'E02004696',
        '3PF' => 'E02004696',
        '3PH' => 'E02004696',
        '3RE' => 'E02004696',
        '3RG' => 'E02004696',
        '3RH' => 'E02004696',
        '3RJ' => 'E02004694',
        '3RL' => 'E02004694',
        '3RN' => 'E02004681',
        '3RP' => 'E02004696',
        '3RQ' => 'E02004694',
        '3RR' => 'E02004696',
        '3RS' => 'E02004694',
        '3RT' => 'E02004681',
        '3RW' => 'E02004696',
        '3SE' => 'E02004696',
        '3TB' => 'E02004696',
        '3TG' => 'E02004696',
        '3TL' => 'E02004696',
        '3TN' => 'E02004696',
        '3TP' => 'E02004696',
        '3TS' => 'E02004696',
        '3WG' => 'E02004694',
        '3WX' => 'E02004694',
        '3WY' => 'E02004681',
        '3WZ' => 'E02004681',
        '3XQ' => 'E02004694',
        '3XZ' => 'E02004696',
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
