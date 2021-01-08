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
final class TN36
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '4AA' => 'E02004395',
        '4AB' => 'E02004395',
        '4AD' => 'E02004395',
        '4AE' => 'E02004395',
        '4AF' => 'E02004395',
        '4AG' => 'E02004395',
        '4AH' => 'E02004395',
        '4AJ' => 'E02004395',
        '4AL' => 'E02004395',
        '4AN' => 'E02004395',
        '4AP' => 'E02004395',
        '4AQ' => 'E02004395',
        '4AR' => 'E02004395',
        '4AS' => 'E02004395',
        '4AT' => 'E02004395',
        '4AU' => 'E02004396',
        '4AX' => 'E02004395',
        '4AY' => 'E02004395',
        '4BA' => 'E02004395',
        '4BB' => 'E02004395',
        '4BD' => 'E02004395',
        '4BE' => 'E02004395',
        '4BG' => 'E02004395',
        '4BH' => 'E02004395',
        '4BJ' => 'E02004395',
        '4BL' => 'E02004395',
        '4BN' => 'E02004395',
        '4BP' => 'E02004395',
        '4BQ' => 'E02004395',
        '4BS' => 'E02004395',
        '4BT' => 'E02004395',
        '4BU' => 'E02004395',
        '4BX' => 'E02004395',
        '4BY' => 'E02004395',
        '4BZ' => 'E02004395',
        '4DA' => 'E02004395',
        '4DB' => 'E02004395',
        '4DE' => 'E02004395',
        '4EA' => 'E02004395',
        '4EB' => 'E02004395',
        '4ED' => 'E02004395',
        '4EE' => 'E02004395',
        '4EG' => 'E02004395',
        '4EH' => 'E02004395',
        '4EJ' => 'E02004395',
        '4EL' => 'E02004395',
        '4EN' => 'E02004395',
        '4EP' => 'E02004395',
        '4EQ' => 'E02004395',
        '4ES' => 'E02004395',
        '4ET' => 'E02004395',
        '4EU' => 'E02004395',
        '4EX' => 'E02004395',
        '4EY' => 'E02004395',
        '4HA' => 'E02004395',
        '4HB' => 'E02004395',
        '4HD' => 'E02004395',
        '4HE' => 'E02004395',
        '4HF' => 'E02004395',
        '4HG' => 'E02004395',
        '4HH' => 'E02004395',
        '4HJ' => 'E02004395',
        '4HL' => 'E02004395',
        '4HN' => 'E02004395',
        '4HP' => 'E02004395',
        '4HR' => 'E02004395',
        '4HS' => 'E02004395',
        '4HT' => 'E02004395',
        '4HU' => 'E02004395',
        '4HW' => 'E02004395',
        '4HX' => 'E02004395',
        '4JA' => 'E02004395',
        '4JB' => 'E02004396',
        '4JS' => 'E02004395',
        '4JT' => 'E02004395',
        '4JU' => 'E02004395',
        '4JX' => 'E02004396',
        '4JY' => 'E02004395',
        '4JZ' => 'E02004395',
        '4LA' => 'E02004395',
        '4LB' => 'E02004395',
        '4LD' => 'E02004395',
        '4LE' => 'E02004395',
        '4LF' => 'E02004395',
        '4LG' => 'E02004395',
        '4LH' => 'E02004395',
        '4LJ' => 'E02004395',
        '4LL' => 'E02004395',
        '4LN' => 'E02004395',
        '4LP' => 'E02004395',
        '4LQ' => 'E02004395',
        '4LR' => 'E02004395',
        '4LS' => 'E02004395',
        '4LT' => 'E02004395',
        '4LU' => 'E02004395',
        '4LW' => 'E02004395',
        '4LX' => 'E02004395',
        '4LY' => 'E02004395',
        '4LZ' => 'E02004395',
        '4NA' => 'E02004395',
        '4NB' => 'E02004395',
        '4ND' => 'E02004395',
        '4NE' => 'E02004395',
        '4NG' => 'E02004395',
        '4NH' => 'E02004395',
        '4UE' => 'E02004395',
        '4WA' => 'E02004395',
        '4WB' => 'E02004395',
        '4WF' => 'E02004395',
        '4WH' => 'E02004395',
        '4WL' => 'E02004395',
        '4ZS' => 'E02004395',
        '4ZT' => 'E02004395',
        '4ZU' => 'E02004395',
        '4ZX' => 'E02004395',
        '4ZY' => 'E02004395',
        '4ZZ' => 'E02004395',
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
