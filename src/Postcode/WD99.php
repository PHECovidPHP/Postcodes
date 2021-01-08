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
final class WD99
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02004978',
        '1AB' => 'E02004978',
        '1AD' => 'E02004978',
        '1AE' => 'E02004978',
        '1AF' => 'E02004978',
        '1AG' => 'E02004978',
        '1AH' => 'E02004978',
        '1AJ' => 'E02004978',
        '1AL' => 'E02004978',
        '1AN' => 'E02004978',
        '1AP' => 'E02004978',
        '1AQ' => 'E02004978',
        '1AR' => 'E02004978',
        '1AS' => 'E02004978',
        '1AU' => 'E02004978',
        '1AW' => 'E02004978',
        '1AX' => 'E02004978',
        '1AY' => 'E02004978',
        '1AZ' => 'E02004978',
        '1BA' => 'E02004978',
        '1BB' => 'E02004978',
        '1BD' => 'E02004978',
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
