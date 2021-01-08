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
final class M3
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02001178',
        '1AD' => 'E02001178',
        '1AE' => 'E02006913',
        '1AP' => 'E02006902',
        '1AR' => 'E02006915',
        '1AX' => 'E02006902',
        '1AZ' => 'E02006902',
        '1BB' => 'E02006915',
        '1BD' => 'E02006902',
        '1BE' => 'E02006902',
        '1BS' => 'E02006902',
        '1BZ' => 'E02006915',
        '1DA' => 'E02006902',
        '1DB' => 'E02006915',
        '1DP' => 'E02006913',
        '1DQ' => 'E02006915',
        '1DX' => 'E02006915',
        '1DY' => 'E02006915',
        '1DZ' => 'E02006915',
        '1EA' => 'E02006915',
        '1EB' => 'E02006915',
        '1ED' => 'E02006915',
        '1EE' => 'E02006915',
        '1EF' => 'E02006915',
        '1EG' => 'E02006915',
        '1EH' => 'E02006915',
        '1EJ' => 'E02006915',
        '1ER' => 'E02006915',
        '1ES' => 'E02006913',
        '1ET' => 'E02006913',
        '1EU' => 'E02006915',
        '1EX' => 'E02006915',
        '1EY' => 'E02006913',
        '1EZ' => 'E02006913',
        '1FA' => 'E02006915',
        '1FB' => 'E02006915',
        '1FD' => 'E02006915',
        '1FE' => 'E02006915',
        '1FF' => 'E02006915',
        '1FH' => 'E02006915',
        '1FS' => 'E02006913',
        '1FU' => 'E02006913',
        '1FY' => 'E02006913',
        '1FZ' => 'E02006913',
        '1HA' => 'E02006915',
        '1HB' => 'E02006913',
        '1HE' => 'E02006913',
        '1HF' => 'E02006913',
        '1HG' => 'E02006913',
        '1HH' => 'E02006915',
        '1HJ' => 'E02006913',
        '1HL' => 'E02006913',
        '1HN' => 'E02006913',
        '1HQ' => 'E02006913',
        '1HR' => 'E02006913',
        '1HS' => 'E02006913',
        '1HT' => 'E02006913',
        '1HU' => 'E02006913',
        '1HW' => 'E02006913',
        '1HX' => 'E02006915',
        '1HY' => 'E02006913',
        '1HZ' => 'E02006913',
        '1JA' => 'E02006913',
        '1JB' => 'E02006913',
        '1JD' => 'E02006913',
        '1JE' => 'E02006915',
        '1JF' => 'E02006915',
        '1JH' => 'E02006915',
        '1JJ' => 'E02006913',
        '1JL' => 'E02006915',
        '1JS' => 'E02006915',
        '1LA' => 'E02006915',
        '1LD' => 'E02006915',
        '1LE' => 'E02006915',
        '1LF' => 'E02006915',
        '1LG' => 'E02006915',
        '1LJ' => 'E02006915',
        '1LN' => 'E02006915',
        '1LP' => 'E02006915',
        '1LQ' => 'E02006915',
        '1LR' => 'E02006915',
        '1LS' => 'E02006915',
        '1LT' => 'E02006915',
        '1LU' => 'E02006915',
        '1LW' => 'E02006915',
        '1LY' => 'E02006915',
        '1LZ' => 'E02006915',
        '1NA' => 'E02006915',
        '1ND' => 'E02001178',
        '1NE' => 'E02006915',
        '1NF' => 'E02006915',
        '1NG' => 'E02006915',
        '1NH' => 'E02006915',
        '1NJ' => 'E02006915',
        '1NL' => 'E02006915',
        '1NN' => 'E02006915',
        '1NP' => 'E02006915',
        '1NQ' => 'E02001178',
        '1NS' => 'E02006902',
        '1NT' => 'E02006902',
        '1NX' => 'E02006902',
        '1NY' => 'E02006902',
        '1NZ' => 'E02006902',
        '1PA' => 'E02006902',
        '1PB' => 'E02006902',
        '1PE' => 'E02006915',
        '1PF' => 'E02006915',
        '1PG' => 'E02006915',
        '1PH' => 'E02006902',
        '1PJ' => 'E02006915',
        '1PL' => 'E02001178',
        '1PN' => 'E02001178',
        '1PQ' => 'E02006915',
        '1PR' => 'E02006915',
        '1PS' => 'E02006915',
        '1PT' => 'E02006915',
        '1PU' => 'E02006915',
        '1RA' => 'E02006902',
        '1RB' => 'E02001178',
        '1RD' => 'E02006902',
        '1RE' => 'E02006902',
        '1RF' => 'E02006902',
        '1RH' => 'E02006902',
        '1RJ' => 'E02001178',
        '1RR' => 'E02006915',
        '1RS' => 'E02006902',
        '1RT' => 'E02006902',
        '1SA' => 'E02006902',
        '1SB' => 'E02006902',
        '1SD' => 'E02006902',
        '1SE' => 'E02006902',
        '1SG' => 'E02006902',
        '1SH' => 'E02006902',
        '1SN' => 'E02006902',
        '1SP' => 'E02006902',
        '1SQ' => 'E02006902',
        '1SR' => 'E02006902',
        '1SS' => 'E02006902',
        '1ST' => 'E02006902',
        '1SU' => 'E02006902',
        '1SW' => 'E02006902',
        '1SX' => 'E02006902',
        '1SY' => 'E02006902',
        '1SZ' => 'E02006902',
        '1UN' => 'E02006902',
        '1WA' => 'E02006915',
        '1WB' => 'E02006915',
        '1WD' => 'E02006915',
        '1WE' => 'E02006915',
        '1WF' => 'E02006915',
        '1WH' => 'E02006915',
        '1WS' => 'E02006902',
        '1WU' => 'E02006902',
        '1WX' => 'E02006902',
        '1WY' => 'E02006902',
        '1WZ' => 'E02006915',
        '2AA' => 'E02006902',
        '2AB' => 'E02006902',
        '2AD' => 'E02006902',
        '2AE' => 'E02006902',
        '2AL' => 'E02006902',
        '2AP' => 'E02006902',
        '2AR' => 'E02006902',
        '2AT' => 'E02006902',
        '2AU' => 'E02006902',
        '2AY' => 'E02006902',
        '2AZ' => 'E02006902',
        '2BA' => 'E02006902',
        '2BB' => 'E02006902',
        '2BD' => 'E02006902',
        '2BE' => 'E02006902',
        '2BG' => 'E02006902',
        '2BH' => 'E02006902',
        '2BJ' => 'E02006902',
        '2BL' => 'E02006902',
        '2BN' => 'E02006902',
        '2BP' => 'E02006902',
        '2BQ' => 'E02006902',
        '2BS' => 'E02006902',
        '2BU' => 'E02006902',
        '2BW' => 'E02006902',
        '2BX' => 'E02006902',
        '2BY' => 'E02006902',
        '2BZ' => 'E02006902',
        '2DA' => 'E02006902',
        '2DB' => 'E02006902',
        '2DD' => 'E02006902',
        '2DE' => 'E02006902',
        '2DF' => 'E02006902',
        '2DJ' => 'E02006902',
        '2DX' => 'E02006902',
        '2EG' => 'E02006902',
        '2EH' => 'E02006902',
        '2EJ' => 'E02006902',
        '2EN' => 'E02006902',
        '2EP' => 'E02006902',
        '2EQ' => 'E02006902',
        '2ER' => 'E02006902',
        '2EW' => 'E02006902',
        '2EZ' => 'E02006902',
        '2FB' => 'E02006902',
        '2FE' => 'E02006902',
        '2FF' => 'E02006902',
        '2FH' => 'E02006902',
        '2FN' => 'E02006902',
        '2FP' => 'E02006902',
        '2FW' => 'E02006902',
        '2GG' => 'E02006902',
        '2GH' => 'E02006902',
        '2GJ' => 'E02006902',
        '2GP' => 'E02006902',
        '2GQ' => 'E02006902',
        '2GR' => 'E02006902',
        '2GS' => 'E02006902',
        '2GU' => 'E02006902',
        '2GX' => 'E02006902',
        '2HA' => 'E02006902',
        '2HB' => 'E02006902',
        '2HF' => 'E02006902',
        '2HJ' => 'E02006902',
        '2HL' => 'E02006902',
        '2HN' => 'E02006902',
        '2HP' => 'E02006902',
        '2HQ' => 'E02006902',
        '2HR' => 'E02006902',
        '2HS' => 'E02006902',
        '2HT' => 'E02006902',
        '2HW' => 'E02006902',
        '2HX' => 'E02006902',
        '2JA' => 'E02006902',
        '2JB' => 'E02006902',
        '2JH' => 'E02006902',
        '2JJ' => 'E02006902',
        '2JL' => 'E02006902',
        '2LA' => 'E02006902',
        '2LB' => 'E02006902',
        '2LD' => 'E02006902',
        '2LE' => 'E02006902',
        '2LF' => 'E02006902',
        '2LG' => 'E02006902',
        '2LH' => 'E02006902',
        '2LP' => 'E02006902',
        '2LR' => 'E02006902',
        '2LU' => 'E02006902',
        '2LX' => 'E02006902',
        '2LY' => 'E02006902',
        '2NA' => 'E02006902',
        '2NB' => 'E02006902',
        '2ND' => 'E02006902',
        '2NH' => 'E02006902',
        '2NJ' => 'E02006902',
        '2NL' => 'E02006902',
        '2NR' => 'E02006902',
        '2NT' => 'E02006902',
        '2NU' => 'E02006902',
        '2NW' => 'E02006902',
        '2NY' => 'E02006902',
        '2NZ' => 'E02006902',
        '2PA' => 'E02006902',
        '2PB' => 'E02006902',
        '2PD' => 'E02006902',
        '2PE' => 'E02006902',
        '2PF' => 'E02006902',
        '2PH' => 'E02006902',
        '2PJ' => 'E02006902',
        '2PL' => 'E02006902',
        '2PN' => 'E02006902',
        '2PP' => 'E02006902',
        '2PR' => 'E02006902',
        '2PW' => 'E02006902',
        '2QG' => 'E02006902',
        '2QH' => 'E02006902',
        '2QJ' => 'E02006902',
        '2QL' => 'E02006902',
        '2QP' => 'E02006902',
        '2QQ' => 'E02006902',
        '2QR' => 'E02006902',
        '2QS' => 'E02006902',
        '2QT' => 'E02006902',
        '2QU' => 'E02006902',
        '2QX' => 'E02006902',
        '2RA' => 'E02006902',
        '2RB' => 'E02006902',
        '2RD' => 'E02006902',
        '2RE' => 'E02006902',
        '2RF' => 'E02006902',
        '2RH' => 'E02006902',
        '2RJ' => 'E02006902',
        '2RL' => 'E02006902',
        '2RP' => 'E02006902',
        '2WA' => 'E02006902',
        '2WB' => 'E02006902',
        '2WD' => 'E02006902',
        '2WH' => 'E02006902',
        '2WJ' => 'E02006902',
        '2WL' => 'E02006902',
        '2WN' => 'E02006902',
        '2WP' => 'E02006902',
        '2WT' => 'E02006902',
        '2WU' => 'E02006902',
        '2WX' => 'E02006902',
        '2WY' => 'E02006902',
        '2WZ' => 'E02006902',
        '3AA' => 'E02006902',
        '3AB' => 'E02006902',
        '3AD' => 'E02006917',
        '3AE' => 'E02006917',
        '3AF' => 'E02006917',
        '3AG' => 'E02006917',
        '3AH' => 'E02006917',
        '3AJ' => 'E02006917',
        '3AL' => 'E02006917',
        '3AN' => 'E02006917',
        '3AP' => 'E02006902',
        '3AQ' => 'E02006917',
        '3AR' => 'E02006917',
        '3AT' => 'E02006902',
        '3AU' => 'E02006902',
        '3AW' => 'E02006902',
        '3AX' => 'E02006902',
        '3AY' => 'E02006902',
        '3AZ' => 'E02006917',
        '3BA' => 'E02006902',
        '3BB' => 'E02006902',
        '3BD' => 'E02006902',
        '3BE' => 'E02006917',
        '3BF' => 'E02006917',
        '3BG' => 'E02006917',
        '3BH' => 'E02006902',
        '3BJ' => 'E02006902',
        '3BL' => 'E02006902',
        '3BN' => 'E02006902',
        '3BP' => 'E02006902',
        '3BQ' => 'E02006902',
        '3BR' => 'E02006902',
        '3BS' => 'E02006902',
        '3BT' => 'E02006902',
        '3BU' => 'E02006902',
        '3BW' => 'E02006902',
        '3BX' => 'E02006917',
        '3BY' => 'E02006902',
        '3BZ' => 'E02006902',
        '3DA' => 'E02006902',
        '3DD' => 'E02006917',
        '3DH' => 'E02006917',
        '3DJ' => 'E02006917',
        '3DL' => 'E02006902',
        '3DN' => 'E02006902',
        '3DP' => 'E02006917',
        '3DS' => 'E02006902',
        '3DT' => 'E02006902',
        '3DU' => 'E02006917',
        '3EA' => 'E02006902',
        '3EB' => 'E02006917',
        '3ED' => 'E02006902',
        '3EE' => 'E02006902',
        '3EF' => 'E02006902',
        '3EH' => 'E02006902',
        '3EJ' => 'E02006917',
        '3EL' => 'E02006917',
        '3EN' => 'E02006902',
        '3EP' => 'E02006902',
        '3EQ' => 'E02006902',
        '3ER' => 'E02006917',
        '3FA' => 'E02006902',
        '3FE' => 'E02006902',
        '3FF' => 'E02006902',
        '3FJ' => 'E02006917',
        '3FL' => 'E02006917',
        '3FP' => 'E02006917',
        '3FR' => 'E02006917',
        '3FT' => 'E02006917',
        '3FX' => 'E02006917',
        '3GG' => 'E02006902',
        '3GR' => 'E02006902',
        '3GS' => 'E02006917',
        '3GY' => 'E02006917',
        '3GZ' => 'E02006917',
        '3HA' => 'E02006902',
        '3HB' => 'E02006917',
        '3HD' => 'E02006917',
        '3HE' => 'E02006917',
        '3HF' => 'E02006902',
        '3HG' => 'E02006917',
        '3HH' => 'E02006902',
        '3HL' => 'E02006902',
        '3HN' => 'E02006902',
        '3HP' => 'E02006902',
        '3HQ' => 'E02006917',
        '3HR' => 'E02006902',
        '3HS' => 'E02006917',
        '3HT' => 'E02006917',
        '3HU' => 'E02006902',
        '3HX' => 'E02006917',
        '3HY' => 'E02006917',
        '3HZ' => 'E02006917',
        '3JA' => 'E02006917',
        '3JB' => 'E02006917',
        '3JD' => 'E02006917',
        '3JE' => 'E02006917',
        '3JH' => 'E02006917',
        '3JJ' => 'E02006917',
        '3JL' => 'E02006902',
        '3JP' => 'E02006914',
        '3JR' => 'E02006902',
        '3JS' => 'E02006917',
        '3JT' => 'E02006902',
        '3JU' => 'E02006902',
        '3JW' => 'E02006902',
        '3JX' => 'E02006902',
        '3JY' => 'E02006902',
        '3JZ' => 'E02006902',
        '3LA' => 'E02006902',
        '3LB' => 'E02006902',
        '3LD' => 'E02006902',
        '3LE' => 'E02006902',
        '3LF' => 'E02006902',
        '3LH' => 'E02006902',
        '3LL' => 'E02006902',
        '3LP' => 'E02006902',
        '3LS' => 'E02006902',
        '3LU' => 'E02006902',
        '3LX' => 'E02006902',
        '3LY' => 'E02006902',
        '3NA' => 'E02006902',
        '3ND' => 'E02006902',
        '3NE' => 'E02006902',
        '3NF' => 'E02006902',
        '3NJ' => 'E02006902',
        '3NN' => 'E02006902',
        '3NP' => 'E02006902',
        '3NS' => 'E02006902',
        '3NW' => 'E02006902',
        '3PL' => 'E02006917',
        '3RG' => 'E02006917',
        '3RN' => 'E02006902',
        '3SG' => 'E02006917',
        '3SL' => 'E02006902',
        '3ST' => 'E02006902',
        '3TA' => 'E02006917',
        '3TD' => 'E02006902',
        '3WA' => 'E02006902',
        '3WB' => 'E02006902',
        '3WD' => 'E02006902',
        '3WE' => 'E02006902',
        '3WF' => 'E02006902',
        '3WH' => 'E02006902',
        '3WJ' => 'E02006902',
        '3WL' => 'E02006902',
        '3WP' => 'E02006902',
        '3WR' => 'E02006902',
        '3WS' => 'E02006902',
        '3WT' => 'E02006902',
        '3WU' => 'E02006902',
        '3WW' => 'E02006902',
        '4AA' => 'E02006902',
        '4AB' => 'E02006902',
        '4AD' => 'E02006917',
        '4AE' => 'E02006917',
        '4AF' => 'E02006916',
        '4AG' => 'E02006917',
        '4AH' => 'E02006917',
        '4AJ' => 'E02001178',
        '4AL' => 'E02006917',
        '4AN' => 'E02006917',
        '4AP' => 'E02006917',
        '4AQ' => 'E02006917',
        '4AR' => 'E02006917',
        '4AS' => 'E02006917',
        '4AT' => 'E02006917',
        '4AU' => 'E02006916',
        '4AW' => 'E02006917',
        '4AX' => 'E02006917',
        '4AY' => 'E02006916',
        '4AZ' => 'E02006916',
        '4BA' => 'E02006916',
        '4BB' => 'E02006917',
        '4BD' => 'E02006917',
        '4BE' => 'E02006916',
        '4BF' => 'E02006902',
        '4BG' => 'E02006902',
        '4BH' => 'E02006917',
        '4BJ' => 'E02006917',
        '4BL' => 'E02006917',
        '4BP' => 'E02006902',
        '4BQ' => 'E02006902',
        '4BT' => 'E02006917',
        '4BX' => 'E02006917',
        '4BY' => 'E02006917',
        '4BZ' => 'E02006917',
        '4DA' => 'E02006902',
        '4DB' => 'E02006917',
        '4DE' => 'E02006917',
        '4DF' => 'E02006917',
        '4DG' => 'E02006917',
        '4DH' => 'E02006917',
        '4DJ' => 'E02006917',
        '4DN' => 'E02006917',
        '4DQ' => 'E02006917',
        '4DR' => 'E02006917',
        '4DS' => 'E02006917',
        '4DT' => 'E02006917',
        '4DU' => 'E02006917',
        '4DW' => 'E02006917',
        '4DX' => 'E02006917',
        '4DY' => 'E02006917',
        '4DZ' => 'E02006917',
        '4EA' => 'E02006917',
        '4EB' => 'E02006917',
        '4ED' => 'E02006917',
        '4EE' => 'E02006917',
        '4EF' => 'E02006917',
        '4EG' => 'E02006917',
        '4EH' => 'E02006917',
        '4EJ' => 'E02006917',
        '4EL' => 'E02006917',
        '4EN' => 'E02006917',
        '4EP' => 'E02006917',
        '4ER' => 'E02006902',
        '4ET' => 'E02006917',
        '4EW' => 'E02006917',
        '4FA' => 'E02006917',
        '4FB' => 'E02006917',
        '4FD' => 'E02006917',
        '4FG' => 'E02006917',
        '4FH' => 'E02006917',
        '4FJ' => 'E02006917',
        '4FL' => 'E02006917',
        '4FN' => 'E02006917',
        '4FP' => 'E02006917',
        '4FQ' => 'E02006917',
        '4FR' => 'E02006917',
        '4FT' => 'E02006917',
        '4FW' => 'E02006917',
        '4HB' => 'E02006917',
        '4HE' => 'E02006917',
        '4HF' => 'E02006917',
        '4HH' => 'E02006917',
        '4HJ' => 'E02006917',
        '4JA' => 'E02006916',
        '4JB' => 'E02006917',
        '4JD' => 'E02006916',
        '4JE' => 'E02006916',
        '4JG' => 'E02006917',
        '4JH' => 'E02006917',
        '4JJ' => 'E02006917',
        '4JL' => 'E02006917',
        '4JN' => 'E02006917',
        '4JP' => 'E02006917',
        '4JQ' => 'E02006917',
        '4JR' => 'E02006917',
        '4JS' => 'E02006917',
        '4JT' => 'E02006917',
        '4JU' => 'E02006916',
        '4JW' => 'E02006917',
        '4JX' => 'E02006917',
        '4JY' => 'E02001184',
        '4JZ' => 'E02006916',
        '4LA' => 'E02006917',
        '4LB' => 'E02006917',
        '4LD' => 'E02006917',
        '4LG' => 'E02006917',
        '4LP' => 'E02006917',
        '4LQ' => 'E02006917',
        '4LS' => 'E02006917',
        '4LT' => 'E02006917',
        '4LU' => 'E02006917',
        '4LX' => 'E02006917',
        '4LY' => 'E02006917',
        '4LZ' => 'E02006917',
        '4NA' => 'E02006917',
        '4NB' => 'E02006917',
        '4ND' => 'E02006917',
        '4NE' => 'E02006917',
        '4NF' => 'E02006917',
        '4NG' => 'E02006917',
        '4NH' => 'E02006917',
        '4NJ' => 'E02006917',
        '4NL' => 'E02006917',
        '4NN' => 'E02006917',
        '4NP' => 'E02006917',
        '4NQ' => 'E02006917',
        '4NR' => 'E02006917',
        '4NS' => 'E02006917',
        '4NW' => 'E02006917',
        '4PA' => 'E02006917',
        '4PE' => 'E02006917',
        '4PF' => 'E02006917',
        '4PG' => 'E02006917',
        '4PJ' => 'E02006917',
        '4PN' => 'E02006917',
        '4PP' => 'E02006917',
        '4PQ' => 'E02006917',
        '4PR' => 'E02006917',
        '4PS' => 'E02006917',
        '4PU' => 'E02006917',
        '4PW' => 'E02006917',
        '4PY' => 'E02006917',
        '4PZ' => 'E02006917',
        '4QL' => 'E02006917',
        '4RB' => 'E02006917',
        '4RU' => 'E02006917',
        '4SB' => 'E02006917',
        '4ST' => 'E02006917',
        '4SW' => 'E02006917',
        '4TT' => 'E02006917',
        '4WA' => 'E02006913',
        '4WB' => 'E02006917',
        '4WD' => 'E02006917',
        '4WE' => 'E02006917',
        '4WF' => 'E02006917',
        '4WJ' => 'E02006917',
        '4WP' => 'E02006917',
        '4WQ' => 'E02006917',
        '4WW' => 'E02006917',
        '4WZ' => 'E02006902',
        '4ZA' => 'E02006917',
        '5AA' => 'E02001178',
        '5AB' => 'E02001178',
        '5AD' => 'E02001178',
        '5AE' => 'E02001178',
        '5AF' => 'E02001178',
        '5AG' => 'E02001178',
        '5AH' => 'E02006902',
        '5AJ' => 'E02001178',
        '5AL' => 'E02001178',
        '5AP' => 'E02001178',
        '5AQ' => 'E02001178',
        '5AR' => 'E02001178',
        '5AS' => 'E02001178',
        '5AT' => 'E02001178',
        '5AU' => 'E02001178',
        '5AX' => 'E02001178',
        '5AY' => 'E02001178',
        '5AZ' => 'E02001178',
        '5BA' => 'E02001178',
        '5BB' => 'E02001178',
        '5BD' => 'E02001178',
        '5BE' => 'E02001178',
        '5BF' => 'E02001178',
        '5BG' => 'E02001178',
        '5BH' => 'E02001178',
        '5BJ' => 'E02001178',
        '5BL' => 'E02001178',
        '5BN' => 'E02001178',
        '5BP' => 'E02001178',
        '5BQ' => 'E02001178',
        '5BR' => 'E02001178',
        '5BS' => 'E02001178',
        '5BT' => 'E02001178',
        '5BU' => 'E02001178',
        '5BW' => 'E02001178',
        '5BX' => 'E02001178',
        '5BY' => 'E02001178',
        '5BZ' => 'E02001178',
        '5DA' => 'E02001178',
        '5DB' => 'E02001178',
        '5DD' => 'E02001178',
        '5DE' => 'E02001178',
        '5DF' => 'E02001178',
        '5DG' => 'E02001178',
        '5DH' => 'E02001178',
        '5DJ' => 'E02001178',
        '5DL' => 'E02001178',
        '5DN' => 'E02001178',
        '5DP' => 'E02001178',
        '5DQ' => 'E02001178',
        '5DR' => 'E02001178',
        '5DS' => 'E02001178',
        '5DT' => 'E02001178',
        '5DU' => 'E02001178',
        '5DW' => 'E02001178',
        '5DX' => 'E02001178',
        '5DY' => 'E02001178',
        '5DZ' => 'E02001178',
        '5EA' => 'E02001178',
        '5EB' => 'E02001178',
        '5ED' => 'E02001178',
        '5EE' => 'E02001178',
        '5EF' => 'E02001178',
        '5EG' => 'E02001178',
        '5EH' => 'E02001178',
        '5EJ' => 'E02001178',
        '5EL' => 'E02001178',
        '5EN' => 'E02001178',
        '5EP' => 'E02001178',
        '5EQ' => 'E02001178',
        '5ER' => 'E02001178',
        '5ES' => 'E02001178',
        '5ET' => 'E02001178',
        '5EU' => 'E02001178',
        '5EW' => 'E02001178',
        '5EX' => 'E02001178',
        '5FA' => 'E02006917',
        '5FD' => 'E02006917',
        '5FF' => 'E02001178',
        '5FG' => 'E02001178',
        '5FJ' => 'E02006917',
        '5FL' => 'E02001178',
        '5FP' => 'E02001178',
        '5FQ' => 'E02001178',
        '5FR' => 'E02001178',
        '5FS' => 'E02001178',
        '5FT' => 'E02001178',
        '5FU' => 'E02001178',
        '5FX' => 'E02001178',
        '5FY' => 'E02001178',
        '5FZ' => 'E02001178',
        '5GA' => 'E02001178',
        '5GB' => 'E02001178',
        '5GD' => 'E02001178',
        '5GE' => 'E02001178',
        '5GF' => 'E02001178',
        '5HD' => 'E02001178',
        '5HE' => 'E02001178',
        '5HF' => 'E02001178',
        '5HG' => 'E02001178',
        '5HH' => 'E02001178',
        '5HJ' => 'E02001178',
        '5HL' => 'E02001178',
        '5HN' => 'E02001178',
        '5HP' => 'E02001178',
        '5HQ' => 'E02001178',
        '5HR' => 'E02001178',
        '5HS' => 'E02001178',
        '5HT' => 'E02001178',
        '5HU' => 'E02001178',
        '5HW' => 'E02001178',
        '5HX' => 'E02001178',
        '5HY' => 'E02001178',
        '5HZ' => 'E02001178',
        '5JA' => 'E02001178',
        '5JB' => 'E02001178',
        '5JD' => 'E02001178',
        '5JE' => 'E02001178',
        '5JF' => 'E02001178',
        '5JG' => 'E02001178',
        '5JH' => 'E02001178',
        '5JJ' => 'E02001178',
        '5JL' => 'E02001178',
        '5JP' => 'E02001178',
        '5JQ' => 'E02001178',
        '5JR' => 'E02001178',
        '5JS' => 'E02001178',
        '5JT' => 'E02001178',
        '5JU' => 'E02001178',
        '5JY' => 'E02001178',
        '5JZ' => 'E02001178',
        '5LA' => 'E02001178',
        '5LD' => 'E02001178',
        '5LE' => 'E02001178',
        '5LF' => 'E02001178',
        '5LH' => 'E02001178',
        '5LL' => 'E02001178',
        '5LP' => 'E02001178',
        '5LS' => 'E02001178',
        '5LT' => 'E02001178',
        '5LU' => 'E02001178',
        '5NA' => 'E02001178',
        '5NB' => 'E02001178',
        '5ND' => 'E02001178',
        '5NE' => 'E02001178',
        '5NF' => 'E02001178',
        '5NG' => 'E02001178',
        '5NH' => 'E02001178',
        '5PB' => 'E02001178',
        '5PP' => 'E02001178',
        '5WZ' => 'E02006902',
        '6AA' => 'E02001178',
        '6AB' => 'E02001178',
        '6AD' => 'E02001178',
        '6AE' => 'E02001178',
        '6AF' => 'E02001178',
        '6AG' => 'E02001178',
        '6AH' => 'E02001178',
        '6AJ' => 'E02001178',
        '6AL' => 'E02001178',
        '6AN' => 'E02001178',
        '6AP' => 'E02001178',
        '6AQ' => 'E02001178',
        '6AR' => 'E02001178',
        '6AS' => 'E02001178',
        '6AT' => 'E02001178',
        '6AU' => 'E02001178',
        '6AW' => 'E02001178',
        '6AX' => 'E02001178',
        '6AY' => 'E02001178',
        '6AZ' => 'E02001178',
        '6BA' => 'E02001178',
        '6BB' => 'E02001178',
        '6BD' => 'E02001178',
        '6BE' => 'E02001178',
        '6BF' => 'E02001178',
        '6BG' => 'E02001178',
        '6BH' => 'E02001178',
        '6BJ' => 'E02001178',
        '6BL' => 'E02001178',
        '6BN' => 'E02001178',
        '6BP' => 'E02001178',
        '6BQ' => 'E02001178',
        '6BR' => 'E02001178',
        '6BS' => 'E02001178',
        '6BT' => 'E02001178',
        '6BU' => 'E02001178',
        '6BW' => 'E02001178',
        '6BX' => 'E02001178',
        '6BY' => 'E02001178',
        '6BZ' => 'E02001178',
        '6DA' => 'E02001178',
        '6DB' => 'E02001178',
        '6DD' => 'E02001178',
        '6DE' => 'E02001178',
        '6DF' => 'E02001178',
        '6DG' => 'E02001178',
        '6DH' => 'E02001178',
        '6DJ' => 'E02001178',
        '6DL' => 'E02001178',
        '6DN' => 'E02001178',
        '6DP' => 'E02001178',
        '6DQ' => 'E02001178',
        '6DR' => 'E02001178',
        '6DS' => 'E02001178',
        '6DT' => 'E02001178',
        '6DU' => 'E02001178',
        '6DW' => 'E02001178',
        '6DX' => 'E02001178',
        '6DY' => 'E02001178',
        '6DZ' => 'E02001178',
        '6EA' => 'E02001178',
        '6EB' => 'E02001178',
        '6EE' => 'E02001178',
        '6EF' => 'E02001178',
        '6EG' => 'E02001178',
        '6EH' => 'E02001178',
        '6EJ' => 'E02001178',
        '6EL' => 'E02001178',
        '6EN' => 'E02001178',
        '6EP' => 'E02001178',
        '6EQ' => 'E02001178',
        '6ER' => 'E02001178',
        '6ES' => 'E02001178',
        '6ET' => 'E02001178',
        '6EU' => 'E02001178',
        '6EW' => 'E02001178',
        '6FA' => 'E02001178',
        '6FB' => 'E02001178',
        '6FD' => 'E02001178',
        '6FE' => 'E02001178',
        '6FF' => 'E02001178',
        '6FG' => 'E02001178',
        '6FH' => 'E02001178',
        '6FJ' => 'E02001178',
        '6FL' => 'E02001178',
        '6FN' => 'E02001178',
        '6FP' => 'E02001178',
        '6FQ' => 'E02001178',
        '6FR' => 'E02001178',
        '6FS' => 'E02001178',
        '6FT' => 'E02001178',
        '6FW' => 'E02001178',
        '6FY' => 'E02001178',
        '6FZ' => 'E02001178',
        '6GA' => 'E02001178',
        '6GB' => 'E02001178',
        '6GD' => 'E02001178',
        '6GE' => 'E02001178',
        '6GF' => 'E02001178',
        '6GG' => 'E02001178',
        '6GH' => 'E02001178',
        '6GP' => 'E02001178',
        '6HA' => 'E02001178',
        '6HB' => 'E02001178',
        '6HD' => 'E02001178',
        '6HE' => 'E02001178',
        '6HF' => 'E02001178',
        '6HG' => 'E02001178',
        '6HH' => 'E02001178',
        '6HJ' => 'E02001178',
        '6HL' => 'E02001178',
        '6HN' => 'E02001178',
        '6HP' => 'E02001178',
        '6HQ' => 'E02001178',
        '6HR' => 'E02001178',
        '6HS' => 'E02001178',
        '6HT' => 'E02001178',
        '6HU' => 'E02001178',
        '6HW' => 'E02001178',
        '6HX' => 'E02001178',
        '6HY' => 'E02001178',
        '6JA' => 'E02001178',
        '6JB' => 'E02001178',
        '6JD' => 'E02001178',
        '6JE' => 'E02001178',
        '6JF' => 'E02001178',
        '6JG' => 'E02001178',
        '6JH' => 'E02001178',
        '6JJ' => 'E02001178',
        '6JL' => 'E02001178',
        '6JN' => 'E02001178',
        '6JP' => 'E02001178',
        '6LA' => 'E02001178',
        '6LB' => 'E02001178',
        '6LD' => 'E02001178',
        '6LH' => 'E02001178',
        '6LJ' => 'E02001178',
        '6LL' => 'E02001178',
        '6LN' => 'E02001178',
        '6LP' => 'E02001178',
        '6LQ' => 'E02001178',
        '6LS' => 'E02001178',
        '6LT' => 'E02001178',
        '6LU' => 'E02001178',
        '6LW' => 'E02001178',
        '6LX' => 'E02001178',
        '6LY' => 'E02001178',
        '6LZ' => 'E02001178',
        '6NA' => 'E02001178',
        '6NB' => 'E02001178',
        '6ND' => 'E02001178',
        '6NH' => 'E02001178',
        '6TW' => 'E02001178',
        '6WA' => 'E02001178',
        '6WB' => 'E02001178',
        '6WD' => 'E02001178',
        '6WE' => 'E02001178',
        '6WH' => 'E02001178',
        '6WP' => 'E02001178',
        '7AA' => 'E02001178',
        '7AB' => 'E02001178',
        '7AD' => 'E02001178',
        '7AE' => 'E02001178',
        '7AF' => 'E02001178',
        '7AG' => 'E02001178',
        '7AH' => 'E02001178',
        '7AJ' => 'E02001178',
        '7AL' => 'E02001178',
        '7AN' => 'E02001178',
        '7AP' => 'E02001178',
        '7AQ' => 'E02001178',
        '7AR' => 'E02001178',
        '7AS' => 'E02001178',
        '7AT' => 'E02001178',
        '7AU' => 'E02001178',
        '7AW' => 'E02001178',
        '7AX' => 'E02001178',
        '7AY' => 'E02001178',
        '7AZ' => 'E02001178',
        '7BA' => 'E02001178',
        '7BB' => 'E02001178',
        '7BD' => 'E02001178',
        '7BE' => 'E02001178',
        '7BF' => 'E02001178',
        '7BG' => 'E02001178',
        '7BJ' => 'E02001178',
        '7BL' => 'E02001178',
        '7BN' => 'E02001178',
        '7BP' => 'E02001178',
        '7BQ' => 'E02001178',
        '7BR' => 'E02001178',
        '7BS' => 'E02001178',
        '7BT' => 'E02001178',
        '7BU' => 'E02001178',
        '7BW' => 'E02001178',
        '7BX' => 'E02001178',
        '7BY' => 'E02001178',
        '7BZ' => 'E02001178',
        '7DA' => 'E02001178',
        '7DB' => 'E02001178',
        '7DD' => 'E02001178',
        '7DE' => 'E02001178',
        '7DF' => 'E02001178',
        '7DG' => 'E02001178',
        '7DH' => 'E02001178',
        '7DJ' => 'E02001178',
        '7DL' => 'E02001178',
        '7DN' => 'E02001178',
        '7DP' => 'E02001178',
        '7DQ' => 'E02001178',
        '7DR' => 'E02001178',
        '7DS' => 'E02001178',
        '7DT' => 'E02001178',
        '7DU' => 'E02001178',
        '7DW' => 'E02001178',
        '7DX' => 'E02001178',
        '7DY' => 'E02001178',
        '7DZ' => 'E02001178',
        '7EA' => 'E02001178',
        '7EB' => 'E02001178',
        '7ED' => 'E02001178',
        '7EE' => 'E02001178',
        '7EF' => 'E02001178',
        '7EH' => 'E02001178',
        '7EJ' => 'E02001178',
        '7EL' => 'E02001178',
        '7EN' => 'E02001178',
        '7EP' => 'E02001178',
        '7EQ' => 'E02001178',
        '7ER' => 'E02001178',
        '7ES' => 'E02001178',
        '7ET' => 'E02001178',
        '7EU' => 'E02001178',
        '7EW' => 'E02001178',
        '7EY' => 'E02001178',
        '7EZ' => 'E02001178',
        '7FA' => 'E02001178',
        '7FB' => 'E02001178',
        '7FD' => 'E02001178',
        '7FE' => 'E02001178',
        '7FF' => 'E02001178',
        '7FG' => 'E02001178',
        '7FH' => 'E02001178',
        '7FJ' => 'E02001178',
        '7FL' => 'E02001178',
        '7FN' => 'E02001178',
        '7FP' => 'E02001178',
        '7FQ' => 'E02001178',
        '7FR' => 'E02001178',
        '7FS' => 'E02001178',
        '7FT' => 'E02001178',
        '7FU' => 'E02001178',
        '7FW' => 'E02001178',
        '7FX' => 'E02001178',
        '7FY' => 'E02001178',
        '7FZ' => 'E02001178',
        '7GA' => 'E02001178',
        '7GB' => 'E02001178',
        '7GE' => 'E02001178',
        '7HA' => 'E02001178',
        '7HB' => 'E02001178',
        '7HD' => 'E02001178',
        '7HH' => 'E02001178',
        '7HJ' => 'E02001178',
        '7JG' => 'E02001178',
        '7JH' => 'E02001178',
        '7JJ' => 'E02001178',
        '7JL' => 'E02001178',
        '7JN' => 'E02001178',
        '7JP' => 'E02001178',
        '7JQ' => 'E02001178',
        '7JR' => 'E02001178',
        '7JS' => 'E02001178',
        '7JT' => 'E02001178',
        '7JU' => 'E02001178',
        '7JW' => 'E02001178',
        '7JX' => 'E02001178',
        '7JY' => 'E02001178',
        '7JZ' => 'E02001178',
        '7LB' => 'E02001178',
        '7LD' => 'E02001178',
        '7LE' => 'E02001178',
        '7LF' => 'E02001178',
        '7LG' => 'E02001178',
        '7LJ' => 'E02001178',
        '7LL' => 'E02001178',
        '7LN' => 'E02001178',
        '7LP' => 'E02001178',
        '7LQ' => 'E02001178',
        '7LS' => 'E02001178',
        '7LT' => 'E02001178',
        '7LW' => 'E02001178',
        '7NA' => 'E02001178',
        '7NB' => 'E02001178',
        '7ND' => 'E02001178',
        '7NE' => 'E02001178',
        '7NG' => 'E02001178',
        '7NH' => 'E02001178',
        '7NJ' => 'E02001178',
        '7NL' => 'E02001178',
        '7NN' => 'E02001178',
        '7NP' => 'E02001178',
        '7NQ' => 'E02001178',
        '7NR' => 'E02001178',
        '7NS' => 'E02001178',
        '7NW' => 'E02001178',
        '7NX' => 'E02001178',
        '7NY' => 'E02001178',
        '7RA' => 'E02001178',
        '7RB' => 'E02001178',
        '7SW' => 'E02001178',
        '7WG' => 'E02001178',
        '7WH' => 'E02001178',
        '7WJ' => 'E02001178',
        '7WL' => 'E02001178',
        '7WN' => 'E02001178',
        '7WP' => 'E02001178',
        '7WQ' => 'E02001178',
        '7WR' => 'E02001178',
        '7WS' => 'E02001178',
        '7WW' => 'E02001178',
        '7WX' => 'E02001178',
        '9DS' => 'E02001178',
        '9EH' => 'E02001178',
        '9FG' => 'E02001178',
        '9FL' => 'E02001178',
        '9FR' => 'E02001178',
        '9FU' => 'E02001178',
        '9HS' => 'E02001178',
        '9JB' => 'E02001178',
        '9WY' => 'E02006902',
        '9WZ' => 'E02006902',
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