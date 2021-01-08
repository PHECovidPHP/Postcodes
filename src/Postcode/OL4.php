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
final class OL4
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02001119',
        '1AB' => 'E02001119',
        '1AD' => 'E02001119',
        '1AE' => 'E02001119',
        '1AF' => 'E02001119',
        '1AG' => 'E02001119',
        '1AH' => 'E02001119',
        '1AJ' => 'E02001119',
        '1AL' => 'E02001119',
        '1AN' => 'E02001119',
        '1AP' => 'E02001119',
        '1AQ' => 'E02001119',
        '1AR' => 'E02001119',
        '1AS' => 'E02001119',
        '1AT' => 'E02001119',
        '1AU' => 'E02001119',
        '1AW' => 'E02001119',
        '1AX' => 'E02001119',
        '1AY' => 'E02001119',
        '1AZ' => 'E02001119',
        '1BA' => 'E02001119',
        '1BB' => 'E02001119',
        '1BD' => 'E02001119',
        '1BE' => 'E02001119',
        '1BF' => 'E02001119',
        '1BG' => 'E02001119',
        '1BH' => 'E02001119',
        '1BJ' => 'E02001119',
        '1BL' => 'E02001119',
        '1BN' => 'E02001119',
        '1BP' => 'E02001119',
        '1BQ' => 'E02001119',
        '1BS' => 'E02001119',
        '1BT' => 'E02001119',
        '1BU' => 'E02001119',
        '1BW' => 'E02001119',
        '1BX' => 'E02001119',
        '1BY' => 'E02001119',
        '1BZ' => 'E02001119',
        '1DA' => 'E02001119',
        '1DB' => 'E02001119',
        '1DD' => 'E02001119',
        '1DE' => 'E02001119',
        '1DF' => 'E02001119',
        '1DG' => 'E02001119',
        '1DH' => 'E02001119',
        '1DJ' => 'E02001119',
        '1DL' => 'E02001119',
        '1DN' => 'E02001119',
        '1DP' => 'E02001119',
        '1DQ' => 'E02001119',
        '1DR' => 'E02001119',
        '1DS' => 'E02001119',
        '1DT' => 'E02001119',
        '1DU' => 'E02001119',
        '1DW' => 'E02001119',
        '1DX' => 'E02001119',
        '1DY' => 'E02001119',
        '1DZ' => 'E02001119',
        '1EA' => 'E02001119',
        '1EB' => 'E02001119',
        '1ED' => 'E02001119',
        '1EE' => 'E02001119',
        '1EF' => 'E02001119',
        '1EG' => 'E02001119',
        '1EH' => 'E02001119',
        '1EJ' => 'E02001119',
        '1EL' => 'E02001119',
        '1EN' => 'E02001119',
        '1EP' => 'E02001119',
        '1EQ' => 'E02001119',
        '1ER' => 'E02001119',
        '1ES' => 'E02001119',
        '1ET' => 'E02001119',
        '1EU' => 'E02001119',
        '1EW' => 'E02001119',
        '1EX' => 'E02001119',
        '1EY' => 'E02001119',
        '1EZ' => 'E02001119',
        '1FA' => 'E02001119',
        '1FB' => 'E02001119',
        '1FD' => 'E02001119',
        '1FE' => 'E02001119',
        '1FF' => 'E02001119',
        '1FG' => 'E02001119',
        '1FH' => 'E02001119',
        '1FJ' => 'E02001119',
        '1FL' => 'E02001119',
        '1FN' => 'E02001119',
        '1GL' => 'E02001119',
        '1GZ' => 'E02001119',
        '1HA' => 'E02001116',
        '1HB' => 'E02001116',
        '1HD' => 'E02001116',
        '1HE' => 'E02001116',
        '1HF' => 'E02001116',
        '1HG' => 'E02001116',
        '1HH' => 'E02001116',
        '1HJ' => 'E02001116',
        '1HL' => 'E02001116',
        '1HN' => 'E02001116',
        '1HP' => 'E02001116',
        '1HQ' => 'E02001116',
        '1HR' => 'E02001116',
        '1HS' => 'E02001116',
        '1HT' => 'E02001116',
        '1HU' => 'E02001116',
        '1HW' => 'E02001116',
        '1HX' => 'E02001116',
        '1HY' => 'E02001116',
        '1HZ' => 'E02001116',
        '1JA' => 'E02001116',
        '1JB' => 'E02001119',
        '1JD' => 'E02001119',
        '1JE' => 'E02001119',
        '1JF' => 'E02001119',
        '1JG' => 'E02001111',
        '1JH' => 'E02001119',
        '1JJ' => 'E02001116',
        '1JL' => 'E02001119',
        '1JN' => 'E02001119',
        '1JP' => 'E02001116',
        '1JQ' => 'E02001119',
        '1JR' => 'E02001119',
        '1JS' => 'E02001119',
        '1JT' => 'E02001116',
        '1JU' => 'E02001119',
        '1JW' => 'E02001116',
        '1JX' => 'E02001111',
        '1JY' => 'E02001111',
        '1JZ' => 'E02001116',
        '1LA' => 'E02001116',
        '1LB' => 'E02001116',
        '1LD' => 'E02001116',
        '1LE' => 'E02001116',
        '1LF' => 'E02001111',
        '1LG' => 'E02001116',
        '1LH' => 'E02001116',
        '1LJ' => 'E02001116',
        '1LL' => 'E02001116',
        '1LN' => 'E02001116',
        '1LP' => 'E02001116',
        '1LQ' => 'E02001116',
        '1LR' => 'E02001116',
        '1LS' => 'E02001116',
        '1LT' => 'E02001116',
        '1LU' => 'E02001116',
        '1LW' => 'E02001116',
        '1LX' => 'E02001116',
        '1LY' => 'E02001116',
        '1LZ' => 'E02001116',
        '1NA' => 'E02001116',
        '1NB' => 'E02001116',
        '1ND' => 'E02001116',
        '1NE' => 'E02001116',
        '1NF' => 'E02001116',
        '1NG' => 'E02001116',
        '1NH' => 'E02001116',
        '1NJ' => 'E02001116',
        '1NL' => 'E02001116',
        '1NN' => 'E02001116',
        '1NP' => 'E02001116',
        '1NQ' => 'E02001116',
        '1NR' => 'E02001116',
        '1NS' => 'E02001116',
        '1NT' => 'E02001111',
        '1NU' => 'E02001116',
        '1NW' => 'E02001116',
        '1NX' => 'E02001116',
        '1NY' => 'E02001116',
        '1NZ' => 'E02001116',
        '1PA' => 'E02001116',
        '1PB' => 'E02001116',
        '1PD' => 'E02001116',
        '1PE' => 'E02001116',
        '1PF' => 'E02001116',
        '1PH' => 'E02001119',
        '1PJ' => 'E02001119',
        '1PL' => 'E02001119',
        '1PN' => 'E02001119',
        '1PP' => 'E02001119',
        '1PQ' => 'E02001119',
        '1PR' => 'E02001119',
        '1PS' => 'E02001119',
        '1PT' => 'E02001119',
        '1PU' => 'E02001116',
        '1PW' => 'E02001119',
        '1PX' => 'E02001119',
        '1PZ' => 'E02001116',
        '1QA' => 'E02001119',
        '1QB' => 'E02001119',
        '1QD' => 'E02001119',
        '1QE' => 'E02001119',
        '1QF' => 'E02001119',
        '1QG' => 'E02001119',
        '1QH' => 'E02001119',
        '1QJ' => 'E02001119',
        '1QL' => 'E02001119',
        '1QN' => 'E02001119',
        '1QP' => 'E02001119',
        '1QQ' => 'E02001119',
        '1QR' => 'E02001119',
        '1QS' => 'E02001119',
        '1QT' => 'E02001119',
        '1QU' => 'E02001119',
        '1QW' => 'E02001119',
        '1QX' => 'E02001119',
        '1QY' => 'E02001119',
        '1QZ' => 'E02001119',
        '1RA' => 'E02001123',
        '1RB' => 'E02001123',
        '1RD' => 'E02001119',
        '1RE' => 'E02001119',
        '1RF' => 'E02001123',
        '1RG' => 'E02001123',
        '1RH' => 'E02001119',
        '1RJ' => 'E02001119',
        '1RL' => 'E02001119',
        '1RN' => 'E02001119',
        '1RP' => 'E02001119',
        '1RQ' => 'E02001123',
        '1RR' => 'E02001119',
        '1RS' => 'E02001119',
        '1RT' => 'E02001119',
        '1RU' => 'E02001119',
        '1RW' => 'E02001119',
        '1RX' => 'E02001119',
        '1RY' => 'E02001119',
        '1RZ' => 'E02001119',
        '1SA' => 'E02001121',
        '1SB' => 'E02001119',
        '1SD' => 'E02001119',
        '1SE' => 'E02001119',
        '1SF' => 'E02001119',
        '1SG' => 'E02001119',
        '1SH' => 'E02001119',
        '1SJ' => 'E02001119',
        '1SL' => 'E02001116',
        '1SQ' => 'E02001119',
        '1SR' => 'E02001121',
        '1SS' => 'E02001123',
        '1SU' => 'E02001121',
        '1SX' => 'E02001119',
        '1SY' => 'E02001111',
        '1TD' => 'E02001111',
        '1TE' => 'E02001119',
        '1TF' => 'E02001116',
        '1TG' => 'E02001116',
        '1WS' => 'E02001119',
        '1WT' => 'E02001119',
        '1WU' => 'E02001119',
        '1WW' => 'E02001116',
        '1WX' => 'E02001119',
        '1WY' => 'E02001119',
        '1WZ' => 'E02001111',
        '1XF' => 'E02001119',
        '1XG' => 'E02001119',
        '1XH' => 'E02001119',
        '1XJ' => 'E02001119',
        '1XL' => 'E02001119',
        '1XQ' => 'E02001119',
        '1YN' => 'E02001119',
        '1YR' => 'E02001119',
        '1YS' => 'E02001119',
        '1YT' => 'E02001119',
        '1YU' => 'E02001119',
        '1YW' => 'E02001119',
        '1YX' => 'E02001119',
        '1YY' => 'E02001119',
        '1ZS' => 'E02001119',
        '1ZT' => 'E02001119',
        '2AA' => 'E02001108',
        '2AB' => 'E02001116',
        '2AD' => 'E02001116',
        '2AE' => 'E02001116',
        '2AF' => 'E02001116',
        '2AG' => 'E02001116',
        '2AH' => 'E02001109',
        '2AJ' => 'E02001109',
        '2AL' => 'E02001116',
        '2AN' => 'E02001116',
        '2AP' => 'E02001109',
        '2AQ' => 'E02001109',
        '2AR' => 'E02001119',
        '2AS' => 'E02001109',
        '2AT' => 'E02001104',
        '2AU' => 'E02001104',
        '2AX' => 'E02001116',
        '2AY' => 'E02001109',
        '2AZ' => 'E02001116',
        '2BA' => 'E02001116',
        '2BB' => 'E02001109',
        '2BD' => 'E02001109',
        '2BE' => 'E02001109',
        '2BG' => 'E02001109',
        '2BH' => 'E02001109',
        '2BJ' => 'E02001109',
        '2BL' => 'E02001109',
        '2BN' => 'E02001116',
        '2BP' => 'E02001116',
        '2BQ' => 'E02001109',
        '2BS' => 'E02001116',
        '2BT' => 'E02001116',
        '2BU' => 'E02001109',
        '2BW' => 'E02001116',
        '2BX' => 'E02001116',
        '2BY' => 'E02001116',
        '2BZ' => 'E02001109',
        '2DB' => 'E02001109',
        '2DD' => 'E02001119',
        '2DE' => 'E02001109',
        '2DF' => 'E02001109',
        '2DG' => 'E02001109',
        '2DH' => 'E02001109',
        '2DJ' => 'E02001109',
        '2DL' => 'E02001109',
        '2DN' => 'E02001109',
        '2DP' => 'E02001109',
        '2DQ' => 'E02001109',
        '2DR' => 'E02001109',
        '2DS' => 'E02001109',
        '2DT' => 'E02001109',
        '2DU' => 'E02001109',
        '2DW' => 'E02001109',
        '2DX' => 'E02001109',
        '2DY' => 'E02001109',
        '2DZ' => 'E02001109',
        '2EA' => 'E02001109',
        '2EB' => 'E02001109',
        '2ED' => 'E02001109',
        '2EE' => 'E02001109',
        '2EF' => 'E02001109',
        '2EG' => 'E02001109',
        '2EH' => 'E02001109',
        '2EJ' => 'E02001109',
        '2EL' => 'E02001109',
        '2EN' => 'E02001109',
        '2EP' => 'E02001109',
        '2EQ' => 'E02001109',
        '2ET' => 'E02001109',
        '2EW' => 'E02001109',
        '2EX' => 'E02001109',
        '2EY' => 'E02001109',
        '2FA' => 'E02001109',
        '2FB' => 'E02001119',
        '2FD' => 'E02001109',
        '2FE' => 'E02001109',
        '2FF' => 'E02001109',
        '2FG' => 'E02001109',
        '2FH' => 'E02001109',
        '2FJ' => 'E02001119',
        '2FL' => 'E02001109',
        '2FN' => 'E02001119',
        '2FP' => 'E02001109',
        '2FQ' => 'E02001119',
        '2FR' => 'E02001109',
        '2GA' => 'E02001109',
        '2GE' => 'E02001109',
        '2GY' => 'E02001109',
        '2GZ' => 'E02001109',
        '2HA' => 'E02001109',
        '2HB' => 'E02001109',
        '2HD' => 'E02001109',
        '2HE' => 'E02001109',
        '2HF' => 'E02001109',
        '2HG' => 'E02001109',
        '2HH' => 'E02001109',
        '2HJ' => 'E02001109',
        '2HL' => 'E02001109',
        '2HN' => 'E02001109',
        '2HP' => 'E02001109',
        '2HQ' => 'E02001109',
        '2HR' => 'E02001109',
        '2HS' => 'E02001109',
        '2HT' => 'E02001109',
        '2HU' => 'E02001109',
        '2HW' => 'E02001109',
        '2HX' => 'E02001109',
        '2HY' => 'E02001109',
        '2HZ' => 'E02001109',
        '2JA' => 'E02001109',
        '2JB' => 'E02001109',
        '2JD' => 'E02001109',
        '2JE' => 'E02001109',
        '2JF' => 'E02001109',
        '2JG' => 'E02001109',
        '2JH' => 'E02001109',
        '2JJ' => 'E02001109',
        '2JL' => 'E02001109',
        '2JN' => 'E02001109',
        '2JP' => 'E02001109',
        '2JQ' => 'E02001109',
        '2JR' => 'E02001109',
        '2JS' => 'E02001109',
        '2JT' => 'E02001109',
        '2JU' => 'E02001109',
        '2JW' => 'E02001110',
        '2JX' => 'E02001100',
        '2JY' => 'E02001100',
        '2JZ' => 'E02001100',
        '2LA' => 'E02001104',
        '2LB' => 'E02001109',
        '2LD' => 'E02001104',
        '2LE' => 'E02001104',
        '2LF' => 'E02001104',
        '2LG' => 'E02001104',
        '2LH' => 'E02001109',
        '2LJ' => 'E02001109',
        '2LL' => 'E02001104',
        '2LN' => 'E02001104',
        '2LP' => 'E02001104',
        '2LQ' => 'E02001104',
        '2LR' => 'E02001104',
        '2LS' => 'E02001104',
        '2LT' => 'E02001104',
        '2LU' => 'E02001104',
        '2LW' => 'E02001104',
        '2LX' => 'E02001104',
        '2LY' => 'E02001109',
        '2LZ' => 'E02001104',
        '2NA' => 'E02001104',
        '2NB' => 'E02001104',
        '2ND' => 'E02001104',
        '2NE' => 'E02001104',
        '2NF' => 'E02001104',
        '2NG' => 'E02001104',
        '2NH' => 'E02001104',
        '2NJ' => 'E02001104',
        '2NL' => 'E02001104',
        '2NN' => 'E02001104',
        '2NP' => 'E02001104',
        '2NQ' => 'E02001104',
        '2NR' => 'E02001109',
        '2NS' => 'E02001109',
        '2NT' => 'E02001109',
        '2NU' => 'E02001109',
        '2NW' => 'E02001104',
        '2NX' => 'E02001109',
        '2NY' => 'E02001109',
        '2NZ' => 'E02001109',
        '2PA' => 'E02001109',
        '2PB' => 'E02001109',
        '2PD' => 'E02001109',
        '2PE' => 'E02001109',
        '2PF' => 'E02001109',
        '2PG' => 'E02001109',
        '2PH' => 'E02001109',
        '2PJ' => 'E02001109',
        '2PL' => 'E02001109',
        '2PN' => 'E02001109',
        '2PP' => 'E02001109',
        '2PQ' => 'E02001109',
        '2PR' => 'E02001109',
        '2PS' => 'E02001109',
        '2PT' => 'E02001109',
        '2PU' => 'E02001109',
        '2PW' => 'E02001109',
        '2PX' => 'E02001104',
        '2PY' => 'E02001104',
        '2PZ' => 'E02001104',
        '2QA' => 'E02001104',
        '2QB' => 'E02001104',
        '2QD' => 'E02001104',
        '2QE' => 'E02001104',
        '2QF' => 'E02001104',
        '2QG' => 'E02001104',
        '2QH' => 'E02001104',
        '2QJ' => 'E02001104',
        '2QL' => 'E02001104',
        '2QN' => 'E02001104',
        '2QP' => 'E02001109',
        '2QQ' => 'E02001104',
        '2QR' => 'E02001104',
        '2QS' => 'E02001104',
        '2QT' => 'E02001109',
        '2QU' => 'E02001109',
        '2QW' => 'E02001104',
        '2QX' => 'E02001109',
        '2QY' => 'E02001109',
        '2QZ' => 'E02001109',
        '2RA' => 'E02001104',
        '2RB' => 'E02001109',
        '2RD' => 'E02001109',
        '2RE' => 'E02001109',
        '2RF' => 'E02001109',
        '2RG' => 'E02001109',
        '2RH' => 'E02001109',
        '2RJ' => 'E02001109',
        '2RL' => 'E02001109',
        '2RN' => 'E02001109',
        '2RP' => 'E02001109',
        '2RQ' => 'E02001109',
        '2RR' => 'E02001109',
        '2RS' => 'E02001109',
        '2RT' => 'E02001109',
        '2RU' => 'E02001109',
        '2RW' => 'E02001109',
        '2RX' => 'E02001109',
        '2RY' => 'E02001109',
        '2RZ' => 'E02001109',
        '2SA' => 'E02001109',
        '2SB' => 'E02001109',
        '2SD' => 'E02001109',
        '2SE' => 'E02001109',
        '2SF' => 'E02001109',
        '2SG' => 'E02001109',
        '2SH' => 'E02001109',
        '2SJ' => 'E02001109',
        '2SL' => 'E02001109',
        '2SN' => 'E02001109',
        '2SP' => 'E02001109',
        '2SQ' => 'E02001119',
        '2SR' => 'E02001109',
        '2SS' => 'E02001109',
        '2ST' => 'E02001109',
        '2SU' => 'E02001110',
        '2SW' => 'E02001109',
        '2SX' => 'E02001109',
        '2SY' => 'E02001104',
        '2SZ' => 'E02001104',
        '2TA' => 'E02001109',
        '2TB' => 'E02001109',
        '2TD' => 'E02001109',
        '2TE' => 'E02001104',
        '2TF' => 'E02001104',
        '2TG' => 'E02001104',
        '2TH' => 'E02001104',
        '2TJ' => 'E02001104',
        '2TQ' => 'E02001104',
        '2TS' => 'E02001104',
        '2UY' => 'E02001109',
        '2UZ' => 'E02001109',
        '2WW' => 'E02001109',
        '2WY' => 'E02001119',
        '2WZ' => 'E02001119',
        '2XA' => 'E02001104',
        '2XB' => 'E02001109',
        '2XD' => 'E02001109',
        '2XE' => 'E02001119',
        '2YS' => 'E02001109',
        '3AA' => 'E02001123',
        '3AB' => 'E02001116',
        '3AD' => 'E02001109',
        '3AE' => 'E02001116',
        '3AF' => 'E02001116',
        '3AG' => 'E02001116',
        '3AH' => 'E02001116',
        '3AJ' => 'E02001116',
        '3AL' => 'E02001116',
        '3AN' => 'E02001116',
        '3AP' => 'E02001116',
        '3AQ' => 'E02001116',
        '3AR' => 'E02001116',
        '3AS' => 'E02001116',
        '3AT' => 'E02001116',
        '3AU' => 'E02001116',
        '3AW' => 'E02001116',
        '3AX' => 'E02001116',
        '3AY' => 'E02001116',
        '3AZ' => 'E02001116',
        '3BA' => 'E02001116',
        '3BB' => 'E02001116',
        '3BD' => 'E02001116',
        '3BE' => 'E02001116',
        '3BF' => 'E02001116',
        '3BG' => 'E02001116',
        '3BH' => 'E02001123',
        '3BJ' => 'E02001116',
        '3BL' => 'E02001115',
        '3BN' => 'E02001115',
        '3BP' => 'E02001123',
        '3BQ' => 'E02001116',
        '3BS' => 'E02001115',
        '3BT' => 'E02001123',
        '3BU' => 'E02001116',
        '3BW' => 'E02001115',
        '3BX' => 'E02001123',
        '3BY' => 'E02001115',
        '3BZ' => 'E02001123',
        '3DA' => 'E02001115',
        '3DB' => 'E02001123',
        '3DD' => 'E02001123',
        '3DE' => 'E02001123',
        '3DF' => 'E02001115',
        '3DG' => 'E02001123',
        '3DH' => 'E02001115',
        '3DJ' => 'E02001115',
        '3DL' => 'E02001115',
        '3DN' => 'E02001115',
        '3DP' => 'E02001115',
        '3DQ' => 'E02001123',
        '3DR' => 'E02001115',
        '3DS' => 'E02001115',
        '3DT' => 'E02001115',
        '3DU' => 'E02001115',
        '3DW' => 'E02001115',
        '3DX' => 'E02001115',
        '3DY' => 'E02001115',
        '3DZ' => 'E02001123',
        '3EA' => 'E02001116',
        '3EB' => 'E02001116',
        '3ED' => 'E02001116',
        '3EE' => 'E02001116',
        '3EF' => 'E02001116',
        '3EG' => 'E02001116',
        '3EH' => 'E02001109',
        '3EJ' => 'E02001109',
        '3EL' => 'E02001109',
        '3EN' => 'E02001109',
        '3EP' => 'E02001109',
        '3EQ' => 'E02001116',
        '3ER' => 'E02001109',
        '3ES' => 'E02001109',
        '3ET' => 'E02001109',
        '3EU' => 'E02001109',
        '3EW' => 'E02001109',
        '3EX' => 'E02001109',
        '3EY' => 'E02001109',
        '3EZ' => 'E02001109',
        '3FA' => 'E02001109',
        '3FB' => 'E02001119',
        '3FD' => 'E02001115',
        '3FE' => 'E02001119',
        '3FF' => 'E02001115',
        '3FG' => 'E02001115',
        '3FH' => 'E02001119',
        '3FJ' => 'E02001119',
        '3FL' => 'E02001123',
        '3FN' => 'E02001115',
        '3FP' => 'E02001123',
        '3FQ' => 'E02001123',
        '3FR' => 'E02001123',
        '3FS' => 'E02001109',
        '3FT' => 'E02001109',
        '3FU' => 'E02001109',
        '3HA' => 'E02001109',
        '3HB' => 'E02001109',
        '3HD' => 'E02001109',
        '3HE' => 'E02001109',
        '3HF' => 'E02001109',
        '3HG' => 'E02001116',
        '3HH' => 'E02001116',
        '3HJ' => 'E02001116',
        '3HL' => 'E02001109',
        '3HS' => 'E02001109',
        '3HT' => 'E02001109',
        '3JA' => 'E02001109',
        '3JB' => 'E02001115',
        '3JD' => 'E02001115',
        '3JE' => 'E02001115',
        '3JH' => 'E02001115',
        '3JJ' => 'E02001115',
        '3JL' => 'E02001115',
        '3JN' => 'E02001115',
        '3JP' => 'E02001115',
        '3JQ' => 'E02001115',
        '3JR' => 'E02001115',
        '3JS' => 'E02001115',
        '3JT' => 'E02001115',
        '3JU' => 'E02001115',
        '3JW' => 'E02001115',
        '3JX' => 'E02001115',
        '3JY' => 'E02001115',
        '3JZ' => 'E02001115',
        '3LA' => 'E02001115',
        '3LB' => 'E02001115',
        '3LD' => 'E02001115',
        '3LE' => 'E02001115',
        '3LF' => 'E02001115',
        '3LG' => 'E02001115',
        '3LH' => 'E02001115',
        '3LJ' => 'E02001115',
        '3LL' => 'E02001115',
        '3LN' => 'E02001115',
        '3LP' => 'E02001123',
        '3LQ' => 'E02001115',
        '3LR' => 'E02001115',
        '3LS' => 'E02001115',
        '3LT' => 'E02001115',
        '3LU' => 'E02001115',
        '3LW' => 'E02001115',
        '3LX' => 'E02001123',
        '3LY' => 'E02001123',
        '3NA' => 'E02001119',
        '3NB' => 'E02001115',
        '3ND' => 'E02001115',
        '3NE' => 'E02001115',
        '3NF' => 'E02001115',
        '3NG' => 'E02001115',
        '3NH' => 'E02001115',
        '3NJ' => 'E02001115',
        '3NL' => 'E02001115',
        '3NN' => 'E02001110',
        '3NP' => 'E02001115',
        '3NQ' => 'E02001115',
        '3NR' => 'E02001115',
        '3NS' => 'E02001109',
        '3NT' => 'E02001115',
        '3NU' => 'E02001115',
        '3NW' => 'E02001115',
        '3NX' => 'E02001115',
        '3NY' => 'E02001110',
        '3NZ' => 'E02001115',
        '3PA' => 'E02001110',
        '3PB' => 'E02001115',
        '3PD' => 'E02001123',
        '3PH' => 'E02001115',
        '3PP' => 'E02001115',
        '3PQ' => 'E02001115',
        '3PR' => 'E02001115',
        '3PX' => 'E02001118',
        '3PY' => 'E02001115',
        '3PZ' => 'E02001115',
        '3QA' => 'E02001110',
        '3QB' => 'E02001110',
        '3QD' => 'E02001110',
        '3QE' => 'E02001110',
        '3QL' => 'E02001110',
        '3QN' => 'E02001110',
        '3QP' => 'E02001110',
        '3QR' => 'E02001110',
        '3QU' => 'E02001110',
        '3QW' => 'E02001110',
        '3RA' => 'E02001110',
        '3RB' => 'E02001110',
        '3RD' => 'E02001110',
        '3RE' => 'E02001110',
        '3RF' => 'E02001110',
        '3RG' => 'E02001110',
        '3RH' => 'E02001110',
        '3RU' => 'E02001110',
        '3RX' => 'E02001110',
        '3RY' => 'E02001110',
        '3RZ' => 'E02001110',
        '3SA' => 'E02001110',
        '3SB' => 'E02001110',
        '3SD' => 'E02001110',
        '3SE' => 'E02001110',
        '3SF' => 'E02001110',
        '3SG' => 'E02001110',
        '3SZ' => 'E02001110',
        '3WA' => 'E02001110',
        '3WB' => 'E02001119',
        '3WX' => 'E02001119',
        '3WY' => 'E02001110',
        '3WZ' => 'E02001119',
        '3ZY' => 'E02001110',
        '4AA' => 'E02001110',
        '4AB' => 'E02001110',
        '4AD' => 'E02001110',
        '4AE' => 'E02001110',
        '4AF' => 'E02001110',
        '4AG' => 'E02001110',
        '4AJ' => 'E02001110',
        '4AN' => 'E02001110',
        '4AP' => 'E02001110',
        '4AQ' => 'E02001118',
        '4AR' => 'E02001110',
        '4AS' => 'E02001118',
        '4AT' => 'E02001118',
        '4AW' => 'E02001110',
        '4AY' => 'E02001110',
        '4AZ' => 'E02001110',
        '4BA' => 'E02001110',
        '4BB' => 'E02001118',
        '4BD' => 'E02001118',
        '4BE' => 'E02001118',
        '4BG' => 'E02001118',
        '4BH' => 'E02001118',
        '4BJ' => 'E02001118',
        '4BL' => 'E02001118',
        '4BN' => 'E02001118',
        '4BP' => 'E02001118',
        '4BQ' => 'E02001118',
        '4BS' => 'E02001110',
        '4BT' => 'E02001118',
        '4BU' => 'E02001118',
        '4BW' => 'E02001118',
        '4BX' => 'E02001110',
        '4BY' => 'E02001118',
        '4BZ' => 'E02001110',
        '4DA' => 'E02001110',
        '4DB' => 'E02001110',
        '4DD' => 'E02001118',
        '4DG' => 'E02001118',
        '4DJ' => 'E02001119',
        '4DL' => 'E02001118',
        '4DN' => 'E02001118',
        '4DP' => 'E02001118',
        '4DR' => 'E02001118',
        '4DS' => 'E02001118',
        '4DT' => 'E02001118',
        '4DU' => 'E02001118',
        '4DW' => 'E02001118',
        '4DX' => 'E02001118',
        '4DY' => 'E02001118',
        '4DZ' => 'E02001118',
        '4EA' => 'E02001118',
        '4EB' => 'E02001110',
        '4ED' => 'E02001110',
        '4EE' => 'E02001110',
        '4EF' => 'E02001118',
        '4EG' => 'E02001110',
        '4EH' => 'E02001118',
        '4EJ' => 'E02001119',
        '4EL' => 'E02001118',
        '4EN' => 'E02001118',
        '4EP' => 'E02001118',
        '4EQ' => 'E02001110',
        '4ER' => 'E02001118',
        '4ES' => 'E02001118',
        '4ET' => 'E02001118',
        '4EU' => 'E02001118',
        '4EW' => 'E02001118',
        '4EX' => 'E02001110',
        '4EY' => 'E02001110',
        '4EZ' => 'E02001110',
        '4FA' => 'E02001119',
        '4FB' => 'E02001118',
        '4FD' => 'E02001110',
        '4FE' => 'E02001118',
        '4FF' => 'E02001119',
        '4FG' => 'E02001110',
        '4FH' => 'E02001119',
        '4FJ' => 'E02001110',
        '4FL' => 'E02001119',
        '4FN' => 'E02001119',
        '4FP' => 'E02001119',
        '4FQ' => 'E02001119',
        '4GH' => 'E02001110',
        '4GS' => 'E02001110',
        '4HA' => 'E02001118',
        '4HB' => 'E02001110',
        '4HD' => 'E02001110',
        '4HE' => 'E02001110',
        '4HF' => 'E02001110',
        '4HG' => 'E02001110',
        '4HH' => 'E02001110',
        '4HJ' => 'E02001110',
        '4HL' => 'E02001110',
        '4HN' => 'E02001110',
        '4HP' => 'E02001118',
        '4HQ' => 'E02001110',
        '4HR' => 'E02001110',
        '4HS' => 'E02001110',
        '4HT' => 'E02001110',
        '4HU' => 'E02001110',
        '4HW' => 'E02001110',
        '4HX' => 'E02001110',
        '4HY' => 'E02001118',
        '4HZ' => 'E02001118',
        '4JA' => 'E02001118',
        '4JB' => 'E02001118',
        '4JD' => 'E02001118',
        '4JE' => 'E02001118',
        '4JF' => 'E02001118',
        '4JG' => 'E02001110',
        '4JH' => 'E02001118',
        '4JJ' => 'E02001118',
        '4JL' => 'E02001118',
        '4JN' => 'E02001118',
        '4JP' => 'E02001118',
        '4JQ' => 'E02001118',
        '4JR' => 'E02001110',
        '4JS' => 'E02001118',
        '4JT' => 'E02001110',
        '4JU' => 'E02001110',
        '4JW' => 'E02001110',
        '4JX' => 'E02001118',
        '4JY' => 'E02001110',
        '4JZ' => 'E02001118',
        '4LA' => 'E02001118',
        '4LB' => 'E02001118',
        '4LD' => 'E02001118',
        '4LE' => 'E02001110',
        '4LF' => 'E02001115',
        '4LG' => 'E02001118',
        '4LH' => 'E02001110',
        '4LJ' => 'E02001118',
        '4LL' => 'E02001118',
        '4LN' => 'E02001118',
        '4LP' => 'E02001118',
        '4LQ' => 'E02001118',
        '4LR' => 'E02001110',
        '4LS' => 'E02001118',
        '4LT' => 'E02001123',
        '4LU' => 'E02001123',
        '4LW' => 'E02001118',
        '4LX' => 'E02001115',
        '4LY' => 'E02001115',
        '4LZ' => 'E02001115',
        '4NA' => 'E02001115',
        '4NB' => 'E02001115',
        '4ND' => 'E02001115',
        '4NE' => 'E02001115',
        '4NF' => 'E02001115',
        '4NG' => 'E02001115',
        '4NH' => 'E02001115',
        '4NJ' => 'E02001115',
        '4NL' => 'E02001115',
        '4NN' => 'E02001115',
        '4NP' => 'E02001115',
        '4NQ' => 'E02001115',
        '4NR' => 'E02001118',
        '4NS' => 'E02001115',
        '4NT' => 'E02001115',
        '4NU' => 'E02001115',
        '4NW' => 'E02001115',
        '4NX' => 'E02001115',
        '4NY' => 'E02001115',
        '4NZ' => 'E02001115',
        '4PA' => 'E02001115',
        '4PB' => 'E02001118',
        '4PD' => 'E02001118',
        '4PE' => 'E02001118',
        '4PF' => 'E02001118',
        '4PG' => 'E02001118',
        '4PH' => 'E02001118',
        '4PJ' => 'E02001118',
        '4PL' => 'E02001118',
        '4PN' => 'E02001118',
        '4PP' => 'E02001115',
        '4PQ' => 'E02001118',
        '4PR' => 'E02001118',
        '4PS' => 'E02001115',
        '4PT' => 'E02001115',
        '4PU' => 'E02001115',
        '4PW' => 'E02001115',
        '4PX' => 'E02001119',
        '4PY' => 'E02001118',
        '4PZ' => 'E02001118',
        '4QA' => 'E02001118',
        '4QB' => 'E02001118',
        '4QD' => 'E02001118',
        '4QE' => 'E02001118',
        '4QF' => 'E02001118',
        '4QG' => 'E02001118',
        '4QH' => 'E02001118',
        '4QJ' => 'E02001118',
        '4QL' => 'E02001118',
        '4QN' => 'E02001118',
        '4QP' => 'E02001118',
        '4QQ' => 'E02001118',
        '4QR' => 'E02001118',
        '4QS' => 'E02001118',
        '4QT' => 'E02001118',
        '4QU' => 'E02001118',
        '4QW' => 'E02001118',
        '4QX' => 'E02001118',
        '4QY' => 'E02001115',
        '4QZ' => 'E02001115',
        '4RB' => 'E02001115',
        '4RD' => 'E02001115',
        '4RE' => 'E02001115',
        '4RF' => 'E02001115',
        '4RG' => 'E02001115',
        '4RH' => 'E02001115',
        '4RJ' => 'E02001118',
        '4RL' => 'E02001110',
        '4RN' => 'E02001110',
        '4RP' => 'E02001115',
        '4RQ' => 'E02001115',
        '4RR' => 'E02001115',
        '4RS' => 'E02001110',
        '4RT' => 'E02001118',
        '4RU' => 'E02001115',
        '4RW' => 'E02001115',
        '4RX' => 'E02001118',
        '4RY' => 'E02001110',
        '4RZ' => 'E02001110',
        '4SA' => 'E02001115',
        '4SB' => 'E02001110',
        '4SD' => 'E02001115',
        '4SE' => 'E02001115',
        '4SF' => 'E02001115',
        '4SG' => 'E02001115',
        '4SH' => 'E02001115',
        '4SJ' => 'E02001118',
        '4SL' => 'E02001118',
        '4SN' => 'E02001115',
        '4SP' => 'E02001118',
        '4SQ' => 'E02001118',
        '4SW' => 'E02001115',
        '4SX' => 'E02001115',
        '4TZ' => 'E02001118',
        '4WA' => 'E02001115',
        '4WB' => 'E02001119',
        '4WT' => 'E02001119',
        '4WU' => 'E02001115',
        '4WW' => 'E02001119',
        '4WX' => 'E02001115',
        '4WY' => 'E02001119',
        '4WZ' => 'E02001119',
        '4XJ' => 'E02001119',
        '4YZ' => 'E02001119',
        '4ZT' => 'E02001119',
        '5AA' => 'E02001115',
        '5AB' => 'E02001115',
        '5AD' => 'E02001123',
        '5AE' => 'E02001123',
        '5AF' => 'E02001123',
        '5AG' => 'E02001123',
        '5AH' => 'E02001115',
        '5AJ' => 'E02001123',
        '5AL' => 'E02001115',
        '5AN' => 'E02001115',
        '5AP' => 'E02001115',
        '5AQ' => 'E02001115',
        '5AR' => 'E02001115',
        '5AS' => 'E02001123',
        '5AT' => 'E02001115',
        '5AU' => 'E02001119',
        '5AW' => 'E02001115',
        '5AX' => 'E02001115',
        '5AY' => 'E02001123',
        '5AZ' => 'E02001123',
        '5BA' => 'E02001123',
        '5BB' => 'E02001123',
        '5BD' => 'E02001123',
        '5BE' => 'E02001123',
        '5BF' => 'E02001123',
        '5BG' => 'E02001123',
        '5BH' => 'E02001123',
        '5BJ' => 'E02001123',
        '5BL' => 'E02001123',
        '5BN' => 'E02001123',
        '5BP' => 'E02001123',
        '5BQ' => 'E02001123',
        '5BS' => 'E02001123',
        '5BT' => 'E02001123',
        '5BU' => 'E02001123',
        '5BW' => 'E02001123',
        '5BX' => 'E02001123',
        '5BY' => 'E02001123',
        '5BZ' => 'E02001123',
        '5DA' => 'E02001115',
        '5DB' => 'E02001115',
        '5DD' => 'E02001123',
        '5DE' => 'E02001123',
        '5DF' => 'E02001115',
        '5DG' => 'E02001115',
        '5DH' => 'E02001115',
        '5DJ' => 'E02001115',
        '5DL' => 'E02001115',
        '5DN' => 'E02001115',
        '5DP' => 'E02001118',
        '5DQ' => 'E02001115',
        '5DR' => 'E02001118',
        '5DS' => 'E02001118',
        '5DT' => 'E02001118',
        '5DU' => 'E02001115',
        '5DW' => 'E02001123',
        '5DX' => 'E02001123',
        '5EA' => 'E02001115',
        '5EB' => 'E02001115',
        '5ED' => 'E02001115',
        '5EE' => 'E02001115',
        '5EF' => 'E02001115',
        '5EG' => 'E02001115',
        '5EH' => 'E02001116',
        '5EP' => 'E02001116',
        '5EQ' => 'E02001123',
        '5ER' => 'E02001116',
        '5ES' => 'E02001116',
        '5ET' => 'E02001116',
        '5EU' => 'E02001116',
        '5EX' => 'E02001116',
        '5EY' => 'E02001116',
        '5EZ' => 'E02001116',
        '5FA' => 'E02001116',
        '5FB' => 'E02001123',
        '5FD' => 'E02001123',
        '5FE' => 'E02001123',
        '5FF' => 'E02001123',
        '5FG' => 'E02001119',
        '5FH' => 'E02001119',
        '5FJ' => 'E02001123',
        '5FL' => 'E02001123',
        '5GX' => 'E02001123',
        '5GY' => 'E02001123',
        '5GZ' => 'E02001123',
        '5HA' => 'E02001116',
        '5HB' => 'E02001116',
        '5HD' => 'E02001116',
        '5HE' => 'E02001116',
        '5HF' => 'E02001116',
        '5HG' => 'E02001116',
        '5HH' => 'E02001116',
        '5HJ' => 'E02001116',
        '5HL' => 'E02001116',
        '5HN' => 'E02001116',
        '5HP' => 'E02001116',
        '5HQ' => 'E02001116',
        '5HR' => 'E02001116',
        '5HS' => 'E02001116',
        '5HT' => 'E02001116',
        '5HU' => 'E02001116',
        '5HW' => 'E02001116',
        '5HX' => 'E02001116',
        '5HY' => 'E02001116',
        '5HZ' => 'E02001116',
        '5JA' => 'E02001116',
        '5JB' => 'E02001116',
        '5JD' => 'E02001116',
        '5JE' => 'E02001116',
        '5JF' => 'E02001116',
        '5JG' => 'E02001116',
        '5JH' => 'E02001118',
        '5JJ' => 'E02001118',
        '5JL' => 'E02001116',
        '5JN' => 'E02001123',
        '5JQ' => 'E02001116',
        '5JU' => 'E02001116',
        '5JW' => 'E02001116',
        '5JX' => 'E02001116',
        '5JY' => 'E02001116',
        '5JZ' => 'E02001116',
        '5LA' => 'E02001119',
        '5LB' => 'E02001116',
        '5LD' => 'E02001119',
        '5LE' => 'E02001119',
        '5LF' => 'E02001116',
        '5LG' => 'E02001116',
        '5LH' => 'E02001119',
        '5LJ' => 'E02001116',
        '5LL' => 'E02001116',
        '5LN' => 'E02001116',
        '5LW' => 'E02001116',
        '5LX' => 'E02001123',
        '5LY' => 'E02001123',
        '5LZ' => 'E02001123',
        '5NA' => 'E02001123',
        '5NB' => 'E02001123',
        '5ND' => 'E02001123',
        '5NE' => 'E02001123',
        '5NF' => 'E02001123',
        '5NG' => 'E02001123',
        '5NH' => 'E02001123',
        '5NJ' => 'E02001123',
        '5NL' => 'E02001123',
        '5NN' => 'E02001123',
        '5NP' => 'E02001123',
        '5NQ' => 'E02001123',
        '5NR' => 'E02001123',
        '5NS' => 'E02001123',
        '5NT' => 'E02001123',
        '5NU' => 'E02001123',
        '5NW' => 'E02001123',
        '5NX' => 'E02001123',
        '5NY' => 'E02001123',
        '5NZ' => 'E02001123',
        '5PA' => 'E02001123',
        '5PB' => 'E02001123',
        '5PD' => 'E02001123',
        '5PE' => 'E02001115',
        '5PF' => 'E02001115',
        '5PG' => 'E02001123',
        '5PH' => 'E02001123',
        '5PJ' => 'E02001123',
        '5PL' => 'E02001123',
        '5PN' => 'E02001115',
        '5PP' => 'E02001115',
        '5PQ' => 'E02001123',
        '5PR' => 'E02001115',
        '5PS' => 'E02001115',
        '5PT' => 'E02001115',
        '5PU' => 'E02001115',
        '5PW' => 'E02001115',
        '5PX' => 'E02001115',
        '5PY' => 'E02001115',
        '5PZ' => 'E02001123',
        '5QA' => 'E02001123',
        '5QB' => 'E02001123',
        '5QD' => 'E02001123',
        '5QE' => 'E02001123',
        '5QF' => 'E02001123',
        '5QG' => 'E02001123',
        '5QH' => 'E02001115',
        '5QJ' => 'E02001123',
        '5QL' => 'E02001115',
        '5QN' => 'E02001118',
        '5QQ' => 'E02001123',
        '5QR' => 'E02001118',
        '5QS' => 'E02001118',
        '5QT' => 'E02001118',
        '5QU' => 'E02001118',
        '5QW' => 'E02001118',
        '5QX' => 'E02001118',
        '5QY' => 'E02001118',
        '5QZ' => 'E02001118',
        '5RA' => 'E02001118',
        '5RB' => 'E02001118',
        '5RD' => 'E02001118',
        '5RE' => 'E02001118',
        '5RF' => 'E02001118',
        '5RG' => 'E02001118',
        '5RH' => 'E02001118',
        '5RJ' => 'E02001118',
        '5RL' => 'E02001118',
        '5RN' => 'E02001118',
        '5RP' => 'E02001118',
        '5RQ' => 'E02001118',
        '5RR' => 'E02001123',
        '5RS' => 'E02001123',
        '5RT' => 'E02001123',
        '5RU' => 'E02001115',
        '5RW' => 'E02001115',
        '5RX' => 'E02001115',
        '5RY' => 'E02001115',
        '5RZ' => 'E02001118',
        '5SA' => 'E02001118',
        '5SB' => 'E02001118',
        '5SD' => 'E02001118',
        '5SE' => 'E02001118',
        '5SF' => 'E02001118',
        '5SG' => 'E02001118',
        '5SH' => 'E02001118',
        '5SJ' => 'E02001118',
        '5SL' => 'E02001118',
        '5SN' => 'E02001118',
        '5SP' => 'E02001118',
        '5SQ' => 'E02001118',
        '5SR' => 'E02001118',
        '5SS' => 'E02001118',
        '5ST' => 'E02001118',
        '5SU' => 'E02001118',
        '5SW' => 'E02001118',
        '5SX' => 'E02001118',
        '5SY' => 'E02001118',
        '5SZ' => 'E02001118',
        '5TA' => 'E02001118',
        '5TB' => 'E02001118',
        '5TD' => 'E02001118',
        '5TE' => 'E02001118',
        '5TF' => 'E02001118',
        '5TG' => 'E02001118',
        '5TH' => 'E02001118',
        '5TJ' => 'E02001118',
        '5TL' => 'E02001118',
        '5TN' => 'E02001118',
        '5TP' => 'E02001118',
        '5TQ' => 'E02001118',
        '5TR' => 'E02001118',
        '5TS' => 'E02001118',
        '5TT' => 'E02001118',
        '5TW' => 'E02001118',
        '5TX' => 'E02001118',
        '5TY' => 'E02001118',
        '5UA' => 'E02001118',
        '5UB' => 'E02001118',
        '5UD' => 'E02001115',
        '5UY' => 'E02001111',
        '5UZ' => 'E02001111',
        '5WJ' => 'E02001111',
        '5WT' => 'E02001119',
        '5WU' => 'E02001119',
        '5WW' => 'E02001111',
        '5WX' => 'E02001119',
        '5WY' => 'E02001119',
        '5WZ' => 'E02001119',
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
