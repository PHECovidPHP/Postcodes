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
final class CM92
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1LA' => 'E02004547',
        '1LB' => 'E02004547',
        '1LD' => 'E02004547',
        '1LE' => 'E02004547',
        '1LF' => 'E02004547',
        '1LG' => 'E02004547',
        '1LH' => 'E02004547',
        '1LJ' => 'E02004547',
        '1LN' => 'E02004547',
        '1LP' => 'E02004547',
        '1LQ' => 'E02004547',
        '1LR' => 'E02004547',
        '1LS' => 'E02004547',
        '1LT' => 'E02004547',
        '1LU' => 'E02004547',
        '1LW' => 'E02004547',
        '1LX' => 'E02004547',
        '1LY' => 'E02004547',
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
