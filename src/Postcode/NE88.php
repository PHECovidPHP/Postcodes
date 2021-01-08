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
final class NE88
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02001688',
        '1AB' => 'E02001714',
        '1AD' => 'E02001688',
        '1AE' => 'E02001688',
        '1YB' => 'E02001688',
        '1YY' => 'E02001688',
        '1YZ' => 'E02001688',
        '1ZA' => 'E02001688',
        '1ZB' => 'E02001688',
        '1ZX' => 'E02001688',
        '2AA' => 'E02001688',
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
