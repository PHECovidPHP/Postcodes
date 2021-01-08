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
final class CA24
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '3AB' => 'E02004005',
        '3HA' => 'E02004005',
        '3HU' => 'E02004005',
        '3HW' => 'E02004005',
        '3HX' => 'E02004005',
        '3HY' => 'E02004005',
        '3HZ' => 'E02004005',
        '3JA' => 'E02004005',
        '3JB' => 'E02004005',
        '3JD' => 'E02004005',
        '3JE' => 'E02004005',
        '3JF' => 'E02004005',
        '3JG' => 'E02004005',
        '3JH' => 'E02004005',
        '3JJ' => 'E02004005',
        '3JL' => 'E02004005',
        '3JN' => 'E02004005',
        '3JP' => 'E02004005',
        '3JQ' => 'E02004005',
        '3JR' => 'E02004005',
        '3JS' => 'E02004005',
        '3JT' => 'E02004005',
        '3JU' => 'E02004005',
        '3JW' => 'E02004005',
        '3JX' => 'E02004005',
        '3JY' => 'E02004005',
        '3JZ' => 'E02004005',
        '3LA' => 'E02004005',
        '3LB' => 'E02004005',
        '3LD' => 'E02004006',
        '3LE' => 'E02004005',
        '3LF' => 'E02004003',
        '3LG' => 'E02004005',
        '3LH' => 'E02004005',
        '3LJ' => 'E02004005',
        '3LL' => 'E02004005',
        '3LN' => 'E02004005',
        '3LP' => 'E02004005',
        '3LQ' => 'E02004005',
        '3LR' => 'E02004005',
        '3LS' => 'E02004005',
        '3LT' => 'E02004005',
        '3NZ' => 'E02004005',
        '3TP' => 'E02004005',
        '3WZ' => 'E02004005',
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
