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
final class CH33
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '9AA' => 'E02003841',
        '9AD' => 'E02003841',
        '9AE' => 'E02003841',
        '9AF' => 'E02003841',
        '9AH' => 'E02003841',
        '9AJ' => 'E02003841',
        '9AL' => 'E02003841',
        '9AN' => 'E02003841',
        '9AP' => 'E02003841',
        '9AQ' => 'E02003841',
        '9AR' => 'E02003841',
        '9AS' => 'E02003841',
        '9AT' => 'E02003841',
        '9AU' => 'E02003841',
        '9AW' => 'E02003841',
        '9AX' => 'E02003841',
        '9AZ' => 'E02003841',
        '9BA' => 'E02003841',
        '9BB' => 'E02003841',
        '9BD' => 'E02003841',
        '9BE' => 'E02003841',
        '9BF' => 'E02003841',
        '9BG' => 'E02003841',
        '9BH' => 'E02003841',
        '9BJ' => 'E02003841',
        '9BL' => 'E02003841',
        '9BN' => 'E02003841',
        '9BP' => 'E02003841',
        '9BQ' => 'E02003841',
        '9BR' => 'E02003841',
        '9BS' => 'E02003841',
        '9BT' => 'E02003841',
        '9BU' => 'E02003841',
        '9BW' => 'E02003841',
        '9BX' => 'E02003841',
        '9BY' => 'E02003841',
        '9BZ' => 'E02003841',
        '9DA' => 'E02003841',
        '9DB' => 'E02003841',
        '9DD' => 'E02003841',
        '9DE' => 'E02003841',
        '9DF' => 'E02003841',
        '9DG' => 'E02003841',
        '9DH' => 'E02003841',
        '9DJ' => 'E02003841',
        '9DN' => 'E02003841',
        '9DP' => 'E02003841',
        '9DQ' => 'E02003841',
        '9DR' => 'E02003841',
        '9DS' => 'E02003841',
        '9DT' => 'E02003841',
        '9DU' => 'E02003841',
        '9DW' => 'E02003841',
        '9DX' => 'E02003841',
        '9DY' => 'E02003841',
        '9DZ' => 'E02003841',
        '9EA' => 'E02003841',
        '9EB' => 'E02003841',
        '9ED' => 'E02003841',
        '9EE' => 'E02003841',
        '9EF' => 'E02003841',
        '9EG' => 'E02003841',
        '9EH' => 'E02003841',
        '9EJ' => 'E02003841',
        '9EL' => 'E02003841',
        '9EN' => 'E02003841',
        '9EP' => 'E02003841',
        '9ER' => 'E02003841',
        '9ES' => 'E02003841',
        '9ET' => 'E02003841',
        '9EU' => 'E02003841',
        '9EW' => 'E02003841',
        '9EX' => 'E02003841',
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
