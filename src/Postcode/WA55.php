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
final class WA55
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AQ' => 'E02002607',
        '1AX' => 'E02002607',
        '1AZ' => 'E02002607',
        '1BA' => 'E02002607',
        '1BB' => 'E02002607',
        '1BF' => 'E02002607',
        '1BJ' => 'E02002607',
        '1BL' => 'E02002607',
        '1BN' => 'E02002598',
        '1BQ' => 'E02002607',
        '1BS' => 'E02002607',
        '1DA' => 'E02002607',
        '1DG' => 'E02002607',
        '1DQ' => 'E02002607',
        '1DR' => 'E02002607',
        '1DU' => 'E02002607',
        '1DW' => 'E02002607',
        '1DY' => 'E02002607',
        '1EA' => 'E02002607',
        '1EB' => 'E02002607',
        '1EE' => 'E02002607',
        '1EF' => 'E02002607',
        '1EG' => 'E02002607',
        '1EH' => 'E02002607',
        '1EJ' => 'E02002607',
        '1EL' => 'E02002607',
        '1EP' => 'E02002607',
        '1EQ' => 'E02002607',
        '1ES' => 'E02002607',
        '1ET' => 'E02002607',
        '1EU' => 'E02002607',
        '1EW' => 'E02002607',
        '1EX' => 'E02002607',
        '1EY' => 'E02002607',
        '1EZ' => 'E02002607',
        '1GA' => 'E02002607',
        '1GG' => 'E02002607',
        '1HB' => 'E02002607',
        '1LR' => 'E02002598',
        '1LU' => 'E02002607',
        '1PP' => 'E02002598',
        '1RE' => 'E02002607',
        '1RT' => 'E02002598',
        '1SE' => 'E02002607',
        '1TR' => 'E02002607',
        '1WA' => 'E02002607',
        '1WB' => 'E02002607',
        '1WE' => 'E02002607',
        '1WH' => 'E02002607',
        '1WS' => 'E02002607',
        '1YY' => 'E02002607',
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
