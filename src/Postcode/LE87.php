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
final class LE87
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '2AB' => 'E02005341',
        '2AD' => 'E02005341',
        '2AE' => 'E02005414',
        '2BB' => 'E02006850',
        '2FP' => 'E02006850',
        '2GA' => 'E02005414',
        '2WW' => 'E02005341',
        '2ZA' => 'E02006851',
        '2ZF' => 'E02006851',
        '2ZZ' => 'E02005414',
        '4AA' => 'E02006851',
        '4AB' => 'E02006851',
        '4AD' => 'E02006851',
        '4AE' => 'E02006851',
        '4AF' => 'E02006851',
        '4AG' => 'E02006851',
        '4AH' => 'E02006851',
        '4AJ' => 'E02006851',
        '4AL' => 'E02006851',
        '4AN' => 'E02006851',
        '4AP' => 'E02006851',
        '4AQ' => 'E02006851',
        '4AR' => 'E02006851',
        '4AS' => 'E02006851',
        '4AT' => 'E02006851',
        '4AU' => 'E02006851',
        '4AW' => 'E02006851',
        '4AX' => 'E02006851',
        '4AY' => 'E02006851',
        '4AZ' => 'E02006851',
        '4BA' => 'E02006851',
        '4BB' => 'E02006851',
        '4BD' => 'E02006851',
        '4BE' => 'E02006851',
        '4BG' => 'E02006851',
        '4BH' => 'E02006851',
        '4BJ' => 'E02006851',
        '4BL' => 'E02006851',
        '4BN' => 'E02006851',
        '4BQ' => 'E02006851',
        '4BR' => 'E02006851',
        '4BS' => 'E02006851',
        '4BT' => 'E02006851',
        '4BU' => 'E02006851',
        '4BX' => 'E02006851',
        '4BY' => 'E02006851',
        '4BZ' => 'E02006851',
        '4DA' => 'E02006851',
        '4DB' => 'E02006851',
        '4DD' => 'E02006851',
        '4DE' => 'E02006851',
        '4DF' => 'E02006851',
        '4DG' => 'E02006851',
        '4DH' => 'E02006851',
        '4DJ' => 'E02006851',
        '4DL' => 'E02006851',
        '4DN' => 'E02006851',
        '4DP' => 'E02006851',
        '4DQ' => 'E02006851',
        '4DR' => 'E02006851',
        '4DS' => 'E02006851',
        '4DT' => 'E02006851',
        '4DU' => 'E02006851',
        '4DW' => 'E02006851',
        '4DX' => 'E02006851',
        '4DY' => 'E02006851',
        '4DZ' => 'E02006851',
        '4ED' => 'E02006851',
        '4EE' => 'E02006851',
        '4EF' => 'E02006851',
        '4EG' => 'E02006851',
        '4EH' => 'E02006851',
        '4EJ' => 'E02006851',
        '4EL' => 'E02006851',
        '4EN' => 'E02006851',
        '4EP' => 'E02006851',
        '4EQ' => 'E02006851',
        '4ER' => 'E02006851',
        '4ES' => 'E02006851',
        '4ET' => 'E02006851',
        '4EU' => 'E02006851',
        '4PA' => 'E02006851',
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
