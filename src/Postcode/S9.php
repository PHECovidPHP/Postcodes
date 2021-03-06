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
final class S9
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02001624',
        '1AB' => 'E02001624',
        '1AD' => 'E02001624',
        '1AE' => 'E02001624',
        '1AF' => 'E02001624',
        '1AG' => 'E02001624',
        '1AH' => 'E02001624',
        '1AJ' => 'E02001624',
        '1AL' => 'E02001624',
        '1AN' => 'E02001624',
        '1AP' => 'E02001624',
        '1AQ' => 'E02001624',
        '1AR' => 'E02001624',
        '1AS' => 'E02001624',
        '1AT' => 'E02001624',
        '1AU' => 'E02001624',
        '1AW' => 'E02001624',
        '1AX' => 'E02001624',
        '1AY' => 'E02001624',
        '1AZ' => 'E02001624',
        '1BA' => 'E02001624',
        '1BB' => 'E02001624',
        '1BD' => 'E02001624',
        '1BE' => 'E02001624',
        '1BF' => 'E02001624',
        '1BG' => 'E02001628',
        '1BH' => 'E02001624',
        '1BJ' => 'E02001624',
        '1BL' => 'E02001624',
        '1BN' => 'E02001624',
        '1BP' => 'E02001624',
        '1BQ' => 'E02001624',
        '1BR' => 'E02001624',
        '1BS' => 'E02001624',
        '1BT' => 'E02001624',
        '1BU' => 'E02001624',
        '1BW' => 'E02001624',
        '1BX' => 'E02001624',
        '1BY' => 'E02001624',
        '1BZ' => 'E02001628',
        '1DA' => 'E02001628',
        '1DB' => 'E02001624',
        '1DD' => 'E02001624',
        '1DE' => 'E02001624',
        '1DF' => 'E02001624',
        '1DG' => 'E02001624',
        '1DH' => 'E02001624',
        '1DJ' => 'E02001624',
        '1DN' => 'E02001624',
        '1DP' => 'E02001624',
        '1DQ' => 'E02001624',
        '1DR' => 'E02001637',
        '1DS' => 'E02001624',
        '1DT' => 'E02001624',
        '1DU' => 'E02001624',
        '1DW' => 'E02001624',
        '1DX' => 'E02001624',
        '1DY' => 'E02001624',
        '1DZ' => 'E02001628',
        '1EA' => 'E02001628',
        '1EB' => 'E02001624',
        '1ED' => 'E02001624',
        '1EE' => 'E02001624',
        '1EF' => 'E02001624',
        '1EG' => 'E02001624',
        '1EH' => 'E02001628',
        '1EJ' => 'E02001628',
        '1EL' => 'E02001628',
        '1EN' => 'E02001628',
        '1EP' => 'E02001628',
        '1EQ' => 'E02001624',
        '1ER' => 'E02001628',
        '1ES' => 'E02001628',
        '1EU' => 'E02001628',
        '1EW' => 'E02001628',
        '1EY' => 'E02001628',
        '1FB' => 'E02001624',
        '1FD' => 'E02001624',
        '1FF' => 'E02001624',
        '1FH' => 'E02001624',
        '1FQ' => 'E02001624',
        '1FT' => 'E02001624',
        '1FX' => 'E02001624',
        '1FY' => 'E02001624',
        '1FZ' => 'E02001624',
        '1GA' => 'E02001624',
        '1GB' => 'E02001624',
        '1GD' => 'E02001624',
        '1GE' => 'E02001624',
        '1GG' => 'E02001624',
        '1GH' => 'E02001624',
        '1GL' => 'E02001624',
        '1GN' => 'E02001624',
        '1GP' => 'E02001624',
        '1GR' => 'E02001632',
        '1GS' => 'E02001632',
        '1GT' => 'E02001624',
        '1GU' => 'E02001632',
        '1GW' => 'E02001632',
        '1GX' => 'E02001632',
        '1HA' => 'E02001628',
        '1HB' => 'E02001624',
        '1HD' => 'E02001624',
        '1HE' => 'E02001624',
        '1HF' => 'E02001628',
        '1HG' => 'E02001628',
        '1HH' => 'E02001628',
        '1HL' => 'E02001628',
        '1HN' => 'E02001624',
        '1HR' => 'E02006868',
        '1HS' => 'E02001624',
        '1HT' => 'E02001617',
        '1HU' => 'E02001632',
        '1HW' => 'E02001617',
        '1HY' => 'E02001632',
        '1JA' => 'E02001624',
        '1JB' => 'E02001624',
        '1JD' => 'E02006868',
        '1JJ' => 'E02001628',
        '1JQ' => 'E02001624',
        '1JR' => 'E02001624',
        '1JS' => 'E02001624',
        '1JT' => 'E02001624',
        '1JU' => 'E02001624',
        '1JW' => 'E02001624',
        '1JX' => 'E02001624',
        '1JY' => 'E02001624',
        '1JZ' => 'E02001624',
        '1LA' => 'E02001624',
        '1LB' => 'E02001624',
        '1LD' => 'E02001624',
        '1LE' => 'E02001624',
        '1LF' => 'E02001624',
        '1LG' => 'E02001624',
        '1LH' => 'E02001624',
        '1LJ' => 'E02001624',
        '1LL' => 'E02001624',
        '1LN' => 'E02001624',
        '1LP' => 'E02001624',
        '1LQ' => 'E02001624',
        '1LR' => 'E02001624',
        '1LS' => 'E02001624',
        '1LT' => 'E02001624',
        '1LU' => 'E02001624',
        '1LW' => 'E02001624',
        '1LX' => 'E02001624',
        '1LY' => 'E02001624',
        '1LZ' => 'E02001624',
        '1NA' => 'E02001624',
        '1NB' => 'E02001624',
        '1ND' => 'E02001624',
        '1NE' => 'E02001624',
        '1NF' => 'E02001624',
        '1NG' => 'E02001624',
        '1NJ' => 'E02001624',
        '1NL' => 'E02001624',
        '1NN' => 'E02001624',
        '1NP' => 'E02001624',
        '1NQ' => 'E02001624',
        '1NR' => 'E02001624',
        '1NS' => 'E02001624',
        '1NT' => 'E02001624',
        '1NU' => 'E02001624',
        '1NW' => 'E02001624',
        '1NX' => 'E02001624',
        '1NY' => 'E02001624',
        '1NZ' => 'E02001624',
        '1PA' => 'E02001624',
        '1PB' => 'E02001624',
        '1PD' => 'E02001624',
        '1PE' => 'E02001624',
        '1PF' => 'E02001624',
        '1PG' => 'E02001624',
        '1PH' => 'E02001624',
        '1PJ' => 'E02001624',
        '1PL' => 'E02001624',
        '1PN' => 'E02001624',
        '1PP' => 'E02001624',
        '1PQ' => 'E02001624',
        '1PR' => 'E02001624',
        '1PS' => 'E02001624',
        '1PT' => 'E02001624',
        '1PU' => 'E02001624',
        '1PW' => 'E02001624',
        '1PX' => 'E02001624',
        '1PY' => 'E02001624',
        '1PZ' => 'E02001624',
        '1QA' => 'E02001624',
        '1QB' => 'E02001624',
        '1QD' => 'E02001624',
        '1QE' => 'E02001624',
        '1QF' => 'E02001624',
        '1QP' => 'E02001628',
        '1QQ' => 'E02001628',
        '1QR' => 'E02001628',
        '1QS' => 'E02001628',
        '1QT' => 'E02001628',
        '1QU' => 'E02001628',
        '1QW' => 'E02006868',
        '1QX' => 'E02001628',
        '1QY' => 'E02001628',
        '1QZ' => 'E02001628',
        '1RA' => 'E02001602',
        '1RB' => 'E02001628',
        '1RD' => 'E02001628',
        '1RE' => 'E02001628',
        '1RF' => 'E02001628',
        '1RG' => 'E02001628',
        '1RH' => 'E02001628',
        '1RJ' => 'E02001628',
        '1RL' => 'E02001628',
        '1RN' => 'E02001628',
        '1RP' => 'E02001628',
        '1RQ' => 'E02001628',
        '1RR' => 'E02001628',
        '1RS' => 'E02001628',
        '1RT' => 'E02001628',
        '1RU' => 'E02001628',
        '1RW' => 'E02001628',
        '1RX' => 'E02001628',
        '1RY' => 'E02001628',
        '1RZ' => 'E02001628',
        '1SA' => 'E02001628',
        '1SB' => 'E02001628',
        '1SD' => 'E02001628',
        '1SE' => 'E02001628',
        '1SF' => 'E02001628',
        '1SG' => 'E02001628',
        '1SH' => 'E02001628',
        '1SJ' => 'E02001628',
        '1SL' => 'E02001628',
        '1SN' => 'E02001628',
        '1SP' => 'E02001628',
        '1SQ' => 'E02001628',
        '1SR' => 'E02001628',
        '1SS' => 'E02001628',
        '1ST' => 'E02001628',
        '1SU' => 'E02001628',
        '1SW' => 'E02001628',
        '1SX' => 'E02001628',
        '1SY' => 'E02001628',
        '1TA' => 'E02001628',
        '1TB' => 'E02001628',
        '1TD' => 'E02001628',
        '1TF' => 'E02001628',
        '1TG' => 'E02001628',
        '1TH' => 'E02001637',
        '1TJ' => 'E02001624',
        '1TL' => 'E02001637',
        '1TN' => 'E02001628',
        '1TP' => 'E02001628',
        '1TQ' => 'E02001628',
        '1TR' => 'E02006868',
        '1TS' => 'E02001637',
        '1TT' => 'E02001628',
        '1TU' => 'E02001628',
        '1TW' => 'E02001628',
        '1TX' => 'E02001628',
        '1TY' => 'E02006868',
        '1TZ' => 'E02001628',
        '1UA' => 'E02001628',
        '1UB' => 'E02001628',
        '1UD' => 'E02001628',
        '1UE' => 'E02001628',
        '1UF' => 'E02001628',
        '1UG' => 'E02001628',
        '1UH' => 'E02001628',
        '1UJ' => 'E02001628',
        '1UL' => 'E02001628',
        '1UN' => 'E02001628',
        '1UP' => 'E02001628',
        '1UQ' => 'E02001628',
        '1UR' => 'E02001628',
        '1US' => 'E02001628',
        '1UT' => 'E02001628',
        '1UU' => 'E02001628',
        '1UW' => 'E02001628',
        '1UX' => 'E02001632',
        '1UY' => 'E02001628',
        '1UZ' => 'E02001628',
        '1WA' => 'E02001628',
        '1WB' => 'E02001628',
        '1WD' => 'E02001628',
        '1WE' => 'E02001628',
        '1WF' => 'E02001628',
        '1WG' => 'E02001628',
        '1WH' => 'E02001628',
        '1WJ' => 'E02001628',
        '1WL' => 'E02001628',
        '1WN' => 'E02001628',
        '1WP' => 'E02001628',
        '1WQ' => 'E02001628',
        '1WR' => 'E02001628',
        '1WS' => 'E02001628',
        '1WT' => 'E02001628',
        '1WU' => 'E02001628',
        '1WW' => 'E02001628',
        '1WX' => 'E02001628',
        '1WY' => 'E02001628',
        '1WZ' => 'E02001628',
        '1XA' => 'E02001628',
        '1XB' => 'E02001628',
        '1XD' => 'E02001632',
        '1XE' => 'E02001628',
        '1XF' => 'E02001628',
        '1XG' => 'E02001624',
        '1XH' => 'E02001628',
        '1XJ' => 'E02001632',
        '1XL' => 'E02006868',
        '1XN' => 'E02001632',
        '1XP' => 'E02001628',
        '1XQ' => 'E02001632',
        '1XR' => 'E02001632',
        '1XS' => 'E02001628',
        '1XT' => 'E02001628',
        '1XU' => 'E02001637',
        '1XW' => 'E02001624',
        '1XX' => 'E02001637',
        '1XY' => 'E02001637',
        '1XZ' => 'E02001628',
        '1YA' => 'E02001632',
        '1YB' => 'E02001624',
        '1YD' => 'E02001632',
        '1YE' => 'E02001624',
        '1YF' => 'E02001632',
        '1YG' => 'E02001624',
        '1YH' => 'E02001624',
        '1YJ' => 'E02001624',
        '1YL' => 'E02001624',
        '1YN' => 'E02001624',
        '1YP' => 'E02001632',
        '1YQ' => 'E02001624',
        '1YR' => 'E02001624',
        '1YS' => 'E02001632',
        '1YT' => 'E02001624',
        '1YU' => 'E02001624',
        '1YW' => 'E02001624',
        '1YX' => 'E02001624',
        '1YY' => 'E02001624',
        '1YZ' => 'E02001624',
        '1ZA' => 'E02001628',
        '1ZS' => 'E02001632',
        '1ZT' => 'E02006868',
        '1ZU' => 'E02001632',
        '2AA' => 'E02001632',
        '2AB' => 'E02001632',
        '2AD' => 'E02001632',
        '2AE' => 'E02001632',
        '2AG' => 'E02001628',
        '2AH' => 'E02001632',
        '2AL' => 'E02001632',
        '2AP' => 'E02001632',
        '2AQ' => 'E02001632',
        '2AR' => 'E02001632',
        '2AT' => 'E02001632',
        '2AZ' => 'E02001632',
        '2BA' => 'E02001632',
        '2BG' => 'E02001632',
        '2BP' => 'E02001632',
        '2BQ' => 'E02001628',
        '2BR' => 'E02001628',
        '2BS' => 'E02001628',
        '2BT' => 'E02001628',
        '2BU' => 'E02001628',
        '2BW' => 'E02001628',
        '2BZ' => 'E02001628',
        '2DA' => 'E02001628',
        '2DB' => 'E02001628',
        '2DD' => 'E02001628',
        '2DE' => 'E02001628',
        '2DF' => 'E02001628',
        '2DG' => 'E02001628',
        '2DH' => 'E02001632',
        '2DJ' => 'E02001628',
        '2DN' => 'E02001628',
        '2DQ' => 'E02001628',
        '2DS' => 'E02001628',
        '2DY' => 'E02001628',
        '2DZ' => 'E02001632',
        '2EA' => 'E02001628',
        '2EF' => 'E02001628',
        '2EG' => 'E02001628',
        '2EH' => 'E02001628',
        '2EJ' => 'E02001628',
        '2EN' => 'E02001628',
        '2EP' => 'E02001628',
        '2EQ' => 'E02001628',
        '2FA' => 'E02001628',
        '2FB' => 'E02001628',
        '2FD' => 'E02001628',
        '2FE' => 'E02001628',
        '2FF' => 'E02001628',
        '2FG' => 'E02001628',
        '2FH' => 'E02001628',
        '2FJ' => 'E02001628',
        '2FL' => 'E02001628',
        '2FN' => 'E02001628',
        '2FQ' => 'E02001632',
        '2FR' => 'E02001628',
        '2FS' => 'E02001628',
        '2FT' => 'E02001624',
        '2FU' => 'E02001628',
        '2FW' => 'E02001628',
        '2FY' => 'E02001628',
        '2FZ' => 'E02001628',
        '2GA' => 'E02001628',
        '2GB' => 'E02001628',
        '2GD' => 'E02001628',
        '2GE' => 'E02006868',
        '2GF' => 'E02006868',
        '2GG' => 'E02006868',
        '2GH' => 'E02006868',
        '2GJ' => 'E02001628',
        '2GL' => 'E02001632',
        '2GN' => 'E02001628',
        '2GP' => 'E02006868',
        '2GQ' => 'E02006868',
        '2GR' => 'E02006868',
        '2GS' => 'E02006868',
        '2GT' => 'E02001632',
        '2GU' => 'E02001632',
        '2GW' => 'E02006868',
        '2GX' => 'E02001632',
        '2GZ' => 'E02006868',
        '2HR' => 'E02001628',
        '2JB' => 'E02001628',
        '2JE' => 'E02001628',
        '2JN' => 'E02001628',
        '2JY' => 'E02001628',
        '2LA' => 'E02001628',
        '2LD' => 'E02001628',
        '2LE' => 'E02001628',
        '2LF' => 'E02001628',
        '2LG' => 'E02001628',
        '2LJ' => 'E02001628',
        '2LL' => 'E02001628',
        '2LN' => 'E02001632',
        '2LQ' => 'E02001628',
        '2LR' => 'E02001628',
        '2LU' => 'E02001628',
        '2LZ' => 'E02001632',
        '2NB' => 'E02001628',
        '2ND' => 'E02001632',
        '2PA' => 'E02001632',
        '2PE' => 'E02001632',
        '2PF' => 'E02001632',
        '2PH' => 'E02001632',
        '2PR' => 'E02001632',
        '2PS' => 'E02001632',
        '2PU' => 'E02001632',
        '2PX' => 'E02001632',
        '2QA' => 'E02001632',
        '2QD' => 'E02001632',
        '2QJ' => 'E02001632',
        '2QL' => 'E02001632',
        '2QQ' => 'E02001632',
        '2RA' => 'E02001628',
        '2RL' => 'E02001628',
        '2RQ' => 'E02001632',
        '2RR' => 'E02001632',
        '2RS' => 'E02001632',
        '2RU' => 'E02006868',
        '2RW' => 'E02006868',
        '2RX' => 'E02001632',
        '2RZ' => 'E02001632',
        '2SA' => 'E02001632',
        '2SB' => 'E02001632',
        '2SD' => 'E02001632',
        '2SG' => 'E02001632',
        '2SH' => 'E02001632',
        '2SJ' => 'E02001632',
        '2SL' => 'E02001632',
        '2SN' => 'E02001632',
        '2SP' => 'E02001632',
        '2SR' => 'E02001632',
        '2SS' => 'E02001632',
        '2ST' => 'E02001628',
        '2SU' => 'E02001632',
        '2TE' => 'E02001628',
        '2TF' => 'E02001632',
        '2TG' => 'E02001632',
        '2TH' => 'E02001632',
        '2TJ' => 'E02001632',
        '2TL' => 'E02001632',
        '2TN' => 'E02001632',
        '2TP' => 'E02001632',
        '2TW' => 'E02001632',
        '2TX' => 'E02001632',
        '2TZ' => 'E02001632',
        '2UA' => 'E02001632',
        '2UB' => 'E02001632',
        '2UD' => 'E02001632',
        '2WL' => 'E02006868',
        '2WN' => 'E02001632',
        '2WP' => 'E02001632',
        '2WQ' => 'E02001632',
        '2WR' => 'E02006868',
        '2WS' => 'E02006868',
        '2WT' => 'E02001632',
        '2WU' => 'E02006868',
        '2WW' => 'E02001632',
        '2WX' => 'E02006868',
        '2WY' => 'E02001632',
        '2WZ' => 'E02001632',
        '2XA' => 'E02001632',
        '2XB' => 'E02001628',
        '2XD' => 'E02006868',
        '2XE' => 'E02001632',
        '2XF' => 'E02001632',
        '2XG' => 'E02001632',
        '2XL' => 'E02006868',
        '2XN' => 'E02006868',
        '2XX' => 'E02001632',
        '2YL' => 'E02001628',
        '2YR' => 'E02001632',
        '2YU' => 'E02001632',
        '2YW' => 'E02001628',
        '2YX' => 'E02001628',
        '2YY' => 'E02006868',
        '2YZ' => 'E02001628',
        '3AA' => 'E02001637',
        '3AB' => 'E02001637',
        '3AD' => 'E02001637',
        '3AE' => 'E02001637',
        '3AF' => 'E02001637',
        '3AG' => 'E02001637',
        '3AH' => 'E02001637',
        '3AJ' => 'E02001637',
        '3AL' => 'E02001637',
        '3AN' => 'E02001637',
        '3AP' => 'E02001637',
        '3AQ' => 'E02001637',
        '3AR' => 'E02001637',
        '3AS' => 'E02001637',
        '3AT' => 'E02001637',
        '3AU' => 'E02001637',
        '3AW' => 'E02001637',
        '3AX' => 'E02001637',
        '3AY' => 'E02001637',
        '3AZ' => 'E02001637',
        '3BA' => 'E02001637',
        '3BB' => 'E02001637',
        '3BD' => 'E02001637',
        '3BE' => 'E02001637',
        '3BG' => 'E02001637',
        '3BH' => 'E02001637',
        '3BJ' => 'E02001637',
        '3BL' => 'E02001637',
        '3BP' => 'E02001637',
        '3BS' => 'E02001637',
        '3BT' => 'E02001637',
        '3BU' => 'E02001637',
        '3BZ' => 'E02001637',
        '3DA' => 'E02001637',
        '3DB' => 'E02001637',
        '3DE' => 'E02001637',
        '3DF' => 'E02001637',
        '3DG' => 'E02001637',
        '3DH' => 'E02001637',
        '3DJ' => 'E02001637',
        '3DL' => 'E02001637',
        '3DN' => 'E02001637',
        '3DT' => 'E02001637',
        '3DY' => 'E02001637',
        '3DZ' => 'E02001637',
        '3EA' => 'E02001637',
        '3EB' => 'E02001637',
        '3ED' => 'E02001637',
        '3EE' => 'E02001637',
        '3EF' => 'E02001637',
        '3EG' => 'E02001637',
        '3EH' => 'E02001637',
        '3EJ' => 'E02001637',
        '3EL' => 'E02001637',
        '3EN' => 'E02001637',
        '3EP' => 'E02001637',
        '3EQ' => 'E02001637',
        '3ER' => 'E02001637',
        '3ES' => 'E02001637',
        '3ET' => 'E02001637',
        '3EU' => 'E02001637',
        '3EW' => 'E02001637',
        '3EX' => 'E02001637',
        '3EY' => 'E02001637',
        '3EZ' => 'E02001637',
        '3FA' => 'E02001637',
        '3FB' => 'E02001637',
        '3FE' => 'E02001637',
        '3FF' => 'E02001637',
        '3FG' => 'E02001637',
        '3FH' => 'E02001637',
        '3FJ' => 'E02001637',
        '3FL' => 'E02001637',
        '3FN' => 'E02001637',
        '3FP' => 'E02001637',
        '3FQ' => 'E02001637',
        '3FR' => 'E02001637',
        '3FS' => 'E02001637',
        '3FT' => 'E02001637',
        '3FU' => 'E02001637',
        '3FW' => 'E02001637',
        '3FX' => 'E02001637',
        '3FY' => 'E02001637',
        '3GD' => 'E02001637',
        '3GY' => 'E02001637',
        '3GZ' => 'E02001637',
        '3HB' => 'E02001632',
        '3HD' => 'E02001637',
        '3HE' => 'E02001637',
        '3HF' => 'E02001637',
        '3HG' => 'E02001637',
        '3HH' => 'E02001637',
        '3HJ' => 'E02001637',
        '3HL' => 'E02001637',
        '3HN' => 'E02001637',
        '3HP' => 'E02001637',
        '3HQ' => 'E02001637',
        '3HR' => 'E02001637',
        '3HS' => 'E02001637',
        '3HT' => 'E02001637',
        '3HU' => 'E02001637',
        '3HW' => 'E02001637',
        '3HX' => 'E02001637',
        '3HY' => 'E02001637',
        '3JA' => 'E02001637',
        '3JB' => 'E02001637',
        '3JD' => 'E02001632',
        '3JE' => 'E02001637',
        '3JF' => 'E02001637',
        '3JG' => 'E02001637',
        '3JJ' => 'E02001637',
        '3JL' => 'E02001637',
        '3JN' => 'E02001637',
        '3JP' => 'E02001637',
        '3JQ' => 'E02001637',
        '3JR' => 'E02001637',
        '3JS' => 'E02001637',
        '3JT' => 'E02001637',
        '3JU' => 'E02001637',
        '3JW' => 'E02001637',
        '3JX' => 'E02001637',
        '3JY' => 'E02001637',
        '3LA' => 'E02001637',
        '3LB' => 'E02001637',
        '3LD' => 'E02001637',
        '3LE' => 'E02001637',
        '3LG' => 'E02001637',
        '3LJ' => 'E02001637',
        '3LL' => 'E02001637',
        '3LN' => 'E02001637',
        '3LP' => 'E02001637',
        '3LQ' => 'E02001637',
        '3LR' => 'E02001649',
        '3LS' => 'E02001637',
        '3LU' => 'E02001637',
        '3LX' => 'E02001637',
        '3LY' => 'E02001637',
        '3NA' => 'E02001637',
        '3NE' => 'E02001637',
        '3NF' => 'E02001637',
        '3NH' => 'E02001637',
        '3NJ' => 'E02001637',
        '3PA' => 'E02001632',
        '3QA' => 'E02001632',
        '3QB' => 'E02001632',
        '3QD' => 'E02001632',
        '3QE' => 'E02001632',
        '3QF' => 'E02001632',
        '3QH' => 'E02001632',
        '3QJ' => 'E02001632',
        '3QL' => 'E02001632',
        '3QN' => 'E02001632',
        '3QP' => 'E02001632',
        '3QQ' => 'E02001632',
        '3QR' => 'E02001632',
        '3QS' => 'E02001632',
        '3QT' => 'E02001632',
        '3QU' => 'E02001632',
        '3QW' => 'E02001632',
        '3QY' => 'E02001632',
        '3RA' => 'E02001632',
        '3RB' => 'E02001632',
        '3RD' => 'E02001632',
        '3RE' => 'E02001632',
        '3RF' => 'E02001632',
        '3RG' => 'E02001632',
        '3RH' => 'E02001632',
        '3RL' => 'E02001632',
        '3RN' => 'E02001632',
        '3RP' => 'E02001632',
        '3RQ' => 'E02001632',
        '3RR' => 'E02001632',
        '3RS' => 'E02001632',
        '3RT' => 'E02001632',
        '3RU' => 'E02001624',
        '3RW' => 'E02001632',
        '3RX' => 'E02001637',
        '3RY' => 'E02001624',
        '3SA' => 'E02001632',
        '3SB' => 'E02001632',
        '3SD' => 'E02001632',
        '3SE' => 'E02001632',
        '3SF' => 'E02001637',
        '3SG' => 'E02001632',
        '3SH' => 'E02001632',
        '3SJ' => 'E02001632',
        '3SL' => 'E02001632',
        '3SN' => 'E02001632',
        '3SP' => 'E02001632',
        '3SQ' => 'E02001632',
        '3SR' => 'E02001637',
        '3SS' => 'E02001632',
        '3ST' => 'E02001632',
        '3SU' => 'E02001632',
        '3SW' => 'E02001632',
        '3SX' => 'E02001632',
        '3SY' => 'E02001632',
        '3SZ' => 'E02001632',
        '3TA' => 'E02001632',
        '3TB' => 'E02001632',
        '3TD' => 'E02001632',
        '3TE' => 'E02001632',
        '3TF' => 'E02001632',
        '3TG' => 'E02001632',
        '3TH' => 'E02001632',
        '3TJ' => 'E02001632',
        '3TL' => 'E02001632',
        '3TN' => 'E02001632',
        '3TP' => 'E02001632',
        '3TQ' => 'E02001632',
        '3TR' => 'E02001632',
        '3TS' => 'E02001632',
        '3TT' => 'E02001637',
        '3TU' => 'E02001632',
        '3TW' => 'E02001632',
        '3TY' => 'E02001632',
        '3UH' => 'E02006868',
        '3UJ' => 'E02006868',
        '3UL' => 'E02001632',
        '3UN' => 'E02006868',
        '3UP' => 'E02001637',
        '3UQ' => 'E02001632',
        '3UR' => 'E02001637',
        '3US' => 'E02001632',
        '3UT' => 'E02001632',
        '3UU' => 'E02001632',
        '3UW' => 'E02001632',
        '3UX' => 'E02001632',
        '3UY' => 'E02001632',
        '3UZ' => 'E02001632',
        '3WA' => 'E02001637',
        '3WB' => 'E02001637',
        '3WD' => 'E02001632',
        '3WE' => 'E02001632',
        '3WF' => 'E02001637',
        '3WG' => 'E02001632',
        '3WH' => 'E02001632',
        '3WJ' => 'E02001637',
        '3WL' => 'E02001632',
        '3WN' => 'E02001632',
        '3WP' => 'E02001632',
        '3WQ' => 'E02001632',
        '3WR' => 'E02001632',
        '3WS' => 'E02001632',
        '3WT' => 'E02001632',
        '3WU' => 'E02001632',
        '3WW' => 'E02001632',
        '3WX' => 'E02001632',
        '3WY' => 'E02001632',
        '3WZ' => 'E02001632',
        '3XA' => 'E02001632',
        '3XB' => 'E02001632',
        '3XE' => 'E02001632',
        '3XG' => 'E02001632',
        '3XH' => 'E02001632',
        '3XJ' => 'E02001632',
        '3XL' => 'E02001632',
        '3XN' => 'E02001632',
        '3XP' => 'E02001632',
        '3XQ' => 'E02001632',
        '3XR' => 'E02001632',
        '3XS' => 'E02001632',
        '3XT' => 'E02001632',
        '3XU' => 'E02001632',
        '3XW' => 'E02001632',
        '3XX' => 'E02001632',
        '3XY' => 'E02001632',
        '3XZ' => 'E02001632',
        '3YD' => 'E02001632',
        '3YE' => 'E02001632',
        '3YH' => 'E02001632',
        '3YY' => 'E02001637',
        '3YZ' => 'E02001632',
        '4AA' => 'E02001642',
        '4AB' => 'E02001642',
        '4AD' => 'E02001642',
        '4AE' => 'E02001647',
        '4AF' => 'E02001642',
        '4AG' => 'E02001642',
        '4AH' => 'E02001642',
        '4AJ' => 'E02001642',
        '4AL' => 'E02001642',
        '4AN' => 'E02001642',
        '4AP' => 'E02001642',
        '4AQ' => 'E02001642',
        '4AR' => 'E02001642',
        '4AS' => 'E02001642',
        '4AT' => 'E02001642',
        '4AU' => 'E02001642',
        '4AW' => 'E02001637',
        '4BA' => 'E02001647',
        '4BB' => 'E02001647',
        '4BD' => 'E02001647',
        '4BE' => 'E02001647',
        '4BG' => 'E02001642',
        '4BH' => 'E02001642',
        '4BJ' => 'E02001642',
        '4BL' => 'E02001642',
        '4BN' => 'E02001642',
        '4BP' => 'E02001642',
        '4BQ' => 'E02001642',
        '4BR' => 'E02001642',
        '4BS' => 'E02001642',
        '4BT' => 'E02001642',
        '4BU' => 'E02001642',
        '4BW' => 'E02001642',
        '4BX' => 'E02001642',
        '4BY' => 'E02001642',
        '4BZ' => 'E02001642',
        '4DA' => 'E02001642',
        '4DZ' => 'E02001642',
        '4EA' => 'E02001649',
        '4EB' => 'E02001649',
        '4ED' => 'E02001649',
        '4EE' => 'E02001642',
        '4EF' => 'E02001642',
        '4EG' => 'E02001642',
        '4EH' => 'E02001642',
        '4EJ' => 'E02001642',
        '4EL' => 'E02001649',
        '4EN' => 'E02001642',
        '4EP' => 'E02001647',
        '4ER' => 'E02001642',
        '4ES' => 'E02001642',
        '4ET' => 'E02001642',
        '4EU' => 'E02001642',
        '4EX' => 'E02001642',
        '4EY' => 'E02001642',
        '4EZ' => 'E02001642',
        '4FA' => 'E02001642',
        '4FD' => 'E02001632',
        '4GA' => 'E02001642',
        '4GB' => 'E02001642',
        '4GD' => 'E02001642',
        '4GE' => 'E02001642',
        '4GF' => 'E02001642',
        '4GG' => 'E02001642',
        '4GH' => 'E02001642',
        '4GJ' => 'E02001642',
        '4GL' => 'E02001642',
        '4GN' => 'E02001642',
        '4GP' => 'E02001642',
        '4GQ' => 'E02001642',
        '4GR' => 'E02001642',
        '4GS' => 'E02001642',
        '4GT' => 'E02001642',
        '4GU' => 'E02001642',
        '4GW' => 'E02001642',
        '4GX' => 'E02001642',
        '4GY' => 'E02001642',
        '4GZ' => 'E02001642',
        '4HA' => 'E02001642',
        '4HB' => 'E02001642',
        '4HD' => 'E02001642',
        '4HE' => 'E02001642',
        '4HF' => 'E02001642',
        '4HG' => 'E02001642',
        '4HH' => 'E02001642',
        '4HQ' => 'E02001642',
        '4JA' => 'E02001642',
        '4JB' => 'E02001642',
        '4JD' => 'E02001642',
        '4JE' => 'E02001642',
        '4JF' => 'E02001642',
        '4JG' => 'E02001642',
        '4JH' => 'E02001642',
        '4JJ' => 'E02001642',
        '4JL' => 'E02001642',
        '4JN' => 'E02001642',
        '4JP' => 'E02001642',
        '4JQ' => 'E02001642',
        '4JR' => 'E02001642',
        '4JS' => 'E02001642',
        '4JT' => 'E02001642',
        '4JU' => 'E02001642',
        '4JW' => 'E02001637',
        '4JX' => 'E02001637',
        '4JY' => 'E02001637',
        '4JZ' => 'E02001642',
        '4LA' => 'E02001637',
        '4LB' => 'E02001637',
        '4LD' => 'E02001637',
        '4LE' => 'E02001637',
        '4LF' => 'E02001637',
        '4LG' => 'E02001637',
        '4LH' => 'E02001637',
        '4LJ' => 'E02001637',
        '4LL' => 'E02001637',
        '4LN' => 'E02001637',
        '4LP' => 'E02001637',
        '4LQ' => 'E02001637',
        '4LR' => 'E02001642',
        '4LS' => 'E02001649',
        '4LT' => 'E02001649',
        '4NT' => 'E02001637',
        '4NU' => 'E02001637',
        '4PA' => 'E02001637',
        '4PB' => 'E02001637',
        '4PD' => 'E02001642',
        '4PE' => 'E02001637',
        '4PF' => 'E02001642',
        '4PG' => 'E02001642',
        '4PH' => 'E02001642',
        '4PJ' => 'E02001642',
        '4PL' => 'E02001642',
        '4PN' => 'E02001642',
        '4PP' => 'E02001642',
        '4PQ' => 'E02001642',
        '4PR' => 'E02001642',
        '4PS' => 'E02001642',
        '4PT' => 'E02001642',
        '4PU' => 'E02001642',
        '4PW' => 'E02001642',
        '4PX' => 'E02001642',
        '4PY' => 'E02001642',
        '4PZ' => 'E02001642',
        '4QA' => 'E02001642',
        '4QB' => 'E02001637',
        '4QD' => 'E02001642',
        '4QF' => 'E02001642',
        '4QG' => 'E02001642',
        '4QH' => 'E02001642',
        '4QJ' => 'E02001642',
        '4QL' => 'E02001642',
        '4RA' => 'E02001637',
        '4RB' => 'E02001637',
        '4RD' => 'E02001637',
        '4RE' => 'E02001637',
        '4RF' => 'E02001637',
        '4RH' => 'E02001637',
        '4RJ' => 'E02001637',
        '4RL' => 'E02001637',
        '4RN' => 'E02001637',
        '4RP' => 'E02001637',
        '4RW' => 'E02001637',
        '4RX' => 'E02001637',
        '4RY' => 'E02001637',
        '4RZ' => 'E02001637',
        '4TA' => 'E02001637',
        '4TB' => 'E02001642',
        '4TD' => 'E02001637',
        '4TH' => 'E02001637',
        '4TJ' => 'E02001642',
        '4TL' => 'E02001637',
        '4TN' => 'E02001642',
        '4TP' => 'E02001642',
        '4TQ' => 'E02001642',
        '4TR' => 'E02001642',
        '4TS' => 'E02001642',
        '4TW' => 'E02001642',
        '4TX' => 'E02001637',
        '4TY' => 'E02001642',
        '4UA' => 'E02006868',
        '4UB' => 'E02006868',
        '4UF' => 'E02006868',
        '4UH' => 'E02006868',
        '4UJ' => 'E02006868',
        '4UL' => 'E02001637',
        '4UN' => 'E02001637',
        '4WA' => 'E02001637',
        '4WB' => 'E02001637',
        '4WD' => 'E02001637',
        '4WE' => 'E02006868',
        '4WF' => 'E02001637',
        '4WG' => 'E02001637',
        '4WH' => 'E02001649',
        '4WJ' => 'E02001649',
        '4WL' => 'E02001632',
        '4WN' => 'E02001642',
        '4WP' => 'E02001632',
        '4WQ' => 'E02001637',
        '4WU' => 'E02001637',
        '4WW' => 'E02001642',
        '4WX' => 'E02001632',
        '4WY' => 'E02001632',
        '4WZ' => 'E02001632',
        '4XW' => 'E02001632',
        '4XX' => 'E02001632',
        '4XY' => 'E02001632',
        '4XZ' => 'E02001642',
        '4YA' => 'E02001642',
        '4YB' => 'E02001649',
        '4YD' => 'E02001642',
        '4YE' => 'E02001649',
        '4YF' => 'E02001642',
        '4YG' => 'E02001632',
        '4YH' => 'E02001632',
        '4YJ' => 'E02001649',
        '4YL' => 'E02001632',
        '4YN' => 'E02001632',
        '4YP' => 'E02001649',
        '4YQ' => 'E02001642',
        '4YR' => 'E02001632',
        '4YS' => 'E02001632',
        '4YT' => 'E02001632',
        '4YU' => 'E02001632',
        '4YW' => 'E02001632',
        '4YX' => 'E02006868',
        '4YY' => 'E02001649',
        '4YZ' => 'E02001649',
        '4ZS' => 'E02001632',
        '5AA' => 'E02001637',
        '5AB' => 'E02001637',
        '5AD' => 'E02001637',
        '5AE' => 'E02001637',
        '5AF' => 'E02001637',
        '5AG' => 'E02001637',
        '5AH' => 'E02001628',
        '5AJ' => 'E02001637',
        '5AL' => 'E02001637',
        '5AN' => 'E02001637',
        '5AP' => 'E02001628',
        '5AQ' => 'E02001628',
        '5AR' => 'E02001637',
        '5AS' => 'E02001637',
        '5AT' => 'E02001637',
        '5AU' => 'E02001637',
        '5AW' => 'E02001637',
        '5AX' => 'E02001628',
        '5AY' => 'E02001628',
        '5AZ' => 'E02001628',
        '5BD' => 'E02001628',
        '5BE' => 'E02001628',
        '5BG' => 'E02001637',
        '5BH' => 'E02001637',
        '5BJ' => 'E02001637',
        '5BL' => 'E02001637',
        '5BP' => 'E02001637',
        '5BQ' => 'E02001637',
        '5BR' => 'E02001637',
        '5BU' => 'E02001628',
        '5BW' => 'E02001637',
        '5BX' => 'E02001628',
        '5BY' => 'E02001628',
        '5BZ' => 'E02001628',
        '5DA' => 'E02001628',
        '5DB' => 'E02001628',
        '5DD' => 'E02001628',
        '5DE' => 'E02001628',
        '5DF' => 'E02001628',
        '5DG' => 'E02001628',
        '5DH' => 'E02001637',
        '5DJ' => 'E02001628',
        '5DL' => 'E02001628',
        '5DN' => 'E02001628',
        '5DP' => 'E02001628',
        '5DQ' => 'E02001628',
        '5DR' => 'E02001628',
        '5DS' => 'E02001628',
        '5DT' => 'E02001628',
        '5DU' => 'E02001628',
        '5DW' => 'E02001628',
        '5DX' => 'E02001628',
        '5EA' => 'E02001628',
        '5EB' => 'E02001628',
        '5ED' => 'E02001637',
        '5EE' => 'E02001637',
        '5EF' => 'E02001628',
        '5EG' => 'E02001628',
        '5EH' => 'E02001628',
        '5EJ' => 'E02001637',
        '5EL' => 'E02001628',
        '5EN' => 'E02001637',
        '5EP' => 'E02001637',
        '5EQ' => 'E02001637',
        '5ES' => 'E02001628',
        '5ET' => 'E02001628',
        '5EU' => 'E02001637',
        '5EW' => 'E02001637',
        '5EX' => 'E02001628',
        '5EZ' => 'E02001628',
        '5FD' => 'E02001637',
        '5FE' => 'E02001637',
        '5FF' => 'E02001637',
        '5FJ' => 'E02001637',
        '5FL' => 'E02001637',
        '5FN' => 'E02001637',
        '5FP' => 'E02001637',
        '5FQ' => 'E02001637',
        '5FT' => 'E02001637',
        '5FU' => 'E02001637',
        '5FZ' => 'E02001628',
        '5GA' => 'E02001637',
        '5GB' => 'E02001637',
        '5GD' => 'E02001637',
        '5GE' => 'E02001637',
        '5GF' => 'E02001637',
        '5GG' => 'E02001637',
        '5GH' => 'E02001637',
        '5GJ' => 'E02001637',
        '5GL' => 'E02001628',
        '5GN' => 'E02001628',
        '5GP' => 'E02001628',
        '5HA' => 'E02001628',
        '5HB' => 'E02001637',
        '5HD' => 'E02001637',
        '5HE' => 'E02001637',
        '5HF' => 'E02001637',
        '5HH' => 'E02001642',
        '5HJ' => 'E02001637',
        '5HL' => 'E02001637',
        '5HN' => 'E02001637',
        '5HP' => 'E02001637',
        '5HQ' => 'E02001637',
        '5HU' => 'E02001637',
        '5HX' => 'E02001637',
        '5HY' => 'E02001637',
        '5HZ' => 'E02001637',
        '5JA' => 'E02001637',
        '5JB' => 'E02001637',
        '5JD' => 'E02001637',
        '5JE' => 'E02001637',
        '5JF' => 'E02001637',
        '5JG' => 'E02001637',
        '5JH' => 'E02001642',
        '5JJ' => 'E02001642',
        '5JL' => 'E02001642',
        '5JN' => 'E02001642',
        '5LA' => 'E02001637',
        '5LB' => 'E02001637',
        '5LE' => 'E02001628',
        '5LF' => 'E02001637',
        '5LG' => 'E02001637',
        '5LH' => 'E02001637',
        '5LJ' => 'E02001637',
        '5LL' => 'E02001637',
        '5LN' => 'E02001637',
        '5LQ' => 'E02001637',
        '5LR' => 'E02001637',
        '5LS' => 'E02001637',
        '5LT' => 'E02001637',
        '5LX' => 'E02001637',
        '5NA' => 'E02001637',
        '5NB' => 'E02001637',
        '5NE' => 'E02001637',
        '5NF' => 'E02001637',
        '5NJ' => 'E02001637',
        '5NN' => 'E02001637',
        '5NP' => 'E02001637',
        '5NQ' => 'E02001637',
        '5PA' => 'E02001637',
        '5PB' => 'E02001637',
        '5PD' => 'E02001637',
        '5PE' => 'E02001637',
        '5PF' => 'E02001637',
        '5PH' => 'E02001637',
        '5PJ' => 'E02001637',
        '5PN' => 'E02001637',
        '5PP' => 'E02001637',
        '5PQ' => 'E02001637',
        '5PR' => 'E02001637',
        '5PS' => 'E02001637',
        '5PT' => 'E02001637',
        '5QA' => 'E02001637',
        '5QN' => 'E02001637',
        '5WY' => 'E02001637',
        '5WZ' => 'E02001628',
        '5YP' => 'E02001628',
        '5YQ' => 'E02001632',
        '5YR' => 'E02001637',
        '5YS' => 'E02001632',
        '5YT' => 'E02001632',
        '5YU' => 'E02001632',
        '5YW' => 'E02001632',
        '5YX' => 'E02006868',
        '5YY' => 'E02001637',
        '5YZ' => 'E02001637',
        '9AA' => 'E02001632',
        '9AB' => 'E02006868',
        '9AD' => 'E02001632',
        '9AE' => 'E02006868',
        '9AF' => 'E02001632',
        '9AH' => 'E02001632',
        '9AJ' => 'E02001632',
        '9AP' => 'E02001632',
        '9AQ' => 'E02001632',
        '9AR' => 'E02006868',
        '9AT' => 'E02001632',
        '9AU' => 'E02001632',
        '9AW' => 'E02001632',
        '9AX' => 'E02001632',
        '9AY' => 'E02001632',
        '9AZ' => 'E02006868',
        '9BA' => 'E02001632',
        '9BB' => 'E02001632',
        '9BD' => 'E02001632',
        '9BE' => 'E02001632',
        '9BF' => 'E02001632',
        '9BG' => 'E02001632',
        '9BH' => 'E02001632',
        '9BJ' => 'E02001632',
        '9BL' => 'E02001632',
        '9BN' => 'E02001632',
        '9BP' => 'E02001632',
        '9BR' => 'E02001632',
        '9BS' => 'E02001632',
        '9BT' => 'E02001632',
        '9BU' => 'E02001632',
        '9BW' => 'E02001632',
        '9BX' => 'E02001632',
        '9BY' => 'E02001632',
        '9BZ' => 'E02001632',
        '9DA' => 'E02001632',
        '9DB' => 'E02001632',
        '9DD' => 'E02006868',
        '9DE' => 'E02001632',
        '9DF' => 'E02001632',
        '9DG' => 'E02001632',
        '9DH' => 'E02006868',
        '9DJ' => 'E02006868',
        '9DL' => 'E02001632',
        '9DN' => 'E02001632',
        '9DP' => 'E02001632',
        '9DR' => 'E02006868',
        '9DS' => 'E02001632',
        '9DT' => 'E02001632',
        '9DU' => 'E02006868',
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
