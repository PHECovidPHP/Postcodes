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
final class SO97
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '4AA' => 'E02004717',
        '4AB' => 'E02004717',
        '4AD' => 'E02004717',
        '4AE' => 'E02004717',
        '4AF' => 'E02004717',
        '4AG' => 'E02004717',
        '4AH' => 'E02004717',
        '4AJ' => 'E02004717',
        '4AL' => 'E02004717',
        '4AN' => 'E02004717',
        '4AP' => 'E02004717',
        '4AQ' => 'E02004717',
        '4AR' => 'E02004717',
        '4AS' => 'E02004717',
        '4AT' => 'E02004717',
        '4AU' => 'E02004717',
        '4AW' => 'E02004717',
        '4AX' => 'E02004717',
        '4AY' => 'E02004717',
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
