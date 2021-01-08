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
final class TR10
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '8AA' => 'E02003914',
        '8AB' => 'E02003914',
        '8AD' => 'E02003914',
        '8AE' => 'E02003914',
        '8AF' => 'E02003914',
        '8AG' => 'E02003914',
        '8AH' => 'E02003914',
        '8AJ' => 'E02003914',
        '8AL' => 'E02003914',
        '8AN' => 'E02003914',
        '8AP' => 'E02003914',
        '8AQ' => 'E02003914',
        '8AR' => 'E02003914',
        '8AS' => 'E02003914',
        '8AT' => 'E02003914',
        '8AU' => 'E02003914',
        '8AW' => 'E02003914',
        '8AX' => 'E02003914',
        '8AY' => 'E02003914',
        '8AZ' => 'E02003914',
        '8BA' => 'E02003914',
        '8BB' => 'E02003915',
        '8BD' => 'E02003914',
        '8BE' => 'E02003914',
        '8BG' => 'E02003914',
        '8BH' => 'E02003914',
        '8BJ' => 'E02003914',
        '8BL' => 'E02003914',
        '8BN' => 'E02003914',
        '8BP' => 'E02003914',
        '8BQ' => 'E02003914',
        '8BS' => 'E02003914',
        '8BT' => 'E02003914',
        '8BU' => 'E02003914',
        '8BW' => 'E02003914',
        '8BX' => 'E02003914',
        '8BY' => 'E02003914',
        '8BZ' => 'E02003914',
        '8DA' => 'E02003914',
        '8DB' => 'E02003914',
        '8DD' => 'E02003914',
        '8DE' => 'E02003914',
        '8DF' => 'E02003914',
        '8DG' => 'E02003914',
        '8DH' => 'E02003914',
        '8DJ' => 'E02003914',
        '8DL' => 'E02003914',
        '8DN' => 'E02003914',
        '8DP' => 'E02003914',
        '8DQ' => 'E02003914',
        '8DR' => 'E02003914',
        '8DS' => 'E02003914',
        '8DT' => 'E02003914',
        '8DU' => 'E02003914',
        '8DW' => 'E02003914',
        '8DX' => 'E02003914',
        '8DY' => 'E02003914',
        '8DZ' => 'E02003914',
        '8EA' => 'E02003914',
        '8EB' => 'E02003914',
        '8ED' => 'E02003914',
        '8EE' => 'E02003914',
        '8EF' => 'E02003914',
        '8EG' => 'E02003914',
        '8EH' => 'E02003914',
        '8EJ' => 'E02003914',
        '8EL' => 'E02003914',
        '8EN' => 'E02003914',
        '8EP' => 'E02003914',
        '8EQ' => 'E02003914',
        '8ER' => 'E02003914',
        '8ES' => 'E02003914',
        '8ET' => 'E02003914',
        '8EU' => 'E02003914',
        '8EW' => 'E02003914',
        '8EX' => 'E02003914',
        '8EY' => 'E02003914',
        '8EZ' => 'E02003914',
        '8FA' => 'E02003914',
        '8FB' => 'E02003914',
        '8FD' => 'E02003914',
        '8FE' => 'E02003914',
        '8FF' => 'E02003914',
        '8FG' => 'E02003914',
        '8FH' => 'E02003914',
        '8FJ' => 'E02003914',
        '8FL' => 'E02003914',
        '8FN' => 'E02003914',
        '8GA' => 'E02003914',
        '8GB' => 'E02003914',
        '8GD' => 'E02003914',
        '8GE' => 'E02003914',
        '8GF' => 'E02003914',
        '8GG' => 'E02003914',
        '8GH' => 'E02003914',
        '8GJ' => 'E02003914',
        '8GL' => 'E02003914',
        '8GT' => 'E02003914',
        '8GU' => 'E02003914',
        '8GW' => 'E02003914',
        '8GX' => 'E02003914',
        '8GY' => 'E02003914',
        '8GZ' => 'E02003914',
        '8HA' => 'E02003914',
        '8HB' => 'E02003914',
        '8HD' => 'E02003914',
        '8HE' => 'E02003914',
        '8HF' => 'E02003914',
        '8HG' => 'E02003914',
        '8HH' => 'E02003914',
        '8HJ' => 'E02003914',
        '8HL' => 'E02003914',
        '8HN' => 'E02003914',
        '8HP' => 'E02003914',
        '8HQ' => 'E02003914',
        '8HR' => 'E02003914',
        '8HS' => 'E02003914',
        '8HT' => 'E02003914',
        '8HU' => 'E02003914',
        '8HW' => 'E02003914',
        '8HX' => 'E02003914',
        '8HY' => 'E02003914',
        '8HZ' => 'E02003914',
        '8JA' => 'E02003914',
        '8JB' => 'E02003914',
        '8JD' => 'E02003914',
        '8JE' => 'E02003914',
        '8JF' => 'E02003914',
        '8JG' => 'E02003914',
        '8JH' => 'E02003914',
        '8JJ' => 'E02003914',
        '8JL' => 'E02003914',
        '8JN' => 'E02003914',
        '8JP' => 'E02003914',
        '8JQ' => 'E02003914',
        '8JR' => 'E02003914',
        '8JS' => 'E02003914',
        '8JT' => 'E02003914',
        '8JU' => 'E02003914',
        '8JW' => 'E02003914',
        '8JX' => 'E02003914',
        '8JY' => 'E02003914',
        '8JZ' => 'E02003914',
        '8LA' => 'E02003914',
        '8LB' => 'E02003914',
        '8LD' => 'E02003914',
        '8LE' => 'E02003914',
        '8LF' => 'E02003914',
        '8LG' => 'E02003914',
        '8LH' => 'E02003914',
        '8LJ' => 'E02003914',
        '8LL' => 'E02003914',
        '8LN' => 'E02003914',
        '8LP' => 'E02003914',
        '8LQ' => 'E02003914',
        '8LR' => 'E02003914',
        '8LS' => 'E02003914',
        '8LT' => 'E02003914',
        '8LU' => 'E02003914',
        '8LW' => 'E02003914',
        '8LX' => 'E02003914',
        '8LY' => 'E02003914',
        '8LZ' => 'E02003914',
        '8NA' => 'E02003914',
        '8NB' => 'E02003927',
        '8ND' => 'E02003914',
        '8NE' => 'E02003914',
        '8NF' => 'E02003914',
        '8NG' => 'E02003914',
        '8NH' => 'E02003914',
        '8NJ' => 'E02003914',
        '8NL' => 'E02003914',
        '8NN' => 'E02003914',
        '8NP' => 'E02003914',
        '8NQ' => 'E02003914',
        '8NR' => 'E02003914',
        '8NS' => 'E02003914',
        '8NT' => 'E02003914',
        '8NU' => 'E02003914',
        '8NW' => 'E02003914',
        '8NX' => 'E02003914',
        '8NY' => 'E02003914',
        '8NZ' => 'E02003914',
        '8PA' => 'E02003914',
        '8PB' => 'E02003914',
        '8PD' => 'E02003914',
        '8PE' => 'E02003914',
        '8PF' => 'E02003914',
        '8PG' => 'E02003914',
        '8PH' => 'E02003914',
        '8PJ' => 'E02003914',
        '8PL' => 'E02003914',
        '8PN' => 'E02003914',
        '8PP' => 'E02003914',
        '8PQ' => 'E02003914',
        '8PR' => 'E02003914',
        '8PS' => 'E02003914',
        '8PT' => 'E02003914',
        '8PU' => 'E02003914',
        '8PW' => 'E02003914',
        '8PX' => 'E02003914',
        '8PY' => 'E02003914',
        '8PZ' => 'E02003914',
        '8QA' => 'E02003914',
        '8QB' => 'E02003914',
        '8QD' => 'E02003914',
        '8QE' => 'E02003914',
        '8QF' => 'E02003914',
        '8QG' => 'E02003914',
        '8QH' => 'E02003914',
        '8QJ' => 'E02003914',
        '8QL' => 'E02003914',
        '8QN' => 'E02003914',
        '8QP' => 'E02003914',
        '8QQ' => 'E02003914',
        '8QR' => 'E02003914',
        '8QS' => 'E02003914',
        '8QT' => 'E02003914',
        '8QU' => 'E02003914',
        '8QW' => 'E02003914',
        '8QX' => 'E02003914',
        '8QY' => 'E02003914',
        '8QZ' => 'E02003914',
        '8RA' => 'E02003914',
        '8RB' => 'E02003914',
        '8RD' => 'E02003914',
        '8RE' => 'E02003914',
        '8RF' => 'E02003914',
        '8RG' => 'E02003914',
        '8RH' => 'E02003914',
        '8RJ' => 'E02003914',
        '8RL' => 'E02003914',
        '8RN' => 'E02003914',
        '8RP' => 'E02003914',
        '8RQ' => 'E02003914',
        '8RR' => 'E02003914',
        '8RS' => 'E02003927',
        '8RT' => 'E02003914',
        '8RU' => 'E02003914',
        '8RW' => 'E02003914',
        '8RX' => 'E02003914',
        '8RY' => 'E02003914',
        '8RZ' => 'E02003914',
        '8SA' => 'E02003914',
        '8SB' => 'E02003914',
        '8SD' => 'E02003914',
        '8SE' => 'E02003914',
        '8SF' => 'E02003914',
        '8SG' => 'E02003914',
        '8SH' => 'E02003914',
        '8SJ' => 'E02003914',
        '8WJ' => 'E02003914',
        '8WR' => 'E02003927',
        '8WS' => 'E02003927',
        '8WT' => 'E02003927',
        '8WU' => 'E02003927',
        '8WW' => 'E02003927',
        '8WX' => 'E02003927',
        '8WY' => 'E02003927',
        '8WZ' => 'E02003927',
        '8XN' => 'E02003927',
        '8YA' => 'E02003927',
        '8YB' => 'E02003914',
        '8YD' => 'E02003927',
        '8YE' => 'E02003914',
        '8YF' => 'E02003914',
        '8YG' => 'E02003914',
        '8YH' => 'E02003927',
        '8YJ' => 'E02003914',
        '8YL' => 'E02003927',
        '8YN' => 'E02003914',
        '8YP' => 'E02003914',
        '8YQ' => 'E02003927',
        '8YR' => 'E02003927',
        '8YS' => 'E02003927',
        '8ZJ' => 'E02003927',
        '8ZN' => 'E02003927',
        '8ZQ' => 'E02003927',
        '8ZR' => 'E02003927',
        '8ZW' => 'E02003914',
        '8ZX' => 'E02003927',
        '9AA' => 'E02003927',
        '9AB' => 'E02003927',
        '9AD' => 'E02003927',
        '9AE' => 'E02003927',
        '9AF' => 'E02003927',
        '9AG' => 'E02003926',
        '9AH' => 'E02003927',
        '9AJ' => 'E02003927',
        '9AL' => 'E02003927',
        '9AN' => 'E02003927',
        '9AP' => 'E02003927',
        '9AQ' => 'E02003926',
        '9AR' => 'E02003927',
        '9AS' => 'E02003927',
        '9AT' => 'E02003927',
        '9AU' => 'E02003927',
        '9AW' => 'E02003927',
        '9AX' => 'E02003927',
        '9AY' => 'E02003927',
        '9AZ' => 'E02003927',
        '9BA' => 'E02003913',
        '9BB' => 'E02003927',
        '9BD' => 'E02003927',
        '9BJ' => 'E02003927',
        '9BL' => 'E02003927',
        '9BN' => 'E02003927',
        '9BP' => 'E02003927',
        '9BQ' => 'E02003914',
        '9BS' => 'E02003927',
        '9BT' => 'E02003927',
        '9BU' => 'E02003927',
        '9BW' => 'E02003927',
        '9BX' => 'E02003927',
        '9BY' => 'E02003927',
        '9BZ' => 'E02003926',
        '9DA' => 'E02003927',
        '9DB' => 'E02003914',
        '9DD' => 'E02003914',
        '9DE' => 'E02003914',
        '9DF' => 'E02003927',
        '9DG' => 'E02003914',
        '9DH' => 'E02003927',
        '9DJ' => 'E02003927',
        '9DL' => 'E02003926',
        '9DN' => 'E02003926',
        '9DP' => 'E02003926',
        '9DQ' => 'E02003914',
        '9DR' => 'E02003926',
        '9DS' => 'E02003926',
        '9DT' => 'E02003926',
        '9DU' => 'E02003926',
        '9DW' => 'E02003926',
        '9DX' => 'E02003926',
        '9DY' => 'E02003926',
        '9DZ' => 'E02003926',
        '9EA' => 'E02003926',
        '9EB' => 'E02003926',
        '9ED' => 'E02003926',
        '9EE' => 'E02003926',
        '9EF' => 'E02003926',
        '9EG' => 'E02003926',
        '9EH' => 'E02003926',
        '9EJ' => 'E02003926',
        '9EL' => 'E02003927',
        '9EN' => 'E02003914',
        '9EP' => 'E02003927',
        '9EQ' => 'E02003926',
        '9ER' => 'E02003914',
        '9ES' => 'E02003926',
        '9ET' => 'E02003927',
        '9EU' => 'E02003927',
        '9EW' => 'E02003914',
        '9EX' => 'E02003927',
        '9EY' => 'E02003927',
        '9EZ' => 'E02003927',
        '9FA' => 'E02003927',
        '9FB' => 'E02003927',
        '9FD' => 'E02003927',
        '9FE' => 'E02003927',
        '9FF' => 'E02003927',
        '9FG' => 'E02003927',
        '9FH' => 'E02003926',
        '9FJ' => 'E02003926',
        '9FL' => 'E02003914',
        '9FN' => 'E02003927',
        '9HA' => 'E02003927',
        '9HB' => 'E02003927',
        '9HD' => 'E02003927',
        '9HE' => 'E02003927',
        '9HF' => 'E02003927',
        '9HG' => 'E02003927',
        '9HH' => 'E02003927',
        '9HJ' => 'E02003927',
        '9HL' => 'E02003927',
        '9HN' => 'E02003927',
        '9HP' => 'E02003927',
        '9HQ' => 'E02003927',
        '9HR' => 'E02003927',
        '9HS' => 'E02003927',
        '9HT' => 'E02003927',
        '9HU' => 'E02003927',
        '9HW' => 'E02003927',
        '9HX' => 'E02003927',
        '9HY' => 'E02003927',
        '9HZ' => 'E02003927',
        '9JA' => 'E02003927',
        '9JB' => 'E02003927',
        '9JD' => 'E02003927',
        '9JE' => 'E02003927',
        '9JF' => 'E02003927',
        '9JG' => 'E02003927',
        '9JH' => 'E02003927',
        '9JJ' => 'E02003927',
        '9JL' => 'E02003927',
        '9JQ' => 'E02003927',
        '9JR' => 'E02003927',
        '9JS' => 'E02003927',
        '9JT' => 'E02003927',
        '9JU' => 'E02003927',
        '9JW' => 'E02003927',
        '9LA' => 'E02003914',
        '9LB' => 'E02003914',
        '9LD' => 'E02003913',
        '9LE' => 'E02003914',
        '9LF' => 'E02003914',
        '9LH' => 'E02003914',
        '9LJ' => 'E02003913',
        '9LL' => 'E02003914',
        '9LP' => 'E02003926',
        '9LQ' => 'E02003914',
        '9LR' => 'E02003913',
        '9LT' => 'E02003926',
        '9LU' => 'E02003927',
        '9LW' => 'E02003926',
        '9LX' => 'E02003927',
        '9LY' => 'E02003914',
        '9LZ' => 'E02003927',
        '9NA' => 'E02003926',
        '9NB' => 'E02003926',
        '9ND' => 'E02003926',
        '9TA' => 'E02003927',
        '9WS' => 'E02003914',
        '9WT' => 'E02003914',
        '9WU' => 'E02003927',
        '9WW' => 'E02003927',
        '9WX' => 'E02003927',
        '9WY' => 'E02003927',
        '9WZ' => 'E02003927',
        '9XQ' => 'E02003927',
        '9XR' => 'E02003927',
        '9YA' => 'E02003926',
        '9YB' => 'E02003926',
        '9YD' => 'E02003926',
        '9YE' => 'E02003926',
        '9YF' => 'E02003927',
        '9YG' => 'E02003927',
        '9YH' => 'E02003927',
        '9YJ' => 'E02003927',
        '9YL' => 'E02003927',
        '9YN' => 'E02003927',
        '9YP' => 'E02003927',
        '9YQ' => 'E02003927',
        '9YR' => 'E02003927',
        '9YS' => 'E02003927',
        '9YT' => 'E02003927',
        '9YU' => 'E02003927',
        '9YW' => 'E02003926',
        '9YX' => 'E02003927',
        '9ZQ' => 'E02003927',
        '9ZX' => 'E02003927',
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