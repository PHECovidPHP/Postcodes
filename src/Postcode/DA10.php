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
final class DA10
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02005029',
        '0AB' => 'E02005029',
        '0AD' => 'E02005029',
        '0AE' => 'E02005029',
        '0AF' => 'E02005029',
        '0AG' => 'E02005029',
        '0AH' => 'E02005029',
        '0AJ' => 'E02005029',
        '0AL' => 'E02005029',
        '0AN' => 'E02005029',
        '0AP' => 'E02005029',
        '0AQ' => 'E02005029',
        '0AR' => 'E02005029',
        '0AS' => 'E02005031',
        '0AT' => 'E02005029',
        '0AU' => 'E02005031',
        '0AW' => 'E02005029',
        '0AX' => 'E02005031',
        '0AY' => 'E02005031',
        '0AZ' => 'E02005031',
        '0BA' => 'E02005031',
        '0BB' => 'E02005031',
        '0BD' => 'E02005031',
        '0BE' => 'E02005029',
        '0BF' => 'E02005031',
        '0BG' => 'E02005031',
        '0BH' => 'E02005031',
        '0BJ' => 'E02005031',
        '0BL' => 'E02005031',
        '0BN' => 'E02005031',
        '0BP' => 'E02005031',
        '0BQ' => 'E02005031',
        '0BS' => 'E02005031',
        '0BT' => 'E02005031',
        '0BU' => 'E02005031',
        '0BW' => 'E02005031',
        '0BX' => 'E02005031',
        '0BY' => 'E02005031',
        '0BZ' => 'E02005031',
        '0DA' => 'E02005029',
        '0DB' => 'E02005031',
        '0DD' => 'E02005029',
        '0DE' => 'E02005031',
        '0DF' => 'E02005029',
        '0DG' => 'E02005031',
        '0DH' => 'E02005031',
        '0DJ' => 'E02005031',
        '0DL' => 'E02005031',
        '0DN' => 'E02005031',
        '0DP' => 'E02005031',
        '0DQ' => 'E02005031',
        '0DR' => 'E02005031',
        '0DS' => 'E02005031',
        '0DT' => 'E02005031',
        '0DU' => 'E02005031',
        '0DW' => 'E02005031',
        '0DX' => 'E02005031',
        '0DY' => 'E02005031',
        '0DZ' => 'E02005031',
        '0EA' => 'E02005031',
        '0EB' => 'E02005031',
        '0ED' => 'E02005031',
        '0EE' => 'E02005031',
        '0EF' => 'E02005031',
        '0EG' => 'E02005031',
        '0EH' => 'E02005031',
        '0EJ' => 'E02005031',
        '0EL' => 'E02005031',
        '0EN' => 'E02005031',
        '0EP' => 'E02005031',
        '0EQ' => 'E02005031',
        '0ER' => 'E02005031',
        '0ES' => 'E02005031',
        '0ET' => 'E02005031',
        '0EU' => 'E02005031',
        '0EW' => 'E02005031',
        '0EX' => 'E02005031',
        '0EY' => 'E02005031',
        '0EZ' => 'E02005031',
        '0FA' => 'E02005031',
        '0GA' => 'E02005029',
        '0HA' => 'E02005031',
        '0HB' => 'E02005031',
        '0HD' => 'E02005031',
        '0HE' => 'E02005031',
        '0HF' => 'E02005029',
        '0HG' => 'E02005029',
        '0HH' => 'E02005031',
        '0HJ' => 'E02005031',
        '0HL' => 'E02005031',
        '0HN' => 'E02005031',
        '0HP' => 'E02005031',
        '0HQ' => 'E02005029',
        '0HR' => 'E02005031',
        '0HS' => 'E02005031',
        '0HT' => 'E02005029',
        '0HU' => 'E02005029',
        '0HW' => 'E02005031',
        '0HX' => 'E02005029',
        '0HY' => 'E02005029',
        '0HZ' => 'E02005029',
        '0JA' => 'E02005029',
        '0JB' => 'E02005031',
        '0JD' => 'E02005031',
        '0JE' => 'E02005031',
        '0JF' => 'E02005031',
        '0JG' => 'E02005031',
        '0JH' => 'E02005031',
        '0JJ' => 'E02005031',
        '0JL' => 'E02005031',
        '0JN' => 'E02005031',
        '0JP' => 'E02005031',
        '0JQ' => 'E02005031',
        '0JR' => 'E02005031',
        '0JS' => 'E02005031',
        '0JT' => 'E02005031',
        '0JU' => 'E02005031',
        '0JW' => 'E02005031',
        '0JY' => 'E02005031',
        '0JZ' => 'E02005031',
        '0LA' => 'E02005029',
        '0LB' => 'E02005029',
        '0LD' => 'E02005031',
        '0LE' => 'E02005029',
        '0LF' => 'E02005029',
        '0LG' => 'E02005029',
        '0LH' => 'E02005029',
        '0LJ' => 'E02005029',
        '0LL' => 'E02005029',
        '0LN' => 'E02005031',
        '0LP' => 'E02005031',
        '0LQ' => 'E02005029',
        '0LR' => 'E02005031',
        '0LS' => 'E02005029',
        '0LT' => 'E02005031',
        '0LU' => 'E02005031',
        '0LW' => 'E02005029',
        '0LX' => 'E02005029',
        '0LY' => 'E02005029',
        '0LZ' => 'E02005029',
        '0NA' => 'E02005029',
        '0NB' => 'E02005031',
        '0ND' => 'E02005029',
        '0NE' => 'E02005029',
        '0NF' => 'E02005031',
        '0NG' => 'E02005031',
        '0NH' => 'E02005031',
        '0NJ' => 'E02005031',
        '0NL' => 'E02005031',
        '0NN' => 'E02005029',
        '0NX' => 'E02005031',
        '0PA' => 'E02005031',
        '0PB' => 'E02005031',
        '0PD' => 'E02005029',
        '0PP' => 'E02005029',
        '0WA' => 'E02005029',
        '0WB' => 'E02005029',
        '0YA' => 'E02005031',
        '0YB' => 'E02005030',
        '0YQ' => 'E02005029',
        '0YZ' => 'E02005030',
        '0ZQ' => 'E02005029',
        '0ZR' => 'E02005029',
        '0ZS' => 'E02005029',
        '0ZT' => 'E02005029',
        '0ZU' => 'E02005029',
        '0ZW' => 'E02005031',
        '0ZX' => 'E02005031',
        '0ZY' => 'E02005029',
        '0ZZ' => 'E02005029',
        '1AA' => 'E02005029',
        '1AB' => 'E02005029',
        '1AD' => 'E02005029',
        '1AE' => 'E02005029',
        '1AF' => 'E02005029',
        '1AG' => 'E02005029',
        '1AH' => 'E02005029',
        '1AJ' => 'E02005029',
        '1AL' => 'E02005029',
        '1AN' => 'E02005029',
        '1AP' => 'E02005029',
        '1AQ' => 'E02005029',
        '1AR' => 'E02005029',
        '1AS' => 'E02005029',
        '1AT' => 'E02005029',
        '1AU' => 'E02005029',
        '1AW' => 'E02005029',
        '1AX' => 'E02005029',
        '1AY' => 'E02005029',
        '1AZ' => 'E02005029',
        '1BA' => 'E02005029',
        '1BB' => 'E02005029',
        '1BD' => 'E02005029',
        '1BE' => 'E02005029',
        '1BF' => 'E02005029',
        '1BG' => 'E02005029',
        '1BH' => 'E02005029',
        '1BJ' => 'E02005029',
        '1BL' => 'E02005029',
        '1BN' => 'E02005029',
        '1BP' => 'E02005029',
        '1BQ' => 'E02005029',
        '1BR' => 'E02005029',
        '1BS' => 'E02005029',
        '1BT' => 'E02005029',
        '1BU' => 'E02005029',
        '1BW' => 'E02005029',
        '1BX' => 'E02005029',
        '1BY' => 'E02005029',
        '1BZ' => 'E02005029',
        '1DA' => 'E02005029',
        '1DB' => 'E02005029',
        '1DD' => 'E02005029',
        '1DE' => 'E02005029',
        '1DF' => 'E02005029',
        '1DG' => 'E02005029',
        '1DH' => 'E02005029',
        '1DJ' => 'E02005029',
        '1DL' => 'E02005029',
        '1DN' => 'E02005029',
        '1DP' => 'E02005029',
        '1DQ' => 'E02005029',
        '1DR' => 'E02005029',
        '1DS' => 'E02005029',
        '1DT' => 'E02005029',
        '1DU' => 'E02005029',
        '1DW' => 'E02005029',
        '1DX' => 'E02005029',
        '1DZ' => 'E02005029',
        '1EA' => 'E02005029',
        '1EB' => 'E02005029',
        '1ED' => 'E02005029',
        '1EE' => 'E02005029',
        '1EG' => 'E02005029',
        '1EH' => 'E02005029',
        '1EJ' => 'E02005029',
        '1EL' => 'E02005029',
        '1EN' => 'E02005029',
        '1ET' => 'E02005029',
        '1EU' => 'E02005029',
        '1EX' => 'E02005029',
        '9AA' => 'E02005029',
        '9AB' => 'E02005029',
        '9AD' => 'E02005029',
        '9AE' => 'E02005029',
        '9AF' => 'E02005029',
        '9AG' => 'E02005029',
        '9AH' => 'E02005029',
        '9AJ' => 'E02005029',
        '9AL' => 'E02005029',
        '9AN' => 'E02005029',
        '9AP' => 'E02005029',
        '9AQ' => 'E02005029',
        '9AR' => 'E02005029',
        '9AS' => 'E02005029',
        '9AT' => 'E02005029',
        '9AW' => 'E02005029',
        '9AX' => 'E02005029',
        '9AY' => 'E02005029',
        '9AZ' => 'E02005029',
        '9BA' => 'E02005029',
        '9BB' => 'E02005029',
        '9BD' => 'E02005029',
        '9BE' => 'E02005030',
        '9BF' => 'E02005029',
        '9BG' => 'E02005029',
        '9BH' => 'E02005030',
        '9BJ' => 'E02005029',
        '9BL' => 'E02005030',
        '9BN' => 'E02005029',
        '9BP' => 'E02005029',
        '9BQ' => 'E02005029',
        '9BR' => 'E02005030',
        '9BS' => 'E02005029',
        '9BT' => 'E02005029',
        '9BU' => 'E02005030',
        '9BW' => 'E02005029',
        '9BX' => 'E02005030',
        '9BY' => 'E02005030',
        '9BZ' => 'E02005030',
        '9DB' => 'E02005030',
        '9DD' => 'E02005030',
        '9DE' => 'E02005030',
        '9DG' => 'E02005030',
        '9DH' => 'E02005030',
        '9DL' => 'E02005030',
        '9DN' => 'E02005030',
        '9DP' => 'E02005030',
        '9DQ' => 'E02005030',
        '9HD' => 'E02005030',
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
