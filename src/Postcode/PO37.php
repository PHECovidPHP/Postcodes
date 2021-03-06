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
final class PO37
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '6AA' => 'E02003596',
        '6AB' => 'E02003596',
        '6AD' => 'E02003596',
        '6AE' => 'E02003596',
        '6AF' => 'E02003596',
        '6AG' => 'E02003596',
        '6AH' => 'E02003596',
        '6AJ' => 'E02003596',
        '6AL' => 'E02003596',
        '6AN' => 'E02003596',
        '6AP' => 'E02003596',
        '6AQ' => 'E02003596',
        '6AR' => 'E02003596',
        '6AS' => 'E02003596',
        '6AT' => 'E02003596',
        '6AU' => 'E02003596',
        '6AW' => 'E02003596',
        '6AX' => 'E02003596',
        '6AY' => 'E02003596',
        '6AZ' => 'E02003596',
        '6BA' => 'E02003596',
        '6BB' => 'E02003596',
        '6BD' => 'E02003596',
        '6BE' => 'E02003596',
        '6BF' => 'E02003596',
        '6BG' => 'E02003596',
        '6BH' => 'E02003596',
        '6BJ' => 'E02003596',
        '6BL' => 'E02003596',
        '6BN' => 'E02003596',
        '6BP' => 'E02003596',
        '6BQ' => 'E02003596',
        '6BS' => 'E02003596',
        '6BT' => 'E02003596',
        '6BU' => 'E02003596',
        '6BW' => 'E02003596',
        '6BX' => 'E02003596',
        '6BY' => 'E02003596',
        '6BZ' => 'E02003596',
        '6DA' => 'E02003596',
        '6DB' => 'E02003596',
        '6DD' => 'E02003596',
        '6DE' => 'E02003596',
        '6DF' => 'E02003596',
        '6DG' => 'E02003596',
        '6DH' => 'E02003596',
        '6DJ' => 'E02003596',
        '6DL' => 'E02003596',
        '6DN' => 'E02003596',
        '6DP' => 'E02003596',
        '6DQ' => 'E02003596',
        '6DR' => 'E02003596',
        '6DS' => 'E02003596',
        '6DT' => 'E02003596',
        '6DU' => 'E02003596',
        '6DW' => 'E02003596',
        '6DX' => 'E02003596',
        '6DY' => 'E02003594',
        '6DZ' => 'E02003594',
        '6EA' => 'E02003596',
        '6EB' => 'E02003596',
        '6ED' => 'E02003596',
        '6EE' => 'E02003596',
        '6EF' => 'E02003596',
        '6EG' => 'E02003596',
        '6EH' => 'E02003596',
        '6EJ' => 'E02003596',
        '6EL' => 'E02003596',
        '6EN' => 'E02003596',
        '6EP' => 'E02003596',
        '6EQ' => 'E02003596',
        '6ER' => 'E02003596',
        '6ES' => 'E02003596',
        '6ET' => 'E02003596',
        '6EU' => 'E02003596',
        '6EW' => 'E02003596',
        '6EX' => 'E02003596',
        '6EY' => 'E02003596',
        '6EZ' => 'E02003596',
        '6FA' => 'E02003596',
        '6FB' => 'E02003596',
        '6FD' => 'E02003596',
        '6FE' => 'E02003596',
        '6FF' => 'E02003596',
        '6FG' => 'E02003596',
        '6FH' => 'E02003596',
        '6FJ' => 'E02003596',
        '6FL' => 'E02003595',
        '6FN' => 'E02003596',
        '6HA' => 'E02003596',
        '6HB' => 'E02003596',
        '6HD' => 'E02003596',
        '6HE' => 'E02003596',
        '6HF' => 'E02003596',
        '6HG' => 'E02003594',
        '6HH' => 'E02003596',
        '6HJ' => 'E02003596',
        '6HL' => 'E02003596',
        '6HP' => 'E02003596',
        '6HR' => 'E02003596',
        '6HS' => 'E02003596',
        '6HT' => 'E02003596',
        '6HU' => 'E02003596',
        '6HX' => 'E02003596',
        '6HY' => 'E02003596',
        '6HZ' => 'E02003596',
        '6JA' => 'E02003594',
        '6JB' => 'E02003594',
        '6JD' => 'E02003596',
        '6JH' => 'E02003596',
        '6JJ' => 'E02003596',
        '6JL' => 'E02003596',
        '6JN' => 'E02003596',
        '6JP' => 'E02003596',
        '6JQ' => 'E02003596',
        '6JR' => 'E02003596',
        '6JS' => 'E02003596',
        '6JT' => 'E02003596',
        '6JU' => 'E02003596',
        '6JW' => 'E02003596',
        '6JX' => 'E02003596',
        '6JY' => 'E02003596',
        '6JZ' => 'E02003596',
        '6LA' => 'E02003596',
        '6LB' => 'E02003596',
        '6LD' => 'E02003596',
        '6LG' => 'E02003596',
        '6LL' => 'E02003596',
        '6LP' => 'E02003596',
        '6LR' => 'E02003596',
        '6LS' => 'E02003596',
        '6LT' => 'E02003596',
        '6LU' => 'E02003596',
        '6LX' => 'E02003596',
        '6LY' => 'E02003596',
        '6LZ' => 'E02003595',
        '6NA' => 'E02003595',
        '6NB' => 'E02003595',
        '6ND' => 'E02003596',
        '6NH' => 'E02003596',
        '6NJ' => 'E02003596',
        '6NL' => 'E02003596',
        '6NN' => 'E02003596',
        '6NP' => 'E02003596',
        '6NR' => 'E02003596',
        '6NS' => 'E02003596',
        '6NT' => 'E02003596',
        '6NU' => 'E02003596',
        '6NW' => 'E02003596',
        '6NX' => 'E02003596',
        '6NY' => 'E02003596',
        '6NZ' => 'E02003596',
        '6PA' => 'E02003596',
        '6PB' => 'E02003596',
        '6PD' => 'E02003596',
        '6PE' => 'E02003596',
        '6PF' => 'E02003596',
        '6PG' => 'E02003596',
        '6PH' => 'E02003596',
        '6PJ' => 'E02003596',
        '6PL' => 'E02003596',
        '6PN' => 'E02003596',
        '6PP' => 'E02003596',
        '6PQ' => 'E02003596',
        '6PR' => 'E02003596',
        '6PS' => 'E02003596',
        '6PT' => 'E02003596',
        '6PU' => 'E02003596',
        '6PW' => 'E02003596',
        '6PX' => 'E02003596',
        '6PY' => 'E02003596',
        '6PZ' => 'E02003596',
        '6QA' => 'E02003596',
        '6QB' => 'E02003596',
        '6QD' => 'E02003596',
        '6QE' => 'E02003596',
        '6QH' => 'E02003596',
        '6QJ' => 'E02003596',
        '6QL' => 'E02003595',
        '6QN' => 'E02003595',
        '6QR' => 'E02003596',
        '6QS' => 'E02003596',
        '6QT' => 'E02003596',
        '6QU' => 'E02003596',
        '6QW' => 'E02003596',
        '6QX' => 'E02003596',
        '6QY' => 'E02003596',
        '6QZ' => 'E02003596',
        '6RA' => 'E02003596',
        '6RB' => 'E02003596',
        '6RD' => 'E02003596',
        '6RE' => 'E02003596',
        '6RF' => 'E02003596',
        '6RG' => 'E02003596',
        '6RH' => 'E02003596',
        '6RJ' => 'E02003596',
        '6RL' => 'E02003596',
        '6RN' => 'E02003596',
        '6RP' => 'E02003596',
        '6RQ' => 'E02003596',
        '6RR' => 'E02003596',
        '6RS' => 'E02003596',
        '6RT' => 'E02003596',
        '6RU' => 'E02003596',
        '6RW' => 'E02003596',
        '6RX' => 'E02003596',
        '6RY' => 'E02003596',
        '6RZ' => 'E02003596',
        '6SA' => 'E02003596',
        '6SB' => 'E02003596',
        '6SD' => 'E02003596',
        '6SU' => 'E02003594',
        '6SX' => 'E02003594',
        '6WA' => 'E02003596',
        '6WJ' => 'E02003594',
        '6WZ' => 'E02003594',
        '6XJ' => 'E02003594',
        '6ZQ' => 'E02003594',
        '6ZW' => 'E02003594',
        '7AA' => 'E02003596',
        '7AB' => 'E02003596',
        '7AD' => 'E02003596',
        '7AE' => 'E02003596',
        '7AF' => 'E02003596',
        '7AG' => 'E02003596',
        '7AH' => 'E02003596',
        '7AJ' => 'E02003596',
        '7AL' => 'E02003596',
        '7AN' => 'E02003596',
        '7AP' => 'E02003596',
        '7AQ' => 'E02003596',
        '7AR' => 'E02003596',
        '7AS' => 'E02003596',
        '7AT' => 'E02003596',
        '7AU' => 'E02003596',
        '7AW' => 'E02003596',
        '7AX' => 'E02003596',
        '7AY' => 'E02003595',
        '7AZ' => 'E02003595',
        '7BA' => 'E02003596',
        '7BB' => 'E02003596',
        '7BD' => 'E02003596',
        '7BE' => 'E02003595',
        '7BF' => 'E02003596',
        '7BG' => 'E02003596',
        '7BH' => 'E02003596',
        '7BJ' => 'E02003596',
        '7BL' => 'E02003596',
        '7BN' => 'E02003596',
        '7BP' => 'E02003596',
        '7BQ' => 'E02003596',
        '7BS' => 'E02003595',
        '7BT' => 'E02003596',
        '7BU' => 'E02003596',
        '7BW' => 'E02003596',
        '7BX' => 'E02003596',
        '7BY' => 'E02003596',
        '7BZ' => 'E02003596',
        '7DA' => 'E02003596',
        '7DB' => 'E02003596',
        '7DD' => 'E02003596',
        '7DE' => 'E02003596',
        '7DF' => 'E02003596',
        '7DG' => 'E02003596',
        '7DH' => 'E02003595',
        '7DJ' => 'E02003595',
        '7DQ' => 'E02003595',
        '7DR' => 'E02003595',
        '7DS' => 'E02003595',
        '7DT' => 'E02003595',
        '7DU' => 'E02003595',
        '7DW' => 'E02003596',
        '7DX' => 'E02003595',
        '7DY' => 'E02003595',
        '7DZ' => 'E02003595',
        '7EA' => 'E02003595',
        '7EB' => 'E02003595',
        '7ED' => 'E02003595',
        '7EE' => 'E02003595',
        '7EF' => 'E02003595',
        '7EG' => 'E02003595',
        '7EH' => 'E02003595',
        '7EJ' => 'E02003595',
        '7EL' => 'E02003595',
        '7EN' => 'E02003595',
        '7EP' => 'E02003595',
        '7EQ' => 'E02003595',
        '7ER' => 'E02003595',
        '7ES' => 'E02003595',
        '7ET' => 'E02003596',
        '7EU' => 'E02003596',
        '7EW' => 'E02003595',
        '7EX' => 'E02003595',
        '7EY' => 'E02003595',
        '7EZ' => 'E02003596',
        '7HA' => 'E02003595',
        '7HB' => 'E02003595',
        '7HD' => 'E02003596',
        '7HE' => 'E02003596',
        '7HF' => 'E02003596',
        '7HH' => 'E02003596',
        '7HJ' => 'E02003595',
        '7HL' => 'E02003596',
        '7HP' => 'E02003596',
        '7HR' => 'E02003596',
        '7HS' => 'E02003596',
        '7HT' => 'E02003596',
        '7HU' => 'E02003595',
        '7HX' => 'E02003595',
        '7HY' => 'E02003595',
        '7HZ' => 'E02003595',
        '7JA' => 'E02003595',
        '7JB' => 'E02003595',
        '7JD' => 'E02003595',
        '7JE' => 'E02003595',
        '7JF' => 'E02003595',
        '7JG' => 'E02003595',
        '7JH' => 'E02003595',
        '7JJ' => 'E02003595',
        '7JL' => 'E02003595',
        '7JN' => 'E02003595',
        '7JP' => 'E02003594',
        '7JQ' => 'E02003595',
        '7JR' => 'E02003595',
        '7JS' => 'E02003596',
        '7JT' => 'E02003595',
        '7JU' => 'E02003596',
        '7JW' => 'E02003595',
        '7JX' => 'E02003596',
        '7JY' => 'E02003596',
        '7JZ' => 'E02003595',
        '7LA' => 'E02003596',
        '7LB' => 'E02003595',
        '7LD' => 'E02003595',
        '7LE' => 'E02003595',
        '7LF' => 'E02003595',
        '7LG' => 'E02003595',
        '7LH' => 'E02003595',
        '7LJ' => 'E02003595',
        '7LL' => 'E02003595',
        '7LN' => 'E02003596',
        '7LP' => 'E02003595',
        '7LQ' => 'E02003595',
        '7LR' => 'E02003596',
        '7LS' => 'E02003596',
        '7LT' => 'E02003596',
        '7LU' => 'E02003596',
        '7LW' => 'E02003595',
        '7LX' => 'E02003596',
        '7LY' => 'E02003596',
        '7LZ' => 'E02003596',
        '7NA' => 'E02003596',
        '7NB' => 'E02003596',
        '7ND' => 'E02003595',
        '7NE' => 'E02003596',
        '7NF' => 'E02003596',
        '7NG' => 'E02003595',
        '7NH' => 'E02003595',
        '7NJ' => 'E02003595',
        '7NL' => 'E02003595',
        '7NP' => 'E02003596',
        '7NQ' => 'E02003595',
        '7NR' => 'E02003596',
        '7NS' => 'E02003596',
        '7NT' => 'E02003596',
        '7NU' => 'E02003595',
        '7NW' => 'E02003595',
        '7NX' => 'E02003595',
        '7NY' => 'E02003595',
        '7NZ' => 'E02003595',
        '7PA' => 'E02003596',
        '7PB' => 'E02003595',
        '7PD' => 'E02003595',
        '7PH' => 'E02003595',
        '7PJ' => 'E02003595',
        '7PL' => 'E02003595',
        '7PN' => 'E02003595',
        '7PP' => 'E02003595',
        '7PR' => 'E02003595',
        '7PS' => 'E02003595',
        '7PT' => 'E02003595',
        '7PU' => 'E02003595',
        '7PW' => 'E02003595',
        '7PX' => 'E02003594',
        '7QA' => 'E02003595',
        '7QB' => 'E02003595',
        '7QD' => 'E02003594',
        '7QH' => 'E02003596',
        '7QJ' => 'E02003595',
        '7QU' => 'E02003595',
        '7QX' => 'E02003594',
        '7WA' => 'E02003594',
        '7WB' => 'E02003594',
        '7WD' => 'E02003594',
        '7WE' => 'E02003594',
        '7WY' => 'E02003594',
        '7WZ' => 'E02003594',
        '7YR' => 'E02003594',
        '7YS' => 'E02003595',
        '7YT' => 'E02003595',
        '7YU' => 'E02003595',
        '7YW' => 'E02003594',
        '7YX' => 'E02003595',
        '7ZJ' => 'E02003594',
        '7ZQ' => 'E02003594',
        '7ZR' => 'E02003594',
        '7ZU' => 'E02003594',
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
