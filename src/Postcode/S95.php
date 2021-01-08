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
final class S95
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02001632',
        '1AB' => 'E02001632',
        '1AD' => 'E02001594',
        '1AE' => 'E02001594',
        '1AF' => 'E02001614',
        '1AG' => 'E02001594',
        '1AH' => 'E02001594',
        '1AJ' => 'E02001594',
        '1AL' => 'E02001632',
        '1AN' => 'E02001632',
        '1AP' => 'E02001632',
        '1AQ' => 'E02001632',
        '1AR' => 'E02001594',
        '1AS' => 'E02001614',
        '1AT' => 'E02001594',
        '1AU' => 'E02001594',
        '1AW' => 'E02001594',
        '1AX' => 'E02001594',
        '1AY' => 'E02001594',
        '1AZ' => 'E02001594',
        '1BA' => 'E02001594',
        '1BB' => 'E02001594',
        '1BD' => 'E02001632',
        '1BE' => 'E02001632',
        '1BF' => 'E02001632',
        '1BG' => 'E02001632',
        '1BH' => 'E02001632',
        '1BJ' => 'E02001632',
        '1BL' => 'E02001632',
        '1BN' => 'E02001632',
        '1BP' => 'E02001632',
        '1BQ' => 'E02001632',
        '1BR' => 'E02001632',
        '1BS' => 'E02001632',
        '1BT' => 'E02001632',
        '1BU' => 'E02001632',
        '1BW' => 'E02001632',
        '1BX' => 'E02001632',
        '1BY' => 'E02001632',
        '1BZ' => 'E02001632',
        '1DA' => 'E02001632',
        '1DB' => 'E02001632',
        '1DD' => 'E02001632',
        '1DE' => 'E02001632',
        '1DF' => 'E02001632',
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
