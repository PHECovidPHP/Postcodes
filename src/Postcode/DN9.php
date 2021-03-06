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
final class DN9
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02002768',
        '1AB' => 'E02002771',
        '1AD' => 'E02002771',
        '1AE' => 'E02002771',
        '1AF' => 'E02002771',
        '1AG' => 'E02002771',
        '1AH' => 'E02002771',
        '1AJ' => 'E02002771',
        '1AL' => 'E02002771',
        '1AN' => 'E02002771',
        '1AP' => 'E02002771',
        '1AQ' => 'E02002771',
        '1AR' => 'E02002771',
        '1AS' => 'E02002771',
        '1AT' => 'E02002771',
        '1AU' => 'E02002771',
        '1AW' => 'E02002771',
        '1AX' => 'E02002771',
        '1AY' => 'E02002771',
        '1AZ' => 'E02002771',
        '1BA' => 'E02002771',
        '1BB' => 'E02002771',
        '1BD' => 'E02002771',
        '1BE' => 'E02002771',
        '1BF' => 'E02002768',
        '1BG' => 'E02002771',
        '1BH' => 'E02002771',
        '1BJ' => 'E02002771',
        '1BL' => 'E02002771',
        '1BN' => 'E02002768',
        '1BP' => 'E02002771',
        '1BQ' => 'E02002771',
        '1BS' => 'E02002771',
        '1BT' => 'E02002768',
        '1BU' => 'E02002768',
        '1BW' => 'E02002768',
        '1BX' => 'E02002768',
        '1BY' => 'E02002768',
        '1BZ' => 'E02002768',
        '1DA' => 'E02002771',
        '1DB' => 'E02002771',
        '1DD' => 'E02002771',
        '1DE' => 'E02002771',
        '1DF' => 'E02002768',
        '1DG' => 'E02002768',
        '1DH' => 'E02002768',
        '1DJ' => 'E02002768',
        '1DL' => 'E02002768',
        '1DN' => 'E02002768',
        '1DP' => 'E02002768',
        '1DQ' => 'E02002768',
        '1DR' => 'E02002768',
        '1DS' => 'E02002768',
        '1DT' => 'E02002768',
        '1DU' => 'E02002768',
        '1DW' => 'E02002768',
        '1DX' => 'E02002768',
        '1DY' => 'E02002768',
        '1DZ' => 'E02002768',
        '1EA' => 'E02002768',
        '1EB' => 'E02002768',
        '1ED' => 'E02002768',
        '1EE' => 'E02002768',
        '1EF' => 'E02002768',
        '1EG' => 'E02002768',
        '1EH' => 'E02002768',
        '1EJ' => 'E02002768',
        '1EL' => 'E02002768',
        '1EN' => 'E02002768',
        '1EP' => 'E02002768',
        '1EQ' => 'E02002768',
        '1ER' => 'E02002768',
        '1ES' => 'E02002768',
        '1ET' => 'E02002768',
        '1EU' => 'E02002768',
        '1EW' => 'E02002768',
        '1EX' => 'E02002768',
        '1EY' => 'E02002768',
        '1EZ' => 'E02002768',
        '1FA' => 'E02002768',
        '1FB' => 'E02002768',
        '1FD' => 'E02002768',
        '1FE' => 'E02002771',
        '1FF' => 'E02002768',
        '1FG' => 'E02002768',
        '1FH' => 'E02002768',
        '1FJ' => 'E02002771',
        '1FR' => 'E02002768',
        '1GA' => 'E02002768',
        '1GB' => 'E02002768',
        '1GD' => 'E02002768',
        '1GE' => 'E02002768',
        '1GF' => 'E02002768',
        '1GG' => 'E02002768',
        '1GH' => 'E02002768',
        '1GJ' => 'E02002768',
        '1GL' => 'E02002768',
        '1GN' => 'E02001560',
        '1GP' => 'E02001560',
        '1GQ' => 'E02002768',
        '1GR' => 'E02002768',
        '1GS' => 'E02002768',
        '1GT' => 'E02002768',
        '1GU' => 'E02002768',
        '1GW' => 'E02002768',
        '1GX' => 'E02002768',
        '1GY' => 'E02002768',
        '1GZ' => 'E02002768',
        '1HA' => 'E02002768',
        '1HB' => 'E02002768',
        '1HD' => 'E02002768',
        '1HE' => 'E02002768',
        '1HF' => 'E02002768',
        '1HG' => 'E02002768',
        '1HH' => 'E02002768',
        '1HJ' => 'E02002768',
        '1HL' => 'E02002768',
        '1HN' => 'E02002768',
        '1HP' => 'E02002768',
        '1HQ' => 'E02002768',
        '1HR' => 'E02002768',
        '1HS' => 'E02002768',
        '1HT' => 'E02002768',
        '1HU' => 'E02002768',
        '1HW' => 'E02002768',
        '1HX' => 'E02002768',
        '1HY' => 'E02002768',
        '1HZ' => 'E02002771',
        '1JA' => 'E02002768',
        '1JB' => 'E02002768',
        '1JD' => 'E02002768',
        '1JE' => 'E02002768',
        '1JF' => 'E02002768',
        '1JG' => 'E02002768',
        '1JH' => 'E02002768',
        '1JJ' => 'E02002768',
        '1JL' => 'E02002768',
        '1JN' => 'E02002768',
        '1JP' => 'E02002768',
        '1JQ' => 'E02002768',
        '1JR' => 'E02002768',
        '1JS' => 'E02002768',
        '1JT' => 'E02002768',
        '1JU' => 'E02002768',
        '1JW' => 'E02002768',
        '1JX' => 'E02002768',
        '1JY' => 'E02002768',
        '1JZ' => 'E02002768',
        '1LA' => 'E02002768',
        '1LB' => 'E02002768',
        '1LD' => 'E02002768',
        '1LE' => 'E02002768',
        '1LF' => 'E02002768',
        '1LG' => 'E02002768',
        '1LH' => 'E02002768',
        '1LJ' => 'E02002768',
        '1LL' => 'E02002768',
        '1LN' => 'E02002768',
        '1LP' => 'E02002768',
        '1LQ' => 'E02002768',
        '1LR' => 'E02002768',
        '1LS' => 'E02002768',
        '1LT' => 'E02002768',
        '1LU' => 'E02002768',
        '1LW' => 'E02001560',
        '1LX' => 'E02002768',
        '1LY' => 'E02002768',
        '1LZ' => 'E02002768',
        '1NA' => 'E02002768',
        '1NB' => 'E02002768',
        '1ND' => 'E02002768',
        '1NE' => 'E02002768',
        '1NF' => 'E02002768',
        '1NG' => 'E02002768',
        '1NH' => 'E02002768',
        '1NJ' => 'E02002768',
        '1NL' => 'E02002768',
        '1NN' => 'E02002768',
        '1NP' => 'E02002768',
        '1NQ' => 'E02002768',
        '1NR' => 'E02002768',
        '1NS' => 'E02002768',
        '1NT' => 'E02002768',
        '1NW' => 'E02002768',
        '1NX' => 'E02002768',
        '1NY' => 'E02002768',
        '1NZ' => 'E02002768',
        '1PA' => 'E02002768',
        '1PB' => 'E02002768',
        '1PD' => 'E02002768',
        '1PE' => 'E02002768',
        '1PF' => 'E02002768',
        '1PG' => 'E02002768',
        '1PH' => 'E02002768',
        '1PJ' => 'E02002768',
        '1PL' => 'E02002768',
        '1PN' => 'E02002768',
        '1PP' => 'E02002768',
        '1PQ' => 'E02002768',
        '1PR' => 'E02002768',
        '1PS' => 'E02002768',
        '1PT' => 'E02002768',
        '1PU' => 'E02002768',
        '1PW' => 'E02002768',
        '1PX' => 'E02001560',
        '1PY' => 'E02002768',
        '1PZ' => 'E02002768',
        '1QA' => 'E02002768',
        '1QB' => 'E02002768',
        '1QD' => 'E02002768',
        '1QE' => 'E02002768',
        '1QF' => 'E02002768',
        '1QG' => 'E02002768',
        '1QH' => 'E02002768',
        '1QJ' => 'E02002768',
        '1QL' => 'E02002768',
        '1QN' => 'E02002768',
        '1QP' => 'E02002768',
        '1QQ' => 'E02002768',
        '1QR' => 'E02002768',
        '1QS' => 'E02002768',
        '1QT' => 'E02002768',
        '1QU' => 'E02002768',
        '1QW' => 'E02002768',
        '1QX' => 'E02002771',
        '1QY' => 'E02002768',
        '1QZ' => 'E02002768',
        '1RA' => 'E02002771',
        '1RB' => 'E02002771',
        '1RD' => 'E02002771',
        '1RE' => 'E02002771',
        '1RF' => 'E02002771',
        '1RG' => 'E02002771',
        '1RH' => 'E02002771',
        '1RJ' => 'E02002771',
        '1RL' => 'E02002771',
        '1RN' => 'E02002771',
        '1RP' => 'E02002771',
        '1RQ' => 'E02002771',
        '1RR' => 'E02002771',
        '1RS' => 'E02002771',
        '1RT' => 'E02002771',
        '1RU' => 'E02002768',
        '1RW' => 'E02002771',
        '1RX' => 'E02002768',
        '1RY' => 'E02002768',
        '1RZ' => 'E02002768',
        '1SB' => 'E02001560',
        '1SD' => 'E02002768',
        '1SE' => 'E02002768',
        '1SF' => 'E02002768',
        '1SG' => 'E02002768',
        '1SH' => 'E02002768',
        '1SJ' => 'E02002768',
        '1SL' => 'E02002768',
        '1SN' => 'E02002768',
        '1SP' => 'E02002768',
        '1SQ' => 'E02002768',
        '1SR' => 'E02002768',
        '1SS' => 'E02002768',
        '1ST' => 'E02002768',
        '1SU' => 'E02002768',
        '1SW' => 'E02002768',
        '1SX' => 'E02002768',
        '1SY' => 'E02002768',
        '1SZ' => 'E02002768',
        '1TA' => 'E02002768',
        '1TB' => 'E02002768',
        '1TD' => 'E02002768',
        '1TE' => 'E02002768',
        '1TF' => 'E02002768',
        '1TG' => 'E02002768',
        '1TH' => 'E02002768',
        '1TJ' => 'E02002768',
        '1TL' => 'E02002768',
        '1TN' => 'E02002768',
        '1TP' => 'E02002768',
        '1TQ' => 'E02002768',
        '1TR' => 'E02002768',
        '1TS' => 'E02002768',
        '1TT' => 'E02002771',
        '1TZ' => 'E02002771',
        '1UN' => 'E02002768',
        '1UP' => 'E02001560',
        '1UQ' => 'E02001560',
        '1UR' => 'E02001560',
        '1US' => 'E02001560',
        '1UT' => 'E02001560',
        '1UU' => 'E02001560',
        '1UW' => 'E02001560',
        '1UX' => 'E02001560',
        '1UY' => 'E02001560',
        '1UZ' => 'E02001560',
        '1WA' => 'E02002768',
        '1WB' => 'E02002768',
        '1WE' => 'E02002768',
        '1WF' => 'E02001560',
        '1WG' => 'E02002768',
        '1WH' => 'E02002768',
        '1WJ' => 'E02001560',
        '1WL' => 'E02001560',
        '1WN' => 'E02001560',
        '1WP' => 'E02001560',
        '1WQ' => 'E02001560',
        '1WR' => 'E02002768',
        '1WS' => 'E02002771',
        '1WT' => 'E02001560',
        '1WU' => 'E02001560',
        '1WW' => 'E02001560',
        '1WX' => 'E02001560',
        '1WY' => 'E02002771',
        '1WZ' => 'E02002768',
        '1XA' => 'E02002768',
        '1XB' => 'E02002768',
        '1XD' => 'E02002768',
        '1XE' => 'E02001560',
        '1XF' => 'E02001560',
        '1XG' => 'E02002768',
        '1XH' => 'E02002768',
        '1XJ' => 'E02002768',
        '1XL' => 'E02002768',
        '1XN' => 'E02002768',
        '1XP' => 'E02002771',
        '1XQ' => 'E02002768',
        '1XR' => 'E02001560',
        '1XS' => 'E02002768',
        '1XT' => 'E02001560',
        '1XU' => 'E02002768',
        '1XW' => 'E02002768',
        '1XX' => 'E02002771',
        '1XY' => 'E02001560',
        '1XZ' => 'E02001560',
        '1YA' => 'E02002771',
        '1YB' => 'E02001560',
        '1YD' => 'E02001560',
        '1YE' => 'E02001560',
        '1YF' => 'E02001560',
        '1YG' => 'E02001560',
        '1YH' => 'E02002771',
        '1YJ' => 'E02002771',
        '1YY' => 'E02001560',
        '1YZ' => 'E02002771',
        '2AA' => 'E02002771',
        '2AB' => 'E02002771',
        '2AD' => 'E02002771',
        '2AE' => 'E02002771',
        '2AF' => 'E02002771',
        '2AG' => 'E02002771',
        '2AH' => 'E02002771',
        '2AJ' => 'E02002771',
        '2AL' => 'E02002771',
        '2AN' => 'E02002771',
        '2AP' => 'E02002771',
        '2AQ' => 'E02002771',
        '2AR' => 'E02002771',
        '2AS' => 'E02002771',
        '2AT' => 'E02002771',
        '2AU' => 'E02002771',
        '2AW' => 'E02002771',
        '2AX' => 'E02002771',
        '2AY' => 'E02002771',
        '2AZ' => 'E02002771',
        '2BA' => 'E02002771',
        '2BB' => 'E02002771',
        '2BD' => 'E02002771',
        '2BE' => 'E02002771',
        '2BF' => 'E02002771',
        '2BG' => 'E02002771',
        '2BH' => 'E02002771',
        '2BJ' => 'E02002771',
        '2BL' => 'E02002771',
        '2BN' => 'E02002771',
        '2BP' => 'E02002771',
        '2BQ' => 'E02002771',
        '2BS' => 'E02002771',
        '2BT' => 'E02002771',
        '2BU' => 'E02002771',
        '2BW' => 'E02002771',
        '2BX' => 'E02002771',
        '2BY' => 'E02002771',
        '2BZ' => 'E02002771',
        '2DA' => 'E02002771',
        '2DB' => 'E02002771',
        '2DD' => 'E02002771',
        '2DE' => 'E02002771',
        '2DF' => 'E02002771',
        '2DG' => 'E02002771',
        '2DH' => 'E02002771',
        '2DJ' => 'E02002771',
        '2DL' => 'E02002771',
        '2DN' => 'E02002771',
        '2DP' => 'E02002771',
        '2DQ' => 'E02002771',
        '2DR' => 'E02002771',
        '2DS' => 'E02002771',
        '2DT' => 'E02002771',
        '2DU' => 'E02002771',
        '2DW' => 'E02002771',
        '2DX' => 'E02002771',
        '2DY' => 'E02002771',
        '2DZ' => 'E02002771',
        '2EA' => 'E02002771',
        '2EB' => 'E02002771',
        '2ED' => 'E02002771',
        '2EE' => 'E02002771',
        '2EF' => 'E02002771',
        '2EG' => 'E02002771',
        '2EH' => 'E02002771',
        '2EJ' => 'E02002771',
        '2EL' => 'E02002771',
        '2EN' => 'E02005837',
        '2EP' => 'E02005837',
        '2EQ' => 'E02002771',
        '2ER' => 'E02005837',
        '2ES' => 'E02002771',
        '2ET' => 'E02002771',
        '2EU' => 'E02002771',
        '2EW' => 'E02002771',
        '2EX' => 'E02002771',
        '2EY' => 'E02002771',
        '2EZ' => 'E02002771',
        '2FA' => 'E02002771',
        '2FB' => 'E02002771',
        '2FD' => 'E02002771',
        '2FR' => 'E02002771',
        '2FS' => 'E02002771',
        '2GA' => 'E02002771',
        '2GB' => 'E02002771',
        '2GD' => 'E02002771',
        '2GE' => 'E02002771',
        '2GF' => 'E02002771',
        '2HA' => 'E02002771',
        '2HB' => 'E02002771',
        '2HD' => 'E02002771',
        '2HE' => 'E02002771',
        '2HF' => 'E02002771',
        '2HG' => 'E02002771',
        '2HH' => 'E02002771',
        '2HJ' => 'E02002771',
        '2HL' => 'E02002771',
        '2HN' => 'E02002771',
        '2HP' => 'E02002771',
        '2HQ' => 'E02002771',
        '2HR' => 'E02002771',
        '2HS' => 'E02002771',
        '2HT' => 'E02002771',
        '2HU' => 'E02002771',
        '2HW' => 'E02002771',
        '2HX' => 'E02002771',
        '2HY' => 'E02002771',
        '2HZ' => 'E02002771',
        '2JA' => 'E02002771',
        '2JB' => 'E02002771',
        '2JD' => 'E02002771',
        '2JE' => 'E02002771',
        '2JF' => 'E02002771',
        '2JG' => 'E02002771',
        '2JH' => 'E02002771',
        '2JJ' => 'E02002771',
        '2JL' => 'E02002771',
        '2JN' => 'E02002771',
        '2JP' => 'E02002771',
        '2JQ' => 'E02002771',
        '2JR' => 'E02002771',
        '2JS' => 'E02002771',
        '2JT' => 'E02002771',
        '2JU' => 'E02002771',
        '2JW' => 'E02002771',
        '2JX' => 'E02002771',
        '2JY' => 'E02002771',
        '2JZ' => 'E02002771',
        '2LA' => 'E02002771',
        '2LB' => 'E02002771',
        '2LD' => 'E02002771',
        '2LE' => 'E02002771',
        '2LF' => 'E02002771',
        '2LG' => 'E02002771',
        '2LH' => 'E02002771',
        '2LJ' => 'E02002771',
        '2LL' => 'E02002771',
        '2LN' => 'E02002771',
        '2LP' => 'E02002771',
        '2LQ' => 'E02002771',
        '2LR' => 'E02002771',
        '2LS' => 'E02002771',
        '2LT' => 'E02002771',
        '2LU' => 'E02002771',
        '2LW' => 'E02002771',
        '2LX' => 'E02002771',
        '2LY' => 'E02002771',
        '2LZ' => 'E02002771',
        '2NA' => 'E02002771',
        '2NB' => 'E02002771',
        '2ND' => 'E02002771',
        '2NE' => 'E02002771',
        '2NF' => 'E02002771',
        '2NG' => 'E02002771',
        '2NH' => 'E02002771',
        '2NJ' => 'E02002771',
        '2NL' => 'E02002771',
        '2NN' => 'E02002771',
        '2NP' => 'E02002771',
        '2NQ' => 'E02002771',
        '2NR' => 'E02005836',
        '2NS' => 'E02002771',
        '2NT' => 'E02002771',
        '2NU' => 'E02002771',
        '2NW' => 'E02005836',
        '2NX' => 'E02002771',
        '2NY' => 'E02002771',
        '2NZ' => 'E02002771',
        '2PD' => 'E02002771',
        '2PE' => 'E02002771',
        '2PF' => 'E02002771',
        '2PG' => 'E02002771',
        '2PH' => 'E02002771',
        '2PL' => 'E02002771',
        '2PN' => 'E02002771',
        '2PQ' => 'E02002771',
        '2PR' => 'E02002771',
        '2PS' => 'E02002771',
        '2PT' => 'E02002771',
        '2PU' => 'E02002771',
        '2PW' => 'E02002771',
        '2PY' => 'E02002771',
        '2QA' => 'E02002771',
        '2QB' => 'E02002771',
        '2QD' => 'E02002771',
        '2QE' => 'E02002771',
        '2QN' => 'E02002771',
        '2RB' => 'E02002771',
        '2RD' => 'E02002771',
        '2RE' => 'E02002771',
        '2RF' => 'E02002771',
        '2WA' => 'E02002771',
        '2WB' => 'E02002771',
        '2WL' => 'E02002771',
        '2WN' => 'E02002771',
        '2WP' => 'E02002771',
        '2WQ' => 'E02002771',
        '2WR' => 'E02002771',
        '2WS' => 'E02002771',
        '2WT' => 'E02002771',
        '2WU' => 'E02002771',
        '2WW' => 'E02002771',
        '2WX' => 'E02002771',
        '2WY' => 'E02002771',
        '2WZ' => 'E02002771',
        '2XA' => 'E02002771',
        '2XB' => 'E02002771',
        '2XD' => 'E02002771',
        '2XE' => 'E02002771',
        '2XF' => 'E02002771',
        '2XG' => 'E02001560',
        '2XH' => 'E02001560',
        '2YX' => 'E02002771',
        '2YY' => 'E02002771',
        '2YZ' => 'E02002771',
        '2ZT' => 'E02002771',
        '3AA' => 'E02001564',
        '3AB' => 'E02001564',
        '3AD' => 'E02001564',
        '3AE' => 'E02001564',
        '3AF' => 'E02001564',
        '3AG' => 'E02001564',
        '3AH' => 'E02001564',
        '3AJ' => 'E02001564',
        '3AL' => 'E02001564',
        '3AN' => 'E02001564',
        '3AP' => 'E02001564',
        '3AQ' => 'E02001564',
        '3AR' => 'E02001564',
        '3AS' => 'E02001564',
        '3AT' => 'E02001564',
        '3AU' => 'E02001564',
        '3AW' => 'E02001564',
        '3AX' => 'E02001564',
        '3AY' => 'E02001564',
        '3AZ' => 'E02001564',
        '3BA' => 'E02001564',
        '3BB' => 'E02001564',
        '3BD' => 'E02001564',
        '3BE' => 'E02001564',
        '3BF' => 'E02001564',
        '3BG' => 'E02001564',
        '3BH' => 'E02001564',
        '3BJ' => 'E02001564',
        '3BL' => 'E02001564',
        '3BN' => 'E02001564',
        '3BP' => 'E02001564',
        '3BQ' => 'E02001564',
        '3BS' => 'E02001564',
        '3BT' => 'E02001564',
        '3BU' => 'E02001564',
        '3BW' => 'E02001564',
        '3BX' => 'E02001564',
        '3BY' => 'E02001564',
        '3BZ' => 'E02001564',
        '3DA' => 'E02001564',
        '3DB' => 'E02001564',
        '3DD' => 'E02001564',
        '3DE' => 'E02001564',
        '3DF' => 'E02001564',
        '3DG' => 'E02001564',
        '3DH' => 'E02001564',
        '3DJ' => 'E02001564',
        '3DL' => 'E02001564',
        '3DN' => 'E02001564',
        '3DP' => 'E02001564',
        '3DQ' => 'E02001564',
        '3DR' => 'E02001564',
        '3DS' => 'E02001564',
        '3DT' => 'E02001564',
        '3DU' => 'E02001564',
        '3DW' => 'E02001564',
        '3DX' => 'E02001564',
        '3DY' => 'E02001564',
        '3DZ' => 'E02001564',
        '3EA' => 'E02002771',
        '3EB' => 'E02001564',
        '3ED' => 'E02001564',
        '3EE' => 'E02001564',
        '3EF' => 'E02001564',
        '3EG' => 'E02001564',
        '3EH' => 'E02001564',
        '3EJ' => 'E02001564',
        '3EL' => 'E02001564',
        '3EN' => 'E02001576',
        '3EP' => 'E02001576',
        '3EQ' => 'E02001564',
        '3ER' => 'E02001576',
        '3ES' => 'E02001576',
        '3ET' => 'E02001576',
        '3EU' => 'E02001576',
        '3EW' => 'E02001576',
        '3EX' => 'E02001576',
        '3EY' => 'E02001576',
        '3EZ' => 'E02001576',
        '3FA' => 'E02001564',
        '3FB' => 'E02001564',
        '3FD' => 'E02001564',
        '3FE' => 'E02001564',
        '3FF' => 'E02001564',
        '3FG' => 'E02001564',
        '3FH' => 'E02001576',
        '3FJ' => 'E02001576',
        '3FL' => 'E02001576',
        '3FN' => 'E02001576',
        '3FP' => 'E02001576',
        '3FQ' => 'E02001576',
        '3FS' => 'E02001576',
        '3FT' => 'E02001576',
        '3FU' => 'E02001576',
        '3FW' => 'E02001576',
        '3FX' => 'E02001576',
        '3FY' => 'E02001576',
        '3FZ' => 'E02001576',
        '3GA' => 'E02001564',
        '3GB' => 'E02001564',
        '3GD' => 'E02001564',
        '3GE' => 'E02001564',
        '3GF' => 'E02001576',
        '3GG' => 'E02001576',
        '3GH' => 'E02001564',
        '3GJ' => 'E02001564',
        '3GL' => 'E02001564',
        '3GN' => 'E02001564',
        '3GP' => 'E02001564',
        '3GQ' => 'E02001576',
        '3GR' => 'E02001576',
        '3GS' => 'E02001564',
        '3GT' => 'E02001576',
        '3GU' => 'E02001564',
        '3GW' => 'E02001564',
        '3GX' => 'E02001564',
        '3GY' => 'E02001564',
        '3GZ' => 'E02001564',
        '3HA' => 'E02001576',
        '3HB' => 'E02001576',
        '3HD' => 'E02001576',
        '3HE' => 'E02001576',
        '3HF' => 'E02001576',
        '3HG' => 'E02001576',
        '3HH' => 'E02001564',
        '3HJ' => 'E02001564',
        '3HL' => 'E02001564',
        '3HN' => 'E02001564',
        '3HP' => 'E02001564',
        '3HQ' => 'E02001564',
        '3HR' => 'E02001564',
        '3HS' => 'E02001564',
        '3HT' => 'E02001564',
        '3HU' => 'E02001564',
        '3HW' => 'E02001564',
        '3HX' => 'E02001564',
        '3HY' => 'E02001564',
        '3HZ' => 'E02001564',
        '3JA' => 'E02001564',
        '3JB' => 'E02001564',
        '3JD' => 'E02001564',
        '3JE' => 'E02001564',
        '3JF' => 'E02001564',
        '3JG' => 'E02001564',
        '3JH' => 'E02001564',
        '3JJ' => 'E02001564',
        '3JL' => 'E02001564',
        '3JN' => 'E02001564',
        '3JP' => 'E02001564',
        '3JQ' => 'E02001564',
        '3JR' => 'E02001564',
        '3JS' => 'E02001564',
        '3JT' => 'E02001564',
        '3JU' => 'E02001564',
        '3JW' => 'E02001564',
        '3JX' => 'E02001564',
        '3JY' => 'E02001564',
        '3JZ' => 'E02001564',
        '3LA' => 'E02001564',
        '3LB' => 'E02001564',
        '3LD' => 'E02001564',
        '3LE' => 'E02001564',
        '3LF' => 'E02001564',
        '3LG' => 'E02001564',
        '3LH' => 'E02001576',
        '3LJ' => 'E02001576',
        '3LL' => 'E02001576',
        '3LN' => 'E02001576',
        '3LP' => 'E02001576',
        '3LQ' => 'E02001576',
        '3LR' => 'E02001576',
        '3LS' => 'E02001576',
        '3LT' => 'E02001576',
        '3LU' => 'E02001576',
        '3LW' => 'E02001576',
        '3LX' => 'E02001576',
        '3LY' => 'E02001576',
        '3LZ' => 'E02001576',
        '3NA' => 'E02001576',
        '3NB' => 'E02001576',
        '3ND' => 'E02001576',
        '3NE' => 'E02001576',
        '3NF' => 'E02001576',
        '3NG' => 'E02001576',
        '3NH' => 'E02001576',
        '3NJ' => 'E02001576',
        '3NL' => 'E02001576',
        '3NN' => 'E02001576',
        '3NP' => 'E02001576',
        '3NQ' => 'E02001576',
        '3NR' => 'E02001564',
        '3NS' => 'E02001564',
        '3NT' => 'E02001564',
        '3NU' => 'E02001576',
        '3NW' => 'E02001576',
        '3NX' => 'E02001564',
        '3NY' => 'E02001564',
        '3NZ' => 'E02001564',
        '3PA' => 'E02001564',
        '3PB' => 'E02001564',
        '3PD' => 'E02001564',
        '3PE' => 'E02001564',
        '3PF' => 'E02001564',
        '3PG' => 'E02001564',
        '3PH' => 'E02001564',
        '3PJ' => 'E02001564',
        '3PL' => 'E02001564',
        '3PN' => 'E02001564',
        '3PP' => 'E02001564',
        '3PQ' => 'E02001564',
        '3PR' => 'E02001564',
        '3PS' => 'E02001564',
        '3PT' => 'E02001564',
        '3PU' => 'E02001564',
        '3PW' => 'E02001564',
        '3PX' => 'E02001564',
        '3PY' => 'E02001564',
        '3PZ' => 'E02001576',
        '3QA' => 'E02001564',
        '3QB' => 'E02001564',
        '3QD' => 'E02001564',
        '3QE' => 'E02001564',
        '3QF' => 'E02001564',
        '3QG' => 'E02001564',
        '3QH' => 'E02001576',
        '3QJ' => 'E02001576',
        '3QL' => 'E02001576',
        '3QN' => 'E02001576',
        '3QP' => 'E02001564',
        '3QQ' => 'E02001576',
        '3QR' => 'E02001564',
        '3QS' => 'E02001564',
        '3QT' => 'E02001576',
        '3QU' => 'E02001564',
        '3QW' => 'E02001564',
        '3QX' => 'E02001564',
        '3QZ' => 'E02001564',
        '3RA' => 'E02001564',
        '3RB' => 'E02001564',
        '3RD' => 'E02001564',
        '3RE' => 'E02001564',
        '3RF' => 'E02001564',
        '3RG' => 'E02001564',
        '3RH' => 'E02001564',
        '3RJ' => 'E02001564',
        '3TA' => 'E02001564',
        '3TB' => 'E02001564',
        '3WA' => 'E02001564',
        '3WB' => 'E02001564',
        '3WD' => 'E02001564',
        '3WE' => 'E02001564',
        '3WJ' => 'E02001564',
        '3WL' => 'E02001564',
        '3WN' => 'E02001564',
        '3WP' => 'E02001564',
        '3WQ' => 'E02001564',
        '3WR' => 'E02001564',
        '3WS' => 'E02001564',
        '3WU' => 'E02001564',
        '3WW' => 'E02001564',
        '3WX' => 'E02001564',
        '3WY' => 'E02001564',
        '3WZ' => 'E02001564',
        '3XA' => 'E02001576',
        '3XB' => 'E02001564',
        '3XD' => 'E02001564',
        '3XE' => 'E02001560',
        '3XF' => 'E02001560',
        '3XG' => 'E02001564',
        '3XH' => 'E02001564',
        '3XJ' => 'E02001564',
        '3XL' => 'E02001560',
        '3XN' => 'E02001564',
        '3XP' => 'E02001560',
        '3XQ' => 'E02001564',
        '3XR' => 'E02001564',
        '3XW' => 'E02001564',
        '3XZ' => 'E02001564',
        '3YY' => 'E02001564',
        '3YZ' => 'E02001564',
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
