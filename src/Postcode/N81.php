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
final class N81
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02000412',
        '1AB' => 'E02000747',
        '1BB' => 'E02000412',
        '1DA' => 'E02000412',
        '1DD' => 'E02000412',
        '1EE' => 'E02000412',
        '1ER' => 'E02000412',
        '1FF' => 'E02000412',
        '1GG' => 'E02000412',
        '1HH' => 'E02000412',
        '1JJ' => 'E02000412',
        '1LL' => 'E02000412',
        '1NN' => 'E02000412',
        '1WA' => 'E02000747',
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
