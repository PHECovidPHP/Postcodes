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
final class BS48
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AB' => 'E02003072',
        '1AD' => 'E02003072',
        '1AE' => 'E02003072',
        '1AF' => 'E02003073',
        '1AG' => 'E02003072',
        '1AH' => 'E02003072',
        '1AJ' => 'E02003073',
        '1AL' => 'E02003072',
        '1AN' => 'E02003072',
        '1AP' => 'E02003072',
        '1AQ' => 'E02003072',
        '1AR' => 'E02003073',
        '1AS' => 'E02003073',
        '1AT' => 'E02003073',
        '1AU' => 'E02003072',
        '1AW' => 'E02003073',
        '1AX' => 'E02003073',
        '1AY' => 'E02003073',
        '1AZ' => 'E02003073',
        '1BA' => 'E02003073',
        '1BB' => 'E02003073',
        '1BD' => 'E02003073',
        '1BE' => 'E02003072',
        '1BF' => 'E02003072',
        '1BG' => 'E02003072',
        '1BH' => 'E02003073',
        '1BJ' => 'E02003070',
        '1BL' => 'E02003073',
        '1BN' => 'E02003070',
        '1BP' => 'E02003072',
        '1BQ' => 'E02003073',
        '1BS' => 'E02003070',
        '1BT' => 'E02003072',
        '1BU' => 'E02003070',
        '1BW' => 'E02003072',
        '1BX' => 'E02003073',
        '1BY' => 'E02003073',
        '1BZ' => 'E02003073',
        '1DA' => 'E02003073',
        '1DB' => 'E02003073',
        '1DD' => 'E02003072',
        '1DE' => 'E02003072',
        '1DF' => 'E02003072',
        '1DG' => 'E02003070',
        '1DH' => 'E02003073',
        '1DJ' => 'E02003072',
        '1DP' => 'E02003072',
        '1DQ' => 'E02003073',
        '1DT' => 'E02003073',
        '1DZ' => 'E02003072',
        '1EA' => 'E02003072',
        '1EB' => 'E02003072',
        '1ED' => 'E02003072',
        '1EH' => 'E02003072',
        '1EL' => 'E02003072',
        '1EN' => 'E02003072',
        '1EU' => 'E02003073',
        '1EW' => 'E02003072',
        '1GZ' => 'E02003072',
        '1HA' => 'E02003072',
        '1HB' => 'E02003072',
        '1HD' => 'E02003070',
        '1HE' => 'E02003070',
        '1HF' => 'E02003070',
        '1HG' => 'E02003070',
        '1HH' => 'E02003072',
        '1HJ' => 'E02003072',
        '1HL' => 'E02003072',
        '1HN' => 'E02003070',
        '1HP' => 'E02003072',
        '1HQ' => 'E02003072',
        '1HR' => 'E02003072',
        '1HS' => 'E02003070',
        '1HT' => 'E02003072',
        '1HU' => 'E02003072',
        '1HW' => 'E02003072',
        '1HX' => 'E02003072',
        '1HY' => 'E02003072',
        '1HZ' => 'E02003072',
        '1JA' => 'E02003072',
        '1JB' => 'E02003072',
        '1JD' => 'E02003072',
        '1JE' => 'E02003072',
        '1JF' => 'E02003072',
        '1JG' => 'E02003070',
        '1JH' => 'E02003072',
        '1JJ' => 'E02003072',
        '1JL' => 'E02003070',
        '1JN' => 'E02003072',
        '1JP' => 'E02003070',
        '1JQ' => 'E02003072',
        '1JR' => 'E02003070',
        '1JS' => 'E02003070',
        '1JT' => 'E02003070',
        '1JU' => 'E02003070',
        '1JW' => 'E02003072',
        '1JX' => 'E02003070',
        '1JY' => 'E02003070',
        '1JZ' => 'E02003070',
        '1LA' => 'E02003070',
        '1LB' => 'E02003070',
        '1LD' => 'E02003070',
        '1LE' => 'E02003070',
        '1LF' => 'E02003070',
        '1LG' => 'E02003070',
        '1LH' => 'E02003070',
        '1LJ' => 'E02003070',
        '1LL' => 'E02003070',
        '1LN' => 'E02003070',
        '1LP' => 'E02003070',
        '1LQ' => 'E02003070',
        '1LR' => 'E02003070',
        '1LS' => 'E02003070',
        '1LT' => 'E02003070',
        '1LU' => 'E02003072',
        '1LW' => 'E02003070',
        '1LX' => 'E02003070',
        '1LY' => 'E02003070',
        '1LZ' => 'E02003070',
        '1NA' => 'E02003070',
        '1NB' => 'E02003070',
        '1ND' => 'E02003070',
        '1NE' => 'E02003070',
        '1NF' => 'E02003070',
        '1NG' => 'E02003075',
        '1NH' => 'E02003075',
        '1NJ' => 'E02003070',
        '1NL' => 'E02003070',
        '1NN' => 'E02003070',
        '1NP' => 'E02003070',
        '1NQ' => 'E02003070',
        '1NR' => 'E02003070',
        '1NS' => 'E02003070',
        '1NT' => 'E02003070',
        '1NU' => 'E02003070',
        '1NW' => 'E02003070',
        '1NX' => 'E02003070',
        '1NY' => 'E02003070',
        '1NZ' => 'E02003070',
        '1PA' => 'E02003070',
        '1PB' => 'E02003070',
        '1PD' => 'E02003070',
        '1PE' => 'E02003070',
        '1PF' => 'E02003070',
        '1PG' => 'E02003070',
        '1PH' => 'E02003070',
        '1PJ' => 'E02003070',
        '1PL' => 'E02003070',
        '1PN' => 'E02003070',
        '1PP' => 'E02003070',
        '1PQ' => 'E02003070',
        '1PR' => 'E02003070',
        '1PS' => 'E02003070',
        '1PU' => 'E02003075',
        '1QA' => 'E02003073',
        '1QB' => 'E02003073',
        '1QD' => 'E02003073',
        '1QE' => 'E02003073',
        '1QF' => 'E02003073',
        '1QG' => 'E02003073',
        '1QH' => 'E02003073',
        '1QJ' => 'E02003073',
        '1QL' => 'E02003073',
        '1QN' => 'E02003073',
        '1QQ' => 'E02003073',
        '1QT' => 'E02003073',
        '1QW' => 'E02003073',
        '1QX' => 'E02003073',
        '1QY' => 'E02003073',
        '1QZ' => 'E02003073',
        '1RA' => 'E02003072',
        '1RB' => 'E02003072',
        '1RD' => 'E02003072',
        '1RE' => 'E02003072',
        '1RF' => 'E02003072',
        '1RG' => 'E02003072',
        '1RH' => 'E02003072',
        '1RJ' => 'E02003072',
        '1RL' => 'E02003072',
        '1RN' => 'E02003072',
        '1RP' => 'E02003072',
        '1RQ' => 'E02003072',
        '1RR' => 'E02003072',
        '1RS' => 'E02003072',
        '1RT' => 'E02003072',
        '1RZ' => 'E02003073',
        '1SA' => 'E02003072',
        '1SB' => 'E02003072',
        '1SD' => 'E02003072',
        '1SE' => 'E02003072',
        '1SS' => 'E02003073',
        '1ST' => 'E02003073',
        '1SU' => 'E02003073',
        '1SW' => 'E02003073',
        '1SX' => 'E02003073',
        '1SY' => 'E02003073',
        '1SZ' => 'E02003073',
        '1TA' => 'E02003072',
        '1TB' => 'E02003073',
        '1TD' => 'E02003073',
        '1TE' => 'E02003073',
        '1TF' => 'E02003073',
        '1TG' => 'E02003073',
        '1TH' => 'E02003075',
        '1TJ' => 'E02003075',
        '1TL' => 'E02003075',
        '1TN' => 'E02003075',
        '1TP' => 'E02003073',
        '1UA' => 'E02003075',
        '1UB' => 'E02003075',
        '1UD' => 'E02003075',
        '1UE' => 'E02003075',
        '1UF' => 'E02003075',
        '1UG' => 'E02003075',
        '1UH' => 'E02003075',
        '1UJ' => 'E02003075',
        '1UL' => 'E02003075',
        '1UN' => 'E02003075',
        '1UP' => 'E02003075',
        '1UQ' => 'E02003075',
        '1UR' => 'E02003075',
        '1US' => 'E02003075',
        '1WA' => 'E02003072',
        '1WB' => 'E02003072',
        '1WD' => 'E02003072',
        '1WE' => 'E02003072',
        '1WF' => 'E02003072',
        '1WG' => 'E02003072',
        '1WH' => 'E02003072',
        '1WP' => 'E02003072',
        '1WQ' => 'E02003072',
        '1WR' => 'E02003072',
        '1WS' => 'E02003072',
        '1WT' => 'E02003072',
        '1WU' => 'E02003072',
        '1WW' => 'E02003072',
        '1WX' => 'E02003072',
        '1WY' => 'E02003072',
        '1WZ' => 'E02003072',
        '1XA' => 'E02003072',
        '1XB' => 'E02003072',
        '1XJ' => 'E02003072',
        '1XN' => 'E02003072',
        '1XP' => 'E02003072',
        '1XQ' => 'E02003072',
        '1XR' => 'E02003072',
        '1XY' => 'E02003072',
        '1XZ' => 'E02003072',
        '1YA' => 'E02003072',
        '1YB' => 'E02003072',
        '1YD' => 'E02003072',
        '1YE' => 'E02003072',
        '1YF' => 'E02003072',
        '1YG' => 'E02003072',
        '1YH' => 'E02003073',
        '1YJ' => 'E02003072',
        '1YL' => 'E02003072',
        '1YN' => 'E02003072',
        '1YP' => 'E02003072',
        '1ZN' => 'E02003072',
        '1ZP' => 'E02003072',
        '1ZY' => 'E02003072',
        '2AA' => 'E02003072',
        '2AB' => 'E02003072',
        '2AD' => 'E02003072',
        '2AE' => 'E02003072',
        '2AF' => 'E02003072',
        '2AG' => 'E02003072',
        '2AH' => 'E02003072',
        '2AJ' => 'E02003072',
        '2AL' => 'E02003072',
        '2AN' => 'E02003072',
        '2AP' => 'E02003072',
        '2AQ' => 'E02003072',
        '2AR' => 'E02003072',
        '2AS' => 'E02003072',
        '2AT' => 'E02003072',
        '2AU' => 'E02003072',
        '2AW' => 'E02003072',
        '2AX' => 'E02003072',
        '2AY' => 'E02003072',
        '2AZ' => 'E02003072',
        '2BA' => 'E02003073',
        '2BB' => 'E02003073',
        '2BD' => 'E02003072',
        '2BE' => 'E02003072',
        '2BF' => 'E02003072',
        '2BG' => 'E02003072',
        '2BH' => 'E02003072',
        '2BJ' => 'E02003072',
        '2BL' => 'E02003072',
        '2BN' => 'E02003072',
        '2BP' => 'E02003072',
        '2BQ' => 'E02003072',
        '2BR' => 'E02003072',
        '2BW' => 'E02003072',
        '2BX' => 'E02003072',
        '2DA' => 'E02003072',
        '2DB' => 'E02003072',
        '2DD' => 'E02003072',
        '2DE' => 'E02003072',
        '2DF' => 'E02003072',
        '2DG' => 'E02003072',
        '2DN' => 'E02003072',
        '2DR' => 'E02003072',
        '2DS' => 'E02003072',
        '2DT' => 'E02003072',
        '2DU' => 'E02003072',
        '2DX' => 'E02003072',
        '2DY' => 'E02003072',
        '2DZ' => 'E02003072',
        '2EA' => 'E02003072',
        '2EB' => 'E02003072',
        '2ED' => 'E02003072',
        '2EE' => 'E02003072',
        '2EF' => 'E02003072',
        '2EG' => 'E02003072',
        '2EH' => 'E02003072',
        '2EJ' => 'E02003072',
        '2EL' => 'E02003072',
        '2EQ' => 'E02003072',
        '2FB' => 'E02003072',
        '2FD' => 'E02003072',
        '2FG' => 'E02003072',
        '2FQ' => 'E02003073',
        '2FS' => 'E02003072',
        '2FU' => 'E02003072',
        '2FY' => 'E02003072',
        '2FZ' => 'E02003072',
        '2GE' => 'E02003072',
        '2GF' => 'E02003072',
        '2GG' => 'E02003072',
        '2GN' => 'E02003072',
        '2GP' => 'E02003072',
        '2GQ' => 'E02003072',
        '2GS' => 'E02003072',
        '2HD' => 'E02003072',
        '2HH' => 'E02003072',
        '2HJ' => 'E02003072',
        '2HL' => 'E02003073',
        '2HN' => 'E02003073',
        '2HP' => 'E02003072',
        '2HR' => 'E02003072',
        '2HS' => 'E02003072',
        '2HT' => 'E02003072',
        '2HU' => 'E02003072',
        '2HW' => 'E02003072',
        '2HX' => 'E02003072',
        '2HY' => 'E02003072',
        '2HZ' => 'E02003072',
        '2JA' => 'E02003072',
        '2JB' => 'E02003072',
        '2JD' => 'E02003072',
        '2JE' => 'E02003072',
        '2JF' => 'E02003072',
        '2JG' => 'E02003072',
        '2JH' => 'E02003072',
        '2JJ' => 'E02003072',
        '2JL' => 'E02003072',
        '2JN' => 'E02003072',
        '2JP' => 'E02003072',
        '2JQ' => 'E02003072',
        '2JR' => 'E02003072',
        '2JS' => 'E02003072',
        '2JT' => 'E02003072',
        '2JU' => 'E02003072',
        '2JW' => 'E02003072',
        '2JX' => 'E02003072',
        '2JY' => 'E02003072',
        '2JZ' => 'E02003072',
        '2LA' => 'E02003072',
        '2LB' => 'E02003072',
        '2LE' => 'E02003072',
        '2LG' => 'E02003073',
        '2LH' => 'E02003073',
        '2LL' => 'E02003073',
        '2LN' => 'E02003073',
        '2LP' => 'E02003073',
        '2LQ' => 'E02003073',
        '2LR' => 'E02003073',
        '2LW' => 'E02003073',
        '2NA' => 'E02003072',
        '2NB' => 'E02003072',
        '2ND' => 'E02003072',
        '2NE' => 'E02003072',
        '2NF' => 'E02003072',
        '2NG' => 'E02003072',
        '2NH' => 'E02003072',
        '2NJ' => 'E02003072',
        '2NL' => 'E02003072',
        '2NN' => 'E02003072',
        '2NP' => 'E02003072',
        '2PF' => 'E02003073',
        '2PT' => 'E02003073',
        '2QF' => 'E02003073',
        '2QG' => 'E02003073',
        '2QH' => 'E02003073',
        '2QJ' => 'E02003073',
        '2QL' => 'E02003073',
        '2QN' => 'E02003073',
        '2QP' => 'E02003073',
        '2QQ' => 'E02003073',
        '2QU' => 'E02003072',
        '2QW' => 'E02003072',
        '2QX' => 'E02003073',
        '2QY' => 'E02003073',
        '2QZ' => 'E02003073',
        '2RP' => 'E02003072',
        '2SA' => 'E02003072',
        '2SJ' => 'E02003073',
        '2SL' => 'E02003073',
        '2SN' => 'E02003073',
        '2SP' => 'E02003073',
        '2SQ' => 'E02003073',
        '2SR' => 'E02003073',
        '2SS' => 'E02003072',
        '2ST' => 'E02003073',
        '2SW' => 'E02003073',
        '2TG' => 'E02003073',
        '2TH' => 'E02003073',
        '2TJ' => 'E02003073',
        '2TL' => 'E02003073',
        '2TN' => 'E02003073',
        '2TP' => 'E02003073',
        '2TQ' => 'E02003073',
        '2TR' => 'E02003073',
        '2UA' => 'E02003073',
        '2UB' => 'E02003073',
        '2UD' => 'E02003073',
        '2UE' => 'E02003073',
        '2UF' => 'E02003073',
        '2UG' => 'E02003073',
        '2UH' => 'E02003073',
        '2UJ' => 'E02003073',
        '2UL' => 'E02003073',
        '2UN' => 'E02003073',
        '2UP' => 'E02003073',
        '2UQ' => 'E02003073',
        '2UR' => 'E02003073',
        '2US' => 'E02003073',
        '2UT' => 'E02003073',
        '2UU' => 'E02003073',
        '2UW' => 'E02003073',
        '2UX' => 'E02003073',
        '2UY' => 'E02003073',
        '2UZ' => 'E02003072',
        '2WA' => 'E02003072',
        '2WS' => 'E02003072',
        '2WT' => 'E02003072',
        '2WU' => 'E02003072',
        '2WW' => 'E02003072',
        '2WX' => 'E02003072',
        '2WZ' => 'E02003072',
        '2XA' => 'E02003072',
        '2XB' => 'E02003072',
        '2XD' => 'E02003072',
        '2XE' => 'E02003072',
        '2XF' => 'E02003072',
        '2XG' => 'E02003072',
        '2XH' => 'E02003072',
        '2XJ' => 'E02003072',
        '2XL' => 'E02003072',
        '2XN' => 'E02003072',
        '2XP' => 'E02003072',
        '2XQ' => 'E02003072',
        '2XR' => 'E02003072',
        '2XT' => 'E02003072',
        '2XX' => 'E02003072',
        '2XZ' => 'E02003072',
        '2YA' => 'E02003072',
        '2YB' => 'E02003072',
        '2YD' => 'E02003072',
        '2YE' => 'E02003072',
        '2YF' => 'E02003072',
        '2YG' => 'E02003072',
        '2YH' => 'E02003072',
        '2YJ' => 'E02003072',
        '2YL' => 'E02003072',
        '2YN' => 'E02003072',
        '2YP' => 'E02003072',
        '2YQ' => 'E02003072',
        '2YR' => 'E02003072',
        '2YS' => 'E02003072',
        '2YT' => 'E02003072',
        '2YU' => 'E02003072',
        '2YZ' => 'E02003072',
        '2ZH' => 'E02003072',
        '2ZJ' => 'E02003072',
        '2ZL' => 'E02003072',
        '2ZN' => 'E02003072',
        '2ZQ' => 'E02003072',
        '2ZR' => 'E02003072',
        '2ZS' => 'E02003072',
        '2ZW' => 'E02003072',
        '2ZY' => 'E02003072',
        '3AA' => 'E02003075',
        '3AB' => 'E02003075',
        '3AD' => 'E02003075',
        '3AE' => 'E02003075',
        '3AF' => 'E02003075',
        '3AG' => 'E02003075',
        '3AH' => 'E02003075',
        '3AJ' => 'E02003075',
        '3AL' => 'E02003075',
        '3AN' => 'E02003072',
        '3AP' => 'E02003075',
        '3AQ' => 'E02003077',
        '3AR' => 'E02003075',
        '3AS' => 'E02003075',
        '3AT' => 'E02003075',
        '3AU' => 'E02003075',
        '3AW' => 'E02003075',
        '3AX' => 'E02003075',
        '3AZ' => 'E02003075',
        '3BA' => 'E02003075',
        '3BB' => 'E02003075',
        '3BD' => 'E02003075',
        '3BE' => 'E02003075',
        '3BF' => 'E02003075',
        '3BG' => 'E02003075',
        '3BH' => 'E02003075',
        '3BJ' => 'E02003075',
        '3BL' => 'E02003075',
        '3BN' => 'E02003075',
        '3BP' => 'E02003075',
        '3BQ' => 'E02003075',
        '3BS' => 'E02003075',
        '3BT' => 'E02003075',
        '3BU' => 'E02003075',
        '3BW' => 'E02003075',
        '3BX' => 'E02003075',
        '3BY' => 'E02003075',
        '3BZ' => 'E02003075',
        '3DA' => 'E02003075',
        '3DB' => 'E02003075',
        '3DD' => 'E02003077',
        '3DE' => 'E02003075',
        '3DF' => 'E02003077',
        '3DG' => 'E02003075',
        '3DH' => 'E02003077',
        '3DJ' => 'E02003077',
        '3DL' => 'E02003075',
        '3DN' => 'E02003075',
        '3DP' => 'E02003077',
        '3DQ' => 'E02003077',
        '3DR' => 'E02003072',
        '3DS' => 'E02003077',
        '3DU' => 'E02003077',
        '3DW' => 'E02003077',
        '3DY' => 'E02003077',
        '3DZ' => 'E02003077',
        '3ED' => 'E02003075',
        '3EE' => 'E02003075',
        '3EF' => 'E02003075',
        '3EH' => 'E02003075',
        '3EJ' => 'E02003075',
        '3EL' => 'E02003075',
        '3EN' => 'E02003077',
        '3EP' => 'E02003077',
        '3EQ' => 'E02003075',
        '3ET' => 'E02003075',
        '3EW' => 'E02003077',
        '3GY' => 'E02003075',
        '3GZ' => 'E02003075',
        '3HA' => 'E02003075',
        '3HB' => 'E02003075',
        '3HD' => 'E02003075',
        '3HE' => 'E02003075',
        '3HF' => 'E02003075',
        '3HG' => 'E02003075',
        '3HH' => 'E02003075',
        '3HJ' => 'E02003075',
        '3HL' => 'E02003075',
        '3HN' => 'E02003075',
        '3HP' => 'E02003075',
        '3HQ' => 'E02003075',
        '3HR' => 'E02003075',
        '3HS' => 'E02003075',
        '3HT' => 'E02003075',
        '3HU' => 'E02003075',
        '3HW' => 'E02003075',
        '3HX' => 'E02003075',
        '3HY' => 'E02003075',
        '3HZ' => 'E02003075',
        '3JA' => 'E02003075',
        '3JB' => 'E02003075',
        '3JD' => 'E02003075',
        '3JE' => 'E02003075',
        '3JF' => 'E02003075',
        '3JG' => 'E02003075',
        '3JH' => 'E02003075',
        '3JJ' => 'E02003075',
        '3JL' => 'E02003075',
        '3JN' => 'E02003075',
        '3JP' => 'E02003075',
        '3JQ' => 'E02003075',
        '3JR' => 'E02003075',
        '3JS' => 'E02003075',
        '3JT' => 'E02003075',
        '3JU' => 'E02003075',
        '3JW' => 'E02003075',
        '3JX' => 'E02003075',
        '3JY' => 'E02003075',
        '3JZ' => 'E02003075',
        '3LA' => 'E02003075',
        '3LD' => 'E02003075',
        '3LE' => 'E02003075',
        '3LF' => 'E02003075',
        '3LG' => 'E02003075',
        '3LH' => 'E02003075',
        '3LJ' => 'E02003075',
        '3LL' => 'E02003075',
        '3LN' => 'E02003075',
        '3LP' => 'E02003075',
        '3LQ' => 'E02003075',
        '3LR' => 'E02003075',
        '3LS' => 'E02003075',
        '3LT' => 'E02003075',
        '3LU' => 'E02003075',
        '3LW' => 'E02003075',
        '3LX' => 'E02003075',
        '3LY' => 'E02003075',
        '3LZ' => 'E02003075',
        '3NA' => 'E02003075',
        '3NB' => 'E02003075',
        '3ND' => 'E02003075',
        '3NE' => 'E02003075',
        '3NF' => 'E02003075',
        '3NG' => 'E02003075',
        '3NH' => 'E02003075',
        '3NJ' => 'E02003075',
        '3NL' => 'E02003075',
        '3NN' => 'E02003075',
        '3NP' => 'E02003075',
        '3NQ' => 'E02003075',
        '3NR' => 'E02003075',
        '3NS' => 'E02003075',
        '3NT' => 'E02003075',
        '3NU' => 'E02003075',
        '3NW' => 'E02003075',
        '3NX' => 'E02003075',
        '3NY' => 'E02003075',
        '3NZ' => 'E02003075',
        '3PA' => 'E02003075',
        '3PB' => 'E02003075',
        '3PD' => 'E02003075',
        '3PE' => 'E02003075',
        '3PF' => 'E02003075',
        '3PG' => 'E02003075',
        '3PH' => 'E02003075',
        '3PJ' => 'E02003075',
        '3PL' => 'E02003075',
        '3PN' => 'E02003075',
        '3PP' => 'E02003075',
        '3PQ' => 'E02003075',
        '3PR' => 'E02003075',
        '3PS' => 'E02003075',
        '3PT' => 'E02003075',
        '3PU' => 'E02003075',
        '3PW' => 'E02003075',
        '3PX' => 'E02003075',
        '3PY' => 'E02003075',
        '3PZ' => 'E02003075',
        '3QA' => 'E02003075',
        '3QB' => 'E02003075',
        '3QD' => 'E02003075',
        '3QE' => 'E02003075',
        '3QF' => 'E02003075',
        '3QG' => 'E02003075',
        '3QH' => 'E02003075',
        '3QJ' => 'E02003075',
        '3QL' => 'E02003075',
        '3QN' => 'E02003075',
        '3QQ' => 'E02003075',
        '3QR' => 'E02003070',
        '3QS' => 'E02003070',
        '3QT' => 'E02003070',
        '3QU' => 'E02003070',
        '3QW' => 'E02003075',
        '3QX' => 'E02003075',
        '3RA' => 'E02003075',
        '3RE' => 'E02003075',
        '3RG' => 'E02003075',
        '3RL' => 'E02003075',
        '3RN' => 'E02003070',
        '3RP' => 'E02003075',
        '3RQ' => 'E02003075',
        '3RR' => 'E02003075',
        '3RS' => 'E02003075',
        '3RT' => 'E02003075',
        '3RU' => 'E02003075',
        '3RW' => 'E02003075',
        '3RX' => 'E02003075',
        '3RY' => 'E02003075',
        '3RZ' => 'E02003075',
        '3SA' => 'E02003075',
        '3SB' => 'E02003075',
        '3SD' => 'E02003075',
        '3SE' => 'E02003075',
        '3SF' => 'E02003075',
        '3SG' => 'E02003075',
        '3SH' => 'E02003075',
        '3SJ' => 'E02003075',
        '3SL' => 'E02003075',
        '3SP' => 'E02003075',
        '3SQ' => 'E02003075',
        '3SR' => 'E02003075',
        '3SS' => 'E02003075',
        '3ST' => 'E02003075',
        '3SU' => 'E02003075',
        '3SW' => 'E02003075',
        '3TA' => 'E02003072',
        '3WA' => 'E02003072',
        '3WB' => 'E02003072',
        '3WD' => 'E02003072',
        '3WQ' => 'E02003072',
        '3WR' => 'E02003072',
        '3WS' => 'E02003072',
        '3WT' => 'E02003072',
        '3WU' => 'E02003072',
        '3WW' => 'E02003072',
        '3WX' => 'E02003072',
        '3WY' => 'E02003072',
        '3WZ' => 'E02003072',
        '3XB' => 'E02003075',
        '3XN' => 'E02003072',
        '3XZ' => 'E02003072',
        '3YA' => 'E02003075',
        '3YB' => 'E02003075',
        '3YD' => 'E02003072',
        '3YE' => 'E02003075',
        '3YF' => 'E02003072',
        '3YG' => 'E02003072',
        '3YH' => 'E02003075',
        '3YJ' => 'E02003072',
        '3YL' => 'E02003072',
        '3YN' => 'E02003072',
        '3ZN' => 'E02003072',
        '3ZQ' => 'E02003072',
        '3ZR' => 'E02003072',
        '3ZS' => 'E02003072',
        '4AA' => 'E02003075',
        '4AB' => 'E02003075',
        '4AD' => 'E02003075',
        '4AE' => 'E02003075',
        '4AF' => 'E02003075',
        '4AG' => 'E02003075',
        '4AH' => 'E02003075',
        '4AJ' => 'E02003075',
        '4AL' => 'E02003075',
        '4AN' => 'E02003072',
        '4AP' => 'E02003072',
        '4AQ' => 'E02003075',
        '4AY' => 'E02003075',
        '4AZ' => 'E02003072',
        '4BA' => 'E02003072',
        '4BB' => 'E02003072',
        '4BD' => 'E02003072',
        '4BP' => 'E02003072',
        '4BS' => 'E02003072',
        '4BT' => 'E02003072',
        '4BU' => 'E02003072',
        '4BY' => 'E02003072',
        '4BZ' => 'E02003072',
        '4DA' => 'E02003072',
        '4DB' => 'E02003072',
        '4DD' => 'E02003072',
        '4DE' => 'E02003072',
        '4DF' => 'E02003072',
        '4DG' => 'E02003072',
        '4DH' => 'E02003072',
        '4DJ' => 'E02003072',
        '4DL' => 'E02003072',
        '4DN' => 'E02003072',
        '4DP' => 'E02003072',
        '4DQ' => 'E02003072',
        '4DT' => 'E02003072',
        '4FB' => 'E02003073',
        '4FE' => 'E02003072',
        '4FH' => 'E02003072',
        '4FJ' => 'E02003073',
        '4FL' => 'E02003072',
        '4FN' => 'E02003072',
        '4FP' => 'E02003073',
        '4FX' => 'E02003072',
        '4GA' => 'E02003072',
        '4GB' => 'E02003072',
        '4GH' => 'E02003072',
        '4GJ' => 'E02003073',
        '4GL' => 'E02003072',
        '4GR' => 'E02003073',
        '4JF' => 'E02003073',
        '4JS' => 'E02003073',
        '4LD' => 'E02003072',
        '4LS' => 'E02003073',
        '4LT' => 'E02003073',
        '4LU' => 'E02003073',
        '4LX' => 'E02003073',
        '4LY' => 'E02003073',
        '4LZ' => 'E02003073',
        '4NA' => 'E02003073',
        '4NB' => 'E02003072',
        '4ND' => 'E02003073',
        '4NE' => 'E02003073',
        '4NF' => 'E02003072',
        '4NG' => 'E02003072',
        '4NH' => 'E02003072',
        '4NJ' => 'E02003072',
        '4NL' => 'E02003072',
        '4NN' => 'E02003072',
        '4NP' => 'E02003072',
        '4NQ' => 'E02003072',
        '4NR' => 'E02003072',
        '4NS' => 'E02003073',
        '4NT' => 'E02003072',
        '4NU' => 'E02003072',
        '4NW' => 'E02003072',
        '4NX' => 'E02003073',
        '4NY' => 'E02003073',
        '4NZ' => 'E02003073',
        '4PA' => 'E02003073',
        '4PB' => 'E02003073',
        '4PD' => 'E02003073',
        '4PE' => 'E02003073',
        '4PF' => 'E02003073',
        '4PG' => 'E02003073',
        '4PH' => 'E02003073',
        '4PJ' => 'E02003073',
        '4PL' => 'E02003073',
        '4PN' => 'E02003073',
        '4PQ' => 'E02003073',
        '4PU' => 'E02003073',
        '4PX' => 'E02003073',
        '4PY' => 'E02003073',
        '4PZ' => 'E02003073',
        '4QA' => 'E02003073',
        '4QB' => 'E02003073',
        '4QW' => 'E02003073',
        '4RA' => 'E02003072',
        '4RB' => 'E02003072',
        '4RD' => 'E02003072',
        '4RE' => 'E02003072',
        '4RF' => 'E02003072',
        '4RG' => 'E02003072',
        '4RH' => 'E02003072',
        '4RJ' => 'E02003072',
        '4RL' => 'E02003072',
        '4RN' => 'E02003072',
        '4RP' => 'E02003072',
        '4RQ' => 'E02003072',
        '4RR' => 'E02003072',
        '4RS' => 'E02003072',
        '4RT' => 'E02003072',
        '4RU' => 'E02003072',
        '4RW' => 'E02003072',
        '4RX' => 'E02003072',
        '4RY' => 'E02003072',
        '4RZ' => 'E02003072',
        '4SA' => 'E02003072',
        '4SB' => 'E02003072',
        '4SD' => 'E02003072',
        '4SE' => 'E02003072',
        '4SF' => 'E02003072',
        '4SG' => 'E02003072',
        '4SU' => 'E02003072',
        '4SX' => 'E02003072',
        '4SY' => 'E02003072',
        '4SZ' => 'E02003072',
        '4TA' => 'E02003073',
        '4TB' => 'E02003073',
        '4TD' => 'E02003073',
        '4TE' => 'E02003073',
        '4TF' => 'E02003073',
        '4TG' => 'E02003073',
        '4TH' => 'E02003073',
        '4TZ' => 'E02003073',
        '4WA' => 'E02003072',
        '4WB' => 'E02003072',
        '4WG' => 'E02003072',
        '4WQ' => 'E02003072',
        '4WR' => 'E02003072',
        '4WS' => 'E02003072',
        '4WT' => 'E02003072',
        '4WU' => 'E02003072',
        '4WW' => 'E02003072',
        '4WX' => 'E02003072',
        '4WY' => 'E02003072',
        '4WZ' => 'E02003072',
        '4XJ' => 'E02003072',
        '4XN' => 'E02003072',
        '4XP' => 'E02003072',
        '4XQ' => 'E02003072',
        '4XR' => 'E02003072',
        '4XS' => 'E02003072',
        '4XU' => 'E02003072',
        '4XW' => 'E02003072',
        '4XY' => 'E02003072',
        '4XZ' => 'E02003072',
        '4YA' => 'E02003073',
        '4YB' => 'E02003073',
        '4YD' => 'E02003073',
        '4YE' => 'E02003073',
        '4YF' => 'E02003073',
        '4YG' => 'E02003072',
        '4YH' => 'E02003073',
        '4YJ' => 'E02003073',
        '4YL' => 'E02003073',
        '4YN' => 'E02003073',
        '4YP' => 'E02003073',
        '4YQ' => 'E02003073',
        '4YR' => 'E02003073',
        '4YS' => 'E02003073',
        '4YT' => 'E02003073',
        '4YU' => 'E02003073',
        '4YW' => 'E02003073',
        '4YX' => 'E02003072',
        '4YY' => 'E02003072',
        '4YZ' => 'E02003073',
        '4ZA' => 'E02003073',
        '4ZB' => 'E02003072',
        '4ZD' => 'E02003072',
        '4ZN' => 'E02003072',
        '4ZQ' => 'E02003072',
        '4ZX' => 'E02003072',
        '9AD' => 'E02003072',
        '9AE' => 'E02003072',
        '9AH' => 'E02003072',
        '9AJ' => 'E02003072',
        '9AL' => 'E02003072',
        '9AP' => 'E02003072',
        '9AR' => 'E02003072',
        '9AU' => 'E02003072',
        '9AW' => 'E02003072',
        '9AX' => 'E02003072',
        '9AZ' => 'E02003072',
        '9BA' => 'E02003072',
        '9BB' => 'E02003072',
        '9BD' => 'E02003072',
        '9BE' => 'E02003072',
        '9BF' => 'E02003072',
        '9BG' => 'E02003072',
        '9BH' => 'E02003072',
        '9BJ' => 'E02003072',
        '9BL' => 'E02003072',
        '9BN' => 'E02003072',
        '9BP' => 'E02003072',
        '9BQ' => 'E02003072',
        '9BR' => 'E02003072',
        '9BS' => 'E02003072',
        '9BT' => 'E02003072',
        '9BU' => 'E02003072',
        '9BW' => 'E02003072',
        '9BX' => 'E02003072',
        '9BY' => 'E02003072',
        '9BZ' => 'E02003072',
        '9DA' => 'E02003072',
        '9DB' => 'E02003072',
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
