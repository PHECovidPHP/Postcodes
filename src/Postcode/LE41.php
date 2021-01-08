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
final class LE41
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '9AB' => 'E02005336',
        '9AD' => 'E02002832',
        '9AE' => 'E02002832',
        '9AF' => 'E02002832',
        '9AG' => 'E02002832',
        '9AH' => 'E02002832',
        '9AJ' => 'E02002832',
        '9AL' => 'E02002832',
        '9AN' => 'E02002832',
        '9AP' => 'E02002832',
        '9AQ' => 'E02002832',
        '9AR' => 'E02002832',
        '9AS' => 'E02002832',
        '9AT' => 'E02002832',
        '9AU' => 'E02005336',
        '9AW' => 'E02002832',
        '9AX' => 'E02002832',
        '9AY' => 'E02002832',
        '9AZ' => 'E02002832',
        '9BA' => 'E02002832',
        '9BB' => 'E02002832',
        '9BD' => 'E02002832',
        '9BE' => 'E02002832',
        '9BF' => 'E02005336',
        '9BG' => 'E02002832',
        '9BH' => 'E02002832',
        '9BJ' => 'E02002832',
        '9BL' => 'E02002832',
        '9BN' => 'E02002832',
        '9BP' => 'E02002832',
        '9BQ' => 'E02002832',
        '9BR' => 'E02002832',
        '9BS' => 'E02002832',
        '9BT' => 'E02002832',
        '9BU' => 'E02002832',
        '9BW' => 'E02002832',
        '9BX' => 'E02002832',
        '9BY' => 'E02002832',
        '9BZ' => 'E02005336',
        '9DA' => 'E02002832',
        '9DB' => 'E02002832',
        '9DD' => 'E02002832',
        '9DE' => 'E02002832',
        '9DF' => 'E02002832',
        '9DG' => 'E02002832',
        '9DH' => 'E02002832',
        '9DJ' => 'E02002832',
        '9DL' => 'E02002832',
        '9DN' => 'E02002832',
        '9DP' => 'E02002832',
        '9DQ' => 'E02002832',
        '9DR' => 'E02002832',
        '9DS' => 'E02002832',
        '9DT' => 'E02002832',
        '9DU' => 'E02002832',
        '9DW' => 'E02002832',
        '9DX' => 'E02002832',
        '9DY' => 'E02002832',
        '9DZ' => 'E02002832',
        '9EA' => 'E02002832',
        '9EB' => 'E02002832',
        '9ED' => 'E02002832',
        '9EE' => 'E02002832',
        '9EF' => 'E02002832',
        '9EG' => 'E02002832',
        '9EH' => 'E02002832',
        '9EJ' => 'E02002832',
        '9EL' => 'E02002832',
        '9EN' => 'E02002832',
        '9EP' => 'E02002832',
        '9EQ' => 'E02002832',
        '9ER' => 'E02002832',
        '9ES' => 'E02002832',
        '9ET' => 'E02002832',
        '9EU' => 'E02005336',
        '9EW' => 'E02002832',
        '9EX' => 'E02002832',
        '9EY' => 'E02005336',
        '9EZ' => 'E02002832',
        '9FA' => 'E02002832',
        '9FB' => 'E02002832',
        '9FD' => 'E02002832',
        '9FE' => 'E02002832',
        '9FF' => 'E02002832',
        '9FG' => 'E02005336',
        '9FH' => 'E02002832',
        '9FJ' => 'E02002832',
        '9FL' => 'E02002832',
        '9FN' => 'E02002832',
        '9FP' => 'E02005336',
        '9FQ' => 'E02002832',
        '9FR' => 'E02002832',
        '9FS' => 'E02002832',
        '9FT' => 'E02002832',
        '9FU' => 'E02002832',
        '9FW' => 'E02002832',
        '9FX' => 'E02005336',
        '9FY' => 'E02002832',
        '9FZ' => 'E02002832',
        '9GA' => 'E02002832',
        '9GB' => 'E02002832',
        '9GD' => 'E02002832',
        '9GE' => 'E02002832',
        '9GF' => 'E02005336',
        '9GG' => 'E02002832',
        '9GH' => 'E02002832',
        '9GJ' => 'E02002832',
        '9GL' => 'E02002832',
        '9GN' => 'E02002832',
        '9GP' => 'E02002832',
        '9GQ' => 'E02002832',
        '9GR' => 'E02005336',
        '9GS' => 'E02005336',
        '9GT' => 'E02005336',
        '9GU' => 'E02005336',
        '9GW' => 'E02005336',
        '9GX' => 'E02002832',
        '9GY' => 'E02002832',
        '9GZ' => 'E02005336',
        '9HA' => 'E02002832',
        '9HB' => 'E02002832',
        '9HD' => 'E02002832',
        '9HE' => 'E02002832',
        '9HF' => 'E02002832',
        '9HG' => 'E02005336',
        '9HH' => 'E02002832',
        '9HJ' => 'E02005336',
        '9HL' => 'E02005336',
        '9HN' => 'E02005336',
        '9HP' => 'E02002832',
        '9HQ' => 'E02005336',
        '9HR' => 'E02005336',
        '9HS' => 'E02002832',
        '9HT' => 'E02005336',
        '9HU' => 'E02005336',
        '9HW' => 'E02005336',
        '9HX' => 'E02005336',
        '9HY' => 'E02005336',
        '9HZ' => 'E02005336',
        '9JA' => 'E02005336',
        '9JB' => 'E02005336',
        '9JD' => 'E02005336',
        '9JE' => 'E02005336',
        '9JF' => 'E02005336',
        '9JG' => 'E02005336',
        '9JH' => 'E02005336',
        '9JJ' => 'E02005336',
        '9JL' => 'E02005336',
        '9JN' => 'E02005336',
        '9JP' => 'E02005336',
        '9JQ' => 'E02005336',
        '9JR' => 'E02005336',
        '9JS' => 'E02005336',
        '9JT' => 'E02005336',
        '9JU' => 'E02005336',
        '9JW' => 'E02005336',
        '9JX' => 'E02005336',
        '9JY' => 'E02005336',
        '9JZ' => 'E02005336',
        '9LA' => 'E02005336',
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