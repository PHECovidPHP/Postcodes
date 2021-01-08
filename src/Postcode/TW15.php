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
final class TW15
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02006407',
        '1AB' => 'E02006407',
        '1AD' => 'E02006407',
        '1AE' => 'E02006407',
        '1AF' => 'E02006407',
        '1AG' => 'E02006407',
        '1AH' => 'E02006407',
        '1AJ' => 'E02006407',
        '1AL' => 'E02006407',
        '1AN' => 'E02006408',
        '1AP' => 'E02006407',
        '1AQ' => 'E02006407',
        '1AR' => 'E02006407',
        '1AS' => 'E02006407',
        '1AT' => 'E02000552',
        '1AU' => 'E02000552',
        '1AW' => 'E02006407',
        '1AX' => 'E02000552',
        '1AY' => 'E02006408',
        '1AZ' => 'E02000552',
        '1BA' => 'E02000552',
        '1BB' => 'E02006407',
        '1BD' => 'E02006407',
        '1BE' => 'E02006407',
        '1BF' => 'E02000552',
        '1BG' => 'E02006407',
        '1BH' => 'E02006407',
        '1BJ' => 'E02006408',
        '1BL' => 'E02000552',
        '1BN' => 'E02006408',
        '1BP' => 'E02006407',
        '1BQ' => 'E02006407',
        '1BS' => 'E02006407',
        '1BT' => 'E02006407',
        '1BU' => 'E02006407',
        '1BW' => 'E02006408',
        '1BX' => 'E02006407',
        '1BY' => 'E02006407',
        '1BZ' => 'E02006407',
        '1DA' => 'E02006408',
        '1DB' => 'E02006407',
        '1DD' => 'E02006407',
        '1DE' => 'E02006408',
        '1DF' => 'E02006407',
        '1DG' => 'E02006407',
        '1DH' => 'E02006407',
        '1DJ' => 'E02006407',
        '1DL' => 'E02006407',
        '1DN' => 'E02006407',
        '1DP' => 'E02006407',
        '1DQ' => 'E02006407',
        '1DR' => 'E02006407',
        '1DS' => 'E02006407',
        '1DT' => 'E02006407',
        '1DU' => 'E02006407',
        '1DW' => 'E02006407',
        '1DX' => 'E02006407',
        '1DY' => 'E02006407',
        '1DZ' => 'E02006407',
        '1EA' => 'E02006407',
        '1EB' => 'E02006408',
        '1ED' => 'E02006408',
        '1EE' => 'E02006408',
        '1EF' => 'E02006408',
        '1EG' => 'E02006407',
        '1EH' => 'E02006408',
        '1EJ' => 'E02006408',
        '1EL' => 'E02006407',
        '1EN' => 'E02006407',
        '1EP' => 'E02006407',
        '1EQ' => 'E02006407',
        '1ER' => 'E02006407',
        '1ES' => 'E02006407',
        '1ET' => 'E02006407',
        '1EU' => 'E02006407',
        '1EW' => 'E02006407',
        '1EX' => 'E02006407',
        '1EY' => 'E02006407',
        '1EZ' => 'E02006407',
        '1FA' => 'E02006408',
        '1FB' => 'E02006408',
        '1FD' => 'E02006408',
        '1FE' => 'E02006408',
        '1FF' => 'E02006408',
        '1FG' => 'E02006408',
        '1FH' => 'E02006408',
        '1FJ' => 'E02006408',
        '1FL' => 'E02006407',
        '1FN' => 'E02006408',
        '1FP' => 'E02006408',
        '1FQ' => 'E02006408',
        '1FR' => 'E02006408',
        '1FS' => 'E02006408',
        '1FT' => 'E02006408',
        '1FU' => 'E02006408',
        '1FW' => 'E02006408',
        '1FX' => 'E02006408',
        '1FY' => 'E02006408',
        '1FZ' => 'E02006407',
        '1GA' => 'E02006407',
        '1GB' => 'E02006408',
        '1GD' => 'E02006408',
        '1GE' => 'E02006408',
        '1GF' => 'E02006408',
        '1GG' => 'E02006408',
        '1GH' => 'E02006408',
        '1GJ' => 'E02006408',
        '1GL' => 'E02006408',
        '1GN' => 'E02006408',
        '1GP' => 'E02006408',
        '1GQ' => 'E02006408',
        '1GR' => 'E02006408',
        '1GS' => 'E02006408',
        '1GT' => 'E02006408',
        '1GU' => 'E02006408',
        '1GW' => 'E02006408',
        '1GX' => 'E02006408',
        '1HA' => 'E02006407',
        '1HB' => 'E02006407',
        '1HD' => 'E02006407',
        '1HE' => 'E02006407',
        '1HF' => 'E02006407',
        '1HG' => 'E02006407',
        '1HH' => 'E02006407',
        '1HJ' => 'E02006407',
        '1HL' => 'E02006407',
        '1HN' => 'E02006407',
        '1HP' => 'E02006408',
        '1HQ' => 'E02006408',
        '1HS' => 'E02006408',
        '1HT' => 'E02006408',
        '1HW' => 'E02006408',
        '1HX' => 'E02000552',
        '1JB' => 'E02006408',
        '1JD' => 'E02006408',
        '1JE' => 'E02006408',
        '1JF' => 'E02006408',
        '1JG' => 'E02006408',
        '1JH' => 'E02006408',
        '1JJ' => 'E02006408',
        '1JL' => 'E02006408',
        '1JN' => 'E02006408',
        '1JP' => 'E02006408',
        '1JQ' => 'E02006408',
        '1JR' => 'E02006408',
        '1JW' => 'E02006408',
        '1JY' => 'E02006408',
        '1JZ' => 'E02006408',
        '1LA' => 'E02006407',
        '1LB' => 'E02006407',
        '1LD' => 'E02006407',
        '1LE' => 'E02006407',
        '1LF' => 'E02006407',
        '1LG' => 'E02006407',
        '1LH' => 'E02006407',
        '1LJ' => 'E02006408',
        '1LL' => 'E02006408',
        '1LN' => 'E02006408',
        '1LP' => 'E02006408',
        '1LQ' => 'E02006407',
        '1LR' => 'E02006408',
        '1LS' => 'E02006408',
        '1LT' => 'E02006408',
        '1LU' => 'E02006408',
        '1LW' => 'E02006408',
        '1LX' => 'E02006408',
        '1LY' => 'E02006408',
        '1LZ' => 'E02006408',
        '1NA' => 'E02006408',
        '1NB' => 'E02006408',
        '1ND' => 'E02006408',
        '1NE' => 'E02006408',
        '1NF' => 'E02006408',
        '1NG' => 'E02006408',
        '1NH' => 'E02006408',
        '1NJ' => 'E02006408',
        '1NL' => 'E02006408',
        '1NN' => 'E02006408',
        '1NP' => 'E02006408',
        '1NQ' => 'E02006408',
        '1NR' => 'E02006408',
        '1NS' => 'E02006408',
        '1NT' => 'E02006408',
        '1NU' => 'E02006408',
        '1NW' => 'E02006408',
        '1NX' => 'E02006408',
        '1NY' => 'E02006408',
        '1NZ' => 'E02006408',
        '1PA' => 'E02006408',
        '1PB' => 'E02006408',
        '1PD' => 'E02006408',
        '1PE' => 'E02006408',
        '1PF' => 'E02006408',
        '1PG' => 'E02006408',
        '1PH' => 'E02006408',
        '1PJ' => 'E02006408',
        '1PL' => 'E02006408',
        '1PN' => 'E02006408',
        '1PP' => 'E02006408',
        '1PQ' => 'E02006408',
        '1PR' => 'E02006408',
        '1PS' => 'E02006408',
        '1PT' => 'E02006408',
        '1PU' => 'E02006408',
        '1PW' => 'E02006408',
        '1PX' => 'E02006408',
        '1PY' => 'E02006408',
        '1PZ' => 'E02006408',
        '1QA' => 'E02006408',
        '1QB' => 'E02006408',
        '1QD' => 'E02006408',
        '1QE' => 'E02006408',
        '1QF' => 'E02006408',
        '1QG' => 'E02006408',
        '1QH' => 'E02006408',
        '1QJ' => 'E02006408',
        '1QL' => 'E02006408',
        '1QN' => 'E02006408',
        '1QP' => 'E02006408',
        '1QQ' => 'E02006408',
        '1QR' => 'E02006408',
        '1QS' => 'E02006408',
        '1QT' => 'E02006408',
        '1QU' => 'E02006408',
        '1QW' => 'E02006408',
        '1QX' => 'E02006408',
        '1QY' => 'E02006408',
        '1QZ' => 'E02006408',
        '1RA' => 'E02006408',
        '1RB' => 'E02006408',
        '1RD' => 'E02006408',
        '1RE' => 'E02006408',
        '1RF' => 'E02006408',
        '1RG' => 'E02006408',
        '1RH' => 'E02006408',
        '1RJ' => 'E02006408',
        '1RL' => 'E02006408',
        '1RN' => 'E02006408',
        '1RP' => 'E02006408',
        '1RQ' => 'E02006408',
        '1RR' => 'E02006408',
        '1RS' => 'E02006408',
        '1RT' => 'E02006408',
        '1RU' => 'E02006408',
        '1RW' => 'E02006408',
        '1RX' => 'E02006408',
        '1RY' => 'E02006408',
        '1RZ' => 'E02006408',
        '1SA' => 'E02006408',
        '1SB' => 'E02006408',
        '1SD' => 'E02006408',
        '1SE' => 'E02006408',
        '1SF' => 'E02006408',
        '1SG' => 'E02006408',
        '1SH' => 'E02006408',
        '1SJ' => 'E02006408',
        '1SL' => 'E02006408',
        '1SN' => 'E02006408',
        '1SP' => 'E02006408',
        '1SQ' => 'E02006408',
        '1SR' => 'E02006408',
        '1SS' => 'E02006408',
        '1ST' => 'E02006408',
        '1SU' => 'E02006408',
        '1SW' => 'E02006408',
        '1SX' => 'E02006408',
        '1SY' => 'E02006408',
        '1SZ' => 'E02006408',
        '1TA' => 'E02006408',
        '1TB' => 'E02006408',
        '1TD' => 'E02006408',
        '1TE' => 'E02006408',
        '1TF' => 'E02006408',
        '1TG' => 'E02006408',
        '1TH' => 'E02006408',
        '1TJ' => 'E02006408',
        '1TL' => 'E02006408',
        '1TN' => 'E02006408',
        '1TP' => 'E02006408',
        '1TQ' => 'E02006408',
        '1TR' => 'E02006408',
        '1TS' => 'E02006408',
        '1TT' => 'E02006408',
        '1TU' => 'E02006408',
        '1TW' => 'E02006408',
        '1TX' => 'E02006408',
        '1TY' => 'E02006408',
        '1TZ' => 'E02006408',
        '1UA' => 'E02006414',
        '1UB' => 'E02006408',
        '1UD' => 'E02006408',
        '1UE' => 'E02006408',
        '1UF' => 'E02006408',
        '1UG' => 'E02006408',
        '1UH' => 'E02006408',
        '1UJ' => 'E02006408',
        '1UL' => 'E02006408',
        '1UN' => 'E02006408',
        '1UP' => 'E02006408',
        '1UQ' => 'E02006408',
        '1UR' => 'E02006408',
        '1US' => 'E02006408',
        '1UT' => 'E02006408',
        '1UU' => 'E02006408',
        '1UW' => 'E02006408',
        '1UX' => 'E02006408',
        '1UY' => 'E02006408',
        '1UZ' => 'E02006408',
        '1WA' => 'E02006408',
        '1WB' => 'E02006408',
        '1WD' => 'E02006408',
        '1WE' => 'E02006408',
        '1WF' => 'E02006408',
        '1WG' => 'E02006408',
        '1WH' => 'E02006408',
        '1WJ' => 'E02006408',
        '1WL' => 'E02006408',
        '1WN' => 'E02006408',
        '1WP' => 'E02006408',
        '1WQ' => 'E02006408',
        '1WR' => 'E02006408',
        '1XA' => 'E02006408',
        '1XB' => 'E02006408',
        '1XD' => 'E02006408',
        '1XE' => 'E02006408',
        '1XF' => 'E02006408',
        '1XG' => 'E02006408',
        '1XH' => 'E02006408',
        '1XJ' => 'E02006408',
        '1XL' => 'E02006408',
        '1XN' => 'E02006408',
        '1XP' => 'E02006408',
        '1XQ' => 'E02006408',
        '1XR' => 'E02006408',
        '1XS' => 'E02006408',
        '1XT' => 'E02006408',
        '1XU' => 'E02006408',
        '1XW' => 'E02006408',
        '1XX' => 'E02006408',
        '1XY' => 'E02006408',
        '1XZ' => 'E02006408',
        '1YA' => 'E02006408',
        '1YB' => 'E02006407',
        '1YD' => 'E02006408',
        '1YE' => 'E02006407',
        '1YF' => 'E02006408',
        '1YG' => 'E02006408',
        '1YH' => 'E02006408',
        '1YJ' => 'E02006408',
        '1YL' => 'E02006408',
        '1YN' => 'E02006408',
        '1YP' => 'E02006408',
        '1YQ' => 'E02006407',
        '1YR' => 'E02006408',
        '1YS' => 'E02006408',
        '1YT' => 'E02006408',
        '1YU' => 'E02006408',
        '1YW' => 'E02006408',
        '1YX' => 'E02006408',
        '1YY' => 'E02006408',
        '1YZ' => 'E02006408',
        '2AA' => 'E02006407',
        '2AB' => 'E02006407',
        '2AD' => 'E02006408',
        '2AE' => 'E02006407',
        '2AF' => 'E02006407',
        '2AG' => 'E02006407',
        '2AH' => 'E02006407',
        '2AJ' => 'E02006408',
        '2AL' => 'E02006407',
        '2AN' => 'E02006407',
        '2AP' => 'E02006407',
        '2AQ' => 'E02006407',
        '2AR' => 'E02006407',
        '2AS' => 'E02006407',
        '2AT' => 'E02006407',
        '2AU' => 'E02006405',
        '2AW' => 'E02006407',
        '2AX' => 'E02006407',
        '2AY' => 'E02006405',
        '2AZ' => 'E02006405',
        '2BA' => 'E02006407',
        '2BB' => 'E02006407',
        '2BD' => 'E02006407',
        '2BE' => 'E02006407',
        '2BF' => 'E02006405',
        '2BH' => 'E02006407',
        '2BJ' => 'E02006407',
        '2BN' => 'E02006405',
        '2BP' => 'E02006407',
        '2BQ' => 'E02006407',
        '2BS' => 'E02006407',
        '2BT' => 'E02006407',
        '2BU' => 'E02006407',
        '2BW' => 'E02006407',
        '2BX' => 'E02006407',
        '2BY' => 'E02006407',
        '2BZ' => 'E02006407',
        '2DA' => 'E02006407',
        '2DB' => 'E02006407',
        '2DD' => 'E02006407',
        '2DE' => 'E02006407',
        '2DF' => 'E02006407',
        '2DG' => 'E02006407',
        '2DH' => 'E02006407',
        '2DJ' => 'E02006407',
        '2DL' => 'E02006407',
        '2DP' => 'E02006407',
        '2DQ' => 'E02006407',
        '2DR' => 'E02006407',
        '2DS' => 'E02006407',
        '2DT' => 'E02006407',
        '2DU' => 'E02006407',
        '2DW' => 'E02006405',
        '2DX' => 'E02006407',
        '2EB' => 'E02006407',
        '2ED' => 'E02006407',
        '2EE' => 'E02006407',
        '2EF' => 'E02006407',
        '2EL' => 'E02006407',
        '2EN' => 'E02006407',
        '2EP' => 'E02006407',
        '2ER' => 'E02006407',
        '2ES' => 'E02006407',
        '2EW' => 'E02006407',
        '2EY' => 'E02006407',
        '2GA' => 'E02006407',
        '2GH' => 'E02006405',
        '2HA' => 'E02006407',
        '2HB' => 'E02006407',
        '2HD' => 'E02006407',
        '2HE' => 'E02006407',
        '2HF' => 'E02006407',
        '2HG' => 'E02006407',
        '2HH' => 'E02006407',
        '2HJ' => 'E02006407',
        '2HL' => 'E02006407',
        '2HN' => 'E02006407',
        '2HP' => 'E02006407',
        '2HQ' => 'E02006407',
        '2HR' => 'E02006407',
        '2HS' => 'E02006407',
        '2HT' => 'E02006407',
        '2HU' => 'E02006407',
        '2HW' => 'E02006407',
        '2HX' => 'E02006407',
        '2HY' => 'E02006405',
        '2HZ' => 'E02006405',
        '2JA' => 'E02006405',
        '2JB' => 'E02006407',
        '2JD' => 'E02006407',
        '2JE' => 'E02006407',
        '2JF' => 'E02006407',
        '2JG' => 'E02006407',
        '2JH' => 'E02006407',
        '2JJ' => 'E02006407',
        '2JL' => 'E02006407',
        '2JN' => 'E02006407',
        '2JP' => 'E02006407',
        '2JQ' => 'E02006407',
        '2JR' => 'E02006407',
        '2JS' => 'E02006407',
        '2JT' => 'E02006407',
        '2JU' => 'E02006405',
        '2JW' => 'E02006407',
        '2JX' => 'E02006405',
        '2JY' => 'E02006405',
        '2JZ' => 'E02006405',
        '2LA' => 'E02006405',
        '2LB' => 'E02006405',
        '2LD' => 'E02006408',
        '2LE' => 'E02006405',
        '2LF' => 'E02006405',
        '2LG' => 'E02006405',
        '2LH' => 'E02006405',
        '2LJ' => 'E02006405',
        '2LL' => 'E02006405',
        '2LN' => 'E02006405',
        '2LP' => 'E02006405',
        '2LQ' => 'E02006405',
        '2LR' => 'E02006405',
        '2LS' => 'E02006405',
        '2LT' => 'E02006405',
        '2LU' => 'E02006405',
        '2LW' => 'E02006405',
        '2LX' => 'E02006407',
        '2LY' => 'E02006408',
        '2LZ' => 'E02006408',
        '2NA' => 'E02006405',
        '2NB' => 'E02006405',
        '2ND' => 'E02006405',
        '2NE' => 'E02006405',
        '2NF' => 'E02006405',
        '2NG' => 'E02006407',
        '2NH' => 'E02006407',
        '2NJ' => 'E02006407',
        '2NL' => 'E02006407',
        '2NN' => 'E02006407',
        '2NP' => 'E02006407',
        '2NR' => 'E02006407',
        '2NS' => 'E02006407',
        '2NT' => 'E02006407',
        '2NU' => 'E02006407',
        '2NW' => 'E02006407',
        '2NX' => 'E02006407',
        '2NY' => 'E02006407',
        '2NZ' => 'E02006405',
        '2PA' => 'E02006407',
        '2PB' => 'E02006407',
        '2PD' => 'E02006407',
        '2PE' => 'E02006407',
        '2PF' => 'E02006407',
        '2PG' => 'E02006407',
        '2PH' => 'E02006407',
        '2PJ' => 'E02006407',
        '2PL' => 'E02006407',
        '2PN' => 'E02006407',
        '2PP' => 'E02006407',
        '2PQ' => 'E02006407',
        '2PR' => 'E02006405',
        '2PS' => 'E02006407',
        '2PT' => 'E02006405',
        '2PU' => 'E02006405',
        '2PW' => 'E02006407',
        '2PX' => 'E02006405',
        '2PY' => 'E02006405',
        '2PZ' => 'E02006405',
        '2QA' => 'E02006405',
        '2QB' => 'E02006407',
        '2QD' => 'E02006405',
        '2QE' => 'E02006405',
        '2QF' => 'E02006405',
        '2QG' => 'E02006405',
        '2QH' => 'E02006405',
        '2QJ' => 'E02006405',
        '2QL' => 'E02006405',
        '2QN' => 'E02006405',
        '2QP' => 'E02006405',
        '2QQ' => 'E02006405',
        '2QR' => 'E02006405',
        '2QS' => 'E02006405',
        '2QT' => 'E02006405',
        '2QU' => 'E02006405',
        '2QW' => 'E02006405',
        '2QX' => 'E02006405',
        '2QY' => 'E02006405',
        '2QZ' => 'E02006405',
        '2RA' => 'E02006405',
        '2RB' => 'E02006405',
        '2RD' => 'E02006405',
        '2RF' => 'E02006405',
        '2RH' => 'E02006405',
        '2RJ' => 'E02006405',
        '2RL' => 'E02006405',
        '2RN' => 'E02006405',
        '2RP' => 'E02006405',
        '2RQ' => 'E02006405',
        '2RR' => 'E02006405',
        '2RS' => 'E02006405',
        '2RT' => 'E02006405',
        '2RU' => 'E02006405',
        '2RW' => 'E02006405',
        '2RX' => 'E02006405',
        '2RY' => 'E02006405',
        '2RZ' => 'E02006405',
        '2SA' => 'E02006405',
        '2SB' => 'E02006405',
        '2SD' => 'E02006407',
        '2SE' => 'E02006407',
        '2SF' => 'E02006407',
        '2SG' => 'E02006407',
        '2SH' => 'E02006407',
        '2SJ' => 'E02006407',
        '2SL' => 'E02006407',
        '2SN' => 'E02006407',
        '2SP' => 'E02006407',
        '2SQ' => 'E02006407',
        '2SR' => 'E02006407',
        '2SS' => 'E02006405',
        '2ST' => 'E02006405',
        '2SU' => 'E02006405',
        '2SW' => 'E02006407',
        '2SX' => 'E02006405',
        '2SY' => 'E02006405',
        '2TA' => 'E02006405',
        '2TB' => 'E02006405',
        '2TD' => 'E02006405',
        '2TE' => 'E02006405',
        '2TG' => 'E02006405',
        '2TH' => 'E02006405',
        '2TJ' => 'E02006405',
        '2TL' => 'E02006405',
        '2TN' => 'E02006405',
        '2TP' => 'E02006405',
        '2TQ' => 'E02006405',
        '2TR' => 'E02006407',
        '2TS' => 'E02006405',
        '2TT' => 'E02006405',
        '2TU' => 'E02006405',
        '2TW' => 'E02006405',
        '2TX' => 'E02006405',
        '2TY' => 'E02006405',
        '2TZ' => 'E02006405',
        '2UA' => 'E02006405',
        '2UB' => 'E02006405',
        '2UD' => 'E02006405',
        '2UE' => 'E02006405',
        '2UF' => 'E02006405',
        '2UG' => 'E02006405',
        '2UH' => 'E02006405',
        '2UJ' => 'E02006408',
        '2UL' => 'E02006405',
        '2UN' => 'E02006405',
        '2UP' => 'E02006405',
        '2UQ' => 'E02006408',
        '2UR' => 'E02006405',
        '2US' => 'E02006408',
        '2UT' => 'E02006405',
        '2UU' => 'E02006408',
        '2UW' => 'E02006405',
        '2UX' => 'E02006408',
        '2UY' => 'E02006405',
        '2UZ' => 'E02006408',
        '2WA' => 'E02006408',
        '2WB' => 'E02006405',
        '2WD' => 'E02006408',
        '2WE' => 'E02006408',
        '2WF' => 'E02006405',
        '2WG' => 'E02006405',
        '2WH' => 'E02006408',
        '2WJ' => 'E02006408',
        '2WL' => 'E02006405',
        '2WN' => 'E02006408',
        '2WP' => 'E02006405',
        '2WQ' => 'E02006408',
        '2WR' => 'E02006408',
        '2WS' => 'E02006408',
        '2WT' => 'E02006408',
        '2WU' => 'E02006408',
        '2WW' => 'E02006408',
        '2WX' => 'E02006408',
        '2WY' => 'E02006405',
        '2WZ' => 'E02006405',
        '2XA' => 'E02006408',
        '2XB' => 'E02006405',
        '2XD' => 'E02006405',
        '2XE' => 'E02006405',
        '2XF' => 'E02006408',
        '2XG' => 'E02006405',
        '2XH' => 'E02006408',
        '2XJ' => 'E02006405',
        '2XL' => 'E02006405',
        '2XN' => 'E02006408',
        '2XP' => 'E02006405',
        '2XQ' => 'E02006405',
        '2XR' => 'E02006408',
        '2XS' => 'E02006408',
        '2XT' => 'E02006405',
        '2XU' => 'E02006405',
        '2XX' => 'E02006407',
        '2XY' => 'E02006407',
        '2XZ' => 'E02006407',
        '2YA' => 'E02006408',
        '2YB' => 'E02006408',
        '2YD' => 'E02006408',
        '2YE' => 'E02006408',
        '2YF' => 'E02006408',
        '2YG' => 'E02006405',
        '2YH' => 'E02006408',
        '2YJ' => 'E02006407',
        '2YL' => 'E02006407',
        '2YN' => 'E02006405',
        '2YP' => 'E02006407',
        '2YQ' => 'E02006407',
        '2YR' => 'E02006408',
        '2YS' => 'E02006408',
        '2YT' => 'E02006408',
        '2YU' => 'E02006408',
        '2YW' => 'E02006408',
        '2YX' => 'E02006408',
        '2YY' => 'E02006408',
        '2YZ' => 'E02006408',
        '2ZA' => 'E02006405',
        '2ZQ' => 'E02006408',
        '2ZY' => 'E02006408',
        '3AA' => 'E02006405',
        '3AB' => 'E02006405',
        '3AD' => 'E02006405',
        '3AE' => 'E02006405',
        '3AF' => 'E02006405',
        '3AG' => 'E02006405',
        '3AH' => 'E02006405',
        '3AJ' => 'E02006404',
        '3AL' => 'E02006404',
        '3AN' => 'E02006404',
        '3AP' => 'E02006404',
        '3AQ' => 'E02006405',
        '3AR' => 'E02006404',
        '3AS' => 'E02006404',
        '3AT' => 'E02006404',
        '3AU' => 'E02006404',
        '3AW' => 'E02006404',
        '3AX' => 'E02006404',
        '3AY' => 'E02006405',
        '3AZ' => 'E02006405',
        '3BA' => 'E02006405',
        '3BB' => 'E02006404',
        '3BD' => 'E02006405',
        '3BE' => 'E02006405',
        '3BF' => 'E02006405',
        '3BG' => 'E02006405',
        '3BH' => 'E02006405',
        '3BJ' => 'E02006405',
        '3BL' => 'E02006408',
        '3BN' => 'E02006405',
        '3BP' => 'E02006405',
        '3BQ' => 'E02006405',
        '3BS' => 'E02006405',
        '3BT' => 'E02006405',
        '3BU' => 'E02006405',
        '3BW' => 'E02006405',
        '3BX' => 'E02006405',
        '3BY' => 'E02006405',
        '3BZ' => 'E02006405',
        '3DA' => 'E02006405',
        '3DB' => 'E02006405',
        '3DD' => 'E02006405',
        '3DE' => 'E02006405',
        '3DF' => 'E02006405',
        '3DG' => 'E02006405',
        '3DH' => 'E02006405',
        '3DJ' => 'E02006405',
        '3DL' => 'E02006405',
        '3DN' => 'E02006405',
        '3DP' => 'E02006405',
        '3DQ' => 'E02006405',
        '3DR' => 'E02006405',
        '3DS' => 'E02006405',
        '3DT' => 'E02006405',
        '3DU' => 'E02006405',
        '3DW' => 'E02006405',
        '3DX' => 'E02006405',
        '3DY' => 'E02006405',
        '3DZ' => 'E02006405',
        '3EA' => 'E02006405',
        '3EB' => 'E02006405',
        '3ED' => 'E02006405',
        '3EE' => 'E02006405',
        '3EF' => 'E02006405',
        '3EG' => 'E02006405',
        '3EH' => 'E02006405',
        '3EJ' => 'E02006405',
        '3EL' => 'E02006405',
        '3EN' => 'E02006405',
        '3EP' => 'E02006405',
        '3EQ' => 'E02006405',
        '3ER' => 'E02006405',
        '3ES' => 'E02006405',
        '3ET' => 'E02006405',
        '3EU' => 'E02006405',
        '3EW' => 'E02006405',
        '3EX' => 'E02006405',
        '3EY' => 'E02006405',
        '3EZ' => 'E02006405',
        '3FB' => 'E02006405',
        '3FD' => 'E02006405',
        '3FE' => 'E02006404',
        '3FF' => 'E02006404',
        '3FG' => 'E02006405',
        '3FJ' => 'E02006405',
        '3GA' => 'E02006405',
        '3GB' => 'E02006405',
        '3GD' => 'E02006405',
        '3GN' => 'E02006405',
        '3HA' => 'E02006405',
        '3HB' => 'E02006405',
        '3HG' => 'E02006405',
        '3HH' => 'E02006405',
        '3HJ' => 'E02006405',
        '3HL' => 'E02006405',
        '3HN' => 'E02006405',
        '3HP' => 'E02006405',
        '3HQ' => 'E02006405',
        '3HR' => 'E02006405',
        '3HS' => 'E02006405',
        '3HT' => 'E02006405',
        '3HU' => 'E02006405',
        '3HW' => 'E02006405',
        '3HX' => 'E02006405',
        '3HY' => 'E02006405',
        '3HZ' => 'E02006405',
        '3JA' => 'E02006405',
        '3JB' => 'E02006405',
        '3JD' => 'E02006405',
        '3JE' => 'E02006405',
        '3JF' => 'E02006405',
        '3JG' => 'E02006405',
        '3JH' => 'E02006405',
        '3JJ' => 'E02006405',
        '3JL' => 'E02006405',
        '3JQ' => 'E02006405',
        '3JS' => 'E02006405',
        '3JT' => 'E02006405',
        '3JU' => 'E02006405',
        '3JX' => 'E02006405',
        '3JY' => 'E02006405',
        '3JZ' => 'E02006405',
        '3LA' => 'E02006405',
        '3LB' => 'E02006405',
        '3LD' => 'E02006405',
        '3LF' => 'E02006405',
        '3LG' => 'E02006405',
        '3LH' => 'E02006405',
        '3LJ' => 'E02006405',
        '3LL' => 'E02006405',
        '3LN' => 'E02006405',
        '3LP' => 'E02006405',
        '3LQ' => 'E02006405',
        '3LT' => 'E02006409',
        '3LU' => 'E02006409',
        '3LW' => 'E02006405',
        '3LX' => 'E02006409',
        '3LY' => 'E02006409',
        '3LZ' => 'E02006409',
        '3NA' => 'E02006409',
        '3NB' => 'E02006409',
        '3ND' => 'E02006409',
        '3NE' => 'E02006409',
        '3NF' => 'E02006409',
        '3NG' => 'E02006409',
        '3NH' => 'E02006409',
        '3NJ' => 'E02006409',
        '3NL' => 'E02006409',
        '3NN' => 'E02006409',
        '3NP' => 'E02006409',
        '3NQ' => 'E02006409',
        '3NR' => 'E02006409',
        '3NS' => 'E02006409',
        '3NT' => 'E02006409',
        '3NU' => 'E02006409',
        '3NW' => 'E02006409',
        '3PA' => 'E02006405',
        '3PB' => 'E02006405',
        '3PD' => 'E02006405',
        '3PE' => 'E02006405',
        '3PF' => 'E02006405',
        '3PG' => 'E02006405',
        '3PH' => 'E02006405',
        '3PJ' => 'E02006405',
        '3PL' => 'E02006405',
        '3PN' => 'E02006405',
        '3PP' => 'E02006405',
        '3PQ' => 'E02006405',
        '3PR' => 'E02006405',
        '3PS' => 'E02006405',
        '3PT' => 'E02006405',
        '3PU' => 'E02006405',
        '3PW' => 'E02006405',
        '3PX' => 'E02006405',
        '3PY' => 'E02006405',
        '3PZ' => 'E02006405',
        '3QA' => 'E02006405',
        '3QB' => 'E02006405',
        '3QE' => 'E02006405',
        '3QF' => 'E02006405',
        '3QG' => 'E02006405',
        '3QH' => 'E02006405',
        '3QJ' => 'E02006405',
        '3QL' => 'E02006405',
        '3QN' => 'E02006405',
        '3QP' => 'E02006405',
        '3QQ' => 'E02006405',
        '3QR' => 'E02006405',
        '3QS' => 'E02006405',
        '3QT' => 'E02006405',
        '3QU' => 'E02006405',
        '3QW' => 'E02006408',
        '3QX' => 'E02006405',
        '3QY' => 'E02006405',
        '3QZ' => 'E02006405',
        '3RA' => 'E02006405',
        '3RB' => 'E02006405',
        '3RD' => 'E02006405',
        '3RE' => 'E02006405',
        '3RF' => 'E02006405',
        '3RG' => 'E02006405',
        '3RH' => 'E02006405',
        '3RJ' => 'E02006405',
        '3RL' => 'E02006405',
        '3RN' => 'E02006405',
        '3RP' => 'E02006407',
        '3RQ' => 'E02006405',
        '3RR' => 'E02006405',
        '3RT' => 'E02006407',
        '3RU' => 'E02006407',
        '3RX' => 'E02006407',
        '3RY' => 'E02006405',
        '3RZ' => 'E02006405',
        '3SA' => 'E02006405',
        '3SB' => 'E02006407',
        '3SD' => 'E02006407',
        '3SE' => 'E02006409',
        '3SF' => 'E02006409',
        '3SG' => 'E02006409',
        '3SH' => 'E02006409',
        '3SJ' => 'E02006409',
        '3SL' => 'E02006414',
        '3SN' => 'E02006414',
        '3SP' => 'E02006405',
        '3SQ' => 'E02006409',
        '3SR' => 'E02006414',
        '3ST' => 'E02006414',
        '3SU' => 'E02006414',
        '3SW' => 'E02006414',
        '3SX' => 'E02006414',
        '3SY' => 'E02006409',
        '3SZ' => 'E02006408',
        '3TA' => 'E02006405',
        '3TB' => 'E02006405',
        '3TD' => 'E02006414',
        '3TE' => 'E02006408',
        '3TF' => 'E02006408',
        '3TG' => 'E02006405',
        '3TH' => 'E02006408',
        '3TJ' => 'E02006405',
        '3TL' => 'E02006408',
        '3TN' => 'E02006408',
        '3TP' => 'E02006405',
        '3TQ' => 'E02006405',
        '3TR' => 'E02006405',
        '3TS' => 'E02006408',
        '3TT' => 'E02006405',
        '3TU' => 'E02006408',
        '3TW' => 'E02006414',
        '3TX' => 'E02006408',
        '3TY' => 'E02006405',
        '3TZ' => 'E02006408',
        '3UA' => 'E02006414',
        '3UB' => 'E02006408',
        '3UD' => 'E02006408',
        '3UE' => 'E02006408',
        '3UF' => 'E02006408',
        '3UG' => 'E02006408',
        '3UH' => 'E02006408',
        '3UJ' => 'E02006408',
        '3UQ' => 'E02006408',
        '3UY' => 'E02006408',
        '3UZ' => 'E02006408',
        '3WA' => 'E02006408',
        '3WB' => 'E02006408',
        '3WD' => 'E02006408',
        '3WE' => 'E02006408',
        '3WF' => 'E02006408',
        '3WG' => 'E02006408',
        '3WH' => 'E02006408',
        '3WJ' => 'E02006408',
        '3WL' => 'E02006408',
        '3WN' => 'E02006408',
        '3WP' => 'E02006408',
        '3WR' => 'E02006408',
        '3WS' => 'E02006408',
        '3WT' => 'E02006408',
        '3WU' => 'E02006408',
        '3WW' => 'E02006408',
        '3WX' => 'E02006408',
        '3WY' => 'E02006408',
        '3WZ' => 'E02006408',
        '3XY' => 'E02006408',
        '3XZ' => 'E02006408',
        '3YA' => 'E02006408',
        '3YB' => 'E02006408',
        '3YF' => 'E02006408',
        '3YQ' => 'E02006408',
        '3YZ' => 'E02006408',
        '3ZA' => 'E02006408',
        '9AG' => 'E02006408',
        '9AH' => 'E02006408',
        '9AJ' => 'E02006408',
        '9AL' => 'E02006408',
        '9AN' => 'E02006408',
        '9AP' => 'E02006408',
        '9AQ' => 'E02006408',
        '9AU' => 'E02006408',
        '9AY' => 'E02006408',
        '9AZ' => 'E02006408',
        '9BA' => 'E02006408',
        '9BG' => 'E02006408',
        '9BH' => 'E02006408',
        '9BJ' => 'E02006408',
        '9BL' => 'E02006408',
        '9BN' => 'E02006408',
        '9BQ' => 'E02006408',
        '9BS' => 'E02006408',
        '9BT' => 'E02006408',
        '9BU' => 'E02006408',
        '9BW' => 'E02006408',
        '9BX' => 'E02006408',
        '9BY' => 'E02006408',
        '9BZ' => 'E02006408',
        '9DA' => 'E02006408',
        '9DB' => 'E02006408',
        '9DD' => 'E02006408',
        '9DE' => 'E02006408',
        '9DF' => 'E02006408',
        '9DG' => 'E02006408',
        '9DH' => 'E02006408',
        '9DJ' => 'E02006408',
        '9DL' => 'E02006408',
        '9DN' => 'E02006408',
        '9DP' => 'E02006408',
        '9DQ' => 'E02006408',
        '9DR' => 'E02006408',
        '9DS' => 'E02006408',
        '9DT' => 'E02006408',
        '9DU' => 'E02006408',
        '9DW' => 'E02006408',
        '9DX' => 'E02006408',
        '9DY' => 'E02006408',
        '9DZ' => 'E02006408',
        '9EA' => 'E02006408',
        '9EB' => 'E02006408',
        '9ED' => 'E02006408',
        '9EE' => 'E02006408',
        '9EF' => 'E02006408',
        '9EG' => 'E02006408',
        '9EH' => 'E02006408',
        '9EJ' => 'E02006408',
        '9EL' => 'E02006408',
        '9EN' => 'E02006408',
        '9EP' => 'E02006408',
        '9EQ' => 'E02006408',
        '9ER' => 'E02006408',
        '9ES' => 'E02006408',
        '9ET' => 'E02006408',
        '9EU' => 'E02006408',
        '9EW' => 'E02006408',
        '9EX' => 'E02006408',
        '9EY' => 'E02006408',
        '9EZ' => 'E02006408',
        '9FA' => 'E02006408',
        '9FB' => 'E02006408',
        '9FD' => 'E02006408',
        '9FE' => 'E02006408',
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
