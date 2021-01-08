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
final class B40
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AB' => 'E02002089',
        '1AD' => 'E02002089',
        '1NH' => 'E02002089',
        '1NS' => 'E02002086',
        '1NT' => 'E02002089',
        '1NU' => 'E02002086',
        '1PA' => 'E02002089',
        '1PB' => 'E02002089',
        '1PD' => 'E02002089',
        '1PE' => 'E02002089',
        '1PF' => 'E02002089',
        '1PG' => 'E02002089',
        '1PH' => 'E02002086',
        '1PJ' => 'E02002089',
        '1PL' => 'E02002089',
        '1PP' => 'E02002089',
        '1PQ' => 'E02002089',
        '1PR' => 'E02002086',
        '1PS' => 'E02002089',
        '1PT' => 'E02002089',
        '1PU' => 'E02002089',
        '1PW' => 'E02002089',
        '1PZ' => 'E02002089',
        '1QA' => 'E02002089',
        '1QB' => 'E02002089',
        '1WA' => 'E02002089',
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
