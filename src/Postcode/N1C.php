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
final class N1C
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '4AA' => 'E02000187',
        '4AB' => 'E02000187',
        '4AD' => 'E02000187',
        '4AE' => 'E02000187',
        '4AF' => 'E02000187',
        '4AG' => 'E02000187',
        '4AH' => 'E02000187',
        '4AJ' => 'E02000187',
        '4AL' => 'E02000187',
        '4AN' => 'E02000187',
        '4AP' => 'E02000187',
        '4AQ' => 'E02000187',
        '4AR' => 'E02000187',
        '4AS' => 'E02000187',
        '4AT' => 'E02000187',
        '4AU' => 'E02000187',
        '4AW' => 'E02000187',
        '4AX' => 'E02000187',
        '4AY' => 'E02000187',
        '4AZ' => 'E02000187',
        '4BA' => 'E02000187',
        '4BB' => 'E02000187',
        '4BD' => 'E02000187',
        '4BE' => 'E02000187',
        '4BF' => 'E02000187',
        '4BG' => 'E02000187',
        '4BH' => 'E02000187',
        '4BJ' => 'E02000187',
        '4BL' => 'E02000574',
        '4BN' => 'E02000184',
        '4BP' => 'E02000187',
        '4BQ' => 'E02000187',
        '4BR' => 'E02000187',
        '4BS' => 'E02000187',
        '4BT' => 'E02000187',
        '4BU' => 'E02000187',
        '4BW' => 'E02000187',
        '4BX' => 'E02000187',
        '4BY' => 'E02000187',
        '4BZ' => 'E02000187',
        '4DA' => 'E02000187',
        '4DB' => 'E02000187',
        '4DD' => 'E02000187',
        '4DE' => 'E02000187',
        '4DF' => 'E02000187',
        '4DG' => 'E02000184',
        '4DH' => 'E02000187',
        '4DJ' => 'E02000187',
        '4DL' => 'E02000187',
        '4DN' => 'E02000187',
        '4DP' => 'E02000187',
        '4DQ' => 'E02000187',
        '4DR' => 'E02000187',
        '4DS' => 'E02000187',
        '4DT' => 'E02000187',
        '4DU' => 'E02000187',
        '4DW' => 'E02000187',
        '4DX' => 'E02000187',
        '4DY' => 'E02000187',
        '4DZ' => 'E02000187',
        '4EA' => 'E02000187',
        '4LW' => 'E02000187',
        '4PD' => 'E02000187',
        '4PF' => 'E02000184',
        '4PG' => 'E02000187',
        '4PL' => 'E02000187',
        '4PN' => 'E02000187',
        '4PP' => 'E02000184',
        '4PQ' => 'E02000187',
        '4PW' => 'E02000187',
        '4QL' => 'E02000187',
        '4QP' => 'E02000187',
        '4TB' => 'E02000187',
        '4TF' => 'E02000187',
        '4UR' => 'E02000187',
        '4UU' => 'E02000187',
        '4UZ' => 'E02000187',
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
