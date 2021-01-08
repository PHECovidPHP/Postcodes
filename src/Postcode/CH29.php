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
final class CH29
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '9AE' => 'E02001480',
        '9AF' => 'E02001480',
        '9AG' => 'E02001480',
        '9AH' => 'E02001480',
        '9AJ' => 'E02001480',
        '9AL' => 'E02001480',
        '9AN' => 'E02001480',
        '9AP' => 'E02001480',
        '9AQ' => 'E02001480',
        '9AR' => 'E02001480',
        '9AS' => 'E02001480',
        '9AT' => 'E02001480',
        '9AU' => 'E02001480',
        '9AW' => 'E02001480',
        '9AX' => 'E02001480',
        '9AY' => 'E02001480',
        '9AZ' => 'E02001480',
        '9BA' => 'E02001480',
        '9BB' => 'E02001480',
        '9BD' => 'E02001480',
        '9BE' => 'E02001480',
        '9BF' => 'E02001480',
        '9BG' => 'E02001480',
        '9BH' => 'E02001480',
        '9BJ' => 'E02001480',
        '9BL' => 'E02001480',
        '9BN' => 'E02001480',
        '9BP' => 'E02001480',
        '9BQ' => 'E02001480',
        '9BS' => 'E02001480',
        '9BT' => 'E02001480',
        '9BU' => 'E02001480',
        '9BW' => 'E02001480',
        '9BX' => 'E02001480',
        '9BY' => 'E02001480',
        '9BZ' => 'E02001480',
        '9DA' => 'E02001480',
        '9DB' => 'E02001480',
        '9DD' => 'E02001480',
        '9DE' => 'E02001480',
        '9DF' => 'E02001480',
        '9DG' => 'E02001480',
        '9DH' => 'E02001480',
        '9DJ' => 'E02001480',
        '9DL' => 'E02001480',
        '9DN' => 'E02001480',
        '9DP' => 'E02001480',
        '9DQ' => 'E02001480',
        '9DR' => 'E02001480',
        '9DS' => 'E02001480',
        '9DT' => 'E02001480',
        '9DU' => 'E02001480',
        '9DW' => 'E02001480',
        '9DX' => 'E02001480',
        '9DY' => 'E02001480',
        '9DZ' => 'E02001480',
        '9EA' => 'E02001480',
        '9ED' => 'E02001480',
        '9EE' => 'E02001480',
        '9EF' => 'E02001480',
        '9EG' => 'E02001480',
        '9EH' => 'E02001480',
        '9EJ' => 'E02001480',
        '9EL' => 'E02001480',
        '9EN' => 'E02001480',
        '9EP' => 'E02001480',
        '9EQ' => 'E02001480',
        '9ER' => 'E02001480',
        '9ES' => 'E02001480',
        '9ET' => 'E02001480',
        '9EU' => 'E02001480',
        '9EW' => 'E02001480',
        '9EX' => 'E02001480',
        '9EY' => 'E02001480',
        '9EZ' => 'E02001480',
        '9FA' => 'E02001480',
        '9FB' => 'E02001480',
        '9FD' => 'E02001480',
        '9FE' => 'E02001480',
        '9FF' => 'E02001480',
        '9FG' => 'E02001480',
        '9FH' => 'E02001480',
        '9FJ' => 'E02001480',
        '9FL' => 'E02001480',
        '9FN' => 'E02001480',
        '9FP' => 'E02001480',
        '9FQ' => 'E02001480',
        '9FR' => 'E02001480',
        '9FS' => 'E02001480',
        '9FT' => 'E02001480',
        '9FU' => 'E02001480',
        '9FW' => 'E02001480',
        '9FX' => 'E02001480',
        '9FY' => 'E02001480',
        '9FZ' => 'E02001480',
        '9GA' => 'E02001480',
        '9GB' => 'E02001480',
        '9GD' => 'E02001480',
        '9GE' => 'E02001480',
        '9GF' => 'E02001480',
        '9GG' => 'E02001480',
        '9GH' => 'E02001480',
        '9GJ' => 'E02001480',
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
