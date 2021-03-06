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
final class SE17
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02000822',
        '1AB' => 'E02000818',
        '1AD' => 'E02000818',
        '1AE' => 'E02000818',
        '1AF' => 'E02000818',
        '1AG' => 'E02000818',
        '1AH' => 'E02000822',
        '1AJ' => 'E02000818',
        '1AL' => 'E02000822',
        '1AN' => 'E02000822',
        '1AP' => 'E02000818',
        '1AQ' => 'E02000818',
        '1AR' => 'E02000820',
        '1AS' => 'E02000818',
        '1AT' => 'E02000818',
        '1AU' => 'E02000818',
        '1AW' => 'E02000818',
        '1AX' => 'E02000818',
        '1AY' => 'E02000815',
        '1AZ' => 'E02000815',
        '1BA' => 'E02000818',
        '1BB' => 'E02000818',
        '1BD' => 'E02000818',
        '1BE' => 'E02000818',
        '1BF' => 'E02000818',
        '1BG' => 'E02000818',
        '1BH' => 'E02000818',
        '1BJ' => 'E02000818',
        '1BL' => 'E02000818',
        '1BN' => 'E02000818',
        '1BP' => 'E02000818',
        '1BQ' => 'E02000818',
        '1BS' => 'E02000818',
        '1BT' => 'E02000818',
        '1BU' => 'E02000818',
        '1BW' => 'E02000818',
        '1BX' => 'E02000818',
        '1BY' => 'E02000818',
        '1BZ' => 'E02000818',
        '1DA' => 'E02000818',
        '1DB' => 'E02000818',
        '1DD' => 'E02000818',
        '1DE' => 'E02000822',
        '1DF' => 'E02000822',
        '1DG' => 'E02000822',
        '1DH' => 'E02000822',
        '1DJ' => 'E02000822',
        '1DL' => 'E02000822',
        '1DN' => 'E02000822',
        '1DP' => 'E02000822',
        '1DQ' => 'E02000822',
        '1DR' => 'E02000822',
        '1DS' => 'E02000822',
        '1DT' => 'E02000822',
        '1DU' => 'E02000822',
        '1DW' => 'E02000822',
        '1DX' => 'E02000822',
        '1DY' => 'E02000818',
        '1DZ' => 'E02000822',
        '1EA' => 'E02000822',
        '1EB' => 'E02000822',
        '1ED' => 'E02000822',
        '1EE' => 'E02000822',
        '1EF' => 'E02000822',
        '1EG' => 'E02000822',
        '1EH' => 'E02000818',
        '1EJ' => 'E02000822',
        '1EL' => 'E02000818',
        '1EN' => 'E02000815',
        '1EP' => 'E02000822',
        '1EQ' => 'E02000815',
        '1ER' => 'E02000822',
        '1ES' => 'E02000822',
        '1ET' => 'E02000815',
        '1EU' => 'E02000815',
        '1EW' => 'E02000818',
        '1EX' => 'E02000815',
        '1EY' => 'E02000815',
        '1EZ' => 'E02000818',
        '1FA' => 'E02000815',
        '1FB' => 'E02000815',
        '1FD' => 'E02000815',
        '1FE' => 'E02000818',
        '1FF' => 'E02000818',
        '1FG' => 'E02000818',
        '1FH' => 'E02000818',
        '1FJ' => 'E02000818',
        '1FL' => 'E02000818',
        '1FN' => 'E02000818',
        '1FP' => 'E02000818',
        '1FQ' => 'E02000818',
        '1FR' => 'E02000815',
        '1FS' => 'E02000818',
        '1FT' => 'E02000815',
        '1FU' => 'E02000815',
        '1FW' => 'E02000818',
        '1FX' => 'E02000818',
        '1FY' => 'E02000818',
        '1FZ' => 'E02000818',
        '1GA' => 'E02000818',
        '1GB' => 'E02000815',
        '1GD' => 'E02000815',
        '1GE' => 'E02000815',
        '1GF' => 'E02000815',
        '1GG' => 'E02000818',
        '1HA' => 'E02000818',
        '1HB' => 'E02000818',
        '1HF' => 'E02000818',
        '1HG' => 'E02000818',
        '1HH' => 'E02000818',
        '1HJ' => 'E02000818',
        '1HL' => 'E02000818',
        '1HP' => 'E02000818',
        '1HQ' => 'E02000818',
        '1HR' => 'E02000818',
        '1HT' => 'E02000818',
        '1HU' => 'E02000818',
        '1HW' => 'E02000818',
        '1HX' => 'E02000818',
        '1HY' => 'E02000818',
        '1JA' => 'E02000820',
        '1JB' => 'E02000820',
        '1JD' => 'E02000818',
        '1JE' => 'E02000818',
        '1JF' => 'E02000818',
        '1JG' => 'E02000818',
        '1JH' => 'E02000818',
        '1JJ' => 'E02000820',
        '1JL' => 'E02000820',
        '1JN' => 'E02000820',
        '1JP' => 'E02000818',
        '1JQ' => 'E02000820',
        '1JR' => 'E02000818',
        '1JS' => 'E02000818',
        '1JT' => 'E02000820',
        '1JU' => 'E02000820',
        '1JW' => 'E02000820',
        '1JY' => 'E02000820',
        '1JZ' => 'E02000820',
        '1LA' => 'E02000815',
        '1LB' => 'E02000815',
        '1LD' => 'E02000818',
        '1LG' => 'E02000818',
        '1LH' => 'E02000818',
        '1LJ' => 'E02000818',
        '1LL' => 'E02000818',
        '1LN' => 'E02000818',
        '1LP' => 'E02000818',
        '1LQ' => 'E02000820',
        '1LR' => 'E02000818',
        '1LS' => 'E02000818',
        '1LT' => 'E02000818',
        '1LU' => 'E02000818',
        '1LW' => 'E02000818',
        '1LX' => 'E02000818',
        '1LY' => 'E02000822',
        '1LZ' => 'E02000822',
        '1NA' => 'E02000818',
        '1NB' => 'E02000822',
        '1ND' => 'E02000818',
        '1NE' => 'E02000818',
        '1NF' => 'E02000818',
        '1NG' => 'E02000818',
        '1NH' => 'E02000818',
        '1NJ' => 'E02000818',
        '1NL' => 'E02000818',
        '1NN' => 'E02000818',
        '1NP' => 'E02000818',
        '1NQ' => 'E02000818',
        '1NR' => 'E02000818',
        '1NS' => 'E02000818',
        '1NU' => 'E02000818',
        '1NY' => 'E02000818',
        '1NZ' => 'E02000818',
        '1PA' => 'E02000818',
        '1PB' => 'E02000818',
        '1PD' => 'E02000818',
        '1PE' => 'E02000818',
        '1PF' => 'E02000818',
        '1PG' => 'E02000818',
        '1PH' => 'E02000818',
        '1PJ' => 'E02000818',
        '1PL' => 'E02000818',
        '1PN' => 'E02000818',
        '1PP' => 'E02000818',
        '1PQ' => 'E02000818',
        '1PR' => 'E02000818',
        '1PS' => 'E02000818',
        '1PT' => 'E02000818',
        '1PU' => 'E02000818',
        '1PW' => 'E02000818',
        '1PY' => 'E02000818',
        '1PZ' => 'E02000818',
        '1QB' => 'E02000818',
        '1QD' => 'E02000818',
        '1QE' => 'E02000818',
        '1QF' => 'E02000818',
        '1QG' => 'E02000818',
        '1QH' => 'E02000818',
        '1QJ' => 'E02000818',
        '1QL' => 'E02000818',
        '1QN' => 'E02000821',
        '1QP' => 'E02000818',
        '1QQ' => 'E02000818',
        '1QR' => 'E02000818',
        '1QS' => 'E02000818',
        '1QT' => 'E02000818',
        '1QU' => 'E02000818',
        '1QW' => 'E02000818',
        '1QX' => 'E02000818',
        '1QZ' => 'E02000822',
        '1RA' => 'E02000818',
        '1RB' => 'E02000818',
        '1RD' => 'E02000822',
        '1RE' => 'E02000822',
        '1RF' => 'E02000818',
        '1RG' => 'E02000818',
        '1RH' => 'E02000818',
        '1RJ' => 'E02000822',
        '1RL' => 'E02000818',
        '1RN' => 'E02000820',
        '1RP' => 'E02000818',
        '1RQ' => 'E02000818',
        '1RR' => 'E02000818',
        '1RS' => 'E02000818',
        '1RT' => 'E02000818',
        '1RU' => 'E02000818',
        '1RW' => 'E02000818',
        '1RX' => 'E02000818',
        '1RY' => 'E02000818',
        '1RZ' => 'E02000818',
        '1SA' => 'E02000815',
        '1SH' => 'E02000820',
        '1SJ' => 'E02000820',
        '1SL' => 'E02000815',
        '1SN' => 'E02000815',
        '1SP' => 'E02000815',
        '1SQ' => 'E02000820',
        '1SR' => 'E02000815',
        '1SS' => 'E02000820',
        '1ST' => 'E02000818',
        '1SU' => 'E02000818',
        '1SW' => 'E02000815',
        '1SX' => 'E02000818',
        '1SY' => 'E02000818',
        '1SZ' => 'E02000818',
        '1TA' => 'E02000818',
        '1TB' => 'E02000821',
        '1TD' => 'E02000818',
        '1TE' => 'E02000818',
        '1TF' => 'E02000818',
        '1TG' => 'E02000818',
        '1TH' => 'E02000818',
        '1TJ' => 'E02000818',
        '1TL' => 'E02000820',
        '1TN' => 'E02000818',
        '1TP' => 'E02000818',
        '1TQ' => 'E02000818',
        '1TR' => 'E02000820',
        '1TS' => 'E02000821',
        '1TT' => 'E02000821',
        '1TU' => 'E02000821',
        '1TW' => 'E02000818',
        '1TX' => 'E02000815',
        '1TY' => 'E02000818',
        '1TZ' => 'E02000815',
        '1UA' => 'E02000815',
        '1UB' => 'E02000815',
        '1UD' => 'E02000815',
        '1UE' => 'E02000815',
        '1UF' => 'E02000815',
        '1UG' => 'E02000815',
        '1UH' => 'E02000818',
        '1UJ' => 'E02000818',
        '1UL' => 'E02000818',
        '1UN' => 'E02000818',
        '1UP' => 'E02000815',
        '1UQ' => 'E02000818',
        '1UR' => 'E02000818',
        '1US' => 'E02000820',
        '1UT' => 'E02000818',
        '1UU' => 'E02000818',
        '1UW' => 'E02000818',
        '1UX' => 'E02000818',
        '1UY' => 'E02000820',
        '1UZ' => 'E02000820',
        '1WA' => 'E02000820',
        '1WB' => 'E02000820',
        '1WD' => 'E02000820',
        '1WE' => 'E02000820',
        '1WF' => 'E02000818',
        '1WG' => 'E02000820',
        '1WH' => 'E02000820',
        '1WJ' => 'E02000820',
        '1WL' => 'E02000820',
        '1WN' => 'E02000820',
        '1WP' => 'E02000820',
        '1WQ' => 'E02000820',
        '1WR' => 'E02000820',
        '1WS' => 'E02000820',
        '1WT' => 'E02000820',
        '1WU' => 'E02000820',
        '1WW' => 'E02000820',
        '1WX' => 'E02000820',
        '1WY' => 'E02000820',
        '1WZ' => 'E02000820',
        '1XA' => 'E02000820',
        '1XB' => 'E02000820',
        '1XD' => 'E02000820',
        '1XE' => 'E02000820',
        '1XF' => 'E02000820',
        '1XG' => 'E02000820',
        '1XH' => 'E02000820',
        '1XJ' => 'E02000820',
        '1XL' => 'E02000820',
        '1XN' => 'E02000820',
        '1XP' => 'E02000820',
        '1XQ' => 'E02000818',
        '1XR' => 'E02000820',
        '1XS' => 'E02000820',
        '1XT' => 'E02000820',
        '1XU' => 'E02000820',
        '1XW' => 'E02000820',
        '1XX' => 'E02000820',
        '1XY' => 'E02000820',
        '1XZ' => 'E02000820',
        '1YA' => 'E02000820',
        '1YB' => 'E02000820',
        '1YD' => 'E02000820',
        '1YE' => 'E02000820',
        '1YF' => 'E02000820',
        '1YG' => 'E02000820',
        '1YH' => 'E02000820',
        '1YJ' => 'E02000820',
        '1YL' => 'E02000820',
        '1YN' => 'E02000820',
        '1YP' => 'E02000820',
        '1YQ' => 'E02000820',
        '1YR' => 'E02000820',
        '1YS' => 'E02000820',
        '1YT' => 'E02000820',
        '1YW' => 'E02000820',
        '1YZ' => 'E02000820',
        '1ZA' => 'E02000820',
        '1ZB' => 'E02000820',
        '1ZD' => 'E02000820',
        '1ZE' => 'E02000820',
        '1ZF' => 'E02000820',
        '1ZG' => 'E02000818',
        '1ZH' => 'E02000818',
        '1ZJ' => 'E02000818',
        '1ZL' => 'E02000818',
        '1ZN' => 'E02000820',
        '1ZP' => 'E02000818',
        '1ZQ' => 'E02000818',
        '1ZR' => 'E02000820',
        '1ZS' => 'E02000818',
        '1ZT' => 'E02000820',
        '1ZU' => 'E02000820',
        '1ZW' => 'E02000818',
        '1ZX' => 'E02000820',
        '2AA' => 'E02000821',
        '2AB' => 'E02000821',
        '2AD' => 'E02000821',
        '2AE' => 'E02000821',
        '2AF' => 'E02000821',
        '2AG' => 'E02000821',
        '2AH' => 'E02000821',
        '2AJ' => 'E02000823',
        '2AL' => 'E02000823',
        '2AN' => 'E02000823',
        '2AP' => 'E02000823',
        '2AQ' => 'E02000822',
        '2AR' => 'E02000823',
        '2AS' => 'E02000822',
        '2AT' => 'E02000822',
        '2AU' => 'E02000823',
        '2AW' => 'E02000823',
        '2AX' => 'E02000823',
        '2AY' => 'E02000823',
        '2AZ' => 'E02000821',
        '2BA' => 'E02000823',
        '2BB' => 'E02000822',
        '2BD' => 'E02000822',
        '2BE' => 'E02000822',
        '2BF' => 'E02000821',
        '2BG' => 'E02000822',
        '2BH' => 'E02000823',
        '2BJ' => 'E02000822',
        '2BL' => 'E02000822',
        '2BN' => 'E02000822',
        '2BP' => 'E02000822',
        '2BQ' => 'E02000823',
        '2BS' => 'E02000821',
        '2BT' => 'E02000822',
        '2BU' => 'E02000823',
        '2BW' => 'E02000822',
        '2BX' => 'E02000821',
        '2BY' => 'E02000822',
        '2BZ' => 'E02000822',
        '2DA' => 'E02000822',
        '2DB' => 'E02000822',
        '2DD' => 'E02000822',
        '2DE' => 'E02000822',
        '2DF' => 'E02000822',
        '2DG' => 'E02000822',
        '2DH' => 'E02000822',
        '2DJ' => 'E02000822',
        '2DL' => 'E02000822',
        '2DN' => 'E02000822',
        '2DP' => 'E02000823',
        '2DQ' => 'E02000822',
        '2DR' => 'E02000823',
        '2DS' => 'E02000822',
        '2DT' => 'E02000822',
        '2DU' => 'E02000822',
        '2DW' => 'E02000818',
        '2DX' => 'E02000822',
        '2DY' => 'E02000822',
        '2DZ' => 'E02000822',
        '2EA' => 'E02000818',
        '2EB' => 'E02000822',
        '2ED' => 'E02000822',
        '2EE' => 'E02000822',
        '2EF' => 'E02000822',
        '2EG' => 'E02000822',
        '2EH' => 'E02000821',
        '2EJ' => 'E02000822',
        '2EL' => 'E02000821',
        '2EN' => 'E02000821',
        '2EP' => 'E02000821',
        '2EQ' => 'E02000822',
        '2ER' => 'E02000820',
        '2ES' => 'E02000822',
        '2ET' => 'E02000822',
        '2EU' => 'E02000823',
        '2EW' => 'E02000821',
        '2EX' => 'E02000822',
        '2EY' => 'E02000822',
        '2EZ' => 'E02000822',
        '2FA' => 'E02000820',
        '2FB' => 'E02000820',
        '2FD' => 'E02000820',
        '2FE' => 'E02000822',
        '2FF' => 'E02000823',
        '2FG' => 'E02000823',
        '2FH' => 'E02000823',
        '2FJ' => 'E02000823',
        '2FL' => 'E02000823',
        '2FN' => 'E02000823',
        '2FP' => 'E02000823',
        '2FQ' => 'E02000823',
        '2FR' => 'E02000821',
        '2FS' => 'E02000821',
        '2FT' => 'E02000821',
        '2FU' => 'E02000821',
        '2FW' => 'E02000821',
        '2FX' => 'E02000821',
        '2FY' => 'E02000821',
        '2GD' => 'E02000823',
        '2GP' => 'E02000822',
        '2HA' => 'E02000822',
        '2HB' => 'E02000821',
        '2HD' => 'E02000822',
        '2HE' => 'E02000822',
        '2HF' => 'E02000822',
        '2HG' => 'E02000822',
        '2HH' => 'E02000823',
        '2HJ' => 'E02000823',
        '2HL' => 'E02000822',
        '2HN' => 'E02000822',
        '2HP' => 'E02000822',
        '2HQ' => 'E02000822',
        '2HR' => 'E02000822',
        '2HS' => 'E02000822',
        '2HT' => 'E02000821',
        '2HU' => 'E02000821',
        '2HW' => 'E02000822',
        '2HX' => 'E02000821',
        '2HY' => 'E02000821',
        '2HZ' => 'E02000821',
        '2JA' => 'E02000821',
        '2JB' => 'E02000821',
        '2JD' => 'E02000822',
        '2JE' => 'E02000822',
        '2JF' => 'E02000822',
        '2JG' => 'E02000821',
        '2JH' => 'E02000821',
        '2JJ' => 'E02000823',
        '2JL' => 'E02000821',
        '2JN' => 'E02000821',
        '2JP' => 'E02000821',
        '2JQ' => 'E02000822',
        '2JR' => 'E02000821',
        '2JS' => 'E02000821',
        '2JT' => 'E02000820',
        '2JU' => 'E02000821',
        '2JW' => 'E02000821',
        '2JX' => 'E02000821',
        '2JY' => 'E02000821',
        '2JZ' => 'E02000821',
        '2LE' => 'E02000821',
        '2LF' => 'E02000821',
        '2LG' => 'E02000821',
        '2LH' => 'E02000821',
        '2LJ' => 'E02000821',
        '2LL' => 'E02000821',
        '2LN' => 'E02000821',
        '2LP' => 'E02000821',
        '2LQ' => 'E02000821',
        '2LR' => 'E02000821',
        '2LS' => 'E02000821',
        '2LT' => 'E02000821',
        '2LW' => 'E02000821',
        '2LX' => 'E02000820',
        '2NA' => 'E02000818',
        '2NB' => 'E02000823',
        '2ND' => 'E02000823',
        '2NE' => 'E02000823',
        '2NF' => 'E02000823',
        '2NG' => 'E02000823',
        '2NH' => 'E02000823',
        '2NJ' => 'E02000823',
        '2NL' => 'E02000823',
        '2NN' => 'E02000823',
        '2NP' => 'E02000822',
        '2NQ' => 'E02000823',
        '2NR' => 'E02000822',
        '2NS' => 'E02000822',
        '2NT' => 'E02000822',
        '2NU' => 'E02000822',
        '2NW' => 'E02000823',
        '2NX' => 'E02000822',
        '2NY' => 'E02000821',
        '2NZ' => 'E02000821',
        '2PA' => 'E02000821',
        '2PB' => 'E02000822',
        '2PD' => 'E02000822',
        '2PE' => 'E02000822',
        '2PF' => 'E02000822',
        '2PG' => 'E02000822',
        '2PH' => 'E02000822',
        '2PJ' => 'E02000822',
        '2PL' => 'E02000822',
        '2PN' => 'E02000822',
        '2PP' => 'E02000822',
        '2PQ' => 'E02000822',
        '2PR' => 'E02000822',
        '2PS' => 'E02000822',
        '2PT' => 'E02000822',
        '2PU' => 'E02000822',
        '2PW' => 'E02000822',
        '2PX' => 'E02000822',
        '2PY' => 'E02000823',
        '2PZ' => 'E02000823',
        '2QA' => 'E02000822',
        '2QB' => 'E02000823',
        '2QD' => 'E02000820',
        '2QE' => 'E02000822',
        '2QN' => 'E02000821',
        '2QP' => 'E02000821',
        '2QQ' => 'E02000821',
        '2QR' => 'E02000821',
        '2QS' => 'E02000821',
        '2QT' => 'E02000821',
        '2QW' => 'E02000821',
        '2QX' => 'E02000821',
        '2RA' => 'E02000821',
        '2RB' => 'E02000821',
        '2RD' => 'E02000821',
        '2RE' => 'E02000821',
        '2RF' => 'E02000821',
        '2RG' => 'E02000821',
        '2RH' => 'E02000821',
        '2RJ' => 'E02000821',
        '2RL' => 'E02000821',
        '2RN' => 'E02000821',
        '2RP' => 'E02000821',
        '2RQ' => 'E02000821',
        '2RR' => 'E02000821',
        '2RS' => 'E02000821',
        '2RT' => 'E02000821',
        '2RU' => 'E02000821',
        '2RW' => 'E02000821',
        '2RY' => 'E02000821',
        '2SA' => 'E02000822',
        '2SB' => 'E02000822',
        '2SD' => 'E02000818',
        '2SE' => 'E02000822',
        '2SF' => 'E02000822',
        '2SJ' => 'E02000822',
        '2SL' => 'E02000822',
        '2SN' => 'E02000818',
        '2SS' => 'E02000818',
        '2ST' => 'E02000821',
        '2SU' => 'E02000821',
        '2SX' => 'E02000821',
        '2TA' => 'E02000818',
        '2TB' => 'E02000818',
        '2TD' => 'E02000818',
        '2TE' => 'E02000818',
        '2TF' => 'E02000818',
        '2TG' => 'E02000822',
        '2TH' => 'E02000822',
        '2TJ' => 'E02000823',
        '2TL' => 'E02000822',
        '2TN' => 'E02000822',
        '2TP' => 'E02000822',
        '2TQ' => 'E02000822',
        '2TR' => 'E02000821',
        '2TS' => 'E02000821',
        '2TT' => 'E02000821',
        '2TU' => 'E02000821',
        '2TW' => 'E02000822',
        '2TX' => 'E02000821',
        '2TY' => 'E02000820',
        '2TZ' => 'E02000822',
        '2UA' => 'E02000820',
        '2UB' => 'E02000820',
        '2UD' => 'E02000821',
        '2UE' => 'E02000821',
        '2UF' => 'E02000821',
        '2UG' => 'E02000821',
        '2UH' => 'E02000822',
        '2UJ' => 'E02000822',
        '2UL' => 'E02000822',
        '2UN' => 'E02000822',
        '2UP' => 'E02000821',
        '2UQ' => 'E02000822',
        '2UR' => 'E02000821',
        '2US' => 'E02000821',
        '2UT' => 'E02000821',
        '2UU' => 'E02000821',
        '2UW' => 'E02000821',
        '2UX' => 'E02000821',
        '2UY' => 'E02000820',
        '2UZ' => 'E02000822',
        '2WA' => 'E02000820',
        '2WB' => 'E02000820',
        '2WD' => 'E02000820',
        '2WE' => 'E02000820',
        '2WF' => 'E02000820',
        '2WG' => 'E02000820',
        '2WH' => 'E02000820',
        '2WJ' => 'E02000820',
        '2WL' => 'E02000820',
        '2WN' => 'E02000820',
        '2WP' => 'E02000820',
        '2WQ' => 'E02000820',
        '2WR' => 'E02000820',
        '2WS' => 'E02000820',
        '2WT' => 'E02000820',
        '2WU' => 'E02000820',
        '2WW' => 'E02000820',
        '2WX' => 'E02000820',
        '2WY' => 'E02000820',
        '2WZ' => 'E02000820',
        '2XA' => 'E02000820',
        '2XB' => 'E02000820',
        '2XD' => 'E02000821',
        '2XE' => 'E02000822',
        '2XF' => 'E02000820',
        '2XG' => 'E02000820',
        '2XH' => 'E02000822',
        '2XJ' => 'E02000822',
        '2XL' => 'E02000822',
        '2XN' => 'E02000820',
        '2XP' => 'E02000822',
        '2XQ' => 'E02000822',
        '2XR' => 'E02000820',
        '2XS' => 'E02000820',
        '2XT' => 'E02000820',
        '2XU' => 'E02000820',
        '2XW' => 'E02000820',
        '2XX' => 'E02000820',
        '2XY' => 'E02000820',
        '2XZ' => 'E02000820',
        '2YA' => 'E02000820',
        '2YB' => 'E02000822',
        '2YD' => 'E02000820',
        '2YE' => 'E02000820',
        '2YF' => 'E02000820',
        '2YG' => 'E02000820',
        '2YH' => 'E02000820',
        '2YQ' => 'E02000820',
        '2YT' => 'E02000820',
        '2YY' => 'E02000820',
        '2YZ' => 'E02000820',
        '2ZA' => 'E02000821',
        '2ZB' => 'E02000820',
        '2ZD' => 'E02000820',
        '2ZE' => 'E02000820',
        '2ZF' => 'E02000820',
        '2ZG' => 'E02000821',
        '2ZH' => 'E02000821',
        '2ZJ' => 'E02000820',
        '2ZL' => 'E02000820',
        '2ZN' => 'E02000821',
        '2ZP' => 'E02000821',
        '2ZQ' => 'E02000820',
        '2ZR' => 'E02000821',
        '2ZS' => 'E02000821',
        '2ZT' => 'E02000821',
        '2ZU' => 'E02000820',
        '2ZW' => 'E02000821',
        '2ZX' => 'E02000820',
        '3AA' => 'E02000820',
        '3AB' => 'E02000820',
        '3AD' => 'E02000820',
        '3AE' => 'E02000820',
        '3AF' => 'E02000820',
        '3AG' => 'E02000820',
        '3AH' => 'E02000820',
        '3AJ' => 'E02000820',
        '3AL' => 'E02000820',
        '3AN' => 'E02000820',
        '3AP' => 'E02000820',
        '3AQ' => 'E02000820',
        '3AR' => 'E02000820',
        '3AS' => 'E02000820',
        '3AT' => 'E02000820',
        '3AU' => 'E02000820',
        '3AW' => 'E02000820',
        '3AX' => 'E02000820',
        '3AY' => 'E02000820',
        '3AZ' => 'E02000820',
        '3BA' => 'E02000820',
        '3BB' => 'E02000820',
        '3BD' => 'E02000818',
        '3BE' => 'E02000818',
        '3BF' => 'E02000820',
        '3BG' => 'E02000818',
        '3BH' => 'E02000818',
        '3BJ' => 'E02000818',
        '3BL' => 'E02000818',
        '3BN' => 'E02000818',
        '3BP' => 'E02000818',
        '3BQ' => 'E02000820',
        '3BS' => 'E02000818',
        '3BT' => 'E02000820',
        '3BU' => 'E02000820',
        '3BW' => 'E02000820',
        '3BX' => 'E02000820',
        '3BY' => 'E02000820',
        '3BZ' => 'E02000820',
        '3DA' => 'E02000820',
        '3DB' => 'E02000820',
        '3DD' => 'E02000820',
        '3DE' => 'E02000820',
        '3DF' => 'E02000820',
        '3DG' => 'E02000820',
        '3DH' => 'E02000820',
        '3DJ' => 'E02000820',
        '3DL' => 'E02000820',
        '3DN' => 'E02000820',
        '3DP' => 'E02000818',
        '3DQ' => 'E02000820',
        '3DR' => 'E02000820',
        '3DS' => 'E02000818',
        '3DT' => 'E02000818',
        '3DU' => 'E02000818',
        '3DW' => 'E02000818',
        '3DX' => 'E02000818',
        '3DY' => 'E02000823',
        '3DZ' => 'E02000823',
        '3EA' => 'E02000818',
        '3EB' => 'E02000818',
        '3ED' => 'E02000823',
        '3EE' => 'E02000823',
        '3EF' => 'E02000823',
        '3EG' => 'E02000818',
        '3EH' => 'E02000823',
        '3EJ' => 'E02000823',
        '3EL' => 'E02000823',
        '3EN' => 'E02000823',
        '3EP' => 'E02000818',
        '3EQ' => 'E02000823',
        '3ER' => 'E02000820',
        '3ES' => 'E02000820',
        '3ET' => 'E02000820',
        '3EU' => 'E02000818',
        '3EW' => 'E02000818',
        '3EX' => 'E02000820',
        '3EY' => 'E02000820',
        '3EZ' => 'E02000818',
        '3FA' => 'E02000818',
        '3FD' => 'E02000818',
        '3FE' => 'E02000818',
        '3FF' => 'E02000818',
        '3FG' => 'E02000818',
        '3FH' => 'E02000818',
        '3FJ' => 'E02000818',
        '3FL' => 'E02000818',
        '3FN' => 'E02000818',
        '3FP' => 'E02000818',
        '3FQ' => 'E02000818',
        '3FS' => 'E02000823',
        '3FT' => 'E02000823',
        '3HA' => 'E02000823',
        '3HB' => 'E02000823',
        '3HD' => 'E02000823',
        '3HE' => 'E02000823',
        '3HF' => 'E02000823',
        '3HG' => 'E02000823',
        '3HH' => 'E02000823',
        '3HJ' => 'E02000823',
        '3HL' => 'E02000823',
        '3HN' => 'E02000823',
        '3HP' => 'E02000823',
        '3HQ' => 'E02000823',
        '3HR' => 'E02000823',
        '3HS' => 'E02000823',
        '3HT' => 'E02000823',
        '3HU' => 'E02000820',
        '3HW' => 'E02000823',
        '3HX' => 'E02000823',
        '3HY' => 'E02000823',
        '3HZ' => 'E02000823',
        '3JA' => 'E02000820',
        '3JB' => 'E02000818',
        '3JD' => 'E02000823',
        '3JE' => 'E02000818',
        '3JF' => 'E02000818',
        '3JG' => 'E02000823',
        '3JH' => 'E02000823',
        '3JJ' => 'E02000823',
        '3JL' => 'E02000823',
        '3JN' => 'E02000818',
        '3JP' => 'E02000818',
        '3JQ' => 'E02000823',
        '3JR' => 'E02000818',
        '3JS' => 'E02000818',
        '3JT' => 'E02000820',
        '3JU' => 'E02000820',
        '3JW' => 'E02000818',
        '3JX' => 'E02000818',
        '3JY' => 'E02000818',
        '3JZ' => 'E02000818',
        '3LA' => 'E02000823',
        '3LD' => 'E02000820',
        '3LE' => 'E02000820',
        '3LF' => 'E02000820',
        '3LG' => 'E02000820',
        '3LH' => 'E02000820',
        '3LJ' => 'E02000820',
        '3LL' => 'E02000820',
        '3LN' => 'E02000818',
        '3LP' => 'E02000818',
        '3LQ' => 'E02000820',
        '3LT' => 'E02000820',
        '3LU' => 'E02000823',
        '3LX' => 'E02000823',
        '3LY' => 'E02000823',
        '3LZ' => 'E02000823',
        '3NA' => 'E02000820',
        '3NB' => 'E02000820',
        '3ND' => 'E02000820',
        '3NE' => 'E02000820',
        '3NF' => 'E02000820',
        '3NG' => 'E02000823',
        '3NH' => 'E02000823',
        '3NJ' => 'E02000820',
        '3NL' => 'E02000820',
        '3NN' => 'E02000823',
        '3NP' => 'E02000820',
        '3NQ' => 'E02000823',
        '3NR' => 'E02000820',
        '3NS' => 'E02000820',
        '3NT' => 'E02000820',
        '3NU' => 'E02000820',
        '3NW' => 'E02000820',
        '3NX' => 'E02000823',
        '3PE' => 'E02000820',
        '3PF' => 'E02000820',
        '3PG' => 'E02000823',
        '3PH' => 'E02000823',
        '3PJ' => 'E02000823',
        '3PL' => 'E02000820',
        '3PP' => 'E02000818',
        '3PQ' => 'E02000823',
        '3PR' => 'E02000818',
        '3PS' => 'E02000820',
        '3PT' => 'E02000820',
        '3PU' => 'E02000818',
        '3PX' => 'E02000818',
        '3PY' => 'E02000820',
        '3PZ' => 'E02000820',
        '3QA' => 'E02000820',
        '3QB' => 'E02000820',
        '3QD' => 'E02000820',
        '3QE' => 'E02000818',
        '3QF' => 'E02000818',
        '3QG' => 'E02000818',
        '3QH' => 'E02000820',
        '3QJ' => 'E02000820',
        '3QL' => 'E02000820',
        '3QN' => 'E02000820',
        '3QP' => 'E02000820',
        '3QQ' => 'E02000820',
        '3QR' => 'E02000820',
        '3QS' => 'E02000820',
        '3QT' => 'E02000823',
        '3QU' => 'E02000820',
        '3QW' => 'E02000820',
        '3QX' => 'E02000818',
        '3QY' => 'E02000820',
        '3RD' => 'E02000820',
        '3RE' => 'E02000820',
        '3RF' => 'E02000820',
        '3RG' => 'E02000820',
        '3RH' => 'E02000818',
        '3RJ' => 'E02000820',
        '3RL' => 'E02000820',
        '3RN' => 'E02000823',
        '3RP' => 'E02000822',
        '3RQ' => 'E02000820',
        '3RR' => 'E02000823',
        '3RS' => 'E02000818',
        '3RT' => 'E02000820',
        '3RU' => 'E02000820',
        '3RW' => 'E02000820',
        '3RX' => 'E02000820',
        '3RY' => 'E02000820',
        '3RZ' => 'E02000820',
        '3SA' => 'E02000820',
        '3SB' => 'E02000820',
        '3SD' => 'E02000820',
        '3SE' => 'E02000820',
        '3SF' => 'E02000820',
        '3SG' => 'E02000820',
        '3SH' => 'E02000820',
        '3SJ' => 'E02000820',
        '3SL' => 'E02000820',
        '3SN' => 'E02000818',
        '3SQ' => 'E02000820',
        '3SR' => 'E02000820',
        '3SU' => 'E02000820',
        '3SX' => 'E02000820',
        '3SY' => 'E02000820',
        '3SZ' => 'E02000820',
        '3TA' => 'E02000820',
        '3TB' => 'E02000820',
        '3TD' => 'E02000820',
        '3TE' => 'E02000820',
        '3TF' => 'E02000820',
        '3TG' => 'E02000820',
        '3TH' => 'E02000820',
        '3TJ' => 'E02000820',
        '3TL' => 'E02000820',
        '3TN' => 'E02000820',
        '3TP' => 'E02000820',
        '3TQ' => 'E02000820',
        '3TR' => 'E02000820',
        '3TS' => 'E02000820',
        '3TT' => 'E02000820',
        '3TU' => 'E02000820',
        '3TW' => 'E02000820',
        '3UB' => 'E02000823',
        '3UD' => 'E02000823',
        '3UE' => 'E02000823',
        '3UF' => 'E02000823',
        '3UG' => 'E02000823',
        '3UH' => 'E02000823',
        '3UJ' => 'E02000823',
        '3UL' => 'E02000823',
        '3UN' => 'E02000823',
        '3UQ' => 'E02000823',
        '3UR' => 'E02000820',
        '3US' => 'E02000820',
        '3UT' => 'E02000820',
        '3UU' => 'E02000820',
        '3UW' => 'E02000823',
        '3UX' => 'E02000823',
        '3UY' => 'E02000820',
        '3UZ' => 'E02000820',
        '3WA' => 'E02000820',
        '3WB' => 'E02000820',
        '3WD' => 'E02000820',
        '3WE' => 'E02000820',
        '3WF' => 'E02000820',
        '3WG' => 'E02000820',
        '3WH' => 'E02000820',
        '3WJ' => 'E02000820',
        '3WL' => 'E02000820',
        '3WN' => 'E02000820',
        '3WP' => 'E02000820',
        '3WQ' => 'E02000820',
        '3WR' => 'E02000820',
        '3WS' => 'E02000820',
        '3WT' => 'E02000820',
        '3WU' => 'E02000820',
        '3WW' => 'E02000820',
        '3WX' => 'E02000820',
        '3WY' => 'E02000820',
        '3WZ' => 'E02000820',
        '3XA' => 'E02000820',
        '3XB' => 'E02000820',
        '3XD' => 'E02000820',
        '3XE' => 'E02000820',
        '3XF' => 'E02000820',
        '3XG' => 'E02000820',
        '3XH' => 'E02000820',
        '3XJ' => 'E02000820',
        '3XL' => 'E02000820',
        '3XN' => 'E02000820',
        '3XP' => 'E02000820',
        '3XQ' => 'E02000820',
        '3XR' => 'E02000820',
        '3XS' => 'E02000820',
        '3XT' => 'E02000820',
        '3XU' => 'E02000820',
        '3XW' => 'E02000820',
        '3XY' => 'E02000820',
        '3XZ' => 'E02000820',
        '3YA' => 'E02000820',
        '3YB' => 'E02000820',
        '3YD' => 'E02000820',
        '3YE' => 'E02000820',
        '3YF' => 'E02000820',
        '3YG' => 'E02000820',
        '3YH' => 'E02000820',
        '3YJ' => 'E02000820',
        '3YL' => 'E02000820',
        '3YN' => 'E02000820',
        '3YP' => 'E02000820',
        '3YQ' => 'E02000820',
        '3YS' => 'E02000820',
        '3YT' => 'E02000820',
        '3YU' => 'E02000820',
        '3YW' => 'E02000820',
        '3YX' => 'E02000820',
        '3YY' => 'E02000820',
        '3YZ' => 'E02000820',
        '3ZA' => 'E02000820',
        '3ZB' => 'E02000820',
        '3ZD' => 'E02000820',
        '3ZE' => 'E02000820',
        '3ZF' => 'E02000820',
        '3ZG' => 'E02000820',
        '3ZH' => 'E02000820',
        '3ZJ' => 'E02000820',
        '3ZL' => 'E02000820',
        '3ZN' => 'E02000820',
        '3ZP' => 'E02000820',
        '3ZQ' => 'E02000820',
        '3ZR' => 'E02000820',
        '3ZS' => 'E02000820',
        '3ZT' => 'E02000820',
        '3ZU' => 'E02000820',
        '3ZW' => 'E02000820',
        '3ZX' => 'E02000820',
        '9AB' => 'E02000820',
        '9AE' => 'E02000820',
        '9AN' => 'E02000820',
        '9AQ' => 'E02000820',
        '9AT' => 'E02000820',
        '9AZ' => 'E02000820',
        '9BA' => 'E02000820',
        '9BD' => 'E02000820',
        '9BE' => 'E02000820',
        '9BF' => 'E02000820',
        '9BG' => 'E02000820',
        '9BH' => 'E02000820',
        '9BJ' => 'E02000820',
        '9BL' => 'E02000820',
        '9BN' => 'E02000820',
        '9BP' => 'E02000820',
        '9BQ' => 'E02000820',
        '9BR' => 'E02000820',
        '9BS' => 'E02000820',
        '9BT' => 'E02000820',
        '9BW' => 'E02000820',
        '9BX' => 'E02000820',
        '9BY' => 'E02000820',
        '9BZ' => 'E02000820',
        '9DA' => 'E02000820',
        '9DB' => 'E02000820',
        '9DD' => 'E02000820',
        '9DE' => 'E02000820',
        '9DF' => 'E02000820',
        '9DG' => 'E02000820',
        '9DH' => 'E02000820',
        '9DJ' => 'E02000820',
        '9DL' => 'E02000820',
        '9DN' => 'E02000820',
        '9DP' => 'E02000820',
        '9DQ' => 'E02000820',
        '9DR' => 'E02000820',
        '9DS' => 'E02000820',
        '9DT' => 'E02000820',
        '9DU' => 'E02000820',
        '9DW' => 'E02000820',
        '9DX' => 'E02000820',
        '9DY' => 'E02000820',
        '9DZ' => 'E02000820',
        '9EA' => 'E02000820',
        '9EB' => 'E02000820',
        '9ED' => 'E02000820',
        '9EF' => 'E02000820',
        '9EG' => 'E02000820',
        '9EH' => 'E02000820',
        '9EJ' => 'E02000820',
        '9EL' => 'E02000820',
        '9EN' => 'E02000820',
        '9EP' => 'E02000820',
        '9EQ' => 'E02000820',
        '9ER' => 'E02000820',
        '9ES' => 'E02000820',
        '9ET' => 'E02000820',
        '9EU' => 'E02000820',
        '9EW' => 'E02000820',
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
