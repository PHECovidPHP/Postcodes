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
final class CA19
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1TA' => 'E02004006',
        '1TB' => 'E02004006',
        '1TD' => 'E02004006',
        '1TE' => 'E02004006',
        '1TF' => 'E02004006',
        '1TG' => 'E02004006',
        '1TH' => 'E02004006',
        '1TJ' => 'E02004006',
        '1TL' => 'E02004006',
        '1TN' => 'E02004007',
        '1TP' => 'E02004006',
        '1TR' => 'E02004007',
        '1TS' => 'E02004006',
        '1TT' => 'E02004006',
        '1TU' => 'E02004006',
        '1TW' => 'E02004006',
        '1TX' => 'E02004006',
        '1TY' => 'E02004006',
        '1TZ' => 'E02004006',
        '1UA' => 'E02004006',
        '1UB' => 'E02004006',
        '1UD' => 'E02004006',
        '1UE' => 'E02004006',
        '1UF' => 'E02004006',
        '1UG' => 'E02004006',
        '1UH' => 'E02004006',
        '1UJ' => 'E02004006',
        '1UL' => 'E02004006',
        '1UN' => 'E02004006',
        '1UQ' => 'E02004006',
        '1UT' => 'E02004006',
        '1UU' => 'E02004006',
        '1UX' => 'E02004006',
        '1UY' => 'E02004006',
        '1UZ' => 'E02004006',
        '1WA' => 'E02004006',
        '1XA' => 'E02004006',
        '1XD' => 'E02004006',
        '1XE' => 'E02004006',
        '1XF' => 'E02004006',
        '1XG' => 'E02004006',
        '1XH' => 'E02004006',
        '1XL' => 'E02004006',
        '1XN' => 'E02004006',
        '1XP' => 'E02004006',
        '1XQ' => 'E02004006',
        '1XR' => 'E02004006',
        '1XS' => 'E02004006',
        '1XT' => 'E02004006',
        '1XU' => 'E02004006',
        '1XW' => 'E02004006',
        '1XX' => 'E02004006',
        '1XZ' => 'E02004006',
        '1YA' => 'E02004006',
        '1YB' => 'E02004006',
        '1YD' => 'E02004006',
        '1YE' => 'E02004006',
        '1YF' => 'E02004006',
        '1YG' => 'E02004006',
        '1YH' => 'E02004006',
        '1YL' => 'E02004006',
        '1YN' => 'E02004006',
        '1YP' => 'E02004006',
        '1YQ' => 'E02004006',
        '1YR' => 'E02004006',
        '1YS' => 'E02004006',
        '1YT' => 'E02004006',
        '1YX' => 'E02004006',
        '1YY' => 'E02004006',
        '1YZ' => 'E02004006',
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
