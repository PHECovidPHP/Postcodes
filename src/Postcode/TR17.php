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
final class TR17
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02003947',
        '0AB' => 'E02003946',
        '0AD' => 'E02003946',
        '0AE' => 'E02003946',
        '0AF' => 'E02003946',
        '0AG' => 'E02003946',
        '0AH' => 'E02003946',
        '0AJ' => 'E02003946',
        '0AL' => 'E02003946',
        '0AN' => 'E02003946',
        '0AP' => 'E02003946',
        '0AQ' => 'E02003946',
        '0AR' => 'E02003946',
        '0AS' => 'E02003946',
        '0AT' => 'E02003946',
        '0AU' => 'E02003946',
        '0AW' => 'E02003946',
        '0AX' => 'E02003946',
        '0AY' => 'E02003946',
        '0AZ' => 'E02003946',
        '0BA' => 'E02003946',
        '0BB' => 'E02003946',
        '0BD' => 'E02003946',
        '0BE' => 'E02003946',
        '0BG' => 'E02003946',
        '0BH' => 'E02003946',
        '0BJ' => 'E02003946',
        '0BL' => 'E02003946',
        '0BN' => 'E02003946',
        '0BP' => 'E02003946',
        '0BQ' => 'E02003946',
        '0BS' => 'E02003946',
        '0BT' => 'E02003946',
        '0BU' => 'E02003946',
        '0BW' => 'E02003946',
        '0BX' => 'E02003946',
        '0BY' => 'E02003946',
        '0BZ' => 'E02003946',
        '0DA' => 'E02003947',
        '0DB' => 'E02003946',
        '0DD' => 'E02003946',
        '0DE' => 'E02003946',
        '0DF' => 'E02003946',
        '0DG' => 'E02003946',
        '0DH' => 'E02003946',
        '0DJ' => 'E02003946',
        '0DL' => 'E02003946',
        '0DN' => 'E02003946',
        '0DP' => 'E02003946',
        '0DQ' => 'E02003946',
        '0DR' => 'E02003946',
        '0DS' => 'E02003946',
        '0DT' => 'E02003946',
        '0DU' => 'E02003946',
        '0DW' => 'E02003946',
        '0DX' => 'E02003946',
        '0DY' => 'E02003947',
        '0DZ' => 'E02003946',
        '0EA' => 'E02003946',
        '0EB' => 'E02003946',
        '0ED' => 'E02003946',
        '0EE' => 'E02003946',
        '0EF' => 'E02003946',
        '0EG' => 'E02003946',
        '0EH' => 'E02003946',
        '0EJ' => 'E02003946',
        '0EL' => 'E02003946',
        '0EN' => 'E02003946',
        '0EP' => 'E02003946',
        '0EQ' => 'E02003946',
        '0ER' => 'E02003946',
        '0ES' => 'E02003946',
        '0ET' => 'E02003946',
        '0EU' => 'E02003946',
        '0EW' => 'E02003947',
        '0EX' => 'E02003946',
        '0EZ' => 'E02003946',
        '0HA' => 'E02003946',
        '0HB' => 'E02003946',
        '0HD' => 'E02003946',
        '0HE' => 'E02003946',
        '0HF' => 'E02003946',
        '0HG' => 'E02003946',
        '0HH' => 'E02003946',
        '0HJ' => 'E02003946',
        '0HL' => 'E02003946',
        '0HN' => 'E02003946',
        '0HQ' => 'E02003946',
        '0HS' => 'E02003946',
        '0HT' => 'E02003946',
        '0HW' => 'E02003946',
        '0WA' => 'E02003949',
        '0WD' => 'E02003946',
        '0WZ' => 'E02003949',
        '0XA' => 'E02003946',
        '0YA' => 'E02003946',
        '0YB' => 'E02003946',
        '0YD' => 'E02003946',
        '0YE' => 'E02003949',
        '0YF' => 'E02003946',
        '0YG' => 'E02003946',
        '0YH' => 'E02003946',
        '0YJ' => 'E02003946',
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
