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
final class CT50
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02005107',
        '1AE' => 'E02005107',
        '1AF' => 'E02005107',
        '1AH' => 'E02005107',
        '1AJ' => 'E02005107',
        '1AL' => 'E02005107',
        '1AN' => 'E02005107',
        '1AP' => 'E02005107',
        '1ZU' => 'E02005107',
        '1ZW' => 'E02005107',
        '1ZX' => 'E02005107',
        '1ZY' => 'E02005107',
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
