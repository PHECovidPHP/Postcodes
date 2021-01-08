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
final class RM2
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '5AA' => 'E02000476',
        '5AB' => 'E02000476',
        '5AD' => 'E02000476',
        '5AE' => 'E02000476',
        '5AF' => 'E02000475',
        '5AG' => 'E02000475',
        '5AH' => 'E02000475',
        '5AJ' => 'E02000475',
        '5AL' => 'E02000476',
        '5AN' => 'E02000475',
        '5AP' => 'E02000476',
        '5AQ' => 'E02000475',
        '5AR' => 'E02000477',
        '5AS' => 'E02000477',
        '5AT' => 'E02000477',
        '5AU' => 'E02000477',
        '5AW' => 'E02000475',
        '5AX' => 'E02000477',
        '5AY' => 'E02000476',
        '5AZ' => 'E02000476',
        '5BA' => 'E02000477',
        '5BB' => 'E02000477',
        '5BD' => 'E02000477',
        '5BE' => 'E02000477',
        '5BF' => 'E02000477',
        '5BG' => 'E02000475',
        '5BH' => 'E02000475',
        '5BJ' => 'E02000480',
        '5BL' => 'E02000475',
        '5BN' => 'E02000476',
        '5BP' => 'E02000480',
        '5BQ' => 'E02000475',
        '5BS' => 'E02000480',
        '5BT' => 'E02000475',
        '5BU' => 'E02000477',
        '5BW' => 'E02000475',
        '5BX' => 'E02000477',
        '5BY' => 'E02000475',
        '5BZ' => 'E02000477',
        '5DA' => 'E02000477',
        '5DB' => 'E02000477',
        '5DD' => 'E02000477',
        '5DE' => 'E02000480',
        '5DF' => 'E02000480',
        '5DG' => 'E02000480',
        '5DH' => 'E02000477',
        '5DJ' => 'E02000477',
        '5DL' => 'E02000475',
        '5DN' => 'E02000480',
        '5DP' => 'E02000475',
        '5DR' => 'E02000477',
        '5DW' => 'E02000480',
        '5DX' => 'E02000480',
        '5DY' => 'E02000480',
        '5DZ' => 'E02000480',
        '5EA' => 'E02000475',
        '5EB' => 'E02000475',
        '5ED' => 'E02000475',
        '5EE' => 'E02000475',
        '5EH' => 'E02000475',
        '5EJ' => 'E02000475',
        '5EL' => 'E02000475',
        '5EP' => 'E02000475',
        '5EQ' => 'E02000475',
        '5ET' => 'E02000475',
        '5EU' => 'E02000475',
        '5EX' => 'E02000475',
        '5GF' => 'E02000475',
        '5GL' => 'E02000475',
        '5GP' => 'E02000480',
        '5GR' => 'E02000480',
        '5HA' => 'E02000475',
        '5HB' => 'E02000475',
        '5HD' => 'E02000475',
        '5HH' => 'E02000475',
        '5HL' => 'E02000475',
        '5HR' => 'E02000475',
        '5HS' => 'E02000475',
        '5HT' => 'E02000475',
        '5HU' => 'E02000475',
        '5HX' => 'E02000475',
        '5JA' => 'E02000475',
        '5JB' => 'E02000475',
        '5JD' => 'E02000475',
        '5JP' => 'E02000477',
        '5JR' => 'E02000475',
        '5JS' => 'E02000475',
        '5JT' => 'E02000475',
        '5JU' => 'E02000475',
        '5JX' => 'E02000477',
        '5JY' => 'E02000477',
        '5LA' => 'E02000475',
        '5LB' => 'E02000475',
        '5LD' => 'E02000475',
        '5LH' => 'E02000475',
        '5LJ' => 'E02000475',
        '5LL' => 'E02000475',
        '5LN' => 'E02000475',
        '5LP' => 'E02000475',
        '5LR' => 'E02000475',
        '5LS' => 'E02000475',
        '5LT' => 'E02000475',
        '5LU' => 'E02000475',
        '5LW' => 'E02000475',
        '5LX' => 'E02000475',
        '5NA' => 'E02000475',
        '5NL' => 'E02000475',
        '5NP' => 'E02000475',
        '5NR' => 'E02000475',
        '5NS' => 'E02000475',
        '5NT' => 'E02000475',
        '5NU' => 'E02000475',
        '5NX' => 'E02000475',
        '5NY' => 'E02000480',
        '5PA' => 'E02000475',
        '5PB' => 'E02000475',
        '5PD' => 'E02000475',
        '5PH' => 'E02000475',
        '5PJ' => 'E02000475',
        '5PL' => 'E02000471',
        '5PP' => 'E02000471',
        '5PQ' => 'E02000475',
        '5PR' => 'E02000471',
        '5PS' => 'E02000477',
        '5PT' => 'E02000477',
        '5PU' => 'E02000475',
        '5PX' => 'E02000475',
        '5PY' => 'E02000477',
        '5QB' => 'E02000475',
        '5QD' => 'E02000475',
        '5QH' => 'E02000475',
        '5QJ' => 'E02000475',
        '5QL' => 'E02000475',
        '5QP' => 'E02000475',
        '5QR' => 'E02000471',
        '5QS' => 'E02000471',
        '5QT' => 'E02000471',
        '5QU' => 'E02000471',
        '5QX' => 'E02000471',
        '5QY' => 'E02000480',
        '5RA' => 'E02000471',
        '5RB' => 'E02000471',
        '5RD' => 'E02000471',
        '5RH' => 'E02000471',
        '5RJ' => 'E02000471',
        '5RL' => 'E02000471',
        '5RP' => 'E02000471',
        '5RR' => 'E02000471',
        '5RS' => 'E02000471',
        '5SA' => 'E02000477',
        '5SB' => 'E02000477',
        '5SD' => 'E02000477',
        '5SE' => 'E02000477',
        '5SH' => 'E02000477',
        '5SJ' => 'E02000477',
        '5SL' => 'E02000477',
        '5SN' => 'E02000477',
        '5SP' => 'E02000477',
        '5SR' => 'E02000477',
        '5SS' => 'E02000477',
        '5ST' => 'E02000477',
        '5SU' => 'E02000477',
        '5SX' => 'E02000477',
        '5SY' => 'E02000477',
        '5TA' => 'E02000477',
        '5TB' => 'E02000477',
        '5TD' => 'E02000477',
        '5TH' => 'E02000475',
        '5TJ' => 'E02000475',
        '5TP' => 'E02000477',
        '5UA' => 'E02000477',
        '5UB' => 'E02000477',
        '5UD' => 'E02000477',
        '5UE' => 'E02000477',
        '5UF' => 'E02000477',
        '5UG' => 'E02000477',
        '5UH' => 'E02000477',
        '5UJ' => 'E02000477',
        '5UL' => 'E02000477',
        '5UN' => 'E02000477',
        '5UP' => 'E02000477',
        '5UQ' => 'E02000477',
        '5UR' => 'E02000477',
        '5US' => 'E02000477',
        '5UT' => 'E02000477',
        '5UU' => 'E02000477',
        '5UW' => 'E02000477',
        '5UX' => 'E02000477',
        '5WA' => 'E02000480',
        '5WB' => 'E02000480',
        '5WD' => 'E02000480',
        '5WH' => 'E02000480',
        '5WR' => 'E02000480',
        '5WY' => 'E02000480',
        '5WZ' => 'E02000480',
        '5XA' => 'E02000477',
        '5XB' => 'E02000477',
        '5XD' => 'E02000475',
        '5XE' => 'E02000477',
        '5XH' => 'E02000477',
        '5XJ' => 'E02000475',
        '5XL' => 'E02000475',
        '5XN' => 'E02000475',
        '5XP' => 'E02000475',
        '5XR' => 'E02000475',
        '5YA' => 'E02000480',
        '5YB' => 'E02000480',
        '5YE' => 'E02000480',
        '5YF' => 'E02000475',
        '5YQ' => 'E02000475',
        '5YT' => 'E02000480',
        '5YW' => 'E02000480',
        '5YY' => 'E02000475',
        '5YZ' => 'E02000480',
        '5ZB' => 'E02000480',
        '6AA' => 'E02000475',
        '6AB' => 'E02000475',
        '6AD' => 'E02000475',
        '6AE' => 'E02000473',
        '6AF' => 'E02000475',
        '6AG' => 'E02000475',
        '6AH' => 'E02000475',
        '6AJ' => 'E02000475',
        '6AL' => 'E02000475',
        '6AN' => 'E02000475',
        '6AP' => 'E02000475',
        '6AQ' => 'E02000473',
        '6AR' => 'E02000475',
        '6AS' => 'E02000475',
        '6AT' => 'E02000475',
        '6AU' => 'E02000475',
        '6AW' => 'E02000473',
        '6AX' => 'E02000475',
        '6AY' => 'E02000475',
        '6AZ' => 'E02000473',
        '6BA' => 'E02000475',
        '6BB' => 'E02000473',
        '6BD' => 'E02000475',
        '6BE' => 'E02000475',
        '6BG' => 'E02000477',
        '6BH' => 'E02000473',
        '6BJ' => 'E02000480',
        '6BL' => 'E02000473',
        '6BN' => 'E02000480',
        '6BP' => 'E02000477',
        '6BQ' => 'E02000480',
        '6BS' => 'E02000475',
        '6BT' => 'E02000475',
        '6BU' => 'E02000475',
        '6BW' => 'E02000473',
        '6BX' => 'E02000475',
        '6BY' => 'E02000475',
        '6BZ' => 'E02000473',
        '6DA' => 'E02000475',
        '6DB' => 'E02000475',
        '6DD' => 'E02000475',
        '6DE' => 'E02000480',
        '6DF' => 'E02000473',
        '6DG' => 'E02000475',
        '6DH' => 'E02000475',
        '6DJ' => 'E02000475',
        '6DL' => 'E02000475',
        '6DN' => 'E02000480',
        '6DP' => 'E02000475',
        '6DQ' => 'E02000480',
        '6DR' => 'E02000475',
        '6DS' => 'E02000475',
        '6DT' => 'E02000480',
        '6DU' => 'E02000475',
        '6DW' => 'E02000480',
        '6DX' => 'E02000475',
        '6DY' => 'E02000480',
        '6DZ' => 'E02000473',
        '6EA' => 'E02000475',
        '6EB' => 'E02000475',
        '6ED' => 'E02000475',
        '6EE' => 'E02000475',
        '6EH' => 'E02000473',
        '6EJ' => 'E02000475',
        '6EL' => 'E02000475',
        '6EN' => 'E02000475',
        '6EP' => 'E02000475',
        '6EQ' => 'E02000480',
        '6ER' => 'E02000475',
        '6ES' => 'E02000475',
        '6ET' => 'E02000475',
        '6EU' => 'E02000475',
        '6EW' => 'E02000475',
        '6EX' => 'E02000475',
        '6EY' => 'E02000475',
        '6EZ' => 'E02000480',
        '6GD' => 'E02000475',
        '6GE' => 'E02000475',
        '6GH' => 'E02000475',
        '6GL' => 'E02000475',
        '6GN' => 'E02000475',
        '6GP' => 'E02000475',
        '6HA' => 'E02000475',
        '6HB' => 'E02000475',
        '6HD' => 'E02000475',
        '6HE' => 'E02000473',
        '6HG' => 'E02000475',
        '6HH' => 'E02000475',
        '6HJ' => 'E02000473',
        '6HL' => 'E02000475',
        '6HN' => 'E02000480',
        '6HR' => 'E02000475',
        '6HS' => 'E02000473',
        '6HT' => 'E02000473',
        '6HU' => 'E02000473',
        '6HW' => 'E02000473',
        '6HX' => 'E02000473',
        '6HY' => 'E02000473',
        '6JA' => 'E02000475',
        '6JB' => 'E02000475',
        '6JD' => 'E02000475',
        '6JE' => 'E02000475',
        '6JF' => 'E02000475',
        '6JG' => 'E02000480',
        '6JH' => 'E02000475',
        '6JJ' => 'E02000475',
        '6JL' => 'E02000475',
        '6JN' => 'E02000475',
        '6JP' => 'E02000475',
        '6JQ' => 'E02000475',
        '6JR' => 'E02000475',
        '6JS' => 'E02000475',
        '6JT' => 'E02000475',
        '6JU' => 'E02000475',
        '6JX' => 'E02000475',
        '6LA' => 'E02000475',
        '6LB' => 'E02000475',
        '6LD' => 'E02000473',
        '6LH' => 'E02000473',
        '6LJ' => 'E02000473',
        '6LS' => 'E02000475',
        '6LT' => 'E02000475',
        '6LU' => 'E02000475',
        '6LX' => 'E02000475',
        '6NA' => 'E02000475',
        '6NB' => 'E02000475',
        '6ND' => 'E02000475',
        '6NE' => 'E02000473',
        '6NF' => 'E02000473',
        '6NH' => 'E02000475',
        '6NJ' => 'E02000475',
        '6NL' => 'E02000475',
        '6NP' => 'E02000475',
        '6NR' => 'E02000473',
        '6NS' => 'E02000473',
        '6NT' => 'E02000473',
        '6NU' => 'E02000473',
        '6NX' => 'E02000473',
        '6PA' => 'E02000473',
        '6PF' => 'E02000473',
        '6PH' => 'E02000473',
        '6PJ' => 'E02000473',
        '6PL' => 'E02000473',
        '6PP' => 'E02000473',
        '6PR' => 'E02000473',
        '6PS' => 'E02000473',
        '6PT' => 'E02000473',
        '6PU' => 'E02000473',
        '6PX' => 'E02000473',
        '6PY' => 'E02000473',
        '6QA' => 'E02000473',
        '6QB' => 'E02000475',
        '6QD' => 'E02000473',
        '6QE' => 'E02000475',
        '6QH' => 'E02000475',
        '6QR' => 'E02000475',
        '6QS' => 'E02000475',
        '6QT' => 'E02000475',
        '6QU' => 'E02000475',
        '6QX' => 'E02000473',
        '6QZ' => 'E02000480',
        '6RA' => 'E02000473',
        '6RB' => 'E02000473',
        '6RD' => 'E02000473',
        '6RG' => 'E02000473',
        '6RH' => 'E02000473',
        '6RJ' => 'E02000473',
        '6RL' => 'E02000473',
        '6RP' => 'E02000473',
        '6RQ' => 'E02000473',
        '6RR' => 'E02000473',
        '6RS' => 'E02000473',
        '6RT' => 'E02000473',
        '6RU' => 'E02000473',
        '6RW' => 'E02000473',
        '6RX' => 'E02000473',
        '6RY' => 'E02000473',
        '6SA' => 'E02000475',
        '6SB' => 'E02000475',
        '6WA' => 'E02000480',
        '6WB' => 'E02000480',
        '6WD' => 'E02000480',
        '6WE' => 'E02000480',
        '6WF' => 'E02000480',
        '6WH' => 'E02000480',
        '6WJ' => 'E02000480',
        '6WP' => 'E02000480',
        '6WZ' => 'E02000480',
        '6XA' => 'E02000480',
        '6XE' => 'E02000480',
        '6XT' => 'E02000473',
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
