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
final class CH43
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AD' => 'E02001496',
        '0BR' => 'E02001490',
        '0ET' => 'E02001490',
        '0EU' => 'E02001490',
        '0QY' => 'E02001490',
        '0QZ' => 'E02001490',
        '0RA' => 'E02001496',
        '0RB' => 'E02001496',
        '0RD' => 'E02001496',
        '0RE' => 'E02001496',
        '0RF' => 'E02001496',
        '0RG' => 'E02001496',
        '0RH' => 'E02001496',
        '0RJ' => 'E02001496',
        '0RL' => 'E02001496',
        '0RN' => 'E02001496',
        '0RP' => 'E02001496',
        '0RQ' => 'E02001496',
        '0RR' => 'E02001496',
        '0RS' => 'E02001496',
        '0RT' => 'E02001496',
        '0RU' => 'E02001496',
        '0RW' => 'E02001496',
        '0RX' => 'E02001490',
        '0RY' => 'E02001490',
        '0RZ' => 'E02001490',
        '0SA' => 'E02001490',
        '0SB' => 'E02001490',
        '0SD' => 'E02001490',
        '0SE' => 'E02001490',
        '0SF' => 'E02001490',
        '0SG' => 'E02001496',
        '0SH' => 'E02001496',
        '0SJ' => 'E02001496',
        '0SL' => 'E02001496',
        '0SN' => 'E02001496',
        '0SP' => 'E02001496',
        '0SQ' => 'E02001490',
        '0SR' => 'E02001496',
        '0SS' => 'E02001496',
        '0ST' => 'E02001496',
        '0SU' => 'E02001496',
        '0SW' => 'E02001496',
        '0SX' => 'E02001496',
        '0SY' => 'E02001496',
        '0SZ' => 'E02001496',
        '0TA' => 'E02001496',
        '0TB' => 'E02001496',
        '0TD' => 'E02001496',
        '0TE' => 'E02001496',
        '0TF' => 'E02001496',
        '0TG' => 'E02001496',
        '0TH' => 'E02001496',
        '0TJ' => 'E02001496',
        '0TL' => 'E02001496',
        '0TN' => 'E02001496',
        '0TP' => 'E02001490',
        '0TQ' => 'E02001496',
        '0TR' => 'E02001490',
        '0TS' => 'E02001490',
        '0TT' => 'E02001490',
        '0TU' => 'E02001490',
        '0TW' => 'E02001496',
        '0TX' => 'E02001490',
        '0TY' => 'E02001490',
        '0TZ' => 'E02001490',
        '0UA' => 'E02001490',
        '0UB' => 'E02001490',
        '0UD' => 'E02001490',
        '0UE' => 'E02001490',
        '0UF' => 'E02001490',
        '0UG' => 'E02001490',
        '0UH' => 'E02001490',
        '0UJ' => 'E02001490',
        '0UL' => 'E02001490',
        '0UN' => 'E02001490',
        '0UP' => 'E02001490',
        '0UQ' => 'E02001490',
        '0UR' => 'E02001496',
        '0US' => 'E02001490',
        '0UT' => 'E02001490',
        '0UU' => 'E02001490',
        '0UW' => 'E02001490',
        '0UX' => 'E02001490',
        '0UY' => 'E02001490',
        '0UZ' => 'E02001490',
        '0WA' => 'E02001490',
        '0WB' => 'E02001490',
        '0WD' => 'E02001490',
        '0XA' => 'E02001490',
        '0XB' => 'E02001490',
        '0XD' => 'E02001490',
        '0XE' => 'E02001490',
        '0XF' => 'E02001490',
        '0XG' => 'E02001490',
        '0XH' => 'E02001490',
        '0XQ' => 'E02001490',
        '0XT' => 'E02001490',
        '0XU' => 'E02001490',
        '0XW' => 'E02001490',
        '0XX' => 'E02001490',
        '0XZ' => 'E02001490',
        '0YJ' => 'E02001490',
        '0YY' => 'E02001490',
        '1AB' => 'E02001486',
        '1BA' => 'E02001486',
        '1BR' => 'E02001486',
        '1GA' => 'E02001490',
        '1GB' => 'E02001490',
        '1JX' => 'E02001490',
        '1ST' => 'E02001490',
        '1SU' => 'E02001486',
        '1SX' => 'E02001486',
        '1SZ' => 'E02001486',
        '1TA' => 'E02001486',
        '1TB' => 'E02001486',
        '1TD' => 'E02001486',
        '1TE' => 'E02001486',
        '1TF' => 'E02001486',
        '1TG' => 'E02001486',
        '1TH' => 'E02001486',
        '1TJ' => 'E02001486',
        '1TL' => 'E02001486',
        '1TN' => 'E02001486',
        '1TP' => 'E02001486',
        '1TQ' => 'E02001486',
        '1TR' => 'E02001486',
        '1TS' => 'E02001486',
        '1TT' => 'E02001486',
        '1TU' => 'E02001486',
        '1TW' => 'E02001486',
        '1TX' => 'E02001486',
        '1TY' => 'E02001486',
        '1TZ' => 'E02001486',
        '1UA' => 'E02001486',
        '1UB' => 'E02001486',
        '1UD' => 'E02001486',
        '1UE' => 'E02001486',
        '1UF' => 'E02001486',
        '1UG' => 'E02001481',
        '1UH' => 'E02001486',
        '1UJ' => 'E02001481',
        '1UL' => 'E02001481',
        '1UN' => 'E02001481',
        '1UP' => 'E02001481',
        '1UQ' => 'E02001481',
        '1UR' => 'E02001486',
        '1US' => 'E02001486',
        '1UT' => 'E02001488',
        '1UU' => 'E02001486',
        '1UW' => 'E02001481',
        '1UX' => 'E02001486',
        '1UY' => 'E02001486',
        '1UZ' => 'E02001486',
        '1WA' => 'E02001490',
        '1WB' => 'E02001490',
        '1WD' => 'E02001490',
        '1WE' => 'E02001490',
        '1WF' => 'E02001490',
        '1WG' => 'E02001490',
        '1WH' => 'E02001490',
        '1WQ' => 'E02001490',
        '1WR' => 'E02001490',
        '1WU' => 'E02001490',
        '1WZ' => 'E02001490',
        '1XA' => 'E02001486',
        '1XB' => 'E02001486',
        '1XD' => 'E02001486',
        '1XE' => 'E02001486',
        '1XF' => 'E02001486',
        '1XG' => 'E02001486',
        '1XH' => 'E02001486',
        '1XJ' => 'E02001486',
        '1XL' => 'E02001486',
        '1XN' => 'E02001486',
        '1XP' => 'E02001486',
        '1XQ' => 'E02001486',
        '1XR' => 'E02001486',
        '1XS' => 'E02001486',
        '1XT' => 'E02001486',
        '1XU' => 'E02001486',
        '1XW' => 'E02001486',
        '1XX' => 'E02001486',
        '1XY' => 'E02001486',
        '1XZ' => 'E02001486',
        '1YA' => 'E02001486',
        '1YB' => 'E02001486',
        '1YD' => 'E02001486',
        '1YE' => 'E02001486',
        '1YF' => 'E02001486',
        '1YG' => 'E02001488',
        '1YJ' => 'E02001486',
        '1YQ' => 'E02001488',
        '1YR' => 'E02001486',
        '2BR' => 'E02001486',
        '2BZ' => 'E02001486',
        '2DA' => 'E02001486',
        '2ET' => 'E02001490',
        '2EU' => 'E02001486',
        '2EY' => 'E02001490',
        '2GA' => 'E02001486',
        '2GB' => 'E02001486',
        '2GE' => 'E02001486',
        '2GF' => 'E02001486',
        '2GG' => 'E02001486',
        '2GJ' => 'E02001486',
        '2GL' => 'E02001486',
        '2GN' => 'E02001486',
        '2GP' => 'E02001486',
        '2GQ' => 'E02001486',
        '2GR' => 'E02001486',
        '2GS' => 'E02001486',
        '2GT' => 'E02001490',
        '2GW' => 'E02001486',
        '2HA' => 'E02001486',
        '2HB' => 'E02001486',
        '2HD' => 'E02001486',
        '2HE' => 'E02001486',
        '2HF' => 'E02001486',
        '2HG' => 'E02001486',
        '2HH' => 'E02001486',
        '2HJ' => 'E02001486',
        '2HL' => 'E02001490',
        '2HN' => 'E02001490',
        '2HP' => 'E02001490',
        '2HQ' => 'E02001486',
        '2HR' => 'E02001490',
        '2HS' => 'E02001490',
        '2HT' => 'E02001490',
        '2HU' => 'E02001486',
        '2HW' => 'E02001490',
        '2HX' => 'E02001490',
        '2HY' => 'E02001486',
        '2HZ' => 'E02001486',
        '2JA' => 'E02001486',
        '2JB' => 'E02001486',
        '2JD' => 'E02001486',
        '2JE' => 'E02001486',
        '2JF' => 'E02001486',
        '2JG' => 'E02001486',
        '2JH' => 'E02001486',
        '2JJ' => 'E02001486',
        '2JL' => 'E02001486',
        '2JN' => 'E02001486',
        '2JP' => 'E02001486',
        '2JQ' => 'E02001486',
        '2JR' => 'E02001486',
        '2JS' => 'E02001486',
        '2JT' => 'E02001486',
        '2JU' => 'E02001486',
        '2JW' => 'E02001486',
        '2JX' => 'E02001486',
        '2JY' => 'E02001486',
        '2JZ' => 'E02001486',
        '2LA' => 'E02001486',
        '2LB' => 'E02001490',
        '2LD' => 'E02001490',
        '2LE' => 'E02001490',
        '2LF' => 'E02001490',
        '2LG' => 'E02001486',
        '2LH' => 'E02001486',
        '2LJ' => 'E02001490',
        '2LL' => 'E02001490',
        '2LN' => 'E02001490',
        '2LP' => 'E02001486',
        '2LQ' => 'E02001490',
        '2LR' => 'E02001486',
        '2LS' => 'E02001490',
        '2LT' => 'E02001490',
        '2LU' => 'E02001486',
        '2LW' => 'E02001490',
        '2LX' => 'E02001486',
        '2LY' => 'E02001486',
        '2LZ' => 'E02001486',
        '2NA' => 'E02001486',
        '2NB' => 'E02001490',
        '2ND' => 'E02001490',
        '2NE' => 'E02001490',
        '2NF' => 'E02001490',
        '2NG' => 'E02001490',
        '2NH' => 'E02001490',
        '2NJ' => 'E02001490',
        '2NL' => 'E02001490',
        '2NN' => 'E02001490',
        '2NP' => 'E02001486',
        '2NQ' => 'E02001490',
        '2NR' => 'E02001486',
        '2NS' => 'E02001486',
        '2NT' => 'E02001486',
        '2NU' => 'E02001486',
        '2NW' => 'E02001486',
        '2NX' => 'E02001486',
        '2NZ' => 'E02001490',
        '2WA' => 'E02001490',
        '2WB' => 'E02001490',
        '2WD' => 'E02001490',
        '2WE' => 'E02001490',
        '2WF' => 'E02001490',
        '2WG' => 'E02001490',
        '2WJ' => 'E02001490',
        '2WP' => 'E02001490',
        '2WQ' => 'E02001490',
        '2WR' => 'E02001490',
        '2WU' => 'E02001490',
        '2WW' => 'E02001486',
        '2WY' => 'E02001490',
        '2YP' => 'E02001490',
        '2YY' => 'E02001490',
        '2YZ' => 'E02001490',
        '3AA' => 'E02001490',
        '3AB' => 'E02001496',
        '3AD' => 'E02001496',
        '3AE' => 'E02001496',
        '3AF' => 'E02001490',
        '3AG' => 'E02001496',
        '3AH' => 'E02001490',
        '3AJ' => 'E02001490',
        '3AL' => 'E02001490',
        '3AN' => 'E02001490',
        '3AP' => 'E02001490',
        '3AQ' => 'E02001490',
        '3AR' => 'E02001490',
        '3AS' => 'E02001490',
        '3AT' => 'E02001490',
        '3AU' => 'E02001490',
        '3AW' => 'E02001490',
        '3AX' => 'E02001490',
        '3AY' => 'E02001490',
        '3AZ' => 'E02001490',
        '3BA' => 'E02001490',
        '3BB' => 'E02001490',
        '3BD' => 'E02001490',
        '3BE' => 'E02001490',
        '3BG' => 'E02001490',
        '3BH' => 'E02001496',
        '3BJ' => 'E02001496',
        '3BL' => 'E02001496',
        '3BN' => 'E02001496',
        '3BP' => 'E02001496',
        '3BQ' => 'E02001490',
        '3BR' => 'E02001496',
        '3BS' => 'E02001496',
        '3BT' => 'E02001496',
        '3BU' => 'E02001496',
        '3BW' => 'E02001496',
        '3BX' => 'E02001496',
        '3BY' => 'E02001490',
        '3BZ' => 'E02001496',
        '3DA' => 'E02001496',
        '3DB' => 'E02001496',
        '3DD' => 'E02001496',
        '3DE' => 'E02001496',
        '3DF' => 'E02001496',
        '3DG' => 'E02001496',
        '3DH' => 'E02001496',
        '3DJ' => 'E02001496',
        '3DL' => 'E02001496',
        '3DN' => 'E02001496',
        '3DP' => 'E02001496',
        '3DQ' => 'E02001496',
        '3DR' => 'E02001490',
        '3DS' => 'E02001490',
        '3DT' => 'E02001490',
        '3DU' => 'E02001490',
        '3DW' => 'E02001496',
        '3DX' => 'E02001490',
        '3DY' => 'E02001496',
        '3DZ' => 'E02001490',
        '3EA' => 'E02001490',
        '3ER' => 'E02001496',
        '3ES' => 'E02001496',
        '3ET' => 'E02001490',
        '3EU' => 'E02001490',
        '3EW' => 'E02001496',
        '3EX' => 'E02001490',
        '3EY' => 'E02001490',
        '3EZ' => 'E02001490',
        '3GA' => 'E02001490',
        '3HA' => 'E02001490',
        '3HB' => 'E02001490',
        '3HE' => 'E02001490',
        '3HF' => 'E02001490',
        '3HG' => 'E02001490',
        '3HJ' => 'E02001496',
        '3HN' => 'E02001490',
        '3HQ' => 'E02001490',
        '3HT' => 'E02001496',
        '3HU' => 'E02001496',
        '3WA' => 'E02001490',
        '3WB' => 'E02001490',
        '3WD' => 'E02001490',
        '3WE' => 'E02001490',
        '3XR' => 'E02001490',
        '3XS' => 'E02001490',
        '3YY' => 'E02001490',
        '3YZ' => 'E02001490',
        '3ZR' => 'E02001490',
        '3ZX' => 'E02001490',
        '4BR' => 'E02001482',
        '4JE' => 'E02001482',
        '4SY' => 'E02001486',
        '4SZ' => 'E02001482',
        '4TA' => 'E02001482',
        '4TF' => 'E02001482',
        '4TG' => 'E02001482',
        '4TL' => 'E02001482',
        '4TN' => 'E02001482',
        '4TP' => 'E02001482',
        '4TQ' => 'E02001482',
        '4TR' => 'E02001482',
        '4TS' => 'E02001486',
        '4TT' => 'E02001482',
        '4TU' => 'E02001482',
        '4TW' => 'E02001482',
        '4TX' => 'E02001482',
        '4TY' => 'E02001482',
        '4TZ' => 'E02001482',
        '4UA' => 'E02001486',
        '4UB' => 'E02001486',
        '4UD' => 'E02001486',
        '4UE' => 'E02001486',
        '4UF' => 'E02001486',
        '4UG' => 'E02001486',
        '4UH' => 'E02001486',
        '4UJ' => 'E02001486',
        '4UL' => 'E02001486',
        '4UN' => 'E02001482',
        '4UP' => 'E02001486',
        '4UQ' => 'E02001486',
        '4UR' => 'E02001486',
        '4US' => 'E02001482',
        '4UT' => 'E02001486',
        '4UU' => 'E02001486',
        '4UW' => 'E02001482',
        '4UX' => 'E02001486',
        '4UY' => 'E02001486',
        '4UZ' => 'E02001486',
        '4WA' => 'E02001486',
        '4WF' => 'E02001486',
        '4WJ' => 'E02001490',
        '4WY' => 'E02001490',
        '4WZ' => 'E02001490',
        '4XA' => 'E02001482',
        '4XB' => 'E02001482',
        '4XD' => 'E02001482',
        '4XE' => 'E02001486',
        '4XF' => 'E02001482',
        '4XG' => 'E02001482',
        '4XH' => 'E02001482',
        '4XJ' => 'E02001482',
        '4XL' => 'E02001486',
        '4XN' => 'E02001482',
        '4XP' => 'E02001486',
        '4XQ' => 'E02001486',
        '4XR' => 'E02001486',
        '4XS' => 'E02001486',
        '4XT' => 'E02001486',
        '4XU' => 'E02001482',
        '4XW' => 'E02001482',
        '4XX' => 'E02001482',
        '4XY' => 'E02001482',
        '4XZ' => 'E02001486',
        '4YD' => 'E02001482',
        '4YE' => 'E02001482',
        '4YF' => 'E02001482',
        '4YG' => 'E02001482',
        '4YH' => 'E02001482',
        '4YJ' => 'E02001486',
        '4YP' => 'E02001486',
        '4YS' => 'E02001486',
        '4YT' => 'E02001486',
        '4YU' => 'E02001486',
        '4ZA' => 'E02001486',
        '4ZS' => 'E02001486',
        '5BR' => 'E02001488',
        '5RB' => 'E02001488',
        '5RD' => 'E02001488',
        '5RE' => 'E02001482',
        '5RF' => 'E02001488',
        '5RG' => 'E02001488',
        '5RH' => 'E02001488',
        '5RJ' => 'E02001488',
        '5RL' => 'E02001488',
        '5RN' => 'E02001488',
        '5RP' => 'E02001488',
        '5RQ' => 'E02001488',
        '5RR' => 'E02001488',
        '5RS' => 'E02001488',
        '5RT' => 'E02001488',
        '5RU' => 'E02001488',
        '5RW' => 'E02001488',
        '5RX' => 'E02001488',
        '5RY' => 'E02001488',
        '5RZ' => 'E02001488',
        '5SA' => 'E02001488',
        '5SB' => 'E02001488',
        '5SD' => 'E02001488',
        '5SE' => 'E02001488',
        '5SF' => 'E02001488',
        '5SG' => 'E02001488',
        '5SH' => 'E02001488',
        '5SJ' => 'E02001488',
        '5SL' => 'E02001488',
        '5SN' => 'E02001486',
        '5SP' => 'E02001488',
        '5SQ' => 'E02001486',
        '5SR' => 'E02001486',
        '5SS' => 'E02001486',
        '5ST' => 'E02001486',
        '5SU' => 'E02001486',
        '5SW' => 'E02001486',
        '5SX' => 'E02001488',
        '5SY' => 'E02001488',
        '5SZ' => 'E02001488',
        '5TA' => 'E02001486',
        '5TB' => 'E02001486',
        '5TD' => 'E02001488',
        '5TE' => 'E02001488',
        '5TF' => 'E02001488',
        '5TG' => 'E02001488',
        '5TH' => 'E02001488',
        '5TJ' => 'E02001488',
        '5TL' => 'E02001488',
        '5TN' => 'E02001488',
        '5TP' => 'E02001486',
        '5TQ' => 'E02001488',
        '5TR' => 'E02001488',
        '5TS' => 'E02001486',
        '5TT' => 'E02001486',
        '5TU' => 'E02001488',
        '5TW' => 'E02001488',
        '5TX' => 'E02001488',
        '5TY' => 'E02001486',
        '5TZ' => 'E02001486',
        '5UA' => 'E02001488',
        '5UB' => 'E02001488',
        '5UD' => 'E02001488',
        '5UE' => 'E02001488',
        '5UF' => 'E02001488',
        '5UG' => 'E02001488',
        '5UH' => 'E02001488',
        '5UJ' => 'E02001488',
        '5UL' => 'E02001488',
        '5UN' => 'E02001488',
        '5UP' => 'E02001488',
        '5UQ' => 'E02001488',
        '5UR' => 'E02001488',
        '5US' => 'E02001488',
        '5UT' => 'E02001488',
        '5UU' => 'E02001486',
        '5UW' => 'E02001488',
        '5UX' => 'E02001488',
        '5UY' => 'E02001486',
        '5UZ' => 'E02001486',
        '5WA' => 'E02001490',
        '5WB' => 'E02001490',
        '5WD' => 'E02001486',
        '5WE' => 'E02001490',
        '5WQ' => 'E02001490',
        '5XA' => 'E02001486',
        '5XB' => 'E02001486',
        '5XD' => 'E02001488',
        '5XE' => 'E02001488',
        '5XF' => 'E02001488',
        '5XG' => 'E02001486',
        '5XH' => 'E02001488',
        '5XJ' => 'E02001488',
        '5XL' => 'E02001490',
        '5XP' => 'E02001488',
        '5XQ' => 'E02001488',
        '5XR' => 'E02001490',
        '5XS' => 'E02001490',
        '5XT' => 'E02001490',
        '5XU' => 'E02001490',
        '5XW' => 'E02001488',
        '5XX' => 'E02001488',
        '5XY' => 'E02001488',
        '5XZ' => 'E02001490',
        '5YA' => 'E02001488',
        '5YY' => 'E02001488',
        '6BR' => 'E02001486',
        '6TA' => 'E02001486',
        '6TB' => 'E02001486',
        '6TD' => 'E02001486',
        '6TE' => 'E02001486',
        '6TF' => 'E02001486',
        '6TG' => 'E02001486',
        '6TH' => 'E02001481',
        '6TJ' => 'E02001481',
        '6TL' => 'E02001481',
        '6TN' => 'E02001481',
        '6TP' => 'E02001481',
        '6TQ' => 'E02001481',
        '6TR' => 'E02001481',
        '6TS' => 'E02001481',
        '6TT' => 'E02001481',
        '6TU' => 'E02001486',
        '6TW' => 'E02001481',
        '6TX' => 'E02001486',
        '6TY' => 'E02001486',
        '6TZ' => 'E02001486',
        '6UA' => 'E02001486',
        '6UB' => 'E02001486',
        '6UD' => 'E02001486',
        '6UE' => 'E02001486',
        '6UF' => 'E02001486',
        '6UG' => 'E02001486',
        '6UH' => 'E02001486',
        '6UJ' => 'E02001486',
        '6UL' => 'E02001481',
        '6UN' => 'E02001486',
        '6UP' => 'E02001486',
        '6UQ' => 'E02001486',
        '6UR' => 'E02001486',
        '6US' => 'E02001486',
        '6UT' => 'E02001486',
        '6UU' => 'E02001486',
        '6UW' => 'E02001486',
        '6UX' => 'E02001486',
        '6UY' => 'E02001486',
        '6UZ' => 'E02001486',
        '6WA' => 'E02001481',
        '6WB' => 'E02001481',
        '6WD' => 'E02001481',
        '6WE' => 'E02001490',
        '6WF' => 'E02001481',
        '6WH' => 'E02001490',
        '6XA' => 'E02001486',
        '6XB' => 'E02001486',
        '6XD' => 'E02001486',
        '6XE' => 'E02001481',
        '6XF' => 'E02001486',
        '6XG' => 'E02001486',
        '6XJ' => 'E02001481',
        '6XN' => 'E02001486',
        '6XP' => 'E02001486',
        '6XQ' => 'E02001481',
        '6XS' => 'E02001481',
        '6XU' => 'E02001486',
        '6XW' => 'E02001486',
        '6XX' => 'E02001490',
        '6XY' => 'E02001486',
        '6XZ' => 'E02001486',
        '6YA' => 'E02001486',
        '6YB' => 'E02001490',
        '6YY' => 'E02001481',
        '7AA' => 'E02001477',
        '7AB' => 'E02001481',
        '7AD' => 'E02001481',
        '7AE' => 'E02001477',
        '7BR' => 'E02001477',
        '7FB' => 'E02001490',
        '7FD' => 'E02001481',
        '7FE' => 'E02001477',
        '7FF' => 'E02001477',
        '7FG' => 'E02001477',
        '7FJ' => 'E02001481',
        '7FN' => 'E02001490',
        '7FP' => 'E02001481',
        '7LN' => 'E02001477',
        '7NA' => 'E02001477',
        '7NB' => 'E02001485',
        '7ND' => 'E02001485',
        '7NG' => 'E02001481',
        '7NH' => 'E02001481',
        '7NJ' => 'E02001481',
        '7NL' => 'E02001481',
        '7NN' => 'E02001481',
        '7NP' => 'E02001481',
        '7NQ' => 'E02001481',
        '7NR' => 'E02001481',
        '7NS' => 'E02001485',
        '7NT' => 'E02001481',
        '7NU' => 'E02001477',
        '7NW' => 'E02001481',
        '7NX' => 'E02001477',
        '7NY' => 'E02001477',
        '7NZ' => 'E02001477',
        '7PA' => 'E02001481',
        '7PB' => 'E02001481',
        '7PD' => 'E02001481',
        '7PE' => 'E02001481',
        '7PF' => 'E02001481',
        '7PG' => 'E02001477',
        '7PH' => 'E02001477',
        '7PJ' => 'E02001481',
        '7PL' => 'E02001481',
        '7PN' => 'E02001481',
        '7PP' => 'E02001481',
        '7PQ' => 'E02001477',
        '7PR' => 'E02001481',
        '7PS' => 'E02001481',
        '7PT' => 'E02001481',
        '7PU' => 'E02001481',
        '7PW' => 'E02001481',
        '7PX' => 'E02001481',
        '7PY' => 'E02001481',
        '7PZ' => 'E02001481',
        '7QA' => 'E02001477',
        '7QB' => 'E02001477',
        '7QD' => 'E02001477',
        '7QE' => 'E02001481',
        '7QF' => 'E02001481',
        '7QG' => 'E02001481',
        '7QH' => 'E02001477',
        '7QJ' => 'E02001477',
        '7QL' => 'E02001481',
        '7QN' => 'E02001481',
        '7QP' => 'E02001477',
        '7QQ' => 'E02001481',
        '7QR' => 'E02001481',
        '7QS' => 'E02001477',
        '7QT' => 'E02001477',
        '7QU' => 'E02001481',
        '7QW' => 'E02001481',
        '7QX' => 'E02001477',
        '7QY' => 'E02001477',
        '7QZ' => 'E02001477',
        '7RA' => 'E02001477',
        '7RB' => 'E02001477',
        '7RD' => 'E02001477',
        '7RE' => 'E02001477',
        '7RF' => 'E02001477',
        '7RG' => 'E02001477',
        '7RH' => 'E02001477',
        '7RJ' => 'E02001477',
        '7RL' => 'E02001477',
        '7RN' => 'E02001477',
        '7RP' => 'E02001481',
        '7RQ' => 'E02001477',
        '7RR' => 'E02001477',
        '7RS' => 'E02001477',
        '7RT' => 'E02001477',
        '7RU' => 'E02001477',
        '7RW' => 'E02001481',
        '7RX' => 'E02001481',
        '7RY' => 'E02001481',
        '7RZ' => 'E02001477',
        '7SA' => 'E02001481',
        '7SB' => 'E02001481',
        '7SD' => 'E02001481',
        '7SE' => 'E02001481',
        '7SF' => 'E02001481',
        '7SG' => 'E02001481',
        '7SH' => 'E02001481',
        '7SJ' => 'E02001477',
        '7SL' => 'E02001477',
        '7SN' => 'E02001477',
        '7SP' => 'E02001477',
        '7SQ' => 'E02001481',
        '7SR' => 'E02001477',
        '7SS' => 'E02001477',
        '7ST' => 'E02001477',
        '7SU' => 'E02001477',
        '7SW' => 'E02001477',
        '7SX' => 'E02001481',
        '7SY' => 'E02001481',
        '7SZ' => 'E02001481',
        '7TA' => 'E02001485',
        '7TB' => 'E02001485',
        '7TE' => 'E02001477',
        '7TF' => 'E02001477',
        '7TT' => 'E02001477',
        '7UA' => 'E02001477',
        '7UQ' => 'E02001477',
        '7UR' => 'E02001477',
        '7WA' => 'E02001490',
        '7WB' => 'E02001490',
        '7WE' => 'E02001490',
        '7WT' => 'E02001490',
        '7WY' => 'E02001490',
        '7XA' => 'E02001481',
        '7XB' => 'E02001481',
        '7XD' => 'E02001481',
        '7XE' => 'E02001481',
        '7XG' => 'E02001477',
        '7XH' => 'E02001477',
        '7XJ' => 'E02001477',
        '7XL' => 'E02001481',
        '7XN' => 'E02001481',
        '7XP' => 'E02001481',
        '7XQ' => 'E02001477',
        '7XR' => 'E02001481',
        '7XS' => 'E02001481',
        '7XT' => 'E02001477',
        '7XU' => 'E02001477',
        '7XW' => 'E02001481',
        '7XX' => 'E02001477',
        '7XY' => 'E02001477',
        '7YB' => 'E02001477',
        '7YE' => 'E02001481',
        '7YF' => 'E02001481',
        '7YG' => 'E02001477',
        '7YH' => 'E02001477',
        '7YJ' => 'E02001477',
        '7YL' => 'E02001477',
        '7YN' => 'E02001477',
        '7YP' => 'E02001477',
        '7YQ' => 'E02001477',
        '7YR' => 'E02001477',
        '7YS' => 'E02001477',
        '7YU' => 'E02001477',
        '7YW' => 'E02001477',
        '7YX' => 'E02001477',
        '7YY' => 'E02001477',
        '7YZ' => 'E02001481',
        '7ZA' => 'E02001481',
        '7ZB' => 'E02001477',
        '7ZD' => 'E02001477',
        '7ZE' => 'E02001477',
        '7ZF' => 'E02001477',
        '7ZG' => 'E02001477',
        '7ZH' => 'E02001477',
        '7ZJ' => 'E02001477',
        '7ZL' => 'E02001477',
        '7ZN' => 'E02001477',
        '7ZP' => 'E02001477',
        '7ZQ' => 'E02001477',
        '7ZR' => 'E02001477',
        '7ZS' => 'E02001477',
        '7ZT' => 'E02001477',
        '7ZU' => 'E02001477',
        '7ZW' => 'E02001477',
        '7ZX' => 'E02001477',
        '7ZY' => 'E02001477',
        '8BR' => 'E02001481',
        '8SA' => 'E02001481',
        '8SB' => 'E02001481',
        '8SD' => 'E02001481',
        '8SE' => 'E02001481',
        '8SF' => 'E02001481',
        '8SG' => 'E02001481',
        '8SH' => 'E02001481',
        '8SJ' => 'E02001481',
        '8SL' => 'E02001481',
        '8SN' => 'E02001481',
        '8SP' => 'E02001481',
        '8SQ' => 'E02001481',
        '8SR' => 'E02001481',
        '8SS' => 'E02001481',
        '8ST' => 'E02001486',
        '8SU' => 'E02001481',
        '8SW' => 'E02001481',
        '8SX' => 'E02001481',
        '8SY' => 'E02001481',
        '8SZ' => 'E02001481',
        '8TA' => 'E02001481',
        '8TB' => 'E02001481',
        '8TD' => 'E02001481',
        '8TE' => 'E02001481',
        '8TF' => 'E02001481',
        '8TG' => 'E02001481',
        '8TH' => 'E02001481',
        '8TJ' => 'E02001481',
        '8TL' => 'E02001481',
        '8TN' => 'E02001481',
        '8TP' => 'E02001481',
        '8TQ' => 'E02001481',
        '8TR' => 'E02001481',
        '8TS' => 'E02001481',
        '8TW' => 'E02001481',
        '8TY' => 'E02001490',
        '8UA' => 'E02001490',
        '8WA' => 'E02001490',
        '8WB' => 'E02001490',
        '8WE' => 'E02001490',
        '8YY' => 'E02001481',
        '9AA' => 'E02001485',
        '9AB' => 'E02001485',
        '9AD' => 'E02001485',
        '9AE' => 'E02001485',
        '9AF' => 'E02001485',
        '9AG' => 'E02001485',
        '9AH' => 'E02001485',
        '9AJ' => 'E02001485',
        '9AL' => 'E02001485',
        '9AN' => 'E02001485',
        '9AQ' => 'E02001485',
        '9BR' => 'E02001485',
        '9EA' => 'E02001490',
        '9EB' => 'E02001490',
        '9ED' => 'E02001490',
        '9EE' => 'E02001490',
        '9EF' => 'E02001486',
        '9GA' => 'E02001490',
        '9HA' => 'E02001490',
        '9HB' => 'E02001490',
        '9HD' => 'E02001490',
        '9HE' => 'E02001490',
        '9HF' => 'E02001490',
        '9HG' => 'E02001485',
        '9HH' => 'E02001490',
        '9HJ' => 'E02001490',
        '9HL' => 'E02001490',
        '9HN' => 'E02001490',
        '9HP' => 'E02001490',
        '9HQ' => 'E02001490',
        '9HR' => 'E02001490',
        '9HS' => 'E02001490',
        '9HT' => 'E02001485',
        '9HU' => 'E02001485',
        '9HW' => 'E02001490',
        '9HX' => 'E02001485',
        '9HY' => 'E02001490',
        '9HZ' => 'E02001490',
        '9JA' => 'E02001485',
        '9JB' => 'E02001485',
        '9JD' => 'E02001485',
        '9JE' => 'E02001490',
        '9JF' => 'E02001490',
        '9JG' => 'E02001490',
        '9JH' => 'E02001490',
        '9JJ' => 'E02001490',
        '9JL' => 'E02001486',
        '9JN' => 'E02001486',
        '9JP' => 'E02001485',
        '9JR' => 'E02001485',
        '9JT' => 'E02001485',
        '9JU' => 'E02001485',
        '9JW' => 'E02001490',
        '9JX' => 'E02001485',
        '9JY' => 'E02001485',
        '9JZ' => 'E02001485',
        '9LB' => 'E02001477',
        '9LG' => 'E02001485',
        '9LH' => 'E02001485',
        '9LQ' => 'E02001485',
        '9QA' => 'E02001485',
        '9QD' => 'E02001490',
        '9QN' => 'E02001490',
        '9QP' => 'E02001490',
        '9QQ' => 'E02001490',
        '9QR' => 'E02001485',
        '9QS' => 'E02001485',
        '9QT' => 'E02001486',
        '9QU' => 'E02001485',
        '9QW' => 'E02001490',
        '9QX' => 'E02001486',
        '9QY' => 'E02001490',
        '9QZ' => 'E02001490',
        '9RA' => 'E02001485',
        '9RB' => 'E02001485',
        '9RD' => 'E02001481',
        '9RE' => 'E02001485',
        '9RF' => 'E02001485',
        '9RG' => 'E02001485',
        '9RH' => 'E02001481',
        '9RJ' => 'E02001485',
        '9RL' => 'E02001485',
        '9RN' => 'E02001485',
        '9RP' => 'E02001485',
        '9RQ' => 'E02001481',
        '9RR' => 'E02001485',
        '9RS' => 'E02001485',
        '9RT' => 'E02001485',
        '9RU' => 'E02001485',
        '9RW' => 'E02001485',
        '9RX' => 'E02001485',
        '9RY' => 'E02001485',
        '9RZ' => 'E02001485',
        '9SA' => 'E02001485',
        '9SB' => 'E02001485',
        '9SD' => 'E02001485',
        '9SE' => 'E02001485',
        '9SF' => 'E02001485',
        '9SG' => 'E02001485',
        '9SH' => 'E02001485',
        '9SJ' => 'E02001485',
        '9SL' => 'E02001485',
        '9SN' => 'E02001485',
        '9SP' => 'E02001485',
        '9SQ' => 'E02001485',
        '9SR' => 'E02001485',
        '9SS' => 'E02001485',
        '9ST' => 'E02001485',
        '9SU' => 'E02001485',
        '9SW' => 'E02001485',
        '9SX' => 'E02001486',
        '9SY' => 'E02001485',
        '9SZ' => 'E02001485',
        '9TA' => 'E02001486',
        '9TB' => 'E02001486',
        '9TD' => 'E02001486',
        '9TE' => 'E02001490',
        '9TF' => 'E02001486',
        '9TG' => 'E02001486',
        '9TH' => 'E02001486',
        '9TJ' => 'E02001486',
        '9TL' => 'E02001490',
        '9TN' => 'E02001490',
        '9TP' => 'E02001490',
        '9TQ' => 'E02001486',
        '9TR' => 'E02001486',
        '9TS' => 'E02001486',
        '9TT' => 'E02001486',
        '9TU' => 'E02001486',
        '9TW' => 'E02001486',
        '9TX' => 'E02001486',
        '9TY' => 'E02001485',
        '9TZ' => 'E02001486',
        '9UA' => 'E02001481',
        '9UB' => 'E02001481',
        '9UD' => 'E02001481',
        '9UE' => 'E02001490',
        '9UF' => 'E02001490',
        '9UG' => 'E02001481',
        '9UH' => 'E02001485',
        '9UJ' => 'E02001485',
        '9UL' => 'E02001490',
        '9UN' => 'E02001490',
        '9UP' => 'E02001485',
        '9UQ' => 'E02001481',
        '9UR' => 'E02001485',
        '9US' => 'E02001485',
        '9UT' => 'E02001485',
        '9UU' => 'E02001485',
        '9UW' => 'E02001490',
        '9UX' => 'E02001485',
        '9UY' => 'E02001485',
        '9UZ' => 'E02001485',
        '9WA' => 'E02001490',
        '9WB' => 'E02001490',
        '9WD' => 'E02001490',
        '9WE' => 'E02001490',
        '9WF' => 'E02001485',
        '9WG' => 'E02001485',
        '9WH' => 'E02001490',
        '9WJ' => 'E02001485',
        '9WL' => 'E02001485',
        '9WN' => 'E02001486',
        '9WP' => 'E02001486',
        '9WQ' => 'E02001485',
        '9WT' => 'E02001485',
        '9WU' => 'E02001485',
        '9WX' => 'E02001490',
        '9WY' => 'E02001490',
        '9WZ' => 'E02001490',
        '9XA' => 'E02001485',
        '9XB' => 'E02001485',
        '9XD' => 'E02001485',
        '9XE' => 'E02001485',
        '9XF' => 'E02001485',
        '9XG' => 'E02001485',
        '9XH' => 'E02001477',
        '9XJ' => 'E02001477',
        '9XL' => 'E02001477',
        '9XN' => 'E02001485',
        '9XP' => 'E02001485',
        '9XQ' => 'E02001485',
        '9XR' => 'E02001485',
        '9XS' => 'E02001485',
        '9XT' => 'E02001477',
        '9XU' => 'E02001485',
        '9XW' => 'E02001485',
        '9XX' => 'E02001485',
        '9XY' => 'E02001485',
        '9XZ' => 'E02001485',
        '9YA' => 'E02001490',
        '9YB' => 'E02001485',
        '9YD' => 'E02001486',
        '9YE' => 'E02001490',
        '9YF' => 'E02001490',
        '9YG' => 'E02001490',
        '9YH' => 'E02001485',
        '9YJ' => 'E02001490',
        '9YL' => 'E02001490',
        '9YN' => 'E02001490',
        '9YP' => 'E02001485',
        '9YQ' => 'E02001490',
        '9YR' => 'E02001485',
        '9YS' => 'E02001485',
        '9YT' => 'E02001485',
        '9YU' => 'E02001485',
        '9YW' => 'E02001490',
        '9YX' => 'E02001485',
        '9YY' => 'E02001485',
        '9YZ' => 'E02001485',
        '9ZA' => 'E02001485',
        '9ZB' => 'E02001485',
        '9ZQ' => 'E02001490',
        '9ZR' => 'E02001490',
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
