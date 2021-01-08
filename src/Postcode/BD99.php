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
final class BD99
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '2WZ' => 'E02002223',
        '2XE' => 'E02002223',
        '2XG' => 'E02002223',
        '2XQ' => 'E02002226',
        '2YA' => 'E02002221',
        '2YZ' => 'E02002221',
        '4BA' => 'E02002221',
        '4BB' => 'E02002221',
        '4WY' => 'E02002221',
        '4WZ' => 'E02002221',
        '4XB' => 'E02002221',
        '4XD' => 'E02002221',
        '4XE' => 'E02002221',
        '4XL' => 'E02002221',
        '4YG' => 'E02002221',
        '4YP' => 'E02002221',
        '4YX' => 'E02002221',
        '9XF' => 'E02002221',
        '9XG' => 'E02002223',
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
