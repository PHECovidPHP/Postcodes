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
final class SM7
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02006375',
        '1AB' => 'E02006377',
        '1AD' => 'E02006377',
        '1AE' => 'E02006377',
        '1AF' => 'E02006376',
        '1AG' => 'E02006377',
        '1AH' => 'E02006377',
        '1AJ' => 'E02006377',
        '1AL' => 'E02006376',
        '1AN' => 'E02006376',
        '1AP' => 'E02006376',
        '1AQ' => 'E02006376',
        '1AR' => 'E02006376',
        '1AS' => 'E02006375',
        '1AT' => 'E02006376',
        '1AU' => 'E02006376',
        '1AW' => 'E02006375',
        '1AX' => 'E02006375',
        '1AY' => 'E02006375',
        '1AZ' => 'E02006376',
        '1BA' => 'E02006376',
        '1BB' => 'E02006376',
        '1BD' => 'E02006376',
        '1BE' => 'E02006376',
        '1BF' => 'E02006376',
        '1BG' => 'E02006376',
        '1BH' => 'E02006375',
        '1BJ' => 'E02006375',
        '1BL' => 'E02006375',
        '1BN' => 'E02006375',
        '1BP' => 'E02006375',
        '1BQ' => 'E02006375',
        '1BS' => 'E02006375',
        '1BT' => 'E02006377',
        '1BU' => 'E02006377',
        '1BW' => 'E02006377',
        '1BX' => 'E02006376',
        '1BY' => 'E02006375',
        '1BZ' => 'E02006375',
        '1DA' => 'E02006375',
        '1DB' => 'E02006375',
        '1DD' => 'E02006375',
        '1DE' => 'E02006377',
        '1DF' => 'E02006377',
        '1DG' => 'E02006375',
        '1DH' => 'E02006375',
        '1DJ' => 'E02006376',
        '1DL' => 'E02006375',
        '1DN' => 'E02006375',
        '1DP' => 'E02006375',
        '1DQ' => 'E02006377',
        '1DR' => 'E02006375',
        '1DS' => 'E02006375',
        '1DX' => 'E02006375',
        '1DY' => 'E02006375',
        '1DZ' => 'E02006375',
        '1EA' => 'E02006375',
        '1EB' => 'E02006375',
        '1ED' => 'E02006375',
        '1EE' => 'E02006375',
        '1EF' => 'E02006375',
        '1EG' => 'E02006375',
        '1EH' => 'E02006375',
        '1EJ' => 'E02006375',
        '1EL' => 'E02006375',
        '1EP' => 'E02006375',
        '1EQ' => 'E02006375',
        '1ER' => 'E02006375',
        '1ES' => 'E02006375',
        '1ET' => 'E02006375',
        '1EW' => 'E02006375',
        '1EY' => 'E02006375',
        '1EZ' => 'E02006375',
        '1FA' => 'E02006376',
        '1HA' => 'E02006375',
        '1HB' => 'E02006375',
        '1HD' => 'E02006375',
        '1HE' => 'E02006375',
        '1HF' => 'E02006375',
        '1HG' => 'E02006375',
        '1HH' => 'E02006376',
        '1HL' => 'E02006375',
        '1HN' => 'E02006375',
        '1HP' => 'E02006375',
        '1HQ' => 'E02006375',
        '1HR' => 'E02006375',
        '1HS' => 'E02006375',
        '1HU' => 'E02006375',
        '1HW' => 'E02006375',
        '1JB' => 'E02006375',
        '1JG' => 'E02006375',
        '1JH' => 'E02006375',
        '1JJ' => 'E02006375',
        '1JL' => 'E02006375',
        '1JN' => 'E02006375',
        '1JP' => 'E02006375',
        '1JQ' => 'E02006375',
        '1JR' => 'E02006375',
        '1JS' => 'E02006375',
        '1JT' => 'E02006375',
        '1JW' => 'E02006375',
        '1JZ' => 'E02006375',
        '1LA' => 'E02006375',
        '1LB' => 'E02006375',
        '1LD' => 'E02006375',
        '1LE' => 'E02006375',
        '1LF' => 'E02006375',
        '1LG' => 'E02006375',
        '1LH' => 'E02006375',
        '1LJ' => 'E02006375',
        '1LL' => 'E02006375',
        '1LN' => 'E02006375',
        '1LP' => 'E02006375',
        '1LQ' => 'E02006375',
        '1LR' => 'E02006375',
        '1LS' => 'E02006375',
        '1LT' => 'E02006375',
        '1LU' => 'E02006375',
        '1LW' => 'E02006375',
        '1LX' => 'E02006375',
        '1LY' => 'E02006375',
        '1LZ' => 'E02006375',
        '1NA' => 'E02006375',
        '1NB' => 'E02006375',
        '1ND' => 'E02006375',
        '1NE' => 'E02006375',
        '1NF' => 'E02006375',
        '1NG' => 'E02006375',
        '1NH' => 'E02006375',
        '1NJ' => 'E02006375',
        '1NL' => 'E02006375',
        '1NN' => 'E02006375',
        '1NP' => 'E02006375',
        '1NQ' => 'E02006375',
        '1NR' => 'E02006375',
        '1NS' => 'E02006375',
        '1NT' => 'E02006375',
        '1NU' => 'E02006375',
        '1NW' => 'E02006375',
        '1NX' => 'E02006375',
        '1NY' => 'E02006375',
        '1NZ' => 'E02006375',
        '1PA' => 'E02006375',
        '1PB' => 'E02006375',
        '1PD' => 'E02006375',
        '1PE' => 'E02006375',
        '1PF' => 'E02006836',
        '1PG' => 'E02006375',
        '1PH' => 'E02006376',
        '1PJ' => 'E02006375',
        '1PL' => 'E02006836',
        '1PN' => 'E02006375',
        '1PP' => 'E02006375',
        '1PQ' => 'E02006836',
        '1PS' => 'E02006836',
        '1PW' => 'E02006836',
        '1PZ' => 'E02006375',
        '1QE' => 'E02006836',
        '1QF' => 'E02006376',
        '1QG' => 'E02006836',
        '1QH' => 'E02006836',
        '1QL' => 'E02006836',
        '1QN' => 'E02006836',
        '1QP' => 'E02006376',
        '1QQ' => 'E02006376',
        '1QR' => 'E02006836',
        '1QT' => 'E02006836',
        '1QW' => 'E02006836',
        '1QX' => 'E02006836',
        '1QY' => 'E02006376',
        '1QZ' => 'E02006836',
        '1RA' => 'E02006376',
        '1RB' => 'E02006836',
        '1RD' => 'E02006836',
        '1RE' => 'E02006836',
        '1RF' => 'E02006836',
        '1RG' => 'E02006375',
        '1RH' => 'E02006375',
        '1RJ' => 'E02006375',
        '1RL' => 'E02006375',
        '1RN' => 'E02006375',
        '1RP' => 'E02006375',
        '1RQ' => 'E02006375',
        '1RR' => 'E02006375',
        '1RS' => 'E02006375',
        '1RT' => 'E02006376',
        '1RU' => 'E02006376',
        '1RW' => 'E02006375',
        '1RX' => 'E02006376',
        '1RY' => 'E02006375',
        '1RZ' => 'E02006375',
        '1WA' => 'E02006376',
        '1WB' => 'E02006376',
        '1WF' => 'E02006376',
        '1WH' => 'E02006376',
        '1WL' => 'E02006376',
        '1WN' => 'E02006376',
        '1WP' => 'E02006376',
        '1WQ' => 'E02006376',
        '1WR' => 'E02006376',
        '1WS' => 'E02006376',
        '1WT' => 'E02006376',
        '1WU' => 'E02006376',
        '1WW' => 'E02006376',
        '1WX' => 'E02006376',
        '1WY' => 'E02006376',
        '1WZ' => 'E02006376',
        '1XZ' => 'E02006376',
        '1ZJ' => 'E02006376',
        '1ZL' => 'E02006376',
        '1ZN' => 'E02006375',
        '1ZP' => 'E02006376',
        '1ZQ' => 'E02006375',
        '1ZR' => 'E02006375',
        '1ZS' => 'E02006375',
        '1ZT' => 'E02006376',
        '1ZU' => 'E02006376',
        '1ZW' => 'E02006375',
        '1ZX' => 'E02006376',
        '2AA' => 'E02006376',
        '2AB' => 'E02006376',
        '2AD' => 'E02006376',
        '2AE' => 'E02006376',
        '2AF' => 'E02006376',
        '2AG' => 'E02006376',
        '2AH' => 'E02006376',
        '2AJ' => 'E02006376',
        '2AL' => 'E02006376',
        '2AN' => 'E02006376',
        '2AP' => 'E02006376',
        '2AQ' => 'E02006376',
        '2AR' => 'E02006376',
        '2AS' => 'E02006376',
        '2AT' => 'E02006376',
        '2AU' => 'E02006376',
        '2AW' => 'E02006376',
        '2AX' => 'E02006376',
        '2AY' => 'E02006376',
        '2AZ' => 'E02006376',
        '2BA' => 'E02006376',
        '2BB' => 'E02006376',
        '2BD' => 'E02006376',
        '2BE' => 'E02006376',
        '2BF' => 'E02006376',
        '2BG' => 'E02006376',
        '2BH' => 'E02006376',
        '2BJ' => 'E02006376',
        '2BL' => 'E02006376',
        '2BN' => 'E02006376',
        '2BP' => 'E02006376',
        '2BQ' => 'E02006376',
        '2BR' => 'E02006376',
        '2BS' => 'E02006376',
        '2BT' => 'E02006376',
        '2BU' => 'E02006376',
        '2BW' => 'E02006381',
        '2BX' => 'E02006376',
        '2BY' => 'E02006381',
        '2BZ' => 'E02006376',
        '2DA' => 'E02006376',
        '2DB' => 'E02006376',
        '2DD' => 'E02006376',
        '2DE' => 'E02006376',
        '2DF' => 'E02006376',
        '2DG' => 'E02006376',
        '2DH' => 'E02006376',
        '2DJ' => 'E02006376',
        '2DL' => 'E02006376',
        '2DN' => 'E02006376',
        '2DP' => 'E02006376',
        '2DQ' => 'E02006376',
        '2DR' => 'E02006376',
        '2DS' => 'E02006376',
        '2DT' => 'E02006376',
        '2DU' => 'E02006376',
        '2DW' => 'E02006376',
        '2DX' => 'E02006376',
        '2DY' => 'E02006376',
        '2DZ' => 'E02006376',
        '2EA' => 'E02006376',
        '2EB' => 'E02006376',
        '2ED' => 'E02006376',
        '2EE' => 'E02006376',
        '2EF' => 'E02006376',
        '2EG' => 'E02006376',
        '2EH' => 'E02006376',
        '2EJ' => 'E02006376',
        '2EL' => 'E02006376',
        '2EN' => 'E02006376',
        '2EP' => 'E02006376',
        '2EQ' => 'E02006376',
        '2ER' => 'E02006376',
        '2ES' => 'E02006376',
        '2ET' => 'E02006376',
        '2EU' => 'E02006376',
        '2EW' => 'E02006376',
        '2EX' => 'E02006376',
        '2EY' => 'E02006376',
        '2EZ' => 'E02006376',
        '2FA' => 'E02006381',
        '2FB' => 'E02006381',
        '2FD' => 'E02006381',
        '2FE' => 'E02006381',
        '2FF' => 'E02006381',
        '2FG' => 'E02006381',
        '2GD' => 'E02006376',
        '2GJ' => 'E02006376',
        '2HA' => 'E02006376',
        '2HB' => 'E02006376',
        '2HD' => 'E02006376',
        '2HE' => 'E02006376',
        '2HF' => 'E02006376',
        '2HG' => 'E02006376',
        '2HH' => 'E02006376',
        '2HJ' => 'E02006376',
        '2HL' => 'E02006376',
        '2HN' => 'E02006376',
        '2HR' => 'E02006376',
        '2HS' => 'E02006376',
        '2HT' => 'E02006376',
        '2HU' => 'E02006376',
        '2HX' => 'E02006376',
        '2HY' => 'E02006376',
        '2HZ' => 'E02006376',
        '2JA' => 'E02006376',
        '2JE' => 'E02006376',
        '2JF' => 'E02006376',
        '2JG' => 'E02006376',
        '2JH' => 'E02006376',
        '2JJ' => 'E02006376',
        '2JL' => 'E02006376',
        '2JN' => 'E02006376',
        '2JP' => 'E02006376',
        '2JQ' => 'E02006376',
        '2JR' => 'E02006376',
        '2JW' => 'E02006376',
        '2JX' => 'E02006376',
        '2JY' => 'E02006376',
        '2JZ' => 'E02006376',
        '2LA' => 'E02006376',
        '2LB' => 'E02006376',
        '2LD' => 'E02006376',
        '2LE' => 'E02006376',
        '2LG' => 'E02006376',
        '2LH' => 'E02006376',
        '2LJ' => 'E02006376',
        '2LL' => 'E02006376',
        '2LN' => 'E02006376',
        '2LP' => 'E02006376',
        '2LQ' => 'E02006376',
        '2LR' => 'E02006376',
        '2LS' => 'E02006376',
        '2LT' => 'E02006376',
        '2LU' => 'E02006376',
        '2LW' => 'E02006376',
        '2LX' => 'E02006376',
        '2LY' => 'E02006376',
        '2LZ' => 'E02006376',
        '2NA' => 'E02006376',
        '2NB' => 'E02006376',
        '2ND' => 'E02006376',
        '2NE' => 'E02006376',
        '2NF' => 'E02006376',
        '2NG' => 'E02006376',
        '2NH' => 'E02006376',
        '2NJ' => 'E02006376',
        '2NL' => 'E02006376',
        '2NN' => 'E02006376',
        '2NP' => 'E02006376',
        '2NQ' => 'E02006376',
        '2NR' => 'E02006376',
        '2NS' => 'E02006376',
        '2NT' => 'E02006376',
        '2NU' => 'E02006376',
        '2NW' => 'E02006376',
        '2NX' => 'E02006376',
        '2NY' => 'E02006376',
        '2NZ' => 'E02006376',
        '2PA' => 'E02006376',
        '2PB' => 'E02006376',
        '2PD' => 'E02006376',
        '2PE' => 'E02006376',
        '2PF' => 'E02006376',
        '2PG' => 'E02006376',
        '2PH' => 'E02006376',
        '2PJ' => 'E02006376',
        '2PL' => 'E02006376',
        '2PN' => 'E02006376',
        '2PP' => 'E02006376',
        '2PQ' => 'E02006376',
        '2PR' => 'E02006376',
        '2PS' => 'E02006376',
        '2PT' => 'E02006376',
        '2PU' => 'E02006376',
        '2PW' => 'E02006376',
        '2PX' => 'E02006376',
        '2PY' => 'E02006376',
        '2PZ' => 'E02006376',
        '2QA' => 'E02006376',
        '2QB' => 'E02006376',
        '2QD' => 'E02006376',
        '2QE' => 'E02006376',
        '2QF' => 'E02006376',
        '2QG' => 'E02006376',
        '2QH' => 'E02006376',
        '2QJ' => 'E02006376',
        '2QL' => 'E02006376',
        '2QR' => 'E02006376',
        '2QT' => 'E02006376',
        '2QU' => 'E02006376',
        '2QW' => 'E02006376',
        '2QX' => 'E02006376',
        '2QY' => 'E02006376',
        '2QZ' => 'E02006376',
        '2RA' => 'E02006376',
        '2RB' => 'E02006376',
        '2RD' => 'E02006376',
        '2RE' => 'E02006376',
        '2RF' => 'E02006376',
        '2RG' => 'E02006376',
        '2RH' => 'E02006376',
        '2RJ' => 'E02006376',
        '2RL' => 'E02006376',
        '2RN' => 'E02006376',
        '2WA' => 'E02006376',
        '2WB' => 'E02006376',
        '2WG' => 'E02006376',
        '2WR' => 'E02006376',
        '2WS' => 'E02006376',
        '2WT' => 'E02006376',
        '2WU' => 'E02006376',
        '2WW' => 'E02006376',
        '2WX' => 'E02006376',
        '2WY' => 'E02006376',
        '2WZ' => 'E02006376',
        '2XA' => 'E02006376',
        '2XB' => 'E02006376',
        '2YE' => 'E02006376',
        '2YZ' => 'E02006376',
        '2ZA' => 'E02006376',
        '2ZB' => 'E02006376',
        '2ZD' => 'E02006376',
        '2ZE' => 'E02006376',
        '2ZF' => 'E02006376',
        '2ZG' => 'E02006376',
        '2ZH' => 'E02006376',
        '2ZJ' => 'E02006376',
        '2ZL' => 'E02006376',
        '2ZN' => 'E02006376',
        '2ZP' => 'E02006376',
        '2ZQ' => 'E02006376',
        '2ZR' => 'E02006376',
        '2ZS' => 'E02006376',
        '2ZT' => 'E02006376',
        '2ZU' => 'E02006376',
        '2ZW' => 'E02006376',
        '2ZX' => 'E02006376',
        '3AA' => 'E02006376',
        '3AB' => 'E02006376',
        '3AD' => 'E02006376',
        '3AE' => 'E02006376',
        '3AF' => 'E02006376',
        '3AG' => 'E02006376',
        '3AH' => 'E02006378',
        '3AJ' => 'E02006376',
        '3AL' => 'E02006376',
        '3AN' => 'E02006376',
        '3AP' => 'E02006376',
        '3AQ' => 'E02006376',
        '3AR' => 'E02006378',
        '3AS' => 'E02006378',
        '3AT' => 'E02006378',
        '3AU' => 'E02000863',
        '3AW' => 'E02006376',
        '3BA' => 'E02000863',
        '3BE' => 'E02006378',
        '3BG' => 'E02006378',
        '3BH' => 'E02006378',
        '3BJ' => 'E02006378',
        '3BL' => 'E02006378',
        '3BN' => 'E02006378',
        '3BQ' => 'E02006378',
        '3BS' => 'E02006376',
        '3BT' => 'E02006376',
        '3BU' => 'E02006376',
        '3BW' => 'E02006378',
        '3BX' => 'E02006376',
        '3BY' => 'E02006376',
        '3DB' => 'E02006376',
        '3DD' => 'E02006376',
        '3DE' => 'E02006376',
        '3DG' => 'E02006376',
        '3DH' => 'E02006376',
        '3DL' => 'E02006376',
        '3DN' => 'E02006376',
        '3DS' => 'E02006378',
        '3DT' => 'E02006378',
        '3DX' => 'E02000863',
        '3DZ' => 'E02006378',
        '3EA' => 'E02006376',
        '3EE' => 'E02006378',
        '3EF' => 'E02006378',
        '3EH' => 'E02006378',
        '3EJ' => 'E02006378',
        '3EL' => 'E02006378',
        '3ER' => 'E02006378',
        '3ES' => 'E02006376',
        '3EU' => 'E02006376',
        '3EX' => 'E02006376',
        '3EY' => 'E02006378',
        '3EZ' => 'E02006378',
        '3HA' => 'E02006378',
        '3HB' => 'E02006378',
        '3HD' => 'E02006378',
        '3HE' => 'E02006378',
        '3HF' => 'E02006378',
        '3HG' => 'E02006378',
        '3HH' => 'E02006376',
        '3HJ' => 'E02006378',
        '3HP' => 'E02006378',
        '3HQ' => 'E02006378',
        '3HR' => 'E02006378',
        '3HS' => 'E02006378',
        '3HT' => 'E02006378',
        '3HU' => 'E02006378',
        '3HX' => 'E02006378',
        '3HY' => 'E02006378',
        '3HZ' => 'E02000863',
        '3JA' => 'E02000863',
        '3JB' => 'E02006378',
        '3JD' => 'E02006378',
        '3JE' => 'E02006378',
        '3JF' => 'E02000863',
        '3JG' => 'E02006378',
        '3JH' => 'E02006378',
        '3JJ' => 'E02006378',
        '3JL' => 'E02006378',
        '3JN' => 'E02006378',
        '3JP' => 'E02006378',
        '3JR' => 'E02006378',
        '3JS' => 'E02006378',
        '3JT' => 'E02006378',
        '3JU' => 'E02006378',
        '3JW' => 'E02006378',
        '3JX' => 'E02006378',
        '3JY' => 'E02006378',
        '3LA' => 'E02006378',
        '3LB' => 'E02006378',
        '3LE' => 'E02006376',
        '3LH' => 'E02006378',
        '3LJ' => 'E02006378',
        '3LL' => 'E02006376',
        '3LQ' => 'E02006378',
        '3LU' => 'E02006378',
        '3LY' => 'E02006378',
        '3NA' => 'E02006378',
        '3NB' => 'E02006378',
        '3ND' => 'E02006378',
        '3NE' => 'E02006378',
        '3NF' => 'E02006378',
        '3NG' => 'E02006378',
        '3NH' => 'E02006378',
        '3NJ' => 'E02006378',
        '3NL' => 'E02006378',
        '3NN' => 'E02006378',
        '3NP' => 'E02006378',
        '3NQ' => 'E02006378',
        '3NR' => 'E02006378',
        '3NS' => 'E02006378',
        '3NW' => 'E02006378',
        '3NX' => 'E02006378',
        '3NY' => 'E02006378',
        '3PA' => 'E02006378',
        '3PB' => 'E02006378',
        '3PD' => 'E02006378',
        '3PE' => 'E02006378',
        '3PF' => 'E02006378',
        '3PG' => 'E02006378',
        '3PH' => 'E02006378',
        '3PJ' => 'E02006378',
        '3PL' => 'E02006378',
        '3PN' => 'E02006378',
        '3PP' => 'E02006378',
        '3PQ' => 'E02006378',
        '3PS' => 'E02006378',
        '3PT' => 'E02006378',
        '3PU' => 'E02006378',
        '3PW' => 'E02006378',
        '3PX' => 'E02006378',
        '3PY' => 'E02006378',
        '3PZ' => 'E02006378',
        '3QA' => 'E02006378',
        '3QF' => 'E02006378',
        '3QG' => 'E02006378',
        '3QL' => 'E02006376',
        '3QN' => 'E02006376',
        '3QP' => 'E02006376',
        '3QR' => 'E02006376',
        '3QS' => 'E02006376',
        '3QT' => 'E02006376',
        '3QU' => 'E02006376',
        '3QW' => 'E02006376',
        '3QX' => 'E02006376',
        '3QY' => 'E02006376',
        '3QZ' => 'E02006376',
        '3RA' => 'E02006376',
        '3RB' => 'E02006376',
        '3RD' => 'E02006376',
        '3RE' => 'E02006376',
        '3RF' => 'E02006376',
        '3RG' => 'E02006376',
        '3RH' => 'E02006376',
        '3RJ' => 'E02006378',
        '3RN' => 'E02006376',
        '3RQ' => 'E02006378',
        '3RR' => 'E02006378',
        '3RS' => 'E02006376',
        '3RT' => 'E02006376',
        '3RU' => 'E02006376',
        '3RX' => 'E02006376',
        '3RZ' => 'E02006376',
        '3SA' => 'E02006376',
        '3WA' => 'E02006376',
        '3WL' => 'E02006376',
        '3WN' => 'E02006376',
        '3WP' => 'E02006376',
        '3WQ' => 'E02006376',
        '3WR' => 'E02006376',
        '3WT' => 'E02006376',
        '3WU' => 'E02006376',
        '3WW' => 'E02006376',
        '3WX' => 'E02006376',
        '3WY' => 'E02006376',
        '3YA' => 'E02006376',
        '3YB' => 'E02006376',
        '3YF' => 'E02006376',
        '3YQ' => 'E02006376',
        '3ZS' => 'E02006376',
        '3ZT' => 'E02006376',
        '3ZU' => 'E02006376',
        '3ZW' => 'E02006378',
        '3ZX' => 'E02006378',
        '9AF' => 'E02006376',
        '9AG' => 'E02006376',
        '9AL' => 'E02006376',
        '9AN' => 'E02006376',
        '9AQ' => 'E02006376',
        '9AS' => 'E02006376',
        '9AW' => 'E02006376',
        '9AX' => 'E02006376',
        '9AY' => 'E02006376',
        '9AZ' => 'E02006376',
        '9BA' => 'E02006376',
        '9BB' => 'E02006376',
        '9BD' => 'E02006376',
        '9BE' => 'E02006376',
        '9BF' => 'E02006376',
        '9BG' => 'E02006376',
        '9BH' => 'E02006376',
        '9BJ' => 'E02006376',
        '9BL' => 'E02006376',
        '9BN' => 'E02006376',
        '9BP' => 'E02006376',
        '9BQ' => 'E02006376',
        '9BR' => 'E02006376',
        '9BS' => 'E02006376',
        '9BT' => 'E02006376',
        '9BU' => 'E02006376',
        '9BW' => 'E02006376',
        '9BX' => 'E02006376',
        '9BY' => 'E02006376',
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
