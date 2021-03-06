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
final class GL14
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02004630',
        '1AB' => 'E02004630',
        '1AD' => 'E02004630',
        '1AE' => 'E02004630',
        '1AF' => 'E02004630',
        '1AG' => 'E02004630',
        '1AH' => 'E02004630',
        '1AJ' => 'E02004630',
        '1AL' => 'E02004630',
        '1AN' => 'E02004630',
        '1AP' => 'E02004630',
        '1AQ' => 'E02004630',
        '1AR' => 'E02004630',
        '1AS' => 'E02004630',
        '1AT' => 'E02004630',
        '1AU' => 'E02004630',
        '1AW' => 'E02004630',
        '1AX' => 'E02004630',
        '1AY' => 'E02004630',
        '1AZ' => 'E02004630',
        '1BA' => 'E02004630',
        '1BB' => 'E02004630',
        '1BD' => 'E02004630',
        '1BE' => 'E02004630',
        '1BG' => 'E02004630',
        '1BH' => 'E02004630',
        '1BJ' => 'E02004630',
        '1BL' => 'E02004630',
        '1BN' => 'E02004630',
        '1BP' => 'E02004630',
        '1BQ' => 'E02004630',
        '1BS' => 'E02004630',
        '1BT' => 'E02004630',
        '1BU' => 'E02004630',
        '1BW' => 'E02004630',
        '1BX' => 'E02004630',
        '1BY' => 'E02004630',
        '1BZ' => 'E02004630',
        '1DA' => 'E02004630',
        '1DB' => 'E02004630',
        '1DD' => 'E02004630',
        '1DE' => 'E02004630',
        '1DF' => 'E02004630',
        '1DG' => 'E02004630',
        '1DH' => 'E02004630',
        '1DJ' => 'E02004630',
        '1DL' => 'E02004630',
        '1DN' => 'E02004630',
        '1DP' => 'E02004630',
        '1DQ' => 'E02004630',
        '1DR' => 'E02004630',
        '1DS' => 'E02004630',
        '1DT' => 'E02004630',
        '1DU' => 'E02004630',
        '1DW' => 'E02004630',
        '1DX' => 'E02004630',
        '1DY' => 'E02004630',
        '1DZ' => 'E02004630',
        '1EA' => 'E02004630',
        '1EB' => 'E02004630',
        '1ED' => 'E02004630',
        '1EE' => 'E02004630',
        '1EF' => 'E02004630',
        '1EG' => 'E02004630',
        '1EH' => 'E02004630',
        '1EJ' => 'E02004630',
        '1EL' => 'E02004630',
        '1EN' => 'E02004630',
        '1EP' => 'E02004630',
        '1EQ' => 'E02004630',
        '1ER' => 'E02004630',
        '1ES' => 'E02004630',
        '1ET' => 'E02004630',
        '1EU' => 'E02004630',
        '1EW' => 'E02004630',
        '1EX' => 'E02004630',
        '1HG' => 'E02004630',
        '1HH' => 'E02004630',
        '1HJ' => 'E02004630',
        '1HL' => 'E02004630',
        '1HN' => 'E02004630',
        '1HP' => 'E02004630',
        '1HQ' => 'E02004630',
        '1HR' => 'E02004630',
        '1HW' => 'E02004630',
        '1JA' => 'E02004630',
        '1JB' => 'E02004630',
        '1JD' => 'E02004630',
        '1JE' => 'E02004630',
        '1JF' => 'E02004630',
        '1JG' => 'E02004630',
        '1JH' => 'E02004630',
        '1JJ' => 'E02004630',
        '1JL' => 'E02004630',
        '1JN' => 'E02004630',
        '1JP' => 'E02004630',
        '1JQ' => 'E02004630',
        '1JR' => 'E02004630',
        '1JS' => 'E02004630',
        '1JT' => 'E02004629',
        '1JU' => 'E02004630',
        '1JW' => 'E02004630',
        '1JX' => 'E02004629',
        '1JY' => 'E02004629',
        '1JZ' => 'E02004629',
        '1LA' => 'E02004629',
        '1LB' => 'E02004629',
        '1LD' => 'E02004629',
        '1LE' => 'E02004629',
        '1LF' => 'E02004630',
        '1LG' => 'E02004630',
        '1LH' => 'E02004630',
        '1LN' => 'E02004630',
        '1LP' => 'E02004630',
        '1LQ' => 'E02004630',
        '1LR' => 'E02004630',
        '1LS' => 'E02004630',
        '1LT' => 'E02004630',
        '1LU' => 'E02004630',
        '1LW' => 'E02004630',
        '1LX' => 'E02004630',
        '1LY' => 'E02004630',
        '1LZ' => 'E02004630',
        '1NA' => 'E02004630',
        '1NB' => 'E02004630',
        '1ND' => 'E02004630',
        '1NE' => 'E02004630',
        '1NF' => 'E02004630',
        '1NG' => 'E02004630',
        '1NH' => 'E02004630',
        '1PA' => 'E02004630',
        '1PB' => 'E02004630',
        '1PD' => 'E02004630',
        '1PE' => 'E02004630',
        '1PF' => 'E02004630',
        '1PG' => 'E02004630',
        '1PH' => 'E02004630',
        '1PJ' => 'E02004630',
        '1PL' => 'E02004630',
        '1PN' => 'E02004630',
        '1PP' => 'E02004630',
        '1PQ' => 'E02004630',
        '1PR' => 'E02004630',
        '1PS' => 'E02004630',
        '1PT' => 'E02004630',
        '1PU' => 'E02004630',
        '1PW' => 'E02004630',
        '1PX' => 'E02004630',
        '1QA' => 'E02004630',
        '1QB' => 'E02004630',
        '1QD' => 'E02004630',
        '1QE' => 'E02004630',
        '1QF' => 'E02004630',
        '1QG' => 'E02004630',
        '1QH' => 'E02004630',
        '1QJ' => 'E02004630',
        '1QL' => 'E02004630',
        '1QN' => 'E02004630',
        '1QP' => 'E02004630',
        '1QQ' => 'E02004630',
        '1QR' => 'E02004630',
        '1QS' => 'E02004630',
        '1QT' => 'E02004630',
        '1QU' => 'E02004630',
        '1QW' => 'E02004630',
        '1QX' => 'E02004630',
        '1QY' => 'E02004630',
        '1QZ' => 'E02004630',
        '1RA' => 'E02004630',
        '1RB' => 'E02004630',
        '1RD' => 'E02004630',
        '1RE' => 'E02004630',
        '1RF' => 'E02004630',
        '1RG' => 'E02004630',
        '1RQ' => 'E02004630',
        '1SA' => 'E02004630',
        '1WA' => 'E02004629',
        '1WZ' => 'E02004629',
        '1YA' => 'E02004629',
        '1YB' => 'E02004629',
        '1YD' => 'E02004629',
        '1YE' => 'E02004629',
        '1YF' => 'E02004630',
        '1ZT' => 'E02004629',
        '2AA' => 'E02004629',
        '2AB' => 'E02004629',
        '2AD' => 'E02004629',
        '2AE' => 'E02004629',
        '2AF' => 'E02004629',
        '2AG' => 'E02004629',
        '2AH' => 'E02004629',
        '2AJ' => 'E02004629',
        '2AL' => 'E02004629',
        '2AN' => 'E02004629',
        '2AP' => 'E02004629',
        '2AQ' => 'E02004629',
        '2AR' => 'E02004629',
        '2AS' => 'E02004629',
        '2AT' => 'E02004629',
        '2AU' => 'E02004629',
        '2AW' => 'E02004629',
        '2AX' => 'E02004629',
        '2AY' => 'E02004629',
        '2AZ' => 'E02004629',
        '2BA' => 'E02004629',
        '2BB' => 'E02004629',
        '2BD' => 'E02004629',
        '2BE' => 'E02004629',
        '2BG' => 'E02004629',
        '2BH' => 'E02004629',
        '2BJ' => 'E02004629',
        '2BL' => 'E02004629',
        '2BN' => 'E02004629',
        '2BP' => 'E02004629',
        '2BQ' => 'E02004629',
        '2BS' => 'E02004629',
        '2BT' => 'E02004629',
        '2BU' => 'E02004629',
        '2BW' => 'E02004629',
        '2BX' => 'E02004629',
        '2BY' => 'E02004629',
        '2BZ' => 'E02004629',
        '2DA' => 'E02004629',
        '2DB' => 'E02004629',
        '2DD' => 'E02004629',
        '2DE' => 'E02004629',
        '2DF' => 'E02004629',
        '2DG' => 'E02004629',
        '2DH' => 'E02004629',
        '2DJ' => 'E02004629',
        '2DL' => 'E02004629',
        '2DN' => 'E02004629',
        '2DP' => 'E02004629',
        '2DQ' => 'E02004629',
        '2DR' => 'E02004629',
        '2DS' => 'E02004629',
        '2DT' => 'E02004629',
        '2DU' => 'E02004629',
        '2DW' => 'E02004629',
        '2DX' => 'E02004629',
        '2DY' => 'E02004629',
        '2DZ' => 'E02004629',
        '2EA' => 'E02004629',
        '2EB' => 'E02004629',
        '2ED' => 'E02004629',
        '2EE' => 'E02004629',
        '2EF' => 'E02004629',
        '2EG' => 'E02004629',
        '2EH' => 'E02004629',
        '2EJ' => 'E02004629',
        '2EL' => 'E02004629',
        '2EN' => 'E02004629',
        '2EP' => 'E02004629',
        '2EQ' => 'E02004629',
        '2ER' => 'E02004629',
        '2ES' => 'E02004629',
        '2ET' => 'E02004629',
        '2EU' => 'E02004629',
        '2EW' => 'E02004629',
        '2EX' => 'E02004629',
        '2EY' => 'E02004629',
        '2EZ' => 'E02004629',
        '2FA' => 'E02004629',
        '2FB' => 'E02004629',
        '2FD' => 'E02004629',
        '2GA' => 'E02004629',
        '2GB' => 'E02004629',
        '2GD' => 'E02004629',
        '2GE' => 'E02004629',
        '2GF' => 'E02004629',
        '2GH' => 'E02004629',
        '2GJ' => 'E02004629',
        '2HA' => 'E02004629',
        '2HB' => 'E02004629',
        '2HD' => 'E02004629',
        '2HE' => 'E02004629',
        '2HF' => 'E02004629',
        '2HG' => 'E02004629',
        '2HH' => 'E02004629',
        '2HJ' => 'E02004629',
        '2HL' => 'E02004629',
        '2HN' => 'E02004629',
        '2HP' => 'E02004629',
        '2HQ' => 'E02004629',
        '2HR' => 'E02004629',
        '2HS' => 'E02004629',
        '2HT' => 'E02004629',
        '2HU' => 'E02004629',
        '2HW' => 'E02004629',
        '2HX' => 'E02004629',
        '2HY' => 'E02004629',
        '2HZ' => 'E02004629',
        '2JA' => 'E02004629',
        '2JB' => 'E02004629',
        '2JD' => 'E02004629',
        '2JE' => 'E02004629',
        '2JF' => 'E02004629',
        '2JG' => 'E02004629',
        '2JH' => 'E02004629',
        '2JJ' => 'E02004629',
        '2JL' => 'E02004629',
        '2JN' => 'E02004629',
        '2JP' => 'E02004629',
        '2JQ' => 'E02004629',
        '2JR' => 'E02004629',
        '2JS' => 'E02004629',
        '2JT' => 'E02004629',
        '2JU' => 'E02004629',
        '2JW' => 'E02004629',
        '2JX' => 'E02004629',
        '2JY' => 'E02004629',
        '2JZ' => 'E02004629',
        '2LA' => 'E02004629',
        '2LB' => 'E02004629',
        '2LD' => 'E02004629',
        '2LE' => 'E02004629',
        '2LF' => 'E02004629',
        '2LG' => 'E02004629',
        '2LH' => 'E02004629',
        '2LJ' => 'E02004629',
        '2LL' => 'E02004629',
        '2LN' => 'E02004629',
        '2LP' => 'E02004629',
        '2LQ' => 'E02004629',
        '2LR' => 'E02004629',
        '2LS' => 'E02004629',
        '2LT' => 'E02004629',
        '2LU' => 'E02004629',
        '2LW' => 'E02004629',
        '2LX' => 'E02004629',
        '2LY' => 'E02004629',
        '2LZ' => 'E02004629',
        '2NA' => 'E02004629',
        '2NB' => 'E02004629',
        '2ND' => 'E02004629',
        '2NE' => 'E02004629',
        '2NF' => 'E02004629',
        '2NG' => 'E02004629',
        '2NH' => 'E02004629',
        '2NJ' => 'E02004629',
        '2NL' => 'E02004629',
        '2NN' => 'E02004629',
        '2NP' => 'E02004629',
        '2NQ' => 'E02004629',
        '2NR' => 'E02004629',
        '2NS' => 'E02004629',
        '2NT' => 'E02004629',
        '2NU' => 'E02004629',
        '2NW' => 'E02004629',
        '2NX' => 'E02004629',
        '2NY' => 'E02004629',
        '2NZ' => 'E02004629',
        '2PA' => 'E02004629',
        '2PB' => 'E02004629',
        '2PD' => 'E02004629',
        '2PE' => 'E02004629',
        '2PF' => 'E02004629',
        '2PG' => 'E02004629',
        '2PH' => 'E02004629',
        '2PJ' => 'E02004629',
        '2PL' => 'E02004629',
        '2PN' => 'E02004629',
        '2PP' => 'E02004629',
        '2PQ' => 'E02004629',
        '2PR' => 'E02004629',
        '2PS' => 'E02004629',
        '2PT' => 'E02004629',
        '2PU' => 'E02004629',
        '2PW' => 'E02004629',
        '2PX' => 'E02004629',
        '2PY' => 'E02004629',
        '2PZ' => 'E02004629',
        '2QA' => 'E02004629',
        '2QB' => 'E02004629',
        '2QD' => 'E02004629',
        '2QE' => 'E02004629',
        '2QF' => 'E02004629',
        '2QG' => 'E02004629',
        '2QH' => 'E02004629',
        '2QJ' => 'E02004629',
        '2QL' => 'E02004629',
        '2QN' => 'E02004629',
        '2QP' => 'E02004629',
        '2QQ' => 'E02004629',
        '2QR' => 'E02004629',
        '2QS' => 'E02004629',
        '2QT' => 'E02004629',
        '2QU' => 'E02004629',
        '2QW' => 'E02004629',
        '2QX' => 'E02004629',
        '2QY' => 'E02004629',
        '2QZ' => 'E02004629',
        '2RA' => 'E02004629',
        '2RB' => 'E02004629',
        '2RD' => 'E02004629',
        '2RE' => 'E02004629',
        '2RF' => 'E02004629',
        '2RG' => 'E02004629',
        '2RH' => 'E02004629',
        '2RJ' => 'E02004629',
        '2RL' => 'E02004629',
        '2RN' => 'E02004629',
        '2RP' => 'E02004629',
        '2RQ' => 'E02004629',
        '2RR' => 'E02004629',
        '2RS' => 'E02004629',
        '2RT' => 'E02004629',
        '2RU' => 'E02004629',
        '2RW' => 'E02004629',
        '2RX' => 'E02004629',
        '2RY' => 'E02004629',
        '2RZ' => 'E02004629',
        '2SA' => 'E02004629',
        '2SB' => 'E02004629',
        '2SD' => 'E02004629',
        '2SE' => 'E02004629',
        '2SF' => 'E02004629',
        '2SG' => 'E02004629',
        '2SH' => 'E02004629',
        '2SJ' => 'E02004629',
        '2SL' => 'E02004629',
        '2SN' => 'E02004629',
        '2SP' => 'E02004629',
        '2SQ' => 'E02004629',
        '2SR' => 'E02004629',
        '2SS' => 'E02004629',
        '2ST' => 'E02004629',
        '2SU' => 'E02004629',
        '2SW' => 'E02004629',
        '2SX' => 'E02004629',
        '2SY' => 'E02004629',
        '2SZ' => 'E02004629',
        '2TA' => 'E02004629',
        '2TB' => 'E02004629',
        '2TD' => 'E02004629',
        '2TE' => 'E02004629',
        '2TF' => 'E02004629',
        '2TG' => 'E02004629',
        '2TH' => 'E02004629',
        '2TJ' => 'E02004629',
        '2TL' => 'E02004629',
        '2TN' => 'E02004629',
        '2TP' => 'E02004629',
        '2TQ' => 'E02004629',
        '2TS' => 'E02004629',
        '2TT' => 'E02004629',
        '2TU' => 'E02004629',
        '2TX' => 'E02004629',
        '2TY' => 'E02004629',
        '2TZ' => 'E02004629',
        '2UA' => 'E02004629',
        '2UB' => 'E02004629',
        '2UD' => 'E02004629',
        '2UE' => 'E02004629',
        '2UF' => 'E02004629',
        '2UG' => 'E02004629',
        '2UH' => 'E02004629',
        '2UJ' => 'E02004629',
        '2UQ' => 'E02004629',
        '2WQ' => 'E02004629',
        '2WT' => 'E02004629',
        '2WU' => 'E02004629',
        '2WW' => 'E02004629',
        '2WX' => 'E02004629',
        '2WY' => 'E02004629',
        '2WZ' => 'E02004629',
        '2XA' => 'E02004629',
        '2XB' => 'E02004629',
        '2XD' => 'E02004629',
        '2XE' => 'E02004629',
        '2XF' => 'E02004629',
        '2XP' => 'E02004629',
        '2XQ' => 'E02004629',
        '2XW' => 'E02004629',
        '2XX' => 'E02004629',
        '2XY' => 'E02004629',
        '2XZ' => 'E02004629',
        '2YA' => 'E02004629',
        '2YB' => 'E02004629',
        '2YD' => 'E02004629',
        '2YE' => 'E02004629',
        '2YF' => 'E02004629',
        '2YG' => 'E02004629',
        '2YH' => 'E02004629',
        '2YJ' => 'E02004629',
        '2YL' => 'E02004629',
        '2YN' => 'E02004629',
        '2YP' => 'E02004629',
        '2YQ' => 'E02004629',
        '2YR' => 'E02004629',
        '2YS' => 'E02004629',
        '2YT' => 'E02004629',
        '2YU' => 'E02004629',
        '2YW' => 'E02004629',
        '2YX' => 'E02004629',
        '2YY' => 'E02004629',
        '2YZ' => 'E02004629',
        '2ZB' => 'E02004629',
        '2ZD' => 'E02004629',
        '2ZE' => 'E02004629',
        '2ZF' => 'E02004629',
        '2ZG' => 'E02004629',
        '2ZR' => 'E02004629',
        '2ZT' => 'E02004629',
        '2ZU' => 'E02004629',
        '3AA' => 'E02004629',
        '3AB' => 'E02004629',
        '3AD' => 'E02004629',
        '3AE' => 'E02004629',
        '3AF' => 'E02004629',
        '3AG' => 'E02004629',
        '3AH' => 'E02004629',
        '3AJ' => 'E02004629',
        '3AL' => 'E02004629',
        '3AN' => 'E02004629',
        '3AP' => 'E02004629',
        '3AQ' => 'E02004629',
        '3AR' => 'E02004629',
        '3AS' => 'E02004629',
        '3AT' => 'E02004629',
        '3AU' => 'E02004629',
        '3AW' => 'E02004629',
        '3AX' => 'E02004629',
        '3AY' => 'E02004629',
        '3AZ' => 'E02004629',
        '3BA' => 'E02004629',
        '3BB' => 'E02004629',
        '3BD' => 'E02004629',
        '3BE' => 'E02004629',
        '3BG' => 'E02004629',
        '3BH' => 'E02004629',
        '3BJ' => 'E02004629',
        '3BL' => 'E02004629',
        '3BN' => 'E02004629',
        '3BP' => 'E02004629',
        '3BQ' => 'E02004629',
        '3BS' => 'E02004629',
        '3BT' => 'E02004629',
        '3BU' => 'E02004629',
        '3BW' => 'E02004629',
        '3BX' => 'E02004629',
        '3BY' => 'E02004629',
        '3BZ' => 'E02004629',
        '3DA' => 'E02004629',
        '3DB' => 'E02004629',
        '3DD' => 'E02004629',
        '3DE' => 'E02004629',
        '3DF' => 'E02004629',
        '3DG' => 'E02004629',
        '3DH' => 'E02004629',
        '3DJ' => 'E02004629',
        '3DL' => 'E02004629',
        '3DN' => 'E02004629',
        '3DP' => 'E02004629',
        '3DQ' => 'E02004629',
        '3DR' => 'E02004629',
        '3DS' => 'E02004629',
        '3DT' => 'E02004629',
        '3DU' => 'E02004629',
        '3DW' => 'E02004629',
        '3DX' => 'E02004629',
        '3DY' => 'E02004629',
        '3DZ' => 'E02004629',
        '3EA' => 'E02004629',
        '3EB' => 'E02004629',
        '3ED' => 'E02004629',
        '3EE' => 'E02004629',
        '3EF' => 'E02004629',
        '3EG' => 'E02004629',
        '3EH' => 'E02004629',
        '3EJ' => 'E02004629',
        '3EL' => 'E02004629',
        '3EN' => 'E02004629',
        '3EP' => 'E02004629',
        '3EQ' => 'E02004629',
        '3ER' => 'E02004629',
        '3ES' => 'E02004629',
        '3ET' => 'E02004629',
        '3EU' => 'E02004629',
        '3EW' => 'E02004629',
        '3EX' => 'E02004629',
        '3EY' => 'E02004629',
        '3EZ' => 'E02004629',
        '3FA' => 'E02004629',
        '3FB' => 'E02004629',
        '3FD' => 'E02004629',
        '3FE' => 'E02004629',
        '3FF' => 'E02004629',
        '3FG' => 'E02004629',
        '3GA' => 'E02004629',
        '3GB' => 'E02004629',
        '3GD' => 'E02004629',
        '3GE' => 'E02004629',
        '3HA' => 'E02004629',
        '3HB' => 'E02004629',
        '3HD' => 'E02004629',
        '3HE' => 'E02004629',
        '3HF' => 'E02004629',
        '3HG' => 'E02004629',
        '3HH' => 'E02004629',
        '3HJ' => 'E02004629',
        '3HL' => 'E02004629',
        '3HN' => 'E02004629',
        '3HP' => 'E02004629',
        '3HQ' => 'E02004629',
        '3HR' => 'E02004629',
        '3HS' => 'E02004629',
        '3HU' => 'E02004629',
        '3HW' => 'E02004629',
        '3HX' => 'E02004629',
        '3HY' => 'E02004629',
        '3HZ' => 'E02004629',
        '3JA' => 'E02004629',
        '3JB' => 'E02004629',
        '3JD' => 'E02004629',
        '3JE' => 'E02004629',
        '3JF' => 'E02004629',
        '3JG' => 'E02004629',
        '3JH' => 'E02004629',
        '3JJ' => 'E02004629',
        '3JL' => 'E02004629',
        '3JN' => 'E02004629',
        '3JQ' => 'E02004629',
        '3JS' => 'E02004629',
        '3JT' => 'E02004629',
        '3JU' => 'E02004629',
        '3JX' => 'E02004629',
        '3JY' => 'E02004629',
        '3JZ' => 'E02004629',
        '3LA' => 'E02004629',
        '3LB' => 'E02004629',
        '3LD' => 'E02004629',
        '3LE' => 'E02004629',
        '3LF' => 'E02004629',
        '3LG' => 'E02004629',
        '3LH' => 'E02004629',
        '3LJ' => 'E02004629',
        '3LL' => 'E02004629',
        '3LN' => 'E02004629',
        '3LP' => 'E02004629',
        '3LQ' => 'E02004629',
        '3LR' => 'E02004629',
        '3LW' => 'E02004629',
        '3NA' => 'E02004629',
        '3NB' => 'E02004629',
        '3ND' => 'E02004629',
        '3NE' => 'E02004629',
        '3NF' => 'E02004629',
        '3NG' => 'E02004629',
        '3NH' => 'E02004629',
        '3NJ' => 'E02004629',
        '3NL' => 'E02004629',
        '3NN' => 'E02004629',
        '3NP' => 'E02004629',
        '3NQ' => 'E02004629',
        '3NR' => 'E02004629',
        '3NS' => 'E02004629',
        '3NT' => 'E02004629',
        '3NU' => 'E02004629',
        '3NW' => 'E02004629',
        '3NX' => 'E02004629',
        '3NY' => 'E02004629',
        '3NZ' => 'E02004629',
        '3PA' => 'E02004629',
        '3PB' => 'E02004629',
        '3PD' => 'E02004629',
        '3PE' => 'E02004629',
        '3PF' => 'E02004629',
        '3PG' => 'E02004629',
        '3PH' => 'E02004629',
        '3WY' => 'E02004629',
        '3WZ' => 'E02004629',
        '3YA' => 'E02004629',
        '3YB' => 'E02004629',
        '3YD' => 'E02004629',
        '3YE' => 'E02004629',
        '3YF' => 'E02004629',
        '3YG' => 'E02004629',
        '3YH' => 'E02004629',
        '3YJ' => 'E02004629',
        '3ZX' => 'E02004629',
        '9AA' => 'E02004629',
        '9AD' => 'E02004629',
        '9AE' => 'E02004629',
        '9AF' => 'E02004629',
        '9AG' => 'E02004629',
        '9AH' => 'E02004629',
        '9AJ' => 'E02004629',
        '9AL' => 'E02004629',
        '9AN' => 'E02004629',
        '9AP' => 'E02004629',
        '9AQ' => 'E02004629',
        '9AR' => 'E02004629',
        '9AS' => 'E02004629',
        '9AT' => 'E02004629',
        '9AU' => 'E02004629',
        '9AW' => 'E02004629',
        '9AX' => 'E02004629',
        '9AY' => 'E02004629',
        '9AZ' => 'E02004629',
        '9BA' => 'E02004629',
        '9BB' => 'E02004629',
        '9BD' => 'E02004629',
        '9BE' => 'E02004629',
        '9BF' => 'E02004629',
        '9BG' => 'E02004629',
        '9BH' => 'E02004629',
        '9BJ' => 'E02004629',
        '9BL' => 'E02004629',
        '9BN' => 'E02004629',
        '9BP' => 'E02004629',
        '9BQ' => 'E02004629',
        '9BR' => 'E02004629',
        '9BS' => 'E02004629',
        '9BT' => 'E02004629',
        '9BU' => 'E02004629',
        '9BW' => 'E02004629',
        '9BX' => 'E02004629',
        '9BY' => 'E02004629',
        '9BZ' => 'E02004629',
        '9DA' => 'E02004629',
        '9DB' => 'E02004629',
        '9DD' => 'E02004629',
        '9DE' => 'E02004629',
        '9DF' => 'E02004629',
        '9DG' => 'E02004629',
        '9DH' => 'E02004629',
        '9DJ' => 'E02004629',
        '9DL' => 'E02004629',
        '9DN' => 'E02004629',
        '9DP' => 'E02004629',
        '9DQ' => 'E02004629',
        '9DR' => 'E02004629',
        '9DS' => 'E02004629',
        '9DT' => 'E02004629',
        '9DU' => 'E02004629',
        '9DW' => 'E02004629',
        '9DX' => 'E02004629',
        '9EA' => 'E02004629',
        '9EB' => 'E02004629',
        '9ED' => 'E02004629',
        '9EE' => 'E02004629',
        '9EF' => 'E02004629',
        '9EG' => 'E02004629',
        '9EH' => 'E02004629',
        '9EJ' => 'E02004629',
        '9EL' => 'E02004629',
        '9EN' => 'E02004629',
        '9EP' => 'E02004629',
        '9EQ' => 'E02004629',
        '9ER' => 'E02004629',
        '9ES' => 'E02004629',
        '9ET' => 'E02004629',
        '9EU' => 'E02004629',
        '9EW' => 'E02004629',
        '9EX' => 'E02004629',
        '9EY' => 'E02004629',
        '9EZ' => 'E02004629',
        '9FA' => 'E02004629',
        '9FB' => 'E02004629',
        '9FD' => 'E02004629',
        '9FE' => 'E02004629',
        '9FF' => 'E02004629',
        '9FG' => 'E02004629',
        '9FH' => 'E02004629',
        '9FJ' => 'E02004629',
        '9FL' => 'E02004629',
        '9FN' => 'E02004629',
        '9FP' => 'E02004629',
        '9FQ' => 'E02004629',
        '9FR' => 'E02004629',
        '9FS' => 'E02004629',
        '9FT' => 'E02004629',
        '9FU' => 'E02004629',
        '9FW' => 'E02004629',
        '9FX' => 'E02004629',
        '9FY' => 'E02004629',
        '9FZ' => 'E02004629',
        '9GA' => 'E02004629',
        '9GB' => 'E02004629',
        '9GD' => 'E02004629',
        '9GE' => 'E02004629',
        '9GG' => 'E02004629',
        '9GH' => 'E02004629',
        '9GJ' => 'E02004629',
        '9GN' => 'E02004629',
        '9GP' => 'E02004629',
        '9GQ' => 'E02004629',
        '9GR' => 'E02004629',
        '9GS' => 'E02004629',
        '9GT' => 'E02004629',
        '9GU' => 'E02004629',
        '9GW' => 'E02004629',
        '9GX' => 'E02004629',
        '9GY' => 'E02004629',
        '9GZ' => 'E02004629',
        '9HA' => 'E02004629',
        '9HB' => 'E02004629',
        '9HD' => 'E02004629',
        '9HE' => 'E02004629',
        '9HF' => 'E02004629',
        '9HG' => 'E02004629',
        '9HH' => 'E02004629',
        '9HJ' => 'E02004629',
        '9HL' => 'E02004629',
        '9HN' => 'E02004629',
        '9HP' => 'E02004629',
        '9HQ' => 'E02004629',
        '9HR' => 'E02004629',
        '9HS' => 'E02004629',
        '9HT' => 'E02004629',
        '9HU' => 'E02004629',
        '9HW' => 'E02004629',
        '9HX' => 'E02004629',
        '9HY' => 'E02004629',
        '9HZ' => 'E02004629',
        '9JA' => 'E02004629',
        '9JB' => 'E02004629',
        '9JD' => 'E02004629',
        '9JE' => 'E02004629',
        '9JF' => 'E02004629',
        '9JG' => 'E02004629',
        '9JH' => 'E02004629',
        '9JJ' => 'E02004629',
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
