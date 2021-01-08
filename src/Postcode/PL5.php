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
final class PL5
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02003130',
        '1AB' => 'E02003130',
        '1AD' => 'E02003130',
        '1AE' => 'E02003135',
        '1AF' => 'E02003130',
        '1AG' => 'E02003130',
        '1AH' => 'E02003130',
        '1AJ' => 'E02003130',
        '1AL' => 'E02003130',
        '1AN' => 'E02003130',
        '1AP' => 'E02003130',
        '1AQ' => 'E02003130',
        '1AR' => 'E02003130',
        '1AS' => 'E02003130',
        '1AT' => 'E02003135',
        '1AU' => 'E02003130',
        '1AW' => 'E02003130',
        '1AX' => 'E02003135',
        '1AY' => 'E02003135',
        '1AZ' => 'E02003130',
        '1BA' => 'E02003135',
        '1BB' => 'E02003130',
        '1BD' => 'E02003130',
        '1BE' => 'E02003130',
        '1BG' => 'E02003130',
        '1BH' => 'E02003135',
        '1BJ' => 'E02003135',
        '1BL' => 'E02003135',
        '1BN' => 'E02003135',
        '1BP' => 'E02003135',
        '1BQ' => 'E02003130',
        '1BR' => 'E02003135',
        '1BS' => 'E02003135',
        '1BT' => 'E02003135',
        '1BU' => 'E02003135',
        '1BW' => 'E02003135',
        '1BX' => 'E02003135',
        '1BY' => 'E02003135',
        '1BZ' => 'E02003135',
        '1DA' => 'E02003130',
        '1DB' => 'E02003130',
        '1DD' => 'E02003130',
        '1DE' => 'E02003135',
        '1DF' => 'E02003135',
        '1DG' => 'E02003135',
        '1DH' => 'E02003135',
        '1DJ' => 'E02003130',
        '1DL' => 'E02003130',
        '1DN' => 'E02003130',
        '1DP' => 'E02003135',
        '1DQ' => 'E02003135',
        '1DR' => 'E02003130',
        '1DS' => 'E02003135',
        '1DT' => 'E02003135',
        '1DU' => 'E02003135',
        '1DW' => 'E02003130',
        '1DX' => 'E02003135',
        '1DY' => 'E02003135',
        '1DZ' => 'E02003130',
        '1EA' => 'E02003130',
        '1EB' => 'E02003130',
        '1ED' => 'E02003130',
        '1EE' => 'E02003130',
        '1EF' => 'E02003130',
        '1EG' => 'E02003130',
        '1EH' => 'E02003130',
        '1EJ' => 'E02003130',
        '1EL' => 'E02003130',
        '1EN' => 'E02003130',
        '1EP' => 'E02003130',
        '1EQ' => 'E02003130',
        '1ER' => 'E02003135',
        '1ES' => 'E02003135',
        '1ET' => 'E02003135',
        '1EU' => 'E02003130',
        '1EW' => 'E02003130',
        '1EX' => 'E02003135',
        '1EY' => 'E02003135',
        '1EZ' => 'E02003130',
        '1FA' => 'E02003130',
        '1FB' => 'E02003130',
        '1FD' => 'E02003135',
        '1FE' => 'E02003135',
        '1FF' => 'E02003130',
        '1FG' => 'E02003130',
        '1FH' => 'E02003135',
        '1FJ' => 'E02003130',
        '1FL' => 'E02003135',
        '1FN' => 'E02003130',
        '1FP' => 'E02003130',
        '1GZ' => 'E02003135',
        '1HA' => 'E02003130',
        '1HB' => 'E02003130',
        '1HD' => 'E02003130',
        '1HE' => 'E02003130',
        '1HF' => 'E02003130',
        '1HG' => 'E02003130',
        '1HH' => 'E02003130',
        '1HJ' => 'E02003130',
        '1HL' => 'E02003130',
        '1HN' => 'E02003130',
        '1HP' => 'E02003135',
        '1HQ' => 'E02003130',
        '1HR' => 'E02003130',
        '1HS' => 'E02003130',
        '1HT' => 'E02003130',
        '1HU' => 'E02003130',
        '1HW' => 'E02003135',
        '1HX' => 'E02003130',
        '1HY' => 'E02003130',
        '1HZ' => 'E02003130',
        '1JA' => 'E02003130',
        '1JB' => 'E02003135',
        '1JE' => 'E02003130',
        '1JG' => 'E02003130',
        '1JH' => 'E02003130',
        '1JJ' => 'E02003130',
        '1JL' => 'E02003130',
        '1JN' => 'E02003130',
        '1JP' => 'E02003130',
        '1JQ' => 'E02003130',
        '1JR' => 'E02003130',
        '1JS' => 'E02003130',
        '1JT' => 'E02003130',
        '1JU' => 'E02003130',
        '1JW' => 'E02003130',
        '1JX' => 'E02003130',
        '1JY' => 'E02003130',
        '1JZ' => 'E02003130',
        '1LA' => 'E02003130',
        '1LB' => 'E02003130',
        '1LD' => 'E02003130',
        '1LE' => 'E02003130',
        '1LF' => 'E02003130',
        '1LG' => 'E02003130',
        '1LH' => 'E02003130',
        '1LJ' => 'E02003130',
        '1LP' => 'E02003130',
        '1LQ' => 'E02003130',
        '1LR' => 'E02003130',
        '1LS' => 'E02003130',
        '1LT' => 'E02003130',
        '1LU' => 'E02003130',
        '1LX' => 'E02003130',
        '1LY' => 'E02003130',
        '1LZ' => 'E02003130',
        '1NA' => 'E02003130',
        '1NB' => 'E02003130',
        '1ND' => 'E02003130',
        '1NE' => 'E02003130',
        '1NF' => 'E02003130',
        '1NG' => 'E02003130',
        '1NH' => 'E02003130',
        '1NJ' => 'E02003130',
        '1NL' => 'E02003130',
        '1NN' => 'E02003130',
        '1NP' => 'E02003130',
        '1NQ' => 'E02003130',
        '1NR' => 'E02003130',
        '1NS' => 'E02003130',
        '1NT' => 'E02003130',
        '1NU' => 'E02003130',
        '1NW' => 'E02003130',
        '1NX' => 'E02003130',
        '1NY' => 'E02003130',
        '1NZ' => 'E02003130',
        '1PA' => 'E02003130',
        '1PB' => 'E02003130',
        '1PD' => 'E02003130',
        '1PE' => 'E02003130',
        '1PF' => 'E02003130',
        '1PG' => 'E02003130',
        '1PH' => 'E02003130',
        '1PJ' => 'E02003130',
        '1PL' => 'E02003130',
        '1PP' => 'E02003130',
        '1PQ' => 'E02003130',
        '1PR' => 'E02003130',
        '1PS' => 'E02003130',
        '1PT' => 'E02003130',
        '1PU' => 'E02003130',
        '1PX' => 'E02003130',
        '1PY' => 'E02003130',
        '1PZ' => 'E02003130',
        '1QA' => 'E02003130',
        '1QB' => 'E02003130',
        '1QD' => 'E02003130',
        '1QE' => 'E02003130',
        '1QF' => 'E02003130',
        '1QG' => 'E02003130',
        '1QH' => 'E02003130',
        '1QJ' => 'E02003130',
        '1QL' => 'E02003130',
        '1QN' => 'E02003130',
        '1QP' => 'E02003130',
        '1QQ' => 'E02003130',
        '1QS' => 'E02003127',
        '1QT' => 'E02003127',
        '1QU' => 'E02003127',
        '1QY' => 'E02003127',
        '1QZ' => 'E02003135',
        '1RA' => 'E02003130',
        '1RB' => 'E02003130',
        '1RD' => 'E02003130',
        '1RE' => 'E02003130',
        '1RF' => 'E02003130',
        '1RG' => 'E02003130',
        '1RH' => 'E02003130',
        '1RJ' => 'E02003130',
        '1RL' => 'E02003130',
        '1RN' => 'E02003130',
        '1RP' => 'E02003130',
        '1RQ' => 'E02003130',
        '1RR' => 'E02003130',
        '1RS' => 'E02003130',
        '1RT' => 'E02003130',
        '1RW' => 'E02003130',
        '1RX' => 'E02003130',
        '1RY' => 'E02003130',
        '1RZ' => 'E02003127',
        '1SA' => 'E02003127',
        '1SB' => 'E02003127',
        '1SD' => 'E02003125',
        '1SE' => 'E02003130',
        '1SF' => 'E02003130',
        '1SH' => 'E02003127',
        '1SJ' => 'E02003130',
        '1SL' => 'E02003130',
        '1SN' => 'E02003130',
        '1SP' => 'E02003127',
        '1SR' => 'E02003130',
        '1SS' => 'E02003130',
        '1SW' => 'E02003130',
        '1TA' => 'E02003130',
        '1TB' => 'E02003130',
        '1TD' => 'E02003130',
        '1TE' => 'E02003130',
        '1TF' => 'E02003130',
        '1TG' => 'E02003130',
        '1TH' => 'E02003130',
        '1TJ' => 'E02003130',
        '1TL' => 'E02003130',
        '1TN' => 'E02003130',
        '1TP' => 'E02003130',
        '1TQ' => 'E02003130',
        '1TR' => 'E02003130',
        '1TS' => 'E02003130',
        '1TT' => 'E02003130',
        '1TU' => 'E02003130',
        '1TW' => 'E02003130',
        '1TX' => 'E02003130',
        '1TY' => 'E02003130',
        '1TZ' => 'E02003130',
        '1UA' => 'E02003130',
        '1UB' => 'E02003130',
        '1UD' => 'E02003130',
        '1UH' => 'E02003130',
        '1UJ' => 'E02003130',
        '1UL' => 'E02003130',
        '1UN' => 'E02003130',
        '1UP' => 'E02003130',
        '1UQ' => 'E02003130',
        '1UR' => 'E02003130',
        '1UT' => 'E02003130',
        '1UU' => 'E02003130',
        '1UW' => 'E02003130',
        '1UX' => 'E02003130',
        '1WT' => 'E02003127',
        '1WU' => 'E02003127',
        '1WW' => 'E02003127',
        '1WY' => 'E02003127',
        '1WZ' => 'E02003127',
        '1XA' => 'E02003130',
        '1XN' => 'E02003127',
        '1YA' => 'E02003127',
        '1YB' => 'E02003130',
        '1YN' => 'E02003130',
        '1YP' => 'E02003130',
        '1YR' => 'E02003130',
        '1YS' => 'E02003130',
        '1YT' => 'E02003130',
        '1YU' => 'E02003130',
        '1YW' => 'E02003127',
        '1YX' => 'E02003130',
        '1YY' => 'E02003130',
        '1YZ' => 'E02003130',
        '1ZN' => 'E02003127',
        '1ZQ' => 'E02003127',
        '2AA' => 'E02003134',
        '2AB' => 'E02003127',
        '2AD' => 'E02003127',
        '2AE' => 'E02003127',
        '2AF' => 'E02003127',
        '2AG' => 'E02003127',
        '2AH' => 'E02003127',
        '2AJ' => 'E02003127',
        '2AL' => 'E02003127',
        '2AN' => 'E02003130',
        '2AP' => 'E02003130',
        '2AQ' => 'E02003127',
        '2AR' => 'E02003130',
        '2AS' => 'E02003130',
        '2AT' => 'E02003130',
        '2AU' => 'E02003130',
        '2AW' => 'E02003130',
        '2AX' => 'E02003130',
        '2AY' => 'E02003130',
        '2AZ' => 'E02003130',
        '2BA' => 'E02003127',
        '2BB' => 'E02003127',
        '2BD' => 'E02003125',
        '2BE' => 'E02003125',
        '2BG' => 'E02003125',
        '2BH' => 'E02003125',
        '2BJ' => 'E02003127',
        '2BL' => 'E02003127',
        '2BN' => 'E02003127',
        '2BP' => 'E02003127',
        '2BQ' => 'E02003125',
        '2BS' => 'E02003127',
        '2BT' => 'E02003127',
        '2BU' => 'E02003127',
        '2BW' => 'E02003127',
        '2BX' => 'E02003130',
        '2BY' => 'E02003130',
        '2BZ' => 'E02003130',
        '2DA' => 'E02003127',
        '2DB' => 'E02003125',
        '2DD' => 'E02003125',
        '2DE' => 'E02003125',
        '2DF' => 'E02003125',
        '2DG' => 'E02003127',
        '2DH' => 'E02003127',
        '2DJ' => 'E02003127',
        '2DL' => 'E02003125',
        '2DN' => 'E02003125',
        '2DP' => 'E02003127',
        '2DQ' => 'E02003127',
        '2DR' => 'E02003127',
        '2DS' => 'E02003127',
        '2DT' => 'E02003127',
        '2DU' => 'E02003127',
        '2DW' => 'E02003127',
        '2DX' => 'E02003127',
        '2DY' => 'E02003127',
        '2DZ' => 'E02003127',
        '2EA' => 'E02003127',
        '2EB' => 'E02003127',
        '2ED' => 'E02003127',
        '2EE' => 'E02003127',
        '2EF' => 'E02003127',
        '2EG' => 'E02003127',
        '2EH' => 'E02003127',
        '2EJ' => 'E02003127',
        '2EL' => 'E02003127',
        '2EN' => 'E02003127',
        '2EQ' => 'E02003130',
        '2ES' => 'E02003127',
        '2ET' => 'E02003125',
        '2EU' => 'E02003127',
        '2EW' => 'E02003127',
        '2EX' => 'E02003125',
        '2EY' => 'E02003125',
        '2EZ' => 'E02003127',
        '2HA' => 'E02003127',
        '2HB' => 'E02003127',
        '2HG' => 'E02003127',
        '2HH' => 'E02003125',
        '2HJ' => 'E02003125',
        '2HL' => 'E02003125',
        '2HN' => 'E02003125',
        '2HP' => 'E02003125',
        '2HQ' => 'E02003127',
        '2HX' => 'E02003127',
        '2JP' => 'E02003127',
        '2JR' => 'E02003127',
        '2JS' => 'E02003127',
        '2JT' => 'E02003127',
        '2JU' => 'E02003127',
        '2JX' => 'E02003127',
        '2JZ' => 'E02003127',
        '2LA' => 'E02003127',
        '2LB' => 'E02003127',
        '2LD' => 'E02003127',
        '2LG' => 'E02003127',
        '2LH' => 'E02003127',
        '2LJ' => 'E02003127',
        '2LL' => 'E02003127',
        '2LN' => 'E02003127',
        '2LP' => 'E02003127',
        '2LQ' => 'E02003127',
        '2LR' => 'E02003127',
        '2LS' => 'E02003127',
        '2LT' => 'E02003127',
        '2LU' => 'E02003127',
        '2LW' => 'E02003127',
        '2LX' => 'E02003127',
        '2LY' => 'E02003127',
        '2LZ' => 'E02003127',
        '2NA' => 'E02003127',
        '2NB' => 'E02003127',
        '2ND' => 'E02003127',
        '2NE' => 'E02003127',
        '2NJ' => 'E02003127',
        '2NL' => 'E02003127',
        '2NN' => 'E02003125',
        '2NP' => 'E02003125',
        '2NR' => 'E02003127',
        '2NS' => 'E02003127',
        '2NT' => 'E02003127',
        '2NU' => 'E02003127',
        '2NW' => 'E02003127',
        '2NX' => 'E02003127',
        '2NY' => 'E02003127',
        '2NZ' => 'E02003127',
        '2PA' => 'E02003125',
        '2PE' => 'E02003127',
        '2PF' => 'E02003127',
        '2PG' => 'E02003125',
        '2PH' => 'E02003125',
        '2PJ' => 'E02003125',
        '2PL' => 'E02003127',
        '2PN' => 'E02003125',
        '2PP' => 'E02003125',
        '2PQ' => 'E02003125',
        '2PR' => 'E02003125',
        '2PS' => 'E02003125',
        '2PT' => 'E02003125',
        '2PU' => 'E02003125',
        '2PW' => 'E02003125',
        '2PX' => 'E02003125',
        '2PY' => 'E02003125',
        '2PZ' => 'E02003125',
        '2QA' => 'E02003125',
        '2QB' => 'E02003125',
        '2QD' => 'E02003125',
        '2QE' => 'E02003125',
        '2QF' => 'E02003125',
        '2QG' => 'E02003125',
        '2QH' => 'E02003125',
        '2QJ' => 'E02003125',
        '2QL' => 'E02003125',
        '2QN' => 'E02003125',
        '2QQ' => 'E02003125',
        '2QS' => 'E02003127',
        '2QT' => 'E02003127',
        '2QU' => 'E02003125',
        '2QX' => 'E02003125',
        '2QY' => 'E02003125',
        '2QZ' => 'E02003125',
        '2RA' => 'E02003125',
        '2RB' => 'E02003125',
        '2RD' => 'E02003125',
        '2RE' => 'E02003125',
        '2RF' => 'E02003125',
        '2RG' => 'E02003125',
        '2RH' => 'E02003125',
        '2RJ' => 'E02003125',
        '2RL' => 'E02003125',
        '2RN' => 'E02003125',
        '2RP' => 'E02003125',
        '2RQ' => 'E02003125',
        '2RR' => 'E02003125',
        '2RS' => 'E02003125',
        '2RT' => 'E02003125',
        '2RU' => 'E02003125',
        '2RW' => 'E02003125',
        '2RX' => 'E02003125',
        '2RY' => 'E02003125',
        '2RZ' => 'E02003125',
        '2SA' => 'E02003125',
        '2SB' => 'E02003125',
        '2SD' => 'E02003125',
        '2SE' => 'E02003125',
        '2SF' => 'E02003125',
        '2SG' => 'E02003125',
        '2SH' => 'E02003125',
        '2SJ' => 'E02003125',
        '2SL' => 'E02003125',
        '2SN' => 'E02003125',
        '2SP' => 'E02003125',
        '2SQ' => 'E02003125',
        '2SR' => 'E02003125',
        '2SS' => 'E02003125',
        '2ST' => 'E02003125',
        '2SU' => 'E02003125',
        '2SW' => 'E02003125',
        '2SX' => 'E02003125',
        '2SY' => 'E02003125',
        '2SZ' => 'E02003125',
        '2TA' => 'E02003125',
        '2TB' => 'E02003125',
        '2TD' => 'E02003125',
        '2TE' => 'E02003125',
        '2TF' => 'E02003125',
        '2TG' => 'E02003125',
        '2TH' => 'E02003125',
        '2TJ' => 'E02003125',
        '2TL' => 'E02003125',
        '2TN' => 'E02003125',
        '2TP' => 'E02003125',
        '2TQ' => 'E02003125',
        '2TR' => 'E02003125',
        '2TS' => 'E02003125',
        '2TT' => 'E02003125',
        '2TU' => 'E02003125',
        '2TX' => 'E02003125',
        '2TY' => 'E02003125',
        '2UA' => 'E02003127',
        '2UB' => 'E02003127',
        '2UD' => 'E02003127',
        '2UE' => 'E02003130',
        '2WA' => 'E02003127',
        '2WD' => 'E02003127',
        '2WW' => 'E02003127',
        '2WX' => 'E02003127',
        '2WY' => 'E02003127',
        '2WZ' => 'E02003127',
        '2XL' => 'E02003127',
        '2XZ' => 'E02003127',
        '2YA' => 'E02003127',
        '2YB' => 'E02003127',
        '2YD' => 'E02003127',
        '2YE' => 'E02003127',
        '2YF' => 'E02003125',
        '2YG' => 'E02003125',
        '2YH' => 'E02003125',
        '2YJ' => 'E02003127',
        '2YN' => 'E02003127',
        '2YQ' => 'E02003125',
        '2YS' => 'E02003127',
        '2YT' => 'E02003127',
        '2YU' => 'E02003125',
        '2YW' => 'E02003127',
        '2ZN' => 'E02003127',
        '3AA' => 'E02003129',
        '3AB' => 'E02003129',
        '3AD' => 'E02003129',
        '3AF' => 'E02003129',
        '3AG' => 'E02003129',
        '3AH' => 'E02003129',
        '3AJ' => 'E02003129',
        '3AL' => 'E02003129',
        '3AN' => 'E02003129',
        '3AP' => 'E02003129',
        '3AQ' => 'E02003128',
        '3AR' => 'E02003129',
        '3AS' => 'E02003129',
        '3AT' => 'E02003129',
        '3AU' => 'E02003129',
        '3AW' => 'E02003129',
        '3AX' => 'E02003129',
        '3AY' => 'E02003129',
        '3AZ' => 'E02003129',
        '3BA' => 'E02003129',
        '3BB' => 'E02003128',
        '3BD' => 'E02003129',
        '3BE' => 'E02003129',
        '3BG' => 'E02003129',
        '3BH' => 'E02003128',
        '3BJ' => 'E02003129',
        '3BL' => 'E02003128',
        '3BN' => 'E02003128',
        '3BP' => 'E02003128',
        '3BQ' => 'E02003128',
        '3BR' => 'E02003128',
        '3BS' => 'E02003124',
        '3BT' => 'E02003124',
        '3BU' => 'E02003124',
        '3BW' => 'E02003129',
        '3BX' => 'E02003129',
        '3BY' => 'E02003129',
        '3BZ' => 'E02003128',
        '3DA' => 'E02003129',
        '3DB' => 'E02003128',
        '3DD' => 'E02003128',
        '3DE' => 'E02003128',
        '3DF' => 'E02003128',
        '3DG' => 'E02003129',
        '3DH' => 'E02003129',
        '3DJ' => 'E02003129',
        '3DL' => 'E02003129',
        '3DN' => 'E02003129',
        '3DP' => 'E02003129',
        '3DQ' => 'E02003129',
        '3DR' => 'E02003129',
        '3DS' => 'E02003129',
        '3DT' => 'E02003129',
        '3DU' => 'E02003129',
        '3DW' => 'E02003129',
        '3DX' => 'E02003128',
        '3DY' => 'E02003129',
        '3DZ' => 'E02003128',
        '3EA' => 'E02003128',
        '3EB' => 'E02003128',
        '3ED' => 'E02003128',
        '3EE' => 'E02003128',
        '3EF' => 'E02003128',
        '3EG' => 'E02003128',
        '3EH' => 'E02003128',
        '3EJ' => 'E02003128',
        '3EL' => 'E02003128',
        '3EN' => 'E02003128',
        '3EP' => 'E02003128',
        '3EQ' => 'E02003128',
        '3ER' => 'E02003128',
        '3ES' => 'E02003128',
        '3ET' => 'E02003128',
        '3EU' => 'E02003128',
        '3EW' => 'E02003128',
        '3EX' => 'E02003128',
        '3EY' => 'E02003128',
        '3EZ' => 'E02003128',
        '3FA' => 'E02003124',
        '3FB' => 'E02003124',
        '3FD' => 'E02003128',
        '3FE' => 'E02003128',
        '3FF' => 'E02003128',
        '3FG' => 'E02003128',
        '3FJ' => 'E02003128',
        '3FL' => 'E02003128',
        '3FN' => 'E02003128',
        '3FP' => 'E02003128',
        '3FQ' => 'E02003128',
        '3HA' => 'E02003128',
        '3HB' => 'E02003128',
        '3HD' => 'E02003128',
        '3HE' => 'E02003128',
        '3HF' => 'E02003128',
        '3HG' => 'E02003128',
        '3HH' => 'E02003128',
        '3HJ' => 'E02003128',
        '3HL' => 'E02003128',
        '3HN' => 'E02003128',
        '3HP' => 'E02003128',
        '3HQ' => 'E02003128',
        '3HR' => 'E02003128',
        '3HS' => 'E02003128',
        '3HT' => 'E02003128',
        '3HU' => 'E02003128',
        '3HW' => 'E02003128',
        '3HX' => 'E02003128',
        '3HY' => 'E02003128',
        '3HZ' => 'E02003128',
        '3JA' => 'E02003128',
        '3JB' => 'E02003129',
        '3JD' => 'E02003128',
        '3JE' => 'E02003128',
        '3JF' => 'E02003128',
        '3JG' => 'E02003128',
        '3JH' => 'E02003128',
        '3JJ' => 'E02003128',
        '3JL' => 'E02003128',
        '3JN' => 'E02003128',
        '3JP' => 'E02003128',
        '3JQ' => 'E02003128',
        '3JR' => 'E02003127',
        '3JS' => 'E02003128',
        '3JT' => 'E02003128',
        '3JU' => 'E02003128',
        '3JW' => 'E02003128',
        '3JX' => 'E02003128',
        '3JY' => 'E02003128',
        '3JZ' => 'E02003134',
        '3LA' => 'E02003128',
        '3LB' => 'E02003128',
        '3LD' => 'E02003128',
        '3LE' => 'E02003128',
        '3LF' => 'E02003128',
        '3LG' => 'E02003128',
        '3LH' => 'E02003128',
        '3LJ' => 'E02003128',
        '3LL' => 'E02003128',
        '3LN' => 'E02003132',
        '3LP' => 'E02003132',
        '3LQ' => 'E02003128',
        '3LR' => 'E02003132',
        '3LS' => 'E02003134',
        '3LT' => 'E02003132',
        '3LU' => 'E02003134',
        '3LX' => 'E02003134',
        '3LY' => 'E02003132',
        '3LZ' => 'E02003134',
        '3NA' => 'E02003132',
        '3NB' => 'E02003132',
        '3ND' => 'E02003132',
        '3NE' => 'E02003132',
        '3NF' => 'E02003132',
        '3NG' => 'E02003132',
        '3NH' => 'E02003128',
        '3NJ' => 'E02003127',
        '3NL' => 'E02003128',
        '3NN' => 'E02003127',
        '3NP' => 'E02003128',
        '3NQ' => 'E02003125',
        '3NR' => 'E02003128',
        '3NS' => 'E02003128',
        '3NT' => 'E02003128',
        '3NU' => 'E02003128',
        '3NW' => 'E02003128',
        '3NX' => 'E02003128',
        '3NY' => 'E02003132',
        '3NZ' => 'E02003128',
        '3PA' => 'E02003128',
        '3PB' => 'E02003128',
        '3PD' => 'E02003128',
        '3PE' => 'E02003128',
        '3PF' => 'E02003128',
        '3PG' => 'E02003128',
        '3PH' => 'E02003128',
        '3PJ' => 'E02003128',
        '3PL' => 'E02003127',
        '3PN' => 'E02003127',
        '3PP' => 'E02003127',
        '3PQ' => 'E02003128',
        '3PR' => 'E02003128',
        '3PS' => 'E02003127',
        '3PT' => 'E02003127',
        '3PU' => 'E02003127',
        '3PW' => 'E02003127',
        '3PX' => 'E02003127',
        '3PY' => 'E02003127',
        '3PZ' => 'E02003127',
        '3QA' => 'E02003128',
        '3QB' => 'E02003127',
        '3QD' => 'E02003127',
        '3QG' => 'E02003127',
        '3QH' => 'E02003127',
        '3QJ' => 'E02003127',
        '3QL' => 'E02003127',
        '3QN' => 'E02003127',
        '3QP' => 'E02003127',
        '3QQ' => 'E02003127',
        '3QR' => 'E02003127',
        '3QS' => 'E02003127',
        '3QT' => 'E02003127',
        '3QU' => 'E02003127',
        '3QW' => 'E02003127',
        '3QX' => 'E02003127',
        '3QY' => 'E02003127',
        '3QZ' => 'E02003127',
        '3RA' => 'E02003127',
        '3RB' => 'E02003127',
        '3RD' => 'E02003127',
        '3RE' => 'E02003127',
        '3RF' => 'E02003127',
        '3RG' => 'E02003127',
        '3RH' => 'E02003127',
        '3RJ' => 'E02003127',
        '3RL' => 'E02003127',
        '3RN' => 'E02003127',
        '3RP' => 'E02003127',
        '3RQ' => 'E02003127',
        '3RR' => 'E02003127',
        '3RS' => 'E02003127',
        '3RT' => 'E02003127',
        '3RU' => 'E02003127',
        '3RW' => 'E02003127',
        '3RX' => 'E02003127',
        '3RY' => 'E02003128',
        '3RZ' => 'E02003128',
        '3SA' => 'E02003128',
        '3SB' => 'E02003128',
        '3SD' => 'E02003128',
        '3SF' => 'E02003128',
        '3SG' => 'E02003127',
        '3SH' => 'E02003128',
        '3SJ' => 'E02003128',
        '3SL' => 'E02003128',
        '3SN' => 'E02003128',
        '3SP' => 'E02003128',
        '3SQ' => 'E02003128',
        '3SR' => 'E02003127',
        '3SS' => 'E02003128',
        '3ST' => 'E02003128',
        '3SU' => 'E02003128',
        '3SW' => 'E02003128',
        '3SX' => 'E02003128',
        '3SY' => 'E02003128',
        '3SZ' => 'E02003128',
        '3TA' => 'E02003128',
        '3TB' => 'E02003128',
        '3TD' => 'E02003124',
        '3TE' => 'E02003124',
        '3TF' => 'E02003124',
        '3TG' => 'E02003124',
        '3TH' => 'E02003129',
        '3TJ' => 'E02003124',
        '3TL' => 'E02003124',
        '3TN' => 'E02003128',
        '3TP' => 'E02003128',
        '3TQ' => 'E02003124',
        '3TR' => 'E02003128',
        '3TS' => 'E02003128',
        '3TT' => 'E02003128',
        '3TU' => 'E02003128',
        '3TW' => 'E02003128',
        '3TX' => 'E02003128',
        '3TY' => 'E02003128',
        '3TZ' => 'E02003128',
        '3UA' => 'E02003128',
        '3UB' => 'E02003128',
        '3UD' => 'E02003128',
        '3UE' => 'E02003128',
        '3UF' => 'E02003128',
        '3UG' => 'E02003128',
        '3UH' => 'E02003128',
        '3UJ' => 'E02003128',
        '3UL' => 'E02003129',
        '3UN' => 'E02003128',
        '3UP' => 'E02003128',
        '3UQ' => 'E02003128',
        '3UR' => 'E02003128',
        '3US' => 'E02003128',
        '3UT' => 'E02003128',
        '3UU' => 'E02003128',
        '3UW' => 'E02003128',
        '3UX' => 'E02003128',
        '3UY' => 'E02003128',
        '3UZ' => 'E02003128',
        '3WA' => 'E02003127',
        '3WN' => 'E02003127',
        '3WP' => 'E02003127',
        '3WQ' => 'E02003127',
        '3WR' => 'E02003127',
        '3WS' => 'E02003127',
        '3WT' => 'E02003127',
        '3WU' => 'E02003127',
        '3WW' => 'E02003127',
        '3WX' => 'E02003128',
        '3WY' => 'E02003127',
        '3WZ' => 'E02003127',
        '3XN' => 'E02003127',
        '3YA' => 'E02003128',
        '3YB' => 'E02003128',
        '3YD' => 'E02003128',
        '3YE' => 'E02003128',
        '3YF' => 'E02003127',
        '3YG' => 'E02003127',
        '3YH' => 'E02003128',
        '3YJ' => 'E02003127',
        '3YL' => 'E02003128',
        '3YN' => 'E02003128',
        '3YP' => 'E02003128',
        '3YQ' => 'E02003127',
        '3YR' => 'E02003128',
        '3YS' => 'E02003127',
        '3YT' => 'E02003127',
        '3YW' => 'E02003128',
        '3ZJ' => 'E02003127',
        '3ZL' => 'E02003127',
        '3ZN' => 'E02003128',
        '3ZQ' => 'E02003127',
        '3ZR' => 'E02003127',
        '3ZX' => 'E02003127',
        '4AA' => 'E02003128',
        '4AB' => 'E02003128',
        '4AD' => 'E02003124',
        '4AE' => 'E02003124',
        '4AF' => 'E02003128',
        '4AG' => 'E02003123',
        '4AH' => 'E02003124',
        '4AJ' => 'E02003128',
        '4AL' => 'E02003124',
        '4AN' => 'E02003124',
        '4AP' => 'E02003128',
        '4AQ' => 'E02003124',
        '4AR' => 'E02003128',
        '4AS' => 'E02003128',
        '4AT' => 'E02003124',
        '4AU' => 'E02003124',
        '4AW' => 'E02003124',
        '4AX' => 'E02003124',
        '4AY' => 'E02003124',
        '4AZ' => 'E02003124',
        '4BA' => 'E02003124',
        '4BB' => 'E02003124',
        '4BD' => 'E02003128',
        '4BE' => 'E02003128',
        '4BG' => 'E02003124',
        '4BH' => 'E02003128',
        '4BJ' => 'E02003128',
        '4BL' => 'E02003128',
        '4BN' => 'E02003128',
        '4BP' => 'E02003128',
        '4BQ' => 'E02003124',
        '4BS' => 'E02003128',
        '4BT' => 'E02003128',
        '4BU' => 'E02003128',
        '4BW' => 'E02003128',
        '4BX' => 'E02003127',
        '4BY' => 'E02004189',
        '4BZ' => 'E02004189',
        '4DA' => 'E02003124',
        '4DB' => 'E02003124',
        '4DD' => 'E02003124',
        '4DE' => 'E02003128',
        '4DF' => 'E02003128',
        '4DG' => 'E02003128',
        '4DH' => 'E02003124',
        '4DJ' => 'E02003124',
        '4DL' => 'E02003124',
        '4DN' => 'E02003124',
        '4DP' => 'E02003124',
        '4DQ' => 'E02003128',
        '4DR' => 'E02003124',
        '4DS' => 'E02003128',
        '4DT' => 'E02003128',
        '4DU' => 'E02003128',
        '4DW' => 'E02003124',
        '4DX' => 'E02003128',
        '4DY' => 'E02003124',
        '4DZ' => 'E02003124',
        '4EA' => 'E02003124',
        '4EB' => 'E02003124',
        '4ED' => 'E02003128',
        '4EE' => 'E02003128',
        '4EF' => 'E02003128',
        '4EG' => 'E02004189',
        '4EH' => 'E02004189',
        '4EJ' => 'E02003128',
        '4EL' => 'E02003128',
        '4EN' => 'E02003124',
        '4EP' => 'E02003124',
        '4EQ' => 'E02004189',
        '4ER' => 'E02003124',
        '4ES' => 'E02003124',
        '4ET' => 'E02003124',
        '4EU' => 'E02003124',
        '4EW' => 'E02003124',
        '4EX' => 'E02003124',
        '4EY' => 'E02003128',
        '4EZ' => 'E02003124',
        '4HA' => 'E02003124',
        '4HB' => 'E02003124',
        '4HD' => 'E02003124',
        '4HE' => 'E02003124',
        '4HF' => 'E02003128',
        '4HG' => 'E02003124',
        '4HH' => 'E02003124',
        '4HJ' => 'E02003124',
        '4HL' => 'E02003124',
        '4HN' => 'E02003128',
        '4HP' => 'E02003124',
        '4HQ' => 'E02003124',
        '4HR' => 'E02003124',
        '4HS' => 'E02003124',
        '4HT' => 'E02003124',
        '4HU' => 'E02003124',
        '4HW' => 'E02003128',
        '4HX' => 'E02003124',
        '4HY' => 'E02003125',
        '4HZ' => 'E02003124',
        '4JA' => 'E02003124',
        '4JB' => 'E02003124',
        '4JD' => 'E02003124',
        '4JE' => 'E02003124',
        '4JF' => 'E02003124',
        '4JG' => 'E02003124',
        '4JH' => 'E02003124',
        '4JJ' => 'E02003125',
        '4JL' => 'E02003124',
        '4JN' => 'E02003125',
        '4JP' => 'E02003124',
        '4JQ' => 'E02003124',
        '4JR' => 'E02003125',
        '4JS' => 'E02003125',
        '4JT' => 'E02003124',
        '4JU' => 'E02003125',
        '4JW' => 'E02003125',
        '4JX' => 'E02003125',
        '4JY' => 'E02003125',
        '4JZ' => 'E02003125',
        '4LA' => 'E02003125',
        '4LB' => 'E02003124',
        '4LD' => 'E02003124',
        '4LE' => 'E02003124',
        '4LF' => 'E02003124',
        '4LG' => 'E02004189',
        '4LH' => 'E02004189',
        '4LJ' => 'E02004189',
        '4LL' => 'E02004189',
        '4LN' => 'E02004189',
        '4LP' => 'E02003124',
        '4LQ' => 'E02004189',
        '4LR' => 'E02003124',
        '4LS' => 'E02003124',
        '4LT' => 'E02003125',
        '4LU' => 'E02003125',
        '4LW' => 'E02003125',
        '4LX' => 'E02003125',
        '4LZ' => 'E02004189',
        '4NA' => 'E02003124',
        '4NB' => 'E02003124',
        '4ND' => 'E02003124',
        '4NE' => 'E02003124',
        '4NF' => 'E02003124',
        '4NG' => 'E02003124',
        '4NH' => 'E02003124',
        '4NJ' => 'E02003124',
        '4NL' => 'E02003124',
        '4NN' => 'E02003124',
        '4NP' => 'E02003124',
        '4NQ' => 'E02003124',
        '4NR' => 'E02003124',
        '4NS' => 'E02003124',
        '4NT' => 'E02003124',
        '4NU' => 'E02003124',
        '4NW' => 'E02003124',
        '4NX' => 'E02003124',
        '4NY' => 'E02003124',
        '4NZ' => 'E02003124',
        '4PB' => 'E02003125',
        '4PD' => 'E02003125',
        '4PE' => 'E02003125',
        '4PG' => 'E02003124',
        '4PH' => 'E02003124',
        '4PJ' => 'E02003124',
        '4PL' => 'E02003124',
        '4PN' => 'E02003124',
        '4PP' => 'E02003124',
        '4PQ' => 'E02003124',
        '4PR' => 'E02003124',
        '4PS' => 'E02003124',
        '4PT' => 'E02003124',
        '4PU' => 'E02003124',
        '4PW' => 'E02003124',
        '4PX' => 'E02003124',
        '4PY' => 'E02003124',
        '4PZ' => 'E02003124',
        '4QA' => 'E02003124',
        '4QB' => 'E02003124',
        '4QD' => 'E02003124',
        '4QE' => 'E02003124',
        '4QF' => 'E02003124',
        '4QG' => 'E02003124',
        '4RH' => 'E02003125',
        '4TR' => 'E02003125',
        '4WG' => 'E02003127',
        '4WQ' => 'E02003127',
        '4WW' => 'E02003127',
        '4WX' => 'E02003127',
        '4WY' => 'E02003127',
        '4WZ' => 'E02003127',
        '4XJ' => 'E02003125',
        '4XN' => 'E02003127',
        '4XQ' => 'E02003125',
        '4XR' => 'E02003127',
        '4YH' => 'E02003127',
        '4YL' => 'E02003124',
        '4YN' => 'E02003124',
        '4YP' => 'E02003124',
        '4YR' => 'E02003124',
        '4YS' => 'E02003125',
        '4YT' => 'E02003124',
        '4YU' => 'E02003127',
        '4YW' => 'E02003124',
        '4YX' => 'E02003127',
        '4YY' => 'E02003127',
        '4YZ' => 'E02003124',
        '9AE' => 'E02003127',
        '9AN' => 'E02003127',
        '9AQ' => 'E02003127',
        '9AU' => 'E02003127',
        '9AY' => 'E02003127',
        '9AZ' => 'E02003127',
        '9BA' => 'E02003127',
        '9BD' => 'E02003127',
        '9BF' => 'E02003127',
        '9BG' => 'E02003127',
        '9BH' => 'E02003127',
        '9BL' => 'E02003127',
        '9BP' => 'E02003127',
        '9BQ' => 'E02003127',
        '9BR' => 'E02003127',
        '9BS' => 'E02003127',
        '9BT' => 'E02003127',
        '9BW' => 'E02003127',
        '9BX' => 'E02003127',
        '9BY' => 'E02003127',
        '9BZ' => 'E02003127',
        '9DA' => 'E02003127',
        '9DB' => 'E02003127',
        '9DD' => 'E02003127',
        '9DE' => 'E02003127',
        '9DF' => 'E02003127',
        '9DG' => 'E02003127',
        '9DH' => 'E02003127',
        '9DJ' => 'E02003127',
        '9DL' => 'E02003127',
        '9DN' => 'E02003127',
        '9DP' => 'E02003127',
        '9DQ' => 'E02003127',
        '9DR' => 'E02003127',
        '9DT' => 'E02003127',
        '9DU' => 'E02003127',
        '9DW' => 'E02003127',
        '9DX' => 'E02003127',
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
