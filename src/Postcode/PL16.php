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
final class PL16
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02004232',
        '0AB' => 'E02004232',
        '0AD' => 'E02004232',
        '0AE' => 'E02004232',
        '0AF' => 'E02004232',
        '0AG' => 'E02004232',
        '0AH' => 'E02004232',
        '0AJ' => 'E02004232',
        '0AL' => 'E02004232',
        '0AN' => 'E02004232',
        '0AP' => 'E02004232',
        '0AQ' => 'E02004232',
        '0AR' => 'E02004232',
        '0AS' => 'E02004232',
        '0AT' => 'E02004232',
        '0AU' => 'E02004232',
        '0AW' => 'E02004232',
        '0AX' => 'E02004232',
        '0AY' => 'E02004232',
        '0AZ' => 'E02004232',
        '0BA' => 'E02004232',
        '0BB' => 'E02004232',
        '0BD' => 'E02004232',
        '0BE' => 'E02004232',
        '0BG' => 'E02004232',
        '0BH' => 'E02004232',
        '0BJ' => 'E02004232',
        '0BL' => 'E02004232',
        '0BN' => 'E02004232',
        '0BP' => 'E02004232',
        '0BQ' => 'E02004232',
        '0BS' => 'E02004232',
        '0BT' => 'E02004232',
        '0BU' => 'E02004232',
        '0BW' => 'E02004232',
        '0BX' => 'E02004232',
        '0BY' => 'E02004232',
        '0BZ' => 'E02004232',
        '0DA' => 'E02004232',
        '0DB' => 'E02004232',
        '0DD' => 'E02004232',
        '0DE' => 'E02004232',
        '0DF' => 'E02004232',
        '0DG' => 'E02004232',
        '0DJ' => 'E02004232',
        '0DL' => 'E02004232',
        '0DN' => 'E02004232',
        '0DP' => 'E02004232',
        '0DQ' => 'E02004232',
        '0DR' => 'E02004232',
        '0DS' => 'E02004232',
        '0DT' => 'E02004232',
        '0DU' => 'E02004232',
        '0DW' => 'E02004232',
        '0DX' => 'E02004232',
        '0DY' => 'E02004232',
        '0DZ' => 'E02004232',
        '0EA' => 'E02004232',
        '0EB' => 'E02004232',
        '0ED' => 'E02004232',
        '0EE' => 'E02004232',
        '0EH' => 'E02004232',
        '0EJ' => 'E02004232',
        '0EL' => 'E02004232',
        '0EN' => 'E02004232',
        '0EP' => 'E02004228',
        '0ER' => 'E02004228',
        '0ES' => 'E02004228',
        '0ET' => 'E02004228',
        '0EU' => 'E02004228',
        '0EW' => 'E02004228',
        '0EX' => 'E02004228',
        '0HA' => 'E02004232',
        '0HB' => 'E02004232',
        '0HD' => 'E02004232',
        '0HE' => 'E02004232',
        '0HF' => 'E02004232',
        '0HG' => 'E02004232',
        '0HH' => 'E02004232',
        '0HJ' => 'E02004232',
        '0HL' => 'E02004232',
        '0HN' => 'E02004232',
        '0HP' => 'E02004232',
        '0HQ' => 'E02004232',
        '0HR' => 'E02004232',
        '0HS' => 'E02004232',
        '0HT' => 'E02004232',
        '0HU' => 'E02004232',
        '0HX' => 'E02004232',
        '0HY' => 'E02004232',
        '0HZ' => 'E02004232',
        '0JA' => 'E02004232',
        '0JB' => 'E02004232',
        '0JD' => 'E02004232',
        '0JE' => 'E02004232',
        '0JF' => 'E02004228',
        '0JG' => 'E02004232',
        '0JH' => 'E02004228',
        '0JJ' => 'E02004228',
        '0JL' => 'E02004228',
        '0JP' => 'E02004228',
        '0JR' => 'E02004228',
        '0JS' => 'E02004228',
        '0JT' => 'E02004228',
        '0LA' => 'E02004232',
        '0LB' => 'E02004232',
        '0LD' => 'E02004232',
        '0RL' => 'E02004228',
        '0SW' => 'E02004228',
        '0WA' => 'E02003936',
        '0WU' => 'E02003936',
        '0WW' => 'E02003936',
        '0WX' => 'E02003936',
        '0WY' => 'E02003936',
        '0WZ' => 'E02003936',
        '0XZ' => 'E02003936',
        '0YA' => 'E02004228',
        '0YB' => 'E02003936',
        '0YD' => 'E02004232',
        '0YE' => 'E02003936',
        '0YF' => 'E02003936',
        '0YG' => 'E02004232',
        '0YH' => 'E02003936',
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
