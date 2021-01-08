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
final class NE99
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02001731',
        '1AB' => 'E02001731',
        '1AD' => 'E02001731',
        '1AE' => 'E02001731',
        '1AF' => 'E02001731',
        '1AG' => 'E02001731',
        '1AH' => 'E02001731',
        '1AJ' => 'E02001731',
        '1AL' => 'E02001731',
        '1AN' => 'E02001731',
        '1AP' => 'E02001731',
        '1AQ' => 'E02001731',
        '1AR' => 'E02001731',
        '1AS' => 'E02001731',
        '1AT' => 'E02001731',
        '1AU' => 'E02001731',
        '1AW' => 'E02001731',
        '1AX' => 'E02001731',
        '1AY' => 'E02001731',
        '1AZ' => 'E02001731',
        '1BA' => 'E02001731',
        '1BB' => 'E02001731',
        '1BD' => 'E02001731',
        '1BE' => 'E02001731',
        '1BF' => 'E02001731',
        '1BG' => 'E02001731',
        '1BH' => 'E02001731',
        '1BJ' => 'E02001731',
        '1BL' => 'E02001731',
        '1BN' => 'E02001731',
        '1BP' => 'E02001731',
        '1BQ' => 'E02001731',
        '1BR' => 'E02001731',
        '1BS' => 'E02001731',
        '1BT' => 'E02001731',
        '1BU' => 'E02001731',
        '1BW' => 'E02001731',
        '1BX' => 'E02001731',
        '1BY' => 'E02001731',
        '1BZ' => 'E02001731',
        '1DA' => 'E02001731',
        '1DB' => 'E02001731',
        '1DD' => 'E02001731',
        '1DE' => 'E02001731',
        '1DF' => 'E02001731',
        '1DG' => 'E02001731',
        '1DH' => 'E02001731',
        '1DJ' => 'E02001731',
        '1DL' => 'E02001731',
        '1DN' => 'E02001731',
        '1DP' => 'E02001731',
        '1DQ' => 'E02001731',
        '1DR' => 'E02001731',
        '1DS' => 'E02001731',
        '1DT' => 'E02001731',
        '1DU' => 'E02001731',
        '1DW' => 'E02001731',
        '1DX' => 'E02001731',
        '1DY' => 'E02001731',
        '1DZ' => 'E02001731',
        '1EA' => 'E02001731',
        '1EB' => 'E02001731',
        '1ED' => 'E02001731',
        '1EE' => 'E02001731',
        '1EF' => 'E02001731',
        '1EG' => 'E02001731',
        '1EH' => 'E02001719',
        '1EJ' => 'E02001731',
        '1EL' => 'E02001731',
        '1EN' => 'E02001731',
        '1EP' => 'E02001731',
        '1EQ' => 'E02001731',
        '1ER' => 'E02001731',
        '1ES' => 'E02001731',
        '1ET' => 'E02001731',
        '1EU' => 'E02001731',
        '1EW' => 'E02001731',
        '1EX' => 'E02001731',
        '1EY' => 'E02001731',
        '1EZ' => 'E02001731',
        '1FA' => 'E02001731',
        '1FB' => 'E02001731',
        '1FD' => 'E02001731',
        '1FE' => 'E02001731',
        '1FF' => 'E02001731',
        '1FG' => 'E02001731',
        '1FH' => 'E02001731',
        '1FJ' => 'E02001731',
        '1FL' => 'E02001731',
        '1FN' => 'E02001731',
        '1FP' => 'E02001731',
        '1FQ' => 'E02001731',
        '1FR' => 'E02001731',
        '1FS' => 'E02001731',
        '1FT' => 'E02001731',
        '1FU' => 'E02001731',
        '1FW' => 'E02001731',
        '1FX' => 'E02001731',
        '1FY' => 'E02001731',
        '1FZ' => 'E02001731',
        '1GA' => 'E02001731',
        '1GB' => 'E02001731',
        '1GD' => 'E02001731',
        '1GE' => 'E02001731',
        '1GF' => 'E02001731',
        '1GG' => 'E02001731',
        '1GH' => 'E02001731',
        '1GJ' => 'E02001731',
        '1GL' => 'E02001731',
        '1GN' => 'E02001731',
        '1GP' => 'E02001731',
        '1GQ' => 'E02001731',
        '1GR' => 'E02001731',
        '1GS' => 'E02001731',
        '1GT' => 'E02001731',
        '1GU' => 'E02001731',
        '1GW' => 'E02001731',
        '1GX' => 'E02001731',
        '1GY' => 'E02001731',
        '1GZ' => 'E02001731',
        '1HA' => 'E02001731',
        '1HB' => 'E02001731',
        '1HD' => 'E02001731',
        '1HE' => 'E02001731',
        '1HF' => 'E02001731',
        '1HG' => 'E02001731',
        '1HH' => 'E02001731',
        '1HJ' => 'E02001731',
        '1HL' => 'E02001731',
        '1HN' => 'E02001731',
        '1HP' => 'E02001731',
        '1HQ' => 'E02001731',
        '1HR' => 'E02001731',
        '1HS' => 'E02001731',
        '1HT' => 'E02001731',
        '1HU' => 'E02001731',
        '1HW' => 'E02001731',
        '1HX' => 'E02001731',
        '1HY' => 'E02001731',
        '1HZ' => 'E02001731',
        '1JA' => 'E02001731',
        '1JB' => 'E02001731',
        '1JD' => 'E02001731',
        '1JE' => 'E02001731',
        '1JF' => 'E02001731',
        '1JG' => 'E02001731',
        '1JH' => 'E02001731',
        '1JJ' => 'E02001731',
        '1JL' => 'E02001731',
        '1JN' => 'E02001731',
        '1JP' => 'E02001731',
        '1JQ' => 'E02001731',
        '1JR' => 'E02001731',
        '1JS' => 'E02001731',
        '1JT' => 'E02001731',
        '1JU' => 'E02001731',
        '1JW' => 'E02001731',
        '1JX' => 'E02001731',
        '1JY' => 'E02001731',
        '1JZ' => 'E02001731',
        '1LA' => 'E02001731',
        '1LB' => 'E02001731',
        '1LD' => 'E02001731',
        '1LE' => 'E02001731',
        '1LF' => 'E02001731',
        '1LG' => 'E02001731',
        '1LH' => 'E02001731',
        '1LJ' => 'E02001731',
        '1LL' => 'E02001731',
        '1LN' => 'E02001731',
        '1LP' => 'E02001731',
        '1LQ' => 'E02001731',
        '1LR' => 'E02001731',
        '1LS' => 'E02001731',
        '1LT' => 'E02001731',
        '1LU' => 'E02001731',
        '1LW' => 'E02001731',
        '1LX' => 'E02001731',
        '1LY' => 'E02001731',
        '1LZ' => 'E02001731',
        '1NA' => 'E02001731',
        '1NB' => 'E02001731',
        '1ND' => 'E02001731',
        '1NE' => 'E02001731',
        '1NF' => 'E02001731',
        '1NG' => 'E02001731',
        '1NH' => 'E02001731',
        '1NJ' => 'E02001731',
        '1NL' => 'E02001731',
        '1NN' => 'E02001731',
        '1NP' => 'E02001731',
        '1NQ' => 'E02001731',
        '1NR' => 'E02001731',
        '1NS' => 'E02001731',
        '1NT' => 'E02001731',
        '1NU' => 'E02001731',
        '1NW' => 'E02001731',
        '1NX' => 'E02001731',
        '1NY' => 'E02001731',
        '1NZ' => 'E02001731',
        '1PA' => 'E02001731',
        '1PB' => 'E02001731',
        '1PD' => 'E02001731',
        '1PE' => 'E02001731',
        '1PF' => 'E02001731',
        '1PG' => 'E02001731',
        '1PH' => 'E02001731',
        '1PJ' => 'E02001731',
        '1PL' => 'E02001731',
        '1PN' => 'E02001731',
        '1PP' => 'E02001731',
        '1PQ' => 'E02001731',
        '1PR' => 'E02001731',
        '1PS' => 'E02001731',
        '1PT' => 'E02001731',
        '1PU' => 'E02001731',
        '1PW' => 'E02001731',
        '1PX' => 'E02001731',
        '1PY' => 'E02001731',
        '1PZ' => 'E02001731',
        '1QA' => 'E02001731',
        '1QB' => 'E02001731',
        '1QD' => 'E02001731',
        '1QE' => 'E02001731',
        '1QF' => 'E02001731',
        '1QG' => 'E02001731',
        '1QH' => 'E02001731',
        '1QJ' => 'E02001731',
        '1QL' => 'E02001731',
        '1QN' => 'E02001731',
        '1QP' => 'E02001731',
        '1QQ' => 'E02001731',
        '1QR' => 'E02001731',
        '1QS' => 'E02001731',
        '1QT' => 'E02001731',
        '1QU' => 'E02001731',
        '1QW' => 'E02001731',
        '1QX' => 'E02001731',
        '1QY' => 'E02001731',
        '1QZ' => 'E02001731',
        '1RA' => 'E02001731',
        '1RB' => 'E02001731',
        '1RD' => 'E02001731',
        '1RE' => 'E02001731',
        '1RF' => 'E02001731',
        '1RG' => 'E02001731',
        '1RH' => 'E02001731',
        '1RJ' => 'E02001731',
        '1RL' => 'E02001731',
        '1RN' => 'E02001731',
        '1RP' => 'E02001731',
        '1RQ' => 'E02001731',
        '1RR' => 'E02001731',
        '1RS' => 'E02001731',
        '1RT' => 'E02001731',
        '1RU' => 'E02001731',
        '1RW' => 'E02001731',
        '1RX' => 'E02001731',
        '1RY' => 'E02001731',
        '1RZ' => 'E02001731',
        '1SA' => 'E02001731',
        '1SB' => 'E02001731',
        '1SD' => 'E02001731',
        '1SE' => 'E02001731',
        '1SF' => 'E02001731',
        '1SG' => 'E02001731',
        '1SH' => 'E02001731',
        '1SJ' => 'E02001731',
        '1SL' => 'E02001731',
        '1SN' => 'E02001731',
        '1SP' => 'E02001731',
        '1SQ' => 'E02001731',
        '1SR' => 'E02001731',
        '1SS' => 'E02001731',
        '1ST' => 'E02001731',
        '1SU' => 'E02001731',
        '1SW' => 'E02001731',
        '1SX' => 'E02001731',
        '1SY' => 'E02001731',
        '1SZ' => 'E02001731',
        '1TA' => 'E02001731',
        '1TB' => 'E02001731',
        '1TD' => 'E02001731',
        '1TE' => 'E02001731',
        '1TF' => 'E02001731',
        '1TG' => 'E02001731',
        '1TH' => 'E02001731',
        '1TJ' => 'E02001731',
        '1TL' => 'E02001731',
        '1TN' => 'E02001731',
        '1TP' => 'E02001731',
        '1TQ' => 'E02001731',
        '1TR' => 'E02001731',
        '1TS' => 'E02001731',
        '1TT' => 'E02001731',
        '1TU' => 'E02001731',
        '1TW' => 'E02001731',
        '1TX' => 'E02001731',
        '1TY' => 'E02001731',
        '1TZ' => 'E02001731',
        '1UA' => 'E02001731',
        '1UB' => 'E02001731',
        '1UD' => 'E02001731',
        '1UE' => 'E02001731',
        '1UF' => 'E02001731',
        '1UG' => 'E02001731',
        '1UH' => 'E02001731',
        '1UJ' => 'E02001731',
        '1UL' => 'E02001731',
        '1UN' => 'E02001731',
        '1UP' => 'E02001731',
        '1UQ' => 'E02001731',
        '1UR' => 'E02001731',
        '1US' => 'E02001731',
        '1UT' => 'E02001731',
        '1UU' => 'E02001731',
        '1UW' => 'E02001731',
        '1UX' => 'E02001731',
        '1UY' => 'E02001731',
        '1UZ' => 'E02001731',
        '1WA' => 'E02001731',
        '1WB' => 'E02001731',
        '1WD' => 'E02001731',
        '1WE' => 'E02001731',
        '1WF' => 'E02001731',
        '1WG' => 'E02001731',
        '1WH' => 'E02001731',
        '1WJ' => 'E02001731',
        '1WL' => 'E02001731',
        '1WN' => 'E02001731',
        '1WP' => 'E02001731',
        '1WQ' => 'E02001731',
        '1WR' => 'E02001731',
        '1WS' => 'E02001731',
        '1WT' => 'E02001731',
        '1WU' => 'E02001731',
        '1WW' => 'E02001731',
        '1WX' => 'E02001731',
        '1WY' => 'E02001731',
        '1WZ' => 'E02001731',
        '1XA' => 'E02001731',
        '1XB' => 'E02001731',
        '1XD' => 'E02001731',
        '1XE' => 'E02001731',
        '1XF' => 'E02001731',
        '1XG' => 'E02001731',
        '1XH' => 'E02001731',
        '1XJ' => 'E02001731',
        '1XL' => 'E02001731',
        '1XN' => 'E02001731',
        '1XP' => 'E02001731',
        '1XQ' => 'E02001731',
        '1XR' => 'E02001731',
        '1XS' => 'E02001731',
        '1XT' => 'E02001731',
        '1XU' => 'E02001731',
        '1XW' => 'E02001731',
        '1XX' => 'E02001731',
        '1XY' => 'E02001731',
        '1XZ' => 'E02001731',
        '1YA' => 'E02001731',
        '1YB' => 'E02001731',
        '1YD' => 'E02001731',
        '1YE' => 'E02001731',
        '1YF' => 'E02001731',
        '1YG' => 'E02001731',
        '1YH' => 'E02001731',
        '1YJ' => 'E02001731',
        '1YL' => 'E02001731',
        '1YN' => 'E02001731',
        '1YP' => 'E02001731',
        '1YQ' => 'E02001731',
        '1YR' => 'E02001731',
        '1YS' => 'E02001731',
        '1YT' => 'E02001731',
        '1YU' => 'E02001731',
        '1YW' => 'E02001731',
        '1YX' => 'E02001731',
        '1YY' => 'E02001723',
        '1YZ' => 'E02001731',
        '1ZA' => 'E02001731',
        '1ZB' => 'E02001731',
        '1ZD' => 'E02001731',
        '1ZE' => 'E02001731',
        '1ZF' => 'E02001731',
        '1ZG' => 'E02001731',
        '1ZH' => 'E02001731',
        '1ZJ' => 'E02001731',
        '1ZL' => 'E02001731',
        '1ZN' => 'E02001731',
        '1ZP' => 'E02001731',
        '1ZQ' => 'E02001731',
        '1ZR' => 'E02001731',
        '1ZS' => 'E02001731',
        '1ZT' => 'E02001731',
        '1ZU' => 'E02001731',
        '1ZW' => 'E02001731',
        '1ZX' => 'E02001731',
        '1ZY' => 'E02001731',
        '1ZZ' => 'E02001731',
        '2AA' => 'E02001731',
        '2AB' => 'E02001731',
        '2AD' => 'E02001731',
        '2AE' => 'E02001731',
        '2AF' => 'E02001731',
        '2AG' => 'E02001731',
        '2AH' => 'E02001731',
        '2AL' => 'E02001731',
        '2AN' => 'E02001731',
        '2AP' => 'E02001731',
        '2AQ' => 'E02001731',
        '2AR' => 'E02001731',
        '2AS' => 'E02001731',
        '2AT' => 'E02001731',
        '2AU' => 'E02001731',
        '2AW' => 'E02001731',
        '2AX' => 'E02001731',
        '2AY' => 'E02001731',
        '2BA' => 'E02001731',
        '2BB' => 'E02001731',
        '2BD' => 'E02001731',
        '2BE' => 'E02001731',
        '2BH' => 'E02001731',
        '2BL' => 'E02001731',
        '2BN' => 'E02001731',
        '2BP' => 'E02001731',
        '2BQ' => 'E02001731',
        '2BR' => 'E02001731',
        '2BS' => 'E02001731',
        '2BT' => 'E02001731',
        '2BW' => 'E02001731',
        '2BX' => 'E02001731',
        '2DA' => 'E02001731',
        '2DB' => 'E02001731',
        '2DD' => 'E02001731',
        '2DE' => 'E02001731',
        '2DF' => 'E02001731',
        '2DH' => 'E02001731',
        '2DJ' => 'E02001731',
        '2DL' => 'E02001731',
        '2DN' => 'E02001731',
        '2DP' => 'E02001731',
        '2DQ' => 'E02001731',
        '2DT' => 'E02001731',
        '2DW' => 'E02001731',
        '2DX' => 'E02001731',
        '2EA' => 'E02001731',
        '2EB' => 'E02001731',
        '2ED' => 'E02001731',
        '2EE' => 'E02001731',
        '2EF' => 'E02001731',
        '2EN' => 'E02001731',
        '2ET' => 'E02001731',
        '2FA' => 'E02001731',
        '2FB' => 'E02001731',
        '2FD' => 'E02001731',
        '2FE' => 'E02001731',
        '2FF' => 'E02001731',
        '2FG' => 'E02001731',
        '2FH' => 'E02001731',
        '2FJ' => 'E02001731',
        '2FL' => 'E02001731',
        '2FN' => 'E02001731',
        '2FP' => 'E02001731',
        '2FQ' => 'E02001731',
        '2FR' => 'E02001731',
        '2FS' => 'E02001731',
        '2FT' => 'E02001731',
        '2FU' => 'E02001731',
        '2FX' => 'E02001731',
        '2FY' => 'E02001731',
        '2FZ' => 'E02001731',
        '2GA' => 'E02001731',
        '2GB' => 'E02001731',
        '2GD' => 'E02001731',
        '2GE' => 'E02001731',
        '2GF' => 'E02001731',
        '2GG' => 'E02001731',
        '2GH' => 'E02001731',
        '2GJ' => 'E02001731',
        '2GL' => 'E02001731',
        '2GN' => 'E02001731',
        '2GX' => 'E02001731',
        '2GY' => 'E02001731',
        '2GZ' => 'E02001731',
        '2HA' => 'E02001731',
        '2HB' => 'E02001731',
        '2LE' => 'E02001731',
        '2LU' => 'E02001731',
        '2LZ' => 'E02001731',
        '2NE' => 'E02001731',
        '2PA' => 'E02001731',
        '2PR' => 'E02001731',
        '2PT' => 'E02001731',
        '2TA' => 'E02001731',
        '2TG' => 'E02001731',
        '2TH' => 'E02001731',
        '2TJ' => 'E02001731',
        '2TL' => 'E02001731',
        '2TN' => 'E02001731',
        '2TP' => 'E02001731',
        '2TQ' => 'E02001731',
        '2TR' => 'E02001731',
        '2TS' => 'E02001731',
        '2TT' => 'E02001731',
        '2TU' => 'E02001731',
        '2TW' => 'E02001731',
        '2TX' => 'E02001731',
        '2TY' => 'E02001731',
        '2TZ' => 'E02001731',
        '2UA' => 'E02001731',
        '2UB' => 'E02001731',
        '2UD' => 'E02001731',
        '2UE' => 'E02001731',
        '2UF' => 'E02001731',
        '2UG' => 'E02001731',
        '2UH' => 'E02001731',
        '2UJ' => 'E02001731',
        '2UL' => 'E02001731',
        '2UN' => 'E02001731',
        '2UP' => 'E02001731',
        '2UQ' => 'E02001731',
        '2UR' => 'E02001731',
        '2US' => 'E02001731',
        '2UT' => 'E02001731',
        '2UU' => 'E02001731',
        '2UW' => 'E02001731',
        '2UX' => 'E02001731',
        '2UY' => 'E02001731',
        '2UZ' => 'E02001731',
        '2WA' => 'E02001731',
        '2WB' => 'E02001731',
        '2WD' => 'E02001731',
        '2WE' => 'E02001731',
        '2WF' => 'E02001731',
        '2WG' => 'E02001731',
        '2WH' => 'E02001731',
        '2WJ' => 'E02001731',
        '2WL' => 'E02001731',
        '2WN' => 'E02001731',
        '2WP' => 'E02001731',
        '2WQ' => 'E02001731',
        '2WR' => 'E02001731',
        '2WS' => 'E02001731',
        '2WT' => 'E02001731',
        '2WU' => 'E02001731',
        '2WW' => 'E02001731',
        '2WX' => 'E02001731',
        '2WY' => 'E02001731',
        '2WZ' => 'E02001731',
        '2XA' => 'E02001731',
        '2XB' => 'E02001731',
        '2XD' => 'E02001731',
        '2XE' => 'E02001731',
        '2XF' => 'E02001731',
        '2XG' => 'E02001731',
        '2XH' => 'E02001731',
        '2XJ' => 'E02001731',
        '2XL' => 'E02001731',
        '2XN' => 'E02001731',
        '2XP' => 'E02001731',
        '2XQ' => 'E02001731',
        '2XR' => 'E02001731',
        '2XS' => 'E02001731',
        '2XT' => 'E02001731',
        '2XU' => 'E02001731',
        '2XW' => 'E02001731',
        '2XX' => 'E02001731',
        '2XY' => 'E02001731',
        '2XZ' => 'E02001731',
        '2YA' => 'E02001731',
        '2YB' => 'E02001731',
        '2YD' => 'E02001731',
        '2YE' => 'E02001731',
        '2YF' => 'E02001731',
        '2YG' => 'E02001731',
        '2YH' => 'E02001731',
        '2YJ' => 'E02001731',
        '2YL' => 'E02001731',
        '2YN' => 'E02001731',
        '2YP' => 'E02001731',
        '2YQ' => 'E02001731',
        '2YR' => 'E02001731',
        '2YS' => 'E02001731',
        '2YT' => 'E02001731',
        '2YU' => 'E02001731',
        '2YW' => 'E02001731',
        '2YX' => 'E02001731',
        '2YY' => 'E02001731',
        '2YZ' => 'E02001731',
        '2ZD' => 'E02001731',
        '2ZE' => 'E02001731',
        '2ZF' => 'E02001731',
        '2ZG' => 'E02001731',
        '2ZH' => 'E02001731',
        '2ZJ' => 'E02001731',
        '2ZL' => 'E02001731',
        '2ZN' => 'E02001731',
        '2ZP' => 'E02001731',
        '2ZQ' => 'E02001731',
        '2ZR' => 'E02001731',
        '2ZS' => 'E02001731',
        '2ZT' => 'E02001731',
        '2ZU' => 'E02001731',
        '2ZW' => 'E02001731',
        '2ZX' => 'E02001731',
        '2ZY' => 'E02001731',
        '4AA' => 'E02001731',
        '4AB' => 'E02001731',
        '4AD' => 'E02001731',
        '4AE' => 'E02001731',
        '4AF' => 'E02001731',
        '4AG' => 'E02001731',
        '4AH' => 'E02001731',
        '4AJ' => 'E02001731',
        '4AL' => 'E02001731',
        '4BA' => 'E02001731',
        '4BB' => 'E02001731',
        '4BD' => 'E02001731',
        '4BE' => 'E02001731',
        '4BF' => 'E02001731',
        '4BG' => 'E02001731',
        '4BH' => 'E02001731',
        '4BJ' => 'E02001731',
        '4BL' => 'E02001731',
        '4BN' => 'E02001731',
        '4BP' => 'E02001731',
        '4BQ' => 'E02001731',
        '4BR' => 'E02001731',
        '4BS' => 'E02001731',
        '4BT' => 'E02001731',
        '4BW' => 'E02001731',
        '4BX' => 'E02001731',
        '4BZ' => 'E02001731',
        '4DA' => 'E02001731',
        '4DB' => 'E02001731',
        '4TE' => 'E02001731',
        '4TQ' => 'E02001731',
        '4TR' => 'E02001731',
        '4TS' => 'E02001731',
        '4TT' => 'E02001731',
        '4TU' => 'E02001731',
        '4TW' => 'E02001731',
        '4TX' => 'E02001731',
        '4TY' => 'E02001731',
        '4TZ' => 'E02001731',
        '4UA' => 'E02001731',
        '4UB' => 'E02001731',
        '4UD' => 'E02001731',
        '4UE' => 'E02001731',
        '4UF' => 'E02001731',
        '4UG' => 'E02001731',
        '4UH' => 'E02001731',
        '4UJ' => 'E02001731',
        '4UL' => 'E02001731',
        '4UN' => 'E02001731',
        '4UP' => 'E02001731',
        '4UQ' => 'E02001731',
        '4UT' => 'E02001731',
        '4UU' => 'E02001731',
        '4UW' => 'E02001731',
        '4UX' => 'E02001731',
        '4UY' => 'E02001731',
        '4UZ' => 'E02001731',
        '4WA' => 'E02001731',
        '4WB' => 'E02001731',
        '4WD' => 'E02001731',
        '4WE' => 'E02001731',
        '4WF' => 'E02001731',
        '4WG' => 'E02001731',
        '4WH' => 'E02001731',
        '4WJ' => 'E02001731',
        '4WL' => 'E02001731',
        '4WN' => 'E02001731',
        '4WP' => 'E02001731',
        '4WQ' => 'E02001731',
        '4WR' => 'E02001731',
        '4WS' => 'E02001731',
        '4WT' => 'E02001731',
        '4WU' => 'E02001731',
        '4WW' => 'E02001731',
        '4WX' => 'E02001731',
        '4WY' => 'E02001731',
        '4WZ' => 'E02001731',
        '4XA' => 'E02001731',
        '4XB' => 'E02001731',
        '4XD' => 'E02001731',
        '4XE' => 'E02001731',
        '4XF' => 'E02001731',
        '4XG' => 'E02001731',
        '4XH' => 'E02001731',
        '4XJ' => 'E02001731',
        '4XL' => 'E02001731',
        '4XN' => 'E02001731',
        '4XP' => 'E02001731',
        '4XQ' => 'E02001731',
        '4XR' => 'E02001731',
        '4XS' => 'E02001731',
        '4XT' => 'E02001731',
        '4XU' => 'E02001731',
        '4XW' => 'E02001731',
        '4XX' => 'E02001731',
        '4XY' => 'E02001731',
        '4XZ' => 'E02001731',
        '4YA' => 'E02001731',
        '4YB' => 'E02001731',
        '4YD' => 'E02001731',
        '4YE' => 'E02001731',
        '4YF' => 'E02001731',
        '4YG' => 'E02001731',
        '4YH' => 'E02001731',
        '4YJ' => 'E02001731',
        '4YL' => 'E02001731',
        '4YN' => 'E02001731',
        '4YP' => 'E02001731',
        '4YQ' => 'E02001731',
        '4YR' => 'E02001731',
        '4YS' => 'E02001731',
        '4YT' => 'E02001731',
        '4YU' => 'E02001731',
        '4YW' => 'E02001731',
        '4YX' => 'E02001731',
        '4YY' => 'E02001731',
        '4YZ' => 'E02001731',
        '4ZB' => 'E02001731',
        '4ZD' => 'E02001731',
        '4ZE' => 'E02001731',
        '4ZF' => 'E02001731',
        '4ZG' => 'E02001731',
        '4ZH' => 'E02001731',
        '4ZJ' => 'E02001731',
        '4ZL' => 'E02001731',
        '4ZN' => 'E02001731',
        '4ZP' => 'E02001731',
        '4ZQ' => 'E02001731',
        '4ZR' => 'E02001731',
        '4ZS' => 'E02001731',
        '4ZT' => 'E02001731',
        '4ZU' => 'E02001731',
        '4ZW' => 'E02001731',
        '4ZX' => 'E02001731',
        '4ZY' => 'E02001731',
        '5AA' => 'E02001731',
        '5AD' => 'E02001731',
        '5AE' => 'E02001731',
        '5AF' => 'E02001731',
        '5AG' => 'E02001731',
        '5AH' => 'E02001731',
        '5AJ' => 'E02001731',
        '5AL' => 'E02001731',
        '5AN' => 'E02001731',
        '5AP' => 'E02001731',
        '5AQ' => 'E02001731',
        '5AR' => 'E02001731',
        '5AS' => 'E02001731',
        '5AT' => 'E02001731',
        '5AU' => 'E02001731',
        '5AW' => 'E02001731',
        '5AX' => 'E02001731',
        '5AY' => 'E02001731',
        '5AZ' => 'E02001731',
        '5BA' => 'E02001731',
        '5BB' => 'E02001731',
        '5BD' => 'E02001731',
        '5BE' => 'E02001731',
        '5BF' => 'E02001731',
        '5BG' => 'E02001731',
        '5BH' => 'E02001731',
        '5BJ' => 'E02001731',
        '5BL' => 'E02001731',
        '5BN' => 'E02001731',
        '5BP' => 'E02001731',
        '5BQ' => 'E02001731',
        '5BR' => 'E02001731',
        '5BS' => 'E02001731',
        '5BT' => 'E02001731',
        '5BU' => 'E02001731',
        '5BW' => 'E02001731',
        '5BX' => 'E02001731',
        '5BY' => 'E02001731',
        '5BZ' => 'E02001731',
        '5DA' => 'E02001731',
        '5DB' => 'E02001731',
        '5DD' => 'E02001731',
        '5DE' => 'E02001731',
        '5DF' => 'E02001731',
        '5DG' => 'E02001731',
        '5DH' => 'E02001731',
        '5DJ' => 'E02001731',
        '5DL' => 'E02001731',
        '5DN' => 'E02001731',
        '5DP' => 'E02001731',
        '5DQ' => 'E02001731',
        '5DR' => 'E02001731',
        '5DS' => 'E02001731',
        '5DT' => 'E02001731',
        '5DU' => 'E02001731',
        '5DW' => 'E02001731',
        '5DX' => 'E02001731',
        '5DY' => 'E02001731',
        '5DZ' => 'E02001731',
        '5EA' => 'E02001731',
        '5EB' => 'E02001731',
        '5ED' => 'E02001731',
        '5EE' => 'E02001731',
        '5EF' => 'E02001731',
        '5EG' => 'E02001731',
        '5EH' => 'E02001731',
        '5EJ' => 'E02001731',
        '5EL' => 'E02001731',
        '5EN' => 'E02001731',
        '5EP' => 'E02001731',
        '5EQ' => 'E02001731',
        '5ER' => 'E02001731',
        '5ES' => 'E02001731',
        '5ZZ' => 'E02001731',
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
