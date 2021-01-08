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
final class LN9
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '5AA' => 'E02005434',
        '5AB' => 'E02005434',
        '5AD' => 'E02005434',
        '5AE' => 'E02005434',
        '5AF' => 'E02005434',
        '5AG' => 'E02005434',
        '5AH' => 'E02005434',
        '5AJ' => 'E02005434',
        '5AL' => 'E02005434',
        '5AN' => 'E02005434',
        '5AP' => 'E02005434',
        '5AQ' => 'E02005434',
        '5AR' => 'E02005434',
        '5AS' => 'E02005434',
        '5AT' => 'E02005434',
        '5AU' => 'E02005434',
        '5AW' => 'E02005434',
        '5AX' => 'E02005434',
        '5AY' => 'E02005434',
        '5AZ' => 'E02005434',
        '5BA' => 'E02005434',
        '5BB' => 'E02005434',
        '5BD' => 'E02005434',
        '5BE' => 'E02005434',
        '5BF' => 'E02005434',
        '5BG' => 'E02005434',
        '5BH' => 'E02005434',
        '5BJ' => 'E02005434',
        '5BL' => 'E02005434',
        '5BN' => 'E02005434',
        '5BP' => 'E02005434',
        '5BQ' => 'E02005434',
        '5BS' => 'E02005434',
        '5BT' => 'E02005434',
        '5BU' => 'E02005434',
        '5BW' => 'E02005434',
        '5BX' => 'E02005434',
        '5BY' => 'E02005434',
        '5DA' => 'E02005434',
        '5DD' => 'E02005434',
        '5DE' => 'E02005434',
        '5DF' => 'E02005434',
        '5DG' => 'E02005434',
        '5DH' => 'E02005434',
        '5DJ' => 'E02005434',
        '5DL' => 'E02005434',
        '5DN' => 'E02005434',
        '5DP' => 'E02005434',
        '5DQ' => 'E02005434',
        '5DR' => 'E02005434',
        '5DS' => 'E02005434',
        '5DT' => 'E02005434',
        '5DU' => 'E02005434',
        '5DW' => 'E02005434',
        '5DX' => 'E02005434',
        '5DY' => 'E02005434',
        '5DZ' => 'E02005434',
        '5EA' => 'E02005434',
        '5EB' => 'E02005434',
        '5ED' => 'E02005434',
        '5EE' => 'E02005434',
        '5EF' => 'E02005434',
        '5EG' => 'E02005434',
        '5EH' => 'E02005434',
        '5EJ' => 'E02005434',
        '5EL' => 'E02005434',
        '5EN' => 'E02005434',
        '5EP' => 'E02005434',
        '5EQ' => 'E02005434',
        '5ER' => 'E02005434',
        '5ES' => 'E02005434',
        '5ET' => 'E02005434',
        '5EU' => 'E02005434',
        '5EW' => 'E02005434',
        '5EX' => 'E02005434',
        '5EY' => 'E02005434',
        '5EZ' => 'E02005434',
        '5FA' => 'E02005434',
        '5FE' => 'E02005434',
        '5FF' => 'E02005434',
        '5GA' => 'E02005434',
        '5GB' => 'E02005434',
        '5GD' => 'E02005434',
        '5GE' => 'E02005434',
        '5GF' => 'E02005434',
        '5HA' => 'E02005434',
        '5HB' => 'E02005434',
        '5HD' => 'E02005434',
        '5HE' => 'E02005434',
        '5HF' => 'E02005434',
        '5HG' => 'E02005434',
        '5HH' => 'E02005434',
        '5HJ' => 'E02005434',
        '5HL' => 'E02005434',
        '5HN' => 'E02005434',
        '5HP' => 'E02005434',
        '5HQ' => 'E02005434',
        '5HR' => 'E02005434',
        '5HS' => 'E02005434',
        '5HT' => 'E02005434',
        '5HU' => 'E02005434',
        '5HW' => 'E02005434',
        '5HX' => 'E02005434',
        '5HY' => 'E02005434',
        '5HZ' => 'E02005434',
        '5JA' => 'E02005434',
        '5JB' => 'E02005434',
        '5JD' => 'E02005434',
        '5JE' => 'E02005434',
        '5JF' => 'E02005434',
        '5JG' => 'E02005434',
        '5JH' => 'E02005434',
        '5JJ' => 'E02005434',
        '5JL' => 'E02005430',
        '5JP' => 'E02005434',
        '5JQ' => 'E02005434',
        '5JR' => 'E02005434',
        '5JS' => 'E02005434',
        '5JT' => 'E02005430',
        '5JU' => 'E02005430',
        '5JX' => 'E02005430',
        '5JY' => 'E02005430',
        '5JZ' => 'E02005430',
        '5LA' => 'E02005430',
        '5LB' => 'E02005430',
        '5LD' => 'E02005430',
        '5LJ' => 'E02005434',
        '5LL' => 'E02005434',
        '5LN' => 'E02005434',
        '5LP' => 'E02005434',
        '5LU' => 'E02005434',
        '5LX' => 'E02005434',
        '5LY' => 'E02005434',
        '5LZ' => 'E02005434',
        '5NA' => 'E02005430',
        '5NB' => 'E02005430',
        '5ND' => 'E02005430',
        '5NE' => 'E02005430',
        '5NF' => 'E02005430',
        '5NG' => 'E02005430',
        '5NH' => 'E02005430',
        '5NJ' => 'E02005430',
        '5NL' => 'E02005430',
        '5NN' => 'E02005430',
        '5NP' => 'E02005430',
        '5NQ' => 'E02005430',
        '5NR' => 'E02005430',
        '5NS' => 'E02005430',
        '5NT' => 'E02005430',
        '5NU' => 'E02005430',
        '5NW' => 'E02005430',
        '5NX' => 'E02005430',
        '5PA' => 'E02005430',
        '5PB' => 'E02005430',
        '5PD' => 'E02005430',
        '5PE' => 'E02005430',
        '5PG' => 'E02005434',
        '5PH' => 'E02005430',
        '5PJ' => 'E02005430',
        '5PN' => 'E02005434',
        '5PP' => 'E02005432',
        '5PR' => 'E02005432',
        '5PS' => 'E02005432',
        '5PT' => 'E02005432',
        '5PU' => 'E02005432',
        '5PW' => 'E02005432',
        '5PX' => 'E02005432',
        '5PY' => 'E02005432',
        '5PZ' => 'E02005432',
        '5QA' => 'E02005432',
        '5QB' => 'E02005432',
        '5QD' => 'E02005432',
        '5QE' => 'E02005432',
        '5QF' => 'E02005432',
        '5QG' => 'E02005432',
        '5QH' => 'E02005432',
        '5QJ' => 'E02005430',
        '5QL' => 'E02005430',
        '5QN' => 'E02005432',
        '5QP' => 'E02005432',
        '5QQ' => 'E02005432',
        '5QR' => 'E02005432',
        '5QS' => 'E02005434',
        '5QW' => 'E02005432',
        '5RA' => 'E02005434',
        '5RB' => 'E02005434',
        '5RD' => 'E02005434',
        '5RE' => 'E02005434',
        '5RF' => 'E02005434',
        '5RG' => 'E02005434',
        '5RH' => 'E02005434',
        '5RJ' => 'E02005430',
        '5RL' => 'E02005430',
        '5RN' => 'E02005430',
        '5RP' => 'E02005430',
        '5RQ' => 'E02005434',
        '5RR' => 'E02005430',
        '5RS' => 'E02005430',
        '5RT' => 'E02005430',
        '5RU' => 'E02005430',
        '5RW' => 'E02005430',
        '5RX' => 'E02005430',
        '5RY' => 'E02005430',
        '5RZ' => 'E02005430',
        '5SA' => 'E02005430',
        '5SB' => 'E02005430',
        '5SD' => 'E02005434',
        '5SH' => 'E02005434',
        '5SJ' => 'E02005434',
        '5SR' => 'E02005434',
        '5SS' => 'E02005434',
        '5ST' => 'E02005434',
        '5SU' => 'E02005434',
        '5SW' => 'E02005434',
        '5TR' => 'E02005434',
        '5UA' => 'E02005434',
        '5UB' => 'E02005434',
        '5US' => 'E02005434',
        '5UT' => 'E02005434',
        '5UU' => 'E02005434',
        '5UW' => 'E02005434',
        '5UX' => 'E02005434',
        '5UY' => 'E02005434',
        '5UZ' => 'E02005434',
        '5WX' => 'E02005434',
        '5WY' => 'E02005434',
        '5WZ' => 'E02005434',
        '5XA' => 'E02005434',
        '5XB' => 'E02005434',
        '5XD' => 'E02005434',
        '5XE' => 'E02005434',
        '5XF' => 'E02005434',
        '5XG' => 'E02005434',
        '5YZ' => 'E02005434',
        '6AA' => 'E02005434',
        '6AB' => 'E02005434',
        '6AD' => 'E02005434',
        '6AE' => 'E02005434',
        '6AF' => 'E02005434',
        '6AG' => 'E02005434',
        '6AH' => 'E02005434',
        '6AJ' => 'E02005434',
        '6AL' => 'E02005434',
        '6AN' => 'E02005434',
        '6AP' => 'E02005434',
        '6AQ' => 'E02005434',
        '6AR' => 'E02005434',
        '6AS' => 'E02005434',
        '6AT' => 'E02005434',
        '6AU' => 'E02005434',
        '6AW' => 'E02005434',
        '6AX' => 'E02005432',
        '6AY' => 'E02005434',
        '6AZ' => 'E02005434',
        '6BA' => 'E02005434',
        '6BB' => 'E02005434',
        '6BD' => 'E02005434',
        '6BE' => 'E02005434',
        '6BF' => 'E02005434',
        '6BG' => 'E02005434',
        '6BH' => 'E02005434',
        '6BJ' => 'E02005432',
        '6BL' => 'E02005434',
        '6BN' => 'E02005434',
        '6BP' => 'E02005434',
        '6BQ' => 'E02005434',
        '6BS' => 'E02005434',
        '6BW' => 'E02005434',
        '6BY' => 'E02005434',
        '6BZ' => 'E02005434',
        '6DA' => 'E02005434',
        '6DB' => 'E02005434',
        '6DD' => 'E02005434',
        '6DE' => 'E02005434',
        '6DF' => 'E02005434',
        '6DG' => 'E02005434',
        '6DH' => 'E02005434',
        '6DJ' => 'E02005434',
        '6DL' => 'E02005434',
        '6DP' => 'E02005434',
        '6DQ' => 'E02005434',
        '6DR' => 'E02005434',
        '6DS' => 'E02005434',
        '6DT' => 'E02005434',
        '6DU' => 'E02005434',
        '6DW' => 'E02005434',
        '6DX' => 'E02005434',
        '6DY' => 'E02005434',
        '6DZ' => 'E02005434',
        '6EA' => 'E02005434',
        '6EB' => 'E02005434',
        '6ED' => 'E02005434',
        '6EE' => 'E02005434',
        '6EF' => 'E02005434',
        '6EG' => 'E02005434',
        '6EH' => 'E02005434',
        '6EJ' => 'E02005434',
        '6EL' => 'E02005434',
        '6EN' => 'E02005434',
        '6EP' => 'E02005434',
        '6EQ' => 'E02005434',
        '6ER' => 'E02005434',
        '6ES' => 'E02005434',
        '6ET' => 'E02005434',
        '6EU' => 'E02005434',
        '6EW' => 'E02005434',
        '6EX' => 'E02005434',
        '6EY' => 'E02005434',
        '6EZ' => 'E02005434',
        '6FA' => 'E02005434',
        '6FB' => 'E02005434',
        '6FD' => 'E02005434',
        '6HA' => 'E02005434',
        '6HB' => 'E02005434',
        '6HD' => 'E02005434',
        '6HE' => 'E02005434',
        '6HF' => 'E02005434',
        '6HG' => 'E02005434',
        '6HH' => 'E02005434',
        '6HJ' => 'E02005434',
        '6HL' => 'E02005434',
        '6HN' => 'E02005434',
        '6HP' => 'E02005434',
        '6HU' => 'E02005434',
        '6HW' => 'E02005434',
        '6HX' => 'E02005434',
        '6HY' => 'E02005434',
        '6HZ' => 'E02005432',
        '6JA' => 'E02005432',
        '6JB' => 'E02005432',
        '6JD' => 'E02005430',
        '6JE' => 'E02005430',
        '6JF' => 'E02005430',
        '6JG' => 'E02005430',
        '6JH' => 'E02005430',
        '6JJ' => 'E02005432',
        '6JL' => 'E02005432',
        '6JN' => 'E02005434',
        '6JP' => 'E02005434',
        '6JQ' => 'E02005430',
        '6JR' => 'E02005434',
        '6JS' => 'E02005434',
        '6JT' => 'E02005432',
        '6JU' => 'E02005432',
        '6JW' => 'E02005434',
        '6JX' => 'E02005432',
        '6JY' => 'E02005432',
        '6JZ' => 'E02005432',
        '6LA' => 'E02005432',
        '6LB' => 'E02005432',
        '6LD' => 'E02005432',
        '6LE' => 'E02005432',
        '6LF' => 'E02005432',
        '6LG' => 'E02005432',
        '6LH' => 'E02005432',
        '6LJ' => 'E02005432',
        '6LL' => 'E02005432',
        '6LN' => 'E02005432',
        '6LP' => 'E02005432',
        '6LQ' => 'E02005432',
        '6LR' => 'E02005432',
        '6LS' => 'E02005432',
        '6LT' => 'E02005432',
        '6LU' => 'E02005432',
        '6LW' => 'E02005432',
        '6LX' => 'E02005432',
        '6LY' => 'E02005432',
        '6LZ' => 'E02005434',
        '6NE' => 'E02005434',
        '6NF' => 'E02005434',
        '6NG' => 'E02005434',
        '6NH' => 'E02005434',
        '6NJ' => 'E02005434',
        '6NL' => 'E02005432',
        '6NN' => 'E02005432',
        '6NP' => 'E02005432',
        '6NQ' => 'E02005434',
        '6NR' => 'E02005432',
        '6NS' => 'E02005432',
        '6NT' => 'E02005432',
        '6NU' => 'E02005432',
        '6NW' => 'E02005432',
        '6NX' => 'E02005432',
        '6NY' => 'E02005432',
        '6PA' => 'E02005432',
        '6PB' => 'E02005432',
        '6PD' => 'E02005432',
        '6PE' => 'E02005432',
        '6PF' => 'E02005432',
        '6PG' => 'E02005432',
        '6PH' => 'E02005434',
        '6PJ' => 'E02005434',
        '6PL' => 'E02005434',
        '6PN' => 'E02005434',
        '6PQ' => 'E02005432',
        '6PR' => 'E02005434',
        '6PS' => 'E02005432',
        '6PT' => 'E02005432',
        '6PU' => 'E02005432',
        '6PW' => 'E02005432',
        '6PX' => 'E02005432',
        '6PY' => 'E02005432',
        '6PZ' => 'E02005432',
        '6QA' => 'E02005432',
        '6QB' => 'E02005432',
        '6QD' => 'E02005432',
        '6QE' => 'E02005432',
        '6QF' => 'E02005432',
        '6QG' => 'E02005432',
        '6QH' => 'E02005432',
        '6QJ' => 'E02005432',
        '6QL' => 'E02005432',
        '6QN' => 'E02005432',
        '6QP' => 'E02005432',
        '6QQ' => 'E02005432',
        '6QR' => 'E02005432',
        '6QS' => 'E02005432',
        '6QT' => 'E02005432',
        '6QU' => 'E02005432',
        '6QW' => 'E02005432',
        '6QX' => 'E02005434',
        '6QY' => 'E02005434',
        '6QZ' => 'E02005434',
        '6RA' => 'E02005432',
        '6RD' => 'E02005434',
        '6RE' => 'E02005434',
        '6RF' => 'E02005434',
        '6RG' => 'E02005434',
        '6RH' => 'E02005434',
        '6RJ' => 'E02005434',
        '6RL' => 'E02005434',
        '6RN' => 'E02005432',
        '6RQ' => 'E02005434',
        '6RR' => 'E02005434',
        '6RU' => 'E02005434',
        '6RX' => 'E02005434',
        '6RY' => 'E02005434',
        '6RZ' => 'E02005434',
        '6SA' => 'E02005434',
        '6SB' => 'E02005434',
        '6SD' => 'E02005434',
        '6SE' => 'E02005434',
        '6SF' => 'E02005434',
        '6WY' => 'E02005434',
        '6WZ' => 'E02005434',
        '6XA' => 'E02005434',
        '6XB' => 'E02005434',
        '6XD' => 'E02005434',
        '6XE' => 'E02005434',
        '6XF' => 'E02005432',
        '6XG' => 'E02005432',
        '6XH' => 'E02005432',
        '6XJ' => 'E02005434',
        '6XL' => 'E02005434',
        '6XN' => 'E02005434',
        '6XP' => 'E02005434',
        '9AA' => 'E02005434',
        '9AB' => 'E02005434',
        '9AD' => 'E02005434',
        '9AE' => 'E02005434',
        '9AF' => 'E02005434',
        '9AG' => 'E02005434',
        '9AH' => 'E02005434',
        '9AJ' => 'E02005434',
        '9AL' => 'E02005434',
        '9AP' => 'E02005434',
        '9AQ' => 'E02005434',
        '9AR' => 'E02005434',
        '9AS' => 'E02005434',
        '9AT' => 'E02005434',
        '9AU' => 'E02005434',
        '9AW' => 'E02005434',
        '9AX' => 'E02005434',
        '9AY' => 'E02005434',
        '9AZ' => 'E02005434',
        '9BA' => 'E02005434',
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
