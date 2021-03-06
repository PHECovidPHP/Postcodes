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
final class CW7
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02003890',
        '1AB' => 'E02003890',
        '1AD' => 'E02003890',
        '1AE' => 'E02003888',
        '1AF' => 'E02003888',
        '1AG' => 'E02003888',
        '1AH' => 'E02003890',
        '1AJ' => 'E02003888',
        '1AL' => 'E02003888',
        '1AN' => 'E02003888',
        '1AP' => 'E02003888',
        '1AQ' => 'E02003889',
        '1AR' => 'E02003888',
        '1AS' => 'E02003888',
        '1AT' => 'E02003888',
        '1AU' => 'E02003890',
        '1AW' => 'E02003888',
        '1AX' => 'E02003888',
        '1AY' => 'E02003888',
        '1AZ' => 'E02003888',
        '1BA' => 'E02003888',
        '1BB' => 'E02003888',
        '1BD' => 'E02003888',
        '1BE' => 'E02003888',
        '1BF' => 'E02003888',
        '1BG' => 'E02003888',
        '1BH' => 'E02003890',
        '1BJ' => 'E02003890',
        '1BL' => 'E02003888',
        '1BN' => 'E02003888',
        '1BP' => 'E02003888',
        '1BQ' => 'E02003890',
        '1BS' => 'E02003889',
        '1BT' => 'E02003889',
        '1BU' => 'E02003888',
        '1BW' => 'E02003888',
        '1BX' => 'E02003889',
        '1BY' => 'E02003889',
        '1BZ' => 'E02003888',
        '1DA' => 'E02003888',
        '1DB' => 'E02003889',
        '1DD' => 'E02003889',
        '1DE' => 'E02003889',
        '1DF' => 'E02003889',
        '1DG' => 'E02003889',
        '1DH' => 'E02003889',
        '1DJ' => 'E02003890',
        '1DL' => 'E02003890',
        '1DN' => 'E02003890',
        '1DP' => 'E02003890',
        '1DQ' => 'E02003889',
        '1DR' => 'E02003889',
        '1DS' => 'E02003889',
        '1DT' => 'E02003888',
        '1DU' => 'E02003888',
        '1DW' => 'E02003890',
        '1DX' => 'E02003888',
        '1DY' => 'E02003888',
        '1DZ' => 'E02003889',
        '1EA' => 'E02003889',
        '1EB' => 'E02003889',
        '1ED' => 'E02003889',
        '1EE' => 'E02003889',
        '1EF' => 'E02003889',
        '1EG' => 'E02003889',
        '1EH' => 'E02003888',
        '1EJ' => 'E02003889',
        '1EL' => 'E02003889',
        '1EN' => 'E02003889',
        '1EP' => 'E02003889',
        '1EQ' => 'E02003889',
        '1ER' => 'E02003889',
        '1ES' => 'E02003888',
        '1ET' => 'E02003889',
        '1EU' => 'E02003889',
        '1EW' => 'E02003889',
        '1EX' => 'E02003889',
        '1EY' => 'E02003889',
        '1EZ' => 'E02003889',
        '1FA' => 'E02003889',
        '1FB' => 'E02003888',
        '1FD' => 'E02003889',
        '1FE' => 'E02003889',
        '1FF' => 'E02003889',
        '1FG' => 'E02003888',
        '1FH' => 'E02003889',
        '1FJ' => 'E02003888',
        '1FL' => 'E02003888',
        '1FN' => 'E02003889',
        '1FP' => 'E02003889',
        '1FQ' => 'E02003889',
        '1FR' => 'E02003889',
        '1FS' => 'E02003889',
        '1FT' => 'E02003888',
        '1FU' => 'E02003888',
        '1FW' => 'E02003889',
        '1FX' => 'E02003889',
        '1FY' => 'E02003889',
        '1FZ' => 'E02003888',
        '1GA' => 'E02003889',
        '1GB' => 'E02003889',
        '1GD' => 'E02003889',
        '1GE' => 'E02003889',
        '1GF' => 'E02003889',
        '1GH' => 'E02003889',
        '1GJ' => 'E02003889',
        '1GL' => 'E02003889',
        '1GN' => 'E02003889',
        '1GP' => 'E02003889',
        '1GQ' => 'E02003889',
        '1GR' => 'E02003889',
        '1HA' => 'E02003889',
        '1HB' => 'E02003889',
        '1HD' => 'E02003889',
        '1HE' => 'E02003889',
        '1HG' => 'E02003888',
        '1HH' => 'E02003888',
        '1HJ' => 'E02003888',
        '1HL' => 'E02003888',
        '1HN' => 'E02003888',
        '1HP' => 'E02003888',
        '1HQ' => 'E02003888',
        '1HR' => 'E02003888',
        '1HS' => 'E02003888',
        '1HT' => 'E02003888',
        '1HU' => 'E02003888',
        '1HW' => 'E02003888',
        '1HZ' => 'E02003888',
        '1JA' => 'E02003889',
        '1JB' => 'E02003889',
        '1JD' => 'E02003888',
        '1JE' => 'E02003888',
        '1JF' => 'E02003888',
        '1JG' => 'E02003888',
        '1JH' => 'E02003889',
        '1JJ' => 'E02003889',
        '1JL' => 'E02003890',
        '1JN' => 'E02003889',
        '1JP' => 'E02003890',
        '1JR' => 'E02003890',
        '1JS' => 'E02003890',
        '1JT' => 'E02003890',
        '1JU' => 'E02003890',
        '1JW' => 'E02003889',
        '1JX' => 'E02003890',
        '1JY' => 'E02003890',
        '1JZ' => 'E02003890',
        '1LA' => 'E02003890',
        '1LB' => 'E02003890',
        '1LD' => 'E02003889',
        '1LE' => 'E02003890',
        '1LF' => 'E02003890',
        '1LG' => 'E02003890',
        '1LH' => 'E02003890',
        '1LJ' => 'E02003889',
        '1LL' => 'E02003889',
        '1LN' => 'E02003889',
        '1LP' => 'E02003889',
        '1LQ' => 'E02003890',
        '1LR' => 'E02003889',
        '1LS' => 'E02003889',
        '1LT' => 'E02003889',
        '1LU' => 'E02003889',
        '1LW' => 'E02003889',
        '1LX' => 'E02003889',
        '1LY' => 'E02003889',
        '1LZ' => 'E02003889',
        '1NA' => 'E02003889',
        '1NB' => 'E02003890',
        '1ND' => 'E02003890',
        '1NE' => 'E02003890',
        '1NF' => 'E02003890',
        '1NG' => 'E02003890',
        '1NH' => 'E02003890',
        '1NJ' => 'E02003890',
        '1NL' => 'E02003889',
        '1NN' => 'E02003889',
        '1NP' => 'E02003889',
        '1NQ' => 'E02003890',
        '1NR' => 'E02003889',
        '1NS' => 'E02003889',
        '1NT' => 'E02003889',
        '1NU' => 'E02003889',
        '1NW' => 'E02003889',
        '1NX' => 'E02003889',
        '1NY' => 'E02003889',
        '1PA' => 'E02003887',
        '1PB' => 'E02003890',
        '1PD' => 'E02003890',
        '1PE' => 'E02003890',
        '1PF' => 'E02003890',
        '1PG' => 'E02003890',
        '1PJ' => 'E02003890',
        '1PL' => 'E02003890',
        '1PN' => 'E02003890',
        '1PP' => 'E02003890',
        '1PQ' => 'E02003890',
        '1PR' => 'E02003890',
        '1PS' => 'E02003890',
        '1PT' => 'E02003890',
        '1PU' => 'E02003890',
        '1PW' => 'E02003890',
        '1PX' => 'E02003890',
        '1PY' => 'E02003890',
        '1PZ' => 'E02003890',
        '1QA' => 'E02003887',
        '1QB' => 'E02003887',
        '1QD' => 'E02003889',
        '1QE' => 'E02003889',
        '1QF' => 'E02003889',
        '1QG' => 'E02003889',
        '1QH' => 'E02003889',
        '1QJ' => 'E02003889',
        '1QL' => 'E02003889',
        '1QN' => 'E02003889',
        '1QP' => 'E02003889',
        '1QQ' => 'E02003889',
        '1QR' => 'E02003889',
        '1QS' => 'E02003889',
        '1QT' => 'E02003889',
        '1QU' => 'E02003889',
        '1QW' => 'E02003889',
        '1QX' => 'E02003889',
        '1QY' => 'E02003889',
        '1QZ' => 'E02003889',
        '1RB' => 'E02003889',
        '1RD' => 'E02003889',
        '1RE' => 'E02003889',
        '1RF' => 'E02003889',
        '1RG' => 'E02003889',
        '1RH' => 'E02003888',
        '1RJ' => 'E02003889',
        '1RL' => 'E02003888',
        '1RN' => 'E02003889',
        '1RP' => 'E02003889',
        '1RQ' => 'E02003889',
        '1RU' => 'E02003888',
        '1RW' => 'E02003889',
        '1SA' => 'E02003890',
        '1SB' => 'E02003890',
        '1SD' => 'E02003890',
        '1SE' => 'E02003890',
        '1SF' => 'E02003890',
        '1SG' => 'E02003890',
        '1SH' => 'E02003890',
        '1SJ' => 'E02003890',
        '1SL' => 'E02003890',
        '1SN' => 'E02003890',
        '1SP' => 'E02003890',
        '1SR' => 'E02003890',
        '1SS' => 'E02003890',
        '1ST' => 'E02003891',
        '1SW' => 'E02003890',
        '1SX' => 'E02003890',
        '1SY' => 'E02003890',
        '1SZ' => 'E02003890',
        '1TA' => 'E02003889',
        '1TB' => 'E02003890',
        '1TD' => 'E02003889',
        '1TE' => 'E02003889',
        '1TF' => 'E02003889',
        '1TG' => 'E02003889',
        '1TH' => 'E02003889',
        '1TJ' => 'E02003890',
        '1TL' => 'E02003889',
        '1TN' => 'E02003889',
        '1TP' => 'E02003890',
        '1TQ' => 'E02003889',
        '1TR' => 'E02003890',
        '1TS' => 'E02003890',
        '1TT' => 'E02003890',
        '1TU' => 'E02003890',
        '1TW' => 'E02003890',
        '1WX' => 'E02003889',
        '1WY' => 'E02003888',
        '1WZ' => 'E02003889',
        '1XA' => 'E02003889',
        '1XD' => 'E02003888',
        '1XE' => 'E02003888',
        '1XF' => 'E02003888',
        '2AA' => 'E02003888',
        '2AB' => 'E02003888',
        '2AD' => 'E02003888',
        '2AE' => 'E02003890',
        '2AF' => 'E02003888',
        '2AG' => 'E02003889',
        '2AH' => 'E02003888',
        '2AJ' => 'E02003888',
        '2AL' => 'E02003888',
        '2AN' => 'E02003888',
        '2AP' => 'E02003888',
        '2AQ' => 'E02003888',
        '2AR' => 'E02003888',
        '2AS' => 'E02003888',
        '2AT' => 'E02003888',
        '2AU' => 'E02003888',
        '2AW' => 'E02003888',
        '2AX' => 'E02003888',
        '2AY' => 'E02003888',
        '2AZ' => 'E02003888',
        '2BA' => 'E02003888',
        '2BB' => 'E02003888',
        '2BD' => 'E02003888',
        '2BE' => 'E02003888',
        '2BF' => 'E02003884',
        '2BG' => 'E02003888',
        '2BH' => 'E02003888',
        '2BJ' => 'E02003888',
        '2BL' => 'E02003888',
        '2BN' => 'E02003888',
        '2BP' => 'E02003888',
        '2BQ' => 'E02003888',
        '2BS' => 'E02003888',
        '2BT' => 'E02003888',
        '2BU' => 'E02003888',
        '2BW' => 'E02003888',
        '2BX' => 'E02003888',
        '2BY' => 'E02003888',
        '2BZ' => 'E02003888',
        '2DA' => 'E02003888',
        '2DB' => 'E02003888',
        '2DD' => 'E02003887',
        '2DE' => 'E02003888',
        '2DF' => 'E02003888',
        '2DG' => 'E02003887',
        '2DH' => 'E02003888',
        '2DJ' => 'E02003888',
        '2DL' => 'E02003887',
        '2DN' => 'E02003888',
        '2DP' => 'E02003888',
        '2DQ' => 'E02003888',
        '2DR' => 'E02003888',
        '2DS' => 'E02003888',
        '2DT' => 'E02003888',
        '2DU' => 'E02003888',
        '2DW' => 'E02003887',
        '2DX' => 'E02003888',
        '2DY' => 'E02003888',
        '2DZ' => 'E02003888',
        '2EA' => 'E02003888',
        '2EB' => 'E02003888',
        '2ED' => 'E02003888',
        '2EE' => 'E02003888',
        '2EF' => 'E02003888',
        '2EG' => 'E02003887',
        '2EH' => 'E02003888',
        '2EJ' => 'E02003888',
        '2EL' => 'E02003888',
        '2EN' => 'E02003888',
        '2EP' => 'E02003888',
        '2EQ' => 'E02003888',
        '2ER' => 'E02003888',
        '2ES' => 'E02003887',
        '2ET' => 'E02003888',
        '2EU' => 'E02003888',
        '2EW' => 'E02003888',
        '2EX' => 'E02003888',
        '2EY' => 'E02003888',
        '2EZ' => 'E02003888',
        '2FA' => 'E02003888',
        '2FB' => 'E02003888',
        '2FD' => 'E02003888',
        '2FE' => 'E02003888',
        '2FF' => 'E02003888',
        '2FG' => 'E02003888',
        '2FH' => 'E02003888',
        '2FJ' => 'E02003888',
        '2FL' => 'E02003888',
        '2FN' => 'E02003888',
        '2FP' => 'E02003888',
        '2FQ' => 'E02003888',
        '2FR' => 'E02003888',
        '2FS' => 'E02003888',
        '2FT' => 'E02003888',
        '2FU' => 'E02003888',
        '2FW' => 'E02003887',
        '2FX' => 'E02003887',
        '2FY' => 'E02003887',
        '2FZ' => 'E02003887',
        '2GA' => 'E02003888',
        '2GB' => 'E02003888',
        '2GD' => 'E02003887',
        '2GE' => 'E02003887',
        '2GF' => 'E02003887',
        '2GG' => 'E02003887',
        '2GH' => 'E02003888',
        '2GJ' => 'E02003887',
        '2GL' => 'E02003887',
        '2GN' => 'E02003887',
        '2GP' => 'E02003888',
        '2GQ' => 'E02003888',
        '2GR' => 'E02003887',
        '2GS' => 'E02003887',
        '2GT' => 'E02003887',
        '2GU' => 'E02003887',
        '2GW' => 'E02003887',
        '2GX' => 'E02003887',
        '2GY' => 'E02003887',
        '2GZ' => 'E02003887',
        '2HA' => 'E02003888',
        '2HB' => 'E02003888',
        '2HD' => 'E02003887',
        '2HE' => 'E02003888',
        '2HF' => 'E02003887',
        '2HG' => 'E02003888',
        '2HH' => 'E02003888',
        '2HJ' => 'E02003887',
        '2HL' => 'E02003888',
        '2HN' => 'E02003888',
        '2HP' => 'E02003887',
        '2HQ' => 'E02003888',
        '2HR' => 'E02003887',
        '2HS' => 'E02003887',
        '2HT' => 'E02003888',
        '2HU' => 'E02003887',
        '2HW' => 'E02003888',
        '2HX' => 'E02003888',
        '2HY' => 'E02003887',
        '2HZ' => 'E02003887',
        '2JA' => 'E02003887',
        '2JB' => 'E02003887',
        '2JD' => 'E02003887',
        '2JE' => 'E02003887',
        '2JF' => 'E02003887',
        '2JG' => 'E02003887',
        '2JH' => 'E02003888',
        '2JJ' => 'E02003888',
        '2JL' => 'E02003888',
        '2JN' => 'E02003889',
        '2JP' => 'E02003889',
        '2JQ' => 'E02003888',
        '2JR' => 'E02003889',
        '2JS' => 'E02003887',
        '2JT' => 'E02003889',
        '2JU' => 'E02003887',
        '2JW' => 'E02003887',
        '2JX' => 'E02003889',
        '2JY' => 'E02003889',
        '2JZ' => 'E02003887',
        '2LA' => 'E02003887',
        '2LB' => 'E02003887',
        '2LD' => 'E02003887',
        '2LE' => 'E02003887',
        '2LF' => 'E02003887',
        '2LG' => 'E02003887',
        '2LH' => 'E02003887',
        '2LJ' => 'E02003887',
        '2LL' => 'E02003887',
        '2LN' => 'E02003887',
        '2LP' => 'E02003889',
        '2LQ' => 'E02003887',
        '2LR' => 'E02003887',
        '2LS' => 'E02003888',
        '2LT' => 'E02003888',
        '2LU' => 'E02003887',
        '2LW' => 'E02003887',
        '2LX' => 'E02003887',
        '2LY' => 'E02003887',
        '2LZ' => 'E02003887',
        '2NA' => 'E02003887',
        '2NB' => 'E02003887',
        '2ND' => 'E02003887',
        '2NE' => 'E02003887',
        '2NF' => 'E02003887',
        '2NG' => 'E02003887',
        '2NH' => 'E02003887',
        '2NJ' => 'E02003887',
        '2NL' => 'E02003887',
        '2NN' => 'E02003887',
        '2NP' => 'E02003887',
        '2NQ' => 'E02003887',
        '2NR' => 'E02003887',
        '2NS' => 'E02003887',
        '2NT' => 'E02003887',
        '2NU' => 'E02003888',
        '2NW' => 'E02003887',
        '2NX' => 'E02003888',
        '2NY' => 'E02003888',
        '2NZ' => 'E02003888',
        '2PA' => 'E02003887',
        '2PB' => 'E02003887',
        '2PD' => 'E02003887',
        '2PE' => 'E02003887',
        '2PF' => 'E02003885',
        '2PG' => 'E02003887',
        '2PH' => 'E02003887',
        '2PJ' => 'E02003887',
        '2PL' => 'E02003887',
        '2PN' => 'E02003884',
        '2PP' => 'E02003884',
        '2PQ' => 'E02003887',
        '2PR' => 'E02003887',
        '2PS' => 'E02003887',
        '2PT' => 'E02003887',
        '2PU' => 'E02003887',
        '2PW' => 'E02003884',
        '2PX' => 'E02003884',
        '2PY' => 'E02003884',
        '2PZ' => 'E02003884',
        '2QA' => 'E02003884',
        '2QB' => 'E02003884',
        '2QD' => 'E02003887',
        '2QE' => 'E02003884',
        '2QF' => 'E02003884',
        '2QG' => 'E02003884',
        '2QH' => 'E02003884',
        '2QJ' => 'E02003891',
        '2QL' => 'E02003884',
        '2QN' => 'E02003891',
        '2QP' => 'E02003884',
        '2QQ' => 'E02003884',
        '2QR' => 'E02003887',
        '2QS' => 'E02003887',
        '2QT' => 'E02003884',
        '2QU' => 'E02003891',
        '2QW' => 'E02003891',
        '2QX' => 'E02003887',
        '2QY' => 'E02003887',
        '2QZ' => 'E02003887',
        '2RA' => 'E02003889',
        '2RB' => 'E02003889',
        '2RD' => 'E02003887',
        '2RE' => 'E02003887',
        '2RF' => 'E02003887',
        '2RG' => 'E02003889',
        '2RH' => 'E02003889',
        '2RJ' => 'E02003887',
        '2RL' => 'E02003887',
        '2RN' => 'E02003887',
        '2RP' => 'E02003887',
        '2RQ' => 'E02003889',
        '2RR' => 'E02003887',
        '2RS' => 'E02003887',
        '2RT' => 'E02003887',
        '2RU' => 'E02003887',
        '2RW' => 'E02003887',
        '2RX' => 'E02003887',
        '2RY' => 'E02003887',
        '2RZ' => 'E02003884',
        '2SA' => 'E02003887',
        '2SB' => 'E02003887',
        '2SD' => 'E02003887',
        '2SE' => 'E02003887',
        '2SF' => 'E02003887',
        '2SG' => 'E02003887',
        '2SH' => 'E02003887',
        '2SJ' => 'E02003887',
        '2SL' => 'E02003887',
        '2SN' => 'E02003887',
        '2SP' => 'E02003888',
        '2SQ' => 'E02003888',
        '2SR' => 'E02003888',
        '2SS' => 'E02003888',
        '2ST' => 'E02003888',
        '2SU' => 'E02003888',
        '2SW' => 'E02003887',
        '2SX' => 'E02003888',
        '2SY' => 'E02003888',
        '2SZ' => 'E02003888',
        '2TA' => 'E02003889',
        '2TB' => 'E02003889',
        '2TD' => 'E02003889',
        '2TE' => 'E02003889',
        '2TF' => 'E02003887',
        '2TG' => 'E02003889',
        '2TH' => 'E02003887',
        '2TJ' => 'E02003887',
        '2TL' => 'E02003887',
        '2TN' => 'E02003887',
        '2TP' => 'E02003887',
        '2TQ' => 'E02003887',
        '2TR' => 'E02003887',
        '2TS' => 'E02003887',
        '2TT' => 'E02003887',
        '2TU' => 'E02003887',
        '2TW' => 'E02003887',
        '2TX' => 'E02003887',
        '2TY' => 'E02003888',
        '2TZ' => 'E02003887',
        '2UA' => 'E02003887',
        '2UB' => 'E02003887',
        '2UD' => 'E02003887',
        '2UE' => 'E02003887',
        '2UF' => 'E02003887',
        '2UG' => 'E02003887',
        '2UH' => 'E02003887',
        '2UJ' => 'E02003887',
        '2UL' => 'E02003888',
        '2UN' => 'E02003888',
        '2UP' => 'E02003888',
        '2UQ' => 'E02003887',
        '2UR' => 'E02003887',
        '2US' => 'E02003887',
        '2UT' => 'E02003887',
        '2UU' => 'E02003887',
        '2UW' => 'E02003887',
        '2UX' => 'E02003887',
        '2UY' => 'E02003887',
        '2UZ' => 'E02003887',
        '2WA' => 'E02003888',
        '2WB' => 'E02003888',
        '2WD' => 'E02003888',
        '2WE' => 'E02003887',
        '2WF' => 'E02003888',
        '2WG' => 'E02003888',
        '2WN' => 'E02003888',
        '2WP' => 'E02003888',
        '2WQ' => 'E02003888',
        '2WR' => 'E02003888',
        '2WS' => 'E02003888',
        '2WT' => 'E02003888',
        '2WU' => 'E02003888',
        '2WW' => 'E02003888',
        '2WX' => 'E02003888',
        '2WY' => 'E02003888',
        '2WZ' => 'E02003888',
        '2XA' => 'E02003888',
        '2XB' => 'E02003887',
        '2XD' => 'E02003887',
        '2XE' => 'E02003888',
        '2XF' => 'E02003888',
        '2XG' => 'E02003888',
        '2XH' => 'E02003887',
        '2XJ' => 'E02003887',
        '2XL' => 'E02003889',
        '2XN' => 'E02003889',
        '2XR' => 'E02003887',
        '2XS' => 'E02003889',
        '2YA' => 'E02003889',
        '2YB' => 'E02003889',
        '2YD' => 'E02003889',
        '2YE' => 'E02003889',
        '2YF' => 'E02003889',
        '2YG' => 'E02003889',
        '2YH' => 'E02003889',
        '2YJ' => 'E02003889',
        '2YL' => 'E02003889',
        '2YN' => 'E02003889',
        '2YP' => 'E02003889',
        '2YQ' => 'E02003889',
        '2YR' => 'E02003889',
        '2YS' => 'E02003889',
        '2YT' => 'E02003889',
        '2YZ' => 'E02003888',
        '3AA' => 'E02003888',
        '3AB' => 'E02003888',
        '3AD' => 'E02003888',
        '3AE' => 'E02003888',
        '3AF' => 'E02003888',
        '3AG' => 'E02003888',
        '3AH' => 'E02003888',
        '3AJ' => 'E02003888',
        '3AL' => 'E02003886',
        '3AN' => 'E02003888',
        '3AP' => 'E02003886',
        '3AQ' => 'E02003888',
        '3AR' => 'E02003888',
        '3AS' => 'E02003888',
        '3AT' => 'E02003886',
        '3AU' => 'E02003886',
        '3AW' => 'E02003888',
        '3AX' => 'E02003886',
        '3AY' => 'E02003886',
        '3AZ' => 'E02003886',
        '3BA' => 'E02003886',
        '3BB' => 'E02003886',
        '3BD' => 'E02003886',
        '3BE' => 'E02003886',
        '3BF' => 'E02003886',
        '3BG' => 'E02003886',
        '3BH' => 'E02003885',
        '3BJ' => 'E02003886',
        '3BL' => 'E02003886',
        '3BN' => 'E02003890',
        '3BP' => 'E02003888',
        '3BQ' => 'E02003888',
        '3BS' => 'E02003888',
        '3BT' => 'E02003888',
        '3BU' => 'E02003888',
        '3BW' => 'E02003886',
        '3BX' => 'E02003886',
        '3BY' => 'E02003886',
        '3BZ' => 'E02003886',
        '3DA' => 'E02003888',
        '3DB' => 'E02003888',
        '3DD' => 'E02003888',
        '3DE' => 'E02003890',
        '3DF' => 'E02003890',
        '3DG' => 'E02003890',
        '3DH' => 'E02003888',
        '3DJ' => 'E02003890',
        '3DL' => 'E02003890',
        '3DN' => 'E02003886',
        '3DP' => 'E02003886',
        '3DQ' => 'E02003886',
        '3DR' => 'E02003886',
        '3DS' => 'E02003888',
        '3DT' => 'E02003886',
        '3DU' => 'E02003888',
        '3DW' => 'E02003886',
        '3DX' => 'E02003888',
        '3DY' => 'E02003888',
        '3DZ' => 'E02003888',
        '3EA' => 'E02003890',
        '3EB' => 'E02003890',
        '3ED' => 'E02003890',
        '3EE' => 'E02003888',
        '3EF' => 'E02003888',
        '3EG' => 'E02003888',
        '3EH' => 'E02003888',
        '3EJ' => 'E02003888',
        '3EL' => 'E02003888',
        '3EN' => 'E02003888',
        '3EP' => 'E02003886',
        '3EQ' => 'E02003888',
        '3ER' => 'E02003886',
        '3ES' => 'E02003886',
        '3ET' => 'E02003886',
        '3EU' => 'E02003886',
        '3EW' => 'E02003888',
        '3EX' => 'E02003886',
        '3EY' => 'E02003886',
        '3EZ' => 'E02003886',
        '3FA' => 'E02003890',
        '3FB' => 'E02003886',
        '3FD' => 'E02003886',
        '3FE' => 'E02003888',
        '3FF' => 'E02003890',
        '3FG' => 'E02003888',
        '3FH' => 'E02003888',
        '3FJ' => 'E02003888',
        '3FL' => 'E02003888',
        '3FP' => 'E02003888',
        '3FQ' => 'E02003888',
        '3FR' => 'E02003890',
        '3FS' => 'E02003890',
        '3FT' => 'E02003886',
        '3FU' => 'E02003888',
        '3FW' => 'E02003888',
        '3FX' => 'E02003890',
        '3FY' => 'E02003890',
        '3FZ' => 'E02003888',
        '3GA' => 'E02003886',
        '3GB' => 'E02003886',
        '3GD' => 'E02003888',
        '3GE' => 'E02003886',
        '3GF' => 'E02003888',
        '3GG' => 'E02003888',
        '3GH' => 'E02003886',
        '3GJ' => 'E02003890',
        '3GL' => 'E02003888',
        '3GN' => 'E02003886',
        '3GP' => 'E02003890',
        '3GY' => 'E02003888',
        '3GZ' => 'E02003888',
        '3HA' => 'E02003886',
        '3HB' => 'E02003886',
        '3HD' => 'E02003886',
        '3HE' => 'E02003886',
        '3HF' => 'E02003886',
        '3HG' => 'E02003890',
        '3HH' => 'E02003886',
        '3HJ' => 'E02003886',
        '3HL' => 'E02003890',
        '3HN' => 'E02003886',
        '3HP' => 'E02003886',
        '3HQ' => 'E02003886',
        '3HR' => 'E02003886',
        '3HS' => 'E02003886',
        '3HT' => 'E02003886',
        '3HU' => 'E02003886',
        '3HW' => 'E02003886',
        '3HX' => 'E02003886',
        '3HY' => 'E02003886',
        '3HZ' => 'E02003886',
        '3JA' => 'E02003886',
        '3JB' => 'E02003886',
        '3JD' => 'E02003886',
        '3JE' => 'E02003886',
        '3JF' => 'E02003886',
        '3JG' => 'E02003886',
        '3JH' => 'E02003886',
        '3JJ' => 'E02003886',
        '3JL' => 'E02003886',
        '3JN' => 'E02003886',
        '3JP' => 'E02003886',
        '3JQ' => 'E02003886',
        '3JR' => 'E02003886',
        '3JS' => 'E02003886',
        '3JT' => 'E02003886',
        '3JU' => 'E02003886',
        '3JW' => 'E02003886',
        '3JX' => 'E02003886',
        '3JY' => 'E02003886',
        '3JZ' => 'E02003886',
        '3LA' => 'E02003886',
        '3LB' => 'E02003886',
        '3LD' => 'E02003886',
        '3LE' => 'E02003886',
        '3LF' => 'E02003886',
        '3LG' => 'E02003886',
        '3LH' => 'E02003886',
        '3LJ' => 'E02003886',
        '3LL' => 'E02003886',
        '3LN' => 'E02003886',
        '3LP' => 'E02003886',
        '3LQ' => 'E02003886',
        '3LR' => 'E02003886',
        '3LS' => 'E02003886',
        '3LT' => 'E02003886',
        '3LU' => 'E02003886',
        '3LW' => 'E02003886',
        '3LX' => 'E02003886',
        '3LY' => 'E02003886',
        '3LZ' => 'E02003886',
        '3NA' => 'E02003886',
        '3NE' => 'E02003890',
        '3NF' => 'E02003886',
        '3NG' => 'E02003886',
        '3NH' => 'E02003886',
        '3NJ' => 'E02003886',
        '3NL' => 'E02003886',
        '3NN' => 'E02003886',
        '3NP' => 'E02003886',
        '3NQ' => 'E02003886',
        '3NR' => 'E02003886',
        '3NS' => 'E02003886',
        '3NT' => 'E02003886',
        '3NU' => 'E02003886',
        '3NW' => 'E02003886',
        '3NX' => 'E02003886',
        '3NY' => 'E02003886',
        '3NZ' => 'E02003886',
        '3PA' => 'E02003886',
        '3PB' => 'E02003886',
        '3PD' => 'E02003886',
        '3PE' => 'E02003890',
        '3PF' => 'E02003890',
        '3PG' => 'E02003886',
        '3PH' => 'E02003886',
        '3PJ' => 'E02003886',
        '3PL' => 'E02003886',
        '3PN' => 'E02003886',
        '3PP' => 'E02003886',
        '3PQ' => 'E02003886',
        '3PR' => 'E02003886',
        '3PS' => 'E02003890',
        '3PT' => 'E02003886',
        '3PU' => 'E02003886',
        '3PW' => 'E02003886',
        '3PX' => 'E02003886',
        '3PY' => 'E02003886',
        '3PZ' => 'E02003886',
        '3QA' => 'E02003886',
        '3QB' => 'E02003886',
        '3QD' => 'E02003886',
        '3QE' => 'E02003886',
        '3QF' => 'E02003886',
        '3QG' => 'E02003886',
        '3QH' => 'E02003888',
        '3QJ' => 'E02003886',
        '3QL' => 'E02003886',
        '3QN' => 'E02003886',
        '3QP' => 'E02003886',
        '3QQ' => 'E02003886',
        '3QR' => 'E02003886',
        '3QS' => 'E02003886',
        '3QT' => 'E02003886',
        '3QU' => 'E02003886',
        '3QW' => 'E02003886',
        '3QX' => 'E02003886',
        '3QY' => 'E02003886',
        '3QZ' => 'E02003886',
        '3RA' => 'E02003886',
        '3RB' => 'E02003886',
        '3RD' => 'E02003886',
        '3RE' => 'E02003888',
        '3RF' => 'E02003886',
        '3RG' => 'E02003886',
        '3RH' => 'E02003886',
        '3RJ' => 'E02003886',
        '3RL' => 'E02003886',
        '3RN' => 'E02003886',
        '3RP' => 'E02003886',
        '3RQ' => 'E02003886',
        '3RR' => 'E02003886',
        '3RS' => 'E02003886',
        '3RT' => 'E02003886',
        '3RU' => 'E02003886',
        '3RW' => 'E02003886',
        '3RX' => 'E02003886',
        '3RY' => 'E02003886',
        '3SA' => 'E02003888',
        '3SB' => 'E02003886',
        '3SD' => 'E02003886',
        '3SE' => 'E02003886',
        '3SF' => 'E02003890',
        '3SG' => 'E02003886',
        '3SH' => 'E02003886',
        '3SJ' => 'E02003888',
        '3SL' => 'E02003886',
        '3SN' => 'E02003886',
        '3TA' => 'E02003888',
        '3TB' => 'E02003888',
        '3TE' => 'E02003888',
        '3TJ' => 'E02003890',
        '3TR' => 'E02003890',
        '3TS' => 'E02003890',
        '3TT' => 'E02003886',
        '3TU' => 'E02003888',
        '3TX' => 'E02003886',
        '3UA' => 'E02003890',
        '3UB' => 'E02003890',
        '3UD' => 'E02003890',
        '3UE' => 'E02003886',
        '3UF' => 'E02003886',
        '3UG' => 'E02003886',
        '3UH' => 'E02003886',
        '3UJ' => 'E02003886',
        '3UL' => 'E02003886',
        '3UN' => 'E02003886',
        '3UP' => 'E02003886',
        '3UQ' => 'E02003886',
        '3UR' => 'E02003886',
        '3UT' => 'E02003886',
        '3UU' => 'E02003886',
        '3UX' => 'E02003886',
        '3UZ' => 'E02003886',
        '3WA' => 'E02003888',
        '3WN' => 'E02003888',
        '3WP' => 'E02003888',
        '3WQ' => 'E02003888',
        '3WR' => 'E02003886',
        '3WS' => 'E02003886',
        '3WT' => 'E02003888',
        '3WU' => 'E02003888',
        '3WW' => 'E02003888',
        '3WX' => 'E02003886',
        '3WY' => 'E02003886',
        '3WZ' => 'E02003886',
        '3XA' => 'E02003888',
        '3XB' => 'E02003888',
        '3XD' => 'E02003888',
        '3XE' => 'E02003888',
        '3YZ' => 'E02003888',
        '4AA' => 'E02003890',
        '4AB' => 'E02003889',
        '4AD' => 'E02003890',
        '4AE' => 'E02003890',
        '4AF' => 'E02003890',
        '4AG' => 'E02003890',
        '4AH' => 'E02003890',
        '4AJ' => 'E02003890',
        '4AL' => 'E02003890',
        '4AN' => 'E02003890',
        '4AP' => 'E02003890',
        '4AQ' => 'E02003890',
        '4AR' => 'E02003890',
        '4AS' => 'E02003890',
        '4AT' => 'E02003890',
        '4AU' => 'E02003890',
        '4AW' => 'E02003890',
        '4AX' => 'E02003889',
        '4AY' => 'E02003889',
        '4AZ' => 'E02003890',
        '4BA' => 'E02003889',
        '4BB' => 'E02003890',
        '4BD' => 'E02003890',
        '4BE' => 'E02003890',
        '4BF' => 'E02003890',
        '4BH' => 'E02003837',
        '4BJ' => 'E02003890',
        '4BL' => 'E02003890',
        '4BN' => 'E02003890',
        '4BP' => 'E02003890',
        '4BQ' => 'E02003890',
        '4BS' => 'E02003891',
        '4BT' => 'E02003890',
        '4BU' => 'E02003890',
        '4BW' => 'E02003890',
        '4BX' => 'E02003890',
        '4BY' => 'E02003890',
        '4BZ' => 'E02003890',
        '4DA' => 'E02003890',
        '4DB' => 'E02003891',
        '4DD' => 'E02003891',
        '4DE' => 'E02003891',
        '4DF' => 'E02003891',
        '4DG' => 'E02003891',
        '4DH' => 'E02003837',
        '4DJ' => 'E02003837',
        '4DL' => 'E02003837',
        '4DN' => 'E02003837',
        '4DP' => 'E02003837',
        '4DQ' => 'E02003891',
        '4DR' => 'E02003837',
        '4DS' => 'E02003837',
        '4DT' => 'E02003837',
        '4DU' => 'E02003837',
        '4DW' => 'E02003837',
        '4DX' => 'E02003891',
        '4DY' => 'E02003891',
        '4DZ' => 'E02003891',
        '4EA' => 'E02003891',
        '4EB' => 'E02003891',
        '4ED' => 'E02003890',
        '4EE' => 'E02003891',
        '4EF' => 'E02003890',
        '4EG' => 'E02003891',
        '4EH' => 'E02003889',
        '4EJ' => 'E02003889',
        '4EL' => 'E02003891',
        '4EN' => 'E02003891',
        '4EP' => 'E02003891',
        '4EQ' => 'E02003891',
        '4ER' => 'E02003891',
        '4ES' => 'E02003888',
        '4ET' => 'E02003890',
        '4EU' => 'E02003890',
        '4EW' => 'E02003890',
        '4EX' => 'E02003890',
        '4EY' => 'E02003837',
        '4EZ' => 'E02003890',
        '4FA' => 'E02003888',
        '4FB' => 'E02003890',
        '4FD' => 'E02003890',
        '4FE' => 'E02003890',
        '4FF' => 'E02003890',
        '4FG' => 'E02003890',
        '4FH' => 'E02003890',
        '4FJ' => 'E02003890',
        '4FL' => 'E02003890',
        '4FN' => 'E02003890',
        '4FP' => 'E02003890',
        '4FQ' => 'E02003890',
        '4FR' => 'E02003890',
        '4HA' => 'E02003891',
        '4HB' => 'E02003891',
        '4HD' => 'E02003837',
        '4HH' => 'E02003837',
        '4HJ' => 'E02003837',
        '4HL' => 'E02003890',
        '4WX' => 'E02003888',
        '4WY' => 'E02003888',
        '4WZ' => 'E02003837',
        '4XA' => 'E02003837',
        '4YH' => 'E02003890',
        '9AA' => 'E02003888',
        '9AB' => 'E02003888',
        '9AD' => 'E02003888',
        '9AE' => 'E02003888',
        '9AF' => 'E02003888',
        '9AG' => 'E02003888',
        '9AH' => 'E02003888',
        '9AJ' => 'E02003888',
        '9AL' => 'E02003888',
        '9AN' => 'E02003888',
        '9AP' => 'E02003888',
        '9AQ' => 'E02003888',
        '9AR' => 'E02003888',
        '9AS' => 'E02003888',
        '9AT' => 'E02003888',
        '9AU' => 'E02003888',
        '9AX' => 'E02003888',
        '9AY' => 'E02003888',
        '9AZ' => 'E02003888',
        '9BA' => 'E02003888',
        '9BB' => 'E02003888',
        '9BD' => 'E02003888',
        '9BE' => 'E02003888',
        '9BF' => 'E02003888',
        '9BG' => 'E02003888',
        '9BH' => 'E02003888',
        '9BJ' => 'E02003888',
        '9BL' => 'E02003888',
        '9BN' => 'E02003888',
        '9BP' => 'E02003888',
        '9BQ' => 'E02003888',
        '9BR' => 'E02003888',
        '9BS' => 'E02003888',
        '9BT' => 'E02003888',
        '9BU' => 'E02003888',
        '9BW' => 'E02003888',
        '9BX' => 'E02003888',
        '9BY' => 'E02003888',
        '9BZ' => 'E02003888',
        '9DA' => 'E02003888',
        '9DB' => 'E02003888',
        '9DD' => 'E02003888',
        '9DE' => 'E02003888',
        '9DF' => 'E02003888',
        '9DG' => 'E02003888',
        '9DH' => 'E02003888',
        '9DJ' => 'E02003888',
        '9DL' => 'E02003888',
        '9DN' => 'E02003888',
        '9DP' => 'E02003888',
        '9DQ' => 'E02003888',
        '9DR' => 'E02003888',
        '9DS' => 'E02003888',
        '9DT' => 'E02003888',
        '9EA' => 'E02003888',
        '9EB' => 'E02003888',
        '9ED' => 'E02003888',
        '9EE' => 'E02003888',
        '9EF' => 'E02003888',
        '9EG' => 'E02003888',
        '9EH' => 'E02003888',
        '9EJ' => 'E02003888',
        '9EL' => 'E02003888',
        '9EN' => 'E02003888',
        '9EP' => 'E02003888',
        '9EQ' => 'E02003888',
        '9ER' => 'E02003888',
        '9ES' => 'E02003888',
        '9ET' => 'E02003888',
        '9EU' => 'E02003888',
        '9EW' => 'E02003888',
        '9EX' => 'E02003888',
        '9EY' => 'E02003888',
        '9EZ' => 'E02003888',
        '9FA' => 'E02003888',
        '9FB' => 'E02003888',
        '9FD' => 'E02003888',
        '9FE' => 'E02003888',
        '9FF' => 'E02003888',
        '9FG' => 'E02003888',
        '9FH' => 'E02003888',
        '9FJ' => 'E02003888',
        '9FL' => 'E02003888',
        '9FN' => 'E02003888',
        '9FP' => 'E02003888',
        '9FQ' => 'E02003888',
        '9FR' => 'E02003888',
        '9FS' => 'E02003888',
        '9FT' => 'E02003888',
        '9FU' => 'E02003888',
        '9FW' => 'E02003888',
        '9FX' => 'E02003888',
        '9FY' => 'E02003888',
        '9FZ' => 'E02003888',
        '9GA' => 'E02003888',
        '9GB' => 'E02003888',
        '9GD' => 'E02003888',
        '9GE' => 'E02003888',
        '9GF' => 'E02003888',
        '9GG' => 'E02003888',
        '9GH' => 'E02003888',
        '9GJ' => 'E02003888',
        '9GL' => 'E02003888',
        '9GN' => 'E02003888',
        '9GP' => 'E02003888',
        '9GQ' => 'E02003888',
        '9GR' => 'E02003888',
        '9GS' => 'E02003888',
        '9GT' => 'E02003888',
        '9GU' => 'E02003888',
        '9GW' => 'E02003888',
        '9GX' => 'E02003888',
        '9GY' => 'E02003888',
        '9GZ' => 'E02003888',
        '9HA' => 'E02003888',
        '9HB' => 'E02003888',
        '9HD' => 'E02003888',
        '9HE' => 'E02003888',
        '9HF' => 'E02003888',
        '9HG' => 'E02003888',
        '9HH' => 'E02003888',
        '9HJ' => 'E02003888',
        '9HL' => 'E02003888',
        '9SA' => 'E02003890',
        '9SB' => 'E02003890',
        '9SD' => 'E02003890',
        '9SE' => 'E02003890',
        '9SF' => 'E02003890',
        '9SG' => 'E02003890',
        '9SH' => 'E02003890',
        '9SJ' => 'E02003890',
        '9SL' => 'E02003890',
        '9SN' => 'E02003890',
        '9SP' => 'E02003890',
        '9SQ' => 'E02003890',
        '9SR' => 'E02003890',
        '9SS' => 'E02003890',
        '9ST' => 'E02003890',
        '9SU' => 'E02003890',
        '9SW' => 'E02003890',
        '9SX' => 'E02003890',
        '9SY' => 'E02003890',
        '9SZ' => 'E02003890',
        '9TA' => 'E02003890',
        '9TB' => 'E02003890',
        '9TD' => 'E02003890',
        '9TE' => 'E02003890',
        '9TF' => 'E02003890',
        '9TG' => 'E02003890',
        '9TH' => 'E02003890',
        '9TJ' => 'E02003890',
        '9TL' => 'E02003890',
        '9TN' => 'E02003890',
        '9TP' => 'E02003890',
        '9TQ' => 'E02003890',
        '9TR' => 'E02003890',
        '9TS' => 'E02003890',
        '9TT' => 'E02003890',
        '9TU' => 'E02003890',
        '9TW' => 'E02003890',
        '9TX' => 'E02003890',
        '9TY' => 'E02003890',
        '9WZ' => 'E02003888',
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
