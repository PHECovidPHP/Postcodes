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
final class SY22
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '5WD' => 'E02006025',
        '6EA' => 'E02006027',
        '6EB' => 'E02006027',
        '6ED' => 'E02006027',
        '6EE' => 'E02006027',
        '6EF' => 'E02006027',
        '6EG' => 'E02006027',
        '6EH' => 'E02006027',
        '6EJ' => 'E02006027',
        '6EL' => 'E02006027',
        '6EQ' => 'E02006027',
        '6HB' => 'E02006027',
        '6HD' => 'E02006027',
        '6JX' => 'E02006027',
        '6LG' => 'E02006027',
        '6LL' => 'E02006027',
        '6LN' => 'E02006027',
        '6LQ' => 'E02006027',
        '6LU' => 'E02006026',
        '6LW' => 'E02006026',
        '6LX' => 'E02006026',
        '6LY' => 'E02006026',
        '6LZ' => 'E02006026',
        '6NT' => 'E02006026',
        '6NW' => 'E02006026',
        '6QY' => 'E02006027',
        '6WA' => 'E02006025',
        '6WB' => 'E02006025',
        '6WE' => 'E02006025',
        '6WH' => 'E02006026',
        '6WJ' => 'E02006025',
        '6WX' => 'E02006025',
        '6WY' => 'E02006025',
        '6WZ' => 'E02006025',
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
