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
final class L74
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '4AA' => 'E02006933',
        '4AB' => 'E02006933',
        '4AD' => 'E02006933',
        '4AE' => 'E02006933',
        '4AF' => 'E02006933',
        '4AG' => 'E02006933',
        '4AH' => 'E02006933',
        '4AJ' => 'E02006933',
        '4AL' => 'E02006933',
        '4AN' => 'E02006933',
        '4AP' => 'E02006933',
        '4AQ' => 'E02006933',
        '4AR' => 'E02006933',
        '4AS' => 'E02006933',
        '4AT' => 'E02006933',
        '4AU' => 'E02006933',
        '4AW' => 'E02006933',
        '4AX' => 'E02006933',
        '4AY' => 'E02006933',
        '4AZ' => 'E02006933',
        '4BA' => 'E02006933',
        '4BB' => 'E02006933',
        '4BD' => 'E02006933',
        '4BE' => 'E02006933',
        '4BF' => 'E02006933',
        '4BG' => 'E02006933',
        '4BJ' => 'E02006933',
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
