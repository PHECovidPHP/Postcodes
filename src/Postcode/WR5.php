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
final class WR5
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02006744',
        '1AB' => 'E02006744',
        '1AD' => 'E02006744',
        '1AE' => 'E02006744',
        '1AF' => 'E02006744',
        '1AG' => 'E02006744',
        '1AH' => 'E02006744',
        '1AJ' => 'E02006744',
        '1AL' => 'E02006744',
        '1AN' => 'E02006744',
        '1AP' => 'E02006741',
        '1AQ' => 'E02006744',
        '1AT' => 'E02006744',
        '1AU' => 'E02006744',
        '1AW' => 'E02006744',
        '1AX' => 'E02006744',
        '1AY' => 'E02006744',
        '1AZ' => 'E02006744',
        '1BA' => 'E02006744',
        '1BB' => 'E02006744',
        '1BD' => 'E02006744',
        '1BE' => 'E02006744',
        '1BF' => 'E02006744',
        '1BG' => 'E02006744',
        '1BH' => 'E02006744',
        '1BJ' => 'E02006744',
        '1BL' => 'E02006744',
        '1BN' => 'E02006741',
        '1BP' => 'E02006744',
        '1BQ' => 'E02006744',
        '1BS' => 'E02006744',
        '1BT' => 'E02006744',
        '1BU' => 'E02006744',
        '1BW' => 'E02006744',
        '1BX' => 'E02006744',
        '1BY' => 'E02006744',
        '1BZ' => 'E02006744',
        '1DA' => 'E02006744',
        '1DB' => 'E02006744',
        '1DD' => 'E02006743',
        '1DE' => 'E02006744',
        '1DF' => 'E02006744',
        '1DG' => 'E02006744',
        '1DH' => 'E02006744',
        '1DJ' => 'E02006744',
        '1DL' => 'E02006744',
        '1DN' => 'E02006744',
        '1DP' => 'E02006744',
        '1DQ' => 'E02006744',
        '1DR' => 'E02006744',
        '1DS' => 'E02006744',
        '1DT' => 'E02006744',
        '1DU' => 'E02006744',
        '1DW' => 'E02006744',
        '1DX' => 'E02006744',
        '1DY' => 'E02006744',
        '1DZ' => 'E02006744',
        '1EA' => 'E02006744',
        '1EB' => 'E02006744',
        '1ED' => 'E02006744',
        '1EE' => 'E02006744',
        '1EF' => 'E02006744',
        '1EG' => 'E02006743',
        '1EH' => 'E02006744',
        '1EJ' => 'E02006744',
        '1EL' => 'E02006744',
        '1EN' => 'E02006744',
        '1EP' => 'E02006743',
        '1EQ' => 'E02006744',
        '1ER' => 'E02006744',
        '1ES' => 'E02006743',
        '1ET' => 'E02006741',
        '1EU' => 'E02006744',
        '1EW' => 'E02006744',
        '1EX' => 'E02006744',
        '1EY' => 'E02006744',
        '1EZ' => 'E02006743',
        '1HA' => 'E02006743',
        '1HB' => 'E02006743',
        '1HD' => 'E02006743',
        '1HE' => 'E02006744',
        '1HF' => 'E02006743',
        '1HG' => 'E02006743',
        '1HH' => 'E02006743',
        '1HJ' => 'E02006743',
        '1HL' => 'E02006743',
        '1HN' => 'E02006741',
        '1HP' => 'E02006743',
        '1HQ' => 'E02006743',
        '1HR' => 'E02006743',
        '1HS' => 'E02006743',
        '1HT' => 'E02006743',
        '1HU' => 'E02006743',
        '1HW' => 'E02006743',
        '1HX' => 'E02006743',
        '1HY' => 'E02006743',
        '1HZ' => 'E02006743',
        '1JA' => 'E02006743',
        '1JB' => 'E02006741',
        '1JD' => 'E02006741',
        '1JE' => 'E02006741',
        '1JF' => 'E02006743',
        '1JG' => 'E02006743',
        '1JH' => 'E02006743',
        '1JJ' => 'E02006743',
        '1JL' => 'E02006743',
        '1JN' => 'E02006741',
        '1JP' => 'E02006743',
        '1JQ' => 'E02006743',
        '1JR' => 'E02006741',
        '1JS' => 'E02006743',
        '1JT' => 'E02006744',
        '1JU' => 'E02006744',
        '1JW' => 'E02006741',
        '1JX' => 'E02006743',
        '1JY' => 'E02006743',
        '1JZ' => 'E02006743',
        '1LA' => 'E02006743',
        '1LB' => 'E02006743',
        '1LD' => 'E02006743',
        '1LE' => 'E02006743',
        '1LF' => 'E02006743',
        '1LG' => 'E02006743',
        '1LH' => 'E02006743',
        '1LJ' => 'E02006743',
        '1LL' => 'E02006743',
        '1LN' => 'E02006743',
        '1LP' => 'E02006743',
        '1LQ' => 'E02006743',
        '1LR' => 'E02006743',
        '1LS' => 'E02006743',
        '1LT' => 'E02006743',
        '1LU' => 'E02006743',
        '1LW' => 'E02006743',
        '1LX' => 'E02006743',
        '1LY' => 'E02006743',
        '1LZ' => 'E02006743',
        '1NA' => 'E02006743',
        '1NB' => 'E02006743',
        '1ND' => 'E02006743',
        '1NE' => 'E02006743',
        '1NF' => 'E02006743',
        '1NG' => 'E02006743',
        '1NH' => 'E02006743',
        '1NJ' => 'E02006743',
        '1NL' => 'E02006743',
        '1NN' => 'E02006743',
        '1NP' => 'E02006743',
        '1NQ' => 'E02006743',
        '1NR' => 'E02006743',
        '1NS' => 'E02006743',
        '1NT' => 'E02006743',
        '1NU' => 'E02006743',
        '1NW' => 'E02006743',
        '1NX' => 'E02006743',
        '1NY' => 'E02006743',
        '1NZ' => 'E02006743',
        '1PA' => 'E02006743',
        '1PB' => 'E02006743',
        '1PD' => 'E02006743',
        '1PE' => 'E02006743',
        '1PF' => 'E02006743',
        '1PG' => 'E02006743',
        '1PH' => 'E02006743',
        '1PJ' => 'E02006743',
        '1PL' => 'E02006743',
        '1PN' => 'E02006743',
        '1PP' => 'E02006743',
        '1PQ' => 'E02006743',
        '1PR' => 'E02006743',
        '1PS' => 'E02006741',
        '1PT' => 'E02006741',
        '1PU' => 'E02006743',
        '1PW' => 'E02006743',
        '1PX' => 'E02006743',
        '1PY' => 'E02006743',
        '1PZ' => 'E02006743',
        '1QA' => 'E02006746',
        '1QB' => 'E02006743',
        '1QD' => 'E02006746',
        '1QE' => 'E02006746',
        '1QF' => 'E02006743',
        '1QG' => 'E02006743',
        '1QH' => 'E02006743',
        '1QJ' => 'E02006743',
        '1QL' => 'E02006743',
        '1QN' => 'E02006743',
        '1QP' => 'E02006743',
        '1QQ' => 'E02006743',
        '1QR' => 'E02006743',
        '1QS' => 'E02006743',
        '1QT' => 'E02006743',
        '1QU' => 'E02006743',
        '1QW' => 'E02006743',
        '1QX' => 'E02006743',
        '1QY' => 'E02006743',
        '1QZ' => 'E02006743',
        '1RA' => 'E02006743',
        '1RB' => 'E02006743',
        '1RD' => 'E02006743',
        '1RE' => 'E02006746',
        '1RF' => 'E02006743',
        '1RG' => 'E02006746',
        '1RH' => 'E02006746',
        '1RJ' => 'E02006746',
        '1RL' => 'E02006754',
        '1RN' => 'E02006743',
        '1RP' => 'E02006754',
        '1RQ' => 'E02006746',
        '1RR' => 'E02006754',
        '1RS' => 'E02006754',
        '1RT' => 'E02006754',
        '1RU' => 'E02006741',
        '1RW' => 'E02006754',
        '1RX' => 'E02006743',
        '1RY' => 'E02006743',
        '1RZ' => 'E02006741',
        '1SA' => 'E02006743',
        '1SB' => 'E02006743',
        '1SD' => 'E02006743',
        '1SE' => 'E02006743',
        '1SF' => 'E02006743',
        '1SG' => 'E02006743',
        '1SH' => 'E02006741',
        '1SJ' => 'E02006741',
        '1SL' => 'E02006741',
        '1SN' => 'E02006741',
        '1SP' => 'E02006741',
        '1SQ' => 'E02006741',
        '1SR' => 'E02006741',
        '1ST' => 'E02006741',
        '1SU' => 'E02006741',
        '1SW' => 'E02006741',
        '1SX' => 'E02006741',
        '1SY' => 'E02006741',
        '1SZ' => 'E02006756',
        '1TA' => 'E02006756',
        '1TB' => 'E02006756',
        '1TD' => 'E02006756',
        '1TE' => 'E02006756',
        '1TF' => 'E02006756',
        '1TG' => 'E02006756',
        '1TH' => 'E02006743',
        '1TJ' => 'E02006743',
        '1TL' => 'E02006743',
        '1TS' => 'E02006741',
        '1TX' => 'E02006744',
        '1UX' => 'E02006744',
        '1WA' => 'E02006736',
        '1WH' => 'E02006736',
        '1WQ' => 'E02006736',
        '1WR' => 'E02006744',
        '1WS' => 'E02006741',
        '1WT' => 'E02006736',
        '1WU' => 'E02006736',
        '1WW' => 'E02006744',
        '1WX' => 'E02006744',
        '1WY' => 'E02006736',
        '1WZ' => 'E02006744',
        '1XA' => 'E02006736',
        '1XW' => 'E02006736',
        '1XX' => 'E02006744',
        '1XY' => 'E02006736',
        '1XZ' => 'E02006736',
        '1YA' => 'E02006744',
        '1YB' => 'E02006744',
        '1YD' => 'E02006736',
        '1YE' => 'E02006743',
        '1YF' => 'E02006743',
        '1YG' => 'E02006743',
        '1YH' => 'E02006743',
        '1YJ' => 'E02006736',
        '1YL' => 'E02006743',
        '1YN' => 'E02006736',
        '1YP' => 'E02006744',
        '1YQ' => 'E02006736',
        '1YS' => 'E02006744',
        '1YT' => 'E02006744',
        '1YU' => 'E02006736',
        '1YW' => 'E02006736',
        '1YX' => 'E02006744',
        '1YY' => 'E02006744',
        '1YZ' => 'E02006736',
        '1ZB' => 'E02006736',
        '1ZE' => 'E02006743',
        '1ZF' => 'E02006743',
        '1ZG' => 'E02006743',
        '1ZH' => 'E02006744',
        '1ZJ' => 'E02006743',
        '1ZL' => 'E02006744',
        '1ZN' => 'E02006736',
        '1ZP' => 'E02006744',
        '1ZQ' => 'E02006736',
        '1ZX' => 'E02006744',
        '1ZY' => 'E02006736',
        '2AA' => 'E02006744',
        '2AB' => 'E02006744',
        '2AD' => 'E02006744',
        '2AE' => 'E02006744',
        '2AF' => 'E02006744',
        '2AG' => 'E02006744',
        '2AH' => 'E02006744',
        '2AJ' => 'E02006744',
        '2AL' => 'E02006744',
        '2AN' => 'E02006744',
        '2AP' => 'E02006746',
        '2AQ' => 'E02006744',
        '2AR' => 'E02006746',
        '2AS' => 'E02006746',
        '2AT' => 'E02006746',
        '2AU' => 'E02006756',
        '2AW' => 'E02006744',
        '2AX' => 'E02006746',
        '2AY' => 'E02006746',
        '2AZ' => 'E02006746',
        '2BA' => 'E02006756',
        '2BB' => 'E02006746',
        '2BD' => 'E02006746',
        '2BE' => 'E02006746',
        '2BF' => 'E02006744',
        '2BG' => 'E02006746',
        '2BH' => 'E02006744',
        '2BJ' => 'E02006744',
        '2BL' => 'E02006744',
        '2BN' => 'E02006744',
        '2BP' => 'E02006746',
        '2BQ' => 'E02006744',
        '2BR' => 'E02006746',
        '2BS' => 'E02006746',
        '2BT' => 'E02006746',
        '2BU' => 'E02006746',
        '2BW' => 'E02006744',
        '2BX' => 'E02006746',
        '2BY' => 'E02006746',
        '2BZ' => 'E02006746',
        '2DA' => 'E02006746',
        '2DB' => 'E02006746',
        '2DD' => 'E02006746',
        '2DE' => 'E02006746',
        '2DF' => 'E02006756',
        '2DG' => 'E02006744',
        '2DH' => 'E02006744',
        '2DJ' => 'E02006744',
        '2DL' => 'E02006744',
        '2DN' => 'E02006756',
        '2DP' => 'E02006744',
        '2DQ' => 'E02006756',
        '2DR' => 'E02006744',
        '2DS' => 'E02006744',
        '2DT' => 'E02006744',
        '2DU' => 'E02006744',
        '2DW' => 'E02006746',
        '2DX' => 'E02006744',
        '2DY' => 'E02006744',
        '2DZ' => 'E02006744',
        '2EA' => 'E02006744',
        '2EB' => 'E02006744',
        '2ED' => 'E02006744',
        '2EE' => 'E02006744',
        '2EF' => 'E02006744',
        '2EG' => 'E02006744',
        '2EH' => 'E02006746',
        '2EJ' => 'E02006746',
        '2EL' => 'E02006744',
        '2EN' => 'E02006744',
        '2EP' => 'E02006746',
        '2EQ' => 'E02006744',
        '2ER' => 'E02006746',
        '2ES' => 'E02006746',
        '2ET' => 'E02006746',
        '2EU' => 'E02006744',
        '2EW' => 'E02006744',
        '2EX' => 'E02006744',
        '2EY' => 'E02006736',
        '2EZ' => 'E02006744',
        '2FA' => 'E02006746',
        '2FB' => 'E02006746',
        '2FD' => 'E02006746',
        '2FE' => 'E02006746',
        '2FF' => 'E02006746',
        '2FR' => 'E02006746',
        '2FW' => 'E02006746',
        '2FX' => 'E02006746',
        '2FZ' => 'E02006746',
        '2GA' => 'E02006746',
        '2GB' => 'E02006756',
        '2GD' => 'E02006756',
        '2GE' => 'E02006756',
        '2GF' => 'E02006756',
        '2GG' => 'E02006756',
        '2GH' => 'E02006756',
        '2GJ' => 'E02006756',
        '2GL' => 'E02006756',
        '2HA' => 'E02006746',
        '2HB' => 'E02006746',
        '2HD' => 'E02006746',
        '2HE' => 'E02006744',
        '2HF' => 'E02006744',
        '2HG' => 'E02006744',
        '2HH' => 'E02006746',
        '2HJ' => 'E02006746',
        '2HL' => 'E02006746',
        '2HN' => 'E02006746',
        '2HP' => 'E02006746',
        '2HQ' => 'E02006744',
        '2HR' => 'E02006746',
        '2HS' => 'E02006746',
        '2HT' => 'E02006746',
        '2HU' => 'E02006746',
        '2HW' => 'E02006746',
        '2HX' => 'E02006746',
        '2HY' => 'E02006746',
        '2HZ' => 'E02006746',
        '2JA' => 'E02006744',
        '2JB' => 'E02006746',
        '2JD' => 'E02006746',
        '2JE' => 'E02006746',
        '2JF' => 'E02006746',
        '2JG' => 'E02006746',
        '2JH' => 'E02006746',
        '2JJ' => 'E02006746',
        '2JL' => 'E02006746',
        '2JN' => 'E02006746',
        '2JP' => 'E02006746',
        '2JQ' => 'E02006746',
        '2JR' => 'E02006746',
        '2JS' => 'E02006746',
        '2JT' => 'E02006746',
        '2JU' => 'E02006746',
        '2JW' => 'E02006746',
        '2JX' => 'E02006746',
        '2JY' => 'E02006746',
        '2JZ' => 'E02006747',
        '2LA' => 'E02006746',
        '2LB' => 'E02006746',
        '2LD' => 'E02006746',
        '2LE' => 'E02006746',
        '2LF' => 'E02006746',
        '2LG' => 'E02006743',
        '2LH' => 'E02006746',
        '2LJ' => 'E02006746',
        '2LL' => 'E02006746',
        '2LN' => 'E02006746',
        '2LP' => 'E02006746',
        '2LQ' => 'E02006746',
        '2LR' => 'E02006746',
        '2LS' => 'E02006746',
        '2LT' => 'E02006746',
        '2LU' => 'E02006746',
        '2LW' => 'E02006746',
        '2LX' => 'E02006746',
        '2LY' => 'E02006746',
        '2LZ' => 'E02006746',
        '2NA' => 'E02006746',
        '2NB' => 'E02006746',
        '2ND' => 'E02006746',
        '2NE' => 'E02006746',
        '2NF' => 'E02006746',
        '2NG' => 'E02006746',
        '2NH' => 'E02006746',
        '2NJ' => 'E02006746',
        '2NL' => 'E02006746',
        '2NN' => 'E02006746',
        '2NP' => 'E02006746',
        '2NQ' => 'E02006746',
        '2NR' => 'E02006756',
        '2NS' => 'E02006756',
        '2NT' => 'E02006717',
        '2NU' => 'E02006756',
        '2NW' => 'E02006756',
        '2NX' => 'E02006717',
        '2NY' => 'E02006717',
        '2NZ' => 'E02006756',
        '2PA' => 'E02006756',
        '2PB' => 'E02006756',
        '2PD' => 'E02006717',
        '2PE' => 'E02006717',
        '2PF' => 'E02006756',
        '2PG' => 'E02006747',
        '2PH' => 'E02006756',
        '2PJ' => 'E02006756',
        '2PL' => 'E02006756',
        '2PN' => 'E02006756',
        '2PP' => 'E02006756',
        '2PQ' => 'E02006756',
        '2PR' => 'E02006756',
        '2PS' => 'E02006756',
        '2PT' => 'E02006756',
        '2PU' => 'E02006756',
        '2PW' => 'E02006756',
        '2PX' => 'E02006756',
        '2PY' => 'E02006756',
        '2PZ' => 'E02006756',
        '2QA' => 'E02006756',
        '2QB' => 'E02006756',
        '2QD' => 'E02006756',
        '2QE' => 'E02006756',
        '2QF' => 'E02006756',
        '2QG' => 'E02006756',
        '2QH' => 'E02006756',
        '2QJ' => 'E02006756',
        '2QL' => 'E02006756',
        '2QN' => 'E02006756',
        '2QP' => 'E02006756',
        '2QQ' => 'E02006746',
        '2QR' => 'E02006746',
        '2QS' => 'E02006756',
        '2QT' => 'E02006743',
        '2QU' => 'E02006756',
        '2QW' => 'E02006756',
        '2QX' => 'E02006743',
        '2QY' => 'E02006756',
        '2QZ' => 'E02006756',
        '2RA' => 'E02006756',
        '2RB' => 'E02006756',
        '2RD' => 'E02006756',
        '2RE' => 'E02006756',
        '2RF' => 'E02006756',
        '2RG' => 'E02006756',
        '2RH' => 'E02006756',
        '2RJ' => 'E02006756',
        '2RL' => 'E02006756',
        '2RN' => 'E02006756',
        '2RP' => 'E02006756',
        '2RQ' => 'E02006756',
        '2RR' => 'E02006756',
        '2RS' => 'E02006756',
        '2RT' => 'E02006756',
        '2RU' => 'E02006756',
        '2RW' => 'E02006756',
        '2RX' => 'E02006756',
        '2RY' => 'E02006756',
        '2RZ' => 'E02006756',
        '2SA' => 'E02006756',
        '2SB' => 'E02006756',
        '2SD' => 'E02006756',
        '2SE' => 'E02006756',
        '2SF' => 'E02006756',
        '2SG' => 'E02006756',
        '2SH' => 'E02006756',
        '2SJ' => 'E02006756',
        '2SL' => 'E02006756',
        '2SN' => 'E02006756',
        '2SP' => 'E02006756',
        '2SQ' => 'E02006756',
        '2SR' => 'E02006756',
        '2SU' => 'E02006746',
        '2WA' => 'E02006756',
        '2WB' => 'E02006756',
        '2WD' => 'E02006756',
        '2WF' => 'E02006736',
        '2WG' => 'E02006736',
        '2WH' => 'E02006744',
        '2WJ' => 'E02006736',
        '2WL' => 'E02006736',
        '2WN' => 'E02006736',
        '2WP' => 'E02006736',
        '2WQ' => 'E02006744',
        '2WR' => 'E02006736',
        '2WS' => 'E02006736',
        '2WT' => 'E02006736',
        '2WU' => 'E02006736',
        '2WW' => 'E02006744',
        '2WX' => 'E02006736',
        '2WY' => 'E02006736',
        '2WZ' => 'E02006744',
        '2XA' => 'E02006736',
        '2XB' => 'E02006736',
        '2XD' => 'E02006746',
        '2XE' => 'E02006744',
        '2XF' => 'E02006744',
        '2XG' => 'E02006736',
        '2XH' => 'E02006736',
        '2XJ' => 'E02006736',
        '2XL' => 'E02006736',
        '2XN' => 'E02006746',
        '2XP' => 'E02006736',
        '2XQ' => 'E02006736',
        '2XR' => 'E02006736',
        '2XU' => 'E02006736',
        '2XW' => 'E02006736',
        '2XY' => 'E02006736',
        '2XZ' => 'E02006756',
        '2YA' => 'E02006744',
        '2YB' => 'E02006736',
        '2YD' => 'E02006736',
        '2YE' => 'E02006736',
        '2YF' => 'E02006736',
        '2YG' => 'E02006746',
        '2YH' => 'E02006736',
        '2YJ' => 'E02006736',
        '2YL' => 'E02006736',
        '2YN' => 'E02006736',
        '2YP' => 'E02006736',
        '2YQ' => 'E02006736',
        '2YR' => 'E02006736',
        '2YS' => 'E02006736',
        '2YT' => 'E02006756',
        '2YW' => 'E02006756',
        '2YX' => 'E02006756',
        '2YY' => 'E02006736',
        '2YZ' => 'E02006744',
        '2ZB' => 'E02006736',
        '2ZE' => 'E02006744',
        '2ZF' => 'E02006736',
        '2ZG' => 'E02006744',
        '2ZH' => 'E02006744',
        '2ZJ' => 'E02006736',
        '2ZL' => 'E02006736',
        '2ZN' => 'E02006736',
        '2ZP' => 'E02006746',
        '2ZQ' => 'E02006736',
        '2ZR' => 'E02006736',
        '2ZS' => 'E02006756',
        '2ZT' => 'E02006736',
        '2ZU' => 'E02006736',
        '2ZW' => 'E02006744',
        '2ZX' => 'E02006756',
        '2ZY' => 'E02006736',
        '3AA' => 'E02006746',
        '3AB' => 'E02006746',
        '3AD' => 'E02006747',
        '3AE' => 'E02006746',
        '3AF' => 'E02006746',
        '3AG' => 'E02006744',
        '3AH' => 'E02006746',
        '3AJ' => 'E02006746',
        '3AL' => 'E02006746',
        '3AN' => 'E02006746',
        '3AP' => 'E02006746',
        '3AQ' => 'E02006746',
        '3AR' => 'E02006747',
        '3AS' => 'E02006746',
        '3AT' => 'E02006746',
        '3AU' => 'E02006746',
        '3AW' => 'E02006746',
        '3AX' => 'E02006747',
        '3AY' => 'E02006747',
        '3AZ' => 'E02006747',
        '3BA' => 'E02006747',
        '3BB' => 'E02006747',
        '3BD' => 'E02006747',
        '3BE' => 'E02006747',
        '3BF' => 'E02006746',
        '3BG' => 'E02006747',
        '3BH' => 'E02006747',
        '3BJ' => 'E02006747',
        '3BL' => 'E02006746',
        '3BN' => 'E02006746',
        '3BP' => 'E02006746',
        '3BQ' => 'E02006747',
        '3BS' => 'E02006746',
        '3BT' => 'E02006746',
        '3BU' => 'E02006746',
        '3BW' => 'E02006746',
        '3BX' => 'E02006746',
        '3BY' => 'E02006746',
        '3BZ' => 'E02006747',
        '3DA' => 'E02006746',
        '3DB' => 'E02006746',
        '3DD' => 'E02006746',
        '3DE' => 'E02006746',
        '3DF' => 'E02006746',
        '3DG' => 'E02006746',
        '3DH' => 'E02006746',
        '3DJ' => 'E02006746',
        '3DL' => 'E02006744',
        '3DN' => 'E02006746',
        '3DP' => 'E02006747',
        '3DQ' => 'E02006746',
        '3DR' => 'E02006747',
        '3DS' => 'E02006746',
        '3DT' => 'E02006746',
        '3DU' => 'E02006746',
        '3DW' => 'E02006746',
        '3DX' => 'E02006746',
        '3DY' => 'E02006746',
        '3DZ' => 'E02006746',
        '3EA' => 'E02006746',
        '3EB' => 'E02006746',
        '3ED' => 'E02006746',
        '3EE' => 'E02006746',
        '3EF' => 'E02006746',
        '3EG' => 'E02006746',
        '3EH' => 'E02006747',
        '3EJ' => 'E02006744',
        '3EL' => 'E02006746',
        '3EN' => 'E02006746',
        '3EP' => 'E02006746',
        '3EQ' => 'E02006746',
        '3ER' => 'E02006746',
        '3ES' => 'E02006746',
        '3ET' => 'E02006746',
        '3EU' => 'E02006746',
        '3EW' => 'E02006746',
        '3EX' => 'E02006746',
        '3EY' => 'E02006746',
        '3EZ' => 'E02006746',
        '3FA' => 'E02006746',
        '3FB' => 'E02006746',
        '3FD' => 'E02006747',
        '3FE' => 'E02006747',
        '3FF' => 'E02006747',
        '3FG' => 'E02006747',
        '3FH' => 'E02006747',
        '3FJ' => 'E02006747',
        '3FL' => 'E02006717',
        '3FN' => 'E02006746',
        '3FP' => 'E02006717',
        '3FQ' => 'E02006746',
        '3FR' => 'E02006746',
        '3FS' => 'E02006717',
        '3FT' => 'E02006746',
        '3FU' => 'E02006746',
        '3FX' => 'E02006746',
        '3FY' => 'E02006746',
        '3FZ' => 'E02006717',
        '3GA' => 'E02006746',
        '3GB' => 'E02006746',
        '3GD' => 'E02006746',
        '3GE' => 'E02006746',
        '3GF' => 'E02006746',
        '3GG' => 'E02006746',
        '3GH' => 'E02006746',
        '3GJ' => 'E02006746',
        '3GL' => 'E02006746',
        '3GN' => 'E02006717',
        '3GR' => 'E02006746',
        '3GS' => 'E02006746',
        '3GT' => 'E02006746',
        '3HA' => 'E02006746',
        '3HB' => 'E02006746',
        '3HD' => 'E02006746',
        '3HE' => 'E02006747',
        '3HF' => 'E02006744',
        '3HG' => 'E02006747',
        '3HH' => 'E02006747',
        '3HJ' => 'E02006747',
        '3HL' => 'E02006747',
        '3HN' => 'E02006747',
        '3HP' => 'E02006747',
        '3HQ' => 'E02006747',
        '3HR' => 'E02006717',
        '3HS' => 'E02006717',
        '3HT' => 'E02006747',
        '3HU' => 'E02006747',
        '3HW' => 'E02006747',
        '3HX' => 'E02006747',
        '3HY' => 'E02006747',
        '3HZ' => 'E02006747',
        '3JA' => 'E02006717',
        '3JB' => 'E02006717',
        '3JD' => 'E02006717',
        '3JE' => 'E02006717',
        '3JF' => 'E02006717',
        '3JG' => 'E02006717',
        '3JH' => 'E02006717',
        '3JJ' => 'E02006717',
        '3JL' => 'E02006717',
        '3JN' => 'E02006717',
        '3JP' => 'E02006717',
        '3JQ' => 'E02006717',
        '3JR' => 'E02006717',
        '3JS' => 'E02006717',
        '3JT' => 'E02006717',
        '3JU' => 'E02006717',
        '3JW' => 'E02006717',
        '3JX' => 'E02006717',
        '3JY' => 'E02006717',
        '3JZ' => 'E02006717',
        '3LA' => 'E02006717',
        '3LB' => 'E02006717',
        '3LD' => 'E02006717',
        '3LE' => 'E02006717',
        '3LF' => 'E02006717',
        '3LG' => 'E02006717',
        '3LH' => 'E02006717',
        '3LJ' => 'E02006717',
        '3LL' => 'E02006717',
        '3LN' => 'E02006717',
        '3LP' => 'E02006717',
        '3LQ' => 'E02006717',
        '3LR' => 'E02006747',
        '3LS' => 'E02006747',
        '3LT' => 'E02006747',
        '3LU' => 'E02006747',
        '3LW' => 'E02006717',
        '3LX' => 'E02006747',
        '3LY' => 'E02006747',
        '3LZ' => 'E02006747',
        '3NA' => 'E02006717',
        '3NB' => 'E02006717',
        '3ND' => 'E02006717',
        '3NE' => 'E02006717',
        '3NF' => 'E02006717',
        '3NG' => 'E02006717',
        '3NH' => 'E02006717',
        '3NJ' => 'E02006717',
        '3NL' => 'E02006717',
        '3NN' => 'E02006717',
        '3NP' => 'E02006717',
        '3NQ' => 'E02006717',
        '3NR' => 'E02006717',
        '3NS' => 'E02006717',
        '3NT' => 'E02006717',
        '3NU' => 'E02006717',
        '3NW' => 'E02006717',
        '3NX' => 'E02006717',
        '3NY' => 'E02006717',
        '3NZ' => 'E02006717',
        '3PA' => 'E02006717',
        '3PB' => 'E02006717',
        '3PD' => 'E02006717',
        '3PE' => 'E02006717',
        '3PF' => 'E02006717',
        '3PG' => 'E02006717',
        '3PH' => 'E02006747',
        '3PJ' => 'E02006747',
        '3PL' => 'E02006747',
        '3PN' => 'E02006717',
        '3PP' => 'E02006717',
        '3PQ' => 'E02006747',
        '3PR' => 'E02006717',
        '3PS' => 'E02006717',
        '3PT' => 'E02006717',
        '3PU' => 'E02006717',
        '3PW' => 'E02006717',
        '3PX' => 'E02006717',
        '3PY' => 'E02006717',
        '3PZ' => 'E02006717',
        '3QA' => 'E02006717',
        '3QB' => 'E02006717',
        '3QD' => 'E02006717',
        '3QE' => 'E02006717',
        '3QF' => 'E02006717',
        '3QG' => 'E02006717',
        '3QH' => 'E02006756',
        '3QJ' => 'E02006756',
        '3QL' => 'E02006756',
        '3QN' => 'E02006717',
        '3QP' => 'E02006717',
        '3QQ' => 'E02006717',
        '3QR' => 'E02006747',
        '3QS' => 'E02006747',
        '3QT' => 'E02006747',
        '3QU' => 'E02006747',
        '3QW' => 'E02006717',
        '3QX' => 'E02006717',
        '3QY' => 'E02006747',
        '3QZ' => 'E02006717',
        '3RA' => 'E02006747',
        '3RB' => 'E02006747',
        '3RD' => 'E02006747',
        '3RE' => 'E02006747',
        '3RF' => 'E02006747',
        '3RG' => 'E02006747',
        '3RH' => 'E02006747',
        '3RJ' => 'E02006747',
        '3RL' => 'E02006747',
        '3RN' => 'E02006747',
        '3RP' => 'E02006747',
        '3RQ' => 'E02006747',
        '3RR' => 'E02006747',
        '3RS' => 'E02006747',
        '3RT' => 'E02006747',
        '3RU' => 'E02006747',
        '3RW' => 'E02006747',
        '3RX' => 'E02006747',
        '3RY' => 'E02006747',
        '3RZ' => 'E02006747',
        '3SA' => 'E02006717',
        '3SB' => 'E02006717',
        '3SD' => 'E02006717',
        '3SE' => 'E02006717',
        '3SF' => 'E02006747',
        '3SG' => 'E02006747',
        '3SH' => 'E02006747',
        '3SJ' => 'E02006747',
        '3SL' => 'E02006747',
        '3SN' => 'E02006747',
        '3SP' => 'E02006747',
        '3SQ' => 'E02006747',
        '3SR' => 'E02006747',
        '3SS' => 'E02006747',
        '3ST' => 'E02006747',
        '3SU' => 'E02006747',
        '3SW' => 'E02006747',
        '3SX' => 'E02006747',
        '3SY' => 'E02006747',
        '3SZ' => 'E02006747',
        '3TA' => 'E02006747',
        '3TB' => 'E02006747',
        '3TD' => 'E02006747',
        '3TE' => 'E02006756',
        '3TF' => 'E02006747',
        '3TG' => 'E02006747',
        '3TH' => 'E02006756',
        '3TJ' => 'E02006756',
        '3TL' => 'E02006756',
        '3TN' => 'E02006756',
        '3TP' => 'E02006747',
        '3TQ' => 'E02006747',
        '3TR' => 'E02006747',
        '3TS' => 'E02006747',
        '3TT' => 'E02006747',
        '3TU' => 'E02006747',
        '3TW' => 'E02006747',
        '3TX' => 'E02006747',
        '3TY' => 'E02006747',
        '3TZ' => 'E02006747',
        '3UA' => 'E02006747',
        '3UB' => 'E02006747',
        '3UD' => 'E02006747',
        '3UE' => 'E02006747',
        '3UF' => 'E02006747',
        '3UG' => 'E02006747',
        '3UH' => 'E02006747',
        '3UJ' => 'E02006747',
        '3UL' => 'E02006747',
        '3UN' => 'E02006747',
        '3UP' => 'E02006747',
        '3UQ' => 'E02006747',
        '3UR' => 'E02006747',
        '3US' => 'E02006747',
        '3UT' => 'E02006747',
        '3UU' => 'E02006747',
        '3UW' => 'E02006747',
        '3UX' => 'E02006717',
        '3UY' => 'E02006717',
        '3UZ' => 'E02006717',
        '3WA' => 'E02006744',
        '3WB' => 'E02006717',
        '3WD' => 'E02006717',
        '3WE' => 'E02006717',
        '3WF' => 'E02006717',
        '3WG' => 'E02006717',
        '3WH' => 'E02006717',
        '3WJ' => 'E02006717',
        '3WL' => 'E02006717',
        '3WN' => 'E02006744',
        '3WP' => 'E02006717',
        '3WQ' => 'E02006717',
        '3WR' => 'E02006717',
        '3WS' => 'E02006736',
        '3WT' => 'E02006736',
        '3WU' => 'E02006736',
        '3WW' => 'E02006736',
        '3WX' => 'E02006736',
        '3WY' => 'E02006736',
        '3WZ' => 'E02006736',
        '3XA' => 'E02006717',
        '3XB' => 'E02006736',
        '3XD' => 'E02006747',
        '3XE' => 'E02006736',
        '3XF' => 'E02006736',
        '3XG' => 'E02006736',
        '3XH' => 'E02006736',
        '3XJ' => 'E02006747',
        '3XL' => 'E02006756',
        '3XN' => 'E02006736',
        '3XP' => 'E02006736',
        '3XQ' => 'E02006736',
        '3XR' => 'E02006736',
        '3XS' => 'E02006736',
        '3XT' => 'E02006736',
        '3XU' => 'E02006736',
        '3XW' => 'E02006744',
        '3XX' => 'E02006736',
        '3XY' => 'E02006736',
        '3XZ' => 'E02006736',
        '3YA' => 'E02006744',
        '3YB' => 'E02006744',
        '3YD' => 'E02006736',
        '3YE' => 'E02006744',
        '3YF' => 'E02006747',
        '3YG' => 'E02006744',
        '3YH' => 'E02006747',
        '3YJ' => 'E02006736',
        '3YL' => 'E02006747',
        '3YN' => 'E02006747',
        '3YP' => 'E02006736',
        '3YQ' => 'E02006736',
        '3YR' => 'E02006736',
        '3YS' => 'E02006747',
        '3YT' => 'E02006747',
        '3YU' => 'E02006736',
        '3YW' => 'E02006756',
        '3YX' => 'E02006756',
        '3YY' => 'E02006747',
        '3YZ' => 'E02006747',
        '3ZE' => 'E02006744',
        '3ZF' => 'E02006736',
        '3ZG' => 'E02006756',
        '3ZH' => 'E02006747',
        '3ZJ' => 'E02006747',
        '3ZL' => 'E02006747',
        '3ZN' => 'E02006747',
        '3ZP' => 'E02006736',
        '3ZQ' => 'E02006736',
        '3ZR' => 'E02006736',
        '3ZS' => 'E02006744',
        '3ZT' => 'E02006747',
        '3ZU' => 'E02006736',
        '3ZW' => 'E02006736',
        '3ZY' => 'E02006736',
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
