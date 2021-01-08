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
final class UB18
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '7AT' => 'E02000274',
        '7AU' => 'E02000274',
        '7BE' => 'E02000274',
        '7DE' => 'E02000274',
        '7DN' => 'E02000274',
        '7DS' => 'E02000274',
        '7ER' => 'E02000274',
        '7ES' => 'E02000274',
        '7FD' => 'E02000274',
        '7FR' => 'E02000274',
        '7HG' => 'E02000274',
        '7JP' => 'E02000274',
        '7NL' => 'E02000274',
        '7NY' => 'E02000274',
        '7NZ' => 'E02000274',
        '7PH' => 'E02000274',
        '7PT' => 'E02000274',
        '7SE' => 'E02000274',
        '7SG' => 'E02000274',
        '7SW' => 'E02000274',
        '7TH' => 'E02000274',
        '7TR' => 'E02000274',
        '7TW' => 'E02000274',
        '7US' => 'E02000274',
        '7YN' => 'E02000274',
        '7YS' => 'E02000274',
        '7YT' => 'E02000274',
        '7YZ' => 'E02000274',
        '7ZA' => 'E02000274',
        '7ZB' => 'E02000274',
        '9AT' => 'E02000274',
        '9AU' => 'E02000274',
        '9BE' => 'E02000274',
        '9DE' => 'E02000274',
        '9DN' => 'E02000274',
        '9ER' => 'E02000274',
        '9ES' => 'E02000274',
        '9FD' => 'E02000274',
        '9FR' => 'E02000274',
        '9HG' => 'E02000274',
        '9JP' => 'E02000274',
        '9NL' => 'E02000274',
        '9NY' => 'E02000274',
        '9NZ' => 'E02000274',
        '9PH' => 'E02000274',
        '9PT' => 'E02000274',
        '9SE' => 'E02000274',
        '9SW' => 'E02000274',
        '9TH' => 'E02000274',
        '9TR' => 'E02000274',
        '9TW' => 'E02000274',
        '9US' => 'E02000274',
        '9YN' => 'E02000274',
        '9YS' => 'E02000274',
        '9YT' => 'E02000274',
        '9YZ' => 'E02000274',
        '9ZA' => 'E02000274',
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
