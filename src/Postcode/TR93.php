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
final class TR93
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02003947',
        '0AB' => 'E02003947',
        '0AF' => 'E02003947',
        '0AG' => 'E02003947',
        '0AL' => 'E02003947',
        '0AR' => 'E02003947',
        '0AS' => 'E02003947',
        '0AW' => 'E02003947',
        '0AZ' => 'E02003947',
        '0BB' => 'E02003947',
        '0BD' => 'E02003947',
        '0BE' => 'E02003947',
        '0BF' => 'E02003947',
        '0BH' => 'E02003947',
        '0BL' => 'E02003947',
        '0BT' => 'E02003947',
        '0BZ' => 'E02003947',
        '0DL' => 'E02003947',
        '0DN' => 'E02003947',
        '0DP' => 'E02003947',
        '0ED' => 'E02003947',
        '0EN' => 'E02003947',
        '0EW' => 'E02003947',
        '0FA' => 'E02003947',
        '0FG' => 'E02003947',
        '0FS' => 'E02003947',
        '0FT' => 'E02003947',
        '0GB' => 'E02003947',
        '0GD' => 'E02003947',
        '0GR' => 'E02003947',
        '0GS' => 'E02003947',
        '0HH' => 'E02003947',
        '0HR' => 'E02003947',
        '0HS' => 'E02003947',
        '0HT' => 'E02003947',
        '0JJ' => 'E02003947',
        '0LA' => 'E02003947',
        '0LE' => 'E02003947',
        '0LP' => 'E02003947',
        '0LU' => 'E02003947',
        '0NB' => 'E02003947',
        '0ND' => 'E02003947',
        '0NH' => 'E02003947',
        '0NS' => 'E02003947',
        '0NT' => 'E02003947',
        '0NZ' => 'E02003947',
        '0PA' => 'E02003947',
        '0PD' => 'E02003947',
        '0PE' => 'E02003947',
        '0PL' => 'E02003947',
        '0PP' => 'E02003947',
        '0PR' => 'E02003947',
        '0RE' => 'E02003947',
        '0RG' => 'E02003947',
        '0RS' => 'E02003947',
        '0SA' => 'E02003947',
        '0SE' => 'E02003947',
        '0SP' => 'E02003947',
        '0SR' => 'E02003947',
        '0SS' => 'E02003947',
        '0ST' => 'E02003947',
        '0SW' => 'E02003947',
        '0SY' => 'E02003947',
        '0TD' => 'E02003947',
        '0TH' => 'E02003947',
        '0TJ' => 'E02003947',
        '0TN' => 'E02003947',
        '0TR' => 'E02003947',
        '0TT' => 'E02003947',
        '0TY' => 'E02003947',
        '0WA' => 'E02003947',
        '0WG' => 'E02003947',
        '0WN' => 'E02003947',
        '0WS' => 'E02003947',
        '0WW' => 'E02003947',
        '0WZ' => 'E02003947',
        '0XD' => 'E02003947',
        '0XF' => 'E02003947',
        '0XN' => 'E02003947',
        '0XX' => 'E02003947',
        '0YD' => 'E02003947',
        '0YT' => 'E02003947',
        '0YY' => 'E02003947',
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
