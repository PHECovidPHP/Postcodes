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
final class LA19
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '5AB' => 'E02004007',
        '5GA' => 'E02004007',
        '5GB' => 'E02004007',
        '5SA' => 'E02004007',
        '5TA' => 'E02004007',
        '5TB' => 'E02004007',
        '5TD' => 'E02004007',
        '5TE' => 'E02004007',
        '5TF' => 'E02004007',
        '5TG' => 'E02004007',
        '5TH' => 'E02004007',
        '5TJ' => 'E02004007',
        '5TL' => 'E02004007',
        '5TN' => 'E02004007',
        '5TP' => 'E02004007',
        '5TQ' => 'E02004007',
        '5TR' => 'E02004007',
        '5TS' => 'E02004007',
        '5TT' => 'E02004007',
        '5TU' => 'E02004007',
        '5TW' => 'E02004007',
        '5TX' => 'E02004007',
        '5TY' => 'E02004007',
        '5TZ' => 'E02004007',
        '5UA' => 'E02004007',
        '5UB' => 'E02004007',
        '5UD' => 'E02004007',
        '5UE' => 'E02004007',
        '5UF' => 'E02004007',
        '5UG' => 'E02004007',
        '5UH' => 'E02004007',
        '5UJ' => 'E02004007',
        '5UL' => 'E02004007',
        '5UN' => 'E02004007',
        '5UP' => 'E02004007',
        '5UQ' => 'E02004007',
        '5UR' => 'E02004007',
        '5US' => 'E02004007',
        '5UT' => 'E02004007',
        '5UU' => 'E02004007',
        '5UW' => 'E02004007',
        '5UY' => 'E02004007',
        '5UZ' => 'E02004007',
        '5WU' => 'E02004007',
        '5WW' => 'E02004007',
        '5WX' => 'E02004007',
        '5WY' => 'E02004007',
        '5WZ' => 'E02004007',
        '5XA' => 'E02004007',
        '5XB' => 'E02004007',
        '5XD' => 'E02004007',
        '5XE' => 'E02004007',
        '5XF' => 'E02004007',
        '5XG' => 'E02004007',
        '5XH' => 'E02004007',
        '5XJ' => 'E02004007',
        '5XL' => 'E02004007',
        '5XN' => 'E02004007',
        '5XQ' => 'E02004007',
        '5XS' => 'E02004007',
        '5XT' => 'E02004007',
        '5XU' => 'E02004007',
        '5XW' => 'E02004007',
        '5XX' => 'E02004007',
        '5XY' => 'E02004007',
        '5XZ' => 'E02004007',
        '5YA' => 'E02004007',
        '5YB' => 'E02004007',
        '5YD' => 'E02004007',
        '5YE' => 'E02004007',
        '5YF' => 'E02004007',
        '5YG' => 'E02004007',
        '5YH' => 'E02004007',
        '5YJ' => 'E02004007',
        '5YL' => 'E02004007',
        '5YN' => 'E02004007',
        '5YP' => 'E02004007',
        '5YQ' => 'E02004007',
        '5YR' => 'E02004007',
        '5YS' => 'E02004007',
        '5YW' => 'E02004007',
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
