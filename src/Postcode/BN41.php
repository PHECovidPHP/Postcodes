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
final class BN41
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02003511',
        '1AB' => 'E02003511',
        '1AD' => 'E02003511',
        '1AE' => 'E02003511',
        '1AF' => 'E02003511',
        '1AG' => 'E02003511',
        '1AH' => 'E02003511',
        '1AJ' => 'E02003511',
        '1AL' => 'E02003511',
        '1AN' => 'E02003511',
        '1AP' => 'E02003511',
        '1AQ' => 'E02003511',
        '1AR' => 'E02006537',
        '1AS' => 'E02003511',
        '1AT' => 'E02003502',
        '1AU' => 'E02003511',
        '1AW' => 'E02003511',
        '1AX' => 'E02003511',
        '1AY' => 'E02003511',
        '1AZ' => 'E02006537',
        '1BA' => 'E02003511',
        '1BB' => 'E02003502',
        '1DA' => 'E02003511',
        '1DB' => 'E02003511',
        '1DD' => 'E02003511',
        '1DE' => 'E02003511',
        '1DF' => 'E02003511',
        '1DG' => 'E02003511',
        '1DH' => 'E02003511',
        '1DJ' => 'E02003511',
        '1DL' => 'E02003511',
        '1DN' => 'E02003511',
        '1DP' => 'E02003511',
        '1DQ' => 'E02003511',
        '1DR' => 'E02003511',
        '1DS' => 'E02003511',
        '1DT' => 'E02003511',
        '1DU' => 'E02003511',
        '1DW' => 'E02003511',
        '1DX' => 'E02003511',
        '1DY' => 'E02003511',
        '1DZ' => 'E02003511',
        '1EA' => 'E02003511',
        '1EB' => 'E02003511',
        '1ED' => 'E02003511',
        '1EE' => 'E02003511',
        '1EF' => 'E02003511',
        '1EG' => 'E02003511',
        '1EH' => 'E02003511',
        '1EJ' => 'E02003511',
        '1EL' => 'E02003511',
        '1EN' => 'E02003511',
        '1EP' => 'E02003511',
        '1EQ' => 'E02003511',
        '1ER' => 'E02003511',
        '1ES' => 'E02003511',
        '1ET' => 'E02003511',
        '1EU' => 'E02003511',
        '1GA' => 'E02003511',
        '1GB' => 'E02003511',
        '1GD' => 'E02003511',
        '1GE' => 'E02003511',
        '1GF' => 'E02003511',
        '1GG' => 'E02003511',
        '1GH' => 'E02003511',
        '1GJ' => 'E02003511',
        '1GL' => 'E02003511',
        '1GN' => 'E02003511',
        '1GP' => 'E02003511',
        '1GQ' => 'E02003511',
        '1GR' => 'E02003502',
        '1GS' => 'E02003502',
        '1GT' => 'E02003502',
        '1GU' => 'E02003502',
        '1GW' => 'E02003511',
        '1GX' => 'E02003511',
        '1GY' => 'E02003511',
        '1HA' => 'E02003511',
        '1HB' => 'E02003511',
        '1HD' => 'E02003511',
        '1HE' => 'E02003511',
        '1HF' => 'E02003511',
        '1HG' => 'E02003511',
        '1HH' => 'E02003511',
        '1HJ' => 'E02003511',
        '1HL' => 'E02003511',
        '1HN' => 'E02003511',
        '1HP' => 'E02003511',
        '1HQ' => 'E02003511',
        '1HR' => 'E02003511',
        '1HS' => 'E02003511',
        '1HT' => 'E02003511',
        '1HU' => 'E02003511',
        '1LA' => 'E02003511',
        '1LB' => 'E02003511',
        '1LD' => 'E02003511',
        '1LE' => 'E02003502',
        '1LF' => 'E02003502',
        '1LG' => 'E02003511',
        '1LH' => 'E02003511',
        '1LJ' => 'E02003511',
        '1LL' => 'E02003511',
        '1LN' => 'E02003511',
        '1LP' => 'E02003511',
        '1LQ' => 'E02003511',
        '1LR' => 'E02003511',
        '1LS' => 'E02003511',
        '1LT' => 'E02003511',
        '1LU' => 'E02003511',
        '1LW' => 'E02003511',
        '1LX' => 'E02003511',
        '1LY' => 'E02003511',
        '1LZ' => 'E02003511',
        '1NA' => 'E02003511',
        '1NB' => 'E02003511',
        '1ND' => 'E02003511',
        '1NE' => 'E02003511',
        '1NF' => 'E02003511',
        '1NG' => 'E02003511',
        '1NN' => 'E02003502',
        '1PA' => 'E02006537',
        '1PB' => 'E02003511',
        '1PD' => 'E02006537',
        '1PE' => 'E02006537',
        '1PF' => 'E02006537',
        '1PG' => 'E02006537',
        '1PH' => 'E02006537',
        '1PJ' => 'E02006537',
        '1PL' => 'E02006537',
        '1PN' => 'E02006537',
        '1PP' => 'E02006537',
        '1PQ' => 'E02006537',
        '1PR' => 'E02006537',
        '1PS' => 'E02006537',
        '1PT' => 'E02006537',
        '1PU' => 'E02006537',
        '1PW' => 'E02006537',
        '1PX' => 'E02006537',
        '1PY' => 'E02006537',
        '1PZ' => 'E02006537',
        '1QA' => 'E02006537',
        '1QB' => 'E02006537',
        '1QF' => 'E02006537',
        '1QG' => 'E02006537',
        '1QH' => 'E02006537',
        '1QJ' => 'E02006537',
        '1QL' => 'E02006537',
        '1QN' => 'E02003511',
        '1QP' => 'E02006537',
        '1QQ' => 'E02003511',
        '1QR' => 'E02006537',
        '1QS' => 'E02006537',
        '1RA' => 'E02006537',
        '1RX' => 'E02003502',
        '1RY' => 'E02006537',
        '1RZ' => 'E02003502',
        '1SA' => 'E02003502',
        '1SB' => 'E02003502',
        '1SD' => 'E02003502',
        '1SE' => 'E02003502',
        '1SF' => 'E02003502',
        '1SG' => 'E02003502',
        '1SH' => 'E02003502',
        '1SJ' => 'E02003502',
        '1SL' => 'E02003502',
        '1SN' => 'E02003502',
        '1SP' => 'E02003502',
        '1SQ' => 'E02003502',
        '1SR' => 'E02003502',
        '1SS' => 'E02003502',
        '1ST' => 'E02003502',
        '1SU' => 'E02003502',
        '1SW' => 'E02003502',
        '1SX' => 'E02003502',
        '1SY' => 'E02003502',
        '1SZ' => 'E02003502',
        '1TA' => 'E02003502',
        '1TB' => 'E02003511',
        '1TD' => 'E02003502',
        '1TE' => 'E02003502',
        '1TF' => 'E02003511',
        '1TG' => 'E02003511',
        '1UA' => 'E02003502',
        '1UB' => 'E02003502',
        '1UH' => 'E02003511',
        '1UJ' => 'E02003511',
        '1UL' => 'E02003511',
        '1UN' => 'E02003511',
        '1UP' => 'E02003511',
        '1UQ' => 'E02006537',
        '1UR' => 'E02003511',
        '1US' => 'E02003511',
        '1UT' => 'E02003502',
        '1UU' => 'E02003511',
        '1UW' => 'E02003511',
        '1UX' => 'E02003511',
        '1UY' => 'E02003511',
        '1UZ' => 'E02003502',
        '1WA' => 'E02003511',
        '1WB' => 'E02003511',
        '1WD' => 'E02006537',
        '1WE' => 'E02003511',
        '1WF' => 'E02003511',
        '1WG' => 'E02003511',
        '1WH' => 'E02003511',
        '1WJ' => 'E02003511',
        '1WL' => 'E02003511',
        '1WN' => 'E02003511',
        '1WP' => 'E02003511',
        '1WQ' => 'E02003511',
        '1WR' => 'E02003511',
        '1WS' => 'E02003511',
        '1WT' => 'E02003511',
        '1WU' => 'E02003511',
        '1WW' => 'E02003511',
        '1WX' => 'E02003511',
        '1WY' => 'E02003511',
        '1WZ' => 'E02003511',
        '1XA' => 'E02003502',
        '1XB' => 'E02003511',
        '1XD' => 'E02003511',
        '1XE' => 'E02003502',
        '1XF' => 'E02003511',
        '1XG' => 'E02003511',
        '1XH' => 'E02003511',
        '1XJ' => 'E02003511',
        '1XL' => 'E02003511',
        '1XN' => 'E02003511',
        '1XP' => 'E02003511',
        '1XQ' => 'E02003511',
        '1XR' => 'E02003503',
        '1XS' => 'E02003511',
        '1XT' => 'E02003503',
        '1XU' => 'E02003503',
        '1XW' => 'E02003511',
        '1XX' => 'E02003511',
        '1XY' => 'E02003511',
        '1XZ' => 'E02003511',
        '1YD' => 'E02003502',
        '1YF' => 'E02003511',
        '1YH' => 'E02003511',
        '1YJ' => 'E02003511',
        '1YL' => 'E02003511',
        '1YT' => 'E02003511',
        '1YU' => 'E02003511',
        '1YW' => 'E02003511',
        '1YY' => 'E02003511',
        '2AA' => 'E02003502',
        '2AB' => 'E02003502',
        '2AD' => 'E02003502',
        '2AE' => 'E02003502',
        '2AF' => 'E02003502',
        '2AL' => 'E02003502',
        '2AX' => 'E02003511',
        '2BA' => 'E02003502',
        '2BB' => 'E02003503',
        '2BD' => 'E02003503',
        '2BE' => 'E02003503',
        '2BF' => 'E02003503',
        '2BG' => 'E02003502',
        '2BH' => 'E02003503',
        '2BJ' => 'E02003503',
        '2BL' => 'E02003503',
        '2BN' => 'E02003503',
        '2BP' => 'E02003502',
        '2BQ' => 'E02003503',
        '2BR' => 'E02003502',
        '2BS' => 'E02003502',
        '2BT' => 'E02003502',
        '2BU' => 'E02003495',
        '2BW' => 'E02003502',
        '2BX' => 'E02003511',
        '2DA' => 'E02003503',
        '2DB' => 'E02003503',
        '2DD' => 'E02003503',
        '2DE' => 'E02003503',
        '2DF' => 'E02003503',
        '2DG' => 'E02003503',
        '2DH' => 'E02003502',
        '2DJ' => 'E02003503',
        '2DL' => 'E02003503',
        '2DN' => 'E02003503',
        '2DP' => 'E02003503',
        '2DQ' => 'E02003502',
        '2DR' => 'E02003502',
        '2DS' => 'E02003503',
        '2DT' => 'E02003495',
        '2DU' => 'E02003511',
        '2DW' => 'E02003511',
        '2DX' => 'E02003511',
        '2DY' => 'E02003511',
        '2DZ' => 'E02003511',
        '2EN' => 'E02003495',
        '2EP' => 'E02003495',
        '2EQ' => 'E02003495',
        '2ER' => 'E02003495',
        '2ES' => 'E02003495',
        '2ET' => 'E02003495',
        '2EU' => 'E02003495',
        '2EW' => 'E02003495',
        '2EX' => 'E02003511',
        '2EY' => 'E02003495',
        '2EZ' => 'E02003495',
        '2FA' => 'E02003502',
        '2FB' => 'E02003502',
        '2FD' => 'E02003502',
        '2FE' => 'E02003502',
        '2FF' => 'E02003502',
        '2FG' => 'E02003502',
        '2FH' => 'E02003502',
        '2FJ' => 'E02003502',
        '2FL' => 'E02003502',
        '2FN' => 'E02003502',
        '2FP' => 'E02003502',
        '2FQ' => 'E02003502',
        '2FR' => 'E02003502',
        '2FS' => 'E02003502',
        '2FT' => 'E02003502',
        '2FU' => 'E02003502',
        '2FW' => 'E02003502',
        '2FX' => 'E02003503',
        '2FY' => 'E02003495',
        '2FZ' => 'E02003495',
        '2GA' => 'E02003502',
        '2GB' => 'E02003495',
        '2GD' => 'E02003502',
        '2GE' => 'E02003495',
        '2GF' => 'E02003495',
        '2GG' => 'E02003495',
        '2GH' => 'E02003495',
        '2GJ' => 'E02003495',
        '2GL' => 'E02003495',
        '2GN' => 'E02003495',
        '2GP' => 'E02003495',
        '2GQ' => 'E02003495',
        '2GR' => 'E02003495',
        '2GS' => 'E02003495',
        '2GT' => 'E02003495',
        '2GU' => 'E02003495',
        '2GW' => 'E02003495',
        '2GX' => 'E02003495',
        '2GY' => 'E02003495',
        '2GZ' => 'E02003495',
        '2HA' => 'E02003502',
        '2HB' => 'E02003502',
        '2HD' => 'E02003502',
        '2HE' => 'E02003502',
        '2HF' => 'E02003495',
        '2HG' => 'E02003495',
        '2HH' => 'E02003495',
        '2HJ' => 'E02003495',
        '2HL' => 'E02003502',
        '2HN' => 'E02003502',
        '2HP' => 'E02003495',
        '2HQ' => 'E02003495',
        '2HR' => 'E02003495',
        '2HS' => 'E02003495',
        '2HT' => 'E02003495',
        '2HU' => 'E02003495',
        '2HW' => 'E02003495',
        '2HX' => 'E02003495',
        '2HY' => 'E02003495',
        '2HZ' => 'E02003495',
        '2JA' => 'E02003495',
        '2JB' => 'E02003495',
        '2JD' => 'E02003495',
        '2JE' => 'E02003495',
        '2JF' => 'E02003495',
        '2LA' => 'E02003502',
        '2LB' => 'E02003502',
        '2LD' => 'E02003502',
        '2LE' => 'E02003502',
        '2LF' => 'E02003502',
        '2LG' => 'E02003502',
        '2LH' => 'E02003502',
        '2LJ' => 'E02003502',
        '2LL' => 'E02003502',
        '2LN' => 'E02003502',
        '2LP' => 'E02003502',
        '2LQ' => 'E02003502',
        '2LR' => 'E02003502',
        '2LS' => 'E02003502',
        '2LT' => 'E02003502',
        '2LU' => 'E02003502',
        '2LW' => 'E02003502',
        '2LX' => 'E02003502',
        '2LY' => 'E02003502',
        '2LZ' => 'E02003502',
        '2NB' => 'E02003511',
        '2ND' => 'E02003495',
        '2NE' => 'E02003495',
        '2NF' => 'E02003511',
        '2NG' => 'E02003511',
        '2PA' => 'E02003502',
        '2PB' => 'E02003502',
        '2PD' => 'E02003502',
        '2PE' => 'E02003502',
        '2PF' => 'E02003502',
        '2PG' => 'E02003502',
        '2PH' => 'E02003502',
        '2PJ' => 'E02003502',
        '2PL' => 'E02003502',
        '2PN' => 'E02003502',
        '2PP' => 'E02003495',
        '2PQ' => 'E02003502',
        '2PR' => 'E02003502',
        '2PS' => 'E02003502',
        '2PT' => 'E02003502',
        '2PU' => 'E02003502',
        '2PW' => 'E02003502',
        '2PX' => 'E02003502',
        '2PY' => 'E02003502',
        '2PZ' => 'E02003502',
        '2QA' => 'E02003502',
        '2QB' => 'E02003502',
        '2QD' => 'E02003502',
        '2QE' => 'E02003495',
        '2QF' => 'E02003495',
        '2QG' => 'E02003502',
        '2QH' => 'E02003495',
        '2QJ' => 'E02003495',
        '2QL' => 'E02003495',
        '2QN' => 'E02003511',
        '2QP' => 'E02003495',
        '2QQ' => 'E02003502',
        '2QR' => 'E02003502',
        '2QS' => 'E02003502',
        '2QT' => 'E02003495',
        '2QU' => 'E02003495',
        '2RA' => 'E02003495',
        '2RB' => 'E02003495',
        '2RD' => 'E02003495',
        '2RE' => 'E02003495',
        '2RF' => 'E02003495',
        '2RG' => 'E02003495',
        '2RH' => 'E02003495',
        '2RJ' => 'E02003495',
        '2RL' => 'E02003495',
        '2RN' => 'E02003495',
        '2RP' => 'E02003495',
        '2RQ' => 'E02003495',
        '2RR' => 'E02003495',
        '2RS' => 'E02003495',
        '2RT' => 'E02003495',
        '2RU' => 'E02003495',
        '2RW' => 'E02003495',
        '2RX' => 'E02003495',
        '2RY' => 'E02003495',
        '2RZ' => 'E02003495',
        '2SA' => 'E02003495',
        '2SB' => 'E02003502',
        '2SD' => 'E02003495',
        '2SE' => 'E02003511',
        '2SF' => 'E02003495',
        '2SS' => 'E02003511',
        '2TA' => 'E02003502',
        '2TB' => 'E02003502',
        '2TD' => 'E02003502',
        '2TE' => 'E02003502',
        '2TF' => 'E02003502',
        '2TG' => 'E02003502',
        '2TH' => 'E02003495',
        '2TJ' => 'E02003502',
        '2TL' => 'E02003502',
        '2TN' => 'E02003502',
        '2TP' => 'E02003502',
        '2TQ' => 'E02003502',
        '2TR' => 'E02003502',
        '2TS' => 'E02003502',
        '2TT' => 'E02003502',
        '2TU' => 'E02003495',
        '2TW' => 'E02003511',
        '2TX' => 'E02003511',
        '2TY' => 'E02003502',
        '2TZ' => 'E02003495',
        '2UA' => 'E02003511',
        '2UZ' => 'E02003495',
        '2WA' => 'E02003495',
        '2WB' => 'E02003495',
        '2WD' => 'E02003502',
        '2WE' => 'E02003502',
        '2WF' => 'E02003495',
        '2WG' => 'E02003495',
        '2WH' => 'E02003495',
        '2WJ' => 'E02003495',
        '2WL' => 'E02003495',
        '2WN' => 'E02003495',
        '2WP' => 'E02003495',
        '2WQ' => 'E02003495',
        '2WR' => 'E02003495',
        '2WS' => 'E02003495',
        '2WT' => 'E02003495',
        '2WU' => 'E02003495',
        '2WW' => 'E02003511',
        '2WX' => 'E02003511',
        '2WY' => 'E02003495',
        '2WZ' => 'E02003511',
        '2XA' => 'E02003511',
        '2XB' => 'E02003511',
        '2XD' => 'E02003511',
        '2XE' => 'E02003511',
        '2XH' => 'E02003511',
        '2XN' => 'E02003511',
        '2XP' => 'E02003511',
        '2XQ' => 'E02003511',
        '2XR' => 'E02003511',
        '2XT' => 'E02003511',
        '2XY' => 'E02003495',
        '2XZ' => 'E02003511',
        '2YA' => 'E02003495',
        '2YB' => 'E02003495',
        '2YD' => 'E02003495',
        '2YE' => 'E02003495',
        '2YF' => 'E02003495',
        '2YG' => 'E02003495',
        '2YH' => 'E02003495',
        '2YJ' => 'E02003495',
        '2YL' => 'E02003495',
        '2YN' => 'E02003495',
        '2YP' => 'E02003495',
        '2YQ' => 'E02003495',
        '2YR' => 'E02003495',
        '2YS' => 'E02003495',
        '2YT' => 'E02003495',
        '2YU' => 'E02003495',
        '2YW' => 'E02003495',
        '2YX' => 'E02003495',
        '2YY' => 'E02003495',
        '2YZ' => 'E02003495',
        '2ZA' => 'E02003511',
        '2ZB' => 'E02003511',
        '2ZD' => 'E02003511',
        '2ZE' => 'E02003511',
        '2ZF' => 'E02003511',
        '2ZG' => 'E02003495',
        '2ZH' => 'E02003495',
        '2ZJ' => 'E02003511',
        '2ZL' => 'E02003495',
        '2ZN' => 'E02003511',
        '2ZP' => 'E02003511',
        '2ZQ' => 'E02003511',
        '2ZW' => 'E02003511',
        '9AA' => 'E02003511',
        '9AB' => 'E02003511',
        '9AD' => 'E02003511',
        '9AE' => 'E02003511',
        '9AF' => 'E02003511',
        '9AG' => 'E02003511',
        '9AH' => 'E02003511',
        '9AJ' => 'E02003511',
        '9AL' => 'E02003511',
        '9AN' => 'E02003511',
        '9AP' => 'E02003511',
        '9AQ' => 'E02003511',
        '9AR' => 'E02003511',
        '9AS' => 'E02003511',
        '9AT' => 'E02003511',
        '9AU' => 'E02003511',
        '9AW' => 'E02003511',
        '9AX' => 'E02003511',
        '9AY' => 'E02003511',
        '9AZ' => 'E02003511',
        '9BA' => 'E02003511',
        '9BB' => 'E02003511',
        '9BD' => 'E02003511',
        '9BE' => 'E02003511',
        '9BF' => 'E02003511',
        '9BG' => 'E02003511',
        '9BH' => 'E02003511',
        '9BJ' => 'E02003511',
        '9BL' => 'E02003511',
        '9BN' => 'E02003511',
        '9BP' => 'E02003511',
        '9BQ' => 'E02003511',
        '9BR' => 'E02003511',
        '9BS' => 'E02003511',
        '9BT' => 'E02003511',
        '9BU' => 'E02003511',
        '9BW' => 'E02003511',
        '9BX' => 'E02003511',
        '9BY' => 'E02003511',
        '9BZ' => 'E02003511',
        '9DA' => 'E02003511',
        '9DB' => 'E02003511',
        '9DD' => 'E02003511',
        '9DE' => 'E02003511',
        '9DF' => 'E02003511',
        '9DG' => 'E02003511',
        '9DH' => 'E02003511',
        '9DJ' => 'E02003511',
        '9DL' => 'E02003511',
        '9DN' => 'E02003511',
        '9DP' => 'E02003511',
        '9DQ' => 'E02003511',
        '9DR' => 'E02003511',
        '9DS' => 'E02003511',
        '9DT' => 'E02003511',
        '9DU' => 'E02003511',
        '9DW' => 'E02003511',
        '9DX' => 'E02003511',
        '9DY' => 'E02003511',
        '9DZ' => 'E02003511',
        '9EA' => 'E02003511',
        '9EB' => 'E02003511',
        '9ED' => 'E02003511',
        '9EE' => 'E02003511',
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
