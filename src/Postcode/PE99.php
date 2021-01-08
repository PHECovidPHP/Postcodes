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
final class PE99
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02003242',
        '1AB' => 'E02003242',
        '1AD' => 'E02003242',
        '1AE' => 'E02003242',
        '1AF' => 'E02003242',
        '1AG' => 'E02003242',
        '1AH' => 'E02003242',
        '1AJ' => 'E02003242',
        '1AL' => 'E02003242',
        '1AN' => 'E02003242',
        '1AP' => 'E02003242',
        '1AQ' => 'E02003242',
        '1AR' => 'E02003242',
        '1AS' => 'E02003242',
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
