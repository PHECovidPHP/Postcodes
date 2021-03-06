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
final class DY5
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02002024',
        '1AB' => 'E02002024',
        '1AD' => 'E02002024',
        '1AE' => 'E02002024',
        '1AF' => 'E02002024',
        '1AG' => 'E02002024',
        '1AH' => 'E02002021',
        '1AP' => 'E02002024',
        '1AR' => 'E02002024',
        '1AS' => 'E02002024',
        '1AT' => 'E02002024',
        '1AU' => 'E02002024',
        '1AW' => 'E02002024',
        '1AX' => 'E02002024',
        '1AY' => 'E02002024',
        '1AZ' => 'E02002024',
        '1BA' => 'E02002024',
        '1BB' => 'E02002024',
        '1BD' => 'E02002024',
        '1BE' => 'E02002024',
        '1BF' => 'E02002024',
        '1BG' => 'E02002024',
        '1BQ' => 'E02002024',
        '1DA' => 'E02002024',
        '1DB' => 'E02002024',
        '1DD' => 'E02002024',
        '1DE' => 'E02002024',
        '1DF' => 'E02002024',
        '1DG' => 'E02002024',
        '1DH' => 'E02002024',
        '1DJ' => 'E02002024',
        '1DL' => 'E02002024',
        '1DN' => 'E02002024',
        '1DW' => 'E02002024',
        '1DX' => 'E02002021',
        '1EA' => 'E02002024',
        '1EB' => 'E02002024',
        '1ED' => 'E02002024',
        '1EE' => 'E02002024',
        '1EF' => 'E02002024',
        '1EG' => 'E02002024',
        '1EH' => 'E02002024',
        '1EJ' => 'E02002024',
        '1EQ' => 'E02002024',
        '1ES' => 'E02002019',
        '1EZ' => 'E02002021',
        '1FX' => 'E02002024',
        '1FY' => 'E02002021',
        '1FZ' => 'E02002019',
        '1GA' => 'E02002021',
        '1GB' => 'E02002021',
        '1GD' => 'E02002021',
        '1GE' => 'E02002021',
        '1GF' => 'E02002021',
        '1GH' => 'E02002021',
        '1GJ' => 'E02002021',
        '1GL' => 'E02002021',
        '1GN' => 'E02002021',
        '1GP' => 'E02002021',
        '1GQ' => 'E02002021',
        '1GR' => 'E02002021',
        '1GS' => 'E02002021',
        '1GT' => 'E02002021',
        '1GU' => 'E02002021',
        '1GW' => 'E02002021',
        '1GX' => 'E02002021',
        '1GZ' => 'E02002021',
        '1HA' => 'E02002021',
        '1HB' => 'E02002021',
        '1HD' => 'E02002021',
        '1HE' => 'E02002021',
        '1HF' => 'E02002021',
        '1HG' => 'E02002021',
        '1HH' => 'E02002016',
        '1HJ' => 'E02002021',
        '1HL' => 'E02002016',
        '1HN' => 'E02002016',
        '1HP' => 'E02002016',
        '1HQ' => 'E02002016',
        '1HR' => 'E02002016',
        '1HS' => 'E02002016',
        '1HT' => 'E02002016',
        '1HU' => 'E02002016',
        '1HW' => 'E02002016',
        '1HX' => 'E02002016',
        '1HY' => 'E02002021',
        '1HZ' => 'E02002021',
        '1JA' => 'E02002016',
        '1JB' => 'E02002016',
        '1JD' => 'E02002016',
        '1JE' => 'E02002016',
        '1JF' => 'E02002021',
        '1JG' => 'E02002016',
        '1JH' => 'E02002016',
        '1JJ' => 'E02002021',
        '1JL' => 'E02002021',
        '1JP' => 'E02002021',
        '1JQ' => 'E02002016',
        '1JR' => 'E02002021',
        '1JU' => 'E02002016',
        '1JW' => 'E02002021',
        '1JX' => 'E02002016',
        '1JY' => 'E02002016',
        '1LA' => 'E02002016',
        '1LB' => 'E02002016',
        '1LD' => 'E02002016',
        '1LE' => 'E02002021',
        '1LF' => 'E02002021',
        '1LG' => 'E02002021',
        '1LH' => 'E02002021',
        '1LJ' => 'E02002021',
        '1LL' => 'E02002021',
        '1LN' => 'E02002021',
        '1LP' => 'E02002016',
        '1LQ' => 'E02002021',
        '1LR' => 'E02002016',
        '1LS' => 'E02002016',
        '1LU' => 'E02002021',
        '1LW' => 'E02002021',
        '1LX' => 'E02002021',
        '1LY' => 'E02002021',
        '1LZ' => 'E02002021',
        '1PA' => 'E02002016',
        '1PB' => 'E02002016',
        '1PD' => 'E02002016',
        '1PE' => 'E02002016',
        '1PF' => 'E02002016',
        '1PG' => 'E02002016',
        '1PH' => 'E02002016',
        '1PJ' => 'E02002016',
        '1PL' => 'E02002016',
        '1PN' => 'E02002016',
        '1PP' => 'E02002016',
        '1PQ' => 'E02002016',
        '1PR' => 'E02002016',
        '1PS' => 'E02002016',
        '1PT' => 'E02002016',
        '1PU' => 'E02002016',
        '1PW' => 'E02002016',
        '1PX' => 'E02002016',
        '1PY' => 'E02002016',
        '1PZ' => 'E02002016',
        '1QA' => 'E02002016',
        '1QB' => 'E02002016',
        '1QH' => 'E02002021',
        '1QJ' => 'E02002021',
        '1QL' => 'E02002021',
        '1QN' => 'E02002021',
        '1QP' => 'E02002021',
        '1QQ' => 'E02002021',
        '1QR' => 'E02002021',
        '1QS' => 'E02002021',
        '1QT' => 'E02002021',
        '1QU' => 'E02002021',
        '1QW' => 'E02002021',
        '1QX' => 'E02002021',
        '1QY' => 'E02002021',
        '1QZ' => 'E02002021',
        '1RB' => 'E02002021',
        '1RD' => 'E02002021',
        '1RE' => 'E02002021',
        '1RF' => 'E02002021',
        '1RG' => 'E02002021',
        '1RH' => 'E02002021',
        '1RJ' => 'E02002021',
        '1RP' => 'E02002021',
        '1RU' => 'E02002021',
        '1SA' => 'E02002021',
        '1SB' => 'E02002024',
        '1SD' => 'E02002021',
        '1SE' => 'E02002024',
        '1SG' => 'E02002021',
        '1SH' => 'E02002021',
        '1SJ' => 'E02002021',
        '1SL' => 'E02002021',
        '1SN' => 'E02002021',
        '1SP' => 'E02002021',
        '1SQ' => 'E02002021',
        '1SR' => 'E02002021',
        '1SS' => 'E02002021',
        '1ST' => 'E02002021',
        '1SW' => 'E02002021',
        '1SX' => 'E02002021',
        '1SY' => 'E02002021',
        '1SZ' => 'E02002021',
        '1TA' => 'E02002021',
        '1TB' => 'E02002021',
        '1TD' => 'E02002021',
        '1TE' => 'E02002021',
        '1TF' => 'E02002019',
        '1TG' => 'E02002019',
        '1TH' => 'E02002019',
        '1TJ' => 'E02002019',
        '1TL' => 'E02002021',
        '1TN' => 'E02002021',
        '1TP' => 'E02002019',
        '1TQ' => 'E02002019',
        '1TR' => 'E02002021',
        '1TS' => 'E02002021',
        '1TT' => 'E02002021',
        '1TU' => 'E02002021',
        '1TW' => 'E02002021',
        '1TX' => 'E02002019',
        '1TY' => 'E02002021',
        '1TZ' => 'E02002021',
        '1UA' => 'E02002021',
        '1UB' => 'E02002021',
        '1UD' => 'E02002021',
        '1UE' => 'E02002021',
        '1UF' => 'E02002019',
        '1UG' => 'E02002024',
        '1UH' => 'E02002024',
        '1UJ' => 'E02002024',
        '1UL' => 'E02002021',
        '1UN' => 'E02002024',
        '1UP' => 'E02002024',
        '1UQ' => 'E02002024',
        '1UR' => 'E02002021',
        '1US' => 'E02002021',
        '1UT' => 'E02002019',
        '1UU' => 'E02002019',
        '1UW' => 'E02002024',
        '1UX' => 'E02002019',
        '1UY' => 'E02002021',
        '1UZ' => 'E02002021',
        '1XA' => 'E02002021',
        '1XB' => 'E02002021',
        '1XD' => 'E02002021',
        '1XE' => 'E02002021',
        '1XF' => 'E02002021',
        '1XG' => 'E02002021',
        '1XH' => 'E02002021',
        '1XJ' => 'E02002021',
        '1XL' => 'E02002021',
        '1XN' => 'E02002021',
        '1XP' => 'E02002021',
        '1XQ' => 'E02002024',
        '1XR' => 'E02002021',
        '1XS' => 'E02002021',
        '1XT' => 'E02002021',
        '1XU' => 'E02002021',
        '1XW' => 'E02002021',
        '1XX' => 'E02002021',
        '1XY' => 'E02002021',
        '1XZ' => 'E02002021',
        '1YA' => 'E02002021',
        '1YD' => 'E02002021',
        '1YE' => 'E02002021',
        '1YF' => 'E02002021',
        '1YG' => 'E02002021',
        '1YH' => 'E02002021',
        '1YJ' => 'E02002021',
        '1YL' => 'E02002021',
        '1YN' => 'E02002021',
        '1YP' => 'E02002021',
        '1YQ' => 'E02002021',
        '1YR' => 'E02002021',
        '1YS' => 'E02002021',
        '1YT' => 'E02002021',
        '1YU' => 'E02002021',
        '1YW' => 'E02002021',
        '1YX' => 'E02002021',
        '1YY' => 'E02002024',
        '1YZ' => 'E02002024',
        '2AA' => 'E02002024',
        '2AB' => 'E02002024',
        '2AD' => 'E02002024',
        '2AE' => 'E02002024',
        '2AF' => 'E02002024',
        '2AG' => 'E02002024',
        '2AH' => 'E02002024',
        '2AJ' => 'E02002024',
        '2AL' => 'E02002024',
        '2AN' => 'E02002024',
        '2AP' => 'E02002024',
        '2AQ' => 'E02002024',
        '2AR' => 'E02002031',
        '2AS' => 'E02002031',
        '2AT' => 'E02002031',
        '2AU' => 'E02002031',
        '2AW' => 'E02002024',
        '2AX' => 'E02002031',
        '2AY' => 'E02002031',
        '2AZ' => 'E02002031',
        '2BA' => 'E02002031',
        '2BB' => 'E02002024',
        '2BD' => 'E02002021',
        '2BE' => 'E02002024',
        '2BF' => 'E02002024',
        '2BG' => 'E02002024',
        '2BH' => 'E02002026',
        '2BJ' => 'E02002026',
        '2BL' => 'E02002026',
        '2BN' => 'E02002026',
        '2BP' => 'E02002026',
        '2BQ' => 'E02002024',
        '2BS' => 'E02002026',
        '2BT' => 'E02002026',
        '2BU' => 'E02002026',
        '2BW' => 'E02002026',
        '2BX' => 'E02002026',
        '2BY' => 'E02002026',
        '2BZ' => 'E02002026',
        '2DA' => 'E02002024',
        '2DB' => 'E02002024',
        '2DD' => 'E02002024',
        '2DE' => 'E02002024',
        '2DF' => 'E02002024',
        '2DG' => 'E02002024',
        '2DH' => 'E02002024',
        '2DJ' => 'E02002024',
        '2DL' => 'E02002024',
        '2DN' => 'E02002024',
        '2DP' => 'E02002024',
        '2DQ' => 'E02002024',
        '2DR' => 'E02002024',
        '2DS' => 'E02002024',
        '2DT' => 'E02002024',
        '2DU' => 'E02002024',
        '2DW' => 'E02002024',
        '2DX' => 'E02002024',
        '2DY' => 'E02002024',
        '2DZ' => 'E02002024',
        '2EA' => 'E02002024',
        '2EB' => 'E02002024',
        '2ED' => 'E02002024',
        '2EE' => 'E02002024',
        '2EH' => 'E02002024',
        '2EJ' => 'E02002024',
        '2EL' => 'E02002024',
        '2EN' => 'E02002024',
        '2EP' => 'E02002024',
        '2EQ' => 'E02002021',
        '2ER' => 'E02002024',
        '2ES' => 'E02002024',
        '2ET' => 'E02002024',
        '2EU' => 'E02002024',
        '2EW' => 'E02002024',
        '2EX' => 'E02002024',
        '2EY' => 'E02002024',
        '2EZ' => 'E02002024',
        '2FB' => 'E02002024',
        '2FD' => 'E02002024',
        '2FE' => 'E02002024',
        '2FQ' => 'E02002024',
        '2GA' => 'E02002021',
        '2GB' => 'E02002021',
        '2GD' => 'E02002021',
        '2GE' => 'E02002021',
        '2GF' => 'E02002026',
        '2GG' => 'E02002026',
        '2GH' => 'E02002026',
        '2GJ' => 'E02002026',
        '2GL' => 'E02002021',
        '2GN' => 'E02002026',
        '2GP' => 'E02002021',
        '2GQ' => 'E02002026',
        '2GR' => 'E02002021',
        '2GS' => 'E02002021',
        '2GT' => 'E02002024',
        '2GW' => 'E02002026',
        '2GX' => 'E02002026',
        '2GY' => 'E02002021',
        '2GZ' => 'E02002024',
        '2HA' => 'E02002024',
        '2HB' => 'E02002024',
        '2HD' => 'E02002024',
        '2HE' => 'E02002024',
        '2HF' => 'E02002024',
        '2HG' => 'E02002024',
        '2HH' => 'E02002027',
        '2HL' => 'E02002026',
        '2HN' => 'E02002024',
        '2HP' => 'E02002024',
        '2HQ' => 'E02002024',
        '2HR' => 'E02002024',
        '2HS' => 'E02002024',
        '2HT' => 'E02002024',
        '2HU' => 'E02002024',
        '2HW' => 'E02002024',
        '2HX' => 'E02002021',
        '2HY' => 'E02002026',
        '2HZ' => 'E02002021',
        '2JA' => 'E02002024',
        '2JB' => 'E02002024',
        '2JD' => 'E02002026',
        '2JE' => 'E02002024',
        '2JF' => 'E02002024',
        '2JG' => 'E02002024',
        '2JH' => 'E02002024',
        '2JJ' => 'E02002024',
        '2JL' => 'E02002024',
        '2JN' => 'E02002024',
        '2JP' => 'E02002024',
        '2JQ' => 'E02002024',
        '2JR' => 'E02002024',
        '2JS' => 'E02002024',
        '2JT' => 'E02002026',
        '2JU' => 'E02002026',
        '2JW' => 'E02002024',
        '2JX' => 'E02002026',
        '2JY' => 'E02002026',
        '2JZ' => 'E02002026',
        '2LA' => 'E02002024',
        '2LB' => 'E02002021',
        '2LD' => 'E02002026',
        '2LE' => 'E02002026',
        '2LF' => 'E02002026',
        '2LG' => 'E02002026',
        '2LH' => 'E02002026',
        '2LJ' => 'E02002026',
        '2LL' => 'E02002026',
        '2LN' => 'E02002026',
        '2LP' => 'E02002026',
        '2LQ' => 'E02002026',
        '2LR' => 'E02002026',
        '2LS' => 'E02002026',
        '2LT' => 'E02002026',
        '2LU' => 'E02002026',
        '2LW' => 'E02002026',
        '2LX' => 'E02002026',
        '2LY' => 'E02002026',
        '2LZ' => 'E02002026',
        '2NA' => 'E02002026',
        '2NB' => 'E02002026',
        '2ND' => 'E02002026',
        '2NE' => 'E02002026',
        '2NF' => 'E02002026',
        '2NG' => 'E02002027',
        '2NH' => 'E02002026',
        '2NJ' => 'E02002026',
        '2NL' => 'E02002026',
        '2NN' => 'E02002026',
        '2NP' => 'E02002026',
        '2NQ' => 'E02002026',
        '2NR' => 'E02002026',
        '2NS' => 'E02002026',
        '2NT' => 'E02002026',
        '2NU' => 'E02002026',
        '2NW' => 'E02002026',
        '2NX' => 'E02002027',
        '2NY' => 'E02002027',
        '2NZ' => 'E02002027',
        '2PA' => 'E02002026',
        '2PB' => 'E02002026',
        '2PD' => 'E02002027',
        '2PE' => 'E02002027',
        '2PF' => 'E02002024',
        '2PG' => 'E02002026',
        '2PH' => 'E02002024',
        '2PJ' => 'E02002024',
        '2PL' => 'E02002026',
        '2PN' => 'E02002027',
        '2PP' => 'E02002026',
        '2PQ' => 'E02002026',
        '2PR' => 'E02002026',
        '2PS' => 'E02002027',
        '2PT' => 'E02002027',
        '2PU' => 'E02002027',
        '2PW' => 'E02002027',
        '2PX' => 'E02002026',
        '2PY' => 'E02002027',
        '2PZ' => 'E02002026',
        '2QA' => 'E02002026',
        '2QB' => 'E02002027',
        '2QD' => 'E02002026',
        '2QE' => 'E02002030',
        '2QF' => 'E02002030',
        '2QG' => 'E02002030',
        '2QH' => 'E02002027',
        '2QJ' => 'E02002026',
        '2QL' => 'E02002026',
        '2QN' => 'E02002026',
        '2QP' => 'E02002026',
        '2QQ' => 'E02002030',
        '2QR' => 'E02002026',
        '2QS' => 'E02002026',
        '2QT' => 'E02002026',
        '2QU' => 'E02002026',
        '2QW' => 'E02002026',
        '2QX' => 'E02002026',
        '2QY' => 'E02002026',
        '2QZ' => 'E02002026',
        '2RA' => 'E02002026',
        '2RB' => 'E02002026',
        '2RD' => 'E02002027',
        '2RE' => 'E02002027',
        '2RF' => 'E02002027',
        '2RG' => 'E02002021',
        '2RH' => 'E02002021',
        '2RJ' => 'E02002027',
        '2RL' => 'E02002030',
        '2RN' => 'E02002022',
        '2RP' => 'E02002021',
        '2RQ' => 'E02002021',
        '2RR' => 'E02002021',
        '2RS' => 'E02002022',
        '2RT' => 'E02002027',
        '2RU' => 'E02002027',
        '2RW' => 'E02002022',
        '2RX' => 'E02002027',
        '2RY' => 'E02002026',
        '2RZ' => 'E02002026',
        '2SA' => 'E02002024',
        '2SB' => 'E02002021',
        '2SD' => 'E02002021',
        '2SE' => 'E02002021',
        '2SF' => 'E02002021',
        '2SG' => 'E02002021',
        '2SH' => 'E02002021',
        '2SJ' => 'E02002021',
        '2SL' => 'E02002030',
        '2SN' => 'E02002026',
        '2SP' => 'E02002026',
        '2SQ' => 'E02002021',
        '2SR' => 'E02002026',
        '2SS' => 'E02002026',
        '2ST' => 'E02002026',
        '2SU' => 'E02002026',
        '2SW' => 'E02002026',
        '2SX' => 'E02002021',
        '2SY' => 'E02002021',
        '2SZ' => 'E02002027',
        '2TA' => 'E02002026',
        '2TB' => 'E02002021',
        '2TD' => 'E02002021',
        '2TE' => 'E02002021',
        '2TF' => 'E02002021',
        '2TG' => 'E02002021',
        '2TH' => 'E02002021',
        '2TJ' => 'E02002021',
        '2TL' => 'E02002021',
        '2TN' => 'E02002021',
        '2TP' => 'E02002021',
        '2TQ' => 'E02002021',
        '2TR' => 'E02002021',
        '2TS' => 'E02002021',
        '2TT' => 'E02002021',
        '2TU' => 'E02002030',
        '2TW' => 'E02002026',
        '2TX' => 'E02002026',
        '2TY' => 'E02002021',
        '2TZ' => 'E02002021',
        '2UA' => 'E02002022',
        '2UB' => 'E02002021',
        '2UD' => 'E02002021',
        '2UE' => 'E02002021',
        '2UF' => 'E02002021',
        '2UG' => 'E02002021',
        '2UH' => 'E02002021',
        '2UJ' => 'E02002021',
        '2UL' => 'E02002021',
        '2UN' => 'E02002021',
        '2UP' => 'E02002021',
        '2UQ' => 'E02002021',
        '2UR' => 'E02002021',
        '2UT' => 'E02002021',
        '2UU' => 'E02002021',
        '2UW' => 'E02002021',
        '2UX' => 'E02002021',
        '2UY' => 'E02002021',
        '2UZ' => 'E02002021',
        '2WA' => 'E02002021',
        '2WB' => 'E02002021',
        '2WD' => 'E02002021',
        '2WE' => 'E02002022',
        '2WF' => 'E02002022',
        '2WL' => 'E02002021',
        '2WP' => 'E02002021',
        '2WQ' => 'E02002021',
        '2WR' => 'E02002021',
        '2WS' => 'E02002021',
        '2WT' => 'E02002021',
        '2WU' => 'E02002021',
        '2WW' => 'E02002021',
        '2WX' => 'E02002021',
        '2WY' => 'E02002021',
        '2WZ' => 'E02002021',
        '2XA' => 'E02002021',
        '2XB' => 'E02002026',
        '2XD' => 'E02002026',
        '2XE' => 'E02002026',
        '2XF' => 'E02002021',
        '2XG' => 'E02002026',
        '2XH' => 'E02002026',
        '2XJ' => 'E02002026',
        '2XL' => 'E02002026',
        '2XN' => 'E02002026',
        '2XP' => 'E02002026',
        '2XQ' => 'E02002026',
        '2XR' => 'E02002026',
        '2XS' => 'E02002026',
        '2XT' => 'E02002026',
        '2XU' => 'E02002026',
        '2XW' => 'E02002026',
        '2XX' => 'E02002026',
        '2XY' => 'E02002026',
        '2XZ' => 'E02002026',
        '2YA' => 'E02002026',
        '2YB' => 'E02002026',
        '2YD' => 'E02002026',
        '2YE' => 'E02002026',
        '2YF' => 'E02002026',
        '2YG' => 'E02002026',
        '2YH' => 'E02002026',
        '2YJ' => 'E02002026',
        '2YL' => 'E02002026',
        '2YN' => 'E02002026',
        '2YP' => 'E02002021',
        '2YQ' => 'E02002026',
        '2YR' => 'E02002021',
        '2YS' => 'E02002021',
        '2YT' => 'E02002021',
        '2YU' => 'E02002021',
        '2YW' => 'E02002026',
        '2YX' => 'E02002021',
        '2YY' => 'E02002026',
        '2YZ' => 'E02002021',
        '2ZA' => 'E02002021',
        '2ZR' => 'E02002021',
        '3AA' => 'E02002021',
        '3AB' => 'E02002021',
        '3AD' => 'E02002021',
        '3AE' => 'E02002021',
        '3AF' => 'E02002021',
        '3AG' => 'E02002021',
        '3AH' => 'E02002021',
        '3AJ' => 'E02002021',
        '3AL' => 'E02002021',
        '3AN' => 'E02002021',
        '3AP' => 'E02002021',
        '3AQ' => 'E02002021',
        '3AS' => 'E02002021',
        '3AT' => 'E02002021',
        '3AU' => 'E02002021',
        '3AW' => 'E02002021',
        '3AY' => 'E02002021',
        '3AZ' => 'E02002022',
        '3BA' => 'E02002021',
        '3BB' => 'E02002021',
        '3BD' => 'E02002021',
        '3BG' => 'E02002021',
        '3BH' => 'E02002021',
        '3BJ' => 'E02002021',
        '3BL' => 'E02002021',
        '3BP' => 'E02002021',
        '3BS' => 'E02002021',
        '3BT' => 'E02002026',
        '3BU' => 'E02002021',
        '3BX' => 'E02002021',
        '3BZ' => 'E02002021',
        '3DA' => 'E02002021',
        '3DB' => 'E02002021',
        '3DD' => 'E02002021',
        '3DE' => 'E02002026',
        '3DF' => 'E02002026',
        '3DG' => 'E02002026',
        '3DH' => 'E02002021',
        '3DJ' => 'E02002021',
        '3DL' => 'E02002021',
        '3DN' => 'E02002021',
        '3DP' => 'E02002026',
        '3DQ' => 'E02002026',
        '3DR' => 'E02002026',
        '3DS' => 'E02002021',
        '3DT' => 'E02002021',
        '3DW' => 'E02002021',
        '3DX' => 'E02002021',
        '3DY' => 'E02002021',
        '3DZ' => 'E02002021',
        '3EA' => 'E02002021',
        '3EB' => 'E02002021',
        '3ED' => 'E02002021',
        '3EE' => 'E02002021',
        '3EF' => 'E02002021',
        '3EG' => 'E02002021',
        '3EH' => 'E02002021',
        '3EJ' => 'E02002021',
        '3EL' => 'E02002021',
        '3EN' => 'E02002021',
        '3EP' => 'E02002021',
        '3EQ' => 'E02002021',
        '3ER' => 'E02002026',
        '3ES' => 'E02002026',
        '3ET' => 'E02002021',
        '3EU' => 'E02002021',
        '3EW' => 'E02002026',
        '3EX' => 'E02002021',
        '3EY' => 'E02002021',
        '3FB' => 'E02002022',
        '3FD' => 'E02002022',
        '3FE' => 'E02002027',
        '3FF' => 'E02002027',
        '3FG' => 'E02002027',
        '3FH' => 'E02002027',
        '3FJ' => 'E02002027',
        '3FL' => 'E02002027',
        '3FN' => 'E02002027',
        '3FP' => 'E02002027',
        '3FQ' => 'E02002027',
        '3FR' => 'E02002027',
        '3FW' => 'E02002027',
        '3GN' => 'E02002021',
        '3GP' => 'E02002021',
        '3GR' => 'E02002021',
        '3GS' => 'E02002021',
        '3GT' => 'E02002021',
        '3GU' => 'E02002022',
        '3GW' => 'E02002021',
        '3GX' => 'E02002021',
        '3GY' => 'E02002021',
        '3GZ' => 'E02002021',
        '3HA' => 'E02002026',
        '3HB' => 'E02002026',
        '3HD' => 'E02002021',
        '3HE' => 'E02002026',
        '3HF' => 'E02002021',
        '3HG' => 'E02002026',
        '3HH' => 'E02002021',
        '3HJ' => 'E02002021',
        '3HL' => 'E02002021',
        '3HN' => 'E02002021',
        '3HP' => 'E02002021',
        '3HQ' => 'E02002027',
        '3HR' => 'E02002021',
        '3HS' => 'E02002021',
        '3HT' => 'E02002021',
        '3HU' => 'E02002016',
        '3HW' => 'E02002027',
        '3HX' => 'E02002016',
        '3HY' => 'E02002016',
        '3HZ' => 'E02002027',
        '3JA' => 'E02002016',
        '3JB' => 'E02002021',
        '3JD' => 'E02002027',
        '3JE' => 'E02002027',
        '3JF' => 'E02002026',
        '3JG' => 'E02002026',
        '3JH' => 'E02002027',
        '3JJ' => 'E02002027',
        '3JL' => 'E02002022',
        '3JN' => 'E02002022',
        '3JP' => 'E02002022',
        '3JQ' => 'E02002026',
        '3JR' => 'E02002027',
        '3JS' => 'E02002021',
        '3JT' => 'E02002022',
        '3JU' => 'E02002022',
        '3JW' => 'E02002021',
        '3JX' => 'E02002027',
        '3JY' => 'E02002022',
        '3JZ' => 'E02002022',
        '3LA' => 'E02002022',
        '3LB' => 'E02002022',
        '3LD' => 'E02002027',
        '3LE' => 'E02002027',
        '3LF' => 'E02002027',
        '3LG' => 'E02002022',
        '3LH' => 'E02002022',
        '3LJ' => 'E02002027',
        '3LL' => 'E02002027',
        '3LN' => 'E02002022',
        '3LP' => 'E02002022',
        '3LQ' => 'E02002022',
        '3LR' => 'E02002021',
        '3LS' => 'E02002022',
        '3LT' => 'E02002022',
        '3LU' => 'E02002022',
        '3LW' => 'E02002022',
        '3LX' => 'E02002021',
        '3LY' => 'E02002022',
        '3LZ' => 'E02002022',
        '3NA' => 'E02002022',
        '3NB' => 'E02002022',
        '3ND' => 'E02002022',
        '3NE' => 'E02002022',
        '3NF' => 'E02002027',
        '3NG' => 'E02002022',
        '3NH' => 'E02002022',
        '3NJ' => 'E02002022',
        '3NL' => 'E02002022',
        '3NN' => 'E02002022',
        '3NP' => 'E02002022',
        '3NQ' => 'E02002022',
        '3NR' => 'E02002022',
        '3NS' => 'E02002027',
        '3NT' => 'E02002027',
        '3NU' => 'E02002027',
        '3NW' => 'E02002027',
        '3NX' => 'E02002027',
        '3NY' => 'E02002027',
        '3NZ' => 'E02002027',
        '3PA' => 'E02002022',
        '3PB' => 'E02002022',
        '3PD' => 'E02002022',
        '3PE' => 'E02002022',
        '3PF' => 'E02002022',
        '3PG' => 'E02002022',
        '3PH' => 'E02002022',
        '3PJ' => 'E02002022',
        '3PL' => 'E02002022',
        '3PN' => 'E02002022',
        '3PP' => 'E02002027',
        '3PQ' => 'E02002027',
        '3PR' => 'E02002027',
        '3PS' => 'E02002021',
        '3PT' => 'E02002021',
        '3PU' => 'E02002027',
        '3PW' => 'E02002027',
        '3PX' => 'E02002021',
        '3PY' => 'E02002021',
        '3PZ' => 'E02002027',
        '3QA' => 'E02002021',
        '3QB' => 'E02002022',
        '3QD' => 'E02002021',
        '3QE' => 'E02002021',
        '3QF' => 'E02002021',
        '3QG' => 'E02002021',
        '3QH' => 'E02002021',
        '3QJ' => 'E02002022',
        '3QL' => 'E02002022',
        '3QN' => 'E02002022',
        '3QP' => 'E02002021',
        '3QQ' => 'E02002021',
        '3QR' => 'E02002022',
        '3QS' => 'E02002027',
        '3QT' => 'E02002022',
        '3QU' => 'E02002022',
        '3QW' => 'E02002027',
        '3QX' => 'E02002027',
        '3QY' => 'E02002027',
        '3QZ' => 'E02002027',
        '3RA' => 'E02002022',
        '3RB' => 'E02002022',
        '3RD' => 'E02002022',
        '3RE' => 'E02002022',
        '3RF' => 'E02002027',
        '3RG' => 'E02002022',
        '3RH' => 'E02002022',
        '3RJ' => 'E02002026',
        '3RL' => 'E02002027',
        '3RN' => 'E02002027',
        '3RP' => 'E02002027',
        '3RQ' => 'E02002027',
        '3RR' => 'E02002022',
        '3RS' => 'E02002022',
        '3RT' => 'E02002022',
        '3RU' => 'E02002022',
        '3RW' => 'E02002027',
        '3RX' => 'E02002022',
        '3RY' => 'E02002022',
        '3RZ' => 'E02002027',
        '3SA' => 'E02002022',
        '3SB' => 'E02002022',
        '3SD' => 'E02002027',
        '3SE' => 'E02002027',
        '3SF' => 'E02002027',
        '3SG' => 'E02002027',
        '3SH' => 'E02002021',
        '3SJ' => 'E02002021',
        '3SL' => 'E02002022',
        '3SN' => 'E02002021',
        '3SP' => 'E02002021',
        '3SQ' => 'E02002026',
        '3SR' => 'E02002021',
        '3SS' => 'E02002022',
        '3ST' => 'E02002022',
        '3SU' => 'E02002021',
        '3SW' => 'E02002021',
        '3SX' => 'E02002022',
        '3SY' => 'E02002021',
        '3SZ' => 'E02002022',
        '3TA' => 'E02002022',
        '3TB' => 'E02002022',
        '3TD' => 'E02002022',
        '3TE' => 'E02002022',
        '3TF' => 'E02002022',
        '3TG' => 'E02002022',
        '3TH' => 'E02002022',
        '3TJ' => 'E02002022',
        '3TL' => 'E02002022',
        '3TN' => 'E02002022',
        '3TP' => 'E02002027',
        '3TQ' => 'E02002022',
        '3TR' => 'E02002022',
        '3TS' => 'E02002022',
        '3TT' => 'E02002027',
        '3TU' => 'E02002022',
        '3TW' => 'E02002016',
        '3TX' => 'E02002022',
        '3TY' => 'E02002022',
        '3TZ' => 'E02002027',
        '3UA' => 'E02002021',
        '3UB' => 'E02002022',
        '3UD' => 'E02002027',
        '3UE' => 'E02002027',
        '3UF' => 'E02002027',
        '3UG' => 'E02002022',
        '3UH' => 'E02002021',
        '3UJ' => 'E02002021',
        '3UL' => 'E02002021',
        '3UN' => 'E02002021',
        '3UP' => 'E02002020',
        '3UQ' => 'E02002022',
        '3UR' => 'E02002021',
        '3US' => 'E02002021',
        '3UT' => 'E02002021',
        '3UU' => 'E02002021',
        '3UW' => 'E02002021',
        '3UX' => 'E02002021',
        '3UY' => 'E02002021',
        '3UZ' => 'E02002021',
        '3WA' => 'E02002021',
        '3WB' => 'E02002021',
        '3WD' => 'E02002021',
        '3WE' => 'E02002021',
        '3WF' => 'E02002021',
        '3WG' => 'E02002022',
        '3WH' => 'E02002021',
        '3WJ' => 'E02002021',
        '3WL' => 'E02002021',
        '3WN' => 'E02002021',
        '3WP' => 'E02002021',
        '3WQ' => 'E02002021',
        '3WR' => 'E02002021',
        '3WS' => 'E02002021',
        '3WT' => 'E02002021',
        '3WU' => 'E02002021',
        '3WW' => 'E02002021',
        '3WX' => 'E02002022',
        '3WY' => 'E02002021',
        '3WZ' => 'E02002021',
        '3XA' => 'E02002021',
        '3XB' => 'E02002021',
        '3XD' => 'E02002021',
        '3XE' => 'E02002021',
        '3XF' => 'E02002021',
        '3XG' => 'E02002021',
        '3XH' => 'E02002021',
        '3XJ' => 'E02002027',
        '3XL' => 'E02002027',
        '3XN' => 'E02002022',
        '3XP' => 'E02002021',
        '3XQ' => 'E02002016',
        '3XR' => 'E02002021',
        '3XS' => 'E02002016',
        '3XT' => 'E02002021',
        '3XU' => 'E02002021',
        '3XW' => 'E02002021',
        '3XX' => 'E02002021',
        '3XY' => 'E02002021',
        '3XZ' => 'E02002021',
        '3YA' => 'E02002027',
        '3YB' => 'E02002016',
        '3YD' => 'E02002021',
        '3YE' => 'E02002027',
        '3YF' => 'E02002027',
        '3YG' => 'E02002016',
        '3YH' => 'E02002016',
        '3YJ' => 'E02002016',
        '3YL' => 'E02002016',
        '3YN' => 'E02002016',
        '3YP' => 'E02002016',
        '3YQ' => 'E02002016',
        '3YR' => 'E02002016',
        '3YS' => 'E02002016',
        '3YT' => 'E02002022',
        '3YU' => 'E02002027',
        '3YW' => 'E02002016',
        '3YX' => 'E02002027',
        '3YY' => 'E02002027',
        '3YZ' => 'E02002027',
        '3ZA' => 'E02002021',
        '3ZB' => 'E02002021',
        '3ZD' => 'E02002021',
        '3ZE' => 'E02002021',
        '3ZF' => 'E02002021',
        '3ZG' => 'E02002021',
        '3ZH' => 'E02002027',
        '3ZJ' => 'E02002021',
        '3ZL' => 'E02002021',
        '3ZN' => 'E02002021',
        '3ZQ' => 'E02002021',
        '3ZR' => 'E02002022',
        '3ZS' => 'E02002021',
        '3ZT' => 'E02002021',
        '3ZU' => 'E02002021',
        '3ZW' => 'E02002021',
        '3ZX' => 'E02002021',
        '3ZY' => 'E02002022',
        '4AA' => 'E02002016',
        '4AB' => 'E02002016',
        '4AD' => 'E02002016',
        '4AE' => 'E02002016',
        '4AG' => 'E02002016',
        '4AH' => 'E02002016',
        '4AJ' => 'E02002016',
        '4AL' => 'E02002016',
        '4AN' => 'E02002016',
        '4AT' => 'E02002016',
        '4AU' => 'E02002015',
        '4AW' => 'E02002016',
        '4AX' => 'E02002016',
        '4AZ' => 'E02002016',
        '4BS' => 'E02002016',
        '4BT' => 'E02002016',
        '4BU' => 'E02002016',
        '4BX' => 'E02002016',
        '4BY' => 'E02002016',
        '4DA' => 'E02002016',
        '4DB' => 'E02002016',
        '4DD' => 'E02002016',
        '4DE' => 'E02002016',
        '4DF' => 'E02002016',
        '4DG' => 'E02002016',
        '4DH' => 'E02002016',
        '4DJ' => 'E02002016',
        '4DL' => 'E02002016',
        '4DN' => 'E02002016',
        '4DP' => 'E02002016',
        '4DQ' => 'E02002016',
        '4DR' => 'E02002016',
        '4DS' => 'E02002016',
        '4DW' => 'E02002015',
        '4DZ' => 'E02002016',
        '4EA' => 'E02002015',
        '4EB' => 'E02002015',
        '4ED' => 'E02002015',
        '4EE' => 'E02002016',
        '4EF' => 'E02002016',
        '4EG' => 'E02002012',
        '4EH' => 'E02002016',
        '4EJ' => 'E02002016',
        '4EL' => 'E02002016',
        '4EQ' => 'E02002012',
        '4EX' => 'E02002012',
        '4EY' => 'E02002012',
        '4EZ' => 'E02002012',
        '4HA' => 'E02002012',
        '4HB' => 'E02002012',
        '4HD' => 'E02002016',
        '4HE' => 'E02002016',
        '4HG' => 'E02002012',
        '4HH' => 'E02002012',
        '4HJ' => 'E02002012',
        '4HL' => 'E02002012',
        '4HN' => 'E02002012',
        '4HP' => 'E02002012',
        '4HQ' => 'E02002012',
        '4HR' => 'E02002012',
        '4HS' => 'E02002012',
        '4HT' => 'E02002012',
        '4HU' => 'E02002012',
        '4HW' => 'E02002012',
        '4HX' => 'E02002012',
        '4HY' => 'E02002012',
        '4HZ' => 'E02002012',
        '4JA' => 'E02002012',
        '4JB' => 'E02002012',
        '4JD' => 'E02002012',
        '4JE' => 'E02002012',
        '4JF' => 'E02002012',
        '4JG' => 'E02002016',
        '4JH' => 'E02002012',
        '4JJ' => 'E02002012',
        '4JL' => 'E02002021',
        '4JQ' => 'E02002016',
        '4LA' => 'E02002016',
        '4LB' => 'E02002016',
        '4LD' => 'E02002016',
        '4LE' => 'E02002016',
        '4LG' => 'E02002016',
        '4LH' => 'E02002015',
        '4LJ' => 'E02002015',
        '4LL' => 'E02002015',
        '4LN' => 'E02002016',
        '4LP' => 'E02002016',
        '4LQ' => 'E02002016',
        '4LR' => 'E02002016',
        '4LS' => 'E02002016',
        '4LT' => 'E02002016',
        '4LU' => 'E02002016',
        '4LW' => 'E02002016',
        '4LX' => 'E02002016',
        '4LY' => 'E02002016',
        '4LZ' => 'E02002016',
        '4NA' => 'E02002015',
        '4NB' => 'E02002015',
        '4ND' => 'E02002016',
        '4NE' => 'E02002016',
        '4NF' => 'E02002016',
        '4NG' => 'E02002016',
        '4NH' => 'E02002016',
        '4NQ' => 'E02002015',
        '4PA' => 'E02002016',
        '4PB' => 'E02002016',
        '4PD' => 'E02002016',
        '4PE' => 'E02002016',
        '4PF' => 'E02002016',
        '4PG' => 'E02002016',
        '4PH' => 'E02002016',
        '4PJ' => 'E02002016',
        '4PL' => 'E02002016',
        '4PQ' => 'E02002016',
        '4PT' => 'E02002015',
        '4PU' => 'E02002015',
        '4PX' => 'E02002015',
        '4PY' => 'E02002015',
        '4PZ' => 'E02002015',
        '4QA' => 'E02002016',
        '4QB' => 'E02002015',
        '4QD' => 'E02002015',
        '4QE' => 'E02002015',
        '4QG' => 'E02002015',
        '4QH' => 'E02002015',
        '4QJ' => 'E02002015',
        '4QL' => 'E02002015',
        '4QN' => 'E02002015',
        '4QP' => 'E02002015',
        '4QQ' => 'E02002015',
        '4QR' => 'E02002015',
        '4QS' => 'E02002015',
        '4QT' => 'E02002015',
        '4QU' => 'E02002015',
        '4QX' => 'E02002016',
        '4QY' => 'E02002015',
        '4QZ' => 'E02002016',
        '4RA' => 'E02002015',
        '4RB' => 'E02002015',
        '4RD' => 'E02002015',
        '4RE' => 'E02002015',
        '4RF' => 'E02002016',
        '4RG' => 'E02002015',
        '4RH' => 'E02002015',
        '4RJ' => 'E02002015',
        '4RL' => 'E02002015',
        '4RN' => 'E02002015',
        '4RP' => 'E02002015',
        '4RR' => 'E02002015',
        '4RS' => 'E02002015',
        '4RT' => 'E02002015',
        '4RU' => 'E02002015',
        '4RW' => 'E02002015',
        '4RX' => 'E02002015',
        '4RY' => 'E02002015',
        '4SX' => 'E02002015',
        '4TA' => 'E02002015',
        '4TB' => 'E02002015',
        '4TD' => 'E02002016',
        '4TE' => 'E02002015',
        '4TF' => 'E02002015',
        '4TG' => 'E02002015',
        '4TH' => 'E02002015',
        '4TJ' => 'E02002015',
        '4TL' => 'E02002015',
        '4TN' => 'E02002015',
        '4TP' => 'E02002008',
        '4TQ' => 'E02002015',
        '4TR' => 'E02002008',
        '4TS' => 'E02002007',
        '4TT' => 'E02002007',
        '4TU' => 'E02002007',
        '4TW' => 'E02002015',
        '4TX' => 'E02002008',
        '4TY' => 'E02002008',
        '4TZ' => 'E02002015',
        '4UA' => 'E02002007',
        '4UB' => 'E02002015',
        '4UD' => 'E02002015',
        '4UE' => 'E02002015',
        '4UG' => 'E02002015',
        '4UH' => 'E02002007',
        '4UJ' => 'E02002007',
        '4UL' => 'E02002007',
        '4UN' => 'E02002007',
        '4UP' => 'E02002007',
        '4UQ' => 'E02002007',
        '4WW' => 'E02002021',
        '4WX' => 'E02002021',
        '4WY' => 'E02002021',
        '4WZ' => 'E02002021',
        '4YH' => 'E02002021',
        '4YJ' => 'E02002021',
        '4YL' => 'E02002016',
        '4YN' => 'E02002021',
        '4YP' => 'E02002021',
        '4YQ' => 'E02002021',
        '4YR' => 'E02002021',
        '4YS' => 'E02002021',
        '4YT' => 'E02002016',
        '4YU' => 'E02002016',
        '4YW' => 'E02002016',
        '4YX' => 'E02002021',
        '4YY' => 'E02002007',
        '4YZ' => 'E02002007',
        '9AF' => 'E02002021',
        '9AJ' => 'E02002021',
        '9AL' => 'E02002021',
        '9AN' => 'E02002021',
        '9AR' => 'E02002021',
        '9AS' => 'E02002021',
        '9AT' => 'E02002021',
        '9AW' => 'E02002021',
        '9AY' => 'E02002021',
        '9AZ' => 'E02002021',
        '9BA' => 'E02002021',
        '9BB' => 'E02002021',
        '9BD' => 'E02002021',
        '9BE' => 'E02002021',
        '9BF' => 'E02002021',
        '9BG' => 'E02002021',
        '9BH' => 'E02002021',
        '9BL' => 'E02002021',
        '9BN' => 'E02002021',
        '9BP' => 'E02002021',
        '9BQ' => 'E02002021',
        '9BR' => 'E02002021',
        '9BS' => 'E02002021',
        '9BT' => 'E02002021',
        '9BU' => 'E02002021',
        '9BW' => 'E02002021',
        '9DX' => 'E02002021',
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
