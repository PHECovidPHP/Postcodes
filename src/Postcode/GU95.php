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
final class GU95
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02006423',
        '1AB' => 'E02006423',
        '1AD' => 'E02006423',
        '1AE' => 'E02006423',
        '1AF' => 'E02006423',
        '1AG' => 'E02006423',
        '1AH' => 'E02006423',
        '1AJ' => 'E02006423',
        '1AL' => 'E02006423',
        '1AN' => 'E02006423',
        '1AS' => 'E02006423',
        '1AW' => 'E02006423',
        '1AX' => 'E02006423',
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
