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
final class M99
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02006902',
        '1AB' => 'E02006902',
        '1AD' => 'E02006902',
        '1AE' => 'E02006902',
        '1AT' => 'E02006902',
        '1BT' => 'E02006902',
        '1BW' => 'E02006902',
        '1BX' => 'E02006902',
        '1DA' => 'E02006902',
        '1DB' => 'E02006902',
        '1DD' => 'E02006912',
        '1DE' => 'E02006912',
        '1DJ' => 'E02006902',
        '1DR' => 'E02006902',
        '1DW' => 'E02006902',
        '1DX' => 'E02006902',
        '1EB' => 'E02006912',
        '1ES' => 'E02006912',
        '1FF' => 'E02006902',
        '1HS' => 'E02006902',
        '1JD' => 'E02006902',
        '1LH' => 'E02006902',
        '1NA' => 'E02006902',
        '1NL' => 'E02006902',
        '1NN' => 'E02006902',
        '1RD' => 'E02006902',
        '1RQ' => 'E02006902',
        '1SA' => 'E02006912',
        '1SY' => 'E02006912',
        '1TR' => 'E02006902',
        '1WZ' => 'E02006902',
        '1ZU' => 'E02006912',
        '1ZW' => 'E02006902',
        '2BE' => 'E02006912',
        '2BS' => 'E02006912',
        '2BT' => 'E02006912',
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
