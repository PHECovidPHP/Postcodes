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
final class NR15
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02005602',
        '1AB' => 'E02005602',
        '1AD' => 'E02005607',
        '1AE' => 'E02005602',
        '1AG' => 'E02005602',
        '1AH' => 'E02005605',
        '1AJ' => 'E02005605',
        '1AL' => 'E02005602',
        '1AN' => 'E02005605',
        '1AP' => 'E02005605',
        '1AQ' => 'E02005605',
        '1AR' => 'E02005605',
        '1AS' => 'E02005604',
        '1AT' => 'E02005602',
        '1AU' => 'E02005602',
        '1AW' => 'E02005605',
        '1AX' => 'E02005602',
        '1AY' => 'E02005602',
        '1AZ' => 'E02005605',
        '1BA' => 'E02005602',
        '1BB' => 'E02005602',
        '1BD' => 'E02005602',
        '1BE' => 'E02005602',
        '1BF' => 'E02005602',
        '1BG' => 'E02005604',
        '1BH' => 'E02005602',
        '1BJ' => 'E02005602',
        '1BL' => 'E02005602',
        '1BN' => 'E02005602',
        '1BP' => 'E02005602',
        '1BQ' => 'E02005602',
        '1BS' => 'E02005602',
        '1BT' => 'E02005602',
        '1BU' => 'E02005604',
        '1BW' => 'E02005602',
        '1BX' => 'E02005602',
        '1BY' => 'E02005602',
        '1BZ' => 'E02005605',
        '1DA' => 'E02005602',
        '1DB' => 'E02005602',
        '1DD' => 'E02005602',
        '1DF' => 'E02005602',
        '1DG' => 'E02005602',
        '1DH' => 'E02005602',
        '1DJ' => 'E02005602',
        '1DL' => 'E02005602',
        '1DN' => 'E02005602',
        '1DP' => 'E02005602',
        '1DR' => 'E02005602',
        '1DS' => 'E02005602',
        '1DT' => 'E02005602',
        '1DW' => 'E02005602',
        '1DX' => 'E02005602',
        '1DY' => 'E02005602',
        '1EA' => 'E02005602',
        '1EB' => 'E02005602',
        '1ED' => 'E02005602',
        '1EE' => 'E02005602',
        '1EF' => 'E02005602',
        '1EG' => 'E02005602',
        '1EH' => 'E02005602',
        '1EJ' => 'E02005602',
        '1EL' => 'E02005602',
        '1EN' => 'E02005602',
        '1EP' => 'E02005602',
        '1EQ' => 'E02005605',
        '1ER' => 'E02005602',
        '1ES' => 'E02005602',
        '1ET' => 'E02005602',
        '1EW' => 'E02005602',
        '1EX' => 'E02005602',
        '1EY' => 'E02005602',
        '1HA' => 'E02005602',
        '1HB' => 'E02005602',
        '1HD' => 'E02005602',
        '1HE' => 'E02005602',
        '1HF' => 'E02005602',
        '1HG' => 'E02005602',
        '1HH' => 'E02005602',
        '1HJ' => 'E02005602',
        '1HL' => 'E02005602',
        '1HP' => 'E02005602',
        '1HR' => 'E02005602',
        '1HS' => 'E02005602',
        '1HT' => 'E02005602',
        '1HU' => 'E02005602',
        '1HW' => 'E02005605',
        '1HX' => 'E02005602',
        '1HY' => 'E02005602',
        '1HZ' => 'E02005602',
        '1JA' => 'E02005602',
        '1JB' => 'E02005602',
        '1JD' => 'E02005602',
        '1JE' => 'E02005602',
        '1JF' => 'E02005602',
        '1JG' => 'E02005602',
        '1JH' => 'E02005602',
        '1JJ' => 'E02005602',
        '1JL' => 'E02005602',
        '1JN' => 'E02005602',
        '1JP' => 'E02005602',
        '1JQ' => 'E02005602',
        '1JR' => 'E02005602',
        '1JS' => 'E02005602',
        '1JT' => 'E02005602',
        '1JU' => 'E02005602',
        '1JW' => 'E02005602',
        '1JX' => 'E02005602',
        '1JY' => 'E02005602',
        '1JZ' => 'E02005602',
        '1LA' => 'E02005602',
        '1LB' => 'E02005602',
        '1LD' => 'E02005602',
        '1LE' => 'E02005602',
        '1LF' => 'E02005602',
        '1LG' => 'E02005602',
        '1LH' => 'E02005605',
        '1LJ' => 'E02005605',
        '1LL' => 'E02005605',
        '1LN' => 'E02005605',
        '1LP' => 'E02005605',
        '1LQ' => 'E02005602',
        '1LR' => 'E02005605',
        '1LS' => 'E02005605',
        '1LT' => 'E02005605',
        '1LU' => 'E02005605',
        '1LW' => 'E02005532',
        '1LX' => 'E02005605',
        '1LY' => 'E02005605',
        '1LZ' => 'E02005607',
        '1NA' => 'E02005605',
        '1NB' => 'E02005605',
        '1ND' => 'E02005605',
        '1NE' => 'E02005605',
        '1NF' => 'E02005605',
        '1NG' => 'E02005605',
        '1NH' => 'E02005605',
        '1NJ' => 'E02005605',
        '1NL' => 'E02005605',
        '1NN' => 'E02005605',
        '1NP' => 'E02005605',
        '1NQ' => 'E02005605',
        '1NR' => 'E02005608',
        '1NS' => 'E02005605',
        '1NT' => 'E02005605',
        '1NU' => 'E02005605',
        '1NW' => 'E02005605',
        '1NX' => 'E02005605',
        '1NY' => 'E02005605',
        '1NZ' => 'E02005605',
        '1PA' => 'E02005605',
        '1PB' => 'E02005605',
        '1PD' => 'E02005605',
        '1PE' => 'E02005605',
        '1PF' => 'E02005605',
        '1PG' => 'E02005605',
        '1PH' => 'E02005605',
        '1PJ' => 'E02005605',
        '1PL' => 'E02005605',
        '1PN' => 'E02005605',
        '1PP' => 'E02005605',
        '1PQ' => 'E02005605',
        '1PR' => 'E02005605',
        '1PS' => 'E02005605',
        '1PT' => 'E02005605',
        '1PU' => 'E02005605',
        '1PW' => 'E02005605',
        '1PX' => 'E02005605',
        '1PY' => 'E02005605',
        '1PZ' => 'E02005605',
        '1QA' => 'E02005605',
        '1QB' => 'E02005605',
        '1QD' => 'E02005605',
        '1QE' => 'E02005605',
        '1QF' => 'E02005605',
        '1QG' => 'E02005605',
        '1QH' => 'E02005605',
        '1QJ' => 'E02005605',
        '1QL' => 'E02005605',
        '1QN' => 'E02005605',
        '1QP' => 'E02005605',
        '1QQ' => 'E02005605',
        '1QR' => 'E02005605',
        '1QS' => 'E02005607',
        '1QT' => 'E02005602',
        '1QU' => 'E02005605',
        '1QX' => 'E02005605',
        '1QY' => 'E02005605',
        '1QZ' => 'E02005605',
        '1RB' => 'E02005605',
        '1RD' => 'E02005605',
        '1RE' => 'E02005605',
        '1RF' => 'E02005605',
        '1RG' => 'E02005605',
        '1RH' => 'E02005605',
        '1RJ' => 'E02005605',
        '1RL' => 'E02005605',
        '1RN' => 'E02005605',
        '1RP' => 'E02005605',
        '1RQ' => 'E02005605',
        '1RR' => 'E02005605',
        '1RS' => 'E02005605',
        '1RT' => 'E02005605',
        '1RU' => 'E02005605',
        '1RW' => 'E02005605',
        '1RX' => 'E02005605',
        '1RY' => 'E02005605',
        '1RZ' => 'E02005607',
        '1SA' => 'E02005607',
        '1SB' => 'E02005607',
        '1SD' => 'E02005607',
        '1SE' => 'E02005607',
        '1SG' => 'E02005607',
        '1SH' => 'E02005607',
        '1SJ' => 'E02005607',
        '1SL' => 'E02005607',
        '1SN' => 'E02005607',
        '1SP' => 'E02005607',
        '1SR' => 'E02005607',
        '1SS' => 'E02005607',
        '1ST' => 'E02005607',
        '1SU' => 'E02005605',
        '1SW' => 'E02005607',
        '1SX' => 'E02005605',
        '1SY' => 'E02005605',
        '1SZ' => 'E02005605',
        '1TA' => 'E02005605',
        '1TB' => 'E02005605',
        '1TD' => 'E02005605',
        '1TE' => 'E02005605',
        '1TF' => 'E02005605',
        '1TG' => 'E02005605',
        '1TH' => 'E02005605',
        '1TJ' => 'E02005605',
        '1TL' => 'E02005532',
        '1TN' => 'E02005605',
        '1TP' => 'E02005605',
        '1TQ' => 'E02005605',
        '1TR' => 'E02005605',
        '1TS' => 'E02005605',
        '1TT' => 'E02005605',
        '1TU' => 'E02005605',
        '1TW' => 'E02005532',
        '1TX' => 'E02005605',
        '1TY' => 'E02005605',
        '1TZ' => 'E02005605',
        '1UA' => 'E02005605',
        '1UB' => 'E02005605',
        '1UE' => 'E02005605',
        '1UF' => 'E02005605',
        '1UG' => 'E02005605',
        '1UH' => 'E02005605',
        '1UJ' => 'E02005605',
        '1UL' => 'E02005605',
        '1UN' => 'E02005605',
        '1UP' => 'E02005605',
        '1UQ' => 'E02005607',
        '1UR' => 'E02005605',
        '1US' => 'E02005607',
        '1UT' => 'E02005605',
        '1UU' => 'E02005605',
        '1UW' => 'E02005605',
        '1UX' => 'E02005605',
        '1UY' => 'E02005605',
        '1UZ' => 'E02005605',
        '1WA' => 'E02005602',
        '1WB' => 'E02005605',
        '1WD' => 'E02005605',
        '1WE' => 'E02005605',
        '1WF' => 'E02005605',
        '1WG' => 'E02005605',
        '1WH' => 'E02005605',
        '1WJ' => 'E02005605',
        '1WL' => 'E02005607',
        '1WN' => 'E02005602',
        '1WP' => 'E02005605',
        '1WQ' => 'E02005605',
        '1WR' => 'E02005605',
        '1WS' => 'E02005605',
        '1WT' => 'E02005605',
        '1WU' => 'E02005605',
        '1WW' => 'E02005605',
        '1WX' => 'E02005605',
        '1WY' => 'E02005605',
        '1WZ' => 'E02005605',
        '1XA' => 'E02005605',
        '1XB' => 'E02005605',
        '1XD' => 'E02005605',
        '1XE' => 'E02005605',
        '1XF' => 'E02005605',
        '1XG' => 'E02005605',
        '1XH' => 'E02005605',
        '1XJ' => 'E02005605',
        '1XL' => 'E02005605',
        '1XN' => 'E02005605',
        '1XP' => 'E02005605',
        '1XQ' => 'E02005607',
        '1XR' => 'E02005605',
        '1XS' => 'E02005605',
        '1XT' => 'E02005605',
        '1XU' => 'E02005605',
        '1XX' => 'E02005605',
        '1XZ' => 'E02005605',
        '1YA' => 'E02005605',
        '1YB' => 'E02005605',
        '1YD' => 'E02005605',
        '1YE' => 'E02005605',
        '1YF' => 'E02005602',
        '1YG' => 'E02005605',
        '1YH' => 'E02005605',
        '1YJ' => 'E02005605',
        '1YL' => 'E02005605',
        '1YN' => 'E02005605',
        '1YP' => 'E02005605',
        '1YQ' => 'E02005605',
        '1YR' => 'E02005605',
        '1YS' => 'E02005605',
        '1YT' => 'E02005605',
        '1YU' => 'E02005602',
        '1YW' => 'E02005605',
        '1YX' => 'E02005602',
        '1ZA' => 'E02005602',
        '1ZR' => 'E02005605',
        '1ZX' => 'E02005605',
        '1ZZ' => 'E02005605',
        '2AA' => 'E02005610',
        '2AB' => 'E02005608',
        '2AD' => 'E02005608',
        '2AE' => 'E02005608',
        '2AF' => 'E02005607',
        '2AG' => 'E02005608',
        '2AH' => 'E02005607',
        '2AJ' => 'E02005610',
        '2AL' => 'E02005610',
        '2AN' => 'E02005607',
        '2AP' => 'E02005610',
        '2AQ' => 'E02005608',
        '2AR' => 'E02005610',
        '2AS' => 'E02005610',
        '2AT' => 'E02005610',
        '2AU' => 'E02005610',
        '2AW' => 'E02005610',
        '2AX' => 'E02005610',
        '2AY' => 'E02005532',
        '2AZ' => 'E02005610',
        '2BA' => 'E02005610',
        '2BB' => 'E02005610',
        '2BD' => 'E02005610',
        '2BE' => 'E02005610',
        '2BF' => 'E02005610',
        '2BG' => 'E02005610',
        '2BH' => 'E02005610',
        '2BJ' => 'E02005610',
        '2BL' => 'E02005610',
        '2BN' => 'E02005607',
        '2BP' => 'E02005610',
        '2BQ' => 'E02005610',
        '2BS' => 'E02005610',
        '2BT' => 'E02005610',
        '2BU' => 'E02005610',
        '2BW' => 'E02005610',
        '2BX' => 'E02005610',
        '2BY' => 'E02005610',
        '2BZ' => 'E02005610',
        '2DA' => 'E02005610',
        '2DB' => 'E02005610',
        '2DD' => 'E02005610',
        '2DE' => 'E02005610',
        '2DF' => 'E02005610',
        '2DG' => 'E02005610',
        '2DH' => 'E02005610',
        '2DJ' => 'E02005610',
        '2DL' => 'E02005610',
        '2DP' => 'E02005607',
        '2DQ' => 'E02005610',
        '2DR' => 'E02005610',
        '2DS' => 'E02005607',
        '2DT' => 'E02005607',
        '2DU' => 'E02005607',
        '2DW' => 'E02005610',
        '2DX' => 'E02005610',
        '2DY' => 'E02005607',
        '2DZ' => 'E02005610',
        '2EA' => 'E02005607',
        '2EB' => 'E02005610',
        '2ED' => 'E02005610',
        '2EE' => 'E02005610',
        '2EF' => 'E02005610',
        '2EG' => 'E02005610',
        '2EH' => 'E02005610',
        '2EJ' => 'E02005610',
        '2EL' => 'E02005607',
        '2EN' => 'E02005607',
        '2EP' => 'E02005607',
        '2EQ' => 'E02005607',
        '2ER' => 'E02005607',
        '2ES' => 'E02005607',
        '2ET' => 'E02005607',
        '2EU' => 'E02005607',
        '2EW' => 'E02005607',
        '2EY' => 'E02005607',
        '2EZ' => 'E02005607',
        '2FB' => 'E02005607',
        '2FD' => 'E02005607',
        '2FE' => 'E02005607',
        '2GA' => 'E02005607',
        '2GN' => 'E02005607',
        '2GP' => 'E02005607',
        '2GQ' => 'E02005607',
        '2GR' => 'E02005607',
        '2GS' => 'E02005607',
        '2GT' => 'E02005607',
        '2GU' => 'E02005607',
        '2GW' => 'E02005607',
        '2GX' => 'E02005607',
        '2GY' => 'E02005607',
        '2GZ' => 'E02005607',
        '2HA' => 'E02005610',
        '2HB' => 'E02005610',
        '2HD' => 'E02005607',
        '2HE' => 'E02005610',
        '2HF' => 'E02005607',
        '2HG' => 'E02005610',
        '2HH' => 'E02005610',
        '2HJ' => 'E02005607',
        '2HL' => 'E02005610',
        '2HN' => 'E02005610',
        '2HP' => 'E02005610',
        '2HQ' => 'E02005607',
        '2HR' => 'E02005610',
        '2HS' => 'E02005610',
        '2HT' => 'E02005610',
        '2HU' => 'E02005610',
        '2HW' => 'E02005607',
        '2HX' => 'E02005610',
        '2HY' => 'E02005610',
        '2HZ' => 'E02005610',
        '2JA' => 'E02005607',
        '2JB' => 'E02005610',
        '2JD' => 'E02005607',
        '2JE' => 'E02005607',
        '2JF' => 'E02005607',
        '2JG' => 'E02005607',
        '2JH' => 'E02005607',
        '2JJ' => 'E02005607',
        '2JL' => 'E02005607',
        '2JN' => 'E02005607',
        '2JP' => 'E02005607',
        '2JQ' => 'E02005607',
        '2JR' => 'E02005607',
        '2JS' => 'E02005607',
        '2JT' => 'E02005607',
        '2JU' => 'E02005607',
        '2JW' => 'E02005607',
        '2JX' => 'E02005610',
        '2JY' => 'E02005607',
        '2JZ' => 'E02005610',
        '2LA' => 'E02005610',
        '2LB' => 'E02005607',
        '2LD' => 'E02005610',
        '2LE' => 'E02005607',
        '2LF' => 'E02005608',
        '2LG' => 'E02005608',
        '2LH' => 'E02005607',
        '2LJ' => 'E02005608',
        '2LL' => 'E02005608',
        '2LN' => 'E02005608',
        '2LP' => 'E02005608',
        '2LQ' => 'E02005532',
        '2LR' => 'E02005608',
        '2LS' => 'E02005608',
        '2LT' => 'E02005608',
        '2LU' => 'E02005608',
        '2LW' => 'E02005608',
        '2LX' => 'E02005608',
        '2LY' => 'E02005608',
        '2LZ' => 'E02005608',
        '2NA' => 'E02005608',
        '2NB' => 'E02005608',
        '2ND' => 'E02005608',
        '2NE' => 'E02005608',
        '2NF' => 'E02005608',
        '2NG' => 'E02005608',
        '2NH' => 'E02005608',
        '2NJ' => 'E02005608',
        '2NL' => 'E02005608',
        '2NN' => 'E02005608',
        '2NP' => 'E02005608',
        '2NQ' => 'E02005608',
        '2NR' => 'E02005608',
        '2NS' => 'E02005608',
        '2NT' => 'E02005608',
        '2NU' => 'E02005608',
        '2NW' => 'E02005608',
        '2NX' => 'E02005608',
        '2NY' => 'E02005608',
        '2NZ' => 'E02005607',
        '2PA' => 'E02005608',
        '2PB' => 'E02005608',
        '2PD' => 'E02005607',
        '2PE' => 'E02005607',
        '2PF' => 'E02005607',
        '2PG' => 'E02005607',
        '2PH' => 'E02005607',
        '2PJ' => 'E02005607',
        '2PL' => 'E02005607',
        '2PN' => 'E02005607',
        '2PP' => 'E02005607',
        '2PQ' => 'E02005607',
        '2PR' => 'E02005607',
        '2PS' => 'E02005607',
        '2PT' => 'E02005607',
        '2PU' => 'E02005607',
        '2PW' => 'E02005607',
        '2PX' => 'E02005607',
        '2PY' => 'E02005607',
        '2PZ' => 'E02005607',
        '2QA' => 'E02005607',
        '2QB' => 'E02005607',
        '2QD' => 'E02005607',
        '2QE' => 'E02005607',
        '2QF' => 'E02005532',
        '2QG' => 'E02005607',
        '2QH' => 'E02005608',
        '2QJ' => 'E02005608',
        '2QL' => 'E02005608',
        '2QN' => 'E02005608',
        '2QP' => 'E02005608',
        '2QQ' => 'E02005608',
        '2QR' => 'E02005608',
        '2QS' => 'E02005608',
        '2QT' => 'E02005608',
        '2QU' => 'E02005608',
        '2QW' => 'E02005608',
        '2QX' => 'E02005608',
        '2QY' => 'E02005607',
        '2QZ' => 'E02005608',
        '2RA' => 'E02005608',
        '2RB' => 'E02005608',
        '2RD' => 'E02005608',
        '2RE' => 'E02005608',
        '2RF' => 'E02005608',
        '2RG' => 'E02005608',
        '2RH' => 'E02005607',
        '2RJ' => 'E02005607',
        '2RL' => 'E02005607',
        '2RN' => 'E02005607',
        '2RP' => 'E02005607',
        '2RQ' => 'E02005607',
        '2RR' => 'E02005607',
        '2RS' => 'E02005607',
        '2RT' => 'E02005607',
        '2RU' => 'E02005607',
        '2RW' => 'E02005607',
        '2RX' => 'E02005607',
        '2RY' => 'E02005607',
        '2RZ' => 'E02005608',
        '2SA' => 'E02005608',
        '2SB' => 'E02005608',
        '2SD' => 'E02005608',
        '2SE' => 'E02005608',
        '2SF' => 'E02005608',
        '2SG' => 'E02005608',
        '2SH' => 'E02005608',
        '2SJ' => 'E02005608',
        '2SL' => 'E02005608',
        '2SN' => 'E02005608',
        '2SP' => 'E02005608',
        '2SQ' => 'E02005608',
        '2SR' => 'E02005608',
        '2SS' => 'E02005608',
        '2ST' => 'E02005608',
        '2SU' => 'E02005608',
        '2SW' => 'E02005608',
        '2SX' => 'E02005607',
        '2SY' => 'E02005607',
        '2SZ' => 'E02005607',
        '2TA' => 'E02005607',
        '2TB' => 'E02005607',
        '2TD' => 'E02005607',
        '2TE' => 'E02005607',
        '2TF' => 'E02005607',
        '2TG' => 'E02005607',
        '2TH' => 'E02005607',
        '2TJ' => 'E02005607',
        '2TL' => 'E02005607',
        '2TN' => 'E02005607',
        '2TP' => 'E02005607',
        '2TQ' => 'E02005607',
        '2TR' => 'E02005607',
        '2TS' => 'E02005607',
        '2TT' => 'E02005607',
        '2TU' => 'E02005607',
        '2TW' => 'E02005607',
        '2TX' => 'E02005607',
        '2TY' => 'E02005607',
        '2TZ' => 'E02005607',
        '2UA' => 'E02005607',
        '2UB' => 'E02005607',
        '2UD' => 'E02005607',
        '2UE' => 'E02005607',
        '2UF' => 'E02005607',
        '2UG' => 'E02005607',
        '2UH' => 'E02005607',
        '2UJ' => 'E02005607',
        '2UL' => 'E02005607',
        '2UN' => 'E02005607',
        '2UP' => 'E02005607',
        '2UQ' => 'E02005607',
        '2UR' => 'E02005607',
        '2US' => 'E02005607',
        '2UT' => 'E02005607',
        '2UU' => 'E02005607',
        '2UW' => 'E02005607',
        '2UX' => 'E02005609',
        '2UY' => 'E02005607',
        '2UZ' => 'E02005607',
        '2WA' => 'E02005607',
        '2WB' => 'E02005607',
        '2WD' => 'E02005607',
        '2WE' => 'E02005607',
        '2WF' => 'E02005607',
        '2WG' => 'E02005607',
        '2WH' => 'E02005607',
        '2WJ' => 'E02005607',
        '2WL' => 'E02005607',
        '2WN' => 'E02005607',
        '2WP' => 'E02005607',
        '2WQ' => 'E02005607',
        '2WR' => 'E02005607',
        '2WS' => 'E02005607',
        '2WT' => 'E02005607',
        '2WU' => 'E02005607',
        '2WW' => 'E02005607',
        '2WX' => 'E02005607',
        '2WY' => 'E02005607',
        '2WZ' => 'E02005607',
        '2XA' => 'E02005607',
        '2XB' => 'E02005607',
        '2XD' => 'E02005607',
        '2XE' => 'E02005607',
        '2XF' => 'E02005607',
        '2XG' => 'E02005607',
        '2XH' => 'E02005607',
        '2XJ' => 'E02005607',
        '2XL' => 'E02005607',
        '2XN' => 'E02005607',
        '2XP' => 'E02005607',
        '2XQ' => 'E02005607',
        '2XR' => 'E02005607',
        '2XS' => 'E02005607',
        '2XT' => 'E02005607',
        '2XU' => 'E02005607',
        '2XW' => 'E02005607',
        '2XX' => 'E02005607',
        '2XY' => 'E02005607',
        '2XZ' => 'E02005607',
        '2YA' => 'E02005607',
        '2YB' => 'E02005607',
        '2YD' => 'E02005607',
        '2YE' => 'E02005607',
        '2YF' => 'E02005607',
        '2YG' => 'E02005607',
        '2YH' => 'E02005607',
        '2YJ' => 'E02005607',
        '2YL' => 'E02005607',
        '2YN' => 'E02005607',
        '2YP' => 'E02005607',
        '2YQ' => 'E02005607',
        '2YR' => 'E02005607',
        '2YS' => 'E02005607',
        '2YT' => 'E02005607',
        '2YU' => 'E02005607',
        '2YW' => 'E02005607',
        '2YX' => 'E02005607',
        '2YY' => 'E02005607',
        '2YZ' => 'E02005607',
        '2ZA' => 'E02005607',
        '2ZB' => 'E02005607',
        '2ZD' => 'E02005607',
        '2ZE' => 'E02005607',
        '2ZF' => 'E02005607',
        '2ZG' => 'E02005607',
        '2ZH' => 'E02005607',
        '2ZJ' => 'E02005607',
        '2ZL' => 'E02005607',
        '2ZN' => 'E02005607',
        '2ZP' => 'E02005607',
        '2ZR' => 'E02005607',
        '2ZS' => 'E02005607',
        '2ZT' => 'E02005607',
        '2ZU' => 'E02005607',
        '2ZW' => 'E02005607',
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