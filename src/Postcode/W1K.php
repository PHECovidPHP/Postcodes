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
final class W1K
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AB' => 'E02000978',
        '1AD' => 'E02000977',
        '1AE' => 'E02000970',
        '1AF' => 'E02000970',
        '1AG' => 'E02000970',
        '1AH' => 'E02000970',
        '1AJ' => 'E02000970',
        '1AL' => 'E02000970',
        '1AN' => 'E02000970',
        '1AP' => 'E02000970',
        '1AQ' => 'E02000970',
        '1AR' => 'E02000970',
        '1AU' => 'E02000970',
        '1AW' => 'E02000970',
        '1AX' => 'E02000970',
        '1AY' => 'E02000970',
        '1AZ' => 'E02000970',
        '1BA' => 'E02000970',
        '1BB' => 'E02000970',
        '1BD' => 'E02000970',
        '1BE' => 'E02000977',
        '1BG' => 'E02000970',
        '1BH' => 'E02000970',
        '1BJ' => 'E02000970',
        '1BL' => 'E02000970',
        '1BQ' => 'E02000970',
        '1BW' => 'E02000970',
        '1DB' => 'E02000970',
        '1DE' => 'E02000970',
        '1DF' => 'E02000970',
        '1DG' => 'E02000970',
        '1DH' => 'E02000970',
        '1DJ' => 'E02000977',
        '1DL' => 'E02000977',
        '1DN' => 'E02000970',
        '1DP' => 'E02000970',
        '1DQ' => 'E02000970',
        '1DR' => 'E02000970',
        '1DS' => 'E02000970',
        '1DW' => 'E02000970',
        '1DX' => 'E02000970',
        '1EE' => 'E02000970',
        '1EQ' => 'E02000970',
        '1HA' => 'E02000970',
        '1HB' => 'E02000970',
        '1HD' => 'E02000970',
        '1HE' => 'E02000970',
        '1HF' => 'E02000977',
        '1HG' => 'E02000977',
        '1HH' => 'E02000977',
        '1HJ' => 'E02000977',
        '1HL' => 'E02000977',
        '1HN' => 'E02000977',
        '1HP' => 'E02000970',
        '1HQ' => 'E02000977',
        '1HR' => 'E02000970',
        '1HW' => 'E02000977',
        '1JA' => 'E02000970',
        '1JB' => 'E02000970',
        '1JD' => 'E02000970',
        '1JE' => 'E02000970',
        '1JF' => 'E02000970',
        '1JG' => 'E02000970',
        '1JH' => 'E02000970',
        '1JJ' => 'E02000970',
        '1JQ' => 'E02000970',
        '1LB' => 'E02000977',
        '1LN' => 'E02000970',
        '1LQ' => 'E02000970',
        '1NA' => 'E02000970',
        '1NB' => 'E02000977',
        '1ND' => 'E02000977',
        '1PA' => 'E02000970',
        '1PB' => 'E02000970',
        '1PD' => 'E02000970',
        '1PE' => 'E02000970',
        '1PF' => 'E02000970',
        '1PG' => 'E02000970',
        '1PH' => 'E02000970',
        '1PJ' => 'E02000970',
        '1PL' => 'E02000970',
        '1PN' => 'E02000970',
        '1PP' => 'E02000970',
        '1PQ' => 'E02000970',
        '1PR' => 'E02000970',
        '1PS' => 'E02000970',
        '1PT' => 'E02000970',
        '1PU' => 'E02000970',
        '1PW' => 'E02000970',
        '1PX' => 'E02000970',
        '1PY' => 'E02000970',
        '1PZ' => 'E02000970',
        '1QA' => 'E02000970',
        '1QB' => 'E02000970',
        '1QD' => 'E02000970',
        '1QE' => 'E02000970',
        '1QF' => 'E02000970',
        '1QG' => 'E02000970',
        '1QN' => 'E02000977',
        '1QP' => 'E02000977',
        '1QR' => 'E02000977',
        '1QS' => 'E02000977',
        '1QT' => 'E02000977',
        '1QU' => 'E02000977',
        '1QW' => 'E02000977',
        '1QX' => 'E02000977',
        '1QY' => 'E02000977',
        '1QZ' => 'E02000977',
        '1RA' => 'E02000970',
        '1RB' => 'E02000970',
        '2AA' => 'E02000970',
        '2AB' => 'E02000970',
        '2AD' => 'E02000970',
        '2AE' => 'E02000970',
        '2AF' => 'E02000970',
        '2AG' => 'E02000970',
        '2AH' => 'E02000970',
        '2AJ' => 'E02000970',
        '2AL' => 'E02000977',
        '2AN' => 'E02000977',
        '2AP' => 'E02000977',
        '2AQ' => 'E02000970',
        '2AR' => 'E02000970',
        '2AT' => 'E02000970',
        '2AU' => 'E02000970',
        '2AW' => 'E02000970',
        '2AX' => 'E02000970',
        '2AY' => 'E02000970',
        '2AZ' => 'E02000970',
        '2BA' => 'E02000970',
        '2BB' => 'E02000970',
        '2BD' => 'E02000970',
        '2BE' => 'E02000970',
        '2BF' => 'E02000970',
        '2BG' => 'E02000970',
        '2BH' => 'E02000970',
        '2BJ' => 'E02000970',
        '2BL' => 'E02000970',
        '2BN' => 'E02000970',
        '2BP' => 'E02000970',
        '2BQ' => 'E02000970',
        '2BR' => 'E02000970',
        '2BS' => 'E02000970',
        '2BT' => 'E02000970',
        '2BU' => 'E02000977',
        '2BW' => 'E02000970',
        '2BX' => 'E02000977',
        '2BY' => 'E02000977',
        '2DG' => 'E02000970',
        '2DJ' => 'E02000970',
        '2DL' => 'E02000970',
        '2DN' => 'E02000977',
        '2DP' => 'E02000970',
        '2DR' => 'E02000970',
        '2DS' => 'E02000970',
        '2DT' => 'E02000970',
        '2DU' => 'E02000970',
        '2DW' => 'E02000970',
        '2DX' => 'E02000970',
        '2DY' => 'E02000970',
        '2DZ' => 'E02000970',
        '2ED' => 'E02000970',
        '2EE' => 'E02000970',
        '2EF' => 'E02000970',
        '2EG' => 'E02000970',
        '2EH' => 'E02000970',
        '2EQ' => 'E02000970',
        '2ES' => 'E02000970',
        '2ET' => 'E02000977',
        '2EU' => 'E02000977',
        '2EX' => 'E02000977',
        '2EY' => 'E02000977',
        '2HA' => 'E02000970',
        '2HB' => 'E02000970',
        '2HD' => 'E02000977',
        '2HE' => 'E02000977',
        '2HH' => 'E02000970',
        '2HJ' => 'E02000977',
        '2HL' => 'E02000977',
        '2HN' => 'E02000970',
        '2HP' => 'E02000977',
        '2HQ' => 'E02000970',
        '2HR' => 'E02000977',
        '2HS' => 'E02000977',
        '2HT' => 'E02000977',
        '2HU' => 'E02000970',
        '2HW' => 'E02000970',
        '2HX' => 'E02000970',
        '2HY' => 'E02000970',
        '2HZ' => 'E02000970',
        '2JA' => 'E02000970',
        '2JB' => 'E02000970',
        '2JD' => 'E02000970',
        '2JE' => 'E02000970',
        '2JF' => 'E02000970',
        '2JG' => 'E02000970',
        '2JH' => 'E02000970',
        '2JJ' => 'E02000970',
        '2JL' => 'E02000977',
        '2JN' => 'E02000977',
        '2JP' => 'E02000970',
        '2JQ' => 'E02000970',
        '2JR' => 'E02000970',
        '2JS' => 'E02000970',
        '2JT' => 'E02000970',
        '2JU' => 'E02000970',
        '2JW' => 'E02000977',
        '2JX' => 'E02000970',
        '2JY' => 'E02000970',
        '2JZ' => 'E02000970',
        '2LA' => 'E02000977',
        '2LB' => 'E02000977',
        '2LD' => 'E02000977',
        '2LE' => 'E02000977',
        '2LF' => 'E02000977',
        '2LG' => 'E02000970',
        '2LH' => 'E02000977',
        '2LJ' => 'E02000977',
        '2LL' => 'E02000977',
        '2LN' => 'E02000970',
        '2LP' => 'E02000977',
        '2LR' => 'E02000970',
        '2LS' => 'E02000977',
        '2LT' => 'E02000977',
        '2LU' => 'E02000977',
        '2LX' => 'E02000977',
        '2LY' => 'E02000977',
        '2LZ' => 'E02000977',
        '2NA' => 'E02000977',
        '2NB' => 'E02000977',
        '2ND' => 'E02000977',
        '2NE' => 'E02000970',
        '2NF' => 'E02000970',
        '2NG' => 'E02000977',
        '2NH' => 'E02000977',
        '2NJ' => 'E02000970',
        '2NL' => 'E02000970',
        '2NN' => 'E02000970',
        '2NP' => 'E02000970',
        '2NQ' => 'E02000977',
        '2NR' => 'E02000970',
        '2NT' => 'E02000970',
        '2NU' => 'E02000970',
        '2NW' => 'E02000970',
        '2NX' => 'E02000970',
        '2NY' => 'E02000970',
        '2NZ' => 'E02000970',
        '2PA' => 'E02000970',
        '2PB' => 'E02000970',
        '2PD' => 'E02000970',
        '2PE' => 'E02000970',
        '2PF' => 'E02000970',
        '2PG' => 'E02000970',
        '2PH' => 'E02000970',
        '2PJ' => 'E02000970',
        '2PL' => 'E02000970',
        '2PN' => 'E02000970',
        '2PP' => 'E02000970',
        '2PQ' => 'E02000970',
        '2PR' => 'E02000970',
        '2PS' => 'E02000970',
        '2PT' => 'E02000970',
        '2PU' => 'E02000970',
        '2PW' => 'E02000970',
        '2PX' => 'E02000970',
        '2PY' => 'E02000970',
        '2PZ' => 'E02000970',
        '2QA' => 'E02000970',
        '2QB' => 'E02000970',
        '2QD' => 'E02000970',
        '2QE' => 'E02000970',
        '2QF' => 'E02000970',
        '2QG' => 'E02000970',
        '2QH' => 'E02000970',
        '2QJ' => 'E02000970',
        '2QL' => 'E02000970',
        '2QN' => 'E02000970',
        '2QP' => 'E02000970',
        '2QQ' => 'E02000970',
        '2QR' => 'E02000970',
        '2QS' => 'E02000970',
        '2QT' => 'E02000970',
        '2QU' => 'E02000970',
        '2QW' => 'E02000970',
        '2QX' => 'E02000970',
        '2QY' => 'E02000970',
        '2QZ' => 'E02000970',
        '2RA' => 'E02000970',
        '2RB' => 'E02000977',
        '2RD' => 'E02000977',
        '2RE' => 'E02000977',
        '2RF' => 'E02000977',
        '2RG' => 'E02000977',
        '2RH' => 'E02000977',
        '2RJ' => 'E02000977',
        '2RL' => 'E02000977',
        '2RN' => 'E02000977',
        '2RP' => 'E02000977',
        '2RQ' => 'E02000977',
        '2RR' => 'E02000977',
        '2RS' => 'E02000970',
        '2RT' => 'E02000970',
        '2RU' => 'E02000970',
        '2RW' => 'E02000977',
        '2RX' => 'E02000970',
        '2RY' => 'E02000970',
        '2RZ' => 'E02000970',
        '2SA' => 'E02000970',
        '2SB' => 'E02000970',
        '2SD' => 'E02000970',
        '2SE' => 'E02000970',
        '2SF' => 'E02000970',
        '2SG' => 'E02000970',
        '2SH' => 'E02000970',
        '2SJ' => 'E02000970',
        '2SL' => 'E02000970',
        '2SN' => 'E02000970',
        '2SP' => 'E02000970',
        '2SQ' => 'E02000970',
        '2SR' => 'E02000970',
        '2SS' => 'E02000970',
        '2ST' => 'E02000970',
        '2SU' => 'E02000970',
        '2SW' => 'E02000970',
        '2SX' => 'E02000970',
        '2SY' => 'E02000970',
        '2SZ' => 'E02000970',
        '2TA' => 'E02000970',
        '2TB' => 'E02000970',
        '2TD' => 'E02000970',
        '2TE' => 'E02000970',
        '2TF' => 'E02000970',
        '2TG' => 'E02000977',
        '2TH' => 'E02000977',
        '2TJ' => 'E02000977',
        '2TL' => 'E02000977',
        '2TN' => 'E02000977',
        '2TP' => 'E02000977',
        '2TQ' => 'E02000977',
        '2TR' => 'E02000977',
        '2TS' => 'E02000977',
        '2TT' => 'E02000977',
        '2TU' => 'E02000977',
        '2TW' => 'E02000977',
        '2TX' => 'E02000977',
        '2TY' => 'E02000977',
        '2XA' => 'E02000970',
        '2XB' => 'E02000970',
        '2XD' => 'E02000970',
        '2XE' => 'E02000970',
        '2XF' => 'E02000970',
        '2XG' => 'E02000977',
        '2XH' => 'E02000977',
        '2XJ' => 'E02000977',
        '2XL' => 'E02000977',
        '2XQ' => 'E02000977',
        '2YU' => 'E02000970',
        '2YX' => 'E02000970',
        '2YY' => 'E02000970',
        '2YZ' => 'E02000970',
        '3AA' => 'E02000972',
        '3AB' => 'E02000972',
        '3AD' => 'E02000972',
        '3AE' => 'E02000972',
        '3AF' => 'E02000972',
        '3AG' => 'E02000977',
        '3AH' => 'E02000977',
        '3AJ' => 'E02000977',
        '3AL' => 'E02000977',
        '3AN' => 'E02000977',
        '3AP' => 'E02000977',
        '3AQ' => 'E02000977',
        '3AR' => 'E02000977',
        '3AS' => 'E02000977',
        '3AT' => 'E02000977',
        '3AU' => 'E02000977',
        '3AW' => 'E02000977',
        '3AX' => 'E02000977',
        '3AY' => 'E02000977',
        '3AZ' => 'E02000972',
        '3BA' => 'E02000977',
        '3BH' => 'E02000977',
        '3BP' => 'E02000977',
        '3BQ' => 'E02000977',
        '3BW' => 'E02000977',
        '3DA' => 'E02000977',
        '3DB' => 'E02000977',
        '3DD' => 'E02000977',
        '3DE' => 'E02000977',
        '3DF' => 'E02000977',
        '3DG' => 'E02000977',
        '3DH' => 'E02000977',
        '3DJ' => 'E02000977',
        '3DL' => 'E02000977',
        '3DN' => 'E02000977',
        '3DP' => 'E02000977',
        '3DQ' => 'E02000977',
        '3DR' => 'E02000977',
        '3DS' => 'E02000977',
        '3DT' => 'E02000977',
        '3DU' => 'E02000977',
        '3DW' => 'E02000977',
        '3EA' => 'E02000972',
        '3EF' => 'E02000977',
        '3EG' => 'E02000977',
        '3EH' => 'E02000977',
        '3EJ' => 'E02000977',
        '3EL' => 'E02000977',
        '3EP' => 'E02000977',
        '3EQ' => 'E02000972',
        '3ER' => 'E02000977',
        '3HA' => 'E02000977',
        '3HH' => 'E02000977',
        '3HJ' => 'E02000977',
        '3HL' => 'E02000977',
        '3HN' => 'E02000977',
        '3HP' => 'E02000977',
        '3HQ' => 'E02000972',
        '3HR' => 'E02000977',
        '3HS' => 'E02000977',
        '3HT' => 'E02000977',
        '3HU' => 'E02000977',
        '3HW' => 'E02000977',
        '3HX' => 'E02000977',
        '3HY' => 'E02000977',
        '3HZ' => 'E02000977',
        '3JA' => 'E02000977',
        '3JB' => 'E02000977',
        '3JD' => 'E02000977',
        '3JE' => 'E02000977',
        '3JF' => 'E02000977',
        '3JG' => 'E02000977',
        '3JH' => 'E02000977',
        '3JJ' => 'E02000977',
        '3JL' => 'E02000977',
        '3JN' => 'E02000977',
        '3JP' => 'E02000977',
        '3JQ' => 'E02000977',
        '3JR' => 'E02000977',
        '3JS' => 'E02000977',
        '3JT' => 'E02000977',
        '3JU' => 'E02000977',
        '3JW' => 'E02000977',
        '3JX' => 'E02000977',
        '3JY' => 'E02000977',
        '3JZ' => 'E02000977',
        '3LA' => 'E02000977',
        '3LB' => 'E02000977',
        '3LD' => 'E02000977',
        '3LE' => 'E02000977',
        '3LF' => 'E02000977',
        '3LG' => 'E02000977',
        '3LH' => 'E02000977',
        '3LJ' => 'E02000977',
        '3LL' => 'E02000977',
        '3LN' => 'E02000977',
        '3LP' => 'E02000977',
        '3LQ' => 'E02000977',
        '3LW' => 'E02000977',
        '3LZ' => 'E02000972',
        '3NA' => 'E02000977',
        '3NB' => 'E02000977',
        '3ND' => 'E02000977',
        '3NE' => 'E02000977',
        '3NF' => 'E02000977',
        '3NG' => 'E02000977',
        '3NH' => 'E02000977',
        '3NJ' => 'E02000977',
        '3NL' => 'E02000977',
        '3NN' => 'E02000977',
        '3NP' => 'E02000977',
        '3NQ' => 'E02000977',
        '3NR' => 'E02000977',
        '3NS' => 'E02000977',
        '3NT' => 'E02000977',
        '3NU' => 'E02000977',
        '3NW' => 'E02000977',
        '3NX' => 'E02000977',
        '3NY' => 'E02000977',
        '3PA' => 'E02000977',
        '3PB' => 'E02000972',
        '3PD' => 'E02000972',
        '3PE' => 'E02000972',
        '3PF' => 'E02000977',
        '3PG' => 'E02000977',
        '3PH' => 'E02000972',
        '3PJ' => 'E02000972',
        '3PL' => 'E02000972',
        '3PN' => 'E02000972',
        '3PP' => 'E02000972',
        '3PQ' => 'E02000972',
        '3PR' => 'E02000972',
        '3PS' => 'E02000977',
        '3PT' => 'E02000972',
        '3PU' => 'E02000972',
        '3PW' => 'E02000972',
        '3PX' => 'E02000977',
        '3PY' => 'E02000977',
        '3PZ' => 'E02000977',
        '3QA' => 'E02000977',
        '3QB' => 'E02000977',
        '3QD' => 'E02000977',
        '3QE' => 'E02000977',
        '3QF' => 'E02000977',
        '3QG' => 'E02000977',
        '3QH' => 'E02000972',
        '3QJ' => 'E02000972',
        '3QL' => 'E02000972',
        '3QN' => 'E02000972',
        '3QP' => 'E02000972',
        '3QQ' => 'E02000977',
        '3QR' => 'E02000972',
        '3QS' => 'E02000972',
        '3QT' => 'E02000972',
        '3QU' => 'E02000977',
        '3QW' => 'E02000972',
        '3RA' => 'E02000977',
        '3RB' => 'E02000977',
        '3RD' => 'E02000977',
        '3RE' => 'E02000977',
        '3RF' => 'E02000977',
        '3RG' => 'E02000977',
        '3RH' => 'E02000977',
        '3RJ' => 'E02000977',
        '3RL' => 'E02000977',
        '3RN' => 'E02000977',
        '3RQ' => 'E02000977',
        '3SA' => 'E02000977',
        '3SB' => 'E02000977',
        '3SD' => 'E02000977',
        '3SE' => 'E02000977',
        '3SF' => 'E02000977',
        '3SG' => 'E02000977',
        '3SH' => 'E02000977',
        '3SQ' => 'E02000977',
        '3TA' => 'E02000977',
        '4AA' => 'E02000977',
        '4AB' => 'E02000977',
        '4AD' => 'E02000970',
        '4AE' => 'E02000970',
        '4AF' => 'E02000970',
        '4AG' => 'E02000970',
        '4AH' => 'E02000970',
        '4AJ' => 'E02000972',
        '4AL' => 'E02000972',
        '4AN' => 'E02000972',
        '4AP' => 'E02000972',
        '4AQ' => 'E02000972',
        '4AR' => 'E02000972',
        '4AS' => 'E02000972',
        '4AT' => 'E02000972',
        '4AU' => 'E02000972',
        '4AW' => 'E02000972',
        '4AX' => 'E02000972',
        '4AY' => 'E02000972',
        '4AZ' => 'E02000972',
        '4BA' => 'E02000972',
        '4BB' => 'E02000972',
        '4BD' => 'E02000972',
        '4BE' => 'E02000972',
        '4BF' => 'E02000972',
        '4BG' => 'E02000972',
        '4BH' => 'E02000970',
        '4BJ' => 'E02000972',
        '4BL' => 'E02000972',
        '4BN' => 'E02000977',
        '4BP' => 'E02000977',
        '4DA' => 'E02000977',
        '4DB' => 'E02000977',
        '4DD' => 'E02000977',
        '4DE' => 'E02000977',
        '4DF' => 'E02000970',
        '4DG' => 'E02000972',
        '4DJ' => 'E02000972',
        '4DP' => 'E02000977',
        '4DR' => 'E02000972',
        '4DS' => 'E02000972',
        '4DT' => 'E02000972',
        '4DU' => 'E02000972',
        '4DX' => 'E02000972',
        '4DY' => 'E02000977',
        '4DZ' => 'E02000977',
        '4EA' => 'E02000977',
        '4EB' => 'E02000972',
        '4ED' => 'E02000972',
        '4EE' => 'E02000972',
        '4EF' => 'E02000972',
        '4EG' => 'E02000972',
        '4EH' => 'E02000977',
        '4ER' => 'E02000970',
        '4HA' => 'E02000972',
        '4HB' => 'E02000972',
        '4HD' => 'E02000972',
        '4HE' => 'E02000972',
        '4HF' => 'E02000972',
        '4HG' => 'E02000972',
        '4HH' => 'E02000972',
        '4HJ' => 'E02000972',
        '4HL' => 'E02000972',
        '4HN' => 'E02000972',
        '4HP' => 'E02000977',
        '4HQ' => 'E02000972',
        '4HR' => 'E02000977',
        '4HS' => 'E02000970',
        '4HT' => 'E02000970',
        '4HU' => 'E02000970',
        '4HW' => 'E02000977',
        '4HX' => 'E02000970',
        '4HY' => 'E02000970',
        '4JE' => 'E02000972',
        '4JP' => 'E02000970',
        '4JR' => 'E02000977',
        '4JS' => 'E02000977',
        '4JT' => 'E02000970',
        '4JU' => 'E02000970',
        '4LE' => 'E02000972',
        '4LP' => 'E02000977',
        '4LR' => 'E02000977',
        '4LS' => 'E02000970',
        '4LT' => 'E02000970',
        '4LU' => 'E02000970',
        '4LW' => 'E02000977',
        '4LX' => 'E02000970',
        '4LY' => 'E02000970',
        '4LZ' => 'E02000970',
        '4NA' => 'E02000977',
        '4NB' => 'E02000977',
        '4ND' => 'E02000977',
        '4NE' => 'E02000977',
        '4NF' => 'E02000977',
        '4NJ' => 'E02000970',
        '4PA' => 'E02000977',
        '4PB' => 'E02000972',
        '4PS' => 'E02000972',
        '4PT' => 'E02000972',
        '4PU' => 'E02000972',
        '4PX' => 'E02000972',
        '4PY' => 'E02000972',
        '4PZ' => 'E02000972',
        '4QA' => 'E02000972',
        '4QB' => 'E02000972',
        '4QD' => 'E02000972',
        '4QE' => 'E02000972',
        '4QF' => 'E02000972',
        '4QG' => 'E02000972',
        '4QH' => 'E02000972',
        '4QJ' => 'E02000977',
        '4QL' => 'E02000977',
        '4QN' => 'E02000977',
        '4QP' => 'E02000977',
        '4QQ' => 'E02000972',
        '4QR' => 'E02000977',
        '4QS' => 'E02000977',
        '4QT' => 'E02000977',
        '4QU' => 'E02000977',
        '4QW' => 'E02000977',
        '4QX' => 'E02000977',
        '4QY' => 'E02000972',
        '4QZ' => 'E02000972',
        '4RB' => 'E02000972',
        '4SP' => 'E02000970',
        '5AA' => 'E02000972',
        '5AB' => 'E02000972',
        '5AD' => 'E02000970',
        '5AE' => 'E02000970',
        '5AF' => 'E02000970',
        '5AG' => 'E02000972',
        '5AH' => 'E02000972',
        '5AJ' => 'E02000970',
        '5AS' => 'E02000970',
        '5AY' => 'E02000970',
        '5AZ' => 'E02000972',
        '5BA' => 'E02000970',
        '5BB' => 'E02000972',
        '5BD' => 'E02000970',
        '5BE' => 'E02000972',
        '5BF' => 'E02000972',
        '5BG' => 'E02000972',
        '5BH' => 'E02000970',
        '5BJ' => 'E02000970',
        '5BL' => 'E02000970',
        '5BN' => 'E02000970',
        '5BP' => 'E02000972',
        '5BQ' => 'E02000970',
        '5BR' => 'E02000970',
        '5BS' => 'E02000970',
        '5BT' => 'E02000970',
        '5BU' => 'E02000972',
        '5BW' => 'E02000970',
        '5BX' => 'E02000970',
        '5BY' => 'E02000970',
        '5DA' => 'E02000972',
        '5DB' => 'E02000972',
        '5DD' => 'E02000970',
        '5DE' => 'E02000972',
        '5DF' => 'E02000972',
        '5DG' => 'E02000972',
        '5DH' => 'E02000972',
        '5DJ' => 'E02000972',
        '5DL' => 'E02000972',
        '5DN' => 'E02000972',
        '5DP' => 'E02000972',
        '5DQ' => 'E02000972',
        '5DR' => 'E02000972',
        '5DS' => 'E02000972',
        '5DT' => 'E02000972',
        '5DU' => 'E02000972',
        '5DW' => 'E02000972',
        '5DX' => 'E02000972',
        '5DY' => 'E02000970',
        '5DZ' => 'E02000970',
        '5EA' => 'E02000970',
        '5EB' => 'E02000970',
        '5ED' => 'E02000970',
        '5EE' => 'E02000970',
        '5EF' => 'E02000970',
        '5EG' => 'E02000970',
        '5EH' => 'E02000970',
        '5EJ' => 'E02000970',
        '5EL' => 'E02000970',
        '5EP' => 'E02000972',
        '5EQ' => 'E02000970',
        '5ER' => 'E02000972',
        '5ES' => 'E02000972',
        '5ET' => 'E02000972',
        '5EU' => 'E02000972',
        '5EX' => 'E02000972',
        '5EY' => 'E02000972',
        '5EZ' => 'E02000972',
        '5HA' => 'E02000972',
        '5HB' => 'E02000970',
        '5HD' => 'E02000970',
        '5HE' => 'E02000970',
        '5HF' => 'E02000970',
        '5HG' => 'E02000970',
        '5HH' => 'E02000972',
        '5HJ' => 'E02000972',
        '5HL' => 'E02000972',
        '5HN' => 'E02000970',
        '5HQ' => 'E02000970',
        '5HR' => 'E02000972',
        '5HS' => 'E02000972',
        '5HT' => 'E02000972',
        '5HW' => 'E02000970',
        '5HX' => 'E02000970',
        '5JA' => 'E02000972',
        '5JB' => 'E02000972',
        '5JD' => 'E02000972',
        '5JE' => 'E02000970',
        '5JF' => 'E02000972',
        '5JG' => 'E02000972',
        '5JH' => 'E02000970',
        '5JJ' => 'E02000970',
        '5JL' => 'E02000970',
        '5JN' => 'E02000972',
        '5JQ' => 'E02000972',
        '5JT' => 'E02000970',
        '5LA' => 'E02000972',
        '5LB' => 'E02000972',
        '5LD' => 'E02000972',
        '5LE' => 'E02000972',
        '5LF' => 'E02000972',
        '5LG' => 'E02000972',
        '5LH' => 'E02000972',
        '5LL' => 'E02000972',
        '5LP' => 'E02000972',
        '5LQ' => 'E02000972',
        '5LR' => 'E02000970',
        '5LS' => 'E02000970',
        '5LT' => 'E02000972',
        '5LU' => 'E02000972',
        '5LX' => 'E02000972',
        '5LY' => 'E02000972',
        '5LZ' => 'E02000972',
        '5NE' => 'E02000972',
        '5NL' => 'E02000970',
        '5NP' => 'E02000970',
        '5NQ' => 'E02000972',
        '5NR' => 'E02000970',
        '5NS' => 'E02000970',
        '5NT' => 'E02000970',
        '5NU' => 'E02000970',
        '5NW' => 'E02000970',
        '5NX' => 'E02000970',
        '5NY' => 'E02000970',
        '5NZ' => 'E02000970',
        '5PA' => 'E02000970',
        '5PB' => 'E02000970',
        '5PD' => 'E02000970',
        '5PE' => 'E02000970',
        '5PF' => 'E02000970',
        '5PG' => 'E02000970',
        '5PP' => 'E02000970',
        '5PQ' => 'E02000970',
        '5QA' => 'E02000972',
        '5QB' => 'E02000972',
        '5QD' => 'E02000972',
        '5QE' => 'E02000972',
        '5QF' => 'E02000972',
        '5QG' => 'E02000972',
        '5QH' => 'E02000972',
        '5QJ' => 'E02000972',
        '5QL' => 'E02000972',
        '5QN' => 'E02000972',
        '5QP' => 'E02000972',
        '5QQ' => 'E02000972',
        '5QR' => 'E02000972',
        '5QS' => 'E02000972',
        '5QT' => 'E02000972',
        '5QU' => 'E02000972',
        '5QW' => 'E02000972',
        '5QX' => 'E02000972',
        '5QY' => 'E02000972',
        '5QZ' => 'E02000972',
        '5RB' => 'E02000972',
        '5RD' => 'E02000972',
        '5RE' => 'E02000972',
        '5RF' => 'E02000972',
        '5RG' => 'E02000972',
        '5RH' => 'E02000972',
        '5RJ' => 'E02000972',
        '5RL' => 'E02000972',
        '5RN' => 'E02000972',
        '5RP' => 'E02000972',
        '5RQ' => 'E02000972',
        '5RR' => 'E02000972',
        '5RS' => 'E02000972',
        '5RT' => 'E02000972',
        '5RU' => 'E02000972',
        '5RW' => 'E02000972',
        '5RX' => 'E02000972',
        '5RY' => 'E02000972',
        '5RZ' => 'E02000972',
        '5SA' => 'E02000972',
        '5SB' => 'E02000972',
        '5SD' => 'E02000972',
        '5SE' => 'E02000972',
        '5SF' => 'E02000972',
        '5SG' => 'E02000972',
        '5SH' => 'E02000972',
        '5SJ' => 'E02000972',
        '5SL' => 'E02000972',
        '5SN' => 'E02000972',
        '5SP' => 'E02000972',
        '5SQ' => 'E02000972',
        '5SR' => 'E02000972',
        '5SS' => 'E02000972',
        '5ST' => 'E02000972',
        '5SU' => 'E02000972',
        '5SW' => 'E02000972',
        '5SX' => 'E02000972',
        '5SY' => 'E02000972',
        '5SZ' => 'E02000972',
        '6AB' => 'E02000970',
        '6AD' => 'E02000970',
        '6AE' => 'E02000970',
        '6AF' => 'E02000970',
        '6AG' => 'E02000970',
        '6AH' => 'E02000977',
        '6AJ' => 'E02000970',
        '6AL' => 'E02000970',
        '6BA' => 'E02000970',
        '6BZ' => 'E02000970',
        '6DA' => 'E02000970',
        '6DB' => 'E02000970',
        '6DD' => 'E02000970',
        '6DE' => 'E02000970',
        '6DF' => 'E02000970',
        '6DG' => 'E02000970',
        '6DH' => 'E02000970',
        '6DJ' => 'E02000970',
        '6DL' => 'E02000970',
        '6DN' => 'E02000970',
        '6DP' => 'E02000970',
        '6DQ' => 'E02000970',
        '6DT' => 'E02000970',
        '6EA' => 'E02000970',
        '6ED' => 'E02000970',
        '6EE' => 'E02000970',
        '6EF' => 'E02000970',
        '6EG' => 'E02000970',
        '6EJ' => 'E02000970',
        '6EQ' => 'E02000970',
        '6EW' => 'E02000970',
        '6HP' => 'E02000970',
        '6HX' => 'E02000970',
        '6JA' => 'E02000970',
        '6JB' => 'E02000970',
        '6JD' => 'E02000970',
        '6JE' => 'E02000970',
        '6JF' => 'E02000970',
        '6JG' => 'E02000970',
        '6JH' => 'E02000970',
        '6JJ' => 'E02000970',
        '6JL' => 'E02000970',
        '6JN' => 'E02000970',
        '6JP' => 'E02000970',
        '6JQ' => 'E02000970',
        '6JR' => 'E02000970',
        '6JS' => 'E02000970',
        '6JT' => 'E02000970',
        '6JU' => 'E02000970',
        '6JW' => 'E02000970',
        '6JX' => 'E02000970',
        '6JY' => 'E02000970',
        '6JZ' => 'E02000970',
        '6LB' => 'E02000970',
        '6LD' => 'E02000970',
        '6LE' => 'E02000970',
        '6LF' => 'E02000970',
        '6LG' => 'E02000970',
        '6LH' => 'E02000970',
        '6LJ' => 'E02000970',
        '6LL' => 'E02000970',
        '6LN' => 'E02000970',
        '6LP' => 'E02000970',
        '6LQ' => 'E02000970',
        '6LR' => 'E02000970',
        '6LS' => 'E02000970',
        '6LT' => 'E02000970',
        '6LW' => 'E02000970',
        '6LX' => 'E02000970',
        '6LY' => 'E02000970',
        '6NB' => 'E02000970',
        '6ND' => 'E02000970',
        '6NE' => 'E02000970',
        '6NF' => 'E02000970',
        '6NG' => 'E02000970',
        '6NH' => 'E02000970',
        '6NJ' => 'E02000970',
        '6NL' => 'E02000970',
        '6NN' => 'E02000970',
        '6NP' => 'E02000970',
        '6NQ' => 'E02000970',
        '6NR' => 'E02000970',
        '6NS' => 'E02000970',
        '6NT' => 'E02000970',
        '6NU' => 'E02000970',
        '6NW' => 'E02000970',
        '6NX' => 'E02000970',
        '6NY' => 'E02000970',
        '6NZ' => 'E02000970',
        '6PA' => 'E02000970',
        '6PB' => 'E02000970',
        '6PL' => 'E02000970',
        '6PR' => 'E02000970',
        '6RB' => 'E02000970',
        '6RD' => 'E02000970',
        '6RE' => 'E02000970',
        '6RF' => 'E02000970',
        '6RG' => 'E02000970',
        '6RH' => 'E02000970',
        '6RJ' => 'E02000970',
        '6RL' => 'E02000970',
        '6RN' => 'E02000970',
        '6RP' => 'E02000970',
        '6RQ' => 'E02000970',
        '6RR' => 'E02000970',
        '6RS' => 'E02000970',
        '6RT' => 'E02000970',
        '6RU' => 'E02000970',
        '6RW' => 'E02000970',
        '6RX' => 'E02000970',
        '6RY' => 'E02000970',
        '6RZ' => 'E02000970',
        '6SS' => 'E02000970',
        '6TA' => 'E02000970',
        '6TD' => 'E02000970',
        '6TE' => 'E02000970',
        '6TF' => 'E02000970',
        '6TG' => 'E02000970',
        '6TH' => 'E02000970',
        '6TL' => 'E02000970',
        '6TN' => 'E02000970',
        '6TQ' => 'E02000970',
        '6TR' => 'E02000970',
        '6TS' => 'E02000970',
        '6TT' => 'E02000970',
        '6TW' => 'E02000970',
        '6US' => 'E02000970',
        '6WA' => 'E02000970',
        '6WB' => 'E02000970',
        '6WD' => 'E02000970',
        '6WE' => 'E02000970',
        '6WF' => 'E02000970',
        '6WG' => 'E02000970',
        '6WH' => 'E02000970',
        '6WJ' => 'E02000970',
        '6WL' => 'E02000970',
        '6WN' => 'E02000970',
        '6WP' => 'E02000970',
        '6WQ' => 'E02000970',
        '6WS' => 'E02000970',
        '6WT' => 'E02000970',
        '6WU' => 'E02000970',
        '6WW' => 'E02000970',
        '6WX' => 'E02000970',
        '6WY' => 'E02000970',
        '6WZ' => 'E02000970',
        '6ZA' => 'E02000970',
        '6ZB' => 'E02000970',
        '6ZD' => 'E02000970',
        '6ZF' => 'E02000970',
        '6ZG' => 'E02000970',
        '6ZH' => 'E02000970',
        '6ZJ' => 'E02000970',
        '6ZL' => 'E02000970',
        '6ZN' => 'E02000970',
        '6ZP' => 'E02000970',
        '6ZQ' => 'E02000970',
        '6ZR' => 'E02000970',
        '6ZW' => 'E02000970',
        '7AA' => 'E02000970',
        '7AB' => 'E02000970',
        '7AD' => 'E02000970',
        '7AE' => 'E02000970',
        '7AF' => 'E02000970',
        '7AG' => 'E02000970',
        '7AH' => 'E02000970',
        '7AJ' => 'E02000970',
        '7AL' => 'E02000970',
        '7AN' => 'E02000978',
        '7AP' => 'E02000970',
        '7AQ' => 'E02000970',
        '7AR' => 'E02000970',
        '7AS' => 'E02000970',
        '7AT' => 'E02000970',
        '7AU' => 'E02000970',
        '7AW' => 'E02000970',
        '7AX' => 'E02000970',
        '7AY' => 'E02000970',
        '7AZ' => 'E02000970',
        '7BA' => 'E02000970',
        '7BB' => 'E02000970',
        '7BD' => 'E02000970',
        '7DA' => 'E02000970',
        '7DB' => 'E02000970',
        '7DD' => 'E02000970',
        '7DE' => 'E02000970',
        '7DF' => 'E02000970',
        '7DG' => 'E02000970',
        '7DH' => 'E02000970',
        '7DJ' => 'E02000970',
        '7DL' => 'E02000970',
        '7DN' => 'E02000970',
        '7DP' => 'E02000970',
        '7DQ' => 'E02000970',
        '7DR' => 'E02000970',
        '7DS' => 'E02000970',
        '7DT' => 'E02000970',
        '7DU' => 'E02000970',
        '7DW' => 'E02000970',
        '7DY' => 'E02000970',
        '7EB' => 'E02000970',
        '7EE' => 'E02000970',
        '7EF' => 'E02000970',
        '7EG' => 'E02000970',
        '7EH' => 'E02000970',
        '7ER' => 'E02000970',
        '7ET' => 'E02000970',
        '7FB' => 'E02000970',
        '7FD' => 'E02000970',
        '7FE' => 'E02000970',
        '7FF' => 'E02000970',
        '7FG' => 'E02000970',
        '7FH' => 'E02000970',
        '7FJ' => 'E02000970',
        '7FL' => 'E02000970',
        '7FN' => 'E02000970',
        '7FP' => 'E02000970',
        '7FQ' => 'E02000970',
        '7FR' => 'E02000970',
        '7FS' => 'E02000970',
        '7FT' => 'E02000970',
        '7FW' => 'E02000970',
        '7FX' => 'E02000970',
        '7FY' => 'E02000970',
        '7FZ' => 'E02000970',
        '7HA' => 'E02000970',
        '7HB' => 'E02000970',
        '7HD' => 'E02000970',
        '7HE' => 'E02000970',
        '7HF' => 'E02000970',
        '7HG' => 'E02000970',
        '7HH' => 'E02000970',
        '7HJ' => 'E02000970',
        '7HL' => 'E02000970',
        '7HN' => 'E02000970',
        '7HP' => 'E02000970',
        '7HQ' => 'E02000970',
        '7HR' => 'E02000970',
        '7HS' => 'E02000970',
        '7HT' => 'E02000970',
        '7HU' => 'E02000970',
        '7HW' => 'E02000970',
        '7HX' => 'E02000970',
        '7HY' => 'E02000970',
        '7JA' => 'E02000970',
        '7JB' => 'E02000970',
        '7JD' => 'E02000970',
        '7JE' => 'E02000970',
        '7JF' => 'E02000970',
        '7JG' => 'E02000970',
        '7JH' => 'E02000970',
        '7JL' => 'E02000970',
        '7JN' => 'E02000970',
        '7JP' => 'E02000970',
        '7JR' => 'E02000970',
        '7JW' => 'E02000970',
        '7LA' => 'E02000970',
        '7LG' => 'E02000970',
        '7LH' => 'E02000970',
        '7LL' => 'E02000970',
        '7LQ' => 'E02000970',
        '7NA' => 'E02000970',
        '7PB' => 'E02000970',
        '7PD' => 'E02000970',
        '7PE' => 'E02000970',
        '7PF' => 'E02000970',
        '7PG' => 'E02000970',
        '7PH' => 'E02000970',
        '7PJ' => 'E02000970',
        '7PL' => 'E02000970',
        '7PN' => 'E02000970',
        '7PQ' => 'E02000970',
        '7PR' => 'E02000970',
        '7PT' => 'E02000970',
        '7PU' => 'E02000970',
        '7PW' => 'E02000970',
        '7PX' => 'E02000970',
        '7PY' => 'E02000970',
        '7PZ' => 'E02000970',
        '7QA' => 'E02000970',
        '7QB' => 'E02000970',
        '7QD' => 'E02000970',
        '7QE' => 'E02000970',
        '7QF' => 'E02000970',
        '7QG' => 'E02000970',
        '7QH' => 'E02000970',
        '7QJ' => 'E02000970',
        '7QL' => 'E02000970',
        '7QN' => 'E02000970',
        '7QP' => 'E02000970',
        '7QQ' => 'E02000970',
        '7QR' => 'E02000970',
        '7QS' => 'E02000970',
        '7QW' => 'E02000970',
        '7TA' => 'E02000970',
        '7TB' => 'E02000970',
        '7TD' => 'E02000970',
        '7TE' => 'E02000970',
        '7TF' => 'E02000970',
        '7TG' => 'E02000970',
        '7TH' => 'E02000970',
        '7TJ' => 'E02000970',
        '7TL' => 'E02000970',
        '7TN' => 'E02000970',
        '7TP' => 'E02000970',
        '7TQ' => 'E02000970',
        '7TR' => 'E02000970',
        '7TS' => 'E02000970',
        '7TT' => 'E02000970',
        '7TU' => 'E02000970',
        '7TW' => 'E02000970',
        '7TX' => 'E02000970',
        '7TY' => 'E02000977',
        '7YY' => 'E02000575',
        '7YZ' => 'E02000575',
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
