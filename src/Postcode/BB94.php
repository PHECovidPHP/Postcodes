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
final class BB94
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02005242',
        '0AB' => 'E02005242',
        '0AP' => 'E02005242',
        '0AR' => 'E02005242',
        '0AS' => 'E02005242',
        '0BB' => 'E02005242',
        '0BF' => 'E02005242',
        '0BL' => 'E02005242',
        '0BR' => 'E02005242',
        '0BS' => 'E02005242',
        '0DB' => 'E02005242',
        '0EB' => 'E02005242',
        '0EF' => 'E02005242',
        '0ER' => 'E02005242',
        '0ES' => 'E02005242',
        '0FB' => 'E02005242',
        '0FF' => 'E02005242',
        '0FR' => 'E02005242',
        '0TA' => 'E02005242',
        '0WA' => 'E02005240',
        '0ZR' => 'E02005242',
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
