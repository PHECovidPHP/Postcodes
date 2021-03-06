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
final class BH4
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AB' => 'E02006883',
        '0AD' => 'E02006883',
        '0AE' => 'E02006883',
        '0AF' => 'E02006883',
        '0AG' => 'E02006883',
        '0AH' => 'E02006883',
        '0AJ' => 'E02006883',
        '0AN' => 'E02006883',
        '0AP' => 'E02006883',
        '0AQ' => 'E02006883',
        '0AR' => 'E02006883',
        '0AS' => 'E02006883',
        '0AT' => 'E02006883',
        '0AU' => 'E02006883',
        '0AW' => 'E02006883',
        '0AX' => 'E02006883',
        '0AY' => 'E02006883',
        '0AZ' => 'E02006883',
        '0BA' => 'E02006883',
        '0BB' => 'E02006883',
        '0BD' => 'E02006883',
        '0BE' => 'E02006883',
        '0BF' => 'E02006883',
        '0BG' => 'E02006883',
        '0BH' => 'E02006883',
        '0BJ' => 'E02006883',
        '0BL' => 'E02006883',
        '0BN' => 'E02006883',
        '0BP' => 'E02006883',
        '0BQ' => 'E02006883',
        '0BR' => 'E02006883',
        '0BS' => 'E02006883',
        '0BT' => 'E02006883',
        '0BU' => 'E02006883',
        '0BW' => 'E02006883',
        '0BX' => 'E02006883',
        '0BY' => 'E02006883',
        '0BZ' => 'E02006883',
        '0DA' => 'E02006883',
        '0DB' => 'E02006883',
        '0DD' => 'E02006883',
        '0DE' => 'E02006883',
        '0DF' => 'E02006883',
        '0DG' => 'E02006883',
        '0DH' => 'E02006883',
        '0DJ' => 'E02006883',
        '0DL' => 'E02006883',
        '0DN' => 'E02006883',
        '0DP' => 'E02006883',
        '0DQ' => 'E02006883',
        '0DR' => 'E02006883',
        '0DS' => 'E02006883',
        '0DT' => 'E02006883',
        '0DU' => 'E02006883',
        '0DW' => 'E02006883',
        '0DX' => 'E02006883',
        '0DY' => 'E02006883',
        '0DZ' => 'E02006883',
        '0EA' => 'E02006883',
        '0EB' => 'E02006883',
        '0ED' => 'E02006883',
        '0EE' => 'E02006883',
        '0EF' => 'E02006883',
        '0EG' => 'E02006883',
        '0EH' => 'E02006883',
        '0EL' => 'E02006883',
        '0EN' => 'E02006883',
        '0EP' => 'E02006883',
        '0EQ' => 'E02006883',
        '0ER' => 'E02006883',
        '0ES' => 'E02006883',
        '0ET' => 'E02006883',
        '0EU' => 'E02006883',
        '0EW' => 'E02006883',
        '0EX' => 'E02006883',
        '0EY' => 'E02006883',
        '0FA' => 'E02006883',
        '0FB' => 'E02006883',
        '0FD' => 'E02006883',
        '0FE' => 'E02006883',
        '0FF' => 'E02006883',
        '0FG' => 'E02006883',
        '0FH' => 'E02006883',
        '0FJ' => 'E02006883',
        '0FL' => 'E02006883',
        '0FN' => 'E02006883',
        '0FP' => 'E02006883',
        '0FQ' => 'E02006883',
        '0FR' => 'E02006883',
        '0FS' => 'E02006883',
        '0FT' => 'E02006883',
        '0FU' => 'E02006883',
        '0FW' => 'E02006883',
        '0FX' => 'E02006883',
        '0FY' => 'E02006883',
        '0FZ' => 'E02006883',
        '0GA' => 'E02006883',
        '0GB' => 'E02006883',
        '0GD' => 'E02006883',
        '0GE' => 'E02006883',
        '0GF' => 'E02006883',
        '0GG' => 'E02006883',
        '0GH' => 'E02006883',
        '0GJ' => 'E02006883',
        '0GL' => 'E02006883',
        '0GN' => 'E02006883',
        '0GP' => 'E02006883',
        '0GQ' => 'E02006883',
        '0GR' => 'E02006883',
        '0GS' => 'E02006883',
        '0GT' => 'E02006883',
        '0GU' => 'E02006883',
        '0GW' => 'E02006883',
        '0GX' => 'E02006883',
        '0GZ' => 'E02006883',
        '0HA' => 'E02006883',
        '0HB' => 'E02006883',
        '0HD' => 'E02006883',
        '0HE' => 'E02006883',
        '0HF' => 'E02006883',
        '0HG' => 'E02006883',
        '0HH' => 'E02006883',
        '8AA' => 'E02006885',
        '8AB' => 'E02006885',
        '8AD' => 'E02006885',
        '8AE' => 'E02006885',
        '8AF' => 'E02006885',
        '8AG' => 'E02006885',
        '8AH' => 'E02006885',
        '8AJ' => 'E02006885',
        '8AL' => 'E02006885',
        '8AN' => 'E02006885',
        '8AP' => 'E02006885',
        '8AQ' => 'E02006885',
        '8AR' => 'E02006883',
        '8AS' => 'E02006885',
        '8AT' => 'E02006885',
        '8AU' => 'E02006883',
        '8AW' => 'E02006885',
        '8AX' => 'E02006885',
        '8AY' => 'E02006885',
        '8AZ' => 'E02006885',
        '8BA' => 'E02006885',
        '8BB' => 'E02006885',
        '8BD' => 'E02006885',
        '8BE' => 'E02006885',
        '8BG' => 'E02006885',
        '8BH' => 'E02006883',
        '8BJ' => 'E02006885',
        '8BL' => 'E02006885',
        '8BN' => 'E02006885',
        '8BP' => 'E02006883',
        '8BQ' => 'E02006885',
        '8BS' => 'E02006885',
        '8BT' => 'E02006885',
        '8BU' => 'E02006885',
        '8BW' => 'E02006883',
        '8BX' => 'E02006885',
        '8BY' => 'E02006885',
        '8BZ' => 'E02006885',
        '8DA' => 'E02006885',
        '8DB' => 'E02006885',
        '8DD' => 'E02006883',
        '8DE' => 'E02006883',
        '8DF' => 'E02006883',
        '8DG' => 'E02006885',
        '8DH' => 'E02006885',
        '8DJ' => 'E02006885',
        '8DL' => 'E02006885',
        '8DN' => 'E02006885',
        '8DP' => 'E02006885',
        '8DQ' => 'E02006885',
        '8DR' => 'E02006885',
        '8DS' => 'E02006883',
        '8DT' => 'E02006883',
        '8DU' => 'E02006883',
        '8DW' => 'E02006885',
        '8DX' => 'E02006883',
        '8DY' => 'E02006883',
        '8DZ' => 'E02006883',
        '8EA' => 'E02006883',
        '8EB' => 'E02006883',
        '8ED' => 'E02006883',
        '8EE' => 'E02006883',
        '8EF' => 'E02006883',
        '8EG' => 'E02006883',
        '8EH' => 'E02006885',
        '8EJ' => 'E02006883',
        '8EL' => 'E02006883',
        '8EN' => 'E02006885',
        '8EP' => 'E02006885',
        '8EQ' => 'E02006883',
        '8ER' => 'E02006883',
        '8ES' => 'E02006883',
        '8ET' => 'E02006883',
        '8EU' => 'E02006885',
        '8EW' => 'E02006885',
        '8EX' => 'E02006885',
        '8EY' => 'E02006883',
        '8EZ' => 'E02006885',
        '8HA' => 'E02006885',
        '8HB' => 'E02006885',
        '8HD' => 'E02006885',
        '8HE' => 'E02006885',
        '8HF' => 'E02006885',
        '8HG' => 'E02006885',
        '8HH' => 'E02006885',
        '8HJ' => 'E02006885',
        '8HL' => 'E02006885',
        '8HP' => 'E02006885',
        '8HQ' => 'E02006885',
        '8HR' => 'E02006885',
        '8HS' => 'E02006885',
        '8HT' => 'E02006885',
        '8HU' => 'E02006885',
        '8HW' => 'E02006885',
        '8HX' => 'E02006885',
        '8HY' => 'E02006885',
        '8HZ' => 'E02006885',
        '8JA' => 'E02006885',
        '8JB' => 'E02006885',
        '8JD' => 'E02006885',
        '8JE' => 'E02006885',
        '8JF' => 'E02006885',
        '8JG' => 'E02006885',
        '8JH' => 'E02006885',
        '8JJ' => 'E02006885',
        '8JL' => 'E02006885',
        '8JN' => 'E02006885',
        '8JP' => 'E02006885',
        '8JQ' => 'E02006885',
        '8JR' => 'E02006885',
        '8JS' => 'E02006885',
        '8JT' => 'E02006885',
        '8JW' => 'E02006885',
        '8QJ' => 'E02006885',
        '8WA' => 'E02006883',
        '8WB' => 'E02006883',
        '8WD' => 'E02006883',
        '8WE' => 'E02006883',
        '8WF' => 'E02006883',
        '8WG' => 'E02006883',
        '8WJ' => 'E02006883',
        '8WZ' => 'E02006883',
        '8XA' => 'E02006885',
        '8XJ' => 'E02006883',
        '8XL' => 'E02006883',
        '8XN' => 'E02006883',
        '8XQ' => 'E02006883',
        '8XS' => 'E02006883',
        '8XT' => 'E02006883',
        '8XU' => 'E02006883',
        '8XW' => 'E02006883',
        '8XX' => 'E02006883',
        '8XY' => 'E02006883',
        '8XZ' => 'E02006883',
        '8YA' => 'E02006885',
        '8YB' => 'E02006883',
        '8YD' => 'E02006883',
        '8YE' => 'E02006883',
        '8YF' => 'E02006883',
        '8YG' => 'E02006885',
        '8YH' => 'E02006883',
        '8YJ' => 'E02006885',
        '8YL' => 'E02006885',
        '8YN' => 'E02006883',
        '8YP' => 'E02006883',
        '8YQ' => 'E02006883',
        '8YR' => 'E02006885',
        '8YS' => 'E02006883',
        '8YT' => 'E02006885',
        '8YU' => 'E02006883',
        '8YW' => 'E02006885',
        '8YX' => 'E02006885',
        '8YY' => 'E02006883',
        '8YZ' => 'E02006883',
        '8ZA' => 'E02006883',
        '8ZB' => 'E02006883',
        '8ZD' => 'E02006885',
        '8ZE' => 'E02006885',
        '8ZF' => 'E02006883',
        '8ZG' => 'E02006883',
        '8ZH' => 'E02006883',
        '8ZJ' => 'E02006885',
        '8ZL' => 'E02006883',
        '8ZN' => 'E02006885',
        '8ZP' => 'E02006885',
        '8ZQ' => 'E02006885',
        '8ZR' => 'E02006883',
        '8ZS' => 'E02006885',
        '8ZT' => 'E02006885',
        '8ZU' => 'E02006883',
        '8ZW' => 'E02006885',
        '8ZX' => 'E02006883',
        '8ZY' => 'E02006885',
        '9AA' => 'E02006883',
        '9AB' => 'E02006883',
        '9AD' => 'E02006883',
        '9AE' => 'E02006883',
        '9AG' => 'E02006883',
        '9AH' => 'E02006883',
        '9AJ' => 'E02006883',
        '9AL' => 'E02006883',
        '9AN' => 'E02006885',
        '9AP' => 'E02006883',
        '9AQ' => 'E02006883',
        '9AR' => 'E02006883',
        '9AS' => 'E02006883',
        '9AT' => 'E02006883',
        '9AU' => 'E02006883',
        '9AW' => 'E02006883',
        '9AX' => 'E02006883',
        '9AY' => 'E02006883',
        '9AZ' => 'E02006883',
        '9BA' => 'E02006883',
        '9BB' => 'E02006883',
        '9BD' => 'E02006883',
        '9BE' => 'E02003202',
        '9BG' => 'E02006883',
        '9BH' => 'E02006883',
        '9BJ' => 'E02006883',
        '9BL' => 'E02006883',
        '9BN' => 'E02006883',
        '9BP' => 'E02006883',
        '9BQ' => 'E02006883',
        '9BS' => 'E02006883',
        '9BT' => 'E02006883',
        '9BU' => 'E02006883',
        '9BW' => 'E02006883',
        '9BX' => 'E02006883',
        '9BY' => 'E02006883',
        '9BZ' => 'E02006883',
        '9DA' => 'E02006883',
        '9DB' => 'E02006883',
        '9DD' => 'E02006883',
        '9DE' => 'E02006883',
        '9DF' => 'E02006883',
        '9DG' => 'E02006883',
        '9DH' => 'E02006883',
        '9DJ' => 'E02006883',
        '9DL' => 'E02006883',
        '9DN' => 'E02006883',
        '9DP' => 'E02006883',
        '9DQ' => 'E02006883',
        '9DR' => 'E02006883',
        '9DS' => 'E02006883',
        '9DT' => 'E02006883',
        '9DU' => 'E02006883',
        '9DW' => 'E02006883',
        '9DX' => 'E02006883',
        '9DY' => 'E02006883',
        '9DZ' => 'E02006883',
        '9EA' => 'E02006883',
        '9EB' => 'E02006883',
        '9ED' => 'E02006883',
        '9EE' => 'E02006883',
        '9EF' => 'E02006883',
        '9EG' => 'E02006883',
        '9EH' => 'E02006883',
        '9EJ' => 'E02006883',
        '9EL' => 'E02006883',
        '9EN' => 'E02006883',
        '9EP' => 'E02006883',
        '9EQ' => 'E02006883',
        '9ER' => 'E02006883',
        '9ES' => 'E02006883',
        '9ET' => 'E02006883',
        '9EU' => 'E02006883',
        '9EY' => 'E02003202',
        '9EZ' => 'E02003202',
        '9FW' => 'E02006883',
        '9HA' => 'E02006883',
        '9HB' => 'E02006883',
        '9HD' => 'E02006883',
        '9HE' => 'E02006883',
        '9HF' => 'E02006883',
        '9HG' => 'E02006883',
        '9HH' => 'E02006883',
        '9HJ' => 'E02006883',
        '9HL' => 'E02006883',
        '9HN' => 'E02006883',
        '9HP' => 'E02006883',
        '9HQ' => 'E02006883',
        '9HR' => 'E02006883',
        '9HS' => 'E02006883',
        '9HT' => 'E02006883',
        '9HU' => 'E02006883',
        '9HW' => 'E02006883',
        '9HX' => 'E02006883',
        '9HY' => 'E02006883',
        '9HZ' => 'E02006883',
        '9JA' => 'E02006883',
        '9JB' => 'E02006883',
        '9JD' => 'E02006883',
        '9JE' => 'E02003202',
        '9JF' => 'E02003202',
        '9JG' => 'E02006883',
        '9JH' => 'E02006883',
        '9JJ' => 'E02006883',
        '9JL' => 'E02003183',
        '9JN' => 'E02006883',
        '9JP' => 'E02006883',
        '9JR' => 'E02003183',
        '9JS' => 'E02006883',
        '9JT' => 'E02003183',
        '9JU' => 'E02003183',
        '9JW' => 'E02003183',
        '9JX' => 'E02006883',
        '9JY' => 'E02006883',
        '9JZ' => 'E02006883',
        '9LA' => 'E02006883',
        '9LB' => 'E02003183',
        '9LD' => 'E02003183',
        '9LE' => 'E02003183',
        '9LF' => 'E02003202',
        '9LG' => 'E02003202',
        '9LH' => 'E02003183',
        '9LJ' => 'E02003183',
        '9LL' => 'E02003183',
        '9LN' => 'E02006883',
        '9LP' => 'E02003183',
        '9LQ' => 'E02003202',
        '9LR' => 'E02003183',
        '9LT' => 'E02006883',
        '9LU' => 'E02003183',
        '9LW' => 'E02003183',
        '9LX' => 'E02003183',
        '9LY' => 'E02003183',
        '9LZ' => 'E02003183',
        '9NA' => 'E02003183',
        '9NB' => 'E02003183',
        '9ND' => 'E02003183',
        '9NE' => 'E02003183',
        '9NF' => 'E02003183',
        '9NG' => 'E02003183',
        '9NH' => 'E02003183',
        '9NJ' => 'E02003183',
        '9NL' => 'E02003183',
        '9NN' => 'E02003183',
        '9NQ' => 'E02003183',
        '9NW' => 'E02003183',
        '9WA' => 'E02006883',
        '9WB' => 'E02003183',
        '9WD' => 'E02003183',
        '9WE' => 'E02003183',
        '9WF' => 'E02006883',
        '9WQ' => 'E02006883',
        '9WZ' => 'E02003183',
        '9XJ' => 'E02003183',
        '9XN' => 'E02006883',
        '9XP' => 'E02006883',
        '9XQ' => 'E02003183',
        '9XR' => 'E02006883',
        '9XW' => 'E02006883',
        '9XY' => 'E02006883',
        '9XZ' => 'E02006883',
        '9YA' => 'E02006883',
        '9YB' => 'E02006883',
        '9YD' => 'E02006883',
        '9YE' => 'E02006883',
        '9YF' => 'E02006883',
        '9YG' => 'E02006883',
        '9YH' => 'E02006883',
        '9YJ' => 'E02006883',
        '9YL' => 'E02003183',
        '9YN' => 'E02003183',
        '9YP' => 'E02006883',
        '9YQ' => 'E02006883',
        '9YR' => 'E02006883',
        '9YS' => 'E02006883',
        '9YT' => 'E02003183',
        '9YU' => 'E02006883',
        '9YW' => 'E02003183',
        '9YX' => 'E02003183',
        '9YY' => 'E02003183',
        '9YZ' => 'E02003183',
        '9ZA' => 'E02006883',
        '9ZB' => 'E02006883',
        '9ZD' => 'E02003183',
        '9ZE' => 'E02006883',
        '9ZF' => 'E02006883',
        '9ZH' => 'E02006883',
        '9ZJ' => 'E02006883',
        '9ZL' => 'E02006883',
        '9ZN' => 'E02006883',
        '9ZP' => 'E02006883',
        '9ZQ' => 'E02006883',
        '9ZR' => 'E02006883',
        '9ZS' => 'E02006883',
        '9ZT' => 'E02006883',
        '9ZU' => 'E02006883',
        '9ZW' => 'E02006883',
        '9ZX' => 'E02006883',
        '9ZY' => 'E02006883',
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
