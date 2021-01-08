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
final class NG90
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02005860',
        '1BS' => 'E02002898',
        '1LP' => 'E02005861',
        '1LZ' => 'E02002898',
        '1WA' => 'E02005860',
        '1WT' => 'E02005861',
        '1WW' => 'E02005860',
        '1WX' => 'E02005860',
        '1XA' => 'E02005861',
        '1XL' => 'E02005861',
        '1YZ' => 'E02005861',
        '1ZX' => 'E02005861',
        '2DB' => 'E02005861',
        '2JF' => 'E02005861',
        '2PR' => 'E02005861',
        '2XX' => 'E02005860',
        '4FS' => 'E02002898',
        '4GR' => 'E02002898',
        '4HQ' => 'E02002898',
        '4RU' => 'E02002898',
        '4XY' => 'E02002898',
        '5EF' => 'E02002898',
        '5GT' => 'E02002898',
        '5PY' => 'E02002898',
        '5UN' => 'E02005861',
        '6BH' => 'E02005861',
        '6EX' => 'E02005860',
        '6XP' => 'E02005861',
        '7GP' => 'E02002898',
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
