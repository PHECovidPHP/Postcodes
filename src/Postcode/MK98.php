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
final class MK98
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02003467',
        '1AB' => 'E02003467',
        '1AD' => 'E02003467',
        '1AE' => 'E02003467',
        '1AF' => 'E02003467',
        '1AG' => 'E02003467',
        '1AH' => 'E02003467',
        '1AJ' => 'E02003467',
        '1AL' => 'E02003467',
        '1AN' => 'E02003467',
        '1AP' => 'E02003467',
        '1AQ' => 'E02003467',
        '1AR' => 'E02003467',
        '1AS' => 'E02003467',
        '1AT' => 'E02003467',
        '1AU' => 'E02003467',
        '1AW' => 'E02003467',
        '1AX' => 'E02003467',
        '1AY' => 'E02003467',
        '1AZ' => 'E02003467',
        '1BA' => 'E02003467',
        '1BB' => 'E02003467',
        '1BD' => 'E02003467',
        '1BE' => 'E02003467',
        '1BG' => 'E02003467',
        '1BH' => 'E02003467',
        '1BJ' => 'E02003467',
        '1BL' => 'E02003467',
        '1BQ' => 'E02003467',
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
