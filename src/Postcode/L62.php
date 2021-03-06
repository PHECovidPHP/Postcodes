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
final class L62
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02001507',
        '0AB' => 'E02001507',
        '0AD' => 'E02003842',
        '0AE' => 'E02001508',
        '0AF' => 'E02001508',
        '0AG' => 'E02001508',
        '0AH' => 'E02001508',
        '0AJ' => 'E02001508',
        '0AL' => 'E02001508',
        '0AN' => 'E02001508',
        '0AP' => 'E02001508',
        '0AQ' => 'E02001508',
        '0AR' => 'E02001508',
        '0AS' => 'E02001508',
        '0AT' => 'E02001508',
        '0AU' => 'E02001508',
        '0AW' => 'E02001508',
        '0AY' => 'E02001508',
        '0AZ' => 'E02001508',
        '0BA' => 'E02001508',
        '0BB' => 'E02001508',
        '0BD' => 'E02001508',
        '0BE' => 'E02001508',
        '0BG' => 'E02001508',
        '0BH' => 'E02001508',
        '0BJ' => 'E02001508',
        '0BL' => 'E02001508',
        '0BN' => 'E02001508',
        '0BP' => 'E02001508',
        '0BQ' => 'E02001508',
        '0BR' => 'E02001508',
        '0BS' => 'E02001508',
        '0BT' => 'E02001508',
        '0BU' => 'E02001508',
        '0BW' => 'E02001508',
        '0BX' => 'E02001508',
        '0BY' => 'E02001508',
        '0BZ' => 'E02001507',
        '0DA' => 'E02001508',
        '0DD' => 'E02001508',
        '0DE' => 'E02001508',
        '0DF' => 'E02001508',
        '0DG' => 'E02001502',
        '0DJ' => 'E02001508',
        '0DP' => 'E02001508',
        '0DQ' => 'E02001508',
        '0DR' => 'E02001508',
        '0DT' => 'E02001508',
        '0DW' => 'E02001508',
        '0DX' => 'E02001502',
        '0DY' => 'E02001508',
        '0HB' => 'E02001507',
        '1AA' => 'E02001502',
        '1AB' => 'E02001502',
        '1AD' => 'E02001497',
        '1AE' => 'E02001497',
        '1AF' => 'E02001497',
        '1AG' => 'E02001497',
        '1AL' => 'E02001497',
        '1AN' => 'E02001497',
        '1AP' => 'E02001497',
        '1AQ' => 'E02001502',
        '1AR' => 'E02001497',
        '1AS' => 'E02001497',
        '1AT' => 'E02001497',
        '1AU' => 'E02001497',
        '1AW' => 'E02001497',
        '1AX' => 'E02001497',
        '1AY' => 'E02001497',
        '1AZ' => 'E02001497',
        '1BA' => 'E02001497',
        '1BB' => 'E02001497',
        '1BD' => 'E02001497',
        '1BG' => 'E02001497',
        '1BH' => 'E02001497',
        '1BJ' => 'E02001497',
        '1BL' => 'E02001497',
        '1BN' => 'E02001493',
        '1BP' => 'E02001497',
        '1BQ' => 'E02001497',
        '1BR' => 'E02001497',
        '1BS' => 'E02001502',
        '1BT' => 'E02001502',
        '1BU' => 'E02001502',
        '1BW' => 'E02001497',
        '1BX' => 'E02001502',
        '1BY' => 'E02001502',
        '1BZ' => 'E02001502',
        '1DA' => 'E02001502',
        '1DB' => 'E02001502',
        '1DD' => 'E02001497',
        '1DE' => 'E02001498',
        '1DF' => 'E02001497',
        '1DG' => 'E02001497',
        '1DH' => 'E02001497',
        '1DJ' => 'E02001497',
        '1DL' => 'E02001497',
        '1DN' => 'E02001497',
        '1DP' => 'E02001497',
        '1DQ' => 'E02001497',
        '1DR' => 'E02001497',
        '1DS' => 'E02001497',
        '1DT' => 'E02001497',
        '1DU' => 'E02001497',
        '1DW' => 'E02001497',
        '1DX' => 'E02001493',
        '1DY' => 'E02001493',
        '1DZ' => 'E02001497',
        '1EA' => 'E02001497',
        '1EB' => 'E02001497',
        '1ED' => 'E02001497',
        '1EE' => 'E02001497',
        '1EF' => 'E02001497',
        '1EG' => 'E02001497',
        '1EH' => 'E02001497',
        '1EJ' => 'E02001497',
        '1EL' => 'E02001497',
        '1EN' => 'E02001493',
        '1EQ' => 'E02001497',
        '1ER' => 'E02001497',
        '1ES' => 'E02001497',
        '1ET' => 'E02001493',
        '1EU' => 'E02001493',
        '1EW' => 'E02001493',
        '1EY' => 'E02001497',
        '1EZ' => 'E02001493',
        '1HA' => 'E02001497',
        '1HD' => 'E02001497',
        '1HE' => 'E02001502',
        '1HF' => 'E02001502',
        '1HG' => 'E02001502',
        '1HH' => 'E02001502',
        '1HJ' => 'E02001502',
        '1HL' => 'E02001502',
        '1HN' => 'E02001497',
        '1HP' => 'E02001497',
        '1HQ' => 'E02001502',
        '1HR' => 'E02001497',
        '1HS' => 'E02001497',
        '1HT' => 'E02001497',
        '1HW' => 'E02001502',
        '1HX' => 'E02001502',
        '1HY' => 'E02001497',
        '1HZ' => 'E02001497',
        '1JA' => 'E02001497',
        '1JB' => 'E02001497',
        '1JD' => 'E02001502',
        '2AA' => 'E02001497',
        '2AD' => 'E02001502',
        '2AE' => 'E02001502',
        '2AF' => 'E02001502',
        '2AG' => 'E02001502',
        '2AH' => 'E02001502',
        '2AJ' => 'E02001502',
        '2AL' => 'E02001502',
        '2AN' => 'E02001502',
        '2AP' => 'E02001502',
        '2AQ' => 'E02001502',
        '2AR' => 'E02001502',
        '2AS' => 'E02001502',
        '2AT' => 'E02001502',
        '2AU' => 'E02001502',
        '2AW' => 'E02001502',
        '2AX' => 'E02001502',
        '2AY' => 'E02001502',
        '2AZ' => 'E02001502',
        '2BA' => 'E02001502',
        '2BB' => 'E02001502',
        '2BD' => 'E02001505',
        '2BE' => 'E02001502',
        '2BG' => 'E02001502',
        '2BH' => 'E02001502',
        '2BJ' => 'E02001502',
        '2BL' => 'E02001505',
        '2BN' => 'E02001505',
        '2BP' => 'E02001505',
        '2BQ' => 'E02001502',
        '2BR' => 'E02001505',
        '2BS' => 'E02001505',
        '2BT' => 'E02001505',
        '2BU' => 'E02001502',
        '2BW' => 'E02001505',
        '2BX' => 'E02001505',
        '2BY' => 'E02001502',
        '2BZ' => 'E02001502',
        '2DA' => 'E02001505',
        '2DB' => 'E02001505',
        '2DD' => 'E02001505',
        '2DE' => 'E02001504',
        '2DF' => 'E02001505',
        '2DG' => 'E02001505',
        '2DH' => 'E02001505',
        '2DJ' => 'E02001505',
        '2DL' => 'E02001505',
        '2DN' => 'E02001505',
        '2DP' => 'E02001505',
        '2DQ' => 'E02001505',
        '2DR' => 'E02001505',
        '2DS' => 'E02001505',
        '2DT' => 'E02001505',
        '2DU' => 'E02001505',
        '2DW' => 'E02001505',
        '2DX' => 'E02001505',
        '2DY' => 'E02001505',
        '2DZ' => 'E02001505',
        '2EA' => 'E02001505',
        '2EB' => 'E02001505',
        '2ED' => 'E02001505',
        '2EE' => 'E02001505',
        '2EF' => 'E02001505',
        '2EG' => 'E02001505',
        '2EH' => 'E02001505',
        '2EJ' => 'E02001505',
        '2EL' => 'E02001504',
        '2EN' => 'E02001505',
        '2EP' => 'E02001505',
        '2EQ' => 'E02001505',
        '2ER' => 'E02001505',
        '2ES' => 'E02001505',
        '2ET' => 'E02001505',
        '2EW' => 'E02001505',
        '2EX' => 'E02001505',
        '2EY' => 'E02001505',
        '2EZ' => 'E02001505',
        '2HB' => 'E02001505',
        '2HE' => 'E02001505',
        '3LA' => 'E02001502',
        '3LB' => 'E02001502',
        '3LD' => 'E02001502',
        '3LE' => 'E02001502',
        '3LF' => 'E02001502',
        '3LG' => 'E02001502',
        '3LH' => 'E02001502',
        '3LL' => 'E02001502',
        '3LN' => 'E02001502',
        '3LP' => 'E02001502',
        '3LQ' => 'E02001502',
        '3LR' => 'E02001502',
        '3LS' => 'E02001502',
        '3LT' => 'E02001502',
        '3LU' => 'E02001502',
        '3LW' => 'E02001502',
        '3LX' => 'E02001502',
        '3LY' => 'E02001502',
        '3LZ' => 'E02001502',
        '3NA' => 'E02001502',
        '3NB' => 'E02001502',
        '3ND' => 'E02001502',
        '3NE' => 'E02001502',
        '3NF' => 'E02001502',
        '3NG' => 'E02001502',
        '3NH' => 'E02001502',
        '3NL' => 'E02001502',
        '3NN' => 'E02001505',
        '3NQ' => 'E02001505',
        '3NS' => 'E02001505',
        '3NU' => 'E02001502',
        '3NW' => 'E02001502',
        '3NX' => 'E02001505',
        '3NY' => 'E02001505',
        '3NZ' => 'E02001505',
        '3PA' => 'E02001505',
        '3PB' => 'E02001505',
        '3PE' => 'E02001505',
        '3PF' => 'E02001505',
        '3PH' => 'E02001505',
        '3PL' => 'E02001505',
        '3PN' => 'E02001505',
        '3PQ' => 'E02001505',
        '3PS' => 'E02001502',
        '3PT' => 'E02001505',
        '3PU' => 'E02001508',
        '3PW' => 'E02001505',
        '3PY' => 'E02001505',
        '3PZ' => 'E02001505',
        '3QA' => 'E02001505',
        '3QB' => 'E02001505',
        '3QD' => 'E02001505',
        '3QF' => 'E02001502',
        '3QH' => 'E02001505',
        '3QJ' => 'E02001505',
        '3QL' => 'E02001502',
        '3QP' => 'E02001505',
        '3QR' => 'E02001502',
        '3QS' => 'E02001505',
        '3QT' => 'E02001505',
        '3QU' => 'E02001505',
        '3QW' => 'E02001505',
        '3QX' => 'E02001502',
        '3QY' => 'E02001505',
        '3QZ' => 'E02001502',
        '3RA' => 'E02001502',
        '3RB' => 'E02001502',
        '3RD' => 'E02001505',
        '3RE' => 'E02001505',
        '3RF' => 'E02001502',
        '3RG' => 'E02001502',
        '3RJ' => 'E02001505',
        '3RL' => 'E02001505',
        '3RN' => 'E02001505',
        '3RQ' => 'E02001502',
        '4LF' => 'E02001502',
        '4RA' => 'E02001502',
        '4RB' => 'E02001502',
        '4RD' => 'E02001505',
        '4RE' => 'E02001502',
        '4RF' => 'E02001502',
        '4RG' => 'E02001502',
        '4RH' => 'E02001502',
        '4RJ' => 'E02001502',
        '4RL' => 'E02001502',
        '4RN' => 'E02001502',
        '4RP' => 'E02001502',
        '4RQ' => 'E02001502',
        '4RR' => 'E02001497',
        '4RS' => 'E02001502',
        '4RT' => 'E02001502',
        '4RU' => 'E02001502',
        '4RW' => 'E02001502',
        '4RX' => 'E02001502',
        '4RY' => 'E02001502',
        '4RZ' => 'E02001502',
        '4SA' => 'E02001502',
        '4SB' => 'E02001502',
        '4SD' => 'E02001502',
        '4SE' => 'E02001502',
        '4SF' => 'E02001502',
        '4SG' => 'E02001502',
        '4SH' => 'E02001502',
        '4SJ' => 'E02001502',
        '4SL' => 'E02001502',
        '4SN' => 'E02001502',
        '4SP' => 'E02001502',
        '4SQ' => 'E02001502',
        '4SR' => 'E02001502',
        '4SU' => 'E02001502',
        '4SW' => 'E02001502',
        '4SY' => 'E02001502',
        '4SZ' => 'E02001502',
        '4TA' => 'E02001502',
        '4TB' => 'E02001502',
        '4TE' => 'E02001502',
        '4TF' => 'E02001501',
        '4TG' => 'E02001502',
        '4TH' => 'E02001502',
        '4TL' => 'E02001502',
        '4TP' => 'E02001502',
        '4TQ' => 'E02001502',
        '4TR' => 'E02001502',
        '4TT' => 'E02001502',
        '4TU' => 'E02001502',
        '4TX' => 'E02001502',
        '4TY' => 'E02001502',
        '4TZ' => 'E02001502',
        '4UA' => 'E02001502',
        '4UB' => 'E02001502',
        '4UE' => 'E02001502',
        '4UF' => 'E02001502',
        '4UG' => 'E02001502',
        '4UH' => 'E02001502',
        '4UJ' => 'E02001502',
        '4UL' => 'E02001502',
        '4UN' => 'E02001502',
        '4UP' => 'E02001502',
        '4UQ' => 'E02001502',
        '4UR' => 'E02001502',
        '4US' => 'E02001502',
        '4UT' => 'E02001502',
        '4UU' => 'E02001502',
        '4UW' => 'E02001502',
        '4UX' => 'E02001502',
        '4UY' => 'E02001502',
        '4UZ' => 'E02001502',
        '4XB' => 'E02001502',
        '4XD' => 'E02001502',
        '4XE' => 'E02001502',
        '4XF' => 'E02001502',
        '4XG' => 'E02001502',
        '4XN' => 'E02001502',
        '4XT' => 'E02001502',
        '4XW' => 'E02001502',
        '4XX' => 'E02001502',
        '4XY' => 'E02001502',
        '4YA' => 'E02001502',
        '4YB' => 'E02001502',
        '4YD' => 'E02001502',
        '4YG' => 'E02001502',
        '4YH' => 'E02001502',
        '4YJ' => 'E02001502',
        '4YN' => 'E02001502',
        '4YP' => 'E02001502',
        '4YR' => 'E02001502',
        '4YS' => 'E02001502',
        '4YT' => 'E02001502',
        '4YW' => 'E02001502',
        '4YZ' => 'E02001502',
        '4ZD' => 'E02001502',
        '4ZL' => 'E02001502',
        '4ZS' => 'E02001502',
        '4ZT' => 'E02001502',
        '4ZU' => 'E02001502',
        '4ZX' => 'E02001502',
        '4ZY' => 'E02001502',
        '4ZZ' => 'E02001502',
        '5AA' => 'E02001497',
        '5AB' => 'E02001497',
        '5AD' => 'E02001497',
        '5AE' => 'E02001497',
        '5AF' => 'E02001497',
        '5AG' => 'E02001497',
        '5AH' => 'E02001497',
        '5AJ' => 'E02001497',
        '5AL' => 'E02001497',
        '5AP' => 'E02001497',
        '5AR' => 'E02001497',
        '5AS' => 'E02001497',
        '5AT' => 'E02001497',
        '5AU' => 'E02001497',
        '5AW' => 'E02001493',
        '5AX' => 'E02001497',
        '5AZ' => 'E02001497',
        '5BA' => 'E02001497',
        '5BB' => 'E02001497',
        '5BD' => 'E02001497',
        '5BE' => 'E02001497',
        '5BG' => 'E02001497',
        '5BH' => 'E02001497',
        '5BJ' => 'E02001497',
        '5BL' => 'E02001497',
        '5BN' => 'E02001497',
        '5BP' => 'E02001497',
        '5BQ' => 'E02001497',
        '5BS' => 'E02001497',
        '5BU' => 'E02001497',
        '5BW' => 'E02001497',
        '5BX' => 'E02001497',
        '5BY' => 'E02001497',
        '5BZ' => 'E02001497',
        '5DA' => 'E02001497',
        '5DB' => 'E02001497',
        '5DD' => 'E02001497',
        '5DE' => 'E02001497',
        '5DF' => 'E02001497',
        '5DG' => 'E02001497',
        '5DH' => 'E02001502',
        '5DJ' => 'E02001502',
        '5DL' => 'E02001502',
        '5DN' => 'E02001502',
        '5DP' => 'E02001497',
        '5DQ' => 'E02001502',
        '5DR' => 'E02001502',
        '5DS' => 'E02001497',
        '5DT' => 'E02001497',
        '5DU' => 'E02001497',
        '5DW' => 'E02001502',
        '5DX' => 'E02001497',
        '5DY' => 'E02001502',
        '5DZ' => 'E02001502',
        '5EA' => 'E02001497',
        '5EB' => 'E02001497',
        '5ED' => 'E02001497',
        '5EE' => 'E02001502',
        '5EF' => 'E02001502',
        '5EG' => 'E02001497',
        '5EH' => 'E02001497',
        '5EJ' => 'E02001497',
        '5EL' => 'E02001497',
        '5EN' => 'E02001497',
        '5EP' => 'E02001497',
        '5EQ' => 'E02001497',
        '5ER' => 'E02001497',
        '5ES' => 'E02001497',
        '5ET' => 'E02001497',
        '5EU' => 'E02001497',
        '5EW' => 'E02001497',
        '5EX' => 'E02001497',
        '5EY' => 'E02001497',
        '5EZ' => 'E02001497',
        '5FB' => 'E02001497',
        '5FD' => 'E02001497',
        '5HA' => 'E02001497',
        '5HB' => 'E02001502',
        '5HD' => 'E02001502',
        '5HF' => 'E02001497',
        '5HG' => 'E02001497',
        '5HH' => 'E02001497',
        '5HJ' => 'E02001497',
        '5HL' => 'E02001497',
        '5HN' => 'E02001497',
        '5HP' => 'E02001497',
        '5HQ' => 'E02001497',
        '5HR' => 'E02001497',
        '5HS' => 'E02001497',
        '5HT' => 'E02001502',
        '5HU' => 'E02001497',
        '5HW' => 'E02001497',
        '5HX' => 'E02001496',
        '5HY' => 'E02001497',
        '5HZ' => 'E02001497',
        '5JA' => 'E02001497',
        '5JB' => 'E02001497',
        '5JD' => 'E02001497',
        '5JE' => 'E02001497',
        '5JF' => 'E02001497',
        '5JG' => 'E02001497',
        '5JJ' => 'E02001497',
        '5JQ' => 'E02001497',
        '5JS' => 'E02001497',
        '5JT' => 'E02001497',
        '5JU' => 'E02001497',
        '5JX' => 'E02001497',
        '5JY' => 'E02001497',
        '5JZ' => 'E02001497',
        '6AA' => 'E02001505',
        '6AB' => 'E02001505',
        '6AD' => 'E02001505',
        '6AE' => 'E02001505',
        '6AF' => 'E02001505',
        '6AG' => 'E02001505',
        '6AH' => 'E02001505',
        '6AJ' => 'E02001505',
        '6AL' => 'E02001508',
        '6AN' => 'E02001505',
        '6AP' => 'E02001507',
        '6AQ' => 'E02001505',
        '6AR' => 'E02001507',
        '6AS' => 'E02001508',
        '6AT' => 'E02001508',
        '6AU' => 'E02001508',
        '6AW' => 'E02001505',
        '6AX' => 'E02001508',
        '6AY' => 'E02001507',
        '6AZ' => 'E02001505',
        '6BA' => 'E02001505',
        '6BB' => 'E02001505',
        '6BD' => 'E02001507',
        '6BE' => 'E02001507',
        '6BG' => 'E02001507',
        '6BH' => 'E02001507',
        '6BJ' => 'E02001507',
        '6BL' => 'E02001507',
        '6BN' => 'E02001507',
        '6BP' => 'E02001507',
        '6BQ' => 'E02001507',
        '6BR' => 'E02001507',
        '6BS' => 'E02001507',
        '6BT' => 'E02001507',
        '6BU' => 'E02001507',
        '6BW' => 'E02001507',
        '6BX' => 'E02001507',
        '6BY' => 'E02001507',
        '6BZ' => 'E02001507',
        '6DA' => 'E02001507',
        '6DB' => 'E02001505',
        '6DD' => 'E02001505',
        '6DE' => 'E02001505',
        '6DF' => 'E02001505',
        '6DG' => 'E02001505',
        '6DH' => 'E02001505',
        '6DJ' => 'E02001507',
        '6DL' => 'E02001507',
        '6DN' => 'E02001507',
        '6DP' => 'E02001508',
        '6DQ' => 'E02001505',
        '6DR' => 'E02001508',
        '6DS' => 'E02001507',
        '6DT' => 'E02001507',
        '6DU' => 'E02001507',
        '6DW' => 'E02001507',
        '6DX' => 'E02001507',
        '6DY' => 'E02001507',
        '6DZ' => 'E02001507',
        '6EA' => 'E02001507',
        '6EB' => 'E02001507',
        '6ED' => 'E02001507',
        '6EE' => 'E02001508',
        '6EF' => 'E02001507',
        '6EG' => 'E02001507',
        '6EL' => 'E02001507',
        '6EP' => 'E02001507',
        '6EQ' => 'E02001507',
        '6ER' => 'E02001507',
        '6ES' => 'E02001507',
        '6ET' => 'E02001507',
        '6EU' => 'E02001507',
        '6EW' => 'E02001507',
        '6EX' => 'E02001507',
        '6EY' => 'E02001507',
        '6EZ' => 'E02001507',
        '6HA' => 'E02001507',
        '6HB' => 'E02001507',
        '7AA' => 'E02001505',
        '7AB' => 'E02001505',
        '7AD' => 'E02001505',
        '7AE' => 'E02001505',
        '7AF' => 'E02001505',
        '7AG' => 'E02001505',
        '7AH' => 'E02001505',
        '7AJ' => 'E02001505',
        '7AL' => 'E02001505',
        '7AN' => 'E02001505',
        '7AP' => 'E02001505',
        '7AQ' => 'E02001505',
        '7AR' => 'E02001505',
        '7AS' => 'E02001505',
        '7AT' => 'E02001505',
        '7AU' => 'E02001505',
        '7AW' => 'E02001505',
        '7AX' => 'E02001505',
        '7AY' => 'E02001504',
        '7AZ' => 'E02001504',
        '7BA' => 'E02001505',
        '7BB' => 'E02001505',
        '7BD' => 'E02001505',
        '7BE' => 'E02001505',
        '7BG' => 'E02001505',
        '7BH' => 'E02001505',
        '7BJ' => 'E02001505',
        '7BL' => 'E02001505',
        '7BN' => 'E02001505',
        '7BP' => 'E02001504',
        '7BQ' => 'E02001505',
        '7BR' => 'E02001505',
        '7BS' => 'E02001505',
        '7BT' => 'E02001505',
        '7BU' => 'E02001505',
        '7BW' => 'E02001505',
        '7BX' => 'E02001505',
        '7BY' => 'E02001505',
        '7BZ' => 'E02001505',
        '7DA' => 'E02001505',
        '7DB' => 'E02001505',
        '7DD' => 'E02001505',
        '7DE' => 'E02001505',
        '7DF' => 'E02001505',
        '7DG' => 'E02001505',
        '7DH' => 'E02001505',
        '7DJ' => 'E02001505',
        '7DL' => 'E02001505',
        '7DN' => 'E02001505',
        '7DP' => 'E02001505',
        '7DQ' => 'E02001505',
        '7DR' => 'E02001505',
        '7DS' => 'E02001505',
        '7DT' => 'E02001505',
        '7DU' => 'E02001505',
        '7DW' => 'E02001505',
        '7DX' => 'E02001505',
        '7DY' => 'E02001505',
        '7DZ' => 'E02001505',
        '7EA' => 'E02001505',
        '7EB' => 'E02001505',
        '7ED' => 'E02001505',
        '7EE' => 'E02001505',
        '7EF' => 'E02001505',
        '7EG' => 'E02001505',
        '7EH' => 'E02001505',
        '7EJ' => 'E02001505',
        '7EL' => 'E02001505',
        '7EN' => 'E02001505',
        '7EP' => 'E02001505',
        '7EQ' => 'E02001505',
        '7ER' => 'E02001505',
        '7ES' => 'E02001505',
        '7ET' => 'E02001505',
        '7EU' => 'E02001505',
        '7EW' => 'E02001505',
        '7EX' => 'E02001505',
        '7EY' => 'E02001505',
        '7EZ' => 'E02001505',
        '7FA' => 'E02001505',
        '7FB' => 'E02001505',
        '7FD' => 'E02001505',
        '7HA' => 'E02001505',
        '7HB' => 'E02001505',
        '7HD' => 'E02001507',
        '7HE' => 'E02001507',
        '7HF' => 'E02001507',
        '7HG' => 'E02001505',
        '7HH' => 'E02001505',
        '7HJ' => 'E02001505',
        '7HL' => 'E02001505',
        '7HN' => 'E02001505',
        '7HP' => 'E02001505',
        '7HQ' => 'E02001505',
        '7HR' => 'E02001505',
        '7HS' => 'E02001505',
        '7HT' => 'E02001505',
        '7HU' => 'E02001505',
        '7HW' => 'E02001505',
        '7HX' => 'E02001505',
        '7HY' => 'E02001505',
        '7HZ' => 'E02001505',
        '7JA' => 'E02001505',
        '7JB' => 'E02001505',
        '7JD' => 'E02001505',
        '7JE' => 'E02001505',
        '7JF' => 'E02001505',
        '7JG' => 'E02001502',
        '7JH' => 'E02001505',
        '7JL' => 'E02001505',
        '7JN' => 'E02001505',
        '7JP' => 'E02001505',
        '7JQ' => 'E02001505',
        '7JR' => 'E02001505',
        '7JT' => 'E02001505',
        '7JU' => 'E02001505',
        '7JW' => 'E02001505',
        '7JY' => 'E02001505',
        '7JZ' => 'E02001505',
        '7LA' => 'E02001505',
        '7LB' => 'E02001505',
        '7LD' => 'E02001505',
        '7LE' => 'E02001505',
        '7LF' => 'E02001505',
        '7LG' => 'E02001505',
        '8AB' => 'E02001508',
        '8AD' => 'E02001508',
        '8AE' => 'E02001508',
        '8AF' => 'E02001508',
        '8AG' => 'E02001508',
        '8AH' => 'E02001507',
        '8AJ' => 'E02001508',
        '8AL' => 'E02001508',
        '8AN' => 'E02001508',
        '8AP' => 'E02001508',
        '8AQ' => 'E02001508',
        '8AR' => 'E02001508',
        '8AS' => 'E02001508',
        '8AT' => 'E02001508',
        '8AU' => 'E02001508',
        '8AW' => 'E02001508',
        '8AX' => 'E02001507',
        '8AY' => 'E02001508',
        '8AZ' => 'E02001508',
        '8BA' => 'E02001507',
        '8BB' => 'E02001507',
        '8BD' => 'E02001507',
        '8BE' => 'E02001507',
        '8BG' => 'E02001507',
        '8BH' => 'E02001507',
        '8BJ' => 'E02001507',
        '8BL' => 'E02001507',
        '8BN' => 'E02001507',
        '8BP' => 'E02001507',
        '8BQ' => 'E02001507',
        '8BR' => 'E02001508',
        '8BS' => 'E02001508',
        '8BT' => 'E02001508',
        '8BU' => 'E02001508',
        '8BW' => 'E02001507',
        '8BX' => 'E02001508',
        '8BY' => 'E02001508',
        '8BZ' => 'E02001508',
        '8DA' => 'E02001508',
        '8DB' => 'E02001508',
        '8DD' => 'E02001508',
        '8DE' => 'E02001508',
        '8DF' => 'E02001508',
        '8DG' => 'E02001508',
        '8DH' => 'E02001508',
        '8DJ' => 'E02001508',
        '8DL' => 'E02001508',
        '8DN' => 'E02001508',
        '8DP' => 'E02001508',
        '8DQ' => 'E02001508',
        '8DR' => 'E02001508',
        '8DS' => 'E02001508',
        '8DT' => 'E02001508',
        '8DU' => 'E02001508',
        '8DW' => 'E02001508',
        '8DX' => 'E02001507',
        '8DY' => 'E02001507',
        '8DZ' => 'E02001507',
        '8EA' => 'E02001507',
        '8EB' => 'E02001508',
        '8ED' => 'E02001507',
        '8EE' => 'E02001507',
        '8EF' => 'E02001507',
        '8EG' => 'E02001507',
        '8EH' => 'E02001508',
        '8EJ' => 'E02001508',
        '8EL' => 'E02001508',
        '8EN' => 'E02001508',
        '8EP' => 'E02001508',
        '8EQ' => 'E02001507',
        '8ER' => 'E02001507',
        '8ES' => 'E02001508',
        '8ET' => 'E02001508',
        '8EU' => 'E02001508',
        '8EW' => 'E02001508',
        '8EX' => 'E02001508',
        '8EY' => 'E02001508',
        '8EZ' => 'E02001508',
        '8HA' => 'E02001508',
        '8HB' => 'E02001508',
        '8HD' => 'E02001508',
        '8HE' => 'E02001507',
        '8HF' => 'E02001507',
        '8HH' => 'E02001508',
        '8HJ' => 'E02001508',
        '8HL' => 'E02001507',
        '8HN' => 'E02001508',
        '8HP' => 'E02001508',
        '8HQ' => 'E02001508',
        '8HR' => 'E02001508',
        '8HS' => 'E02001508',
        '8HT' => 'E02001508',
        '8HU' => 'E02001508',
        '8HW' => 'E02001508',
        '8HX' => 'E02001508',
        '8HY' => 'E02001508',
        '8HZ' => 'E02001508',
        '8JA' => 'E02001508',
        '8JB' => 'E02001508',
        '9AA' => 'E02001508',
        '9AB' => 'E02001508',
        '9AD' => 'E02001508',
        '9AE' => 'E02001508',
        '9AF' => 'E02001508',
        '9AG' => 'E02001508',
        '9AH' => 'E02001502',
        '9AJ' => 'E02001508',
        '9AL' => 'E02001507',
        '9AN' => 'E02001508',
        '9AP' => 'E02001508',
        '9AQ' => 'E02001508',
        '9AR' => 'E02001508',
        '9AT' => 'E02001508',
        '9AU' => 'E02001508',
        '9AW' => 'E02001508',
        '9AX' => 'E02001508',
        '9AY' => 'E02001508',
        '9AZ' => 'E02001508',
        '9BA' => 'E02001508',
        '9BB' => 'E02001508',
        '9BD' => 'E02001508',
        '9BE' => 'E02001508',
        '9BG' => 'E02001508',
        '9BH' => 'E02001508',
        '9BJ' => 'E02001508',
        '9BL' => 'E02001508',
        '9BN' => 'E02001508',
        '9BP' => 'E02001508',
        '9BQ' => 'E02001508',
        '9BR' => 'E02001508',
        '9BS' => 'E02001508',
        '9BT' => 'E02001508',
        '9BU' => 'E02001508',
        '9BW' => 'E02001508',
        '9BX' => 'E02001508',
        '9BY' => 'E02001508',
        '9BZ' => 'E02001508',
        '9DA' => 'E02001508',
        '9DB' => 'E02001508',
        '9DD' => 'E02001508',
        '9DE' => 'E02001508',
        '9DF' => 'E02001508',
        '9DG' => 'E02001508',
        '9DH' => 'E02001508',
        '9DJ' => 'E02001508',
        '9DL' => 'E02001508',
        '9DN' => 'E02001508',
        '9DP' => 'E02001508',
        '9DQ' => 'E02001508',
        '9DR' => 'E02001508',
        '9DS' => 'E02001508',
        '9DT' => 'E02001508',
        '9DU' => 'E02001508',
        '9DW' => 'E02001508',
        '9DX' => 'E02001508',
        '9DY' => 'E02001508',
        '9DZ' => 'E02001508',
        '9EA' => 'E02001508',
        '9EB' => 'E02001508',
        '9ED' => 'E02001508',
        '9EE' => 'E02001508',
        '9EF' => 'E02001508',
        '9EG' => 'E02001508',
        '9EH' => 'E02001508',
        '9EJ' => 'E02001508',
        '9EL' => 'E02001508',
        '9EN' => 'E02001508',
        '9EP' => 'E02001508',
        '9EQ' => 'E02001508',
        '9ER' => 'E02001508',
        '9EU' => 'E02001507',
        '9EW' => 'E02001508',
        '9EX' => 'E02001507',
        '9EY' => 'E02001507',
        '9EZ' => 'E02001508',
        '9HS' => 'E02001508',
        '9HT' => 'E02001508',
        '9HU' => 'E02001508',
        '9HX' => 'E02001508',
        '9HY' => 'E02001508',
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
