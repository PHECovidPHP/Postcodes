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
final class L72
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AB' => 'E02001453',
        '0AD' => 'E02001457',
        '0AU' => 'E02001453',
        '0AY' => 'E02001457',
        '0BN' => 'E02001453',
        '0BR' => 'E02001453',
        '0DA' => 'E02001453',
        '0DB' => 'E02001453',
        '0DD' => 'E02001453',
        '0DE' => 'E02001453',
        '0FR' => 'E02001453',
        '0GU' => 'E02001457',
        '0HE' => 'E02001457',
        '0HS' => 'E02001453',
        '0JF' => 'E02001453',
        '0JS' => 'E02001453',
        '0LG' => 'E02001453',
        '0LR' => 'E02001453',
        '0LU' => 'E02001453',
        '0LW' => 'E02001453',
        '0PR' => 'E02001453',
        '0SJ' => 'E02001453',
        '0SL' => 'E02001453',
        '0WA' => 'E02001457',
        '1AA' => 'E02001457',
        '1AD' => 'E02001457',
        '1AY' => 'E02001457',
        '1GU' => 'E02001457',
        '1HE' => 'E02001457',
        '1LA' => 'E02001457',
        '1LB' => 'E02001457',
        '1LD' => 'E02001457',
        '1LE' => 'E02001457',
        '1LF' => 'E02001457',
        '1LG' => 'E02001457',
        '1LH' => 'E02001457',
        '1LJ' => 'E02001457',
        '1LL' => 'E02001457',
        '1LN' => 'E02001457',
        '1LQ' => 'E02001457',
        '1LR' => 'E02001457',
        '1LT' => 'E02001457',
        '1WA' => 'E02001457',
        '8AD' => 'E02001453',
        '8AY' => 'E02001453',
        '8GU' => 'E02001457',
        '8HE' => 'E02001453',
        '8LA' => 'E02001457',
        '8LB' => 'E02001457',
        '8LD' => 'E02001457',
        '8LE' => 'E02001457',
        '8LF' => 'E02001457',
        '8LH' => 'E02001457',
        '8LJ' => 'E02001457',
        '8LP' => 'E02001457',
        '8LS' => 'E02001453',
        '8LT' => 'E02001457',
        '8SL' => 'E02001453',
        '8TS' => 'E02001457',
        '8WA' => 'E02001453',
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
