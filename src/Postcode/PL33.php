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
final class PL33
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '9AA' => 'E02003933',
        '9AB' => 'E02003933',
        '9AD' => 'E02003933',
        '9AE' => 'E02003933',
        '9AF' => 'E02003933',
        '9AG' => 'E02003933',
        '9AH' => 'E02003933',
        '9AJ' => 'E02003933',
        '9AL' => 'E02003933',
        '9AN' => 'E02003933',
        '9AP' => 'E02003933',
        '9AQ' => 'E02003933',
        '9AR' => 'E02003933',
        '9AS' => 'E02003933',
        '9AT' => 'E02003933',
        '9AU' => 'E02003933',
        '9AW' => 'E02003933',
        '9AX' => 'E02003933',
        '9AY' => 'E02003933',
        '9AZ' => 'E02003933',
        '9BA' => 'E02003933',
        '9BB' => 'E02003933',
        '9BD' => 'E02003933',
        '9BE' => 'E02003933',
        '9BG' => 'E02003933',
        '9BH' => 'E02003933',
        '9BJ' => 'E02003933',
        '9BL' => 'E02003933',
        '9BN' => 'E02003933',
        '9BP' => 'E02003933',
        '9BQ' => 'E02003933',
        '9BS' => 'E02003933',
        '9BT' => 'E02003933',
        '9BU' => 'E02003933',
        '9BW' => 'E02003933',
        '9BX' => 'E02003933',
        '9BY' => 'E02003933',
        '9BZ' => 'E02003933',
        '9DA' => 'E02003933',
        '9DB' => 'E02003933',
        '9DD' => 'E02003933',
        '9DE' => 'E02003933',
        '9DF' => 'E02003933',
        '9DG' => 'E02003933',
        '9DH' => 'E02003933',
        '9DJ' => 'E02003933',
        '9DL' => 'E02003933',
        '9DN' => 'E02003933',
        '9DP' => 'E02003933',
        '9DQ' => 'E02003933',
        '9DR' => 'E02003933',
        '9DS' => 'E02003933',
        '9DT' => 'E02003933',
        '9DU' => 'E02003933',
        '9DW' => 'E02003933',
        '9DX' => 'E02003933',
        '9DY' => 'E02003933',
        '9DZ' => 'E02003933',
        '9EA' => 'E02003933',
        '9EB' => 'E02003933',
        '9ED' => 'E02003933',
        '9EE' => 'E02003933',
        '9EG' => 'E02003933',
        '9EH' => 'E02003933',
        '9EJ' => 'E02003933',
        '9EL' => 'E02003933',
        '9EN' => 'E02003933',
        '9EP' => 'E02003933',
        '9EQ' => 'E02003933',
        '9ER' => 'E02003933',
        '9ES' => 'E02003934',
        '9ET' => 'E02003934',
        '9EU' => 'E02003933',
        '9EW' => 'E02003933',
        '9EX' => 'E02003934',
        '9EY' => 'E02003934',
        '9EZ' => 'E02003933',
        '9HA' => 'E02003933',
        '9TS' => 'E02003933',
        '9WA' => 'E02003933',
        '9WD' => 'E02003933',
        '9WY' => 'E02003933',
        '9WZ' => 'E02003933',
        '9XN' => 'E02003933',
        '9YY' => 'E02003933',
        '9YZ' => 'E02003933',
        '9ZX' => 'E02003933',
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
