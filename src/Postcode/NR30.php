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
final class NR30
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02005542',
        '1AB' => 'E02005542',
        '1AE' => 'E02005542',
        '1AF' => 'E02005542',
        '1AH' => 'E02005543',
        '1AJ' => 'E02005542',
        '1AL' => 'E02005542',
        '1AN' => 'E02005543',
        '1BA' => 'E02005542',
        '1BB' => 'E02005542',
        '1BD' => 'E02005542',
        '1BE' => 'E02005542',
        '1BF' => 'E02005542',
        '1BG' => 'E02005542',
        '1BH' => 'E02005542',
        '1BJ' => 'E02005542',
        '1BL' => 'E02005542',
        '1BN' => 'E02005541',
        '1BP' => 'E02005541',
        '1BQ' => 'E02005542',
        '1BS' => 'E02005541',
        '1BT' => 'E02005541',
        '1BU' => 'E02005541',
        '1BW' => 'E02005541',
        '1BX' => 'E02005541',
        '1BY' => 'E02005542',
        '1BZ' => 'E02005542',
        '1DA' => 'E02005542',
        '1DB' => 'E02005542',
        '1DD' => 'E02005541',
        '1DE' => 'E02005542',
        '1DF' => 'E02005542',
        '1DG' => 'E02005542',
        '1DH' => 'E02005542',
        '1DJ' => 'E02005542',
        '1DL' => 'E02005542',
        '1DN' => 'E02005542',
        '1DP' => 'E02005542',
        '1DQ' => 'E02005542',
        '1DR' => 'E02005542',
        '1DS' => 'E02005542',
        '1DT' => 'E02005542',
        '1DU' => 'E02005542',
        '1DW' => 'E02005542',
        '1DX' => 'E02005542',
        '1DY' => 'E02005542',
        '1DZ' => 'E02005542',
        '1EA' => 'E02005542',
        '1EB' => 'E02005542',
        '1ED' => 'E02005542',
        '1EE' => 'E02005542',
        '1EF' => 'E02005542',
        '1EG' => 'E02005542',
        '1EH' => 'E02005542',
        '1EJ' => 'E02005542',
        '1EL' => 'E02005542',
        '1EN' => 'E02005542',
        '1EP' => 'E02005542',
        '1EQ' => 'E02005542',
        '1ER' => 'E02005542',
        '1ES' => 'E02005542',
        '1ET' => 'E02005542',
        '1EU' => 'E02005542',
        '1EW' => 'E02005542',
        '1EX' => 'E02005542',
        '1EY' => 'E02005542',
        '1EZ' => 'E02005542',
        '1GA' => 'E02005542',
        '1HB' => 'E02005542',
        '1HD' => 'E02005542',
        '1HE' => 'E02005542',
        '1HF' => 'E02005542',
        '1HG' => 'E02005542',
        '1HH' => 'E02005542',
        '1HJ' => 'E02005542',
        '1HL' => 'E02005542',
        '1HN' => 'E02005542',
        '1HP' => 'E02005542',
        '1HQ' => 'E02005542',
        '1HR' => 'E02005542',
        '1HS' => 'E02005542',
        '1HT' => 'E02005542',
        '1HU' => 'E02005542',
        '1HW' => 'E02005542',
        '1HX' => 'E02005542',
        '1HY' => 'E02005542',
        '1HZ' => 'E02005542',
        '1JA' => 'E02005542',
        '1JB' => 'E02005542',
        '1JD' => 'E02005542',
        '1JE' => 'E02005542',
        '1JF' => 'E02005542',
        '1JG' => 'E02005542',
        '1JH' => 'E02005542',
        '1JJ' => 'E02005542',
        '1JL' => 'E02005542',
        '1JN' => 'E02005542',
        '1JP' => 'E02005542',
        '1JQ' => 'E02005542',
        '1JR' => 'E02005542',
        '1JS' => 'E02005542',
        '1JT' => 'E02005542',
        '1JU' => 'E02005542',
        '1JW' => 'E02005542',
        '1JX' => 'E02005542',
        '1JY' => 'E02005542',
        '1JZ' => 'E02005542',
        '1LA' => 'E02005542',
        '1LB' => 'E02005542',
        '1LD' => 'E02005542',
        '1LE' => 'E02005542',
        '1LF' => 'E02005542',
        '1LG' => 'E02005542',
        '1LH' => 'E02005542',
        '1LJ' => 'E02005542',
        '1LL' => 'E02005542',
        '1LN' => 'E02005542',
        '1LP' => 'E02005542',
        '1LQ' => 'E02005542',
        '1LR' => 'E02005542',
        '1LS' => 'E02005542',
        '1LT' => 'E02005542',
        '1LU' => 'E02005542',
        '1LW' => 'E02005542',
        '1LX' => 'E02005542',
        '1LY' => 'E02005542',
        '1LZ' => 'E02005542',
        '1NA' => 'E02005542',
        '1NB' => 'E02005542',
        '1ND' => 'E02005542',
        '1NE' => 'E02005542',
        '1NF' => 'E02005542',
        '1NG' => 'E02005542',
        '1NH' => 'E02005542',
        '1NJ' => 'E02005542',
        '1NL' => 'E02005542',
        '1NN' => 'E02005542',
        '1NP' => 'E02005542',
        '1NQ' => 'E02005542',
        '1NR' => 'E02005542',
        '1NS' => 'E02005542',
        '1NT' => 'E02005542',
        '1NU' => 'E02005542',
        '1NW' => 'E02005542',
        '1NX' => 'E02005542',
        '1NY' => 'E02005542',
        '1NZ' => 'E02005542',
        '1PA' => 'E02005542',
        '1PB' => 'E02005542',
        '1PD' => 'E02005542',
        '1PE' => 'E02005542',
        '1PF' => 'E02005542',
        '1PG' => 'E02005542',
        '1PH' => 'E02005542',
        '1PJ' => 'E02005542',
        '1PL' => 'E02005542',
        '1PN' => 'E02005542',
        '1PP' => 'E02005542',
        '1PQ' => 'E02005542',
        '1PR' => 'E02005542',
        '1PS' => 'E02005542',
        '1PT' => 'E02005542',
        '1PU' => 'E02005542',
        '1PW' => 'E02005542',
        '1PX' => 'E02005542',
        '1PY' => 'E02005542',
        '1PZ' => 'E02005542',
        '1QA' => 'E02005542',
        '1QB' => 'E02005542',
        '1QD' => 'E02005542',
        '1QE' => 'E02005541',
        '1QF' => 'E02005542',
        '1QG' => 'E02005542',
        '1QH' => 'E02005541',
        '1QJ' => 'E02005542',
        '1QL' => 'E02005542',
        '1QN' => 'E02005542',
        '1QP' => 'E02005542',
        '1QQ' => 'E02005542',
        '1QR' => 'E02005542',
        '1QS' => 'E02005542',
        '1QT' => 'E02005542',
        '1QU' => 'E02005542',
        '1QW' => 'E02005541',
        '1QX' => 'E02005542',
        '1QY' => 'E02005542',
        '1QZ' => 'E02005542',
        '1RB' => 'E02005542',
        '1RD' => 'E02005542',
        '1RE' => 'E02005542',
        '1RF' => 'E02005542',
        '1RG' => 'E02005542',
        '1RH' => 'E02005543',
        '1RJ' => 'E02005543',
        '1RL' => 'E02005543',
        '1RN' => 'E02005542',
        '1RP' => 'E02005542',
        '1RQ' => 'E02005543',
        '1RR' => 'E02005543',
        '1RS' => 'E02005542',
        '1RT' => 'E02005542',
        '1RU' => 'E02005543',
        '1RW' => 'E02005542',
        '1RZ' => 'E02005542',
        '1SA' => 'E02005543',
        '1SB' => 'E02005537',
        '1SD' => 'E02005542',
        '1SE' => 'E02005542',
        '1SF' => 'E02005542',
        '1SG' => 'E02005542',
        '1SH' => 'E02005542',
        '1SJ' => 'E02005542',
        '1SL' => 'E02005542',
        '1SN' => 'E02005542',
        '1SP' => 'E02005542',
        '1SQ' => 'E02005542',
        '1SR' => 'E02005542',
        '1SS' => 'E02005542',
        '1ST' => 'E02005542',
        '1SU' => 'E02005542',
        '1SW' => 'E02005542',
        '1SX' => 'E02005542',
        '1SY' => 'E02005542',
        '1SZ' => 'E02005542',
        '1TA' => 'E02005542',
        '1TB' => 'E02005542',
        '1TD' => 'E02005542',
        '1TE' => 'E02005542',
        '1TH' => 'E02005537',
        '1TT' => 'E02005537',
        '1WA' => 'E02005537',
        '1WB' => 'E02005537',
        '1WG' => 'E02005542',
        '1YR' => 'E02005542',
        '1YT' => 'E02005542',
        '1YW' => 'E02005537',
        '2AA' => 'E02005543',
        '2AB' => 'E02005543',
        '2AD' => 'E02005543',
        '2AE' => 'E02005543',
        '2AF' => 'E02005542',
        '2AG' => 'E02005543',
        '2AH' => 'E02005543',
        '2AJ' => 'E02005543',
        '2AL' => 'E02005542',
        '2AN' => 'E02005542',
        '2AP' => 'E02005542',
        '2AQ' => 'E02005543',
        '2AR' => 'E02005542',
        '2AS' => 'E02005542',
        '2AT' => 'E02005542',
        '2AU' => 'E02005542',
        '2AW' => 'E02005542',
        '2AX' => 'E02005542',
        '2AY' => 'E02005543',
        '2AZ' => 'E02005542',
        '2BA' => 'E02005542',
        '2BB' => 'E02005542',
        '2BD' => 'E02005543',
        '2BE' => 'E02005542',
        '2BF' => 'E02005543',
        '2BG' => 'E02005542',
        '2BH' => 'E02005543',
        '2BJ' => 'E02005543',
        '2BL' => 'E02005543',
        '2BN' => 'E02005542',
        '2BP' => 'E02005542',
        '2BQ' => 'E02005542',
        '2BS' => 'E02005542',
        '2BT' => 'E02005542',
        '2BU' => 'E02005542',
        '2BW' => 'E02005542',
        '2BX' => 'E02005542',
        '2BY' => 'E02005543',
        '2BZ' => 'E02005542',
        '2DA' => 'E02005543',
        '2DB' => 'E02005542',
        '2DD' => 'E02005542',
        '2DE' => 'E02005542',
        '2DF' => 'E02005542',
        '2DG' => 'E02005542',
        '2DH' => 'E02005542',
        '2DJ' => 'E02005542',
        '2DL' => 'E02005543',
        '2DN' => 'E02005542',
        '2DP' => 'E02005542',
        '2DQ' => 'E02005542',
        '2DR' => 'E02005542',
        '2DS' => 'E02005542',
        '2DT' => 'E02005542',
        '2DU' => 'E02005542',
        '2DW' => 'E02005542',
        '2DX' => 'E02005542',
        '2DY' => 'E02005542',
        '2DZ' => 'E02005542',
        '2EA' => 'E02005542',
        '2EB' => 'E02005542',
        '2ED' => 'E02005542',
        '2EE' => 'E02005542',
        '2EF' => 'E02005542',
        '2EG' => 'E02005542',
        '2EH' => 'E02005543',
        '2EJ' => 'E02005543',
        '2EL' => 'E02005543',
        '2EN' => 'E02005543',
        '2EP' => 'E02005543',
        '2EQ' => 'E02005542',
        '2ER' => 'E02005543',
        '2ES' => 'E02005543',
        '2ET' => 'E02005542',
        '2EU' => 'E02005543',
        '2EW' => 'E02005543',
        '2EX' => 'E02005543',
        '2EY' => 'E02005542',
        '2EZ' => 'E02005543',
        '2FA' => 'E02005543',
        '2FB' => 'E02005542',
        '2FD' => 'E02005543',
        '2FE' => 'E02005543',
        '2FF' => 'E02005542',
        '2FG' => 'E02005543',
        '2FH' => 'E02005543',
        '2FL' => 'E02005543',
        '2GA' => 'E02005543',
        '2GB' => 'E02005543',
        '2GL' => 'E02005543',
        '2GZ' => 'E02005543',
        '2HA' => 'E02005543',
        '2HB' => 'E02005543',
        '2HD' => 'E02005543',
        '2HE' => 'E02005543',
        '2HF' => 'E02005543',
        '2HG' => 'E02005543',
        '2HH' => 'E02005542',
        '2HJ' => 'E02005543',
        '2HL' => 'E02005543',
        '2HN' => 'E02005543',
        '2HP' => 'E02005543',
        '2HQ' => 'E02005543',
        '2HR' => 'E02005543',
        '2HS' => 'E02005543',
        '2HT' => 'E02005543',
        '2HU' => 'E02005543',
        '2HW' => 'E02005543',
        '2HX' => 'E02005543',
        '2HY' => 'E02005543',
        '2HZ' => 'E02005543',
        '2JA' => 'E02005543',
        '2JB' => 'E02005543',
        '2JD' => 'E02005543',
        '2JE' => 'E02005543',
        '2JF' => 'E02005543',
        '2JG' => 'E02005543',
        '2JH' => 'E02005543',
        '2JJ' => 'E02005543',
        '2JL' => 'E02005543',
        '2JN' => 'E02005543',
        '2JP' => 'E02005543',
        '2JQ' => 'E02005543',
        '2JR' => 'E02005543',
        '2JS' => 'E02005543',
        '2JT' => 'E02005543',
        '2JU' => 'E02005543',
        '2JW' => 'E02005543',
        '2JX' => 'E02005543',
        '2JY' => 'E02005543',
        '2JZ' => 'E02005543',
        '2LA' => 'E02005543',
        '2LB' => 'E02005543',
        '2LD' => 'E02005543',
        '2LE' => 'E02005543',
        '2LF' => 'E02005543',
        '2LG' => 'E02005543',
        '2LH' => 'E02005543',
        '2LJ' => 'E02005543',
        '2LL' => 'E02005543',
        '2LN' => 'E02005543',
        '2LP' => 'E02005543',
        '2LQ' => 'E02005543',
        '2LR' => 'E02005543',
        '2LS' => 'E02005543',
        '2LT' => 'E02005543',
        '2LU' => 'E02005543',
        '2LW' => 'E02005543',
        '2LX' => 'E02005543',
        '2LY' => 'E02005543',
        '2LZ' => 'E02005543',
        '2NA' => 'E02005543',
        '2NB' => 'E02005543',
        '2ND' => 'E02005543',
        '2NE' => 'E02005543',
        '2NF' => 'E02005543',
        '2NG' => 'E02005543',
        '2NH' => 'E02005543',
        '2NJ' => 'E02005543',
        '2NN' => 'E02005543',
        '2NP' => 'E02005543',
        '2NQ' => 'E02005543',
        '2NR' => 'E02005543',
        '2NS' => 'E02005543',
        '2NT' => 'E02005543',
        '2NU' => 'E02005543',
        '2NW' => 'E02005543',
        '2NX' => 'E02005543',
        '2NY' => 'E02005543',
        '2NZ' => 'E02005543',
        '2PA' => 'E02005543',
        '2PB' => 'E02005543',
        '2PD' => 'E02005543',
        '2PE' => 'E02005543',
        '2PF' => 'E02005543',
        '2PG' => 'E02005543',
        '2PH' => 'E02005543',
        '2PJ' => 'E02005542',
        '2PL' => 'E02005543',
        '2PN' => 'E02005543',
        '2PP' => 'E02005543',
        '2PQ' => 'E02005543',
        '2PR' => 'E02005543',
        '2PS' => 'E02005543',
        '2PT' => 'E02005543',
        '2PU' => 'E02005543',
        '2PW' => 'E02005543',
        '2PX' => 'E02005543',
        '2PY' => 'E02005543',
        '2PZ' => 'E02005543',
        '2QA' => 'E02005542',
        '2QB' => 'E02005543',
        '2QD' => 'E02005543',
        '2QE' => 'E02005543',
        '2QF' => 'E02005543',
        '2QG' => 'E02005543',
        '2QH' => 'E02005543',
        '2QJ' => 'E02005543',
        '2QL' => 'E02005543',
        '2QN' => 'E02005543',
        '2QP' => 'E02005543',
        '2QQ' => 'E02005542',
        '2QR' => 'E02005543',
        '2QS' => 'E02005543',
        '2QT' => 'E02005543',
        '2QU' => 'E02005543',
        '2QW' => 'E02005543',
        '2QX' => 'E02005543',
        '2QY' => 'E02005542',
        '2QZ' => 'E02005543',
        '2RA' => 'E02005543',
        '2RB' => 'E02005543',
        '2RD' => 'E02005543',
        '2RE' => 'E02005543',
        '2RG' => 'E02005543',
        '2RH' => 'E02005543',
        '2RJ' => 'E02005543',
        '2RL' => 'E02005543',
        '2RN' => 'E02005543',
        '2RP' => 'E02005543',
        '2RQ' => 'E02005543',
        '2RR' => 'E02005543',
        '2RS' => 'E02005543',
        '2RT' => 'E02005543',
        '2RU' => 'E02005543',
        '2RW' => 'E02005543',
        '2RX' => 'E02005543',
        '2RY' => 'E02005543',
        '2RZ' => 'E02005543',
        '2SA' => 'E02005543',
        '2SB' => 'E02005543',
        '2SD' => 'E02005543',
        '2SE' => 'E02005543',
        '2SF' => 'E02005543',
        '2SG' => 'E02005543',
        '2SH' => 'E02005543',
        '2SJ' => 'E02005543',
        '2SL' => 'E02005543',
        '2SN' => 'E02005543',
        '2SP' => 'E02005543',
        '2SQ' => 'E02005543',
        '2SR' => 'E02005543',
        '2ST' => 'E02005543',
        '2SW' => 'E02005543',
        '2SX' => 'E02005543',
        '2SY' => 'E02005543',
        '2SZ' => 'E02005543',
        '2TA' => 'E02005543',
        '2TB' => 'E02005542',
        '2WA' => 'E02005542',
        '2WB' => 'E02005542',
        '2WD' => 'E02005542',
        '2WZ' => 'E02005542',
        '2XA' => 'E02005542',
        '2XW' => 'E02005542',
        '2ZX' => 'E02005542',
        '2ZZ' => 'E02005542',
        '3AA' => 'E02005543',
        '3AB' => 'E02005543',
        '3AD' => 'E02005543',
        '3AE' => 'E02005543',
        '3AF' => 'E02005543',
        '3AG' => 'E02005543',
        '3AH' => 'E02005543',
        '3AJ' => 'E02005543',
        '3AL' => 'E02005543',
        '3AN' => 'E02005543',
        '3AP' => 'E02005543',
        '3AQ' => 'E02005543',
        '3AR' => 'E02005543',
        '3AS' => 'E02005543',
        '3AT' => 'E02005543',
        '3AU' => 'E02005543',
        '3AW' => 'E02005543',
        '3AX' => 'E02005543',
        '3AY' => 'E02005543',
        '3AZ' => 'E02005543',
        '3BA' => 'E02005543',
        '3BB' => 'E02005543',
        '3BD' => 'E02005543',
        '3BE' => 'E02005543',
        '3BF' => 'E02005543',
        '3BG' => 'E02005543',
        '3BH' => 'E02005543',
        '3BJ' => 'E02005543',
        '3BL' => 'E02005543',
        '3BN' => 'E02005543',
        '3BP' => 'E02005543',
        '3BQ' => 'E02005543',
        '3BS' => 'E02005543',
        '3BT' => 'E02005543',
        '3BU' => 'E02005543',
        '3BW' => 'E02005543',
        '3BX' => 'E02005543',
        '3BY' => 'E02005543',
        '3BZ' => 'E02005543',
        '3DA' => 'E02005543',
        '3DB' => 'E02005543',
        '3DD' => 'E02005543',
        '3DE' => 'E02005543',
        '3DF' => 'E02005543',
        '3DG' => 'E02005543',
        '3DH' => 'E02005543',
        '3DL' => 'E02005543',
        '3DN' => 'E02005543',
        '3DP' => 'E02005543',
        '3DQ' => 'E02005543',
        '3DR' => 'E02005543',
        '3DS' => 'E02005543',
        '3DT' => 'E02005543',
        '3DU' => 'E02005543',
        '3DW' => 'E02005543',
        '3DX' => 'E02005543',
        '3DY' => 'E02005543',
        '3DZ' => 'E02005543',
        '3EA' => 'E02005543',
        '3EB' => 'E02005543',
        '3ED' => 'E02005543',
        '3EE' => 'E02005543',
        '3EF' => 'E02005543',
        '3EG' => 'E02005543',
        '3EH' => 'E02005543',
        '3EJ' => 'E02005543',
        '3EL' => 'E02005543',
        '3EN' => 'E02005543',
        '3EP' => 'E02005543',
        '3EQ' => 'E02005543',
        '3ER' => 'E02005543',
        '3ES' => 'E02005543',
        '3EW' => 'E02005543',
        '3GY' => 'E02005543',
        '3GZ' => 'E02005542',
        '3HA' => 'E02005543',
        '3HB' => 'E02005543',
        '3HE' => 'E02005543',
        '3HF' => 'E02005543',
        '3HG' => 'E02005543',
        '3HH' => 'E02005543',
        '3HJ' => 'E02005543',
        '3HL' => 'E02005543',
        '3HN' => 'E02005543',
        '3HP' => 'E02005543',
        '3HQ' => 'E02005543',
        '3HR' => 'E02005543',
        '3HS' => 'E02005543',
        '3HT' => 'E02005543',
        '3HU' => 'E02005543',
        '3HW' => 'E02005543',
        '3HX' => 'E02005543',
        '3HY' => 'E02005543',
        '3HZ' => 'E02005543',
        '3JA' => 'E02005543',
        '3JB' => 'E02005543',
        '3JD' => 'E02005543',
        '3JE' => 'E02005543',
        '3JF' => 'E02005543',
        '3JG' => 'E02005543',
        '3JH' => 'E02005543',
        '3JJ' => 'E02005543',
        '3JL' => 'E02005543',
        '3JN' => 'E02005543',
        '3JP' => 'E02005543',
        '3JQ' => 'E02005543',
        '3JR' => 'E02005543',
        '3JS' => 'E02005543',
        '3JT' => 'E02005543',
        '3JU' => 'E02005543',
        '3JW' => 'E02005543',
        '3JZ' => 'E02005543',
        '3LA' => 'E02005543',
        '3LB' => 'E02005543',
        '3LD' => 'E02005543',
        '3LE' => 'E02005543',
        '3LF' => 'E02005543',
        '3LG' => 'E02005543',
        '3LH' => 'E02005543',
        '3LJ' => 'E02005543',
        '3LL' => 'E02005543',
        '3LN' => 'E02005543',
        '3LP' => 'E02005543',
        '3LQ' => 'E02005543',
        '3LR' => 'E02005543',
        '3LS' => 'E02005543',
        '3LT' => 'E02005543',
        '3LU' => 'E02005544',
        '3LW' => 'E02005543',
        '3LX' => 'E02005543',
        '3LY' => 'E02005543',
        '3LZ' => 'E02005543',
        '3NA' => 'E02005543',
        '3NB' => 'E02005543',
        '3ND' => 'E02005543',
        '3NE' => 'E02005543',
        '3NF' => 'E02005543',
        '3NG' => 'E02005543',
        '3NH' => 'E02005543',
        '3NL' => 'E02005543',
        '3NN' => 'E02005543',
        '3NP' => 'E02005543',
        '3NQ' => 'E02005543',
        '3NR' => 'E02005543',
        '3NS' => 'E02005543',
        '3NT' => 'E02005543',
        '3NU' => 'E02005543',
        '3NW' => 'E02005543',
        '3NX' => 'E02005543',
        '3NZ' => 'E02005543',
        '3PA' => 'E02005543',
        '3PB' => 'E02005543',
        '3PD' => 'E02005543',
        '3PE' => 'E02005543',
        '3PF' => 'E02005543',
        '3PG' => 'E02005543',
        '3PH' => 'E02005543',
        '3PJ' => 'E02005543',
        '3PL' => 'E02005543',
        '3PN' => 'E02005543',
        '3PP' => 'E02005542',
        '3PQ' => 'E02005543',
        '3PR' => 'E02005543',
        '3PS' => 'E02005543',
        '3PT' => 'E02005543',
        '3PU' => 'E02005543',
        '3PW' => 'E02005543',
        '3PX' => 'E02005543',
        '3PY' => 'E02005543',
        '3PZ' => 'E02005543',
        '3QA' => 'E02005543',
        '3QB' => 'E02005543',
        '3QD' => 'E02005543',
        '3QE' => 'E02005543',
        '3QF' => 'E02005543',
        '3QG' => 'E02005543',
        '3QH' => 'E02005543',
        '3QJ' => 'E02005543',
        '3QL' => 'E02005543',
        '3QN' => 'E02005543',
        '3QP' => 'E02005543',
        '3QQ' => 'E02005543',
        '3QR' => 'E02005543',
        '3QS' => 'E02005543',
        '3QW' => 'E02005543',
        '3RA' => 'E02005543',
        '3RB' => 'E02005543',
        '3RD' => 'E02005543',
        '3RE' => 'E02005543',
        '3RF' => 'E02005543',
        '3RG' => 'E02005543',
        '3RJ' => 'E02005543',
        '3RL' => 'E02005543',
        '3RQ' => 'E02005543',
        '3RR' => 'E02005543',
        '3RT' => 'E02005543',
        '3WB' => 'E02005542',
        '3WF' => 'E02005542',
        '3WG' => 'E02005542',
        '3WQ' => 'E02005543',
        '3WU' => 'E02005542',
        '3WZ' => 'E02005542',
        '3XY' => 'E02005543',
        '3YP' => 'E02005542',
        '4AA' => 'E02005541',
        '4AB' => 'E02005541',
        '4AD' => 'E02005541',
        '4AE' => 'E02005541',
        '4AF' => 'E02005541',
        '4AG' => 'E02005541',
        '4AH' => 'E02005541',
        '4AJ' => 'E02005541',
        '4AL' => 'E02005541',
        '4AN' => 'E02005541',
        '4AP' => 'E02005541',
        '4AQ' => 'E02005541',
        '4AR' => 'E02005541',
        '4AS' => 'E02005541',
        '4AT' => 'E02005541',
        '4AU' => 'E02005541',
        '4AW' => 'E02005541',
        '4AX' => 'E02005541',
        '4AY' => 'E02005541',
        '4AZ' => 'E02005541',
        '4BA' => 'E02005541',
        '4BB' => 'E02005541',
        '4BD' => 'E02005541',
        '4BE' => 'E02005541',
        '4BF' => 'E02005541',
        '4BG' => 'E02005541',
        '4BH' => 'E02005541',
        '4BJ' => 'E02005541',
        '4BL' => 'E02005541',
        '4BN' => 'E02005541',
        '4BP' => 'E02005541',
        '4BQ' => 'E02005541',
        '4BS' => 'E02005541',
        '4BT' => 'E02005541',
        '4BU' => 'E02005542',
        '4BW' => 'E02005541',
        '4BX' => 'E02005541',
        '4BY' => 'E02005542',
        '4BZ' => 'E02005541',
        '4DA' => 'E02005541',
        '4DB' => 'E02005541',
        '4DD' => 'E02005541',
        '4DE' => 'E02005541',
        '4DF' => 'E02005541',
        '4DG' => 'E02005541',
        '4DH' => 'E02005541',
        '4DJ' => 'E02005541',
        '4DL' => 'E02005541',
        '4DN' => 'E02005542',
        '4DP' => 'E02005541',
        '4DQ' => 'E02005541',
        '4DR' => 'E02005541',
        '4DS' => 'E02005541',
        '4DT' => 'E02005541',
        '4DU' => 'E02005541',
        '4DW' => 'E02005542',
        '4DX' => 'E02005541',
        '4DY' => 'E02005541',
        '4DZ' => 'E02005541',
        '4EA' => 'E02005541',
        '4EB' => 'E02005541',
        '4ED' => 'E02005541',
        '4EE' => 'E02005541',
        '4EH' => 'E02005542',
        '4EJ' => 'E02005541',
        '4EL' => 'E02005541',
        '4EN' => 'E02005542',
        '4EP' => 'E02005542',
        '4EQ' => 'E02005541',
        '4ER' => 'E02005541',
        '4ES' => 'E02005541',
        '4ET' => 'E02005541',
        '4EU' => 'E02005541',
        '4EW' => 'E02005542',
        '4EX' => 'E02005541',
        '4EY' => 'E02005541',
        '4EZ' => 'E02005541',
        '4HA' => 'E02005541',
        '4HB' => 'E02005541',
        '4HD' => 'E02005541',
        '4HE' => 'E02005541',
        '4HF' => 'E02005541',
        '4HG' => 'E02005541',
        '4HH' => 'E02005541',
        '4HJ' => 'E02005541',
        '4HL' => 'E02005541',
        '4HN' => 'E02005541',
        '4HP' => 'E02005541',
        '4HQ' => 'E02005541',
        '4HR' => 'E02005542',
        '4HS' => 'E02005542',
        '4HT' => 'E02005542',
        '4HU' => 'E02005542',
        '4HX' => 'E02005542',
        '4HY' => 'E02005542',
        '4HZ' => 'E02005542',
        '4JA' => 'E02005542',
        '4JB' => 'E02005542',
        '4JD' => 'E02005542',
        '4JE' => 'E02005542',
        '4JF' => 'E02005542',
        '4JG' => 'E02005542',
        '4JH' => 'E02005541',
        '4JJ' => 'E02005542',
        '4JL' => 'E02005541',
        '4JN' => 'E02005541',
        '4JP' => 'E02005541',
        '4JQ' => 'E02005542',
        '4JR' => 'E02005541',
        '4JS' => 'E02005541',
        '4JT' => 'E02005541',
        '4JU' => 'E02005541',
        '4JW' => 'E02005541',
        '4JX' => 'E02005541',
        '4JY' => 'E02005541',
        '4JZ' => 'E02005541',
        '4LA' => 'E02005541',
        '4LB' => 'E02005541',
        '4LD' => 'E02005541',
        '4LE' => 'E02005541',
        '4LF' => 'E02005541',
        '4LG' => 'E02005542',
        '4LH' => 'E02005541',
        '4LJ' => 'E02005542',
        '4LL' => 'E02005542',
        '4LN' => 'E02005542',
        '4LP' => 'E02005542',
        '4LQ' => 'E02005541',
        '4LR' => 'E02005541',
        '4LS' => 'E02005541',
        '4LT' => 'E02005541',
        '4LU' => 'E02005541',
        '4LW' => 'E02005541',
        '4LX' => 'E02005541',
        '4LY' => 'E02005541',
        '4LZ' => 'E02005541',
        '4NA' => 'E02005541',
        '4NB' => 'E02005541',
        '4ND' => 'E02005541',
        '4NE' => 'E02005541',
        '4NF' => 'E02005541',
        '4NG' => 'E02005541',
        '4NH' => 'E02005541',
        '4NJ' => 'E02005541',
        '4NL' => 'E02005542',
        '4NN' => 'E02005542',
        '4NP' => 'E02005542',
        '4NQ' => 'E02005541',
        '4NR' => 'E02005542',
        '4NS' => 'E02005542',
        '4NT' => 'E02005542',
        '4NW' => 'E02005542',
        '4NX' => 'E02005541',
        '4WZ' => 'E02005542',
        '4XA' => 'E02005542',
        '4YA' => 'E02005542',
        '4ZA' => 'E02005542',
        '4ZG' => 'E02005542',
        '4ZU' => 'E02005542',
        '4ZZ' => 'E02005542',
        '5AA' => 'E02005540',
        '5AB' => 'E02005540',
        '5AD' => 'E02005540',
        '5AE' => 'E02005540',
        '5AF' => 'E02005540',
        '5AG' => 'E02005540',
        '5AH' => 'E02005540',
        '5AJ' => 'E02005540',
        '5AL' => 'E02005540',
        '5AN' => 'E02005540',
        '5AP' => 'E02005540',
        '5AQ' => 'E02005540',
        '5AR' => 'E02005540',
        '5AS' => 'E02005540',
        '5AT' => 'E02005540',
        '5AU' => 'E02005540',
        '5AW' => 'E02005540',
        '5AX' => 'E02005540',
        '5AY' => 'E02005540',
        '5AZ' => 'E02005540',
        '5BA' => 'E02005540',
        '5BB' => 'E02005540',
        '5BD' => 'E02005540',
        '5BE' => 'E02005540',
        '5BF' => 'E02005540',
        '5BG' => 'E02005540',
        '5BH' => 'E02005540',
        '5BJ' => 'E02005540',
        '5BL' => 'E02005540',
        '5BN' => 'E02005540',
        '5BP' => 'E02005540',
        '5BQ' => 'E02005540',
        '5BS' => 'E02005540',
        '5BT' => 'E02005540',
        '5BU' => 'E02005540',
        '5BW' => 'E02005540',
        '5BX' => 'E02005540',
        '5BY' => 'E02005540',
        '5BZ' => 'E02005540',
        '5DA' => 'E02005540',
        '5DB' => 'E02005540',
        '5DD' => 'E02005540',
        '5DE' => 'E02005540',
        '5DF' => 'E02005540',
        '5DG' => 'E02005540',
        '5DH' => 'E02005540',
        '5DJ' => 'E02005540',
        '5DL' => 'E02005540',
        '5DN' => 'E02005540',
        '5DP' => 'E02005540',
        '5DQ' => 'E02005540',
        '5DR' => 'E02005540',
        '5DS' => 'E02005540',
        '5DT' => 'E02005540',
        '5DU' => 'E02005540',
        '5DW' => 'E02005540',
        '5DX' => 'E02005540',
        '5DY' => 'E02005540',
        '5DZ' => 'E02005540',
        '5EA' => 'E02005540',
        '5EB' => 'E02005540',
        '5ED' => 'E02005540',
        '5EE' => 'E02005540',
        '5EF' => 'E02005540',
        '5EG' => 'E02005540',
        '5EH' => 'E02005540',
        '5EJ' => 'E02005540',
        '5EL' => 'E02005540',
        '5EN' => 'E02005540',
        '5EP' => 'E02005540',
        '5EQ' => 'E02005540',
        '5ER' => 'E02005540',
        '5ES' => 'E02005540',
        '5ET' => 'E02005540',
        '5EU' => 'E02005540',
        '5EW' => 'E02005540',
        '5EX' => 'E02005540',
        '5EY' => 'E02005540',
        '5EZ' => 'E02005540',
        '5FA' => 'E02005540',
        '5HA' => 'E02005540',
        '5HB' => 'E02005540',
        '5HD' => 'E02005540',
        '5HE' => 'E02005540',
        '5HF' => 'E02005540',
        '5HG' => 'E02005540',
        '5HH' => 'E02005540',
        '5HJ' => 'E02005540',
        '5HL' => 'E02005540',
        '5HN' => 'E02005540',
        '5HP' => 'E02005540',
        '5HQ' => 'E02005540',
        '5HR' => 'E02005540',
        '5HS' => 'E02005540',
        '5HT' => 'E02005540',
        '5HU' => 'E02005540',
        '5HW' => 'E02005540',
        '5HX' => 'E02005540',
        '5JA' => 'E02005540',
        '5JL' => 'E02005540',
        '5JN' => 'E02005540',
        '5JP' => 'E02005540',
        '5JR' => 'E02005540',
        '5JS' => 'E02005540',
        '5JT' => 'E02005540',
        '5JU' => 'E02005540',
        '5JW' => 'E02005540',
        '5JX' => 'E02005540',
        '5JY' => 'E02005540',
        '5JZ' => 'E02005540',
        '5LA' => 'E02005540',
        '5LB' => 'E02005540',
        '5LD' => 'E02005540',
        '5LE' => 'E02005540',
        '5LF' => 'E02005540',
        '5LG' => 'E02005540',
        '5LH' => 'E02005540',
        '5LJ' => 'E02005540',
        '5LL' => 'E02005540',
        '5LN' => 'E02005540',
        '5LP' => 'E02005540',
        '5LQ' => 'E02005540',
        '5LR' => 'E02005540',
        '5LS' => 'E02005540',
        '5LT' => 'E02005540',
        '5LU' => 'E02005540',
        '5LW' => 'E02005540',
        '5LX' => 'E02005540',
        '5LY' => 'E02005540',
        '5NE' => 'E02005540',
        '5NF' => 'E02005540',
        '5NG' => 'E02005540',
        '5NH' => 'E02005540',
        '5NJ' => 'E02005540',
        '5NL' => 'E02005540',
        '5NN' => 'E02005540',
        '5NP' => 'E02005540',
        '5NQ' => 'E02005540',
        '5NR' => 'E02005540',
        '5NS' => 'E02005540',
        '5NT' => 'E02005540',
        '5NU' => 'E02005540',
        '5NW' => 'E02005540',
        '5NX' => 'E02005540',
        '5NY' => 'E02005540',
        '5NZ' => 'E02005540',
        '5PA' => 'E02005540',
        '5PB' => 'E02005540',
        '5PD' => 'E02005540',
        '5PE' => 'E02005540',
        '5PF' => 'E02005540',
        '5PG' => 'E02005540',
        '5PH' => 'E02005540',
        '5PJ' => 'E02005540',
        '5PL' => 'E02005540',
        '5PN' => 'E02005542',
        '5PP' => 'E02005540',
        '5PQ' => 'E02005540',
        '5PS' => 'E02005540',
        '5PT' => 'E02005540',
        '5PX' => 'E02005542',
        '5PY' => 'E02005540',
        '5PZ' => 'E02005540',
        '5QA' => 'E02005540',
        '5QB' => 'E02005540',
        '5QD' => 'E02005540',
        '5QE' => 'E02005540',
        '5QF' => 'E02005540',
        '5QG' => 'E02005540',
        '5QH' => 'E02005540',
        '5QJ' => 'E02005540',
        '5QL' => 'E02005540',
        '5QN' => 'E02005540',
        '5QP' => 'E02005540',
        '5QQ' => 'E02005540',
        '5QR' => 'E02005540',
        '5QS' => 'E02005540',
        '5QT' => 'E02005540',
        '5QU' => 'E02005540',
        '5QW' => 'E02005540',
        '5QX' => 'E02005540',
        '5QY' => 'E02005540',
        '5QZ' => 'E02005540',
        '5RA' => 'E02005540',
        '5RB' => 'E02005540',
        '5RD' => 'E02005540',
        '5RE' => 'E02005540',
        '5RF' => 'E02005540',
        '5RG' => 'E02005540',
        '5RH' => 'E02005540',
        '5RJ' => 'E02005540',
        '5RL' => 'E02005540',
        '5RN' => 'E02005540',
        '5RP' => 'E02005540',
        '5RQ' => 'E02005540',
        '5RR' => 'E02005540',
        '5RS' => 'E02005540',
        '5RT' => 'E02005540',
        '5RU' => 'E02005540',
        '5RW' => 'E02005540',
        '5RX' => 'E02005540',
        '5RY' => 'E02005540',
        '5RZ' => 'E02005542',
        '5SA' => 'E02005540',
        '5SB' => 'E02005540',
        '5SD' => 'E02005540',
        '5SE' => 'E02005540',
        '5SF' => 'E02005540',
        '5SG' => 'E02005540',
        '5SH' => 'E02005540',
        '5SJ' => 'E02005539',
        '5SL' => 'E02005540',
        '5SN' => 'E02005540',
        '5SP' => 'E02005540',
        '5SQ' => 'E02005540',
        '5SR' => 'E02005540',
        '5SS' => 'E02005540',
        '5ST' => 'E02005540',
        '5SU' => 'E02005540',
        '5SW' => 'E02005540',
        '5SX' => 'E02005540',
        '5SY' => 'E02005540',
        '5SZ' => 'E02005540',
        '5TA' => 'E02005540',
        '5TB' => 'E02005540',
        '5TD' => 'E02005540',
        '5TE' => 'E02005540',
        '5TF' => 'E02005540',
        '5TG' => 'E02005540',
        '5TH' => 'E02005540',
        '5TJ' => 'E02005540',
        '5TL' => 'E02005540',
        '5TN' => 'E02005540',
        '5TP' => 'E02005540',
        '5TQ' => 'E02005540',
        '5TR' => 'E02005540',
        '5TS' => 'E02005540',
        '5TT' => 'E02005540',
        '5TU' => 'E02005540',
        '5TW' => 'E02005540',
        '5TX' => 'E02005540',
        '5TY' => 'E02005540',
        '5TZ' => 'E02005540',
        '5UA' => 'E02005540',
        '5UB' => 'E02005540',
        '5UD' => 'E02005540',
        '5UE' => 'E02005540',
        '5UF' => 'E02005540',
        '5UG' => 'E02005540',
        '5UH' => 'E02005540',
        '5UJ' => 'E02005540',
        '5UL' => 'E02005540',
        '5UN' => 'E02005540',
        '5UP' => 'E02005540',
        '5UQ' => 'E02005540',
        '5UR' => 'E02005540',
        '5US' => 'E02005540',
        '5UT' => 'E02005542',
        '5UU' => 'E02005540',
        '5UW' => 'E02005540',
        '5UX' => 'E02005542',
        '5UY' => 'E02005542',
        '5UZ' => 'E02005542',
        '5WA' => 'E02005540',
        '5WB' => 'E02005540',
        '5WD' => 'E02005540',
        '5WE' => 'E02005540',
        '5XA' => 'E02005540',
        '5XB' => 'E02005540',
        '5XD' => 'E02005540',
        '5XE' => 'E02005540',
        '5XF' => 'E02005540',
        '5XG' => 'E02005540',
        '5XH' => 'E02005540',
        '5XQ' => 'E02005540',
        '5YA' => 'E02005540',
        '5YQ' => 'E02005540',
        '5YR' => 'E02005542',
        '9AA' => 'E02005542',
        '9AB' => 'E02005542',
        '9AD' => 'E02005543',
        '9AE' => 'E02005542',
        '9AF' => 'E02005542',
        '9AG' => 'E02005542',
        '9AH' => 'E02005542',
        '9AJ' => 'E02005542',
        '9AL' => 'E02005542',
        '9AN' => 'E02005542',
        '9AP' => 'E02005542',
        '9AQ' => 'E02005542',
        '9AR' => 'E02005542',
        '9AS' => 'E02005542',
        '9AT' => 'E02005542',
        '9AU' => 'E02005542',
        '9AW' => 'E02005542',
        '9AX' => 'E02005542',
        '9AY' => 'E02005542',
        '9AZ' => 'E02005542',
        '9BA' => 'E02005542',
        '9BB' => 'E02005542',
        '9BD' => 'E02005542',
        '9BE' => 'E02005542',
        '9BF' => 'E02005542',
        '9BG' => 'E02005542',
        '9BH' => 'E02005542',
        '9BJ' => 'E02005542',
        '9BL' => 'E02005542',
        '9BN' => 'E02005542',
        '9BP' => 'E02005542',
        '9BQ' => 'E02005542',
        '9BR' => 'E02005542',
        '9BS' => 'E02005542',
        '9BT' => 'E02005542',
        '9BU' => 'E02005542',
        '9BW' => 'E02005542',
        '9BX' => 'E02005542',
        '9BY' => 'E02005542',
        '9BZ' => 'E02005542',
        '9DA' => 'E02005542',
        '9DB' => 'E02005542',
        '9DD' => 'E02005542',
        '9DE' => 'E02005542',
        '9DF' => 'E02005542',
        '9DG' => 'E02005542',
        '9DH' => 'E02005542',
        '9DJ' => 'E02005542',
        '9DL' => 'E02005542',
        '9DN' => 'E02005542',
        '9DP' => 'E02005542',
        '9DQ' => 'E02005542',
        '9DR' => 'E02005542',
        '9EA' => 'E02005542',
        '9EB' => 'E02005542',
        '9ED' => 'E02005542',
        '9EE' => 'E02005542',
        '9EF' => 'E02005542',
        '9EG' => 'E02005542',
        '9EH' => 'E02005542',
        '9EJ' => 'E02005542',
        '9EL' => 'E02005542',
        '9EN' => 'E02005542',
        '9EP' => 'E02005542',
        '9EQ' => 'E02005542',
        '9ER' => 'E02005542',
        '9ES' => 'E02005542',
        '9ET' => 'E02005542',
        '9EU' => 'E02005542',
        '9EW' => 'E02005542',
        '9EX' => 'E02005542',
        '9EY' => 'E02005542',
        '9EZ' => 'E02005542',
        '9FA' => 'E02005542',
        '9FB' => 'E02005542',
        '9FD' => 'E02005542',
        '9FE' => 'E02005542',
        '9FF' => 'E02005542',
        '9FG' => 'E02005542',
        '9FH' => 'E02005542',
        '9FJ' => 'E02005542',
        '9FL' => 'E02005542',
        '9FN' => 'E02005542',
        '9FP' => 'E02005542',
        '9FQ' => 'E02005542',
        '9FR' => 'E02005542',
        '9FS' => 'E02005542',
        '9FT' => 'E02005542',
        '9FU' => 'E02005542',
        '9FW' => 'E02005542',
        '9FX' => 'E02005542',
        '9FY' => 'E02005542',
        '9FZ' => 'E02005542',
        '9GA' => 'E02005542',
        '9GB' => 'E02005542',
        '9GD' => 'E02005542',
        '9GE' => 'E02005542',
        '9GF' => 'E02005542',
        '9GG' => 'E02005542',
        '9GH' => 'E02005542',
        '9GL' => 'E02005542',
        '9GN' => 'E02005542',
        '9GP' => 'E02005542',
        '9GQ' => 'E02005542',
        '9GR' => 'E02005542',
        '9GS' => 'E02005542',
        '9GT' => 'E02005542',
        '9GU' => 'E02005542',
        '9SA' => 'E02005543',
        '9SB' => 'E02005543',
        '9SD' => 'E02005543',
        '9SE' => 'E02005543',
        '9SF' => 'E02005543',
        '9SG' => 'E02005543',
        '9SH' => 'E02005543',
        '9SJ' => 'E02005543',
        '9SL' => 'E02005543',
        '9SN' => 'E02005543',
        '9SP' => 'E02005543',
        '9SQ' => 'E02005543',
        '9SR' => 'E02005543',
        '9SS' => 'E02005543',
        '9ST' => 'E02005543',
        '9SU' => 'E02005543',
        '9SW' => 'E02005543',
        '9SX' => 'E02005543',
        '9WZ' => 'E02005542',
        '9ZZ' => 'E02005542',
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
