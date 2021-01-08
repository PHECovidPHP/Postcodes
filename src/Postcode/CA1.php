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
final class CA1
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02003994',
        '1AB' => 'E02003992',
        '1AD' => 'E02003992',
        '1AE' => 'E02003992',
        '1AF' => 'E02003992',
        '1AZ' => 'E02003992',
        '1BA' => 'E02003992',
        '1BB' => 'E02003992',
        '1BD' => 'E02003992',
        '1BE' => 'E02003992',
        '1BG' => 'E02003992',
        '1BH' => 'E02003992',
        '1BJ' => 'E02003992',
        '1BN' => 'E02003992',
        '1BP' => 'E02003992',
        '1BQ' => 'E02003992',
        '1BU' => 'E02003992',
        '1BX' => 'E02003992',
        '1BZ' => 'E02003992',
        '1DA' => 'E02003992',
        '1DB' => 'E02003992',
        '1DD' => 'E02003992',
        '1DE' => 'E02003992',
        '1DF' => 'E02003992',
        '1DG' => 'E02003992',
        '1DH' => 'E02003992',
        '1DJ' => 'E02003992',
        '1DL' => 'E02003992',
        '1DN' => 'E02003992',
        '1DP' => 'E02003992',
        '1DQ' => 'E02003992',
        '1DR' => 'E02003992',
        '1DS' => 'E02003992',
        '1DT' => 'E02003992',
        '1DU' => 'E02003992',
        '1DW' => 'E02003992',
        '1DX' => 'E02003992',
        '1DY' => 'E02003992',
        '1DZ' => 'E02003992',
        '1EA' => 'E02003992',
        '1EB' => 'E02003992',
        '1ED' => 'E02003992',
        '1EE' => 'E02003992',
        '1EF' => 'E02003992',
        '1EG' => 'E02003992',
        '1EH' => 'E02003992',
        '1EJ' => 'E02003992',
        '1EL' => 'E02003992',
        '1EP' => 'E02003992',
        '1ER' => 'E02003992',
        '1ES' => 'E02003992',
        '1ET' => 'E02003992',
        '1EU' => 'E02003992',
        '1EW' => 'E02003992',
        '1EX' => 'E02003992',
        '1EY' => 'E02003992',
        '1EZ' => 'E02003992',
        '1GA' => 'E02003992',
        '1GB' => 'E02003992',
        '1GD' => 'E02003994',
        '1GE' => 'E02003992',
        '1GF' => 'E02003994',
        '1GG' => 'E02003992',
        '1GH' => 'E02003992',
        '1GJ' => 'E02003992',
        '1GL' => 'E02003994',
        '1HA' => 'E02003992',
        '1HB' => 'E02003992',
        '1HD' => 'E02003992',
        '1HE' => 'E02003992',
        '1HF' => 'E02003992',
        '1HG' => 'E02003994',
        '1HH' => 'E02003992',
        '1HJ' => 'E02003992',
        '1HL' => 'E02003992',
        '1HN' => 'E02003992',
        '1HP' => 'E02003992',
        '1HQ' => 'E02003992',
        '1HR' => 'E02003992',
        '1HS' => 'E02003992',
        '1HT' => 'E02003992',
        '1HU' => 'E02003992',
        '1HW' => 'E02003992',
        '1HX' => 'E02003992',
        '1HY' => 'E02003992',
        '1HZ' => 'E02003992',
        '1JA' => 'E02003992',
        '1JB' => 'E02003992',
        '1JD' => 'E02003992',
        '1JE' => 'E02003992',
        '1JF' => 'E02003994',
        '1JG' => 'E02003992',
        '1JH' => 'E02003992',
        '1JJ' => 'E02003992',
        '1JL' => 'E02003992',
        '1JN' => 'E02003992',
        '1JP' => 'E02003992',
        '1JQ' => 'E02003992',
        '1JR' => 'E02003992',
        '1JS' => 'E02003992',
        '1JT' => 'E02003992',
        '1JU' => 'E02003992',
        '1JW' => 'E02003992',
        '1JX' => 'E02003992',
        '1JY' => 'E02003992',
        '1JZ' => 'E02003992',
        '1LA' => 'E02003992',
        '1LB' => 'E02003992',
        '1LD' => 'E02003992',
        '1LE' => 'E02003992',
        '1LF' => 'E02003992',
        '1LG' => 'E02003992',
        '1LH' => 'E02003992',
        '1LJ' => 'E02003992',
        '1LL' => 'E02003992',
        '1LN' => 'E02003992',
        '1LP' => 'E02003992',
        '1LQ' => 'E02003992',
        '1LR' => 'E02003992',
        '1LS' => 'E02003992',
        '1LT' => 'E02003992',
        '1LU' => 'E02003992',
        '1LW' => 'E02003992',
        '1LX' => 'E02003992',
        '1LY' => 'E02003992',
        '1LZ' => 'E02003992',
        '1NA' => 'E02003992',
        '1NB' => 'E02003992',
        '1ND' => 'E02003992',
        '1NE' => 'E02003992',
        '1NF' => 'E02003992',
        '1NG' => 'E02003992',
        '1NH' => 'E02003992',
        '1NJ' => 'E02003992',
        '1NL' => 'E02003992',
        '1NN' => 'E02003992',
        '1NP' => 'E02003994',
        '1NS' => 'E02003992',
        '1NT' => 'E02003992',
        '1NW' => 'E02003992',
        '1NX' => 'E02003992',
        '1PA' => 'E02003992',
        '1PB' => 'E02003992',
        '1PD' => 'E02003992',
        '1PE' => 'E02003992',
        '1PF' => 'E02003992',
        '1PH' => 'E02003992',
        '1PJ' => 'E02003992',
        '1PL' => 'E02003992',
        '1PN' => 'E02003992',
        '1PP' => 'E02003992',
        '1PQ' => 'E02003992',
        '1PR' => 'E02003992',
        '1PS' => 'E02003992',
        '1PT' => 'E02003992',
        '1PU' => 'E02003992',
        '1PW' => 'E02003992',
        '1PX' => 'E02003992',
        '1PY' => 'E02003992',
        '1PZ' => 'E02003992',
        '1QA' => 'E02003992',
        '1QB' => 'E02003996',
        '1QD' => 'E02003992',
        '1QF' => 'E02003992',
        '1QG' => 'E02003992',
        '1QH' => 'E02003992',
        '1QL' => 'E02003996',
        '1QN' => 'E02003992',
        '1QP' => 'E02003992',
        '1QQ' => 'E02003992',
        '1QR' => 'E02003992',
        '1QS' => 'E02003996',
        '1QT' => 'E02003996',
        '1QU' => 'E02003996',
        '1QW' => 'E02003992',
        '1QX' => 'E02003996',
        '1QY' => 'E02003996',
        '1QZ' => 'E02003996',
        '1RA' => 'E02003996',
        '1RB' => 'E02003996',
        '1RD' => 'E02003992',
        '1RF' => 'E02003996',
        '1RG' => 'E02003996',
        '1RH' => 'E02003996',
        '1RJ' => 'E02003996',
        '1RL' => 'E02003992',
        '1RN' => 'E02003992',
        '1RP' => 'E02003992',
        '1RQ' => 'E02003992',
        '1RR' => 'E02003996',
        '1RS' => 'E02003992',
        '1RT' => 'E02003992',
        '1RU' => 'E02003992',
        '1RW' => 'E02003992',
        '1RX' => 'E02003992',
        '1RY' => 'E02003992',
        '1RZ' => 'E02003992',
        '1SA' => 'E02003996',
        '1SE' => 'E02003992',
        '1SF' => 'E02003992',
        '1SG' => 'E02003992',
        '1SH' => 'E02003996',
        '1SJ' => 'E02003996',
        '1SL' => 'E02003992',
        '1SN' => 'E02003996',
        '1SP' => 'E02003996',
        '1SQ' => 'E02003992',
        '1SR' => 'E02003996',
        '1SW' => 'E02003996',
        '1SY' => 'E02003996',
        '1TA' => 'E02003996',
        '1TB' => 'E02003996',
        '1TD' => 'E02003996',
        '1TE' => 'E02003996',
        '1TF' => 'E02003996',
        '1TG' => 'E02003996',
        '1TH' => 'E02003996',
        '1TJ' => 'E02003996',
        '1TQ' => 'E02003996',
        '1TT' => 'E02003996',
        '1TZ' => 'E02003996',
        '1UB' => 'E02003996',
        '1WB' => 'E02003996',
        '1WZ' => 'E02003994',
        '1YA' => 'E02003994',
        '1YB' => 'E02003996',
        '1YD' => 'E02003996',
        '1YE' => 'E02003996',
        '1YG' => 'E02003994',
        '1YH' => 'E02003994',
        '1ZZ' => 'E02003996',
        '2AA' => 'E02003992',
        '2AB' => 'E02003992',
        '2AD' => 'E02003992',
        '2AE' => 'E02003992',
        '2AF' => 'E02003992',
        '2AG' => 'E02003992',
        '2AH' => 'E02003992',
        '2AJ' => 'E02003992',
        '2AL' => 'E02003992',
        '2AN' => 'E02003992',
        '2AP' => 'E02003992',
        '2AQ' => 'E02003992',
        '2AR' => 'E02003992',
        '2AS' => 'E02003992',
        '2AT' => 'E02003992',
        '2AU' => 'E02003992',
        '2AW' => 'E02003992',
        '2AX' => 'E02003992',
        '2AY' => 'E02003992',
        '2AZ' => 'E02003992',
        '2BA' => 'E02003992',
        '2BB' => 'E02003992',
        '2BD' => 'E02003992',
        '2BE' => 'E02003992',
        '2BF' => 'E02003992',
        '2BG' => 'E02003992',
        '2BH' => 'E02003992',
        '2BJ' => 'E02003992',
        '2BL' => 'E02003992',
        '2BN' => 'E02003992',
        '2BP' => 'E02003992',
        '2BQ' => 'E02003992',
        '2BS' => 'E02003990',
        '2BT' => 'E02003990',
        '2BU' => 'E02003992',
        '2BW' => 'E02003992',
        '2BX' => 'E02003992',
        '2BY' => 'E02003992',
        '2BZ' => 'E02003992',
        '2DA' => 'E02003992',
        '2DB' => 'E02003992',
        '2DD' => 'E02003992',
        '2DE' => 'E02003992',
        '2DF' => 'E02003992',
        '2DG' => 'E02003992',
        '2DH' => 'E02003992',
        '2DJ' => 'E02003992',
        '2DL' => 'E02003992',
        '2DN' => 'E02003992',
        '2DP' => 'E02003992',
        '2DQ' => 'E02003992',
        '2DR' => 'E02003996',
        '2DS' => 'E02003996',
        '2DT' => 'E02003992',
        '2DU' => 'E02003992',
        '2DW' => 'E02003992',
        '2DX' => 'E02003992',
        '2DY' => 'E02003992',
        '2DZ' => 'E02003992',
        '2EA' => 'E02003996',
        '2EB' => 'E02003996',
        '2ED' => 'E02003992',
        '2EE' => 'E02003996',
        '2EF' => 'E02003996',
        '2EG' => 'E02003996',
        '2EH' => 'E02003996',
        '2EJ' => 'E02003996',
        '2EL' => 'E02003996',
        '2EN' => 'E02003996',
        '2EP' => 'E02003992',
        '2EQ' => 'E02003996',
        '2ER' => 'E02003992',
        '2ES' => 'E02003992',
        '2ET' => 'E02003992',
        '2EU' => 'E02003992',
        '2EW' => 'E02003992',
        '2EX' => 'E02003992',
        '2EY' => 'E02003992',
        '2EZ' => 'E02003992',
        '2FA' => 'E02003997',
        '2FB' => 'E02003992',
        '2FD' => 'E02003996',
        '2FE' => 'E02003996',
        '2FF' => 'E02003996',
        '2FG' => 'E02003996',
        '2FH' => 'E02003996',
        '2FJ' => 'E02003996',
        '2FL' => 'E02003996',
        '2FN' => 'E02003996',
        '2FQ' => 'E02003996',
        '2FR' => 'E02003992',
        '2FS' => 'E02003990',
        '2FT' => 'E02003990',
        '2FW' => 'E02003997',
        '2FZ' => 'E02003990',
        '2GA' => 'E02003994',
        '2GB' => 'E02003994',
        '2GD' => 'E02003992',
        '2GE' => 'E02003994',
        '2GF' => 'E02003992',
        '2GG' => 'E02003992',
        '2GH' => 'E02003994',
        '2GJ' => 'E02003992',
        '2GL' => 'E02003992',
        '2GN' => 'E02003992',
        '2GP' => 'E02003994',
        '2GQ' => 'E02003992',
        '2GR' => 'E02003994',
        '2GS' => 'E02003994',
        '2GT' => 'E02003996',
        '2GU' => 'E02003990',
        '2GX' => 'E02003990',
        '2HA' => 'E02003996',
        '2HB' => 'E02003992',
        '2HD' => 'E02003992',
        '2HE' => 'E02003992',
        '2HF' => 'E02003992',
        '2HG' => 'E02003992',
        '2HH' => 'E02003992',
        '2HJ' => 'E02003992',
        '2HL' => 'E02003992',
        '2HN' => 'E02003992',
        '2HP' => 'E02003992',
        '2HQ' => 'E02003992',
        '2HR' => 'E02003992',
        '2HS' => 'E02003992',
        '2HT' => 'E02003996',
        '2HU' => 'E02003996',
        '2HW' => 'E02003992',
        '2HX' => 'E02003996',
        '2HY' => 'E02003996',
        '2HZ' => 'E02003996',
        '2JA' => 'E02003996',
        '2JB' => 'E02003996',
        '2JD' => 'E02003996',
        '2JE' => 'E02003996',
        '2JF' => 'E02003996',
        '2JH' => 'E02003996',
        '2JJ' => 'E02003996',
        '2JL' => 'E02003996',
        '2JN' => 'E02003996',
        '2JP' => 'E02003996',
        '2JQ' => 'E02003996',
        '2JR' => 'E02003996',
        '2JU' => 'E02003992',
        '2JW' => 'E02003996',
        '2JX' => 'E02003996',
        '2JY' => 'E02003992',
        '2JZ' => 'E02003996',
        '2LA' => 'E02003992',
        '2LB' => 'E02003990',
        '2LD' => 'E02003990',
        '2LE' => 'E02003996',
        '2LF' => 'E02003996',
        '2LG' => 'E02003996',
        '2LH' => 'E02003996',
        '2LJ' => 'E02003996',
        '2LL' => 'E02003992',
        '2LN' => 'E02003990',
        '2LP' => 'E02003996',
        '2LQ' => 'E02003996',
        '2LR' => 'E02003996',
        '2LS' => 'E02003996',
        '2LT' => 'E02003996',
        '2LU' => 'E02003996',
        '2LW' => 'E02003996',
        '2LX' => 'E02003996',
        '2LY' => 'E02003992',
        '2LZ' => 'E02003996',
        '2NA' => 'E02003996',
        '2NB' => 'E02003996',
        '2ND' => 'E02003996',
        '2NE' => 'E02003996',
        '2NF' => 'E02003996',
        '2NG' => 'E02003996',
        '2NH' => 'E02003996',
        '2NJ' => 'E02003996',
        '2NL' => 'E02003996',
        '2NN' => 'E02003996',
        '2NP' => 'E02003996',
        '2NQ' => 'E02003996',
        '2NR' => 'E02003996',
        '2NS' => 'E02003996',
        '2NT' => 'E02003996',
        '2NU' => 'E02003996',
        '2NW' => 'E02003996',
        '2NX' => 'E02003996',
        '2NY' => 'E02003996',
        '2PA' => 'E02003992',
        '2PB' => 'E02003996',
        '2PD' => 'E02003996',
        '2PE' => 'E02003996',
        '2PF' => 'E02003996',
        '2PG' => 'E02003990',
        '2PH' => 'E02003996',
        '2PJ' => 'E02003996',
        '2PL' => 'E02003996',
        '2PN' => 'E02003996',
        '2PP' => 'E02003997',
        '2PQ' => 'E02003996',
        '2PR' => 'E02003996',
        '2PS' => 'E02003996',
        '2PU' => 'E02003996',
        '2PW' => 'E02003996',
        '2PX' => 'E02003996',
        '2PY' => 'E02003996',
        '2PZ' => 'E02003996',
        '2QA' => 'E02003996',
        '2QB' => 'E02003996',
        '2QD' => 'E02003994',
        '2QE' => 'E02003996',
        '2QF' => 'E02003996',
        '2QG' => 'E02003996',
        '2QH' => 'E02003996',
        '2QJ' => 'E02003996',
        '2QL' => 'E02003996',
        '2QN' => 'E02003996',
        '2QP' => 'E02003996',
        '2QQ' => 'E02003996',
        '2QR' => 'E02003996',
        '2QS' => 'E02003996',
        '2QT' => 'E02003996',
        '2QU' => 'E02003996',
        '2QW' => 'E02003996',
        '2QX' => 'E02003996',
        '2QY' => 'E02003996',
        '2QZ' => 'E02003996',
        '2RA' => 'E02003996',
        '2RB' => 'E02003996',
        '2RD' => 'E02003996',
        '2RE' => 'E02003996',
        '2RF' => 'E02003996',
        '2RG' => 'E02003996',
        '2RH' => 'E02003997',
        '2RJ' => 'E02003997',
        '2RL' => 'E02003997',
        '2RN' => 'E02003997',
        '2RP' => 'E02003997',
        '2RQ' => 'E02003997',
        '2RR' => 'E02003994',
        '2RS' => 'E02003997',
        '2RT' => 'E02003997',
        '2RU' => 'E02003990',
        '2RW' => 'E02003997',
        '2RX' => 'E02003990',
        '2RY' => 'E02003997',
        '2RZ' => 'E02003990',
        '2SA' => 'E02003997',
        '2SB' => 'E02003990',
        '2SD' => 'E02003990',
        '2SE' => 'E02003990',
        '2SF' => 'E02003990',
        '2SG' => 'E02003990',
        '2SH' => 'E02003990',
        '2SJ' => 'E02003990',
        '2SL' => 'E02003990',
        '2SN' => 'E02003990',
        '2SP' => 'E02003997',
        '2SQ' => 'E02003996',
        '2SR' => 'E02003997',
        '2SS' => 'E02003996',
        '2ST' => 'E02003997',
        '2SU' => 'E02003997',
        '2SW' => 'E02003997',
        '2SX' => 'E02003997',
        '2SY' => 'E02003997',
        '2SZ' => 'E02003997',
        '2TA' => 'E02003990',
        '2TB' => 'E02003997',
        '2TD' => 'E02003997',
        '2TE' => 'E02003990',
        '2TF' => 'E02003997',
        '2TG' => 'E02003997',
        '2TH' => 'E02003997',
        '2TJ' => 'E02003997',
        '2TL' => 'E02003997',
        '2TN' => 'E02003997',
        '2TP' => 'E02003997',
        '2TQ' => 'E02003997',
        '2TR' => 'E02003997',
        '2TS' => 'E02003997',
        '2TT' => 'E02003997',
        '2TU' => 'E02003997',
        '2TW' => 'E02003997',
        '2TX' => 'E02003990',
        '2TZ' => 'E02003997',
        '2UA' => 'E02003990',
        '2UB' => 'E02003990',
        '2UD' => 'E02003990',
        '2UE' => 'E02003990',
        '2UF' => 'E02003990',
        '2UG' => 'E02003990',
        '2UH' => 'E02003990',
        '2UJ' => 'E02003990',
        '2UL' => 'E02003994',
        '2UN' => 'E02003994',
        '2UQ' => 'E02003990',
        '2UR' => 'E02003990',
        '2UT' => 'E02003990',
        '2UU' => 'E02003997',
        '2UX' => 'E02003990',
        '2UY' => 'E02003997',
        '2WA' => 'E02003990',
        '2WB' => 'E02003990',
        '2WD' => 'E02003990',
        '2WE' => 'E02003997',
        '2WF' => 'E02003990',
        '2WG' => 'E02003997',
        '2WH' => 'E02003994',
        '2WJ' => 'E02003994',
        '2WL' => 'E02003994',
        '2WX' => 'E02003994',
        '2WY' => 'E02003994',
        '2WZ' => 'E02003994',
        '2XA' => 'E02003997',
        '2XB' => 'E02003990',
        '2XD' => 'E02003990',
        '2XG' => 'E02003997',
        '2XH' => 'E02003997',
        '2YA' => 'E02003997',
        '2YB' => 'E02003997',
        '2YD' => 'E02003994',
        '2YE' => 'E02003994',
        '2YF' => 'E02003992',
        '2YY' => 'E02003990',
        '2YZ' => 'E02003990',
        '3AA' => 'E02003997',
        '3AB' => 'E02003997',
        '3AD' => 'E02003997',
        '3AE' => 'E02003997',
        '3AF' => 'E02003996',
        '3AG' => 'E02003997',
        '3AH' => 'E02003997',
        '3AJ' => 'E02003998',
        '3AL' => 'E02003998',
        '3AN' => 'E02003997',
        '3AP' => 'E02003997',
        '3AQ' => 'E02003997',
        '3AR' => 'E02003997',
        '3AS' => 'E02003997',
        '3AT' => 'E02003997',
        '3AU' => 'E02003997',
        '3AW' => 'E02003997',
        '3AX' => 'E02003997',
        '3AY' => 'E02003999',
        '3AZ' => 'E02003997',
        '3BA' => 'E02003997',
        '3BB' => 'E02003999',
        '3BD' => 'E02003997',
        '3BE' => 'E02003997',
        '3BF' => 'E02003997',
        '3BG' => 'E02003997',
        '3BH' => 'E02003997',
        '3BJ' => 'E02003997',
        '3BL' => 'E02003997',
        '3BN' => 'E02003998',
        '3BP' => 'E02003998',
        '3BQ' => 'E02003997',
        '3BS' => 'E02003998',
        '3BT' => 'E02003997',
        '3BU' => 'E02003997',
        '3BW' => 'E02003997',
        '3BX' => 'E02003998',
        '3BY' => 'E02003997',
        '3DA' => 'E02003997',
        '3DB' => 'E02003997',
        '3DD' => 'E02003997',
        '3DE' => 'E02003997',
        '3DF' => 'E02003997',
        '3DG' => 'E02003998',
        '3DH' => 'E02003997',
        '3DJ' => 'E02003997',
        '3DL' => 'E02003999',
        '3DN' => 'E02003999',
        '3DP' => 'E02003999',
        '3DQ' => 'E02003997',
        '3DR' => 'E02003999',
        '3DS' => 'E02003999',
        '3DU' => 'E02003999',
        '3DW' => 'E02003999',
        '3DX' => 'E02003999',
        '3DY' => 'E02003999',
        '3DZ' => 'E02003999',
        '3EA' => 'E02003999',
        '3EB' => 'E02003999',
        '3EH' => 'E02003999',
        '3EJ' => 'E02003999',
        '3EP' => 'E02003999',
        '3ER' => 'E02003997',
        '3ES' => 'E02003997',
        '3ET' => 'E02003997',
        '3EU' => 'E02003997',
        '3EW' => 'E02003997',
        '3EY' => 'E02003997',
        '3EZ' => 'E02003997',
        '3FY' => 'E02003999',
        '3FZ' => 'E02003999',
        '3GA' => 'E02003997',
        '3GB' => 'E02003997',
        '3GD' => 'E02003997',
        '3GE' => 'E02003999',
        '3GF' => 'E02003997',
        '3GG' => 'E02003997',
        '3GH' => 'E02003994',
        '3GJ' => 'E02003999',
        '3GL' => 'E02003999',
        '3GN' => 'E02003999',
        '3GP' => 'E02003999',
        '3GQ' => 'E02003999',
        '3GR' => 'E02003999',
        '3GS' => 'E02003999',
        '3GT' => 'E02003999',
        '3GU' => 'E02003999',
        '3GW' => 'E02003999',
        '3GX' => 'E02003999',
        '3GY' => 'E02003999',
        '3GZ' => 'E02003997',
        '3HA' => 'E02003999',
        '3HB' => 'E02003999',
        '3HD' => 'E02003999',
        '3HE' => 'E02003999',
        '3HF' => 'E02003999',
        '3HG' => 'E02003999',
        '3HH' => 'E02003999',
        '3HJ' => 'E02003999',
        '3HN' => 'E02003997',
        '3HP' => 'E02003999',
        '3HQ' => 'E02003999',
        '3HR' => 'E02003999',
        '3HS' => 'E02003999',
        '3HT' => 'E02003999',
        '3HU' => 'E02003997',
        '3HW' => 'E02003999',
        '3HX' => 'E02003999',
        '3HY' => 'E02003999',
        '3HZ' => 'E02003999',
        '3JA' => 'E02003999',
        '3JB' => 'E02003999',
        '3JD' => 'E02003999',
        '3JE' => 'E02003997',
        '3JF' => 'E02003999',
        '3JG' => 'E02003997',
        '3JH' => 'E02003997',
        '3JJ' => 'E02003997',
        '3JL' => 'E02003997',
        '3JN' => 'E02003997',
        '3JP' => 'E02003997',
        '3JQ' => 'E02003997',
        '3JR' => 'E02003997',
        '3JS' => 'E02003997',
        '3JT' => 'E02003997',
        '3JU' => 'E02003997',
        '3JW' => 'E02003997',
        '3JX' => 'E02003997',
        '3JY' => 'E02003997',
        '3JZ' => 'E02003997',
        '3LA' => 'E02003997',
        '3LB' => 'E02003999',
        '3LD' => 'E02003999',
        '3LE' => 'E02003999',
        '3LF' => 'E02003999',
        '3LG' => 'E02003999',
        '3LH' => 'E02003999',
        '3LJ' => 'E02003997',
        '3LL' => 'E02003997',
        '3LN' => 'E02003997',
        '3LP' => 'E02003997',
        '3LQ' => 'E02003999',
        '3LR' => 'E02003997',
        '3LS' => 'E02003997',
        '3LT' => 'E02003997',
        '3LU' => 'E02003997',
        '3LW' => 'E02003997',
        '3LX' => 'E02003997',
        '3LY' => 'E02003997',
        '3LZ' => 'E02003997',
        '3NA' => 'E02003997',
        '3NB' => 'E02003997',
        '3ND' => 'E02003997',
        '3NE' => 'E02003997',
        '3NF' => 'E02003996',
        '3NG' => 'E02003994',
        '3NH' => 'E02003997',
        '3NJ' => 'E02003997',
        '3NL' => 'E02003997',
        '3NN' => 'E02003996',
        '3NP' => 'E02003997',
        '3NQ' => 'E02003996',
        '3NR' => 'E02003997',
        '3NS' => 'E02003997',
        '3NT' => 'E02003997',
        '3NU' => 'E02003997',
        '3NW' => 'E02003997',
        '3NX' => 'E02003997',
        '3NY' => 'E02003997',
        '3NZ' => 'E02003997',
        '3PA' => 'E02003997',
        '3PB' => 'E02003997',
        '3PD' => 'E02003999',
        '3PE' => 'E02003997',
        '3PF' => 'E02003997',
        '3PG' => 'E02003997',
        '3PH' => 'E02003997',
        '3PJ' => 'E02003997',
        '3PL' => 'E02003997',
        '3PN' => 'E02003997',
        '3PP' => 'E02003997',
        '3PQ' => 'E02003997',
        '3PR' => 'E02003997',
        '3PS' => 'E02003997',
        '3PT' => 'E02003997',
        '3PU' => 'E02003997',
        '3PW' => 'E02003997',
        '3PX' => 'E02003997',
        '3PY' => 'E02003997',
        '3PZ' => 'E02003997',
        '3QA' => 'E02003997',
        '3QB' => 'E02003997',
        '3QD' => 'E02003997',
        '3QE' => 'E02003997',
        '3QF' => 'E02003997',
        '3QG' => 'E02003997',
        '3QH' => 'E02003997',
        '3QJ' => 'E02003997',
        '3QL' => 'E02003997',
        '3QN' => 'E02003997',
        '3QP' => 'E02003997',
        '3QQ' => 'E02003997',
        '3QR' => 'E02003997',
        '3QS' => 'E02003997',
        '3QT' => 'E02003997',
        '3QU' => 'E02003997',
        '3QW' => 'E02003997',
        '3QX' => 'E02003997',
        '3QY' => 'E02003997',
        '3QZ' => 'E02003996',
        '3RA' => 'E02003997',
        '3RB' => 'E02003997',
        '3RD' => 'E02003999',
        '3RE' => 'E02003999',
        '3RF' => 'E02003999',
        '3RG' => 'E02003997',
        '3RH' => 'E02003997',
        '3RJ' => 'E02003997',
        '3RL' => 'E02003997',
        '3RN' => 'E02003997',
        '3RP' => 'E02003997',
        '3RQ' => 'E02003997',
        '3RR' => 'E02003997',
        '3RS' => 'E02003997',
        '3RT' => 'E02003997',
        '3RU' => 'E02003997',
        '3RW' => 'E02003997',
        '3RX' => 'E02003997',
        '3RY' => 'E02003997',
        '3RZ' => 'E02003997',
        '3SA' => 'E02003997',
        '3SB' => 'E02003997',
        '3SD' => 'E02003997',
        '3SE' => 'E02003997',
        '3SF' => 'E02003997',
        '3SG' => 'E02003997',
        '3SH' => 'E02003997',
        '3SJ' => 'E02003997',
        '3SL' => 'E02003997',
        '3SN' => 'E02003997',
        '3SP' => 'E02003997',
        '3SQ' => 'E02003997',
        '3SR' => 'E02003999',
        '3SS' => 'E02003999',
        '3ST' => 'E02003997',
        '3SU' => 'E02003999',
        '3SW' => 'E02003999',
        '3SX' => 'E02003999',
        '3SY' => 'E02003999',
        '3TA' => 'E02003999',
        '3TB' => 'E02003999',
        '3TE' => 'E02003999',
        '3TF' => 'E02003999',
        '3TG' => 'E02003999',
        '3TH' => 'E02003999',
        '3TJ' => 'E02003997',
        '3TL' => 'E02003997',
        '3TN' => 'E02003997',
        '3TP' => 'E02003999',
        '3TQ' => 'E02003990',
        '3TR' => 'E02003990',
        '3TS' => 'E02003999',
        '3TT' => 'E02003999',
        '3TU' => 'E02003997',
        '3TW' => 'E02003999',
        '3TX' => 'E02003999',
        '3TY' => 'E02003999',
        '3TZ' => 'E02003999',
        '3UA' => 'E02003999',
        '3UD' => 'E02003997',
        '3UE' => 'E02003997',
        '3UJ' => 'E02003997',
        '3WA' => 'E02003994',
        '3WY' => 'E02003994',
        '3WZ' => 'E02003994',
        '3YA' => 'E02003999',
        '3YB' => 'E02003994',
        '3YD' => 'E02003999',
        '3YE' => 'E02003999',
        '3YZ' => 'E02003999',
        '9AA' => 'E02003994',
        '9AB' => 'E02003994',
        '9AD' => 'E02003994',
        '9AE' => 'E02003994',
        '9AF' => 'E02003992',
        '9AG' => 'E02003994',
        '9AH' => 'E02003994',
        '9AJ' => 'E02003994',
        '9AL' => 'E02003994',
        '9AN' => 'E02003994',
        '9AP' => 'E02003992',
        '9AQ' => 'E02003994',
        '9AR' => 'E02003994',
        '9AS' => 'E02003994',
        '9AT' => 'E02003994',
        '9AU' => 'E02003994',
        '9AW' => 'E02003994',
        '9AX' => 'E02003994',
        '9AY' => 'E02003994',
        '9AZ' => 'E02003994',
        '9BA' => 'E02003994',
        '9BB' => 'E02003994',
        '9BD' => 'E02003994',
        '9BE' => 'E02003994',
        '9BF' => 'E02003994',
        '9BG' => 'E02003994',
        '9BH' => 'E02003994',
        '9BJ' => 'E02003994',
        '9BL' => 'E02003994',
        '9BN' => 'E02003994',
        '9BP' => 'E02003994',
        '9BQ' => 'E02003994',
        '9BR' => 'E02003994',
        '9BS' => 'E02003994',
        '9BT' => 'E02003994',
        '9BU' => 'E02003994',
        '9BW' => 'E02003994',
        '9BX' => 'E02003994',
        '9BY' => 'E02003994',
        '9BZ' => 'E02003994',
        '9DA' => 'E02003994',
        '9DB' => 'E02003994',
        '9DD' => 'E02003994',
        '9DE' => 'E02003994',
        '9DF' => 'E02003994',
        '9DG' => 'E02003994',
        '9DH' => 'E02003994',
        '9DJ' => 'E02003994',
        '9DL' => 'E02003994',
        '9DN' => 'E02003994',
        '9DP' => 'E02003994',
        '9DQ' => 'E02003994',
        '9DR' => 'E02003994',
        '9DS' => 'E02003994',
        '9DT' => 'E02003994',
        '9EA' => 'E02003994',
        '9EB' => 'E02003994',
        '9ED' => 'E02003994',
        '9EE' => 'E02003994',
        '9EF' => 'E02003994',
        '9EG' => 'E02003994',
        '9EH' => 'E02003994',
        '9EJ' => 'E02003994',
        '9EL' => 'E02003994',
        '9EN' => 'E02003994',
        '9EP' => 'E02003994',
        '9EQ' => 'E02003994',
        '9ER' => 'E02003994',
        '9ES' => 'E02003994',
        '9ET' => 'E02003994',
        '9EU' => 'E02003994',
        '9EW' => 'E02003994',
        '9EX' => 'E02003994',
        '9EY' => 'E02003994',
        '9EZ' => 'E02003994',
        '9FA' => 'E02003994',
        '9FB' => 'E02003994',
        '9FD' => 'E02003994',
        '9FE' => 'E02003994',
        '9FF' => 'E02003994',
        '9FG' => 'E02003994',
        '9FH' => 'E02003994',
        '9FJ' => 'E02003994',
        '9FL' => 'E02003994',
        '9FN' => 'E02003994',
        '9FP' => 'E02003994',
        '9FQ' => 'E02003994',
        '9FR' => 'E02003994',
        '9FS' => 'E02003994',
        '9FT' => 'E02003994',
        '9FU' => 'E02003994',
        '9FW' => 'E02003994',
        '9FX' => 'E02003994',
        '9FY' => 'E02003994',
        '9FZ' => 'E02003994',
        '9GA' => 'E02003994',
        '9GB' => 'E02003994',
        '9GD' => 'E02003994',
        '9GE' => 'E02003994',
        '9GF' => 'E02003994',
        '9GG' => 'E02003994',
        '9GH' => 'E02003994',
        '9GJ' => 'E02003994',
        '9GL' => 'E02003994',
        '9GN' => 'E02003994',
        '9GQ' => 'E02003994',
        '9GR' => 'E02003994',
        '9GS' => 'E02003994',
        '9GT' => 'E02003994',
        '9GU' => 'E02003994',
        '9GW' => 'E02003994',
        '9GX' => 'E02003994',
        '9GY' => 'E02003994',
        '9GZ' => 'E02003994',
        '9HA' => 'E02003994',
        '9HB' => 'E02003994',
        '9HE' => 'E02003994',
        '9HF' => 'E02003994',
        '9HG' => 'E02003994',
        '9HH' => 'E02003994',
        '9HJ' => 'E02003994',
        '9HN' => 'E02003994',
        '9HP' => 'E02003994',
        '9HQ' => 'E02003994',
        '9HR' => 'E02003994',
        '9HS' => 'E02003994',
        '9HT' => 'E02003994',
        '9HU' => 'E02003994',
        '9HW' => 'E02003994',
        '9HX' => 'E02003994',
        '9HY' => 'E02003994',
        '9SA' => 'E02003992',
        '9SB' => 'E02003992',
        '9SD' => 'E02003992',
        '9SE' => 'E02003992',
        '9SF' => 'E02003992',
        '9SG' => 'E02003992',
        '9SH' => 'E02003992',
        '9SJ' => 'E02003992',
        '9SL' => 'E02003992',
        '9SN' => 'E02003992',
        '9SP' => 'E02003992',
        '9SQ' => 'E02003992',
        '9SR' => 'E02003992',
        '9SS' => 'E02003992',
        '9ST' => 'E02003992',
        '9SU' => 'E02003992',
        '9SW' => 'E02003992',
        '9SX' => 'E02003992',
        '9SY' => 'E02003992',
        '9SZ' => 'E02003992',
        '9TA' => 'E02003992',
        '9TB' => 'E02003992',
        '9TD' => 'E02003992',
        '9ZZ' => 'E02003992',
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
