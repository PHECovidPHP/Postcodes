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
final class BN7
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02004383',
        '1AB' => 'E02004383',
        '1AD' => 'E02004381',
        '1AE' => 'E02004381',
        '1AF' => 'E02004383',
        '1AG' => 'E02004381',
        '1AH' => 'E02004383',
        '1AJ' => 'E02004381',
        '1AL' => 'E02004381',
        '1AN' => 'E02004381',
        '1AP' => 'E02004381',
        '1AQ' => 'E02004381',
        '1AR' => 'E02004383',
        '1AS' => 'E02004383',
        '1AT' => 'E02004383',
        '1AU' => 'E02004381',
        '1AW' => 'E02004381',
        '1AX' => 'E02004383',
        '1AY' => 'E02004383',
        '1AZ' => 'E02004381',
        '1BA' => 'E02004381',
        '1BB' => 'E02004381',
        '1BD' => 'E02004381',
        '1BE' => 'E02004381',
        '1BF' => 'E02004381',
        '1BG' => 'E02004381',
        '1BH' => 'E02004383',
        '1BJ' => 'E02004381',
        '1BL' => 'E02004381',
        '1BN' => 'E02004381',
        '1BP' => 'E02004381',
        '1BQ' => 'E02004381',
        '1BS' => 'E02004381',
        '1BT' => 'E02004381',
        '1BU' => 'E02004381',
        '1BW' => 'E02004381',
        '1BX' => 'E02004381',
        '1BY' => 'E02004381',
        '1BZ' => 'E02004381',
        '1DA' => 'E02004381',
        '1DB' => 'E02004381',
        '1DD' => 'E02004381',
        '1DE' => 'E02004381',
        '1DF' => 'E02004383',
        '1DG' => 'E02004383',
        '1DH' => 'E02004383',
        '1DJ' => 'E02004383',
        '1DL' => 'E02004383',
        '1DN' => 'E02004383',
        '1DP' => 'E02004383',
        '1DQ' => 'E02004381',
        '1DR' => 'E02004383',
        '1DS' => 'E02004383',
        '1DT' => 'E02004383',
        '1DU' => 'E02004381',
        '1DW' => 'E02004381',
        '1DX' => 'E02004381',
        '1DY' => 'E02004381',
        '1DZ' => 'E02004383',
        '1EA' => 'E02004383',
        '1EB' => 'E02004383',
        '1ED' => 'E02004383',
        '1EE' => 'E02004383',
        '1EF' => 'E02004383',
        '1EG' => 'E02004383',
        '1EH' => 'E02004383',
        '1EJ' => 'E02004383',
        '1EL' => 'E02004383',
        '1EN' => 'E02004383',
        '1EP' => 'E02004383',
        '1EQ' => 'E02004383',
        '1ER' => 'E02004383',
        '1ES' => 'E02004383',
        '1ET' => 'E02004383',
        '1EU' => 'E02004383',
        '1EW' => 'E02004383',
        '1EX' => 'E02004383',
        '1EY' => 'E02004383',
        '1EZ' => 'E02004383',
        '1FA' => 'E02004383',
        '1FL' => 'E02004381',
        '1GA' => 'E02004381',
        '1GZ' => 'E02004381',
        '1HA' => 'E02004383',
        '1HB' => 'E02004383',
        '1HD' => 'E02004383',
        '1HE' => 'E02004381',
        '1HF' => 'E02004383',
        '1HG' => 'E02004383',
        '1HH' => 'E02004383',
        '1HJ' => 'E02004383',
        '1HL' => 'E02004383',
        '1HN' => 'E02004383',
        '1HP' => 'E02004383',
        '1HQ' => 'E02004383',
        '1HR' => 'E02004383',
        '1HS' => 'E02004383',
        '1HT' => 'E02004383',
        '1HU' => 'E02004383',
        '1HW' => 'E02004383',
        '1HX' => 'E02004383',
        '1HY' => 'E02004383',
        '1HZ' => 'E02004383',
        '1JA' => 'E02004383',
        '1JB' => 'E02004383',
        '1JD' => 'E02004383',
        '1JE' => 'E02004383',
        '1JF' => 'E02004383',
        '1JG' => 'E02004383',
        '1JH' => 'E02004383',
        '1JJ' => 'E02004383',
        '1JL' => 'E02004383',
        '1JN' => 'E02004383',
        '1JP' => 'E02004383',
        '1JQ' => 'E02004383',
        '1JR' => 'E02004383',
        '1JS' => 'E02004383',
        '1JT' => 'E02004383',
        '1JU' => 'E02004383',
        '1JW' => 'E02004381',
        '1JX' => 'E02004381',
        '1JY' => 'E02004383',
        '1JZ' => 'E02004383',
        '1LA' => 'E02004383',
        '1LB' => 'E02004383',
        '1LD' => 'E02004383',
        '1LE' => 'E02004383',
        '1LF' => 'E02004383',
        '1LG' => 'E02004383',
        '1LH' => 'E02004383',
        '1LJ' => 'E02004383',
        '1LL' => 'E02004381',
        '1LN' => 'E02004383',
        '1LP' => 'E02004383',
        '1LQ' => 'E02004381',
        '1LR' => 'E02004383',
        '1LS' => 'E02004383',
        '1LT' => 'E02004383',
        '1LU' => 'E02004383',
        '1LW' => 'E02004383',
        '1LX' => 'E02004383',
        '1LY' => 'E02004383',
        '1LZ' => 'E02004381',
        '1NA' => 'E02004383',
        '1NB' => 'E02004383',
        '1ND' => 'E02004383',
        '1NE' => 'E02004383',
        '1NF' => 'E02004383',
        '1NG' => 'E02004383',
        '1NH' => 'E02004383',
        '1NJ' => 'E02004383',
        '1NL' => 'E02004383',
        '1NN' => 'E02004383',
        '1NP' => 'E02004383',
        '1NQ' => 'E02004383',
        '1NR' => 'E02004383',
        '1NS' => 'E02004383',
        '1NT' => 'E02004383',
        '1NU' => 'E02004383',
        '1NW' => 'E02004383',
        '1NX' => 'E02004383',
        '1NY' => 'E02004383',
        '1NZ' => 'E02004383',
        '1PA' => 'E02004383',
        '1PB' => 'E02004383',
        '1PD' => 'E02004383',
        '1PE' => 'E02004383',
        '1PF' => 'E02004383',
        '1PG' => 'E02004383',
        '1PH' => 'E02004383',
        '1PJ' => 'E02004381',
        '1PL' => 'E02004381',
        '1PN' => 'E02004381',
        '1PP' => 'E02004381',
        '1PQ' => 'E02004383',
        '1PR' => 'E02004381',
        '1PS' => 'E02004381',
        '1PT' => 'E02004381',
        '1PU' => 'E02004381',
        '1PW' => 'E02004383',
        '1PX' => 'E02004381',
        '1PY' => 'E02004381',
        '1PZ' => 'E02004381',
        '1QA' => 'E02004383',
        '1QB' => 'E02004383',
        '1QD' => 'E02004383',
        '1QE' => 'E02004383',
        '1QF' => 'E02004383',
        '1QG' => 'E02004383',
        '1QH' => 'E02004383',
        '1QJ' => 'E02004381',
        '1QL' => 'E02004381',
        '1QN' => 'E02004381',
        '1QP' => 'E02004383',
        '1QQ' => 'E02004383',
        '1QR' => 'E02004383',
        '1QS' => 'E02004381',
        '1QT' => 'E02004381',
        '1QU' => 'E02004381',
        '1QW' => 'E02004381',
        '1QX' => 'E02004381',
        '1QY' => 'E02004381',
        '1QZ' => 'E02004383',
        '1RA' => 'E02004383',
        '1RB' => 'E02004383',
        '1RD' => 'E02004381',
        '1RE' => 'E02004383',
        '1RF' => 'E02004381',
        '1RG' => 'E02004383',
        '1RH' => 'E02004383',
        '1RJ' => 'E02004383',
        '1RL' => 'E02004383',
        '1RN' => 'E02004383',
        '1RP' => 'E02004383',
        '1RQ' => 'E02004383',
        '1RR' => 'E02004383',
        '1RS' => 'E02004383',
        '1RT' => 'E02004383',
        '1RU' => 'E02004383',
        '1RW' => 'E02004381',
        '1RX' => 'E02004383',
        '1RY' => 'E02004383',
        '1RZ' => 'E02004383',
        '1SA' => 'E02004383',
        '1SB' => 'E02004383',
        '1SD' => 'E02004383',
        '1SE' => 'E02004383',
        '1SF' => 'E02004381',
        '1SG' => 'E02004381',
        '1SH' => 'E02004383',
        '1SJ' => 'E02004383',
        '1SL' => 'E02004383',
        '1SN' => 'E02004383',
        '1SP' => 'E02004383',
        '1SQ' => 'E02004383',
        '1SR' => 'E02004383',
        '1SS' => 'E02004383',
        '1ST' => 'E02004383',
        '1SU' => 'E02004383',
        '1SW' => 'E02004381',
        '1SX' => 'E02004383',
        '1SY' => 'E02004383',
        '1SZ' => 'E02004383',
        '1TB' => 'E02004383',
        '1TD' => 'E02004383',
        '1TE' => 'E02004381',
        '1TF' => 'E02004381',
        '1TG' => 'E02004383',
        '1TH' => 'E02004383',
        '1TJ' => 'E02004383',
        '1TL' => 'E02004383',
        '1TN' => 'E02004383',
        '1TP' => 'E02004383',
        '1TQ' => 'E02004381',
        '1TR' => 'E02004383',
        '1TS' => 'E02004383',
        '1TT' => 'E02004383',
        '1TU' => 'E02004383',
        '1TW' => 'E02004381',
        '1TX' => 'E02004383',
        '1TY' => 'E02004383',
        '1TZ' => 'E02004383',
        '1UA' => 'E02004383',
        '1UB' => 'E02004383',
        '1UD' => 'E02004383',
        '1UE' => 'E02004383',
        '1UF' => 'E02004383',
        '1UG' => 'E02004383',
        '1UH' => 'E02004383',
        '1UJ' => 'E02004383',
        '1UL' => 'E02004383',
        '1UN' => 'E02004383',
        '1UP' => 'E02004383',
        '1UQ' => 'E02004383',
        '1UR' => 'E02004380',
        '1US' => 'E02004383',
        '1UT' => 'E02004381',
        '1UU' => 'E02004381',
        '1UW' => 'E02004383',
        '1UX' => 'E02004381',
        '1UY' => 'E02004381',
        '1UZ' => 'E02004381',
        '1WA' => 'E02004381',
        '1WB' => 'E02004381',
        '1WD' => 'E02004381',
        '1WE' => 'E02004381',
        '1WF' => 'E02004381',
        '1WG' => 'E02004381',
        '1WH' => 'E02004381',
        '1WJ' => 'E02004381',
        '1WL' => 'E02004381',
        '1WQ' => 'E02004381',
        '1WR' => 'E02004381',
        '1WS' => 'E02004381',
        '1WT' => 'E02004381',
        '1WU' => 'E02004381',
        '1WW' => 'E02004381',
        '1WX' => 'E02004383',
        '1WY' => 'E02004383',
        '1WZ' => 'E02004383',
        '1XA' => 'E02004383',
        '1XB' => 'E02004383',
        '1XD' => 'E02004383',
        '1XE' => 'E02004383',
        '1XF' => 'E02004383',
        '1XG' => 'E02004383',
        '1XH' => 'E02004383',
        '1XJ' => 'E02004383',
        '1XL' => 'E02004381',
        '1XN' => 'E02004383',
        '1XP' => 'E02004383',
        '1XQ' => 'E02004383',
        '1XR' => 'E02004383',
        '1XS' => 'E02004381',
        '1XT' => 'E02004381',
        '1XU' => 'E02004381',
        '1XW' => 'E02004383',
        '1XX' => 'E02004381',
        '1XY' => 'E02004383',
        '1XZ' => 'E02004381',
        '1YA' => 'E02004383',
        '1YB' => 'E02004381',
        '1YD' => 'E02004383',
        '1YE' => 'E02004381',
        '1YF' => 'E02004381',
        '1YG' => 'E02004381',
        '1YH' => 'E02004381',
        '1YJ' => 'E02004381',
        '1YL' => 'E02004381',
        '1YN' => 'E02004381',
        '1YP' => 'E02004381',
        '1YQ' => 'E02004381',
        '1YR' => 'E02004381',
        '1YS' => 'E02004381',
        '1YT' => 'E02004381',
        '1YU' => 'E02004381',
        '1YW' => 'E02004381',
        '1YX' => 'E02004381',
        '1YY' => 'E02004381',
        '1YZ' => 'E02004381',
        '2AA' => 'E02004381',
        '2AB' => 'E02004381',
        '2AD' => 'E02004381',
        '2AE' => 'E02004381',
        '2AF' => 'E02004381',
        '2AG' => 'E02004381',
        '2AH' => 'E02004381',
        '2AJ' => 'E02004381',
        '2AL' => 'E02004381',
        '2AN' => 'E02004381',
        '2AP' => 'E02004381',
        '2AQ' => 'E02004381',
        '2AR' => 'E02004381',
        '2AS' => 'E02004381',
        '2AT' => 'E02004381',
        '2AU' => 'E02004381',
        '2AW' => 'E02004381',
        '2AX' => 'E02004381',
        '2AY' => 'E02004381',
        '2AZ' => 'E02004381',
        '2BA' => 'E02004381',
        '2BB' => 'E02004381',
        '2BD' => 'E02004381',
        '2BE' => 'E02004381',
        '2BF' => 'E02004381',
        '2BG' => 'E02004381',
        '2BH' => 'E02004381',
        '2BJ' => 'E02004381',
        '2BL' => 'E02004381',
        '2BN' => 'E02004381',
        '2BP' => 'E02004381',
        '2BQ' => 'E02004381',
        '2BS' => 'E02004381',
        '2BT' => 'E02004381',
        '2BU' => 'E02004381',
        '2BW' => 'E02004381',
        '2BX' => 'E02004381',
        '2BY' => 'E02004381',
        '2BZ' => 'E02004381',
        '2DA' => 'E02004381',
        '2DB' => 'E02004383',
        '2DD' => 'E02004381',
        '2DE' => 'E02004381',
        '2DF' => 'E02004381',
        '2DG' => 'E02004381',
        '2DH' => 'E02004381',
        '2DJ' => 'E02004381',
        '2DL' => 'E02004381',
        '2DN' => 'E02004381',
        '2DP' => 'E02004381',
        '2DQ' => 'E02004381',
        '2DR' => 'E02004381',
        '2DS' => 'E02004381',
        '2DT' => 'E02004381',
        '2DU' => 'E02004381',
        '2DW' => 'E02004381',
        '2DX' => 'E02004381',
        '2DY' => 'E02004381',
        '2DZ' => 'E02004381',
        '2EA' => 'E02004381',
        '2EB' => 'E02004381',
        '2ED' => 'E02004381',
        '2EE' => 'E02004381',
        '2EF' => 'E02004381',
        '2EG' => 'E02004381',
        '2EH' => 'E02004381',
        '2EJ' => 'E02004381',
        '2EL' => 'E02004381',
        '2EN' => 'E02004381',
        '2EP' => 'E02004381',
        '2EQ' => 'E02004381',
        '2ER' => 'E02004381',
        '2ES' => 'E02004381',
        '2ET' => 'E02004381',
        '2EU' => 'E02004381',
        '2EW' => 'E02004381',
        '2EX' => 'E02004381',
        '2EY' => 'E02004381',
        '2EZ' => 'E02004381',
        '2FA' => 'E02004381',
        '2FB' => 'E02004381',
        '2FD' => 'E02004381',
        '2FE' => 'E02004381',
        '2FF' => 'E02004381',
        '2FG' => 'E02004381',
        '2FH' => 'E02004381',
        '2FJ' => 'E02004381',
        '2FL' => 'E02004381',
        '2FN' => 'E02004381',
        '2FP' => 'E02004381',
        '2FQ' => 'E02004381',
        '2FR' => 'E02004381',
        '2FS' => 'E02004381',
        '2FT' => 'E02004381',
        '2FW' => 'E02004381',
        '2FZ' => 'E02004381',
        '2GA' => 'E02004381',
        '2GB' => 'E02004381',
        '2GD' => 'E02004381',
        '2GG' => 'E02004381',
        '2GH' => 'E02004381',
        '2GJ' => 'E02004381',
        '2GL' => 'E02004381',
        '2GN' => 'E02004381',
        '2GP' => 'E02004381',
        '2GQ' => 'E02004381',
        '2GR' => 'E02004381',
        '2GS' => 'E02004381',
        '2GT' => 'E02004381',
        '2GU' => 'E02004381',
        '2GW' => 'E02004381',
        '2GX' => 'E02004381',
        '2GY' => 'E02004381',
        '2GZ' => 'E02004381',
        '2HA' => 'E02004381',
        '2HB' => 'E02004381',
        '2HD' => 'E02004381',
        '2HE' => 'E02004381',
        '2HF' => 'E02004381',
        '2HG' => 'E02004381',
        '2HH' => 'E02004381',
        '2HJ' => 'E02004381',
        '2HL' => 'E02004381',
        '2HN' => 'E02004381',
        '2HP' => 'E02004381',
        '2HQ' => 'E02004381',
        '2HR' => 'E02004381',
        '2HS' => 'E02004381',
        '2HT' => 'E02004381',
        '2HU' => 'E02004381',
        '2HW' => 'E02004381',
        '2HX' => 'E02004381',
        '2HY' => 'E02004381',
        '2HZ' => 'E02004381',
        '2JA' => 'E02004381',
        '2JB' => 'E02004381',
        '2JD' => 'E02004381',
        '2JE' => 'E02004381',
        '2JF' => 'E02004381',
        '2JG' => 'E02004381',
        '2JH' => 'E02004381',
        '2JJ' => 'E02004381',
        '2JL' => 'E02004381',
        '2JN' => 'E02004381',
        '2JP' => 'E02004381',
        '2JQ' => 'E02004381',
        '2JR' => 'E02004381',
        '2JS' => 'E02004381',
        '2JT' => 'E02004381',
        '2JU' => 'E02004381',
        '2JW' => 'E02004381',
        '2JX' => 'E02004381',
        '2JY' => 'E02004381',
        '2JZ' => 'E02004381',
        '2LA' => 'E02004381',
        '2LB' => 'E02004381',
        '2LD' => 'E02004381',
        '2LE' => 'E02004381',
        '2LF' => 'E02004381',
        '2LG' => 'E02004381',
        '2LH' => 'E02004381',
        '2LJ' => 'E02004381',
        '2LL' => 'E02004381',
        '2LN' => 'E02004381',
        '2LP' => 'E02004381',
        '2LQ' => 'E02004381',
        '2LR' => 'E02004381',
        '2LS' => 'E02004381',
        '2LT' => 'E02004381',
        '2LU' => 'E02004381',
        '2LW' => 'E02004381',
        '2LX' => 'E02004381',
        '2LY' => 'E02004381',
        '2LZ' => 'E02004381',
        '2NA' => 'E02004381',
        '2NB' => 'E02004381',
        '2ND' => 'E02004381',
        '2NE' => 'E02004381',
        '2NF' => 'E02004381',
        '2NG' => 'E02004381',
        '2NH' => 'E02004381',
        '2NJ' => 'E02004381',
        '2NL' => 'E02004381',
        '2NN' => 'E02004381',
        '2NP' => 'E02004381',
        '2NQ' => 'E02004381',
        '2NR' => 'E02004381',
        '2NS' => 'E02004381',
        '2NT' => 'E02004381',
        '2NU' => 'E02004381',
        '2NW' => 'E02004381',
        '2NX' => 'E02004381',
        '2NY' => 'E02004381',
        '2NZ' => 'E02004381',
        '2PA' => 'E02004381',
        '2PB' => 'E02004381',
        '2PD' => 'E02004381',
        '2PE' => 'E02004381',
        '2PF' => 'E02004381',
        '2PG' => 'E02004381',
        '2PH' => 'E02004381',
        '2PJ' => 'E02004381',
        '2PL' => 'E02004381',
        '2PN' => 'E02004381',
        '2PP' => 'E02004381',
        '2PQ' => 'E02004381',
        '2PR' => 'E02004381',
        '2PS' => 'E02004381',
        '2PT' => 'E02004381',
        '2PU' => 'E02004381',
        '2PW' => 'E02004381',
        '2PX' => 'E02004381',
        '2PY' => 'E02004381',
        '2PZ' => 'E02004381',
        '2QA' => 'E02004381',
        '2QB' => 'E02004381',
        '2QD' => 'E02004381',
        '2QE' => 'E02004381',
        '2QF' => 'E02004381',
        '2QG' => 'E02004381',
        '2QH' => 'E02004381',
        '2QJ' => 'E02004381',
        '2QL' => 'E02004381',
        '2QN' => 'E02004381',
        '2QP' => 'E02004381',
        '2QQ' => 'E02004381',
        '2QR' => 'E02004381',
        '2QS' => 'E02004381',
        '2QT' => 'E02004381',
        '2QU' => 'E02004381',
        '2QW' => 'E02004381',
        '2QX' => 'E02004381',
        '2QY' => 'E02004381',
        '2QZ' => 'E02004381',
        '2RA' => 'E02004381',
        '2RB' => 'E02004381',
        '2RD' => 'E02004381',
        '2RE' => 'E02004381',
        '2RF' => 'E02004381',
        '2RG' => 'E02004381',
        '2RH' => 'E02004381',
        '2RJ' => 'E02004381',
        '2RL' => 'E02004381',
        '2RN' => 'E02004381',
        '2RP' => 'E02004381',
        '2RQ' => 'E02004381',
        '2RR' => 'E02004381',
        '2RS' => 'E02004381',
        '2RT' => 'E02004381',
        '2RU' => 'E02004381',
        '2RW' => 'E02004381',
        '2RX' => 'E02004381',
        '2RY' => 'E02004381',
        '2RZ' => 'E02004381',
        '2SA' => 'E02004381',
        '2SB' => 'E02004381',
        '2SD' => 'E02004381',
        '2SE' => 'E02004381',
        '2SF' => 'E02004381',
        '2SG' => 'E02004381',
        '2SH' => 'E02004381',
        '2SJ' => 'E02004381',
        '2SL' => 'E02004381',
        '2SN' => 'E02004381',
        '2SP' => 'E02004381',
        '2SQ' => 'E02004381',
        '2SR' => 'E02004381',
        '2SS' => 'E02004381',
        '2ST' => 'E02004381',
        '2SU' => 'E02004381',
        '2SW' => 'E02004381',
        '2SX' => 'E02004381',
        '2SY' => 'E02004381',
        '2SZ' => 'E02004381',
        '2TA' => 'E02004381',
        '2TB' => 'E02004381',
        '2TD' => 'E02004381',
        '2TE' => 'E02004381',
        '2TF' => 'E02004381',
        '2TG' => 'E02004381',
        '2TH' => 'E02004381',
        '2TJ' => 'E02004381',
        '2TL' => 'E02004381',
        '2TN' => 'E02004381',
        '2TP' => 'E02004381',
        '2TQ' => 'E02004381',
        '2TR' => 'E02004381',
        '2TS' => 'E02004381',
        '2TT' => 'E02004381',
        '2TU' => 'E02004381',
        '2TW' => 'E02004381',
        '2TX' => 'E02004381',
        '2TY' => 'E02004381',
        '2TZ' => 'E02004381',
        '2UA' => 'E02004381',
        '2UB' => 'E02004381',
        '2UD' => 'E02004381',
        '2UE' => 'E02004381',
        '2UF' => 'E02004381',
        '2UG' => 'E02004381',
        '2UH' => 'E02004381',
        '2UJ' => 'E02004383',
        '2UL' => 'E02004381',
        '2UN' => 'E02004381',
        '2UP' => 'E02004381',
        '2UQ' => 'E02004381',
        '2UR' => 'E02004383',
        '2US' => 'E02004381',
        '2UT' => 'E02004383',
        '2UU' => 'E02004383',
        '2UW' => 'E02004383',
        '2UX' => 'E02004383',
        '2UY' => 'E02004383',
        '2UZ' => 'E02004381',
        '2WA' => 'E02004381',
        '2WB' => 'E02004381',
        '2WD' => 'E02004381',
        '2WE' => 'E02004381',
        '2WF' => 'E02004381',
        '2WG' => 'E02004381',
        '2WH' => 'E02004381',
        '2WJ' => 'E02004381',
        '2WL' => 'E02004381',
        '2WN' => 'E02004381',
        '2WP' => 'E02004381',
        '2WQ' => 'E02004381',
        '2WR' => 'E02004381',
        '2WS' => 'E02004381',
        '2WT' => 'E02004381',
        '2WU' => 'E02004381',
        '2WX' => 'E02004381',
        '2WY' => 'E02004381',
        '2WZ' => 'E02004381',
        '2XA' => 'E02004383',
        '2XB' => 'E02004383',
        '2XD' => 'E02004383',
        '2XE' => 'E02004383',
        '2XF' => 'E02004383',
        '2XG' => 'E02004383',
        '2XH' => 'E02004383',
        '2XJ' => 'E02004383',
        '2XL' => 'E02004381',
        '2XN' => 'E02004383',
        '2XP' => 'E02004383',
        '2XQ' => 'E02004383',
        '2XR' => 'E02004383',
        '2XS' => 'E02004383',
        '2XT' => 'E02004381',
        '2XU' => 'E02004381',
        '2XW' => 'E02004381',
        '2XX' => 'E02004381',
        '2XY' => 'E02004381',
        '2XZ' => 'E02004381',
        '2YA' => 'E02004381',
        '2YB' => 'E02004381',
        '2YD' => 'E02004381',
        '2YF' => 'E02004381',
        '2YT' => 'E02004381',
        '2YY' => 'E02004383',
        '2ZT' => 'E02004381',
        '2ZW' => 'E02004381',
        '2ZX' => 'E02004383',
        '3AA' => 'E02004380',
        '3AB' => 'E02004380',
        '3AD' => 'E02004380',
        '3AE' => 'E02004380',
        '3AF' => 'E02004380',
        '3AG' => 'E02004380',
        '3AH' => 'E02004380',
        '3AJ' => 'E02004380',
        '3AL' => 'E02004380',
        '3AN' => 'E02004380',
        '3AP' => 'E02004380',
        '3AQ' => 'E02004380',
        '3AR' => 'E02004380',
        '3AS' => 'E02004380',
        '3AT' => 'E02004380',
        '3AU' => 'E02004380',
        '3AW' => 'E02004380',
        '3AX' => 'E02004380',
        '3AY' => 'E02004380',
        '3AZ' => 'E02004380',
        '3BA' => 'E02004380',
        '3BB' => 'E02004380',
        '3BD' => 'E02004380',
        '3BE' => 'E02004380',
        '3BF' => 'E02004381',
        '3BG' => 'E02004380',
        '3BH' => 'E02004380',
        '3BJ' => 'E02004380',
        '3BL' => 'E02004380',
        '3BN' => 'E02004380',
        '3BP' => 'E02004380',
        '3BQ' => 'E02004380',
        '3BS' => 'E02004380',
        '3BT' => 'E02004380',
        '3BU' => 'E02004380',
        '3BW' => 'E02004380',
        '3BX' => 'E02004380',
        '3BY' => 'E02004380',
        '3BZ' => 'E02004380',
        '3DA' => 'E02004380',
        '3DB' => 'E02004380',
        '3DD' => 'E02004380',
        '3DE' => 'E02004380',
        '3DF' => 'E02004380',
        '3DG' => 'E02004380',
        '3DH' => 'E02004380',
        '3DJ' => 'E02004381',
        '3DL' => 'E02004380',
        '3DN' => 'E02004380',
        '3DP' => 'E02004380',
        '3DQ' => 'E02004380',
        '3DR' => 'E02004380',
        '3DS' => 'E02004380',
        '3DT' => 'E02004380',
        '3DU' => 'E02004380',
        '3DW' => 'E02004381',
        '3DX' => 'E02004380',
        '3DY' => 'E02004380',
        '3DZ' => 'E02004380',
        '3EA' => 'E02004380',
        '3EB' => 'E02004380',
        '3ED' => 'E02004380',
        '3EE' => 'E02004380',
        '3EF' => 'E02004380',
        '3EG' => 'E02004380',
        '3EH' => 'E02004380',
        '3EJ' => 'E02004380',
        '3EL' => 'E02004380',
        '3EN' => 'E02004380',
        '3EP' => 'E02004380',
        '3EQ' => 'E02004380',
        '3ER' => 'E02004380',
        '3ES' => 'E02004380',
        '3ET' => 'E02004380',
        '3EU' => 'E02004380',
        '3EW' => 'E02004380',
        '3EX' => 'E02004380',
        '3EY' => 'E02004380',
        '3EZ' => 'E02004380',
        '3FA' => 'E02004380',
        '3FB' => 'E02004380',
        '3FD' => 'E02004380',
        '3FE' => 'E02004380',
        '3HA' => 'E02004380',
        '3HB' => 'E02004380',
        '3HD' => 'E02004380',
        '3HE' => 'E02004380',
        '3HF' => 'E02004380',
        '3HG' => 'E02004380',
        '3HH' => 'E02004380',
        '3HJ' => 'E02004380',
        '3HL' => 'E02004380',
        '3HN' => 'E02004380',
        '3HP' => 'E02004380',
        '3HQ' => 'E02004380',
        '3HR' => 'E02004380',
        '3HS' => 'E02004380',
        '3HT' => 'E02004380',
        '3HU' => 'E02004380',
        '3HW' => 'E02004380',
        '3HX' => 'E02004380',
        '3HY' => 'E02004384',
        '3HZ' => 'E02004384',
        '3JA' => 'E02004380',
        '3JB' => 'E02004380',
        '3JD' => 'E02004380',
        '3JE' => 'E02004381',
        '3JF' => 'E02004380',
        '3JG' => 'E02004380',
        '3JH' => 'E02004383',
        '3JJ' => 'E02004380',
        '3JL' => 'E02004380',
        '3JN' => 'E02004380',
        '3JP' => 'E02004380',
        '3JQ' => 'E02004380',
        '3JR' => 'E02004380',
        '3JS' => 'E02004380',
        '3JT' => 'E02004380',
        '3JU' => 'E02004380',
        '3JW' => 'E02004380',
        '3JX' => 'E02004380',
        '3JY' => 'E02004380',
        '3JZ' => 'E02004380',
        '3LA' => 'E02004380',
        '3LB' => 'E02004380',
        '3LD' => 'E02004380',
        '3LE' => 'E02004380',
        '3LF' => 'E02004380',
        '3LG' => 'E02004380',
        '3LH' => 'E02004380',
        '3LJ' => 'E02004380',
        '3LL' => 'E02004380',
        '3LN' => 'E02004380',
        '3LP' => 'E02004380',
        '3LQ' => 'E02004380',
        '3LR' => 'E02004381',
        '3LS' => 'E02004381',
        '3LT' => 'E02004380',
        '3LW' => 'E02004380',
        '3LZ' => 'E02004381',
        '3NA' => 'E02004383',
        '3NB' => 'E02004383',
        '3ND' => 'E02004383',
        '3NE' => 'E02004380',
        '3NF' => 'E02004380',
        '3NG' => 'E02004381',
        '3NH' => 'E02004380',
        '3NJ' => 'E02004380',
        '3NL' => 'E02004380',
        '3NN' => 'E02004381',
        '3NP' => 'E02004380',
        '3NQ' => 'E02004381',
        '3NR' => 'E02004380',
        '3NS' => 'E02004380',
        '3NT' => 'E02004380',
        '3NU' => 'E02004380',
        '3NX' => 'E02004380',
        '3NY' => 'E02004380',
        '3NZ' => 'E02004381',
        '3PA' => 'E02004380',
        '3PB' => 'E02004380',
        '3PD' => 'E02004380',
        '3PE' => 'E02004380',
        '3PF' => 'E02004380',
        '3PG' => 'E02004380',
        '3PH' => 'E02004380',
        '3PJ' => 'E02004380',
        '3PL' => 'E02004380',
        '3PN' => 'E02004383',
        '3PP' => 'E02004383',
        '3PQ' => 'E02004380',
        '3PR' => 'E02004380',
        '3PS' => 'E02004383',
        '3PT' => 'E02004379',
        '3PU' => 'E02004379',
        '3PW' => 'E02004380',
        '3PX' => 'E02004379',
        '3PY' => 'E02004380',
        '3PZ' => 'E02004380',
        '3QA' => 'E02004379',
        '3QB' => 'E02004379',
        '3QD' => 'E02004379',
        '3QE' => 'E02004379',
        '3QF' => 'E02004379',
        '3QG' => 'E02004379',
        '3QH' => 'E02004379',
        '3QJ' => 'E02004380',
        '3QL' => 'E02004380',
        '3QN' => 'E02004380',
        '3QP' => 'E02004379',
        '3QQ' => 'E02004380',
        '3QR' => 'E02004380',
        '3QS' => 'E02004380',
        '3QT' => 'E02004380',
        '3QU' => 'E02004380',
        '3QW' => 'E02004379',
        '3QX' => 'E02004380',
        '3QY' => 'E02004380',
        '3RA' => 'E02004380',
        '3SL' => 'E02004380',
        '3WA' => 'E02004380',
        '3WB' => 'E02004380',
        '3WD' => 'E02004381',
        '3WE' => 'E02004381',
        '3WF' => 'E02004381',
        '3WG' => 'E02004381',
        '3WH' => 'E02004380',
        '3WJ' => 'E02004381',
        '3WL' => 'E02004381',
        '3WN' => 'E02004380',
        '3WP' => 'E02004381',
        '3WQ' => 'E02004381',
        '3WR' => 'E02004381',
        '3WY' => 'E02004380',
        '3WZ' => 'E02004381',
        '3XA' => 'E02004380',
        '3XH' => 'E02004381',
        '3YQ' => 'E02004381',
        '3YT' => 'E02004381',
        '3ZA' => 'E02004381',
        '3ZB' => 'E02004380',
        '3ZD' => 'E02004380',
        '3ZE' => 'E02004380',
        '3ZF' => 'E02004380',
        '3ZG' => 'E02004380',
        '3ZJ' => 'E02004380',
        '3ZL' => 'E02004380',
        '3ZN' => 'E02004380',
        '9AA' => 'E02004381',
        '9AB' => 'E02004381',
        '9AD' => 'E02004381',
        '9AE' => 'E02004381',
        '9AF' => 'E02004381',
        '9AG' => 'E02004381',
        '9AH' => 'E02004383',
        '9AJ' => 'E02004381',
        '9AL' => 'E02004381',
        '9AN' => 'E02004381',
        '9AP' => 'E02004381',
        '9AQ' => 'E02004381',
        '9AR' => 'E02004381',
        '9AS' => 'E02004381',
        '9AT' => 'E02004381',
        '9AU' => 'E02004381',
        '9AW' => 'E02004381',
        '9AX' => 'E02004381',
        '9AY' => 'E02004381',
        '9AZ' => 'E02004381',
        '9BA' => 'E02004381',
        '9BB' => 'E02004381',
        '9BD' => 'E02004381',
        '9BE' => 'E02004381',
        '9BF' => 'E02004381',
        '9BG' => 'E02004381',
        '9BH' => 'E02004381',
        '9BJ' => 'E02004381',
        '9BL' => 'E02004381',
        '9BN' => 'E02004381',
        '9BP' => 'E02004381',
        '9BQ' => 'E02004381',
        '9BR' => 'E02004381',
        '9BS' => 'E02004381',
        '9BT' => 'E02004381',
        '9BU' => 'E02004381',
        '9BW' => 'E02004381',
        '9BX' => 'E02004381',
        '9BY' => 'E02004381',
        '9BZ' => 'E02004381',
        '9DA' => 'E02004381',
        '9DB' => 'E02004381',
        '9DD' => 'E02004381',
        '9DE' => 'E02004381',
        '9DF' => 'E02004381',
        '9DG' => 'E02004381',
        '9DH' => 'E02004381',
        '9DJ' => 'E02004381',
        '9DL' => 'E02004381',
        '9DN' => 'E02004381',
        '9DP' => 'E02004381',
        '9DQ' => 'E02004381',
        '9DR' => 'E02004381',
        '9DS' => 'E02004381',
        '9DT' => 'E02004381',
        '9DU' => 'E02004381',
        '9DW' => 'E02004381',
        '9DX' => 'E02004381',
        '9DY' => 'E02004381',
        '9DZ' => 'E02004381',
        '9EA' => 'E02004381',
        '9EB' => 'E02004381',
        '9ED' => 'E02004381',
        '9EE' => 'E02004381',
        '9EF' => 'E02004381',
        '9EG' => 'E02004381',
        '9EH' => 'E02004381',
        '9EJ' => 'E02004381',
        '9EL' => 'E02004381',
        '9EN' => 'E02004381',
        '9EP' => 'E02004381',
        '9EQ' => 'E02004381',
        '9ER' => 'E02004381',
        '9ES' => 'E02004381',
        '9ET' => 'E02004381',
        '9EU' => 'E02004381',
        '9EW' => 'E02004381',
        '9EX' => 'E02004381',
        '9EY' => 'E02004381',
        '9EZ' => 'E02004381',
        '9FA' => 'E02004381',
        '9FB' => 'E02004381',
        '9FD' => 'E02004381',
        '9FE' => 'E02004381',
        '9FF' => 'E02004381',
        '9FG' => 'E02004381',
        '9FH' => 'E02004381',
        '9FJ' => 'E02004381',
        '9FL' => 'E02004381',
        '9FN' => 'E02004381',
        '9FP' => 'E02004381',
        '9FQ' => 'E02004381',
        '9FR' => 'E02004381',
        '9FT' => 'E02004381',
        '9FU' => 'E02004381',
        '9FW' => 'E02004381',
        '9FX' => 'E02004381',
        '9FY' => 'E02004381',
        '9FZ' => 'E02004381',
        '9GA' => 'E02004381',
        '9GB' => 'E02004381',
        '9GD' => 'E02004381',
        '9GE' => 'E02004381',
        '9GF' => 'E02004381',
        '9GG' => 'E02004381',
        '9GH' => 'E02004381',
        '9GJ' => 'E02004381',
        '9GL' => 'E02004381',
        '9GN' => 'E02004381',
        '9GP' => 'E02004381',
        '9GQ' => 'E02004381',
        '9GR' => 'E02004381',
        '9GS' => 'E02004381',
        '9GT' => 'E02004381',
        '9GU' => 'E02004381',
        '9GW' => 'E02004381',
        '9GX' => 'E02004381',
        '9GY' => 'E02004381',
        '9GZ' => 'E02004381',
        '9HA' => 'E02004381',
        '9HB' => 'E02004381',
        '9HD' => 'E02004381',
        '9HE' => 'E02004381',
        '9HF' => 'E02004381',
        '9HG' => 'E02004381',
        '9HH' => 'E02004381',
        '9HJ' => 'E02004381',
        '9HL' => 'E02004381',
        '9HN' => 'E02004381',
        '9HP' => 'E02004381',
        '9HQ' => 'E02004381',
        '9HR' => 'E02004381',
        '9HS' => 'E02004381',
        '9HT' => 'E02004381',
        '9HU' => 'E02004381',
        '9HW' => 'E02004381',
        '9HX' => 'E02004381',
        '9HY' => 'E02004381',
        '9HZ' => 'E02004381',
        '9JA' => 'E02004381',
        '9JB' => 'E02004381',
        '9JD' => 'E02004381',
        '9JE' => 'E02004381',
        '9JF' => 'E02004381',
        '9JG' => 'E02004381',
        '9JH' => 'E02004381',
        '9JJ' => 'E02004381',
        '9JL' => 'E02004381',
        '9JN' => 'E02004381',
        '9JP' => 'E02004381',
        '9JQ' => 'E02004381',
        '9JR' => 'E02004381',
        '9JT' => 'E02004381',
        '9JU' => 'E02004381',
        '9JW' => 'E02004381',
        '9JX' => 'E02004381',
        '9JY' => 'E02004381',
        '9JZ' => 'E02004381',
        '9LA' => 'E02004381',
        '9LB' => 'E02004381',
        '9LD' => 'E02004381',
        '9LE' => 'E02004381',
        '9LF' => 'E02004381',
        '9LG' => 'E02004381',
        '9LH' => 'E02004381',
        '9LJ' => 'E02004381',
        '9LL' => 'E02004381',
        '9LN' => 'E02004381',
        '9LP' => 'E02004381',
        '9LQ' => 'E02004381',
        '9LS' => 'E02004381',
        '9LT' => 'E02004381',
        '9LU' => 'E02004381',
        '9LW' => 'E02004381',
        '9LX' => 'E02004381',
        '9LY' => 'E02004381',
        '9LZ' => 'E02004381',
        '9NA' => 'E02004381',
        '9NB' => 'E02004381',
        '9ND' => 'E02004381',
        '9NE' => 'E02004381',
        '9NG' => 'E02004381',
        '9NH' => 'E02004381',
        '9NJ' => 'E02004381',
        '9NL' => 'E02004381',
        '9NN' => 'E02004381',
        '9NP' => 'E02004381',
        '9NQ' => 'E02004381',
        '9NR' => 'E02004381',
        '9SA' => 'E02004383',
        '9SB' => 'E02004381',
        '9SD' => 'E02004381',
        '9SE' => 'E02004381',
        '9SF' => 'E02004381',
        '9SG' => 'E02004381',
        '9SH' => 'E02004381',
        '9SJ' => 'E02004381',
        '9SL' => 'E02004381',
        '9SN' => 'E02004381',
        '9SP' => 'E02004381',
        '9SQ' => 'E02004381',
        '9SR' => 'E02004381',
        '9SS' => 'E02004381',
        '9ST' => 'E02004381',
        '9SU' => 'E02004381',
        '9SW' => 'E02004381',
        '9SX' => 'E02004381',
        '9SY' => 'E02004381',
        '9SZ' => 'E02004381',
        '9TA' => 'E02004381',
        '9TB' => 'E02004381',
        '9TD' => 'E02004381',
        '9TE' => 'E02004381',
        '9TF' => 'E02004381',
        '9TG' => 'E02004381',
        '9TH' => 'E02004381',
        '9TJ' => 'E02004383',
        '9TL' => 'E02004381',
        '9TN' => 'E02004381',
        '9TP' => 'E02004381',
        '9TQ' => 'E02004381',
        '9TR' => 'E02004381',
        '9TS' => 'E02004381',
        '9YW' => 'E02004381',
        '9ZY' => 'E02004381',
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
