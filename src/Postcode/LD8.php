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
final class LD8
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '2HH' => 'E02002905',
        '2HL' => 'E02002905',
        '2HN' => 'E02002905',
        '2HP' => 'E02002905',
        '2HR' => 'E02002905',
        '2HS' => 'E02002905',
        '2HT' => 'E02002905',
        '2HU' => 'E02002910',
        '2HW' => 'E02002905',
        '2HY' => 'E02002905',
        '2LE' => 'E02002910',
        '2LG' => 'E02002910',
        '2LH' => 'E02002910',
        '2LJ' => 'E02002910',
        '2LL' => 'E02002910',
        '2LN' => 'E02002905',
        '2LP' => 'E02002905',
        '2LR' => 'E02002905',
        '2LS' => 'E02002905',
        '2LT' => 'E02002905',
        '2LU' => 'E02002905',
        '2LW' => 'E02002905',
        '2LY' => 'E02002905',
        '2NA' => 'E02002905',
        '2NB' => 'E02002905',
        '2ND' => 'E02002905',
        '2PR' => 'E02002910',
        '2PS' => 'E02002910',
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
