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
final class WR1
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02006744',
        '1AB' => 'E02006736',
        '1AD' => 'E02006740',
        '1AE' => 'E02006737',
        '1AF' => 'E02006737',
        '1AG' => 'E02006737',
        '1AJ' => 'E02006744',
        '1AN' => 'E02006740',
        '1DA' => 'E02006740',
        '1DB' => 'E02006740',
        '1DD' => 'E02006740',
        '1DE' => 'E02006740',
        '1DF' => 'E02006740',
        '1DG' => 'E02006740',
        '1DH' => 'E02006740',
        '1DJ' => 'E02006740',
        '1DL' => 'E02006740',
        '1DN' => 'E02006740',
        '1DP' => 'E02006740',
        '1DQ' => 'E02006740',
        '1DR' => 'E02006740',
        '1DS' => 'E02006740',
        '1DT' => 'E02006740',
        '1DU' => 'E02006740',
        '1DW' => 'E02006740',
        '1DX' => 'E02006740',
        '1DZ' => 'E02006740',
        '1EA' => 'E02006740',
        '1EB' => 'E02006740',
        '1ED' => 'E02006740',
        '1EE' => 'E02006740',
        '1EF' => 'E02006740',
        '1EH' => 'E02006740',
        '1EJ' => 'E02006740',
        '1EN' => 'E02006740',
        '1EQ' => 'E02006740',
        '1EW' => 'E02006740',
        '1HA' => 'E02006740',
        '1HB' => 'E02006740',
        '1HD' => 'E02006740',
        '1HE' => 'E02006740',
        '1HF' => 'E02006740',
        '1HG' => 'E02006740',
        '1HH' => 'E02006740',
        '1HJ' => 'E02006740',
        '1HL' => 'E02006740',
        '1HN' => 'E02006740',
        '1HP' => 'E02006740',
        '1HQ' => 'E02006740',
        '1HR' => 'E02006740',
        '1HS' => 'E02006740',
        '1HT' => 'E02006740',
        '1HU' => 'E02006740',
        '1HW' => 'E02006740',
        '1HX' => 'E02006740',
        '1HY' => 'E02006740',
        '1HZ' => 'E02006740',
        '1JA' => 'E02006737',
        '1JB' => 'E02006737',
        '1JD' => 'E02006740',
        '1JE' => 'E02006737',
        '1JF' => 'E02006740',
        '1JG' => 'E02006737',
        '1JH' => 'E02006740',
        '1JL' => 'E02006740',
        '1JP' => 'E02006740',
        '1JQ' => 'E02006740',
        '1JR' => 'E02006740',
        '1JS' => 'E02006740',
        '1JT' => 'E02006740',
        '1JU' => 'E02006740',
        '1JW' => 'E02006740',
        '1JX' => 'E02006740',
        '1JY' => 'E02006740',
        '1JZ' => 'E02006740',
        '1LA' => 'E02006740',
        '1LH' => 'E02006740',
        '1LJ' => 'E02006744',
        '1LL' => 'E02006740',
        '1LN' => 'E02006740',
        '1LP' => 'E02006740',
        '1LQ' => 'E02006736',
        '1LR' => 'E02006740',
        '1LS' => 'E02006740',
        '1LT' => 'E02006740',
        '1LU' => 'E02006740',
        '1LW' => 'E02006740',
        '1LX' => 'E02006740',
        '1LY' => 'E02006740',
        '1LZ' => 'E02006740',
        '1NA' => 'E02006740',
        '1NB' => 'E02006740',
        '1ND' => 'E02006740',
        '1NE' => 'E02006744',
        '1NF' => 'E02006740',
        '1NG' => 'E02006740',
        '1NH' => 'E02006740',
        '1NJ' => 'E02006740',
        '1NL' => 'E02006740',
        '1NN' => 'E02006740',
        '1NP' => 'E02006740',
        '1NQ' => 'E02006740',
        '1NR' => 'E02006740',
        '1NS' => 'E02006740',
        '1NT' => 'E02006740',
        '1NU' => 'E02006740',
        '1NW' => 'E02006740',
        '1NX' => 'E02006740',
        '1NY' => 'E02006740',
        '1NZ' => 'E02006740',
        '1PA' => 'E02006740',
        '1PB' => 'E02006740',
        '1PD' => 'E02006740',
        '1PE' => 'E02006740',
        '1PF' => 'E02006740',
        '1PG' => 'E02006740',
        '1PH' => 'E02006740',
        '1PJ' => 'E02006740',
        '1PL' => 'E02006740',
        '1PN' => 'E02006740',
        '1PP' => 'E02006740',
        '1PQ' => 'E02006740',
        '1PR' => 'E02006740',
        '1PS' => 'E02006740',
        '1PT' => 'E02006740',
        '1PU' => 'E02006740',
        '1PW' => 'E02006740',
        '1PX' => 'E02006740',
        '1PY' => 'E02006740',
        '1PZ' => 'E02006740',
        '1QA' => 'E02006740',
        '1QB' => 'E02006740',
        '1QD' => 'E02006740',
        '1QE' => 'E02006740',
        '1QF' => 'E02006740',
        '1QG' => 'E02006740',
        '1QH' => 'E02006740',
        '1QJ' => 'E02006740',
        '1QL' => 'E02006740',
        '1QN' => 'E02006740',
        '1QP' => 'E02006740',
        '1QQ' => 'E02006740',
        '1QR' => 'E02006740',
        '1QS' => 'E02006740',
        '1QT' => 'E02006740',
        '1QU' => 'E02006740',
        '1QW' => 'E02006740',
        '1QX' => 'E02006740',
        '1QY' => 'E02006737',
        '1QZ' => 'E02006740',
        '1RA' => 'E02006740',
        '1RB' => 'E02006737',
        '1RD' => 'E02006740',
        '1RE' => 'E02006740',
        '1RF' => 'E02006740',
        '1RG' => 'E02006740',
        '1RJ' => 'E02006737',
        '1RL' => 'E02006737',
        '1RN' => 'E02006737',
        '1RP' => 'E02006740',
        '1RQ' => 'E02006737',
        '1RS' => 'E02006740',
        '1RT' => 'E02006740',
        '1RU' => 'E02006740',
        '1RX' => 'E02006740',
        '1RY' => 'E02006740',
        '1RZ' => 'E02006740',
        '1SA' => 'E02006740',
        '1SB' => 'E02006740',
        '1SD' => 'E02006737',
        '1SE' => 'E02006737',
        '1SF' => 'E02006740',
        '1SG' => 'E02006740',
        '1SP' => 'E02006740',
        '1SR' => 'E02006740',
        '1SS' => 'E02006740',
        '1ST' => 'E02006740',
        '1TA' => 'E02006740',
        '1TB' => 'E02006740',
        '1TD' => 'E02006740',
        '1TE' => 'E02006740',
        '1TG' => 'E02006740',
        '1TH' => 'E02006740',
        '1TJ' => 'E02006740',
        '1TL' => 'E02006740',
        '1TN' => 'E02006740',
        '1TQ' => 'E02006740',
        '1TR' => 'E02006740',
        '1TS' => 'E02006740',
        '1TT' => 'E02006740',
        '1TU' => 'E02006740',
        '1TW' => 'E02006740',
        '1UA' => 'E02006744',
        '1UD' => 'E02006740',
        '1UE' => 'E02006740',
        '1UF' => 'E02006744',
        '1UG' => 'E02006740',
        '1UH' => 'E02006740',
        '1UJ' => 'E02006736',
        '1UN' => 'E02006740',
        '1UP' => 'E02006744',
        '1UQ' => 'E02006740',
        '1UR' => 'E02006740',
        '1US' => 'E02006744',
        '1UT' => 'E02006744',
        '1UU' => 'E02006744',
        '1UW' => 'E02006740',
        '1UX' => 'E02006740',
        '1UY' => 'E02006740',
        '1UZ' => 'E02006740',
        '1WA' => 'E02006736',
        '1WB' => 'E02006736',
        '1WE' => 'E02006744',
        '1WH' => 'E02006744',
        '1WJ' => 'E02006740',
        '1WL' => 'E02006736',
        '1WN' => 'E02006744',
        '1WP' => 'E02006736',
        '1WQ' => 'E02006736',
        '1WR' => 'E02006736',
        '1WS' => 'E02006744',
        '1WT' => 'E02006736',
        '1WU' => 'E02006736',
        '1WW' => 'E02006744',
        '1WX' => 'E02006736',
        '1WY' => 'E02006736',
        '1WZ' => 'E02006736',
        '1XB' => 'E02006740',
        '1XD' => 'E02006736',
        '1XE' => 'E02006736',
        '1XF' => 'E02006736',
        '1XG' => 'E02006736',
        '1XH' => 'E02006740',
        '1XN' => 'E02006736',
        '1XR' => 'E02006736',
        '1XU' => 'E02006740',
        '1XX' => 'E02006740',
        '1XY' => 'E02006736',
        '1XZ' => 'E02006740',
        '1YA' => 'E02006736',
        '1YB' => 'E02006736',
        '1YD' => 'E02006740',
        '1YE' => 'E02006736',
        '1YF' => 'E02006740',
        '1YG' => 'E02006736',
        '1YH' => 'E02006736',
        '1YJ' => 'E02006740',
        '1YL' => 'E02006736',
        '1YN' => 'E02006736',
        '1YP' => 'E02006736',
        '1YQ' => 'E02006744',
        '1YR' => 'E02006736',
        '1YS' => 'E02006736',
        '1YT' => 'E02006736',
        '1YU' => 'E02006736',
        '1YW' => 'E02006740',
        '1YX' => 'E02006736',
        '1YY' => 'E02006740',
        '1YZ' => 'E02006736',
        '1ZA' => 'E02006736',
        '1ZE' => 'E02006736',
        '1ZF' => 'E02006740',
        '1ZG' => 'E02006736',
        '1ZH' => 'E02006740',
        '1ZJ' => 'E02006740',
        '1ZL' => 'E02006736',
        '1ZN' => 'E02006740',
        '1ZP' => 'E02006744',
        '1ZQ' => 'E02006736',
        '1ZR' => 'E02006736',
        '1ZS' => 'E02006736',
        '1ZT' => 'E02006736',
        '1ZU' => 'E02006736',
        '1ZW' => 'E02006736',
        '1ZX' => 'E02006736',
        '2AA' => 'E02006746',
        '2AB' => 'E02006744',
        '2AD' => 'E02006744',
        '2AE' => 'E02006744',
        '2AF' => 'E02006744',
        '2AG' => 'E02006744',
        '2AH' => 'E02006744',
        '2AJ' => 'E02006746',
        '2AL' => 'E02006744',
        '2AN' => 'E02006744',
        '2AP' => 'E02006744',
        '2AQ' => 'E02006744',
        '2AR' => 'E02006744',
        '2AS' => 'E02006744',
        '2AT' => 'E02006744',
        '2AU' => 'E02006744',
        '2AW' => 'E02006744',
        '2AX' => 'E02006744',
        '2AY' => 'E02006746',
        '2AZ' => 'E02006744',
        '2BA' => 'E02006744',
        '2BB' => 'E02006744',
        '2BE' => 'E02006744',
        '2BF' => 'E02006746',
        '2BG' => 'E02006744',
        '2BH' => 'E02006744',
        '2BJ' => 'E02006744',
        '2BL' => 'E02006744',
        '2BN' => 'E02006744',
        '2BP' => 'E02006744',
        '2BQ' => 'E02006746',
        '2BS' => 'E02006744',
        '2BT' => 'E02006744',
        '2BU' => 'E02006744',
        '2BX' => 'E02006746',
        '2BY' => 'E02006744',
        '2BZ' => 'E02006744',
        '2DA' => 'E02006744',
        '2DB' => 'E02006744',
        '2DD' => 'E02006744',
        '2DE' => 'E02006744',
        '2DF' => 'E02006744',
        '2DG' => 'E02006744',
        '2DH' => 'E02006744',
        '2DJ' => 'E02006744',
        '2DL' => 'E02006744',
        '2DN' => 'E02006744',
        '2DP' => 'E02006744',
        '2DQ' => 'E02006744',
        '2DR' => 'E02006744',
        '2DS' => 'E02006744',
        '2DT' => 'E02006744',
        '2DU' => 'E02006744',
        '2DW' => 'E02006744',
        '2DX' => 'E02006744',
        '2DY' => 'E02006744',
        '2DZ' => 'E02006744',
        '2EA' => 'E02006744',
        '2ED' => 'E02006744',
        '2EE' => 'E02006744',
        '2EF' => 'E02006740',
        '2EG' => 'E02006740',
        '2EH' => 'E02006740',
        '2EJ' => 'E02006740',
        '2EL' => 'E02006744',
        '2EN' => 'E02006740',
        '2EP' => 'E02006740',
        '2EQ' => 'E02006744',
        '2ER' => 'E02006744',
        '2ES' => 'E02006744',
        '2ET' => 'E02006740',
        '2EU' => 'E02006740',
        '2EW' => 'E02006740',
        '2EX' => 'E02006744',
        '2EY' => 'E02006744',
        '2EZ' => 'E02006744',
        '2GA' => 'E02006746',
        '2GB' => 'E02006746',
        '2GE' => 'E02006746',
        '2GH' => 'E02006746',
        '2GJ' => 'E02006746',
        '2GL' => 'E02006746',
        '2GT' => 'E02006746',
        '2GX' => 'E02006746',
        '2HA' => 'E02006744',
        '2HB' => 'E02006744',
        '2HD' => 'E02006744',
        '2HE' => 'E02006744',
        '2HF' => 'E02006744',
        '2HG' => 'E02006744',
        '2HH' => 'E02006740',
        '2HJ' => 'E02006740',
        '2HL' => 'E02006744',
        '2HN' => 'E02006744',
        '2HP' => 'E02006744',
        '2HQ' => 'E02006744',
        '2HR' => 'E02006744',
        '2HS' => 'E02006744',
        '2HT' => 'E02006744',
        '2HU' => 'E02006744',
        '2HW' => 'E02006744',
        '2HX' => 'E02006744',
        '2HY' => 'E02006744',
        '2HZ' => 'E02006744',
        '2JA' => 'E02006744',
        '2JB' => 'E02006744',
        '2JD' => 'E02006744',
        '2JE' => 'E02006744',
        '2JF' => 'E02006740',
        '2JG' => 'E02006744',
        '2JH' => 'E02006740',
        '2JJ' => 'E02006740',
        '2JL' => 'E02006745',
        '2JN' => 'E02006740',
        '2JP' => 'E02006744',
        '2JQ' => 'E02006744',
        '2JR' => 'E02006744',
        '2JS' => 'E02006744',
        '2JT' => 'E02006740',
        '2JW' => 'E02006740',
        '2JX' => 'E02006744',
        '2JY' => 'E02006744',
        '2JZ' => 'E02006744',
        '2LA' => 'E02006744',
        '2LB' => 'E02006744',
        '2LD' => 'E02006744',
        '2LE' => 'E02006744',
        '2LF' => 'E02006744',
        '2LG' => 'E02006744',
        '2LH' => 'E02006744',
        '2LJ' => 'E02006744',
        '2LL' => 'E02006744',
        '2LN' => 'E02006744',
        '2LP' => 'E02006744',
        '2LQ' => 'E02006744',
        '2LR' => 'E02006744',
        '2LS' => 'E02006744',
        '2LT' => 'E02006744',
        '2LU' => 'E02006744',
        '2LW' => 'E02006744',
        '2LX' => 'E02006744',
        '2LY' => 'E02006744',
        '2LZ' => 'E02006744',
        '2NA' => 'E02006744',
        '2NB' => 'E02006744',
        '2ND' => 'E02006744',
        '2NE' => 'E02006744',
        '2NF' => 'E02006746',
        '2NG' => 'E02006746',
        '2NH' => 'E02006746',
        '2NJ' => 'E02006744',
        '2NL' => 'E02006746',
        '2NN' => 'E02006744',
        '2NP' => 'E02006746',
        '2NQ' => 'E02006746',
        '2NR' => 'E02006746',
        '2NS' => 'E02006746',
        '2NT' => 'E02006744',
        '2NU' => 'E02006744',
        '2NW' => 'E02006746',
        '2NX' => 'E02006744',
        '2NY' => 'E02006746',
        '2NZ' => 'E02006744',
        '2PA' => 'E02006744',
        '2PB' => 'E02006744',
        '2PD' => 'E02006744',
        '2PE' => 'E02006744',
        '2PF' => 'E02006744',
        '2PG' => 'E02006744',
        '2PH' => 'E02006746',
        '2PJ' => 'E02006744',
        '2PL' => 'E02006744',
        '2PN' => 'E02006744',
        '2PP' => 'E02006746',
        '2PQ' => 'E02006744',
        '2PS' => 'E02006744',
        '2PT' => 'E02006744',
        '2PU' => 'E02006744',
        '2PW' => 'E02006744',
        '2PX' => 'E02006744',
        '2PY' => 'E02006740',
        '2PZ' => 'E02006744',
        '2QA' => 'E02006740',
        '2QB' => 'E02006744',
        '2QD' => 'E02006744',
        '2QE' => 'E02006744',
        '2QF' => 'E02006744',
        '2QG' => 'E02006744',
        '2QH' => 'E02006744',
        '2QJ' => 'E02006744',
        '2QL' => 'E02006744',
        '2QN' => 'E02006744',
        '2QP' => 'E02006744',
        '2QQ' => 'E02006744',
        '2QR' => 'E02006744',
        '2QS' => 'E02006744',
        '2QT' => 'E02006744',
        '2QU' => 'E02006744',
        '2QW' => 'E02006744',
        '2QX' => 'E02006744',
        '2QY' => 'E02006744',
        '2QZ' => 'E02006744',
        '2RA' => 'E02006744',
        '2RB' => 'E02006744',
        '2RD' => 'E02006744',
        '2RE' => 'E02006744',
        '2RF' => 'E02006744',
        '2RG' => 'E02006744',
        '2RH' => 'E02006740',
        '2RJ' => 'E02006744',
        '2RL' => 'E02006740',
        '2RN' => 'E02006744',
        '2RP' => 'E02006744',
        '2RQ' => 'E02006744',
        '2RR' => 'E02006744',
        '2RS' => 'E02006744',
        '2RT' => 'E02006744',
        '2RU' => 'E02006744',
        '2RW' => 'E02006740',
        '2RX' => 'E02006744',
        '2RY' => 'E02006744',
        '2RZ' => 'E02006744',
        '2SA' => 'E02006744',
        '2SB' => 'E02006744',
        '2SD' => 'E02006744',
        '2SE' => 'E02006744',
        '2SF' => 'E02006744',
        '2SG' => 'E02006744',
        '2SH' => 'E02006744',
        '2SJ' => 'E02006744',
        '2SQ' => 'E02006744',
        '2WD' => 'E02006746',
        '2WR' => 'E02006746',
        '2WZ' => 'E02006736',
        '2XG' => 'E02006744',
        '2YA' => 'E02006744',
        '2YB' => 'E02006744',
        '2YD' => 'E02006736',
        '2YE' => 'E02006744',
        '2YF' => 'E02006744',
        '2YG' => 'E02006744',
        '2YH' => 'E02006736',
        '2YJ' => 'E02006736',
        '2YL' => 'E02006744',
        '2YN' => 'E02006736',
        '2YP' => 'E02006736',
        '2YQ' => 'E02006744',
        '2YR' => 'E02006736',
        '2YS' => 'E02006744',
        '2YT' => 'E02006744',
        '2YU' => 'E02006736',
        '2YW' => 'E02006736',
        '2YX' => 'E02006744',
        '2YY' => 'E02006744',
        '2YZ' => 'E02006744',
        '2ZB' => 'E02006744',
        '2ZE' => 'E02006736',
        '3AA' => 'E02006740',
        '3AB' => 'E02006740',
        '3AD' => 'E02006740',
        '3AE' => 'E02006744',
        '3AF' => 'E02006740',
        '3AG' => 'E02006740',
        '3AH' => 'E02006740',
        '3AJ' => 'E02006740',
        '3AL' => 'E02006740',
        '3AN' => 'E02006740',
        '3AP' => 'E02006740',
        '3AQ' => 'E02006740',
        '3AR' => 'E02006740',
        '3AS' => 'E02006740',
        '3AT' => 'E02006740',
        '3AU' => 'E02006740',
        '3AW' => 'E02006740',
        '3AX' => 'E02006740',
        '3AY' => 'E02006740',
        '3AZ' => 'E02006740',
        '3BA' => 'E02006740',
        '3BB' => 'E02006740',
        '3BH' => 'E02006740',
        '3BJ' => 'E02006740',
        '3BL' => 'E02006740',
        '3BN' => 'E02006740',
        '3BP' => 'E02006740',
        '3BQ' => 'E02006740',
        '3BS' => 'E02006740',
        '3BT' => 'E02006740',
        '3BU' => 'E02006740',
        '3BW' => 'E02006740',
        '3BX' => 'E02006740',
        '3BY' => 'E02006740',
        '3BZ' => 'E02006740',
        '3DA' => 'E02006740',
        '3DB' => 'E02006740',
        '3DD' => 'E02006740',
        '3DE' => 'E02006740',
        '3DF' => 'E02006740',
        '3DG' => 'E02006740',
        '3DH' => 'E02006740',
        '3DJ' => 'E02006740',
        '3DL' => 'E02006740',
        '3DN' => 'E02006740',
        '3DP' => 'E02006740',
        '3DQ' => 'E02006740',
        '3DR' => 'E02006740',
        '3DS' => 'E02006740',
        '3DT' => 'E02006740',
        '3DU' => 'E02006740',
        '3DW' => 'E02006740',
        '3DX' => 'E02006740',
        '3DY' => 'E02006740',
        '3DZ' => 'E02006740',
        '3EA' => 'E02006740',
        '3EB' => 'E02006740',
        '3ED' => 'E02006740',
        '3EE' => 'E02006740',
        '3EF' => 'E02006740',
        '3EG' => 'E02006740',
        '3EH' => 'E02006740',
        '3EJ' => 'E02006740',
        '3EL' => 'E02006740',
        '3EN' => 'E02006740',
        '3EP' => 'E02006740',
        '3EQ' => 'E02006740',
        '3ER' => 'E02006740',
        '3ES' => 'E02006740',
        '3ET' => 'E02006740',
        '3EU' => 'E02006740',
        '3EW' => 'E02006740',
        '3EX' => 'E02006740',
        '3EY' => 'E02006740',
        '3EZ' => 'E02006740',
        '3FD' => 'E02006740',
        '3FE' => 'E02006740',
        '3FF' => 'E02006740',
        '3HA' => 'E02006740',
        '3HB' => 'E02006740',
        '3HD' => 'E02006740',
        '3HE' => 'E02006740',
        '3HF' => 'E02006740',
        '3HG' => 'E02006740',
        '3HH' => 'E02006740',
        '3HJ' => 'E02006736',
        '3HL' => 'E02006740',
        '3HN' => 'E02006740',
        '3HP' => 'E02006740',
        '3HQ' => 'E02006740',
        '3HR' => 'E02006740',
        '3HS' => 'E02006740',
        '3HT' => 'E02006740',
        '3HU' => 'E02006740',
        '3HW' => 'E02006740',
        '3HX' => 'E02006740',
        '3HY' => 'E02006740',
        '3HZ' => 'E02006740',
        '3JA' => 'E02006740',
        '3JB' => 'E02006740',
        '3JD' => 'E02006740',
        '3JE' => 'E02006740',
        '3JF' => 'E02006740',
        '3JG' => 'E02006740',
        '3JH' => 'E02006740',
        '3JJ' => 'E02006740',
        '3JL' => 'E02006740',
        '3JN' => 'E02006740',
        '3JP' => 'E02006740',
        '3JQ' => 'E02006740',
        '3JR' => 'E02006740',
        '3JS' => 'E02006740',
        '3JT' => 'E02006740',
        '3JU' => 'E02006736',
        '3JW' => 'E02006740',
        '3JX' => 'E02006740',
        '3JY' => 'E02006740',
        '3JZ' => 'E02006736',
        '3LA' => 'E02006740',
        '3LB' => 'E02006740',
        '3LD' => 'E02006740',
        '3LE' => 'E02006740',
        '3LF' => 'E02006740',
        '3LH' => 'E02006740',
        '3LJ' => 'E02006740',
        '3LL' => 'E02006740',
        '3LN' => 'E02006740',
        '3LQ' => 'E02006740',
        '3LR' => 'E02006740',
        '3LS' => 'E02006740',
        '3LT' => 'E02006740',
        '3LU' => 'E02006740',
        '3LX' => 'E02006740',
        '3LY' => 'E02006740',
        '3LZ' => 'E02006740',
        '3NA' => 'E02006740',
        '3NB' => 'E02006740',
        '3ND' => 'E02006740',
        '3NE' => 'E02006740',
        '3NF' => 'E02006740',
        '3NG' => 'E02006740',
        '3NH' => 'E02006740',
        '3NJ' => 'E02006740',
        '3NL' => 'E02006740',
        '3NN' => 'E02006740',
        '3NP' => 'E02006740',
        '3NQ' => 'E02006740',
        '3NR' => 'E02006740',
        '3NS' => 'E02006740',
        '3NT' => 'E02006740',
        '3NU' => 'E02006740',
        '3NW' => 'E02006740',
        '3NX' => 'E02006740',
        '3NY' => 'E02006740',
        '3NZ' => 'E02006740',
        '3PA' => 'E02006740',
        '3PB' => 'E02006740',
        '3PD' => 'E02006740',
        '3PF' => 'E02006740',
        '3PG' => 'E02006740',
        '3PJ' => 'E02006744',
        '3PL' => 'E02006740',
        '3PN' => 'E02006740',
        '3PP' => 'E02006740',
        '3PR' => 'E02006744',
        '3PS' => 'E02006744',
        '3PT' => 'E02006744',
        '3PU' => 'E02006740',
        '3PX' => 'E02006744',
        '3PY' => 'E02006744',
        '3PZ' => 'E02006740',
        '3QA' => 'E02006744',
        '3QB' => 'E02006744',
        '3QD' => 'E02006740',
        '3QF' => 'E02006740',
        '3QG' => 'E02006740',
        '3QH' => 'E02006740',
        '3QJ' => 'E02006740',
        '3QN' => 'E02006740',
        '3QP' => 'E02006740',
        '3QQ' => 'E02006740',
        '3QS' => 'E02006740',
        '3QT' => 'E02006740',
        '3QU' => 'E02006740',
        '3QW' => 'E02006740',
        '3QX' => 'E02006740',
        '3QY' => 'E02006740',
        '3QZ' => 'E02006740',
        '3RB' => 'E02006740',
        '3RD' => 'E02006740',
        '3SE' => 'E02006740',
        '3WH' => 'E02006736',
        '3WJ' => 'E02006736',
        '3WL' => 'E02006736',
        '3WN' => 'E02006744',
        '3WP' => 'E02006740',
        '3WQ' => 'E02006736',
        '3WR' => 'E02006744',
        '3WS' => 'E02006736',
        '3WT' => 'E02006736',
        '3WU' => 'E02006744',
        '3WW' => 'E02006744',
        '3WX' => 'E02006736',
        '3WY' => 'E02006736',
        '3WZ' => 'E02006736',
        '3XA' => 'E02006736',
        '3XB' => 'E02006744',
        '3XW' => 'E02006740',
        '3XX' => 'E02006740',
        '3YA' => 'E02006740',
        '3YB' => 'E02006740',
        '3YD' => 'E02006736',
        '3YE' => 'E02006740',
        '3YF' => 'E02006736',
        '3YG' => 'E02006736',
        '3YH' => 'E02006740',
        '3YJ' => 'E02006736',
        '3YL' => 'E02006740',
        '3YN' => 'E02006740',
        '3YP' => 'E02006740',
        '3YQ' => 'E02006736',
        '3YR' => 'E02006740',
        '3YS' => 'E02006740',
        '3YT' => 'E02006740',
        '3YU' => 'E02006740',
        '3YW' => 'E02006744',
        '3YX' => 'E02006744',
        '3YY' => 'E02006736',
        '3YZ' => 'E02006740',
        '3ZB' => 'E02006740',
        '3ZE' => 'E02006736',
        '3ZF' => 'E02006744',
        '3ZG' => 'E02006740',
        '3ZH' => 'E02006744',
        '3ZJ' => 'E02006740',
        '3ZL' => 'E02006740',
        '3ZN' => 'E02006736',
        '3ZP' => 'E02006744',
        '3ZQ' => 'E02006740',
        '3ZR' => 'E02006736',
        '3ZS' => 'E02006744',
        '3ZT' => 'E02006736',
        '3ZU' => 'E02006736',
        '3ZW' => 'E02006736',
        '3ZX' => 'E02006736',
        '3ZY' => 'E02006736',
        '9AE' => 'E02006744',
        '9AG' => 'E02006744',
        '9AJ' => 'E02006744',
        '9AL' => 'E02006744',
        '9AP' => 'E02006744',
        '9AQ' => 'E02006744',
        '9AR' => 'E02006744',
        '9AX' => 'E02006744',
        '9AY' => 'E02006744',
        '9AZ' => 'E02006744',
        '9BD' => 'E02006744',
        '9BG' => 'E02006744',
        '9BL' => 'E02006744',
        '9BN' => 'E02006744',
        '9BP' => 'E02006744',
        '9BQ' => 'E02006744',
        '9BR' => 'E02006744',
        '9BS' => 'E02006744',
        '9BT' => 'E02006744',
        '9BX' => 'E02006744',
        '9BY' => 'E02006744',
        '9BZ' => 'E02006744',
        '9DB' => 'E02006744',
        '9DD' => 'E02006744',
        '9DE' => 'E02006744',
        '9DF' => 'E02006744',
        '9DG' => 'E02006744',
        '9DH' => 'E02006744',
        '9DJ' => 'E02006744',
        '9DL' => 'E02006744',
        '9DP' => 'E02006744',
        '9DQ' => 'E02006744',
        '9DR' => 'E02006744',
        '9DS' => 'E02006744',
        '9DT' => 'E02006744',
        '9DU' => 'E02006744',
        '9DW' => 'E02006744',
        '9DX' => 'E02006744',
        '9DY' => 'E02006744',
        '9DZ' => 'E02006744',
        '9EA' => 'E02006744',
        '9EB' => 'E02006744',
        '9ED' => 'E02006744',
        '9EE' => 'E02006744',
        '9EF' => 'E02006744',
        '9EG' => 'E02006744',
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
