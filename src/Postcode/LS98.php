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
final class LS98
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AD' => 'E02006876',
        '1BX' => 'E02002422',
        '1FD' => 'E02006876',
        '1HX' => 'E02002422',
        '1YY' => 'E02006876',
        '1YZ' => 'E02006876',
        '3AA' => 'E02006875',
        '3AB' => 'E02006876',
        '3HX' => 'E02006875',
        '4SA' => 'E02006875',
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
