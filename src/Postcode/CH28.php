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
final class CH28
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '9AA' => 'E02001478',
        '9AE' => 'E02001478',
        '9AF' => 'E02001478',
        '9AG' => 'E02001478',
        '9AH' => 'E02001478',
        '9AJ' => 'E02001478',
        '9AL' => 'E02001478',
        '9AN' => 'E02001478',
        '9AP' => 'E02001478',
        '9AQ' => 'E02001478',
        '9AR' => 'E02001478',
        '9AS' => 'E02001478',
        '9AT' => 'E02001478',
        '9AU' => 'E02001478',
        '9AW' => 'E02001478',
        '9AX' => 'E02001478',
        '9AY' => 'E02001478',
        '9AZ' => 'E02001478',
        '9BA' => 'E02001478',
        '9BB' => 'E02001478',
        '9BD' => 'E02001478',
        '9BE' => 'E02001478',
        '9BF' => 'E02001478',
        '9BG' => 'E02001478',
        '9BH' => 'E02001478',
        '9BP' => 'E02001478',
        '9BQ' => 'E02001478',
        '9BR' => 'E02001478',
        '9BS' => 'E02001478',
        '9BT' => 'E02001478',
        '9BU' => 'E02001478',
        '9BW' => 'E02001478',
        '9BX' => 'E02001478',
        '9BY' => 'E02001478',
        '9BZ' => 'E02001478',
        '9DA' => 'E02001478',
        '9DB' => 'E02001478',
        '9DD' => 'E02001478',
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
