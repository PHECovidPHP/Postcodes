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
final class LA21
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '8AA' => 'E02004022',
        '8AB' => 'E02004022',
        '8AD' => 'E02004021',
        '8AE' => 'E02004022',
        '8AF' => 'E02004022',
        '8AG' => 'E02004022',
        '8AH' => 'E02004022',
        '8AJ' => 'E02004022',
        '8AL' => 'E02004022',
        '8AN' => 'E02004022',
        '8AP' => 'E02004022',
        '8AQ' => 'E02004022',
        '8AR' => 'E02004022',
        '8AS' => 'E02004022',
        '8AT' => 'E02004022',
        '8AU' => 'E02004022',
        '8AW' => 'E02004022',
        '8AX' => 'E02004022',
        '8AY' => 'E02004022',
        '8AZ' => 'E02004022',
        '8BA' => 'E02004022',
        '8BB' => 'E02004022',
        '8BD' => 'E02004022',
        '8BE' => 'E02004022',
        '8BF' => 'E02004022',
        '8BG' => 'E02004022',
        '8BH' => 'E02004022',
        '8BJ' => 'E02004022',
        '8BL' => 'E02004022',
        '8BN' => 'E02004022',
        '8BP' => 'E02004022',
        '8BQ' => 'E02004022',
        '8BS' => 'E02004022',
        '8BT' => 'E02004022',
        '8BU' => 'E02004022',
        '8BW' => 'E02004022',
        '8BX' => 'E02004022',
        '8BY' => 'E02004022',
        '8DB' => 'E02004022',
        '8DD' => 'E02004022',
        '8DE' => 'E02004022',
        '8DF' => 'E02004022',
        '8DG' => 'E02004022',
        '8DH' => 'E02004022',
        '8DJ' => 'E02004022',
        '8DL' => 'E02004022',
        '8DN' => 'E02004022',
        '8DP' => 'E02004022',
        '8DQ' => 'E02004022',
        '8DR' => 'E02004022',
        '8DS' => 'E02004022',
        '8DT' => 'E02004022',
        '8DU' => 'E02004022',
        '8DW' => 'E02004022',
        '8DX' => 'E02004022',
        '8DY' => 'E02004022',
        '8DZ' => 'E02004022',
        '8EA' => 'E02004022',
        '8EB' => 'E02004022',
        '8ED' => 'E02004022',
        '8EE' => 'E02004022',
        '8EF' => 'E02004022',
        '8EG' => 'E02004022',
        '8EH' => 'E02004022',
        '8EJ' => 'E02004022',
        '8EL' => 'E02004022',
        '8EN' => 'E02004022',
        '8EP' => 'E02004022',
        '8EQ' => 'E02004022',
        '8ER' => 'E02004022',
        '8ES' => 'E02004022',
        '8ET' => 'E02004022',
        '8EU' => 'E02004022',
        '8EW' => 'E02004022',
        '8EX' => 'E02004022',
        '8EY' => 'E02004022',
        '8EZ' => 'E02004022',
        '8FA' => 'E02004022',
        '8GA' => 'E02004015',
        '8GB' => 'E02004015',
        '8HA' => 'E02004022',
        '8HB' => 'E02004022',
        '8HD' => 'E02004022',
        '8HE' => 'E02004022',
        '8HF' => 'E02004022',
        '8HG' => 'E02004022',
        '8HH' => 'E02004022',
        '8HJ' => 'E02004022',
        '8HL' => 'E02004022',
        '8HN' => 'E02004022',
        '8HP' => 'E02004022',
        '8HQ' => 'E02004022',
        '8HR' => 'E02004022',
        '8HS' => 'E02004022',
        '8HT' => 'E02004022',
        '8HU' => 'E02004022',
        '8HW' => 'E02004022',
        '8HX' => 'E02004022',
        '8HY' => 'E02004022',
        '8HZ' => 'E02004022',
        '8JA' => 'E02004022',
        '8LA' => 'E02004022',
        '8WY' => 'E02004015',
        '8WZ' => 'E02004015',
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
