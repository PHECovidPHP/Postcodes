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
final class TN16
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02005099',
        '1AB' => 'E02005099',
        '1AD' => 'E02005099',
        '1AE' => 'E02005099',
        '1AF' => 'E02005099',
        '1AG' => 'E02005099',
        '1AH' => 'E02005099',
        '1AJ' => 'E02005099',
        '1AL' => 'E02005099',
        '1AN' => 'E02005099',
        '1AP' => 'E02005099',
        '1AQ' => 'E02005099',
        '1AR' => 'E02005099',
        '1AS' => 'E02005099',
        '1AT' => 'E02005099',
        '1AU' => 'E02005099',
        '1AW' => 'E02005099',
        '1AX' => 'E02005099',
        '1AY' => 'E02005099',
        '1AZ' => 'E02005099',
        '1BA' => 'E02005099',
        '1BB' => 'E02005099',
        '1BD' => 'E02005099',
        '1BE' => 'E02005099',
        '1BF' => 'E02005099',
        '1BG' => 'E02005099',
        '1BH' => 'E02005099',
        '1BJ' => 'E02005099',
        '1BL' => 'E02005099',
        '1BN' => 'E02005099',
        '1BP' => 'E02005099',
        '1BQ' => 'E02005099',
        '1BS' => 'E02005099',
        '1BT' => 'E02005099',
        '1BU' => 'E02005099',
        '1BW' => 'E02000165',
        '1BX' => 'E02005099',
        '1BY' => 'E02005099',
        '1BZ' => 'E02005099',
        '1DA' => 'E02005099',
        '1DB' => 'E02005099',
        '1DD' => 'E02005099',
        '1DE' => 'E02005099',
        '1DF' => 'E02000165',
        '1DG' => 'E02005099',
        '1DH' => 'E02005099',
        '1DJ' => 'E02005099',
        '1DL' => 'E02005099',
        '1DN' => 'E02005099',
        '1DP' => 'E02005099',
        '1DQ' => 'E02005099',
        '1DR' => 'E02005099',
        '1DS' => 'E02005099',
        '1DT' => 'E02005099',
        '1DU' => 'E02005099',
        '1DW' => 'E02000165',
        '1DX' => 'E02005099',
        '1DY' => 'E02005099',
        '1DZ' => 'E02005099',
        '1EA' => 'E02005099',
        '1EB' => 'E02005099',
        '1ED' => 'E02005099',
        '1EE' => 'E02005099',
        '1EF' => 'E02005099',
        '1EG' => 'E02005099',
        '1EH' => 'E02005099',
        '1EJ' => 'E02005099',
        '1EL' => 'E02005099',
        '1EN' => 'E02005099',
        '1EP' => 'E02005099',
        '1EQ' => 'E02005099',
        '1ER' => 'E02005099',
        '1ES' => 'E02005099',
        '1ET' => 'E02005099',
        '1EU' => 'E02005099',
        '1EW' => 'E02005099',
        '1EX' => 'E02005099',
        '1EY' => 'E02000165',
        '1EZ' => 'E02005099',
        '1FA' => 'E02005099',
        '1FB' => 'E02005099',
        '1FD' => 'E02005099',
        '1FE' => 'E02005099',
        '1FH' => 'E02005099',
        '1FJ' => 'E02005099',
        '1FP' => 'E02005099',
        '1FR' => 'E02005099',
        '1FY' => 'E02005099',
        '1GE' => 'E02005099',
        '1GL' => 'E02005099',
        '1GP' => 'E02005099',
        '1GR' => 'E02005099',
        '1GT' => 'E02005099',
        '1GW' => 'E02005099',
        '1HA' => 'E02005099',
        '1HB' => 'E02005099',
        '1HE' => 'E02005099',
        '1HG' => 'E02005099',
        '1HH' => 'E02005099',
        '1HJ' => 'E02005099',
        '1HL' => 'E02005099',
        '1HN' => 'E02005099',
        '1HP' => 'E02005099',
        '1HR' => 'E02005099',
        '1HS' => 'E02005099',
        '1HT' => 'E02005099',
        '1HU' => 'E02005099',
        '1HW' => 'E02005099',
        '1HX' => 'E02005099',
        '1HY' => 'E02005099',
        '1HZ' => 'E02005099',
        '1JA' => 'E02005099',
        '1JB' => 'E02005099',
        '1JD' => 'E02005099',
        '1JE' => 'E02005099',
        '1JF' => 'E02005099',
        '1JG' => 'E02005099',
        '1JH' => 'E02005099',
        '1JJ' => 'E02005099',
        '1JL' => 'E02005099',
        '1JN' => 'E02005099',
        '1JP' => 'E02005099',
        '1JQ' => 'E02005099',
        '1JR' => 'E02005099',
        '1JS' => 'E02005099',
        '1JT' => 'E02005099',
        '1JU' => 'E02005099',
        '1JX' => 'E02005099',
        '1JY' => 'E02005099',
        '1JZ' => 'E02005099',
        '1LE' => 'E02005099',
        '1LJ' => 'E02005099',
        '1LL' => 'E02005099',
        '1LN' => 'E02005099',
        '1LP' => 'E02005099',
        '1LQ' => 'E02005099',
        '1LR' => 'E02005099',
        '1LS' => 'E02005099',
        '1LT' => 'E02005099',
        '1LU' => 'E02005099',
        '1LW' => 'E02005099',
        '1LX' => 'E02005099',
        '1LY' => 'E02005099',
        '1LZ' => 'E02005099',
        '1NA' => 'E02005099',
        '1NB' => 'E02005099',
        '1ND' => 'E02005099',
        '1NE' => 'E02005099',
        '1NG' => 'E02005099',
        '1NH' => 'E02005099',
        '1NJ' => 'E02005099',
        '1NL' => 'E02005099',
        '1NN' => 'E02005099',
        '1NP' => 'E02005099',
        '1NR' => 'E02005099',
        '1NS' => 'E02005099',
        '1NT' => 'E02005099',
        '1NU' => 'E02005099',
        '1NX' => 'E02005099',
        '1PA' => 'E02005099',
        '1PE' => 'E02005099',
        '1PG' => 'E02005099',
        '1PH' => 'E02005099',
        '1PJ' => 'E02005099',
        '1PL' => 'E02005099',
        '1PN' => 'E02005099',
        '1PP' => 'E02005099',
        '1PR' => 'E02005099',
        '1PS' => 'E02005099',
        '1PT' => 'E02005099',
        '1PU' => 'E02005099',
        '1PW' => 'E02005099',
        '1PX' => 'E02005099',
        '1PY' => 'E02005099',
        '1PZ' => 'E02005099',
        '1QA' => 'E02005099',
        '1QB' => 'E02005099',
        '1QD' => 'E02005099',
        '1QE' => 'E02005099',
        '1QG' => 'E02005099',
        '1QH' => 'E02005099',
        '1QJ' => 'E02005099',
        '1QL' => 'E02005099',
        '1QN' => 'E02005099',
        '1QP' => 'E02005099',
        '1QQ' => 'E02005099',
        '1QR' => 'E02005099',
        '1RA' => 'E02005099',
        '1RB' => 'E02005099',
        '1RD' => 'E02005099',
        '1RE' => 'E02005099',
        '1RF' => 'E02005099',
        '1RG' => 'E02005099',
        '1RH' => 'E02005099',
        '1RJ' => 'E02005099',
        '1RL' => 'E02005099',
        '1RN' => 'E02005099',
        '1RP' => 'E02005099',
        '1RQ' => 'E02005099',
        '1RR' => 'E02005099',
        '1RS' => 'E02005099',
        '1RT' => 'E02005099',
        '1RU' => 'E02005099',
        '1RW' => 'E02005099',
        '1RX' => 'E02005099',
        '1RY' => 'E02005099',
        '1RZ' => 'E02000165',
        '1SA' => 'E02005099',
        '1SB' => 'E02005099',
        '1SD' => 'E02005099',
        '1SE' => 'E02005099',
        '1SF' => 'E02005099',
        '1SG' => 'E02005099',
        '1SH' => 'E02005099',
        '1SJ' => 'E02005099',
        '1SL' => 'E02005099',
        '1SN' => 'E02005099',
        '1SP' => 'E02005099',
        '1SQ' => 'E02005099',
        '1SR' => 'E02005099',
        '1SS' => 'E02005099',
        '1ST' => 'E02000165',
        '1SU' => 'E02005099',
        '1SW' => 'E02005099',
        '1SX' => 'E02005099',
        '1TA' => 'E02005099',
        '1TB' => 'E02005099',
        '1TD' => 'E02005099',
        '1TE' => 'E02005099',
        '1TF' => 'E02005099',
        '1TG' => 'E02005099',
        '1TH' => 'E02005099',
        '1TJ' => 'E02005099',
        '1TL' => 'E02005099',
        '1TN' => 'E02005099',
        '1TP' => 'E02005099',
        '1TQ' => 'E02005099',
        '1TR' => 'E02005099',
        '1TS' => 'E02005099',
        '1TT' => 'E02005099',
        '1TU' => 'E02005099',
        '1TW' => 'E02005099',
        '1TX' => 'E02005099',
        '1TY' => 'E02005099',
        '1TZ' => 'E02005099',
        '1UA' => 'E02005099',
        '1UB' => 'E02005099',
        '1UD' => 'E02005099',
        '1UE' => 'E02000165',
        '1UF' => 'E02005099',
        '1UG' => 'E02005099',
        '1UH' => 'E02005099',
        '1UN' => 'E02005099',
        '1UP' => 'E02005099',
        '1UQ' => 'E02005099',
        '1UT' => 'E02005099',
        '1WA' => 'E02000165',
        '1WB' => 'E02000165',
        '1WD' => 'E02000165',
        '1WE' => 'E02000165',
        '1WF' => 'E02000165',
        '1WG' => 'E02000165',
        '1WH' => 'E02000165',
        '1WJ' => 'E02000165',
        '1WL' => 'E02000165',
        '1WN' => 'E02000165',
        '1WP' => 'E02000165',
        '1WQ' => 'E02000165',
        '1WR' => 'E02000165',
        '1WS' => 'E02005099',
        '1WT' => 'E02000165',
        '1WU' => 'E02000165',
        '1WW' => 'E02000165',
        '1WX' => 'E02005099',
        '1WY' => 'E02000165',
        '1WZ' => 'E02000165',
        '1XA' => 'E02000165',
        '1XB' => 'E02000165',
        '1XF' => 'E02000165',
        '1XH' => 'E02000165',
        '1XL' => 'E02000165',
        '1XP' => 'E02000165',
        '1XQ' => 'E02000165',
        '1XT' => 'E02000165',
        '1XY' => 'E02000165',
        '1XZ' => 'E02000165',
        '1YA' => 'E02000165',
        '1YB' => 'E02000165',
        '1YF' => 'E02000165',
        '1YL' => 'E02000165',
        '1YN' => 'E02000165',
        '1YQ' => 'E02000165',
        '1YW' => 'E02000165',
        '1YZ' => 'E02000165',
        '1ZA' => 'E02000165',
        '1ZB' => 'E02005099',
        '1ZD' => 'E02005099',
        '1ZE' => 'E02005099',
        '1ZF' => 'E02005099',
        '1ZG' => 'E02005099',
        '1ZH' => 'E02005099',
        '1ZJ' => 'E02005099',
        '1ZL' => 'E02000165',
        '1ZN' => 'E02000165',
        '1ZP' => 'E02005099',
        '1ZQ' => 'E02000165',
        '1ZR' => 'E02005099',
        '1ZS' => 'E02000165',
        '1ZT' => 'E02000165',
        '1ZU' => 'E02005099',
        '1ZW' => 'E02005099',
        '1ZX' => 'E02005099',
        '1ZY' => 'E02000165',
        '1ZZ' => 'E02005099',
        '2AA' => 'E02006790',
        '2AB' => 'E02006790',
        '2AD' => 'E02006790',
        '2AE' => 'E02006790',
        '2AF' => 'E02006790',
        '2AG' => 'E02006790',
        '2AH' => 'E02006790',
        '2AJ' => 'E02006790',
        '2AL' => 'E02006790',
        '2AN' => 'E02006790',
        '2AP' => 'E02006790',
        '2AQ' => 'E02006790',
        '2AR' => 'E02006790',
        '2AS' => 'E02006790',
        '2AT' => 'E02006790',
        '2AU' => 'E02006790',
        '2AW' => 'E02000165',
        '2AX' => 'E02006790',
        '2AY' => 'E02006790',
        '2AZ' => 'E02000165',
        '2BA' => 'E02006790',
        '2BB' => 'E02006790',
        '2BD' => 'E02006790',
        '2BE' => 'E02006790',
        '2BF' => 'E02006790',
        '2BG' => 'E02006790',
        '2BH' => 'E02006790',
        '2BJ' => 'E02006790',
        '2BL' => 'E02006790',
        '2BN' => 'E02006790',
        '2BP' => 'E02006790',
        '2BQ' => 'E02006790',
        '2BS' => 'E02006790',
        '2BT' => 'E02006790',
        '2BU' => 'E02006790',
        '2BW' => 'E02006790',
        '2BX' => 'E02006790',
        '2BY' => 'E02000165',
        '2BZ' => 'E02006790',
        '2DA' => 'E02006790',
        '2DB' => 'E02006790',
        '2DD' => 'E02005099',
        '2DE' => 'E02006790',
        '2DF' => 'E02006790',
        '2DG' => 'E02006790',
        '2DH' => 'E02005099',
        '2DJ' => 'E02005099',
        '2DL' => 'E02005099',
        '2DN' => 'E02005099',
        '2DP' => 'E02005099',
        '2DR' => 'E02005099',
        '2DS' => 'E02005099',
        '2DT' => 'E02005099',
        '2DU' => 'E02005099',
        '2DW' => 'E02005099',
        '2DX' => 'E02005099',
        '2DY' => 'E02005099',
        '2DZ' => 'E02000165',
        '2EA' => 'E02005099',
        '2EB' => 'E02005099',
        '2ED' => 'E02005099',
        '2EE' => 'E02005099',
        '2EG' => 'E02005099',
        '2EH' => 'E02005099',
        '2EJ' => 'E02006790',
        '2EL' => 'E02006790',
        '2EN' => 'E02006790',
        '2EP' => 'E02006790',
        '2EQ' => 'E02005099',
        '2ER' => 'E02006790',
        '2ES' => 'E02006433',
        '2ET' => 'E02006790',
        '2EU' => 'E02006790',
        '2EX' => 'E02006433',
        '2EY' => 'E02005099',
        '2HL' => 'E02006789',
        '2HN' => 'E02006789',
        '2HP' => 'E02006789',
        '2HR' => 'E02006789',
        '2HS' => 'E02006789',
        '2HT' => 'E02006789',
        '2HU' => 'E02006789',
        '2HW' => 'E02006789',
        '2HX' => 'E02006789',
        '2HY' => 'E02006789',
        '2JA' => 'E02006789',
        '2JB' => 'E02006789',
        '2JD' => 'E02006789',
        '2JE' => 'E02006789',
        '2JS' => 'E02006790',
        '2JT' => 'E02006790',
        '2JU' => 'E02006790',
        '2JX' => 'E02006790',
        '2JY' => 'E02006790',
        '2LA' => 'E02006790',
        '2LB' => 'E02006790',
        '2LD' => 'E02006790',
        '2LE' => 'E02006790',
        '2LF' => 'E02000165',
        '2LG' => 'E02006790',
        '2LH' => 'E02006790',
        '2LJ' => 'E02006790',
        '2LL' => 'E02006790',
        '2LN' => 'E02006790',
        '2LP' => 'E02006790',
        '2LR' => 'E02006790',
        '2LS' => 'E02006790',
        '2LT' => 'E02006790',
        '2LU' => 'E02006790',
        '2LX' => 'E02006790',
        '2LY' => 'E02006789',
        '2LZ' => 'E02006789',
        '2NA' => 'E02006790',
        '2NB' => 'E02006790',
        '2ND' => 'E02006790',
        '2NE' => 'E02006790',
        '2NF' => 'E02006790',
        '2NG' => 'E02006790',
        '2NH' => 'E02006790',
        '2NJ' => 'E02006790',
        '2NL' => 'E02006790',
        '2NN' => 'E02000165',
        '2NP' => 'E02000165',
        '2NQ' => 'E02006790',
        '2NR' => 'E02006790',
        '2NS' => 'E02006789',
        '2NT' => 'E02006790',
        '2NW' => 'E02000165',
        '2NY' => 'E02006790',
        '2NZ' => 'E02006790',
        '2PB' => 'E02006789',
        '2WA' => 'E02000165',
        '2WB' => 'E02000165',
        '2WE' => 'E02000165',
        '2WY' => 'E02006789',
        '2WZ' => 'E02000165',
        '2XA' => 'E02000165',
        '2YA' => 'E02006790',
        '2ZA' => 'E02000165',
        '2ZN' => 'E02000165',
        '2ZP' => 'E02006790',
        '2ZR' => 'E02000165',
        '2ZS' => 'E02000165',
        '2ZT' => 'E02000165',
        '2ZU' => 'E02000165',
        '2ZW' => 'E02000165',
        '2ZX' => 'E02000165',
        '2ZY' => 'E02006790',
        '2ZZ' => 'E02000165',
        '3AA' => 'E02006789',
        '3AB' => 'E02006789',
        '3AD' => 'E02006789',
        '3AE' => 'E02006789',
        '3AF' => 'E02006789',
        '3AG' => 'E02006789',
        '3AH' => 'E02006789',
        '3AJ' => 'E02006789',
        '3AL' => 'E02006789',
        '3AN' => 'E02006789',
        '3AP' => 'E02006789',
        '3AQ' => 'E02000165',
        '3AR' => 'E02006789',
        '3AS' => 'E02006789',
        '3AT' => 'E02006789',
        '3AU' => 'E02006789',
        '3AW' => 'E02006789',
        '3AX' => 'E02006789',
        '3AY' => 'E02006789',
        '3AZ' => 'E02000165',
        '3BA' => 'E02006789',
        '3BB' => 'E02006789',
        '3BD' => 'E02006789',
        '3BE' => 'E02006789',
        '3BF' => 'E02006789',
        '3BG' => 'E02006789',
        '3BH' => 'E02006789',
        '3BJ' => 'E02006789',
        '3BL' => 'E02006789',
        '3BN' => 'E02006789',
        '3BP' => 'E02006789',
        '3BQ' => 'E02000165',
        '3BR' => 'E02000165',
        '3BS' => 'E02000165',
        '3BT' => 'E02000165',
        '3BU' => 'E02000165',
        '3BW' => 'E02000165',
        '3BX' => 'E02000165',
        '3BY' => 'E02000165',
        '3BZ' => 'E02000165',
        '3DA' => 'E02000165',
        '3DB' => 'E02000165',
        '3DD' => 'E02000165',
        '3DE' => 'E02000165',
        '3DF' => 'E02000165',
        '3DG' => 'E02000165',
        '3DH' => 'E02000165',
        '3DJ' => 'E02000165',
        '3DL' => 'E02000165',
        '3DN' => 'E02000165',
        '3DP' => 'E02000165',
        '3DQ' => 'E02000165',
        '3DR' => 'E02000165',
        '3DS' => 'E02000165',
        '3DT' => 'E02000165',
        '3DU' => 'E02000165',
        '3DW' => 'E02000165',
        '3DX' => 'E02000165',
        '3DY' => 'E02006789',
        '3DZ' => 'E02000165',
        '3EA' => 'E02000165',
        '3EB' => 'E02000165',
        '3ED' => 'E02000165',
        '3EE' => 'E02000165',
        '3EF' => 'E02000165',
        '3EG' => 'E02000165',
        '3EH' => 'E02006789',
        '3EJ' => 'E02000165',
        '3EL' => 'E02006789',
        '3EN' => 'E02006789',
        '3EP' => 'E02006789',
        '3EQ' => 'E02000165',
        '3ER' => 'E02006789',
        '3ES' => 'E02006789',
        '3ET' => 'E02006789',
        '3EU' => 'E02006789',
        '3EW' => 'E02006789',
        '3EX' => 'E02006789',
        '3EY' => 'E02006789',
        '3EZ' => 'E02006789',
        '3FA' => 'E02000165',
        '3FB' => 'E02006789',
        '3FD' => 'E02006789',
        '3FE' => 'E02006789',
        '3FH' => 'E02006789',
        '3FJ' => 'E02006789',
        '3FL' => 'E02006789',
        '3FS' => 'E02000165',
        '3GA' => 'E02000165',
        '3GB' => 'E02006789',
        '3GD' => 'E02006789',
        '3GE' => 'E02000165',
        '3GF' => 'E02006789',
        '3GG' => 'E02006789',
        '3GH' => 'E02006789',
        '3GJ' => 'E02006789',
        '3GL' => 'E02006789',
        '3GW' => 'E02006789',
        '3GX' => 'E02000165',
        '3GY' => 'E02000165',
        '3HA' => 'E02000165',
        '3HB' => 'E02006789',
        '3HD' => 'E02006789',
        '3HE' => 'E02006789',
        '3HF' => 'E02006789',
        '3HG' => 'E02006789',
        '3HH' => 'E02006789',
        '3HJ' => 'E02006789',
        '3HL' => 'E02006789',
        '3HN' => 'E02006789',
        '3HP' => 'E02006789',
        '3HQ' => 'E02006789',
        '3HR' => 'E02006789',
        '3HS' => 'E02006789',
        '3HT' => 'E02006789',
        '3HU' => 'E02006789',
        '3HW' => 'E02006789',
        '3HX' => 'E02006789',
        '3HY' => 'E02006789',
        '3HZ' => 'E02000165',
        '3JA' => 'E02006789',
        '3JB' => 'E02006789',
        '3JD' => 'E02006789',
        '3JE' => 'E02006789',
        '3JF' => 'E02006789',
        '3JG' => 'E02006789',
        '3JH' => 'E02006789',
        '3JJ' => 'E02006789',
        '3JL' => 'E02006789',
        '3JN' => 'E02006789',
        '3JP' => 'E02000165',
        '3JQ' => 'E02000165',
        '3JR' => 'E02000165',
        '3JS' => 'E02000165',
        '3JT' => 'E02000165',
        '3JU' => 'E02006789',
        '3JW' => 'E02000165',
        '3JX' => 'E02000165',
        '3JY' => 'E02006789',
        '3JZ' => 'E02006789',
        '3LA' => 'E02006789',
        '3LB' => 'E02006789',
        '3LD' => 'E02006789',
        '3LE' => 'E02006789',
        '3LF' => 'E02006789',
        '3LG' => 'E02006789',
        '3LH' => 'E02006789',
        '3LJ' => 'E02006789',
        '3LL' => 'E02006789',
        '3LN' => 'E02006789',
        '3LP' => 'E02006789',
        '3LQ' => 'E02006789',
        '3LR' => 'E02000165',
        '3LS' => 'E02006789',
        '3LT' => 'E02006789',
        '3LU' => 'E02006789',
        '3LW' => 'E02000165',
        '3LX' => 'E02006789',
        '3LY' => 'E02006789',
        '3LZ' => 'E02006789',
        '3NA' => 'E02006789',
        '3NB' => 'E02006789',
        '3ND' => 'E02006789',
        '3NF' => 'E02000165',
        '3NG' => 'E02000165',
        '3NH' => 'E02000165',
        '3NJ' => 'E02000165',
        '3NL' => 'E02000165',
        '3NN' => 'E02000165',
        '3NP' => 'E02000165',
        '3NQ' => 'E02000165',
        '3NR' => 'E02000165',
        '3NS' => 'E02000165',
        '3NT' => 'E02000165',
        '3NU' => 'E02000165',
        '3NX' => 'E02000165',
        '3NY' => 'E02000165',
        '3NZ' => 'E02000165',
        '3PA' => 'E02000165',
        '3PB' => 'E02000165',
        '3PD' => 'E02000165',
        '3PE' => 'E02000165',
        '3PG' => 'E02000165',
        '3PH' => 'E02000165',
        '3PJ' => 'E02000165',
        '3PL' => 'E02000165',
        '3PN' => 'E02000165',
        '3PP' => 'E02000165',
        '3PR' => 'E02006789',
        '3PS' => 'E02000165',
        '3PZ' => 'E02000165',
        '3QA' => 'E02000165',
        '3QB' => 'E02000165',
        '3QD' => 'E02000165',
        '3QE' => 'E02000165',
        '3QF' => 'E02000165',
        '3QG' => 'E02000165',
        '3QH' => 'E02000165',
        '3QJ' => 'E02000165',
        '3QL' => 'E02000165',
        '3QN' => 'E02000165',
        '3QP' => 'E02000165',
        '3QQ' => 'E02000165',
        '3QR' => 'E02000165',
        '3QS' => 'E02000165',
        '3QT' => 'E02000165',
        '3QU' => 'E02000165',
        '3QW' => 'E02000165',
        '3QX' => 'E02000165',
        '3QY' => 'E02000165',
        '3QZ' => 'E02000165',
        '3RA' => 'E02000165',
        '3RB' => 'E02000165',
        '3RD' => 'E02000165',
        '3RE' => 'E02000165',
        '3RG' => 'E02000165',
        '3RH' => 'E02000165',
        '3RJ' => 'E02000165',
        '3RL' => 'E02000165',
        '3RN' => 'E02000165',
        '3RP' => 'E02000165',
        '3RR' => 'E02000165',
        '3RZ' => 'E02000165',
        '3SA' => 'E02006789',
        '3SB' => 'E02006789',
        '3SD' => 'E02006789',
        '3SE' => 'E02006789',
        '3SF' => 'E02006789',
        '3SG' => 'E02006789',
        '3SH' => 'E02006789',
        '3SJ' => 'E02006789',
        '3SL' => 'E02006789',
        '3SN' => 'E02006789',
        '3SP' => 'E02000165',
        '3SQ' => 'E02006789',
        '3SR' => 'E02000165',
        '3SS' => 'E02000165',
        '3ST' => 'E02006789',
        '3SY' => 'E02000165',
        '3SZ' => 'E02000165',
        '3TA' => 'E02006789',
        '3TB' => 'E02006789',
        '3TD' => 'E02006789',
        '3TE' => 'E02006789',
        '3TF' => 'E02000165',
        '3TG' => 'E02000165',
        '3TH' => 'E02000165',
        '3TJ' => 'E02000165',
        '3TL' => 'E02000165',
        '3TN' => 'E02000165',
        '3TP' => 'E02000165',
        '3TQ' => 'E02006789',
        '3TR' => 'E02000165',
        '3TS' => 'E02000165',
        '3TT' => 'E02000165',
        '3TU' => 'E02000165',
        '3TW' => 'E02000165',
        '3TX' => 'E02000165',
        '3TY' => 'E02000165',
        '3TZ' => 'E02000165',
        '3UA' => 'E02000165',
        '3UB' => 'E02000165',
        '3UD' => 'E02000165',
        '3UE' => 'E02000165',
        '3UF' => 'E02000165',
        '3UG' => 'E02000165',
        '3UH' => 'E02000165',
        '3UJ' => 'E02006789',
        '3UL' => 'E02000165',
        '3UN' => 'E02000165',
        '3UP' => 'E02006789',
        '3UQ' => 'E02000165',
        '3UR' => 'E02000165',
        '3US' => 'E02000165',
        '3UT' => 'E02000165',
        '3UU' => 'E02000165',
        '3UW' => 'E02000165',
        '3UX' => 'E02000165',
        '3UY' => 'E02000165',
        '3UZ' => 'E02000165',
        '3WA' => 'E02000165',
        '3WB' => 'E02000165',
        '3WD' => 'E02000165',
        '3WE' => 'E02000165',
        '3WF' => 'E02000165',
        '3WG' => 'E02000165',
        '3WH' => 'E02000165',
        '3WJ' => 'E02000165',
        '3WL' => 'E02000165',
        '3WN' => 'E02000165',
        '3WP' => 'E02000165',
        '3WQ' => 'E02000165',
        '3WR' => 'E02000165',
        '3WS' => 'E02000165',
        '3WT' => 'E02000165',
        '3WU' => 'E02000165',
        '3WW' => 'E02000165',
        '3WX' => 'E02000165',
        '3WY' => 'E02000165',
        '3WZ' => 'E02000165',
        '3XA' => 'E02000165',
        '3XB' => 'E02000165',
        '3XD' => 'E02000165',
        '3XE' => 'E02000165',
        '3XF' => 'E02000165',
        '3XG' => 'E02000165',
        '3XH' => 'E02000165',
        '3XJ' => 'E02000165',
        '3XL' => 'E02000165',
        '3XN' => 'E02000165',
        '3XP' => 'E02000165',
        '3XQ' => 'E02000165',
        '3XR' => 'E02000165',
        '3XS' => 'E02000165',
        '3XT' => 'E02000165',
        '3XU' => 'E02000165',
        '3XW' => 'E02000165',
        '3XX' => 'E02000165',
        '3XY' => 'E02000165',
        '3XZ' => 'E02000165',
        '3YA' => 'E02000165',
        '3YB' => 'E02000165',
        '3YD' => 'E02000165',
        '3YE' => 'E02006789',
        '3YF' => 'E02006789',
        '3YG' => 'E02000165',
        '3YH' => 'E02000165',
        '3YJ' => 'E02000165',
        '3YL' => 'E02000165',
        '3YN' => 'E02006789',
        '3YP' => 'E02000165',
        '3YQ' => 'E02000165',
        '3YR' => 'E02000165',
        '3YS' => 'E02000165',
        '3YT' => 'E02000165',
        '3YU' => 'E02000165',
        '3YW' => 'E02000165',
        '3YX' => 'E02000165',
        '3YY' => 'E02000165',
        '3YZ' => 'E02000165',
        '3ZA' => 'E02000165',
        '3ZB' => 'E02000165',
        '3ZD' => 'E02000165',
        '3ZE' => 'E02000165',
        '3ZF' => 'E02000165',
        '3ZG' => 'E02000165',
        '3ZH' => 'E02000165',
        '3ZJ' => 'E02000165',
        '3ZL' => 'E02000165',
        '3ZN' => 'E02000165',
        '3ZP' => 'E02000165',
        '3ZQ' => 'E02000165',
        '3ZR' => 'E02000165',
        '3ZS' => 'E02000165',
        '3ZT' => 'E02000165',
        '3ZU' => 'E02000165',
        '3ZW' => 'E02000165',
        '3ZX' => 'E02000165',
        '3ZY' => 'E02000165',
        '3ZZ' => 'E02000165',
        '9AA' => 'E02000165',
        '9AB' => 'E02000165',
        '9AD' => 'E02000165',
        '9AE' => 'E02000165',
        '9AF' => 'E02000165',
        '9AG' => 'E02000165',
        '9AH' => 'E02000165',
        '9AJ' => 'E02000165',
        '9AL' => 'E02000165',
        '9AN' => 'E02000165',
        '9AP' => 'E02000165',
        '9AQ' => 'E02000165',
        '9AR' => 'E02000165',
        '9AS' => 'E02000165',
        '9AT' => 'E02000165',
        '9AU' => 'E02000165',
        '9AW' => 'E02000165',
        '9AX' => 'E02000165',
        '9AY' => 'E02000165',
        '9AZ' => 'E02000165',
        '9BA' => 'E02000165',
        '9BB' => 'E02000165',
        '9BD' => 'E02000165',
        '9BE' => 'E02000165',
        '9BF' => 'E02000165',
        '9BG' => 'E02000165',
        '9BH' => 'E02000165',
        '9BJ' => 'E02000165',
        '9BL' => 'E02000165',
        '9BN' => 'E02000165',
        '9BP' => 'E02000165',
        '9BQ' => 'E02000165',
        '9BR' => 'E02000165',
        '9BS' => 'E02000165',
        '9BT' => 'E02000165',
        '9BU' => 'E02000165',
        '9BW' => 'E02000165',
        '9BX' => 'E02000165',
        '9BY' => 'E02000165',
        '9BZ' => 'E02000165',
        '9DA' => 'E02000165',
        '9DB' => 'E02000165',
        '9DD' => 'E02000165',
        '9DE' => 'E02000165',
        '9DF' => 'E02000165',
        '9DG' => 'E02000165',
        '9DH' => 'E02000165',
        '9DJ' => 'E02000165',
        '9DL' => 'E02000165',
        '9DN' => 'E02000165',
        '9DP' => 'E02000165',
        '9DQ' => 'E02000165',
        '9DR' => 'E02000165',
        '9DS' => 'E02000165',
        '9DT' => 'E02000165',
        '9DU' => 'E02000165',
        '9DW' => 'E02000165',
        '9DX' => 'E02000165',
        '9DY' => 'E02000165',
        '9DZ' => 'E02000165',
        '9EA' => 'E02000165',
        '9EB' => 'E02000165',
        '9ED' => 'E02000165',
        '9EE' => 'E02000165',
        '9EF' => 'E02000165',
        '9EG' => 'E02000165',
        '9EH' => 'E02000165',
        '9EJ' => 'E02000165',
        '9EL' => 'E02000165',
        '9EN' => 'E02000165',
        '9EP' => 'E02000165',
        '9EQ' => 'E02000165',
        '9ER' => 'E02000165',
        '9ES' => 'E02000165',
        '9ET' => 'E02000165',
        '9EU' => 'E02000165',
        '9EW' => 'E02000165',
        '9EY' => 'E02000165',
        '9EZ' => 'E02000165',
        '9FA' => 'E02000165',
        '9FB' => 'E02000165',
        '9XX' => 'E02000165',
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
