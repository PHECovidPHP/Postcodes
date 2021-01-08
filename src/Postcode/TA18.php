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
final class TA18
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '7AA' => 'E02006095',
        '7AB' => 'E02006095',
        '7AD' => 'E02006095',
        '7AE' => 'E02006095',
        '7AF' => 'E02006095',
        '7AG' => 'E02006095',
        '7AH' => 'E02006095',
        '7AJ' => 'E02006095',
        '7AL' => 'E02006095',
        '7AN' => 'E02006095',
        '7AP' => 'E02006095',
        '7AQ' => 'E02006095',
        '7AR' => 'E02006095',
        '7AS' => 'E02006095',
        '7AT' => 'E02006095',
        '7AU' => 'E02006095',
        '7AW' => 'E02006095',
        '7AX' => 'E02006095',
        '7AY' => 'E02006095',
        '7AZ' => 'E02006095',
        '7BA' => 'E02006095',
        '7BB' => 'E02006095',
        '7BD' => 'E02006095',
        '7BE' => 'E02006095',
        '7BF' => 'E02006091',
        '7BG' => 'E02006095',
        '7BH' => 'E02006095',
        '7BJ' => 'E02006095',
        '7BL' => 'E02006095',
        '7BN' => 'E02006095',
        '7BP' => 'E02006095',
        '7BQ' => 'E02006095',
        '7BS' => 'E02006095',
        '7BT' => 'E02006095',
        '7BU' => 'E02006095',
        '7BW' => 'E02006095',
        '7BX' => 'E02006095',
        '7BY' => 'E02006095',
        '7BZ' => 'E02006095',
        '7DA' => 'E02006095',
        '7DB' => 'E02006095',
        '7DD' => 'E02006095',
        '7DE' => 'E02006095',
        '7DF' => 'E02006095',
        '7DG' => 'E02006095',
        '7DH' => 'E02006095',
        '7DJ' => 'E02006095',
        '7DL' => 'E02006095',
        '7DN' => 'E02006095',
        '7DP' => 'E02006095',
        '7DQ' => 'E02006095',
        '7DR' => 'E02006095',
        '7DS' => 'E02006095',
        '7DT' => 'E02006095',
        '7DU' => 'E02006095',
        '7DW' => 'E02006095',
        '7DX' => 'E02006095',
        '7DY' => 'E02006091',
        '7DZ' => 'E02006091',
        '7EA' => 'E02006095',
        '7EL' => 'E02006091',
        '7ER' => 'E02006095',
        '7ES' => 'E02006095',
        '7HA' => 'E02006095',
        '7HE' => 'E02006095',
        '7HF' => 'E02006095',
        '7HG' => 'E02006095',
        '7HJ' => 'E02006095',
        '7HN' => 'E02006095',
        '7HP' => 'E02006095',
        '7HQ' => 'E02006095',
        '7HR' => 'E02006095',
        '7HS' => 'E02006095',
        '7HT' => 'E02006095',
        '7HU' => 'E02006095',
        '7HW' => 'E02006095',
        '7HX' => 'E02006095',
        '7HY' => 'E02006095',
        '7HZ' => 'E02006095',
        '7JA' => 'E02006095',
        '7JH' => 'E02006095',
        '7JJ' => 'E02006095',
        '7JL' => 'E02006095',
        '7JN' => 'E02006095',
        '7JP' => 'E02006095',
        '7JQ' => 'E02006095',
        '7JR' => 'E02006095',
        '7JS' => 'E02006095',
        '7JT' => 'E02006095',
        '7JU' => 'E02006095',
        '7JW' => 'E02006095',
        '7JX' => 'E02006095',
        '7JY' => 'E02006095',
        '7JZ' => 'E02006095',
        '7LA' => 'E02006095',
        '7LB' => 'E02006095',
        '7LD' => 'E02006095',
        '7LE' => 'E02006095',
        '7LF' => 'E02006095',
        '7LG' => 'E02006095',
        '7LH' => 'E02006095',
        '7LJ' => 'E02006095',
        '7LL' => 'E02006095',
        '7LN' => 'E02006095',
        '7LP' => 'E02006095',
        '7LQ' => 'E02006095',
        '7LR' => 'E02006095',
        '7LS' => 'E02006095',
        '7LT' => 'E02006095',
        '7LU' => 'E02006095',
        '7LW' => 'E02006095',
        '7LX' => 'E02006095',
        '7LY' => 'E02006095',
        '7LZ' => 'E02006095',
        '7ND' => 'E02006095',
        '7NE' => 'E02006095',
        '7NF' => 'E02006095',
        '7NG' => 'E02006091',
        '7NH' => 'E02006091',
        '7NJ' => 'E02006095',
        '7NL' => 'E02006095',
        '7NN' => 'E02006095',
        '7NP' => 'E02006095',
        '7NQ' => 'E02006091',
        '7NR' => 'E02006091',
        '7NS' => 'E02006095',
        '7NT' => 'E02006095',
        '7NU' => 'E02006091',
        '7NW' => 'E02006095',
        '7NX' => 'E02006091',
        '7NY' => 'E02006091',
        '7NZ' => 'E02006091',
        '7PA' => 'E02006091',
        '7PB' => 'E02006091',
        '7PD' => 'E02006091',
        '7PE' => 'E02006091',
        '7PF' => 'E02006091',
        '7PG' => 'E02006091',
        '7PH' => 'E02006091',
        '7PJ' => 'E02006091',
        '7PL' => 'E02006091',
        '7PN' => 'E02006091',
        '7PP' => 'E02006091',
        '7PQ' => 'E02006091',
        '7PR' => 'E02006091',
        '7PS' => 'E02006091',
        '7PT' => 'E02006091',
        '7PU' => 'E02006091',
        '7PW' => 'E02006091',
        '7PX' => 'E02006091',
        '7PY' => 'E02006091',
        '7PZ' => 'E02006091',
        '7QA' => 'E02006091',
        '7QB' => 'E02006091',
        '7QD' => 'E02006091',
        '7QE' => 'E02006091',
        '7QF' => 'E02006091',
        '7QG' => 'E02006091',
        '7QH' => 'E02006091',
        '7QJ' => 'E02006091',
        '7QL' => 'E02006091',
        '7QN' => 'E02006091',
        '7QQ' => 'E02006091',
        '7QT' => 'E02006091',
        '7QU' => 'E02006091',
        '7QW' => 'E02006095',
        '7QX' => 'E02006091',
        '7QY' => 'E02006091',
        '7QZ' => 'E02006091',
        '7RA' => 'E02006091',
        '7RB' => 'E02006091',
        '7RD' => 'E02006091',
        '7RE' => 'E02006091',
        '7RF' => 'E02006091',
        '7RG' => 'E02006091',
        '7RH' => 'E02006091',
        '7RJ' => 'E02006091',
        '7RL' => 'E02006091',
        '7RN' => 'E02006091',
        '7RP' => 'E02006091',
        '7RQ' => 'E02006091',
        '7RS' => 'E02006091',
        '7RT' => 'E02006091',
        '7RW' => 'E02006091',
        '7RY' => 'E02006095',
        '7RZ' => 'E02006095',
        '7SA' => 'E02006095',
        '7SB' => 'E02006095',
        '7SD' => 'E02006091',
        '7SE' => 'E02006091',
        '7SF' => 'E02006091',
        '7SG' => 'E02006091',
        '7SH' => 'E02006091',
        '7SJ' => 'E02006091',
        '7SL' => 'E02006091',
        '7SN' => 'E02006091',
        '7SP' => 'E02006091',
        '7SQ' => 'E02006091',
        '7SR' => 'E02006091',
        '7SS' => 'E02006091',
        '7ST' => 'E02006091',
        '7SU' => 'E02006091',
        '7SW' => 'E02006091',
        '7SX' => 'E02006091',
        '7SY' => 'E02006091',
        '7SZ' => 'E02006091',
        '7TA' => 'E02006091',
        '7TB' => 'E02006091',
        '7TD' => 'E02006094',
        '7TE' => 'E02006094',
        '7TF' => 'E02006094',
        '7TG' => 'E02006094',
        '7TH' => 'E02006091',
        '7TL' => 'E02006098',
        '7TN' => 'E02006098',
        '7TP' => 'E02006095',
        '7TQ' => 'E02006091',
        '7TR' => 'E02006091',
        '7TS' => 'E02006091',
        '7TT' => 'E02006098',
        '7TU' => 'E02006098',
        '7TW' => 'E02006098',
        '7WZ' => 'E02006095',
        '7XN' => 'E02006095',
        '7XQ' => 'E02006098',
        '7XZ' => 'E02006098',
        '7YA' => 'E02006095',
        '7YB' => 'E02006095',
        '7YD' => 'E02006095',
        '7YE' => 'E02006095',
        '7YF' => 'E02006095',
        '7YG' => 'E02006098',
        '7YH' => 'E02006095',
        '7YJ' => 'E02006095',
        '7YL' => 'E02006095',
        '7YN' => 'E02006095',
        '7YP' => 'E02006091',
        '7YQ' => 'E02006091',
        '7YR' => 'E02006095',
        '7YS' => 'E02006095',
        '7YT' => 'E02006095',
        '7YU' => 'E02006091',
        '7YW' => 'E02006095',
        '7YX' => 'E02006095',
        '7YY' => 'E02006091',
        '7YZ' => 'E02006091',
        '7ZD' => 'E02006095',
        '7ZE' => 'E02006095',
        '7ZN' => 'E02006095',
        '7ZQ' => 'E02006095',
        '7ZX' => 'E02006095',
        '8AA' => 'E02006095',
        '8AB' => 'E02006095',
        '8AD' => 'E02006095',
        '8AE' => 'E02006095',
        '8AF' => 'E02006095',
        '8AG' => 'E02006095',
        '8AH' => 'E02006095',
        '8AJ' => 'E02006095',
        '8AL' => 'E02006095',
        '8AN' => 'E02006095',
        '8AP' => 'E02006095',
        '8AQ' => 'E02006095',
        '8AR' => 'E02006095',
        '8AS' => 'E02006095',
        '8AT' => 'E02006095',
        '8AU' => 'E02006095',
        '8AW' => 'E02006095',
        '8AX' => 'E02006095',
        '8AY' => 'E02006095',
        '8AZ' => 'E02006095',
        '8BA' => 'E02006095',
        '8BB' => 'E02006095',
        '8BD' => 'E02006095',
        '8BE' => 'E02006095',
        '8BF' => 'E02006095',
        '8BG' => 'E02006095',
        '8BH' => 'E02006095',
        '8BJ' => 'E02006095',
        '8BL' => 'E02006095',
        '8BN' => 'E02006095',
        '8BP' => 'E02006095',
        '8BQ' => 'E02006095',
        '8BS' => 'E02006095',
        '8BT' => 'E02006095',
        '8BU' => 'E02006095',
        '8BW' => 'E02006095',
        '8BX' => 'E02006095',
        '8BY' => 'E02006095',
        '8BZ' => 'E02006095',
        '8DA' => 'E02006095',
        '8DB' => 'E02006095',
        '8DD' => 'E02006095',
        '8DE' => 'E02006095',
        '8DF' => 'E02006095',
        '8DG' => 'E02006095',
        '8DH' => 'E02006095',
        '8DJ' => 'E02006095',
        '8DL' => 'E02006095',
        '8DN' => 'E02006095',
        '8DP' => 'E02006095',
        '8DQ' => 'E02006095',
        '8DR' => 'E02006095',
        '8DS' => 'E02006095',
        '8DT' => 'E02006095',
        '8DU' => 'E02006095',
        '8DW' => 'E02006095',
        '8DX' => 'E02006095',
        '8DY' => 'E02006095',
        '8DZ' => 'E02006095',
        '8EA' => 'E02006095',
        '8EB' => 'E02006095',
        '8ED' => 'E02006095',
        '8EE' => 'E02006095',
        '8EF' => 'E02006095',
        '8EG' => 'E02006095',
        '8EH' => 'E02006095',
        '8EJ' => 'E02006095',
        '8EL' => 'E02006095',
        '8EN' => 'E02006095',
        '8EP' => 'E02006095',
        '8EQ' => 'E02006095',
        '8ER' => 'E02006095',
        '8ES' => 'E02006095',
        '8ET' => 'E02006095',
        '8EU' => 'E02006095',
        '8EW' => 'E02006095',
        '8EX' => 'E02006095',
        '8EY' => 'E02006095',
        '8EZ' => 'E02006095',
        '8FA' => 'E02006095',
        '8FB' => 'E02006095',
        '8FD' => 'E02006095',
        '8FE' => 'E02006095',
        '8FF' => 'E02006098',
        '8FG' => 'E02006095',
        '8HA' => 'E02006095',
        '8HB' => 'E02006095',
        '8HD' => 'E02006095',
        '8HE' => 'E02006095',
        '8HF' => 'E02006095',
        '8HG' => 'E02006095',
        '8HH' => 'E02006095',
        '8HJ' => 'E02006095',
        '8HL' => 'E02006095',
        '8HN' => 'E02006095',
        '8HP' => 'E02006095',
        '8HQ' => 'E02006095',
        '8HR' => 'E02006095',
        '8HS' => 'E02006095',
        '8HT' => 'E02006095',
        '8HU' => 'E02006095',
        '8HW' => 'E02006095',
        '8HX' => 'E02006095',
        '8HY' => 'E02006095',
        '8HZ' => 'E02006095',
        '8JA' => 'E02006095',
        '8JB' => 'E02006095',
        '8JD' => 'E02006095',
        '8JE' => 'E02006095',
        '8JF' => 'E02006095',
        '8JG' => 'E02006095',
        '8JH' => 'E02006095',
        '8JJ' => 'E02006095',
        '8JL' => 'E02006095',
        '8JN' => 'E02006095',
        '8JP' => 'E02006095',
        '8JQ' => 'E02006095',
        '8JR' => 'E02006095',
        '8JS' => 'E02006095',
        '8JT' => 'E02006095',
        '8JU' => 'E02006095',
        '8JW' => 'E02006095',
        '8JY' => 'E02006095',
        '8LL' => 'E02006095',
        '8LN' => 'E02006095',
        '8LP' => 'E02006095',
        '8LR' => 'E02006095',
        '8LS' => 'E02006095',
        '8LT' => 'E02006095',
        '8LU' => 'E02006095',
        '8LW' => 'E02006095',
        '8LX' => 'E02006095',
        '8LY' => 'E02006095',
        '8LZ' => 'E02006095',
        '8NA' => 'E02006095',
        '8NB' => 'E02006095',
        '8ND' => 'E02006095',
        '8NE' => 'E02006095',
        '8NF' => 'E02006095',
        '8NG' => 'E02006095',
        '8NH' => 'E02006095',
        '8NJ' => 'E02006095',
        '8NL' => 'E02006095',
        '8NN' => 'E02006095',
        '8NP' => 'E02006095',
        '8NQ' => 'E02006095',
        '8NR' => 'E02006095',
        '8NS' => 'E02006095',
        '8NT' => 'E02006095',
        '8NU' => 'E02006095',
        '8NW' => 'E02006095',
        '8NX' => 'E02006095',
        '8NY' => 'E02006095',
        '8NZ' => 'E02006095',
        '8PA' => 'E02006098',
        '8PB' => 'E02006098',
        '8PD' => 'E02006098',
        '8PE' => 'E02006095',
        '8PF' => 'E02006095',
        '8PG' => 'E02006095',
        '8PH' => 'E02006098',
        '8PJ' => 'E02006095',
        '8PL' => 'E02004271',
        '8PN' => 'E02006098',
        '8PP' => 'E02006098',
        '8PQ' => 'E02006098',
        '8PR' => 'E02006098',
        '8PS' => 'E02006098',
        '8PT' => 'E02006098',
        '8PU' => 'E02006098',
        '8PW' => 'E02006098',
        '8PX' => 'E02006098',
        '8PY' => 'E02006098',
        '8PZ' => 'E02004271',
        '8QA' => 'E02004271',
        '8QB' => 'E02004271',
        '8QD' => 'E02004271',
        '8QE' => 'E02004271',
        '8QF' => 'E02006098',
        '8QG' => 'E02006098',
        '8QH' => 'E02006098',
        '8QJ' => 'E02006098',
        '8QL' => 'E02006098',
        '8QN' => 'E02006098',
        '8QP' => 'E02006098',
        '8QQ' => 'E02006098',
        '8QR' => 'E02006098',
        '8QS' => 'E02006098',
        '8QT' => 'E02006098',
        '8QU' => 'E02006098',
        '8QW' => 'E02006098',
        '8QX' => 'E02006098',
        '8QY' => 'E02006098',
        '8QZ' => 'E02006098',
        '8RA' => 'E02006098',
        '8RB' => 'E02004271',
        '8RD' => 'E02006095',
        '8RE' => 'E02006095',
        '8RF' => 'E02006098',
        '8RG' => 'E02006098',
        '8RH' => 'E02006098',
        '8RJ' => 'E02006098',
        '8RL' => 'E02006098',
        '8RN' => 'E02006098',
        '8RP' => 'E02006098',
        '8RQ' => 'E02006098',
        '8RR' => 'E02006098',
        '8XJ' => 'E02006098',
        '8XR' => 'E02006098',
        '8YA' => 'E02006095',
        '8YB' => 'E02006095',
        '8YD' => 'E02006095',
        '8YN' => 'E02006095',
        '8YP' => 'E02006095',
        '8YQ' => 'E02006095',
        '8YR' => 'E02006095',
        '8YS' => 'E02006095',
        '8YT' => 'E02006095',
        '8YU' => 'E02006098',
        '8YW' => 'E02006095',
        '8YX' => 'E02006095',
        '8YY' => 'E02006095',
        '8YZ' => 'E02006098',
        '8ZD' => 'E02006095',
        '9AA' => 'E02006095',
        '9AB' => 'E02006095',
        '9AD' => 'E02006095',
        '9AE' => 'E02006095',
        '9AF' => 'E02006095',
        '9AG' => 'E02006095',
        '9AH' => 'E02006095',
        '9AJ' => 'E02006095',
        '9AL' => 'E02006095',
        '9AN' => 'E02006095',
        '9AP' => 'E02006095',
        '9AQ' => 'E02006095',
        '9AR' => 'E02006095',
        '9AS' => 'E02006095',
        '9AT' => 'E02006095',
        '9AU' => 'E02006095',
        '9AW' => 'E02006095',
        '9AX' => 'E02006095',
        '9AY' => 'E02006095',
        '9AZ' => 'E02006095',
        '9BA' => 'E02006095',
        '9BB' => 'E02006095',
        '9BD' => 'E02006095',
        '9BE' => 'E02006095',
        '9BF' => 'E02006095',
        '9BG' => 'E02006095',
        '9BH' => 'E02006095',
        '9BJ' => 'E02006095',
        '9BL' => 'E02006095',
        '9BN' => 'E02006095',
        '9BP' => 'E02006095',
        '9BQ' => 'E02006095',
        '9BR' => 'E02006095',
        '9BS' => 'E02006095',
        '9BT' => 'E02006095',
        '9BU' => 'E02006095',
        '9BW' => 'E02006095',
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
