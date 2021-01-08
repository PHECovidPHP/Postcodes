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
final class CH27
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '9AA' => 'E02001474',
        '9AB' => 'E02001473',
        '9AD' => 'E02001473',
        '9AE' => 'E02001473',
        '9AF' => 'E02001473',
        '9AG' => 'E02001473',
        '9AH' => 'E02001473',
        '9AJ' => 'E02001473',
        '9AL' => 'E02001473',
        '9AN' => 'E02001473',
        '9AP' => 'E02001473',
        '9AQ' => 'E02001473',
        '9AR' => 'E02001473',
        '9AS' => 'E02001473',
        '9AT' => 'E02001473',
        '9AU' => 'E02001473',
        '9AW' => 'E02001473',
        '9AX' => 'E02001473',
        '9AY' => 'E02001473',
        '9AZ' => 'E02001473',
        '9BA' => 'E02001473',
        '9BB' => 'E02001473',
        '9BD' => 'E02001473',
        '9BE' => 'E02001473',
        '9BF' => 'E02001473',
        '9BG' => 'E02001473',
        '9BH' => 'E02001473',
        '9BJ' => 'E02001473',
        '9BL' => 'E02001473',
        '9BN' => 'E02001473',
        '9BP' => 'E02001473',
        '9BQ' => 'E02001473',
        '9BR' => 'E02001473',
        '9BS' => 'E02001473',
        '9BT' => 'E02001473',
        '9BU' => 'E02001473',
        '9BW' => 'E02001473',
        '9BX' => 'E02001473',
        '9BY' => 'E02001473',
        '9BZ' => 'E02001473',
        '9DA' => 'E02001473',
        '9DB' => 'E02001473',
        '9DD' => 'E02001473',
        '9DE' => 'E02001473',
        '9DF' => 'E02001473',
        '9DG' => 'E02001473',
        '9DH' => 'E02001473',
        '9DJ' => 'E02001473',
        '9DL' => 'E02001473',
        '9DN' => 'E02001473',
        '9DP' => 'E02001473',
        '9DQ' => 'E02001473',
        '9DR' => 'E02001473',
        '9DS' => 'E02001473',
        '9DT' => 'E02001473',
        '9DU' => 'E02001473',
        '9DW' => 'E02001473',
        '9DX' => 'E02001473',
        '9DY' => 'E02001473',
        '9DZ' => 'E02001473',
        '9EA' => 'E02001473',
        '9EB' => 'E02001473',
        '9ED' => 'E02001473',
        '9EE' => 'E02001473',
        '9EF' => 'E02001473',
        '9EG' => 'E02001473',
        '9EH' => 'E02001473',
        '9EJ' => 'E02001473',
        '9EL' => 'E02001473',
        '9EN' => 'E02001473',
        '9EP' => 'E02001473',
        '9EQ' => 'E02001473',
        '9ER' => 'E02001473',
        '9ES' => 'E02001473',
        '9ET' => 'E02001473',
        '9EU' => 'E02001473',
        '9EW' => 'E02001473',
        '9EX' => 'E02001473',
        '9EY' => 'E02001473',
        '9EZ' => 'E02001473',
        '9FA' => 'E02001473',
        '9FB' => 'E02001473',
        '9FD' => 'E02001473',
        '9FE' => 'E02001473',
        '9FF' => 'E02001473',
        '9FG' => 'E02001473',
        '9FH' => 'E02001473',
        '9FJ' => 'E02001473',
        '9FL' => 'E02001473',
        '9FN' => 'E02001473',
        '9FP' => 'E02001473',
        '9FQ' => 'E02001473',
        '9FR' => 'E02001473',
        '9FS' => 'E02001473',
        '9FT' => 'E02001473',
        '9FU' => 'E02001473',
        '9FW' => 'E02001473',
        '9FX' => 'E02001473',
        '9FY' => 'E02001473',
        '9FZ' => 'E02001473',
        '9GA' => 'E02001473',
        '9GB' => 'E02001473',
        '9GD' => 'E02001473',
        '9GE' => 'E02001473',
        '9GF' => 'E02001473',
        '9GG' => 'E02001473',
        '9SA' => 'E02001474',
        '9SB' => 'E02001474',
        '9ZU' => 'E02001474',
        '9ZW' => 'E02001474',
        '9ZX' => 'E02001474',
        '9ZY' => 'E02001474',
        '9ZZ' => 'E02001474',
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
