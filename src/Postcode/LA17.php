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
final class LA17
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '7AB' => 'E02004022',
        '7TA' => 'E02004022',
        '7TB' => 'E02004022',
        '7TD' => 'E02004022',
        '7TE' => 'E02004022',
        '7TF' => 'E02004022',
        '7TG' => 'E02004022',
        '7TH' => 'E02004022',
        '7TJ' => 'E02004022',
        '7TL' => 'E02004022',
        '7TN' => 'E02004022',
        '7TP' => 'E02004022',
        '7TQ' => 'E02004022',
        '7TR' => 'E02004022',
        '7TS' => 'E02004022',
        '7TT' => 'E02004022',
        '7TU' => 'E02003977',
        '7TW' => 'E02004022',
        '7TX' => 'E02004022',
        '7UA' => 'E02004022',
        '7UB' => 'E02004022',
        '7UD' => 'E02004022',
        '7UE' => 'E02004022',
        '7UF' => 'E02004022',
        '7UG' => 'E02004022',
        '7UH' => 'E02004022',
        '7UJ' => 'E02004022',
        '7UL' => 'E02004022',
        '7UN' => 'E02004022',
        '7UP' => 'E02004022',
        '7UQ' => 'E02004022',
        '7UR' => 'E02004022',
        '7UT' => 'E02004022',
        '7UU' => 'E02004022',
        '7UW' => 'E02004022',
        '7UX' => 'E02004022',
        '7UY' => 'E02004022',
        '7UZ' => 'E02004022',
        '7WZ' => 'E02004022',
        '7XA' => 'E02004022',
        '7XD' => 'E02004022',
        '7XE' => 'E02004022',
        '7XF' => 'E02004022',
        '7XG' => 'E02004022',
        '7XH' => 'E02004022',
        '7XJ' => 'E02004022',
        '7XL' => 'E02004022',
        '7XN' => 'E02004022',
        '7XP' => 'E02004022',
        '7XQ' => 'E02004022',
        '7XR' => 'E02004022',
        '7XS' => 'E02004022',
        '7XT' => 'E02004022',
        '7XU' => 'E02004022',
        '7XW' => 'E02004022',
        '7XX' => 'E02004022',
        '7XY' => 'E02004022',
        '7XZ' => 'E02004022',
        '7YA' => 'E02004022',
        '7YB' => 'E02004022',
        '7YD' => 'E02004022',
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
