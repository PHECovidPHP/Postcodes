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
final class DL98
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02002566',
        '1AB' => 'E02002566',
        '1AD' => 'E02002566',
        '1AE' => 'E02002566',
        '1AF' => 'E02002566',
        '1AG' => 'E02002566',
        '1AH' => 'E02002566',
        '1AJ' => 'E02002566',
        '1AL' => 'E02002566',
        '1AN' => 'E02002566',
        '1AT' => 'E02002566',
        '1TL' => 'E02002566',
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
