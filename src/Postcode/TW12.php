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
final class TW12
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02000803',
        '1AB' => 'E02000803',
        '1AD' => 'E02000803',
        '1AE' => 'E02000803',
        '1AF' => 'E02000803',
        '1AG' => 'E02000803',
        '1AH' => 'E02000803',
        '1AJ' => 'E02000803',
        '1AL' => 'E02000803',
        '1AN' => 'E02000803',
        '1AP' => 'E02000803',
        '1AQ' => 'E02000803',
        '1AR' => 'E02000803',
        '1AS' => 'E02000803',
        '1AT' => 'E02000803',
        '1AU' => 'E02000803',
        '1AW' => 'E02000803',
        '1AX' => 'E02000803',
        '1AY' => 'E02000803',
        '1AZ' => 'E02000803',
        '1BA' => 'E02000803',
        '1BB' => 'E02000806',
        '1BD' => 'E02000803',
        '1BE' => 'E02000803',
        '1BF' => 'E02000803',
        '1BG' => 'E02000803',
        '1BH' => 'E02000803',
        '1BJ' => 'E02000802',
        '1BL' => 'E02000803',
        '1BN' => 'E02000803',
        '1BP' => 'E02000802',
        '1BQ' => 'E02000803',
        '1BS' => 'E02000803',
        '1BT' => 'E02000806',
        '1BU' => 'E02000802',
        '1BW' => 'E02000802',
        '1BX' => 'E02000806',
        '1BY' => 'E02000802',
        '1BZ' => 'E02000802',
        '1DA' => 'E02000802',
        '1DB' => 'E02000802',
        '1DD' => 'E02000802',
        '1DE' => 'E02000802',
        '1DF' => 'E02000802',
        '1DG' => 'E02000802',
        '1DH' => 'E02000802',
        '1DJ' => 'E02000802',
        '1DL' => 'E02000802',
        '1DN' => 'E02000802',
        '1DP' => 'E02000802',
        '1DQ' => 'E02000802',
        '1DR' => 'E02000802',
        '1DS' => 'E02000802',
        '1DT' => 'E02000802',
        '1DU' => 'E02000802',
        '1DW' => 'E02000802',
        '1DX' => 'E02000802',
        '1DY' => 'E02000802',
        '1DZ' => 'E02000802',
        '1EA' => 'E02000806',
        '1EB' => 'E02000802',
        '1ED' => 'E02000803',
        '1EE' => 'E02000803',
        '1EF' => 'E02000803',
        '1EG' => 'E02000803',
        '1EH' => 'E02000803',
        '1EJ' => 'E02000803',
        '1EL' => 'E02000803',
        '1EN' => 'E02000803',
        '1EP' => 'E02000803',
        '1EQ' => 'E02000803',
        '1ER' => 'E02000803',
        '1ES' => 'E02000803',
        '1ET' => 'E02000803',
        '1EU' => 'E02000803',
        '1EW' => 'E02000803',
        '1EX' => 'E02000806',
        '1EZ' => 'E02000806',
        '1GL' => 'E02000806',
        '1GW' => 'E02000806',
        '1HA' => 'E02000802',
        '1HB' => 'E02000802',
        '1HD' => 'E02000802',
        '1HE' => 'E02000802',
        '1HF' => 'E02000802',
        '1HG' => 'E02000802',
        '1HH' => 'E02000802',
        '1HJ' => 'E02000802',
        '1HL' => 'E02000802',
        '1HN' => 'E02000802',
        '1HP' => 'E02000802',
        '1HQ' => 'E02000802',
        '1HR' => 'E02000802',
        '1HS' => 'E02000802',
        '1HT' => 'E02000803',
        '1HU' => 'E02000802',
        '1HW' => 'E02000802',
        '1HX' => 'E02000802',
        '1HY' => 'E02000803',
        '1HZ' => 'E02000806',
        '1JA' => 'E02000802',
        '1JB' => 'E02000802',
        '1JD' => 'E02000802',
        '1JE' => 'E02000802',
        '1JF' => 'E02000802',
        '1JG' => 'E02000802',
        '1JH' => 'E02000802',
        '1JJ' => 'E02000802',
        '1JL' => 'E02000802',
        '1JN' => 'E02000802',
        '1JP' => 'E02000802',
        '1JQ' => 'E02000802',
        '1JR' => 'E02000802',
        '1JS' => 'E02000802',
        '1JT' => 'E02000802',
        '1JU' => 'E02000802',
        '1JW' => 'E02000802',
        '1JX' => 'E02000802',
        '1JY' => 'E02000802',
        '1JZ' => 'E02000802',
        '1LA' => 'E02000802',
        '1LB' => 'E02000802',
        '1LD' => 'E02000802',
        '1LE' => 'E02000802',
        '1LF' => 'E02000802',
        '1LG' => 'E02000802',
        '1LH' => 'E02000802',
        '1LJ' => 'E02000802',
        '1LL' => 'E02000802',
        '1LN' => 'E02000802',
        '1LQ' => 'E02000802',
        '1LW' => 'E02000802',
        '1LY' => 'E02000802',
        '1LZ' => 'E02000802',
        '1NA' => 'E02000802',
        '1NB' => 'E02000802',
        '1ND' => 'E02000802',
        '1NE' => 'E02000802',
        '1NF' => 'E02000802',
        '1NG' => 'E02000802',
        '1NH' => 'E02000802',
        '1NJ' => 'E02000802',
        '1NL' => 'E02000802',
        '1NN' => 'E02000802',
        '1NP' => 'E02000802',
        '1NQ' => 'E02000802',
        '1NR' => 'E02000802',
        '1NS' => 'E02000802',
        '1NT' => 'E02000802',
        '1NU' => 'E02000802',
        '1NW' => 'E02000802',
        '1NX' => 'E02000802',
        '1NY' => 'E02000802',
        '1NZ' => 'E02000802',
        '1PA' => 'E02000802',
        '1PB' => 'E02000802',
        '1PD' => 'E02000802',
        '1PE' => 'E02000802',
        '1PF' => 'E02000802',
        '1PQ' => 'E02000802',
        '1PS' => 'E02000802',
        '1PY' => 'E02000802',
        '1PZ' => 'E02000802',
        '1QA' => 'E02000802',
        '1QB' => 'E02000802',
        '1QD' => 'E02000802',
        '1QE' => 'E02000802',
        '1QF' => 'E02000802',
        '1QG' => 'E02000802',
        '1QH' => 'E02000802',
        '1QJ' => 'E02000802',
        '1QL' => 'E02000802',
        '1QN' => 'E02000802',
        '1QP' => 'E02000802',
        '1QQ' => 'E02000802',
        '1QR' => 'E02000802',
        '1QS' => 'E02000802',
        '1QT' => 'E02000802',
        '1QU' => 'E02000802',
        '1QW' => 'E02000802',
        '1QX' => 'E02000802',
        '1QY' => 'E02000802',
        '1QZ' => 'E02000802',
        '1RB' => 'E02000802',
        '1RD' => 'E02000802',
        '1RE' => 'E02000806',
        '1RF' => 'E02000802',
        '1RG' => 'E02000802',
        '1RH' => 'E02000802',
        '1RJ' => 'E02000802',
        '1RL' => 'E02000802',
        '1RN' => 'E02000802',
        '1RP' => 'E02000802',
        '1RQ' => 'E02000802',
        '1RR' => 'E02000802',
        '1RS' => 'E02000802',
        '1RT' => 'E02000802',
        '1RU' => 'E02000802',
        '1RW' => 'E02000806',
        '1RX' => 'E02000802',
        '1RY' => 'E02000802',
        '1RZ' => 'E02000802',
        '1SA' => 'E02000802',
        '1SB' => 'E02000803',
        '1SD' => 'E02000802',
        '1SL' => 'E02000803',
        '1SN' => 'E02000803',
        '1SP' => 'E02000803',
        '1SR' => 'E02000803',
        '1SW' => 'E02000803',
        '1TA' => 'E02000803',
        '1TB' => 'E02000803',
        '1TE' => 'E02000802',
        '1TF' => 'E02000802',
        '1TG' => 'E02000802',
        '1TH' => 'E02000802',
        '1TJ' => 'E02000802',
        '1TL' => 'E02000802',
        '1TN' => 'E02000806',
        '1TP' => 'E02000806',
        '1TQ' => 'E02000802',
        '1TR' => 'E02000806',
        '1TS' => 'E02000802',
        '1TT' => 'E02000802',
        '1TU' => 'E02000803',
        '1TW' => 'E02000802',
        '1TX' => 'E02000806',
        '1TY' => 'E02000802',
        '1TZ' => 'E02000806',
        '1UA' => 'E02000803',
        '1UB' => 'E02000803',
        '1UD' => 'E02000803',
        '1UE' => 'E02000802',
        '1UF' => 'E02000802',
        '1UG' => 'E02000806',
        '1UH' => 'E02000803',
        '1UJ' => 'E02000806',
        '1UL' => 'E02000806',
        '1UN' => 'E02000806',
        '1UP' => 'E02000806',
        '1UQ' => 'E02000806',
        '1UR' => 'E02000806',
        '1UU' => 'E02000806',
        '1UW' => 'E02000806',
        '1UX' => 'E02000806',
        '1UY' => 'E02000806',
        '1UZ' => 'E02000806',
        '1WA' => 'E02000806',
        '1WB' => 'E02000806',
        '1WD' => 'E02000806',
        '1WE' => 'E02000806',
        '1WF' => 'E02000806',
        '1WG' => 'E02000806',
        '1WH' => 'E02000806',
        '1WJ' => 'E02000806',
        '1WL' => 'E02000806',
        '1WN' => 'E02000806',
        '1WP' => 'E02000806',
        '1WQ' => 'E02000806',
        '1WR' => 'E02000806',
        '1WS' => 'E02000806',
        '1WT' => 'E02000806',
        '1WU' => 'E02000806',
        '1WW' => 'E02000806',
        '1WX' => 'E02000806',
        '1WY' => 'E02000806',
        '1WZ' => 'E02000806',
        '1XA' => 'E02000806',
        '1XB' => 'E02000806',
        '1XE' => 'E02000806',
        '1XQ' => 'E02000806',
        '1XT' => 'E02000806',
        '1XW' => 'E02000806',
        '1XX' => 'E02000806',
        '1XY' => 'E02000806',
        '1XZ' => 'E02000806',
        '1YA' => 'E02000806',
        '1YB' => 'E02000806',
        '1YZ' => 'E02000806',
        '2AA' => 'E02000806',
        '2AB' => 'E02000806',
        '2AD' => 'E02000806',
        '2AE' => 'E02000806',
        '2AF' => 'E02000806',
        '2AG' => 'E02000806',
        '2AH' => 'E02000806',
        '2AJ' => 'E02000806',
        '2AL' => 'E02000806',
        '2AN' => 'E02000806',
        '2AP' => 'E02000806',
        '2AQ' => 'E02000806',
        '2AR' => 'E02000806',
        '2AS' => 'E02000806',
        '2AT' => 'E02000806',
        '2AU' => 'E02000806',
        '2AW' => 'E02000806',
        '2AX' => 'E02000806',
        '2AY' => 'E02000806',
        '2AZ' => 'E02000806',
        '2BA' => 'E02000806',
        '2BB' => 'E02000806',
        '2BD' => 'E02000806',
        '2BE' => 'E02000806',
        '2BF' => 'E02000806',
        '2BG' => 'E02000806',
        '2BH' => 'E02000806',
        '2BJ' => 'E02000806',
        '2BL' => 'E02000806',
        '2BN' => 'E02000806',
        '2BP' => 'E02000806',
        '2BQ' => 'E02000806',
        '2BS' => 'E02000806',
        '2BT' => 'E02000806',
        '2BU' => 'E02000806',
        '2BW' => 'E02000806',
        '2BX' => 'E02000806',
        '2BY' => 'E02000806',
        '2BZ' => 'E02000806',
        '2DA' => 'E02000806',
        '2DB' => 'E02000806',
        '2DD' => 'E02000806',
        '2DE' => 'E02000806',
        '2DF' => 'E02000806',
        '2DG' => 'E02000806',
        '2DH' => 'E02000806',
        '2DJ' => 'E02000806',
        '2DL' => 'E02000806',
        '2DN' => 'E02000806',
        '2DP' => 'E02000806',
        '2DQ' => 'E02000806',
        '2DR' => 'E02000806',
        '2DS' => 'E02000806',
        '2DT' => 'E02000806',
        '2DU' => 'E02000806',
        '2DW' => 'E02000806',
        '2DX' => 'E02000806',
        '2DY' => 'E02000806',
        '2DZ' => 'E02000806',
        '2EA' => 'E02000806',
        '2EB' => 'E02000806',
        '2ED' => 'E02000806',
        '2EE' => 'E02000806',
        '2EF' => 'E02000806',
        '2EG' => 'E02000806',
        '2EH' => 'E02000806',
        '2EJ' => 'E02000806',
        '2EL' => 'E02000806',
        '2EN' => 'E02000806',
        '2EP' => 'E02000806',
        '2EQ' => 'E02000806',
        '2ER' => 'E02000806',
        '2ES' => 'E02000806',
        '2ET' => 'E02000806',
        '2EU' => 'E02000806',
        '2EW' => 'E02000806',
        '2EX' => 'E02000806',
        '2EY' => 'E02000806',
        '2EZ' => 'E02000806',
        '2FA' => 'E02000806',
        '2FB' => 'E02000806',
        '2FD' => 'E02000806',
        '2FE' => 'E02000806',
        '2FF' => 'E02000806',
        '2FG' => 'E02000806',
        '2FH' => 'E02000806',
        '2FJ' => 'E02000806',
        '2FL' => 'E02000806',
        '2FN' => 'E02000806',
        '2FP' => 'E02000806',
        '2FQ' => 'E02000806',
        '2FR' => 'E02000806',
        '2FS' => 'E02000806',
        '2FT' => 'E02000806',
        '2FU' => 'E02000806',
        '2FW' => 'E02000806',
        '2FX' => 'E02000806',
        '2FY' => 'E02000806',
        '2FZ' => 'E02006412',
        '2GH' => 'E02000806',
        '2HA' => 'E02000806',
        '2HB' => 'E02000806',
        '2HD' => 'E02000806',
        '2HE' => 'E02000806',
        '2HF' => 'E02000806',
        '2HG' => 'E02000806',
        '2HH' => 'E02000806',
        '2HJ' => 'E02000806',
        '2HL' => 'E02000806',
        '2HN' => 'E02000806',
        '2HP' => 'E02000806',
        '2HQ' => 'E02000806',
        '2HR' => 'E02000806',
        '2HS' => 'E02000806',
        '2HT' => 'E02000806',
        '2HU' => 'E02000806',
        '2HW' => 'E02000806',
        '2HX' => 'E02000806',
        '2HY' => 'E02000806',
        '2HZ' => 'E02000806',
        '2JA' => 'E02000806',
        '2JB' => 'E02000806',
        '2JD' => 'E02000806',
        '2JE' => 'E02000806',
        '2JF' => 'E02000806',
        '2JG' => 'E02000806',
        '2JH' => 'E02000806',
        '2JJ' => 'E02000806',
        '2JL' => 'E02000806',
        '2JN' => 'E02000806',
        '2JP' => 'E02000806',
        '2JQ' => 'E02000806',
        '2JR' => 'E02000806',
        '2JS' => 'E02000806',
        '2JT' => 'E02000806',
        '2JU' => 'E02000806',
        '2JW' => 'E02000806',
        '2JX' => 'E02000806',
        '2JY' => 'E02000806',
        '2JZ' => 'E02000806',
        '2LA' => 'E02000806',
        '2LB' => 'E02000806',
        '2LD' => 'E02000806',
        '2LE' => 'E02000806',
        '2LF' => 'E02000806',
        '2LG' => 'E02000806',
        '2LH' => 'E02000806',
        '2LJ' => 'E02000806',
        '2LL' => 'E02000806',
        '2LN' => 'E02000806',
        '2LP' => 'E02000806',
        '2LQ' => 'E02000806',
        '2LR' => 'E02000806',
        '2LS' => 'E02000806',
        '2LT' => 'E02000806',
        '2LU' => 'E02000806',
        '2LW' => 'E02000806',
        '2LX' => 'E02000806',
        '2LY' => 'E02000806',
        '2LZ' => 'E02000806',
        '2NA' => 'E02000806',
        '2NB' => 'E02000806',
        '2ND' => 'E02000806',
        '2NE' => 'E02000806',
        '2NF' => 'E02000806',
        '2NG' => 'E02000806',
        '2NH' => 'E02000806',
        '2NJ' => 'E02000806',
        '2NL' => 'E02000806',
        '2NN' => 'E02000806',
        '2NP' => 'E02000806',
        '2NQ' => 'E02000806',
        '2NR' => 'E02000806',
        '2NS' => 'E02000806',
        '2NT' => 'E02000806',
        '2NU' => 'E02000806',
        '2NW' => 'E02000806',
        '2NX' => 'E02000806',
        '2NY' => 'E02000806',
        '2NZ' => 'E02000806',
        '2PA' => 'E02000806',
        '2PB' => 'E02000806',
        '2PD' => 'E02000806',
        '2PF' => 'E02000806',
        '2PG' => 'E02000806',
        '2PH' => 'E02000806',
        '2PJ' => 'E02000806',
        '2PL' => 'E02000806',
        '2PN' => 'E02000806',
        '2PP' => 'E02000806',
        '2PQ' => 'E02000806',
        '2PS' => 'E02000806',
        '2PT' => 'E02000806',
        '2PU' => 'E02000806',
        '2PW' => 'E02000806',
        '2PX' => 'E02000806',
        '2PZ' => 'E02000806',
        '2QA' => 'E02000806',
        '2QB' => 'E02000806',
        '2QD' => 'E02000806',
        '2QE' => 'E02000806',
        '2QF' => 'E02000806',
        '2QG' => 'E02000806',
        '2QL' => 'E02000806',
        '2QN' => 'E02000806',
        '2QP' => 'E02000806',
        '2QQ' => 'E02000806',
        '2QR' => 'E02000806',
        '2QS' => 'E02000806',
        '2QT' => 'E02000806',
        '2QU' => 'E02000806',
        '2QW' => 'E02000806',
        '2QX' => 'E02000806',
        '2QY' => 'E02000806',
        '2QZ' => 'E02000806',
        '2RA' => 'E02000806',
        '2RB' => 'E02000806',
        '2RD' => 'E02000806',
        '2RE' => 'E02000806',
        '2RF' => 'E02000806',
        '2RG' => 'E02000806',
        '2RH' => 'E02000806',
        '2RJ' => 'E02000806',
        '2RL' => 'E02000806',
        '2RN' => 'E02000806',
        '2RQ' => 'E02000806',
        '2RT' => 'E02000806',
        '2RU' => 'E02000806',
        '2RX' => 'E02000806',
        '2RY' => 'E02000806',
        '2RZ' => 'E02000806',
        '2SA' => 'E02000806',
        '2SB' => 'E02000806',
        '2SD' => 'E02000806',
        '2SE' => 'E02000806',
        '2SF' => 'E02000806',
        '2SG' => 'E02000806',
        '2SH' => 'E02000806',
        '2SJ' => 'E02000806',
        '2SL' => 'E02000806',
        '2SN' => 'E02000806',
        '2SP' => 'E02000806',
        '2SQ' => 'E02000806',
        '2SR' => 'E02000806',
        '2SS' => 'E02000806',
        '2ST' => 'E02000806',
        '2SU' => 'E02000806',
        '2SW' => 'E02000806',
        '2SX' => 'E02000806',
        '2SY' => 'E02000806',
        '2SZ' => 'E02000806',
        '2TA' => 'E02000806',
        '2TE' => 'E02000806',
        '2TF' => 'E02000806',
        '2TH' => 'E02000806',
        '2TJ' => 'E02000806',
        '2TL' => 'E02000806',
        '2TN' => 'E02000806',
        '2TP' => 'E02000806',
        '2TQ' => 'E02000806',
        '2TR' => 'E02000806',
        '2TS' => 'E02000806',
        '2TT' => 'E02000806',
        '2TU' => 'E02000806',
        '2TX' => 'E02000806',
        '2TY' => 'E02000806',
        '2TZ' => 'E02000806',
        '2UA' => 'E02000806',
        '2UB' => 'E02000806',
        '2UD' => 'E02000806',
        '2UG' => 'E02000806',
        '2UH' => 'E02000806',
        '2UJ' => 'E02000806',
        '2UL' => 'E02000806',
        '2UN' => 'E02000806',
        '2UP' => 'E02000806',
        '2UQ' => 'E02000806',
        '2UR' => 'E02000806',
        '2US' => 'E02000806',
        '2UT' => 'E02000806',
        '2UU' => 'E02000806',
        '2UW' => 'E02000806',
        '2UX' => 'E02000806',
        '2UY' => 'E02000806',
        '2UZ' => 'E02000806',
        '2WA' => 'E02000806',
        '2WB' => 'E02000806',
        '2WD' => 'E02000806',
        '2WE' => 'E02000806',
        '2WF' => 'E02000806',
        '2WG' => 'E02000806',
        '2WH' => 'E02000806',
        '2WJ' => 'E02000806',
        '2WL' => 'E02000806',
        '2WN' => 'E02000806',
        '2WP' => 'E02000806',
        '2WQ' => 'E02000806',
        '2WR' => 'E02000806',
        '2WS' => 'E02000806',
        '2WT' => 'E02000806',
        '2WU' => 'E02000806',
        '2WW' => 'E02000806',
        '2WX' => 'E02000806',
        '2WY' => 'E02000806',
        '2WZ' => 'E02000806',
        '2XA' => 'E02000806',
        '2XB' => 'E02000806',
        '2XD' => 'E02000806',
        '2XE' => 'E02000806',
        '2XF' => 'E02000806',
        '2XG' => 'E02000806',
        '2XH' => 'E02000806',
        '2XJ' => 'E02000806',
        '2XL' => 'E02000806',
        '2XN' => 'E02000806',
        '2XP' => 'E02000806',
        '2XQ' => 'E02000806',
        '2XR' => 'E02000806',
        '2XS' => 'E02000806',
        '2XT' => 'E02000806',
        '2XU' => 'E02000806',
        '2XW' => 'E02000806',
        '2XX' => 'E02000806',
        '2XY' => 'E02000806',
        '2XZ' => 'E02000806',
        '2YA' => 'E02000806',
        '2YB' => 'E02000806',
        '2YD' => 'E02000806',
        '2YE' => 'E02000806',
        '2YF' => 'E02000806',
        '2YG' => 'E02000806',
        '2YH' => 'E02000806',
        '2YJ' => 'E02000806',
        '2YL' => 'E02000806',
        '2YN' => 'E02000806',
        '2YP' => 'E02000806',
        '2YQ' => 'E02000806',
        '2YR' => 'E02000806',
        '2YS' => 'E02000806',
        '2YT' => 'E02000806',
        '2YU' => 'E02000806',
        '2YW' => 'E02000806',
        '2YX' => 'E02000806',
        '2YY' => 'E02000806',
        '2YZ' => 'E02000806',
        '2ZA' => 'E02000806',
        '2ZB' => 'E02000806',
        '2ZD' => 'E02000806',
        '2ZE' => 'E02000806',
        '2ZF' => 'E02000806',
        '2ZJ' => 'E02000806',
        '2ZT' => 'E02000806',
        '2ZU' => 'E02000806',
        '2ZW' => 'E02000806',
        '2ZX' => 'E02000806',
        '2ZY' => 'E02000806',
        '3AA' => 'E02000803',
        '3AB' => 'E02000803',
        '3AD' => 'E02000803',
        '3AF' => 'E02000803',
        '3AG' => 'E02000803',
        '3AH' => 'E02000806',
        '3AJ' => 'E02000803',
        '3AL' => 'E02000806',
        '3AN' => 'E02000806',
        '3AP' => 'E02000803',
        '3AQ' => 'E02000803',
        '3AR' => 'E02000803',
        '3AS' => 'E02000803',
        '3AT' => 'E02000803',
        '3AU' => 'E02000803',
        '3AW' => 'E02000803',
        '3AX' => 'E02000806',
        '3AY' => 'E02000806',
        '3AZ' => 'E02000803',
        '3BB' => 'E02000803',
        '3BD' => 'E02000806',
        '3BE' => 'E02000806',
        '3BG' => 'E02000803',
        '3BH' => 'E02000806',
        '3BJ' => 'E02000803',
        '3BL' => 'E02000803',
        '3BP' => 'E02000803',
        '3BQ' => 'E02000806',
        '3BS' => 'E02000806',
        '3BT' => 'E02000806',
        '3BU' => 'E02000806',
        '3BW' => 'E02000803',
        '3BX' => 'E02000806',
        '3BZ' => 'E02000806',
        '3DG' => 'E02000803',
        '3DH' => 'E02000803',
        '3DJ' => 'E02000803',
        '3DL' => 'E02000803',
        '3DN' => 'E02000803',
        '3DP' => 'E02000803',
        '3DQ' => 'E02000803',
        '3DR' => 'E02000803',
        '3DS' => 'E02000803',
        '3DT' => 'E02000803',
        '3DU' => 'E02000803',
        '3DW' => 'E02000803',
        '3DX' => 'E02000803',
        '3DY' => 'E02000803',
        '3DZ' => 'E02000803',
        '3EA' => 'E02000803',
        '3EB' => 'E02000803',
        '3ED' => 'E02000803',
        '3EE' => 'E02000803',
        '3EF' => 'E02000803',
        '3EG' => 'E02000803',
        '3EH' => 'E02000803',
        '3EJ' => 'E02000803',
        '3EL' => 'E02000803',
        '3EP' => 'E02000803',
        '3EQ' => 'E02000803',
        '3ER' => 'E02000803',
        '3ES' => 'E02000803',
        '3ET' => 'E02000803',
        '3EU' => 'E02000803',
        '3EW' => 'E02000803',
        '3EY' => 'E02000803',
        '3EZ' => 'E02000803',
        '3HB' => 'E02000803',
        '3HD' => 'E02000803',
        '3HF' => 'E02000803',
        '3HL' => 'E02000806',
        '3HU' => 'E02000803',
        '3HX' => 'E02000803',
        '3HY' => 'E02000803',
        '3HZ' => 'E02000803',
        '3JA' => 'E02000803',
        '3JF' => 'E02000803',
        '3JG' => 'E02000803',
        '3JH' => 'E02000803',
        '3JJ' => 'E02000803',
        '3JL' => 'E02000803',
        '3JQ' => 'E02000803',
        '3JR' => 'E02000803',
        '3JS' => 'E02000803',
        '3JT' => 'E02000803',
        '3JU' => 'E02000803',
        '3JX' => 'E02000803',
        '3JY' => 'E02000803',
        '3JZ' => 'E02000803',
        '3LQ' => 'E02000803',
        '3LT' => 'E02000803',
        '3LX' => 'E02000803',
        '3LY' => 'E02000803',
        '3NA' => 'E02000806',
        '3NN' => 'E02000803',
        '3NP' => 'E02000803',
        '3NR' => 'E02000803',
        '3NS' => 'E02000803',
        '3NT' => 'E02000803',
        '3NW' => 'E02000803',
        '3NX' => 'E02000803',
        '3NY' => 'E02000803',
        '3NZ' => 'E02000803',
        '3PA' => 'E02000803',
        '3PB' => 'E02000803',
        '3PD' => 'E02000803',
        '3PE' => 'E02000803',
        '3PH' => 'E02000803',
        '3PJ' => 'E02000803',
        '3PL' => 'E02000803',
        '3PN' => 'E02000803',
        '3PQ' => 'E02000803',
        '3PR' => 'E02000803',
        '3PS' => 'E02000803',
        '3PZ' => 'E02000803',
        '3QD' => 'E02000803',
        '3QJ' => 'E02000803',
        '3QL' => 'E02000803',
        '3QN' => 'E02000803',
        '3QT' => 'E02000803',
        '3QU' => 'E02000803',
        '3RA' => 'E02000803',
        '3RB' => 'E02000803',
        '3RD' => 'E02000803',
        '3RE' => 'E02000803',
        '3RF' => 'E02000803',
        '3RG' => 'E02000803',
        '3RH' => 'E02000803',
        '3RJ' => 'E02000803',
        '3RL' => 'E02000803',
        '3RN' => 'E02000803',
        '3RP' => 'E02000803',
        '3RQ' => 'E02000803',
        '3RR' => 'E02000803',
        '3RS' => 'E02000803',
        '3RT' => 'E02000803',
        '3RU' => 'E02000803',
        '3RW' => 'E02000803',
        '3RX' => 'E02000803',
        '3RY' => 'E02000803',
        '3RZ' => 'E02000803',
        '3SA' => 'E02000803',
        '3SB' => 'E02000803',
        '3SD' => 'E02000803',
        '3SE' => 'E02000803',
        '3TB' => 'E02000803',
        '3TE' => 'E02000806',
        '3TF' => 'E02000806',
        '3TG' => 'E02000806',
        '3TH' => 'E02000806',
        '3TJ' => 'E02000803',
        '3TL' => 'E02000806',
        '3TN' => 'E02000806',
        '3TP' => 'E02000806',
        '3TQ' => 'E02000803',
        '3TR' => 'E02000803',
        '3TS' => 'E02000806',
        '3TT' => 'E02000806',
        '3TU' => 'E02000806',
        '3TW' => 'E02000803',
        '3TX' => 'E02000806',
        '3TY' => 'E02000803',
        '3TZ' => 'E02000803',
        '3UA' => 'E02000803',
        '3UB' => 'E02000806',
        '3UD' => 'E02000806',
        '3UE' => 'E02000806',
        '3UF' => 'E02000806',
        '3UG' => 'E02000806',
        '3UL' => 'E02000803',
        '3UN' => 'E02000803',
        '3UP' => 'E02000803',
        '3UQ' => 'E02000806',
        '3UR' => 'E02000803',
        '3UT' => 'E02000803',
        '3UU' => 'E02000803',
        '3UW' => 'E02000803',
        '3UX' => 'E02000803',
        '3UY' => 'E02000803',
        '3UZ' => 'E02000803',
        '3WA' => 'E02000806',
        '3WB' => 'E02000803',
        '3WD' => 'E02000806',
        '3WE' => 'E02000806',
        '3WF' => 'E02000806',
        '3WN' => 'E02000806',
        '3WP' => 'E02000806',
        '3WQ' => 'E02000806',
        '3WR' => 'E02000806',
        '3WS' => 'E02000806',
        '3WT' => 'E02000806',
        '3WU' => 'E02000806',
        '3WW' => 'E02000806',
        '3WX' => 'E02000806',
        '3WY' => 'E02000806',
        '3WZ' => 'E02000806',
        '3XA' => 'E02000803',
        '3XB' => 'E02000803',
        '3XD' => 'E02000803',
        '3XE' => 'E02000803',
        '3XF' => 'E02000803',
        '3XG' => 'E02000803',
        '3XH' => 'E02000803',
        '3XJ' => 'E02000803',
        '3XL' => 'E02000803',
        '3XN' => 'E02000803',
        '3XP' => 'E02000803',
        '3XQ' => 'E02000803',
        '3XR' => 'E02000803',
        '3XS' => 'E02000803',
        '3XT' => 'E02000803',
        '3XU' => 'E02000803',
        '3XW' => 'E02000803',
        '3XX' => 'E02000803',
        '3XY' => 'E02000803',
        '3XZ' => 'E02000803',
        '3YA' => 'E02000803',
        '3YB' => 'E02000803',
        '3YD' => 'E02000803',
        '3YE' => 'E02000803',
        '3YF' => 'E02000803',
        '3YG' => 'E02000803',
        '3YH' => 'E02000803',
        '3YJ' => 'E02000803',
        '3YL' => 'E02000803',
        '3YN' => 'E02000803',
        '3YP' => 'E02000803',
        '3YQ' => 'E02000803',
        '3YR' => 'E02000803',
        '3YS' => 'E02000803',
        '3YT' => 'E02000803',
        '3YU' => 'E02000803',
        '3YW' => 'E02000803',
        '3YX' => 'E02000803',
        '3YY' => 'E02000803',
        '3YZ' => 'E02000803',
        '3ZA' => 'E02000803',
        '3ZX' => 'E02000806',
        '3ZY' => 'E02000803',
        '9AA' => 'E02000806',
        '9AB' => 'E02000806',
        '9AD' => 'E02000806',
        '9AF' => 'E02000806',
        '9AJ' => 'E02000806',
        '9AL' => 'E02000806',
        '9AN' => 'E02000806',
        '9AP' => 'E02000806',
        '9AQ' => 'E02000806',
        '9AS' => 'E02000806',
        '9AT' => 'E02000806',
        '9AU' => 'E02000806',
        '9AW' => 'E02000806',
        '9AX' => 'E02000806',
        '9AY' => 'E02000806',
        '9AZ' => 'E02000806',
        '9BA' => 'E02000806',
        '9BB' => 'E02000806',
        '9BD' => 'E02000806',
        '9BE' => 'E02000806',
        '9BF' => 'E02000806',
        '9BG' => 'E02000806',
        '9BH' => 'E02000806',
        '9BJ' => 'E02000806',
        '9BL' => 'E02000806',
        '9BN' => 'E02000806',
        '9BQ' => 'E02000806',
        '9BR' => 'E02000806',
        '9BS' => 'E02000806',
        '9BT' => 'E02000806',
        '9BU' => 'E02000806',
        '9BW' => 'E02000806',
        '9BX' => 'E02000806',
        '9BY' => 'E02000806',
        '9BZ' => 'E02000806',
        '9DA' => 'E02000806',
        '9DB' => 'E02000806',
        '9DD' => 'E02000806',
        '9DE' => 'E02000806',
        '9DF' => 'E02000806',
        '9DG' => 'E02000806',
        '9DH' => 'E02000806',
        '9DJ' => 'E02000806',
        '9DL' => 'E02000806',
        '9DN' => 'E02000806',
        '9DP' => 'E02000806',
        '9DQ' => 'E02000806',
        '9DR' => 'E02000806',
        '9DS' => 'E02000806',
        '9DT' => 'E02000806',
        '9DW' => 'E02000806',
        '9DX' => 'E02000806',
        '9DY' => 'E02000806',
        '9DZ' => 'E02000806',
        '9EA' => 'E02000806',
        '9EB' => 'E02000806',
        '9ED' => 'E02000806',
        '9EE' => 'E02000806',
        '9EF' => 'E02000806',
        '9EG' => 'E02000806',
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
