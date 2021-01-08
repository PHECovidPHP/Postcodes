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
final class EX17
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02004174',
        '1AB' => 'E02004173',
        '1AD' => 'E02004173',
        '1AE' => 'E02004173',
        '1AF' => 'E02004173',
        '1AG' => 'E02004173',
        '1AH' => 'E02004173',
        '1AJ' => 'E02004173',
        '1AL' => 'E02004173',
        '1AN' => 'E02004173',
        '1AP' => 'E02004173',
        '1AQ' => 'E02004173',
        '1AR' => 'E02004173',
        '1AS' => 'E02004173',
        '1AT' => 'E02004173',
        '1AU' => 'E02004173',
        '1AW' => 'E02004173',
        '1AX' => 'E02004173',
        '1AY' => 'E02004173',
        '1AZ' => 'E02004173',
        '1BA' => 'E02004173',
        '1BB' => 'E02004173',
        '1BD' => 'E02004173',
        '1BE' => 'E02004173',
        '1BG' => 'E02004173',
        '1BH' => 'E02004173',
        '1BJ' => 'E02004173',
        '1BL' => 'E02004173',
        '1BN' => 'E02004173',
        '1BP' => 'E02004173',
        '1BQ' => 'E02004174',
        '1BR' => 'E02004173',
        '1BS' => 'E02004173',
        '1BT' => 'E02004173',
        '1BU' => 'E02004173',
        '1BW' => 'E02004173',
        '1BX' => 'E02004174',
        '1BY' => 'E02004174',
        '1BZ' => 'E02004174',
        '1DA' => 'E02004174',
        '1DB' => 'E02004174',
        '1DD' => 'E02004174',
        '1DE' => 'E02004174',
        '1DF' => 'E02004174',
        '1DG' => 'E02004173',
        '1DH' => 'E02004173',
        '1DJ' => 'E02004173',
        '1DL' => 'E02004174',
        '1DN' => 'E02004174',
        '1DP' => 'E02004174',
        '1DQ' => 'E02004173',
        '1DR' => 'E02004174',
        '1DS' => 'E02004174',
        '1DT' => 'E02004174',
        '1DU' => 'E02004174',
        '1DW' => 'E02004174',
        '1DX' => 'E02004174',
        '1DY' => 'E02004174',
        '1DZ' => 'E02004174',
        '1EA' => 'E02004174',
        '1EB' => 'E02004174',
        '1ED' => 'E02004174',
        '1EE' => 'E02004174',
        '1EF' => 'E02004174',
        '1EG' => 'E02004174',
        '1EH' => 'E02004174',
        '1EJ' => 'E02004174',
        '1EL' => 'E02004174',
        '1EN' => 'E02004174',
        '1EP' => 'E02004174',
        '1EQ' => 'E02004174',
        '1ER' => 'E02004174',
        '1ES' => 'E02004174',
        '1ET' => 'E02004174',
        '1EU' => 'E02004174',
        '1EW' => 'E02004174',
        '1EX' => 'E02004174',
        '1EY' => 'E02004174',
        '1EZ' => 'E02004174',
        '1FA' => 'E02004174',
        '1FB' => 'E02004174',
        '1FE' => 'E02004174',
        '1GA' => 'E02004174',
        '1GB' => 'E02004174',
        '1GD' => 'E02004174',
        '1HA' => 'E02004174',
        '1HB' => 'E02004174',
        '1HD' => 'E02004174',
        '1HE' => 'E02004174',
        '1HF' => 'E02004174',
        '1HG' => 'E02004174',
        '1HH' => 'E02004174',
        '1HJ' => 'E02004174',
        '1HL' => 'E02004174',
        '1HN' => 'E02004173',
        '1HP' => 'E02004173',
        '1HQ' => 'E02004174',
        '1HR' => 'E02004174',
        '1HS' => 'E02004174',
        '1HT' => 'E02004174',
        '1HW' => 'E02004174',
        '1HX' => 'E02004174',
        '1HY' => 'E02004174',
        '1HZ' => 'E02004174',
        '1JB' => 'E02004174',
        '1JD' => 'E02004174',
        '1JE' => 'E02004174',
        '1JZ' => 'E02004174',
        '1WY' => 'E02004174',
        '1WZ' => 'E02004174',
        '1YR' => 'E02004174',
        '1YS' => 'E02004174',
        '1YT' => 'E02004173',
        '1YU' => 'E02004174',
        '1YX' => 'E02004174',
        '1YY' => 'E02004174',
        '2AA' => 'E02004174',
        '2AB' => 'E02004174',
        '2AD' => 'E02004174',
        '2AE' => 'E02004174',
        '2AF' => 'E02004174',
        '2AG' => 'E02004174',
        '2AH' => 'E02004174',
        '2AJ' => 'E02004174',
        '2AL' => 'E02004174',
        '2AN' => 'E02004174',
        '2AP' => 'E02004174',
        '2AQ' => 'E02004174',
        '2AR' => 'E02004174',
        '2AS' => 'E02004174',
        '2AT' => 'E02004174',
        '2AU' => 'E02004174',
        '2AW' => 'E02004174',
        '2AX' => 'E02004174',
        '2AY' => 'E02004174',
        '2AZ' => 'E02004174',
        '2BA' => 'E02004174',
        '2BB' => 'E02004174',
        '2BD' => 'E02004174',
        '2BE' => 'E02004174',
        '2BG' => 'E02004174',
        '2BH' => 'E02004174',
        '2BJ' => 'E02004174',
        '2BL' => 'E02004174',
        '2BN' => 'E02004174',
        '2BP' => 'E02004174',
        '2BQ' => 'E02004174',
        '2BR' => 'E02004174',
        '2BS' => 'E02004174',
        '2BT' => 'E02004174',
        '2BU' => 'E02004174',
        '2BW' => 'E02004174',
        '2BX' => 'E02004174',
        '2BY' => 'E02004174',
        '2BZ' => 'E02004174',
        '2DA' => 'E02004174',
        '2DB' => 'E02004174',
        '2DD' => 'E02004174',
        '2DE' => 'E02004174',
        '2DF' => 'E02004174',
        '2DG' => 'E02004174',
        '2DH' => 'E02004174',
        '2DJ' => 'E02004174',
        '2DL' => 'E02004174',
        '2DN' => 'E02004174',
        '2DP' => 'E02004174',
        '2DQ' => 'E02004174',
        '2DR' => 'E02004174',
        '2DS' => 'E02004174',
        '2DT' => 'E02004174',
        '2DU' => 'E02004174',
        '2DW' => 'E02004174',
        '2DX' => 'E02004174',
        '2DY' => 'E02004174',
        '2DZ' => 'E02004174',
        '2EA' => 'E02004174',
        '2EB' => 'E02004174',
        '2ED' => 'E02004174',
        '2EE' => 'E02004174',
        '2EF' => 'E02004174',
        '2EG' => 'E02004174',
        '2EH' => 'E02004174',
        '2EJ' => 'E02004174',
        '2EL' => 'E02004174',
        '2EN' => 'E02004174',
        '2EP' => 'E02004173',
        '2EQ' => 'E02004174',
        '2ER' => 'E02004173',
        '2ES' => 'E02004174',
        '2ET' => 'E02004174',
        '2EU' => 'E02004174',
        '2EW' => 'E02004173',
        '2EX' => 'E02004174',
        '2EY' => 'E02004174',
        '2EZ' => 'E02004174',
        '2FA' => 'E02004174',
        '2FB' => 'E02004174',
        '2FU' => 'E02004174',
        '2HA' => 'E02004174',
        '2HB' => 'E02004174',
        '2JZ' => 'E02004174',
        '2WA' => 'E02004174',
        '2WB' => 'E02004174',
        '2WZ' => 'E02004174',
        '2YJ' => 'E02004174',
        '2YU' => 'E02004174',
        '2YX' => 'E02004174',
        '2YY' => 'E02004174',
        '3AA' => 'E02004174',
        '3AB' => 'E02004174',
        '3AD' => 'E02004174',
        '3AE' => 'E02004174',
        '3AF' => 'E02004174',
        '3AG' => 'E02004174',
        '3AH' => 'E02004174',
        '3AJ' => 'E02004174',
        '3AL' => 'E02004174',
        '3AN' => 'E02004174',
        '3AP' => 'E02004174',
        '3AQ' => 'E02004174',
        '3AR' => 'E02004174',
        '3AS' => 'E02004174',
        '3AT' => 'E02004174',
        '3AU' => 'E02004174',
        '3AW' => 'E02004174',
        '3AX' => 'E02004174',
        '3AY' => 'E02004174',
        '3AZ' => 'E02004174',
        '3BA' => 'E02004174',
        '3BB' => 'E02004174',
        '3BD' => 'E02004174',
        '3BE' => 'E02004174',
        '3BG' => 'E02004174',
        '3BH' => 'E02004174',
        '3BJ' => 'E02004174',
        '3BL' => 'E02004174',
        '3BN' => 'E02004174',
        '3BP' => 'E02004174',
        '3BQ' => 'E02004174',
        '3BR' => 'E02004174',
        '3BS' => 'E02004174',
        '3BT' => 'E02004174',
        '3BU' => 'E02004174',
        '3BW' => 'E02004174',
        '3BX' => 'E02004174',
        '3BY' => 'E02004174',
        '3BZ' => 'E02004174',
        '3DA' => 'E02004174',
        '3DB' => 'E02004174',
        '3DD' => 'E02004174',
        '3DE' => 'E02004174',
        '3DF' => 'E02004174',
        '3DG' => 'E02004174',
        '3DH' => 'E02004174',
        '3DJ' => 'E02004174',
        '3DL' => 'E02004174',
        '3DN' => 'E02004174',
        '3DP' => 'E02004174',
        '3DQ' => 'E02004174',
        '3DR' => 'E02004174',
        '3DS' => 'E02004174',
        '3DT' => 'E02004174',
        '3DU' => 'E02004174',
        '3DW' => 'E02004174',
        '3DX' => 'E02004174',
        '3DY' => 'E02004174',
        '3DZ' => 'E02004174',
        '3EA' => 'E02004174',
        '3EB' => 'E02004174',
        '3ED' => 'E02004174',
        '3EE' => 'E02004174',
        '3EF' => 'E02004174',
        '3EG' => 'E02004174',
        '3EH' => 'E02004174',
        '3EJ' => 'E02004174',
        '3EL' => 'E02004174',
        '3EN' => 'E02004174',
        '3EP' => 'E02004174',
        '3EQ' => 'E02004174',
        '3ER' => 'E02004174',
        '3ES' => 'E02004174',
        '3ET' => 'E02004174',
        '3EU' => 'E02004174',
        '3EW' => 'E02004174',
        '3EX' => 'E02004174',
        '3EY' => 'E02004174',
        '3EZ' => 'E02004174',
        '3FA' => 'E02004174',
        '3FB' => 'E02004174',
        '3FD' => 'E02004174',
        '3FE' => 'E02004174',
        '3FF' => 'E02004174',
        '3FG' => 'E02004174',
        '3FH' => 'E02004174',
        '3FL' => 'E02004174',
        '3FN' => 'E02004174',
        '3FP' => 'E02004174',
        '3FQ' => 'E02004174',
        '3FS' => 'E02004173',
        '3HA' => 'E02004174',
        '3HB' => 'E02004174',
        '3HD' => 'E02004174',
        '3HE' => 'E02004174',
        '3HF' => 'E02004174',
        '3HG' => 'E02004174',
        '3HH' => 'E02004174',
        '3HJ' => 'E02004174',
        '3HL' => 'E02004174',
        '3HN' => 'E02004174',
        '3HP' => 'E02004174',
        '3HQ' => 'E02004174',
        '3HR' => 'E02004174',
        '3HS' => 'E02004174',
        '3HT' => 'E02004174',
        '3HU' => 'E02004174',
        '3HW' => 'E02004174',
        '3HX' => 'E02004174',
        '3HY' => 'E02004174',
        '3HZ' => 'E02004174',
        '3JA' => 'E02004174',
        '3JB' => 'E02004174',
        '3JD' => 'E02004174',
        '3JE' => 'E02004173',
        '3JF' => 'E02004174',
        '3JH' => 'E02004174',
        '3JJ' => 'E02004174',
        '3JL' => 'E02004174',
        '3JN' => 'E02004174',
        '3JP' => 'E02004174',
        '3JQ' => 'E02004173',
        '3JR' => 'E02004174',
        '3JS' => 'E02004174',
        '3JT' => 'E02004174',
        '3JU' => 'E02004174',
        '3JW' => 'E02004174',
        '3JX' => 'E02004174',
        '3JY' => 'E02004174',
        '3JZ' => 'E02004174',
        '3LA' => 'E02004174',
        '3LB' => 'E02004174',
        '3LD' => 'E02004174',
        '3LE' => 'E02004174',
        '3LF' => 'E02004174',
        '3LG' => 'E02004174',
        '3LH' => 'E02004174',
        '3LJ' => 'E02004174',
        '3LL' => 'E02004174',
        '3LN' => 'E02004174',
        '3LP' => 'E02004174',
        '3LQ' => 'E02004174',
        '3LR' => 'E02004174',
        '3LS' => 'E02004174',
        '3LT' => 'E02004174',
        '3LU' => 'E02004174',
        '3LW' => 'E02004174',
        '3LX' => 'E02004174',
        '3LY' => 'E02004174',
        '3LZ' => 'E02004174',
        '3NA' => 'E02004174',
        '3NB' => 'E02004174',
        '3ND' => 'E02004174',
        '3NE' => 'E02004174',
        '3NF' => 'E02004174',
        '3NG' => 'E02004174',
        '3NH' => 'E02004174',
        '3NJ' => 'E02004174',
        '3NL' => 'E02004174',
        '3NN' => 'E02004174',
        '3NP' => 'E02004174',
        '3NQ' => 'E02004174',
        '3NR' => 'E02004174',
        '3NS' => 'E02004174',
        '3NT' => 'E02004174',
        '3NU' => 'E02004174',
        '3NW' => 'E02004174',
        '3NX' => 'E02004174',
        '3NY' => 'E02004174',
        '3NZ' => 'E02004174',
        '3PA' => 'E02004173',
        '3PB' => 'E02004174',
        '3PD' => 'E02004173',
        '3PE' => 'E02004173',
        '3PF' => 'E02004173',
        '3PG' => 'E02004173',
        '3PH' => 'E02004174',
        '3PJ' => 'E02004174',
        '3PL' => 'E02004173',
        '3PN' => 'E02004174',
        '3PP' => 'E02004174',
        '3PQ' => 'E02004174',
        '3PR' => 'E02004174',
        '3PS' => 'E02004173',
        '3PT' => 'E02004173',
        '3PU' => 'E02004173',
        '3PW' => 'E02004173',
        '3PX' => 'E02004173',
        '3PY' => 'E02004173',
        '3PZ' => 'E02004173',
        '3QA' => 'E02004173',
        '3QB' => 'E02004173',
        '3QD' => 'E02004173',
        '3QE' => 'E02004173',
        '3QF' => 'E02004173',
        '3QG' => 'E02004173',
        '3QH' => 'E02004173',
        '3QJ' => 'E02004173',
        '3QL' => 'E02004173',
        '3QN' => 'E02004174',
        '3QP' => 'E02004173',
        '3QQ' => 'E02004173',
        '3QR' => 'E02004174',
        '3QS' => 'E02004174',
        '3QT' => 'E02004174',
        '3QU' => 'E02004173',
        '3QW' => 'E02004174',
        '3RB' => 'E02004174',
        '3RD' => 'E02004174',
        '3RS' => 'E02004174',
        '3SZ' => 'E02004173',
        '3WY' => 'E02004174',
        '3WZ' => 'E02004174',
        '3XJ' => 'E02004174',
        '3XN' => 'E02004173',
        '3XW' => 'E02004174',
        '3XZ' => 'E02004174',
        '3YH' => 'E02004174',
        '3YJ' => 'E02004174',
        '3YL' => 'E02004174',
        '3YN' => 'E02004174',
        '3YP' => 'E02004174',
        '3YQ' => 'E02004174',
        '3YR' => 'E02004174',
        '3YS' => 'E02004174',
        '3YT' => 'E02004174',
        '3YW' => 'E02004174',
        '3YX' => 'E02004174',
        '3YZ' => 'E02004174',
        '3ZQ' => 'E02004174',
        '3ZX' => 'E02004174',
        '4AA' => 'E02004173',
        '4AB' => 'E02004173',
        '4AD' => 'E02004173',
        '4AE' => 'E02004173',
        '4AF' => 'E02004173',
        '4AG' => 'E02004173',
        '4AH' => 'E02004173',
        '4AJ' => 'E02004173',
        '4AL' => 'E02004164',
        '4AN' => 'E02004164',
        '4AP' => 'E02004173',
        '4AQ' => 'E02004164',
        '4AR' => 'E02004173',
        '4AS' => 'E02004173',
        '4AT' => 'E02004173',
        '4AU' => 'E02004173',
        '4AW' => 'E02004171',
        '4AX' => 'E02004173',
        '4AY' => 'E02004173',
        '4AZ' => 'E02004173',
        '4BA' => 'E02004164',
        '4BB' => 'E02004164',
        '4BD' => 'E02004164',
        '4BE' => 'E02004173',
        '4BG' => 'E02004164',
        '4BH' => 'E02004173',
        '4BJ' => 'E02004173',
        '4BL' => 'E02004164',
        '4BQ' => 'E02004164',
        '4BR' => 'E02004173',
        '4BS' => 'E02004173',
        '4BT' => 'E02004173',
        '4BU' => 'E02004173',
        '4BX' => 'E02004173',
        '4BY' => 'E02004173',
        '4BZ' => 'E02004173',
        '4DA' => 'E02004173',
        '4DB' => 'E02004173',
        '4DD' => 'E02004173',
        '4DE' => 'E02004173',
        '4DF' => 'E02004164',
        '4DG' => 'E02004164',
        '4DH' => 'E02004164',
        '4DJ' => 'E02004164',
        '4DL' => 'E02004173',
        '4DN' => 'E02004173',
        '4DP' => 'E02004173',
        '4DQ' => 'E02004164',
        '4DW' => 'E02004173',
        '4EA' => 'E02004173',
        '4EB' => 'E02004173',
        '4ED' => 'E02004173',
        '4EE' => 'E02004173',
        '4EF' => 'E02004173',
        '4EG' => 'E02004173',
        '4EH' => 'E02004173',
        '4EJ' => 'E02004173',
        '4EL' => 'E02004173',
        '4EN' => 'E02004173',
        '4EP' => 'E02004173',
        '4EQ' => 'E02004173',
        '4ER' => 'E02004173',
        '4ES' => 'E02004173',
        '4ET' => 'E02004173',
        '4EW' => 'E02004173',
        '4HA' => 'E02004164',
        '4HB' => 'E02004164',
        '4HD' => 'E02004164',
        '4HE' => 'E02004164',
        '4HF' => 'E02004164',
        '4HG' => 'E02004164',
        '4HH' => 'E02004164',
        '4HJ' => 'E02004164',
        '4HL' => 'E02004164',
        '4HN' => 'E02004164',
        '4HP' => 'E02004164',
        '4HQ' => 'E02004164',
        '4HR' => 'E02004164',
        '4HT' => 'E02004164',
        '4HU' => 'E02004164',
        '4HW' => 'E02004164',
        '4HX' => 'E02004164',
        '4HY' => 'E02004164',
        '4HZ' => 'E02004164',
        '4JA' => 'E02004164',
        '4JB' => 'E02004164',
        '4JD' => 'E02004164',
        '4JE' => 'E02004164',
        '4JF' => 'E02004164',
        '4JG' => 'E02004164',
        '4JH' => 'E02004164',
        '4JJ' => 'E02004164',
        '4JL' => 'E02004164',
        '4JN' => 'E02004164',
        '4JP' => 'E02004164',
        '4JQ' => 'E02004164',
        '4JR' => 'E02004164',
        '4JS' => 'E02004164',
        '4JT' => 'E02004164',
        '4JU' => 'E02004164',
        '4JW' => 'E02004164',
        '4JX' => 'E02004164',
        '4JY' => 'E02004164',
        '4JZ' => 'E02004164',
        '4LA' => 'E02004164',
        '4LB' => 'E02004164',
        '4LD' => 'E02004164',
        '4LE' => 'E02004164',
        '4LF' => 'E02004164',
        '4LG' => 'E02004164',
        '4LH' => 'E02004173',
        '4LJ' => 'E02004164',
        '4LL' => 'E02004173',
        '4LN' => 'E02004173',
        '4LP' => 'E02004173',
        '4LQ' => 'E02004173',
        '4LR' => 'E02004173',
        '4LS' => 'E02004173',
        '4LT' => 'E02004173',
        '4LU' => 'E02004173',
        '4LW' => 'E02004173',
        '4LX' => 'E02004173',
        '4LY' => 'E02004173',
        '4LZ' => 'E02004173',
        '4NA' => 'E02004173',
        '4NB' => 'E02004173',
        '4ND' => 'E02004173',
        '4NE' => 'E02004173',
        '4NF' => 'E02004173',
        '4NG' => 'E02004173',
        '4NH' => 'E02004173',
        '4NJ' => 'E02004173',
        '4NL' => 'E02004173',
        '4NN' => 'E02004173',
        '4NP' => 'E02004173',
        '4NQ' => 'E02004173',
        '4NR' => 'E02004173',
        '4NS' => 'E02004173',
        '4NW' => 'E02004173',
        '4PA' => 'E02004173',
        '4PB' => 'E02004173',
        '4PD' => 'E02004173',
        '4PE' => 'E02004173',
        '4PF' => 'E02004173',
        '4PG' => 'E02004173',
        '4PH' => 'E02004173',
        '4PJ' => 'E02004173',
        '4PL' => 'E02004173',
        '4PN' => 'E02004173',
        '4PP' => 'E02004173',
        '4PQ' => 'E02004173',
        '4PR' => 'E02004173',
        '4PS' => 'E02004173',
        '4PT' => 'E02004173',
        '4PU' => 'E02004173',
        '4PW' => 'E02004173',
        '4PZ' => 'E02004173',
        '4QA' => 'E02004173',
        '4QB' => 'E02004173',
        '4QD' => 'E02004173',
        '4QE' => 'E02004173',
        '4QF' => 'E02004173',
        '4QG' => 'E02004173',
        '4QH' => 'E02004173',
        '4QJ' => 'E02004173',
        '4QL' => 'E02004173',
        '4QQ' => 'E02004173',
        '4QR' => 'E02004173',
        '4QS' => 'E02004173',
        '4QT' => 'E02004173',
        '4QU' => 'E02004173',
        '4QX' => 'E02004173',
        '4QY' => 'E02004173',
        '4QZ' => 'E02004173',
        '4RA' => 'E02004173',
        '4RH' => 'E02004173',
        '4RJ' => 'E02004173',
        '4RL' => 'E02004173',
        '4RN' => 'E02004173',
        '4RP' => 'E02004173',
        '4RQ' => 'E02004173',
        '4RR' => 'E02004173',
        '4RS' => 'E02004173',
        '4RT' => 'E02004173',
        '4RU' => 'E02004173',
        '4RW' => 'E02004173',
        '4RX' => 'E02004173',
        '4RY' => 'E02004173',
        '4RZ' => 'E02004173',
        '4SA' => 'E02004173',
        '4SH' => 'E02004173',
        '4SJ' => 'E02004173',
        '4SL' => 'E02004188',
        '4SN' => 'E02004188',
        '4SP' => 'E02004188',
        '4SQ' => 'E02004173',
        '4SR' => 'E02004188',
        '4SS' => 'E02004188',
        '4ST' => 'E02004188',
        '4SU' => 'E02004188',
        '4SW' => 'E02004188',
        '4SX' => 'E02004188',
        '4SY' => 'E02004188',
        '4SZ' => 'E02004188',
        '4TG' => 'E02004188',
        '4TH' => 'E02004188',
        '4TJ' => 'E02004188',
        '4TL' => 'E02004188',
        '4TN' => 'E02004173',
        '4TQ' => 'E02004188',
        '4TS' => 'E02004188',
        '4TT' => 'E02004188',
        '4TU' => 'E02004188',
        '4TX' => 'E02004172',
        '4TY' => 'E02004172',
        '4TZ' => 'E02004188',
        '4UA' => 'E02004188',
        '4UD' => 'E02004188',
        '4UE' => 'E02004174',
        '4WA' => 'E02004174',
        '4WF' => 'E02004174',
        '4WU' => 'E02004174',
        '4WW' => 'E02004174',
        '4WX' => 'E02004174',
        '4WY' => 'E02004174',
        '4WZ' => 'E02004174',
        '4XN' => 'E02004174',
        '4YN' => 'E02004173',
        '4YP' => 'E02004174',
        '4YQ' => 'E02004174',
        '4YR' => 'E02004174',
        '4YS' => 'E02004173',
        '4YT' => 'E02004174',
        '4YU' => 'E02004173',
        '4YW' => 'E02004173',
        '4YX' => 'E02004173',
        '4YY' => 'E02004173',
        '4ZN' => 'E02004174',
        '4ZQ' => 'E02004174',
        '5AA' => 'E02004172',
        '5AB' => 'E02004231',
        '5AD' => 'E02004172',
        '5AE' => 'E02004231',
        '5AF' => 'E02004231',
        '5AG' => 'E02004231',
        '5AH' => 'E02004231',
        '5AJ' => 'E02004231',
        '5AL' => 'E02004231',
        '5AN' => 'E02004231',
        '5AP' => 'E02004231',
        '5AQ' => 'E02004231',
        '5AR' => 'E02004231',
        '5AS' => 'E02004172',
        '5AT' => 'E02004172',
        '5AU' => 'E02004231',
        '5AW' => 'E02004231',
        '5AX' => 'E02004231',
        '5AY' => 'E02004231',
        '5AZ' => 'E02004231',
        '5BA' => 'E02004231',
        '5BB' => 'E02004231',
        '5BD' => 'E02004231',
        '5BE' => 'E02004172',
        '5BG' => 'E02004174',
        '5BH' => 'E02004231',
        '5BJ' => 'E02004173',
        '5BL' => 'E02004172',
        '5BN' => 'E02004173',
        '5BP' => 'E02004172',
        '5BQ' => 'E02004231',
        '5BR' => 'E02004173',
        '5BS' => 'E02004173',
        '5BT' => 'E02004173',
        '5BU' => 'E02004173',
        '5BW' => 'E02004173',
        '5BX' => 'E02004173',
        '5BY' => 'E02004172',
        '5BZ' => 'E02004172',
        '5DA' => 'E02004172',
        '5DB' => 'E02004172',
        '5DD' => 'E02004172',
        '5DE' => 'E02004172',
        '5DF' => 'E02004172',
        '5DG' => 'E02004172',
        '5DH' => 'E02004172',
        '5DJ' => 'E02004172',
        '5DL' => 'E02004172',
        '5DN' => 'E02004172',
        '5DP' => 'E02004231',
        '5DQ' => 'E02004172',
        '5DR' => 'E02004231',
        '5DS' => 'E02004231',
        '5DT' => 'E02004173',
        '5DU' => 'E02004231',
        '5DW' => 'E02004173',
        '5DX' => 'E02004231',
        '5DY' => 'E02004231',
        '5DZ' => 'E02004231',
        '5EA' => 'E02004231',
        '5EB' => 'E02004231',
        '5ED' => 'E02004231',
        '5EE' => 'E02004231',
        '5EF' => 'E02004231',
        '5EG' => 'E02004231',
        '5EJ' => 'E02004173',
        '5EL' => 'E02004173',
        '5EN' => 'E02004173',
        '5EP' => 'E02004173',
        '5EQ' => 'E02004173',
        '5ER' => 'E02004173',
        '5ES' => 'E02004173',
        '5ET' => 'E02004173',
        '5EU' => 'E02004172',
        '5EW' => 'E02004173',
        '5EX' => 'E02004172',
        '5EY' => 'E02004172',
        '5EZ' => 'E02004172',
        '5FB' => 'E02004173',
        '5HA' => 'E02004172',
        '5HB' => 'E02004172',
        '5HD' => 'E02004172',
        '5HE' => 'E02004173',
        '5HF' => 'E02004172',
        '5HG' => 'E02004172',
        '5HH' => 'E02004173',
        '5HJ' => 'E02004173',
        '5HL' => 'E02004173',
        '5HN' => 'E02004173',
        '5HP' => 'E02004173',
        '5HQ' => 'E02004173',
        '5HR' => 'E02004173',
        '5HS' => 'E02004173',
        '5HU' => 'E02004172',
        '5HX' => 'E02004172',
        '5HY' => 'E02004172',
        '5HZ' => 'E02004172',
        '5JA' => 'E02004172',
        '5JB' => 'E02004173',
        '5JD' => 'E02004173',
        '5JE' => 'E02004173',
        '5JF' => 'E02004173',
        '5JG' => 'E02004172',
        '5JH' => 'E02004172',
        '5JJ' => 'E02004172',
        '5JL' => 'E02004172',
        '5JN' => 'E02004172',
        '5JP' => 'E02004172',
        '5JQ' => 'E02004172',
        '5JR' => 'E02004172',
        '5JS' => 'E02004172',
        '5JT' => 'E02004173',
        '5JU' => 'E02004172',
        '5JW' => 'E02004172',
        '5LA' => 'E02004173',
        '5LB' => 'E02004173',
        '5LD' => 'E02004173',
        '5LE' => 'E02004172',
        '5LF' => 'E02004172',
        '5LG' => 'E02004172',
        '5LH' => 'E02004172',
        '5LJ' => 'E02004172',
        '5LL' => 'E02004172',
        '5LN' => 'E02004172',
        '5LP' => 'E02004172',
        '5LQ' => 'E02004173',
        '5LR' => 'E02004172',
        '5LS' => 'E02004172',
        '5LT' => 'E02004173',
        '5LU' => 'E02004173',
        '5LW' => 'E02004172',
        '5LX' => 'E02004173',
        '5LY' => 'E02004173',
        '5LZ' => 'E02004173',
        '5NA' => 'E02004173',
        '5NB' => 'E02004173',
        '5ND' => 'E02004173',
        '5NE' => 'E02004173',
        '5NF' => 'E02004173',
        '5NG' => 'E02004173',
        '5NH' => 'E02004173',
        '5NJ' => 'E02004173',
        '5NL' => 'E02004173',
        '5NN' => 'E02004173',
        '5NP' => 'E02004173',
        '5NQ' => 'E02004173',
        '5NR' => 'E02004173',
        '5NS' => 'E02004173',
        '5NT' => 'E02004173',
        '5NU' => 'E02004173',
        '5NW' => 'E02004173',
        '5NX' => 'E02004173',
        '5NY' => 'E02004173',
        '5NZ' => 'E02004173',
        '5PA' => 'E02004173',
        '5PB' => 'E02004173',
        '5PD' => 'E02004173',
        '5PE' => 'E02004173',
        '5PF' => 'E02004173',
        '5PH' => 'E02004173',
        '5PL' => 'E02004172',
        '5PN' => 'E02004173',
        '5PP' => 'E02004172',
        '5PR' => 'E02004172',
        '5PS' => 'E02004172',
        '5PW' => 'E02004173',
        '5PY' => 'E02004173',
        '5WA' => 'E02004174',
        '5WX' => 'E02004174',
        '5WY' => 'E02004174',
        '5WZ' => 'E02004174',
        '5XN' => 'E02004173',
        '5YA' => 'E02004172',
        '5YB' => 'E02004174',
        '5YL' => 'E02004174',
        '5YN' => 'E02004174',
        '5YP' => 'E02004172',
        '5YR' => 'E02004172',
        '5YS' => 'E02004174',
        '5YT' => 'E02004172',
        '5YU' => 'E02004172',
        '5YW' => 'E02004172',
        '5ZN' => 'E02004174',
        '5ZQ' => 'E02004174',
        '6AA' => 'E02004173',
        '6AB' => 'E02004172',
        '6AD' => 'E02004172',
        '6AE' => 'E02004172',
        '6AF' => 'E02004172',
        '6AG' => 'E02004172',
        '6AH' => 'E02004172',
        '6AJ' => 'E02004172',
        '6AL' => 'E02004172',
        '6AN' => 'E02004172',
        '6AP' => 'E02004172',
        '6AQ' => 'E02004172',
        '6AR' => 'E02004172',
        '6AS' => 'E02004172',
        '6AT' => 'E02004172',
        '6AU' => 'E02004172',
        '6AW' => 'E02004172',
        '6AX' => 'E02004172',
        '6AY' => 'E02004172',
        '6AZ' => 'E02004172',
        '6BA' => 'E02004172',
        '6BB' => 'E02004172',
        '6BD' => 'E02004172',
        '6BE' => 'E02004172',
        '6BG' => 'E02004172',
        '6BH' => 'E02004172',
        '6BJ' => 'E02004172',
        '6BL' => 'E02004172',
        '6BN' => 'E02004172',
        '6BP' => 'E02004172',
        '6BQ' => 'E02004172',
        '6BR' => 'E02004172',
        '6BS' => 'E02004172',
        '6BT' => 'E02004172',
        '6BU' => 'E02004172',
        '6BW' => 'E02004172',
        '6BX' => 'E02004172',
        '6BY' => 'E02004172',
        '6BZ' => 'E02004172',
        '6DA' => 'E02004172',
        '6DB' => 'E02004172',
        '6DD' => 'E02004172',
        '6DE' => 'E02004172',
        '6DF' => 'E02004172',
        '6DG' => 'E02004172',
        '6DH' => 'E02004172',
        '6DJ' => 'E02004172',
        '6DL' => 'E02004172',
        '6DN' => 'E02004172',
        '6DP' => 'E02004172',
        '6DQ' => 'E02004172',
        '6DR' => 'E02004172',
        '6DS' => 'E02004172',
        '6DT' => 'E02004172',
        '6DU' => 'E02004172',
        '6DW' => 'E02004172',
        '6DX' => 'E02004172',
        '6DY' => 'E02004172',
        '6DZ' => 'E02004172',
        '6EA' => 'E02004172',
        '6EB' => 'E02004172',
        '6ED' => 'E02004172',
        '6EE' => 'E02004172',
        '6EF' => 'E02004172',
        '6EG' => 'E02004172',
        '6EH' => 'E02004172',
        '6EJ' => 'E02004172',
        '6EL' => 'E02004172',
        '6EN' => 'E02004172',
        '6EP' => 'E02004172',
        '6EQ' => 'E02004172',
        '6ER' => 'E02004172',
        '6ES' => 'E02004172',
        '6ET' => 'E02004172',
        '6EU' => 'E02004172',
        '6EW' => 'E02004172',
        '6EX' => 'E02004172',
        '6EY' => 'E02004172',
        '6EZ' => 'E02004172',
        '6FA' => 'E02004172',
        '6FB' => 'E02004172',
        '6FD' => 'E02004172',
        '6FE' => 'E02004172',
        '6FF' => 'E02004172',
        '6FG' => 'E02004172',
        '6FH' => 'E02004172',
        '6FJ' => 'E02004172',
        '6FL' => 'E02004173',
        '6FN' => 'E02004172',
        '6GA' => 'E02004172',
        '6HA' => 'E02004172',
        '6HB' => 'E02004172',
        '6HD' => 'E02004172',
        '6HE' => 'E02004172',
        '6HF' => 'E02004172',
        '6HG' => 'E02004172',
        '6HH' => 'E02004172',
        '6HJ' => 'E02004172',
        '6HL' => 'E02004172',
        '6HN' => 'E02004172',
        '6HP' => 'E02004172',
        '6HQ' => 'E02004172',
        '6HR' => 'E02004172',
        '6HS' => 'E02004172',
        '6HT' => 'E02004172',
        '6HU' => 'E02004172',
        '6HW' => 'E02004172',
        '6HX' => 'E02004172',
        '6HY' => 'E02004172',
        '6HZ' => 'E02004172',
        '6JA' => 'E02004172',
        '6JB' => 'E02004172',
        '6JD' => 'E02004172',
        '6JE' => 'E02004172',
        '6JF' => 'E02004172',
        '6JG' => 'E02004172',
        '6JH' => 'E02004172',
        '6JP' => 'E02004172',
        '6JR' => 'E02004172',
        '6JS' => 'E02004172',
        '6JT' => 'E02004172',
        '6JU' => 'E02004172',
        '6JW' => 'E02004172',
        '6JX' => 'E02004172',
        '6JY' => 'E02004172',
        '6JZ' => 'E02004172',
        '6LA' => 'E02004172',
        '6LB' => 'E02004172',
        '6LD' => 'E02004172',
        '6LE' => 'E02004172',
        '6LF' => 'E02004229',
        '6LG' => 'E02004172',
        '6LH' => 'E02004172',
        '6LJ' => 'E02004172',
        '6LL' => 'E02004172',
        '6LN' => 'E02004229',
        '6LP' => 'E02004172',
        '6LQ' => 'E02004172',
        '6LR' => 'E02004172',
        '6LS' => 'E02004172',
        '6LT' => 'E02004172',
        '6LU' => 'E02004172',
        '6LW' => 'E02004172',
        '6LX' => 'E02004172',
        '6LY' => 'E02004172',
        '6LZ' => 'E02004172',
        '6NA' => 'E02004172',
        '6NB' => 'E02004172',
        '6ND' => 'E02004172',
        '6NE' => 'E02004172',
        '6NF' => 'E02004173',
        '6NG' => 'E02004173',
        '6NH' => 'E02004173',
        '6NP' => 'E02004173',
        '6NR' => 'E02004173',
        '6NS' => 'E02004173',
        '6NT' => 'E02004173',
        '6NU' => 'E02004173',
        '6NW' => 'E02004173',
        '6NX' => 'E02004173',
        '6NY' => 'E02004173',
        '6NZ' => 'E02004173',
        '6PA' => 'E02004173',
        '6PB' => 'E02004173',
        '6PD' => 'E02004173',
        '6PE' => 'E02004173',
        '6PF' => 'E02004173',
        '6PG' => 'E02004173',
        '6PH' => 'E02004173',
        '6PJ' => 'E02004173',
        '6PL' => 'E02004173',
        '6PN' => 'E02004173',
        '6PP' => 'E02004172',
        '6PQ' => 'E02004173',
        '6PR' => 'E02004172',
        '6PS' => 'E02004172',
        '6PT' => 'E02004172',
        '6PU' => 'E02004172',
        '6PW' => 'E02004172',
        '6PX' => 'E02004172',
        '6PY' => 'E02004172',
        '6PZ' => 'E02004172',
        '6QA' => 'E02004172',
        '6QB' => 'E02004172',
        '6QD' => 'E02004172',
        '6QE' => 'E02004172',
        '6QF' => 'E02004172',
        '6QG' => 'E02004172',
        '6QH' => 'E02004172',
        '6QJ' => 'E02004172',
        '6QL' => 'E02004172',
        '6QN' => 'E02004172',
        '6QP' => 'E02004172',
        '6QQ' => 'E02004172',
        '6QR' => 'E02004172',
        '6QS' => 'E02004172',
        '6QT' => 'E02004172',
        '6QU' => 'E02004172',
        '6QW' => 'E02004172',
        '6QX' => 'E02004172',
        '6QY' => 'E02004172',
        '6QZ' => 'E02004172',
        '6RA' => 'E02004173',
        '6RE' => 'E02004173',
        '6RF' => 'E02004173',
        '6RG' => 'E02004173',
        '6RH' => 'E02004173',
        '6RJ' => 'E02004173',
        '6RL' => 'E02004173',
        '6RN' => 'E02004173',
        '6RQ' => 'E02004173',
        '6RT' => 'E02004173',
        '6RU' => 'E02004173',
        '6RW' => 'E02004173',
        '6RX' => 'E02004173',
        '6RY' => 'E02004173',
        '6RZ' => 'E02004173',
        '6SD' => 'E02004173',
        '6SE' => 'E02004173',
        '6SF' => 'E02004173',
        '6SG' => 'E02004173',
        '6SH' => 'E02004173',
        '6SJ' => 'E02004173',
        '6SL' => 'E02004173',
        '6SQ' => 'E02004173',
        '6TA' => 'E02004172',
        '6WA' => 'E02004174',
        '6WB' => 'E02004172',
        '6WU' => 'E02004174',
        '6WW' => 'E02004174',
        '6WX' => 'E02004174',
        '6WY' => 'E02004174',
        '6WZ' => 'E02004174',
        '6XN' => 'E02004172',
        '6XY' => 'E02004174',
        '6XZ' => 'E02004174',
        '6YA' => 'E02004174',
        '6YB' => 'E02004172',
        '6YD' => 'E02004174',
        '6YE' => 'E02004172',
        '6YF' => 'E02004172',
        '6YG' => 'E02004174',
        '6YH' => 'E02004174',
        '6YJ' => 'E02004172',
        '6YL' => 'E02004174',
        '6YN' => 'E02004174',
        '6YP' => 'E02004172',
        '6YQ' => 'E02004172',
        '6YR' => 'E02004172',
        '6YS' => 'E02004174',
        '6YT' => 'E02004174',
        '6YU' => 'E02004172',
        '6YW' => 'E02004172',
        '6ZA' => 'E02004174',
        '9AA' => 'E02004174',
        '9AD' => 'E02004174',
        '9AE' => 'E02004174',
        '9AF' => 'E02004174',
        '9AG' => 'E02004174',
        '9AH' => 'E02004174',
        '9AJ' => 'E02004174',
        '9AL' => 'E02004174',
        '9AN' => 'E02004174',
        '9AP' => 'E02004174',
        '9AQ' => 'E02004174',
        '9AR' => 'E02004174',
        '9AS' => 'E02004174',
        '9AT' => 'E02004174',
        '9AU' => 'E02004174',
        '9AW' => 'E02004174',
        '9AX' => 'E02004174',
        '9AY' => 'E02004174',
        '9AZ' => 'E02004174',
        '9BA' => 'E02004174',
        '9BB' => 'E02004174',
        '9BD' => 'E02004174',
        '9BE' => 'E02004174',
        '9BF' => 'E02004174',
        '9BG' => 'E02004174',
        '9BH' => 'E02004174',
        '9BL' => 'E02004174',
        '9BN' => 'E02004174',
        '9BP' => 'E02004174',
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
