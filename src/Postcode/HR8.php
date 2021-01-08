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
final class HR8
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02002923',
        '1AB' => 'E02002923',
        '1AD' => 'E02002923',
        '1AE' => 'E02002923',
        '1AF' => 'E02002923',
        '1AG' => 'E02002923',
        '1AH' => 'E02002923',
        '1AJ' => 'E02002923',
        '1AL' => 'E02002923',
        '1AN' => 'E02002923',
        '1AP' => 'E02002923',
        '1AQ' => 'E02002923',
        '1AR' => 'E02002923',
        '1AS' => 'E02002923',
        '1AT' => 'E02002923',
        '1AU' => 'E02002923',
        '1AW' => 'E02002923',
        '1AX' => 'E02002923',
        '1AY' => 'E02002923',
        '1AZ' => 'E02002923',
        '1BA' => 'E02002923',
        '1BB' => 'E02002923',
        '1BD' => 'E02002923',
        '1BE' => 'E02002923',
        '1BG' => 'E02002923',
        '1BH' => 'E02002923',
        '1BJ' => 'E02002923',
        '1BL' => 'E02002923',
        '1BN' => 'E02002923',
        '1BP' => 'E02002923',
        '1BQ' => 'E02002923',
        '1BS' => 'E02002923',
        '1BT' => 'E02002923',
        '1BU' => 'E02002923',
        '1BW' => 'E02002923',
        '1BX' => 'E02002923',
        '1BY' => 'E02002923',
        '1BZ' => 'E02002923',
        '1DA' => 'E02002923',
        '1DB' => 'E02002923',
        '1DD' => 'E02002923',
        '1DE' => 'E02002923',
        '1DF' => 'E02002923',
        '1DG' => 'E02002923',
        '1DH' => 'E02002923',
        '1DJ' => 'E02002923',
        '1DL' => 'E02002923',
        '1DN' => 'E02002923',
        '1DP' => 'E02002923',
        '1DQ' => 'E02002923',
        '1DR' => 'E02002923',
        '1DS' => 'E02002923',
        '1DT' => 'E02002923',
        '1DU' => 'E02002923',
        '1DW' => 'E02002923',
        '1DX' => 'E02002923',
        '1DY' => 'E02002923',
        '1DZ' => 'E02002923',
        '1EA' => 'E02002923',
        '1EB' => 'E02002923',
        '1ED' => 'E02002923',
        '1EE' => 'E02002923',
        '1EF' => 'E02002923',
        '1EG' => 'E02002923',
        '1EH' => 'E02002923',
        '1EJ' => 'E02002923',
        '1EL' => 'E02002923',
        '1EN' => 'E02002923',
        '1EP' => 'E02002923',
        '1EQ' => 'E02002923',
        '1ER' => 'E02002923',
        '1ES' => 'E02002923',
        '1ET' => 'E02006720',
        '1EU' => 'E02006720',
        '1EW' => 'E02002923',
        '1EX' => 'E02006720',
        '1EY' => 'E02002923',
        '1EZ' => 'E02002923',
        '1FA' => 'E02002922',
        '1HA' => 'E02002913',
        '1HB' => 'E02002913',
        '1HD' => 'E02002913',
        '1HE' => 'E02002913',
        '1HF' => 'E02002922',
        '1HG' => 'E02002922',
        '1HH' => 'E02002922',
        '1HJ' => 'E02002922',
        '1HL' => 'E02002922',
        '1HN' => 'E02002922',
        '1HP' => 'E02002909',
        '1HQ' => 'E02002922',
        '1HR' => 'E02002909',
        '1HS' => 'E02002909',
        '1HT' => 'E02002909',
        '1HU' => 'E02002909',
        '1HW' => 'E02002909',
        '1HX' => 'E02002922',
        '1HY' => 'E02002909',
        '1HZ' => 'E02002913',
        '1JA' => 'E02002923',
        '1JB' => 'E02002923',
        '1JD' => 'E02002923',
        '1JE' => 'E02002923',
        '1JF' => 'E02002923',
        '1JG' => 'E02002913',
        '1JH' => 'E02002913',
        '1JJ' => 'E02002913',
        '1JL' => 'E02002913',
        '1JN' => 'E02002913',
        '1JP' => 'E02002913',
        '1JQ' => 'E02002913',
        '1JR' => 'E02002913',
        '1JS' => 'E02002913',
        '1JT' => 'E02002913',
        '1JU' => 'E02002913',
        '1JW' => 'E02002913',
        '1JX' => 'E02002913',
        '1JY' => 'E02002913',
        '1JZ' => 'E02002913',
        '1LA' => 'E02002923',
        '1LB' => 'E02002923',
        '1LD' => 'E02002923',
        '1LE' => 'E02002923',
        '1LF' => 'E02002923',
        '1LG' => 'E02002923',
        '1LH' => 'E02002923',
        '1LJ' => 'E02002923',
        '1LL' => 'E02002923',
        '1LN' => 'E02002923',
        '1LP' => 'E02002913',
        '1LQ' => 'E02002923',
        '1LR' => 'E02002913',
        '1LS' => 'E02002913',
        '1LT' => 'E02002913',
        '1LU' => 'E02002913',
        '1LW' => 'E02002923',
        '1LX' => 'E02002913',
        '1LY' => 'E02002913',
        '1LZ' => 'E02002913',
        '1NA' => 'E02002913',
        '1NB' => 'E02002913',
        '1ND' => 'E02002913',
        '1NE' => 'E02002913',
        '1NF' => 'E02002913',
        '1NG' => 'E02002913',
        '1NH' => 'E02002913',
        '1NJ' => 'E02002913',
        '1NL' => 'E02002913',
        '1NN' => 'E02002913',
        '1NP' => 'E02002913',
        '1NQ' => 'E02002913',
        '1NR' => 'E02002923',
        '1NS' => 'E02002923',
        '1NT' => 'E02004626',
        '1NU' => 'E02002913',
        '1NW' => 'E02002913',
        '1NX' => 'E02004626',
        '1NY' => 'E02004626',
        '1NZ' => 'E02004626',
        '1PA' => 'E02004626',
        '1PB' => 'E02004626',
        '1PD' => 'E02004626',
        '1PE' => 'E02004626',
        '1PF' => 'E02004626',
        '1PG' => 'E02004626',
        '1PH' => 'E02002923',
        '1PJ' => 'E02002923',
        '1PL' => 'E02002923',
        '1PN' => 'E02002923',
        '1PP' => 'E02002923',
        '1PQ' => 'E02004626',
        '1PR' => 'E02002913',
        '1PS' => 'E02002913',
        '1PT' => 'E02002913',
        '1PU' => 'E02002913',
        '1PW' => 'E02002923',
        '1PX' => 'E02002913',
        '1PY' => 'E02002913',
        '1PZ' => 'E02002913',
        '1QA' => 'E02002913',
        '1QB' => 'E02002913',
        '1QD' => 'E02002913',
        '1QE' => 'E02002913',
        '1QF' => 'E02002913',
        '1QG' => 'E02002913',
        '1QH' => 'E02002922',
        '1QJ' => 'E02002909',
        '1QL' => 'E02002913',
        '1QN' => 'E02002913',
        '1QP' => 'E02002913',
        '1QQ' => 'E02002913',
        '1QR' => 'E02002913',
        '1QS' => 'E02002913',
        '1QT' => 'E02002913',
        '1QU' => 'E02002913',
        '1QW' => 'E02002913',
        '1QX' => 'E02002913',
        '1QY' => 'E02004626',
        '1QZ' => 'E02002913',
        '1RA' => 'E02002923',
        '1RB' => 'E02002923',
        '1RD' => 'E02002923',
        '1RE' => 'E02002923',
        '1RF' => 'E02002923',
        '1RG' => 'E02002923',
        '1RL' => 'E02002923',
        '1RN' => 'E02002923',
        '1RP' => 'E02002923',
        '1RQ' => 'E02002923',
        '1RR' => 'E02002923',
        '1RS' => 'E02004626',
        '1RT' => 'E02004626',
        '1RU' => 'E02004626',
        '1RW' => 'E02002923',
        '1RX' => 'E02004626',
        '1RY' => 'E02004626',
        '1RZ' => 'E02004626',
        '1SA' => 'E02004626',
        '1SB' => 'E02004626',
        '1SD' => 'E02006720',
        '1SE' => 'E02004626',
        '1SF' => 'E02004626',
        '1SG' => 'E02006720',
        '1SJ' => 'E02002923',
        '1SL' => 'E02002923',
        '1SN' => 'E02002923',
        '1SP' => 'E02002923',
        '1SQ' => 'E02002923',
        '1SR' => 'E02002923',
        '1SU' => 'E02002923',
        '1SW' => 'E02002923',
        '1SX' => 'E02002923',
        '1SY' => 'E02002923',
        '1SZ' => 'E02002923',
        '1TQ' => 'E02002923',
        '1WA' => 'E02002923',
        '1WH' => 'E02002923',
        '1WQ' => 'E02002923',
        '1WR' => 'E02002923',
        '1WY' => 'E02002923',
        '1WZ' => 'E02002923',
        '1XZ' => 'E02002923',
        '1YA' => 'E02002923',
        '1YB' => 'E02002923',
        '1YD' => 'E02002923',
        '1YE' => 'E02002923',
        '1YF' => 'E02002923',
        '1YG' => 'E02002923',
        '1YH' => 'E02002923',
        '1YJ' => 'E02002923',
        '1YL' => 'E02002923',
        '1YN' => 'E02002923',
        '1YP' => 'E02002923',
        '1YQ' => 'E02002923',
        '1YR' => 'E02002923',
        '1YS' => 'E02002923',
        '1YT' => 'E02002923',
        '1YU' => 'E02002923',
        '1YW' => 'E02002923',
        '1ZW' => 'E02002923',
        '1ZY' => 'E02002923',
        '2AA' => 'E02002923',
        '2AB' => 'E02002923',
        '2AD' => 'E02002923',
        '2AE' => 'E02002923',
        '2AF' => 'E02002923',
        '2AG' => 'E02002923',
        '2AH' => 'E02002923',
        '2AJ' => 'E02002923',
        '2AL' => 'E02002923',
        '2AN' => 'E02002923',
        '2AP' => 'E02002923',
        '2AQ' => 'E02002923',
        '2AR' => 'E02002923',
        '2AS' => 'E02002923',
        '2AT' => 'E02002923',
        '2AU' => 'E02002923',
        '2AW' => 'E02002923',
        '2AX' => 'E02002923',
        '2AY' => 'E02002923',
        '2AZ' => 'E02002923',
        '2BA' => 'E02002923',
        '2BB' => 'E02002923',
        '2BD' => 'E02002923',
        '2BE' => 'E02002923',
        '2BG' => 'E02002923',
        '2BH' => 'E02002923',
        '2BJ' => 'E02002923',
        '2BL' => 'E02002923',
        '2BN' => 'E02002923',
        '2BP' => 'E02002923',
        '2BQ' => 'E02002923',
        '2BS' => 'E02002923',
        '2BT' => 'E02002923',
        '2BU' => 'E02002923',
        '2BW' => 'E02002923',
        '2BX' => 'E02002923',
        '2BY' => 'E02002923',
        '2BZ' => 'E02002923',
        '2DA' => 'E02002923',
        '2DB' => 'E02002923',
        '2DD' => 'E02002923',
        '2DE' => 'E02002923',
        '2DF' => 'E02002923',
        '2DG' => 'E02002923',
        '2DH' => 'E02002923',
        '2DJ' => 'E02002923',
        '2DL' => 'E02002923',
        '2DN' => 'E02002923',
        '2DP' => 'E02002923',
        '2DQ' => 'E02002923',
        '2DR' => 'E02002923',
        '2DS' => 'E02002923',
        '2DT' => 'E02002923',
        '2DU' => 'E02002923',
        '2DW' => 'E02002923',
        '2DX' => 'E02002923',
        '2DY' => 'E02002923',
        '2DZ' => 'E02002923',
        '2EA' => 'E02002923',
        '2EB' => 'E02002923',
        '2ED' => 'E02002923',
        '2EE' => 'E02002923',
        '2EF' => 'E02002923',
        '2EG' => 'E02002923',
        '2EH' => 'E02002923',
        '2EJ' => 'E02002923',
        '2EL' => 'E02002923',
        '2EN' => 'E02002923',
        '2EP' => 'E02002923',
        '2EQ' => 'E02002923',
        '2ER' => 'E02002923',
        '2ES' => 'E02002923',
        '2ET' => 'E02002923',
        '2EU' => 'E02002923',
        '2EW' => 'E02002923',
        '2EX' => 'E02002923',
        '2EY' => 'E02002923',
        '2EZ' => 'E02002923',
        '2FA' => 'E02002923',
        '2FB' => 'E02002923',
        '2FD' => 'E02002923',
        '2FE' => 'E02002923',
        '2FF' => 'E02002923',
        '2FG' => 'E02002923',
        '2FH' => 'E02002923',
        '2FJ' => 'E02002923',
        '2FL' => 'E02002923',
        '2FN' => 'E02002923',
        '2FP' => 'E02002923',
        '2FQ' => 'E02002923',
        '2FR' => 'E02002923',
        '2FS' => 'E02002923',
        '2FT' => 'E02002923',
        '2FU' => 'E02002923',
        '2FW' => 'E02002923',
        '2FX' => 'E02002923',
        '2FY' => 'E02002923',
        '2FZ' => 'E02002923',
        '2GA' => 'E02002923',
        '2GB' => 'E02002923',
        '2GD' => 'E02002923',
        '2GE' => 'E02002923',
        '2GF' => 'E02002923',
        '2GG' => 'E02002923',
        '2GH' => 'E02002923',
        '2GJ' => 'E02002923',
        '2GL' => 'E02002923',
        '2GN' => 'E02002923',
        '2GP' => 'E02002923',
        '2GQ' => 'E02002923',
        '2GY' => 'E02002923',
        '2HA' => 'E02002923',
        '2HB' => 'E02002923',
        '2HD' => 'E02002923',
        '2HE' => 'E02002923',
        '2HF' => 'E02002923',
        '2HG' => 'E02002923',
        '2HH' => 'E02002923',
        '2HJ' => 'E02002923',
        '2HL' => 'E02002923',
        '2HN' => 'E02002923',
        '2HP' => 'E02002923',
        '2HQ' => 'E02002923',
        '2HR' => 'E02002923',
        '2HS' => 'E02002923',
        '2HT' => 'E02002923',
        '2HU' => 'E02002923',
        '2HW' => 'E02002923',
        '2HX' => 'E02002923',
        '2HY' => 'E02002923',
        '2HZ' => 'E02004626',
        '2JA' => 'E02002923',
        '2JB' => 'E02002923',
        '2JD' => 'E02002923',
        '2JE' => 'E02002923',
        '2JF' => 'E02002923',
        '2JG' => 'E02002923',
        '2JH' => 'E02002923',
        '2JJ' => 'E02002923',
        '2JL' => 'E02002923',
        '2JN' => 'E02002923',
        '2JP' => 'E02002923',
        '2JQ' => 'E02002923',
        '2JR' => 'E02002922',
        '2JS' => 'E02002922',
        '2JT' => 'E02002923',
        '2JU' => 'E02002922',
        '2JW' => 'E02002923',
        '2JX' => 'E02002922',
        '2JY' => 'E02002922',
        '2JZ' => 'E02002922',
        '2LA' => 'E02002922',
        '2LB' => 'E02002922',
        '2LD' => 'E02002923',
        '2LE' => 'E02002923',
        '2LF' => 'E02002923',
        '2LG' => 'E02004626',
        '2LH' => 'E02004626',
        '2LJ' => 'E02004626',
        '2LL' => 'E02004626',
        '2LN' => 'E02002923',
        '2LP' => 'E02002923',
        '2LQ' => 'E02002923',
        '2LR' => 'E02002923',
        '2LS' => 'E02002923',
        '2LT' => 'E02002923',
        '2LW' => 'E02002923',
        '2LX' => 'E02002922',
        '2LY' => 'E02002922',
        '2LZ' => 'E02002923',
        '2NA' => 'E02002922',
        '2NB' => 'E02002922',
        '2ND' => 'E02002922',
        '2NE' => 'E02002923',
        '2NF' => 'E02002922',
        '2NG' => 'E02002922',
        '2NH' => 'E02002922',
        '2NJ' => 'E02002922',
        '2NL' => 'E02002922',
        '2NN' => 'E02002922',
        '2NP' => 'E02002922',
        '2NQ' => 'E02002922',
        '2NR' => 'E02002922',
        '2NS' => 'E02002922',
        '2NT' => 'E02002922',
        '2NU' => 'E02002922',
        '2NW' => 'E02002922',
        '2NX' => 'E02002922',
        '2NY' => 'E02002922',
        '2NZ' => 'E02002923',
        '2PA' => 'E02002922',
        '2PB' => 'E02002922',
        '2PD' => 'E02002922',
        '2PE' => 'E02002922',
        '2PF' => 'E02002922',
        '2PG' => 'E02002922',
        '2PH' => 'E02002922',
        '2PJ' => 'E02002922',
        '2PL' => 'E02002922',
        '2PN' => 'E02002923',
        '2PP' => 'E02002923',
        '2PQ' => 'E02002922',
        '2PR' => 'E02002923',
        '2PS' => 'E02002923',
        '2PT' => 'E02002923',
        '2PU' => 'E02002923',
        '2PW' => 'E02002923',
        '2PX' => 'E02002923',
        '2PY' => 'E02002922',
        '2PZ' => 'E02002922',
        '2QA' => 'E02002922',
        '2QB' => 'E02002922',
        '2QD' => 'E02002922',
        '2QE' => 'E02002922',
        '2QF' => 'E02002922',
        '2QG' => 'E02002922',
        '2QH' => 'E02002922',
        '2QJ' => 'E02002922',
        '2QL' => 'E02002922',
        '2QN' => 'E02002922',
        '2QP' => 'E02002922',
        '2QQ' => 'E02002922',
        '2QR' => 'E02002922',
        '2QS' => 'E02002922',
        '2QT' => 'E02002922',
        '2QU' => 'E02002922',
        '2QW' => 'E02002922',
        '2QX' => 'E02002923',
        '2QY' => 'E02002923',
        '2QZ' => 'E02002923',
        '2RA' => 'E02002922',
        '2RB' => 'E02002922',
        '2RD' => 'E02002922',
        '2RE' => 'E02002922',
        '2RF' => 'E02002922',
        '2RG' => 'E02002922',
        '2RH' => 'E02002922',
        '2RJ' => 'E02002922',
        '2RL' => 'E02002922',
        '2RN' => 'E02002922',
        '2RP' => 'E02002922',
        '2RQ' => 'E02002922',
        '2RR' => 'E02002922',
        '2RS' => 'E02002922',
        '2RT' => 'E02002922',
        '2RU' => 'E02002922',
        '2RW' => 'E02002922',
        '2RX' => 'E02002922',
        '2RY' => 'E02002922',
        '2RZ' => 'E02002922',
        '2SA' => 'E02002922',
        '2SB' => 'E02002922',
        '2SD' => 'E02002922',
        '2SE' => 'E02002922',
        '2SF' => 'E02002922',
        '2SG' => 'E02002922',
        '2SH' => 'E02002922',
        '2SJ' => 'E02002913',
        '2SL' => 'E02002913',
        '2SN' => 'E02002922',
        '2SP' => 'E02002922',
        '2SQ' => 'E02002922',
        '2SR' => 'E02002923',
        '2SS' => 'E02002923',
        '2SU' => 'E02002923',
        '2SW' => 'E02002922',
        '2TA' => 'E02002922',
        '2TB' => 'E02002922',
        '2TD' => 'E02002922',
        '2TE' => 'E02002922',
        '2TF' => 'E02002922',
        '2TG' => 'E02002922',
        '2TH' => 'E02002922',
        '2TJ' => 'E02002922',
        '2TN' => 'E02002922',
        '2TP' => 'E02002922',
        '2TQ' => 'E02002922',
        '2TR' => 'E02002922',
        '2TS' => 'E02002922',
        '2TT' => 'E02002922',
        '2TU' => 'E02002922',
        '2TW' => 'E02002922',
        '2TX' => 'E02002922',
        '2TY' => 'E02002922',
        '2TZ' => 'E02002922',
        '2UA' => 'E02002909',
        '2UB' => 'E02002909',
        '2UD' => 'E02002922',
        '2UE' => 'E02002922',
        '2UF' => 'E02002909',
        '2UG' => 'E02002922',
        '2UH' => 'E02002909',
        '2UJ' => 'E02002922',
        '2UL' => 'E02002922',
        '2UN' => 'E02002909',
        '2UP' => 'E02002923',
        '2UQ' => 'E02002922',
        '2UR' => 'E02002923',
        '2US' => 'E02002923',
        '2UT' => 'E02002923',
        '2UU' => 'E02002923',
        '2UW' => 'E02002923',
        '2UX' => 'E02002923',
        '2UY' => 'E02002923',
        '2WA' => 'E02002923',
        '2WB' => 'E02002923',
        '2WD' => 'E02002923',
        '2WE' => 'E02002923',
        '2WQ' => 'E02002923',
        '2WT' => 'E02002923',
        '2WW' => 'E02002923',
        '2WX' => 'E02002923',
        '2WY' => 'E02002923',
        '2WZ' => 'E02002923',
        '2XA' => 'E02002923',
        '2XB' => 'E02002923',
        '2XD' => 'E02002923',
        '2XE' => 'E02002923',
        '2XF' => 'E02002923',
        '2XG' => 'E02002923',
        '2XH' => 'E02002923',
        '2XJ' => 'E02002923',
        '2XL' => 'E02002923',
        '2XN' => 'E02002923',
        '2XP' => 'E02002923',
        '2XQ' => 'E02002923',
        '2XR' => 'E02002923',
        '2XS' => 'E02002923',
        '2XT' => 'E02002923',
        '2XU' => 'E02002923',
        '2XW' => 'E02002923',
        '2XX' => 'E02002923',
        '2XY' => 'E02002923',
        '2YA' => 'E02002923',
        '2YB' => 'E02002923',
        '2YD' => 'E02002923',
        '2YE' => 'E02002923',
        '2YF' => 'E02002923',
        '2YG' => 'E02002923',
        '2YH' => 'E02002923',
        '2YJ' => 'E02002923',
        '2YL' => 'E02002923',
        '2YN' => 'E02002923',
        '2YP' => 'E02002923',
        '2YQ' => 'E02002923',
        '2YR' => 'E02002923',
        '2YS' => 'E02002923',
        '2YT' => 'E02002923',
        '2YU' => 'E02002923',
        '2YW' => 'E02002923',
        '2YX' => 'E02002923',
        '2YY' => 'E02002923',
        '2YZ' => 'E02002923',
        '2ZA' => 'E02002923',
        '2ZB' => 'E02002923',
        '2ZD' => 'E02002923',
        '2ZF' => 'E02002923',
        '2ZL' => 'E02002923',
        '2ZQ' => 'E02002923',
        '2ZR' => 'E02002923',
        '2ZS' => 'E02002923',
        '2ZT' => 'E02002923',
        '9AB' => 'E02002923',
        '9AD' => 'E02002923',
        '9AE' => 'E02002923',
        '9AF' => 'E02002923',
        '9AH' => 'E02002923',
        '9AT' => 'E02002923',
        '9AZ' => 'E02002923',
        '9BP' => 'E02002923',
        '9DA' => 'E02002923',
        '9DG' => 'E02002923',
        '9DJ' => 'E02002923',
        '9DL' => 'E02002923',
        '9EB' => 'E02002923',
        '9EL' => 'E02002923',
        '9ET' => 'E02002923',
        '9EU' => 'E02002923',
        '9EX' => 'E02002923',
        '9EZ' => 'E02002923',
        '9FD' => 'E02002923',
        '9GA' => 'E02002923',
        '9GD' => 'E02002923',
        '9GH' => 'E02002923',
        '9GP' => 'E02002923',
        '9GY' => 'E02002923',
        '9HB' => 'E02002923',
        '9HF' => 'E02002923',
        '9HG' => 'E02002923',
        '9JB' => 'E02002923',
        '9JE' => 'E02002923',
        '9JF' => 'E02002923',
        '9JG' => 'E02002923',
        '9JL' => 'E02002923',
        '9JN' => 'E02002923',
        '9JW' => 'E02002923',
        '9JY' => 'E02002923',
        '9RB' => 'E02002923',
        '9RG' => 'E02002923',
        '9RS' => 'E02002923',
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
