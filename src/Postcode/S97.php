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
final class S97
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '3AD' => 'E02001579',
        '3AE' => 'E02001579',
        '3AJ' => 'E02001579',
        '3BA' => 'E02001579',
        '3BH' => 'E02001579',
        '3BS' => 'E02001579',
        '3DA' => 'E02001579',
        '3DG' => 'E02001579',
        '3DS' => 'E02001579',
        '3ET' => 'E02001632',
        '3EU' => 'E02001632',
        '3EY' => 'E02001579',
        '3FA' => 'E02001579',
        '3FB' => 'E02001579',
        '3FF' => 'E02001632',
        '3FG' => 'E02001579',
        '3FH' => 'E02001579',
        '3FJ' => 'E02001579',
        '3FL' => 'E02001579',
        '3FN' => 'E02001579',
        '3FP' => 'E02001579',
        '3FQ' => 'E02001579',
        '3FR' => 'E02001579',
        '3FS' => 'E02001579',
        '3FT' => 'E02001579',
        '3FU' => 'E02001579',
        '3FW' => 'E02001579',
        '3FX' => 'E02001579',
        '3FY' => 'E02001579',
        '3FZ' => 'E02001579',
        '3GA' => 'E02001579',
        '3GB' => 'E02001579',
        '3GD' => 'E02001579',
        '3GE' => 'E02001579',
        '3GF' => 'E02001579',
        '3GG' => 'E02001579',
        '3GH' => 'E02001579',
        '3GJ' => 'E02001579',
        '3GL' => 'E02001579',
        '3GN' => 'E02001632',
        '3GP' => 'E02001632',
        '3GQ' => 'E02001579',
        '3NR' => 'E02001579',
        '3ZR' => 'E02001579',
        '3ZT' => 'E02001579',
        '3ZU' => 'E02001579',
        '3ZX' => 'E02001579',
        '3ZY' => 'E02001579',
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
