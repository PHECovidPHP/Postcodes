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
final class CH26
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '9AA' => 'E02001490',
        '9AB' => 'E02001490',
        '9AD' => 'E02001490',
        '9AE' => 'E02001490',
        '9AF' => 'E02001490',
        '9AH' => 'E02001490',
        '9AJ' => 'E02001490',
        '9AL' => 'E02001490',
        '9AN' => 'E02001490',
        '9AP' => 'E02001490',
        '9AR' => 'E02001490',
        '9AS' => 'E02001490',
        '9AT' => 'E02001490',
        '9AU' => 'E02001490',
        '9AW' => 'E02001490',
        '9AX' => 'E02001490',
        '9AY' => 'E02001490',
        '9AZ' => 'E02001490',
        '9BA' => 'E02001490',
        '9BB' => 'E02001490',
        '9BD' => 'E02001490',
        '9BE' => 'E02001490',
        '9BF' => 'E02001490',
        '9BG' => 'E02001490',
        '9BH' => 'E02001490',
        '9BJ' => 'E02001490',
        '9BL' => 'E02001490',
        '9BN' => 'E02001490',
        '9BP' => 'E02001490',
        '9BQ' => 'E02001490',
        '9BR' => 'E02001490',
        '9BS' => 'E02001490',
        '9BT' => 'E02001490',
        '9BU' => 'E02001490',
        '9BW' => 'E02001490',
        '9BX' => 'E02001490',
        '9BY' => 'E02001490',
        '9BZ' => 'E02001490',
        '9DA' => 'E02001490',
        '9DB' => 'E02001490',
        '9DD' => 'E02001490',
        '9DE' => 'E02001490',
        '9DF' => 'E02001490',
        '9DG' => 'E02001490',
        '9DH' => 'E02001490',
        '9DJ' => 'E02001490',
        '9DL' => 'E02001490',
        '9DN' => 'E02001490',
        '9DP' => 'E02001490',
        '9DQ' => 'E02001490',
        '9DR' => 'E02001490',
        '9DS' => 'E02001490',
        '9DT' => 'E02001490',
        '9DU' => 'E02001490',
        '9DW' => 'E02001490',
        '9DX' => 'E02001490',
        '9DY' => 'E02001490',
        '9DZ' => 'E02001490',
        '9EA' => 'E02001490',
        '9EB' => 'E02001490',
        '9ED' => 'E02001490',
        '9EE' => 'E02001490',
        '9EF' => 'E02001490',
        '9EG' => 'E02001490',
        '9EH' => 'E02001490',
        '9EJ' => 'E02001490',
        '9EL' => 'E02001490',
        '9EP' => 'E02001490',
        '9EQ' => 'E02001490',
        '9ER' => 'E02001490',
        '9ES' => 'E02001490',
        '9ET' => 'E02001490',
        '9EU' => 'E02001490',
        '9EW' => 'E02001490',
        '9EX' => 'E02001490',
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
