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
final class NE2
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02001730',
        '1AB' => 'E02001730',
        '1AD' => 'E02001730',
        '1AE' => 'E02001730',
        '1AF' => 'E02001730',
        '1AG' => 'E02001724',
        '1AH' => 'E02001730',
        '1AJ' => 'E02001730',
        '1AL' => 'E02001730',
        '1AN' => 'E02001730',
        '1AP' => 'E02001730',
        '1AQ' => 'E02001730',
        '1AR' => 'E02001730',
        '1AS' => 'E02001730',
        '1AT' => 'E02001730',
        '1AU' => 'E02001730',
        '1AW' => 'E02001730',
        '1AX' => 'E02001730',
        '1AY' => 'E02001730',
        '1AZ' => 'E02001730',
        '1BA' => 'E02001730',
        '1BB' => 'E02001730',
        '1BD' => 'E02001730',
        '1BE' => 'E02001730',
        '1BF' => 'E02001730',
        '1BG' => 'E02001730',
        '1BH' => 'E02001730',
        '1BJ' => 'E02001730',
        '1BL' => 'E02001730',
        '1BN' => 'E02001724',
        '1BP' => 'E02001730',
        '1BQ' => 'E02001730',
        '1BS' => 'E02001730',
        '1BT' => 'E02001730',
        '1BU' => 'E02001730',
        '1BW' => 'E02001730',
        '1BX' => 'E02001730',
        '1BY' => 'E02001730',
        '1BZ' => 'E02001730',
        '1DA' => 'E02001730',
        '1DB' => 'E02001730',
        '1DD' => 'E02001730',
        '1DE' => 'E02001730',
        '1DF' => 'E02001730',
        '1DG' => 'E02001730',
        '1DH' => 'E02001730',
        '1DJ' => 'E02001730',
        '1DL' => 'E02001730',
        '1DN' => 'E02001730',
        '1DP' => 'E02001724',
        '1DQ' => 'E02001730',
        '1DR' => 'E02001730',
        '1DS' => 'E02001730',
        '1DT' => 'E02001730',
        '1DU' => 'E02001730',
        '1DW' => 'E02001730',
        '1DX' => 'E02001730',
        '1DZ' => 'E02001730',
        '1EA' => 'E02001730',
        '1ED' => 'E02001730',
        '1EE' => 'E02001730',
        '1EF' => 'E02001730',
        '1EG' => 'E02001730',
        '1ER' => 'E02001724',
        '1ES' => 'E02001724',
        '1ET' => 'E02001724',
        '1EU' => 'E02001724',
        '1EW' => 'E02001724',
        '1EX' => 'E02001724',
        '1EY' => 'E02001724',
        '1EZ' => 'E02001724',
        '1HA' => 'E02001724',
        '1HB' => 'E02001724',
        '1HD' => 'E02001724',
        '1HE' => 'E02001724',
        '1HF' => 'E02001730',
        '1HG' => 'E02001730',
        '1HH' => 'E02001724',
        '1HJ' => 'E02001724',
        '1HL' => 'E02001724',
        '1HN' => 'E02001724',
        '1HP' => 'E02001724',
        '1HQ' => 'E02001724',
        '1HR' => 'E02001724',
        '1HT' => 'E02001724',
        '1HU' => 'E02001730',
        '1HY' => 'E02001724',
        '1JJ' => 'E02001730',
        '1JL' => 'E02001724',
        '1JN' => 'E02001724',
        '1JP' => 'E02001724',
        '1JQ' => 'E02001724',
        '1JR' => 'E02001724',
        '1JS' => 'E02001724',
        '1JT' => 'E02001724',
        '1JU' => 'E02001724',
        '1JW' => 'E02001724',
        '1JX' => 'E02001724',
        '1JY' => 'E02001724',
        '1JZ' => 'E02001724',
        '1LA' => 'E02001724',
        '1LB' => 'E02001724',
        '1LD' => 'E02001724',
        '1LE' => 'E02001724',
        '1LF' => 'E02001724',
        '1LG' => 'E02001724',
        '1LH' => 'E02001724',
        '1LJ' => 'E02001724',
        '1LN' => 'E02001724',
        '1LP' => 'E02001730',
        '1LQ' => 'E02001724',
        '1LR' => 'E02001724',
        '1LS' => 'E02001724',
        '1LT' => 'E02001730',
        '1LY' => 'E02001730',
        '1LZ' => 'E02001730',
        '1NA' => 'E02001730',
        '1NB' => 'E02001731',
        '1ND' => 'E02001730',
        '1NE' => 'E02001730',
        '1NF' => 'E02001730',
        '1NG' => 'E02001730',
        '1NH' => 'E02001724',
        '1NJ' => 'E02001724',
        '1NL' => 'E02001724',
        '1NN' => 'E02001730',
        '1NP' => 'E02001724',
        '1NQ' => 'E02001724',
        '1NR' => 'E02001724',
        '1NS' => 'E02001730',
        '1NT' => 'E02001730',
        '1NU' => 'E02001724',
        '1NW' => 'E02001724',
        '1NX' => 'E02001730',
        '1NY' => 'E02001724',
        '1NZ' => 'E02001730',
        '1PA' => 'E02001724',
        '1PB' => 'E02001724',
        '1PD' => 'E02001730',
        '1PF' => 'E02001730',
        '1PG' => 'E02001730',
        '1PH' => 'E02001730',
        '1PJ' => 'E02001730',
        '1PL' => 'E02001730',
        '1PN' => 'E02001724',
        '1PP' => 'E02001724',
        '1PQ' => 'E02001724',
        '1PR' => 'E02001724',
        '1PS' => 'E02001724',
        '1PT' => 'E02001724',
        '1PU' => 'E02001724',
        '1PW' => 'E02001724',
        '1PX' => 'E02001730',
        '1PY' => 'E02001724',
        '1PZ' => 'E02001724',
        '1QA' => 'E02001720',
        '1QD' => 'E02001730',
        '1QE' => 'E02001730',
        '1QF' => 'E02001730',
        '1QG' => 'E02001730',
        '1QH' => 'E02001730',
        '1QJ' => 'E02001730',
        '1QL' => 'E02001730',
        '1QP' => 'E02001730',
        '1QQ' => 'E02001730',
        '1QR' => 'E02001730',
        '1QS' => 'E02001730',
        '1QT' => 'E02001730',
        '1QU' => 'E02001730',
        '1QW' => 'E02001730',
        '1QX' => 'E02001730',
        '1QY' => 'E02001724',
        '1QZ' => 'E02001730',
        '1RA' => 'E02001724',
        '1RB' => 'E02001724',
        '1RD' => 'E02001724',
        '1RE' => 'E02001730',
        '1RF' => 'E02001724',
        '1RG' => 'E02001731',
        '1RH' => 'E02001724',
        '1RJ' => 'E02001730',
        '1RL' => 'E02001724',
        '1RN' => 'E02001724',
        '1RQ' => 'E02001730',
        '1RU' => 'E02001730',
        '1RW' => 'E02001730',
        '1RX' => 'E02001724',
        '1RY' => 'E02001730',
        '1SA' => 'E02001724',
        '1SB' => 'E02001730',
        '1SD' => 'E02001730',
        '1SE' => 'E02001730',
        '1SH' => 'E02001724',
        '1SN' => 'E02001730',
        '1SQ' => 'E02001730',
        '1SS' => 'E02001730',
        '1ST' => 'E02001730',
        '1SW' => 'E02001730',
        '1TA' => 'E02001724',
        '1TB' => 'E02001730',
        '1TH' => 'E02001724',
        '1TJ' => 'E02001724',
        '1TL' => 'E02001724',
        '1TN' => 'E02001724',
        '1TP' => 'E02001724',
        '1TQ' => 'E02001724',
        '1TR' => 'E02001724',
        '1TS' => 'E02001724',
        '1TT' => 'E02001724',
        '1TX' => 'E02001730',
        '1TZ' => 'E02001730',
        '1UA' => 'E02001724',
        '1UB' => 'E02001724',
        '1UD' => 'E02001724',
        '1UF' => 'E02001724',
        '1UJ' => 'E02001724',
        '1UL' => 'E02001724',
        '1UN' => 'E02001724',
        '1UQ' => 'E02001724',
        '1UW' => 'E02001724',
        '1UY' => 'E02001730',
        '1WA' => 'E02001731',
        '1WZ' => 'E02001731',
        '1XA' => 'E02001730',
        '1XB' => 'E02001730',
        '1XD' => 'E02001730',
        '1XE' => 'E02001730',
        '1XF' => 'E02001730',
        '1XG' => 'E02001724',
        '1XH' => 'E02001730',
        '1XJ' => 'E02001730',
        '1XP' => 'E02001730',
        '1XQ' => 'E02001730',
        '1XR' => 'E02001730',
        '1XS' => 'E02001730',
        '1XT' => 'E02001730',
        '1XU' => 'E02001730',
        '1XX' => 'E02001730',
        '1XY' => 'E02001730',
        '1YA' => 'E02001730',
        '1YB' => 'E02001730',
        '1YD' => 'E02001730',
        '1YE' => 'E02001730',
        '1YF' => 'E02001730',
        '1YG' => 'E02001730',
        '1YH' => 'E02001730',
        '1YJ' => 'E02001730',
        '1YL' => 'E02001730',
        '1YN' => 'E02001730',
        '1YP' => 'E02001730',
        '1YQ' => 'E02001730',
        '1YR' => 'E02001730',
        '1YS' => 'E02001730',
        '1YW' => 'E02001730',
        '1ZX' => 'E02001730',
        '2AA' => 'E02001724',
        '2AB' => 'E02001724',
        '2AD' => 'E02001724',
        '2AE' => 'E02001720',
        '2AF' => 'E02001731',
        '2AG' => 'E02001724',
        '2AH' => 'E02001724',
        '2AJ' => 'E02001724',
        '2AL' => 'E02001724',
        '2AN' => 'E02001724',
        '2AP' => 'E02001724',
        '2AQ' => 'E02001724',
        '2AR' => 'E02001720',
        '2AS' => 'E02001724',
        '2AT' => 'E02001724',
        '2AU' => 'E02001724',
        '2AW' => 'E02001724',
        '2AX' => 'E02001720',
        '2AZ' => 'E02001724',
        '2BB' => 'E02001724',
        '2BE' => 'E02001720',
        '2BG' => 'E02001724',
        '2BH' => 'E02001720',
        '2BN' => 'E02001724',
        '2BP' => 'E02001720',
        '2BR' => 'E02001720',
        '2DA' => 'E02001730',
        '2DE' => 'E02001724',
        '2DJ' => 'E02001720',
        '2DL' => 'E02001720',
        '2DN' => 'E02001720',
        '2DP' => 'E02001720',
        '2DQ' => 'E02001720',
        '2DR' => 'E02001720',
        '2DS' => 'E02001720',
        '2DT' => 'E02001720',
        '2DU' => 'E02001724',
        '2DW' => 'E02001720',
        '2DX' => 'E02001720',
        '2DY' => 'E02001724',
        '2EA' => 'E02001720',
        '2EL' => 'E02001720',
        '2EP' => 'E02001720',
        '2ER' => 'E02001720',
        '2ES' => 'E02001720',
        '2ET' => 'E02001720',
        '2EU' => 'E02001720',
        '2EX' => 'E02001720',
        '2EY' => 'E02001714',
        '2EZ' => 'E02001720',
        '2HA' => 'E02001720',
        '2HB' => 'E02001720',
        '2HD' => 'E02001720',
        '2HE' => 'E02001720',
        '2HF' => 'E02001720',
        '2HG' => 'E02001720',
        '2HH' => 'E02001720',
        '2HJ' => 'E02001720',
        '2HL' => 'E02001720',
        '2HN' => 'E02001720',
        '2HP' => 'E02001712',
        '2HR' => 'E02001720',
        '2HS' => 'E02001720',
        '2HT' => 'E02001720',
        '2HU' => 'E02001720',
        '2JA' => 'E02001720',
        '2JE' => 'E02001720',
        '2JH' => 'E02001724',
        '2JJ' => 'E02001724',
        '2JL' => 'E02001724',
        '2JN' => 'E02001720',
        '2JP' => 'E02001724',
        '2JQ' => 'E02001724',
        '2JR' => 'E02001720',
        '2JS' => 'E02001720',
        '2JT' => 'E02001720',
        '2JU' => 'E02001720',
        '2JX' => 'E02001720',
        '2JY' => 'E02001720',
        '2LB' => 'E02001724',
        '2LD' => 'E02001724',
        '2LE' => 'E02001724',
        '2LF' => 'E02001724',
        '2LU' => 'E02001724',
        '2LX' => 'E02001724',
        '2LY' => 'E02001720',
        '2NA' => 'E02001720',
        '2NB' => 'E02001720',
        '2ND' => 'E02001720',
        '2NE' => 'E02001720',
        '2NH' => 'E02001720',
        '2NJ' => 'E02001720',
        '2NL' => 'E02001720',
        '2NN' => 'E02001720',
        '2NP' => 'E02001720',
        '2NQ' => 'E02001720',
        '2PA' => 'E02001724',
        '2PJ' => 'E02001724',
        '2PL' => 'E02001720',
        '2PN' => 'E02001720',
        '2PP' => 'E02001724',
        '2PQ' => 'E02001724',
        '2PR' => 'E02001724',
        '2PS' => 'E02001724',
        '2PT' => 'E02001724',
        '2PU' => 'E02001724',
        '2PX' => 'E02001724',
        '2PY' => 'E02001724',
        '2QA' => 'E02001724',
        '2QB' => 'E02001724',
        '2QT' => 'E02001724',
        '2QU' => 'E02001724',
        '2QX' => 'E02001724',
        '2QY' => 'E02001724',
        '2RA' => 'E02001724',
        '2RB' => 'E02001724',
        '2RD' => 'E02001724',
        '2RE' => 'E02001724',
        '2RH' => 'E02001720',
        '2RJ' => 'E02001724',
        '2RL' => 'E02001720',
        '2RN' => 'E02001720',
        '2RP' => 'E02001720',
        '2RQ' => 'E02001720',
        '2RR' => 'E02001720',
        '2RT' => 'E02001720',
        '2RU' => 'E02001720',
        '2SP' => 'E02001720',
        '2SQ' => 'E02001720',
        '2SR' => 'E02001720',
        '2ST' => 'E02001720',
        '2SU' => 'E02001720',
        '2SX' => 'E02001720',
        '2SY' => 'E02001720',
        '2TA' => 'E02001720',
        '2TB' => 'E02001720',
        '2TD' => 'E02001720',
        '2TE' => 'E02001720',
        '2TF' => 'E02001720',
        '2TG' => 'E02001720',
        '2TJ' => 'E02001720',
        '2TL' => 'E02001720',
        '2TP' => 'E02001720',
        '2UA' => 'E02001724',
        '2WT' => 'E02001731',
        '2WU' => 'E02001731',
        '2WX' => 'E02001731',
        '3AA' => 'E02001720',
        '3AB' => 'E02001724',
        '3AD' => 'E02001724',
        '3AE' => 'E02001724',
        '3AF' => 'E02001720',
        '3AH' => 'E02001720',
        '3AJ' => 'E02001720',
        '3AL' => 'E02001724',
        '3AN' => 'E02001724',
        '3AP' => 'E02001720',
        '3AQ' => 'E02001720',
        '3AR' => 'E02001720',
        '3AS' => 'E02001720',
        '3AT' => 'E02001720',
        '3AU' => 'E02001720',
        '3AW' => 'E02001720',
        '3AX' => 'E02001720',
        '3AY' => 'E02001720',
        '3BA' => 'E02001724',
        '3BB' => 'E02001720',
        '3BD' => 'E02001724',
        '3BE' => 'E02001720',
        '3BG' => 'E02001724',
        '3BU' => 'E02001720',
        '3BX' => 'E02001720',
        '3BY' => 'E02001720',
        '3DA' => 'E02001720',
        '3DB' => 'E02001720',
        '3DD' => 'E02001720',
        '3DE' => 'E02001720',
        '3DF' => 'E02001720',
        '3DG' => 'E02001720',
        '3DH' => 'E02001720',
        '3DJ' => 'E02001720',
        '3DL' => 'E02001720',
        '3DN' => 'E02001720',
        '3DP' => 'E02001720',
        '3DQ' => 'E02001720',
        '3DR' => 'E02001720',
        '3DS' => 'E02001720',
        '3DT' => 'E02001720',
        '3DU' => 'E02001720',
        '3DX' => 'E02001720',
        '3DY' => 'E02001720',
        '3EA' => 'E02001720',
        '3ET' => 'E02001720',
        '3EU' => 'E02001720',
        '3EX' => 'E02001720',
        '3EY' => 'E02001720',
        '3HA' => 'E02001720',
        '3HB' => 'E02001720',
        '3HD' => 'E02001720',
        '3HE' => 'E02001720',
        '3HF' => 'E02001720',
        '3HH' => 'E02001720',
        '3HJ' => 'E02001720',
        '3HL' => 'E02001720',
        '3HN' => 'E02001720',
        '3HP' => 'E02001720',
        '3HQ' => 'E02001720',
        '3HR' => 'E02001720',
        '3HS' => 'E02001720',
        '3HT' => 'E02001720',
        '3HU' => 'E02001720',
        '3HX' => 'E02001720',
        '3HY' => 'E02001720',
        '3JA' => 'E02001720',
        '3JT' => 'E02001720',
        '3JU' => 'E02001720',
        '3JX' => 'E02001720',
        '3JY' => 'E02001720',
        '3LA' => 'E02001720',
        '3LB' => 'E02001720',
        '3LD' => 'E02001720',
        '3LE' => 'E02001720',
        '3LH' => 'E02001720',
        '3LJ' => 'E02001720',
        '3LL' => 'E02001720',
        '3LN' => 'E02001720',
        '3LP' => 'E02001720',
        '3LQ' => 'E02001720',
        '3NH' => 'E02001713',
        '3NJ' => 'E02001712',
        '3NL' => 'E02001712',
        '3NN' => 'E02001712',
        '3NP' => 'E02001712',
        '3NQ' => 'E02001712',
        '3NR' => 'E02001712',
        '3NS' => 'E02001712',
        '3NT' => 'E02001712',
        '3NU' => 'E02001712',
        '3NX' => 'E02001712',
        '3NY' => 'E02001712',
        '3NZ' => 'E02001712',
        '3PA' => 'E02001712',
        '3PB' => 'E02001712',
        '3PD' => 'E02001712',
        '3PE' => 'E02001712',
        '3PJ' => 'E02001712',
        '3PL' => 'E02001712',
        '3PN' => 'E02001712',
        '3PP' => 'E02001712',
        '3QE' => 'E02001720',
        '3QH' => 'E02001720',
        '3QJ' => 'E02001712',
        '3QL' => 'E02001720',
        '3QN' => 'E02001712',
        '3QP' => 'E02001712',
        '3QQ' => 'E02001712',
        '3QR' => 'E02001712',
        '3QS' => 'E02001712',
        '3QT' => 'E02001712',
        '3QU' => 'E02001712',
        '3QX' => 'E02001712',
        '3QY' => 'E02001712',
        '3RA' => 'E02001712',
        '3RB' => 'E02001712',
        '3RD' => 'E02001712',
        '3RE' => 'E02001712',
        '3RF' => 'E02001712',
        '3RG' => 'E02001714',
        '3RH' => 'E02001714',
        '3RJ' => 'E02001720',
        '3WA' => 'E02001731',
        '4AA' => 'E02001731',
        '4AB' => 'E02001731',
        '4AD' => 'E02001731',
        '4AE' => 'E02001731',
        '4AF' => 'E02001731',
        '4AG' => 'E02001731',
        '4AH' => 'E02001731',
        '4AJ' => 'E02001731',
        '4AL' => 'E02001731',
        '4AN' => 'E02001731',
        '4AP' => 'E02001729',
        '4AQ' => 'E02001729',
        '4AR' => 'E02001729',
        '4AS' => 'E02001731',
        '4AT' => 'E02001731',
        '4AU' => 'E02001731',
        '4AW' => 'E02001731',
        '4AX' => 'E02001731',
        '4AY' => 'E02001731',
        '4AZ' => 'E02001731',
        '4BA' => 'E02001731',
        '4BB' => 'E02001731',
        '4BD' => 'E02001731',
        '4BE' => 'E02001731',
        '4BF' => 'E02001731',
        '4BG' => 'E02001731',
        '4BH' => 'E02001731',
        '4BJ' => 'E02001731',
        '4BL' => 'E02001731',
        '4BN' => 'E02001731',
        '4BP' => 'E02001731',
        '4BQ' => 'E02001731',
        '4BR' => 'E02001731',
        '4BS' => 'E02001731',
        '4BT' => 'E02001731',
        '4BU' => 'E02001731',
        '4BW' => 'E02001731',
        '4BX' => 'E02001731',
        '4BY' => 'E02001731',
        '4BZ' => 'E02001731',
        '4DA' => 'E02001724',
        '4DB' => 'E02001731',
        '4DD' => 'E02001724',
        '4DE' => 'E02001731',
        '4DF' => 'E02001724',
        '4DG' => 'E02001724',
        '4DH' => 'E02001724',
        '4DJ' => 'E02001724',
        '4DL' => 'E02001724',
        '4DN' => 'E02001724',
        '4DP' => 'E02001724',
        '4DQ' => 'E02001724',
        '4DS' => 'E02001724',
        '4DX' => 'E02001724',
        '4DY' => 'E02001724',
        '4EA' => 'E02001731',
        '4ET' => 'E02001731',
        '4EU' => 'E02001731',
        '4EY' => 'E02001731',
        '4HA' => 'E02001731',
        '4HB' => 'E02001731',
        '4HE' => 'E02001731',
        '4HF' => 'E02001731',
        '4HH' => 'E02001731',
        '4HL' => 'E02001729',
        '4HN' => 'E02001731',
        '4HQ' => 'E02001731',
        '4LA' => 'E02001729',
        '4LB' => 'E02001729',
        '4LD' => 'E02001729',
        '4LE' => 'E02001729',
        '4LG' => 'E02001729',
        '4LH' => 'E02001729',
        '4LJ' => 'E02001729',
        '4LL' => 'E02001729',
        '4LN' => 'E02001731',
        '4LP' => 'E02001729',
        '4LQ' => 'E02001729',
        '4LR' => 'E02001729',
        '4LS' => 'E02001729',
        '4LT' => 'E02001729',
        '4LU' => 'E02001729',
        '4LX' => 'E02001729',
        '4LY' => 'E02001729',
        '4LZ' => 'E02001729',
        '4NA' => 'E02001729',
        '4NB' => 'E02001729',
        '4ND' => 'E02001729',
        '4NE' => 'E02001731',
        '4NF' => 'E02001729',
        '4NG' => 'E02001731',
        '4NH' => 'E02001729',
        '4NJ' => 'E02001729',
        '4NL' => 'E02001731',
        '4NN' => 'E02001731',
        '4NP' => 'E02001729',
        '4NQ' => 'E02001729',
        '4NR' => 'E02001731',
        '4NS' => 'E02001729',
        '4NT' => 'E02001729',
        '4NU' => 'E02001731',
        '4NW' => 'E02001729',
        '4NX' => 'E02001729',
        '4NY' => 'E02001729',
        '4NZ' => 'E02001729',
        '4PA' => 'E02001729',
        '4PB' => 'E02001729',
        '4PD' => 'E02001731',
        '4PE' => 'E02001729',
        '4PF' => 'E02001731',
        '4PG' => 'E02001731',
        '4PP' => 'E02001731',
        '4PQ' => 'E02001731',
        '4PR' => 'E02001731',
        '4PS' => 'E02001731',
        '4PT' => 'E02001731',
        '4PU' => 'E02001731',
        '4PX' => 'E02001731',
        '4PZ' => 'E02001731',
        '4QA' => 'E02001724',
        '4QB' => 'E02001731',
        '4QD' => 'E02001731',
        '4QE' => 'E02001731',
        '4QJ' => 'E02001731',
        '4QP' => 'E02001731',
        '4QR' => 'E02001731',
        '4RF' => 'E02001724',
        '4RH' => 'E02001724',
        '4RJ' => 'E02001724',
        '4RL' => 'E02001724',
        '4RN' => 'E02001724',
        '4RP' => 'E02001724',
        '4RQ' => 'E02001724',
        '4RR' => 'E02001724',
        '4RS' => 'E02001724',
        '4RT' => 'E02001724',
        '4RU' => 'E02001724',
        '4RX' => 'E02001724',
        '4RY' => 'E02001724',
        '4RZ' => 'E02001724',
        '4SA' => 'E02001724',
        '4SB' => 'E02001724',
        '4SE' => 'E02001724',
        '4SH' => 'E02001724',
        '4SN' => 'E02001724',
        '4SP' => 'E02001724',
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
