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
final class DH6
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02004311',
        '1AB' => 'E02004311',
        '1AD' => 'E02004311',
        '1AE' => 'E02004311',
        '1AF' => 'E02004311',
        '1AG' => 'E02004311',
        '1AH' => 'E02004311',
        '1AJ' => 'E02004311',
        '1AL' => 'E02004311',
        '1AN' => 'E02004311',
        '1AP' => 'E02004311',
        '1AQ' => 'E02004311',
        '1AR' => 'E02004311',
        '1AS' => 'E02004311',
        '1AT' => 'E02004311',
        '1AU' => 'E02004311',
        '1AW' => 'E02004311',
        '1AX' => 'E02004311',
        '1AY' => 'E02004311',
        '1AZ' => 'E02004311',
        '1BA' => 'E02004311',
        '1BB' => 'E02004311',
        '1BD' => 'E02004311',
        '1BE' => 'E02004311',
        '1BF' => 'E02004311',
        '1BG' => 'E02004311',
        '1BH' => 'E02004311',
        '1BJ' => 'E02004311',
        '1BL' => 'E02004311',
        '1BN' => 'E02004311',
        '1BP' => 'E02004311',
        '1BQ' => 'E02004311',
        '1BS' => 'E02004311',
        '1BT' => 'E02004311',
        '1BU' => 'E02004311',
        '1BW' => 'E02004311',
        '1DA' => 'E02004311',
        '1DB' => 'E02004311',
        '1DD' => 'E02004311',
        '1DE' => 'E02004311',
        '1DF' => 'E02004311',
        '1DG' => 'E02004311',
        '1DH' => 'E02004311',
        '1DJ' => 'E02004311',
        '1DL' => 'E02004311',
        '1DN' => 'E02004311',
        '1DP' => 'E02004311',
        '1DQ' => 'E02004311',
        '1DR' => 'E02004311',
        '1DS' => 'E02004311',
        '1DT' => 'E02004311',
        '1DU' => 'E02004311',
        '1DW' => 'E02004311',
        '1DX' => 'E02004311',
        '1DY' => 'E02004311',
        '1DZ' => 'E02004311',
        '1EA' => 'E02004311',
        '1EB' => 'E02004311',
        '1ED' => 'E02004311',
        '1EE' => 'E02004311',
        '1EF' => 'E02004311',
        '1EG' => 'E02004311',
        '1EH' => 'E02004311',
        '1EJ' => 'E02004311',
        '1EL' => 'E02004311',
        '1EN' => 'E02004311',
        '1EP' => 'E02004311',
        '1EQ' => 'E02004311',
        '1ER' => 'E02004311',
        '1ES' => 'E02004311',
        '1ET' => 'E02004311',
        '1EU' => 'E02004311',
        '1EW' => 'E02004311',
        '1EX' => 'E02004311',
        '1EY' => 'E02004311',
        '1GA' => 'E02004311',
        '1HA' => 'E02004311',
        '1HB' => 'E02004311',
        '1HD' => 'E02004311',
        '1HE' => 'E02004311',
        '1HF' => 'E02004311',
        '1HG' => 'E02004311',
        '1HH' => 'E02004311',
        '1HJ' => 'E02004311',
        '1HL' => 'E02004311',
        '1HN' => 'E02004311',
        '1HP' => 'E02004311',
        '1HQ' => 'E02004311',
        '1HR' => 'E02004311',
        '1HS' => 'E02004311',
        '1HT' => 'E02004311',
        '1HU' => 'E02004311',
        '1HW' => 'E02004311',
        '1HX' => 'E02004311',
        '1HY' => 'E02004311',
        '1HZ' => 'E02004311',
        '1JA' => 'E02004311',
        '1JB' => 'E02004311',
        '1JD' => 'E02004311',
        '1JE' => 'E02004311',
        '1JF' => 'E02004311',
        '1JG' => 'E02004311',
        '1JH' => 'E02004311',
        '1JJ' => 'E02004311',
        '1JL' => 'E02004311',
        '1JN' => 'E02004311',
        '1JP' => 'E02004311',
        '1JQ' => 'E02004311',
        '1JR' => 'E02004311',
        '1JS' => 'E02004311',
        '1JT' => 'E02004311',
        '1JU' => 'E02004311',
        '1JW' => 'E02004311',
        '1JX' => 'E02004311',
        '1JY' => 'E02004311',
        '1JZ' => 'E02004311',
        '1LA' => 'E02004311',
        '1LB' => 'E02004311',
        '1LD' => 'E02004311',
        '1LE' => 'E02004311',
        '1LF' => 'E02004311',
        '1LG' => 'E02004311',
        '1LH' => 'E02004311',
        '1LJ' => 'E02004311',
        '1LL' => 'E02004311',
        '1LN' => 'E02004311',
        '1LP' => 'E02004311',
        '1LQ' => 'E02004311',
        '1LR' => 'E02004311',
        '1LS' => 'E02004311',
        '1LT' => 'E02004311',
        '1LU' => 'E02004311',
        '1LW' => 'E02004311',
        '1LX' => 'E02004311',
        '1LY' => 'E02004311',
        '1LZ' => 'E02004311',
        '1NA' => 'E02004311',
        '1NB' => 'E02004311',
        '1ND' => 'E02004311',
        '1NE' => 'E02004311',
        '1NF' => 'E02004311',
        '1NG' => 'E02004311',
        '1NH' => 'E02004311',
        '1NJ' => 'E02004311',
        '1NL' => 'E02004311',
        '1NN' => 'E02004311',
        '1NP' => 'E02004311',
        '1NQ' => 'E02004311',
        '1NR' => 'E02004311',
        '1NS' => 'E02004311',
        '1NT' => 'E02004311',
        '1NU' => 'E02004311',
        '1NW' => 'E02004311',
        '1NX' => 'E02004311',
        '1NY' => 'E02004311',
        '1NZ' => 'E02004311',
        '1PA' => 'E02004311',
        '1PB' => 'E02004311',
        '1PD' => 'E02004311',
        '1PE' => 'E02004311',
        '1PF' => 'E02004311',
        '1PG' => 'E02004311',
        '1PH' => 'E02004311',
        '1PJ' => 'E02004311',
        '1PL' => 'E02004311',
        '1PN' => 'E02004311',
        '1PP' => 'E02004311',
        '1PQ' => 'E02004311',
        '1PR' => 'E02004311',
        '1PS' => 'E02004311',
        '1PT' => 'E02004311',
        '1PU' => 'E02004311',
        '1PW' => 'E02004311',
        '1PX' => 'E02004311',
        '1PY' => 'E02004311',
        '1PZ' => 'E02004311',
        '1QA' => 'E02004311',
        '1QB' => 'E02004326',
        '1QD' => 'E02004311',
        '1QE' => 'E02004326',
        '1QF' => 'E02004326',
        '1QG' => 'E02004326',
        '1QH' => 'E02004311',
        '1QJ' => 'E02004311',
        '1QL' => 'E02004311',
        '1QN' => 'E02004311',
        '1QP' => 'E02004311',
        '1QQ' => 'E02004311',
        '1QR' => 'E02004311',
        '1QS' => 'E02004311',
        '1QT' => 'E02004311',
        '1QU' => 'E02004311',
        '1QX' => 'E02004311',
        '1QY' => 'E02004311',
        '1QZ' => 'E02004311',
        '1RB' => 'E02004311',
        '1RD' => 'E02004311',
        '1RE' => 'E02004311',
        '1RG' => 'E02004311',
        '1RH' => 'E02004311',
        '1RJ' => 'E02004311',
        '1RL' => 'E02004311',
        '1RN' => 'E02004311',
        '1RQ' => 'E02004311',
        '1RW' => 'E02004311',
        '1WT' => 'E02004311',
        '1WU' => 'E02004312',
        '1WW' => 'E02004312',
        '1WY' => 'E02004312',
        '1WZ' => 'E02004311',
        '1XA' => 'E02004311',
        '1XB' => 'E02004314',
        '1XD' => 'E02004312',
        '1YP' => 'E02004311',
        '1YR' => 'E02004311',
        '1YS' => 'E02004311',
        '1YT' => 'E02004314',
        '1YU' => 'E02004311',
        '1YY' => 'E02004314',
        '1YZ' => 'E02004311',
        '2AA' => 'E02004326',
        '2AB' => 'E02004326',
        '2AD' => 'E02004326',
        '2AE' => 'E02004326',
        '2AF' => 'E02004326',
        '2AG' => 'E02004326',
        '2AH' => 'E02004326',
        '2AJ' => 'E02004326',
        '2AL' => 'E02004324',
        '2AN' => 'E02004326',
        '2AP' => 'E02004326',
        '2AQ' => 'E02004326',
        '2AR' => 'E02004326',
        '2AS' => 'E02004326',
        '2AT' => 'E02004326',
        '2AU' => 'E02004326',
        '2AW' => 'E02004326',
        '2AX' => 'E02004326',
        '2AY' => 'E02004326',
        '2AZ' => 'E02004326',
        '2BA' => 'E02004311',
        '2BB' => 'E02004326',
        '2BD' => 'E02004326',
        '2BE' => 'E02004326',
        '2BF' => 'E02004326',
        '2BG' => 'E02004326',
        '2BH' => 'E02004326',
        '2BJ' => 'E02004326',
        '2BL' => 'E02004326',
        '2BN' => 'E02004326',
        '2BP' => 'E02004326',
        '2BQ' => 'E02004326',
        '2BU' => 'E02004326',
        '2BW' => 'E02004326',
        '2BX' => 'E02004326',
        '2BY' => 'E02004326',
        '2BZ' => 'E02004326',
        '2DA' => 'E02004326',
        '2DB' => 'E02004326',
        '2DD' => 'E02004326',
        '2DE' => 'E02004326',
        '2DF' => 'E02004326',
        '2DG' => 'E02004326',
        '2DH' => 'E02004326',
        '2DJ' => 'E02004326',
        '2DL' => 'E02004326',
        '2DN' => 'E02004326',
        '2DP' => 'E02004326',
        '2DQ' => 'E02004326',
        '2DR' => 'E02004326',
        '2DS' => 'E02004326',
        '2DT' => 'E02004326',
        '2DU' => 'E02004326',
        '2DW' => 'E02004326',
        '2DX' => 'E02004326',
        '2DY' => 'E02004326',
        '2DZ' => 'E02004326',
        '2EA' => 'E02004326',
        '2EB' => 'E02004326',
        '2ED' => 'E02004326',
        '2EE' => 'E02004326',
        '2EF' => 'E02004326',
        '2EG' => 'E02004326',
        '2EH' => 'E02004326',
        '2EJ' => 'E02004326',
        '2EL' => 'E02004326',
        '2EN' => 'E02004326',
        '2EP' => 'E02004326',
        '2EQ' => 'E02004326',
        '2ER' => 'E02004326',
        '2ES' => 'E02004326',
        '2ET' => 'E02004326',
        '2EU' => 'E02004326',
        '2EW' => 'E02004326',
        '2EX' => 'E02004326',
        '2EY' => 'E02004326',
        '2EZ' => 'E02004326',
        '2FA' => 'E02004326',
        '2FB' => 'E02004314',
        '2FD' => 'E02004326',
        '2GA' => 'E02004323',
        '2HA' => 'E02004326',
        '2HB' => 'E02004326',
        '2HD' => 'E02004326',
        '2HE' => 'E02004326',
        '2HF' => 'E02004326',
        '2HG' => 'E02004326',
        '2HH' => 'E02004326',
        '2HJ' => 'E02004326',
        '2HL' => 'E02004326',
        '2HN' => 'E02004326',
        '2HP' => 'E02004326',
        '2HQ' => 'E02004326',
        '2HR' => 'E02004326',
        '2HS' => 'E02004326',
        '2HT' => 'E02004326',
        '2HU' => 'E02004326',
        '2HW' => 'E02004326',
        '2HX' => 'E02004326',
        '2HY' => 'E02004326',
        '2HZ' => 'E02004326',
        '2JA' => 'E02004326',
        '2JB' => 'E02004326',
        '2JD' => 'E02004326',
        '2JE' => 'E02004326',
        '2JF' => 'E02004326',
        '2JG' => 'E02004326',
        '2JH' => 'E02004326',
        '2JJ' => 'E02004326',
        '2JL' => 'E02004326',
        '2JN' => 'E02004326',
        '2JP' => 'E02004326',
        '2JQ' => 'E02004326',
        '2JR' => 'E02004326',
        '2JS' => 'E02004326',
        '2JT' => 'E02004326',
        '2JU' => 'E02004326',
        '2JW' => 'E02004326',
        '2JX' => 'E02004326',
        '2JY' => 'E02004326',
        '2JZ' => 'E02004326',
        '2LA' => 'E02004326',
        '2LB' => 'E02004326',
        '2LD' => 'E02004326',
        '2LE' => 'E02004326',
        '2LF' => 'E02004326',
        '2LG' => 'E02004326',
        '2LH' => 'E02004326',
        '2LJ' => 'E02004326',
        '2LL' => 'E02004326',
        '2LN' => 'E02004326',
        '2LP' => 'E02004326',
        '2LQ' => 'E02004326',
        '2LR' => 'E02004326',
        '2LS' => 'E02004326',
        '2LT' => 'E02004326',
        '2LU' => 'E02004326',
        '2LW' => 'E02004326',
        '2LX' => 'E02004326',
        '2LY' => 'E02004326',
        '2NA' => 'E02004326',
        '2NB' => 'E02004326',
        '2ND' => 'E02004326',
        '2NE' => 'E02004326',
        '2NF' => 'E02004326',
        '2NG' => 'E02004326',
        '2NH' => 'E02004326',
        '2NL' => 'E02004326',
        '2NN' => 'E02004326',
        '2NP' => 'E02004326',
        '2NQ' => 'E02004326',
        '2NR' => 'E02004326',
        '2NT' => 'E02004326',
        '2NU' => 'E02004326',
        '2NX' => 'E02004326',
        '2PA' => 'E02004326',
        '2PB' => 'E02004326',
        '2PD' => 'E02004326',
        '2PE' => 'E02004326',
        '2PF' => 'E02004326',
        '2PG' => 'E02004326',
        '2PH' => 'E02004326',
        '2PJ' => 'E02004326',
        '2PL' => 'E02004326',
        '2PN' => 'E02004326',
        '2PP' => 'E02004326',
        '2PQ' => 'E02004326',
        '2PR' => 'E02004326',
        '2PS' => 'E02004326',
        '2PT' => 'E02004326',
        '2PU' => 'E02004326',
        '2PW' => 'E02004326',
        '2PX' => 'E02004326',
        '2PY' => 'E02004326',
        '2PZ' => 'E02004326',
        '2QA' => 'E02004326',
        '2QB' => 'E02004326',
        '2QD' => 'E02004326',
        '2QE' => 'E02004326',
        '2QJ' => 'E02004326',
        '2QN' => 'E02004326',
        '2QP' => 'E02004326',
        '2QR' => 'E02004326',
        '2QT' => 'E02004326',
        '2QU' => 'E02004326',
        '2QW' => 'E02004326',
        '2QX' => 'E02004326',
        '2QY' => 'E02004326',
        '2QZ' => 'E02004326',
        '2RA' => 'E02004326',
        '2RB' => 'E02004326',
        '2RD' => 'E02004326',
        '2RE' => 'E02004326',
        '2RF' => 'E02004326',
        '2RG' => 'E02004323',
        '2RH' => 'E02004323',
        '2RL' => 'E02004323',
        '2RN' => 'E02004323',
        '2RP' => 'E02004323',
        '2RQ' => 'E02004323',
        '2RR' => 'E02004323',
        '2RS' => 'E02004323',
        '2RT' => 'E02004323',
        '2RU' => 'E02004323',
        '2RW' => 'E02004323',
        '2RX' => 'E02004323',
        '2RY' => 'E02004323',
        '2RZ' => 'E02004323',
        '2SA' => 'E02004323',
        '2SD' => 'E02004323',
        '2SE' => 'E02004323',
        '2SF' => 'E02004323',
        '2SG' => 'E02004323',
        '2SJ' => 'E02004323',
        '2SL' => 'E02004323',
        '2SN' => 'E02004323',
        '2SP' => 'E02004323',
        '2SQ' => 'E02004323',
        '2SR' => 'E02004323',
        '2SS' => 'E02004323',
        '2ST' => 'E02004323',
        '2SU' => 'E02004323',
        '2SW' => 'E02004323',
        '2SX' => 'E02004323',
        '2SY' => 'E02004323',
        '2SZ' => 'E02004323',
        '2TA' => 'E02004323',
        '2TB' => 'E02004323',
        '2TD' => 'E02004323',
        '2TE' => 'E02004323',
        '2TF' => 'E02004323',
        '2TG' => 'E02004323',
        '2TH' => 'E02004323',
        '2TJ' => 'E02004323',
        '2TL' => 'E02004323',
        '2TN' => 'E02004323',
        '2TP' => 'E02004323',
        '2TQ' => 'E02004323',
        '2TR' => 'E02004323',
        '2TS' => 'E02004323',
        '2TT' => 'E02004323',
        '2TU' => 'E02004323',
        '2TW' => 'E02004323',
        '2TX' => 'E02004323',
        '2TY' => 'E02004323',
        '2UA' => 'E02004323',
        '2UB' => 'E02004323',
        '2UD' => 'E02004323',
        '2UE' => 'E02004323',
        '2UF' => 'E02004323',
        '2UG' => 'E02004323',
        '2UH' => 'E02004323',
        '2UJ' => 'E02004323',
        '2UL' => 'E02004323',
        '2UN' => 'E02004323',
        '2UP' => 'E02004323',
        '2UQ' => 'E02004323',
        '2UR' => 'E02004323',
        '2US' => 'E02004323',
        '2UT' => 'E02004323',
        '2UU' => 'E02004323',
        '2UW' => 'E02004323',
        '2UX' => 'E02004323',
        '2UY' => 'E02004323',
        '2UZ' => 'E02004323',
        '2XA' => 'E02004326',
        '2XB' => 'E02004326',
        '2XD' => 'E02004326',
        '2XE' => 'E02004326',
        '2XF' => 'E02004326',
        '2XG' => 'E02004323',
        '2XH' => 'E02004323',
        '2XJ' => 'E02004323',
        '2XL' => 'E02004323',
        '2XP' => 'E02004312',
        '2XQ' => 'E02004323',
        '2XR' => 'E02004326',
        '2XS' => 'E02004326',
        '2XT' => 'E02004326',
        '2YA' => 'E02004326',
        '2YB' => 'E02004326',
        '2YD' => 'E02004326',
        '2YE' => 'E02004326',
        '2YF' => 'E02004326',
        '2YG' => 'E02004326',
        '2YH' => 'E02004326',
        '2YJ' => 'E02004326',
        '2YL' => 'E02004326',
        '2YN' => 'E02004326',
        '2YP' => 'E02004326',
        '2YQ' => 'E02004326',
        '2YR' => 'E02004326',
        '2YS' => 'E02004326',
        '2YT' => 'E02004326',
        '2YU' => 'E02004326',
        '2YW' => 'E02004312',
        '2YX' => 'E02004326',
        '2YY' => 'E02004326',
        '2YZ' => 'E02004326',
        '3AA' => 'E02004331',
        '3AB' => 'E02004331',
        '3AD' => 'E02004331',
        '3AE' => 'E02004331',
        '3AF' => 'E02004331',
        '3AG' => 'E02004331',
        '3AH' => 'E02004331',
        '3AJ' => 'E02004331',
        '3AL' => 'E02004331',
        '3AN' => 'E02004331',
        '3AP' => 'E02004331',
        '3AQ' => 'E02004331',
        '3AR' => 'E02004331',
        '3AS' => 'E02004331',
        '3AT' => 'E02004331',
        '3AU' => 'E02004331',
        '3AW' => 'E02004331',
        '3AX' => 'E02004331',
        '3AY' => 'E02004331',
        '3AZ' => 'E02004331',
        '3BA' => 'E02004331',
        '3BB' => 'E02004331',
        '3BD' => 'E02004331',
        '3BE' => 'E02004331',
        '3BF' => 'E02004331',
        '3BG' => 'E02004331',
        '3BH' => 'E02004331',
        '3BJ' => 'E02004331',
        '3BL' => 'E02004331',
        '3BN' => 'E02004331',
        '3BP' => 'E02004331',
        '3BQ' => 'E02004331',
        '3DA' => 'E02004331',
        '3DB' => 'E02004331',
        '3DD' => 'E02004331',
        '3DE' => 'E02004331',
        '3DF' => 'E02004331',
        '3DG' => 'E02004331',
        '3DH' => 'E02004331',
        '3DJ' => 'E02004331',
        '3DL' => 'E02004331',
        '3DN' => 'E02004331',
        '3DP' => 'E02004331',
        '3DQ' => 'E02004331',
        '3DR' => 'E02004331',
        '3DS' => 'E02004331',
        '3DT' => 'E02004331',
        '3DU' => 'E02004331',
        '3DW' => 'E02004331',
        '3DX' => 'E02004331',
        '3DY' => 'E02004331',
        '3DZ' => 'E02004331',
        '3EA' => 'E02004331',
        '3EB' => 'E02004331',
        '3ED' => 'E02004331',
        '3EE' => 'E02004311',
        '3EF' => 'E02004331',
        '3EG' => 'E02004331',
        '3EH' => 'E02004331',
        '3EJ' => 'E02004331',
        '3EL' => 'E02004331',
        '3EN' => 'E02004331',
        '3EP' => 'E02004331',
        '3EQ' => 'E02004331',
        '3ER' => 'E02004331',
        '3ES' => 'E02004331',
        '3ET' => 'E02004331',
        '3EU' => 'E02004331',
        '3EW' => 'E02004331',
        '3EX' => 'E02004331',
        '3EY' => 'E02004331',
        '3EZ' => 'E02004331',
        '3FA' => 'E02004331',
        '3FB' => 'E02004331',
        '3GA' => 'E02004331',
        '3GZ' => 'E02004331',
        '3HA' => 'E02004331',
        '3HB' => 'E02004331',
        '3HD' => 'E02004331',
        '3HE' => 'E02004331',
        '3HF' => 'E02004331',
        '3HG' => 'E02004331',
        '3HH' => 'E02004331',
        '3HJ' => 'E02004331',
        '3HL' => 'E02004331',
        '3HN' => 'E02004331',
        '3HP' => 'E02004331',
        '3HQ' => 'E02004331',
        '3HR' => 'E02004331',
        '3HS' => 'E02004311',
        '3HT' => 'E02004331',
        '3HU' => 'E02004331',
        '3HW' => 'E02004331',
        '3HX' => 'E02004331',
        '3HY' => 'E02004331',
        '3HZ' => 'E02004331',
        '3JA' => 'E02004331',
        '3JG' => 'E02004331',
        '3JH' => 'E02004331',
        '3JJ' => 'E02004331',
        '3JL' => 'E02004331',
        '3JN' => 'E02004331',
        '3JP' => 'E02004331',
        '3JQ' => 'E02004331',
        '3JR' => 'E02004331',
        '3JS' => 'E02004331',
        '3JT' => 'E02004331',
        '3JU' => 'E02004331',
        '3JW' => 'E02004331',
        '3JX' => 'E02004331',
        '3JY' => 'E02004331',
        '3JZ' => 'E02004331',
        '3LA' => 'E02004331',
        '3LB' => 'E02004331',
        '3LD' => 'E02004331',
        '3LE' => 'E02004331',
        '3LF' => 'E02004331',
        '3LG' => 'E02004331',
        '3LH' => 'E02004331',
        '3LJ' => 'E02004331',
        '3LL' => 'E02004331',
        '3LN' => 'E02004331',
        '3LP' => 'E02004331',
        '3LQ' => 'E02004331',
        '3LR' => 'E02004331',
        '3LS' => 'E02004331',
        '3LT' => 'E02004331',
        '3LU' => 'E02004331',
        '3LW' => 'E02004331',
        '3LX' => 'E02004331',
        '3LY' => 'E02004331',
        '3LZ' => 'E02004331',
        '3NA' => 'E02004331',
        '3NB' => 'E02004331',
        '3ND' => 'E02004331',
        '3NE' => 'E02004331',
        '3NG' => 'E02004331',
        '3NH' => 'E02004331',
        '3NJ' => 'E02004331',
        '3NL' => 'E02004331',
        '3NN' => 'E02004331',
        '3NP' => 'E02004331',
        '3NQ' => 'E02004331',
        '3NR' => 'E02004331',
        '3NS' => 'E02004331',
        '3NT' => 'E02004331',
        '3NU' => 'E02004331',
        '3NW' => 'E02004331',
        '3NX' => 'E02004331',
        '3PA' => 'E02004331',
        '3PB' => 'E02004331',
        '3PD' => 'E02004331',
        '3PE' => 'E02004331',
        '3PF' => 'E02004331',
        '3PG' => 'E02004331',
        '3PH' => 'E02004331',
        '3PJ' => 'E02004331',
        '3PL' => 'E02004331',
        '3PN' => 'E02004331',
        '3PP' => 'E02004331',
        '3PQ' => 'E02004331',
        '3PR' => 'E02004331',
        '3PS' => 'E02004331',
        '3PT' => 'E02004331',
        '3PU' => 'E02004331',
        '3PW' => 'E02004331',
        '3PX' => 'E02004331',
        '3PY' => 'E02004331',
        '3PZ' => 'E02004331',
        '3QA' => 'E02004326',
        '3QB' => 'E02004326',
        '3QD' => 'E02004326',
        '3QE' => 'E02004326',
        '3QF' => 'E02004326',
        '3QG' => 'E02004326',
        '3QH' => 'E02004326',
        '3QJ' => 'E02004326',
        '3QL' => 'E02004326',
        '3QN' => 'E02004331',
        '3QP' => 'E02004331',
        '3QQ' => 'E02004331',
        '3QR' => 'E02004331',
        '3QS' => 'E02004331',
        '3QT' => 'E02004331',
        '3QU' => 'E02004331',
        '3QW' => 'E02004331',
        '3QX' => 'E02004331',
        '3QY' => 'E02004331',
        '3QZ' => 'E02004331',
        '3RA' => 'E02004331',
        '3RB' => 'E02004331',
        '3RD' => 'E02004331',
        '3RE' => 'E02004331',
        '3RF' => 'E02004331',
        '3RG' => 'E02004331',
        '3RH' => 'E02004331',
        '3RJ' => 'E02004331',
        '3RL' => 'E02004331',
        '3RN' => 'E02004331',
        '3RP' => 'E02004331',
        '3RQ' => 'E02004331',
        '3RR' => 'E02004331',
        '3RS' => 'E02004331',
        '3RT' => 'E02004331',
        '3RU' => 'E02004331',
        '3RW' => 'E02004331',
        '3RX' => 'E02004331',
        '3RY' => 'E02004331',
        '3RZ' => 'E02004331',
        '3SA' => 'E02004331',
        '3SB' => 'E02004331',
        '3SD' => 'E02004331',
        '3SJ' => 'E02004331',
        '3SL' => 'E02004331',
        '3WY' => 'E02004331',
        '3WZ' => 'E02004312',
        '3YX' => 'E02004331',
        '3YY' => 'E02004331',
        '3YZ' => 'E02004331',
        '4AA' => 'E02004319',
        '4AB' => 'E02004319',
        '4AD' => 'E02004319',
        '4AE' => 'E02004319',
        '4AF' => 'E02004319',
        '4AG' => 'E02004319',
        '4AH' => 'E02004319',
        '4AJ' => 'E02004319',
        '4AL' => 'E02004319',
        '4AN' => 'E02004319',
        '4AP' => 'E02004319',
        '4AQ' => 'E02004319',
        '4AR' => 'E02004319',
        '4AS' => 'E02004319',
        '4AT' => 'E02004319',
        '4AU' => 'E02004319',
        '4AW' => 'E02004319',
        '4AX' => 'E02004319',
        '4AY' => 'E02004319',
        '4AZ' => 'E02004319',
        '4BA' => 'E02004319',
        '4BB' => 'E02004319',
        '4BD' => 'E02004319',
        '4BE' => 'E02004319',
        '4BF' => 'E02004319',
        '4BG' => 'E02004319',
        '4BH' => 'E02004319',
        '4BJ' => 'E02004319',
        '4BN' => 'E02004319',
        '4BP' => 'E02004319',
        '4BQ' => 'E02004319',
        '4BS' => 'E02004319',
        '4BT' => 'E02004319',
        '4BU' => 'E02004319',
        '4BX' => 'E02004319',
        '4BZ' => 'E02004319',
        '4DA' => 'E02004319',
        '4DB' => 'E02004319',
        '4DD' => 'E02004319',
        '4DE' => 'E02004319',
        '4DF' => 'E02004319',
        '4DG' => 'E02004319',
        '4DH' => 'E02004319',
        '4DJ' => 'E02004319',
        '4DL' => 'E02004319',
        '4DN' => 'E02004319',
        '4DP' => 'E02004319',
        '4DQ' => 'E02004319',
        '4DR' => 'E02004319',
        '4DS' => 'E02004319',
        '4DT' => 'E02004319',
        '4DU' => 'E02004319',
        '4DW' => 'E02004319',
        '4DX' => 'E02004319',
        '4DY' => 'E02004319',
        '4DZ' => 'E02004319',
        '4EA' => 'E02004319',
        '4EB' => 'E02004319',
        '4ED' => 'E02004319',
        '4EE' => 'E02004319',
        '4EF' => 'E02004319',
        '4EG' => 'E02004319',
        '4EH' => 'E02004319',
        '4EJ' => 'E02004319',
        '4EL' => 'E02004319',
        '4EN' => 'E02004319',
        '4EP' => 'E02004319',
        '4EQ' => 'E02004319',
        '4ER' => 'E02004336',
        '4ES' => 'E02004319',
        '4ET' => 'E02004319',
        '4EU' => 'E02004336',
        '4EW' => 'E02004319',
        '4EX' => 'E02004319',
        '4EY' => 'E02004319',
        '4EZ' => 'E02004319',
        '4FA' => 'E02004319',
        '4FB' => 'E02004319',
        '4GA' => 'E02004319',
        '4GE' => 'E02004319',
        '4HA' => 'E02004319',
        '4HB' => 'E02004319',
        '4HD' => 'E02004319',
        '4HE' => 'E02004319',
        '4HF' => 'E02004319',
        '4HG' => 'E02004319',
        '4HH' => 'E02004319',
        '4HJ' => 'E02004319',
        '4HL' => 'E02004319',
        '4HN' => 'E02004319',
        '4HP' => 'E02004319',
        '4HQ' => 'E02004319',
        '4HR' => 'E02004319',
        '4HS' => 'E02004319',
        '4HT' => 'E02004319',
        '4HU' => 'E02004319',
        '4HW' => 'E02004319',
        '4HX' => 'E02004319',
        '4HY' => 'E02004319',
        '4HZ' => 'E02004319',
        '4JA' => 'E02004319',
        '4JB' => 'E02004319',
        '4JD' => 'E02004319',
        '4JE' => 'E02004319',
        '4JF' => 'E02004319',
        '4JG' => 'E02004319',
        '4JH' => 'E02004319',
        '4JJ' => 'E02004319',
        '4JL' => 'E02004318',
        '4JN' => 'E02004318',
        '4JP' => 'E02004318',
        '4JQ' => 'E02004318',
        '4JR' => 'E02004318',
        '4JS' => 'E02004319',
        '4JT' => 'E02004319',
        '4JU' => 'E02004319',
        '4JW' => 'E02004318',
        '4JX' => 'E02004319',
        '4JY' => 'E02004319',
        '4JZ' => 'E02004319',
        '4LA' => 'E02004319',
        '4LB' => 'E02004319',
        '4LD' => 'E02004319',
        '4LE' => 'E02004319',
        '4LF' => 'E02004319',
        '4LG' => 'E02004319',
        '4LH' => 'E02004319',
        '4LJ' => 'E02004318',
        '4LL' => 'E02004319',
        '4LN' => 'E02004319',
        '4LP' => 'E02004319',
        '4LQ' => 'E02004318',
        '4LR' => 'E02004319',
        '4LS' => 'E02004319',
        '4LT' => 'E02004319',
        '4LU' => 'E02004319',
        '4LX' => 'E02004319',
        '4LY' => 'E02004319',
        '4LZ' => 'E02004319',
        '4NA' => 'E02004319',
        '4NB' => 'E02004319',
        '4ND' => 'E02004319',
        '4NE' => 'E02004319',
        '4NF' => 'E02004319',
        '4NG' => 'E02004319',
        '4NH' => 'E02004319',
        '4NJ' => 'E02004319',
        '4NL' => 'E02004319',
        '4NN' => 'E02004319',
        '4NP' => 'E02004319',
        '4NQ' => 'E02004319',
        '4NR' => 'E02004319',
        '4NS' => 'E02004319',
        '4NT' => 'E02004319',
        '4NU' => 'E02004319',
        '4NW' => 'E02004319',
        '4NX' => 'E02004319',
        '4PA' => 'E02004319',
        '4PB' => 'E02004319',
        '4PD' => 'E02004319',
        '4PE' => 'E02004319',
        '4PF' => 'E02004319',
        '4PG' => 'E02004319',
        '4PH' => 'E02004319',
        '4PJ' => 'E02004319',
        '4PL' => 'E02004319',
        '4PN' => 'E02004319',
        '4PP' => 'E02004319',
        '4PQ' => 'E02004319',
        '4PR' => 'E02004319',
        '4PS' => 'E02004319',
        '4PT' => 'E02004319',
        '4PW' => 'E02004319',
        '4QA' => 'E02004319',
        '4QB' => 'E02004319',
        '4QD' => 'E02004319',
        '4QE' => 'E02004319',
        '4QF' => 'E02004319',
        '4QG' => 'E02004319',
        '4QH' => 'E02004319',
        '4QJ' => 'E02004319',
        '4QL' => 'E02004319',
        '4QN' => 'E02004319',
        '4QP' => 'E02004319',
        '4QQ' => 'E02004319',
        '4QR' => 'E02004319',
        '4QS' => 'E02004319',
        '4QT' => 'E02004319',
        '4QU' => 'E02004319',
        '4QW' => 'E02004319',
        '4QX' => 'E02004319',
        '4QY' => 'E02004319',
        '4QZ' => 'E02004319',
        '4RA' => 'E02004319',
        '4RB' => 'E02004319',
        '4RD' => 'E02004319',
        '4RE' => 'E02004319',
        '4RF' => 'E02004319',
        '4RG' => 'E02004319',
        '4RH' => 'E02004319',
        '4RJ' => 'E02004319',
        '4RL' => 'E02004319',
        '4RN' => 'E02004319',
        '4RP' => 'E02004319',
        '4RQ' => 'E02004331',
        '4RR' => 'E02004319',
        '4RS' => 'E02004319',
        '4RT' => 'E02004319',
        '4RU' => 'E02004319',
        '4RW' => 'E02004319',
        '4SA' => 'E02004319',
        '4SB' => 'E02004319',
        '4SD' => 'E02004319',
        '4SE' => 'E02004319',
        '4SF' => 'E02004319',
        '4SG' => 'E02004319',
        '4SH' => 'E02004319',
        '4SJ' => 'E02004319',
        '4SL' => 'E02004319',
        '4SN' => 'E02004319',
        '4SP' => 'E02004319',
        '4SQ' => 'E02004319',
        '4SR' => 'E02004319',
        '4SS' => 'E02004319',
        '4ST' => 'E02004319',
        '4SW' => 'E02004319',
        '4SZ' => 'E02004319',
        '4YP' => 'E02004319',
        '4YR' => 'E02004319',
        '4YS' => 'E02004312',
        '4YT' => 'E02004312',
        '4YU' => 'E02004312',
        '4YW' => 'E02004314',
        '4YX' => 'E02004314',
        '4YY' => 'E02004319',
        '5AA' => 'E02004318',
        '5AB' => 'E02004318',
        '5AD' => 'E02004318',
        '5AE' => 'E02004318',
        '5AF' => 'E02004318',
        '5AG' => 'E02004318',
        '5AH' => 'E02004318',
        '5AJ' => 'E02004318',
        '5AL' => 'E02004318',
        '5AN' => 'E02004318',
        '5AP' => 'E02004318',
        '5AQ' => 'E02004318',
        '5AR' => 'E02004318',
        '5AS' => 'E02004318',
        '5AT' => 'E02004318',
        '5AU' => 'E02004318',
        '5AW' => 'E02004318',
        '5AX' => 'E02004318',
        '5AY' => 'E02004318',
        '5AZ' => 'E02004318',
        '5BA' => 'E02004318',
        '5BB' => 'E02004318',
        '5BD' => 'E02004318',
        '5BE' => 'E02004318',
        '5BF' => 'E02004318',
        '5BG' => 'E02004318',
        '5BH' => 'E02004318',
        '5BJ' => 'E02004318',
        '5BL' => 'E02004318',
        '5BN' => 'E02004318',
        '5BP' => 'E02004318',
        '5BQ' => 'E02004318',
        '5BU' => 'E02004318',
        '5BW' => 'E02004318',
        '5BX' => 'E02004318',
        '5BY' => 'E02004318',
        '5BZ' => 'E02004318',
        '5DA' => 'E02004318',
        '5DB' => 'E02004318',
        '5DD' => 'E02004319',
        '5DE' => 'E02004319',
        '5DF' => 'E02004319',
        '5DG' => 'E02004318',
        '5DH' => 'E02004318',
        '5DJ' => 'E02004318',
        '5DL' => 'E02004318',
        '5DN' => 'E02004318',
        '5DP' => 'E02004318',
        '5DQ' => 'E02004318',
        '5DR' => 'E02004318',
        '5DS' => 'E02004318',
        '5DT' => 'E02004318',
        '5DU' => 'E02004318',
        '5DW' => 'E02004318',
        '5DX' => 'E02004318',
        '5DY' => 'E02004318',
        '5DZ' => 'E02004318',
        '5EA' => 'E02004318',
        '5EB' => 'E02004318',
        '5ED' => 'E02004318',
        '5EE' => 'E02004318',
        '5EF' => 'E02004319',
        '5EG' => 'E02004319',
        '5EH' => 'E02004318',
        '5EJ' => 'E02004319',
        '5EL' => 'E02004318',
        '5EN' => 'E02004319',
        '5EP' => 'E02004318',
        '5EQ' => 'E02004318',
        '5ER' => 'E02004318',
        '5ES' => 'E02004318',
        '5ET' => 'E02004318',
        '5EU' => 'E02004318',
        '5EW' => 'E02004318',
        '5EX' => 'E02004318',
        '5EY' => 'E02004318',
        '5EZ' => 'E02004318',
        '5FA' => 'E02004319',
        '5FB' => 'E02004318',
        '5FD' => 'E02004319',
        '5FE' => 'E02004319',
        '5FF' => 'E02004318',
        '5FG' => 'E02004318',
        '5FH' => 'E02004318',
        '5GA' => 'E02004319',
        '5GZ' => 'E02004318',
        '5HA' => 'E02004318',
        '5HB' => 'E02004318',
        '5HD' => 'E02004318',
        '5HE' => 'E02004318',
        '5HF' => 'E02004318',
        '5HG' => 'E02004318',
        '5HH' => 'E02004318',
        '5HJ' => 'E02004318',
        '5HL' => 'E02004318',
        '5HN' => 'E02004318',
        '5HP' => 'E02004318',
        '5HQ' => 'E02004318',
        '5HR' => 'E02004318',
        '5HS' => 'E02004318',
        '5HT' => 'E02004318',
        '5HU' => 'E02004318',
        '5HW' => 'E02004318',
        '5HX' => 'E02004318',
        '5HY' => 'E02004318',
        '5HZ' => 'E02004318',
        '5JA' => 'E02004318',
        '5JB' => 'E02004318',
        '5JD' => 'E02004333',
        '5JE' => 'E02004318',
        '5JJ' => 'E02004315',
        '5JL' => 'E02004318',
        '5JN' => 'E02004318',
        '5JP' => 'E02004318',
        '5JQ' => 'E02004315',
        '5JR' => 'E02004318',
        '5JS' => 'E02004318',
        '5JT' => 'E02004318',
        '5JU' => 'E02004318',
        '5JW' => 'E02004318',
        '5JX' => 'E02004318',
        '5JY' => 'E02004318',
        '5JZ' => 'E02004335',
        '5LA' => 'E02004318',
        '5LB' => 'E02004336',
        '5LD' => 'E02004336',
        '5LE' => 'E02004318',
        '5LF' => 'E02004336',
        '5LG' => 'E02004336',
        '5LH' => 'E02004318',
        '5LJ' => 'E02004318',
        '5LL' => 'E02004318',
        '5LN' => 'E02004318',
        '5LP' => 'E02004318',
        '5LQ' => 'E02004336',
        '5LR' => 'E02004318',
        '5LS' => 'E02004318',
        '5LT' => 'E02004318',
        '5LU' => 'E02004318',
        '5LW' => 'E02004318',
        '5LX' => 'E02004318',
        '5LY' => 'E02004318',
        '5LZ' => 'E02004318',
        '5NA' => 'E02004318',
        '5NB' => 'E02004318',
        '5ND' => 'E02004318',
        '5NE' => 'E02004318',
        '5NF' => 'E02004318',
        '5NG' => 'E02004318',
        '5NH' => 'E02004319',
        '5NJ' => 'E02004319',
        '5NL' => 'E02004319',
        '5NN' => 'E02004319',
        '5NP' => 'E02004318',
        '5NQ' => 'E02004318',
        '5NR' => 'E02004318',
        '5NS' => 'E02004318',
        '5NT' => 'E02004318',
        '5NU' => 'E02004336',
        '5NW' => 'E02004319',
        '5NX' => 'E02004336',
        '5NY' => 'E02004318',
        '5NZ' => 'E02004318',
        '5PA' => 'E02004336',
        '5PB' => 'E02004336',
        '5PD' => 'E02004319',
        '5PE' => 'E02004318',
        '5PF' => 'E02004318',
        '5PG' => 'E02004318',
        '5PH' => 'E02004318',
        '5PJ' => 'E02004318',
        '5PL' => 'E02004318',
        '5PN' => 'E02004318',
        '5PS' => 'E02004319',
        '5QA' => 'E02004318',
        '5QB' => 'E02004318',
        '5QD' => 'E02004318',
        '5WA' => 'E02004312',
        '5WU' => 'E02004318',
        '5WW' => 'E02004318',
        '5WY' => 'E02004312',
        '5WZ' => 'E02004312',
        '5XA' => 'E02004318',
        '5XB' => 'E02004318',
        '5XD' => 'E02004318',
        '5XE' => 'E02004314',
        '5XF' => 'E02004312',
        '5XG' => 'E02004314',
        '5XH' => 'E02004314',
        '5XJ' => 'E02004312',
        '5XQ' => 'E02004314',
        '5YY' => 'E02004312',
        '5YZ' => 'E02004314',
        '5ZZ' => 'E02004314',
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
