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
final class S99
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02001632',
        '1AB' => 'E02001632',
        '1AD' => 'E02001632',
        '1AF' => 'E02001632',
        '1AG' => 'E02001632',
        '1AH' => 'E02001632',
        '1AJ' => 'E02001632',
        '1AL' => 'E02001632',
        '1AN' => 'E02001632',
        '1AP' => 'E02001632',
        '1AQ' => 'E02001632',
        '1AR' => 'E02001632',
        '1AS' => 'E02001632',
        '1AT' => 'E02001632',
        '1AU' => 'E02001632',
        '1AW' => 'E02001632',
        '1AX' => 'E02001632',
        '1AY' => 'E02001632',
        '1AZ' => 'E02001632',
        '1BA' => 'E02001632',
        '1BB' => 'E02001632',
        '1BD' => 'E02001632',
        '1BE' => 'E02001632',
        '1BF' => 'E02001632',
        '2AA' => 'E02001632',
        '2AB' => 'E02001632',
        '2AD' => 'E02001632',
        '2AE' => 'E02001632',
        '2AF' => 'E02001632',
        '2AH' => 'E02001632',
        '2AJ' => 'E02001632',
        '2AP' => 'E02001632',
        '2AQ' => 'E02001632',
        '2AR' => 'E02001632',
        '2AS' => 'E02001632',
        '3AA' => 'E02001632',
        '3AD' => 'E02001632',
        '3AE' => 'E02001632',
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
