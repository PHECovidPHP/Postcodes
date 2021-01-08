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
final class DN12
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02001572',
        '1AB' => 'E02001572',
        '1AD' => 'E02001572',
        '1AE' => 'E02001572',
        '1AF' => 'E02001572',
        '1AG' => 'E02001572',
        '1AH' => 'E02001572',
        '1AJ' => 'E02001572',
        '1AL' => 'E02001572',
        '1AN' => 'E02001572',
        '1AP' => 'E02001572',
        '1AQ' => 'E02001572',
        '1AR' => 'E02001572',
        '1AS' => 'E02001572',
        '1AT' => 'E02001572',
        '1AU' => 'E02001572',
        '1AW' => 'E02001572',
        '1AX' => 'E02001571',
        '1AY' => 'E02001572',
        '1AZ' => 'E02001572',
        '1BA' => 'E02001572',
        '1BB' => 'E02001572',
        '1BD' => 'E02001572',
        '1BE' => 'E02001572',
        '1BF' => 'E02001572',
        '1BG' => 'E02001572',
        '1BH' => 'E02001572',
        '1BJ' => 'E02001572',
        '1BL' => 'E02001571',
        '1BN' => 'E02001571',
        '1BP' => 'E02001571',
        '1BQ' => 'E02001571',
        '1BS' => 'E02001572',
        '1BT' => 'E02001571',
        '1BU' => 'E02001572',
        '1BW' => 'E02001571',
        '1BX' => 'E02001571',
        '1BY' => 'E02001571',
        '1BZ' => 'E02001572',
        '1DA' => 'E02001572',
        '1DB' => 'E02001572',
        '1DD' => 'E02001572',
        '1DE' => 'E02001572',
        '1DF' => 'E02001572',
        '1DG' => 'E02001572',
        '1DH' => 'E02001572',
        '1DJ' => 'E02001572',
        '1DL' => 'E02001572',
        '1DN' => 'E02001572',
        '1DP' => 'E02001572',
        '1DQ' => 'E02001572',
        '1DR' => 'E02001572',
        '1DS' => 'E02001572',
        '1DT' => 'E02001571',
        '1DU' => 'E02001572',
        '1DW' => 'E02001572',
        '1DX' => 'E02001572',
        '1DY' => 'E02001572',
        '1DZ' => 'E02001572',
        '1EA' => 'E02001572',
        '1EB' => 'E02001572',
        '1ED' => 'E02001572',
        '1EE' => 'E02001572',
        '1EF' => 'E02001572',
        '1EG' => 'E02001572',
        '1EH' => 'E02001572',
        '1EJ' => 'E02001572',
        '1EL' => 'E02001572',
        '1EN' => 'E02001572',
        '1EP' => 'E02001572',
        '1EQ' => 'E02001572',
        '1ER' => 'E02001572',
        '1ES' => 'E02001572',
        '1ET' => 'E02001572',
        '1EU' => 'E02001572',
        '1EW' => 'E02001572',
        '1EX' => 'E02001572',
        '1EY' => 'E02001572',
        '1EZ' => 'E02001572',
        '1GA' => 'E02001572',
        '1GB' => 'E02001572',
        '1GD' => 'E02001572',
        '1GE' => 'E02001560',
        '1GF' => 'E02001560',
        '1HA' => 'E02001572',
        '1HB' => 'E02001572',
        '1HD' => 'E02001572',
        '1HE' => 'E02001572',
        '1HF' => 'E02001572',
        '1HG' => 'E02001572',
        '1HH' => 'E02001572',
        '1HJ' => 'E02001572',
        '1HL' => 'E02001572',
        '1HN' => 'E02001572',
        '1HP' => 'E02001572',
        '1HQ' => 'E02001572',
        '1HR' => 'E02001572',
        '1HS' => 'E02001572',
        '1HT' => 'E02001572',
        '1HU' => 'E02001572',
        '1HW' => 'E02001572',
        '1JA' => 'E02001572',
        '1JB' => 'E02001572',
        '1JD' => 'E02001572',
        '1JE' => 'E02001572',
        '1JF' => 'E02001572',
        '1JG' => 'E02001572',
        '1JH' => 'E02001572',
        '1JJ' => 'E02001572',
        '1JL' => 'E02001572',
        '1JN' => 'E02001572',
        '1JP' => 'E02001572',
        '1JQ' => 'E02001572',
        '1JR' => 'E02001572',
        '1JS' => 'E02001572',
        '1JT' => 'E02001572',
        '1JU' => 'E02001572',
        '1JW' => 'E02001572',
        '1LE' => 'E02001572',
        '1LF' => 'E02001572',
        '1LG' => 'E02001572',
        '1LH' => 'E02001572',
        '1LJ' => 'E02001572',
        '1LL' => 'E02001572',
        '1LN' => 'E02001572',
        '1LP' => 'E02001572',
        '1LQ' => 'E02001572',
        '1LR' => 'E02001572',
        '1LS' => 'E02001572',
        '1LT' => 'E02001572',
        '1LU' => 'E02001572',
        '1LW' => 'E02001572',
        '1LX' => 'E02001572',
        '1LY' => 'E02001572',
        '1LZ' => 'E02001572',
        '1NA' => 'E02001572',
        '1NB' => 'E02001572',
        '1ND' => 'E02001572',
        '1NE' => 'E02001572',
        '1NF' => 'E02001572',
        '1NG' => 'E02001572',
        '1NH' => 'E02001572',
        '1NJ' => 'E02001572',
        '1NL' => 'E02001572',
        '1NN' => 'E02001572',
        '1NP' => 'E02001572',
        '1NQ' => 'E02001572',
        '1NR' => 'E02001572',
        '1NS' => 'E02001572',
        '1NW' => 'E02001572',
        '1PA' => 'E02001572',
        '1PB' => 'E02001572',
        '1PD' => 'E02001572',
        '1PE' => 'E02001572',
        '1PF' => 'E02001572',
        '1PG' => 'E02001572',
        '1PH' => 'E02001572',
        '1PJ' => 'E02001572',
        '1PL' => 'E02001572',
        '1PN' => 'E02001572',
        '1PP' => 'E02001572',
        '1PQ' => 'E02001572',
        '1PR' => 'E02001572',
        '1PS' => 'E02001572',
        '1PT' => 'E02001572',
        '1PU' => 'E02001572',
        '1PW' => 'E02001572',
        '1PX' => 'E02001572',
        '1PY' => 'E02001572',
        '1PZ' => 'E02001572',
        '1QA' => 'E02001572',
        '1QB' => 'E02001572',
        '1QD' => 'E02001572',
        '1QE' => 'E02001572',
        '1QF' => 'E02001572',
        '1QG' => 'E02001572',
        '1QH' => 'E02001572',
        '1QJ' => 'E02001572',
        '1QL' => 'E02001572',
        '1QN' => 'E02001572',
        '1QP' => 'E02001572',
        '1QQ' => 'E02001572',
        '1QR' => 'E02001572',
        '1QS' => 'E02001572',
        '1QW' => 'E02001572',
        '1RE' => 'E02001572',
        '1RH' => 'E02001572',
        '1RJ' => 'E02001572',
        '1RL' => 'E02001572',
        '1RN' => 'E02001572',
        '1SA' => 'E02001572',
        '1SB' => 'E02001572',
        '1SD' => 'E02001572',
        '1SE' => 'E02001572',
        '1SF' => 'E02001572',
        '1SG' => 'E02001572',
        '1SH' => 'E02001572',
        '1SJ' => 'E02001572',
        '1SL' => 'E02001572',
        '1SP' => 'E02001572',
        '1SQ' => 'E02001572',
        '1SR' => 'E02001572',
        '1SS' => 'E02001572',
        '1ST' => 'E02001572',
        '1SU' => 'E02001572',
        '1SW' => 'E02001572',
        '1SX' => 'E02001572',
        '1SY' => 'E02001572',
        '1XA' => 'E02001560',
        '1XB' => 'E02001560',
        '1XD' => 'E02001560',
        '2AA' => 'E02001558',
        '2AB' => 'E02001558',
        '2AD' => 'E02001573',
        '2AE' => 'E02001558',
        '2AF' => 'E02001571',
        '2AG' => 'E02001571',
        '2AH' => 'E02001571',
        '2AJ' => 'E02001571',
        '2AL' => 'E02001571',
        '2AN' => 'E02001571',
        '2AP' => 'E02001571',
        '2AQ' => 'E02001571',
        '2AR' => 'E02001573',
        '2AS' => 'E02001573',
        '2AT' => 'E02001571',
        '2AU' => 'E02001573',
        '2AW' => 'E02001571',
        '2AX' => 'E02001573',
        '2AY' => 'E02001573',
        '2AZ' => 'E02001573',
        '2BA' => 'E02001571',
        '2BB' => 'E02001587',
        '2BD' => 'E02001558',
        '2BE' => 'E02001573',
        '2BG' => 'E02001573',
        '2BH' => 'E02001573',
        '2BJ' => 'E02001573',
        '2BL' => 'E02001573',
        '2BN' => 'E02001573',
        '2BP' => 'E02001573',
        '2BQ' => 'E02001573',
        '2BS' => 'E02001573',
        '2BT' => 'E02001573',
        '2BU' => 'E02001573',
        '2BW' => 'E02001573',
        '2BX' => 'E02001573',
        '2BY' => 'E02001573',
        '2BZ' => 'E02001573',
        '2DA' => 'E02001573',
        '2DB' => 'E02001573',
        '2DD' => 'E02001573',
        '2DE' => 'E02001570',
        '2DF' => 'E02001570',
        '2DG' => 'E02001573',
        '2DH' => 'E02001573',
        '2DJ' => 'E02001573',
        '2DL' => 'E02001573',
        '2DN' => 'E02001573',
        '2DP' => 'E02001573',
        '2DQ' => 'E02001573',
        '2DR' => 'E02001573',
        '2DS' => 'E02001573',
        '2DT' => 'E02001573',
        '2DU' => 'E02001570',
        '2DW' => 'E02001573',
        '2DX' => 'E02001573',
        '2DY' => 'E02001573',
        '2DZ' => 'E02001573',
        '2EA' => 'E02001560',
        '2EB' => 'E02001573',
        '2EE' => 'E02001573',
        '2EF' => 'E02001573',
        '2EG' => 'E02001573',
        '2EH' => 'E02001570',
        '2EJ' => 'E02001573',
        '2EL' => 'E02001573',
        '2EN' => 'E02001573',
        '2EP' => 'E02001573',
        '2EQ' => 'E02001570',
        '2ER' => 'E02001573',
        '2ES' => 'E02001573',
        '2ET' => 'E02001573',
        '2EU' => 'E02001573',
        '2EW' => 'E02001573',
        '2EX' => 'E02001573',
        '2EY' => 'E02001573',
        '2EZ' => 'E02001573',
        '2HA' => 'E02001573',
        '2HB' => 'E02001573',
        '2HD' => 'E02001573',
        '2HE' => 'E02001573',
        '2HF' => 'E02001573',
        '2HG' => 'E02001573',
        '2HH' => 'E02001573',
        '2HJ' => 'E02001573',
        '2HL' => 'E02001573',
        '2HN' => 'E02001573',
        '2HQ' => 'E02001573',
        '2HR' => 'E02001558',
        '2HS' => 'E02001558',
        '2HT' => 'E02001558',
        '2HW' => 'E02001573',
        '2JA' => 'E02001573',
        '2JB' => 'E02001573',
        '2JD' => 'E02001573',
        '2JE' => 'E02001573',
        '2JF' => 'E02001573',
        '2JG' => 'E02001573',
        '2JH' => 'E02001573',
        '2JJ' => 'E02001573',
        '2JL' => 'E02001573',
        '2JN' => 'E02001573',
        '2JP' => 'E02001573',
        '2JQ' => 'E02001573',
        '2JR' => 'E02001573',
        '2JS' => 'E02001573',
        '2JT' => 'E02001573',
        '2JU' => 'E02001573',
        '2JW' => 'E02001573',
        '2JX' => 'E02001573',
        '2JY' => 'E02001573',
        '2JZ' => 'E02001573',
        '2LA' => 'E02001573',
        '2LB' => 'E02001573',
        '2LD' => 'E02001573',
        '2LE' => 'E02001573',
        '2LF' => 'E02001573',
        '2LG' => 'E02001573',
        '2LH' => 'E02001573',
        '2LJ' => 'E02001573',
        '2LL' => 'E02001573',
        '2LN' => 'E02001573',
        '2LP' => 'E02001570',
        '2LQ' => 'E02001573',
        '2LR' => 'E02001573',
        '2LY' => 'E02001570',
        '2NA' => 'E02001570',
        '2NB' => 'E02001570',
        '2ND' => 'E02001573',
        '2NE' => 'E02001573',
        '2NF' => 'E02001573',
        '2NG' => 'E02001573',
        '2NH' => 'E02001573',
        '2NJ' => 'E02001573',
        '2NL' => 'E02001573',
        '2NN' => 'E02001573',
        '2NP' => 'E02001573',
        '2NQ' => 'E02001573',
        '2NR' => 'E02001573',
        '2NS' => 'E02001573',
        '2NT' => 'E02001570',
        '2NU' => 'E02001570',
        '2NW' => 'E02001573',
        '2NX' => 'E02001573',
        '2NY' => 'E02001573',
        '2NZ' => 'E02001571',
        '2PA' => 'E02001573',
        '2PB' => 'E02001573',
        '2WA' => 'E02001570',
        '2WU' => 'E02001570',
        '2WW' => 'E02001570',
        '2WX' => 'E02001570',
        '2WY' => 'E02001570',
        '2WZ' => 'E02001570',
        '2XA' => 'E02001560',
        '2XB' => 'E02001573',
        '2XD' => 'E02001573',
        '2XE' => 'E02001573',
        '2XF' => 'E02001570',
        '2ZU' => 'E02001573',
        '2ZW' => 'E02001570',
        '3AA' => 'E02001570',
        '3AB' => 'E02001570',
        '3AD' => 'E02001570',
        '3AE' => 'E02001570',
        '3AF' => 'E02001570',
        '3AG' => 'E02001570',
        '3AH' => 'E02001558',
        '3AJ' => 'E02001573',
        '3AL' => 'E02001558',
        '3AN' => 'E02001558',
        '3AP' => 'E02001573',
        '3AQ' => 'E02001558',
        '3AR' => 'E02001571',
        '3AS' => 'E02001570',
        '3AT' => 'E02001558',
        '3AU' => 'E02001558',
        '3AW' => 'E02001558',
        '3AX' => 'E02001558',
        '3AY' => 'E02001558',
        '3AZ' => 'E02001558',
        '3BA' => 'E02001558',
        '3BB' => 'E02001558',
        '3BD' => 'E02001558',
        '3BE' => 'E02001558',
        '3BF' => 'E02001573',
        '3BG' => 'E02001558',
        '3BH' => 'E02001558',
        '3BJ' => 'E02001558',
        '3BL' => 'E02001558',
        '3BN' => 'E02001558',
        '3BP' => 'E02001558',
        '3BQ' => 'E02001558',
        '3BS' => 'E02001573',
        '3BT' => 'E02001570',
        '3BU' => 'E02001570',
        '3BW' => 'E02001558',
        '3BX' => 'E02001570',
        '3BY' => 'E02001570',
        '3BZ' => 'E02001570',
        '3DA' => 'E02001570',
        '3DB' => 'E02001570',
        '3DD' => 'E02001570',
        '3DE' => 'E02001570',
        '3DF' => 'E02001570',
        '3DG' => 'E02001570',
        '3DH' => 'E02001570',
        '3DJ' => 'E02001570',
        '3DL' => 'E02001570',
        '3DN' => 'E02001570',
        '3DP' => 'E02001570',
        '3DQ' => 'E02001570',
        '3DR' => 'E02001570',
        '3DS' => 'E02001570',
        '3DT' => 'E02001570',
        '3DU' => 'E02001570',
        '3DW' => 'E02001570',
        '3DX' => 'E02001570',
        '3DY' => 'E02001570',
        '3DZ' => 'E02001570',
        '3EA' => 'E02001570',
        '3EB' => 'E02001570',
        '3ED' => 'E02001570',
        '3EE' => 'E02001558',
        '3EF' => 'E02001570',
        '3EG' => 'E02001558',
        '3EH' => 'E02001558',
        '3EJ' => 'E02001558',
        '3EL' => 'E02001558',
        '3EN' => 'E02001558',
        '3EP' => 'E02001558',
        '3EQ' => 'E02001558',
        '3ER' => 'E02001570',
        '3ES' => 'E02001558',
        '3ET' => 'E02001573',
        '3EU' => 'E02001570',
        '3EW' => 'E02001558',
        '3EZ' => 'E02001570',
        '3FA' => 'E02001558',
        '3FD' => 'E02001570',
        '3GA' => 'E02001570',
        '3GB' => 'E02001570',
        '3GD' => 'E02001558',
        '3GE' => 'E02001570',
        '3GF' => 'E02001570',
        '3GZ' => 'E02001570',
        '3HA' => 'E02001573',
        '3HB' => 'E02001570',
        '3HD' => 'E02001570',
        '3HE' => 'E02001570',
        '3HF' => 'E02001570',
        '3HG' => 'E02001570',
        '3HH' => 'E02001570',
        '3HJ' => 'E02001570',
        '3HL' => 'E02001570',
        '3HN' => 'E02001570',
        '3HP' => 'E02001570',
        '3HQ' => 'E02001570',
        '3HR' => 'E02001570',
        '3HS' => 'E02001570',
        '3HT' => 'E02001570',
        '3HU' => 'E02001570',
        '3HW' => 'E02001570',
        '3HX' => 'E02001570',
        '3HY' => 'E02001570',
        '3HZ' => 'E02001570',
        '3JA' => 'E02001570',
        '3JB' => 'E02001570',
        '3JD' => 'E02001570',
        '3JH' => 'E02001570',
        '3JJ' => 'E02001570',
        '3JL' => 'E02001570',
        '3JN' => 'E02001570',
        '3JP' => 'E02001570',
        '3JR' => 'E02001573',
        '3JS' => 'E02001573',
        '3JT' => 'E02001573',
        '3JU' => 'E02001573',
        '3JW' => 'E02001573',
        '3JX' => 'E02001573',
        '3JY' => 'E02001573',
        '3JZ' => 'E02001573',
        '3LA' => 'E02001573',
        '3LB' => 'E02001573',
        '3LD' => 'E02001573',
        '3LE' => 'E02001573',
        '3LF' => 'E02001573',
        '3LG' => 'E02001573',
        '3LH' => 'E02001573',
        '3LJ' => 'E02001570',
        '3LQ' => 'E02001573',
        '3LR' => 'E02001573',
        '3LT' => 'E02001573',
        '3LU' => 'E02001573',
        '3LX' => 'E02001573',
        '3LY' => 'E02001573',
        '3LZ' => 'E02001573',
        '3NA' => 'E02001573',
        '3NB' => 'E02001570',
        '3ND' => 'E02001570',
        '3NE' => 'E02001573',
        '3NH' => 'E02001573',
        '3NJ' => 'E02001573',
        '3NL' => 'E02001573',
        '3NN' => 'E02001573',
        '3NP' => 'E02001573',
        '3NR' => 'E02001573',
        '3NS' => 'E02001573',
        '3NT' => 'E02001573',
        '3NU' => 'E02001573',
        '3NW' => 'E02001573',
        '3NX' => 'E02001573',
        '3NY' => 'E02001573',
        '3PA' => 'E02001573',
        '3PB' => 'E02001573',
        '3PD' => 'E02001573',
        '3PE' => 'E02001573',
        '3PF' => 'E02001573',
        '3PG' => 'E02001573',
        '3PH' => 'E02001573',
        '3PJ' => 'E02001573',
        '3PL' => 'E02001573',
        '3PN' => 'E02001573',
        '3PP' => 'E02001573',
        '3PQ' => 'E02001573',
        '3PR' => 'E02001573',
        '3PS' => 'E02001573',
        '3PT' => 'E02001573',
        '3PU' => 'E02001573',
        '3PW' => 'E02001573',
        '3PX' => 'E02001573',
        '3PY' => 'E02001573',
        '3PZ' => 'E02001573',
        '3QA' => 'E02001573',
        '3QB' => 'E02001573',
        '3QD' => 'E02001558',
        '3QE' => 'E02001573',
        '3QF' => 'E02001573',
        '3QL' => 'E02001558',
        '3QN' => 'E02001558',
        '3RX' => 'E02001570',
        '3WR' => 'E02001570',
        '3WS' => 'E02001570',
        '3WT' => 'E02001570',
        '3WU' => 'E02001570',
        '3WW' => 'E02001570',
        '3WX' => 'E02001570',
        '3WY' => 'E02001570',
        '3WZ' => 'E02001570',
        '3XA' => 'E02001573',
        '3XB' => 'E02001573',
        '3XD' => 'E02001573',
        '3XE' => 'E02001570',
        '3XF' => 'E02001570',
        '3XG' => 'E02001570',
        '3XH' => 'E02001560',
        '3XJ' => 'E02001570',
        '3XL' => 'E02001570',
        '3XN' => 'E02001570',
        '3XP' => 'E02001570',
        '4AA' => 'E02001570',
        '4AB' => 'E02001570',
        '4AD' => 'E02001570',
        '4AE' => 'E02001570',
        '4AF' => 'E02001570',
        '4AG' => 'E02001570',
        '4AH' => 'E02001570',
        '4AJ' => 'E02001570',
        '4AL' => 'E02001570',
        '4AN' => 'E02001570',
        '4AP' => 'E02001570',
        '4AQ' => 'E02001570',
        '4AR' => 'E02001570',
        '4AS' => 'E02001570',
        '4AT' => 'E02001570',
        '4AU' => 'E02001570',
        '4AW' => 'E02001570',
        '4AX' => 'E02001570',
        '4AY' => 'E02001570',
        '4AZ' => 'E02001570',
        '4BA' => 'E02001570',
        '4BB' => 'E02001570',
        '4BD' => 'E02001570',
        '4BE' => 'E02001570',
        '4BF' => 'E02001570',
        '4BG' => 'E02001570',
        '4BH' => 'E02001570',
        '4BJ' => 'E02001570',
        '4BL' => 'E02001570',
        '4BN' => 'E02001570',
        '4BP' => 'E02001570',
        '4BQ' => 'E02001570',
        '4BS' => 'E02001570',
        '4BT' => 'E02001570',
        '4BU' => 'E02001570',
        '4BW' => 'E02001570',
        '4BX' => 'E02001570',
        '4BY' => 'E02001570',
        '4BZ' => 'E02001570',
        '4DA' => 'E02001570',
        '4DB' => 'E02001570',
        '4DD' => 'E02001570',
        '4DE' => 'E02001570',
        '4DG' => 'E02001570',
        '4DH' => 'E02001570',
        '4DP' => 'E02001570',
        '4DQ' => 'E02001570',
        '4DS' => 'E02001570',
        '4DX' => 'E02001570',
        '4DY' => 'E02001570',
        '4DZ' => 'E02001570',
        '4EA' => 'E02001570',
        '4ED' => 'E02001570',
        '4EE' => 'E02001570',
        '4EF' => 'E02001570',
        '4EG' => 'E02001570',
        '4EH' => 'E02001570',
        '4EJ' => 'E02001568',
        '4EL' => 'E02001570',
        '4EN' => 'E02001570',
        '4EP' => 'E02001570',
        '4EQ' => 'E02001570',
        '4ER' => 'E02001570',
        '4ES' => 'E02001570',
        '4ET' => 'E02001570',
        '4EU' => 'E02001570',
        '4EW' => 'E02001570',
        '4EX' => 'E02001570',
        '4EY' => 'E02001570',
        '4EZ' => 'E02001570',
        '4HA' => 'E02001570',
        '4HB' => 'E02001570',
        '4HG' => 'E02001570',
        '4HH' => 'E02001570',
        '4HJ' => 'E02001570',
        '4HL' => 'E02001570',
        '4HN' => 'E02001570',
        '4HP' => 'E02001570',
        '4HQ' => 'E02001570',
        '4HR' => 'E02001570',
        '4HT' => 'E02001570',
        '4HU' => 'E02001570',
        '4HW' => 'E02001570',
        '4HX' => 'E02001570',
        '4HY' => 'E02001570',
        '4HZ' => 'E02001570',
        '4JA' => 'E02001570',
        '4JB' => 'E02001570',
        '4JD' => 'E02001570',
        '4JE' => 'E02001570',
        '4JF' => 'E02001570',
        '4JG' => 'E02001570',
        '4JH' => 'E02001570',
        '4JJ' => 'E02001570',
        '4JL' => 'E02001570',
        '4JP' => 'E02001570',
        '4JQ' => 'E02001570',
        '4JR' => 'E02001570',
        '4JS' => 'E02001570',
        '4JT' => 'E02001570',
        '4JU' => 'E02001570',
        '4JW' => 'E02001570',
        '4JX' => 'E02001570',
        '4JY' => 'E02001570',
        '4JZ' => 'E02001570',
        '4LA' => 'E02001570',
        '4LB' => 'E02001570',
        '4LD' => 'E02001570',
        '4LE' => 'E02001570',
        '4LF' => 'E02001570',
        '4LG' => 'E02001570',
        '4LH' => 'E02001570',
        '4LJ' => 'E02001570',
        '4LL' => 'E02001570',
        '4LP' => 'E02001570',
        '4LQ' => 'E02001570',
        '4LR' => 'E02001570',
        '4LS' => 'E02001570',
        '4LT' => 'E02001570',
        '4LU' => 'E02001570',
        '4LW' => 'E02001570',
        '4LX' => 'E02001570',
        '4LY' => 'E02001570',
        '4LZ' => 'E02001570',
        '4NA' => 'E02001570',
        '4NB' => 'E02001570',
        '4ND' => 'E02001570',
        '4NE' => 'E02001570',
        '4NF' => 'E02001570',
        '4NG' => 'E02001570',
        '4SA' => 'E02001570',
        '4SB' => 'E02001570',
        '4TA' => 'E02001570',
        '4TB' => 'E02001570',
        '4TD' => 'E02001570',
        '4TE' => 'E02001570',
        '4TF' => 'E02001570',
        '4TG' => 'E02001570',
        '4TH' => 'E02001570',
        '4TJ' => 'E02001570',
        '4TL' => 'E02001570',
        '4TN' => 'E02001570',
        '4TP' => 'E02001570',
        '4TQ' => 'E02001570',
        '4TR' => 'E02001570',
        '4TS' => 'E02001570',
        '4TT' => 'E02001570',
        '4TU' => 'E02001570',
        '4TW' => 'E02001570',
        '4TX' => 'E02001573',
        '4TY' => 'E02001570',
        '4TZ' => 'E02001570',
        '4UA' => 'E02001570',
        '4UB' => 'E02001570',
        '4UD' => 'E02001570',
        '4UE' => 'E02001570',
        '4UF' => 'E02001570',
        '4UG' => 'E02001570',
        '4UH' => 'E02001570',
        '4UJ' => 'E02001570',
        '4UL' => 'E02001570',
        '4UN' => 'E02001570',
        '4UQ' => 'E02001570',
        '4UW' => 'E02001570',
        '4WZ' => 'E02001570',
        '4XA' => 'E02001570',
        '4XB' => 'E02001570',
        '4XD' => 'E02001570',
        '4XE' => 'E02001570',
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
