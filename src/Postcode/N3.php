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
final class N3
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02000046',
        '1AB' => 'E02000043',
        '1AD' => 'E02000043',
        '1AE' => 'E02000046',
        '1AF' => 'E02000043',
        '1AG' => 'E02000043',
        '1AH' => 'E02000043',
        '1AJ' => 'E02000043',
        '1AL' => 'E02000043',
        '1AN' => 'E02000043',
        '1AP' => 'E02000043',
        '1AQ' => 'E02000043',
        '1AR' => 'E02000043',
        '1AS' => 'E02000043',
        '1AT' => 'E02000043',
        '1AU' => 'E02000043',
        '1AW' => 'E02000043',
        '1AX' => 'E02000043',
        '1AY' => 'E02000048',
        '1AZ' => 'E02000046',
        '1BA' => 'E02000046',
        '1BB' => 'E02000048',
        '1BD' => 'E02000048',
        '1BE' => 'E02000048',
        '1BF' => 'E02000051',
        '1BG' => 'E02000048',
        '1BH' => 'E02000048',
        '1BJ' => 'E02000048',
        '1BL' => 'E02000048',
        '1BN' => 'E02000048',
        '1BP' => 'E02000048',
        '1BQ' => 'E02000051',
        '1BS' => 'E02000048',
        '1BT' => 'E02000048',
        '1BU' => 'E02000048',
        '1BW' => 'E02000046',
        '1BX' => 'E02000043',
        '1BY' => 'E02000048',
        '1BZ' => 'E02000048',
        '1DA' => 'E02000048',
        '1DB' => 'E02000048',
        '1DD' => 'E02000048',
        '1DE' => 'E02000048',
        '1DF' => 'E02000051',
        '1DG' => 'E02000051',
        '1DH' => 'E02000051',
        '1DJ' => 'E02000051',
        '1DL' => 'E02000051',
        '1DN' => 'E02000051',
        '1DP' => 'E02000051',
        '1DQ' => 'E02000043',
        '1DR' => 'E02000048',
        '1DS' => 'E02000046',
        '1DT' => 'E02000051',
        '1DU' => 'E02000043',
        '1DW' => 'E02000051',
        '1DX' => 'E02000048',
        '1DY' => 'E02000046',
        '1DZ' => 'E02000048',
        '1EA' => 'E02000046',
        '1EB' => 'E02000043',
        '1ED' => 'E02000043',
        '1EE' => 'E02000043',
        '1EF' => 'E02000043',
        '1EG' => 'E02000043',
        '1EH' => 'E02000043',
        '1EJ' => 'E02000043',
        '1EL' => 'E02000043',
        '1EN' => 'E02000043',
        '1EP' => 'E02000043',
        '1EQ' => 'E02000043',
        '1ER' => 'E02000043',
        '1ES' => 'E02000043',
        '1ET' => 'E02000043',
        '1EU' => 'E02000043',
        '1EW' => 'E02000048',
        '1EX' => 'E02000043',
        '1EY' => 'E02000043',
        '1EZ' => 'E02000043',
        '1FW' => 'E02000048',
        '1FX' => 'E02000048',
        '1FY' => 'E02000048',
        '1FZ' => 'E02000048',
        '1GA' => 'E02000048',
        '1GB' => 'E02000048',
        '1GD' => 'E02000048',
        '1GE' => 'E02000048',
        '1GF' => 'E02000051',
        '1GG' => 'E02000051',
        '1GH' => 'E02000048',
        '1GJ' => 'E02000048',
        '1GL' => 'E02000048',
        '1GN' => 'E02000048',
        '1GP' => 'E02000048',
        '1GQ' => 'E02000048',
        '1GR' => 'E02000046',
        '1GS' => 'E02000048',
        '1GT' => 'E02000048',
        '1GU' => 'E02000048',
        '1GW' => 'E02000048',
        '1GX' => 'E02000048',
        '1GY' => 'E02000048',
        '1GZ' => 'E02000048',
        '1HA' => 'E02000043',
        '1HB' => 'E02000048',
        '1HD' => 'E02000046',
        '1HE' => 'E02000048',
        '1HF' => 'E02000051',
        '1HG' => 'E02000048',
        '1HH' => 'E02000048',
        '1HJ' => 'E02000048',
        '1HL' => 'E02000048',
        '1HN' => 'E02000048',
        '1HP' => 'E02000046',
        '1HQ' => 'E02000048',
        '1HR' => 'E02000046',
        '1HS' => 'E02000046',
        '1HT' => 'E02000043',
        '1HU' => 'E02000043',
        '1HW' => 'E02000048',
        '1HX' => 'E02000043',
        '1HY' => 'E02000043',
        '1HZ' => 'E02000043',
        '1JA' => 'E02000043',
        '1JB' => 'E02000043',
        '1JD' => 'E02000043',
        '1JE' => 'E02000043',
        '1JF' => 'E02000048',
        '1JG' => 'E02000046',
        '1JH' => 'E02000043',
        '1JJ' => 'E02000043',
        '1JL' => 'E02000043',
        '1JN' => 'E02000046',
        '1JP' => 'E02000046',
        '1JQ' => 'E02000051',
        '1JR' => 'E02000046',
        '1JS' => 'E02000046',
        '1JT' => 'E02000051',
        '1JU' => 'E02000048',
        '1JW' => 'E02000048',
        '1JX' => 'E02000048',
        '1JY' => 'E02000048',
        '1JZ' => 'E02000048',
        '1LA' => 'E02000048',
        '1LB' => 'E02000042',
        '1LD' => 'E02000046',
        '1LE' => 'E02000048',
        '1LF' => 'E02000046',
        '1LG' => 'E02000046',
        '1LH' => 'E02000046',
        '1LJ' => 'E02000046',
        '1LL' => 'E02000046',
        '1LN' => 'E02000048',
        '1LP' => 'E02000046',
        '1LQ' => 'E02000046',
        '1LR' => 'E02000048',
        '1LS' => 'E02000046',
        '1LT' => 'E02000046',
        '1LU' => 'E02000046',
        '1LW' => 'E02000046',
        '1LX' => 'E02000046',
        '1LY' => 'E02000046',
        '1LZ' => 'E02000046',
        '1NA' => 'E02000046',
        '1NB' => 'E02000046',
        '1ND' => 'E02000043',
        '1NE' => 'E02000043',
        '1NF' => 'E02000042',
        '1NG' => 'E02000042',
        '1NH' => 'E02000042',
        '1NJ' => 'E02000042',
        '1NL' => 'E02000042',
        '1NN' => 'E02000048',
        '1NP' => 'E02000043',
        '1NQ' => 'E02000048',
        '1NR' => 'E02000042',
        '1NS' => 'E02000043',
        '1NT' => 'E02000043',
        '1NU' => 'E02000048',
        '1NW' => 'E02000048',
        '1NX' => 'E02000043',
        '1NY' => 'E02000043',
        '1NZ' => 'E02000048',
        '1PA' => 'E02000043',
        '1PB' => 'E02000043',
        '1PD' => 'E02000043',
        '1PE' => 'E02000046',
        '1PF' => 'E02000048',
        '1PG' => 'E02000043',
        '1PH' => 'E02000043',
        '1PJ' => 'E02000043',
        '1PL' => 'E02000043',
        '1PN' => 'E02000043',
        '1PP' => 'E02000043',
        '1PQ' => 'E02000046',
        '1PR' => 'E02000043',
        '1PS' => 'E02000043',
        '1PT' => 'E02000043',
        '1PU' => 'E02000043',
        '1PW' => 'E02000043',
        '1PX' => 'E02000043',
        '1PY' => 'E02000048',
        '1PZ' => 'E02000051',
        '1QA' => 'E02000046',
        '1QB' => 'E02000046',
        '1QD' => 'E02000046',
        '1QE' => 'E02000048',
        '1QF' => 'E02000046',
        '1QG' => 'E02000046',
        '1QH' => 'E02000046',
        '1QJ' => 'E02000046',
        '1QL' => 'E02000046',
        '1QN' => 'E02000046',
        '1QP' => 'E02000046',
        '1QQ' => 'E02000046',
        '1QR' => 'E02000046',
        '1QS' => 'E02000046',
        '1QT' => 'E02000046',
        '1QU' => 'E02000046',
        '1QW' => 'E02000046',
        '1QX' => 'E02000046',
        '1QY' => 'E02000046',
        '1QZ' => 'E02000046',
        '1RA' => 'E02000046',
        '1RB' => 'E02000043',
        '1RD' => 'E02000043',
        '1RE' => 'E02000040',
        '1RF' => 'E02000048',
        '1RG' => 'E02000046',
        '1RH' => 'E02000046',
        '1RJ' => 'E02000046',
        '1RL' => 'E02000046',
        '1RN' => 'E02000043',
        '1RP' => 'E02000048',
        '1RQ' => 'E02000046',
        '1RR' => 'E02000051',
        '1RS' => 'E02000048',
        '1RT' => 'E02000051',
        '1RU' => 'E02000051',
        '1RW' => 'E02000048',
        '1RX' => 'E02000048',
        '1RY' => 'E02000051',
        '1RZ' => 'E02000051',
        '1SA' => 'E02000051',
        '1SB' => 'E02000051',
        '1SD' => 'E02000051',
        '1SE' => 'E02000051',
        '1SF' => 'E02000051',
        '1SG' => 'E02000051',
        '1SH' => 'E02000051',
        '1SJ' => 'E02000051',
        '1SL' => 'E02000051',
        '1SN' => 'E02000051',
        '1SP' => 'E02000048',
        '1SQ' => 'E02000051',
        '1SR' => 'E02000048',
        '1SS' => 'E02000051',
        '1ST' => 'E02000048',
        '1SU' => 'E02000051',
        '1SW' => 'E02000051',
        '1SX' => 'E02000051',
        '1SY' => 'E02000051',
        '1SZ' => 'E02000048',
        '1TA' => 'E02000048',
        '1TB' => 'E02000048',
        '1TD' => 'E02000048',
        '1TE' => 'E02000048',
        '1TF' => 'E02000048',
        '1TG' => 'E02000048',
        '1TH' => 'E02000048',
        '1TJ' => 'E02000048',
        '1TL' => 'E02000048',
        '1TN' => 'E02000048',
        '1TP' => 'E02000048',
        '1TQ' => 'E02000048',
        '1TR' => 'E02000051',
        '1TS' => 'E02000048',
        '1TT' => 'E02000051',
        '1TU' => 'E02000048',
        '1TW' => 'E02000048',
        '1TX' => 'E02000048',
        '1TY' => 'E02000048',
        '1TZ' => 'E02000048',
        '1UA' => 'E02000048',
        '1UB' => 'E02000048',
        '1UD' => 'E02000048',
        '1UE' => 'E02000048',
        '1UF' => 'E02000048',
        '1UG' => 'E02000048',
        '1UH' => 'E02000048',
        '1UJ' => 'E02000048',
        '1UL' => 'E02000048',
        '1UN' => 'E02000048',
        '1UP' => 'E02000051',
        '1UQ' => 'E02000048',
        '1UR' => 'E02000048',
        '1US' => 'E02000051',
        '1UT' => 'E02000048',
        '1UU' => 'E02000046',
        '1UW' => 'E02000048',
        '1UX' => 'E02000046',
        '1UY' => 'E02000048',
        '1UZ' => 'E02000048',
        '1WA' => 'E02000048',
        '1WB' => 'E02000048',
        '1WD' => 'E02000048',
        '1WE' => 'E02000048',
        '1WF' => 'E02000048',
        '1WG' => 'E02000048',
        '1WH' => 'E02000048',
        '1WJ' => 'E02000048',
        '1WL' => 'E02000048',
        '1WN' => 'E02000048',
        '1WP' => 'E02000048',
        '1WQ' => 'E02000048',
        '1WR' => 'E02000048',
        '1WS' => 'E02000048',
        '1WT' => 'E02000048',
        '1WU' => 'E02000048',
        '1WW' => 'E02000048',
        '1WX' => 'E02000048',
        '1WY' => 'E02000048',
        '1WZ' => 'E02000048',
        '1XA' => 'E02000048',
        '1XB' => 'E02000048',
        '1XD' => 'E02000048',
        '1XE' => 'E02000046',
        '1XF' => 'E02000048',
        '1XG' => 'E02000048',
        '1XH' => 'E02000048',
        '1XJ' => 'E02000048',
        '1XL' => 'E02000048',
        '1XN' => 'E02000046',
        '1XP' => 'E02000046',
        '1XQ' => 'E02000046',
        '1XR' => 'E02000046',
        '1XS' => 'E02000048',
        '1XT' => 'E02000046',
        '1XU' => 'E02000046',
        '1XW' => 'E02000046',
        '1XX' => 'E02000048',
        '1XY' => 'E02000046',
        '1XZ' => 'E02000046',
        '1YA' => 'E02000046',
        '1YB' => 'E02000046',
        '1YD' => 'E02000046',
        '1YE' => 'E02000046',
        '1YF' => 'E02000048',
        '1YG' => 'E02000046',
        '1YH' => 'E02000046',
        '1YJ' => 'E02000046',
        '1YL' => 'E02000043',
        '1YN' => 'E02000043',
        '1YP' => 'E02000043',
        '1YQ' => 'E02000048',
        '1YR' => 'E02000048',
        '1YS' => 'E02000048',
        '1YT' => 'E02000046',
        '1YU' => 'E02000048',
        '1YW' => 'E02000048',
        '1YX' => 'E02000048',
        '1YY' => 'E02000048',
        '1YZ' => 'E02000048',
        '1ZA' => 'E02000048',
        '1ZB' => 'E02000048',
        '1ZD' => 'E02000048',
        '1ZE' => 'E02000048',
        '1ZF' => 'E02000048',
        '1ZG' => 'E02000048',
        '1ZH' => 'E02000048',
        '1ZJ' => 'E02000048',
        '1ZL' => 'E02000048',
        '1ZN' => 'E02000048',
        '1ZP' => 'E02000048',
        '1ZQ' => 'E02000048',
        '1ZR' => 'E02000048',
        '1ZS' => 'E02000048',
        '1ZT' => 'E02000048',
        '1ZU' => 'E02000048',
        '1ZW' => 'E02000048',
        '2AA' => 'E02000050',
        '2AB' => 'E02000050',
        '2AD' => 'E02000050',
        '2AE' => 'E02000050',
        '2AF' => 'E02000050',
        '2AG' => 'E02000050',
        '2AH' => 'E02000050',
        '2AJ' => 'E02000050',
        '2AL' => 'E02000050',
        '2AN' => 'E02000050',
        '2AP' => 'E02000050',
        '2AQ' => 'E02000050',
        '2AR' => 'E02000050',
        '2AS' => 'E02000050',
        '2AT' => 'E02000050',
        '2AU' => 'E02000050',
        '2AW' => 'E02000048',
        '2AX' => 'E02000050',
        '2AY' => 'E02000050',
        '2AZ' => 'E02000050',
        '2BA' => 'E02000050',
        '2BB' => 'E02000046',
        '2BD' => 'E02000046',
        '2BE' => 'E02000046',
        '2BF' => 'E02000051',
        '2BG' => 'E02000046',
        '2BH' => 'E02000046',
        '2BJ' => 'E02000046',
        '2BL' => 'E02000046',
        '2BN' => 'E02000046',
        '2BP' => 'E02000046',
        '2BQ' => 'E02000051',
        '2BS' => 'E02000046',
        '2BT' => 'E02000046',
        '2BU' => 'E02000046',
        '2BW' => 'E02000046',
        '2BX' => 'E02000046',
        '2BY' => 'E02000046',
        '2BZ' => 'E02000046',
        '2DA' => 'E02000046',
        '2DB' => 'E02000046',
        '2DD' => 'E02000046',
        '2DE' => 'E02000046',
        '2DF' => 'E02000046',
        '2DG' => 'E02000046',
        '2DH' => 'E02000046',
        '2DJ' => 'E02000046',
        '2DL' => 'E02000046',
        '2DN' => 'E02000046',
        '2DP' => 'E02000046',
        '2DQ' => 'E02000046',
        '2DR' => 'E02000046',
        '2DS' => 'E02000042',
        '2DT' => 'E02000046',
        '2DU' => 'E02000042',
        '2DW' => 'E02000042',
        '2DX' => 'E02000042',
        '2DY' => 'E02000042',
        '2DZ' => 'E02000042',
        '2EA' => 'E02000042',
        '2EB' => 'E02000042',
        '2ED' => 'E02000050',
        '2EE' => 'E02000050',
        '2EF' => 'E02000050',
        '2EG' => 'E02000050',
        '2EH' => 'E02000046',
        '2EJ' => 'E02000046',
        '2EL' => 'E02000046',
        '2EN' => 'E02000046',
        '2EP' => 'E02000050',
        '2EQ' => 'E02000050',
        '2ER' => 'E02000050',
        '2ES' => 'E02000050',
        '2ET' => 'E02000050',
        '2EU' => 'E02000050',
        '2EW' => 'E02000050',
        '2EX' => 'E02000050',
        '2EY' => 'E02000050',
        '2EZ' => 'E02000050',
        '2FD' => 'E02000046',
        '2FE' => 'E02000048',
        '2FF' => 'E02000051',
        '2FG' => 'E02000051',
        '2FH' => 'E02000051',
        '2GA' => 'E02000048',
        '2GP' => 'E02000051',
        '2GX' => 'E02000048',
        '2GY' => 'E02000046',
        '2GZ' => 'E02000046',
        '2HA' => 'E02000046',
        '2HB' => 'E02000046',
        '2HD' => 'E02000046',
        '2HE' => 'E02000046',
        '2HF' => 'E02000046',
        '2HG' => 'E02000046',
        '2HH' => 'E02000046',
        '2HJ' => 'E02000046',
        '2HL' => 'E02000050',
        '2HN' => 'E02000046',
        '2HP' => 'E02000046',
        '2HQ' => 'E02000046',
        '2HR' => 'E02000046',
        '2HS' => 'E02000051',
        '2HT' => 'E02000046',
        '2HU' => 'E02000046',
        '2HW' => 'E02000046',
        '2HX' => 'E02000050',
        '2HY' => 'E02000046',
        '2HZ' => 'E02000048',
        '2JA' => 'E02000046',
        '2JB' => 'E02000046',
        '2JD' => 'E02000048',
        '2JE' => 'E02000051',
        '2JF' => 'E02000051',
        '2JG' => 'E02000051',
        '2JH' => 'E02000051',
        '2JJ' => 'E02000046',
        '2JL' => 'E02000046',
        '2JN' => 'E02000046',
        '2JP' => 'E02000051',
        '2JQ' => 'E02000046',
        '2JR' => 'E02000046',
        '2JS' => 'E02000051',
        '2JT' => 'E02000051',
        '2JU' => 'E02000051',
        '2JW' => 'E02000046',
        '2JX' => 'E02000051',
        '2JY' => 'E02000051',
        '2JZ' => 'E02000051',
        '2LA' => 'E02000051',
        '2LB' => 'E02000051',
        '2LD' => 'E02000051',
        '2LE' => 'E02000046',
        '2LF' => 'E02000046',
        '2LG' => 'E02000046',
        '2LH' => 'E02000046',
        '2LJ' => 'E02000051',
        '2LL' => 'E02000048',
        '2LN' => 'E02000051',
        '2LP' => 'E02000051',
        '2LQ' => 'E02000048',
        '2LR' => 'E02000051',
        '2LS' => 'E02000048',
        '2LT' => 'E02000051',
        '2LU' => 'E02000046',
        '2LW' => 'E02000046',
        '2LX' => 'E02000042',
        '2LY' => 'E02000042',
        '2LZ' => 'E02000042',
        '2NA' => 'E02000042',
        '2NB' => 'E02000046',
        '2ND' => 'E02000046',
        '2NE' => 'E02000046',
        '2NF' => 'E02000046',
        '2NG' => 'E02000046',
        '2NH' => 'E02000046',
        '2NJ' => 'E02000050',
        '2NL' => 'E02000050',
        '2NN' => 'E02000050',
        '2NP' => 'E02000050',
        '2NQ' => 'E02000042',
        '2NR' => 'E02000050',
        '2NS' => 'E02000050',
        '2NT' => 'E02000046',
        '2NU' => 'E02000046',
        '2NW' => 'E02000050',
        '2NX' => 'E02000046',
        '2NY' => 'E02000046',
        '2NZ' => 'E02000048',
        '2PA' => 'E02000046',
        '2PB' => 'E02000046',
        '2PD' => 'E02000046',
        '2PE' => 'E02000046',
        '2PF' => 'E02000046',
        '2PG' => 'E02000046',
        '2PH' => 'E02000046',
        '2PJ' => 'E02000046',
        '2PL' => 'E02000046',
        '2PN' => 'E02000046',
        '2PP' => 'E02000046',
        '2PQ' => 'E02000046',
        '2PR' => 'E02000046',
        '2PS' => 'E02000046',
        '2PT' => 'E02000046',
        '2PU' => 'E02000046',
        '2PW' => 'E02000048',
        '2PX' => 'E02000046',
        '2PY' => 'E02000046',
        '2PZ' => 'E02000046',
        '2QA' => 'E02000046',
        '2QB' => 'E02000046',
        '2QD' => 'E02000046',
        '2QE' => 'E02000046',
        '2QF' => 'E02000048',
        '2QG' => 'E02000046',
        '2QH' => 'E02000046',
        '2QJ' => 'E02000046',
        '2QL' => 'E02000050',
        '2QN' => 'E02000046',
        '2QP' => 'E02000046',
        '2QQ' => 'E02000051',
        '2QR' => 'E02000046',
        '2QS' => 'E02000050',
        '2QT' => 'E02000050',
        '2QU' => 'E02000046',
        '2QW' => 'E02000048',
        '2QX' => 'E02000050',
        '2QY' => 'E02000050',
        '2QZ' => 'E02000050',
        '2RA' => 'E02000050',
        '2RB' => 'E02000050',
        '2RD' => 'E02000050',
        '2RE' => 'E02000050',
        '2RF' => 'E02000050',
        '2RG' => 'E02000050',
        '2RH' => 'E02000050',
        '2RJ' => 'E02000050',
        '2RL' => 'E02000050',
        '2RN' => 'E02000050',
        '2RP' => 'E02000050',
        '2RQ' => 'E02000050',
        '2RR' => 'E02000050',
        '2RS' => 'E02000050',
        '2RT' => 'E02000046',
        '2RU' => 'E02000046',
        '2RW' => 'E02000050',
        '2RX' => 'E02000048',
        '2RY' => 'E02000046',
        '2RZ' => 'E02000048',
        '2SA' => 'E02000046',
        '2SB' => 'E02000051',
        '2SD' => 'E02000051',
        '2SE' => 'E02000046',
        '2SF' => 'E02000048',
        '2SG' => 'E02000046',
        '2SH' => 'E02000046',
        '2SJ' => 'E02000046',
        '2SL' => 'E02000046',
        '2SN' => 'E02000046',
        '2SP' => 'E02000046',
        '2SQ' => 'E02000046',
        '2SR' => 'E02000046',
        '2SS' => 'E02000046',
        '2ST' => 'E02000046',
        '2SU' => 'E02000046',
        '2SW' => 'E02000048',
        '2SX' => 'E02000051',
        '2SY' => 'E02000051',
        '2SZ' => 'E02000051',
        '2TA' => 'E02000046',
        '2TB' => 'E02000056',
        '2TD' => 'E02000051',
        '2TE' => 'E02000046',
        '2TF' => 'E02000046',
        '2TG' => 'E02000046',
        '2TH' => 'E02000051',
        '2TJ' => 'E02000051',
        '2TL' => 'E02000051',
        '2TN' => 'E02000051',
        '2TP' => 'E02000048',
        '2TQ' => 'E02000048',
        '2TR' => 'E02000046',
        '2TS' => 'E02000048',
        '2TT' => 'E02000046',
        '2TW' => 'E02000048',
        '2TX' => 'E02000051',
        '2TY' => 'E02000051',
        '2TZ' => 'E02000051',
        '2UA' => 'E02000051',
        '2UD' => 'E02000042',
        '2UE' => 'E02000048',
        '2UF' => 'E02000051',
        '2UG' => 'E02000046',
        '2UH' => 'E02000046',
        '2UJ' => 'E02000042',
        '2UL' => 'E02000051',
        '2UP' => 'E02000051',
        '2UQ' => 'E02000046',
        '2UR' => 'E02000048',
        '2US' => 'E02000048',
        '2UT' => 'E02000051',
        '2UU' => 'E02000051',
        '2UW' => 'E02000048',
        '2UX' => 'E02000048',
        '2UY' => 'E02000048',
        '2UZ' => 'E02000051',
        '2WA' => 'E02000048',
        '2WB' => 'E02000048',
        '2WD' => 'E02000048',
        '2WE' => 'E02000048',
        '2WF' => 'E02000048',
        '2WG' => 'E02000046',
        '2WH' => 'E02000046',
        '2WJ' => 'E02000048',
        '2WL' => 'E02000046',
        '2WN' => 'E02000048',
        '2WP' => 'E02000048',
        '2WQ' => 'E02000048',
        '2WR' => 'E02000048',
        '2WS' => 'E02000048',
        '2WT' => 'E02000048',
        '2WU' => 'E02000048',
        '2WW' => 'E02000048',
        '2WX' => 'E02000048',
        '2WY' => 'E02000048',
        '2WZ' => 'E02000048',
        '2XA' => 'E02000048',
        '2XB' => 'E02000046',
        '2XD' => 'E02000048',
        '2XE' => 'E02000048',
        '2XF' => 'E02000048',
        '2XG' => 'E02000048',
        '2XH' => 'E02000048',
        '2XJ' => 'E02000048',
        '2XL' => 'E02000048',
        '2XN' => 'E02000051',
        '2XP' => 'E02000048',
        '2XQ' => 'E02000048',
        '2XR' => 'E02000048',
        '2XS' => 'E02000048',
        '2XT' => 'E02000048',
        '2XU' => 'E02000048',
        '2XW' => 'E02000048',
        '2XX' => 'E02000051',
        '2XY' => 'E02000048',
        '2XZ' => 'E02000048',
        '2YA' => 'E02000048',
        '2YB' => 'E02000051',
        '2YD' => 'E02000048',
        '2YE' => 'E02000048',
        '2YF' => 'E02000048',
        '2YG' => 'E02000051',
        '2YH' => 'E02000048',
        '2YJ' => 'E02000048',
        '2YP' => 'E02000051',
        '2YQ' => 'E02000051',
        '2YR' => 'E02000048',
        '2YX' => 'E02000048',
        '2YY' => 'E02000048',
        '2YZ' => 'E02000051',
        '2ZA' => 'E02000046',
        '2ZB' => 'E02000046',
        '2ZD' => 'E02000046',
        '2ZE' => 'E02000046',
        '2ZF' => 'E02000048',
        '2ZG' => 'E02000048',
        '2ZH' => 'E02000048',
        '2ZJ' => 'E02000048',
        '2ZL' => 'E02000048',
        '2ZN' => 'E02000048',
        '2ZP' => 'E02000046',
        '2ZQ' => 'E02000046',
        '2ZR' => 'E02000046',
        '2ZS' => 'E02000048',
        '2ZT' => 'E02000048',
        '2ZW' => 'E02000048',
        '3AA' => 'E02000051',
        '3AB' => 'E02000051',
        '3AD' => 'E02000051',
        '3AE' => 'E02000051',
        '3AF' => 'E02000051',
        '3AG' => 'E02000051',
        '3AH' => 'E02000051',
        '3AJ' => 'E02000051',
        '3AL' => 'E02000051',
        '3AN' => 'E02000051',
        '3AP' => 'E02000051',
        '3AQ' => 'E02000051',
        '3AR' => 'E02000051',
        '3AS' => 'E02000051',
        '3AT' => 'E02000051',
        '3AU' => 'E02000051',
        '3AW' => 'E02000051',
        '3AX' => 'E02000051',
        '3AY' => 'E02000051',
        '3AZ' => 'E02000051',
        '3BA' => 'E02000051',
        '3BB' => 'E02000051',
        '3BD' => 'E02000051',
        '3BE' => 'E02000051',
        '3BF' => 'E02000051',
        '3BG' => 'E02000051',
        '3BH' => 'E02000051',
        '3BJ' => 'E02000051',
        '3BL' => 'E02000051',
        '3BN' => 'E02000051',
        '3BP' => 'E02000051',
        '3BQ' => 'E02000051',
        '3BS' => 'E02000048',
        '3BT' => 'E02000051',
        '3BU' => 'E02000051',
        '3BW' => 'E02000048',
        '3BX' => 'E02000048',
        '3BY' => 'E02000051',
        '3DA' => 'E02000051',
        '3DB' => 'E02000051',
        '3DD' => 'E02000051',
        '3DE' => 'E02000051',
        '3DF' => 'E02000051',
        '3DG' => 'E02000051',
        '3DH' => 'E02000051',
        '3DL' => 'E02000048',
        '3DP' => 'E02000051',
        '3DQ' => 'E02000048',
        '3DR' => 'E02000051',
        '3DS' => 'E02000051',
        '3DT' => 'E02000051',
        '3DU' => 'E02000051',
        '3DW' => 'E02000051',
        '3DX' => 'E02000051',
        '3DY' => 'E02000051',
        '3DZ' => 'E02000051',
        '3EA' => 'E02000051',
        '3EB' => 'E02000051',
        '3ED' => 'E02000051',
        '3EE' => 'E02000051',
        '3EF' => 'E02000048',
        '3EG' => 'E02000048',
        '3EH' => 'E02000048',
        '3EJ' => 'E02000051',
        '3EL' => 'E02000051',
        '3EN' => 'E02000048',
        '3EP' => 'E02000048',
        '3EQ' => 'E02000048',
        '3ER' => 'E02000051',
        '3ES' => 'E02000048',
        '3ET' => 'E02000048',
        '3EU' => 'E02000051',
        '3EX' => 'E02000051',
        '3EY' => 'E02000051',
        '3EZ' => 'E02000051',
        '3GR' => 'E02000051',
        '3HA' => 'E02000051',
        '3HB' => 'E02000051',
        '3HD' => 'E02000051',
        '3HE' => 'E02000051',
        '3HF' => 'E02000051',
        '3HG' => 'E02000051',
        '3HH' => 'E02000051',
        '3HJ' => 'E02000051',
        '3HL' => 'E02000051',
        '3HN' => 'E02000051',
        '3HP' => 'E02000051',
        '3HQ' => 'E02000051',
        '3HR' => 'E02000051',
        '3HS' => 'E02000051',
        '3HT' => 'E02000051',
        '3HU' => 'E02000051',
        '3HX' => 'E02000051',
        '3HY' => 'E02000051',
        '3HZ' => 'E02000051',
        '3JA' => 'E02000051',
        '3JB' => 'E02000051',
        '3JD' => 'E02000051',
        '3JE' => 'E02000051',
        '3JF' => 'E02000051',
        '3JG' => 'E02000051',
        '3JH' => 'E02000051',
        '3JJ' => 'E02000051',
        '3JL' => 'E02000051',
        '3JN' => 'E02000051',
        '3JP' => 'E02000051',
        '3JQ' => 'E02000048',
        '3JR' => 'E02000058',
        '3JS' => 'E02000051',
        '3JT' => 'E02000051',
        '3JU' => 'E02000051',
        '3JW' => 'E02000048',
        '3JX' => 'E02000051',
        '3JY' => 'E02000051',
        '3JZ' => 'E02000051',
        '3LA' => 'E02000051',
        '3LB' => 'E02000051',
        '3LD' => 'E02000051',
        '3LE' => 'E02000051',
        '3LF' => 'E02000051',
        '3LG' => 'E02000051',
        '3LH' => 'E02000051',
        '3LJ' => 'E02000051',
        '3LL' => 'E02000051',
        '3LN' => 'E02000051',
        '3LQ' => 'E02000051',
        '3LR' => 'E02000051',
        '3LS' => 'E02000051',
        '3LT' => 'E02000051',
        '3LU' => 'E02000051',
        '3LW' => 'E02000051',
        '3LX' => 'E02000051',
        '3LY' => 'E02000051',
        '3LZ' => 'E02000051',
        '3NA' => 'E02000051',
        '3NB' => 'E02000051',
        '3ND' => 'E02000051',
        '3NE' => 'E02000051',
        '3NF' => 'E02000051',
        '3NG' => 'E02000051',
        '3NH' => 'E02000051',
        '3NJ' => 'E02000051',
        '3NL' => 'E02000051',
        '3NN' => 'E02000051',
        '3NP' => 'E02000051',
        '3NQ' => 'E02000051',
        '3NR' => 'E02000051',
        '3NS' => 'E02000051',
        '3NT' => 'E02000048',
        '3NU' => 'E02000051',
        '3NW' => 'E02000048',
        '3NX' => 'E02000051',
        '3NY' => 'E02000051',
        '3NZ' => 'E02000051',
        '3PA' => 'E02000051',
        '3PB' => 'E02000051',
        '3PD' => 'E02000051',
        '3PE' => 'E02000051',
        '3PF' => 'E02000051',
        '3PG' => 'E02000051',
        '3PH' => 'E02000051',
        '3PJ' => 'E02000051',
        '3PL' => 'E02000051',
        '3PN' => 'E02000051',
        '3PP' => 'E02000051',
        '3PQ' => 'E02000051',
        '3PR' => 'E02000051',
        '3PS' => 'E02000051',
        '3PT' => 'E02000048',
        '3PU' => 'E02000048',
        '3PW' => 'E02000048',
        '3PX' => 'E02000048',
        '3PY' => 'E02000051',
        '3PZ' => 'E02000048',
        '3QA' => 'E02000048',
        '3QB' => 'E02000051',
        '3QD' => 'E02000051',
        '3QE' => 'E02000051',
        '3QF' => 'E02000048',
        '3QG' => 'E02000051',
        '3QH' => 'E02000051',
        '3QJ' => 'E02000051',
        '3QL' => 'E02000051',
        '3QN' => 'E02000051',
        '3QP' => 'E02000051',
        '3QQ' => 'E02000051',
        '3QR' => 'E02000051',
        '3QS' => 'E02000051',
        '3QT' => 'E02000051',
        '3QU' => 'E02000046',
        '3QW' => 'E02000051',
        '3QX' => 'E02000051',
        '3QY' => 'E02000051',
        '3QZ' => 'E02000051',
        '3RA' => 'E02000051',
        '3RB' => 'E02000051',
        '3RD' => 'E02000051',
        '3RE' => 'E02000051',
        '3RG' => 'E02000051',
        '3RH' => 'E02000051',
        '3RJ' => 'E02000051',
        '3RL' => 'E02000051',
        '3RN' => 'E02000051',
        '3RP' => 'E02000051',
        '3RQ' => 'E02000051',
        '3RR' => 'E02000051',
        '3RS' => 'E02000051',
        '3RT' => 'E02000051',
        '3RU' => 'E02000051',
        '3RW' => 'E02000051',
        '3RX' => 'E02000051',
        '3RY' => 'E02000051',
        '3RZ' => 'E02000051',
        '3SA' => 'E02000051',
        '3SB' => 'E02000051',
        '3SD' => 'E02000051',
        '3SE' => 'E02000051',
        '3SF' => 'E02000051',
        '3SG' => 'E02000051',
        '3SH' => 'E02000051',
        '3SJ' => 'E02000051',
        '3SL' => 'E02000051',
        '3SN' => 'E02000051',
        '3SP' => 'E02000051',
        '3SQ' => 'E02000051',
        '3SR' => 'E02000051',
        '3SS' => 'E02000051',
        '3ST' => 'E02000051',
        '3SU' => 'E02000051',
        '3SW' => 'E02000051',
        '3SX' => 'E02000051',
        '3SY' => 'E02000048',
        '3SZ' => 'E02000051',
        '3TA' => 'E02000051',
        '3TB' => 'E02000048',
        '3TD' => 'E02000051',
        '3TE' => 'E02000051',
        '3TF' => 'E02000051',
        '3TG' => 'E02000051',
        '3TH' => 'E02000051',
        '3TJ' => 'E02000051',
        '3TL' => 'E02000051',
        '3TN' => 'E02000051',
        '3TP' => 'E02000051',
        '3TQ' => 'E02000048',
        '3TR' => 'E02000051',
        '3TT' => 'E02000051',
        '3TX' => 'E02000051',
        '3TY' => 'E02000051',
        '3TZ' => 'E02000051',
        '3UA' => 'E02000051',
        '3UB' => 'E02000051',
        '3UD' => 'E02000051',
        '3UE' => 'E02000048',
        '3UF' => 'E02000048',
        '3UH' => 'E02000048',
        '3UW' => 'E02000048',
        '3UX' => 'E02000048',
        '3UY' => 'E02000048',
        '3UZ' => 'E02000048',
        '3WA' => 'E02000048',
        '3WB' => 'E02000048',
        '3WD' => 'E02000048',
        '3WE' => 'E02000048',
        '3WF' => 'E02000048',
        '3WG' => 'E02000051',
        '3WH' => 'E02000048',
        '3WJ' => 'E02000048',
        '3WL' => 'E02000048',
        '3WN' => 'E02000048',
        '3WP' => 'E02000048',
        '3WQ' => 'E02000048',
        '3WR' => 'E02000048',
        '3WS' => 'E02000048',
        '3WT' => 'E02000048',
        '3WU' => 'E02000048',
        '3WW' => 'E02000048',
        '3WX' => 'E02000048',
        '3WY' => 'E02000048',
        '3WZ' => 'E02000048',
        '3XA' => 'E02000048',
        '3XB' => 'E02000048',
        '3XD' => 'E02000048',
        '3XE' => 'E02000048',
        '3XF' => 'E02000048',
        '3XG' => 'E02000048',
        '3XH' => 'E02000048',
        '3XJ' => 'E02000048',
        '3XL' => 'E02000048',
        '3XN' => 'E02000048',
        '3XP' => 'E02000051',
        '3XQ' => 'E02000048',
        '3XR' => 'E02000048',
        '3XS' => 'E02000048',
        '3XT' => 'E02000048',
        '3XU' => 'E02000048',
        '3XW' => 'E02000048',
        '3XX' => 'E02000048',
        '3XY' => 'E02000048',
        '3XZ' => 'E02000048',
        '3YA' => 'E02000048',
        '3YB' => 'E02000048',
        '3YD' => 'E02000048',
        '3YE' => 'E02000048',
        '3YF' => 'E02000048',
        '3YG' => 'E02000048',
        '3YP' => 'E02000048',
        '3YQ' => 'E02000048',
        '3YS' => 'E02000048',
        '3YT' => 'E02000048',
        '3YU' => 'E02000048',
        '3YW' => 'E02000048',
        '3YX' => 'E02000048',
        '3YY' => 'E02000048',
        '3YZ' => 'E02000048',
        '3ZA' => 'E02000048',
        '3ZB' => 'E02000051',
        '3ZD' => 'E02000051',
        '3ZE' => 'E02000048',
        '3ZF' => 'E02000048',
        '3ZG' => 'E02000048',
        '3ZH' => 'E02000051',
        '3ZJ' => 'E02000048',
        '3ZL' => 'E02000051',
        '3ZN' => 'E02000048',
        '3ZP' => 'E02000048',
        '3ZQ' => 'E02000048',
        '3ZR' => 'E02000048',
        '3ZS' => 'E02000048',
        '3ZT' => 'E02000048',
        '3ZW' => 'E02000048',
        '9AD' => 'E02000048',
        '9AF' => 'E02000048',
        '9AJ' => 'E02000048',
        '9AN' => 'E02000048',
        '9AP' => 'E02000048',
        '9AQ' => 'E02000048',
        '9AR' => 'E02000048',
        '9AT' => 'E02000048',
        '9AW' => 'E02000048',
        '9AX' => 'E02000048',
        '9BE' => 'E02000048',
        '9BF' => 'E02000048',
        '9BJ' => 'E02000048',
        '9BL' => 'E02000048',
        '9BN' => 'E02000048',
        '9BP' => 'E02000048',
        '9BS' => 'E02000048',
        '9BT' => 'E02000048',
        '9BU' => 'E02000048',
        '9BW' => 'E02000048',
        '9BX' => 'E02000048',
        '9BY' => 'E02000048',
        '9BZ' => 'E02000048',
        '9DA' => 'E02000048',
        '9DB' => 'E02000048',
        '9DD' => 'E02000048',
        '9DE' => 'E02000048',
        '9DF' => 'E02000048',
        '9DG' => 'E02000048',
        '9DH' => 'E02000048',
        '9DJ' => 'E02000048',
        '9DL' => 'E02000048',
        '9DN' => 'E02000048',
        '9DP' => 'E02000048',
        '9DQ' => 'E02000048',
        '9DR' => 'E02000048',
        '9DS' => 'E02000048',
        '9DU' => 'E02000048',
        '9DX' => 'E02000048',
        '9DY' => 'E02000048',
        '9DZ' => 'E02000048',
        '9EA' => 'E02000048',
        '9EB' => 'E02000048',
        '9ED' => 'E02000048',
        '9EE' => 'E02000048',
        '9EF' => 'E02000048',
        '9EG' => 'E02000048',
        '9EJ' => 'E02000048',
        '9EL' => 'E02000048',
        '9EN' => 'E02000048',
        '9EP' => 'E02000048',
        '9EQ' => 'E02000048',
        '9ER' => 'E02000048',
        '9ES' => 'E02000048',
        '9ET' => 'E02000048',
        '9EU' => 'E02000048',
        '9EW' => 'E02000048',
        '9EX' => 'E02000048',
        '9EY' => 'E02000048',
        '9EZ' => 'E02000048',
        '9FB' => 'E02000048',
        '9FD' => 'E02000048',
        '9FE' => 'E02000048',
        '9FF' => 'E02000048',
        '9FG' => 'E02000048',
        '9FH' => 'E02000048',
        '9FJ' => 'E02000048',
        '9FL' => 'E02000048',
        '9FN' => 'E02000048',
        '9FP' => 'E02000048',
        '9FQ' => 'E02000048',
        '9FR' => 'E02000048',
        '9FS' => 'E02000048',
        '9PW' => 'E02000048',
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
