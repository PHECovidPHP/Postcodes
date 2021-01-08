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
final class L29
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1YA' => 'E02001449',
        '1YB' => 'E02001449',
        '3EA' => 'E02001444',
        '3EB' => 'E02001444',
        '5XA' => 'E02001444',
        '5XB' => 'E02001449',
        '5XD' => 'E02001449',
        '6YA' => 'E02001449',
        '6YB' => 'E02001449',
        '6YD' => 'E02001449',
        '7UZ' => 'E02001449',
        '7WA' => 'E02001449',
        '7WB' => 'E02001449',
        '7WD' => 'E02001449',
        '7WE' => 'E02001449',
        '7WF' => 'E02001449',
        '7WG' => 'E02001449',
        '7WH' => 'E02001449',
        '7WJ' => 'E02001449',
        '7WL' => 'E02001449',
        '7WQ' => 'E02001449',
        '7XA' => 'E02001449',
        '7YX' => 'E02001458',
        '8AA' => 'E02001449',
        '8LY' => 'E02001449',
        '8YA' => 'E02001449',
        '8YB' => 'E02001449',
        '9AD' => 'E02001449',
        '9AE' => 'E02001449',
        '9AF' => 'E02001449',
        '9WZ' => 'E02001458',
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
