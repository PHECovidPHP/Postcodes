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
final class NE41
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '8AA' => 'E02005729',
        '8AB' => 'E02005729',
        '8AD' => 'E02005729',
        '8AE' => 'E02005729',
        '8AF' => 'E02005729',
        '8AG' => 'E02005729',
        '8AH' => 'E02005729',
        '8AJ' => 'E02005729',
        '8AL' => 'E02005729',
        '8AN' => 'E02005729',
        '8AP' => 'E02005729',
        '8AQ' => 'E02005729',
        '8AR' => 'E02005729',
        '8AS' => 'E02005729',
        '8AT' => 'E02005729',
        '8AU' => 'E02005729',
        '8AW' => 'E02005729',
        '8AX' => 'E02005729',
        '8AY' => 'E02005729',
        '8AZ' => 'E02005729',
        '8BA' => 'E02005729',
        '8BB' => 'E02005729',
        '8BD' => 'E02005729',
        '8BE' => 'E02005729',
        '8BF' => 'E02005729',
        '8BG' => 'E02005729',
        '8BH' => 'E02005729',
        '8BJ' => 'E02005729',
        '8BL' => 'E02005729',
        '8BN' => 'E02005729',
        '8BP' => 'E02005729',
        '8BQ' => 'E02005729',
        '8BS' => 'E02005729',
        '8BT' => 'E02005729',
        '8BW' => 'E02005729',
        '8BY' => 'E02005729',
        '8DA' => 'E02005729',
        '8DE' => 'E02005729',
        '8DF' => 'E02005729',
        '8DG' => 'E02005729',
        '8DH' => 'E02005729',
        '8DJ' => 'E02005729',
        '8DL' => 'E02005729',
        '8DN' => 'E02005729',
        '8DP' => 'E02005729',
        '8DQ' => 'E02005729',
        '8DR' => 'E02005729',
        '8DS' => 'E02005729',
        '8DT' => 'E02005729',
        '8DU' => 'E02005729',
        '8DW' => 'E02005729',
        '8DX' => 'E02005729',
        '8DZ' => 'E02005729',
        '8EA' => 'E02005729',
        '8EB' => 'E02005729',
        '8ED' => 'E02005729',
        '8EE' => 'E02005729',
        '8EF' => 'E02005729',
        '8EG' => 'E02005729',
        '8EH' => 'E02005729',
        '8EJ' => 'E02005729',
        '8EL' => 'E02005729',
        '8EN' => 'E02005729',
        '8EP' => 'E02005729',
        '8EQ' => 'E02005729',
        '8ER' => 'E02005729',
        '8ES' => 'E02005729',
        '8ET' => 'E02005729',
        '8EU' => 'E02005729',
        '8EW' => 'E02005729',
        '8EX' => 'E02005729',
        '8EY' => 'E02005729',
        '8EZ' => 'E02005729',
        '8HA' => 'E02005729',
        '8HB' => 'E02005729',
        '8HD' => 'E02005729',
        '8HE' => 'E02005729',
        '8HP' => 'E02005729',
        '8HR' => 'E02005729',
        '8HS' => 'E02005729',
        '8HT' => 'E02005729',
        '8HU' => 'E02005729',
        '8HX' => 'E02005729',
        '8HZ' => 'E02005729',
        '8JA' => 'E02005729',
        '8JB' => 'E02005729',
        '8JD' => 'E02001683',
        '8JE' => 'E02001683',
        '8JF' => 'E02001683',
        '8JG' => 'E02001683',
        '8JH' => 'E02001683',
        '8JJ' => 'E02001683',
        '8JL' => 'E02001683',
        '8JN' => 'E02001683',
        '8JP' => 'E02001683',
        '8JQ' => 'E02001683',
        '8JR' => 'E02005729',
        '8JS' => 'E02005729',
        '8JT' => 'E02005729',
        '8JU' => 'E02005729',
        '8JW' => 'E02001683',
        '8JX' => 'E02005731',
        '8JY' => 'E02005731',
        '8LA' => 'E02005729',
        '8LB' => 'E02005729',
        '8WY' => 'E02005731',
        '8WZ' => 'E02005731',
        '8YT' => 'E02005731',
        '8YU' => 'E02005731',
        '8YW' => 'E02005731',
        '8YX' => 'E02005731',
        '8YY' => 'E02005729',
        '8YZ' => 'E02005731',
        '8ZA' => 'E02005731',
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
