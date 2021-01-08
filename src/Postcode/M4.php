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
final class M4
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02006902',
        '1AB' => 'E02006902',
        '1AD' => 'E02006902',
        '1AH' => 'E02006902',
        '1AZ' => 'E02006902',
        '1BA' => 'E02006902',
        '1BB' => 'E02006902',
        '1BD' => 'E02006902',
        '1BE' => 'E02006902',
        '1BF' => 'E02006902',
        '1BG' => 'E02006902',
        '1BH' => 'E02006902',
        '1BJ' => 'E02006902',
        '1BT' => 'E02006902',
        '1DG' => 'E02006902',
        '1DH' => 'E02006902',
        '1DN' => 'E02006902',
        '1DQ' => 'E02006902',
        '1DT' => 'E02006902',
        '1DW' => 'E02006902',
        '1DX' => 'E02006902',
        '1DY' => 'E02006902',
        '1DZ' => 'E02006902',
        '1EA' => 'E02006902',
        '1EB' => 'E02006902',
        '1ED' => 'E02006902',
        '1EE' => 'E02006902',
        '1EF' => 'E02006902',
        '1EG' => 'E02006902',
        '1EH' => 'E02006902',
        '1EP' => 'E02006902',
        '1EQ' => 'E02006902',
        '1ER' => 'E02006902',
        '1ES' => 'E02006902',
        '1ET' => 'E02006902',
        '1EU' => 'E02006902',
        '1EW' => 'E02006902',
        '1EX' => 'E02006902',
        '1EY' => 'E02006902',
        '1EZ' => 'E02006902',
        '1FG' => 'E02006902',
        '1FP' => 'E02006902',
        '1FQ' => 'E02006902',
        '1FR' => 'E02006902',
        '1FS' => 'E02006902',
        '1FU' => 'E02006902',
        '1HG' => 'E02006902',
        '1HN' => 'E02006902',
        '1HP' => 'E02006902',
        '1HQ' => 'E02006902',
        '1HS' => 'E02006902',
        '1HT' => 'E02006902',
        '1HW' => 'E02006902',
        '1JZ' => 'E02006902',
        '1LA' => 'E02006902',
        '1LB' => 'E02006902',
        '1LD' => 'E02006902',
        '1LE' => 'E02006912',
        '1LF' => 'E02006912',
        '1LG' => 'E02006902',
        '1LH' => 'E02006902',
        '1LJ' => 'E02006912',
        '1LL' => 'E02006902',
        '1LN' => 'E02006902',
        '1LP' => 'E02006902',
        '1LQ' => 'E02006902',
        '1LR' => 'E02006902',
        '1LS' => 'E02006902',
        '1LT' => 'E02006902',
        '1LU' => 'E02006902',
        '1LW' => 'E02006902',
        '1LX' => 'E02006902',
        '1LY' => 'E02006902',
        '1LZ' => 'E02006902',
        '1NA' => 'E02006902',
        '1NB' => 'E02006902',
        '1PA' => 'E02006902',
        '1PB' => 'E02006902',
        '1PD' => 'E02006902',
        '1PE' => 'E02006902',
        '1PG' => 'E02006902',
        '1PH' => 'E02006902',
        '1PL' => 'E02006902',
        '1PN' => 'E02006902',
        '1PP' => 'E02006902',
        '1PQ' => 'E02006902',
        '1PR' => 'E02006902',
        '1PS' => 'E02006902',
        '1PT' => 'E02006902',
        '1PU' => 'E02006912',
        '1PW' => 'E02006902',
        '1PX' => 'E02006902',
        '1PY' => 'E02006902',
        '1QA' => 'E02006902',
        '1QB' => 'E02006902',
        '1QD' => 'E02006902',
        '1QE' => 'E02006902',
        '1QF' => 'E02006902',
        '1QH' => 'E02006902',
        '1QJ' => 'E02006902',
        '1SH' => 'E02006902',
        '1TT' => 'E02006902',
        '2AA' => 'E02006902',
        '2AB' => 'E02006902',
        '2AD' => 'E02006902',
        '2AE' => 'E02006902',
        '2AF' => 'E02006902',
        '2AG' => 'E02006902',
        '2AH' => 'E02006902',
        '2AJ' => 'E02006902',
        '2AR' => 'E02006902',
        '2BJ' => 'E02006902',
        '2BL' => 'E02006902',
        '2BR' => 'E02006902',
        '2BS' => 'E02006902',
        '2BT' => 'E02006902',
        '2BX' => 'E02006902',
        '2BY' => 'E02006902',
        '2BZ' => 'E02006902',
        '2DD' => 'E02006902',
        '2DE' => 'E02006902',
        '2DH' => 'E02006902',
        '2DL' => 'E02006902',
        '2DN' => 'E02006902',
        '2DW' => 'E02006902',
        '2EA' => 'E02006902',
        '2EB' => 'E02006902',
        '2ER' => 'E02006902',
        '2HA' => 'E02006902',
        '2HG' => 'E02006902',
        '2HU' => 'E02006902',
        '2HW' => 'E02006902',
        '3AA' => 'E02006902',
        '3AB' => 'E02006902',
        '3AD' => 'E02006902',
        '3AE' => 'E02006902',
        '3AF' => 'E02006902',
        '3AG' => 'E02006902',
        '3AH' => 'E02006902',
        '3AJ' => 'E02006902',
        '3AL' => 'E02006902',
        '3AN' => 'E02006902',
        '3AP' => 'E02006902',
        '3AQ' => 'E02006902',
        '3AR' => 'E02006902',
        '3AS' => 'E02006902',
        '3AT' => 'E02006902',
        '3AW' => 'E02006902',
        '3AX' => 'E02006902',
        '3BG' => 'E02006902',
        '3BN' => 'E02006902',
        '3BP' => 'E02006902',
        '3BQ' => 'E02006902',
        '3BT' => 'E02006902',
        '3BU' => 'E02006902',
        '3BW' => 'E02006902',
        '3BY' => 'E02006902',
        '3BZ' => 'E02006902',
        '3DB' => 'E02006902',
        '3DD' => 'E02006902',
        '3DH' => 'E02006902',
        '3DS' => 'E02006902',
        '3DT' => 'E02006902',
        '3DU' => 'E02006902',
        '3DY' => 'E02006902',
        '3DZ' => 'E02006902',
        '3EA' => 'E02006902',
        '3EF' => 'E02006902',
        '3EP' => 'E02006902',
        '3EQ' => 'E02006902',
        '3ER' => 'E02006902',
        '3ES' => 'E02006902',
        '3ET' => 'E02006902',
        '3EU' => 'E02006902',
        '3EX' => 'E02006902',
        '3EY' => 'E02006902',
        '3EZ' => 'E02006902',
        '3FB' => 'E02006902',
        '3FP' => 'E02006902',
        '3FS' => 'E02006902',
        '3FT' => 'E02006902',
        '3FX' => 'E02006902',
        '3HB' => 'E02006902',
        '3HD' => 'E02006902',
        '3HE' => 'E02006902',
        '3HF' => 'E02006902',
        '3HN' => 'E02006902',
        '3HS' => 'E02006902',
        '3HT' => 'E02006902',
        '3HW' => 'E02006902',
        '3TR' => 'E02006902',
        '4AA' => 'E02006902',
        '4AB' => 'E02006913',
        '4AD' => 'E02006913',
        '4AE' => 'E02006902',
        '4AF' => 'E02006902',
        '4AG' => 'E02006902',
        '4AH' => 'E02006902',
        '4AJ' => 'E02006913',
        '4AL' => 'E02006902',
        '4AN' => 'E02006902',
        '4AP' => 'E02006902',
        '4AQ' => 'E02006913',
        '4AR' => 'E02006902',
        '4AS' => 'E02006902',
        '4AT' => 'E02006913',
        '4AU' => 'E02006913',
        '4AW' => 'E02006902',
        '4AX' => 'E02006913',
        '4AY' => 'E02006913',
        '4AZ' => 'E02006913',
        '4BA' => 'E02006902',
        '4BB' => 'E02006902',
        '4BD' => 'E02006902',
        '4BE' => 'E02006902',
        '4BF' => 'E02006902',
        '4BG' => 'E02006902',
        '4BH' => 'E02006902',
        '4BJ' => 'E02006902',
        '4BL' => 'E02006913',
        '4BN' => 'E02006913',
        '4BP' => 'E02006902',
        '4BQ' => 'E02006902',
        '4BR' => 'E02006902',
        '4BS' => 'E02006902',
        '4BT' => 'E02006913',
        '4BU' => 'E02006902',
        '4BW' => 'E02006902',
        '4BX' => 'E02006902',
        '4BY' => 'E02006902',
        '4BZ' => 'E02006902',
        '4DA' => 'E02006902',
        '4DB' => 'E02006902',
        '4DD' => 'E02006913',
        '4DE' => 'E02006902',
        '4DF' => 'E02006902',
        '4DG' => 'E02006902',
        '4DH' => 'E02006902',
        '4DJ' => 'E02006902',
        '4DL' => 'E02006902',
        '4DN' => 'E02006902',
        '4DP' => 'E02006902',
        '4DQ' => 'E02006902',
        '4DR' => 'E02006902',
        '4DS' => 'E02006902',
        '4DT' => 'E02006902',
        '4DU' => 'E02006902',
        '4DW' => 'E02006902',
        '4DX' => 'E02006902',
        '4DY' => 'E02006902',
        '4DZ' => 'E02006902',
        '4EA' => 'E02006902',
        '4EB' => 'E02006902',
        '4EE' => 'E02006913',
        '4EF' => 'E02006913',
        '4EG' => 'E02006913',
        '4EH' => 'E02006913',
        '4EJ' => 'E02006913',
        '4EL' => 'E02006913',
        '4EN' => 'E02006913',
        '4EP' => 'E02006913',
        '4EQ' => 'E02006913',
        '4ER' => 'E02006913',
        '4ES' => 'E02006913',
        '4ET' => 'E02006913',
        '4EU' => 'E02006913',
        '4EW' => 'E02006913',
        '4EX' => 'E02006913',
        '4EY' => 'E02006913',
        '4EZ' => 'E02006913',
        '4FA' => 'E02006902',
        '4FB' => 'E02006913',
        '4FD' => 'E02006902',
        '4FE' => 'E02006913',
        '4FF' => 'E02006913',
        '4FG' => 'E02006913',
        '4FH' => 'E02006913',
        '4FJ' => 'E02006913',
        '4FL' => 'E02006913',
        '4FN' => 'E02006913',
        '4FP' => 'E02006913',
        '4FQ' => 'E02006913',
        '4FR' => 'E02006913',
        '4FS' => 'E02006913',
        '4FT' => 'E02006913',
        '4FU' => 'E02006902',
        '4FW' => 'E02006902',
        '4FX' => 'E02006915',
        '4FY' => 'E02006913',
        '4FZ' => 'E02006913',
        '4GB' => 'E02006902',
        '4GD' => 'E02006902',
        '4GE' => 'E02006902',
        '4GH' => 'E02006902',
        '4GJ' => 'E02006902',
        '4GL' => 'E02006902',
        '4GN' => 'E02006902',
        '4HA' => 'E02006902',
        '4HB' => 'E02006902',
        '4HD' => 'E02006902',
        '4HE' => 'E02006913',
        '4HF' => 'E02006913',
        '4HG' => 'E02006902',
        '4HR' => 'E02006913',
        '4HS' => 'E02006902',
        '4HT' => 'E02006902',
        '4HU' => 'E02006902',
        '4HY' => 'E02006902',
        '4HZ' => 'E02006902',
        '4JA' => 'E02006902',
        '4JB' => 'E02006902',
        '4JD' => 'E02006902',
        '4JE' => 'E02006902',
        '4JF' => 'E02006902',
        '4JG' => 'E02006902',
        '4JH' => 'E02006913',
        '4JJ' => 'E02006913',
        '4JL' => 'E02006913',
        '4JN' => 'E02006913',
        '4JP' => 'E02006913',
        '4JQ' => 'E02006902',
        '4JR' => 'E02006902',
        '4JS' => 'E02006913',
        '4JT' => 'E02006902',
        '4JW' => 'E02006913',
        '4JX' => 'E02006902',
        '4JY' => 'E02006902',
        '4LA' => 'E02006902',
        '4NL' => 'E02006913',
        '4PD' => 'E02006902',
        '4PF' => 'E02006902',
        '4PR' => 'E02006902',
        '4RN' => 'E02006902',
        '4TF' => 'E02006902',
        '4TG' => 'E02006902',
        '4TJ' => 'E02006902',
        '5AA' => 'E02006902',
        '5AB' => 'E02006912',
        '5AD' => 'E02006912',
        '5AE' => 'E02006912',
        '5AF' => 'E02006912',
        '5AG' => 'E02006912',
        '5AH' => 'E02006912',
        '5AJ' => 'E02006912',
        '5AL' => 'E02006912',
        '5AN' => 'E02006912',
        '5AP' => 'E02006912',
        '5AQ' => 'E02006912',
        '5AR' => 'E02006912',
        '5AS' => 'E02006912',
        '5AT' => 'E02006912',
        '5AU' => 'E02001057',
        '5AW' => 'E02006912',
        '5AX' => 'E02006912',
        '5AY' => 'E02006912',
        '5AZ' => 'E02006912',
        '5BA' => 'E02006912',
        '5BB' => 'E02006912',
        '5BD' => 'E02006912',
        '5BE' => 'E02006912',
        '5BF' => 'E02006912',
        '5BG' => 'E02006912',
        '5BH' => 'E02006912',
        '5BJ' => 'E02006912',
        '5BL' => 'E02006912',
        '5BN' => 'E02006912',
        '5BP' => 'E02006912',
        '5BQ' => 'E02006912',
        '5BR' => 'E02006912',
        '5BS' => 'E02006912',
        '5BT' => 'E02006912',
        '5BU' => 'E02006902',
        '5BW' => 'E02006912',
        '5BX' => 'E02006912',
        '5BZ' => 'E02006912',
        '5DA' => 'E02006912',
        '5DB' => 'E02006902',
        '5DD' => 'E02006912',
        '5DE' => 'E02006902',
        '5DF' => 'E02006902',
        '5DG' => 'E02006912',
        '5DH' => 'E02006912',
        '5DJ' => 'E02006912',
        '5DL' => 'E02006912',
        '5DN' => 'E02006912',
        '5DP' => 'E02006912',
        '5DQ' => 'E02006912',
        '5DR' => 'E02006902',
        '5DS' => 'E02006912',
        '5DT' => 'E02006912',
        '5DU' => 'E02006902',
        '5DW' => 'E02006912',
        '5DX' => 'E02006912',
        '5DY' => 'E02006912',
        '5DZ' => 'E02006912',
        '5EA' => 'E02006912',
        '5EB' => 'E02006902',
        '5ED' => 'E02006902',
        '5EE' => 'E02006902',
        '5EF' => 'E02006912',
        '5EG' => 'E02006902',
        '5EH' => 'E02006902',
        '5EJ' => 'E02006902',
        '5EL' => 'E02006902',
        '5EN' => 'E02006902',
        '5EP' => 'E02006912',
        '5EQ' => 'E02006902',
        '5ES' => 'E02006902',
        '5ET' => 'E02006902',
        '5EU' => 'E02006902',
        '5EW' => 'E02006902',
        '5EX' => 'E02006902',
        '5EY' => 'E02006902',
        '5EZ' => 'E02006902',
        '5FA' => 'E02006912',
        '5FB' => 'E02006912',
        '5FD' => 'E02006912',
        '5FE' => 'E02006912',
        '5FF' => 'E02006912',
        '5FG' => 'E02006902',
        '5FH' => 'E02006902',
        '5FP' => 'E02006902',
        '5FQ' => 'E02006902',
        '5FR' => 'E02006902',
        '5FS' => 'E02006902',
        '5FT' => 'E02006902',
        '5FU' => 'E02006902',
        '5FW' => 'E02006902',
        '5FX' => 'E02006902',
        '5FY' => 'E02006902',
        '5FZ' => 'E02006902',
        '5HA' => 'E02006902',
        '5HB' => 'E02006902',
        '5HD' => 'E02006902',
        '5HE' => 'E02006902',
        '5HF' => 'E02006902',
        '5HU' => 'E02006902',
        '5JA' => 'E02006902',
        '5JB' => 'E02006902',
        '5JD' => 'E02006902',
        '5JE' => 'E02006902',
        '5JF' => 'E02006902',
        '5JG' => 'E02006902',
        '5JH' => 'E02006902',
        '5JJ' => 'E02006902',
        '5JN' => 'E02006902',
        '5JP' => 'E02006902',
        '5JQ' => 'E02006902',
        '5JR' => 'E02006902',
        '5JS' => 'E02006902',
        '5JU' => 'E02006902',
        '5JW' => 'E02006902',
        '5JX' => 'E02006902',
        '5JY' => 'E02006902',
        '5JZ' => 'E02006902',
        '5LA' => 'E02006902',
        '5LB' => 'E02006902',
        '5LX' => 'E02006912',
        '5WD' => 'E02006902',
        '6AA' => 'E02006912',
        '6AB' => 'E02006912',
        '6AD' => 'E02001057',
        '6AE' => 'E02006912',
        '6AF' => 'E02006902',
        '6AG' => 'E02006902',
        '6AH' => 'E02001057',
        '6AJ' => 'E02006912',
        '6AL' => 'E02001057',
        '6AN' => 'E02006902',
        '6AP' => 'E02006912',
        '6AQ' => 'E02006902',
        '6AR' => 'E02006912',
        '6AS' => 'E02001057',
        '6AT' => 'E02001057',
        '6AU' => 'E02006902',
        '6AW' => 'E02006912',
        '6AX' => 'E02006902',
        '6AY' => 'E02006902',
        '6AZ' => 'E02006902',
        '6BA' => 'E02006902',
        '6BB' => 'E02006902',
        '6BD' => 'E02006902',
        '6BE' => 'E02006902',
        '6BF' => 'E02006912',
        '6BG' => 'E02006902',
        '6BH' => 'E02006902',
        '6BJ' => 'E02006902',
        '6BL' => 'E02006902',
        '6BN' => 'E02006902',
        '6BP' => 'E02006902',
        '6BQ' => 'E02006902',
        '6BR' => 'E02006902',
        '6BS' => 'E02001057',
        '6BU' => 'E02001057',
        '6BW' => 'E02001057',
        '6BX' => 'E02001057',
        '6BY' => 'E02001057',
        '6BZ' => 'E02006902',
        '6DA' => 'E02006912',
        '6DB' => 'E02001057',
        '6DD' => 'E02006912',
        '6DE' => 'E02006912',
        '6DF' => 'E02006912',
        '6DG' => 'E02006912',
        '6DH' => 'E02001057',
        '6DJ' => 'E02006912',
        '6DL' => 'E02006912',
        '6DN' => 'E02001057',
        '6DP' => 'E02006912',
        '6DQ' => 'E02006912',
        '6DR' => 'E02006912',
        '6DS' => 'E02001057',
        '6DT' => 'E02001057',
        '6DU' => 'E02006912',
        '6DW' => 'E02006912',
        '6DX' => 'E02001057',
        '6DY' => 'E02001057',
        '6DZ' => 'E02001057',
        '6EA' => 'E02006912',
        '6EB' => 'E02001057',
        '6ED' => 'E02001057',
        '6EE' => 'E02001057',
        '6EF' => 'E02001057',
        '6EG' => 'E02001057',
        '6EH' => 'E02001057',
        '6EJ' => 'E02001057',
        '6EL' => 'E02001057',
        '6EN' => 'E02001057',
        '6EP' => 'E02006902',
        '6EQ' => 'E02001057',
        '6ER' => 'E02001057',
        '6ES' => 'E02006912',
        '6ET' => 'E02006912',
        '6EU' => 'E02006912',
        '6EW' => 'E02006902',
        '6EY' => 'E02006912',
        '6EZ' => 'E02006912',
        '6FA' => 'E02001057',
        '6FB' => 'E02001057',
        '6FD' => 'E02001057',
        '6FE' => 'E02001057',
        '6FF' => 'E02001057',
        '6FG' => 'E02006912',
        '6FH' => 'E02001057',
        '6FJ' => 'E02001057',
        '6FL' => 'E02001057',
        '6FN' => 'E02001057',
        '6FP' => 'E02001057',
        '6FQ' => 'E02001057',
        '6FR' => 'E02001057',
        '6FS' => 'E02001057',
        '6FT' => 'E02006912',
        '6FU' => 'E02006912',
        '6FW' => 'E02001057',
        '6FX' => 'E02006912',
        '6FY' => 'E02006912',
        '6FZ' => 'E02006912',
        '6GA' => 'E02001057',
        '6GB' => 'E02001057',
        '6GD' => 'E02001057',
        '6GE' => 'E02001057',
        '6GF' => 'E02001057',
        '6GG' => 'E02006902',
        '6GQ' => 'E02001057',
        '6GR' => 'E02001057',
        '6GS' => 'E02001057',
        '6GT' => 'E02001057',
        '6GU' => 'E02001057',
        '6GW' => 'E02001057',
        '6GX' => 'E02001057',
        '6GY' => 'E02001057',
        '6GZ' => 'E02001057',
        '6HA' => 'E02001057',
        '6HB' => 'E02001057',
        '6HD' => 'E02001057',
        '6HE' => 'E02001057',
        '6HF' => 'E02001057',
        '6HG' => 'E02001057',
        '6HH' => 'E02001057',
        '6HJ' => 'E02001057',
        '6HL' => 'E02001057',
        '6HN' => 'E02001057',
        '6HP' => 'E02001057',
        '6HQ' => 'E02006912',
        '6HR' => 'E02001057',
        '6HS' => 'E02006912',
        '6HT' => 'E02001057',
        '6HU' => 'E02001057',
        '6HW' => 'E02001057',
        '6HX' => 'E02001057',
        '6HY' => 'E02001057',
        '6HZ' => 'E02001057',
        '6JA' => 'E02006912',
        '6JB' => 'E02006912',
        '6JD' => 'E02001057',
        '6JE' => 'E02006912',
        '6JF' => 'E02006912',
        '6JG' => 'E02006902',
        '6JH' => 'E02006902',
        '6JJ' => 'E02001057',
        '6JL' => 'E02001057',
        '6JN' => 'E02001057',
        '6JP' => 'E02001057',
        '6JQ' => 'E02001057',
        '6JR' => 'E02001057',
        '6JS' => 'E02001057',
        '6JT' => 'E02001057',
        '6JU' => 'E02001057',
        '6JW' => 'E02001057',
        '6JX' => 'E02001057',
        '6JY' => 'E02001057',
        '6JZ' => 'E02001057',
        '6LA' => 'E02001057',
        '6LB' => 'E02001057',
        '6LD' => 'E02001057',
        '6LE' => 'E02006902',
        '6LF' => 'E02006902',
        '6LH' => 'E02006902',
        '6LJ' => 'E02006902',
        '6LL' => 'E02006902',
        '6LN' => 'E02001057',
        '6LP' => 'E02006902',
        '6LQ' => 'E02006912',
        '6LR' => 'E02001057',
        '6LS' => 'E02001057',
        '6LT' => 'E02001057',
        '6LU' => 'E02001057',
        '6LW' => 'E02001057',
        '6WX' => 'E02006912',
        '7AA' => 'E02006912',
        '7AB' => 'E02006912',
        '7AD' => 'E02006912',
        '7AE' => 'E02001057',
        '7AF' => 'E02001057',
        '7AG' => 'E02001057',
        '7AH' => 'E02001057',
        '7AJ' => 'E02001057',
        '7AL' => 'E02001057',
        '7AN' => 'E02001057',
        '7AP' => 'E02001057',
        '7AQ' => 'E02001057',
        '7AR' => 'E02001057',
        '7AS' => 'E02001057',
        '7AT' => 'E02001057',
        '7AU' => 'E02001057',
        '7AW' => 'E02001057',
        '7AX' => 'E02001057',
        '7AY' => 'E02001057',
        '7AZ' => 'E02001057',
        '7BA' => 'E02001057',
        '7BB' => 'E02001057',
        '7BD' => 'E02001057',
        '7BE' => 'E02001057',
        '7BF' => 'E02001057',
        '7BG' => 'E02001057',
        '7BH' => 'E02001057',
        '7BL' => 'E02001057',
        '7BN' => 'E02001057',
        '7DA' => 'E02001057',
        '7DB' => 'E02006912',
        '7DD' => 'E02001057',
        '7DE' => 'E02001057',
        '7DF' => 'E02001057',
        '7DG' => 'E02001057',
        '7DH' => 'E02006912',
        '7DJ' => 'E02001057',
        '7DL' => 'E02001057',
        '7DN' => 'E02001057',
        '7DP' => 'E02001057',
        '7DQ' => 'E02001057',
        '7DR' => 'E02001057',
        '7DS' => 'E02001057',
        '7DT' => 'E02001057',
        '7DU' => 'E02001057',
        '7DW' => 'E02001057',
        '7DX' => 'E02001057',
        '7DY' => 'E02001057',
        '7DZ' => 'E02001057',
        '7EA' => 'E02006912',
        '7EB' => 'E02001057',
        '7ED' => 'E02001057',
        '7EE' => 'E02001057',
        '7EF' => 'E02001057',
        '7EG' => 'E02001057',
        '7EJ' => 'E02001057',
        '7EL' => 'E02001057',
        '7EN' => 'E02001057',
        '7EP' => 'E02001057',
        '7EQ' => 'E02001057',
        '7ER' => 'E02001057',
        '7ES' => 'E02001057',
        '7ET' => 'E02001057',
        '7EU' => 'E02001057',
        '7EW' => 'E02001057',
        '7EX' => 'E02001057',
        '7EY' => 'E02001057',
        '7EZ' => 'E02001057',
        '7FA' => 'E02001057',
        '7FB' => 'E02001057',
        '7FD' => 'E02001057',
        '7FE' => 'E02001057',
        '7FG' => 'E02001057',
        '7FN' => 'E02001057',
        '7FP' => 'E02001057',
        '7FQ' => 'E02001057',
        '7FR' => 'E02001057',
        '7FS' => 'E02001057',
        '7FT' => 'E02001057',
        '7FU' => 'E02001057',
        '7FW' => 'E02001057',
        '7HR' => 'E02001057',
        '7HS' => 'E02001057',
        '7HT' => 'E02001057',
        '7HU' => 'E02001057',
        '7HX' => 'E02001057',
        '7HY' => 'E02001057',
        '7HZ' => 'E02001057',
        '7JA' => 'E02001057',
        '7JB' => 'E02001057',
        '7JD' => 'E02001057',
        '7JE' => 'E02001057',
        '7JF' => 'E02001057',
        '7JG' => 'E02001057',
        '7JH' => 'E02001057',
        '7JJ' => 'E02001057',
        '7JL' => 'E02001057',
        '7JN' => 'E02001057',
        '7JP' => 'E02001057',
        '7JQ' => 'E02001057',
        '7JR' => 'E02001057',
        '7JS' => 'E02001057',
        '7JT' => 'E02001057',
        '7JU' => 'E02001057',
        '7JW' => 'E02001057',
        '7JX' => 'E02001057',
        '7JY' => 'E02001057',
        '7LA' => 'E02001057',
        '7LB' => 'E02001057',
        '7LD' => 'E02001057',
        '7LH' => 'E02001057',
        '7LL' => 'E02001057',
        '7LQ' => 'E02001057',
        '7LR' => 'E02001057',
        '7LS' => 'E02001057',
        '7LT' => 'E02001057',
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
