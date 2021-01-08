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
final class PE35
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '6AB' => 'E02005554',
        '6EA' => 'E02005554',
        '6EB' => 'E02005554',
        '6ED' => 'E02005554',
        '6EE' => 'E02005554',
        '6EF' => 'E02005554',
        '6EG' => 'E02005554',
        '6EH' => 'E02005554',
        '6EJ' => 'E02005554',
        '6EN' => 'E02005554',
        '6EP' => 'E02005554',
        '6EQ' => 'E02005554',
        '6EW' => 'E02005554',
        '6EY' => 'E02005554',
        '6EZ' => 'E02005554',
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
