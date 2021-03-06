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
final class MK14
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '5AA' => 'E02003460',
        '5AB' => 'E02003463',
        '5AD' => 'E02003463',
        '5AE' => 'E02003463',
        '5AF' => 'E02003463',
        '5AG' => 'E02003463',
        '5AH' => 'E02003460',
        '5AJ' => 'E02003460',
        '5AL' => 'E02003460',
        '5AN' => 'E02003465',
        '5AP' => 'E02003463',
        '5AQ' => 'E02003463',
        '5AR' => 'E02003463',
        '5AS' => 'E02003463',
        '5AT' => 'E02003460',
        '5AU' => 'E02003463',
        '5AW' => 'E02003463',
        '5AX' => 'E02003467',
        '5AY' => 'E02003467',
        '5AZ' => 'E02003467',
        '5BA' => 'E02003463',
        '5BB' => 'E02003463',
        '5BD' => 'E02003467',
        '5BE' => 'E02003467',
        '5BF' => 'E02003463',
        '5BG' => 'E02003467',
        '5BH' => 'E02003463',
        '5BJ' => 'E02003467',
        '5BL' => 'E02003467',
        '5BN' => 'E02003463',
        '5BP' => 'E02003463',
        '5BQ' => 'E02003467',
        '5BS' => 'E02003463',
        '5BT' => 'E02003465',
        '5BU' => 'E02003463',
        '5BW' => 'E02003463',
        '5BX' => 'E02003463',
        '5BY' => 'E02003460',
        '5BZ' => 'E02003467',
        '5DA' => 'E02003467',
        '5DB' => 'E02003467',
        '5DD' => 'E02003467',
        '5DE' => 'E02003467',
        '5DF' => 'E02003467',
        '5DG' => 'E02003467',
        '5DH' => 'E02003463',
        '5DJ' => 'E02003463',
        '5DL' => 'E02003463',
        '5DN' => 'E02003463',
        '5DP' => 'E02003463',
        '5DQ' => 'E02003467',
        '5DR' => 'E02003463',
        '5DS' => 'E02003463',
        '5DT' => 'E02003463',
        '5DU' => 'E02003467',
        '5DW' => 'E02003463',
        '5DX' => 'E02003467',
        '5DY' => 'E02003467',
        '5DZ' => 'E02003463',
        '5EA' => 'E02003463',
        '5EB' => 'E02003463',
        '5ED' => 'E02003463',
        '5EE' => 'E02003463',
        '5EF' => 'E02003463',
        '5EG' => 'E02003467',
        '5EH' => 'E02003463',
        '5EJ' => 'E02003463',
        '5EL' => 'E02003463',
        '5EN' => 'E02003463',
        '5EP' => 'E02003463',
        '5EQ' => 'E02003467',
        '5ER' => 'E02003463',
        '5ES' => 'E02003463',
        '5ET' => 'E02003463',
        '5EU' => 'E02003467',
        '5EW' => 'E02003467',
        '5EX' => 'E02003467',
        '5FA' => 'E02003460',
        '5FB' => 'E02003460',
        '5FD' => 'E02003460',
        '5FE' => 'E02003460',
        '5FF' => 'E02003460',
        '5FG' => 'E02003460',
        '5FH' => 'E02003463',
        '5FJ' => 'E02003463',
        '5FL' => 'E02003460',
        '5FN' => 'E02003460',
        '5FP' => 'E02003460',
        '5FQ' => 'E02003460',
        '5FR' => 'E02003460',
        '5FS' => 'E02003460',
        '5FT' => 'E02003460',
        '5FU' => 'E02003460',
        '5FW' => 'E02003460',
        '5FX' => 'E02003460',
        '5FY' => 'E02003460',
        '5FZ' => 'E02003460',
        '5GA' => 'E02003463',
        '5GB' => 'E02003460',
        '5GD' => 'E02003460',
        '5GE' => 'E02003460',
        '5GF' => 'E02003460',
        '5GG' => 'E02003460',
        '5GH' => 'E02003460',
        '5GJ' => 'E02003463',
        '5HA' => 'E02003467',
        '5HB' => 'E02003467',
        '5HD' => 'E02003467',
        '5HE' => 'E02003467',
        '5HF' => 'E02003463',
        '5HG' => 'E02003465',
        '5HH' => 'E02003463',
        '5HJ' => 'E02003467',
        '5HL' => 'E02003463',
        '5HN' => 'E02003465',
        '5HP' => 'E02003463',
        '5HQ' => 'E02003463',
        '5HR' => 'E02003463',
        '5HS' => 'E02003463',
        '5HT' => 'E02003463',
        '5HU' => 'E02003463',
        '5HW' => 'E02003463',
        '5HX' => 'E02003463',
        '5HY' => 'E02003463',
        '5HZ' => 'E02003463',
        '5JA' => 'E02003465',
        '5JB' => 'E02003465',
        '5JD' => 'E02003463',
        '5JE' => 'E02003465',
        '5JF' => 'E02003465',
        '5JG' => 'E02003463',
        '5JH' => 'E02003465',
        '5JJ' => 'E02003465',
        '5JL' => 'E02003463',
        '5JN' => 'E02003465',
        '5JP' => 'E02003463',
        '5JQ' => 'E02003463',
        '5JR' => 'E02003463',
        '5JS' => 'E02003463',
        '5JT' => 'E02003463',
        '5JU' => 'E02003463',
        '5JW' => 'E02003465',
        '5JX' => 'E02003473',
        '5JY' => 'E02003463',
        '5JZ' => 'E02003463',
        '5LA' => 'E02003463',
        '5LB' => 'E02003463',
        '5LD' => 'E02003467',
        '5LF' => 'E02003463',
        '5LG' => 'E02003463',
        '5LH' => 'E02003473',
        '5LJ' => 'E02003473',
        '5LL' => 'E02003463',
        '5LN' => 'E02003473',
        '5LP' => 'E02003460',
        '5LR' => 'E02003463',
        '5LS' => 'E02003465',
        '5LT' => 'E02003463',
        '5LU' => 'E02003463',
        '5LW' => 'E02003473',
        '5LX' => 'E02003465',
        '5LY' => 'E02003465',
        '5LZ' => 'E02003465',
        '5NA' => 'E02003463',
        '5NB' => 'E02003473',
        '5NE' => 'E02003465',
        '5NF' => 'E02003473',
        '5NG' => 'E02003465',
        '5NH' => 'E02003473',
        '5NL' => 'E02003465',
        '5NN' => 'E02003465',
        '5NP' => 'E02003473',
        '5NQ' => 'E02003465',
        '5NR' => 'E02003465',
        '5NS' => 'E02003473',
        '5NT' => 'E02003473',
        '5NW' => 'E02003465',
        '5PA' => 'E02003463',
        '5PB' => 'E02003463',
        '5PD' => 'E02003463',
        '5PE' => 'E02003463',
        '5PF' => 'E02003463',
        '5PG' => 'E02003465',
        '5PH' => 'E02003463',
        '5PJ' => 'E02003463',
        '5PL' => 'E02003463',
        '5PN' => 'E02003463',
        '5PP' => 'E02003463',
        '5PQ' => 'E02003463',
        '5PR' => 'E02003463',
        '5PS' => 'E02003463',
        '5PT' => 'E02003463',
        '5PU' => 'E02003465',
        '5PW' => 'E02003463',
        '5PX' => 'E02003465',
        '5PY' => 'E02003463',
        '5PZ' => 'E02003463',
        '5QA' => 'E02003463',
        '5QB' => 'E02003463',
        '5QD' => 'E02003463',
        '5QE' => 'E02003463',
        '5QF' => 'E02003463',
        '5QG' => 'E02003463',
        '5QH' => 'E02003463',
        '5QJ' => 'E02003463',
        '5QL' => 'E02003463',
        '5QN' => 'E02003463',
        '5QP' => 'E02003463',
        '5QR' => 'E02003463',
        '5QS' => 'E02003463',
        '5QZ' => 'E02003473',
        '5RB' => 'E02003463',
        '5SE' => 'E02003465',
        '5WA' => 'E02003473',
        '5WB' => 'E02003473',
        '5WD' => 'E02003473',
        '5WE' => 'E02003473',
        '5WF' => 'E02003473',
        '5WH' => 'E02003473',
        '5WJ' => 'E02003473',
        '5WL' => 'E02003473',
        '5WN' => 'E02003473',
        '5WP' => 'E02003473',
        '5WQ' => 'E02003473',
        '5WR' => 'E02003473',
        '5WS' => 'E02003473',
        '5WT' => 'E02003473',
        '5WU' => 'E02003473',
        '5WW' => 'E02003473',
        '5WX' => 'E02003473',
        '5WY' => 'E02003473',
        '5WZ' => 'E02003473',
        '5XA' => 'E02003473',
        '5XG' => 'E02003473',
        '5XH' => 'E02003473',
        '5XJ' => 'E02003473',
        '5XL' => 'E02003473',
        '5XN' => 'E02003473',
        '5XP' => 'E02003473',
        '5XQ' => 'E02003473',
        '5XR' => 'E02003473',
        '5XS' => 'E02003473',
        '5XT' => 'E02003473',
        '5XU' => 'E02003473',
        '5XW' => 'E02003473',
        '5XX' => 'E02003473',
        '5XY' => 'E02003473',
        '5XZ' => 'E02003473',
        '5YA' => 'E02003463',
        '5YB' => 'E02003467',
        '5YD' => 'E02003473',
        '5YE' => 'E02003473',
        '5YF' => 'E02003463',
        '5YH' => 'E02003463',
        '5YJ' => 'E02003463',
        '5YL' => 'E02003467',
        '5YN' => 'E02003473',
        '5YP' => 'E02003463',
        '5YQ' => 'E02003473',
        '5YR' => 'E02003463',
        '5YT' => 'E02003463',
        '5YU' => 'E02003473',
        '5YW' => 'E02003473',
        '5YX' => 'E02003463',
        '5YY' => 'E02003463',
        '5YZ' => 'E02003473',
        '5ZD' => 'E02003463',
        '5ZE' => 'E02003473',
        '5ZF' => 'E02003473',
        '5ZG' => 'E02003473',
        '5ZH' => 'E02003463',
        '5ZJ' => 'E02003473',
        '5ZL' => 'E02003463',
        '5ZN' => 'E02003473',
        '5ZP' => 'E02003463',
        '5ZQ' => 'E02003473',
        '5ZR' => 'E02003473',
        '5ZS' => 'E02003463',
        '5ZT' => 'E02003473',
        '5ZU' => 'E02003473',
        '5ZW' => 'E02003463',
        '5ZX' => 'E02003473',
        '5ZY' => 'E02003473',
        '6AA' => 'E02003473',
        '6AB' => 'E02003467',
        '6AD' => 'E02003465',
        '6AE' => 'E02003464',
        '6AF' => 'E02003464',
        '6AG' => 'E02003464',
        '6AH' => 'E02003464',
        '6AJ' => 'E02003464',
        '6AL' => 'E02003464',
        '6AN' => 'E02003464',
        '6AP' => 'E02003467',
        '6AQ' => 'E02003464',
        '6AR' => 'E02003467',
        '6AS' => 'E02003467',
        '6AT' => 'E02003464',
        '6AU' => 'E02003464',
        '6AW' => 'E02003467',
        '6AX' => 'E02003464',
        '6AY' => 'E02003464',
        '6AZ' => 'E02003464',
        '6BA' => 'E02003464',
        '6BB' => 'E02003464',
        '6BD' => 'E02003464',
        '6BE' => 'E02003464',
        '6BF' => 'E02003467',
        '6BG' => 'E02003464',
        '6BH' => 'E02003464',
        '6BJ' => 'E02003467',
        '6BL' => 'E02003467',
        '6BN' => 'E02003467',
        '6BP' => 'E02003464',
        '6BQ' => 'E02003464',
        '6BS' => 'E02003467',
        '6BT' => 'E02003467',
        '6BU' => 'E02003467',
        '6BW' => 'E02003467',
        '6BX' => 'E02003467',
        '6BY' => 'E02003467',
        '6BZ' => 'E02003467',
        '6DB' => 'E02003467',
        '6DD' => 'E02003467',
        '6DE' => 'E02003467',
        '6DF' => 'E02003467',
        '6DG' => 'E02003467',
        '6DH' => 'E02003467',
        '6DJ' => 'E02003467',
        '6DL' => 'E02003467',
        '6DN' => 'E02003467',
        '6DP' => 'E02003467',
        '6DQ' => 'E02003467',
        '6DR' => 'E02003467',
        '6DS' => 'E02003467',
        '6DT' => 'E02003467',
        '6DU' => 'E02003467',
        '6DW' => 'E02003467',
        '6DX' => 'E02003467',
        '6DY' => 'E02003467',
        '6DZ' => 'E02003463',
        '6EA' => 'E02003473',
        '6EB' => 'E02003467',
        '6ED' => 'E02003473',
        '6EE' => 'E02003467',
        '6EF' => 'E02003467',
        '6EG' => 'E02003467',
        '6EH' => 'E02003467',
        '6EJ' => 'E02003467',
        '6EL' => 'E02003467',
        '6EN' => 'E02003467',
        '6EQ' => 'E02003467',
        '6ER' => 'E02003467',
        '6ES' => 'E02003467',
        '6ET' => 'E02003467',
        '6EU' => 'E02003467',
        '6EW' => 'E02003467',
        '6EX' => 'E02003467',
        '6EY' => 'E02003467',
        '6EZ' => 'E02003463',
        '6FA' => 'E02003460',
        '6FB' => 'E02003460',
        '6FD' => 'E02003467',
        '6FE' => 'E02003467',
        '6FF' => 'E02003460',
        '6FG' => 'E02003467',
        '6FH' => 'E02003460',
        '6FJ' => 'E02003460',
        '6FL' => 'E02003460',
        '6FN' => 'E02003460',
        '6FP' => 'E02003460',
        '6FQ' => 'E02003460',
        '6FR' => 'E02003463',
        '6FS' => 'E02003460',
        '6FT' => 'E02003460',
        '6FU' => 'E02003460',
        '6FW' => 'E02003460',
        '6FX' => 'E02003460',
        '6FY' => 'E02003460',
        '6FZ' => 'E02003460',
        '6GA' => 'E02003460',
        '6GB' => 'E02003467',
        '6GD' => 'E02003467',
        '6GE' => 'E02003467',
        '6GF' => 'E02003460',
        '6GG' => 'E02003460',
        '6GH' => 'E02003460',
        '6GJ' => 'E02003460',
        '6GL' => 'E02003460',
        '6GN' => 'E02003460',
        '6GP' => 'E02003460',
        '6GQ' => 'E02003460',
        '6GR' => 'E02003460',
        '6GS' => 'E02003460',
        '6GT' => 'E02003460',
        '6GU' => 'E02003467',
        '6GW' => 'E02003460',
        '6GX' => 'E02003460',
        '6GY' => 'E02003467',
        '6HA' => 'E02003463',
        '6HB' => 'E02003463',
        '6HD' => 'E02003463',
        '6HE' => 'E02003463',
        '6HF' => 'E02003463',
        '6HG' => 'E02003463',
        '6HH' => 'E02003463',
        '6HJ' => 'E02003463',
        '6HL' => 'E02003463',
        '6HN' => 'E02003463',
        '6HP' => 'E02003463',
        '6HQ' => 'E02003463',
        '6HR' => 'E02003463',
        '6HS' => 'E02003463',
        '6HT' => 'E02003463',
        '6HU' => 'E02003463',
        '6HW' => 'E02003467',
        '6HX' => 'E02003463',
        '6HY' => 'E02003463',
        '6HZ' => 'E02003463',
        '6JA' => 'E02003463',
        '6JB' => 'E02003463',
        '6JD' => 'E02003463',
        '6JE' => 'E02003463',
        '6JF' => 'E02003463',
        '6JG' => 'E02003463',
        '6JH' => 'E02003467',
        '6JJ' => 'E02003467',
        '6JL' => 'E02003467',
        '6JN' => 'E02003467',
        '6JP' => 'E02003463',
        '6JQ' => 'E02003463',
        '6JR' => 'E02003467',
        '6JS' => 'E02003467',
        '6JT' => 'E02003467',
        '6JU' => 'E02003467',
        '6JW' => 'E02003467',
        '6JX' => 'E02003463',
        '6JY' => 'E02003463',
        '6JZ' => 'E02003463',
        '6LA' => 'E02003467',
        '6LB' => 'E02003467',
        '6LD' => 'E02003467',
        '6LE' => 'E02003467',
        '6LF' => 'E02003467',
        '6LG' => 'E02003467',
        '6LH' => 'E02003467',
        '6LJ' => 'E02003467',
        '6LL' => 'E02003467',
        '6LN' => 'E02003467',
        '6LP' => 'E02003467',
        '6LQ' => 'E02003467',
        '6LR' => 'E02003467',
        '6LS' => 'E02003467',
        '6LT' => 'E02003467',
        '6LU' => 'E02003467',
        '6LW' => 'E02003467',
        '6LY' => 'E02003467',
        '6LZ' => 'E02003467',
        '6NA' => 'E02003463',
        '6NB' => 'E02003467',
        '6NG' => 'E02003467',
        '6NH' => 'E02003467',
        '6NJ' => 'E02003467',
        '6NN' => 'E02003467',
        '6NP' => 'E02003467',
        '6NQ' => 'E02003467',
        '6NR' => 'E02003467',
        '6NS' => 'E02003463',
        '6NT' => 'E02003463',
        '6NU' => 'E02003467',
        '6NW' => 'E02003467',
        '6NY' => 'E02003463',
        '6NZ' => 'E02003463',
        '6PA' => 'E02003467',
        '6PB' => 'E02003467',
        '6PD' => 'E02003467',
        '6PE' => 'E02003467',
        '6PH' => 'E02003467',
        '6PL' => 'E02003467',
        '6PN' => 'E02003467',
        '6PP' => 'E02003467',
        '6PQ' => 'E02003467',
        '6PR' => 'E02003467',
        '6PS' => 'E02003467',
        '6PU' => 'E02003467',
        '6PW' => 'E02003467',
        '6PZ' => 'E02003467',
        '6QA' => 'E02003467',
        '6QB' => 'E02003467',
        '6QE' => 'E02003467',
        '6QF' => 'E02003467',
        '6QG' => 'E02003467',
        '6QP' => 'E02003467',
        '6QR' => 'E02003467',
        '6SD' => 'E02003467',
        '6SN' => 'E02003473',
        '6SP' => 'E02003467',
        '6SQ' => 'E02003467',
        '6SS' => 'E02003467',
        '6ST' => 'E02003467',
        '6TA' => 'E02003467',
        '6TB' => 'E02003467',
        '6TD' => 'E02003467',
        '6TS' => 'E02003467',
        '6UW' => 'E02003467',
        '6UX' => 'E02003473',
        '6UY' => 'E02003473',
        '6UZ' => 'E02003467',
        '6WA' => 'E02003467',
        '6WB' => 'E02003467',
        '6WD' => 'E02003467',
        '6WE' => 'E02003473',
        '6WF' => 'E02003473',
        '6WG' => 'E02003473',
        '6WH' => 'E02003473',
        '6WJ' => 'E02003473',
        '6WL' => 'E02003473',
        '6WN' => 'E02003473',
        '6WP' => 'E02003473',
        '6WQ' => 'E02003473',
        '6WR' => 'E02003473',
        '6WS' => 'E02003473',
        '6WT' => 'E02003473',
        '6WU' => 'E02003473',
        '6WW' => 'E02003473',
        '6WX' => 'E02003473',
        '6WY' => 'E02003473',
        '6WZ' => 'E02003473',
        '6XD' => 'E02003473',
        '6XE' => 'E02003473',
        '6XF' => 'E02003473',
        '6XG' => 'E02003473',
        '6XH' => 'E02003473',
        '6XJ' => 'E02003473',
        '6XL' => 'E02003473',
        '6XN' => 'E02003473',
        '6XP' => 'E02003473',
        '6XQ' => 'E02003473',
        '6XS' => 'E02003473',
        '6XT' => 'E02003467',
        '6XU' => 'E02003473',
        '6XW' => 'E02003473',
        '6XX' => 'E02003473',
        '6XY' => 'E02003473',
        '6XZ' => 'E02003473',
        '6YA' => 'E02003467',
        '6YD' => 'E02003473',
        '6YE' => 'E02003473',
        '6YF' => 'E02003473',
        '6YG' => 'E02003473',
        '6YH' => 'E02003473',
        '6YJ' => 'E02003473',
        '6YL' => 'E02003464',
        '6YN' => 'E02003464',
        '6YP' => 'E02003467',
        '6YQ' => 'E02003473',
        '6YR' => 'E02003467',
        '6YS' => 'E02003464',
        '6YT' => 'E02003463',
        '6YU' => 'E02003473',
        '6YX' => 'E02003473',
        '6YY' => 'E02003467',
        '6ZD' => 'E02003467',
        '6ZE' => 'E02003467',
        '6ZF' => 'E02003467',
        '6ZG' => 'E02003467',
        '6ZH' => 'E02003467',
        '6ZJ' => 'E02003463',
        '6ZL' => 'E02003473',
        '6ZP' => 'E02003473',
        '6ZQ' => 'E02003473',
        '6ZR' => 'E02003467',
        '6ZS' => 'E02003463',
        '6ZT' => 'E02003467',
        '6ZU' => 'E02003467',
        '6ZW' => 'E02003473',
        '6ZX' => 'E02003473',
        '6ZY' => 'E02003473',
        '6ZZ' => 'E02003473',
        '7AA' => 'E02003472',
        '7AB' => 'E02003472',
        '7AD' => 'E02003472',
        '7AE' => 'E02003472',
        '7AF' => 'E02003467',
        '7AG' => 'E02003472',
        '7AH' => 'E02003472',
        '7AJ' => 'E02003467',
        '7AL' => 'E02003467',
        '7AN' => 'E02003467',
        '7AP' => 'E02003467',
        '7AQ' => 'E02003467',
        '7AR' => 'E02003467',
        '7AS' => 'E02003472',
        '7AT' => 'E02003472',
        '7AU' => 'E02003472',
        '7AW' => 'E02003472',
        '7AX' => 'E02003472',
        '7AY' => 'E02003472',
        '7AZ' => 'E02003472',
        '7BA' => 'E02003472',
        '7BB' => 'E02003472',
        '7BD' => 'E02003472',
        '7BE' => 'E02003472',
        '7BF' => 'E02003472',
        '7BG' => 'E02003472',
        '7BH' => 'E02003472',
        '7BJ' => 'E02003472',
        '7BL' => 'E02003472',
        '7BN' => 'E02003472',
        '7BP' => 'E02003467',
        '7BQ' => 'E02003472',
        '7BS' => 'E02003467',
        '7BT' => 'E02003472',
        '7BU' => 'E02003467',
        '7BW' => 'E02003472',
        '7BX' => 'E02003467',
        '7BY' => 'E02003467',
        '7BZ' => 'E02003467',
        '7DA' => 'E02003472',
        '7DB' => 'E02003467',
        '7DD' => 'E02003467',
        '7DE' => 'E02003472',
        '7DF' => 'E02003472',
        '7DG' => 'E02003467',
        '7DH' => 'E02003472',
        '7DJ' => 'E02003472',
        '7DL' => 'E02003472',
        '7DN' => 'E02003467',
        '7DP' => 'E02003467',
        '7DQ' => 'E02003467',
        '7DR' => 'E02003467',
        '7DS' => 'E02003467',
        '7DT' => 'E02003472',
        '7DU' => 'E02003467',
        '7DW' => 'E02003467',
        '7DX' => 'E02003467',
        '7DY' => 'E02003467',
        '7DZ' => 'E02003467',
        '7EA' => 'E02003467',
        '7ED' => 'E02003467',
        '7EE' => 'E02003467',
        '7EF' => 'E02003472',
        '7EG' => 'E02003473',
        '7EH' => 'E02003467',
        '7EJ' => 'E02003467',
        '7EL' => 'E02003467',
        '7EN' => 'E02003473',
        '7EQ' => 'E02003473',
        '7ER' => 'E02003472',
        '7ES' => 'E02003472',
        '7EU' => 'E02003472',
        '7EW' => 'E02003473',
        '7EX' => 'E02003472',
        '7EY' => 'E02003472',
        '7EZ' => 'E02003467',
        '7LA' => 'E02003472',
        '7LB' => 'E02003472',
        '7LD' => 'E02003472',
        '7LE' => 'E02003472',
        '7LF' => 'E02003472',
        '7LG' => 'E02003472',
        '7LH' => 'E02003472',
        '7LJ' => 'E02003472',
        '7LL' => 'E02003472',
        '7LN' => 'E02003472',
        '7LP' => 'E02003472',
        '7LQ' => 'E02003472',
        '7LR' => 'E02003472',
        '7LS' => 'E02003472',
        '7LT' => 'E02003472',
        '7LU' => 'E02003472',
        '7LW' => 'E02003472',
        '7LX' => 'E02003472',
        '7LY' => 'E02003472',
        '7LZ' => 'E02003472',
        '7NA' => 'E02003472',
        '7NB' => 'E02003472',
        '7ND' => 'E02003473',
        '7NE' => 'E02003472',
        '7NF' => 'E02003472',
        '7NG' => 'E02003472',
        '7NH' => 'E02003467',
        '7NJ' => 'E02003467',
        '7NN' => 'E02003467',
        '7NP' => 'E02003473',
        '7NQ' => 'E02003472',
        '7NR' => 'E02003467',
        '7NS' => 'E02003472',
        '7NT' => 'E02003467',
        '7NW' => 'E02003467',
        '7PA' => 'E02003472',
        '7PB' => 'E02003467',
        '7PD' => 'E02003467',
        '7PE' => 'E02003467',
        '7PF' => 'E02003467',
        '7PG' => 'E02003467',
        '7PH' => 'E02003472',
        '7PJ' => 'E02003467',
        '7PL' => 'E02003467',
        '7PN' => 'E02003467',
        '7PP' => 'E02003467',
        '7PQ' => 'E02003467',
        '7PR' => 'E02003467',
        '7PS' => 'E02003467',
        '7PT' => 'E02003467',
        '7PU' => 'E02003467',
        '7PW' => 'E02003467',
        '7PX' => 'E02003472',
        '7PY' => 'E02003467',
        '7PZ' => 'E02003467',
        '7QA' => 'E02003467',
        '7QB' => 'E02003472',
        '7QD' => 'E02003465',
        '7QE' => 'E02003472',
        '7QF' => 'E02003472',
        '7QG' => 'E02003472',
        '7QH' => 'E02003465',
        '7QJ' => 'E02003465',
        '7QL' => 'E02003465',
        '7QN' => 'E02003472',
        '7QP' => 'E02003465',
        '7QQ' => 'E02003465',
        '7QR' => 'E02003465',
        '7QS' => 'E02003465',
        '7QT' => 'E02003465',
        '7QU' => 'E02003465',
        '7QW' => 'E02003465',
        '7QX' => 'E02003472',
        '7QY' => 'E02003467',
        '7QZ' => 'E02003467',
        '7RA' => 'E02003465',
        '7RB' => 'E02003465',
        '7RD' => 'E02003472',
        '7RH' => 'E02003465',
        '7RJ' => 'E02003472',
        '7RL' => 'E02003472',
        '7RP' => 'E02003472',
        '7RR' => 'E02003465',
        '7RS' => 'E02003465',
        '7RT' => 'E02003465',
        '7RU' => 'E02003467',
        '7RZ' => 'E02003467',
        '7SA' => 'E02003467',
        '7WA' => 'E02003467',
        '7WB' => 'E02003467',
        '7WD' => 'E02003467',
        '7WG' => 'E02003467',
        '7WT' => 'E02003473',
        '7WU' => 'E02003473',
        '7WW' => 'E02003473',
        '7WX' => 'E02003473',
        '7WY' => 'E02003473',
        '7WZ' => 'E02003473',
        '7XJ' => 'E02003467',
        '7XN' => 'E02003473',
        '7XZ' => 'E02003473',
        '7YG' => 'E02003472',
        '7YN' => 'E02003472',
        '7YP' => 'E02003473',
        '7YQ' => 'E02003472',
        '7YR' => 'E02003472',
        '7YS' => 'E02003472',
        '7YT' => 'E02003473',
        '7YU' => 'E02003472',
        '7YW' => 'E02003472',
        '7YX' => 'E02003472',
        '7YY' => 'E02003473',
        '7YZ' => 'E02003473',
        '7ZD' => 'E02003472',
        '7ZE' => 'E02003473',
        '7ZF' => 'E02003473',
        '7ZG' => 'E02003473',
        '7ZH' => 'E02003472',
        '7ZJ' => 'E02003473',
        '7ZL' => 'E02003473',
        '7ZN' => 'E02003473',
        '7ZP' => 'E02003472',
        '7ZQ' => 'E02003472',
        '7ZR' => 'E02003472',
        '7ZS' => 'E02003472',
        '7ZT' => 'E02003472',
        '7ZU' => 'E02003472',
        '7ZW' => 'E02003472',
        '7ZX' => 'E02003472',
        '7ZY' => 'E02003472',
        '7ZZ' => 'E02003472',
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
