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
final class TS90
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '8JA' => 'E02002498',
        '8JD' => 'E02002498',
        '8JE' => 'E02002498',
        '8JF' => 'E02002498',
        '8JG' => 'E02002498',
        '8JH' => 'E02002498',
        '8JJ' => 'E02002498',
        '8JL' => 'E02002498',
        '8JW' => 'E02002498',
        '8WS' => 'E02002498',
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
