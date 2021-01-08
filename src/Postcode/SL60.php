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
final class SL60
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AB' => 'E02003425',
        '1AD' => 'E02003425',
        '1AF' => 'E02003425',
        '1AJ' => 'E02003425',
        '1AL' => 'E02003425',
        '1AP' => 'E02003425',
        '1AQ' => 'E02003425',
        '1AT' => 'E02003425',
        '1AU' => 'E02003425',
        '1AW' => 'E02003425',
        '1BA' => 'E02003425',
        '1BB' => 'E02003425',
        '1BD' => 'E02003425',
        '1BF' => 'E02003425',
        '1BH' => 'E02003425',
        '1BP' => 'E02003425',
        '1BT' => 'E02003425',
        '1BU' => 'E02003425',
        '1BZ' => 'E02003425',
        '1DA' => 'E02003425',
        '1DB' => 'E02003425',
        '1DE' => 'E02003425',
        '1DF' => 'E02003425',
        '1DH' => 'E02003425',
        '1DL' => 'E02003425',
        '1DN' => 'E02003425',
        '1DP' => 'E02003425',
        '1DQ' => 'E02003425',
        '1DR' => 'E02003425',
        '1DS' => 'E02003425',
        '1DT' => 'E02003425',
        '1DW' => 'E02003425',
        '1DY' => 'E02003425',
        '1DZ' => 'E02003425',
        '1EB' => 'E02003425',
        '1ED' => 'E02003425',
        '1EE' => 'E02003425',
        '1EF' => 'E02003425',
        '1EG' => 'E02003425',
        '1EH' => 'E02003425',
        '1EJ' => 'E02003425',
        '1EN' => 'E02003425',
        '1EP' => 'E02003425',
        '1EQ' => 'E02003425',
        '1ER' => 'E02003425',
        '1ES' => 'E02003425',
        '1ET' => 'E02003425',
        '1EW' => 'E02003425',
        '1EX' => 'E02003425',
        '1EZ' => 'E02003425',
        '1FA' => 'E02003425',
        '1FB' => 'E02003425',
        '1FD' => 'E02003425',
        '1FE' => 'E02003425',
        '1FF' => 'E02003425',
        '1FG' => 'E02003425',
        '1FH' => 'E02003425',
        '1FJ' => 'E02003425',
        '1FL' => 'E02003425',
        '1FN' => 'E02003425',
        '1FP' => 'E02003425',
        '1FQ' => 'E02003425',
        '1FR' => 'E02003425',
        '1FS' => 'E02003425',
        '1FT' => 'E02003425',
        '1FU' => 'E02003425',
        '1FW' => 'E02003425',
        '1FX' => 'E02003425',
        '1FY' => 'E02003425',
        '1GA' => 'E02003425',
        '1GB' => 'E02003425',
        '1GD' => 'E02003425',
        '1GE' => 'E02003425',
        '1GF' => 'E02003425',
        '1GG' => 'E02003425',
        '1GH' => 'E02003425',
        '1GJ' => 'E02003425',
        '1GL' => 'E02003425',
        '1GN' => 'E02003425',
        '1GP' => 'E02003425',
        '1GQ' => 'E02003425',
        '1GR' => 'E02003425',
        '1GS' => 'E02003425',
        '1GT' => 'E02003425',
        '1GU' => 'E02003425',
        '1GW' => 'E02003425',
        '1GX' => 'E02003425',
        '1GY' => 'E02003425',
        '1GZ' => 'E02003425',
        '1HA' => 'E02003425',
        '1HB' => 'E02003425',
        '1HD' => 'E02003425',
        '1HE' => 'E02003425',
        '1HF' => 'E02003425',
        '1HG' => 'E02003425',
        '1HH' => 'E02003425',
        '1HJ' => 'E02003425',
        '1HL' => 'E02003425',
        '1HN' => 'E02003425',
        '1HP' => 'E02003425',
        '1HQ' => 'E02003425',
        '1HR' => 'E02003425',
        '1HS' => 'E02003425',
        '1HT' => 'E02003425',
        '1HU' => 'E02003425',
        '1HW' => 'E02003425',
        '1HX' => 'E02003425',
        '1HY' => 'E02003425',
        '1HZ' => 'E02003425',
        '1JA' => 'E02003425',
        '1JB' => 'E02003425',
        '1JD' => 'E02003425',
        '1JE' => 'E02003425',
        '1JF' => 'E02003425',
        '1JG' => 'E02003425',
        '1JH' => 'E02003425',
        '1JJ' => 'E02003425',
        '1JL' => 'E02003425',
        '1JN' => 'E02003425',
        '1JP' => 'E02003425',
        '1JQ' => 'E02003425',
        '1JR' => 'E02003425',
        '1JS' => 'E02003425',
        '1JT' => 'E02003425',
        '1JU' => 'E02003425',
        '1JW' => 'E02003425',
        '1JY' => 'E02003425',
        '1JZ' => 'E02003425',
        '1LB' => 'E02003425',
        '1LD' => 'E02003425',
        '1LE' => 'E02003425',
        '1LF' => 'E02003425',
        '1LG' => 'E02003425',
        '1LH' => 'E02003425',
        '1LL' => 'E02003425',
        '1LN' => 'E02003425',
        '1LP' => 'E02003425',
        '1LQ' => 'E02003425',
        '1LR' => 'E02003425',
        '1LS' => 'E02003425',
        '1LT' => 'E02003425',
        '1LU' => 'E02003425',
        '1LW' => 'E02003425',
        '1LX' => 'E02003425',
        '1LY' => 'E02003425',
        '1LZ' => 'E02003425',
        '1NA' => 'E02003425',
        '1NB' => 'E02003425',
        '1ND' => 'E02003425',
        '1NE' => 'E02003425',
        '1NF' => 'E02003425',
        '1NG' => 'E02003425',
        '1NH' => 'E02003425',
        '1NJ' => 'E02003425',
        '1NL' => 'E02003425',
        '1NN' => 'E02003425',
        '1NP' => 'E02003425',
        '1NQ' => 'E02003425',
        '1NR' => 'E02003425',
        '1NS' => 'E02003425',
        '1NT' => 'E02003425',
        '1NU' => 'E02003425',
        '1NW' => 'E02003425',
        '1NX' => 'E02003425',
        '1NY' => 'E02003425',
        '1NZ' => 'E02003425',
        '1PA' => 'E02003425',
        '1ZZ' => 'E02003425',
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
