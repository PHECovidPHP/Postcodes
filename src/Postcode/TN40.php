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
final class TN40
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02004402',
        '1AB' => 'E02004402',
        '1AD' => 'E02004402',
        '1AE' => 'E02004402',
        '1AF' => 'E02004402',
        '1AG' => 'E02004402',
        '1AH' => 'E02004402',
        '1AJ' => 'E02004402',
        '1AL' => 'E02004402',
        '1AN' => 'E02004402',
        '1AP' => 'E02004402',
        '1AQ' => 'E02004402',
        '1AR' => 'E02004402',
        '1AS' => 'E02004402',
        '1AT' => 'E02004402',
        '1AU' => 'E02004402',
        '1AW' => 'E02004402',
        '1AX' => 'E02004402',
        '1AY' => 'E02004399',
        '1AZ' => 'E02004402',
        '1BA' => 'E02004402',
        '1BB' => 'E02004402',
        '1BD' => 'E02004402',
        '1BE' => 'E02004402',
        '1BF' => 'E02004402',
        '1BG' => 'E02004402',
        '1BH' => 'E02004402',
        '1BJ' => 'E02004402',
        '1BL' => 'E02004402',
        '1BN' => 'E02004402',
        '1BP' => 'E02004402',
        '1BQ' => 'E02004402',
        '1BS' => 'E02004402',
        '1BT' => 'E02004402',
        '1BU' => 'E02004402',
        '1BW' => 'E02004402',
        '1BX' => 'E02004402',
        '1BY' => 'E02004402',
        '1BZ' => 'E02004402',
        '1DA' => 'E02004402',
        '1DB' => 'E02004402',
        '1DD' => 'E02004402',
        '1DE' => 'E02004402',
        '1DF' => 'E02004402',
        '1DG' => 'E02004402',
        '1DH' => 'E02004402',
        '1DJ' => 'E02004402',
        '1DL' => 'E02004402',
        '1DN' => 'E02004402',
        '1DP' => 'E02004402',
        '1DQ' => 'E02004402',
        '1DR' => 'E02004402',
        '1DS' => 'E02004402',
        '1DT' => 'E02004402',
        '1DU' => 'E02004402',
        '1DW' => 'E02004402',
        '1DX' => 'E02004402',
        '1DY' => 'E02004402',
        '1DZ' => 'E02004402',
        '1EA' => 'E02004402',
        '1EB' => 'E02004402',
        '1ED' => 'E02004402',
        '1EE' => 'E02004402',
        '1EF' => 'E02004402',
        '1EG' => 'E02004402',
        '1EH' => 'E02004402',
        '1EJ' => 'E02004402',
        '1EL' => 'E02004402',
        '1EN' => 'E02004402',
        '1EP' => 'E02004402',
        '1EQ' => 'E02004402',
        '1ER' => 'E02004402',
        '1ES' => 'E02004402',
        '1ET' => 'E02004402',
        '1EU' => 'E02004402',
        '1EW' => 'E02004402',
        '1EX' => 'E02004402',
        '1EY' => 'E02004402',
        '1EZ' => 'E02004402',
        '1FB' => 'E02004399',
        '1FD' => 'E02004402',
        '1FE' => 'E02004402',
        '1FH' => 'E02004402',
        '1FJ' => 'E02004402',
        '1FL' => 'E02004402',
        '1GE' => 'E02004402',
        '1GR' => 'E02004402',
        '1GW' => 'E02004402',
        '1GX' => 'E02004402',
        '1HA' => 'E02004402',
        '1HB' => 'E02004402',
        '1HD' => 'E02004402',
        '1HE' => 'E02004402',
        '1HF' => 'E02004402',
        '1HG' => 'E02004402',
        '1HH' => 'E02004402',
        '1HJ' => 'E02004402',
        '1HL' => 'E02004402',
        '1HN' => 'E02004402',
        '1HP' => 'E02004402',
        '1HQ' => 'E02004402',
        '1HR' => 'E02004402',
        '1HS' => 'E02004402',
        '1HT' => 'E02004402',
        '1HU' => 'E02004402',
        '1HW' => 'E02004402',
        '1HX' => 'E02004402',
        '1HY' => 'E02004402',
        '1HZ' => 'E02004402',
        '1JA' => 'E02004402',
        '1JB' => 'E02004402',
        '1JD' => 'E02004402',
        '1JE' => 'E02004402',
        '1JF' => 'E02004402',
        '1JG' => 'E02004402',
        '1JH' => 'E02004402',
        '1JJ' => 'E02004402',
        '1JL' => 'E02004402',
        '1JN' => 'E02004402',
        '1JP' => 'E02004402',
        '1JQ' => 'E02004402',
        '1JR' => 'E02004402',
        '1JS' => 'E02004402',
        '1JT' => 'E02004402',
        '1JU' => 'E02004402',
        '1JW' => 'E02004402',
        '1JX' => 'E02004402',
        '1JY' => 'E02004402',
        '1JZ' => 'E02004402',
        '1LA' => 'E02004402',
        '1LB' => 'E02004402',
        '1LD' => 'E02004402',
        '1LE' => 'E02004402',
        '1LF' => 'E02004402',
        '1LG' => 'E02004402',
        '1LH' => 'E02004402',
        '1LJ' => 'E02004402',
        '1LL' => 'E02004402',
        '1LN' => 'E02004402',
        '1LP' => 'E02004402',
        '1LQ' => 'E02004402',
        '1LR' => 'E02004402',
        '1LS' => 'E02004402',
        '1LT' => 'E02004402',
        '1LU' => 'E02004402',
        '1LW' => 'E02004402',
        '1LX' => 'E02004402',
        '1LY' => 'E02004402',
        '1LZ' => 'E02004402',
        '1NA' => 'E02004402',
        '1NB' => 'E02004402',
        '1ND' => 'E02004402',
        '1NE' => 'E02004402',
        '1NF' => 'E02004402',
        '1NG' => 'E02004402',
        '1NH' => 'E02004402',
        '1NJ' => 'E02004402',
        '1NL' => 'E02004402',
        '1NN' => 'E02004402',
        '1NP' => 'E02004402',
        '1NQ' => 'E02004402',
        '1NR' => 'E02004402',
        '1NS' => 'E02004402',
        '1NT' => 'E02004399',
        '1NU' => 'E02004399',
        '1NW' => 'E02004402',
        '1NX' => 'E02004402',
        '1NY' => 'E02004399',
        '1NZ' => 'E02004402',
        '1PA' => 'E02004399',
        '1PB' => 'E02004399',
        '1PD' => 'E02004399',
        '1PE' => 'E02004399',
        '1PF' => 'E02004399',
        '1PG' => 'E02004399',
        '1PH' => 'E02004399',
        '1PJ' => 'E02004399',
        '1PL' => 'E02004399',
        '1PN' => 'E02004399',
        '1PP' => 'E02004402',
        '1PQ' => 'E02004399',
        '1PR' => 'E02004402',
        '1PS' => 'E02004402',
        '1PT' => 'E02004402',
        '1PW' => 'E02004399',
        '1PX' => 'E02004399',
        '1PY' => 'E02004402',
        '1PZ' => 'E02004402',
        '1QA' => 'E02004402',
        '1QB' => 'E02004402',
        '1QD' => 'E02004402',
        '1QE' => 'E02004402',
        '1QF' => 'E02004402',
        '1QG' => 'E02004402',
        '1QH' => 'E02004402',
        '1QJ' => 'E02004402',
        '1QL' => 'E02004402',
        '1QN' => 'E02004402',
        '1QP' => 'E02004402',
        '1QQ' => 'E02004402',
        '1QR' => 'E02004402',
        '1QS' => 'E02004402',
        '1QT' => 'E02004402',
        '1QU' => 'E02004402',
        '1QW' => 'E02004402',
        '1QX' => 'E02004402',
        '1QY' => 'E02004402',
        '1QZ' => 'E02004402',
        '1RA' => 'E02004399',
        '1RB' => 'E02004402',
        '1RD' => 'E02004402',
        '1RE' => 'E02004402',
        '1RF' => 'E02004399',
        '1RG' => 'E02004402',
        '1RH' => 'E02004402',
        '1RJ' => 'E02004402',
        '1RL' => 'E02004402',
        '1RN' => 'E02004402',
        '1RP' => 'E02004402',
        '1RQ' => 'E02004402',
        '1RR' => 'E02004402',
        '1RS' => 'E02004402',
        '1RT' => 'E02004399',
        '1RU' => 'E02004402',
        '1RW' => 'E02004402',
        '1RY' => 'E02004402',
        '1RZ' => 'E02004402',
        '1SA' => 'E02004402',
        '1SB' => 'E02004402',
        '1SD' => 'E02004402',
        '1SE' => 'E02004402',
        '1SF' => 'E02004402',
        '1SG' => 'E02004402',
        '1SH' => 'E02004402',
        '1SJ' => 'E02004402',
        '1SL' => 'E02004402',
        '1SN' => 'E02004402',
        '1SP' => 'E02004402',
        '1SQ' => 'E02004402',
        '1SR' => 'E02004402',
        '1SS' => 'E02004402',
        '1ST' => 'E02004402',
        '1SU' => 'E02004402',
        '1SW' => 'E02004402',
        '1SX' => 'E02004399',
        '1SY' => 'E02004402',
        '1SZ' => 'E02004402',
        '1TA' => 'E02004399',
        '1TB' => 'E02004399',
        '1TD' => 'E02004399',
        '1TE' => 'E02004399',
        '1TF' => 'E02004399',
        '1TG' => 'E02004399',
        '1TH' => 'E02004402',
        '1TJ' => 'E02004399',
        '1TL' => 'E02004399',
        '1TN' => 'E02004399',
        '1TP' => 'E02004399',
        '1TQ' => 'E02004399',
        '1TR' => 'E02004399',
        '1TS' => 'E02004399',
        '1TT' => 'E02004399',
        '1TU' => 'E02004399',
        '1TW' => 'E02004399',
        '1TX' => 'E02004402',
        '1TY' => 'E02004402',
        '1TZ' => 'E02004402',
        '1UA' => 'E02004402',
        '1UD' => 'E02004402',
        '1UE' => 'E02004402',
        '1UF' => 'E02004399',
        '1UG' => 'E02004402',
        '1UH' => 'E02004402',
        '1UQ' => 'E02004402',
        '1UT' => 'E02004402',
        '1UY' => 'E02004399',
        '1UZ' => 'E02004402',
        '1WA' => 'E02004402',
        '1WB' => 'E02004402',
        '1WD' => 'E02004402',
        '1WE' => 'E02004402',
        '1WF' => 'E02004402',
        '1WG' => 'E02004402',
        '1WH' => 'E02004402',
        '1WJ' => 'E02004402',
        '1WL' => 'E02004402',
        '1WN' => 'E02004402',
        '1WP' => 'E02004402',
        '1WQ' => 'E02004402',
        '1WR' => 'E02004402',
        '1WS' => 'E02004402',
        '1WT' => 'E02004402',
        '1WU' => 'E02004402',
        '1WW' => 'E02004402',
        '1WX' => 'E02004402',
        '1WY' => 'E02004402',
        '1WZ' => 'E02004402',
        '1XA' => 'E02004402',
        '1XD' => 'E02004399',
        '1XF' => 'E02004399',
        '1XL' => 'E02004399',
        '1XT' => 'E02004399',
        '1XY' => 'E02004402',
        '1XZ' => 'E02004402',
        '1YA' => 'E02004402',
        '1YE' => 'E02004402',
        '1YP' => 'E02004402',
        '1YR' => 'E02004402',
        '1YT' => 'E02004402',
        '1YW' => 'E02004402',
        '1YX' => 'E02004402',
        '1ZA' => 'E02004402',
        '1ZB' => 'E02004402',
        '1ZD' => 'E02004402',
        '1ZE' => 'E02004402',
        '1ZF' => 'E02004402',
        '1ZG' => 'E02004402',
        '1ZH' => 'E02004402',
        '1ZJ' => 'E02004402',
        '1ZL' => 'E02004402',
        '1ZN' => 'E02004402',
        '1ZP' => 'E02004402',
        '1ZQ' => 'E02004402',
        '1ZR' => 'E02004402',
        '1ZS' => 'E02004402',
        '1ZT' => 'E02004402',
        '1ZU' => 'E02004402',
        '1ZW' => 'E02004402',
        '1ZX' => 'E02004402',
        '1ZY' => 'E02004402',
        '1ZZ' => 'E02004402',
        '2AA' => 'E02004398',
        '2AB' => 'E02004398',
        '2AD' => 'E02004398',
        '2AE' => 'E02004398',
        '2AF' => 'E02004398',
        '2AG' => 'E02004402',
        '2AH' => 'E02004398',
        '2AJ' => 'E02004398',
        '2AL' => 'E02004398',
        '2AN' => 'E02004398',
        '2AP' => 'E02004398',
        '2AQ' => 'E02004398',
        '2AR' => 'E02004402',
        '2AS' => 'E02004398',
        '2AT' => 'E02004398',
        '2AU' => 'E02004398',
        '2AW' => 'E02004398',
        '2AX' => 'E02004398',
        '2AY' => 'E02004398',
        '2AZ' => 'E02004398',
        '2BA' => 'E02004398',
        '2BB' => 'E02004398',
        '2BD' => 'E02004398',
        '2BE' => 'E02004398',
        '2BF' => 'E02004398',
        '2BG' => 'E02004398',
        '2BH' => 'E02004398',
        '2BJ' => 'E02004398',
        '2BL' => 'E02004398',
        '2BN' => 'E02004398',
        '2BP' => 'E02004398',
        '2BQ' => 'E02004398',
        '2BS' => 'E02004398',
        '2BT' => 'E02004398',
        '2BU' => 'E02004398',
        '2BW' => 'E02004398',
        '2BX' => 'E02004398',
        '2BY' => 'E02004398',
        '2BZ' => 'E02004398',
        '2DA' => 'E02004398',
        '2DB' => 'E02004398',
        '2DD' => 'E02004398',
        '2DE' => 'E02004398',
        '2DF' => 'E02004398',
        '2DG' => 'E02004398',
        '2DH' => 'E02004398',
        '2DJ' => 'E02004398',
        '2DL' => 'E02004398',
        '2DN' => 'E02004398',
        '2DP' => 'E02004398',
        '2DQ' => 'E02004398',
        '2DR' => 'E02004398',
        '2DS' => 'E02004398',
        '2DT' => 'E02004398',
        '2DU' => 'E02004398',
        '2DW' => 'E02004398',
        '2DX' => 'E02004398',
        '2DY' => 'E02004399',
        '2DZ' => 'E02004399',
        '2EA' => 'E02004399',
        '2EB' => 'E02004399',
        '2ED' => 'E02004398',
        '2EE' => 'E02004399',
        '2EF' => 'E02004399',
        '2EG' => 'E02004399',
        '2EH' => 'E02004398',
        '2EJ' => 'E02004399',
        '2EL' => 'E02004398',
        '2EN' => 'E02004399',
        '2EP' => 'E02004399',
        '2EQ' => 'E02004399',
        '2ER' => 'E02004399',
        '2ES' => 'E02004398',
        '2ET' => 'E02004399',
        '2EU' => 'E02004398',
        '2EW' => 'E02004398',
        '2EX' => 'E02004399',
        '2EY' => 'E02004398',
        '2EZ' => 'E02004399',
        '2FA' => 'E02004398',
        '2FB' => 'E02004399',
        '2FD' => 'E02004399',
        '2FE' => 'E02004399',
        '2FH' => 'E02004398',
        '2FJ' => 'E02004399',
        '2FL' => 'E02004398',
        '2FN' => 'E02004398',
        '2FP' => 'E02004398',
        '2FQ' => 'E02004398',
        '2FR' => 'E02004398',
        '2FS' => 'E02004399',
        '2FY' => 'E02004398',
        '2GA' => 'E02004398',
        '2GE' => 'E02004398',
        '2GL' => 'E02004399',
        '2HA' => 'E02004398',
        '2HB' => 'E02004399',
        '2HD' => 'E02004398',
        '2HE' => 'E02004398',
        '2HF' => 'E02004398',
        '2HG' => 'E02004398',
        '2HH' => 'E02004399',
        '2HJ' => 'E02004398',
        '2HL' => 'E02004399',
        '2HN' => 'E02004399',
        '2HP' => 'E02004399',
        '2HQ' => 'E02004398',
        '2HR' => 'E02004399',
        '2HS' => 'E02004399',
        '2HT' => 'E02004399',
        '2HU' => 'E02004399',
        '2HW' => 'E02004399',
        '2HX' => 'E02004399',
        '2HY' => 'E02004398',
        '2HZ' => 'E02004399',
        '2JA' => 'E02004402',
        '2JB' => 'E02004402',
        '2JD' => 'E02004402',
        '2JE' => 'E02004399',
        '2JF' => 'E02004399',
        '2JG' => 'E02004399',
        '2JH' => 'E02004399',
        '2JJ' => 'E02004399',
        '2JL' => 'E02004399',
        '2JN' => 'E02004399',
        '2JP' => 'E02004399',
        '2JQ' => 'E02004399',
        '2JR' => 'E02004399',
        '2JS' => 'E02004399',
        '2JT' => 'E02004399',
        '2JU' => 'E02004399',
        '2JW' => 'E02004399',
        '2JX' => 'E02004399',
        '2JY' => 'E02004399',
        '2JZ' => 'E02004399',
        '2LA' => 'E02004399',
        '2LB' => 'E02004399',
        '2LD' => 'E02004399',
        '2LE' => 'E02004399',
        '2LF' => 'E02004399',
        '2LG' => 'E02004399',
        '2LH' => 'E02004398',
        '2LJ' => 'E02004398',
        '2LL' => 'E02004398',
        '2LN' => 'E02004398',
        '2LP' => 'E02004398',
        '2LQ' => 'E02004398',
        '2LR' => 'E02004398',
        '2LS' => 'E02004398',
        '2LT' => 'E02004398',
        '2LU' => 'E02004399',
        '2LW' => 'E02004398',
        '2LX' => 'E02004399',
        '2LY' => 'E02004399',
        '2LZ' => 'E02004398',
        '2NA' => 'E02004399',
        '2NB' => 'E02004399',
        '2ND' => 'E02004399',
        '2NE' => 'E02004399',
        '2NF' => 'E02004399',
        '2NG' => 'E02004399',
        '2NH' => 'E02004399',
        '2NJ' => 'E02004399',
        '2NL' => 'E02004399',
        '2NN' => 'E02004399',
        '2NP' => 'E02004399',
        '2NQ' => 'E02004399',
        '2NR' => 'E02004399',
        '2NS' => 'E02004399',
        '2NT' => 'E02004399',
        '2NU' => 'E02004399',
        '2NW' => 'E02004402',
        '2NX' => 'E02004399',
        '2NY' => 'E02004399',
        '2NZ' => 'E02004399',
        '2PA' => 'E02004399',
        '2PB' => 'E02004399',
        '2PD' => 'E02004399',
        '2PE' => 'E02004399',
        '2PF' => 'E02004399',
        '2PG' => 'E02004399',
        '2PH' => 'E02004399',
        '2PJ' => 'E02004399',
        '2PL' => 'E02004399',
        '2PN' => 'E02004399',
        '2PP' => 'E02004399',
        '2PQ' => 'E02004399',
        '2PR' => 'E02004399',
        '2PS' => 'E02004399',
        '2PT' => 'E02004399',
        '2PU' => 'E02004399',
        '2PW' => 'E02004399',
        '2PX' => 'E02004399',
        '2PY' => 'E02004399',
        '2PZ' => 'E02004399',
        '2QA' => 'E02004399',
        '2QB' => 'E02004399',
        '2QD' => 'E02004399',
        '2QE' => 'E02004399',
        '2QG' => 'E02004399',
        '2QH' => 'E02004399',
        '2QJ' => 'E02004399',
        '2QL' => 'E02004399',
        '2QN' => 'E02004399',
        '2QP' => 'E02004399',
        '2QQ' => 'E02004399',
        '2QT' => 'E02004399',
        '2QY' => 'E02004399',
        '2QZ' => 'E02004399',
        '2RA' => 'E02004399',
        '2RB' => 'E02004399',
        '2RD' => 'E02004399',
        '2RE' => 'E02004399',
        '2RF' => 'E02004399',
        '2RG' => 'E02004399',
        '2RH' => 'E02004399',
        '2RJ' => 'E02004399',
        '2RL' => 'E02004399',
        '2RN' => 'E02004399',
        '2RP' => 'E02004399',
        '2RQ' => 'E02004399',
        '2RR' => 'E02004399',
        '2RS' => 'E02004399',
        '2RT' => 'E02004399',
        '2RU' => 'E02004399',
        '2RW' => 'E02004399',
        '2RX' => 'E02004399',
        '2RY' => 'E02004399',
        '2RZ' => 'E02004399',
        '2SA' => 'E02004399',
        '2SB' => 'E02004399',
        '2SD' => 'E02004399',
        '2SE' => 'E02004399',
        '2SF' => 'E02004399',
        '2SG' => 'E02004399',
        '2SH' => 'E02004399',
        '2SJ' => 'E02004399',
        '2SL' => 'E02004399',
        '2SN' => 'E02004399',
        '2SP' => 'E02004399',
        '2SQ' => 'E02004399',
        '2SR' => 'E02004399',
        '2SS' => 'E02004399',
        '2ST' => 'E02004399',
        '2SU' => 'E02004399',
        '2SW' => 'E02004399',
        '2SX' => 'E02004399',
        '2SY' => 'E02004399',
        '2SZ' => 'E02004399',
        '2TA' => 'E02004399',
        '2TB' => 'E02004399',
        '2TD' => 'E02004399',
        '2TE' => 'E02004399',
        '2TF' => 'E02004399',
        '2TG' => 'E02004399',
        '2TH' => 'E02004399',
        '2TZ' => 'E02004399',
        '2UA' => 'E02004398',
        '2UG' => 'E02004399',
        '2UH' => 'E02004399',
        '2UJ' => 'E02004399',
        '2UL' => 'E02004399',
        '2UN' => 'E02004399',
        '2UP' => 'E02004399',
        '2UR' => 'E02004399',
        '2WA' => 'E02004402',
        '2WB' => 'E02004402',
        '2WE' => 'E02004402',
        '2WF' => 'E02004402',
        '2WG' => 'E02004402',
        '2WJ' => 'E02004402',
        '2WS' => 'E02004402',
        '2WU' => 'E02004402',
        '2WW' => 'E02004402',
        '2WX' => 'E02004402',
        '2WY' => 'E02004402',
        '2WZ' => 'E02004402',
        '2XL' => 'E02004399',
        '2XU' => 'E02004399',
        '2YA' => 'E02004402',
        '2YQ' => 'E02004402',
        '2YZ' => 'E02004402',
        '2ZA' => 'E02004399',
        '2ZB' => 'E02004399',
        '2ZD' => 'E02004399',
        '2ZE' => 'E02004402',
        '2ZF' => 'E02004399',
        '2ZG' => 'E02004402',
        '2ZH' => 'E02004402',
        '2ZJ' => 'E02004402',
        '2ZL' => 'E02004399',
        '2ZN' => 'E02004399',
        '2ZP' => 'E02004399',
        '2ZQ' => 'E02004399',
        '2ZR' => 'E02004399',
        '2ZS' => 'E02004399',
        '2ZT' => 'E02004402',
        '2ZU' => 'E02004399',
        '2ZW' => 'E02004402',
        '2ZX' => 'E02004399',
        '2ZY' => 'E02004399',
        '2ZZ' => 'E02004402',
        '9AA' => 'E02004402',
        '9AB' => 'E02004402',
        '9AD' => 'E02004402',
        '9AE' => 'E02004402',
        '9AF' => 'E02004402',
        '9AG' => 'E02004402',
        '9AH' => 'E02004402',
        '9AJ' => 'E02004402',
        '9AL' => 'E02004402',
        '9AN' => 'E02004402',
        '9AP' => 'E02004402',
        '9AQ' => 'E02004402',
        '9AR' => 'E02004402',
        '9AS' => 'E02004402',
        '9AT' => 'E02004402',
        '9AU' => 'E02004402',
        '9AW' => 'E02004402',
        '9AX' => 'E02004402',
        '9AY' => 'E02004402',
        '9AZ' => 'E02004402',
        '9BA' => 'E02004402',
        '9BB' => 'E02004402',
        '9BD' => 'E02004402',
        '9BE' => 'E02004402',
        '9BF' => 'E02004402',
        '9BG' => 'E02004402',
        '9BH' => 'E02004402',
        '9BJ' => 'E02004402',
        '9BL' => 'E02004402',
        '9BN' => 'E02004402',
        '9BP' => 'E02004402',
        '9BQ' => 'E02004402',
        '9BR' => 'E02004402',
        '9BS' => 'E02004402',
        '9BT' => 'E02004402',
        '9BU' => 'E02004402',
        '9BW' => 'E02004402',
        '9BX' => 'E02004402',
        '9BY' => 'E02004402',
        '9BZ' => 'E02004402',
        '9DA' => 'E02004402',
        '9DB' => 'E02004402',
        '9DD' => 'E02004402',
        '9DE' => 'E02004402',
        '9DF' => 'E02004402',
        '9DG' => 'E02004402',
        '9DH' => 'E02004402',
        '9DJ' => 'E02004402',
        '9DL' => 'E02004402',
        '9DN' => 'E02004402',
        '9DP' => 'E02004402',
        '9DQ' => 'E02004402',
        '9DR' => 'E02004402',
        '9DS' => 'E02004402',
        '9DT' => 'E02004402',
        '9DU' => 'E02004402',
        '9DW' => 'E02004402',
        '9DX' => 'E02004402',
        '9DY' => 'E02004402',
        '9DZ' => 'E02004402',
        '9EA' => 'E02004402',
        '9EB' => 'E02004402',
        '9ED' => 'E02004402',
        '9EE' => 'E02004402',
        '9EF' => 'E02004402',
        '9EG' => 'E02004402',
        '9EH' => 'E02004402',
        '9EJ' => 'E02004402',
        '9EL' => 'E02004402',
        '9EN' => 'E02004402',
        '9EP' => 'E02004402',
        '9EQ' => 'E02004402',
        '9ER' => 'E02004402',
        '9ES' => 'E02004402',
        '9ET' => 'E02004402',
        '9EU' => 'E02004402',
        '9EW' => 'E02004402',
        '9EX' => 'E02004402',
        '9EY' => 'E02004402',
        '9EZ' => 'E02004402',
        '9FB' => 'E02004402',
        '9FD' => 'E02004402',
        '9FE' => 'E02004402',
        '9FF' => 'E02004402',
        '9FG' => 'E02004402',
        '9FH' => 'E02004402',
        '9FJ' => 'E02004402',
        '9FL' => 'E02004402',
        '9FN' => 'E02004402',
        '9FP' => 'E02004402',
        '9FQ' => 'E02004402',
        '9FR' => 'E02004402',
        '9FS' => 'E02004402',
        '9FT' => 'E02004402',
        '9FU' => 'E02004402',
        '9FW' => 'E02004402',
        '9FX' => 'E02004402',
        '9FY' => 'E02004402',
        '9FZ' => 'E02004402',
        '9GA' => 'E02004402',
        '9GB' => 'E02004402',
        '9GD' => 'E02004402',
        '9GE' => 'E02004402',
        '9GF' => 'E02004402',
        '9GG' => 'E02004402',
        '9GH' => 'E02004402',
        '9GJ' => 'E02004402',
        '9GL' => 'E02004402',
        '9GN' => 'E02004402',
        '9GP' => 'E02004402',
        '9GQ' => 'E02004402',
        '9GR' => 'E02004402',
        '9GT' => 'E02004402',
        '9GU' => 'E02004402',
        '9GW' => 'E02004402',
        '9GX' => 'E02004402',
        '9GY' => 'E02004402',
        '9GZ' => 'E02004402',
        '9HA' => 'E02004402',
        '9HB' => 'E02004402',
        '9HD' => 'E02004402',
        '9HE' => 'E02004402',
        '9HF' => 'E02004402',
        '9HG' => 'E02004402',
        '9HH' => 'E02004402',
        '9HJ' => 'E02004402',
        '9HL' => 'E02004402',
        '9HN' => 'E02004402',
        '9HP' => 'E02004402',
        '9HR' => 'E02004402',
        '9HS' => 'E02004402',
        '9HT' => 'E02004402',
        '9HU' => 'E02004402',
        '9HX' => 'E02004402',
        '9HY' => 'E02004402',
        '9HZ' => 'E02004402',
        '9JA' => 'E02004402',
        '9JB' => 'E02004402',
        '9JE' => 'E02004402',
        '9JF' => 'E02004402',
        '9JH' => 'E02004402',
        '9JJ' => 'E02004402',
        '9SA' => 'E02004402',
        '9SB' => 'E02004402',
        '9SD' => 'E02004402',
        '9SE' => 'E02004402',
        '9SF' => 'E02004402',
        '9SG' => 'E02004402',
        '9SH' => 'E02004402',
        '9SJ' => 'E02004402',
        '9SL' => 'E02004402',
        '9SN' => 'E02004402',
        '9SP' => 'E02004402',
        '9SQ' => 'E02004402',
        '9SR' => 'E02004402',
        '9SS' => 'E02004402',
        '9ST' => 'E02004402',
        '9SU' => 'E02004402',
        '9SW' => 'E02004402',
        '9SX' => 'E02004402',
        '9SY' => 'E02004402',
        '9SZ' => 'E02004402',
        '9TA' => 'E02004402',
        '9TB' => 'E02004402',
        '9TD' => 'E02004402',
        '9TE' => 'E02004402',
        '9TF' => 'E02004402',
        '9TG' => 'E02004402',
        '9TH' => 'E02004402',
        '9TJ' => 'E02004402',
        '9ZY' => 'E02004402',
        '9ZZ' => 'E02004402',
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
