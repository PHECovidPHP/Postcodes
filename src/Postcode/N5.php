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
final class N5
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02000566',
        '1AB' => 'E02000566',
        '1AD' => 'E02000566',
        '1AE' => 'E02000566',
        '1AF' => 'E02000566',
        '1AG' => 'E02000562',
        '1AH' => 'E02000566',
        '1AJ' => 'E02000566',
        '1AL' => 'E02000566',
        '1AN' => 'E02000564',
        '1AP' => 'E02000562',
        '1AQ' => 'E02000566',
        '1AR' => 'E02000566',
        '1AS' => 'E02000562',
        '1AT' => 'E02000559',
        '1AU' => 'E02000559',
        '1AW' => 'E02000566',
        '1AX' => 'E02000559',
        '1AY' => 'E02000566',
        '1AZ' => 'E02000559',
        '1BA' => 'E02000566',
        '1BB' => 'E02000562',
        '1BD' => 'E02000562',
        '1BE' => 'E02000564',
        '1BF' => 'E02000564',
        '1BG' => 'E02000566',
        '1BH' => 'E02000562',
        '1BJ' => 'E02000562',
        '1BL' => 'E02000562',
        '1BN' => 'E02000562',
        '1BP' => 'E02000559',
        '1BQ' => 'E02000566',
        '1BS' => 'E02000559',
        '1BT' => 'E02000559',
        '1BU' => 'E02000564',
        '1BX' => 'E02000559',
        '1BY' => 'E02000562',
        '1BZ' => 'E02000559',
        '1DA' => 'E02000564',
        '1DB' => 'E02000559',
        '1DD' => 'E02000559',
        '1DE' => 'E02000559',
        '1DF' => 'E02000562',
        '1DG' => 'E02000564',
        '1DH' => 'E02000564',
        '1DJ' => 'E02000559',
        '1DL' => 'E02000559',
        '1DN' => 'E02000559',
        '1DP' => 'E02000559',
        '1DQ' => 'E02000562',
        '1DR' => 'E02000559',
        '1DS' => 'E02000564',
        '1DT' => 'E02000564',
        '1DU' => 'E02000564',
        '1DW' => 'E02000564',
        '1DX' => 'E02000564',
        '1DY' => 'E02000559',
        '1DZ' => 'E02000559',
        '1EA' => 'E02000559',
        '1EB' => 'E02000559',
        '1ED' => 'E02000559',
        '1EE' => 'E02000559',
        '1EF' => 'E02000559',
        '1EG' => 'E02000559',
        '1EH' => 'E02000559',
        '1EJ' => 'E02000559',
        '1EL' => 'E02000559',
        '1EN' => 'E02000559',
        '1EP' => 'E02000566',
        '1EQ' => 'E02000559',
        '1ER' => 'E02000566',
        '1ES' => 'E02000559',
        '1ET' => 'E02000559',
        '1EU' => 'E02000559',
        '1EW' => 'E02000566',
        '1EX' => 'E02000559',
        '1EY' => 'E02000559',
        '1EZ' => 'E02000566',
        '1FB' => 'E02000559',
        '1FD' => 'E02000559',
        '1FE' => 'E02000559',
        '1FF' => 'E02000559',
        '1FG' => 'E02000559',
        '1FH' => 'E02000559',
        '1FJ' => 'E02000559',
        '1FL' => 'E02000559',
        '1FN' => 'E02000559',
        '1FP' => 'E02000559',
        '1FQ' => 'E02000566',
        '1FR' => 'E02000562',
        '1FS' => 'E02000559',
        '1FT' => 'E02000566',
        '1FW' => 'E02000562',
        '1FX' => 'E02000559',
        '1FY' => 'E02000566',
        '1FZ' => 'E02000566',
        '1GA' => 'E02000564',
        '1GB' => 'E02000564',
        '1GD' => 'E02000564',
        '1GE' => 'E02000564',
        '1GF' => 'E02000562',
        '1GG' => 'E02000559',
        '1GU' => 'E02000566',
        '1GW' => 'E02000566',
        '1GX' => 'E02000566',
        '1GY' => 'E02000566',
        '1GZ' => 'E02000566',
        '1HA' => 'E02000559',
        '1HB' => 'E02000566',
        '1HD' => 'E02000562',
        '1HH' => 'E02000566',
        '1HJ' => 'E02000562',
        '1HL' => 'E02000562',
        '1HN' => 'E02000562',
        '1HP' => 'E02000562',
        '1HQ' => 'E02000566',
        '1HR' => 'E02000562',
        '1HS' => 'E02000566',
        '1HT' => 'E02000562',
        '1HU' => 'E02000566',
        '1HX' => 'E02000566',
        '1HY' => 'E02000559',
        '1HZ' => 'E02000566',
        '1JA' => 'E02000566',
        '1JB' => 'E02000566',
        '1JD' => 'E02000566',
        '1JE' => 'E02000566',
        '1JF' => 'E02000566',
        '1JG' => 'E02000566',
        '1JH' => 'E02000566',
        '1JJ' => 'E02000566',
        '1JL' => 'E02000566',
        '1JN' => 'E02000566',
        '1JP' => 'E02000566',
        '1JQ' => 'E02000566',
        '1JR' => 'E02000566',
        '1JS' => 'E02000566',
        '1JT' => 'E02000566',
        '1JU' => 'E02000566',
        '1JX' => 'E02000566',
        '1JY' => 'E02000566',
        '1LA' => 'E02000566',
        '1LB' => 'E02000564',
        '1LE' => 'E02000559',
        '1LF' => 'E02000559',
        '1LG' => 'E02000559',
        '1LH' => 'E02000559',
        '1LJ' => 'E02000559',
        '1LL' => 'E02000559',
        '1LN' => 'E02000559',
        '1LP' => 'E02000559',
        '1LQ' => 'E02000559',
        '1LR' => 'E02000559',
        '1LS' => 'E02000559',
        '1LT' => 'E02000559',
        '1LU' => 'E02000559',
        '1LW' => 'E02000559',
        '1LX' => 'E02000559',
        '1LY' => 'E02000564',
        '1LZ' => 'E02000564',
        '1NA' => 'E02000564',
        '1NB' => 'E02000564',
        '1ND' => 'E02000566',
        '1NE' => 'E02000566',
        '1NF' => 'E02000559',
        '1NG' => 'E02000566',
        '1NH' => 'E02000566',
        '1NJ' => 'E02000566',
        '1NL' => 'E02000566',
        '1NN' => 'E02000564',
        '1NQ' => 'E02000566',
        '1NR' => 'E02000564',
        '1NS' => 'E02000566',
        '1NT' => 'E02000564',
        '1NU' => 'E02000566',
        '1NW' => 'E02000566',
        '1NY' => 'E02000566',
        '1PA' => 'E02000566',
        '1PB' => 'E02000566',
        '1PD' => 'E02000566',
        '1PE' => 'E02000566',
        '1PF' => 'E02000566',
        '1PG' => 'E02000566',
        '1PH' => 'E02000559',
        '1PJ' => 'E02000566',
        '1PL' => 'E02000566',
        '1PN' => 'E02000566',
        '1PP' => 'E02000566',
        '1PQ' => 'E02000566',
        '1PR' => 'E02000566',
        '1PS' => 'E02000566',
        '1PT' => 'E02000566',
        '1PU' => 'E02000566',
        '1PW' => 'E02000566',
        '1PX' => 'E02000566',
        '1PY' => 'E02000566',
        '1PZ' => 'E02000566',
        '1QA' => 'E02000566',
        '1QB' => 'E02000566',
        '1QD' => 'E02000566',
        '1QE' => 'E02000566',
        '1QF' => 'E02000566',
        '1QG' => 'E02000566',
        '1QJ' => 'E02000566',
        '1QL' => 'E02000566',
        '1QN' => 'E02000562',
        '1QP' => 'E02000566',
        '1QQ' => 'E02000566',
        '1QR' => 'E02000566',
        '1QS' => 'E02000566',
        '1QT' => 'E02000566',
        '1QU' => 'E02000566',
        '1QX' => 'E02000566',
        '1QY' => 'E02000566',
        '1QZ' => 'E02000566',
        '1RA' => 'E02000566',
        '1RB' => 'E02000566',
        '1RD' => 'E02000566',
        '1RE' => 'E02000566',
        '1RF' => 'E02000566',
        '1RG' => 'E02000566',
        '1RH' => 'E02000566',
        '1RJ' => 'E02000566',
        '1RL' => 'E02000566',
        '1RN' => 'E02000566',
        '1RP' => 'E02000566',
        '1RQ' => 'E02000566',
        '1RR' => 'E02000566',
        '1RS' => 'E02000566',
        '1RT' => 'E02000566',
        '1RU' => 'E02000566',
        '1RW' => 'E02000566',
        '1RX' => 'E02000566',
        '1RY' => 'E02000562',
        '1RZ' => 'E02000566',
        '1SA' => 'E02000562',
        '1SB' => 'E02000566',
        '1SD' => 'E02000562',
        '1SE' => 'E02000566',
        '1SF' => 'E02000562',
        '1SG' => 'E02000562',
        '1SH' => 'E02000562',
        '1SJ' => 'E02000562',
        '1SN' => 'E02000562',
        '1SP' => 'E02000566',
        '1SQ' => 'E02000566',
        '1SR' => 'E02000566',
        '1SS' => 'E02000566',
        '1ST' => 'E02000566',
        '1SU' => 'E02000566',
        '1SW' => 'E02000566',
        '1SX' => 'E02000566',
        '1SY' => 'E02000566',
        '1SZ' => 'E02000566',
        '1TA' => 'E02000559',
        '1TB' => 'E02000559',
        '1TD' => 'E02000566',
        '1TE' => 'E02000559',
        '1TF' => 'E02000566',
        '1TG' => 'E02000566',
        '1TH' => 'E02000562',
        '1TJ' => 'E02000562',
        '1TL' => 'E02000562',
        '1TN' => 'E02000562',
        '1TP' => 'E02000566',
        '1TQ' => 'E02000562',
        '1TR' => 'E02000559',
        '1TS' => 'E02000559',
        '1TT' => 'E02000562',
        '1TU' => 'E02000562',
        '1TW' => 'E02000566',
        '1TX' => 'E02000562',
        '1TY' => 'E02000562',
        '1TZ' => 'E02000562',
        '1UA' => 'E02000562',
        '1UB' => 'E02000559',
        '1UD' => 'E02000562',
        '1UE' => 'E02000559',
        '1UF' => 'E02000559',
        '1UG' => 'E02000566',
        '1UH' => 'E02000566',
        '1UJ' => 'E02000559',
        '1UL' => 'E02000566',
        '1UN' => 'E02000566',
        '1UP' => 'E02000566',
        '1UQ' => 'E02000566',
        '1UR' => 'E02000566',
        '1US' => 'E02000566',
        '1UT' => 'E02000566',
        '1UU' => 'E02000566',
        '1UW' => 'E02000566',
        '1UX' => 'E02000566',
        '1UY' => 'E02000566',
        '1UZ' => 'E02000566',
        '1WA' => 'E02000566',
        '1WB' => 'E02000566',
        '1WD' => 'E02000566',
        '1WE' => 'E02000566',
        '1WF' => 'E02000566',
        '1WG' => 'E02000566',
        '1WH' => 'E02000566',
        '1WJ' => 'E02000566',
        '1WL' => 'E02000566',
        '1WN' => 'E02000566',
        '1WP' => 'E02000566',
        '1WQ' => 'E02000566',
        '1WR' => 'E02000566',
        '1WS' => 'E02000566',
        '1WT' => 'E02000566',
        '1WU' => 'E02000566',
        '1WW' => 'E02000566',
        '1WX' => 'E02000566',
        '1WY' => 'E02000566',
        '1WZ' => 'E02000566',
        '1XA' => 'E02000566',
        '1XB' => 'E02000566',
        '1XD' => 'E02000566',
        '1XE' => 'E02000566',
        '1XF' => 'E02000566',
        '1XG' => 'E02000566',
        '1XH' => 'E02000566',
        '1XJ' => 'E02000566',
        '1XL' => 'E02000566',
        '1XN' => 'E02000566',
        '1XP' => 'E02000566',
        '1XQ' => 'E02000566',
        '1XR' => 'E02000566',
        '1XS' => 'E02000566',
        '1XT' => 'E02000566',
        '1XU' => 'E02000566',
        '1XW' => 'E02000566',
        '1XY' => 'E02000566',
        '1XZ' => 'E02000566',
        '1YA' => 'E02000566',
        '1YB' => 'E02000566',
        '1YD' => 'E02000566',
        '1YE' => 'E02000566',
        '1YF' => 'E02000566',
        '1YG' => 'E02000566',
        '1YH' => 'E02000566',
        '1YJ' => 'E02000566',
        '1YL' => 'E02000566',
        '1YN' => 'E02000566',
        '1YP' => 'E02000566',
        '1YQ' => 'E02000566',
        '1YR' => 'E02000566',
        '1YS' => 'E02000566',
        '1YT' => 'E02000566',
        '1YU' => 'E02000566',
        '1YW' => 'E02000566',
        '1YX' => 'E02000566',
        '1YY' => 'E02000566',
        '1YZ' => 'E02000566',
        '1ZA' => 'E02000566',
        '1ZB' => 'E02000566',
        '1ZD' => 'E02000566',
        '1ZE' => 'E02000566',
        '1ZF' => 'E02000566',
        '1ZG' => 'E02000566',
        '1ZH' => 'E02000566',
        '1ZJ' => 'E02000566',
        '1ZL' => 'E02000566',
        '1ZN' => 'E02000566',
        '1ZP' => 'E02000566',
        '1ZQ' => 'E02000566',
        '1ZR' => 'E02000566',
        '1ZS' => 'E02000566',
        '1ZT' => 'E02000566',
        '1ZU' => 'E02000566',
        '1ZW' => 'E02000566',
        '1ZY' => 'E02000566',
        '2AA' => 'E02000562',
        '2AB' => 'E02000562',
        '2AD' => 'E02000562',
        '2AE' => 'E02000562',
        '2AF' => 'E02000562',
        '2AG' => 'E02000562',
        '2AH' => 'E02000562',
        '2AJ' => 'E02000562',
        '2AL' => 'E02000562',
        '2AN' => 'E02000562',
        '2AP' => 'E02000562',
        '2AQ' => 'E02000562',
        '2AR' => 'E02000562',
        '2AS' => 'E02000562',
        '2AT' => 'E02000562',
        '2AU' => 'E02000562',
        '2AW' => 'E02000562',
        '2AX' => 'E02000562',
        '2AY' => 'E02000562',
        '2AZ' => 'E02000562',
        '2BA' => 'E02000562',
        '2BB' => 'E02000562',
        '2BD' => 'E02000562',
        '2BE' => 'E02000562',
        '2BF' => 'E02000562',
        '2BG' => 'E02000562',
        '2BH' => 'E02000562',
        '2BJ' => 'E02000562',
        '2BL' => 'E02000562',
        '2BN' => 'E02000562',
        '2BP' => 'E02000562',
        '2BQ' => 'E02000562',
        '2BS' => 'E02000562',
        '2BT' => 'E02000562',
        '2BU' => 'E02000562',
        '2BW' => 'E02000562',
        '2BX' => 'E02000566',
        '2BY' => 'E02000565',
        '2BZ' => 'E02000565',
        '2DA' => 'E02000567',
        '2DB' => 'E02000567',
        '2DD' => 'E02000565',
        '2DE' => 'E02000565',
        '2DF' => 'E02000565',
        '2DG' => 'E02000565',
        '2DH' => 'E02000565',
        '2DJ' => 'E02000565',
        '2DL' => 'E02000562',
        '2DN' => 'E02000565',
        '2DP' => 'E02000565',
        '2DQ' => 'E02000562',
        '2DR' => 'E02000562',
        '2DS' => 'E02000562',
        '2DT' => 'E02000567',
        '2DU' => 'E02000562',
        '2DW' => 'E02000562',
        '2DX' => 'E02000565',
        '2DY' => 'E02000565',
        '2DZ' => 'E02000565',
        '2EA' => 'E02000562',
        '2EB' => 'E02000566',
        '2ED' => 'E02000562',
        '2EE' => 'E02000562',
        '2EF' => 'E02000562',
        '2EG' => 'E02000562',
        '2EH' => 'E02000562',
        '2EJ' => 'E02000562',
        '2EL' => 'E02000562',
        '2EN' => 'E02000565',
        '2EP' => 'E02000562',
        '2EQ' => 'E02000562',
        '2ER' => 'E02000562',
        '2ES' => 'E02000565',
        '2ET' => 'E02000565',
        '2EU' => 'E02000565',
        '2EW' => 'E02000562',
        '2EX' => 'E02000565',
        '2EY' => 'E02000565',
        '2EZ' => 'E02000562',
        '2GJ' => 'E02000566',
        '2GL' => 'E02000566',
        '2GN' => 'E02000566',
        '2GP' => 'E02000566',
        '2GQ' => 'E02000566',
        '2GR' => 'E02000565',
        '2GS' => 'E02000566',
        '2GT' => 'E02000562',
        '2GU' => 'E02000566',
        '2GW' => 'E02000566',
        '2GX' => 'E02000566',
        '2GY' => 'E02000566',
        '2GZ' => 'E02000566',
        '2HA' => 'E02000562',
        '2HB' => 'E02000562',
        '2HD' => 'E02000562',
        '2HE' => 'E02000562',
        '2HF' => 'E02000562',
        '2HG' => 'E02000562',
        '2HH' => 'E02000566',
        '2HJ' => 'E02000562',
        '2HN' => 'E02000565',
        '2HP' => 'E02000565',
        '2HQ' => 'E02000566',
        '2HR' => 'E02000567',
        '2HS' => 'E02000567',
        '2HT' => 'E02000567',
        '2HU' => 'E02000567',
        '2HW' => 'E02000565',
        '2HX' => 'E02000567',
        '2HY' => 'E02000567',
        '2HZ' => 'E02000567',
        '2JA' => 'E02000567',
        '2JB' => 'E02000567',
        '2JD' => 'E02000567',
        '2JE' => 'E02000567',
        '2JG' => 'E02000565',
        '2JH' => 'E02000567',
        '2JJ' => 'E02000567',
        '2JL' => 'E02000567',
        '2JN' => 'E02000567',
        '2JP' => 'E02000559',
        '2JQ' => 'E02000567',
        '2JR' => 'E02000559',
        '2JS' => 'E02000559',
        '2JT' => 'E02000559',
        '2JU' => 'E02000559',
        '2JW' => 'E02000567',
        '2JX' => 'E02000559',
        '2JZ' => 'E02000559',
        '2LA' => 'E02000351',
        '2LB' => 'E02000562',
        '2LD' => 'E02000562',
        '2LE' => 'E02000562',
        '2LF' => 'E02000562',
        '2LG' => 'E02000562',
        '2LH' => 'E02000562',
        '2LJ' => 'E02000562',
        '2LL' => 'E02000559',
        '2LN' => 'E02000351',
        '2LP' => 'E02000566',
        '2LQ' => 'E02000562',
        '2LR' => 'E02000559',
        '2LS' => 'E02000351',
        '2LT' => 'E02000351',
        '2LU' => 'E02000559',
        '2LW' => 'E02000562',
        '2LX' => 'E02000559',
        '2LY' => 'E02000559',
        '2LZ' => 'E02000559',
        '2NA' => 'E02000567',
        '2NB' => 'E02000562',
        '2ND' => 'E02000567',
        '2NE' => 'E02000565',
        '2NF' => 'E02000562',
        '2NG' => 'E02000567',
        '2NH' => 'E02000567',
        '2NJ' => 'E02000567',
        '2NL' => 'E02000567',
        '2NN' => 'E02000567',
        '2NP' => 'E02000567',
        '2NQ' => 'E02000567',
        '2NR' => 'E02000567',
        '2NS' => 'E02000565',
        '2NT' => 'E02000565',
        '2NU' => 'E02000565',
        '2NX' => 'E02000567',
        '2NY' => 'E02000567',
        '2PA' => 'E02000562',
        '2PB' => 'E02000562',
        '2PD' => 'E02000562',
        '2PE' => 'E02000562',
        '2PF' => 'E02000562',
        '2PG' => 'E02000562',
        '2PH' => 'E02000562',
        '2PJ' => 'E02000562',
        '2PL' => 'E02000562',
        '2PN' => 'E02000562',
        '2PP' => 'E02000562',
        '2PQ' => 'E02000562',
        '2PR' => 'E02000562',
        '2PS' => 'E02000566',
        '2PT' => 'E02000562',
        '2PU' => 'E02000562',
        '2PW' => 'E02000562',
        '2PX' => 'E02000562',
        '2PY' => 'E02000562',
        '2PZ' => 'E02000562',
        '2QA' => 'E02000562',
        '2QB' => 'E02000562',
        '2QD' => 'E02000562',
        '2QE' => 'E02000562',
        '2QF' => 'E02000562',
        '2QG' => 'E02000562',
        '2QH' => 'E02000562',
        '2QJ' => 'E02000562',
        '2QL' => 'E02000562',
        '2QN' => 'E02000562',
        '2QP' => 'E02000566',
        '2QQ' => 'E02000566',
        '2QR' => 'E02000559',
        '2QS' => 'E02000562',
        '2QT' => 'E02000565',
        '2QU' => 'E02000565',
        '2QW' => 'E02000562',
        '2QX' => 'E02000565',
        '2QY' => 'E02000566',
        '2QZ' => 'E02000565',
        '2RA' => 'E02000565',
        '2RB' => 'E02000565',
        '2RD' => 'E02000565',
        '2RE' => 'E02000565',
        '2RF' => 'E02000566',
        '2RG' => 'E02000565',
        '2RH' => 'E02000565',
        '2RJ' => 'E02000565',
        '2RL' => 'E02000566',
        '2RN' => 'E02000562',
        '2RP' => 'E02000566',
        '2RQ' => 'E02000562',
        '2RR' => 'E02000566',
        '2RS' => 'E02000562',
        '2RT' => 'E02000356',
        '2RU' => 'E02000565',
        '2RW' => 'E02000565',
        '2RX' => 'E02000356',
        '2RY' => 'E02000565',
        '2RZ' => 'E02000565',
        '2SA' => 'E02000566',
        '2SB' => 'E02000565',
        '2SD' => 'E02000565',
        '2SE' => 'E02000565',
        '2SF' => 'E02000567',
        '2SG' => 'E02000567',
        '2SH' => 'E02000565',
        '2SJ' => 'E02000565',
        '2SL' => 'E02000565',
        '2SN' => 'E02000565',
        '2SP' => 'E02000559',
        '2SQ' => 'E02000567',
        '2SR' => 'E02000562',
        '2SS' => 'E02000559',
        '2ST' => 'E02000559',
        '2SU' => 'E02000559',
        '2SW' => 'E02000562',
        '2SX' => 'E02000562',
        '2SY' => 'E02000566',
        '2SZ' => 'E02000562',
        '2TA' => 'E02000562',
        '2TB' => 'E02000562',
        '2TD' => 'E02000562',
        '2TE' => 'E02000559',
        '2TF' => 'E02000562',
        '2TG' => 'E02000562',
        '2TH' => 'E02000562',
        '2TJ' => 'E02000562',
        '2TL' => 'E02000562',
        '2TN' => 'E02000562',
        '2TP' => 'E02000562',
        '2TQ' => 'E02000566',
        '2TR' => 'E02000566',
        '2TS' => 'E02000566',
        '2TT' => 'E02000559',
        '2TU' => 'E02000562',
        '2TW' => 'E02000566',
        '2TX' => 'E02000562',
        '2TY' => 'E02000566',
        '2TZ' => 'E02000562',
        '2UA' => 'E02000562',
        '2UB' => 'E02000562',
        '2UD' => 'E02000562',
        '2UE' => 'E02000562',
        '2UF' => 'E02000562',
        '2UG' => 'E02000562',
        '2UH' => 'E02000562',
        '2UJ' => 'E02000566',
        '2UL' => 'E02000562',
        '2UN' => 'E02000566',
        '2UP' => 'E02000562',
        '2UQ' => 'E02000566',
        '2UR' => 'E02000559',
        '2US' => 'E02000566',
        '2UT' => 'E02000562',
        '2UU' => 'E02000562',
        '2UW' => 'E02000566',
        '2UX' => 'E02000559',
        '2UY' => 'E02000566',
        '2UZ' => 'E02000559',
        '2WA' => 'E02000566',
        '2WB' => 'E02000566',
        '2WD' => 'E02000566',
        '2WE' => 'E02000566',
        '2WF' => 'E02000566',
        '2WG' => 'E02000566',
        '2WH' => 'E02000566',
        '2WJ' => 'E02000566',
        '2WL' => 'E02000566',
        '2WN' => 'E02000566',
        '2WP' => 'E02000566',
        '2WQ' => 'E02000566',
        '2WR' => 'E02000566',
        '2WS' => 'E02000566',
        '2WT' => 'E02000566',
        '2WU' => 'E02000566',
        '2WW' => 'E02000566',
        '2WX' => 'E02000566',
        '2WY' => 'E02000566',
        '2WZ' => 'E02000566',
        '2XA' => 'E02000562',
        '2XB' => 'E02000562',
        '2XD' => 'E02000562',
        '2XE' => 'E02000559',
        '2XF' => 'E02000566',
        '2XG' => 'E02000562',
        '2XH' => 'E02000562',
        '2XJ' => 'E02000562',
        '2XL' => 'E02000566',
        '2XN' => 'E02000566',
        '2XP' => 'E02000566',
        '2XQ' => 'E02000562',
        '2XR' => 'E02000562',
        '2XS' => 'E02000566',
        '2XT' => 'E02000562',
        '2XU' => 'E02000566',
        '2XW' => 'E02000562',
        '2XX' => 'E02000566',
        '2XY' => 'E02000566',
        '2XZ' => 'E02000566',
        '2YA' => 'E02000566',
        '2YB' => 'E02000562',
        '2YD' => 'E02000566',
        '2YE' => 'E02000566',
        '2YF' => 'E02000562',
        '2YG' => 'E02000566',
        '2YH' => 'E02000566',
        '2YJ' => 'E02000562',
        '2YL' => 'E02000566',
        '2YN' => 'E02000566',
        '2YP' => 'E02000566',
        '2YQ' => 'E02000566',
        '2YR' => 'E02000562',
        '2YS' => 'E02000566',
        '2YT' => 'E02000566',
        '2YU' => 'E02000566',
        '2YW' => 'E02000566',
        '2YX' => 'E02000566',
        '2YY' => 'E02000566',
        '2YZ' => 'E02000562',
        '2ZA' => 'E02000566',
        '2ZB' => 'E02000566',
        '2ZD' => 'E02000562',
        '2ZE' => 'E02000566',
        '2ZF' => 'E02000566',
        '2ZG' => 'E02000566',
        '2ZH' => 'E02000566',
        '2ZJ' => 'E02000566',
        '2ZL' => 'E02000562',
        '2ZN' => 'E02000566',
        '2ZP' => 'E02000562',
        '2ZQ' => 'E02000566',
        '2ZR' => 'E02000566',
        '2ZS' => 'E02000566',
        '2ZT' => 'E02000566',
        '2ZU' => 'E02000566',
        '2ZW' => 'E02000566',
        '9AA' => 'E02000566',
        '9AD' => 'E02000566',
        '9AE' => 'E02000566',
        '9AJ' => 'E02000566',
        '9AL' => 'E02000566',
        '9AN' => 'E02000566',
        '9AT' => 'E02000566',
        '9AX' => 'E02000566',
        '9AY' => 'E02000566',
        '9AZ' => 'E02000566',
        '9BA' => 'E02000566',
        '9BB' => 'E02000566',
        '9BD' => 'E02000566',
        '9BE' => 'E02000566',
        '9BG' => 'E02000566',
        '9BH' => 'E02000566',
        '9BJ' => 'E02000566',
        '9BL' => 'E02000566',
        '9BN' => 'E02000566',
        '9BP' => 'E02000566',
        '9BQ' => 'E02000566',
        '9BS' => 'E02000566',
        '9BT' => 'E02000566',
        '9BU' => 'E02000566',
        '9BW' => 'E02000566',
        '9BX' => 'E02000566',
        '9BY' => 'E02000566',
        '9BZ' => 'E02000566',
        '9DA' => 'E02000566',
        '9DB' => 'E02000566',
        '9DD' => 'E02000566',
        '9DE' => 'E02000566',
        '9DF' => 'E02000566',
        '9DG' => 'E02000566',
        '9DH' => 'E02000566',
        '9DJ' => 'E02000566',
        '9DL' => 'E02000566',
        '9DN' => 'E02000566',
        '9DP' => 'E02000566',
        '9DS' => 'E02000566',
        '9DT' => 'E02000566',
        '9DU' => 'E02000566',
        '9DW' => 'E02000566',
        '9DX' => 'E02000566',
        '9DY' => 'E02000566',
        '9DZ' => 'E02000566',
        '9EA' => 'E02000566',
        '9EB' => 'E02000566',
        '9ED' => 'E02000566',
        '9FE' => 'E02000566',
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
