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
final class CH31
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '9AA' => 'E02001503',
        '9AB' => 'E02001503',
        '9AD' => 'E02001503',
        '9AE' => 'E02001503',
        '9AF' => 'E02001503',
        '9AG' => 'E02001503',
        '9AL' => 'E02001503',
        '9AN' => 'E02001503',
        '9AP' => 'E02001503',
        '9AQ' => 'E02001503',
        '9AR' => 'E02001503',
        '9AS' => 'E02001503',
        '9AT' => 'E02001503',
        '9AU' => 'E02001503',
        '9AW' => 'E02001503',
        '9AX' => 'E02001503',
        '9AY' => 'E02001503',
        '9AZ' => 'E02001503',
        '9BA' => 'E02001503',
        '9BB' => 'E02001503',
        '9BD' => 'E02001503',
        '9BE' => 'E02001503',
        '9BF' => 'E02001503',
        '9BG' => 'E02001503',
        '9BH' => 'E02001503',
        '9BJ' => 'E02001503',
        '9BN' => 'E02001503',
        '9BP' => 'E02001503',
        '9BQ' => 'E02001503',
        '9BR' => 'E02001503',
        '9BS' => 'E02001503',
        '9BT' => 'E02001503',
        '9BU' => 'E02001503',
        '9BW' => 'E02001503',
        '9BX' => 'E02001503',
        '9BY' => 'E02001503',
        '9BZ' => 'E02001503',
        '9DA' => 'E02001503',
        '9DB' => 'E02001503',
        '9DD' => 'E02001503',
        '9DE' => 'E02001503',
        '9DF' => 'E02001503',
        '9DG' => 'E02001503',
        '9DH' => 'E02001503',
        '9DJ' => 'E02001503',
        '9DL' => 'E02001503',
        '9DN' => 'E02001503',
        '9DP' => 'E02001503',
        '9DQ' => 'E02001503',
        '9DR' => 'E02001503',
        '9DS' => 'E02001503',
        '9DT' => 'E02001503',
        '9DU' => 'E02001503',
        '9DW' => 'E02001503',
        '9DX' => 'E02001503',
        '9DY' => 'E02001503',
        '9DZ' => 'E02001503',
        '9EA' => 'E02001503',
        '9EB' => 'E02001503',
        '9ED' => 'E02001503',
        '9EE' => 'E02001503',
        '9EF' => 'E02001503',
        '9EG' => 'E02001503',
        '9EH' => 'E02001503',
        '9EJ' => 'E02001503',
        '9EL' => 'E02001503',
        '9EN' => 'E02001503',
        '9EP' => 'E02001503',
        '9EQ' => 'E02001503',
        '9ER' => 'E02001503',
        '9ES' => 'E02001503',
        '9ET' => 'E02001503',
        '9EU' => 'E02001503',
        '9EW' => 'E02001503',
        '9EX' => 'E02001503',
        '9EY' => 'E02001503',
        '9EZ' => 'E02001503',
        '9FA' => 'E02001503',
        '9FB' => 'E02001503',
        '9FD' => 'E02001503',
        '9FE' => 'E02001503',
        '9FF' => 'E02001503',
        '9FG' => 'E02001503',
        '9FH' => 'E02001503',
        '9FJ' => 'E02001503',
        '9FL' => 'E02001503',
        '9FN' => 'E02001503',
        '9FP' => 'E02001503',
        '9FQ' => 'E02001503',
        '9FR' => 'E02001503',
        '9FS' => 'E02001503',
        '9FT' => 'E02001503',
        '9FU' => 'E02001503',
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
