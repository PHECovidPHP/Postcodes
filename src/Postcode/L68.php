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
final class L68
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AQ' => 'E02001457',
        '0BN' => 'E02006932',
        '1AA' => 'E02001457',
        '1AB' => 'E02001455',
        '1AD' => 'E02006932',
        '1AE' => 'E02001466',
        '1AF' => 'E02001354',
        '1AG' => 'E02001455',
        '1AT' => 'E02001457',
        '1AW' => 'E02001466',
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
