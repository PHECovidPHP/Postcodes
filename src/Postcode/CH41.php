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
final class CH41
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02001477',
        '0AB' => 'E02001477',
        '0AD' => 'E02001477',
        '0AE' => 'E02001477',
        '0AF' => 'E02001477',
        '0AG' => 'E02001481',
        '0AH' => 'E02001477',
        '0AJ' => 'E02001477',
        '0AL' => 'E02001477',
        '0AN' => 'E02001481',
        '0AP' => 'E02001477',
        '0AQ' => 'E02001481',
        '0AR' => 'E02001481',
        '0AS' => 'E02001481',
        '0AT' => 'E02001481',
        '0AU' => 'E02001481',
        '0AW' => 'E02001481',
        '0AX' => 'E02001481',
        '0AY' => 'E02001481',
        '0AZ' => 'E02001481',
        '0BA' => 'E02001481',
        '0BB' => 'E02001481',
        '0BD' => 'E02001481',
        '0BE' => 'E02001481',
        '0BG' => 'E02001481',
        '0BH' => 'E02001481',
        '0BJ' => 'E02001481',
        '0BL' => 'E02001481',
        '0BN' => 'E02001481',
        '0BP' => 'E02001481',
        '0BQ' => 'E02001481',
        '0BR' => 'E02001481',
        '0BS' => 'E02001481',
        '0BT' => 'E02001481',
        '0BU' => 'E02001481',
        '0BW' => 'E02001481',
        '0BX' => 'E02001481',
        '0BY' => 'E02001481',
        '0BZ' => 'E02001481',
        '0DA' => 'E02001481',
        '0DB' => 'E02001481',
        '0DD' => 'E02001481',
        '0DE' => 'E02001481',
        '0DF' => 'E02001481',
        '0DG' => 'E02001481',
        '0DH' => 'E02001481',
        '0DJ' => 'E02001481',
        '0DL' => 'E02001481',
        '0DN' => 'E02001481',
        '0DP' => 'E02001481',
        '0DQ' => 'E02001481',
        '0DR' => 'E02001481',
        '0DS' => 'E02001481',
        '0DT' => 'E02001481',
        '0DU' => 'E02001481',
        '0DW' => 'E02001481',
        '0DX' => 'E02001481',
        '0DY' => 'E02001481',
        '0DZ' => 'E02001481',
        '0EA' => 'E02001481',
        '0EB' => 'E02001481',
        '0ED' => 'E02001481',
        '0EE' => 'E02001481',
        '0EF' => 'E02001481',
        '0EG' => 'E02001481',
        '0EH' => 'E02001481',
        '0EJ' => 'E02001481',
        '0EL' => 'E02001481',
        '0EN' => 'E02001481',
        '0EP' => 'E02001481',
        '0EQ' => 'E02001481',
        '0ER' => 'E02001481',
        '0EW' => 'E02001481',
        '0EZ' => 'E02001481',
        '0HA' => 'E02001481',
        '0HB' => 'E02001481',
        '0WJ' => 'E02001482',
        '0YA' => 'E02001482',
        '0YY' => 'E02001481',
        '0YZ' => 'E02001481',
        '1AA' => 'E02001482',
        '1AB' => 'E02001482',
        '1AD' => 'E02001482',
        '1AE' => 'E02001476',
        '1AF' => 'E02001482',
        '1AG' => 'E02001482',
        '1AH' => 'E02001482',
        '1AJ' => 'E02001476',
        '1AL' => 'E02001482',
        '1AN' => 'E02001482',
        '1AP' => 'E02001482',
        '1AQ' => 'E02001476',
        '1AR' => 'E02001482',
        '1AS' => 'E02001482',
        '1AT' => 'E02001482',
        '1AU' => 'E02001482',
        '1AW' => 'E02001482',
        '1AX' => 'E02001482',
        '1AY' => 'E02001482',
        '1AZ' => 'E02001482',
        '1BA' => 'E02001482',
        '1BB' => 'E02001482',
        '1BD' => 'E02001482',
        '1BF' => 'E02001482',
        '1BG' => 'E02001482',
        '1BJ' => 'E02001482',
        '1BN' => 'E02001482',
        '1BP' => 'E02001482',
        '1BQ' => 'E02001482',
        '1BR' => 'E02001482',
        '1BY' => 'E02001474',
        '1BZ' => 'E02001474',
        '1DA' => 'E02001482',
        '1DB' => 'E02001474',
        '1DD' => 'E02001474',
        '1DE' => 'E02001474',
        '1DF' => 'E02001476',
        '1DG' => 'E02001476',
        '1DH' => 'E02001476',
        '1DJ' => 'E02001476',
        '1DL' => 'E02001476',
        '1DN' => 'E02001476',
        '1DP' => 'E02001476',
        '1DQ' => 'E02001476',
        '1DR' => 'E02001476',
        '1DT' => 'E02001476',
        '1DY' => 'E02001476',
        '1EA' => 'E02001477',
        '1EB' => 'E02001477',
        '1EF' => 'E02001476',
        '1EL' => 'E02001482',
        '1EP' => 'E02001482',
        '1ER' => 'E02001482',
        '1ET' => 'E02001482',
        '1EU' => 'E02001482',
        '1EW' => 'E02001482',
        '1EY' => 'E02001482',
        '1EZ' => 'E02001482',
        '1FB' => 'E02001474',
        '1FD' => 'E02001476',
        '1FE' => 'E02001474',
        '1FF' => 'E02001482',
        '1FG' => 'E02001474',
        '1FH' => 'E02001482',
        '1FJ' => 'E02001474',
        '1FL' => 'E02001476',
        '1FN' => 'E02001482',
        '1FP' => 'E02001482',
        '1FS' => 'E02001482',
        '1FT' => 'E02001476',
        '1FW' => 'E02001482',
        '1HB' => 'E02001482',
        '1HE' => 'E02001476',
        '1HF' => 'E02001477',
        '1HG' => 'E02001476',
        '1HN' => 'E02001476',
        '1HQ' => 'E02001476',
        '1HT' => 'E02001482',
        '1HW' => 'E02001476',
        '1JA' => 'E02001474',
        '1JB' => 'E02001476',
        '1JH' => 'E02001476',
        '1JJ' => 'E02001476',
        '1JL' => 'E02001482',
        '1JN' => 'E02001482',
        '1JP' => 'E02001476',
        '1JR' => 'E02001476',
        '1JW' => 'E02001476',
        '1LB' => 'E02001482',
        '1LD' => 'E02001482',
        '1LE' => 'E02001482',
        '1LF' => 'E02001482',
        '1LG' => 'E02001476',
        '1LH' => 'E02001482',
        '1LJ' => 'E02001482',
        '1LP' => 'E02001482',
        '1LQ' => 'E02001482',
        '1LS' => 'E02001476',
        '1LT' => 'E02001476',
        '1LU' => 'E02001482',
        '1LW' => 'E02001482',
        '1LX' => 'E02001482',
        '1LY' => 'E02001482',
        '1LZ' => 'E02001482',
        '1NA' => 'E02001482',
        '1NB' => 'E02001482',
        '1ND' => 'E02001482',
        '1NE' => 'E02001482',
        '1NF' => 'E02001482',
        '1NG' => 'E02001482',
        '1NQ' => 'E02001482',
        '1WA' => 'E02001482',
        '1WB' => 'E02001482',
        '1WD' => 'E02001482',
        '1WE' => 'E02001482',
        '1WF' => 'E02001482',
        '1WH' => 'E02001482',
        '1WL' => 'E02001482',
        '1WR' => 'E02001482',
        '1YY' => 'E02001482',
        '1YZ' => 'E02001482',
        '2BR' => 'E02001482',
        '2JQ' => 'E02001482',
        '2NP' => 'E02001487',
        '2NS' => 'E02001487',
        '2NU' => 'E02001487',
        '2NW' => 'E02001487',
        '2NZ' => 'E02001487',
        '2PF' => 'E02001482',
        '2PH' => 'E02001482',
        '2PX' => 'E02001482',
        '2PZ' => 'E02001482',
        '2QD' => 'E02001482',
        '2QH' => 'E02001482',
        '2QJ' => 'E02001482',
        '2QQ' => 'E02001482',
        '2QR' => 'E02001482',
        '2QS' => 'E02001482',
        '2QX' => 'E02001482',
        '2RA' => 'E02001482',
        '2RB' => 'E02001482',
        '2RD' => 'E02001482',
        '2RG' => 'E02001487',
        '2RH' => 'E02001482',
        '2RL' => 'E02001482',
        '2RN' => 'E02001487',
        '2RQ' => 'E02001487',
        '2SA' => 'E02001487',
        '2SB' => 'E02001487',
        '2SD' => 'E02001487',
        '2SE' => 'E02001487',
        '2SF' => 'E02001487',
        '2SG' => 'E02001482',
        '2SH' => 'E02001482',
        '2SJ' => 'E02001482',
        '2SL' => 'E02001482',
        '2SN' => 'E02001487',
        '2SP' => 'E02001482',
        '2SQ' => 'E02001482',
        '2SR' => 'E02001482',
        '2SS' => 'E02001482',
        '2ST' => 'E02001482',
        '2SU' => 'E02001482',
        '2SW' => 'E02001487',
        '2SX' => 'E02001482',
        '2SY' => 'E02001487',
        '2SZ' => 'E02001487',
        '2TA' => 'E02001487',
        '2TB' => 'E02001487',
        '2TD' => 'E02001487',
        '2TE' => 'E02001487',
        '2TF' => 'E02001482',
        '2TG' => 'E02001487',
        '2TH' => 'E02001482',
        '2TJ' => 'E02001482',
        '2TL' => 'E02001482',
        '2TN' => 'E02001488',
        '2TP' => 'E02001482',
        '2TQ' => 'E02001487',
        '2TR' => 'E02001488',
        '2TS' => 'E02001488',
        '2TW' => 'E02001482',
        '2TX' => 'E02001482',
        '2TY' => 'E02001488',
        '2TZ' => 'E02001488',
        '2UD' => 'E02001488',
        '2UE' => 'E02001488',
        '2UF' => 'E02001488',
        '2UG' => 'E02001488',
        '2UJ' => 'E02001488',
        '2UL' => 'E02001488',
        '2UP' => 'E02001488',
        '2UQ' => 'E02001488',
        '2US' => 'E02001488',
        '2UT' => 'E02001488',
        '2UU' => 'E02001488',
        '2UW' => 'E02001482',
        '2UZ' => 'E02001482',
        '2WA' => 'E02001482',
        '2WB' => 'E02001482',
        '2WD' => 'E02001482',
        '2WR' => 'E02001482',
        '2WU' => 'E02001482',
        '2XB' => 'E02001487',
        '2XE' => 'E02001482',
        '2XF' => 'E02001482',
        '2XJ' => 'E02001482',
        '2XL' => 'E02001482',
        '2XN' => 'E02001488',
        '2XP' => 'E02001482',
        '2XS' => 'E02001487',
        '2XU' => 'E02001482',
        '2XX' => 'E02001482',
        '2XY' => 'E02001482',
        '2XZ' => 'E02001482',
        '2YA' => 'E02001482',
        '2YB' => 'E02001482',
        '2YD' => 'E02001482',
        '2YE' => 'E02001482',
        '2YF' => 'E02001482',
        '2YH' => 'E02001482',
        '2YJ' => 'E02001482',
        '2YL' => 'E02001482',
        '2YN' => 'E02001482',
        '2YP' => 'E02001488',
        '2YQ' => 'E02001482',
        '2YR' => 'E02001482',
        '2YW' => 'E02001482',
        '2YX' => 'E02001482',
        '2YY' => 'E02001482',
        '2YZ' => 'E02001482',
        '2ZA' => 'E02001487',
        '2ZB' => 'E02001482',
        '2ZD' => 'E02001482',
        '2ZE' => 'E02001482',
        '2ZG' => 'E02001482',
        '2ZH' => 'E02001482',
        '2ZL' => 'E02001482',
        '3AA' => 'E02001482',
        '3AB' => 'E02001482',
        '3AD' => 'E02001482',
        '3BR' => 'E02001482',
        '3BS' => 'E02001482',
        '3BT' => 'E02001482',
        '3BW' => 'E02001482',
        '3HT' => 'E02001482',
        '3HU' => 'E02001482',
        '3HX' => 'E02001482',
        '3HY' => 'E02001482',
        '3HZ' => 'E02001482',
        '3JA' => 'E02001482',
        '3JD' => 'E02001482',
        '3JE' => 'E02001482',
        '3JF' => 'E02001482',
        '3JP' => 'E02001482',
        '3JQ' => 'E02001482',
        '3JR' => 'E02001482',
        '3JU' => 'E02001482',
        '3JY' => 'E02001482',
        '3JZ' => 'E02001482',
        '3LE' => 'E02001482',
        '3LF' => 'E02001482',
        '3LH' => 'E02001482',
        '3LL' => 'E02001482',
        '3LP' => 'E02001482',
        '3LQ' => 'E02001482',
        '3LU' => 'E02001482',
        '3LY' => 'E02001482',
        '3NE' => 'E02001482',
        '3NG' => 'E02001482',
        '3NJ' => 'E02001482',
        '3NL' => 'E02001482',
        '3NN' => 'E02001482',
        '3NP' => 'E02001482',
        '3NR' => 'E02001482',
        '3NT' => 'E02001482',
        '3NU' => 'E02001482',
        '3NW' => 'E02001482',
        '3NX' => 'E02001482',
        '3NY' => 'E02001482',
        '3NZ' => 'E02001482',
        '3PA' => 'E02001482',
        '3PB' => 'E02001482',
        '3PD' => 'E02001482',
        '3PE' => 'E02001482',
        '3PF' => 'E02001482',
        '3PG' => 'E02001482',
        '3PH' => 'E02001482',
        '3PJ' => 'E02001482',
        '3PQ' => 'E02001482',
        '3PR' => 'E02001482',
        '3PS' => 'E02001482',
        '3PT' => 'E02001482',
        '3PU' => 'E02001482',
        '3PX' => 'E02001482',
        '3PY' => 'E02001482',
        '3PZ' => 'E02001482',
        '3QA' => 'E02001482',
        '3QB' => 'E02001482',
        '3QD' => 'E02001482',
        '3QE' => 'E02001482',
        '3QF' => 'E02001482',
        '3QG' => 'E02001482',
        '3QH' => 'E02001482',
        '3QJ' => 'E02001482',
        '3QL' => 'E02001482',
        '3QN' => 'E02001482',
        '3QP' => 'E02001482',
        '3QQ' => 'E02001482',
        '3QT' => 'E02001482',
        '3QW' => 'E02001482',
        '3QZ' => 'E02001482',
        '3RB' => 'E02001482',
        '3RF' => 'E02001482',
        '3RG' => 'E02001482',
        '3RH' => 'E02001482',
        '3RJ' => 'E02001482',
        '3RL' => 'E02001482',
        '3RP' => 'E02001482',
        '3RQ' => 'E02001482',
        '3RS' => 'E02001482',
        '3RT' => 'E02001482',
        '3RU' => 'E02001482',
        '3RW' => 'E02001482',
        '3RX' => 'E02001482',
        '3RY' => 'E02001482',
        '3RZ' => 'E02001482',
        '3SA' => 'E02001482',
        '3SB' => 'E02001482',
        '3SD' => 'E02001482',
        '3SE' => 'E02001482',
        '3SG' => 'E02001482',
        '3SH' => 'E02001482',
        '3SJ' => 'E02001482',
        '3SL' => 'E02001482',
        '3SN' => 'E02001482',
        '3SP' => 'E02001482',
        '3SR' => 'E02001482',
        '3SS' => 'E02001482',
        '3ST' => 'E02001482',
        '3SU' => 'E02001482',
        '3SX' => 'E02001482',
        '3WA' => 'E02001482',
        '3YS' => 'E02001482',
        '3YY' => 'E02001482',
        '3YZ' => 'E02001482',
        '4AA' => 'E02001482',
        '4AB' => 'E02001482',
        '4AD' => 'E02001476',
        '4AF' => 'E02001482',
        '4AG' => 'E02001482',
        '4AH' => 'E02001482',
        '4AN' => 'E02001482',
        '4AP' => 'E02001482',
        '4AQ' => 'E02001482',
        '4AR' => 'E02001482',
        '4AU' => 'E02001482',
        '4AW' => 'E02001482',
        '4AX' => 'E02001482',
        '4BB' => 'E02001482',
        '4BD' => 'E02001482',
        '4BE' => 'E02001486',
        '4BG' => 'E02001482',
        '4BH' => 'E02001482',
        '4BJ' => 'E02001482',
        '4BL' => 'E02001482',
        '4BQ' => 'E02001482',
        '4BR' => 'E02001482',
        '4BS' => 'E02001482',
        '4BU' => 'E02001482',
        '4BW' => 'E02001482',
        '4BX' => 'E02001482',
        '4BY' => 'E02001482',
        '4BZ' => 'E02001482',
        '4DA' => 'E02001482',
        '4DB' => 'E02001482',
        '4DD' => 'E02001482',
        '4DF' => 'E02001482',
        '4DP' => 'E02001482',
        '4DR' => 'E02001482',
        '4DS' => 'E02001482',
        '4DT' => 'E02001482',
        '4DU' => 'E02001482',
        '4DW' => 'E02001482',
        '4DX' => 'E02001482',
        '4DY' => 'E02001482',
        '4EA' => 'E02001482',
        '4EZ' => 'E02001476',
        '4FD' => 'E02001482',
        '4FF' => 'E02001482',
        '4FG' => 'E02001482',
        '4FH' => 'E02001482',
        '4FN' => 'E02001482',
        '4FP' => 'E02001482',
        '4FQ' => 'E02001482',
        '4FT' => 'E02001482',
        '4FU' => 'E02001482',
        '4FX' => 'E02001482',
        '4FZ' => 'E02001482',
        '4HA' => 'E02001476',
        '4HB' => 'E02001476',
        '4HD' => 'E02001486',
        '4HE' => 'E02001482',
        '4HF' => 'E02001482',
        '4HG' => 'E02001482',
        '4HH' => 'E02001482',
        '4HJ' => 'E02001482',
        '4HL' => 'E02001476',
        '4HN' => 'E02001482',
        '4HP' => 'E02001482',
        '4HQ' => 'E02001476',
        '4HR' => 'E02001482',
        '4HS' => 'E02001476',
        '4HT' => 'E02001476',
        '4HU' => 'E02001476',
        '4HW' => 'E02001482',
        '4HX' => 'E02001476',
        '4HY' => 'E02001486',
        '4HZ' => 'E02001476',
        '4JA' => 'E02001476',
        '4JB' => 'E02001482',
        '4JD' => 'E02001476',
        '4JF' => 'E02001482',
        '4JG' => 'E02001482',
        '4JH' => 'E02001482',
        '4JJ' => 'E02001482',
        '4JN' => 'E02001482',
        '4JQ' => 'E02001482',
        '4JT' => 'E02001482',
        '4JU' => 'E02001482',
        '4JW' => 'E02001482',
        '4JX' => 'E02001482',
        '4JY' => 'E02001482',
        '4JZ' => 'E02001482',
        '4LA' => 'E02001482',
        '4LB' => 'E02001482',
        '4LD' => 'E02001482',
        '4LE' => 'E02001482',
        '4LG' => 'E02001482',
        '4LQ' => 'E02001482',
        '4LR' => 'E02001482',
        '4LW' => 'E02001482',
        '4LX' => 'E02001482',
        '4LY' => 'E02001482',
        '4LZ' => 'E02001482',
        '4NA' => 'E02001482',
        '4NB' => 'E02001482',
        '4NF' => 'E02001482',
        '4NG' => 'E02001482',
        '4NH' => 'E02001482',
        '4NJ' => 'E02001482',
        '4NT' => 'E02001482',
        '4NX' => 'E02001482',
        '4NY' => 'E02001482',
        '4NZ' => 'E02001482',
        '4PA' => 'E02001476',
        '4PB' => 'E02001482',
        '4PE' => 'E02001482',
        '4PF' => 'E02001482',
        '4PG' => 'E02001482',
        '4PJ' => 'E02001482',
        '4PL' => 'E02001482',
        '4PN' => 'E02001482',
        '4PP' => 'E02001482',
        '4PQ' => 'E02001482',
        '4PR' => 'E02001482',
        '4PS' => 'E02001482',
        '4WA' => 'E02001482',
        '4WB' => 'E02001482',
        '4WD' => 'E02001482',
        '4WU' => 'E02001482',
        '4YT' => 'E02001482',
        '4YX' => 'E02001482',
        '4YY' => 'E02001482',
        '4YZ' => 'E02001482',
        '4ZR' => 'E02001482',
        '5AA' => 'E02001482',
        '5AD' => 'E02001482',
        '5AE' => 'E02001482',
        '5AG' => 'E02001482',
        '5AH' => 'E02001482',
        '5AJ' => 'E02001482',
        '5AL' => 'E02001482',
        '5AN' => 'E02001482',
        '5AP' => 'E02001482',
        '5AR' => 'E02001482',
        '5AS' => 'E02001482',
        '5AT' => 'E02001482',
        '5AU' => 'E02001482',
        '5AZ' => 'E02001487',
        '5BD' => 'E02001482',
        '5BL' => 'E02001482',
        '5BN' => 'E02001482',
        '5BP' => 'E02001482',
        '5BQ' => 'E02001482',
        '5BR' => 'E02001482',
        '5BS' => 'E02001482',
        '5BT' => 'E02001482',
        '5BU' => 'E02001482',
        '5BW' => 'E02001482',
        '5BX' => 'E02001482',
        '5BY' => 'E02001482',
        '5DA' => 'E02001487',
        '5DB' => 'E02001487',
        '5DD' => 'E02001482',
        '5DE' => 'E02001482',
        '5DG' => 'E02001482',
        '5DJ' => 'E02001487',
        '5DL' => 'E02001482',
        '5DQ' => 'E02001482',
        '5DW' => 'E02001487',
        '5DX' => 'E02001487',
        '5EA' => 'E02001482',
        '5EB' => 'E02001482',
        '5ED' => 'E02001482',
        '5EE' => 'E02001487',
        '5EF' => 'E02001482',
        '5EG' => 'E02001482',
        '5EH' => 'E02001482',
        '5EJ' => 'E02001482',
        '5EN' => 'E02001482',
        '5EP' => 'E02001482',
        '5EQ' => 'E02001482',
        '5ER' => 'E02001482',
        '5ES' => 'E02001482',
        '5ET' => 'E02001482',
        '5EU' => 'E02001482',
        '5EW' => 'E02001482',
        '5EX' => 'E02001482',
        '5EY' => 'E02001482',
        '5FD' => 'E02001482',
        '5FE' => 'E02001482',
        '5FG' => 'E02001487',
        '5FL' => 'E02001482',
        '5FN' => 'E02001482',
        '5FQ' => 'E02001487',
        '5FW' => 'E02001487',
        '5FX' => 'E02001482',
        '5GA' => 'E02001482',
        '5HA' => 'E02001482',
        '5HB' => 'E02001482',
        '5HJ' => 'E02001482',
        '5HL' => 'E02001482',
        '5HN' => 'E02001482',
        '5HP' => 'E02001487',
        '5HS' => 'E02001482',
        '5HU' => 'E02001487',
        '5HW' => 'E02001482',
        '5HY' => 'E02001487',
        '5HZ' => 'E02001482',
        '5JA' => 'E02001487',
        '5JF' => 'E02001482',
        '5JG' => 'E02001487',
        '5JH' => 'E02001487',
        '5JU' => 'E02001487',
        '5JW' => 'E02001487',
        '5JY' => 'E02001487',
        '5JZ' => 'E02001487',
        '5LB' => 'E02001482',
        '5LD' => 'E02001482',
        '5LG' => 'E02001482',
        '5LH' => 'E02001487',
        '5LJ' => 'E02001487',
        '5LL' => 'E02001482',
        '5LN' => 'E02001482',
        '5LP' => 'E02001482',
        '5LQ' => 'E02001487',
        '5LR' => 'E02001482',
        '5LS' => 'E02001482',
        '5LU' => 'E02001482',
        '5LW' => 'E02001482',
        '5LX' => 'E02001482',
        '5LY' => 'E02001482',
        '5LZ' => 'E02001482',
        '5NA' => 'E02001482',
        '5NB' => 'E02001482',
        '5WA' => 'E02001482',
        '5WB' => 'E02001482',
        '5WD' => 'E02001482',
        '5WE' => 'E02001482',
        '5WF' => 'E02001482',
        '5WG' => 'E02001482',
        '5WH' => 'E02001482',
        '5WJ' => 'E02001482',
        '5WL' => 'E02001482',
        '5WN' => 'E02001482',
        '5WP' => 'E02001482',
        '5WQ' => 'E02001482',
        '5YR' => 'E02001482',
        '5YT' => 'E02001482',
        '5YW' => 'E02001482',
        '5YY' => 'E02001482',
        '5YZ' => 'E02001482',
        '6AA' => 'E02001482',
        '6AB' => 'E02001482',
        '6AD' => 'E02001482',
        '6AE' => 'E02001482',
        '6AF' => 'E02001482',
        '6AG' => 'E02001482',
        '6AH' => 'E02001482',
        '6AJ' => 'E02001482',
        '6AL' => 'E02001482',
        '6AN' => 'E02001482',
        '6AP' => 'E02001482',
        '6AQ' => 'E02001482',
        '6AR' => 'E02001482',
        '6AS' => 'E02001482',
        '6AU' => 'E02001482',
        '6AW' => 'E02001482',
        '6AX' => 'E02001482',
        '6AY' => 'E02001482',
        '6AZ' => 'E02001482',
        '6BA' => 'E02001482',
        '6BL' => 'E02001482',
        '6BR' => 'E02001482',
        '6BT' => 'E02001482',
        '6BU' => 'E02001482',
        '6BW' => 'E02001482',
        '6DA' => 'E02001482',
        '6DB' => 'E02001482',
        '6DJ' => 'E02001482',
        '6DL' => 'E02001482',
        '6DN' => 'E02001482',
        '6DQ' => 'E02001482',
        '6DU' => 'E02001482',
        '6DX' => 'E02001482',
        '6DY' => 'E02001482',
        '6DZ' => 'E02001482',
        '6EA' => 'E02001482',
        '6EB' => 'E02001482',
        '6ED' => 'E02001482',
        '6EE' => 'E02001482',
        '6EJ' => 'E02001482',
        '6EL' => 'E02001482',
        '6EN' => 'E02001482',
        '6EP' => 'E02001482',
        '6EQ' => 'E02001482',
        '6ES' => 'E02001482',
        '6EX' => 'E02001482',
        '6EY' => 'E02001482',
        '6EZ' => 'E02001482',
        '6HA' => 'E02001482',
        '6HB' => 'E02001482',
        '6HG' => 'E02001482',
        '6HH' => 'E02001482',
        '6HR' => 'E02001482',
        '6HS' => 'E02001482',
        '6HT' => 'E02001482',
        '6HW' => 'E02001482',
        '6HX' => 'E02001482',
        '6HY' => 'E02001482',
        '6JA' => 'E02001482',
        '6JB' => 'E02001482',
        '6JD' => 'E02001482',
        '6JE' => 'E02001482',
        '6JH' => 'E02001482',
        '6JN' => 'E02001482',
        '6LA' => 'E02001482',
        '6LD' => 'E02001482',
        '6LE' => 'E02001482',
        '6LF' => 'E02001482',
        '6LG' => 'E02001482',
        '6LH' => 'E02001482',
        '6LL' => 'E02001482',
        '6LN' => 'E02001482',
        '6LP' => 'E02001482',
        '6LQ' => 'E02001482',
        '6LR' => 'E02001482',
        '6LT' => 'E02001482',
        '6LW' => 'E02001482',
        '6LZ' => 'E02001482',
        '6ND' => 'E02001482',
        '6NR' => 'E02001482',
        '6NU' => 'E02001482',
        '6NX' => 'E02001482',
        '6NY' => 'E02001482',
        '6NZ' => 'E02001482',
        '6PE' => 'E02001482',
        '6PH' => 'E02001482',
        '6PN' => 'E02001482',
        '6PQ' => 'E02001482',
        '6PT' => 'E02001482',
        '6PU' => 'E02001482',
        '6PW' => 'E02001482',
        '6PX' => 'E02001482',
        '6PY' => 'E02001482',
        '6QD' => 'E02001482',
        '6QH' => 'E02001482',
        '6QJ' => 'E02001482',
        '6QP' => 'E02001482',
        '6QR' => 'E02001482',
        '6QS' => 'E02001482',
        '6QT' => 'E02001482',
        '6QW' => 'E02001482',
        '6QX' => 'E02001482',
        '6QY' => 'E02001482',
        '6QZ' => 'E02001482',
        '6RA' => 'E02001482',
        '6RH' => 'E02001482',
        '6RN' => 'E02001482',
        '6RQ' => 'E02001482',
        '6RR' => 'E02001482',
        '6RT' => 'E02001482',
        '6RU' => 'E02001482',
        '6RW' => 'E02001482',
        '6RX' => 'E02001482',
        '6RY' => 'E02001482',
        '6RZ' => 'E02001482',
        '6SA' => 'E02001482',
        '6SB' => 'E02001482',
        '6SD' => 'E02001482',
        '6SE' => 'E02001482',
        '6WA' => 'E02001482',
        '6WB' => 'E02001482',
        '6WH' => 'E02001482',
        '6WR' => 'E02001482',
        '6YY' => 'E02001482',
        '6YZ' => 'E02001482',
        '6ZA' => 'E02001482',
        '7AA' => 'E02001477',
        '7AB' => 'E02001477',
        '7AD' => 'E02001477',
        '7AE' => 'E02001477',
        '7AF' => 'E02001477',
        '7AG' => 'E02001477',
        '7AH' => 'E02001477',
        '7AJ' => 'E02001477',
        '7AL' => 'E02001477',
        '7AP' => 'E02001477',
        '7AQ' => 'E02001477',
        '7AR' => 'E02001477',
        '7AX' => 'E02001477',
        '7AY' => 'E02001477',
        '7AZ' => 'E02001477',
        '7BE' => 'E02001477',
        '7BG' => 'E02001477',
        '7BH' => 'E02001477',
        '7BJ' => 'E02001477',
        '7BL' => 'E02001477',
        '7BN' => 'E02001477',
        '7BP' => 'E02001477',
        '7BQ' => 'E02001477',
        '7BS' => 'E02001477',
        '7BT' => 'E02001477',
        '7BU' => 'E02001477',
        '7BW' => 'E02001477',
        '7BX' => 'E02001477',
        '7BY' => 'E02001477',
        '7BZ' => 'E02001477',
        '7DA' => 'E02001477',
        '7DB' => 'E02001477',
        '7DD' => 'E02001477',
        '7DE' => 'E02001477',
        '7DF' => 'E02001477',
        '7DG' => 'E02001477',
        '7DH' => 'E02001477',
        '7DJ' => 'E02001477',
        '7DL' => 'E02001477',
        '7DN' => 'E02001477',
        '7DP' => 'E02001477',
        '7DQ' => 'E02001477',
        '7DR' => 'E02001477',
        '7DS' => 'E02001477',
        '7DU' => 'E02001477',
        '7DW' => 'E02001477',
        '7DX' => 'E02001477',
        '7DY' => 'E02001477',
        '7DZ' => 'E02001477',
        '7EA' => 'E02001477',
        '7EB' => 'E02001477',
        '7ED' => 'E02001477',
        '7EE' => 'E02001477',
        '7EF' => 'E02001477',
        '7EG' => 'E02001477',
        '7EJ' => 'E02001477',
        '7EL' => 'E02001477',
        '7EP' => 'E02001477',
        '7EQ' => 'E02001477',
        '7EU' => 'E02001477',
        '7EW' => 'E02001477',
        '7FA' => 'E02001477',
        '7FB' => 'E02001477',
        '7HA' => 'E02001477',
        '7HD' => 'E02001477',
        '7HE' => 'E02001505',
        '7HF' => 'E02001482',
        '7HG' => 'E02001477',
        '7HH' => 'E02001477',
        '7HJ' => 'E02001477',
        '7HQ' => 'E02001482',
        '7PA' => 'E02001477',
        '7PB' => 'E02001477',
        '7PD' => 'E02001477',
        '7PE' => 'E02001477',
        '7PF' => 'E02001477',
        '7PG' => 'E02001477',
        '7PH' => 'E02001477',
        '7PJ' => 'E02001477',
        '7PL' => 'E02001477',
        '7PN' => 'E02001477',
        '7PP' => 'E02001477',
        '7PQ' => 'E02001477',
        '7PR' => 'E02001477',
        '7WB' => 'E02001482',
        '8AA' => 'E02001481',
        '8AB' => 'E02001476',
        '8AD' => 'E02001476',
        '8AE' => 'E02001476',
        '8AF' => 'E02001476',
        '8AG' => 'E02001476',
        '8AH' => 'E02001476',
        '8AJ' => 'E02001476',
        '8AL' => 'E02001476',
        '8AP' => 'E02001476',
        '8AQ' => 'E02001476',
        '8AR' => 'E02001476',
        '8AS' => 'E02001476',
        '8AT' => 'E02001476',
        '8AU' => 'E02001486',
        '8AX' => 'E02001481',
        '8AZ' => 'E02001482',
        '8BA' => 'E02001476',
        '8BB' => 'E02001482',
        '8BD' => 'E02001482',
        '8BE' => 'E02001482',
        '8BG' => 'E02001476',
        '8BL' => 'E02001476',
        '8BN' => 'E02001476',
        '8BP' => 'E02001482',
        '8BQ' => 'E02001482',
        '8BR' => 'E02001482',
        '8BS' => 'E02001482',
        '8BT' => 'E02001476',
        '8BU' => 'E02001476',
        '8BW' => 'E02001482',
        '8BX' => 'E02001476',
        '8BY' => 'E02001476',
        '8BZ' => 'E02001476',
        '8DA' => 'E02001476',
        '8DB' => 'E02001476',
        '8DD' => 'E02001476',
        '8DE' => 'E02001476',
        '8DF' => 'E02001481',
        '8DG' => 'E02001476',
        '8DH' => 'E02001476',
        '8DJ' => 'E02001476',
        '8DN' => 'E02001476',
        '8DP' => 'E02001476',
        '8DQ' => 'E02001476',
        '8DT' => 'E02001476',
        '8DU' => 'E02001476',
        '8DX' => 'E02001476',
        '8DZ' => 'E02001476',
        '8EA' => 'E02001476',
        '8EB' => 'E02001476',
        '8ED' => 'E02001476',
        '8EE' => 'E02001482',
        '8EF' => 'E02001476',
        '8EG' => 'E02001482',
        '8EL' => 'E02001482',
        '8EN' => 'E02001476',
        '8EP' => 'E02001482',
        '8EQ' => 'E02001476',
        '8ER' => 'E02001477',
        '8ES' => 'E02001476',
        '8ET' => 'E02001476',
        '8EU' => 'E02001476',
        '8EW' => 'E02001476',
        '8EX' => 'E02001476',
        '8EY' => 'E02001476',
        '8EZ' => 'E02001476',
        '8FA' => 'E02001476',
        '8FE' => 'E02001477',
        '8FF' => 'E02001477',
        '8FG' => 'E02001477',
        '8FH' => 'E02001476',
        '8FJ' => 'E02001476',
        '8FL' => 'E02001482',
        '8FN' => 'E02001476',
        '8FP' => 'E02001482',
        '8FQ' => 'E02001476',
        '8FR' => 'E02001482',
        '8FU' => 'E02001482',
        '8FX' => 'E02001482',
        '8FZ' => 'E02001476',
        '8GA' => 'E02001476',
        '8GB' => 'E02001476',
        '8GE' => 'E02001482',
        '8GF' => 'E02001482',
        '8HE' => 'E02001476',
        '8HF' => 'E02001476',
        '8HG' => 'E02001476',
        '8HH' => 'E02001476',
        '8HJ' => 'E02001476',
        '8HL' => 'E02001476',
        '8HN' => 'E02001476',
        '8HP' => 'E02001477',
        '8HR' => 'E02001477',
        '8HS' => 'E02001477',
        '8HT' => 'E02001477',
        '8HU' => 'E02001477',
        '8HW' => 'E02001477',
        '8HX' => 'E02001477',
        '8HY' => 'E02001477',
        '8HZ' => 'E02001477',
        '8JA' => 'E02001477',
        '8JB' => 'E02001477',
        '8JD' => 'E02001477',
        '8JE' => 'E02001477',
        '8JF' => 'E02001477',
        '8JG' => 'E02001477',
        '8JH' => 'E02001477',
        '8JJ' => 'E02001477',
        '8JL' => 'E02001477',
        '8JN' => 'E02001477',
        '8JP' => 'E02001477',
        '8JQ' => 'E02001477',
        '8JR' => 'E02001476',
        '8JS' => 'E02001476',
        '8JT' => 'E02001476',
        '8JU' => 'E02001477',
        '8JW' => 'E02001476',
        '8JY' => 'E02001476',
        '8WA' => 'E02001482',
        '8WB' => 'E02001482',
        '8WJ' => 'E02001476',
        '8WP' => 'E02001482',
        '8WQ' => 'E02001476',
        '8WR' => 'E02001482',
        '8YY' => 'E02001476',
        '8YZ' => 'E02001476',
        '9AA' => 'E02001487',
        '9AB' => 'E02001487',
        '9AD' => 'E02001487',
        '9AE' => 'E02001487',
        '9AF' => 'E02001487',
        '9AG' => 'E02001487',
        '9AH' => 'E02001493',
        '9AJ' => 'E02001487',
        '9AL' => 'E02001487',
        '9AN' => 'E02001487',
        '9AP' => 'E02001487',
        '9AQ' => 'E02001487',
        '9AR' => 'E02001487',
        '9AS' => 'E02001487',
        '9AT' => 'E02001487',
        '9AU' => 'E02001487',
        '9AW' => 'E02001487',
        '9AX' => 'E02001487',
        '9AY' => 'E02001487',
        '9AZ' => 'E02001487',
        '9BA' => 'E02001493',
        '9BG' => 'E02001493',
        '9BJ' => 'E02001487',
        '9BN' => 'E02001487',
        '9BP' => 'E02001487',
        '9BQ' => 'E02001493',
        '9BU' => 'E02001487',
        '9BW' => 'E02001493',
        '9BX' => 'E02001487',
        '9BY' => 'E02001487',
        '9BZ' => 'E02001487',
        '9DA' => 'E02001487',
        '9DB' => 'E02001487',
        '9DD' => 'E02001487',
        '9DE' => 'E02001487',
        '9DF' => 'E02001487',
        '9DG' => 'E02001487',
        '9DH' => 'E02001487',
        '9DJ' => 'E02001487',
        '9DL' => 'E02001487',
        '9DN' => 'E02001487',
        '9DP' => 'E02001487',
        '9DQ' => 'E02001487',
        '9DR' => 'E02001487',
        '9DS' => 'E02001487',
        '9DT' => 'E02001487',
        '9DU' => 'E02001487',
        '9DW' => 'E02001487',
        '9DX' => 'E02001487',
        '9DY' => 'E02001487',
        '9DZ' => 'E02001487',
        '9EA' => 'E02001487',
        '9EB' => 'E02001487',
        '9ED' => 'E02001487',
        '9EE' => 'E02001487',
        '9EF' => 'E02001487',
        '9EG' => 'E02001487',
        '9EH' => 'E02001487',
        '9EJ' => 'E02001487',
        '9EL' => 'E02001487',
        '9EN' => 'E02001487',
        '9EP' => 'E02001487',
        '9EQ' => 'E02001487',
        '9ER' => 'E02001487',
        '9ES' => 'E02001487',
        '9ET' => 'E02001487',
        '9EU' => 'E02001487',
        '9EW' => 'E02001487',
        '9EX' => 'E02001487',
        '9EY' => 'E02001487',
        '9EZ' => 'E02001487',
        '9FB' => 'E02001487',
        '9FD' => 'E02001487',
        '9FR' => 'E02001487',
        '9HA' => 'E02001493',
        '9HB' => 'E02001493',
        '9HD' => 'E02001493',
        '9HE' => 'E02001487',
        '9HF' => 'E02001493',
        '9HH' => 'E02001487',
        '9HJ' => 'E02001487',
        '9HN' => 'E02001487',
        '9HP' => 'E02001493',
        '9HQ' => 'E02001487',
        '9HR' => 'E02001482',
        '9HS' => 'E02001487',
        '9HT' => 'E02001493',
        '9HU' => 'E02001487',
        '9HX' => 'E02001493',
        '9WA' => 'E02001482',
        '9WB' => 'E02001482',
        '9WE' => 'E02001482',
        '9WR' => 'E02001493',
        '9YY' => 'E02001493',
        '9YZ' => 'E02001493',
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
