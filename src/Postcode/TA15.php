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
final class TA15
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '6SH' => 'E02006091',
        '6UA' => 'E02006091',
        '6UH' => 'E02006091',
        '6UJ' => 'E02006091',
        '6UL' => 'E02006091',
        '6UN' => 'E02006091',
        '6UR' => 'E02006091',
        '6US' => 'E02006091',
        '6UT' => 'E02006091',
        '6UU' => 'E02006091',
        '6UW' => 'E02006091',
        '6UX' => 'E02006091',
        '6UY' => 'E02006091',
        '6UZ' => 'E02006091',
        '6WA' => 'E02006091',
        '6WY' => 'E02006091',
        '6WZ' => 'E02006091',
        '6XA' => 'E02006091',
        '6XB' => 'E02006091',
        '6XD' => 'E02006091',
        '6XE' => 'E02006091',
        '6XF' => 'E02006091',
        '6XG' => 'E02006091',
        '6XH' => 'E02006091',
        '6XJ' => 'E02006091',
        '6XL' => 'E02006094',
        '6XN' => 'E02006091',
        '6XP' => 'E02006091',
        '6XQ' => 'E02006091',
        '6XW' => 'E02006091',
        '6YZ' => 'E02006091',
        '6ZN' => 'E02006091',
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
