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
final class IP15
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '5AA' => 'E02006290',
        '5AB' => 'E02006290',
        '5AD' => 'E02006290',
        '5AE' => 'E02006290',
        '5AF' => 'E02006290',
        '5AG' => 'E02006290',
        '5AH' => 'E02006290',
        '5AJ' => 'E02006290',
        '5AL' => 'E02006290',
        '5AN' => 'E02006290',
        '5AP' => 'E02006290',
        '5AQ' => 'E02006290',
        '5AR' => 'E02006290',
        '5AS' => 'E02006290',
        '5AT' => 'E02006290',
        '5AU' => 'E02006290',
        '5AW' => 'E02006290',
        '5AX' => 'E02006290',
        '5AY' => 'E02006290',
        '5AZ' => 'E02006290',
        '5BA' => 'E02006290',
        '5BB' => 'E02006290',
        '5BD' => 'E02006290',
        '5BE' => 'E02006290',
        '5BF' => 'E02006290',
        '5BG' => 'E02006290',
        '5BH' => 'E02006290',
        '5BJ' => 'E02006290',
        '5BL' => 'E02006290',
        '5BN' => 'E02006290',
        '5BP' => 'E02006290',
        '5BQ' => 'E02006290',
        '5BR' => 'E02006290',
        '5BS' => 'E02006290',
        '5BT' => 'E02006290',
        '5BU' => 'E02006290',
        '5BW' => 'E02006290',
        '5BX' => 'E02006290',
        '5BY' => 'E02006290',
        '5BZ' => 'E02006290',
        '5DA' => 'E02006290',
        '5DB' => 'E02006290',
        '5DD' => 'E02006290',
        '5DE' => 'E02006290',
        '5DF' => 'E02006290',
        '5DG' => 'E02006290',
        '5DH' => 'E02006290',
        '5DJ' => 'E02006290',
        '5DL' => 'E02006290',
        '5DN' => 'E02006290',
        '5DP' => 'E02006290',
        '5DQ' => 'E02006290',
        '5DR' => 'E02006290',
        '5DS' => 'E02006290',
        '5DT' => 'E02006290',
        '5DU' => 'E02006290',
        '5DW' => 'E02006290',
        '5DX' => 'E02006290',
        '5DY' => 'E02006290',
        '5DZ' => 'E02006290',
        '5EA' => 'E02006290',
        '5EB' => 'E02006290',
        '5ED' => 'E02006290',
        '5EE' => 'E02006290',
        '5EF' => 'E02006290',
        '5EG' => 'E02006290',
        '5EH' => 'E02006290',
        '5EJ' => 'E02006290',
        '5EL' => 'E02006290',
        '5EN' => 'E02006290',
        '5EP' => 'E02006290',
        '5EQ' => 'E02006290',
        '5ER' => 'E02006290',
        '5ES' => 'E02006290',
        '5ET' => 'E02006290',
        '5EU' => 'E02006290',
        '5EW' => 'E02006290',
        '5EX' => 'E02006290',
        '5EY' => 'E02006290',
        '5EZ' => 'E02006290',
        '5FA' => 'E02006290',
        '5FB' => 'E02006290',
        '5FD' => 'E02006290',
        '5FE' => 'E02006290',
        '5GA' => 'E02006290',
        '5GY' => 'E02006290',
        '5GZ' => 'E02006290',
        '5HA' => 'E02006290',
        '5HB' => 'E02006290',
        '5HD' => 'E02006290',
        '5HE' => 'E02006290',
        '5HF' => 'E02006290',
        '5HG' => 'E02006290',
        '5HH' => 'E02006290',
        '5HJ' => 'E02006290',
        '5HL' => 'E02006290',
        '5HN' => 'E02006290',
        '5HP' => 'E02006290',
        '5HQ' => 'E02006290',
        '5HR' => 'E02006290',
        '5HS' => 'E02006290',
        '5HT' => 'E02006290',
        '5HU' => 'E02006290',
        '5HW' => 'E02006290',
        '5HX' => 'E02006290',
        '5HY' => 'E02006290',
        '5HZ' => 'E02006290',
        '5JA' => 'E02006290',
        '5JB' => 'E02006290',
        '5JD' => 'E02006290',
        '5JE' => 'E02006290',
        '5JF' => 'E02006290',
        '5JG' => 'E02006290',
        '5JH' => 'E02006290',
        '5JJ' => 'E02006290',
        '5JL' => 'E02006290',
        '5JN' => 'E02006290',
        '5JP' => 'E02006290',
        '5JQ' => 'E02006290',
        '5JR' => 'E02006290',
        '5JS' => 'E02006290',
        '5JT' => 'E02006290',
        '5JU' => 'E02006290',
        '5JW' => 'E02006290',
        '5JX' => 'E02006290',
        '5JY' => 'E02006290',
        '5JZ' => 'E02006290',
        '5LA' => 'E02006290',
        '5LB' => 'E02006290',
        '5LD' => 'E02006290',
        '5LE' => 'E02006290',
        '5LF' => 'E02006290',
        '5LG' => 'E02006290',
        '5LH' => 'E02006290',
        '5LJ' => 'E02006290',
        '5LL' => 'E02006290',
        '5LN' => 'E02006290',
        '5LP' => 'E02006290',
        '5LQ' => 'E02006290',
        '5LR' => 'E02006290',
        '5LS' => 'E02006290',
        '5LT' => 'E02006290',
        '5LU' => 'E02006290',
        '5LW' => 'E02006290',
        '5LX' => 'E02006290',
        '5LY' => 'E02006290',
        '5LZ' => 'E02006290',
        '5NA' => 'E02006290',
        '5NB' => 'E02006290',
        '5ND' => 'E02006290',
        '5NZ' => 'E02006290',
        '5PA' => 'E02006290',
        '5PB' => 'E02006290',
        '5PD' => 'E02006290',
        '5PE' => 'E02006290',
        '5PF' => 'E02006290',
        '5PG' => 'E02006290',
        '5PH' => 'E02006290',
        '5PJ' => 'E02006290',
        '5PL' => 'E02006290',
        '5PN' => 'E02006290',
        '5PP' => 'E02006290',
        '5PQ' => 'E02006290',
        '5PR' => 'E02006290',
        '5PS' => 'E02006290',
        '5PT' => 'E02006290',
        '5PU' => 'E02006290',
        '5PW' => 'E02006290',
        '5PX' => 'E02006290',
        '5PY' => 'E02006290',
        '5PZ' => 'E02006290',
        '5QA' => 'E02006290',
        '5QB' => 'E02006290',
        '5QD' => 'E02006290',
        '5QE' => 'E02006290',
        '5QF' => 'E02006290',
        '5QG' => 'E02006290',
        '5QH' => 'E02006290',
        '5QJ' => 'E02006290',
        '5QL' => 'E02006290',
        '5QQ' => 'E02006290',
        '5WA' => 'E02006290',
        '5WB' => 'E02006290',
        '5WD' => 'E02006290',
        '5WE' => 'E02006290',
        '5WL' => 'E02006290',
        '5WQ' => 'E02006290',
        '5WW' => 'E02006290',
        '5WX' => 'E02006290',
        '5WY' => 'E02006290',
        '5WZ' => 'E02006290',
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
