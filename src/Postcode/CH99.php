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
final class CH99
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02003802',
        '1AB' => 'E02003802',
        '1AD' => 'E02003802',
        '1AE' => 'E02003802',
        '1AF' => 'E02003802',
        '1AG' => 'E02003802',
        '1AH' => 'E02003802',
        '1AJ' => 'E02003802',
        '1AL' => 'E02003802',
        '1AN' => 'E02003802',
        '1BA' => 'E02003802',
        '1DB' => 'E02003802',
        '1DN' => 'E02003802',
        '1DS' => 'E02003802',
        '1WZ' => 'E02003802',
        '1XN' => 'E02003802',
        '3AN' => 'E02003802',
        '3AP' => 'E02003802',
        '3AQ' => 'E02003802',
        '3NR' => 'E02003802',
        '3YR' => 'E02003802',
        '3YS' => 'E02003802',
        '9AA' => 'E02003809',
        '9AB' => 'E02003809',
        '9DB' => 'E02003809',
        '9DS' => 'E02003802',
        '9FB' => 'E02003809',
        '9FS' => 'E02003802',
        '9LA' => 'E02003802',
        '9LP' => 'E02003809',
        '9LR' => 'E02003809',
        '9LS' => 'E02003809',
        '9NA' => 'E02003809',
        '9NB' => 'E02003809',
        '9NL' => 'E02003809',
        '9PL' => 'E02003802',
        '9PT' => 'E02003802',
        '9PX' => 'E02003802',
        '9QB' => 'E02003809',
        '9QF' => 'E02003802',
        '9QG' => 'E02003802',
        '9QS' => 'E02003802',
        '9QW' => 'E02003802',
        '9ST' => 'E02003802',
        '9UT' => 'E02003809',
        '9WA' => 'E02003802',
        '9WB' => 'E02003809',
        '9WD' => 'E02003802',
        '9YZ' => 'E02003809',
        '9ZH' => 'E02003809',
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
