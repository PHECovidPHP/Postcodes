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
final class L13
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02001362',
        '0AB' => 'E02001362',
        '0AD' => 'E02001362',
        '0AE' => 'E02001367',
        '0AF' => 'E02001367',
        '0AG' => 'E02001367',
        '0AH' => 'E02001366',
        '0AJ' => 'E02001362',
        '0AL' => 'E02001362',
        '0AN' => 'E02001367',
        '0AP' => 'E02001367',
        '0AQ' => 'E02001367',
        '0AR' => 'E02001373',
        '0AS' => 'E02001373',
        '0AT' => 'E02001373',
        '0AU' => 'E02001367',
        '0AW' => 'E02001362',
        '0AX' => 'E02001362',
        '0AY' => 'E02001362',
        '0AZ' => 'E02001362',
        '0BA' => 'E02001362',
        '0BB' => 'E02001362',
        '0BD' => 'E02001366',
        '0BE' => 'E02001366',
        '0BF' => 'E02001366',
        '0BG' => 'E02001366',
        '0BH' => 'E02001366',
        '0BJ' => 'E02001366',
        '0BL' => 'E02001362',
        '0BN' => 'E02001362',
        '0BP' => 'E02001366',
        '0BQ' => 'E02001366',
        '0BR' => 'E02001362',
        '0BS' => 'E02001362',
        '0BT' => 'E02001362',
        '0BU' => 'E02001362',
        '0BW' => 'E02001366',
        '0BX' => 'E02001362',
        '0BY' => 'E02001362',
        '0BZ' => 'E02001362',
        '0DA' => 'E02001362',
        '0DB' => 'E02001362',
        '0DD' => 'E02001362',
        '0DE' => 'E02001362',
        '0DF' => 'E02001367',
        '0DH' => 'E02001384',
        '0DJ' => 'E02001366',
        '0DL' => 'E02001366',
        '0DQ' => 'E02001367',
        '0EA' => 'E02001372',
        '0ED' => 'E02001362',
        '0EF' => 'E02001384',
        '0EG' => 'E02001362',
        '0EH' => 'E02001362',
        '0EL' => 'E02001384',
        '0EQ' => 'E02001362',
        '0WA' => 'E02001384',
        '0WB' => 'E02001384',
        '0WY' => 'E02001384',
        '0WZ' => 'E02001384',
        '1AA' => 'E02001373',
        '1AB' => 'E02001373',
        '1AD' => 'E02001373',
        '1AF' => 'E02001374',
        '1AG' => 'E02001373',
        '1AH' => 'E02001374',
        '1AJ' => 'E02001378',
        '1AL' => 'E02001374',
        '1AN' => 'E02001373',
        '1AP' => 'E02001378',
        '1AQ' => 'E02001378',
        '1AR' => 'E02001373',
        '1AS' => 'E02001373',
        '1AT' => 'E02001373',
        '1AU' => 'E02001374',
        '1AW' => 'E02001374',
        '1AX' => 'E02001374',
        '1AY' => 'E02001373',
        '1AZ' => 'E02001373',
        '1BA' => 'E02001378',
        '1BB' => 'E02001378',
        '1BD' => 'E02001378',
        '1BE' => 'E02001378',
        '1BG' => 'E02001378',
        '1BJ' => 'E02001378',
        '1BL' => 'E02001378',
        '1BN' => 'E02001378',
        '1BP' => 'E02001378',
        '1BQ' => 'E02001378',
        '1BR' => 'E02001378',
        '1BS' => 'E02001378',
        '1BT' => 'E02001373',
        '1BU' => 'E02001373',
        '1BW' => 'E02001378',
        '1BY' => 'E02001373',
        '1DA' => 'E02001374',
        '1DB' => 'E02001378',
        '1DD' => 'E02001378',
        '1DE' => 'E02001378',
        '1DF' => 'E02001378',
        '1DG' => 'E02001378',
        '1DH' => 'E02001373',
        '1DJ' => 'E02001378',
        '1DL' => 'E02001378',
        '1DN' => 'E02001378',
        '1DP' => 'E02001378',
        '1DQ' => 'E02001378',
        '1DR' => 'E02001378',
        '1DS' => 'E02001378',
        '1DT' => 'E02001378',
        '1DU' => 'E02001378',
        '1DW' => 'E02001378',
        '1DX' => 'E02001374',
        '1DZ' => 'E02001374',
        '1EA' => 'E02001378',
        '1EB' => 'E02001378',
        '1ED' => 'E02001378',
        '1EE' => 'E02001373',
        '1EF' => 'E02001378',
        '1EG' => 'E02001378',
        '1EH' => 'E02001374',
        '1EJ' => 'E02001374',
        '1EL' => 'E02001378',
        '1EN' => 'E02001374',
        '1EP' => 'E02001378',
        '1EQ' => 'E02001378',
        '1ER' => 'E02001374',
        '1EW' => 'E02001378',
        '1EX' => 'E02001378',
        '1EY' => 'E02001374',
        '1EZ' => 'E02001378',
        '1FA' => 'E02001373',
        '1FB' => 'E02001381',
        '1HA' => 'E02001378',
        '1HB' => 'E02001384',
        '1HD' => 'E02001381',
        '1HE' => 'E02001381',
        '1HF' => 'E02001378',
        '1HG' => 'E02001384',
        '1HH' => 'E02001384',
        '1HJ' => 'E02001384',
        '1HL' => 'E02001378',
        '1HN' => 'E02001381',
        '1HP' => 'E02001384',
        '1HQ' => 'E02001378',
        '1HW' => 'E02001373',
        '1NW' => 'E02001384',
        '1UX' => 'E02001384',
        '1UY' => 'E02001384',
        '1UZ' => 'E02001384',
        '1WA' => 'E02001384',
        '1WB' => 'E02001384',
        '1WD' => 'E02001384',
        '1WE' => 'E02001384',
        '1WF' => 'E02001384',
        '1WG' => 'E02001384',
        '1WH' => 'E02001384',
        '1WJ' => 'E02001384',
        '1WL' => 'E02001384',
        '1WN' => 'E02001384',
        '1WP' => 'E02001384',
        '1WQ' => 'E02001384',
        '1WR' => 'E02001384',
        '1WS' => 'E02001384',
        '1WT' => 'E02001384',
        '1WU' => 'E02001384',
        '1WW' => 'E02001384',
        '1WX' => 'E02001384',
        '1WY' => 'E02001384',
        '1WZ' => 'E02001384',
        '1XA' => 'E02001384',
        '1XB' => 'E02001384',
        '1XD' => 'E02001384',
        '1YU' => 'E02001384',
        '1YW' => 'E02001384',
        '1YX' => 'E02001384',
        '1ZS' => 'E02001384',
        '1ZW' => 'E02001384',
        '2AA' => 'E02001373',
        '2AB' => 'E02001373',
        '2AD' => 'E02001373',
        '2AE' => 'E02001373',
        '2AF' => 'E02001373',
        '2AG' => 'E02001373',
        '2AH' => 'E02001373',
        '2AJ' => 'E02001373',
        '2AL' => 'E02001373',
        '2AN' => 'E02001373',
        '2AP' => 'E02001373',
        '2AQ' => 'E02001373',
        '2AR' => 'E02001373',
        '2AS' => 'E02001373',
        '2AT' => 'E02001373',
        '2AU' => 'E02001373',
        '2AW' => 'E02001373',
        '2AY' => 'E02001373',
        '2BA' => 'E02001373',
        '2BB' => 'E02001373',
        '2BD' => 'E02001373',
        '2BE' => 'E02001373',
        '2BG' => 'E02001373',
        '2BH' => 'E02001373',
        '2BJ' => 'E02001373',
        '2BL' => 'E02001373',
        '2BN' => 'E02001373',
        '2BP' => 'E02001373',
        '2BQ' => 'E02001373',
        '2BR' => 'E02001373',
        '2BS' => 'E02001373',
        '2BT' => 'E02001373',
        '2BU' => 'E02001373',
        '2BW' => 'E02001373',
        '2BX' => 'E02001373',
        '2BY' => 'E02001373',
        '2BZ' => 'E02001373',
        '2DA' => 'E02001373',
        '2DB' => 'E02001373',
        '2DD' => 'E02001373',
        '2DE' => 'E02001373',
        '2DF' => 'E02001373',
        '2DG' => 'E02001373',
        '2DH' => 'E02001373',
        '2DJ' => 'E02001373',
        '2DN' => 'E02001373',
        '2DP' => 'E02001373',
        '2DQ' => 'E02001373',
        '2DR' => 'E02001373',
        '2DS' => 'E02001373',
        '2DT' => 'E02001373',
        '2DU' => 'E02001373',
        '2DW' => 'E02001373',
        '2DX' => 'E02001373',
        '2DY' => 'E02001373',
        '2DZ' => 'E02001373',
        '2EB' => 'E02001373',
        '2ED' => 'E02001373',
        '2EE' => 'E02001373',
        '2EF' => 'E02001373',
        '2EG' => 'E02001373',
        '2EH' => 'E02001373',
        '2EJ' => 'E02001373',
        '2EL' => 'E02001373',
        '2EP' => 'E02001373',
        '2EQ' => 'E02001373',
        '2ER' => 'E02001373',
        '2ET' => 'E02001373',
        '2EW' => 'E02001373',
        '2EX' => 'E02001373',
        '2EY' => 'E02001373',
        '2EZ' => 'E02001373',
        '2GA' => 'E02001373',
        '2HB' => 'E02001373',
        '2HD' => 'E02001373',
        '2HE' => 'E02001373',
        '2HF' => 'E02001373',
        '2HG' => 'E02001373',
        '2HQ' => 'E02001373',
        '2WT' => 'E02001384',
        '2WU' => 'E02001384',
        '2WX' => 'E02001384',
        '2WY' => 'E02001384',
        '2WZ' => 'E02001373',
        '3AD' => 'E02001373',
        '3AE' => 'E02001373',
        '3AF' => 'E02001373',
        '3AL' => 'E02001373',
        '3AN' => 'E02001373',
        '3AP' => 'E02001373',
        '3AQ' => 'E02001373',
        '3AS' => 'E02001373',
        '3AT' => 'E02001373',
        '3AU' => 'E02001373',
        '3AW' => 'E02001373',
        '3AX' => 'E02001373',
        '3AY' => 'E02001373',
        '3AZ' => 'E02001373',
        '3BA' => 'E02001373',
        '3BB' => 'E02001373',
        '3BD' => 'E02001373',
        '3BE' => 'E02001373',
        '3BG' => 'E02001373',
        '3BH' => 'E02001373',
        '3BJ' => 'E02001375',
        '3BL' => 'E02001373',
        '3BN' => 'E02001373',
        '3BP' => 'E02001373',
        '3BQ' => 'E02001373',
        '3BR' => 'E02001373',
        '3BS' => 'E02001373',
        '3BT' => 'E02001373',
        '3BU' => 'E02001373',
        '3BW' => 'E02001373',
        '3BY' => 'E02001373',
        '3BZ' => 'E02001373',
        '3DA' => 'E02001373',
        '3DB' => 'E02001373',
        '3DD' => 'E02001373',
        '3DE' => 'E02001373',
        '3DF' => 'E02001373',
        '3DG' => 'E02001373',
        '3DH' => 'E02001373',
        '3DJ' => 'E02001373',
        '3DL' => 'E02001373',
        '3DN' => 'E02001373',
        '3DP' => 'E02001373',
        '3DR' => 'E02001373',
        '3DS' => 'E02001373',
        '3DT' => 'E02001373',
        '3DU' => 'E02001375',
        '3DW' => 'E02001375',
        '3DX' => 'E02001373',
        '3DY' => 'E02001373',
        '3DZ' => 'E02001375',
        '3EA' => 'E02001375',
        '3EB' => 'E02001375',
        '3ED' => 'E02001375',
        '3EE' => 'E02001375',
        '3EF' => 'E02001375',
        '3EG' => 'E02001375',
        '3EH' => 'E02001375',
        '3EL' => 'E02001375',
        '3EQ' => 'E02001375',
        '3ER' => 'E02001374',
        '3ES' => 'E02001373',
        '3EU' => 'E02001375',
        '3EW' => 'E02001373',
        '3EX' => 'E02001376',
        '3EZ' => 'E02001376',
        '3HA' => 'E02001384',
        '3HB' => 'E02001384',
        '3HE' => 'E02001373',
        '3HF' => 'E02001373',
        '3HG' => 'E02001373',
        '3HH' => 'E02001373',
        '3HJ' => 'E02001384',
        '3HL' => 'E02001384',
        '3HN' => 'E02001384',
        '3HP' => 'E02001373',
        '3HQ' => 'E02001384',
        '3HR' => 'E02001373',
        '3HS' => 'E02001373',
        '3HT' => 'E02001373',
        '3HW' => 'E02001384',
        '3WA' => 'E02001384',
        '3WT' => 'E02001384',
        '3WU' => 'E02001384',
        '3WW' => 'E02001384',
        '3WX' => 'E02001384',
        '3WY' => 'E02001384',
        '3WZ' => 'E02001384',
        '3YX' => 'E02001384',
        '4AA' => 'E02001375',
        '4AB' => 'E02001378',
        '4AD' => 'E02001378',
        '4AE' => 'E02001378',
        '4AF' => 'E02001380',
        '4AG' => 'E02001372',
        '4AH' => 'E02001378',
        '4AJ' => 'E02001378',
        '4AL' => 'E02001378',
        '4AN' => 'E02001378',
        '4AP' => 'E02001378',
        '4AQ' => 'E02001380',
        '4AR' => 'E02001378',
        '4AS' => 'E02001378',
        '4AT' => 'E02001378',
        '4AU' => 'E02001378',
        '4AW' => 'E02001378',
        '4AX' => 'E02001378',
        '4AY' => 'E02001378',
        '4AZ' => 'E02001378',
        '4BA' => 'E02001378',
        '4BB' => 'E02001378',
        '4BD' => 'E02001378',
        '4BE' => 'E02001378',
        '4BF' => 'E02001378',
        '4BG' => 'E02001380',
        '4BH' => 'E02001380',
        '4BJ' => 'E02001378',
        '4BL' => 'E02001378',
        '4BN' => 'E02001378',
        '4BP' => 'E02001378',
        '4BQ' => 'E02001380',
        '4BR' => 'E02001380',
        '4BS' => 'E02001380',
        '4BT' => 'E02001380',
        '4BU' => 'E02001380',
        '4BW' => 'E02001378',
        '4BX' => 'E02001372',
        '4BY' => 'E02001372',
        '4BZ' => 'E02001372',
        '4DA' => 'E02001378',
        '4DB' => 'E02001378',
        '4DD' => 'E02001378',
        '4DE' => 'E02001378',
        '4DF' => 'E02001378',
        '4DG' => 'E02001378',
        '4DH' => 'E02001378',
        '4DJ' => 'E02001375',
        '4DL' => 'E02001378',
        '4DN' => 'E02001375',
        '4DP' => 'E02001375',
        '4DQ' => 'E02001378',
        '4DR' => 'E02001375',
        '4DS' => 'E02001378',
        '4DU' => 'E02001378',
        '4DW' => 'E02001375',
        '4DX' => 'E02001378',
        '4DY' => 'E02001378',
        '4ED' => 'E02001380',
        '4EE' => 'E02001378',
        '4EG' => 'E02001378',
        '4EH' => 'E02001378',
        '4EJ' => 'E02001378',
        '4EN' => 'E02001378',
        '4EP' => 'E02001378',
        '4ET' => 'E02001378',
        '4EU' => 'E02001378',
        '4EW' => 'E02001378',
        '4EX' => 'E02001378',
        '4EY' => 'E02001384',
        '4EZ' => 'E02001378',
        '4HA' => 'E02001378',
        '4HB' => 'E02001384',
        '4HD' => 'E02001378',
        '4WW' => 'E02001384',
        '4WX' => 'E02001384',
        '4WY' => 'E02001384',
        '4WZ' => 'E02001384',
        '4ZS' => 'E02001384',
        '5AA' => 'E02001367',
        '5RG' => 'E02001384',
        '5RH' => 'E02001375',
        '5RJ' => 'E02001384',
        '5RL' => 'E02001378',
        '5RN' => 'E02001375',
        '5RP' => 'E02001384',
        '5RQ' => 'E02001375',
        '5RR' => 'E02001378',
        '5RS' => 'E02001375',
        '5RT' => 'E02001384',
        '5RX' => 'E02001384',
        '5RZ' => 'E02001384',
        '5SA' => 'E02001373',
        '5SB' => 'E02001373',
        '5SD' => 'E02001375',
        '5SE' => 'E02001378',
        '5SF' => 'E02001378',
        '5SG' => 'E02001373',
        '5SH' => 'E02001378',
        '5SJ' => 'E02001375',
        '5SL' => 'E02001375',
        '5SN' => 'E02001375',
        '5SP' => 'E02001375',
        '5SQ' => 'E02001373',
        '5SR' => 'E02001375',
        '5SS' => 'E02001375',
        '5ST' => 'E02001375',
        '5SU' => 'E02001375',
        '5SW' => 'E02001375',
        '5SX' => 'E02001375',
        '5SY' => 'E02001375',
        '5SZ' => 'E02001375',
        '5TA' => 'E02001375',
        '5TB' => 'E02001375',
        '5TE' => 'E02001375',
        '5TF' => 'E02001373',
        '5TG' => 'E02001378',
        '5TH' => 'E02001378',
        '5TJ' => 'E02001378',
        '5TL' => 'E02001373',
        '5TP' => 'E02001375',
        '5TQ' => 'E02001378',
        '5TR' => 'E02001375',
        '5TS' => 'E02001375',
        '5TT' => 'E02001375',
        '5TU' => 'E02001375',
        '5TX' => 'E02001375',
        '5TY' => 'E02001367',
        '5TZ' => 'E02001375',
        '5UA' => 'E02001375',
        '5UB' => 'E02001375',
        '5UD' => 'E02001375',
        '5UE' => 'E02001375',
        '5UF' => 'E02001375',
        '5UG' => 'E02001375',
        '5UH' => 'E02001375',
        '5UJ' => 'E02001375',
        '5UL' => 'E02001375',
        '5UN' => 'E02001375',
        '5UP' => 'E02001375',
        '5UQ' => 'E02001375',
        '5UR' => 'E02001373',
        '5US' => 'E02001373',
        '5UU' => 'E02001373',
        '5UW' => 'E02001375',
        '5UX' => 'E02001375',
        '5UY' => 'E02001373',
        '5WA' => 'E02001384',
        '5WB' => 'E02001384',
        '5WU' => 'E02001384',
        '5WW' => 'E02001375',
        '5WX' => 'E02001384',
        '5WY' => 'E02001375',
        '5WZ' => 'E02001384',
        '5XA' => 'E02001375',
        '5XB' => 'E02001375',
        '5XD' => 'E02001375',
        '5XE' => 'E02001375',
        '5XF' => 'E02001375',
        '5XG' => 'E02001375',
        '5XH' => 'E02001375',
        '5XJ' => 'E02001375',
        '5XL' => 'E02001375',
        '5XN' => 'E02001375',
        '5XP' => 'E02001375',
        '5XR' => 'E02001375',
        '5XS' => 'E02001375',
        '5XT' => 'E02001375',
        '5XU' => 'E02001375',
        '5XW' => 'E02001375',
        '5XX' => 'E02001375',
        '5XY' => 'E02001375',
        '5XZ' => 'E02001375',
        '5YA' => 'E02001375',
        '5YB' => 'E02001375',
        '5YD' => 'E02001375',
        '5YE' => 'E02001375',
        '5YF' => 'E02001375',
        '5YG' => 'E02001375',
        '5YH' => 'E02001378',
        '5YJ' => 'E02001373',
        '5YL' => 'E02001375',
        '5YN' => 'E02001384',
        '5YP' => 'E02001375',
        '5YQ' => 'E02001372',
        '5YR' => 'E02001375',
        '5YS' => 'E02001375',
        '5YX' => 'E02001375',
        '5YZ' => 'E02001378',
        '6AA' => 'E02001373',
        '6AB' => 'E02001373',
        '6AD' => 'E02001373',
        '6QA' => 'E02001373',
        '6QD' => 'E02001373',
        '6QE' => 'E02001373',
        '6QF' => 'E02001373',
        '6QG' => 'E02001373',
        '6QH' => 'E02001373',
        '6QJ' => 'E02001373',
        '6QL' => 'E02001373',
        '6QN' => 'E02001373',
        '6QP' => 'E02001373',
        '6QQ' => 'E02001373',
        '6QR' => 'E02001373',
        '6QS' => 'E02001373',
        '6QT' => 'E02001373',
        '6QU' => 'E02001373',
        '6QW' => 'E02001373',
        '6QX' => 'E02001373',
        '6QY' => 'E02001373',
        '6QZ' => 'E02001373',
        '6RA' => 'E02001373',
        '6RB' => 'E02001373',
        '6RD' => 'E02001373',
        '6RE' => 'E02001373',
        '6RF' => 'E02001373',
        '6RG' => 'E02001373',
        '6RH' => 'E02001373',
        '6RJ' => 'E02001373',
        '6RL' => 'E02001373',
        '6RN' => 'E02001373',
        '6RP' => 'E02001373',
        '6RQ' => 'E02001373',
        '6RR' => 'E02001373',
        '6RS' => 'E02001373',
        '6RT' => 'E02001373',
        '6RU' => 'E02001373',
        '6RW' => 'E02001373',
        '6RX' => 'E02001373',
        '6RY' => 'E02001373',
        '6RZ' => 'E02001373',
        '6SA' => 'E02001373',
        '6SB' => 'E02001373',
        '6SD' => 'E02001373',
        '6SE' => 'E02001373',
        '6SF' => 'E02001373',
        '6SG' => 'E02001373',
        '6SH' => 'E02001373',
        '6SJ' => 'E02001373',
        '6SL' => 'E02001373',
        '6SQ' => 'E02001373',
        '6SR' => 'E02001373',
        '6ST' => 'E02001373',
        '6SU' => 'E02001384',
        '6SX' => 'E02001373',
        '6SY' => 'E02001373',
        '6SZ' => 'E02001373',
        '6TA' => 'E02001373',
        '6TB' => 'E02001378',
        '6TD' => 'E02001384',
        '6WZ' => 'E02001384',
        '6YW' => 'E02001384',
        '6YX' => 'E02001384',
        '7AA' => 'E02001366',
        '7AB' => 'E02001373',
        '7BA' => 'E02001366',
        '7BB' => 'E02001373',
        '7BD' => 'E02001373',
        '7BE' => 'E02001366',
        '7BF' => 'E02001373',
        '7BG' => 'E02001366',
        '7BH' => 'E02001366',
        '7BJ' => 'E02001366',
        '7BL' => 'E02001366',
        '7BN' => 'E02001366',
        '7BP' => 'E02001366',
        '7BQ' => 'E02001366',
        '7BR' => 'E02001366',
        '7BS' => 'E02001366',
        '7BT' => 'E02001366',
        '7BU' => 'E02001366',
        '7BW' => 'E02001366',
        '7BX' => 'E02001366',
        '7BY' => 'E02001366',
        '7BZ' => 'E02001366',
        '7DA' => 'E02001366',
        '7DB' => 'E02001366',
        '7DD' => 'E02001366',
        '7DE' => 'E02001366',
        '7DF' => 'E02001366',
        '7DG' => 'E02001366',
        '7DH' => 'E02001373',
        '7DJ' => 'E02001373',
        '7DL' => 'E02001373',
        '7DN' => 'E02001373',
        '7DP' => 'E02001373',
        '7DQ' => 'E02001366',
        '7DR' => 'E02001373',
        '7DS' => 'E02001373',
        '7DT' => 'E02001366',
        '7DU' => 'E02001373',
        '7DW' => 'E02001373',
        '7DX' => 'E02001373',
        '7DY' => 'E02001366',
        '7DZ' => 'E02001373',
        '7EA' => 'E02001366',
        '7EB' => 'E02001366',
        '7ED' => 'E02001373',
        '7EE' => 'E02001366',
        '7EF' => 'E02001373',
        '7EG' => 'E02001366',
        '7EH' => 'E02001366',
        '7EJ' => 'E02001366',
        '7EL' => 'E02001366',
        '7EN' => 'E02001366',
        '7EP' => 'E02001366',
        '7EQ' => 'E02001366',
        '7ER' => 'E02001366',
        '7ES' => 'E02001366',
        '7ET' => 'E02001366',
        '7EU' => 'E02001366',
        '7EW' => 'E02001366',
        '7EX' => 'E02001366',
        '7EY' => 'E02001366',
        '7EZ' => 'E02001366',
        '7FB' => 'E02001373',
        '7FG' => 'E02001366',
        '7GA' => 'E02001366',
        '7GB' => 'E02001366',
        '7GD' => 'E02001373',
        '7HA' => 'E02001366',
        '7HB' => 'E02001366',
        '7HD' => 'E02001366',
        '7HE' => 'E02001366',
        '7HF' => 'E02001366',
        '7HG' => 'E02001366',
        '7HH' => 'E02001373',
        '7HJ' => 'E02001373',
        '7HN' => 'E02001366',
        '7HP' => 'E02001373',
        '7HQ' => 'E02001366',
        '7HS' => 'E02001373',
        '7HU' => 'E02001366',
        '7HW' => 'E02001366',
        '7HX' => 'E02001366',
        '7HY' => 'E02001373',
        '7HZ' => 'E02001366',
        '7JB' => 'E02001366',
        '7JD' => 'E02001366',
        '7JE' => 'E02001366',
        '7JF' => 'E02001366',
        '7JG' => 'E02001384',
        '7JH' => 'E02001366',
        '7JJ' => 'E02001384',
        '7JN' => 'E02001384',
        '7JQ' => 'E02001366',
        '7WU' => 'E02001384',
        '7WW' => 'E02001384',
        '7WX' => 'E02001384',
        '7WY' => 'E02001384',
        '7WZ' => 'E02001384',
        '7YW' => 'E02001384',
        '7YX' => 'E02001384',
        '8AA' => 'E02001366',
        '8AD' => 'E02001366',
        '8AE' => 'E02001366',
        '8AF' => 'E02001366',
        '8AG' => 'E02001366',
        '8AJ' => 'E02001366',
        '8AL' => 'E02001366',
        '8AN' => 'E02001366',
        '8AP' => 'E02001366',
        '8AQ' => 'E02001366',
        '8AR' => 'E02001365',
        '8AS' => 'E02001366',
        '8AT' => 'E02001366',
        '8AU' => 'E02001366',
        '8AW' => 'E02001366',
        '8AX' => 'E02001366',
        '8AY' => 'E02001366',
        '8AZ' => 'E02001366',
        '8BA' => 'E02001366',
        '8BB' => 'E02001365',
        '8BD' => 'E02001366',
        '8BE' => 'E02001366',
        '8BG' => 'E02001366',
        '8BH' => 'E02001366',
        '8BJ' => 'E02001366',
        '8BL' => 'E02001366',
        '8BN' => 'E02001366',
        '8BP' => 'E02001366',
        '8BQ' => 'E02001366',
        '8BR' => 'E02001366',
        '8BS' => 'E02001366',
        '8BT' => 'E02001366',
        '8BU' => 'E02001366',
        '8BW' => 'E02001366',
        '8BX' => 'E02001366',
        '8BY' => 'E02001366',
        '8BZ' => 'E02001366',
        '8DA' => 'E02001366',
        '8DB' => 'E02001366',
        '8DD' => 'E02001366',
        '8DE' => 'E02001366',
        '8DF' => 'E02001366',
        '8DG' => 'E02001366',
        '8DH' => 'E02001366',
        '8DJ' => 'E02001366',
        '8DL' => 'E02001366',
        '8DN' => 'E02001366',
        '8DP' => 'E02001366',
        '8DQ' => 'E02001366',
        '8DR' => 'E02001366',
        '8DS' => 'E02001366',
        '8DT' => 'E02001366',
        '8DU' => 'E02001366',
        '8DW' => 'E02001366',
        '8DX' => 'E02001366',
        '8DY' => 'E02001366',
        '8DZ' => 'E02001365',
        '8EA' => 'E02001366',
        '8EB' => 'E02001366',
        '8ED' => 'E02001366',
        '8EF' => 'E02001366',
        '8EG' => 'E02001366',
        '8EJ' => 'E02001366',
        '8EL' => 'E02001366',
        '8EN' => 'E02001366',
        '8EQ' => 'E02001366',
        '8EY' => 'E02001366',
        '8WA' => 'E02001366',
        '8WB' => 'E02001384',
        '8WD' => 'E02001384',
        '8WW' => 'E02001384',
        '8WX' => 'E02001384',
        '8WY' => 'E02001384',
        '8WZ' => 'E02001366',
        '8YX' => 'E02001384',
        '9AA' => 'E02001366',
        '9AB' => 'E02001366',
        '9AD' => 'E02001362',
        '9AE' => 'E02001366',
        '9AF' => 'E02001366',
        '9AG' => 'E02001366',
        '9AH' => 'E02001362',
        '9AJ' => 'E02001362',
        '9AL' => 'E02001362',
        '9AN' => 'E02001366',
        '9AP' => 'E02001362',
        '9AQ' => 'E02001366',
        '9AR' => 'E02001362',
        '9AS' => 'E02001362',
        '9AT' => 'E02001366',
        '9AU' => 'E02001366',
        '9AW' => 'E02001366',
        '9AX' => 'E02001366',
        '9AY' => 'E02001366',
        '9AZ' => 'E02001366',
        '9BA' => 'E02001366',
        '9BB' => 'E02001366',
        '9BD' => 'E02001366',
        '9BE' => 'E02001366',
        '9BG' => 'E02001366',
        '9BH' => 'E02001362',
        '9BJ' => 'E02001362',
        '9BL' => 'E02001366',
        '9BN' => 'E02001362',
        '9BP' => 'E02001362',
        '9BQ' => 'E02001362',
        '9BR' => 'E02001366',
        '9BS' => 'E02001362',
        '9BT' => 'E02001362',
        '9BU' => 'E02001362',
        '9BW' => 'E02001366',
        '9BX' => 'E02001366',
        '9BY' => 'E02001366',
        '9BZ' => 'E02001362',
        '9DA' => 'E02001366',
        '9DB' => 'E02001362',
        '9DD' => 'E02001366',
        '9DE' => 'E02001366',
        '9DF' => 'E02001366',
        '9DG' => 'E02001366',
        '9DH' => 'E02001366',
        '9DJ' => 'E02001366',
        '9DL' => 'E02001357',
        '9DN' => 'E02001366',
        '9DP' => 'E02001366',
        '9DQ' => 'E02001366',
        '9DR' => 'E02001362',
        '9DS' => 'E02001366',
        '9DT' => 'E02001362',
        '9DU' => 'E02001362',
        '9DW' => 'E02001357',
        '9DX' => 'E02001362',
        '9DY' => 'E02001366',
        '9DZ' => 'E02001384',
        '9WA' => 'E02001366',
        '9WY' => 'E02001384',
        '9WZ' => 'E02001384',
        '9YX' => 'E02001384',
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
