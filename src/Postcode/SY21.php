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
final class SY21
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '8DL' => 'E02006028',
        '8DN' => 'E02006028',
        '8EP' => 'E02006028',
        '8ER' => 'E02006028',
        '8EW' => 'E02006028',
        '8FF' => 'E02006028',
        '8JL' => 'E02006041',
        '8JN' => 'E02006041',
        '8JP' => 'E02006041',
        '8JQ' => 'E02006041',
        '8JR' => 'E02006041',
        '8JS' => 'E02006041',
        '8JT' => 'E02006041',
        '8JU' => 'E02006041',
        '8JW' => 'E02006041',
        '8JX' => 'E02006041',
        '8JY' => 'E02006041',
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
