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
final class BL5
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02001013',
        '1AB' => 'E02001013',
        '1AD' => 'E02001009',
        '1AE' => 'E02001013',
        '1AF' => 'E02001013',
        '1AG' => 'E02001009',
        '1AH' => 'E02001009',
        '1AJ' => 'E02001009',
        '1AL' => 'E02001009',
        '1AN' => 'E02001009',
        '1AP' => 'E02001009',
        '1AQ' => 'E02001009',
        '1AR' => 'E02001009',
        '1AS' => 'E02001009',
        '1AT' => 'E02001013',
        '1AU' => 'E02001013',
        '1AW' => 'E02001009',
        '1AX' => 'E02001013',
        '1AY' => 'E02001013',
        '1AZ' => 'E02001013',
        '1BA' => 'E02001013',
        '1BB' => 'E02001013',
        '1BD' => 'E02001013',
        '1BE' => 'E02001013',
        '1BF' => 'E02001009',
        '1BG' => 'E02001009',
        '1BH' => 'E02001013',
        '1BJ' => 'E02001009',
        '1BL' => 'E02001009',
        '1BN' => 'E02001009',
        '1BP' => 'E02001009',
        '1BQ' => 'E02001009',
        '1BR' => 'E02001009',
        '1BS' => 'E02001009',
        '1BT' => 'E02001009',
        '1BU' => 'E02001009',
        '1BW' => 'E02001009',
        '1BX' => 'E02001009',
        '1BY' => 'E02001009',
        '1BZ' => 'E02001009',
        '1DA' => 'E02001009',
        '1DB' => 'E02001009',
        '1DD' => 'E02000990',
        '1DE' => 'E02001013',
        '1DF' => 'E02001013',
        '1DG' => 'E02001009',
        '1DH' => 'E02001013',
        '1DJ' => 'E02001013',
        '1DL' => 'E02001013',
        '1DN' => 'E02001013',
        '1DP' => 'E02001013',
        '1DQ' => 'E02001009',
        '1DR' => 'E02001013',
        '1DS' => 'E02001013',
        '1DT' => 'E02001013',
        '1DU' => 'E02001013',
        '1DW' => 'E02001013',
        '1DX' => 'E02001013',
        '1DY' => 'E02001013',
        '1DZ' => 'E02001013',
        '1EA' => 'E02001013',
        '1EB' => 'E02001013',
        '1ED' => 'E02001015',
        '1EE' => 'E02001009',
        '1EF' => 'E02001013',
        '1EG' => 'E02001013',
        '1EH' => 'E02001013',
        '1EJ' => 'E02001013',
        '1EL' => 'E02001013',
        '1EN' => 'E02001009',
        '1EP' => 'E02001013',
        '1EQ' => 'E02001013',
        '1ER' => 'E02001013',
        '1ES' => 'E02001013',
        '1ET' => 'E02001013',
        '1EU' => 'E02001013',
        '1EW' => 'E02001013',
        '1EX' => 'E02001013',
        '1EY' => 'E02001013',
        '1EZ' => 'E02001013',
        '1FA' => 'E02000997',
        '1FB' => 'E02000990',
        '1FD' => 'E02001013',
        '1FE' => 'E02001013',
        '1FF' => 'E02000990',
        '1FG' => 'E02001013',
        '1FH' => 'E02001009',
        '1FJ' => 'E02000990',
        '1FL' => 'E02001013',
        '1FN' => 'E02000990',
        '1FQ' => 'E02001013',
        '1HA' => 'E02001013',
        '1HB' => 'E02001013',
        '1HD' => 'E02001013',
        '1HE' => 'E02001013',
        '1HF' => 'E02001013',
        '1HG' => 'E02001013',
        '1HH' => 'E02001013',
        '1HJ' => 'E02001013',
        '1HL' => 'E02001013',
        '1HN' => 'E02001013',
        '1HP' => 'E02001013',
        '1HQ' => 'E02001013',
        '1HR' => 'E02001013',
        '1HS' => 'E02001013',
        '1HT' => 'E02001013',
        '1HW' => 'E02001013',
        '1JX' => 'E02001013',
        '1JY' => 'E02000997',
        '1WA' => 'E02000990',
        '1WW' => 'E02000990',
        '1WX' => 'E02000990',
        '1WY' => 'E02000990',
        '1WZ' => 'E02000990',
        '1YY' => 'E02000990',
        '2AA' => 'E02001014',
        '2AB' => 'E02001014',
        '2AD' => 'E02001014',
        '2AE' => 'E02001014',
        '2AF' => 'E02001014',
        '2AG' => 'E02001014',
        '2AH' => 'E02001014',
        '2AJ' => 'E02001014',
        '2AL' => 'E02001014',
        '2AN' => 'E02001014',
        '2AP' => 'E02001018',
        '2AQ' => 'E02001014',
        '2AR' => 'E02001014',
        '2AS' => 'E02001014',
        '2AT' => 'E02001014',
        '2AU' => 'E02001014',
        '2AW' => 'E02001014',
        '2AX' => 'E02001018',
        '2AY' => 'E02001014',
        '2AZ' => 'E02001014',
        '2BA' => 'E02001014',
        '2BB' => 'E02001014',
        '2BD' => 'E02001014',
        '2BE' => 'E02001014',
        '2BF' => 'E02001018',
        '2BG' => 'E02001014',
        '2BH' => 'E02001014',
        '2BJ' => 'E02001014',
        '2BL' => 'E02001014',
        '2BN' => 'E02001014',
        '2BP' => 'E02001014',
        '2BQ' => 'E02001014',
        '2BR' => 'E02001014',
        '2BS' => 'E02001018',
        '2BT' => 'E02001018',
        '2BU' => 'E02001018',
        '2BW' => 'E02001014',
        '2BX' => 'E02001018',
        '2BY' => 'E02001018',
        '2BZ' => 'E02001018',
        '2DA' => 'E02001018',
        '2DB' => 'E02001018',
        '2DD' => 'E02001018',
        '2DE' => 'E02001018',
        '2DF' => 'E02001018',
        '2DG' => 'E02001018',
        '2DH' => 'E02001018',
        '2DJ' => 'E02001014',
        '2DL' => 'E02001014',
        '2DN' => 'E02001018',
        '2DP' => 'E02001014',
        '2DQ' => 'E02001014',
        '2DR' => 'E02001018',
        '2DS' => 'E02001018',
        '2DT' => 'E02001018',
        '2DU' => 'E02001018',
        '2DW' => 'E02001018',
        '2DX' => 'E02001014',
        '2DY' => 'E02001018',
        '2DZ' => 'E02001018',
        '2EA' => 'E02001014',
        '2EB' => 'E02001018',
        '2ED' => 'E02001018',
        '2EE' => 'E02001018',
        '2EF' => 'E02001018',
        '2EG' => 'E02001018',
        '2EH' => 'E02001018',
        '2EJ' => 'E02001018',
        '2EL' => 'E02001018',
        '2EN' => 'E02001014',
        '2EP' => 'E02001018',
        '2EQ' => 'E02001018',
        '2ER' => 'E02001018',
        '2ES' => 'E02001018',
        '2ET' => 'E02001018',
        '2EU' => 'E02001018',
        '2EW' => 'E02001014',
        '2EX' => 'E02001018',
        '2EY' => 'E02001018',
        '2EZ' => 'E02001018',
        '2FA' => 'E02001018',
        '2FB' => 'E02001018',
        '2FD' => 'E02001018',
        '2FE' => 'E02001018',
        '2FF' => 'E02000997',
        '2FG' => 'E02000997',
        '2FH' => 'E02001018',
        '2FJ' => 'E02001018',
        '2FL' => 'E02001018',
        '2FN' => 'E02000990',
        '2FP' => 'E02001018',
        '2FQ' => 'E02001018',
        '2FR' => 'E02000990',
        '2FS' => 'E02001018',
        '2FT' => 'E02000990',
        '2FU' => 'E02001018',
        '2FW' => 'E02001018',
        '2FX' => 'E02001018',
        '2FY' => 'E02001018',
        '2FZ' => 'E02000997',
        '2GA' => 'E02001018',
        '2GB' => 'E02001018',
        '2GD' => 'E02000990',
        '2GE' => 'E02000990',
        '2GF' => 'E02001014',
        '2GG' => 'E02001018',
        '2GH' => 'E02001014',
        '2GJ' => 'E02001018',
        '2GL' => 'E02001018',
        '2GN' => 'E02001018',
        '2GP' => 'E02001018',
        '2GQ' => 'E02001018',
        '2GR' => 'E02001018',
        '2GS' => 'E02001018',
        '2GT' => 'E02001018',
        '2GU' => 'E02001018',
        '2GW' => 'E02001018',
        '2GX' => 'E02001018',
        '2GY' => 'E02001018',
        '2HA' => 'E02001018',
        '2HB' => 'E02001018',
        '2HD' => 'E02001018',
        '2HE' => 'E02001018',
        '2HF' => 'E02001018',
        '2HG' => 'E02001018',
        '2HH' => 'E02001018',
        '2HJ' => 'E02001018',
        '2HL' => 'E02001018',
        '2HN' => 'E02001018',
        '2HP' => 'E02001018',
        '2HQ' => 'E02001018',
        '2HR' => 'E02001018',
        '2HS' => 'E02001018',
        '2HT' => 'E02001018',
        '2HU' => 'E02001018',
        '2HW' => 'E02001018',
        '2HX' => 'E02001018',
        '2HY' => 'E02001018',
        '2HZ' => 'E02001018',
        '2JA' => 'E02001018',
        '2JB' => 'E02001018',
        '2JD' => 'E02001018',
        '2JE' => 'E02001011',
        '2JF' => 'E02001018',
        '2JG' => 'E02001014',
        '2JH' => 'E02001018',
        '2JJ' => 'E02001018',
        '2JL' => 'E02001018',
        '2JN' => 'E02001018',
        '2JP' => 'E02001018',
        '2JQ' => 'E02001014',
        '2JR' => 'E02001018',
        '2JS' => 'E02001018',
        '2JT' => 'E02001018',
        '2JU' => 'E02001018',
        '2JW' => 'E02001018',
        '2JX' => 'E02001018',
        '2JY' => 'E02001018',
        '2JZ' => 'E02001014',
        '2LA' => 'E02001018',
        '2LB' => 'E02001018',
        '2LD' => 'E02001014',
        '2LE' => 'E02001011',
        '2LF' => 'E02001011',
        '2LG' => 'E02001014',
        '2LH' => 'E02001014',
        '2LJ' => 'E02001014',
        '2LL' => 'E02001014',
        '2LN' => 'E02001011',
        '2LP' => 'E02001011',
        '2LQ' => 'E02001014',
        '2LR' => 'E02001018',
        '2LS' => 'E02001018',
        '2LT' => 'E02001018',
        '2LU' => 'E02001018',
        '2LW' => 'E02001011',
        '2LX' => 'E02001018',
        '2LY' => 'E02001018',
        '2LZ' => 'E02001018',
        '2NA' => 'E02001014',
        '2NB' => 'E02001014',
        '2ND' => 'E02001014',
        '2NE' => 'E02001014',
        '2NF' => 'E02001014',
        '2NG' => 'E02001014',
        '2NH' => 'E02001014',
        '2NJ' => 'E02001014',
        '2NL' => 'E02001014',
        '2NN' => 'E02001014',
        '2NP' => 'E02001014',
        '2NQ' => 'E02001011',
        '2NR' => 'E02001014',
        '2NS' => 'E02001014',
        '2NT' => 'E02001014',
        '2NU' => 'E02001014',
        '2NW' => 'E02001014',
        '2NX' => 'E02001014',
        '2NY' => 'E02001014',
        '2NZ' => 'E02001014',
        '2PA' => 'E02001014',
        '2PB' => 'E02001014',
        '2PD' => 'E02001018',
        '2PE' => 'E02001018',
        '2PF' => 'E02001014',
        '2PG' => 'E02001014',
        '2PH' => 'E02001014',
        '2PJ' => 'E02001014',
        '2PL' => 'E02001014',
        '2PN' => 'E02001014',
        '2PP' => 'E02001014',
        '2PQ' => 'E02001014',
        '2PR' => 'E02001014',
        '2PS' => 'E02001014',
        '2PT' => 'E02001014',
        '2PU' => 'E02001014',
        '2PW' => 'E02001014',
        '2PX' => 'E02001014',
        '2PY' => 'E02001014',
        '2PZ' => 'E02001014',
        '2QA' => 'E02001011',
        '2QB' => 'E02001014',
        '2QD' => 'E02001014',
        '2QE' => 'E02001014',
        '2QF' => 'E02001014',
        '2QG' => 'E02001011',
        '2QH' => 'E02001011',
        '2QJ' => 'E02001014',
        '2QL' => 'E02001014',
        '2QN' => 'E02001011',
        '2QP' => 'E02001011',
        '2QQ' => 'E02001014',
        '2QR' => 'E02001014',
        '2QS' => 'E02001018',
        '2QT' => 'E02001018',
        '2QU' => 'E02001018',
        '2QW' => 'E02001011',
        '2QX' => 'E02001014',
        '2QY' => 'E02001018',
        '2QZ' => 'E02001018',
        '2RA' => 'E02001018',
        '2RB' => 'E02001018',
        '2RD' => 'E02001018',
        '2RE' => 'E02001018',
        '2RF' => 'E02001018',
        '2RG' => 'E02001018',
        '2RH' => 'E02001018',
        '2RJ' => 'E02001018',
        '2RL' => 'E02000990',
        '2RN' => 'E02001018',
        '2RP' => 'E02001018',
        '2RQ' => 'E02001018',
        '2RR' => 'E02001018',
        '2RS' => 'E02001018',
        '2RT' => 'E02001018',
        '2RU' => 'E02001018',
        '2RW' => 'E02001018',
        '2RX' => 'E02001018',
        '2RY' => 'E02001018',
        '2RZ' => 'E02001018',
        '2SA' => 'E02001018',
        '2SB' => 'E02001018',
        '2SD' => 'E02001018',
        '2SE' => 'E02001018',
        '2SF' => 'E02001018',
        '2SG' => 'E02001018',
        '2SH' => 'E02001018',
        '2SJ' => 'E02001018',
        '2SL' => 'E02001018',
        '2SN' => 'E02001018',
        '2SP' => 'E02001018',
        '2SQ' => 'E02001018',
        '2SR' => 'E02001018',
        '2SS' => 'E02001018',
        '2SW' => 'E02001018',
        '2TA' => 'E02001018',
        '2TB' => 'E02001018',
        '2TE' => 'E02001018',
        '2TF' => 'E02001018',
        '2TG' => 'E02000994',
        '2UN' => 'E02001014',
        '2UW' => 'E02001014',
        '2WA' => 'E02000990',
        '2WB' => 'E02000990',
        '2WQ' => 'E02000990',
        '2WR' => 'E02000990',
        '2WS' => 'E02000990',
        '2WT' => 'E02000990',
        '2WU' => 'E02000990',
        '2WW' => 'E02000990',
        '2WX' => 'E02001014',
        '2WY' => 'E02001014',
        '2WZ' => 'E02001014',
        '2YS' => 'E02000997',
        '2YT' => 'E02000990',
        '2YU' => 'E02000990',
        '2YW' => 'E02000990',
        '2YX' => 'E02000997',
        '2YY' => 'E02000990',
        '2YZ' => 'E02001014',
        '2ZF' => 'E02000990',
        '2ZS' => 'E02000990',
        '2ZU' => 'E02000990',
        '3AA' => 'E02001014',
        '3AB' => 'E02001014',
        '3AD' => 'E02001014',
        '3AE' => 'E02001014',
        '3AF' => 'E02001014',
        '3AG' => 'E02001014',
        '3AH' => 'E02001014',
        '3AJ' => 'E02001014',
        '3AL' => 'E02001011',
        '3AN' => 'E02001011',
        '3AP' => 'E02001014',
        '3AQ' => 'E02001014',
        '3AR' => 'E02001014',
        '3AS' => 'E02001014',
        '3AT' => 'E02001011',
        '3AU' => 'E02001011',
        '3AW' => 'E02001011',
        '3AX' => 'E02001014',
        '3AY' => 'E02001011',
        '3AZ' => 'E02001014',
        '3BA' => 'E02001014',
        '3BB' => 'E02001014',
        '3BD' => 'E02001014',
        '3BE' => 'E02001014',
        '3BF' => 'E02000997',
        '3BG' => 'E02001014',
        '3BH' => 'E02001014',
        '3BJ' => 'E02001011',
        '3BL' => 'E02001014',
        '3BN' => 'E02001011',
        '3BP' => 'E02001014',
        '3BQ' => 'E02001011',
        '3BR' => 'E02001014',
        '3BS' => 'E02001014',
        '3BT' => 'E02001014',
        '3BU' => 'E02001011',
        '3BW' => 'E02001014',
        '3BX' => 'E02001011',
        '3BY' => 'E02001011',
        '3BZ' => 'E02001011',
        '3DA' => 'E02001011',
        '3DB' => 'E02001011',
        '3DD' => 'E02001011',
        '3DE' => 'E02001011',
        '3DF' => 'E02001011',
        '3DG' => 'E02001011',
        '3DH' => 'E02001011',
        '3DJ' => 'E02001011',
        '3DL' => 'E02001011',
        '3DN' => 'E02001011',
        '3DP' => 'E02001011',
        '3DQ' => 'E02001014',
        '3DR' => 'E02001011',
        '3DS' => 'E02001011',
        '3DT' => 'E02001011',
        '3DU' => 'E02001011',
        '3DW' => 'E02001011',
        '3DX' => 'E02001011',
        '3DY' => 'E02001011',
        '3DZ' => 'E02001011',
        '3EA' => 'E02001011',
        '3EB' => 'E02001011',
        '3ED' => 'E02001011',
        '3EE' => 'E02001011',
        '3EF' => 'E02001011',
        '3EG' => 'E02001011',
        '3EH' => 'E02001011',
        '3EJ' => 'E02001011',
        '3EL' => 'E02001011',
        '3EN' => 'E02001011',
        '3EP' => 'E02001011',
        '3EQ' => 'E02001011',
        '3ER' => 'E02001011',
        '3ES' => 'E02001011',
        '3ET' => 'E02001011',
        '3EU' => 'E02001011',
        '3EW' => 'E02001011',
        '3EX' => 'E02001011',
        '3EY' => 'E02001011',
        '3EZ' => 'E02001011',
        '3FA' => 'E02001013',
        '3FB' => 'E02001014',
        '3FD' => 'E02001014',
        '3FE' => 'E02001014',
        '3FF' => 'E02001014',
        '3FG' => 'E02001014',
        '3FH' => 'E02001014',
        '3FJ' => 'E02000990',
        '3FL' => 'E02000990',
        '3FN' => 'E02001011',
        '3FP' => 'E02001011',
        '3FQ' => 'E02000997',
        '3FR' => 'E02001011',
        '3FS' => 'E02000997',
        '3FT' => 'E02001011',
        '3FU' => 'E02001011',
        '3FW' => 'E02001011',
        '3FX' => 'E02000997',
        '3FY' => 'E02000997',
        '3FZ' => 'E02001014',
        '3GA' => 'E02000997',
        '3GB' => 'E02000997',
        '3GD' => 'E02000990',
        '3GE' => 'E02001011',
        '3GF' => 'E02001014',
        '3GG' => 'E02001011',
        '3GH' => 'E02001011',
        '3GJ' => 'E02001014',
        '3GL' => 'E02001014',
        '3GN' => 'E02001011',
        '3GP' => 'E02001011',
        '3GQ' => 'E02001011',
        '3GR' => 'E02001011',
        '3GS' => 'E02001011',
        '3GT' => 'E02001011',
        '3GU' => 'E02001011',
        '3GW' => 'E02001014',
        '3GX' => 'E02001011',
        '3GZ' => 'E02001014',
        '3HA' => 'E02001011',
        '3HB' => 'E02001011',
        '3HD' => 'E02001011',
        '3HE' => 'E02001011',
        '3HF' => 'E02001011',
        '3HG' => 'E02001011',
        '3HH' => 'E02001011',
        '3HJ' => 'E02001011',
        '3HL' => 'E02001011',
        '3HN' => 'E02001011',
        '3HP' => 'E02001011',
        '3HQ' => 'E02001011',
        '3HR' => 'E02001011',
        '3HS' => 'E02001011',
        '3HT' => 'E02001011',
        '3HU' => 'E02001011',
        '3HW' => 'E02001011',
        '3HX' => 'E02001011',
        '3HY' => 'E02001011',
        '3HZ' => 'E02001011',
        '3JA' => 'E02001011',
        '3JB' => 'E02001011',
        '3JD' => 'E02001011',
        '3JE' => 'E02001011',
        '3JF' => 'E02001011',
        '3JG' => 'E02001011',
        '3JH' => 'E02001011',
        '3JJ' => 'E02001011',
        '3JL' => 'E02001011',
        '3JN' => 'E02001011',
        '3JP' => 'E02001011',
        '3JQ' => 'E02001011',
        '3JR' => 'E02001011',
        '3JS' => 'E02001011',
        '3JT' => 'E02001011',
        '3JU' => 'E02001011',
        '3JW' => 'E02001011',
        '3JX' => 'E02001011',
        '3JY' => 'E02001011',
        '3JZ' => 'E02001011',
        '3LA' => 'E02001011',
        '3LB' => 'E02001014',
        '3LD' => 'E02001011',
        '3LE' => 'E02001011',
        '3LF' => 'E02001011',
        '3LG' => 'E02000997',
        '3LH' => 'E02001014',
        '3LJ' => 'E02001014',
        '3LL' => 'E02001014',
        '3LN' => 'E02000997',
        '3LP' => 'E02000997',
        '3LQ' => 'E02001011',
        '3LR' => 'E02000997',
        '3LS' => 'E02000997',
        '3LT' => 'E02000997',
        '3LU' => 'E02000997',
        '3LW' => 'E02001014',
        '3LX' => 'E02001014',
        '3LY' => 'E02001014',
        '3LZ' => 'E02001014',
        '3NA' => 'E02001014',
        '3NB' => 'E02001014',
        '3ND' => 'E02000997',
        '3NE' => 'E02001014',
        '3NF' => 'E02000997',
        '3NG' => 'E02001014',
        '3NH' => 'E02000997',
        '3NJ' => 'E02000997',
        '3NL' => 'E02000997',
        '3NN' => 'E02001014',
        '3NP' => 'E02000997',
        '3NQ' => 'E02001011',
        '3NR' => 'E02001014',
        '3NS' => 'E02001014',
        '3NT' => 'E02001014',
        '3NU' => 'E02001014',
        '3NW' => 'E02001014',
        '3NX' => 'E02001014',
        '3NY' => 'E02001014',
        '3NZ' => 'E02001014',
        '3PA' => 'E02001014',
        '3PB' => 'E02001014',
        '3PD' => 'E02001014',
        '3PE' => 'E02001014',
        '3PF' => 'E02001014',
        '3PG' => 'E02000997',
        '3PH' => 'E02001014',
        '3PJ' => 'E02000997',
        '3PL' => 'E02000997',
        '3PN' => 'E02000997',
        '3PP' => 'E02000997',
        '3PQ' => 'E02001014',
        '3PR' => 'E02001014',
        '3PS' => 'E02001014',
        '3PT' => 'E02001014',
        '3PU' => 'E02001014',
        '3PW' => 'E02000997',
        '3PX' => 'E02001014',
        '3PY' => 'E02001014',
        '3PZ' => 'E02001014',
        '3QA' => 'E02001014',
        '3QB' => 'E02001014',
        '3QD' => 'E02001014',
        '3QE' => 'E02001014',
        '3QF' => 'E02001014',
        '3QG' => 'E02001014',
        '3QH' => 'E02001014',
        '3QJ' => 'E02001014',
        '3QL' => 'E02001014',
        '3QN' => 'E02001014',
        '3QP' => 'E02001014',
        '3QQ' => 'E02001014',
        '3QR' => 'E02001014',
        '3QS' => 'E02001014',
        '3QT' => 'E02001014',
        '3QU' => 'E02001014',
        '3QW' => 'E02001014',
        '3QX' => 'E02001011',
        '3QY' => 'E02001014',
        '3QZ' => 'E02001011',
        '3RA' => 'E02001014',
        '3RB' => 'E02001014',
        '3RD' => 'E02001014',
        '3RE' => 'E02001014',
        '3RF' => 'E02001014',
        '3RG' => 'E02001014',
        '3RH' => 'E02001014',
        '3RJ' => 'E02001014',
        '3RL' => 'E02001014',
        '3RN' => 'E02001014',
        '3RP' => 'E02001014',
        '3RQ' => 'E02001014',
        '3RR' => 'E02001014',
        '3RS' => 'E02001014',
        '3RT' => 'E02001014',
        '3RU' => 'E02001014',
        '3RW' => 'E02001014',
        '3RX' => 'E02001014',
        '3RY' => 'E02001014',
        '3RZ' => 'E02001014',
        '3SA' => 'E02001014',
        '3SB' => 'E02001014',
        '3SD' => 'E02001011',
        '3SE' => 'E02001011',
        '3SF' => 'E02001011',
        '3SG' => 'E02001014',
        '3SH' => 'E02001014',
        '3SJ' => 'E02001014',
        '3SL' => 'E02001014',
        '3SN' => 'E02001014',
        '3SP' => 'E02001014',
        '3SQ' => 'E02001014',
        '3SR' => 'E02001011',
        '3SS' => 'E02001014',
        '3ST' => 'E02001014',
        '3SU' => 'E02001014',
        '3SW' => 'E02001014',
        '3SX' => 'E02001011',
        '3SY' => 'E02001014',
        '3SZ' => 'E02001011',
        '3TA' => 'E02001011',
        '3TB' => 'E02001011',
        '3TD' => 'E02001014',
        '3TE' => 'E02001014',
        '3TF' => 'E02001014',
        '3TG' => 'E02001014',
        '3TH' => 'E02001014',
        '3TJ' => 'E02001014',
        '3TL' => 'E02001014',
        '3TN' => 'E02001014',
        '3TP' => 'E02001014',
        '3TQ' => 'E02001014',
        '3TR' => 'E02001014',
        '3TS' => 'E02001014',
        '3TT' => 'E02001014',
        '3TU' => 'E02001014',
        '3TW' => 'E02001014',
        '3TX' => 'E02001011',
        '3TY' => 'E02001011',
        '3TZ' => 'E02001011',
        '3UA' => 'E02001011',
        '3UB' => 'E02001011',
        '3UD' => 'E02001011',
        '3UE' => 'E02001011',
        '3UF' => 'E02001011',
        '3UG' => 'E02001011',
        '3UH' => 'E02001011',
        '3UJ' => 'E02001011',
        '3UL' => 'E02001011',
        '3UN' => 'E02001011',
        '3UP' => 'E02001011',
        '3UQ' => 'E02001011',
        '3UR' => 'E02001011',
        '3US' => 'E02001011',
        '3UT' => 'E02001011',
        '3UU' => 'E02001011',
        '3UW' => 'E02001011',
        '3UX' => 'E02001011',
        '3UY' => 'E02001011',
        '3UZ' => 'E02001011',
        '3WA' => 'E02001011',
        '3WB' => 'E02000990',
        '3WD' => 'E02000990',
        '3WE' => 'E02000990',
        '3WF' => 'E02000990',
        '3WG' => 'E02001014',
        '3WH' => 'E02000990',
        '3WJ' => 'E02000990',
        '3WL' => 'E02000990',
        '3WN' => 'E02000990',
        '3WP' => 'E02000990',
        '3WQ' => 'E02000990',
        '3WR' => 'E02000990',
        '3WS' => 'E02000990',
        '3WT' => 'E02000990',
        '3WU' => 'E02000990',
        '3WW' => 'E02000990',
        '3WX' => 'E02001011',
        '3WY' => 'E02000990',
        '3WZ' => 'E02000990',
        '3XA' => 'E02001014',
        '3XB' => 'E02001014',
        '3XD' => 'E02001014',
        '3XE' => 'E02001014',
        '3XF' => 'E02000997',
        '3XG' => 'E02001014',
        '3XH' => 'E02001014',
        '3XJ' => 'E02001014',
        '3XL' => 'E02001014',
        '3XN' => 'E02001014',
        '3XP' => 'E02001014',
        '3XQ' => 'E02001014',
        '3XR' => 'E02001011',
        '3XS' => 'E02000997',
        '3XT' => 'E02000990',
        '3XU' => 'E02001014',
        '3XW' => 'E02001014',
        '3XX' => 'E02001014',
        '3XY' => 'E02001014',
        '3XZ' => 'E02001014',
        '3YA' => 'E02001011',
        '3YB' => 'E02001011',
        '3YD' => 'E02001011',
        '3YE' => 'E02001011',
        '3YF' => 'E02001011',
        '3YG' => 'E02001011',
        '3YH' => 'E02000990',
        '3YJ' => 'E02000997',
        '3YL' => 'E02000990',
        '3YN' => 'E02000990',
        '3YP' => 'E02000997',
        '3YQ' => 'E02000997',
        '3YR' => 'E02000990',
        '3YS' => 'E02000997',
        '3YT' => 'E02000997',
        '3YW' => 'E02001014',
        '3YX' => 'E02001011',
        '3YY' => 'E02001014',
        '3ZB' => 'E02001011',
        '3ZD' => 'E02001011',
        '3ZE' => 'E02001011',
        '3ZF' => 'E02001011',
        '3ZG' => 'E02001011',
        '3ZH' => 'E02001011',
        '3ZJ' => 'E02001011',
        '3ZL' => 'E02001011',
        '3ZN' => 'E02001011',
        '3ZP' => 'E02001011',
        '3ZQ' => 'E02001011',
        '3ZR' => 'E02001011',
        '3ZS' => 'E02001014',
        '3ZT' => 'E02001014',
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
