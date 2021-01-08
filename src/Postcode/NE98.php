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
final class NE98
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AE' => 'E02001714',
        '1AF' => 'E02001688',
        '1BA' => 'E02001688',
        '1NG' => 'E02001714',
        '1WY' => 'E02001688',
        '1WZ' => 'E02001688',
        '1XB' => 'E02001688',
        '1YF' => 'E02001714',
        '1YL' => 'E02001688',
        '1YT' => 'E02001714',
        '1YU' => 'E02001714',
        '1YX' => 'E02001714',
        '1ZZ' => 'E02001714',
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
