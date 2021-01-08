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
final class BN51
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '9AA' => 'E02003523',
        '9AB' => 'E02003523',
        '9AF' => 'E02003523',
        '9AG' => 'E02003523',
        '9AH' => 'E02003523',
        '9AJ' => 'E02003523',
        '9AL' => 'E02003523',
        '9AN' => 'E02003523',
        '9AP' => 'E02003523',
        '9AQ' => 'E02003523',
        '9AR' => 'E02003523',
        '9AS' => 'E02003523',
        '9AT' => 'E02003523',
        '9AU' => 'E02003523',
        '9AW' => 'E02003523',
        '9AX' => 'E02003523',
        '9AY' => 'E02003523',
        '9AZ' => 'E02003523',
        '9BA' => 'E02003523',
        '9BB' => 'E02003523',
        '9BD' => 'E02003523',
        '9BE' => 'E02003523',
        '9BF' => 'E02003523',
        '9BG' => 'E02003523',
        '9BH' => 'E02003523',
        '9BJ' => 'E02003523',
        '9BL' => 'E02003523',
        '9BN' => 'E02003523',
        '9BP' => 'E02003523',
        '9BQ' => 'E02003523',
        '9BR' => 'E02003523',
        '9BS' => 'E02003523',
        '9BT' => 'E02003523',
        '9BU' => 'E02003523',
        '9BW' => 'E02003523',
        '9BX' => 'E02003523',
        '9BY' => 'E02003523',
        '9BZ' => 'E02003523',
        '9DA' => 'E02003523',
        '9DB' => 'E02003523',
        '9DD' => 'E02003523',
        '9DE' => 'E02003523',
        '9DF' => 'E02003523',
        '9DG' => 'E02003523',
        '9DH' => 'E02003523',
        '9DJ' => 'E02003523',
        '9DL' => 'E02003523',
        '9DN' => 'E02003523',
        '9DP' => 'E02003523',
        '9DQ' => 'E02003523',
        '9DR' => 'E02003523',
        '9DS' => 'E02003523',
        '9DT' => 'E02003523',
        '9DU' => 'E02003523',
        '9DW' => 'E02003523',
        '9DX' => 'E02003523',
        '9DY' => 'E02003523',
        '9DZ' => 'E02003523',
        '9EA' => 'E02003523',
        '9EB' => 'E02003523',
        '9ED' => 'E02003523',
        '9EE' => 'E02003523',
        '9EF' => 'E02003523',
        '9EG' => 'E02003523',
        '9EH' => 'E02003523',
        '9EJ' => 'E02003523',
        '9EL' => 'E02003523',
        '9EN' => 'E02003523',
        '9EP' => 'E02003523',
        '9EQ' => 'E02003523',
        '9ER' => 'E02003523',
        '9ES' => 'E02003523',
        '9ET' => 'E02003523',
        '9EU' => 'E02003523',
        '9EW' => 'E02003523',
        '9EX' => 'E02003523',
        '9EY' => 'E02003523',
        '9EZ' => 'E02003523',
        '9FA' => 'E02003523',
        '9FB' => 'E02003523',
        '9FD' => 'E02003523',
        '9FE' => 'E02003523',
        '9FF' => 'E02003523',
        '9FG' => 'E02003523',
        '9FH' => 'E02003523',
        '9FJ' => 'E02003523',
        '9FL' => 'E02003523',
        '9FN' => 'E02003523',
        '9FP' => 'E02003523',
        '9FQ' => 'E02003523',
        '9FR' => 'E02003523',
        '9FS' => 'E02003523',
        '9FT' => 'E02003523',
        '9FU' => 'E02003523',
        '9FW' => 'E02003523',
        '9FX' => 'E02003523',
        '9FY' => 'E02003523',
        '9YQ' => 'E02003523',
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
