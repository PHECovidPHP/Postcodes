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
final class TD9
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0TJ' => 'E02003987',
        '0TP' => 'E02003987',
        '0TR' => 'E02003987',
        '0TS' => 'E02003987',
        '0TT' => 'E02003987',
        '0TU' => 'E02003987',
        '0TW' => 'E02003987',
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
