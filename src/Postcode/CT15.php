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
final class CT15
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '4AA' => 'E02005048',
        '4AB' => 'E02005048',
        '4AD' => 'E02005046',
        '4AE' => 'E02005046',
        '4AF' => 'E02005046',
        '4AG' => 'E02005046',
        '4AH' => 'E02005046',
        '4AJ' => 'E02005046',
        '4AL' => 'E02005046',
        '4AN' => 'E02005046',
        '4AP' => 'E02005052',
        '4AQ' => 'E02005046',
        '4AR' => 'E02005048',
        '4AS' => 'E02005046',
        '4AT' => 'E02005046',
        '4AU' => 'E02005046',
        '4AW' => 'E02005046',
        '4AX' => 'E02005048',
        '4AY' => 'E02005048',
        '4AZ' => 'E02005048',
        '4BA' => 'E02005048',
        '4BB' => 'E02005048',
        '4BD' => 'E02005048',
        '4BE' => 'E02005048',
        '4BF' => 'E02005046',
        '4BG' => 'E02005048',
        '4BH' => 'E02005048',
        '4BJ' => 'E02005048',
        '4BL' => 'E02005048',
        '4BN' => 'E02005048',
        '4BP' => 'E02005048',
        '4BQ' => 'E02005048',
        '4BS' => 'E02005048',
        '4BT' => 'E02005048',
        '4BU' => 'E02005048',
        '4BW' => 'E02005048',
        '4BX' => 'E02005048',
        '4BY' => 'E02005048',
        '4BZ' => 'E02005048',
        '4DA' => 'E02005048',
        '4DB' => 'E02005048',
        '4DD' => 'E02005048',
        '4DE' => 'E02005048',
        '4DF' => 'E02005048',
        '4DG' => 'E02005048',
        '4DH' => 'E02005048',
        '4DJ' => 'E02005048',
        '4DL' => 'E02005048',
        '4DN' => 'E02005048',
        '4DP' => 'E02005048',
        '4DQ' => 'E02005048',
        '4DR' => 'E02005048',
        '4DS' => 'E02005046',
        '4DT' => 'E02005046',
        '4DU' => 'E02005046',
        '4DW' => 'E02005048',
        '4DX' => 'E02005046',
        '4DY' => 'E02005046',
        '4DZ' => 'E02005046',
        '4EA' => 'E02005046',
        '4EB' => 'E02005046',
        '4ED' => 'E02005048',
        '4EE' => 'E02005046',
        '4EF' => 'E02005048',
        '4EG' => 'E02005046',
        '4EH' => 'E02005048',
        '4EJ' => 'E02005048',
        '4EL' => 'E02005046',
        '4EN' => 'E02005046',
        '4EP' => 'E02005046',
        '4EQ' => 'E02005046',
        '4ER' => 'E02005046',
        '4ES' => 'E02005046',
        '4ET' => 'E02005046',
        '4EU' => 'E02005046',
        '4EW' => 'E02005046',
        '4EX' => 'E02005046',
        '4EY' => 'E02005046',
        '4EZ' => 'E02005046',
        '4FA' => 'E02005046',
        '4FB' => 'E02005046',
        '4FD' => 'E02005048',
        '4FE' => 'E02005048',
        '4FF' => 'E02005048',
        '4GA' => 'E02005052',
        '4GB' => 'E02005052',
        '4GD' => 'E02005046',
        '4GE' => 'E02005046',
        '4GF' => 'E02005046',
        '4GH' => 'E02005046',
        '4GJ' => 'E02005046',
        '4GL' => 'E02005046',
        '4GN' => 'E02005052',
        '4GP' => 'E02005048',
        '4GQ' => 'E02005052',
        '4HA' => 'E02005046',
        '4HB' => 'E02005046',
        '4HD' => 'E02005046',
        '4HE' => 'E02005046',
        '4HF' => 'E02005046',
        '4HG' => 'E02005046',
        '4HH' => 'E02005046',
        '4HJ' => 'E02005046',
        '4HL' => 'E02005048',
        '4HN' => 'E02005046',
        '4HP' => 'E02005046',
        '4HQ' => 'E02005046',
        '4HR' => 'E02005046',
        '4HS' => 'E02005046',
        '4HT' => 'E02005046',
        '4HU' => 'E02005046',
        '4HW' => 'E02005046',
        '4HX' => 'E02005046',
        '4HY' => 'E02005046',
        '4HZ' => 'E02005046',
        '4JA' => 'E02005046',
        '4JB' => 'E02005046',
        '4JD' => 'E02005046',
        '4JE' => 'E02005046',
        '4JF' => 'E02005046',
        '4JG' => 'E02005046',
        '4JH' => 'E02005046',
        '4JJ' => 'E02005046',
        '4JL' => 'E02005046',
        '4JN' => 'E02005046',
        '4JP' => 'E02005046',
        '4JQ' => 'E02005046',
        '4JR' => 'E02005046',
        '4JS' => 'E02005046',
        '4JT' => 'E02005046',
        '4JU' => 'E02005046',
        '4JW' => 'E02005046',
        '4JX' => 'E02005046',
        '4JY' => 'E02005046',
        '4JZ' => 'E02005046',
        '4LA' => 'E02005046',
        '4LB' => 'E02005046',
        '4LD' => 'E02005046',
        '4LE' => 'E02005046',
        '4LF' => 'E02005046',
        '4LG' => 'E02005046',
        '4LH' => 'E02005046',
        '4LJ' => 'E02005046',
        '4LL' => 'E02005046',
        '4LN' => 'E02005046',
        '4LP' => 'E02005046',
        '4LQ' => 'E02005046',
        '4LS' => 'E02005046',
        '4LT' => 'E02005046',
        '4LW' => 'E02005046',
        '4LX' => 'E02005048',
        '4LY' => 'E02005048',
        '4NA' => 'E02005046',
        '4NB' => 'E02005048',
        '4ND' => 'E02005048',
        '4NH' => 'E02005046',
        '4NJ' => 'E02005046',
        '4NL' => 'E02005048',
        '4NP' => 'E02005046',
        '4NR' => 'E02005046',
        '4NS' => 'E02005046',
        '4NW' => 'E02005046',
        '4RA' => 'E02005041',
        '4RB' => 'E02005041',
        '4RD' => 'E02005046',
        '4WW' => 'E02005046',
        '4XQ' => 'E02005052',
        '4XT' => 'E02005046',
        '4YB' => 'E02005052',
        '5AA' => 'E02005048',
        '5AB' => 'E02005048',
        '5AD' => 'E02005048',
        '5AE' => 'E02005048',
        '5AF' => 'E02005048',
        '5AG' => 'E02005048',
        '5AH' => 'E02005048',
        '5AJ' => 'E02005048',
        '5AL' => 'E02005048',
        '5AN' => 'E02005048',
        '5AP' => 'E02005048',
        '5AQ' => 'E02005048',
        '5AR' => 'E02005048',
        '5AS' => 'E02005048',
        '5AT' => 'E02005048',
        '5AU' => 'E02005048',
        '5AW' => 'E02005048',
        '5AX' => 'E02005048',
        '5AY' => 'E02005048',
        '5AZ' => 'E02005048',
        '5BA' => 'E02005048',
        '5BB' => 'E02005048',
        '5BD' => 'E02005048',
        '5BE' => 'E02005048',
        '5BF' => 'E02005048',
        '5BG' => 'E02005048',
        '5BH' => 'E02005048',
        '5BJ' => 'E02005048',
        '5BL' => 'E02005048',
        '5BN' => 'E02005048',
        '5BP' => 'E02005048',
        '5BQ' => 'E02005048',
        '5BS' => 'E02005048',
        '5BT' => 'E02005048',
        '5BU' => 'E02005048',
        '5BW' => 'E02005048',
        '5BX' => 'E02005048',
        '5BY' => 'E02005048',
        '5BZ' => 'E02005048',
        '5DA' => 'E02005048',
        '5DB' => 'E02005048',
        '5DD' => 'E02005048',
        '5DE' => 'E02005048',
        '5DF' => 'E02005048',
        '5DG' => 'E02005048',
        '5DH' => 'E02005048',
        '5DJ' => 'E02005048',
        '5DL' => 'E02005052',
        '5DN' => 'E02005049',
        '5DP' => 'E02005049',
        '5DQ' => 'E02005048',
        '5DR' => 'E02005052',
        '5DS' => 'E02005052',
        '5DT' => 'E02005052',
        '5DU' => 'E02005052',
        '5DW' => 'E02005049',
        '5DX' => 'E02005052',
        '5DY' => 'E02005052',
        '5DZ' => 'E02005052',
        '5EA' => 'E02005052',
        '5EB' => 'E02005052',
        '5ED' => 'E02005052',
        '5EE' => 'E02005052',
        '5EF' => 'E02005052',
        '5EG' => 'E02005052',
        '5EH' => 'E02005052',
        '5EJ' => 'E02005052',
        '5EL' => 'E02005052',
        '5EN' => 'E02005052',
        '5EP' => 'E02005052',
        '5EQ' => 'E02005052',
        '5ER' => 'E02005052',
        '5ES' => 'E02005052',
        '5ET' => 'E02005052',
        '5EU' => 'E02005052',
        '5EW' => 'E02005052',
        '5EX' => 'E02005052',
        '5EY' => 'E02005052',
        '5EZ' => 'E02005050',
        '5FA' => 'E02005052',
        '5FB' => 'E02005052',
        '5FD' => 'E02005052',
        '5FE' => 'E02005052',
        '5FF' => 'E02005052',
        '5FG' => 'E02005052',
        '5FH' => 'E02005050',
        '5FJ' => 'E02005048',
        '5FL' => 'E02005052',
        '5GA' => 'E02005050',
        '5GB' => 'E02005050',
        '5GD' => 'E02005052',
        '5GG' => 'E02005050',
        '5GR' => 'E02005050',
        '5GZ' => 'E02005052',
        '5HA' => 'E02005050',
        '5HB' => 'E02005050',
        '5HD' => 'E02005048',
        '5HE' => 'E02005048',
        '5HF' => 'E02005052',
        '5HG' => 'E02005052',
        '5HH' => 'E02005052',
        '5HJ' => 'E02005052',
        '5HL' => 'E02005052',
        '5HN' => 'E02005052',
        '5HP' => 'E02005048',
        '5HQ' => 'E02005052',
        '5HR' => 'E02005048',
        '5HS' => 'E02005048',
        '5HT' => 'E02005048',
        '5HU' => 'E02005048',
        '5HW' => 'E02005049',
        '5HX' => 'E02005048',
        '5HY' => 'E02005048',
        '5HZ' => 'E02005048',
        '5JA' => 'E02005048',
        '5JB' => 'E02005052',
        '5JD' => 'E02005052',
        '5JE' => 'E02005052',
        '5JF' => 'E02005052',
        '5JG' => 'E02005052',
        '5JH' => 'E02005052',
        '5JJ' => 'E02005049',
        '5JL' => 'E02005049',
        '5JN' => 'E02005049',
        '5JP' => 'E02005049',
        '5JQ' => 'E02005052',
        '5JR' => 'E02005049',
        '5JS' => 'E02005049',
        '5JT' => 'E02005049',
        '5JU' => 'E02005049',
        '5JW' => 'E02005049',
        '5JX' => 'E02005049',
        '5JY' => 'E02005049',
        '5JZ' => 'E02005049',
        '5LA' => 'E02005049',
        '5LB' => 'E02005049',
        '5LD' => 'E02005049',
        '5LE' => 'E02005052',
        '5LF' => 'E02005052',
        '5LG' => 'E02005052',
        '5LH' => 'E02005052',
        '5LJ' => 'E02005052',
        '5LL' => 'E02005049',
        '5LN' => 'E02005049',
        '5LP' => 'E02005052',
        '5LR' => 'E02005052',
        '5LS' => 'E02005048',
        '5LT' => 'E02005052',
        '5LU' => 'E02005052',
        '5LX' => 'E02005052',
        '5LY' => 'E02005052',
        '5LZ' => 'E02005052',
        '5NA' => 'E02005049',
        '5NB' => 'E02005052',
        '5ND' => 'E02005052',
        '5NE' => 'E02005048',
        '5NH' => 'E02005048',
        '5WA' => 'E02005048',
        '5WF' => 'E02005048',
        '5WJ' => 'E02005048',
        '5XP' => 'E02005048',
        '5YB' => 'E02005048',
        '5YG' => 'E02005052',
        '5YQ' => 'E02005052',
        '6AA' => 'E02005049',
        '6AB' => 'E02005049',
        '6AD' => 'E02005049',
        '6AE' => 'E02005049',
        '6AF' => 'E02005049',
        '6AG' => 'E02005049',
        '6AH' => 'E02005049',
        '6AJ' => 'E02005049',
        '6AL' => 'E02005049',
        '6AN' => 'E02005049',
        '6AP' => 'E02005049',
        '6AQ' => 'E02005049',
        '6AR' => 'E02005049',
        '6AS' => 'E02005049',
        '6AT' => 'E02005049',
        '6AU' => 'E02005049',
        '6AW' => 'E02005049',
        '6AX' => 'E02005049',
        '6AY' => 'E02005049',
        '6AZ' => 'E02005049',
        '6BA' => 'E02005049',
        '6BB' => 'E02005049',
        '6BD' => 'E02005049',
        '6BE' => 'E02005049',
        '6BF' => 'E02005049',
        '6BG' => 'E02005049',
        '6BH' => 'E02005049',
        '6BJ' => 'E02005049',
        '6BL' => 'E02005049',
        '6BN' => 'E02005049',
        '6BP' => 'E02005049',
        '6BQ' => 'E02005049',
        '6BS' => 'E02005049',
        '6BT' => 'E02005049',
        '6BU' => 'E02005049',
        '6BW' => 'E02005049',
        '6BX' => 'E02005049',
        '6BY' => 'E02005049',
        '6BZ' => 'E02005049',
        '6DA' => 'E02005049',
        '6DB' => 'E02005049',
        '6DD' => 'E02005049',
        '6DE' => 'E02005049',
        '6DF' => 'E02005049',
        '6DG' => 'E02005049',
        '6DH' => 'E02005049',
        '6DJ' => 'E02005049',
        '6DL' => 'E02005049',
        '6DN' => 'E02005049',
        '6DP' => 'E02005049',
        '6DQ' => 'E02005049',
        '6DR' => 'E02005049',
        '6DS' => 'E02005049',
        '6DT' => 'E02005049',
        '6DU' => 'E02005049',
        '6DW' => 'E02005049',
        '6DX' => 'E02005049',
        '6DY' => 'E02005049',
        '6DZ' => 'E02005049',
        '6EA' => 'E02005049',
        '6EB' => 'E02005049',
        '6ED' => 'E02005049',
        '6EE' => 'E02005049',
        '6EF' => 'E02005049',
        '6EG' => 'E02005049',
        '6EH' => 'E02005049',
        '6EJ' => 'E02005049',
        '6EL' => 'E02005049',
        '6EN' => 'E02005049',
        '6EP' => 'E02005049',
        '6EQ' => 'E02005049',
        '6ER' => 'E02005049',
        '6ES' => 'E02005049',
        '6ET' => 'E02005049',
        '6EU' => 'E02005049',
        '6EW' => 'E02005049',
        '6EX' => 'E02005049',
        '6EY' => 'E02005049',
        '6EZ' => 'E02005049',
        '6FA' => 'E02005049',
        '6FB' => 'E02005049',
        '6FD' => 'E02005049',
        '6FT' => 'E02005049',
        '6GA' => 'E02005049',
        '6GB' => 'E02005049',
        '6GD' => 'E02005052',
        '6GE' => 'E02005049',
        '6GF' => 'E02005049',
        '6GG' => 'E02005049',
        '6GL' => 'E02005049',
        '6GN' => 'E02005052',
        '6GY' => 'E02005049',
        '6HA' => 'E02005049',
        '6HB' => 'E02005049',
        '6HD' => 'E02005049',
        '6HE' => 'E02005049',
        '6HF' => 'E02005049',
        '6HG' => 'E02005049',
        '6HH' => 'E02005049',
        '6HJ' => 'E02005049',
        '6HL' => 'E02005049',
        '6HN' => 'E02005049',
        '6HP' => 'E02005049',
        '6HQ' => 'E02005049',
        '6HR' => 'E02005049',
        '6HS' => 'E02005049',
        '6HT' => 'E02005049',
        '6HU' => 'E02005049',
        '6HW' => 'E02005049',
        '6HX' => 'E02005049',
        '6HY' => 'E02005049',
        '6HZ' => 'E02005049',
        '6JA' => 'E02005049',
        '6JB' => 'E02005049',
        '6JD' => 'E02005049',
        '6JE' => 'E02005049',
        '6JF' => 'E02005049',
        '6JJ' => 'E02005049',
        '6JL' => 'E02005049',
        '6JP' => 'E02005049',
        '6JQ' => 'E02005049',
        '6LA' => 'E02005049',
        '6LB' => 'E02005049',
        '6SS' => 'E02005049',
        '6TF' => 'E02005049',
        '6WA' => 'E02005052',
        '6WD' => 'E02005052',
        '6WG' => 'E02005049',
        '6WT' => 'E02005052',
        '6YQ' => 'E02005052',
        '6YU' => 'E02005049',
        '6YY' => 'E02005049',
        '6YZ' => 'E02005049',
        '7AA' => 'E02005054',
        '7AB' => 'E02005054',
        '7AD' => 'E02005054',
        '7AE' => 'E02005054',
        '7AF' => 'E02005054',
        '7AG' => 'E02005054',
        '7AH' => 'E02005054',
        '7AJ' => 'E02005054',
        '7AL' => 'E02005054',
        '7AN' => 'E02005054',
        '7AP' => 'E02005054',
        '7AQ' => 'E02005054',
        '7AR' => 'E02005054',
        '7AS' => 'E02005054',
        '7AT' => 'E02005054',
        '7AU' => 'E02005054',
        '7AW' => 'E02005054',
        '7AX' => 'E02005054',
        '7AY' => 'E02005054',
        '7AZ' => 'E02005054',
        '7BA' => 'E02005054',
        '7BB' => 'E02005054',
        '7BD' => 'E02005054',
        '7BE' => 'E02005054',
        '7BF' => 'E02005054',
        '7BG' => 'E02005054',
        '7BH' => 'E02005054',
        '7BJ' => 'E02005054',
        '7BL' => 'E02005054',
        '7BN' => 'E02005054',
        '7BP' => 'E02005054',
        '7BQ' => 'E02005054',
        '7BS' => 'E02005054',
        '7BT' => 'E02005054',
        '7BU' => 'E02005054',
        '7BW' => 'E02005054',
        '7BX' => 'E02005054',
        '7BY' => 'E02005054',
        '7BZ' => 'E02005054',
        '7DA' => 'E02005054',
        '7DB' => 'E02005054',
        '7DD' => 'E02005054',
        '7DE' => 'E02005054',
        '7DF' => 'E02005054',
        '7DG' => 'E02005054',
        '7DH' => 'E02005054',
        '7DJ' => 'E02005054',
        '7DL' => 'E02005054',
        '7DN' => 'E02005054',
        '7DP' => 'E02005054',
        '7DQ' => 'E02005051',
        '7DR' => 'E02005054',
        '7DS' => 'E02005054',
        '7DT' => 'E02005054',
        '7DU' => 'E02005054',
        '7DW' => 'E02005054',
        '7DX' => 'E02005054',
        '7DY' => 'E02005054',
        '7DZ' => 'E02005054',
        '7EA' => 'E02005054',
        '7EB' => 'E02005050',
        '7ED' => 'E02005054',
        '7EE' => 'E02005054',
        '7EF' => 'E02005054',
        '7EG' => 'E02005054',
        '7EH' => 'E02005054',
        '7EJ' => 'E02005054',
        '7EL' => 'E02005054',
        '7EN' => 'E02005054',
        '7EP' => 'E02005050',
        '7EQ' => 'E02005054',
        '7ER' => 'E02005050',
        '7ES' => 'E02005050',
        '7ET' => 'E02005050',
        '7EU' => 'E02005050',
        '7EW' => 'E02005054',
        '7EX' => 'E02005050',
        '7EY' => 'E02005050',
        '7EZ' => 'E02005102',
        '7FA' => 'E02005050',
        '7FB' => 'E02005054',
        '7FD' => 'E02005054',
        '7FE' => 'E02005054',
        '7FF' => 'E02005054',
        '7FG' => 'E02005054',
        '7FH' => 'E02005054',
        '7GA' => 'E02005050',
        '7GB' => 'E02005050',
        '7GD' => 'E02005050',
        '7GE' => 'E02005052',
        '7GF' => 'E02005052',
        '7GH' => 'E02005102',
        '7GJ' => 'E02005052',
        '7GL' => 'E02005050',
        '7GP' => 'E02005050',
        '7GY' => 'E02005102',
        '7GZ' => 'E02005046',
        '7HA' => 'E02005102',
        '7HB' => 'E02005102',
        '7HD' => 'E02005102',
        '7HE' => 'E02005102',
        '7HF' => 'E02005102',
        '7HG' => 'E02005102',
        '7HH' => 'E02005102',
        '7HJ' => 'E02005102',
        '7HL' => 'E02005102',
        '7HN' => 'E02005102',
        '7HP' => 'E02005102',
        '7HQ' => 'E02005102',
        '7HR' => 'E02005102',
        '7HS' => 'E02005102',
        '7HT' => 'E02005102',
        '7HU' => 'E02005102',
        '7HW' => 'E02005102',
        '7HX' => 'E02005102',
        '7HY' => 'E02005102',
        '7HZ' => 'E02005102',
        '7JA' => 'E02005046',
        '7JB' => 'E02005046',
        '7JD' => 'E02005046',
        '7JE' => 'E02005046',
        '7JF' => 'E02005046',
        '7JG' => 'E02005046',
        '7JH' => 'E02005046',
        '7JJ' => 'E02005046',
        '7JL' => 'E02005050',
        '7JN' => 'E02005050',
        '7JP' => 'E02005050',
        '7JQ' => 'E02005046',
        '7JR' => 'E02005050',
        '7JS' => 'E02005050',
        '7JT' => 'E02005050',
        '7JU' => 'E02005050',
        '7JW' => 'E02005048',
        '7JX' => 'E02005050',
        '7JY' => 'E02005050',
        '7JZ' => 'E02005050',
        '7LA' => 'E02005050',
        '7LB' => 'E02005050',
        '7LD' => 'E02005050',
        '7LE' => 'E02005048',
        '7LF' => 'E02005046',
        '7LG' => 'E02005046',
        '7LH' => 'E02005046',
        '7LJ' => 'E02005046',
        '7LL' => 'E02005048',
        '7LN' => 'E02005046',
        '7LP' => 'E02005048',
        '7LQ' => 'E02005046',
        '7LR' => 'E02005046',
        '7LS' => 'E02005046',
        '7LT' => 'E02005046',
        '7LU' => 'E02005048',
        '7LW' => 'E02005046',
        '7LX' => 'E02005046',
        '7LY' => 'E02005048',
        '7LZ' => 'E02005046',
        '7NA' => 'E02005048',
        '7NB' => 'E02005048',
        '7ND' => 'E02005048',
        '7NE' => 'E02005048',
        '7NF' => 'E02005048',
        '7NG' => 'E02005048',
        '7NH' => 'E02005048',
        '7NJ' => 'E02005048',
        '7NL' => 'E02005048',
        '7NN' => 'E02005048',
        '7NP' => 'E02005048',
        '7NQ' => 'E02005048',
        '7NR' => 'E02005048',
        '7NS' => 'E02005048',
        '7NT' => 'E02005046',
        '7NU' => 'E02005048',
        '7NW' => 'E02005048',
        '7NX' => 'E02005048',
        '7NY' => 'E02005048',
        '7NZ' => 'E02005048',
        '7PA' => 'E02005048',
        '7PB' => 'E02005048',
        '7PD' => 'E02005048',
        '7PE' => 'E02005048',
        '7PF' => 'E02005048',
        '7PG' => 'E02005048',
        '7PH' => 'E02005046',
        '7PJ' => 'E02005046',
        '7PL' => 'E02005046',
        '7PN' => 'E02005046',
        '7PP' => 'E02005046',
        '7PQ' => 'E02005046',
        '7PR' => 'E02005046',
        '7PS' => 'E02005048',
        '7PT' => 'E02005048',
        '7PU' => 'E02005048',
        '7PW' => 'E02005046',
        '7PX' => 'E02005048',
        '7PY' => 'E02005048',
        '7PZ' => 'E02005048',
        '7QA' => 'E02005048',
        '7QB' => 'E02005048',
        '7QD' => 'E02005048',
        '7QF' => 'E02005048',
        '7QG' => 'E02005102',
        '7QH' => 'E02005054',
        '7QJ' => 'E02005054',
        '7QQ' => 'E02005048',
        '7QZ' => 'E02005050',
        '7RA' => 'E02005052',
        '7RP' => 'E02005052',
        '7SH' => 'E02005102',
        '7WA' => 'E02005052',
        '7WB' => 'E02005052',
        '7WE' => 'E02005052',
        '7WF' => 'E02005052',
        '7WP' => 'E02005052',
        '7WY' => 'E02005052',
        '7WZ' => 'E02005052',
        '7YQ' => 'E02005052',
        '7YY' => 'E02005050',
        '7YZ' => 'E02005050',
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
