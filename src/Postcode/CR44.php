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
final class CR44
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02000850',
        '1AB' => 'E02000850',
        '1AD' => 'E02000850',
        '1AF' => 'E02000850',
        '1AG' => 'E02000850',
        '1AH' => 'E02000850',
        '1AJ' => 'E02000850',
        '1AL' => 'E02000850',
        '1AN' => 'E02000850',
        '1AP' => 'E02000850',
        '1AQ' => 'E02000850',
        '1AR' => 'E02000850',
        '1AS' => 'E02000850',
        '1AT' => 'E02000850',
        '1AU' => 'E02000850',
        '1AW' => 'E02000850',
        '1AX' => 'E02000850',
        '1AY' => 'E02000850',
        '1AZ' => 'E02000850',
        '1BA' => 'E02000850',
        '1BB' => 'E02000850',
        '2TW' => 'E02000850',
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
