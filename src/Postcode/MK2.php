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
final class MK2
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '2AA' => 'E02003488',
        '2AB' => 'E02003488',
        '2AD' => 'E02003481',
        '2AF' => 'E02003488',
        '2AG' => 'E02003488',
        '2AH' => 'E02003488',
        '2AJ' => 'E02003488',
        '2AL' => 'E02003481',
        '2AP' => 'E02003488',
        '2AQ' => 'E02003481',
        '2AR' => 'E02003488',
        '2AS' => 'E02003488',
        '2AT' => 'E02003481',
        '2AU' => 'E02003481',
        '2AW' => 'E02003481',
        '2AX' => 'E02003481',
        '2AY' => 'E02003480',
        '2AZ' => 'E02003481',
        '2BA' => 'E02003481',
        '2BB' => 'E02003488',
        '2BD' => 'E02003481',
        '2BE' => 'E02003488',
        '2BG' => 'E02003488',
        '2BH' => 'E02003481',
        '2BJ' => 'E02003488',
        '2BL' => 'E02003481',
        '2BN' => 'E02003481',
        '2BP' => 'E02003481',
        '2BQ' => 'E02003481',
        '2BS' => 'E02003481',
        '2BT' => 'E02003481',
        '2BU' => 'E02003481',
        '2BW' => 'E02003481',
        '2BX' => 'E02003481',
        '2BY' => 'E02003481',
        '2BZ' => 'E02003488',
        '2DA' => 'E02003488',
        '2DB' => 'E02003481',
        '2DD' => 'E02003481',
        '2DE' => 'E02003481',
        '2DF' => 'E02003488',
        '2DG' => 'E02003488',
        '2DH' => 'E02003488',
        '2DJ' => 'E02003488',
        '2DL' => 'E02003488',
        '2DN' => 'E02003488',
        '2DP' => 'E02003488',
        '2DQ' => 'E02003488',
        '2DR' => 'E02003488',
        '2DS' => 'E02003488',
        '2DT' => 'E02003488',
        '2DU' => 'E02003488',
        '2DW' => 'E02003488',
        '2DX' => 'E02003488',
        '2DY' => 'E02003488',
        '2DZ' => 'E02003488',
        '2EA' => 'E02003488',
        '2EB' => 'E02003488',
        '2ED' => 'E02003488',
        '2EE' => 'E02003488',
        '2EF' => 'E02003488',
        '2EG' => 'E02003488',
        '2EH' => 'E02003488',
        '2EJ' => 'E02003488',
        '2EL' => 'E02003488',
        '2EN' => 'E02003488',
        '2EP' => 'E02003488',
        '2EQ' => 'E02003488',
        '2ER' => 'E02003488',
        '2ES' => 'E02003488',
        '2ET' => 'E02003488',
        '2EU' => 'E02003488',
        '2EW' => 'E02003481',
        '2EX' => 'E02003488',
        '2EY' => 'E02003488',
        '2EZ' => 'E02003488',
        '2FA' => 'E02003481',
        '2FB' => 'E02003488',
        '2FD' => 'E02003488',
        '2FE' => 'E02003488',
        '2FF' => 'E02003488',
        '2FG' => 'E02003488',
        '2FH' => 'E02003488',
        '2FJ' => 'E02003488',
        '2FL' => 'E02003488',
        '2FN' => 'E02003488',
        '2FP' => 'E02003488',
        '2FQ' => 'E02003488',
        '2FR' => 'E02003481',
        '2FS' => 'E02003488',
        '2FT' => 'E02003488',
        '2FU' => 'E02003488',
        '2FW' => 'E02003488',
        '2GE' => 'E02003488',
        '2GT' => 'E02003490',
        '2HA' => 'E02003488',
        '2HB' => 'E02003488',
        '2HD' => 'E02003488',
        '2HE' => 'E02003488',
        '2HF' => 'E02003488',
        '2HG' => 'E02003488',
        '2HH' => 'E02003488',
        '2HJ' => 'E02003488',
        '2HL' => 'E02003488',
        '2HN' => 'E02003488',
        '2HP' => 'E02003488',
        '2HQ' => 'E02003488',
        '2HR' => 'E02003488',
        '2HS' => 'E02003488',
        '2HT' => 'E02003488',
        '2HU' => 'E02003488',
        '2HW' => 'E02003488',
        '2HX' => 'E02003481',
        '2HY' => 'E02003488',
        '2HZ' => 'E02003488',
        '2JA' => 'E02003488',
        '2JB' => 'E02003488',
        '2JD' => 'E02003488',
        '2JE' => 'E02003488',
        '2JF' => 'E02003488',
        '2JG' => 'E02003488',
        '2JH' => 'E02003488',
        '2JJ' => 'E02003488',
        '2JL' => 'E02003488',
        '2JN' => 'E02003488',
        '2JP' => 'E02003481',
        '2JQ' => 'E02003488',
        '2JR' => 'E02003488',
        '2JS' => 'E02003488',
        '2JT' => 'E02003488',
        '2JU' => 'E02003481',
        '2JW' => 'E02003488',
        '2JX' => 'E02003488',
        '2JY' => 'E02003488',
        '2JZ' => 'E02003488',
        '2LA' => 'E02003488',
        '2LB' => 'E02003490',
        '2LD' => 'E02003490',
        '2LE' => 'E02003490',
        '2LF' => 'E02003490',
        '2LG' => 'E02003490',
        '2LH' => 'E02003488',
        '2LJ' => 'E02003488',
        '2LL' => 'E02003490',
        '2LN' => 'E02003488',
        '2LP' => 'E02003488',
        '2LQ' => 'E02003490',
        '2LR' => 'E02003488',
        '2LS' => 'E02003488',
        '2LT' => 'E02003488',
        '2LU' => 'E02003488',
        '2LW' => 'E02003488',
        '2LX' => 'E02003488',
        '2LY' => 'E02003488',
        '2LZ' => 'E02003488',
        '2NA' => 'E02003488',
        '2NB' => 'E02003488',
        '2ND' => 'E02003488',
        '2NE' => 'E02003488',
        '2NF' => 'E02003488',
        '2NG' => 'E02003488',
        '2NH' => 'E02003488',
        '2NJ' => 'E02003488',
        '2NL' => 'E02003488',
        '2NN' => 'E02003488',
        '2NP' => 'E02003488',
        '2NQ' => 'E02003488',
        '2NR' => 'E02003488',
        '2NS' => 'E02003488',
        '2NT' => 'E02003488',
        '2NU' => 'E02003488',
        '2NW' => 'E02003488',
        '2NX' => 'E02003488',
        '2NY' => 'E02003488',
        '2NZ' => 'E02003488',
        '2PA' => 'E02003481',
        '2PB' => 'E02003488',
        '2PD' => 'E02003488',
        '2PE' => 'E02003488',
        '2PF' => 'E02003488',
        '2PG' => 'E02003488',
        '2PH' => 'E02003488',
        '2PJ' => 'E02003488',
        '2PL' => 'E02003488',
        '2PN' => 'E02003488',
        '2PP' => 'E02003481',
        '2PQ' => 'E02003488',
        '2PR' => 'E02003488',
        '2PS' => 'E02003488',
        '2PT' => 'E02003488',
        '2PU' => 'E02003488',
        '2PW' => 'E02003488',
        '2PX' => 'E02003488',
        '2PY' => 'E02003481',
        '2PZ' => 'E02003481',
        '2QA' => 'E02003481',
        '2QB' => 'E02003481',
        '2QD' => 'E02003481',
        '2QE' => 'E02003481',
        '2QF' => 'E02003481',
        '2QG' => 'E02003481',
        '2QH' => 'E02003488',
        '2QL' => 'E02003481',
        '2QN' => 'E02003481',
        '2QP' => 'E02003488',
        '2QQ' => 'E02003488',
        '2QR' => 'E02003488',
        '2QS' => 'E02003488',
        '2QT' => 'E02003488',
        '2QU' => 'E02003488',
        '2QW' => 'E02003488',
        '2QX' => 'E02003488',
        '2QZ' => 'E02003481',
        '2RA' => 'E02003488',
        '2RB' => 'E02003488',
        '2RD' => 'E02003488',
        '2RE' => 'E02003488',
        '2RF' => 'E02003488',
        '2RG' => 'E02003488',
        '2RH' => 'E02003488',
        '2RJ' => 'E02003488',
        '2RL' => 'E02003488',
        '2RN' => 'E02003488',
        '2RP' => 'E02003488',
        '2RQ' => 'E02003488',
        '2RR' => 'E02003488',
        '2RS' => 'E02003488',
        '2RT' => 'E02003488',
        '2RU' => 'E02003488',
        '2RW' => 'E02003488',
        '2RX' => 'E02003488',
        '2RY' => 'E02003488',
        '2RZ' => 'E02003488',
        '2SA' => 'E02003488',
        '2SB' => 'E02003488',
        '2SD' => 'E02003488',
        '2SE' => 'E02003488',
        '2SF' => 'E02003488',
        '2SG' => 'E02003488',
        '2SH' => 'E02003488',
        '2SJ' => 'E02003489',
        '2SL' => 'E02003489',
        '2SN' => 'E02003488',
        '2SP' => 'E02003488',
        '2SQ' => 'E02003488',
        '2SR' => 'E02003488',
        '2SS' => 'E02003488',
        '2ST' => 'E02003488',
        '2SU' => 'E02003488',
        '2SW' => 'E02003488',
        '2SX' => 'E02003488',
        '2SY' => 'E02003488',
        '2SZ' => 'E02003488',
        '2TA' => 'E02003488',
        '2TB' => 'E02003488',
        '2TD' => 'E02003488',
        '2TE' => 'E02003488',
        '2TF' => 'E02003488',
        '2TG' => 'E02003481',
        '2TH' => 'E02003488',
        '2TJ' => 'E02003488',
        '2TL' => 'E02003490',
        '2TN' => 'E02003488',
        '2TP' => 'E02003488',
        '2TQ' => 'E02003481',
        '2TR' => 'E02003488',
        '2TS' => 'E02003488',
        '2TT' => 'E02003488',
        '2TU' => 'E02003481',
        '2TW' => 'E02003488',
        '2TX' => 'E02003488',
        '2TZ' => 'E02003488',
        '2UA' => 'E02003488',
        '2UB' => 'E02003488',
        '2UD' => 'E02003488',
        '2UE' => 'E02003488',
        '2UF' => 'E02003488',
        '2UG' => 'E02003488',
        '2UH' => 'E02003488',
        '2UJ' => 'E02003481',
        '2UL' => 'E02003488',
        '2UN' => 'E02003488',
        '2UP' => 'E02003488',
        '2UQ' => 'E02003488',
        '2UR' => 'E02003488',
        '2UT' => 'E02003488',
        '2UU' => 'E02003488',
        '2UW' => 'E02003488',
        '2UX' => 'E02003488',
        '2UY' => 'E02003488',
        '2UZ' => 'E02003490',
        '2WA' => 'E02003481',
        '2WB' => 'E02003481',
        '2WD' => 'E02003481',
        '2WE' => 'E02003481',
        '2WF' => 'E02003490',
        '2WG' => 'E02003490',
        '2WH' => 'E02003488',
        '2WJ' => 'E02003481',
        '2WL' => 'E02003488',
        '2WN' => 'E02003490',
        '2WQ' => 'E02003481',
        '2WR' => 'E02003488',
        '2WS' => 'E02003490',
        '2WT' => 'E02003481',
        '2WU' => 'E02003481',
        '2WW' => 'E02003481',
        '2WX' => 'E02003488',
        '2WY' => 'E02003481',
        '2WZ' => 'E02003490',
        '2XB' => 'E02003481',
        '2XD' => 'E02003481',
        '2XE' => 'E02003481',
        '2XF' => 'E02003488',
        '2XJ' => 'E02003488',
        '2XL' => 'E02003481',
        '2XP' => 'E02003481',
        '2XT' => 'E02003481',
        '2XU' => 'E02003481',
        '2XY' => 'E02003488',
        '2YE' => 'E02003488',
        '2YF' => 'E02003488',
        '2YH' => 'E02003488',
        '2YJ' => 'E02003488',
        '2YL' => 'E02003488',
        '2YN' => 'E02003488',
        '2YQ' => 'E02003481',
        '2YU' => 'E02003488',
        '2YX' => 'E02003488',
        '2YY' => 'E02003488',
        '2YZ' => 'E02003488',
        '2ZD' => 'E02003481',
        '2ZE' => 'E02003481',
        '2ZF' => 'E02003488',
        '2ZG' => 'E02003488',
        '2ZH' => 'E02003481',
        '2ZJ' => 'E02003488',
        '2ZL' => 'E02003488',
        '2ZN' => 'E02003488',
        '2ZP' => 'E02003488',
        '2ZQ' => 'E02003488',
        '2ZR' => 'E02003488',
        '2ZS' => 'E02003488',
        '2ZT' => 'E02003488',
        '2ZU' => 'E02003488',
        '2ZW' => 'E02003488',
        '2ZX' => 'E02003488',
        '2ZY' => 'E02003481',
        '2ZZ' => 'E02003481',
        '3AB' => 'E02003490',
        '3AD' => 'E02003490',
        '3AE' => 'E02003488',
        '3AF' => 'E02003488',
        '3AG' => 'E02003488',
        '3AH' => 'E02003490',
        '3AJ' => 'E02003490',
        '3AL' => 'E02003488',
        '3AN' => 'E02003488',
        '3AP' => 'E02003488',
        '3AQ' => 'E02003490',
        '3AR' => 'E02003488',
        '3AS' => 'E02003488',
        '3AT' => 'E02003488',
        '3AU' => 'E02003488',
        '3AW' => 'E02003488',
        '3AX' => 'E02003490',
        '3AY' => 'E02003488',
        '3AZ' => 'E02003490',
        '3BA' => 'E02003490',
        '3BB' => 'E02003488',
        '3BD' => 'E02003488',
        '3BE' => 'E02003488',
        '3BF' => 'E02003488',
        '3BG' => 'E02003488',
        '3BH' => 'E02003488',
        '3BJ' => 'E02003488',
        '3BL' => 'E02003488',
        '3BN' => 'E02003488',
        '3BP' => 'E02003488',
        '3BQ' => 'E02003488',
        '3BS' => 'E02003488',
        '3BT' => 'E02003488',
        '3BU' => 'E02003490',
        '3BW' => 'E02003488',
        '3BX' => 'E02003488',
        '3BY' => 'E02003488',
        '3BZ' => 'E02003488',
        '3DA' => 'E02003488',
        '3DB' => 'E02003488',
        '3DD' => 'E02003490',
        '3DE' => 'E02003488',
        '3DF' => 'E02003488',
        '3DG' => 'E02003490',
        '3DH' => 'E02003490',
        '3DJ' => 'E02003490',
        '3DL' => 'E02003490',
        '3DN' => 'E02003490',
        '3DP' => 'E02003490',
        '3DQ' => 'E02003490',
        '3DR' => 'E02003490',
        '3DS' => 'E02003490',
        '3DT' => 'E02003490',
        '3DU' => 'E02003490',
        '3DW' => 'E02003490',
        '3DX' => 'E02003490',
        '3DY' => 'E02003490',
        '3DZ' => 'E02003490',
        '3EA' => 'E02003490',
        '3EB' => 'E02003490',
        '3ED' => 'E02003490',
        '3EE' => 'E02003490',
        '3EF' => 'E02003488',
        '3EG' => 'E02003488',
        '3EH' => 'E02003490',
        '3EJ' => 'E02003490',
        '3EL' => 'E02003490',
        '3EN' => 'E02003490',
        '3EP' => 'E02003490',
        '3EQ' => 'E02003488',
        '3ER' => 'E02003490',
        '3ES' => 'E02003490',
        '3ET' => 'E02003490',
        '3EU' => 'E02003488',
        '3EW' => 'E02003490',
        '3EX' => 'E02003490',
        '3EY' => 'E02003490',
        '3EZ' => 'E02003490',
        '3FD' => 'E02003490',
        '3FE' => 'E02003490',
        '3FG' => 'E02003490',
        '3FH' => 'E02003490',
        '3FJ' => 'E02003490',
        '3HA' => 'E02003490',
        '3HB' => 'E02003490',
        '3HD' => 'E02003490',
        '3HE' => 'E02003490',
        '3HF' => 'E02003490',
        '3HG' => 'E02003490',
        '3HH' => 'E02003490',
        '3HJ' => 'E02003490',
        '3HL' => 'E02003490',
        '3HN' => 'E02003490',
        '3HP' => 'E02003488',
        '3HQ' => 'E02003490',
        '3HR' => 'E02003488',
        '3HS' => 'E02003488',
        '3HT' => 'E02003488',
        '3HU' => 'E02003488',
        '3HW' => 'E02003490',
        '3HX' => 'E02003488',
        '3HY' => 'E02003488',
        '3HZ' => 'E02003488',
        '3JA' => 'E02003488',
        '3JB' => 'E02003488',
        '3JD' => 'E02003488',
        '3JE' => 'E02003490',
        '3JF' => 'E02003490',
        '3JG' => 'E02003490',
        '3JH' => 'E02003490',
        '3JJ' => 'E02003490',
        '3JL' => 'E02003490',
        '3JN' => 'E02003490',
        '3JP' => 'E02003490',
        '3JQ' => 'E02003490',
        '3JR' => 'E02003490',
        '3JS' => 'E02003490',
        '3JT' => 'E02003490',
        '3JU' => 'E02003490',
        '3JW' => 'E02003490',
        '3JX' => 'E02003490',
        '3JY' => 'E02003490',
        '3JZ' => 'E02003657',
        '3LA' => 'E02003490',
        '3LB' => 'E02003490',
        '3LD' => 'E02003490',
        '3LE' => 'E02003490',
        '3LF' => 'E02003490',
        '3LG' => 'E02003490',
        '3LH' => 'E02003490',
        '3LJ' => 'E02003488',
        '3LL' => 'E02003490',
        '3LN' => 'E02003490',
        '3LP' => 'E02003488',
        '3LQ' => 'E02003490',
        '3LR' => 'E02003488',
        '3LS' => 'E02003488',
        '3LT' => 'E02003488',
        '3LU' => 'E02003488',
        '3LW' => 'E02003488',
        '3LX' => 'E02003488',
        '3LY' => 'E02003488',
        '3LZ' => 'E02003488',
        '3NA' => 'E02003488',
        '3NB' => 'E02003490',
        '3ND' => 'E02003490',
        '3NE' => 'E02003490',
        '3NF' => 'E02003488',
        '3NG' => 'E02003488',
        '3NH' => 'E02003490',
        '3NJ' => 'E02003490',
        '3NL' => 'E02003490',
        '3NN' => 'E02003490',
        '3NP' => 'E02003490',
        '3NR' => 'E02003490',
        '3NS' => 'E02003490',
        '3NT' => 'E02003490',
        '3NU' => 'E02003490',
        '3NW' => 'E02003490',
        '3NX' => 'E02003490',
        '3NY' => 'E02003490',
        '3NZ' => 'E02003490',
        '3PA' => 'E02003490',
        '3PB' => 'E02003490',
        '3PD' => 'E02003490',
        '3PE' => 'E02003490',
        '3PF' => 'E02003490',
        '3PG' => 'E02003490',
        '3PH' => 'E02003490',
        '3PJ' => 'E02003490',
        '3PL' => 'E02003490',
        '3PP' => 'E02003490',
        '3PQ' => 'E02003490',
        '3PR' => 'E02003490',
        '3PS' => 'E02003490',
        '3PT' => 'E02003490',
        '3PU' => 'E02003490',
        '3PX' => 'E02003490',
        '3PY' => 'E02003490',
        '3PZ' => 'E02003490',
        '3QA' => 'E02003490',
        '3QB' => 'E02003490',
        '3QD' => 'E02003490',
        '3QE' => 'E02003490',
        '3QF' => 'E02003490',
        '3QG' => 'E02003490',
        '3QH' => 'E02003490',
        '3QJ' => 'E02003490',
        '3QL' => 'E02003490',
        '3QN' => 'E02003490',
        '3QP' => 'E02003490',
        '3QQ' => 'E02003490',
        '3QR' => 'E02003490',
        '3QS' => 'E02003490',
        '3QT' => 'E02003490',
        '3QU' => 'E02003490',
        '3QW' => 'E02003490',
        '3RF' => 'E02003490',
        '3RP' => 'E02003490',
        '3RR' => 'E02003490',
        '3SJ' => 'E02003490',
        '3WA' => 'E02003490',
        '3WG' => 'E02003490',
        '3WJ' => 'E02003490',
        '3WZ' => 'E02003481',
        '3XA' => 'E02003490',
        '3XB' => 'E02003490',
        '3XN' => 'E02003481',
        '3XQ' => 'E02003490',
        '3XW' => 'E02003481',
        '3XZ' => 'E02003481',
        '3YJ' => 'E02003490',
        '3YL' => 'E02003490',
        '3YN' => 'E02003490',
        '3YP' => 'E02003490',
        '3YR' => 'E02003490',
        '3YU' => 'E02003490',
        '3YW' => 'E02003490',
        '3YX' => 'E02003490',
        '3YY' => 'E02003490',
        '3YZ' => 'E02003488',
        '3ZD' => 'E02003481',
        '3ZE' => 'E02003481',
        '3ZF' => 'E02003490',
        '3ZG' => 'E02003490',
        '3ZH' => 'E02003481',
        '3ZJ' => 'E02003490',
        '3ZL' => 'E02003490',
        '3ZN' => 'E02003490',
        '3ZP' => 'E02003481',
        '3ZQ' => 'E02003481',
        '3ZR' => 'E02003490',
        '3ZS' => 'E02003481',
        '3ZT' => 'E02003490',
        '3ZU' => 'E02003490',
        '3ZW' => 'E02003490',
        '3ZX' => 'E02003490',
        '3ZY' => 'E02003490',
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
