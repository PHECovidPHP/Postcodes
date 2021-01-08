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
final class CH70
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '8AA' => 'E02003803',
        '8AD' => 'E02003803',
        '8AE' => 'E02003803',
        '8AG' => 'E02003803',
        '8AH' => 'E02003803',
        '8AJ' => 'E02003803',
        '8AL' => 'E02003803',
        '8AN' => 'E02003803',
        '8AP' => 'E02003803',
        '8AQ' => 'E02003803',
        '8AR' => 'E02003803',
        '8AS' => 'E02003803',
        '8AT' => 'E02003803',
        '8AU' => 'E02003803',
        '8AW' => 'E02003803',
        '8AX' => 'E02003803',
        '8AY' => 'E02003803',
        '8AZ' => 'E02003803',
        '8BA' => 'E02003803',
        '8BB' => 'E02003803',
        '8BD' => 'E02003803',
        '8BE' => 'E02003803',
        '8BF' => 'E02003803',
        '8BG' => 'E02003803',
        '8BH' => 'E02003803',
        '8BJ' => 'E02003803',
        '8BL' => 'E02003803',
        '8BN' => 'E02003803',
        '8BP' => 'E02003803',
        '8BQ' => 'E02003803',
        '8BR' => 'E02003803',
        '8BS' => 'E02003803',
        '8BT' => 'E02003803',
        '8BW' => 'E02003803',
        '8BX' => 'E02003803',
        '8BY' => 'E02003803',
        '8BZ' => 'E02003803',
        '8DA' => 'E02003803',
        '8DB' => 'E02003803',
        '8DD' => 'E02003803',
        '8DE' => 'E02003803',
        '8DF' => 'E02003803',
        '8DG' => 'E02003803',
        '8DH' => 'E02003803',
        '8DJ' => 'E02003803',
        '8DN' => 'E02003803',
        '8DP' => 'E02003803',
        '8DQ' => 'E02003803',
        '8DR' => 'E02003803',
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
