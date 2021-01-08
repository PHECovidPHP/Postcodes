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
final class B22
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02001949',
        '1AB' => 'E02001949',
        '1AD' => 'E02001949',
        '1AE' => 'E02001949',
        '1AF' => 'E02001949',
        '1AG' => 'E02001949',
        '1AH' => 'E02001949',
        '1AJ' => 'E02001949',
        '1AL' => 'E02001949',
        '1AQ' => 'E02001949',
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
