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
final class W1S
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02000972',
        '1AB' => 'E02000972',
        '1AD' => 'E02000972',
        '1AE' => 'E02000972',
        '1AF' => 'E02000972',
        '1AG' => 'E02000972',
        '1AH' => 'E02000972',
        '1AJ' => 'E02000972',
        '1AL' => 'E02000972',
        '1AN' => 'E02000972',
        '1AP' => 'E02000972',
        '1AQ' => 'E02000972',
        '1AR' => 'E02000972',
        '1AS' => 'E02000972',
        '1AT' => 'E02000972',
        '1AU' => 'E02000972',
        '1AW' => 'E02000972',
        '1AX' => 'E02000972',
        '1AY' => 'E02000972',
        '1AZ' => 'E02000972',
        '1BA' => 'E02000972',
        '1BB' => 'E02000972',
        '1BD' => 'E02000972',
        '1BE' => 'E02000972',
        '1BF' => 'E02000972',
        '1BG' => 'E02000972',
        '1BH' => 'E02000972',
        '1BJ' => 'E02000972',
        '1BL' => 'E02000972',
        '1BN' => 'E02000972',
        '1BP' => 'E02000972',
        '1BQ' => 'E02000972',
        '1BR' => 'E02000972',
        '1BS' => 'E02000972',
        '1BT' => 'E02000575',
        '1BU' => 'E02000972',
        '1BW' => 'E02000972',
        '1BX' => 'E02000972',
        '1BY' => 'E02000972',
        '1BZ' => 'E02000972',
        '1DA' => 'E02000972',
        '1DB' => 'E02000972',
        '1DD' => 'E02000972',
        '1DE' => 'E02000972',
        '1DF' => 'E02000972',
        '1DG' => 'E02000972',
        '1DH' => 'E02000972',
        '1DJ' => 'E02000972',
        '1DL' => 'E02000977',
        '1DN' => 'E02000972',
        '1DP' => 'E02000972',
        '1DQ' => 'E02000972',
        '1DR' => 'E02000972',
        '1DS' => 'E02000972',
        '1DT' => 'E02000972',
        '1DU' => 'E02000972',
        '1DW' => 'E02000972',
        '1DX' => 'E02000972',
        '1DY' => 'E02000972',
        '1DZ' => 'E02000972',
        '1EA' => 'E02000972',
        '1EB' => 'E02000972',
        '1ED' => 'E02000972',
        '1EF' => 'E02000972',
        '1EG' => 'E02000972',
        '1EH' => 'E02000972',
        '1EJ' => 'E02000972',
        '1EN' => 'E02000972',
        '1EP' => 'E02000972',
        '1EQ' => 'E02000972',
        '1EU' => 'E02000972',
        '1EW' => 'E02000972',
        '1EX' => 'E02000972',
        '1EY' => 'E02000972',
        '1EZ' => 'E02000972',
        '1FD' => 'E02000972',
        '1FE' => 'E02000972',
        '1FF' => 'E02000972',
        '1FG' => 'E02000972',
        '1FH' => 'E02000972',
        '1FJ' => 'E02000972',
        '1FL' => 'E02000972',
        '1FN' => 'E02000972',
        '1FP' => 'E02000972',
        '1FQ' => 'E02000972',
        '1FR' => 'E02000972',
        '1FS' => 'E02000972',
        '1FW' => 'E02000972',
        '1FX' => 'E02000972',
        '1HA' => 'E02000972',
        '1HB' => 'E02000972',
        '1HD' => 'E02000972',
        '1HE' => 'E02000972',
        '1HF' => 'E02000972',
        '1HG' => 'E02000972',
        '1HH' => 'E02000972',
        '1HJ' => 'E02000972',
        '1HL' => 'E02000972',
        '1HN' => 'E02000972',
        '1HP' => 'E02000972',
        '1HQ' => 'E02000972',
        '1HR' => 'E02000972',
        '1HS' => 'E02000972',
        '1HT' => 'E02000972',
        '1HU' => 'E02000972',
        '1HW' => 'E02000972',
        '1HX' => 'E02000972',
        '1HY' => 'E02000972',
        '1HZ' => 'E02000972',
        '1JA' => 'E02000972',
        '1JB' => 'E02000972',
        '1JD' => 'E02000972',
        '1JE' => 'E02000972',
        '1JF' => 'E02000972',
        '1JG' => 'E02000972',
        '1JH' => 'E02000972',
        '1JJ' => 'E02000972',
        '1JL' => 'E02000972',
        '1JN' => 'E02000972',
        '1JP' => 'E02000972',
        '1JQ' => 'E02000972',
        '1JR' => 'E02000972',
        '1JS' => 'E02000972',
        '1JT' => 'E02000972',
        '1JU' => 'E02000972',
        '1JW' => 'E02000972',
        '1JX' => 'E02000972',
        '1JY' => 'E02000972',
        '1LA' => 'E02000972',
        '1LB' => 'E02000972',
        '1LD' => 'E02000972',
        '1LE' => 'E02000972',
        '1LF' => 'E02000972',
        '1LG' => 'E02000972',
        '1LH' => 'E02000972',
        '1LJ' => 'E02000972',
        '1LL' => 'E02000972',
        '1LQ' => 'E02000972',
        '1LX' => 'E02000972',
        '1NA' => 'E02000972',
        '1ND' => 'E02000972',
        '1NE' => 'E02000972',
        '1NG' => 'E02000972',
        '1NH' => 'E02000972',
        '1NJ' => 'E02000972',
        '1NL' => 'E02000972',
        '1NQ' => 'E02000972',
        '1NR' => 'E02000972',
        '1NX' => 'E02000972',
        '1NY' => 'E02000972',
        '1PA' => 'E02000972',
        '1PB' => 'E02000972',
        '1PD' => 'E02000972',
        '1PE' => 'E02000972',
        '1PF' => 'E02000972',
        '1PG' => 'E02000972',
        '1PH' => 'E02000972',
        '1PJ' => 'E02000972',
        '1PL' => 'E02000972',
        '1PN' => 'E02000972',
        '1PP' => 'E02000972',
        '1PQ' => 'E02000972',
        '1PR' => 'E02000972',
        '1PS' => 'E02000972',
        '1PT' => 'E02000972',
        '1PU' => 'E02000972',
        '1PW' => 'E02000972',
        '1PX' => 'E02000972',
        '1PY' => 'E02000972',
        '1PZ' => 'E02000972',
        '1QA' => 'E02000972',
        '1QB' => 'E02000972',
        '1QD' => 'E02000972',
        '1QE' => 'E02000972',
        '1QF' => 'E02000972',
        '1QG' => 'E02000972',
        '1QH' => 'E02000972',
        '1QL' => 'E02000972',
        '1QP' => 'E02000972',
        '1QQ' => 'E02000972',
        '1QR' => 'E02000972',
        '1QT' => 'E02000972',
        '1QY' => 'E02000972',
        '1RB' => 'E02000972',
        '1RD' => 'E02000972',
        '1RE' => 'E02000972',
        '1RF' => 'E02000972',
        '1RG' => 'E02000972',
        '1RH' => 'E02000972',
        '1RJ' => 'E02000972',
        '1RL' => 'E02000972',
        '1RN' => 'E02000972',
        '1RP' => 'E02000972',
        '1RQ' => 'E02000972',
        '1RR' => 'E02000972',
        '1RS' => 'E02000972',
        '1RT' => 'E02000972',
        '1RU' => 'E02000972',
        '1RW' => 'E02000972',
        '1RX' => 'E02000972',
        '1RY' => 'E02000972',
        '1RZ' => 'E02000972',
        '1SA' => 'E02000972',
        '1SB' => 'E02000972',
        '1SD' => 'E02000972',
        '1SE' => 'E02000972',
        '1SF' => 'E02000972',
        '1SG' => 'E02000972',
        '1SH' => 'E02000972',
        '1SJ' => 'E02000972',
        '1SL' => 'E02000972',
        '1SN' => 'E02000972',
        '1SP' => 'E02000972',
        '1SQ' => 'E02000972',
        '1SR' => 'E02000972',
        '1SS' => 'E02000972',
        '1ST' => 'E02000972',
        '1SU' => 'E02000972',
        '1SW' => 'E02000972',
        '1SX' => 'E02000972',
        '1SY' => 'E02000972',
        '1TA' => 'E02000972',
        '1TD' => 'E02000972',
        '1TE' => 'E02000972',
        '1TT' => 'E02000972',
        '1UA' => 'E02000972',
        '1UB' => 'E02000972',
        '1WZ' => 'E02000972',
        '1YA' => 'E02000972',
        '1YB' => 'E02000972',
        '1YD' => 'E02000972',
        '1YE' => 'E02000972',
        '1YF' => 'E02000972',
        '1YG' => 'E02000972',
        '1YH' => 'E02000972',
        '1YJ' => 'E02000972',
        '1YL' => 'E02000972',
        '1YN' => 'E02000972',
        '1YP' => 'E02000972',
        '1YQ' => 'E02000972',
        '1YR' => 'E02000972',
        '1YS' => 'E02000972',
        '1YT' => 'E02000972',
        '1YU' => 'E02000972',
        '1YW' => 'E02000972',
        '1YX' => 'E02000972',
        '1YZ' => 'E02000972',
        '2AA' => 'E02000972',
        '2AJ' => 'E02000972',
        '2AL' => 'E02000972',
        '2AQ' => 'E02000972',
        '2AT' => 'E02000972',
        '2AU' => 'E02000972',
        '2AX' => 'E02000972',
        '2AY' => 'E02000972',
        '2AZ' => 'E02000972',
        '2BD' => 'E02000972',
        '2BE' => 'E02000972',
        '2BF' => 'E02000972',
        '2BG' => 'E02000972',
        '2BH' => 'E02000972',
        '2BJ' => 'E02000972',
        '2BL' => 'E02000972',
        '2BN' => 'E02000972',
        '2BP' => 'E02000972',
        '2BQ' => 'E02000972',
        '2BS' => 'E02000972',
        '2BW' => 'E02000972',
        '2BZ' => 'E02000972',
        '2DE' => 'E02000972',
        '2DJ' => 'E02000972',
        '2DP' => 'E02000972',
        '2DT' => 'E02000972',
        '2DU' => 'E02000972',
        '2EA' => 'E02000972',
        '2EH' => 'E02000972',
        '2EJ' => 'E02000972',
        '2EL' => 'E02000972',
        '2EP' => 'E02000977',
        '2ER' => 'E02000972',
        '2ES' => 'E02000972',
        '2ET' => 'E02000972',
        '2EU' => 'E02000972',
        '2EX' => 'E02000972',
        '2EY' => 'E02000972',
        '2EZ' => 'E02000972',
        '2FA' => 'E02000972',
        '2FB' => 'E02000972',
        '2FD' => 'E02000972',
        '2FE' => 'E02000972',
        '2FF' => 'E02000972',
        '2FG' => 'E02000972',
        '2FH' => 'E02000972',
        '2FJ' => 'E02000972',
        '2FL' => 'E02000972',
        '2FN' => 'E02000972',
        '2FQ' => 'E02000972',
        '2FR' => 'E02000972',
        '2FT' => 'E02000972',
        '2FW' => 'E02000972',
        '2GA' => 'E02000972',
        '2GB' => 'E02000972',
        '2GD' => 'E02000972',
        '2GF' => 'E02000972',
        '2HB' => 'E02000972',
        '2HD' => 'E02000972',
        '2HG' => 'E02000972',
        '2HL' => 'E02000972',
        '2HN' => 'E02000972',
        '2HP' => 'E02000972',
        '2HR' => 'E02000972',
        '2HS' => 'E02000972',
        '2HU' => 'E02000972',
        '2HX' => 'E02000972',
        '2HY' => 'E02000972',
        '2HZ' => 'E02000972',
        '2JA' => 'E02000972',
        '2JD' => 'E02000972',
        '2JE' => 'E02000972',
        '2JF' => 'E02000972',
        '2JG' => 'E02000972',
        '2JJ' => 'E02000972',
        '2JL' => 'E02000972',
        '2JR' => 'E02000972',
        '2JT' => 'E02000972',
        '2JY' => 'E02000972',
        '2LD' => 'E02000972',
        '2LF' => 'E02000972',
        '2LG' => 'E02000972',
        '2LH' => 'E02000972',
        '2LJ' => 'E02000972',
        '2LL' => 'E02000972',
        '2LP' => 'E02000972',
        '2LQ' => 'E02000972',
        '2LY' => 'E02000972',
        '2NA' => 'E02000972',
        '2ND' => 'E02000972',
        '2NE' => 'E02000972',
        '2PA' => 'E02000972',
        '2PB' => 'E02000972',
        '2PD' => 'E02000972',
        '2PE' => 'E02000972',
        '2PF' => 'E02000972',
        '2PG' => 'E02000972',
        '2PH' => 'E02000972',
        '2PJ' => 'E02000972',
        '2PL' => 'E02000972',
        '2PN' => 'E02000972',
        '2PP' => 'E02000972',
        '2PQ' => 'E02000972',
        '2PR' => 'E02000972',
        '2PS' => 'E02000972',
        '2PW' => 'E02000972',
        '2PZ' => 'E02000972',
        '2QA' => 'E02000972',
        '2QB' => 'E02000972',
        '2QD' => 'E02000972',
        '2QE' => 'E02000972',
        '2QF' => 'E02000972',
        '2QG' => 'E02000972',
        '2QH' => 'E02000972',
        '2QJ' => 'E02000972',
        '2QL' => 'E02000972',
        '2QN' => 'E02000972',
        '2QQ' => 'E02000972',
        '2QR' => 'E02000972',
        '2QT' => 'E02000972',
        '2QU' => 'E02000972',
        '2QW' => 'E02000972',
        '2RB' => 'E02000972',
        '2RD' => 'E02000972',
        '2RE' => 'E02000972',
        '2RF' => 'E02000972',
        '2RG' => 'E02000972',
        '2RH' => 'E02000972',
        '2RJ' => 'E02000972',
        '2RL' => 'E02000972',
        '2RN' => 'E02000972',
        '2RP' => 'E02000972',
        '2RQ' => 'E02000972',
        '2RR' => 'E02000972',
        '2RS' => 'E02000972',
        '2RT' => 'E02000972',
        '2RU' => 'E02000972',
        '2RW' => 'E02000972',
        '2RX' => 'E02000972',
        '2RY' => 'E02000972',
        '2RZ' => 'E02000972',
        '2SA' => 'E02000972',
        '2SB' => 'E02000972',
        '2SD' => 'E02000972',
        '2SE' => 'E02000972',
        '2SF' => 'E02000972',
        '2SG' => 'E02000972',
        '2SQ' => 'E02000972',
        '2TA' => 'E02000977',
        '2TB' => 'E02000977',
        '2TD' => 'E02000972',
        '2TE' => 'E02000977',
        '2TF' => 'E02000977',
        '2TG' => 'E02000977',
        '2TH' => 'E02000977',
        '2TJ' => 'E02000972',
        '2TL' => 'E02000972',
        '2TN' => 'E02000972',
        '2TP' => 'E02000972',
        '2TQ' => 'E02000977',
        '2TR' => 'E02000972',
        '2TS' => 'E02000972',
        '2TT' => 'E02000972',
        '2TU' => 'E02000972',
        '2TW' => 'E02000972',
        '2TX' => 'E02000972',
        '2TY' => 'E02000972',
        '2TZ' => 'E02000972',
        '2UA' => 'E02000972',
        '2UB' => 'E02000972',
        '2UD' => 'E02000972',
        '2UE' => 'E02000972',
        '2UF' => 'E02000972',
        '2UG' => 'E02000972',
        '2UH' => 'E02000972',
        '2UQ' => 'E02000972',
        '2US' => 'E02000972',
        '2WE' => 'E02000972',
        '2WZ' => 'E02000972',
        '2XA' => 'E02000972',
        '2XB' => 'E02000972',
        '2XD' => 'E02000972',
        '2XE' => 'E02000972',
        '2XF' => 'E02000972',
        '2XG' => 'E02000972',
        '2XH' => 'E02000972',
        '2XJ' => 'E02000972',
        '2XL' => 'E02000972',
        '2XN' => 'E02000972',
        '2XP' => 'E02000972',
        '2XQ' => 'E02000972',
        '2XR' => 'E02000972',
        '2XS' => 'E02000972',
        '2XT' => 'E02000972',
        '2XU' => 'E02000972',
        '2XW' => 'E02000972',
        '2XX' => 'E02000972',
        '2XY' => 'E02000972',
        '2XZ' => 'E02000972',
        '2YA' => 'E02000972',
        '2YB' => 'E02000972',
        '2YE' => 'E02000972',
        '2YF' => 'E02000972',
        '2YG' => 'E02000972',
        '2YH' => 'E02000972',
        '2YJ' => 'E02000972',
        '2YL' => 'E02000972',
        '2YN' => 'E02000972',
        '2YP' => 'E02000972',
        '2YQ' => 'E02000972',
        '2YR' => 'E02000972',
        '2YS' => 'E02000972',
        '2YT' => 'E02000972',
        '2YU' => 'E02000972',
        '2YW' => 'E02000972',
        '2YX' => 'E02000972',
        '2YY' => 'E02000972',
        '2YZ' => 'E02000972',
        '3AA' => 'E02000575',
        '3AB' => 'E02000972',
        '3AD' => 'E02000972',
        '3AE' => 'E02000972',
        '3AF' => 'E02000972',
        '3AG' => 'E02000972',
        '3AH' => 'E02000972',
        '3AJ' => 'E02000972',
        '3AL' => 'E02000972',
        '3AN' => 'E02000972',
        '3AP' => 'E02000972',
        '3AQ' => 'E02000972',
        '3AR' => 'E02000972',
        '3AS' => 'E02000972',
        '3AT' => 'E02000972',
        '3AU' => 'E02000972',
        '3AW' => 'E02000972',
        '3AX' => 'E02000972',
        '3AY' => 'E02000972',
        '3AZ' => 'E02000972',
        '3BB' => 'E02000972',
        '3BD' => 'E02000972',
        '3BE' => 'E02000972',
        '3BF' => 'E02000972',
        '3BG' => 'E02000972',
        '3BH' => 'E02000972',
        '3BJ' => 'E02000972',
        '3BL' => 'E02000977',
        '3BN' => 'E02000972',
        '3BQ' => 'E02000972',
        '3BZ' => 'E02000972',
        '3DA' => 'E02000972',
        '3DB' => 'E02000972',
        '3DD' => 'E02000972',
        '3DE' => 'E02000972',
        '3DF' => 'E02000972',
        '3DG' => 'E02000972',
        '3DH' => 'E02000972',
        '3DJ' => 'E02000972',
        '3DL' => 'E02000972',
        '3DN' => 'E02000972',
        '3DP' => 'E02000972',
        '3DQ' => 'E02000972',
        '3DR' => 'E02000972',
        '3DS' => 'E02000972',
        '3DT' => 'E02000972',
        '3DU' => 'E02000972',
        '3DW' => 'E02000972',
        '3DX' => 'E02000972',
        '3DY' => 'E02000972',
        '3DZ' => 'E02000972',
        '3EA' => 'E02000972',
        '3EB' => 'E02000972',
        '3ED' => 'E02000972',
        '3EE' => 'E02000977',
        '3EF' => 'E02000972',
        '3EG' => 'E02000972',
        '3EH' => 'E02000972',
        '3EJ' => 'E02000972',
        '3EL' => 'E02000972',
        '3EN' => 'E02000972',
        '3EP' => 'E02000972',
        '3EQ' => 'E02000972',
        '3ER' => 'E02000972',
        '3ES' => 'E02000972',
        '3ET' => 'E02000972',
        '3EU' => 'E02000972',
        '3EW' => 'E02000972',
        '3EX' => 'E02000972',
        '3EY' => 'E02000972',
        '3EZ' => 'E02000972',
        '3HA' => 'E02000972',
        '3HB' => 'E02000972',
        '3HD' => 'E02000972',
        '3HE' => 'E02000972',
        '3HF' => 'E02000972',
        '3HH' => 'E02000972',
        '3HJ' => 'E02000972',
        '3HL' => 'E02000972',
        '3HN' => 'E02000972',
        '3HP' => 'E02000972',
        '3HQ' => 'E02000972',
        '3HT' => 'E02000972',
        '3JN' => 'E02000972',
        '3JR' => 'E02000972',
        '3LB' => 'E02000977',
        '3LD' => 'E02000972',
        '3LF' => 'E02000977',
        '3LG' => 'E02000977',
        '3LH' => 'E02000977',
        '3LJ' => 'E02000977',
        '3LL' => 'E02000977',
        '3LN' => 'E02000977',
        '3LP' => 'E02000972',
        '3LQ' => 'E02000977',
        '3LR' => 'E02000977',
        '3LS' => 'E02000972',
        '3LT' => 'E02000977',
        '3LU' => 'E02000977',
        '3LW' => 'E02000977',
        '3LX' => 'E02000972',
        '3LY' => 'E02000972',
        '3LZ' => 'E02000972',
        '3NA' => 'E02000972',
        '3NB' => 'E02000972',
        '3ND' => 'E02000972',
        '3NE' => 'E02000972',
        '3NG' => 'E02000972',
        '3NH' => 'E02000972',
        '3NJ' => 'E02000972',
        '3NL' => 'E02000972',
        '3NN' => 'E02000972',
        '3NP' => 'E02000977',
        '3NQ' => 'E02000972',
        '3NR' => 'E02000972',
        '3NS' => 'E02000977',
        '3NU' => 'E02000972',
        '3NX' => 'E02000977',
        '3NY' => 'E02000977',
        '3PA' => 'E02000972',
        '3PB' => 'E02000972',
        '3PD' => 'E02000972',
        '3PE' => 'E02000972',
        '3PF' => 'E02000972',
        '3PG' => 'E02000972',
        '3PH' => 'E02000972',
        '3PJ' => 'E02000972',
        '3PL' => 'E02000972',
        '3PN' => 'E02000972',
        '3PP' => 'E02000972',
        '3PQ' => 'E02000972',
        '3PR' => 'E02000972',
        '3PS' => 'E02000972',
        '3PT' => 'E02000972',
        '3PU' => 'E02000972',
        '3PW' => 'E02000972',
        '3PX' => 'E02000972',
        '3PY' => 'E02000972',
        '3PZ' => 'E02000972',
        '3QA' => 'E02000972',
        '3QB' => 'E02000972',
        '3QD' => 'E02000972',
        '3QE' => 'E02000972',
        '3QF' => 'E02000972',
        '3QG' => 'E02000972',
        '3QQ' => 'E02000972',
        '3RF' => 'E02000972',
        '3RG' => 'E02000972',
        '3RH' => 'E02000972',
        '3RJ' => 'E02000972',
        '3RL' => 'E02000977',
        '3RN' => 'E02000977',
        '3RQ' => 'E02000972',
        '3RU' => 'E02000977',
        '3SJ' => 'E02000977',
        '3SL' => 'E02000977',
        '3SN' => 'E02000977',
        '3SP' => 'E02000977',
        '3SR' => 'E02000977',
        '3SS' => 'E02000977',
        '3ST' => 'E02000977',
        '3SU' => 'E02000977',
        '3SW' => 'E02000977',
        '3SX' => 'E02000977',
        '4AA' => 'E02000977',
        '4AB' => 'E02000977',
        '4AD' => 'E02000977',
        '4AE' => 'E02000977',
        '4AF' => 'E02000977',
        '4AG' => 'E02000977',
        '4AH' => 'E02000972',
        '4AJ' => 'E02000972',
        '4AL' => 'E02000972',
        '4AN' => 'E02000977',
        '4AP' => 'E02000972',
        '4AQ' => 'E02000977',
        '4AR' => 'E02000977',
        '4AS' => 'E02000977',
        '4AT' => 'E02000977',
        '4AU' => 'E02000977',
        '4AW' => 'E02000972',
        '4AX' => 'E02000977',
        '4AY' => 'E02000977',
        '4AZ' => 'E02000977',
        '4BA' => 'E02000977',
        '4BB' => 'E02000977',
        '4BD' => 'E02000977',
        '4BE' => 'E02000977',
        '4BF' => 'E02000977',
        '4BG' => 'E02000977',
        '4BH' => 'E02000972',
        '4BJ' => 'E02000977',
        '4BL' => 'E02000977',
        '4BN' => 'E02000977',
        '4BP' => 'E02000977',
        '4BQ' => 'E02000977',
        '4BR' => 'E02000977',
        '4BS' => 'E02000977',
        '4BT' => 'E02000977',
        '4BU' => 'E02000977',
        '4BW' => 'E02000977',
        '4BX' => 'E02000977',
        '4BY' => 'E02000977',
        '4BZ' => 'E02000977',
        '4DA' => 'E02000977',
        '4DB' => 'E02000977',
        '4DD' => 'E02000977',
        '4DE' => 'E02000972',
        '4DF' => 'E02000977',
        '4DG' => 'E02000977',
        '4DH' => 'E02000977',
        '4DJ' => 'E02000977',
        '4DL' => 'E02000977',
        '4DN' => 'E02000977',
        '4DP' => 'E02000977',
        '4DQ' => 'E02000977',
        '4DR' => 'E02000977',
        '4DS' => 'E02000977',
        '4DT' => 'E02000977',
        '4DU' => 'E02000977',
        '4DW' => 'E02000977',
        '4DX' => 'E02000977',
        '4DY' => 'E02000977',
        '4DZ' => 'E02000977',
        '4EA' => 'E02000977',
        '4EB' => 'E02000977',
        '4ED' => 'E02000977',
        '4EE' => 'E02000977',
        '4EF' => 'E02000977',
        '4EG' => 'E02000977',
        '4EH' => 'E02000972',
        '4EJ' => 'E02000972',
        '4EL' => 'E02000972',
        '4EN' => 'E02000972',
        '4EP' => 'E02000972',
        '4EQ' => 'E02000972',
        '4ER' => 'E02000972',
        '4ES' => 'E02000972',
        '4ET' => 'E02000972',
        '4EU' => 'E02000977',
        '4EW' => 'E02000972',
        '4EX' => 'E02000977',
        '4EY' => 'E02000977',
        '4EZ' => 'E02000977',
        '4FA' => 'E02000977',
        '4FE' => 'E02000977',
        '4FF' => 'E02000977',
        '4GA' => 'E02000977',
        '4GB' => 'E02000977',
        '4HA' => 'E02000977',
        '4HB' => 'E02000977',
        '4HD' => 'E02000977',
        '4HE' => 'E02000977',
        '4HF' => 'E02000977',
        '4HG' => 'E02000977',
        '4HH' => 'E02000977',
        '4HJ' => 'E02000977',
        '4HL' => 'E02000977',
        '4HN' => 'E02000977',
        '4HP' => 'E02000977',
        '4HQ' => 'E02000977',
        '4HR' => 'E02000977',
        '4HS' => 'E02000977',
        '4HT' => 'E02000977',
        '4HU' => 'E02000977',
        '4HW' => 'E02000977',
        '4HX' => 'E02000977',
        '4HY' => 'E02000977',
        '4HZ' => 'E02000977',
        '4JA' => 'E02000977',
        '4JB' => 'E02000977',
        '4JD' => 'E02000977',
        '4JE' => 'E02000977',
        '4JF' => 'E02000977',
        '4JG' => 'E02000977',
        '4JH' => 'E02000977',
        '4JJ' => 'E02000977',
        '4JL' => 'E02000977',
        '4JN' => 'E02000977',
        '4JP' => 'E02000977',
        '4JQ' => 'E02000977',
        '4JR' => 'E02000977',
        '4JS' => 'E02000977',
        '4JU' => 'E02000977',
        '4JW' => 'E02000977',
        '4JX' => 'E02000977',
        '4JY' => 'E02000977',
        '4JZ' => 'E02000977',
        '4LA' => 'E02000977',
        '4LB' => 'E02000977',
        '4LD' => 'E02000977',
        '4LE' => 'E02000977',
        '4LF' => 'E02000977',
        '4LG' => 'E02000977',
        '4LH' => 'E02000977',
        '4LJ' => 'E02000977',
        '4LL' => 'E02000977',
        '4LN' => 'E02000977',
        '4LP' => 'E02000977',
        '4LQ' => 'E02000977',
        '4LR' => 'E02000977',
        '4LS' => 'E02000977',
        '4LT' => 'E02000977',
        '4LU' => 'E02000977',
        '4LW' => 'E02000977',
        '4LX' => 'E02000977',
        '4LY' => 'E02000977',
        '4LZ' => 'E02000977',
        '4NA' => 'E02000977',
        '4NB' => 'E02000977',
        '4ND' => 'E02000977',
        '4NE' => 'E02000977',
        '4NF' => 'E02000977',
        '4NG' => 'E02000977',
        '4NH' => 'E02000977',
        '4NJ' => 'E02000977',
        '4NL' => 'E02000977',
        '4NN' => 'E02000977',
        '4NP' => 'E02000977',
        '4NQ' => 'E02000977',
        '4NR' => 'E02000977',
        '4NS' => 'E02000977',
        '4NT' => 'E02000977',
        '4NU' => 'E02000977',
        '4NW' => 'E02000977',
        '4NX' => 'E02000977',
        '4NY' => 'E02000977',
        '4NZ' => 'E02000977',
        '4PA' => 'E02000977',
        '4PB' => 'E02000977',
        '4PD' => 'E02000977',
        '4PE' => 'E02000977',
        '4PF' => 'E02000977',
        '4PG' => 'E02000977',
        '4PH' => 'E02000977',
        '4PJ' => 'E02000977',
        '4PL' => 'E02000977',
        '4PN' => 'E02000977',
        '4PP' => 'E02000977',
        '4PQ' => 'E02000977',
        '4PR' => 'E02000977',
        '4PS' => 'E02000977',
        '4PT' => 'E02000977',
        '4PU' => 'E02000972',
        '4PW' => 'E02000977',
        '4PX' => 'E02000972',
        '4PY' => 'E02000972',
        '4PZ' => 'E02000972',
        '4QA' => 'E02000972',
        '4QB' => 'E02000977',
        '4QD' => 'E02000977',
        '4QE' => 'E02000977',
        '4QF' => 'E02000977',
        '4QG' => 'E02000977',
        '4QH' => 'E02000977',
        '4QJ' => 'E02000977',
        '4QL' => 'E02000977',
        '4QN' => 'E02000977',
        '4QP' => 'E02000977',
        '4QQ' => 'E02000977',
        '4QR' => 'E02000977',
        '4QS' => 'E02000977',
        '4QT' => 'E02000977',
        '4QW' => 'E02000977',
        '4RB' => 'E02000977',
        '4RD' => 'E02000977',
        '4RE' => 'E02000977',
        '4RF' => 'E02000977',
        '4RG' => 'E02000977',
        '4RH' => 'E02000977',
        '4RJ' => 'E02000977',
        '4RL' => 'E02000977',
        '4RN' => 'E02000977',
        '4RP' => 'E02000977',
        '4RQ' => 'E02000977',
        '4RR' => 'E02000977',
        '4RS' => 'E02000977',
        '4RT' => 'E02000977',
        '4RU' => 'E02000977',
        '4RW' => 'E02000977',
        '4RX' => 'E02000977',
        '4SA' => 'E02000977',
        '4SB' => 'E02000977',
        '4SD' => 'E02000977',
        '4SE' => 'E02000977',
        '4SF' => 'E02000977',
        '4SG' => 'E02000977',
        '4SH' => 'E02000977',
        '4SJ' => 'E02000977',
        '4SL' => 'E02000977',
        '4SN' => 'E02000977',
        '4SP' => 'E02000977',
        '4SQ' => 'E02000977',
        '4SR' => 'E02000977',
        '4SW' => 'E02000977',
        '4SX' => 'E02000977',
        '4TA' => 'E02000977',
        '4TB' => 'E02000977',
        '4TD' => 'E02000977',
        '4TE' => 'E02000977',
        '4TF' => 'E02000977',
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