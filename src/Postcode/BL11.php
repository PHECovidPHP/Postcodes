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
final class BL11
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AE' => 'E02000999',
        '1AF' => 'E02000999',
        '1AG' => 'E02000999',
        '1AH' => 'E02000999',
        '1AJ' => 'E02000999',
        '1AL' => 'E02000999',
        '1AN' => 'E02000999',
        '1AP' => 'E02000999',
        '1AQ' => 'E02000999',
        '1AR' => 'E02000999',
        '1AS' => 'E02000999',
        '1AT' => 'E02000999',
        '1AU' => 'E02000999',
        '1AW' => 'E02000999',
        '1AX' => 'E02000999',
        '1AY' => 'E02000999',
        '1AZ' => 'E02000999',
        '1BA' => 'E02000999',
        '1BB' => 'E02000999',
        '1BD' => 'E02000999',
        '1BE' => 'E02000999',
        '1BF' => 'E02000999',
        '1BG' => 'E02000999',
        '1BH' => 'E02000999',
        '1XT' => 'E02000999',
        '1XU' => 'E02000999',
        '1XX' => 'E02000999',
        '1XY' => 'E02000999',
        '1XZ' => 'E02000999',
        '1YX' => 'E02000999',
        '1ZY' => 'E02000999',
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
