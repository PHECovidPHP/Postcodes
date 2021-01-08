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
final class NE85
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02001807',
        '1AB' => 'E02001688',
        '1AE' => 'E02001688',
        '1AF' => 'E02001688',
        '1AH' => 'E02001688',
        '1AL' => 'E02001688',
        '1AP' => 'E02001688',
        '1BD' => 'E02001688',
        '1DG' => 'E02001688',
        '1ST' => 'E02001807',
        '1WZ' => 'E02001807',
        '2BS' => 'E02001688',
        '2BT' => 'E02001688',
        '2BU' => 'E02001688',
        '2BW' => 'E02001688',
        '2TL' => 'E02001688',
        '2ZA' => 'E02001688',
        '5GT' => 'E02001688',
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
