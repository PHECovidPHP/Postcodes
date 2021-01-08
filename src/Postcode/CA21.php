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
final class CA21
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '2XA' => 'E02004006',
        '2XB' => 'E02004006',
        '2XD' => 'E02004006',
        '2XE' => 'E02004006',
        '2XF' => 'E02004006',
        '2XG' => 'E02004006',
        '2XH' => 'E02004006',
        '2XJ' => 'E02004006',
        '2XL' => 'E02004006',
        '2XN' => 'E02004006',
        '2XP' => 'E02004006',
        '2XQ' => 'E02004006',
        '2XR' => 'E02004006',
        '2XS' => 'E02004006',
        '2XT' => 'E02004006',
        '2XU' => 'E02004006',
        '2XW' => 'E02004006',
        '2XX' => 'E02004006',
        '2XY' => 'E02004006',
        '2XZ' => 'E02004006',
        '2YA' => 'E02004006',
        '2YB' => 'E02004006',
        '2YD' => 'E02004006',
        '2YE' => 'E02004006',
        '2YF' => 'E02004006',
        '2YG' => 'E02004006',
        '2YH' => 'E02004006',
        '2YJ' => 'E02004006',
        '2YL' => 'E02004006',
        '2YN' => 'E02004006',
        '2YP' => 'E02004006',
        '2YQ' => 'E02004006',
        '2YR' => 'E02004006',
        '2YS' => 'E02004006',
        '2YT' => 'E02004006',
        '2YU' => 'E02004006',
        '2YW' => 'E02004006',
        '2YX' => 'E02004006',
        '2YY' => 'E02004006',
        '2YZ' => 'E02004006',
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
