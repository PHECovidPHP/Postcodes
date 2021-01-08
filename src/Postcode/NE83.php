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
final class NE83
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '7QQ' => 'E02001688',
        '7ZF' => 'E02001688',
        '7ZG' => 'E02001688',
        '7ZH' => 'E02001688',
        '7ZJ' => 'E02001688',
        '7ZL' => 'E02001688',
        '7ZN' => 'E02001688',
        '7ZP' => 'E02001688',
        '7ZQ' => 'E02001688',
        '7ZR' => 'E02001688',
        '7ZS' => 'E02001688',
        '7ZT' => 'E02001688',
        '7ZU' => 'E02001688',
        '7ZW' => 'E02001688',
        '7ZX' => 'E02001688',
        '7ZY' => 'E02001688',
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
