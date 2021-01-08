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
final class LA20
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '6AA' => 'E02004022',
        '6AB' => 'E02004022',
        '6AD' => 'E02004022',
        '6AE' => 'E02004022',
        '6AF' => 'E02004022',
        '6AG' => 'E02004022',
        '6AH' => 'E02004022',
        '6AJ' => 'E02004022',
        '6AQ' => 'E02004022',
        '6AR' => 'E02004022',
        '6AS' => 'E02004022',
        '6AT' => 'E02004022',
        '6AU' => 'E02004022',
        '6AX' => 'E02004022',
        '6AY' => 'E02004022',
        '6AZ' => 'E02004022',
        '6BA' => 'E02004022',
        '6BB' => 'E02004022',
        '6BD' => 'E02004022',
        '6BE' => 'E02004022',
        '6BH' => 'E02004022',
        '6BJ' => 'E02004022',
        '6BL' => 'E02004022',
        '6BN' => 'E02004022',
        '6BP' => 'E02004022',
        '6BS' => 'E02004022',
        '6BT' => 'E02004022',
        '6BU' => 'E02004022',
        '6BW' => 'E02004022',
        '6BX' => 'E02004022',
        '6BY' => 'E02004022',
        '6DE' => 'E02004022',
        '6DF' => 'E02004022',
        '6DG' => 'E02004022',
        '6DH' => 'E02004022',
        '6DJ' => 'E02004022',
        '6DP' => 'E02004022',
        '6DQ' => 'E02004022',
        '6DR' => 'E02004022',
        '6DS' => 'E02004022',
        '6DT' => 'E02004022',
        '6DU' => 'E02004007',
        '6DX' => 'E02004007',
        '6DY' => 'E02004007',
        '6DZ' => 'E02004007',
        '6EA' => 'E02004007',
        '6EB' => 'E02004022',
        '6ED' => 'E02004022',
        '6EE' => 'E02004022',
        '6EF' => 'E02004022',
        '6EG' => 'E02004022',
        '6EP' => 'E02004022',
        '6EQ' => 'E02004022',
        '6ER' => 'E02004022',
        '6ES' => 'E02004022',
        '6ET' => 'E02004007',
        '6EU' => 'E02004007',
        '6EW' => 'E02004022',
        '6EX' => 'E02004007',
        '6EY' => 'E02004007',
        '6EZ' => 'E02004022',
        '6GA' => 'E02004022',
        '6GB' => 'E02004022',
        '6HA' => 'E02004022',
        '6HB' => 'E02004022',
        '6HD' => 'E02004022',
        '6HE' => 'E02004022',
        '6HF' => 'E02004022',
        '6HG' => 'E02004022',
        '6HH' => 'E02004022',
        '6HJ' => 'E02004022',
        '6HL' => 'E02004022',
        '6HN' => 'E02004022',
        '6HP' => 'E02004022',
        '6HQ' => 'E02004022',
        '6HR' => 'E02004022',
        '6HS' => 'E02004022',
        '6HT' => 'E02004022',
        '6HU' => 'E02004022',
        '6HW' => 'E02004022',
        '6HX' => 'E02004022',
        '6HY' => 'E02004022',
        '6HZ' => 'E02004022',
        '6JA' => 'E02004022',
        '6JB' => 'E02004022',
        '6JD' => 'E02004022',
        '6JE' => 'E02004022',
        '6JF' => 'E02004022',
        '6JG' => 'E02004022',
        '6JH' => 'E02004022',
        '6JJ' => 'E02004022',
        '6JL' => 'E02004022',
        '6JN' => 'E02004022',
        '6JQ' => 'E02004022',
        '6YZ' => 'E02004022',
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
