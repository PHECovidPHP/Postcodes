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
final class CA27
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02004006',
        '0AB' => 'E02004006',
        '0AD' => 'E02004006',
        '0AE' => 'E02004006',
        '0AF' => 'E02004006',
        '0AH' => 'E02004006',
        '0AJ' => 'E02004006',
        '0AL' => 'E02004006',
        '0AN' => 'E02004006',
        '0AP' => 'E02004006',
        '0AQ' => 'E02004006',
        '0AR' => 'E02004006',
        '0AS' => 'E02004006',
        '0AT' => 'E02004006',
        '0AY' => 'E02004006',
        '0BB' => 'E02004006',
        '0BD' => 'E02004006',
        '0BE' => 'E02004006',
        '0BG' => 'E02004006',
        '0BH' => 'E02004006',
        '0BJ' => 'E02004006',
        '0BL' => 'E02004006',
        '0BN' => 'E02004006',
        '0BP' => 'E02004006',
        '0BS' => 'E02004006',
        '0BW' => 'E02004006',
        '0BX' => 'E02004006',
        '0BY' => 'E02004006',
        '0BZ' => 'E02004006',
        '0DE' => 'E02004006',
        '0DF' => 'E02004006',
        '0DG' => 'E02004006',
        '0DH' => 'E02004006',
        '0DN' => 'E02004006',
        '0DP' => 'E02004006',
        '0DR' => 'E02004006',
        '0DS' => 'E02004006',
        '0DT' => 'E02004006',
        '0DU' => 'E02004006',
        '0DW' => 'E02004006',
        '0DY' => 'E02004006',
        '0EA' => 'E02004006',
        '0ED' => 'E02004006',
        '0EE' => 'E02004006',
        '0EF' => 'E02004006',
        '0EG' => 'E02004006',
        '0EH' => 'E02004006',
        '0EJ' => 'E02004006',
        '0EL' => 'E02004006',
        '0EN' => 'E02004006',
        '0EP' => 'E02004006',
        '0EQ' => 'E02004006',
        '0ER' => 'E02004006',
        '0ES' => 'E02004006',
        '0ET' => 'E02004006',
        '0EU' => 'E02004006',
        '0EW' => 'E02004006',
        '0EY' => 'E02004006',
        '0EZ' => 'E02004006',
        '0GA' => 'E02004006',
        '0GB' => 'E02004006',
        '0HA' => 'E02004006',
        '0HB' => 'E02004006',
        '0HD' => 'E02004006',
        '0WZ' => 'E02004005',
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
