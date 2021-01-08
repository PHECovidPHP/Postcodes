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
final class BS77
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02003050',
        '1AB' => 'E02003050',
        '1AD' => 'E02003050',
        '1AE' => 'E02003050',
        '1AF' => 'E02003050',
        '1AG' => 'E02003050',
        '1AH' => 'E02003050',
        '1AJ' => 'E02003050',
        '1AL' => 'E02003050',
        '1AN' => 'E02003050',
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
