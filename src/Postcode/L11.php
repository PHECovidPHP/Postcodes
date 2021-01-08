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
final class L11
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02001350',
        '0AB' => 'E02001350',
        '0AD' => 'E02001350',
        '0AE' => 'E02001350',
        '0AF' => 'E02001350',
        '0AG' => 'E02001350',
        '0AH' => 'E02001350',
        '0AJ' => 'E02001350',
        '0AL' => 'E02001350',
        '0AN' => 'E02001350',
        '0AP' => 'E02001350',
        '0AQ' => 'E02001350',
        '0AR' => 'E02001350',
        '0AS' => 'E02001350',
        '0AT' => 'E02001350',
        '0AU' => 'E02001350',
        '0AW' => 'E02001350',
        '0AX' => 'E02001350',
        '0AY' => 'E02001350',
        '0BB' => 'E02001350',
        '0BD' => 'E02001350',
        '0BE' => 'E02001350',
        '0BG' => 'E02001350',
        '0BH' => 'E02001350',
        '0BJ' => 'E02001350',
        '0BL' => 'E02001350',
        '0BN' => 'E02001353',
        '0BP' => 'E02001353',
        '0BQ' => 'E02001350',
        '0BR' => 'E02001350',
        '0BS' => 'E02001350',
        '0BT' => 'E02001353',
        '0BU' => 'E02001353',
        '0BW' => 'E02001350',
        '0BX' => 'E02001350',
        '0BY' => 'E02001350',
        '0BZ' => 'E02001350',
        '0DA' => 'E02001350',
        '0DB' => 'E02001350',
        '0DD' => 'E02001350',
        '0DE' => 'E02001350',
        '0DF' => 'E02001350',
        '0DG' => 'E02001350',
        '0DH' => 'E02001350',
        '0DJ' => 'E02001350',
        '0DL' => 'E02001350',
        '0DN' => 'E02001350',
        '0DP' => 'E02001350',
        '0DQ' => 'E02001350',
        '0DR' => 'E02001350',
        '0DS' => 'E02001350',
        '0DT' => 'E02001350',
        '0DU' => 'E02001350',
        '0DW' => 'E02001350',
        '0DX' => 'E02001350',
        '0DY' => 'E02001350',
        '0DZ' => 'E02001350',
        '0EB' => 'E02001350',
        '0ED' => 'E02001350',
        '0EE' => 'E02001350',
        '0EF' => 'E02001350',
        '0EG' => 'E02001350',
        '0EH' => 'E02001350',
        '0EJ' => 'E02001367',
        '0EL' => 'E02001350',
        '0EN' => 'E02001350',
        '0EQ' => 'E02001350',
        '0JA' => 'E02001350',
        '0WZ' => 'E02001367',
        '1AA' => 'E02001356',
        '1AD' => 'E02001356',
        '1AE' => 'E02001356',
        '1AF' => 'E02001356',
        '1AG' => 'E02001356',
        '1AH' => 'E02001356',
        '1AJ' => 'E02001357',
        '1AL' => 'E02001356',
        '1AN' => 'E02001357',
        '1AP' => 'E02001362',
        '1AQ' => 'E02001356',
        '1AR' => 'E02001356',
        '1AS' => 'E02001357',
        '1AT' => 'E02001362',
        '1AU' => 'E02001357',
        '1AW' => 'E02001362',
        '1AX' => 'E02001362',
        '1AY' => 'E02001357',
        '1AZ' => 'E02001357',
        '1BA' => 'E02001357',
        '1BB' => 'E02001357',
        '1BD' => 'E02001362',
        '1BE' => 'E02001356',
        '1BF' => 'E02001356',
        '1BG' => 'E02001362',
        '1BH' => 'E02001356',
        '1BJ' => 'E02001356',
        '1BL' => 'E02001357',
        '1BN' => 'E02001356',
        '1BP' => 'E02001362',
        '1BQ' => 'E02001356',
        '1BR' => 'E02001362',
        '1BS' => 'E02001357',
        '1BT' => 'E02001362',
        '1BU' => 'E02001362',
        '1BW' => 'E02001362',
        '1BX' => 'E02001356',
        '1BY' => 'E02001357',
        '1BZ' => 'E02001357',
        '1DA' => 'E02001357',
        '1DB' => 'E02001357',
        '1DD' => 'E02001357',
        '1DE' => 'E02001357',
        '1DF' => 'E02001351',
        '1DG' => 'E02001357',
        '1DH' => 'E02001356',
        '1DJ' => 'E02001356',
        '1DL' => 'E02001361',
        '1DN' => 'E02001356',
        '1DP' => 'E02001356',
        '1DQ' => 'E02001356',
        '1DR' => 'E02001356',
        '1DS' => 'E02001356',
        '1DT' => 'E02001356',
        '1DU' => 'E02001356',
        '1DW' => 'E02001356',
        '1DX' => 'E02001356',
        '1DY' => 'E02001356',
        '1DZ' => 'E02001356',
        '1EA' => 'E02001356',
        '1EB' => 'E02001356',
        '1ED' => 'E02001356',
        '1EE' => 'E02001356',
        '1EF' => 'E02001356',
        '1EG' => 'E02001362',
        '1EH' => 'E02001356',
        '1EJ' => 'E02001362',
        '1EL' => 'E02001362',
        '1EN' => 'E02001362',
        '1EP' => 'E02001362',
        '1EQ' => 'E02001356',
        '1ER' => 'E02001362',
        '1ES' => 'E02001362',
        '1ET' => 'E02001356',
        '1EU' => 'E02001356',
        '1EW' => 'E02001362',
        '1EX' => 'E02001356',
        '1EY' => 'E02001356',
        '1EZ' => 'E02001356',
        '1FD' => 'E02001356',
        '1FE' => 'E02001356',
        '1HA' => 'E02001356',
        '1HB' => 'E02001356',
        '1HD' => 'E02001356',
        '1HE' => 'E02001356',
        '1HF' => 'E02001356',
        '1HG' => 'E02001356',
        '1HH' => 'E02001356',
        '1HJ' => 'E02001356',
        '1HL' => 'E02001356',
        '1HN' => 'E02001356',
        '1HP' => 'E02001356',
        '1HQ' => 'E02001356',
        '1HR' => 'E02001356',
        '1HS' => 'E02001356',
        '1HT' => 'E02001356',
        '1HU' => 'E02001362',
        '1HW' => 'E02001356',
        '1HX' => 'E02001356',
        '1HY' => 'E02001356',
        '1JA' => 'E02001356',
        '1JB' => 'E02001356',
        '1JD' => 'E02001357',
        '1JF' => 'E02001356',
        '1JG' => 'E02001356',
        '1JH' => 'E02001357',
        '1JJ' => 'E02001357',
        '1JL' => 'E02001356',
        '1JN' => 'E02001356',
        '1JP' => 'E02001356',
        '1JQ' => 'E02001356',
        '1JR' => 'E02001357',
        '1JS' => 'E02001357',
        '1JT' => 'E02001357',
        '1JU' => 'E02001356',
        '1JW' => 'E02001357',
        '1WA' => 'E02001367',
        '1WB' => 'E02001367',
        '1WY' => 'E02001357',
        '1WZ' => 'E02001357',
        '1YX' => 'E02001367',
        '1ZY' => 'E02001367',
        '2AA' => 'E02001356',
        '2AB' => 'E02001356',
        '2AD' => 'E02001356',
        '2AE' => 'E02001356',
        '2AF' => 'E02001356',
        '2AG' => 'E02001356',
        '2AH' => 'E02001356',
        '2AJ' => 'E02001356',
        '2AL' => 'E02001356',
        '2AN' => 'E02001356',
        '2AP' => 'E02001356',
        '2AQ' => 'E02001356',
        '2AR' => 'E02001356',
        '2AS' => 'E02001356',
        '2AT' => 'E02001356',
        '2AU' => 'E02001356',
        '2AW' => 'E02001356',
        '2AX' => 'E02001356',
        '2AY' => 'E02001356',
        '2AZ' => 'E02001356',
        '2BA' => 'E02001356',
        '2BB' => 'E02001356',
        '2BD' => 'E02001347',
        '2RY' => 'E02001356',
        '2RZ' => 'E02001356',
        '2SA' => 'E02001356',
        '2SB' => 'E02001356',
        '2SD' => 'E02001356',
        '2SE' => 'E02001350',
        '2SF' => 'E02001356',
        '2SH' => 'E02001351',
        '2SJ' => 'E02001356',
        '2SL' => 'E02001356',
        '2SN' => 'E02001356',
        '2SP' => 'E02001356',
        '2SQ' => 'E02001351',
        '2SR' => 'E02001356',
        '2SS' => 'E02001356',
        '2ST' => 'E02001347',
        '2SU' => 'E02001351',
        '2SW' => 'E02001356',
        '2SX' => 'E02001351',
        '2TA' => 'E02001356',
        '2TB' => 'E02001356',
        '2TD' => 'E02001356',
        '2TE' => 'E02001356',
        '2TF' => 'E02001356',
        '2TG' => 'E02001356',
        '2TH' => 'E02001356',
        '2TJ' => 'E02001356',
        '2TL' => 'E02001356',
        '2TN' => 'E02001356',
        '2TP' => 'E02001356',
        '2TQ' => 'E02001356',
        '2TR' => 'E02001356',
        '2TS' => 'E02001356',
        '2TT' => 'E02001356',
        '2TU' => 'E02001356',
        '2TW' => 'E02001356',
        '2TX' => 'E02001356',
        '2TY' => 'E02001356',
        '2TZ' => 'E02001356',
        '2UA' => 'E02001356',
        '2UB' => 'E02001356',
        '2UD' => 'E02001356',
        '2UE' => 'E02001356',
        '2UF' => 'E02001356',
        '2UG' => 'E02001356',
        '2UH' => 'E02001356',
        '2UJ' => 'E02001356',
        '2UL' => 'E02001356',
        '2UN' => 'E02001356',
        '2UP' => 'E02001356',
        '2UQ' => 'E02001356',
        '2UR' => 'E02001356',
        '2US' => 'E02001356',
        '2UT' => 'E02001356',
        '2UU' => 'E02001356',
        '2UW' => 'E02001356',
        '2UX' => 'E02001356',
        '2UY' => 'E02001356',
        '2UZ' => 'E02001356',
        '2WW' => 'E02001367',
        '2WX' => 'E02001356',
        '2WY' => 'E02001367',
        '2WZ' => 'E02001367',
        '2XA' => 'E02001356',
        '2XB' => 'E02001356',
        '2XD' => 'E02001356',
        '2XE' => 'E02001356',
        '2XF' => 'E02001356',
        '2XG' => 'E02001356',
        '2XH' => 'E02001356',
        '2XJ' => 'E02001356',
        '2XL' => 'E02001356',
        '2XN' => 'E02001356',
        '2XP' => 'E02001356',
        '2XQ' => 'E02001356',
        '2XR' => 'E02001356',
        '2XS' => 'E02001356',
        '2XT' => 'E02001356',
        '2XU' => 'E02001356',
        '2XW' => 'E02001356',
        '2XX' => 'E02001356',
        '2XY' => 'E02001356',
        '2XZ' => 'E02001356',
        '2YA' => 'E02001356',
        '2YB' => 'E02001356',
        '2YD' => 'E02001356',
        '2YE' => 'E02001356',
        '2YF' => 'E02001350',
        '2YG' => 'E02001356',
        '2YH' => 'E02001356',
        '2YJ' => 'E02001356',
        '2YL' => 'E02001356',
        '2YN' => 'E02001356',
        '2YP' => 'E02001356',
        '2YQ' => 'E02001350',
        '2YR' => 'E02001367',
        '2YS' => 'E02001356',
        '2YT' => 'E02001356',
        '2YU' => 'E02001356',
        '2YW' => 'E02001356',
        '2YX' => 'E02001356',
        '2ZA' => 'E02001356',
        '3AA' => 'E02001351',
        '3AB' => 'E02001351',
        '3AD' => 'E02001351',
        '3AE' => 'E02001351',
        '3AF' => 'E02001351',
        '3AG' => 'E02001351',
        '3AH' => 'E02001351',
        '3AJ' => 'E02001351',
        '3AL' => 'E02001351',
        '3AN' => 'E02001351',
        '3AP' => 'E02001351',
        '3AQ' => 'E02001351',
        '3AR' => 'E02001351',
        '3AS' => 'E02001351',
        '3AT' => 'E02001351',
        '3AU' => 'E02001351',
        '3AW' => 'E02001351',
        '3AX' => 'E02001351',
        '3AY' => 'E02001351',
        '3AZ' => 'E02001351',
        '3BA' => 'E02001357',
        '3BB' => 'E02001351',
        '3BD' => 'E02001351',
        '3BE' => 'E02001357',
        '3BG' => 'E02001357',
        '3BH' => 'E02001357',
        '3BJ' => 'E02001357',
        '3BL' => 'E02001357',
        '3BN' => 'E02001351',
        '3BP' => 'E02001351',
        '3BQ' => 'E02001357',
        '3BR' => 'E02001351',
        '3BS' => 'E02001357',
        '3BT' => 'E02001357',
        '3BU' => 'E02001351',
        '3BW' => 'E02001357',
        '3BX' => 'E02001357',
        '3BY' => 'E02001357',
        '3BZ' => 'E02001351',
        '3DA' => 'E02001351',
        '3DB' => 'E02001351',
        '3DD' => 'E02001351',
        '3DE' => 'E02001351',
        '3DF' => 'E02001351',
        '3DG' => 'E02001351',
        '3DH' => 'E02001351',
        '3DJ' => 'E02001351',
        '3DL' => 'E02001351',
        '3DN' => 'E02001351',
        '3DP' => 'E02001351',
        '3DQ' => 'E02001351',
        '3DR' => 'E02001351',
        '3DS' => 'E02001351',
        '3DT' => 'E02001351',
        '3DU' => 'E02001351',
        '3DW' => 'E02001351',
        '3DX' => 'E02001351',
        '3DY' => 'E02001351',
        '3DZ' => 'E02001351',
        '3EA' => 'E02001351',
        '3EB' => 'E02001351',
        '3ED' => 'E02001351',
        '3EE' => 'E02001351',
        '3EF' => 'E02001351',
        '3EG' => 'E02001351',
        '3EH' => 'E02001351',
        '3EJ' => 'E02001351',
        '3EL' => 'E02001351',
        '3EN' => 'E02001351',
        '3EP' => 'E02001351',
        '3EQ' => 'E02001351',
        '3ER' => 'E02001351',
        '3EW' => 'E02001367',
        '3WZ' => 'E02001367',
        '4AB' => 'E02001353',
        '4AD' => 'E02001350',
        '4BD' => 'E02001350',
        '4BH' => 'E02001350',
        '4RA' => 'E02001353',
        '4RB' => 'E02001350',
        '4RD' => 'E02001350',
        '4RE' => 'E02001350',
        '4RF' => 'E02001350',
        '4RG' => 'E02001350',
        '4RH' => 'E02001350',
        '4RJ' => 'E02001350',
        '4RL' => 'E02001353',
        '4RN' => 'E02001350',
        '4RP' => 'E02001350',
        '4RQ' => 'E02001350',
        '4RR' => 'E02001350',
        '4RS' => 'E02001350',
        '4RT' => 'E02001350',
        '4RU' => 'E02001350',
        '4RW' => 'E02001350',
        '4RX' => 'E02001350',
        '4RY' => 'E02001350',
        '4RZ' => 'E02001350',
        '4SA' => 'E02001350',
        '4SB' => 'E02001350',
        '4SD' => 'E02001350',
        '4SE' => 'E02001350',
        '4SF' => 'E02001356',
        '4SG' => 'E02001356',
        '4SH' => 'E02001350',
        '4SJ' => 'E02001350',
        '4SL' => 'E02001356',
        '4SN' => 'E02001356',
        '4SP' => 'E02001359',
        '4SQ' => 'E02001350',
        '4SR' => 'E02001350',
        '4SS' => 'E02001350',
        '4ST' => 'E02001350',
        '4SU' => 'E02001350',
        '4SW' => 'E02001350',
        '4SX' => 'E02001350',
        '4SY' => 'E02001350',
        '4SZ' => 'E02001350',
        '4TA' => 'E02001350',
        '4TB' => 'E02001350',
        '4TD' => 'E02001350',
        '4TE' => 'E02001350',
        '4TF' => 'E02001350',
        '4TG' => 'E02001353',
        '4TH' => 'E02001353',
        '4TJ' => 'E02001350',
        '4TL' => 'E02001353',
        '4TN' => 'E02001350',
        '4TP' => 'E02001350',
        '4TQ' => 'E02001353',
        '4TR' => 'E02001353',
        '4TS' => 'E02001350',
        '4TT' => 'E02001353',
        '4TU' => 'E02001353',
        '4TW' => 'E02001350',
        '4TX' => 'E02001353',
        '4TY' => 'E02001350',
        '4TZ' => 'E02001350',
        '4UA' => 'E02001356',
        '4UB' => 'E02001350',
        '4UD' => 'E02001350',
        '4UE' => 'E02001350',
        '4UF' => 'E02001350',
        '4UG' => 'E02001356',
        '4UH' => 'E02001350',
        '4UJ' => 'E02001356',
        '4UL' => 'E02001350',
        '4UN' => 'E02001350',
        '4UP' => 'E02001350',
        '4UQ' => 'E02001350',
        '4UR' => 'E02001350',
        '4US' => 'E02001350',
        '4UW' => 'E02001350',
        '4WA' => 'E02001367',
        '4WB' => 'E02001367',
        '4WW' => 'E02001367',
        '4WX' => 'E02001367',
        '4WY' => 'E02001367',
        '4WZ' => 'E02001367',
        '4YX' => 'E02001350',
        '5AA' => 'E02001357',
        '5AB' => 'E02001357',
        '5AD' => 'E02001357',
        '5AE' => 'E02001351',
        '5AF' => 'E02001357',
        '5AG' => 'E02001357',
        '5AH' => 'E02001351',
        '5AJ' => 'E02001351',
        '5AN' => 'E02001357',
        '5AP' => 'E02001357',
        '5AQ' => 'E02001357',
        '5AR' => 'E02001357',
        '5AS' => 'E02001357',
        '5AT' => 'E02001357',
        '5AU' => 'E02001357',
        '5AW' => 'E02001357',
        '5AX' => 'E02001357',
        '5AY' => 'E02001357',
        '5AZ' => 'E02001357',
        '5BA' => 'E02001357',
        '5BB' => 'E02001351',
        '5BD' => 'E02001357',
        '5BE' => 'E02001351',
        '5BG' => 'E02001351',
        '5BH' => 'E02001357',
        '5BJ' => 'E02001357',
        '5BL' => 'E02001357',
        '5BN' => 'E02001357',
        '5BQ' => 'E02001351',
        '5BR' => 'E02001357',
        '5BS' => 'E02001357',
        '5BU' => 'E02001367',
        '5BX' => 'E02001357',
        '5BZ' => 'E02001350',
        '5YX' => 'E02001367',
        '6GA' => 'E02001350',
        '6LA' => 'E02001350',
        '6LB' => 'E02001350',
        '6LD' => 'E02001350',
        '6LE' => 'E02001350',
        '6LF' => 'E02001350',
        '6LG' => 'E02001350',
        '6LH' => 'E02001350',
        '6LJ' => 'E02001350',
        '6LL' => 'E02001350',
        '6LN' => 'E02001350',
        '6LP' => 'E02001350',
        '6LQ' => 'E02001350',
        '6LR' => 'E02001350',
        '6LS' => 'E02001350',
        '6LT' => 'E02001350',
        '6LU' => 'E02001350',
        '6LW' => 'E02001350',
        '6LX' => 'E02001350',
        '6LY' => 'E02001350',
        '6LZ' => 'E02001350',
        '6NA' => 'E02001350',
        '6NB' => 'E02001353',
        '6ND' => 'E02001353',
        '6NE' => 'E02001350',
        '6NF' => 'E02001350',
        '6NG' => 'E02001353',
        '6NH' => 'E02001353',
        '6NJ' => 'E02001353',
        '6NL' => 'E02001350',
        '6NP' => 'E02001350',
        '6NQ' => 'E02001353',
        '6NW' => 'E02001353',
        '6YW' => 'E02001367',
        '7AA' => 'E02001357',
        '7AB' => 'E02001357',
        '7AD' => 'E02001357',
        '7AE' => 'E02001354',
        '7AF' => 'E02001357',
        '7AG' => 'E02001354',
        '7AH' => 'E02001357',
        '7AJ' => 'E02001351',
        '7AL' => 'E02001357',
        '7AN' => 'E02001351',
        '7AP' => 'E02001351',
        '7AQ' => 'E02001357',
        '7AR' => 'E02001351',
        '7AS' => 'E02001351',
        '7AT' => 'E02001351',
        '7AU' => 'E02001351',
        '7AW' => 'E02001351',
        '7AX' => 'E02001354',
        '7AY' => 'E02001351',
        '7AZ' => 'E02001351',
        '7BA' => 'E02001351',
        '7BB' => 'E02001351',
        '7BE' => 'E02001357',
        '7BG' => 'E02001351',
        '7BH' => 'E02001354',
        '7BJ' => 'E02001354',
        '7BL' => 'E02001357',
        '7BN' => 'E02001354',
        '7BP' => 'E02001357',
        '7BQ' => 'E02001351',
        '7BR' => 'E02001357',
        '7BS' => 'E02001357',
        '7BT' => 'E02001354',
        '7BU' => 'E02001354',
        '7BW' => 'E02001354',
        '7BX' => 'E02001354',
        '7BY' => 'E02001354',
        '7BZ' => 'E02001354',
        '7DA' => 'E02001354',
        '7DB' => 'E02001354',
        '7DD' => 'E02001354',
        '7DE' => 'E02001354',
        '7DF' => 'E02001354',
        '7DG' => 'E02001354',
        '7DH' => 'E02001357',
        '7DJ' => 'E02001354',
        '7DL' => 'E02001354',
        '7DN' => 'E02001354',
        '7DQ' => 'E02001354',
        '7DR' => 'E02001351',
        '7DS' => 'E02001351',
        '7DT' => 'E02001367',
        '7DU' => 'E02001357',
        '7DW' => 'E02001354',
        '8AA' => 'E02001367',
        '8LA' => 'E02001362',
        '8LB' => 'E02001362',
        '8LD' => 'E02001357',
        '8LE' => 'E02001362',
        '8LF' => 'E02001362',
        '8LG' => 'E02001362',
        '8LH' => 'E02001357',
        '8LJ' => 'E02001357',
        '8LL' => 'E02001357',
        '8LN' => 'E02001357',
        '8LP' => 'E02001357',
        '8LQ' => 'E02001362',
        '8LR' => 'E02001357',
        '8LS' => 'E02001357',
        '8LT' => 'E02001357',
        '8LU' => 'E02001357',
        '8LW' => 'E02001357',
        '8LX' => 'E02001357',
        '8LY' => 'E02001357',
        '8LZ' => 'E02001357',
        '8NA' => 'E02001357',
        '8NB' => 'E02001357',
        '8ND' => 'E02001357',
        '8NE' => 'E02001357',
        '8NF' => 'E02001357',
        '8NG' => 'E02001362',
        '8NH' => 'E02001362',
        '8NJ' => 'E02001362',
        '8NL' => 'E02001362',
        '8NN' => 'E02001362',
        '8NP' => 'E02001362',
        '8NQ' => 'E02001362',
        '8NR' => 'E02001362',
        '8NS' => 'E02001362',
        '8NT' => 'E02001362',
        '8NU' => 'E02001357',
        '8NW' => 'E02001362',
        '8NX' => 'E02001362',
        '8NY' => 'E02001357',
        '8NZ' => 'E02001357',
        '8PA' => 'E02001357',
        '8PB' => 'E02001357',
        '8PD' => 'E02001357',
        '8WY' => 'E02001367',
        '8WZ' => 'E02001367',
        '9AA' => 'E02001356',
        '9AB' => 'E02001350',
        '9AD' => 'E02001350',
        '9AE' => 'E02001350',
        '9AF' => 'E02001350',
        '9AG' => 'E02001356',
        '9AH' => 'E02001350',
        '9AJ' => 'E02001350',
        '9AL' => 'E02001350',
        '9AN' => 'E02001350',
        '9AP' => 'E02001350',
        '9AQ' => 'E02001350',
        '9AR' => 'E02001350',
        '9AS' => 'E02001350',
        '9AT' => 'E02001350',
        '9AU' => 'E02001350',
        '9AW' => 'E02001350',
        '9AX' => 'E02001350',
        '9AY' => 'E02001350',
        '9AZ' => 'E02001350',
        '9BA' => 'E02001350',
        '9BB' => 'E02001350',
        '9BD' => 'E02001350',
        '9BE' => 'E02001350',
        '9BF' => 'E02001350',
        '9BG' => 'E02001350',
        '9BH' => 'E02001350',
        '9BJ' => 'E02001350',
        '9BL' => 'E02001350',
        '9BN' => 'E02001350',
        '9BP' => 'E02001350',
        '9BQ' => 'E02001350',
        '9BR' => 'E02001350',
        '9BS' => 'E02001350',
        '9BT' => 'E02001350',
        '9BU' => 'E02001350',
        '9BW' => 'E02001350',
        '9BX' => 'E02001350',
        '9BY' => 'E02001350',
        '9BZ' => 'E02001350',
        '9DA' => 'E02001350',
        '9DB' => 'E02001350',
        '9DD' => 'E02001350',
        '9DE' => 'E02001350',
        '9DF' => 'E02001350',
        '9DG' => 'E02001350',
        '9DH' => 'E02001350',
        '9DJ' => 'E02001350',
        '9DL' => 'E02001350',
        '9DN' => 'E02001350',
        '9DP' => 'E02001350',
        '9DQ' => 'E02001350',
        '9DR' => 'E02001350',
        '9DS' => 'E02001367',
        '9DT' => 'E02001350',
        '9DU' => 'E02001350',
        '9DW' => 'E02001350',
        '9EA' => 'E02001350',
        '9EB' => 'E02001350',
        '9WA' => 'E02001367',
        '9YJ' => 'E02001350',
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