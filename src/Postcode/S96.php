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
final class S96
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '5AL' => 'E02001628',
        '5AN' => 'E02001628',
        '5AP' => 'E02001632',
        '5AQ' => 'E02001632',
        '5BR' => 'E02001632',
        '5DB' => 'E02001628',
        '5FD' => 'E02001628',
        '5FF' => 'E02001628',
        '5FQ' => 'E02001628',
        '5FR' => 'E02001628',
        '5FS' => 'E02001628',
        '5FX' => 'E02001628',
        '5LA' => 'E02001628',
        '5LY' => 'E02001628',
        '5WD' => 'E02001632',
        '5WE' => 'E02001632',
        '5WF' => 'E02001632',
        '5WP' => 'E02001632',
        '5WW' => 'E02001628',
        '5XA' => 'E02001628',
        '5XB' => 'E02001628',
        '5XD' => 'E02001628',
        '5XH' => 'E02001632',
        '5XX' => 'E02001632',
        '5XZ' => 'E02001628',
        '5YA' => 'E02001632',
        '5YB' => 'E02001632',
        '5YD' => 'E02001632',
        '5YE' => 'E02001632',
        '5YF' => 'E02001632',
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
