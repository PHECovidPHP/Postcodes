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
final class FY0
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1BR' => 'E02005207',
        '1YN' => 'E02005207',
        '1YS' => 'E02005207',
        '1YY' => 'E02005207',
        '1ZX' => 'E02005207',
        '1ZY' => 'E02005207',
        '1ZZ' => 'E02005207',
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
