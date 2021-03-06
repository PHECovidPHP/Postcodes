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
final class EX38
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '7AB' => 'E02004225',
        '7AD' => 'E02004225',
        '7AE' => 'E02004225',
        '7AF' => 'E02004225',
        '7AG' => 'E02004225',
        '7AH' => 'E02004225',
        '7AJ' => 'E02004225',
        '7AL' => 'E02004225',
        '7AN' => 'E02004225',
        '7AP' => 'E02004225',
        '7AQ' => 'E02004225',
        '7AR' => 'E02004225',
        '7AS' => 'E02004225',
        '7AT' => 'E02004225',
        '7AW' => 'E02004225',
        '7AZ' => 'E02004226',
        '7BA' => 'E02004225',
        '7BB' => 'E02004225',
        '7BD' => 'E02004225',
        '7BE' => 'E02004225',
        '7BG' => 'E02004225',
        '7BH' => 'E02004225',
        '7BJ' => 'E02004225',
        '7BL' => 'E02004225',
        '7BN' => 'E02004225',
        '7BP' => 'E02004225',
        '7BQ' => 'E02004225',
        '7BR' => 'E02004225',
        '7BS' => 'E02004225',
        '7BT' => 'E02004225',
        '7BU' => 'E02004225',
        '7BW' => 'E02004225',
        '7BX' => 'E02004225',
        '7BY' => 'E02004225',
        '7DA' => 'E02004225',
        '7DB' => 'E02004225',
        '7DD' => 'E02004225',
        '7DE' => 'E02004225',
        '7DF' => 'E02004225',
        '7DG' => 'E02004225',
        '7DH' => 'E02004225',
        '7DJ' => 'E02004225',
        '7DL' => 'E02004225',
        '7DN' => 'E02004225',
        '7DP' => 'E02004225',
        '7DQ' => 'E02004225',
        '7DR' => 'E02004225',
        '7DS' => 'E02004225',
        '7DT' => 'E02004225',
        '7DU' => 'E02004225',
        '7DW' => 'E02004225',
        '7DX' => 'E02004225',
        '7ED' => 'E02004225',
        '7EE' => 'E02004225',
        '7EF' => 'E02004225',
        '7EG' => 'E02004226',
        '7EH' => 'E02004226',
        '7EJ' => 'E02004226',
        '7EL' => 'E02004225',
        '7EN' => 'E02004225',
        '7EP' => 'E02004225',
        '7EQ' => 'E02004226',
        '7ER' => 'E02004225',
        '7ES' => 'E02004225',
        '7ET' => 'E02004225',
        '7EU' => 'E02004225',
        '7EW' => 'E02004225',
        '7EX' => 'E02004225',
        '7EY' => 'E02004225',
        '7EZ' => 'E02004225',
        '7HA' => 'E02004225',
        '7HB' => 'E02004223',
        '7HD' => 'E02004223',
        '7HE' => 'E02004223',
        '7HF' => 'E02004223',
        '7HG' => 'E02004223',
        '7HH' => 'E02004223',
        '7HJ' => 'E02004223',
        '7HL' => 'E02004225',
        '7HP' => 'E02004225',
        '7HQ' => 'E02004223',
        '7HR' => 'E02004225',
        '7HS' => 'E02004225',
        '7HT' => 'E02004225',
        '7HU' => 'E02004225',
        '7HW' => 'E02004226',
        '7HX' => 'E02004225',
        '7HY' => 'E02004226',
        '7HZ' => 'E02004226',
        '7JA' => 'E02004226',
        '7JB' => 'E02004226',
        '7JD' => 'E02004226',
        '7JE' => 'E02004226',
        '7JF' => 'E02004226',
        '7JG' => 'E02004226',
        '7JH' => 'E02004226',
        '7JJ' => 'E02004226',
        '7JL' => 'E02004226',
        '7JN' => 'E02004226',
        '7JP' => 'E02004226',
        '7JQ' => 'E02004226',
        '7JR' => 'E02004226',
        '7JS' => 'E02004226',
        '7JT' => 'E02004226',
        '7JU' => 'E02004226',
        '7JW' => 'E02004226',
        '7JX' => 'E02004226',
        '7JY' => 'E02004226',
        '7JZ' => 'E02004226',
        '7LA' => 'E02004226',
        '7LB' => 'E02004226',
        '7LD' => 'E02004223',
        '7LF' => 'E02004226',
        '7LG' => 'E02004225',
        '7LQ' => 'E02004225',
        '7NA' => 'E02004225',
        '7NB' => 'E02004225',
        '7ND' => 'E02004225',
        '7NE' => 'E02004225',
        '7NF' => 'E02004225',
        '7NG' => 'E02004225',
        '7NH' => 'E02004225',
        '7NJ' => 'E02004225',
        '7NL' => 'E02004225',
        '7NN' => 'E02004225',
        '7NP' => 'E02004225',
        '7NQ' => 'E02004225',
        '7NR' => 'E02004225',
        '7NS' => 'E02004225',
        '7NT' => 'E02004225',
        '7NU' => 'E02004225',
        '7NW' => 'E02004225',
        '7NX' => 'E02004225',
        '7NY' => 'E02004225',
        '7NZ' => 'E02004225',
        '7PA' => 'E02004225',
        '7WA' => 'E02004225',
        '7WB' => 'E02004225',
        '7WW' => 'E02004225',
        '7WX' => 'E02004225',
        '7WY' => 'E02004225',
        '7WZ' => 'E02004225',
        '7XQ' => 'E02004225',
        '7YU' => 'E02004225',
        '7YX' => 'E02004225',
        '7YY' => 'E02004225',
        '7ZX' => 'E02004225',
        '8AA' => 'E02004225',
        '8AB' => 'E02004225',
        '8AD' => 'E02004225',
        '8AE' => 'E02004225',
        '8AF' => 'E02004225',
        '8AG' => 'E02004225',
        '8AH' => 'E02004225',
        '8AJ' => 'E02004225',
        '8AL' => 'E02004225',
        '8AN' => 'E02004225',
        '8AP' => 'E02004225',
        '8AQ' => 'E02004225',
        '8AR' => 'E02004225',
        '8AS' => 'E02004226',
        '8AT' => 'E02004226',
        '8AU' => 'E02004225',
        '8AW' => 'E02004225',
        '8AX' => 'E02004225',
        '8AY' => 'E02004225',
        '8AZ' => 'E02004225',
        '8BA' => 'E02004226',
        '8BB' => 'E02004225',
        '8BD' => 'E02004225',
        '8BE' => 'E02004225',
        '8BH' => 'E02004225',
        '8BJ' => 'E02004225',
        '8BL' => 'E02004225',
        '8BN' => 'E02004225',
        '8BP' => 'E02004225',
        '8BS' => 'E02004225',
        '8BT' => 'E02004225',
        '8BU' => 'E02004225',
        '8BW' => 'E02004225',
        '8BX' => 'E02004225',
        '8BY' => 'E02004225',
        '8BZ' => 'E02004225',
        '8DA' => 'E02004225',
        '8DB' => 'E02004225',
        '8DD' => 'E02004225',
        '8DE' => 'E02004225',
        '8DF' => 'E02004225',
        '8DG' => 'E02004225',
        '8DH' => 'E02004225',
        '8DJ' => 'E02004225',
        '8DL' => 'E02004225',
        '8DN' => 'E02004225',
        '8DP' => 'E02004225',
        '8DQ' => 'E02004225',
        '8DR' => 'E02004225',
        '8DS' => 'E02004225',
        '8DT' => 'E02004225',
        '8DU' => 'E02004225',
        '8DW' => 'E02004225',
        '8DX' => 'E02004225',
        '8DY' => 'E02004225',
        '8DZ' => 'E02004225',
        '8EA' => 'E02004225',
        '8EB' => 'E02004225',
        '8ED' => 'E02004225',
        '8EE' => 'E02004225',
        '8EF' => 'E02004225',
        '8EG' => 'E02004225',
        '8EH' => 'E02004225',
        '8EJ' => 'E02004225',
        '8EL' => 'E02004225',
        '8EN' => 'E02004225',
        '8EP' => 'E02004225',
        '8EQ' => 'E02004225',
        '8ER' => 'E02004225',
        '8ES' => 'E02004225',
        '8ET' => 'E02004225',
        '8EU' => 'E02004225',
        '8EW' => 'E02004225',
        '8EX' => 'E02004225',
        '8EY' => 'E02004225',
        '8EZ' => 'E02004225',
        '8FA' => 'E02004224',
        '8HA' => 'E02004225',
        '8HB' => 'E02004225',
        '8HD' => 'E02004225',
        '8HE' => 'E02004225',
        '8HF' => 'E02004225',
        '8HH' => 'E02004225',
        '8HJ' => 'E02004225',
        '8HL' => 'E02004225',
        '8HN' => 'E02004225',
        '8HP' => 'E02004225',
        '8HQ' => 'E02004225',
        '8HR' => 'E02004225',
        '8HS' => 'E02004225',
        '8HT' => 'E02004225',
        '8HU' => 'E02004225',
        '8HW' => 'E02004225',
        '8HX' => 'E02004228',
        '8HY' => 'E02004228',
        '8HZ' => 'E02004228',
        '8JA' => 'E02004226',
        '8JB' => 'E02004226',
        '8JD' => 'E02004225',
        '8JE' => 'E02004224',
        '8JF' => 'E02004225',
        '8JG' => 'E02004224',
        '8JH' => 'E02004224',
        '8JJ' => 'E02004224',
        '8JL' => 'E02004224',
        '8JN' => 'E02004224',
        '8JP' => 'E02004224',
        '8JQ' => 'E02004228',
        '8JR' => 'E02004224',
        '8JS' => 'E02004224',
        '8JT' => 'E02004227',
        '8JU' => 'E02004227',
        '8JW' => 'E02004224',
        '8JX' => 'E02004228',
        '8JY' => 'E02004224',
        '8JZ' => 'E02004224',
        '8LA' => 'E02004224',
        '8LB' => 'E02004224',
        '8LD' => 'E02004224',
        '8LE' => 'E02004228',
        '8LF' => 'E02004224',
        '8LG' => 'E02004228',
        '8LH' => 'E02004228',
        '8LJ' => 'E02004228',
        '8LL' => 'E02004228',
        '8LN' => 'E02004228',
        '8LP' => 'E02004228',
        '8LQ' => 'E02004228',
        '8LR' => 'E02004228',
        '8LS' => 'E02004228',
        '8LT' => 'E02004228',
        '8LU' => 'E02004228',
        '8LW' => 'E02004228',
        '8LX' => 'E02004228',
        '8LY' => 'E02004228',
        '8LZ' => 'E02004227',
        '8NA' => 'E02004226',
        '8NB' => 'E02004228',
        '8ND' => 'E02004228',
        '8NE' => 'E02004228',
        '8NF' => 'E02004228',
        '8NG' => 'E02004228',
        '8NH' => 'E02004228',
        '8NJ' => 'E02004228',
        '8NL' => 'E02004228',
        '8NN' => 'E02004228',
        '8NP' => 'E02004228',
        '8NQ' => 'E02004228',
        '8NR' => 'E02004228',
        '8NS' => 'E02004228',
        '8NT' => 'E02004228',
        '8NU' => 'E02004228',
        '8NW' => 'E02004228',
        '8NX' => 'E02004228',
        '8NY' => 'E02004228',
        '8NZ' => 'E02004228',
        '8PA' => 'E02004228',
        '8PB' => 'E02004224',
        '8PD' => 'E02004224',
        '8PE' => 'E02004224',
        '8PF' => 'E02004228',
        '8PH' => 'E02004226',
        '8PJ' => 'E02004226',
        '8PL' => 'E02004226',
        '8PN' => 'E02004226',
        '8PP' => 'E02004226',
        '8PR' => 'E02004226',
        '8PS' => 'E02004226',
        '8PT' => 'E02004226',
        '8PU' => 'E02004226',
        '8PW' => 'E02004228',
        '8PX' => 'E02004226',
        '8PY' => 'E02004226',
        '8PZ' => 'E02004226',
        '8QA' => 'E02004226',
        '8QB' => 'E02004226',
        '8QD' => 'E02004226',
        '8QE' => 'E02004226',
        '8QF' => 'E02004226',
        '8QG' => 'E02004226',
        '8QH' => 'E02004226',
        '8QJ' => 'E02004226',
        '8QL' => 'E02004226',
        '8QN' => 'E02004226',
        '8QP' => 'E02004226',
        '8QQ' => 'E02004226',
        '8QR' => 'E02004226',
        '8QS' => 'E02004226',
        '8QT' => 'E02004226',
        '8QU' => 'E02004226',
        '8QW' => 'E02004226',
        '8QZ' => 'E02004228',
        '8RA' => 'E02004225',
        '8RB' => 'E02004228',
        '8RD' => 'E02004226',
        '8RH' => 'E02004228',
        '8RS' => 'E02004228',
        '8WB' => 'E02004225',
        '8WS' => 'E02004225',
        '8WT' => 'E02004225',
        '8WU' => 'E02004225',
        '8WW' => 'E02004225',
        '8WX' => 'E02004225',
        '8WY' => 'E02004225',
        '8WZ' => 'E02004225',
        '8YP' => 'E02004225',
        '8YR' => 'E02004226',
        '8YS' => 'E02004226',
        '8YT' => 'E02004226',
        '8YU' => 'E02004226',
        '8YX' => 'E02004225',
        '8YY' => 'E02004226',
        '8ZJ' => 'E02004225',
        '8ZQ' => 'E02004225',
        '9AA' => 'E02004225',
        '9AL' => 'E02004225',
        '9AN' => 'E02004225',
        '9AP' => 'E02004225',
        '9AQ' => 'E02004225',
        '9AR' => 'E02004225',
        '9AS' => 'E02004225',
        '9AT' => 'E02004225',
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
