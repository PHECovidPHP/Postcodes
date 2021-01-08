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
final class BS98
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02003034',
        '1AB' => 'E02003034',
        '1AD' => 'E02003034',
        '1AE' => 'E02003034',
        '1AF' => 'E02003034',
        '1AG' => 'E02003034',
        '1AH' => 'E02003034',
        '1AJ' => 'E02003034',
        '1AL' => 'E02003034',
        '1AN' => 'E02003034',
        '1AP' => 'E02003034',
        '1AQ' => 'E02006887',
        '1AR' => 'E02006887',
        '1AS' => 'E02006887',
        '1AT' => 'E02006887',
        '1DB' => 'E02006887',
        '1TL' => 'E02003034',
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
