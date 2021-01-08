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
final class KT24
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '5AA' => 'E02006346',
        '5AB' => 'E02006346',
        '5AD' => 'E02006346',
        '5AE' => 'E02006346',
        '5AF' => 'E02006346',
        '5AG' => 'E02006346',
        '5AH' => 'E02006346',
        '5AJ' => 'E02006346',
        '5AL' => 'E02006346',
        '5AN' => 'E02006346',
        '5AP' => 'E02006346',
        '5AQ' => 'E02006346',
        '5AR' => 'E02006346',
        '5AS' => 'E02006346',
        '5AT' => 'E02006346',
        '5AU' => 'E02006346',
        '5AX' => 'E02006346',
        '5AY' => 'E02006346',
        '5AZ' => 'E02006346',
        '5BA' => 'E02006346',
        '5BB' => 'E02006346',
        '5BD' => 'E02006346',
        '5BE' => 'E02006346',
        '5BG' => 'E02006346',
        '5BH' => 'E02006346',
        '5BJ' => 'E02006346',
        '5BL' => 'E02006346',
        '5BN' => 'E02006346',
        '5BP' => 'E02006346',
        '5BQ' => 'E02006346',
        '5BS' => 'E02006346',
        '5BT' => 'E02006346',
        '5BU' => 'E02006346',
        '5BW' => 'E02006346',
        '5BX' => 'E02006346',
        '5BY' => 'E02006346',
        '5BZ' => 'E02006346',
        '5DA' => 'E02006346',
        '5DB' => 'E02006346',
        '5DD' => 'E02006346',
        '5DE' => 'E02006346',
        '5DF' => 'E02006346',
        '5DG' => 'E02006346',
        '5DH' => 'E02006346',
        '5DJ' => 'E02006346',
        '5DL' => 'E02006346',
        '5DN' => 'E02006346',
        '5DP' => 'E02006344',
        '5DQ' => 'E02006346',
        '5DR' => 'E02006346',
        '5DS' => 'E02006346',
        '5DT' => 'E02006346',
        '5DU' => 'E02006346',
        '5DX' => 'E02006346',
        '5DY' => 'E02006346',
        '5DZ' => 'E02006346',
        '5EA' => 'E02006346',
        '5ED' => 'E02006346',
        '5EE' => 'E02006346',
        '5EF' => 'E02006346',
        '5EG' => 'E02006346',
        '5EH' => 'E02006346',
        '5EL' => 'E02006346',
        '5EN' => 'E02006346',
        '5EP' => 'E02006346',
        '5EQ' => 'E02006346',
        '5ER' => 'E02006346',
        '5ES' => 'E02006346',
        '5ET' => 'E02006346',
        '5EU' => 'E02006346',
        '5EW' => 'E02006346',
        '5EY' => 'E02006346',
        '5EZ' => 'E02006346',
        '5GA' => 'E02006346',
        '5HD' => 'E02006346',
        '5HE' => 'E02006346',
        '5HF' => 'E02006346',
        '5HG' => 'E02006346',
        '5HH' => 'E02006346',
        '5HJ' => 'E02006346',
        '5HL' => 'E02006346',
        '5HN' => 'E02006346',
        '5HR' => 'E02006346',
        '5HU' => 'E02006346',
        '5HX' => 'E02006346',
        '5JA' => 'E02006346',
        '5JB' => 'E02006346',
        '5JD' => 'E02006346',
        '5JE' => 'E02006346',
        '5JF' => 'E02006346',
        '5JG' => 'E02006346',
        '5JH' => 'E02006346',
        '5JJ' => 'E02006346',
        '5JL' => 'E02006346',
        '5JN' => 'E02006346',
        '5JP' => 'E02006346',
        '5JQ' => 'E02006346',
        '5JR' => 'E02006346',
        '5JS' => 'E02006346',
        '5JT' => 'E02006346',
        '5JU' => 'E02006346',
        '5JW' => 'E02006346',
        '5JX' => 'E02006346',
        '5JY' => 'E02006346',
        '5LA' => 'E02006346',
        '5LB' => 'E02006346',
        '5LG' => 'E02006346',
        '5LH' => 'E02006346',
        '5LJ' => 'E02006346',
        '5LL' => 'E02006346',
        '5LN' => 'E02006346',
        '5LP' => 'E02006346',
        '5LQ' => 'E02006346',
        '5LR' => 'E02006346',
        '5LS' => 'E02006346',
        '5LT' => 'E02006346',
        '5LU' => 'E02006346',
        '5LW' => 'E02006346',
        '5LX' => 'E02006346',
        '5LY' => 'E02006346',
        '5LZ' => 'E02006346',
        '5NA' => 'E02006346',
        '5NB' => 'E02006346',
        '5ND' => 'E02006346',
        '5NE' => 'E02006346',
        '5NJ' => 'E02006346',
        '5NL' => 'E02006346',
        '5NN' => 'E02006346',
        '5NP' => 'E02006346',
        '5NQ' => 'E02006346',
        '5NR' => 'E02006346',
        '5NS' => 'E02006346',
        '5NT' => 'E02006346',
        '5NU' => 'E02006346',
        '5NW' => 'E02006346',
        '5NX' => 'E02006346',
        '5NY' => 'E02006346',
        '5NZ' => 'E02006346',
        '5PD' => 'E02006346',
        '5PE' => 'E02006346',
        '5PF' => 'E02006346',
        '5PG' => 'E02006346',
        '5PH' => 'E02006346',
        '5PJ' => 'E02006346',
        '5PL' => 'E02006346',
        '5PN' => 'E02006346',
        '5PP' => 'E02006346',
        '5PQ' => 'E02006346',
        '5PR' => 'E02006346',
        '5PS' => 'E02006346',
        '5PT' => 'E02006346',
        '5PU' => 'E02006346',
        '5PW' => 'E02006346',
        '5PX' => 'E02006346',
        '5PY' => 'E02006346',
        '5PZ' => 'E02006346',
        '5QA' => 'E02006346',
        '5QB' => 'E02006346',
        '5QD' => 'E02006346',
        '5QE' => 'E02006346',
        '5QF' => 'E02006346',
        '5QG' => 'E02006346',
        '5QH' => 'E02006346',
        '5QJ' => 'E02006346',
        '5QL' => 'E02006346',
        '5QN' => 'E02006346',
        '5QP' => 'E02006346',
        '5QQ' => 'E02006346',
        '5QR' => 'E02006346',
        '5QT' => 'E02006346',
        '5QU' => 'E02006346',
        '5QW' => 'E02006346',
        '5QX' => 'E02006346',
        '5QY' => 'E02006346',
        '5RD' => 'E02006346',
        '5RE' => 'E02006346',
        '5RF' => 'E02006346',
        '5RG' => 'E02006346',
        '5RH' => 'E02006346',
        '5RJ' => 'E02006346',
        '5RL' => 'E02006346',
        '5RN' => 'E02006346',
        '5RP' => 'E02006346',
        '5RQ' => 'E02006346',
        '5RU' => 'E02006346',
        '5RW' => 'E02006346',
        '5RX' => 'E02006346',
        '5RY' => 'E02006346',
        '5RZ' => 'E02006346',
        '5SA' => 'E02006346',
        '5SB' => 'E02006346',
        '5SD' => 'E02006346',
        '5SE' => 'E02006346',
        '5SF' => 'E02006346',
        '5SG' => 'E02006346',
        '5SH' => 'E02006346',
        '5SJ' => 'E02006346',
        '5SL' => 'E02006346',
        '5SN' => 'E02006346',
        '5SP' => 'E02006346',
        '5SQ' => 'E02006346',
        '5SR' => 'E02006346',
        '5ST' => 'E02006346',
        '5SW' => 'E02006346',
        '5TA' => 'E02006346',
        '5TB' => 'E02006346',
        '5TD' => 'E02006346',
        '5TE' => 'E02006346',
        '5TF' => 'E02006346',
        '5TG' => 'E02006346',
        '5TP' => 'E02006346',
        '5TU' => 'E02006346',
        '5TY' => 'E02006346',
        '5TZ' => 'E02006346',
        '5UB' => 'E02006346',
        '5UL' => 'E02006346',
        '5WA' => 'E02006346',
        '5WB' => 'E02006346',
        '5WD' => 'E02006346',
        '5WE' => 'E02006346',
        '5WF' => 'E02006346',
        '5WG' => 'E02006346',
        '5WH' => 'E02006346',
        '5WJ' => 'E02006346',
        '5WL' => 'E02006346',
        '5WN' => 'E02006346',
        '5WP' => 'E02006346',
        '5WQ' => 'E02006346',
        '5WS' => 'E02006346',
        '5XQ' => 'E02006346',
        '5XT' => 'E02006346',
        '5XY' => 'E02006346',
        '5YA' => 'E02006346',
        '5YB' => 'E02006346',
        '5YD' => 'E02006346',
        '5YE' => 'E02006346',
        '5YF' => 'E02006346',
        '5YG' => 'E02006346',
        '5YH' => 'E02006346',
        '5YJ' => 'E02006346',
        '5YL' => 'E02006346',
        '5YN' => 'E02006346',
        '5YP' => 'E02006346',
        '5YQ' => 'E02006346',
        '5YR' => 'E02006346',
        '5YS' => 'E02006346',
        '5YT' => 'E02006346',
        '5YU' => 'E02006346',
        '5YW' => 'E02006346',
        '5YX' => 'E02006346',
        '5YY' => 'E02006346',
        '5YZ' => 'E02006346',
        '6AA' => 'E02006346',
        '6AB' => 'E02006346',
        '6AD' => 'E02006346',
        '6AE' => 'E02006346',
        '6AF' => 'E02006346',
        '6AG' => 'E02006346',
        '6AH' => 'E02006346',
        '6AJ' => 'E02006346',
        '6AL' => 'E02006346',
        '6AN' => 'E02006346',
        '6AP' => 'E02006346',
        '6AQ' => 'E02006346',
        '6AR' => 'E02006346',
        '6AS' => 'E02006346',
        '6AT' => 'E02006346',
        '6AU' => 'E02006346',
        '6AW' => 'E02006346',
        '6AX' => 'E02006346',
        '6AY' => 'E02006346',
        '6AZ' => 'E02006346',
        '6BA' => 'E02006346',
        '6BB' => 'E02006346',
        '6BD' => 'E02006346',
        '6BE' => 'E02006346',
        '6BF' => 'E02006346',
        '6BG' => 'E02006346',
        '6BH' => 'E02006346',
        '6BJ' => 'E02006346',
        '6BL' => 'E02006346',
        '6BN' => 'E02006346',
        '6BP' => 'E02006346',
        '6BQ' => 'E02006346',
        '6BS' => 'E02006346',
        '6BT' => 'E02006346',
        '6BU' => 'E02006346',
        '6BW' => 'E02006346',
        '6BX' => 'E02006346',
        '6BY' => 'E02006346',
        '6BZ' => 'E02006346',
        '6DA' => 'E02006346',
        '6DB' => 'E02006346',
        '6DD' => 'E02006346',
        '6DE' => 'E02006346',
        '6DF' => 'E02006346',
        '6DG' => 'E02006346',
        '6DH' => 'E02006346',
        '6DJ' => 'E02006346',
        '6DQ' => 'E02006346',
        '6DT' => 'E02006346',
        '6DU' => 'E02006346',
        '6DX' => 'E02006346',
        '6DY' => 'E02006346',
        '6DZ' => 'E02006346',
        '6EA' => 'E02006346',
        '6EB' => 'E02006346',
        '6ED' => 'E02006346',
        '6EE' => 'E02006346',
        '6EF' => 'E02006346',
        '6EG' => 'E02006346',
        '6EH' => 'E02006346',
        '6EJ' => 'E02006346',
        '6EL' => 'E02006346',
        '6EN' => 'E02006346',
        '6EP' => 'E02006346',
        '6EQ' => 'E02006346',
        '6ER' => 'E02006346',
        '6ES' => 'E02006361',
        '6ET' => 'E02006346',
        '6EW' => 'E02006346',
        '6EZ' => 'E02006346',
        '6FA' => 'E02006346',
        '6GX' => 'E02006346',
        '6HH' => 'E02006346',
        '6HJ' => 'E02006346',
        '6HL' => 'E02006346',
        '6HN' => 'E02006346',
        '6HP' => 'E02006346',
        '6HQ' => 'E02006346',
        '6HR' => 'E02006346',
        '6HS' => 'E02006346',
        '6HT' => 'E02006346',
        '6HU' => 'E02006346',
        '6HW' => 'E02006346',
        '6HX' => 'E02006346',
        '6HY' => 'E02006346',
        '6HZ' => 'E02006346',
        '6JA' => 'E02006346',
        '6JB' => 'E02006346',
        '6JD' => 'E02006346',
        '6JE' => 'E02006346',
        '6JF' => 'E02006346',
        '6JG' => 'E02006346',
        '6JH' => 'E02006346',
        '6JJ' => 'E02006346',
        '6JL' => 'E02006346',
        '6JN' => 'E02006346',
        '6JP' => 'E02006346',
        '6JQ' => 'E02006346',
        '6JR' => 'E02006346',
        '6JS' => 'E02006346',
        '6JT' => 'E02006344',
        '6JU' => 'E02006346',
        '6JW' => 'E02006346',
        '6JX' => 'E02006346',
        '6LF' => 'E02006346',
        '6LG' => 'E02006346',
        '6LH' => 'E02006346',
        '6LJ' => 'E02006346',
        '6LL' => 'E02006346',
        '6LN' => 'E02006346',
        '6LP' => 'E02006346',
        '6LQ' => 'E02006346',
        '6LR' => 'E02006346',
        '6LS' => 'E02006346',
        '6LT' => 'E02006346',
        '6LU' => 'E02006346',
        '6LW' => 'E02006346',
        '6LX' => 'E02006346',
        '6LY' => 'E02006346',
        '6LZ' => 'E02006346',
        '6NA' => 'E02006346',
        '6NB' => 'E02006346',
        '6ND' => 'E02006346',
        '6NE' => 'E02006346',
        '6NG' => 'E02006346',
        '6NH' => 'E02006346',
        '6NS' => 'E02006346',
        '6NT' => 'E02006346',
        '6NU' => 'E02006346',
        '6NX' => 'E02006346',
        '6NY' => 'E02006346',
        '6NZ' => 'E02006346',
        '6PA' => 'E02006346',
        '6PB' => 'E02006346',
        '6PD' => 'E02006346',
        '6PE' => 'E02006346',
        '6PF' => 'E02006346',
        '6PG' => 'E02006346',
        '6PU' => 'E02006346',
        '6PX' => 'E02006346',
        '6QA' => 'E02006346',
        '6QB' => 'E02006346',
        '6QD' => 'E02006346',
        '6QE' => 'E02006346',
        '6QF' => 'E02006346',
        '6QG' => 'E02006346',
        '6QH' => 'E02006346',
        '6QJ' => 'E02006346',
        '6QL' => 'E02006346',
        '6QN' => 'E02006346',
        '6QP' => 'E02006346',
        '6QQ' => 'E02006346',
        '6QR' => 'E02006346',
        '6QS' => 'E02006346',
        '6QT' => 'E02006346',
        '6QU' => 'E02006346',
        '6QW' => 'E02006346',
        '6QX' => 'E02006346',
        '6QY' => 'E02006346',
        '6QZ' => 'E02006346',
        '6RE' => 'E02006346',
        '6RH' => 'E02006346',
        '6RJ' => 'E02006346',
        '6RL' => 'E02006346',
        '6RN' => 'E02006346',
        '6RP' => 'E02006346',
        '6RR' => 'E02006346',
        '6RS' => 'E02006346',
        '6RT' => 'E02006346',
        '6RU' => 'E02006346',
        '6RW' => 'E02006346',
        '6RX' => 'E02006346',
        '6RY' => 'E02006346',
        '6RZ' => 'E02006346',
        '6SA' => 'E02006346',
        '6SB' => 'E02006346',
        '6SD' => 'E02006346',
        '6SE' => 'E02006346',
        '6SF' => 'E02006346',
        '6SG' => 'E02006346',
        '6SH' => 'E02006346',
        '6SJ' => 'E02006346',
        '6SL' => 'E02006346',
        '6SN' => 'E02006346',
        '6SP' => 'E02006346',
        '6SQ' => 'E02006346',
        '6SR' => 'E02006346',
        '6SS' => 'E02006346',
        '6ST' => 'E02006346',
        '6SU' => 'E02006346',
        '6SW' => 'E02006346',
        '6SX' => 'E02006346',
        '6SY' => 'E02006346',
        '6SZ' => 'E02006346',
        '6TA' => 'E02006346',
        '6TB' => 'E02006346',
        '6TF' => 'E02006346',
        '6TG' => 'E02006346',
        '6TH' => 'E02006346',
        '6TJ' => 'E02006346',
        '6TL' => 'E02006346',
        '6TN' => 'E02006346',
        '6TT' => 'E02006346',
        '6TU' => 'E02006346',
        '6TW' => 'E02006346',
        '6TX' => 'E02006346',
        '6TY' => 'E02006346',
        '6TZ' => 'E02006346',
        '6WA' => 'E02006346',
        '6WB' => 'E02006346',
        '6WD' => 'E02006346',
        '6WE' => 'E02006346',
        '6WF' => 'E02006346',
        '6WG' => 'E02006346',
        '6WH' => 'E02006346',
        '6WJ' => 'E02006346',
        '6WL' => 'E02006346',
        '6WN' => 'E02006346',
        '6WP' => 'E02006346',
        '6WQ' => 'E02006346',
        '6WY' => 'E02006346',
        '6XA' => 'E02006346',
        '6XB' => 'E02006346',
        '6XQ' => 'E02006346',
        '6XY' => 'E02006346',
        '6YA' => 'E02006346',
        '6YB' => 'E02006346',
        '6YD' => 'E02006346',
        '6YE' => 'E02006346',
        '6YF' => 'E02006346',
        '6YG' => 'E02006346',
        '6YH' => 'E02006346',
        '6YJ' => 'E02006346',
        '6YL' => 'E02006346',
        '6YN' => 'E02006346',
        '6YP' => 'E02006346',
        '6YQ' => 'E02006346',
        '6YR' => 'E02006346',
        '6YS' => 'E02006346',
        '6YT' => 'E02006346',
        '6YU' => 'E02006346',
        '6YW' => 'E02006346',
        '6YY' => 'E02006346',
        '6ZA' => 'E02006346',
        '7JU' => 'E02006346',
        '9AA' => 'E02006346',
        '9AB' => 'E02006346',
        '9AD' => 'E02006346',
        '9AE' => 'E02006346',
        '9AF' => 'E02006346',
        '9AG' => 'E02006346',
        '9AH' => 'E02006346',
        '9AJ' => 'E02006346',
        '9AL' => 'E02006346',
        '9AN' => 'E02006346',
        '9AQ' => 'E02006346',
        '9AR' => 'E02006346',
        '9AS' => 'E02006346',
        '9AT' => 'E02006346',
        '9AU' => 'E02006346',
        '9AW' => 'E02006346',
        '9AX' => 'E02006346',
        '9AY' => 'E02006346',
        '9AZ' => 'E02006346',
        '9BA' => 'E02006346',
        '9BB' => 'E02006346',
        '9BD' => 'E02006346',
        '9BE' => 'E02006346',
        '9BF' => 'E02006346',
        '9BG' => 'E02006346',
        '9BH' => 'E02006346',
        '9BJ' => 'E02006346',
        '9BL' => 'E02006346',
        '9BN' => 'E02006346',
        '9BP' => 'E02006346',
        '9BQ' => 'E02006346',
        '9BR' => 'E02006346',
        '9BS' => 'E02006346',
        '9BT' => 'E02006346',
        '9BU' => 'E02006346',
        '9BW' => 'E02006346',
        '9BX' => 'E02006346',
        '9BY' => 'E02006346',
        '9BZ' => 'E02006346',
        '9DA' => 'E02006346',
        '9DB' => 'E02006346',
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