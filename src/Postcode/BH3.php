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
final class BH3
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '7AA' => 'E02003184',
        '7AB' => 'E02003184',
        '7AD' => 'E02003184',
        '7AE' => 'E02003184',
        '7AF' => 'E02003184',
        '7AG' => 'E02003184',
        '7AH' => 'E02003202',
        '7AJ' => 'E02003183',
        '7AL' => 'E02003183',
        '7AN' => 'E02003183',
        '7AP' => 'E02003183',
        '7AQ' => 'E02003184',
        '7AR' => 'E02003183',
        '7AS' => 'E02003183',
        '7AT' => 'E02003183',
        '7AU' => 'E02003183',
        '7AW' => 'E02003183',
        '7AX' => 'E02003183',
        '7AY' => 'E02003183',
        '7AZ' => 'E02003184',
        '7BA' => 'E02003184',
        '7BB' => 'E02003183',
        '7BD' => 'E02003183',
        '7BE' => 'E02003183',
        '7BG' => 'E02003183',
        '7BH' => 'E02003183',
        '7BP' => 'E02003183',
        '7BS' => 'E02003183',
        '7BT' => 'E02003183',
        '7BU' => 'E02003183',
        '7BW' => 'E02003183',
        '7BX' => 'E02003183',
        '7BY' => 'E02003183',
        '7BZ' => 'E02003183',
        '7DA' => 'E02003183',
        '7DB' => 'E02003183',
        '7DD' => 'E02003183',
        '7DE' => 'E02003183',
        '7DF' => 'E02003183',
        '7DG' => 'E02003183',
        '7DH' => 'E02003183',
        '7DJ' => 'E02003183',
        '7DL' => 'E02003183',
        '7DN' => 'E02003183',
        '7DP' => 'E02003183',
        '7DQ' => 'E02003183',
        '7DR' => 'E02003183',
        '7DS' => 'E02003183',
        '7DT' => 'E02003183',
        '7DU' => 'E02003183',
        '7DW' => 'E02003183',
        '7DX' => 'E02003183',
        '7DY' => 'E02003183',
        '7DZ' => 'E02003183',
        '7EA' => 'E02003183',
        '7EB' => 'E02003183',
        '7ED' => 'E02003183',
        '7EE' => 'E02003183',
        '7EF' => 'E02003183',
        '7EG' => 'E02003183',
        '7EH' => 'E02003183',
        '7EJ' => 'E02003183',
        '7EL' => 'E02003183',
        '7EN' => 'E02003183',
        '7EP' => 'E02003183',
        '7EQ' => 'E02003183',
        '7ER' => 'E02003183',
        '7ES' => 'E02003183',
        '7ET' => 'E02003183',
        '7EU' => 'E02003183',
        '7EW' => 'E02003183',
        '7EX' => 'E02003183',
        '7EY' => 'E02003183',
        '7EZ' => 'E02003183',
        '7HA' => 'E02003183',
        '7HB' => 'E02003183',
        '7HD' => 'E02003183',
        '7HE' => 'E02003183',
        '7HF' => 'E02003183',
        '7HG' => 'E02003183',
        '7HH' => 'E02003183',
        '7HJ' => 'E02003183',
        '7HL' => 'E02003183',
        '7HP' => 'E02003183',
        '7HQ' => 'E02003183',
        '7HR' => 'E02003183',
        '7HS' => 'E02003183',
        '7HT' => 'E02003183',
        '7HU' => 'E02003183',
        '7HW' => 'E02003183',
        '7HX' => 'E02003183',
        '7HY' => 'E02003183',
        '7HZ' => 'E02003183',
        '7JA' => 'E02003183',
        '7JB' => 'E02003183',
        '7JD' => 'E02003183',
        '7JE' => 'E02003183',
        '7JF' => 'E02003183',
        '7JG' => 'E02003183',
        '7JH' => 'E02003183',
        '7JJ' => 'E02003183',
        '7JL' => 'E02003183',
        '7JP' => 'E02003184',
        '7JQ' => 'E02003183',
        '7JR' => 'E02003184',
        '7JS' => 'E02003184',
        '7JT' => 'E02003184',
        '7JU' => 'E02003184',
        '7JW' => 'E02003183',
        '7JX' => 'E02003184',
        '7JY' => 'E02003184',
        '7JZ' => 'E02003184',
        '7LA' => 'E02003184',
        '7LB' => 'E02003184',
        '7LD' => 'E02003184',
        '7LE' => 'E02003184',
        '7LF' => 'E02003184',
        '7LG' => 'E02003184',
        '7LH' => 'E02003184',
        '7LJ' => 'E02003184',
        '7LL' => 'E02003184',
        '7LN' => 'E02003184',
        '7LQ' => 'E02003184',
        '7LR' => 'E02003183',
        '7LS' => 'E02003184',
        '7LT' => 'E02003183',
        '7LU' => 'E02003184',
        '7LX' => 'E02003183',
        '7LY' => 'E02003183',
        '7LZ' => 'E02003183',
        '7NA' => 'E02003184',
        '7NB' => 'E02003184',
        '7ND' => 'E02003183',
        '7NE' => 'E02003183',
        '7NF' => 'E02003184',
        '7NG' => 'E02003183',
        '7NH' => 'E02003183',
        '7NJ' => 'E02003192',
        '7NP' => 'E02003183',
        '7NQ' => 'E02003184',
        '7NR' => 'E02003183',
        '7NS' => 'E02003183',
        '7NW' => 'E02003183',
        '7WA' => 'E02003184',
        '7WB' => 'E02003192',
        '7WD' => 'E02003184',
        '7WE' => 'E02003184',
        '7WF' => 'E02003184',
        '7WN' => 'E02003192',
        '7WZ' => 'E02003192',
        '7XH' => 'E02003192',
        '7XJ' => 'E02003184',
        '7XL' => 'E02003192',
        '7XN' => 'E02003184',
        '7XQ' => 'E02003192',
        '7XR' => 'E02003183',
        '7XW' => 'E02003192',
        '7XZ' => 'E02003184',
        '7YA' => 'E02003192',
        '7YB' => 'E02003183',
        '7YD' => 'E02003183',
        '7YE' => 'E02003183',
        '7YF' => 'E02003183',
        '7YG' => 'E02003183',
        '7YH' => 'E02003183',
        '7YJ' => 'E02003183',
        '7YL' => 'E02003192',
        '7YN' => 'E02003192',
        '7YP' => 'E02003183',
        '7YQ' => 'E02003192',
        '7YR' => 'E02003192',
        '7YS' => 'E02003192',
        '7YT' => 'E02003183',
        '7YU' => 'E02003192',
        '7YW' => 'E02003192',
        '7YX' => 'E02003183',
        '7YY' => 'E02003192',
        '7YZ' => 'E02003183',
        '7ZA' => 'E02003183',
        '7ZB' => 'E02003192',
        '7ZD' => 'E02003183',
        '7ZF' => 'E02003183',
        '7ZG' => 'E02003183',
        '7ZH' => 'E02003192',
        '7ZJ' => 'E02003183',
        '7ZL' => 'E02003192',
        '7ZN' => 'E02003183',
        '7ZP' => 'E02003183',
        '7ZQ' => 'E02003183',
        '7ZR' => 'E02003183',
        '7ZS' => 'E02003183',
        '7ZT' => 'E02003192',
        '7ZU' => 'E02003192',
        '7ZW' => 'E02003192',
        '7ZX' => 'E02003183',
        '7ZY' => 'E02003192',
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