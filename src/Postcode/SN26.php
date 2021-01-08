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
final class SN26
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '7AB' => 'E02003219',
        '7AD' => 'E02003219',
        '7AE' => 'E02003219',
        '7AF' => 'E02003219',
        '7AG' => 'E02003219',
        '7AH' => 'E02003219',
        '7AJ' => 'E02003219',
        '7AL' => 'E02003219',
        '7AN' => 'E02003219',
        '7AP' => 'E02003219',
        '7AQ' => 'E02003219',
        '7AR' => 'E02003219',
        '7AS' => 'E02003219',
        '7AT' => 'E02003219',
        '7AW' => 'E02003219',
        '7AY' => 'E02003219',
        '7AZ' => 'E02003219',
        '7BA' => 'E02003219',
        '7BB' => 'E02003219',
        '7BD' => 'E02003219',
        '7BE' => 'E02003219',
        '7BF' => 'E02003234',
        '7BG' => 'E02003219',
        '7BH' => 'E02003219',
        '7BJ' => 'E02003219',
        '7BL' => 'E02003219',
        '7BN' => 'E02003219',
        '7BQ' => 'E02003219',
        '7BW' => 'E02003219',
        '7DE' => 'E02003219',
        '7DG' => 'E02003219',
        '7DH' => 'E02003219',
        '7DQ' => 'E02003219',
        '7EA' => 'E02003219',
        '7EL' => 'E02003219',
        '7EQ' => 'E02003223',
        '7ER' => 'E02003219',
        '7ES' => 'E02003219',
        '7XJ' => 'E02003219',
        '7XN' => 'E02003234',
        '7XQ' => 'E02003219',
        '8AA' => 'E02003219',
        '8AB' => 'E02003219',
        '8AD' => 'E02003219',
        '8AE' => 'E02003219',
        '8AF' => 'E02003219',
        '8AG' => 'E02003219',
        '8AH' => 'E02003219',
        '8AJ' => 'E02003219',
        '8BU' => 'E02003219',
        '8BX' => 'E02003219',
        '8BY' => 'E02003219',
        '8BZ' => 'E02003219',
        '8DA' => 'E02003219',
        '8DB' => 'E02003219',
        '8DD' => 'E02003219',
        '8DE' => 'E02003219',
        '8DF' => 'E02003219',
        '8DJ' => 'E02003219',
        '8DN' => 'E02003219',
        '8DZ' => 'E02003219',
        '8EF' => 'E02003219',
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
