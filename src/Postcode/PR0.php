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
final class PR0
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '2AA' => 'E02005268',
        '2AD' => 'E02005268',
        '2AE' => 'E02005268',
        '2AF' => 'E02005268',
        '2AG' => 'E02005268',
        '2AH' => 'E02005268',
        '2AJ' => 'E02005268',
        '2AP' => 'E02005268',
        '2BP' => 'E02005268',
        '2EG' => 'E02005268',
        '2EJ' => 'E02005268',
        '2GP' => 'E02005268',
        '2LP' => 'E02005268',
        '2NP' => 'E02005268',
        '2PP' => 'E02005268',
        '2QP' => 'E02005268',
        '2RD' => 'E02005268',
        '2RP' => 'E02005268',
        '2SP' => 'E02005268',
        '2TP' => 'E02005268',
        '2TU' => 'E02005268',
        '2ZP' => 'E02005268',
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
