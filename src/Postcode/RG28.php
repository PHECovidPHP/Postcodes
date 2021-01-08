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
final class RG28
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '7AA' => 'E02004694',
        '7AB' => 'E02004694',
        '7AD' => 'E02004694',
        '7AE' => 'E02004694',
        '7AF' => 'E02004694',
        '7AG' => 'E02004694',
        '7AH' => 'E02004694',
        '7AJ' => 'E02004694',
        '7AL' => 'E02004694',
        '7AN' => 'E02004694',
        '7AP' => 'E02004694',
        '7AQ' => 'E02004694',
        '7AR' => 'E02004694',
        '7AS' => 'E02004694',
        '7AT' => 'E02004694',
        '7AU' => 'E02004694',
        '7AW' => 'E02004694',
        '7AX' => 'E02004694',
        '7AY' => 'E02004694',
        '7AZ' => 'E02004694',
        '7BA' => 'E02004694',
        '7BB' => 'E02004694',
        '7BD' => 'E02004694',
        '7BE' => 'E02004694',
        '7BF' => 'E02004694',
        '7BG' => 'E02004694',
        '7BH' => 'E02004694',
        '7BJ' => 'E02004694',
        '7BL' => 'E02004694',
        '7BN' => 'E02004694',
        '7BP' => 'E02004694',
        '7BQ' => 'E02004694',
        '7BS' => 'E02004694',
        '7BT' => 'E02004694',
        '7BU' => 'E02004694',
        '7BW' => 'E02004694',
        '7BX' => 'E02004694',
        '7BY' => 'E02004694',
        '7BZ' => 'E02004694',
        '7DA' => 'E02004694',
        '7DB' => 'E02004694',
        '7DD' => 'E02004694',
        '7DE' => 'E02004694',
        '7DF' => 'E02004694',
        '7DG' => 'E02004694',
        '7DH' => 'E02004694',
        '7DJ' => 'E02004694',
        '7DL' => 'E02004694',
        '7DN' => 'E02004694',
        '7DP' => 'E02004694',
        '7DQ' => 'E02004694',
        '7DR' => 'E02004694',
        '7DS' => 'E02004694',
        '7DT' => 'E02004694',
        '7DU' => 'E02004694',
        '7DW' => 'E02004694',
        '7DX' => 'E02004694',
        '7DY' => 'E02004694',
        '7DZ' => 'E02004694',
        '7EA' => 'E02004694',
        '7EB' => 'E02004694',
        '7ED' => 'E02004694',
        '7EE' => 'E02004694',
        '7EF' => 'E02004694',
        '7EG' => 'E02004694',
        '7EH' => 'E02004694',
        '7EJ' => 'E02004694',
        '7EL' => 'E02004694',
        '7EN' => 'E02004694',
        '7EP' => 'E02004694',
        '7EQ' => 'E02004694',
        '7ER' => 'E02004694',
        '7ES' => 'E02004694',
        '7ET' => 'E02004694',
        '7EU' => 'E02004694',
        '7EW' => 'E02004694',
        '7EX' => 'E02004694',
        '7EY' => 'E02004694',
        '7EZ' => 'E02004694',
        '7FA' => 'E02004696',
        '7FB' => 'E02004694',
        '7FD' => 'E02004694',
        '7FE' => 'E02004694',
        '7FF' => 'E02004694',
        '7FG' => 'E02004694',
        '7FH' => 'E02004694',
        '7FJ' => 'E02004694',
        '7FL' => 'E02004694',
        '7FN' => 'E02004694',
        '7FP' => 'E02004694',
        '7FQ' => 'E02004694',
        '7FR' => 'E02004694',
        '7FS' => 'E02004694',
        '7FT' => 'E02004694',
        '7FU' => 'E02004694',
        '7FW' => 'E02004694',
        '7FX' => 'E02004694',
        '7HA' => 'E02004694',
        '7HB' => 'E02004694',
        '7HD' => 'E02004694',
        '7HE' => 'E02004694',
        '7HF' => 'E02004694',
        '7HH' => 'E02004694',
        '7HL' => 'E02004694',
        '7HN' => 'E02004694',
        '7HP' => 'E02004694',
        '7HQ' => 'E02004694',
        '7HR' => 'E02004694',
        '7HS' => 'E02004694',
        '7HT' => 'E02004694',
        '7HU' => 'E02004694',
        '7HW' => 'E02004694',
        '7HY' => 'E02004694',
        '7HZ' => 'E02004694',
        '7JA' => 'E02004694',
        '7JB' => 'E02004694',
        '7JD' => 'E02004694',
        '7JE' => 'E02004694',
        '7JF' => 'E02004694',
        '7JG' => 'E02004694',
        '7JH' => 'E02004694',
        '7JJ' => 'E02004694',
        '7JL' => 'E02004694',
        '7JN' => 'E02004694',
        '7JP' => 'E02004694',
        '7JQ' => 'E02004694',
        '7JR' => 'E02004694',
        '7JS' => 'E02004694',
        '7JT' => 'E02004694',
        '7JU' => 'E02004694',
        '7JW' => 'E02004694',
        '7JX' => 'E02004694',
        '7JY' => 'E02004694',
        '7JZ' => 'E02004694',
        '7LA' => 'E02004694',
        '7LB' => 'E02004694',
        '7LD' => 'E02004694',
        '7LE' => 'E02004694',
        '7LF' => 'E02004694',
        '7LG' => 'E02004694',
        '7LH' => 'E02004694',
        '7LJ' => 'E02004694',
        '7LL' => 'E02004694',
        '7LN' => 'E02004694',
        '7LP' => 'E02004694',
        '7LQ' => 'E02004694',
        '7LR' => 'E02004694',
        '7LS' => 'E02004694',
        '7LT' => 'E02004694',
        '7LU' => 'E02004694',
        '7LW' => 'E02004694',
        '7LX' => 'E02004694',
        '7LY' => 'E02004694',
        '7LZ' => 'E02004694',
        '7NA' => 'E02004694',
        '7NB' => 'E02004694',
        '7ND' => 'E02004694',
        '7NE' => 'E02004696',
        '7NF' => 'E02004694',
        '7NG' => 'E02004694',
        '7NH' => 'E02004694',
        '7NJ' => 'E02004696',
        '7NL' => 'E02004696',
        '7NN' => 'E02004696',
        '7NP' => 'E02004696',
        '7NQ' => 'E02004694',
        '7NR' => 'E02004696',
        '7NS' => 'E02004696',
        '7NT' => 'E02004696',
        '7NU' => 'E02004696',
        '7NW' => 'E02004696',
        '7NX' => 'E02004696',
        '7NY' => 'E02004696',
        '7NZ' => 'E02004696',
        '7PA' => 'E02004696',
        '7PB' => 'E02004696',
        '7PD' => 'E02004696',
        '7PE' => 'E02004696',
        '7PF' => 'E02004696',
        '7PG' => 'E02004696',
        '7PH' => 'E02004696',
        '7PJ' => 'E02004677',
        '7PL' => 'E02004694',
        '7PN' => 'E02004694',
        '7PP' => 'E02004677',
        '7PQ' => 'E02004696',
        '7PR' => 'E02004677',
        '7PS' => 'E02004677',
        '7PT' => 'E02004677',
        '7PU' => 'E02004677',
        '7PW' => 'E02004694',
        '7PX' => 'E02004694',
        '7PY' => 'E02004677',
        '7PZ' => 'E02004694',
        '7QA' => 'E02004677',
        '7QB' => 'E02004694',
        '7QD' => 'E02004694',
        '7QE' => 'E02004677',
        '7QF' => 'E02004677',
        '7QH' => 'E02004677',
        '7QJ' => 'E02004694',
        '7QL' => 'E02004694',
        '7QP' => 'E02004694',
        '7QR' => 'E02004694',
        '7QS' => 'E02004694',
        '7QT' => 'E02004694',
        '7QU' => 'E02004696',
        '7QW' => 'E02004694',
        '7RA' => 'E02004694',
        '7RB' => 'E02004694',
        '7RD' => 'E02004694',
        '7RE' => 'E02004821',
        '7RF' => 'E02004694',
        '7RG' => 'E02004694',
        '7RH' => 'E02004694',
        '7RJ' => 'E02004694',
        '7RL' => 'E02004694',
        '7RN' => 'E02004694',
        '7RP' => 'E02004694',
        '7RQ' => 'E02004694',
        '7RR' => 'E02004694',
        '7RS' => 'E02004694',
        '7RT' => 'E02004694',
        '7RU' => 'E02004694',
        '7RW' => 'E02004694',
        '7RX' => 'E02004694',
        '7SA' => 'E02004694',
        '7SB' => 'E02004694',
        '7SD' => 'E02004694',
        '7SE' => 'E02004694',
        '7SF' => 'E02004694',
        '7SH' => 'E02004694',
        '7SJ' => 'E02004694',
        '7SN' => 'E02004694',
        '7SR' => 'E02004694',
        '7ST' => 'E02004694',
        '7SU' => 'E02004694',
        '7SX' => 'E02004694',
        '7SY' => 'E02004694',
        '7SZ' => 'E02004694',
        '7TA' => 'E02004696',
        '7TU' => 'E02004694',
        '7WB' => 'E02004694',
        '7WD' => 'E02004694',
        '7WE' => 'E02004694',
        '7YF' => 'E02004694',
        '7YG' => 'E02004694',
        '7YH' => 'E02004694',
        '7YJ' => 'E02004694',
        '7YL' => 'E02004694',
        '7YN' => 'E02004694',
        '7YP' => 'E02004756',
        '7YQ' => 'E02004694',
        '7YR' => 'E02004694',
        '7YS' => 'E02004694',
        '7YT' => 'E02004694',
        '7YU' => 'E02004756',
        '7YW' => 'E02004694',
        '7YX' => 'E02004694',
        '7YY' => 'E02004694',
        '7YZ' => 'E02004694',
        '7ZJ' => 'E02004681',
        '7ZQ' => 'E02004681',
        '7ZS' => 'E02004694',
        '7ZX' => 'E02004694',
        '8HZ' => 'E02004694',
        '9AA' => 'E02004694',
        '9AB' => 'E02004694',
        '9AD' => 'E02004694',
        '9AE' => 'E02004694',
        '9AF' => 'E02004694',
        '9AG' => 'E02004694',
        '9AH' => 'E02004694',
        '9AJ' => 'E02004694',
        '9AL' => 'E02004694',
        '9AN' => 'E02004694',
        '9AP' => 'E02004694',
        '9AQ' => 'E02004681',
        '9AR' => 'E02004681',
        '9AS' => 'E02004681',
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