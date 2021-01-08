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
final class BH9
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02003180',
        '1AB' => 'E02003180',
        '1AD' => 'E02003184',
        '1AE' => 'E02003184',
        '1AF' => 'E02003180',
        '1AG' => 'E02003184',
        '1AH' => 'E02003184',
        '1AJ' => 'E02003184',
        '1AL' => 'E02003184',
        '1AN' => 'E02003183',
        '1AP' => 'E02003180',
        '1AQ' => 'E02003184',
        '1AR' => 'E02003180',
        '1AS' => 'E02003180',
        '1AT' => 'E02003183',
        '1AU' => 'E02003180',
        '1AW' => 'E02003183',
        '1AX' => 'E02003180',
        '1AY' => 'E02003180',
        '1AZ' => 'E02003180',
        '1BA' => 'E02003180',
        '1BB' => 'E02003180',
        '1BD' => 'E02003180',
        '1BE' => 'E02003180',
        '1BG' => 'E02003180',
        '1BH' => 'E02003180',
        '1BJ' => 'E02003180',
        '1BL' => 'E02003180',
        '1BN' => 'E02003180',
        '1BP' => 'E02003180',
        '1BQ' => 'E02003181',
        '1BS' => 'E02003184',
        '1BT' => 'E02003180',
        '1BU' => 'E02003184',
        '1BW' => 'E02003183',
        '1BX' => 'E02003184',
        '1BY' => 'E02003184',
        '1BZ' => 'E02003184',
        '1DA' => 'E02003184',
        '1DB' => 'E02003184',
        '1DD' => 'E02003184',
        '1DE' => 'E02003184',
        '1DF' => 'E02003184',
        '1DG' => 'E02003184',
        '1DH' => 'E02003181',
        '1DJ' => 'E02003184',
        '1DL' => 'E02003184',
        '1DN' => 'E02003184',
        '1DP' => 'E02003181',
        '1DQ' => 'E02003181',
        '1DR' => 'E02003173',
        '1DS' => 'E02003180',
        '1DT' => 'E02003181',
        '1DU' => 'E02003181',
        '1DW' => 'E02003184',
        '1DX' => 'E02003181',
        '1DY' => 'E02003181',
        '1DZ' => 'E02003181',
        '1EA' => 'E02003181',
        '1EB' => 'E02003181',
        '1ED' => 'E02003180',
        '1EE' => 'E02003180',
        '1EF' => 'E02003181',
        '1EG' => 'E02003181',
        '1EH' => 'E02003181',
        '1EJ' => 'E02003181',
        '1EL' => 'E02003181',
        '1EN' => 'E02003181',
        '1EP' => 'E02003181',
        '1EQ' => 'E02003181',
        '1ER' => 'E02003184',
        '1ES' => 'E02003184',
        '1ET' => 'E02003181',
        '1EU' => 'E02003181',
        '1EW' => 'E02003184',
        '1EX' => 'E02003181',
        '1EY' => 'E02003184',
        '1EZ' => 'E02003181',
        '1FA' => 'E02003183',
        '1FB' => 'E02003181',
        '1FD' => 'E02003180',
        '1FE' => 'E02003180',
        '1FF' => 'E02003180',
        '1FG' => 'E02003181',
        '1FH' => 'E02003180',
        '1HA' => 'E02003181',
        '1HB' => 'E02003181',
        '1HD' => 'E02003181',
        '1HH' => 'E02003181',
        '1HJ' => 'E02003184',
        '1HL' => 'E02003184',
        '1HP' => 'E02003181',
        '1HQ' => 'E02003181',
        '1HR' => 'E02003181',
        '1HS' => 'E02003181',
        '1HT' => 'E02003184',
        '1HW' => 'E02003181',
        '1HX' => 'E02003181',
        '1HY' => 'E02003184',
        '1HZ' => 'E02003181',
        '1JA' => 'E02003181',
        '1JB' => 'E02003181',
        '1JD' => 'E02003181',
        '1JE' => 'E02003181',
        '1JF' => 'E02003181',
        '1JG' => 'E02003181',
        '1JH' => 'E02003181',
        '1JJ' => 'E02003181',
        '1JL' => 'E02003180',
        '1JP' => 'E02003180',
        '1JQ' => 'E02003181',
        '1JR' => 'E02003180',
        '1JS' => 'E02003180',
        '1JT' => 'E02003180',
        '1JU' => 'E02003180',
        '1JW' => 'E02003180',
        '1JX' => 'E02003180',
        '1JY' => 'E02003180',
        '1JZ' => 'E02003180',
        '1LA' => 'E02003180',
        '1LB' => 'E02003180',
        '1LD' => 'E02003180',
        '1LE' => 'E02003180',
        '1LF' => 'E02003180',
        '1LG' => 'E02003180',
        '1LH' => 'E02003180',
        '1LJ' => 'E02003180',
        '1LL' => 'E02003180',
        '1LN' => 'E02003180',
        '1LQ' => 'E02003180',
        '1LR' => 'E02003181',
        '1LS' => 'E02003180',
        '1LT' => 'E02003180',
        '1LU' => 'E02003181',
        '1LW' => 'E02003180',
        '1LX' => 'E02003181',
        '1LY' => 'E02003181',
        '1LZ' => 'E02003180',
        '1NA' => 'E02003180',
        '1NB' => 'E02003180',
        '1ND' => 'E02003181',
        '1NE' => 'E02003180',
        '1NF' => 'E02003181',
        '1NG' => 'E02003181',
        '1NH' => 'E02003180',
        '1NJ' => 'E02003180',
        '1NL' => 'E02003180',
        '1NN' => 'E02003180',
        '1NP' => 'E02003180',
        '1NQ' => 'E02003180',
        '1NR' => 'E02003180',
        '1NS' => 'E02003181',
        '1NT' => 'E02003181',
        '1NU' => 'E02003181',
        '1NW' => 'E02003180',
        '1NX' => 'E02003180',
        '1PA' => 'E02003180',
        '1PB' => 'E02003180',
        '1PD' => 'E02003180',
        '1PE' => 'E02003180',
        '1PF' => 'E02003180',
        '1PG' => 'E02003180',
        '1PH' => 'E02003180',
        '1PJ' => 'E02003180',
        '1PL' => 'E02003180',
        '1PN' => 'E02003180',
        '1PP' => 'E02003180',
        '1PQ' => 'E02003180',
        '1PR' => 'E02003180',
        '1PS' => 'E02003180',
        '1PT' => 'E02003180',
        '1PU' => 'E02003180',
        '1PW' => 'E02003180',
        '1PX' => 'E02003180',
        '1PY' => 'E02003180',
        '1PZ' => 'E02003180',
        '1QA' => 'E02003180',
        '1QB' => 'E02003180',
        '1QD' => 'E02003180',
        '1QE' => 'E02003180',
        '1QF' => 'E02003180',
        '1QH' => 'E02003181',
        '1QJ' => 'E02003181',
        '1QL' => 'E02003181',
        '1QN' => 'E02003181',
        '1QP' => 'E02003180',
        '1QR' => 'E02003181',
        '1QS' => 'E02003181',
        '1QT' => 'E02003180',
        '1QU' => 'E02003181',
        '1QW' => 'E02003180',
        '1QX' => 'E02003181',
        '1QY' => 'E02003180',
        '1QZ' => 'E02003180',
        '1RA' => 'E02003180',
        '1RB' => 'E02003181',
        '1RD' => 'E02003181',
        '1RE' => 'E02003180',
        '1RF' => 'E02003180',
        '1RG' => 'E02003180',
        '1RH' => 'E02003180',
        '1RJ' => 'E02003180',
        '1RL' => 'E02003180',
        '1RN' => 'E02003181',
        '1RP' => 'E02003181',
        '1RQ' => 'E02003180',
        '1RR' => 'E02003181',
        '1RS' => 'E02003181',
        '1RT' => 'E02003181',
        '1RU' => 'E02003181',
        '1RW' => 'E02003181',
        '1RX' => 'E02003181',
        '1RY' => 'E02003181',
        '1RZ' => 'E02003181',
        '1SA' => 'E02003181',
        '1SB' => 'E02003181',
        '1SD' => 'E02003181',
        '1SE' => 'E02003181',
        '1SH' => 'E02003181',
        '1SJ' => 'E02003181',
        '1SL' => 'E02003180',
        '1SN' => 'E02003180',
        '1SP' => 'E02003177',
        '1SR' => 'E02003177',
        '1SS' => 'E02003180',
        '1ST' => 'E02003180',
        '1SU' => 'E02003177',
        '1SW' => 'E02003180',
        '1SX' => 'E02003180',
        '1SY' => 'E02003177',
        '1SZ' => 'E02003177',
        '1TA' => 'E02003180',
        '1TB' => 'E02003180',
        '1TE' => 'E02003177',
        '1TF' => 'E02003177',
        '1TG' => 'E02003177',
        '1TH' => 'E02003177',
        '1TJ' => 'E02003177',
        '1TL' => 'E02003177',
        '1TN' => 'E02003180',
        '1TP' => 'E02003180',
        '1TQ' => 'E02003177',
        '1TR' => 'E02003177',
        '1TS' => 'E02003177',
        '1TT' => 'E02003177',
        '1TU' => 'E02003177',
        '1TW' => 'E02003177',
        '1TX' => 'E02003177',
        '1TY' => 'E02003177',
        '1TZ' => 'E02003177',
        '1UA' => 'E02003177',
        '1UB' => 'E02003177',
        '1WA' => 'E02003177',
        '1WB' => 'E02003177',
        '1WD' => 'E02003177',
        '1WE' => 'E02003173',
        '1WF' => 'E02003173',
        '1WG' => 'E02003177',
        '1WH' => 'E02003177',
        '1WN' => 'E02003177',
        '1WT' => 'E02003173',
        '1WW' => 'E02003177',
        '1WX' => 'E02003177',
        '1WY' => 'E02003181',
        '1WZ' => 'E02003173',
        '1XA' => 'E02003177',
        '1XB' => 'E02003177',
        '1XD' => 'E02003181',
        '1XE' => 'E02003177',
        '1XF' => 'E02003181',
        '1XG' => 'E02003181',
        '1XH' => 'E02003177',
        '1XJ' => 'E02003177',
        '1XL' => 'E02003181',
        '1XN' => 'E02003177',
        '1XP' => 'E02003181',
        '1XQ' => 'E02003181',
        '1XR' => 'E02003181',
        '1XS' => 'E02003181',
        '1XT' => 'E02003181',
        '1XU' => 'E02003181',
        '1XW' => 'E02003181',
        '1XX' => 'E02003181',
        '1XY' => 'E02003181',
        '1XZ' => 'E02003173',
        '1YA' => 'E02003173',
        '1YB' => 'E02003180',
        '1YD' => 'E02003181',
        '1YE' => 'E02003173',
        '1YF' => 'E02003180',
        '1YG' => 'E02003184',
        '1YH' => 'E02003184',
        '1YJ' => 'E02003180',
        '1YL' => 'E02003184',
        '1YN' => 'E02003181',
        '1YP' => 'E02003180',
        '1YQ' => 'E02003180',
        '1YR' => 'E02003180',
        '1YS' => 'E02003180',
        '1YT' => 'E02003184',
        '1YU' => 'E02003180',
        '1YW' => 'E02003180',
        '1YX' => 'E02003180',
        '1YY' => 'E02003180',
        '1YZ' => 'E02003173',
        '1ZA' => 'E02003181',
        '1ZB' => 'E02003180',
        '1ZD' => 'E02003173',
        '1ZE' => 'E02003180',
        '1ZF' => 'E02003180',
        '1ZH' => 'E02003173',
        '1ZJ' => 'E02003180',
        '1ZL' => 'E02003173',
        '1ZN' => 'E02003180',
        '1ZP' => 'E02003173',
        '1ZQ' => 'E02003173',
        '1ZR' => 'E02003181',
        '1ZS' => 'E02003173',
        '1ZT' => 'E02003180',
        '1ZU' => 'E02003180',
        '1ZW' => 'E02003180',
        '1ZX' => 'E02003173',
        '1ZY' => 'E02003180',
        '2AA' => 'E02003183',
        '2AB' => 'E02003180',
        '2AD' => 'E02003180',
        '2AE' => 'E02003180',
        '2AF' => 'E02003180',
        '2AG' => 'E02003180',
        '2AH' => 'E02003180',
        '2AJ' => 'E02003180',
        '2AL' => 'E02003180',
        '2AN' => 'E02003180',
        '2AP' => 'E02003180',
        '2AQ' => 'E02003180',
        '2AR' => 'E02003180',
        '2AS' => 'E02003180',
        '2AT' => 'E02003180',
        '2AU' => 'E02003180',
        '2AW' => 'E02003180',
        '2AX' => 'E02003180',
        '2AY' => 'E02003180',
        '2AZ' => 'E02003180',
        '2BA' => 'E02003180',
        '2BB' => 'E02003180',
        '2BD' => 'E02003180',
        '2BE' => 'E02003177',
        '2BG' => 'E02003177',
        '2BH' => 'E02003177',
        '2BJ' => 'E02003177',
        '2BL' => 'E02003177',
        '2BN' => 'E02003177',
        '2BP' => 'E02003177',
        '2BQ' => 'E02003177',
        '2BS' => 'E02003177',
        '2BT' => 'E02003177',
        '2BU' => 'E02003177',
        '2BW' => 'E02003177',
        '2BX' => 'E02003177',
        '2BY' => 'E02003177',
        '2BZ' => 'E02003177',
        '2DA' => 'E02003177',
        '2DB' => 'E02003177',
        '2DD' => 'E02003177',
        '2DE' => 'E02003177',
        '2DF' => 'E02003177',
        '2DG' => 'E02003177',
        '2DH' => 'E02003177',
        '2DJ' => 'E02003177',
        '2DL' => 'E02003180',
        '2DN' => 'E02003177',
        '2DP' => 'E02003177',
        '2DQ' => 'E02003177',
        '2DR' => 'E02003177',
        '2DS' => 'E02003177',
        '2DT' => 'E02003180',
        '2DU' => 'E02003180',
        '2DW' => 'E02003177',
        '2DX' => 'E02003180',
        '2DY' => 'E02003180',
        '2DZ' => 'E02003180',
        '2EA' => 'E02003180',
        '2EB' => 'E02003180',
        '2ED' => 'E02003180',
        '2EE' => 'E02003180',
        '2EF' => 'E02003183',
        '2EG' => 'E02003180',
        '2EH' => 'E02003180',
        '2EJ' => 'E02003183',
        '2EL' => 'E02003180',
        '2EN' => 'E02003180',
        '2EP' => 'E02003180',
        '2EQ' => 'E02003180',
        '2ER' => 'E02003180',
        '2ES' => 'E02003180',
        '2ET' => 'E02003180',
        '2EU' => 'E02003183',
        '2EW' => 'E02003180',
        '2EX' => 'E02003180',
        '2EY' => 'E02003180',
        '2EZ' => 'E02003180',
        '2FA' => 'E02003178',
        '2FB' => 'E02003180',
        '2GA' => 'E02003183',
        '2HA' => 'E02003180',
        '2HB' => 'E02003180',
        '2HD' => 'E02003180',
        '2HE' => 'E02003180',
        '2HF' => 'E02003180',
        '2HG' => 'E02003180',
        '2HH' => 'E02003180',
        '2HJ' => 'E02003183',
        '2HL' => 'E02003183',
        '2HN' => 'E02003183',
        '2HP' => 'E02003180',
        '2HQ' => 'E02003180',
        '2HR' => 'E02003180',
        '2HS' => 'E02003180',
        '2HT' => 'E02003180',
        '2HW' => 'E02003180',
        '2JB' => 'E02003180',
        '2JD' => 'E02003183',
        '2JE' => 'E02003183',
        '2JF' => 'E02003183',
        '2JG' => 'E02003183',
        '2JH' => 'E02003180',
        '2JJ' => 'E02003180',
        '2JL' => 'E02003180',
        '2JN' => 'E02003180',
        '2JQ' => 'E02003180',
        '2JT' => 'E02003183',
        '2JU' => 'E02003183',
        '2JW' => 'E02003180',
        '2JX' => 'E02003183',
        '2JY' => 'E02003183',
        '2JZ' => 'E02003183',
        '2LA' => 'E02003183',
        '2LB' => 'E02003183',
        '2LD' => 'E02003183',
        '2LE' => 'E02003183',
        '2LF' => 'E02003183',
        '2LG' => 'E02003183',
        '2LH' => 'E02003183',
        '2LJ' => 'E02003183',
        '2LL' => 'E02003183',
        '2LN' => 'E02003183',
        '2LP' => 'E02003180',
        '2LQ' => 'E02003183',
        '2LR' => 'E02003183',
        '2LS' => 'E02003183',
        '2LT' => 'E02003183',
        '2LU' => 'E02003183',
        '2LW' => 'E02003180',
        '2LX' => 'E02003183',
        '2LY' => 'E02003183',
        '2LZ' => 'E02003183',
        '2NA' => 'E02003183',
        '2NB' => 'E02003183',
        '2ND' => 'E02003183',
        '2NE' => 'E02003183',
        '2NF' => 'E02003183',
        '2NJ' => 'E02003180',
        '2NL' => 'E02003180',
        '2NN' => 'E02003180',
        '2NP' => 'E02003183',
        '2NQ' => 'E02003180',
        '2NR' => 'E02003180',
        '2NS' => 'E02003180',
        '2NT' => 'E02003180',
        '2NU' => 'E02003180',
        '2NW' => 'E02003183',
        '2NX' => 'E02003180',
        '2NY' => 'E02003180',
        '2NZ' => 'E02003180',
        '2PA' => 'E02003180',
        '2PB' => 'E02003180',
        '2PD' => 'E02003180',
        '2PE' => 'E02003180',
        '2PF' => 'E02003180',
        '2PG' => 'E02003180',
        '2PH' => 'E02003180',
        '2PJ' => 'E02003180',
        '2PL' => 'E02003180',
        '2PN' => 'E02003180',
        '2PP' => 'E02003180',
        '2PQ' => 'E02003183',
        '2PR' => 'E02003180',
        '2PT' => 'E02003180',
        '2PU' => 'E02003180',
        '2PW' => 'E02003180',
        '2PX' => 'E02003180',
        '2PY' => 'E02003180',
        '2PZ' => 'E02003183',
        '2QA' => 'E02003183',
        '2QB' => 'E02003183',
        '2QD' => 'E02003180',
        '2QE' => 'E02003180',
        '2QF' => 'E02003180',
        '2QG' => 'E02003180',
        '2QH' => 'E02003180',
        '2QJ' => 'E02003180',
        '2QL' => 'E02003180',
        '2QN' => 'E02003180',
        '2QP' => 'E02003183',
        '2QQ' => 'E02003180',
        '2QR' => 'E02003180',
        '2QS' => 'E02003180',
        '2QT' => 'E02003180',
        '2QU' => 'E02003180',
        '2QW' => 'E02003183',
        '2QX' => 'E02003180',
        '2QY' => 'E02003180',
        '2QZ' => 'E02003183',
        '2RA' => 'E02003183',
        '2RB' => 'E02003180',
        '2RD' => 'E02003178',
        '2RE' => 'E02003180',
        '2RF' => 'E02003180',
        '2RG' => 'E02003180',
        '2RH' => 'E02003178',
        '2RJ' => 'E02003180',
        '2RL' => 'E02003178',
        '2RN' => 'E02003180',
        '2RP' => 'E02003178',
        '2RQ' => 'E02003180',
        '2RR' => 'E02003178',
        '2RS' => 'E02003178',
        '2RT' => 'E02003180',
        '2RU' => 'E02003178',
        '2RW' => 'E02003178',
        '2RX' => 'E02003183',
        '2RZ' => 'E02003183',
        '2SA' => 'E02003180',
        '2SB' => 'E02003180',
        '2SD' => 'E02003180',
        '2SE' => 'E02003178',
        '2SF' => 'E02003180',
        '2SG' => 'E02003178',
        '2SH' => 'E02003178',
        '2SJ' => 'E02003180',
        '2SL' => 'E02003178',
        '2SN' => 'E02003180',
        '2SP' => 'E02003177',
        '2SQ' => 'E02003180',
        '2SR' => 'E02003180',
        '2SS' => 'E02003177',
        '2ST' => 'E02003177',
        '2SU' => 'E02003177',
        '2SW' => 'E02003180',
        '2SX' => 'E02003177',
        '2SY' => 'E02003177',
        '2SZ' => 'E02003177',
        '2TA' => 'E02003177',
        '2TB' => 'E02003180',
        '2TF' => 'E02003180',
        '2TG' => 'E02003180',
        '2TH' => 'E02003180',
        '2TJ' => 'E02003180',
        '2TL' => 'E02003180',
        '2TN' => 'E02003177',
        '2TP' => 'E02003177',
        '2TQ' => 'E02003180',
        '2TR' => 'E02003177',
        '2TS' => 'E02003177',
        '2TT' => 'E02003177',
        '2TU' => 'E02003177',
        '2TW' => 'E02003177',
        '2TX' => 'E02003177',
        '2TY' => 'E02003177',
        '2TZ' => 'E02003177',
        '2UA' => 'E02003177',
        '2UB' => 'E02003177',
        '2UD' => 'E02003177',
        '2UE' => 'E02003177',
        '2UF' => 'E02003177',
        '2UJ' => 'E02003177',
        '2UL' => 'E02003177',
        '2UN' => 'E02003177',
        '2UP' => 'E02003177',
        '2UR' => 'E02003177',
        '2US' => 'E02003177',
        '2UT' => 'E02003177',
        '2UU' => 'E02003177',
        '2UW' => 'E02003177',
        '2UX' => 'E02003177',
        '2UY' => 'E02003177',
        '2UZ' => 'E02003177',
        '2WA' => 'E02003177',
        '2WB' => 'E02003177',
        '2WD' => 'E02003177',
        '2WE' => 'E02003177',
        '2WG' => 'E02003173',
        '2WZ' => 'E02003173',
        '2XA' => 'E02003177',
        '2XB' => 'E02003177',
        '2XD' => 'E02003177',
        '2XE' => 'E02003177',
        '2XF' => 'E02003177',
        '2XG' => 'E02003177',
        '2XH' => 'E02003177',
        '2XN' => 'E02003173',
        '2XQ' => 'E02003177',
        '2XR' => 'E02003177',
        '2XZ' => 'E02003173',
        '2YA' => 'E02003173',
        '2YB' => 'E02003180',
        '2YD' => 'E02003173',
        '2YE' => 'E02003177',
        '2YF' => 'E02003180',
        '2YG' => 'E02003180',
        '2YH' => 'E02003180',
        '2YJ' => 'E02003180',
        '2YL' => 'E02003180',
        '2YN' => 'E02003180',
        '2YP' => 'E02003180',
        '2YQ' => 'E02003180',
        '2YR' => 'E02003180',
        '2YS' => 'E02003180',
        '2YT' => 'E02003180',
        '2YU' => 'E02003173',
        '2YW' => 'E02003180',
        '2YX' => 'E02003180',
        '2YY' => 'E02003180',
        '2ZA' => 'E02003173',
        '2ZB' => 'E02003180',
        '2ZD' => 'E02003180',
        '2ZE' => 'E02003180',
        '2ZF' => 'E02003180',
        '2ZG' => 'E02003180',
        '2ZH' => 'E02003180',
        '2ZJ' => 'E02003180',
        '2ZL' => 'E02003180',
        '2ZN' => 'E02003173',
        '2ZP' => 'E02003180',
        '2ZQ' => 'E02003180',
        '2ZR' => 'E02003180',
        '2ZS' => 'E02003173',
        '2ZT' => 'E02003173',
        '2ZU' => 'E02003180',
        '2ZW' => 'E02003180',
        '2ZX' => 'E02003173',
        '3AA' => 'E02003177',
        '3AB' => 'E02003177',
        '3AD' => 'E02003177',
        '3AE' => 'E02003177',
        '3AF' => 'E02003177',
        '3AG' => 'E02003177',
        '3AH' => 'E02003177',
        '3AJ' => 'E02003177',
        '3AL' => 'E02003177',
        '3AN' => 'E02003177',
        '3AP' => 'E02003177',
        '3AQ' => 'E02003177',
        '3AR' => 'E02003177',
        '3AS' => 'E02003177',
        '3AT' => 'E02003177',
        '3AU' => 'E02003177',
        '3AW' => 'E02003177',
        '3AX' => 'E02003177',
        '3AY' => 'E02003177',
        '3AZ' => 'E02003177',
        '3BA' => 'E02003177',
        '3BB' => 'E02003177',
        '3BD' => 'E02003177',
        '3BE' => 'E02003177',
        '3BG' => 'E02003177',
        '3BH' => 'E02003177',
        '3BJ' => 'E02003177',
        '3BL' => 'E02003177',
        '3BN' => 'E02003177',
        '3BP' => 'E02003177',
        '3BQ' => 'E02003177',
        '3BS' => 'E02003180',
        '3BT' => 'E02003181',
        '3BU' => 'E02003181',
        '3BW' => 'E02003177',
        '3BX' => 'E02003181',
        '3BY' => 'E02003181',
        '3BZ' => 'E02003177',
        '3DA' => 'E02003177',
        '3DB' => 'E02003180',
        '3DD' => 'E02003177',
        '3DE' => 'E02003177',
        '3DF' => 'E02003177',
        '3DG' => 'E02003181',
        '3DH' => 'E02003177',
        '3DL' => 'E02003181',
        '3DN' => 'E02003181',
        '3DP' => 'E02003181',
        '3DQ' => 'E02003177',
        '3DR' => 'E02003181',
        '3DS' => 'E02003181',
        '3DT' => 'E02003181',
        '3DU' => 'E02003177',
        '3DW' => 'E02003181',
        '3DX' => 'E02003177',
        '3DY' => 'E02003177',
        '3DZ' => 'E02003177',
        '3EA' => 'E02003181',
        '3EB' => 'E02003181',
        '3ED' => 'E02003181',
        '3EE' => 'E02003181',
        '3EF' => 'E02003177',
        '3EG' => 'E02003177',
        '3EH' => 'E02003177',
        '3EJ' => 'E02003177',
        '3EL' => 'E02003177',
        '3EN' => 'E02003177',
        '3EQ' => 'E02003177',
        '3ER' => 'E02003181',
        '3ES' => 'E02003181',
        '3ET' => 'E02003175',
        '3EU' => 'E02003175',
        '3EW' => 'E02003175',
        '3EX' => 'E02003175',
        '3EY' => 'E02003181',
        '3EZ' => 'E02003175',
        '3HA' => 'E02003175',
        '3HB' => 'E02003175',
        '3HD' => 'E02003175',
        '3HE' => 'E02003175',
        '3HF' => 'E02003175',
        '3HG' => 'E02003180',
        '3HH' => 'E02003175',
        '3HJ' => 'E02003175',
        '3HL' => 'E02003175',
        '3HN' => 'E02003175',
        '3HP' => 'E02003175',
        '3HQ' => 'E02003181',
        '3HR' => 'E02003175',
        '3HS' => 'E02003175',
        '3HT' => 'E02003175',
        '3HU' => 'E02003175',
        '3HW' => 'E02003175',
        '3HX' => 'E02003177',
        '3HY' => 'E02003177',
        '3HZ' => 'E02003175',
        '3JA' => 'E02003177',
        '3JB' => 'E02003177',
        '3JD' => 'E02003177',
        '3JE' => 'E02003177',
        '3JF' => 'E02003177',
        '3JG' => 'E02003177',
        '3JH' => 'E02003177',
        '3JJ' => 'E02003177',
        '3JL' => 'E02003177',
        '3JN' => 'E02003177',
        '3JQ' => 'E02003177',
        '3JS' => 'E02003177',
        '3JT' => 'E02003177',
        '3JU' => 'E02003177',
        '3JX' => 'E02003177',
        '3JY' => 'E02003175',
        '3JZ' => 'E02003175',
        '3LA' => 'E02003175',
        '3LB' => 'E02003175',
        '3LD' => 'E02003175',
        '3LE' => 'E02003175',
        '3LF' => 'E02003175',
        '3LG' => 'E02003177',
        '3LH' => 'E02003177',
        '3LJ' => 'E02003177',
        '3LL' => 'E02003175',
        '3LN' => 'E02003175',
        '3LP' => 'E02003175',
        '3LQ' => 'E02003175',
        '3LR' => 'E02003175',
        '3LS' => 'E02003175',
        '3LT' => 'E02003175',
        '3LU' => 'E02003177',
        '3LW' => 'E02003175',
        '3LX' => 'E02003177',
        '3LY' => 'E02003177',
        '3LZ' => 'E02003177',
        '3NA' => 'E02003177',
        '3NB' => 'E02003177',
        '3ND' => 'E02003177',
        '3NE' => 'E02003177',
        '3NF' => 'E02003177',
        '3NG' => 'E02003177',
        '3NH' => 'E02003175',
        '3NJ' => 'E02003175',
        '3NL' => 'E02003177',
        '3NN' => 'E02003175',
        '3NP' => 'E02003175',
        '3NQ' => 'E02003177',
        '3NR' => 'E02003175',
        '3NS' => 'E02003177',
        '3NT' => 'E02003177',
        '3NU' => 'E02003177',
        '3NW' => 'E02003175',
        '3NX' => 'E02003177',
        '3NY' => 'E02003177',
        '3NZ' => 'E02003177',
        '3PA' => 'E02003177',
        '3PB' => 'E02003177',
        '3PD' => 'E02003177',
        '3PE' => 'E02003175',
        '3PF' => 'E02003175',
        '3PG' => 'E02003175',
        '3PH' => 'E02003175',
        '3PJ' => 'E02003175',
        '3PL' => 'E02003175',
        '3PN' => 'E02003175',
        '3PP' => 'E02003177',
        '3PQ' => 'E02003175',
        '3PR' => 'E02003175',
        '3PS' => 'E02003175',
        '3PT' => 'E02003175',
        '3PU' => 'E02003175',
        '3PW' => 'E02003175',
        '3PX' => 'E02003175',
        '3PY' => 'E02003175',
        '3PZ' => 'E02003175',
        '3QA' => 'E02003175',
        '3QB' => 'E02003175',
        '3QD' => 'E02003175',
        '3QE' => 'E02003175',
        '3QF' => 'E02003173',
        '3QG' => 'E02003175',
        '3QH' => 'E02003175',
        '3QJ' => 'E02003175',
        '3QL' => 'E02003175',
        '3QN' => 'E02003175',
        '3QP' => 'E02003177',
        '3QQ' => 'E02003175',
        '3QR' => 'E02003175',
        '3QS' => 'E02003175',
        '3QT' => 'E02003177',
        '3QU' => 'E02003175',
        '3QW' => 'E02003177',
        '3QX' => 'E02003175',
        '3QY' => 'E02003175',
        '3QZ' => 'E02003175',
        '3RA' => 'E02003175',
        '3RB' => 'E02003177',
        '3RD' => 'E02003177',
        '3RE' => 'E02003175',
        '3RF' => 'E02003175',
        '3RG' => 'E02003175',
        '3RQ' => 'E02003175',
        '3SA' => 'E02003175',
        '3SB' => 'E02003175',
        '3SD' => 'E02003175',
        '3SE' => 'E02003175',
        '3SF' => 'E02003175',
        '3SG' => 'E02003175',
        '3WZ' => 'E02003175',
        '3XB' => 'E02003173',
        '3XN' => 'E02003173',
        '3XQ' => 'E02003173',
        '3YA' => 'E02003180',
        '3YB' => 'E02003175',
        '3YD' => 'E02003180',
        '3YE' => 'E02003175',
        '3YF' => 'E02003180',
        '3YG' => 'E02003175',
        '3YH' => 'E02003180',
        '3YJ' => 'E02003180',
        '3YN' => 'E02003177',
        '3YP' => 'E02003177',
        '3YQ' => 'E02003173',
        '3YR' => 'E02003177',
        '3YS' => 'E02003177',
        '3YT' => 'E02003177',
        '3YU' => 'E02003177',
        '3YW' => 'E02003173',
        '3YX' => 'E02003175',
        '3YY' => 'E02003175',
        '3YZ' => 'E02003175',
        '3ZA' => 'E02003175',
        '3ZB' => 'E02003173',
        '3ZD' => 'E02003180',
        '3ZE' => 'E02003180',
        '3ZF' => 'E02003175',
        '3ZG' => 'E02003175',
        '3ZH' => 'E02003175',
        '3ZJ' => 'E02003180',
        '3ZL' => 'E02003180',
        '3ZN' => 'E02003173',
        '3ZQ' => 'E02003180',
        '3ZR' => 'E02003173',
        '3ZS' => 'E02003180',
        '3ZX' => 'E02003180',
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
