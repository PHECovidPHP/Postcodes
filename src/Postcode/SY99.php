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
final class SY99
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '8AA' => 'E02006033',
        '8AD' => 'E02006033',
        '8AE' => 'E02006033',
        '8AG' => 'E02006033',
        '8AH' => 'E02006033',
        '8AJ' => 'E02006033',
        '8AL' => 'E02006033',
        '8AN' => 'E02006033',
        '8AP' => 'E02006033',
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
