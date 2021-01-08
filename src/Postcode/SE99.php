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
final class SE99
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '7UT' => 'E02000826',
        '7UU' => 'E02000826',
        '7UW' => 'E02000826',
        '7UX' => 'E02000826',
        '7UY' => 'E02000826',
        '7UZ' => 'E02000826',
        '7XR' => 'E02000826',
        '7XU' => 'E02000826',
        '7XX' => 'E02000826',
        '7XY' => 'E02000826',
        '7XZ' => 'E02000826',
        '7YA' => 'E02000826',
        '7YS' => 'E02000826',
        '7YT' => 'E02000826',
        '7YU' => 'E02000826',
        '7YX' => 'E02000826',
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
