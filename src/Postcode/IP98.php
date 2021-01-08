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
final class IP98
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1ER' => 'E02005611',
        '1FP' => 'E02005611',
        '1GH' => 'E02005611',
        '1HB' => 'E02005611',
        '1HH' => 'E02005611',
        '1HZ' => 'E02005611',
        '1NP' => 'E02005611',
        '1PG' => 'E02005611',
        '1PP' => 'E02005611',
        '1RT' => 'E02005611',
        '1SP' => 'E02005611',
        '1SY' => 'E02005611',
        '1XY' => 'E02005611',
        '6AA' => 'E02005611',
        '6BB' => 'E02005611',
        '6PW' => 'E02005611',
        '6WY' => 'E02005611',
        '6WZ' => 'E02005611',
        '9RA' => 'E02005611',
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
