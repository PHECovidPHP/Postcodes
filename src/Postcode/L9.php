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
final class L9
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0EA' => 'E02001348',
        '0EB' => 'E02001348',
        '0ED' => 'E02001348',
        '0EF' => 'E02001348',
        '0EG' => 'E02001348',
        '0EH' => 'E02001348',
        '0EJ' => 'E02001348',
        '0EL' => 'E02001348',
        '0EN' => 'E02001348',
        '0EP' => 'E02001348',
        '0EQ' => 'E02001348',
        '0ER' => 'E02001348',
        '0ES' => 'E02001348',
        '0ET' => 'E02001348',
        '0EU' => 'E02001348',
        '0EW' => 'E02001348',
        '0EX' => 'E02001348',
        '0EY' => 'E02001348',
        '0EZ' => 'E02001348',
        '0HA' => 'E02001348',
        '0HB' => 'E02001348',
        '0HD' => 'E02001348',
        '0HE' => 'E02001348',
        '0HF' => 'E02001348',
        '0HG' => 'E02001348',
        '0HH' => 'E02001348',
        '0HJ' => 'E02001348',
        '0HL' => 'E02001348',
        '0HN' => 'E02001348',
        '0HP' => 'E02001348',
        '0HQ' => 'E02001348',
        '0HR' => 'E02001348',
        '0HT' => 'E02001348',
        '0HU' => 'E02001348',
        '0HW' => 'E02001348',
        '0HX' => 'E02001348',
        '0HY' => 'E02001348',
        '0HZ' => 'E02001348',
        '0JB' => 'E02001455',
        '0JD' => 'E02001348',
        '0JE' => 'E02001348',
        '0JF' => 'E02001348',
        '0JG' => 'E02001348',
        '0JH' => 'E02001348',
        '0JJ' => 'E02001348',
        '0JL' => 'E02001348',
        '0JN' => 'E02001348',
        '0JP' => 'E02001348',
        '0JQ' => 'E02001348',
        '0JR' => 'E02001348',
        '0JS' => 'E02001348',
        '0JT' => 'E02001348',
        '0JU' => 'E02001348',
        '0JW' => 'E02001348',
        '0JX' => 'E02001348',
        '0JY' => 'E02001348',
        '0JZ' => 'E02001348',
        '0LA' => 'E02001348',
        '0LB' => 'E02001348',
        '0LD' => 'E02001455',
        '0LE' => 'E02001348',
        '0LF' => 'E02001348',
        '0LG' => 'E02001348',
        '0LH' => 'E02001348',
        '0LJ' => 'E02001348',
        '0LL' => 'E02001348',
        '0LN' => 'E02001348',
        '0LP' => 'E02001348',
        '0LQ' => 'E02001348',
        '0LR' => 'E02001348',
        '0LS' => 'E02001348',
        '0LT' => 'E02001348',
        '0LU' => 'E02001348',
        '0LW' => 'E02001348',
        '0LX' => 'E02001348',
        '0LY' => 'E02001348',
        '0LZ' => 'E02001351',
        '0NA' => 'E02001347',
        '0NB' => 'E02001347',
        '0ND' => 'E02001347',
        '0NE' => 'E02001347',
        '0NF' => 'E02001348',
        '0NG' => 'E02001348',
        '0NH' => 'E02001348',
        '0NJ' => 'E02001348',
        '0NL' => 'E02001347',
        '0NP' => 'E02001348',
        '0NQ' => 'E02001348',
        '0NR' => 'E02001348',
        '0NS' => 'E02001348',
        '0NT' => 'E02001347',
        '0NU' => 'E02001347',
        '0NW' => 'E02001347',
        '0NX' => 'E02001347',
        '0NY' => 'E02001347',
        '0NZ' => 'E02001347',
        '0PA' => 'E02001347',
        '0PB' => 'E02001348',
        '0PD' => 'E02001351',
        '0PF' => 'E02001455',
        '0PG' => 'E02001348',
        '0PH' => 'E02001348',
        '0PJ' => 'E02001348',
        '0PL' => 'E02001351',
        '0PN' => 'E02001348',
        '0PP' => 'E02001351',
        '0PQ' => 'E02001348',
        '0PR' => 'E02001351',
        '0PW' => 'E02001348',
        '0WA' => 'E02001351',
        '0WB' => 'E02001351',
        '0WW' => 'E02001351',
        '0WX' => 'E02001351',
        '0WY' => 'E02001351',
        '0WZ' => 'E02001351',
        '0XA' => 'E02001351',
        '1AA' => 'E02001352',
        '1AB' => 'E02001352',
        '1AD' => 'E02001352',
        '1AE' => 'E02001352',
        '1AF' => 'E02001352',
        '1AG' => 'E02001352',
        '1AH' => 'E02001352',
        '1AJ' => 'E02001352',
        '1AL' => 'E02001352',
        '1AN' => 'E02001352',
        '1AP' => 'E02001352',
        '1AQ' => 'E02001352',
        '1AR' => 'E02001352',
        '1AS' => 'E02001352',
        '1AT' => 'E02001352',
        '1AU' => 'E02001352',
        '1AW' => 'E02001352',
        '1AX' => 'E02001352',
        '1AY' => 'E02001352',
        '1AZ' => 'E02001352',
        '1BA' => 'E02001352',
        '1BB' => 'E02001352',
        '1BD' => 'E02001352',
        '1BE' => 'E02001352',
        '1BF' => 'E02001352',
        '1BG' => 'E02001352',
        '1BH' => 'E02001352',
        '1BJ' => 'E02001352',
        '1BL' => 'E02001352',
        '1BN' => 'E02001352',
        '1BP' => 'E02001352',
        '1BQ' => 'E02001352',
        '1BR' => 'E02001352',
        '1BS' => 'E02001352',
        '1BT' => 'E02001352',
        '1BU' => 'E02001352',
        '1BW' => 'E02001352',
        '1BX' => 'E02001352',
        '1BY' => 'E02001352',
        '1BZ' => 'E02001352',
        '1DA' => 'E02001352',
        '1DB' => 'E02001352',
        '1DD' => 'E02001352',
        '1DE' => 'E02001352',
        '1DF' => 'E02001352',
        '1DG' => 'E02001352',
        '1DH' => 'E02001352',
        '1DJ' => 'E02001352',
        '1DL' => 'E02001352',
        '1DN' => 'E02001352',
        '1DP' => 'E02001352',
        '1DQ' => 'E02001352',
        '1DR' => 'E02001352',
        '1DS' => 'E02001352',
        '1DT' => 'E02001352',
        '1DU' => 'E02001352',
        '1DW' => 'E02001352',
        '1DX' => 'E02001352',
        '1DY' => 'E02001355',
        '1DZ' => 'E02001355',
        '1EA' => 'E02001352',
        '1EB' => 'E02001352',
        '1ED' => 'E02001352',
        '1EE' => 'E02001352',
        '1EF' => 'E02001352',
        '1EG' => 'E02001352',
        '1EH' => 'E02001352',
        '1EJ' => 'E02001352',
        '1EL' => 'E02001352',
        '1EN' => 'E02001352',
        '1EP' => 'E02001352',
        '1EQ' => 'E02001352',
        '1ER' => 'E02001352',
        '1ES' => 'E02001352',
        '1ET' => 'E02001352',
        '1EU' => 'E02001352',
        '1EW' => 'E02001352',
        '1EX' => 'E02001352',
        '1EY' => 'E02001352',
        '1EZ' => 'E02001352',
        '1FB' => 'E02001352',
        '1GA' => 'E02001349',
        '1HB' => 'E02001352',
        '1HE' => 'E02001352',
        '1HF' => 'E02001352',
        '1HG' => 'E02001352',
        '1HH' => 'E02001352',
        '1HJ' => 'E02001352',
        '1HL' => 'E02001352',
        '1HN' => 'E02001352',
        '1HQ' => 'E02001352',
        '1HU' => 'E02001352',
        '1HW' => 'E02001352',
        '1HX' => 'E02001354',
        '1HY' => 'E02001354',
        '1HZ' => 'E02001354',
        '1JA' => 'E02001354',
        '1JB' => 'E02001354',
        '1JD' => 'E02001354',
        '1JE' => 'E02001354',
        '1JF' => 'E02001354',
        '1JG' => 'E02001354',
        '1JH' => 'E02001354',
        '1JJ' => 'E02001354',
        '1JL' => 'E02001354',
        '1JN' => 'E02001349',
        '1JP' => 'E02001354',
        '1JQ' => 'E02001354',
        '1JR' => 'E02001354',
        '1JS' => 'E02001352',
        '1JT' => 'E02001352',
        '1JU' => 'E02001352',
        '1JW' => 'E02001354',
        '1JX' => 'E02001352',
        '1JY' => 'E02001352',
        '1JZ' => 'E02001352',
        '1LA' => 'E02001354',
        '1LB' => 'E02001354',
        '1LD' => 'E02001354',
        '1LE' => 'E02001354',
        '1LF' => 'E02001349',
        '1LG' => 'E02001354',
        '1LH' => 'E02001349',
        '1LJ' => 'E02001352',
        '1LN' => 'E02001377',
        '1LP' => 'E02001352',
        '1LR' => 'E02001352',
        '1LS' => 'E02001352',
        '1LU' => 'E02001352',
        '1LW' => 'E02001348',
        '1LX' => 'E02001352',
        '1LZ' => 'E02001352',
        '1NA' => 'E02001352',
        '1NB' => 'E02001352',
        '1ND' => 'E02001352',
        '1NE' => 'E02001351',
        '1NF' => 'E02001352',
        '1NJ' => 'E02001352',
        '1NL' => 'E02001352',
        '1NN' => 'E02001352',
        '1NP' => 'E02001354',
        '1NR' => 'E02001352',
        '1NW' => 'E02001351',
        '1RB' => 'E02001352',
        '1WA' => 'E02001351',
        '1WB' => 'E02001351',
        '1WU' => 'E02001351',
        '1WW' => 'E02001351',
        '1WX' => 'E02001351',
        '1WY' => 'E02001351',
        '1WZ' => 'E02001354',
        '1YS' => 'E02001351',
        '1YT' => 'E02001351',
        '2AA' => 'E02001352',
        '2AB' => 'E02001352',
        '2AD' => 'E02001349',
        '2AE' => 'E02001349',
        '2AF' => 'E02001349',
        '2AG' => 'E02001352',
        '2AH' => 'E02001352',
        '2AJ' => 'E02001352',
        '2AL' => 'E02001352',
        '2AN' => 'E02001352',
        '2AP' => 'E02001352',
        '2AQ' => 'E02001352',
        '2AR' => 'E02001349',
        '2AS' => 'E02001352',
        '2AT' => 'E02001352',
        '2AU' => 'E02001352',
        '2AW' => 'E02001352',
        '2AX' => 'E02001352',
        '2AY' => 'E02001352',
        '2AZ' => 'E02001352',
        '2BA' => 'E02001352',
        '2BB' => 'E02001352',
        '2BD' => 'E02001352',
        '2BE' => 'E02001352',
        '2BF' => 'E02001352',
        '2BG' => 'E02001352',
        '2BH' => 'E02001352',
        '2BJ' => 'E02001352',
        '2BL' => 'E02001349',
        '2BN' => 'E02001349',
        '2BP' => 'E02001349',
        '2BQ' => 'E02001352',
        '2BR' => 'E02001349',
        '2BS' => 'E02001349',
        '2BT' => 'E02001349',
        '2BU' => 'E02001349',
        '2BW' => 'E02001349',
        '2BX' => 'E02001349',
        '2BY' => 'E02001349',
        '2BZ' => 'E02001349',
        '2DA' => 'E02001349',
        '2DB' => 'E02001348',
        '2DD' => 'E02001348',
        '2DE' => 'E02001349',
        '2DF' => 'E02001349',
        '2DG' => 'E02001349',
        '2DJ' => 'E02001352',
        '2DL' => 'E02001349',
        '2DN' => 'E02001349',
        '2DP' => 'E02001349',
        '2DQ' => 'E02001349',
        '2DR' => 'E02001349',
        '2DT' => 'E02001352',
        '2DW' => 'E02001349',
        '2WA' => 'E02001352',
        '2WW' => 'E02001351',
        '2WX' => 'E02001351',
        '2WY' => 'E02001352',
        '2WZ' => 'E02001352',
        '2YX' => 'E02001351',
        '3AA' => 'E02001349',
        '3AB' => 'E02001349',
        '3AD' => 'E02001349',
        '3AE' => 'E02001349',
        '3AF' => 'E02001349',
        '3AG' => 'E02001349',
        '3AH' => 'E02001349',
        '3AJ' => 'E02001349',
        '3AL' => 'E02001349',
        '3AN' => 'E02001349',
        '3AP' => 'E02001349',
        '3AQ' => 'E02001349',
        '3AR' => 'E02001349',
        '3AS' => 'E02001349',
        '3AT' => 'E02001349',
        '3AU' => 'E02001349',
        '3AW' => 'E02001349',
        '3AX' => 'E02001349',
        '3AY' => 'E02001349',
        '3AZ' => 'E02001349',
        '3BA' => 'E02001349',
        '3BB' => 'E02001349',
        '3BD' => 'E02001349',
        '3BE' => 'E02001349',
        '3BG' => 'E02001349',
        '3BH' => 'E02001349',
        '3BJ' => 'E02001349',
        '3BL' => 'E02001349',
        '3BN' => 'E02001349',
        '3BP' => 'E02001349',
        '3BQ' => 'E02001349',
        '3BR' => 'E02001349',
        '3BS' => 'E02001349',
        '3BT' => 'E02001352',
        '3BU' => 'E02001349',
        '3BW' => 'E02001349',
        '3BX' => 'E02001349',
        '3BY' => 'E02001352',
        '3BZ' => 'E02001349',
        '3DA' => 'E02001352',
        '3DB' => 'E02001349',
        '3DD' => 'E02001349',
        '3DE' => 'E02001352',
        '3DF' => 'E02001349',
        '3DG' => 'E02001352',
        '3DH' => 'E02001349',
        '3DJ' => 'E02001349',
        '3DL' => 'E02001349',
        '3DN' => 'E02001349',
        '3DQ' => 'E02001349',
        '3WA' => 'E02001351',
        '3WB' => 'E02001351',
        '3WX' => 'E02001351',
        '3WY' => 'E02001351',
        '3WZ' => 'E02001351',
        '3XZ' => 'E02001351',
        '3YX' => 'E02001351',
        '4DU' => 'E02001349',
        '4GA' => 'E02001348',
        '4RA' => 'E02001349',
        '4RB' => 'E02001349',
        '4RD' => 'E02001349',
        '4RE' => 'E02001349',
        '4RF' => 'E02001349',
        '4RG' => 'E02001349',
        '4RJ' => 'E02001349',
        '4RL' => 'E02001348',
        '4RN' => 'E02001348',
        '4RP' => 'E02001348',
        '4RQ' => 'E02001349',
        '4RR' => 'E02001348',
        '4RS' => 'E02001349',
        '4RT' => 'E02001349',
        '4RU' => 'E02001349',
        '4RW' => 'E02001348',
        '4RX' => 'E02001348',
        '4RY' => 'E02001348',
        '4RZ' => 'E02001348',
        '4SA' => 'E02001348',
        '4SB' => 'E02001348',
        '4SD' => 'E02001348',
        '4SE' => 'E02001348',
        '4SF' => 'E02001348',
        '4SG' => 'E02001348',
        '4SH' => 'E02001348',
        '4SJ' => 'E02001348',
        '4SL' => 'E02001348',
        '4SN' => 'E02001348',
        '4SP' => 'E02001351',
        '4SR' => 'E02001348',
        '4SS' => 'E02001349',
        '4ST' => 'E02001349',
        '4SW' => 'E02001348',
        '4WA' => 'E02001351',
        '4YW' => 'E02001351',
        '5AA' => 'E02001455',
        '5AB' => 'E02001455',
        '5AD' => 'E02001455',
        '5AE' => 'E02001455',
        '5AF' => 'E02001455',
        '5AG' => 'E02001455',
        '5AH' => 'E02001455',
        '5AJ' => 'E02001455',
        '5AL' => 'E02001455',
        '5AN' => 'E02001455',
        '5AP' => 'E02001455',
        '5AQ' => 'E02001455',
        '5AR' => 'E02001455',
        '5AS' => 'E02001455',
        '5AT' => 'E02001455',
        '5AW' => 'E02001455',
        '5AX' => 'E02001455',
        '5AY' => 'E02001455',
        '5BB' => 'E02001455',
        '5BD' => 'E02001455',
        '5BE' => 'E02001455',
        '5WZ' => 'E02001351',
        '6AA' => 'E02001354',
        '6AB' => 'E02001354',
        '6AD' => 'E02001351',
        '6AE' => 'E02001354',
        '6AF' => 'E02001354',
        '6AG' => 'E02001351',
        '6AH' => 'E02001354',
        '6AJ' => 'E02001354',
        '6AL' => 'E02001354',
        '6AN' => 'E02001354',
        '6AP' => 'E02001354',
        '6AQ' => 'E02001351',
        '6AR' => 'E02001354',
        '6AS' => 'E02001354',
        '6AT' => 'E02001354',
        '6AU' => 'E02001354',
        '6AW' => 'E02001354',
        '6AX' => 'E02001351',
        '6AY' => 'E02001354',
        '6AZ' => 'E02001351',
        '6BA' => 'E02001351',
        '6BB' => 'E02001351',
        '6BD' => 'E02001351',
        '6BE' => 'E02001351',
        '6BF' => 'E02001351',
        '6BG' => 'E02001351',
        '6BH' => 'E02001351',
        '6BJ' => 'E02001351',
        '6BL' => 'E02001351',
        '6BN' => 'E02001351',
        '6BP' => 'E02001351',
        '6BQ' => 'E02001351',
        '6BR' => 'E02001351',
        '6BS' => 'E02001351',
        '6BT' => 'E02001351',
        '6BU' => 'E02001347',
        '6BW' => 'E02001351',
        '6BX' => 'E02001347',
        '6BY' => 'E02001347',
        '6BZ' => 'E02001347',
        '6DA' => 'E02001347',
        '6DB' => 'E02001347',
        '6DD' => 'E02001347',
        '6DE' => 'E02001347',
        '6DF' => 'E02001347',
        '6DG' => 'E02001351',
        '6DH' => 'E02001347',
        '6DJ' => 'E02001347',
        '6DL' => 'E02001347',
        '6DN' => 'E02001351',
        '6DP' => 'E02001351',
        '6DQ' => 'E02001351',
        '6DR' => 'E02001351',
        '6DS' => 'E02001347',
        '6DT' => 'E02001351',
        '6DU' => 'E02001354',
        '6DW' => 'E02001347',
        '6DX' => 'E02001354',
        '6DZ' => 'E02001354',
        '6EA' => 'E02001351',
        '6EB' => 'E02001351',
        '6ED' => 'E02001351',
        '6EE' => 'E02001351',
        '6EF' => 'E02001347',
        '6EG' => 'E02001347',
        '6EH' => 'E02001351',
        '6EJ' => 'E02001351',
        '6EL' => 'E02001351',
        '6EN' => 'E02001351',
        '6EP' => 'E02001354',
        '6EQ' => 'E02001354',
        '6ER' => 'E02001354',
        '6ES' => 'E02001354',
        '6ET' => 'E02001354',
        '6EU' => 'E02001354',
        '6EW' => 'E02001354',
        '6EX' => 'E02001347',
        '6EY' => 'E02001351',
        '6GA' => 'E02001354',
        '6GB' => 'E02001354',
        '6GD' => 'E02001354',
        '6GE' => 'E02001354',
        '6GF' => 'E02001354',
        '6WA' => 'E02001351',
        '6WY' => 'E02001351',
        '6WZ' => 'E02001351',
        '6XA' => 'E02001351',
        '7AA' => 'E02001351',
        '7AB' => 'E02001351',
        '7AD' => 'E02001347',
        '7AE' => 'E02001347',
        '7AF' => 'E02001351',
        '7AG' => 'E02001351',
        '7AH' => 'E02001349',
        '7AJ' => 'E02001351',
        '7AL' => 'E02001351',
        '7AN' => 'E02001351',
        '7AP' => 'E02001351',
        '7AQ' => 'E02001351',
        '7AR' => 'E02001351',
        '7AS' => 'E02001351',
        '7AT' => 'E02001351',
        '7AU' => 'E02001351',
        '7AW' => 'E02001351',
        '7AX' => 'E02001351',
        '7AY' => 'E02001351',
        '7AZ' => 'E02001349',
        '7BA' => 'E02001351',
        '7BB' => 'E02001347',
        '7BD' => 'E02001351',
        '7BE' => 'E02001351',
        '7BF' => 'E02001351',
        '7BG' => 'E02001351',
        '7BH' => 'E02001351',
        '7BJ' => 'E02001351',
        '7BN' => 'E02001354',
        '7BP' => 'E02001351',
        '7BQ' => 'E02001351',
        '7BR' => 'E02001351',
        '7BS' => 'E02001351',
        '7BT' => 'E02001351',
        '7BU' => 'E02001351',
        '7BW' => 'E02001354',
        '7BX' => 'E02001354',
        '7BY' => 'E02001354',
        '7BZ' => 'E02001354',
        '7DA' => 'E02001354',
        '7DB' => 'E02001349',
        '7DE' => 'E02001349',
        '7DL' => 'E02001349',
        '7DP' => 'E02001349',
        '7DS' => 'E02001349',
        '7DT' => 'E02001351',
        '7DU' => 'E02001354',
        '7DX' => 'E02001354',
        '7EA' => 'E02001349',
        '7ED' => 'E02001354',
        '7EE' => 'E02001351',
        '7EF' => 'E02001351',
        '7EG' => 'E02001351',
        '7EH' => 'E02001351',
        '7EL' => 'E02001351',
        '7EQ' => 'E02001354',
        '7ES' => 'E02001354',
        '7ET' => 'E02001354',
        '7EW' => 'E02001351',
        '7EX' => 'E02001351',
        '7HA' => 'E02001351',
        '7HB' => 'E02001351',
        '7HF' => 'E02001354',
        '7HG' => 'E02001354',
        '7HJ' => 'E02001351',
        '7HN' => 'E02001351',
        '7HS' => 'E02001351',
        '7HT' => 'E02001351',
        '7HW' => 'E02001351',
        '7JB' => 'E02001351',
        '7JE' => 'E02001349',
        '7JF' => 'E02001351',
        '7JG' => 'E02001349',
        '7JJ' => 'E02001351',
        '7JL' => 'E02001351',
        '7JN' => 'E02001351',
        '7JP' => 'E02001351',
        '7JR' => 'E02001347',
        '7JS' => 'E02001351',
        '7JT' => 'E02001351',
        '7JU' => 'E02001351',
        '7JX' => 'E02001351',
        '7JZ' => 'E02001351',
        '7LA' => 'E02001351',
        '7LB' => 'E02001351',
        '7LD' => 'E02001354',
        '7LE' => 'E02001351',
        '7LF' => 'E02001351',
        '7LG' => 'E02001351',
        '7LH' => 'E02001351',
        '7LJ' => 'E02001351',
        '7LL' => 'E02001354',
        '7LN' => 'E02001351',
        '7LP' => 'E02001351',
        '7LQ' => 'E02001347',
        '7LR' => 'E02001351',
        '7LS' => 'E02001351',
        '7LT' => 'E02001351',
        '7LU' => 'E02001351',
        '7LW' => 'E02001351',
        '7LX' => 'E02001351',
        '7LY' => 'E02001351',
        '7LZ' => 'E02001351',
        '7NA' => 'E02001351',
        '7NB' => 'E02001351',
        '7WA' => 'E02001351',
        '7WB' => 'E02001351',
        '7WD' => 'E02001351',
        '7WP' => 'E02001351',
        '7WQ' => 'E02001351',
        '7WR' => 'E02001351',
        '7WS' => 'E02001351',
        '7WT' => 'E02001351',
        '7WU' => 'E02001351',
        '7WW' => 'E02001351',
        '7WX' => 'E02001351',
        '7WY' => 'E02001351',
        '7WZ' => 'E02001351',
        '7YU' => 'E02001351',
        '7YW' => 'E02001351',
        '7YX' => 'E02001351',
        '8AA' => 'E02001349',
        '8AB' => 'E02001349',
        '8AD' => 'E02001349',
        '8AE' => 'E02001349',
        '8AF' => 'E02001349',
        '8AG' => 'E02001349',
        '8AH' => 'E02001349',
        '8AJ' => 'E02001349',
        '8AL' => 'E02001349',
        '8AN' => 'E02001349',
        '8AP' => 'E02001349',
        '8AQ' => 'E02001349',
        '8AR' => 'E02001349',
        '8AS' => 'E02001349',
        '8AT' => 'E02001349',
        '8AU' => 'E02001349',
        '8AW' => 'E02001349',
        '8AX' => 'E02001349',
        '8AY' => 'E02001349',
        '8AZ' => 'E02001349',
        '8BA' => 'E02001349',
        '8BB' => 'E02001349',
        '8BD' => 'E02001349',
        '8BE' => 'E02001349',
        '8BF' => 'E02001463',
        '8BG' => 'E02001349',
        '8BH' => 'E02001349',
        '8BJ' => 'E02001349',
        '8BL' => 'E02001349',
        '8BN' => 'E02001349',
        '8BP' => 'E02001349',
        '8BQ' => 'E02001349',
        '8BR' => 'E02001349',
        '8BS' => 'E02001349',
        '8BT' => 'E02001349',
        '8BU' => 'E02001349',
        '8BW' => 'E02001463',
        '8BX' => 'E02001349',
        '8BY' => 'E02001349',
        '8BZ' => 'E02001349',
        '8DA' => 'E02001349',
        '8DB' => 'E02001349',
        '8DD' => 'E02001349',
        '8DE' => 'E02001349',
        '8DF' => 'E02001349',
        '8DG' => 'E02001348',
        '8DH' => 'E02001349',
        '8DJ' => 'E02001348',
        '8DL' => 'E02001348',
        '8DN' => 'E02001348',
        '8DP' => 'E02001349',
        '8DQ' => 'E02001348',
        '8DR' => 'E02001349',
        '8DS' => 'E02001349',
        '8DT' => 'E02001349',
        '8DU' => 'E02001349',
        '8DW' => 'E02001348',
        '8DX' => 'E02001349',
        '8DY' => 'E02001349',
        '8DZ' => 'E02001349',
        '8EA' => 'E02001349',
        '8EB' => 'E02001349',
        '8ED' => 'E02001349',
        '8EE' => 'E02001349',
        '8EF' => 'E02001349',
        '8EG' => 'E02001349',
        '8EH' => 'E02001349',
        '8EJ' => 'E02001463',
        '8EL' => 'E02001351',
        '8EP' => 'E02001349',
        '8EQ' => 'E02001349',
        '8ER' => 'E02001349',
        '8ES' => 'E02001349',
        '8ET' => 'E02001349',
        '8EU' => 'E02001349',
        '8EW' => 'E02001349',
        '8EX' => 'E02001349',
        '8EY' => 'E02001349',
        '8EZ' => 'E02001349',
        '8HA' => 'E02001349',
        '8HB' => 'E02001349',
        '8HD' => 'E02001349',
        '8HE' => 'E02001349',
        '8HF' => 'E02001463',
        '8HG' => 'E02001463',
        '8HH' => 'E02001463',
        '8HJ' => 'E02001463',
        '8HL' => 'E02001349',
        '8HN' => 'E02001349',
        '8HP' => 'E02001463',
        '8HQ' => 'E02001463',
        '8HR' => 'E02001463',
        '8HS' => 'E02001349',
        '8HT' => 'E02001351',
        '8HU' => 'E02001351',
        '8HW' => 'E02001463',
        '8HX' => 'E02001351',
        '8HY' => 'E02001351',
        '8WA' => 'E02001351',
        '8WB' => 'E02001351',
        '8WS' => 'E02001351',
        '8WT' => 'E02001351',
        '8WU' => 'E02001351',
        '8WW' => 'E02001351',
        '8WX' => 'E02001351',
        '8WY' => 'E02001351',
        '8WZ' => 'E02001351',
        '8YX' => 'E02001351',
        '9AA' => 'E02001351',
        '9AD' => 'E02001348',
        '9AE' => 'E02001348',
        '9AF' => 'E02001348',
        '9AG' => 'E02001349',
        '9AH' => 'E02001348',
        '9AJ' => 'E02001348',
        '9AL' => 'E02001348',
        '9AN' => 'E02001348',
        '9AP' => 'E02001348',
        '9AQ' => 'E02001348',
        '9AR' => 'E02001348',
        '9AS' => 'E02001348',
        '9AT' => 'E02001348',
        '9AU' => 'E02001348',
        '9AW' => 'E02001348',
        '9AX' => 'E02001348',
        '9AY' => 'E02001348',
        '9AZ' => 'E02001348',
        '9BA' => 'E02001348',
        '9BB' => 'E02001348',
        '9BD' => 'E02001348',
        '9BE' => 'E02001348',
        '9BF' => 'E02001347',
        '9BG' => 'E02001348',
        '9BH' => 'E02001348',
        '9BJ' => 'E02001348',
        '9BL' => 'E02001348',
        '9BN' => 'E02001348',
        '9BP' => 'E02001348',
        '9BQ' => 'E02001348',
        '9BR' => 'E02001348',
        '9BS' => 'E02001348',
        '9BT' => 'E02001348',
        '9BU' => 'E02001351',
        '9BW' => 'E02001348',
        '9BX' => 'E02001348',
        '9BY' => 'E02001351',
        '9BZ' => 'E02001348',
        '9DA' => 'E02001348',
        '9DB' => 'E02001351',
        '9DD' => 'E02001348',
        '9DE' => 'E02001348',
        '9DF' => 'E02001348',
        '9DG' => 'E02001351',
        '9DH' => 'E02001348',
        '9DJ' => 'E02001348',
        '9DL' => 'E02001347',
        '9DN' => 'E02001348',
        '9DP' => 'E02001348',
        '9DQ' => 'E02001351',
        '9DR' => 'E02001351',
        '9DS' => 'E02001351',
        '9DT' => 'E02001351',
        '9DU' => 'E02001351',
        '9DW' => 'E02001348',
        '9DX' => 'E02001351',
        '9DY' => 'E02001347',
        '9DZ' => 'E02001347',
        '9EA' => 'E02001347',
        '9EB' => 'E02001347',
        '9ED' => 'E02001347',
        '9EE' => 'E02001347',
        '9EF' => 'E02001347',
        '9EG' => 'E02001347',
        '9EH' => 'E02001347',
        '9EJ' => 'E02001347',
        '9EL' => 'E02001347',
        '9EN' => 'E02001348',
        '9EP' => 'E02001347',
        '9EQ' => 'E02001347',
        '9ES' => 'E02001347',
        '9ET' => 'E02001347',
        '9EW' => 'E02001347',
        '9EX' => 'E02001347',
        '9EZ' => 'E02001347',
        '9HA' => 'E02001351',
        '9HB' => 'E02001354',
        '9HD' => 'E02001347',
        '9HE' => 'E02001348',
        '9HG' => 'E02001351',
        '9HH' => 'E02001351',
        '9HJ' => 'E02001351',
        '9HL' => 'E02001347',
        '9HN' => 'E02001347',
        '9HP' => 'E02001351',
        '9HQ' => 'E02001351',
        '9HR' => 'E02001351',
        '9HS' => 'E02001351',
        '9HT' => 'E02001347',
        '9HU' => 'E02001347',
        '9HW' => 'E02001351',
        '9HX' => 'E02001348',
        '9HY' => 'E02001347',
        '9HZ' => 'E02001347',
        '9JA' => 'E02001347',
        '9JB' => 'E02001347',
        '9JD' => 'E02001347',
        '9JE' => 'E02001347',
        '9JF' => 'E02001347',
        '9JG' => 'E02001348',
        '9JH' => 'E02001351',
        '9JJ' => 'E02001348',
        '9JL' => 'E02001348',
        '9JN' => 'E02001347',
        '9JP' => 'E02001351',
        '9JQ' => 'E02001348',
        '9WL' => 'E02001351',
        '9WN' => 'E02001351',
        '9WP' => 'E02001351',
        '9WQ' => 'E02001351',
        '9WR' => 'E02001351',
        '9WS' => 'E02001351',
        '9WT' => 'E02001351',
        '9WU' => 'E02001351',
        '9WW' => 'E02001351',
        '9WX' => 'E02001351',
        '9WY' => 'E02001347',
        '9WZ' => 'E02001351',
        '9XA' => 'E02001351',
        '9YW' => 'E02001351',
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
