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
final class KT15
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02006399',
        '1AB' => 'E02006399',
        '1AD' => 'E02006399',
        '1AE' => 'E02006399',
        '1AF' => 'E02006399',
        '1AG' => 'E02006399',
        '1AH' => 'E02006399',
        '1AJ' => 'E02006399',
        '1AL' => 'E02006399',
        '1AN' => 'E02006401',
        '1AP' => 'E02006401',
        '1AQ' => 'E02006399',
        '1AR' => 'E02006401',
        '1AS' => 'E02006399',
        '1AT' => 'E02006399',
        '1AU' => 'E02006399',
        '1AW' => 'E02006401',
        '1AX' => 'E02006399',
        '1AY' => 'E02006399',
        '1AZ' => 'E02006401',
        '1BA' => 'E02006401',
        '1BB' => 'E02006399',
        '1BD' => 'E02006399',
        '1BE' => 'E02006401',
        '1BF' => 'E02006401',
        '1BG' => 'E02006401',
        '1BH' => 'E02006399',
        '1BJ' => 'E02006401',
        '1BL' => 'E02006401',
        '1BN' => 'E02006401',
        '1BP' => 'E02006399',
        '1BQ' => 'E02006401',
        '1BS' => 'E02006399',
        '1BT' => 'E02006399',
        '1BU' => 'E02006399',
        '1BW' => 'E02006401',
        '1BX' => 'E02006399',
        '1BY' => 'E02006399',
        '1BZ' => 'E02006399',
        '1DA' => 'E02006399',
        '1DB' => 'E02006401',
        '1DD' => 'E02006401',
        '1DE' => 'E02006399',
        '1DF' => 'E02006401',
        '1DG' => 'E02006401',
        '1DH' => 'E02006401',
        '1DJ' => 'E02006401',
        '1DL' => 'E02006401',
        '1DN' => 'E02006401',
        '1DP' => 'E02006401',
        '1DQ' => 'E02006401',
        '1DR' => 'E02006401',
        '1DS' => 'E02006401',
        '1DT' => 'E02006401',
        '1DU' => 'E02006401',
        '1DW' => 'E02006401',
        '1DX' => 'E02006401',
        '1DY' => 'E02006401',
        '1DZ' => 'E02006401',
        '1EA' => 'E02006401',
        '1EB' => 'E02006401',
        '1ED' => 'E02006401',
        '1EE' => 'E02006401',
        '1EF' => 'E02006401',
        '1EG' => 'E02006401',
        '1EH' => 'E02006401',
        '1EJ' => 'E02006401',
        '1EL' => 'E02006401',
        '1EN' => 'E02006401',
        '1EP' => 'E02006401',
        '1EQ' => 'E02006401',
        '1ER' => 'E02006401',
        '1ES' => 'E02006401',
        '1ET' => 'E02006401',
        '1EU' => 'E02006399',
        '1EW' => 'E02006401',
        '1EX' => 'E02006401',
        '1EY' => 'E02006401',
        '1EZ' => 'E02006401',
        '1FA' => 'E02006401',
        '1FB' => 'E02006399',
        '1FD' => 'E02006401',
        '1FE' => 'E02006401',
        '1FF' => 'E02006401',
        '1FG' => 'E02006401',
        '1FH' => 'E02006401',
        '1FJ' => 'E02006401',
        '1FL' => 'E02006401',
        '1FN' => 'E02006401',
        '1FP' => 'E02006401',
        '1FR' => 'E02006401',
        '1HA' => 'E02006401',
        '1HB' => 'E02006401',
        '1HD' => 'E02006401',
        '1HF' => 'E02006401',
        '1HH' => 'E02006401',
        '1HJ' => 'E02006401',
        '1HL' => 'E02006401',
        '1HN' => 'E02006401',
        '1HP' => 'E02006401',
        '1HQ' => 'E02006401',
        '1HU' => 'E02006401',
        '1HW' => 'E02006401',
        '1HX' => 'E02006401',
        '1HY' => 'E02006401',
        '1HZ' => 'E02006401',
        '1JA' => 'E02006401',
        '1JB' => 'E02006401',
        '1JD' => 'E02006401',
        '1JE' => 'E02006401',
        '1JF' => 'E02006401',
        '1JG' => 'E02006401',
        '1JH' => 'E02006401',
        '1JJ' => 'E02006401',
        '1JL' => 'E02006401',
        '1JN' => 'E02006401',
        '1JP' => 'E02006401',
        '1JQ' => 'E02006401',
        '1JR' => 'E02006401',
        '1JS' => 'E02006401',
        '1JT' => 'E02006401',
        '1JU' => 'E02006401',
        '1JW' => 'E02006401',
        '1JX' => 'E02006401',
        '1JY' => 'E02006401',
        '1JZ' => 'E02006401',
        '1LA' => 'E02006401',
        '1LB' => 'E02006401',
        '1LD' => 'E02006401',
        '1LE' => 'E02006401',
        '1LF' => 'E02006401',
        '1LG' => 'E02006401',
        '1LH' => 'E02006401',
        '1LJ' => 'E02006401',
        '1LL' => 'E02006401',
        '1LN' => 'E02006401',
        '1LP' => 'E02006401',
        '1LQ' => 'E02006401',
        '1LR' => 'E02006401',
        '1LS' => 'E02006401',
        '1LT' => 'E02006401',
        '1LU' => 'E02006401',
        '1LW' => 'E02006401',
        '1LX' => 'E02006401',
        '1LY' => 'E02006401',
        '1LZ' => 'E02006401',
        '1NA' => 'E02006401',
        '1NB' => 'E02006401',
        '1ND' => 'E02006401',
        '1NE' => 'E02006401',
        '1NF' => 'E02006401',
        '1NG' => 'E02006401',
        '1NH' => 'E02006401',
        '1NJ' => 'E02006401',
        '1NL' => 'E02006401',
        '1NN' => 'E02006401',
        '1NP' => 'E02006401',
        '1NQ' => 'E02006401',
        '1NR' => 'E02006401',
        '1NS' => 'E02006401',
        '1NT' => 'E02006401',
        '1NU' => 'E02006399',
        '1NW' => 'E02006401',
        '1NX' => 'E02006399',
        '1NY' => 'E02006401',
        '1NZ' => 'E02006401',
        '1PE' => 'E02006401',
        '1PF' => 'E02006401',
        '1PG' => 'E02006401',
        '1PH' => 'E02006401',
        '1PJ' => 'E02006401',
        '1PL' => 'E02006401',
        '1PN' => 'E02006401',
        '1PP' => 'E02006401',
        '1PQ' => 'E02006401',
        '1PR' => 'E02006401',
        '1PS' => 'E02006401',
        '1PT' => 'E02006401',
        '1PU' => 'E02006401',
        '1PW' => 'E02006401',
        '1PX' => 'E02006401',
        '1QA' => 'E02006399',
        '1QB' => 'E02006399',
        '1QD' => 'E02006399',
        '1QE' => 'E02006399',
        '1QF' => 'E02006399',
        '1QG' => 'E02006399',
        '1QH' => 'E02006399',
        '1QJ' => 'E02006399',
        '1QL' => 'E02006399',
        '1QN' => 'E02006399',
        '1QP' => 'E02006399',
        '1QQ' => 'E02006399',
        '1QR' => 'E02006399',
        '1QS' => 'E02006399',
        '1QT' => 'E02006399',
        '1QU' => 'E02006399',
        '1QW' => 'E02006399',
        '1QX' => 'E02006399',
        '1QY' => 'E02006399',
        '1QZ' => 'E02006399',
        '1RB' => 'E02006401',
        '1RD' => 'E02006399',
        '1RE' => 'E02006399',
        '1RF' => 'E02006401',
        '1RH' => 'E02006401',
        '1RJ' => 'E02006399',
        '1RL' => 'E02006401',
        '1RN' => 'E02006399',
        '1RP' => 'E02006399',
        '1RR' => 'E02006401',
        '1RS' => 'E02006401',
        '1RT' => 'E02006399',
        '1RU' => 'E02006401',
        '1RW' => 'E02006401',
        '1RX' => 'E02006401',
        '1RY' => 'E02006401',
        '1RZ' => 'E02006401',
        '1SA' => 'E02006401',
        '1SB' => 'E02006401',
        '1SD' => 'E02006401',
        '1SE' => 'E02006399',
        '1SF' => 'E02006401',
        '1SG' => 'E02006399',
        '1SH' => 'E02006401',
        '1SJ' => 'E02006399',
        '1SL' => 'E02006401',
        '1SN' => 'E02006401',
        '1SP' => 'E02006401',
        '1SQ' => 'E02006399',
        '1SR' => 'E02006401',
        '1SS' => 'E02006401',
        '1ST' => 'E02006401',
        '1SU' => 'E02006401',
        '1SW' => 'E02006401',
        '1SX' => 'E02006401',
        '1SY' => 'E02006401',
        '1TA' => 'E02006399',
        '1TB' => 'E02006399',
        '1TD' => 'E02006399',
        '1TE' => 'E02006399',
        '1TF' => 'E02006399',
        '1TG' => 'E02006399',
        '1TH' => 'E02006399',
        '1TJ' => 'E02006399',
        '1TL' => 'E02006399',
        '1TN' => 'E02006399',
        '1TP' => 'E02006399',
        '1TQ' => 'E02006399',
        '1TR' => 'E02006399',
        '1TS' => 'E02006399',
        '1TT' => 'E02006399',
        '1TU' => 'E02006399',
        '1TW' => 'E02006399',
        '1TX' => 'E02006399',
        '1TY' => 'E02006399',
        '1TZ' => 'E02006399',
        '1UA' => 'E02006399',
        '1UB' => 'E02006399',
        '1UD' => 'E02006399',
        '1UE' => 'E02006399',
        '1UF' => 'E02006399',
        '1UG' => 'E02006399',
        '1UH' => 'E02006399',
        '1UJ' => 'E02006399',
        '1UL' => 'E02006399',
        '1UN' => 'E02006399',
        '1UP' => 'E02006399',
        '1UQ' => 'E02006399',
        '1UR' => 'E02006401',
        '1UT' => 'E02006401',
        '1UU' => 'E02006401',
        '1UW' => 'E02006399',
        '1UX' => 'E02006401',
        '1UY' => 'E02006401',
        '1UZ' => 'E02006401',
        '1WA' => 'E02006401',
        '1WB' => 'E02006401',
        '1WE' => 'E02006401',
        '1WG' => 'E02006401',
        '1WQ' => 'E02006401',
        '1WT' => 'E02006401',
        '1WY' => 'E02006401',
        '1WZ' => 'E02006401',
        '1XB' => 'E02006401',
        '1XT' => 'E02006401',
        '1XZ' => 'E02006401',
        '1YA' => 'E02006401',
        '1YB' => 'E02006401',
        '1YD' => 'E02006401',
        '1YE' => 'E02006401',
        '1YF' => 'E02006401',
        '1YG' => 'E02006401',
        '1YH' => 'E02006401',
        '1YJ' => 'E02006401',
        '1YL' => 'E02006401',
        '1YN' => 'E02006401',
        '1YP' => 'E02006401',
        '1YQ' => 'E02006401',
        '1YR' => 'E02006401',
        '1YS' => 'E02006401',
        '1YT' => 'E02006401',
        '1YU' => 'E02006401',
        '1YW' => 'E02006401',
        '1YX' => 'E02006401',
        '1YY' => 'E02006401',
        '1YZ' => 'E02006401',
        '1ZY' => 'E02006401',
        '2AA' => 'E02006401',
        '2AB' => 'E02006401',
        '2AD' => 'E02006401',
        '2AE' => 'E02006401',
        '2AF' => 'E02006401',
        '2AG' => 'E02006401',
        '2AH' => 'E02006401',
        '2AJ' => 'E02006399',
        '2AL' => 'E02006399',
        '2AN' => 'E02006399',
        '2AP' => 'E02006399',
        '2AQ' => 'E02006401',
        '2AR' => 'E02006399',
        '2AS' => 'E02006399',
        '2AT' => 'E02006399',
        '2AU' => 'E02006399',
        '2AW' => 'E02006399',
        '2AX' => 'E02006399',
        '2AY' => 'E02006399',
        '2AZ' => 'E02006399',
        '2BA' => 'E02006399',
        '2BB' => 'E02006399',
        '2BD' => 'E02006401',
        '2BE' => 'E02006401',
        '2BF' => 'E02006402',
        '2BG' => 'E02006401',
        '2BH' => 'E02006399',
        '2BJ' => 'E02006401',
        '2BL' => 'E02006399',
        '2BN' => 'E02006399',
        '2BP' => 'E02006399',
        '2BQ' => 'E02006401',
        '2BT' => 'E02006401',
        '2BU' => 'E02006401',
        '2BW' => 'E02006399',
        '2BX' => 'E02006401',
        '2BY' => 'E02006401',
        '2BZ' => 'E02006401',
        '2DA' => 'E02006402',
        '2DB' => 'E02006401',
        '2DD' => 'E02006402',
        '2DE' => 'E02006402',
        '2DF' => 'E02006402',
        '2DG' => 'E02006402',
        '2DH' => 'E02006402',
        '2DJ' => 'E02006399',
        '2DL' => 'E02006399',
        '2DN' => 'E02006402',
        '2DP' => 'E02006402',
        '2DQ' => 'E02006402',
        '2DR' => 'E02006402',
        '2DS' => 'E02006402',
        '2DT' => 'E02006402',
        '2DU' => 'E02006399',
        '2DW' => 'E02006402',
        '2DX' => 'E02006399',
        '2DY' => 'E02006401',
        '2DZ' => 'E02006399',
        '2EA' => 'E02006399',
        '2EB' => 'E02006399',
        '2ED' => 'E02006399',
        '2EE' => 'E02006399',
        '2EF' => 'E02006399',
        '2EG' => 'E02006399',
        '2EH' => 'E02006399',
        '2EJ' => 'E02006399',
        '2EL' => 'E02006399',
        '2EN' => 'E02006399',
        '2EP' => 'E02006399',
        '2EQ' => 'E02006399',
        '2ER' => 'E02006399',
        '2ES' => 'E02006399',
        '2ET' => 'E02006399',
        '2EU' => 'E02006399',
        '2EW' => 'E02006399',
        '2EX' => 'E02006399',
        '2EY' => 'E02006399',
        '2EZ' => 'E02006399',
        '2FA' => 'E02006399',
        '2FB' => 'E02006401',
        '2FD' => 'E02006399',
        '2FF' => 'E02006399',
        '2FG' => 'E02006399',
        '2FH' => 'E02006399',
        '2FJ' => 'E02006399',
        '2FL' => 'E02006399',
        '2FP' => 'E02006399',
        '2FR' => 'E02006399',
        '2FS' => 'E02006399',
        '2FT' => 'E02006399',
        '2FU' => 'E02006399',
        '2FW' => 'E02006399',
        '2FX' => 'E02006399',
        '2FZ' => 'E02006401',
        '2GA' => 'E02006401',
        '2GB' => 'E02006401',
        '2GD' => 'E02006401',
        '2GE' => 'E02006401',
        '2GF' => 'E02006401',
        '2GG' => 'E02006399',
        '2GH' => 'E02006399',
        '2GJ' => 'E02006399',
        '2GL' => 'E02006401',
        '2GN' => 'E02006401',
        '2GP' => 'E02006399',
        '2GQ' => 'E02006401',
        '2GR' => 'E02006402',
        '2GS' => 'E02006399',
        '2GT' => 'E02006399',
        '2GU' => 'E02006399',
        '2GW' => 'E02006399',
        '2GX' => 'E02006401',
        '2GY' => 'E02006399',
        '2GZ' => 'E02006399',
        '2HA' => 'E02006399',
        '2HB' => 'E02006399',
        '2HD' => 'E02006399',
        '2HE' => 'E02006399',
        '2HF' => 'E02006399',
        '2HG' => 'E02006399',
        '2HH' => 'E02006399',
        '2HJ' => 'E02006399',
        '2HL' => 'E02006399',
        '2HN' => 'E02006399',
        '2HP' => 'E02006401',
        '2HQ' => 'E02006399',
        '2HR' => 'E02006401',
        '2HS' => 'E02006401',
        '2HT' => 'E02006401',
        '2HU' => 'E02006401',
        '2HW' => 'E02006401',
        '2HX' => 'E02006401',
        '2HY' => 'E02006399',
        '2HZ' => 'E02006399',
        '2JA' => 'E02006399',
        '2JB' => 'E02006399',
        '2JD' => 'E02006401',
        '2JE' => 'E02006399',
        '2JF' => 'E02006399',
        '2JG' => 'E02006401',
        '2JH' => 'E02006401',
        '2JJ' => 'E02006399',
        '2JL' => 'E02006401',
        '2JN' => 'E02006401',
        '2JP' => 'E02006401',
        '2JQ' => 'E02006401',
        '2JR' => 'E02006401',
        '2JS' => 'E02006401',
        '2JT' => 'E02006401',
        '2JU' => 'E02006399',
        '2JW' => 'E02006401',
        '2JX' => 'E02006401',
        '2JY' => 'E02006401',
        '2JZ' => 'E02006401',
        '2LB' => 'E02006401',
        '2LD' => 'E02006401',
        '2LE' => 'E02006399',
        '2LF' => 'E02006401',
        '2LG' => 'E02006401',
        '2LH' => 'E02006401',
        '2LJ' => 'E02006401',
        '2LL' => 'E02006401',
        '2LN' => 'E02006401',
        '2LP' => 'E02006401',
        '2LQ' => 'E02006401',
        '2LR' => 'E02006401',
        '2LS' => 'E02006401',
        '2LT' => 'E02006401',
        '2LU' => 'E02006401',
        '2LW' => 'E02006401',
        '2LX' => 'E02006401',
        '2LY' => 'E02006401',
        '2LZ' => 'E02006401',
        '2NA' => 'E02006401',
        '2NB' => 'E02006401',
        '2ND' => 'E02006401',
        '2NE' => 'E02006401',
        '2NF' => 'E02006401',
        '2NG' => 'E02006401',
        '2NH' => 'E02006401',
        '2NJ' => 'E02006401',
        '2NL' => 'E02006401',
        '2NN' => 'E02006401',
        '2NP' => 'E02006401',
        '2NQ' => 'E02006401',
        '2NR' => 'E02006401',
        '2NS' => 'E02006401',
        '2NT' => 'E02006399',
        '2NU' => 'E02006401',
        '2NW' => 'E02006401',
        '2NX' => 'E02006399',
        '2NY' => 'E02006399',
        '2NZ' => 'E02006399',
        '2PA' => 'E02006401',
        '2PB' => 'E02006399',
        '2PD' => 'E02006401',
        '2PE' => 'E02006401',
        '2PF' => 'E02006401',
        '2PG' => 'E02006399',
        '2PH' => 'E02006401',
        '2PJ' => 'E02006399',
        '2PL' => 'E02006401',
        '2PN' => 'E02006399',
        '2PP' => 'E02006399',
        '2PQ' => 'E02006401',
        '2PR' => 'E02006399',
        '2PS' => 'E02006401',
        '2PT' => 'E02006401',
        '2PU' => 'E02006401',
        '2PW' => 'E02006399',
        '2PX' => 'E02006399',
        '2PY' => 'E02006401',
        '2PZ' => 'E02006401',
        '2QA' => 'E02006399',
        '2QB' => 'E02006399',
        '2QD' => 'E02006399',
        '2QE' => 'E02006399',
        '2QF' => 'E02006399',
        '2QG' => 'E02006399',
        '2QH' => 'E02006399',
        '2QJ' => 'E02006399',
        '2QL' => 'E02006399',
        '2QN' => 'E02006399',
        '2QP' => 'E02006399',
        '2QQ' => 'E02006399',
        '2QR' => 'E02006399',
        '2QS' => 'E02006399',
        '2QT' => 'E02006399',
        '2QU' => 'E02006399',
        '2QW' => 'E02006399',
        '2QX' => 'E02006399',
        '2QY' => 'E02006399',
        '2QZ' => 'E02006399',
        '2RA' => 'E02006399',
        '2RB' => 'E02006399',
        '2RD' => 'E02006399',
        '2RE' => 'E02006399',
        '2RF' => 'E02006399',
        '2RG' => 'E02006399',
        '2RH' => 'E02006399',
        '2RJ' => 'E02006399',
        '2RL' => 'E02006399',
        '2RN' => 'E02006401',
        '2RP' => 'E02006399',
        '2RQ' => 'E02006399',
        '2RR' => 'E02006399',
        '2RS' => 'E02006399',
        '2RT' => 'E02006399',
        '2RU' => 'E02006399',
        '2RW' => 'E02006399',
        '2RX' => 'E02006399',
        '2RY' => 'E02006401',
        '2RZ' => 'E02006399',
        '2SA' => 'E02006399',
        '2SB' => 'E02006399',
        '2SD' => 'E02006399',
        '2SE' => 'E02006399',
        '2SF' => 'E02006399',
        '2SG' => 'E02006401',
        '2SH' => 'E02006402',
        '2SJ' => 'E02006399',
        '2SL' => 'E02006399',
        '2SN' => 'E02006399',
        '2SP' => 'E02006399',
        '2SQ' => 'E02006401',
        '2SR' => 'E02006399',
        '2SS' => 'E02006399',
        '2ST' => 'E02006399',
        '2SU' => 'E02006399',
        '2SW' => 'E02006401',
        '2SX' => 'E02006399',
        '2SY' => 'E02006399',
        '2SZ' => 'E02006399',
        '2TA' => 'E02006401',
        '2TB' => 'E02006399',
        '2TD' => 'E02006399',
        '2TE' => 'E02006399',
        '2TF' => 'E02006399',
        '2TG' => 'E02006399',
        '2TH' => 'E02006399',
        '2TJ' => 'E02006399',
        '2TL' => 'E02006399',
        '2TN' => 'E02006399',
        '2TP' => 'E02006399',
        '2TQ' => 'E02006399',
        '2TR' => 'E02006399',
        '2TS' => 'E02006399',
        '2TT' => 'E02006399',
        '2TU' => 'E02006399',
        '2TW' => 'E02006399',
        '2TX' => 'E02006399',
        '2TY' => 'E02006399',
        '2TZ' => 'E02006399',
        '2UA' => 'E02006399',
        '2UB' => 'E02006399',
        '2UD' => 'E02006399',
        '2UE' => 'E02006399',
        '2UF' => 'E02006399',
        '2UG' => 'E02006399',
        '2UH' => 'E02006401',
        '2UJ' => 'E02006399',
        '2UL' => 'E02006399',
        '2UN' => 'E02006399',
        '2UP' => 'E02006399',
        '2UQ' => 'E02006399',
        '2UR' => 'E02006401',
        '2UT' => 'E02006399',
        '2UU' => 'E02006399',
        '2UX' => 'E02006399',
        '2UY' => 'E02006399',
        '2UZ' => 'E02006399',
        '2WA' => 'E02006401',
        '2WB' => 'E02006401',
        '2WD' => 'E02006401',
        '2WE' => 'E02006399',
        '2WF' => 'E02006401',
        '2WG' => 'E02006401',
        '2WH' => 'E02006401',
        '2WJ' => 'E02006401',
        '2WL' => 'E02006401',
        '2WN' => 'E02006399',
        '2WP' => 'E02006401',
        '2WQ' => 'E02006399',
        '2WR' => 'E02006401',
        '2WS' => 'E02006401',
        '2WT' => 'E02006401',
        '2WU' => 'E02006401',
        '2WW' => 'E02006401',
        '2WX' => 'E02006401',
        '2WY' => 'E02006401',
        '2WZ' => 'E02006401',
        '2XA' => 'E02006399',
        '2XB' => 'E02006399',
        '2XD' => 'E02006399',
        '2XE' => 'E02006399',
        '2XF' => 'E02006399',
        '2XG' => 'E02006399',
        '2XH' => 'E02006399',
        '2XJ' => 'E02006399',
        '2XL' => 'E02006399',
        '2XN' => 'E02006399',
        '2XP' => 'E02006399',
        '2XQ' => 'E02006399',
        '2XR' => 'E02006399',
        '2XS' => 'E02006399',
        '2XT' => 'E02006401',
        '2XU' => 'E02006399',
        '2XW' => 'E02006399',
        '2XY' => 'E02006399',
        '2XZ' => 'E02006401',
        '2YA' => 'E02006401',
        '2YB' => 'E02006401',
        '2YD' => 'E02006399',
        '2YE' => 'E02006401',
        '2YF' => 'E02006401',
        '2YG' => 'E02006399',
        '2YH' => 'E02006401',
        '2YJ' => 'E02006399',
        '2YL' => 'E02006401',
        '2YN' => 'E02006401',
        '2YP' => 'E02006399',
        '2YQ' => 'E02006401',
        '2YR' => 'E02006399',
        '2YS' => 'E02006399',
        '2YT' => 'E02006399',
        '2YU' => 'E02006401',
        '2YW' => 'E02006401',
        '2YY' => 'E02006399',
        '2YZ' => 'E02006401',
        '3AA' => 'E02006402',
        '3AB' => 'E02006402',
        '3AD' => 'E02006402',
        '3AE' => 'E02006458',
        '3AF' => 'E02006402',
        '3AG' => 'E02006402',
        '3AH' => 'E02006402',
        '3AJ' => 'E02006402',
        '3AL' => 'E02006402',
        '3AN' => 'E02006402',
        '3AP' => 'E02006402',
        '3AQ' => 'E02006402',
        '3AR' => 'E02006402',
        '3AS' => 'E02006402',
        '3AT' => 'E02006402',
        '3AU' => 'E02006402',
        '3AW' => 'E02006402',
        '3AX' => 'E02006402',
        '3AY' => 'E02006402',
        '3AZ' => 'E02006402',
        '3BA' => 'E02006402',
        '3BB' => 'E02006402',
        '3BD' => 'E02006402',
        '3BE' => 'E02006402',
        '3BF' => 'E02006402',
        '3BG' => 'E02006402',
        '3BH' => 'E02006402',
        '3BJ' => 'E02006402',
        '3BL' => 'E02006402',
        '3BN' => 'E02006402',
        '3BP' => 'E02006402',
        '3BQ' => 'E02006402',
        '3BS' => 'E02006402',
        '3BT' => 'E02006402',
        '3BU' => 'E02006402',
        '3BW' => 'E02006402',
        '3BX' => 'E02006402',
        '3BY' => 'E02006402',
        '3BZ' => 'E02006402',
        '3DA' => 'E02006402',
        '3DB' => 'E02006402',
        '3DD' => 'E02006458',
        '3DE' => 'E02006402',
        '3DG' => 'E02006402',
        '3DH' => 'E02006402',
        '3DJ' => 'E02006402',
        '3DL' => 'E02006402',
        '3DN' => 'E02006402',
        '3DP' => 'E02006402',
        '3DQ' => 'E02006402',
        '3DR' => 'E02006402',
        '3DS' => 'E02006402',
        '3DT' => 'E02006402',
        '3DU' => 'E02006402',
        '3DW' => 'E02006402',
        '3DX' => 'E02006402',
        '3DY' => 'E02006402',
        '3DZ' => 'E02006402',
        '3EA' => 'E02006402',
        '3EB' => 'E02006402',
        '3ED' => 'E02006402',
        '3EE' => 'E02006402',
        '3EF' => 'E02006402',
        '3EG' => 'E02006402',
        '3EH' => 'E02006402',
        '3EQ' => 'E02006402',
        '3ES' => 'E02006402',
        '3ET' => 'E02006402',
        '3EU' => 'E02006402',
        '3EX' => 'E02006402',
        '3EY' => 'E02006402',
        '3EZ' => 'E02006402',
        '3HA' => 'E02006402',
        '3HB' => 'E02006402',
        '3HD' => 'E02006402',
        '3HE' => 'E02006402',
        '3HF' => 'E02006402',
        '3HG' => 'E02006402',
        '3HH' => 'E02006402',
        '3HJ' => 'E02006402',
        '3HL' => 'E02006402',
        '3HN' => 'E02006402',
        '3HP' => 'E02006402',
        '3HQ' => 'E02006402',
        '3HR' => 'E02006402',
        '3HS' => 'E02006402',
        '3HT' => 'E02006402',
        '3HU' => 'E02006402',
        '3HW' => 'E02006402',
        '3HX' => 'E02006402',
        '3JB' => 'E02006402',
        '3JD' => 'E02006402',
        '3JE' => 'E02006402',
        '3JF' => 'E02006402',
        '3JG' => 'E02006332',
        '3JH' => 'E02006402',
        '3JJ' => 'E02006402',
        '3JL' => 'E02006402',
        '3JN' => 'E02006402',
        '3JP' => 'E02006402',
        '3JQ' => 'E02006402',
        '3JR' => 'E02006402',
        '3JS' => 'E02006402',
        '3JT' => 'E02006402',
        '3JU' => 'E02006402',
        '3JW' => 'E02006402',
        '3JX' => 'E02006402',
        '3JY' => 'E02006402',
        '3JZ' => 'E02006402',
        '3LA' => 'E02006402',
        '3LB' => 'E02006402',
        '3LD' => 'E02006402',
        '3LE' => 'E02006402',
        '3LF' => 'E02006402',
        '3LG' => 'E02006402',
        '3LH' => 'E02006402',
        '3LJ' => 'E02006402',
        '3LL' => 'E02006402',
        '3LN' => 'E02006402',
        '3LP' => 'E02006402',
        '3LQ' => 'E02006402',
        '3LS' => 'E02006402',
        '3LT' => 'E02006402',
        '3LU' => 'E02006401',
        '3LW' => 'E02006402',
        '3LX' => 'E02006402',
        '3LY' => 'E02006402',
        '3LZ' => 'E02006402',
        '3NA' => 'E02006402',
        '3NB' => 'E02006402',
        '3ND' => 'E02006402',
        '3NE' => 'E02006402',
        '3NF' => 'E02006402',
        '3NG' => 'E02006402',
        '3NH' => 'E02006402',
        '3NJ' => 'E02006402',
        '3NL' => 'E02006402',
        '3NN' => 'E02006402',
        '3NP' => 'E02006402',
        '3NQ' => 'E02006402',
        '3NR' => 'E02006402',
        '3NS' => 'E02006402',
        '3NT' => 'E02006402',
        '3NU' => 'E02006402',
        '3NW' => 'E02006402',
        '3NX' => 'E02006402',
        '3NY' => 'E02006402',
        '3NZ' => 'E02006402',
        '3PA' => 'E02006402',
        '3PB' => 'E02006402',
        '3PD' => 'E02006402',
        '3PE' => 'E02006402',
        '3PF' => 'E02006402',
        '3PG' => 'E02006402',
        '3PH' => 'E02006401',
        '3PJ' => 'E02006402',
        '3PL' => 'E02006402',
        '3PN' => 'E02006402',
        '3PP' => 'E02006402',
        '3PQ' => 'E02006402',
        '3PR' => 'E02006402',
        '3PS' => 'E02006402',
        '3PT' => 'E02006402',
        '3PU' => 'E02006402',
        '3PW' => 'E02006402',
        '3PX' => 'E02006402',
        '3PY' => 'E02006402',
        '3PZ' => 'E02006402',
        '3QA' => 'E02006458',
        '3QB' => 'E02006458',
        '3QD' => 'E02006458',
        '3QE' => 'E02006402',
        '3QF' => 'E02006402',
        '3QG' => 'E02006402',
        '3QH' => 'E02006402',
        '3QJ' => 'E02006458',
        '3QL' => 'E02006458',
        '3QN' => 'E02006458',
        '3QP' => 'E02006458',
        '3QQ' => 'E02006402',
        '3QR' => 'E02006458',
        '3QW' => 'E02006458',
        '3RA' => 'E02006402',
        '3RB' => 'E02006402',
        '3RD' => 'E02006402',
        '3RE' => 'E02006402',
        '3RF' => 'E02006402',
        '3RG' => 'E02006402',
        '3RH' => 'E02006402',
        '3RJ' => 'E02006402',
        '3RL' => 'E02006402',
        '3RN' => 'E02006402',
        '3RP' => 'E02006402',
        '3RQ' => 'E02006402',
        '3RW' => 'E02006402',
        '3RZ' => 'E02006402',
        '3SA' => 'E02006402',
        '3SB' => 'E02006402',
        '3SD' => 'E02006402',
        '3SE' => 'E02006402',
        '3SF' => 'E02006402',
        '3SG' => 'E02006402',
        '3SH' => 'E02006402',
        '3SJ' => 'E02006402',
        '3SL' => 'E02006402',
        '3SN' => 'E02006402',
        '3SP' => 'E02006402',
        '3SQ' => 'E02006402',
        '3SR' => 'E02006402',
        '3SS' => 'E02006402',
        '3ST' => 'E02006402',
        '3SU' => 'E02006402',
        '3SW' => 'E02006402',
        '3SX' => 'E02006402',
        '3SY' => 'E02006402',
        '3SZ' => 'E02006402',
        '3TE' => 'E02006402',
        '3TF' => 'E02006402',
        '3TG' => 'E02006402',
        '3TH' => 'E02006402',
        '3TJ' => 'E02006402',
        '3TL' => 'E02006402',
        '3TN' => 'E02006402',
        '3TP' => 'E02006402',
        '3TQ' => 'E02006402',
        '3TR' => 'E02006402',
        '3TS' => 'E02006402',
        '3TT' => 'E02006402',
        '3TU' => 'E02006402',
        '3TW' => 'E02006402',
        '3TX' => 'E02006402',
        '3TY' => 'E02006402',
        '3TZ' => 'E02006402',
        '3UA' => 'E02006402',
        '3UB' => 'E02006402',
        '3UD' => 'E02006402',
        '3UL' => 'E02006402',
        '3UN' => 'E02006402',
        '3WA' => 'E02006401',
        '3WB' => 'E02006401',
        '3WD' => 'E02006401',
        '3WE' => 'E02006401',
        '3WF' => 'E02006402',
        '3WG' => 'E02006401',
        '3WH' => 'E02006402',
        '3WJ' => 'E02006402',
        '3WL' => 'E02006401',
        '3WN' => 'E02006402',
        '3WP' => 'E02006402',
        '3WQ' => 'E02006401',
        '3WR' => 'E02006401',
        '3WS' => 'E02006401',
        '3WT' => 'E02006401',
        '3WU' => 'E02006402',
        '3WW' => 'E02006401',
        '3WX' => 'E02006401',
        '3WY' => 'E02006401',
        '3WZ' => 'E02006401',
        '3XA' => 'E02006401',
        '3XB' => 'E02006401',
        '3XE' => 'E02006401',
        '3XF' => 'E02006401',
        '3XQ' => 'E02006401',
        '3XR' => 'E02006401',
        '3XT' => 'E02006401',
        '3YA' => 'E02006401',
        '3YB' => 'E02006401',
        '3YD' => 'E02006401',
        '3YE' => 'E02006401',
        '3YF' => 'E02006401',
        '3YG' => 'E02006402',
        '3YH' => 'E02006401',
        '3YJ' => 'E02006401',
        '3YL' => 'E02006401',
        '3YN' => 'E02006401',
        '3YP' => 'E02006401',
        '3YQ' => 'E02006401',
        '3YR' => 'E02006401',
        '3YS' => 'E02006401',
        '3YT' => 'E02006402',
        '3YU' => 'E02006402',
        '3YW' => 'E02006402',
        '3YX' => 'E02006401',
        '3YY' => 'E02006402',
        '3YZ' => 'E02006401',
        '9AA' => 'E02006401',
        '9AB' => 'E02006401',
        '9AD' => 'E02006401',
        '9AE' => 'E02006401',
        '9AF' => 'E02006401',
        '9AG' => 'E02006401',
        '9AH' => 'E02006401',
        '9AJ' => 'E02006401',
        '9AL' => 'E02006401',
        '9AN' => 'E02006401',
        '9AP' => 'E02006401',
        '9AQ' => 'E02006401',
        '9AR' => 'E02006401',
        '9AS' => 'E02006401',
        '9AT' => 'E02006401',
        '9AU' => 'E02006401',
        '9AW' => 'E02006401',
        '9AX' => 'E02006401',
        '9AY' => 'E02006401',
        '9AZ' => 'E02006401',
        '9BA' => 'E02006401',
        '9BB' => 'E02006401',
        '9BD' => 'E02006401',
        '9BE' => 'E02006401',
        '9BF' => 'E02006401',
        '9BG' => 'E02006401',
        '9BH' => 'E02006401',
        '9BJ' => 'E02006401',
        '9BL' => 'E02006401',
        '9BN' => 'E02006401',
        '9BP' => 'E02006401',
        '9BQ' => 'E02006401',
        '9BR' => 'E02006401',
        '9BS' => 'E02006401',
        '9BT' => 'E02006401',
        '9BU' => 'E02006401',
        '9BW' => 'E02006401',
        '9BX' => 'E02006401',
        '9BY' => 'E02006401',
        '9BZ' => 'E02006401',
        '9DA' => 'E02006401',
        '9DB' => 'E02006401',
        '9DD' => 'E02006401',
        '9DE' => 'E02006401',
        '9DF' => 'E02006401',
        '9DG' => 'E02006401',
        '9DH' => 'E02006401',
        '9DL' => 'E02006401',
        '9DN' => 'E02006401',
        '9DP' => 'E02006401',
        '9DQ' => 'E02006401',
        '9DR' => 'E02006401',
        '9DS' => 'E02006401',
        '9DT' => 'E02006401',
        '9DU' => 'E02006401',
        '9DW' => 'E02006401',
        '9DX' => 'E02006401',
        '9DY' => 'E02006401',
        '9DZ' => 'E02006401',
        '9EA' => 'E02006401',
        '9EB' => 'E02006401',
        '9ED' => 'E02006401',
        '9EE' => 'E02006401',
        '9EF' => 'E02006401',
        '9EG' => 'E02006401',
        '9EH' => 'E02006401',
        '9EJ' => 'E02006401',
        '9EL' => 'E02006401',
        '9EN' => 'E02006401',
        '9EP' => 'E02006401',
        '9EQ' => 'E02006401',
        '9ER' => 'E02006401',
        '9ES' => 'E02006401',
        '9ET' => 'E02006401',
        '9EU' => 'E02006401',
        '9EW' => 'E02006401',
        '9EX' => 'E02006401',
        '9EY' => 'E02006401',
        '9EZ' => 'E02006401',
        '9FA' => 'E02006401',
        '9SA' => 'E02006401',
        '9SB' => 'E02006401',
        '9SD' => 'E02006401',
        '9SE' => 'E02006401',
        '9SF' => 'E02006401',
        '9SG' => 'E02006401',
        '9SH' => 'E02006401',
        '9SJ' => 'E02006401',
        '9SL' => 'E02006401',
        '9SN' => 'E02006401',
        '9SP' => 'E02006401',
        '9SQ' => 'E02006401',
        '9SR' => 'E02006401',
        '9SS' => 'E02006401',
        '9ST' => 'E02006401',
        '9SU' => 'E02006401',
        '9SW' => 'E02006401',
        '9SX' => 'E02006401',
        '9SY' => 'E02006401',
        '9SZ' => 'E02006401',
        '9TA' => 'E02006401',
        '9ZY' => 'E02006401',
        '9ZZ' => 'E02006401',
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
