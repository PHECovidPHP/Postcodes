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
final class LE94
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02005374',
        '0AB' => 'E02005374',
        '0AD' => 'E02005374',
        '0AE' => 'E02005374',
        '0AF' => 'E02005374',
        '0AG' => 'E02005374',
        '0AH' => 'E02005374',
        '0AJ' => 'E02005374',
        '0AL' => 'E02005374',
        '0AN' => 'E02005374',
        '0AS' => 'E02005374',
        '0AT' => 'E02005374',
        '0ZY' => 'E02005374',
        '0ZZ' => 'E02005374',
        '7ZG' => 'E02005374',
        '7ZT' => 'E02005374',
        '7ZU' => 'E02005374',
        '7ZW' => 'E02005374',
        '7ZX' => 'E02005374',
        '7ZY' => 'E02005374',
        '7ZZ' => 'E02005374',
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
