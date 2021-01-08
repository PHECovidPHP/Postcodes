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
final class BL78
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02001010',
        '1AB' => 'E02001010',
        '1AD' => 'E02001010',
        '1AE' => 'E02001010',
        '1AF' => 'E02001010',
        '1AG' => 'E02001010',
        '1AH' => 'E02001010',
        '1AJ' => 'E02001010',
        '1AL' => 'E02001010',
        '1AP' => 'E02001010',
        '1BF' => 'E02001010',
        '1BG' => 'E02000999',
        '7NA' => 'E02000999',
        '7WZ' => 'E02001005',
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
