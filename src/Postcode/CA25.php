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
final class CA25
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '5AA' => 'E02004003',
        '5AB' => 'E02004003',
        '5AD' => 'E02004003',
        '5AE' => 'E02004003',
        '5AF' => 'E02004003',
        '5AG' => 'E02004003',
        '5AH' => 'E02004003',
        '5AJ' => 'E02004003',
        '5AL' => 'E02004003',
        '5AN' => 'E02004003',
        '5AP' => 'E02004003',
        '5AQ' => 'E02004003',
        '5AR' => 'E02004003',
        '5AS' => 'E02004003',
        '5AT' => 'E02004003',
        '5AU' => 'E02004003',
        '5AW' => 'E02004003',
        '5AX' => 'E02004003',
        '5AY' => 'E02004003',
        '5AZ' => 'E02004003',
        '5BA' => 'E02004003',
        '5BB' => 'E02004003',
        '5BD' => 'E02004003',
        '5BE' => 'E02004003',
        '5BF' => 'E02004003',
        '5BG' => 'E02004003',
        '5BH' => 'E02004003',
        '5BJ' => 'E02004003',
        '5BL' => 'E02004003',
        '5BN' => 'E02004003',
        '5BP' => 'E02004003',
        '5BQ' => 'E02004003',
        '5BS' => 'E02004003',
        '5BT' => 'E02004003',
        '5BU' => 'E02004003',
        '5BW' => 'E02004003',
        '5BX' => 'E02004003',
        '5BY' => 'E02004003',
        '5BZ' => 'E02004003',
        '5DA' => 'E02004003',
        '5DB' => 'E02004003',
        '5DD' => 'E02004003',
        '5DE' => 'E02004003',
        '5DF' => 'E02004003',
        '5DG' => 'E02004003',
        '5DH' => 'E02004003',
        '5DJ' => 'E02004003',
        '5DL' => 'E02004003',
        '5DN' => 'E02004003',
        '5DP' => 'E02004003',
        '5DQ' => 'E02004003',
        '5DR' => 'E02004003',
        '5DS' => 'E02004003',
        '5DT' => 'E02004003',
        '5DU' => 'E02004003',
        '5DW' => 'E02004003',
        '5DX' => 'E02004003',
        '5DY' => 'E02004003',
        '5DZ' => 'E02004003',
        '5EA' => 'E02004003',
        '5EB' => 'E02004003',
        '5ED' => 'E02004003',
        '5EE' => 'E02004003',
        '5EF' => 'E02004003',
        '5EG' => 'E02004003',
        '5EH' => 'E02004003',
        '5EJ' => 'E02004003',
        '5EL' => 'E02004003',
        '5EN' => 'E02004003',
        '5EP' => 'E02004003',
        '5EQ' => 'E02004003',
        '5ER' => 'E02004003',
        '5ES' => 'E02004003',
        '5ET' => 'E02004003',
        '5EU' => 'E02004003',
        '5EW' => 'E02004003',
        '5EX' => 'E02004003',
        '5EY' => 'E02004003',
        '5EZ' => 'E02004003',
        '5FA' => 'E02004003',
        '5FB' => 'E02004003',
        '5FD' => 'E02004003',
        '5GA' => 'E02004005',
        '5GB' => 'E02004005',
        '5GZ' => 'E02004003',
        '5HA' => 'E02004003',
        '5HB' => 'E02004003',
        '5HD' => 'E02004003',
        '5HE' => 'E02004003',
        '5HF' => 'E02004003',
        '5HG' => 'E02004003',
        '5HH' => 'E02004003',
        '5HJ' => 'E02004003',
        '5HL' => 'E02004003',
        '5HN' => 'E02004003',
        '5HP' => 'E02004003',
        '5HQ' => 'E02004003',
        '5HR' => 'E02004003',
        '5HS' => 'E02004003',
        '5HT' => 'E02004003',
        '5HU' => 'E02004003',
        '5HW' => 'E02004003',
        '5HX' => 'E02004003',
        '5HY' => 'E02004003',
        '5HZ' => 'E02004003',
        '5JA' => 'E02004003',
        '5JB' => 'E02004003',
        '5JD' => 'E02004003',
        '5JE' => 'E02004003',
        '5JF' => 'E02004003',
        '5JG' => 'E02004003',
        '5JH' => 'E02004003',
        '5JJ' => 'E02004003',
        '5JL' => 'E02004003',
        '5JN' => 'E02004003',
        '5JP' => 'E02004003',
        '5JQ' => 'E02004003',
        '5JR' => 'E02004003',
        '5JS' => 'E02004003',
        '5JT' => 'E02004003',
        '5JU' => 'E02004003',
        '5JW' => 'E02004003',
        '5JX' => 'E02004003',
        '5JY' => 'E02004003',
        '5JZ' => 'E02004003',
        '5LA' => 'E02004003',
        '5LB' => 'E02004003',
        '5LD' => 'E02004003',
        '5LE' => 'E02004003',
        '5LF' => 'E02004003',
        '5LG' => 'E02004003',
        '5LH' => 'E02004003',
        '5LJ' => 'E02004003',
        '5LL' => 'E02004003',
        '5LN' => 'E02004003',
        '5LP' => 'E02004003',
        '5LQ' => 'E02004003',
        '5LR' => 'E02004003',
        '5LS' => 'E02004003',
        '5LT' => 'E02004003',
        '5LU' => 'E02004003',
        '5LW' => 'E02004003',
        '5LX' => 'E02004003',
        '5LY' => 'E02004003',
        '5LZ' => 'E02004003',
        '5NA' => 'E02004003',
        '5NB' => 'E02004003',
        '5ND' => 'E02004003',
        '5NE' => 'E02004003',
        '5NF' => 'E02004003',
        '5NG' => 'E02004003',
        '5NH' => 'E02004003',
        '5NJ' => 'E02004003',
        '5NL' => 'E02004003',
        '5NN' => 'E02004003',
        '5NP' => 'E02004003',
        '5NR' => 'E02004003',
        '5NS' => 'E02004003',
        '5NT' => 'E02004003',
        '5NU' => 'E02004003',
        '5NW' => 'E02004003',
        '5NX' => 'E02004003',
        '5NY' => 'E02004003',
        '5NZ' => 'E02004003',
        '5PA' => 'E02004003',
        '5PB' => 'E02004003',
        '5PD' => 'E02004003',
        '5PE' => 'E02004003',
        '5PF' => 'E02004003',
        '5PG' => 'E02004003',
        '5PH' => 'E02004003',
        '5PJ' => 'E02004003',
        '5PL' => 'E02004003',
        '5PN' => 'E02004003',
        '5PP' => 'E02004003',
        '5PQ' => 'E02004003',
        '5PR' => 'E02004003',
        '5PS' => 'E02004003',
        '5PT' => 'E02004003',
        '5PW' => 'E02004003',
        '5PX' => 'E02004003',
        '5PY' => 'E02004003',
        '5PZ' => 'E02004003',
        '5QA' => 'E02004003',
        '5QB' => 'E02004003',
        '5QD' => 'E02004003',
        '5QE' => 'E02004003',
        '5QF' => 'E02004003',
        '5QG' => 'E02004003',
        '5QH' => 'E02004003',
        '5QJ' => 'E02004003',
        '5QL' => 'E02004003',
        '5QN' => 'E02004003',
        '5QP' => 'E02004003',
        '5QQ' => 'E02004003',
        '5QR' => 'E02004003',
        '5QS' => 'E02004003',
        '5QT' => 'E02004003',
        '5QU' => 'E02004003',
        '5QW' => 'E02004003',
        '5QX' => 'E02004003',
        '5QY' => 'E02004003',
        '5QZ' => 'E02004003',
        '5RA' => 'E02004003',
        '5RB' => 'E02004003',
        '5RD' => 'E02004003',
        '5RE' => 'E02004003',
        '5RF' => 'E02004003',
        '5RG' => 'E02004003',
        '5RH' => 'E02004003',
        '5RJ' => 'E02004003',
        '5RL' => 'E02004003',
        '5RN' => 'E02004003',
        '5RP' => 'E02004003',
        '5RQ' => 'E02004003',
        '5RR' => 'E02004003',
        '5RS' => 'E02004003',
        '5RT' => 'E02004003',
        '5RU' => 'E02004003',
        '5RW' => 'E02004003',
        '5RX' => 'E02004003',
        '5RY' => 'E02004003',
        '5RZ' => 'E02004003',
        '5SA' => 'E02004003',
        '5SB' => 'E02004003',
        '5SD' => 'E02004003',
        '5SE' => 'E02004003',
        '5SF' => 'E02004003',
        '5SG' => 'E02004003',
        '5SH' => 'E02004003',
        '5SJ' => 'E02004003',
        '5SL' => 'E02004003',
        '5SN' => 'E02004003',
        '5SP' => 'E02004003',
        '5SQ' => 'E02004003',
        '5SR' => 'E02004003',
        '5SS' => 'E02004003',
        '5ST' => 'E02004003',
        '5SU' => 'E02004003',
        '5SW' => 'E02004003',
        '5WA' => 'E02004005',
        '5WU' => 'E02004005',
        '5WW' => 'E02004005',
        '5WX' => 'E02004005',
        '5WY' => 'E02004003',
        '5WZ' => 'E02004005',
        '5YA' => 'E02004003',
        '5YB' => 'E02004003',
        '5YD' => 'E02004003',
        '5YE' => 'E02004003',
        '5YF' => 'E02004003',
        '5YG' => 'E02004003',
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
