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
final class M2
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02006902',
        '1AB' => 'E02006902',
        '1AN' => 'E02006902',
        '1AQ' => 'E02006902',
        '1BA' => 'E02006902',
        '1BB' => 'E02006902',
        '1BD' => 'E02006902',
        '1BT' => 'E02006902',
        '1DA' => 'E02006902',
        '1DB' => 'E02006902',
        '1DD' => 'E02006902',
        '1DE' => 'E02006902',
        '1DF' => 'E02006902',
        '1DH' => 'E02006902',
        '1DJ' => 'E02006902',
        '1DL' => 'E02006902',
        '1DN' => 'E02006902',
        '1DP' => 'E02006902',
        '1DQ' => 'E02006902',
        '1DR' => 'E02006902',
        '1DS' => 'E02006902',
        '1DT' => 'E02006902',
        '1DU' => 'E02006902',
        '1DW' => 'E02006902',
        '1DX' => 'E02006902',
        '1EA' => 'E02006902',
        '1EB' => 'E02006902',
        '1ED' => 'E02006902',
        '1EE' => 'E02006902',
        '1EL' => 'E02006902',
        '1EN' => 'E02006902',
        '1ER' => 'E02006902',
        '1ET' => 'E02006902',
        '1EU' => 'E02006902',
        '1EW' => 'E02006902',
        '1EX' => 'E02006902',
        '1EY' => 'E02006902',
        '1FB' => 'E02006902',
        '1FD' => 'E02006902',
        '1FJ' => 'E02006902',
        '1HA' => 'E02006902',
        '1HB' => 'E02006902',
        '1HD' => 'E02006902',
        '1HE' => 'E02006902',
        '1HF' => 'E02006902',
        '1HJ' => 'E02006902',
        '1HL' => 'E02006902',
        '1HN' => 'E02006902',
        '1HQ' => 'E02006902',
        '1HR' => 'E02006902',
        '1HT' => 'E02006902',
        '1HU' => 'E02006902',
        '1HW' => 'E02006902',
        '1HX' => 'E02006902',
        '1JA' => 'E02006902',
        '1JD' => 'E02006902',
        '1JQ' => 'E02006902',
        '1JR' => 'E02006902',
        '1JS' => 'E02006902',
        '1JT' => 'E02006902',
        '1JX' => 'E02006902',
        '1JY' => 'E02006902',
        '1LB' => 'E02006902',
        '1LY' => 'E02006902',
        '1NA' => 'E02006902',
        '1NB' => 'E02006902',
        '1ND' => 'E02006902',
        '1NL' => 'E02006902',
        '1NP' => 'E02006902',
        '1NW' => 'E02006902',
        '1PB' => 'E02006902',
        '1QS' => 'E02006902',
        '1SE' => 'E02006902',
        '1WB' => 'E02006902',
        '1WD' => 'E02006902',
        '1WE' => 'E02006902',
        '1WF' => 'E02006902',
        '1WL' => 'E02006902',
        '1YB' => 'E02006902',
        '1ZU' => 'E02006902',
        '2AA' => 'E02006902',
        '2AB' => 'E02006902',
        '2AD' => 'E02006902',
        '2AE' => 'E02006912',
        '2AF' => 'E02006902',
        '2AH' => 'E02006912',
        '2AJ' => 'E02006912',
        '2AL' => 'E02006912',
        '2AN' => 'E02006912',
        '2AP' => 'E02006912',
        '2AR' => 'E02006902',
        '2AS' => 'E02006912',
        '2AT' => 'E02006902',
        '2AU' => 'E02006902',
        '2AW' => 'E02006902',
        '2AX' => 'E02006912',
        '2BB' => 'E02006902',
        '2BD' => 'E02006912',
        '2BE' => 'E02006912',
        '2BG' => 'E02006902',
        '2BQ' => 'E02006902',
        '2BR' => 'E02006902',
        '2BS' => 'E02006902',
        '2BT' => 'E02006902',
        '2BU' => 'E02006902',
        '2BX' => 'E02006902',
        '2BY' => 'E02006912',
        '2BZ' => 'E02006902',
        '2DA' => 'E02006902',
        '2DB' => 'E02006912',
        '2DD' => 'E02006902',
        '2DH' => 'E02006902',
        '2DP' => 'E02006912',
        '2DR' => 'E02006902',
        '2EB' => 'E02006912',
        '2EE' => 'E02006902',
        '2EF' => 'E02006902',
        '2EH' => 'E02006902',
        '2EJ' => 'E02006902',
        '2EP' => 'E02006902',
        '2ER' => 'E02006902',
        '2FB' => 'E02006902',
        '2FD' => 'E02006902',
        '2FE' => 'E02006902',
        '2FF' => 'E02006902',
        '2FJ' => 'E02006902',
        '2FL' => 'E02006902',
        '2FP' => 'E02006902',
        '2FU' => 'E02006902',
        '2FW' => 'E02006902',
        '2HA' => 'E02006902',
        '2JA' => 'E02006902',
        '2JB' => 'E02006902',
        '2JD' => 'E02006902',
        '2JE' => 'E02006902',
        '2JF' => 'E02006902',
        '2JG' => 'E02006902',
        '2JH' => 'E02006902',
        '2JJ' => 'E02006902',
        '2JL' => 'E02006902',
        '2JP' => 'E02006917',
        '2JR' => 'E02006917',
        '2JS' => 'E02006917',
        '2JT' => 'E02006902',
        '2JX' => 'E02006902',
        '2LD' => 'E02006902',
        '2LH' => 'E02006917',
        '2LL' => 'E02006902',
        '2LP' => 'E02006902',
        '2RW' => 'E02006902',
        '2XX' => 'E02006902',
        '3AA' => 'E02006917',
        '3AB' => 'E02006917',
        '3AD' => 'E02006912',
        '3AE' => 'E02006917',
        '3AF' => 'E02006917',
        '3AG' => 'E02006902',
        '3AH' => 'E02006902',
        '3AJ' => 'E02006912',
        '3AL' => 'E02006912',
        '3AN' => 'E02006902',
        '3AP' => 'E02006902',
        '3AQ' => 'E02006902',
        '3AR' => 'E02006912',
        '3AU' => 'E02006902',
        '3AW' => 'E02006902',
        '3AX' => 'E02006902',
        '3AY' => 'E02006912',
        '3AZ' => 'E02006912',
        '3BA' => 'E02006902',
        '3BB' => 'E02006912',
        '3BD' => 'E02006917',
        '3BE' => 'E02006917',
        '3BG' => 'E02006917',
        '3BJ' => 'E02006902',
        '3BR' => 'E02006912',
        '3DA' => 'E02006917',
        '3DB' => 'E02006917',
        '3DD' => 'E02006917',
        '3DE' => 'E02006917',
        '3DF' => 'E02006917',
        '3DH' => 'E02006914',
        '3DJ' => 'E02006902',
        '3DL' => 'E02006917',
        '3DN' => 'E02006917',
        '3DS' => 'E02006902',
        '3DW' => 'E02006917',
        '3EH' => 'E02006917',
        '3ES' => 'E02006902',
        '3ET' => 'E02006917',
        '3EU' => 'E02006917',
        '3EX' => 'E02006912',
        '3EY' => 'E02006917',
        '3FF' => 'E02006912',
        '3FU' => 'E02006902',
        '3FX' => 'E02006902',
        '3GR' => 'E02006902',
        '3GX' => 'E02006917',
        '3HB' => 'E02006902',
        '3HH' => 'E02006917',
        '3HP' => 'E02006912',
        '3HQ' => 'E02006912',
        '3HR' => 'E02006912',
        '3HS' => 'E02006917',
        '3HT' => 'E02006912',
        '3HU' => 'E02006912',
        '3HX' => 'E02006912',
        '3HY' => 'E02006912',
        '3HZ' => 'E02006912',
        '3JA' => 'E02006912',
        '3JB' => 'E02006912',
        '3JD' => 'E02006912',
        '3JE' => 'E02006912',
        '3JF' => 'E02006912',
        '3JH' => 'E02006912',
        '3JJ' => 'E02006902',
        '3JL' => 'E02006912',
        '3JN' => 'E02006912',
        '3JP' => 'E02006912',
        '3JW' => 'E02006912',
        '3LG' => 'E02006917',
        '3LH' => 'E02006902',
        '3LJ' => 'E02006917',
        '3LL' => 'E02006917',
        '3LP' => 'E02006914',
        '3LQ' => 'E02006917',
        '3LR' => 'E02006917',
        '3LS' => 'E02006917',
        '3LT' => 'E02006917',
        '3LW' => 'E02006902',
        '3NG' => 'E02006917',
        '3NH' => 'E02006902',
        '3NN' => 'E02006917',
        '3NP' => 'E02006917',
        '3NQ' => 'E02006917',
        '3NR' => 'E02006917',
        '3NT' => 'E02006902',
        '3NW' => 'E02006917',
        '3NX' => 'E02006917',
        '3PA' => 'E02006917',
        '3PW' => 'E02006917',
        '3RS' => 'E02006902',
        '3RY' => 'E02006917',
        '3SS' => 'E02006917',
        '3TA' => 'E02006917',
        '3WG' => 'E02006917',
        '3WH' => 'E02006902',
        '3WJ' => 'E02006917',
        '3WP' => 'E02006917',
        '3WQ' => 'E02006917',
        '3WR' => 'E02006917',
        '3WS' => 'E02006917',
        '3WT' => 'E02006917',
        '4AA' => 'E02006902',
        '4AB' => 'E02006902',
        '4AD' => 'E02006902',
        '4AE' => 'E02006902',
        '4AF' => 'E02006902',
        '4AG' => 'E02006902',
        '4AH' => 'E02006902',
        '4AJ' => 'E02006917',
        '4AL' => 'E02006917',
        '4AN' => 'E02006902',
        '4AP' => 'E02006902',
        '4AQ' => 'E02006902',
        '4AR' => 'E02006902',
        '4AT' => 'E02006902',
        '4AW' => 'E02006902',
        '4BF' => 'E02006917',
        '4BG' => 'E02006902',
        '4BP' => 'E02006917',
        '4BQ' => 'E02006902',
        '4BR' => 'E02006917',
        '4BS' => 'E02006902',
        '4BY' => 'E02006902',
        '4BZ' => 'E02006902',
        '4DA' => 'E02006917',
        '4DD' => 'E02006917',
        '4DE' => 'E02006902',
        '4DF' => 'E02006917',
        '4DL' => 'E02006902',
        '4DN' => 'E02006917',
        '4DQ' => 'E02006917',
        '4DR' => 'E02006917',
        '4DU' => 'E02006902',
        '4DW' => 'E02006902',
        '4DX' => 'E02006902',
        '4EB' => 'E02006917',
        '4EG' => 'E02006902',
        '4EL' => 'E02006917',
        '4EN' => 'E02006917',
        '4EP' => 'E02006917',
        '4EQ' => 'E02006902',
        '4ER' => 'E02006917',
        '4EU' => 'E02006902',
        '4EW' => 'E02006917',
        '4EX' => 'E02006902',
        '4FA' => 'E02006902',
        '4FN' => 'E02006917',
        '4FR' => 'E02006917',
        '4FU' => 'E02006917',
        '4FW' => 'E02006902',
        '4HA' => 'E02006917',
        '4HB' => 'E02006902',
        '4HD' => 'E02006917',
        '4HH' => 'E02006917',
        '4HL' => 'E02006902',
        '4JA' => 'E02006902',
        '4JB' => 'E02006902',
        '4JE' => 'E02006902',
        '4JF' => 'E02006902',
        '4JG' => 'E02006902',
        '4JJ' => 'E02006912',
        '4JL' => 'E02006902',
        '4JN' => 'E02006902',
        '4JP' => 'E02006902',
        '4JQ' => 'E02006902',
        '4JR' => 'E02006902',
        '4JS' => 'E02006902',
        '4JT' => 'E02006902',
        '4JU' => 'E02006902',
        '4JW' => 'E02006917',
        '4JX' => 'E02006902',
        '4LA' => 'E02006902',
        '4LG' => 'E02006902',
        '4LP' => 'E02006902',
        '4LQ' => 'E02006902',
        '4LR' => 'E02006902',
        '4LS' => 'E02006902',
        '4LT' => 'E02006902',
        '4LU' => 'E02006902',
        '4LX' => 'E02006902',
        '4LY' => 'E02006902',
        '4LZ' => 'E02006902',
        '4NA' => 'E02006917',
        '4NB' => 'E02006902',
        '4ND' => 'E02006902',
        '4NG' => 'E02006902',
        '4NH' => 'E02006902',
        '4NJ' => 'E02006902',
        '4NQ' => 'E02006902',
        '4NR' => 'E02006902',
        '4NS' => 'E02006902',
        '4NU' => 'E02006902',
        '4NX' => 'E02006902',
        '4PA' => 'E02006902',
        '4PB' => 'E02006902',
        '4PD' => 'E02006902',
        '4PH' => 'E02006902',
        '4PJ' => 'E02006902',
        '4PL' => 'E02006902',
        '4QP' => 'E02006902',
        '4RB' => 'E02006902',
        '4RS' => 'E02006902',
        '4ST' => 'E02006902',
        '4WA' => 'E02006902',
        '4WB' => 'E02006902',
        '4WD' => 'E02006902',
        '4WG' => 'E02006902',
        '4WQ' => 'E02006902',
        '4WR' => 'E02006902',
        '4WS' => 'E02006912',
        '4WT' => 'E02006902',
        '4WU' => 'E02006902',
        '4WX' => 'E02006902',
        '5AA' => 'E02006902',
        '5AB' => 'E02006902',
        '5AH' => 'E02006902',
        '5AL' => 'E02006917',
        '5AP' => 'E02006917',
        '5AR' => 'E02006902',
        '5AS' => 'E02006902',
        '5AT' => 'E02006902',
        '5AX' => 'E02006902',
        '5AZ' => 'E02006902',
        '5BD' => 'E02006902',
        '5BE' => 'E02006902',
        '5BG' => 'E02006917',
        '5BH' => 'E02006902',
        '5BL' => 'E02006902',
        '5BP' => 'E02006902',
        '5BQ' => 'E02006917',
        '5BR' => 'E02006902',
        '5BS' => 'E02006902',
        '5BT' => 'E02006902',
        '5BY' => 'E02006902',
        '5BZ' => 'E02006902',
        '5DA' => 'E02006902',
        '5DB' => 'E02006917',
        '5DS' => 'E02006902',
        '5DX' => 'E02006902',
        '5EA' => 'E02006902',
        '5EB' => 'E02006902',
        '5ED' => 'E02006902',
        '5EH' => 'E02006902',
        '5EJ' => 'E02006902',
        '5EL' => 'E02006902',
        '5EP' => 'E02006902',
        '5EQ' => 'E02006917',
        '5EU' => 'E02006902',
        '5FA' => 'E02006917',
        '5FD' => 'E02006902',
        '5FE' => 'E02006902',
        '5FH' => 'E02006902',
        '5FJ' => 'E02006902',
        '5GB' => 'E02006917',
        '5GD' => 'E02006917',
        '5GL' => 'E02006917',
        '5GP' => 'E02006917',
        '5GQ' => 'E02006917',
        '5GR' => 'E02006917',
        '5GS' => 'E02006917',
        '5GT' => 'E02006917',
        '5GU' => 'E02006902',
        '5HA' => 'E02006917',
        '5HB' => 'E02006917',
        '5HD' => 'E02006902',
        '5HP' => 'E02006902',
        '5HR' => 'E02006902',
        '5HS' => 'E02006902',
        '5HT' => 'E02006902',
        '5HU' => 'E02006902',
        '5HX' => 'E02006902',
        '5JB' => 'E02006902',
        '5JJ' => 'E02006902',
        '5LA' => 'E02006902',
        '5LE' => 'E02006902',
        '5LF' => 'E02006902',
        '5LG' => 'E02006917',
        '5LH' => 'E02006917',
        '5LJ' => 'E02006902',
        '5LL' => 'E02006917',
        '5LN' => 'E02006902',
        '5LP' => 'E02006912',
        '5LR' => 'E02006902',
        '5LT' => 'E02006902',
        '5NA' => 'E02006917',
        '5NB' => 'E02006917',
        '5ND' => 'E02006902',
        '5NG' => 'E02006917',
        '5NH' => 'E02006902',
        '5NJ' => 'E02006902',
        '5NL' => 'E02006902',
        '5NQ' => 'E02006917',
        '5NR' => 'E02006917',
        '5NS' => 'E02006917',
        '5NT' => 'E02006917',
        '5NU' => 'E02006917',
        '5NX' => 'E02006917',
        '5PA' => 'E02006917',
        '5PB' => 'E02006917',
        '5PD' => 'E02006917',
        '5PE' => 'E02006917',
        '5PF' => 'E02006917',
        '5PG' => 'E02006917',
        '5PH' => 'E02006917',
        '5PJ' => 'E02006917',
        '5PL' => 'E02006902',
        '5PP' => 'E02006917',
        '5PR' => 'E02006902',
        '5PS' => 'E02006917',
        '5QA' => 'E02006917',
        '5QB' => 'E02006917',
        '5QD' => 'E02006917',
        '5QH' => 'E02006917',
        '5QJ' => 'E02006917',
        '5QL' => 'E02006917',
        '5QR' => 'E02006917',
        '5QS' => 'E02006917',
        '5QT' => 'E02006917',
        '5QU' => 'E02006902',
        '5QX' => 'E02006917',
        '5RA' => 'E02006917',
        '5RB' => 'E02006902',
        '5RT' => 'E02006917',
        '5WA' => 'E02006902',
        '5WB' => 'E02006917',
        '5WD' => 'E02006902',
        '5WE' => 'E02006917',
        '5WG' => 'E02006917',
        '5WH' => 'E02006902',
        '5WJ' => 'E02006902',
        '5WL' => 'E02006902',
        '5WP' => 'E02006902',
        '5WQ' => 'E02006917',
        '5WR' => 'E02006917',
        '5WS' => 'E02006917',
        '5WT' => 'E02006917',
        '5WU' => 'E02006917',
        '5WW' => 'E02006917',
        '5WX' => 'E02006917',
        '5YB' => 'E02006902',
        '6AA' => 'E02006902',
        '6AB' => 'E02006902',
        '6AD' => 'E02006902',
        '6AE' => 'E02006902',
        '6AF' => 'E02006902',
        '6AG' => 'E02006902',
        '6AH' => 'E02006902',
        '6AJ' => 'E02006902',
        '6AN' => 'E02006902',
        '6AQ' => 'E02006902',
        '6AR' => 'E02006917',
        '6AS' => 'E02006902',
        '6AT' => 'E02006902',
        '6AU' => 'E02006917',
        '6AW' => 'E02006902',
        '6AX' => 'E02006902',
        '6AY' => 'E02006902',
        '6AZ' => 'E02006902',
        '6BA' => 'E02006902',
        '6BB' => 'E02006902',
        '6BD' => 'E02006902',
        '6BE' => 'E02006902',
        '6BH' => 'E02006902',
        '6BN' => 'E02006902',
        '6BY' => 'E02006917',
        '6DA' => 'E02006902',
        '6DB' => 'E02006902',
        '6DD' => 'E02006902',
        '6DE' => 'E02006902',
        '6DF' => 'E02006902',
        '6DG' => 'E02006902',
        '6DH' => 'E02006902',
        '6DL' => 'E02006902',
        '6DN' => 'E02006902',
        '6DP' => 'E02006902',
        '6DQ' => 'E02006902',
        '6DR' => 'E02006902',
        '6DS' => 'E02006902',
        '6DU' => 'E02006902',
        '6DW' => 'E02006902',
        '6EG' => 'E02006902',
        '6EN' => 'E02006902',
        '6EQ' => 'E02006902',
        '6ER' => 'E02006902',
        '6ET' => 'E02006902',
        '6EU' => 'E02006902',
        '6EW' => 'E02006902',
        '6EX' => 'E02006902',
        '6FL' => 'E02006902',
        '6FN' => 'E02006902',
        '6FP' => 'E02006902',
        '6FR' => 'E02006902',
        '6FS' => 'E02006902',
        '6FT' => 'E02006902',
        '6FU' => 'E02006902',
        '6FW' => 'E02006902',
        '6HG' => 'E02006902',
        '6HP' => 'E02006902',
        '6HQ' => 'E02006902',
        '6HR' => 'E02006902',
        '6HS' => 'E02006902',
        '6HT' => 'E02006902',
        '6HU' => 'E02006902',
        '6HX' => 'E02006902',
        '6HY' => 'E02006902',
        '6JB' => 'E02006902',
        '6JJ' => 'E02006902',
        '6JP' => 'E02006902',
        '6JR' => 'E02006902',
        '6JS' => 'E02006902',
        '6JT' => 'E02006902',
        '6LA' => 'E02006902',
        '6LD' => 'E02006902',
        '6LE' => 'E02006902',
        '6LH' => 'E02006902',
        '6LN' => 'E02006902',
        '6LP' => 'E02006917',
        '6LR' => 'E02006902',
        '6LT' => 'E02006902',
        '6LW' => 'E02006902',
        '6NY' => 'E02006902',
        '6RJ' => 'E02006902',
        '6WH' => 'E02006902',
        '6XX' => 'E02006902',
        '7AA' => 'E02006902',
        '7AD' => 'E02006902',
        '7AE' => 'E02006902',
        '7AF' => 'E02006902',
        '7AH' => 'E02006902',
        '7AJ' => 'E02006902',
        '7AL' => 'E02006902',
        '7AN' => 'E02006902',
        '7AP' => 'E02006902',
        '7AQ' => 'E02006902',
        '7AR' => 'E02006902',
        '7AS' => 'E02006902',
        '7AT' => 'E02006902',
        '7AU' => 'E02006902',
        '7AW' => 'E02006902',
        '7AX' => 'E02006902',
        '7AY' => 'E02006902',
        '7AZ' => 'E02006902',
        '7BA' => 'E02006902',
        '7BD' => 'E02006902',
        '7BR' => 'E02006902',
        '7BS' => 'E02006902',
        '7BT' => 'E02006902',
        '7BX' => 'E02006902',
        '7BY' => 'E02006902',
        '7BZ' => 'E02006902',
        '7DA' => 'E02006902',
        '7DB' => 'E02006902',
        '7DD' => 'E02006902',
        '7DH' => 'E02006902',
        '7DJ' => 'E02006902',
        '7DL' => 'E02006902',
        '7EA' => 'E02006902',
        '7EB' => 'E02006902',
        '7ED' => 'E02006902',
        '7EE' => 'E02006902',
        '7EF' => 'E02006902',
        '7EH' => 'E02006902',
        '7EJ' => 'E02006902',
        '7EN' => 'E02006902',
        '7EP' => 'E02006902',
        '7ER' => 'E02006902',
        '7ES' => 'E02006902',
        '7EW' => 'E02006902',
        '7FA' => 'E02006902',
        '7FB' => 'E02006902',
        '7FD' => 'E02006902',
        '7FE' => 'E02006902',
        '7FF' => 'E02006902',
        '7FH' => 'E02006902',
        '7FJ' => 'E02006902',
        '7FL' => 'E02006902',
        '7HA' => 'E02006902',
        '7HB' => 'E02006902',
        '7HD' => 'E02006902',
        '7HE' => 'E02006902',
        '7HF' => 'E02006902',
        '7HG' => 'E02006902',
        '7HH' => 'E02006902',
        '7HL' => 'E02006902',
        '7HN' => 'E02006902',
        '7HP' => 'E02006902',
        '7HQ' => 'E02006902',
        '7HS' => 'E02006902',
        '7HT' => 'E02006902',
        '7HU' => 'E02006902',
        '7HW' => 'E02006902',
        '7JA' => 'E02006902',
        '7JB' => 'E02006902',
        '7LA' => 'E02006902',
        '7LD' => 'E02006902',
        '7LE' => 'E02006902',
        '7LF' => 'E02006902',
        '7LG' => 'E02006902',
        '7LH' => 'E02006902',
        '7LJ' => 'E02006902',
        '7LN' => 'E02006902',
        '7LP' => 'E02006902',
        '7LQ' => 'E02006902',
        '7LR' => 'E02006902',
        '7LU' => 'E02006902',
        '7LW' => 'E02006902',
        '7NA' => 'E02006902',
        '7NX' => 'E02006902',
        '7PB' => 'E02006902',
        '7PD' => 'E02006902',
        '7PE' => 'E02006902',
        '7PF' => 'E02006902',
        '7PH' => 'E02006902',
        '7PN' => 'E02006902',
        '7PR' => 'E02006902',
        '7PS' => 'E02006902',
        '7PT' => 'E02006917',
        '7PW' => 'E02006902',
        '7TT' => 'E02006902',
        '7WA' => 'E02006902',
        '9DZ' => 'E02006902',
        '9EF' => 'E02006902',
        '9EZ' => 'E02006902',
        '9FH' => 'E02006902',
        '9FN' => 'E02006902',
        '9GB' => 'E02006902',
        '9GU' => 'E02006902',
        '9JE' => 'E02006902',
        '9LD' => 'E02006902',
        '9LH' => 'E02006902',
        '9LL' => 'E02006902',
        '9NA' => 'E02006902',
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
