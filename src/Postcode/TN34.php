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
final class TN34
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02004376',
        '1AB' => 'E02004376',
        '1AD' => 'E02004376',
        '1AE' => 'E02004368',
        '1AG' => 'E02004368',
        '1AN' => 'E02004368',
        '1AP' => 'E02004368',
        '1AR' => 'E02004368',
        '1AS' => 'E02004376',
        '1AT' => 'E02004368',
        '1AW' => 'E02004368',
        '1BA' => 'E02004376',
        '1BB' => 'E02004376',
        '1BD' => 'E02004376',
        '1BE' => 'E02004376',
        '1BF' => 'E02004376',
        '1BG' => 'E02004376',
        '1BH' => 'E02004376',
        '1BJ' => 'E02004376',
        '1BL' => 'E02004376',
        '1BN' => 'E02004376',
        '1BP' => 'E02004376',
        '1BQ' => 'E02004376',
        '1BS' => 'E02004376',
        '1BT' => 'E02004376',
        '1BU' => 'E02004376',
        '1BW' => 'E02004376',
        '1BX' => 'E02004375',
        '1BY' => 'E02004375',
        '1BZ' => 'E02004376',
        '1DA' => 'E02004376',
        '1DB' => 'E02004376',
        '1DD' => 'E02004376',
        '1DE' => 'E02004376',
        '1DF' => 'E02004376',
        '1DG' => 'E02004375',
        '1DH' => 'E02004375',
        '1DJ' => 'E02004376',
        '1DL' => 'E02004376',
        '1DN' => 'E02004376',
        '1DP' => 'E02004375',
        '1DQ' => 'E02004376',
        '1DR' => 'E02004375',
        '1DS' => 'E02004376',
        '1DT' => 'E02004376',
        '1DU' => 'E02004376',
        '1DW' => 'E02004376',
        '1DX' => 'E02004376',
        '1DY' => 'E02004376',
        '1DZ' => 'E02004376',
        '1EA' => 'E02004376',
        '1EB' => 'E02004376',
        '1ED' => 'E02004376',
        '1EE' => 'E02004376',
        '1EF' => 'E02004376',
        '1EG' => 'E02004368',
        '1EH' => 'E02004376',
        '1EJ' => 'E02004376',
        '1EL' => 'E02004376',
        '1EN' => 'E02004376',
        '1EP' => 'E02004376',
        '1EQ' => 'E02004376',
        '1ER' => 'E02004376',
        '1ES' => 'E02004376',
        '1ET' => 'E02004375',
        '1EU' => 'E02004378',
        '1EW' => 'E02004376',
        '1EX' => 'E02004375',
        '1EY' => 'E02004376',
        '1EZ' => 'E02004376',
        '1FT' => 'E02004376',
        '1FX' => 'E02004376',
        '1FY' => 'E02004376',
        '1FZ' => 'E02004376',
        '1GA' => 'E02004376',
        '1GB' => 'E02004376',
        '1GD' => 'E02004376',
        '1GE' => 'E02004376',
        '1GF' => 'E02004376',
        '1GG' => 'E02004376',
        '1GH' => 'E02004376',
        '1GJ' => 'E02004376',
        '1GL' => 'E02004376',
        '1GN' => 'E02004376',
        '1GP' => 'E02004376',
        '1GQ' => 'E02004376',
        '1GR' => 'E02004376',
        '1GS' => 'E02004376',
        '1GT' => 'E02004376',
        '1GU' => 'E02004376',
        '1GW' => 'E02004376',
        '1GX' => 'E02004376',
        '1GY' => 'E02004376',
        '1GZ' => 'E02004376',
        '1HA' => 'E02004376',
        '1HB' => 'E02004376',
        '1HD' => 'E02004376',
        '1HE' => 'E02004376',
        '1HF' => 'E02004376',
        '1HG' => 'E02004376',
        '1HH' => 'E02004376',
        '1HJ' => 'E02004376',
        '1HL' => 'E02004376',
        '1HN' => 'E02004376',
        '1HP' => 'E02004376',
        '1HQ' => 'E02004375',
        '1HR' => 'E02004376',
        '1HS' => 'E02004376',
        '1HT' => 'E02004376',
        '1HU' => 'E02004376',
        '1HW' => 'E02004376',
        '1HX' => 'E02004376',
        '1HY' => 'E02004376',
        '1HZ' => 'E02004376',
        '1JA' => 'E02004376',
        '1JB' => 'E02004376',
        '1JD' => 'E02004376',
        '1JE' => 'E02004376',
        '1JF' => 'E02004376',
        '1JG' => 'E02004376',
        '1JH' => 'E02004376',
        '1JJ' => 'E02004375',
        '1JL' => 'E02004376',
        '1JN' => 'E02004376',
        '1JP' => 'E02004376',
        '1JQ' => 'E02004376',
        '1JR' => 'E02004376',
        '1JS' => 'E02004376',
        '1JT' => 'E02004376',
        '1JU' => 'E02004376',
        '1JW' => 'E02004376',
        '1JX' => 'E02004376',
        '1JY' => 'E02004376',
        '1JZ' => 'E02004376',
        '1LA' => 'E02004376',
        '1LB' => 'E02004376',
        '1LD' => 'E02004376',
        '1LE' => 'E02004376',
        '1LF' => 'E02004376',
        '1LG' => 'E02004376',
        '1LH' => 'E02004376',
        '1LJ' => 'E02004376',
        '1LL' => 'E02004376',
        '1LN' => 'E02004376',
        '1LP' => 'E02004376',
        '1LQ' => 'E02004376',
        '1LR' => 'E02004376',
        '1LS' => 'E02004376',
        '1LT' => 'E02004376',
        '1LU' => 'E02004376',
        '1LW' => 'E02004376',
        '1LX' => 'E02004376',
        '1LY' => 'E02004376',
        '1LZ' => 'E02004376',
        '1NA' => 'E02004376',
        '1NB' => 'E02004376',
        '1ND' => 'E02004375',
        '1NE' => 'E02004376',
        '1NF' => 'E02004376',
        '1NG' => 'E02004376',
        '1NH' => 'E02004376',
        '1NJ' => 'E02004376',
        '1NL' => 'E02004376',
        '1NN' => 'E02004376',
        '1NP' => 'E02004375',
        '1NQ' => 'E02004376',
        '1NR' => 'E02004376',
        '1NS' => 'E02004376',
        '1NT' => 'E02004376',
        '1NU' => 'E02004376',
        '1NW' => 'E02004376',
        '1NX' => 'E02004376',
        '1NY' => 'E02004376',
        '1NZ' => 'E02004376',
        '1PA' => 'E02004376',
        '1PB' => 'E02004376',
        '1PD' => 'E02004376',
        '1PE' => 'E02004376',
        '1PF' => 'E02004376',
        '1PG' => 'E02004376',
        '1PH' => 'E02004376',
        '1PJ' => 'E02004376',
        '1PL' => 'E02004376',
        '1PN' => 'E02004376',
        '1PP' => 'E02004376',
        '1PQ' => 'E02004376',
        '1PR' => 'E02004376',
        '1PS' => 'E02004376',
        '1PT' => 'E02004376',
        '1PU' => 'E02004376',
        '1PW' => 'E02004375',
        '1PX' => 'E02004376',
        '1PY' => 'E02004376',
        '1PZ' => 'E02004376',
        '1QA' => 'E02004376',
        '1QB' => 'E02004376',
        '1QD' => 'E02004376',
        '1QE' => 'E02004376',
        '1QF' => 'E02004376',
        '1QG' => 'E02004376',
        '1QH' => 'E02004376',
        '1QJ' => 'E02004376',
        '1QL' => 'E02004376',
        '1QN' => 'E02004376',
        '1QP' => 'E02004376',
        '1QQ' => 'E02004376',
        '1QR' => 'E02004376',
        '1QS' => 'E02004376',
        '1QT' => 'E02004376',
        '1QU' => 'E02004376',
        '1QW' => 'E02004376',
        '1QX' => 'E02004375',
        '1QY' => 'E02004376',
        '1QZ' => 'E02004376',
        '1RA' => 'E02004376',
        '1RB' => 'E02004376',
        '1RD' => 'E02004376',
        '1RE' => 'E02004376',
        '1RF' => 'E02004376',
        '1RG' => 'E02004376',
        '1RH' => 'E02004376',
        '1RJ' => 'E02004376',
        '1RL' => 'E02004376',
        '1RN' => 'E02004376',
        '1RP' => 'E02004376',
        '1RQ' => 'E02004376',
        '1RR' => 'E02004376',
        '1RS' => 'E02004376',
        '1RT' => 'E02004376',
        '1RU' => 'E02004376',
        '1RW' => 'E02004376',
        '1RX' => 'E02004376',
        '1RY' => 'E02004376',
        '1RZ' => 'E02004376',
        '1SA' => 'E02004376',
        '1SB' => 'E02004376',
        '1SD' => 'E02004376',
        '1SE' => 'E02004376',
        '1SF' => 'E02004376',
        '1SG' => 'E02004376',
        '1SH' => 'E02004376',
        '1SJ' => 'E02004376',
        '1SL' => 'E02004376',
        '1SN' => 'E02004376',
        '1SP' => 'E02004376',
        '1SQ' => 'E02004376',
        '1SR' => 'E02004376',
        '1SS' => 'E02004376',
        '1ST' => 'E02004376',
        '1SU' => 'E02004376',
        '1SW' => 'E02004376',
        '1SX' => 'E02004376',
        '1SY' => 'E02004376',
        '1SZ' => 'E02004376',
        '1TA' => 'E02004375',
        '1TB' => 'E02004375',
        '1TD' => 'E02004375',
        '1TE' => 'E02004375',
        '1TF' => 'E02004375',
        '1TG' => 'E02004375',
        '1TH' => 'E02004375',
        '1TJ' => 'E02004375',
        '1TL' => 'E02004376',
        '1TN' => 'E02004375',
        '1TP' => 'E02004375',
        '1TQ' => 'E02004375',
        '1TR' => 'E02004375',
        '1TS' => 'E02004375',
        '1TT' => 'E02004375',
        '1TU' => 'E02004375',
        '1TW' => 'E02004375',
        '1TX' => 'E02004375',
        '1TY' => 'E02004375',
        '1TZ' => 'E02004375',
        '1UA' => 'E02004375',
        '1UB' => 'E02004375',
        '1UD' => 'E02004375',
        '1UE' => 'E02004375',
        '1UF' => 'E02004375',
        '1UG' => 'E02004375',
        '1UH' => 'E02004375',
        '1UJ' => 'E02004375',
        '1UL' => 'E02004375',
        '1UN' => 'E02004375',
        '1UP' => 'E02004375',
        '1UQ' => 'E02004375',
        '1UR' => 'E02004376',
        '1UT' => 'E02004375',
        '1UU' => 'E02004375',
        '1UW' => 'E02004375',
        '1UZ' => 'E02004373',
        '1WA' => 'E02004376',
        '1WB' => 'E02004376',
        '1WD' => 'E02004376',
        '1WE' => 'E02004376',
        '1WF' => 'E02004376',
        '1WG' => 'E02004376',
        '1WH' => 'E02004376',
        '1WJ' => 'E02004376',
        '1WL' => 'E02004376',
        '1WN' => 'E02004376',
        '1WP' => 'E02004376',
        '1WQ' => 'E02004373',
        '1WR' => 'E02004376',
        '1WS' => 'E02004376',
        '1WT' => 'E02004376',
        '1WU' => 'E02004376',
        '1WW' => 'E02004376',
        '1WX' => 'E02004376',
        '1WY' => 'E02004376',
        '1WZ' => 'E02004376',
        '1XA' => 'E02004368',
        '1XB' => 'E02004375',
        '1XD' => 'E02004370',
        '1XE' => 'E02004373',
        '1XF' => 'E02004373',
        '1XG' => 'E02004375',
        '1XH' => 'E02004376',
        '1XJ' => 'E02004376',
        '1XL' => 'E02004373',
        '1XN' => 'E02004373',
        '1XP' => 'E02004373',
        '1XQ' => 'E02004375',
        '1XR' => 'E02004373',
        '1XS' => 'E02004375',
        '1XT' => 'E02004375',
        '1XU' => 'E02004375',
        '1XW' => 'E02004376',
        '1XX' => 'E02004375',
        '1XY' => 'E02004373',
        '1XZ' => 'E02004375',
        '1YA' => 'E02004373',
        '1YB' => 'E02004373',
        '1YD' => 'E02004373',
        '1YE' => 'E02004375',
        '1YF' => 'E02004375',
        '1YG' => 'E02004375',
        '1YH' => 'E02004376',
        '1YJ' => 'E02004373',
        '1YL' => 'E02004376',
        '1YN' => 'E02004373',
        '1YP' => 'E02004373',
        '1YQ' => 'E02004376',
        '1YR' => 'E02004375',
        '1YS' => 'E02004370',
        '1YT' => 'E02004376',
        '1YU' => 'E02004370',
        '1YW' => 'E02004373',
        '1YX' => 'E02004370',
        '1YY' => 'E02004370',
        '1ZA' => 'E02004376',
        '1ZB' => 'E02004376',
        '1ZD' => 'E02004376',
        '1ZE' => 'E02004376',
        '1ZF' => 'E02004376',
        '1ZG' => 'E02004376',
        '1ZH' => 'E02004376',
        '1ZJ' => 'E02004376',
        '1ZL' => 'E02004373',
        '1ZN' => 'E02004376',
        '1ZP' => 'E02004376',
        '1ZQ' => 'E02004376',
        '1ZR' => 'E02004376',
        '1ZS' => 'E02004376',
        '1ZT' => 'E02004376',
        '1ZU' => 'E02004376',
        '1ZW' => 'E02004376',
        '1ZX' => 'E02004373',
        '1ZY' => 'E02004376',
        '1ZZ' => 'E02004376',
        '2AA' => 'E02004371',
        '2AB' => 'E02004371',
        '2AD' => 'E02004369',
        '2AE' => 'E02004369',
        '2AF' => 'E02004369',
        '2AG' => 'E02004369',
        '2AH' => 'E02004369',
        '2AJ' => 'E02004369',
        '2AL' => 'E02004369',
        '2AN' => 'E02004369',
        '2AP' => 'E02004369',
        '2AQ' => 'E02004372',
        '2AR' => 'E02004369',
        '2AS' => 'E02004369',
        '2AT' => 'E02004369',
        '2AU' => 'E02004369',
        '2AW' => 'E02004369',
        '2AX' => 'E02004369',
        '2AY' => 'E02004369',
        '2AZ' => 'E02004369',
        '2BA' => 'E02004369',
        '2BB' => 'E02004369',
        '2BD' => 'E02004369',
        '2BE' => 'E02004369',
        '2BF' => 'E02004369',
        '2BG' => 'E02004369',
        '2BH' => 'E02004372',
        '2BJ' => 'E02004372',
        '2BL' => 'E02004369',
        '2BN' => 'E02004372',
        '2BP' => 'E02004372',
        '2BQ' => 'E02004369',
        '2BS' => 'E02004375',
        '2BT' => 'E02004372',
        '2BU' => 'E02004372',
        '2BW' => 'E02004372',
        '2BX' => 'E02004372',
        '2BY' => 'E02004372',
        '2BZ' => 'E02004372',
        '2DA' => 'E02004372',
        '2DB' => 'E02004369',
        '2DD' => 'E02004372',
        '2DE' => 'E02004372',
        '2DF' => 'E02004372',
        '2DG' => 'E02004369',
        '2DH' => 'E02004369',
        '2DJ' => 'E02004372',
        '2DL' => 'E02004375',
        '2DN' => 'E02004369',
        '2DP' => 'E02004369',
        '2DQ' => 'E02004369',
        '2DR' => 'E02004372',
        '2DS' => 'E02004369',
        '2DT' => 'E02004369',
        '2DU' => 'E02004369',
        '2DW' => 'E02004369',
        '2DX' => 'E02004369',
        '2DY' => 'E02004369',
        '2DZ' => 'E02004369',
        '2EA' => 'E02004369',
        '2EB' => 'E02004372',
        '2ED' => 'E02004372',
        '2EE' => 'E02004375',
        '2EF' => 'E02004372',
        '2EG' => 'E02004372',
        '2EH' => 'E02004369',
        '2EJ' => 'E02004369',
        '2EL' => 'E02004369',
        '2EN' => 'E02004369',
        '2EP' => 'E02004375',
        '2EQ' => 'E02004372',
        '2ER' => 'E02004369',
        '2ES' => 'E02004375',
        '2ET' => 'E02004375',
        '2EU' => 'E02004369',
        '2EW' => 'E02004369',
        '2EX' => 'E02004369',
        '2EY' => 'E02004375',
        '2EZ' => 'E02004375',
        '2FA' => 'E02004369',
        '2FB' => 'E02004369',
        '2FD' => 'E02004369',
        '2FE' => 'E02004369',
        '2FH' => 'E02004372',
        '2FJ' => 'E02004369',
        '2FL' => 'E02004375',
        '2FN' => 'E02004369',
        '2FP' => 'E02004369',
        '2FQ' => 'E02004369',
        '2FR' => 'E02004369',
        '2FS' => 'E02004369',
        '2FT' => 'E02004396',
        '2FU' => 'E02004396',
        '2FW' => 'E02004369',
        '2FX' => 'E02004376',
        '2FY' => 'E02004369',
        '2GA' => 'E02004375',
        '2GT' => 'E02004369',
        '2HA' => 'E02004369',
        '2HB' => 'E02004369',
        '2HD' => 'E02004369',
        '2HE' => 'E02004369',
        '2HF' => 'E02004369',
        '2HG' => 'E02004369',
        '2HH' => 'E02004369',
        '2HJ' => 'E02004369',
        '2HL' => 'E02004369',
        '2HN' => 'E02004369',
        '2HP' => 'E02004369',
        '2HQ' => 'E02004369',
        '2HR' => 'E02004369',
        '2HS' => 'E02004369',
        '2HT' => 'E02004369',
        '2HU' => 'E02004369',
        '2HW' => 'E02004369',
        '2HX' => 'E02004369',
        '2HY' => 'E02004369',
        '2HZ' => 'E02004369',
        '2JA' => 'E02004369',
        '2JB' => 'E02004369',
        '2JD' => 'E02004369',
        '2JE' => 'E02004369',
        '2JF' => 'E02004369',
        '2JG' => 'E02004369',
        '2JH' => 'E02004369',
        '2JJ' => 'E02004369',
        '2JL' => 'E02004369',
        '2JN' => 'E02004369',
        '2JP' => 'E02004369',
        '2JQ' => 'E02004369',
        '2JR' => 'E02004369',
        '2JS' => 'E02004369',
        '2JT' => 'E02004369',
        '2JU' => 'E02004369',
        '2JW' => 'E02004369',
        '2JX' => 'E02004369',
        '2JY' => 'E02004369',
        '2JZ' => 'E02004369',
        '2LA' => 'E02004375',
        '2LB' => 'E02004375',
        '2LD' => 'E02004375',
        '2LE' => 'E02004375',
        '2LF' => 'E02004369',
        '2LG' => 'E02004375',
        '2LH' => 'E02004369',
        '2LJ' => 'E02004369',
        '2LL' => 'E02004375',
        '2LN' => 'E02004375',
        '2LP' => 'E02004375',
        '2LQ' => 'E02004375',
        '2LR' => 'E02004369',
        '2LS' => 'E02004372',
        '2LT' => 'E02004369',
        '2LU' => 'E02004369',
        '2LW' => 'E02004375',
        '2LX' => 'E02004375',
        '2LY' => 'E02004375',
        '2LZ' => 'E02004369',
        '2NA' => 'E02004369',
        '2NB' => 'E02004369',
        '2ND' => 'E02004373',
        '2NE' => 'E02004373',
        '2NF' => 'E02004373',
        '2NG' => 'E02004373',
        '2NH' => 'E02004373',
        '2NJ' => 'E02004373',
        '2NL' => 'E02004373',
        '2NN' => 'E02004373',
        '2NP' => 'E02004373',
        '2NQ' => 'E02004373',
        '2NR' => 'E02004369',
        '2NS' => 'E02004369',
        '2NT' => 'E02004369',
        '2NU' => 'E02004369',
        '2NW' => 'E02004373',
        '2NX' => 'E02004369',
        '2NY' => 'E02004369',
        '2NZ' => 'E02004369',
        '2PA' => 'E02004369',
        '2PB' => 'E02004369',
        '2PD' => 'E02004369',
        '2PE' => 'E02004369',
        '2PF' => 'E02004369',
        '2PG' => 'E02004369',
        '2PH' => 'E02004369',
        '2PJ' => 'E02004369',
        '2PL' => 'E02004369',
        '2PN' => 'E02004369',
        '2PP' => 'E02004369',
        '2PQ' => 'E02004369',
        '2PR' => 'E02004369',
        '2PS' => 'E02004369',
        '2PT' => 'E02004369',
        '2PU' => 'E02004369',
        '2PW' => 'E02004369',
        '2PX' => 'E02004369',
        '2PY' => 'E02004369',
        '2PZ' => 'E02004369',
        '2QA' => 'E02004369',
        '2QB' => 'E02004369',
        '2QD' => 'E02004369',
        '2QE' => 'E02004369',
        '2QF' => 'E02004369',
        '2QG' => 'E02004369',
        '2QH' => 'E02004369',
        '2QJ' => 'E02004369',
        '2QL' => 'E02004369',
        '2QN' => 'E02004369',
        '2QP' => 'E02004369',
        '2QQ' => 'E02004369',
        '2QR' => 'E02004369',
        '2QS' => 'E02004369',
        '2QT' => 'E02004369',
        '2QU' => 'E02004369',
        '2QW' => 'E02004369',
        '2QX' => 'E02004369',
        '2QY' => 'E02004369',
        '2QZ' => 'E02004369',
        '2RA' => 'E02004369',
        '2RB' => 'E02004369',
        '2RD' => 'E02004369',
        '2RE' => 'E02004369',
        '2RF' => 'E02004369',
        '2RG' => 'E02004369',
        '2RH' => 'E02004369',
        '2RJ' => 'E02004369',
        '2RL' => 'E02004369',
        '2RN' => 'E02004396',
        '2RP' => 'E02004369',
        '2RQ' => 'E02004369',
        '2RR' => 'E02004369',
        '2RS' => 'E02004369',
        '2RT' => 'E02004369',
        '2RU' => 'E02004369',
        '2RW' => 'E02004396',
        '2RX' => 'E02004396',
        '2RY' => 'E02004369',
        '2RZ' => 'E02004369',
        '2SA' => 'E02004369',
        '2SB' => 'E02004369',
        '2SD' => 'E02004376',
        '2SE' => 'E02004369',
        '2SF' => 'E02004369',
        '2SG' => 'E02004375',
        '2SH' => 'E02004369',
        '2SJ' => 'E02004369',
        '2SN' => 'E02004369',
        '2SQ' => 'E02004369',
        '2SW' => 'E02004369',
        '2SY' => 'E02004376',
        '2SZ' => 'E02004369',
        '2TA' => 'E02004369',
        '2TB' => 'E02004369',
        '2TE' => 'E02004369',
        '2TG' => 'E02004376',
        '2TH' => 'E02004372',
        '2TR' => 'E02004369',
        '2TT' => 'E02004372',
        '2UA' => 'E02004369',
        '2UB' => 'E02004369',
        '2UD' => 'E02004369',
        '2UE' => 'E02004369',
        '2UF' => 'E02004369',
        '2UG' => 'E02004369',
        '2UL' => 'E02004369',
        '2UP' => 'E02004376',
        '2UQ' => 'E02004369',
        '2UR' => 'E02004376',
        '2UT' => 'E02004369',
        '2UX' => 'E02004369',
        '2UZ' => 'E02004369',
        '2WA' => 'E02004376',
        '2WB' => 'E02004376',
        '2WD' => 'E02004376',
        '2WE' => 'E02004376',
        '2WF' => 'E02004376',
        '2WG' => 'E02004376',
        '2WH' => 'E02004376',
        '2WJ' => 'E02004376',
        '2WT' => 'E02004376',
        '2WY' => 'E02004376',
        '2WZ' => 'E02004376',
        '2XA' => 'E02004369',
        '2XB' => 'E02004376',
        '2XN' => 'E02004376',
        '2XT' => 'E02004369',
        '2YA' => 'E02004369',
        '2YB' => 'E02004376',
        '2YJ' => 'E02004369',
        '2YP' => 'E02004376',
        '2YQ' => 'E02004376',
        '2YW' => 'E02004369',
        '2ZA' => 'E02004376',
        '2ZB' => 'E02004376',
        '2ZD' => 'E02004376',
        '2ZE' => 'E02004376',
        '2ZF' => 'E02004376',
        '2ZG' => 'E02004376',
        '2ZH' => 'E02004369',
        '2ZJ' => 'E02004369',
        '2ZL' => 'E02004369',
        '2ZN' => 'E02004369',
        '2ZP' => 'E02004369',
        '2ZQ' => 'E02004369',
        '2ZR' => 'E02004369',
        '2ZT' => 'E02004376',
        '2ZU' => 'E02004369',
        '2ZW' => 'E02004369',
        '2ZX' => 'E02004369',
        '2ZY' => 'E02004369',
        '2ZZ' => 'E02004369',
        '3AA' => 'E02004376',
        '3AB' => 'E02004376',
        '3AD' => 'E02004376',
        '3AE' => 'E02004376',
        '3AF' => 'E02004376',
        '3AG' => 'E02004374',
        '3AH' => 'E02004374',
        '3AJ' => 'E02004374',
        '3AL' => 'E02004374',
        '3AN' => 'E02004374',
        '3AP' => 'E02004374',
        '3AQ' => 'E02004374',
        '3AR' => 'E02004374',
        '3AS' => 'E02004374',
        '3AT' => 'E02004374',
        '3AU' => 'E02004374',
        '3AW' => 'E02004374',
        '3AX' => 'E02004376',
        '3AY' => 'E02004374',
        '3AZ' => 'E02004374',
        '3BA' => 'E02004374',
        '3BB' => 'E02004374',
        '3BD' => 'E02004374',
        '3BE' => 'E02004374',
        '3BF' => 'E02004376',
        '3BG' => 'E02004374',
        '3BH' => 'E02004374',
        '3BJ' => 'E02004374',
        '3BL' => 'E02004374',
        '3BN' => 'E02004374',
        '3BP' => 'E02004374',
        '3BQ' => 'E02004374',
        '3BS' => 'E02004374',
        '3BT' => 'E02004374',
        '3BU' => 'E02004374',
        '3BW' => 'E02004374',
        '3BX' => 'E02004374',
        '3BY' => 'E02004374',
        '3BZ' => 'E02004374',
        '3DA' => 'E02004374',
        '3DB' => 'E02004374',
        '3DD' => 'E02004374',
        '3DE' => 'E02004374',
        '3DF' => 'E02004374',
        '3DG' => 'E02004376',
        '3DH' => 'E02004374',
        '3DJ' => 'E02004374',
        '3DL' => 'E02004374',
        '3DN' => 'E02004374',
        '3DP' => 'E02004374',
        '3DQ' => 'E02004372',
        '3DS' => 'E02004376',
        '3DT' => 'E02004376',
        '3DU' => 'E02004376',
        '3DW' => 'E02004374',
        '3DX' => 'E02004376',
        '3DY' => 'E02004376',
        '3DZ' => 'E02004376',
        '3EA' => 'E02004374',
        '3EB' => 'E02004374',
        '3ED' => 'E02004374',
        '3EE' => 'E02004374',
        '3EF' => 'E02004374',
        '3EG' => 'E02004374',
        '3EH' => 'E02004374',
        '3EJ' => 'E02004374',
        '3EL' => 'E02004374',
        '3EN' => 'E02004374',
        '3EP' => 'E02004374',
        '3EQ' => 'E02004374',
        '3ER' => 'E02004374',
        '3ES' => 'E02004374',
        '3ET' => 'E02004374',
        '3EU' => 'E02004374',
        '3EW' => 'E02004374',
        '3EX' => 'E02004374',
        '3EY' => 'E02004374',
        '3EZ' => 'E02004374',
        '3FA' => 'E02004372',
        '3FB' => 'E02004372',
        '3FD' => 'E02004372',
        '3FE' => 'E02004372',
        '3FH' => 'E02004372',
        '3FJ' => 'E02004374',
        '3FL' => 'E02004376',
        '3FN' => 'E02004372',
        '3FP' => 'E02004372',
        '3FQ' => 'E02004372',
        '3FR' => 'E02004372',
        '3FW' => 'E02004372',
        '3GR' => 'E02004376',
        '3HA' => 'E02004374',
        '3HB' => 'E02004374',
        '3HD' => 'E02004374',
        '3HE' => 'E02004374',
        '3HF' => 'E02004374',
        '3HG' => 'E02004374',
        '3HH' => 'E02004374',
        '3HJ' => 'E02004374',
        '3HL' => 'E02004374',
        '3HN' => 'E02004374',
        '3HP' => 'E02004374',
        '3HQ' => 'E02004374',
        '3HR' => 'E02004374',
        '3HS' => 'E02004374',
        '3HT' => 'E02004374',
        '3HU' => 'E02004374',
        '3HW' => 'E02004374',
        '3HX' => 'E02004374',
        '3HY' => 'E02004374',
        '3HZ' => 'E02004374',
        '3JA' => 'E02004374',
        '3JB' => 'E02004374',
        '3JD' => 'E02004374',
        '3JE' => 'E02004374',
        '3JF' => 'E02004374',
        '3JG' => 'E02004376',
        '3JH' => 'E02004376',
        '3JJ' => 'E02004376',
        '3JL' => 'E02004376',
        '3JN' => 'E02004376',
        '3JP' => 'E02004376',
        '3JQ' => 'E02004376',
        '3JR' => 'E02004376',
        '3JS' => 'E02004376',
        '3JT' => 'E02004374',
        '3JU' => 'E02004376',
        '3JW' => 'E02004376',
        '3JX' => 'E02004376',
        '3JY' => 'E02004376',
        '3JZ' => 'E02004376',
        '3LA' => 'E02004376',
        '3LB' => 'E02004376',
        '3LD' => 'E02004374',
        '3LE' => 'E02004374',
        '3LF' => 'E02004374',
        '3LG' => 'E02004374',
        '3LH' => 'E02004375',
        '3LJ' => 'E02004376',
        '3LL' => 'E02004376',
        '3LN' => 'E02004376',
        '3LP' => 'E02004376',
        '3LQ' => 'E02004374',
        '3LR' => 'E02004376',
        '3LS' => 'E02004376',
        '3LT' => 'E02004376',
        '3LU' => 'E02004376',
        '3LW' => 'E02004376',
        '3LX' => 'E02004376',
        '3LY' => 'E02004376',
        '3LZ' => 'E02004376',
        '3NA' => 'E02004376',
        '3NB' => 'E02004374',
        '3ND' => 'E02004374',
        '3NE' => 'E02004374',
        '3NF' => 'E02004374',
        '3NG' => 'E02004374',
        '3NH' => 'E02004374',
        '3NJ' => 'E02004372',
        '3NL' => 'E02004372',
        '3NN' => 'E02004372',
        '3NP' => 'E02004372',
        '3NQ' => 'E02004376',
        '3NR' => 'E02004372',
        '3NS' => 'E02004374',
        '3NT' => 'E02004372',
        '3NU' => 'E02004372',
        '3NW' => 'E02004372',
        '3NX' => 'E02004372',
        '3NY' => 'E02004372',
        '3NZ' => 'E02004372',
        '3PA' => 'E02004374',
        '3PB' => 'E02004374',
        '3PD' => 'E02004374',
        '3PE' => 'E02004372',
        '3PF' => 'E02004372',
        '3PG' => 'E02004374',
        '3PH' => 'E02004372',
        '3PJ' => 'E02004372',
        '3PL' => 'E02004372',
        '3PN' => 'E02004372',
        '3PP' => 'E02004369',
        '3PQ' => 'E02004376',
        '3PR' => 'E02004369',
        '3PS' => 'E02004372',
        '3PT' => 'E02004372',
        '3PU' => 'E02004372',
        '3PW' => 'E02004376',
        '3PX' => 'E02004372',
        '3PY' => 'E02004372',
        '3PZ' => 'E02004372',
        '3QA' => 'E02004372',
        '3QB' => 'E02004372',
        '3QD' => 'E02004372',
        '3QE' => 'E02004372',
        '3QF' => 'E02004372',
        '3QG' => 'E02004372',
        '3QH' => 'E02004372',
        '3QJ' => 'E02004372',
        '3QL' => 'E02004372',
        '3QN' => 'E02004372',
        '3QP' => 'E02004372',
        '3QQ' => 'E02004372',
        '3QT' => 'E02004374',
        '3QU' => 'E02004376',
        '3QW' => 'E02004372',
        '3QZ' => 'E02004376',
        '3RA' => 'E02004376',
        '3RB' => 'E02004376',
        '3RD' => 'E02004376',
        '3RE' => 'E02004376',
        '3RF' => 'E02004376',
        '3RG' => 'E02004376',
        '3RH' => 'E02004376',
        '3RJ' => 'E02004376',
        '3RL' => 'E02004376',
        '3RN' => 'E02004376',
        '3RP' => 'E02004376',
        '3RQ' => 'E02004376',
        '3RR' => 'E02004376',
        '3RS' => 'E02004376',
        '3RT' => 'E02004376',
        '3RU' => 'E02004376',
        '3RW' => 'E02004376',
        '3RX' => 'E02004376',
        '3RY' => 'E02004376',
        '3RZ' => 'E02004376',
        '3SA' => 'E02004372',
        '3SB' => 'E02004372',
        '3SD' => 'E02004372',
        '3SE' => 'E02004372',
        '3SF' => 'E02004372',
        '3SG' => 'E02004372',
        '3SH' => 'E02004372',
        '3SJ' => 'E02004372',
        '3SL' => 'E02004372',
        '3SN' => 'E02004374',
        '3SP' => 'E02004374',
        '3SQ' => 'E02004372',
        '3SR' => 'E02004374',
        '3SS' => 'E02004374',
        '3ST' => 'E02004372',
        '3SU' => 'E02004372',
        '3SW' => 'E02004374',
        '3TA' => 'E02004372',
        '3TB' => 'E02004372',
        '3TD' => 'E02004372',
        '3TE' => 'E02004372',
        '3TF' => 'E02004372',
        '3TG' => 'E02004372',
        '3TH' => 'E02004372',
        '3TJ' => 'E02004372',
        '3TL' => 'E02004372',
        '3TN' => 'E02004372',
        '3TP' => 'E02004372',
        '3TQ' => 'E02004372',
        '3TR' => 'E02004372',
        '3TS' => 'E02004372',
        '3TT' => 'E02004372',
        '3TU' => 'E02004372',
        '3TW' => 'E02004372',
        '3TX' => 'E02004372',
        '3TY' => 'E02004372',
        '3TZ' => 'E02004372',
        '3UA' => 'E02004372',
        '3UB' => 'E02004372',
        '3UD' => 'E02004374',
        '3UE' => 'E02004376',
        '3UG' => 'E02004376',
        '3UH' => 'E02004376',
        '3UN' => 'E02004374',
        '3UP' => 'E02004374',
        '3UT' => 'E02004374',
        '3UU' => 'E02004374',
        '3UX' => 'E02004376',
        '3UY' => 'E02004376',
        '3UZ' => 'E02004374',
        '3WA' => 'E02004376',
        '3WB' => 'E02004376',
        '3WD' => 'E02004376',
        '3WE' => 'E02004376',
        '3WF' => 'E02004376',
        '3WG' => 'E02004376',
        '3WH' => 'E02004376',
        '3WJ' => 'E02004376',
        '3WL' => 'E02004376',
        '3WN' => 'E02004376',
        '3WP' => 'E02004376',
        '3WQ' => 'E02004376',
        '3WR' => 'E02004376',
        '3WS' => 'E02004376',
        '3WT' => 'E02004376',
        '3WU' => 'E02004376',
        '3WW' => 'E02004376',
        '3WX' => 'E02004376',
        '3WY' => 'E02004376',
        '3WZ' => 'E02004374',
        '3XA' => 'E02004376',
        '3XB' => 'E02004376',
        '3XD' => 'E02004376',
        '3XE' => 'E02004374',
        '3XF' => 'E02004376',
        '3XP' => 'E02004376',
        '3XQ' => 'E02004376',
        '3XY' => 'E02004376',
        '3XZ' => 'E02004376',
        '3YB' => 'E02004376',
        '3YF' => 'E02004376',
        '3YG' => 'E02004376',
        '3YL' => 'E02004376',
        '3YP' => 'E02004376',
        '3YQ' => 'E02004376',
        '3YS' => 'E02004376',
        '3YT' => 'E02004376',
        '3YX' => 'E02004376',
        '3YY' => 'E02004376',
        '3YZ' => 'E02004376',
        '3ZA' => 'E02004374',
        '3ZB' => 'E02004374',
        '3ZD' => 'E02004374',
        '3ZE' => 'E02004376',
        '3ZF' => 'E02004374',
        '3ZG' => 'E02004376',
        '3ZH' => 'E02004376',
        '3ZJ' => 'E02004376',
        '3ZL' => 'E02004376',
        '3ZN' => 'E02004376',
        '3ZP' => 'E02004376',
        '3ZQ' => 'E02004376',
        '3ZR' => 'E02004374',
        '3ZS' => 'E02004374',
        '3ZT' => 'E02004374',
        '3ZU' => 'E02004374',
        '3ZW' => 'E02004374',
        '3ZX' => 'E02004374',
        '3ZY' => 'E02004376',
        '3ZZ' => 'E02004376',
        '9AA' => 'E02004376',
        '9AB' => 'E02004376',
        '9AD' => 'E02004376',
        '9AE' => 'E02004376',
        '9AG' => 'E02004376',
        '9AH' => 'E02004376',
        '9AJ' => 'E02004376',
        '9AL' => 'E02004376',
        '9AN' => 'E02004376',
        '9AP' => 'E02004376',
        '9AQ' => 'E02004376',
        '9AR' => 'E02004376',
        '9AS' => 'E02004376',
        '9AT' => 'E02004376',
        '9AU' => 'E02004376',
        '9AW' => 'E02004376',
        '9AX' => 'E02004376',
        '9AY' => 'E02004376',
        '9AZ' => 'E02004376',
        '9BA' => 'E02004376',
        '9BB' => 'E02004376',
        '9BD' => 'E02004376',
        '9BE' => 'E02004376',
        '9BF' => 'E02004376',
        '9BG' => 'E02004376',
        '9BH' => 'E02004376',
        '9BJ' => 'E02004376',
        '9BL' => 'E02004376',
        '9BN' => 'E02004376',
        '9BP' => 'E02004376',
        '9BQ' => 'E02004376',
        '9BR' => 'E02004376',
        '9BS' => 'E02004376',
        '9BT' => 'E02004376',
        '9BU' => 'E02004376',
        '9BW' => 'E02004376',
        '9BX' => 'E02004376',
        '9BY' => 'E02004376',
        '9BZ' => 'E02004376',
        '9DA' => 'E02004376',
        '9DB' => 'E02004376',
        '9DD' => 'E02004376',
        '9DE' => 'E02004376',
        '9DF' => 'E02004376',
        '9DG' => 'E02004376',
        '9DH' => 'E02004376',
        '9DJ' => 'E02004376',
        '9DL' => 'E02004376',
        '9DN' => 'E02004376',
        '9DP' => 'E02004376',
        '9DQ' => 'E02004376',
        '9DR' => 'E02004376',
        '9DS' => 'E02004376',
        '9DT' => 'E02004376',
        '9DU' => 'E02004376',
        '9DW' => 'E02004376',
        '9DX' => 'E02004376',
        '9DY' => 'E02004376',
        '9DZ' => 'E02004376',
        '9EA' => 'E02004376',
        '9EB' => 'E02004376',
        '9ED' => 'E02004376',
        '9EE' => 'E02004376',
        '9EF' => 'E02004376',
        '9EG' => 'E02004376',
        '9EH' => 'E02004376',
        '9EJ' => 'E02004376',
        '9EL' => 'E02004376',
        '9EN' => 'E02004376',
        '9EP' => 'E02004376',
        '9EQ' => 'E02004376',
        '9ER' => 'E02004376',
        '9ES' => 'E02004376',
        '9ET' => 'E02004376',
        '9EU' => 'E02004376',
        '9EW' => 'E02004376',
        '9EX' => 'E02004376',
        '9EY' => 'E02004376',
        '9EZ' => 'E02004376',
        '9FA' => 'E02004376',
        '9FB' => 'E02004376',
        '9FD' => 'E02004376',
        '9FE' => 'E02004376',
        '9FF' => 'E02004376',
        '9FG' => 'E02004376',
        '9FH' => 'E02004376',
        '9FJ' => 'E02004376',
        '9FL' => 'E02004376',
        '9FN' => 'E02004376',
        '9FP' => 'E02004376',
        '9FQ' => 'E02004376',
        '9FR' => 'E02004376',
        '9FS' => 'E02004376',
        '9FT' => 'E02004376',
        '9FU' => 'E02004376',
        '9FW' => 'E02004376',
        '9FX' => 'E02004376',
        '9FY' => 'E02004376',
        '9FZ' => 'E02004376',
        '9GA' => 'E02004376',
        '9GB' => 'E02004376',
        '9GD' => 'E02004376',
        '9GE' => 'E02004376',
        '9GF' => 'E02004376',
        '9GG' => 'E02004376',
        '9GH' => 'E02004376',
        '9GJ' => 'E02004376',
        '9GL' => 'E02004376',
        '9GN' => 'E02004376',
        '9GP' => 'E02004376',
        '9GQ' => 'E02004376',
        '9GR' => 'E02004376',
        '9GS' => 'E02004376',
        '9GT' => 'E02004376',
        '9GU' => 'E02004376',
        '9GW' => 'E02004376',
        '9GX' => 'E02004376',
        '9GY' => 'E02004376',
        '9GZ' => 'E02004376',
        '9HA' => 'E02004376',
        '9HB' => 'E02004376',
        '9HD' => 'E02004376',
        '9HE' => 'E02004376',
        '9HG' => 'E02004376',
        '9HH' => 'E02004376',
        '9HJ' => 'E02004376',
        '9HL' => 'E02004376',
        '9HN' => 'E02004376',
        '9HP' => 'E02004376',
        '9HQ' => 'E02004376',
        '9HR' => 'E02004376',
        '9HS' => 'E02004376',
        '9HT' => 'E02004376',
        '9HU' => 'E02004376',
        '9HW' => 'E02004376',
        '9HX' => 'E02004376',
        '9HY' => 'E02004376',
        '9HZ' => 'E02004376',
        '9JA' => 'E02004376',
        '9JB' => 'E02004376',
        '9JD' => 'E02004376',
        '9JE' => 'E02004376',
        '9JF' => 'E02004376',
        '9JG' => 'E02004376',
        '9JH' => 'E02004376',
        '9JJ' => 'E02004376',
        '9JL' => 'E02004376',
        '9JN' => 'E02004376',
        '9JQ' => 'E02004376',
        '9JR' => 'E02004376',
        '9JS' => 'E02004376',
        '9JT' => 'E02004376',
        '9JU' => 'E02004376',
        '9JW' => 'E02004376',
        '9JX' => 'E02004376',
        '9JY' => 'E02004376',
        '9JZ' => 'E02004376',
        '9LA' => 'E02004376',
        '9LB' => 'E02004376',
        '9LD' => 'E02004376',
        '9LE' => 'E02004376',
        '9LF' => 'E02004376',
        '9LG' => 'E02004376',
        '9LH' => 'E02004376',
        '9LJ' => 'E02004376',
        '9LL' => 'E02004376',
        '9LN' => 'E02004376',
        '9SA' => 'E02004376',
        '9SB' => 'E02004376',
        '9SD' => 'E02004376',
        '9SE' => 'E02004376',
        '9SF' => 'E02004376',
        '9SG' => 'E02004376',
        '9SH' => 'E02004376',
        '9SJ' => 'E02004376',
        '9SL' => 'E02004376',
        '9SN' => 'E02004376',
        '9SP' => 'E02004376',
        '9SQ' => 'E02004376',
        '9SR' => 'E02004376',
        '9SS' => 'E02004376',
        '9ST' => 'E02004376',
        '9SU' => 'E02004376',
        '9SX' => 'E02004376',
        '9UF' => 'E02004376',
        '9ZY' => 'E02004376',
        '9ZZ' => 'E02004376',
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
