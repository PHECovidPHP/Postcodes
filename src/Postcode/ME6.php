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
final class ME6
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '5AA' => 'E02005150',
        '5AB' => 'E02005150',
        '5AD' => 'E02005150',
        '5AE' => 'E02005150',
        '5AF' => 'E02005150',
        '5AG' => 'E02005150',
        '5AH' => 'E02005150',
        '5AJ' => 'E02005150',
        '5AL' => 'E02005150',
        '5AN' => 'E02005150',
        '5AP' => 'E02005150',
        '5AQ' => 'E02005150',
        '5AR' => 'E02005150',
        '5AS' => 'E02005150',
        '5AT' => 'E02005150',
        '5AU' => 'E02005150',
        '5AW' => 'E02005150',
        '5AX' => 'E02005150',
        '5AY' => 'E02005150',
        '5AZ' => 'E02005150',
        '5BA' => 'E02005150',
        '5BB' => 'E02005150',
        '5BD' => 'E02005150',
        '5BE' => 'E02005150',
        '5BF' => 'E02005150',
        '5BG' => 'E02005150',
        '5BH' => 'E02005150',
        '5BJ' => 'E02005150',
        '5BL' => 'E02005150',
        '5BN' => 'E02005150',
        '5BP' => 'E02005150',
        '5BQ' => 'E02005150',
        '5BS' => 'E02005150',
        '5BT' => 'E02005150',
        '5BU' => 'E02005150',
        '5BW' => 'E02005150',
        '5BX' => 'E02005150',
        '5BY' => 'E02005150',
        '5BZ' => 'E02005150',
        '5DA' => 'E02005150',
        '5DB' => 'E02005150',
        '5DD' => 'E02005150',
        '5DE' => 'E02005150',
        '5DF' => 'E02005150',
        '5DG' => 'E02005150',
        '5DH' => 'E02005150',
        '5DJ' => 'E02005150',
        '5DL' => 'E02005150',
        '5DN' => 'E02005150',
        '5DP' => 'E02005150',
        '5DQ' => 'E02005150',
        '5DR' => 'E02005150',
        '5DS' => 'E02005150',
        '5DT' => 'E02005150',
        '5DU' => 'E02005150',
        '5DW' => 'E02005150',
        '5DX' => 'E02005150',
        '5DY' => 'E02005150',
        '5DZ' => 'E02005150',
        '5EA' => 'E02005150',
        '5EB' => 'E02005150',
        '5ED' => 'E02005150',
        '5EE' => 'E02005150',
        '5EF' => 'E02005150',
        '5EG' => 'E02005150',
        '5EH' => 'E02005150',
        '5EJ' => 'E02005150',
        '5EL' => 'E02005150',
        '5EN' => 'E02005150',
        '5EP' => 'E02005150',
        '5EQ' => 'E02005150',
        '5ER' => 'E02005150',
        '5ES' => 'E02005150',
        '5ET' => 'E02005150',
        '5EU' => 'E02005150',
        '5EW' => 'E02005150',
        '5EX' => 'E02005150',
        '5EY' => 'E02005150',
        '5EZ' => 'E02005150',
        '5FA' => 'E02005150',
        '5FB' => 'E02005150',
        '5FD' => 'E02005150',
        '5FE' => 'E02005150',
        '5FF' => 'E02005150',
        '5FG' => 'E02005150',
        '5FH' => 'E02005150',
        '5FJ' => 'E02005150',
        '5FL' => 'E02005150',
        '5FN' => 'E02005150',
        '5FP' => 'E02005150',
        '5FQ' => 'E02005150',
        '5FR' => 'E02005150',
        '5FS' => 'E02005150',
        '5FT' => 'E02005150',
        '5FU' => 'E02005150',
        '5FW' => 'E02005150',
        '5FX' => 'E02005150',
        '5FY' => 'E02005150',
        '5FZ' => 'E02005150',
        '5GA' => 'E02005150',
        '5GB' => 'E02005150',
        '5GD' => 'E02005150',
        '5GE' => 'E02005150',
        '5GF' => 'E02005150',
        '5GJ' => 'E02005150',
        '5GL' => 'E02005150',
        '5GN' => 'E02005150',
        '5GP' => 'E02005150',
        '5GQ' => 'E02005150',
        '5GR' => 'E02005150',
        '5GS' => 'E02005150',
        '5GW' => 'E02005150',
        '5GX' => 'E02005150',
        '5GZ' => 'E02005150',
        '5HA' => 'E02005150',
        '5HB' => 'E02005150',
        '5HD' => 'E02005150',
        '5HE' => 'E02005150',
        '5HF' => 'E02005150',
        '5HG' => 'E02005150',
        '5HH' => 'E02005150',
        '5HJ' => 'E02005150',
        '5HL' => 'E02005150',
        '5HN' => 'E02005150',
        '5HP' => 'E02005150',
        '5HQ' => 'E02005150',
        '5HR' => 'E02005150',
        '5HS' => 'E02005150',
        '5HT' => 'E02005150',
        '5HU' => 'E02005150',
        '5HW' => 'E02005150',
        '5HX' => 'E02005150',
        '5HY' => 'E02005150',
        '5HZ' => 'E02005150',
        '5JA' => 'E02005150',
        '5JB' => 'E02005150',
        '5JD' => 'E02005150',
        '5JE' => 'E02005150',
        '5JF' => 'E02005150',
        '5JG' => 'E02005150',
        '5JH' => 'E02005150',
        '5JJ' => 'E02005150',
        '5JL' => 'E02005150',
        '5JN' => 'E02005150',
        '5JP' => 'E02005150',
        '5JQ' => 'E02005150',
        '5JR' => 'E02005150',
        '5JS' => 'E02005150',
        '5JT' => 'E02005150',
        '5JU' => 'E02005150',
        '5JW' => 'E02005150',
        '5JX' => 'E02005150',
        '5JY' => 'E02005150',
        '5JZ' => 'E02005150',
        '5LA' => 'E02005150',
        '5LB' => 'E02005150',
        '5LD' => 'E02005150',
        '5LE' => 'E02005150',
        '5LF' => 'E02005150',
        '5LG' => 'E02006833',
        '5LH' => 'E02006833',
        '5LJ' => 'E02006833',
        '5LL' => 'E02005150',
        '5LN' => 'E02005150',
        '5LP' => 'E02005150',
        '5LQ' => 'E02005150',
        '5LR' => 'E02005150',
        '5LS' => 'E02005150',
        '5LT' => 'E02005150',
        '5LU' => 'E02005150',
        '5LW' => 'E02005150',
        '5LX' => 'E02005150',
        '5LY' => 'E02005150',
        '5LZ' => 'E02005150',
        '5NA' => 'E02005150',
        '5NB' => 'E02005150',
        '5ND' => 'E02005150',
        '5NE' => 'E02005150',
        '5NF' => 'E02005150',
        '5NG' => 'E02005150',
        '5NH' => 'E02005150',
        '5NJ' => 'E02005150',
        '5NL' => 'E02005150',
        '5NN' => 'E02005150',
        '5NP' => 'E02005150',
        '5NQ' => 'E02005150',
        '5NR' => 'E02005150',
        '5NS' => 'E02005150',
        '5NT' => 'E02005150',
        '5NU' => 'E02005150',
        '5NW' => 'E02005150',
        '5NX' => 'E02005150',
        '5NY' => 'E02005150',
        '5NZ' => 'E02005150',
        '5PA' => 'E02005150',
        '5PB' => 'E02005150',
        '5PD' => 'E02005150',
        '5PE' => 'E02005150',
        '5PF' => 'E02005150',
        '5PG' => 'E02005150',
        '5PH' => 'E02005150',
        '5PJ' => 'E02005150',
        '5PL' => 'E02005150',
        '5PN' => 'E02005150',
        '5PP' => 'E02005150',
        '5PQ' => 'E02005150',
        '5PR' => 'E02005150',
        '5PS' => 'E02005150',
        '5PT' => 'E02005150',
        '5PU' => 'E02005150',
        '5PW' => 'E02005150',
        '5PX' => 'E02005150',
        '5PY' => 'E02005150',
        '5PZ' => 'E02005150',
        '5QA' => 'E02005150',
        '5QB' => 'E02005150',
        '5QD' => 'E02005150',
        '5QE' => 'E02005150',
        '5QF' => 'E02005150',
        '5QG' => 'E02005150',
        '5QH' => 'E02005150',
        '5QJ' => 'E02005150',
        '5QL' => 'E02005150',
        '5QN' => 'E02005150',
        '5QP' => 'E02005150',
        '5QQ' => 'E02005150',
        '5QR' => 'E02005150',
        '5QS' => 'E02005150',
        '5QT' => 'E02005150',
        '5QU' => 'E02005150',
        '5QW' => 'E02005150',
        '5QX' => 'E02005150',
        '5QY' => 'E02005150',
        '5RA' => 'E02005150',
        '5RB' => 'E02005150',
        '5RD' => 'E02005150',
        '5RE' => 'E02005150',
        '5RF' => 'E02005150',
        '5RG' => 'E02005150',
        '5RH' => 'E02005150',
        '5RJ' => 'E02005150',
        '5RL' => 'E02005150',
        '5RN' => 'E02005150',
        '5RP' => 'E02005150',
        '5RQ' => 'E02005150',
        '5RR' => 'E02005150',
        '5RS' => 'E02005150',
        '5RT' => 'E02005150',
        '5RU' => 'E02005150',
        '5RW' => 'E02005150',
        '5RX' => 'E02005150',
        '5RY' => 'E02005150',
        '5RZ' => 'E02005150',
        '5SA' => 'E02005150',
        '5SB' => 'E02005150',
        '5SD' => 'E02005150',
        '5SE' => 'E02005150',
        '5SF' => 'E02005150',
        '5SG' => 'E02005150',
        '5SH' => 'E02005150',
        '5SJ' => 'E02005150',
        '5SL' => 'E02005150',
        '5SN' => 'E02005150',
        '5SP' => 'E02005150',
        '5SQ' => 'E02005150',
        '5SR' => 'E02005150',
        '5SS' => 'E02005150',
        '5ST' => 'E02005150',
        '5SU' => 'E02005150',
        '5SW' => 'E02005150',
        '5SX' => 'E02005150',
        '5SY' => 'E02005150',
        '5TA' => 'E02005150',
        '5TB' => 'E02005150',
        '5TD' => 'E02005150',
        '5TE' => 'E02005150',
        '5TF' => 'E02005150',
        '5TG' => 'E02005150',
        '5TH' => 'E02005150',
        '5TL' => 'E02005150',
        '5TN' => 'E02005150',
        '5TQ' => 'E02005150',
        '5TR' => 'E02005150',
        '5TU' => 'E02005150',
        '5TW' => 'E02005150',
        '5UA' => 'E02005150',
        '5UD' => 'E02005150',
        '5WA' => 'E02005150',
        '5WB' => 'E02005150',
        '5WD' => 'E02005150',
        '5WE' => 'E02005150',
        '5WF' => 'E02005150',
        '5WG' => 'E02005150',
        '5WH' => 'E02005150',
        '5WL' => 'E02005150',
        '5WQ' => 'E02005150',
        '5WT' => 'E02005150',
        '5WY' => 'E02005150',
        '5WZ' => 'E02005150',
        '5YP' => 'E02005150',
        '5YZ' => 'E02005150',
        '9AA' => 'E02005150',
        '9AB' => 'E02005150',
        '9AD' => 'E02005150',
        '9AE' => 'E02005150',
        '9AF' => 'E02005150',
        '9AG' => 'E02005150',
        '9AH' => 'E02005150',
        '9AJ' => 'E02005150',
        '9AL' => 'E02005150',
        '9AN' => 'E02005150',
        '9AP' => 'E02005150',
        '9AQ' => 'E02005150',
        '9AR' => 'E02005150',
        '9AS' => 'E02005150',
        '9AT' => 'E02005150',
        '9AU' => 'E02005150',
        '9AW' => 'E02005150',
        '9AX' => 'E02005150',
        '9AY' => 'E02005150',
        '9AZ' => 'E02005150',
        '9BA' => 'E02005150',
        '9BB' => 'E02005150',
        '9BD' => 'E02005150',
        '9BE' => 'E02005150',
        '9BF' => 'E02005150',
        '9BG' => 'E02005150',
        '9BH' => 'E02005150',
        '9BJ' => 'E02005150',
        '9BL' => 'E02005150',
        '9BN' => 'E02005150',
        '9BP' => 'E02005150',
        '9BQ' => 'E02005150',
        '9BR' => 'E02005150',
        '9BS' => 'E02005150',
        '9BT' => 'E02005150',
        '9BU' => 'E02005150',
        '9BW' => 'E02005150',
        '9BX' => 'E02005150',
        '9BY' => 'E02005150',
        '9BZ' => 'E02005150',
        '9DA' => 'E02005150',
        '9DB' => 'E02005150',
        '9DD' => 'E02005150',
        '9DE' => 'E02005150',
        '9DF' => 'E02005150',
        '9DG' => 'E02005150',
        '9DH' => 'E02005150',
        '9DJ' => 'E02005150',
        '9DL' => 'E02005150',
        '9DN' => 'E02005150',
        '9DP' => 'E02005150',
        '9DQ' => 'E02005150',
        '9DR' => 'E02005150',
        '9DS' => 'E02005150',
        '9DT' => 'E02005150',
        '9DU' => 'E02005150',
        '9DW' => 'E02005150',
        '9DX' => 'E02005150',
        '9DY' => 'E02005150',
        '9DZ' => 'E02005150',
        '9EA' => 'E02005150',
        '9EB' => 'E02005150',
        '9ED' => 'E02005150',
        '9EE' => 'E02005150',
        '9EF' => 'E02005150',
        '9EG' => 'E02005150',
        '9EH' => 'E02005150',
        '9EJ' => 'E02005150',
        '9EL' => 'E02005150',
        '9EN' => 'E02005150',
        '9EP' => 'E02005150',
        '9EQ' => 'E02005150',
        '9ER' => 'E02005150',
        '9ES' => 'E02005150',
        '9ET' => 'E02005150',
        '9EU' => 'E02005150',
        '9EW' => 'E02005150',
        '9EX' => 'E02005150',
        '9EY' => 'E02005150',
        '9EZ' => 'E02005150',
        '9FA' => 'E02005150',
        '9FB' => 'E02005150',
        '9FD' => 'E02005150',
        '9FE' => 'E02005150',
        '9FF' => 'E02005150',
        '9FG' => 'E02005150',
        '9FH' => 'E02005150',
        '9FJ' => 'E02005150',
        '9FL' => 'E02005150',
        '9FN' => 'E02005150',
        '9FP' => 'E02005150',
        '9FQ' => 'E02005150',
        '9FR' => 'E02005150',
        '9FS' => 'E02005150',
        '9FT' => 'E02005150',
        '9FU' => 'E02005150',
        '9FW' => 'E02005150',
        '9FX' => 'E02005150',
        '9FY' => 'E02005150',
        '9FZ' => 'E02005150',
        '9GA' => 'E02005150',
        '9GB' => 'E02005150',
        '9GD' => 'E02005150',
        '9GE' => 'E02005150',
        '9GF' => 'E02005150',
        '9GG' => 'E02005150',
        '9GH' => 'E02005150',
        '9GJ' => 'E02005150',
        '9GL' => 'E02005150',
        '9GN' => 'E02005150',
        '9GP' => 'E02005150',
        '9GQ' => 'E02005150',
        '9GR' => 'E02005150',
        '9GS' => 'E02005150',
        '9GT' => 'E02005150',
        '9GU' => 'E02005150',
        '9GW' => 'E02005150',
        '9GX' => 'E02005150',
        '9GY' => 'E02005150',
        '9GZ' => 'E02005150',
        '9HA' => 'E02005150',
        '9HB' => 'E02005150',
        '9HD' => 'E02005150',
        '9HE' => 'E02005150',
        '9HF' => 'E02005150',
        '9HG' => 'E02005150',
        '9HH' => 'E02005150',
        '9HJ' => 'E02005150',
        '9HL' => 'E02005150',
        '9HN' => 'E02005150',
        '9HP' => 'E02005150',
        '9HQ' => 'E02005150',
        '9HR' => 'E02005150',
        '9HS' => 'E02005150',
        '9HT' => 'E02005150',
        '9HU' => 'E02005150',
        '9HW' => 'E02005150',
        '9HX' => 'E02005150',
        '9HY' => 'E02005150',
        '9HZ' => 'E02005150',
        '9JA' => 'E02005150',
        '9JB' => 'E02005150',
        '9JD' => 'E02005150',
        '9JE' => 'E02005150',
        '9JF' => 'E02005150',
        '9JG' => 'E02005150',
        '9JH' => 'E02005150',
        '9JJ' => 'E02005150',
        '9JL' => 'E02005150',
        '9JN' => 'E02005150',
        '9JP' => 'E02005150',
        '9JQ' => 'E02005150',
        '9JR' => 'E02005150',
        '9JS' => 'E02005150',
        '9JT' => 'E02005150',
        '9JU' => 'E02005150',
        '9SA' => 'E02005155',
        '9SB' => 'E02005155',
        '9SD' => 'E02005155',
        '9SE' => 'E02005155',
        '9SF' => 'E02005155',
        '9SG' => 'E02005155',
        '9SH' => 'E02005155',
        '9SJ' => 'E02005155',
        '9SL' => 'E02005155',
        '9SN' => 'E02005155',
        '9SP' => 'E02005155',
        '9SQ' => 'E02005155',
        '9SR' => 'E02005155',
        '9SS' => 'E02005155',
        '9ST' => 'E02005155',
        '9SU' => 'E02005155',
        '9SW' => 'E02005155',
        '9SX' => 'E02005155',
        '9SY' => 'E02005155',
        '9SZ' => 'E02005155',
        '9TA' => 'E02005155',
        '9TB' => 'E02005155',
        '9TD' => 'E02005155',
        '9TE' => 'E02005155',
        '9TF' => 'E02005155',
        '9TG' => 'E02005155',
        '9TH' => 'E02005155',
        '9TJ' => 'E02005155',
        '9TL' => 'E02005155',
        '9TN' => 'E02005155',
        '9TP' => 'E02005155',
        '9TQ' => 'E02005155',
        '9TR' => 'E02005155',
        '9ZY' => 'E02005150',
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
