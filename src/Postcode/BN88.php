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
final class BN88
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AH' => 'E02003520',
        '1LB' => 'E02003517',
        '1NA' => 'E02003517',
        '1NH' => 'E02003517',
        '1PR' => 'E02003504',
        '1TH' => 'E02003504',
        '1WQ' => 'E02003517',
        '1WS' => 'E02003517',
        '1WT' => 'E02003517',
        '1WU' => 'E02003517',
        '1WW' => 'E02003517',
        '1WX' => 'E02003517',
        '1WY' => 'E02003517',
        '1WZ' => 'E02003517',
        '1XB' => 'E02003517',
        '1XF' => 'E02003517',
        '1XG' => 'E02003517',
        '1XQ' => 'E02003517',
        '1XR' => 'E02003517',
        '1XU' => 'E02003517',
        '1XX' => 'E02003517',
        '1YF' => 'E02003517',
        '1YH' => 'E02003517',
        '1YL' => 'E02003517',
        '1YP' => 'E02003517',
        '1YR' => 'E02003517',
        '1YZ' => 'E02003517',
        '1ZA' => 'E02003517',
        '1ZE' => 'E02003517',
        '1ZF' => 'E02003517',
        '1ZL' => 'E02003517',
        '1ZS' => 'E02003517',
        '1ZT' => 'E02003517',
        '3TE' => 'E02003517',
        '3WB' => 'E02003517',
        '3WZ' => 'E02003517',
        '4YR' => 'E02003517',
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
