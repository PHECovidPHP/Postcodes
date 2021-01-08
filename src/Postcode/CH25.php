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
final class CH25
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '9AA' => 'E02001482',
        '9AB' => 'E02001482',
        '9AD' => 'E02001482',
        '9AE' => 'E02001482',
        '9AF' => 'E02001482',
        '9AG' => 'E02001482',
        '9AH' => 'E02001482',
        '9AJ' => 'E02001482',
        '9AL' => 'E02001482',
        '9AN' => 'E02001482',
        '9AP' => 'E02001482',
        '9AQ' => 'E02001482',
        '9AR' => 'E02001482',
        '9AS' => 'E02001482',
        '9AT' => 'E02001482',
        '9AU' => 'E02001482',
        '9AW' => 'E02001482',
        '9AX' => 'E02001482',
        '9AY' => 'E02001482',
        '9AZ' => 'E02001482',
        '9BA' => 'E02001482',
        '9BB' => 'E02001482',
        '9BD' => 'E02001482',
        '9BE' => 'E02001482',
        '9BF' => 'E02001482',
        '9BG' => 'E02001482',
        '9BH' => 'E02001482',
        '9BJ' => 'E02001482',
        '9BL' => 'E02001482',
        '9BN' => 'E02001482',
        '9BP' => 'E02001482',
        '9BQ' => 'E02001482',
        '9BR' => 'E02001482',
        '9BS' => 'E02001482',
        '9BT' => 'E02001482',
        '9BU' => 'E02001482',
        '9BW' => 'E02001482',
        '9BX' => 'E02001482',
        '9BY' => 'E02001482',
        '9BZ' => 'E02001482',
        '9DA' => 'E02001482',
        '9DB' => 'E02001482',
        '9DD' => 'E02001482',
        '9DE' => 'E02001482',
        '9DF' => 'E02001482',
        '9DG' => 'E02001482',
        '9DH' => 'E02001482',
        '9DJ' => 'E02001482',
        '9DL' => 'E02001482',
        '9DN' => 'E02001482',
        '9DP' => 'E02001482',
        '9DQ' => 'E02001482',
        '9DR' => 'E02001482',
        '9DS' => 'E02001482',
        '9DT' => 'E02001482',
        '9DU' => 'E02001482',
        '9DW' => 'E02001482',
        '9DX' => 'E02001482',
        '9DY' => 'E02001482',
        '9DZ' => 'E02001482',
        '9EA' => 'E02001482',
        '9EB' => 'E02001482',
        '9ED' => 'E02001482',
        '9EE' => 'E02001482',
        '9EF' => 'E02001482',
        '9EG' => 'E02001482',
        '9EH' => 'E02001482',
        '9EJ' => 'E02001482',
        '9EL' => 'E02001482',
        '9EN' => 'E02001482',
        '9EP' => 'E02001482',
        '9ER' => 'E02001482',
        '9ES' => 'E02001482',
        '9ET' => 'E02001482',
        '9EU' => 'E02001482',
        '9EW' => 'E02001482',
        '9EX' => 'E02001482',
        '9EY' => 'E02001482',
        '9EZ' => 'E02001482',
        '9FA' => 'E02001482',
        '9FB' => 'E02001482',
        '9FD' => 'E02001482',
        '9FE' => 'E02001482',
        '9FF' => 'E02001482',
        '9FG' => 'E02001482',
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
