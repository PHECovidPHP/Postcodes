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
final class LU95
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02003639',
        '1AB' => 'E02003639',
        '1AD' => 'E02003639',
        '1AE' => 'E02003643',
        '1AF' => 'E02003639',
        '1AG' => 'E02003639',
        '1AH' => 'E02003639',
        '1AJ' => 'E02003639',
        '1AL' => 'E02003639',
        '1AN' => 'E02003639',
        '1AP' => 'E02003639',
        '1AQ' => 'E02003639',
        '1AR' => 'E02003639',
        '1AS' => 'E02003639',
        '1AT' => 'E02003639',
        '1AU' => 'E02003639',
        '1AW' => 'E02003639',
        '1AX' => 'E02003639',
        '1AY' => 'E02003643',
        '1AZ' => 'E02003639',
        '1BB' => 'E02003643',
        '1BD' => 'E02003643',
        '1BE' => 'E02003643',
        '1LH' => 'E02003639',
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
