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
final class RM50
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1DA' => 'E02000480',
        '1DD' => 'E02000480',
        '1DY' => 'E02000480',
        '2AE' => 'E02000480',
        '2AQ' => 'E02000480',
        '2AX' => 'E02000480',
        '2BB' => 'E02000480',
        '2BY' => 'E02000480',
        '2DB' => 'E02000480',
        '2EU' => 'E02000480',
        '2GH' => 'E02000480',
        '2NG' => 'E02000480',
        '4BE' => 'E02000480',
        '4PR' => 'E02000480',
        '4TZ' => 'E02000480',
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
