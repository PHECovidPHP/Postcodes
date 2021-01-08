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
final class YO90
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1GA' => 'E02002784',
        '1HX' => 'E02002784',
        '1PP' => 'E02002784',
        '1UT' => 'E02002784',
        '1UU' => 'E02002784',
        '1WA' => 'E02002784',
        '1WB' => 'E02002784',
        '1WR' => 'E02002784',
        '1WT' => 'E02002784',
        '1WU' => 'E02002784',
        '1WW' => 'E02002784',
        '1WX' => 'E02002784',
        '1WY' => 'E02002784',
        '1WZ' => 'E02002784',
        '1XA' => 'E02002784',
        '1YA' => 'E02002784',
        '1YB' => 'E02002784',
        '1YD' => 'E02002784',
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
