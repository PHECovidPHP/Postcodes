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
final class ST55
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '9AA' => 'E02006167',
        '9AB' => 'E02006167',
        '9AD' => 'E02006167',
        '9AE' => 'E02006167',
        '9AF' => 'E02006167',
        '9AG' => 'E02006167',
        '9AH' => 'E02006167',
        '9AJ' => 'E02006167',
        '9AL' => 'E02006167',
        '9AN' => 'E02006167',
        '9AP' => 'E02006167',
        '9AQ' => 'E02006167',
        '9AR' => 'E02006167',
        '9AS' => 'E02006167',
        '9AT' => 'E02006167',
        '9AU' => 'E02006167',
        '9AW' => 'E02006167',
        '9AX' => 'E02006167',
        '9AY' => 'E02006167',
        '9AZ' => 'E02006167',
        '9BA' => 'E02006167',
        '9BB' => 'E02006167',
        '9BD' => 'E02006167',
        '9BE' => 'E02006167',
        '9BF' => 'E02006167',
        '9BG' => 'E02006167',
        '9BH' => 'E02006167',
        '9BJ' => 'E02006167',
        '9BL' => 'E02006167',
        '9BN' => 'E02006167',
        '9BP' => 'E02006167',
        '9BQ' => 'E02006167',
        '9BR' => 'E02006167',
        '9BS' => 'E02006167',
        '9BT' => 'E02006167',
        '9BU' => 'E02006167',
        '9BW' => 'E02006167',
        '9BX' => 'E02006167',
        '9BY' => 'E02006167',
        '9BZ' => 'E02006167',
        '9DA' => 'E02006167',
        '9DB' => 'E02006167',
        '9DD' => 'E02006167',
        '9DE' => 'E02006167',
        '9DF' => 'E02006167',
        '9DG' => 'E02006167',
        '9DH' => 'E02006167',
        '9DJ' => 'E02006167',
        '9DL' => 'E02006167',
        '9DN' => 'E02006167',
        '9DP' => 'E02006167',
        '9DQ' => 'E02006167',
        '9DR' => 'E02006167',
        '9DS' => 'E02006167',
        '9DT' => 'E02006167',
        '9DU' => 'E02006167',
        '9DW' => 'E02006167',
        '9DX' => 'E02006167',
        '9DY' => 'E02006167',
        '9DZ' => 'E02006167',
        '9EA' => 'E02006167',
        '9EB' => 'E02006167',
        '9ED' => 'E02006167',
        '9EE' => 'E02006167',
        '9EF' => 'E02006167',
        '9EG' => 'E02006167',
        '9EH' => 'E02006167',
        '9EJ' => 'E02006167',
        '9EL' => 'E02006167',
        '9EN' => 'E02006167',
        '9EP' => 'E02006167',
        '9EQ' => 'E02006167',
        '9ER' => 'E02006167',
        '9ES' => 'E02006167',
        '9ET' => 'E02006167',
        '9EU' => 'E02006167',
        '9EW' => 'E02006167',
        '9EX' => 'E02006167',
        '9EY' => 'E02006167',
        '9EZ' => 'E02006167',
        '9FA' => 'E02006167',
        '9FB' => 'E02006167',
        '9FD' => 'E02006167',
        '9FE' => 'E02006167',
        '9FF' => 'E02006167',
        '9FG' => 'E02006167',
        '9FH' => 'E02006167',
        '9FJ' => 'E02006167',
        '9FL' => 'E02006167',
        '9FN' => 'E02006167',
        '9FP' => 'E02006167',
        '9FQ' => 'E02006167',
        '9FR' => 'E02006167',
        '9FS' => 'E02006167',
        '9FT' => 'E02006167',
        '9FU' => 'E02006167',
        '9FW' => 'E02006167',
        '9FY' => 'E02006167',
        '9FZ' => 'E02006167',
        '9GA' => 'E02006167',
        '9GB' => 'E02006167',
        '9GD' => 'E02006167',
        '9GE' => 'E02006167',
        '9GF' => 'E02006167',
        '9GG' => 'E02006167',
        '9GH' => 'E02006167',
        '9GJ' => 'E02006167',
        '9GL' => 'E02006167',
        '9GN' => 'E02006167',
        '9GP' => 'E02006167',
        '9GQ' => 'E02006167',
        '9GR' => 'E02006167',
        '9GT' => 'E02006167',
        '9GU' => 'E02006167',
        '9GW' => 'E02006167',
        '9GX' => 'E02006167',
        '9GY' => 'E02006167',
        '9GZ' => 'E02006167',
        '9HA' => 'E02006167',
        '9HB' => 'E02006167',
        '9HD' => 'E02006167',
        '9HE' => 'E02006167',
        '9HF' => 'E02006167',
        '9HG' => 'E02006167',
        '9HH' => 'E02006167',
        '9HJ' => 'E02006167',
        '9HL' => 'E02006167',
        '9HN' => 'E02006167',
        '9HP' => 'E02006167',
        '9HQ' => 'E02006167',
        '9HR' => 'E02006167',
        '9HT' => 'E02006167',
        '9HU' => 'E02006167',
        '9HW' => 'E02006167',
        '9HX' => 'E02006167',
        '9HY' => 'E02006167',
        '9HZ' => 'E02006167',
        '9JA' => 'E02006167',
        '9JB' => 'E02006167',
        '9JD' => 'E02006167',
        '9JE' => 'E02006167',
        '9JF' => 'E02006167',
        '9JG' => 'E02006167',
        '9JH' => 'E02006167',
        '9SA' => 'E02006168',
        '9SB' => 'E02006168',
        '9SD' => 'E02006168',
        '9SE' => 'E02006168',
        '9SF' => 'E02006168',
        '9SG' => 'E02006168',
        '9SH' => 'E02006168',
        '9SJ' => 'E02006168',
        '9SL' => 'E02006168',
        '9SN' => 'E02006168',
        '9SP' => 'E02006168',
        '9SQ' => 'E02006168',
        '9SR' => 'E02006168',
        '9SS' => 'E02006168',
        '9ST' => 'E02006168',
        '9SU' => 'E02006168',
        '9SW' => 'E02006168',
        '9SX' => 'E02006168',
        '9SY' => 'E02006168',
        '9SZ' => 'E02006168',
        '9TA' => 'E02006168',
        '9TB' => 'E02006168',
        '9TD' => 'E02006168',
        '9TE' => 'E02006168',
        '9TF' => 'E02006168',
        '9ZY' => 'E02006168',
        '9ZZ' => 'E02006168',
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
