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
final class OX27
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AD' => 'E02003655',
        '0AE' => 'E02003655',
        '0AF' => 'E02003655',
        '0AG' => 'E02003655',
        '0AH' => 'E02003655',
        '0AJ' => 'E02003655',
        '0AL' => 'E02003655',
        '0AN' => 'E02003655',
        '0AP' => 'E02003655',
        '0AQ' => 'E02005931',
        '0AR' => 'E02003655',
        '0AS' => 'E02003655',
        '0AT' => 'E02003655',
        '0AU' => 'E02003655',
        '0AW' => 'E02003655',
        '0AX' => 'E02003655',
        '0BJ' => 'E02003655',
        '0BL' => 'E02003655',
        '0BN' => 'E02003655',
        '0BQ' => 'E02003655',
        '0BS' => 'E02003655',
        '0BT' => 'E02003655',
        '0BW' => 'E02003655',
        '0EN' => 'E02003655',
        '0EP' => 'E02003655',
        '0ER' => 'E02003655',
        '0ES' => 'E02003655',
        '0ET' => 'E02003655',
        '0EU' => 'E02003655',
        '0EX' => 'E02003655',
        '0EY' => 'E02003655',
        '0EZ' => 'E02003655',
        '0FR' => 'E02005933',
        '0GA' => 'E02003655',
        '0GB' => 'E02003655',
        '0GD' => 'E02003655',
        '0GS' => 'E02005933',
        '0HA' => 'E02003655',
        '0HB' => 'E02003655',
        '0HD' => 'E02003655',
        '0HE' => 'E02003655',
        '0HF' => 'E02003655',
        '0HG' => 'E02003655',
        '0HH' => 'E02003655',
        '0HJ' => 'E02003655',
        '0HL' => 'E02003655',
        '0HN' => 'E02003655',
        '0HP' => 'E02003655',
        '0HQ' => 'E02003655',
        '0HR' => 'E02003655',
        '0HS' => 'E02003655',
        '0HT' => 'E02003655',
        '0HU' => 'E02003655',
        '0HW' => 'E02003655',
        '0HY' => 'E02003655',
        '0HZ' => 'E02003655',
        '0JA' => 'E02003655',
        '0WA' => 'E02005933',
        '0XA' => 'E02003655',
        '0XQ' => 'E02003655',
        '0YX' => 'E02005933',
        '0ZX' => 'E02005933',
        '5HA' => 'E02005931',
        '7AA' => 'E02005931',
        '7AB' => 'E02005933',
        '7AD' => 'E02005931',
        '7AE' => 'E02005930',
        '7AF' => 'E02005930',
        '7AS' => 'E02005931',
        '7AX' => 'E02005930',
        '7HL' => 'E02005931',
        '7HN' => 'E02005931',
        '7HP' => 'E02005931',
        '7HR' => 'E02005931',
        '7HS' => 'E02005930',
        '7HT' => 'E02005930',
        '7HU' => 'E02005930',
        '7HW' => 'E02005931',
        '7HX' => 'E02005930',
        '7HY' => 'E02005930',
        '7HZ' => 'E02005930',
        '7JA' => 'E02005930',
        '7JB' => 'E02005930',
        '7JD' => 'E02005930',
        '7JE' => 'E02005930',
        '7JF' => 'E02005930',
        '7JG' => 'E02005930',
        '7JH' => 'E02005930',
        '7JJ' => 'E02005930',
        '7JL' => 'E02005930',
        '7JN' => 'E02005930',
        '7JP' => 'E02005930',
        '7JQ' => 'E02005930',
        '7JR' => 'E02005930',
        '7JS' => 'E02005933',
        '7JT' => 'E02005930',
        '7JU' => 'E02005930',
        '7JW' => 'E02005930',
        '7JX' => 'E02005930',
        '7JY' => 'E02005930',
        '7JZ' => 'E02005930',
        '7LA' => 'E02005930',
        '7LB' => 'E02005930',
        '7LD' => 'E02005930',
        '7LE' => 'E02005930',
        '7LF' => 'E02005930',
        '7LG' => 'E02005930',
        '7LJ' => 'E02005930',
        '7LP' => 'E02005931',
        '7LQ' => 'E02005930',
        '7LR' => 'E02005931',
        '7LS' => 'E02005931',
        '7LT' => 'E02005931',
        '7LU' => 'E02005931',
        '7LX' => 'E02005931',
        '7LY' => 'E02005931',
        '7LZ' => 'E02005931',
        '7NA' => 'E02005931',
        '7NB' => 'E02005931',
        '7ND' => 'E02005931',
        '7NE' => 'E02005931',
        '7NF' => 'E02005931',
        '7NG' => 'E02005931',
        '7NH' => 'E02005931',
        '7NL' => 'E02005933',
        '7NP' => 'E02005931',
        '7NR' => 'E02005931',
        '7NS' => 'E02005931',
        '7NT' => 'E02005931',
        '7NU' => 'E02005931',
        '7NW' => 'E02005931',
        '7NX' => 'E02005931',
        '7NY' => 'E02005931',
        '7NZ' => 'E02005931',
        '7PA' => 'E02005931',
        '7PB' => 'E02005931',
        '7PD' => 'E02005931',
        '7PE' => 'E02005931',
        '7PF' => 'E02005931',
        '7PG' => 'E02005931',
        '7PH' => 'E02005931',
        '7PJ' => 'E02005931',
        '7PL' => 'E02005931',
        '7PN' => 'E02005931',
        '7PP' => 'E02005931',
        '7PQ' => 'E02005931',
        '7PR' => 'E02005931',
        '7PS' => 'E02005931',
        '7PT' => 'E02005931',
        '7PU' => 'E02005931',
        '7PW' => 'E02005931',
        '7PX' => 'E02005930',
        '7PY' => 'E02005930',
        '7PZ' => 'E02005930',
        '7QA' => 'E02005930',
        '7QB' => 'E02005930',
        '7QD' => 'E02005930',
        '7QE' => 'E02005930',
        '7QF' => 'E02005930',
        '7QG' => 'E02005930',
        '7QH' => 'E02005930',
        '7QJ' => 'E02005930',
        '7QL' => 'E02005930',
        '7QN' => 'E02005930',
        '7QP' => 'E02005930',
        '7QQ' => 'E02005930',
        '7QR' => 'E02005930',
        '7QS' => 'E02005930',
        '7QT' => 'E02005930',
        '7QU' => 'E02005931',
        '7QW' => 'E02005930',
        '7QX' => 'E02005930',
        '7QY' => 'E02005930',
        '7RD' => 'E02005931',
        '7SG' => 'E02005931',
        '7SH' => 'E02005931',
        '7SJ' => 'E02005931',
        '7SL' => 'E02005931',
        '7SN' => 'E02005931',
        '7SP' => 'E02005931',
        '7SQ' => 'E02005931',
        '7SR' => 'E02005931',
        '7SS' => 'E02005931',
        '7SW' => 'E02005931',
        '7SX' => 'E02005931',
        '7WA' => 'E02005933',
        '7WG' => 'E02005931',
        '7WX' => 'E02005933',
        '7WY' => 'E02005933',
        '7WZ' => 'E02005933',
        '7XA' => 'E02005931',
        '7YR' => 'E02005933',
        '7YS' => 'E02005933',
        '7YU' => 'E02005933',
        '7YX' => 'E02005931',
        '7ZN' => 'E02005933',
        '7ZX' => 'E02005933',
        '8AA' => 'E02005931',
        '8AB' => 'E02005931',
        '8AD' => 'E02005931',
        '8AE' => 'E02005931',
        '8AF' => 'E02005931',
        '8AG' => 'E02005931',
        '8AH' => 'E02005931',
        '8AJ' => 'E02005931',
        '8AL' => 'E02005931',
        '8AN' => 'E02005931',
        '8AP' => 'E02005931',
        '8AQ' => 'E02005931',
        '8AR' => 'E02005931',
        '8AS' => 'E02005931',
        '8AT' => 'E02005931',
        '8AU' => 'E02005931',
        '8AW' => 'E02005931',
        '8AX' => 'E02005931',
        '8AY' => 'E02005931',
        '8AZ' => 'E02005931',
        '8BA' => 'E02005931',
        '8BB' => 'E02005931',
        '8BD' => 'E02005931',
        '8BE' => 'E02005931',
        '8BF' => 'E02005931',
        '8BG' => 'E02005931',
        '8BH' => 'E02005931',
        '8BJ' => 'E02005931',
        '8BL' => 'E02005931',
        '8BP' => 'E02005931',
        '8BS' => 'E02005931',
        '8BU' => 'E02005933',
        '8DB' => 'E02005931',
        '8DD' => 'E02005931',
        '8DE' => 'E02005931',
        '8DF' => 'E02005931',
        '8DG' => 'E02005931',
        '8DH' => 'E02005931',
        '8DJ' => 'E02005931',
        '8DL' => 'E02005931',
        '8DN' => 'E02005931',
        '8DP' => 'E02005931',
        '8DQ' => 'E02005931',
        '8DR' => 'E02005931',
        '8DS' => 'E02005931',
        '8DT' => 'E02005931',
        '8DU' => 'E02005931',
        '8DW' => 'E02005931',
        '8DX' => 'E02005931',
        '8DY' => 'E02005931',
        '8DZ' => 'E02005931',
        '8EA' => 'E02005931',
        '8EB' => 'E02005931',
        '8ED' => 'E02005931',
        '8EE' => 'E02005931',
        '8EF' => 'E02005931',
        '8EG' => 'E02005931',
        '8EH' => 'E02005931',
        '8EJ' => 'E02005931',
        '8EL' => 'E02005931',
        '8EN' => 'E02005931',
        '8EQ' => 'E02005931',
        '8ES' => 'E02005931',
        '8ET' => 'E02005931',
        '8EU' => 'E02005931',
        '8EW' => 'E02005931',
        '8EX' => 'E02005931',
        '8EY' => 'E02005931',
        '8EZ' => 'E02005931',
        '8FA' => 'E02005931',
        '8FB' => 'E02005931',
        '8FD' => 'E02005931',
        '8FE' => 'E02005931',
        '8FF' => 'E02005931',
        '8FG' => 'E02005931',
        '8FH' => 'E02005931',
        '8FJ' => 'E02005931',
        '8FL' => 'E02005931',
        '8FN' => 'E02005931',
        '8FP' => 'E02005931',
        '8FQ' => 'E02005931',
        '8FT' => 'E02005931',
        '8FW' => 'E02005931',
        '8GH' => 'E02005933',
        '8GJ' => 'E02005931',
        '8GP' => 'E02005933',
        '8GR' => 'E02005933',
        '8GS' => 'E02005933',
        '8HA' => 'E02005931',
        '8HD' => 'E02005931',
        '8QA' => 'E02005931',
        '8QP' => 'E02005931',
        '8RA' => 'E02005931',
        '8RB' => 'E02005931',
        '8RE' => 'E02005931',
        '8RG' => 'E02005931',
        '8RH' => 'E02005931',
        '8RJ' => 'E02005931',
        '8RL' => 'E02005931',
        '8RP' => 'E02005931',
        '8RQ' => 'E02005931',
        '8RR' => 'E02005931',
        '8RS' => 'E02005931',
        '8RT' => 'E02005931',
        '8RU' => 'E02005931',
        '8RW' => 'E02005931',
        '8RX' => 'E02005931',
        '8RY' => 'E02005931',
        '8RZ' => 'E02005931',
        '8SA' => 'E02005931',
        '8SB' => 'E02005931',
        '8SD' => 'E02005931',
        '8SE' => 'E02005931',
        '8SF' => 'E02005931',
        '8SS' => 'E02005931',
        '8ST' => 'E02005931',
        '8SU' => 'E02005931',
        '8SX' => 'E02005933',
        '8TG' => 'E02005931',
        '8TH' => 'E02005931',
        '8TJ' => 'E02005931',
        '8TL' => 'E02005931',
        '8TQ' => 'E02005931',
        '8TS' => 'E02005931',
        '8TT' => 'E02005931',
        '8TU' => 'E02005931',
        '8TW' => 'E02005931',
        '8TX' => 'E02005931',
        '8TY' => 'E02005931',
        '8TZ' => 'E02005931',
        '8UA' => 'E02005931',
        '8UB' => 'E02005931',
        '8UD' => 'E02005931',
        '8UE' => 'E02005931',
        '8UF' => 'E02005931',
        '8UG' => 'E02005931',
        '8UH' => 'E02005931',
        '8UJ' => 'E02005931',
        '8UL' => 'E02005931',
        '8UN' => 'E02005931',
        '8UP' => 'E02005931',
        '8UQ' => 'E02005931',
        '8UR' => 'E02005931',
        '8US' => 'E02005931',
        '8UT' => 'E02005931',
        '8UW' => 'E02005931',
        '8WQ' => 'E02005933',
        '8WZ' => 'E02005933',
        '8XA' => 'E02005931',
        '8YP' => 'E02005933',
        '8YR' => 'E02005933',
        '8YS' => 'E02005933',
        '8YU' => 'E02005931',
        '8YX' => 'E02005933',
        '8YY' => 'E02005931',
        '9AA' => 'E02005931',
        '9AB' => 'E02005931',
        '9AD' => 'E02005931',
        '9AE' => 'E02005931',
        '9AF' => 'E02005931',
        '9AG' => 'E02005931',
        '9AH' => 'E02005931',
        '9AJ' => 'E02005931',
        '9AL' => 'E02005931',
        '9AN' => 'E02005931',
        '9AP' => 'E02005931',
        '9AQ' => 'E02005931',
        '9AR' => 'E02005931',
        '9AS' => 'E02005931',
        '9AT' => 'E02005931',
        '9AU' => 'E02005931',
        '9AW' => 'E02005931',
        '9AX' => 'E02005931',
        '9AY' => 'E02003655',
        '9AZ' => 'E02003655',
        '9BA' => 'E02003655',
        '9BB' => 'E02003655',
        '9BD' => 'E02003655',
        '9BE' => 'E02003655',
        '9BF' => 'E02005931',
        '9BG' => 'E02003655',
        '9BH' => 'E02003655',
        '9BJ' => 'E02005931',
        '9BL' => 'E02005931',
        '9BN' => 'E02005931',
        '9BP' => 'E02005931',
        '9BQ' => 'E02005931',
        '9BS' => 'E02005931',
        '9BT' => 'E02005931',
        '9BX' => 'E02003655',
        '9BY' => 'E02005931',
        '9BZ' => 'E02005931',
        '9DA' => 'E02005931',
        '9GR' => 'E02005933',
        '9RF' => 'E02005931',
        '9TA' => 'E02005931',
        '9ZQ' => 'E02005931',
        '9ZX' => 'E02005933',
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