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
final class PL34
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02003933',
        '0AB' => 'E02003933',
        '0AD' => 'E02003933',
        '0AE' => 'E02003933',
        '0AF' => 'E02003933',
        '0AG' => 'E02003933',
        '0AH' => 'E02003933',
        '0AJ' => 'E02003933',
        '0AL' => 'E02003933',
        '0AN' => 'E02003933',
        '0AP' => 'E02003933',
        '0AQ' => 'E02003933',
        '0AR' => 'E02003933',
        '0AS' => 'E02003933',
        '0AT' => 'E02003933',
        '0AU' => 'E02003933',
        '0AW' => 'E02003933',
        '0AX' => 'E02003933',
        '0AY' => 'E02003933',
        '0AZ' => 'E02003933',
        '0BA' => 'E02003933',
        '0BB' => 'E02003933',
        '0BD' => 'E02003933',
        '0BE' => 'E02003933',
        '0BG' => 'E02003933',
        '0BH' => 'E02003933',
        '0BL' => 'E02003933',
        '0BP' => 'E02003933',
        '0BQ' => 'E02003933',
        '0BS' => 'E02003933',
        '0BT' => 'E02003933',
        '0BU' => 'E02003933',
        '0BX' => 'E02003933',
        '0BY' => 'E02003933',
        '0BZ' => 'E02003933',
        '0DA' => 'E02003933',
        '0DB' => 'E02003933',
        '0DD' => 'E02003933',
        '0DE' => 'E02003933',
        '0DF' => 'E02003933',
        '0DG' => 'E02003933',
        '0DH' => 'E02003933',
        '0DJ' => 'E02003933',
        '0DL' => 'E02003933',
        '0DN' => 'E02003933',
        '0DP' => 'E02003933',
        '0DQ' => 'E02003933',
        '0DR' => 'E02003933',
        '0DS' => 'E02003933',
        '0DT' => 'E02003933',
        '0DU' => 'E02003933',
        '0DW' => 'E02003933',
        '0DX' => 'E02003933',
        '0DY' => 'E02003933',
        '0DZ' => 'E02003933',
        '0EA' => 'E02003933',
        '0EB' => 'E02003933',
        '0ED' => 'E02003933',
        '0EE' => 'E02003933',
        '0EF' => 'E02003933',
        '0EH' => 'E02003933',
        '0EJ' => 'E02003933',
        '0EL' => 'E02003933',
        '0EN' => 'E02003933',
        '0EP' => 'E02003933',
        '0ER' => 'E02003933',
        '0ES' => 'E02003933',
        '0ET' => 'E02003933',
        '0EU' => 'E02003933',
        '0EW' => 'E02003933',
        '0EX' => 'E02003933',
        '0EY' => 'E02003933',
        '0HA' => 'E02003933',
        '0HB' => 'E02003933',
        '0HD' => 'E02003933',
        '0HE' => 'E02003933',
        '0HH' => 'E02003933',
        '0HJ' => 'E02003933',
        '0HL' => 'E02003933',
        '0HN' => 'E02003933',
        '0HP' => 'E02003933',
        '0HR' => 'E02003933',
        '0HW' => 'E02003933',
        '0WA' => 'E02003933',
        '0WD' => 'E02003933',
        '0WZ' => 'E02003933',
        '0YP' => 'E02003933',
        '0YQ' => 'E02003933',
        '0YR' => 'E02003933',
        '0YS' => 'E02003933',
        '0YT' => 'E02003933',
        '0YU' => 'E02003933',
        '0YW' => 'E02003933',
        '0YZ' => 'E02003933',
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
