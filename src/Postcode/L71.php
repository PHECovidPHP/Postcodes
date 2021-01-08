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
final class L71
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '2AA' => 'E02001461',
        '2AB' => 'E02001461',
        '2AE' => 'E02001461',
        '2AG' => 'E02001461',
        '2AH' => 'E02001461',
        '2AJ' => 'E02001461',
        '2AL' => 'E02006932',
        '2AX' => 'E02006932',
        '2AZ' => 'E02006932',
        '2BA' => 'E02001461',
        '2EA' => 'E02006932',
        '2LA' => 'E02001461',
        '2LB' => 'E02001396',
        '2PA' => 'E02001396',
        '2WF' => 'E02001396',
        '2WU' => 'E02001396',
        '2WW' => 'E02001396',
        '2WX' => 'E02001396',
        '2XX' => 'E02001396',
        '2ZZ' => 'E02001396',
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
