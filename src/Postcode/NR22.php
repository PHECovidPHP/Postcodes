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
final class NR22
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '6AA' => 'E02005578',
        '6AB' => 'E02005578',
        '6AD' => 'E02005578',
        '6AE' => 'E02005578',
        '6AF' => 'E02005578',
        '6AG' => 'E02005578',
        '6AH' => 'E02005578',
        '6AJ' => 'E02005578',
        '6AL' => 'E02005578',
        '6AN' => 'E02005578',
        '6AP' => 'E02005578',
        '6AQ' => 'E02005578',
        '6AR' => 'E02005578',
        '6AS' => 'E02005578',
        '6AT' => 'E02005552',
        '6AU' => 'E02005578',
        '6AW' => 'E02005578',
        '6AX' => 'E02005578',
        '6AY' => 'E02005578',
        '6AZ' => 'E02005578',
        '6BA' => 'E02005578',
        '6BB' => 'E02005578',
        '6BD' => 'E02005578',
        '6BE' => 'E02005578',
        '6BF' => 'E02005578',
        '6BG' => 'E02005578',
        '6BH' => 'E02005578',
        '6BJ' => 'E02005578',
        '6BL' => 'E02005578',
        '6BN' => 'E02005578',
        '6BP' => 'E02005578',
        '6BQ' => 'E02005578',
        '6BS' => 'E02005578',
        '6BT' => 'E02005578',
        '6BU' => 'E02005578',
        '6BW' => 'E02005578',
        '6BX' => 'E02005578',
        '6BY' => 'E02005578',
        '6BZ' => 'E02005578',
        '6DA' => 'E02005578',
        '6DB' => 'E02005578',
        '6DD' => 'E02005578',
        '6DE' => 'E02005578',
        '6DF' => 'E02005578',
        '6DG' => 'E02005578',
        '6DH' => 'E02005578',
        '6DJ' => 'E02005578',
        '6DL' => 'E02005578',
        '6DN' => 'E02005578',
        '6DP' => 'E02005578',
        '6DQ' => 'E02005578',
        '6DR' => 'E02005578',
        '6DS' => 'E02005578',
        '6DT' => 'E02005578',
        '6DU' => 'E02005578',
        '6DW' => 'E02005578',
        '6DX' => 'E02005578',
        '6DY' => 'E02005578',
        '6DZ' => 'E02005578',
        '6EA' => 'E02005578',
        '6EB' => 'E02005578',
        '6ED' => 'E02005578',
        '6EE' => 'E02005578',
        '6EF' => 'E02005578',
        '6EG' => 'E02005578',
        '6EH' => 'E02005578',
        '6EJ' => 'E02005578',
        '6EL' => 'E02005578',
        '6EN' => 'E02005552',
        '6EQ' => 'E02005578',
        '6WZ' => 'E02005580',
        '6XB' => 'E02005578',
        '6XD' => 'E02005580',
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
