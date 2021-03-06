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
final class SN8
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02006635',
        '1AB' => 'E02006635',
        '1AD' => 'E02006635',
        '1AE' => 'E02006635',
        '1AF' => 'E02006635',
        '1AG' => 'E02006635',
        '1AH' => 'E02006635',
        '1AJ' => 'E02006635',
        '1AL' => 'E02006635',
        '1AN' => 'E02006635',
        '1AP' => 'E02006635',
        '1AQ' => 'E02006635',
        '1AR' => 'E02006635',
        '1AS' => 'E02006635',
        '1AT' => 'E02006635',
        '1AU' => 'E02006635',
        '1AW' => 'E02006635',
        '1AX' => 'E02006635',
        '1AY' => 'E02006635',
        '1AZ' => 'E02006635',
        '1BA' => 'E02006635',
        '1BB' => 'E02006635',
        '1BD' => 'E02006635',
        '1BE' => 'E02006635',
        '1BG' => 'E02006635',
        '1BH' => 'E02006635',
        '1BJ' => 'E02006635',
        '1BL' => 'E02006635',
        '1BN' => 'E02006635',
        '1BP' => 'E02006635',
        '1BQ' => 'E02006635',
        '1BS' => 'E02006635',
        '1BT' => 'E02006635',
        '1BU' => 'E02006635',
        '1BW' => 'E02006635',
        '1BX' => 'E02006635',
        '1BY' => 'E02006635',
        '1BZ' => 'E02006635',
        '1DA' => 'E02006635',
        '1DB' => 'E02006635',
        '1DD' => 'E02006635',
        '1DE' => 'E02006635',
        '1DF' => 'E02006635',
        '1DG' => 'E02006635',
        '1DH' => 'E02006635',
        '1DJ' => 'E02006635',
        '1DL' => 'E02006635',
        '1DN' => 'E02006635',
        '1DP' => 'E02006635',
        '1DQ' => 'E02006635',
        '1DR' => 'E02006635',
        '1DS' => 'E02006635',
        '1DT' => 'E02006635',
        '1DU' => 'E02006635',
        '1DW' => 'E02006635',
        '1DX' => 'E02006635',
        '1DY' => 'E02006635',
        '1DZ' => 'E02006635',
        '1EA' => 'E02006635',
        '1EB' => 'E02006635',
        '1ED' => 'E02006635',
        '1EE' => 'E02006635',
        '1EF' => 'E02006634',
        '1EG' => 'E02006635',
        '1EH' => 'E02006634',
        '1EJ' => 'E02006635',
        '1EL' => 'E02006635',
        '1EN' => 'E02006635',
        '1EP' => 'E02006635',
        '1EQ' => 'E02006635',
        '1ER' => 'E02006635',
        '1ES' => 'E02006634',
        '1EU' => 'E02006635',
        '1EW' => 'E02006635',
        '1EX' => 'E02006635',
        '1FA' => 'E02006635',
        '1FB' => 'E02006635',
        '1FD' => 'E02006635',
        '1GP' => 'E02006635',
        '1HA' => 'E02006635',
        '1HB' => 'E02006635',
        '1HD' => 'E02006635',
        '1HE' => 'E02006635',
        '1HF' => 'E02006635',
        '1HG' => 'E02006635',
        '1HH' => 'E02006635',
        '1HJ' => 'E02006635',
        '1HL' => 'E02006635',
        '1HN' => 'E02006635',
        '1HP' => 'E02006635',
        '1HQ' => 'E02006635',
        '1HR' => 'E02006635',
        '1HS' => 'E02006635',
        '1HT' => 'E02006635',
        '1HU' => 'E02006635',
        '1HW' => 'E02006635',
        '1HX' => 'E02006635',
        '1HY' => 'E02006635',
        '1HZ' => 'E02006635',
        '1JA' => 'E02006635',
        '1JB' => 'E02006635',
        '1JD' => 'E02006635',
        '1JE' => 'E02006635',
        '1JF' => 'E02006635',
        '1JG' => 'E02006635',
        '1JH' => 'E02006635',
        '1JJ' => 'E02006635',
        '1JL' => 'E02006635',
        '1JN' => 'E02006635',
        '1JP' => 'E02006635',
        '1JQ' => 'E02006635',
        '1JR' => 'E02006635',
        '1JS' => 'E02006635',
        '1JT' => 'E02006635',
        '1JU' => 'E02006635',
        '1JW' => 'E02006635',
        '1JX' => 'E02006635',
        '1JZ' => 'E02006635',
        '1LA' => 'E02006635',
        '1LB' => 'E02006635',
        '1LD' => 'E02006635',
        '1LE' => 'E02006635',
        '1LG' => 'E02006635',
        '1LH' => 'E02006635',
        '1LJ' => 'E02006635',
        '1LN' => 'E02006635',
        '1LP' => 'E02006635',
        '1LQ' => 'E02006635',
        '1LR' => 'E02006635',
        '1LS' => 'E02006635',
        '1LT' => 'E02006635',
        '1LU' => 'E02006635',
        '1LW' => 'E02006635',
        '1LX' => 'E02006635',
        '1LY' => 'E02006635',
        '1LZ' => 'E02006635',
        '1NA' => 'E02006635',
        '1NB' => 'E02006635',
        '1ND' => 'E02006635',
        '1NE' => 'E02006635',
        '1NF' => 'E02006635',
        '1NG' => 'E02006635',
        '1NH' => 'E02006635',
        '1NJ' => 'E02006635',
        '1NL' => 'E02006635',
        '1NN' => 'E02006635',
        '1NP' => 'E02006635',
        '1NQ' => 'E02006635',
        '1NR' => 'E02006635',
        '1NS' => 'E02006635',
        '1NT' => 'E02006635',
        '1NU' => 'E02006635',
        '1NW' => 'E02006635',
        '1NY' => 'E02006635',
        '1NZ' => 'E02006635',
        '1PA' => 'E02006635',
        '1PB' => 'E02006635',
        '1PD' => 'E02006634',
        '1PE' => 'E02006635',
        '1PF' => 'E02006635',
        '1PG' => 'E02006634',
        '1PH' => 'E02006635',
        '1PJ' => 'E02006635',
        '1PL' => 'E02006634',
        '1PN' => 'E02006634',
        '1PP' => 'E02006634',
        '1PQ' => 'E02006634',
        '1PR' => 'E02006635',
        '1PS' => 'E02006634',
        '1PT' => 'E02006634',
        '1PU' => 'E02006634',
        '1PW' => 'E02006635',
        '1PX' => 'E02006634',
        '1PY' => 'E02006634',
        '1PZ' => 'E02006634',
        '1QA' => 'E02006634',
        '1QB' => 'E02006634',
        '1QD' => 'E02006636',
        '1QE' => 'E02006636',
        '1QF' => 'E02006634',
        '1QG' => 'E02006634',
        '1QH' => 'E02006634',
        '1QJ' => 'E02006634',
        '1QL' => 'E02006634',
        '1QN' => 'E02006634',
        '1QP' => 'E02006641',
        '1QQ' => 'E02006634',
        '1QR' => 'E02006634',
        '1QS' => 'E02006634',
        '1QT' => 'E02006634',
        '1QU' => 'E02006634',
        '1QW' => 'E02006634',
        '1QX' => 'E02006634',
        '1QY' => 'E02006634',
        '1QZ' => 'E02006634',
        '1RA' => 'E02006634',
        '1RB' => 'E02006634',
        '1RD' => 'E02006634',
        '1RE' => 'E02006634',
        '1RF' => 'E02006634',
        '1RG' => 'E02006634',
        '1RH' => 'E02006634',
        '1RJ' => 'E02006634',
        '1RL' => 'E02006634',
        '1RN' => 'E02006634',
        '1RP' => 'E02006634',
        '1RQ' => 'E02006634',
        '1RR' => 'E02006635',
        '1RS' => 'E02006634',
        '1RT' => 'E02006634',
        '1RU' => 'E02006634',
        '1RW' => 'E02006634',
        '1RX' => 'E02006634',
        '1RY' => 'E02006634',
        '1RZ' => 'E02006634',
        '1SA' => 'E02006634',
        '1SB' => 'E02006634',
        '1SD' => 'E02006634',
        '1SE' => 'E02006634',
        '1SF' => 'E02006634',
        '1SG' => 'E02006634',
        '1SH' => 'E02006634',
        '1SJ' => 'E02006634',
        '1SL' => 'E02006634',
        '1SN' => 'E02006634',
        '1SP' => 'E02006634',
        '1SQ' => 'E02006634',
        '1SR' => 'E02006634',
        '1SS' => 'E02006634',
        '1ST' => 'E02006634',
        '1SU' => 'E02006634',
        '1SW' => 'E02006634',
        '1SX' => 'E02006634',
        '1SY' => 'E02006634',
        '1SZ' => 'E02006634',
        '1TA' => 'E02006634',
        '1TB' => 'E02006634',
        '1TD' => 'E02006634',
        '1TE' => 'E02006634',
        '1TF' => 'E02006634',
        '1TG' => 'E02006634',
        '1TH' => 'E02006635',
        '1TJ' => 'E02006635',
        '1TL' => 'E02006635',
        '1TN' => 'E02006635',
        '1TP' => 'E02006635',
        '1TQ' => 'E02006634',
        '1TR' => 'E02006635',
        '1TS' => 'E02006635',
        '1TT' => 'E02006635',
        '1TU' => 'E02006635',
        '1TW' => 'E02006635',
        '1TX' => 'E02006634',
        '1TY' => 'E02006634',
        '1TZ' => 'E02006635',
        '1UA' => 'E02006635',
        '1UB' => 'E02006635',
        '1UD' => 'E02006635',
        '1UE' => 'E02006635',
        '1UF' => 'E02006635',
        '1UG' => 'E02006635',
        '1UH' => 'E02006635',
        '1UJ' => 'E02006634',
        '1UL' => 'E02006635',
        '1UN' => 'E02006635',
        '1UP' => 'E02006635',
        '1UQ' => 'E02006635',
        '1UR' => 'E02006635',
        '1US' => 'E02006635',
        '1UT' => 'E02006635',
        '1UU' => 'E02006635',
        '1UW' => 'E02006635',
        '1UX' => 'E02006635',
        '1UY' => 'E02006635',
        '1UZ' => 'E02006635',
        '1WA' => 'E02006635',
        '1WB' => 'E02006635',
        '1WD' => 'E02006635',
        '1WE' => 'E02006635',
        '1WF' => 'E02006635',
        '1WG' => 'E02006635',
        '1WH' => 'E02006635',
        '1WJ' => 'E02006635',
        '1WL' => 'E02006635',
        '1WN' => 'E02006635',
        '1WP' => 'E02006635',
        '1WQ' => 'E02006635',
        '1WR' => 'E02006635',
        '1WS' => 'E02006635',
        '1WT' => 'E02006635',
        '1WU' => 'E02006635',
        '1WX' => 'E02006635',
        '1WZ' => 'E02006635',
        '1XA' => 'E02006635',
        '1XB' => 'E02006634',
        '1XD' => 'E02006635',
        '1XE' => 'E02006635',
        '1XF' => 'E02006634',
        '1XG' => 'E02006635',
        '1XH' => 'E02006634',
        '1XJ' => 'E02006634',
        '1XL' => 'E02006634',
        '1XN' => 'E02006635',
        '1XP' => 'E02006634',
        '1XQ' => 'E02006634',
        '1XR' => 'E02006634',
        '1XS' => 'E02006634',
        '1XT' => 'E02006634',
        '1XU' => 'E02006634',
        '1XW' => 'E02006634',
        '1XX' => 'E02006635',
        '1XY' => 'E02006635',
        '1XZ' => 'E02006634',
        '1YA' => 'E02006635',
        '1YB' => 'E02006635',
        '1YD' => 'E02006635',
        '1YE' => 'E02006635',
        '1YF' => 'E02006635',
        '1YG' => 'E02006635',
        '1YH' => 'E02006635',
        '1YJ' => 'E02006634',
        '1YL' => 'E02006634',
        '1YN' => 'E02006634',
        '1YP' => 'E02006634',
        '1YQ' => 'E02006635',
        '1YR' => 'E02006635',
        '1YS' => 'E02006635',
        '1YT' => 'E02006634',
        '1YU' => 'E02006635',
        '1YW' => 'E02006634',
        '1YY' => 'E02006635',
        '1ZA' => 'E02006635',
        '1ZB' => 'E02006635',
        '1ZD' => 'E02006635',
        '1ZE' => 'E02006635',
        '1ZH' => 'E02006635',
        '1ZJ' => 'E02006635',
        '1ZL' => 'E02006635',
        '1ZN' => 'E02006635',
        '1ZP' => 'E02006635',
        '1ZQ' => 'E02006635',
        '1ZR' => 'E02006635',
        '1ZU' => 'E02006635',
        '1ZY' => 'E02006635',
        '1ZZ' => 'E02006635',
        '2AA' => 'E02006635',
        '2AB' => 'E02006635',
        '2AD' => 'E02006635',
        '2AE' => 'E02006635',
        '2AF' => 'E02006635',
        '2AG' => 'E02006635',
        '2AH' => 'E02006635',
        '2AJ' => 'E02006635',
        '2AL' => 'E02006635',
        '2AN' => 'E02006635',
        '2AP' => 'E02006635',
        '2AQ' => 'E02006634',
        '2AR' => 'E02006635',
        '2AS' => 'E02006635',
        '2AT' => 'E02006635',
        '2AU' => 'E02006635',
        '2AW' => 'E02006635',
        '2AX' => 'E02006635',
        '2AY' => 'E02006635',
        '2AZ' => 'E02006635',
        '2BA' => 'E02006635',
        '2BB' => 'E02006635',
        '2BD' => 'E02006635',
        '2BE' => 'E02006635',
        '2BF' => 'E02006635',
        '2BG' => 'E02006635',
        '2BH' => 'E02006635',
        '2BJ' => 'E02006635',
        '2BL' => 'E02006634',
        '2BN' => 'E02006635',
        '2BP' => 'E02006634',
        '2BQ' => 'E02006635',
        '2BS' => 'E02006634',
        '2BT' => 'E02006634',
        '2BU' => 'E02006634',
        '2BW' => 'E02006634',
        '2BX' => 'E02006634',
        '2BY' => 'E02006634',
        '2BZ' => 'E02006634',
        '2DA' => 'E02006634',
        '2DB' => 'E02006634',
        '2DD' => 'E02006634',
        '2DE' => 'E02006634',
        '2DF' => 'E02006634',
        '2DG' => 'E02006634',
        '2DH' => 'E02006634',
        '2DJ' => 'E02006634',
        '2DL' => 'E02006634',
        '2DN' => 'E02006634',
        '2DP' => 'E02006634',
        '2DQ' => 'E02006634',
        '2DR' => 'E02006634',
        '2DS' => 'E02006634',
        '2DT' => 'E02006634',
        '2DU' => 'E02006634',
        '2DW' => 'E02006634',
        '2DX' => 'E02006634',
        '2DY' => 'E02006634',
        '2DZ' => 'E02006634',
        '2EA' => 'E02006634',
        '2EB' => 'E02006634',
        '2ED' => 'E02006634',
        '2EE' => 'E02006634',
        '2EF' => 'E02006634',
        '2EG' => 'E02006634',
        '2EH' => 'E02006634',
        '2EJ' => 'E02006634',
        '2EL' => 'E02006634',
        '2EN' => 'E02006634',
        '2EP' => 'E02006634',
        '2EQ' => 'E02006634',
        '2ER' => 'E02006634',
        '2ES' => 'E02006635',
        '2ET' => 'E02006634',
        '2EU' => 'E02006634',
        '2EW' => 'E02006634',
        '2EX' => 'E02006634',
        '2EY' => 'E02006634',
        '2EZ' => 'E02006634',
        '2FA' => 'E02006635',
        '2FB' => 'E02006635',
        '2FD' => 'E02006635',
        '2FE' => 'E02006635',
        '2FF' => 'E02006634',
        '2FG' => 'E02006634',
        '2FH' => 'E02006634',
        '2FJ' => 'E02006634',
        '2FL' => 'E02006634',
        '2FN' => 'E02006635',
        '2FP' => 'E02006635',
        '2FQ' => 'E02006634',
        '2FR' => 'E02006634',
        '2FS' => 'E02003219',
        '2FT' => 'E02006634',
        '2FW' => 'E02006635',
        '2GZ' => 'E02006634',
        '2HA' => 'E02006634',
        '2HB' => 'E02006634',
        '2HD' => 'E02006634',
        '2HE' => 'E02006634',
        '2HF' => 'E02006634',
        '2HG' => 'E02006634',
        '2HH' => 'E02006634',
        '2HJ' => 'E02006634',
        '2HL' => 'E02006634',
        '2HN' => 'E02006634',
        '2HP' => 'E02006634',
        '2HQ' => 'E02006634',
        '2HR' => 'E02006634',
        '2HS' => 'E02006634',
        '2HT' => 'E02006634',
        '2HU' => 'E02006634',
        '2HW' => 'E02006634',
        '2HX' => 'E02006634',
        '2HY' => 'E02006634',
        '2HZ' => 'E02006634',
        '2JA' => 'E02006634',
        '2JB' => 'E02006634',
        '2JD' => 'E02006634',
        '2JE' => 'E02006634',
        '2JF' => 'E02006634',
        '2JG' => 'E02006634',
        '2JH' => 'E02006634',
        '2JJ' => 'E02006634',
        '2JL' => 'E02006634',
        '2JN' => 'E02006634',
        '2JP' => 'E02006634',
        '2JQ' => 'E02006634',
        '2JR' => 'E02006634',
        '2JS' => 'E02006634',
        '2JT' => 'E02003368',
        '2JU' => 'E02006634',
        '2JW' => 'E02006634',
        '2JX' => 'E02006634',
        '2JY' => 'E02003219',
        '2JZ' => 'E02006634',
        '2LA' => 'E02006634',
        '2LB' => 'E02006634',
        '2LD' => 'E02006634',
        '2LE' => 'E02006634',
        '2LF' => 'E02006634',
        '2LG' => 'E02006634',
        '2LH' => 'E02006634',
        '2LJ' => 'E02006634',
        '2LL' => 'E02006634',
        '2LN' => 'E02006634',
        '2LP' => 'E02006634',
        '2LQ' => 'E02006634',
        '2LR' => 'E02006634',
        '2LS' => 'E02006634',
        '2LT' => 'E02006634',
        '2LU' => 'E02006634',
        '2LW' => 'E02006634',
        '2LX' => 'E02006634',
        '2LY' => 'E02006634',
        '2LZ' => 'E02006634',
        '2NA' => 'E02006634',
        '2NB' => 'E02006634',
        '2ND' => 'E02006634',
        '2NE' => 'E02006634',
        '2NF' => 'E02006634',
        '2NG' => 'E02006634',
        '2NH' => 'E02006634',
        '2NJ' => 'E02006634',
        '2NL' => 'E02006634',
        '2NN' => 'E02006634',
        '2NP' => 'E02006634',
        '2NQ' => 'E02006634',
        '2NR' => 'E02006634',
        '2NS' => 'E02006634',
        '2NT' => 'E02006634',
        '2NU' => 'E02006634',
        '2NW' => 'E02006634',
        '2NX' => 'E02006634',
        '2NY' => 'E02006634',
        '2NZ' => 'E02006634',
        '2PA' => 'E02006634',
        '2PB' => 'E02006634',
        '2PD' => 'E02006634',
        '2PE' => 'E02006634',
        '2PF' => 'E02006635',
        '2PG' => 'E02006634',
        '2PH' => 'E02006634',
        '2PJ' => 'E02006634',
        '2PL' => 'E02006634',
        '2PN' => 'E02006634',
        '2PP' => 'E02006634',
        '2PQ' => 'E02006634',
        '2PR' => 'E02006634',
        '2PS' => 'E02006634',
        '2PT' => 'E02006634',
        '2PU' => 'E02006634',
        '2PW' => 'E02006634',
        '2PX' => 'E02006634',
        '2PY' => 'E02006634',
        '2PZ' => 'E02006634',
        '2QA' => 'E02006634',
        '2QB' => 'E02006634',
        '2QD' => 'E02006634',
        '2QE' => 'E02006634',
        '2QF' => 'E02006634',
        '2QG' => 'E02006634',
        '2QH' => 'E02006634',
        '2QJ' => 'E02006634',
        '2QL' => 'E02006634',
        '2QN' => 'E02006634',
        '2QP' => 'E02006634',
        '2QQ' => 'E02006634',
        '2QR' => 'E02006634',
        '2QS' => 'E02006634',
        '2QT' => 'E02006634',
        '2QU' => 'E02006634',
        '2QW' => 'E02006634',
        '2QX' => 'E02006634',
        '2QY' => 'E02006634',
        '2QZ' => 'E02006634',
        '2RA' => 'E02006634',
        '2RB' => 'E02006634',
        '2RD' => 'E02006634',
        '2RE' => 'E02006634',
        '2RF' => 'E02006634',
        '2RG' => 'E02006634',
        '2RH' => 'E02006634',
        '2RJ' => 'E02006634',
        '2RL' => 'E02006634',
        '2RN' => 'E02006635',
        '2RP' => 'E02006634',
        '2RQ' => 'E02006634',
        '2RR' => 'E02006635',
        '2RS' => 'E02006635',
        '2RT' => 'E02006634',
        '2RU' => 'E02006635',
        '2RW' => 'E02006634',
        '2RX' => 'E02006634',
        '2RY' => 'E02006634',
        '2RZ' => 'E02006634',
        '2SA' => 'E02006635',
        '2SB' => 'E02006634',
        '2SD' => 'E02006634',
        '2SE' => 'E02006634',
        '2SF' => 'E02006634',
        '2SH' => 'E02006635',
        '2SJ' => 'E02006634',
        '2SL' => 'E02006634',
        '2SN' => 'E02006635',
        '2SP' => 'E02006635',
        '2SQ' => 'E02006634',
        '2SR' => 'E02006635',
        '2SS' => 'E02006635',
        '2ST' => 'E02006634',
        '2SW' => 'E02006635',
        '2SY' => 'E02006634',
        '2SZ' => 'E02006634',
        '2TA' => 'E02006634',
        '2TB' => 'E02006634',
        '2TD' => 'E02006634',
        '2TE' => 'E02006634',
        '2TF' => 'E02006634',
        '2TG' => 'E02006634',
        '2TH' => 'E02006634',
        '2TJ' => 'E02006634',
        '2TL' => 'E02006635',
        '2TN' => 'E02006635',
        '2TP' => 'E02006634',
        '2TQ' => 'E02006635',
        '2TR' => 'E02006635',
        '2TS' => 'E02006634',
        '2TT' => 'E02006635',
        '2TU' => 'E02006635',
        '2TW' => 'E02006634',
        '2TX' => 'E02006634',
        '2TY' => 'E02006634',
        '2TZ' => 'E02006635',
        '2UA' => 'E02006635',
        '2UB' => 'E02006635',
        '2UD' => 'E02006634',
        '2UE' => 'E02006634',
        '2WA' => 'E02006635',
        '2WB' => 'E02006635',
        '2WD' => 'E02006635',
        '2WE' => 'E02006635',
        '2WF' => 'E02006635',
        '2WG' => 'E02006635',
        '2WH' => 'E02006635',
        '2WJ' => 'E02006635',
        '2WL' => 'E02006635',
        '2WN' => 'E02006635',
        '2WP' => 'E02006635',
        '2WQ' => 'E02006635',
        '2WR' => 'E02006635',
        '2WS' => 'E02006635',
        '2WT' => 'E02006635',
        '2WU' => 'E02006635',
        '2WX' => 'E02006635',
        '2WZ' => 'E02006635',
        '2XA' => 'E02006634',
        '2XB' => 'E02006634',
        '2XH' => 'E02006635',
        '2XJ' => 'E02006634',
        '2XL' => 'E02006635',
        '2XN' => 'E02006634',
        '2XQ' => 'E02006635',
        '2XZ' => 'E02006634',
        '2ZJ' => 'E02006635',
        '2ZN' => 'E02006634',
        '2ZQ' => 'E02006635',
        '2ZR' => 'E02006635',
        '2ZX' => 'E02006634',
        '3AA' => 'E02006640',
        '3AB' => 'E02006640',
        '3AD' => 'E02006640',
        '3AE' => 'E02006640',
        '3AF' => 'E02006640',
        '3AG' => 'E02006640',
        '3AH' => 'E02006640',
        '3AJ' => 'E02006640',
        '3AL' => 'E02006640',
        '3AN' => 'E02006640',
        '3AP' => 'E02006640',
        '3AQ' => 'E02006640',
        '3AR' => 'E02006640',
        '3AS' => 'E02006640',
        '3AT' => 'E02006640',
        '3AU' => 'E02006640',
        '3AW' => 'E02006640',
        '3AX' => 'E02006640',
        '3AY' => 'E02006640',
        '3AZ' => 'E02006640',
        '3BA' => 'E02006640',
        '3BB' => 'E02006640',
        '3BD' => 'E02006640',
        '3BE' => 'E02006640',
        '3BF' => 'E02006635',
        '3BG' => 'E02006640',
        '3BH' => 'E02006640',
        '3BJ' => 'E02006640',
        '3BL' => 'E02006640',
        '3BN' => 'E02006640',
        '3BP' => 'E02006640',
        '3BQ' => 'E02006640',
        '3BS' => 'E02006640',
        '3BT' => 'E02006640',
        '3BU' => 'E02006640',
        '3BW' => 'E02006640',
        '3BX' => 'E02006640',
        '3BY' => 'E02006640',
        '3BZ' => 'E02006640',
        '3DA' => 'E02006640',
        '3DB' => 'E02006640',
        '3DD' => 'E02006640',
        '3DE' => 'E02006640',
        '3DF' => 'E02006640',
        '3DG' => 'E02006640',
        '3DH' => 'E02006640',
        '3DJ' => 'E02006640',
        '3DL' => 'E02006640',
        '3DN' => 'E02006640',
        '3DP' => 'E02006640',
        '3DQ' => 'E02006640',
        '3DR' => 'E02006640',
        '3DS' => 'E02006635',
        '3DT' => 'E02006640',
        '3DU' => 'E02006640',
        '3DW' => 'E02006640',
        '3DX' => 'E02006640',
        '3DY' => 'E02006640',
        '3DZ' => 'E02006640',
        '3EA' => 'E02006640',
        '3EB' => 'E02006640',
        '3ED' => 'E02006640',
        '3EE' => 'E02006640',
        '3EF' => 'E02006640',
        '3EG' => 'E02006640',
        '3EH' => 'E02006640',
        '3EJ' => 'E02006640',
        '3EL' => 'E02006640',
        '3EN' => 'E02006640',
        '3EP' => 'E02006640',
        '3EQ' => 'E02006640',
        '3ER' => 'E02006640',
        '3ES' => 'E02006640',
        '3ET' => 'E02006640',
        '3EU' => 'E02006640',
        '3EW' => 'E02006640',
        '3EX' => 'E02006640',
        '3EY' => 'E02006640',
        '3EZ' => 'E02006640',
        '3FA' => 'E02006640',
        '3FB' => 'E02006635',
        '3FD' => 'E02006635',
        '3FE' => 'E02006640',
        '3FF' => 'E02006640',
        '3FG' => 'E02006640',
        '3FH' => 'E02006640',
        '3FJ' => 'E02006640',
        '3FL' => 'E02006640',
        '3FN' => 'E02006640',
        '3FP' => 'E02006640',
        '3FQ' => 'E02006640',
        '3FR' => 'E02006640',
        '3FS' => 'E02006640',
        '3FT' => 'E02006640',
        '3FU' => 'E02006640',
        '3FW' => 'E02006640',
        '3FY' => 'E02006640',
        '3GA' => 'E02006640',
        '3GP' => 'E02006640',
        '3GZ' => 'E02006640',
        '3HA' => 'E02006640',
        '3HB' => 'E02006640',
        '3HD' => 'E02006640',
        '3HE' => 'E02006640',
        '3HF' => 'E02006640',
        '3HG' => 'E02006640',
        '3HH' => 'E02006640',
        '3HJ' => 'E02006640',
        '3HL' => 'E02006636',
        '3HN' => 'E02006634',
        '3HP' => 'E02006636',
        '3HQ' => 'E02006640',
        '3HR' => 'E02006640',
        '3HS' => 'E02006640',
        '3HT' => 'E02006640',
        '3HU' => 'E02006634',
        '3HW' => 'E02006636',
        '3HX' => 'E02006640',
        '3HY' => 'E02006640',
        '3HZ' => 'E02006640',
        '3JA' => 'E02006640',
        '3JB' => 'E02006640',
        '3JD' => 'E02006640',
        '3JE' => 'E02006640',
        '3JF' => 'E02006640',
        '3JG' => 'E02006640',
        '3JH' => 'E02006640',
        '3JJ' => 'E02006640',
        '3JL' => 'E02006640',
        '3JN' => 'E02006640',
        '3JP' => 'E02006640',
        '3JQ' => 'E02006640',
        '3JR' => 'E02006640',
        '3JS' => 'E02006640',
        '3JT' => 'E02006634',
        '3JU' => 'E02006634',
        '3JW' => 'E02006640',
        '3JX' => 'E02006634',
        '3JY' => 'E02006634',
        '3JZ' => 'E02006634',
        '3LA' => 'E02006634',
        '3LB' => 'E02006634',
        '3LD' => 'E02006634',
        '3LE' => 'E02006634',
        '3LF' => 'E02006634',
        '3LG' => 'E02006636',
        '3LH' => 'E02006640',
        '3LJ' => 'E02006640',
        '3LL' => 'E02006640',
        '3LN' => 'E02006640',
        '3LP' => 'E02006640',
        '3LQ' => 'E02006640',
        '3LR' => 'E02006640',
        '3LS' => 'E02006640',
        '3LT' => 'E02006640',
        '3LU' => 'E02006640',
        '3LW' => 'E02006640',
        '3LX' => 'E02006640',
        '3LY' => 'E02006640',
        '3LZ' => 'E02006640',
        '3NA' => 'E02006640',
        '3NB' => 'E02006640',
        '3ND' => 'E02006640',
        '3NE' => 'E02006640',
        '3NF' => 'E02006640',
        '3NG' => 'E02006640',
        '3NH' => 'E02006640',
        '3NJ' => 'E02006640',
        '3NL' => 'E02006640',
        '3NN' => 'E02006640',
        '3NP' => 'E02006640',
        '3NQ' => 'E02006640',
        '3NR' => 'E02006640',
        '3NS' => 'E02006640',
        '3NT' => 'E02006640',
        '3NU' => 'E02006640',
        '3NW' => 'E02006640',
        '3NX' => 'E02006640',
        '3NY' => 'E02006640',
        '3NZ' => 'E02006640',
        '3PA' => 'E02006640',
        '3PB' => 'E02006640',
        '3PD' => 'E02006640',
        '3PE' => 'E02006640',
        '3PF' => 'E02006640',
        '3PG' => 'E02006640',
        '3PH' => 'E02006640',
        '3PJ' => 'E02006640',
        '3PL' => 'E02006640',
        '3PN' => 'E02006640',
        '3PP' => 'E02006640',
        '3PQ' => 'E02006640',
        '3PR' => 'E02006640',
        '3PS' => 'E02006640',
        '3PT' => 'E02006640',
        '3PU' => 'E02006640',
        '3PW' => 'E02006640',
        '3PX' => 'E02006640',
        '3PY' => 'E02006640',
        '3PZ' => 'E02006640',
        '3QA' => 'E02006640',
        '3QB' => 'E02006640',
        '3QD' => 'E02006640',
        '3QE' => 'E02006640',
        '3QF' => 'E02006640',
        '3QG' => 'E02006640',
        '3QH' => 'E02006640',
        '3QJ' => 'E02006640',
        '3QL' => 'E02006640',
        '3QN' => 'E02006640',
        '3QP' => 'E02006640',
        '3QQ' => 'E02006640',
        '3QR' => 'E02006640',
        '3QS' => 'E02006640',
        '3QT' => 'E02006640',
        '3QU' => 'E02006640',
        '3QW' => 'E02006640',
        '3QX' => 'E02006640',
        '3QY' => 'E02006640',
        '3QZ' => 'E02006640',
        '3RA' => 'E02006640',
        '3RB' => 'E02006640',
        '3RD' => 'E02006640',
        '3RE' => 'E02006640',
        '3RF' => 'E02006640',
        '3RG' => 'E02006640',
        '3RH' => 'E02006640',
        '3RJ' => 'E02006640',
        '3RL' => 'E02006640',
        '3RN' => 'E02006640',
        '3RP' => 'E02006640',
        '3RQ' => 'E02006640',
        '3RR' => 'E02006640',
        '3RS' => 'E02006640',
        '3RT' => 'E02006640',
        '3RU' => 'E02006640',
        '3RW' => 'E02006640',
        '3RX' => 'E02006640',
        '3RY' => 'E02006640',
        '3RZ' => 'E02006640',
        '3SA' => 'E02006640',
        '3SB' => 'E02006640',
        '3SD' => 'E02006640',
        '3SE' => 'E02006640',
        '3SF' => 'E02006640',
        '3SG' => 'E02006640',
        '3SH' => 'E02006640',
        '3SJ' => 'E02006640',
        '3SL' => 'E02006640',
        '3SN' => 'E02006640',
        '3SP' => 'E02006640',
        '3SQ' => 'E02006640',
        '3SR' => 'E02006640',
        '3SS' => 'E02006640',
        '3ST' => 'E02006640',
        '3SU' => 'E02006640',
        '3SW' => 'E02006640',
        '3SX' => 'E02006640',
        '3SY' => 'E02006640',
        '3SZ' => 'E02006640',
        '3TA' => 'E02006640',
        '3TB' => 'E02006640',
        '3TD' => 'E02006640',
        '3TE' => 'E02006640',
        '3TF' => 'E02006640',
        '3TG' => 'E02006640',
        '3TH' => 'E02006640',
        '3TJ' => 'E02006640',
        '3TL' => 'E02006640',
        '3TN' => 'E02006640',
        '3TP' => 'E02006640',
        '3TQ' => 'E02006640',
        '3TR' => 'E02006640',
        '3TS' => 'E02006640',
        '3TT' => 'E02006640',
        '3TU' => 'E02006640',
        '3TW' => 'E02006640',
        '3TX' => 'E02006640',
        '3TY' => 'E02006640',
        '3TZ' => 'E02006640',
        '3UA' => 'E02006640',
        '3UB' => 'E02006640',
        '3UD' => 'E02006635',
        '3UE' => 'E02006640',
        '3UF' => 'E02006640',
        '3UG' => 'E02006635',
        '3UH' => 'E02006640',
        '3UJ' => 'E02006640',
        '3UL' => 'E02006640',
        '3UN' => 'E02006640',
        '3UP' => 'E02006640',
        '3UQ' => 'E02006640',
        '3UR' => 'E02006635',
        '3US' => 'E02006640',
        '3UT' => 'E02006640',
        '3UU' => 'E02006640',
        '3UW' => 'E02006636',
        '3UX' => 'E02006635',
        '3UY' => 'E02006640',
        '3UZ' => 'E02006640',
        '3WA' => 'E02006635',
        '3WB' => 'E02006635',
        '3WD' => 'E02006635',
        '3WE' => 'E02006635',
        '3WF' => 'E02006635',
        '3WG' => 'E02006635',
        '3WH' => 'E02006635',
        '3WJ' => 'E02006635',
        '3WL' => 'E02006635',
        '3WN' => 'E02006635',
        '3WP' => 'E02006635',
        '3WQ' => 'E02006635',
        '3WR' => 'E02006635',
        '3WS' => 'E02006635',
        '3WT' => 'E02006635',
        '3WU' => 'E02006635',
        '3WX' => 'E02006635',
        '3WZ' => 'E02006635',
        '3XA' => 'E02006640',
        '3XB' => 'E02006640',
        '3XD' => 'E02006640',
        '3XE' => 'E02006640',
        '3XF' => 'E02006640',
        '3XG' => 'E02006640',
        '3XH' => 'E02006635',
        '3XJ' => 'E02006635',
        '3XL' => 'E02006640',
        '3XN' => 'E02006640',
        '3XP' => 'E02006635',
        '3XQ' => 'E02006640',
        '3XR' => 'E02006635',
        '3XS' => 'E02006635',
        '3XT' => 'E02006635',
        '3XU' => 'E02006635',
        '3XW' => 'E02006640',
        '3XX' => 'E02006635',
        '3XY' => 'E02006635',
        '3XZ' => 'E02006635',
        '3YA' => 'E02006634',
        '3YD' => 'E02006634',
        '3YE' => 'E02006635',
        '3YN' => 'E02006635',
        '3YR' => 'E02006640',
        '3ZG' => 'E02006640',
        '3ZJ' => 'E02006635',
        '3ZN' => 'E02006635',
        '3ZP' => 'E02006640',
        '3ZQ' => 'E02006635',
        '3ZR' => 'E02006635',
        '3ZT' => 'E02006635',
        '3ZW' => 'E02006635',
        '3ZX' => 'E02006635',
        '4AA' => 'E02006635',
        '4AB' => 'E02006635',
        '4AD' => 'E02006635',
        '4AE' => 'E02006635',
        '4AF' => 'E02006635',
        '4AG' => 'E02006635',
        '4AH' => 'E02006635',
        '4AJ' => 'E02006635',
        '4AL' => 'E02006635',
        '4AN' => 'E02006635',
        '4AP' => 'E02006635',
        '4AQ' => 'E02006635',
        '4AR' => 'E02006635',
        '4AS' => 'E02006635',
        '4AT' => 'E02006635',
        '4AU' => 'E02006635',
        '4AW' => 'E02006635',
        '4AX' => 'E02006635',
        '4AY' => 'E02006635',
        '4AZ' => 'E02006635',
        '4BA' => 'E02006635',
        '4BB' => 'E02006635',
        '4BD' => 'E02006635',
        '4BE' => 'E02006635',
        '4BF' => 'E02006635',
        '4BG' => 'E02006635',
        '4BH' => 'E02006635',
        '4BJ' => 'E02006635',
        '4BL' => 'E02006635',
        '4BN' => 'E02006635',
        '4BP' => 'E02006635',
        '4BQ' => 'E02006635',
        '4BS' => 'E02006635',
        '4BT' => 'E02006635',
        '4BU' => 'E02006635',
        '4BW' => 'E02006635',
        '4BX' => 'E02006635',
        '4BY' => 'E02006635',
        '4BZ' => 'E02006635',
        '4DA' => 'E02006635',
        '4DB' => 'E02006635',
        '4DD' => 'E02006635',
        '4DE' => 'E02006635',
        '4DF' => 'E02006636',
        '4DG' => 'E02006635',
        '4DH' => 'E02006635',
        '4DJ' => 'E02006635',
        '4DL' => 'E02006635',
        '4DN' => 'E02006635',
        '4DP' => 'E02006636',
        '4DQ' => 'E02006636',
        '4DR' => 'E02006634',
        '4DS' => 'E02006636',
        '4DT' => 'E02006636',
        '4DU' => 'E02006636',
        '4DW' => 'E02006636',
        '4DX' => 'E02006636',
        '4DY' => 'E02006634',
        '4DZ' => 'E02006634',
        '4EA' => 'E02006634',
        '4EB' => 'E02006634',
        '4ED' => 'E02006636',
        '4EE' => 'E02006636',
        '4EF' => 'E02006636',
        '4EG' => 'E02006636',
        '4EH' => 'E02006636',
        '4EJ' => 'E02006636',
        '4EL' => 'E02006636',
        '4EN' => 'E02006636',
        '4EP' => 'E02006636',
        '4EQ' => 'E02006636',
        '4ER' => 'E02006636',
        '4ES' => 'E02006636',
        '4ET' => 'E02006636',
        '4EU' => 'E02006636',
        '4EW' => 'E02006636',
        '4EX' => 'E02006636',
        '4EY' => 'E02006634',
        '4EZ' => 'E02006634',
        '4FA' => 'E02006635',
        '4FB' => 'E02006634',
        '4FD' => 'E02006635',
        '4FE' => 'E02006635',
        '4FG' => 'E02006636',
        '4FH' => 'E02006636',
        '4FJ' => 'E02006635',
        '4FQ' => 'E02006635',
        '4HA' => 'E02006634',
        '4HB' => 'E02006634',
        '4HD' => 'E02006636',
        '4HE' => 'E02006636',
        '4HF' => 'E02006636',
        '4HH' => 'E02006635',
        '4HJ' => 'E02006635',
        '4HL' => 'E02006635',
        '4HN' => 'E02006635',
        '4HP' => 'E02006635',
        '4HQ' => 'E02006635',
        '4HR' => 'E02006635',
        '4HS' => 'E02006635',
        '4HT' => 'E02006635',
        '4HU' => 'E02006634',
        '4HW' => 'E02006635',
        '4HX' => 'E02006636',
        '4HY' => 'E02006635',
        '4HZ' => 'E02006636',
        '4JA' => 'E02006636',
        '4JB' => 'E02006636',
        '4JD' => 'E02006636',
        '4JE' => 'E02006636',
        '4JF' => 'E02006636',
        '4JG' => 'E02006636',
        '4JH' => 'E02006636',
        '4JJ' => 'E02006636',
        '4JL' => 'E02006636',
        '4JN' => 'E02006636',
        '4JP' => 'E02006636',
        '4JQ' => 'E02006636',
        '4JR' => 'E02006636',
        '4JS' => 'E02006636',
        '4JT' => 'E02006636',
        '4JU' => 'E02006636',
        '4JW' => 'E02006636',
        '4JX' => 'E02006636',
        '4JY' => 'E02006636',
        '4JZ' => 'E02006636',
        '4LA' => 'E02006636',
        '4LB' => 'E02006636',
        '4LD' => 'E02006636',
        '4LE' => 'E02006636',
        '4LF' => 'E02006636',
        '4LG' => 'E02006636',
        '4LH' => 'E02006636',
        '4LJ' => 'E02006636',
        '4LL' => 'E02006636',
        '4LN' => 'E02006636',
        '4LP' => 'E02006636',
        '4LQ' => 'E02006636',
        '4LR' => 'E02006636',
        '4LS' => 'E02006636',
        '4LT' => 'E02006636',
        '4LU' => 'E02006636',
        '4LW' => 'E02006636',
        '4LX' => 'E02006636',
        '4LY' => 'E02006636',
        '4LZ' => 'E02006636',
        '4NB' => 'E02006634',
        '4ND' => 'E02006636',
        '4NE' => 'E02006636',
        '4NF' => 'E02006636',
        '4NG' => 'E02006636',
        '4NH' => 'E02006636',
        '4NJ' => 'E02006636',
        '4NL' => 'E02006636',
        '4NN' => 'E02006636',
        '4NP' => 'E02006636',
        '4NQ' => 'E02006636',
        '4NR' => 'E02006636',
        '4NS' => 'E02006636',
        '4NT' => 'E02006636',
        '4NU' => 'E02006636',
        '4NW' => 'E02006636',
        '4NX' => 'E02006636',
        '4NZ' => 'E02006636',
        '4PA' => 'E02006636',
        '4PB' => 'E02006636',
        '4PD' => 'E02006634',
        '4PE' => 'E02006636',
        '4PF' => 'E02006636',
        '4PG' => 'E02006636',
        '4PH' => 'E02006634',
        '4PJ' => 'E02006635',
        '4PL' => 'E02006635',
        '4PN' => 'E02006636',
        '4PP' => 'E02006635',
        '4PQ' => 'E02006635',
        '4PW' => 'E02006636',
        '4QA' => 'E02006635',
        '4QB' => 'E02006635',
        '4QD' => 'E02006634',
        '4QE' => 'E02006635',
        '4QF' => 'E02006636',
        '4QG' => 'E02006635',
        '4QH' => 'E02006635',
        '4QJ' => 'E02006635',
        '4QL' => 'E02006635',
        '4QQ' => 'E02006635',
        '4WA' => 'E02006635',
        '4WB' => 'E02006635',
        '4WD' => 'E02006635',
        '4WE' => 'E02006635',
        '4WG' => 'E02006635',
        '4WL' => 'E02006635',
        '4WR' => 'E02006635',
        '4WS' => 'E02006635',
        '4WU' => 'E02006635',
        '4WX' => 'E02006635',
        '4WZ' => 'E02006635',
        '4XN' => 'E02006635',
        '4XR' => 'E02006635',
        '4YP' => 'E02006635',
        '4YR' => 'E02006635',
        '4YS' => 'E02006635',
        '4YU' => 'E02006635',
        '4YW' => 'E02006635',
        '4YY' => 'E02006635',
        '4ZN' => 'E02006635',
        '4ZQ' => 'E02006635',
        '4ZR' => 'E02006635',
        '4ZX' => 'E02006635',
        '9AF' => 'E02006635',
        '9AG' => 'E02006635',
        '9AJ' => 'E02006635',
        '9AN' => 'E02006635',
        '9AS' => 'E02006635',
        '9AU' => 'E02006635',
        '9AW' => 'E02006635',
        '9AX' => 'E02006635',
        '9AY' => 'E02006635',
        '9BB' => 'E02006635',
        '9BD' => 'E02006635',
        '9BE' => 'E02006635',
        '9BF' => 'E02006635',
        '9BG' => 'E02006635',
        '9BH' => 'E02006635',
        '9BL' => 'E02006635',
        '9BP' => 'E02006635',
        '9BR' => 'E02006635',
        '9BS' => 'E02006635',
        '9BT' => 'E02006635',
        '9BW' => 'E02006635',
        '9BX' => 'E02006635',
        '9BY' => 'E02006635',
        '9BZ' => 'E02006635',
        '9DA' => 'E02006635',
        '9DB' => 'E02006635',
        '9DD' => 'E02006635',
        '9DE' => 'E02006635',
        '9DG' => 'E02006635',
        '9DH' => 'E02006635',
        '9DJ' => 'E02006635',
        '9DL' => 'E02006635',
        '9DN' => 'E02006635',
        '9DP' => 'E02006635',
        '9DQ' => 'E02006635',
        '9DR' => 'E02006635',
        '9DS' => 'E02006635',
        '9DT' => 'E02006635',
        '9DU' => 'E02006635',
        '9DW' => 'E02006635',
        '9DY' => 'E02006635',
        '9DZ' => 'E02006635',
        '9EA' => 'E02006635',
        '9EB' => 'E02006635',
        '9ED' => 'E02006635',
        '9EE' => 'E02006635',
        '9EF' => 'E02006635',
        '9EG' => 'E02006635',
        '9EH' => 'E02006635',
        '9EJ' => 'E02006635',
        '9EL' => 'E02006635',
        '9EN' => 'E02006635',
        '9EP' => 'E02006635',
        '9EQ' => 'E02006635',
        '9ER' => 'E02006635',
        '9ES' => 'E02006635',
        '9ET' => 'E02006635',
        '9EU' => 'E02006635',
        '9EW' => 'E02006635',
        '9EX' => 'E02006635',
        '9EY' => 'E02006635',
        '9EZ' => 'E02006635',
        '9FA' => 'E02006635',
        '9FB' => 'E02006635',
        '9FD' => 'E02006635',
        '9FE' => 'E02006635',
        '9FF' => 'E02006635',
        '9FG' => 'E02006635',
        '9FH' => 'E02006635',
        '9FJ' => 'E02006635',
        '9FL' => 'E02006635',
        '9FN' => 'E02006635',
        '9FR' => 'E02006635',
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
