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
final class LS99
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '2AE' => 'E02006876',
        '2AR' => 'E02006876',
        '2AU' => 'E02006876',
        '2BD' => 'E02006876',
        '2BE' => 'E02006876',
        '2BG' => 'E02006876',
        '2BL' => 'E02006876',
        '2BS' => 'E02006876',
        '2DA' => 'E02006876',
        '2DB' => 'E02006876',
        '2DG' => 'E02006876',
        '2DP' => 'E02006876',
        '2DZ' => 'E02006876',
        '2HA' => 'E02006876',
        '2HB' => 'E02006876',
        '2HD' => 'E02006876',
        '2HE' => 'E02006876',
        '2HF' => 'E02006876',
        '2HG' => 'E02006876',
        '2HH' => 'E02006876',
        '2HJ' => 'E02006876',
        '2HL' => 'E02006876',
        '2HN' => 'E02006876',
        '2HP' => 'E02006876',
        '2HQ' => 'E02006876',
        '2HR' => 'E02006876',
        '2HS' => 'E02006876',
        '2HT' => 'E02006876',
        '2HU' => 'E02006876',
        '2HW' => 'E02006876',
        '2HX' => 'E02006876',
        '2HY' => 'E02006876',
        '2HZ' => 'E02006876',
        '2JS' => 'E02006876',
        '2LZ' => 'E02006876',
        '2RA' => 'E02006876',
        '2RB' => 'E02006876',
        '2RD' => 'E02006876',
        '2RE' => 'E02006876',
        '2RF' => 'E02006876',
        '2RG' => 'E02006876',
        '2RH' => 'E02006876',
        '2RJ' => 'E02006876',
        '2RL' => 'E02006876',
        '2RN' => 'E02006876',
        '2RP' => 'E02006876',
        '2RQ' => 'E02006876',
        '2RR' => 'E02006876',
        '2RS' => 'E02006876',
        '2RT' => 'E02006876',
        '2RU' => 'E02006876',
        '2RW' => 'E02006876',
        '2RX' => 'E02006876',
        '2RY' => 'E02006876',
        '2RZ' => 'E02006876',
        '2WA' => 'E02006876',
        '2XA' => 'E02006876',
        '3JP' => 'E02002395',
        '8AA' => 'E02006876',
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
