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
final class WF8
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02002452',
        '1AB' => 'E02002452',
        '1AD' => 'E02002452',
        '1AE' => 'E02002452',
        '1AF' => 'E02002452',
        '1AG' => 'E02002452',
        '1AH' => 'E02002452',
        '1AJ' => 'E02002452',
        '1AL' => 'E02002452',
        '1AN' => 'E02002452',
        '1AP' => 'E02002452',
        '1AQ' => 'E02002452',
        '1AR' => 'E02002452',
        '1AS' => 'E02002452',
        '1AT' => 'E02002452',
        '1AU' => 'E02002452',
        '1AW' => 'E02002452',
        '1AX' => 'E02002452',
        '1AY' => 'E02002452',
        '1AZ' => 'E02002452',
        '1BA' => 'E02002452',
        '1BB' => 'E02002452',
        '1BD' => 'E02002452',
        '1BE' => 'E02002452',
        '1BG' => 'E02002452',
        '1BH' => 'E02002455',
        '1BJ' => 'E02002452',
        '1BL' => 'E02002452',
        '1BN' => 'E02002452',
        '1BP' => 'E02002452',
        '1BQ' => 'E02002452',
        '1BT' => 'E02002452',
        '1BU' => 'E02002455',
        '1BW' => 'E02002452',
        '1DA' => 'E02002452',
        '1DB' => 'E02002452',
        '1DD' => 'E02002452',
        '1DE' => 'E02002452',
        '1DF' => 'E02002452',
        '1DG' => 'E02002452',
        '1DH' => 'E02002452',
        '1DJ' => 'E02002452',
        '1DL' => 'E02002452',
        '1DN' => 'E02002452',
        '1DP' => 'E02002452',
        '1DQ' => 'E02002452',
        '1DR' => 'E02002452',
        '1DS' => 'E02002452',
        '1DT' => 'E02002452',
        '1DU' => 'E02002452',
        '1DX' => 'E02002455',
        '1DY' => 'E02002455',
        '1DZ' => 'E02002455',
        '1EA' => 'E02002452',
        '1EB' => 'E02002452',
        '1ED' => 'E02002455',
        '1EE' => 'E02002455',
        '1EF' => 'E02002455',
        '1EG' => 'E02002452',
        '1EH' => 'E02002452',
        '1EJ' => 'E02002452',
        '1EL' => 'E02002452',
        '1EN' => 'E02002452',
        '1EP' => 'E02002452',
        '1EQ' => 'E02002452',
        '1ER' => 'E02002452',
        '1ES' => 'E02002452',
        '1ET' => 'E02002452',
        '1EW' => 'E02002452',
        '1EX' => 'E02002452',
        '1EY' => 'E02002452',
        '1EZ' => 'E02002452',
        '1GW' => 'E02002452',
        '1GY' => 'E02002452',
        '1GZ' => 'E02002452',
        '1HA' => 'E02002452',
        '1HB' => 'E02002452',
        '1HD' => 'E02002452',
        '1HE' => 'E02002452',
        '1HF' => 'E02002452',
        '1HG' => 'E02002452',
        '1HH' => 'E02002452',
        '1HJ' => 'E02002452',
        '1HL' => 'E02002452',
        '1HN' => 'E02002452',
        '1HP' => 'E02002452',
        '1HQ' => 'E02002452',
        '1HR' => 'E02002452',
        '1HS' => 'E02002452',
        '1HT' => 'E02002452',
        '1HU' => 'E02002452',
        '1HW' => 'E02002452',
        '1HX' => 'E02002452',
        '1HY' => 'E02002452',
        '1HZ' => 'E02002452',
        '1JA' => 'E02002452',
        '1JB' => 'E02002452',
        '1JD' => 'E02002452',
        '1JE' => 'E02002452',
        '1JF' => 'E02002452',
        '1JG' => 'E02002452',
        '1JH' => 'E02002452',
        '1JJ' => 'E02002449',
        '1JL' => 'E02002452',
        '1JN' => 'E02002452',
        '1JP' => 'E02002452',
        '1JQ' => 'E02002452',
        '1JR' => 'E02002452',
        '1JS' => 'E02002452',
        '1JT' => 'E02002452',
        '1JU' => 'E02002452',
        '1JW' => 'E02002452',
        '1JX' => 'E02002452',
        '1JY' => 'E02002452',
        '1JZ' => 'E02002452',
        '1LA' => 'E02002452',
        '1LB' => 'E02002452',
        '1LD' => 'E02002452',
        '1LE' => 'E02002452',
        '1LF' => 'E02002452',
        '1LG' => 'E02002452',
        '1LH' => 'E02002452',
        '1LJ' => 'E02002452',
        '1LL' => 'E02002452',
        '1LN' => 'E02002452',
        '1LP' => 'E02002452',
        '1LQ' => 'E02002452',
        '1LR' => 'E02002452',
        '1LS' => 'E02002452',
        '1LT' => 'E02002452',
        '1LU' => 'E02002452',
        '1LW' => 'E02002452',
        '1LX' => 'E02002452',
        '1LY' => 'E02002452',
        '1LZ' => 'E02002452',
        '1NA' => 'E02002452',
        '1NB' => 'E02002460',
        '1ND' => 'E02002460',
        '1NE' => 'E02002460',
        '1NF' => 'E02002452',
        '1NG' => 'E02002452',
        '1NH' => 'E02002452',
        '1NJ' => 'E02002452',
        '1NL' => 'E02002452',
        '1NN' => 'E02002452',
        '1NP' => 'E02002452',
        '1NQ' => 'E02002452',
        '1NR' => 'E02002452',
        '1NS' => 'E02002452',
        '1NT' => 'E02002452',
        '1NU' => 'E02002452',
        '1NW' => 'E02002452',
        '1NX' => 'E02002452',
        '1NY' => 'E02002452',
        '1NZ' => 'E02002452',
        '1PA' => 'E02002449',
        '1PB' => 'E02002452',
        '1PD' => 'E02002452',
        '1PE' => 'E02002452',
        '1PF' => 'E02002452',
        '1PG' => 'E02002452',
        '1PH' => 'E02002452',
        '1PJ' => 'E02002452',
        '1PL' => 'E02002455',
        '1PN' => 'E02002452',
        '1PP' => 'E02002452',
        '1PQ' => 'E02002452',
        '1PR' => 'E02002452',
        '1PS' => 'E02002452',
        '1PT' => 'E02002452',
        '1PU' => 'E02002452',
        '1PW' => 'E02002452',
        '1PX' => 'E02002452',
        '1PY' => 'E02002452',
        '1PZ' => 'E02002452',
        '1QA' => 'E02002452',
        '1QB' => 'E02002452',
        '1QD' => 'E02002452',
        '1QE' => 'E02002452',
        '1QF' => 'E02002452',
        '1QG' => 'E02002452',
        '1QH' => 'E02002452',
        '1QJ' => 'E02002452',
        '1QL' => 'E02002452',
        '1QN' => 'E02002452',
        '1QP' => 'E02002452',
        '1QQ' => 'E02002452',
        '1QR' => 'E02002452',
        '1QS' => 'E02002452',
        '1QT' => 'E02002452',
        '1QU' => 'E02002452',
        '1QW' => 'E02002452',
        '1QX' => 'E02002452',
        '1QY' => 'E02002452',
        '1QZ' => 'E02002452',
        '1RA' => 'E02002449',
        '1RB' => 'E02002455',
        '1RD' => 'E02002452',
        '1RE' => 'E02002452',
        '1RF' => 'E02002452',
        '1RG' => 'E02002452',
        '1RH' => 'E02002452',
        '1RJ' => 'E02002452',
        '1RL' => 'E02002452',
        '1RN' => 'E02002452',
        '1RP' => 'E02002449',
        '1RQ' => 'E02002449',
        '1RR' => 'E02002449',
        '1RS' => 'E02002449',
        '1RT' => 'E02002449',
        '1RU' => 'E02002449',
        '1RW' => 'E02002449',
        '1RX' => 'E02002449',
        '1RY' => 'E02002449',
        '1RZ' => 'E02002449',
        '1SA' => 'E02002449',
        '1SB' => 'E02002449',
        '1SD' => 'E02002452',
        '1SE' => 'E02002442',
        '1SF' => 'E02002440',
        '1SG' => 'E02002452',
        '1SH' => 'E02002449',
        '1SJ' => 'E02002449',
        '1SL' => 'E02002452',
        '1SN' => 'E02002452',
        '1SP' => 'E02002452',
        '1SQ' => 'E02002452',
        '1SR' => 'E02002452',
        '1SS' => 'E02002449',
        '1ST' => 'E02002449',
        '1SU' => 'E02002452',
        '1SW' => 'E02002452',
        '1SX' => 'E02002449',
        '1SY' => 'E02002449',
        '1SZ' => 'E02002449',
        '1TA' => 'E02002452',
        '1TB' => 'E02002449',
        '1TD' => 'E02002449',
        '1TE' => 'E02002449',
        '1TF' => 'E02002452',
        '1TG' => 'E02002452',
        '1TH' => 'E02002455',
        '1TJ' => 'E02002455',
        '1TL' => 'E02002449',
        '1TN' => 'E02002452',
        '1TP' => 'E02002449',
        '1TQ' => 'E02002449',
        '1TR' => 'E02002452',
        '1TS' => 'E02002449',
        '1TT' => 'E02002452',
        '1TU' => 'E02002449',
        '1TY' => 'E02002452',
        '1TZ' => 'E02002452',
        '1UA' => 'E02002455',
        '1WA' => 'E02002452',
        '1WB' => 'E02002452',
        '1WD' => 'E02002452',
        '1WS' => 'E02002452',
        '1WT' => 'E02002452',
        '1WU' => 'E02002452',
        '1WW' => 'E02002452',
        '1WX' => 'E02002452',
        '1WY' => 'E02002452',
        '1WZ' => 'E02002452',
        '1XA' => 'E02002452',
        '1XD' => 'E02002452',
        '1XE' => 'E02002452',
        '1XF' => 'E02002452',
        '1XG' => 'E02002452',
        '1XH' => 'E02002452',
        '1XJ' => 'E02002452',
        '1XL' => 'E02002452',
        '1XN' => 'E02002452',
        '1XP' => 'E02002452',
        '1XQ' => 'E02002452',
        '1XR' => 'E02002452',
        '1XU' => 'E02002452',
        '1XW' => 'E02002452',
        '1XY' => 'E02002452',
        '1XZ' => 'E02002452',
        '1YA' => 'E02002452',
        '1YD' => 'E02002452',
        '1YL' => 'E02002452',
        '1YN' => 'E02002452',
        '1YP' => 'E02002452',
        '1YQ' => 'E02002452',
        '1YR' => 'E02002452',
        '1YS' => 'E02002452',
        '1YT' => 'E02002452',
        '1YU' => 'E02002452',
        '1YW' => 'E02002452',
        '1YX' => 'E02002452',
        '1YY' => 'E02002452',
        '1YZ' => 'E02002452',
        '2AA' => 'E02002455',
        '2AB' => 'E02002455',
        '2AD' => 'E02002455',
        '2AE' => 'E02002452',
        '2AF' => 'E02002455',
        '2AG' => 'E02002455',
        '2AH' => 'E02002455',
        '2AJ' => 'E02002455',
        '2AL' => 'E02002455',
        '2AN' => 'E02002455',
        '2AP' => 'E02002455',
        '2AQ' => 'E02002455',
        '2AR' => 'E02002455',
        '2AS' => 'E02002455',
        '2AT' => 'E02002455',
        '2AU' => 'E02002455',
        '2AW' => 'E02002455',
        '2AX' => 'E02002455',
        '2AY' => 'E02002455',
        '2AZ' => 'E02002455',
        '2BA' => 'E02002455',
        '2BB' => 'E02002455',
        '2BD' => 'E02002449',
        '2BE' => 'E02002455',
        '2BG' => 'E02002455',
        '2BH' => 'E02002455',
        '2BJ' => 'E02002455',
        '2BL' => 'E02002455',
        '2BN' => 'E02002455',
        '2BP' => 'E02002455',
        '2BQ' => 'E02002455',
        '2BS' => 'E02002455',
        '2BT' => 'E02002455',
        '2BU' => 'E02002455',
        '2BW' => 'E02002455',
        '2BX' => 'E02002455',
        '2BY' => 'E02002455',
        '2BZ' => 'E02002455',
        '2DA' => 'E02002455',
        '2DB' => 'E02002455',
        '2DD' => 'E02002455',
        '2DE' => 'E02002455',
        '2DF' => 'E02002449',
        '2DG' => 'E02002449',
        '2DH' => 'E02002449',
        '2DJ' => 'E02002449',
        '2DL' => 'E02002449',
        '2DN' => 'E02002449',
        '2DP' => 'E02002449',
        '2DQ' => 'E02002449',
        '2DR' => 'E02002449',
        '2DS' => 'E02002449',
        '2DT' => 'E02002449',
        '2DU' => 'E02002449',
        '2DW' => 'E02002449',
        '2DX' => 'E02002449',
        '2DY' => 'E02002449',
        '2DZ' => 'E02002449',
        '2EA' => 'E02002449',
        '2EB' => 'E02002449',
        '2ED' => 'E02002449',
        '2EE' => 'E02002455',
        '2EF' => 'E02002455',
        '2EG' => 'E02002455',
        '2EH' => 'E02002455',
        '2EJ' => 'E02002452',
        '2EL' => 'E02002455',
        '2EN' => 'E02002455',
        '2EP' => 'E02002455',
        '2EQ' => 'E02002455',
        '2ER' => 'E02002455',
        '2ES' => 'E02002455',
        '2ET' => 'E02002449',
        '2EU' => 'E02002449',
        '2EW' => 'E02002455',
        '2EX' => 'E02002449',
        '2EY' => 'E02002449',
        '2EZ' => 'E02002449',
        '2FA' => 'E02002449',
        '2FB' => 'E02002449',
        '2FD' => 'E02002449',
        '2FE' => 'E02002449',
        '2FF' => 'E02002449',
        '2FG' => 'E02002449',
        '2FH' => 'E02002449',
        '2FJ' => 'E02002449',
        '2FL' => 'E02002449',
        '2FN' => 'E02002449',
        '2FP' => 'E02002449',
        '2FQ' => 'E02002449',
        '2FR' => 'E02002449',
        '2FS' => 'E02002449',
        '2FT' => 'E02002449',
        '2FU' => 'E02002449',
        '2FW' => 'E02002449',
        '2GA' => 'E02002449',
        '2GB' => 'E02002449',
        '2GD' => 'E02002455',
        '2GH' => 'E02002452',
        '2GN' => 'E02002452',
        '2GU' => 'E02002455',
        '2HA' => 'E02002455',
        '2HB' => 'E02002449',
        '2HD' => 'E02002449',
        '2HE' => 'E02002449',
        '2HF' => 'E02002455',
        '2HG' => 'E02002455',
        '2HH' => 'E02002455',
        '2HJ' => 'E02002455',
        '2HL' => 'E02002455',
        '2HN' => 'E02002449',
        '2HP' => 'E02002449',
        '2HQ' => 'E02002455',
        '2HR' => 'E02002449',
        '2HS' => 'E02002449',
        '2HT' => 'E02002449',
        '2HU' => 'E02002449',
        '2HW' => 'E02002449',
        '2HX' => 'E02002449',
        '2HY' => 'E02002449',
        '2HZ' => 'E02002455',
        '2JA' => 'E02002452',
        '2JB' => 'E02002452',
        '2JD' => 'E02002449',
        '2JE' => 'E02002452',
        '2JF' => 'E02002452',
        '2JG' => 'E02002449',
        '2JH' => 'E02002449',
        '2JJ' => 'E02002449',
        '2JL' => 'E02002452',
        '2JN' => 'E02002452',
        '2JP' => 'E02002449',
        '2JQ' => 'E02002449',
        '2JR' => 'E02002449',
        '2JS' => 'E02002449',
        '2JT' => 'E02002449',
        '2JU' => 'E02002449',
        '2JW' => 'E02002452',
        '2JX' => 'E02002449',
        '2JY' => 'E02002449',
        '2JZ' => 'E02002449',
        '2LA' => 'E02002449',
        '2LB' => 'E02002449',
        '2LD' => 'E02002449',
        '2LE' => 'E02002449',
        '2LF' => 'E02002449',
        '2LG' => 'E02002449',
        '2LH' => 'E02002449',
        '2LJ' => 'E02002449',
        '2LL' => 'E02002449',
        '2LN' => 'E02002449',
        '2LP' => 'E02002449',
        '2LQ' => 'E02002449',
        '2LR' => 'E02002449',
        '2LS' => 'E02002449',
        '2LT' => 'E02002449',
        '2LU' => 'E02002449',
        '2LW' => 'E02002449',
        '2LX' => 'E02002449',
        '2LY' => 'E02002449',
        '2LZ' => 'E02002449',
        '2NA' => 'E02002449',
        '2NB' => 'E02002449',
        '2ND' => 'E02002449',
        '2NE' => 'E02002449',
        '2NF' => 'E02002449',
        '2NG' => 'E02002449',
        '2NH' => 'E02002449',
        '2NJ' => 'E02002449',
        '2NL' => 'E02002449',
        '2NN' => 'E02002449',
        '2NP' => 'E02002452',
        '2NQ' => 'E02002449',
        '2NR' => 'E02002452',
        '2NS' => 'E02002452',
        '2NT' => 'E02002452',
        '2NU' => 'E02002452',
        '2NW' => 'E02002449',
        '2NX' => 'E02002452',
        '2NY' => 'E02002452',
        '2NZ' => 'E02002452',
        '2PA' => 'E02002449',
        '2PB' => 'E02002449',
        '2PD' => 'E02002449',
        '2PE' => 'E02002449',
        '2PF' => 'E02002449',
        '2PG' => 'E02002449',
        '2PH' => 'E02002449',
        '2PJ' => 'E02002449',
        '2PL' => 'E02002449',
        '2PN' => 'E02002449',
        '2PP' => 'E02002449',
        '2PQ' => 'E02002449',
        '2PR' => 'E02002449',
        '2PS' => 'E02002449',
        '2PT' => 'E02002449',
        '2PU' => 'E02002449',
        '2PW' => 'E02002449',
        '2PX' => 'E02002449',
        '2PY' => 'E02002449',
        '2PZ' => 'E02002449',
        '2QA' => 'E02002449',
        '2QB' => 'E02002449',
        '2QD' => 'E02002455',
        '2QE' => 'E02002455',
        '2QF' => 'E02002455',
        '2QG' => 'E02002455',
        '2QH' => 'E02002449',
        '2QJ' => 'E02002452',
        '2QL' => 'E02002452',
        '2QN' => 'E02002460',
        '2QP' => 'E02002460',
        '2QQ' => 'E02002455',
        '2QR' => 'E02002460',
        '2QS' => 'E02002455',
        '2QT' => 'E02002455',
        '2QU' => 'E02002455',
        '2QW' => 'E02002455',
        '2QX' => 'E02002455',
        '2QY' => 'E02002460',
        '2QZ' => 'E02002460',
        '2RA' => 'E02002460',
        '2RB' => 'E02002460',
        '2RD' => 'E02002455',
        '2RE' => 'E02002455',
        '2RF' => 'E02002455',
        '2RG' => 'E02002455',
        '2RH' => 'E02002455',
        '2RJ' => 'E02002452',
        '2RL' => 'E02002452',
        '2RN' => 'E02002455',
        '2RP' => 'E02002452',
        '2RQ' => 'E02002455',
        '2RR' => 'E02002452',
        '2RS' => 'E02002452',
        '2RT' => 'E02002452',
        '2RU' => 'E02002452',
        '2RW' => 'E02002449',
        '2RX' => 'E02002452',
        '2RY' => 'E02002452',
        '2RZ' => 'E02002452',
        '2SA' => 'E02002452',
        '2SB' => 'E02002452',
        '2SD' => 'E02002460',
        '2SE' => 'E02002460',
        '2SF' => 'E02002452',
        '2SG' => 'E02002452',
        '2SH' => 'E02002452',
        '2SJ' => 'E02002452',
        '2SL' => 'E02002452',
        '2SN' => 'E02002452',
        '2SP' => 'E02002452',
        '2SQ' => 'E02002452',
        '2SR' => 'E02002449',
        '2SS' => 'E02002449',
        '2ST' => 'E02002452',
        '2SU' => 'E02002455',
        '2SW' => 'E02002452',
        '2SX' => 'E02002455',
        '2SY' => 'E02002455',
        '2SZ' => 'E02002455',
        '2TA' => 'E02002449',
        '2TB' => 'E02002455',
        '2TD' => 'E02002455',
        '2TE' => 'E02002455',
        '2TF' => 'E02002455',
        '2TG' => 'E02002455',
        '2TH' => 'E02002449',
        '2TJ' => 'E02002460',
        '2TL' => 'E02002455',
        '2TN' => 'E02002455',
        '2TP' => 'E02002455',
        '2TQ' => 'E02002455',
        '2TR' => 'E02002455',
        '2TS' => 'E02002455',
        '2TT' => 'E02002455',
        '2TU' => 'E02002455',
        '2TW' => 'E02002455',
        '2TX' => 'E02002449',
        '2TY' => 'E02002455',
        '2TZ' => 'E02002455',
        '2UA' => 'E02002455',
        '2UB' => 'E02002455',
        '2UD' => 'E02002455',
        '2UE' => 'E02002455',
        '2UF' => 'E02002449',
        '2UG' => 'E02002449',
        '2UH' => 'E02002449',
        '2UJ' => 'E02002449',
        '2UL' => 'E02002449',
        '2UN' => 'E02002449',
        '2UP' => 'E02002449',
        '2UQ' => 'E02002449',
        '2UR' => 'E02002449',
        '2US' => 'E02002455',
        '2UT' => 'E02002452',
        '2UU' => 'E02002449',
        '2UW' => 'E02002449',
        '2UX' => 'E02002449',
        '2UY' => 'E02002449',
        '2UZ' => 'E02002449',
        '2WA' => 'E02002452',
        '2WD' => 'E02002449',
        '2WE' => 'E02002449',
        '2WF' => 'E02002449',
        '2WG' => 'E02002449',
        '2WH' => 'E02002449',
        '2WJ' => 'E02002449',
        '2WL' => 'E02002449',
        '2WN' => 'E02002449',
        '2WP' => 'E02002449',
        '2WQ' => 'E02002449',
        '2WR' => 'E02002449',
        '2WS' => 'E02002452',
        '2WT' => 'E02002452',
        '2WU' => 'E02002452',
        '2WW' => 'E02002449',
        '2WX' => 'E02002452',
        '2WY' => 'E02002449',
        '2WZ' => 'E02002449',
        '2XA' => 'E02002449',
        '2XB' => 'E02002449',
        '2XD' => 'E02002449',
        '2XE' => 'E02002449',
        '2XF' => 'E02002449',
        '2XG' => 'E02002449',
        '2XH' => 'E02002449',
        '2XJ' => 'E02002449',
        '2XL' => 'E02002452',
        '2XN' => 'E02002452',
        '2XP' => 'E02002452',
        '2XQ' => 'E02002449',
        '2XR' => 'E02002452',
        '2XS' => 'E02002452',
        '2XT' => 'E02002452',
        '2XU' => 'E02002452',
        '2XW' => 'E02002449',
        '2XX' => 'E02002449',
        '2XY' => 'E02002449',
        '2XZ' => 'E02002449',
        '2YA' => 'E02002449',
        '2YB' => 'E02002449',
        '2YD' => 'E02002452',
        '2YE' => 'E02002452',
        '2YF' => 'E02002452',
        '2YG' => 'E02002449',
        '2YH' => 'E02002449',
        '2YJ' => 'E02002449',
        '2YL' => 'E02002449',
        '2YN' => 'E02002449',
        '2YP' => 'E02002449',
        '2YQ' => 'E02002449',
        '2YR' => 'E02002449',
        '2YS' => 'E02002449',
        '2YT' => 'E02002449',
        '2YU' => 'E02002449',
        '2YX' => 'E02002449',
        '2YY' => 'E02002449',
        '2YZ' => 'E02002449',
        '2ZA' => 'E02002452',
        '3AA' => 'E02002471',
        '3AB' => 'E02002471',
        '3AD' => 'E02002471',
        '3AE' => 'E02002471',
        '3AF' => 'E02002471',
        '3AG' => 'E02002471',
        '3AH' => 'E02002471',
        '3AJ' => 'E02002471',
        '3AL' => 'E02002471',
        '3AN' => 'E02002471',
        '3AP' => 'E02002471',
        '3AQ' => 'E02002471',
        '3AR' => 'E02002471',
        '3AS' => 'E02002471',
        '3AT' => 'E02002471',
        '3AU' => 'E02002471',
        '3AW' => 'E02002471',
        '3AX' => 'E02002471',
        '3AY' => 'E02002471',
        '3AZ' => 'E02002471',
        '3BA' => 'E02002471',
        '3BB' => 'E02002471',
        '3BD' => 'E02002471',
        '3BE' => 'E02002471',
        '3BG' => 'E02002471',
        '3BH' => 'E02002471',
        '3BJ' => 'E02002471',
        '3BL' => 'E02002471',
        '3BN' => 'E02002471',
        '3BP' => 'E02002471',
        '3BQ' => 'E02002471',
        '3BS' => 'E02002471',
        '3BT' => 'E02002471',
        '3BU' => 'E02002471',
        '3BW' => 'E02002471',
        '3BX' => 'E02002471',
        '3BY' => 'E02002471',
        '3BZ' => 'E02002471',
        '3DA' => 'E02002471',
        '3DB' => 'E02005818',
        '3DD' => 'E02005818',
        '3DE' => 'E02005818',
        '3DF' => 'E02005818',
        '3DG' => 'E02002471',
        '3DH' => 'E02002471',
        '3DJ' => 'E02002471',
        '3DL' => 'E02002460',
        '3DN' => 'E02002471',
        '3DP' => 'E02002471',
        '3DQ' => 'E02002471',
        '3DR' => 'E02002471',
        '3DS' => 'E02002471',
        '3DT' => 'E02002471',
        '3DU' => 'E02002471',
        '3DW' => 'E02002471',
        '3DX' => 'E02002471',
        '3DY' => 'E02002471',
        '3DZ' => 'E02002471',
        '3EA' => 'E02002471',
        '3EB' => 'E02002471',
        '3ED' => 'E02002471',
        '3EE' => 'E02002471',
        '3EF' => 'E02002471',
        '3EG' => 'E02002471',
        '3EH' => 'E02002471',
        '3EJ' => 'E02002471',
        '3EL' => 'E02002471',
        '3EN' => 'E02002471',
        '3EP' => 'E02002471',
        '3EQ' => 'E02002471',
        '3ER' => 'E02002471',
        '3ES' => 'E02002471',
        '3ET' => 'E02002471',
        '3EU' => 'E02002471',
        '3EW' => 'E02002471',
        '3EX' => 'E02002471',
        '3EY' => 'E02002471',
        '3EZ' => 'E02002471',
        '3FA' => 'E02002471',
        '3FB' => 'E02002455',
        '3FD' => 'E02002471',
        '3FE' => 'E02005818',
        '3FG' => 'E02002471',
        '3FH' => 'E02002455',
        '3FL' => 'E02002471',
        '3FT' => 'E02002478',
        '3HA' => 'E02002471',
        '3HB' => 'E02002471',
        '3HD' => 'E02002471',
        '3HE' => 'E02002471',
        '3HF' => 'E02002471',
        '3HG' => 'E02002471',
        '3HH' => 'E02002471',
        '3HJ' => 'E02002478',
        '3HL' => 'E02002471',
        '3HN' => 'E02002478',
        '3HP' => 'E02002471',
        '3HQ' => 'E02002478',
        '3HR' => 'E02002471',
        '3HS' => 'E02002471',
        '3HT' => 'E02002471',
        '3HU' => 'E02002471',
        '3HX' => 'E02002471',
        '3HY' => 'E02002471',
        '3HZ' => 'E02005818',
        '3JA' => 'E02005818',
        '3JB' => 'E02002478',
        '3JD' => 'E02002478',
        '3JE' => 'E02002478',
        '3JF' => 'E02002478',
        '3JG' => 'E02001540',
        '3JH' => 'E02002471',
        '3JJ' => 'E02002471',
        '3JL' => 'E02002471',
        '3JN' => 'E02002471',
        '3JP' => 'E02002471',
        '3JQ' => 'E02002471',
        '3JR' => 'E02002471',
        '3JS' => 'E02005818',
        '3JT' => 'E02005818',
        '3JU' => 'E02005818',
        '3JW' => 'E02002471',
        '3JX' => 'E02005818',
        '3JY' => 'E02005818',
        '3JZ' => 'E02005818',
        '3LA' => 'E02005818',
        '3LB' => 'E02005818',
        '3LD' => 'E02005818',
        '3LE' => 'E02005818',
        '3LF' => 'E02005818',
        '3LG' => 'E02005818',
        '3LH' => 'E02005818',
        '3LJ' => 'E02005818',
        '3LL' => 'E02005818',
        '3LN' => 'E02005818',
        '3LP' => 'E02005818',
        '3LQ' => 'E02005818',
        '3LR' => 'E02005818',
        '3LS' => 'E02001540',
        '3LT' => 'E02001540',
        '3LU' => 'E02005818',
        '3LW' => 'E02005818',
        '3LX' => 'E02005818',
        '3LY' => 'E02005818',
        '3LZ' => 'E02005818',
        '3NA' => 'E02002452',
        '3NB' => 'E02002460',
        '3ND' => 'E02002460',
        '3NE' => 'E02002460',
        '3NF' => 'E02002460',
        '3NG' => 'E02002460',
        '3NH' => 'E02002460',
        '3NJ' => 'E02002460',
        '3NL' => 'E02002460',
        '3NN' => 'E02002460',
        '3NP' => 'E02002455',
        '3NQ' => 'E02002460',
        '3NR' => 'E02002460',
        '3NS' => 'E02002460',
        '3NT' => 'E02002460',
        '3NU' => 'E02002460',
        '3NW' => 'E02002460',
        '3NX' => 'E02002460',
        '3PA' => 'E02002460',
        '3PB' => 'E02002460',
        '3PD' => 'E02002460',
        '3PE' => 'E02002460',
        '3PF' => 'E02002460',
        '3PG' => 'E02002460',
        '3PH' => 'E02002460',
        '3PJ' => 'E02002460',
        '3PL' => 'E02002460',
        '3PN' => 'E02002460',
        '3PP' => 'E02002460',
        '3PQ' => 'E02002460',
        '3PR' => 'E02002460',
        '3PS' => 'E02002460',
        '3PT' => 'E02002460',
        '3PU' => 'E02002460',
        '3PW' => 'E02002460',
        '3PX' => 'E02002460',
        '3PY' => 'E02002460',
        '3PZ' => 'E02002460',
        '3QA' => 'E02002460',
        '3QB' => 'E02002460',
        '3QD' => 'E02002460',
        '3QE' => 'E02002460',
        '3QF' => 'E02002460',
        '3QH' => 'E02002460',
        '3QJ' => 'E02002460',
        '3QL' => 'E02002460',
        '3QN' => 'E02002460',
        '3QQ' => 'E02002460',
        '3QR' => 'E02002460',
        '3QS' => 'E02002460',
        '3QT' => 'E02002460',
        '3QU' => 'E02002460',
        '3QW' => 'E02002460',
        '3QX' => 'E02002460',
        '3QY' => 'E02002460',
        '3QZ' => 'E02002460',
        '3RA' => 'E02002460',
        '3RB' => 'E02002460',
        '3RD' => 'E02002460',
        '3RE' => 'E02002460',
        '3RF' => 'E02002460',
        '3RG' => 'E02002460',
        '3RH' => 'E02002460',
        '3RJ' => 'E02002455',
        '3RL' => 'E02002455',
        '3RN' => 'E02002455',
        '3RP' => 'E02002455',
        '3RQ' => 'E02002460',
        '3RR' => 'E02002455',
        '3RS' => 'E02002455',
        '3RT' => 'E02002455',
        '3RU' => 'E02002455',
        '3RW' => 'E02002455',
        '3RX' => 'E02002455',
        '3RY' => 'E02002455',
        '3RZ' => 'E02002471',
        '3SA' => 'E02002455',
        '3SB' => 'E02002471',
        '3SD' => 'E02002455',
        '3SE' => 'E02002460',
        '3SF' => 'E02002460',
        '3SG' => 'E02002460',
        '3SH' => 'E02002460',
        '3SJ' => 'E02002460',
        '3SL' => 'E02002471',
        '3SN' => 'E02005818',
        '3SP' => 'E02005818',
        '3SQ' => 'E02002460',
        '3SR' => 'E02002455',
        '3SU' => 'E02002455',
        '3SY' => 'E02002455',
        '3SZ' => 'E02002471',
        '3TA' => 'E02002478',
        '3WA' => 'E02002452',
        '3WB' => 'E02002460',
        '3WD' => 'E02002452',
        '3WN' => 'E02002452',
        '3WS' => 'E02002452',
        '3WT' => 'E02002452',
        '3WU' => 'E02002452',
        '3WW' => 'E02002452',
        '3WX' => 'E02002452',
        '3WY' => 'E02002452',
        '3WZ' => 'E02002460',
        '3XA' => 'E02002471',
        '3XB' => 'E02002452',
        '3XD' => 'E02002471',
        '3XE' => 'E02002452',
        '3XF' => 'E02002460',
        '3XG' => 'E02002452',
        '3XH' => 'E02002471',
        '3XJ' => 'E02002471',
        '3XL' => 'E02002471',
        '3XN' => 'E02002452',
        '3XP' => 'E02002452',
        '3XQ' => 'E02002471',
        '3XR' => 'E02002452',
        '3YH' => 'E02002471',
        '3YJ' => 'E02002471',
        '3YL' => 'E02002471',
        '3YR' => 'E02002452',
        '3YS' => 'E02002452',
        '3YT' => 'E02002471',
        '3YU' => 'E02002471',
        '3YW' => 'E02002452',
        '3YX' => 'E02002471',
        '3YY' => 'E02002471',
        '3YZ' => 'E02002452',
        '4AA' => 'E02002452',
        '4AB' => 'E02002460',
        '4AD' => 'E02002452',
        '4AE' => 'E02002452',
        '4AF' => 'E02002452',
        '4AG' => 'E02002452',
        '4AH' => 'E02002452',
        '4AJ' => 'E02002452',
        '4AL' => 'E02002452',
        '4AN' => 'E02002452',
        '4AP' => 'E02002452',
        '4AQ' => 'E02002452',
        '4AR' => 'E02002452',
        '4AS' => 'E02002452',
        '4AT' => 'E02002452',
        '4AU' => 'E02002452',
        '4AW' => 'E02002452',
        '4AX' => 'E02002452',
        '4AY' => 'E02002452',
        '4AZ' => 'E02002452',
        '4BA' => 'E02002452',
        '4BB' => 'E02002452',
        '4BD' => 'E02002452',
        '4BE' => 'E02002452',
        '4BG' => 'E02002452',
        '4BH' => 'E02002452',
        '4BJ' => 'E02002452',
        '4BL' => 'E02002452',
        '4BN' => 'E02002452',
        '4BP' => 'E02002452',
        '4BQ' => 'E02002452',
        '4BS' => 'E02002452',
        '4BT' => 'E02002452',
        '4BU' => 'E02002452',
        '4BW' => 'E02002452',
        '4BX' => 'E02002452',
        '4BY' => 'E02002452',
        '4BZ' => 'E02002452',
        '4DA' => 'E02002452',
        '4DB' => 'E02002452',
        '4DD' => 'E02002460',
        '4DE' => 'E02002452',
        '4DF' => 'E02002452',
        '4DG' => 'E02002452',
        '4DH' => 'E02002460',
        '4DJ' => 'E02002460',
        '4DL' => 'E02002460',
        '4DN' => 'E02002460',
        '4DP' => 'E02002460',
        '4DQ' => 'E02002460',
        '4DR' => 'E02002460',
        '4DS' => 'E02002460',
        '4DT' => 'E02002460',
        '4DU' => 'E02002460',
        '4DW' => 'E02002460',
        '4DX' => 'E02002460',
        '4DY' => 'E02002460',
        '4DZ' => 'E02002460',
        '4EA' => 'E02002460',
        '4EB' => 'E02002460',
        '4ED' => 'E02002460',
        '4EE' => 'E02002460',
        '4EF' => 'E02002460',
        '4EG' => 'E02002460',
        '4EH' => 'E02002452',
        '4EJ' => 'E02002452',
        '4EL' => 'E02002452',
        '4EN' => 'E02002452',
        '4EP' => 'E02002452',
        '4EQ' => 'E02002452',
        '4ER' => 'E02002452',
        '4ES' => 'E02002452',
        '4ET' => 'E02002452',
        '4EU' => 'E02002460',
        '4EW' => 'E02002452',
        '4EX' => 'E02002452',
        '4EY' => 'E02002452',
        '4EZ' => 'E02002452',
        '4FA' => 'E02002460',
        '4FB' => 'E02002460',
        '4FD' => 'E02002452',
        '4FE' => 'E02002452',
        '4FF' => 'E02002460',
        '4FG' => 'E02002452',
        '4FH' => 'E02002460',
        '4FJ' => 'E02002460',
        '4FN' => 'E02002460',
        '4FP' => 'E02002460',
        '4FQ' => 'E02002460',
        '4FR' => 'E02002452',
        '4FS' => 'E02002452',
        '4FT' => 'E02002452',
        '4FU' => 'E02002452',
        '4FW' => 'E02002460',
        '4FX' => 'E02002460',
        '4FY' => 'E02002452',
        '4FZ' => 'E02002452',
        '4GA' => 'E02002452',
        '4GB' => 'E02002452',
        '4GE' => 'E02002452',
        '4GF' => 'E02002452',
        '4GG' => 'E02002452',
        '4GH' => 'E02002452',
        '4GY' => 'E02002460',
        '4HA' => 'E02002452',
        '4HB' => 'E02002460',
        '4HD' => 'E02002460',
        '4HE' => 'E02002452',
        '4HF' => 'E02002460',
        '4HG' => 'E02002460',
        '4HH' => 'E02002452',
        '4HL' => 'E02002452',
        '4HN' => 'E02002460',
        '4HP' => 'E02002460',
        '4HQ' => 'E02002460',
        '4HR' => 'E02002452',
        '4HS' => 'E02002460',
        '4HT' => 'E02002452',
        '4HU' => 'E02002452',
        '4HW' => 'E02002460',
        '4HX' => 'E02002452',
        '4HY' => 'E02002452',
        '4HZ' => 'E02002460',
        '4JA' => 'E02002460',
        '4JB' => 'E02002460',
        '4JD' => 'E02002460',
        '4JE' => 'E02002460',
        '4JF' => 'E02002460',
        '4JG' => 'E02002460',
        '4JH' => 'E02002460',
        '4JJ' => 'E02002460',
        '4JL' => 'E02002460',
        '4JN' => 'E02002460',
        '4JP' => 'E02002460',
        '4JQ' => 'E02002460',
        '4JR' => 'E02002460',
        '4JS' => 'E02002460',
        '4JT' => 'E02002460',
        '4JU' => 'E02002460',
        '4JW' => 'E02002460',
        '4JX' => 'E02002460',
        '4JY' => 'E02002460',
        '4JZ' => 'E02002460',
        '4LA' => 'E02002460',
        '4LB' => 'E02002460',
        '4LD' => 'E02002460',
        '4LE' => 'E02002460',
        '4LF' => 'E02002460',
        '4LG' => 'E02002460',
        '4LH' => 'E02002460',
        '4LJ' => 'E02002460',
        '4LL' => 'E02002460',
        '4LN' => 'E02002460',
        '4LP' => 'E02002460',
        '4LQ' => 'E02002460',
        '4LR' => 'E02002460',
        '4LS' => 'E02002460',
        '4LT' => 'E02002460',
        '4LU' => 'E02002460',
        '4LW' => 'E02002460',
        '4LX' => 'E02002460',
        '4LY' => 'E02002460',
        '4LZ' => 'E02002460',
        '4NA' => 'E02002460',
        '4NB' => 'E02002460',
        '4ND' => 'E02002460',
        '4NE' => 'E02002460',
        '4NF' => 'E02002460',
        '4NG' => 'E02002460',
        '4NH' => 'E02002460',
        '4NJ' => 'E02002460',
        '4NL' => 'E02002460',
        '4NN' => 'E02002460',
        '4NP' => 'E02002460',
        '4NQ' => 'E02002460',
        '4NR' => 'E02002460',
        '4NS' => 'E02002460',
        '4NT' => 'E02002452',
        '4NU' => 'E02002452',
        '4NW' => 'E02002460',
        '4NY' => 'E02002452',
        '4PA' => 'E02002452',
        '4PB' => 'E02002452',
        '4PD' => 'E02002452',
        '4PE' => 'E02002452',
        '4PG' => 'E02002452',
        '4PJ' => 'E02002452',
        '4PN' => 'E02002452',
        '4PQ' => 'E02002452',
        '4PR' => 'E02002452',
        '4PS' => 'E02002452',
        '4PW' => 'E02002452',
        '4PX' => 'E02002452',
        '4PY' => 'E02002452',
        '4PZ' => 'E02002460',
        '4QA' => 'E02002452',
        '4QB' => 'E02002452',
        '4QD' => 'E02002452',
        '4QE' => 'E02002452',
        '4QF' => 'E02002452',
        '4QG' => 'E02002452',
        '4QH' => 'E02002452',
        '4QJ' => 'E02002452',
        '4QL' => 'E02002452',
        '4QN' => 'E02002452',
        '4QP' => 'E02002452',
        '4QQ' => 'E02002452',
        '4QR' => 'E02002452',
        '4QS' => 'E02002452',
        '4QT' => 'E02002452',
        '4QU' => 'E02002452',
        '4QW' => 'E02002452',
        '4QX' => 'E02002452',
        '4QY' => 'E02002452',
        '4QZ' => 'E02002452',
        '4RA' => 'E02002452',
        '4RB' => 'E02002452',
        '4RD' => 'E02002452',
        '4RE' => 'E02002460',
        '4RF' => 'E02002460',
        '4RG' => 'E02002452',
        '4RH' => 'E02002460',
        '4RJ' => 'E02002460',
        '4RL' => 'E02002460',
        '4RN' => 'E02002460',
        '4RP' => 'E02002460',
        '4RQ' => 'E02002460',
        '4RR' => 'E02002460',
        '4RS' => 'E02002460',
        '4RT' => 'E02002460',
        '4RU' => 'E02002460',
        '4RW' => 'E02002460',
        '4RX' => 'E02002460',
        '4RY' => 'E02002460',
        '4RZ' => 'E02002452',
        '4SA' => 'E02002452',
        '4SB' => 'E02002452',
        '4SD' => 'E02002452',
        '4SE' => 'E02002452',
        '4SF' => 'E02002452',
        '4SG' => 'E02002460',
        '4SH' => 'E02002460',
        '4SJ' => 'E02002460',
        '4SL' => 'E02002452',
        '4SN' => 'E02002452',
        '4SP' => 'E02002452',
        '4SQ' => 'E02002452',
        '4SR' => 'E02002452',
        '4SS' => 'E02002452',
        '4ST' => 'E02002452',
        '4SU' => 'E02002452',
        '4SW' => 'E02002452',
        '4SX' => 'E02002452',
        '4SY' => 'E02002452',
        '4SZ' => 'E02002452',
        '4TA' => 'E02002452',
        '4TB' => 'E02002452',
        '4TD' => 'E02002452',
        '4TE' => 'E02002452',
        '4TF' => 'E02002452',
        '4UX' => 'E02002460',
        '4UY' => 'E02002460',
        '4UZ' => 'E02002460',
        '4WP' => 'E02002452',
        '4WQ' => 'E02002452',
        '4WR' => 'E02002452',
        '4WS' => 'E02002452',
        '4WT' => 'E02002452',
        '4WU' => 'E02002452',
        '4WW' => 'E02002452',
        '4WX' => 'E02002460',
        '4WY' => 'E02002452',
        '4WZ' => 'E02002452',
        '4XA' => 'E02002460',
        '4XB' => 'E02002460',
        '4XD' => 'E02002460',
        '4XE' => 'E02002452',
        '4YJ' => 'E02002460',
        '4YL' => 'E02002452',
        '4YN' => 'E02002460',
        '4YR' => 'E02002452',
        '4YS' => 'E02002452',
        '4YT' => 'E02002460',
        '4YU' => 'E02002460',
        '4YW' => 'E02002460',
        '4YX' => 'E02002460',
        '4YY' => 'E02002452',
        '4YZ' => 'E02002460',
        '4ZQ' => 'E02002452',
        '4ZZ' => 'E02002452',
        '9AB' => 'E02002452',
        '9AF' => 'E02002452',
        '9AG' => 'E02002452',
        '9AH' => 'E02002452',
        '9AJ' => 'E02002452',
        '9AL' => 'E02002452',
        '9AN' => 'E02002452',
        '9AP' => 'E02002452',
        '9AQ' => 'E02002452',
        '9AR' => 'E02002452',
        '9AS' => 'E02002452',
        '9AT' => 'E02002452',
        '9AU' => 'E02002452',
        '9AW' => 'E02002452',
        '9AX' => 'E02002452',
        '9AY' => 'E02002452',
        '9AZ' => 'E02002452',
        '9BA' => 'E02002452',
        '9BB' => 'E02002452',
        '9BD' => 'E02002452',
        '9BE' => 'E02002452',
        '9BF' => 'E02002452',
        '9BG' => 'E02002452',
        '9BJ' => 'E02002452',
        '9BL' => 'E02002452',
        '9BN' => 'E02002452',
        '9BP' => 'E02002452',
        '9BQ' => 'E02002452',
        '9BR' => 'E02002452',
        '9BS' => 'E02002452',
        '9BT' => 'E02002452',
        '9BU' => 'E02002452',
        '9BW' => 'E02002452',
        '9BX' => 'E02002452',
        '9BY' => 'E02002452',
        '9BZ' => 'E02002452',
        '9DA' => 'E02002452',
        '9DB' => 'E02002452',
        '9DD' => 'E02002452',
        '9DE' => 'E02002452',
        '9DF' => 'E02002452',
        '9DG' => 'E02002452',
        '9DH' => 'E02002452',
        '9DJ' => 'E02002452',
        '9DL' => 'E02002452',
        '9DN' => 'E02002452',
        '9DP' => 'E02002452',
        '9DQ' => 'E02002452',
        '9DR' => 'E02002452',
        '9DS' => 'E02002452',
        '9HB' => 'E02002452',
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