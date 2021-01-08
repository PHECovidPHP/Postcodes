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
final class GL9
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02003113',
        '1AB' => 'E02003113',
        '1AD' => 'E02003113',
        '1AE' => 'E02003113',
        '1AF' => 'E02003113',
        '1AG' => 'E02003113',
        '1AH' => 'E02003113',
        '1AJ' => 'E02003113',
        '1AL' => 'E02003113',
        '1AN' => 'E02003113',
        '1AP' => 'E02003113',
        '1AQ' => 'E02003113',
        '1AR' => 'E02003113',
        '1AS' => 'E02003113',
        '1AT' => 'E02003113',
        '1AU' => 'E02003113',
        '1AW' => 'E02003113',
        '1AX' => 'E02003113',
        '1AY' => 'E02003113',
        '1AZ' => 'E02003113',
        '1BA' => 'E02003113',
        '1BB' => 'E02003113',
        '1BD' => 'E02003113',
        '1BE' => 'E02003113',
        '1BG' => 'E02003113',
        '1BH' => 'E02003113',
        '1BJ' => 'E02003113',
        '1BL' => 'E02003113',
        '1BN' => 'E02003113',
        '1BP' => 'E02003113',
        '1BQ' => 'E02003113',
        '1BS' => 'E02003113',
        '1BT' => 'E02003113',
        '1BU' => 'E02003113',
        '1BW' => 'E02003113',
        '1BX' => 'E02003113',
        '1BY' => 'E02003113',
        '1BZ' => 'E02003113',
        '1DA' => 'E02004665',
        '1DB' => 'E02003113',
        '1DD' => 'E02003113',
        '1DE' => 'E02003113',
        '1DF' => 'E02003113',
        '1DG' => 'E02003113',
        '1DH' => 'E02003113',
        '1DJ' => 'E02003113',
        '1DL' => 'E02003113',
        '1DN' => 'E02006648',
        '1DP' => 'E02004625',
        '1DQ' => 'E02003113',
        '1DR' => 'E02004625',
        '1DS' => 'E02004625',
        '1DT' => 'E02004625',
        '1DU' => 'E02004625',
        '1DW' => 'E02006648',
        '1DX' => 'E02004625',
        '1DY' => 'E02004625',
        '1DZ' => 'E02004625',
        '1EA' => 'E02004625',
        '1EB' => 'E02004625',
        '1ED' => 'E02004625',
        '1EE' => 'E02003113',
        '1EF' => 'E02003113',
        '1EG' => 'E02003113',
        '1EH' => 'E02003113',
        '1EJ' => 'E02003113',
        '1EL' => 'E02003113',
        '1EN' => 'E02003113',
        '1EP' => 'E02003113',
        '1EQ' => 'E02003113',
        '1ER' => 'E02003113',
        '1ES' => 'E02003113',
        '1ET' => 'E02003113',
        '1EU' => 'E02003113',
        '1EW' => 'E02003113',
        '1EX' => 'E02003113',
        '1EY' => 'E02003113',
        '1EZ' => 'E02003113',
        '1FB' => 'E02003113',
        '1GA' => 'E02003113',
        '1GJ' => 'E02003113',
        '1HA' => 'E02003113',
        '1HB' => 'E02003113',
        '1HD' => 'E02003113',
        '1HE' => 'E02003113',
        '1HF' => 'E02003113',
        '1HG' => 'E02003113',
        '1HH' => 'E02003113',
        '1HJ' => 'E02003113',
        '1HL' => 'E02003113',
        '1HN' => 'E02003113',
        '1HP' => 'E02003113',
        '1HQ' => 'E02003113',
        '1HR' => 'E02003113',
        '1HS' => 'E02003113',
        '1HT' => 'E02003113',
        '1HU' => 'E02003113',
        '1HW' => 'E02003113',
        '1HX' => 'E02003113',
        '1HY' => 'E02003113',
        '1HZ' => 'E02003113',
        '1JA' => 'E02003113',
        '1JB' => 'E02003113',
        '1JD' => 'E02003113',
        '1JE' => 'E02003113',
        '1JF' => 'E02003113',
        '1JG' => 'E02003113',
        '1JH' => 'E02003113',
        '1JJ' => 'E02003113',
        '1JL' => 'E02003113',
        '1JN' => 'E02003113',
        '1JP' => 'E02003113',
        '1JQ' => 'E02003113',
        '1JT' => 'E02003113',
        '1JW' => 'E02003113',
        '1LA' => 'E02004665',
        '1WW' => 'E02004625',
        '1WX' => 'E02004625',
        '1WY' => 'E02004625',
        '1WZ' => 'E02004625',
        '1YA' => 'E02004625',
        '1YB' => 'E02004625',
        '1YD' => 'E02003113',
        '1YE' => 'E02004625',
        '1YJ' => 'E02004625',
        '1ZR' => 'E02004625',
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
