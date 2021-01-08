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
final class WF3
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02002437',
        '1AB' => 'E02002437',
        '1AD' => 'E02002435',
        '1AE' => 'E02002437',
        '1AF' => 'E02002437',
        '1AG' => 'E02002437',
        '1AH' => 'E02002435',
        '1AJ' => 'E02002437',
        '1AL' => 'E02002437',
        '1AN' => 'E02002437',
        '1AP' => 'E02002437',
        '1AQ' => 'E02002435',
        '1AR' => 'E02002435',
        '1AS' => 'E02002435',
        '1AT' => 'E02002437',
        '1AU' => 'E02002435',
        '1AW' => 'E02002437',
        '1AX' => 'E02002435',
        '1AY' => 'E02002435',
        '1AZ' => 'E02002435',
        '1BA' => 'E02002437',
        '1BB' => 'E02002437',
        '1BD' => 'E02002437',
        '1BE' => 'E02002437',
        '1BF' => 'E02002435',
        '1BG' => 'E02002437',
        '1BH' => 'E02002435',
        '1BJ' => 'E02002435',
        '1BL' => 'E02002435',
        '1BN' => 'E02002435',
        '1BP' => 'E02002435',
        '1BQ' => 'E02002435',
        '1BT' => 'E02002437',
        '1BU' => 'E02002431',
        '1BW' => 'E02002435',
        '1BZ' => 'E02002437',
        '1DA' => 'E02002435',
        '1DB' => 'E02002435',
        '1DD' => 'E02002435',
        '1DE' => 'E02002437',
        '1DF' => 'E02002437',
        '1DG' => 'E02002437',
        '1DH' => 'E02002435',
        '1DJ' => 'E02002435',
        '1DL' => 'E02002437',
        '1DN' => 'E02002437',
        '1DP' => 'E02002277',
        '1DQ' => 'E02002437',
        '1DR' => 'E02002431',
        '1DS' => 'E02002437',
        '1DT' => 'E02002437',
        '1DU' => 'E02002437',
        '1DW' => 'E02002437',
        '1DX' => 'E02002437',
        '1DY' => 'E02002437',
        '1DZ' => 'E02002437',
        '1EA' => 'E02002437',
        '1EB' => 'E02002437',
        '1ED' => 'E02002437',
        '1EE' => 'E02002437',
        '1EF' => 'E02002437',
        '1EG' => 'E02002437',
        '1EH' => 'E02002437',
        '1EJ' => 'E02002437',
        '1EL' => 'E02002431',
        '1EN' => 'E02002437',
        '1EP' => 'E02002437',
        '1EQ' => 'E02002437',
        '1ER' => 'E02002437',
        '1ES' => 'E02002437',
        '1ET' => 'E02002437',
        '1EU' => 'E02002437',
        '1EW' => 'E02002437',
        '1EX' => 'E02002437',
        '1EY' => 'E02002437',
        '1EZ' => 'E02002437',
        '1FA' => 'E02002436',
        '1FB' => 'E02002436',
        '1FE' => 'E02002437',
        '1FF' => 'E02002437',
        '1FG' => 'E02002437',
        '1FH' => 'E02002437',
        '1FJ' => 'E02002437',
        '1FL' => 'E02002437',
        '1FN' => 'E02002435',
        '1FP' => 'E02002437',
        '1GN' => 'E02002435',
        '1HA' => 'E02002437',
        '1HB' => 'E02002437',
        '1HD' => 'E02002437',
        '1HE' => 'E02002437',
        '1HF' => 'E02002437',
        '1HG' => 'E02002437',
        '1HH' => 'E02002435',
        '1HJ' => 'E02002437',
        '1HL' => 'E02002437',
        '1HN' => 'E02002437',
        '1HP' => 'E02002437',
        '1HQ' => 'E02002437',
        '1HR' => 'E02002437',
        '1HS' => 'E02002437',
        '1HT' => 'E02002437',
        '1HU' => 'E02002431',
        '1HW' => 'E02002437',
        '1HX' => 'E02002433',
        '1HY' => 'E02002435',
        '1HZ' => 'E02002435',
        '1JA' => 'E02002435',
        '1JB' => 'E02002435',
        '1JD' => 'E02002435',
        '1JE' => 'E02002435',
        '1JF' => 'E02002435',
        '1JG' => 'E02002435',
        '1JH' => 'E02002435',
        '1JJ' => 'E02002435',
        '1JL' => 'E02002435',
        '1JN' => 'E02002435',
        '1JP' => 'E02002435',
        '1JQ' => 'E02002435',
        '1JR' => 'E02002435',
        '1JS' => 'E02002436',
        '1JT' => 'E02002435',
        '1JU' => 'E02002435',
        '1JW' => 'E02002435',
        '1JX' => 'E02002435',
        '1JY' => 'E02002435',
        '1JZ' => 'E02002435',
        '1LA' => 'E02002435',
        '1LB' => 'E02002454',
        '1LD' => 'E02002435',
        '1LE' => 'E02002435',
        '1LF' => 'E02002435',
        '1LG' => 'E02002435',
        '1LH' => 'E02002435',
        '1LJ' => 'E02002435',
        '1LL' => 'E02002435',
        '1LN' => 'E02002435',
        '1LP' => 'E02002435',
        '1LQ' => 'E02002435',
        '1LR' => 'E02002435',
        '1LS' => 'E02002435',
        '1LT' => 'E02002435',
        '1LU' => 'E02002435',
        '1LW' => 'E02002435',
        '1LX' => 'E02002435',
        '1LY' => 'E02002435',
        '1LZ' => 'E02002435',
        '1NA' => 'E02002435',
        '1NB' => 'E02002435',
        '1ND' => 'E02002435',
        '1NE' => 'E02002435',
        '1NF' => 'E02002437',
        '1NG' => 'E02002437',
        '1NH' => 'E02002437',
        '1NJ' => 'E02002436',
        '1NL' => 'E02002436',
        '1NN' => 'E02002436',
        '1NP' => 'E02002436',
        '1NQ' => 'E02002437',
        '1NR' => 'E02002436',
        '1NS' => 'E02002436',
        '1NT' => 'E02002436',
        '1NU' => 'E02002436',
        '1NW' => 'E02002436',
        '1NX' => 'E02002436',
        '1NY' => 'E02002436',
        '1NZ' => 'E02002436',
        '1PA' => 'E02002436',
        '1PB' => 'E02002436',
        '1PD' => 'E02002436',
        '1PE' => 'E02002436',
        '1PF' => 'E02002436',
        '1PG' => 'E02002436',
        '1PH' => 'E02002436',
        '1PJ' => 'E02002436',
        '1PL' => 'E02002436',
        '1PN' => 'E02002436',
        '1PP' => 'E02002436',
        '1PQ' => 'E02002436',
        '1PR' => 'E02002436',
        '1PS' => 'E02002436',
        '1PT' => 'E02002436',
        '1PU' => 'E02002436',
        '1PW' => 'E02002436',
        '1PX' => 'E02002436',
        '1PY' => 'E02002436',
        '1PZ' => 'E02002436',
        '1QA' => 'E02002437',
        '1QB' => 'E02002436',
        '1QD' => 'E02002436',
        '1QE' => 'E02002437',
        '1QF' => 'E02002436',
        '1QG' => 'E02002436',
        '1QH' => 'E02002436',
        '1QJ' => 'E02002437',
        '1QN' => 'E02002437',
        '1QP' => 'E02002437',
        '1QQ' => 'E02002436',
        '1QR' => 'E02002437',
        '1QS' => 'E02002435',
        '1QT' => 'E02002437',
        '1QU' => 'E02002435',
        '1QW' => 'E02002437',
        '1QX' => 'E02002437',
        '1QY' => 'E02002436',
        '1QZ' => 'E02002437',
        '1RA' => 'E02002437',
        '1RB' => 'E02002437',
        '1RD' => 'E02002437',
        '1RE' => 'E02002437',
        '1RF' => 'E02002436',
        '1RG' => 'E02002437',
        '1RH' => 'E02002437',
        '1RJ' => 'E02002437',
        '1RL' => 'E02002437',
        '1RN' => 'E02002437',
        '1RP' => 'E02002437',
        '1RQ' => 'E02002436',
        '1RR' => 'E02002437',
        '1RS' => 'E02002436',
        '1RT' => 'E02002437',
        '1RU' => 'E02002436',
        '1RW' => 'E02002437',
        '1RX' => 'E02002436',
        '1RY' => 'E02002436',
        '1RZ' => 'E02002436',
        '1SA' => 'E02002436',
        '1SB' => 'E02002436',
        '1SD' => 'E02002436',
        '1SE' => 'E02002436',
        '1SF' => 'E02002454',
        '1SG' => 'E02002436',
        '1SH' => 'E02002431',
        '1SJ' => 'E02002436',
        '1SL' => 'E02002436',
        '1SN' => 'E02002431',
        '1SP' => 'E02002431',
        '1SQ' => 'E02002431',
        '1SR' => 'E02002436',
        '1SS' => 'E02002437',
        '1ST' => 'E02002436',
        '1SU' => 'E02002436',
        '1SW' => 'E02002436',
        '1SX' => 'E02002437',
        '1SY' => 'E02002437',
        '1SZ' => 'E02002437',
        '1TA' => 'E02002437',
        '1TB' => 'E02002437',
        '1TD' => 'E02002437',
        '1TE' => 'E02002437',
        '1TF' => 'E02002437',
        '1TG' => 'E02002437',
        '1TH' => 'E02002437',
        '1TJ' => 'E02002437',
        '1TL' => 'E02002437',
        '1TN' => 'E02002437',
        '1TP' => 'E02002437',
        '1TQ' => 'E02002437',
        '1TR' => 'E02002437',
        '1TS' => 'E02002437',
        '1TT' => 'E02002437',
        '1TU' => 'E02002437',
        '1TW' => 'E02002437',
        '1TX' => 'E02002437',
        '1TY' => 'E02002437',
        '1TZ' => 'E02002436',
        '1UA' => 'E02002437',
        '1UB' => 'E02002437',
        '1UD' => 'E02002437',
        '1UE' => 'E02002437',
        '1UF' => 'E02002437',
        '1UG' => 'E02002437',
        '1UH' => 'E02002437',
        '1UJ' => 'E02002437',
        '1UL' => 'E02002437',
        '1UN' => 'E02002437',
        '1UP' => 'E02002437',
        '1UQ' => 'E02002437',
        '1UR' => 'E02002437',
        '1UT' => 'E02002437',
        '1UU' => 'E02002437',
        '1UW' => 'E02002437',
        '1UX' => 'E02002437',
        '1UY' => 'E02002437',
        '1UZ' => 'E02002437',
        '1WA' => 'E02002435',
        '1WD' => 'E02002437',
        '1WE' => 'E02002431',
        '1WF' => 'E02002437',
        '1WG' => 'E02002437',
        '1WH' => 'E02002437',
        '1WJ' => 'E02002454',
        '1WL' => 'E02002454',
        '1WN' => 'E02002454',
        '1WP' => 'E02002431',
        '1WQ' => 'E02002454',
        '1WR' => 'E02002454',
        '1WS' => 'E02002454',
        '1WT' => 'E02002431',
        '1WU' => 'E02002454',
        '1WW' => 'E02002454',
        '1WX' => 'E02002437',
        '1WY' => 'E02002454',
        '1WZ' => 'E02002454',
        '1XA' => 'E02002437',
        '1XB' => 'E02002437',
        '1XD' => 'E02002454',
        '1XE' => 'E02002454',
        '1XF' => 'E02002437',
        '1XG' => 'E02002437',
        '1XH' => 'E02002454',
        '1XJ' => 'E02002437',
        '1XL' => 'E02002437',
        '1XN' => 'E02002437',
        '1XP' => 'E02002454',
        '1XQ' => 'E02002437',
        '1XR' => 'E02002454',
        '1XS' => 'E02002437',
        '1XT' => 'E02002454',
        '1XU' => 'E02002454',
        '1XW' => 'E02002454',
        '1XX' => 'E02002454',
        '1XY' => 'E02002437',
        '1XZ' => 'E02002437',
        '1YA' => 'E02002454',
        '1YB' => 'E02002454',
        '1YD' => 'E02002437',
        '1YE' => 'E02002454',
        '1YF' => 'E02002454',
        '1YG' => 'E02002437',
        '1YH' => 'E02002437',
        '1YJ' => 'E02002437',
        '1YP' => 'E02002437',
        '1YQ' => 'E02002454',
        '1YR' => 'E02002437',
        '1YS' => 'E02002437',
        '1YT' => 'E02002437',
        '1YU' => 'E02002454',
        '1YX' => 'E02002437',
        '1YZ' => 'E02002454',
        '1ZD' => 'E02002454',
        '1ZY' => 'E02002454',
        '2AA' => 'E02002436',
        '2AB' => 'E02002436',
        '2AD' => 'E02002436',
        '2AE' => 'E02002436',
        '2AF' => 'E02002436',
        '2AG' => 'E02002436',
        '2AH' => 'E02002436',
        '2AJ' => 'E02002436',
        '2AL' => 'E02002436',
        '2AN' => 'E02002436',
        '2AP' => 'E02002436',
        '2AQ' => 'E02002436',
        '2AR' => 'E02002437',
        '2AS' => 'E02002436',
        '2AT' => 'E02002436',
        '2AU' => 'E02002436',
        '2AW' => 'E02002436',
        '2AX' => 'E02002436',
        '2AY' => 'E02002436',
        '2AZ' => 'E02002436',
        '2BA' => 'E02002436',
        '2BB' => 'E02002436',
        '2BD' => 'E02002436',
        '2BE' => 'E02002436',
        '2BG' => 'E02002436',
        '2BH' => 'E02002436',
        '2BJ' => 'E02002436',
        '2BL' => 'E02002436',
        '2BN' => 'E02002436',
        '2BP' => 'E02002436',
        '2BQ' => 'E02002436',
        '2BS' => 'E02002436',
        '2BT' => 'E02002436',
        '2BU' => 'E02002436',
        '2BW' => 'E02002436',
        '2BX' => 'E02002436',
        '2BY' => 'E02002436',
        '2DA' => 'E02002436',
        '2DB' => 'E02002436',
        '2DD' => 'E02002436',
        '2DE' => 'E02002436',
        '2DF' => 'E02002436',
        '2DG' => 'E02002436',
        '2DH' => 'E02002436',
        '2DJ' => 'E02002436',
        '2DL' => 'E02002436',
        '2DN' => 'E02002436',
        '2DP' => 'E02002436',
        '2DQ' => 'E02002436',
        '2DR' => 'E02002436',
        '2DS' => 'E02002436',
        '2DT' => 'E02002436',
        '2DU' => 'E02002436',
        '2DW' => 'E02002436',
        '2DX' => 'E02002436',
        '2DY' => 'E02002436',
        '2DZ' => 'E02002436',
        '2EA' => 'E02002436',
        '2EB' => 'E02002436',
        '2ED' => 'E02002436',
        '2EE' => 'E02002436',
        '2EF' => 'E02002436',
        '2EG' => 'E02002436',
        '2EH' => 'E02002436',
        '2EJ' => 'E02002436',
        '2EL' => 'E02002436',
        '2EN' => 'E02002436',
        '2EP' => 'E02002436',
        '2EQ' => 'E02002436',
        '2ER' => 'E02002436',
        '2ES' => 'E02002436',
        '2ET' => 'E02002436',
        '2EU' => 'E02002436',
        '2EW' => 'E02002436',
        '2EX' => 'E02002436',
        '2EY' => 'E02002436',
        '2EZ' => 'E02002436',
        '2FA' => 'E02002436',
        '2FB' => 'E02002436',
        '2FD' => 'E02002434',
        '2FE' => 'E02002434',
        '2FF' => 'E02002434',
        '2FG' => 'E02002434',
        '2FH' => 'E02002434',
        '2FJ' => 'E02002434',
        '2FL' => 'E02002434',
        '2FN' => 'E02002434',
        '2FP' => 'E02002434',
        '2FQ' => 'E02002434',
        '2FR' => 'E02002434',
        '2FS' => 'E02002434',
        '2FT' => 'E02002434',
        '2FU' => 'E02002436',
        '2FW' => 'E02002434',
        '2FY' => 'E02002434',
        '2FZ' => 'E02002434',
        '2GB' => 'E02002434',
        '2GD' => 'E02002434',
        '2GE' => 'E02002434',
        '2GF' => 'E02002434',
        '2HB' => 'E02002436',
        '2HD' => 'E02002436',
        '2HE' => 'E02002436',
        '2HF' => 'E02002436',
        '2HG' => 'E02002436',
        '2HH' => 'E02002436',
        '2HJ' => 'E02002436',
        '2HL' => 'E02002436',
        '2HN' => 'E02002436',
        '2HP' => 'E02002436',
        '2HQ' => 'E02002436',
        '2HR' => 'E02002436',
        '2HS' => 'E02002436',
        '2HT' => 'E02002436',
        '2HU' => 'E02002436',
        '2HW' => 'E02002436',
        '2HX' => 'E02002436',
        '2HY' => 'E02002436',
        '2HZ' => 'E02002436',
        '2JA' => 'E02002436',
        '2JB' => 'E02002436',
        '2JD' => 'E02002436',
        '2JE' => 'E02002436',
        '2JF' => 'E02002436',
        '2JG' => 'E02002436',
        '2JH' => 'E02002436',
        '2JJ' => 'E02002436',
        '2JL' => 'E02002436',
        '2JN' => 'E02002434',
        '2JP' => 'E02002436',
        '2JQ' => 'E02002436',
        '2JR' => 'E02002436',
        '2JS' => 'E02002436',
        '2JT' => 'E02002436',
        '2JU' => 'E02002436',
        '2JW' => 'E02002436',
        '2JX' => 'E02002436',
        '2JY' => 'E02002436',
        '2JZ' => 'E02002437',
        '2LA' => 'E02002437',
        '2LB' => 'E02002437',
        '2LD' => 'E02002436',
        '2LE' => 'E02002436',
        '2LF' => 'E02002436',
        '2LG' => 'E02002434',
        '2LH' => 'E02002436',
        '2LJ' => 'E02002436',
        '2LL' => 'E02002436',
        '2LN' => 'E02002436',
        '2LP' => 'E02002436',
        '2LQ' => 'E02002436',
        '2LR' => 'E02002436',
        '2LS' => 'E02002434',
        '2LT' => 'E02002434',
        '2LU' => 'E02002434',
        '2LW' => 'E02002434',
        '2LX' => 'E02002434',
        '2LY' => 'E02002434',
        '2LZ' => 'E02002434',
        '2NA' => 'E02002434',
        '2NB' => 'E02002434',
        '2ND' => 'E02002434',
        '2NE' => 'E02002436',
        '2NF' => 'E02002436',
        '2NH' => 'E02002434',
        '2NS' => 'E02002436',
        '2NT' => 'E02002436',
        '2NU' => 'E02002436',
        '2NZ' => 'E02002436',
        '2WA' => 'E02002436',
        '2WB' => 'E02002436',
        '2WD' => 'E02002436',
        '2WE' => 'E02002436',
        '2WF' => 'E02002436',
        '2WG' => 'E02002436',
        '2WH' => 'E02002436',
        '2WN' => 'E02002436',
        '2WP' => 'E02002436',
        '2WQ' => 'E02002436',
        '2WR' => 'E02002436',
        '2WS' => 'E02002436',
        '2WT' => 'E02002436',
        '2WU' => 'E02002436',
        '2WW' => 'E02002436',
        '2WX' => 'E02002436',
        '2WY' => 'E02002436',
        '2WZ' => 'E02002436',
        '2XA' => 'E02002436',
        '2XB' => 'E02002436',
        '2XD' => 'E02002454',
        '2XE' => 'E02002436',
        '2XF' => 'E02002454',
        '2XG' => 'E02002454',
        '2XH' => 'E02002454',
        '2XJ' => 'E02002454',
        '2XQ' => 'E02002454',
        '2XX' => 'E02002436',
        '2XY' => 'E02002436',
        '2XZ' => 'E02002436',
        '2YW' => 'E02002436',
        '2YX' => 'E02002436',
        '2YY' => 'E02002436',
        '2YZ' => 'E02002436',
        '3AA' => 'E02002429',
        '3AB' => 'E02002434',
        '3AD' => 'E02002434',
        '3AE' => 'E02002429',
        '3AF' => 'E02002434',
        '3AG' => 'E02002434',
        '3AH' => 'E02002429',
        '3AJ' => 'E02002429',
        '3AL' => 'E02002434',
        '3AN' => 'E02002434',
        '3AP' => 'E02002434',
        '3AQ' => 'E02002429',
        '3AR' => 'E02002434',
        '3AS' => 'E02002434',
        '3AT' => 'E02002434',
        '3AU' => 'E02002434',
        '3AW' => 'E02002434',
        '3AX' => 'E02002434',
        '3AY' => 'E02002434',
        '3AZ' => 'E02002434',
        '3BA' => 'E02002434',
        '3BB' => 'E02002434',
        '3BD' => 'E02002434',
        '3BE' => 'E02002434',
        '3BG' => 'E02002434',
        '3BH' => 'E02002434',
        '3BJ' => 'E02002434',
        '3BL' => 'E02002434',
        '3BN' => 'E02002434',
        '3BP' => 'E02002434',
        '3BQ' => 'E02002434',
        '3BS' => 'E02002434',
        '3BT' => 'E02002434',
        '3BU' => 'E02002434',
        '3BW' => 'E02002434',
        '3BX' => 'E02002434',
        '3BY' => 'E02002434',
        '3BZ' => 'E02002434',
        '3DA' => 'E02002434',
        '3DB' => 'E02002434',
        '3DD' => 'E02002434',
        '3DE' => 'E02002434',
        '3DF' => 'E02002434',
        '3DG' => 'E02002434',
        '3DH' => 'E02002434',
        '3DJ' => 'E02002434',
        '3DL' => 'E02002434',
        '3DN' => 'E02002434',
        '3DP' => 'E02002434',
        '3DQ' => 'E02002434',
        '3DR' => 'E02002434',
        '3DS' => 'E02002434',
        '3DT' => 'E02002434',
        '3DU' => 'E02002434',
        '3DW' => 'E02002434',
        '3DX' => 'E02002434',
        '3DY' => 'E02002434',
        '3DZ' => 'E02002434',
        '3EA' => 'E02002434',
        '3EB' => 'E02002434',
        '3ED' => 'E02002434',
        '3EE' => 'E02002434',
        '3EF' => 'E02002434',
        '3EG' => 'E02002434',
        '3EH' => 'E02002434',
        '3EJ' => 'E02002434',
        '3EL' => 'E02002434',
        '3EN' => 'E02002434',
        '3EP' => 'E02002445',
        '3EQ' => 'E02002434',
        '3ER' => 'E02002443',
        '3ES' => 'E02002443',
        '3ET' => 'E02002443',
        '3EU' => 'E02002443',
        '3EW' => 'E02002443',
        '3EX' => 'E02002443',
        '3EY' => 'E02002443',
        '3EZ' => 'E02002434',
        '3FA' => 'E02002434',
        '3FB' => 'E02002443',
        '3FD' => 'E02002434',
        '3FE' => 'E02002434',
        '3FF' => 'E02002434',
        '3FG' => 'E02002434',
        '3FH' => 'E02002434',
        '3FJ' => 'E02002434',
        '3FL' => 'E02002443',
        '3FN' => 'E02002443',
        '3FP' => 'E02002443',
        '3FQ' => 'E02002443',
        '3FR' => 'E02002434',
        '3FS' => 'E02002429',
        '3FT' => 'E02002434',
        '3FW' => 'E02002443',
        '3FX' => 'E02002434',
        '3FY' => 'E02002429',
        '3GA' => 'E02002443',
        '3GB' => 'E02002443',
        '3GZ' => 'E02002445',
        '3HA' => 'E02002443',
        '3HB' => 'E02002443',
        '3HD' => 'E02002443',
        '3HE' => 'E02002443',
        '3HF' => 'E02002443',
        '3HG' => 'E02002443',
        '3HH' => 'E02002443',
        '3HJ' => 'E02002443',
        '3HL' => 'E02002443',
        '3HN' => 'E02002443',
        '3HP' => 'E02002443',
        '3HQ' => 'E02002434',
        '3HR' => 'E02002445',
        '3HS' => 'E02002443',
        '3HT' => 'E02002443',
        '3HU' => 'E02002443',
        '3HW' => 'E02002443',
        '3HX' => 'E02002443',
        '3HY' => 'E02002443',
        '3HZ' => 'E02002445',
        '3JA' => 'E02002445',
        '3JB' => 'E02002443',
        '3JD' => 'E02002443',
        '3JE' => 'E02002443',
        '3JF' => 'E02002443',
        '3JG' => 'E02002445',
        '3JH' => 'E02002445',
        '3JJ' => 'E02002445',
        '3JL' => 'E02002445',
        '3JN' => 'E02002445',
        '3JP' => 'E02002445',
        '3JQ' => 'E02002443',
        '3JR' => 'E02002445',
        '3JS' => 'E02002445',
        '3JT' => 'E02002445',
        '3JU' => 'E02002434',
        '3JW' => 'E02002445',
        '3JX' => 'E02002445',
        '3JY' => 'E02002443',
        '3JZ' => 'E02002445',
        '3LA' => 'E02002443',
        '3LB' => 'E02002443',
        '3LD' => 'E02002434',
        '3LE' => 'E02002434',
        '3LF' => 'E02002434',
        '3LG' => 'E02002434',
        '3LH' => 'E02002434',
        '3LJ' => 'E02002434',
        '3LL' => 'E02002434',
        '3LN' => 'E02002434',
        '3LP' => 'E02002434',
        '3LQ' => 'E02002434',
        '3LR' => 'E02002434',
        '3LS' => 'E02002434',
        '3LT' => 'E02002434',
        '3LU' => 'E02002443',
        '3LW' => 'E02002434',
        '3LX' => 'E02002443',
        '3LY' => 'E02002443',
        '3LZ' => 'E02002443',
        '3NA' => 'E02002443',
        '3NB' => 'E02002434',
        '3ND' => 'E02002434',
        '3NE' => 'E02002434',
        '3NF' => 'E02002434',
        '3NG' => 'E02002434',
        '3NH' => 'E02002443',
        '3NJ' => 'E02002434',
        '3NL' => 'E02002434',
        '3NN' => 'E02002434',
        '3NP' => 'E02002434',
        '3NQ' => 'E02002434',
        '3NR' => 'E02002434',
        '3NS' => 'E02002434',
        '3NT' => 'E02002434',
        '3NU' => 'E02002434',
        '3NW' => 'E02002434',
        '3NX' => 'E02002434',
        '3NY' => 'E02002434',
        '3NZ' => 'E02002443',
        '3PA' => 'E02002434',
        '3PB' => 'E02002434',
        '3PD' => 'E02002443',
        '3PE' => 'E02002443',
        '3PF' => 'E02002434',
        '3PG' => 'E02002434',
        '3PH' => 'E02002434',
        '3PJ' => 'E02002434',
        '3PL' => 'E02002434',
        '3PN' => 'E02002434',
        '3PP' => 'E02002434',
        '3PR' => 'E02002434',
        '3PS' => 'E02002434',
        '3PT' => 'E02002434',
        '3PU' => 'E02002434',
        '3PW' => 'E02002434',
        '3PX' => 'E02002434',
        '3PY' => 'E02002434',
        '3PZ' => 'E02002434',
        '3QA' => 'E02002434',
        '3QB' => 'E02002434',
        '3QD' => 'E02002434',
        '3QE' => 'E02002434',
        '3QF' => 'E02002434',
        '3QG' => 'E02002434',
        '3QH' => 'E02002429',
        '3QJ' => 'E02002434',
        '3QL' => 'E02002434',
        '3QN' => 'E02002429',
        '3QP' => 'E02002429',
        '3QQ' => 'E02002434',
        '3QR' => 'E02002429',
        '3QS' => 'E02002429',
        '3QT' => 'E02002429',
        '3QU' => 'E02002429',
        '3QW' => 'E02002429',
        '3QX' => 'E02002429',
        '3QY' => 'E02002429',
        '3QZ' => 'E02002429',
        '3RA' => 'E02002429',
        '3RB' => 'E02002429',
        '3RD' => 'E02002429',
        '3RE' => 'E02002429',
        '3RF' => 'E02002429',
        '3RG' => 'E02002434',
        '3RH' => 'E02002429',
        '3RJ' => 'E02002429',
        '3RL' => 'E02002429',
        '3RN' => 'E02002429',
        '3RP' => 'E02002429',
        '3RQ' => 'E02002429',
        '3RS' => 'E02002429',
        '3RT' => 'E02002429',
        '3RU' => 'E02002434',
        '3RW' => 'E02002429',
        '3RX' => 'E02002434',
        '3RY' => 'E02002429',
        '3RZ' => 'E02002429',
        '3SA' => 'E02002434',
        '3SB' => 'E02002429',
        '3SD' => 'E02002445',
        '3SE' => 'E02002445',
        '3SF' => 'E02002445',
        '3SG' => 'E02002434',
        '3SH' => 'E02002445',
        '3SJ' => 'E02002445',
        '3SL' => 'E02002445',
        '3SN' => 'E02002445',
        '3SP' => 'E02002434',
        '3SQ' => 'E02002434',
        '3SR' => 'E02002434',
        '3SS' => 'E02002434',
        '3ST' => 'E02002434',
        '3SU' => 'E02002434',
        '3SW' => 'E02002445',
        '3SX' => 'E02002443',
        '3TA' => 'E02002445',
        '3TB' => 'E02002445',
        '3TD' => 'E02002445',
        '3TE' => 'E02002445',
        '3TF' => 'E02002434',
        '3TG' => 'E02002434',
        '3TH' => 'E02002443',
        '3TJ' => 'E02002443',
        '3TL' => 'E02002443',
        '3TN' => 'E02002429',
        '3TP' => 'E02002429',
        '3TQ' => 'E02002434',
        '3TR' => 'E02002429',
        '3TS' => 'E02002434',
        '3TT' => 'E02002434',
        '3TU' => 'E02002434',
        '3TW' => 'E02002429',
        '3TX' => 'E02002434',
        '3TY' => 'E02002434',
        '3TZ' => 'E02002434',
        '3UA' => 'E02002434',
        '3UB' => 'E02002434',
        '3UD' => 'E02002434',
        '3UE' => 'E02002434',
        '3UZ' => 'E02002445',
        '3WA' => 'E02002454',
        '3WB' => 'E02002454',
        '3WQ' => 'E02002454',
        '3WS' => 'E02002454',
        '3WT' => 'E02002454',
        '3WU' => 'E02002454',
        '3WW' => 'E02002454',
        '3WX' => 'E02002454',
        '3WY' => 'E02002454',
        '3WZ' => 'E02002445',
        '3XA' => 'E02002434',
        '3XB' => 'E02002434',
        '3XD' => 'E02002434',
        '3XE' => 'E02002434',
        '3XF' => 'E02002454',
        '3XG' => 'E02002445',
        '3XH' => 'E02002434',
        '3XJ' => 'E02002434',
        '3XL' => 'E02002454',
        '3XN' => 'E02002445',
        '3XP' => 'E02002454',
        '3XQ' => 'E02002434',
        '3XR' => 'E02002454',
        '3XS' => 'E02002445',
        '3XT' => 'E02002454',
        '3XU' => 'E02002454',
        '3XW' => 'E02002454',
        '3XX' => 'E02002429',
        '3XY' => 'E02002434',
        '3XZ' => 'E02002434',
        '3YA' => 'E02002454',
        '3YB' => 'E02002454',
        '3YD' => 'E02002454',
        '3YE' => 'E02002454',
        '3YH' => 'E02002434',
        '3YJ' => 'E02002445',
        '3YL' => 'E02002445',
        '3YN' => 'E02002434',
        '3YP' => 'E02002434',
        '3YQ' => 'E02002434',
        '3YR' => 'E02002434',
        '3YS' => 'E02002434',
        '3YT' => 'E02002454',
        '3YU' => 'E02002454',
        '3YW' => 'E02002434',
        '3YX' => 'E02002434',
        '3YY' => 'E02002434',
        '3ZD' => 'E02002454',
        '4AA' => 'E02002444',
        '4AB' => 'E02002444',
        '4AD' => 'E02002444',
        '4AE' => 'E02002444',
        '4AF' => 'E02002444',
        '4AG' => 'E02002444',
        '4AH' => 'E02002444',
        '4AJ' => 'E02002444',
        '4AL' => 'E02002444',
        '4AN' => 'E02002444',
        '4AP' => 'E02002444',
        '4AQ' => 'E02002444',
        '4AR' => 'E02002444',
        '4AS' => 'E02002444',
        '4AT' => 'E02002444',
        '4AU' => 'E02002444',
        '4AW' => 'E02002444',
        '4AX' => 'E02002444',
        '4AY' => 'E02002444',
        '4AZ' => 'E02002444',
        '4BA' => 'E02002444',
        '4BB' => 'E02002444',
        '4BD' => 'E02002444',
        '4BE' => 'E02002444',
        '4BG' => 'E02002444',
        '4BH' => 'E02002444',
        '4BJ' => 'E02002444',
        '4BL' => 'E02002444',
        '4BN' => 'E02002444',
        '4BP' => 'E02002444',
        '4BQ' => 'E02002444',
        '4BS' => 'E02002444',
        '4BT' => 'E02002444',
        '4BU' => 'E02002444',
        '4BW' => 'E02002444',
        '4BX' => 'E02002444',
        '4BY' => 'E02002444',
        '4BZ' => 'E02002444',
        '4DA' => 'E02002444',
        '4DB' => 'E02002444',
        '4DD' => 'E02002444',
        '4DE' => 'E02002444',
        '4DF' => 'E02002444',
        '4DG' => 'E02002444',
        '4DH' => 'E02002444',
        '4DJ' => 'E02002444',
        '4DL' => 'E02002444',
        '4DN' => 'E02002443',
        '4DP' => 'E02002444',
        '4DQ' => 'E02002444',
        '4DR' => 'E02002444',
        '4DS' => 'E02002443',
        '4DT' => 'E02002444',
        '4DU' => 'E02002443',
        '4DW' => 'E02002444',
        '4DX' => 'E02002443',
        '4DY' => 'E02002443',
        '4DZ' => 'E02002443',
        '4EA' => 'E02002443',
        '4EB' => 'E02002443',
        '4ED' => 'E02002443',
        '4EE' => 'E02002443',
        '4EF' => 'E02002443',
        '4EG' => 'E02002443',
        '4EH' => 'E02002443',
        '4EJ' => 'E02002443',
        '4EL' => 'E02002443',
        '4EN' => 'E02002443',
        '4EP' => 'E02002443',
        '4EQ' => 'E02002443',
        '4ER' => 'E02002444',
        '4ES' => 'E02002444',
        '4ET' => 'E02002444',
        '4EU' => 'E02002444',
        '4EW' => 'E02002443',
        '4EX' => 'E02002444',
        '4EY' => 'E02002444',
        '4EZ' => 'E02002444',
        '4FA' => 'E02002444',
        '4FE' => 'E02002444',
        '4FG' => 'E02002444',
        '4HA' => 'E02002444',
        '4HB' => 'E02002444',
        '4HD' => 'E02002443',
        '4HE' => 'E02002444',
        '4HF' => 'E02002444',
        '4HG' => 'E02002444',
        '4HH' => 'E02002444',
        '4HJ' => 'E02002444',
        '4HL' => 'E02002444',
        '4HN' => 'E02002444',
        '4HP' => 'E02002444',
        '4HQ' => 'E02002444',
        '4HR' => 'E02002444',
        '4HS' => 'E02002444',
        '4HT' => 'E02002444',
        '4HU' => 'E02002444',
        '4HW' => 'E02002444',
        '4HX' => 'E02002444',
        '4HY' => 'E02002444',
        '4HZ' => 'E02002444',
        '4JA' => 'E02002444',
        '4JB' => 'E02002444',
        '4JD' => 'E02002444',
        '4JE' => 'E02002444',
        '4JF' => 'E02002444',
        '4JG' => 'E02002443',
        '4JH' => 'E02002444',
        '4JJ' => 'E02002444',
        '4JL' => 'E02002444',
        '4JN' => 'E02002443',
        '4JP' => 'E02002443',
        '4JQ' => 'E02002444',
        '4JR' => 'E02002444',
        '4JS' => 'E02002444',
        '4JT' => 'E02002444',
        '4JU' => 'E02002444',
        '4JW' => 'E02002444',
        '4JX' => 'E02002444',
        '4JY' => 'E02002444',
        '4JZ' => 'E02002444',
        '4LA' => 'E02002444',
        '4LB' => 'E02002444',
        '4LD' => 'E02002444',
        '4LE' => 'E02002444',
        '4LF' => 'E02002444',
        '4LG' => 'E02002444',
        '4LH' => 'E02002444',
        '4LL' => 'E02002444',
        '4LN' => 'E02002444',
        '4LP' => 'E02002444',
        '4LQ' => 'E02002444',
        '4LR' => 'E02002444',
        '4LS' => 'E02002444',
        '4LT' => 'E02002444',
        '4LU' => 'E02002444',
        '4LW' => 'E02002444',
        '4LX' => 'E02002444',
        '4LY' => 'E02002444',
        '4LZ' => 'E02002446',
        '4ND' => 'E02002444',
        '4NE' => 'E02002444',
        '4NF' => 'E02002444',
        '4NG' => 'E02002444',
        '4NH' => 'E02002444',
        '4NJ' => 'E02002444',
        '4NL' => 'E02002444',
        '4NN' => 'E02002444',
        '4NP' => 'E02002444',
        '4NQ' => 'E02002444',
        '4NS' => 'E02002444',
        '4NT' => 'E02002444',
        '4NU' => 'E02002444',
        '4NX' => 'E02002444',
        '4NY' => 'E02002444',
        '4PA' => 'E02002444',
        '4PB' => 'E02002444',
        '4PD' => 'E02002444',
        '4PE' => 'E02002444',
        '4PF' => 'E02002444',
        '4PG' => 'E02002444',
        '4PH' => 'E02002444',
        '4PJ' => 'E02002444',
        '4PL' => 'E02002444',
        '4PN' => 'E02002443',
        '4PP' => 'E02002444',
        '4PQ' => 'E02002444',
        '4PR' => 'E02002443',
        '4PS' => 'E02002444',
        '4PT' => 'E02002444',
        '4PU' => 'E02002443',
        '4PW' => 'E02002443',
        '4PX' => 'E02002444',
        '4PY' => 'E02002443',
        '4PZ' => 'E02002443',
        '4QA' => 'E02002444',
        '4QB' => 'E02002444',
        '4QD' => 'E02002443',
        '4QE' => 'E02002444',
        '4QF' => 'E02002443',
        '4QG' => 'E02002443',
        '4QH' => 'E02002443',
        '4QJ' => 'E02002443',
        '4QL' => 'E02002443',
        '4QN' => 'E02002444',
        '4QQ' => 'E02002443',
        '4QR' => 'E02002444',
        '4QS' => 'E02002444',
        '4QU' => 'E02002444',
        '4QY' => 'E02002443',
        '4QZ' => 'E02002444',
        '4WA' => 'E02002444',
        '4WB' => 'E02002444',
        '4WS' => 'E02002444',
        '4WT' => 'E02002444',
        '4WU' => 'E02002444',
        '4WW' => 'E02002444',
        '4WX' => 'E02002444',
        '4WY' => 'E02002444',
        '4WZ' => 'E02002444',
        '4XA' => 'E02002444',
        '4XB' => 'E02002444',
        '4XD' => 'E02002444',
        '4XE' => 'E02002444',
        '4XF' => 'E02002444',
        '4XG' => 'E02002444',
        '4XH' => 'E02002444',
        '4XJ' => 'E02002444',
        '4XL' => 'E02002444',
        '4XN' => 'E02002444',
        '4XP' => 'E02002454',
        '4XQ' => 'E02002444',
        '4XR' => 'E02002444',
        '4XZ' => 'E02002444',
        '4YJ' => 'E02002444',
        '4YL' => 'E02002444',
        '4YN' => 'E02002444',
        '4YP' => 'E02002444',
        '4YQ' => 'E02002444',
        '4YR' => 'E02002444',
        '4YS' => 'E02002444',
        '4YT' => 'E02002444',
        '4YU' => 'E02002444',
        '4YW' => 'E02002444',
        '4YX' => 'E02002444',
        '4YZ' => 'E02002444',
        '4ZZ' => 'E02002444',
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
