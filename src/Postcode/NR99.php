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
final class NR99
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AB' => 'E02006907',
        '1AD' => 'E02006907',
        '1AH' => 'E02006907',
        '1AL' => 'E02006907',
        '1AN' => 'E02006907',
        '1AP' => 'E02006907',
        '1AS' => 'E02006907',
        '1AT' => 'E02006907',
        '1AW' => 'E02006907',
        '1AX' => 'E02006907',
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
