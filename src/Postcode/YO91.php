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
final class YO91
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1RT' => 'E02002781',
        '1WR' => 'E02002776',
        '1WS' => 'E02002776',
        '1WT' => 'E02002776',
        '1WU' => 'E02002776',
        '1WW' => 'E02002776',
        '1WX' => 'E02002776',
        '1WY' => 'E02002776',
        '1WZ' => 'E02002776',
        '1XY' => 'E02002776',
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
