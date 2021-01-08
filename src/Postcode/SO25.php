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
final class SO25
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02004834',
        '1AB' => 'E02004834',
        '1AD' => 'E02004834',
        '1AE' => 'E02004834',
        '1AF' => 'E02004834',
        '1AG' => 'E02004834',
        '1AH' => 'E02004834',
        '1AJ' => 'E02004834',
        '1AL' => 'E02004834',
        '1AN' => 'E02004834',
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
