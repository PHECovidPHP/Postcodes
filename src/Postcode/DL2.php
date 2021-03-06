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
final class DL2
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02002573',
        '1AB' => 'E02002573',
        '1AD' => 'E02002573',
        '1AE' => 'E02002573',
        '1AF' => 'E02002573',
        '1AG' => 'E02002573',
        '1AH' => 'E02002573',
        '1AJ' => 'E02002573',
        '1AL' => 'E02002573',
        '1AN' => 'E02002573',
        '1AP' => 'E02002573',
        '1AQ' => 'E02002573',
        '1AR' => 'E02002573',
        '1AS' => 'E02002573',
        '1AT' => 'E02002573',
        '1AU' => 'E02002573',
        '1AW' => 'E02002573',
        '1AX' => 'E02002573',
        '1AY' => 'E02002573',
        '1AZ' => 'E02002573',
        '1BA' => 'E02002573',
        '1BB' => 'E02002573',
        '1BD' => 'E02002573',
        '1BE' => 'E02002573',
        '1BF' => 'E02002559',
        '1BG' => 'E02002573',
        '1BH' => 'E02002573',
        '1BJ' => 'E02002573',
        '1BL' => 'E02002573',
        '1BN' => 'E02002573',
        '1BP' => 'E02002573',
        '1BQ' => 'E02002573',
        '1BT' => 'E02002573',
        '1BW' => 'E02002573',
        '1BY' => 'E02002573',
        '1BZ' => 'E02002573',
        '1DA' => 'E02002573',
        '1DB' => 'E02002573',
        '1DD' => 'E02002573',
        '1DE' => 'E02002573',
        '1DF' => 'E02002573',
        '1DG' => 'E02002573',
        '1DH' => 'E02002573',
        '1DJ' => 'E02002573',
        '1DL' => 'E02002571',
        '1DN' => 'E02002573',
        '1DP' => 'E02002573',
        '1DQ' => 'E02002573',
        '1DR' => 'E02002573',
        '1DS' => 'E02002573',
        '1DT' => 'E02002573',
        '1DU' => 'E02002573',
        '1DW' => 'E02002573',
        '1DX' => 'E02002573',
        '1DY' => 'E02002573',
        '1DZ' => 'E02002573',
        '1EA' => 'E02002573',
        '1EB' => 'E02002573',
        '1ED' => 'E02002573',
        '1EE' => 'E02002573',
        '1EF' => 'E02002573',
        '1EG' => 'E02002573',
        '1EH' => 'E02002573',
        '1EJ' => 'E02002573',
        '1EL' => 'E02002573',
        '1EN' => 'E02002573',
        '1EP' => 'E02002573',
        '1EQ' => 'E02002573',
        '1ER' => 'E02002573',
        '1ES' => 'E02002573',
        '1ET' => 'E02002573',
        '1EU' => 'E02002573',
        '1EW' => 'E02002573',
        '1EX' => 'E02002573',
        '1EY' => 'E02002573',
        '1EZ' => 'E02002573',
        '1FA' => 'E02002573',
        '1FB' => 'E02002573',
        '1FD' => 'E02002573',
        '1FE' => 'E02002573',
        '1FF' => 'E02002573',
        '1FH' => 'E02002559',
        '1FJ' => 'E02002573',
        '1FP' => 'E02002559',
        '1GA' => 'E02002573',
        '1GB' => 'E02002573',
        '1GD' => 'E02002573',
        '1GE' => 'E02002573',
        '1GR' => 'E02002571',
        '1HA' => 'E02002573',
        '1HB' => 'E02002573',
        '1HD' => 'E02002573',
        '1HE' => 'E02002573',
        '1HF' => 'E02002573',
        '1HG' => 'E02002573',
        '1HH' => 'E02002573',
        '1HJ' => 'E02002573',
        '1HL' => 'E02002573',
        '1HN' => 'E02002573',
        '1HP' => 'E02002539',
        '1HQ' => 'E02002573',
        '1HR' => 'E02002573',
        '1HS' => 'E02002573',
        '1HT' => 'E02002573',
        '1HU' => 'E02002573',
        '1HW' => 'E02002573',
        '1HX' => 'E02002573',
        '1HY' => 'E02002573',
        '1JA' => 'E02002573',
        '1JB' => 'E02002573',
        '1JD' => 'E02002573',
        '1JE' => 'E02002573',
        '1JF' => 'E02002573',
        '1JG' => 'E02002573',
        '1JH' => 'E02002573',
        '1JJ' => 'E02002573',
        '1JL' => 'E02002573',
        '1JN' => 'E02002573',
        '1JP' => 'E02002573',
        '1JQ' => 'E02002573',
        '1JR' => 'E02002573',
        '1JS' => 'E02002573',
        '1JT' => 'E02002573',
        '1JU' => 'E02002573',
        '1JW' => 'E02002573',
        '1JX' => 'E02002573',
        '1JY' => 'E02002559',
        '1JZ' => 'E02002559',
        '1LA' => 'E02002559',
        '1LB' => 'E02002573',
        '1LD' => 'E02002573',
        '1LE' => 'E02002573',
        '1LF' => 'E02002573',
        '1LG' => 'E02002573',
        '1LH' => 'E02002573',
        '1LJ' => 'E02002573',
        '1LL' => 'E02002573',
        '1LN' => 'E02002573',
        '1LP' => 'E02002573',
        '1LQ' => 'E02002573',
        '1LR' => 'E02002573',
        '1LS' => 'E02002573',
        '1LT' => 'E02002573',
        '1LU' => 'E02002573',
        '1LW' => 'E02002573',
        '1LX' => 'E02002573',
        '1LZ' => 'E02002573',
        '1NA' => 'E02002573',
        '1NB' => 'E02002573',
        '1NE' => 'E02002573',
        '1NF' => 'E02002573',
        '1NG' => 'E02002573',
        '1NH' => 'E02002573',
        '1NJ' => 'E02002573',
        '1NL' => 'E02002573',
        '1NN' => 'E02002573',
        '1NP' => 'E02002573',
        '1NQ' => 'E02002573',
        '1NR' => 'E02002573',
        '1NT' => 'E02002573',
        '1NU' => 'E02002573',
        '1NW' => 'E02002573',
        '1NX' => 'E02002573',
        '1PA' => 'E02002573',
        '1PB' => 'E02002573',
        '1PD' => 'E02002573',
        '1PE' => 'E02002573',
        '1PF' => 'E02002573',
        '1PG' => 'E02002573',
        '1PH' => 'E02002573',
        '1PJ' => 'E02002573',
        '1PL' => 'E02002573',
        '1PN' => 'E02002573',
        '1PP' => 'E02005752',
        '1PQ' => 'E02002573',
        '1PR' => 'E02005752',
        '1PS' => 'E02002573',
        '1PT' => 'E02002573',
        '1PW' => 'E02005752',
        '1PY' => 'E02002573',
        '1PZ' => 'E02002573',
        '1QA' => 'E02002573',
        '1QB' => 'E02002573',
        '1QD' => 'E02002573',
        '1QE' => 'E02002573',
        '1QF' => 'E02002573',
        '1QG' => 'E02002573',
        '1QH' => 'E02002573',
        '1QJ' => 'E02002573',
        '1QL' => 'E02002573',
        '1QN' => 'E02002573',
        '1QP' => 'E02002573',
        '1QQ' => 'E02002573',
        '1QR' => 'E02002573',
        '1QS' => 'E02002573',
        '1QT' => 'E02002573',
        '1QU' => 'E02002573',
        '1QW' => 'E02002573',
        '1QX' => 'E02002573',
        '1QY' => 'E02002573',
        '1QZ' => 'E02002571',
        '1RA' => 'E02002573',
        '1RB' => 'E02002573',
        '1RD' => 'E02002573',
        '1RE' => 'E02002573',
        '1RF' => 'E02002573',
        '1RG' => 'E02002573',
        '1RH' => 'E02002573',
        '1RJ' => 'E02002559',
        '1RL' => 'E02002559',
        '1RN' => 'E02002559',
        '1RP' => 'E02002559',
        '1RQ' => 'E02002573',
        '1RR' => 'E02002559',
        '1RS' => 'E02002559',
        '1RT' => 'E02002559',
        '1RU' => 'E02002559',
        '1RW' => 'E02002559',
        '1RX' => 'E02002559',
        '1RY' => 'E02002559',
        '1RZ' => 'E02002559',
        '1SA' => 'E02002559',
        '1SB' => 'E02002559',
        '1SD' => 'E02002559',
        '1SE' => 'E02002559',
        '1SF' => 'E02002559',
        '1SG' => 'E02002559',
        '1SH' => 'E02002559',
        '1SJ' => 'E02002559',
        '1SL' => 'E02002559',
        '1SN' => 'E02002559',
        '1SP' => 'E02002559',
        '1SQ' => 'E02002559',
        '1SR' => 'E02002559',
        '1SS' => 'E02002559',
        '1ST' => 'E02002559',
        '1SU' => 'E02002559',
        '1SW' => 'E02002559',
        '1SX' => 'E02002539',
        '1SY' => 'E02002559',
        '1SZ' => 'E02002559',
        '1TA' => 'E02002559',
        '1TB' => 'E02002539',
        '1TD' => 'E02002539',
        '1TE' => 'E02002539',
        '1TF' => 'E02002559',
        '1TG' => 'E02002539',
        '1TH' => 'E02002539',
        '1TJ' => 'E02002559',
        '1TL' => 'E02002559',
        '1TN' => 'E02002573',
        '1TP' => 'E02002573',
        '1TQ' => 'E02002573',
        '1TR' => 'E02002573',
        '1TS' => 'E02002573',
        '1TT' => 'E02002573',
        '1TU' => 'E02002573',
        '1TW' => 'E02002559',
        '1TX' => 'E02002573',
        '1TY' => 'E02002573',
        '1TZ' => 'E02002573',
        '1UA' => 'E02002573',
        '1UB' => 'E02002573',
        '1UD' => 'E02002573',
        '1UE' => 'E02002573',
        '1UF' => 'E02002573',
        '1UG' => 'E02002573',
        '1UH' => 'E02002573',
        '1UJ' => 'E02002573',
        '1UL' => 'E02002573',
        '1UN' => 'E02002573',
        '1UP' => 'E02002573',
        '1UQ' => 'E02002573',
        '1UR' => 'E02002573',
        '1UT' => 'E02002573',
        '1UU' => 'E02002573',
        '1UW' => 'E02002573',
        '1UX' => 'E02002573',
        '1UY' => 'E02002573',
        '1UZ' => 'E02002573',
        '1WA' => 'E02002559',
        '1WB' => 'E02002573',
        '1WT' => 'E02002566',
        '1WU' => 'E02002566',
        '1WW' => 'E02002559',
        '1WX' => 'E02002566',
        '1WY' => 'E02002566',
        '1WZ' => 'E02002566',
        '1XB' => 'E02002573',
        '1XD' => 'E02002573',
        '1XF' => 'E02002566',
        '1XG' => 'E02002566',
        '1XH' => 'E02002566',
        '1XQ' => 'E02002573',
        '1YL' => 'E02002566',
        '1YN' => 'E02002566',
        '1YP' => 'E02002566',
        '1YQ' => 'E02002566',
        '1YR' => 'E02002566',
        '1YS' => 'E02002566',
        '1YT' => 'E02002573',
        '1YU' => 'E02002573',
        '1YW' => 'E02002566',
        '1YX' => 'E02002573',
        '1YY' => 'E02002573',
        '1YZ' => 'E02002566',
        '1ZX' => 'E02002566',
        '1ZY' => 'E02002566',
        '2AA' => 'E02002573',
        '2AB' => 'E02002559',
        '2AD' => 'E02002573',
        '2AE' => 'E02002573',
        '2AF' => 'E02002573',
        '2AG' => 'E02002573',
        '2AH' => 'E02002573',
        '2AJ' => 'E02002573',
        '2AL' => 'E02002573',
        '2AN' => 'E02002573',
        '2AP' => 'E02002573',
        '2AQ' => 'E02002573',
        '2AR' => 'E02002573',
        '2AS' => 'E02002573',
        '2AT' => 'E02002573',
        '2AU' => 'E02002573',
        '2AW' => 'E02002573',
        '2AX' => 'E02002573',
        '2AY' => 'E02002573',
        '2AZ' => 'E02002573',
        '2BA' => 'E02002573',
        '2BB' => 'E02005782',
        '2BD' => 'E02002573',
        '2BE' => 'E02002573',
        '2BF' => 'E02002573',
        '2BG' => 'E02002573',
        '2BH' => 'E02002572',
        '2BJ' => 'E02002573',
        '2BL' => 'E02002573',
        '2BN' => 'E02002573',
        '2BP' => 'E02002573',
        '2BQ' => 'E02002573',
        '2BS' => 'E02002573',
        '2BT' => 'E02002573',
        '2BU' => 'E02002573',
        '2BW' => 'E02002573',
        '2BX' => 'E02002573',
        '2BY' => 'E02002573',
        '2BZ' => 'E02002573',
        '2DA' => 'E02002573',
        '2DB' => 'E02002573',
        '2DD' => 'E02002573',
        '2DE' => 'E02002573',
        '2DF' => 'E02002573',
        '2DG' => 'E02002573',
        '2DH' => 'E02002573',
        '2DJ' => 'E02002573',
        '2DL' => 'E02002573',
        '2DN' => 'E02002573',
        '2DP' => 'E02002573',
        '2DQ' => 'E02002573',
        '2DR' => 'E02002573',
        '2DS' => 'E02002573',
        '2DT' => 'E02002573',
        '2DU' => 'E02002573',
        '2DW' => 'E02002573',
        '2DX' => 'E02002573',
        '2DY' => 'E02002573',
        '2DZ' => 'E02002573',
        '2EA' => 'E02002573',
        '2EB' => 'E02002573',
        '2ED' => 'E02002573',
        '2EE' => 'E02002573',
        '2EF' => 'E02002573',
        '2EG' => 'E02002573',
        '2EH' => 'E02002573',
        '2EJ' => 'E02002573',
        '2EL' => 'E02002573',
        '2EN' => 'E02002573',
        '2EP' => 'E02002573',
        '2EQ' => 'E02002573',
        '2ER' => 'E02002573',
        '2ES' => 'E02002573',
        '2ET' => 'E02002573',
        '2EU' => 'E02002573',
        '2EW' => 'E02002573',
        '2EX' => 'E02002573',
        '2EY' => 'E02002573',
        '2EZ' => 'E02002573',
        '2FA' => 'E02002559',
        '2FB' => 'E02002559',
        '2FD' => 'E02002559',
        '2FE' => 'E02002559',
        '2FF' => 'E02002559',
        '2FG' => 'E02002559',
        '2FH' => 'E02002559',
        '2FJ' => 'E02002559',
        '2FL' => 'E02002559',
        '2FN' => 'E02002559',
        '2FP' => 'E02002559',
        '2FQ' => 'E02002559',
        '2FR' => 'E02002566',
        '2FS' => 'E02002566',
        '2FT' => 'E02002566',
        '2FU' => 'E02002573',
        '2FW' => 'E02002559',
        '2FX' => 'E02002573',
        '2FY' => 'E02002566',
        '2FZ' => 'E02002573',
        '2GA' => 'E02002559',
        '2GB' => 'E02002559',
        '2GD' => 'E02002559',
        '2GE' => 'E02002559',
        '2GF' => 'E02002559',
        '2GG' => 'E02002559',
        '2GH' => 'E02002559',
        '2GJ' => 'E02002559',
        '2GL' => 'E02002559',
        '2GN' => 'E02002559',
        '2GP' => 'E02002559',
        '2GQ' => 'E02002559',
        '2GR' => 'E02002559',
        '2GS' => 'E02002559',
        '2GT' => 'E02002559',
        '2GU' => 'E02002559',
        '2GW' => 'E02002559',
        '2GX' => 'E02002559',
        '2GZ' => 'E02002559',
        '2HA' => 'E02002573',
        '2HB' => 'E02002573',
        '2HD' => 'E02002573',
        '2HE' => 'E02002573',
        '2HF' => 'E02002573',
        '2HG' => 'E02002573',
        '2HH' => 'E02002573',
        '2HJ' => 'E02002573',
        '2HL' => 'E02002573',
        '2HN' => 'E02002573',
        '2HP' => 'E02002573',
        '2HQ' => 'E02002573',
        '2HR' => 'E02002573',
        '2HS' => 'E02002573',
        '2HT' => 'E02002559',
        '2HU' => 'E02002573',
        '2HW' => 'E02002573',
        '2HX' => 'E02002573',
        '2HY' => 'E02002573',
        '2HZ' => 'E02002573',
        '2JA' => 'E02002573',
        '2JB' => 'E02002573',
        '2JD' => 'E02002573',
        '2JE' => 'E02002573',
        '2JF' => 'E02002573',
        '2JG' => 'E02002573',
        '2JH' => 'E02002573',
        '2JJ' => 'E02002573',
        '2JL' => 'E02002573',
        '2JN' => 'E02002573',
        '2JQ' => 'E02002573',
        '2JR' => 'E02002559',
        '2JS' => 'E02002559',
        '2JT' => 'E02002573',
        '2JU' => 'E02002573',
        '2JW' => 'E02002573',
        '2JX' => 'E02002559',
        '2JY' => 'E02002559',
        '2JZ' => 'E02002559',
        '2LA' => 'E02002559',
        '2LB' => 'E02002559',
        '2LD' => 'E02002559',
        '2LE' => 'E02002559',
        '2LF' => 'E02002559',
        '2LG' => 'E02002559',
        '2LH' => 'E02002559',
        '2LJ' => 'E02002559',
        '2LL' => 'E02002559',
        '2LN' => 'E02002559',
        '2LP' => 'E02002559',
        '2LQ' => 'E02002559',
        '2LR' => 'E02002559',
        '2LS' => 'E02002559',
        '2LT' => 'E02002559',
        '2LU' => 'E02002559',
        '2LW' => 'E02002559',
        '2LX' => 'E02002559',
        '2LY' => 'E02002559',
        '2LZ' => 'E02002559',
        '2NA' => 'E02002559',
        '2NB' => 'E02002559',
        '2ND' => 'E02002559',
        '2NE' => 'E02002559',
        '2NF' => 'E02002559',
        '2NG' => 'E02002559',
        '2NH' => 'E02002559',
        '2NJ' => 'E02002559',
        '2NL' => 'E02002573',
        '2NP' => 'E02005782',
        '2NQ' => 'E02002559',
        '2NR' => 'E02005782',
        '2NS' => 'E02005782',
        '2NT' => 'E02005782',
        '2NU' => 'E02005782',
        '2NW' => 'E02005782',
        '2NX' => 'E02005782',
        '2NY' => 'E02002559',
        '2NZ' => 'E02005782',
        '2PA' => 'E02005782',
        '2PB' => 'E02005782',
        '2PD' => 'E02005782',
        '2PE' => 'E02005782',
        '2PF' => 'E02005782',
        '2PG' => 'E02005782',
        '2PH' => 'E02005782',
        '2PJ' => 'E02005782',
        '2PL' => 'E02005782',
        '2PN' => 'E02005782',
        '2PP' => 'E02005782',
        '2PQ' => 'E02005782',
        '2PR' => 'E02005782',
        '2PS' => 'E02005782',
        '2PT' => 'E02005782',
        '2PU' => 'E02005782',
        '2PW' => 'E02005782',
        '2PX' => 'E02005782',
        '2PY' => 'E02005782',
        '2PZ' => 'E02005782',
        '2QA' => 'E02005782',
        '2QB' => 'E02005782',
        '2QD' => 'E02005782',
        '2QE' => 'E02005782',
        '2QF' => 'E02005782',
        '2QG' => 'E02005782',
        '2QH' => 'E02005782',
        '2QJ' => 'E02005782',
        '2QL' => 'E02005782',
        '2QN' => 'E02005782',
        '2QP' => 'E02005782',
        '2QQ' => 'E02005782',
        '2QR' => 'E02005782',
        '2QS' => 'E02005782',
        '2QT' => 'E02005782',
        '2QU' => 'E02005782',
        '2QW' => 'E02005782',
        '2QX' => 'E02005782',
        '2QY' => 'E02005782',
        '2QZ' => 'E02005782',
        '2RA' => 'E02005782',
        '2RB' => 'E02005782',
        '2RD' => 'E02005782',
        '2RE' => 'E02005782',
        '2RF' => 'E02005782',
        '2RG' => 'E02005782',
        '2RH' => 'E02005782',
        '2RJ' => 'E02005782',
        '2RL' => 'E02005782',
        '2RN' => 'E02005782',
        '2RP' => 'E02005782',
        '2RQ' => 'E02005782',
        '2RR' => 'E02005782',
        '2RS' => 'E02005782',
        '2RT' => 'E02005782',
        '2RU' => 'E02005782',
        '2RW' => 'E02005782',
        '2SA' => 'E02002573',
        '2SB' => 'E02002573',
        '2SD' => 'E02002573',
        '2SE' => 'E02002573',
        '2SF' => 'E02005782',
        '2SG' => 'E02005782',
        '2SH' => 'E02005782',
        '2SJ' => 'E02005782',
        '2SL' => 'E02005782',
        '2SN' => 'E02005782',
        '2SP' => 'E02005782',
        '2SQ' => 'E02005782',
        '2SR' => 'E02005782',
        '2SS' => 'E02005782',
        '2ST' => 'E02005782',
        '2SU' => 'E02005782',
        '2SW' => 'E02005782',
        '2SX' => 'E02005782',
        '2SY' => 'E02005782',
        '2SZ' => 'E02005782',
        '2TA' => 'E02005782',
        '2TB' => 'E02005782',
        '2TD' => 'E02005782',
        '2TE' => 'E02005782',
        '2TF' => 'E02005782',
        '2TG' => 'E02005782',
        '2TH' => 'E02005782',
        '2TJ' => 'E02005782',
        '2TL' => 'E02005782',
        '2TN' => 'E02005782',
        '2TP' => 'E02002559',
        '2TQ' => 'E02005782',
        '2TR' => 'E02002569',
        '2TS' => 'E02002559',
        '2TU' => 'E02002559',
        '2TW' => 'E02005782',
        '2TX' => 'E02002559',
        '2TY' => 'E02002559',
        '2TZ' => 'E02002559',
        '2UA' => 'E02002559',
        '2UB' => 'E02002559',
        '2UD' => 'E02002559',
        '2UE' => 'E02002559',
        '2UF' => 'E02002559',
        '2UG' => 'E02002559',
        '2UH' => 'E02002559',
        '2UJ' => 'E02002559',
        '2UL' => 'E02004345',
        '2UN' => 'E02004345',
        '2UP' => 'E02004345',
        '2UQ' => 'E02002559',
        '2UR' => 'E02004345',
        '2UT' => 'E02004345',
        '2UU' => 'E02002559',
        '2UW' => 'E02004345',
        '2UX' => 'E02002559',
        '2UY' => 'E02002559',
        '2UZ' => 'E02002559',
        '2WA' => 'E02002566',
        '2WX' => 'E02002566',
        '2WY' => 'E02002566',
        '2WZ' => 'E02002566',
        '2XA' => 'E02002573',
        '2XG' => 'E02002559',
        '2XH' => 'E02002559',
        '2XJ' => 'E02002559',
        '2XL' => 'E02002559',
        '2XN' => 'E02002559',
        '2XP' => 'E02002559',
        '2XQ' => 'E02002559',
        '2XT' => 'E02002559',
        '2XU' => 'E02002559',
        '2XW' => 'E02002559',
        '2XX' => 'E02002559',
        '2XY' => 'E02002559',
        '2XZ' => 'E02002559',
        '2YA' => 'E02002559',
        '2YB' => 'E02002559',
        '2YD' => 'E02002568',
        '2YE' => 'E02002573',
        '2YF' => 'E02002566',
        '2YG' => 'E02002573',
        '2YH' => 'E02002559',
        '2YJ' => 'E02002573',
        '2YL' => 'E02002573',
        '2YN' => 'E02002566',
        '2YP' => 'E02002566',
        '2YQ' => 'E02002573',
        '2YR' => 'E02002559',
        '2YS' => 'E02002566',
        '2YT' => 'E02002573',
        '2YU' => 'E02002573',
        '2YW' => 'E02002573',
        '2YX' => 'E02002566',
        '2YY' => 'E02002573',
        '2YZ' => 'E02002573',
        '3AA' => 'E02004345',
        '3AB' => 'E02004345',
        '3AD' => 'E02002559',
        '3AE' => 'E02004345',
        '3AF' => 'E02004345',
        '3AG' => 'E02004345',
        '3AH' => 'E02004345',
        '3AJ' => 'E02004345',
        '3AL' => 'E02004345',
        '3AN' => 'E02004345',
        '3AP' => 'E02004345',
        '3AQ' => 'E02004345',
        '3AR' => 'E02004345',
        '3AS' => 'E02004345',
        '3AT' => 'E02004345',
        '3AW' => 'E02004345',
        '3AX' => 'E02004345',
        '3AY' => 'E02002566',
        '3BE' => 'E02004345',
        '3BG' => 'E02004345',
        '3BH' => 'E02004345',
        '3BJ' => 'E02004345',
        '3BL' => 'E02004345',
        '3BN' => 'E02004345',
        '3BP' => 'E02004345',
        '3BQ' => 'E02004345',
        '3BW' => 'E02004345',
        '3DA' => 'E02004345',
        '3DB' => 'E02004345',
        '3DD' => 'E02004345',
        '3DE' => 'E02004345',
        '3DF' => 'E02004345',
        '3DH' => 'E02004345',
        '3DJ' => 'E02004345',
        '3DL' => 'E02004345',
        '3DN' => 'E02004345',
        '3DP' => 'E02004345',
        '3DR' => 'E02004345',
        '3DS' => 'E02004345',
        '3DT' => 'E02004345',
        '3DU' => 'E02004345',
        '3DW' => 'E02004345',
        '3DX' => 'E02004345',
        '3DY' => 'E02004345',
        '3DZ' => 'E02004345',
        '3EA' => 'E02004345',
        '3EB' => 'E02004345',
        '3ED' => 'E02004345',
        '3EE' => 'E02004345',
        '3EF' => 'E02004345',
        '3EG' => 'E02004345',
        '3EH' => 'E02004345',
        '3EJ' => 'E02004345',
        '3EL' => 'E02004345',
        '3EN' => 'E02004345',
        '3EP' => 'E02004345',
        '3EQ' => 'E02004345',
        '3ER' => 'E02004345',
        '3ES' => 'E02004345',
        '3ET' => 'E02004345',
        '3EU' => 'E02004345',
        '3EW' => 'E02004345',
        '3EX' => 'E02004345',
        '3EY' => 'E02004345',
        '3EZ' => 'E02004345',
        '3GA' => 'E02004345',
        '3GB' => 'E02004345',
        '3HA' => 'E02004345',
        '3HB' => 'E02004345',
        '3HD' => 'E02004345',
        '3HE' => 'E02004345',
        '3HF' => 'E02004345',
        '3HG' => 'E02004345',
        '3HH' => 'E02004345',
        '3HJ' => 'E02004345',
        '3HL' => 'E02004345',
        '3HN' => 'E02004345',
        '3HP' => 'E02004345',
        '3HQ' => 'E02004345',
        '3HR' => 'E02004345',
        '3HS' => 'E02004345',
        '3HT' => 'E02004345',
        '3HU' => 'E02004345',
        '3HW' => 'E02004345',
        '3HX' => 'E02004345',
        '3HY' => 'E02004345',
        '3HZ' => 'E02004345',
        '3JA' => 'E02004345',
        '3JB' => 'E02004345',
        '3JD' => 'E02004345',
        '3JE' => 'E02004345',
        '3JF' => 'E02004345',
        '3JG' => 'E02004345',
        '3JH' => 'E02004345',
        '3JJ' => 'E02004345',
        '3JL' => 'E02004345',
        '3JN' => 'E02004345',
        '3JP' => 'E02004345',
        '3JQ' => 'E02004345',
        '3JR' => 'E02004345',
        '3JS' => 'E02004345',
        '3JT' => 'E02004345',
        '3JU' => 'E02004345',
        '3JW' => 'E02004345',
        '3JX' => 'E02004345',
        '3JY' => 'E02004345',
        '3JZ' => 'E02004345',
        '3LA' => 'E02004345',
        '3LB' => 'E02004345',
        '3LD' => 'E02004345',
        '3LE' => 'E02004345',
        '3LF' => 'E02004345',
        '3LG' => 'E02004345',
        '3LH' => 'E02004345',
        '3LJ' => 'E02004345',
        '3LL' => 'E02004345',
        '3LN' => 'E02004345',
        '3LP' => 'E02004345',
        '3LQ' => 'E02004345',
        '3LR' => 'E02004345',
        '3LS' => 'E02004345',
        '3LT' => 'E02004345',
        '3LU' => 'E02004345',
        '3LW' => 'E02004345',
        '3LX' => 'E02004345',
        '3LY' => 'E02004345',
        '3LZ' => 'E02004345',
        '3NA' => 'E02004345',
        '3NB' => 'E02004345',
        '3ND' => 'E02004345',
        '3NE' => 'E02004345',
        '3NF' => 'E02004345',
        '3NG' => 'E02004345',
        '3NH' => 'E02004345',
        '3NJ' => 'E02004345',
        '3NL' => 'E02004345',
        '3NN' => 'E02004345',
        '3NP' => 'E02004345',
        '3NQ' => 'E02004345',
        '3NR' => 'E02004345',
        '3NS' => 'E02004345',
        '3NT' => 'E02004345',
        '3NU' => 'E02004345',
        '3NW' => 'E02004345',
        '3NX' => 'E02004345',
        '3NY' => 'E02004345',
        '3PA' => 'E02004345',
        '3PB' => 'E02004345',
        '3PD' => 'E02004345',
        '3PE' => 'E02004345',
        '3PF' => 'E02004345',
        '3PG' => 'E02004345',
        '3PH' => 'E02004345',
        '3PJ' => 'E02004345',
        '3PL' => 'E02004345',
        '3PN' => 'E02004345',
        '3PP' => 'E02004345',
        '3PQ' => 'E02004345',
        '3PR' => 'E02004345',
        '3PS' => 'E02004345',
        '3PT' => 'E02004345',
        '3PU' => 'E02004345',
        '3PW' => 'E02004345',
        '3PX' => 'E02004345',
        '3PY' => 'E02004345',
        '3PZ' => 'E02004345',
        '3QG' => 'E02004345',
        '3QH' => 'E02004345',
        '3QL' => 'E02004345',
        '3QN' => 'E02004345',
        '3QP' => 'E02004345',
        '3QQ' => 'E02004345',
        '3QR' => 'E02004345',
        '3QS' => 'E02004345',
        '3QT' => 'E02004345',
        '3QU' => 'E02004345',
        '3QW' => 'E02004345',
        '3QX' => 'E02004345',
        '3QY' => 'E02004345',
        '3QZ' => 'E02004345',
        '3RG' => 'E02004345',
        '3RH' => 'E02004345',
        '3RJ' => 'E02004345',
        '3RL' => 'E02004345',
        '3RN' => 'E02004345',
        '3RP' => 'E02004345',
        '3RQ' => 'E02004345',
        '3RR' => 'E02004346',
        '3RS' => 'E02004346',
        '3RT' => 'E02004346',
        '3RW' => 'E02004345',
        '3RX' => 'E02004345',
        '3RY' => 'E02004345',
        '3RZ' => 'E02004345',
        '3SE' => 'E02002559',
        '3SF' => 'E02002559',
        '3SG' => 'E02002559',
        '3SH' => 'E02002559',
        '3SJ' => 'E02002559',
        '3SL' => 'E02002559',
        '3SN' => 'E02005782',
        '3SP' => 'E02005782',
        '3SQ' => 'E02002559',
        '3SR' => 'E02005782',
        '3SS' => 'E02005782',
        '3ST' => 'E02005782',
        '3SU' => 'E02005782',
        '3SW' => 'E02005782',
        '3SX' => 'E02005782',
        '3SY' => 'E02005782',
        '3SZ' => 'E02005782',
        '3TA' => 'E02002559',
        '3TH' => 'E02002559',
        '3TJ' => 'E02002559',
        '3TL' => 'E02002559',
        '3TN' => 'E02002559',
        '3TP' => 'E02002559',
        '3TR' => 'E02002559',
        '3TS' => 'E02002559',
        '3TT' => 'E02002559',
        '3TU' => 'E02002559',
        '3TW' => 'E02002559',
        '3TX' => 'E02002559',
        '3TY' => 'E02002559',
        '3TZ' => 'E02002559',
        '3UA' => 'E02002559',
        '3UB' => 'E02002559',
        '3UD' => 'E02002559',
        '3UE' => 'E02002559',
        '3UF' => 'E02004345',
        '3UG' => 'E02002559',
        '3UH' => 'E02002559',
        '3UJ' => 'E02002559',
        '3UL' => 'E02004345',
        '3UN' => 'E02004345',
        '3UP' => 'E02002559',
        '3UQ' => 'E02002559',
        '3UR' => 'E02002559',
        '3US' => 'E02002559',
        '3UW' => 'E02002559',
        '3UX' => 'E02004345',
        '3WX' => 'E02002566',
        '3WY' => 'E02002566',
        '3WZ' => 'E02002559',
        '3XA' => 'E02004345',
        '3XB' => 'E02004345',
        '3XD' => 'E02004345',
        '3XF' => 'E02004345',
        '3XG' => 'E02004345',
        '3XH' => 'E02004345',
        '3XQ' => 'E02004345',
        '3YH' => 'E02002566',
        '3YJ' => 'E02002566',
        '3YL' => 'E02002566',
        '3YN' => 'E02002566',
        '3YP' => 'E02004345',
        '3YR' => 'E02004345',
        '3YS' => 'E02004345',
        '3YT' => 'E02004345',
        '3YU' => 'E02004345',
        '3YW' => 'E02004345',
        '3YX' => 'E02004345',
        '3YY' => 'E02002566',
        '3YZ' => 'E02004345',
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
