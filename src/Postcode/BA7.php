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
final class BA7
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '7AA' => 'E02006076',
        '7AB' => 'E02006076',
        '7AD' => 'E02006076',
        '7AE' => 'E02006076',
        '7AF' => 'E02006076',
        '7AG' => 'E02006076',
        '7AH' => 'E02006076',
        '7AJ' => 'E02006076',
        '7AL' => 'E02006076',
        '7AN' => 'E02006076',
        '7AP' => 'E02006076',
        '7AQ' => 'E02006076',
        '7AR' => 'E02006076',
        '7AS' => 'E02006076',
        '7AT' => 'E02006076',
        '7AU' => 'E02006076',
        '7AW' => 'E02006076',
        '7AX' => 'E02006076',
        '7AY' => 'E02006076',
        '7AZ' => 'E02006076',
        '7BA' => 'E02006076',
        '7BB' => 'E02006076',
        '7BD' => 'E02006076',
        '7BE' => 'E02006076',
        '7BF' => 'E02006076',
        '7BG' => 'E02006076',
        '7BH' => 'E02006076',
        '7BJ' => 'E02006076',
        '7BL' => 'E02006076',
        '7BN' => 'E02006076',
        '7BP' => 'E02006076',
        '7BQ' => 'E02006076',
        '7BR' => 'E02006076',
        '7BS' => 'E02006076',
        '7BT' => 'E02006076',
        '7BU' => 'E02006076',
        '7BW' => 'E02006076',
        '7BX' => 'E02006076',
        '7BY' => 'E02006076',
        '7BZ' => 'E02006076',
        '7DA' => 'E02006076',
        '7DB' => 'E02006076',
        '7DD' => 'E02006076',
        '7DE' => 'E02006076',
        '7DF' => 'E02006076',
        '7DG' => 'E02006076',
        '7DH' => 'E02006076',
        '7DJ' => 'E02006076',
        '7DL' => 'E02006076',
        '7DN' => 'E02006076',
        '7DP' => 'E02006076',
        '7DQ' => 'E02006076',
        '7DR' => 'E02006076',
        '7DS' => 'E02006076',
        '7DT' => 'E02006076',
        '7DU' => 'E02006076',
        '7DW' => 'E02006076',
        '7DX' => 'E02006076',
        '7DY' => 'E02006076',
        '7DZ' => 'E02006076',
        '7EA' => 'E02006076',
        '7EB' => 'E02006076',
        '7ED' => 'E02006076',
        '7EE' => 'E02006076',
        '7EF' => 'E02006076',
        '7EG' => 'E02006076',
        '7EH' => 'E02006076',
        '7EJ' => 'E02006076',
        '7EL' => 'E02006076',
        '7EN' => 'E02006076',
        '7EP' => 'E02006076',
        '7EQ' => 'E02006076',
        '7ER' => 'E02006076',
        '7ES' => 'E02006076',
        '7ET' => 'E02006076',
        '7EU' => 'E02006076',
        '7EW' => 'E02006076',
        '7EX' => 'E02006076',
        '7EY' => 'E02006076',
        '7EZ' => 'E02006076',
        '7FB' => 'E02006076',
        '7FD' => 'E02006076',
        '7FE' => 'E02006076',
        '7FF' => 'E02006076',
        '7FG' => 'E02006076',
        '7FH' => 'E02006076',
        '7FL' => 'E02006076',
        '7FN' => 'E02006076',
        '7FP' => 'E02006076',
        '7FQ' => 'E02006076',
        '7FR' => 'E02006076',
        '7FS' => 'E02006059',
        '7FW' => 'E02006076',
        '7FX' => 'E02006076',
        '7GB' => 'E02006076',
        '7HA' => 'E02006076',
        '7HB' => 'E02006076',
        '7HD' => 'E02006076',
        '7HE' => 'E02006076',
        '7HF' => 'E02006076',
        '7HG' => 'E02006076',
        '7HH' => 'E02006076',
        '7HJ' => 'E02006076',
        '7HL' => 'E02006076',
        '7HN' => 'E02006076',
        '7HP' => 'E02006076',
        '7HQ' => 'E02006076',
        '7HR' => 'E02006076',
        '7HS' => 'E02006076',
        '7HT' => 'E02006076',
        '7HU' => 'E02006076',
        '7HW' => 'E02006076',
        '7HX' => 'E02006076',
        '7HY' => 'E02006076',
        '7HZ' => 'E02006076',
        '7JA' => 'E02006076',
        '7JB' => 'E02006076',
        '7JD' => 'E02006076',
        '7JE' => 'E02006076',
        '7JF' => 'E02006076',
        '7JG' => 'E02006076',
        '7JH' => 'E02006076',
        '7JJ' => 'E02006076',
        '7JL' => 'E02006076',
        '7JN' => 'E02006076',
        '7JP' => 'E02006076',
        '7JQ' => 'E02006076',
        '7JR' => 'E02006076',
        '7JS' => 'E02006076',
        '7JT' => 'E02006076',
        '7JU' => 'E02006076',
        '7JW' => 'E02006076',
        '7JX' => 'E02006076',
        '7JY' => 'E02006076',
        '7JZ' => 'E02006076',
        '7LA' => 'E02006076',
        '7LB' => 'E02006076',
        '7LD' => 'E02006076',
        '7LE' => 'E02006076',
        '7LF' => 'E02006076',
        '7LG' => 'E02006076',
        '7LH' => 'E02006076',
        '7LJ' => 'E02006076',
        '7LL' => 'E02006076',
        '7LN' => 'E02006075',
        '7LP' => 'E02006075',
        '7LQ' => 'E02006076',
        '7LR' => 'E02006075',
        '7LS' => 'E02006076',
        '7LT' => 'E02006076',
        '7LU' => 'E02006076',
        '7LW' => 'E02006075',
        '7LX' => 'E02006075',
        '7LY' => 'E02006075',
        '7LZ' => 'E02006075',
        '7NA' => 'E02006075',
        '7NB' => 'E02006075',
        '7ND' => 'E02006076',
        '7NE' => 'E02006075',
        '7NF' => 'E02006075',
        '7NG' => 'E02006075',
        '7NH' => 'E02006075',
        '7NJ' => 'E02006075',
        '7NL' => 'E02006076',
        '7NN' => 'E02006075',
        '7NP' => 'E02006076',
        '7NQ' => 'E02006075',
        '7NR' => 'E02006076',
        '7NS' => 'E02006076',
        '7NT' => 'E02006076',
        '7NU' => 'E02006076',
        '7NW' => 'E02006076',
        '7NX' => 'E02006075',
        '7NY' => 'E02006076',
        '7NZ' => 'E02006076',
        '7PA' => 'E02006076',
        '7PB' => 'E02006076',
        '7PD' => 'E02006076',
        '7PE' => 'E02006076',
        '7PF' => 'E02006059',
        '7PG' => 'E02006076',
        '7PH' => 'E02006076',
        '7PJ' => 'E02006076',
        '7PL' => 'E02006059',
        '7PN' => 'E02006076',
        '7PP' => 'E02006076',
        '7PQ' => 'E02006076',
        '7PR' => 'E02006076',
        '7PS' => 'E02006076',
        '7PT' => 'E02006076',
        '7PU' => 'E02006076',
        '7PW' => 'E02006076',
        '7PX' => 'E02006076',
        '7PY' => 'E02006076',
        '7PZ' => 'E02006076',
        '7QA' => 'E02006076',
        '7WA' => 'E02006076',
        '7WB' => 'E02006076',
        '7WD' => 'E02006076',
        '7WE' => 'E02006076',
        '7WF' => 'E02006076',
        '7WG' => 'E02006076',
        '7WT' => 'E02006076',
        '7WU' => 'E02006076',
        '7WW' => 'E02006076',
        '7WX' => 'E02006076',
        '7WY' => 'E02006076',
        '7WZ' => 'E02006076',
        '7XN' => 'E02006076',
        '7XQ' => 'E02006076',
        '7YB' => 'E02006076',
        '7YD' => 'E02006076',
        '7YE' => 'E02006076',
        '7YF' => 'E02006076',
        '7YG' => 'E02006076',
        '7YH' => 'E02006076',
        '7YJ' => 'E02006076',
        '7YL' => 'E02006076',
        '7YN' => 'E02006076',
        '7YP' => 'E02006076',
        '7YQ' => 'E02006076',
        '7YR' => 'E02006076',
        '7YS' => 'E02006076',
        '7YT' => 'E02006076',
        '7YU' => 'E02006076',
        '7YW' => 'E02006076',
        '7YZ' => 'E02006076',
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