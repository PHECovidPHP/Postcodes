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
final class OL95
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AD' => 'E02001106',
        '1AE' => 'E02001106',
        '1AF' => 'E02001106',
        '1AG' => 'E02001106',
        '1AH' => 'E02001106',
        '1AJ' => 'E02001106',
        '1AL' => 'E02001106',
        '1AN' => 'E02001106',
        '1AP' => 'E02001106',
        '1AQ' => 'E02001106',
        '1AR' => 'E02001106',
        '1AS' => 'E02001106',
        '1AT' => 'E02001106',
        '1AU' => 'E02001106',
        '1AW' => 'E02001106',
        '1AX' => 'E02001106',
        '1AY' => 'E02001106',
        '1AZ' => 'E02001106',
        '1BA' => 'E02001106',
        '1BB' => 'E02001106',
        '1BD' => 'E02001106',
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
