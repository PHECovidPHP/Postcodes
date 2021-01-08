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
final class CA18
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1BR' => 'E02004007',
        '1RA' => 'E02004007',
        '1RD' => 'E02004007',
        '1RE' => 'E02004007',
        '1RF' => 'E02004007',
        '1RG' => 'E02004007',
        '1RJ' => 'E02004007',
        '1RL' => 'E02004007',
        '1RN' => 'E02004007',
        '1RQ' => 'E02004007',
        '1RR' => 'E02004007',
        '1RS' => 'E02004007',
        '1RT' => 'E02004007',
        '1RW' => 'E02004007',
        '1SD' => 'E02004007',
        '1SE' => 'E02004007',
        '1SF' => 'E02004007',
        '1SG' => 'E02004007',
        '1SH' => 'E02004007',
        '1SJ' => 'E02004007',
        '1SL' => 'E02004007',
        '1SN' => 'E02004007',
        '1SP' => 'E02004007',
        '1SQ' => 'E02004007',
        '1SR' => 'E02004007',
        '1ST' => 'E02004007',
        '1SU' => 'E02004007',
        '1SW' => 'E02004007',
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
