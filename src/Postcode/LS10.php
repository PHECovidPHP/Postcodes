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
final class LS10
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02006876',
        '1AB' => 'E02006876',
        '1AD' => 'E02002414',
        '1AE' => 'E02006876',
        '1AF' => 'E02006876',
        '1AG' => 'E02002414',
        '1AH' => 'E02002414',
        '1AJ' => 'E02006875',
        '1AL' => 'E02002414',
        '1AN' => 'E02006876',
        '1AP' => 'E02006875',
        '1AQ' => 'E02002414',
        '1AR' => 'E02006875',
        '1AS' => 'E02006875',
        '1AT' => 'E02006875',
        '1AU' => 'E02006875',
        '1AW' => 'E02006875',
        '1AX' => 'E02006876',
        '1AY' => 'E02006876',
        '1AZ' => 'E02006876',
        '1BA' => 'E02006876',
        '1BB' => 'E02006875',
        '1BD' => 'E02006875',
        '1BE' => 'E02006875',
        '1BF' => 'E02002414',
        '1BG' => 'E02002414',
        '1BH' => 'E02002414',
        '1BJ' => 'E02006876',
        '1BL' => 'E02006876',
        '1BN' => 'E02002414',
        '1BP' => 'E02006876',
        '1BQ' => 'E02006876',
        '1BR' => 'E02002414',
        '1BS' => 'E02002414',
        '1BT' => 'E02002414',
        '1BU' => 'E02006875',
        '1BW' => 'E02006876',
        '1BX' => 'E02002414',
        '1BY' => 'E02006876',
        '1BZ' => 'E02006876',
        '1DA' => 'E02006876',
        '1DB' => 'E02006876',
        '1DD' => 'E02006876',
        '1DE' => 'E02006876',
        '1DF' => 'E02006876',
        '1DG' => 'E02006876',
        '1DH' => 'E02006876',
        '1DJ' => 'E02006876',
        '1DL' => 'E02002414',
        '1DN' => 'E02002414',
        '1DP' => 'E02006876',
        '1DQ' => 'E02006876',
        '1DR' => 'E02006876',
        '1DS' => 'E02006876',
        '1DT' => 'E02006876',
        '1DU' => 'E02006876',
        '1DW' => 'E02006876',
        '1DX' => 'E02006876',
        '1DY' => 'E02006876',
        '1DZ' => 'E02006876',
        '1EA' => 'E02006876',
        '1EB' => 'E02006876',
        '1ED' => 'E02006876',
        '1EE' => 'E02006876',
        '1EF' => 'E02006876',
        '1EG' => 'E02006876',
        '1EH' => 'E02006876',
        '1EJ' => 'E02006876',
        '1EL' => 'E02006876',
        '1EN' => 'E02006876',
        '1EP' => 'E02006876',
        '1EQ' => 'E02006876',
        '1ER' => 'E02006876',
        '1ES' => 'E02006875',
        '1ET' => 'E02006875',
        '1EU' => 'E02006875',
        '1EW' => 'E02006875',
        '1EX' => 'E02006876',
        '1EZ' => 'E02006876',
        '1GA' => 'E02006876',
        '1GB' => 'E02006876',
        '1GD' => 'E02006876',
        '1GE' => 'E02006876',
        '1GF' => 'E02006876',
        '1GG' => 'E02006876',
        '1GH' => 'E02006876',
        '1GJ' => 'E02006876',
        '1GL' => 'E02006876',
        '1GN' => 'E02006876',
        '1GX' => 'E02006876',
        '1GY' => 'E02006876',
        '1GZ' => 'E02006876',
        '1HA' => 'E02006876',
        '1HB' => 'E02006876',
        '1HD' => 'E02006876',
        '1HE' => 'E02006876',
        '1HF' => 'E02006876',
        '1HG' => 'E02006876',
        '1HH' => 'E02006876',
        '1HJ' => 'E02006876',
        '1HL' => 'E02006876',
        '1HN' => 'E02006876',
        '1HP' => 'E02006876',
        '1HQ' => 'E02006876',
        '1HR' => 'E02006876',
        '1HS' => 'E02006876',
        '1HT' => 'E02006876',
        '1HU' => 'E02006876',
        '1HW' => 'E02006876',
        '1HX' => 'E02006876',
        '1HY' => 'E02006876',
        '1HZ' => 'E02006876',
        '1JA' => 'E02006875',
        '1JB' => 'E02006876',
        '1JD' => 'E02006875',
        '1JE' => 'E02006876',
        '1JF' => 'E02006875',
        '1JG' => 'E02006876',
        '1JH' => 'E02006875',
        '1JJ' => 'E02006875',
        '1JL' => 'E02006875',
        '1JN' => 'E02006875',
        '1JP' => 'E02006876',
        '1JQ' => 'E02006875',
        '1JR' => 'E02002331',
        '1JS' => 'E02006875',
        '1JT' => 'E02006876',
        '1JU' => 'E02006876',
        '1JW' => 'E02006875',
        '1JX' => 'E02006876',
        '1JY' => 'E02006876',
        '1JZ' => 'E02006876',
        '1LA' => 'E02006876',
        '1LB' => 'E02006876',
        '1LD' => 'E02006876',
        '1LE' => 'E02006876',
        '1LF' => 'E02006876',
        '1LG' => 'E02006876',
        '1LH' => 'E02006876',
        '1LJ' => 'E02006876',
        '1LL' => 'E02006876',
        '1LN' => 'E02006876',
        '1LP' => 'E02006876',
        '1LQ' => 'E02006876',
        '1LR' => 'E02006876',
        '1LS' => 'E02006876',
        '1LT' => 'E02006876',
        '1LU' => 'E02006876',
        '1LW' => 'E02006876',
        '1LX' => 'E02006875',
        '1LY' => 'E02006876',
        '1LZ' => 'E02006876',
        '1NA' => 'E02006875',
        '1NB' => 'E02006875',
        '1ND' => 'E02006876',
        '1NE' => 'E02006876',
        '1NF' => 'E02006876',
        '1NG' => 'E02006876',
        '1NH' => 'E02006876',
        '1NJ' => 'E02006876',
        '1NL' => 'E02006876',
        '1NN' => 'E02006876',
        '1NP' => 'E02006876',
        '1NQ' => 'E02006876',
        '1NR' => 'E02006876',
        '1NS' => 'E02006876',
        '1NT' => 'E02006876',
        '1NU' => 'E02006876',
        '1NW' => 'E02006876',
        '1NX' => 'E02006876',
        '1NY' => 'E02006876',
        '1NZ' => 'E02006876',
        '1PA' => 'E02006876',
        '1PB' => 'E02006876',
        '1PD' => 'E02006876',
        '1PE' => 'E02006876',
        '1PF' => 'E02006876',
        '1PG' => 'E02006876',
        '1PH' => 'E02006876',
        '1PJ' => 'E02006876',
        '1PL' => 'E02006876',
        '1PN' => 'E02002421',
        '1PP' => 'E02006876',
        '1PQ' => 'E02002421',
        '1PR' => 'E02006876',
        '1PS' => 'E02006876',
        '1PT' => 'E02006876',
        '1PU' => 'E02006876',
        '1PW' => 'E02006876',
        '1PX' => 'E02006875',
        '1PY' => 'E02006876',
        '1PZ' => 'E02006876',
        '1QA' => 'E02006876',
        '1QB' => 'E02006876',
        '1QD' => 'E02006876',
        '1QE' => 'E02006876',
        '1QF' => 'E02006876',
        '1QG' => 'E02006876',
        '1QH' => 'E02006876',
        '1QJ' => 'E02006876',
        '1QL' => 'E02006876',
        '1QN' => 'E02006875',
        '1QP' => 'E02006876',
        '1QQ' => 'E02006876',
        '1QR' => 'E02006876',
        '1QS' => 'E02006876',
        '1QZ' => 'E02006876',
        '1RA' => 'E02006876',
        '1RB' => 'E02006876',
        '1RD' => 'E02006876',
        '1RE' => 'E02006876',
        '1RF' => 'E02006876',
        '1RG' => 'E02006876',
        '1RH' => 'E02006876',
        '1RJ' => 'E02006876',
        '1RL' => 'E02006876',
        '1RN' => 'E02006876',
        '1RP' => 'E02006876',
        '1RQ' => 'E02006876',
        '1RR' => 'E02002399',
        '1RS' => 'E02002399',
        '1RT' => 'E02006876',
        '1RU' => 'E02006876',
        '1RW' => 'E02006876',
        '1RX' => 'E02006876',
        '1RY' => 'E02006876',
        '1RZ' => 'E02006876',
        '1SA' => 'E02006876',
        '1SB' => 'E02006876',
        '1SD' => 'E02006876',
        '1SE' => 'E02006876',
        '1SF' => 'E02006876',
        '1SG' => 'E02006876',
        '1SH' => 'E02006876',
        '1SJ' => 'E02006876',
        '1SL' => 'E02006876',
        '1SN' => 'E02006876',
        '1SP' => 'E02006876',
        '1SQ' => 'E02006876',
        '1SR' => 'E02006876',
        '1SS' => 'E02006876',
        '1ST' => 'E02006876',
        '1SU' => 'E02006876',
        '1SW' => 'E02006876',
        '1SX' => 'E02006876',
        '1SY' => 'E02006876',
        '1SZ' => 'E02006876',
        '1TA' => 'E02002429',
        '1TB' => 'E02006876',
        '1TD' => 'E02006876',
        '1TE' => 'E02006876',
        '1TF' => 'E02006876',
        '1TG' => 'E02006876',
        '1TH' => 'E02006876',
        '1TJ' => 'E02006876',
        '1TL' => 'E02006876',
        '1TN' => 'E02006876',
        '1TP' => 'E02006876',
        '1TQ' => 'E02006876',
        '1TR' => 'E02006876',
        '1TS' => 'E02006876',
        '1TT' => 'E02006876',
        '1TU' => 'E02006876',
        '1TW' => 'E02006876',
        '1TX' => 'E02006876',
        '1TZ' => 'E02006876',
        '1UA' => 'E02006876',
        '1UB' => 'E02006876',
        '1UD' => 'E02006876',
        '1UE' => 'E02006876',
        '1UF' => 'E02006876',
        '1UG' => 'E02006876',
        '1UH' => 'E02006876',
        '1UJ' => 'E02002421',
        '1UL' => 'E02006876',
        '1UN' => 'E02006876',
        '1UP' => 'E02002421',
        '1UQ' => 'E02006876',
        '1UR' => 'E02006876',
        '1UT' => 'E02006876',
        '1UU' => 'E02006876',
        '1UW' => 'E02006876',
        '1UX' => 'E02006876',
        '1UY' => 'E02002421',
        '1WA' => 'E02002421',
        '1WT' => 'E02002421',
        '1WU' => 'E02002421',
        '1WW' => 'E02002421',
        '1WX' => 'E02002421',
        '1WY' => 'E02002421',
        '1WZ' => 'E02002421',
        '1XA' => 'E02002421',
        '1XB' => 'E02006876',
        '1XN' => 'E02006876',
        '1XQ' => 'E02006876',
        '1XR' => 'E02002421',
        '1XS' => 'E02006876',
        '1XU' => 'E02002421',
        '1XW' => 'E02002421',
        '1XZ' => 'E02006876',
        '1YX' => 'E02006876',
        '1YY' => 'E02006876',
        '2AA' => 'E02006876',
        '2AB' => 'E02006876',
        '2AD' => 'E02006876',
        '2AE' => 'E02006876',
        '2AF' => 'E02006876',
        '2AG' => 'E02006876',
        '2AH' => 'E02006876',
        '2AJ' => 'E02006876',
        '2AL' => 'E02006876',
        '2AN' => 'E02006876',
        '2AP' => 'E02006876',
        '2AQ' => 'E02006876',
        '2AR' => 'E02006876',
        '2AS' => 'E02006876',
        '2AT' => 'E02006876',
        '2AU' => 'E02006876',
        '2AW' => 'E02006876',
        '2AX' => 'E02002421',
        '2AY' => 'E02006876',
        '2AZ' => 'E02006876',
        '2BA' => 'E02006876',
        '2BB' => 'E02006876',
        '2BD' => 'E02006876',
        '2BE' => 'E02006876',
        '2BF' => 'E02006876',
        '2BG' => 'E02006876',
        '2BH' => 'E02006876',
        '2BQ' => 'E02006876',
        '2BR' => 'E02006876',
        '2BS' => 'E02006876',
        '2BT' => 'E02006876',
        '2BW' => 'E02002421',
        '2BX' => 'E02006876',
        '2DD' => 'E02006876',
        '2DE' => 'E02006876',
        '2DF' => 'E02002421',
        '2DG' => 'E02002421',
        '2DH' => 'E02002421',
        '2DJ' => 'E02002421',
        '2DL' => 'E02006876',
        '2DN' => 'E02002421',
        '2DP' => 'E02002421',
        '2DQ' => 'E02002421',
        '2DR' => 'E02002421',
        '2DS' => 'E02002421',
        '2DT' => 'E02002421',
        '2DU' => 'E02002421',
        '2DW' => 'E02002421',
        '2DX' => 'E02002421',
        '2DY' => 'E02002421',
        '2DZ' => 'E02002421',
        '2EA' => 'E02002421',
        '2EB' => 'E02002421',
        '2ED' => 'E02002421',
        '2EE' => 'E02002421',
        '2EF' => 'E02006876',
        '2EG' => 'E02002421',
        '2EH' => 'E02006876',
        '2EJ' => 'E02006876',
        '2EL' => 'E02006876',
        '2EN' => 'E02006876',
        '2EP' => 'E02006876',
        '2EQ' => 'E02002421',
        '2ER' => 'E02006876',
        '2ES' => 'E02006876',
        '2ET' => 'E02006876',
        '2EU' => 'E02006876',
        '2EW' => 'E02006876',
        '2EX' => 'E02006876',
        '2EY' => 'E02006876',
        '2EZ' => 'E02006876',
        '2HA' => 'E02006876',
        '2HB' => 'E02006876',
        '2HD' => 'E02006876',
        '2HE' => 'E02006876',
        '2HF' => 'E02006876',
        '2HL' => 'E02002421',
        '2HN' => 'E02002421',
        '2HP' => 'E02006876',
        '2HR' => 'E02006876',
        '2HS' => 'E02006876',
        '2HT' => 'E02002421',
        '2HU' => 'E02006876',
        '2HW' => 'E02006876',
        '2HX' => 'E02006876',
        '2HZ' => 'E02006876',
        '2JA' => 'E02006876',
        '2JD' => 'E02006876',
        '2JG' => 'E02006876',
        '2JH' => 'E02006876',
        '2JJ' => 'E02006876',
        '2JL' => 'E02006876',
        '2JP' => 'E02006876',
        '2JQ' => 'E02002421',
        '2JR' => 'E02006876',
        '2JS' => 'E02002421',
        '2JU' => 'E02002421',
        '2JW' => 'E02002421',
        '2LA' => 'E02006876',
        '2LB' => 'E02006876',
        '2LD' => 'E02006876',
        '2LE' => 'E02006876',
        '2LF' => 'E02006876',
        '2LG' => 'E02006876',
        '2LH' => 'E02002421',
        '2LJ' => 'E02006876',
        '2LN' => 'E02006876',
        '2LR' => 'E02006876',
        '2LS' => 'E02006876',
        '2LT' => 'E02006876',
        '2LU' => 'E02002421',
        '2LW' => 'E02002421',
        '2LX' => 'E02006876',
        '2LY' => 'E02002421',
        '2LZ' => 'E02002421',
        '2NA' => 'E02006876',
        '2NB' => 'E02002421',
        '2ND' => 'E02002421',
        '2NE' => 'E02002421',
        '2NF' => 'E02006876',
        '2NG' => 'E02006876',
        '2NH' => 'E02006876',
        '2NJ' => 'E02006876',
        '2NL' => 'E02006876',
        '2NN' => 'E02006876',
        '2NP' => 'E02006876',
        '2NQ' => 'E02006876',
        '2NR' => 'E02006876',
        '2NS' => 'E02006876',
        '2NT' => 'E02006876',
        '2NU' => 'E02006876',
        '2NW' => 'E02006876',
        '2NX' => 'E02006876',
        '2NZ' => 'E02006876',
        '2PB' => 'E02006876',
        '2PD' => 'E02006876',
        '2PE' => 'E02006876',
        '2PF' => 'E02006876',
        '2PG' => 'E02006876',
        '2PH' => 'E02006876',
        '2PJ' => 'E02006876',
        '2PL' => 'E02006876',
        '2PN' => 'E02006876',
        '2PP' => 'E02006876',
        '2PQ' => 'E02006876',
        '2PR' => 'E02006876',
        '2PS' => 'E02006876',
        '2PT' => 'E02006876',
        '2PU' => 'E02006876',
        '2PW' => 'E02006876',
        '2PX' => 'E02006876',
        '2PY' => 'E02006876',
        '2PZ' => 'E02006876',
        '2QA' => 'E02006876',
        '2QB' => 'E02006876',
        '2QD' => 'E02006876',
        '2QE' => 'E02006876',
        '2QF' => 'E02006876',
        '2QG' => 'E02006876',
        '2QH' => 'E02006876',
        '2QJ' => 'E02006876',
        '2QL' => 'E02006876',
        '2QN' => 'E02006876',
        '2QP' => 'E02006876',
        '2QR' => 'E02006876',
        '2QT' => 'E02006876',
        '2QW' => 'E02006876',
        '2QY' => 'E02006876',
        '2QZ' => 'E02006876',
        '2RA' => 'E02006876',
        '2RD' => 'E02006876',
        '2RE' => 'E02006876',
        '2RF' => 'E02006876',
        '2RJ' => 'E02006876',
        '2RL' => 'E02006876',
        '2RN' => 'E02006876',
        '2RP' => 'E02002421',
        '2RR' => 'E02002421',
        '2RS' => 'E02002421',
        '2RU' => 'E02006876',
        '2RW' => 'E02002421',
        '2RY' => 'E02006876',
        '2SE' => 'E02006876',
        '2SJ' => 'E02006876',
        '2SL' => 'E02006876',
        '2SN' => 'E02006876',
        '2SR' => 'E02006876',
        '2ST' => 'E02006876',
        '2SX' => 'E02006876',
        '2SZ' => 'E02006876',
        '2TA' => 'E02006876',
        '2TB' => 'E02006876',
        '2TD' => 'E02006876',
        '2TF' => 'E02006876',
        '2TH' => 'E02006876',
        '2TJ' => 'E02002421',
        '2TL' => 'E02006876',
        '2TP' => 'E02006876',
        '2TR' => 'E02006876',
        '2TS' => 'E02006876',
        '2TT' => 'E02006876',
        '2TU' => 'E02006876',
        '2TW' => 'E02006876',
        '2TX' => 'E02006876',
        '2TY' => 'E02006876',
        '2TZ' => 'E02006876',
        '2UA' => 'E02006876',
        '2UB' => 'E02006876',
        '2UD' => 'E02006876',
        '2WA' => 'E02002421',
        '2WX' => 'E02006876',
        '2WY' => 'E02006876',
        '2WZ' => 'E02006876',
        '2XA' => 'E02006876',
        '2XB' => 'E02006876',
        '2XD' => 'E02006876',
        '2XE' => 'E02006876',
        '2XF' => 'E02002421',
        '2XG' => 'E02002421',
        '2XH' => 'E02006876',
        '2XJ' => 'E02002421',
        '2XL' => 'E02006876',
        '2XN' => 'E02006876',
        '2XP' => 'E02002421',
        '2XQ' => 'E02006876',
        '2XR' => 'E02002421',
        '2XS' => 'E02002421',
        '2XT' => 'E02002421',
        '2XU' => 'E02002421',
        '3AA' => 'E02002423',
        '3AB' => 'E02002421',
        '3AD' => 'E02002421',
        '3AE' => 'E02002421',
        '3AF' => 'E02002421',
        '3AG' => 'E02002421',
        '3AH' => 'E02002421',
        '3AJ' => 'E02002421',
        '3AL' => 'E02002421',
        '3AN' => 'E02002421',
        '3AP' => 'E02002421',
        '3AQ' => 'E02002421',
        '3AR' => 'E02002421',
        '3AS' => 'E02002421',
        '3AT' => 'E02002421',
        '3AU' => 'E02002421',
        '3AW' => 'E02002421',
        '3AX' => 'E02002421',
        '3AY' => 'E02002421',
        '3AZ' => 'E02002421',
        '3BA' => 'E02002421',
        '3BB' => 'E02002421',
        '3BD' => 'E02002421',
        '3BE' => 'E02002421',
        '3BF' => 'E02002421',
        '3BG' => 'E02002421',
        '3BH' => 'E02002421',
        '3BJ' => 'E02002421',
        '3BL' => 'E02002421',
        '3BN' => 'E02006876',
        '3BP' => 'E02002421',
        '3BQ' => 'E02002421',
        '3BR' => 'E02006876',
        '3BS' => 'E02006876',
        '3BT' => 'E02002423',
        '3BW' => 'E02006876',
        '3BX' => 'E02006876',
        '3BZ' => 'E02006876',
        '3DA' => 'E02006876',
        '3DB' => 'E02006876',
        '3DD' => 'E02006876',
        '3DE' => 'E02006876',
        '3DF' => 'E02002421',
        '3DG' => 'E02006876',
        '3DH' => 'E02002428',
        '3DJ' => 'E02006876',
        '3DL' => 'E02002423',
        '3DN' => 'E02002421',
        '3DP' => 'E02002421',
        '3DQ' => 'E02006876',
        '3DR' => 'E02002421',
        '3DS' => 'E02002421',
        '3DT' => 'E02002421',
        '3DU' => 'E02002421',
        '3DW' => 'E02002421',
        '3DX' => 'E02002421',
        '3DY' => 'E02002421',
        '3DZ' => 'E02002423',
        '3EA' => 'E02002421',
        '3EB' => 'E02002421',
        '3ED' => 'E02002421',
        '3EE' => 'E02002421',
        '3EF' => 'E02002421',
        '3EG' => 'E02002421',
        '3EH' => 'E02002421',
        '3EJ' => 'E02002421',
        '3EL' => 'E02002421',
        '3EN' => 'E02002421',
        '3EP' => 'E02002428',
        '3EQ' => 'E02002421',
        '3ER' => 'E02002421',
        '3ES' => 'E02002421',
        '3ET' => 'E02002421',
        '3EU' => 'E02002421',
        '3EW' => 'E02002421',
        '3EX' => 'E02002421',
        '3EY' => 'E02002421',
        '3EZ' => 'E02002423',
        '3HA' => 'E02002423',
        '3HB' => 'E02002428',
        '3HD' => 'E02002423',
        '3HE' => 'E02002428',
        '3HF' => 'E02002421',
        '3HG' => 'E02002421',
        '3HH' => 'E02002421',
        '3HJ' => 'E02002421',
        '3HL' => 'E02002421',
        '3HN' => 'E02002421',
        '3HP' => 'E02002421',
        '3HQ' => 'E02002421',
        '3HR' => 'E02002421',
        '3HS' => 'E02002421',
        '3HT' => 'E02002421',
        '3HU' => 'E02002421',
        '3HW' => 'E02002421',
        '3HX' => 'E02002421',
        '3HY' => 'E02002421',
        '3HZ' => 'E02002421',
        '3JA' => 'E02002421',
        '3JB' => 'E02002423',
        '3JD' => 'E02002423',
        '3JE' => 'E02002423',
        '3JF' => 'E02002423',
        '3JG' => 'E02002423',
        '3JH' => 'E02002423',
        '3JJ' => 'E02002423',
        '3JL' => 'E02002423',
        '3JN' => 'E02002423',
        '3JP' => 'E02002423',
        '3JQ' => 'E02002423',
        '3JR' => 'E02002423',
        '3JS' => 'E02002423',
        '3JT' => 'E02002423',
        '3JU' => 'E02002423',
        '3JW' => 'E02002423',
        '3JX' => 'E02002423',
        '3JY' => 'E02002423',
        '3JZ' => 'E02002423',
        '3LA' => 'E02002423',
        '3LB' => 'E02002423',
        '3LD' => 'E02002423',
        '3LE' => 'E02002423',
        '3LF' => 'E02002423',
        '3LG' => 'E02002423',
        '3LH' => 'E02002423',
        '3LJ' => 'E02002423',
        '3LL' => 'E02002423',
        '3LN' => 'E02002423',
        '3LP' => 'E02002423',
        '3LQ' => 'E02002423',
        '3LR' => 'E02002423',
        '3LS' => 'E02002423',
        '3LT' => 'E02002428',
        '3LU' => 'E02002428',
        '3LW' => 'E02002423',
        '3LX' => 'E02002428',
        '3LY' => 'E02002428',
        '3LZ' => 'E02002428',
        '3NA' => 'E02002428',
        '3NB' => 'E02002428',
        '3ND' => 'E02002428',
        '3NE' => 'E02002428',
        '3NF' => 'E02002428',
        '3NG' => 'E02002423',
        '3NH' => 'E02002428',
        '3NJ' => 'E02002428',
        '3NL' => 'E02002423',
        '3NN' => 'E02002423',
        '3NP' => 'E02002423',
        '3NQ' => 'E02002423',
        '3NR' => 'E02002423',
        '3NS' => 'E02002423',
        '3NT' => 'E02002423',
        '3NU' => 'E02002423',
        '3NW' => 'E02002423',
        '3NX' => 'E02002423',
        '3NY' => 'E02002423',
        '3NZ' => 'E02002423',
        '3PA' => 'E02002423',
        '3PB' => 'E02002423',
        '3PD' => 'E02002423',
        '3PE' => 'E02002423',
        '3PF' => 'E02002423',
        '3PG' => 'E02002423',
        '3PH' => 'E02002423',
        '3PJ' => 'E02002423',
        '3PL' => 'E02002423',
        '3PN' => 'E02002423',
        '3PP' => 'E02002423',
        '3PQ' => 'E02002423',
        '3PR' => 'E02002423',
        '3PS' => 'E02002423',
        '3PT' => 'E02002423',
        '3PU' => 'E02002423',
        '3PW' => 'E02002423',
        '3PX' => 'E02002423',
        '3PY' => 'E02002423',
        '3PZ' => 'E02002423',
        '3QA' => 'E02002423',
        '3QB' => 'E02002423',
        '3QD' => 'E02002423',
        '3QE' => 'E02002423',
        '3QF' => 'E02002423',
        '3QG' => 'E02002423',
        '3QH' => 'E02002423',
        '3QJ' => 'E02002423',
        '3QL' => 'E02002423',
        '3QN' => 'E02002423',
        '3QP' => 'E02002428',
        '3QQ' => 'E02002423',
        '3QR' => 'E02002428',
        '3QS' => 'E02002428',
        '3QT' => 'E02002428',
        '3QU' => 'E02002423',
        '3QW' => 'E02002423',
        '3QX' => 'E02002428',
        '3QY' => 'E02002428',
        '3QZ' => 'E02002428',
        '3RA' => 'E02002428',
        '3RB' => 'E02002428',
        '3RD' => 'E02002428',
        '3RE' => 'E02002428',
        '3RF' => 'E02002428',
        '3RG' => 'E02002428',
        '3RH' => 'E02002428',
        '3RJ' => 'E02002428',
        '3RL' => 'E02002428',
        '3RN' => 'E02002428',
        '3RP' => 'E02002423',
        '3RQ' => 'E02002428',
        '3RR' => 'E02002423',
        '3RS' => 'E02002423',
        '3RT' => 'E02002423',
        '3RU' => 'E02002423',
        '3RW' => 'E02002428',
        '3RX' => 'E02002423',
        '3RY' => 'E02002423',
        '3RZ' => 'E02002423',
        '3SA' => 'E02002428',
        '3SB' => 'E02002428',
        '3SD' => 'E02002428',
        '3SE' => 'E02002428',
        '3SF' => 'E02002428',
        '3SG' => 'E02002428',
        '3SH' => 'E02002428',
        '3SJ' => 'E02002428',
        '3SL' => 'E02002428',
        '3SN' => 'E02002428',
        '3SP' => 'E02002428',
        '3SQ' => 'E02002428',
        '3SR' => 'E02002428',
        '3SS' => 'E02002428',
        '3ST' => 'E02002428',
        '3SU' => 'E02002428',
        '3SW' => 'E02002428',
        '3SX' => 'E02002428',
        '3SY' => 'E02002428',
        '3SZ' => 'E02002428',
        '3TA' => 'E02002428',
        '3TB' => 'E02002428',
        '3TD' => 'E02002428',
        '3TE' => 'E02002428',
        '3TF' => 'E02002428',
        '3TG' => 'E02002428',
        '3TH' => 'E02002428',
        '3TJ' => 'E02002428',
        '3TL' => 'E02002428',
        '3TN' => 'E02002428',
        '3TP' => 'E02006876',
        '3TQ' => 'E02002428',
        '3TR' => 'E02002428',
        '3TS' => 'E02006876',
        '3TT' => 'E02002423',
        '3TZ' => 'E02002423',
        '3UA' => 'E02002423',
        '3UB' => 'E02002421',
        '3UD' => 'E02002423',
        '3UE' => 'E02002423',
        '3UF' => 'E02002423',
        '3UG' => 'E02002423',
        '3UH' => 'E02002428',
        '3UJ' => 'E02002428',
        '3UL' => 'E02002428',
        '3UN' => 'E02002428',
        '3UP' => 'E02002428',
        '3UQ' => 'E02002421',
        '3UR' => 'E02002421',
        '3UT' => 'E02002421',
        '3UU' => 'E02002421',
        '3UW' => 'E02002428',
        '3UX' => 'E02002421',
        '3UY' => 'E02002421',
        '3UZ' => 'E02002421',
        '3WX' => 'E02002421',
        '3WY' => 'E02002421',
        '3WZ' => 'E02002421',
        '3XA' => 'E02002423',
        '3XB' => 'E02002421',
        '3XD' => 'E02002421',
        '3XE' => 'E02002421',
        '3XF' => 'E02002421',
        '3XG' => 'E02002421',
        '3XH' => 'E02002421',
        '3XJ' => 'E02002421',
        '3XL' => 'E02002421',
        '3XN' => 'E02002421',
        '3XP' => 'E02002423',
        '3XQ' => 'E02002421',
        '3XR' => 'E02002423',
        '3XS' => 'E02002421',
        '3XT' => 'E02002421',
        '3XU' => 'E02002421',
        '3XW' => 'E02002421',
        '3XX' => 'E02002421',
        '3XY' => 'E02002421',
        '3XZ' => 'E02002423',
        '3YA' => 'E02002421',
        '4AA' => 'E02002428',
        '4AB' => 'E02002428',
        '4AD' => 'E02002428',
        '4AE' => 'E02002428',
        '4AF' => 'E02002428',
        '4AG' => 'E02002428',
        '4AH' => 'E02002428',
        '4AJ' => 'E02002428',
        '4AL' => 'E02002428',
        '4AN' => 'E02002428',
        '4AP' => 'E02002428',
        '4AQ' => 'E02002428',
        '4AR' => 'E02002428',
        '4AS' => 'E02002428',
        '4AT' => 'E02002428',
        '4AU' => 'E02002428',
        '4AW' => 'E02002428',
        '4AX' => 'E02002428',
        '4AY' => 'E02002428',
        '4AZ' => 'E02002430',
        '4BA' => 'E02002430',
        '4BB' => 'E02002430',
        '4BD' => 'E02002430',
        '4BE' => 'E02002430',
        '4BF' => 'E02002434',
        '4BG' => 'E02002430',
        '4BH' => 'E02002430',
        '4BJ' => 'E02002430',
        '4BL' => 'E02002430',
        '4BN' => 'E02002430',
        '4BP' => 'E02002430',
        '4BQ' => 'E02002430',
        '4BR' => 'E02002428',
        '4BS' => 'E02002428',
        '4BT' => 'E02002428',
        '4BU' => 'E02002430',
        '4BW' => 'E02002430',
        '4BX' => 'E02002430',
        '4BY' => 'E02002430',
        '4BZ' => 'E02002430',
        '4DA' => 'E02002430',
        '4DB' => 'E02002430',
        '4DD' => 'E02002430',
        '4DE' => 'E02002430',
        '4DF' => 'E02002430',
        '4DG' => 'E02002430',
        '4DH' => 'E02002430',
        '4DJ' => 'E02002430',
        '4DL' => 'E02002430',
        '4DN' => 'E02002430',
        '4DP' => 'E02002430',
        '4DQ' => 'E02002430',
        '4DR' => 'E02002430',
        '4DS' => 'E02002430',
        '4DT' => 'E02002430',
        '4DU' => 'E02002430',
        '4DW' => 'E02002430',
        '4DX' => 'E02002430',
        '4DY' => 'E02002430',
        '4DZ' => 'E02002430',
        '4EA' => 'E02002430',
        '4EB' => 'E02002430',
        '4ED' => 'E02002430',
        '4EE' => 'E02002430',
        '4EF' => 'E02002430',
        '4EG' => 'E02002430',
        '4EH' => 'E02002430',
        '4EJ' => 'E02002430',
        '4EL' => 'E02002430',
        '4EN' => 'E02002430',
        '4EP' => 'E02002434',
        '4EQ' => 'E02002430',
        '4ER' => 'E02002434',
        '4ES' => 'E02002430',
        '4ET' => 'E02002430',
        '4EU' => 'E02002430',
        '4EW' => 'E02002430',
        '4EX' => 'E02002430',
        '4EY' => 'E02002430',
        '4EZ' => 'E02002430',
        '4FA' => 'E02002430',
        '4FB' => 'E02002434',
        '4FD' => 'E02002428',
        '4FE' => 'E02002428',
        '4FF' => 'E02002430',
        '4FG' => 'E02002434',
        '4FH' => 'E02002428',
        '4FJ' => 'E02002434',
        '4FL' => 'E02002428',
        '4FN' => 'E02002428',
        '4FP' => 'E02002428',
        '4FQ' => 'E02002428',
        '4FR' => 'E02002434',
        '4FS' => 'E02002428',
        '4FT' => 'E02002428',
        '4FW' => 'E02002434',
        '4FX' => 'E02002434',
        '4FY' => 'E02002428',
        '4FZ' => 'E02002428',
        '4GA' => 'E02002428',
        '4GB' => 'E02002428',
        '4GD' => 'E02002428',
        '4GE' => 'E02002428',
        '4GF' => 'E02002428',
        '4GG' => 'E02002428',
        '4GH' => 'E02002428',
        '4GJ' => 'E02002428',
        '4GL' => 'E02002428',
        '4GN' => 'E02002434',
        '4GP' => 'E02002434',
        '4GQ' => 'E02002434',
        '4GR' => 'E02002434',
        '4GS' => 'E02002428',
        '4GT' => 'E02002434',
        '4GU' => 'E02002428',
        '4GW' => 'E02002428',
        '4GX' => 'E02002434',
        '4GY' => 'E02002428',
        '4GZ' => 'E02002428',
        '4HA' => 'E02002430',
        '4HB' => 'E02002430',
        '4HD' => 'E02002430',
        '4HE' => 'E02002430',
        '4HF' => 'E02002434',
        '4HG' => 'E02002434',
        '4HH' => 'E02002434',
        '4HJ' => 'E02002434',
        '4HL' => 'E02002434',
        '4HN' => 'E02002430',
        '4HP' => 'E02002430',
        '4HQ' => 'E02002434',
        '4HR' => 'E02002430',
        '4HS' => 'E02002430',
        '4HT' => 'E02002430',
        '4HU' => 'E02002430',
        '4HW' => 'E02002434',
        '4HX' => 'E02002430',
        '4HY' => 'E02002430',
        '4HZ' => 'E02002434',
        '4JA' => 'E02002434',
        '4JB' => 'E02002430',
        '4JD' => 'E02002430',
        '4JE' => 'E02002430',
        '4JF' => 'E02002430',
        '4JG' => 'E02002430',
        '4JH' => 'E02002430',
        '4JJ' => 'E02002430',
        '4JL' => 'E02002430',
        '4JN' => 'E02002430',
        '4JP' => 'E02002430',
        '4JQ' => 'E02002430',
        '4JR' => 'E02002434',
        '4JS' => 'E02002430',
        '4JT' => 'E02002430',
        '4JU' => 'E02002430',
        '4JW' => 'E02002430',
        '4JX' => 'E02002430',
        '4JY' => 'E02002430',
        '4JZ' => 'E02002430',
        '4LA' => 'E02002430',
        '4LB' => 'E02002430',
        '4LD' => 'E02002430',
        '4LE' => 'E02002430',
        '4LF' => 'E02002430',
        '4LG' => 'E02002430',
        '4LH' => 'E02002430',
        '4LJ' => 'E02002430',
        '4LL' => 'E02002430',
        '4LN' => 'E02002430',
        '4LP' => 'E02002430',
        '4LQ' => 'E02002430',
        '4LR' => 'E02002430',
        '4LS' => 'E02002430',
        '4LT' => 'E02002430',
        '4LU' => 'E02002430',
        '4LW' => 'E02002430',
        '4LX' => 'E02002430',
        '4LY' => 'E02002430',
        '4LZ' => 'E02002428',
        '4NA' => 'E02002430',
        '4NB' => 'E02002430',
        '4ND' => 'E02002430',
        '4NE' => 'E02002430',
        '4NF' => 'E02002430',
        '4NG' => 'E02002430',
        '4NH' => 'E02002430',
        '4NJ' => 'E02002430',
        '4NL' => 'E02002430',
        '4NN' => 'E02002430',
        '4NP' => 'E02002430',
        '4NQ' => 'E02002430',
        '4NR' => 'E02002430',
        '4NS' => 'E02002430',
        '4NT' => 'E02002430',
        '4NU' => 'E02002430',
        '4NW' => 'E02002430',
        '4NX' => 'E02002428',
        '4NY' => 'E02002430',
        '4NZ' => 'E02002430',
        '4PA' => 'E02002428',
        '4PB' => 'E02002430',
        '4PD' => 'E02002430',
        '4PE' => 'E02002430',
        '4PF' => 'E02002430',
        '4PG' => 'E02002430',
        '4PH' => 'E02002430',
        '4PJ' => 'E02002430',
        '4PL' => 'E02002430',
        '4PN' => 'E02002430',
        '4PP' => 'E02002430',
        '4PQ' => 'E02002430',
        '4PR' => 'E02002430',
        '4PS' => 'E02002430',
        '4PT' => 'E02002430',
        '4PU' => 'E02002430',
        '4PW' => 'E02002430',
        '4PX' => 'E02002430',
        '4PY' => 'E02002430',
        '4PZ' => 'E02002430',
        '4QA' => 'E02002428',
        '4QB' => 'E02002428',
        '4QD' => 'E02002434',
        '4QE' => 'E02002428',
        '4QF' => 'E02002428',
        '4QG' => 'E02002428',
        '4QH' => 'E02002428',
        '4QJ' => 'E02002423',
        '4QL' => 'E02002423',
        '4QN' => 'E02002423',
        '4QP' => 'E02002423',
        '4QQ' => 'E02002428',
        '4QR' => 'E02002423',
        '4QS' => 'E02002423',
        '4QT' => 'E02002423',
        '4QU' => 'E02002423',
        '4QW' => 'E02002423',
        '4QX' => 'E02002423',
        '4QY' => 'E02002423',
        '4QZ' => 'E02002423',
        '4RA' => 'E02002428',
        '4RB' => 'E02002428',
        '4RD' => 'E02002428',
        '4RE' => 'E02002423',
        '4RF' => 'E02002423',
        '4RG' => 'E02002423',
        '4RH' => 'E02002423',
        '4RJ' => 'E02002423',
        '4RL' => 'E02002423',
        '4RN' => 'E02002421',
        '4RP' => 'E02002421',
        '4RQ' => 'E02002423',
        '4RR' => 'E02002421',
        '4RS' => 'E02002428',
        '4RT' => 'E02002428',
        '4RU' => 'E02002428',
        '4RW' => 'E02002421',
        '4RX' => 'E02002428',
        '4RY' => 'E02002428',
        '4RZ' => 'E02002428',
        '4SA' => 'E02002428',
        '4SB' => 'E02002428',
        '4SD' => 'E02002428',
        '4SE' => 'E02002423',
        '4SF' => 'E02002423',
        '4SG' => 'E02002423',
        '4SH' => 'E02002423',
        '4SJ' => 'E02002423',
        '4SL' => 'E02002428',
        '4SN' => 'E02002428',
        '4SP' => 'E02002430',
        '4SQ' => 'E02002423',
        '4SR' => 'E02002430',
        '4SS' => 'E02002428',
        '4ST' => 'E02002428',
        '4SU' => 'E02002430',
        '4SW' => 'E02002428',
        '4SX' => 'E02002428',
        '4SY' => 'E02002428',
        '4SZ' => 'E02002434',
        '4TA' => 'E02002434',
        '4TB' => 'E02002434',
        '4TD' => 'E02002434',
        '4TE' => 'E02002434',
        '4TF' => 'E02002434',
        '4TG' => 'E02002434',
        '4TH' => 'E02002430',
        '4TJ' => 'E02002430',
        '4TL' => 'E02002430',
        '4TN' => 'E02002430',
        '4TP' => 'E02002434',
        '4TQ' => 'E02002428',
        '4TR' => 'E02002434',
        '4TS' => 'E02002434',
        '4TU' => 'E02002434',
        '4TW' => 'E02002430',
        '4TX' => 'E02002434',
        '4TY' => 'E02002434',
        '4TZ' => 'E02002430',
        '4UA' => 'E02002428',
        '4UB' => 'E02002430',
        '4UD' => 'E02002430',
        '4UE' => 'E02002430',
        '4UF' => 'E02002430',
        '4UG' => 'E02002430',
        '4UH' => 'E02002434',
        '4UJ' => 'E02002434',
        '4UL' => 'E02002434',
        '4UN' => 'E02002434',
        '4UP' => 'E02002421',
        '4UQ' => 'E02002434',
        '4UR' => 'E02002421',
        '4US' => 'E02002434',
        '4UT' => 'E02002434',
        '4UW' => 'E02002423',
        '4UZ' => 'E02002428',
        '4WA' => 'E02002421',
        '4WG' => 'E02002428',
        '4WH' => 'E02002434',
        '4WJ' => 'E02002430',
        '4WL' => 'E02002434',
        '4WN' => 'E02002428',
        '4WP' => 'E02002434',
        '4WQ' => 'E02002434',
        '4WR' => 'E02002430',
        '4WW' => 'E02002421',
        '4WX' => 'E02002421',
        '4WY' => 'E02002421',
        '4WZ' => 'E02002423',
        '4XB' => 'E02002430',
        '4XE' => 'E02002430',
        '4XF' => 'E02002430',
        '4XG' => 'E02002421',
        '4XH' => 'E02002428',
        '4XJ' => 'E02002428',
        '4XL' => 'E02002428',
        '4XN' => 'E02002428',
        '4XP' => 'E02002428',
        '4XQ' => 'E02002428',
        '4XR' => 'E02002421',
        '4XS' => 'E02002421',
        '4XT' => 'E02002428',
        '4XU' => 'E02002421',
        '4XW' => 'E02002428',
        '4XX' => 'E02002421',
        '4XY' => 'E02002421',
        '4ZX' => 'E02002421',
        '9AA' => 'E02002421',
        '9AD' => 'E02002421',
        '9AE' => 'E02002421',
        '9AF' => 'E02002421',
        '9AG' => 'E02002421',
        '9AH' => 'E02002421',
        '9AJ' => 'E02002421',
        '9AL' => 'E02002421',
        '9AN' => 'E02002421',
        '9AP' => 'E02002421',
        '9AQ' => 'E02002421',
        '9AR' => 'E02002421',
        '9AS' => 'E02002421',
        '9AT' => 'E02002421',
        '9AU' => 'E02002421',
        '9AW' => 'E02002421',
        '9AX' => 'E02002421',
        '9AY' => 'E02002421',
        '9AZ' => 'E02002421',
        '9BA' => 'E02002421',
        '9BB' => 'E02002421',
        '9BD' => 'E02002421',
        '9BE' => 'E02002421',
        '9BF' => 'E02002421',
        '9BG' => 'E02002421',
        '9BH' => 'E02002421',
        '9BJ' => 'E02002421',
        '9BL' => 'E02002421',
        '9BN' => 'E02002421',
        '9BP' => 'E02002421',
        '9BQ' => 'E02002421',
        '9BR' => 'E02002421',
        '9BS' => 'E02002421',
        '9BT' => 'E02002421',
        '9BU' => 'E02002421',
        '9BW' => 'E02002421',
        '9BX' => 'E02002421',
        '9BY' => 'E02002421',
        '9BZ' => 'E02002421',
        '9DA' => 'E02002421',
        '9DB' => 'E02002421',
        '9DD' => 'E02002421',
        '9DE' => 'E02002421',
        '9DF' => 'E02002421',
        '9DG' => 'E02002421',
        '9DH' => 'E02002421',
        '9DJ' => 'E02002421',
        '9DL' => 'E02002421',
        '9DN' => 'E02002421',
        '9DP' => 'E02002421',
        '9DQ' => 'E02002421',
        '9DR' => 'E02002421',
        '9DS' => 'E02002421',
        '9DT' => 'E02002421',
        '9DU' => 'E02002421',
        '9DW' => 'E02002421',
        '9DX' => 'E02002421',
        '9DY' => 'E02002421',
        '9DZ' => 'E02002421',
        '9EA' => 'E02002421',
        '9EB' => 'E02002421',
        '9ED' => 'E02002421',
        '9EE' => 'E02002421',
        '9EF' => 'E02002421',
        '9EG' => 'E02002421',
        '9EH' => 'E02002421',
        '9EJ' => 'E02002421',
        '9EL' => 'E02002421',
        '9EN' => 'E02002421',
        '9EP' => 'E02002421',
        '9EQ' => 'E02002421',
        '9ER' => 'E02002421',
        '9ET' => 'E02002421',
        '9EU' => 'E02002421',
        '9EW' => 'E02002421',
        '9EX' => 'E02002421',
        '9EY' => 'E02002421',
        '9EZ' => 'E02002421',
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