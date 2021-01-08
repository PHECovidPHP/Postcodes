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
final class BS80
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '8AA' => 'E02006846',
        '8AB' => 'E02003107',
        '8AD' => 'E02003107',
        '8AE' => 'E02003107',
        '8AF' => 'E02003107',
        '8AG' => 'E02003107',
        '8AH' => 'E02003107',
        '8AJ' => 'E02006846',
        '8AL' => 'E02003107',
        '8AN' => 'E02003107',
        '8AP' => 'E02003107',
        '8AQ' => 'E02003107',
        '8AR' => 'E02003107',
        '8AS' => 'E02003107',
        '8AT' => 'E02003107',
        '8AU' => 'E02003107',
        '8AW' => 'E02003107',
        '8AX' => 'E02003107',
        '8AY' => 'E02003107',
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
