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
final class PL95
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1SA' => 'E02004189',
        '8AA' => 'E02003152',
        '8AH' => 'E02003152',
        '8AJ' => 'E02003152',
        '8AR' => 'E02003152',
        '8AT' => 'E02003152',
        '8AW' => 'E02003152',
        '8AX' => 'E02003152',
        '8AY' => 'E02003152',
        '8BB' => 'E02003152',
        '8BH' => 'E02003152',
        '8BJ' => 'E02003152',
        '8BL' => 'E02003152',
        '8BN' => 'E02003152',
        '8BP' => 'E02003152',
        '8BQ' => 'E02003152',
        '8BR' => 'E02003152',
        '8BS' => 'E02003152',
        '8BT' => 'E02003152',
        '8BU' => 'E02003152',
        '8BW' => 'E02003152',
        '8BX' => 'E02003152',
        '8BY' => 'E02003152',
        '8BZ' => 'E02003152',
        '8DA' => 'E02003152',
        '8DB' => 'E02003152',
        '8DD' => 'E02003152',
        '8DE' => 'E02003152',
        '8DF' => 'E02003152',
        '8DG' => 'E02003152',
        '8DH' => 'E02003152',
        '8DJ' => 'E02003152',
        '8DL' => 'E02003152',
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
