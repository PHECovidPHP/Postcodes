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
final class HX6
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02002260',
        '1AB' => 'E02002260',
        '1AD' => 'E02002260',
        '1AE' => 'E02002263',
        '1AF' => 'E02002260',
        '1AG' => 'E02002260',
        '1AH' => 'E02002263',
        '1AL' => 'E02002260',
        '1AN' => 'E02002260',
        '1AW' => 'E02002260',
        '1AX' => 'E02002263',
        '1AY' => 'E02002263',
        '1AZ' => 'E02002263',
        '1BA' => 'E02002263',
        '1BB' => 'E02002263',
        '1BD' => 'E02002263',
        '1BE' => 'E02002263',
        '1BG' => 'E02002263',
        '1BH' => 'E02002263',
        '1BJ' => 'E02002263',
        '1BL' => 'E02002263',
        '1BN' => 'E02002263',
        '1BP' => 'E02002263',
        '1BQ' => 'E02002263',
        '1BS' => 'E02002263',
        '1BT' => 'E02002263',
        '1BU' => 'E02002263',
        '1BW' => 'E02002263',
        '1BX' => 'E02002263',
        '1BY' => 'E02002263',
        '1BZ' => 'E02002263',
        '1DA' => 'E02002263',
        '1DB' => 'E02002263',
        '1DD' => 'E02002263',
        '1DE' => 'E02002263',
        '1DF' => 'E02002263',
        '1DG' => 'E02002263',
        '1DH' => 'E02002263',
        '1DJ' => 'E02002263',
        '1DL' => 'E02002263',
        '1DN' => 'E02002263',
        '1DP' => 'E02002260',
        '1DQ' => 'E02002263',
        '1DR' => 'E02002260',
        '1DS' => 'E02002263',
        '1DT' => 'E02002263',
        '1DU' => 'E02002260',
        '1DW' => 'E02002263',
        '1DX' => 'E02002260',
        '1DY' => 'E02002260',
        '1DZ' => 'E02002260',
        '1EA' => 'E02002260',
        '1EB' => 'E02002260',
        '1ED' => 'E02002260',
        '1EE' => 'E02002260',
        '1EF' => 'E02002260',
        '1EG' => 'E02002260',
        '1EH' => 'E02002263',
        '1EJ' => 'E02002263',
        '1EL' => 'E02002263',
        '1EN' => 'E02002263',
        '1EQ' => 'E02002260',
        '1HA' => 'E02002263',
        '1HB' => 'E02002263',
        '1HD' => 'E02002263',
        '1HE' => 'E02002263',
        '1HF' => 'E02002263',
        '1HG' => 'E02002263',
        '1HH' => 'E02002263',
        '1HJ' => 'E02002263',
        '1HL' => 'E02002263',
        '1HN' => 'E02002263',
        '1HP' => 'E02002263',
        '1HQ' => 'E02002263',
        '1HR' => 'E02002263',
        '1HS' => 'E02002263',
        '1HT' => 'E02002263',
        '1HU' => 'E02002263',
        '1HW' => 'E02002263',
        '1HX' => 'E02002263',
        '1HY' => 'E02002263',
        '1HZ' => 'E02002263',
        '1JA' => 'E02002263',
        '1JB' => 'E02002263',
        '1JD' => 'E02002263',
        '1JE' => 'E02002263',
        '1JF' => 'E02002263',
        '1JG' => 'E02002263',
        '1JH' => 'E02002263',
        '1JJ' => 'E02002263',
        '1JL' => 'E02002263',
        '1JN' => 'E02002263',
        '1JP' => 'E02002263',
        '1JQ' => 'E02002263',
        '1JR' => 'E02002263',
        '1JS' => 'E02002263',
        '1JT' => 'E02002263',
        '1JU' => 'E02002263',
        '1JW' => 'E02002263',
        '1JX' => 'E02002263',
        '1JY' => 'E02002263',
        '1JZ' => 'E02002263',
        '1LA' => 'E02002263',
        '1LB' => 'E02002263',
        '1LD' => 'E02002263',
        '1LE' => 'E02002263',
        '1LF' => 'E02002263',
        '1LG' => 'E02002263',
        '1LH' => 'E02002263',
        '1LJ' => 'E02002263',
        '1LL' => 'E02002260',
        '1LN' => 'E02002263',
        '1LP' => 'E02002263',
        '1LQ' => 'E02002263',
        '1LR' => 'E02002263',
        '1NA' => 'E02002263',
        '1NB' => 'E02002263',
        '1ND' => 'E02002263',
        '1NE' => 'E02002263',
        '1NF' => 'E02002263',
        '1NG' => 'E02002263',
        '1NH' => 'E02002263',
        '1NJ' => 'E02002263',
        '1NL' => 'E02002263',
        '1NN' => 'E02002263',
        '1NP' => 'E02002263',
        '1NQ' => 'E02002263',
        '1NR' => 'E02002263',
        '1NS' => 'E02002263',
        '1NT' => 'E02002263',
        '1NU' => 'E02002263',
        '1NW' => 'E02002263',
        '1NX' => 'E02002263',
        '1PA' => 'E02002263',
        '1PB' => 'E02002263',
        '1PD' => 'E02002263',
        '1PE' => 'E02002263',
        '1PF' => 'E02002263',
        '1PG' => 'E02002263',
        '1PH' => 'E02002263',
        '1PJ' => 'E02002263',
        '1PL' => 'E02002263',
        '1PN' => 'E02002263',
        '1PP' => 'E02002263',
        '1PQ' => 'E02002263',
        '1QA' => 'E02002263',
        '1WA' => 'E02002251',
        '1WW' => 'E02002263',
        '1WX' => 'E02002263',
        '1WY' => 'E02002251',
        '1WZ' => 'E02002263',
        '1YP' => 'E02002263',
        '1YR' => 'E02002263',
        '1YS' => 'E02002263',
        '1YT' => 'E02002251',
        '1YU' => 'E02002263',
        '1YX' => 'E02002251',
        '1YY' => 'E02002251',
        '1YZ' => 'E02002263',
        '2AA' => 'E02002260',
        '2AB' => 'E02002260',
        '2AD' => 'E02002260',
        '2AE' => 'E02002260',
        '2AF' => 'E02002260',
        '2AG' => 'E02002260',
        '2AH' => 'E02002260',
        '2AJ' => 'E02002260',
        '2AL' => 'E02002260',
        '2AN' => 'E02002260',
        '2AP' => 'E02002260',
        '2AQ' => 'E02002260',
        '2AR' => 'E02002260',
        '2AS' => 'E02002260',
        '2AT' => 'E02002260',
        '2AU' => 'E02002260',
        '2AW' => 'E02002260',
        '2AX' => 'E02002260',
        '2AY' => 'E02002260',
        '2AZ' => 'E02002260',
        '2BA' => 'E02002260',
        '2BB' => 'E02002260',
        '2BD' => 'E02002260',
        '2BE' => 'E02002260',
        '2BF' => 'E02002260',
        '2BG' => 'E02002260',
        '2BH' => 'E02002260',
        '2BJ' => 'E02002260',
        '2BL' => 'E02002260',
        '2BN' => 'E02002260',
        '2BP' => 'E02002260',
        '2BQ' => 'E02002260',
        '2BS' => 'E02002260',
        '2BT' => 'E02002260',
        '2BU' => 'E02002260',
        '2BW' => 'E02002260',
        '2BX' => 'E02002260',
        '2BY' => 'E02002260',
        '2BZ' => 'E02002260',
        '2DA' => 'E02002260',
        '2DB' => 'E02002260',
        '2DD' => 'E02002260',
        '2DE' => 'E02002260',
        '2DF' => 'E02002260',
        '2DG' => 'E02002260',
        '2DH' => 'E02002260',
        '2DJ' => 'E02002260',
        '2DL' => 'E02002260',
        '2DN' => 'E02002251',
        '2DP' => 'E02002260',
        '2DQ' => 'E02002260',
        '2DR' => 'E02002260',
        '2DS' => 'E02002260',
        '2DU' => 'E02002260',
        '2DW' => 'E02002260',
        '2DX' => 'E02002260',
        '2DY' => 'E02002260',
        '2DZ' => 'E02002260',
        '2EA' => 'E02002260',
        '2EB' => 'E02002260',
        '2ED' => 'E02002260',
        '2EE' => 'E02002260',
        '2EF' => 'E02002260',
        '2EG' => 'E02002260',
        '2EH' => 'E02002260',
        '2EJ' => 'E02002260',
        '2EL' => 'E02002260',
        '2EN' => 'E02002260',
        '2EP' => 'E02002260',
        '2EQ' => 'E02002260',
        '2ER' => 'E02002260',
        '2ES' => 'E02002260',
        '2ET' => 'E02002260',
        '2EU' => 'E02002260',
        '2EW' => 'E02002260',
        '2EX' => 'E02002260',
        '2EY' => 'E02002260',
        '2EZ' => 'E02002260',
        '2FA' => 'E02002260',
        '2FB' => 'E02002259',
        '2FD' => 'E02002259',
        '2FE' => 'E02002260',
        '2FF' => 'E02002259',
        '2FG' => 'E02002259',
        '2FH' => 'E02002259',
        '2FJ' => 'E02002259',
        '2FL' => 'E02002259',
        '2FN' => 'E02002260',
        '2FP' => 'E02002259',
        '2FQ' => 'E02002252',
        '2FX' => 'E02002260',
        '2HA' => 'E02002260',
        '2HB' => 'E02002260',
        '2HD' => 'E02002260',
        '2HE' => 'E02002260',
        '2HF' => 'E02002260',
        '2HG' => 'E02002260',
        '2HH' => 'E02002260',
        '2HJ' => 'E02002260',
        '2HL' => 'E02002260',
        '2HN' => 'E02002260',
        '2HP' => 'E02002260',
        '2HQ' => 'E02002260',
        '2HR' => 'E02002260',
        '2HS' => 'E02002260',
        '2HT' => 'E02002260',
        '2HU' => 'E02002260',
        '2HW' => 'E02002260',
        '2HX' => 'E02002260',
        '2HY' => 'E02002260',
        '2HZ' => 'E02002260',
        '2JA' => 'E02002260',
        '2JB' => 'E02002260',
        '2JD' => 'E02002260',
        '2JE' => 'E02002260',
        '2JF' => 'E02002260',
        '2JG' => 'E02002260',
        '2JH' => 'E02002260',
        '2JJ' => 'E02002260',
        '2JL' => 'E02002260',
        '2JN' => 'E02002260',
        '2JQ' => 'E02002260',
        '2JR' => 'E02002260',
        '2JS' => 'E02002260',
        '2JT' => 'E02002260',
        '2JW' => 'E02002260',
        '2LA' => 'E02002260',
        '2LB' => 'E02002260',
        '2LD' => 'E02002260',
        '2LE' => 'E02002260',
        '2LF' => 'E02002260',
        '2LG' => 'E02002260',
        '2LH' => 'E02002260',
        '2LJ' => 'E02002260',
        '2LL' => 'E02002260',
        '2LN' => 'E02002260',
        '2LP' => 'E02002260',
        '2LQ' => 'E02002260',
        '2LR' => 'E02002260',
        '2LS' => 'E02002260',
        '2LT' => 'E02002260',
        '2LU' => 'E02002260',
        '2LW' => 'E02002260',
        '2LX' => 'E02002260',
        '2LY' => 'E02002260',
        '2LZ' => 'E02002260',
        '2NA' => 'E02002260',
        '2NB' => 'E02002260',
        '2ND' => 'E02002260',
        '2NE' => 'E02002260',
        '2NF' => 'E02002260',
        '2NG' => 'E02002260',
        '2NH' => 'E02002260',
        '2NJ' => 'E02002260',
        '2NL' => 'E02002260',
        '2NN' => 'E02002260',
        '2NP' => 'E02002260',
        '2NQ' => 'E02002260',
        '2NR' => 'E02002260',
        '2NS' => 'E02002260',
        '2NT' => 'E02002260',
        '2NU' => 'E02002260',
        '2NW' => 'E02002260',
        '2NX' => 'E02002260',
        '2NY' => 'E02002260',
        '2PA' => 'E02002260',
        '2PB' => 'E02002260',
        '2PD' => 'E02002260',
        '2PE' => 'E02002260',
        '2PF' => 'E02002260',
        '2PG' => 'E02002260',
        '2PH' => 'E02002260',
        '2PJ' => 'E02002260',
        '2PL' => 'E02002260',
        '2PN' => 'E02002260',
        '2PP' => 'E02002260',
        '2PQ' => 'E02002260',
        '2PR' => 'E02002260',
        '2PS' => 'E02002260',
        '2PT' => 'E02002260',
        '2PU' => 'E02002260',
        '2PX' => 'E02002260',
        '2PY' => 'E02002260',
        '2QB' => 'E02002260',
        '2QD' => 'E02002260',
        '2QE' => 'E02002260',
        '2QF' => 'E02002260',
        '2QG' => 'E02002260',
        '2QH' => 'E02002260',
        '2QJ' => 'E02002260',
        '2QL' => 'E02002260',
        '2QN' => 'E02002260',
        '2QP' => 'E02002260',
        '2QQ' => 'E02002260',
        '2QR' => 'E02002260',
        '2QS' => 'E02002260',
        '2QT' => 'E02002260',
        '2QU' => 'E02002260',
        '2QW' => 'E02002260',
        '2QX' => 'E02002260',
        '2QY' => 'E02002260',
        '2QZ' => 'E02002260',
        '2RA' => 'E02002260',
        '2RB' => 'E02002260',
        '2RD' => 'E02002260',
        '2RF' => 'E02002260',
        '2RG' => 'E02002260',
        '2RH' => 'E02002263',
        '2RJ' => 'E02002263',
        '2RL' => 'E02002263',
        '2RN' => 'E02002263',
        '2RP' => 'E02002260',
        '2RQ' => 'E02002263',
        '2RR' => 'E02002260',
        '2RS' => 'E02002260',
        '2RT' => 'E02002260',
        '2RU' => 'E02002260',
        '2RW' => 'E02002260',
        '2RX' => 'E02002260',
        '2RY' => 'E02002260',
        '2RZ' => 'E02002260',
        '2SA' => 'E02002260',
        '2SB' => 'E02002260',
        '2SD' => 'E02002260',
        '2SE' => 'E02002260',
        '2SF' => 'E02002260',
        '2SG' => 'E02002260',
        '2SH' => 'E02002260',
        '2SJ' => 'E02002260',
        '2SL' => 'E02002260',
        '2SN' => 'E02002260',
        '2SP' => 'E02002260',
        '2SQ' => 'E02002260',
        '2SR' => 'E02002260',
        '2SS' => 'E02002260',
        '2ST' => 'E02002260',
        '2SU' => 'E02002260',
        '2SW' => 'E02002260',
        '2SX' => 'E02002260',
        '2SY' => 'E02002260',
        '2SZ' => 'E02002260',
        '2TA' => 'E02002260',
        '2TB' => 'E02002260',
        '2TD' => 'E02002260',
        '2TE' => 'E02002260',
        '2TF' => 'E02002252',
        '2TG' => 'E02002252',
        '2TH' => 'E02002260',
        '2TJ' => 'E02002260',
        '2TL' => 'E02002260',
        '2TN' => 'E02002260',
        '2TP' => 'E02002260',
        '2TQ' => 'E02002260',
        '2TR' => 'E02002260',
        '2TS' => 'E02002260',
        '2TT' => 'E02002260',
        '2TU' => 'E02002260',
        '2TW' => 'E02002263',
        '2TX' => 'E02002260',
        '2TY' => 'E02002263',
        '2TZ' => 'E02002260',
        '2UA' => 'E02002263',
        '2UB' => 'E02002263',
        '2UD' => 'E02002263',
        '2UE' => 'E02002263',
        '2UF' => 'E02002252',
        '2UG' => 'E02002263',
        '2UH' => 'E02002263',
        '2UJ' => 'E02002263',
        '2UL' => 'E02002260',
        '2UN' => 'E02002263',
        '2UP' => 'E02002260',
        '2UQ' => 'E02002263',
        '2UR' => 'E02002260',
        '2US' => 'E02002260',
        '2UU' => 'E02002260',
        '2UW' => 'E02002260',
        '2UX' => 'E02002259',
        '2UY' => 'E02002259',
        '2UZ' => 'E02002259',
        '2WA' => 'E02002259',
        '2WW' => 'E02002251',
        '2WX' => 'E02002259',
        '2WY' => 'E02002259',
        '2WZ' => 'E02002259',
        '2YF' => 'E02002260',
        '2YN' => 'E02002251',
        '2YP' => 'E02002260',
        '2YQ' => 'E02002251',
        '2YR' => 'E02002251',
        '2YS' => 'E02002259',
        '2YT' => 'E02002259',
        '2YU' => 'E02002251',
        '2YW' => 'E02002251',
        '2YX' => 'E02002251',
        '2YY' => 'E02002251',
        '2YZ' => 'E02002251',
        '2ZR' => 'E02002260',
        '3AA' => 'E02002260',
        '3AB' => 'E02002260',
        '3AD' => 'E02002260',
        '3AE' => 'E02002260',
        '3AF' => 'E02002270',
        '3AG' => 'E02002251',
        '3AH' => 'E02002260',
        '3AJ' => 'E02002260',
        '3AL' => 'E02002260',
        '3AN' => 'E02002260',
        '3AP' => 'E02002260',
        '3AQ' => 'E02002260',
        '3AR' => 'E02002260',
        '3AS' => 'E02002260',
        '3AT' => 'E02002260',
        '3AU' => 'E02002260',
        '3AW' => 'E02002260',
        '3AX' => 'E02002260',
        '3AY' => 'E02002260',
        '3AZ' => 'E02002260',
        '3BA' => 'E02002260',
        '3BB' => 'E02002260',
        '3BD' => 'E02002260',
        '3BE' => 'E02002260',
        '3BG' => 'E02002260',
        '3BH' => 'E02002260',
        '3BJ' => 'E02002263',
        '3BL' => 'E02002263',
        '3BN' => 'E02002260',
        '3BP' => 'E02002260',
        '3BQ' => 'E02002260',
        '3BR' => 'E02002260',
        '3BS' => 'E02002260',
        '3BT' => 'E02002260',
        '3BU' => 'E02002260',
        '3BW' => 'E02002260',
        '3BX' => 'E02002260',
        '3BY' => 'E02002260',
        '3DA' => 'E02002270',
        '3DB' => 'E02002251',
        '3DD' => 'E02002251',
        '3DE' => 'E02002260',
        '3DF' => 'E02002260',
        '3DG' => 'E02002260',
        '3DH' => 'E02002263',
        '3DJ' => 'E02002270',
        '3DL' => 'E02002270',
        '3DN' => 'E02002270',
        '3DP' => 'E02002270',
        '3DQ' => 'E02002263',
        '3DR' => 'E02002263',
        '3DS' => 'E02002263',
        '3DT' => 'E02002263',
        '3DU' => 'E02002263',
        '3DW' => 'E02002263',
        '3DX' => 'E02002263',
        '3DY' => 'E02002263',
        '3DZ' => 'E02002263',
        '3EA' => 'E02002270',
        '3EB' => 'E02002263',
        '3ED' => 'E02002263',
        '3EE' => 'E02002263',
        '3EF' => 'E02002263',
        '3EG' => 'E02002263',
        '3EH' => 'E02002263',
        '3EJ' => 'E02002263',
        '3EL' => 'E02002263',
        '3EN' => 'E02002263',
        '3EP' => 'E02002263',
        '3EQ' => 'E02002263',
        '3ER' => 'E02002263',
        '3ES' => 'E02002270',
        '3ET' => 'E02002263',
        '3EU' => 'E02002263',
        '3EW' => 'E02002263',
        '3EX' => 'E02002263',
        '3EY' => 'E02002263',
        '3EZ' => 'E02002263',
        '3FA' => 'E02002263',
        '3FB' => 'E02002260',
        '3FE' => 'E02002260',
        '3GA' => 'E02002260',
        '3GB' => 'E02002260',
        '3GD' => 'E02002260',
        '3GE' => 'E02002260',
        '3HA' => 'E02002263',
        '3HB' => 'E02002263',
        '3HD' => 'E02002263',
        '3HF' => 'E02002270',
        '3HG' => 'E02002270',
        '3HH' => 'E02002270',
        '3HJ' => 'E02002270',
        '3HL' => 'E02002270',
        '3HN' => 'E02002270',
        '3HP' => 'E02002270',
        '3HQ' => 'E02002270',
        '3HR' => 'E02002270',
        '3HS' => 'E02002270',
        '3HT' => 'E02002270',
        '3HU' => 'E02002270',
        '3HW' => 'E02002270',
        '3HX' => 'E02002270',
        '3HY' => 'E02002270',
        '3HZ' => 'E02002270',
        '3JA' => 'E02002270',
        '3JB' => 'E02002270',
        '3JD' => 'E02002270',
        '3JE' => 'E02002263',
        '3JF' => 'E02002263',
        '3JG' => 'E02002260',
        '3JH' => 'E02002260',
        '3JN' => 'E02002270',
        '3JQ' => 'E02002270',
        '3JX' => 'E02002263',
        '3JY' => 'E02002260',
        '3LA' => 'E02002270',
        '3LB' => 'E02002260',
        '3LD' => 'E02002260',
        '3LE' => 'E02002260',
        '3LF' => 'E02002260',
        '3LG' => 'E02002270',
        '3LH' => 'E02002270',
        '3LL' => 'E02002270',
        '3LN' => 'E02002263',
        '3LP' => 'E02002270',
        '3LQ' => 'E02002270',
        '3LR' => 'E02002270',
        '3LS' => 'E02002270',
        '3LT' => 'E02002270',
        '3LU' => 'E02002270',
        '3LW' => 'E02002270',
        '3LX' => 'E02002260',
        '3LY' => 'E02002260',
        '3LZ' => 'E02002263',
        '3NA' => 'E02002270',
        '3NB' => 'E02002263',
        '3ND' => 'E02002263',
        '3NE' => 'E02002263',
        '3NF' => 'E02002263',
        '3NG' => 'E02002263',
        '3NH' => 'E02002263',
        '3NJ' => 'E02002263',
        '3NL' => 'E02002263',
        '3NN' => 'E02002270',
        '3NP' => 'E02002270',
        '3NQ' => 'E02002263',
        '3NR' => 'E02002263',
        '3NS' => 'E02002263',
        '3NT' => 'E02002270',
        '3NW' => 'E02002270',
        '3NX' => 'E02002270',
        '3PA' => 'E02002263',
        '3PB' => 'E02002263',
        '3PD' => 'E02002263',
        '3PE' => 'E02002263',
        '3PF' => 'E02002263',
        '3PG' => 'E02002260',
        '3PH' => 'E02002263',
        '3PJ' => 'E02002263',
        '3PL' => 'E02002260',
        '3PN' => 'E02002260',
        '3PP' => 'E02002260',
        '3PQ' => 'E02002263',
        '3PR' => 'E02002260',
        '3PS' => 'E02002260',
        '3PT' => 'E02002260',
        '3PU' => 'E02002260',
        '3PW' => 'E02002260',
        '3PX' => 'E02002270',
        '3PY' => 'E02002270',
        '3PZ' => 'E02002270',
        '3QA' => 'E02002260',
        '3QB' => 'E02002260',
        '3QD' => 'E02002260',
        '3QE' => 'E02002260',
        '3QF' => 'E02002270',
        '3QG' => 'E02002270',
        '3QH' => 'E02002270',
        '3QJ' => 'E02002270',
        '3QL' => 'E02002270',
        '3QN' => 'E02002270',
        '3QP' => 'E02002270',
        '3QQ' => 'E02002270',
        '3QR' => 'E02002270',
        '3QS' => 'E02002270',
        '3QT' => 'E02002270',
        '3QU' => 'E02002270',
        '3QW' => 'E02002270',
        '3QX' => 'E02002270',
        '3QY' => 'E02002270',
        '3QZ' => 'E02002270',
        '3RA' => 'E02002270',
        '3RB' => 'E02002270',
        '3RD' => 'E02002270',
        '3RE' => 'E02002270',
        '3RF' => 'E02002270',
        '3RG' => 'E02002270',
        '3RH' => 'E02002270',
        '3RJ' => 'E02002270',
        '3RL' => 'E02002270',
        '3RN' => 'E02002270',
        '3RP' => 'E02002270',
        '3RQ' => 'E02002270',
        '3RR' => 'E02002270',
        '3RS' => 'E02002270',
        '3RT' => 'E02002270',
        '3RU' => 'E02002270',
        '3RW' => 'E02002270',
        '3RX' => 'E02002270',
        '3RY' => 'E02002270',
        '3RZ' => 'E02002270',
        '3SA' => 'E02002270',
        '3SB' => 'E02002270',
        '3SD' => 'E02002270',
        '3SE' => 'E02002263',
        '3SF' => 'E02002270',
        '3SG' => 'E02002260',
        '3SQ' => 'E02002270',
        '3SX' => 'E02002270',
        '3WA' => 'E02002251',
        '3WX' => 'E02002251',
        '3WY' => 'E02002270',
        '3WZ' => 'E02002251',
        '3YA' => 'E02002251',
        '3YB' => 'E02002251',
        '3YD' => 'E02002251',
        '3YE' => 'E02002270',
        '3YF' => 'E02002251',
        '3YG' => 'E02002270',
        '3YH' => 'E02002251',
        '3YJ' => 'E02002270',
        '3YL' => 'E02002270',
        '3YN' => 'E02002270',
        '3YP' => 'E02002270',
        '3YQ' => 'E02002251',
        '3YR' => 'E02002251',
        '3YS' => 'E02002270',
        '3YT' => 'E02002251',
        '3YU' => 'E02002270',
        '3YW' => 'E02002270',
        '3YX' => 'E02002270',
        '3YY' => 'E02002270',
        '3YZ' => 'E02002251',
        '3ZB' => 'E02002251',
        '4AA' => 'E02002270',
        '4AB' => 'E02002270',
        '4AD' => 'E02002270',
        '4AE' => 'E02002270',
        '4AF' => 'E02002270',
        '4AG' => 'E02002270',
        '4AH' => 'E02002270',
        '4AJ' => 'E02002270',
        '4AL' => 'E02002270',
        '4AN' => 'E02002270',
        '4AP' => 'E02002270',
        '4AQ' => 'E02002270',
        '4AR' => 'E02002270',
        '4AS' => 'E02002270',
        '4AT' => 'E02002270',
        '4AU' => 'E02002270',
        '4AW' => 'E02002270',
        '4AX' => 'E02002270',
        '4AY' => 'E02002270',
        '4AZ' => 'E02002270',
        '4BA' => 'E02002270',
        '4BB' => 'E02002270',
        '4BD' => 'E02002270',
        '4BE' => 'E02002270',
        '4BG' => 'E02002270',
        '4BH' => 'E02002270',
        '4BJ' => 'E02002270',
        '4BL' => 'E02002270',
        '4BN' => 'E02002270',
        '4BP' => 'E02002270',
        '4BQ' => 'E02002270',
        '4BS' => 'E02002270',
        '4BU' => 'E02002270',
        '4BW' => 'E02002270',
        '4BX' => 'E02002270',
        '4BY' => 'E02002270',
        '4DA' => 'E02002270',
        '4DB' => 'E02002270',
        '4DD' => 'E02002270',
        '4DE' => 'E02002270',
        '4DF' => 'E02002270',
        '4DG' => 'E02002270',
        '4DH' => 'E02002270',
        '4DJ' => 'E02002270',
        '4DL' => 'E02002270',
        '4DN' => 'E02002270',
        '4DP' => 'E02002270',
        '4DQ' => 'E02002270',
        '4DR' => 'E02002270',
        '4DS' => 'E02002270',
        '4DT' => 'E02002270',
        '4DU' => 'E02002270',
        '4DW' => 'E02002270',
        '4DX' => 'E02002270',
        '4DY' => 'E02002270',
        '4DZ' => 'E02002270',
        '4EA' => 'E02002270',
        '4EB' => 'E02002270',
        '4ED' => 'E02002270',
        '4EE' => 'E02002270',
        '4EF' => 'E02002270',
        '4EG' => 'E02002270',
        '4EH' => 'E02002270',
        '4EJ' => 'E02002270',
        '4EL' => 'E02002270',
        '4EN' => 'E02002270',
        '4EP' => 'E02002270',
        '4EQ' => 'E02002270',
        '4ER' => 'E02002270',
        '4ES' => 'E02002270',
        '4ET' => 'E02002270',
        '4EU' => 'E02002270',
        '4EW' => 'E02002270',
        '4EX' => 'E02002270',
        '4EY' => 'E02002270',
        '4EZ' => 'E02002270',
        '4FA' => 'E02002270',
        '4FB' => 'E02002270',
        '4FD' => 'E02002270',
        '4FE' => 'E02002270',
        '4FF' => 'E02002270',
        '4FG' => 'E02002270',
        '4HA' => 'E02002270',
        '4HB' => 'E02002270',
        '4HD' => 'E02002270',
        '4HE' => 'E02002270',
        '4HF' => 'E02002270',
        '4HG' => 'E02002270',
        '4HH' => 'E02002270',
        '4HJ' => 'E02002270',
        '4HL' => 'E02002270',
        '4HN' => 'E02002270',
        '4HP' => 'E02002270',
        '4HQ' => 'E02002270',
        '4HR' => 'E02002270',
        '4HS' => 'E02002270',
        '4HT' => 'E02002270',
        '4HW' => 'E02002270',
        '4HY' => 'E02002270',
        '4HZ' => 'E02002270',
        '4JB' => 'E02002270',
        '4JE' => 'E02002270',
        '4JF' => 'E02002270',
        '4JG' => 'E02002270',
        '4JH' => 'E02002270',
        '4JJ' => 'E02002270',
        '4JL' => 'E02002270',
        '4JN' => 'E02002270',
        '4JP' => 'E02002270',
        '4JQ' => 'E02002270',
        '4JR' => 'E02002270',
        '4JS' => 'E02002270',
        '4JT' => 'E02002270',
        '4JU' => 'E02002270',
        '4JW' => 'E02002270',
        '4JX' => 'E02002270',
        '4JY' => 'E02002270',
        '4JZ' => 'E02002270',
        '4LA' => 'E02002270',
        '4LB' => 'E02002270',
        '4LD' => 'E02002270',
        '4LE' => 'E02002270',
        '4LF' => 'E02002270',
        '4LG' => 'E02002270',
        '4LH' => 'E02002270',
        '4LJ' => 'E02002270',
        '4LL' => 'E02002270',
        '4LN' => 'E02002270',
        '4LP' => 'E02002270',
        '4LQ' => 'E02002270',
        '4LR' => 'E02002270',
        '4LS' => 'E02002270',
        '4LT' => 'E02002270',
        '4LU' => 'E02002270',
        '4LW' => 'E02002270',
        '4LX' => 'E02002270',
        '4LY' => 'E02002270',
        '4LZ' => 'E02002270',
        '4NA' => 'E02002270',
        '4NB' => 'E02002270',
        '4ND' => 'E02002270',
        '4NE' => 'E02002270',
        '4NF' => 'E02002270',
        '4NG' => 'E02002270',
        '4NH' => 'E02002270',
        '4NJ' => 'E02002270',
        '4NL' => 'E02002270',
        '4NN' => 'E02002270',
        '4NP' => 'E02002270',
        '4NQ' => 'E02002270',
        '4NR' => 'E02002270',
        '4NS' => 'E02002270',
        '4NT' => 'E02002270',
        '4NU' => 'E02002270',
        '4NW' => 'E02002270',
        '4NX' => 'E02002270',
        '4NY' => 'E02002270',
        '4NZ' => 'E02002270',
        '4PA' => 'E02002270',
        '4PB' => 'E02002270',
        '4PD' => 'E02002270',
        '4PE' => 'E02002270',
        '4PW' => 'E02002270',
        '4PX' => 'E02002270',
        '4PY' => 'E02002270',
        '4PZ' => 'E02002270',
        '4QA' => 'E02002270',
        '4QB' => 'E02002270',
        '4QD' => 'E02002270',
        '4QE' => 'E02002270',
        '4QF' => 'E02002270',
        '4QG' => 'E02002270',
        '4QH' => 'E02002270',
        '4QJ' => 'E02002270',
        '4QL' => 'E02002270',
        '4QN' => 'E02002270',
        '4QP' => 'E02002270',
        '4QQ' => 'E02002270',
        '4QR' => 'E02002270',
        '4QS' => 'E02002270',
        '4QT' => 'E02002270',
        '4QU' => 'E02002270',
        '4QW' => 'E02002270',
        '4QX' => 'E02002270',
        '4QY' => 'E02002270',
        '4QZ' => 'E02002270',
        '4RA' => 'E02002270',
        '4RB' => 'E02002270',
        '4RD' => 'E02002270',
        '4RE' => 'E02002270',
        '4RF' => 'E02002270',
        '4RG' => 'E02002270',
        '4RH' => 'E02002270',
        '4RJ' => 'E02002270',
        '4RL' => 'E02002270',
        '4RN' => 'E02002270',
        '4RP' => 'E02002270',
        '4RQ' => 'E02002270',
        '4RR' => 'E02002270',
        '4RS' => 'E02002270',
        '4RT' => 'E02002270',
        '4RU' => 'E02002270',
        '4RW' => 'E02002270',
        '4RX' => 'E02002270',
        '4RY' => 'E02002270',
        '4RZ' => 'E02002270',
        '4SA' => 'E02002270',
        '4SB' => 'E02002270',
        '4SD' => 'E02002270',
        '4WU' => 'E02002251',
        '4WW' => 'E02002251',
        '4WX' => 'E02002251',
        '4WY' => 'E02002251',
        '4WZ' => 'E02002270',
        '4XA' => 'E02002270',
        '4XB' => 'E02002251',
        '4XD' => 'E02002270',
        '4XE' => 'E02002251',
        '4XF' => 'E02002251',
        '4XG' => 'E02002251',
        '4XH' => 'E02002270',
        '4XJ' => 'E02002251',
        '4XL' => 'E02002251',
        '4XN' => 'E02002251',
        '4XP' => 'E02002251',
        '4XQ' => 'E02002270',
        '4XR' => 'E02002251',
        '4XS' => 'E02002251',
        '4XT' => 'E02002251',
        '4XW' => 'E02002251',
        '4YS' => 'E02002270',
        '4ZN' => 'E02002251',
        '4ZY' => 'E02002251',
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