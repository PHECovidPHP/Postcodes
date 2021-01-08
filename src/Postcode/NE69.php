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
final class NE69
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '7AA' => 'E02005708',
        '7AB' => 'E02005708',
        '7AD' => 'E02005708',
        '7AE' => 'E02005708',
        '7AF' => 'E02005708',
        '7AG' => 'E02005708',
        '7AH' => 'E02005708',
        '7AJ' => 'E02005708',
        '7AL' => 'E02005708',
        '7AN' => 'E02005708',
        '7AP' => 'E02005708',
        '7AQ' => 'E02005708',
        '7AR' => 'E02005708',
        '7AS' => 'E02005708',
        '7AT' => 'E02005708',
        '7AU' => 'E02005708',
        '7AW' => 'E02005708',
        '7AX' => 'E02005708',
        '7AY' => 'E02005708',
        '7AZ' => 'E02005708',
        '7BA' => 'E02005708',
        '7BB' => 'E02005708',
        '7BG' => 'E02005708',
        '7BJ' => 'E02005708',
        '7BL' => 'E02005708',
        '7BN' => 'E02005708',
        '7BP' => 'E02005708',
        '7BQ' => 'E02005708',
        '7BS' => 'E02005708',
        '7BT' => 'E02005708',
        '7BU' => 'E02005708',
        '7BW' => 'E02005708',
        '7BX' => 'E02005708',
        '7BY' => 'E02005708',
        '7BZ' => 'E02005708',
        '7DA' => 'E02005708',
        '7DB' => 'E02005708',
        '7DD' => 'E02005708',
        '7DE' => 'E02005708',
        '7DF' => 'E02005708',
        '7DG' => 'E02005708',
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
