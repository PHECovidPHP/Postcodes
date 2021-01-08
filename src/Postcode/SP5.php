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
final class SP5
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02006675',
        '1AB' => 'E02006675',
        '1AD' => 'E02006675',
        '1AE' => 'E02006675',
        '1AF' => 'E02006675',
        '1AG' => 'E02006675',
        '1AH' => 'E02006675',
        '1AJ' => 'E02006675',
        '1AL' => 'E02006675',
        '1AN' => 'E02006675',
        '1AP' => 'E02006675',
        '1AQ' => 'E02006675',
        '1AR' => 'E02006675',
        '1AS' => 'E02006675',
        '1AT' => 'E02006675',
        '1AU' => 'E02006675',
        '1AW' => 'E02006675',
        '1AX' => 'E02006675',
        '1AY' => 'E02006672',
        '1AZ' => 'E02006672',
        '1BA' => 'E02006675',
        '1BB' => 'E02006670',
        '1BD' => 'E02004822',
        '1BE' => 'E02004822',
        '1BF' => 'E02006675',
        '1BG' => 'E02006675',
        '1BH' => 'E02006675',
        '1BJ' => 'E02006675',
        '1BL' => 'E02006675',
        '1BN' => 'E02006675',
        '1BP' => 'E02004822',
        '1BQ' => 'E02006675',
        '1BS' => 'E02004822',
        '1BT' => 'E02006675',
        '1BU' => 'E02006675',
        '1BW' => 'E02006675',
        '1BX' => 'E02006675',
        '1BY' => 'E02006675',
        '1BZ' => 'E02004822',
        '1DA' => 'E02004822',
        '1DB' => 'E02006675',
        '1DD' => 'E02004822',
        '1DG' => 'E02006675',
        '1DH' => 'E02006675',
        '1DJ' => 'E02006675',
        '1DL' => 'E02006675',
        '1DN' => 'E02006675',
        '1DP' => 'E02006675',
        '1DQ' => 'E02006675',
        '1DR' => 'E02006675',
        '1DS' => 'E02006675',
        '1DT' => 'E02006675',
        '1DU' => 'E02006675',
        '1DX' => 'E02006675',
        '1DY' => 'E02006675',
        '1DZ' => 'E02006675',
        '1EA' => 'E02006675',
        '1EB' => 'E02006675',
        '1ED' => 'E02006675',
        '1EE' => 'E02006675',
        '1EF' => 'E02006675',
        '1EG' => 'E02006675',
        '1EH' => 'E02006675',
        '1EJ' => 'E02006675',
        '1EL' => 'E02006672',
        '1EN' => 'E02006672',
        '1EP' => 'E02006672',
        '1EQ' => 'E02006675',
        '1ER' => 'E02006675',
        '1ES' => 'E02004822',
        '1ET' => 'E02004822',
        '1EU' => 'E02006675',
        '1EW' => 'E02006672',
        '1EX' => 'E02004822',
        '1EY' => 'E02006675',
        '1EZ' => 'E02004822',
        '1GZ' => 'E02004822',
        '1HA' => 'E02004822',
        '1HB' => 'E02004822',
        '1HD' => 'E02004822',
        '1HE' => 'E02004822',
        '1HF' => 'E02004822',
        '1HG' => 'E02004822',
        '1HH' => 'E02004822',
        '1HJ' => 'E02004822',
        '1HN' => 'E02006675',
        '1HP' => 'E02006675',
        '1HQ' => 'E02004822',
        '1HR' => 'E02006675',
        '1HS' => 'E02006675',
        '1HT' => 'E02006675',
        '1HU' => 'E02004822',
        '1HW' => 'E02006675',
        '1JA' => 'E02004822',
        '1JB' => 'E02006675',
        '1JD' => 'E02006675',
        '1JE' => 'E02006675',
        '1JF' => 'E02006675',
        '1JG' => 'E02004822',
        '1JH' => 'E02006675',
        '1JJ' => 'E02006675',
        '1JL' => 'E02004822',
        '1JN' => 'E02004822',
        '1JP' => 'E02004822',
        '1JQ' => 'E02006675',
        '1JT' => 'E02006670',
        '1JW' => 'E02004822',
        '1JX' => 'E02004822',
        '1JY' => 'E02004822',
        '1JZ' => 'E02004822',
        '1LA' => 'E02004822',
        '1LB' => 'E02004822',
        '1LD' => 'E02004822',
        '1LE' => 'E02004822',
        '1LF' => 'E02004822',
        '1LG' => 'E02004822',
        '1LH' => 'E02004822',
        '1LJ' => 'E02004822',
        '1LL' => 'E02004822',
        '1LN' => 'E02004822',
        '1LP' => 'E02004822',
        '1LQ' => 'E02004822',
        '1LR' => 'E02004822',
        '1LS' => 'E02004822',
        '1LT' => 'E02004822',
        '1LU' => 'E02004822',
        '1LW' => 'E02004822',
        '1LX' => 'E02004822',
        '1LY' => 'E02004822',
        '1LZ' => 'E02004822',
        '1NA' => 'E02004822',
        '1NB' => 'E02004822',
        '1NF' => 'E02004822',
        '1NG' => 'E02004822',
        '1NH' => 'E02004822',
        '1NJ' => 'E02004822',
        '1NL' => 'E02004822',
        '1NN' => 'E02004822',
        '1NP' => 'E02004822',
        '1NQ' => 'E02004822',
        '1NR' => 'E02004822',
        '1NS' => 'E02004822',
        '1NT' => 'E02004822',
        '1NU' => 'E02004822',
        '1NW' => 'E02004822',
        '1NX' => 'E02004822',
        '1NY' => 'E02004822',
        '1PA' => 'E02004822',
        '1PB' => 'E02004822',
        '1PD' => 'E02004822',
        '1PF' => 'E02006675',
        '1PH' => 'E02006675',
        '1PJ' => 'E02006675',
        '1PL' => 'E02006675',
        '1PN' => 'E02006675',
        '1PP' => 'E02006675',
        '1PQ' => 'E02006675',
        '1PR' => 'E02006675',
        '1PS' => 'E02006675',
        '1PT' => 'E02006675',
        '1PU' => 'E02006675',
        '1PW' => 'E02006675',
        '1PX' => 'E02006675',
        '1PY' => 'E02006675',
        '1PZ' => 'E02006675',
        '1QA' => 'E02006675',
        '1QB' => 'E02006675',
        '1QD' => 'E02006675',
        '1QE' => 'E02006675',
        '1QF' => 'E02006675',
        '1QG' => 'E02006675',
        '1QH' => 'E02006675',
        '1QJ' => 'E02006675',
        '1QL' => 'E02006675',
        '1QP' => 'E02006675',
        '1QQ' => 'E02006675',
        '1QR' => 'E02006675',
        '1QS' => 'E02006675',
        '1QT' => 'E02006675',
        '1QU' => 'E02006675',
        '1QW' => 'E02006675',
        '1QX' => 'E02006675',
        '1QY' => 'E02006675',
        '1QZ' => 'E02006675',
        '1RB' => 'E02006675',
        '1RD' => 'E02006675',
        '1RE' => 'E02006675',
        '1RF' => 'E02006675',
        '1RG' => 'E02006675',
        '1RH' => 'E02006675',
        '1RJ' => 'E02006675',
        '1RL' => 'E02006675',
        '1RN' => 'E02006675',
        '1RP' => 'E02006675',
        '1RQ' => 'E02006675',
        '1RR' => 'E02006675',
        '1RS' => 'E02006675',
        '1RT' => 'E02006675',
        '1RU' => 'E02006675',
        '1RW' => 'E02006675',
        '1RY' => 'E02006675',
        '1RZ' => 'E02006675',
        '1SA' => 'E02006675',
        '1SB' => 'E02006675',
        '1SD' => 'E02006675',
        '1SE' => 'E02006675',
        '1SF' => 'E02006675',
        '1SG' => 'E02006675',
        '1SH' => 'E02006675',
        '1SJ' => 'E02006675',
        '1SL' => 'E02006675',
        '1SN' => 'E02006675',
        '1SP' => 'E02006675',
        '1SQ' => 'E02006675',
        '1SS' => 'E02006675',
        '1ST' => 'E02006675',
        '1SU' => 'E02006675',
        '1SW' => 'E02006675',
        '1SX' => 'E02006675',
        '1SY' => 'E02006675',
        '1SZ' => 'E02006675',
        '1TA' => 'E02006675',
        '1TB' => 'E02006675',
        '1TD' => 'E02004822',
        '1TH' => 'E02004822',
        '1TL' => 'E02006670',
        '1TN' => 'E02006675',
        '1TP' => 'E02006675',
        '1TR' => 'E02006675',
        '1TS' => 'E02006675',
        '1TT' => 'E02006675',
        '1TU' => 'E02006675',
        '1TW' => 'E02006675',
        '1TX' => 'E02006675',
        '1TY' => 'E02006670',
        '1TZ' => 'E02006670',
        '1UA' => 'E02006670',
        '1UB' => 'E02006670',
        '1UD' => 'E02006670',
        '1UT' => 'E02004822',
        '1UY' => 'E02006670',
        '1UZ' => 'E02006675',
        '1WX' => 'E02006670',
        '1WY' => 'E02006670',
        '1WZ' => 'E02006670',
        '1YA' => 'E02006675',
        '1YD' => 'E02006675',
        '1YG' => 'E02006675',
        '1YQ' => 'E02006670',
        '1YZ' => 'E02006670',
        '1ZG' => 'E02006670',
        '1ZQ' => 'E02006670',
        '1ZR' => 'E02006670',
        '2AA' => 'E02006677',
        '2AB' => 'E02006677',
        '2AD' => 'E02006677',
        '2AE' => 'E02006677',
        '2AF' => 'E02006677',
        '2AG' => 'E02006677',
        '2AH' => 'E02006677',
        '2AJ' => 'E02006677',
        '2AL' => 'E02006677',
        '2AN' => 'E02006677',
        '2AP' => 'E02006677',
        '2AQ' => 'E02006677',
        '2AR' => 'E02006677',
        '2AS' => 'E02006677',
        '2AT' => 'E02006677',
        '2AU' => 'E02006677',
        '2AW' => 'E02006677',
        '2AX' => 'E02006677',
        '2AY' => 'E02006677',
        '2AZ' => 'E02006677',
        '2BA' => 'E02006677',
        '2BB' => 'E02006677',
        '2BD' => 'E02006677',
        '2BE' => 'E02006677',
        '2BF' => 'E02006677',
        '2BG' => 'E02006677',
        '2BH' => 'E02006677',
        '2BJ' => 'E02006677',
        '2BL' => 'E02006677',
        '2BN' => 'E02006677',
        '2BP' => 'E02006677',
        '2BQ' => 'E02006677',
        '2BS' => 'E02006677',
        '2BT' => 'E02006677',
        '2BU' => 'E02006677',
        '2BW' => 'E02006677',
        '2BX' => 'E02006677',
        '2BY' => 'E02006677',
        '2BZ' => 'E02006677',
        '2DA' => 'E02006677',
        '2DB' => 'E02004785',
        '2DD' => 'E02006677',
        '2DE' => 'E02006677',
        '2DF' => 'E02006677',
        '2DG' => 'E02006677',
        '2DH' => 'E02006677',
        '2DJ' => 'E02006675',
        '2DL' => 'E02006677',
        '2DN' => 'E02006677',
        '2DP' => 'E02006677',
        '2DQ' => 'E02006677',
        '2DR' => 'E02006677',
        '2DS' => 'E02006677',
        '2DT' => 'E02006677',
        '2DU' => 'E02006677',
        '2DW' => 'E02006677',
        '2DX' => 'E02006677',
        '2DY' => 'E02006677',
        '2DZ' => 'E02006677',
        '2EA' => 'E02006677',
        '2EB' => 'E02006677',
        '2ED' => 'E02006677',
        '2EE' => 'E02006677',
        '2EF' => 'E02006677',
        '2EG' => 'E02006677',
        '2EH' => 'E02006677',
        '2EJ' => 'E02006677',
        '2EL' => 'E02006677',
        '2EN' => 'E02006677',
        '2EP' => 'E02006677',
        '2EQ' => 'E02006677',
        '2ER' => 'E02006677',
        '2ES' => 'E02006677',
        '2ET' => 'E02006677',
        '2EU' => 'E02006677',
        '2EW' => 'E02006677',
        '2EX' => 'E02006675',
        '2HA' => 'E02006677',
        '2HB' => 'E02006677',
        '2HD' => 'E02006677',
        '2HE' => 'E02006677',
        '2HF' => 'E02006677',
        '2HG' => 'E02006677',
        '2HH' => 'E02006677',
        '2HJ' => 'E02006677',
        '2HL' => 'E02006677',
        '2HN' => 'E02006677',
        '2HP' => 'E02006677',
        '2HQ' => 'E02006677',
        '2HR' => 'E02006677',
        '2HS' => 'E02006677',
        '2HT' => 'E02006677',
        '2HU' => 'E02006677',
        '2HW' => 'E02006677',
        '2HX' => 'E02006677',
        '2HY' => 'E02006677',
        '2HZ' => 'E02006677',
        '2JA' => 'E02006677',
        '2JB' => 'E02006677',
        '2JD' => 'E02006677',
        '2JE' => 'E02006677',
        '2JF' => 'E02006677',
        '2JG' => 'E02006677',
        '2JH' => 'E02006677',
        '2JJ' => 'E02006677',
        '2JL' => 'E02006677',
        '2JN' => 'E02006677',
        '2JP' => 'E02006677',
        '2JQ' => 'E02006677',
        '2JR' => 'E02006677',
        '2JS' => 'E02006677',
        '2JT' => 'E02006677',
        '2JU' => 'E02006677',
        '2JW' => 'E02006677',
        '2JX' => 'E02006675',
        '2JY' => 'E02006677',
        '2JZ' => 'E02006677',
        '2LA' => 'E02006677',
        '2LB' => 'E02006677',
        '2LD' => 'E02006677',
        '2LE' => 'E02006677',
        '2LF' => 'E02006677',
        '2LG' => 'E02006677',
        '2LH' => 'E02006677',
        '2LJ' => 'E02006677',
        '2LL' => 'E02006677',
        '2LN' => 'E02006677',
        '2LP' => 'E02004779',
        '2LQ' => 'E02006677',
        '2LR' => 'E02006677',
        '2LS' => 'E02006677',
        '2LT' => 'E02006677',
        '2LU' => 'E02006677',
        '2LW' => 'E02006677',
        '2LX' => 'E02006677',
        '2LY' => 'E02006677',
        '2LZ' => 'E02006677',
        '2NA' => 'E02006677',
        '2NB' => 'E02006677',
        '2ND' => 'E02006677',
        '2NE' => 'E02006677',
        '2NF' => 'E02006677',
        '2NG' => 'E02006677',
        '2NH' => 'E02006677',
        '2NJ' => 'E02006677',
        '2NL' => 'E02006677',
        '2NN' => 'E02006677',
        '2NP' => 'E02006677',
        '2NQ' => 'E02006677',
        '2NR' => 'E02006677',
        '2NS' => 'E02006677',
        '2NT' => 'E02006677',
        '2NU' => 'E02006677',
        '2NW' => 'E02006677',
        '2NX' => 'E02006677',
        '2NY' => 'E02006677',
        '2NZ' => 'E02006677',
        '2PA' => 'E02006677',
        '2PB' => 'E02006677',
        '2PD' => 'E02006677',
        '2PE' => 'E02006677',
        '2PF' => 'E02006677',
        '2PG' => 'E02006677',
        '2PH' => 'E02006677',
        '2PJ' => 'E02006677',
        '2PL' => 'E02006677',
        '2PN' => 'E02006677',
        '2PP' => 'E02006677',
        '2PQ' => 'E02006677',
        '2PR' => 'E02006677',
        '2PS' => 'E02006677',
        '2PT' => 'E02006677',
        '2PU' => 'E02006677',
        '2PW' => 'E02006677',
        '2PX' => 'E02006677',
        '2PY' => 'E02006677',
        '2PZ' => 'E02006670',
        '2QA' => 'E02006677',
        '2QB' => 'E02006677',
        '2QD' => 'E02006675',
        '2QE' => 'E02006675',
        '2QF' => 'E02006675',
        '2QG' => 'E02006675',
        '2QH' => 'E02006675',
        '2QJ' => 'E02006675',
        '2QL' => 'E02006675',
        '2QN' => 'E02006675',
        '2QP' => 'E02006677',
        '2QQ' => 'E02006675',
        '2QR' => 'E02006675',
        '2QS' => 'E02006675',
        '2QT' => 'E02006675',
        '2QU' => 'E02006675',
        '2QW' => 'E02006675',
        '2QX' => 'E02006675',
        '2QY' => 'E02006675',
        '2QZ' => 'E02006675',
        '2RA' => 'E02006675',
        '2RB' => 'E02006675',
        '2RD' => 'E02006675',
        '2RE' => 'E02006675',
        '2RF' => 'E02006675',
        '2RG' => 'E02006675',
        '2RH' => 'E02006675',
        '2RJ' => 'E02006675',
        '2RL' => 'E02006675',
        '2RN' => 'E02006675',
        '2RP' => 'E02006675',
        '2RQ' => 'E02006675',
        '2RR' => 'E02006675',
        '2RS' => 'E02006675',
        '2RT' => 'E02006675',
        '2RU' => 'E02006675',
        '2RW' => 'E02006675',
        '2RX' => 'E02006675',
        '2SA' => 'E02006675',
        '2SB' => 'E02006675',
        '2SD' => 'E02006675',
        '2SE' => 'E02006675',
        '2SF' => 'E02006675',
        '2SG' => 'E02006675',
        '2SH' => 'E02006675',
        '2SJ' => 'E02006675',
        '2SL' => 'E02006675',
        '2SN' => 'E02006675',
        '2SP' => 'E02006675',
        '2SQ' => 'E02006675',
        '2SR' => 'E02006677',
        '2SS' => 'E02006675',
        '2ST' => 'E02006675',
        '2SU' => 'E02006675',
        '2SW' => 'E02006675',
        '2SX' => 'E02006675',
        '2SY' => 'E02006675',
        '2SZ' => 'E02006675',
        '2TA' => 'E02006675',
        '2TD' => 'E02006675',
        '2TE' => 'E02006675',
        '2TF' => 'E02006670',
        '2TG' => 'E02006675',
        '2TH' => 'E02006677',
        '2TJ' => 'E02006675',
        '2TL' => 'E02006677',
        '2TN' => 'E02006670',
        '2TP' => 'E02006670',
        '2TQ' => 'E02006670',
        '2TR' => 'E02006675',
        '2TS' => 'E02006677',
        '2TT' => 'E02006670',
        '2TU' => 'E02006670',
        '2TW' => 'E02006670',
        '2TX' => 'E02006670',
        '2TY' => 'E02006670',
        '2TZ' => 'E02006670',
        '2UA' => 'E02006670',
        '2UB' => 'E02006670',
        '2UD' => 'E02006670',
        '2WA' => 'E02006670',
        '2WB' => 'E02006670',
        '2WE' => 'E02006670',
        '2WG' => 'E02006677',
        '2WT' => 'E02006677',
        '2WU' => 'E02006677',
        '2WX' => 'E02006670',
        '2WY' => 'E02006670',
        '2WZ' => 'E02006670',
        '2XN' => 'E02006677',
        '2XQ' => 'E02006670',
        '2XY' => 'E02006670',
        '2XZ' => 'E02006670',
        '2YA' => 'E02006675',
        '2YB' => 'E02006677',
        '2YE' => 'E02006675',
        '2YG' => 'E02006670',
        '2YQ' => 'E02006677',
        '2ZJ' => 'E02006670',
        '2ZL' => 'E02006670',
        '2ZN' => 'E02006670',
        '2ZQ' => 'E02006670',
        '3AA' => 'E02006675',
        '3AB' => 'E02006675',
        '3AD' => 'E02006675',
        '3AE' => 'E02006675',
        '3AF' => 'E02006675',
        '3AG' => 'E02006675',
        '3AH' => 'E02006675',
        '3AJ' => 'E02006675',
        '3AL' => 'E02006675',
        '3AN' => 'E02006675',
        '3AP' => 'E02006675',
        '3AQ' => 'E02006675',
        '3AR' => 'E02006675',
        '3AS' => 'E02006675',
        '3AT' => 'E02006675',
        '3AU' => 'E02006675',
        '3AW' => 'E02006675',
        '3AX' => 'E02006675',
        '3AY' => 'E02006675',
        '3AZ' => 'E02006675',
        '3BA' => 'E02006675',
        '3BB' => 'E02006675',
        '3BD' => 'E02006675',
        '3BE' => 'E02006675',
        '3BF' => 'E02006675',
        '3BG' => 'E02006675',
        '3BH' => 'E02006675',
        '3BJ' => 'E02006675',
        '3BL' => 'E02006675',
        '3BN' => 'E02006675',
        '3BP' => 'E02006670',
        '3BQ' => 'E02006675',
        '3BS' => 'E02006672',
        '3BT' => 'E02006672',
        '3BU' => 'E02006672',
        '3BW' => 'E02006675',
        '3BX' => 'E02006672',
        '3BY' => 'E02006672',
        '3BZ' => 'E02006672',
        '3DA' => 'E02006672',
        '3DB' => 'E02006672',
        '3DD' => 'E02006672',
        '3DE' => 'E02006672',
        '3DF' => 'E02006672',
        '3DG' => 'E02006672',
        '3DH' => 'E02006675',
        '3DJ' => 'E02006675',
        '3DL' => 'E02006675',
        '3DN' => 'E02006675',
        '3DP' => 'E02006675',
        '3DQ' => 'E02006672',
        '3DR' => 'E02006675',
        '3DS' => 'E02006675',
        '3DT' => 'E02006675',
        '3DU' => 'E02006675',
        '3DW' => 'E02006675',
        '3DX' => 'E02006675',
        '3DY' => 'E02006675',
        '3DZ' => 'E02006675',
        '3EA' => 'E02006675',
        '3EB' => 'E02006675',
        '3ED' => 'E02006675',
        '3EE' => 'E02006675',
        '3EF' => 'E02006675',
        '3EG' => 'E02006675',
        '3EH' => 'E02006675',
        '3EJ' => 'E02006675',
        '3EL' => 'E02006672',
        '3EN' => 'E02006672',
        '3EP' => 'E02006672',
        '3EQ' => 'E02006675',
        '3ER' => 'E02006672',
        '3ES' => 'E02006672',
        '3ET' => 'E02006672',
        '3EU' => 'E02006671',
        '3EW' => 'E02006672',
        '3EX' => 'E02006675',
        '3EY' => 'E02006672',
        '3EZ' => 'E02006675',
        '3FA' => 'E02006670',
        '3FB' => 'E02006677',
        '3FD' => 'E02006677',
        '3FE' => 'E02006675',
        '3FF' => 'E02006677',
        '3FG' => 'E02006677',
        '3FH' => 'E02006677',
        '3FJ' => 'E02006672',
        '3FL' => 'E02006677',
        '3FN' => 'E02006677',
        '3FP' => 'E02006677',
        '3FQ' => 'E02006677',
        '3FR' => 'E02006677',
        '3FS' => 'E02006677',
        '3FT' => 'E02006675',
        '3FU' => 'E02006675',
        '3FW' => 'E02006675',
        '3HA' => 'E02006672',
        '3HB' => 'E02006675',
        '3HD' => 'E02006675',
        '3HE' => 'E02006675',
        '3HF' => 'E02006675',
        '3HG' => 'E02006677',
        '3HH' => 'E02006677',
        '3HJ' => 'E02006677',
        '3HL' => 'E02006677',
        '3HN' => 'E02006677',
        '3HP' => 'E02006677',
        '3HQ' => 'E02006677',
        '3HR' => 'E02006677',
        '3HS' => 'E02006677',
        '3HT' => 'E02006675',
        '3HU' => 'E02006677',
        '3HW' => 'E02006677',
        '3HX' => 'E02006677',
        '3HY' => 'E02006677',
        '3HZ' => 'E02006677',
        '3JA' => 'E02006677',
        '3JB' => 'E02006677',
        '3JD' => 'E02006677',
        '3JE' => 'E02006677',
        '3JF' => 'E02006677',
        '3JG' => 'E02006677',
        '3JH' => 'E02006677',
        '3JJ' => 'E02006677',
        '3JL' => 'E02006677',
        '3JN' => 'E02006677',
        '3JP' => 'E02006677',
        '3JQ' => 'E02006677',
        '3JR' => 'E02006677',
        '3JS' => 'E02006677',
        '3JT' => 'E02006677',
        '3JU' => 'E02006677',
        '3JW' => 'E02006677',
        '3JX' => 'E02006677',
        '3JY' => 'E02006677',
        '3JZ' => 'E02006677',
        '3LA' => 'E02006677',
        '3LB' => 'E02006677',
        '3LD' => 'E02006677',
        '3LE' => 'E02006677',
        '3LF' => 'E02006677',
        '3LG' => 'E02006677',
        '3LH' => 'E02006677',
        '3LJ' => 'E02006677',
        '3LL' => 'E02006677',
        '3LN' => 'E02006677',
        '3LP' => 'E02006677',
        '3LQ' => 'E02006677',
        '3LT' => 'E02006677',
        '3LU' => 'E02006677',
        '3LW' => 'E02006677',
        '3LX' => 'E02006677',
        '3LY' => 'E02006677',
        '3LZ' => 'E02006677',
        '3NA' => 'E02006677',
        '3NB' => 'E02006677',
        '3ND' => 'E02006677',
        '3NE' => 'E02006677',
        '3NF' => 'E02006677',
        '3NG' => 'E02006677',
        '3NH' => 'E02006677',
        '3NJ' => 'E02006677',
        '3NL' => 'E02006677',
        '3NN' => 'E02006677',
        '3NP' => 'E02006677',
        '3NQ' => 'E02006677',
        '3NR' => 'E02006677',
        '3NS' => 'E02006677',
        '3NT' => 'E02006677',
        '3NU' => 'E02006677',
        '3NW' => 'E02006677',
        '3NX' => 'E02006677',
        '3NY' => 'E02006675',
        '3PA' => 'E02006675',
        '3PD' => 'E02006677',
        '3PE' => 'E02006677',
        '3PF' => 'E02006677',
        '3PG' => 'E02006677',
        '3PH' => 'E02006677',
        '3PJ' => 'E02006677',
        '3PL' => 'E02006677',
        '3PN' => 'E02006677',
        '3PP' => 'E02006677',
        '3PQ' => 'E02006677',
        '3PR' => 'E02006677',
        '3PS' => 'E02006677',
        '3PT' => 'E02006677',
        '3PU' => 'E02006677',
        '3PW' => 'E02006677',
        '3PX' => 'E02006677',
        '3PY' => 'E02006677',
        '3PZ' => 'E02006677',
        '3QA' => 'E02006677',
        '3QB' => 'E02006677',
        '3QD' => 'E02006677',
        '3QE' => 'E02006677',
        '3QF' => 'E02006677',
        '3QG' => 'E02006677',
        '3QH' => 'E02006677',
        '3QJ' => 'E02006677',
        '3QL' => 'E02006677',
        '3QN' => 'E02006677',
        '3QP' => 'E02006677',
        '3QQ' => 'E02006677',
        '3QR' => 'E02006677',
        '3QS' => 'E02006677',
        '3QT' => 'E02006677',
        '3QU' => 'E02006677',
        '3QW' => 'E02006677',
        '3QX' => 'E02006677',
        '3QY' => 'E02006677',
        '3QZ' => 'E02006677',
        '3RA' => 'E02006677',
        '3RB' => 'E02006677',
        '3RE' => 'E02006675',
        '3RF' => 'E02006675',
        '3RG' => 'E02006675',
        '3RH' => 'E02006675',
        '3RJ' => 'E02006675',
        '3RL' => 'E02006675',
        '3RN' => 'E02006675',
        '3RP' => 'E02006675',
        '3RQ' => 'E02006675',
        '3RR' => 'E02006675',
        '3RS' => 'E02006675',
        '3RT' => 'E02006675',
        '3RU' => 'E02006675',
        '3RW' => 'E02006675',
        '3RX' => 'E02006675',
        '3RY' => 'E02006675',
        '3RZ' => 'E02006675',
        '3SA' => 'E02006675',
        '3SB' => 'E02006675',
        '3SD' => 'E02006675',
        '3SE' => 'E02006675',
        '3SF' => 'E02006675',
        '3SG' => 'E02006675',
        '3SH' => 'E02006675',
        '3SJ' => 'E02006675',
        '3SL' => 'E02006675',
        '3SN' => 'E02006675',
        '3SP' => 'E02006675',
        '3SQ' => 'E02006675',
        '3SW' => 'E02006677',
        '3SY' => 'E02006677',
        '3SZ' => 'E02006675',
        '3TA' => 'E02006675',
        '3TB' => 'E02006675',
        '3TD' => 'E02006675',
        '3TE' => 'E02006675',
        '3TF' => 'E02006675',
        '3TG' => 'E02006675',
        '3TH' => 'E02006675',
        '3TJ' => 'E02006675',
        '3TL' => 'E02006675',
        '3TN' => 'E02006675',
        '3TQ' => 'E02006675',
        '3WA' => 'E02006670',
        '3WB' => 'E02006670',
        '3WD' => 'E02006670',
        '3WE' => 'E02006670',
        '3WF' => 'E02006670',
        '3WG' => 'E02006670',
        '3WH' => 'E02006677',
        '3WJ' => 'E02006670',
        '3WL' => 'E02006670',
        '3WN' => 'E02006670',
        '3WY' => 'E02006670',
        '3WZ' => 'E02006670',
        '3XX' => 'E02006670',
        '3XY' => 'E02006670',
        '3XZ' => 'E02006677',
        '3YA' => 'E02006677',
        '3YB' => 'E02006677',
        '3YD' => 'E02006670',
        '3YE' => 'E02006675',
        '3YF' => 'E02006677',
        '3YG' => 'E02006677',
        '3YH' => 'E02006677',
        '3YJ' => 'E02006670',
        '3YL' => 'E02006677',
        '3YN' => 'E02006677',
        '3YQ' => 'E02006670',
        '3ZZ' => 'E02006675',
        '4AA' => 'E02006669',
        '4AB' => 'E02006669',
        '4AD' => 'E02006669',
        '4AE' => 'E02006669',
        '4AF' => 'E02006669',
        '4AG' => 'E02006669',
        '4AH' => 'E02006669',
        '4AJ' => 'E02006669',
        '4AL' => 'E02006669',
        '4AN' => 'E02006669',
        '4AP' => 'E02006669',
        '4AQ' => 'E02006669',
        '4AR' => 'E02006669',
        '4AS' => 'E02006669',
        '4AT' => 'E02006669',
        '4AU' => 'E02006669',
        '4AW' => 'E02006669',
        '4AX' => 'E02006669',
        '4AY' => 'E02006669',
        '4AZ' => 'E02006669',
        '4BA' => 'E02006669',
        '4BB' => 'E02006669',
        '4BD' => 'E02006669',
        '4BE' => 'E02006669',
        '4BG' => 'E02006669',
        '4BH' => 'E02006669',
        '4BP' => 'E02006669',
        '4BQ' => 'E02006669',
        '4BS' => 'E02006669',
        '4BT' => 'E02006669',
        '4BU' => 'E02006669',
        '4BW' => 'E02006669',
        '4BX' => 'E02006669',
        '4BY' => 'E02006669',
        '4BZ' => 'E02006669',
        '4DA' => 'E02006669',
        '4DB' => 'E02006669',
        '4DD' => 'E02006669',
        '4DE' => 'E02006669',
        '4DF' => 'E02006669',
        '4DG' => 'E02006669',
        '4DH' => 'E02006669',
        '4DL' => 'E02006669',
        '4DN' => 'E02006669',
        '4DQ' => 'E02006669',
        '4DR' => 'E02006672',
        '4DS' => 'E02006672',
        '4DT' => 'E02006672',
        '4DU' => 'E02006672',
        '4DX' => 'E02006672',
        '4DY' => 'E02006672',
        '4DZ' => 'E02006672',
        '4EA' => 'E02006672',
        '4EB' => 'E02006672',
        '4ED' => 'E02006672',
        '4EE' => 'E02006672',
        '4EF' => 'E02006672',
        '4EG' => 'E02006672',
        '4EH' => 'E02006672',
        '4EJ' => 'E02006672',
        '4EL' => 'E02006672',
        '4EN' => 'E02006672',
        '4EP' => 'E02006672',
        '4EQ' => 'E02006672',
        '4ER' => 'E02006672',
        '4ES' => 'E02006672',
        '4ET' => 'E02006675',
        '4EU' => 'E02006672',
        '4EW' => 'E02006672',
        '4EX' => 'E02006672',
        '4EY' => 'E02006672',
        '4EZ' => 'E02006677',
        '4HA' => 'E02006677',
        '4HB' => 'E02006672',
        '4HD' => 'E02006677',
        '4HE' => 'E02006677',
        '4HF' => 'E02006677',
        '4HG' => 'E02006677',
        '4HH' => 'E02006677',
        '4HJ' => 'E02006677',
        '4HL' => 'E02006677',
        '4HN' => 'E02006672',
        '4HP' => 'E02006672',
        '4HQ' => 'E02006677',
        '4HR' => 'E02006672',
        '4HS' => 'E02006672',
        '4HT' => 'E02006672',
        '4HW' => 'E02006672',
        '4HX' => 'E02006672',
        '4HY' => 'E02006672',
        '4HZ' => 'E02006672',
        '4JA' => 'E02006672',
        '4JB' => 'E02006672',
        '4JE' => 'E02006672',
        '4JF' => 'E02006672',
        '4JG' => 'E02006672',
        '4JH' => 'E02006672',
        '4JJ' => 'E02006672',
        '4JL' => 'E02006672',
        '4JN' => 'E02006672',
        '4JP' => 'E02006672',
        '4JR' => 'E02006672',
        '4JS' => 'E02006672',
        '4JT' => 'E02006672',
        '4JU' => 'E02006672',
        '4JX' => 'E02006672',
        '4JY' => 'E02006672',
        '4JZ' => 'E02006672',
        '4LA' => 'E02006672',
        '4LB' => 'E02006672',
        '4LD' => 'E02006672',
        '4LE' => 'E02006672',
        '4LF' => 'E02006672',
        '4LG' => 'E02006672',
        '4LH' => 'E02006672',
        '4LJ' => 'E02006672',
        '4LL' => 'E02006669',
        '4LN' => 'E02006669',
        '4LP' => 'E02006672',
        '4LQ' => 'E02006672',
        '4LR' => 'E02006672',
        '4LS' => 'E02006672',
        '4LT' => 'E02006672',
        '4LU' => 'E02006672',
        '4LW' => 'E02006672',
        '4LX' => 'E02006672',
        '4LY' => 'E02006672',
        '4LZ' => 'E02006672',
        '4NA' => 'E02006672',
        '4NB' => 'E02006672',
        '4ND' => 'E02006672',
        '4NE' => 'E02006672',
        '4NF' => 'E02006672',
        '4NG' => 'E02006672',
        '4NH' => 'E02006672',
        '4NJ' => 'E02006672',
        '4NL' => 'E02006672',
        '4NN' => 'E02006672',
        '4NP' => 'E02006672',
        '4NQ' => 'E02006672',
        '4NR' => 'E02006672',
        '4NT' => 'E02006672',
        '4NU' => 'E02006672',
        '4NW' => 'E02006672',
        '4NX' => 'E02006672',
        '4NZ' => 'E02006672',
        '4PA' => 'E02006672',
        '4PD' => 'E02006670',
        '4PE' => 'E02006670',
        '4PG' => 'E02006670',
        '4PH' => 'E02006670',
        '4PJ' => 'E02006670',
        '4PQ' => 'E02006672',
        '4WA' => 'E02006670',
        '4YB' => 'E02006672',
        '4YD' => 'E02006670',
        '4YE' => 'E02006670',
        '4YF' => 'E02006672',
        '4ZQ' => 'E02006670',
        '4ZX' => 'E02006670',
        '5AA' => 'E02004260',
        '5AB' => 'E02004260',
        '5AD' => 'E02004260',
        '5AE' => 'E02004260',
        '5AF' => 'E02004260',
        '5AG' => 'E02004260',
        '5AH' => 'E02004260',
        '5AJ' => 'E02004260',
        '5AL' => 'E02004260',
        '5AN' => 'E02004260',
        '5AP' => 'E02004259',
        '5AQ' => 'E02004260',
        '5AR' => 'E02004260',
        '5AS' => 'E02004243',
        '5AT' => 'E02004243',
        '5AW' => 'E02006676',
        '5AX' => 'E02004259',
        '5AY' => 'E02006669',
        '5AZ' => 'E02006669',
        '5BA' => 'E02006669',
        '5BB' => 'E02006669',
        '5BD' => 'E02006669',
        '5BE' => 'E02006669',
        '5BF' => 'E02004243',
        '5BG' => 'E02006669',
        '5BH' => 'E02006669',
        '5BJ' => 'E02006669',
        '5BL' => 'E02006669',
        '5BN' => 'E02006669',
        '5BP' => 'E02006669',
        '5BQ' => 'E02006669',
        '5BS' => 'E02006669',
        '5BT' => 'E02006669',
        '5BU' => 'E02006669',
        '5BW' => 'E02006669',
        '5BX' => 'E02006669',
        '5BY' => 'E02006669',
        '5BZ' => 'E02006669',
        '5DA' => 'E02006669',
        '5DB' => 'E02006669',
        '5DD' => 'E02006669',
        '5DE' => 'E02006669',
        '5DF' => 'E02004243',
        '5DH' => 'E02006669',
        '5DJ' => 'E02006669',
        '5DL' => 'E02006669',
        '5DN' => 'E02006669',
        '5DP' => 'E02006669',
        '5DQ' => 'E02006669',
        '5DR' => 'E02006669',
        '5DS' => 'E02006669',
        '5DT' => 'E02006669',
        '5DU' => 'E02006669',
        '5DW' => 'E02006669',
        '5DX' => 'E02006669',
        '5DY' => 'E02006669',
        '5DZ' => 'E02006669',
        '5EA' => 'E02006669',
        '5EB' => 'E02006669',
        '5ED' => 'E02006669',
        '5EE' => 'E02006669',
        '5EF' => 'E02006669',
        '5EG' => 'E02006669',
        '5EH' => 'E02006669',
        '5EJ' => 'E02006669',
        '5EL' => 'E02006669',
        '5EN' => 'E02006669',
        '5EP' => 'E02006669',
        '5EQ' => 'E02006669',
        '5ER' => 'E02006670',
        '5ES' => 'E02006669',
        '5ET' => 'E02006669',
        '5EU' => 'E02006669',
        '5EW' => 'E02006669',
        '5EX' => 'E02006669',
        '5EY' => 'E02006669',
        '5EZ' => 'E02006669',
        '5HA' => 'E02006669',
        '5HB' => 'E02006669',
        '5HD' => 'E02006669',
        '5HE' => 'E02006669',
        '5HG' => 'E02006669',
        '5HH' => 'E02006669',
        '5HJ' => 'E02006669',
        '5HL' => 'E02006669',
        '5HN' => 'E02006669',
        '5HP' => 'E02006669',
        '5HQ' => 'E02006669',
        '5HR' => 'E02006669',
        '5HS' => 'E02006669',
        '5HT' => 'E02006669',
        '5HU' => 'E02006669',
        '5HW' => 'E02006669',
        '5HX' => 'E02006669',
        '5JA' => 'E02004243',
        '5JB' => 'E02006669',
        '5JD' => 'E02006669',
        '5JE' => 'E02006669',
        '5JF' => 'E02006669',
        '5JG' => 'E02006669',
        '5JH' => 'E02006669',
        '5JJ' => 'E02006669',
        '5JL' => 'E02006669',
        '5JN' => 'E02006669',
        '5JP' => 'E02006669',
        '5JQ' => 'E02006669',
        '5JR' => 'E02006669',
        '5JS' => 'E02006669',
        '5JT' => 'E02006669',
        '5JU' => 'E02006676',
        '5JW' => 'E02006669',
        '5JX' => 'E02006676',
        '5JY' => 'E02006676',
        '5JZ' => 'E02006676',
        '5LA' => 'E02006676',
        '5LB' => 'E02006676',
        '5LD' => 'E02006676',
        '5LE' => 'E02006676',
        '5LF' => 'E02006676',
        '5LG' => 'E02006676',
        '5LH' => 'E02006676',
        '5LJ' => 'E02006676',
        '5LL' => 'E02006676',
        '5LN' => 'E02006676',
        '5LP' => 'E02006669',
        '5LQ' => 'E02006676',
        '5LR' => 'E02006669',
        '5LS' => 'E02006669',
        '5LT' => 'E02006669',
        '5LU' => 'E02006669',
        '5LW' => 'E02006669',
        '5LX' => 'E02006669',
        '5LY' => 'E02006676',
        '5LZ' => 'E02006670',
        '5NA' => 'E02004243',
        '5ND' => 'E02004243',
        '5NF' => 'E02004243',
        '5NG' => 'E02004243',
        '5NH' => 'E02004243',
        '5NJ' => 'E02004243',
        '5NL' => 'E02004243',
        '5NN' => 'E02004243',
        '5NP' => 'E02004243',
        '5NQ' => 'E02004243',
        '5NR' => 'E02004243',
        '5NS' => 'E02004243',
        '5NT' => 'E02004243',
        '5NU' => 'E02004243',
        '5NW' => 'E02004243',
        '5NX' => 'E02004243',
        '5NY' => 'E02004243',
        '5NZ' => 'E02004243',
        '5PA' => 'E02004243',
        '5PB' => 'E02004243',
        '5PD' => 'E02004243',
        '5PE' => 'E02006669',
        '5PF' => 'E02004243',
        '5PG' => 'E02004243',
        '5PH' => 'E02004243',
        '5PJ' => 'E02004243',
        '5PL' => 'E02004243',
        '5PN' => 'E02004243',
        '5PP' => 'E02006676',
        '5PQ' => 'E02004243',
        '5PR' => 'E02006676',
        '5PS' => 'E02006676',
        '5PT' => 'E02006676',
        '5PU' => 'E02006676',
        '5PW' => 'E02006676',
        '5PX' => 'E02006676',
        '5PY' => 'E02004260',
        '5PZ' => 'E02006676',
        '5QA' => 'E02006676',
        '5QB' => 'E02006676',
        '5QD' => 'E02006676',
        '5QE' => 'E02006676',
        '5QF' => 'E02006676',
        '5QG' => 'E02006676',
        '5QH' => 'E02006669',
        '5QJ' => 'E02004243',
        '5QL' => 'E02004243',
        '5QN' => 'E02004243',
        '5QP' => 'E02004243',
        '5QQ' => 'E02004243',
        '5QR' => 'E02004243',
        '5QS' => 'E02004243',
        '5QT' => 'E02004243',
        '5QU' => 'E02004243',
        '5QW' => 'E02006676',
        '5QX' => 'E02004243',
        '5QY' => 'E02004243',
        '5QZ' => 'E02004243',
        '5RA' => 'E02004243',
        '5RB' => 'E02006669',
        '5RD' => 'E02006669',
        '5RE' => 'E02006669',
        '5RF' => 'E02006669',
        '5RG' => 'E02006669',
        '5RH' => 'E02004243',
        '5RJ' => 'E02004243',
        '5RL' => 'E02004779',
        '5RN' => 'E02004243',
        '5RP' => 'E02004243',
        '5RQ' => 'E02004243',
        '5RR' => 'E02004243',
        '5RS' => 'E02004243',
        '5RT' => 'E02004243',
        '5RU' => 'E02004243',
        '5RW' => 'E02004243',
        '5RX' => 'E02004243',
        '5RY' => 'E02004247',
        '5RZ' => 'E02004243',
        '5SA' => 'E02004243',
        '5SB' => 'E02004243',
        '5SD' => 'E02004243',
        '5SE' => 'E02004243',
        '5SF' => 'E02006670',
        '5SG' => 'E02004243',
        '5SH' => 'E02004243',
        '5SJ' => 'E02006669',
        '5SL' => 'E02006669',
        '5SN' => 'E02006670',
        '5SP' => 'E02006670',
        '5SQ' => 'E02004243',
        '5SR' => 'E02006670',
        '5SS' => 'E02006670',
        '5ST' => 'E02006669',
        '5SU' => 'E02004243',
        '5SW' => 'E02006670',
        '5SX' => 'E02006669',
        '5SY' => 'E02004243',
        '5SZ' => 'E02006670',
        '5WA' => 'E02006670',
        '5WX' => 'E02006670',
        '5WY' => 'E02006670',
        '5WZ' => 'E02006670',
        '5YB' => 'E02004243',
        '5ZG' => 'E02006670',
        '5ZQ' => 'E02006670',
        '5ZX' => 'E02006669',
        '5ZZ' => 'E02006669',
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
