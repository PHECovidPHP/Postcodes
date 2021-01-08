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
final class NE92
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02001688',
        '1AB' => 'E02001688',
        '1AD' => 'E02001688',
        '1AE' => 'E02001688',
        '1AF' => 'E02001688',
        '1AG' => 'E02001688',
        '1AH' => 'E02001688',
        '1AJ' => 'E02001688',
        '1AL' => 'E02001688',
        '1AN' => 'E02001688',
        '1AP' => 'E02001688',
        '1AQ' => 'E02001688',
        '1AR' => 'E02001688',
        '1AS' => 'E02001688',
        '1AT' => 'E02001688',
        '1AU' => 'E02001688',
        '1AW' => 'E02001688',
        '1AX' => 'E02001688',
        '1AY' => 'E02001688',
        '1AZ' => 'E02001688',
        '1BA' => 'E02001688',
        '1BB' => 'E02001688',
        '1BD' => 'E02001688',
        '1BE' => 'E02001688',
        '1BF' => 'E02001688',
        '1BG' => 'E02001688',
        '1BH' => 'E02001688',
        '1BJ' => 'E02001688',
        '1BN' => 'E02001688',
        '1BP' => 'E02001688',
        '1BQ' => 'E02001688',
        '1BR' => 'E02001688',
        '1BS' => 'E02001688',
        '1BT' => 'E02001688',
        '1BU' => 'E02001688',
        '1BW' => 'E02001688',
        '1BX' => 'E02001688',
        '1BY' => 'E02001688',
        '1BZ' => 'E02001688',
        '1DA' => 'E02001688',
        '1DB' => 'E02001688',
        '1DD' => 'E02001688',
        '1DE' => 'E02001688',
        '1DF' => 'E02001688',
        '1DG' => 'E02001688',
        '1DH' => 'E02001688',
        '1WA' => 'E02001688',
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
