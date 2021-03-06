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
final class B74
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '2AA' => 'E02001833',
        '2AB' => 'E02001833',
        '2AD' => 'E02002141',
        '2AE' => 'E02002141',
        '2AF' => 'E02002141',
        '2AG' => 'E02001833',
        '2AH' => 'E02001833',
        '2AJ' => 'E02001833',
        '2AL' => 'E02001833',
        '2AN' => 'E02001833',
        '2AP' => 'E02002141',
        '2AQ' => 'E02001833',
        '2AR' => 'E02002141',
        '2AS' => 'E02002141',
        '2AT' => 'E02001830',
        '2AU' => 'E02002141',
        '2AW' => 'E02001833',
        '2AX' => 'E02001833',
        '2AY' => 'E02002141',
        '2AZ' => 'E02002141',
        '2BA' => 'E02001833',
        '2BB' => 'E02002141',
        '2BD' => 'E02002141',
        '2BE' => 'E02002141',
        '2BF' => 'E02002137',
        '2BG' => 'E02002141',
        '2BH' => 'E02002141',
        '2BJ' => 'E02002141',
        '2BL' => 'E02002141',
        '2BN' => 'E02002141',
        '2BP' => 'E02002141',
        '2BQ' => 'E02002141',
        '2BS' => 'E02002141',
        '2BT' => 'E02002141',
        '2BU' => 'E02002141',
        '2BW' => 'E02002141',
        '2BX' => 'E02002141',
        '2BY' => 'E02002141',
        '2BZ' => 'E02002141',
        '2DA' => 'E02002141',
        '2DB' => 'E02002141',
        '2DD' => 'E02001833',
        '2DE' => 'E02001833',
        '2DF' => 'E02001833',
        '2DG' => 'E02001833',
        '2DH' => 'E02001833',
        '2DJ' => 'E02002141',
        '2DL' => 'E02002141',
        '2DN' => 'E02002137',
        '2DP' => 'E02002141',
        '2DQ' => 'E02001833',
        '2DR' => 'E02002141',
        '2DS' => 'E02002141',
        '2DT' => 'E02002141',
        '2DU' => 'E02002141',
        '2DW' => 'E02002141',
        '2DX' => 'E02002141',
        '2DY' => 'E02002141',
        '2DZ' => 'E02002141',
        '2EA' => 'E02002141',
        '2EB' => 'E02002141',
        '2ED' => 'E02002141',
        '2EE' => 'E02002141',
        '2EF' => 'E02002141',
        '2EG' => 'E02002141',
        '2EH' => 'E02002141',
        '2EJ' => 'E02002141',
        '2EL' => 'E02002141',
        '2EN' => 'E02002141',
        '2EP' => 'E02002141',
        '2EQ' => 'E02002141',
        '2ER' => 'E02001833',
        '2ES' => 'E02001833',
        '2ET' => 'E02001833',
        '2EU' => 'E02001833',
        '2EW' => 'E02002141',
        '2EX' => 'E02002141',
        '2EY' => 'E02002141',
        '2EZ' => 'E02002141',
        '2FD' => 'E02001830',
        '2FE' => 'E02002141',
        '2FF' => 'E02001830',
        '2FG' => 'E02002141',
        '2FH' => 'E02002141',
        '2FJ' => 'E02001830',
        '2FL' => 'E02001830',
        '2FN' => 'E02001830',
        '2FP' => 'E02002141',
        '2FQ' => 'E02001830',
        '2FR' => 'E02001830',
        '2GA' => 'E02001830',
        '2HA' => 'E02001830',
        '2HB' => 'E02001830',
        '2HD' => 'E02001830',
        '2HE' => 'E02002141',
        '2HF' => 'E02002141',
        '2HG' => 'E02002141',
        '2HH' => 'E02002141',
        '2HJ' => 'E02002141',
        '2HL' => 'E02002141',
        '2HN' => 'E02002141',
        '2HP' => 'E02002141',
        '2HQ' => 'E02002141',
        '2HR' => 'E02002141',
        '2HS' => 'E02002137',
        '2HT' => 'E02002137',
        '2HU' => 'E02001830',
        '2HW' => 'E02001830',
        '2HX' => 'E02001830',
        '2HY' => 'E02002137',
        '2HZ' => 'E02002141',
        '2JA' => 'E02002141',
        '2JB' => 'E02002141',
        '2JD' => 'E02002137',
        '2JE' => 'E02002137',
        '2JF' => 'E02002137',
        '2JG' => 'E02002141',
        '2JH' => 'E02002141',
        '2JJ' => 'E02002141',
        '2JL' => 'E02002141',
        '2JN' => 'E02002141',
        '2JP' => 'E02002141',
        '2JQ' => 'E02002141',
        '2JR' => 'E02002141',
        '2JS' => 'E02002141',
        '2JT' => 'E02002141',
        '2JU' => 'E02002141',
        '2JW' => 'E02002141',
        '2JX' => 'E02002137',
        '2JY' => 'E02002137',
        '2JZ' => 'E02002137',
        '2LA' => 'E02002141',
        '2LB' => 'E02002141',
        '2LD' => 'E02002137',
        '2LE' => 'E02001830',
        '2LF' => 'E02001830',
        '2LG' => 'E02002137',
        '2LH' => 'E02002137',
        '2LJ' => 'E02002137',
        '2LL' => 'E02002141',
        '2LN' => 'E02002141',
        '2LP' => 'E02002141',
        '2LQ' => 'E02002141',
        '2LR' => 'E02001830',
        '2LS' => 'E02001830',
        '2LT' => 'E02001830',
        '2LU' => 'E02002137',
        '2LW' => 'E02002141',
        '2LX' => 'E02001830',
        '2LY' => 'E02002141',
        '2LZ' => 'E02001830',
        '2NA' => 'E02001830',
        '2NB' => 'E02001830',
        '2ND' => 'E02001830',
        '2NE' => 'E02001830',
        '2NF' => 'E02001830',
        '2NG' => 'E02001830',
        '2NH' => 'E02001830',
        '2NJ' => 'E02001830',
        '2NL' => 'E02001830',
        '2NN' => 'E02001830',
        '2NP' => 'E02001830',
        '2NQ' => 'E02001830',
        '2NR' => 'E02001830',
        '2NS' => 'E02001830',
        '2NT' => 'E02001830',
        '2NU' => 'E02001830',
        '2NW' => 'E02001830',
        '2NX' => 'E02001830',
        '2NY' => 'E02001830',
        '2NZ' => 'E02001830',
        '2PA' => 'E02001830',
        '2PB' => 'E02001835',
        '2PD' => 'E02001830',
        '2PE' => 'E02001830',
        '2PF' => 'E02001835',
        '2PG' => 'E02001830',
        '2PH' => 'E02001830',
        '2PJ' => 'E02001830',
        '2PL' => 'E02001830',
        '2PN' => 'E02001830',
        '2PP' => 'E02001830',
        '2PQ' => 'E02001835',
        '2PR' => 'E02001830',
        '2PS' => 'E02001830',
        '2PT' => 'E02001830',
        '2PU' => 'E02001830',
        '2PW' => 'E02001830',
        '2PX' => 'E02001830',
        '2PY' => 'E02001830',
        '2PZ' => 'E02001830',
        '2QA' => 'E02001830',
        '2QB' => 'E02001830',
        '2QD' => 'E02001830',
        '2QE' => 'E02001830',
        '2QF' => 'E02001830',
        '2QG' => 'E02001830',
        '2QH' => 'E02001830',
        '2QJ' => 'E02001830',
        '2QL' => 'E02001830',
        '2QN' => 'E02001830',
        '2QP' => 'E02001830',
        '2QQ' => 'E02001830',
        '2QR' => 'E02001830',
        '2QS' => 'E02001830',
        '2QT' => 'E02001830',
        '2QU' => 'E02001830',
        '2QW' => 'E02001830',
        '2QX' => 'E02001830',
        '2QY' => 'E02001830',
        '2QZ' => 'E02001830',
        '2RA' => 'E02001830',
        '2RB' => 'E02001830',
        '2RD' => 'E02001830',
        '2RE' => 'E02001830',
        '2RF' => 'E02001830',
        '2RG' => 'E02001830',
        '2RH' => 'E02001830',
        '2RJ' => 'E02001830',
        '2RL' => 'E02001830',
        '2RN' => 'E02001830',
        '2RP' => 'E02001830',
        '2RQ' => 'E02001830',
        '2RR' => 'E02001830',
        '2RS' => 'E02001830',
        '2RT' => 'E02001830',
        '2RU' => 'E02001830',
        '2RW' => 'E02001830',
        '2RX' => 'E02001830',
        '2RY' => 'E02001830',
        '2RZ' => 'E02001830',
        '2SA' => 'E02001830',
        '2SB' => 'E02001830',
        '2SD' => 'E02001830',
        '2SE' => 'E02001830',
        '2SF' => 'E02001830',
        '2SG' => 'E02001830',
        '2SH' => 'E02001830',
        '2SJ' => 'E02001830',
        '2SL' => 'E02001830',
        '2SN' => 'E02001830',
        '2SP' => 'E02001830',
        '2SQ' => 'E02001830',
        '2SR' => 'E02001830',
        '2SS' => 'E02001830',
        '2ST' => 'E02001830',
        '2SU' => 'E02001830',
        '2SW' => 'E02001830',
        '2SX' => 'E02001830',
        '2SY' => 'E02001830',
        '2SZ' => 'E02001830',
        '2TA' => 'E02001830',
        '2TB' => 'E02001829',
        '2TD' => 'E02001829',
        '2TE' => 'E02001830',
        '2TF' => 'E02001830',
        '2TG' => 'E02001828',
        '2TH' => 'E02001828',
        '2TJ' => 'E02001828',
        '2TL' => 'E02001828',
        '2TN' => 'E02001828',
        '2TP' => 'E02001828',
        '2TQ' => 'E02001828',
        '2TR' => 'E02001828',
        '2TS' => 'E02001830',
        '2TT' => 'E02001830',
        '2TU' => 'E02001830',
        '2TW' => 'E02001828',
        '2TX' => 'E02001829',
        '2TY' => 'E02001830',
        '2TZ' => 'E02001830',
        '2UA' => 'E02001829',
        '2UB' => 'E02001829',
        '2UD' => 'E02001828',
        '2UE' => 'E02001828',
        '2UF' => 'E02001828',
        '2UG' => 'E02001828',
        '2UH' => 'E02001828',
        '2UJ' => 'E02001828',
        '2UL' => 'E02001830',
        '2UN' => 'E02001828',
        '2UP' => 'E02001828',
        '2UQ' => 'E02001828',
        '2UR' => 'E02001830',
        '2US' => 'E02001830',
        '2UT' => 'E02001830',
        '2UU' => 'E02001828',
        '2UW' => 'E02001828',
        '2UX' => 'E02001830',
        '2UY' => 'E02001828',
        '2UZ' => 'E02001828',
        '2WA' => 'E02001830',
        '2WB' => 'E02001830',
        '2WD' => 'E02001830',
        '2WH' => 'E02001830',
        '2WQ' => 'E02001830',
        '2WU' => 'E02001830',
        '2WW' => 'E02001830',
        '2XA' => 'E02001828',
        '2XB' => 'E02001828',
        '2XD' => 'E02001828',
        '2XE' => 'E02001830',
        '2XF' => 'E02001830',
        '2XG' => 'E02001830',
        '2XH' => 'E02001828',
        '2XJ' => 'E02001830',
        '2XL' => 'E02001828',
        '2XN' => 'E02001830',
        '2XP' => 'E02001830',
        '2XQ' => 'E02001830',
        '2XR' => 'E02001830',
        '2XS' => 'E02001828',
        '2XT' => 'E02001830',
        '2XU' => 'E02001830',
        '2XW' => 'E02001829',
        '2XX' => 'E02001830',
        '2XY' => 'E02001828',
        '2XZ' => 'E02001828',
        '2YA' => 'E02001830',
        '2YB' => 'E02001830',
        '2YD' => 'E02001830',
        '2YE' => 'E02001830',
        '2YF' => 'E02001830',
        '2YH' => 'E02001830',
        '2YJ' => 'E02001830',
        '2YL' => 'E02001830',
        '2YN' => 'E02001830',
        '2YP' => 'E02001830',
        '2YR' => 'E02001830',
        '2YS' => 'E02001830',
        '2YT' => 'E02001830',
        '2YU' => 'E02001830',
        '2ZA' => 'E02001830',
        '2ZB' => 'E02001830',
        '2ZD' => 'E02001830',
        '3AA' => 'E02006156',
        '3AB' => 'E02006156',
        '3AD' => 'E02006156',
        '3AE' => 'E02006156',
        '3AF' => 'E02006156',
        '3AG' => 'E02006156',
        '3AH' => 'E02006156',
        '3AJ' => 'E02006156',
        '3AL' => 'E02006156',
        '3AN' => 'E02006156',
        '3AP' => 'E02006156',
        '3AQ' => 'E02006156',
        '3AR' => 'E02006156',
        '3AS' => 'E02006156',
        '3AT' => 'E02006156',
        '3AU' => 'E02006156',
        '3AW' => 'E02006156',
        '3AX' => 'E02006156',
        '3AY' => 'E02006156',
        '3AZ' => 'E02006156',
        '3BA' => 'E02006156',
        '3BB' => 'E02006156',
        '3BD' => 'E02006156',
        '3BE' => 'E02006156',
        '3BF' => 'E02006156',
        '3BG' => 'E02006156',
        '3BH' => 'E02006156',
        '3BJ' => 'E02006156',
        '3BL' => 'E02006156',
        '3BN' => 'E02006156',
        '3BP' => 'E02006156',
        '3BQ' => 'E02006156',
        '3BS' => 'E02006156',
        '3BT' => 'E02006156',
        '3BU' => 'E02006156',
        '3BW' => 'E02006156',
        '3BX' => 'E02006156',
        '3BY' => 'E02006156',
        '3BZ' => 'E02006156',
        '3DA' => 'E02006156',
        '3DB' => 'E02006156',
        '3DD' => 'E02006156',
        '3DE' => 'E02006156',
        '3DF' => 'E02006156',
        '3DG' => 'E02006156',
        '3DH' => 'E02002137',
        '3DJ' => 'E02002137',
        '3DL' => 'E02002137',
        '3DN' => 'E02002137',
        '3DP' => 'E02002137',
        '3DQ' => 'E02002137',
        '3DR' => 'E02002137',
        '3DS' => 'E02006156',
        '3DT' => 'E02002137',
        '3DU' => 'E02002137',
        '3DW' => 'E02002137',
        '3DX' => 'E02002137',
        '3DY' => 'E02002137',
        '3DZ' => 'E02002137',
        '3EA' => 'E02002137',
        '3EB' => 'E02002137',
        '3ED' => 'E02002137',
        '3EE' => 'E02002137',
        '3EF' => 'E02002137',
        '3EG' => 'E02002137',
        '3EH' => 'E02006156',
        '3EJ' => 'E02006156',
        '3EL' => 'E02006156',
        '3EN' => 'E02006156',
        '3EP' => 'E02002137',
        '3EQ' => 'E02002137',
        '3ER' => 'E02002137',
        '3ES' => 'E02002137',
        '3ET' => 'E02002137',
        '3EU' => 'E02002137',
        '3EW' => 'E02002137',
        '3EX' => 'E02002137',
        '3EY' => 'E02002137',
        '3EZ' => 'E02006156',
        '3FD' => 'E02001830',
        '3FE' => 'E02006156',
        '3FG' => 'E02006156',
        '3FH' => 'E02006156',
        '3FJ' => 'E02006156',
        '3FL' => 'E02001830',
        '3GA' => 'E02006156',
        '3GB' => 'E02002137',
        '3HA' => 'E02002137',
        '3HB' => 'E02002137',
        '3HD' => 'E02002137',
        '3HE' => 'E02002137',
        '3HF' => 'E02002137',
        '3HG' => 'E02002141',
        '3HH' => 'E02002137',
        '3HJ' => 'E02001830',
        '3HL' => 'E02002137',
        '3HN' => 'E02002137',
        '3HP' => 'E02002137',
        '3HQ' => 'E02002141',
        '3HR' => 'E02002137',
        '3HS' => 'E02002137',
        '3HT' => 'E02002137',
        '3HU' => 'E02002137',
        '3HW' => 'E02002137',
        '3HX' => 'E02002137',
        '3HY' => 'E02002137',
        '3HZ' => 'E02002137',
        '3JA' => 'E02002137',
        '3JB' => 'E02002137',
        '3JD' => 'E02002137',
        '3JE' => 'E02002137',
        '3JF' => 'E02002137',
        '3JG' => 'E02002137',
        '3JH' => 'E02002137',
        '3JJ' => 'E02002137',
        '3JL' => 'E02002137',
        '3JN' => 'E02002137',
        '3JP' => 'E02002137',
        '3JQ' => 'E02002137',
        '3JR' => 'E02002137',
        '3JS' => 'E02002137',
        '3JT' => 'E02002137',
        '3JU' => 'E02002137',
        '3JW' => 'E02002137',
        '3JX' => 'E02002137',
        '3JY' => 'E02002137',
        '3JZ' => 'E02002137',
        '3LA' => 'E02002137',
        '3LB' => 'E02002137',
        '3LD' => 'E02002137',
        '3LE' => 'E02002137',
        '3LF' => 'E02002137',
        '3LG' => 'E02002137',
        '3LH' => 'E02002131',
        '3LJ' => 'E02002131',
        '3LL' => 'E02002137',
        '3LN' => 'E02002137',
        '3LP' => 'E02002131',
        '3LQ' => 'E02002137',
        '3LR' => 'E02002131',
        '3LS' => 'E02002131',
        '3LT' => 'E02002131',
        '3LU' => 'E02001830',
        '3LW' => 'E02002131',
        '3LX' => 'E02002137',
        '3LY' => 'E02002137',
        '3LZ' => 'E02002137',
        '3NA' => 'E02002137',
        '3NB' => 'E02002137',
        '3ND' => 'E02002137',
        '3NE' => 'E02002137',
        '3NF' => 'E02002137',
        '3NG' => 'E02002137',
        '3NH' => 'E02002137',
        '3NJ' => 'E02002137',
        '3NL' => 'E02002137',
        '3NN' => 'E02002137',
        '3NP' => 'E02002137',
        '3NQ' => 'E02002137',
        '3NR' => 'E02002131',
        '3NS' => 'E02002131',
        '3NT' => 'E02002131',
        '3NU' => 'E02002131',
        '3NW' => 'E02002137',
        '3NX' => 'E02002131',
        '3NY' => 'E02002137',
        '3NZ' => 'E02002137',
        '3PA' => 'E02002137',
        '3PB' => 'E02002137',
        '3PD' => 'E02002137',
        '3PE' => 'E02002137',
        '3PF' => 'E02002137',
        '3PG' => 'E02002137',
        '3PH' => 'E02002131',
        '3PJ' => 'E02002141',
        '3PL' => 'E02002137',
        '3PN' => 'E02002137',
        '3PP' => 'E02001830',
        '3PQ' => 'E02002137',
        '3PR' => 'E02002141',
        '3PS' => 'E02002137',
        '3PT' => 'E02002137',
        '3PU' => 'E02002137',
        '3PW' => 'E02002137',
        '3PX' => 'E02002137',
        '3PY' => 'E02002137',
        '3PZ' => 'E02002137',
        '3QA' => 'E02002137',
        '3QB' => 'E02002137',
        '3QD' => 'E02002137',
        '3QE' => 'E02002137',
        '3QF' => 'E02002141',
        '3QG' => 'E02002137',
        '3QH' => 'E02002137',
        '3QJ' => 'E02002137',
        '3QL' => 'E02002137',
        '3QN' => 'E02002137',
        '3QP' => 'E02002137',
        '3QQ' => 'E02002137',
        '3QR' => 'E02002137',
        '3QS' => 'E02002137',
        '3QT' => 'E02002141',
        '3QU' => 'E02002141',
        '3QW' => 'E02002137',
        '3QX' => 'E02002137',
        '3QY' => 'E02002137',
        '3QZ' => 'E02002141',
        '3RA' => 'E02002141',
        '3RB' => 'E02002141',
        '3RD' => 'E02002141',
        '3RE' => 'E02002141',
        '3RF' => 'E02002141',
        '3RG' => 'E02002141',
        '3RH' => 'E02002141',
        '3RJ' => 'E02002141',
        '3RL' => 'E02002141',
        '3RN' => 'E02002141',
        '3RP' => 'E02002141',
        '3RQ' => 'E02002141',
        '3RR' => 'E02002141',
        '3RS' => 'E02002141',
        '3RT' => 'E02002141',
        '3RU' => 'E02002141',
        '3RW' => 'E02002141',
        '3RX' => 'E02002141',
        '3RY' => 'E02002141',
        '3RZ' => 'E02002141',
        '3SA' => 'E02002141',
        '3SB' => 'E02002141',
        '3SD' => 'E02002141',
        '3SE' => 'E02002141',
        '3SF' => 'E02002141',
        '3SG' => 'E02002141',
        '3SH' => 'E02002141',
        '3SJ' => 'E02002141',
        '3SL' => 'E02002141',
        '3SN' => 'E02002141',
        '3SP' => 'E02002141',
        '3SQ' => 'E02002141',
        '3SR' => 'E02002141',
        '3SS' => 'E02002141',
        '3ST' => 'E02002137',
        '3SU' => 'E02002141',
        '3SW' => 'E02002141',
        '3SX' => 'E02002141',
        '3SY' => 'E02002141',
        '3SZ' => 'E02002141',
        '3TA' => 'E02002141',
        '3TB' => 'E02002141',
        '3TD' => 'E02002141',
        '3TE' => 'E02002141',
        '3TF' => 'E02002141',
        '3TG' => 'E02002137',
        '3TH' => 'E02002141',
        '3TJ' => 'E02002137',
        '3TL' => 'E02002137',
        '3TN' => 'E02002137',
        '3TP' => 'E02002141',
        '3TQ' => 'E02001830',
        '3TR' => 'E02002141',
        '3TS' => 'E02002131',
        '3TT' => 'E02002131',
        '3TU' => 'E02002131',
        '3TW' => 'E02001830',
        '3TX' => 'E02001830',
        '3TZ' => 'E02002131',
        '3UA' => 'E02006156',
        '3UB' => 'E02006156',
        '3UD' => 'E02006156',
        '3UE' => 'E02006156',
        '3UF' => 'E02006156',
        '3UG' => 'E02006156',
        '3UL' => 'E02001830',
        '3UN' => 'E02006156',
        '3UP' => 'E02006156',
        '3UQ' => 'E02002137',
        '3US' => 'E02001830',
        '3UT' => 'E02006156',
        '3UU' => 'E02006156',
        '3UZ' => 'E02006156',
        '3WH' => 'E02001830',
        '3WR' => 'E02006156',
        '3WT' => 'E02006156',
        '3XA' => 'E02001830',
        '3XB' => 'E02001830',
        '3XD' => 'E02001830',
        '3XE' => 'E02006156',
        '3XF' => 'E02006156',
        '3XG' => 'E02001830',
        '3XH' => 'E02001830',
        '3XJ' => 'E02001830',
        '3XL' => 'E02001830',
        '3XN' => 'E02001830',
        '3XP' => 'E02001830',
        '3XQ' => 'E02001830',
        '3XR' => 'E02001830',
        '3XS' => 'E02001830',
        '3XT' => 'E02001830',
        '3XU' => 'E02001830',
        '3XW' => 'E02001830',
        '3XX' => 'E02001830',
        '3XY' => 'E02001830',
        '3XZ' => 'E02001830',
        '3YA' => 'E02001830',
        '3YD' => 'E02001830',
        '3YE' => 'E02001830',
        '3YH' => 'E02001830',
        '3YN' => 'E02001830',
        '3ZA' => 'E02001830',
        '3ZB' => 'E02001830',
        '3ZH' => 'E02001830',
        '3ZR' => 'E02001830',
        '3ZT' => 'E02001830',
        '3ZY' => 'E02001830',
        '4AA' => 'E02001828',
        '4AB' => 'E02001828',
        '4AD' => 'E02001830',
        '4AE' => 'E02001828',
        '4AF' => 'E02001828',
        '4AG' => 'E02001828',
        '4AH' => 'E02001828',
        '4AJ' => 'E02001828',
        '4AL' => 'E02001828',
        '4AN' => 'E02001828',
        '4AP' => 'E02001828',
        '4AQ' => 'E02001828',
        '4AR' => 'E02001828',
        '4AS' => 'E02001828',
        '4AT' => 'E02001828',
        '4AU' => 'E02001828',
        '4AW' => 'E02001828',
        '4AX' => 'E02001828',
        '4AY' => 'E02001828',
        '4AZ' => 'E02001828',
        '4BA' => 'E02001828',
        '4BB' => 'E02001828',
        '4BD' => 'E02001827',
        '4BE' => 'E02001828',
        '4BF' => 'E02001830',
        '4BG' => 'E02001828',
        '4BH' => 'E02001828',
        '4BJ' => 'E02001828',
        '4BL' => 'E02001828',
        '4BN' => 'E02001828',
        '4BP' => 'E02001828',
        '4BQ' => 'E02001828',
        '4BT' => 'E02001828',
        '4BU' => 'E02001828',
        '4BW' => 'E02001828',
        '4BX' => 'E02001828',
        '4BY' => 'E02001828',
        '4BZ' => 'E02001828',
        '4DA' => 'E02001828',
        '4DB' => 'E02001828',
        '4DD' => 'E02001828',
        '4DE' => 'E02001827',
        '4DF' => 'E02001827',
        '4DG' => 'E02001828',
        '4DH' => 'E02001828',
        '4DJ' => 'E02001828',
        '4DL' => 'E02001827',
        '4DN' => 'E02001828',
        '4DP' => 'E02001827',
        '4DQ' => 'E02001828',
        '4DR' => 'E02001830',
        '4DS' => 'E02001827',
        '4DT' => 'E02001827',
        '4DU' => 'E02001827',
        '4DW' => 'E02001827',
        '4DX' => 'E02001827',
        '4DY' => 'E02001827',
        '4DZ' => 'E02001827',
        '4EA' => 'E02001827',
        '4EB' => 'E02001827',
        '4ED' => 'E02001827',
        '4EE' => 'E02001827',
        '4EF' => 'E02001827',
        '4EG' => 'E02001827',
        '4EH' => 'E02001827',
        '4EJ' => 'E02001827',
        '4EL' => 'E02001828',
        '4EN' => 'E02001827',
        '4EP' => 'E02001828',
        '4EQ' => 'E02001830',
        '4ER' => 'E02001827',
        '4ES' => 'E02001827',
        '4ET' => 'E02001827',
        '4EU' => 'E02006156',
        '4EW' => 'E02001827',
        '4EX' => 'E02006156',
        '4EY' => 'E02001827',
        '4EZ' => 'E02001827',
        '4FE' => 'E02001827',
        '4FF' => 'E02001827',
        '4FH' => 'E02001830',
        '4GA' => 'E02001827',
        '4HA' => 'E02001827',
        '4HB' => 'E02001827',
        '4HD' => 'E02001830',
        '4HE' => 'E02001827',
        '4HF' => 'E02006156',
        '4HG' => 'E02006156',
        '4HH' => 'E02001830',
        '4HJ' => 'E02006156',
        '4HL' => 'E02006156',
        '4HN' => 'E02001830',
        '4HP' => 'E02001827',
        '4HQ' => 'E02001830',
        '4HR' => 'E02001827',
        '4HS' => 'E02006156',
        '4HT' => 'E02006156',
        '4HU' => 'E02001830',
        '4HW' => 'E02006156',
        '4HX' => 'E02001830',
        '4HY' => 'E02006156',
        '4HZ' => 'E02006156',
        '4JA' => 'E02001827',
        '4JB' => 'E02001827',
        '4JD' => 'E02001827',
        '4JE' => 'E02001827',
        '4JF' => 'E02001827',
        '4JG' => 'E02001827',
        '4JH' => 'E02001827',
        '4JJ' => 'E02001827',
        '4JL' => 'E02001827',
        '4JN' => 'E02001827',
        '4JP' => 'E02001827',
        '4JQ' => 'E02001827',
        '4JR' => 'E02001827',
        '4JS' => 'E02001827',
        '4JT' => 'E02001827',
        '4JU' => 'E02001830',
        '4JW' => 'E02001827',
        '4JX' => 'E02001827',
        '4JY' => 'E02001830',
        '4LA' => 'E02001828',
        '4LB' => 'E02001827',
        '4LD' => 'E02001827',
        '4LE' => 'E02001827',
        '4LF' => 'E02001827',
        '4LG' => 'E02001827',
        '4LH' => 'E02001827',
        '4LJ' => 'E02001827',
        '4LL' => 'E02001827',
        '4LN' => 'E02001827',
        '4LP' => 'E02001827',
        '4LQ' => 'E02001827',
        '4LR' => 'E02001827',
        '4LS' => 'E02001827',
        '4LT' => 'E02001827',
        '4LU' => 'E02001827',
        '4LW' => 'E02001827',
        '4LX' => 'E02001827',
        '4LY' => 'E02001827',
        '4LZ' => 'E02001827',
        '4NA' => 'E02001827',
        '4NB' => 'E02001827',
        '4ND' => 'E02001828',
        '4NE' => 'E02001830',
        '4NF' => 'E02001827',
        '4NG' => 'E02001830',
        '4NH' => 'E02001828',
        '4NJ' => 'E02001827',
        '4NL' => 'E02001827',
        '4NN' => 'E02001828',
        '4NP' => 'E02001827',
        '4NQ' => 'E02001827',
        '4NR' => 'E02001827',
        '4NS' => 'E02001827',
        '4NT' => 'E02001830',
        '4NU' => 'E02001830',
        '4NW' => 'E02001828',
        '4NX' => 'E02001827',
        '4NY' => 'E02001827',
        '4NZ' => 'E02001827',
        '4PA' => 'E02001827',
        '4PB' => 'E02001827',
        '4PD' => 'E02001827',
        '4PE' => 'E02001827',
        '4PF' => 'E02001827',
        '4PG' => 'E02001830',
        '4PH' => 'E02001830',
        '4PJ' => 'E02001830',
        '4PL' => 'E02001830',
        '4PN' => 'E02001830',
        '4PP' => 'E02001830',
        '4PQ' => 'E02001830',
        '4PR' => 'E02001830',
        '4PS' => 'E02001830',
        '4PT' => 'E02001830',
        '4PU' => 'E02001830',
        '4PW' => 'E02001830',
        '4PX' => 'E02001830',
        '4PY' => 'E02001830',
        '4PZ' => 'E02001830',
        '4QA' => 'E02001830',
        '4QB' => 'E02001830',
        '4QD' => 'E02001830',
        '4QE' => 'E02001830',
        '4QF' => 'E02001830',
        '4QG' => 'E02001830',
        '4QH' => 'E02001828',
        '4QJ' => 'E02001828',
        '4QL' => 'E02001828',
        '4QN' => 'E02001828',
        '4QP' => 'E02001828',
        '4QQ' => 'E02001830',
        '4QR' => 'E02001828',
        '4QS' => 'E02001828',
        '4QT' => 'E02001828',
        '4QU' => 'E02001828',
        '4QW' => 'E02001828',
        '4QX' => 'E02001830',
        '4QY' => 'E02001828',
        '4QZ' => 'E02001828',
        '4RA' => 'E02001827',
        '4RB' => 'E02001827',
        '4RD' => 'E02001827',
        '4RE' => 'E02001827',
        '4RF' => 'E02001827',
        '4RG' => 'E02001827',
        '4RH' => 'E02001827',
        '4RJ' => 'E02001827',
        '4RL' => 'E02001827',
        '4RN' => 'E02001827',
        '4RQ' => 'E02001827',
        '4RR' => 'E02001828',
        '4RS' => 'E02001828',
        '4RT' => 'E02001828',
        '4RU' => 'E02001828',
        '4RY' => 'E02001828',
        '4RZ' => 'E02001828',
        '4SA' => 'E02001828',
        '4SB' => 'E02001828',
        '4SD' => 'E02001828',
        '4SE' => 'E02001828',
        '4SG' => 'E02001827',
        '4SH' => 'E02001827',
        '4SJ' => 'E02001828',
        '4SL' => 'E02001828',
        '4SQ' => 'E02001828',
        '4ST' => 'E02001827',
        '4SU' => 'E02001827',
        '4SX' => 'E02001830',
        '4SY' => 'E02001827',
        '4SZ' => 'E02001830',
        '4TA' => 'E02001830',
        '4TB' => 'E02001830',
        '4TD' => 'E02001830',
        '4TE' => 'E02001830',
        '4TF' => 'E02001830',
        '4TG' => 'E02001830',
        '4TH' => 'E02001830',
        '4TJ' => 'E02001830',
        '4TL' => 'E02001830',
        '4TN' => 'E02001828',
        '4TP' => 'E02001828',
        '4TQ' => 'E02001830',
        '4TR' => 'E02001828',
        '4TS' => 'E02001828',
        '4TT' => 'E02001828',
        '4TU' => 'E02001828',
        '4TW' => 'E02001830',
        '4TX' => 'E02001827',
        '4TY' => 'E02001827',
        '4UB' => 'E02001827',
        '4UD' => 'E02001827',
        '4UE' => 'E02001827',
        '4UF' => 'E02001827',
        '4UG' => 'E02001827',
        '4UH' => 'E02001827',
        '4UP' => 'E02001827',
        '4UQ' => 'E02001827',
        '4UT' => 'E02006156',
        '4UU' => 'E02001827',
        '4UZ' => 'E02001830',
        '4WA' => 'E02001830',
        '4WB' => 'E02001830',
        '4WD' => 'E02001830',
        '4WE' => 'E02001830',
        '4WH' => 'E02001830',
        '4WJ' => 'E02001830',
        '4WN' => 'E02001830',
        '4WQ' => 'E02001827',
        '4WR' => 'E02001830',
        '4WS' => 'E02001830',
        '4WT' => 'E02001830',
        '4WU' => 'E02001830',
        '4WX' => 'E02001830',
        '4WZ' => 'E02001830',
        '4XA' => 'E02001827',
        '4XB' => 'E02001827',
        '4XD' => 'E02001827',
        '4XE' => 'E02001827',
        '4XF' => 'E02001827',
        '4XG' => 'E02001827',
        '4XH' => 'E02001827',
        '4XJ' => 'E02001830',
        '4XL' => 'E02001830',
        '4XN' => 'E02001827',
        '4XP' => 'E02001827',
        '4XQ' => 'E02001830',
        '4XR' => 'E02001827',
        '4XS' => 'E02001827',
        '4XT' => 'E02001827',
        '4XU' => 'E02001827',
        '4XW' => 'E02001827',
        '4XX' => 'E02001827',
        '4XY' => 'E02001827',
        '4XZ' => 'E02001827',
        '4YA' => 'E02001827',
        '4YB' => 'E02001827',
        '4YD' => 'E02001827',
        '4YE' => 'E02001827',
        '4YF' => 'E02001827',
        '4YG' => 'E02001827',
        '4YH' => 'E02001830',
        '4YJ' => 'E02001830',
        '4YL' => 'E02001830',
        '4YN' => 'E02001830',
        '4YP' => 'E02001830',
        '4YQ' => 'E02001827',
        '4YR' => 'E02001830',
        '4YS' => 'E02001830',
        '4YT' => 'E02001830',
        '4YU' => 'E02001830',
        '4YW' => 'E02001830',
        '4ZA' => 'E02001830',
        '4ZG' => 'E02001830',
        '4ZH' => 'E02001830',
        '4ZN' => 'E02001830',
        '4ZQ' => 'E02001827',
        '4ZR' => 'E02001830',
        '4ZS' => 'E02001830',
        '4ZT' => 'E02001830',
        '4ZW' => 'E02001830',
        '4ZY' => 'E02001830',
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
