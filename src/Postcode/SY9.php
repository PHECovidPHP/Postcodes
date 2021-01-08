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
final class SY9
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '5AA' => 'E02006041',
        '5AB' => 'E02006041',
        '5AD' => 'E02006041',
        '5AE' => 'E02006041',
        '5AF' => 'E02006041',
        '5AG' => 'E02006041',
        '5AH' => 'E02006041',
        '5AJ' => 'E02006041',
        '5AL' => 'E02006041',
        '5AN' => 'E02006041',
        '5AP' => 'E02006041',
        '5AQ' => 'E02006041',
        '5AR' => 'E02006041',
        '5AS' => 'E02006041',
        '5AT' => 'E02006041',
        '5AU' => 'E02006041',
        '5AW' => 'E02006041',
        '5AX' => 'E02006041',
        '5AY' => 'E02006041',
        '5AZ' => 'E02006041',
        '5BA' => 'E02006041',
        '5BB' => 'E02006041',
        '5BD' => 'E02006041',
        '5BE' => 'E02006041',
        '5BF' => 'E02006041',
        '5BG' => 'E02006041',
        '5BH' => 'E02006041',
        '5BJ' => 'E02006041',
        '5BL' => 'E02006041',
        '5BN' => 'E02006041',
        '5BP' => 'E02006041',
        '5BQ' => 'E02006041',
        '5BS' => 'E02006041',
        '5BT' => 'E02006041',
        '5BU' => 'E02006041',
        '5BW' => 'E02006041',
        '5BX' => 'E02006041',
        '5BY' => 'E02006041',
        '5BZ' => 'E02006041',
        '5DA' => 'E02006041',
        '5DB' => 'E02006041',
        '5DD' => 'E02006041',
        '5DE' => 'E02006041',
        '5DF' => 'E02006041',
        '5DG' => 'E02006041',
        '5DH' => 'E02006041',
        '5DJ' => 'E02006041',
        '5DL' => 'E02006041',
        '5DN' => 'E02006041',
        '5DP' => 'E02006041',
        '5DQ' => 'E02006041',
        '5DR' => 'E02006041',
        '5DS' => 'E02006041',
        '5DT' => 'E02006041',
        '5DU' => 'E02006041',
        '5DW' => 'E02006041',
        '5DX' => 'E02006041',
        '5DY' => 'E02006041',
        '5DZ' => 'E02006041',
        '5EA' => 'E02006041',
        '5EB' => 'E02006041',
        '5ED' => 'E02006041',
        '5EE' => 'E02006041',
        '5EF' => 'E02006041',
        '5EG' => 'E02006041',
        '5EH' => 'E02006041',
        '5EJ' => 'E02006041',
        '5EL' => 'E02006041',
        '5EN' => 'E02006041',
        '5EP' => 'E02006041',
        '5EQ' => 'E02006041',
        '5ER' => 'E02006041',
        '5ES' => 'E02006041',
        '5ET' => 'E02006041',
        '5EU' => 'E02006041',
        '5EW' => 'E02006041',
        '5EX' => 'E02006044',
        '5EY' => 'E02006041',
        '5EZ' => 'E02006041',
        '5FA' => 'E02006041',
        '5FB' => 'E02006041',
        '5FD' => 'E02006041',
        '5FE' => 'E02006041',
        '5GB' => 'E02006041',
        '5HA' => 'E02006041',
        '5HB' => 'E02006041',
        '5HD' => 'E02006041',
        '5HE' => 'E02006041',
        '5HF' => 'E02006041',
        '5HG' => 'E02006041',
        '5HH' => 'E02006041',
        '5HJ' => 'E02006041',
        '5HL' => 'E02006041',
        '5HN' => 'E02006041',
        '5HP' => 'E02006041',
        '5HQ' => 'E02006041',
        '5HR' => 'E02006041',
        '5HS' => 'E02006041',
        '5HT' => 'E02006041',
        '5HU' => 'E02006041',
        '5HW' => 'E02006041',
        '5HX' => 'E02006044',
        '5HY' => 'E02006044',
        '5HZ' => 'E02006041',
        '5JG' => 'E02006041',
        '5JH' => 'E02006041',
        '5JJ' => 'E02006041',
        '5JL' => 'E02006041',
        '5JN' => 'E02006041',
        '5JQ' => 'E02006041',
        '5JR' => 'E02006041',
        '5JS' => 'E02006044',
        '5JT' => 'E02006041',
        '5JU' => 'E02006041',
        '5JX' => 'E02006044',
        '5JY' => 'E02006044',
        '5LA' => 'E02006044',
        '5LB' => 'E02006044',
        '5LD' => 'E02006044',
        '5LE' => 'E02006044',
        '5LF' => 'E02006044',
        '5LG' => 'E02006044',
        '5LH' => 'E02006044',
        '5LJ' => 'E02006044',
        '5LL' => 'E02006044',
        '5LN' => 'E02006044',
        '5LQ' => 'E02006044',
        '5LU' => 'E02006044',
        '5LW' => 'E02006044',
        '5LX' => 'E02006044',
        '5LZ' => 'E02006044',
        '5NA' => 'E02006044',
        '5NB' => 'E02006044',
        '5PA' => 'E02006041',
        '5PB' => 'E02006041',
        '5PE' => 'E02006041',
        '5PF' => 'E02006041',
        '5WA' => 'E02006043',
        '5WB' => 'E02006043',
        '5WD' => 'E02006043',
        '5WE' => 'E02006043',
        '5WP' => 'E02006043',
        '5WW' => 'E02006043',
        '5WX' => 'E02006043',
        '5WY' => 'E02006043',
        '5WZ' => 'E02006043',
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
