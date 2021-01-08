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
final class RH4
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02006371',
        '1AB' => 'E02006371',
        '1AD' => 'E02006370',
        '1AE' => 'E02006371',
        '1AF' => 'E02006370',
        '1AG' => 'E02006370',
        '1AH' => 'E02006370',
        '1AJ' => 'E02006370',
        '1AL' => 'E02006370',
        '1AN' => 'E02006370',
        '1AP' => 'E02006371',
        '1AQ' => 'E02006370',
        '1AR' => 'E02006370',
        '1AS' => 'E02006371',
        '1AT' => 'E02006371',
        '1AU' => 'E02006370',
        '1AW' => 'E02006370',
        '1AX' => 'E02006371',
        '1AY' => 'E02006371',
        '1AZ' => 'E02006371',
        '1BA' => 'E02006371',
        '1BB' => 'E02006371',
        '1BD' => 'E02006371',
        '1BE' => 'E02006371',
        '1BF' => 'E02006370',
        '1BG' => 'E02006371',
        '1BH' => 'E02006370',
        '1BJ' => 'E02006370',
        '1BL' => 'E02006371',
        '1BN' => 'E02006370',
        '1BP' => 'E02006371',
        '1BQ' => 'E02006371',
        '1BS' => 'E02006370',
        '1BT' => 'E02006370',
        '1BU' => 'E02006370',
        '1BW' => 'E02006370',
        '1BX' => 'E02006370',
        '1BY' => 'E02006371',
        '1BZ' => 'E02006370',
        '1DA' => 'E02006370',
        '1DB' => 'E02006371',
        '1DD' => 'E02006370',
        '1DE' => 'E02006370',
        '1DF' => 'E02006370',
        '1DG' => 'E02006370',
        '1DH' => 'E02006370',
        '1DJ' => 'E02006370',
        '1DL' => 'E02006370',
        '1DN' => 'E02006370',
        '1DP' => 'E02006370',
        '1DQ' => 'E02006370',
        '1DR' => 'E02006370',
        '1DS' => 'E02006370',
        '1DT' => 'E02006370',
        '1DU' => 'E02006370',
        '1DW' => 'E02006370',
        '1DX' => 'E02006370',
        '1DY' => 'E02006370',
        '1DZ' => 'E02006371',
        '1EA' => 'E02006370',
        '1EB' => 'E02006370',
        '1ED' => 'E02006370',
        '1EE' => 'E02006370',
        '1EF' => 'E02006370',
        '1EG' => 'E02006370',
        '1EH' => 'E02006370',
        '1EJ' => 'E02006370',
        '1EL' => 'E02006370',
        '1EN' => 'E02006370',
        '1EP' => 'E02006370',
        '1EQ' => 'E02006370',
        '1ER' => 'E02006370',
        '1ES' => 'E02006370',
        '1ET' => 'E02006370',
        '1EU' => 'E02006370',
        '1EW' => 'E02006370',
        '1EX' => 'E02006370',
        '1EY' => 'E02006370',
        '1EZ' => 'E02006370',
        '1FA' => 'E02006370',
        '1FB' => 'E02006370',
        '1FD' => 'E02006370',
        '1FE' => 'E02006370',
        '1FF' => 'E02006370',
        '1FG' => 'E02006370',
        '1FH' => 'E02006370',
        '1FJ' => 'E02006370',
        '1FL' => 'E02006370',
        '1FN' => 'E02006370',
        '1FP' => 'E02006370',
        '1FQ' => 'E02006370',
        '1FR' => 'E02006370',
        '1FS' => 'E02006370',
        '1FT' => 'E02006370',
        '1FW' => 'E02006370',
        '1FX' => 'E02006370',
        '1FY' => 'E02006370',
        '1FZ' => 'E02006370',
        '1GA' => 'E02006370',
        '1GB' => 'E02006370',
        '1GD' => 'E02006370',
        '1GF' => 'E02006370',
        '1GG' => 'E02006370',
        '1GH' => 'E02006370',
        '1GJ' => 'E02006370',
        '1GL' => 'E02006370',
        '1GN' => 'E02006371',
        '1GP' => 'E02006370',
        '1GQ' => 'E02006370',
        '1GR' => 'E02006370',
        '1GS' => 'E02006370',
        '1HA' => 'E02006370',
        '1HB' => 'E02006370',
        '1HD' => 'E02006370',
        '1HE' => 'E02006370',
        '1HF' => 'E02006370',
        '1HG' => 'E02006370',
        '1HH' => 'E02006370',
        '1HJ' => 'E02006370',
        '1HL' => 'E02006370',
        '1HN' => 'E02006370',
        '1HP' => 'E02006370',
        '1HQ' => 'E02006370',
        '1HR' => 'E02006370',
        '1HS' => 'E02006370',
        '1HT' => 'E02006370',
        '1HU' => 'E02006370',
        '1HW' => 'E02006370',
        '1HX' => 'E02006370',
        '1HY' => 'E02006370',
        '1HZ' => 'E02006370',
        '1JA' => 'E02006370',
        '1JB' => 'E02006370',
        '1JD' => 'E02006370',
        '1JE' => 'E02006370',
        '1JF' => 'E02006370',
        '1JG' => 'E02006370',
        '1JH' => 'E02006370',
        '1JJ' => 'E02006370',
        '1JL' => 'E02006371',
        '1JN' => 'E02006370',
        '1JP' => 'E02006370',
        '1JQ' => 'E02006370',
        '1JR' => 'E02006370',
        '1JS' => 'E02006370',
        '1JT' => 'E02006370',
        '1JU' => 'E02006370',
        '1JW' => 'E02006370',
        '1JX' => 'E02006370',
        '1JY' => 'E02006370',
        '1JZ' => 'E02006370',
        '1LA' => 'E02006370',
        '1LB' => 'E02006370',
        '1LD' => 'E02006370',
        '1LE' => 'E02006370',
        '1LF' => 'E02006370',
        '1LG' => 'E02006370',
        '1LH' => 'E02006370',
        '1LJ' => 'E02006370',
        '1LL' => 'E02006370',
        '1LN' => 'E02006370',
        '1LP' => 'E02006370',
        '1LQ' => 'E02006370',
        '1LR' => 'E02006370',
        '1LS' => 'E02006370',
        '1LT' => 'E02006370',
        '1LU' => 'E02006370',
        '1LW' => 'E02006370',
        '1LX' => 'E02006370',
        '1LY' => 'E02006370',
        '1LZ' => 'E02006370',
        '1NA' => 'E02006370',
        '1NB' => 'E02006370',
        '1ND' => 'E02006370',
        '1NE' => 'E02006370',
        '1NF' => 'E02006370',
        '1NG' => 'E02006370',
        '1NH' => 'E02006370',
        '1NJ' => 'E02006370',
        '1NL' => 'E02006370',
        '1NN' => 'E02006370',
        '1NP' => 'E02006371',
        '1NQ' => 'E02006370',
        '1NR' => 'E02006370',
        '1NS' => 'E02006369',
        '1NT' => 'E02006369',
        '1NU' => 'E02006369',
        '1NW' => 'E02006370',
        '1NX' => 'E02006369',
        '1NY' => 'E02006369',
        '1NZ' => 'E02006369',
        '1PA' => 'E02006371',
        '1PB' => 'E02006370',
        '1PD' => 'E02006370',
        '1PE' => 'E02006370',
        '1PF' => 'E02006370',
        '1PG' => 'E02006370',
        '1PH' => 'E02006370',
        '1PJ' => 'E02006370',
        '1PL' => 'E02006370',
        '1PN' => 'E02006370',
        '1PP' => 'E02006370',
        '1PQ' => 'E02006370',
        '1PR' => 'E02006370',
        '1PS' => 'E02006370',
        '1PT' => 'E02006370',
        '1PU' => 'E02006370',
        '1PW' => 'E02006370',
        '1PX' => 'E02006370',
        '1PY' => 'E02006371',
        '1PZ' => 'E02006370',
        '1QA' => 'E02006370',
        '1QB' => 'E02006371',
        '1QD' => 'E02006371',
        '1QE' => 'E02006370',
        '1QF' => 'E02006370',
        '1QG' => 'E02006371',
        '1QH' => 'E02006371',
        '1QJ' => 'E02006371',
        '1QL' => 'E02006371',
        '1QN' => 'E02006370',
        '1QP' => 'E02006370',
        '1QQ' => 'E02006370',
        '1QR' => 'E02006371',
        '1QS' => 'E02006371',
        '1QT' => 'E02006371',
        '1QU' => 'E02006371',
        '1QW' => 'E02006370',
        '1QX' => 'E02006371',
        '1QY' => 'E02006370',
        '1QZ' => 'E02006370',
        '1RB' => 'E02006370',
        '1RD' => 'E02006371',
        '1RE' => 'E02006370',
        '1RF' => 'E02006370',
        '1RG' => 'E02006370',
        '1RH' => 'E02006370',
        '1RJ' => 'E02006370',
        '1RL' => 'E02006370',
        '1RN' => 'E02006370',
        '1RP' => 'E02006370',
        '1RQ' => 'E02006370',
        '1RR' => 'E02006370',
        '1RS' => 'E02006370',
        '1RT' => 'E02006370',
        '1RU' => 'E02006370',
        '1RW' => 'E02006370',
        '1RX' => 'E02006370',
        '1RY' => 'E02006370',
        '1RZ' => 'E02006370',
        '1SA' => 'E02006370',
        '1SB' => 'E02006370',
        '1SD' => 'E02006371',
        '1SE' => 'E02006370',
        '1SF' => 'E02006371',
        '1SG' => 'E02006371',
        '1SH' => 'E02006370',
        '1SJ' => 'E02006370',
        '1SL' => 'E02006370',
        '1SN' => 'E02006371',
        '1SP' => 'E02006370',
        '1SQ' => 'E02006370',
        '1SR' => 'E02006370',
        '1SS' => 'E02006370',
        '1ST' => 'E02006370',
        '1SU' => 'E02006370',
        '1SW' => 'E02006371',
        '1SX' => 'E02006370',
        '1SY' => 'E02006371',
        '1SZ' => 'E02006370',
        '1TA' => 'E02006370',
        '1TB' => 'E02006370',
        '1TD' => 'E02006370',
        '1TE' => 'E02006370',
        '1TF' => 'E02006370',
        '1TG' => 'E02006370',
        '1TH' => 'E02006370',
        '1TJ' => 'E02006371',
        '1TL' => 'E02006370',
        '1TN' => 'E02006370',
        '1TP' => 'E02006370',
        '1TQ' => 'E02006370',
        '1TR' => 'E02006370',
        '1TS' => 'E02006370',
        '1TZ' => 'E02006370',
        '1UA' => 'E02006370',
        '1UB' => 'E02006370',
        '1UD' => 'E02006370',
        '1UE' => 'E02006370',
        '1UG' => 'E02006370',
        '1UJ' => 'E02006371',
        '1UL' => 'E02006370',
        '1UN' => 'E02006370',
        '1UP' => 'E02006370',
        '1UR' => 'E02006371',
        '1UT' => 'E02006370',
        '1UU' => 'E02006370',
        '1UW' => 'E02006370',
        '1UX' => 'E02006370',
        '1UY' => 'E02006370',
        '1WA' => 'E02006370',
        '1WB' => 'E02006370',
        '1WD' => 'E02006370',
        '1WE' => 'E02006370',
        '1WG' => 'E02006370',
        '1WT' => 'E02006370',
        '1WX' => 'E02006370',
        '1WY' => 'E02006370',
        '1WZ' => 'E02006370',
        '1XA' => 'E02006370',
        '1XB' => 'E02006370',
        '1XD' => 'E02006370',
        '1XE' => 'E02006371',
        '1XF' => 'E02006370',
        '1XG' => 'E02006370',
        '1XH' => 'E02006370',
        '1XT' => 'E02006370',
        '1YA' => 'E02006370',
        '1YB' => 'E02006370',
        '1YD' => 'E02006370',
        '1YE' => 'E02006370',
        '1YF' => 'E02006370',
        '1YG' => 'E02006370',
        '1YH' => 'E02006370',
        '1YJ' => 'E02006370',
        '1YL' => 'E02006370',
        '1YN' => 'E02006370',
        '1YP' => 'E02006370',
        '1YQ' => 'E02006370',
        '1YR' => 'E02006370',
        '1YS' => 'E02006370',
        '1YT' => 'E02006370',
        '1YU' => 'E02006370',
        '1YW' => 'E02006370',
        '1YX' => 'E02006370',
        '1YY' => 'E02006370',
        '1YZ' => 'E02006370',
        '1ZS' => 'E02006371',
        '2AA' => 'E02006371',
        '2AB' => 'E02006371',
        '2AD' => 'E02006371',
        '2AE' => 'E02006371',
        '2AF' => 'E02006371',
        '2AG' => 'E02006371',
        '2AH' => 'E02006371',
        '2AJ' => 'E02006371',
        '2AL' => 'E02006371',
        '2AN' => 'E02006371',
        '2AP' => 'E02006371',
        '2AQ' => 'E02006371',
        '2AR' => 'E02006371',
        '2AS' => 'E02006371',
        '2AT' => 'E02006371',
        '2AU' => 'E02006371',
        '2AW' => 'E02006371',
        '2AX' => 'E02006371',
        '2AY' => 'E02006371',
        '2AZ' => 'E02006371',
        '2BA' => 'E02006371',
        '2BB' => 'E02006371',
        '2BD' => 'E02006372',
        '2BE' => 'E02006371',
        '2BF' => 'E02006371',
        '2BG' => 'E02006371',
        '2BH' => 'E02006371',
        '2BJ' => 'E02006371',
        '2BL' => 'E02006371',
        '2BN' => 'E02006371',
        '2BP' => 'E02006371',
        '2BQ' => 'E02006371',
        '2BS' => 'E02006371',
        '2BT' => 'E02006371',
        '2BU' => 'E02006371',
        '2BW' => 'E02006371',
        '2BX' => 'E02006371',
        '2BY' => 'E02006371',
        '2BZ' => 'E02006371',
        '2DA' => 'E02006371',
        '2DB' => 'E02006371',
        '2DD' => 'E02006371',
        '2DE' => 'E02006371',
        '2DF' => 'E02006371',
        '2DG' => 'E02006371',
        '2DH' => 'E02006371',
        '2DJ' => 'E02006371',
        '2DL' => 'E02006371',
        '2DN' => 'E02006371',
        '2DP' => 'E02006371',
        '2DQ' => 'E02006371',
        '2DR' => 'E02006371',
        '2DS' => 'E02006371',
        '2DT' => 'E02006372',
        '2DU' => 'E02006371',
        '2DW' => 'E02006371',
        '2DX' => 'E02006371',
        '2DY' => 'E02006371',
        '2DZ' => 'E02006371',
        '2EA' => 'E02006371',
        '2EB' => 'E02006371',
        '2ED' => 'E02006371',
        '2EE' => 'E02006371',
        '2EF' => 'E02006371',
        '2EG' => 'E02006371',
        '2EH' => 'E02006371',
        '2EJ' => 'E02006371',
        '2EL' => 'E02006371',
        '2EN' => 'E02006371',
        '2EP' => 'E02006371',
        '2EQ' => 'E02006371',
        '2ER' => 'E02006371',
        '2ES' => 'E02006371',
        '2ET' => 'E02006371',
        '2EU' => 'E02006371',
        '2EW' => 'E02006371',
        '2EX' => 'E02006371',
        '2EZ' => 'E02006371',
        '2FA' => 'E02006371',
        '2FB' => 'E02006370',
        '2FD' => 'E02006370',
        '2FE' => 'E02006371',
        '2FF' => 'E02006371',
        '2FG' => 'E02006370',
        '2FH' => 'E02006371',
        '2FJ' => 'E02006371',
        '2FL' => 'E02006371',
        '2FN' => 'E02006370',
        '2FP' => 'E02006371',
        '2FQ' => 'E02006371',
        '2FR' => 'E02006371',
        '2FS' => 'E02006371',
        '2FT' => 'E02006371',
        '2FU' => 'E02006372',
        '2FW' => 'E02006371',
        '2FX' => 'E02006371',
        '2FY' => 'E02006371',
        '2GL' => 'E02006370',
        '2HA' => 'E02006371',
        '2HB' => 'E02006371',
        '2HD' => 'E02006371',
        '2HE' => 'E02006371',
        '2HF' => 'E02006371',
        '2HH' => 'E02006372',
        '2HJ' => 'E02006371',
        '2HL' => 'E02006371',
        '2HN' => 'E02006371',
        '2HP' => 'E02006371',
        '2HQ' => 'E02006371',
        '2HR' => 'E02006371',
        '2HS' => 'E02006371',
        '2HT' => 'E02006371',
        '2HU' => 'E02006371',
        '2HX' => 'E02006371',
        '2HY' => 'E02006371',
        '2HZ' => 'E02006371',
        '2JA' => 'E02006371',
        '2JB' => 'E02006371',
        '2JD' => 'E02006371',
        '2JE' => 'E02006371',
        '2JF' => 'E02006371',
        '2JG' => 'E02006371',
        '2JH' => 'E02006371',
        '2JJ' => 'E02006371',
        '2JL' => 'E02006371',
        '2JN' => 'E02006371',
        '2JP' => 'E02006371',
        '2JQ' => 'E02006371',
        '2JR' => 'E02006371',
        '2JS' => 'E02006371',
        '2JT' => 'E02006371',
        '2JU' => 'E02006371',
        '2JW' => 'E02006371',
        '2JX' => 'E02006371',
        '2JY' => 'E02006371',
        '2JZ' => 'E02006371',
        '2LA' => 'E02006371',
        '2LB' => 'E02006371',
        '2LD' => 'E02006371',
        '2LE' => 'E02006371',
        '2LF' => 'E02006371',
        '2LG' => 'E02006371',
        '2LH' => 'E02006372',
        '2LJ' => 'E02006372',
        '2LL' => 'E02006372',
        '2LN' => 'E02006372',
        '2LP' => 'E02006372',
        '2LR' => 'E02006372',
        '2LS' => 'E02006372',
        '2LT' => 'E02006372',
        '2LU' => 'E02006372',
        '2LW' => 'E02006372',
        '2LX' => 'E02006372',
        '2LY' => 'E02006372',
        '2LZ' => 'E02006372',
        '2NA' => 'E02006372',
        '2NB' => 'E02006372',
        '2ND' => 'E02006372',
        '2NE' => 'E02006372',
        '2NF' => 'E02006372',
        '2NG' => 'E02006372',
        '2NH' => 'E02006372',
        '2NJ' => 'E02006372',
        '2NL' => 'E02006372',
        '2NN' => 'E02006372',
        '2NP' => 'E02006372',
        '2NQ' => 'E02006372',
        '2NR' => 'E02006372',
        '2NS' => 'E02006372',
        '2NT' => 'E02006372',
        '2NU' => 'E02006372',
        '2NW' => 'E02006372',
        '2NX' => 'E02006372',
        '2NY' => 'E02006372',
        '2NZ' => 'E02006372',
        '2PA' => 'E02006372',
        '2PB' => 'E02006372',
        '2PH' => 'E02006371',
        '2PJ' => 'E02006372',
        '2PL' => 'E02006372',
        '2PN' => 'E02006372',
        '2PP' => 'E02006372',
        '2PQ' => 'E02006372',
        '2PR' => 'E02006372',
        '2PS' => 'E02006372',
        '2PT' => 'E02006372',
        '2PU' => 'E02006372',
        '2PW' => 'E02006372',
        '2PX' => 'E02006372',
        '2PY' => 'E02006372',
        '2PZ' => 'E02006372',
        '2QA' => 'E02006372',
        '2QB' => 'E02006372',
        '2QD' => 'E02006372',
        '2QE' => 'E02006372',
        '2QF' => 'E02006372',
        '2QG' => 'E02006372',
        '2QJ' => 'E02006371',
        '2QN' => 'E02006371',
        '2QQ' => 'E02006372',
        '2QR' => 'E02006371',
        '2QT' => 'E02006371',
        '2QU' => 'E02006371',
        '2QW' => 'E02006371',
        '2QX' => 'E02006371',
        '2RA' => 'E02006371',
        '2TU' => 'E02006371',
        '2WA' => 'E02006370',
        '2WB' => 'E02006370',
        '2WD' => 'E02006370',
        '2WE' => 'E02006370',
        '2WF' => 'E02006370',
        '2WG' => 'E02006370',
        '2WH' => 'E02006370',
        '2WJ' => 'E02006370',
        '2WN' => 'E02006370',
        '2WP' => 'E02006371',
        '2WS' => 'E02006370',
        '2WT' => 'E02006370',
        '2WU' => 'E02006370',
        '2WW' => 'E02006371',
        '2WX' => 'E02006370',
        '2WY' => 'E02006370',
        '2WZ' => 'E02006370',
        '2XA' => 'E02006370',
        '2XF' => 'E02006370',
        '2XP' => 'E02006370',
        '2XQ' => 'E02006370',
        '2YA' => 'E02006370',
        '2YB' => 'E02006371',
        '2YD' => 'E02006371',
        '2YE' => 'E02006371',
        '2YF' => 'E02006370',
        '2YG' => 'E02006370',
        '2YH' => 'E02006370',
        '2YJ' => 'E02006370',
        '2YL' => 'E02006370',
        '2YN' => 'E02006370',
        '2YP' => 'E02006370',
        '2YQ' => 'E02006370',
        '2YR' => 'E02006370',
        '2YS' => 'E02006370',
        '2YT' => 'E02006370',
        '2YU' => 'E02006370',
        '2YW' => 'E02006370',
        '2YX' => 'E02006370',
        '2YY' => 'E02006371',
        '2YZ' => 'E02006370',
        '2ZP' => 'E02006370',
        '3AA' => 'E02006371',
        '3AB' => 'E02006371',
        '3AD' => 'E02006371',
        '3AE' => 'E02006371',
        '3AF' => 'E02006371',
        '3AG' => 'E02006371',
        '3AH' => 'E02006371',
        '3AJ' => 'E02006371',
        '3AL' => 'E02006372',
        '3AN' => 'E02006371',
        '3AP' => 'E02006371',
        '3AQ' => 'E02006373',
        '3AR' => 'E02006371',
        '3AS' => 'E02006371',
        '3AT' => 'E02006371',
        '3AU' => 'E02006371',
        '3AW' => 'E02006371',
        '3AX' => 'E02006371',
        '3AY' => 'E02006371',
        '3AZ' => 'E02006371',
        '3BA' => 'E02006371',
        '3BB' => 'E02006371',
        '3BD' => 'E02006371',
        '3BE' => 'E02006371',
        '3BF' => 'E02006371',
        '3BG' => 'E02006371',
        '3BH' => 'E02006371',
        '3BJ' => 'E02006371',
        '3BL' => 'E02006371',
        '3BN' => 'E02006371',
        '3BP' => 'E02006371',
        '3BQ' => 'E02006371',
        '3BS' => 'E02006371',
        '3BT' => 'E02006371',
        '3BU' => 'E02006371',
        '3BW' => 'E02006371',
        '3BX' => 'E02006371',
        '3BY' => 'E02006371',
        '3BZ' => 'E02006371',
        '3DA' => 'E02006371',
        '3DB' => 'E02006371',
        '3DD' => 'E02006371',
        '3DE' => 'E02006371',
        '3DF' => 'E02006371',
        '3DG' => 'E02006371',
        '3DH' => 'E02006371',
        '3DJ' => 'E02006371',
        '3DL' => 'E02006371',
        '3DN' => 'E02006371',
        '3DP' => 'E02006370',
        '3DQ' => 'E02006371',
        '3DR' => 'E02006370',
        '3DS' => 'E02006371',
        '3DT' => 'E02006371',
        '3DU' => 'E02006370',
        '3DW' => 'E02006371',
        '3DX' => 'E02006370',
        '3DY' => 'E02006371',
        '3DZ' => 'E02006370',
        '3EA' => 'E02006370',
        '3EB' => 'E02006371',
        '3ED' => 'E02006370',
        '3EE' => 'E02006370',
        '3EF' => 'E02006371',
        '3EG' => 'E02006370',
        '3EH' => 'E02006371',
        '3EJ' => 'E02006371',
        '3EL' => 'E02006371',
        '3EN' => 'E02006371',
        '3EP' => 'E02006371',
        '3EQ' => 'E02006370',
        '3ER' => 'E02006371',
        '3ES' => 'E02006371',
        '3ET' => 'E02006371',
        '3EU' => 'E02006371',
        '3EW' => 'E02006371',
        '3EX' => 'E02006371',
        '3EY' => 'E02006371',
        '3EZ' => 'E02006370',
        '3FA' => 'E02006371',
        '3FB' => 'E02006371',
        '3FD' => 'E02006370',
        '3FE' => 'E02006371',
        '3FF' => 'E02006371',
        '3FG' => 'E02006371',
        '3FH' => 'E02006370',
        '3FJ' => 'E02006370',
        '3FL' => 'E02006371',
        '3FN' => 'E02006370',
        '3FP' => 'E02006370',
        '3FQ' => 'E02006370',
        '3FR' => 'E02006371',
        '3FS' => 'E02006371',
        '3FT' => 'E02006370',
        '3FU' => 'E02006370',
        '3FW' => 'E02006371',
        '3FY' => 'E02006371',
        '3FZ' => 'E02006371',
        '3GA' => 'E02006370',
        '3GB' => 'E02006373',
        '3GD' => 'E02006370',
        '3GE' => 'E02006370',
        '3GF' => 'E02006373',
        '3GG' => 'E02006373',
        '3GH' => 'E02006371',
        '3GJ' => 'E02006373',
        '3HA' => 'E02006371',
        '3HB' => 'E02006371',
        '3HD' => 'E02006370',
        '3HE' => 'E02006371',
        '3HF' => 'E02006371',
        '3HG' => 'E02006371',
        '3HH' => 'E02006371',
        '3HJ' => 'E02006371',
        '3HL' => 'E02006371',
        '3HN' => 'E02006371',
        '3HP' => 'E02006371',
        '3HQ' => 'E02006371',
        '3HR' => 'E02006371',
        '3HS' => 'E02006371',
        '3HT' => 'E02006371',
        '3HU' => 'E02006371',
        '3HW' => 'E02006371',
        '3HX' => 'E02006371',
        '3HY' => 'E02006371',
        '3HZ' => 'E02006371',
        '3JA' => 'E02006371',
        '3JB' => 'E02006371',
        '3JD' => 'E02006371',
        '3JE' => 'E02006373',
        '3JG' => 'E02006373',
        '3JH' => 'E02006373',
        '3JJ' => 'E02006373',
        '3JL' => 'E02006373',
        '3JN' => 'E02006373',
        '3JQ' => 'E02006373',
        '3JS' => 'E02006371',
        '3JT' => 'E02006371',
        '3JU' => 'E02006373',
        '3JW' => 'E02006373',
        '3JX' => 'E02006373',
        '3JY' => 'E02006373',
        '3JZ' => 'E02006373',
        '3LA' => 'E02006373',
        '3LB' => 'E02006373',
        '3LD' => 'E02006373',
        '3LE' => 'E02006373',
        '3LF' => 'E02006373',
        '3LG' => 'E02006373',
        '3LH' => 'E02006373',
        '3LJ' => 'E02006373',
        '3LL' => 'E02006373',
        '3LN' => 'E02006373',
        '3LP' => 'E02006373',
        '3LQ' => 'E02006373',
        '3LR' => 'E02006373',
        '3LS' => 'E02006373',
        '3LT' => 'E02006373',
        '3LU' => 'E02006373',
        '3LW' => 'E02006373',
        '3LX' => 'E02006373',
        '3LY' => 'E02006370',
        '3LZ' => 'E02006370',
        '3NA' => 'E02006373',
        '3NB' => 'E02006370',
        '3ND' => 'E02006373',
        '3NE' => 'E02006373',
        '3NG' => 'E02006373',
        '3NH' => 'E02006373',
        '3NJ' => 'E02006373',
        '3NL' => 'E02006373',
        '3NN' => 'E02006373',
        '3NP' => 'E02006373',
        '3NQ' => 'E02006373',
        '3NR' => 'E02006373',
        '3NS' => 'E02006373',
        '3NT' => 'E02006373',
        '3NU' => 'E02006373',
        '3NW' => 'E02006373',
        '3NX' => 'E02006373',
        '3NY' => 'E02006373',
        '3NZ' => 'E02006373',
        '3PA' => 'E02006373',
        '3PB' => 'E02006373',
        '3PD' => 'E02006373',
        '3PE' => 'E02006373',
        '3PF' => 'E02006373',
        '3PG' => 'E02006373',
        '3PH' => 'E02006373',
        '3PJ' => 'E02006373',
        '3PL' => 'E02006373',
        '3PN' => 'E02006373',
        '3PP' => 'E02006373',
        '3PQ' => 'E02006373',
        '3PR' => 'E02006373',
        '3PS' => 'E02006373',
        '3PT' => 'E02006373',
        '3PU' => 'E02006373',
        '3PW' => 'E02006373',
        '3PX' => 'E02006373',
        '3PZ' => 'E02006373',
        '3QA' => 'E02006373',
        '3QB' => 'E02006373',
        '3QD' => 'E02006373',
        '3QE' => 'E02006373',
        '3QF' => 'E02006373',
        '3QG' => 'E02006373',
        '3QH' => 'E02006373',
        '3QJ' => 'E02006373',
        '3QL' => 'E02006373',
        '3QN' => 'E02006373',
        '3QP' => 'E02006373',
        '3QQ' => 'E02006373',
        '3QR' => 'E02006373',
        '3QS' => 'E02006373',
        '3QW' => 'E02006373',
        '3QY' => 'E02006371',
        '3QZ' => 'E02006371',
        '3RA' => 'E02006370',
        '3RB' => 'E02006373',
        '3RD' => 'E02006373',
        '3RH' => 'E02006370',
        '3RJ' => 'E02006371',
        '3RL' => 'E02006373',
        '3RN' => 'E02006373',
        '3RP' => 'E02006371',
        '3RR' => 'E02006371',
        '3RS' => 'E02006373',
        '3RW' => 'E02006373',
        '3SA' => 'E02006371',
        '3SB' => 'E02006371',
        '3WA' => 'E02006370',
        '3WB' => 'E02006370',
        '3WD' => 'E02006370',
        '3WE' => 'E02006370',
        '3WF' => 'E02006370',
        '3WG' => 'E02006371',
        '3WH' => 'E02006370',
        '3WJ' => 'E02006370',
        '3WL' => 'E02006370',
        '3WQ' => 'E02006370',
        '3WU' => 'E02006370',
        '3WW' => 'E02006370',
        '3WX' => 'E02006370',
        '3WY' => 'E02006370',
        '3WZ' => 'E02006370',
        '3XQ' => 'E02006370',
        '3XT' => 'E02006370',
        '3XZ' => 'E02006370',
        '3YA' => 'E02006370',
        '3YB' => 'E02006370',
        '3YD' => 'E02006370',
        '3YE' => 'E02006370',
        '3YF' => 'E02006370',
        '3YG' => 'E02006370',
        '3YH' => 'E02006370',
        '3YJ' => 'E02006371',
        '3YL' => 'E02006371',
        '3YN' => 'E02006370',
        '3YP' => 'E02006371',
        '3YQ' => 'E02006370',
        '3YR' => 'E02006370',
        '3YS' => 'E02006370',
        '3YT' => 'E02006371',
        '3YU' => 'E02006371',
        '3YW' => 'E02006370',
        '3YX' => 'E02006371',
        '3YY' => 'E02006371',
        '3YZ' => 'E02006371',
        '9AA' => 'E02006370',
        '9AB' => 'E02006370',
        '9AD' => 'E02006370',
        '9AE' => 'E02006370',
        '9AF' => 'E02006370',
        '9AG' => 'E02006370',
        '9AH' => 'E02006370',
        '9AJ' => 'E02006370',
        '9AL' => 'E02006370',
        '9AN' => 'E02006370',
        '9AP' => 'E02006370',
        '9AQ' => 'E02006370',
        '9AR' => 'E02006370',
        '9AS' => 'E02006370',
        '9AT' => 'E02006370',
        '9AU' => 'E02006370',
        '9AW' => 'E02006370',
        '9AX' => 'E02006370',
        '9AY' => 'E02006370',
        '9AZ' => 'E02006370',
        '9BA' => 'E02006370',
        '9BB' => 'E02006370',
        '9BD' => 'E02006370',
        '9BE' => 'E02006370',
        '9BF' => 'E02006370',
        '9BG' => 'E02006370',
        '9BH' => 'E02006370',
        '9BJ' => 'E02006370',
        '9BL' => 'E02006370',
        '9BN' => 'E02006370',
        '9BP' => 'E02006370',
        '9BQ' => 'E02006370',
        '9BR' => 'E02006370',
        '9BS' => 'E02006370',
        '9BT' => 'E02006370',
        '9BU' => 'E02006370',
        '9BW' => 'E02006370',
        '9BX' => 'E02006370',
        '9BY' => 'E02006370',
        '9BZ' => 'E02006370',
        '9DA' => 'E02006370',
        '9DB' => 'E02006370',
        '9DD' => 'E02006370',
        '9DE' => 'E02006370',
        '9DF' => 'E02006370',
        '9DG' => 'E02006370',
        '9DH' => 'E02006370',
        '9DJ' => 'E02006370',
        '9DL' => 'E02006370',
        '9DN' => 'E02006370',
        '9DP' => 'E02006370',
        '9DQ' => 'E02006370',
        '9DR' => 'E02006370',
        '9DS' => 'E02006370',
        '9DT' => 'E02006370',
        '9DU' => 'E02006370',
        '9DW' => 'E02006370',
        '9DX' => 'E02006370',
        '9DY' => 'E02006370',
        '9DZ' => 'E02006370',
        '9EA' => 'E02006370',
        '9EB' => 'E02006370',
        '9ED' => 'E02006370',
        '9EE' => 'E02006370',
        '9EF' => 'E02006370',
        '9EG' => 'E02006370',
        '9EH' => 'E02006370',
        '9EJ' => 'E02006370',
        '9EL' => 'E02006370',
        '9EN' => 'E02006370',
        '9EP' => 'E02006370',
        '9EQ' => 'E02006370',
        '9ER' => 'E02006370',
        '9ES' => 'E02006370',
        '9ET' => 'E02006370',
        '9EU' => 'E02006370',
        '9EW' => 'E02006370',
        '9EX' => 'E02006370',
        '9EY' => 'E02006370',
        '9EZ' => 'E02006370',
        '9FA' => 'E02006370',
        '9FB' => 'E02006370',
        '9FD' => 'E02006370',
        '9FE' => 'E02006370',
        '9FF' => 'E02006370',
        '9FG' => 'E02006370',
        '9FH' => 'E02006370',
        '9FJ' => 'E02006370',
        '9FL' => 'E02006370',
        '9FN' => 'E02006370',
        '9FP' => 'E02006370',
        '9FQ' => 'E02006370',
        '9FR' => 'E02006370',
        '9FS' => 'E02006370',
        '9FT' => 'E02006370',
        '9FU' => 'E02006370',
        '9FW' => 'E02006370',
        '9FX' => 'E02006370',
        '9FY' => 'E02006370',
        '9FZ' => 'E02006370',
        '9GA' => 'E02006370',
        '9GB' => 'E02006370',
        '9GD' => 'E02006370',
        '9GE' => 'E02006370',
        '9GF' => 'E02006370',
        '9GG' => 'E02006370',
        '9GH' => 'E02006370',
        '9GJ' => 'E02006370',
        '9GL' => 'E02006370',
        '9GN' => 'E02006370',
        '9GP' => 'E02006370',
        '9GQ' => 'E02006370',
        '9GR' => 'E02006370',
        '9GS' => 'E02006370',
        '9GT' => 'E02006370',
        '9GU' => 'E02006370',
        '9GW' => 'E02006370',
        '9GX' => 'E02006370',
        '9GY' => 'E02006370',
        '9GZ' => 'E02006370',
        '9HA' => 'E02006370',
        '9HB' => 'E02006370',
        '9HD' => 'E02006370',
        '9HE' => 'E02006370',
        '9HF' => 'E02006370',
        '9HG' => 'E02006370',
        '9HH' => 'E02006370',
        '9HJ' => 'E02006370',
        '9HL' => 'E02006370',
        '9HN' => 'E02006370',
        '9HP' => 'E02006370',
        '9HQ' => 'E02006370',
        '9HR' => 'E02006370',
        '9HS' => 'E02006370',
        '9HT' => 'E02006370',
        '9HU' => 'E02006370',
        '9HW' => 'E02006370',
        '9HX' => 'E02006370',
        '9HY' => 'E02006370',
        '9HZ' => 'E02006370',
        '9JA' => 'E02006370',
        '9JB' => 'E02006370',
        '9JD' => 'E02006370',
        '9JE' => 'E02006370',
        '9JF' => 'E02006370',
        '9JG' => 'E02006370',
        '9JH' => 'E02006370',
        '9JJ' => 'E02006370',
        '9JL' => 'E02006370',
        '9JN' => 'E02006370',
        '9JP' => 'E02006370',
        '9JQ' => 'E02006370',
        '9JR' => 'E02006370',
        '9JS' => 'E02006370',
        '9JT' => 'E02006370',
        '9JU' => 'E02006370',
        '9JW' => 'E02006370',
        '9JX' => 'E02006370',
        '9JZ' => 'E02006370',
        '9LA' => 'E02006370',
        '9LB' => 'E02006370',
        '9LD' => 'E02006370',
        '9LE' => 'E02006370',
        '9LF' => 'E02006370',
        '9LG' => 'E02006370',
        '9LH' => 'E02006370',
        '9LJ' => 'E02006370',
        '9LL' => 'E02006370',
        '9LN' => 'E02006370',
        '9LP' => 'E02006370',
        '9LQ' => 'E02006370',
        '9LR' => 'E02006370',
        '9LS' => 'E02006370',
        '9LT' => 'E02006370',
        '9LW' => 'E02006370',
        '9SA' => 'E02006370',
        '9SB' => 'E02006370',
        '9SD' => 'E02006370',
        '9SE' => 'E02006370',
        '9SF' => 'E02006370',
        '9SG' => 'E02006370',
        '9SH' => 'E02006370',
        '9SJ' => 'E02006370',
        '9SL' => 'E02006370',
        '9SN' => 'E02006370',
        '9SP' => 'E02006370',
        '9SQ' => 'E02006370',
        '9SR' => 'E02006370',
        '9SS' => 'E02006370',
        '9ST' => 'E02006370',
        '9SU' => 'E02006370',
        '9SW' => 'E02006370',
        '9SX' => 'E02006370',
        '9SY' => 'E02006370',
        '9SZ' => 'E02006370',
        '9TA' => 'E02006370',
        '9TB' => 'E02006370',
        '9TD' => 'E02006370',
        '9TE' => 'E02006370',
        '9TF' => 'E02006370',
        '9TG' => 'E02006370',
        '9TH' => 'E02006370',
        '9TJ' => 'E02006370',
        '9TL' => 'E02006370',
        '9TN' => 'E02006370',
        '9TP' => 'E02006370',
        '9TQ' => 'E02006370',
        '9TR' => 'E02006370',
        '9TS' => 'E02006370',
        '9TT' => 'E02006370',
        '9TU' => 'E02006370',
        '9TW' => 'E02006370',
        '9TX' => 'E02006370',
        '9TY' => 'E02006370',
        '9TZ' => 'E02006370',
        '9UA' => 'E02006370',
        '9UB' => 'E02006370',
        '9UD' => 'E02006370',
        '9UE' => 'E02006370',
        '9UF' => 'E02006370',
        '9UG' => 'E02006370',
        '9UH' => 'E02006370',
        '9ZZ' => 'E02006370',
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
