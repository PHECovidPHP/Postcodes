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
final class SR1
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02001803',
        '1AB' => 'E02001803',
        '1AE' => 'E02001806',
        '1AF' => 'E02001803',
        '1AG' => 'E02001803',
        '1BA' => 'E02001803',
        '1BB' => 'E02001803',
        '1BD' => 'E02001803',
        '1BE' => 'E02001803',
        '1BG' => 'E02001803',
        '1BH' => 'E02001803',
        '1BJ' => 'E02001803',
        '1BL' => 'E02001803',
        '1BN' => 'E02001803',
        '1BP' => 'E02001796',
        '1BQ' => 'E02001803',
        '1BT' => 'E02001796',
        '1BU' => 'E02001803',
        '1BW' => 'E02001803',
        '1BX' => 'E02001803',
        '1BY' => 'E02001803',
        '1BZ' => 'E02001803',
        '1DA' => 'E02001803',
        '1DB' => 'E02001803',
        '1DD' => 'E02001803',
        '1DE' => 'E02001803',
        '1DF' => 'E02001803',
        '1DG' => 'E02001803',
        '1DH' => 'E02001803',
        '1DJ' => 'E02001803',
        '1DL' => 'E02001796',
        '1DN' => 'E02001803',
        '1DP' => 'E02001803',
        '1DQ' => 'E02001803',
        '1DR' => 'E02001803',
        '1DS' => 'E02001803',
        '1DT' => 'E02001803',
        '1DU' => 'E02001795',
        '1DW' => 'E02001803',
        '1DX' => 'E02001803',
        '1DY' => 'E02001803',
        '1EA' => 'E02001803',
        '1EB' => 'E02001795',
        '1ED' => 'E02001803',
        '1EE' => 'E02001803',
        '1EF' => 'E02001803',
        '1EG' => 'E02001803',
        '1EH' => 'E02001803',
        '1EJ' => 'E02001803',
        '1EL' => 'E02001803',
        '1EN' => 'E02001803',
        '1EP' => 'E02001803',
        '1EQ' => 'E02001803',
        '1ER' => 'E02001803',
        '1ES' => 'E02001803',
        '1ET' => 'E02001795',
        '1EU' => 'E02001803',
        '1EW' => 'E02001803',
        '1EX' => 'E02001803',
        '1EY' => 'E02001803',
        '1EZ' => 'E02001803',
        '1HA' => 'E02001803',
        '1HB' => 'E02001803',
        '1HD' => 'E02001803',
        '1HE' => 'E02001803',
        '1HF' => 'E02001803',
        '1HG' => 'E02001803',
        '1HH' => 'E02001803',
        '1HJ' => 'E02001803',
        '1HL' => 'E02001803',
        '1HN' => 'E02001803',
        '1HQ' => 'E02001803',
        '1HR' => 'E02001803',
        '1HS' => 'E02001803',
        '1HT' => 'E02001803',
        '1HU' => 'E02001803',
        '1HW' => 'E02001803',
        '1HX' => 'E02001806',
        '1HZ' => 'E02001803',
        '1JA' => 'E02001803',
        '1JB' => 'E02001814',
        '1JD' => 'E02001803',
        '1JE' => 'E02001803',
        '1JF' => 'E02001803',
        '1JG' => 'E02001803',
        '1JH' => 'E02001806',
        '1JJ' => 'E02001803',
        '1JL' => 'E02001806',
        '1JN' => 'E02001806',
        '1JQ' => 'E02001803',
        '1JT' => 'E02001806',
        '1JU' => 'E02001806',
        '1JW' => 'E02001803',
        '1JX' => 'E02001803',
        '1JY' => 'E02001803',
        '1JZ' => 'E02001803',
        '1LA' => 'E02001803',
        '1LB' => 'E02001803',
        '1LE' => 'E02001803',
        '1LF' => 'E02001803',
        '1LG' => 'E02001803',
        '1LH' => 'E02001803',
        '1LJ' => 'E02001806',
        '1LN' => 'E02001803',
        '1LP' => 'E02001803',
        '1LQ' => 'E02001803',
        '1LR' => 'E02001803',
        '1LS' => 'E02001806',
        '1LT' => 'E02001803',
        '1LU' => 'E02001803',
        '1LW' => 'E02001806',
        '1LY' => 'E02001803',
        '1LZ' => 'E02001803',
        '1NA' => 'E02001803',
        '1NB' => 'E02001803',
        '1ND' => 'E02001803',
        '1NE' => 'E02001803',
        '1NF' => 'E02001803',
        '1NG' => 'E02001803',
        '1NH' => 'E02001803',
        '1NJ' => 'E02001803',
        '1NL' => 'E02001803',
        '1NN' => 'E02001803',
        '1NP' => 'E02001803',
        '1NQ' => 'E02001803',
        '1NR' => 'E02001801',
        '1NS' => 'E02001802',
        '1NT' => 'E02001802',
        '1NW' => 'E02001803',
        '1NX' => 'E02001802',
        '1NY' => 'E02001802',
        '1PA' => 'E02001806',
        '1PB' => 'E02001806',
        '1PD' => 'E02001806',
        '1PE' => 'E02001806',
        '1PF' => 'E02001806',
        '1PG' => 'E02001806',
        '1PH' => 'E02001806',
        '1PJ' => 'E02001803',
        '1PL' => 'E02001806',
        '1PP' => 'E02001806',
        '1PQ' => 'E02001806',
        '1PR' => 'E02001806',
        '1PS' => 'E02001806',
        '1PT' => 'E02001806',
        '1PU' => 'E02001795',
        '1PW' => 'E02001806',
        '1PX' => 'E02001814',
        '1PY' => 'E02001814',
        '1QA' => 'E02001806',
        '1QB' => 'E02001806',
        '1QD' => 'E02001803',
        '1QE' => 'E02001803',
        '1QF' => 'E02001803',
        '1QG' => 'E02001803',
        '1QH' => 'E02001803',
        '1QJ' => 'E02001803',
        '1QL' => 'E02001803',
        '1QN' => 'E02001803',
        '1QP' => 'E02001803',
        '1QQ' => 'E02001803',
        '1QR' => 'E02001803',
        '1QS' => 'E02001803',
        '1QT' => 'E02001803',
        '1QU' => 'E02001803',
        '1QW' => 'E02001803',
        '1QX' => 'E02001803',
        '1QY' => 'E02001803',
        '1QZ' => 'E02001803',
        '1RA' => 'E02001806',
        '1RB' => 'E02001803',
        '1RD' => 'E02001803',
        '1RE' => 'E02001803',
        '1RF' => 'E02001803',
        '1RG' => 'E02001803',
        '1RH' => 'E02001803',
        '1RJ' => 'E02001803',
        '1RL' => 'E02001803',
        '1RN' => 'E02001803',
        '1RP' => 'E02001803',
        '1RQ' => 'E02001803',
        '1RR' => 'E02001803',
        '1RS' => 'E02001803',
        '1RT' => 'E02001803',
        '1RU' => 'E02001803',
        '1RW' => 'E02001803',
        '1RY' => 'E02001803',
        '1RZ' => 'E02001803',
        '1SA' => 'E02001803',
        '1SB' => 'E02001803',
        '1SD' => 'E02001795',
        '1SE' => 'E02001803',
        '1SF' => 'E02001795',
        '1SG' => 'E02001803',
        '1SH' => 'E02001803',
        '1SJ' => 'E02001803',
        '1SL' => 'E02001803',
        '1SN' => 'E02001803',
        '1SP' => 'E02001803',
        '1SQ' => 'E02001803',
        '1SR' => 'E02001803',
        '1SS' => 'E02001812',
        '1ST' => 'E02001803',
        '1SU' => 'E02001812',
        '1SW' => 'E02001803',
        '1SX' => 'E02001812',
        '1SY' => 'E02001812',
        '1TA' => 'E02001803',
        '1TB' => 'E02001795',
        '1TD' => 'E02001803',
        '1TE' => 'E02001803',
        '1TF' => 'E02001803',
        '1TG' => 'E02001795',
        '1TH' => 'E02001803',
        '1TJ' => 'E02001803',
        '1TL' => 'E02001803',
        '1TN' => 'E02001803',
        '1TP' => 'E02001803',
        '1TQ' => 'E02001803',
        '1TR' => 'E02001803',
        '1TS' => 'E02001803',
        '1TT' => 'E02001803',
        '1TW' => 'E02001803',
        '1TX' => 'E02001803',
        '1TY' => 'E02001803',
        '1TZ' => 'E02001803',
        '1UA' => 'E02001803',
        '1UB' => 'E02001803',
        '1UD' => 'E02001803',
        '1UE' => 'E02001803',
        '1UF' => 'E02001803',
        '1UG' => 'E02001803',
        '1UH' => 'E02001803',
        '1UJ' => 'E02001803',
        '1UL' => 'E02001803',
        '1UN' => 'E02001803',
        '1UP' => 'E02001803',
        '1UQ' => 'E02001803',
        '1UR' => 'E02001803',
        '1UT' => 'E02001803',
        '1UU' => 'E02001803',
        '1UW' => 'E02001803',
        '1UX' => 'E02001803',
        '1UY' => 'E02001803',
        '1UZ' => 'E02001803',
        '1WJ' => 'E02001795',
        '1WL' => 'E02001795',
        '1WN' => 'E02001795',
        '1WP' => 'E02001795',
        '1WQ' => 'E02001795',
        '1WR' => 'E02001795',
        '1WS' => 'E02001795',
        '1WT' => 'E02001795',
        '1WU' => 'E02001803',
        '1WW' => 'E02001795',
        '1WX' => 'E02001795',
        '1WY' => 'E02001795',
        '1WZ' => 'E02001795',
        '1XA' => 'E02001796',
        '1XB' => 'E02001803',
        '1XD' => 'E02001803',
        '1XE' => 'E02001803',
        '1XF' => 'E02001795',
        '1XG' => 'E02001803',
        '1XH' => 'E02001803',
        '1XL' => 'E02001803',
        '1XN' => 'E02001803',
        '1XR' => 'E02001795',
        '1XS' => 'E02001803',
        '1XT' => 'E02001803',
        '1XU' => 'E02001803',
        '1XW' => 'E02001803',
        '1XX' => 'E02001803',
        '1XY' => 'E02001803',
        '1XZ' => 'E02001803',
        '1YA' => 'E02001795',
        '1YB' => 'E02001795',
        '1YE' => 'E02001803',
        '1YF' => 'E02001803',
        '1YH' => 'E02001803',
        '1YJ' => 'E02001803',
        '1YL' => 'E02001795',
        '1YN' => 'E02001795',
        '1YP' => 'E02001795',
        '1YQ' => 'E02001803',
        '1YR' => 'E02001803',
        '1YS' => 'E02001795',
        '1YT' => 'E02001795',
        '1YU' => 'E02001803',
        '1YW' => 'E02001795',
        '1YX' => 'E02001803',
        '2AA' => 'E02001803',
        '2AB' => 'E02001803',
        '2AD' => 'E02001803',
        '2AE' => 'E02001806',
        '2AF' => 'E02001803',
        '2AG' => 'E02001806',
        '2AH' => 'E02001806',
        '2AJ' => 'E02001803',
        '2AL' => 'E02001803',
        '2AN' => 'E02001806',
        '2AP' => 'E02001806',
        '2AQ' => 'E02001806',
        '2AR' => 'E02001806',
        '2AS' => 'E02001803',
        '2AT' => 'E02001803',
        '2AU' => 'E02001803',
        '2AW' => 'E02001806',
        '2AX' => 'E02001803',
        '2AY' => 'E02001803',
        '2AZ' => 'E02001803',
        '2BA' => 'E02001803',
        '2BB' => 'E02001806',
        '2BD' => 'E02001806',
        '2BE' => 'E02001806',
        '2BF' => 'E02001806',
        '2BG' => 'E02001806',
        '2BH' => 'E02001806',
        '2BJ' => 'E02001806',
        '2BL' => 'E02001806',
        '2BN' => 'E02001806',
        '2BP' => 'E02001806',
        '2BQ' => 'E02001806',
        '2BU' => 'E02001806',
        '2BW' => 'E02001806',
        '2BX' => 'E02001806',
        '2BY' => 'E02001806',
        '2BZ' => 'E02001806',
        '2DA' => 'E02001806',
        '2DB' => 'E02001806',
        '2DD' => 'E02001806',
        '2DE' => 'E02001806',
        '2DF' => 'E02001806',
        '2DG' => 'E02001806',
        '2DH' => 'E02001806',
        '2DJ' => 'E02001806',
        '2DL' => 'E02001806',
        '2DN' => 'E02001806',
        '2DP' => 'E02001806',
        '2DQ' => 'E02001806',
        '2DR' => 'E02001806',
        '2DS' => 'E02001806',
        '2DU' => 'E02001806',
        '2DW' => 'E02001806',
        '2DX' => 'E02001806',
        '2DY' => 'E02001806',
        '2DZ' => 'E02001806',
        '2EA' => 'E02001806',
        '2EB' => 'E02001803',
        '2ED' => 'E02001806',
        '2EE' => 'E02001806',
        '2EF' => 'E02001806',
        '2EG' => 'E02001806',
        '2EH' => 'E02001806',
        '2EJ' => 'E02001806',
        '2EL' => 'E02001806',
        '2EN' => 'E02001806',
        '2EQ' => 'E02001806',
        '2ER' => 'E02001806',
        '2ES' => 'E02001806',
        '2EU' => 'E02001806',
        '2EW' => 'E02001806',
        '2EX' => 'E02001806',
        '2EY' => 'E02001806',
        '2HA' => 'E02001806',
        '2HB' => 'E02001803',
        '2HD' => 'E02001803',
        '2HE' => 'E02001806',
        '2HG' => 'E02001803',
        '2HH' => 'E02001806',
        '2HJ' => 'E02001803',
        '2HL' => 'E02001806',
        '2HN' => 'E02001803',
        '2HP' => 'E02001806',
        '2HQ' => 'E02001803',
        '2HR' => 'E02001806',
        '2HS' => 'E02001806',
        '2HT' => 'E02001803',
        '2HU' => 'E02001806',
        '2HW' => 'E02001806',
        '2HX' => 'E02001803',
        '2HY' => 'E02001803',
        '2HZ' => 'E02001803',
        '2JA' => 'E02001806',
        '2JB' => 'E02001806',
        '2JD' => 'E02001806',
        '2JE' => 'E02001806',
        '2JF' => 'E02001803',
        '2JG' => 'E02001806',
        '2JH' => 'E02001806',
        '2JN' => 'E02001806',
        '2JP' => 'E02001806',
        '2JQ' => 'E02001806',
        '2JR' => 'E02001803',
        '2JS' => 'E02001806',
        '2JT' => 'E02001806',
        '2JU' => 'E02001806',
        '2JW' => 'E02001806',
        '2JX' => 'E02001803',
        '2JY' => 'E02001806',
        '2JZ' => 'E02001803',
        '2LA' => 'E02001803',
        '2LB' => 'E02001803',
        '2LD' => 'E02001803',
        '2LE' => 'E02001803',
        '2LH' => 'E02001806',
        '2LJ' => 'E02001803',
        '2LL' => 'E02001806',
        '2LN' => 'E02001806',
        '2LP' => 'E02001806',
        '2LR' => 'E02001806',
        '2LS' => 'E02001806',
        '2LT' => 'E02001806',
        '2LU' => 'E02001806',
        '2LW' => 'E02001806',
        '2LX' => 'E02001806',
        '2LY' => 'E02001806',
        '2LZ' => 'E02001806',
        '2NA' => 'E02001806',
        '2NB' => 'E02001806',
        '2ND' => 'E02001806',
        '2NE' => 'E02001806',
        '2NF' => 'E02001806',
        '2NG' => 'E02001806',
        '2NH' => 'E02001806',
        '2NJ' => 'E02001806',
        '2NL' => 'E02001806',
        '2NN' => 'E02001806',
        '2NP' => 'E02001806',
        '2NQ' => 'E02001806',
        '2NR' => 'E02001806',
        '2NS' => 'E02001806',
        '2NT' => 'E02001806',
        '2NU' => 'E02001806',
        '2NW' => 'E02001806',
        '2NX' => 'E02001806',
        '2PA' => 'E02001806',
        '2PB' => 'E02001806',
        '2PD' => 'E02001806',
        '2PE' => 'E02001806',
        '2PF' => 'E02001806',
        '2PG' => 'E02001806',
        '2PH' => 'E02001803',
        '2PJ' => 'E02001803',
        '2PL' => 'E02001803',
        '2PN' => 'E02001803',
        '2PQ' => 'E02001806',
        '2PW' => 'E02001806',
        '2QA' => 'E02001806',
        '2QB' => 'E02001806',
        '2QD' => 'E02001806',
        '2QE' => 'E02001806',
        '2QF' => 'E02001806',
        '2QG' => 'E02001806',
        '2QH' => 'E02001806',
        '2QJ' => 'E02001806',
        '2QN' => 'E02001803',
        '2QP' => 'E02001806',
        '2QQ' => 'E02001806',
        '2QR' => 'E02001806',
        '2QT' => 'E02001806',
        '2QU' => 'E02001806',
        '2QW' => 'E02001806',
        '2QX' => 'E02001806',
        '2QY' => 'E02001806',
        '2QZ' => 'E02001806',
        '2RA' => 'E02001806',
        '2RB' => 'E02001806',
        '2RD' => 'E02001806',
        '2RE' => 'E02001803',
        '2RH' => 'E02001803',
        '2RJ' => 'E02001806',
        '2RL' => 'E02001806',
        '2RN' => 'E02001806',
        '2RP' => 'E02001806',
        '2RQ' => 'E02001803',
        '2RR' => 'E02001806',
        '2RS' => 'E02001806',
        '2RT' => 'E02001806',
        '2RU' => 'E02001806',
        '2RW' => 'E02001806',
        '2RX' => 'E02001806',
        '2RY' => 'E02001806',
        '2YG' => 'E02001795',
        '2YJ' => 'E02001795',
        '2YL' => 'E02001795',
        '2YN' => 'E02001795',
        '2YP' => 'E02001795',
        '2YQ' => 'E02001795',
        '2YR' => 'E02001803',
        '2YS' => 'E02001803',
        '2YT' => 'E02001795',
        '2YU' => 'E02001803',
        '2YW' => 'E02001803',
        '2YX' => 'E02001795',
        '2YY' => 'E02001806',
        '2YZ' => 'E02001806',
        '3AA' => 'E02001803',
        '3AB' => 'E02001803',
        '3AD' => 'E02001803',
        '3AF' => 'E02001803',
        '3AG' => 'E02001803',
        '3AH' => 'E02001803',
        '3AL' => 'E02001803',
        '3AN' => 'E02001803',
        '3AP' => 'E02001803',
        '3AQ' => 'E02001803',
        '3AR' => 'E02001803',
        '3AS' => 'E02001803',
        '3AT' => 'E02001803',
        '3AW' => 'E02001803',
        '3AX' => 'E02001803',
        '3AY' => 'E02001803',
        '3AZ' => 'E02001803',
        '3BA' => 'E02001803',
        '3BD' => 'E02001803',
        '3BL' => 'E02001803',
        '3BN' => 'E02001803',
        '3BT' => 'E02001803',
        '3BU' => 'E02001803',
        '3BW' => 'E02001803',
        '3BX' => 'E02001803',
        '3BY' => 'E02001803',
        '3BZ' => 'E02001803',
        '3DA' => 'E02001803',
        '3DB' => 'E02001803',
        '3DD' => 'E02001803',
        '3DE' => 'E02001803',
        '3DG' => 'E02001803',
        '3DH' => 'E02001803',
        '3DJ' => 'E02001803',
        '3DL' => 'E02001803',
        '3DN' => 'E02001803',
        '3DP' => 'E02001803',
        '3DR' => 'E02001803',
        '3DS' => 'E02001803',
        '3DT' => 'E02001803',
        '3DU' => 'E02001803',
        '3DW' => 'E02001803',
        '3DX' => 'E02001803',
        '3DY' => 'E02001803',
        '3DZ' => 'E02001803',
        '3EA' => 'E02001803',
        '3EB' => 'E02001803',
        '3EF' => 'E02001803',
        '3EG' => 'E02001803',
        '3EJ' => 'E02001803',
        '3EL' => 'E02001803',
        '3EQ' => 'E02001803',
        '3ES' => 'E02001803',
        '3ET' => 'E02001803',
        '3EW' => 'E02001803',
        '3EX' => 'E02001803',
        '3EY' => 'E02001803',
        '3EZ' => 'E02001803',
        '3HA' => 'E02001803',
        '3HD' => 'E02001803',
        '3HE' => 'E02001803',
        '3HF' => 'E02001803',
        '3HH' => 'E02001803',
        '3HJ' => 'E02001803',
        '3HL' => 'E02001803',
        '3HN' => 'E02001803',
        '3HP' => 'E02001803',
        '3HQ' => 'E02001795',
        '3HR' => 'E02001803',
        '3HS' => 'E02001803',
        '3HT' => 'E02001803',
        '3HU' => 'E02001803',
        '3HW' => 'E02001803',
        '3HX' => 'E02001803',
        '3HY' => 'E02001806',
        '3HZ' => 'E02001803',
        '3JA' => 'E02001806',
        '3JB' => 'E02001806',
        '3JD' => 'E02001803',
        '3JE' => 'E02001803',
        '3JF' => 'E02001803',
        '3JG' => 'E02001803',
        '3JH' => 'E02001803',
        '3JJ' => 'E02001803',
        '3JL' => 'E02001803',
        '3JP' => 'E02001803',
        '3JQ' => 'E02001803',
        '3JR' => 'E02001803',
        '3JS' => 'E02001803',
        '3JT' => 'E02001803',
        '3JU' => 'E02001803',
        '3JW' => 'E02001803',
        '3JX' => 'E02001803',
        '3JY' => 'E02001803',
        '3JZ' => 'E02001803',
        '3LB' => 'E02001803',
        '3LD' => 'E02001803',
        '3LE' => 'E02001803',
        '3LF' => 'E02001803',
        '3LG' => 'E02001803',
        '3LH' => 'E02001803',
        '3LJ' => 'E02001803',
        '3LL' => 'E02001803',
        '3LN' => 'E02001803',
        '3LP' => 'E02001803',
        '3LQ' => 'E02001803',
        '3LR' => 'E02001803',
        '3LW' => 'E02001803',
        '3NA' => 'E02001803',
        '3NB' => 'E02001806',
        '3ND' => 'E02001803',
        '3NE' => 'E02001806',
        '3NF' => 'E02001803',
        '3NG' => 'E02001803',
        '3NH' => 'E02001803',
        '3NL' => 'E02001803',
        '3NN' => 'E02001803',
        '3NP' => 'E02001806',
        '3NQ' => 'E02001803',
        '3NR' => 'E02001803',
        '3NS' => 'E02001803',
        '3NT' => 'E02001806',
        '3NU' => 'E02001806',
        '3NW' => 'E02001803',
        '3NX' => 'E02001806',
        '3PA' => 'E02001803',
        '3PD' => 'E02001806',
        '3PE' => 'E02001803',
        '3PF' => 'E02001803',
        '3PG' => 'E02001803',
        '3PT' => 'E02001803',
        '3PU' => 'E02001803',
        '3PY' => 'E02001803',
        '3PZ' => 'E02001803',
        '3QA' => 'E02001803',
        '3QB' => 'E02001803',
        '3QD' => 'E02001803',
        '3QE' => 'E02001803',
        '3QF' => 'E02001796',
        '3QG' => 'E02001803',
        '3QH' => 'E02001803',
        '3QJ' => 'E02001803',
        '3QN' => 'E02001803',
        '3QP' => 'E02001803',
        '3QQ' => 'E02001803',
        '3QR' => 'E02001803',
        '3QS' => 'E02001803',
        '3QU' => 'E02001803',
        '3QX' => 'E02001803',
        '3QY' => 'E02001803',
        '3RG' => 'E02001803',
        '3RJ' => 'E02001803',
        '3RL' => 'E02001803',
        '3RN' => 'E02001801',
        '3RP' => 'E02001803',
        '3RQ' => 'E02001803',
        '3RW' => 'E02001803',
        '3SB' => 'E02001803',
        '3SD' => 'E02001803',
        '3SH' => 'E02001803',
        '3SJ' => 'E02001803',
        '3SL' => 'E02001803',
        '3SN' => 'E02001801',
        '3SQ' => 'E02001803',
        '3SW' => 'E02001803',
        '3UZ' => 'E02001803',
        '3WX' => 'E02001795',
        '3WY' => 'E02001803',
        '3WZ' => 'E02001795',
        '3YS' => 'E02001795',
        '3YT' => 'E02001795',
        '3YU' => 'E02001803',
        '3YW' => 'E02001795',
        '3YX' => 'E02001803',
        '3YY' => 'E02001803',
        '3YZ' => 'E02001803',
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
