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
final class SO52
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '9AA' => 'E02004825',
        '9AB' => 'E02004825',
        '9AD' => 'E02004825',
        '9AE' => 'E02004825',
        '9AF' => 'E02004825',
        '9AG' => 'E02004827',
        '9AH' => 'E02004825',
        '9AQ' => 'E02004825',
        '9AR' => 'E02004825',
        '9AS' => 'E02004825',
        '9AT' => 'E02004825',
        '9AU' => 'E02004825',
        '9AW' => 'E02004825',
        '9BG' => 'E02004825',
        '9BH' => 'E02004825',
        '9BJ' => 'E02004825',
        '9DA' => 'E02004713',
        '9DD' => 'E02004825',
        '9DE' => 'E02004825',
        '9DF' => 'E02004825',
        '9DG' => 'E02004825',
        '9DH' => 'E02004825',
        '9DJ' => 'E02004825',
        '9DL' => 'E02004825',
        '9DN' => 'E02004825',
        '9DP' => 'E02004825',
        '9DQ' => 'E02004825',
        '9DR' => 'E02004825',
        '9DS' => 'E02004825',
        '9DT' => 'E02004825',
        '9DU' => 'E02004825',
        '9DW' => 'E02004825',
        '9DX' => 'E02004825',
        '9DY' => 'E02004825',
        '9DZ' => 'E02004825',
        '9EA' => 'E02004825',
        '9EB' => 'E02004825',
        '9ED' => 'E02004825',
        '9EE' => 'E02004825',
        '9EF' => 'E02004825',
        '9EG' => 'E02004825',
        '9EH' => 'E02004825',
        '9EJ' => 'E02004825',
        '9EL' => 'E02004825',
        '9EN' => 'E02004825',
        '9EP' => 'E02004825',
        '9EQ' => 'E02004825',
        '9ER' => 'E02004825',
        '9ES' => 'E02004825',
        '9ET' => 'E02004825',
        '9EU' => 'E02004825',
        '9EW' => 'E02004825',
        '9EX' => 'E02004825',
        '9EY' => 'E02004825',
        '9EZ' => 'E02004825',
        '9FB' => 'E02004825',
        '9FD' => 'E02004825',
        '9FE' => 'E02004825',
        '9FF' => 'E02004825',
        '9FG' => 'E02004825',
        '9FH' => 'E02004825',
        '9FJ' => 'E02004825',
        '9FL' => 'E02004825',
        '9FN' => 'E02004825',
        '9FP' => 'E02004825',
        '9FQ' => 'E02004825',
        '9FR' => 'E02004825',
        '9FS' => 'E02004825',
        '9FT' => 'E02004825',
        '9FU' => 'E02004825',
        '9FW' => 'E02004825',
        '9FX' => 'E02004825',
        '9FY' => 'E02004825',
        '9FZ' => 'E02004825',
        '9GA' => 'E02004825',
        '9GB' => 'E02004825',
        '9GD' => 'E02004825',
        '9GE' => 'E02004825',
        '9GF' => 'E02004825',
        '9GG' => 'E02004825',
        '9GH' => 'E02004825',
        '9GJ' => 'E02004825',
        '9GL' => 'E02004825',
        '9GN' => 'E02004825',
        '9GP' => 'E02004825',
        '9GQ' => 'E02004825',
        '9GR' => 'E02004825',
        '9GS' => 'E02004825',
        '9GT' => 'E02004825',
        '9GU' => 'E02004825',
        '9GW' => 'E02004825',
        '9GX' => 'E02004825',
        '9GY' => 'E02004825',
        '9GZ' => 'E02004825',
        '9HA' => 'E02004825',
        '9HB' => 'E02004825',
        '9HD' => 'E02004825',
        '9HE' => 'E02004825',
        '9HF' => 'E02004825',
        '9HG' => 'E02004825',
        '9HH' => 'E02004825',
        '9HJ' => 'E02004825',
        '9HL' => 'E02004825',
        '9HN' => 'E02004825',
        '9HP' => 'E02004825',
        '9HQ' => 'E02004825',
        '9HR' => 'E02004825',
        '9HS' => 'E02004825',
        '9HT' => 'E02004825',
        '9HU' => 'E02004825',
        '9HW' => 'E02004825',
        '9HX' => 'E02004825',
        '9HY' => 'E02004825',
        '9HZ' => 'E02004825',
        '9JA' => 'E02004825',
        '9JB' => 'E02004825',
        '9JD' => 'E02004825',
        '9JE' => 'E02004825',
        '9JF' => 'E02004825',
        '9JG' => 'E02004825',
        '9JH' => 'E02004825',
        '9JJ' => 'E02004825',
        '9JL' => 'E02004825',
        '9JN' => 'E02004825',
        '9JP' => 'E02004825',
        '9JQ' => 'E02004825',
        '9JR' => 'E02004825',
        '9JS' => 'E02004825',
        '9JT' => 'E02004825',
        '9JU' => 'E02004825',
        '9JW' => 'E02004825',
        '9JX' => 'E02004825',
        '9JY' => 'E02004825',
        '9JZ' => 'E02004825',
        '9LA' => 'E02004825',
        '9LB' => 'E02004825',
        '9LD' => 'E02004825',
        '9LP' => 'E02004828',
        '9LQ' => 'E02004825',
        '9LR' => 'E02004825',
        '9LS' => 'E02004825',
        '9LT' => 'E02004825',
        '9LU' => 'E02004825',
        '9LW' => 'E02004825',
        '9LX' => 'E02004825',
        '9LY' => 'E02004828',
        '9LZ' => 'E02004828',
        '9NA' => 'E02004825',
        '9NB' => 'E02004825',
        '9ND' => 'E02004825',
        '9NE' => 'E02004825',
        '9NF' => 'E02004825',
        '9NG' => 'E02004825',
        '9NH' => 'E02004825',
        '9NL' => 'E02004825',
        '9NP' => 'E02004825',
        '9NQ' => 'E02004825',
        '9NR' => 'E02004825',
        '9NS' => 'E02004825',
        '9NT' => 'E02004825',
        '9NW' => 'E02004825',
        '9NY' => 'E02004825',
        '9NZ' => 'E02004825',
        '9PA' => 'E02004825',
        '9PB' => 'E02004825',
        '9PD' => 'E02004825',
        '9PE' => 'E02004825',
        '9PF' => 'E02004825',
        '9PG' => 'E02004825',
        '9PH' => 'E02004825',
        '9PJ' => 'E02004825',
        '9PP' => 'E02004825',
        '9PQ' => 'E02004825',
        '9PR' => 'E02004825',
        '9PS' => 'E02004825',
        '9PT' => 'E02004825',
        '9SW' => 'E02004825',
        '9WA' => 'E02004713',
        '9WB' => 'E02004713',
        '9WD' => 'E02004713',
        '9WE' => 'E02004713',
        '9WF' => 'E02004713',
        '9WG' => 'E02004713',
        '9WU' => 'E02004713',
        '9WW' => 'E02004713',
        '9WX' => 'E02004713',
        '9WY' => 'E02004713',
        '9WZ' => 'E02004713',
        '9ZA' => 'E02004825',
        '9ZB' => 'E02004825',
        '9ZD' => 'E02004713',
        '9ZE' => 'E02004825',
        '9ZF' => 'E02004825',
        '9ZG' => 'E02004825',
        '9ZH' => 'E02004825',
        '9ZJ' => 'E02004713',
        '9ZL' => 'E02004825',
        '9ZN' => 'E02004713',
        '9ZP' => 'E02004713',
        '9ZQ' => 'E02004713',
        '9ZR' => 'E02004713',
        '9ZS' => 'E02004713',
        '9ZT' => 'E02004713',
        '9ZY' => 'E02004825',
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
