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
final class S45
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02004114',
        '0AB' => 'E02004114',
        '0AD' => 'E02004114',
        '0AE' => 'E02004114',
        '0AF' => 'E02004114',
        '0AG' => 'E02004114',
        '0AH' => 'E02004114',
        '0AJ' => 'E02004114',
        '0AL' => 'E02004114',
        '0AN' => 'E02004114',
        '0AP' => 'E02004114',
        '0AQ' => 'E02004114',
        '0AR' => 'E02004114',
        '0AS' => 'E02004114',
        '0AT' => 'E02004114',
        '0AU' => 'E02004114',
        '0AW' => 'E02004114',
        '0AX' => 'E02004114',
        '0AY' => 'E02004114',
        '0AZ' => 'E02004114',
        '0BA' => 'E02004114',
        '0BB' => 'E02004114',
        '0BD' => 'E02004114',
        '0BE' => 'E02004114',
        '0BF' => 'E02004114',
        '0BG' => 'E02004114',
        '0BH' => 'E02004114',
        '0BJ' => 'E02004114',
        '0BL' => 'E02004114',
        '0BN' => 'E02004114',
        '0BP' => 'E02004114',
        '0BQ' => 'E02004114',
        '0BS' => 'E02004114',
        '0BT' => 'E02004114',
        '0BU' => 'E02004114',
        '0BW' => 'E02004114',
        '0BX' => 'E02004114',
        '0BY' => 'E02004114',
        '0BZ' => 'E02004114',
        '0DA' => 'E02004114',
        '0DB' => 'E02004114',
        '0DD' => 'E02004114',
        '0DE' => 'E02004114',
        '0DF' => 'E02004114',
        '0DG' => 'E02004114',
        '0DH' => 'E02004114',
        '0DJ' => 'E02004114',
        '0DL' => 'E02004114',
        '0DQ' => 'E02004114',
        '0DR' => 'E02004114',
        '0DS' => 'E02004114',
        '0DT' => 'E02004114',
        '0DU' => 'E02004114',
        '0DW' => 'E02004114',
        '0DX' => 'E02004114',
        '0DY' => 'E02004114',
        '0DZ' => 'E02004114',
        '0EA' => 'E02004114',
        '0EB' => 'E02004114',
        '0ED' => 'E02004114',
        '0EE' => 'E02004114',
        '0EF' => 'E02004114',
        '0EG' => 'E02004114',
        '0EP' => 'E02004114',
        '0ER' => 'E02004114',
        '0ES' => 'E02004114',
        '0ET' => 'E02004114',
        '0EU' => 'E02004114',
        '0EW' => 'E02004114',
        '0EX' => 'E02004114',
        '0EY' => 'E02004114',
        '0EZ' => 'E02004114',
        '0FA' => 'E02004114',
        '0FB' => 'E02004114',
        '0FD' => 'E02004114',
        '0HA' => 'E02004114',
        '0HB' => 'E02004114',
        '0HD' => 'E02004114',
        '0HE' => 'E02004114',
        '0HF' => 'E02004114',
        '0HG' => 'E02004114',
        '0HN' => 'E02004114',
        '0HP' => 'E02004114',
        '0HR' => 'E02004114',
        '0HS' => 'E02004114',
        '0HT' => 'E02004114',
        '0HU' => 'E02004114',
        '0HW' => 'E02004114',
        '0HX' => 'E02004114',
        '0HY' => 'E02004114',
        '0HZ' => 'E02004114',
        '0JA' => 'E02004114',
        '0JB' => 'E02004114',
        '0JD' => 'E02004114',
        '0JE' => 'E02004114',
        '0JF' => 'E02004114',
        '0JN' => 'E02004114',
        '0JP' => 'E02004114',
        '0JQ' => 'E02004114',
        '0JR' => 'E02004114',
        '0JS' => 'E02004114',
        '0JT' => 'E02004114',
        '0JU' => 'E02004114',
        '0JW' => 'E02004114',
        '0JX' => 'E02004114',
        '0JY' => 'E02004114',
        '0JZ' => 'E02004114',
        '0LG' => 'E02004114',
        '0LH' => 'E02004114',
        '0LJ' => 'E02004114',
        '0LL' => 'E02004114',
        '0LN' => 'E02004114',
        '0LP' => 'E02004112',
        '0LQ' => 'E02004114',
        '0LR' => 'E02004114',
        '0LS' => 'E02004114',
        '0LW' => 'E02004114',
        '0LX' => 'E02004114',
        '0WT' => 'E02004064',
        '0WU' => 'E02004064',
        '0WW' => 'E02004064',
        '0WX' => 'E02004064',
        '0WY' => 'E02004114',
        '0YS' => 'E02004064',
        '0YT' => 'E02004114',
        '0YU' => 'E02004114',
        '0YX' => 'E02004064',
        '0YY' => 'E02004064',
        '0YZ' => 'E02004112',
        '8AA' => 'E02004115',
        '8AB' => 'E02004052',
        '8AD' => 'E02004052',
        '8AE' => 'E02004052',
        '8AF' => 'E02004052',
        '8AG' => 'E02004052',
        '8AH' => 'E02004052',
        '8AJ' => 'E02004052',
        '8AL' => 'E02004052',
        '8AN' => 'E02004052',
        '8AP' => 'E02004115',
        '8AQ' => 'E02004052',
        '8AR' => 'E02004115',
        '8AS' => 'E02004115',
        '8AT' => 'E02004115',
        '8AU' => 'E02004052',
        '8AW' => 'E02004052',
        '8AX' => 'E02004052',
        '8AY' => 'E02004115',
        '8AZ' => 'E02004115',
        '8BA' => 'E02004115',
        '8BB' => 'E02004115',
        '8BD' => 'E02004115',
        '8BE' => 'E02004115',
        '8BG' => 'E02004115',
        '8BH' => 'E02004115',
        '8BJ' => 'E02004115',
        '8BL' => 'E02004115',
        '8BN' => 'E02004115',
        '8BP' => 'E02004115',
        '8BQ' => 'E02004115',
        '8DA' => 'E02004115',
        '8DB' => 'E02004115',
        '8DD' => 'E02004115',
        '8DE' => 'E02004115',
        '8DF' => 'E02004115',
        '8DG' => 'E02004115',
        '8DH' => 'E02004115',
        '8DJ' => 'E02004115',
        '8DL' => 'E02004115',
        '8DN' => 'E02004115',
        '8DP' => 'E02004115',
        '8DQ' => 'E02004115',
        '8DR' => 'E02004115',
        '8DS' => 'E02004115',
        '8DT' => 'E02004115',
        '8DU' => 'E02004115',
        '8DW' => 'E02004115',
        '8DX' => 'E02004115',
        '8DY' => 'E02004115',
        '8DZ' => 'E02004115',
        '8EA' => 'E02004115',
        '8EB' => 'E02004115',
        '8ED' => 'E02004115',
        '8EE' => 'E02004115',
        '8EF' => 'E02004115',
        '8EG' => 'E02004115',
        '8EH' => 'E02004115',
        '8EJ' => 'E02004115',
        '8EL' => 'E02004115',
        '8EN' => 'E02004115',
        '8EP' => 'E02004115',
        '8EQ' => 'E02004115',
        '8ER' => 'E02004115',
        '8ES' => 'E02004115',
        '8ET' => 'E02004115',
        '8EU' => 'E02004115',
        '8EW' => 'E02004115',
        '8EX' => 'E02004115',
        '8EY' => 'E02004115',
        '8EZ' => 'E02004115',
        '8HA' => 'E02004115',
        '8HB' => 'E02004115',
        '8HD' => 'E02004115',
        '8HE' => 'E02004115',
        '8HF' => 'E02004115',
        '8HG' => 'E02004115',
        '8HH' => 'E02004115',
        '8HJ' => 'E02004115',
        '8HL' => 'E02004115',
        '8HN' => 'E02004115',
        '8HP' => 'E02004115',
        '8HQ' => 'E02004115',
        '8HR' => 'E02004115',
        '8HS' => 'E02004115',
        '8HT' => 'E02004115',
        '8HU' => 'E02004115',
        '8HW' => 'E02004115',
        '8HX' => 'E02004115',
        '8HY' => 'E02004115',
        '8HZ' => 'E02004115',
        '8JA' => 'E02004115',
        '8JB' => 'E02004115',
        '8JD' => 'E02004115',
        '8JE' => 'E02004115',
        '8JF' => 'E02004115',
        '8JG' => 'E02004115',
        '8WY' => 'E02004064',
        '8YS' => 'E02004064',
        '8YT' => 'E02004115',
        '8YU' => 'E02004115',
        '8YW' => 'E02004115',
        '8YX' => 'E02004115',
        '8YY' => 'E02004115',
        '8YZ' => 'E02004115',
        '9AA' => 'E02004116',
        '9AB' => 'E02004116',
        '9AD' => 'E02004116',
        '9AE' => 'E02004116',
        '9AF' => 'E02004116',
        '9AG' => 'E02004116',
        '9AH' => 'E02004116',
        '9AJ' => 'E02004116',
        '9AL' => 'E02004116',
        '9AN' => 'E02004116',
        '9AP' => 'E02004114',
        '9AQ' => 'E02004116',
        '9AR' => 'E02004114',
        '9AS' => 'E02004114',
        '9AT' => 'E02004117',
        '9AU' => 'E02004117',
        '9AW' => 'E02004116',
        '9AX' => 'E02004117',
        '9AY' => 'E02004114',
        '9AZ' => 'E02004114',
        '9BA' => 'E02004114',
        '9BB' => 'E02004116',
        '9BD' => 'E02004116',
        '9BE' => 'E02004116',
        '9BF' => 'E02004116',
        '9BG' => 'E02004116',
        '9BH' => 'E02004116',
        '9BJ' => 'E02004116',
        '9BL' => 'E02004116',
        '9BN' => 'E02004116',
        '9BP' => 'E02004116',
        '9BQ' => 'E02004115',
        '9BS' => 'E02004116',
        '9BT' => 'E02004116',
        '9BU' => 'E02004116',
        '9BW' => 'E02004116',
        '9BX' => 'E02004116',
        '9BY' => 'E02004116',
        '9BZ' => 'E02004116',
        '9DA' => 'E02004116',
        '9DB' => 'E02004116',
        '9DD' => 'E02004116',
        '9DE' => 'E02004116',
        '9DF' => 'E02004116',
        '9DG' => 'E02004116',
        '9DH' => 'E02004116',
        '9DJ' => 'E02004116',
        '9DL' => 'E02004116',
        '9DN' => 'E02004116',
        '9DP' => 'E02004116',
        '9DQ' => 'E02004116',
        '9DR' => 'E02004116',
        '9DS' => 'E02004114',
        '9DT' => 'E02004114',
        '9DU' => 'E02004114',
        '9DW' => 'E02004116',
        '9DX' => 'E02004116',
        '9DY' => 'E02004116',
        '9DZ' => 'E02004114',
        '9EA' => 'E02004114',
        '9EB' => 'E02004116',
        '9ED' => 'E02004116',
        '9EE' => 'E02004116',
        '9EF' => 'E02004116',
        '9EG' => 'E02004116',
        '9EH' => 'E02004116',
        '9EJ' => 'E02004116',
        '9EL' => 'E02004116',
        '9EN' => 'E02004116',
        '9EP' => 'E02004116',
        '9EQ' => 'E02004116',
        '9ER' => 'E02004116',
        '9ES' => 'E02004116',
        '9ET' => 'E02004116',
        '9EU' => 'E02004116',
        '9EW' => 'E02004116',
        '9EX' => 'E02004116',
        '9EY' => 'E02004116',
        '9EZ' => 'E02004116',
        '9FA' => 'E02004116',
        '9FB' => 'E02004116',
        '9FD' => 'E02004116',
        '9FE' => 'E02004116',
        '9FG' => 'E02004116',
        '9FH' => 'E02004116',
        '9FJ' => 'E02004116',
        '9FL' => 'E02004116',
        '9FN' => 'E02004116',
        '9FQ' => 'E02004116',
        '9FR' => 'E02004115',
        '9FT' => 'E02004116',
        '9FW' => 'E02004116',
        '9GA' => 'E02004116',
        '9GY' => 'E02004116',
        '9HA' => 'E02004115',
        '9HB' => 'E02004116',
        '9HD' => 'E02004116',
        '9HE' => 'E02004116',
        '9HF' => 'E02004116',
        '9HG' => 'E02004116',
        '9HH' => 'E02004116',
        '9HJ' => 'E02004116',
        '9HL' => 'E02004116',
        '9HN' => 'E02004116',
        '9HP' => 'E02004116',
        '9HQ' => 'E02004116',
        '9HR' => 'E02004116',
        '9HS' => 'E02004116',
        '9HT' => 'E02004116',
        '9HU' => 'E02004116',
        '9HW' => 'E02004116',
        '9HX' => 'E02004116',
        '9HY' => 'E02004116',
        '9HZ' => 'E02004116',
        '9JA' => 'E02004116',
        '9JB' => 'E02004116',
        '9JD' => 'E02004116',
        '9JE' => 'E02004116',
        '9JF' => 'E02004116',
        '9JG' => 'E02004116',
        '9JH' => 'E02004116',
        '9JJ' => 'E02004116',
        '9JL' => 'E02004116',
        '9JN' => 'E02004116',
        '9JP' => 'E02004116',
        '9JQ' => 'E02004116',
        '9JR' => 'E02004116',
        '9JS' => 'E02004116',
        '9JT' => 'E02004116',
        '9JU' => 'E02004116',
        '9JW' => 'E02004116',
        '9JX' => 'E02004116',
        '9JY' => 'E02004116',
        '9JZ' => 'E02004116',
        '9LA' => 'E02004116',
        '9LB' => 'E02004116',
        '9LD' => 'E02004116',
        '9LE' => 'E02004116',
        '9LF' => 'E02004116',
        '9LG' => 'E02004116',
        '9LH' => 'E02004116',
        '9LJ' => 'E02004116',
        '9LL' => 'E02004116',
        '9LN' => 'E02004116',
        '9LP' => 'E02004116',
        '9LQ' => 'E02004116',
        '9LR' => 'E02004116',
        '9LS' => 'E02004116',
        '9LT' => 'E02004116',
        '9LU' => 'E02004116',
        '9LW' => 'E02004116',
        '9LX' => 'E02004116',
        '9LY' => 'E02004116',
        '9LZ' => 'E02004116',
        '9NA' => 'E02004116',
        '9NB' => 'E02004116',
        '9ND' => 'E02004116',
        '9NE' => 'E02004116',
        '9NF' => 'E02004116',
        '9NG' => 'E02004116',
        '9NH' => 'E02004116',
        '9NJ' => 'E02004116',
        '9NL' => 'E02004116',
        '9NN' => 'E02004116',
        '9NP' => 'E02004116',
        '9NQ' => 'E02004116',
        '9NR' => 'E02004116',
        '9NS' => 'E02004116',
        '9NT' => 'E02004116',
        '9NU' => 'E02004116',
        '9NW' => 'E02004116',
        '9NX' => 'E02004116',
        '9NY' => 'E02004116',
        '9NZ' => 'E02004116',
        '9PA' => 'E02004116',
        '9PB' => 'E02004116',
        '9PD' => 'E02004116',
        '9PE' => 'E02004116',
        '9PF' => 'E02004116',
        '9PG' => 'E02004116',
        '9PH' => 'E02004114',
        '9PJ' => 'E02004116',
        '9PL' => 'E02004116',
        '9PN' => 'E02004116',
        '9PP' => 'E02004116',
        '9PQ' => 'E02004114',
        '9PR' => 'E02004116',
        '9PS' => 'E02004116',
        '9PT' => 'E02004116',
        '9PU' => 'E02004116',
        '9PW' => 'E02004116',
        '9PX' => 'E02004116',
        '9PY' => 'E02004116',
        '9PZ' => 'E02004116',
        '9QB' => 'E02004114',
        '9QD' => 'E02004114',
        '9QE' => 'E02004116',
        '9QF' => 'E02004116',
        '9QG' => 'E02004116',
        '9QH' => 'E02004116',
        '9QJ' => 'E02004116',
        '9QL' => 'E02004114',
        '9QN' => 'E02004116',
        '9QP' => 'E02004116',
        '9QQ' => 'E02004116',
        '9QR' => 'E02004116',
        '9QS' => 'E02004116',
        '9QT' => 'E02004116',
        '9QU' => 'E02004116',
        '9QW' => 'E02004116',
        '9QX' => 'E02004116',
        '9QY' => 'E02004116',
        '9QZ' => 'E02004116',
        '9RA' => 'E02004116',
        '9RB' => 'E02004116',
        '9RD' => 'E02004116',
        '9RE' => 'E02004116',
        '9RF' => 'E02004116',
        '9RG' => 'E02004116',
        '9RH' => 'E02004116',
        '9RJ' => 'E02004116',
        '9RL' => 'E02004116',
        '9RN' => 'E02004116',
        '9RP' => 'E02004116',
        '9RR' => 'E02004116',
        '9RS' => 'E02004116',
        '9RT' => 'E02004116',
        '9RU' => 'E02004116',
        '9RW' => 'E02004116',
        '9RX' => 'E02004116',
        '9RY' => 'E02004116',
        '9RZ' => 'E02004116',
        '9SA' => 'E02004116',
        '9SB' => 'E02004116',
        '9SD' => 'E02004116',
        '9SE' => 'E02004116',
        '9SF' => 'E02004116',
        '9SG' => 'E02004116',
        '9SH' => 'E02004116',
        '9SJ' => 'E02004116',
        '9SL' => 'E02004116',
        '9SN' => 'E02004116',
        '9SP' => 'E02004116',
        '9SQ' => 'E02004116',
        '9SR' => 'E02004116',
        '9SS' => 'E02004116',
        '9ST' => 'E02004116',
        '9SU' => 'E02004116',
        '9SW' => 'E02004116',
        '9SX' => 'E02004116',
        '9SY' => 'E02004116',
        '9SZ' => 'E02004116',
        '9TA' => 'E02004116',
        '9TB' => 'E02004116',
        '9TD' => 'E02004116',
        '9TE' => 'E02004116',
        '9TF' => 'E02004116',
        '9TG' => 'E02004116',
        '9TH' => 'E02004116',
        '9TJ' => 'E02004116',
        '9TL' => 'E02004116',
        '9TN' => 'E02004116',
        '9TR' => 'E02004116',
        '9TT' => 'E02004116',
        '9TU' => 'E02004116',
        '9WY' => 'E02004064',
        '9YQ' => 'E02004064',
        '9YR' => 'E02004064',
        '9YS' => 'E02004064',
        '9YT' => 'E02004116',
        '9YU' => 'E02004064',
        '9YW' => 'E02004064',
        '9YX' => 'E02004116',
        '9YY' => 'E02004116',
        '9YZ' => 'E02004116',
        '9ZX' => 'E02004064',
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
