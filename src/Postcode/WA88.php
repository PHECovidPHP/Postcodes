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
final class WA88
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02002579',
        '1AB' => 'E02002579',
        '1AD' => 'E02002579',
        '1AE' => 'E02002579',
        '1AF' => 'E02002579',
        '1AG' => 'E02002579',
        '1AH' => 'E02002579',
        '1AJ' => 'E02002579',
        '1AL' => 'E02002579',
        '1AP' => 'E02002579',
        '1AQ' => 'E02002579',
        '1AR' => 'E02002579',
        '1AS' => 'E02002579',
        '1AT' => 'E02002579',
        '1AU' => 'E02002579',
        '1AX' => 'E02002579',
        '1AZ' => 'E02002579',
        '1BA' => 'E02002579',
        '1BW' => 'E02002579',
        '1DY' => 'E02002579',
        '1FA' => 'E02002579',
        '1GB' => 'E02002579',
        '1GW' => 'E02002579',
        '1LN' => 'E02002579',
        '1NA' => 'E02002579',
        '1ND' => 'E02002579',
        '1NN' => 'E02002579',
        '1RD' => 'E02002579',
        '1SE' => 'E02002579',
        '1SF' => 'E02002579',
        '1SP' => 'E02002579',
        '1SS' => 'E02002579',
        '1TB' => 'E02002579',
        '1TS' => 'E02002579',
        '1YB' => 'E02002579',
        '1ZS' => 'E02002579',
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
