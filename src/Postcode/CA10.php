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
final class CA10
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02004009',
        '1AB' => 'E02004009',
        '1AD' => 'E02004009',
        '1AE' => 'E02004009',
        '1AF' => 'E02004009',
        '1AG' => 'E02004009',
        '1AH' => 'E02004009',
        '1AJ' => 'E02004009',
        '1AL' => 'E02004009',
        '1AN' => 'E02004008',
        '1AP' => 'E02004008',
        '1AQ' => 'E02004009',
        '1AR' => 'E02004009',
        '1AS' => 'E02004009',
        '1AT' => 'E02004009',
        '1AU' => 'E02004009',
        '1AW' => 'E02004009',
        '1AX' => 'E02004009',
        '1AY' => 'E02004009',
        '1AZ' => 'E02004009',
        '1BA' => 'E02004009',
        '1BB' => 'E02004009',
        '1BD' => 'E02004009',
        '1BE' => 'E02004009',
        '1BF' => 'E02004009',
        '1BG' => 'E02004009',
        '1BH' => 'E02004009',
        '1BJ' => 'E02004009',
        '1BL' => 'E02004009',
        '1BN' => 'E02004009',
        '1BP' => 'E02004008',
        '1BQ' => 'E02004009',
        '1BS' => 'E02004009',
        '1BT' => 'E02004009',
        '1BU' => 'E02004009',
        '1BW' => 'E02004009',
        '1BX' => 'E02004009',
        '1BY' => 'E02004009',
        '1BZ' => 'E02004009',
        '1DA' => 'E02004013',
        '1DB' => 'E02004008',
        '1DD' => 'E02004008',
        '1DE' => 'E02004008',
        '1DF' => 'E02004008',
        '1DG' => 'E02004008',
        '1DH' => 'E02004008',
        '1DJ' => 'E02004008',
        '1DL' => 'E02004008',
        '1DN' => 'E02004008',
        '1DP' => 'E02004008',
        '1DQ' => 'E02004008',
        '1DR' => 'E02004008',
        '1DS' => 'E02004008',
        '1DT' => 'E02004008',
        '1DU' => 'E02004008',
        '1DW' => 'E02004008',
        '1DX' => 'E02004008',
        '1DY' => 'E02004008',
        '1DZ' => 'E02004008',
        '1EA' => 'E02004008',
        '1EB' => 'E02004008',
        '1ED' => 'E02004008',
        '1EE' => 'E02004008',
        '1EF' => 'E02004008',
        '1EG' => 'E02004008',
        '1EH' => 'E02004008',
        '1EJ' => 'E02004008',
        '1EL' => 'E02004008',
        '1EN' => 'E02004008',
        '1EP' => 'E02004008',
        '1EQ' => 'E02004008',
        '1ER' => 'E02004008',
        '1ES' => 'E02004008',
        '1ET' => 'E02004009',
        '1EU' => 'E02004008',
        '1EW' => 'E02004008',
        '1EX' => 'E02004008',
        '1EY' => 'E02004008',
        '1EZ' => 'E02004008',
        '1FA' => 'E02004008',
        '1GA' => 'E02004008',
        '1GB' => 'E02004010',
        '1GD' => 'E02004010',
        '1GE' => 'E02004008',
        '1GF' => 'E02004008',
        '1GG' => 'E02004010',
        '1HA' => 'E02004008',
        '1HB' => 'E02004008',
        '1HD' => 'E02004008',
        '1HE' => 'E02004008',
        '1HF' => 'E02004008',
        '1HG' => 'E02004008',
        '1HH' => 'E02004008',
        '1HJ' => 'E02004008',
        '1HL' => 'E02004008',
        '1HN' => 'E02004008',
        '1HP' => 'E02004008',
        '1HQ' => 'E02004008',
        '1HR' => 'E02004008',
        '1HW' => 'E02004008',
        '1HY' => 'E02004008',
        '1HZ' => 'E02004008',
        '1JA' => 'E02004008',
        '1JB' => 'E02004008',
        '1JE' => 'E02004008',
        '1JG' => 'E02004008',
        '1JH' => 'E02004008',
        '1JJ' => 'E02004008',
        '1JL' => 'E02004008',
        '1JQ' => 'E02004008',
        '1JS' => 'E02004008',
        '1JT' => 'E02004008',
        '1JU' => 'E02004008',
        '1JY' => 'E02004008',
        '1JZ' => 'E02004008',
        '1LA' => 'E02004008',
        '1LB' => 'E02004008',
        '1LD' => 'E02004008',
        '1LG' => 'E02004008',
        '1LH' => 'E02004008',
        '1LJ' => 'E02004008',
        '1LL' => 'E02004008',
        '1LN' => 'E02004008',
        '1LQ' => 'E02004008',
        '1LU' => 'E02004008',
        '1LW' => 'E02004008',
        '1LX' => 'E02004008',
        '1LY' => 'E02004008',
        '1LZ' => 'E02004008',
        '1NA' => 'E02004008',
        '1NB' => 'E02004008',
        '1ND' => 'E02004008',
        '1NE' => 'E02004008',
        '1NF' => 'E02004008',
        '1NG' => 'E02004008',
        '1NH' => 'E02004008',
        '1NJ' => 'E02004008',
        '1NL' => 'E02004008',
        '1NN' => 'E02004008',
        '1NP' => 'E02004008',
        '1NQ' => 'E02004008',
        '1NR' => 'E02004008',
        '1NS' => 'E02004008',
        '1NT' => 'E02004008',
        '1NU' => 'E02004008',
        '1NW' => 'E02004008',
        '1NX' => 'E02004008',
        '1NY' => 'E02004008',
        '1NZ' => 'E02004008',
        '1PA' => 'E02004008',
        '1PB' => 'E02004008',
        '1PD' => 'E02004008',
        '1PE' => 'E02004008',
        '1PH' => 'E02004008',
        '1PJ' => 'E02004008',
        '1PL' => 'E02004008',
        '1PN' => 'E02004008',
        '1PP' => 'E02004008',
        '1PR' => 'E02004008',
        '1PS' => 'E02004008',
        '1PT' => 'E02004008',
        '1PZ' => 'E02004008',
        '1QA' => 'E02004008',
        '1QB' => 'E02004008',
        '1QD' => 'E02004008',
        '1QE' => 'E02004008',
        '1QF' => 'E02004008',
        '1QG' => 'E02004008',
        '1QH' => 'E02004008',
        '1QJ' => 'E02004008',
        '1QL' => 'E02004008',
        '1QN' => 'E02004008',
        '1QP' => 'E02004008',
        '1QQ' => 'E02004008',
        '1QR' => 'E02004008',
        '1QS' => 'E02004008',
        '1QT' => 'E02004008',
        '1QU' => 'E02004008',
        '1QW' => 'E02004008',
        '1QX' => 'E02004008',
        '1QY' => 'E02004008',
        '1QZ' => 'E02004008',
        '1RA' => 'E02004013',
        '1RB' => 'E02004008',
        '1RD' => 'E02004008',
        '1RE' => 'E02004008',
        '1RF' => 'E02004008',
        '1RG' => 'E02004008',
        '1RH' => 'E02004008',
        '1RJ' => 'E02004008',
        '1RL' => 'E02004008',
        '1RN' => 'E02004008',
        '1RP' => 'E02004013',
        '1RQ' => 'E02004008',
        '1RR' => 'E02004013',
        '1RS' => 'E02004013',
        '1RT' => 'E02004013',
        '1RU' => 'E02004013',
        '1RW' => 'E02004013',
        '1RX' => 'E02004013',
        '1RY' => 'E02004013',
        '1RZ' => 'E02004013',
        '1SA' => 'E02004013',
        '1SB' => 'E02004013',
        '1SD' => 'E02004013',
        '1SE' => 'E02004013',
        '1SF' => 'E02004013',
        '1SG' => 'E02004008',
        '1SH' => 'E02004008',
        '1SJ' => 'E02004008',
        '1SL' => 'E02004008',
        '1SN' => 'E02004013',
        '1SP' => 'E02004013',
        '1SR' => 'E02004013',
        '1SS' => 'E02004013',
        '1ST' => 'E02004013',
        '1SW' => 'E02004013',
        '1SY' => 'E02004013',
        '1SZ' => 'E02004013',
        '1TA' => 'E02004013',
        '1TB' => 'E02004013',
        '1TD' => 'E02004008',
        '1TE' => 'E02004013',
        '1TH' => 'E02004013',
        '1TJ' => 'E02004013',
        '1TL' => 'E02004013',
        '1TN' => 'E02004013',
        '1TP' => 'E02004013',
        '1TW' => 'E02004013',
        '1TX' => 'E02004008',
        '1TY' => 'E02004008',
        '1TZ' => 'E02004008',
        '1UA' => 'E02004013',
        '1UB' => 'E02004013',
        '1UD' => 'E02004013',
        '1UE' => 'E02004013',
        '1UF' => 'E02004013',
        '1UG' => 'E02004013',
        '1UH' => 'E02004013',
        '1UJ' => 'E02004013',
        '1UL' => 'E02004013',
        '1UN' => 'E02004013',
        '1UP' => 'E02004013',
        '1UQ' => 'E02004013',
        '1UR' => 'E02004013',
        '1US' => 'E02004013',
        '1UT' => 'E02004013',
        '1UU' => 'E02004013',
        '1UX' => 'E02004013',
        '1UY' => 'E02004013',
        '1UZ' => 'E02004013',
        '1WA' => 'E02004013',
        '1XA' => 'E02004013',
        '1XB' => 'E02004013',
        '1XD' => 'E02004013',
        '1XE' => 'E02004013',
        '1XF' => 'E02004013',
        '1XG' => 'E02004013',
        '1XH' => 'E02004013',
        '1XJ' => 'E02004013',
        '1XL' => 'E02004013',
        '1XN' => 'E02004013',
        '1XP' => 'E02004013',
        '1XQ' => 'E02004013',
        '1XR' => 'E02004013',
        '1XS' => 'E02004013',
        '1XT' => 'E02004013',
        '1XU' => 'E02004013',
        '1XW' => 'E02004013',
        '1XX' => 'E02004013',
        '1XY' => 'E02004013',
        '1YA' => 'E02004013',
        '1YB' => 'E02004010',
        '1YD' => 'E02004010',
        '2AA' => 'E02004011',
        '2AB' => 'E02004013',
        '2AD' => 'E02004013',
        '2AE' => 'E02004013',
        '2AF' => 'E02004013',
        '2AG' => 'E02004013',
        '2AH' => 'E02004013',
        '2AJ' => 'E02004011',
        '2AL' => 'E02004011',
        '2AN' => 'E02004013',
        '2AP' => 'E02004013',
        '2AQ' => 'E02004013',
        '2AR' => 'E02004013',
        '2AS' => 'E02004013',
        '2AT' => 'E02004013',
        '2AU' => 'E02004010',
        '2AW' => 'E02004013',
        '2AX' => 'E02004011',
        '2AY' => 'E02004011',
        '2AZ' => 'E02004010',
        '2BA' => 'E02004010',
        '2BB' => 'E02004011',
        '2BD' => 'E02004011',
        '2BE' => 'E02004010',
        '2BF' => 'E02004011',
        '2BG' => 'E02004011',
        '2BH' => 'E02004011',
        '2BJ' => 'E02004011',
        '2BL' => 'E02004011',
        '2BN' => 'E02004011',
        '2BP' => 'E02004011',
        '2BQ' => 'E02004011',
        '2BS' => 'E02004011',
        '2BT' => 'E02004011',
        '2BU' => 'E02004011',
        '2BW' => 'E02004011',
        '2BX' => 'E02004011',
        '2BY' => 'E02004011',
        '2BZ' => 'E02004011',
        '2DA' => 'E02004013',
        '2DB' => 'E02004013',
        '2DD' => 'E02004013',
        '2DE' => 'E02004013',
        '2DF' => 'E02004013',
        '2DG' => 'E02004011',
        '2DH' => 'E02004011',
        '2DL' => 'E02004011',
        '2DN' => 'E02004011',
        '2DP' => 'E02004011',
        '2DQ' => 'E02004011',
        '2DR' => 'E02004012',
        '2DS' => 'E02004013',
        '2DT' => 'E02004013',
        '2DU' => 'E02004013',
        '2DW' => 'E02004013',
        '2DX' => 'E02004012',
        '2DY' => 'E02004011',
        '2DZ' => 'E02004011',
        '2EA' => 'E02004011',
        '2EB' => 'E02004011',
        '2ED' => 'E02004011',
        '2EE' => 'E02004011',
        '2EF' => 'E02004011',
        '2EG' => 'E02004011',
        '2EH' => 'E02004011',
        '2EJ' => 'E02004011',
        '2EL' => 'E02004011',
        '2EN' => 'E02004011',
        '2EP' => 'E02004011',
        '2EQ' => 'E02004011',
        '2ER' => 'E02004011',
        '2ES' => 'E02004011',
        '2ET' => 'E02004011',
        '2EU' => 'E02004011',
        '2EW' => 'E02004011',
        '2EX' => 'E02004011',
        '2EY' => 'E02004011',
        '2EZ' => 'E02004011',
        '2FA' => 'E02004010',
        '2FB' => 'E02004011',
        '2FD' => 'E02004011',
        '2FE' => 'E02004011',
        '2FF' => 'E02004011',
        '2FG' => 'E02004011',
        '2FH' => 'E02004011',
        '2FJ' => 'E02004011',
        '2FN' => 'E02004011',
        '2GA' => 'E02004012',
        '2GB' => 'E02004012',
        '2GD' => 'E02004012',
        '2GE' => 'E02004012',
        '2GF' => 'E02004010',
        '2GG' => 'E02004010',
        '2GH' => 'E02004010',
        '2HA' => 'E02004011',
        '2HB' => 'E02004011',
        '2HD' => 'E02004012',
        '2HG' => 'E02004012',
        '2HH' => 'E02004012',
        '2HJ' => 'E02004012',
        '2HL' => 'E02004012',
        '2HN' => 'E02004012',
        '2HP' => 'E02004012',
        '2HQ' => 'E02004012',
        '2HR' => 'E02004012',
        '2HS' => 'E02004012',
        '2HT' => 'E02004012',
        '2HU' => 'E02004012',
        '2HW' => 'E02004012',
        '2HX' => 'E02004012',
        '2HY' => 'E02004012',
        '2JA' => 'E02004013',
        '2JB' => 'E02004011',
        '2JE' => 'E02004011',
        '2JF' => 'E02004011',
        '2JG' => 'E02004011',
        '2JH' => 'E02004011',
        '2JJ' => 'E02004011',
        '2JN' => 'E02004011',
        '2JP' => 'E02004011',
        '2JQ' => 'E02004011',
        '2JR' => 'E02004011',
        '2JS' => 'E02004011',
        '2JT' => 'E02004011',
        '2JU' => 'E02004011',
        '2JW' => 'E02004011',
        '2JZ' => 'E02004011',
        '2LA' => 'E02004011',
        '2LB' => 'E02004011',
        '2LD' => 'E02004011',
        '2LE' => 'E02004011',
        '2LF' => 'E02004011',
        '2LG' => 'E02004012',
        '2LH' => 'E02004011',
        '2LJ' => 'E02004011',
        '2LL' => 'E02004011',
        '2LN' => 'E02004011',
        '2LR' => 'E02004012',
        '2LS' => 'E02004012',
        '2LT' => 'E02004012',
        '2LZ' => 'E02004012',
        '2NA' => 'E02004012',
        '2NB' => 'E02004012',
        '2ND' => 'E02004012',
        '2NE' => 'E02004012',
        '2NF' => 'E02004012',
        '2NG' => 'E02004012',
        '2NH' => 'E02004012',
        '2NL' => 'E02004012',
        '2NN' => 'E02004012',
        '2NP' => 'E02004012',
        '2NQ' => 'E02004012',
        '2NR' => 'E02004012',
        '2NS' => 'E02004012',
        '2NU' => 'E02004013',
        '2NW' => 'E02004012',
        '2NX' => 'E02004013',
        '2NY' => 'E02004011',
        '2NZ' => 'E02004012',
        '2PA' => 'E02004012',
        '2PB' => 'E02004012',
        '2PD' => 'E02004012',
        '2PE' => 'E02004012',
        '2PF' => 'E02004012',
        '2PG' => 'E02004012',
        '2PH' => 'E02004012',
        '2PJ' => 'E02004012',
        '2PL' => 'E02004012',
        '2PN' => 'E02004012',
        '2PQ' => 'E02004012',
        '2PT' => 'E02004012',
        '2PU' => 'E02004012',
        '2PZ' => 'E02004012',
        '2QA' => 'E02004012',
        '2QB' => 'E02004012',
        '2QG' => 'E02004012',
        '2QJ' => 'E02004012',
        '2QL' => 'E02004012',
        '2QP' => 'E02004012',
        '2QQ' => 'E02004012',
        '2QR' => 'E02004012',
        '2QS' => 'E02004012',
        '2QT' => 'E02004013',
        '2QU' => 'E02004012',
        '2QX' => 'E02004013',
        '2QY' => 'E02004013',
        '2QZ' => 'E02004013',
        '2RA' => 'E02004012',
        '2RB' => 'E02004012',
        '2RE' => 'E02004012',
        '2RF' => 'E02004012',
        '2RG' => 'E02004012',
        '2RH' => 'E02004012',
        '2RJ' => 'E02004012',
        '2RL' => 'E02004012',
        '2RN' => 'E02004012',
        '2RP' => 'E02004013',
        '2RQ' => 'E02004012',
        '2RR' => 'E02004012',
        '2RS' => 'E02004012',
        '2RW' => 'E02004012',
        '2SD' => 'E02004012',
        '2SS' => 'E02004012',
        '2WA' => 'E02004010',
        '2WZ' => 'E02004013',
        '2YA' => 'E02004010',
        '2YB' => 'E02004010',
        '2YD' => 'E02004010',
        '2YE' => 'E02004010',
        '2YF' => 'E02004010',
        '2YG' => 'E02004010',
        '3AA' => 'E02004013',
        '3AB' => 'E02004013',
        '3AD' => 'E02004013',
        '3AE' => 'E02004013',
        '3AF' => 'E02004013',
        '3AG' => 'E02004013',
        '3AH' => 'E02004013',
        '3AJ' => 'E02004013',
        '3AL' => 'E02004013',
        '3AN' => 'E02004013',
        '3AP' => 'E02004013',
        '3AQ' => 'E02004013',
        '3AR' => 'E02004013',
        '3AS' => 'E02004013',
        '3AT' => 'E02004013',
        '3AU' => 'E02004013',
        '3AW' => 'E02004013',
        '3AX' => 'E02004013',
        '3AY' => 'E02004013',
        '3AZ' => 'E02004013',
        '3BA' => 'E02004013',
        '3BB' => 'E02004013',
        '3BD' => 'E02004013',
        '3BE' => 'E02004013',
        '3BF' => 'E02004013',
        '3BG' => 'E02004013',
        '3BH' => 'E02004013',
        '3BJ' => 'E02004013',
        '3BL' => 'E02004013',
        '3BN' => 'E02004013',
        '3BP' => 'E02004013',
        '3BQ' => 'E02004013',
        '3BS' => 'E02004013',
        '3BT' => 'E02004013',
        '3BU' => 'E02004013',
        '3BW' => 'E02004013',
        '3BX' => 'E02004014',
        '3DB' => 'E02004013',
        '3DD' => 'E02004013',
        '3DF' => 'E02004013',
        '3DG' => 'E02004013',
        '3DH' => 'E02004013',
        '3DJ' => 'E02004013',
        '3DL' => 'E02004013',
        '3DN' => 'E02004014',
        '3DR' => 'E02004013',
        '3DS' => 'E02004013',
        '3DT' => 'E02004013',
        '3DU' => 'E02004013',
        '3DX' => 'E02004013',
        '3DY' => 'E02004013',
        '3DZ' => 'E02004013',
        '3EA' => 'E02004013',
        '3EB' => 'E02004013',
        '3ED' => 'E02004013',
        '3EF' => 'E02004013',
        '3EG' => 'E02004013',
        '3EH' => 'E02004013',
        '3EN' => 'E02004013',
        '3EP' => 'E02004013',
        '3EQ' => 'E02004013',
        '3ER' => 'E02004013',
        '3EU' => 'E02004013',
        '3EW' => 'E02004013',
        '3EX' => 'E02004013',
        '3GA' => 'E02004013',
        '3GB' => 'E02004010',
        '3GD' => 'E02004013',
        '3GE' => 'E02004010',
        '3GF' => 'E02004013',
        '3HB' => 'E02004013',
        '3HD' => 'E02004013',
        '3HF' => 'E02004013',
        '3HG' => 'E02004013',
        '3HH' => 'E02004013',
        '3HJ' => 'E02004013',
        '3HL' => 'E02004013',
        '3HN' => 'E02004013',
        '3HP' => 'E02004013',
        '3HQ' => 'E02004013',
        '3HR' => 'E02004013',
        '3HS' => 'E02004010',
        '3HT' => 'E02004010',
        '3HU' => 'E02004013',
        '3HW' => 'E02004013',
        '3HX' => 'E02004013',
        '3HY' => 'E02004013',
        '3HZ' => 'E02004013',
        '3JA' => 'E02004013',
        '3JB' => 'E02004013',
        '3JD' => 'E02004013',
        '3JE' => 'E02004013',
        '3JF' => 'E02004013',
        '3JG' => 'E02004013',
        '3JJ' => 'E02004013',
        '3JL' => 'E02004013',
        '3JN' => 'E02004013',
        '3JP' => 'E02004013',
        '3JR' => 'E02004013',
        '3JS' => 'E02004013',
        '3JT' => 'E02004013',
        '3JU' => 'E02004013',
        '3JW' => 'E02004013',
        '3JZ' => 'E02004013',
        '3LA' => 'E02004013',
        '3LB' => 'E02004013',
        '3LD' => 'E02004013',
        '3LE' => 'E02004013',
        '3LF' => 'E02004013',
        '3LG' => 'E02004013',
        '3LH' => 'E02004013',
        '3LJ' => 'E02004013',
        '3LL' => 'E02004013',
        '3LN' => 'E02004013',
        '3LP' => 'E02004013',
        '3LQ' => 'E02004013',
        '3LR' => 'E02004013',
        '3LS' => 'E02004013',
        '3LT' => 'E02004013',
        '3LU' => 'E02004013',
        '3LW' => 'E02004013',
        '3LX' => 'E02004013',
        '3LY' => 'E02004013',
        '3LZ' => 'E02004013',
        '3NA' => 'E02004013',
        '3NB' => 'E02004013',
        '3ND' => 'E02004013',
        '3NE' => 'E02004013',
        '3NF' => 'E02004013',
        '3NG' => 'E02004013',
        '3NH' => 'E02004013',
        '3NJ' => 'E02004013',
        '3NL' => 'E02004013',
        '3NN' => 'E02004013',
        '3NP' => 'E02004013',
        '3NQ' => 'E02004013',
        '3NR' => 'E02004013',
        '3NS' => 'E02004013',
        '3NT' => 'E02004013',
        '3NU' => 'E02004013',
        '3NW' => 'E02004013',
        '3NX' => 'E02004013',
        '3NY' => 'E02004013',
        '3NZ' => 'E02004013',
        '3PA' => 'E02004013',
        '3PB' => 'E02004013',
        '3PD' => 'E02004013',
        '3PE' => 'E02004013',
        '3PF' => 'E02004013',
        '3PG' => 'E02004013',
        '3PH' => 'E02004013',
        '3PJ' => 'E02004013',
        '3PL' => 'E02004013',
        '3PN' => 'E02004013',
        '3PP' => 'E02004013',
        '3PQ' => 'E02004013',
        '3PR' => 'E02004013',
        '3PS' => 'E02004013',
        '3PT' => 'E02004013',
        '3PU' => 'E02004013',
        '3PW' => 'E02004013',
        '3PX' => 'E02004013',
        '3PY' => 'E02004013',
        '3PZ' => 'E02004013',
        '3QA' => 'E02004013',
        '3QB' => 'E02004013',
        '3QD' => 'E02004013',
        '3QE' => 'E02004013',
        '3QF' => 'E02004013',
        '3QG' => 'E02004013',
        '3QH' => 'E02004013',
        '3QJ' => 'E02004013',
        '3QL' => 'E02004013',
        '3QN' => 'E02004013',
        '3QP' => 'E02004013',
        '3QQ' => 'E02004013',
        '3QU' => 'E02004013',
        '3QW' => 'E02004013',
        '3QX' => 'E02004013',
        '3QY' => 'E02004014',
        '3QZ' => 'E02004014',
        '3RA' => 'E02004013',
        '3RB' => 'E02004014',
        '3RE' => 'E02004014',
        '3RF' => 'E02004014',
        '3RG' => 'E02004014',
        '3RH' => 'E02004014',
        '3RJ' => 'E02004014',
        '3RL' => 'E02004014',
        '3RN' => 'E02004014',
        '3RP' => 'E02004014',
        '3RQ' => 'E02004014',
        '3RT' => 'E02004014',
        '3RU' => 'E02004014',
        '3RX' => 'E02004014',
        '3RY' => 'E02004014',
        '3RZ' => 'E02004014',
        '3SA' => 'E02004014',
        '3SB' => 'E02004014',
        '3SD' => 'E02004014',
        '3SE' => 'E02004014',
        '3SF' => 'E02004014',
        '3SG' => 'E02004014',
        '3SH' => 'E02004013',
        '3SJ' => 'E02004013',
        '3SL' => 'E02004014',
        '3SP' => 'E02004014',
        '3SQ' => 'E02004014',
        '3SR' => 'E02004014',
        '3SS' => 'E02004014',
        '3ST' => 'E02004014',
        '3SU' => 'E02004014',
        '3SW' => 'E02004014',
        '3SZ' => 'E02004014',
        '3TA' => 'E02004014',
        '3TE' => 'E02004014',
        '3TF' => 'E02004014',
        '3TG' => 'E02004014',
        '3TH' => 'E02004014',
        '3TJ' => 'E02004014',
        '3TL' => 'E02004014',
        '3TN' => 'E02004014',
        '3TP' => 'E02004014',
        '3TR' => 'E02004014',
        '3TU' => 'E02004014',
        '3TW' => 'E02004014',
        '3TZ' => 'E02004014',
        '3UA' => 'E02004014',
        '3UB' => 'E02004014',
        '3UD' => 'E02004014',
        '3UE' => 'E02004014',
        '3UG' => 'E02004014',
        '3UH' => 'E02004014',
        '3UJ' => 'E02004014',
        '3UL' => 'E02004014',
        '3UP' => 'E02004014',
        '3UQ' => 'E02004014',
        '3UR' => 'E02004014',
        '3UW' => 'E02004014',
        '3UX' => 'E02004014',
        '3UY' => 'E02004014',
        '3UZ' => 'E02004014',
        '3WW' => 'E02004010',
        '3WX' => 'E02004010',
        '3WY' => 'E02004013',
        '3WZ' => 'E02004010',
        '3XA' => 'E02004014',
        '3XB' => 'E02004014',
        '3XD' => 'E02004014',
        '3XF' => 'E02004014',
        '3XG' => 'E02004014',
        '3XH' => 'E02004014',
        '3XJ' => 'E02004014',
        '3XL' => 'E02004014',
        '3XP' => 'E02004014',
        '3XQ' => 'E02004014',
        '3XR' => 'E02004014',
        '3XS' => 'E02004014',
        '3XT' => 'E02004014',
        '3XU' => 'E02004014',
        '3XX' => 'E02004014',
        '3XY' => 'E02004014',
        '3XZ' => 'E02004014',
        '3YA' => 'E02004013',
        '3YB' => 'E02004010',
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
