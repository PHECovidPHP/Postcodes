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
final class TR1
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02003910',
        '1AB' => 'E02003908',
        '1AD' => 'E02003910',
        '1AE' => 'E02003908',
        '1AF' => 'E02003908',
        '1AG' => 'E02003908',
        '1AH' => 'E02003908',
        '1AJ' => 'E02003908',
        '1AL' => 'E02003908',
        '1AN' => 'E02003908',
        '1AP' => 'E02003908',
        '1AQ' => 'E02003908',
        '1AR' => 'E02003908',
        '1AT' => 'E02003908',
        '1AU' => 'E02003908',
        '1AW' => 'E02003908',
        '1AX' => 'E02003908',
        '1AY' => 'E02003908',
        '1AZ' => 'E02003908',
        '1BA' => 'E02003908',
        '1BB' => 'E02003908',
        '1BD' => 'E02003910',
        '1BE' => 'E02003908',
        '1BG' => 'E02003908',
        '1BH' => 'E02003908',
        '1BJ' => 'E02003908',
        '1BL' => 'E02003908',
        '1BN' => 'E02003908',
        '1BP' => 'E02003908',
        '1BQ' => 'E02003908',
        '1BS' => 'E02003908',
        '1BT' => 'E02003908',
        '1BU' => 'E02003908',
        '1BW' => 'E02003908',
        '1BX' => 'E02003908',
        '1BY' => 'E02003908',
        '1BZ' => 'E02003908',
        '1DA' => 'E02003908',
        '1DB' => 'E02003908',
        '1DD' => 'E02003908',
        '1DE' => 'E02003908',
        '1DF' => 'E02003910',
        '1DG' => 'E02003908',
        '1DH' => 'E02003908',
        '1DJ' => 'E02003910',
        '1DL' => 'E02003908',
        '1DN' => 'E02003908',
        '1DP' => 'E02003910',
        '1DQ' => 'E02003910',
        '1DR' => 'E02003908',
        '1DS' => 'E02003908',
        '1DT' => 'E02003910',
        '1DU' => 'E02003910',
        '1DW' => 'E02003910',
        '1DX' => 'E02003910',
        '1DY' => 'E02003908',
        '1DZ' => 'E02003910',
        '1EA' => 'E02003910',
        '1EB' => 'E02003910',
        '1ED' => 'E02003910',
        '1EE' => 'E02003910',
        '1EF' => 'E02003910',
        '1EG' => 'E02003908',
        '1EH' => 'E02003910',
        '1EJ' => 'E02003910',
        '1EL' => 'E02003910',
        '1EN' => 'E02003910',
        '1EP' => 'E02003910',
        '1EQ' => 'E02003910',
        '1ER' => 'E02003910',
        '1ES' => 'E02003910',
        '1ET' => 'E02003910',
        '1EU' => 'E02003910',
        '1EW' => 'E02003910',
        '1EX' => 'E02003910',
        '1EY' => 'E02003910',
        '1EZ' => 'E02003910',
        '1FA' => 'E02003908',
        '1FB' => 'E02003908',
        '1FD' => 'E02003908',
        '1FE' => 'E02003908',
        '1FF' => 'E02003908',
        '1FG' => 'E02003908',
        '1FH' => 'E02003908',
        '1FJ' => 'E02003908',
        '1FL' => 'E02003908',
        '1FN' => 'E02003910',
        '1FP' => 'E02003908',
        '1FQ' => 'E02003908',
        '1FR' => 'E02003908',
        '1FS' => 'E02003908',
        '1FT' => 'E02003908',
        '1FU' => 'E02003908',
        '1FW' => 'E02003908',
        '1FX' => 'E02003908',
        '1FY' => 'E02003908',
        '1FZ' => 'E02003908',
        '1GA' => 'E02003908',
        '1GB' => 'E02003910',
        '1GD' => 'E02003910',
        '1GE' => 'E02003908',
        '1GF' => 'E02003910',
        '1GG' => 'E02003910',
        '1GH' => 'E02003908',
        '1GJ' => 'E02003910',
        '1GL' => 'E02003908',
        '1GN' => 'E02003910',
        '1GP' => 'E02003908',
        '1GQ' => 'E02003910',
        '1GR' => 'E02003908',
        '1GS' => 'E02003912',
        '1GT' => 'E02003910',
        '1GU' => 'E02003908',
        '1GW' => 'E02003908',
        '1GX' => 'E02003908',
        '1GY' => 'E02003910',
        '1HA' => 'E02003910',
        '1HB' => 'E02003910',
        '1HD' => 'E02003908',
        '1HE' => 'E02003908',
        '1HF' => 'E02003908',
        '1HG' => 'E02003908',
        '1HH' => 'E02003908',
        '1HJ' => 'E02003908',
        '1HL' => 'E02003908',
        '1HN' => 'E02003908',
        '1HP' => 'E02003908',
        '1HQ' => 'E02003908',
        '1HR' => 'E02003908',
        '1HS' => 'E02003908',
        '1HT' => 'E02003908',
        '1HU' => 'E02003908',
        '1HW' => 'E02003908',
        '1HX' => 'E02003908',
        '1HY' => 'E02003908',
        '1HZ' => 'E02003908',
        '1JA' => 'E02003908',
        '1JB' => 'E02003908',
        '1JD' => 'E02003908',
        '1JE' => 'E02003908',
        '1JF' => 'E02003908',
        '1JG' => 'E02003908',
        '1JH' => 'E02003910',
        '1JJ' => 'E02003908',
        '1JL' => 'E02003910',
        '1JN' => 'E02003910',
        '1JP' => 'E02003908',
        '1JQ' => 'E02003909',
        '1JR' => 'E02003910',
        '1JS' => 'E02003910',
        '1JT' => 'E02003910',
        '1JU' => 'E02003908',
        '1JW' => 'E02003910',
        '1JX' => 'E02003908',
        '1JY' => 'E02003908',
        '1JZ' => 'E02003908',
        '1LA' => 'E02003908',
        '1LB' => 'E02003908',
        '1LD' => 'E02003908',
        '1LE' => 'E02003908',
        '1LF' => 'E02003908',
        '1LG' => 'E02003908',
        '1LH' => 'E02003908',
        '1LJ' => 'E02003908',
        '1LL' => 'E02003908',
        '1LN' => 'E02003908',
        '1LP' => 'E02003908',
        '1LQ' => 'E02003908',
        '1LR' => 'E02003908',
        '1LS' => 'E02003908',
        '1LT' => 'E02003908',
        '1LU' => 'E02003908',
        '1LW' => 'E02003908',
        '1LX' => 'E02003908',
        '1LY' => 'E02003908',
        '1LZ' => 'E02003908',
        '1NA' => 'E02003908',
        '1NB' => 'E02003908',
        '1ND' => 'E02003908',
        '1NE' => 'E02003908',
        '1NF' => 'E02003908',
        '1NG' => 'E02003908',
        '1NH' => 'E02003908',
        '1NJ' => 'E02003908',
        '1NL' => 'E02003908',
        '1NN' => 'E02003908',
        '1NP' => 'E02003910',
        '1NQ' => 'E02003908',
        '1NR' => 'E02003908',
        '1NS' => 'E02003908',
        '1NT' => 'E02003908',
        '1NU' => 'E02003908',
        '1NW' => 'E02003908',
        '1NX' => 'E02003908',
        '1NY' => 'E02003908',
        '1NZ' => 'E02003908',
        '1PA' => 'E02003908',
        '1PB' => 'E02003908',
        '1PD' => 'E02003908',
        '1PE' => 'E02003908',
        '1PF' => 'E02003908',
        '1PG' => 'E02003908',
        '1PH' => 'E02003908',
        '1PJ' => 'E02003908',
        '1PL' => 'E02003908',
        '1PN' => 'E02003908',
        '1PP' => 'E02003908',
        '1PQ' => 'E02003908',
        '1PR' => 'E02003908',
        '1PS' => 'E02003908',
        '1PT' => 'E02003908',
        '1PU' => 'E02003910',
        '1PW' => 'E02003908',
        '1PX' => 'E02003908',
        '1PY' => 'E02003908',
        '1PZ' => 'E02003908',
        '1QA' => 'E02003908',
        '1QB' => 'E02003908',
        '1QD' => 'E02003908',
        '1QE' => 'E02003908',
        '1QF' => 'E02003909',
        '1QG' => 'E02003910',
        '1QH' => 'E02003908',
        '1QJ' => 'E02003908',
        '1QL' => 'E02003908',
        '1QN' => 'E02003908',
        '1QP' => 'E02003908',
        '1QQ' => 'E02003908',
        '1QR' => 'E02003908',
        '1QS' => 'E02003908',
        '1QT' => 'E02003908',
        '1QU' => 'E02003908',
        '1QW' => 'E02003908',
        '1QX' => 'E02003908',
        '1QY' => 'E02003910',
        '1QZ' => 'E02003908',
        '1RA' => 'E02003908',
        '1RB' => 'E02003908',
        '1RD' => 'E02003908',
        '1RE' => 'E02003908',
        '1RF' => 'E02003908',
        '1RG' => 'E02003908',
        '1RH' => 'E02003908',
        '1RJ' => 'E02003908',
        '1RL' => 'E02003908',
        '1RN' => 'E02003908',
        '1RP' => 'E02003908',
        '1RQ' => 'E02003908',
        '1RR' => 'E02003908',
        '1RS' => 'E02003908',
        '1RT' => 'E02003908',
        '1RU' => 'E02003908',
        '1RW' => 'E02003908',
        '1RX' => 'E02003908',
        '1RY' => 'E02003908',
        '1RZ' => 'E02003908',
        '1SA' => 'E02003908',
        '1SB' => 'E02003908',
        '1SD' => 'E02003908',
        '1SE' => 'E02003910',
        '1SF' => 'E02003910',
        '1SG' => 'E02003908',
        '1SH' => 'E02003912',
        '1SJ' => 'E02003912',
        '1SL' => 'E02003912',
        '1SN' => 'E02003912',
        '1SP' => 'E02003912',
        '1SQ' => 'E02003912',
        '1SR' => 'E02003912',
        '1SS' => 'E02003912',
        '1ST' => 'E02003912',
        '1SU' => 'E02003908',
        '1SW' => 'E02003912',
        '1SX' => 'E02003912',
        '1SY' => 'E02003912',
        '1SZ' => 'E02003912',
        '1TA' => 'E02003908',
        '1TB' => 'E02003912',
        '1TD' => 'E02003912',
        '1TE' => 'E02003912',
        '1TF' => 'E02003908',
        '1TG' => 'E02003912',
        '1TH' => 'E02003908',
        '1TJ' => 'E02003908',
        '1TL' => 'E02003908',
        '1TN' => 'E02003908',
        '1TP' => 'E02003908',
        '1TQ' => 'E02003912',
        '1TR' => 'E02003908',
        '1TS' => 'E02003908',
        '1TT' => 'E02003908',
        '1TU' => 'E02003908',
        '1TW' => 'E02003912',
        '1TX' => 'E02003908',
        '1TY' => 'E02003910',
        '1TZ' => 'E02003908',
        '1UA' => 'E02003908',
        '1UB' => 'E02003910',
        '1UD' => 'E02003912',
        '1UE' => 'E02003908',
        '1UF' => 'E02003908',
        '1UG' => 'E02003909',
        '1UH' => 'E02003908',
        '1UJ' => 'E02003908',
        '1UL' => 'E02003912',
        '1UN' => 'E02003910',
        '1UP' => 'E02003908',
        '1UQ' => 'E02003910',
        '1UR' => 'E02003908',
        '1UT' => 'E02003908',
        '1UU' => 'E02003908',
        '1UW' => 'E02003910',
        '1UX' => 'E02003908',
        '1UY' => 'E02003909',
        '1UZ' => 'E02003908',
        '1WD' => 'E02003910',
        '1WE' => 'E02003908',
        '1WF' => 'E02003910',
        '1WG' => 'E02003910',
        '1WH' => 'E02003910',
        '1WJ' => 'E02003910',
        '1WL' => 'E02003908',
        '1WN' => 'E02003910',
        '1WP' => 'E02003910',
        '1WQ' => 'E02003910',
        '1WR' => 'E02003910',
        '1WS' => 'E02003910',
        '1WT' => 'E02003910',
        '1WU' => 'E02003910',
        '1WW' => 'E02003910',
        '1WX' => 'E02003910',
        '1WY' => 'E02003910',
        '1WZ' => 'E02003910',
        '1XA' => 'E02003908',
        '1XB' => 'E02003908',
        '1XD' => 'E02003908',
        '1XE' => 'E02003908',
        '1XF' => 'E02003908',
        '1XG' => 'E02003908',
        '1XH' => 'E02003908',
        '1XJ' => 'E02003908',
        '1XL' => 'E02003910',
        '1XN' => 'E02003908',
        '1XP' => 'E02003910',
        '1XQ' => 'E02003908',
        '1XR' => 'E02003908',
        '1XS' => 'E02003910',
        '1XT' => 'E02003908',
        '1XU' => 'E02003910',
        '1XW' => 'E02003908',
        '1XX' => 'E02003908',
        '1XY' => 'E02003908',
        '1XZ' => 'E02003908',
        '1YA' => 'E02003908',
        '1YB' => 'E02003908',
        '1YD' => 'E02003908',
        '1YE' => 'E02003910',
        '1YF' => 'E02003908',
        '1YG' => 'E02003910',
        '1YH' => 'E02003910',
        '1YJ' => 'E02003910',
        '1YL' => 'E02003910',
        '1YN' => 'E02003910',
        '1YP' => 'E02003908',
        '1YQ' => 'E02003910',
        '1YR' => 'E02003908',
        '1YS' => 'E02003908',
        '1YT' => 'E02003908',
        '1YU' => 'E02003908',
        '1YW' => 'E02003910',
        '1YX' => 'E02003908',
        '1YY' => 'E02003908',
        '1YZ' => 'E02003910',
        '1ZA' => 'E02003910',
        '1ZB' => 'E02003910',
        '1ZD' => 'E02003910',
        '1ZE' => 'E02003908',
        '1ZF' => 'E02003908',
        '1ZG' => 'E02003908',
        '1ZH' => 'E02003908',
        '1ZJ' => 'E02003910',
        '1ZL' => 'E02003908',
        '1ZN' => 'E02003908',
        '1ZP' => 'E02003908',
        '1ZQ' => 'E02003908',
        '1ZR' => 'E02003910',
        '1ZT' => 'E02003910',
        '1ZU' => 'E02003910',
        '1ZX' => 'E02003910',
        '2AA' => 'E02003910',
        '2AB' => 'E02003910',
        '2AE' => 'E02003910',
        '2AF' => 'E02003910',
        '2AG' => 'E02003910',
        '2AH' => 'E02003910',
        '2AJ' => 'E02003910',
        '2AL' => 'E02003910',
        '2AN' => 'E02003910',
        '2AP' => 'E02003910',
        '2AQ' => 'E02003910',
        '2AR' => 'E02003910',
        '2AS' => 'E02003910',
        '2AT' => 'E02003910',
        '2AU' => 'E02003910',
        '2AW' => 'E02003910',
        '2AX' => 'E02003910',
        '2AY' => 'E02003910',
        '2AZ' => 'E02003910',
        '2BA' => 'E02003910',
        '2BB' => 'E02003910',
        '2BD' => 'E02003910',
        '2BE' => 'E02003910',
        '2BG' => 'E02003910',
        '2BH' => 'E02003910',
        '2BJ' => 'E02003910',
        '2BL' => 'E02003910',
        '2BN' => 'E02003910',
        '2BP' => 'E02003910',
        '2BQ' => 'E02003910',
        '2BS' => 'E02003910',
        '2BT' => 'E02003910',
        '2BU' => 'E02003910',
        '2BW' => 'E02003910',
        '2BX' => 'E02003910',
        '2BY' => 'E02003910',
        '2BZ' => 'E02003910',
        '2DA' => 'E02003910',
        '2DB' => 'E02003910',
        '2DD' => 'E02003910',
        '2DE' => 'E02003910',
        '2DF' => 'E02003910',
        '2DG' => 'E02003910',
        '2DH' => 'E02003910',
        '2DJ' => 'E02003910',
        '2DL' => 'E02003910',
        '2DN' => 'E02003910',
        '2DP' => 'E02003910',
        '2DQ' => 'E02003910',
        '2DR' => 'E02003910',
        '2DS' => 'E02003910',
        '2DT' => 'E02003910',
        '2DU' => 'E02003910',
        '2DW' => 'E02003910',
        '2DX' => 'E02003910',
        '2DY' => 'E02003910',
        '2DZ' => 'E02003910',
        '2EA' => 'E02003910',
        '2EB' => 'E02003910',
        '2ED' => 'E02003910',
        '2EE' => 'E02003910',
        '2EF' => 'E02003910',
        '2EG' => 'E02003910',
        '2EH' => 'E02003910',
        '2EJ' => 'E02003910',
        '2EL' => 'E02003910',
        '2EN' => 'E02003910',
        '2EP' => 'E02003910',
        '2EQ' => 'E02003910',
        '2ER' => 'E02003910',
        '2ES' => 'E02003910',
        '2ET' => 'E02003910',
        '2EU' => 'E02003910',
        '2EW' => 'E02003910',
        '2EX' => 'E02003910',
        '2EY' => 'E02003910',
        '2EZ' => 'E02003910',
        '2FA' => 'E02003910',
        '2FB' => 'E02003910',
        '2FD' => 'E02003910',
        '2FE' => 'E02003910',
        '2FF' => 'E02003910',
        '2FG' => 'E02003910',
        '2FH' => 'E02003910',
        '2FJ' => 'E02003910',
        '2FL' => 'E02003910',
        '2FN' => 'E02003910',
        '2FP' => 'E02003910',
        '2FQ' => 'E02003910',
        '2FS' => 'E02003910',
        '2GA' => 'E02003910',
        '2GB' => 'E02003910',
        '2GD' => 'E02003910',
        '2GE' => 'E02003910',
        '2GF' => 'E02003910',
        '2GG' => 'E02003910',
        '2GH' => 'E02003910',
        '2GJ' => 'E02003910',
        '2GL' => 'E02003910',
        '2GN' => 'E02003910',
        '2GP' => 'E02003910',
        '2GQ' => 'E02003910',
        '2GS' => 'E02003910',
        '2GT' => 'E02003910',
        '2HA' => 'E02003910',
        '2HB' => 'E02003910',
        '2HD' => 'E02003910',
        '2HE' => 'E02003910',
        '2HF' => 'E02003910',
        '2HG' => 'E02003910',
        '2HH' => 'E02003910',
        '2HJ' => 'E02003910',
        '2HL' => 'E02003910',
        '2HN' => 'E02003910',
        '2HP' => 'E02003910',
        '2HQ' => 'E02003910',
        '2HR' => 'E02003910',
        '2HS' => 'E02003910',
        '2HT' => 'E02003910',
        '2HU' => 'E02003910',
        '2HW' => 'E02003910',
        '2HX' => 'E02003910',
        '2HY' => 'E02003910',
        '2HZ' => 'E02003910',
        '2JA' => 'E02003910',
        '2JB' => 'E02003910',
        '2JD' => 'E02003910',
        '2JE' => 'E02003910',
        '2JF' => 'E02003910',
        '2JG' => 'E02003910',
        '2JH' => 'E02003910',
        '2JJ' => 'E02003910',
        '2JL' => 'E02003910',
        '2JN' => 'E02003910',
        '2JP' => 'E02003910',
        '2JQ' => 'E02003910',
        '2JR' => 'E02003910',
        '2JS' => 'E02003910',
        '2JT' => 'E02003910',
        '2JU' => 'E02003910',
        '2JW' => 'E02003910',
        '2JX' => 'E02003910',
        '2JY' => 'E02003910',
        '2JZ' => 'E02003910',
        '2LA' => 'E02003910',
        '2LB' => 'E02003910',
        '2LD' => 'E02003910',
        '2LE' => 'E02003910',
        '2LF' => 'E02003910',
        '2LG' => 'E02003910',
        '2LH' => 'E02003910',
        '2LJ' => 'E02003910',
        '2LL' => 'E02003910',
        '2LN' => 'E02003910',
        '2LP' => 'E02003910',
        '2LQ' => 'E02003910',
        '2LR' => 'E02003910',
        '2LS' => 'E02003910',
        '2LT' => 'E02003910',
        '2LU' => 'E02003910',
        '2LW' => 'E02003910',
        '2LX' => 'E02003910',
        '2LY' => 'E02003910',
        '2LZ' => 'E02003910',
        '2NA' => 'E02003908',
        '2NB' => 'E02003910',
        '2ND' => 'E02003910',
        '2NE' => 'E02003910',
        '2NF' => 'E02003910',
        '2NG' => 'E02003910',
        '2NH' => 'E02003910',
        '2NJ' => 'E02003910',
        '2NL' => 'E02003910',
        '2NN' => 'E02003910',
        '2NP' => 'E02003910',
        '2NQ' => 'E02003910',
        '2NR' => 'E02003910',
        '2NS' => 'E02003910',
        '2NT' => 'E02003910',
        '2NU' => 'E02003910',
        '2NW' => 'E02003910',
        '2NX' => 'E02003910',
        '2NY' => 'E02003910',
        '2NZ' => 'E02003910',
        '2PA' => 'E02003910',
        '2PB' => 'E02003910',
        '2PD' => 'E02003910',
        '2PE' => 'E02003910',
        '2PF' => 'E02003910',
        '2PG' => 'E02003910',
        '2PH' => 'E02003910',
        '2PJ' => 'E02003910',
        '2PL' => 'E02003910',
        '2PN' => 'E02003910',
        '2PP' => 'E02003910',
        '2PQ' => 'E02003910',
        '2PR' => 'E02003910',
        '2PS' => 'E02003910',
        '2PT' => 'E02003910',
        '2PU' => 'E02003910',
        '2PW' => 'E02003910',
        '2PX' => 'E02003910',
        '2PY' => 'E02003910',
        '2PZ' => 'E02003910',
        '2QA' => 'E02003910',
        '2QB' => 'E02003910',
        '2QD' => 'E02003910',
        '2QE' => 'E02003910',
        '2QF' => 'E02003910',
        '2QG' => 'E02003910',
        '2QH' => 'E02003910',
        '2QJ' => 'E02003910',
        '2QL' => 'E02003910',
        '2QP' => 'E02003910',
        '2QQ' => 'E02003910',
        '2QR' => 'E02003910',
        '2QS' => 'E02003910',
        '2QT' => 'E02003910',
        '2QU' => 'E02003910',
        '2QW' => 'E02003910',
        '2QX' => 'E02003910',
        '2QY' => 'E02003910',
        '2QZ' => 'E02003910',
        '2RA' => 'E02003910',
        '2RB' => 'E02003910',
        '2RD' => 'E02003910',
        '2RE' => 'E02003910',
        '2RF' => 'E02003910',
        '2RG' => 'E02003910',
        '2RH' => 'E02003910',
        '2RJ' => 'E02003910',
        '2RL' => 'E02003910',
        '2RN' => 'E02003910',
        '2RP' => 'E02003910',
        '2RQ' => 'E02003910',
        '2RR' => 'E02003910',
        '2RS' => 'E02003910',
        '2RT' => 'E02003910',
        '2RU' => 'E02003910',
        '2RW' => 'E02003910',
        '2RX' => 'E02003910',
        '2RY' => 'E02003910',
        '2RZ' => 'E02003910',
        '2SA' => 'E02003910',
        '2SB' => 'E02003910',
        '2SD' => 'E02003910',
        '2SE' => 'E02003910',
        '2SF' => 'E02003910',
        '2SG' => 'E02003910',
        '2SH' => 'E02003910',
        '2SJ' => 'E02003910',
        '2SL' => 'E02003910',
        '2SN' => 'E02003910',
        '2SP' => 'E02003910',
        '2SQ' => 'E02003910',
        '2SR' => 'E02003910',
        '2SS' => 'E02003910',
        '2ST' => 'E02003910',
        '2SU' => 'E02003910',
        '2SW' => 'E02003910',
        '2SY' => 'E02003910',
        '2TA' => 'E02003910',
        '2TB' => 'E02003910',
        '2TE' => 'E02003910',
        '2TF' => 'E02003910',
        '2TG' => 'E02003910',
        '2TH' => 'E02003910',
        '2TJ' => 'E02003910',
        '2TN' => 'E02003910',
        '2TP' => 'E02003910',
        '2TQ' => 'E02003910',
        '2TR' => 'E02003910',
        '2TS' => 'E02003910',
        '2TU' => 'E02003910',
        '2TW' => 'E02003910',
        '2TX' => 'E02003910',
        '2TZ' => 'E02003910',
        '2UA' => 'E02003910',
        '2UB' => 'E02003910',
        '2UD' => 'E02003910',
        '2UE' => 'E02003910',
        '2UF' => 'E02003910',
        '2UG' => 'E02003910',
        '2UH' => 'E02003910',
        '2UJ' => 'E02003910',
        '2UL' => 'E02003910',
        '2UN' => 'E02003910',
        '2UP' => 'E02003910',
        '2UQ' => 'E02003910',
        '2UR' => 'E02003910',
        '2UT' => 'E02003910',
        '2UU' => 'E02003910',
        '2UX' => 'E02003910',
        '2UY' => 'E02003910',
        '2WA' => 'E02003910',
        '2WB' => 'E02003910',
        '2WD' => 'E02003910',
        '2WG' => 'E02003910',
        '2WH' => 'E02003910',
        '2WJ' => 'E02003910',
        '2WS' => 'E02003910',
        '2WT' => 'E02003910',
        '2WU' => 'E02003910',
        '2WW' => 'E02003910',
        '2WX' => 'E02003910',
        '2WY' => 'E02003910',
        '2WZ' => 'E02003910',
        '2XA' => 'E02003910',
        '2XB' => 'E02003910',
        '2XD' => 'E02003910',
        '2XE' => 'E02003910',
        '2XF' => 'E02003910',
        '2XG' => 'E02003910',
        '2XH' => 'E02003910',
        '2XJ' => 'E02003910',
        '2XL' => 'E02003910',
        '2XN' => 'E02003910',
        '2XP' => 'E02003910',
        '2XQ' => 'E02003910',
        '2XR' => 'E02003910',
        '2XS' => 'E02003910',
        '2XT' => 'E02003910',
        '2XU' => 'E02003910',
        '2XW' => 'E02003910',
        '2XX' => 'E02003910',
        '2XY' => 'E02003910',
        '2XZ' => 'E02003910',
        '2YA' => 'E02003910',
        '2YB' => 'E02003910',
        '2YD' => 'E02003910',
        '2YE' => 'E02003910',
        '2YF' => 'E02003910',
        '2YG' => 'E02003910',
        '2YH' => 'E02003910',
        '2YJ' => 'E02003910',
        '2YL' => 'E02003910',
        '2YN' => 'E02003910',
        '2YP' => 'E02003910',
        '2YQ' => 'E02003910',
        '2YR' => 'E02003910',
        '2YS' => 'E02003910',
        '2YT' => 'E02003910',
        '2YU' => 'E02003910',
        '2YW' => 'E02003910',
        '2YX' => 'E02003910',
        '2YY' => 'E02003910',
        '2YZ' => 'E02003910',
        '2ZA' => 'E02003910',
        '2ZB' => 'E02003910',
        '2ZD' => 'E02003910',
        '2ZE' => 'E02003910',
        '2ZH' => 'E02003910',
        '2ZJ' => 'E02003910',
        '2ZL' => 'E02003910',
        '2ZN' => 'E02003910',
        '2ZP' => 'E02003910',
        '2ZQ' => 'E02003910',
        '2ZR' => 'E02003910',
        '2ZS' => 'E02003910',
        '2ZT' => 'E02003910',
        '2ZX' => 'E02003910',
        '2ZY' => 'E02003910',
        '3AA' => 'E02003910',
        '3AB' => 'E02003910',
        '3AD' => 'E02003910',
        '3AE' => 'E02003910',
        '3AF' => 'E02003910',
        '3AG' => 'E02003910',
        '3AH' => 'E02003910',
        '3AJ' => 'E02003910',
        '3AL' => 'E02003910',
        '3AN' => 'E02003910',
        '3AP' => 'E02003910',
        '3AQ' => 'E02003910',
        '3AR' => 'E02003910',
        '3AS' => 'E02003910',
        '3AT' => 'E02003909',
        '3AU' => 'E02003910',
        '3AW' => 'E02003910',
        '3AX' => 'E02003910',
        '3AY' => 'E02003910',
        '3AZ' => 'E02003910',
        '3BA' => 'E02003910',
        '3BB' => 'E02003910',
        '3BD' => 'E02003910',
        '3BE' => 'E02003910',
        '3BG' => 'E02003910',
        '3BH' => 'E02003910',
        '3BJ' => 'E02003910',
        '3BL' => 'E02003910',
        '3BN' => 'E02003910',
        '3BP' => 'E02003910',
        '3BQ' => 'E02003910',
        '3BS' => 'E02003910',
        '3BT' => 'E02003910',
        '3BU' => 'E02003910',
        '3BW' => 'E02003910',
        '3BX' => 'E02003910',
        '3BY' => 'E02003910',
        '3BZ' => 'E02003910',
        '3DA' => 'E02003910',
        '3DB' => 'E02003910',
        '3DD' => 'E02003910',
        '3DE' => 'E02003910',
        '3DF' => 'E02003910',
        '3DG' => 'E02003910',
        '3DH' => 'E02003910',
        '3DJ' => 'E02003910',
        '3DL' => 'E02003910',
        '3DN' => 'E02003910',
        '3DP' => 'E02003910',
        '3DQ' => 'E02003910',
        '3DR' => 'E02003909',
        '3DS' => 'E02003910',
        '3DT' => 'E02003909',
        '3DU' => 'E02003910',
        '3DW' => 'E02003910',
        '3DX' => 'E02003909',
        '3DY' => 'E02003909',
        '3DZ' => 'E02003909',
        '3EA' => 'E02003909',
        '3EB' => 'E02003909',
        '3ED' => 'E02003909',
        '3EE' => 'E02003909',
        '3EF' => 'E02003909',
        '3EG' => 'E02003909',
        '3EH' => 'E02003910',
        '3EJ' => 'E02003910',
        '3EL' => 'E02003910',
        '3EN' => 'E02003910',
        '3EP' => 'E02003910',
        '3EQ' => 'E02003909',
        '3ER' => 'E02003910',
        '3ES' => 'E02003910',
        '3ET' => 'E02003910',
        '3EU' => 'E02003910',
        '3EW' => 'E02003910',
        '3EX' => 'E02003910',
        '3EY' => 'E02003909',
        '3EZ' => 'E02003909',
        '3FA' => 'E02003909',
        '3FB' => 'E02003909',
        '3FD' => 'E02003909',
        '3FE' => 'E02003909',
        '3FF' => 'E02003909',
        '3FG' => 'E02003909',
        '3FH' => 'E02003909',
        '3FJ' => 'E02003909',
        '3FL' => 'E02003910',
        '3FN' => 'E02003909',
        '3FP' => 'E02003909',
        '3FQ' => 'E02003910',
        '3FR' => 'E02003909',
        '3FS' => 'E02003909',
        '3FT' => 'E02003909',
        '3FU' => 'E02003909',
        '3FW' => 'E02003909',
        '3FX' => 'E02003909',
        '3FY' => 'E02003909',
        '3FZ' => 'E02003910',
        '3GA' => 'E02003909',
        '3GB' => 'E02003909',
        '3GD' => 'E02003909',
        '3GE' => 'E02003909',
        '3GF' => 'E02003909',
        '3GG' => 'E02003909',
        '3GH' => 'E02003909',
        '3GJ' => 'E02003909',
        '3GL' => 'E02003909',
        '3GN' => 'E02003909',
        '3GR' => 'E02003909',
        '3GT' => 'E02003909',
        '3GZ' => 'E02003909',
        '3HA' => 'E02003910',
        '3HB' => 'E02003910',
        '3HD' => 'E02003909',
        '3HE' => 'E02003910',
        '3HF' => 'E02003910',
        '3HG' => 'E02003910',
        '3HH' => 'E02003910',
        '3HJ' => 'E02003910',
        '3HL' => 'E02003910',
        '3HN' => 'E02003910',
        '3HP' => 'E02003910',
        '3HQ' => 'E02003910',
        '3HR' => 'E02003910',
        '3HS' => 'E02003910',
        '3HT' => 'E02003910',
        '3HU' => 'E02003910',
        '3HW' => 'E02003910',
        '3HX' => 'E02003910',
        '3HY' => 'E02003910',
        '3HZ' => 'E02003910',
        '3JA' => 'E02003910',
        '3JB' => 'E02003910',
        '3JD' => 'E02003910',
        '3JE' => 'E02003910',
        '3JF' => 'E02003910',
        '3JG' => 'E02003910',
        '3JH' => 'E02003910',
        '3JJ' => 'E02003910',
        '3JL' => 'E02003910',
        '3JN' => 'E02003910',
        '3JP' => 'E02003909',
        '3JQ' => 'E02003910',
        '3JR' => 'E02003909',
        '3JS' => 'E02003909',
        '3JT' => 'E02003909',
        '3JU' => 'E02003909',
        '3JW' => 'E02003909',
        '3JX' => 'E02003909',
        '3JY' => 'E02003909',
        '3JZ' => 'E02003909',
        '3LA' => 'E02003909',
        '3LB' => 'E02003909',
        '3LD' => 'E02003909',
        '3LE' => 'E02003909',
        '3LF' => 'E02003909',
        '3LG' => 'E02003909',
        '3LH' => 'E02003909',
        '3LJ' => 'E02003909',
        '3LL' => 'E02003909',
        '3LN' => 'E02003909',
        '3LP' => 'E02003909',
        '3LQ' => 'E02003909',
        '3LR' => 'E02003909',
        '3LS' => 'E02003909',
        '3LT' => 'E02003909',
        '3LU' => 'E02003909',
        '3LW' => 'E02003909',
        '3LX' => 'E02003909',
        '3LY' => 'E02003909',
        '3LZ' => 'E02003909',
        '3NA' => 'E02003910',
        '3NB' => 'E02003910',
        '3ND' => 'E02003910',
        '3NE' => 'E02003910',
        '3NF' => 'E02003909',
        '3NG' => 'E02003910',
        '3NH' => 'E02003910',
        '3NJ' => 'E02003910',
        '3NL' => 'E02003909',
        '3NN' => 'E02003909',
        '3NP' => 'E02003909',
        '3NQ' => 'E02003910',
        '3NR' => 'E02003910',
        '3NS' => 'E02003909',
        '3NT' => 'E02003909',
        '3NU' => 'E02003909',
        '3NW' => 'E02003910',
        '3NX' => 'E02003909',
        '3NY' => 'E02003909',
        '3NZ' => 'E02003909',
        '3PA' => 'E02003909',
        '3PB' => 'E02003909',
        '3PD' => 'E02003909',
        '3PE' => 'E02003909',
        '3PF' => 'E02003909',
        '3PG' => 'E02003909',
        '3PH' => 'E02003909',
        '3PJ' => 'E02003909',
        '3PL' => 'E02003909',
        '3PN' => 'E02003909',
        '3PP' => 'E02003909',
        '3PQ' => 'E02003909',
        '3PR' => 'E02003909',
        '3PS' => 'E02003909',
        '3PT' => 'E02003909',
        '3PU' => 'E02003909',
        '3PW' => 'E02003909',
        '3PX' => 'E02003909',
        '3PY' => 'E02003909',
        '3PZ' => 'E02003909',
        '3QA' => 'E02003909',
        '3QB' => 'E02003909',
        '3QD' => 'E02003909',
        '3QE' => 'E02003909',
        '3QF' => 'E02003909',
        '3QG' => 'E02003910',
        '3QH' => 'E02003910',
        '3QJ' => 'E02003909',
        '3QL' => 'E02003909',
        '3QN' => 'E02003909',
        '3QP' => 'E02003909',
        '3QQ' => 'E02003909',
        '3QR' => 'E02003909',
        '3QS' => 'E02003909',
        '3QT' => 'E02003909',
        '3QU' => 'E02003909',
        '3QW' => 'E02003909',
        '3QX' => 'E02003909',
        '3QY' => 'E02003909',
        '3QZ' => 'E02003909',
        '3RA' => 'E02003909',
        '3RB' => 'E02003909',
        '3RD' => 'E02003909',
        '3RE' => 'E02003909',
        '3RG' => 'E02003909',
        '3RH' => 'E02003909',
        '3RJ' => 'E02003909',
        '3RL' => 'E02003909',
        '3RN' => 'E02003909',
        '3RP' => 'E02003909',
        '3RQ' => 'E02003909',
        '3RR' => 'E02003909',
        '3RS' => 'E02003909',
        '3RT' => 'E02003909',
        '3RU' => 'E02003909',
        '3RW' => 'E02003909',
        '3RX' => 'E02003909',
        '3RY' => 'E02003909',
        '3RZ' => 'E02003909',
        '3SA' => 'E02003909',
        '3SB' => 'E02003909',
        '3SD' => 'E02003909',
        '3SE' => 'E02003909',
        '3SF' => 'E02003909',
        '3SG' => 'E02003909',
        '3SH' => 'E02003909',
        '3SJ' => 'E02003909',
        '3SL' => 'E02003909',
        '3SN' => 'E02003909',
        '3SP' => 'E02003909',
        '3SQ' => 'E02003909',
        '3SR' => 'E02003909',
        '3SS' => 'E02003909',
        '3ST' => 'E02003909',
        '3SU' => 'E02003909',
        '3SW' => 'E02003909',
        '3SX' => 'E02003909',
        '3SY' => 'E02003909',
        '3SZ' => 'E02003909',
        '3TA' => 'E02003909',
        '3TB' => 'E02003909',
        '3TD' => 'E02003909',
        '3TE' => 'E02003909',
        '3TF' => 'E02003909',
        '3TG' => 'E02003909',
        '3TH' => 'E02003909',
        '3TJ' => 'E02003909',
        '3TL' => 'E02003909',
        '3TN' => 'E02003909',
        '3TP' => 'E02003909',
        '3TQ' => 'E02003909',
        '3TR' => 'E02003909',
        '3TS' => 'E02003909',
        '3TT' => 'E02003909',
        '3TU' => 'E02003909',
        '3TW' => 'E02003909',
        '3TX' => 'E02003909',
        '3TY' => 'E02003909',
        '3TZ' => 'E02003909',
        '3UA' => 'E02003909',
        '3UB' => 'E02003909',
        '3UD' => 'E02003909',
        '3UE' => 'E02003909',
        '3UF' => 'E02003909',
        '3UH' => 'E02003909',
        '3UJ' => 'E02003909',
        '3UL' => 'E02003909',
        '3UN' => 'E02003909',
        '3UP' => 'E02003909',
        '3UQ' => 'E02003909',
        '3UR' => 'E02003910',
        '3UT' => 'E02003909',
        '3UU' => 'E02003909',
        '3UW' => 'E02003910',
        '3UX' => 'E02003909',
        '3UY' => 'E02003909',
        '3UZ' => 'E02003909',
        '3WA' => 'E02003910',
        '3WB' => 'E02003910',
        '3WD' => 'E02003910',
        '3WE' => 'E02003910',
        '3WF' => 'E02003910',
        '3WG' => 'E02003910',
        '3WH' => 'E02003910',
        '3WJ' => 'E02003909',
        '3WL' => 'E02003910',
        '3WN' => 'E02003909',
        '3WQ' => 'E02003910',
        '3WR' => 'E02003909',
        '3WS' => 'E02003910',
        '3WT' => 'E02003910',
        '3WU' => 'E02003910',
        '3WW' => 'E02003909',
        '3WX' => 'E02003910',
        '3WY' => 'E02003910',
        '3WZ' => 'E02003910',
        '3XA' => 'E02003909',
        '3XB' => 'E02003909',
        '3XD' => 'E02003910',
        '3XE' => 'E02003909',
        '3XF' => 'E02003910',
        '3XG' => 'E02003909',
        '3XH' => 'E02003909',
        '3XJ' => 'E02003909',
        '3XL' => 'E02003910',
        '3XN' => 'E02003909',
        '3XP' => 'E02003909',
        '3XQ' => 'E02003909',
        '3XR' => 'E02003910',
        '3XS' => 'E02003910',
        '3XT' => 'E02003910',
        '3XU' => 'E02003910',
        '3XW' => 'E02003910',
        '3XX' => 'E02003909',
        '3XY' => 'E02003910',
        '3XZ' => 'E02003910',
        '3YA' => 'E02003909',
        '3YB' => 'E02003909',
        '3YD' => 'E02003910',
        '3YE' => 'E02003910',
        '3YF' => 'E02003910',
        '3YG' => 'E02003910',
        '3YH' => 'E02003910',
        '3YJ' => 'E02003909',
        '3YL' => 'E02003909',
        '3YN' => 'E02003910',
        '3YP' => 'E02003909',
        '3YQ' => 'E02003910',
        '3YR' => 'E02003909',
        '3YS' => 'E02003909',
        '3YT' => 'E02003910',
        '3YU' => 'E02003910',
        '3YW' => 'E02003909',
        '3YX' => 'E02003910',
        '3YY' => 'E02003910',
        '3YZ' => 'E02003910',
        '3ZD' => 'E02003910',
        '3ZE' => 'E02003910',
        '3ZF' => 'E02003910',
        '3ZG' => 'E02003910',
        '3ZH' => 'E02003910',
        '3ZJ' => 'E02003910',
        '3ZL' => 'E02003910',
        '3ZN' => 'E02003910',
        '3ZQ' => 'E02003910',
        '3ZR' => 'E02003910',
        '3ZX' => 'E02003910',
        '9AA' => 'E02003910',
        '9AB' => 'E02003910',
        '9AD' => 'E02003910',
        '9AE' => 'E02003910',
        '9AF' => 'E02003910',
        '9AG' => 'E02003910',
        '9AH' => 'E02003910',
        '9AJ' => 'E02003910',
        '9AL' => 'E02003910',
        '9AN' => 'E02003910',
        '9AP' => 'E02003910',
        '9AQ' => 'E02003910',
        '9AR' => 'E02003910',
        '9AS' => 'E02003910',
        '9AT' => 'E02003910',
        '9AU' => 'E02003910',
        '9AW' => 'E02003910',
        '9AX' => 'E02003910',
        '9AY' => 'E02003910',
        '9AZ' => 'E02003910',
        '9BA' => 'E02003910',
        '9BD' => 'E02003910',
        '9BE' => 'E02003910',
        '9BF' => 'E02003910',
        '9BG' => 'E02003910',
        '9BH' => 'E02003910',
        '9BJ' => 'E02003910',
        '9BL' => 'E02003910',
        '9BN' => 'E02003910',
        '9BP' => 'E02003910',
        '9BQ' => 'E02003910',
        '9BR' => 'E02003910',
        '9BS' => 'E02003910',
        '9BT' => 'E02003910',
        '9BU' => 'E02003910',
        '9BW' => 'E02003910',
        '9BX' => 'E02003910',
        '9BY' => 'E02003910',
        '9BZ' => 'E02003910',
        '9DA' => 'E02003910',
        '9DB' => 'E02003910',
        '9DD' => 'E02003910',
        '9DE' => 'E02003910',
        '9DF' => 'E02003910',
        '9DG' => 'E02003910',
        '9DH' => 'E02003910',
        '9DJ' => 'E02003910',
        '9DL' => 'E02003910',
        '9DN' => 'E02003910',
        '9DP' => 'E02003910',
        '9DQ' => 'E02003910',
        '9DR' => 'E02003910',
        '9DS' => 'E02003910',
        '9DT' => 'E02003910',
        '9DU' => 'E02003910',
        '9DX' => 'E02003910',
        '9DY' => 'E02003910',
        '9DZ' => 'E02003910',
        '9EA' => 'E02003910',
        '9EB' => 'E02003910',
        '9ED' => 'E02003910',
        '9EE' => 'E02003910',
        '9EF' => 'E02003910',
        '9EG' => 'E02003910',
        '9EH' => 'E02003910',
        '9EJ' => 'E02003910',
        '9EL' => 'E02003910',
        '9EN' => 'E02003910',
        '9EP' => 'E02003910',
        '9EQ' => 'E02003910',
        '9ER' => 'E02003910',
        '9ES' => 'E02003910',
        '9ET' => 'E02003910',
        '9EU' => 'E02003910',
        '9EW' => 'E02003910',
        '9EX' => 'E02003910',
        '9EY' => 'E02003910',
        '9EZ' => 'E02003910',
        '9FA' => 'E02003910',
        '9FB' => 'E02003910',
        '9FD' => 'E02003910',
        '9FE' => 'E02003910',
        '9FF' => 'E02003910',
        '9FG' => 'E02003910',
        '9FH' => 'E02003910',
        '9FJ' => 'E02003910',
        '9FL' => 'E02003910',
        '9FN' => 'E02003910',
        '9FP' => 'E02003910',
        '9FQ' => 'E02003910',
        '9FR' => 'E02003910',
        '9FS' => 'E02003910',
        '9FT' => 'E02003910',
        '9FU' => 'E02003910',
        '9FX' => 'E02003910',
        '9FY' => 'E02003910',
        '9FZ' => 'E02003910',
        '9GA' => 'E02003910',
        '9GB' => 'E02003910',
        '9GD' => 'E02003910',
        '9GE' => 'E02003910',
        '9GF' => 'E02003910',
        '9GG' => 'E02003910',
        '9GH' => 'E02003910',
        '9GJ' => 'E02003910',
        '9GL' => 'E02003910',
        '9GN' => 'E02003910',
        '9GP' => 'E02003910',
        '9GQ' => 'E02003910',
        '9GR' => 'E02003910',
        '9GS' => 'E02003910',
        '9GT' => 'E02003910',
        '9GU' => 'E02003910',
        '9GW' => 'E02003910',
        '9GX' => 'E02003910',
        '9GY' => 'E02003910',
        '9GZ' => 'E02003910',
        '9HA' => 'E02003910',
        '9HB' => 'E02003910',
        '9HD' => 'E02003910',
        '9HE' => 'E02003910',
        '9HF' => 'E02003910',
        '9HG' => 'E02003910',
        '9HH' => 'E02003910',
        '9HJ' => 'E02003910',
        '9HL' => 'E02003910',
        '9HN' => 'E02003910',
        '9HP' => 'E02003910',
        '9HQ' => 'E02003910',
        '9HS' => 'E02003910',
        '9HT' => 'E02003910',
        '9HU' => 'E02003910',
        '9HW' => 'E02003910',
        '9HX' => 'E02003910',
        '9HY' => 'E02003910',
        '9HZ' => 'E02003910',
        '9JA' => 'E02003910',
        '9JB' => 'E02003910',
        '9JD' => 'E02003910',
        '9JE' => 'E02003910',
        '9JF' => 'E02003910',
        '9JG' => 'E02003910',
        '9JH' => 'E02003910',
        '9JJ' => 'E02003910',
        '9JL' => 'E02003910',
        '9JN' => 'E02003910',
        '9JP' => 'E02003910',
        '9JQ' => 'E02003910',
        '9JR' => 'E02003910',
        '9JS' => 'E02003910',
        '9JT' => 'E02003910',
        '9JU' => 'E02003910',
        '9JW' => 'E02003910',
        '9JX' => 'E02003910',
        '9JY' => 'E02003910',
        '9LA' => 'E02003910',
        '9LB' => 'E02003910',
        '9LD' => 'E02003910',
        '9LE' => 'E02003910',
        '9LF' => 'E02003910',
        '9LG' => 'E02003910',
        '9LH' => 'E02003910',
        '9LL' => 'E02003910',
        '9LN' => 'E02003910',
        '9LQ' => 'E02003910',
        '9LR' => 'E02003910',
        '9LS' => 'E02003910',
        '9LT' => 'E02003910',
        '9LU' => 'E02003910',
        '9LW' => 'E02003910',
        '9LX' => 'E02003910',
        '9LY' => 'E02003910',
        '9SA' => 'E02003910',
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
