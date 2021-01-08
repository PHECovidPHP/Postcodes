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
final class EX15
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02004170',
        '1AB' => 'E02004170',
        '1AD' => 'E02004170',
        '1AE' => 'E02004170',
        '1AF' => 'E02004170',
        '1AG' => 'E02004170',
        '1AH' => 'E02004170',
        '1AJ' => 'E02004170',
        '1AL' => 'E02004170',
        '1AN' => 'E02004170',
        '1AP' => 'E02004170',
        '1AQ' => 'E02004170',
        '1AR' => 'E02004170',
        '1AS' => 'E02004170',
        '1AT' => 'E02004170',
        '1AU' => 'E02004170',
        '1AW' => 'E02004170',
        '1AX' => 'E02004170',
        '1AY' => 'E02004170',
        '1AZ' => 'E02004170',
        '1BA' => 'E02004170',
        '1BB' => 'E02004170',
        '1BD' => 'E02004170',
        '1BE' => 'E02004170',
        '1BG' => 'E02004170',
        '1BH' => 'E02004170',
        '1BJ' => 'E02004170',
        '1BL' => 'E02004170',
        '1BN' => 'E02004170',
        '1BP' => 'E02004170',
        '1BQ' => 'E02004170',
        '1BR' => 'E02004170',
        '1BS' => 'E02004170',
        '1BT' => 'E02004170',
        '1BU' => 'E02004170',
        '1BW' => 'E02004170',
        '1BX' => 'E02004170',
        '1BY' => 'E02004170',
        '1BZ' => 'E02004170',
        '1DA' => 'E02004170',
        '1DB' => 'E02004170',
        '1DD' => 'E02004170',
        '1DE' => 'E02004170',
        '1DF' => 'E02004170',
        '1DG' => 'E02004170',
        '1DH' => 'E02004170',
        '1DJ' => 'E02004170',
        '1DL' => 'E02004170',
        '1DN' => 'E02004170',
        '1DP' => 'E02004170',
        '1DQ' => 'E02004170',
        '1DR' => 'E02004170',
        '1DS' => 'E02004170',
        '1DT' => 'E02004170',
        '1DU' => 'E02004170',
        '1DW' => 'E02004170',
        '1DX' => 'E02004170',
        '1DY' => 'E02004170',
        '1DZ' => 'E02004170',
        '1EA' => 'E02004171',
        '1EB' => 'E02004170',
        '1ED' => 'E02004170',
        '1EE' => 'E02004170',
        '1EF' => 'E02004170',
        '1EG' => 'E02004170',
        '1EH' => 'E02004170',
        '1EJ' => 'E02004170',
        '1EL' => 'E02004170',
        '1EN' => 'E02004170',
        '1EP' => 'E02004170',
        '1EQ' => 'E02004170',
        '1ER' => 'E02004170',
        '1ES' => 'E02004170',
        '1ET' => 'E02004170',
        '1EU' => 'E02004170',
        '1EW' => 'E02004170',
        '1EX' => 'E02004170',
        '1EY' => 'E02004170',
        '1EZ' => 'E02004170',
        '1FA' => 'E02004170',
        '1FB' => 'E02004170',
        '1FD' => 'E02004170',
        '1FE' => 'E02004170',
        '1FG' => 'E02004170',
        '1FH' => 'E02004170',
        '1FJ' => 'E02004170',
        '1FL' => 'E02004170',
        '1FN' => 'E02004170',
        '1FP' => 'E02004170',
        '1FQ' => 'E02004170',
        '1FR' => 'E02004170',
        '1FS' => 'E02004170',
        '1FT' => 'E02004170',
        '1FU' => 'E02004170',
        '1FW' => 'E02004170',
        '1FX' => 'E02004170',
        '1FY' => 'E02004170',
        '1FZ' => 'E02004170',
        '1GA' => 'E02004170',
        '1GB' => 'E02004170',
        '1GD' => 'E02004170',
        '1GE' => 'E02004170',
        '1GF' => 'E02004170',
        '1GG' => 'E02004170',
        '1GH' => 'E02004170',
        '1GJ' => 'E02004170',
        '1GL' => 'E02004171',
        '1GN' => 'E02004170',
        '1GP' => 'E02004170',
        '1GQ' => 'E02004171',
        '1GR' => 'E02004171',
        '1GS' => 'E02004170',
        '1GT' => 'E02004170',
        '1GU' => 'E02004170',
        '1GW' => 'E02004170',
        '1GX' => 'E02004170',
        '1GY' => 'E02004171',
        '1GZ' => 'E02004171',
        '1HA' => 'E02004170',
        '1HB' => 'E02004170',
        '1HD' => 'E02004170',
        '1HE' => 'E02004170',
        '1HF' => 'E02004170',
        '1HG' => 'E02004170',
        '1HH' => 'E02004170',
        '1HJ' => 'E02004170',
        '1HL' => 'E02004170',
        '1HN' => 'E02004170',
        '1HP' => 'E02004170',
        '1HQ' => 'E02004170',
        '1HR' => 'E02004170',
        '1HS' => 'E02004170',
        '1HT' => 'E02004170',
        '1HU' => 'E02004170',
        '1HW' => 'E02004170',
        '1HX' => 'E02004170',
        '1HY' => 'E02004170',
        '1HZ' => 'E02004170',
        '1JA' => 'E02004170',
        '1JB' => 'E02004170',
        '1JD' => 'E02004170',
        '1JE' => 'E02004170',
        '1JF' => 'E02004170',
        '1JG' => 'E02004170',
        '1JH' => 'E02004170',
        '1JJ' => 'E02004170',
        '1JL' => 'E02004170',
        '1JN' => 'E02004170',
        '1JP' => 'E02004170',
        '1JQ' => 'E02004170',
        '1JR' => 'E02004170',
        '1JS' => 'E02004170',
        '1JT' => 'E02004170',
        '1JU' => 'E02004170',
        '1JW' => 'E02004170',
        '1JX' => 'E02004170',
        '1JY' => 'E02004170',
        '1JZ' => 'E02004170',
        '1LA' => 'E02004170',
        '1LB' => 'E02004170',
        '1LD' => 'E02004170',
        '1LE' => 'E02004170',
        '1LF' => 'E02004170',
        '1LG' => 'E02004170',
        '1LH' => 'E02004170',
        '1LJ' => 'E02004170',
        '1LL' => 'E02004170',
        '1LN' => 'E02004170',
        '1LP' => 'E02004170',
        '1LQ' => 'E02004170',
        '1LR' => 'E02004171',
        '1LS' => 'E02004171',
        '1LT' => 'E02004171',
        '1LU' => 'E02004171',
        '1LW' => 'E02004170',
        '1LX' => 'E02004169',
        '1LY' => 'E02004169',
        '1LZ' => 'E02004169',
        '1NA' => 'E02004169',
        '1NB' => 'E02004169',
        '1ND' => 'E02004169',
        '1NE' => 'E02004169',
        '1NF' => 'E02004169',
        '1NG' => 'E02004171',
        '1NH' => 'E02004171',
        '1NJ' => 'E02004170',
        '1NL' => 'E02004170',
        '1NN' => 'E02004170',
        '1NP' => 'E02004170',
        '1NQ' => 'E02004171',
        '1NR' => 'E02004170',
        '1NS' => 'E02004170',
        '1NT' => 'E02004170',
        '1NU' => 'E02004170',
        '1NW' => 'E02004170',
        '1NX' => 'E02004170',
        '1NY' => 'E02004170',
        '1NZ' => 'E02004170',
        '1PA' => 'E02004170',
        '1PB' => 'E02004170',
        '1PD' => 'E02004171',
        '1PE' => 'E02004171',
        '1PF' => 'E02004171',
        '1PG' => 'E02004171',
        '1PH' => 'E02004171',
        '1PJ' => 'E02004171',
        '1PL' => 'E02004171',
        '1PN' => 'E02004171',
        '1PP' => 'E02004171',
        '1PQ' => 'E02004171',
        '1PR' => 'E02004171',
        '1PS' => 'E02004171',
        '1PT' => 'E02004171',
        '1PU' => 'E02004171',
        '1PW' => 'E02004171',
        '1PX' => 'E02004171',
        '1PY' => 'E02004171',
        '1PZ' => 'E02004171',
        '1QA' => 'E02004170',
        '1QB' => 'E02004170',
        '1QD' => 'E02004170',
        '1QE' => 'E02004170',
        '1QF' => 'E02004171',
        '1QG' => 'E02004171',
        '1QH' => 'E02004171',
        '1QJ' => 'E02004170',
        '1QL' => 'E02004170',
        '1QN' => 'E02004171',
        '1QP' => 'E02004169',
        '1QQ' => 'E02004171',
        '1QR' => 'E02004169',
        '1QS' => 'E02004170',
        '1QT' => 'E02004170',
        '1QU' => 'E02004170',
        '1QW' => 'E02004171',
        '1QX' => 'E02004170',
        '1QY' => 'E02004169',
        '1QZ' => 'E02004170',
        '1RA' => 'E02004171',
        '1RB' => 'E02004171',
        '1RD' => 'E02004171',
        '1RE' => 'E02004171',
        '1RF' => 'E02004171',
        '1RG' => 'E02004171',
        '1RH' => 'E02004171',
        '1RJ' => 'E02004171',
        '1RL' => 'E02004171',
        '1RN' => 'E02004171',
        '1RP' => 'E02004170',
        '1RQ' => 'E02004171',
        '1RR' => 'E02004170',
        '1RS' => 'E02004170',
        '1RT' => 'E02004170',
        '1RU' => 'E02004170',
        '1RW' => 'E02004171',
        '1RX' => 'E02004171',
        '1RY' => 'E02004171',
        '1RZ' => 'E02004171',
        '1SA' => 'E02004171',
        '1SB' => 'E02004171',
        '1SD' => 'E02004171',
        '1SE' => 'E02004171',
        '1SF' => 'E02004171',
        '1SG' => 'E02004171',
        '1SH' => 'E02004170',
        '1SJ' => 'E02004170',
        '1SL' => 'E02004170',
        '1SN' => 'E02004170',
        '1SP' => 'E02004170',
        '1SQ' => 'E02004171',
        '1SR' => 'E02004170',
        '1SS' => 'E02004170',
        '1ST' => 'E02004170',
        '1SU' => 'E02004170',
        '1SW' => 'E02004170',
        '1SX' => 'E02004170',
        '1SY' => 'E02004170',
        '1SZ' => 'E02004170',
        '1TA' => 'E02004170',
        '1TB' => 'E02004170',
        '1TD' => 'E02004170',
        '1TE' => 'E02004170',
        '1TF' => 'E02004170',
        '1TG' => 'E02004170',
        '1TH' => 'E02004170',
        '1TJ' => 'E02004171',
        '1TL' => 'E02004170',
        '1TN' => 'E02004170',
        '1TP' => 'E02004171',
        '1TQ' => 'E02004170',
        '1TR' => 'E02004170',
        '1TS' => 'E02004171',
        '1TT' => 'E02004171',
        '1TU' => 'E02004171',
        '1TW' => 'E02004170',
        '1TX' => 'E02004171',
        '1TY' => 'E02004171',
        '1TZ' => 'E02004170',
        '1UA' => 'E02004170',
        '1UB' => 'E02004170',
        '1UD' => 'E02004170',
        '1UE' => 'E02004170',
        '1UF' => 'E02004170',
        '1UG' => 'E02004170',
        '1UH' => 'E02004171',
        '1UJ' => 'E02004170',
        '1UL' => 'E02004170',
        '1UN' => 'E02004170',
        '1UP' => 'E02004171',
        '1UQ' => 'E02004170',
        '1UR' => 'E02004170',
        '1US' => 'E02004170',
        '1UT' => 'E02004171',
        '1UU' => 'E02004171',
        '1UW' => 'E02004170',
        '1UX' => 'E02004171',
        '1UY' => 'E02004171',
        '1UZ' => 'E02004170',
        '1WB' => 'E02004171',
        '1WD' => 'E02004171',
        '1WE' => 'E02004171',
        '1WF' => 'E02004171',
        '1WG' => 'E02004171',
        '1WH' => 'E02004171',
        '1WJ' => 'E02004170',
        '1WL' => 'E02004170',
        '1WN' => 'E02004170',
        '1WP' => 'E02004170',
        '1WQ' => 'E02004170',
        '1WR' => 'E02004170',
        '1WS' => 'E02004170',
        '1WT' => 'E02004170',
        '1WU' => 'E02004170',
        '1WW' => 'E02004170',
        '1WX' => 'E02004170',
        '1WY' => 'E02004171',
        '1WZ' => 'E02004170',
        '1XA' => 'E02004170',
        '1XB' => 'E02004170',
        '1XD' => 'E02004170',
        '1XE' => 'E02004170',
        '1XF' => 'E02004170',
        '1XG' => 'E02004170',
        '1XH' => 'E02004170',
        '1XJ' => 'E02004170',
        '1XL' => 'E02004171',
        '1XN' => 'E02004171',
        '1XP' => 'E02004170',
        '1XQ' => 'E02004170',
        '1XR' => 'E02004170',
        '1XT' => 'E02004170',
        '1XU' => 'E02004170',
        '1XW' => 'E02004170',
        '1XZ' => 'E02004170',
        '1YB' => 'E02004170',
        '1YD' => 'E02004170',
        '1YE' => 'E02004170',
        '1YF' => 'E02004170',
        '1YG' => 'E02004170',
        '1YH' => 'E02004170',
        '1YJ' => 'E02004170',
        '1YL' => 'E02004170',
        '1YN' => 'E02004170',
        '1YP' => 'E02004170',
        '1YQ' => 'E02004170',
        '1YR' => 'E02004170',
        '1YS' => 'E02004170',
        '1YT' => 'E02004170',
        '1YU' => 'E02004170',
        '1YW' => 'E02004170',
        '1YX' => 'E02004170',
        '1YY' => 'E02004170',
        '1ZA' => 'E02004170',
        '1ZB' => 'E02004170',
        '1ZN' => 'E02004170',
        '1ZQ' => 'E02004170',
        '2AA' => 'E02004171',
        '2AB' => 'E02004171',
        '2AD' => 'E02004171',
        '2AE' => 'E02004171',
        '2AF' => 'E02004171',
        '2AG' => 'E02004171',
        '2AH' => 'E02004171',
        '2AJ' => 'E02004171',
        '2AL' => 'E02004171',
        '2AN' => 'E02004171',
        '2AP' => 'E02004171',
        '2AQ' => 'E02004171',
        '2AR' => 'E02004171',
        '2AS' => 'E02004171',
        '2AT' => 'E02004171',
        '2AU' => 'E02004171',
        '2AW' => 'E02004166',
        '2AX' => 'E02004171',
        '2AY' => 'E02004171',
        '2AZ' => 'E02004171',
        '2BA' => 'E02004171',
        '2BB' => 'E02004171',
        '2BD' => 'E02004171',
        '2BE' => 'E02004171',
        '2BG' => 'E02004171',
        '2BH' => 'E02004171',
        '2BJ' => 'E02004171',
        '2BL' => 'E02004171',
        '2BN' => 'E02004171',
        '2BP' => 'E02004171',
        '2BQ' => 'E02004171',
        '2BR' => 'E02004171',
        '2BS' => 'E02004171',
        '2BT' => 'E02004171',
        '2BU' => 'E02004171',
        '2BW' => 'E02004171',
        '2BX' => 'E02004171',
        '2BY' => 'E02004132',
        '2BZ' => 'E02004171',
        '2DA' => 'E02004132',
        '2DB' => 'E02004171',
        '2DD' => 'E02004171',
        '2DE' => 'E02004132',
        '2DF' => 'E02004132',
        '2DG' => 'E02004132',
        '2DH' => 'E02004171',
        '2DJ' => 'E02004171',
        '2DL' => 'E02004171',
        '2DN' => 'E02004171',
        '2DP' => 'E02004170',
        '2DQ' => 'E02004171',
        '2DR' => 'E02004171',
        '2DS' => 'E02004171',
        '2DT' => 'E02004129',
        '2DU' => 'E02004129',
        '2DW' => 'E02004169',
        '2DX' => 'E02004132',
        '2DY' => 'E02004132',
        '2DZ' => 'E02004132',
        '2EA' => 'E02004132',
        '2EB' => 'E02004171',
        '2ED' => 'E02004132',
        '2EE' => 'E02004132',
        '2EF' => 'E02004132',
        '2EG' => 'E02004132',
        '2EH' => 'E02004132',
        '2EJ' => 'E02004132',
        '2EL' => 'E02004132',
        '2EN' => 'E02004132',
        '2EP' => 'E02004132',
        '2EQ' => 'E02004132',
        '2ER' => 'E02004132',
        '2ES' => 'E02004132',
        '2ET' => 'E02004132',
        '2EU' => 'E02004171',
        '2EW' => 'E02004132',
        '2EX' => 'E02004171',
        '2EY' => 'E02004132',
        '2EZ' => 'E02004169',
        '2FB' => 'E02004169',
        '2FD' => 'E02004171',
        '2FE' => 'E02004169',
        '2FF' => 'E02004169',
        '2FH' => 'E02004169',
        '2FJ' => 'E02004169',
        '2FL' => 'E02004169',
        '2FN' => 'E02004169',
        '2FS' => 'E02004169',
        '2FT' => 'E02004169',
        '2FZ' => 'E02004170',
        '2HA' => 'E02004171',
        '2HE' => 'E02004129',
        '2HF' => 'E02004171',
        '2HG' => 'E02004171',
        '2HH' => 'E02004171',
        '2HJ' => 'E02004171',
        '2HL' => 'E02004171',
        '2HN' => 'E02004171',
        '2HP' => 'E02004171',
        '2HQ' => 'E02004171',
        '2HR' => 'E02004166',
        '2HS' => 'E02004166',
        '2HT' => 'E02004166',
        '2HU' => 'E02004166',
        '2HW' => 'E02004171',
        '2HX' => 'E02004166',
        '2HY' => 'E02004166',
        '2HZ' => 'E02004166',
        '2JA' => 'E02004166',
        '2JB' => 'E02004166',
        '2JD' => 'E02004166',
        '2JE' => 'E02004166',
        '2JF' => 'E02004129',
        '2JG' => 'E02004132',
        '2JH' => 'E02004169',
        '2JN' => 'E02004132',
        '2JP' => 'E02004132',
        '2JR' => 'E02004132',
        '2JS' => 'E02004132',
        '2JT' => 'E02004132',
        '2JU' => 'E02004132',
        '2JW' => 'E02004132',
        '2JX' => 'E02004132',
        '2JY' => 'E02004132',
        '2JZ' => 'E02004132',
        '2LA' => 'E02004132',
        '2LB' => 'E02004132',
        '2LD' => 'E02004132',
        '2LE' => 'E02004132',
        '2LF' => 'E02004132',
        '2LG' => 'E02004132',
        '2LH' => 'E02004132',
        '2LJ' => 'E02004132',
        '2LL' => 'E02004132',
        '2LN' => 'E02004132',
        '2LP' => 'E02004132',
        '2LQ' => 'E02004132',
        '2LR' => 'E02004171',
        '2LS' => 'E02004132',
        '2LT' => 'E02004132',
        '2LW' => 'E02004132',
        '2NA' => 'E02004134',
        '2NB' => 'E02004134',
        '2ND' => 'E02004134',
        '2NE' => 'E02004134',
        '2NF' => 'E02004134',
        '2NG' => 'E02004134',
        '2NH' => 'E02004134',
        '2NJ' => 'E02004134',
        '2NL' => 'E02004134',
        '2NN' => 'E02004134',
        '2NP' => 'E02004134',
        '2NQ' => 'E02004134',
        '2NR' => 'E02004134',
        '2NS' => 'E02004134',
        '2NT' => 'E02004134',
        '2NU' => 'E02004134',
        '2NW' => 'E02004134',
        '2PA' => 'E02004169',
        '2PB' => 'E02004169',
        '2PD' => 'E02004169',
        '2PE' => 'E02004169',
        '2PF' => 'E02004169',
        '2PG' => 'E02004169',
        '2PH' => 'E02004169',
        '2PJ' => 'E02004169',
        '2PL' => 'E02004169',
        '2PN' => 'E02004169',
        '2PP' => 'E02004169',
        '2PQ' => 'E02004169',
        '2PR' => 'E02004169',
        '2PS' => 'E02004169',
        '2PT' => 'E02004169',
        '2PU' => 'E02004169',
        '2PW' => 'E02004169',
        '2PX' => 'E02004169',
        '2PY' => 'E02004169',
        '2PZ' => 'E02004169',
        '2QA' => 'E02004169',
        '2QB' => 'E02004169',
        '2QD' => 'E02004169',
        '2QE' => 'E02004169',
        '2QF' => 'E02004169',
        '2QG' => 'E02004169',
        '2QH' => 'E02004169',
        '2QJ' => 'E02004169',
        '2QL' => 'E02004169',
        '2QN' => 'E02004169',
        '2QP' => 'E02004169',
        '2QQ' => 'E02004169',
        '2QR' => 'E02004169',
        '2QS' => 'E02004169',
        '2QT' => 'E02004171',
        '2QU' => 'E02004166',
        '2QW' => 'E02004169',
        '2QX' => 'E02004166',
        '2QY' => 'E02004166',
        '2QZ' => 'E02004166',
        '2RA' => 'E02004166',
        '2RB' => 'E02004166',
        '2RD' => 'E02004169',
        '2RE' => 'E02004169',
        '2RF' => 'E02004169',
        '2RG' => 'E02004169',
        '2RH' => 'E02004169',
        '2RJ' => 'E02004169',
        '2RL' => 'E02004169',
        '2RN' => 'E02004169',
        '2RP' => 'E02004169',
        '2RQ' => 'E02004169',
        '2RR' => 'E02004169',
        '2RS' => 'E02004169',
        '2RT' => 'E02004169',
        '2RU' => 'E02004169',
        '2RW' => 'E02004169',
        '2RX' => 'E02004169',
        '2RY' => 'E02004169',
        '2RZ' => 'E02004169',
        '2SA' => 'E02004169',
        '2SB' => 'E02004169',
        '2SD' => 'E02004169',
        '2SE' => 'E02004169',
        '2SF' => 'E02004169',
        '2SG' => 'E02004169',
        '2SH' => 'E02004169',
        '2SJ' => 'E02004169',
        '2SL' => 'E02004169',
        '2SN' => 'E02004169',
        '2SP' => 'E02004169',
        '2SQ' => 'E02004169',
        '2SR' => 'E02004169',
        '2SS' => 'E02004169',
        '2ST' => 'E02004169',
        '2SU' => 'E02004169',
        '2SW' => 'E02004169',
        '2SX' => 'E02004169',
        '2SY' => 'E02004169',
        '2SZ' => 'E02004169',
        '2TA' => 'E02004169',
        '2TB' => 'E02004169',
        '2TD' => 'E02004169',
        '2TE' => 'E02004169',
        '2TH' => 'E02004169',
        '2TJ' => 'E02004169',
        '2TL' => 'E02004169',
        '2TN' => 'E02004169',
        '2TP' => 'E02004169',
        '2TQ' => 'E02004169',
        '2TR' => 'E02004169',
        '2TS' => 'E02004169',
        '2TT' => 'E02004169',
        '2TU' => 'E02004169',
        '2TW' => 'E02004169',
        '2TX' => 'E02004169',
        '2TY' => 'E02004169',
        '2TZ' => 'E02004169',
        '2UA' => 'E02004169',
        '2WA' => 'E02004170',
        '2WT' => 'E02004170',
        '2WU' => 'E02004170',
        '2WW' => 'E02004170',
        '2WX' => 'E02004170',
        '2WY' => 'E02004170',
        '2WZ' => 'E02004170',
        '2XN' => 'E02004169',
        '2YH' => 'E02004170',
        '2YJ' => 'E02004171',
        '2YL' => 'E02004170',
        '2YN' => 'E02004171',
        '2YP' => 'E02004170',
        '2YQ' => 'E02004170',
        '2YR' => 'E02004170',
        '2YS' => 'E02004171',
        '2YT' => 'E02004169',
        '2YU' => 'E02004169',
        '2YW' => 'E02004169',
        '2YX' => 'E02004169',
        '2YY' => 'E02004170',
        '2YZ' => 'E02004169',
        '2ZA' => 'E02004170',
        '2ZN' => 'E02004170',
        '2ZQ' => 'E02004170',
        '3AA' => 'E02004166',
        '3AB' => 'E02004166',
        '3AD' => 'E02004166',
        '3AE' => 'E02004166',
        '3AF' => 'E02004166',
        '3AG' => 'E02004166',
        '3AH' => 'E02004166',
        '3AJ' => 'E02004166',
        '3AL' => 'E02004166',
        '3AN' => 'E02004166',
        '3AP' => 'E02004166',
        '3AQ' => 'E02004166',
        '3AR' => 'E02004166',
        '3AS' => 'E02004166',
        '3AT' => 'E02004166',
        '3AU' => 'E02004166',
        '3AW' => 'E02004166',
        '3AX' => 'E02004166',
        '3AY' => 'E02004166',
        '3AZ' => 'E02004166',
        '3BA' => 'E02004166',
        '3BB' => 'E02004166',
        '3BD' => 'E02004166',
        '3BE' => 'E02004166',
        '3BG' => 'E02004166',
        '3BH' => 'E02004166',
        '3BJ' => 'E02004166',
        '3BL' => 'E02004166',
        '3BN' => 'E02004166',
        '3BP' => 'E02004169',
        '3BQ' => 'E02004166',
        '3BR' => 'E02004166',
        '3BS' => 'E02004166',
        '3BT' => 'E02004166',
        '3BU' => 'E02004169',
        '3BW' => 'E02004166',
        '3BX' => 'E02004169',
        '3BY' => 'E02004169',
        '3BZ' => 'E02004169',
        '3DA' => 'E02004169',
        '3DB' => 'E02004166',
        '3DD' => 'E02004166',
        '3DE' => 'E02004166',
        '3DF' => 'E02004166',
        '3DG' => 'E02004166',
        '3DH' => 'E02004166',
        '3DJ' => 'E02004166',
        '3DL' => 'E02004166',
        '3DN' => 'E02004166',
        '3DP' => 'E02004166',
        '3DQ' => 'E02004166',
        '3DR' => 'E02004166',
        '3DS' => 'E02004166',
        '3DT' => 'E02004166',
        '3DU' => 'E02004166',
        '3DW' => 'E02004166',
        '3DX' => 'E02004166',
        '3DY' => 'E02004166',
        '3DZ' => 'E02004166',
        '3EA' => 'E02004166',
        '3EB' => 'E02004166',
        '3ED' => 'E02004166',
        '3EE' => 'E02004166',
        '3EF' => 'E02004166',
        '3EG' => 'E02004166',
        '3EH' => 'E02004166',
        '3EJ' => 'E02004166',
        '3EL' => 'E02004166',
        '3EN' => 'E02004166',
        '3EP' => 'E02004166',
        '3EQ' => 'E02004166',
        '3ER' => 'E02004166',
        '3ES' => 'E02004169',
        '3ET' => 'E02004169',
        '3EU' => 'E02004169',
        '3EW' => 'E02004166',
        '3EX' => 'E02004169',
        '3EY' => 'E02004169',
        '3EZ' => 'E02004166',
        '3FA' => 'E02004169',
        '3FB' => 'E02004169',
        '3FD' => 'E02004166',
        '3FE' => 'E02004166',
        '3FF' => 'E02004166',
        '3FG' => 'E02004169',
        '3FH' => 'E02004169',
        '3FJ' => 'E02004166',
        '3FL' => 'E02004166',
        '3FN' => 'E02004169',
        '3FP' => 'E02004166',
        '3FQ' => 'E02004169',
        '3FR' => 'E02004169',
        '3FS' => 'E02004169',
        '3FU' => 'E02004169',
        '3FW' => 'E02004166',
        '3FX' => 'E02004166',
        '3FZ' => 'E02004166',
        '3HA' => 'E02004166',
        '3HB' => 'E02004166',
        '3HF' => 'E02004166',
        '3HG' => 'E02004166',
        '3HH' => 'E02004166',
        '3HJ' => 'E02004166',
        '3HL' => 'E02004166',
        '3HN' => 'E02004166',
        '3HP' => 'E02004166',
        '3HQ' => 'E02004166',
        '3HR' => 'E02004166',
        '3HS' => 'E02004166',
        '3HT' => 'E02004166',
        '3HU' => 'E02004166',
        '3HW' => 'E02004166',
        '3JA' => 'E02004166',
        '3JB' => 'E02004166',
        '3JD' => 'E02004166',
        '3JE' => 'E02004166',
        '3JF' => 'E02004166',
        '3JG' => 'E02004166',
        '3JH' => 'E02004166',
        '3JJ' => 'E02004166',
        '3JL' => 'E02004166',
        '3JN' => 'E02004166',
        '3JP' => 'E02004166',
        '3JQ' => 'E02004166',
        '3JR' => 'E02004166',
        '3JS' => 'E02004166',
        '3JT' => 'E02004166',
        '3JU' => 'E02004166',
        '3JW' => 'E02004166',
        '3JX' => 'E02004166',
        '3JY' => 'E02004166',
        '3JZ' => 'E02004166',
        '3LA' => 'E02004166',
        '3LB' => 'E02004166',
        '3LH' => 'E02004166',
        '3LJ' => 'E02004166',
        '3LL' => 'E02004166',
        '3LN' => 'E02004166',
        '3LP' => 'E02004166',
        '3LR' => 'E02004166',
        '3LS' => 'E02004166',
        '3LT' => 'E02004166',
        '3LU' => 'E02004166',
        '3LW' => 'E02004166',
        '3LX' => 'E02004166',
        '3LY' => 'E02004166',
        '3LZ' => 'E02004166',
        '3NA' => 'E02004166',
        '3NB' => 'E02004166',
        '3NG' => 'E02004166',
        '3NH' => 'E02004166',
        '3NJ' => 'E02004166',
        '3NL' => 'E02004166',
        '3NN' => 'E02004166',
        '3NP' => 'E02004166',
        '3NQ' => 'E02004166',
        '3NR' => 'E02004166',
        '3NS' => 'E02004166',
        '3NT' => 'E02004166',
        '3NU' => 'E02004166',
        '3NW' => 'E02004166',
        '3NX' => 'E02004166',
        '3NY' => 'E02004166',
        '3PA' => 'E02004166',
        '3PB' => 'E02004166',
        '3PD' => 'E02004166',
        '3PE' => 'E02004166',
        '3PF' => 'E02004166',
        '3PG' => 'E02004166',
        '3PH' => 'E02004166',
        '3PJ' => 'E02004166',
        '3PL' => 'E02004166',
        '3PN' => 'E02004166',
        '3PP' => 'E02004166',
        '3PQ' => 'E02004166',
        '3PR' => 'E02004166',
        '3PS' => 'E02004166',
        '3PT' => 'E02004166',
        '3PU' => 'E02004166',
        '3PW' => 'E02004166',
        '3PX' => 'E02004166',
        '3PY' => 'E02004166',
        '3PZ' => 'E02004166',
        '3QA' => 'E02004166',
        '3QB' => 'E02004166',
        '3QD' => 'E02004166',
        '3QE' => 'E02004166',
        '3QF' => 'E02004166',
        '3QG' => 'E02004166',
        '3QH' => 'E02004166',
        '3QJ' => 'E02004166',
        '3QL' => 'E02004166',
        '3QN' => 'E02004166',
        '3QP' => 'E02004166',
        '3QQ' => 'E02004166',
        '3QR' => 'E02004166',
        '3QS' => 'E02004166',
        '3QT' => 'E02004166',
        '3QU' => 'E02004166',
        '3QW' => 'E02004166',
        '3QX' => 'E02004166',
        '3QY' => 'E02004166',
        '3QZ' => 'E02004166',
        '3RA' => 'E02004166',
        '3RB' => 'E02004166',
        '3RD' => 'E02004166',
        '3RE' => 'E02004166',
        '3RF' => 'E02004166',
        '3RG' => 'E02004166',
        '3RH' => 'E02004166',
        '3RJ' => 'E02004166',
        '3RL' => 'E02004166',
        '3RN' => 'E02004166',
        '3RP' => 'E02004166',
        '3RQ' => 'E02004166',
        '3RR' => 'E02004166',
        '3RS' => 'E02004166',
        '3RT' => 'E02004166',
        '3RU' => 'E02004166',
        '3RW' => 'E02004166',
        '3RX' => 'E02004166',
        '3RY' => 'E02004166',
        '3RZ' => 'E02004166',
        '3SA' => 'E02004166',
        '3SB' => 'E02004166',
        '3SD' => 'E02004166',
        '3SE' => 'E02004166',
        '3SF' => 'E02004166',
        '3SG' => 'E02004166',
        '3SH' => 'E02004166',
        '3SJ' => 'E02004166',
        '3SL' => 'E02004166',
        '3SN' => 'E02004166',
        '3SP' => 'E02004166',
        '3SQ' => 'E02004166',
        '3SR' => 'E02004166',
        '3SS' => 'E02004166',
        '3ST' => 'E02004166',
        '3SU' => 'E02004166',
        '3SW' => 'E02004166',
        '3SX' => 'E02004166',
        '3SY' => 'E02004166',
        '3SZ' => 'E02004166',
        '3TA' => 'E02004166',
        '3TB' => 'E02004166',
        '3TD' => 'E02004166',
        '3TE' => 'E02004166',
        '3TH' => 'E02004166',
        '3TJ' => 'E02004166',
        '3TL' => 'E02004166',
        '3TN' => 'E02004166',
        '3TP' => 'E02004166',
        '3TQ' => 'E02004166',
        '3TR' => 'E02004166',
        '3TS' => 'E02004166',
        '3TT' => 'E02004166',
        '3TU' => 'E02004166',
        '3TW' => 'E02004166',
        '3TX' => 'E02004166',
        '3TY' => 'E02004166',
        '3TZ' => 'E02004166',
        '3UD' => 'E02004166',
        '3UE' => 'E02004166',
        '3UF' => 'E02004166',
        '3UG' => 'E02004166',
        '3UH' => 'E02004166',
        '3UJ' => 'E02004166',
        '3UL' => 'E02004166',
        '3UN' => 'E02004166',
        '3UP' => 'E02004166',
        '3UQ' => 'E02004166',
        '3UR' => 'E02004166',
        '3US' => 'E02004166',
        '3UT' => 'E02004166',
        '3UU' => 'E02004166',
        '3UW' => 'E02004166',
        '3UX' => 'E02004166',
        '3UY' => 'E02004166',
        '3UZ' => 'E02004166',
        '3WB' => 'E02004170',
        '3WS' => 'E02004170',
        '3WT' => 'E02004170',
        '3WU' => 'E02004170',
        '3WW' => 'E02004170',
        '3WX' => 'E02004170',
        '3WY' => 'E02004170',
        '3WZ' => 'E02004170',
        '3XA' => 'E02004166',
        '3XB' => 'E02004166',
        '3XD' => 'E02004166',
        '3XE' => 'E02004166',
        '3XF' => 'E02004166',
        '3XG' => 'E02004166',
        '3XH' => 'E02004166',
        '3XJ' => 'E02004166',
        '3XL' => 'E02004166',
        '3XN' => 'E02004166',
        '3XW' => 'E02004170',
        '3XX' => 'E02004169',
        '3XY' => 'E02004166',
        '3XZ' => 'E02004166',
        '3YF' => 'E02004170',
        '3YG' => 'E02004170',
        '3YH' => 'E02004166',
        '3YJ' => 'E02004166',
        '3YL' => 'E02004170',
        '3YN' => 'E02004166',
        '3YP' => 'E02004166',
        '3YQ' => 'E02004170',
        '3YR' => 'E02004170',
        '3YS' => 'E02004166',
        '3YT' => 'E02004166',
        '3YU' => 'E02004170',
        '3YW' => 'E02004166',
        '3YX' => 'E02004170',
        '3YY' => 'E02004166',
        '3ZX' => 'E02004170',
        '9AA' => 'E02004170',
        '9AD' => 'E02004170',
        '9AE' => 'E02004170',
        '9AF' => 'E02004170',
        '9AG' => 'E02004170',
        '9AH' => 'E02004170',
        '9AJ' => 'E02004170',
        '9AN' => 'E02004170',
        '9AP' => 'E02004170',
        '9AQ' => 'E02004170',
        '9AR' => 'E02004170',
        '9AS' => 'E02004170',
        '9AT' => 'E02004170',
        '9AU' => 'E02004170',
        '9AW' => 'E02004170',
        '9AX' => 'E02004170',
        '9AY' => 'E02004170',
        '9AZ' => 'E02004170',
        '9BA' => 'E02004170',
        '9BB' => 'E02004170',
        '9BD' => 'E02004170',
        '9BE' => 'E02004170',
        '9BF' => 'E02004170',
        '9BG' => 'E02004170',
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
