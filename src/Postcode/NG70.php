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
final class NG70
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02005887',
        '1AB' => 'E02005883',
        '1AD' => 'E02005883',
        '1AE' => 'E02005883',
        '1AF' => 'E02005883',
        '1AG' => 'E02005883',
        '1AH' => 'E02005883',
        '1AJ' => 'E02005883',
        '1AL' => 'E02005883',
        '1AN' => 'E02005883',
        '1AP' => 'E02005883',
        '1AQ' => 'E02005883',
        '1AR' => 'E02005883',
        '1AS' => 'E02005883',
        '1AT' => 'E02005883',
        '1AU' => 'E02005883',
        '1AX' => 'E02005883',
        '1AY' => 'E02005883',
        '1AZ' => 'E02005883',
        '1BA' => 'E02005883',
        '1BB' => 'E02005883',
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
