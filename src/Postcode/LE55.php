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
final class LE55
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '7BB' => 'E02006851',
        '7DL' => 'E02006851',
        '7QY' => 'E02006851',
        '7ZY' => 'E02006851',
        '8AA' => 'E02005399',
        '8AB' => 'E02005399',
        '8AD' => 'E02005399',
        '8AE' => 'E02005399',
        '8AF' => 'E02005399',
        '8AG' => 'E02005399',
        '8AH' => 'E02005399',
        '8AJ' => 'E02005399',
        '8AL' => 'E02005399',
        '8AN' => 'E02005399',
        '8AP' => 'E02005399',
        '8AQ' => 'E02005399',
        '8AR' => 'E02005399',
        '8GB' => 'E02005399',
        '8RA' => 'E02005399',
        '8RB' => 'E02005399',
        '8RR' => 'E02005399',
        '8RS' => 'E02005399',
        '8RT' => 'E02005399',
        '8RU' => 'E02005399',
        '8RW' => 'E02005399',
        '8RX' => 'E02005399',
        '8RY' => 'E02005399',
        '8RZ' => 'E02005399',
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
