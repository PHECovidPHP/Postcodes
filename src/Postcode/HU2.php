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
final class HU2
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02002680',
        '0AB' => 'E02002680',
        '0AD' => 'E02002680',
        '0AE' => 'E02002680',
        '0AJ' => 'E02002675',
        '0AN' => 'E02002675',
        '0AQ' => 'E02002675',
        '0AT' => 'E02002675',
        '0BA' => 'E02002675',
        '0BB' => 'E02002675',
        '0BD' => 'E02002675',
        '0BE' => 'E02002675',
        '0BG' => 'E02002675',
        '0BQ' => 'E02002675',
        '0BW' => 'E02002675',
        '0DG' => 'E02002675',
        '0DH' => 'E02002675',
        '0DJ' => 'E02002680',
        '0DT' => 'E02002680',
        '0DU' => 'E02002680',
        '0DW' => 'E02002680',
        '0DX' => 'E02002675',
        '0DY' => 'E02002675',
        '0DZ' => 'E02002675',
        '0HA' => 'E02002680',
        '0HB' => 'E02002680',
        '0HD' => 'E02002680',
        '0HE' => 'E02002680',
        '0HG' => 'E02002680',
        '0HH' => 'E02002680',
        '0HJ' => 'E02002675',
        '0HL' => 'E02002680',
        '0HN' => 'E02002680',
        '0HP' => 'E02002680',
        '0HQ' => 'E02002680',
        '0HR' => 'E02002680',
        '0HS' => 'E02002675',
        '0HT' => 'E02002680',
        '0HW' => 'E02002680',
        '0HX' => 'E02002675',
        '0HY' => 'E02002675',
        '0HZ' => 'E02002675',
        '0JA' => 'E02002675',
        '0JB' => 'E02002675',
        '0JP' => 'E02002675',
        '0JT' => 'E02002680',
        '0JU' => 'E02002680',
        '0JX' => 'E02002675',
        '0JZ' => 'E02002675',
        '0LA' => 'E02002680',
        '0LB' => 'E02002675',
        '0LD' => 'E02002680',
        '0LE' => 'E02002675',
        '0LF' => 'E02002675',
        '0LG' => 'E02002675',
        '0LH' => 'E02002675',
        '0LJ' => 'E02002675',
        '0LL' => 'E02002675',
        '0LN' => 'E02002680',
        '0LP' => 'E02002675',
        '0LR' => 'E02002675',
        '0LS' => 'E02002675',
        '0LT' => 'E02002675',
        '0LU' => 'E02002675',
        '0LX' => 'E02002675',
        '0LY' => 'E02002675',
        '0LZ' => 'E02002675',
        '0NA' => 'E02002675',
        '0NB' => 'E02002675',
        '0ND' => 'E02002675',
        '0NE' => 'E02002675',
        '0NF' => 'E02002677',
        '0PA' => 'E02002680',
        '0PB' => 'E02002680',
        '0PD' => 'E02002680',
        '0PE' => 'E02002680',
        '0PF' => 'E02002680',
        '0PG' => 'E02002680',
        '0PH' => 'E02002680',
        '0PJ' => 'E02002680',
        '0PN' => 'E02002680',
        '0PP' => 'E02002675',
        '0PQ' => 'E02002680',
        '0PR' => 'E02002675',
        '0PS' => 'E02002675',
        '0PT' => 'E02002675',
        '0PU' => 'E02002680',
        '0PW' => 'E02002680',
        '0PX' => 'E02002680',
        '0PY' => 'E02002680',
        '0PZ' => 'E02002675',
        '0QA' => 'E02002680',
        '0QB' => 'E02002680',
        '0QD' => 'E02002675',
        '0QE' => 'E02002675',
        '0QF' => 'E02002680',
        '0QG' => 'E02002680',
        '0QH' => 'E02002680',
        '0QL' => 'E02002675',
        '0QN' => 'E02002675',
        '0QP' => 'E02002675',
        '0QQ' => 'E02002675',
        '0QR' => 'E02002680',
        '0QS' => 'E02002675',
        '0QU' => 'E02002677',
        '0QW' => 'E02002675',
        '0QX' => 'E02002675',
        '0TA' => 'E02002675',
        '0WX' => 'E02002675',
        '0WY' => 'E02002677',
        '0WZ' => 'E02002677',
        '0YW' => 'E02002680',
        '0YX' => 'E02002677',
        '8AA' => 'E02002680',
        '8AB' => 'E02002680',
        '8AD' => 'E02002680',
        '8AE' => 'E02002680',
        '8AF' => 'E02002680',
        '8AG' => 'E02002680',
        '8AH' => 'E02002680',
        '8AJ' => 'E02002680',
        '8AL' => 'E02002680',
        '8AN' => 'E02002680',
        '8AP' => 'E02002680',
        '8AQ' => 'E02002680',
        '8AR' => 'E02002680',
        '8AS' => 'E02002680',
        '8AT' => 'E02002680',
        '8AU' => 'E02002680',
        '8AW' => 'E02002680',
        '8AX' => 'E02002680',
        '8AY' => 'E02002680',
        '8AZ' => 'E02002680',
        '8BA' => 'E02002680',
        '8BB' => 'E02002680',
        '8BD' => 'E02002680',
        '8BE' => 'E02002680',
        '8BG' => 'E02002680',
        '8BH' => 'E02002680',
        '8BJ' => 'E02002680',
        '8BL' => 'E02002680',
        '8BN' => 'E02002680',
        '8BP' => 'E02002680',
        '8BQ' => 'E02002680',
        '8BT' => 'E02002680',
        '8DA' => 'E02002680',
        '8DB' => 'E02002680',
        '8DD' => 'E02002680',
        '8DE' => 'E02002680',
        '8DF' => 'E02002680',
        '8DG' => 'E02002680',
        '8DH' => 'E02002680',
        '8DJ' => 'E02002680',
        '8DL' => 'E02002680',
        '8DN' => 'E02002680',
        '8DP' => 'E02002680',
        '8DQ' => 'E02002680',
        '8DR' => 'E02002680',
        '8DS' => 'E02002680',
        '8DT' => 'E02002680',
        '8DU' => 'E02002680',
        '8DW' => 'E02002680',
        '8DX' => 'E02002680',
        '8DY' => 'E02002680',
        '8DZ' => 'E02002680',
        '8EA' => 'E02002680',
        '8EB' => 'E02002680',
        '8ED' => 'E02002680',
        '8EE' => 'E02002680',
        '8EF' => 'E02002680',
        '8EG' => 'E02002680',
        '8EH' => 'E02002680',
        '8EJ' => 'E02002680',
        '8EN' => 'E02002680',
        '8EP' => 'E02002680',
        '8ER' => 'E02002680',
        '8ES' => 'E02002680',
        '8ET' => 'E02002680',
        '8GA' => 'E02002680',
        '8HA' => 'E02002680',
        '8HB' => 'E02002680',
        '8HD' => 'E02002680',
        '8HE' => 'E02002680',
        '8HF' => 'E02002677',
        '8HG' => 'E02002680',
        '8HH' => 'E02002680',
        '8HJ' => 'E02002680',
        '8HL' => 'E02002680',
        '8HN' => 'E02002680',
        '8HP' => 'E02002680',
        '8HQ' => 'E02002680',
        '8HR' => 'E02002680',
        '8HS' => 'E02002677',
        '8HT' => 'E02002680',
        '8HU' => 'E02002680',
        '8HX' => 'E02002680',
        '8HY' => 'E02002680',
        '8HZ' => 'E02002680',
        '8JA' => 'E02002680',
        '8JB' => 'E02002680',
        '8JD' => 'E02002680',
        '8JE' => 'E02002680',
        '8JF' => 'E02002680',
        '8JG' => 'E02002680',
        '8JH' => 'E02002677',
        '8JJ' => 'E02002680',
        '8JL' => 'E02002680',
        '8JN' => 'E02002680',
        '8JP' => 'E02002680',
        '8JQ' => 'E02002680',
        '8JR' => 'E02002680',
        '8JS' => 'E02002680',
        '8JU' => 'E02002680',
        '8JX' => 'E02002680',
        '8JY' => 'E02002680',
        '8JZ' => 'E02002680',
        '8LA' => 'E02002680',
        '8LB' => 'E02002680',
        '8LD' => 'E02002680',
        '8LE' => 'E02002680',
        '8LH' => 'E02002680',
        '8LN' => 'E02002680',
        '8LP' => 'E02002680',
        '8LQ' => 'E02002680',
        '8LR' => 'E02002680',
        '8LS' => 'E02002680',
        '8LT' => 'E02002680',
        '8LU' => 'E02002680',
        '8LX' => 'E02002680',
        '8LY' => 'E02002680',
        '8LZ' => 'E02002680',
        '8NA' => 'E02002680',
        '8NE' => 'E02002680',
        '8NF' => 'E02002680',
        '8NG' => 'E02002680',
        '8NH' => 'E02002680',
        '8NJ' => 'E02002680',
        '8NL' => 'E02002680',
        '8NN' => 'E02002680',
        '8NP' => 'E02002680',
        '8NR' => 'E02002680',
        '8NS' => 'E02002680',
        '8NT' => 'E02002680',
        '8NU' => 'E02002680',
        '8NW' => 'E02002680',
        '8NX' => 'E02002680',
        '8NY' => 'E02002680',
        '8NZ' => 'E02002680',
        '8PA' => 'E02002680',
        '8PD' => 'E02002680',
        '8PE' => 'E02002680',
        '8PF' => 'E02002680',
        '8PG' => 'E02002680',
        '8PH' => 'E02002680',
        '8PJ' => 'E02002680',
        '8PL' => 'E02002680',
        '8PN' => 'E02002680',
        '8PP' => 'E02002680',
        '8PQ' => 'E02002680',
        '8PR' => 'E02002680',
        '8PS' => 'E02002680',
        '8PT' => 'E02002680',
        '8PU' => 'E02002680',
        '8PW' => 'E02002680',
        '8PX' => 'E02002680',
        '8PY' => 'E02002680',
        '8PZ' => 'E02002680',
        '8QA' => 'E02002680',
        '8QB' => 'E02002680',
        '8QE' => 'E02002680',
        '8QF' => 'E02002680',
        '8QG' => 'E02002680',
        '8QH' => 'E02002680',
        '8QJ' => 'E02002680',
        '8QL' => 'E02002680',
        '8QN' => 'E02002680',
        '8QP' => 'E02002680',
        '8QQ' => 'E02002680',
        '8QS' => 'E02002680',
        '8QT' => 'E02002680',
        '8QU' => 'E02002680',
        '8QW' => 'E02002680',
        '8QY' => 'E02002680',
        '8RA' => 'E02002680',
        '8RB' => 'E02002680',
        '8RD' => 'E02002680',
        '8RL' => 'E02002680',
        '8RP' => 'E02002680',
        '8RR' => 'E02002680',
        '8RS' => 'E02002680',
        '8RT' => 'E02002680',
        '8RU' => 'E02002680',
        '8RW' => 'E02002680',
        '8RX' => 'E02002680',
        '8RY' => 'E02002680',
        '8RZ' => 'E02002680',
        '8SA' => 'E02002680',
        '8SB' => 'E02002680',
        '8SF' => 'E02002680',
        '8SH' => 'E02002680',
        '8TA' => 'E02002680',
        '8TB' => 'E02002675',
        '8TD' => 'E02002680',
        '8TE' => 'E02002680',
        '8TH' => 'E02002680',
        '8TJ' => 'E02002680',
        '8UT' => 'E02002714',
        '8WY' => 'E02002677',
        '8WZ' => 'E02002677',
        '8XZ' => 'E02002680',
        '8YA' => 'E02002677',
        '8YB' => 'E02002677',
        '8YD' => 'E02002677',
        '8YE' => 'E02002680',
        '8YF' => 'E02002677',
        '8YG' => 'E02002677',
        '8YH' => 'E02002680',
        '8YJ' => 'E02002680',
        '8YL' => 'E02002680',
        '8YN' => 'E02002680',
        '8YP' => 'E02002677',
        '8YQ' => 'E02002677',
        '8YR' => 'E02002677',
        '8YS' => 'E02002677',
        '8YT' => 'E02002714',
        '8YU' => 'E02002714',
        '8YW' => 'E02002677',
        '8YX' => 'E02002714',
        '8YY' => 'E02002680',
        '8YZ' => 'E02002680',
        '9AA' => 'E02002680',
        '9AB' => 'E02002680',
        '9AD' => 'E02002680',
        '9AE' => 'E02002680',
        '9AF' => 'E02002680',
        '9AG' => 'E02002675',
        '9AN' => 'E02002680',
        '9AP' => 'E02002680',
        '9AY' => 'E02002675',
        '9BB' => 'E02002675',
        '9BE' => 'E02002675',
        '9BG' => 'E02002675',
        '9BH' => 'E02002675',
        '9BJ' => 'E02002675',
        '9BL' => 'E02002675',
        '9BP' => 'E02002675',
        '9BQ' => 'E02002680',
        '9BT' => 'E02002680',
        '9BW' => 'E02002675',
        '9BX' => 'E02002675',
        '9BY' => 'E02002680',
        '9DA' => 'E02002675',
        '9DB' => 'E02002680',
        '9JH' => 'E02002680',
        '9JJ' => 'E02002680',
        '9JP' => 'E02002680',
        '9JR' => 'E02002675',
        '9LB' => 'E02002680',
        '9LE' => 'E02002675',
        '9LG' => 'E02002675',
        '9LP' => 'E02002675',
        '9LW' => 'E02002675',
        '9PA' => 'E02002675',
        '9PB' => 'E02002675',
        '9PD' => 'E02002675',
        '9PE' => 'E02002675',
        '9PF' => 'E02002675',
        '9PG' => 'E02002675',
        '9PH' => 'E02002675',
        '9PR' => 'E02002675',
        '9WZ' => 'E02002677',
        '9YP' => 'E02002675',
        '9YU' => 'E02002677',
        '9YW' => 'E02002677',
        '9YX' => 'E02002675',
        '9YY' => 'E02002677',
        '9YZ' => 'E02002675',
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
