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
final class CH88
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '3AN' => 'E02003802',
        '3AP' => 'E02003809',
        '3AQ' => 'E02003802',
        '3BE' => 'E02003809',
        '3GN' => 'E02003809',
        '3NR' => 'E02003809',
        '3NW' => 'E02003809',
        '3SD' => 'E02003809',
        '3SE' => 'E02003809',
        '3WA' => 'E02003802',
        '3WB' => 'E02003802',
        '3WD' => 'E02003802',
        '3WE' => 'E02003802',
        '3WF' => 'E02003802',
        '3WH' => 'E02003802',
        '3WR' => 'E02003802',
        '3WS' => 'E02003802',
        '3XS' => 'E02003802',
        '3YD' => 'E02003809',
        '3YQ' => 'E02003802',
        '3YR' => 'E02003809',
        '3YS' => 'E02003809',
        '3ZG' => 'E02003809',
        '3ZJ' => 'E02003809',
        '3ZT' => 'E02003809',
        '3ZU' => 'E02003809',
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
