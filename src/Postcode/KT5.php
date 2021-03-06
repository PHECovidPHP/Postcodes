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
final class KT5
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '8AA' => 'E02000606',
        '8AB' => 'E02000606',
        '8AD' => 'E02000606',
        '8AE' => 'E02000606',
        '8AF' => 'E02000606',
        '8AG' => 'E02000606',
        '8AH' => 'E02000606',
        '8AJ' => 'E02000606',
        '8AL' => 'E02000606',
        '8AN' => 'E02000606',
        '8AP' => 'E02000606',
        '8AQ' => 'E02000606',
        '8AR' => 'E02000606',
        '8AS' => 'E02000606',
        '8AT' => 'E02000606',
        '8AU' => 'E02000606',
        '8AW' => 'E02000606',
        '8AX' => 'E02000610',
        '8AY' => 'E02000606',
        '8AZ' => 'E02000606',
        '8BA' => 'E02000610',
        '8BB' => 'E02000606',
        '8BD' => 'E02000606',
        '8BE' => 'E02000606',
        '8BF' => 'E02000610',
        '8BG' => 'E02000607',
        '8BH' => 'E02000606',
        '8BJ' => 'E02000606',
        '8BL' => 'E02000606',
        '8BN' => 'E02000606',
        '8BP' => 'E02000606',
        '8BQ' => 'E02000607',
        '8BS' => 'E02000606',
        '8BT' => 'E02000606',
        '8BU' => 'E02000606',
        '8BW' => 'E02000606',
        '8BX' => 'E02000606',
        '8BY' => 'E02000606',
        '8BZ' => 'E02000606',
        '8DA' => 'E02000607',
        '8DB' => 'E02000607',
        '8DD' => 'E02000607',
        '8DE' => 'E02000607',
        '8DF' => 'E02000607',
        '8DG' => 'E02000607',
        '8DH' => 'E02000607',
        '8DJ' => 'E02000607',
        '8DL' => 'E02000607',
        '8DN' => 'E02000607',
        '8DP' => 'E02000607',
        '8DQ' => 'E02000606',
        '8DR' => 'E02000607',
        '8DS' => 'E02000607',
        '8DT' => 'E02000607',
        '8DU' => 'E02000608',
        '8DW' => 'E02000607',
        '8DX' => 'E02000607',
        '8DY' => 'E02000608',
        '8DZ' => 'E02000602',
        '8EA' => 'E02000608',
        '8EB' => 'E02000608',
        '8ED' => 'E02000608',
        '8EE' => 'E02000608',
        '8EF' => 'E02000608',
        '8EG' => 'E02000608',
        '8EH' => 'E02000607',
        '8EJ' => 'E02000607',
        '8EL' => 'E02000607',
        '8EN' => 'E02000607',
        '8EP' => 'E02000607',
        '8EQ' => 'E02000607',
        '8ER' => 'E02000607',
        '8ES' => 'E02000607',
        '8ET' => 'E02000607',
        '8EU' => 'E02000607',
        '8EW' => 'E02000607',
        '8EX' => 'E02000608',
        '8EY' => 'E02000608',
        '8EZ' => 'E02000608',
        '8FA' => 'E02000602',
        '8FS' => 'E02000607',
        '8FT' => 'E02000602',
        '8HG' => 'E02000607',
        '8HH' => 'E02000607',
        '8HJ' => 'E02000607',
        '8HN' => 'E02000607',
        '8HP' => 'E02000607',
        '8HQ' => 'E02000607',
        '8HR' => 'E02000607',
        '8HS' => 'E02000607',
        '8HT' => 'E02000607',
        '8HU' => 'E02000607',
        '8HW' => 'E02000607',
        '8HX' => 'E02000607',
        '8HY' => 'E02000607',
        '8JA' => 'E02000607',
        '8JB' => 'E02000610',
        '8JD' => 'E02000607',
        '8JE' => 'E02000607',
        '8JF' => 'E02000607',
        '8JG' => 'E02000610',
        '8JH' => 'E02000607',
        '8JJ' => 'E02000610',
        '8JL' => 'E02000610',
        '8JN' => 'E02000607',
        '8JP' => 'E02000607',
        '8JQ' => 'E02000607',
        '8JR' => 'E02000607',
        '8JS' => 'E02000607',
        '8JT' => 'E02000607',
        '8JU' => 'E02000607',
        '8JW' => 'E02000610',
        '8JX' => 'E02000607',
        '8JY' => 'E02000607',
        '8JZ' => 'E02000611',
        '8LA' => 'E02000607',
        '8LB' => 'E02000607',
        '8LD' => 'E02000602',
        '8LE' => 'E02000602',
        '8LG' => 'E02000611',
        '8LH' => 'E02000611',
        '8LJ' => 'E02000611',
        '8LL' => 'E02000611',
        '8LN' => 'E02000611',
        '8LP' => 'E02000607',
        '8LQ' => 'E02000611',
        '8LR' => 'E02000607',
        '8LS' => 'E02000607',
        '8LT' => 'E02000607',
        '8LW' => 'E02000607',
        '8LX' => 'E02000607',
        '8LY' => 'E02000607',
        '8ND' => 'E02000611',
        '8NE' => 'E02000607',
        '8NF' => 'E02000607',
        '8NG' => 'E02000611',
        '8NH' => 'E02000611',
        '8NJ' => 'E02000611',
        '8NL' => 'E02000607',
        '8NN' => 'E02000607',
        '8NP' => 'E02000607',
        '8NQ' => 'E02000611',
        '8NS' => 'E02000608',
        '8NW' => 'E02000611',
        '8NX' => 'E02000608',
        '8NY' => 'E02000608',
        '8PA' => 'E02000608',
        '8PB' => 'E02000607',
        '8PD' => 'E02000608',
        '8PE' => 'E02000607',
        '8PF' => 'E02000607',
        '8PG' => 'E02000610',
        '8PH' => 'E02000611',
        '8PJ' => 'E02000611',
        '8PL' => 'E02000611',
        '8PN' => 'E02000611',
        '8PP' => 'E02000611',
        '8PQ' => 'E02000610',
        '8PR' => 'E02000610',
        '8PS' => 'E02000608',
        '8PU' => 'E02000607',
        '8PW' => 'E02000611',
        '8PX' => 'E02000610',
        '8PY' => 'E02000608',
        '8PZ' => 'E02000608',
        '8QA' => 'E02000608',
        '8QB' => 'E02000608',
        '8QD' => 'E02000607',
        '8QE' => 'E02000607',
        '8QF' => 'E02000608',
        '8QG' => 'E02000610',
        '8QH' => 'E02000608',
        '8QJ' => 'E02000610',
        '8QL' => 'E02000610',
        '8QN' => 'E02000610',
        '8QP' => 'E02000610',
        '8QQ' => 'E02000608',
        '8QR' => 'E02000607',
        '8QS' => 'E02000610',
        '8QT' => 'E02000610',
        '8QU' => 'E02000608',
        '8QW' => 'E02000610',
        '8QX' => 'E02000608',
        '8QY' => 'E02000608',
        '8QZ' => 'E02000608',
        '8RA' => 'E02000608',
        '8RB' => 'E02000608',
        '8RD' => 'E02000608',
        '8RE' => 'E02000610',
        '8RF' => 'E02000610',
        '8RG' => 'E02000608',
        '8RH' => 'E02000610',
        '8RJ' => 'E02000610',
        '8RL' => 'E02000610',
        '8RN' => 'E02000610',
        '8RP' => 'E02000610',
        '8RQ' => 'E02000610',
        '8RR' => 'E02000610',
        '8RS' => 'E02000610',
        '8RT' => 'E02000610',
        '8RU' => 'E02000610',
        '8RW' => 'E02000610',
        '8RX' => 'E02000610',
        '8RY' => 'E02000610',
        '8RZ' => 'E02000610',
        '8SA' => 'E02000610',
        '8SB' => 'E02000610',
        '8SD' => 'E02000610',
        '8SE' => 'E02000610',
        '8SF' => 'E02000610',
        '8SG' => 'E02000610',
        '8SH' => 'E02000610',
        '8SJ' => 'E02000610',
        '8SL' => 'E02000610',
        '8SN' => 'E02000610',
        '8SP' => 'E02000610',
        '8SQ' => 'E02000610',
        '8SR' => 'E02000610',
        '8SS' => 'E02000610',
        '8ST' => 'E02000610',
        '8SU' => 'E02000610',
        '8SW' => 'E02000610',
        '8SX' => 'E02000610',
        '8SY' => 'E02000610',
        '8SZ' => 'E02000610',
        '8TA' => 'E02000610',
        '8TB' => 'E02000610',
        '8TD' => 'E02000610',
        '8TG' => 'E02000610',
        '8TP' => 'E02000610',
        '8TQ' => 'E02000610',
        '8TR' => 'E02000610',
        '8TS' => 'E02000610',
        '8TT' => 'E02000610',
        '8UA' => 'E02000610',
        '8UH' => 'E02000602',
        '8UP' => 'E02000602',
        '8UQ' => 'E02000610',
        '8WA' => 'E02000602',
        '8WB' => 'E02000607',
        '8WD' => 'E02000607',
        '8WE' => 'E02000602',
        '8WF' => 'E02000602',
        '8WG' => 'E02000607',
        '8WH' => 'E02000602',
        '8WJ' => 'E02000607',
        '8WL' => 'E02000607',
        '8WN' => 'E02000607',
        '8WP' => 'E02000602',
        '8WQ' => 'E02000607',
        '8WR' => 'E02000602',
        '8WS' => 'E02000602',
        '8WT' => 'E02000602',
        '8WU' => 'E02000602',
        '8WW' => 'E02000602',
        '8WX' => 'E02000602',
        '8WY' => 'E02000602',
        '8WZ' => 'E02000602',
        '8XA' => 'E02000602',
        '8XB' => 'E02000602',
        '8XF' => 'E02000602',
        '8XR' => 'E02000602',
        '8XT' => 'E02000602',
        '8YA' => 'E02000602',
        '8YB' => 'E02000602',
        '8YD' => 'E02000602',
        '8YE' => 'E02000602',
        '8YF' => 'E02000602',
        '8YG' => 'E02000607',
        '8YH' => 'E02000602',
        '8YJ' => 'E02000602',
        '8YL' => 'E02000607',
        '8YN' => 'E02000607',
        '8YP' => 'E02000602',
        '8YQ' => 'E02000607',
        '8YR' => 'E02000607',
        '8YS' => 'E02000602',
        '8YT' => 'E02000602',
        '8YU' => 'E02000607',
        '8YW' => 'E02000602',
        '8YX' => 'E02000602',
        '8YY' => 'E02000607',
        '8YZ' => 'E02000602',
        '8ZA' => 'E02000610',
        '8ZB' => 'E02000610',
        '8ZD' => 'E02000602',
        '8ZE' => 'E02000602',
        '8ZF' => 'E02000602',
        '8ZG' => 'E02000607',
        '8ZH' => 'E02000602',
        '8ZJ' => 'E02000607',
        '8ZL' => 'E02000602',
        '8ZN' => 'E02000602',
        '8ZQ' => 'E02000607',
        '8ZR' => 'E02000602',
        '8ZT' => 'E02000602',
        '9AA' => 'E02000611',
        '9AB' => 'E02000611',
        '9AD' => 'E02000611',
        '9AE' => 'E02000611',
        '9AF' => 'E02000611',
        '9AG' => 'E02000611',
        '9AH' => 'E02000611',
        '9AJ' => 'E02000610',
        '9AL' => 'E02000610',
        '9AN' => 'E02000614',
        '9AP' => 'E02000610',
        '9AR' => 'E02000610',
        '9AS' => 'E02000610',
        '9AT' => 'E02000613',
        '9AW' => 'E02000610',
        '9AY' => 'E02000613',
        '9AZ' => 'E02000610',
        '9BA' => 'E02000614',
        '9BE' => 'E02000611',
        '9BG' => 'E02000611',
        '9BH' => 'E02000611',
        '9BN' => 'E02000611',
        '9BP' => 'E02000611',
        '9BQ' => 'E02000613',
        '9BS' => 'E02000611',
        '9BT' => 'E02000611',
        '9BU' => 'E02000611',
        '9BW' => 'E02000611',
        '9BX' => 'E02000611',
        '9BY' => 'E02000611',
        '9BZ' => 'E02000611',
        '9DA' => 'E02000611',
        '9DB' => 'E02000611',
        '9DD' => 'E02000611',
        '9DE' => 'E02000607',
        '9DF' => 'E02000607',
        '9DL' => 'E02000611',
        '9DN' => 'E02000614',
        '9DP' => 'E02000611',
        '9DR' => 'E02000611',
        '9DS' => 'E02000611',
        '9DT' => 'E02000611',
        '9DU' => 'E02000611',
        '9DW' => 'E02000614',
        '9DX' => 'E02000611',
        '9DY' => 'E02000611',
        '9DZ' => 'E02000611',
        '9EA' => 'E02000611',
        '9EB' => 'E02000611',
        '9ED' => 'E02000611',
        '9EE' => 'E02000611',
        '9EF' => 'E02000611',
        '9EN' => 'E02000614',
        '9EP' => 'E02000611',
        '9ER' => 'E02000611',
        '9ES' => 'E02000611',
        '9ET' => 'E02000611',
        '9EU' => 'E02000611',
        '9EW' => 'E02000614',
        '9EX' => 'E02000611',
        '9EY' => 'E02000611',
        '9EZ' => 'E02000611',
        '9GX' => 'E02000602',
        '9HA' => 'E02000611',
        '9HB' => 'E02000611',
        '9HD' => 'E02000611',
        '9HE' => 'E02000611',
        '9HF' => 'E02000611',
        '9HG' => 'E02000611',
        '9HN' => 'E02000611',
        '9HP' => 'E02000611',
        '9HQ' => 'E02000611',
        '9HR' => 'E02000611',
        '9HS' => 'E02000611',
        '9HT' => 'E02000611',
        '9HU' => 'E02000611',
        '9HW' => 'E02000611',
        '9HX' => 'E02000611',
        '9HY' => 'E02000611',
        '9HZ' => 'E02000611',
        '9JA' => 'E02000611',
        '9JB' => 'E02000611',
        '9JD' => 'E02000611',
        '9JH' => 'E02000611',
        '9JJ' => 'E02000611',
        '9JL' => 'E02000611',
        '9JN' => 'E02000611',
        '9JP' => 'E02000611',
        '9JQ' => 'E02000611',
        '9JR' => 'E02000611',
        '9JS' => 'E02000611',
        '9JT' => 'E02000611',
        '9JU' => 'E02000611',
        '9JW' => 'E02000611',
        '9JX' => 'E02000611',
        '9JY' => 'E02000611',
        '9LG' => 'E02000614',
        '9LH' => 'E02000611',
        '9LJ' => 'E02000611',
        '9LL' => 'E02000611',
        '9LN' => 'E02000611',
        '9LP' => 'E02000611',
        '9LQ' => 'E02000614',
        '9LR' => 'E02000611',
        '9LS' => 'E02000611',
        '9LT' => 'E02000614',
        '9LW' => 'E02000611',
        '9LX' => 'E02000602',
        '9LY' => 'E02000602',
        '9NA' => 'E02000611',
        '9NB' => 'E02000611',
        '9ND' => 'E02000611',
        '9NE' => 'E02000614',
        '9NG' => 'E02000611',
        '9NH' => 'E02000611',
        '9NJ' => 'E02000611',
        '9NL' => 'E02000614',
        '9NN' => 'E02000614',
        '9NP' => 'E02000614',
        '9NQ' => 'E02000611',
        '9NR' => 'E02000614',
        '9NS' => 'E02000614',
        '9NT' => 'E02000614',
        '9NU' => 'E02000614',
        '9NW' => 'E02000614',
        '9NX' => 'E02000614',
        '9NY' => 'E02000614',
        '9NZ' => 'E02000614',
        '9PA' => 'E02000614',
        '9PB' => 'E02000614',
        '9PE' => 'E02000614',
        '9PH' => 'E02000611',
        '9PJ' => 'E02000611',
        '9PL' => 'E02000614',
        '9PN' => 'E02000614',
        '9PP' => 'E02000611',
        '9PR' => 'E02000611',
        '9PS' => 'E02000611',
        '9PT' => 'E02000611',
        '9PU' => 'E02000611',
        '9PW' => 'E02000614',
        '9QB' => 'E02000614',
        '9QD' => 'E02000611',
        '9QE' => 'E02000611',
        '9QF' => 'E02000611',
        '9QG' => 'E02000614',
        '9QH' => 'E02000614',
        '9QJ' => 'E02000614',
        '9QL' => 'E02000614',
        '9QN' => 'E02000614',
        '9QP' => 'E02000614',
        '9QQ' => 'E02000614',
        '9QR' => 'E02000614',
        '9QS' => 'E02000611',
        '9QT' => 'E02000608',
        '9QU' => 'E02000611',
        '9QW' => 'E02000614',
        '9QZ' => 'E02000614',
        '9RA' => 'E02000614',
        '9RB' => 'E02000614',
        '9RD' => 'E02000614',
        '9RE' => 'E02000614',
        '9RF' => 'E02000614',
        '9RG' => 'E02000614',
        '9RH' => 'E02000614',
        '9RJ' => 'E02000614',
        '9RL' => 'E02000614',
        '9RN' => 'E02000614',
        '9RQ' => 'E02000614',
        '9WA' => 'E02000602',
        '9WB' => 'E02000602',
        '9WD' => 'E02000602',
        '9WE' => 'E02000602',
        '9WF' => 'E02000611',
        '9WG' => 'E02000602',
        '9WH' => 'E02000602',
        '9WJ' => 'E02000602',
        '9WL' => 'E02000602',
        '9WN' => 'E02000602',
        '9WP' => 'E02000602',
        '9WQ' => 'E02000602',
        '9WR' => 'E02000602',
        '9WS' => 'E02000602',
        '9WT' => 'E02000602',
        '9WU' => 'E02000602',
        '9WX' => 'E02000602',
        '9XF' => 'E02000602',
        '9XP' => 'E02000602',
        '9XQ' => 'E02000602',
        '9XT' => 'E02000602',
        '9XZ' => 'E02000614',
        '9YA' => 'E02000602',
        '9YB' => 'E02000602',
        '9YD' => 'E02000611',
        '9YE' => 'E02000602',
        '9YF' => 'E02000602',
        '9YG' => 'E02000602',
        '9YH' => 'E02000602',
        '9YJ' => 'E02000611',
        '9YL' => 'E02000602',
        '9YN' => 'E02000602',
        '9YP' => 'E02000611',
        '9YQ' => 'E02000602',
        '9YR' => 'E02000602',
        '9YS' => 'E02000602',
        '9YT' => 'E02000602',
        '9YU' => 'E02000611',
        '9YW' => 'E02000602',
        '9YX' => 'E02000611',
        '9YY' => 'E02000602',
        '9YZ' => 'E02000611',
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
