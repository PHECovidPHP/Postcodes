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
final class CM6
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02004597',
        '1AB' => 'E02004597',
        '1AD' => 'E02004597',
        '1AE' => 'E02004597',
        '1AF' => 'E02004597',
        '1AG' => 'E02004597',
        '1AH' => 'E02004597',
        '1AJ' => 'E02004597',
        '1AL' => 'E02004597',
        '1AN' => 'E02004599',
        '1AP' => 'E02004597',
        '1AQ' => 'E02004597',
        '1AR' => 'E02004596',
        '1AS' => 'E02004597',
        '1AT' => 'E02004598',
        '1AU' => 'E02004598',
        '1AW' => 'E02004597',
        '1AX' => 'E02004598',
        '1AY' => 'E02004598',
        '1AZ' => 'E02004598',
        '1BA' => 'E02004598',
        '1BB' => 'E02004598',
        '1BD' => 'E02004597',
        '1BE' => 'E02004598',
        '1BG' => 'E02004598',
        '1BH' => 'E02004597',
        '1BJ' => 'E02004597',
        '1BL' => 'E02004597',
        '1BN' => 'E02004597',
        '1BP' => 'E02004598',
        '1BQ' => 'E02004597',
        '1BS' => 'E02004597',
        '1BT' => 'E02004597',
        '1BU' => 'E02004598',
        '1BW' => 'E02004597',
        '1BX' => 'E02004598',
        '1BY' => 'E02004598',
        '1BZ' => 'E02004597',
        '1DA' => 'E02004598',
        '1DB' => 'E02004597',
        '1DD' => 'E02004596',
        '1DE' => 'E02004597',
        '1DF' => 'E02004599',
        '1DG' => 'E02004597',
        '1DH' => 'E02004454',
        '1DJ' => 'E02004597',
        '1DL' => 'E02004597',
        '1DN' => 'E02004597',
        '1DP' => 'E02004597',
        '1DQ' => 'E02004598',
        '1DR' => 'E02004597',
        '1DS' => 'E02004597',
        '1DT' => 'E02004597',
        '1DU' => 'E02004597',
        '1DW' => 'E02004597',
        '1DX' => 'E02004597',
        '1DY' => 'E02004597',
        '1DZ' => 'E02004597',
        '1EA' => 'E02004597',
        '1EB' => 'E02004597',
        '1ED' => 'E02004597',
        '1EE' => 'E02004598',
        '1EF' => 'E02004597',
        '1EG' => 'E02004598',
        '1EH' => 'E02004598',
        '1EJ' => 'E02004597',
        '1EL' => 'E02004597',
        '1EN' => 'E02004597',
        '1EP' => 'E02004597',
        '1EQ' => 'E02004598',
        '1ER' => 'E02004597',
        '1ES' => 'E02004597',
        '1ET' => 'E02004597',
        '1EU' => 'E02004597',
        '1EW' => 'E02004597',
        '1EX' => 'E02004597',
        '1EY' => 'E02004597',
        '1EZ' => 'E02004597',
        '1FA' => 'E02004596',
        '1FB' => 'E02004596',
        '1FD' => 'E02004596',
        '1FE' => 'E02004596',
        '1FF' => 'E02004596',
        '1FG' => 'E02004596',
        '1FH' => 'E02004598',
        '1FJ' => 'E02004596',
        '1FL' => 'E02004597',
        '1FN' => 'E02004596',
        '1FP' => 'E02004597',
        '1FQ' => 'E02004596',
        '1FR' => 'E02004598',
        '1FS' => 'E02004597',
        '1FT' => 'E02004596',
        '1FU' => 'E02004596',
        '1FW' => 'E02004596',
        '1FX' => 'E02004597',
        '1FY' => 'E02004596',
        '1FZ' => 'E02004596',
        '1GA' => 'E02004596',
        '1GB' => 'E02004596',
        '1GD' => 'E02004596',
        '1GE' => 'E02004596',
        '1GF' => 'E02004599',
        '1GG' => 'E02004599',
        '1GH' => 'E02004596',
        '1GJ' => 'E02004597',
        '1GL' => 'E02004597',
        '1GN' => 'E02004597',
        '1GP' => 'E02004597',
        '1GQ' => 'E02004597',
        '1GR' => 'E02004596',
        '1GS' => 'E02004596',
        '1GT' => 'E02004596',
        '1GU' => 'E02004598',
        '1GW' => 'E02004596',
        '1GX' => 'E02004596',
        '1GY' => 'E02004599',
        '1GZ' => 'E02004597',
        '1HA' => 'E02004596',
        '1HB' => 'E02004597',
        '1HD' => 'E02004597',
        '1HE' => 'E02004596',
        '1HF' => 'E02004596',
        '1HG' => 'E02004597',
        '1HH' => 'E02004597',
        '1HJ' => 'E02004598',
        '1HL' => 'E02004598',
        '1HN' => 'E02004598',
        '1HP' => 'E02004598',
        '1HQ' => 'E02004597',
        '1HR' => 'E02004597',
        '1HS' => 'E02004597',
        '1HT' => 'E02004597',
        '1HU' => 'E02004598',
        '1HW' => 'E02004598',
        '1HX' => 'E02004596',
        '1HY' => 'E02004596',
        '1HZ' => 'E02004597',
        '1JA' => 'E02004597',
        '1JB' => 'E02004597',
        '1JD' => 'E02004597',
        '1JE' => 'E02004597',
        '1JF' => 'E02004597',
        '1JG' => 'E02004597',
        '1JH' => 'E02004597',
        '1JJ' => 'E02004597',
        '1JL' => 'E02004597',
        '1JN' => 'E02004597',
        '1JP' => 'E02004596',
        '1JQ' => 'E02004597',
        '1JR' => 'E02004596',
        '1JS' => 'E02004596',
        '1JT' => 'E02004596',
        '1JU' => 'E02004596',
        '1JW' => 'E02004596',
        '1JX' => 'E02004596',
        '1JY' => 'E02004596',
        '1JZ' => 'E02004596',
        '1LA' => 'E02004596',
        '1LB' => 'E02004596',
        '1LD' => 'E02004596',
        '1LE' => 'E02004596',
        '1LF' => 'E02004596',
        '1LG' => 'E02004598',
        '1LH' => 'E02004598',
        '1LJ' => 'E02004598',
        '1LL' => 'E02004597',
        '1LN' => 'E02004597',
        '1LP' => 'E02004598',
        '1LQ' => 'E02004597',
        '1LR' => 'E02004598',
        '1LS' => 'E02004598',
        '1LT' => 'E02004598',
        '1LU' => 'E02004597',
        '1LW' => 'E02004597',
        '1LX' => 'E02004598',
        '1LY' => 'E02004598',
        '1LZ' => 'E02004598',
        '1NA' => 'E02004598',
        '1NB' => 'E02004598',
        '1ND' => 'E02004598',
        '1NE' => 'E02004598',
        '1NF' => 'E02004598',
        '1NG' => 'E02004598',
        '1NH' => 'E02004599',
        '1NJ' => 'E02004599',
        '1NL' => 'E02004599',
        '1NN' => 'E02004599',
        '1NP' => 'E02004599',
        '1NQ' => 'E02004599',
        '1NR' => 'E02004599',
        '1NS' => 'E02004599',
        '1NT' => 'E02004599',
        '1NU' => 'E02004599',
        '1NW' => 'E02004599',
        '1NX' => 'E02004599',
        '1NY' => 'E02004599',
        '1NZ' => 'E02004599',
        '1PA' => 'E02004599',
        '1PB' => 'E02004599',
        '1PD' => 'E02004599',
        '1PE' => 'E02004599',
        '1PF' => 'E02004599',
        '1PG' => 'E02004599',
        '1PH' => 'E02004598',
        '1PJ' => 'E02004598',
        '1PL' => 'E02004598',
        '1PN' => 'E02004596',
        '1PP' => 'E02004599',
        '1PQ' => 'E02004599',
        '1PR' => 'E02004599',
        '1PS' => 'E02004599',
        '1PT' => 'E02004599',
        '1PU' => 'E02004599',
        '1PW' => 'E02004597',
        '1PX' => 'E02004599',
        '1PY' => 'E02004599',
        '1PZ' => 'E02004599',
        '1QA' => 'E02004599',
        '1QB' => 'E02004599',
        '1QD' => 'E02004599',
        '1QE' => 'E02004599',
        '1QF' => 'E02004599',
        '1QG' => 'E02004599',
        '1QH' => 'E02004599',
        '1QJ' => 'E02004599',
        '1QL' => 'E02004599',
        '1QN' => 'E02004599',
        '1QP' => 'E02004599',
        '1QQ' => 'E02004599',
        '1QR' => 'E02004599',
        '1QS' => 'E02004599',
        '1QT' => 'E02004599',
        '1QU' => 'E02004599',
        '1QW' => 'E02004599',
        '1QX' => 'E02004599',
        '1QY' => 'E02004597',
        '1QZ' => 'E02004599',
        '1RA' => 'E02004599',
        '1RB' => 'E02004599',
        '1RD' => 'E02004599',
        '1RE' => 'E02004599',
        '1RF' => 'E02004599',
        '1RG' => 'E02004599',
        '1RH' => 'E02004599',
        '1RJ' => 'E02004599',
        '1RL' => 'E02004599',
        '1RN' => 'E02004599',
        '1RP' => 'E02004599',
        '1RQ' => 'E02004599',
        '1RR' => 'E02004599',
        '1RS' => 'E02004599',
        '1RT' => 'E02004599',
        '1RU' => 'E02004599',
        '1RW' => 'E02004599',
        '1RX' => 'E02004599',
        '1RY' => 'E02004599',
        '1RZ' => 'E02004599',
        '1SA' => 'E02004596',
        '1SB' => 'E02004599',
        '1SD' => 'E02004599',
        '1SE' => 'E02004599',
        '1SF' => 'E02004597',
        '1SG' => 'E02004597',
        '1SH' => 'E02004597',
        '1SJ' => 'E02004597',
        '1SL' => 'E02004596',
        '1SN' => 'E02004596',
        '1SP' => 'E02004596',
        '1SQ' => 'E02004596',
        '1SR' => 'E02004596',
        '1SS' => 'E02004596',
        '1ST' => 'E02004596',
        '1SU' => 'E02004596',
        '1SW' => 'E02004596',
        '1SX' => 'E02004596',
        '1SY' => 'E02004596',
        '1SZ' => 'E02004596',
        '1TA' => 'E02004596',
        '1TB' => 'E02004596',
        '1TD' => 'E02004596',
        '1TE' => 'E02004596',
        '1TF' => 'E02004596',
        '1TG' => 'E02004596',
        '1TH' => 'E02004596',
        '1TJ' => 'E02004596',
        '1TL' => 'E02004597',
        '1TN' => 'E02004597',
        '1TP' => 'E02004597',
        '1TQ' => 'E02004596',
        '1TR' => 'E02004599',
        '1TS' => 'E02004596',
        '1TT' => 'E02004599',
        '1TU' => 'E02004597',
        '1TW' => 'E02004598',
        '1TX' => 'E02004597',
        '1TY' => 'E02004598',
        '1TZ' => 'E02004597',
        '1UA' => 'E02004597',
        '1UB' => 'E02004597',
        '1UD' => 'E02004598',
        '1UE' => 'E02004597',
        '1UF' => 'E02004597',
        '1UG' => 'E02004597',
        '1UH' => 'E02004597',
        '1UJ' => 'E02004597',
        '1UL' => 'E02004597',
        '1UN' => 'E02004597',
        '1UP' => 'E02004598',
        '1UQ' => 'E02004597',
        '1UR' => 'E02004598',
        '1US' => 'E02004597',
        '1UT' => 'E02004597',
        '1UU' => 'E02004597',
        '1UW' => 'E02004597',
        '1UX' => 'E02004598',
        '1UY' => 'E02004596',
        '1UZ' => 'E02004597',
        '1WA' => 'E02004454',
        '1WB' => 'E02004596',
        '1WD' => 'E02004597',
        '1WE' => 'E02004599',
        '1WF' => 'E02004597',
        '1WG' => 'E02004599',
        '1WH' => 'E02004597',
        '1WJ' => 'E02004597',
        '1WL' => 'E02004597',
        '1WN' => 'E02004597',
        '1WP' => 'E02004597',
        '1WQ' => 'E02004454',
        '1WR' => 'E02004454',
        '1WS' => 'E02004597',
        '1WT' => 'E02004597',
        '1WU' => 'E02004597',
        '1WW' => 'E02004454',
        '1WX' => 'E02004597',
        '1WY' => 'E02004597',
        '1WZ' => 'E02004597',
        '1XA' => 'E02004597',
        '1XB' => 'E02004597',
        '1XD' => 'E02004597',
        '1XE' => 'E02004597',
        '1XF' => 'E02004597',
        '1XG' => 'E02004597',
        '1XH' => 'E02004597',
        '1XJ' => 'E02004597',
        '1XL' => 'E02004597',
        '1XN' => 'E02004597',
        '1XP' => 'E02004454',
        '1XQ' => 'E02004597',
        '1XR' => 'E02004596',
        '1XS' => 'E02004597',
        '1XT' => 'E02004596',
        '1XU' => 'E02004597',
        '1XW' => 'E02004597',
        '1XX' => 'E02004597',
        '1XY' => 'E02004596',
        '1XZ' => 'E02004597',
        '1YB' => 'E02004597',
        '1YD' => 'E02004596',
        '1YE' => 'E02004596',
        '1YF' => 'E02004597',
        '1YG' => 'E02004597',
        '1YH' => 'E02004599',
        '1YJ' => 'E02004597',
        '1YL' => 'E02004597',
        '1YN' => 'E02004597',
        '1YP' => 'E02004454',
        '1YQ' => 'E02004597',
        '1YR' => 'E02004597',
        '1YS' => 'E02004599',
        '1YT' => 'E02004454',
        '1YU' => 'E02004454',
        '1YW' => 'E02004597',
        '1YX' => 'E02004597',
        '1YY' => 'E02004597',
        '1YZ' => 'E02004597',
        '1ZA' => 'E02004597',
        '1ZB' => 'E02004596',
        '1ZD' => 'E02004597',
        '1ZE' => 'E02004597',
        '1ZF' => 'E02004598',
        '1ZG' => 'E02004597',
        '1ZH' => 'E02004597',
        '1ZJ' => 'E02004597',
        '1ZL' => 'E02004597',
        '1ZN' => 'E02004597',
        '1ZQ' => 'E02004598',
        '1ZR' => 'E02004597',
        '1ZS' => 'E02004454',
        '1ZT' => 'E02004597',
        '1ZU' => 'E02004597',
        '1ZW' => 'E02004454',
        '1ZY' => 'E02004454',
        '2AA' => 'E02004597',
        '2AB' => 'E02004597',
        '2AD' => 'E02004597',
        '2AE' => 'E02004597',
        '2AF' => 'E02004597',
        '2AG' => 'E02004597',
        '2AH' => 'E02004597',
        '2AJ' => 'E02004597',
        '2AL' => 'E02004597',
        '2AN' => 'E02004597',
        '2AP' => 'E02004597',
        '2AQ' => 'E02004597',
        '2AR' => 'E02004597',
        '2AS' => 'E02004597',
        '2AT' => 'E02004597',
        '2AU' => 'E02004597',
        '2AW' => 'E02004597',
        '2AX' => 'E02004597',
        '2AY' => 'E02004597',
        '2AZ' => 'E02004597',
        '2BA' => 'E02004597',
        '2BB' => 'E02004596',
        '2BD' => 'E02004596',
        '2BE' => 'E02004596',
        '2BG' => 'E02004596',
        '2BH' => 'E02004596',
        '2BJ' => 'E02004596',
        '2BL' => 'E02004596',
        '2BN' => 'E02004596',
        '2BP' => 'E02004596',
        '2BQ' => 'E02004596',
        '2BS' => 'E02004596',
        '2BT' => 'E02004596',
        '2BU' => 'E02004596',
        '2BW' => 'E02004596',
        '2BX' => 'E02004596',
        '2BY' => 'E02004595',
        '2BZ' => 'E02004596',
        '2DA' => 'E02004596',
        '2DB' => 'E02004596',
        '2DD' => 'E02004596',
        '2DE' => 'E02004596',
        '2DF' => 'E02004594',
        '2DG' => 'E02004596',
        '2DH' => 'E02004596',
        '2DJ' => 'E02004596',
        '2DL' => 'E02004596',
        '2DN' => 'E02004596',
        '2DP' => 'E02004596',
        '2DQ' => 'E02004597',
        '2DR' => 'E02004596',
        '2DS' => 'E02004596',
        '2DT' => 'E02004594',
        '2DU' => 'E02004594',
        '2DW' => 'E02004596',
        '2DX' => 'E02004594',
        '2DY' => 'E02004594',
        '2DZ' => 'E02004594',
        '2EA' => 'E02004594',
        '2EB' => 'E02004594',
        '2ED' => 'E02004596',
        '2EE' => 'E02004596',
        '2EF' => 'E02004594',
        '2EG' => 'E02004596',
        '2EH' => 'E02004596',
        '2EJ' => 'E02004596',
        '2EL' => 'E02004596',
        '2EN' => 'E02004596',
        '2EP' => 'E02004596',
        '2EQ' => 'E02004596',
        '2ER' => 'E02004596',
        '2ES' => 'E02004596',
        '2ET' => 'E02004596',
        '2EU' => 'E02004596',
        '2EW' => 'E02004596',
        '2EX' => 'E02004594',
        '2EY' => 'E02004597',
        '2EZ' => 'E02004594',
        '2FA' => 'E02004594',
        '2FB' => 'E02004594',
        '2FD' => 'E02004597',
        '2FE' => 'E02004594',
        '2FF' => 'E02004594',
        '2FG' => 'E02004597',
        '2FH' => 'E02004594',
        '2FJ' => 'E02004594',
        '2FL' => 'E02004594',
        '2FN' => 'E02004594',
        '2FP' => 'E02004594',
        '2FQ' => 'E02004594',
        '2FR' => 'E02004597',
        '2FS' => 'E02004594',
        '2FT' => 'E02004594',
        '2FU' => 'E02004594',
        '2FW' => 'E02004594',
        '2FX' => 'E02004594',
        '2GA' => 'E02004596',
        '2GB' => 'E02004597',
        '2GG' => 'E02004597',
        '2GJ' => 'E02004594',
        '2GN' => 'E02004594',
        '2GP' => 'E02004596',
        '2GQ' => 'E02004596',
        '2GZ' => 'E02004594',
        '2HA' => 'E02004596',
        '2HB' => 'E02004596',
        '2HD' => 'E02004596',
        '2HE' => 'E02004596',
        '2HF' => 'E02004596',
        '2HG' => 'E02004596',
        '2HH' => 'E02004596',
        '2HJ' => 'E02004596',
        '2HL' => 'E02004596',
        '2HN' => 'E02004596',
        '2HP' => 'E02004596',
        '2HQ' => 'E02004596',
        '2HR' => 'E02004596',
        '2HS' => 'E02004596',
        '2HT' => 'E02004596',
        '2HU' => 'E02004596',
        '2HW' => 'E02004596',
        '2HX' => 'E02004596',
        '2HY' => 'E02004596',
        '2HZ' => 'E02004596',
        '2JA' => 'E02004597',
        '2JB' => 'E02004596',
        '2JD' => 'E02004596',
        '2JE' => 'E02004596',
        '2JF' => 'E02004596',
        '2JG' => 'E02004596',
        '2JH' => 'E02004596',
        '2JJ' => 'E02004596',
        '2JL' => 'E02004596',
        '2JN' => 'E02004596',
        '2JP' => 'E02004596',
        '2JQ' => 'E02004596',
        '2JR' => 'E02004596',
        '2JS' => 'E02004597',
        '2JT' => 'E02004594',
        '2JU' => 'E02004594',
        '2JW' => 'E02004596',
        '2JX' => 'E02004594',
        '2JY' => 'E02004594',
        '2JZ' => 'E02004594',
        '2LA' => 'E02004594',
        '2LB' => 'E02004594',
        '2LD' => 'E02004594',
        '2LE' => 'E02004594',
        '2LF' => 'E02004594',
        '2LG' => 'E02004594',
        '2LH' => 'E02004594',
        '2LJ' => 'E02004594',
        '2LL' => 'E02004594',
        '2LN' => 'E02004594',
        '2LP' => 'E02004594',
        '2LQ' => 'E02004594',
        '2LR' => 'E02004594',
        '2LS' => 'E02004594',
        '2LT' => 'E02004594',
        '2LU' => 'E02004594',
        '2LW' => 'E02004594',
        '2LX' => 'E02004594',
        '2LY' => 'E02004594',
        '2LZ' => 'E02004594',
        '2NA' => 'E02004594',
        '2NB' => 'E02004594',
        '2ND' => 'E02004594',
        '2NE' => 'E02004594',
        '2NF' => 'E02004594',
        '2NG' => 'E02004594',
        '2NH' => 'E02004594',
        '2NJ' => 'E02004594',
        '2NL' => 'E02004594',
        '2NN' => 'E02004594',
        '2NP' => 'E02004594',
        '2NQ' => 'E02004594',
        '2NR' => 'E02004594',
        '2NS' => 'E02004594',
        '2NT' => 'E02004594',
        '2NU' => 'E02004594',
        '2NW' => 'E02004594',
        '2NX' => 'E02004594',
        '2NY' => 'E02004594',
        '2NZ' => 'E02004594',
        '2PA' => 'E02004594',
        '2PB' => 'E02004597',
        '2PD' => 'E02004597',
        '2PE' => 'E02004594',
        '2PF' => 'E02004594',
        '2PG' => 'E02004594',
        '2PH' => 'E02004594',
        '2PJ' => 'E02004594',
        '2PL' => 'E02004594',
        '2PN' => 'E02004594',
        '2PP' => 'E02004594',
        '2PQ' => 'E02004594',
        '2PR' => 'E02004594',
        '2PS' => 'E02004594',
        '2PT' => 'E02004594',
        '2PU' => 'E02004594',
        '2PW' => 'E02004594',
        '2PX' => 'E02004594',
        '2PY' => 'E02004594',
        '2PZ' => 'E02004594',
        '2QA' => 'E02004594',
        '2QB' => 'E02004594',
        '2QD' => 'E02004594',
        '2QE' => 'E02004594',
        '2QF' => 'E02004594',
        '2QG' => 'E02004594',
        '2QH' => 'E02004594',
        '2QJ' => 'E02004594',
        '2QL' => 'E02004594',
        '2QN' => 'E02004594',
        '2QP' => 'E02004594',
        '2QQ' => 'E02004594',
        '2QR' => 'E02004594',
        '2QS' => 'E02004594',
        '2QT' => 'E02004594',
        '2QU' => 'E02004594',
        '2QW' => 'E02004594',
        '2QX' => 'E02004594',
        '2QY' => 'E02004594',
        '2QZ' => 'E02004594',
        '2RA' => 'E02004594',
        '2RB' => 'E02004594',
        '2RD' => 'E02004594',
        '2RE' => 'E02004594',
        '2RF' => 'E02004594',
        '2RG' => 'E02004594',
        '2RH' => 'E02004594',
        '2RJ' => 'E02004594',
        '2RL' => 'E02004594',
        '2RN' => 'E02004594',
        '2RP' => 'E02004594',
        '2RQ' => 'E02004594',
        '2RR' => 'E02004597',
        '2RS' => 'E02004594',
        '2RT' => 'E02004594',
        '2RU' => 'E02004594',
        '2RZ' => 'E02004597',
        '2SD' => 'E02004597',
        '2SE' => 'E02004597',
        '2SF' => 'E02004597',
        '2SG' => 'E02004597',
        '2SH' => 'E02004594',
        '2SJ' => 'E02004597',
        '2SL' => 'E02004597',
        '2SQ' => 'E02004597',
        '2UY' => 'E02004594',
        '2WA' => 'E02004597',
        '2WB' => 'E02004597',
        '2WD' => 'E02004597',
        '2WE' => 'E02004597',
        '2WF' => 'E02004597',
        '2WJ' => 'E02004597',
        '2WL' => 'E02004597',
        '2WN' => 'E02004597',
        '2WP' => 'E02004597',
        '2WQ' => 'E02004597',
        '2WR' => 'E02004597',
        '2WS' => 'E02004597',
        '2WT' => 'E02004597',
        '2WU' => 'E02004597',
        '2WW' => 'E02004454',
        '2WX' => 'E02004597',
        '2WZ' => 'E02004597',
        '2YB' => 'E02004597',
        '2YF' => 'E02004597',
        '2YQ' => 'E02004597',
        '2YT' => 'E02004597',
        '2ZB' => 'E02004597',
        '3AA' => 'E02004598',
        '3AB' => 'E02004598',
        '3AD' => 'E02004598',
        '3AE' => 'E02004597',
        '3AF' => 'E02004598',
        '3AG' => 'E02004598',
        '3AH' => 'E02004598',
        '3AJ' => 'E02004598',
        '3AL' => 'E02004598',
        '3AN' => 'E02004598',
        '3AP' => 'E02004598',
        '3AQ' => 'E02004598',
        '3AR' => 'E02004598',
        '3AS' => 'E02004454',
        '3AT' => 'E02004598',
        '3AU' => 'E02004598',
        '3AW' => 'E02004598',
        '3AX' => 'E02004598',
        '3AY' => 'E02004598',
        '3AZ' => 'E02004598',
        '3BA' => 'E02004598',
        '3BB' => 'E02004597',
        '3BD' => 'E02004597',
        '3BE' => 'E02004597',
        '3BG' => 'E02004598',
        '3BH' => 'E02004597',
        '3BJ' => 'E02004597',
        '3BL' => 'E02004598',
        '3BN' => 'E02004598',
        '3BP' => 'E02004598',
        '3BQ' => 'E02004597',
        '3BS' => 'E02004598',
        '3BT' => 'E02004598',
        '3BU' => 'E02004598',
        '3BW' => 'E02004598',
        '3BX' => 'E02004598',
        '3BY' => 'E02004598',
        '3BZ' => 'E02004598',
        '3DA' => 'E02004598',
        '3DB' => 'E02004598',
        '3DD' => 'E02004598',
        '3DE' => 'E02004598',
        '3DF' => 'E02004598',
        '3DG' => 'E02004598',
        '3DH' => 'E02004598',
        '3DJ' => 'E02004598',
        '3DL' => 'E02004598',
        '3DN' => 'E02004598',
        '3DP' => 'E02004598',
        '3DQ' => 'E02004598',
        '3DR' => 'E02004598',
        '3DS' => 'E02004598',
        '3DT' => 'E02004598',
        '3DU' => 'E02004598',
        '3DW' => 'E02004598',
        '3DX' => 'E02004598',
        '3DY' => 'E02004598',
        '3DZ' => 'E02004598',
        '3EA' => 'E02004597',
        '3EB' => 'E02004598',
        '3ED' => 'E02004598',
        '3EE' => 'E02004598',
        '3EF' => 'E02004598',
        '3EG' => 'E02004598',
        '3EH' => 'E02004598',
        '3EJ' => 'E02004598',
        '3EL' => 'E02004598',
        '3EN' => 'E02004597',
        '3EP' => 'E02004598',
        '3EQ' => 'E02004598',
        '3ER' => 'E02004598',
        '3ES' => 'E02004598',
        '3ET' => 'E02004598',
        '3EU' => 'E02004598',
        '3EW' => 'E02004598',
        '3EX' => 'E02004598',
        '3EY' => 'E02004598',
        '3EZ' => 'E02004598',
        '3FB' => 'E02004597',
        '3FD' => 'E02004598',
        '3FE' => 'E02004598',
        '3FF' => 'E02004598',
        '3FG' => 'E02004597',
        '3FH' => 'E02004598',
        '3FJ' => 'E02004598',
        '3FL' => 'E02004598',
        '3FN' => 'E02004598',
        '3FP' => 'E02004598',
        '3FQ' => 'E02004598',
        '3FR' => 'E02004598',
        '3FS' => 'E02004598',
        '3FT' => 'E02004598',
        '3FU' => 'E02004598',
        '3FW' => 'E02004598',
        '3FX' => 'E02004598',
        '3FY' => 'E02004598',
        '3FZ' => 'E02004598',
        '3GA' => 'E02004597',
        '3GB' => 'E02004598',
        '3GD' => 'E02004598',
        '3GE' => 'E02004598',
        '3GF' => 'E02004598',
        '3GG' => 'E02004598',
        '3GH' => 'E02004598',
        '3GJ' => 'E02004598',
        '3GL' => 'E02004598',
        '3GN' => 'E02004598',
        '3GP' => 'E02004598',
        '3GQ' => 'E02004598',
        '3GR' => 'E02004598',
        '3GS' => 'E02004598',
        '3GT' => 'E02004598',
        '3GU' => 'E02004598',
        '3GW' => 'E02004598',
        '3GX' => 'E02004454',
        '3GY' => 'E02004598',
        '3GZ' => 'E02004597',
        '3HA' => 'E02004598',
        '3HB' => 'E02004598',
        '3HD' => 'E02004598',
        '3HE' => 'E02004598',
        '3HF' => 'E02004598',
        '3HG' => 'E02004598',
        '3HH' => 'E02004598',
        '3HJ' => 'E02004597',
        '3HL' => 'E02004598',
        '3HN' => 'E02004598',
        '3HP' => 'E02004598',
        '3HQ' => 'E02004598',
        '3HR' => 'E02004598',
        '3HS' => 'E02004598',
        '3HT' => 'E02004598',
        '3HU' => 'E02004598',
        '3HW' => 'E02004598',
        '3HX' => 'E02004598',
        '3HY' => 'E02004598',
        '3HZ' => 'E02004598',
        '3JA' => 'E02004598',
        '3JB' => 'E02004598',
        '3JD' => 'E02004598',
        '3JE' => 'E02004598',
        '3JF' => 'E02004598',
        '3JG' => 'E02004598',
        '3JH' => 'E02004598',
        '3JJ' => 'E02004598',
        '3JL' => 'E02004598',
        '3JN' => 'E02004598',
        '3JP' => 'E02004598',
        '3JQ' => 'E02004598',
        '3JR' => 'E02004598',
        '3JS' => 'E02004598',
        '3JT' => 'E02004598',
        '3JU' => 'E02004598',
        '3JW' => 'E02004598',
        '3JX' => 'E02004598',
        '3JY' => 'E02004598',
        '3JZ' => 'E02004598',
        '3LA' => 'E02004598',
        '3LB' => 'E02004598',
        '3LD' => 'E02004598',
        '3LE' => 'E02004598',
        '3LF' => 'E02004598',
        '3LG' => 'E02004598',
        '3LH' => 'E02004598',
        '3LJ' => 'E02004598',
        '3LL' => 'E02004598',
        '3LN' => 'E02004598',
        '3LP' => 'E02004598',
        '3LQ' => 'E02004598',
        '3LR' => 'E02004598',
        '3LS' => 'E02004598',
        '3LT' => 'E02004598',
        '3LU' => 'E02004598',
        '3LW' => 'E02004598',
        '3LX' => 'E02004598',
        '3LY' => 'E02004598',
        '3LZ' => 'E02004598',
        '3NA' => 'E02004598',
        '3NB' => 'E02004598',
        '3ND' => 'E02004598',
        '3NE' => 'E02004598',
        '3NF' => 'E02004598',
        '3NG' => 'E02004598',
        '3NH' => 'E02004598',
        '3NJ' => 'E02004598',
        '3NL' => 'E02004598',
        '3NN' => 'E02004598',
        '3NP' => 'E02004598',
        '3NQ' => 'E02004598',
        '3NR' => 'E02004598',
        '3NS' => 'E02004598',
        '3NT' => 'E02004598',
        '3NU' => 'E02004598',
        '3NW' => 'E02004598',
        '3NX' => 'E02004598',
        '3NY' => 'E02004598',
        '3NZ' => 'E02004598',
        '3PA' => 'E02004598',
        '3PB' => 'E02004598',
        '3PD' => 'E02004485',
        '3PE' => 'E02004485',
        '3PF' => 'E02004485',
        '3PG' => 'E02004485',
        '3PH' => 'E02004485',
        '3PJ' => 'E02004485',
        '3PL' => 'E02004598',
        '3PN' => 'E02004598',
        '3PP' => 'E02004598',
        '3PQ' => 'E02004485',
        '3PR' => 'E02004598',
        '3PS' => 'E02004598',
        '3PT' => 'E02004594',
        '3PU' => 'E02004594',
        '3PW' => 'E02004594',
        '3PX' => 'E02004594',
        '3PY' => 'E02004594',
        '3PZ' => 'E02004594',
        '3QA' => 'E02004594',
        '3QB' => 'E02004594',
        '3QD' => 'E02004594',
        '3QE' => 'E02004594',
        '3QF' => 'E02004594',
        '3QG' => 'E02004598',
        '3QH' => 'E02004598',
        '3QJ' => 'E02004598',
        '3QL' => 'E02004598',
        '3QN' => 'E02004598',
        '3QP' => 'E02004598',
        '3QQ' => 'E02004598',
        '3QR' => 'E02004598',
        '3QS' => 'E02004594',
        '3QT' => 'E02004596',
        '3QU' => 'E02004594',
        '3QW' => 'E02004598',
        '3QX' => 'E02004454',
        '3QY' => 'E02004594',
        '3QZ' => 'E02004598',
        '3RA' => 'E02004598',
        '3RB' => 'E02004598',
        '3RD' => 'E02004598',
        '3RE' => 'E02004598',
        '3RF' => 'E02004598',
        '3RG' => 'E02004598',
        '3RH' => 'E02004598',
        '3RJ' => 'E02004598',
        '3RL' => 'E02004598',
        '3RN' => 'E02004598',
        '3RP' => 'E02004598',
        '3RQ' => 'E02004598',
        '3RR' => 'E02004598',
        '3RS' => 'E02004598',
        '3RT' => 'E02004598',
        '3RU' => 'E02004598',
        '3RW' => 'E02004598',
        '3RX' => 'E02004598',
        '3RY' => 'E02004598',
        '3RZ' => 'E02004598',
        '3SA' => 'E02004598',
        '3SB' => 'E02004597',
        '3SD' => 'E02004597',
        '3SE' => 'E02004598',
        '3SF' => 'E02004598',
        '3SG' => 'E02004598',
        '3SH' => 'E02004598',
        '3SJ' => 'E02004598',
        '3SL' => 'E02004598',
        '3SN' => 'E02004598',
        '3SP' => 'E02004598',
        '3SQ' => 'E02004598',
        '3SR' => 'E02004598',
        '3SS' => 'E02004598',
        '3ST' => 'E02004598',
        '3SU' => 'E02004598',
        '3SW' => 'E02004598',
        '3SX' => 'E02004598',
        '3SY' => 'E02004598',
        '3SZ' => 'E02004598',
        '3TA' => 'E02004598',
        '3TB' => 'E02004598',
        '3TD' => 'E02004598',
        '3TE' => 'E02004598',
        '3TF' => 'E02004598',
        '3TG' => 'E02004597',
        '3TH' => 'E02004598',
        '3TJ' => 'E02004598',
        '3TL' => 'E02004598',
        '3TN' => 'E02004598',
        '3TP' => 'E02004597',
        '3TQ' => 'E02004597',
        '3TR' => 'E02004454',
        '3TT' => 'E02004598',
        '3TU' => 'E02004598',
        '3TW' => 'E02004598',
        '3TX' => 'E02004597',
        '3TY' => 'E02004598',
        '3TZ' => 'E02004597',
        '3UA' => 'E02004597',
        '3UB' => 'E02004598',
        '3UD' => 'E02004597',
        '3UE' => 'E02004597',
        '3UF' => 'E02004598',
        '3UG' => 'E02004598',
        '3UH' => 'E02004598',
        '3UJ' => 'E02004598',
        '3UL' => 'E02004598',
        '3UN' => 'E02004598',
        '3UP' => 'E02004598',
        '3UQ' => 'E02004598',
        '3UR' => 'E02004598',
        '3US' => 'E02004598',
        '3UT' => 'E02004598',
        '3UU' => 'E02004598',
        '3UW' => 'E02004598',
        '3UX' => 'E02004598',
        '3UY' => 'E02004597',
        '3UZ' => 'E02004597',
        '3WA' => 'E02004597',
        '3WB' => 'E02004597',
        '3WD' => 'E02004597',
        '3WE' => 'E02004597',
        '3WF' => 'E02004597',
        '3WG' => 'E02004597',
        '3WH' => 'E02004597',
        '3WJ' => 'E02004597',
        '3WL' => 'E02004597',
        '3WN' => 'E02004597',
        '3WP' => 'E02004597',
        '3WQ' => 'E02004598',
        '3WR' => 'E02004597',
        '3WS' => 'E02004597',
        '3WT' => 'E02004597',
        '3WU' => 'E02004597',
        '3WW' => 'E02004454',
        '3WX' => 'E02004454',
        '3WY' => 'E02004597',
        '3WZ' => 'E02004597',
        '3XA' => 'E02004597',
        '3XB' => 'E02004598',
        '3XD' => 'E02004485',
        '3XF' => 'E02004598',
        '3XG' => 'E02004598',
        '3XH' => 'E02004598',
        '3XJ' => 'E02004598',
        '3XL' => 'E02004598',
        '3XP' => 'E02004485',
        '3XQ' => 'E02004598',
        '3XS' => 'E02004597',
        '3XT' => 'E02004597',
        '3XU' => 'E02004454',
        '3XW' => 'E02004597',
        '3XX' => 'E02004597',
        '3XY' => 'E02004597',
        '3XZ' => 'E02004597',
        '3YB' => 'E02004454',
        '3YE' => 'E02004597',
        '3YQ' => 'E02004597',
        '3YX' => 'E02004597',
        '3YZ' => 'E02004597',
        '4AA' => 'E02004596',
        '4AB' => 'E02004596',
        '4AD' => 'E02004597',
        '4AE' => 'E02004597',
        '4AF' => 'E02004597',
        '4AG' => 'E02004597',
        '4AH' => 'E02004596',
        '4AJ' => 'E02004596',
        '4AL' => 'E02004597',
        '4AN' => 'E02004597',
        '4AP' => 'E02004597',
        '4AQ' => 'E02004597',
        '4AR' => 'E02004597',
        '4AS' => 'E02004597',
        '4BD' => 'E02004597',
        '4BF' => 'E02004597',
        '9AF' => 'E02004454',
        '9AN' => 'E02004454',
        '9AQ' => 'E02004454',
        '9AR' => 'E02004454',
        '9AT' => 'E02004454',
        '9AX' => 'E02004454',
        '9BB' => 'E02004454',
        '9BD' => 'E02004454',
        '9BE' => 'E02004454',
        '9BG' => 'E02004454',
        '9BL' => 'E02004454',
        '9BP' => 'E02004454',
        '9BR' => 'E02004454',
        '9BS' => 'E02004454',
        '9BT' => 'E02004454',
        '9BU' => 'E02004454',
        '9BW' => 'E02004454',
        '9BX' => 'E02004454',
        '9BY' => 'E02004454',
        '9BZ' => 'E02004454',
        '9DA' => 'E02004454',
        '9DB' => 'E02004454',
        '9DD' => 'E02004454',
        '9DE' => 'E02004454',
        '9DF' => 'E02004454',
        '9DG' => 'E02004454',
        '9DH' => 'E02004454',
        '9DJ' => 'E02004454',
        '9DL' => 'E02004454',
        '9DN' => 'E02004454',
        '9DP' => 'E02004454',
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
