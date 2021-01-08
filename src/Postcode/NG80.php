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
final class NG80
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02005860',
        '1AB' => 'E02005860',
        '1AD' => 'E02005860',
        '1AE' => 'E02005860',
        '1AH' => 'E02002898',
        '1AR' => 'E02002889',
        '1DP' => 'E02005916',
        '1EH' => 'E02006905',
        '1FS' => 'E02002889',
        '1HH' => 'E02006904',
        '1LH' => 'E02002889',
        '1PH' => 'E02002889',
        '1PR' => 'E02002898',
        '1RH' => 'E02006905',
        '1TH' => 'E02002889',
        '1WA' => 'E02005860',
        '1WB' => 'E02005860',
        '1WZ' => 'E02005860',
        '1ZZ' => 'E02002889',
        '7EJ' => 'E02002892',
        '7EL' => 'E02002892',
        '7WD' => 'E02002892',
        '7WE' => 'E02005860',
        '7WF' => 'E02005860',
        '7WH' => 'E02005860',
        '7WL' => 'E02002892',
        '7WN' => 'E02005860',
        '7WP' => 'E02005860',
        '7WR' => 'E02005860',
        '7WS' => 'E02002892',
        '7WT' => 'E02005860',
        '7WU' => 'E02005860',
        '7WW' => 'E02002892',
        '7WX' => 'E02005860',
        '8AA' => 'E02005860',
        '8AB' => 'E02005860',
        '8AD' => 'E02005860',
        '8AE' => 'E02005860',
        '8AF' => 'E02005860',
        '8AG' => 'E02005860',
        '8AH' => 'E02005860',
        '8AJ' => 'E02005860',
        '8AL' => 'E02005860',
        '8AN' => 'E02005860',
        '8AS' => 'E02005860',
        '8AT' => 'E02005860',
        '8AU' => 'E02005860',
        '8AW' => 'E02005860',
        '8AX' => 'E02005860',
        '8AY' => 'E02005860',
        '8AZ' => 'E02005860',
        '8BA' => 'E02005860',
        '8BB' => 'E02005860',
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
