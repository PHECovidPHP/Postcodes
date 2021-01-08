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
final class SY15
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '6AX' => 'E02006041',
        '6AY' => 'E02006041',
        '6BD' => 'E02006041',
        '6BE' => 'E02006041',
        '6BG' => 'E02006041',
        '6BH' => 'E02006041',
        '6BJ' => 'E02006041',
        '6BL' => 'E02006041',
        '6BN' => 'E02006041',
        '6BP' => 'E02006041',
        '6BQ' => 'E02006041',
        '6BS' => 'E02006041',
        '6BT' => 'E02006041',
        '6BU' => 'E02006041',
        '6BW' => 'E02006041',
        '6BX' => 'E02006041',
        '6BY' => 'E02006041',
        '6BZ' => 'E02006041',
        '6DA' => 'E02006041',
        '6DB' => 'E02006041',
        '6DD' => 'E02006041',
        '6DE' => 'E02006041',
        '6DF' => 'E02006041',
        '6DG' => 'E02006041',
        '6DP' => 'E02006041',
        '6DR' => 'E02006041',
        '6ED' => 'E02006041',
        '6EE' => 'E02006041',
        '6EP' => 'E02006041',
        '6HT' => 'E02006041',
        '6HU' => 'E02006041',
        '6HY' => 'E02006041',
        '6SP' => 'E02006041',
        '6SY' => 'E02006041',
        '6SZ' => 'E02006041',
        '6TR' => 'E02006044',
        '6TZ' => 'E02006041',
        '6UB' => 'E02006041',
        '6UD' => 'E02006041',
        '6UE' => 'E02006041',
        '6UF' => 'E02006041',
        '6UG' => 'E02006041',
        '6UH' => 'E02006041',
        '6UQ' => 'E02006041',
        '6ZB' => 'E02006041',
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
