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
final class MK19
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '6AA' => 'E02005688',
        '6AB' => 'E02005688',
        '6AD' => 'E02005688',
        '6AE' => 'E02005688',
        '6AF' => 'E02005688',
        '6AG' => 'E02005688',
        '6AH' => 'E02005688',
        '6AJ' => 'E02005688',
        '6AL' => 'E02005688',
        '6AN' => 'E02005688',
        '6AP' => 'E02005688',
        '6AQ' => 'E02005688',
        '6AR' => 'E02005688',
        '6AS' => 'E02005688',
        '6AT' => 'E02005688',
        '6AU' => 'E02005688',
        '6AW' => 'E02005688',
        '6AX' => 'E02005688',
        '6AY' => 'E02005688',
        '6AZ' => 'E02005688',
        '6BA' => 'E02005688',
        '6BB' => 'E02005688',
        '6BD' => 'E02005688',
        '6BE' => 'E02005688',
        '6BF' => 'E02005688',
        '6BG' => 'E02005688',
        '6BH' => 'E02005688',
        '6BJ' => 'E02005688',
        '6BL' => 'E02005688',
        '6BN' => 'E02005688',
        '6BP' => 'E02005688',
        '6BQ' => 'E02005688',
        '6BS' => 'E02005688',
        '6BT' => 'E02005688',
        '6BU' => 'E02005688',
        '6BW' => 'E02005688',
        '6BX' => 'E02005688',
        '6BY' => 'E02005688',
        '6BZ' => 'E02005688',
        '6DA' => 'E02005688',
        '6DB' => 'E02005688',
        '6DD' => 'E02005688',
        '6DE' => 'E02003652',
        '6DF' => 'E02005688',
        '6DG' => 'E02005688',
        '6DH' => 'E02005688',
        '6DJ' => 'E02005688',
        '6DL' => 'E02005688',
        '6DN' => 'E02005688',
        '6DP' => 'E02005688',
        '6DQ' => 'E02005688',
        '6DR' => 'E02005688',
        '6DS' => 'E02003652',
        '6DT' => 'E02003652',
        '6DU' => 'E02003652',
        '6DW' => 'E02005688',
        '6DX' => 'E02003652',
        '6DY' => 'E02003652',
        '6DZ' => 'E02003652',
        '6EA' => 'E02003652',
        '6EB' => 'E02003652',
        '6ED' => 'E02003477',
        '6EE' => 'E02003477',
        '6EF' => 'E02003477',
        '6EG' => 'E02003477',
        '6EH' => 'E02005688',
        '6EJ' => 'E02003477',
        '6EL' => 'E02003477',
        '6EN' => 'E02003477',
        '6EP' => 'E02003477',
        '6EQ' => 'E02003477',
        '6ER' => 'E02003477',
        '6ES' => 'E02005688',
        '6ET' => 'E02003477',
        '6EU' => 'E02003477',
        '6EW' => 'E02003477',
        '6EX' => 'E02005688',
        '6EY' => 'E02005688',
        '6EZ' => 'E02005688',
        '6FA' => 'E02005688',
        '6FB' => 'E02005688',
        '6FD' => 'E02005688',
        '6FE' => 'E02005688',
        '6FF' => 'E02005688',
        '6FG' => 'E02005688',
        '6FH' => 'E02005688',
        '6FJ' => 'E02005688',
        '6FL' => 'E02005688',
        '6FN' => 'E02005688',
        '6FP' => 'E02005688',
        '6FQ' => 'E02005688',
        '6FR' => 'E02005688',
        '6FS' => 'E02005688',
        '6FT' => 'E02005688',
        '6FW' => 'E02003652',
        '6GA' => 'E02005688',
        '6GB' => 'E02005688',
        '6GD' => 'E02005688',
        '6GE' => 'E02005688',
        '6GF' => 'E02005688',
        '6GG' => 'E02005688',
        '6GH' => 'E02005688',
        '6GL' => 'E02005688',
        '6GN' => 'E02005688',
        '6GP' => 'E02005688',
        '6GQ' => 'E02005688',
        '6GR' => 'E02005688',
        '6GU' => 'E02005688',
        '6GY' => 'E02005688',
        '6GZ' => 'E02005688',
        '6HA' => 'E02005688',
        '6HB' => 'E02005688',
        '6HD' => 'E02005688',
        '6HE' => 'E02005688',
        '6HF' => 'E02005688',
        '6HG' => 'E02005688',
        '6HH' => 'E02005688',
        '6HJ' => 'E02005688',
        '6HL' => 'E02005688',
        '6HN' => 'E02005688',
        '6HP' => 'E02005688',
        '6HQ' => 'E02005688',
        '6HR' => 'E02005688',
        '6HS' => 'E02005688',
        '6HT' => 'E02005688',
        '6HU' => 'E02005688',
        '6HW' => 'E02005688',
        '6HX' => 'E02005688',
        '6HY' => 'E02005688',
        '6HZ' => 'E02005688',
        '6JA' => 'E02005688',
        '6JB' => 'E02005688',
        '6JD' => 'E02005688',
        '6JE' => 'E02005688',
        '6JF' => 'E02005688',
        '6JG' => 'E02005688',
        '6JH' => 'E02005688',
        '6JJ' => 'E02005688',
        '6JL' => 'E02005688',
        '6JN' => 'E02005688',
        '6JP' => 'E02005688',
        '6JQ' => 'E02005688',
        '6JR' => 'E02005688',
        '6JS' => 'E02005688',
        '6JT' => 'E02005688',
        '6JU' => 'E02005688',
        '6JW' => 'E02005688',
        '6JX' => 'E02005688',
        '6JY' => 'E02005688',
        '6JZ' => 'E02005688',
        '6LA' => 'E02005688',
        '6LB' => 'E02005688',
        '6LD' => 'E02005688',
        '6LE' => 'E02005688',
        '6LF' => 'E02005688',
        '6LG' => 'E02005688',
        '6LH' => 'E02005688',
        '6LJ' => 'E02005688',
        '6LL' => 'E02005688',
        '6LN' => 'E02005688',
        '6LP' => 'E02005688',
        '6LQ' => 'E02005688',
        '6LR' => 'E02005688',
        '6LS' => 'E02005688',
        '6LT' => 'E02005688',
        '6LU' => 'E02005688',
        '6LW' => 'E02005688',
        '6LX' => 'E02005688',
        '6LY' => 'E02005688',
        '6LZ' => 'E02005688',
        '6NA' => 'E02005688',
        '6NB' => 'E02005688',
        '6ND' => 'E02005688',
        '6NE' => 'E02005688',
        '6NF' => 'E02005688',
        '6NG' => 'E02005688',
        '6NH' => 'E02005688',
        '6NJ' => 'E02005688',
        '6NL' => 'E02005688',
        '6NN' => 'E02005688',
        '6NQ' => 'E02005688',
        '6NR' => 'E02005688',
        '6NS' => 'E02003473',
        '6NT' => 'E02005688',
        '6NU' => 'E02003473',
        '6NW' => 'E02005688',
        '6NX' => 'E02005688',
        '6NY' => 'E02005688',
        '6NZ' => 'E02005688',
        '6QP' => 'E02005688',
        '6UW' => 'E02003473',
        '6UX' => 'E02005688',
        '6UY' => 'E02005688',
        '6UZ' => 'E02005688',
        '6WA' => 'E02005688',
        '6WB' => 'E02003473',
        '6WD' => 'E02003473',
        '6WE' => 'E02005688',
        '6WF' => 'E02003473',
        '6WG' => 'E02003473',
        '6WH' => 'E02003473',
        '6WJ' => 'E02003473',
        '6WL' => 'E02003473',
        '6WN' => 'E02003473',
        '6WP' => 'E02005688',
        '6WQ' => 'E02003473',
        '6WR' => 'E02003473',
        '6WS' => 'E02003473',
        '6WT' => 'E02003473',
        '6WU' => 'E02003473',
        '6WW' => 'E02003473',
        '6WX' => 'E02005688',
        '6WY' => 'E02003473',
        '6WZ' => 'E02003473',
        '6XA' => 'E02005688',
        '6XB' => 'E02003473',
        '6XD' => 'E02003473',
        '6XJ' => 'E02005688',
        '6XN' => 'E02005688',
        '6XP' => 'E02003473',
        '6XQ' => 'E02003473',
        '6XR' => 'E02005688',
        '6XS' => 'E02003473',
        '6XZ' => 'E02003473',
        '6YP' => 'E02003473',
        '6YQ' => 'E02003473',
        '6YR' => 'E02005688',
        '6YS' => 'E02005688',
        '6YT' => 'E02005688',
        '6YU' => 'E02005688',
        '6YX' => 'E02005688',
        '6YZ' => 'E02005688',
        '6ZE' => 'E02003473',
        '6ZG' => 'E02003473',
        '6ZH' => 'E02003473',
        '6ZJ' => 'E02003473',
        '6ZL' => 'E02005688',
        '6ZN' => 'E02003473',
        '6ZP' => 'E02005688',
        '6ZQ' => 'E02005688',
        '6ZR' => 'E02003473',
        '6ZS' => 'E02005688',
        '6ZT' => 'E02003473',
        '6ZW' => 'E02003473',
        '6ZX' => 'E02003473',
        '6ZZ' => 'E02005688',
        '7AA' => 'E02003460',
        '7AB' => 'E02003460',
        '7AD' => 'E02003460',
        '7AE' => 'E02003460',
        '7AF' => 'E02003460',
        '7AG' => 'E02003460',
        '7AH' => 'E02003460',
        '7AJ' => 'E02003460',
        '7AL' => 'E02003460',
        '7AN' => 'E02003460',
        '7AP' => 'E02003460',
        '7AQ' => 'E02003460',
        '7AR' => 'E02003460',
        '7AS' => 'E02003460',
        '7AU' => 'E02003460',
        '7AW' => 'E02003460',
        '7AX' => 'E02003460',
        '7AY' => 'E02003460',
        '7AZ' => 'E02003460',
        '7BA' => 'E02005688',
        '7BB' => 'E02005688',
        '7BD' => 'E02005688',
        '7BE' => 'E02005688',
        '7BF' => 'E02003460',
        '7BG' => 'E02003460',
        '7BH' => 'E02003460',
        '7BJ' => 'E02003460',
        '7BL' => 'E02003460',
        '7BN' => 'E02003460',
        '7BP' => 'E02003460',
        '7BQ' => 'E02003460',
        '7BR' => 'E02003460',
        '7BS' => 'E02003460',
        '7BT' => 'E02003460',
        '7BU' => 'E02003460',
        '7BW' => 'E02003460',
        '7BX' => 'E02003460',
        '7BY' => 'E02003460',
        '7BZ' => 'E02003460',
        '7DA' => 'E02003460',
        '7DB' => 'E02003460',
        '7DD' => 'E02003460',
        '7DE' => 'E02003460',
        '7DF' => 'E02005688',
        '7DG' => 'E02003460',
        '7DH' => 'E02003460',
        '7DJ' => 'E02003460',
        '7DL' => 'E02003460',
        '7DN' => 'E02003460',
        '7DP' => 'E02003460',
        '7DQ' => 'E02003460',
        '7DR' => 'E02003460',
        '7DS' => 'E02003460',
        '7DT' => 'E02003460',
        '7DU' => 'E02003460',
        '7DW' => 'E02003460',
        '7DX' => 'E02003460',
        '7DY' => 'E02003460',
        '7DZ' => 'E02003460',
        '7EA' => 'E02003460',
        '7EB' => 'E02003460',
        '7ED' => 'E02003460',
        '7EE' => 'E02003460',
        '7EF' => 'E02003460',
        '7EG' => 'E02003460',
        '7EH' => 'E02003460',
        '7EJ' => 'E02003460',
        '7EL' => 'E02003460',
        '7EN' => 'E02003460',
        '7EP' => 'E02003460',
        '7ER' => 'E02003460',
        '7ES' => 'E02003460',
        '7ET' => 'E02003460',
        '7EU' => 'E02003460',
        '7EW' => 'E02003460',
        '7EX' => 'E02003460',
        '7EY' => 'E02003460',
        '7EZ' => 'E02005688',
        '7FA' => 'E02005688',
        '7FE' => 'E02003460',
        '7FG' => 'E02003460',
        '7FH' => 'E02003460',
        '7FJ' => 'E02003460',
        '7FL' => 'E02003460',
        '7FN' => 'E02003460',
        '7FP' => 'E02003460',
        '7FQ' => 'E02003460',
        '7FR' => 'E02003460',
        '7FS' => 'E02003460',
        '7FT' => 'E02003460',
        '7HA' => 'E02003460',
        '7HD' => 'E02003460',
        '7HE' => 'E02003460',
        '7HF' => 'E02003460',
        '7HG' => 'E02003460',
        '7HH' => 'E02003460',
        '7HJ' => 'E02003460',
        '7HL' => 'E02003460',
        '7HN' => 'E02003460',
        '7HP' => 'E02003460',
        '7HQ' => 'E02003460',
        '7HR' => 'E02003460',
        '7HS' => 'E02003460',
        '7HT' => 'E02003460',
        '7HU' => 'E02003460',
        '7HW' => 'E02003460',
        '7HY' => 'E02003460',
        '7HZ' => 'E02003473',
        '7JA' => 'E02005688',
        '7JB' => 'E02005688',
        '7JD' => 'E02005688',
        '7JE' => 'E02005688',
        '7JF' => 'E02005688',
        '7JG' => 'E02005688',
        '7JH' => 'E02005688',
        '7JJ' => 'E02005688',
        '7JL' => 'E02005688',
        '7JN' => 'E02005688',
        '7JP' => 'E02005688',
        '7JQ' => 'E02005688',
        '7JR' => 'E02005688',
        '7JS' => 'E02003460',
        '7JT' => 'E02003460',
        '7JU' => 'E02005688',
        '7JW' => 'E02005688',
        '7LA' => 'E02003460',
        '7LB' => 'E02003460',
        '7LD' => 'E02003460',
        '7LE' => 'E02003460',
        '7LF' => 'E02003460',
        '7LG' => 'E02003460',
        '7LH' => 'E02003460',
        '7LJ' => 'E02003460',
        '7LL' => 'E02003460',
        '7LN' => 'E02003460',
        '7LP' => 'E02003460',
        '7LQ' => 'E02003460',
        '7LR' => 'E02003460',
        '7LS' => 'E02003460',
        '7LT' => 'E02003460',
        '7LU' => 'E02003460',
        '7LW' => 'E02003460',
        '7LX' => 'E02003460',
        '7LY' => 'E02003460',
        '7LZ' => 'E02003460',
        '7NA' => 'E02003460',
        '7NB' => 'E02003460',
        '7ND' => 'E02003460',
        '7NE' => 'E02003460',
        '7NF' => 'E02003460',
        '7NG' => 'E02003460',
        '7NH' => 'E02003460',
        '7NJ' => 'E02003460',
        '7NL' => 'E02003460',
        '7NN' => 'E02003460',
        '7NP' => 'E02003460',
        '7NQ' => 'E02003460',
        '7NR' => 'E02003460',
        '7NS' => 'E02003460',
        '7NT' => 'E02003460',
        '7NU' => 'E02003460',
        '7NW' => 'E02003460',
        '7NX' => 'E02003460',
        '7NY' => 'E02003460',
        '7NZ' => 'E02003460',
        '7PA' => 'E02003460',
        '7PB' => 'E02003460',
        '7PD' => 'E02003460',
        '7PE' => 'E02003460',
        '7PG' => 'E02003460',
        '7PJ' => 'E02003460',
        '7PL' => 'E02003460',
        '7PQ' => 'E02003460',
        '7QZ' => 'E02003473',
        '7RA' => 'E02003460',
        '7RB' => 'E02003460',
        '7RW' => 'E02003473',
        '7WA' => 'E02003473',
        '7WB' => 'E02003473',
        '7WD' => 'E02003460',
        '7WL' => 'E02003473',
        '7WN' => 'E02003460',
        '7WP' => 'E02003473',
        '7WQ' => 'E02003473',
        '7WR' => 'E02003473',
        '7WS' => 'E02003473',
        '7WT' => 'E02003460',
        '7WU' => 'E02003473',
        '7WW' => 'E02003473',
        '7WX' => 'E02003473',
        '7WY' => 'E02003473',
        '7WZ' => 'E02003473',
        '7XN' => 'E02003473',
        '7XQ' => 'E02003473',
        '7XZ' => 'E02003473',
        '7YN' => 'E02003473',
        '7YQ' => 'E02003473',
        '7YR' => 'E02003473',
        '7YU' => 'E02005688',
        '7YX' => 'E02003473',
        '7YY' => 'E02005688',
        '7YZ' => 'E02005688',
        '7ZB' => 'E02003473',
        '7ZD' => 'E02003473',
        '7ZE' => 'E02003473',
        '7ZF' => 'E02003460',
        '7ZG' => 'E02003460',
        '7ZH' => 'E02003473',
        '7ZJ' => 'E02003460',
        '7ZL' => 'E02003473',
        '7ZN' => 'E02003473',
        '7ZP' => 'E02003460',
        '7ZQ' => 'E02003460',
        '7ZR' => 'E02003460',
        '7ZS' => 'E02003473',
        '7ZT' => 'E02003460',
        '7ZU' => 'E02003460',
        '7ZW' => 'E02003460',
        '7ZX' => 'E02003460',
        '7ZZ' => 'E02003460',
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
