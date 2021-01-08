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
final class CM98
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02004489',
        '1AB' => 'E02004489',
        '1AD' => 'E02004489',
        '1AE' => 'E02004489',
        '1AF' => 'E02004489',
        '1AH' => 'E02004489',
        '1AJ' => 'E02004489',
        '1AL' => 'E02004489',
        '1AN' => 'E02004489',
        '1AP' => 'E02004489',
        '1AQ' => 'E02004489',
        '1AR' => 'E02004489',
        '1AS' => 'E02004489',
        '1AT' => 'E02004489',
        '1AU' => 'E02004489',
        '1AW' => 'E02004489',
        '1AX' => 'E02004489',
        '1AY' => 'E02004489',
        '1AZ' => 'E02004489',
        '1BA' => 'E02004489',
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
