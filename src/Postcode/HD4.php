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
final class HD4
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '5AA' => 'E02002309',
        '5AB' => 'E02002313',
        '5AD' => 'E02002309',
        '5AE' => 'E02002309',
        '5AF' => 'E02002309',
        '5AG' => 'E02002313',
        '5AH' => 'E02002313',
        '5AJ' => 'E02002313',
        '5AL' => 'E02002317',
        '5AN' => 'E02002313',
        '5AP' => 'E02002313',
        '5AQ' => 'E02002313',
        '5AR' => 'E02002313',
        '5AS' => 'E02002313',
        '5AT' => 'E02002313',
        '5AU' => 'E02002313',
        '5AW' => 'E02002313',
        '5AX' => 'E02002313',
        '5AY' => 'E02002313',
        '5AZ' => 'E02002313',
        '5BA' => 'E02002313',
        '5BB' => 'E02002313',
        '5BD' => 'E02002313',
        '5BE' => 'E02002313',
        '5BG' => 'E02002313',
        '5BH' => 'E02002313',
        '5BJ' => 'E02002317',
        '5BL' => 'E02002317',
        '5BN' => 'E02002317',
        '5BP' => 'E02002317',
        '5BQ' => 'E02002313',
        '5BR' => 'E02002313',
        '5BU' => 'E02002317',
        '5BW' => 'E02002309',
        '5BX' => 'E02002315',
        '5BY' => 'E02002315',
        '5DA' => 'E02002313',
        '5DB' => 'E02002313',
        '5DD' => 'E02002313',
        '5DE' => 'E02002313',
        '5DF' => 'E02002313',
        '5DG' => 'E02002313',
        '5DH' => 'E02002313',
        '5DJ' => 'E02002313',
        '5DL' => 'E02002313',
        '5DN' => 'E02002313',
        '5DP' => 'E02002313',
        '5DQ' => 'E02002313',
        '5DR' => 'E02002313',
        '5DS' => 'E02002317',
        '5DT' => 'E02002317',
        '5DU' => 'E02002317',
        '5DW' => 'E02002317',
        '5DX' => 'E02002317',
        '5DY' => 'E02002317',
        '5DZ' => 'E02002317',
        '5EA' => 'E02002317',
        '5EB' => 'E02002317',
        '5EH' => 'E02002313',
        '5EL' => 'E02002313',
        '5EN' => 'E02002313',
        '5EP' => 'E02002313',
        '5ER' => 'E02002317',
        '5ES' => 'E02002317',
        '5ET' => 'E02002317',
        '5EU' => 'E02002317',
        '5EW' => 'E02002317',
        '5EX' => 'E02002317',
        '5EY' => 'E02002317',
        '5EZ' => 'E02002317',
        '5HA' => 'E02002317',
        '5HB' => 'E02002317',
        '5HD' => 'E02002317',
        '5HE' => 'E02002317',
        '5HF' => 'E02002317',
        '5HG' => 'E02002317',
        '5HH' => 'E02002317',
        '5HJ' => 'E02002313',
        '5HL' => 'E02002313',
        '5HN' => 'E02002317',
        '5HP' => 'E02002313',
        '5HQ' => 'E02002313',
        '5HR' => 'E02002313',
        '5HS' => 'E02002317',
        '5HT' => 'E02002317',
        '5HU' => 'E02002317',
        '5HW' => 'E02002313',
        '5HX' => 'E02002317',
        '5HY' => 'E02002317',
        '5HZ' => 'E02002317',
        '5JA' => 'E02002317',
        '5JB' => 'E02002317',
        '5JD' => 'E02002317',
        '5JE' => 'E02002317',
        '5JF' => 'E02002317',
        '5JG' => 'E02002320',
        '5JH' => 'E02002317',
        '5JJ' => 'E02002317',
        '5JL' => 'E02002317',
        '5JN' => 'E02002317',
        '5JP' => 'E02002317',
        '5JQ' => 'E02002320',
        '5JR' => 'E02002313',
        '5JS' => 'E02002313',
        '5JT' => 'E02002313',
        '5JU' => 'E02002317',
        '5JW' => 'E02002317',
        '5LE' => 'E02002317',
        '5LF' => 'E02002317',
        '5LG' => 'E02002317',
        '5LH' => 'E02002317',
        '5LJ' => 'E02002317',
        '5LL' => 'E02002317',
        '5LN' => 'E02002317',
        '5LP' => 'E02002317',
        '5LQ' => 'E02002317',
        '5LR' => 'E02002317',
        '5LS' => 'E02002317',
        '5LT' => 'E02002317',
        '5LU' => 'E02002317',
        '5LW' => 'E02002317',
        '5LX' => 'E02002317',
        '5LY' => 'E02002317',
        '5LZ' => 'E02002317',
        '5NA' => 'E02002317',
        '5NB' => 'E02002317',
        '5NE' => 'E02002317',
        '5NF' => 'E02002317',
        '5NG' => 'E02002317',
        '5NH' => 'E02002317',
        '5NJ' => 'E02002317',
        '5NL' => 'E02002317',
        '5NN' => 'E02002317',
        '5NP' => 'E02002317',
        '5NQ' => 'E02002317',
        '5NR' => 'E02002317',
        '5NS' => 'E02002317',
        '5NT' => 'E02002317',
        '5NU' => 'E02002317',
        '5NW' => 'E02002317',
        '5NX' => 'E02002317',
        '5NY' => 'E02002317',
        '5NZ' => 'E02002317',
        '5PA' => 'E02002317',
        '5PB' => 'E02002315',
        '5PD' => 'E02002315',
        '5PE' => 'E02002317',
        '5PF' => 'E02002317',
        '5PH' => 'E02002317',
        '5PL' => 'E02002317',
        '5PN' => 'E02002317',
        '5PP' => 'E02002317',
        '5PR' => 'E02002317',
        '5PS' => 'E02002317',
        '5PT' => 'E02002317',
        '5PU' => 'E02002317',
        '5PW' => 'E02002317',
        '5PX' => 'E02002317',
        '5PY' => 'E02002317',
        '5PZ' => 'E02002317',
        '5QA' => 'E02002317',
        '5QB' => 'E02002317',
        '5QD' => 'E02002317',
        '5QE' => 'E02002317',
        '5QF' => 'E02002317',
        '5QG' => 'E02002317',
        '5QH' => 'E02002317',
        '5QJ' => 'E02002317',
        '5QN' => 'E02002317',
        '5QP' => 'E02002317',
        '5QQ' => 'E02002317',
        '5QT' => 'E02002317',
        '5QU' => 'E02002317',
        '5QX' => 'E02002317',
        '5QY' => 'E02002317',
        '5QZ' => 'E02002317',
        '5RA' => 'E02002317',
        '5RB' => 'E02002317',
        '5RD' => 'E02002317',
        '5RE' => 'E02002317',
        '5RF' => 'E02002317',
        '5RG' => 'E02002317',
        '5RH' => 'E02002317',
        '5RJ' => 'E02002320',
        '5RL' => 'E02002317',
        '5RN' => 'E02002317',
        '5RP' => 'E02002317',
        '5RQ' => 'E02002317',
        '5RR' => 'E02002317',
        '5RS' => 'E02002317',
        '5RT' => 'E02002317',
        '5RU' => 'E02002317',
        '5RW' => 'E02002317',
        '5RX' => 'E02002317',
        '5SE' => 'E02002315',
        '5SF' => 'E02002315',
        '5SG' => 'E02002315',
        '5SH' => 'E02002315',
        '5SJ' => 'E02002315',
        '5SL' => 'E02002315',
        '5SN' => 'E02002315',
        '5SP' => 'E02002315',
        '5SQ' => 'E02002315',
        '5SR' => 'E02002315',
        '5SS' => 'E02002315',
        '5ST' => 'E02002315',
        '5SU' => 'E02002315',
        '5SW' => 'E02002315',
        '5SX' => 'E02002315',
        '5SY' => 'E02002315',
        '5SZ' => 'E02002315',
        '5TA' => 'E02002315',
        '5TB' => 'E02002315',
        '5TD' => 'E02002315',
        '5TE' => 'E02002315',
        '5TF' => 'E02002315',
        '5TG' => 'E02002315',
        '5TH' => 'E02002315',
        '5TJ' => 'E02002315',
        '5TL' => 'E02002315',
        '5TN' => 'E02002315',
        '5TP' => 'E02002315',
        '5TQ' => 'E02002315',
        '5TR' => 'E02002315',
        '5TW' => 'E02002315',
        '5TX' => 'E02002315',
        '5TY' => 'E02002315',
        '5TZ' => 'E02002315',
        '5UA' => 'E02002315',
        '5UB' => 'E02002315',
        '5UD' => 'E02002315',
        '5UE' => 'E02002315',
        '5UF' => 'E02002315',
        '5UG' => 'E02002315',
        '5UH' => 'E02002315',
        '5UJ' => 'E02002315',
        '5UL' => 'E02002315',
        '5UN' => 'E02002315',
        '5UP' => 'E02002315',
        '5UQ' => 'E02002315',
        '5UR' => 'E02002315',
        '5US' => 'E02002315',
        '5UT' => 'E02002315',
        '5UU' => 'E02002315',
        '5UW' => 'E02002315',
        '5UX' => 'E02002315',
        '5UY' => 'E02002315',
        '5UZ' => 'E02002315',
        '5WU' => 'E02002317',
        '5WW' => 'E02002299',
        '5WX' => 'E02002299',
        '5WY' => 'E02002315',
        '5WZ' => 'E02002315',
        '5XA' => 'E02002315',
        '5XB' => 'E02002315',
        '5XD' => 'E02002315',
        '5XE' => 'E02002315',
        '5XF' => 'E02002299',
        '5XG' => 'E02002315',
        '5XH' => 'E02002299',
        '5XJ' => 'E02002317',
        '5XL' => 'E02002299',
        '5XN' => 'E02002299',
        '5XP' => 'E02002299',
        '5XR' => 'E02002317',
        '5XT' => 'E02002317',
        '5XW' => 'E02002299',
        '5XX' => 'E02002317',
        '5XY' => 'E02002317',
        '5XZ' => 'E02002299',
        '5YA' => 'E02002317',
        '5YB' => 'E02002315',
        '5YD' => 'E02002317',
        '5YE' => 'E02002317',
        '5YF' => 'E02002317',
        '5YG' => 'E02002315',
        '5YH' => 'E02002317',
        '5YJ' => 'E02002299',
        '5YL' => 'E02002317',
        '5YN' => 'E02002317',
        '5YP' => 'E02002317',
        '5YQ' => 'E02002317',
        '5YR' => 'E02002299',
        '5YS' => 'E02002315',
        '5YT' => 'E02002315',
        '5YU' => 'E02002299',
        '5YW' => 'E02002299',
        '5YX' => 'E02002299',
        '5YY' => 'E02002299',
        '5YZ' => 'E02002315',
        '5ZA' => 'E02002299',
        '6AA' => 'E02002312',
        '6AB' => 'E02002312',
        '6AD' => 'E02002318',
        '6AE' => 'E02002312',
        '6AF' => 'E02002318',
        '6AG' => 'E02002318',
        '6AH' => 'E02002318',
        '6AJ' => 'E02002318',
        '6AL' => 'E02002312',
        '6AN' => 'E02002312',
        '6AP' => 'E02002318',
        '6AQ' => 'E02002321',
        '6AS' => 'E02002318',
        '6AT' => 'E02002318',
        '6AU' => 'E02002318',
        '6AW' => 'E02002318',
        '6AX' => 'E02002321',
        '6AY' => 'E02002318',
        '6AZ' => 'E02002318',
        '6BA' => 'E02002318',
        '6BB' => 'E02002318',
        '6BD' => 'E02002318',
        '6BE' => 'E02002321',
        '6BG' => 'E02002318',
        '6BJ' => 'E02002318',
        '6BL' => 'E02002318',
        '6BN' => 'E02002312',
        '6BP' => 'E02002320',
        '6BQ' => 'E02002320',
        '6BR' => 'E02002321',
        '6BS' => 'E02002321',
        '6BT' => 'E02002321',
        '6BU' => 'E02002318',
        '6BW' => 'E02002318',
        '6BX' => 'E02002321',
        '6BY' => 'E02002312',
        '6BZ' => 'E02002312',
        '6DA' => 'E02002312',
        '6DB' => 'E02002312',
        '6DD' => 'E02002312',
        '6DE' => 'E02002312',
        '6DF' => 'E02002312',
        '6DG' => 'E02002312',
        '6DH' => 'E02002312',
        '6DJ' => 'E02002318',
        '6DL' => 'E02002318',
        '6DN' => 'E02002318',
        '6DP' => 'E02002318',
        '6DQ' => 'E02002312',
        '6DR' => 'E02002318',
        '6DS' => 'E02002318',
        '6DT' => 'E02002318',
        '6DU' => 'E02002318',
        '6DW' => 'E02002318',
        '6DX' => 'E02002318',
        '6DY' => 'E02002318',
        '6DZ' => 'E02002318',
        '6EA' => 'E02002318',
        '6EB' => 'E02002318',
        '6ED' => 'E02002318',
        '6EE' => 'E02002299',
        '6EF' => 'E02002318',
        '6EG' => 'E02002321',
        '6EJ' => 'E02002318',
        '6EL' => 'E02002313',
        '6EN' => 'E02002313',
        '6EP' => 'E02002320',
        '6EQ' => 'E02002320',
        '6ER' => 'E02002320',
        '6ES' => 'E02002320',
        '6ET' => 'E02002320',
        '6EU' => 'E02002320',
        '6EW' => 'E02002318',
        '6EX' => 'E02002320',
        '6EY' => 'E02002320',
        '6EZ' => 'E02002318',
        '6FA' => 'E02002318',
        '6HA' => 'E02002318',
        '6HB' => 'E02002320',
        '6HD' => 'E02002320',
        '6HE' => 'E02002320',
        '6HF' => 'E02002320',
        '6HG' => 'E02002320',
        '6HH' => 'E02002320',
        '6HJ' => 'E02002320',
        '6HL' => 'E02002320',
        '6HN' => 'E02002320',
        '6HP' => 'E02002320',
        '6HQ' => 'E02002318',
        '6HR' => 'E02002320',
        '6HS' => 'E02002320',
        '6HT' => 'E02002320',
        '6HW' => 'E02002320',
        '6HX' => 'E02002320',
        '6HY' => 'E02002313',
        '6JA' => 'E02002320',
        '6JB' => 'E02002318',
        '6JD' => 'E02002318',
        '6JE' => 'E02002318',
        '6JF' => 'E02002318',
        '6JG' => 'E02002318',
        '6JH' => 'E02002318',
        '6JJ' => 'E02002318',
        '6JL' => 'E02002318',
        '6JN' => 'E02002318',
        '6JP' => 'E02002318',
        '6JQ' => 'E02002318',
        '6JR' => 'E02002318',
        '6JS' => 'E02002318',
        '6JT' => 'E02002318',
        '6JU' => 'E02002318',
        '6JW' => 'E02002318',
        '6JY' => 'E02002318',
        '6JZ' => 'E02002318',
        '6LA' => 'E02002318',
        '6LB' => 'E02002318',
        '6LD' => 'E02002318',
        '6LE' => 'E02002320',
        '6LF' => 'E02002320',
        '6LG' => 'E02002318',
        '6LH' => 'E02002318',
        '6LJ' => 'E02002318',
        '6LL' => 'E02002318',
        '6LN' => 'E02002318',
        '6LP' => 'E02002318',
        '6LQ' => 'E02002318',
        '6LR' => 'E02002318',
        '6LS' => 'E02002318',
        '6LT' => 'E02002318',
        '6LU' => 'E02002318',
        '6LW' => 'E02002318',
        '6LX' => 'E02002318',
        '6LY' => 'E02002318',
        '6LZ' => 'E02002318',
        '6NA' => 'E02002318',
        '6NB' => 'E02002312',
        '6ND' => 'E02002312',
        '6NE' => 'E02002312',
        '6NF' => 'E02002312',
        '6NG' => 'E02002312',
        '6NH' => 'E02002312',
        '6NJ' => 'E02002312',
        '6NL' => 'E02002312',
        '6NN' => 'E02002312',
        '6NP' => 'E02002312',
        '6NQ' => 'E02002312',
        '6NR' => 'E02002312',
        '6NS' => 'E02002312',
        '6NT' => 'E02002312',
        '6NU' => 'E02002312',
        '6NW' => 'E02002312',
        '6NX' => 'E02002312',
        '6NY' => 'E02002312',
        '6NZ' => 'E02002318',
        '6PD' => 'E02002312',
        '6PH' => 'E02002312',
        '6PJ' => 'E02002312',
        '6PL' => 'E02002312',
        '6PN' => 'E02002312',
        '6PP' => 'E02002312',
        '6PR' => 'E02002312',
        '6PS' => 'E02002312',
        '6PT' => 'E02002312',
        '6PU' => 'E02002312',
        '6PW' => 'E02002312',
        '6PX' => 'E02002312',
        '6PY' => 'E02002312',
        '6PZ' => 'E02002312',
        '6QA' => 'E02002312',
        '6QB' => 'E02002312',
        '6QD' => 'E02002312',
        '6QE' => 'E02002312',
        '6QF' => 'E02002312',
        '6QG' => 'E02002312',
        '6QH' => 'E02002312',
        '6QJ' => 'E02002312',
        '6QL' => 'E02002312',
        '6QN' => 'E02002312',
        '6QP' => 'E02002312',
        '6QQ' => 'E02002312',
        '6QU' => 'E02002318',
        '6QX' => 'E02002318',
        '6QY' => 'E02002318',
        '6QZ' => 'E02002318',
        '6RA' => 'E02002318',
        '6RB' => 'E02002318',
        '6RD' => 'E02002318',
        '6RE' => 'E02002318',
        '6RF' => 'E02002318',
        '6RG' => 'E02002318',
        '6RH' => 'E02002318',
        '6RJ' => 'E02002318',
        '6RL' => 'E02002318',
        '6RN' => 'E02002318',
        '6RP' => 'E02002318',
        '6RQ' => 'E02002312',
        '6RR' => 'E02002318',
        '6RW' => 'E02002318',
        '6RZ' => 'E02002318',
        '6SA' => 'E02002314',
        '6SB' => 'E02002314',
        '6SD' => 'E02002314',
        '6SE' => 'E02002314',
        '6SF' => 'E02002314',
        '6SG' => 'E02002314',
        '6SH' => 'E02002314',
        '6SJ' => 'E02002321',
        '6SL' => 'E02002314',
        '6SN' => 'E02002314',
        '6SP' => 'E02002314',
        '6SQ' => 'E02002314',
        '6SR' => 'E02002314',
        '6SS' => 'E02002314',
        '6ST' => 'E02002321',
        '6SU' => 'E02002321',
        '6SW' => 'E02002314',
        '6SX' => 'E02002321',
        '6SY' => 'E02002321',
        '6SZ' => 'E02002314',
        '6TA' => 'E02002314',
        '6TB' => 'E02002318',
        '6TD' => 'E02002314',
        '6TE' => 'E02002312',
        '6TF' => 'E02002314',
        '6TG' => 'E02002321',
        '6TH' => 'E02002314',
        '6TJ' => 'E02002314',
        '6TP' => 'E02002318',
        '6TR' => 'E02002318',
        '6TS' => 'E02002318',
        '6TT' => 'E02002314',
        '6TU' => 'E02002318',
        '6TX' => 'E02002318',
        '6TY' => 'E02002321',
        '6TZ' => 'E02002321',
        '6UA' => 'E02002321',
        '6UB' => 'E02002321',
        '6UD' => 'E02002321',
        '6UE' => 'E02002321',
        '6UF' => 'E02002321',
        '6UG' => 'E02002321',
        '6UH' => 'E02002321',
        '6UJ' => 'E02002321',
        '6UL' => 'E02002321',
        '6UN' => 'E02002321',
        '6UP' => 'E02002323',
        '6UQ' => 'E02002321',
        '6UR' => 'E02002321',
        '6UU' => 'E02002321',
        '6UW' => 'E02002321',
        '6UX' => 'E02002299',
        '6UY' => 'E02002323',
        '6WA' => 'E02002318',
        '6WB' => 'E02002299',
        '6WH' => 'E02002299',
        '6WJ' => 'E02002318',
        '6WL' => 'E02002299',
        '6WN' => 'E02002299',
        '6WP' => 'E02002318',
        '6WR' => 'E02002321',
        '6WS' => 'E02002299',
        '6WT' => 'E02002299',
        '6WU' => 'E02002299',
        '6WW' => 'E02002318',
        '6WX' => 'E02002299',
        '6WY' => 'E02002299',
        '6WZ' => 'E02002299',
        '6XA' => 'E02002321',
        '6XB' => 'E02002321',
        '6XD' => 'E02002321',
        '6XE' => 'E02002321',
        '6XF' => 'E02002321',
        '6XG' => 'E02002321',
        '6XH' => 'E02002321',
        '6XJ' => 'E02002326',
        '6XL' => 'E02002321',
        '6XN' => 'E02002321',
        '6XP' => 'E02002326',
        '6XQ' => 'E02002321',
        '6XR' => 'E02002326',
        '6XS' => 'E02002326',
        '6XT' => 'E02002321',
        '6XU' => 'E02002321',
        '6XW' => 'E02002321',
        '6XX' => 'E02002321',
        '6XY' => 'E02002323',
        '6XZ' => 'E02002323',
        '6YA' => 'E02002321',
        '6YB' => 'E02002321',
        '6YD' => 'E02002326',
        '6YE' => 'E02002321',
        '6YF' => 'E02002318',
        '6YG' => 'E02002329',
        '6YH' => 'E02002318',
        '6YJ' => 'E02002318',
        '6YL' => 'E02002318',
        '6YN' => 'E02002318',
        '6YQ' => 'E02002321',
        '6YS' => 'E02002318',
        '6YU' => 'E02002299',
        '6YW' => 'E02002299',
        '6YX' => 'E02002318',
        '6YY' => 'E02002299',
        '6YZ' => 'E02002318',
        '6ZA' => 'E02002321',
        '6ZB' => 'E02002299',
        '7AA' => 'E02002317',
        '7AB' => 'E02002320',
        '7AD' => 'E02002320',
        '7AE' => 'E02002320',
        '7AF' => 'E02002320',
        '7AG' => 'E02002320',
        '7AH' => 'E02002320',
        '7AJ' => 'E02002320',
        '7AL' => 'E02002320',
        '7AN' => 'E02002320',
        '7AP' => 'E02002320',
        '7AQ' => 'E02002317',
        '7AR' => 'E02002320',
        '7AS' => 'E02002320',
        '7AT' => 'E02002320',
        '7AU' => 'E02002320',
        '7AW' => 'E02002320',
        '7AX' => 'E02002317',
        '7AY' => 'E02002317',
        '7AZ' => 'E02002320',
        '7BA' => 'E02002320',
        '7BB' => 'E02002320',
        '7BD' => 'E02002320',
        '7BE' => 'E02002320',
        '7BG' => 'E02002317',
        '7BH' => 'E02002320',
        '7BJ' => 'E02002320',
        '7BP' => 'E02002320',
        '7BQ' => 'E02002317',
        '7BR' => 'E02002320',
        '7BS' => 'E02002323',
        '7BT' => 'E02002320',
        '7BU' => 'E02002320',
        '7BX' => 'E02002320',
        '7BY' => 'E02002320',
        '7BZ' => 'E02002320',
        '7DA' => 'E02002320',
        '7DB' => 'E02002320',
        '7DD' => 'E02002323',
        '7DE' => 'E02002323',
        '7DF' => 'E02002325',
        '7DG' => 'E02002325',
        '7DH' => 'E02002325',
        '7DJ' => 'E02002323',
        '7DL' => 'E02002323',
        '7DN' => 'E02002323',
        '7DP' => 'E02002323',
        '7DQ' => 'E02002325',
        '7DR' => 'E02002320',
        '7DS' => 'E02002323',
        '7DT' => 'E02002320',
        '7DU' => 'E02002320',
        '7DW' => 'E02002323',
        '7DZ' => 'E02002325',
        '7EA' => 'E02002323',
        '7EB' => 'E02002320',
        '7ED' => 'E02002323',
        '7EE' => 'E02002320',
        '7EF' => 'E02002320',
        '7EG' => 'E02002320',
        '7EH' => 'E02002320',
        '7EJ' => 'E02002320',
        '7EL' => 'E02002320',
        '7EN' => 'E02002320',
        '7EP' => 'E02002320',
        '7EQ' => 'E02002320',
        '7ER' => 'E02002320',
        '7ES' => 'E02002320',
        '7ET' => 'E02002320',
        '7EU' => 'E02002320',
        '7EW' => 'E02002320',
        '7EX' => 'E02002320',
        '7EY' => 'E02002320',
        '7EZ' => 'E02002320',
        '7FA' => 'E02002325',
        '7FB' => 'E02002325',
        '7FD' => 'E02002320',
        '7FE' => 'E02002325',
        '7FL' => 'E02002320',
        '7GZ' => 'E02002299',
        '7HA' => 'E02002320',
        '7HB' => 'E02002320',
        '7HD' => 'E02002320',
        '7HE' => 'E02002320',
        '7HF' => 'E02002320',
        '7HG' => 'E02002320',
        '7HH' => 'E02002320',
        '7HJ' => 'E02002320',
        '7HL' => 'E02002320',
        '7HN' => 'E02002320',
        '7HP' => 'E02002320',
        '7HQ' => 'E02002320',
        '7HR' => 'E02002320',
        '7HS' => 'E02002320',
        '7JA' => 'E02002320',
        '7JB' => 'E02002320',
        '7JD' => 'E02002320',
        '7JE' => 'E02002320',
        '7JF' => 'E02002320',
        '7JG' => 'E02002320',
        '7JH' => 'E02002320',
        '7JJ' => 'E02002320',
        '7JL' => 'E02002320',
        '7JN' => 'E02002320',
        '7JP' => 'E02002320',
        '7JQ' => 'E02002320',
        '7JR' => 'E02002320',
        '7JS' => 'E02002320',
        '7JT' => 'E02002320',
        '7JU' => 'E02002320',
        '7JW' => 'E02002320',
        '7JX' => 'E02002320',
        '7JY' => 'E02002320',
        '7JZ' => 'E02002320',
        '7LA' => 'E02002320',
        '7LB' => 'E02002320',
        '7LD' => 'E02002320',
        '7LE' => 'E02002320',
        '7LF' => 'E02002320',
        '7LG' => 'E02002320',
        '7LH' => 'E02002320',
        '7LJ' => 'E02002320',
        '7LL' => 'E02002320',
        '7LN' => 'E02002320',
        '7LP' => 'E02002318',
        '7LQ' => 'E02002320',
        '7LR' => 'E02002320',
        '7LS' => 'E02002318',
        '7LT' => 'E02002320',
        '7LU' => 'E02002320',
        '7LW' => 'E02002320',
        '7LX' => 'E02002320',
        '7LY' => 'E02002320',
        '7LZ' => 'E02002320',
        '7NA' => 'E02002318',
        '7NB' => 'E02002318',
        '7ND' => 'E02002320',
        '7NE' => 'E02002318',
        '7NF' => 'E02002318',
        '7NG' => 'E02002320',
        '7NH' => 'E02002320',
        '7NJ' => 'E02002320',
        '7NL' => 'E02002318',
        '7NN' => 'E02002320',
        '7NP' => 'E02002320',
        '7NQ' => 'E02002318',
        '7NR' => 'E02002320',
        '7NS' => 'E02002320',
        '7NT' => 'E02002320',
        '7NU' => 'E02002320',
        '7NW' => 'E02002320',
        '7NX' => 'E02002320',
        '7NY' => 'E02002320',
        '7NZ' => 'E02002320',
        '7PA' => 'E02002320',
        '7PB' => 'E02002320',
        '7PD' => 'E02002320',
        '7PE' => 'E02002320',
        '7PF' => 'E02002320',
        '7PG' => 'E02002320',
        '7PH' => 'E02002320',
        '7PJ' => 'E02002320',
        '7PL' => 'E02002320',
        '7PN' => 'E02002320',
        '7PP' => 'E02002318',
        '7PQ' => 'E02002320',
        '7PT' => 'E02002318',
        '7PU' => 'E02002318',
        '7PW' => 'E02002318',
        '7PX' => 'E02002318',
        '7PY' => 'E02002318',
        '7PZ' => 'E02002320',
        '7QA' => 'E02002318',
        '7QB' => 'E02002318',
        '7QD' => 'E02002318',
        '7QE' => 'E02002318',
        '7QF' => 'E02002318',
        '7QG' => 'E02002318',
        '7QH' => 'E02002318',
        '7QJ' => 'E02002318',
        '7QL' => 'E02002318',
        '7QN' => 'E02002318',
        '7QP' => 'E02002318',
        '7QQ' => 'E02002318',
        '7QR' => 'E02002318',
        '7QS' => 'E02002318',
        '7QT' => 'E02002320',
        '7QU' => 'E02002318',
        '7QW' => 'E02002318',
        '7QX' => 'E02002318',
        '7QY' => 'E02002318',
        '7QZ' => 'E02002318',
        '7RA' => 'E02002318',
        '7RB' => 'E02002318',
        '7RD' => 'E02002318',
        '7RE' => 'E02002318',
        '7RF' => 'E02002318',
        '7RG' => 'E02002318',
        '7RH' => 'E02002318',
        '7RJ' => 'E02002318',
        '7RL' => 'E02002318',
        '7RN' => 'E02002318',
        '7RQ' => 'E02002318',
        '7RR' => 'E02002318',
        '7RW' => 'E02002318',
        '7SN' => 'E02002320',
        '7SP' => 'E02002320',
        '7SR' => 'E02002320',
        '7SW' => 'E02002320',
        '7WA' => 'E02002320',
        '7WB' => 'E02002320',
        '7WD' => 'E02002320',
        '7WE' => 'E02002320',
        '7WF' => 'E02002320',
        '7WG' => 'E02002320',
        '7WH' => 'E02002320',
        '7WJ' => 'E02002320',
        '7WL' => 'E02002320',
        '7WN' => 'E02002320',
        '7WP' => 'E02002320',
        '7WQ' => 'E02002320',
        '7WR' => 'E02002320',
        '7WS' => 'E02002320',
        '7WT' => 'E02002320',
        '7WU' => 'E02002299',
        '7WW' => 'E02002320',
        '7WX' => 'E02002299',
        '7WY' => 'E02002320',
        '7WZ' => 'E02002299',
        '7XP' => 'E02002299',
        '7XQ' => 'E02002299',
        '7XR' => 'E02002299',
        '7XS' => 'E02002299',
        '7XT' => 'E02002320',
        '7XU' => 'E02002299',
        '7XW' => 'E02002299',
        '7XX' => 'E02002299',
        '7XY' => 'E02002299',
        '7XZ' => 'E02002299',
        '7YA' => 'E02002320',
        '7YB' => 'E02002299',
        '7YD' => 'E02002299',
        '7YE' => 'E02002323',
        '7YF' => 'E02002323',
        '7YG' => 'E02002323',
        '7YH' => 'E02002320',
        '7YJ' => 'E02002320',
        '7YL' => 'E02002299',
        '7YN' => 'E02002320',
        '7YP' => 'E02002299',
        '7YQ' => 'E02002299',
        '7YR' => 'E02002299',
        '7YS' => 'E02002299',
        '7YT' => 'E02002323',
        '7YU' => 'E02002299',
        '7YW' => 'E02002299',
        '7YX' => 'E02002299',
        '7YY' => 'E02002299',
        '7YZ' => 'E02002320',
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
