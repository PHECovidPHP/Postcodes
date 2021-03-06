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
final class TS1
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02002498',
        '1AB' => 'E02002498',
        '1AD' => 'E02002496',
        '1AE' => 'E02002496',
        '1AF' => 'E02002496',
        '1AH' => 'E02002496',
        '1AN' => 'E02002498',
        '1AZ' => 'E02002498',
        '1BA' => 'E02002496',
        '1DA' => 'E02002496',
        '1DB' => 'E02002496',
        '1DD' => 'E02002496',
        '1DE' => 'E02002496',
        '1DF' => 'E02002496',
        '1DG' => 'E02002496',
        '1DH' => 'E02002496',
        '1DL' => 'E02002496',
        '1DN' => 'E02002496',
        '1DP' => 'E02002496',
        '1DQ' => 'E02002496',
        '1DR' => 'E02002496',
        '1DS' => 'E02002496',
        '1DU' => 'E02002496',
        '1DW' => 'E02002496',
        '1DX' => 'E02002496',
        '1EA' => 'E02002496',
        '1EB' => 'E02002496',
        '1EE' => 'E02002496',
        '1EG' => 'E02002496',
        '1EH' => 'E02002496',
        '1EL' => 'E02002498',
        '1EP' => 'E02002496',
        '1EQ' => 'E02002496',
        '1EX' => 'E02002496',
        '1EY' => 'E02002496',
        '1EZ' => 'E02002496',
        '1GA' => 'E02002498',
        '1HA' => 'E02002496',
        '1HB' => 'E02002496',
        '1HD' => 'E02002496',
        '1HE' => 'E02002496',
        '1HF' => 'E02002496',
        '1HG' => 'E02002496',
        '1HJ' => 'E02002496',
        '1HL' => 'E02002496',
        '1HP' => 'E02002496',
        '1HQ' => 'E02002496',
        '1HR' => 'E02002496',
        '1HS' => 'E02002496',
        '1HT' => 'E02002496',
        '1HU' => 'E02002496',
        '1HW' => 'E02002496',
        '1HX' => 'E02002496',
        '1HY' => 'E02002496',
        '1HZ' => 'E02002496',
        '1JA' => 'E02002496',
        '1JB' => 'E02002496',
        '1JD' => 'E02002496',
        '1JH' => 'E02002496',
        '1JJ' => 'E02002496',
        '1JL' => 'E02002496',
        '1JN' => 'E02002496',
        '1JP' => 'E02002496',
        '1JQ' => 'E02002496',
        '1JR' => 'E02002496',
        '1JS' => 'E02002496',
        '1JT' => 'E02002496',
        '1JU' => 'E02002496',
        '1JW' => 'E02002496',
        '1JX' => 'E02002496',
        '1JY' => 'E02002496',
        '1JZ' => 'E02002496',
        '1LA' => 'E02002496',
        '1LB' => 'E02002496',
        '1LD' => 'E02002496',
        '1LE' => 'E02002496',
        '1LF' => 'E02002496',
        '1LG' => 'E02002496',
        '1LH' => 'E02002496',
        '1LJ' => 'E02002496',
        '1LL' => 'E02002496',
        '1LN' => 'E02002496',
        '1LP' => 'E02002496',
        '1LR' => 'E02002496',
        '1LS' => 'E02002496',
        '1LT' => 'E02002496',
        '1LU' => 'E02002496',
        '1LW' => 'E02002496',
        '1LX' => 'E02002496',
        '1LY' => 'E02002496',
        '1LZ' => 'E02002496',
        '1NA' => 'E02002496',
        '1NB' => 'E02002496',
        '1NE' => 'E02002496',
        '1NF' => 'E02002496',
        '1NG' => 'E02002496',
        '1NJ' => 'E02002496',
        '1NN' => 'E02002496',
        '1NP' => 'E02002496',
        '1NQ' => 'E02002496',
        '1NR' => 'E02002496',
        '1NS' => 'E02002496',
        '1NT' => 'E02002496',
        '1NU' => 'E02002496',
        '1NW' => 'E02002496',
        '1NX' => 'E02002496',
        '1PA' => 'E02002496',
        '1PB' => 'E02002498',
        '1PD' => 'E02002496',
        '1PE' => 'E02002496',
        '1PF' => 'E02002496',
        '1PG' => 'E02002496',
        '1PH' => 'E02002496',
        '1PJ' => 'E02002496',
        '1PL' => 'E02002496',
        '1PN' => 'E02002496',
        '1PP' => 'E02002496',
        '1PQ' => 'E02002496',
        '1PR' => 'E02002496',
        '1PS' => 'E02002496',
        '1PT' => 'E02002496',
        '1PU' => 'E02002496',
        '1PW' => 'E02002496',
        '1PX' => 'E02002496',
        '1PY' => 'E02002496',
        '1PZ' => 'E02002496',
        '1QA' => 'E02002496',
        '1QB' => 'E02002496',
        '1QD' => 'E02002496',
        '1QE' => 'E02002498',
        '1QF' => 'E02002496',
        '1QG' => 'E02002496',
        '1QH' => 'E02002496',
        '1QJ' => 'E02002496',
        '1QL' => 'E02002496',
        '1QN' => 'E02002496',
        '1QP' => 'E02002498',
        '1QR' => 'E02002496',
        '1QS' => 'E02002498',
        '1QT' => 'E02002496',
        '1QU' => 'E02002496',
        '1RA' => 'E02002496',
        '1RB' => 'E02002496',
        '1RD' => 'E02002496',
        '1RE' => 'E02002496',
        '1RF' => 'E02002498',
        '1RG' => 'E02002496',
        '1RH' => 'E02002496',
        '1RJ' => 'E02002496',
        '1RL' => 'E02002496',
        '1RN' => 'E02002496',
        '1RP' => 'E02002496',
        '1RQ' => 'E02002496',
        '1RS' => 'E02002498',
        '1RT' => 'E02002496',
        '1RU' => 'E02002496',
        '1RW' => 'E02002496',
        '1RX' => 'E02002496',
        '1RY' => 'E02002496',
        '1RZ' => 'E02002496',
        '1SA' => 'E02002496',
        '1SB' => 'E02002496',
        '1SD' => 'E02002496',
        '1SE' => 'E02002496',
        '1SF' => 'E02002496',
        '1SG' => 'E02002496',
        '1SH' => 'E02002496',
        '1SL' => 'E02002496',
        '1SN' => 'E02002496',
        '1SP' => 'E02002496',
        '1SQ' => 'E02002496',
        '1SR' => 'E02002496',
        '1ST' => 'E02002496',
        '1SU' => 'E02002496',
        '1SW' => 'E02002496',
        '1TA' => 'E02002496',
        '1TB' => 'E02002496',
        '1TD' => 'E02002496',
        '1TE' => 'E02002496',
        '1TH' => 'E02002496',
        '1TJ' => 'E02002496',
        '1TL' => 'E02002496',
        '1TN' => 'E02002496',
        '1TR' => 'E02002496',
        '1TS' => 'E02002496',
        '1TW' => 'E02002496',
        '1TX' => 'E02002496',
        '1UB' => 'E02002496',
        '1UE' => 'E02002496',
        '1UR' => 'E02002496',
        '1WA' => 'E02002496',
        '1WB' => 'E02002496',
        '1WQ' => 'E02002498',
        '1WR' => 'E02002498',
        '1WS' => 'E02002496',
        '1WT' => 'E02002498',
        '1WU' => 'E02002498',
        '1WW' => 'E02002498',
        '1WX' => 'E02002498',
        '1WY' => 'E02002496',
        '1WZ' => 'E02002498',
        '1XG' => 'E02002498',
        '1XH' => 'E02002498',
        '1XJ' => 'E02002496',
        '1XL' => 'E02002498',
        '1XN' => 'E02002496',
        '1XP' => 'E02002496',
        '1XQ' => 'E02002498',
        '1XR' => 'E02002496',
        '1XS' => 'E02002498',
        '1XT' => 'E02002496',
        '1XU' => 'E02002496',
        '1XW' => 'E02002496',
        '1XY' => 'E02002496',
        '1YA' => 'E02002496',
        '1YB' => 'E02002498',
        '1YD' => 'E02002496',
        '1YE' => 'E02002496',
        '1YF' => 'E02002496',
        '1YG' => 'E02002496',
        '1YQ' => 'E02002496',
        '1YZ' => 'E02002496',
        '2AA' => 'E02002496',
        '2AB' => 'E02002496',
        '2AD' => 'E02002496',
        '2AE' => 'E02002496',
        '2AF' => 'E02002496',
        '2AG' => 'E02002496',
        '2AH' => 'E02002496',
        '2AJ' => 'E02002496',
        '2AL' => 'E02002496',
        '2AN' => 'E02002496',
        '2AP' => 'E02002496',
        '2AQ' => 'E02002496',
        '2AR' => 'E02002496',
        '2AS' => 'E02002496',
        '2AT' => 'E02002496',
        '2AU' => 'E02002496',
        '2AW' => 'E02002496',
        '2AX' => 'E02002496',
        '2AY' => 'E02002496',
        '2AZ' => 'E02002496',
        '2BA' => 'E02002496',
        '2BB' => 'E02002496',
        '2BD' => 'E02002496',
        '2BE' => 'E02002496',
        '2BF' => 'E02002496',
        '2BG' => 'E02002496',
        '2BH' => 'E02002496',
        '2BJ' => 'E02002496',
        '2BL' => 'E02002496',
        '2BN' => 'E02002496',
        '2BP' => 'E02002496',
        '2BQ' => 'E02002496',
        '2BT' => 'E02002496',
        '2BU' => 'E02002496',
        '2BW' => 'E02002496',
        '2BY' => 'E02002496',
        '2BZ' => 'E02002496',
        '2DA' => 'E02002496',
        '2DD' => 'E02002496',
        '2DE' => 'E02002496',
        '2DH' => 'E02002496',
        '2DL' => 'E02002496',
        '2DN' => 'E02002496',
        '2DP' => 'E02002496',
        '2DQ' => 'E02002496',
        '2DR' => 'E02002496',
        '2DS' => 'E02002496',
        '2DT' => 'E02002496',
        '2DU' => 'E02002496',
        '2DW' => 'E02002496',
        '2DX' => 'E02002496',
        '2DY' => 'E02002496',
        '2DZ' => 'E02002496',
        '2EA' => 'E02002496',
        '2EB' => 'E02002496',
        '2ED' => 'E02002496',
        '2EE' => 'E02002496',
        '2EF' => 'E02002496',
        '2EG' => 'E02002496',
        '2EH' => 'E02002496',
        '2EJ' => 'E02002496',
        '2EP' => 'E02002496',
        '2EQ' => 'E02002496',
        '2ER' => 'E02002496',
        '2ES' => 'E02002496',
        '2ET' => 'E02002496',
        '2EU' => 'E02002496',
        '2EX' => 'E02002496',
        '2EY' => 'E02002496',
        '2EZ' => 'E02002496',
        '2HD' => 'E02002496',
        '2HE' => 'E02002496',
        '2HF' => 'E02002496',
        '2HG' => 'E02002496',
        '2HJ' => 'E02002496',
        '2HL' => 'E02002496',
        '2HN' => 'E02002496',
        '2HP' => 'E02002496',
        '2HS' => 'E02002496',
        '2HT' => 'E02002496',
        '2HU' => 'E02002496',
        '2HW' => 'E02002496',
        '2HX' => 'E02002496',
        '2HY' => 'E02002496',
        '2HZ' => 'E02002496',
        '2JA' => 'E02002496',
        '2JB' => 'E02002496',
        '2JD' => 'E02002496',
        '2JE' => 'E02002496',
        '2JF' => 'E02002496',
        '2JH' => 'E02002496',
        '2JJ' => 'E02002496',
        '2JN' => 'E02002496',
        '2JP' => 'E02002496',
        '2JR' => 'E02002496',
        '2JS' => 'E02002496',
        '2JT' => 'E02002496',
        '2JU' => 'E02002496',
        '2JW' => 'E02002496',
        '2JX' => 'E02002496',
        '2JY' => 'E02002496',
        '2JZ' => 'E02002496',
        '2LA' => 'E02002496',
        '2LB' => 'E02002496',
        '2LD' => 'E02002496',
        '2LE' => 'E02002496',
        '2LF' => 'E02002496',
        '2LG' => 'E02002496',
        '2LH' => 'E02002496',
        '2LJ' => 'E02002498',
        '2LL' => 'E02002496',
        '2LN' => 'E02002496',
        '2LP' => 'E02002496',
        '2LQ' => 'E02002498',
        '2LR' => 'E02002496',
        '2LS' => 'E02002496',
        '2LT' => 'E02002496',
        '2LU' => 'E02002496',
        '2LW' => 'E02002496',
        '2LX' => 'E02002496',
        '2LY' => 'E02002496',
        '2LZ' => 'E02002496',
        '2NP' => 'E02002496',
        '2NR' => 'E02002496',
        '2NS' => 'E02002496',
        '2NT' => 'E02002496',
        '2NU' => 'E02002496',
        '2NW' => 'E02002496',
        '2NX' => 'E02002496',
        '2PA' => 'E02002496',
        '2PB' => 'E02002496',
        '2PD' => 'E02002496',
        '2PE' => 'E02002496',
        '2PF' => 'E02002496',
        '2PG' => 'E02002496',
        '2PH' => 'E02002496',
        '2PJ' => 'E02002496',
        '2PL' => 'E02002496',
        '2PN' => 'E02002496',
        '2PP' => 'E02002496',
        '2PQ' => 'E02002496',
        '2PR' => 'E02002496',
        '2PS' => 'E02002496',
        '2PT' => 'E02002496',
        '2PU' => 'E02002496',
        '2PW' => 'E02002496',
        '2PX' => 'E02002496',
        '2PY' => 'E02002496',
        '2PZ' => 'E02002496',
        '2QA' => 'E02002496',
        '2QB' => 'E02002496',
        '2QD' => 'E02002496',
        '2QE' => 'E02002496',
        '2QF' => 'E02002496',
        '2QG' => 'E02002496',
        '2QH' => 'E02002498',
        '2QJ' => 'E02002496',
        '2QQ' => 'E02002498',
        '2QS' => 'E02002498',
        '2RA' => 'E02002496',
        '2RB' => 'E02002496',
        '2RD' => 'E02002496',
        '2RE' => 'E02002496',
        '2RF' => 'E02002496',
        '2RG' => 'E02002496',
        '2RH' => 'E02002496',
        '2RJ' => 'E02002496',
        '2RL' => 'E02002496',
        '2RN' => 'E02002496',
        '2RP' => 'E02002496',
        '2RQ' => 'E02002496',
        '2RR' => 'E02002496',
        '2RS' => 'E02002496',
        '2RT' => 'E02002496',
        '2RU' => 'E02002496',
        '2RW' => 'E02002496',
        '2RX' => 'E02002496',
        '2RY' => 'E02002496',
        '2RZ' => 'E02002496',
        '2SA' => 'E02002496',
        '2SB' => 'E02002496',
        '2SH' => 'E02002496',
        '2SJ' => 'E02002496',
        '2SL' => 'E02002496',
        '2SW' => 'E02002496',
        '2UD' => 'E02002496',
        '2UZ' => 'E02002496',
        '2WT' => 'E02002498',
        '2WU' => 'E02002496',
        '2WW' => 'E02002496',
        '2WX' => 'E02002498',
        '2WY' => 'E02002498',
        '2WZ' => 'E02002498',
        '2XA' => 'E02002496',
        '2XB' => 'E02002498',
        '2XD' => 'E02002498',
        '2XE' => 'E02002498',
        '2XF' => 'E02002498',
        '2XG' => 'E02002498',
        '2XH' => 'E02002498',
        '2XJ' => 'E02002496',
        '2XL' => 'E02002498',
        '2XN' => 'E02002496',
        '2XP' => 'E02002498',
        '2XQ' => 'E02002496',
        '2XS' => 'E02002496',
        '2XT' => 'E02002498',
        '2XU' => 'E02002496',
        '2XW' => 'E02002498',
        '2XX' => 'E02002496',
        '2XY' => 'E02002496',
        '2XZ' => 'E02002496',
        '2YA' => 'E02002496',
        '2YB' => 'E02002498',
        '2YD' => 'E02002498',
        '2YE' => 'E02002496',
        '2YF' => 'E02002496',
        '2YG' => 'E02002498',
        '2YH' => 'E02002498',
        '2YJ' => 'E02002496',
        '2YL' => 'E02002498',
        '2YN' => 'E02002496',
        '2YP' => 'E02002498',
        '2YQ' => 'E02002498',
        '2YR' => 'E02002498',
        '2YT' => 'E02002496',
        '2YU' => 'E02002498',
        '2YW' => 'E02002498',
        '2YX' => 'E02002498',
        '2YY' => 'E02002498',
        '2YZ' => 'E02002498',
        '3AA' => 'E02002496',
        '3AB' => 'E02002496',
        '3AD' => 'E02002496',
        '3AE' => 'E02002496',
        '3AF' => 'E02002496',
        '3AG' => 'E02002496',
        '3AH' => 'E02002496',
        '3AJ' => 'E02002496',
        '3AL' => 'E02002496',
        '3AN' => 'E02002496',
        '3AP' => 'E02002496',
        '3AS' => 'E02002496',
        '3AT' => 'E02002496',
        '3AW' => 'E02002496',
        '3AX' => 'E02002496',
        '3AY' => 'E02002496',
        '3AZ' => 'E02002498',
        '3BA' => 'E02002496',
        '3BB' => 'E02002496',
        '3BD' => 'E02002496',
        '3BE' => 'E02002496',
        '3BF' => 'E02002496',
        '3BG' => 'E02002496',
        '3BH' => 'E02002496',
        '3BJ' => 'E02002496',
        '3BL' => 'E02002496',
        '3BN' => 'E02002496',
        '3BP' => 'E02002496',
        '3BQ' => 'E02002496',
        '3BS' => 'E02002496',
        '3BT' => 'E02002496',
        '3BU' => 'E02002496',
        '3BW' => 'E02002496',
        '3BX' => 'E02002496',
        '3BY' => 'E02002496',
        '3BZ' => 'E02002496',
        '3DG' => 'E02002496',
        '3DH' => 'E02002496',
        '3DL' => 'E02002496',
        '3DP' => 'E02002496',
        '3DR' => 'E02002496',
        '3DS' => 'E02002496',
        '3DT' => 'E02002496',
        '3DU' => 'E02002496',
        '3DW' => 'E02002496',
        '3DX' => 'E02002496',
        '3DY' => 'E02002496',
        '3DZ' => 'E02002496',
        '3EA' => 'E02002496',
        '3EB' => 'E02002496',
        '3ED' => 'E02002496',
        '3EE' => 'E02002496',
        '3EF' => 'E02002496',
        '3EJ' => 'E02002496',
        '3EL' => 'E02002496',
        '3EN' => 'E02002496',
        '3EP' => 'E02002496',
        '3ER' => 'E02002496',
        '3ES' => 'E02002496',
        '3EU' => 'E02002496',
        '3EW' => 'E02002496',
        '3EX' => 'E02002496',
        '3EY' => 'E02002496',
        '3EZ' => 'E02002496',
        '3GA' => 'E02002496',
        '3HA' => 'E02002496',
        '3HB' => 'E02002496',
        '3HD' => 'E02002496',
        '3HE' => 'E02002496',
        '3HF' => 'E02002496',
        '3HG' => 'E02002496',
        '3HH' => 'E02002496',
        '3HJ' => 'E02002496',
        '3HL' => 'E02002496',
        '3HN' => 'E02002496',
        '3HP' => 'E02002496',
        '3HQ' => 'E02002496',
        '3HR' => 'E02002496',
        '3HS' => 'E02002496',
        '3HT' => 'E02002496',
        '3HU' => 'E02002496',
        '3HW' => 'E02002496',
        '3HX' => 'E02002496',
        '3HY' => 'E02002496',
        '3HZ' => 'E02002496',
        '3JA' => 'E02002496',
        '3JB' => 'E02002496',
        '3JD' => 'E02002496',
        '3JE' => 'E02002496',
        '3JF' => 'E02002496',
        '3JG' => 'E02002496',
        '3JH' => 'E02002496',
        '3JJ' => 'E02002496',
        '3JL' => 'E02002496',
        '3JN' => 'E02002496',
        '3JQ' => 'E02002496',
        '3JR' => 'E02002496',
        '3JS' => 'E02002496',
        '3JT' => 'E02002496',
        '3JU' => 'E02002496',
        '3JX' => 'E02002496',
        '3JY' => 'E02002496',
        '3JZ' => 'E02002496',
        '3LA' => 'E02002496',
        '3LB' => 'E02002500',
        '3LD' => 'E02002496',
        '3LE' => 'E02002500',
        '3LF' => 'E02002496',
        '3LG' => 'E02002496',
        '3LH' => 'E02002496',
        '3LJ' => 'E02002496',
        '3LL' => 'E02002496',
        '3LN' => 'E02002496',
        '3LP' => 'E02002496',
        '3LQ' => 'E02002496',
        '3LR' => 'E02002496',
        '3LS' => 'E02002496',
        '3LT' => 'E02002496',
        '3LU' => 'E02002496',
        '3LW' => 'E02002496',
        '3LX' => 'E02002496',
        '3LY' => 'E02002496',
        '3LZ' => 'E02002496',
        '3NA' => 'E02002496',
        '3NB' => 'E02002496',
        '3ND' => 'E02002496',
        '3NE' => 'E02002496',
        '3NF' => 'E02002496',
        '3NG' => 'E02002496',
        '3NH' => 'E02002496',
        '3NJ' => 'E02002496',
        '3NL' => 'E02002496',
        '3NN' => 'E02002496',
        '3NQ' => 'E02002496',
        '3NW' => 'E02002496',
        '3PA' => 'E02002496',
        '3PB' => 'E02002496',
        '3PD' => 'E02002496',
        '3PE' => 'E02002496',
        '3PF' => 'E02002496',
        '3PG' => 'E02002496',
        '3PH' => 'E02002496',
        '3PJ' => 'E02002496',
        '3PL' => 'E02002496',
        '3PN' => 'E02002498',
        '3PP' => 'E02002496',
        '3PQ' => 'E02002496',
        '3PR' => 'E02002496',
        '3PS' => 'E02002496',
        '3PT' => 'E02002496',
        '3PU' => 'E02002496',
        '3PW' => 'E02002496',
        '3PX' => 'E02002496',
        '3PY' => 'E02002496',
        '3PZ' => 'E02002496',
        '3QA' => 'E02002496',
        '3QB' => 'E02002496',
        '3QD' => 'E02002496',
        '3QE' => 'E02002496',
        '3QF' => 'E02002496',
        '3QG' => 'E02002496',
        '3QH' => 'E02002496',
        '3QJ' => 'E02002496',
        '3QL' => 'E02002496',
        '3QP' => 'E02002496',
        '3QQ' => 'E02002496',
        '3QR' => 'E02002496',
        '3QS' => 'E02002496',
        '3QT' => 'E02002496',
        '3QU' => 'E02002496',
        '3QW' => 'E02002496',
        '3QX' => 'E02002496',
        '3QY' => 'E02002496',
        '3QZ' => 'E02002496',
        '3RA' => 'E02002496',
        '3RB' => 'E02002496',
        '3RD' => 'E02002496',
        '3RE' => 'E02002496',
        '3RF' => 'E02002496',
        '3RG' => 'E02002496',
        '3RH' => 'E02002496',
        '3RX' => 'E02002496',
        '3RY' => 'E02002496',
        '3RZ' => 'E02002496',
        '3UB' => 'E02002496',
        '3WT' => 'E02002498',
        '3WU' => 'E02002498',
        '3WW' => 'E02002498',
        '3WX' => 'E02002498',
        '3WY' => 'E02002498',
        '3WZ' => 'E02002498',
        '3XR' => 'E02002498',
        '3XS' => 'E02002498',
        '3XT' => 'E02002496',
        '3XU' => 'E02002496',
        '3XX' => 'E02002496',
        '3XY' => 'E02002496',
        '3XZ' => 'E02002496',
        '3YA' => 'E02002496',
        '3YB' => 'E02002496',
        '3YD' => 'E02002496',
        '3YE' => 'E02002498',
        '3YF' => 'E02002496',
        '3YG' => 'E02002496',
        '3YH' => 'E02002498',
        '3YL' => 'E02002496',
        '3YN' => 'E02002496',
        '3YP' => 'E02002496',
        '3YQ' => 'E02002496',
        '3YR' => 'E02002496',
        '3YS' => 'E02002498',
        '3YT' => 'E02002498',
        '3YW' => 'E02002496',
        '3YX' => 'E02002496',
        '3ZY' => 'E02002498',
        '4AA' => 'E02002496',
        '4AB' => 'E02002496',
        '4AD' => 'E02002496',
        '4AE' => 'E02002496',
        '4AF' => 'E02002496',
        '4AG' => 'E02002496',
        '4AH' => 'E02002496',
        '4AJ' => 'E02002496',
        '4AL' => 'E02002498',
        '4AN' => 'E02002496',
        '4AP' => 'E02002498',
        '4AQ' => 'E02002496',
        '4AR' => 'E02002498',
        '4AS' => 'E02002498',
        '4AT' => 'E02002498',
        '4AU' => 'E02002498',
        '4AW' => 'E02002498',
        '4AX' => 'E02002498',
        '4AY' => 'E02002496',
        '4BA' => 'E02002496',
        '4BB' => 'E02002496',
        '4BD' => 'E02002498',
        '4BE' => 'E02002498',
        '4BG' => 'E02002498',
        '4BH' => 'E02002498',
        '4BJ' => 'E02002498',
        '4BL' => 'E02002498',
        '4BN' => 'E02002498',
        '4BP' => 'E02002498',
        '4BQ' => 'E02002498',
        '4BS' => 'E02002498',
        '4BT' => 'E02002498',
        '4BU' => 'E02002498',
        '4BW' => 'E02002498',
        '4BX' => 'E02002498',
        '4BY' => 'E02002498',
        '4BZ' => 'E02002498',
        '4DA' => 'E02002498',
        '4DB' => 'E02002498',
        '4DD' => 'E02002498',
        '4DE' => 'E02002496',
        '4DF' => 'E02002496',
        '4DG' => 'E02002496',
        '4DH' => 'E02002498',
        '4DJ' => 'E02002498',
        '4DL' => 'E02002496',
        '4DN' => 'E02002496',
        '4DP' => 'E02002496',
        '4DQ' => 'E02002496',
        '4DR' => 'E02002496',
        '4DS' => 'E02002496',
        '4DT' => 'E02002496',
        '4DW' => 'E02002496',
        '4EA' => 'E02002498',
        '4EB' => 'E02002498',
        '4ED' => 'E02002498',
        '4EE' => 'E02002498',
        '4EF' => 'E02002498',
        '4EG' => 'E02002498',
        '4EH' => 'E02002498',
        '4EJ' => 'E02002498',
        '4EL' => 'E02002498',
        '4EN' => 'E02002498',
        '4EP' => 'E02002498',
        '4EQ' => 'E02002498',
        '4ER' => 'E02002498',
        '4ES' => 'E02002498',
        '4ET' => 'E02002498',
        '4EU' => 'E02002498',
        '4EW' => 'E02002498',
        '4EX' => 'E02002498',
        '4EY' => 'E02002498',
        '4EZ' => 'E02002498',
        '4HA' => 'E02002498',
        '4HB' => 'E02002498',
        '4HD' => 'E02002498',
        '4HE' => 'E02002496',
        '4HF' => 'E02002498',
        '4HG' => 'E02002498',
        '4HH' => 'E02002498',
        '4HP' => 'E02002498',
        '4HQ' => 'E02002496',
        '4HR' => 'E02002498',
        '4HS' => 'E02002498',
        '4HT' => 'E02002498',
        '4HU' => 'E02002498',
        '4HX' => 'E02002498',
        '4HZ' => 'E02002498',
        '4JA' => 'E02002498',
        '4JB' => 'E02002498',
        '4JD' => 'E02002498',
        '4JE' => 'E02002498',
        '4JF' => 'E02002498',
        '4JG' => 'E02002498',
        '4JH' => 'E02002498',
        '4JJ' => 'E02002498',
        '4JL' => 'E02002498',
        '4JN' => 'E02002498',
        '4JP' => 'E02002498',
        '4JQ' => 'E02002498',
        '4JR' => 'E02002498',
        '4JS' => 'E02002498',
        '4JT' => 'E02002498',
        '4JU' => 'E02002498',
        '4JW' => 'E02002498',
        '4JX' => 'E02002498',
        '4JY' => 'E02002498',
        '4JZ' => 'E02002498',
        '4LA' => 'E02002498',
        '4LB' => 'E02002498',
        '4LD' => 'E02002498',
        '4LE' => 'E02002498',
        '4LF' => 'E02002498',
        '4LG' => 'E02002498',
        '4LH' => 'E02002498',
        '4LJ' => 'E02002498',
        '4LL' => 'E02002498',
        '4LN' => 'E02002498',
        '4LP' => 'E02002498',
        '4LQ' => 'E02002498',
        '4LR' => 'E02002498',
        '4LS' => 'E02002498',
        '4LT' => 'E02002498',
        '4LU' => 'E02002498',
        '4LW' => 'E02002498',
        '4LX' => 'E02002498',
        '4LY' => 'E02002498',
        '4LZ' => 'E02002498',
        '4NA' => 'E02002498',
        '4NB' => 'E02002498',
        '4ND' => 'E02002498',
        '4NE' => 'E02002498',
        '4NF' => 'E02002498',
        '4NG' => 'E02002504',
        '4NH' => 'E02002500',
        '4NJ' => 'E02002500',
        '4NL' => 'E02002498',
        '4NN' => 'E02002498',
        '4NP' => 'E02002504',
        '4NR' => 'E02002498',
        '4NS' => 'E02002498',
        '4NT' => 'E02002498',
        '4NU' => 'E02002498',
        '4NW' => 'E02002498',
        '4NX' => 'E02002498',
        '4PA' => 'E02002498',
        '4PB' => 'E02002504',
        '4PD' => 'E02002504',
        '4PE' => 'E02002504',
        '4PF' => 'E02002498',
        '4PG' => 'E02002498',
        '4PH' => 'E02002498',
        '4PJ' => 'E02002498',
        '4PL' => 'E02002498',
        '4PN' => 'E02002498',
        '4PP' => 'E02002498',
        '4PQ' => 'E02002498',
        '4PR' => 'E02002498',
        '4PS' => 'E02002498',
        '4PT' => 'E02002498',
        '4PU' => 'E02002498',
        '4PW' => 'E02002498',
        '4PX' => 'E02002498',
        '4PY' => 'E02002498',
        '4PZ' => 'E02002498',
        '4QA' => 'E02002498',
        '4QB' => 'E02002498',
        '4QD' => 'E02002498',
        '4QE' => 'E02002498',
        '4QJ' => 'E02002498',
        '4QL' => 'E02002498',
        '4QN' => 'E02002498',
        '4QP' => 'E02002498',
        '4QR' => 'E02002498',
        '4QS' => 'E02002498',
        '4QT' => 'E02002498',
        '4QU' => 'E02002498',
        '4QW' => 'E02002498',
        '4QX' => 'E02002498',
        '4QY' => 'E02002498',
        '4QZ' => 'E02002498',
        '4RA' => 'E02002498',
        '4RB' => 'E02002498',
        '4RD' => 'E02002498',
        '4RE' => 'E02002498',
        '4RF' => 'E02002498',
        '4RG' => 'E02002498',
        '4RH' => 'E02002498',
        '4RJ' => 'E02002498',
        '4RL' => 'E02002498',
        '4RN' => 'E02002498',
        '4RP' => 'E02002498',
        '4RQ' => 'E02002498',
        '4RR' => 'E02002498',
        '4RS' => 'E02002498',
        '4RT' => 'E02002498',
        '4RU' => 'E02002498',
        '4RW' => 'E02002498',
        '4RX' => 'E02002498',
        '4RY' => 'E02002498',
        '4RZ' => 'E02002498',
        '4SA' => 'E02002498',
        '4SB' => 'E02002498',
        '4SD' => 'E02002498',
        '4SE' => 'E02002498',
        '4SL' => 'E02002498',
        '4SN' => 'E02002498',
        '4SP' => 'E02002498',
        '4SR' => 'E02002498',
        '4SS' => 'E02002498',
        '4ST' => 'E02002503',
        '4SW' => 'E02002498',
        '4WW' => 'E02002498',
        '4WX' => 'E02002498',
        '4WY' => 'E02002498',
        '4WZ' => 'E02002498',
        '4XN' => 'E02002498',
        '4XP' => 'E02002498',
        '4XR' => 'E02002498',
        '4XS' => 'E02002498',
        '4XT' => 'E02002498',
        '4XU' => 'E02002498',
        '4XW' => 'E02002498',
        '4XX' => 'E02002503',
        '4XY' => 'E02002498',
        '4XZ' => 'E02002498',
        '4YA' => 'E02002498',
        '4YB' => 'E02002498',
        '4YD' => 'E02002498',
        '4YE' => 'E02002498',
        '4YF' => 'E02002498',
        '4YG' => 'E02002498',
        '4YH' => 'E02002498',
        '4YJ' => 'E02002503',
        '4YL' => 'E02002498',
        '4YN' => 'E02002498',
        '4YP' => 'E02002503',
        '4YR' => 'E02002503',
        '4YS' => 'E02002503',
        '4YT' => 'E02002498',
        '4YU' => 'E02002503',
        '4YW' => 'E02002498',
        '4YX' => 'E02002503',
        '4YY' => 'E02002503',
        '4YZ' => 'E02002503',
        '4ZP' => 'E02002498',
        '5AB' => 'E02002496',
        '5AD' => 'E02002496',
        '5AE' => 'E02002496',
        '5AF' => 'E02002496',
        '5AH' => 'E02002496',
        '5AJ' => 'E02002496',
        '5AL' => 'E02002496',
        '5AP' => 'E02002496',
        '5AQ' => 'E02002496',
        '5AR' => 'E02002496',
        '5AS' => 'E02002496',
        '5AT' => 'E02002496',
        '5AU' => 'E02002496',
        '5AW' => 'E02002496',
        '5AX' => 'E02002496',
        '5AY' => 'E02002496',
        '5AZ' => 'E02002496',
        '5BA' => 'E02002496',
        '5BD' => 'E02002496',
        '5BE' => 'E02002496',
        '5BG' => 'E02002496',
        '5BH' => 'E02002496',
        '5BJ' => 'E02002496',
        '5BP' => 'E02002498',
        '5BQ' => 'E02002496',
        '5BS' => 'E02002496',
        '5BT' => 'E02002496',
        '5BU' => 'E02002496',
        '5BX' => 'E02002496',
        '5BY' => 'E02002496',
        '5DA' => 'E02002496',
        '5DB' => 'E02002496',
        '5DD' => 'E02002496',
        '5DE' => 'E02002496',
        '5DF' => 'E02002496',
        '5DG' => 'E02002498',
        '5DH' => 'E02002496',
        '5DJ' => 'E02002496',
        '5DL' => 'E02002496',
        '5DN' => 'E02002496',
        '5DP' => 'E02002496',
        '5DR' => 'E02002496',
        '5DS' => 'E02002496',
        '5DT' => 'E02002496',
        '5DU' => 'E02002498',
        '5DW' => 'E02002496',
        '5DY' => 'E02002498',
        '5DZ' => 'E02002498',
        '5EA' => 'E02002496',
        '5EB' => 'E02002498',
        '5ED' => 'E02002496',
        '5EE' => 'E02002496',
        '5EF' => 'E02002496',
        '5EG' => 'E02002496',
        '5EH' => 'E02002496',
        '5EL' => 'E02002496',
        '5EP' => 'E02002496',
        '5ER' => 'E02002496',
        '5ES' => 'E02002496',
        '5ET' => 'E02002496',
        '5EW' => 'E02002496',
        '5EX' => 'E02002496',
        '5EY' => 'E02002496',
        '5EZ' => 'E02002496',
        '5HA' => 'E02002496',
        '5HB' => 'E02002504',
        '5HD' => 'E02002503',
        '5HE' => 'E02002503',
        '5HF' => 'E02002503',
        '5HH' => 'E02002498',
        '5HL' => 'E02002504',
        '5HN' => 'E02002496',
        '5HP' => 'E02002496',
        '5HR' => 'E02002496',
        '5HS' => 'E02002496',
        '5HT' => 'E02002496',
        '5HU' => 'E02002496',
        '5HX' => 'E02002496',
        '5HZ' => 'E02002498',
        '5JA' => 'E02002496',
        '5JB' => 'E02002498',
        '5JD' => 'E02002496',
        '5JE' => 'E02002498',
        '5JF' => 'E02002498',
        '5JG' => 'E02002498',
        '5JH' => 'E02002498',
        '5JJ' => 'E02002498',
        '5JL' => 'E02002498',
        '5JN' => 'E02002498',
        '5JP' => 'E02002498',
        '5JQ' => 'E02002498',
        '5JR' => 'E02002498',
        '5JS' => 'E02002496',
        '5JT' => 'E02002498',
        '5JU' => 'E02002498',
        '5JW' => 'E02002498',
        '5JX' => 'E02002498',
        '5JY' => 'E02002496',
        '5JZ' => 'E02002496',
        '5LA' => 'E02002496',
        '5LB' => 'E02002496',
        '5LD' => 'E02002498',
        '5LE' => 'E02002498',
        '5LF' => 'E02002498',
        '5LG' => 'E02002498',
        '5LH' => 'E02002498',
        '5LJ' => 'E02002498',
        '5LL' => 'E02002498',
        '5LN' => 'E02002498',
        '5LP' => 'E02002498',
        '5LQ' => 'E02002498',
        '5LR' => 'E02002498',
        '5LS' => 'E02002498',
        '5LT' => 'E02002498',
        '5LW' => 'E02002498',
        '5LY' => 'E02002498',
        '5LZ' => 'E02002498',
        '5NA' => 'E02002498',
        '5NB' => 'E02002498',
        '5ND' => 'E02002498',
        '5NE' => 'E02002498',
        '5NF' => 'E02002498',
        '5NG' => 'E02002498',
        '5NH' => 'E02002498',
        '5NJ' => 'E02002498',
        '5NL' => 'E02002498',
        '5NN' => 'E02002498',
        '5NP' => 'E02002498',
        '5NQ' => 'E02002498',
        '5NR' => 'E02002498',
        '5NS' => 'E02002498',
        '5NT' => 'E02002498',
        '5PD' => 'E02002498',
        '5PE' => 'E02002498',
        '5PF' => 'E02002498',
        '5PG' => 'E02002498',
        '5PH' => 'E02002498',
        '5PJ' => 'E02002498',
        '5PL' => 'E02002498',
        '5PN' => 'E02002498',
        '5PQ' => 'E02002498',
        '5PR' => 'E02002498',
        '5PS' => 'E02002498',
        '5PT' => 'E02002498',
        '5PU' => 'E02002498',
        '5PW' => 'E02002498',
        '5PY' => 'E02002498',
        '5QF' => 'E02002498',
        '5QH' => 'E02002498',
        '5QL' => 'E02002498',
        '5QN' => 'E02002498',
        '5QP' => 'E02002498',
        '5QR' => 'E02002498',
        '5QS' => 'E02002498',
        '5QT' => 'E02002498',
        '5QU' => 'E02002498',
        '5QW' => 'E02002498',
        '5QX' => 'E02002498',
        '5QY' => 'E02002498',
        '5QZ' => 'E02002498',
        '5RA' => 'E02002498',
        '5RF' => 'E02002498',
        '5RG' => 'E02002498',
        '5RQ' => 'E02002498',
        '5RT' => 'E02002498',
        '5RU' => 'E02002498',
        '5RY' => 'E02002498',
        '5SL' => 'E02002496',
        '5TG' => 'E02002496',
        '5TL' => 'E02002496',
        '5TN' => 'E02002496',
        '5TP' => 'E02002496',
        '5TQ' => 'E02002496',
        '5TR' => 'E02002496',
        '5TS' => 'E02002496',
        '5TT' => 'E02002496',
        '5TW' => 'E02002496',
        '5UA' => 'E02002496',
        '5UB' => 'E02002496',
        '5XU' => 'E02002496',
        '5XY' => 'E02002498',
        '5XZ' => 'E02002498',
        '5YA' => 'E02002498',
        '5YB' => 'E02002498',
        '5YD' => 'E02002498',
        '5YE' => 'E02002498',
        '5YF' => 'E02002498',
        '5YG' => 'E02002496',
        '5YH' => 'E02002496',
        '5YJ' => 'E02002496',
        '5YL' => 'E02002498',
        '5YN' => 'E02002498',
        '5YQ' => 'E02002496',
        '5YR' => 'E02002498',
        '5YW' => 'E02002498',
        '5YX' => 'E02002498',
        '5YY' => 'E02002498',
        '9AA' => 'E02002498',
        '9AB' => 'E02002498',
        '9AD' => 'E02002498',
        '9AE' => 'E02002498',
        '9AF' => 'E02002498',
        '9AG' => 'E02002498',
        '9AH' => 'E02002498',
        '9AJ' => 'E02002498',
        '9AL' => 'E02002498',
        '9AN' => 'E02002498',
        '9AP' => 'E02002498',
        '9AQ' => 'E02002498',
        '9AR' => 'E02002498',
        '9AS' => 'E02002498',
        '9AT' => 'E02002498',
        '9AU' => 'E02002498',
        '9AW' => 'E02002498',
        '9AX' => 'E02002498',
        '9AY' => 'E02002498',
        '9AZ' => 'E02002498',
        '9BA' => 'E02002498',
        '9BB' => 'E02002498',
        '9BD' => 'E02002498',
        '9BE' => 'E02002498',
        '9BF' => 'E02002498',
        '9BG' => 'E02002498',
        '9BH' => 'E02002498',
        '9BJ' => 'E02002498',
        '9BL' => 'E02002498',
        '9BN' => 'E02002498',
        '9BP' => 'E02002498',
        '9BQ' => 'E02002498',
        '9BR' => 'E02002498',
        '9BS' => 'E02002498',
        '9BT' => 'E02002498',
        '9BU' => 'E02002498',
        '9BW' => 'E02002498',
        '9BX' => 'E02002498',
        '9BY' => 'E02002498',
        '9BZ' => 'E02002498',
        '9DA' => 'E02002498',
        '9DB' => 'E02002498',
        '9DD' => 'E02002498',
        '9DE' => 'E02002498',
        '9DF' => 'E02002498',
        '9DG' => 'E02002496',
        '9DH' => 'E02002498',
        '9DJ' => 'E02002498',
        '9DL' => 'E02002498',
        '9DN' => 'E02002498',
        '9DP' => 'E02002498',
        '9DQ' => 'E02002498',
        '9DR' => 'E02002498',
        '9DS' => 'E02002498',
        '9DT' => 'E02002498',
        '9DU' => 'E02002498',
        '9DW' => 'E02002498',
        '9DX' => 'E02002498',
        '9DY' => 'E02002498',
        '9DZ' => 'E02002498',
        '9EA' => 'E02002498',
        '9EB' => 'E02002498',
        '9ED' => 'E02002498',
        '9EE' => 'E02002498',
        '9EF' => 'E02002498',
        '9EG' => 'E02002498',
        '9EH' => 'E02002498',
        '9EJ' => 'E02002498',
        '9EL' => 'E02002498',
        '9EN' => 'E02002498',
        '9EP' => 'E02002498',
        '9EQ' => 'E02002498',
        '9ER' => 'E02002498',
        '9ES' => 'E02002498',
        '9ET' => 'E02002498',
        '9EU' => 'E02002498',
        '9EW' => 'E02002498',
        '9EX' => 'E02002498',
        '9EY' => 'E02002498',
        '9EZ' => 'E02002498',
        '9FA' => 'E02002498',
        '9FB' => 'E02002498',
        '9FD' => 'E02002498',
        '9FE' => 'E02002498',
        '9FF' => 'E02002498',
        '9FG' => 'E02002498',
        '9FH' => 'E02002498',
        '9FJ' => 'E02002498',
        '9FL' => 'E02002498',
        '9FN' => 'E02002498',
        '9FP' => 'E02002498',
        '9FQ' => 'E02002498',
        '9FR' => 'E02002498',
        '9FS' => 'E02002498',
        '9FT' => 'E02002498',
        '9FU' => 'E02002498',
        '9FW' => 'E02002498',
        '9FX' => 'E02002498',
        '9FY' => 'E02002498',
        '9FZ' => 'E02002498',
        '9GA' => 'E02002498',
        '9GB' => 'E02002498',
        '9GD' => 'E02002498',
        '9GE' => 'E02002498',
        '9GF' => 'E02002498',
        '9GG' => 'E02002498',
        '9GH' => 'E02002498',
        '9GJ' => 'E02002498',
        '9GL' => 'E02002498',
        '9GN' => 'E02002498',
        '9GP' => 'E02002498',
        '9GQ' => 'E02002498',
        '9GR' => 'E02002498',
        '9GS' => 'E02002498',
        '9GY' => 'E02002498',
        '9GZ' => 'E02002498',
        '9HA' => 'E02002498',
        '9HB' => 'E02002498',
        '9HD' => 'E02002498',
        '9HE' => 'E02002498',
        '9HF' => 'E02002498',
        '9SA' => 'E02002496',
        '9SB' => 'E02002496',
        '9SD' => 'E02002496',
        '9SE' => 'E02002496',
        '9SF' => 'E02002496',
        '9SG' => 'E02002496',
        '9SH' => 'E02002496',
        '9SJ' => 'E02002496',
        '9SL' => 'E02002496',
        '9SN' => 'E02002496',
        '9SP' => 'E02002496',
        '9SQ' => 'E02002496',
        '9SR' => 'E02002496',
        '9SS' => 'E02002496',
        '9ST' => 'E02002496',
        '9SU' => 'E02002496',
        '9SW' => 'E02002496',
        '9SX' => 'E02002496',
        '9SY' => 'E02002496',
        '9SZ' => 'E02002496',
        '9TA' => 'E02002496',
        '9TB' => 'E02002496',
        '9TD' => 'E02006910',
        '9TE' => 'E02002496',
        '9TF' => 'E02002496',
        '9TG' => 'E02002496',
        '9TH' => 'E02002496',
        '9ZZ' => 'E02002498',
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
