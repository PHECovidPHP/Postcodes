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
final class HU20
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '3AB' => 'E02002707',
        '3LA' => 'E02002707',
        '3LB' => 'E02002708',
        '3UA' => 'E02002707',
        '3UJ' => 'E02002707',
        '3UL' => 'E02002707',
        '3UN' => 'E02002707',
        '3UP' => 'E02002707',
        '3UQ' => 'E02002707',
        '3UR' => 'E02002707',
        '3US' => 'E02002707',
        '3UT' => 'E02002707',
        '3UU' => 'E02002707',
        '3UW' => 'E02002707',
        '3UX' => 'E02002707',
        '3UY' => 'E02002707',
        '3UZ' => 'E02002705',
        '3WW' => 'E02002708',
        '3WX' => 'E02002708',
        '3WY' => 'E02002708',
        '3WZ' => 'E02002708',
        '3XA' => 'E02002707',
        '3XB' => 'E02002707',
        '3XD' => 'E02002707',
        '3XE' => 'E02002707',
        '3XF' => 'E02002707',
        '3XG' => 'E02002707',
        '3XH' => 'E02002707',
        '3XJ' => 'E02002707',
        '3XL' => 'E02002707',
        '3XN' => 'E02002707',
        '3XP' => 'E02002707',
        '3XQ' => 'E02002707',
        '3XR' => 'E02002707',
        '3XS' => 'E02002707',
        '3XT' => 'E02002707',
        '3XU' => 'E02002707',
        '3XW' => 'E02002707',
        '3XX' => 'E02002707',
        '3YY' => 'E02002707',
        '3YZ' => 'E02002707',
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
