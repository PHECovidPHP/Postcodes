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
final class CA23
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '3AA' => 'E02004003',
        '3AB' => 'E02004003',
        '3AD' => 'E02004003',
        '3AE' => 'E02004003',
        '3AF' => 'E02004003',
        '3AG' => 'E02004003',
        '3AH' => 'E02004003',
        '3AJ' => 'E02004003',
        '3AL' => 'E02004003',
        '3AN' => 'E02004003',
        '3AP' => 'E02004003',
        '3AQ' => 'E02004003',
        '3AR' => 'E02004003',
        '3AS' => 'E02004003',
        '3AT' => 'E02004003',
        '3AU' => 'E02004003',
        '3AW' => 'E02004003',
        '3AX' => 'E02004003',
        '3AY' => 'E02004003',
        '3AZ' => 'E02004003',
        '3BA' => 'E02004003',
        '3BB' => 'E02004003',
        '3BE' => 'E02004003',
        '3BF' => 'E02004003',
        '3BG' => 'E02004003',
        '3BP' => 'E02004003',
        '3BQ' => 'E02004003',
        '3BS' => 'E02004003',
        '3BT' => 'E02004003',
        '3BU' => 'E02004003',
        '3BW' => 'E02004003',
        '3BX' => 'E02004003',
        '3BY' => 'E02004003',
        '3BZ' => 'E02004003',
        '3DA' => 'E02004003',
        '3DB' => 'E02004003',
        '3DD' => 'E02004003',
        '3DE' => 'E02004003',
        '3DF' => 'E02004003',
        '3DG' => 'E02004003',
        '3DH' => 'E02004003',
        '3DJ' => 'E02004003',
        '3DL' => 'E02004003',
        '3DN' => 'E02004003',
        '3DP' => 'E02004003',
        '3DQ' => 'E02004003',
        '3DR' => 'E02004003',
        '3DS' => 'E02004003',
        '3DT' => 'E02004003',
        '3DU' => 'E02004003',
        '3DW' => 'E02004003',
        '3DX' => 'E02004003',
        '3DY' => 'E02004003',
        '3DZ' => 'E02004003',
        '3EA' => 'E02004003',
        '3EB' => 'E02004003',
        '3ED' => 'E02004003',
        '3EE' => 'E02004003',
        '3EF' => 'E02004003',
        '3EG' => 'E02004003',
        '3EH' => 'E02004003',
        '3EJ' => 'E02004003',
        '3EL' => 'E02004003',
        '3EN' => 'E02004003',
        '3EP' => 'E02004003',
        '3EQ' => 'E02004003',
        '3ER' => 'E02004003',
        '3ES' => 'E02004003',
        '3ET' => 'E02004003',
        '3EU' => 'E02004003',
        '3EW' => 'E02004003',
        '3EX' => 'E02004003',
        '3EY' => 'E02004003',
        '3EZ' => 'E02004003',
        '3WA' => 'E02004005',
        '3WZ' => 'E02004005',
        '3ZZ' => 'E02004003',
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
