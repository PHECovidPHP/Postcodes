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
final class SR9
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '9AD' => 'E02001806',
        '9WD' => 'E02001795',
        '9WH' => 'E02001795',
        '9WJ' => 'E02001795',
        '9WL' => 'E02001795',
        '9WN' => 'E02001795',
        '9WP' => 'E02001795',
        '9WQ' => 'E02001795',
        '9WR' => 'E02001795',
        '9WS' => 'E02001795',
        '9WT' => 'E02001795',
        '9WU' => 'E02001795',
        '9WX' => 'E02001795',
        '9WY' => 'E02001806',
        '9WZ' => 'E02001795',
        '9XD' => 'E02001806',
        '9XF' => 'E02001795',
        '9XQ' => 'E02001795',
        '9XX' => 'E02001806',
        '9XY' => 'E02001806',
        '9XZ' => 'E02001819',
        '9YT' => 'E02001795',
        '9YU' => 'E02001795',
        '9YY' => 'E02001795',
        '9YZ' => 'E02001795',
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
