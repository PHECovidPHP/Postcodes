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
final class LS88
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02002431',
        '1AB' => 'E02002431',
        '1AD' => 'E02002431',
        '1AE' => 'E02002431',
        '1AF' => 'E02002431',
        '1AG' => 'E02002431',
        '1AH' => 'E02002431',
        '1AJ' => 'E02002431',
        '1AL' => 'E02002431',
        '1AN' => 'E02002431',
        '1AP' => 'E02002431',
        '1AQ' => 'E02002431',
        '1AR' => 'E02002431',
        '1AS' => 'E02002431',
        '1AT' => 'E02002431',
        '1AU' => 'E02002431',
        '1AW' => 'E02002431',
        '1AX' => 'E02002431',
        '1BT' => 'E02002431',
        '1XL' => 'E02006876',
        '4AA' => 'E02002431',
        '4AB' => 'E02002431',
        '4AD' => 'E02002431',
        '4AE' => 'E02002431',
        '4AF' => 'E02002431',
        '4AG' => 'E02002431',
        '4AH' => 'E02002431',
        '4AJ' => 'E02002431',
        '4AL' => 'E02002431',
        '8AA' => 'E02006876',
        '8AB' => 'E02006876',
        '8AD' => 'E02006876',
        '8AE' => 'E02006876',
        '8AF' => 'E02006876',
        '8AG' => 'E02006876',
        '8AH' => 'E02006876',
        '8AJ' => 'E02006876',
        '8AL' => 'E02006876',
        '8AN' => 'E02006876',
        '8AP' => 'E02006876',
        '8AQ' => 'E02006876',
        '8AR' => 'E02006876',
        '8AS' => 'E02006876',
        '8AT' => 'E02006876',
        '8AU' => 'E02006876',
        '8AW' => 'E02006876',
        '8AX' => 'E02006876',
        '8AY' => 'E02006876',
        '8AZ' => 'E02006876',
        '8BA' => 'E02006876',
        '8BB' => 'E02006876',
        '8BD' => 'E02006876',
        '8BE' => 'E02006876',
        '8BF' => 'E02006876',
        '8BG' => 'E02006876',
        '8BH' => 'E02006876',
        '8BJ' => 'E02006876',
        '8BL' => 'E02006876',
        '8BN' => 'E02006876',
        '8BP' => 'E02006876',
        '8BQ' => 'E02006876',
        '8BR' => 'E02006876',
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
