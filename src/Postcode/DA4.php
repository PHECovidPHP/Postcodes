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
final class DA4
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02005091',
        '0AB' => 'E02005091',
        '0AD' => 'E02005091',
        '0AE' => 'E02005091',
        '0AF' => 'E02005091',
        '0AG' => 'E02005091',
        '0AH' => 'E02005091',
        '0AJ' => 'E02005091',
        '0AL' => 'E02005091',
        '0AN' => 'E02005091',
        '0AP' => 'E02005091',
        '0AQ' => 'E02005091',
        '0AR' => 'E02005091',
        '0AS' => 'E02005091',
        '0AT' => 'E02005091',
        '0AU' => 'E02005091',
        '0AW' => 'E02005091',
        '0AX' => 'E02005091',
        '0AY' => 'E02005091',
        '0AZ' => 'E02005091',
        '0BA' => 'E02005091',
        '0BB' => 'E02005091',
        '0BD' => 'E02005091',
        '0BE' => 'E02005091',
        '0BF' => 'E02005091',
        '0BG' => 'E02005091',
        '0BH' => 'E02005091',
        '0BJ' => 'E02005091',
        '0BL' => 'E02005091',
        '0BN' => 'E02005091',
        '0BP' => 'E02005091',
        '0BQ' => 'E02005091',
        '0BS' => 'E02005091',
        '0BT' => 'E02005091',
        '0BW' => 'E02005091',
        '0BX' => 'E02005091',
        '0BY' => 'E02005091',
        '0BZ' => 'E02005091',
        '0DA' => 'E02005091',
        '0DB' => 'E02005091',
        '0DD' => 'E02005091',
        '0DE' => 'E02005091',
        '0DF' => 'E02005091',
        '0DG' => 'E02005091',
        '0DH' => 'E02005091',
        '0DJ' => 'E02005091',
        '0DL' => 'E02005091',
        '0DN' => 'E02005091',
        '0DP' => 'E02005091',
        '0DQ' => 'E02005091',
        '0DR' => 'E02005091',
        '0DS' => 'E02005091',
        '0DT' => 'E02005091',
        '0DU' => 'E02005091',
        '0DW' => 'E02005091',
        '0DX' => 'E02005091',
        '0DY' => 'E02005091',
        '0DZ' => 'E02005091',
        '0EA' => 'E02005091',
        '0EB' => 'E02005091',
        '0EE' => 'E02005030',
        '0EH' => 'E02005091',
        '0EJ' => 'E02005091',
        '0EL' => 'E02005091',
        '0EN' => 'E02005091',
        '0EP' => 'E02005091',
        '0ER' => 'E02005091',
        '0ES' => 'E02005091',
        '0ET' => 'E02005091',
        '0EU' => 'E02005091',
        '0EW' => 'E02005091',
        '0EX' => 'E02005091',
        '0EY' => 'E02005091',
        '0EZ' => 'E02005091',
        '0HA' => 'E02005091',
        '0HB' => 'E02005091',
        '0HD' => 'E02005091',
        '0HE' => 'E02005091',
        '0HF' => 'E02005091',
        '0HG' => 'E02005091',
        '0HH' => 'E02005091',
        '0HJ' => 'E02005091',
        '0HL' => 'E02005030',
        '0HN' => 'E02005091',
        '0HP' => 'E02005091',
        '0HR' => 'E02005091',
        '0HS' => 'E02005091',
        '0HT' => 'E02005091',
        '0HU' => 'E02005091',
        '0HW' => 'E02005091',
        '0HX' => 'E02005091',
        '0HY' => 'E02005091',
        '0HZ' => 'E02005091',
        '0JA' => 'E02005091',
        '0JB' => 'E02005091',
        '0JD' => 'E02005091',
        '0JE' => 'E02005091',
        '0JF' => 'E02005091',
        '0JG' => 'E02005091',
        '0JH' => 'E02005091',
        '0JJ' => 'E02005091',
        '0JL' => 'E02005091',
        '0JN' => 'E02005091',
        '0JP' => 'E02005091',
        '0JQ' => 'E02005091',
        '0JR' => 'E02005091',
        '0JS' => 'E02005091',
        '0JT' => 'E02005091',
        '0JU' => 'E02005091',
        '0JW' => 'E02005091',
        '0JX' => 'E02005091',
        '0JY' => 'E02005091',
        '0JZ' => 'E02005091',
        '0LA' => 'E02005091',
        '0LB' => 'E02005091',
        '0LD' => 'E02005091',
        '0LE' => 'E02005091',
        '0LF' => 'E02005091',
        '0LG' => 'E02005030',
        '0LH' => 'E02005091',
        '0LJ' => 'E02005030',
        '0LL' => 'E02005030',
        '0LN' => 'E02005091',
        '0WA' => 'E02005030',
        '0WB' => 'E02005030',
        '0WD' => 'E02005030',
        '0WE' => 'E02005030',
        '0WF' => 'E02005030',
        '0WQ' => 'E02005030',
        '0WS' => 'E02005030',
        '0ZT' => 'E02005091',
        '0ZU' => 'E02005091',
        '0ZW' => 'E02005030',
        '0ZX' => 'E02005091',
        '0ZY' => 'E02005091',
        '0ZZ' => 'E02005030',
        '4ER' => 'E02005039',
        '9AA' => 'E02005039',
        '9AB' => 'E02005039',
        '9AD' => 'E02005091',
        '9AE' => 'E02005091',
        '9AF' => 'E02005091',
        '9AG' => 'E02005091',
        '9AH' => 'E02005091',
        '9AJ' => 'E02005091',
        '9AL' => 'E02005091',
        '9AN' => 'E02005091',
        '9AP' => 'E02005091',
        '9AQ' => 'E02005091',
        '9AR' => 'E02005091',
        '9AS' => 'E02005091',
        '9AT' => 'E02005091',
        '9AU' => 'E02005091',
        '9AW' => 'E02005091',
        '9AX' => 'E02005091',
        '9AY' => 'E02005091',
        '9AZ' => 'E02005091',
        '9BA' => 'E02005091',
        '9BB' => 'E02005039',
        '9BD' => 'E02005091',
        '9BE' => 'E02005039',
        '9BF' => 'E02005091',
        '9BG' => 'E02005091',
        '9BH' => 'E02005091',
        '9BJ' => 'E02005091',
        '9BL' => 'E02005039',
        '9BN' => 'E02005091',
        '9BP' => 'E02005091',
        '9BQ' => 'E02005091',
        '9BS' => 'E02005091',
        '9BT' => 'E02005039',
        '9BU' => 'E02005091',
        '9BW' => 'E02005091',
        '9BX' => 'E02005091',
        '9BY' => 'E02005091',
        '9BZ' => 'E02005091',
        '9DA' => 'E02005091',
        '9DB' => 'E02005091',
        '9DD' => 'E02005091',
        '9DE' => 'E02005091',
        '9DF' => 'E02005091',
        '9DG' => 'E02005091',
        '9DH' => 'E02005091',
        '9DJ' => 'E02005091',
        '9DL' => 'E02005091',
        '9DN' => 'E02005091',
        '9DP' => 'E02005091',
        '9DQ' => 'E02005091',
        '9DR' => 'E02005091',
        '9DS' => 'E02005091',
        '9DT' => 'E02005091',
        '9DU' => 'E02005091',
        '9DW' => 'E02005091',
        '9DX' => 'E02005091',
        '9DY' => 'E02005039',
        '9DZ' => 'E02005039',
        '9EA' => 'E02005039',
        '9EB' => 'E02005039',
        '9ED' => 'E02005039',
        '9EE' => 'E02005039',
        '9EF' => 'E02005039',
        '9EG' => 'E02005039',
        '9EH' => 'E02005039',
        '9EJ' => 'E02005039',
        '9EL' => 'E02005039',
        '9EN' => 'E02005039',
        '9EP' => 'E02005039',
        '9EQ' => 'E02005039',
        '9ER' => 'E02005039',
        '9ES' => 'E02005039',
        '9ET' => 'E02005039',
        '9EU' => 'E02005039',
        '9EW' => 'E02005039',
        '9EX' => 'E02005039',
        '9EY' => 'E02005039',
        '9EZ' => 'E02005039',
        '9FA' => 'E02005091',
        '9FE' => 'E02005091',
        '9FF' => 'E02005091',
        '9FQ' => 'E02005030',
        '9GA' => 'E02005091',
        '9GB' => 'E02005039',
        '9GR' => 'E02005091',
        '9HA' => 'E02005038',
        '9HB' => 'E02005038',
        '9HD' => 'E02005038',
        '9HE' => 'E02005038',
        '9HF' => 'E02005038',
        '9HG' => 'E02005038',
        '9HH' => 'E02005038',
        '9HJ' => 'E02005039',
        '9HL' => 'E02005039',
        '9HN' => 'E02005039',
        '9HP' => 'E02005039',
        '9HQ' => 'E02005039',
        '9HR' => 'E02005039',
        '9HS' => 'E02005039',
        '9HT' => 'E02005091',
        '9HU' => 'E02005091',
        '9HW' => 'E02005039',
        '9HX' => 'E02005091',
        '9HY' => 'E02005039',
        '9HZ' => 'E02005039',
        '9JA' => 'E02005039',
        '9JB' => 'E02005039',
        '9JD' => 'E02005038',
        '9JE' => 'E02005091',
        '9JF' => 'E02005091',
        '9JG' => 'E02005091',
        '9JH' => 'E02005091',
        '9JJ' => 'E02005091',
        '9JL' => 'E02005091',
        '9JN' => 'E02005091',
        '9JP' => 'E02005091',
        '9JQ' => 'E02005091',
        '9JR' => 'E02005091',
        '9JS' => 'E02005091',
        '9JT' => 'E02005091',
        '9JU' => 'E02005091',
        '9JW' => 'E02005091',
        '9JX' => 'E02005091',
        '9JY' => 'E02005091',
        '9JZ' => 'E02005091',
        '9LA' => 'E02005091',
        '9LB' => 'E02005039',
        '9LD' => 'E02005039',
        '9LE' => 'E02005091',
        '9LF' => 'E02005091',
        '9LG' => 'E02005091',
        '9LJ' => 'E02005091',
        '9LL' => 'E02005091',
        '9LN' => 'E02005091',
        '9LP' => 'E02005091',
        '9LQ' => 'E02005091',
        '9LR' => 'E02005091',
        '9LS' => 'E02005091',
        '9LT' => 'E02005091',
        '9LW' => 'E02005091',
        '9LX' => 'E02005091',
        '9LY' => 'E02005091',
        '9LZ' => 'E02005091',
        '9NA' => 'E02005091',
        '9NB' => 'E02005091',
        '9ND' => 'E02005091',
        '9NT' => 'E02005091',
        '9NU' => 'E02005091',
        '9NZ' => 'E02005091',
        '9RA' => 'E02005091',
        '9RB' => 'E02005091',
        '9UA' => 'E02005091',
        '9UB' => 'E02005091',
        '9UD' => 'E02005091',
        '9WB' => 'E02005091',
        '9XQ' => 'E02005030',
        '9YB' => 'E02005091',
        '9YQ' => 'E02005030',
        '9ZQ' => 'E02005030',
        '9ZR' => 'E02005030',
        '9ZS' => 'E02005030',
        '9ZT' => 'E02005030',
        '9ZU' => 'E02005091',
        '9ZW' => 'E02005091',
        '9ZX' => 'E02005091',
        '9ZY' => 'E02005091',
        '9ZZ' => 'E02005030',
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
