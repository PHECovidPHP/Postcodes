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
final class L17
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02001394',
        '0AB' => 'E02001394',
        '0AD' => 'E02001394',
        '0AE' => 'E02001394',
        '0AF' => 'E02001399',
        '0AG' => 'E02001394',
        '0AH' => 'E02001394',
        '0AJ' => 'E02001394',
        '0AL' => 'E02001394',
        '0AN' => 'E02001394',
        '0AP' => 'E02001399',
        '0AQ' => 'E02001394',
        '0AR' => 'E02001394',
        '0AS' => 'E02001399',
        '0AT' => 'E02001399',
        '0AU' => 'E02001394',
        '0AW' => 'E02001394',
        '0AX' => 'E02001394',
        '0AY' => 'E02001399',
        '0AZ' => 'E02001399',
        '0BA' => 'E02001399',
        '0BB' => 'E02001399',
        '0BD' => 'E02001399',
        '0BE' => 'E02001394',
        '0BF' => 'E02001394',
        '0BG' => 'E02001394',
        '0BH' => 'E02001394',
        '0BJ' => 'E02001398',
        '0BL' => 'E02001394',
        '0BN' => 'E02001398',
        '0BP' => 'E02001394',
        '0BQ' => 'E02001399',
        '0BR' => 'E02001394',
        '0BS' => 'E02001394',
        '0BT' => 'E02001394',
        '0BU' => 'E02001394',
        '0BW' => 'E02001398',
        '0BX' => 'E02001394',
        '0BY' => 'E02001398',
        '0BZ' => 'E02001398',
        '0DA' => 'E02001394',
        '0DB' => 'E02001394',
        '0DD' => 'E02001394',
        '0DE' => 'E02001398',
        '0DF' => 'E02001398',
        '0DG' => 'E02001398',
        '0DH' => 'E02001394',
        '0DJ' => 'E02001394',
        '0DL' => 'E02001398',
        '0DN' => 'E02001398',
        '0DP' => 'E02001394',
        '0DQ' => 'E02001398',
        '0DR' => 'E02001394',
        '0DS' => 'E02001394',
        '0DT' => 'E02001394',
        '0DU' => 'E02001394',
        '0DX' => 'E02001394',
        '0DY' => 'E02001398',
        '0DZ' => 'E02001398',
        '0EA' => 'E02001394',
        '0EB' => 'E02001398',
        '0ED' => 'E02001394',
        '0EE' => 'E02001398',
        '0EF' => 'E02001398',
        '0EG' => 'E02001399',
        '0EH' => 'E02001399',
        '0EJ' => 'E02001394',
        '0EL' => 'E02001398',
        '0EN' => 'E02001399',
        '0EQ' => 'E02001399',
        '0ER' => 'E02001394',
        '0ES' => 'E02001398',
        '0ET' => 'E02001398',
        '0EU' => 'E02001398',
        '0EW' => 'E02001398',
        '0EY' => 'E02001394',
        '0EZ' => 'E02001394',
        '0HA' => 'E02001399',
        '0HD' => 'E02001394',
        '0HE' => 'E02001394',
        '0HF' => 'E02001394',
        '0HG' => 'E02001394',
        '0HH' => 'E02001394',
        '0HJ' => 'E02001394',
        '0HP' => 'E02001394',
        '0HQ' => 'E02001394',
        '0WA' => 'E02001394',
        '0WQ' => 'E02001394',
        '0WR' => 'E02001394',
        '0WS' => 'E02001394',
        '0WT' => 'E02001394',
        '0WU' => 'E02001394',
        '0WW' => 'E02001394',
        '0WX' => 'E02001394',
        '0WY' => 'E02001394',
        '0WZ' => 'E02001394',
        '0YT' => 'E02001394',
        '0YU' => 'E02001394',
        '0YW' => 'E02001394',
        '0YX' => 'E02001394',
        '1AA' => 'E02001394',
        '1AB' => 'E02001394',
        '1AD' => 'E02001394',
        '1AE' => 'E02001394',
        '1AF' => 'E02001394',
        '1AG' => 'E02001394',
        '1AH' => 'E02001394',
        '1AJ' => 'E02001394',
        '1AL' => 'E02001394',
        '1AN' => 'E02001394',
        '1AP' => 'E02001394',
        '1AR' => 'E02001394',
        '1AS' => 'E02001394',
        '1AT' => 'E02001394',
        '1AU' => 'E02001394',
        '1AW' => 'E02001394',
        '1AX' => 'E02001394',
        '1AY' => 'E02001394',
        '1AZ' => 'E02001394',
        '1BA' => 'E02001394',
        '1BB' => 'E02001394',
        '1BD' => 'E02001394',
        '1DB' => 'E02001394',
        '1WA' => 'E02001394',
        '1WB' => 'E02001394',
        '1WY' => 'E02001394',
        '1WZ' => 'E02001394',
        '1YX' => 'E02001394',
        '2AA' => 'E02001394',
        '2AB' => 'E02001394',
        '2AD' => 'E02001394',
        '2AE' => 'E02001394',
        '2AF' => 'E02001394',
        '2AG' => 'E02001394',
        '2AH' => 'E02001394',
        '2AJ' => 'E02001394',
        '2AL' => 'E02001394',
        '2AN' => 'E02001394',
        '2AP' => 'E02001384',
        '2AQ' => 'E02001394',
        '2AR' => 'E02001394',
        '2AS' => 'E02001394',
        '2AT' => 'E02001394',
        '2AU' => 'E02001394',
        '2AW' => 'E02001394',
        '2AX' => 'E02001394',
        '2AY' => 'E02001394',
        '2AZ' => 'E02001394',
        '2BA' => 'E02001394',
        '2BB' => 'E02001394',
        '2BD' => 'E02001394',
        '2BE' => 'E02001394',
        '2BG' => 'E02001394',
        '2BH' => 'E02001394',
        '2BJ' => 'E02001384',
        '2BQ' => 'E02001394',
        '2WA' => 'E02001394',
        '2WB' => 'E02001394',
        '2WU' => 'E02001394',
        '2WW' => 'E02001394',
        '2WX' => 'E02001394',
        '2WY' => 'E02001394',
        '2WZ' => 'E02001394',
        '2YT' => 'E02001394',
        '2YU' => 'E02001394',
        '2YW' => 'E02001394',
        '2YX' => 'E02001394',
        '2ZY' => 'E02001394',
        '3AA' => 'E02001394',
        '3AB' => 'E02001394',
        '3AD' => 'E02001389',
        '3AE' => 'E02001394',
        '3AF' => 'E02001394',
        '3AG' => 'E02001394',
        '3AH' => 'E02001394',
        '3AJ' => 'E02001394',
        '3AL' => 'E02001394',
        '3AN' => 'E02001394',
        '3AP' => 'E02001394',
        '3AQ' => 'E02001394',
        '3AR' => 'E02001394',
        '3AS' => 'E02001394',
        '3AT' => 'E02001394',
        '3AU' => 'E02001389',
        '3AW' => 'E02001394',
        '3AX' => 'E02001389',
        '3AY' => 'E02001394',
        '3AZ' => 'E02001394',
        '3BA' => 'E02001394',
        '3BB' => 'E02001394',
        '3BD' => 'E02001394',
        '3BE' => 'E02001389',
        '3BG' => 'E02001389',
        '3BH' => 'E02001389',
        '3BJ' => 'E02001389',
        '3BL' => 'E02001389',
        '3BN' => 'E02001389',
        '3BP' => 'E02001389',
        '3BQ' => 'E02001394',
        '3BS' => 'E02001389',
        '3BT' => 'E02001389',
        '3BU' => 'E02001389',
        '3BW' => 'E02001389',
        '3BX' => 'E02001389',
        '3BY' => 'E02001389',
        '3BZ' => 'E02001394',
        '3DA' => 'E02001389',
        '3DB' => 'E02001389',
        '3DG' => 'E02001394',
        '3DJ' => 'E02001389',
        '3DL' => 'E02001389',
        '3DP' => 'E02001389',
        '3DQ' => 'E02001394',
        '3DS' => 'E02001389',
        '3DT' => 'E02001389',
        '3DU' => 'E02001389',
        '3DX' => 'E02001389',
        '3DY' => 'E02001394',
        '3DZ' => 'E02001394',
        '3ED' => 'E02001394',
        '3EE' => 'E02001394',
        '3EF' => 'E02001394',
        '3EG' => 'E02001394',
        '3EH' => 'E02001394',
        '3EJ' => 'E02001394',
        '3EL' => 'E02001394',
        '3EN' => 'E02001394',
        '3EP' => 'E02001394',
        '3EQ' => 'E02001394',
        '3ER' => 'E02001394',
        '3EZ' => 'E02001394',
        '3WT' => 'E02001394',
        '3WU' => 'E02001394',
        '3WW' => 'E02001394',
        '3WX' => 'E02001394',
        '3WY' => 'E02001394',
        '3WZ' => 'E02001394',
        '3YX' => 'E02001394',
        '4JA' => 'E02001394',
        '4JB' => 'E02001394',
        '4JD' => 'E02001394',
        '4JE' => 'E02001398',
        '4JF' => 'E02001389',
        '4JG' => 'E02001394',
        '4JH' => 'E02001398',
        '4JJ' => 'E02001398',
        '4JL' => 'E02001398',
        '4JN' => 'E02001389',
        '4JP' => 'E02001389',
        '4JQ' => 'E02001398',
        '4JR' => 'E02001389',
        '4JS' => 'E02001398',
        '4JT' => 'E02001398',
        '4JU' => 'E02001398',
        '4JW' => 'E02001389',
        '4JX' => 'E02001389',
        '4JY' => 'E02001389',
        '4JZ' => 'E02001389',
        '4LA' => 'E02001398',
        '4LB' => 'E02001398',
        '4LD' => 'E02001398',
        '4LE' => 'E02001394',
        '4LF' => 'E02001394',
        '4LG' => 'E02001398',
        '4LH' => 'E02001398',
        '4LJ' => 'E02001389',
        '4LL' => 'E02001394',
        '4LQ' => 'E02001398',
        '4LR' => 'E02001398',
        '4LS' => 'E02001398',
        '4LT' => 'E02001398',
        '4LU' => 'E02001398',
        '4LX' => 'E02001398',
        '4NA' => 'E02001398',
        '4ND' => 'E02001398',
        '4NE' => 'E02001394',
        '4NF' => 'E02001398',
        '4NG' => 'E02001398',
        '4NH' => 'E02001398',
        '4NJ' => 'E02001394',
        '4NQ' => 'E02001394',
        '4WR' => 'E02001394',
        '4WS' => 'E02001394',
        '4WT' => 'E02001394',
        '4WU' => 'E02001394',
        '4WW' => 'E02001394',
        '4WX' => 'E02001394',
        '4WY' => 'E02001394',
        '4WZ' => 'E02001394',
        '4ZR' => 'E02001394',
        '5AA' => 'E02001398',
        '5AB' => 'E02001398',
        '5AD' => 'E02001398',
        '5AE' => 'E02001398',
        '5AF' => 'E02001398',
        '5AG' => 'E02001398',
        '5AH' => 'E02001398',
        '5AJ' => 'E02001398',
        '5AL' => 'E02001398',
        '5AN' => 'E02001398',
        '5AP' => 'E02001398',
        '5AQ' => 'E02001398',
        '5AR' => 'E02001398',
        '5AT' => 'E02001398',
        '5AU' => 'E02001398',
        '5AW' => 'E02001398',
        '5AX' => 'E02001398',
        '5AY' => 'E02001398',
        '5AZ' => 'E02001398',
        '5BB' => 'E02001398',
        '5BD' => 'E02001398',
        '5BH' => 'E02001398',
        '5BJ' => 'E02001398',
        '5BL' => 'E02001398',
        '5BN' => 'E02001398',
        '5BQ' => 'E02001398',
        '5BR' => 'E02001398',
        '5BS' => 'E02001398',
        '5BT' => 'E02001398',
        '5BU' => 'E02001398',
        '5BW' => 'E02001394',
        '5BX' => 'E02001398',
        '5BY' => 'E02001398',
        '5BZ' => 'E02001398',
        '5DB' => 'E02001398',
        '5DD' => 'E02001398',
        '5DE' => 'E02001398',
        '5DF' => 'E02001398',
        '5DG' => 'E02001394',
        '5DH' => 'E02001394',
        '5DQ' => 'E02001398',
        '5WA' => 'E02001394',
        '5WB' => 'E02001394',
        '5WD' => 'E02001394',
        '5WU' => 'E02001394',
        '5WW' => 'E02001394',
        '5WX' => 'E02001394',
        '5WY' => 'E02001394',
        '5WZ' => 'E02001394',
        '5YU' => 'E02001394',
        '5YW' => 'E02001394',
        '5YX' => 'E02001394',
        '6AA' => 'E02001402',
        '6AB' => 'E02001402',
        '6AD' => 'E02001402',
        '6AE' => 'E02001402',
        '6AF' => 'E02001402',
        '6AG' => 'E02001402',
        '6AH' => 'E02001402',
        '6AJ' => 'E02001402',
        '6AL' => 'E02001402',
        '6AN' => 'E02001402',
        '6AP' => 'E02001402',
        '6AQ' => 'E02001402',
        '6AR' => 'E02001402',
        '6AS' => 'E02001402',
        '6AT' => 'E02001402',
        '6AU' => 'E02001402',
        '6AW' => 'E02001402',
        '6AX' => 'E02001402',
        '6AY' => 'E02001402',
        '6AZ' => 'E02001402',
        '6BA' => 'E02001402',
        '6BB' => 'E02001402',
        '6BD' => 'E02001399',
        '6BE' => 'E02001399',
        '6BG' => 'E02001402',
        '6BH' => 'E02001399',
        '6BJ' => 'E02001402',
        '6BL' => 'E02001399',
        '6BN' => 'E02001399',
        '6BP' => 'E02001399',
        '6BQ' => 'E02001402',
        '6BR' => 'E02001395',
        '6BS' => 'E02001399',
        '6BT' => 'E02001399',
        '6BU' => 'E02001399',
        '6BW' => 'E02001402',
        '6BX' => 'E02001395',
        '6BY' => 'E02001395',
        '6BZ' => 'E02001395',
        '6DA' => 'E02001395',
        '6DB' => 'E02001394',
        '6DD' => 'E02001394',
        '6DE' => 'E02001394',
        '6DF' => 'E02001394',
        '6DG' => 'E02001394',
        '6DH' => 'E02001394',
        '6DJ' => 'E02001394',
        '6DL' => 'E02001394',
        '6DN' => 'E02001402',
        '6DP' => 'E02001402',
        '6DQ' => 'E02001394',
        '6DR' => 'E02001402',
        '6DS' => 'E02001395',
        '6DT' => 'E02001395',
        '6DW' => 'E02001399',
        '6DX' => 'E02001399',
        '6DY' => 'E02001399',
        '6EA' => 'E02001402',
        '6EB' => 'E02001402',
        '6ED' => 'E02001399',
        '6EE' => 'E02001399',
        '6EF' => 'E02001399',
        '6EG' => 'E02001399',
        '6EH' => 'E02001399',
        '6EQ' => 'E02001399',
        '6ER' => 'E02001402',
        '6ES' => 'E02001402',
        '6ET' => 'E02001402',
        '6EU' => 'E02001402',
        '6EW' => 'E02001402',
        '6EX' => 'E02001402',
        '6GA' => 'E02001402',
        '6GB' => 'E02001402',
        '6GD' => 'E02001402',
        '6GE' => 'E02001402',
        '6WA' => 'E02001394',
        '6WB' => 'E02001394',
        '6WD' => 'E02001394',
        '6WU' => 'E02001394',
        '6WW' => 'E02001394',
        '6WX' => 'E02001394',
        '6WY' => 'E02001394',
        '6WZ' => 'E02001394',
        '6XA' => 'E02001394',
        '6YW' => 'E02001399',
        '6YX' => 'E02001399',
        '6ZY' => 'E02001394',
        '7AA' => 'E02001394',
        '7AD' => 'E02001396',
        '7AE' => 'E02001396',
        '7AF' => 'E02001396',
        '7AG' => 'E02001396',
        '7AH' => 'E02001396',
        '7AJ' => 'E02001398',
        '7AL' => 'E02001398',
        '7AN' => 'E02001398',
        '7AP' => 'E02001398',
        '7AQ' => 'E02001398',
        '7AR' => 'E02001398',
        '7AS' => 'E02001398',
        '7AT' => 'E02001398',
        '7AU' => 'E02001398',
        '7AW' => 'E02001398',
        '7AX' => 'E02001398',
        '7AY' => 'E02001398',
        '7AZ' => 'E02001398',
        '7BA' => 'E02001398',
        '7BB' => 'E02001398',
        '7BD' => 'E02001398',
        '7BE' => 'E02001398',
        '7BF' => 'E02001396',
        '7BG' => 'E02001398',
        '7BH' => 'E02001398',
        '7BJ' => 'E02001398',
        '7BL' => 'E02001398',
        '7BN' => 'E02001396',
        '7BP' => 'E02001396',
        '7BQ' => 'E02001398',
        '7BR' => 'E02001396',
        '7BS' => 'E02001398',
        '7BT' => 'E02001396',
        '7BU' => 'E02001396',
        '7BW' => 'E02001396',
        '7BX' => 'E02001396',
        '7BY' => 'E02001396',
        '7BZ' => 'E02001396',
        '7DA' => 'E02001396',
        '7DB' => 'E02001396',
        '7DD' => 'E02001396',
        '7DE' => 'E02001396',
        '7DF' => 'E02001396',
        '7DG' => 'E02001396',
        '7DH' => 'E02001396',
        '7DJ' => 'E02001396',
        '7DL' => 'E02001396',
        '7DN' => 'E02001396',
        '7DP' => 'E02001396',
        '7DQ' => 'E02001396',
        '7DR' => 'E02001396',
        '7DS' => 'E02001398',
        '7DT' => 'E02001396',
        '7DU' => 'E02001396',
        '7DW' => 'E02001396',
        '7DX' => 'E02001396',
        '7DY' => 'E02001396',
        '7DZ' => 'E02001396',
        '7EA' => 'E02001396',
        '7EB' => 'E02001398',
        '7ED' => 'E02001396',
        '7EE' => 'E02001396',
        '7EF' => 'E02001396',
        '7EG' => 'E02001396',
        '7EJ' => 'E02001394',
        '7EN' => 'E02001396',
        '7EP' => 'E02001396',
        '7EQ' => 'E02001398',
        '7ER' => 'E02001396',
        '7ES' => 'E02001396',
        '7ET' => 'E02001398',
        '7EU' => 'E02001396',
        '7EW' => 'E02001396',
        '7EX' => 'E02001396',
        '7EY' => 'E02001396',
        '7EZ' => 'E02001396',
        '7HA' => 'E02001398',
        '7HB' => 'E02001398',
        '7HD' => 'E02001398',
        '7HF' => 'E02001398',
        '7HH' => 'E02001398',
        '7HJ' => 'E02001396',
        '7HN' => 'E02001396',
        '7HP' => 'E02001396',
        '7HR' => 'E02001396',
        '7HS' => 'E02001398',
        '7HT' => 'E02001396',
        '7HU' => 'E02001398',
        '7HW' => 'E02001396',
        '7HX' => 'E02001396',
        '7HY' => 'E02001396',
        '7HZ' => 'E02001396',
        '7JA' => 'E02001398',
        '7JB' => 'E02001396',
        '7JD' => 'E02001396',
        '7JE' => 'E02001394',
        '7JF' => 'E02001396',
        '7JG' => 'E02001394',
        '7JH' => 'E02001394',
        '7JJ' => 'E02001396',
        '7JL' => 'E02001396',
        '7JN' => 'E02001394',
        '7JQ' => 'E02001398',
        '7JW' => 'E02001394',
        '7WA' => 'E02001394',
        '7WB' => 'E02001394',
        '7WN' => 'E02001394',
        '7WP' => 'E02001394',
        '7WQ' => 'E02001394',
        '7WR' => 'E02001394',
        '7WS' => 'E02001394',
        '7WT' => 'E02001394',
        '7WU' => 'E02001394',
        '7WW' => 'E02001394',
        '7WX' => 'E02001398',
        '7WY' => 'E02001398',
        '7WZ' => 'E02001398',
        '7YH' => 'E02001394',
        '7YP' => 'E02001394',
        '7YQ' => 'E02001394',
        '7YR' => 'E02001394',
        '7YS' => 'E02001394',
        '7YT' => 'E02001394',
        '7YU' => 'E02001394',
        '7YW' => 'E02001394',
        '8BA' => 'E02001394',
        '8FB' => 'E02001394',
        '8FD' => 'E02001394',
        '8FE' => 'E02001394',
        '8FF' => 'E02001394',
        '8FG' => 'E02001394',
        '8FH' => 'E02001394',
        '8FJ' => 'E02001394',
        '8FL' => 'E02001394',
        '8FN' => 'E02001394',
        '8FP' => 'E02001394',
        '8FQ' => 'E02001394',
        '8FR' => 'E02001394',
        '8FS' => 'E02001394',
        '8FT' => 'E02001394',
        '8FW' => 'E02001389',
        '8FX' => 'E02001394',
        '8FY' => 'E02001394',
        '8FZ' => 'E02001394',
        '8GA' => 'E02001394',
        '8SJ' => 'E02001398',
        '8SL' => 'E02001398',
        '8SN' => 'E02001398',
        '8SP' => 'E02001398',
        '8SR' => 'E02001398',
        '8SS' => 'E02001398',
        '8ST' => 'E02001394',
        '8SU' => 'E02001394',
        '8SW' => 'E02001394',
        '8SX' => 'E02001398',
        '8SY' => 'E02001398',
        '8SZ' => 'E02001398',
        '8TA' => 'E02001389',
        '8TB' => 'E02001389',
        '8TD' => 'E02001389',
        '8TE' => 'E02001389',
        '8TG' => 'E02001389',
        '8TH' => 'E02001389',
        '8TJ' => 'E02001389',
        '8TL' => 'E02001389',
        '8TN' => 'E02001394',
        '8TP' => 'E02001394',
        '8TQ' => 'E02001389',
        '8TR' => 'E02001394',
        '8TS' => 'E02001394',
        '8TT' => 'E02001394',
        '8TU' => 'E02001394',
        '8TX' => 'E02001394',
        '8TY' => 'E02001394',
        '8TZ' => 'E02001394',
        '8UA' => 'E02001394',
        '8UB' => 'E02001394',
        '8UD' => 'E02001394',
        '8UE' => 'E02001394',
        '8UF' => 'E02001394',
        '8UG' => 'E02001389',
        '8UH' => 'E02001389',
        '8UJ' => 'E02001389',
        '8UL' => 'E02001389',
        '8UN' => 'E02001394',
        '8UP' => 'E02001394',
        '8UQ' => 'E02001394',
        '8UR' => 'E02001394',
        '8US' => 'E02001398',
        '8UT' => 'E02001389',
        '8UU' => 'E02001394',
        '8UW' => 'E02001394',
        '8UX' => 'E02001394',
        '8UY' => 'E02001398',
        '8UZ' => 'E02001398',
        '8WA' => 'E02001394',
        '8WB' => 'E02001394',
        '8WD' => 'E02001394',
        '8WE' => 'E02001394',
        '8WJ' => 'E02001394',
        '8WL' => 'E02001394',
        '8WN' => 'E02001394',
        '8WP' => 'E02001394',
        '8WQ' => 'E02001394',
        '8WR' => 'E02001394',
        '8WS' => 'E02001394',
        '8WT' => 'E02001394',
        '8WU' => 'E02001394',
        '8WW' => 'E02001394',
        '8WX' => 'E02001394',
        '8WY' => 'E02001394',
        '8WZ' => 'E02001394',
        '8XA' => 'E02001398',
        '8XB' => 'E02001394',
        '8XD' => 'E02001398',
        '8XE' => 'E02001394',
        '8XF' => 'E02001394',
        '8XG' => 'E02001394',
        '8XH' => 'E02001398',
        '8XJ' => 'E02001398',
        '8XL' => 'E02001398',
        '8XN' => 'E02001398',
        '8XP' => 'E02001398',
        '8XQ' => 'E02001394',
        '8XR' => 'E02001394',
        '8XS' => 'E02001394',
        '8XT' => 'E02001398',
        '8XU' => 'E02001398',
        '8XW' => 'E02001398',
        '8XX' => 'E02001398',
        '8XY' => 'E02001398',
        '8XZ' => 'E02001398',
        '8YA' => 'E02001398',
        '8YB' => 'E02001394',
        '8YD' => 'E02001394',
        '8YE' => 'E02001389',
        '8YG' => 'E02001398',
        '8YJ' => 'E02001398',
        '8YL' => 'E02001394',
        '8YN' => 'E02001394',
        '8YP' => 'E02001389',
        '8YQ' => 'E02001398',
        '8YR' => 'E02001394',
        '8YS' => 'E02001389',
        '8YT' => 'E02001389',
        '8YU' => 'E02001389',
        '8YW' => 'E02001394',
        '8YX' => 'E02001389',
        '8YY' => 'E02001389',
        '8YZ' => 'E02001389',
        '9NZ' => 'E02001394',
        '9PA' => 'E02001398',
        '9PB' => 'E02001398',
        '9PD' => 'E02001398',
        '9PE' => 'E02001398',
        '9PF' => 'E02001398',
        '9PG' => 'E02001398',
        '9PH' => 'E02001398',
        '9PJ' => 'E02001398',
        '9PN' => 'E02001398',
        '9PP' => 'E02001398',
        '9PQ' => 'E02001398',
        '9PR' => 'E02001398',
        '9PS' => 'E02001398',
        '9PT' => 'E02001398',
        '9PU' => 'E02001398',
        '9PW' => 'E02001398',
        '9PX' => 'E02001398',
        '9PY' => 'E02001398',
        '9PZ' => 'E02001398',
        '9QA' => 'E02001398',
        '9QB' => 'E02001398',
        '9QD' => 'E02001398',
        '9QE' => 'E02001398',
        '9QF' => 'E02001398',
        '9QG' => 'E02001398',
        '9QH' => 'E02001398',
        '9QJ' => 'E02001398',
        '9QL' => 'E02001398',
        '9QN' => 'E02001398',
        '9QP' => 'E02001398',
        '9QQ' => 'E02001398',
        '9QR' => 'E02001398',
        '9QS' => 'E02001398',
        '9QT' => 'E02001398',
        '9QU' => 'E02001398',
        '9QW' => 'E02001398',
        '9QX' => 'E02001398',
        '9QY' => 'E02001398',
        '9QZ' => 'E02001398',
        '9RA' => 'E02001398',
        '9RB' => 'E02001398',
        '9RD' => 'E02001398',
        '9RE' => 'E02001398',
        '9RF' => 'E02001398',
        '9RG' => 'E02001398',
        '9RH' => 'E02001398',
        '9RJ' => 'E02001398',
        '9RL' => 'E02001398',
        '9RN' => 'E02001398',
        '9RQ' => 'E02001398',
        '9RR' => 'E02001398',
        '9RS' => 'E02001394',
        '9RW' => 'E02001398',
        '9WA' => 'E02001394',
        '9WS' => 'E02001394',
        '9WT' => 'E02001394',
        '9WU' => 'E02001394',
        '9WW' => 'E02001394',
        '9WX' => 'E02001394',
        '9WY' => 'E02001394',
        '9WZ' => 'E02001394',
        '9YX' => 'E02001394',
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
