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
final class YO18
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '7AA' => 'E02005789',
        '7AB' => 'E02005789',
        '7AD' => 'E02005789',
        '7AE' => 'E02005789',
        '7AF' => 'E02005789',
        '7AG' => 'E02005789',
        '7AH' => 'E02005789',
        '7AJ' => 'E02005789',
        '7AL' => 'E02005789',
        '7AN' => 'E02005789',
        '7AP' => 'E02005789',
        '7AQ' => 'E02005789',
        '7AR' => 'E02005789',
        '7AS' => 'E02005789',
        '7AT' => 'E02005789',
        '7AU' => 'E02005789',
        '7AW' => 'E02005789',
        '7AX' => 'E02005789',
        '7AY' => 'E02005789',
        '7AZ' => 'E02005789',
        '7BA' => 'E02005789',
        '7BB' => 'E02005789',
        '7BD' => 'E02005789',
        '7BE' => 'E02005789',
        '7BF' => 'E02005789',
        '7BG' => 'E02005789',
        '7BH' => 'E02005789',
        '7BJ' => 'E02005789',
        '7BQ' => 'E02005789',
        '7BZ' => 'E02005789',
        '7DA' => 'E02005789',
        '7DB' => 'E02005789',
        '7DD' => 'E02005789',
        '7DE' => 'E02005789',
        '7DG' => 'E02005789',
        '7DH' => 'E02005789',
        '7DJ' => 'E02005789',
        '7DL' => 'E02005789',
        '7DN' => 'E02005789',
        '7DP' => 'E02005789',
        '7DQ' => 'E02005789',
        '7DR' => 'E02005789',
        '7DS' => 'E02005789',
        '7DT' => 'E02005789',
        '7DU' => 'E02005789',
        '7DW' => 'E02005789',
        '7DX' => 'E02005789',
        '7DY' => 'E02005789',
        '7DZ' => 'E02005789',
        '7EA' => 'E02005789',
        '7EB' => 'E02005789',
        '7ED' => 'E02005789',
        '7EE' => 'E02005789',
        '7EF' => 'E02005789',
        '7EG' => 'E02005789',
        '7EH' => 'E02005789',
        '7EJ' => 'E02005789',
        '7EL' => 'E02005789',
        '7EN' => 'E02005789',
        '7EP' => 'E02005789',
        '7EQ' => 'E02005789',
        '7ER' => 'E02005789',
        '7ES' => 'E02005789',
        '7ET' => 'E02005789',
        '7EU' => 'E02005789',
        '7EW' => 'E02005789',
        '7EX' => 'E02005789',
        '7EY' => 'E02005789',
        '7EZ' => 'E02005789',
        '7FA' => 'E02005789',
        '7GZ' => 'E02005789',
        '7HA' => 'E02005789',
        '7HB' => 'E02005789',
        '7HD' => 'E02005789',
        '7HE' => 'E02005789',
        '7HF' => 'E02005789',
        '7HG' => 'E02005789',
        '7HH' => 'E02005789',
        '7HJ' => 'E02005789',
        '7HL' => 'E02005789',
        '7HN' => 'E02005789',
        '7HP' => 'E02005789',
        '7HQ' => 'E02005789',
        '7HR' => 'E02005789',
        '7HS' => 'E02005789',
        '7HT' => 'E02005789',
        '7HU' => 'E02005789',
        '7HW' => 'E02005789',
        '7HX' => 'E02005789',
        '7HY' => 'E02005789',
        '7HZ' => 'E02005789',
        '7JA' => 'E02005789',
        '7JB' => 'E02005789',
        '7JD' => 'E02005789',
        '7JE' => 'E02005789',
        '7JF' => 'E02005789',
        '7JG' => 'E02005789',
        '7JH' => 'E02005789',
        '7JJ' => 'E02005789',
        '7JL' => 'E02005789',
        '7JN' => 'E02005789',
        '7JP' => 'E02005789',
        '7JQ' => 'E02005789',
        '7JR' => 'E02005789',
        '7JS' => 'E02005789',
        '7JT' => 'E02005789',
        '7JU' => 'E02005789',
        '7JW' => 'E02005789',
        '7JX' => 'E02005789',
        '7JY' => 'E02005789',
        '7JZ' => 'E02005789',
        '7LA' => 'E02005789',
        '7LB' => 'E02005789',
        '7LD' => 'E02005789',
        '7LE' => 'E02005789',
        '7LF' => 'E02005789',
        '7LG' => 'E02005789',
        '7LH' => 'E02005789',
        '7LJ' => 'E02005789',
        '7LL' => 'E02005789',
        '7LN' => 'E02005789',
        '7LP' => 'E02005789',
        '7LQ' => 'E02005789',
        '7LR' => 'E02005789',
        '7LS' => 'E02005789',
        '7LT' => 'E02005789',
        '7LU' => 'E02005789',
        '7LW' => 'E02005789',
        '7LX' => 'E02005789',
        '7LY' => 'E02005789',
        '7LZ' => 'E02005789',
        '7NA' => 'E02005789',
        '7NB' => 'E02005789',
        '7ND' => 'E02005789',
        '7NE' => 'E02005789',
        '7NF' => 'E02005789',
        '7NG' => 'E02005789',
        '7NH' => 'E02005789',
        '7NJ' => 'E02005789',
        '7NL' => 'E02005789',
        '7NN' => 'E02005789',
        '7NP' => 'E02005789',
        '7NQ' => 'E02005789',
        '7NR' => 'E02005789',
        '7NS' => 'E02005789',
        '7NT' => 'E02005789',
        '7NU' => 'E02005789',
        '7NW' => 'E02005789',
        '7PA' => 'E02005789',
        '7PF' => 'E02005789',
        '7PG' => 'E02005789',
        '7PH' => 'E02005789',
        '7PJ' => 'E02005789',
        '7PL' => 'E02005789',
        '7PN' => 'E02005789',
        '7PP' => 'E02005789',
        '7PQ' => 'E02005789',
        '7PR' => 'E02005789',
        '7PS' => 'E02005789',
        '7PW' => 'E02005789',
        '7PX' => 'E02005789',
        '7PY' => 'E02005789',
        '7PZ' => 'E02005789',
        '7QA' => 'E02005789',
        '7QB' => 'E02005789',
        '7QG' => 'E02005789',
        '7QH' => 'E02005789',
        '7QJ' => 'E02005789',
        '7QL' => 'E02005789',
        '7QN' => 'E02005789',
        '7QP' => 'E02005789',
        '7QQ' => 'E02005789',
        '7QR' => 'E02005789',
        '7QS' => 'E02005789',
        '7QT' => 'E02005789',
        '7QU' => 'E02005789',
        '7QW' => 'E02005789',
        '7QX' => 'E02005789',
        '7QY' => 'E02005789',
        '7QZ' => 'E02005789',
        '7RA' => 'E02005789',
        '7RB' => 'E02005789',
        '7RJ' => 'E02005789',
        '7RL' => 'E02005789',
        '7RN' => 'E02005789',
        '7RP' => 'E02005789',
        '7RR' => 'E02005789',
        '7RS' => 'E02005789',
        '7RT' => 'E02005789',
        '7RU' => 'E02005789',
        '7RW' => 'E02005789',
        '7RX' => 'E02005789',
        '7RY' => 'E02005789',
        '7RZ' => 'E02005789',
        '7SA' => 'E02005789',
        '7SB' => 'E02005789',
        '7SD' => 'E02005789',
        '7SE' => 'E02005789',
        '7SF' => 'E02005789',
        '7SG' => 'E02005789',
        '7SH' => 'E02005789',
        '7SJ' => 'E02005789',
        '7SL' => 'E02005789',
        '7SN' => 'E02005789',
        '7SP' => 'E02005789',
        '7SQ' => 'E02005789',
        '7SR' => 'E02005789',
        '7SS' => 'E02005789',
        '7ST' => 'E02005789',
        '7SU' => 'E02005789',
        '7SW' => 'E02005789',
        '7SX' => 'E02005789',
        '7SY' => 'E02005789',
        '7SZ' => 'E02005789',
        '7TA' => 'E02005789',
        '7TB' => 'E02005789',
        '7TD' => 'E02005789',
        '7TE' => 'E02005789',
        '7TF' => 'E02005789',
        '7TG' => 'E02005789',
        '7TH' => 'E02005789',
        '7TJ' => 'E02005789',
        '7TL' => 'E02005789',
        '7TN' => 'E02005789',
        '7TP' => 'E02005789',
        '7TQ' => 'E02005789',
        '7TR' => 'E02005789',
        '7TS' => 'E02005789',
        '7TT' => 'E02005789',
        '7TW' => 'E02005789',
        '7WE' => 'E02005789',
        '7WF' => 'E02005789',
        '7WG' => 'E02005789',
        '7WH' => 'E02005789',
        '7WJ' => 'E02005789',
        '7WL' => 'E02005789',
        '7WN' => 'E02005789',
        '7WP' => 'E02005789',
        '7WQ' => 'E02005789',
        '7WR' => 'E02005789',
        '7WS' => 'E02005789',
        '7WT' => 'E02005789',
        '7WU' => 'E02005789',
        '7WW' => 'E02005789',
        '7WX' => 'E02005789',
        '7WY' => 'E02005789',
        '7WZ' => 'E02005789',
        '7XS' => 'E02005789',
        '7XT' => 'E02005789',
        '7XU' => 'E02005789',
        '7XW' => 'E02005789',
        '7XX' => 'E02005789',
        '7XY' => 'E02005789',
        '7XZ' => 'E02005789',
        '7YA' => 'E02005789',
        '7YB' => 'E02005789',
        '7YD' => 'E02005789',
        '7YE' => 'E02005789',
        '7YF' => 'E02005789',
        '7YG' => 'E02005789',
        '7YH' => 'E02005789',
        '7YJ' => 'E02005789',
        '7YL' => 'E02005789',
        '7YN' => 'E02005789',
        '7YP' => 'E02005789',
        '7YQ' => 'E02005789',
        '7YR' => 'E02005789',
        '7YS' => 'E02005789',
        '7YT' => 'E02005789',
        '7YU' => 'E02005789',
        '7YW' => 'E02005789',
        '7YX' => 'E02005789',
        '7YY' => 'E02005789',
        '7YZ' => 'E02005789',
        '7ZA' => 'E02005789',
        '7ZP' => 'E02005789',
        '7ZW' => 'E02005789',
        '8AA' => 'E02005789',
        '8AB' => 'E02005789',
        '8AD' => 'E02005789',
        '8AE' => 'E02005789',
        '8AF' => 'E02005789',
        '8AG' => 'E02005789',
        '8AH' => 'E02005789',
        '8AJ' => 'E02005789',
        '8AL' => 'E02005789',
        '8AN' => 'E02005789',
        '8AP' => 'E02005789',
        '8AQ' => 'E02005789',
        '8AR' => 'E02005789',
        '8AS' => 'E02005789',
        '8AT' => 'E02005789',
        '8AU' => 'E02005789',
        '8AW' => 'E02005789',
        '8AX' => 'E02005789',
        '8AY' => 'E02005789',
        '8AZ' => 'E02005789',
        '8BA' => 'E02005789',
        '8BB' => 'E02005789',
        '8BD' => 'E02005789',
        '8BE' => 'E02005789',
        '8BF' => 'E02005789',
        '8BG' => 'E02005789',
        '8BH' => 'E02005789',
        '8BJ' => 'E02005789',
        '8BL' => 'E02005789',
        '8BN' => 'E02005789',
        '8BP' => 'E02005789',
        '8BQ' => 'E02005789',
        '8BS' => 'E02005789',
        '8BT' => 'E02005789',
        '8BU' => 'E02005789',
        '8BW' => 'E02005789',
        '8BX' => 'E02005789',
        '8BY' => 'E02005789',
        '8BZ' => 'E02005789',
        '8DA' => 'E02005789',
        '8DB' => 'E02005789',
        '8DD' => 'E02005789',
        '8DE' => 'E02005789',
        '8DF' => 'E02005789',
        '8DG' => 'E02005789',
        '8DH' => 'E02005789',
        '8DJ' => 'E02005789',
        '8DL' => 'E02005789',
        '8DN' => 'E02005789',
        '8DP' => 'E02005789',
        '8DQ' => 'E02005789',
        '8DR' => 'E02005789',
        '8DS' => 'E02005789',
        '8DT' => 'E02005789',
        '8DU' => 'E02005789',
        '8DW' => 'E02005789',
        '8DX' => 'E02005789',
        '8DY' => 'E02005789',
        '8DZ' => 'E02005789',
        '8EA' => 'E02005789',
        '8EB' => 'E02005789',
        '8ED' => 'E02005789',
        '8EE' => 'E02005789',
        '8EF' => 'E02005788',
        '8EG' => 'E02005789',
        '8EH' => 'E02005788',
        '8EJ' => 'E02005788',
        '8EL' => 'E02005788',
        '8EN' => 'E02005788',
        '8EP' => 'E02005788',
        '8EQ' => 'E02005789',
        '8ER' => 'E02005788',
        '8ES' => 'E02005788',
        '8ET' => 'E02005788',
        '8EU' => 'E02005788',
        '8EW' => 'E02005788',
        '8EX' => 'E02005788',
        '8EY' => 'E02005789',
        '8EZ' => 'E02005789',
        '8FA' => 'E02005789',
        '8FB' => 'E02005788',
        '8HB' => 'E02005788',
        '8HD' => 'E02005788',
        '8HE' => 'E02005788',
        '8HF' => 'E02005788',
        '8HG' => 'E02005788',
        '8HH' => 'E02005788',
        '8HJ' => 'E02005788',
        '8HL' => 'E02005788',
        '8HN' => 'E02005788',
        '8HP' => 'E02005788',
        '8HQ' => 'E02005788',
        '8HR' => 'E02005788',
        '8HS' => 'E02005788',
        '8HT' => 'E02005788',
        '8HU' => 'E02005788',
        '8HW' => 'E02005788',
        '8HX' => 'E02005788',
        '8HY' => 'E02005788',
        '8HZ' => 'E02005788',
        '8JA' => 'E02005788',
        '8JB' => 'E02005789',
        '8JH' => 'E02005789',
        '8JJ' => 'E02005789',
        '8JL' => 'E02005789',
        '8JN' => 'E02005789',
        '8JP' => 'E02005788',
        '8JQ' => 'E02005789',
        '8JR' => 'E02005788',
        '8JS' => 'E02005788',
        '8JT' => 'E02005788',
        '8JU' => 'E02005789',
        '8JW' => 'E02005789',
        '8JX' => 'E02005789',
        '8JY' => 'E02005789',
        '8JZ' => 'E02005789',
        '8LH' => 'E02005789',
        '8LJ' => 'E02005789',
        '8LL' => 'E02005789',
        '8LN' => 'E02005789',
        '8LP' => 'E02005788',
        '8LQ' => 'E02005789',
        '8LR' => 'E02005788',
        '8LS' => 'E02005788',
        '8LT' => 'E02005790',
        '8LU' => 'E02005788',
        '8LW' => 'E02005788',
        '8LX' => 'E02005789',
        '8LY' => 'E02005789',
        '8LZ' => 'E02005789',
        '8ND' => 'E02005789',
        '8NE' => 'E02005789',
        '8NF' => 'E02005789',
        '8NG' => 'E02005789',
        '8NH' => 'E02005789',
        '8NJ' => 'E02005789',
        '8NL' => 'E02005789',
        '8NN' => 'E02005789',
        '8NP' => 'E02005789',
        '8NQ' => 'E02005789',
        '8NR' => 'E02005789',
        '8NS' => 'E02005788',
        '8NT' => 'E02005788',
        '8NU' => 'E02005788',
        '8NW' => 'E02005789',
        '8NX' => 'E02005788',
        '8NY' => 'E02005788',
        '8NZ' => 'E02005789',
        '8PA' => 'E02005788',
        '8PB' => 'E02005788',
        '8PD' => 'E02005788',
        '8PE' => 'E02005788',
        '8PF' => 'E02005788',
        '8PG' => 'E02005788',
        '8PH' => 'E02005788',
        '8PJ' => 'E02005788',
        '8PL' => 'E02005788',
        '8PN' => 'E02005788',
        '8PP' => 'E02005789',
        '8PQ' => 'E02005788',
        '8PR' => 'E02005789',
        '8PS' => 'E02005789',
        '8PT' => 'E02005788',
        '8PU' => 'E02005788',
        '8PW' => 'E02005789',
        '8PX' => 'E02005788',
        '8QA' => 'E02005788',
        '8QB' => 'E02005788',
        '8QD' => 'E02005788',
        '8QE' => 'E02005788',
        '8QF' => 'E02005788',
        '8QG' => 'E02005788',
        '8QH' => 'E02005788',
        '8QJ' => 'E02005788',
        '8QL' => 'E02005788',
        '8QN' => 'E02005788',
        '8QQ' => 'E02005789',
        '8RA' => 'E02005788',
        '8RB' => 'E02005788',
        '8RD' => 'E02005788',
        '8RE' => 'E02005788',
        '8RF' => 'E02005788',
        '8RG' => 'E02005788',
        '8RH' => 'E02005788',
        '8RJ' => 'E02005788',
        '8RL' => 'E02005788',
        '8RN' => 'E02005788',
        '8RP' => 'E02005788',
        '8RQ' => 'E02005788',
        '8RR' => 'E02005788',
        '8RS' => 'E02005788',
        '8RT' => 'E02005788',
        '8RW' => 'E02005788',
        '8SA' => 'E02005788',
        '8SB' => 'E02005788',
        '8SD' => 'E02005788',
        '8SE' => 'E02005788',
        '8SF' => 'E02005788',
        '8SG' => 'E02005788',
        '8SQ' => 'E02005788',
        '8SX' => 'E02005789',
        '8SY' => 'E02005789',
        '8SZ' => 'E02005789',
        '8TA' => 'E02005789',
        '8TB' => 'E02005789',
        '8TD' => 'E02005789',
        '8TE' => 'E02005789',
        '8TF' => 'E02005789',
        '8TG' => 'E02005789',
        '8TH' => 'E02005789',
        '8TJ' => 'E02005789',
        '8TL' => 'E02005789',
        '8TN' => 'E02005789',
        '8TP' => 'E02005789',
        '8TQ' => 'E02005789',
        '8TS' => 'E02005789',
        '8WW' => 'E02005789',
        '8WX' => 'E02005789',
        '8WY' => 'E02005789',
        '8WZ' => 'E02005789',
        '8YG' => 'E02005789',
        '8YH' => 'E02005789',
        '8YJ' => 'E02005788',
        '8YL' => 'E02005789',
        '8YN' => 'E02005789',
        '8YP' => 'E02005788',
        '8YQ' => 'E02005789',
        '8YR' => 'E02005789',
        '8YS' => 'E02005789',
        '8YU' => 'E02005788',
        '8YW' => 'E02005789',
        '8YX' => 'E02005789',
        '8YY' => 'E02005789',
        '8YZ' => 'E02005789',
        '9AA' => 'E02005789',
        '9AE' => 'E02005789',
        '9AF' => 'E02005789',
        '9AG' => 'E02005789',
        '9AH' => 'E02005789',
        '9AJ' => 'E02005789',
        '9AL' => 'E02005789',
        '9AN' => 'E02005789',
        '9AP' => 'E02005789',
        '9AQ' => 'E02005789',
        '9AR' => 'E02005789',
        '9AS' => 'E02005789',
        '9AT' => 'E02005789',
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
