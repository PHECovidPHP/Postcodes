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
final class YO62
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '4AA' => 'E02005794',
        '4AB' => 'E02005794',
        '4AD' => 'E02005794',
        '4AE' => 'E02005794',
        '4AF' => 'E02005794',
        '4AG' => 'E02005794',
        '4AH' => 'E02005794',
        '4AJ' => 'E02005794',
        '4AL' => 'E02005794',
        '4AN' => 'E02005794',
        '4AP' => 'E02005794',
        '4AQ' => 'E02005794',
        '4AR' => 'E02005794',
        '4AS' => 'E02005794',
        '4AT' => 'E02005794',
        '4AU' => 'E02005794',
        '4AW' => 'E02005794',
        '4AX' => 'E02005794',
        '4AY' => 'E02005794',
        '4AZ' => 'E02005794',
        '4BA' => 'E02005790',
        '4BB' => 'E02005790',
        '4BD' => 'E02005790',
        '4BE' => 'E02005790',
        '4BF' => 'E02005794',
        '4BG' => 'E02005794',
        '4BH' => 'E02005790',
        '4BJ' => 'E02005790',
        '4BL' => 'E02005790',
        '4BN' => 'E02005794',
        '4BP' => 'E02005794',
        '4BQ' => 'E02005794',
        '4BR' => 'E02005790',
        '4BY' => 'E02005790',
        '4DA' => 'E02005790',
        '4DB' => 'E02005790',
        '4DD' => 'E02005790',
        '4DE' => 'E02005790',
        '4DF' => 'E02005790',
        '4DG' => 'E02005790',
        '4DH' => 'E02005790',
        '4DJ' => 'E02005790',
        '4DL' => 'E02005790',
        '4DN' => 'E02005790',
        '4DP' => 'E02005790',
        '4DQ' => 'E02005790',
        '4DR' => 'E02005790',
        '4DS' => 'E02005790',
        '4DT' => 'E02005790',
        '4DU' => 'E02005790',
        '4DW' => 'E02005790',
        '4DX' => 'E02005790',
        '4DY' => 'E02005790',
        '4DZ' => 'E02005790',
        '4EA' => 'E02005790',
        '4EB' => 'E02005790',
        '4ED' => 'E02005790',
        '4EE' => 'E02005790',
        '4EF' => 'E02005790',
        '4EG' => 'E02005790',
        '4EJ' => 'E02005790',
        '4EL' => 'E02005790',
        '4EN' => 'E02005790',
        '4EP' => 'E02005790',
        '4ER' => 'E02005790',
        '4ES' => 'E02005790',
        '4ET' => 'E02005790',
        '4EU' => 'E02005790',
        '4EW' => 'E02005790',
        '4EX' => 'E02005790',
        '4EY' => 'E02005790',
        '4EZ' => 'E02005790',
        '4HA' => 'E02005790',
        '4HB' => 'E02005790',
        '4HD' => 'E02005790',
        '4HE' => 'E02005790',
        '4HF' => 'E02005790',
        '4HG' => 'E02005790',
        '4HP' => 'E02005790',
        '4HR' => 'E02005790',
        '4HS' => 'E02005790',
        '4HT' => 'E02005790',
        '4HU' => 'E02005790',
        '4HX' => 'E02005790',
        '4HY' => 'E02005790',
        '4HZ' => 'E02005790',
        '4JA' => 'E02005790',
        '4JD' => 'E02005794',
        '4JF' => 'E02005790',
        '4JG' => 'E02005790',
        '4JH' => 'E02005790',
        '4JJ' => 'E02005790',
        '4JL' => 'E02005790',
        '4JN' => 'E02005790',
        '4JQ' => 'E02005790',
        '4JR' => 'E02005794',
        '4JS' => 'E02005794',
        '4JT' => 'E02005794',
        '4JU' => 'E02005794',
        '4JW' => 'E02005790',
        '4JX' => 'E02005794',
        '4JY' => 'E02005794',
        '4JZ' => 'E02005794',
        '4LA' => 'E02005794',
        '4LB' => 'E02005794',
        '4LD' => 'E02005794',
        '4LE' => 'E02005794',
        '4LF' => 'E02005794',
        '4LG' => 'E02005794',
        '4LH' => 'E02005790',
        '4LJ' => 'E02005790',
        '4LL' => 'E02005790',
        '4LN' => 'E02005790',
        '4LP' => 'E02005794',
        '4LQ' => 'E02005794',
        '4LR' => 'E02005794',
        '4LS' => 'E02005794',
        '4LT' => 'E02005794',
        '4LU' => 'E02005794',
        '4LW' => 'E02005790',
        '4LX' => 'E02005794',
        '4LY' => 'E02005794',
        '4LZ' => 'E02005794',
        '4NA' => 'E02005790',
        '4NB' => 'E02005790',
        '4ND' => 'E02005790',
        '4NE' => 'E02005790',
        '4NF' => 'E02005790',
        '4NG' => 'E02005790',
        '4NH' => 'E02005790',
        '4NJ' => 'E02005790',
        '4NL' => 'E02005790',
        '4NN' => 'E02005794',
        '4NQ' => 'E02005790',
        '4WW' => 'E02005790',
        '4WX' => 'E02005790',
        '4WY' => 'E02005790',
        '4WZ' => 'E02005790',
        '4YP' => 'E02005790',
        '4YR' => 'E02005790',
        '4YS' => 'E02005790',
        '4YT' => 'E02005790',
        '4YU' => 'E02005790',
        '4YX' => 'E02002784',
        '4YY' => 'E02002784',
        '4YZ' => 'E02002784',
        '5AA' => 'E02005790',
        '5AB' => 'E02005790',
        '5AD' => 'E02005790',
        '5AE' => 'E02005790',
        '5AF' => 'E02005790',
        '5AG' => 'E02005790',
        '5AH' => 'E02005790',
        '5AJ' => 'E02005790',
        '5AL' => 'E02005790',
        '5AN' => 'E02005790',
        '5AP' => 'E02005790',
        '5AQ' => 'E02005790',
        '5AR' => 'E02005790',
        '5AS' => 'E02005790',
        '5AT' => 'E02005790',
        '5AU' => 'E02005790',
        '5AW' => 'E02005790',
        '5AX' => 'E02005790',
        '5AY' => 'E02005790',
        '5AZ' => 'E02005790',
        '5BA' => 'E02005790',
        '5BB' => 'E02005790',
        '5BD' => 'E02005790',
        '5BE' => 'E02005790',
        '5BF' => 'E02005790',
        '5BG' => 'E02005790',
        '5BH' => 'E02005790',
        '5BJ' => 'E02005790',
        '5BL' => 'E02005790',
        '5BN' => 'E02005790',
        '5BP' => 'E02005790',
        '5BQ' => 'E02005790',
        '5BR' => 'E02005790',
        '5BS' => 'E02005790',
        '5BT' => 'E02005790',
        '5BU' => 'E02005790',
        '5BW' => 'E02005790',
        '5BX' => 'E02005790',
        '5BY' => 'E02005790',
        '5BZ' => 'E02005790',
        '5DA' => 'E02005790',
        '5DB' => 'E02005790',
        '5DD' => 'E02005790',
        '5DE' => 'E02005790',
        '5DF' => 'E02005790',
        '5DG' => 'E02005790',
        '5DH' => 'E02005790',
        '5DJ' => 'E02005790',
        '5DL' => 'E02005790',
        '5DN' => 'E02005790',
        '5DP' => 'E02005790',
        '5DQ' => 'E02005790',
        '5DR' => 'E02005790',
        '5DS' => 'E02005790',
        '5DT' => 'E02005790',
        '5DU' => 'E02005790',
        '5DW' => 'E02005790',
        '5DX' => 'E02005790',
        '5DY' => 'E02005790',
        '5DZ' => 'E02005790',
        '5EA' => 'E02005790',
        '5EB' => 'E02005790',
        '5ED' => 'E02005790',
        '5EE' => 'E02005790',
        '5EF' => 'E02005790',
        '5EG' => 'E02005790',
        '5EH' => 'E02005790',
        '5EJ' => 'E02005790',
        '5EL' => 'E02005790',
        '5EN' => 'E02005790',
        '5EP' => 'E02005790',
        '5EQ' => 'E02005790',
        '5ER' => 'E02005790',
        '5ES' => 'E02005790',
        '5ET' => 'E02005790',
        '5EU' => 'E02005790',
        '5EW' => 'E02005790',
        '5EX' => 'E02005790',
        '5EY' => 'E02005790',
        '5EZ' => 'E02005790',
        '5FA' => 'E02005790',
        '5FB' => 'E02005790',
        '5FD' => 'E02005790',
        '5FE' => 'E02005790',
        '5GZ' => 'E02005790',
        '5HA' => 'E02005790',
        '5HB' => 'E02005790',
        '5HD' => 'E02005790',
        '5HE' => 'E02005790',
        '5HF' => 'E02005790',
        '5HG' => 'E02005790',
        '5HH' => 'E02005790',
        '5HJ' => 'E02005790',
        '5HL' => 'E02005790',
        '5HN' => 'E02005790',
        '5HP' => 'E02005790',
        '5HQ' => 'E02005790',
        '5HR' => 'E02005790',
        '5HS' => 'E02005790',
        '5HT' => 'E02005790',
        '5HU' => 'E02005790',
        '5HW' => 'E02005790',
        '5HX' => 'E02005790',
        '5HY' => 'E02005790',
        '5HZ' => 'E02005790',
        '5JA' => 'E02005790',
        '5JB' => 'E02005790',
        '5JD' => 'E02005790',
        '5JE' => 'E02005790',
        '5JF' => 'E02005790',
        '5JG' => 'E02005790',
        '5JH' => 'E02005790',
        '5JJ' => 'E02005790',
        '5JL' => 'E02005790',
        '5JN' => 'E02005790',
        '5JP' => 'E02005790',
        '5JQ' => 'E02005790',
        '5LA' => 'E02005790',
        '5LB' => 'E02005790',
        '5LD' => 'E02005790',
        '5LE' => 'E02005790',
        '5LF' => 'E02005790',
        '5LG' => 'E02005790',
        '5LH' => 'E02005790',
        '5LJ' => 'E02005790',
        '5LP' => 'E02005790',
        '5LQ' => 'E02005790',
        '5LR' => 'E02005790',
        '5LS' => 'E02005790',
        '5LT' => 'E02005790',
        '5LU' => 'E02005790',
        '5LX' => 'E02005790',
        '5LY' => 'E02005790',
        '5LZ' => 'E02005790',
        '5NA' => 'E02005790',
        '5NB' => 'E02005790',
        '5ND' => 'E02005790',
        '5NE' => 'E02005790',
        '5NF' => 'E02005790',
        '5QA' => 'E02005790',
        '5QB' => 'E02005790',
        '5QD' => 'E02005790',
        '5QE' => 'E02005790',
        '5QF' => 'E02005790',
        '5QH' => 'E02005790',
        '5QJ' => 'E02005790',
        '5QL' => 'E02005790',
        '5QR' => 'E02005790',
        '5QS' => 'E02005790',
        '5QT' => 'E02005790',
        '5QU' => 'E02005790',
        '5QX' => 'E02005790',
        '5QY' => 'E02005790',
        '5UP' => 'E02005790',
        '5UR' => 'E02005790',
        '5US' => 'E02005790',
        '5UT' => 'E02005790',
        '5UU' => 'E02005790',
        '5UX' => 'E02005790',
        '5UY' => 'E02005790',
        '5UZ' => 'E02005790',
        '5WA' => 'E02005790',
        '5WS' => 'E02005790',
        '5WT' => 'E02005790',
        '5WW' => 'E02005790',
        '5WX' => 'E02005790',
        '5WY' => 'E02005790',
        '5WZ' => 'E02005790',
        '5XB' => 'E02005790',
        '5XD' => 'E02005790',
        '5XE' => 'E02005790',
        '5XF' => 'E02005790',
        '5XG' => 'E02005790',
        '5XQ' => 'E02005790',
        '5XR' => 'E02005790',
        '5XT' => 'E02005790',
        '5XX' => 'E02005790',
        '5XY' => 'E02005790',
        '5XZ' => 'E02005790',
        '5YA' => 'E02005790',
        '5YB' => 'E02005790',
        '5YD' => 'E02005790',
        '5YE' => 'E02005790',
        '5YF' => 'E02005790',
        '5YG' => 'E02005790',
        '5YH' => 'E02005790',
        '5YJ' => 'E02005790',
        '5YL' => 'E02005790',
        '5YN' => 'E02002784',
        '5YQ' => 'E02005790',
        '5YS' => 'E02005790',
        '5YT' => 'E02005790',
        '5YU' => 'E02002784',
        '5YW' => 'E02005790',
        '5YX' => 'E02005790',
        '5YY' => 'E02005790',
        '5YZ' => 'E02005790',
        '5ZW' => 'E02005790',
        '6AA' => 'E02005788',
        '6AB' => 'E02005788',
        '6AD' => 'E02005788',
        '6AE' => 'E02005788',
        '6AF' => 'E02005788',
        '6AG' => 'E02005788',
        '6AH' => 'E02005788',
        '6AJ' => 'E02005788',
        '6AL' => 'E02005788',
        '6AN' => 'E02005788',
        '6AP' => 'E02005788',
        '6AQ' => 'E02005788',
        '6AR' => 'E02005788',
        '6AS' => 'E02005788',
        '6AT' => 'E02005788',
        '6AU' => 'E02005788',
        '6AW' => 'E02005788',
        '6AX' => 'E02005788',
        '6AY' => 'E02005788',
        '6AZ' => 'E02005788',
        '6BA' => 'E02005788',
        '6BB' => 'E02005788',
        '6BD' => 'E02005788',
        '6BE' => 'E02005788',
        '6BF' => 'E02005788',
        '6BG' => 'E02005788',
        '6BH' => 'E02005788',
        '6BJ' => 'E02005788',
        '6BL' => 'E02005788',
        '6BN' => 'E02005788',
        '6BP' => 'E02005788',
        '6BQ' => 'E02005788',
        '6BR' => 'E02005788',
        '6BS' => 'E02005788',
        '6BT' => 'E02005788',
        '6BU' => 'E02005788',
        '6BW' => 'E02005788',
        '6BX' => 'E02005788',
        '6BY' => 'E02005788',
        '6BZ' => 'E02005788',
        '6DA' => 'E02005788',
        '6DB' => 'E02005788',
        '6DD' => 'E02005788',
        '6DE' => 'E02005788',
        '6DF' => 'E02005788',
        '6DG' => 'E02005788',
        '6DH' => 'E02005788',
        '6DJ' => 'E02005788',
        '6DL' => 'E02005788',
        '6DN' => 'E02005788',
        '6DP' => 'E02005788',
        '6DQ' => 'E02005788',
        '6DR' => 'E02005788',
        '6DS' => 'E02005788',
        '6DT' => 'E02005788',
        '6DU' => 'E02005788',
        '6DW' => 'E02005788',
        '6DX' => 'E02005788',
        '6DY' => 'E02005788',
        '6DZ' => 'E02005788',
        '6EA' => 'E02005788',
        '6EB' => 'E02005788',
        '6ED' => 'E02005788',
        '6EE' => 'E02005788',
        '6EF' => 'E02005788',
        '6EG' => 'E02005788',
        '6EH' => 'E02005788',
        '6EJ' => 'E02005788',
        '6EL' => 'E02005788',
        '6EN' => 'E02005788',
        '6EP' => 'E02005788',
        '6EQ' => 'E02005788',
        '6ER' => 'E02005788',
        '6ES' => 'E02005788',
        '6ET' => 'E02005788',
        '6EU' => 'E02005788',
        '6EW' => 'E02005788',
        '6EX' => 'E02005788',
        '6EY' => 'E02005788',
        '6EZ' => 'E02005788',
        '6FB' => 'E02005788',
        '6FD' => 'E02005788',
        '6FE' => 'E02005788',
        '6HA' => 'E02005788',
        '6HD' => 'E02005788',
        '6HJ' => 'E02005788',
        '6HL' => 'E02005788',
        '6HN' => 'E02005788',
        '6HP' => 'E02005788',
        '6HQ' => 'E02005788',
        '6HW' => 'E02005788',
        '6HZ' => 'E02005788',
        '6JA' => 'E02005788',
        '6JB' => 'E02005788',
        '6JD' => 'E02005788',
        '6JE' => 'E02005788',
        '6JF' => 'E02005788',
        '6JG' => 'E02005788',
        '6LE' => 'E02005788',
        '6LJ' => 'E02005788',
        '6LL' => 'E02005788',
        '6LN' => 'E02005788',
        '6LP' => 'E02005788',
        '6LR' => 'E02005788',
        '6LS' => 'E02005788',
        '6LT' => 'E02005788',
        '6LU' => 'E02005788',
        '6LW' => 'E02005788',
        '6LX' => 'E02005788',
        '6LY' => 'E02005788',
        '6LZ' => 'E02005788',
        '6NA' => 'E02005788',
        '6NB' => 'E02005788',
        '6ND' => 'E02005788',
        '6NE' => 'E02005788',
        '6NF' => 'E02005790',
        '6NG' => 'E02005788',
        '6NH' => 'E02005788',
        '6NJ' => 'E02005788',
        '6NL' => 'E02005788',
        '6NN' => 'E02005788',
        '6NP' => 'E02005788',
        '6NQ' => 'E02005788',
        '6NR' => 'E02005788',
        '6NS' => 'E02005788',
        '6NT' => 'E02005788',
        '6NU' => 'E02005788',
        '6NW' => 'E02005788',
        '6NX' => 'E02005790',
        '6NY' => 'E02005790',
        '6NZ' => 'E02005790',
        '6PA' => 'E02005790',
        '6PB' => 'E02005790',
        '6PD' => 'E02005790',
        '6PE' => 'E02005790',
        '6PF' => 'E02005790',
        '6PG' => 'E02005788',
        '6PR' => 'E02005788',
        '6PS' => 'E02005788',
        '6PT' => 'E02005788',
        '6PU' => 'E02005788',
        '6PX' => 'E02005788',
        '6QA' => 'E02005788',
        '6QR' => 'E02005788',
        '6RA' => 'E02005790',
        '6RB' => 'E02005790',
        '6RD' => 'E02005788',
        '6RE' => 'E02005788',
        '6RF' => 'E02005788',
        '6RG' => 'E02005788',
        '6RH' => 'E02005788',
        '6RJ' => 'E02005788',
        '6RL' => 'E02005790',
        '6RN' => 'E02005790',
        '6RP' => 'E02005790',
        '6RQ' => 'E02005788',
        '6RR' => 'E02005790',
        '6RS' => 'E02005788',
        '6RT' => 'E02005788',
        '6RW' => 'E02005790',
        '6RY' => 'E02005790',
        '6RZ' => 'E02005790',
        '6SA' => 'E02005790',
        '6SD' => 'E02005790',
        '6SE' => 'E02005790',
        '6SF' => 'E02005790',
        '6SG' => 'E02005790',
        '6SH' => 'E02005790',
        '6SJ' => 'E02005790',
        '6SL' => 'E02005790',
        '6SN' => 'E02005790',
        '6SP' => 'E02005788',
        '6SQ' => 'E02005790',
        '6SS' => 'E02005790',
        '6SW' => 'E02005788',
        '6TD' => 'E02005788',
        '6TE' => 'E02005788',
        '6TF' => 'E02005788',
        '6TG' => 'E02005788',
        '6TH' => 'E02005788',
        '6TJ' => 'E02005788',
        '6TL' => 'E02005788',
        '6TN' => 'E02005788',
        '6TP' => 'E02005788',
        '6TQ' => 'E02005788',
        '6TR' => 'E02005788',
        '6TS' => 'E02005788',
        '6TT' => 'E02005788',
        '6TW' => 'E02005788',
        '6UA' => 'E02005788',
        '6UB' => 'E02005788',
        '6UD' => 'E02005788',
        '6UE' => 'E02005788',
        '6UF' => 'E02005788',
        '6UG' => 'E02005788',
        '6UH' => 'E02005788',
        '6UJ' => 'E02005788',
        '6UL' => 'E02005788',
        '6UN' => 'E02005788',
        '6UQ' => 'E02005788',
        '6WN' => 'E02005788',
        '6WP' => 'E02005788',
        '6WQ' => 'E02005788',
        '6WR' => 'E02005788',
        '6WS' => 'E02005788',
        '6WU' => 'E02005788',
        '6WW' => 'E02005788',
        '6WX' => 'E02005788',
        '6WY' => 'E02005788',
        '6WZ' => 'E02005788',
        '6XA' => 'E02005788',
        '6YA' => 'E02005788',
        '6YB' => 'E02005788',
        '6YD' => 'E02005788',
        '6YE' => 'E02005788',
        '6YF' => 'E02005788',
        '6YP' => 'E02005788',
        '6YR' => 'E02005788',
        '6YS' => 'E02002784',
        '6YT' => 'E02005788',
        '6YW' => 'E02005788',
        '6YY' => 'E02005788',
        '6YZ' => 'E02005788',
        '7AA' => 'E02005788',
        '7AB' => 'E02005788',
        '7HA' => 'E02005788',
        '7HB' => 'E02005788',
        '7HD' => 'E02005788',
        '7HE' => 'E02005788',
        '7HF' => 'E02005788',
        '7HG' => 'E02005788',
        '7HH' => 'E02005788',
        '7HQ' => 'E02005788',
        '7HR' => 'E02005788',
        '7HS' => 'E02005788',
        '7HT' => 'E02005788',
        '7HU' => 'E02005788',
        '7HX' => 'E02005788',
        '7HY' => 'E02005788',
        '7JA' => 'E02005788',
        '7JF' => 'E02005788',
        '7JG' => 'E02005788',
        '7JH' => 'E02005788',
        '7JJ' => 'E02005788',
        '7JL' => 'E02005788',
        '7JN' => 'E02005790',
        '7JQ' => 'E02005788',
        '7JU' => 'E02005788',
        '7JW' => 'E02005788',
        '7JX' => 'E02005788',
        '7JY' => 'E02005788',
        '7JZ' => 'E02005788',
        '7LA' => 'E02005788',
        '7LB' => 'E02005788',
        '7LD' => 'E02005788',
        '7LE' => 'E02005788',
        '7LF' => 'E02005788',
        '7LG' => 'E02005788',
        '7LH' => 'E02005788',
        '7LQ' => 'E02005788',
        '7LR' => 'E02005788',
        '7LS' => 'E02005788',
        '7LT' => 'E02005788',
        '7RA' => 'E02005790',
        '7RB' => 'E02005788',
        '7RD' => 'E02005790',
        '7RE' => 'E02005790',
        '7RF' => 'E02005790',
        '7RG' => 'E02005790',
        '7RH' => 'E02005788',
        '7RJ' => 'E02005788',
        '7RL' => 'E02005788',
        '7RN' => 'E02005788',
        '7RP' => 'E02005788',
        '7RQ' => 'E02005790',
        '7RR' => 'E02005788',
        '7RS' => 'E02005788',
        '7RT' => 'E02005788',
        '7RU' => 'E02005788',
        '7RW' => 'E02005788',
        '7RX' => 'E02005788',
        '7RY' => 'E02005788',
        '7RZ' => 'E02005790',
        '7SA' => 'E02005790',
        '7SB' => 'E02005790',
        '7SD' => 'E02005790',
        '7SE' => 'E02005788',
        '7SF' => 'E02005790',
        '7SG' => 'E02005790',
        '7SH' => 'E02005790',
        '7SJ' => 'E02005790',
        '7SL' => 'E02005790',
        '7SN' => 'E02005790',
        '7SP' => 'E02005790',
        '7SQ' => 'E02005788',
        '7SR' => 'E02005790',
        '7SS' => 'E02005790',
        '7ST' => 'E02005790',
        '7SU' => 'E02005790',
        '7SW' => 'E02005790',
        '7SX' => 'E02005790',
        '7SY' => 'E02005790',
        '7SZ' => 'E02005790',
        '7TA' => 'E02005790',
        '7TB' => 'E02005790',
        '7TD' => 'E02005790',
        '7TE' => 'E02005790',
        '7TF' => 'E02005790',
        '7TG' => 'E02005790',
        '7TH' => 'E02005790',
        '7TJ' => 'E02005790',
        '7TL' => 'E02005790',
        '7TN' => 'E02005790',
        '7TP' => 'E02005790',
        '7TQ' => 'E02005790',
        '7TR' => 'E02005790',
        '7TS' => 'E02005790',
        '7TT' => 'E02005790',
        '7TU' => 'E02005790',
        '7TW' => 'E02005790',
        '7TX' => 'E02005790',
        '7TY' => 'E02005790',
        '7TZ' => 'E02005790',
        '7UA' => 'E02005790',
        '7UB' => 'E02005790',
        '7UX' => 'E02005788',
        '7UY' => 'E02005788',
        '7UZ' => 'E02005788',
        '7WY' => 'E02005788',
        '7WZ' => 'E02005788',
        '7XA' => 'E02005788',
        '7XG' => 'E02005788',
        '7XH' => 'E02005788',
        '7XJ' => 'E02005788',
        '7XQ' => 'E02005788',
        '7XU' => 'E02005790',
        '7YR' => 'E02005788',
        '7YS' => 'E02005790',
        '7YT' => 'E02005788',
        '7YU' => 'E02005790',
        '7YX' => 'E02005788',
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
