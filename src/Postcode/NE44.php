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
final class NE44
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '6AA' => 'E02005732',
        '6AB' => 'E02005732',
        '6AD' => 'E02005732',
        '6AE' => 'E02005732',
        '6AF' => 'E02005732',
        '6AG' => 'E02005732',
        '6AH' => 'E02005732',
        '6AJ' => 'E02005732',
        '6AL' => 'E02005732',
        '6AN' => 'E02005732',
        '6AP' => 'E02005732',
        '6AQ' => 'E02005733',
        '6AR' => 'E02005732',
        '6AS' => 'E02005732',
        '6AT' => 'E02005732',
        '6AU' => 'E02005732',
        '6AW' => 'E02005732',
        '6AX' => 'E02005732',
        '6AY' => 'E02005732',
        '6AZ' => 'E02005732',
        '6BA' => 'E02005732',
        '6BB' => 'E02005732',
        '6BD' => 'E02005732',
        '6BE' => 'E02005732',
        '6BG' => 'E02005732',
        '6BH' => 'E02005732',
        '6BJ' => 'E02005732',
        '6BL' => 'E02005732',
        '6BN' => 'E02005732',
        '6BP' => 'E02005732',
        '6BQ' => 'E02005732',
        '6BS' => 'E02005732',
        '6BT' => 'E02005732',
        '6BU' => 'E02005732',
        '6BW' => 'E02005732',
        '6DF' => 'E02005732',
        '6DG' => 'E02005732',
        '6DH' => 'E02005732',
        '6DJ' => 'E02005732',
        '6DL' => 'E02005732',
        '6DN' => 'E02005732',
        '6DP' => 'E02005732',
        '6DQ' => 'E02005732',
        '6DR' => 'E02005732',
        '6DS' => 'E02005732',
        '6DT' => 'E02005732',
        '6DU' => 'E02005732',
        '6DW' => 'E02005732',
        '6DX' => 'E02005732',
        '6DY' => 'E02005732',
        '6DZ' => 'E02005732',
        '6EA' => 'E02005732',
        '6EB' => 'E02005732',
        '6ED' => 'E02005732',
        '6EE' => 'E02005732',
        '6EF' => 'E02005732',
        '6EG' => 'E02005732',
        '6EH' => 'E02005732',
        '6EJ' => 'E02005732',
        '6EL' => 'E02005732',
        '6EN' => 'E02005732',
        '6EP' => 'E02005732',
        '6EQ' => 'E02005732',
        '6ET' => 'E02005732',
        '6EW' => 'E02005732',
        '6EX' => 'E02005732',
        '6HA' => 'E02005732',
        '6HD' => 'E02005732',
        '6HE' => 'E02005732',
        '6HF' => 'E02005732',
        '6HG' => 'E02005732',
        '6HH' => 'E02005732',
        '6HJ' => 'E02005732',
        '6HL' => 'E02005732',
        '6HN' => 'E02005732',
        '6HP' => 'E02005732',
        '6HQ' => 'E02005732',
        '6HR' => 'E02005732',
        '6HS' => 'E02005732',
        '6HT' => 'E02005732',
        '6HU' => 'E02005732',
        '6HW' => 'E02005732',
        '6HX' => 'E02005732',
        '6HY' => 'E02005732',
        '6HZ' => 'E02005732',
        '6JA' => 'E02005732',
        '6JB' => 'E02005732',
        '6JD' => 'E02005732',
        '6JE' => 'E02005732',
        '6WZ' => 'E02005732',
        '6YT' => 'E02005732',
        '6YU' => 'E02005732',
        '6YX' => 'E02005732',
        '6YY' => 'E02005732',
        '6YZ' => 'E02005732',
        '6ZX' => 'E02005732',
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
