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
final class CH32
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '9AA' => 'E02001497',
        '9AB' => 'E02001497',
        '9AD' => 'E02001497',
        '9AE' => 'E02001497',
        '9AF' => 'E02001497',
        '9AG' => 'E02001497',
        '9AH' => 'E02001497',
        '9AJ' => 'E02001497',
        '9AL' => 'E02001497',
        '9AN' => 'E02001497',
        '9AP' => 'E02001497',
        '9AQ' => 'E02001497',
        '9AR' => 'E02001497',
        '9AS' => 'E02001497',
        '9AT' => 'E02001497',
        '9AU' => 'E02001497',
        '9AW' => 'E02001497',
        '9AX' => 'E02001497',
        '9AY' => 'E02001497',
        '9AZ' => 'E02001497',
        '9BA' => 'E02001497',
        '9BB' => 'E02001497',
        '9BD' => 'E02001497',
        '9BE' => 'E02001497',
        '9BF' => 'E02001497',
        '9BG' => 'E02001497',
        '9BH' => 'E02001497',
        '9BJ' => 'E02001497',
        '9BL' => 'E02001497',
        '9BN' => 'E02001497',
        '9BP' => 'E02001497',
        '9BQ' => 'E02001497',
        '9BR' => 'E02001497',
        '9BS' => 'E02001497',
        '9BT' => 'E02001497',
        '9BU' => 'E02001497',
        '9BW' => 'E02001497',
        '9BX' => 'E02001497',
        '9BY' => 'E02001497',
        '9BZ' => 'E02001497',
        '9DA' => 'E02001497',
        '9DB' => 'E02001497',
        '9DD' => 'E02001497',
        '9DE' => 'E02001497',
        '9DF' => 'E02001497',
        '9DG' => 'E02001497',
        '9DH' => 'E02001497',
        '9DJ' => 'E02001497',
        '9DL' => 'E02001497',
        '9DN' => 'E02001497',
        '9DP' => 'E02001497',
        '9DQ' => 'E02001497',
        '9DR' => 'E02001497',
        '9DS' => 'E02001497',
        '9DT' => 'E02001497',
        '9DU' => 'E02001497',
        '9DW' => 'E02001497',
        '9DX' => 'E02001497',
        '9DY' => 'E02001497',
        '9DZ' => 'E02001497',
        '9EA' => 'E02001497',
        '9EB' => 'E02001497',
        '9ED' => 'E02001497',
        '9EE' => 'E02001497',
        '9EF' => 'E02001497',
        '9EG' => 'E02001497',
        '9EH' => 'E02001497',
        '9EJ' => 'E02001497',
        '9EL' => 'E02001497',
        '9EN' => 'E02001497',
        '9EP' => 'E02001497',
        '9EQ' => 'E02001497',
        '9ER' => 'E02001497',
        '9ES' => 'E02001497',
        '9ET' => 'E02001497',
        '9EU' => 'E02001497',
        '9EW' => 'E02001497',
        '9EX' => 'E02001497',
        '9EY' => 'E02001497',
        '9EZ' => 'E02001497',
        '9FA' => 'E02001497',
        '9FB' => 'E02001497',
        '9FD' => 'E02001497',
        '9FE' => 'E02001497',
        '9FF' => 'E02001497',
        '9FG' => 'E02001497',
        '9FH' => 'E02001497',
        '9FJ' => 'E02001497',
        '9FL' => 'E02001497',
        '9FN' => 'E02001497',
        '9FP' => 'E02001497',
        '9FQ' => 'E02001497',
        '9FR' => 'E02001497',
        '9FS' => 'E02001497',
        '9FT' => 'E02001497',
        '9FU' => 'E02001497',
        '9FW' => 'E02001497',
        '9FX' => 'E02001497',
        '9FY' => 'E02001497',
        '9FZ' => 'E02001497',
        '9GA' => 'E02001497',
        '9GB' => 'E02001497',
        '9GD' => 'E02001497',
        '9GE' => 'E02001497',
        '9GF' => 'E02001497',
        '9GG' => 'E02001497',
        '9GH' => 'E02001497',
        '9GJ' => 'E02001497',
        '9GL' => 'E02001497',
        '9GN' => 'E02001497',
        '9GP' => 'E02001497',
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
