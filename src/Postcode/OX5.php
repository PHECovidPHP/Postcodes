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
final class OX5
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02005937',
        '1AB' => 'E02005938',
        '1AD' => 'E02005937',
        '1AE' => 'E02005937',
        '1AF' => 'E02005937',
        '1AG' => 'E02005937',
        '1AH' => 'E02005939',
        '1AJ' => 'E02005939',
        '1AL' => 'E02005937',
        '1AN' => 'E02005937',
        '1AP' => 'E02005937',
        '1AQ' => 'E02005937',
        '1AR' => 'E02005937',
        '1AS' => 'E02005937',
        '1AT' => 'E02005938',
        '1AU' => 'E02005937',
        '1AW' => 'E02005937',
        '1AX' => 'E02005937',
        '1AY' => 'E02005937',
        '1AZ' => 'E02005937',
        '1BA' => 'E02005937',
        '1BB' => 'E02005937',
        '1BD' => 'E02005937',
        '1BE' => 'E02005937',
        '1BF' => 'E02005937',
        '1BG' => 'E02005937',
        '1BH' => 'E02005938',
        '1BJ' => 'E02005938',
        '1BL' => 'E02005938',
        '1BN' => 'E02005938',
        '1BP' => 'E02005938',
        '1BQ' => 'E02005937',
        '1BS' => 'E02005938',
        '1BT' => 'E02005938',
        '1BU' => 'E02005938',
        '1BW' => 'E02005938',
        '1BX' => 'E02005938',
        '1BY' => 'E02005938',
        '1BZ' => 'E02005938',
        '1DA' => 'E02005938',
        '1DB' => 'E02005938',
        '1DD' => 'E02005938',
        '1DE' => 'E02005938',
        '1DF' => 'E02005938',
        '1DG' => 'E02005938',
        '1DH' => 'E02005938',
        '1DJ' => 'E02005938',
        '1DL' => 'E02005938',
        '1DN' => 'E02005938',
        '1DP' => 'E02005938',
        '1DQ' => 'E02005938',
        '1DR' => 'E02005938',
        '1DS' => 'E02005937',
        '1DT' => 'E02005937',
        '1DU' => 'E02005937',
        '1DW' => 'E02005938',
        '1DX' => 'E02005937',
        '1DY' => 'E02005939',
        '1DZ' => 'E02005938',
        '1EA' => 'E02005938',
        '1EB' => 'E02005938',
        '1ED' => 'E02005938',
        '1EE' => 'E02005938',
        '1EF' => 'E02005938',
        '1EG' => 'E02005938',
        '1EH' => 'E02005938',
        '1EJ' => 'E02005938',
        '1EL' => 'E02005938',
        '1EN' => 'E02005938',
        '1EP' => 'E02005938',
        '1EQ' => 'E02005938',
        '1ER' => 'E02005938',
        '1ES' => 'E02005938',
        '1ET' => 'E02005938',
        '1EU' => 'E02005938',
        '1EW' => 'E02005938',
        '1EX' => 'E02005938',
        '1EY' => 'E02005938',
        '1EZ' => 'E02005938',
        '1FA' => 'E02005937',
        '1FB' => 'E02005937',
        '1FD' => 'E02005937',
        '1FE' => 'E02005937',
        '1FF' => 'E02005937',
        '1FG' => 'E02005937',
        '1FH' => 'E02005939',
        '1FJ' => 'E02005939',
        '1FN' => 'E02005938',
        '1FP' => 'E02005939',
        '1FQ' => 'E02005939',
        '1FR' => 'E02005938',
        '1FS' => 'E02005939',
        '1FT' => 'E02005936',
        '1FU' => 'E02005937',
        '1FW' => 'E02005939',
        '1FX' => 'E02005939',
        '1FY' => 'E02005939',
        '1FZ' => 'E02005939',
        '1GA' => 'E02005939',
        '1GB' => 'E02005939',
        '1GD' => 'E02005939',
        '1GE' => 'E02005939',
        '1GF' => 'E02005939',
        '1GG' => 'E02005939',
        '1GH' => 'E02005937',
        '1GJ' => 'E02005937',
        '1GL' => 'E02005939',
        '1GN' => 'E02005939',
        '1GQ' => 'E02005939',
        '1GR' => 'E02005937',
        '1GS' => 'E02005937',
        '1GT' => 'E02005937',
        '1GU' => 'E02005937',
        '1GW' => 'E02005939',
        '1GX' => 'E02005937',
        '1GY' => 'E02005937',
        '1GZ' => 'E02005939',
        '1HA' => 'E02005938',
        '1HB' => 'E02005938',
        '1HD' => 'E02005938',
        '1HE' => 'E02005938',
        '1HF' => 'E02005938',
        '1HG' => 'E02005938',
        '1HH' => 'E02005938',
        '1HJ' => 'E02005937',
        '1HL' => 'E02005938',
        '1HN' => 'E02005938',
        '1HP' => 'E02005939',
        '1HQ' => 'E02005938',
        '1HR' => 'E02005939',
        '1HS' => 'E02005937',
        '1HT' => 'E02005939',
        '1HU' => 'E02005939',
        '1HW' => 'E02005938',
        '1HX' => 'E02005939',
        '1HY' => 'E02005937',
        '1HZ' => 'E02005939',
        '1JA' => 'E02005939',
        '1JB' => 'E02005939',
        '1JD' => 'E02005939',
        '1JE' => 'E02005939',
        '1JF' => 'E02005939',
        '1JG' => 'E02005937',
        '1JH' => 'E02005936',
        '1JJ' => 'E02005936',
        '1JL' => 'E02005936',
        '1JN' => 'E02005936',
        '1JP' => 'E02005936',
        '1JQ' => 'E02005936',
        '1JR' => 'E02005937',
        '1JS' => 'E02005937',
        '1JT' => 'E02005936',
        '1JU' => 'E02005936',
        '1JW' => 'E02005936',
        '1JX' => 'E02005936',
        '1JY' => 'E02005936',
        '1JZ' => 'E02005936',
        '1LA' => 'E02005939',
        '1LB' => 'E02005937',
        '1LD' => 'E02005936',
        '1LE' => 'E02005937',
        '1LF' => 'E02005937',
        '1LG' => 'E02005939',
        '1LH' => 'E02005939',
        '1LJ' => 'E02005939',
        '1LL' => 'E02005939',
        '1LN' => 'E02005939',
        '1LP' => 'E02005939',
        '1LQ' => 'E02005939',
        '1LR' => 'E02005939',
        '1LS' => 'E02005939',
        '1LT' => 'E02005939',
        '1LU' => 'E02005939',
        '1LW' => 'E02005939',
        '1LX' => 'E02005939',
        '1LY' => 'E02005939',
        '1LZ' => 'E02005939',
        '1NA' => 'E02005939',
        '1NB' => 'E02005939',
        '1ND' => 'E02005939',
        '1NE' => 'E02005939',
        '1NF' => 'E02005939',
        '1NG' => 'E02005939',
        '1NH' => 'E02005939',
        '1NJ' => 'E02005939',
        '1NL' => 'E02005939',
        '1NN' => 'E02005939',
        '1NP' => 'E02005939',
        '1NQ' => 'E02005939',
        '1NR' => 'E02005936',
        '1NS' => 'E02005939',
        '1NT' => 'E02005939',
        '1NU' => 'E02005937',
        '1NW' => 'E02005939',
        '1NX' => 'E02005939',
        '1NY' => 'E02005939',
        '1NZ' => 'E02005939',
        '1PA' => 'E02005939',
        '1PB' => 'E02005939',
        '1PD' => 'E02005939',
        '1PE' => 'E02005939',
        '1PF' => 'E02005939',
        '1PG' => 'E02005939',
        '1PH' => 'E02005939',
        '1PJ' => 'E02005939',
        '1PL' => 'E02005939',
        '1PN' => 'E02005939',
        '1PP' => 'E02005939',
        '1PQ' => 'E02005939',
        '1PR' => 'E02005939',
        '1PS' => 'E02005939',
        '1PT' => 'E02005939',
        '1PU' => 'E02005939',
        '1PW' => 'E02005939',
        '1PX' => 'E02005939',
        '1PY' => 'E02005939',
        '1PZ' => 'E02005937',
        '1QA' => 'E02005939',
        '1QB' => 'E02005939',
        '1QD' => 'E02005939',
        '1QE' => 'E02005939',
        '1QF' => 'E02005939',
        '1QG' => 'E02005939',
        '1QH' => 'E02005939',
        '1QJ' => 'E02005939',
        '1QL' => 'E02005939',
        '1QN' => 'E02005939',
        '1QP' => 'E02005939',
        '1QQ' => 'E02005939',
        '1QR' => 'E02005939',
        '1QS' => 'E02005939',
        '1QT' => 'E02005939',
        '1QU' => 'E02005939',
        '1QW' => 'E02005939',
        '1QX' => 'E02005939',
        '1QY' => 'E02005937',
        '1QZ' => 'E02005939',
        '1RA' => 'E02005939',
        '1RB' => 'E02005939',
        '1RD' => 'E02005939',
        '1RE' => 'E02005939',
        '1RF' => 'E02005939',
        '1RG' => 'E02005939',
        '1RH' => 'E02005939',
        '1RJ' => 'E02005939',
        '1RL' => 'E02005939',
        '1RN' => 'E02005939',
        '1RP' => 'E02005939',
        '1RQ' => 'E02005939',
        '1RR' => 'E02005939',
        '1RS' => 'E02005939',
        '1RT' => 'E02005939',
        '1RU' => 'E02005939',
        '1RW' => 'E02005939',
        '1RX' => 'E02005939',
        '1RY' => 'E02005939',
        '1RZ' => 'E02005939',
        '1SA' => 'E02005939',
        '1SB' => 'E02005939',
        '1SD' => 'E02005939',
        '1SE' => 'E02005939',
        '1SF' => 'E02005939',
        '1SG' => 'E02005939',
        '1SH' => 'E02005939',
        '1SJ' => 'E02005939',
        '1SL' => 'E02005937',
        '1SN' => 'E02005937',
        '1SP' => 'E02005937',
        '1SQ' => 'E02005939',
        '1SR' => 'E02005937',
        '1SS' => 'E02005937',
        '1ST' => 'E02005937',
        '1SU' => 'E02005937',
        '1SW' => 'E02005937',
        '1SX' => 'E02005937',
        '1SY' => 'E02005937',
        '1SZ' => 'E02005937',
        '1TA' => 'E02005939',
        '1TB' => 'E02005939',
        '1TD' => 'E02005937',
        '1TE' => 'E02005939',
        '1TF' => 'E02005939',
        '1TG' => 'E02005939',
        '1TH' => 'E02005939',
        '1TJ' => 'E02005937',
        '1TL' => 'E02005937',
        '1TN' => 'E02005939',
        '1TP' => 'E02005937',
        '1TQ' => 'E02005939',
        '1TR' => 'E02005937',
        '1TS' => 'E02005937',
        '1TT' => 'E02005937',
        '1TU' => 'E02005937',
        '1TW' => 'E02005939',
        '1TX' => 'E02005939',
        '1TY' => 'E02005939',
        '1TZ' => 'E02005939',
        '1UA' => 'E02005939',
        '1UB' => 'E02005938',
        '1UD' => 'E02005939',
        '1UE' => 'E02005939',
        '1UF' => 'E02005937',
        '1UG' => 'E02005939',
        '1UH' => 'E02005937',
        '1UJ' => 'E02005939',
        '1UL' => 'E02005939',
        '1UN' => 'E02005939',
        '1UP' => 'E02005938',
        '1UQ' => 'E02005937',
        '1UR' => 'E02005939',
        '1US' => 'E02005939',
        '1UT' => 'E02005937',
        '1UU' => 'E02005939',
        '1UW' => 'E02005939',
        '1UX' => 'E02005939',
        '1UY' => 'E02005937',
        '1WA' => 'E02005937',
        '1WB' => 'E02005937',
        '1WD' => 'E02005937',
        '1WE' => 'E02005937',
        '1WG' => 'E02005937',
        '1XA' => 'E02005937',
        '1XB' => 'E02005938',
        '1XD' => 'E02005938',
        '1XH' => 'E02005937',
        '1XJ' => 'E02005937',
        '1XL' => 'E02005937',
        '1XN' => 'E02005937',
        '1XP' => 'E02005937',
        '1XQ' => 'E02005937',
        '1XR' => 'E02005937',
        '1XS' => 'E02005937',
        '1XT' => 'E02005937',
        '1XU' => 'E02005937',
        '1XX' => 'E02005937',
        '1XZ' => 'E02005937',
        '1YA' => 'E02005937',
        '1YB' => 'E02005937',
        '1YD' => 'E02005937',
        '1YE' => 'E02005937',
        '1YF' => 'E02005937',
        '1YG' => 'E02005937',
        '1YH' => 'E02005937',
        '1YJ' => 'E02005937',
        '1YL' => 'E02005937',
        '1YN' => 'E02005937',
        '1YP' => 'E02005937',
        '1YQ' => 'E02005937',
        '1YR' => 'E02005937',
        '1YS' => 'E02005937',
        '1YT' => 'E02005937',
        '1YU' => 'E02005937',
        '1YX' => 'E02005937',
        '1ZH' => 'E02005937',
        '1ZN' => 'E02005937',
        '1ZQ' => 'E02005937',
        '1ZR' => 'E02005937',
        '1ZU' => 'E02005937',
        '1ZX' => 'E02005937',
        '2AA' => 'E02005937',
        '2AB' => 'E02005937',
        '2AD' => 'E02005937',
        '2AE' => 'E02005937',
        '2AF' => 'E02005937',
        '2AG' => 'E02005937',
        '2AH' => 'E02005937',
        '2AJ' => 'E02005937',
        '2AL' => 'E02005937',
        '2AN' => 'E02005937',
        '2AP' => 'E02005937',
        '2AQ' => 'E02005937',
        '2AR' => 'E02005937',
        '2AS' => 'E02005937',
        '2AT' => 'E02005937',
        '2AU' => 'E02005937',
        '2AW' => 'E02005937',
        '2AX' => 'E02005937',
        '2AY' => 'E02005937',
        '2AZ' => 'E02005937',
        '2BA' => 'E02005937',
        '2BB' => 'E02005937',
        '2BD' => 'E02005937',
        '2BE' => 'E02005937',
        '2BF' => 'E02005937',
        '2BG' => 'E02005937',
        '2BH' => 'E02005937',
        '2BJ' => 'E02005937',
        '2BL' => 'E02005937',
        '2BN' => 'E02005937',
        '2BP' => 'E02005937',
        '2BQ' => 'E02005937',
        '2BS' => 'E02005938',
        '2BT' => 'E02005937',
        '2BU' => 'E02005937',
        '2BW' => 'E02005937',
        '2BX' => 'E02005939',
        '2BY' => 'E02005937',
        '2BZ' => 'E02005937',
        '2DA' => 'E02005937',
        '2DB' => 'E02005937',
        '2DD' => 'E02005937',
        '2DE' => 'E02005937',
        '2DF' => 'E02005937',
        '2DG' => 'E02005937',
        '2DH' => 'E02005937',
        '2DJ' => 'E02005937',
        '2DL' => 'E02005937',
        '2DN' => 'E02005937',
        '2DP' => 'E02005937',
        '2DQ' => 'E02005937',
        '2DR' => 'E02005937',
        '2DS' => 'E02005937',
        '2DT' => 'E02005937',
        '2DU' => 'E02005937',
        '2DW' => 'E02005937',
        '2DX' => 'E02005937',
        '2DY' => 'E02005937',
        '2DZ' => 'E02005937',
        '2EA' => 'E02005937',
        '2EB' => 'E02005937',
        '2ED' => 'E02005937',
        '2EE' => 'E02005937',
        '2EF' => 'E02005938',
        '2EG' => 'E02005937',
        '2EH' => 'E02005937',
        '2EJ' => 'E02005938',
        '2EL' => 'E02005937',
        '2EN' => 'E02005937',
        '2EP' => 'E02005937',
        '2EQ' => 'E02005937',
        '2ER' => 'E02005937',
        '2ES' => 'E02005937',
        '2ET' => 'E02005937',
        '2EU' => 'E02005937',
        '2EW' => 'E02005937',
        '2EX' => 'E02005937',
        '2EY' => 'E02005937',
        '2EZ' => 'E02005937',
        '2FA' => 'E02005937',
        '2FB' => 'E02005937',
        '2FD' => 'E02005937',
        '2FE' => 'E02003661',
        '2FF' => 'E02005939',
        '2FG' => 'E02005938',
        '2FH' => 'E02005937',
        '2FJ' => 'E02005937',
        '2FL' => 'E02005937',
        '2FN' => 'E02005937',
        '2FP' => 'E02005937',
        '2FQ' => 'E02005938',
        '2FR' => 'E02005937',
        '2FS' => 'E02005937',
        '2FT' => 'E02005937',
        '2FU' => 'E02005936',
        '2FW' => 'E02005937',
        '2FX' => 'E02005937',
        '2FY' => 'E02005937',
        '2GD' => 'E02005939',
        '2HA' => 'E02005937',
        '2HB' => 'E02005937',
        '2HD' => 'E02005937',
        '2HE' => 'E02005937',
        '2HF' => 'E02005937',
        '2HG' => 'E02005937',
        '2HH' => 'E02005937',
        '2HJ' => 'E02005937',
        '2HL' => 'E02005937',
        '2HN' => 'E02005937',
        '2HP' => 'E02005938',
        '2HQ' => 'E02005937',
        '2HR' => 'E02005938',
        '2HS' => 'E02005937',
        '2HT' => 'E02005937',
        '2HU' => 'E02005938',
        '2HW' => 'E02005937',
        '2HX' => 'E02005938',
        '2HY' => 'E02005938',
        '2HZ' => 'E02005938',
        '2JA' => 'E02005938',
        '2JB' => 'E02005938',
        '2JD' => 'E02005938',
        '2JE' => 'E02005938',
        '2JF' => 'E02005938',
        '2JG' => 'E02005938',
        '2JH' => 'E02005938',
        '2JJ' => 'E02005938',
        '2JL' => 'E02005938',
        '2JN' => 'E02005938',
        '2JP' => 'E02005938',
        '2JQ' => 'E02005938',
        '2JR' => 'E02005938',
        '2JS' => 'E02005938',
        '2JT' => 'E02005938',
        '2JU' => 'E02005938',
        '2JW' => 'E02005938',
        '2JX' => 'E02005938',
        '2JY' => 'E02005938',
        '2JZ' => 'E02005938',
        '2LA' => 'E02005938',
        '2LB' => 'E02005938',
        '2LD' => 'E02005938',
        '2LE' => 'E02005939',
        '2LF' => 'E02005939',
        '2LG' => 'E02005939',
        '2LH' => 'E02005939',
        '2LJ' => 'E02005939',
        '2LL' => 'E02005939',
        '2LN' => 'E02005939',
        '2LP' => 'E02005939',
        '2LQ' => 'E02005939',
        '2LR' => 'E02005939',
        '2LS' => 'E02005939',
        '2LT' => 'E02005939',
        '2LU' => 'E02005939',
        '2LW' => 'E02005939',
        '2LX' => 'E02005939',
        '2LY' => 'E02005939',
        '2LZ' => 'E02005939',
        '2NA' => 'E02005938',
        '2NB' => 'E02005938',
        '2ND' => 'E02005938',
        '2NE' => 'E02005939',
        '2NF' => 'E02005937',
        '2NG' => 'E02005938',
        '2NH' => 'E02005938',
        '2NJ' => 'E02005939',
        '2NL' => 'E02005939',
        '2NN' => 'E02005939',
        '2NP' => 'E02005938',
        '2NQ' => 'E02005938',
        '2NR' => 'E02005939',
        '2NS' => 'E02005939',
        '2NT' => 'E02005939',
        '2NU' => 'E02005939',
        '2NW' => 'E02005938',
        '2NX' => 'E02005939',
        '2NY' => 'E02005939',
        '2NZ' => 'E02005939',
        '2PA' => 'E02005939',
        '2PB' => 'E02005939',
        '2PD' => 'E02005939',
        '2PE' => 'E02005939',
        '2PF' => 'E02005939',
        '2PH' => 'E02005939',
        '2PJ' => 'E02005937',
        '2PL' => 'E02005937',
        '2PN' => 'E02005937',
        '2PP' => 'E02005939',
        '2PQ' => 'E02005937',
        '2PR' => 'E02005939',
        '2PS' => 'E02005939',
        '2PT' => 'E02005937',
        '2PU' => 'E02005939',
        '2PW' => 'E02005936',
        '2PX' => 'E02005939',
        '2PY' => 'E02005936',
        '2PZ' => 'E02005936',
        '2QA' => 'E02005936',
        '2QB' => 'E02005936',
        '2QD' => 'E02005936',
        '2QE' => 'E02005936',
        '2QF' => 'E02005936',
        '2QG' => 'E02005936',
        '2QH' => 'E02005936',
        '2QJ' => 'E02005939',
        '2QL' => 'E02005939',
        '2QN' => 'E02005938',
        '2QP' => 'E02005937',
        '2QQ' => 'E02005936',
        '2QR' => 'E02005937',
        '2QS' => 'E02005936',
        '2QT' => 'E02005936',
        '2QU' => 'E02005936',
        '2QW' => 'E02005937',
        '2QX' => 'E02005936',
        '2QY' => 'E02005936',
        '2QZ' => 'E02005936',
        '2RA' => 'E02005936',
        '2RB' => 'E02005936',
        '2RD' => 'E02005936',
        '2RE' => 'E02005936',
        '2RF' => 'E02005936',
        '2RG' => 'E02003661',
        '2RH' => 'E02003661',
        '2RJ' => 'E02003661',
        '2RL' => 'E02005936',
        '2RN' => 'E02005937',
        '2RP' => 'E02005936',
        '2RQ' => 'E02003661',
        '2RT' => 'E02005937',
        '2RU' => 'E02005937',
        '2RW' => 'E02005936',
        '2RX' => 'E02005936',
        '2RY' => 'E02005936',
        '2RZ' => 'E02005936',
        '2SA' => 'E02005936',
        '2SB' => 'E02005936',
        '2SD' => 'E02005936',
        '2SE' => 'E02005936',
        '2SF' => 'E02005936',
        '2SG' => 'E02005936',
        '2SH' => 'E02005936',
        '2SJ' => 'E02005936',
        '2SL' => 'E02005936',
        '2SN' => 'E02005936',
        '2SP' => 'E02005936',
        '2SQ' => 'E02005936',
        '2SR' => 'E02005936',
        '2SS' => 'E02005936',
        '2ST' => 'E02005936',
        '2SU' => 'E02005936',
        '2SW' => 'E02005936',
        '2SX' => 'E02005936',
        '2SY' => 'E02005936',
        '2SZ' => 'E02005936',
        '2TA' => 'E02005936',
        '2TB' => 'E02005936',
        '2TD' => 'E02005936',
        '2TE' => 'E02005936',
        '2TF' => 'E02005936',
        '2TG' => 'E02005936',
        '2TH' => 'E02005936',
        '2TJ' => 'E02005936',
        '2TL' => 'E02005936',
        '2TP' => 'E02005936',
        '2TQ' => 'E02005936',
        '2TR' => 'E02005936',
        '2TS' => 'E02005937',
        '2TT' => 'E02005937',
        '2TU' => 'E02005937',
        '2TX' => 'E02005937',
        '2TZ' => 'E02005936',
        '2UA' => 'E02005936',
        '2UB' => 'E02005936',
        '2UD' => 'E02005936',
        '2UE' => 'E02005936',
        '2UF' => 'E02005936',
        '2UG' => 'E02005936',
        '2UH' => 'E02005936',
        '2UJ' => 'E02005936',
        '2UL' => 'E02005936',
        '2UN' => 'E02005936',
        '2UP' => 'E02005936',
        '2UQ' => 'E02005936',
        '2UR' => 'E02005936',
        '2US' => 'E02005936',
        '2UT' => 'E02005936',
        '2UU' => 'E02005937',
        '2UW' => 'E02005936',
        '2UX' => 'E02005937',
        '2UY' => 'E02005937',
        '2UZ' => 'E02005937',
        '2WA' => 'E02005937',
        '2WB' => 'E02005937',
        '2WD' => 'E02005937',
        '2WY' => 'E02005937',
        '2WZ' => 'E02005937',
        '2XA' => 'E02005938',
        '2XB' => 'E02005937',
        '2XD' => 'E02005937',
        '2XE' => 'E02005937',
        '2XF' => 'E02005937',
        '2XH' => 'E02005938',
        '2XJ' => 'E02005937',
        '2XL' => 'E02005938',
        '2XN' => 'E02005938',
        '2XP' => 'E02005939',
        '2XQ' => 'E02005937',
        '2XR' => 'E02005938',
        '2XT' => 'E02005937',
        '2XU' => 'E02005937',
        '2XW' => 'E02005938',
        '2XX' => 'E02005937',
        '2XY' => 'E02005937',
        '2XZ' => 'E02005939',
        '2YA' => 'E02005937',
        '2YB' => 'E02005937',
        '2YD' => 'E02005937',
        '2YE' => 'E02005937',
        '2YF' => 'E02005937',
        '2YH' => 'E02005937',
        '2YJ' => 'E02005937',
        '2YL' => 'E02005937',
        '2YN' => 'E02005937',
        '2YP' => 'E02005937',
        '2YR' => 'E02005937',
        '2YS' => 'E02005937',
        '2YT' => 'E02005937',
        '2YU' => 'E02005937',
        '2YW' => 'E02005938',
        '2ZG' => 'E02005937',
        '2ZJ' => 'E02005937',
        '2ZL' => 'E02005937',
        '2ZN' => 'E02005937',
        '2ZP' => 'E02005937',
        '2ZQ' => 'E02005937',
        '2ZR' => 'E02005937',
        '2ZU' => 'E02005937',
        '2ZW' => 'E02005937',
        '2ZX' => 'E02005937',
        '2ZY' => 'E02005937',
        '3AA' => 'E02005996',
        '3AB' => 'E02005996',
        '3AD' => 'E02005996',
        '3AE' => 'E02005996',
        '3AF' => 'E02005996',
        '3AG' => 'E02005996',
        '3AH' => 'E02005996',
        '3AJ' => 'E02005996',
        '3AL' => 'E02005996',
        '3AN' => 'E02005996',
        '3AP' => 'E02005996',
        '3AQ' => 'E02005996',
        '3AR' => 'E02005996',
        '3AS' => 'E02005996',
        '3AT' => 'E02005996',
        '3AU' => 'E02005996',
        '3AW' => 'E02005996',
        '3AX' => 'E02005936',
        '3AY' => 'E02005936',
        '3AZ' => 'E02005996',
        '3BA' => 'E02005936',
        '3BB' => 'E02005996',
        '3BD' => 'E02005996',
        '3BE' => 'E02005996',
        '3BF' => 'E02005996',
        '3BG' => 'E02005996',
        '3BH' => 'E02005996',
        '3BJ' => 'E02005996',
        '3BL' => 'E02005996',
        '3BN' => 'E02005996',
        '3BP' => 'E02005937',
        '3BQ' => 'E02005936',
        '3BS' => 'E02005936',
        '3BT' => 'E02005936',
        '3BU' => 'E02005936',
        '3BW' => 'E02005996',
        '3BX' => 'E02005936',
        '3BY' => 'E02005936',
        '3BZ' => 'E02005936',
        '3DA' => 'E02005936',
        '3DB' => 'E02005936',
        '3DD' => 'E02005936',
        '3DE' => 'E02005936',
        '3DF' => 'E02005936',
        '3DG' => 'E02005936',
        '3DH' => 'E02005936',
        '3DJ' => 'E02005936',
        '3DL' => 'E02005936',
        '3DN' => 'E02005936',
        '3DP' => 'E02005936',
        '3DQ' => 'E02005936',
        '3DR' => 'E02005936',
        '3DS' => 'E02005936',
        '3DT' => 'E02005936',
        '3DU' => 'E02005936',
        '3DW' => 'E02005936',
        '3DX' => 'E02005936',
        '3DY' => 'E02005936',
        '3DZ' => 'E02005936',
        '3EA' => 'E02005936',
        '3EB' => 'E02005936',
        '3ED' => 'E02005936',
        '3EE' => 'E02005937',
        '3EF' => 'E02005936',
        '3EG' => 'E02005937',
        '3EH' => 'E02005937',
        '3EJ' => 'E02005996',
        '3EL' => 'E02005936',
        '3EN' => 'E02005996',
        '3EP' => 'E02005996',
        '3EQ' => 'E02005996',
        '3ER' => 'E02005996',
        '3ES' => 'E02005936',
        '3ET' => 'E02005936',
        '3EU' => 'E02005936',
        '3EW' => 'E02005996',
        '3EX' => 'E02005936',
        '3EY' => 'E02005936',
        '3EZ' => 'E02005936',
        '3FA' => 'E02005936',
        '3FB' => 'E02005936',
        '3FD' => 'E02005936',
        '3FE' => 'E02005936',
        '3FG' => 'E02005936',
        '3FH' => 'E02005996',
        '3FJ' => 'E02005996',
        '3FL' => 'E02005996',
        '3FN' => 'E02005996',
        '3FP' => 'E02005996',
        '3FQ' => 'E02005936',
        '3FR' => 'E02005996',
        '3FS' => 'E02005936',
        '3FT' => 'E02005936',
        '3HA' => 'E02005936',
        '3HB' => 'E02005936',
        '3HD' => 'E02005936',
        '3HE' => 'E02005936',
        '3HF' => 'E02005936',
        '3HG' => 'E02005936',
        '3HH' => 'E02005936',
        '3HJ' => 'E02005936',
        '3HL' => 'E02005936',
        '3HN' => 'E02005936',
        '3HP' => 'E02005936',
        '3HQ' => 'E02005936',
        '3HR' => 'E02005936',
        '3HS' => 'E02005936',
        '3HT' => 'E02005936',
        '3HU' => 'E02005936',
        '3HW' => 'E02005936',
        '3HX' => 'E02005936',
        '3HY' => 'E02005936',
        '3HZ' => 'E02005936',
        '3JA' => 'E02005936',
        '3JB' => 'E02005936',
        '3JD' => 'E02005936',
        '3JE' => 'E02005936',
        '3JF' => 'E02005936',
        '3JG' => 'E02005936',
        '3JH' => 'E02005936',
        '3JJ' => 'E02005936',
        '3JL' => 'E02005936',
        '3JN' => 'E02005936',
        '3JP' => 'E02005936',
        '3JQ' => 'E02005936',
        '3JR' => 'E02005936',
        '3JS' => 'E02005936',
        '3JT' => 'E02005936',
        '3JU' => 'E02005936',
        '3JW' => 'E02005936',
        '3JX' => 'E02005936',
        '3JY' => 'E02005936',
        '3JZ' => 'E02005936',
        '3LA' => 'E02005936',
        '3LB' => 'E02005930',
        '3LD' => 'E02005930',
        '3LE' => 'E02005930',
        '3LF' => 'E02005930',
        '3LG' => 'E02005930',
        '3LH' => 'E02005930',
        '3LJ' => 'E02005930',
        '3LL' => 'E02005930',
        '3LN' => 'E02005936',
        '3LP' => 'E02005930',
        '3LQ' => 'E02005930',
        '3LR' => 'E02005930',
        '3LS' => 'E02005930',
        '3LT' => 'E02005931',
        '3LU' => 'E02005930',
        '3LW' => 'E02005930',
        '3LX' => 'E02005930',
        '3LY' => 'E02005930',
        '3LZ' => 'E02005930',
        '3NA' => 'E02005936',
        '3NB' => 'E02005930',
        '3ND' => 'E02005930',
        '3NE' => 'E02005930',
        '3NF' => 'E02005930',
        '3NG' => 'E02005930',
        '3NH' => 'E02005936',
        '3NQ' => 'E02005930',
        '3NR' => 'E02005930',
        '3NS' => 'E02005930',
        '3NT' => 'E02005930',
        '3NU' => 'E02005930',
        '3NX' => 'E02005930',
        '3NY' => 'E02005930',
        '3NZ' => 'E02005930',
        '3PA' => 'E02005930',
        '3PB' => 'E02005930',
        '3PD' => 'E02005930',
        '3PE' => 'E02005930',
        '3PF' => 'E02005930',
        '3PG' => 'E02005930',
        '3PQ' => 'E02005930',
        '3PS' => 'E02005930',
        '3PT' => 'E02005930',
        '3PU' => 'E02005930',
        '3PW' => 'E02005937',
        '3PX' => 'E02005930',
        '3PY' => 'E02005930',
        '3PZ' => 'E02005930',
        '3QA' => 'E02005930',
        '3QB' => 'E02005930',
        '3QD' => 'E02005930',
        '3QE' => 'E02005930',
        '3QF' => 'E02005930',
        '3QG' => 'E02005930',
        '3QH' => 'E02005994',
        '3QJ' => 'E02005994',
        '3QL' => 'E02005994',
        '3QN' => 'E02005994',
        '3QP' => 'E02005994',
        '3QQ' => 'E02005930',
        '3QR' => 'E02005994',
        '3QS' => 'E02005994',
        '3QT' => 'E02005996',
        '3QU' => 'E02005996',
        '3QW' => 'E02005994',
        '3QX' => 'E02005996',
        '3QY' => 'E02005996',
        '3QZ' => 'E02005996',
        '3RA' => 'E02005996',
        '3RB' => 'E02005996',
        '3RD' => 'E02005996',
        '3RH' => 'E02005930',
        '3RP' => 'E02005930',
        '3RR' => 'E02005930',
        '3RS' => 'E02005930',
        '3RT' => 'E02005930',
        '3RU' => 'E02005930',
        '3RW' => 'E02005930',
        '3RX' => 'E02005930',
        '3RY' => 'E02005930',
        '3RZ' => 'E02005930',
        '3SA' => 'E02005930',
        '3SB' => 'E02005930',
        '3SD' => 'E02005930',
        '3SE' => 'E02005930',
        '3SF' => 'E02005930',
        '3SG' => 'E02005930',
        '3SH' => 'E02005930',
        '3SJ' => 'E02005930',
        '3SL' => 'E02005930',
        '3SN' => 'E02005930',
        '3SQ' => 'E02005930',
        '3SR' => 'E02005930',
        '3SS' => 'E02005930',
        '3ST' => 'E02005930',
        '3SW' => 'E02005930',
        '3TA' => 'E02005930',
        '3TB' => 'E02005930',
        '3TD' => 'E02005930',
        '3TE' => 'E02005930',
        '3TF' => 'E02005930',
        '3TG' => 'E02005930',
        '3TH' => 'E02005930',
        '3TJ' => 'E02005930',
        '3TL' => 'E02005930',
        '3TN' => 'E02005930',
        '3TP' => 'E02005930',
        '3TQ' => 'E02005930',
        '3TR' => 'E02005930',
        '3TS' => 'E02005930',
        '3TT' => 'E02005930',
        '3TU' => 'E02005930',
        '3TW' => 'E02005930',
        '3TX' => 'E02005930',
        '3TY' => 'E02005930',
        '3UA' => 'E02005936',
        '3UB' => 'E02005936',
        '3WA' => 'E02005937',
        '3WX' => 'E02005936',
        '3WZ' => 'E02005937',
        '3YH' => 'E02005937',
        '3YJ' => 'E02005937',
        '3YL' => 'E02005937',
        '3YP' => 'E02005937',
        '3YR' => 'E02005936',
        '3YS' => 'E02005937',
        '3YT' => 'E02005937',
        '3YU' => 'E02005936',
        '3YW' => 'E02005937',
        '3YX' => 'E02005936',
        '3YY' => 'E02005937',
        '3ZJ' => 'E02005937',
        '4AA' => 'E02005994',
        '4AB' => 'E02005994',
        '4AD' => 'E02005994',
        '4AF' => 'E02005994',
        '4AG' => 'E02005994',
        '4AH' => 'E02005994',
        '4AJ' => 'E02005994',
        '4AL' => 'E02005994',
        '4AN' => 'E02005994',
        '4AP' => 'E02005994',
        '4AQ' => 'E02005994',
        '4AR' => 'E02005994',
        '4AS' => 'E02005994',
        '4AT' => 'E02005994',
        '4AU' => 'E02005994',
        '4AW' => 'E02005994',
        '4AX' => 'E02005994',
        '4BH' => 'E02005994',
        '4BJ' => 'E02005994',
        '4BL' => 'E02005994',
        '4BN' => 'E02005994',
        '4BP' => 'E02005994',
        '4BS' => 'E02005994',
        '4BT' => 'E02005994',
        '4BU' => 'E02005994',
        '4BW' => 'E02005994',
        '4BX' => 'E02005994',
        '4BY' => 'E02005994',
        '4BZ' => 'E02005994',
        '4DA' => 'E02005994',
        '4DB' => 'E02005994',
        '4DD' => 'E02005994',
        '4DE' => 'E02005994',
        '4DF' => 'E02005994',
        '4DG' => 'E02005994',
        '4DH' => 'E02005994',
        '4DJ' => 'E02005994',
        '4DL' => 'E02005994',
        '4DN' => 'E02005994',
        '4DP' => 'E02005994',
        '4DQ' => 'E02005994',
        '4DR' => 'E02005994',
        '4DW' => 'E02005994',
        '4DX' => 'E02005994',
        '4DY' => 'E02005994',
        '4ED' => 'E02005994',
        '4EE' => 'E02005994',
        '4EF' => 'E02005994',
        '4EG' => 'E02005994',
        '4EH' => 'E02005994',
        '4EJ' => 'E02005994',
        '4EL' => 'E02005994',
        '4EN' => 'E02005994',
        '4EP' => 'E02005994',
        '4EQ' => 'E02005994',
        '4ER' => 'E02005994',
        '4ES' => 'E02005994',
        '4ET' => 'E02005994',
        '4EU' => 'E02005994',
        '4EW' => 'E02005994',
        '4EX' => 'E02005994',
        '4EY' => 'E02005994',
        '4EZ' => 'E02005994',
        '4HA' => 'E02005994',
        '4HB' => 'E02005994',
        '4HD' => 'E02005994',
        '4HE' => 'E02005994',
        '4HF' => 'E02005994',
        '4HH' => 'E02005994',
        '4HJ' => 'E02005994',
        '4HN' => 'E02005994',
        '4HP' => 'E02005930',
        '4HR' => 'E02005930',
        '4HS' => 'E02005930',
        '4HT' => 'E02005930',
        '4HU' => 'E02005930',
        '4HW' => 'E02005994',
        '4HX' => 'E02005930',
        '4HY' => 'E02005930',
        '4HZ' => 'E02005930',
        '4JA' => 'E02005930',
        '4JB' => 'E02005930',
        '4JD' => 'E02005930',
        '4JE' => 'E02005930',
        '4JF' => 'E02005930',
        '4JG' => 'E02005930',
        '4JH' => 'E02005930',
        '4JJ' => 'E02005930',
        '4JL' => 'E02005930',
        '4JN' => 'E02005930',
        '4JP' => 'E02005930',
        '4JQ' => 'E02005930',
        '4JR' => 'E02005930',
        '4JS' => 'E02005930',
        '4JT' => 'E02005930',
        '4JU' => 'E02005930',
        '4JW' => 'E02005930',
        '4JX' => 'E02005930',
        '4JY' => 'E02005930',
        '4JZ' => 'E02005930',
        '4LJ' => 'E02005930',
        '4LL' => 'E02005930',
        '4LN' => 'E02005930',
        '4LP' => 'E02005930',
        '4LR' => 'E02005930',
        '4LS' => 'E02005930',
        '4LT' => 'E02005930',
        '4LU' => 'E02005930',
        '4LW' => 'E02005930',
        '4LZ' => 'E02005930',
        '4NA' => 'E02005930',
        '4NB' => 'E02005930',
        '4ND' => 'E02005930',
        '4NE' => 'E02005930',
        '4NF' => 'E02005930',
        '4NG' => 'E02005930',
        '4NH' => 'E02005930',
        '4NJ' => 'E02005930',
        '4NL' => 'E02005930',
        '4NN' => 'E02005930',
        '4NP' => 'E02005930',
        '4NQ' => 'E02005930',
        '4PA' => 'E02005930',
        '4PB' => 'E02005930',
        '4PD' => 'E02005930',
        '4PE' => 'E02005930',
        '4PF' => 'E02005930',
        '4PG' => 'E02005930',
        '4PH' => 'E02005994',
        '4PJ' => 'E02005930',
        '4PL' => 'E02005930',
        '4PN' => 'E02005930',
        '4PP' => 'E02005930',
        '4PQ' => 'E02005930',
        '4PR' => 'E02005930',
        '4PS' => 'E02005930',
        '4PT' => 'E02005930',
        '4PU' => 'E02005930',
        '4PW' => 'E02005930',
        '4PZ' => 'E02005930',
        '4QA' => 'E02005930',
        '4QB' => 'E02005930',
        '4QD' => 'E02005930',
        '4QG' => 'E02005930',
        '4QH' => 'E02005930',
        '4QJ' => 'E02005930',
        '4QL' => 'E02005930',
        '4QN' => 'E02005930',
        '4QP' => 'E02005930',
        '4QQ' => 'E02005930',
        '4QR' => 'E02005930',
        '4QS' => 'E02005930',
        '4QT' => 'E02005930',
        '4QU' => 'E02005930',
        '4QW' => 'E02005930',
        '4QX' => 'E02005930',
        '4QY' => 'E02005930',
        '4QZ' => 'E02005930',
        '4RA' => 'E02005930',
        '4RB' => 'E02005930',
        '4RD' => 'E02005930',
        '4RE' => 'E02005930',
        '4RF' => 'E02005930',
        '4RG' => 'E02005930',
        '4RH' => 'E02005930',
        '4RJ' => 'E02005930',
        '4RL' => 'E02005930',
        '4RN' => 'E02005930',
        '4RP' => 'E02005930',
        '4RQ' => 'E02005930',
        '4RR' => 'E02005930',
        '4RS' => 'E02005930',
        '4RT' => 'E02005930',
        '4RU' => 'E02005930',
        '4RW' => 'E02005930',
        '4RX' => 'E02005930',
        '4RZ' => 'E02005930',
        '4SA' => 'E02005930',
        '4SB' => 'E02005930',
        '4SD' => 'E02005930',
        '4SE' => 'E02005930',
        '4SF' => 'E02005930',
        '4SG' => 'E02005930',
        '4SH' => 'E02005930',
        '4SJ' => 'E02005930',
        '4SL' => 'E02005930',
        '4SN' => 'E02005930',
        '4SP' => 'E02005930',
        '4SQ' => 'E02005930',
        '4SR' => 'E02005930',
        '4SS' => 'E02005930',
        '4ST' => 'E02005930',
        '4SU' => 'E02005930',
        '4SW' => 'E02005930',
        '4SX' => 'E02005930',
        '4SY' => 'E02005930',
        '4SZ' => 'E02005930',
        '4TA' => 'E02005930',
        '4TB' => 'E02005930',
        '4TD' => 'E02005930',
        '4TE' => 'E02005930',
        '4TG' => 'E02005930',
        '4TH' => 'E02005930',
        '4TJ' => 'E02005930',
        '4TL' => 'E02005930',
        '4TN' => 'E02005930',
        '4TP' => 'E02005930',
        '4TQ' => 'E02005930',
        '4TR' => 'E02005930',
        '4TS' => 'E02005930',
        '4TT' => 'E02005930',
        '4TU' => 'E02005930',
        '4TW' => 'E02005930',
        '4TZ' => 'E02005930',
        '4UA' => 'E02005930',
        '4UB' => 'E02005930',
        '4UD' => 'E02005930',
        '4UH' => 'E02005930',
        '4UJ' => 'E02005930',
        '4UL' => 'E02005930',
        '4UN' => 'E02005930',
        '9AA' => 'E02005937',
        '9AB' => 'E02005937',
        '9AD' => 'E02005937',
        '9AE' => 'E02005937',
        '9AF' => 'E02005937',
        '9AG' => 'E02005937',
        '9AH' => 'E02005937',
        '9AJ' => 'E02005937',
        '9AL' => 'E02005937',
        '9AN' => 'E02005937',
        '9AP' => 'E02005937',
        '9AQ' => 'E02005937',
        '9AR' => 'E02005937',
        '9AS' => 'E02005937',
        '9AT' => 'E02005937',
        '9AU' => 'E02005937',
        '9AW' => 'E02005937',
        '9AX' => 'E02005937',
        '9AY' => 'E02005937',
        '9AZ' => 'E02005937',
        '9BA' => 'E02005937',
        '9BB' => 'E02005937',
        '9BD' => 'E02005937',
        '9BE' => 'E02005937',
        '9BF' => 'E02005937',
        '9BG' => 'E02005937',
        '9BH' => 'E02005937',
        '9BJ' => 'E02005937',
        '9BL' => 'E02005937',
        '9BN' => 'E02005937',
        '9BP' => 'E02005937',
        '9BQ' => 'E02005937',
        '9BR' => 'E02005937',
        '9BS' => 'E02005937',
        '9BT' => 'E02005937',
        '9BU' => 'E02005937',
        '9BW' => 'E02005937',
        '9BX' => 'E02005937',
        '9BY' => 'E02005937',
        '9BZ' => 'E02005937',
        '9DA' => 'E02005937',
        '9DB' => 'E02005937',
        '9DD' => 'E02005937',
        '9DE' => 'E02005937',
        '9DF' => 'E02005937',
        '9DG' => 'E02005937',
        '9DH' => 'E02005937',
        '9DJ' => 'E02005937',
        '9DL' => 'E02005937',
        '9DN' => 'E02005937',
        '9DP' => 'E02005937',
        '9DQ' => 'E02005937',
        '9DR' => 'E02005937',
        '9DS' => 'E02005937',
        '9DT' => 'E02005937',
        '9DU' => 'E02005937',
        '9DW' => 'E02005937',
        '9DX' => 'E02005937',
        '9DY' => 'E02005937',
        '9DZ' => 'E02005937',
        '9EA' => 'E02005937',
        '9EB' => 'E02005937',
        '9ED' => 'E02005937',
        '9EE' => 'E02005937',
        '9EF' => 'E02005937',
        '9EG' => 'E02005937',
        '9EH' => 'E02005937',
        '9EJ' => 'E02005937',
        '9EL' => 'E02005937',
        '9EN' => 'E02005937',
        '9EP' => 'E02005937',
        '9EQ' => 'E02005937',
        '9ER' => 'E02005937',
        '9ES' => 'E02005937',
        '9EU' => 'E02005937',
        '9EW' => 'E02005937',
        '9EX' => 'E02005937',
        '9EY' => 'E02005937',
        '9EZ' => 'E02005937',
        '9FA' => 'E02005937',
        '9FB' => 'E02005937',
        '9FD' => 'E02005937',
        '9FE' => 'E02005937',
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
