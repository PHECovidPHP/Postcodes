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
final class GL54
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02004616',
        '1AB' => 'E02004616',
        '1AD' => 'E02004616',
        '1AE' => 'E02004616',
        '1AF' => 'E02004616',
        '1AG' => 'E02004616',
        '1AH' => 'E02004616',
        '1AJ' => 'E02004616',
        '1AL' => 'E02004616',
        '1AN' => 'E02004616',
        '1AP' => 'E02004616',
        '1AQ' => 'E02004616',
        '1AR' => 'E02004616',
        '1AS' => 'E02004616',
        '1AT' => 'E02004616',
        '1AU' => 'E02004616',
        '1AW' => 'E02004616',
        '1AX' => 'E02004616',
        '1AY' => 'E02004616',
        '1AZ' => 'E02004616',
        '1BA' => 'E02004616',
        '1BB' => 'E02004616',
        '1BD' => 'E02004616',
        '1BE' => 'E02004616',
        '1BG' => 'E02004616',
        '1BH' => 'E02004616',
        '1BJ' => 'E02004616',
        '1BL' => 'E02004616',
        '1BN' => 'E02004616',
        '1BP' => 'E02004616',
        '1BQ' => 'E02004616',
        '1BS' => 'E02004616',
        '1BT' => 'E02004616',
        '1BU' => 'E02004616',
        '1BW' => 'E02004616',
        '1BX' => 'E02004616',
        '1BY' => 'E02004616',
        '1BZ' => 'E02004616',
        '1DA' => 'E02004616',
        '1DB' => 'E02004616',
        '1DD' => 'E02004616',
        '1DE' => 'E02004616',
        '1DF' => 'E02004616',
        '1DG' => 'E02004616',
        '1DH' => 'E02004616',
        '1DJ' => 'E02004616',
        '1DL' => 'E02004616',
        '1DN' => 'E02004616',
        '1DP' => 'E02004616',
        '1DQ' => 'E02004616',
        '1DR' => 'E02004616',
        '1DS' => 'E02004616',
        '1DT' => 'E02004616',
        '1DU' => 'E02004616',
        '1DW' => 'E02004616',
        '1DX' => 'E02004616',
        '1DY' => 'E02004616',
        '1DZ' => 'E02004616',
        '1EA' => 'E02004616',
        '1EB' => 'E02004616',
        '1ED' => 'E02004616',
        '1EE' => 'E02004616',
        '1EF' => 'E02004616',
        '1EG' => 'E02004616',
        '1EH' => 'E02004616',
        '1EJ' => 'E02004616',
        '1EL' => 'E02004616',
        '1EN' => 'E02004616',
        '1EP' => 'E02004616',
        '1EQ' => 'E02004616',
        '1ER' => 'E02004616',
        '1ES' => 'E02004616',
        '1ET' => 'E02004616',
        '1EU' => 'E02004616',
        '1EW' => 'E02004617',
        '1EX' => 'E02004616',
        '1EY' => 'E02004617',
        '1EZ' => 'E02004617',
        '1FA' => 'E02004616',
        '1FB' => 'E02004616',
        '1FD' => 'E02004616',
        '1FE' => 'E02004616',
        '1FF' => 'E02004616',
        '1FG' => 'E02004616',
        '1FP' => 'E02004616',
        '1HA' => 'E02004617',
        '1HB' => 'E02004617',
        '1HD' => 'E02004617',
        '1HE' => 'E02004617',
        '1HF' => 'E02004617',
        '1HG' => 'E02004617',
        '1HH' => 'E02004616',
        '1HJ' => 'E02004617',
        '1HL' => 'E02004616',
        '1HN' => 'E02004616',
        '1HP' => 'E02004616',
        '1HQ' => 'E02004616',
        '1HR' => 'E02004616',
        '1HS' => 'E02004616',
        '1HT' => 'E02004616',
        '1HU' => 'E02004617',
        '1HW' => 'E02004616',
        '1HX' => 'E02004617',
        '1HY' => 'E02004617',
        '1HZ' => 'E02004617',
        '1JA' => 'E02004617',
        '1JB' => 'E02004617',
        '1JD' => 'E02004617',
        '1JE' => 'E02004617',
        '1JF' => 'E02004617',
        '1JG' => 'E02004617',
        '1JH' => 'E02004616',
        '1JJ' => 'E02004616',
        '1JL' => 'E02004617',
        '1JQ' => 'E02004616',
        '1JS' => 'E02004616',
        '1JT' => 'E02004616',
        '1JU' => 'E02004617',
        '1JW' => 'E02004616',
        '1JX' => 'E02004617',
        '1JY' => 'E02004616',
        '1JZ' => 'E02004617',
        '1LA' => 'E02004616',
        '1LB' => 'E02004617',
        '1LD' => 'E02004617',
        '1LE' => 'E02004617',
        '1LF' => 'E02004617',
        '1LG' => 'E02004617',
        '1LH' => 'E02004617',
        '1LJ' => 'E02004617',
        '1LL' => 'E02004617',
        '1LN' => 'E02004617',
        '1LP' => 'E02004617',
        '1LQ' => 'E02004617',
        '1LR' => 'E02004616',
        '1LS' => 'E02004616',
        '1LT' => 'E02004616',
        '1LU' => 'E02004616',
        '1LW' => 'E02004617',
        '1LX' => 'E02004616',
        '1LY' => 'E02004617',
        '1LZ' => 'E02004617',
        '1NA' => 'E02004616',
        '1SB' => 'E02004616',
        '1SD' => 'E02004616',
        '1SF' => 'E02004616',
        '1SS' => 'E02004616',
        '1WA' => 'E02004616',
        '1WD' => 'E02004616',
        '1WE' => 'E02004616',
        '1WF' => 'E02004616',
        '1WG' => 'E02004616',
        '1WH' => 'E02004616',
        '1WJ' => 'E02004616',
        '1WL' => 'E02004616',
        '1WN' => 'E02004616',
        '1WQ' => 'E02004616',
        '1WR' => 'E02004616',
        '1WS' => 'E02004616',
        '1WT' => 'E02004616',
        '1WU' => 'E02004616',
        '1WW' => 'E02004616',
        '1WX' => 'E02004616',
        '1WY' => 'E02004616',
        '1WZ' => 'E02004616',
        '1XW' => 'E02004616',
        '1XZ' => 'E02004616',
        '1YA' => 'E02004603',
        '1YB' => 'E02004603',
        '1YD' => 'E02004603',
        '1YE' => 'E02004603',
        '1YF' => 'E02004603',
        '1YG' => 'E02004603',
        '1YH' => 'E02004616',
        '1YJ' => 'E02004603',
        '1YL' => 'E02004616',
        '1YN' => 'E02004616',
        '1YP' => 'E02004616',
        '1YQ' => 'E02004616',
        '1YR' => 'E02004616',
        '1YS' => 'E02004616',
        '1YT' => 'E02004603',
        '1YU' => 'E02004616',
        '1ZX' => 'E02004616',
        '2AA' => 'E02004617',
        '2AB' => 'E02004617',
        '2AD' => 'E02004617',
        '2AE' => 'E02004617',
        '2AF' => 'E02004617',
        '2AG' => 'E02004617',
        '2AH' => 'E02004617',
        '2AJ' => 'E02004617',
        '2AL' => 'E02004617',
        '2AN' => 'E02004617',
        '2AP' => 'E02004617',
        '2AQ' => 'E02004617',
        '2AR' => 'E02004617',
        '2AS' => 'E02004617',
        '2AT' => 'E02004617',
        '2AU' => 'E02004617',
        '2AW' => 'E02004617',
        '2AX' => 'E02004617',
        '2AY' => 'E02004617',
        '2AZ' => 'E02004617',
        '2BA' => 'E02004617',
        '2BB' => 'E02004617',
        '2BD' => 'E02004617',
        '2BE' => 'E02004617',
        '2BG' => 'E02004617',
        '2BH' => 'E02004617',
        '2BJ' => 'E02004617',
        '2BL' => 'E02004617',
        '2BN' => 'E02004617',
        '2BP' => 'E02004617',
        '2BQ' => 'E02004617',
        '2BS' => 'E02004617',
        '2BT' => 'E02004617',
        '2BU' => 'E02004617',
        '2BW' => 'E02004617',
        '2BX' => 'E02004617',
        '2BY' => 'E02004617',
        '2BZ' => 'E02004617',
        '2DA' => 'E02004617',
        '2DB' => 'E02004617',
        '2DD' => 'E02004617',
        '2DE' => 'E02004617',
        '2DF' => 'E02004617',
        '2DG' => 'E02004617',
        '2DH' => 'E02004617',
        '2DJ' => 'E02004617',
        '2DL' => 'E02004617',
        '2DN' => 'E02004617',
        '2DP' => 'E02004617',
        '2DQ' => 'E02004617',
        '2DR' => 'E02004617',
        '2DS' => 'E02004617',
        '2DT' => 'E02004617',
        '2DU' => 'E02004617',
        '2DW' => 'E02004617',
        '2DX' => 'E02004617',
        '2DY' => 'E02004617',
        '2DZ' => 'E02004617',
        '2EA' => 'E02004617',
        '2EB' => 'E02004617',
        '2ED' => 'E02004617',
        '2EE' => 'E02004617',
        '2EF' => 'E02004617',
        '2EG' => 'E02004617',
        '2EH' => 'E02004617',
        '2EJ' => 'E02004617',
        '2EL' => 'E02004617',
        '2EN' => 'E02004617',
        '2EP' => 'E02004617',
        '2EQ' => 'E02004617',
        '2ER' => 'E02004617',
        '2ES' => 'E02004617',
        '2ET' => 'E02004617',
        '2EU' => 'E02004617',
        '2EW' => 'E02004617',
        '2EX' => 'E02004617',
        '2EY' => 'E02004617',
        '2EZ' => 'E02004616',
        '2FA' => 'E02004617',
        '2FB' => 'E02004617',
        '2FD' => 'E02004617',
        '2FE' => 'E02004617',
        '2FF' => 'E02004617',
        '2FG' => 'E02004617',
        '2FH' => 'E02004617',
        '2FJ' => 'E02004617',
        '2FL' => 'E02004617',
        '2FN' => 'E02004617',
        '2FP' => 'E02004617',
        '2FQ' => 'E02004617',
        '2FR' => 'E02004617',
        '2FS' => 'E02004617',
        '2FT' => 'E02004617',
        '2FW' => 'E02004617',
        '2FX' => 'E02004617',
        '2FY' => 'E02004617',
        '2FZ' => 'E02004617',
        '2GA' => 'E02004617',
        '2GB' => 'E02004617',
        '2GD' => 'E02004617',
        '2GE' => 'E02004617',
        '2GF' => 'E02004617',
        '2GG' => 'E02004617',
        '2GH' => 'E02004617',
        '2GJ' => 'E02004617',
        '2GL' => 'E02004617',
        '2GN' => 'E02004617',
        '2GP' => 'E02004617',
        '2GQ' => 'E02004617',
        '2GR' => 'E02004617',
        '2GS' => 'E02004617',
        '2GT' => 'E02004617',
        '2GU' => 'E02004617',
        '2GW' => 'E02004617',
        '2GX' => 'E02004617',
        '2GY' => 'E02004617',
        '2GZ' => 'E02004617',
        '2HA' => 'E02004617',
        '2HB' => 'E02004617',
        '2HD' => 'E02004617',
        '2HE' => 'E02004617',
        '2HF' => 'E02004617',
        '2HG' => 'E02004617',
        '2HH' => 'E02004617',
        '2HJ' => 'E02004617',
        '2HL' => 'E02004617',
        '2HN' => 'E02004617',
        '2HP' => 'E02004617',
        '2HQ' => 'E02004617',
        '2HR' => 'E02004617',
        '2HS' => 'E02004617',
        '2HT' => 'E02004617',
        '2HU' => 'E02004617',
        '2HW' => 'E02004617',
        '2HX' => 'E02004617',
        '2HY' => 'E02004617',
        '2HZ' => 'E02004617',
        '2JA' => 'E02004617',
        '2JB' => 'E02004617',
        '2JD' => 'E02004617',
        '2JE' => 'E02004617',
        '2JF' => 'E02004617',
        '2JG' => 'E02004617',
        '2JH' => 'E02004617',
        '2JJ' => 'E02004617',
        '2JL' => 'E02004617',
        '2JN' => 'E02004617',
        '2JP' => 'E02004617',
        '2JQ' => 'E02004617',
        '2JR' => 'E02004617',
        '2JS' => 'E02004617',
        '2JT' => 'E02004617',
        '2JU' => 'E02004617',
        '2JW' => 'E02004617',
        '2JX' => 'E02004617',
        '2JY' => 'E02004617',
        '2JZ' => 'E02004617',
        '2LA' => 'E02004617',
        '2LB' => 'E02004617',
        '2LD' => 'E02004617',
        '2LE' => 'E02004617',
        '2LF' => 'E02004617',
        '2LG' => 'E02004617',
        '2LH' => 'E02004617',
        '2LJ' => 'E02004617',
        '2LL' => 'E02004617',
        '2LN' => 'E02004617',
        '2LP' => 'E02004617',
        '2LQ' => 'E02004619',
        '2LR' => 'E02004617',
        '2LS' => 'E02004617',
        '2LT' => 'E02004617',
        '2LU' => 'E02004617',
        '2LW' => 'E02004617',
        '2LX' => 'E02004617',
        '2LY' => 'E02004617',
        '2LZ' => 'E02004617',
        '2NA' => 'E02004617',
        '2NB' => 'E02004617',
        '2ND' => 'E02004617',
        '2NE' => 'E02004617',
        '2NF' => 'E02004617',
        '2NG' => 'E02004617',
        '2NH' => 'E02004617',
        '2NJ' => 'E02004617',
        '2NL' => 'E02004617',
        '2NN' => 'E02004617',
        '2NP' => 'E02004617',
        '2NQ' => 'E02004617',
        '2NR' => 'E02004617',
        '2NS' => 'E02004617',
        '2NT' => 'E02004617',
        '2NU' => 'E02004617',
        '2NW' => 'E02004617',
        '2NX' => 'E02004617',
        '2NY' => 'E02004617',
        '2NZ' => 'E02004617',
        '2PA' => 'E02004617',
        '2PB' => 'E02004617',
        '2PD' => 'E02004617',
        '2PE' => 'E02004617',
        '2PF' => 'E02004617',
        '2PG' => 'E02004617',
        '2PH' => 'E02004617',
        '2PJ' => 'E02004617',
        '2PL' => 'E02004617',
        '2PN' => 'E02004617',
        '2PP' => 'E02004617',
        '2PQ' => 'E02004617',
        '2PR' => 'E02004617',
        '2PS' => 'E02004617',
        '2PT' => 'E02004617',
        '2PU' => 'E02004617',
        '2PW' => 'E02004617',
        '2PX' => 'E02004617',
        '2PY' => 'E02004617',
        '2PZ' => 'E02004617',
        '2QA' => 'E02004617',
        '2QB' => 'E02004617',
        '2QD' => 'E02004617',
        '2QE' => 'E02004617',
        '2QF' => 'E02004617',
        '2QG' => 'E02004617',
        '2QH' => 'E02004617',
        '2QJ' => 'E02004617',
        '2QL' => 'E02004617',
        '2QN' => 'E02004617',
        '2QP' => 'E02004617',
        '2QQ' => 'E02004617',
        '2QR' => 'E02004617',
        '2QS' => 'E02004617',
        '2QT' => 'E02004617',
        '2QU' => 'E02004617',
        '2QW' => 'E02004617',
        '2QX' => 'E02004617',
        '2QY' => 'E02004617',
        '2QZ' => 'E02004617',
        '2RA' => 'E02004617',
        '2RB' => 'E02004617',
        '2RD' => 'E02004617',
        '2RE' => 'E02004617',
        '2RF' => 'E02004617',
        '2RG' => 'E02004617',
        '2RH' => 'E02004617',
        '2RJ' => 'E02004617',
        '2RL' => 'E02004617',
        '2RN' => 'E02004617',
        '2RP' => 'E02004617',
        '2RQ' => 'E02004617',
        '2RR' => 'E02004617',
        '2RS' => 'E02004617',
        '2RT' => 'E02004617',
        '2RU' => 'E02004617',
        '2RW' => 'E02004617',
        '2RX' => 'E02004617',
        '2RY' => 'E02004617',
        '2RZ' => 'E02004617',
        '2WA' => 'E02004603',
        '2WD' => 'E02004617',
        '2WE' => 'E02004603',
        '2WF' => 'E02004603',
        '2WG' => 'E02004603',
        '2WH' => 'E02004603',
        '2WJ' => 'E02004617',
        '2WL' => 'E02004603',
        '2WN' => 'E02004617',
        '2WP' => 'E02004617',
        '2WQ' => 'E02004617',
        '2WR' => 'E02004603',
        '2WS' => 'E02004603',
        '2WT' => 'E02004603',
        '2WU' => 'E02004603',
        '2WW' => 'E02004603',
        '2WX' => 'E02004603',
        '2WY' => 'E02004603',
        '2WZ' => 'E02004603',
        '2XS' => 'E02004617',
        '2XT' => 'E02004617',
        '2XU' => 'E02004617',
        '2XW' => 'E02004617',
        '2XX' => 'E02004617',
        '2XY' => 'E02004603',
        '2XZ' => 'E02004603',
        '2YA' => 'E02004603',
        '2YB' => 'E02004603',
        '2YD' => 'E02004603',
        '2YE' => 'E02004603',
        '2YF' => 'E02004617',
        '2YG' => 'E02004603',
        '2YH' => 'E02004603',
        '2YJ' => 'E02004617',
        '2YL' => 'E02004603',
        '2YN' => 'E02004603',
        '2YP' => 'E02004603',
        '2YQ' => 'E02004603',
        '2YR' => 'E02004617',
        '2YS' => 'E02004603',
        '2YT' => 'E02004603',
        '2YU' => 'E02004603',
        '2YW' => 'E02004603',
        '2YX' => 'E02004603',
        '2YY' => 'E02004617',
        '2YZ' => 'E02004603',
        '2ZA' => 'E02004617',
        '2ZB' => 'E02004617',
        '2ZD' => 'E02004603',
        '2ZE' => 'E02004603',
        '2ZF' => 'E02004617',
        '2ZG' => 'E02004617',
        '2ZH' => 'E02004603',
        '2ZJ' => 'E02004603',
        '2ZL' => 'E02004603',
        '2ZN' => 'E02004603',
        '2ZP' => 'E02004617',
        '2ZR' => 'E02004617',
        '3AA' => 'E02004617',
        '3AB' => 'E02004617',
        '3AD' => 'E02004617',
        '3AE' => 'E02004617',
        '3AF' => 'E02004617',
        '3AG' => 'E02004617',
        '3AH' => 'E02004617',
        '3AJ' => 'E02004617',
        '3AL' => 'E02004619',
        '3AN' => 'E02004619',
        '3AP' => 'E02004619',
        '3AQ' => 'E02004617',
        '3AR' => 'E02004619',
        '3AS' => 'E02004617',
        '3AT' => 'E02004617',
        '3AU' => 'E02004617',
        '3AW' => 'E02004619',
        '3AX' => 'E02004617',
        '3AY' => 'E02004617',
        '3AZ' => 'E02004617',
        '3BA' => 'E02004617',
        '3BB' => 'E02004617',
        '3BD' => 'E02004617',
        '3BE' => 'E02004619',
        '3BG' => 'E02004619',
        '3BH' => 'E02004617',
        '3BJ' => 'E02004617',
        '3BL' => 'E02004617',
        '3BN' => 'E02004617',
        '3BP' => 'E02004617',
        '3BQ' => 'E02004617',
        '3BS' => 'E02004618',
        '3BT' => 'E02004618',
        '3BU' => 'E02004618',
        '3BW' => 'E02004617',
        '3BX' => 'E02004668',
        '3BY' => 'E02004617',
        '3BZ' => 'E02004617',
        '3DA' => 'E02004619',
        '3DB' => 'E02004619',
        '3DD' => 'E02004619',
        '3DH' => 'E02004619',
        '3DJ' => 'E02004619',
        '3DL' => 'E02004619',
        '3DN' => 'E02004619',
        '3DR' => 'E02004619',
        '3DS' => 'E02004619',
        '3DT' => 'E02004619',
        '3DU' => 'E02004619',
        '3DW' => 'E02004619',
        '3DX' => 'E02004619',
        '3DY' => 'E02004619',
        '3DZ' => 'E02004619',
        '3EA' => 'E02004619',
        '3ED' => 'E02004619',
        '3EE' => 'E02004619',
        '3EF' => 'E02004619',
        '3EG' => 'E02004619',
        '3EH' => 'E02004619',
        '3EJ' => 'E02004619',
        '3EL' => 'E02004619',
        '3EN' => 'E02004619',
        '3EP' => 'E02004619',
        '3EQ' => 'E02004619',
        '3ER' => 'E02004619',
        '3ES' => 'E02004619',
        '3ET' => 'E02004619',
        '3EU' => 'E02004619',
        '3EW' => 'E02004619',
        '3EX' => 'E02004619',
        '3EY' => 'E02004619',
        '3EZ' => 'E02004619',
        '3FA' => 'E02004619',
        '3FB' => 'E02004619',
        '3FR' => 'E02004619',
        '3HA' => 'E02004619',
        '3HB' => 'E02004619',
        '3HD' => 'E02004619',
        '3HE' => 'E02004619',
        '3HF' => 'E02004619',
        '3HG' => 'E02004619',
        '3HH' => 'E02004619',
        '3HJ' => 'E02004619',
        '3HL' => 'E02004619',
        '3HN' => 'E02004619',
        '3HP' => 'E02004619',
        '3HQ' => 'E02004619',
        '3HR' => 'E02004619',
        '3HS' => 'E02004619',
        '3HT' => 'E02004619',
        '3HU' => 'E02004619',
        '3HW' => 'E02004619',
        '3HX' => 'E02004619',
        '3HY' => 'E02004619',
        '3HZ' => 'E02004619',
        '3JA' => 'E02004619',
        '3JB' => 'E02004619',
        '3JD' => 'E02004619',
        '3JE' => 'E02004619',
        '3JF' => 'E02004619',
        '3JG' => 'E02004619',
        '3JH' => 'E02004619',
        '3JJ' => 'E02004619',
        '3JL' => 'E02004619',
        '3JN' => 'E02004619',
        '3JP' => 'E02004618',
        '3JQ' => 'E02004619',
        '3JR' => 'E02004618',
        '3JS' => 'E02004618',
        '3JT' => 'E02004619',
        '3JU' => 'E02004619',
        '3JW' => 'E02004619',
        '3JX' => 'E02004619',
        '3JY' => 'E02004619',
        '3JZ' => 'E02004619',
        '3LA' => 'E02004619',
        '3LB' => 'E02004619',
        '3LD' => 'E02004619',
        '3LE' => 'E02004618',
        '3LF' => 'E02004618',
        '3LG' => 'E02004618',
        '3LH' => 'E02004619',
        '3LJ' => 'E02004618',
        '3LL' => 'E02004618',
        '3LN' => 'E02004619',
        '3LP' => 'E02004619',
        '3LQ' => 'E02004618',
        '3LR' => 'E02004619',
        '3LS' => 'E02004619',
        '3LU' => 'E02004619',
        '3LX' => 'E02004619',
        '3LY' => 'E02004619',
        '3LZ' => 'E02004619',
        '3NA' => 'E02004619',
        '3NB' => 'E02004619',
        '3ND' => 'E02004619',
        '3NE' => 'E02004619',
        '3NF' => 'E02004619',
        '3NG' => 'E02004619',
        '3NH' => 'E02004619',
        '3NJ' => 'E02004619',
        '3NL' => 'E02004619',
        '3NN' => 'E02004619',
        '3NP' => 'E02004618',
        '3NQ' => 'E02004619',
        '3NR' => 'E02004618',
        '3NS' => 'E02004618',
        '3NT' => 'E02004618',
        '3NU' => 'E02004618',
        '3NW' => 'E02004619',
        '3NX' => 'E02004618',
        '3NY' => 'E02004618',
        '3NZ' => 'E02004619',
        '3PA' => 'E02004619',
        '3PB' => 'E02004619',
        '3PD' => 'E02004619',
        '3PE' => 'E02004619',
        '3PF' => 'E02004619',
        '3PG' => 'E02004619',
        '3PH' => 'E02004619',
        '3PJ' => 'E02004619',
        '3PL' => 'E02004619',
        '3PN' => 'E02004619',
        '3PP' => 'E02004619',
        '3PQ' => 'E02004619',
        '3PR' => 'E02004619',
        '3PS' => 'E02004619',
        '3PT' => 'E02004619',
        '3PU' => 'E02004619',
        '3PW' => 'E02004619',
        '3PX' => 'E02004619',
        '3PY' => 'E02004619',
        '3PZ' => 'E02004619',
        '3QA' => 'E02004619',
        '3QB' => 'E02004619',
        '3QD' => 'E02004619',
        '3QE' => 'E02004618',
        '3QF' => 'E02004619',
        '3QG' => 'E02004619',
        '3QH' => 'E02004619',
        '3QJ' => 'E02004619',
        '3QP' => 'E02004619',
        '3QQ' => 'E02004619',
        '3QR' => 'E02004619',
        '3QS' => 'E02004619',
        '3QT' => 'E02004619',
        '3QU' => 'E02004619',
        '3QW' => 'E02004619',
        '3QX' => 'E02004619',
        '3QY' => 'E02004619',
        '3QZ' => 'E02004619',
        '3RA' => 'E02004619',
        '3RB' => 'E02004619',
        '3RD' => 'E02004619',
        '3RE' => 'E02004619',
        '3RF' => 'E02004619',
        '3RL' => 'E02004619',
        '3RN' => 'E02004619',
        '3RP' => 'E02004619',
        '3WD' => 'E02004603',
        '3WE' => 'E02004617',
        '3WJ' => 'E02004617',
        '3WL' => 'E02004617',
        '3WN' => 'E02004619',
        '3WP' => 'E02004603',
        '3WQ' => 'E02004603',
        '3WR' => 'E02004603',
        '3WS' => 'E02004603',
        '3WT' => 'E02004619',
        '3WU' => 'E02004619',
        '3WW' => 'E02004603',
        '3WX' => 'E02004603',
        '3WY' => 'E02004603',
        '3WZ' => 'E02004603',
        '3XJ' => 'E02004603',
        '3XQ' => 'E02004603',
        '3XR' => 'E02004619',
        '3XS' => 'E02004619',
        '3YA' => 'E02004617',
        '3YB' => 'E02004619',
        '3YD' => 'E02004603',
        '3YE' => 'E02004603',
        '3YF' => 'E02004603',
        '3YG' => 'E02004603',
        '3YH' => 'E02004603',
        '3YJ' => 'E02004603',
        '3YL' => 'E02004617',
        '3YN' => 'E02004603',
        '3YP' => 'E02004603',
        '3YQ' => 'E02004603',
        '3YR' => 'E02004603',
        '3YS' => 'E02004603',
        '3YT' => 'E02004603',
        '3YU' => 'E02004603',
        '3YW' => 'E02004603',
        '3YX' => 'E02004603',
        '3YZ' => 'E02004617',
        '3ZA' => 'E02004603',
        '3ZQ' => 'E02004603',
        '3ZR' => 'E02004603',
        '3ZS' => 'E02004603',
        '3ZU' => 'E02004603',
        '4AA' => 'E02004618',
        '4AB' => 'E02004618',
        '4AD' => 'E02004618',
        '4AE' => 'E02004618',
        '4AF' => 'E02004618',
        '4AG' => 'E02004618',
        '4AH' => 'E02004618',
        '4AJ' => 'E02004618',
        '4AL' => 'E02004618',
        '4AN' => 'E02004618',
        '4AP' => 'E02004618',
        '4AQ' => 'E02004618',
        '4AR' => 'E02004618',
        '4AS' => 'E02004618',
        '4AT' => 'E02004618',
        '4AU' => 'E02004618',
        '4AW' => 'E02004618',
        '4AX' => 'E02004618',
        '4AY' => 'E02004618',
        '4AZ' => 'E02004618',
        '4BA' => 'E02004618',
        '4BB' => 'E02004618',
        '4BD' => 'E02004618',
        '4BE' => 'E02004618',
        '4BG' => 'E02004618',
        '4BH' => 'E02004618',
        '4BJ' => 'E02004618',
        '4BL' => 'E02004618',
        '4BN' => 'E02004618',
        '4BP' => 'E02004618',
        '4BQ' => 'E02004618',
        '4BS' => 'E02004618',
        '4BT' => 'E02004618',
        '4BU' => 'E02004618',
        '4BW' => 'E02004618',
        '4DA' => 'E02004618',
        '4DB' => 'E02004618',
        '4DD' => 'E02004618',
        '4DE' => 'E02004618',
        '4DF' => 'E02004618',
        '4DG' => 'E02004618',
        '4DH' => 'E02004618',
        '4DL' => 'E02004618',
        '4DN' => 'E02004618',
        '4DP' => 'E02004618',
        '4DR' => 'E02004618',
        '4DS' => 'E02004618',
        '4DT' => 'E02004618',
        '4DU' => 'E02004618',
        '4DW' => 'E02004618',
        '4DX' => 'E02004618',
        '4DY' => 'E02004618',
        '4DZ' => 'E02004618',
        '4EA' => 'E02004618',
        '4EB' => 'E02004618',
        '4ED' => 'E02004618',
        '4EE' => 'E02004618',
        '4EF' => 'E02004618',
        '4EG' => 'E02004618',
        '4EP' => 'E02004611',
        '4ER' => 'E02004611',
        '4ES' => 'E02004611',
        '4ET' => 'E02004669',
        '4EU' => 'E02004669',
        '4EX' => 'E02004618',
        '4EY' => 'E02004618',
        '4EZ' => 'E02004611',
        '4GF' => 'E02004611',
        '4GG' => 'E02004611',
        '4GH' => 'E02004611',
        '4GZ' => 'E02004618',
        '4HA' => 'E02004618',
        '4HB' => 'E02004618',
        '4HD' => 'E02004618',
        '4HE' => 'E02004618',
        '4HF' => 'E02004618',
        '4HG' => 'E02004618',
        '4HH' => 'E02004608',
        '4HJ' => 'E02004618',
        '4HL' => 'E02004618',
        '4HN' => 'E02004618',
        '4HP' => 'E02004618',
        '4HQ' => 'E02004611',
        '4HR' => 'E02004618',
        '4HS' => 'E02004618',
        '4HT' => 'E02004618',
        '4HU' => 'E02004618',
        '4HW' => 'E02004618',
        '4HX' => 'E02004618',
        '4HY' => 'E02004618',
        '4HZ' => 'E02004618',
        '4JA' => 'E02004618',
        '4JB' => 'E02004618',
        '4JD' => 'E02004618',
        '4JE' => 'E02004618',
        '4JF' => 'E02004618',
        '4JG' => 'E02004618',
        '4JH' => 'E02004618',
        '4JJ' => 'E02004618',
        '4JL' => 'E02004618',
        '4JN' => 'E02004618',
        '4JP' => 'E02004618',
        '4JQ' => 'E02004618',
        '4JR' => 'E02004618',
        '4JS' => 'E02004618',
        '4JT' => 'E02004618',
        '4JU' => 'E02004618',
        '4JW' => 'E02004618',
        '4JX' => 'E02004618',
        '4JY' => 'E02004618',
        '4JZ' => 'E02004618',
        '4LA' => 'E02004618',
        '4LB' => 'E02004618',
        '4LD' => 'E02004618',
        '4LE' => 'E02004618',
        '4LF' => 'E02004618',
        '4LG' => 'E02004618',
        '4LH' => 'E02004618',
        '4LJ' => 'E02004618',
        '4LL' => 'E02004618',
        '4LN' => 'E02004618',
        '4LP' => 'E02004618',
        '4LQ' => 'E02004618',
        '4LR' => 'E02004618',
        '4LS' => 'E02004618',
        '4LT' => 'E02004618',
        '4LU' => 'E02004618',
        '4LW' => 'E02004618',
        '4LX' => 'E02004618',
        '4LY' => 'E02004618',
        '4LZ' => 'E02004618',
        '4NB' => 'E02004618',
        '4NE' => 'E02004618',
        '4NF' => 'E02004618',
        '4NG' => 'E02004618',
        '4NH' => 'E02004618',
        '4NJ' => 'E02004618',
        '4NN' => 'E02004618',
        '4NP' => 'E02004618',
        '4NQ' => 'E02004618',
        '4NR' => 'E02004618',
        '4NS' => 'E02004618',
        '4NT' => 'E02004618',
        '4NU' => 'E02004618',
        '4NW' => 'E02004618',
        '4NX' => 'E02004618',
        '4NY' => 'E02004618',
        '4WA' => 'E02004619',
        '4WB' => 'E02004618',
        '4WD' => 'E02004603',
        '4WT' => 'E02004619',
        '4WU' => 'E02004603',
        '4WW' => 'E02004603',
        '4WX' => 'E02004603',
        '4WY' => 'E02004603',
        '4WZ' => 'E02004603',
        '4XZ' => 'E02004618',
        '4YA' => 'E02004603',
        '4YB' => 'E02004603',
        '4YD' => 'E02004603',
        '4YE' => 'E02004603',
        '4YF' => 'E02004618',
        '4YG' => 'E02004603',
        '4YH' => 'E02004619',
        '4YJ' => 'E02004618',
        '4YL' => 'E02004603',
        '4YN' => 'E02004618',
        '4YP' => 'E02004603',
        '4YQ' => 'E02004603',
        '4YU' => 'E02004603',
        '4ZA' => 'E02004603',
        '4ZR' => 'E02004603',
        '5AA' => 'E02004668',
        '5AB' => 'E02004668',
        '5AD' => 'E02004669',
        '5AE' => 'E02004669',
        '5AF' => 'E02004669',
        '5AG' => 'E02004668',
        '5AH' => 'E02004668',
        '5AJ' => 'E02004668',
        '5AL' => 'E02004668',
        '5AN' => 'E02004668',
        '5AP' => 'E02004668',
        '5AQ' => 'E02004668',
        '5AR' => 'E02004668',
        '5AS' => 'E02004617',
        '5AT' => 'E02004617',
        '5AU' => 'E02004617',
        '5AW' => 'E02004668',
        '5AX' => 'E02004617',
        '5AY' => 'E02004617',
        '5AZ' => 'E02004668',
        '5BA' => 'E02004668',
        '5BB' => 'E02004668',
        '5BD' => 'E02004668',
        '5BE' => 'E02004668',
        '5BG' => 'E02004668',
        '5BH' => 'E02004668',
        '5BJ' => 'E02004668',
        '5BL' => 'E02004668',
        '5BN' => 'E02004668',
        '5BP' => 'E02004668',
        '5BQ' => 'E02004668',
        '5BS' => 'E02004668',
        '5BT' => 'E02004668',
        '5BU' => 'E02004668',
        '5BW' => 'E02004668',
        '5BX' => 'E02004668',
        '5BY' => 'E02004668',
        '5BZ' => 'E02004668',
        '5DA' => 'E02004668',
        '5DB' => 'E02004668',
        '5DD' => 'E02004668',
        '5DE' => 'E02004668',
        '5DF' => 'E02004668',
        '5DG' => 'E02004668',
        '5DH' => 'E02004668',
        '5DJ' => 'E02004668',
        '5DL' => 'E02004668',
        '5DN' => 'E02004668',
        '5DP' => 'E02004668',
        '5DQ' => 'E02004668',
        '5DR' => 'E02004668',
        '5DS' => 'E02004668',
        '5DT' => 'E02004668',
        '5DU' => 'E02004668',
        '5DW' => 'E02004668',
        '5DX' => 'E02004668',
        '5DY' => 'E02004668',
        '5DZ' => 'E02004668',
        '5EA' => 'E02004668',
        '5EB' => 'E02004668',
        '5ED' => 'E02004668',
        '5EE' => 'E02004668',
        '5EF' => 'E02004668',
        '5EG' => 'E02004668',
        '5EH' => 'E02004668',
        '5EJ' => 'E02004668',
        '5EL' => 'E02004668',
        '5EN' => 'E02004668',
        '5EP' => 'E02004668',
        '5EQ' => 'E02004668',
        '5ER' => 'E02004668',
        '5ES' => 'E02004668',
        '5ET' => 'E02004668',
        '5EU' => 'E02004668',
        '5EW' => 'E02004668',
        '5EX' => 'E02004668',
        '5EY' => 'E02004668',
        '5EZ' => 'E02004668',
        '5FA' => 'E02004668',
        '5FB' => 'E02004668',
        '5FD' => 'E02004668',
        '5FE' => 'E02004668',
        '5FF' => 'E02004668',
        '5FG' => 'E02004668',
        '5FH' => 'E02004668',
        '5FJ' => 'E02004668',
        '5FL' => 'E02004617',
        '5FN' => 'E02004617',
        '5FR' => 'E02004617',
        '5GA' => 'E02004618',
        '5GB' => 'E02004668',
        '5GD' => 'E02004668',
        '5GE' => 'E02004668',
        '5GF' => 'E02004668',
        '5GG' => 'E02004668',
        '5GH' => 'E02004668',
        '5GZ' => 'E02004668',
        '5HA' => 'E02004668',
        '5HB' => 'E02004668',
        '5HD' => 'E02004669',
        '5HE' => 'E02004669',
        '5HF' => 'E02004669',
        '5HG' => 'E02004668',
        '5HH' => 'E02004668',
        '5HJ' => 'E02004668',
        '5HL' => 'E02004668',
        '5HN' => 'E02004668',
        '5HP' => 'E02004668',
        '5HQ' => 'E02004668',
        '5HR' => 'E02004668',
        '5HS' => 'E02004668',
        '5HT' => 'E02004668',
        '5HU' => 'E02004668',
        '5HW' => 'E02004668',
        '5HX' => 'E02004668',
        '5HY' => 'E02004668',
        '5HZ' => 'E02004668',
        '5JA' => 'E02004668',
        '5JB' => 'E02004668',
        '5JD' => 'E02004668',
        '5JE' => 'E02004668',
        '5JF' => 'E02004668',
        '5JG' => 'E02004668',
        '5JH' => 'E02004668',
        '5JJ' => 'E02004668',
        '5JL' => 'E02004668',
        '5JN' => 'E02004668',
        '5JP' => 'E02004668',
        '5JQ' => 'E02004668',
        '5JR' => 'E02004668',
        '5JS' => 'E02004668',
        '5JT' => 'E02004668',
        '5JU' => 'E02004668',
        '5JW' => 'E02004668',
        '5JX' => 'E02004668',
        '5JY' => 'E02004668',
        '5JZ' => 'E02004668',
        '5LA' => 'E02004668',
        '5LB' => 'E02004668',
        '5LD' => 'E02004668',
        '5LE' => 'E02004668',
        '5LF' => 'E02004668',
        '5LG' => 'E02004668',
        '5LH' => 'E02004668',
        '5LJ' => 'E02004668',
        '5LL' => 'E02004668',
        '5LN' => 'E02004668',
        '5LP' => 'E02004668',
        '5LQ' => 'E02004668',
        '5LR' => 'E02004668',
        '5LS' => 'E02004668',
        '5LT' => 'E02004668',
        '5LU' => 'E02004668',
        '5LW' => 'E02004668',
        '5LX' => 'E02004668',
        '5LY' => 'E02004668',
        '5LZ' => 'E02004668',
        '5NA' => 'E02004668',
        '5NB' => 'E02004668',
        '5ND' => 'E02004668',
        '5NE' => 'E02004668',
        '5NF' => 'E02004668',
        '5NG' => 'E02004668',
        '5NH' => 'E02004668',
        '5NJ' => 'E02004668',
        '5NL' => 'E02004668',
        '5NN' => 'E02004668',
        '5NP' => 'E02004668',
        '5NQ' => 'E02004668',
        '5NR' => 'E02004668',
        '5NS' => 'E02004668',
        '5NT' => 'E02004668',
        '5NU' => 'E02004668',
        '5NW' => 'E02004668',
        '5NX' => 'E02004668',
        '5NY' => 'E02004668',
        '5NZ' => 'E02004668',
        '5PA' => 'E02004668',
        '5PB' => 'E02004668',
        '5PD' => 'E02004668',
        '5PE' => 'E02004668',
        '5PF' => 'E02004668',
        '5PG' => 'E02004668',
        '5PH' => 'E02004668',
        '5PJ' => 'E02004668',
        '5PL' => 'E02004668',
        '5PN' => 'E02004668',
        '5PP' => 'E02004668',
        '5PQ' => 'E02004668',
        '5PR' => 'E02004668',
        '5PS' => 'E02004668',
        '5PT' => 'E02004668',
        '5PU' => 'E02004668',
        '5PW' => 'E02004668',
        '5PX' => 'E02004668',
        '5PY' => 'E02004668',
        '5PZ' => 'E02004668',
        '5QA' => 'E02004668',
        '5QB' => 'E02004668',
        '5QD' => 'E02004668',
        '5QE' => 'E02004668',
        '5QF' => 'E02004668',
        '5QG' => 'E02004668',
        '5QH' => 'E02004668',
        '5QJ' => 'E02004668',
        '5QL' => 'E02004668',
        '5QN' => 'E02004668',
        '5QP' => 'E02004668',
        '5QQ' => 'E02004668',
        '5QR' => 'E02004668',
        '5QS' => 'E02004668',
        '5QT' => 'E02004668',
        '5QU' => 'E02004668',
        '5QW' => 'E02004668',
        '5QX' => 'E02004668',
        '5QY' => 'E02004668',
        '5QZ' => 'E02004668',
        '5RA' => 'E02004668',
        '5RB' => 'E02004668',
        '5RD' => 'E02004668',
        '5RE' => 'E02004668',
        '5RF' => 'E02004668',
        '5RG' => 'E02004668',
        '5RH' => 'E02004618',
        '5RJ' => 'E02004668',
        '5RL' => 'E02004617',
        '5RN' => 'E02004668',
        '5RP' => 'E02004617',
        '5RQ' => 'E02004618',
        '5RR' => 'E02004617',
        '5RS' => 'E02004617',
        '5RT' => 'E02004617',
        '5RU' => 'E02004617',
        '5RW' => 'E02004617',
        '5RX' => 'E02004617',
        '5RY' => 'E02004668',
        '5RZ' => 'E02004668',
        '5SA' => 'E02004668',
        '5SB' => 'E02004668',
        '5SD' => 'E02004618',
        '5SF' => 'E02004668',
        '5SG' => 'E02004617',
        '5SH' => 'E02004618',
        '5SJ' => 'E02004618',
        '5SL' => 'E02004618',
        '5SN' => 'E02004618',
        '5SP' => 'E02004618',
        '5SR' => 'E02004618',
        '5SS' => 'E02004618',
        '5ST' => 'E02004618',
        '5SU' => 'E02004668',
        '5SW' => 'E02004618',
        '5SX' => 'E02004617',
        '5SY' => 'E02004668',
        '5SZ' => 'E02004668',
        '5TA' => 'E02004668',
        '5TB' => 'E02004668',
        '5TD' => 'E02004668',
        '5TE' => 'E02004668',
        '5TF' => 'E02004668',
        '5TG' => 'E02004668',
        '5TH' => 'E02004668',
        '5TJ' => 'E02004618',
        '5TL' => 'E02004618',
        '5TN' => 'E02004618',
        '5TP' => 'E02004618',
        '5TQ' => 'E02004668',
        '5TS' => 'E02004668',
        '5TT' => 'E02004617',
        '5TU' => 'E02004617',
        '5TW' => 'E02004668',
        '5TX' => 'E02004617',
        '5TY' => 'E02004617',
        '5TZ' => 'E02004617',
        '5UA' => 'E02004617',
        '5UB' => 'E02004617',
        '5UD' => 'E02004617',
        '5UE' => 'E02004617',
        '5UF' => 'E02004617',
        '5UG' => 'E02004617',
        '5UH' => 'E02004603',
        '5UJ' => 'E02004668',
        '5UL' => 'E02004668',
        '5UN' => 'E02004603',
        '5UP' => 'E02004617',
        '5UQ' => 'E02004668',
        '5UR' => 'E02004617',
        '5US' => 'E02004617',
        '5UT' => 'E02004617',
        '5UU' => 'E02004617',
        '5UW' => 'E02004603',
        '5UX' => 'E02004617',
        '5UY' => 'E02004668',
        '5UZ' => 'E02004617',
        '5WA' => 'E02004603',
        '5WD' => 'E02004603',
        '5WE' => 'E02004668',
        '5WF' => 'E02004668',
        '5WG' => 'E02004603',
        '5WH' => 'E02004668',
        '5WJ' => 'E02004603',
        '5WL' => 'E02004603',
        '5WN' => 'E02004603',
        '5WP' => 'E02004668',
        '5WQ' => 'E02004603',
        '5WR' => 'E02004603',
        '5WS' => 'E02004603',
        '5WT' => 'E02004603',
        '5WU' => 'E02004603',
        '5WW' => 'E02004603',
        '5WX' => 'E02004603',
        '5WY' => 'E02004603',
        '5WZ' => 'E02004603',
        '5XA' => 'E02004617',
        '5XB' => 'E02004603',
        '5XD' => 'E02004603',
        '5XE' => 'E02004603',
        '5XF' => 'E02004603',
        '5XG' => 'E02004618',
        '5XH' => 'E02004618',
        '5XJ' => 'E02004618',
        '5XL' => 'E02004618',
        '5XN' => 'E02004668',
        '5XP' => 'E02004603',
        '5XQ' => 'E02004618',
        '5XR' => 'E02004603',
        '5XS' => 'E02004617',
        '5XT' => 'E02004617',
        '5XU' => 'E02004617',
        '5XW' => 'E02004603',
        '5XX' => 'E02004668',
        '5XY' => 'E02004668',
        '5XZ' => 'E02004668',
        '5YA' => 'E02004603',
        '5YB' => 'E02004603',
        '5YD' => 'E02004603',
        '5YE' => 'E02004668',
        '5YF' => 'E02004668',
        '5YG' => 'E02004668',
        '5YH' => 'E02004668',
        '5YJ' => 'E02004668',
        '5YL' => 'E02004668',
        '5YN' => 'E02004668',
        '5YP' => 'E02004668',
        '5YQ' => 'E02004668',
        '5YR' => 'E02004668',
        '5YS' => 'E02004668',
        '5YT' => 'E02004668',
        '5YU' => 'E02004668',
        '5YW' => 'E02004668',
        '5YX' => 'E02004668',
        '5YY' => 'E02004668',
        '5YZ' => 'E02004668',
        '5ZA' => 'E02004603',
        '5ZB' => 'E02004603',
        '5ZD' => 'E02004603',
        '5ZE' => 'E02004603',
        '5ZF' => 'E02004603',
        '5ZG' => 'E02004668',
        '5ZH' => 'E02004603',
        '5ZJ' => 'E02004603',
        '5ZL' => 'E02004603',
        '5ZN' => 'E02004668',
        '5ZP' => 'E02004603',
        '5ZQ' => 'E02004603',
        '5ZR' => 'E02004668',
        '5ZS' => 'E02004668',
        '5ZT' => 'E02004603',
        '5ZU' => 'E02004603',
        '5ZW' => 'E02004603',
        '5ZX' => 'E02004668',
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
