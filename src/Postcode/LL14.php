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
final class LL14
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '5BU' => 'E02006023',
        '5BY' => 'E02006023',
        '5DA' => 'E02006023',
        '5DB' => 'E02006023',
        '5DD' => 'E02006023',
        '5DE' => 'E02006023',
        '5DF' => 'E02006023',
        '5DG' => 'E02006023',
        '5DL' => 'E02006023',
        '5DN' => 'E02006023',
        '5DP' => 'E02006023',
        '5DR' => 'E02006023',
        '5DS' => 'E02006023',
        '5DU' => 'E02006023',
        '5DW' => 'E02006023',
        '5DY' => 'E02006023',
        '5EA' => 'E02006023',
        '5EB' => 'E02006023',
        '5ED' => 'E02006023',
        '5EE' => 'E02006023',
        '5EF' => 'E02006023',
        '5EH' => 'E02006023',
        '5EL' => 'E02006023',
        '5EN' => 'E02006023',
        '5EW' => 'E02006023',
        '5LJ' => 'E02006023',
        '5LP' => 'E02006023',
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
