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
final class LE65
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02005399',
        '1AB' => 'E02005399',
        '1AD' => 'E02005399',
        '1AE' => 'E02005399',
        '1AF' => 'E02005399',
        '1AG' => 'E02005399',
        '1AH' => 'E02005399',
        '1AJ' => 'E02005399',
        '1AL' => 'E02005399',
        '1AN' => 'E02005399',
        '1AP' => 'E02005399',
        '1AQ' => 'E02005399',
        '1AR' => 'E02005399',
        '1AS' => 'E02005399',
        '1AT' => 'E02005399',
        '1AU' => 'E02005399',
        '1AW' => 'E02005399',
        '1AX' => 'E02005399',
        '1AY' => 'E02005399',
        '1AZ' => 'E02005399',
        '1BA' => 'E02005399',
        '1BB' => 'E02005399',
        '1BD' => 'E02005399',
        '1BE' => 'E02005399',
        '1BF' => 'E02005399',
        '1BG' => 'E02005399',
        '1BH' => 'E02005399',
        '1BJ' => 'E02005399',
        '1BL' => 'E02005399',
        '1BN' => 'E02005399',
        '1BP' => 'E02005399',
        '1BQ' => 'E02005399',
        '1BR' => 'E02005399',
        '1BS' => 'E02005399',
        '1BT' => 'E02005399',
        '1BU' => 'E02005399',
        '1BW' => 'E02005399',
        '1BX' => 'E02005399',
        '1BY' => 'E02005399',
        '1BZ' => 'E02005399',
        '1DA' => 'E02005399',
        '1DB' => 'E02005399',
        '1DD' => 'E02005399',
        '1DE' => 'E02005399',
        '1DF' => 'E02005402',
        '1DG' => 'E02005399',
        '1DH' => 'E02005399',
        '1DJ' => 'E02005399',
        '1DL' => 'E02005399',
        '1DN' => 'E02005399',
        '1DP' => 'E02005399',
        '1DQ' => 'E02005399',
        '1DR' => 'E02005399',
        '1DS' => 'E02005399',
        '1DT' => 'E02005399',
        '1DU' => 'E02005399',
        '1DW' => 'E02005399',
        '1DX' => 'E02005402',
        '1DY' => 'E02005402',
        '1DZ' => 'E02005399',
        '1EA' => 'E02005402',
        '1EB' => 'E02005399',
        '1ED' => 'E02005399',
        '1EE' => 'E02005399',
        '1EF' => 'E02005399',
        '1EG' => 'E02005399',
        '1EH' => 'E02005402',
        '1EJ' => 'E02005399',
        '1EL' => 'E02005399',
        '1EN' => 'E02005399',
        '1EP' => 'E02005402',
        '1EQ' => 'E02005402',
        '1ER' => 'E02005402',
        '1ES' => 'E02005399',
        '1ET' => 'E02005399',
        '1EU' => 'E02005399',
        '1EW' => 'E02005402',
        '1EX' => 'E02005402',
        '1EY' => 'E02005399',
        '1EZ' => 'E02005402',
        '1FA' => 'E02005402',
        '1FB' => 'E02005402',
        '1FD' => 'E02005402',
        '1FE' => 'E02005399',
        '1FF' => 'E02005399',
        '1FG' => 'E02005399',
        '1FH' => 'E02005402',
        '1FJ' => 'E02005399',
        '1FL' => 'E02005399',
        '1FN' => 'E02005402',
        '1FP' => 'E02005402',
        '1FQ' => 'E02005399',
        '1FR' => 'E02005399',
        '1FS' => 'E02005399',
        '1FT' => 'E02005399',
        '1FU' => 'E02005399',
        '1FW' => 'E02005399',
        '1FX' => 'E02005399',
        '1FY' => 'E02005399',
        '1FZ' => 'E02005399',
        '1GA' => 'E02005399',
        '1GB' => 'E02005399',
        '1GD' => 'E02005402',
        '1GE' => 'E02005402',
        '1GF' => 'E02005402',
        '1GG' => 'E02005402',
        '1GH' => 'E02005402',
        '1GJ' => 'E02005402',
        '1GL' => 'E02005399',
        '1GN' => 'E02005399',
        '1GQ' => 'E02005401',
        '1GR' => 'E02005402',
        '1GS' => 'E02005399',
        '1GT' => 'E02005399',
        '1GU' => 'E02005399',
        '1GW' => 'E02005399',
        '1GX' => 'E02005401',
        '1GY' => 'E02005402',
        '1HA' => 'E02005399',
        '1HB' => 'E02005399',
        '1HD' => 'E02005399',
        '1HE' => 'E02005399',
        '1HF' => 'E02005399',
        '1HG' => 'E02005402',
        '1HH' => 'E02005399',
        '1HJ' => 'E02005402',
        '1HL' => 'E02005399',
        '1HN' => 'E02005399',
        '1HP' => 'E02005399',
        '1HQ' => 'E02005399',
        '1HR' => 'E02005399',
        '1HS' => 'E02005399',
        '1HT' => 'E02005399',
        '1HU' => 'E02005399',
        '1HW' => 'E02005399',
        '1HX' => 'E02005399',
        '1HY' => 'E02005399',
        '1HZ' => 'E02005399',
        '1JA' => 'E02005399',
        '1JB' => 'E02005399',
        '1JD' => 'E02005399',
        '1JE' => 'E02005402',
        '1JF' => 'E02005399',
        '1JG' => 'E02005399',
        '1JH' => 'E02005399',
        '1JJ' => 'E02005399',
        '1JL' => 'E02005399',
        '1JN' => 'E02005399',
        '1JP' => 'E02005399',
        '1JR' => 'E02005399',
        '1JS' => 'E02005399',
        '1JT' => 'E02005399',
        '1JU' => 'E02005399',
        '1JW' => 'E02005399',
        '1JX' => 'E02005399',
        '1JY' => 'E02005399',
        '1JZ' => 'E02005399',
        '1LA' => 'E02005399',
        '1LB' => 'E02005399',
        '1LD' => 'E02005399',
        '1LE' => 'E02005399',
        '1LF' => 'E02005399',
        '1LH' => 'E02005399',
        '1LT' => 'E02005399',
        '1LU' => 'E02005399',
        '1LX' => 'E02005399',
        '1LY' => 'E02005399',
        '1LZ' => 'E02005399',
        '1NF' => 'E02005399',
        '1NG' => 'E02005399',
        '1NT' => 'E02005399',
        '1NU' => 'E02005399',
        '1PF' => 'E02005399',
        '1PL' => 'E02005401',
        '1PZ' => 'E02005399',
        '1RA' => 'E02005401',
        '1RB' => 'E02005401',
        '1RD' => 'E02005401',
        '1RE' => 'E02005401',
        '1RF' => 'E02004123',
        '1RG' => 'E02004123',
        '1RH' => 'E02004123',
        '1RJ' => 'E02005401',
        '1RL' => 'E02005401',
        '1RN' => 'E02005401',
        '1RP' => 'E02005401',
        '1RQ' => 'E02005401',
        '1RR' => 'E02004123',
        '1RS' => 'E02005401',
        '1RT' => 'E02005401',
        '1RU' => 'E02005401',
        '1RW' => 'E02005401',
        '1RX' => 'E02005401',
        '1RY' => 'E02005401',
        '1RZ' => 'E02005401',
        '1SA' => 'E02005401',
        '1SB' => 'E02005399',
        '1SD' => 'E02005401',
        '1SE' => 'E02005401',
        '1SF' => 'E02005401',
        '1SG' => 'E02005401',
        '1SH' => 'E02005401',
        '1SJ' => 'E02005402',
        '1SL' => 'E02005401',
        '1SN' => 'E02005401',
        '1SP' => 'E02005399',
        '1SQ' => 'E02005399',
        '1SR' => 'E02005401',
        '1SS' => 'E02005399',
        '1ST' => 'E02005399',
        '1SY' => 'E02005401',
        '1TA' => 'E02005399',
        '1TB' => 'E02005402',
        '1TD' => 'E02005401',
        '1TE' => 'E02005399',
        '1TG' => 'E02005401',
        '1TH' => 'E02005402',
        '1TP' => 'E02005401',
        '1TQ' => 'E02005402',
        '1TR' => 'E02005402',
        '1TS' => 'E02005402',
        '1TW' => 'E02005402',
        '1TX' => 'E02005399',
        '1TZ' => 'E02005399',
        '1UD' => 'E02005401',
        '1UL' => 'E02005402',
        '1UR' => 'E02005402',
        '1US' => 'E02005402',
        '1UZ' => 'E02005401',
        '1WA' => 'E02005401',
        '1WB' => 'E02005401',
        '1WD' => 'E02005401',
        '1WE' => 'E02005401',
        '1WF' => 'E02005401',
        '1WG' => 'E02005401',
        '1WH' => 'E02005401',
        '1WJ' => 'E02005401',
        '1WL' => 'E02005401',
        '1WN' => 'E02005401',
        '1WP' => 'E02005401',
        '1WQ' => 'E02005402',
        '1WR' => 'E02005401',
        '1WS' => 'E02005401',
        '1WT' => 'E02005401',
        '1WU' => 'E02005401',
        '1WW' => 'E02005401',
        '1WX' => 'E02005399',
        '1WY' => 'E02005399',
        '1WZ' => 'E02005399',
        '1XA' => 'E02005401',
        '1XB' => 'E02005399',
        '1XD' => 'E02005399',
        '1XE' => 'E02005401',
        '1XF' => 'E02005401',
        '1XG' => 'E02005399',
        '1XH' => 'E02005399',
        '1XJ' => 'E02005401',
        '1XN' => 'E02005399',
        '1XP' => 'E02005399',
        '1XQ' => 'E02005401',
        '1XR' => 'E02005399',
        '1XS' => 'E02005399',
        '1XT' => 'E02005399',
        '1XU' => 'E02005399',
        '1XW' => 'E02005399',
        '1XY' => 'E02005399',
        '1XZ' => 'E02005399',
        '1YB' => 'E02005399',
        '1YD' => 'E02005399',
        '1YF' => 'E02005399',
        '1YG' => 'E02005399',
        '1YH' => 'E02005399',
        '1YN' => 'E02005399',
        '1YP' => 'E02005399',
        '1YQ' => 'E02005399',
        '1YR' => 'E02005399',
        '1YS' => 'E02005399',
        '1YT' => 'E02005399',
        '1YU' => 'E02005399',
        '1YW' => 'E02005399',
        '1YX' => 'E02005399',
        '1YY' => 'E02005399',
        '1YZ' => 'E02005399',
        '1ZA' => 'E02005399',
        '1ZB' => 'E02005399',
        '1ZD' => 'E02005399',
        '1ZE' => 'E02005399',
        '1ZF' => 'E02005399',
        '1ZG' => 'E02005399',
        '1ZH' => 'E02005399',
        '1ZJ' => 'E02005399',
        '1ZL' => 'E02005399',
        '1ZN' => 'E02005399',
        '1ZP' => 'E02005399',
        '1ZQ' => 'E02005399',
        '1ZR' => 'E02005399',
        '1ZS' => 'E02005399',
        '1ZT' => 'E02005399',
        '1ZU' => 'E02005399',
        '1ZX' => 'E02005399',
        '1ZY' => 'E02005399',
        '1ZZ' => 'E02005399',
        '2AB' => 'E02005399',
        '2AD' => 'E02005399',
        '2AE' => 'E02005399',
        '2AF' => 'E02005399',
        '2AG' => 'E02005399',
        '2AH' => 'E02005399',
        '2AJ' => 'E02005399',
        '2AL' => 'E02005399',
        '2AN' => 'E02005402',
        '2AP' => 'E02005402',
        '2AQ' => 'E02005399',
        '2AR' => 'E02005402',
        '2AS' => 'E02005402',
        '2AT' => 'E02005399',
        '2AU' => 'E02005399',
        '2AW' => 'E02005399',
        '2AY' => 'E02005399',
        '2BB' => 'E02005399',
        '2BS' => 'E02005399',
        '2BW' => 'E02005402',
        '2BY' => 'E02005402',
        '2BZ' => 'E02005402',
        '2FA' => 'E02005402',
        '2FB' => 'E02005402',
        '2FD' => 'E02005399',
        '2FE' => 'E02005402',
        '2FG' => 'E02005402',
        '2FH' => 'E02005402',
        '2FJ' => 'E02005402',
        '2FN' => 'E02005402',
        '2FP' => 'E02005402',
        '2FQ' => 'E02005402',
        '2FR' => 'E02005402',
        '2FS' => 'E02005402',
        '2FT' => 'E02005402',
        '2FU' => 'E02005402',
        '2FW' => 'E02005402',
        '2FX' => 'E02005402',
        '2FZ' => 'E02005402',
        '2GA' => 'E02005402',
        '2GB' => 'E02005402',
        '2GJ' => 'E02005402',
        '2GL' => 'E02005402',
        '2GN' => 'E02005399',
        '2GP' => 'E02005399',
        '2GQ' => 'E02005402',
        '2GR' => 'E02005402',
        '2GS' => 'E02005402',
        '2GT' => 'E02005402',
        '2GU' => 'E02005402',
        '2GW' => 'E02005402',
        '2GX' => 'E02005402',
        '2GY' => 'E02005402',
        '2GZ' => 'E02005402',
        '2HA' => 'E02005399',
        '2HB' => 'E02005399',
        '2HD' => 'E02005399',
        '2HE' => 'E02005399',
        '2HF' => 'E02005402',
        '2HG' => 'E02005399',
        '2HL' => 'E02005399',
        '2HN' => 'E02005399',
        '2HP' => 'E02005399',
        '2HT' => 'E02005399',
        '2HW' => 'E02005399',
        '2JA' => 'E02005399',
        '2JB' => 'E02005399',
        '2JD' => 'E02005399',
        '2JE' => 'E02005399',
        '2JF' => 'E02005399',
        '2JG' => 'E02005399',
        '2JH' => 'E02005399',
        '2JJ' => 'E02005399',
        '2JL' => 'E02005399',
        '2JN' => 'E02005399',
        '2JP' => 'E02005399',
        '2JQ' => 'E02005399',
        '2JR' => 'E02005399',
        '2JS' => 'E02005399',
        '2JT' => 'E02005399',
        '2JW' => 'E02005399',
        '2JX' => 'E02005399',
        '2JY' => 'E02005402',
        '2JZ' => 'E02005399',
        '2LA' => 'E02005402',
        '2LB' => 'E02005402',
        '2LD' => 'E02005402',
        '2LE' => 'E02005402',
        '2LF' => 'E02005402',
        '2LG' => 'E02005402',
        '2LH' => 'E02005402',
        '2LJ' => 'E02005399',
        '2LL' => 'E02005399',
        '2LN' => 'E02005399',
        '2LP' => 'E02005399',
        '2LQ' => 'E02005399',
        '2LR' => 'E02005402',
        '2LS' => 'E02005402',
        '2LT' => 'E02005402',
        '2LU' => 'E02005402',
        '2LW' => 'E02005402',
        '2LX' => 'E02005402',
        '2LY' => 'E02005402',
        '2LZ' => 'E02005402',
        '2NA' => 'E02005402',
        '2NB' => 'E02005402',
        '2ND' => 'E02005402',
        '2NE' => 'E02005402',
        '2NF' => 'E02005402',
        '2NG' => 'E02005402',
        '2NH' => 'E02005402',
        '2NJ' => 'E02005402',
        '2NL' => 'E02005402',
        '2NN' => 'E02005399',
        '2NP' => 'E02005402',
        '2NQ' => 'E02005399',
        '2NR' => 'E02005399',
        '2NS' => 'E02005402',
        '2NT' => 'E02005402',
        '2NU' => 'E02005402',
        '2NW' => 'E02005399',
        '2NX' => 'E02005399',
        '2NY' => 'E02005399',
        '2NZ' => 'E02005399',
        '2PA' => 'E02005402',
        '2PB' => 'E02005402',
        '2PD' => 'E02005402',
        '2PE' => 'E02005402',
        '2PF' => 'E02005402',
        '2PG' => 'E02005402',
        '2PH' => 'E02005402',
        '2PJ' => 'E02005402',
        '2PL' => 'E02005402',
        '2PN' => 'E02005402',
        '2PP' => 'E02005402',
        '2PQ' => 'E02005402',
        '2PR' => 'E02005402',
        '2PS' => 'E02005402',
        '2PT' => 'E02005402',
        '2PU' => 'E02005402',
        '2PW' => 'E02005402',
        '2PX' => 'E02005402',
        '2PY' => 'E02005402',
        '2PZ' => 'E02005402',
        '2QA' => 'E02005402',
        '2QB' => 'E02005402',
        '2QD' => 'E02005402',
        '2QE' => 'E02005402',
        '2QF' => 'E02005402',
        '2QG' => 'E02005402',
        '2QH' => 'E02005399',
        '2QJ' => 'E02005399',
        '2QL' => 'E02005399',
        '2QN' => 'E02005399',
        '2QP' => 'E02005399',
        '2QQ' => 'E02005399',
        '2QR' => 'E02005399',
        '2QS' => 'E02005399',
        '2QT' => 'E02005399',
        '2QU' => 'E02005399',
        '2QX' => 'E02005399',
        '2QY' => 'E02005399',
        '2QZ' => 'E02005399',
        '2RA' => 'E02005401',
        '2RB' => 'E02005399',
        '2RD' => 'E02005399',
        '2RE' => 'E02005399',
        '2RF' => 'E02005399',
        '2RG' => 'E02004123',
        '2RJ' => 'E02005399',
        '2RL' => 'E02005399',
        '2RN' => 'E02005399',
        '2RP' => 'E02005399',
        '2RQ' => 'E02005399',
        '2RR' => 'E02005399',
        '2RS' => 'E02005399',
        '2RU' => 'E02005399',
        '2RW' => 'E02005399',
        '2RY' => 'E02005402',
        '2SA' => 'E02005399',
        '2SB' => 'E02005399',
        '2SD' => 'E02005399',
        '2SE' => 'E02005399',
        '2SF' => 'E02005399',
        '2SG' => 'E02005399',
        '2SN' => 'E02004123',
        '2SR' => 'E02005399',
        '2SW' => 'E02005402',
        '2SX' => 'E02005399',
        '2SY' => 'E02005399',
        '2SZ' => 'E02005399',
        '2TA' => 'E02004123',
        '2TE' => 'E02005399',
        '2TF' => 'E02005399',
        '2TJ' => 'E02004123',
        '2TL' => 'E02005402',
        '2TN' => 'E02004123',
        '2TT' => 'E02005404',
        '2TU' => 'E02005402',
        '2TX' => 'E02005402',
        '2TY' => 'E02004123',
        '2UA' => 'E02004123',
        '2UB' => 'E02005399',
        '2UD' => 'E02005399',
        '2UE' => 'E02005399',
        '2UF' => 'E02005399',
        '2UG' => 'E02005399',
        '2UH' => 'E02004123',
        '2UJ' => 'E02005402',
        '2UL' => 'E02005399',
        '2UN' => 'E02005402',
        '2UP' => 'E02005402',
        '2UQ' => 'E02005399',
        '2UR' => 'E02005402',
        '2US' => 'E02005399',
        '2UT' => 'E02005399',
        '2UU' => 'E02005399',
        '2UW' => 'E02005402',
        '2UX' => 'E02005402',
        '2UY' => 'E02005399',
        '2UZ' => 'E02005399',
        '2WA' => 'E02005402',
        '2WB' => 'E02005402',
        '2WD' => 'E02005402',
        '2WE' => 'E02005402',
        '2WF' => 'E02005402',
        '2WG' => 'E02005402',
        '2WH' => 'E02005402',
        '2WL' => 'E02005399',
        '2WP' => 'E02005399',
        '2WR' => 'E02005399',
        '2WS' => 'E02005399',
        '2WT' => 'E02005399',
        '2WU' => 'E02005399',
        '2WW' => 'E02005399',
        '2WX' => 'E02005399',
        '2WY' => 'E02005399',
        '2WZ' => 'E02005399',
        '2XE' => 'E02005399',
        '2XF' => 'E02005399',
        '2YA' => 'E02005399',
        '2YB' => 'E02005399',
        '2YD' => 'E02005399',
        '2YE' => 'E02005399',
        '2YF' => 'E02005399',
        '2YJ' => 'E02005399',
        '2YL' => 'E02005399',
        '2YP' => 'E02005399',
        '2YQ' => 'E02005399',
        '2YZ' => 'E02005399',
        '2ZA' => 'E02005399',
        '2ZB' => 'E02005399',
        '2ZD' => 'E02005399',
        '2ZE' => 'E02005399',
        '2ZF' => 'E02005399',
        '2ZG' => 'E02005399',
        '2ZH' => 'E02005399',
        '2ZJ' => 'E02005399',
        '2ZL' => 'E02005399',
        '2ZN' => 'E02005399',
        '2ZP' => 'E02005399',
        '2ZR' => 'E02005402',
        '2ZS' => 'E02005399',
        '2ZT' => 'E02005399',
        '2ZU' => 'E02005399',
        '2ZW' => 'E02005402',
        '2ZX' => 'E02005399',
        '2ZY' => 'E02005399',
        '2ZZ' => 'E02005399',
        '9AA' => 'E02005399',
        '9AB' => 'E02005399',
        '9AD' => 'E02005399',
        '9AE' => 'E02005399',
        '9AF' => 'E02005399',
        '9AJ' => 'E02005399',
        '9AL' => 'E02005399',
        '9AN' => 'E02005399',
        '9AP' => 'E02005399',
        '9AQ' => 'E02005399',
        '9AR' => 'E02005399',
        '9AS' => 'E02005399',
        '9AT' => 'E02005399',
        '9AU' => 'E02005399',
        '9AW' => 'E02005399',
        '9AX' => 'E02005399',
        '9AY' => 'E02005399',
        '9AZ' => 'E02005399',
        '9BA' => 'E02005399',
        '9BB' => 'E02005399',
        '9BD' => 'E02005399',
        '9BE' => 'E02005399',
        '9BF' => 'E02005399',
        '9BG' => 'E02005399',
        '9BH' => 'E02005399',
        '9BJ' => 'E02005399',
        '9BL' => 'E02005399',
        '9BN' => 'E02005399',
        '9BP' => 'E02005399',
        '9BQ' => 'E02005399',
        '9BR' => 'E02005399',
        '9BS' => 'E02005399',
        '9BT' => 'E02005399',
        '9BU' => 'E02005399',
        '9BW' => 'E02005399',
        '9BX' => 'E02005399',
        '9BZ' => 'E02005399',
        '9DA' => 'E02005399',
        '9DB' => 'E02005399',
        '9DD' => 'E02005399',
        '9DE' => 'E02005399',
        '9DF' => 'E02005399',
        '9DG' => 'E02005399',
        '9DH' => 'E02005399',
        '9DJ' => 'E02005399',
        '9DL' => 'E02005399',
        '9DN' => 'E02005399',
        '9DP' => 'E02005399',
        '9DQ' => 'E02005399',
        '9DR' => 'E02005399',
        '9DS' => 'E02005399',
        '9DT' => 'E02005399',
        '9DU' => 'E02005399',
        '9DW' => 'E02005399',
        '9DX' => 'E02005399',
        '9DY' => 'E02005399',
        '9DZ' => 'E02005399',
        '9EA' => 'E02005399',
        '9EB' => 'E02005399',
        '9ED' => 'E02005399',
        '9EF' => 'E02005399',
        '9EG' => 'E02005399',
        '9EH' => 'E02005399',
        '9EJ' => 'E02005399',
        '9EL' => 'E02005399',
        '9EN' => 'E02005399',
        '9EP' => 'E02005399',
        '9EQ' => 'E02005399',
        '9ER' => 'E02005399',
        '9ES' => 'E02005399',
        '9ET' => 'E02005399',
        '9EU' => 'E02005399',
        '9EW' => 'E02005399',
        '9EX' => 'E02005399',
        '9EY' => 'E02005399',
        '9EZ' => 'E02005399',
        '9FA' => 'E02005399',
        '9FB' => 'E02005399',
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
