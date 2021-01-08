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
final class ME99
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02003327',
        '2AA' => 'E02005071',
        '2AB' => 'E02005071',
        '2AD' => 'E02005071',
        '2AE' => 'E02005071',
        '2AF' => 'E02005071',
        '2AG' => 'E02005071',
        '2AH' => 'E02005071',
        '2AJ' => 'E02005071',
        '2AL' => 'E02005071',
        '2AN' => 'E02005071',
        '2AP' => 'E02005071',
        '2AQ' => 'E02005071',
        '2AR' => 'E02005071',
        '2AS' => 'E02005071',
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
