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
final class DT1
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02004277',
        '1AB' => 'E02004278',
        '1AD' => 'E02004277',
        '1AE' => 'E02004277',
        '1AF' => 'E02004277',
        '1AG' => 'E02004277',
        '1AH' => 'E02004277',
        '1AJ' => 'E02004279',
        '1AL' => 'E02004278',
        '1AN' => 'E02004278',
        '1AP' => 'E02004277',
        '1AQ' => 'E02004277',
        '1AR' => 'E02004277',
        '1AS' => 'E02004277',
        '1AT' => 'E02004278',
        '1AU' => 'E02004266',
        '1AW' => 'E02004277',
        '1AX' => 'E02004272',
        '1AY' => 'E02004277',
        '1AZ' => 'E02004277',
        '1BA' => 'E02004277',
        '1BB' => 'E02004277',
        '1BD' => 'E02004277',
        '1BE' => 'E02004277',
        '1BG' => 'E02004277',
        '1BH' => 'E02004277',
        '1BJ' => 'E02004277',
        '1BL' => 'E02004277',
        '1BN' => 'E02004277',
        '1BP' => 'E02004277',
        '1BQ' => 'E02004277',
        '1BS' => 'E02004277',
        '1BT' => 'E02004277',
        '1BU' => 'E02004277',
        '1BW' => 'E02004277',
        '1BX' => 'E02004277',
        '1BY' => 'E02004277',
        '1BZ' => 'E02004277',
        '1DA' => 'E02004277',
        '1DB' => 'E02004277',
        '1DD' => 'E02004277',
        '1DE' => 'E02004277',
        '1DF' => 'E02004277',
        '1DG' => 'E02004277',
        '1DH' => 'E02004277',
        '1DJ' => 'E02004277',
        '1DL' => 'E02004277',
        '1DN' => 'E02004278',
        '1DP' => 'E02004277',
        '1DQ' => 'E02004277',
        '1DR' => 'E02004277',
        '1DS' => 'E02004277',
        '1DT' => 'E02004277',
        '1DU' => 'E02004277',
        '1DW' => 'E02004277',
        '1DX' => 'E02004277',
        '1DY' => 'E02004278',
        '1DZ' => 'E02004277',
        '1EA' => 'E02004277',
        '1EB' => 'E02004277',
        '1ED' => 'E02004278',
        '1EE' => 'E02004277',
        '1EF' => 'E02004277',
        '1EG' => 'E02004277',
        '1EH' => 'E02004277',
        '1EJ' => 'E02004277',
        '1EL' => 'E02004277',
        '1EN' => 'E02004278',
        '1EP' => 'E02004278',
        '1EQ' => 'E02004277',
        '1ER' => 'E02004278',
        '1ES' => 'E02004278',
        '1ET' => 'E02004277',
        '1EU' => 'E02004277',
        '1EW' => 'E02004277',
        '1EX' => 'E02004278',
        '1EY' => 'E02004278',
        '1EZ' => 'E02004277',
        '1FA' => 'E02004277',
        '1FB' => 'E02004277',
        '1FD' => 'E02004278',
        '1FE' => 'E02004277',
        '1FF' => 'E02004277',
        '1FG' => 'E02004277',
        '1FH' => 'E02004277',
        '1FJ' => 'E02004277',
        '1FL' => 'E02004277',
        '1FN' => 'E02004277',
        '1FP' => 'E02004277',
        '1FQ' => 'E02004277',
        '1FR' => 'E02004277',
        '1FS' => 'E02004277',
        '1FT' => 'E02004277',
        '1FU' => 'E02004277',
        '1FW' => 'E02004277',
        '1FX' => 'E02004277',
        '1FY' => 'E02004277',
        '1FZ' => 'E02004277',
        '1GA' => 'E02004277',
        '1GB' => 'E02004278',
        '1GD' => 'E02004278',
        '1GE' => 'E02004277',
        '1GF' => 'E02004277',
        '1GG' => 'E02004277',
        '1GH' => 'E02004277',
        '1GJ' => 'E02004277',
        '1GL' => 'E02004277',
        '1GN' => 'E02004277',
        '1GR' => 'E02004277',
        '1GS' => 'E02004277',
        '1GT' => 'E02004277',
        '1GU' => 'E02004277',
        '1GW' => 'E02004277',
        '1GX' => 'E02004277',
        '1GY' => 'E02004277',
        '1GZ' => 'E02004277',
        '1HA' => 'E02004277',
        '1HB' => 'E02004277',
        '1HD' => 'E02004278',
        '1HE' => 'E02004277',
        '1HF' => 'E02004277',
        '1HG' => 'E02004277',
        '1HH' => 'E02004277',
        '1HJ' => 'E02004277',
        '1HL' => 'E02004277',
        '1HN' => 'E02004277',
        '1HP' => 'E02004277',
        '1HQ' => 'E02004277',
        '1HR' => 'E02004277',
        '1HS' => 'E02004277',
        '1HT' => 'E02004277',
        '1HU' => 'E02004277',
        '1HW' => 'E02004277',
        '1HX' => 'E02004277',
        '1HY' => 'E02004277',
        '1HZ' => 'E02004277',
        '1JA' => 'E02004277',
        '1JB' => 'E02004277',
        '1JD' => 'E02004277',
        '1JE' => 'E02004277',
        '1JF' => 'E02004277',
        '1JG' => 'E02004277',
        '1JH' => 'E02004277',
        '1JJ' => 'E02004277',
        '1JL' => 'E02004272',
        '1JN' => 'E02004277',
        '1JP' => 'E02004277',
        '1JQ' => 'E02004277',
        '1JR' => 'E02004277',
        '1JS' => 'E02004277',
        '1JT' => 'E02004278',
        '1JU' => 'E02004277',
        '1JW' => 'E02004277',
        '1JX' => 'E02004277',
        '1JY' => 'E02004277',
        '1JZ' => 'E02004278',
        '1LA' => 'E02004278',
        '1LB' => 'E02004278',
        '1LD' => 'E02004278',
        '1LE' => 'E02004278',
        '1LF' => 'E02004278',
        '1LG' => 'E02004278',
        '1LH' => 'E02004278',
        '1LJ' => 'E02004278',
        '1LL' => 'E02004278',
        '1LN' => 'E02004278',
        '1LP' => 'E02004278',
        '1LQ' => 'E02004278',
        '1LR' => 'E02004278',
        '1LS' => 'E02004278',
        '1LT' => 'E02004278',
        '1LU' => 'E02004278',
        '1LW' => 'E02004278',
        '1LX' => 'E02004278',
        '1LY' => 'E02004278',
        '1LZ' => 'E02004278',
        '1NA' => 'E02004277',
        '1NB' => 'E02004277',
        '1ND' => 'E02004278',
        '1NE' => 'E02004278',
        '1NF' => 'E02004278',
        '1NG' => 'E02004278',
        '1NH' => 'E02004278',
        '1NJ' => 'E02004278',
        '1NL' => 'E02004278',
        '1NN' => 'E02004278',
        '1NP' => 'E02004278',
        '1NQ' => 'E02004278',
        '1NR' => 'E02004278',
        '1NS' => 'E02004278',
        '1NT' => 'E02004278',
        '1NU' => 'E02004278',
        '1NW' => 'E02004278',
        '1NX' => 'E02004278',
        '1NY' => 'E02004278',
        '1NZ' => 'E02004278',
        '1PA' => 'E02004278',
        '1PB' => 'E02004278',
        '1PD' => 'E02004277',
        '1PE' => 'E02004278',
        '1PF' => 'E02004278',
        '1PG' => 'E02004278',
        '1PH' => 'E02004278',
        '1PJ' => 'E02004278',
        '1PL' => 'E02004278',
        '1PN' => 'E02004278',
        '1PP' => 'E02004277',
        '1PQ' => 'E02004278',
        '1PR' => 'E02004278',
        '1PS' => 'E02004278',
        '1PT' => 'E02004278',
        '1PU' => 'E02004278',
        '1PW' => 'E02004277',
        '1PX' => 'E02004277',
        '1PY' => 'E02004278',
        '1PZ' => 'E02004277',
        '1QA' => 'E02004277',
        '1QB' => 'E02004278',
        '1QD' => 'E02004277',
        '1QE' => 'E02004278',
        '1QF' => 'E02004278',
        '1QG' => 'E02004278',
        '1QH' => 'E02004278',
        '1QJ' => 'E02004278',
        '1QL' => 'E02004278',
        '1QN' => 'E02004277',
        '1QP' => 'E02004278',
        '1QQ' => 'E02004278',
        '1QR' => 'E02004277',
        '1QS' => 'E02004277',
        '1QT' => 'E02004277',
        '1QU' => 'E02004278',
        '1QW' => 'E02004277',
        '1QX' => 'E02004277',
        '1QY' => 'E02004277',
        '1QZ' => 'E02004277',
        '1RA' => 'E02004278',
        '1RB' => 'E02004278',
        '1RD' => 'E02004277',
        '1RE' => 'E02004277',
        '1RF' => 'E02004277',
        '1RG' => 'E02004277',
        '1RH' => 'E02004277',
        '1RJ' => 'E02004277',
        '1RL' => 'E02004277',
        '1RN' => 'E02004277',
        '1RP' => 'E02004277',
        '1RQ' => 'E02004277',
        '1RR' => 'E02004277',
        '1RS' => 'E02004277',
        '1RT' => 'E02004277',
        '1RU' => 'E02004277',
        '1RW' => 'E02004277',
        '1RX' => 'E02004277',
        '1RY' => 'E02004277',
        '1RZ' => 'E02004277',
        '1SA' => 'E02004277',
        '1SB' => 'E02004277',
        '1SD' => 'E02004277',
        '1SE' => 'E02004277',
        '1SF' => 'E02004277',
        '1SG' => 'E02004277',
        '1SH' => 'E02004277',
        '1SJ' => 'E02004277',
        '1SL' => 'E02004277',
        '1SN' => 'E02004277',
        '1SP' => 'E02004277',
        '1SQ' => 'E02004277',
        '1SR' => 'E02004277',
        '1SS' => 'E02004277',
        '1ST' => 'E02004277',
        '1SU' => 'E02004277',
        '1SW' => 'E02004277',
        '1SX' => 'E02004278',
        '1SY' => 'E02004277',
        '1SZ' => 'E02004277',
        '1TA' => 'E02004277',
        '1TB' => 'E02004277',
        '1TD' => 'E02004277',
        '1TE' => 'E02004277',
        '1TF' => 'E02004277',
        '1TG' => 'E02004277',
        '1TH' => 'E02004277',
        '1TJ' => 'E02004277',
        '1TL' => 'E02004277',
        '1TN' => 'E02004277',
        '1TP' => 'E02004277',
        '1TQ' => 'E02004277',
        '1TR' => 'E02004277',
        '1TS' => 'E02004277',
        '1TT' => 'E02004277',
        '1TU' => 'E02004277',
        '1TW' => 'E02004277',
        '1TX' => 'E02004277',
        '1TY' => 'E02004277',
        '1TZ' => 'E02004277',
        '1UA' => 'E02004272',
        '1UB' => 'E02004277',
        '1UD' => 'E02004277',
        '1UE' => 'E02004277',
        '1UF' => 'E02004277',
        '1UG' => 'E02004277',
        '1UH' => 'E02004277',
        '1UJ' => 'E02004277',
        '1UL' => 'E02004277',
        '1UN' => 'E02004277',
        '1UP' => 'E02004277',
        '1UQ' => 'E02004277',
        '1UR' => 'E02004277',
        '1US' => 'E02004278',
        '1UT' => 'E02004277',
        '1UU' => 'E02004277',
        '1UW' => 'E02004277',
        '1UX' => 'E02004277',
        '1UY' => 'E02004277',
        '1UZ' => 'E02004277',
        '1WA' => 'E02004277',
        '1WB' => 'E02004277',
        '1WD' => 'E02004277',
        '1WF' => 'E02004277',
        '1WJ' => 'E02004277',
        '1WL' => 'E02004277',
        '1WN' => 'E02004277',
        '1WP' => 'E02004277',
        '1WQ' => 'E02004278',
        '1WR' => 'E02004278',
        '1WS' => 'E02004278',
        '1WT' => 'E02004278',
        '1WU' => 'E02004277',
        '1WW' => 'E02004277',
        '1WX' => 'E02004277',
        '1WZ' => 'E02004277',
        '1XA' => 'E02004277',
        '1XB' => 'E02004277',
        '1XD' => 'E02004277',
        '1XE' => 'E02004277',
        '1XF' => 'E02004277',
        '1XG' => 'E02004277',
        '1XH' => 'E02004277',
        '1XJ' => 'E02004277',
        '1XL' => 'E02004277',
        '1XN' => 'E02004277',
        '1XP' => 'E02004277',
        '1XQ' => 'E02004277',
        '1XR' => 'E02004277',
        '1XS' => 'E02004277',
        '1XT' => 'E02004277',
        '1XU' => 'E02004277',
        '1XW' => 'E02004277',
        '1XX' => 'E02004277',
        '1XY' => 'E02004277',
        '1XZ' => 'E02004277',
        '1YA' => 'E02004277',
        '1YB' => 'E02004277',
        '1YD' => 'E02004277',
        '1YE' => 'E02004277',
        '1YF' => 'E02004277',
        '1YG' => 'E02004277',
        '1YH' => 'E02004277',
        '1YJ' => 'E02004277',
        '1YL' => 'E02004277',
        '1YN' => 'E02004277',
        '1YP' => 'E02004277',
        '1YQ' => 'E02004277',
        '1YR' => 'E02004277',
        '1YS' => 'E02004277',
        '1YT' => 'E02004277',
        '1YU' => 'E02004277',
        '1YW' => 'E02004277',
        '1YX' => 'E02004277',
        '1YY' => 'E02004277',
        '1YZ' => 'E02004277',
        '1ZB' => 'E02004277',
        '1ZD' => 'E02004277',
        '1ZE' => 'E02004277',
        '1ZG' => 'E02004277',
        '1ZJ' => 'E02004277',
        '1ZN' => 'E02004277',
        '1ZQ' => 'E02004277',
        '1ZR' => 'E02004277',
        '1ZW' => 'E02004277',
        '1ZX' => 'E02004277',
        '2AA' => 'E02004277',
        '2AB' => 'E02004278',
        '2AD' => 'E02004278',
        '2AE' => 'E02004278',
        '2AF' => 'E02004278',
        '2AG' => 'E02004278',
        '2AH' => 'E02004278',
        '2AJ' => 'E02004278',
        '2AL' => 'E02004278',
        '2AN' => 'E02004278',
        '2AP' => 'E02004278',
        '2AQ' => 'E02004278',
        '2AR' => 'E02004278',
        '2AS' => 'E02004278',
        '2AT' => 'E02004278',
        '2AU' => 'E02004278',
        '2AW' => 'E02004278',
        '2AX' => 'E02004278',
        '2AY' => 'E02004278',
        '2AZ' => 'E02004278',
        '2BA' => 'E02004278',
        '2BB' => 'E02004278',
        '2BD' => 'E02004278',
        '2BE' => 'E02004278',
        '2BG' => 'E02004278',
        '2BH' => 'E02004278',
        '2BJ' => 'E02004278',
        '2BL' => 'E02004278',
        '2BN' => 'E02004278',
        '2BP' => 'E02004278',
        '2BQ' => 'E02004278',
        '2BR' => 'E02004278',
        '2BS' => 'E02004278',
        '2BT' => 'E02004278',
        '2BU' => 'E02004278',
        '2BW' => 'E02004278',
        '2BX' => 'E02004278',
        '2BY' => 'E02004278',
        '2BZ' => 'E02004278',
        '2DA' => 'E02004278',
        '2DB' => 'E02004278',
        '2DD' => 'E02004278',
        '2DE' => 'E02004278',
        '2DF' => 'E02004278',
        '2DG' => 'E02004278',
        '2DH' => 'E02004278',
        '2DJ' => 'E02004278',
        '2DL' => 'E02004278',
        '2DN' => 'E02004278',
        '2DP' => 'E02004278',
        '2DQ' => 'E02004278',
        '2DR' => 'E02004278',
        '2DS' => 'E02004278',
        '2DT' => 'E02004278',
        '2DU' => 'E02004278',
        '2DW' => 'E02004278',
        '2DX' => 'E02004278',
        '2DY' => 'E02004278',
        '2DZ' => 'E02004278',
        '2EA' => 'E02004278',
        '2EB' => 'E02004278',
        '2ED' => 'E02004278',
        '2EE' => 'E02004278',
        '2EF' => 'E02004278',
        '2EG' => 'E02004278',
        '2EH' => 'E02004278',
        '2EJ' => 'E02004278',
        '2EL' => 'E02004278',
        '2EN' => 'E02004277',
        '2EP' => 'E02004277',
        '2EQ' => 'E02004278',
        '2ER' => 'E02004277',
        '2ES' => 'E02004277',
        '2ET' => 'E02004277',
        '2EU' => 'E02004277',
        '2EW' => 'E02004277',
        '2EX' => 'E02004277',
        '2EY' => 'E02004277',
        '2EZ' => 'E02004277',
        '2FA' => 'E02004277',
        '2FB' => 'E02004277',
        '2FD' => 'E02004277',
        '2FE' => 'E02004277',
        '2FF' => 'E02004278',
        '2FG' => 'E02004277',
        '2FH' => 'E02004277',
        '2FJ' => 'E02004277',
        '2FL' => 'E02004277',
        '2FN' => 'E02004278',
        '2FY' => 'E02004277',
        '2GZ' => 'E02004277',
        '2HA' => 'E02004277',
        '2HB' => 'E02004277',
        '2HD' => 'E02004277',
        '2HE' => 'E02004277',
        '2HF' => 'E02004277',
        '2HG' => 'E02004278',
        '2HH' => 'E02004277',
        '2HJ' => 'E02004277',
        '2HL' => 'E02004277',
        '2HN' => 'E02004277',
        '2HP' => 'E02004277',
        '2HQ' => 'E02004277',
        '2HR' => 'E02004277',
        '2HS' => 'E02004277',
        '2HT' => 'E02004277',
        '2HU' => 'E02004277',
        '2HW' => 'E02004277',
        '2HX' => 'E02004277',
        '2HY' => 'E02004277',
        '2HZ' => 'E02004277',
        '2JA' => 'E02004277',
        '2JB' => 'E02004277',
        '2JD' => 'E02004277',
        '2JE' => 'E02004277',
        '2JF' => 'E02004277',
        '2JG' => 'E02004277',
        '2JH' => 'E02004277',
        '2JJ' => 'E02004277',
        '2JL' => 'E02004277',
        '2JN' => 'E02004277',
        '2JP' => 'E02004277',
        '2JQ' => 'E02004277',
        '2JR' => 'E02004277',
        '2JS' => 'E02004278',
        '2JT' => 'E02004278',
        '2JU' => 'E02004278',
        '2JW' => 'E02004277',
        '2JX' => 'E02004277',
        '2JY' => 'E02004277',
        '2JZ' => 'E02004277',
        '2LA' => 'E02004277',
        '2LB' => 'E02004277',
        '2LD' => 'E02004277',
        '2LE' => 'E02004277',
        '2LF' => 'E02004277',
        '2LG' => 'E02004277',
        '2LH' => 'E02004277',
        '2LJ' => 'E02004277',
        '2LL' => 'E02004277',
        '2LN' => 'E02004277',
        '2LP' => 'E02004277',
        '2LQ' => 'E02004277',
        '2LR' => 'E02004277',
        '2LS' => 'E02004277',
        '2LT' => 'E02004277',
        '2LU' => 'E02004277',
        '2LW' => 'E02004277',
        '2LX' => 'E02004277',
        '2LY' => 'E02004277',
        '2LZ' => 'E02004277',
        '2NA' => 'E02004277',
        '2NB' => 'E02004277',
        '2ND' => 'E02004277',
        '2NE' => 'E02004277',
        '2NF' => 'E02004277',
        '2NG' => 'E02004277',
        '2NH' => 'E02004277',
        '2NJ' => 'E02004277',
        '2NL' => 'E02004277',
        '2NN' => 'E02004277',
        '2NP' => 'E02004277',
        '2NQ' => 'E02004277',
        '2NR' => 'E02004277',
        '2NS' => 'E02004277',
        '2NT' => 'E02004277',
        '2NU' => 'E02004277',
        '2NW' => 'E02004277',
        '2NX' => 'E02004277',
        '2NY' => 'E02004277',
        '2NZ' => 'E02004277',
        '2PA' => 'E02004277',
        '2PB' => 'E02004277',
        '2PD' => 'E02004277',
        '2PE' => 'E02004277',
        '2PF' => 'E02004277',
        '2PG' => 'E02004277',
        '2PH' => 'E02004277',
        '2PJ' => 'E02004277',
        '2PL' => 'E02004277',
        '2PN' => 'E02004277',
        '2PP' => 'E02004277',
        '2PQ' => 'E02004277',
        '2PR' => 'E02004277',
        '2PS' => 'E02004277',
        '2PT' => 'E02004277',
        '2PU' => 'E02004277',
        '2PW' => 'E02004277',
        '2PX' => 'E02004277',
        '2PY' => 'E02004277',
        '2PZ' => 'E02004277',
        '2QA' => 'E02004277',
        '2QB' => 'E02004277',
        '2QD' => 'E02004278',
        '2QE' => 'E02004277',
        '2QG' => 'E02004278',
        '2QH' => 'E02004278',
        '2QJ' => 'E02004278',
        '2QL' => 'E02004278',
        '2QN' => 'E02004278',
        '2QP' => 'E02004278',
        '2QQ' => 'E02004278',
        '2QR' => 'E02004278',
        '2QS' => 'E02004278',
        '2QT' => 'E02004278',
        '2QU' => 'E02004278',
        '2QW' => 'E02004278',
        '2QX' => 'E02004278',
        '2QY' => 'E02004278',
        '2QZ' => 'E02004278',
        '2RA' => 'E02004278',
        '2RB' => 'E02004278',
        '2RD' => 'E02004278',
        '2RE' => 'E02004278',
        '2RF' => 'E02004278',
        '2RG' => 'E02004278',
        '2RH' => 'E02004278',
        '2RJ' => 'E02004278',
        '2RL' => 'E02004278',
        '2RN' => 'E02004278',
        '2RP' => 'E02004278',
        '2RQ' => 'E02004278',
        '2RR' => 'E02004278',
        '2RS' => 'E02004277',
        '2RT' => 'E02004277',
        '2RU' => 'E02004278',
        '2RW' => 'E02004278',
        '2RX' => 'E02004277',
        '2RY' => 'E02004278',
        '2RZ' => 'E02004278',
        '2SA' => 'E02004278',
        '2SB' => 'E02004278',
        '2SD' => 'E02004278',
        '2SE' => 'E02004278',
        '2SF' => 'E02004278',
        '2SG' => 'E02004278',
        '2SH' => 'E02004278',
        '2SJ' => 'E02004278',
        '2SL' => 'E02004278',
        '2SN' => 'E02004278',
        '2SP' => 'E02004278',
        '2SQ' => 'E02004278',
        '2SR' => 'E02004278',
        '2SS' => 'E02004278',
        '2ST' => 'E02004278',
        '2SU' => 'E02004278',
        '2SW' => 'E02004278',
        '2SX' => 'E02004278',
        '2SY' => 'E02004278',
        '2SZ' => 'E02004278',
        '2TA' => 'E02004278',
        '2TB' => 'E02004278',
        '2TD' => 'E02004278',
        '2TE' => 'E02004278',
        '2TF' => 'E02004278',
        '2TG' => 'E02004278',
        '2TH' => 'E02004278',
        '2TJ' => 'E02004278',
        '2TL' => 'E02004278',
        '2TN' => 'E02004278',
        '2TP' => 'E02004278',
        '2TQ' => 'E02004278',
        '2TR' => 'E02004278',
        '2TS' => 'E02004278',
        '2TT' => 'E02004278',
        '2TU' => 'E02004278',
        '2TW' => 'E02004278',
        '2TX' => 'E02004278',
        '2WA' => 'E02004277',
        '2WB' => 'E02004277',
        '2WD' => 'E02004277',
        '2WE' => 'E02004278',
        '2XA' => 'E02004277',
        '2XB' => 'E02004277',
        '2XD' => 'E02004277',
        '2XE' => 'E02004277',
        '2XF' => 'E02004278',
        '2XG' => 'E02004277',
        '2XH' => 'E02004277',
        '2XJ' => 'E02004277',
        '2XZ' => 'E02004277',
        '2YA' => 'E02004277',
        '2YB' => 'E02004277',
        '2YD' => 'E02004278',
        '2YE' => 'E02004277',
        '2YF' => 'E02004277',
        '2YG' => 'E02004277',
        '2YH' => 'E02004277',
        '2YJ' => 'E02004277',
        '2YN' => 'E02004278',
        '2YP' => 'E02004277',
        '2YQ' => 'E02004278',
        '2YR' => 'E02004277',
        '2YS' => 'E02004277',
        '2YT' => 'E02004278',
        '2YU' => 'E02004277',
        '2YW' => 'E02004277',
        '2YX' => 'E02004277',
        '2YY' => 'E02004277',
        '2YZ' => 'E02004278',
        '3AA' => 'E02004277',
        '3AB' => 'E02004277',
        '3AD' => 'E02004277',
        '3AE' => 'E02004277',
        '3AF' => 'E02004277',
        '3AG' => 'E02004277',
        '3AH' => 'E02004277',
        '3AJ' => 'E02004277',
        '3AL' => 'E02004277',
        '3AN' => 'E02004277',
        '3AP' => 'E02004277',
        '3AQ' => 'E02004277',
        '3AR' => 'E02004277',
        '3AS' => 'E02004277',
        '3AT' => 'E02004277',
        '3AU' => 'E02004277',
        '3AW' => 'E02004277',
        '3AX' => 'E02004277',
        '3AY' => 'E02004277',
        '3AZ' => 'E02004277',
        '3BA' => 'E02004277',
        '3BB' => 'E02004277',
        '3BD' => 'E02004277',
        '3BE' => 'E02004277',
        '3BG' => 'E02004277',
        '3BH' => 'E02004277',
        '3BJ' => 'E02004277',
        '3BL' => 'E02004277',
        '3BN' => 'E02004277',
        '3BP' => 'E02004277',
        '3BQ' => 'E02004277',
        '3BS' => 'E02004277',
        '3BT' => 'E02004277',
        '3BU' => 'E02004277',
        '3BW' => 'E02004277',
        '3BX' => 'E02004277',
        '3BY' => 'E02004277',
        '3DA' => 'E02004277',
        '3DB' => 'E02004277',
        '3DD' => 'E02004277',
        '3DE' => 'E02004277',
        '3DF' => 'E02004277',
        '3DG' => 'E02004277',
        '3DH' => 'E02004277',
        '3DJ' => 'E02004277',
        '3DL' => 'E02004277',
        '3DN' => 'E02004277',
        '3DP' => 'E02004277',
        '3DQ' => 'E02004277',
        '3DR' => 'E02004277',
        '3DS' => 'E02004277',
        '3DT' => 'E02004277',
        '3DU' => 'E02004277',
        '3DW' => 'E02004277',
        '3DX' => 'E02004277',
        '3DY' => 'E02004277',
        '3DZ' => 'E02004277',
        '3EA' => 'E02004277',
        '3EB' => 'E02004277',
        '3ED' => 'E02004277',
        '3EE' => 'E02004277',
        '3EF' => 'E02004277',
        '3EG' => 'E02004277',
        '3EJ' => 'E02004277',
        '3EL' => 'E02004277',
        '3EN' => 'E02004277',
        '3EP' => 'E02004277',
        '3EQ' => 'E02004277',
        '3ER' => 'E02004277',
        '3ES' => 'E02004277',
        '3ET' => 'E02004277',
        '3EU' => 'E02004277',
        '3EW' => 'E02004277',
        '3EX' => 'E02004277',
        '3EY' => 'E02004277',
        '3EZ' => 'E02004277',
        '3FA' => 'E02004277',
        '3FB' => 'E02004277',
        '3FD' => 'E02004277',
        '3FE' => 'E02004277',
        '3FF' => 'E02004277',
        '3FG' => 'E02004277',
        '3FH' => 'E02004277',
        '3FJ' => 'E02004277',
        '3FL' => 'E02004277',
        '3FN' => 'E02004277',
        '3FP' => 'E02004277',
        '3FQ' => 'E02004277',
        '3FR' => 'E02004277',
        '3FU' => 'E02004277',
        '3FW' => 'E02004277',
        '3FX' => 'E02004277',
        '3GA' => 'E02004277',
        '3GB' => 'E02004277',
        '3GD' => 'E02004277',
        '3GE' => 'E02004277',
        '3GF' => 'E02004277',
        '3GG' => 'E02004277',
        '3GH' => 'E02004277',
        '3GJ' => 'E02004277',
        '3GL' => 'E02004277',
        '3GN' => 'E02004277',
        '3GP' => 'E02004277',
        '3GQ' => 'E02004277',
        '3GR' => 'E02004277',
        '3GS' => 'E02004277',
        '3GT' => 'E02004277',
        '3GU' => 'E02004277',
        '3GW' => 'E02004277',
        '3GX' => 'E02004277',
        '3GY' => 'E02004277',
        '3GZ' => 'E02004277',
        '3HB' => 'E02004277',
        '3HE' => 'E02004277',
        '3HJ' => 'E02004277',
        '3HL' => 'E02004277',
        '3HQ' => 'E02004277',
        '3HS' => 'E02004277',
        '3HT' => 'E02004277',
        '3HU' => 'E02004277',
        '3HY' => 'E02004277',
        '3JE' => 'E02004277',
        '3QY' => 'E02004277',
        '3RA' => 'E02004277',
        '3RB' => 'E02004277',
        '3RD' => 'E02004277',
        '3RE' => 'E02004277',
        '3RF' => 'E02004277',
        '3RG' => 'E02004277',
        '3RH' => 'E02004277',
        '3RJ' => 'E02004277',
        '3RL' => 'E02004277',
        '3RN' => 'E02004277',
        '3RP' => 'E02004277',
        '3RQ' => 'E02004277',
        '3RR' => 'E02004277',
        '3RS' => 'E02004277',
        '3RT' => 'E02004277',
        '3RU' => 'E02004277',
        '3RW' => 'E02004277',
        '3RX' => 'E02004277',
        '3RY' => 'E02004277',
        '3RZ' => 'E02004277',
        '3SA' => 'E02004277',
        '3SB' => 'E02004277',
        '3SD' => 'E02004277',
        '3SE' => 'E02004277',
        '3SF' => 'E02004277',
        '3SG' => 'E02004277',
        '3SH' => 'E02004277',
        '3SJ' => 'E02004277',
        '3SL' => 'E02004277',
        '3SN' => 'E02004277',
        '3SP' => 'E02004277',
        '3SQ' => 'E02004277',
        '3SR' => 'E02004277',
        '3SS' => 'E02004277',
        '3ST' => 'E02004277',
        '3SU' => 'E02004277',
        '3SW' => 'E02004277',
        '3SX' => 'E02004277',
        '3SY' => 'E02004277',
        '3TA' => 'E02004277',
        '3TB' => 'E02004277',
        '3TD' => 'E02004277',
        '3TE' => 'E02004277',
        '3TF' => 'E02004277',
        '3TG' => 'E02004277',
        '3TH' => 'E02004277',
        '3TJ' => 'E02004277',
        '3TL' => 'E02004277',
        '3TN' => 'E02004277',
        '3TP' => 'E02004277',
        '3TQ' => 'E02004277',
        '3TR' => 'E02004277',
        '3TS' => 'E02004277',
        '3TT' => 'E02004277',
        '3TW' => 'E02004277',
        '3UX' => 'E02004277',
        '3UZ' => 'E02004277',
        '3WA' => 'E02004277',
        '3WB' => 'E02004277',
        '3WD' => 'E02004277',
        '3WE' => 'E02004277',
        '3WF' => 'E02004277',
        '3WG' => 'E02004277',
        '3WH' => 'E02004277',
        '3WJ' => 'E02004277',
        '3WL' => 'E02004277',
        '3WN' => 'E02004277',
        '3WP' => 'E02004277',
        '3WQ' => 'E02004277',
        '3WR' => 'E02004277',
        '3WS' => 'E02004277',
        '3WT' => 'E02004277',
        '3WU' => 'E02004277',
        '3WW' => 'E02004277',
        '3WX' => 'E02004277',
        '3WY' => 'E02004277',
        '3XN' => 'E02004277',
        '3YA' => 'E02004277',
        '3YB' => 'E02004277',
        '3ZX' => 'E02004277',
        '9AA' => 'E02004277',
        '9AB' => 'E02004277',
        '9AD' => 'E02004277',
        '9AE' => 'E02004277',
        '9AF' => 'E02004277',
        '9AG' => 'E02004277',
        '9AH' => 'E02004277',
        '9AJ' => 'E02004277',
        '9AL' => 'E02004277',
        '9AN' => 'E02004277',
        '9AP' => 'E02004277',
        '9AQ' => 'E02004277',
        '9AR' => 'E02004277',
        '9AS' => 'E02004277',
        '9AT' => 'E02004277',
        '9AU' => 'E02004277',
        '9AW' => 'E02004277',
        '9AX' => 'E02004277',
        '9AY' => 'E02004277',
        '9AZ' => 'E02004277',
        '9BB' => 'E02004277',
        '9BD' => 'E02004277',
        '9BE' => 'E02004277',
        '9BF' => 'E02004277',
        '9BG' => 'E02004277',
        '9BH' => 'E02004277',
        '9BJ' => 'E02004277',
        '9BL' => 'E02004277',
        '9BN' => 'E02004277',
        '9BP' => 'E02004277',
        '9BQ' => 'E02004277',
        '9BR' => 'E02004277',
        '9BS' => 'E02004277',
        '9BT' => 'E02004277',
        '9BU' => 'E02004277',
        '9BW' => 'E02004277',
        '9BX' => 'E02004277',
        '9BY' => 'E02004277',
        '9BZ' => 'E02004277',
        '9DA' => 'E02004277',
        '9DB' => 'E02004277',
        '9DD' => 'E02004277',
        '9DE' => 'E02004277',
        '9DF' => 'E02004277',
        '9DG' => 'E02004277',
        '9DH' => 'E02004277',
        '9DJ' => 'E02004277',
        '9DL' => 'E02004277',
        '9DN' => 'E02004277',
        '9DP' => 'E02004277',
        '9DQ' => 'E02004277',
        '9DR' => 'E02004277',
        '9DS' => 'E02004277',
        '9DT' => 'E02004277',
        '9DU' => 'E02004277',
        '9DW' => 'E02004277',
        '9DX' => 'E02004277',
        '9DY' => 'E02004277',
        '9DZ' => 'E02004277',
        '9EA' => 'E02004277',
        '9EB' => 'E02004277',
        '9ED' => 'E02004277',
        '9EE' => 'E02004277',
        '9EF' => 'E02004277',
        '9EG' => 'E02004277',
        '9EH' => 'E02004277',
        '9EJ' => 'E02004277',
        '9EL' => 'E02004277',
        '9EN' => 'E02004277',
        '9EP' => 'E02004277',
        '9EQ' => 'E02004277',
        '9ER' => 'E02004277',
        '9ES' => 'E02004277',
        '9ET' => 'E02004277',
        '9EU' => 'E02004277',
        '9EW' => 'E02004277',
        '9EX' => 'E02004277',
        '9EY' => 'E02004277',
        '9EZ' => 'E02004277',
        '9FA' => 'E02004277',
        '9FB' => 'E02004277',
        '9FD' => 'E02004277',
        '9FE' => 'E02004277',
        '9FF' => 'E02004277',
        '9FG' => 'E02004277',
        '9FH' => 'E02004277',
        '9FJ' => 'E02004277',
        '9FL' => 'E02004277',
        '9FN' => 'E02004277',
        '9FP' => 'E02004277',
        '9FQ' => 'E02004277',
        '9FR' => 'E02004277',
        '9FS' => 'E02004277',
        '9FT' => 'E02004277',
        '9FU' => 'E02004277',
        '9FW' => 'E02004277',
        '9FX' => 'E02004277',
        '9FY' => 'E02004277',
        '9FZ' => 'E02004277',
        '9GA' => 'E02004277',
        '9GB' => 'E02004277',
        '9GD' => 'E02004277',
        '9GE' => 'E02004277',
        '9GF' => 'E02004277',
        '9GG' => 'E02004277',
        '9GH' => 'E02004277',
        '9GJ' => 'E02004277',
        '9GL' => 'E02004277',
        '9GN' => 'E02004277',
        '9GP' => 'E02004277',
        '9GQ' => 'E02004277',
        '9GR' => 'E02004277',
        '9GS' => 'E02004277',
        '9GT' => 'E02004277',
        '9GU' => 'E02004277',
        '9GW' => 'E02004277',
        '9GX' => 'E02004277',
        '9GY' => 'E02004277',
        '9GZ' => 'E02004277',
        '9HA' => 'E02004277',
        '9HB' => 'E02004277',
        '9HD' => 'E02004277',
        '9HE' => 'E02004277',
        '9HF' => 'E02004277',
        '9HG' => 'E02004277',
        '9HH' => 'E02004277',
        '9HJ' => 'E02004277',
        '9HL' => 'E02004277',
        '9HN' => 'E02004277',
        '9HP' => 'E02004277',
        '9HQ' => 'E02004277',
        '9HR' => 'E02004277',
        '9HS' => 'E02004277',
        '9HT' => 'E02004277',
        '9HW' => 'E02004277',
        '9HX' => 'E02004277',
        '9HY' => 'E02004277',
        '9HZ' => 'E02004277',
        '9JA' => 'E02004277',
        '9JB' => 'E02004277',
        '9JD' => 'E02004277',
        '9JE' => 'E02004277',
        '9JF' => 'E02004277',
        '9SA' => 'E02004277',
        '9SB' => 'E02004277',
        '9SD' => 'E02004277',
        '9SE' => 'E02004277',
        '9SF' => 'E02004277',
        '9SG' => 'E02004277',
        '9SH' => 'E02004277',
        '9SJ' => 'E02004277',
        '9SL' => 'E02004277',
        '9SN' => 'E02004277',
        '9SP' => 'E02004277',
        '9SQ' => 'E02004277',
        '9SR' => 'E02004277',
        '9SS' => 'E02004277',
        '9ST' => 'E02004277',
        '9SU' => 'E02004277',
        '9SW' => 'E02004277',
        '9SX' => 'E02004277',
        '9SY' => 'E02004277',
        '9SZ' => 'E02004277',
        '9TA' => 'E02004277',
        '9TB' => 'E02004277',
        '9TD' => 'E02004277',
        '9TE' => 'E02004277',
        '9TF' => 'E02004277',
        '9TG' => 'E02004277',
        '9TH' => 'E02004277',
        '9TJ' => 'E02004277',
        '9TL' => 'E02004277',
        '9TN' => 'E02004277',
        '9TP' => 'E02004277',
        '9TQ' => 'E02004277',
        '9TR' => 'E02004277',
        '9TS' => 'E02004277',
        '9TT' => 'E02004277',
        '9YE' => 'E02004277',
        '9YF' => 'E02004277',
        '9YG' => 'E02004277',
        '9ZZ' => 'E02004277',
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
