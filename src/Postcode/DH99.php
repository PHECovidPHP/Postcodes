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
final class DH99
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02004312',
        '1AB' => 'E02004312',
        '1AD' => 'E02004312',
        '1NS' => 'E02004315',
        '1NU' => 'E02004315',
        '1NW' => 'E02004315',
        '1NX' => 'E02004315',
        '1NY' => 'E02004315',
        '1NZ' => 'E02004315',
        '1SA' => 'E02004315',
        '1WB' => 'E02004312',
        '1WD' => 'E02004312',
        '1WE' => 'E02004312',
        '1WF' => 'E02004312',
        '1WG' => 'E02004312',
        '1WH' => 'E02004312',
        '1WJ' => 'E02004312',
        '1WL' => 'E02004312',
        '1WN' => 'E02004312',
        '1WP' => 'E02004312',
        '1WQ' => 'E02004312',
        '1WR' => 'E02004312',
        '1WS' => 'E02004312',
        '1WT' => 'E02004312',
        '1WU' => 'E02004312',
        '1WW' => 'E02004312',
        '1WX' => 'E02004315',
        '1WY' => 'E02004315',
        '1WZ' => 'E02004315',
        '1YY' => 'E02004315',
        '1YZ' => 'E02004312',
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
