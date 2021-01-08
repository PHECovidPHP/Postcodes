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
final class DA18
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '4AA' => 'E02000065',
        '4AB' => 'E02000065',
        '4AD' => 'E02000072',
        '4AE' => 'E02000066',
        '4AF' => 'E02000066',
        '4AG' => 'E02000065',
        '4AH' => 'E02000065',
        '4AJ' => 'E02000065',
        '4AL' => 'E02000065',
        '4AN' => 'E02000065',
        '4AP' => 'E02000065',
        '4AQ' => 'E02000066',
        '4AR' => 'E02000065',
        '4AS' => 'E02000072',
        '4AT' => 'E02000065',
        '4AU' => 'E02000065',
        '4AW' => 'E02000065',
        '4AX' => 'E02000065',
        '4BA' => 'E02000066',
        '4BB' => 'E02000066',
        '4BD' => 'E02000066',
        '4BE' => 'E02000066',
        '4BG' => 'E02000066',
        '4BH' => 'E02000065',
        '4BJ' => 'E02000065',
        '4BL' => 'E02000065',
        '4BN' => 'E02000065',
        '4BP' => 'E02000066',
        '4BQ' => 'E02000066',
        '4BS' => 'E02000066',
        '4BT' => 'E02000066',
        '4BU' => 'E02000065',
        '4BW' => 'E02000065',
        '4BX' => 'E02000065',
        '4BY' => 'E02000065',
        '4BZ' => 'E02000065',
        '4DA' => 'E02000066',
        '4DB' => 'E02000066',
        '4DD' => 'E02000066',
        '4DE' => 'E02000066',
        '4DF' => 'E02000066',
        '4DG' => 'E02000066',
        '4DH' => 'E02000066',
        '4DJ' => 'E02000066',
        '4DL' => 'E02000066',
        '4DN' => 'E02000066',
        '4DP' => 'E02000066',
        '4DQ' => 'E02000066',
        '4DR' => 'E02000065',
        '4DS' => 'E02000065',
        '4DT' => 'E02000065',
        '4DU' => 'E02000065',
        '4DW' => 'E02000065',
        '4DX' => 'E02000065',
        '4DY' => 'E02000065',
        '4DZ' => 'E02000065',
        '4EA' => 'E02000065',
        '4EB' => 'E02000065',
        '4ED' => 'E02000066',
        '4EE' => 'E02000066',
        '4EF' => 'E02000066',
        '4EG' => 'E02000066',
        '4EH' => 'E02000066',
        '4EJ' => 'E02000072',
        '4EL' => 'E02000066',
        '4EN' => 'E02000066',
        '4EP' => 'E02000072',
        '4EQ' => 'E02000072',
        '4HA' => 'E02000066',
        '4HB' => 'E02000066',
        '4HD' => 'E02000066',
        '4HE' => 'E02000066',
        '4HG' => 'E02000066',
        '4HH' => 'E02000066',
        '4HJ' => 'E02000066',
        '4HN' => 'E02000066',
        '4HP' => 'E02000066',
        '4HQ' => 'E02000066',
        '4HR' => 'E02000066',
        '4HS' => 'E02000066',
        '4HT' => 'E02000066',
        '4HU' => 'E02000066',
        '4HW' => 'E02000066',
        '4HX' => 'E02000066',
        '4HY' => 'E02000066',
        '4TT' => 'E02000065',
        '4UR' => 'E02000072',
        '4WA' => 'E02000072',
        '4WB' => 'E02000072',
        '4WL' => 'E02000072',
        '4WX' => 'E02000072',
        '4WY' => 'E02000072',
        '4WZ' => 'E02000072',
        '4XP' => 'E02000066',
        '4XZ' => 'E02000072',
        '4YE' => 'E02000072',
        '4YZ' => 'E02000072',
        '4ZW' => 'E02000072',
        '4ZX' => 'E02000065',
        '4ZY' => 'E02000072',
        '4ZZ' => 'E02000066',
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
