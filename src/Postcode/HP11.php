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
final class HP11
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02003710',
        '1AB' => 'E02003710',
        '1AD' => 'E02003711',
        '1AE' => 'E02003711',
        '1AF' => 'E02003711',
        '1AG' => 'E02003710',
        '1AJ' => 'E02003711',
        '1AL' => 'E02003711',
        '1AN' => 'E02003710',
        '1AP' => 'E02003710',
        '1AQ' => 'E02003710',
        '1AR' => 'E02003711',
        '1AS' => 'E02003711',
        '1AT' => 'E02003711',
        '1AU' => 'E02003711',
        '1AW' => 'E02003711',
        '1AX' => 'E02003710',
        '1AY' => 'E02003710',
        '1AZ' => 'E02003710',
        '1BA' => 'E02003710',
        '1BB' => 'E02003710',
        '1BD' => 'E02003710',
        '1BE' => 'E02003710',
        '1BF' => 'E02003710',
        '1BG' => 'E02003710',
        '1BH' => 'E02003711',
        '1BJ' => 'E02003711',
        '1BL' => 'E02003711',
        '1BN' => 'E02003711',
        '1BP' => 'E02003711',
        '1BQ' => 'E02003710',
        '1BS' => 'E02003711',
        '1BT' => 'E02003711',
        '1BU' => 'E02003711',
        '1BW' => 'E02003710',
        '1BX' => 'E02003710',
        '1BY' => 'E02003710',
        '1BZ' => 'E02003711',
        '1DA' => 'E02003710',
        '1DB' => 'E02003711',
        '1DD' => 'E02003711',
        '1DE' => 'E02003711',
        '1DF' => 'E02003711',
        '1DG' => 'E02003710',
        '1DH' => 'E02003711',
        '1DJ' => 'E02003711',
        '1DL' => 'E02003711',
        '1DN' => 'E02003711',
        '1DP' => 'E02003711',
        '1DQ' => 'E02003711',
        '1DR' => 'E02003711',
        '1DS' => 'E02003711',
        '1DT' => 'E02003711',
        '1DU' => 'E02003711',
        '1DW' => 'E02003711',
        '1DX' => 'E02003710',
        '1DY' => 'E02003711',
        '1DZ' => 'E02003711',
        '1EA' => 'E02003711',
        '1EB' => 'E02003711',
        '1ED' => 'E02003711',
        '1EE' => 'E02003711',
        '1EF' => 'E02003711',
        '1EG' => 'E02003710',
        '1EH' => 'E02003711',
        '1EJ' => 'E02003711',
        '1EL' => 'E02003711',
        '1EN' => 'E02003711',
        '1EP' => 'E02003711',
        '1EQ' => 'E02003711',
        '1ER' => 'E02003710',
        '1ES' => 'E02003711',
        '1ET' => 'E02003711',
        '1EU' => 'E02003710',
        '1EW' => 'E02003711',
        '1EX' => 'E02003711',
        '1EY' => 'E02003711',
        '1EZ' => 'E02003711',
        '1FA' => 'E02003710',
        '1FB' => 'E02003710',
        '1FD' => 'E02003710',
        '1FE' => 'E02003710',
        '1FF' => 'E02003710',
        '1FG' => 'E02003710',
        '1FH' => 'E02003711',
        '1FJ' => 'E02003710',
        '1FL' => 'E02003711',
        '1FN' => 'E02003710',
        '1FP' => 'E02003711',
        '1FQ' => 'E02003710',
        '1FR' => 'E02003710',
        '1FS' => 'E02003710',
        '1FT' => 'E02003710',
        '1FU' => 'E02003711',
        '1FW' => 'E02003711',
        '1FX' => 'E02003710',
        '1FY' => 'E02003711',
        '1FZ' => 'E02003711',
        '1GA' => 'E02003710',
        '1GB' => 'E02003711',
        '1GD' => 'E02003711',
        '1GE' => 'E02003711',
        '1GF' => 'E02003711',
        '1GG' => 'E02003711',
        '1GH' => 'E02003711',
        '1GJ' => 'E02003711',
        '1GL' => 'E02003711',
        '1GN' => 'E02003711',
        '1GP' => 'E02003711',
        '1GQ' => 'E02003711',
        '1GR' => 'E02003711',
        '1GS' => 'E02003711',
        '1GT' => 'E02003711',
        '1GU' => 'E02003710',
        '1GW' => 'E02003711',
        '1GX' => 'E02003711',
        '1GY' => 'E02003711',
        '1GZ' => 'E02003711',
        '1HA' => 'E02003711',
        '1HB' => 'E02003704',
        '1HD' => 'E02003711',
        '1HE' => 'E02003711',
        '1HF' => 'E02003711',
        '1HG' => 'E02003711',
        '1HH' => 'E02003704',
        '1HJ' => 'E02003704',
        '1HL' => 'E02003711',
        '1HN' => 'E02003711',
        '1HP' => 'E02003711',
        '1HQ' => 'E02003704',
        '1HR' => 'E02003711',
        '1HS' => 'E02003711',
        '1HT' => 'E02003711',
        '1HU' => 'E02003711',
        '1HW' => 'E02003711',
        '1HX' => 'E02003711',
        '1HY' => 'E02003711',
        '1HZ' => 'E02003711',
        '1JA' => 'E02003711',
        '1JB' => 'E02003711',
        '1JD' => 'E02003704',
        '1JE' => 'E02003704',
        '1JF' => 'E02003704',
        '1JG' => 'E02003711',
        '1JH' => 'E02003711',
        '1JJ' => 'E02003711',
        '1JL' => 'E02003711',
        '1JN' => 'E02003711',
        '1JP' => 'E02003711',
        '1JQ' => 'E02003711',
        '1JR' => 'E02003714',
        '1JS' => 'E02003711',
        '1JT' => 'E02003711',
        '1JU' => 'E02003711',
        '1JW' => 'E02003711',
        '1JX' => 'E02003710',
        '1JY' => 'E02003704',
        '1JZ' => 'E02003704',
        '1LA' => 'E02003711',
        '1LB' => 'E02003711',
        '1LD' => 'E02003711',
        '1LE' => 'E02003704',
        '1LF' => 'E02003704',
        '1LG' => 'E02003711',
        '1LH' => 'E02003711',
        '1LJ' => 'E02003711',
        '1LL' => 'E02003711',
        '1LN' => 'E02003711',
        '1LP' => 'E02003711',
        '1LQ' => 'E02003704',
        '1LR' => 'E02003710',
        '1LS' => 'E02003711',
        '1LT' => 'E02003710',
        '1LU' => 'E02003710',
        '1LW' => 'E02003711',
        '1LX' => 'E02003710',
        '1LY' => 'E02003711',
        '1LZ' => 'E02003710',
        '1NA' => 'E02003710',
        '1NB' => 'E02003710',
        '1ND' => 'E02003711',
        '1NE' => 'E02003710',
        '1NF' => 'E02003710',
        '1NG' => 'E02003710',
        '1NH' => 'E02003710',
        '1NJ' => 'E02003710',
        '1NL' => 'E02003710',
        '1NN' => 'E02003711',
        '1NP' => 'E02003710',
        '1NQ' => 'E02003711',
        '1NR' => 'E02003710',
        '1NS' => 'E02003710',
        '1NT' => 'E02003710',
        '1NU' => 'E02003710',
        '1NW' => 'E02003711',
        '1NX' => 'E02003710',
        '1NY' => 'E02003711',
        '1NZ' => 'E02003710',
        '1PA' => 'E02003710',
        '1PB' => 'E02003710',
        '1PD' => 'E02003710',
        '1PE' => 'E02003710',
        '1PF' => 'E02003710',
        '1PG' => 'E02003710',
        '1PH' => 'E02003710',
        '1PJ' => 'E02003711',
        '1PL' => 'E02003710',
        '1PN' => 'E02003710',
        '1PP' => 'E02003710',
        '1PQ' => 'E02003710',
        '1PR' => 'E02003710',
        '1PS' => 'E02003710',
        '1PT' => 'E02003710',
        '1PU' => 'E02003710',
        '1PW' => 'E02003710',
        '1PX' => 'E02003710',
        '1PY' => 'E02003710',
        '1PZ' => 'E02003710',
        '1QA' => 'E02003710',
        '1QB' => 'E02003710',
        '1QD' => 'E02003710',
        '1QE' => 'E02003710',
        '1QF' => 'E02003710',
        '1QG' => 'E02003710',
        '1QH' => 'E02003710',
        '1QJ' => 'E02003710',
        '1QL' => 'E02003710',
        '1QN' => 'E02003710',
        '1QP' => 'E02003710',
        '1QQ' => 'E02003710',
        '1QR' => 'E02003710',
        '1QS' => 'E02003710',
        '1QT' => 'E02003710',
        '1QU' => 'E02003711',
        '1QW' => 'E02003710',
        '1QX' => 'E02003711',
        '1QY' => 'E02003711',
        '1QZ' => 'E02003711',
        '1RA' => 'E02003710',
        '1RB' => 'E02003711',
        '1RD' => 'E02003711',
        '1RE' => 'E02003711',
        '1RF' => 'E02003711',
        '1RG' => 'E02003711',
        '1RH' => 'E02003711',
        '1RJ' => 'E02003711',
        '1RL' => 'E02003711',
        '1RN' => 'E02003711',
        '1RP' => 'E02003711',
        '1RQ' => 'E02003711',
        '1RR' => 'E02003711',
        '1RS' => 'E02003711',
        '1RT' => 'E02003711',
        '1RU' => 'E02003711',
        '1RW' => 'E02003711',
        '1RX' => 'E02003711',
        '1RY' => 'E02003711',
        '1RZ' => 'E02003711',
        '1SA' => 'E02003711',
        '1SB' => 'E02003711',
        '1SD' => 'E02003710',
        '1SE' => 'E02003711',
        '1SF' => 'E02003711',
        '1SG' => 'E02003711',
        '1SH' => 'E02003710',
        '1SJ' => 'E02003711',
        '1SL' => 'E02003711',
        '1SN' => 'E02003711',
        '1SP' => 'E02003711',
        '1SQ' => 'E02003711',
        '1SR' => 'E02003711',
        '1SS' => 'E02003711',
        '1ST' => 'E02003711',
        '1SU' => 'E02003711',
        '1SW' => 'E02003711',
        '1SX' => 'E02003710',
        '1SY' => 'E02003710',
        '1SZ' => 'E02003710',
        '1TA' => 'E02003710',
        '1TB' => 'E02003710',
        '1TD' => 'E02003710',
        '1TE' => 'E02003710',
        '1TF' => 'E02003710',
        '1TG' => 'E02003710',
        '1TH' => 'E02003712',
        '1TJ' => 'E02003710',
        '1TL' => 'E02003712',
        '1TN' => 'E02003712',
        '1TP' => 'E02003712',
        '1TQ' => 'E02003710',
        '1TR' => 'E02003712',
        '1TS' => 'E02003712',
        '1TT' => 'E02003712',
        '1TU' => 'E02003712',
        '1TW' => 'E02003712',
        '1TX' => 'E02003712',
        '1TY' => 'E02003712',
        '1TZ' => 'E02003710',
        '1UA' => 'E02003712',
        '1UB' => 'E02003712',
        '1UD' => 'E02003712',
        '1UE' => 'E02003704',
        '1UF' => 'E02003704',
        '1UG' => 'E02003704',
        '1UH' => 'E02003711',
        '1UJ' => 'E02003712',
        '1UL' => 'E02003711',
        '1UN' => 'E02003710',
        '1UP' => 'E02003710',
        '1UQ' => 'E02003704',
        '1US' => 'E02003704',
        '1UT' => 'E02003711',
        '1UU' => 'E02003712',
        '1UW' => 'E02003710',
        '1UX' => 'E02003704',
        '1UY' => 'E02003710',
        '1WA' => 'E02003711',
        '1WB' => 'E02003710',
        '1WD' => 'E02003710',
        '1WE' => 'E02003710',
        '1WF' => 'E02003710',
        '1WG' => 'E02003710',
        '1WH' => 'E02003710',
        '1WJ' => 'E02003710',
        '1WL' => 'E02003710',
        '1WN' => 'E02003710',
        '1WP' => 'E02003710',
        '1WQ' => 'E02003711',
        '1WR' => 'E02003711',
        '1XA' => 'E02003711',
        '1XB' => 'E02003711',
        '1XD' => 'E02003711',
        '1XE' => 'E02003711',
        '1XF' => 'E02003711',
        '1XG' => 'E02003711',
        '1XH' => 'E02003710',
        '1XJ' => 'E02003711',
        '1XL' => 'E02003711',
        '1XN' => 'E02003710',
        '1XP' => 'E02003710',
        '1XR' => 'E02003711',
        '1XS' => 'E02003710',
        '1XT' => 'E02003710',
        '1XU' => 'E02003711',
        '1XW' => 'E02003710',
        '1XX' => 'E02003711',
        '1XZ' => 'E02003711',
        '1YA' => 'E02003710',
        '1YB' => 'E02003711',
        '1YD' => 'E02003710',
        '1YE' => 'E02003710',
        '1YF' => 'E02003710',
        '1YG' => 'E02003710',
        '1YH' => 'E02003711',
        '1YJ' => 'E02003711',
        '1YL' => 'E02003710',
        '1YP' => 'E02003710',
        '1YQ' => 'E02003710',
        '1YR' => 'E02003711',
        '1YS' => 'E02003711',
        '1YU' => 'E02003711',
        '1YW' => 'E02003710',
        '1YY' => 'E02003710',
        '1YZ' => 'E02003704',
        '1ZG' => 'E02003710',
        '1ZH' => 'E02003710',
        '1ZJ' => 'E02003710',
        '1ZN' => 'E02003710',
        '1ZQ' => 'E02003711',
        '1ZU' => 'E02003710',
        '1ZW' => 'E02003710',
        '1ZX' => 'E02003711',
        '2AA' => 'E02003710',
        '2AB' => 'E02003710',
        '2AD' => 'E02003710',
        '2AE' => 'E02003710',
        '2AF' => 'E02003710',
        '2AG' => 'E02003710',
        '2AH' => 'E02003710',
        '2AJ' => 'E02003710',
        '2AL' => 'E02003710',
        '2AN' => 'E02003710',
        '2AP' => 'E02003710',
        '2AQ' => 'E02003710',
        '2AR' => 'E02003710',
        '2AS' => 'E02003710',
        '2AT' => 'E02003710',
        '2AU' => 'E02003710',
        '2AW' => 'E02003710',
        '2AX' => 'E02003710',
        '2AY' => 'E02003710',
        '2AZ' => 'E02003710',
        '2BA' => 'E02003710',
        '2BB' => 'E02003710',
        '2BD' => 'E02003710',
        '2BE' => 'E02003710',
        '2BF' => 'E02003710',
        '2BG' => 'E02003710',
        '2BH' => 'E02003710',
        '2BJ' => 'E02003710',
        '2BL' => 'E02003710',
        '2BN' => 'E02003710',
        '2BP' => 'E02003710',
        '2BQ' => 'E02003710',
        '2BS' => 'E02003710',
        '2BT' => 'E02003710',
        '2BU' => 'E02003710',
        '2BW' => 'E02003710',
        '2BX' => 'E02003710',
        '2BY' => 'E02003710',
        '2BZ' => 'E02003710',
        '2DA' => 'E02003710',
        '2DB' => 'E02003710',
        '2DD' => 'E02003710',
        '2DE' => 'E02003710',
        '2DF' => 'E02003710',
        '2DG' => 'E02003710',
        '2DH' => 'E02003710',
        '2DJ' => 'E02003710',
        '2DL' => 'E02003710',
        '2DN' => 'E02003710',
        '2DP' => 'E02003710',
        '2DQ' => 'E02003710',
        '2DR' => 'E02003710',
        '2DS' => 'E02003710',
        '2DT' => 'E02003710',
        '2DU' => 'E02003710',
        '2DW' => 'E02003710',
        '2DX' => 'E02003710',
        '2DY' => 'E02003710',
        '2DZ' => 'E02003710',
        '2EA' => 'E02003710',
        '2EB' => 'E02003710',
        '2ED' => 'E02003710',
        '2EE' => 'E02003710',
        '2EF' => 'E02003710',
        '2EG' => 'E02003710',
        '2EH' => 'E02003710',
        '2EJ' => 'E02003710',
        '2EL' => 'E02003710',
        '2EN' => 'E02003710',
        '2EP' => 'E02003710',
        '2EQ' => 'E02003710',
        '2ER' => 'E02003710',
        '2ES' => 'E02003710',
        '2ET' => 'E02003710',
        '2EU' => 'E02003710',
        '2EW' => 'E02003710',
        '2EX' => 'E02003710',
        '2EY' => 'E02003710',
        '2EZ' => 'E02003710',
        '2FA' => 'E02003708',
        '2FB' => 'E02003710',
        '2FD' => 'E02003710',
        '2FE' => 'E02003710',
        '2FF' => 'E02003710',
        '2FG' => 'E02003708',
        '2FH' => 'E02003710',
        '2FJ' => 'E02003710',
        '2FL' => 'E02003710',
        '2FN' => 'E02003708',
        '2FP' => 'E02003710',
        '2FQ' => 'E02003710',
        '2FR' => 'E02003710',
        '2FS' => 'E02003710',
        '2FU' => 'E02003710',
        '2FY' => 'E02003710',
        '2FZ' => 'E02003710',
        '2GA' => 'E02003710',
        '2GB' => 'E02003710',
        '2GD' => 'E02003710',
        '2GG' => 'E02003710',
        '2GH' => 'E02003710',
        '2GJ' => 'E02003710',
        '2GL' => 'E02003710',
        '2GN' => 'E02003710',
        '2GP' => 'E02003710',
        '2GR' => 'E02003710',
        '2GS' => 'E02003710',
        '2GT' => 'E02003710',
        '2GU' => 'E02003710',
        '2GW' => 'E02003710',
        '2GX' => 'E02003710',
        '2GZ' => 'E02003710',
        '2HA' => 'E02003710',
        '2HB' => 'E02003710',
        '2HD' => 'E02003710',
        '2HE' => 'E02003710',
        '2HF' => 'E02003710',
        '2HG' => 'E02003710',
        '2HH' => 'E02003710',
        '2HJ' => 'E02003710',
        '2HL' => 'E02003710',
        '2HN' => 'E02003710',
        '2HP' => 'E02003710',
        '2HQ' => 'E02003710',
        '2HR' => 'E02003710',
        '2HS' => 'E02003710',
        '2HT' => 'E02003710',
        '2HU' => 'E02003710',
        '2HW' => 'E02003710',
        '2HX' => 'E02003710',
        '2HY' => 'E02003710',
        '2HZ' => 'E02003710',
        '2JA' => 'E02003710',
        '2JB' => 'E02003710',
        '2JD' => 'E02003710',
        '2JE' => 'E02003710',
        '2JF' => 'E02003710',
        '2JG' => 'E02003710',
        '2JH' => 'E02003710',
        '2JJ' => 'E02003710',
        '2JL' => 'E02003710',
        '2JN' => 'E02003710',
        '2JP' => 'E02003710',
        '2JQ' => 'E02003710',
        '2JR' => 'E02003710',
        '2JS' => 'E02003710',
        '2JT' => 'E02003710',
        '2JU' => 'E02003710',
        '2JW' => 'E02003710',
        '2JX' => 'E02003710',
        '2JY' => 'E02003710',
        '2JZ' => 'E02003710',
        '2LA' => 'E02003710',
        '2LB' => 'E02003708',
        '2LD' => 'E02003710',
        '2LE' => 'E02003710',
        '2LF' => 'E02003710',
        '2LG' => 'E02003710',
        '2LH' => 'E02003710',
        '2LJ' => 'E02003710',
        '2LL' => 'E02003710',
        '2LN' => 'E02003708',
        '2LP' => 'E02003708',
        '2LQ' => 'E02003710',
        '2LR' => 'E02003708',
        '2LS' => 'E02003708',
        '2LT' => 'E02003708',
        '2LU' => 'E02003708',
        '2LW' => 'E02003710',
        '2LX' => 'E02003708',
        '2LY' => 'E02003708',
        '2LZ' => 'E02003708',
        '2NA' => 'E02003708',
        '2NB' => 'E02003708',
        '2ND' => 'E02003708',
        '2NE' => 'E02003708',
        '2NF' => 'E02003708',
        '2NG' => 'E02003708',
        '2NH' => 'E02003708',
        '2NJ' => 'E02003708',
        '2NL' => 'E02003708',
        '2NN' => 'E02003708',
        '2NP' => 'E02003710',
        '2NQ' => 'E02003708',
        '2NR' => 'E02003708',
        '2NS' => 'E02003710',
        '2NT' => 'E02003710',
        '2NU' => 'E02003708',
        '2NW' => 'E02003708',
        '2NX' => 'E02003708',
        '2NY' => 'E02003710',
        '2NZ' => 'E02003710',
        '2PA' => 'E02003708',
        '2PB' => 'E02003710',
        '2PD' => 'E02003708',
        '2PE' => 'E02003708',
        '2PF' => 'E02003708',
        '2PG' => 'E02003708',
        '2PH' => 'E02003708',
        '2PJ' => 'E02003708',
        '2PL' => 'E02003708',
        '2PN' => 'E02003710',
        '2PP' => 'E02003710',
        '2PQ' => 'E02003710',
        '2PR' => 'E02003710',
        '2PS' => 'E02003710',
        '2PT' => 'E02003710',
        '2PU' => 'E02003710',
        '2PW' => 'E02003710',
        '2PX' => 'E02003710',
        '2PY' => 'E02003710',
        '2PZ' => 'E02003710',
        '2QA' => 'E02003710',
        '2QB' => 'E02003710',
        '2QD' => 'E02003710',
        '2QE' => 'E02003710',
        '2QF' => 'E02003710',
        '2QG' => 'E02003708',
        '2QH' => 'E02003710',
        '2QJ' => 'E02003710',
        '2QL' => 'E02003710',
        '2QN' => 'E02003710',
        '2QP' => 'E02003710',
        '2QQ' => 'E02003708',
        '2QR' => 'E02003708',
        '2QS' => 'E02003708',
        '2QT' => 'E02003708',
        '2QU' => 'E02003708',
        '2QW' => 'E02003708',
        '2QX' => 'E02003708',
        '2QY' => 'E02003710',
        '2QZ' => 'E02003710',
        '2RA' => 'E02003708',
        '2RB' => 'E02003708',
        '2RD' => 'E02003708',
        '2RE' => 'E02003708',
        '2RF' => 'E02003708',
        '2RG' => 'E02003710',
        '2RH' => 'E02003708',
        '2RJ' => 'E02003710',
        '2RL' => 'E02003708',
        '2RN' => 'E02003708',
        '2RP' => 'E02003710',
        '2RQ' => 'E02003710',
        '2RR' => 'E02003708',
        '2RS' => 'E02003710',
        '2RT' => 'E02003710',
        '2RU' => 'E02003710',
        '2RW' => 'E02003708',
        '2RX' => 'E02003710',
        '2RY' => 'E02003710',
        '2RZ' => 'E02003710',
        '2SA' => 'E02003710',
        '2SB' => 'E02003708',
        '2SD' => 'E02003710',
        '2SE' => 'E02003708',
        '2SF' => 'E02003710',
        '2SG' => 'E02003710',
        '2SH' => 'E02003708',
        '2SJ' => 'E02003708',
        '2SL' => 'E02003710',
        '2SN' => 'E02003708',
        '2SP' => 'E02003708',
        '2SQ' => 'E02003710',
        '2SR' => 'E02003710',
        '2SS' => 'E02003710',
        '2ST' => 'E02003710',
        '2SU' => 'E02003710',
        '2SW' => 'E02003708',
        '2SX' => 'E02003710',
        '2SY' => 'E02003710',
        '2SZ' => 'E02003710',
        '2TA' => 'E02003708',
        '2TB' => 'E02003710',
        '2TD' => 'E02003708',
        '2TE' => 'E02003710',
        '2TF' => 'E02003710',
        '2TG' => 'E02003710',
        '2TH' => 'E02003710',
        '2TJ' => 'E02003710',
        '2TL' => 'E02003710',
        '2TN' => 'E02003710',
        '2TP' => 'E02003710',
        '2TQ' => 'E02003710',
        '2TR' => 'E02003710',
        '2TS' => 'E02003710',
        '2TT' => 'E02003710',
        '2TU' => 'E02003710',
        '2TW' => 'E02003710',
        '2TX' => 'E02003710',
        '2TY' => 'E02003710',
        '2TZ' => 'E02003710',
        '2UA' => 'E02003710',
        '2UB' => 'E02003710',
        '2UD' => 'E02003710',
        '2UE' => 'E02003710',
        '2UF' => 'E02003710',
        '2UG' => 'E02003710',
        '2UH' => 'E02003710',
        '2UJ' => 'E02003710',
        '2UL' => 'E02003710',
        '2UN' => 'E02003710',
        '2UP' => 'E02003710',
        '2UQ' => 'E02003710',
        '2UR' => 'E02003710',
        '2UT' => 'E02003710',
        '2UU' => 'E02003710',
        '2UW' => 'E02003710',
        '2UX' => 'E02003710',
        '2UY' => 'E02003710',
        '2UZ' => 'E02003710',
        '2WA' => 'E02003710',
        '2WB' => 'E02003710',
        '2WD' => 'E02003710',
        '2WE' => 'E02003710',
        '2WF' => 'E02003710',
        '2WG' => 'E02003710',
        '2WJ' => 'E02003710',
        '2WU' => 'E02003710',
        '2WX' => 'E02003710',
        '2WY' => 'E02003710',
        '2WZ' => 'E02003710',
        '2XA' => 'E02003710',
        '2XB' => 'E02003710',
        '2XD' => 'E02003710',
        '2XE' => 'E02003710',
        '2XF' => 'E02003710',
        '2XG' => 'E02003710',
        '2XH' => 'E02003708',
        '2XJ' => 'E02003710',
        '2XL' => 'E02003710',
        '2XN' => 'E02003708',
        '2XP' => 'E02003710',
        '2XQ' => 'E02003710',
        '2XR' => 'E02003710',
        '2XS' => 'E02003708',
        '2XT' => 'E02003710',
        '2XU' => 'E02003710',
        '2XW' => 'E02003710',
        '2XX' => 'E02003710',
        '2XY' => 'E02003710',
        '2YJ' => 'E02003710',
        '2YL' => 'E02003710',
        '2YP' => 'E02003710',
        '2YR' => 'E02003710',
        '2YS' => 'E02003710',
        '2YT' => 'E02003710',
        '2YU' => 'E02003710',
        '2YX' => 'E02003710',
        '2ZJ' => 'E02003710',
        '2ZN' => 'E02003710',
        '2ZP' => 'E02003710',
        '2ZQ' => 'E02003710',
        '2ZW' => 'E02003710',
        '9AA' => 'E02003710',
        '9AB' => 'E02003710',
        '9AD' => 'E02003710',
        '9AE' => 'E02003710',
        '9AF' => 'E02003710',
        '9AG' => 'E02003710',
        '9AH' => 'E02003710',
        '9AJ' => 'E02003710',
        '9AL' => 'E02003710',
        '9AN' => 'E02003710',
        '9AP' => 'E02003710',
        '9AQ' => 'E02003710',
        '9AR' => 'E02003710',
        '9AS' => 'E02003710',
        '9AT' => 'E02003710',
        '9AU' => 'E02003710',
        '9AW' => 'E02003710',
        '9AX' => 'E02003710',
        '9AY' => 'E02003710',
        '9AZ' => 'E02003710',
        '9BA' => 'E02003710',
        '9BB' => 'E02003710',
        '9BD' => 'E02003710',
        '9BE' => 'E02003710',
        '9BF' => 'E02003710',
        '9BG' => 'E02003710',
        '9BH' => 'E02003710',
        '9BJ' => 'E02003710',
        '9BL' => 'E02003710',
        '9BN' => 'E02003710',
        '9BP' => 'E02003710',
        '9BQ' => 'E02003710',
        '9BR' => 'E02003710',
        '9BS' => 'E02003710',
        '9BT' => 'E02003710',
        '9BU' => 'E02003710',
        '9BW' => 'E02003710',
        '9BX' => 'E02003710',
        '9BY' => 'E02003710',
        '9BZ' => 'E02003710',
        '9DA' => 'E02003710',
        '9DB' => 'E02003710',
        '9DD' => 'E02003710',
        '9DE' => 'E02003710',
        '9DF' => 'E02003710',
        '9DG' => 'E02003710',
        '9DH' => 'E02003710',
        '9DJ' => 'E02003710',
        '9DL' => 'E02003710',
        '9DN' => 'E02003710',
        '9DP' => 'E02003710',
        '9DQ' => 'E02003710',
        '9DR' => 'E02003710',
        '9DS' => 'E02003710',
        '9DT' => 'E02003710',
        '9DU' => 'E02003710',
        '9DW' => 'E02003710',
        '9DX' => 'E02003710',
        '9DY' => 'E02003710',
        '9DZ' => 'E02003710',
        '9EA' => 'E02003710',
        '9EB' => 'E02003710',
        '9ED' => 'E02003710',
        '9EE' => 'E02003710',
        '9EF' => 'E02003710',
        '9EG' => 'E02003710',
        '9EH' => 'E02003710',
        '9EJ' => 'E02003710',
        '9EL' => 'E02003710',
        '9EN' => 'E02003710',
        '9EP' => 'E02003710',
        '9EQ' => 'E02003710',
        '9ER' => 'E02003710',
        '9FA' => 'E02003710',
        '9FB' => 'E02003710',
        '9FD' => 'E02003710',
        '9FE' => 'E02003710',
        '9FF' => 'E02003710',
        '9FG' => 'E02003710',
        '9FH' => 'E02003710',
        '9FJ' => 'E02003710',
        '9FL' => 'E02003710',
        '9FN' => 'E02003710',
        '9FP' => 'E02003710',
        '9FQ' => 'E02003710',
        '9FR' => 'E02003710',
        '9FS' => 'E02003710',
        '9FT' => 'E02003710',
        '9FU' => 'E02003710',
        '9FW' => 'E02003710',
        '9FX' => 'E02003710',
        '9FY' => 'E02003710',
        '9FZ' => 'E02003710',
        '9GA' => 'E02003710',
        '9GB' => 'E02003710',
        '9GD' => 'E02003710',
        '9GE' => 'E02003710',
        '9GF' => 'E02003710',
        '9GG' => 'E02003710',
        '9GH' => 'E02003710',
        '9GJ' => 'E02003710',
        '9GL' => 'E02003710',
        '9GN' => 'E02003710',
        '9GP' => 'E02003710',
        '9GQ' => 'E02003710',
        '9GR' => 'E02003710',
        '9GS' => 'E02003710',
        '9GT' => 'E02003710',
        '9GU' => 'E02003710',
        '9GW' => 'E02003710',
        '9GX' => 'E02003710',
        '9GY' => 'E02003710',
        '9GZ' => 'E02003710',
        '9HA' => 'E02003710',
        '9HB' => 'E02003710',
        '9HD' => 'E02003710',
        '9HE' => 'E02003710',
        '9HF' => 'E02003710',
        '9HG' => 'E02003710',
        '9HH' => 'E02003710',
        '9HJ' => 'E02003710',
        '9HL' => 'E02003710',
        '9HN' => 'E02003710',
        '9HP' => 'E02003710',
        '9HQ' => 'E02003710',
        '9HR' => 'E02003710',
        '9HS' => 'E02003710',
        '9HT' => 'E02003710',
        '9HU' => 'E02003710',
        '9HW' => 'E02003710',
        '9HX' => 'E02003710',
        '9HY' => 'E02003710',
        '9JA' => 'E02003710',
        '9JB' => 'E02003710',
        '9JD' => 'E02003710',
        '9JE' => 'E02003710',
        '9JF' => 'E02003710',
        '9JG' => 'E02003710',
        '9JH' => 'E02003710',
        '9JJ' => 'E02003710',
        '9JL' => 'E02003710',
        '9JN' => 'E02003710',
        '9JP' => 'E02003710',
        '9JQ' => 'E02003710',
        '9JR' => 'E02003710',
        '9JS' => 'E02003710',
        '9JT' => 'E02003710',
        '9JU' => 'E02003710',
        '9JW' => 'E02003710',
        '9JX' => 'E02003710',
        '9JY' => 'E02003710',
        '9JZ' => 'E02003710',
        '9LA' => 'E02003710',
        '9LB' => 'E02003710',
        '9LD' => 'E02003710',
        '9LE' => 'E02003710',
        '9LF' => 'E02003710',
        '9LG' => 'E02003710',
        '9LH' => 'E02003710',
        '9LJ' => 'E02003710',
        '9LL' => 'E02003710',
        '9LN' => 'E02003710',
        '9LP' => 'E02003710',
        '9LQ' => 'E02003710',
        '9LR' => 'E02003710',
        '9LS' => 'E02003710',
        '9LT' => 'E02003710',
        '9LU' => 'E02003710',
        '9LW' => 'E02003710',
        '9LX' => 'E02003710',
        '9LY' => 'E02003710',
        '9LZ' => 'E02003710',
        '9NA' => 'E02003710',
        '9NB' => 'E02003710',
        '9ND' => 'E02003710',
        '9NE' => 'E02003710',
        '9NF' => 'E02003710',
        '9NG' => 'E02003710',
        '9SA' => 'E02003710',
        '9SB' => 'E02003710',
        '9SD' => 'E02003710',
        '9SE' => 'E02003710',
        '9SF' => 'E02003710',
        '9SG' => 'E02003710',
        '9SH' => 'E02003710',
        '9SJ' => 'E02003710',
        '9SL' => 'E02003710',
        '9SN' => 'E02003710',
        '9SP' => 'E02003710',
        '9SQ' => 'E02003710',
        '9SR' => 'E02003710',
        '9SS' => 'E02003710',
        '9ST' => 'E02003710',
        '9SU' => 'E02003710',
        '9SW' => 'E02003710',
        '9SX' => 'E02003710',
        '9SY' => 'E02003710',
        '9SZ' => 'E02003710',
        '9TA' => 'E02003710',
        '9TB' => 'E02003710',
        '9TD' => 'E02003710',
        '9TE' => 'E02003710',
        '9TF' => 'E02003710',
        '9TG' => 'E02003710',
        '9TH' => 'E02003710',
        '9TJ' => 'E02003710',
        '9TL' => 'E02003710',
        '9TN' => 'E02003710',
        '9TR' => 'E02003710',
        '9TS' => 'E02003710',
        '9TT' => 'E02003710',
        '9TU' => 'E02003710',
        '9TW' => 'E02003710',
        '9TX' => 'E02003710',
        '9TY' => 'E02003710',
        '9TZ' => 'E02003710',
        '9UA' => 'E02003710',
        '9UB' => 'E02003710',
        '9UD' => 'E02003710',
        '9UE' => 'E02003710',
        '9ZZ' => 'E02003710',
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