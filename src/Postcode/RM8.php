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
final class RM8
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02000005',
        '1AB' => 'E02000005',
        '1AD' => 'E02000005',
        '1AE' => 'E02000005',
        '1AF' => 'E02000008',
        '1AG' => 'E02000008',
        '1AH' => 'E02000005',
        '1AJ' => 'E02000005',
        '1AL' => 'E02000005',
        '1AN' => 'E02000008',
        '1AP' => 'E02000005',
        '1AQ' => 'E02000008',
        '1AR' => 'E02000005',
        '1AS' => 'E02000005',
        '1AT' => 'E02000003',
        '1AU' => 'E02000005',
        '1AW' => 'E02000008',
        '1AX' => 'E02000005',
        '1AY' => 'E02000008',
        '1AZ' => 'E02000005',
        '1BA' => 'E02000003',
        '1BB' => 'E02000005',
        '1BD' => 'E02000005',
        '1BE' => 'E02000008',
        '1BF' => 'E02006799',
        '1BG' => 'E02006799',
        '1BH' => 'E02000005',
        '1BJ' => 'E02000005',
        '1BL' => 'E02006799',
        '1BN' => 'E02000005',
        '1BP' => 'E02000005',
        '1BQ' => 'E02000003',
        '1BR' => 'E02000005',
        '1BS' => 'E02006799',
        '1BT' => 'E02000005',
        '1BU' => 'E02000005',
        '1BW' => 'E02006799',
        '1BX' => 'E02006799',
        '1BY' => 'E02000008',
        '1BZ' => 'E02006799',
        '1DA' => 'E02006799',
        '1DB' => 'E02006799',
        '1DD' => 'E02006799',
        '1DE' => 'E02000008',
        '1DF' => 'E02006799',
        '1DG' => 'E02006799',
        '1DH' => 'E02000005',
        '1DJ' => 'E02000005',
        '1DL' => 'E02006799',
        '1DN' => 'E02000007',
        '1DP' => 'E02000008',
        '1DQ' => 'E02006799',
        '1DR' => 'E02000005',
        '1DS' => 'E02000007',
        '1DT' => 'E02006799',
        '1DU' => 'E02000003',
        '1DW' => 'E02000007',
        '1DX' => 'E02000003',
        '1DY' => 'E02006799',
        '1DZ' => 'E02000005',
        '1EA' => 'E02000003',
        '1EB' => 'E02006799',
        '1ED' => 'E02006799',
        '1EE' => 'E02000008',
        '1EF' => 'E02006799',
        '1EG' => 'E02000007',
        '1EH' => 'E02006799',
        '1EJ' => 'E02006799',
        '1EL' => 'E02000005',
        '1EN' => 'E02000005',
        '1EP' => 'E02000005',
        '1EQ' => 'E02000005',
        '1ER' => 'E02000005',
        '1ES' => 'E02000003',
        '1ET' => 'E02000003',
        '1EU' => 'E02000005',
        '1EW' => 'E02006799',
        '1EX' => 'E02000003',
        '1EY' => 'E02000008',
        '1EZ' => 'E02000008',
        '1FA' => 'E02000005',
        '1FB' => 'E02000005',
        '1FD' => 'E02000003',
        '1FE' => 'E02000005',
        '1FF' => 'E02000005',
        '1FG' => 'E02000005',
        '1FH' => 'E02000005',
        '1FJ' => 'E02000005',
        '1FL' => 'E02000005',
        '1GD' => 'E02000008',
        '1GG' => 'E02000008',
        '1HB' => 'E02000005',
        '1HD' => 'E02000003',
        '1HE' => 'E02000005',
        '1HF' => 'E02000003',
        '1HH' => 'E02000003',
        '1HJ' => 'E02000003',
        '1HL' => 'E02000005',
        '1HN' => 'E02000003',
        '1HP' => 'E02000005',
        '1HR' => 'E02000005',
        '1HS' => 'E02000003',
        '1HT' => 'E02000005',
        '1HU' => 'E02000003',
        '1HW' => 'E02000005',
        '1HX' => 'E02000003',
        '1JA' => 'E02000003',
        '1JB' => 'E02000003',
        '1JD' => 'E02000003',
        '1JH' => 'E02000005',
        '1JJ' => 'E02000005',
        '1JL' => 'E02000005',
        '1JN' => 'E02000005',
        '1JP' => 'E02000003',
        '1JR' => 'E02000003',
        '1JS' => 'E02000003',
        '1JT' => 'E02000007',
        '1JU' => 'E02000007',
        '1JX' => 'E02000007',
        '1JY' => 'E02000007',
        '1JZ' => 'E02000007',
        '1LA' => 'E02006799',
        '1LB' => 'E02000007',
        '1LD' => 'E02000005',
        '1LE' => 'E02000007',
        '1LF' => 'E02000008',
        '1LG' => 'E02000005',
        '1LH' => 'E02000005',
        '1LJ' => 'E02000005',
        '1LL' => 'E02000005',
        '1LN' => 'E02000005',
        '1LP' => 'E02000005',
        '1LR' => 'E02000005',
        '1LS' => 'E02000005',
        '1LT' => 'E02000005',
        '1LU' => 'E02000005',
        '1LX' => 'E02000005',
        '1NA' => 'E02000005',
        '1NB' => 'E02000005',
        '1ND' => 'E02000005',
        '1NH' => 'E02000005',
        '1NJ' => 'E02000005',
        '1NL' => 'E02000005',
        '1NN' => 'E02000003',
        '1NP' => 'E02000005',
        '1NR' => 'E02000005',
        '1NS' => 'E02000005',
        '1NT' => 'E02000005',
        '1NU' => 'E02000003',
        '1NX' => 'E02000003',
        '1PA' => 'E02000003',
        '1PB' => 'E02000005',
        '1PD' => 'E02000005',
        '1PH' => 'E02000005',
        '1PJ' => 'E02000005',
        '1PL' => 'E02000005',
        '1PP' => 'E02000005',
        '1PR' => 'E02000005',
        '1PS' => 'E02000005',
        '1PT' => 'E02000005',
        '1PU' => 'E02000005',
        '1PW' => 'E02000008',
        '1PX' => 'E02000005',
        '1PY' => 'E02000005',
        '1QA' => 'E02000005',
        '1QB' => 'E02000005',
        '1QD' => 'E02000003',
        '1QE' => 'E02000003',
        '1QF' => 'E02000003',
        '1QH' => 'E02000003',
        '1QJ' => 'E02000003',
        '1QL' => 'E02000003',
        '1QP' => 'E02000005',
        '1QQ' => 'E02000003',
        '1QR' => 'E02000005',
        '1QS' => 'E02000005',
        '1QT' => 'E02000005',
        '1QU' => 'E02006799',
        '1QX' => 'E02000005',
        '1RB' => 'E02006799',
        '1RD' => 'E02000008',
        '1RF' => 'E02006799',
        '1RG' => 'E02000008',
        '1RH' => 'E02006799',
        '1RJ' => 'E02006799',
        '1RL' => 'E02006799',
        '1RN' => 'E02000005',
        '1RP' => 'E02006799',
        '1RQ' => 'E02006800',
        '1RR' => 'E02006799',
        '1RS' => 'E02006799',
        '1RT' => 'E02006799',
        '1RU' => 'E02000008',
        '1RW' => 'E02000005',
        '1RX' => 'E02006799',
        '1RY' => 'E02006799',
        '1RZ' => 'E02006799',
        '1SA' => 'E02006799',
        '1SB' => 'E02006799',
        '1SD' => 'E02000003',
        '1SH' => 'E02000005',
        '1SJ' => 'E02006799',
        '1SL' => 'E02006799',
        '1SN' => 'E02006799',
        '1SP' => 'E02000003',
        '1SQ' => 'E02006799',
        '1SR' => 'E02000003',
        '1SS' => 'E02006799',
        '1ST' => 'E02006799',
        '1SU' => 'E02006799',
        '1SW' => 'E02000003',
        '1TA' => 'E02000005',
        '1TB' => 'E02000003',
        '1TD' => 'E02006800',
        '1TE' => 'E02006800',
        '1TF' => 'E02006800',
        '1TH' => 'E02006799',
        '1TJ' => 'E02006799',
        '1TL' => 'E02006799',
        '1TP' => 'E02006799',
        '1TR' => 'E02006799',
        '1TS' => 'E02006799',
        '1TT' => 'E02006799',
        '1TU' => 'E02006799',
        '1TW' => 'E02006800',
        '1TX' => 'E02006799',
        '1TY' => 'E02006800',
        '1TZ' => 'E02006800',
        '1UA' => 'E02006799',
        '1UB' => 'E02006799',
        '1UD' => 'E02006799',
        '1UE' => 'E02006800',
        '1UF' => 'E02006800',
        '1UG' => 'E02006800',
        '1UH' => 'E02006799',
        '1UJ' => 'E02006799',
        '1UL' => 'E02006799',
        '1UN' => 'E02006799',
        '1UP' => 'E02006799',
        '1UQ' => 'E02006799',
        '1UR' => 'E02006799',
        '1UT' => 'E02006799',
        '1UU' => 'E02006799',
        '1UX' => 'E02006799',
        '1WA' => 'E02000008',
        '1WB' => 'E02000005',
        '1WD' => 'E02000008',
        '1WE' => 'E02000008',
        '1WF' => 'E02000008',
        '1WG' => 'E02000008',
        '1WP' => 'E02000008',
        '1WT' => 'E02000008',
        '1WW' => 'E02000008',
        '1WX' => 'E02000008',
        '1WY' => 'E02000008',
        '1WZ' => 'E02006799',
        '1XA' => 'E02006799',
        '1XB' => 'E02006799',
        '1XD' => 'E02006800',
        '1XE' => 'E02006800',
        '1XF' => 'E02006800',
        '1XG' => 'E02006800',
        '1XH' => 'E02006799',
        '1XJ' => 'E02006799',
        '1XL' => 'E02006799',
        '1XN' => 'E02006800',
        '1XP' => 'E02006800',
        '1XQ' => 'E02006800',
        '1XR' => 'E02006799',
        '1XS' => 'E02006800',
        '1XT' => 'E02006799',
        '1XU' => 'E02006799',
        '1XW' => 'E02006800',
        '1XX' => 'E02006799',
        '1XY' => 'E02006799',
        '1XZ' => 'E02006799',
        '1YA' => 'E02006799',
        '1YB' => 'E02006799',
        '1YD' => 'E02006799',
        '1YE' => 'E02006800',
        '1YF' => 'E02006800',
        '1YG' => 'E02006800',
        '1YH' => 'E02006799',
        '1YJ' => 'E02006799',
        '1YL' => 'E02006799',
        '1YN' => 'E02006799',
        '1YP' => 'E02006799',
        '1YQ' => 'E02006800',
        '1YR' => 'E02006799',
        '1YS' => 'E02006799',
        '1YT' => 'E02006799',
        '1YU' => 'E02006799',
        '1YX' => 'E02006799',
        '1YY' => 'E02000003',
        '1YZ' => 'E02000008',
        '1ZH' => 'E02000008',
        '2AA' => 'E02000009',
        '2AB' => 'E02000009',
        '2AD' => 'E02000009',
        '2AE' => 'E02000009',
        '2AF' => 'E02000009',
        '2AG' => 'E02000009',
        '2AH' => 'E02000009',
        '2AJ' => 'E02000009',
        '2AL' => 'E02000009',
        '2AN' => 'E02000009',
        '2AP' => 'E02000009',
        '2AQ' => 'E02000009',
        '2AR' => 'E02000009',
        '2AS' => 'E02000009',
        '2AT' => 'E02000009',
        '2AU' => 'E02000009',
        '2AW' => 'E02000013',
        '2AX' => 'E02000009',
        '2AY' => 'E02000008',
        '2AZ' => 'E02000009',
        '2BA' => 'E02006799',
        '2BB' => 'E02000009',
        '2BD' => 'E02000009',
        '2BE' => 'E02000009',
        '2BF' => 'E02000009',
        '2BG' => 'E02000013',
        '2BH' => 'E02000009',
        '2BJ' => 'E02000018',
        '2BL' => 'E02000013',
        '2BN' => 'E02000009',
        '2BP' => 'E02000018',
        '2BQ' => 'E02000008',
        '2BS' => 'E02000009',
        '2BT' => 'E02000009',
        '2BU' => 'E02000009',
        '2BW' => 'E02000009',
        '2BX' => 'E02000009',
        '2BY' => 'E02000013',
        '2BZ' => 'E02000013',
        '2DA' => 'E02000009',
        '2DB' => 'E02000009',
        '2DD' => 'E02000009',
        '2DE' => 'E02000013',
        '2DF' => 'E02000013',
        '2DG' => 'E02000013',
        '2DH' => 'E02000009',
        '2DJ' => 'E02000009',
        '2DL' => 'E02000009',
        '2DN' => 'E02000013',
        '2DP' => 'E02000009',
        '2DQ' => 'E02000009',
        '2DR' => 'E02000009',
        '2DS' => 'E02000009',
        '2DT' => 'E02000009',
        '2DU' => 'E02000009',
        '2DW' => 'E02000013',
        '2DX' => 'E02000009',
        '2DY' => 'E02000013',
        '2DZ' => 'E02000013',
        '2EA' => 'E02000009',
        '2EB' => 'E02000009',
        '2ED' => 'E02000009',
        '2EE' => 'E02000018',
        '2EF' => 'E02000013',
        '2EG' => 'E02000013',
        '2EH' => 'E02000009',
        '2EJ' => 'E02000009',
        '2EL' => 'E02000009',
        '2EN' => 'E02000013',
        '2EP' => 'E02000008',
        '2EQ' => 'E02000013',
        '2ER' => 'E02000009',
        '2ES' => 'E02000009',
        '2ET' => 'E02000009',
        '2EU' => 'E02000009',
        '2EW' => 'E02000013',
        '2EX' => 'E02000009',
        '2EY' => 'E02000018',
        '2EZ' => 'E02000009',
        '2FA' => 'E02000009',
        '2FB' => 'E02000009',
        '2FD' => 'E02000009',
        '2FE' => 'E02000009',
        '2FF' => 'E02000009',
        '2FG' => 'E02000009',
        '2FH' => 'E02000008',
        '2FJ' => 'E02000009',
        '2FL' => 'E02000009',
        '2FN' => 'E02000009',
        '2FP' => 'E02000009',
        '2FQ' => 'E02000009',
        '2FR' => 'E02000009',
        '2FS' => 'E02000009',
        '2FT' => 'E02000009',
        '2FU' => 'E02000009',
        '2FW' => 'E02000009',
        '2FX' => 'E02000009',
        '2FY' => 'E02000009',
        '2FZ' => 'E02000009',
        '2GD' => 'E02000009',
        '2GE' => 'E02000008',
        '2GF' => 'E02000009',
        '2GG' => 'E02000009',
        '2GH' => 'E02000008',
        '2GJ' => 'E02000009',
        '2GL' => 'E02000008',
        '2GN' => 'E02000009',
        '2GP' => 'E02000009',
        '2GQ' => 'E02000009',
        '2GR' => 'E02000009',
        '2GS' => 'E02000009',
        '2GT' => 'E02000009',
        '2GU' => 'E02006799',
        '2HA' => 'E02000009',
        '2HB' => 'E02000009',
        '2HD' => 'E02000009',
        '2HE' => 'E02000018',
        '2HF' => 'E02000018',
        '2HG' => 'E02000018',
        '2HH' => 'E02000009',
        '2HJ' => 'E02000009',
        '2HL' => 'E02000009',
        '2HN' => 'E02000018',
        '2HP' => 'E02000009',
        '2HQ' => 'E02000018',
        '2HR' => 'E02000009',
        '2HS' => 'E02000009',
        '2HT' => 'E02000009',
        '2HU' => 'E02000009',
        '2HW' => 'E02000018',
        '2HX' => 'E02000009',
        '2HY' => 'E02000018',
        '2HZ' => 'E02000008',
        '2JA' => 'E02000009',
        '2JB' => 'E02000009',
        '2JD' => 'E02000009',
        '2JF' => 'E02000009',
        '2JG' => 'E02006799',
        '2JH' => 'E02000013',
        '2JJ' => 'E02000013',
        '2JL' => 'E02000018',
        '2JN' => 'E02006799',
        '2JP' => 'E02000013',
        '2JQ' => 'E02006799',
        '2JR' => 'E02000018',
        '2JS' => 'E02006799',
        '2JT' => 'E02006799',
        '2JW' => 'E02006799',
        '2JX' => 'E02006799',
        '2JY' => 'E02006799',
        '2JZ' => 'E02006799',
        '2LB' => 'E02000013',
        '2LD' => 'E02000013',
        '2LH' => 'E02000013',
        '2LJ' => 'E02000013',
        '2LL' => 'E02000013',
        '2LP' => 'E02000013',
        '2LQ' => 'E02000008',
        '2LR' => 'E02000013',
        '2LS' => 'E02000013',
        '2LT' => 'E02000018',
        '2LU' => 'E02000013',
        '2LX' => 'E02000013',
        '2LZ' => 'E02000009',
        '2NA' => 'E02000018',
        '2NB' => 'E02000013',
        '2ND' => 'E02000013',
        '2NE' => 'E02000009',
        '2NG' => 'E02000009',
        '2NH' => 'E02000009',
        '2NJ' => 'E02000009',
        '2NL' => 'E02000009',
        '2NN' => 'E02000009',
        '2NP' => 'E02000009',
        '2NQ' => 'E02000009',
        '2NR' => 'E02000009',
        '2NS' => 'E02000009',
        '2NT' => 'E02000009',
        '2NU' => 'E02000009',
        '2NW' => 'E02000009',
        '2PA' => 'E02006799',
        '2PB' => 'E02006799',
        '2PE' => 'E02000008',
        '2PF' => 'E02006799',
        '2PH' => 'E02000009',
        '2PJ' => 'E02006799',
        '2PL' => 'E02000008',
        '2PN' => 'E02000008',
        '2PP' => 'E02000008',
        '2PQ' => 'E02000008',
        '2PR' => 'E02006799',
        '2PS' => 'E02006799',
        '2PT' => 'E02006799',
        '2PU' => 'E02006799',
        '2PW' => 'E02000009',
        '2PX' => 'E02006799',
        '2QA' => 'E02006799',
        '2QB' => 'E02006799',
        '2QD' => 'E02006799',
        '2QH' => 'E02006799',
        '2QJ' => 'E02006799',
        '2QL' => 'E02006799',
        '2QP' => 'E02006799',
        '2QQ' => 'E02000008',
        '2QR' => 'E02006799',
        '2QS' => 'E02000009',
        '2QT' => 'E02000009',
        '2QU' => 'E02006799',
        '2QW' => 'E02006799',
        '2QX' => 'E02006799',
        '2RA' => 'E02006799',
        '2RB' => 'E02006799',
        '2RD' => 'E02000009',
        '2RE' => 'E02000009',
        '2RG' => 'E02000009',
        '2RH' => 'E02000009',
        '2RJ' => 'E02000009',
        '2RL' => 'E02000009',
        '2RN' => 'E02000009',
        '2RP' => 'E02000009',
        '2RR' => 'E02000009',
        '2RS' => 'E02000009',
        '2RT' => 'E02000009',
        '2RU' => 'E02000009',
        '2RX' => 'E02000009',
        '2SA' => 'E02006799',
        '2SB' => 'E02000009',
        '2SD' => 'E02000009',
        '2SE' => 'E02000009',
        '2SH' => 'E02000009',
        '2SJ' => 'E02006799',
        '2SL' => 'E02006799',
        '2SN' => 'E02000009',
        '2SP' => 'E02006799',
        '2SR' => 'E02000009',
        '2SS' => 'E02000009',
        '2ST' => 'E02000009',
        '2SU' => 'E02000009',
        '2SX' => 'E02006799',
        '2TA' => 'E02006799',
        '2TB' => 'E02006799',
        '2TD' => 'E02006799',
        '2TE' => 'E02006799',
        '2TL' => 'E02006799',
        '2TN' => 'E02006799',
        '2TP' => 'E02006799',
        '2TR' => 'E02006799',
        '2TS' => 'E02000009',
        '2TT' => 'E02000009',
        '2TU' => 'E02000009',
        '2TX' => 'E02000009',
        '2TY' => 'E02000009',
        '2UA' => 'E02000009',
        '2UB' => 'E02000009',
        '2UD' => 'E02000009',
        '2UH' => 'E02000009',
        '2UJ' => 'E02000009',
        '2UL' => 'E02000009',
        '2UN' => 'E02000009',
        '2UP' => 'E02000009',
        '2UR' => 'E02000009',
        '2UT' => 'E02006799',
        '2UU' => 'E02006799',
        '2UW' => 'E02000009',
        '2UX' => 'E02000009',
        '2WA' => 'E02000008',
        '2WB' => 'E02000009',
        '2WD' => 'E02000008',
        '2WE' => 'E02000008',
        '2WF' => 'E02000008',
        '2WG' => 'E02000008',
        '2WH' => 'E02000008',
        '2WN' => 'E02000008',
        '2WP' => 'E02000009',
        '2WQ' => 'E02000008',
        '2WR' => 'E02000008',
        '2WS' => 'E02000008',
        '2WT' => 'E02000008',
        '2WU' => 'E02000008',
        '2WW' => 'E02000008',
        '2WX' => 'E02000009',
        '2WY' => 'E02000008',
        '2WZ' => 'E02000009',
        '2XB' => 'E02000009',
        '2XD' => 'E02000009',
        '2XE' => 'E02000008',
        '2XG' => 'E02000009',
        '2XH' => 'E02000009',
        '2XJ' => 'E02000009',
        '2XL' => 'E02000009',
        '2XP' => 'E02000009',
        '2XR' => 'E02000009',
        '2XS' => 'E02000009',
        '2XT' => 'E02000009',
        '2XX' => 'E02000008',
        '2XZ' => 'E02000008',
        '2YA' => 'E02000013',
        '2YB' => 'E02000009',
        '2YD' => 'E02000009',
        '2YE' => 'E02000008',
        '2YF' => 'E02000008',
        '2YH' => 'E02000013',
        '2YJ' => 'E02000009',
        '2YL' => 'E02000009',
        '2YP' => 'E02000009',
        '2YR' => 'E02000009',
        '2YS' => 'E02000013',
        '2YT' => 'E02000013',
        '2YU' => 'E02000013',
        '2YW' => 'E02000008',
        '2YX' => 'E02000013',
        '2YZ' => 'E02000008',
        '2ZE' => 'E02000013',
        '3AA' => 'E02000008',
        '3AB' => 'E02000008',
        '3AD' => 'E02000005',
        '3AE' => 'E02000008',
        '3AF' => 'E02000008',
        '3AG' => 'E02000008',
        '3AH' => 'E02000008',
        '3AJ' => 'E02000008',
        '3AL' => 'E02000008',
        '3AN' => 'E02000008',
        '3AP' => 'E02000008',
        '3AQ' => 'E02000008',
        '3AR' => 'E02000008',
        '3AS' => 'E02000008',
        '3AT' => 'E02000008',
        '3AU' => 'E02000008',
        '3AW' => 'E02000008',
        '3AX' => 'E02000008',
        '3AY' => 'E02000008',
        '3AZ' => 'E02000008',
        '3BA' => 'E02000008',
        '3BB' => 'E02000008',
        '3BD' => 'E02006799',
        '3BE' => 'E02006799',
        '3BF' => 'E02000008',
        '3BG' => 'E02000008',
        '3BH' => 'E02006799',
        '3BJ' => 'E02000008',
        '3BL' => 'E02000008',
        '3BP' => 'E02000008',
        '3BS' => 'E02000008',
        '3BT' => 'E02000005',
        '3BU' => 'E02000008',
        '3BW' => 'E02000008',
        '3BX' => 'E02006799',
        '3BZ' => 'E02000008',
        '3DA' => 'E02000005',
        '3DB' => 'E02000005',
        '3DD' => 'E02000005',
        '3DF' => 'E02006799',
        '3DG' => 'E02006799',
        '3DH' => 'E02000005',
        '3DJ' => 'E02000005',
        '3DL' => 'E02000005',
        '3DP' => 'E02000005',
        '3DR' => 'E02000005',
        '3DS' => 'E02000005',
        '3DT' => 'E02000005',
        '3DU' => 'E02000005',
        '3DX' => 'E02000005',
        '3EA' => 'E02000005',
        '3EB' => 'E02000005',
        '3ED' => 'E02000005',
        '3EH' => 'E02000005',
        '3EJ' => 'E02000005',
        '3EL' => 'E02000005',
        '3EN' => 'E02000005',
        '3EP' => 'E02000008',
        '3ER' => 'E02000008',
        '3ES' => 'E02000008',
        '3ET' => 'E02000008',
        '3EU' => 'E02000005',
        '3EX' => 'E02000005',
        '3FZ' => 'E02000008',
        '3GL' => 'E02000008',
        '3HA' => 'E02000005',
        '3HB' => 'E02000005',
        '3HD' => 'E02000005',
        '3HH' => 'E02000005',
        '3HJ' => 'E02000005',
        '3HL' => 'E02000005',
        '3HP' => 'E02000005',
        '3HR' => 'E02000005',
        '3HS' => 'E02000008',
        '3HT' => 'E02000008',
        '3HU' => 'E02000008',
        '3HX' => 'E02000008',
        '3JA' => 'E02006799',
        '3JB' => 'E02000008',
        '3JD' => 'E02000005',
        '3JH' => 'E02006799',
        '3JJ' => 'E02006799',
        '3JL' => 'E02000005',
        '3JP' => 'E02000005',
        '3JR' => 'E02000005',
        '3JU' => 'E02000008',
        '3JX' => 'E02000008',
        '3LA' => 'E02000008',
        '3LB' => 'E02000008',
        '3LD' => 'E02000008',
        '3LE' => 'E02000008',
        '3LF' => 'E02000008',
        '3LH' => 'E02000008',
        '3LJ' => 'E02000008',
        '3LP' => 'E02000008',
        '3LR' => 'E02000008',
        '3LS' => 'E02000008',
        '3LT' => 'E02000008',
        '3LU' => 'E02000008',
        '3LX' => 'E02000008',
        '3LZ' => 'E02000008',
        '3NA' => 'E02000008',
        '3NB' => 'E02000008',
        '3ND' => 'E02000008',
        '3NF' => 'E02000008',
        '3NH' => 'E02000008',
        '3NJ' => 'E02000008',
        '3NL' => 'E02000008',
        '3NP' => 'E02000008',
        '3NR' => 'E02000005',
        '3NS' => 'E02000005',
        '3NT' => 'E02000005',
        '3NU' => 'E02000005',
        '3PA' => 'E02000005',
        '3PB' => 'E02000005',
        '3PD' => 'E02000005',
        '3PH' => 'E02000005',
        '3PJ' => 'E02000005',
        '3PL' => 'E02000005',
        '3PP' => 'E02000005',
        '3PR' => 'E02000005',
        '3PS' => 'E02000005',
        '3PT' => 'E02000005',
        '3PU' => 'E02000005',
        '3QA' => 'E02000005',
        '3QD' => 'E02000008',
        '3QH' => 'E02000008',
        '3QJ' => 'E02000008',
        '3QL' => 'E02000008',
        '3QP' => 'E02000008',
        '3QR' => 'E02000008',
        '3QS' => 'E02006799',
        '3QT' => 'E02000008',
        '3QU' => 'E02000008',
        '3QX' => 'E02006799',
        '3RA' => 'E02006799',
        '3RB' => 'E02000008',
        '3RD' => 'E02000008',
        '3RH' => 'E02000008',
        '3RP' => 'E02006799',
        '3RR' => 'E02006799',
        '3RS' => 'E02006799',
        '3RT' => 'E02006799',
        '3RU' => 'E02006799',
        '3RX' => 'E02006799',
        '3SA' => 'E02006799',
        '3SH' => 'E02000008',
        '3SJ' => 'E02000008',
        '3SL' => 'E02000008',
        '3SP' => 'E02000008',
        '3SR' => 'E02000008',
        '3SS' => 'E02006799',
        '3ST' => 'E02006799',
        '3TX' => 'E02006799',
        '3TY' => 'E02006799',
        '3UA' => 'E02006799',
        '3UB' => 'E02006799',
        '3UD' => 'E02006799',
        '3UH' => 'E02006799',
        '3UJ' => 'E02006799',
        '3UL' => 'E02006799',
        '3UP' => 'E02006799',
        '3UR' => 'E02006799',
        '3UT' => 'E02006799',
        '3UU' => 'E02006799',
        '3UX' => 'E02000008',
        '3WA' => 'E02000008',
        '3WB' => 'E02000008',
        '3WD' => 'E02000008',
        '3WE' => 'E02000008',
        '3WF' => 'E02000008',
        '3WW' => 'E02000008',
        '3WX' => 'E02000008',
        '3WY' => 'E02000008',
        '3WZ' => 'E02000008',
        '3XA' => 'E02000008',
        '3XB' => 'E02000008',
        '3XD' => 'E02000008',
        '3XH' => 'E02000008',
        '3XJ' => 'E02000008',
        '3XL' => 'E02000008',
        '3XP' => 'E02006799',
        '3XR' => 'E02006799',
        '3XS' => 'E02006799',
        '3XT' => 'E02006799',
        '3XU' => 'E02006799',
        '3XX' => 'E02006799',
        '3YA' => 'E02006799',
        '3YB' => 'E02000008',
        '3YD' => 'E02006799',
        '3YH' => 'E02000008',
        '3YJ' => 'E02000008',
        '3YL' => 'E02000008',
        '3YP' => 'E02006799',
        '3YQ' => 'E02000008',
        '3YZ' => 'E02000008',
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
