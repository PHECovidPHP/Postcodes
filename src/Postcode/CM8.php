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
final class CM8
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02004462',
        '1AB' => 'E02004462',
        '1AD' => 'E02004462',
        '1AE' => 'E02004462',
        '1AF' => 'E02004462',
        '1AG' => 'E02004462',
        '1AH' => 'E02004462',
        '1AJ' => 'E02004462',
        '1AL' => 'E02004462',
        '1AN' => 'E02004462',
        '1AP' => 'E02004462',
        '1AQ' => 'E02004462',
        '1AR' => 'E02004462',
        '1AS' => 'E02004462',
        '1AT' => 'E02004462',
        '1AU' => 'E02004462',
        '1AW' => 'E02004462',
        '1AX' => 'E02004462',
        '1AY' => 'E02004462',
        '1AZ' => 'E02004462',
        '1BA' => 'E02004462',
        '1BB' => 'E02004462',
        '1BD' => 'E02004462',
        '1BE' => 'E02004462',
        '1BG' => 'E02004462',
        '1BH' => 'E02004462',
        '1BJ' => 'E02004462',
        '1BL' => 'E02004462',
        '1BN' => 'E02004462',
        '1BP' => 'E02004462',
        '1BQ' => 'E02004462',
        '1BS' => 'E02004462',
        '1BT' => 'E02004462',
        '1BU' => 'E02004462',
        '1BW' => 'E02004462',
        '1BX' => 'E02004462',
        '1BY' => 'E02004462',
        '1BZ' => 'E02004462',
        '1DA' => 'E02004462',
        '1DB' => 'E02004462',
        '1DD' => 'E02004462',
        '1DE' => 'E02004462',
        '1DF' => 'E02004462',
        '1DG' => 'E02004462',
        '1DH' => 'E02004462',
        '1DJ' => 'E02004462',
        '1DL' => 'E02004462',
        '1DN' => 'E02004462',
        '1DP' => 'E02004462',
        '1DQ' => 'E02004462',
        '1DR' => 'E02004462',
        '1DS' => 'E02004462',
        '1DT' => 'E02004462',
        '1DU' => 'E02004462',
        '1DW' => 'E02004462',
        '1DX' => 'E02004462',
        '1DY' => 'E02004462',
        '1DZ' => 'E02004462',
        '1EA' => 'E02004462',
        '1EB' => 'E02004463',
        '1ED' => 'E02004462',
        '1EE' => 'E02004462',
        '1EF' => 'E02004462',
        '1EG' => 'E02004462',
        '1EH' => 'E02004463',
        '1EJ' => 'E02004462',
        '1EL' => 'E02004462',
        '1EN' => 'E02004461',
        '1EP' => 'E02004462',
        '1EQ' => 'E02004462',
        '1ER' => 'E02004461',
        '1ES' => 'E02004461',
        '1ET' => 'E02004462',
        '1EU' => 'E02004462',
        '1EW' => 'E02004462',
        '1EX' => 'E02004461',
        '1EY' => 'E02004461',
        '1EZ' => 'E02004460',
        '1FA' => 'E02004462',
        '1FB' => 'E02004461',
        '1FD' => 'E02004462',
        '1FE' => 'E02004461',
        '1FF' => 'E02004462',
        '1FG' => 'E02004462',
        '1FH' => 'E02004461',
        '1FJ' => 'E02004462',
        '1FL' => 'E02004462',
        '1FN' => 'E02004462',
        '1FP' => 'E02004462',
        '1FQ' => 'E02004462',
        '1FR' => 'E02004462',
        '1FS' => 'E02004462',
        '1FT' => 'E02004462',
        '1FU' => 'E02004462',
        '1FW' => 'E02004462',
        '1FX' => 'E02004462',
        '1FY' => 'E02004462',
        '1FZ' => 'E02004463',
        '1GA' => 'E02004461',
        '1GB' => 'E02004463',
        '1GD' => 'E02004462',
        '1GE' => 'E02004462',
        '1GF' => 'E02004463',
        '1GG' => 'E02004462',
        '1GH' => 'E02004462',
        '1GJ' => 'E02004462',
        '1GL' => 'E02004462',
        '1GN' => 'E02004463',
        '1GP' => 'E02004461',
        '1GQ' => 'E02004461',
        '1GR' => 'E02004462',
        '1GS' => 'E02004462',
        '1GT' => 'E02004462',
        '1GU' => 'E02004462',
        '1GW' => 'E02004462',
        '1GX' => 'E02004462',
        '1GY' => 'E02004462',
        '1GZ' => 'E02004463',
        '1HA' => 'E02004461',
        '1HB' => 'E02004460',
        '1HD' => 'E02004460',
        '1HE' => 'E02004462',
        '1HF' => 'E02004462',
        '1HG' => 'E02004462',
        '1HH' => 'E02004462',
        '1HJ' => 'E02004461',
        '1HL' => 'E02004462',
        '1HN' => 'E02004462',
        '1HP' => 'E02004462',
        '1HQ' => 'E02004462',
        '1HR' => 'E02004462',
        '1HS' => 'E02004462',
        '1HT' => 'E02004463',
        '1HU' => 'E02004463',
        '1HW' => 'E02004462',
        '1HX' => 'E02004463',
        '1HY' => 'E02004462',
        '1HZ' => 'E02004462',
        '1JA' => 'E02004462',
        '1JB' => 'E02004462',
        '1JD' => 'E02004462',
        '1JE' => 'E02004462',
        '1JF' => 'E02004462',
        '1JG' => 'E02004462',
        '1JH' => 'E02004462',
        '1JJ' => 'E02004462',
        '1JL' => 'E02004463',
        '1JN' => 'E02004463',
        '1JP' => 'E02004462',
        '1JQ' => 'E02004462',
        '1JR' => 'E02004462',
        '1JS' => 'E02004462',
        '1JT' => 'E02004463',
        '1JU' => 'E02004462',
        '1JW' => 'E02004462',
        '1JX' => 'E02004462',
        '1JY' => 'E02004462',
        '1JZ' => 'E02004462',
        '1LA' => 'E02004460',
        '1LB' => 'E02004460',
        '1LD' => 'E02004460',
        '1LE' => 'E02004460',
        '1LF' => 'E02004460',
        '1LG' => 'E02004460',
        '1LH' => 'E02004460',
        '1LJ' => 'E02004460',
        '1LL' => 'E02004460',
        '1LN' => 'E02004460',
        '1LP' => 'E02004460',
        '1LQ' => 'E02004460',
        '1LR' => 'E02004461',
        '1LS' => 'E02004461',
        '1LT' => 'E02004461',
        '1LU' => 'E02004461',
        '1LW' => 'E02004460',
        '1LX' => 'E02004461',
        '1LY' => 'E02004461',
        '1LZ' => 'E02004461',
        '1NA' => 'E02004461',
        '1NB' => 'E02004461',
        '1ND' => 'E02004462',
        '1NE' => 'E02004461',
        '1NF' => 'E02004461',
        '1NG' => 'E02004462',
        '1NH' => 'E02004461',
        '1NJ' => 'E02004461',
        '1NL' => 'E02004461',
        '1NN' => 'E02004461',
        '1NP' => 'E02004461',
        '1NQ' => 'E02004462',
        '1NR' => 'E02004461',
        '1NS' => 'E02004461',
        '1NT' => 'E02004461',
        '1NU' => 'E02004461',
        '1NW' => 'E02004461',
        '1NX' => 'E02004461',
        '1NY' => 'E02004461',
        '1NZ' => 'E02004462',
        '1PA' => 'E02004462',
        '1PB' => 'E02004461',
        '1PD' => 'E02004461',
        '1PE' => 'E02004461',
        '1PF' => 'E02004461',
        '1PG' => 'E02004461',
        '1PH' => 'E02004462',
        '1PJ' => 'E02004461',
        '1PL' => 'E02004461',
        '1PN' => 'E02004461',
        '1PP' => 'E02004461',
        '1PQ' => 'E02004462',
        '1PR' => 'E02004461',
        '1PS' => 'E02004461',
        '1PT' => 'E02004461',
        '1PU' => 'E02004461',
        '1PW' => 'E02004461',
        '1PX' => 'E02004461',
        '1PY' => 'E02004461',
        '1PZ' => 'E02004461',
        '1QA' => 'E02004462',
        '1QB' => 'E02004462',
        '1QD' => 'E02004462',
        '1QE' => 'E02004463',
        '1QF' => 'E02004463',
        '1QG' => 'E02004463',
        '1QH' => 'E02004463',
        '1QJ' => 'E02004463',
        '1QL' => 'E02004463',
        '1QN' => 'E02004463',
        '1QP' => 'E02004463',
        '1QQ' => 'E02004463',
        '1QR' => 'E02004463',
        '1QS' => 'E02004462',
        '1QT' => 'E02004463',
        '1QU' => 'E02004463',
        '1QW' => 'E02004463',
        '1QX' => 'E02004463',
        '1QY' => 'E02004463',
        '1QZ' => 'E02004463',
        '1RA' => 'E02004463',
        '1RB' => 'E02004463',
        '1RD' => 'E02004463',
        '1RE' => 'E02004463',
        '1RF' => 'E02004463',
        '1RG' => 'E02004463',
        '1RH' => 'E02004463',
        '1RJ' => 'E02004463',
        '1RL' => 'E02004457',
        '1RN' => 'E02004463',
        '1RP' => 'E02004463',
        '1RQ' => 'E02004463',
        '1RR' => 'E02004463',
        '1RS' => 'E02004463',
        '1RT' => 'E02004463',
        '1RU' => 'E02004463',
        '1RW' => 'E02004462',
        '1RX' => 'E02004463',
        '1RY' => 'E02004463',
        '1RZ' => 'E02004463',
        '1SA' => 'E02004463',
        '1SB' => 'E02004463',
        '1SD' => 'E02004463',
        '1SE' => 'E02004463',
        '1SF' => 'E02004463',
        '1SG' => 'E02004463',
        '1SH' => 'E02004463',
        '1SJ' => 'E02004463',
        '1SL' => 'E02004463',
        '1SN' => 'E02004463',
        '1SP' => 'E02004463',
        '1SQ' => 'E02004463',
        '1SR' => 'E02004462',
        '1SS' => 'E02004463',
        '1ST' => 'E02004458',
        '1SU' => 'E02004463',
        '1SW' => 'E02004461',
        '1SX' => 'E02004462',
        '1SY' => 'E02004462',
        '1SZ' => 'E02004462',
        '1TA' => 'E02004461',
        '1TB' => 'E02004461',
        '1TD' => 'E02004461',
        '1TE' => 'E02004461',
        '1TF' => 'E02004461',
        '1TG' => 'E02004461',
        '1TH' => 'E02004461',
        '1TJ' => 'E02004461',
        '1TL' => 'E02004461',
        '1TN' => 'E02004461',
        '1TP' => 'E02004461',
        '1TQ' => 'E02004461',
        '1TR' => 'E02004461',
        '1TS' => 'E02004461',
        '1TT' => 'E02004461',
        '1TU' => 'E02004461',
        '1TW' => 'E02004461',
        '1TX' => 'E02004461',
        '1TY' => 'E02004461',
        '1TZ' => 'E02004461',
        '1UA' => 'E02004461',
        '1UB' => 'E02004461',
        '1UD' => 'E02004461',
        '1UE' => 'E02004461',
        '1UF' => 'E02004461',
        '1UG' => 'E02004463',
        '1UH' => 'E02004463',
        '1UJ' => 'E02004462',
        '1UL' => 'E02004462',
        '1UN' => 'E02004461',
        '1UP' => 'E02004462',
        '1UQ' => 'E02004463',
        '1UR' => 'E02004461',
        '1US' => 'E02004462',
        '1UT' => 'E02004462',
        '1UU' => 'E02004463',
        '1UW' => 'E02004461',
        '1UX' => 'E02004462',
        '1UY' => 'E02004461',
        '1UZ' => 'E02004462',
        '1WA' => 'E02004462',
        '1WB' => 'E02004462',
        '1WD' => 'E02004462',
        '1WE' => 'E02004462',
        '1WF' => 'E02004462',
        '1WG' => 'E02004462',
        '1WH' => 'E02004462',
        '1WJ' => 'E02004462',
        '1WL' => 'E02004462',
        '1WN' => 'E02004462',
        '1WP' => 'E02004462',
        '1WQ' => 'E02004462',
        '1WR' => 'E02004462',
        '1WS' => 'E02004462',
        '1WT' => 'E02004462',
        '1WU' => 'E02004462',
        '1WW' => 'E02004462',
        '1WX' => 'E02004462',
        '1WY' => 'E02004462',
        '1WZ' => 'E02004462',
        '1XA' => 'E02004462',
        '1XB' => 'E02004462',
        '1XD' => 'E02004462',
        '1XE' => 'E02004462',
        '1XF' => 'E02004462',
        '1XG' => 'E02004462',
        '1XH' => 'E02004462',
        '1XJ' => 'E02004462',
        '1XL' => 'E02004462',
        '1XN' => 'E02004462',
        '1XP' => 'E02004462',
        '1XQ' => 'E02004463',
        '1XR' => 'E02004462',
        '1XS' => 'E02004462',
        '1XT' => 'E02004463',
        '1XU' => 'E02004462',
        '1XW' => 'E02004462',
        '1XX' => 'E02004462',
        '1XY' => 'E02004463',
        '1XZ' => 'E02004463',
        '1YB' => 'E02004462',
        '1YD' => 'E02004462',
        '1YE' => 'E02004462',
        '1YF' => 'E02004462',
        '1YG' => 'E02004462',
        '1YH' => 'E02004462',
        '1YJ' => 'E02004462',
        '1YL' => 'E02004462',
        '1YN' => 'E02004462',
        '1YP' => 'E02004462',
        '1YQ' => 'E02004462',
        '1YR' => 'E02004462',
        '1YS' => 'E02004462',
        '1YT' => 'E02004462',
        '1YU' => 'E02004462',
        '1YW' => 'E02004462',
        '1YX' => 'E02004462',
        '1YZ' => 'E02004462',
        '1ZA' => 'E02004462',
        '1ZB' => 'E02004462',
        '1ZG' => 'E02004462',
        '2AA' => 'E02004462',
        '2AB' => 'E02004462',
        '2AD' => 'E02004462',
        '2AE' => 'E02004462',
        '2AF' => 'E02004462',
        '2AG' => 'E02004462',
        '2AH' => 'E02004462',
        '2AJ' => 'E02004462',
        '2AL' => 'E02004462',
        '2AN' => 'E02004462',
        '2AP' => 'E02004462',
        '2AQ' => 'E02004462',
        '2AR' => 'E02004462',
        '2AS' => 'E02004462',
        '2AT' => 'E02004462',
        '2AU' => 'E02004462',
        '2AW' => 'E02004462',
        '2AX' => 'E02004462',
        '2AY' => 'E02004462',
        '2AZ' => 'E02004462',
        '2BA' => 'E02004462',
        '2BB' => 'E02004462',
        '2BD' => 'E02004462',
        '2BE' => 'E02004462',
        '2BG' => 'E02004462',
        '2BH' => 'E02004462',
        '2BJ' => 'E02004462',
        '2BL' => 'E02004462',
        '2BN' => 'E02004460',
        '2BP' => 'E02004460',
        '2BQ' => 'E02004462',
        '2BS' => 'E02004462',
        '2BT' => 'E02004460',
        '2BU' => 'E02004460',
        '2BW' => 'E02004462',
        '2BX' => 'E02004460',
        '2BY' => 'E02004462',
        '2BZ' => 'E02004460',
        '2DA' => 'E02004460',
        '2DB' => 'E02004462',
        '2DD' => 'E02004462',
        '2DE' => 'E02004460',
        '2DF' => 'E02004462',
        '2DG' => 'E02004462',
        '2DH' => 'E02004462',
        '2DJ' => 'E02004462',
        '2DL' => 'E02004462',
        '2DN' => 'E02004462',
        '2DP' => 'E02004462',
        '2DQ' => 'E02004462',
        '2DR' => 'E02004462',
        '2DS' => 'E02004460',
        '2DT' => 'E02004462',
        '2DU' => 'E02004462',
        '2DW' => 'E02004462',
        '2DX' => 'E02004462',
        '2DY' => 'E02004462',
        '2DZ' => 'E02004462',
        '2EA' => 'E02004462',
        '2EB' => 'E02004462',
        '2ED' => 'E02004462',
        '2EE' => 'E02004462',
        '2EF' => 'E02004462',
        '2EG' => 'E02004462',
        '2EH' => 'E02004460',
        '2EJ' => 'E02004462',
        '2EL' => 'E02004462',
        '2EN' => 'E02004462',
        '2EP' => 'E02004460',
        '2EQ' => 'E02004460',
        '2ER' => 'E02004460',
        '2ES' => 'E02004460',
        '2ET' => 'E02004460',
        '2EU' => 'E02004460',
        '2EW' => 'E02004462',
        '2EX' => 'E02004460',
        '2EY' => 'E02004460',
        '2EZ' => 'E02004460',
        '2FA' => 'E02004462',
        '2FB' => 'E02004462',
        '2FD' => 'E02004462',
        '2FE' => 'E02004462',
        '2FF' => 'E02004462',
        '2FG' => 'E02004460',
        '2FH' => 'E02004460',
        '2FJ' => 'E02004462',
        '2FL' => 'E02004462',
        '2FN' => 'E02004462',
        '2FP' => 'E02004462',
        '2FQ' => 'E02004462',
        '2FR' => 'E02004462',
        '2FS' => 'E02004462',
        '2FT' => 'E02004462',
        '2FU' => 'E02004462',
        '2FW' => 'E02004462',
        '2FX' => 'E02004460',
        '2FY' => 'E02004460',
        '2FZ' => 'E02004460',
        '2GA' => 'E02004462',
        '2GB' => 'E02004462',
        '2GD' => 'E02004462',
        '2GE' => 'E02004462',
        '2GF' => 'E02004462',
        '2GH' => 'E02004460',
        '2GJ' => 'E02004460',
        '2GL' => 'E02004460',
        '2GP' => 'E02004460',
        '2GQ' => 'E02004460',
        '2GR' => 'E02004460',
        '2GS' => 'E02004460',
        '2GT' => 'E02004460',
        '2GU' => 'E02004462',
        '2GW' => 'E02004460',
        '2GX' => 'E02004460',
        '2GY' => 'E02004460',
        '2GZ' => 'E02004462',
        '2HA' => 'E02004460',
        '2HB' => 'E02004460',
        '2HD' => 'E02004460',
        '2HE' => 'E02004460',
        '2HF' => 'E02004460',
        '2HG' => 'E02004460',
        '2HH' => 'E02004460',
        '2HJ' => 'E02004460',
        '2HL' => 'E02004460',
        '2HN' => 'E02004460',
        '2HP' => 'E02004460',
        '2HQ' => 'E02004460',
        '2HR' => 'E02004462',
        '2HS' => 'E02004460',
        '2HT' => 'E02004460',
        '2HU' => 'E02004460',
        '2HW' => 'E02004462',
        '2HX' => 'E02004460',
        '2HY' => 'E02004460',
        '2HZ' => 'E02004460',
        '2JA' => 'E02004460',
        '2JB' => 'E02004460',
        '2JD' => 'E02004460',
        '2JE' => 'E02004460',
        '2JF' => 'E02004460',
        '2JG' => 'E02004460',
        '2JH' => 'E02004460',
        '2JJ' => 'E02004460',
        '2JL' => 'E02004460',
        '2JN' => 'E02004460',
        '2JP' => 'E02004460',
        '2JQ' => 'E02004460',
        '2JR' => 'E02004460',
        '2JS' => 'E02004460',
        '2JT' => 'E02004460',
        '2JU' => 'E02004460',
        '2JW' => 'E02004460',
        '2JX' => 'E02004460',
        '2JY' => 'E02004460',
        '2JZ' => 'E02004462',
        '2LA' => 'E02004460',
        '2LB' => 'E02004460',
        '2LD' => 'E02004460',
        '2LE' => 'E02004460',
        '2LF' => 'E02004460',
        '2LG' => 'E02004460',
        '2LH' => 'E02004460',
        '2LJ' => 'E02004462',
        '2LL' => 'E02004460',
        '2LN' => 'E02004460',
        '2LP' => 'E02004460',
        '2LQ' => 'E02004460',
        '2LR' => 'E02004460',
        '2LS' => 'E02004460',
        '2LT' => 'E02004460',
        '2LU' => 'E02004460',
        '2LW' => 'E02004460',
        '2LX' => 'E02004460',
        '2LY' => 'E02004460',
        '2LZ' => 'E02004460',
        '2NA' => 'E02004460',
        '2NB' => 'E02004460',
        '2ND' => 'E02004460',
        '2NE' => 'E02004460',
        '2NF' => 'E02004460',
        '2NG' => 'E02004460',
        '2NH' => 'E02004462',
        '2NJ' => 'E02004460',
        '2NL' => 'E02004460',
        '2NN' => 'E02004460',
        '2NP' => 'E02004460',
        '2NQ' => 'E02004460',
        '2NR' => 'E02004462',
        '2NS' => 'E02004462',
        '2NT' => 'E02004460',
        '2NU' => 'E02004462',
        '2NW' => 'E02004460',
        '2NX' => 'E02004462',
        '2NY' => 'E02004462',
        '2NZ' => 'E02004460',
        '2PA' => 'E02004460',
        '2PB' => 'E02004460',
        '2PD' => 'E02004460',
        '2PE' => 'E02004460',
        '2PF' => 'E02004462',
        '2PG' => 'E02004460',
        '2PH' => 'E02004460',
        '2PJ' => 'E02004460',
        '2PL' => 'E02004460',
        '2PN' => 'E02004462',
        '2PP' => 'E02004462',
        '2PQ' => 'E02004460',
        '2PR' => 'E02004462',
        '2PS' => 'E02004462',
        '2PT' => 'E02004462',
        '2PU' => 'E02004462',
        '2PW' => 'E02004462',
        '2PX' => 'E02004462',
        '2PY' => 'E02004462',
        '2PZ' => 'E02004460',
        '2QA' => 'E02004460',
        '2QB' => 'E02004460',
        '2QD' => 'E02004460',
        '2QE' => 'E02004460',
        '2QF' => 'E02004460',
        '2QG' => 'E02004460',
        '2QH' => 'E02004460',
        '2QJ' => 'E02004460',
        '2QL' => 'E02004460',
        '2QN' => 'E02004460',
        '2QP' => 'E02004460',
        '2QQ' => 'E02004460',
        '2QR' => 'E02004460',
        '2QS' => 'E02004460',
        '2QT' => 'E02004460',
        '2QU' => 'E02004460',
        '2QW' => 'E02004460',
        '2QX' => 'E02004460',
        '2QY' => 'E02004460',
        '2QZ' => 'E02004460',
        '2RA' => 'E02004460',
        '2RB' => 'E02004460',
        '2RD' => 'E02004460',
        '2RE' => 'E02004460',
        '2RF' => 'E02004460',
        '2RG' => 'E02004460',
        '2RH' => 'E02004460',
        '2RJ' => 'E02004460',
        '2RL' => 'E02004460',
        '2RN' => 'E02004460',
        '2RP' => 'E02004460',
        '2RQ' => 'E02004460',
        '2RR' => 'E02004460',
        '2RS' => 'E02004460',
        '2RT' => 'E02004460',
        '2RU' => 'E02004460',
        '2RW' => 'E02004460',
        '2RX' => 'E02004460',
        '2RY' => 'E02004460',
        '2RZ' => 'E02004460',
        '2SA' => 'E02004460',
        '2SB' => 'E02004460',
        '2SD' => 'E02004460',
        '2SE' => 'E02004460',
        '2SF' => 'E02004462',
        '2SG' => 'E02004462',
        '2SH' => 'E02004462',
        '2SJ' => 'E02004460',
        '2SL' => 'E02004462',
        '2SN' => 'E02004460',
        '2SP' => 'E02004460',
        '2SQ' => 'E02004462',
        '2SR' => 'E02004462',
        '2SS' => 'E02004462',
        '2ST' => 'E02004462',
        '2SU' => 'E02004462',
        '2SW' => 'E02004460',
        '2SX' => 'E02004462',
        '2SY' => 'E02004462',
        '2SZ' => 'E02004462',
        '2TA' => 'E02004460',
        '2TB' => 'E02004460',
        '2TD' => 'E02004460',
        '2TE' => 'E02004460',
        '2TF' => 'E02004462',
        '2TG' => 'E02004462',
        '2TH' => 'E02004462',
        '2TJ' => 'E02004462',
        '2TL' => 'E02004462',
        '2TN' => 'E02004462',
        '2TP' => 'E02004460',
        '2TQ' => 'E02004462',
        '2TR' => 'E02004462',
        '2TS' => 'E02004462',
        '2TT' => 'E02004462',
        '2TU' => 'E02004462',
        '2TW' => 'E02004462',
        '2TX' => 'E02004462',
        '2TY' => 'E02004462',
        '2TZ' => 'E02004462',
        '2UA' => 'E02004462',
        '2UB' => 'E02004462',
        '2UD' => 'E02004462',
        '2UE' => 'E02004462',
        '2UF' => 'E02004462',
        '2UG' => 'E02004462',
        '2UH' => 'E02004462',
        '2UJ' => 'E02004462',
        '2UL' => 'E02004462',
        '2UN' => 'E02004462',
        '2UP' => 'E02004462',
        '2UQ' => 'E02004462',
        '2UR' => 'E02004462',
        '2US' => 'E02004462',
        '2UT' => 'E02004462',
        '2UU' => 'E02004462',
        '2UW' => 'E02004462',
        '2UX' => 'E02004462',
        '2UY' => 'E02004462',
        '2UZ' => 'E02004462',
        '2WA' => 'E02004462',
        '2WB' => 'E02004462',
        '2WD' => 'E02004462',
        '2WE' => 'E02004462',
        '2WF' => 'E02004462',
        '2WG' => 'E02004462',
        '2WH' => 'E02004462',
        '2WJ' => 'E02004462',
        '2WL' => 'E02004462',
        '2WN' => 'E02004462',
        '2WP' => 'E02004462',
        '2WQ' => 'E02004462',
        '2WR' => 'E02004462',
        '2WS' => 'E02004462',
        '2WT' => 'E02004462',
        '2WU' => 'E02004462',
        '2WW' => 'E02004462',
        '2WX' => 'E02004462',
        '2WY' => 'E02004462',
        '2WZ' => 'E02004462',
        '2XA' => 'E02004460',
        '2XB' => 'E02004460',
        '2XD' => 'E02004460',
        '2XE' => 'E02004461',
        '2XF' => 'E02004461',
        '2XG' => 'E02004461',
        '2XH' => 'E02004461',
        '2XJ' => 'E02004461',
        '2XL' => 'E02004461',
        '2XN' => 'E02004461',
        '2XP' => 'E02004461',
        '2XQ' => 'E02004461',
        '2XR' => 'E02004461',
        '2XS' => 'E02004461',
        '2XT' => 'E02004461',
        '2XU' => 'E02004461',
        '2XW' => 'E02004461',
        '2XX' => 'E02004461',
        '2XY' => 'E02004460',
        '2XZ' => 'E02004460',
        '2YD' => 'E02004460',
        '2YE' => 'E02004460',
        '2YF' => 'E02004460',
        '2YG' => 'E02004460',
        '2YH' => 'E02004460',
        '2YJ' => 'E02004460',
        '2YL' => 'E02004460',
        '2YN' => 'E02004460',
        '2YP' => 'E02004460',
        '2YQ' => 'E02004460',
        '2YR' => 'E02004460',
        '2YS' => 'E02004462',
        '2YT' => 'E02004462',
        '2YU' => 'E02004462',
        '2YW' => 'E02004460',
        '2ZA' => 'E02004462',
        '2ZB' => 'E02004462',
        '2ZD' => 'E02004462',
        '2ZE' => 'E02004462',
        '2ZF' => 'E02004460',
        '2ZG' => 'E02004462',
        '2ZJ' => 'E02004460',
        '2ZS' => 'E02004462',
        '2ZW' => 'E02004462',
        '3AA' => 'E02004460',
        '3AB' => 'E02004462',
        '3AD' => 'E02004462',
        '3AE' => 'E02004462',
        '3AF' => 'E02004462',
        '3AG' => 'E02004462',
        '3AH' => 'E02004462',
        '3AJ' => 'E02004460',
        '3AL' => 'E02004462',
        '3AN' => 'E02004462',
        '3AP' => 'E02004462',
        '3AQ' => 'E02004462',
        '3AR' => 'E02004460',
        '3AS' => 'E02004462',
        '3AT' => 'E02004462',
        '3AU' => 'E02004462',
        '3AW' => 'E02004462',
        '3AX' => 'E02004462',
        '3AY' => 'E02004462',
        '3AZ' => 'E02004462',
        '3BA' => 'E02004462',
        '3BB' => 'E02004462',
        '3BD' => 'E02004462',
        '3BE' => 'E02004462',
        '3BG' => 'E02004460',
        '3BH' => 'E02004462',
        '3BJ' => 'E02004462',
        '3BL' => 'E02004462',
        '3BN' => 'E02004462',
        '3BP' => 'E02004462',
        '3BQ' => 'E02004462',
        '3BS' => 'E02004462',
        '3BT' => 'E02004462',
        '3BU' => 'E02004462',
        '3BW' => 'E02004462',
        '3BX' => 'E02004462',
        '3BY' => 'E02004462',
        '3BZ' => 'E02004462',
        '3DA' => 'E02004462',
        '3DB' => 'E02004462',
        '3DE' => 'E02004462',
        '3DF' => 'E02004462',
        '3DG' => 'E02004462',
        '3DH' => 'E02004462',
        '3DJ' => 'E02004462',
        '3DL' => 'E02004462',
        '3DN' => 'E02004462',
        '3DP' => 'E02004462',
        '3DQ' => 'E02004462',
        '3DR' => 'E02004462',
        '3DS' => 'E02004556',
        '3DT' => 'E02004462',
        '3DU' => 'E02004462',
        '3DW' => 'E02004462',
        '3DX' => 'E02004462',
        '3DY' => 'E02004462',
        '3DZ' => 'E02004462',
        '3EA' => 'E02004556',
        '3EB' => 'E02004556',
        '3ED' => 'E02004556',
        '3EE' => 'E02004556',
        '3EF' => 'E02004556',
        '3EG' => 'E02004556',
        '3EH' => 'E02004556',
        '3EJ' => 'E02004556',
        '3EL' => 'E02004556',
        '3EN' => 'E02004556',
        '3EP' => 'E02004556',
        '3EQ' => 'E02004556',
        '3ER' => 'E02004556',
        '3ES' => 'E02004556',
        '3ET' => 'E02004556',
        '3EU' => 'E02004556',
        '3EW' => 'E02004556',
        '3EX' => 'E02004460',
        '3EY' => 'E02004556',
        '3EZ' => 'E02004460',
        '3FA' => 'E02004462',
        '3FB' => 'E02004556',
        '3FD' => 'E02004457',
        '3FE' => 'E02004457',
        '3FF' => 'E02004556',
        '3FG' => 'E02004556',
        '3FH' => 'E02004463',
        '3FJ' => 'E02004556',
        '3FL' => 'E02004457',
        '3FN' => 'E02004457',
        '3FP' => 'E02004556',
        '3FQ' => 'E02004556',
        '3FR' => 'E02004556',
        '3FS' => 'E02004556',
        '3FT' => 'E02004556',
        '3FU' => 'E02004556',
        '3FW' => 'E02004556',
        '3FX' => 'E02004457',
        '3FY' => 'E02004457',
        '3GA' => 'E02004556',
        '3GD' => 'E02004457',
        '3GE' => 'E02004457',
        '3GF' => 'E02004462',
        '3GG' => 'E02004457',
        '3GH' => 'E02004457',
        '3GL' => 'E02004462',
        '3GP' => 'E02004460',
        '3GQ' => 'E02004460',
        '3GS' => 'E02004457',
        '3GX' => 'E02004460',
        '3GY' => 'E02004462',
        '3HA' => 'E02004460',
        '3HB' => 'E02004460',
        '3HD' => 'E02004460',
        '3HE' => 'E02004460',
        '3HF' => 'E02004460',
        '3HG' => 'E02004460',
        '3HH' => 'E02004460',
        '3HJ' => 'E02004460',
        '3HL' => 'E02004462',
        '3HN' => 'E02004460',
        '3HP' => 'E02004462',
        '3HQ' => 'E02004460',
        '3HR' => 'E02004460',
        '3HS' => 'E02004462',
        '3HT' => 'E02004462',
        '3HU' => 'E02004462',
        '3HW' => 'E02004556',
        '3HX' => 'E02004463',
        '3HY' => 'E02004463',
        '3HZ' => 'E02004463',
        '3JA' => 'E02004556',
        '3JB' => 'E02004556',
        '3JD' => 'E02004556',
        '3JE' => 'E02004556',
        '3JF' => 'E02004556',
        '3JG' => 'E02004556',
        '3JH' => 'E02004556',
        '3JJ' => 'E02004556',
        '3JL' => 'E02004556',
        '3JN' => 'E02004556',
        '3JP' => 'E02004556',
        '3JQ' => 'E02004556',
        '3JR' => 'E02004556',
        '3JS' => 'E02004556',
        '3JT' => 'E02004556',
        '3JU' => 'E02004556',
        '3JW' => 'E02004556',
        '3JX' => 'E02004556',
        '3JY' => 'E02004556',
        '3JZ' => 'E02004556',
        '3LA' => 'E02004556',
        '3LB' => 'E02004556',
        '3LD' => 'E02004556',
        '3LE' => 'E02004556',
        '3LF' => 'E02004556',
        '3LG' => 'E02004556',
        '3LH' => 'E02004463',
        '3LJ' => 'E02004463',
        '3LL' => 'E02004556',
        '3LN' => 'E02004556',
        '3LP' => 'E02004462',
        '3LQ' => 'E02004556',
        '3LR' => 'E02004556',
        '3LS' => 'E02004556',
        '3LT' => 'E02004556',
        '3LU' => 'E02004556',
        '3LW' => 'E02004556',
        '3LX' => 'E02004556',
        '3LY' => 'E02004556',
        '3LZ' => 'E02004556',
        '3NA' => 'E02004556',
        '3NB' => 'E02004556',
        '3ND' => 'E02004556',
        '3NE' => 'E02004556',
        '3NF' => 'E02004556',
        '3NG' => 'E02004556',
        '3NH' => 'E02004556',
        '3NJ' => 'E02004556',
        '3NL' => 'E02004556',
        '3NN' => 'E02004556',
        '3NP' => 'E02004556',
        '3NQ' => 'E02004556',
        '3NR' => 'E02004556',
        '3NS' => 'E02004556',
        '3NT' => 'E02004556',
        '3NU' => 'E02004556',
        '3NW' => 'E02004556',
        '3NX' => 'E02004556',
        '3NY' => 'E02004556',
        '3NZ' => 'E02004556',
        '3PA' => 'E02004556',
        '3PB' => 'E02004556',
        '3PD' => 'E02004460',
        '3PE' => 'E02004460',
        '3PF' => 'E02004460',
        '3PG' => 'E02004460',
        '3PH' => 'E02004460',
        '3PJ' => 'E02004460',
        '3PL' => 'E02004460',
        '3PN' => 'E02004457',
        '3PP' => 'E02004457',
        '3PQ' => 'E02004460',
        '3PR' => 'E02004460',
        '3PS' => 'E02004460',
        '3PT' => 'E02004460',
        '3PU' => 'E02004460',
        '3PW' => 'E02004457',
        '3PX' => 'E02004457',
        '3PY' => 'E02004460',
        '3PZ' => 'E02004460',
        '3QA' => 'E02004457',
        '3QB' => 'E02004457',
        '3QD' => 'E02004460',
        '3QE' => 'E02004457',
        '3QF' => 'E02004457',
        '3QG' => 'E02004457',
        '3QH' => 'E02004457',
        '3QJ' => 'E02004457',
        '3QL' => 'E02004457',
        '3QN' => 'E02004457',
        '3QP' => 'E02004457',
        '3QQ' => 'E02004457',
        '3QR' => 'E02004457',
        '3QS' => 'E02004457',
        '3QT' => 'E02004457',
        '3QU' => 'E02004457',
        '3QW' => 'E02004457',
        '3QX' => 'E02004457',
        '3QY' => 'E02004457',
        '3QZ' => 'E02004457',
        '3RA' => 'E02004457',
        '3RB' => 'E02004457',
        '3RD' => 'E02004457',
        '3RE' => 'E02004457',
        '3RF' => 'E02004457',
        '3RG' => 'E02004457',
        '3RH' => 'E02004457',
        '3RJ' => 'E02004457',
        '3RL' => 'E02004457',
        '3RN' => 'E02004457',
        '3RP' => 'E02004457',
        '3RQ' => 'E02004457',
        '3RR' => 'E02004457',
        '3RS' => 'E02004457',
        '3RT' => 'E02004457',
        '3RU' => 'E02004457',
        '3RW' => 'E02004457',
        '3RX' => 'E02004457',
        '3RY' => 'E02004457',
        '3RZ' => 'E02004457',
        '3SA' => 'E02004460',
        '3SB' => 'E02004460',
        '3SD' => 'E02004457',
        '3SE' => 'E02004460',
        '3SF' => 'E02004457',
        '3SG' => 'E02004457',
        '3SH' => 'E02004457',
        '3SJ' => 'E02004457',
        '3SL' => 'E02004460',
        '3SN' => 'E02004460',
        '3SP' => 'E02004460',
        '3SQ' => 'E02004457',
        '3SR' => 'E02004457',
        '3SS' => 'E02004460',
        '3ST' => 'E02004460',
        '3SU' => 'E02004460',
        '3SW' => 'E02004460',
        '3SX' => 'E02004462',
        '3SY' => 'E02004460',
        '3SZ' => 'E02004462',
        '3TA' => 'E02004462',
        '3TB' => 'E02004460',
        '3TD' => 'E02004462',
        '3TE' => 'E02004462',
        '3TF' => 'E02004462',
        '3TG' => 'E02004460',
        '3TH' => 'E02004462',
        '3TJ' => 'E02004460',
        '3TL' => 'E02004556',
        '3TN' => 'E02004462',
        '3TP' => 'E02004460',
        '3TQ' => 'E02004462',
        '3TR' => 'E02004462',
        '3TS' => 'E02004462',
        '3TT' => 'E02004462',
        '3TU' => 'E02004462',
        '3TW' => 'E02004462',
        '3TX' => 'E02004462',
        '3TY' => 'E02004462',
        '3TZ' => 'E02004462',
        '3UA' => 'E02004462',
        '3UB' => 'E02004462',
        '3UD' => 'E02004462',
        '3UE' => 'E02004462',
        '3UF' => 'E02004462',
        '3UG' => 'E02004462',
        '3UH' => 'E02004462',
        '3UJ' => 'E02004462',
        '3UL' => 'E02004460',
        '3UN' => 'E02004462',
        '3UP' => 'E02004462',
        '3UQ' => 'E02004462',
        '3UR' => 'E02004462',
        '3US' => 'E02004462',
        '3UT' => 'E02004462',
        '3UU' => 'E02004462',
        '3UW' => 'E02004462',
        '3UX' => 'E02004462',
        '3UY' => 'E02004462',
        '3UZ' => 'E02004462',
        '3WA' => 'E02004462',
        '3WB' => 'E02004457',
        '3WD' => 'E02004462',
        '3WE' => 'E02004457',
        '3WJ' => 'E02004462',
        '3WN' => 'E02004462',
        '3WP' => 'E02004462',
        '3WQ' => 'E02004462',
        '3WR' => 'E02004462',
        '3WS' => 'E02004462',
        '3WT' => 'E02004462',
        '3WU' => 'E02004462',
        '3WW' => 'E02004462',
        '3WX' => 'E02004462',
        '3WY' => 'E02004462',
        '3WZ' => 'E02004462',
        '3XA' => 'E02004556',
        '3XB' => 'E02004556',
        '3XD' => 'E02004462',
        '3XE' => 'E02004556',
        '3XF' => 'E02004460',
        '3XG' => 'E02004556',
        '3XH' => 'E02004556',
        '3XJ' => 'E02004462',
        '3XL' => 'E02004561',
        '3XN' => 'E02004457',
        '3XP' => 'E02004457',
        '3XQ' => 'E02004556',
        '3XR' => 'E02004457',
        '3XT' => 'E02004462',
        '3XU' => 'E02004462',
        '3XW' => 'E02004457',
        '3XX' => 'E02004556',
        '3XZ' => 'E02004462',
        '3YB' => 'E02004462',
        '3YD' => 'E02004462',
        '3YE' => 'E02004462',
        '3YF' => 'E02004462',
        '3YG' => 'E02004462',
        '3YH' => 'E02004462',
        '3YJ' => 'E02004462',
        '3YL' => 'E02004460',
        '3YN' => 'E02004462',
        '3YP' => 'E02004462',
        '3YQ' => 'E02004462',
        '3YR' => 'E02004462',
        '3YS' => 'E02004462',
        '3YT' => 'E02004462',
        '3YU' => 'E02004462',
        '3YW' => 'E02004462',
        '3YX' => 'E02004462',
        '3YY' => 'E02004462',
        '3YZ' => 'E02004462',
        '9AE' => 'E02004462',
        '9AG' => 'E02004462',
        '9AH' => 'E02004462',
        '9AN' => 'E02004462',
        '9AW' => 'E02004462',
        '9AX' => 'E02004462',
        '9AY' => 'E02004462',
        '9AZ' => 'E02004462',
        '9BA' => 'E02004462',
        '9BB' => 'E02004462',
        '9BD' => 'E02004462',
        '9BE' => 'E02004462',
        '9BF' => 'E02004462',
        '9BG' => 'E02004462',
        '9BH' => 'E02004462',
        '9BJ' => 'E02004462',
        '9BL' => 'E02004462',
        '9BN' => 'E02004462',
        '9BP' => 'E02004462',
        '9BQ' => 'E02004462',
        '9BR' => 'E02004462',
        '9BT' => 'E02004462',
        '9BU' => 'E02004462',
        '9BW' => 'E02004462',
        '9BX' => 'E02004462',
        '9BY' => 'E02004462',
        '9BZ' => 'E02004462',
        '9DA' => 'E02004462',
        '9DB' => 'E02004462',
        '9DD' => 'E02004462',
        '9DE' => 'E02004462',
        '9DF' => 'E02004462',
        '9DG' => 'E02004462',
        '9DH' => 'E02004462',
        '9DJ' => 'E02004462',
        '9DL' => 'E02004462',
        '9DN' => 'E02004462',
        '9DP' => 'E02004462',
        '9DQ' => 'E02004462',
        '9DR' => 'E02004462',
        '9DS' => 'E02004462',
        '9DT' => 'E02004462',
        '9DU' => 'E02004462',
        '9DW' => 'E02004462',
        '9DX' => 'E02004462',
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
