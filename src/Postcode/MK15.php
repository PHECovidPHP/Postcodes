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
final class MK15
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02003474',
        '0AB' => 'E02003474',
        '0AD' => 'E02003474',
        '0AE' => 'E02003474',
        '0AF' => 'E02003474',
        '0AG' => 'E02003474',
        '0AH' => 'E02003465',
        '0AJ' => 'E02003474',
        '0AL' => 'E02003474',
        '0AN' => 'E02003474',
        '0AP' => 'E02003474',
        '0AQ' => 'E02003475',
        '0AR' => 'E02003474',
        '0AS' => 'E02003474',
        '0AT' => 'E02003474',
        '0AU' => 'E02003474',
        '0AW' => 'E02003474',
        '0AX' => 'E02003474',
        '0AY' => 'E02003474',
        '0AZ' => 'E02003474',
        '0BA' => 'E02003474',
        '0BB' => 'E02003474',
        '0BD' => 'E02003474',
        '0BE' => 'E02003474',
        '0BG' => 'E02003465',
        '0BH' => 'E02003474',
        '0BJ' => 'E02003474',
        '0BL' => 'E02003474',
        '0BN' => 'E02003474',
        '0BP' => 'E02003474',
        '0BQ' => 'E02003474',
        '0BS' => 'E02003474',
        '0BT' => 'E02003474',
        '0BU' => 'E02003474',
        '0BW' => 'E02003474',
        '0BX' => 'E02003474',
        '0BY' => 'E02003474',
        '0BZ' => 'E02003474',
        '0DA' => 'E02003475',
        '0DB' => 'E02003475',
        '0DD' => 'E02003475',
        '0DE' => 'E02003475',
        '0DF' => 'E02003475',
        '0DG' => 'E02003475',
        '0DH' => 'E02003475',
        '0DJ' => 'E02003472',
        '0DL' => 'E02003472',
        '0DN' => 'E02003475',
        '0DP' => 'E02003475',
        '0DQ' => 'E02003475',
        '0DR' => 'E02003475',
        '0DS' => 'E02003472',
        '0DT' => 'E02003472',
        '0DU' => 'E02003475',
        '0DW' => 'E02003472',
        '0EA' => 'E02003475',
        '0EB' => 'E02003475',
        '0ED' => 'E02003474',
        '0EE' => 'E02003475',
        '0HA' => 'E02003474',
        '0HB' => 'E02003474',
        '0HD' => 'E02003474',
        '0HP' => 'E02003474',
        '0QZ' => 'E02003474',
        '0SB' => 'E02003475',
        '0SF' => 'E02003475',
        '0WA' => 'E02003475',
        '0WY' => 'E02003475',
        '0WZ' => 'E02003475',
        '0YA' => 'E02003475',
        '0YR' => 'E02003474',
        '0YS' => 'E02003475',
        '0YT' => 'E02003474',
        '0ZQ' => 'E02003475',
        '0ZR' => 'E02003475',
        '0ZS' => 'E02003475',
        '0ZT' => 'E02003474',
        '0ZU' => 'E02003474',
        '0ZX' => 'E02003475',
        '0ZY' => 'E02003474',
        '8AB' => 'E02003463',
        '8AD' => 'E02003463',
        '8AE' => 'E02003463',
        '8AF' => 'E02003463',
        '8AG' => 'E02003463',
        '8AH' => 'E02003463',
        '8AJ' => 'E02003463',
        '8AL' => 'E02003463',
        '8AN' => 'E02003463',
        '8AP' => 'E02003463',
        '8AQ' => 'E02003463',
        '8AR' => 'E02003463',
        '8AS' => 'E02003463',
        '8AT' => 'E02003463',
        '8AU' => 'E02003463',
        '8AW' => 'E02003463',
        '8AX' => 'E02003463',
        '8AY' => 'E02003463',
        '8AZ' => 'E02003463',
        '8BA' => 'E02003465',
        '8BB' => 'E02003465',
        '8BD' => 'E02003475',
        '8BF' => 'E02003465',
        '8BG' => 'E02003465',
        '8BJ' => 'E02003463',
        '8BL' => 'E02003465',
        '8BN' => 'E02003463',
        '8BQ' => 'E02003465',
        '8DA' => 'E02003463',
        '8DB' => 'E02003465',
        '8DX' => 'E02003463',
        '8DZ' => 'E02003475',
        '8FT' => 'E02003465',
        '8HA' => 'E02003465',
        '8HB' => 'E02003465',
        '8HD' => 'E02003465',
        '8HE' => 'E02003465',
        '8HF' => 'E02003465',
        '8HG' => 'E02003465',
        '8HJ' => 'E02003465',
        '8HL' => 'E02003465',
        '8HN' => 'E02003465',
        '8HP' => 'E02003465',
        '8HQ' => 'E02003465',
        '8HR' => 'E02003465',
        '8HS' => 'E02003465',
        '8HT' => 'E02003465',
        '8HW' => 'E02003465',
        '8JA' => 'E02003465',
        '8JD' => 'E02003465',
        '8JE' => 'E02003465',
        '8JF' => 'E02003465',
        '8JG' => 'E02003465',
        '8JH' => 'E02003465',
        '8JN' => 'E02003475',
        '8JQ' => 'E02003465',
        '8JW' => 'E02003465',
        '8JX' => 'E02003465',
        '8LD' => 'E02003465',
        '8LU' => 'E02003465',
        '8PA' => 'E02003465',
        '8PB' => 'E02003465',
        '8PD' => 'E02003465',
        '8PE' => 'E02003465',
        '8PF' => 'E02003465',
        '8PG' => 'E02003465',
        '8PH' => 'E02003465',
        '8PJ' => 'E02003465',
        '8PL' => 'E02003465',
        '8PN' => 'E02003465',
        '8PP' => 'E02003465',
        '8PQ' => 'E02003465',
        '8PR' => 'E02003465',
        '8PS' => 'E02003465',
        '8PT' => 'E02003465',
        '8PU' => 'E02003465',
        '8PZ' => 'E02003465',
        '8QA' => 'E02003465',
        '8QB' => 'E02003465',
        '8QD' => 'E02003465',
        '8QE' => 'E02003465',
        '8QH' => 'E02003465',
        '8QJ' => 'E02003465',
        '8RR' => 'E02003465',
        '8WA' => 'E02003465',
        '8WB' => 'E02003475',
        '8WD' => 'E02003465',
        '8WN' => 'E02003465',
        '8WY' => 'E02003475',
        '8WZ' => 'E02003475',
        '8XJ' => 'E02003475',
        '8XN' => 'E02003475',
        '8XW' => 'E02003465',
        '8XZ' => 'E02003465',
        '8YG' => 'E02003465',
        '8YH' => 'E02003465',
        '8YJ' => 'E02003465',
        '8YS' => 'E02003465',
        '8YT' => 'E02003463',
        '8YW' => 'E02003465',
        '8YX' => 'E02003465',
        '8ZD' => 'E02003463',
        '8ZH' => 'E02003475',
        '8ZN' => 'E02003475',
        '8ZP' => 'E02003475',
        '8ZQ' => 'E02003475',
        '8ZR' => 'E02003463',
        '8ZS' => 'E02003463',
        '8ZT' => 'E02003475',
        '8ZU' => 'E02003463',
        '8ZW' => 'E02003463',
        '8ZX' => 'E02003465',
        '8ZY' => 'E02003463',
        '9AA' => 'E02003465',
        '9AB' => 'E02003465',
        '9AD' => 'E02003465',
        '9AE' => 'E02003465',
        '9AF' => 'E02003465',
        '9AG' => 'E02003465',
        '9AH' => 'E02003465',
        '9AJ' => 'E02003465',
        '9AL' => 'E02003465',
        '9AN' => 'E02003465',
        '9AP' => 'E02003465',
        '9AQ' => 'E02003465',
        '9AR' => 'E02003465',
        '9AS' => 'E02003465',
        '9AT' => 'E02003465',
        '9AU' => 'E02003465',
        '9AW' => 'E02003465',
        '9AX' => 'E02003465',
        '9AY' => 'E02003465',
        '9AZ' => 'E02003465',
        '9BA' => 'E02003465',
        '9BB' => 'E02003465',
        '9BD' => 'E02003465',
        '9BE' => 'E02003467',
        '9BF' => 'E02003475',
        '9BG' => 'E02003465',
        '9BH' => 'E02003465',
        '9BJ' => 'E02003465',
        '9BL' => 'E02003465',
        '9BN' => 'E02003465',
        '9BP' => 'E02003465',
        '9BQ' => 'E02003475',
        '9BS' => 'E02003465',
        '9BT' => 'E02003465',
        '9BU' => 'E02003465',
        '9BW' => 'E02003465',
        '9BX' => 'E02003465',
        '9BY' => 'E02003465',
        '9BZ' => 'E02003465',
        '9DA' => 'E02003465',
        '9DB' => 'E02003465',
        '9DD' => 'E02003465',
        '9DE' => 'E02003465',
        '9DF' => 'E02003465',
        '9DG' => 'E02003465',
        '9DH' => 'E02003465',
        '9DJ' => 'E02003465',
        '9DL' => 'E02003465',
        '9DN' => 'E02003465',
        '9DP' => 'E02003465',
        '9DQ' => 'E02003465',
        '9DR' => 'E02003465',
        '9DS' => 'E02003465',
        '9DT' => 'E02003465',
        '9DU' => 'E02003465',
        '9DW' => 'E02003465',
        '9DX' => 'E02003465',
        '9DY' => 'E02003465',
        '9DZ' => 'E02003465',
        '9EA' => 'E02003465',
        '9EB' => 'E02003465',
        '9ED' => 'E02003465',
        '9EE' => 'E02003465',
        '9EF' => 'E02003465',
        '9EG' => 'E02003465',
        '9EH' => 'E02003465',
        '9EJ' => 'E02003465',
        '9EL' => 'E02003465',
        '9EN' => 'E02003465',
        '9ET' => 'E02003465',
        '9EU' => 'E02003465',
        '9EX' => 'E02003465',
        '9EY' => 'E02003465',
        '9EZ' => 'E02003465',
        '9FE' => 'E02003465',
        '9HA' => 'E02003465',
        '9HB' => 'E02003465',
        '9HD' => 'E02003465',
        '9HE' => 'E02003465',
        '9HF' => 'E02003465',
        '9HG' => 'E02003465',
        '9HH' => 'E02003465',
        '9HJ' => 'E02003465',
        '9HL' => 'E02003465',
        '9HN' => 'E02003465',
        '9HP' => 'E02003465',
        '9HQ' => 'E02003472',
        '9HR' => 'E02003465',
        '9HS' => 'E02003465',
        '9HT' => 'E02003465',
        '9HU' => 'E02003465',
        '9HW' => 'E02003465',
        '9HX' => 'E02003465',
        '9HY' => 'E02003465',
        '9HZ' => 'E02003465',
        '9JA' => 'E02003465',
        '9JB' => 'E02003465',
        '9JD' => 'E02003465',
        '9JE' => 'E02003465',
        '9JF' => 'E02003465',
        '9JG' => 'E02003465',
        '9JH' => 'E02003465',
        '9JJ' => 'E02003465',
        '9JL' => 'E02003465',
        '9JN' => 'E02003475',
        '9JP' => 'E02003465',
        '9JQ' => 'E02003465',
        '9JR' => 'E02003465',
        '9JS' => 'E02003465',
        '9JT' => 'E02003465',
        '9JU' => 'E02003465',
        '9JW' => 'E02003465',
        '9JX' => 'E02003465',
        '9JY' => 'E02003465',
        '9JZ' => 'E02003465',
        '9LA' => 'E02003465',
        '9LB' => 'E02003465',
        '9LD' => 'E02003465',
        '9LE' => 'E02003465',
        '9LG' => 'E02003465',
        '9LH' => 'E02003465',
        '9LJ' => 'E02003465',
        '9LL' => 'E02003465',
        '9LP' => 'E02003465',
        '9LR' => 'E02003465',
        '9LS' => 'E02003465',
        '9LT' => 'E02003465',
        '9LU' => 'E02003465',
        '9LZ' => 'E02003465',
        '9NA' => 'E02003465',
        '9NB' => 'E02003465',
        '9ND' => 'E02003465',
        '9PA' => 'E02003475',
        '9PB' => 'E02003465',
        '9PD' => 'E02003465',
        '9PE' => 'E02003465',
        '9PG' => 'E02003475',
        '9WA' => 'E02003475',
        '9WB' => 'E02003475',
        '9WD' => 'E02003475',
        '9WE' => 'E02003475',
        '9WF' => 'E02003475',
        '9WY' => 'E02003475',
        '9WZ' => 'E02003475',
        '9XA' => 'E02003475',
        '9XJ' => 'E02003475',
        '9XN' => 'E02003475',
        '9XP' => 'E02003475',
        '9XQ' => 'E02003475',
        '9XZ' => 'E02003475',
        '9YR' => 'E02003475',
        '9YS' => 'E02003465',
        '9YT' => 'E02003465',
        '9YU' => 'E02003465',
        '9YW' => 'E02003475',
        '9YX' => 'E02003465',
        '9YY' => 'E02003475',
        '9YZ' => 'E02003465',
        '9ZD' => 'E02003465',
        '9ZE' => 'E02003465',
        '9ZF' => 'E02003475',
        '9ZG' => 'E02003465',
        '9ZH' => 'E02003465',
        '9ZJ' => 'E02003475',
        '9ZL' => 'E02003465',
        '9ZN' => 'E02003465',
        '9ZP' => 'E02003465',
        '9ZQ' => 'E02003465',
        '9ZR' => 'E02003465',
        '9ZS' => 'E02003465',
        '9ZT' => 'E02003465',
        '9ZU' => 'E02003465',
        '9ZX' => 'E02003465',
        '9ZY' => 'E02003465',
        '9ZZ' => 'E02003465',
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
