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
final class TF12
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '5AA' => 'E02006010',
        '5AB' => 'E02006010',
        '5AD' => 'E02006010',
        '5AE' => 'E02006010',
        '5AF' => 'E02006010',
        '5AG' => 'E02006010',
        '5AH' => 'E02006010',
        '5AJ' => 'E02006010',
        '5AL' => 'E02006010',
        '5AN' => 'E02006010',
        '5AP' => 'E02006010',
        '5AQ' => 'E02006010',
        '5AR' => 'E02006010',
        '5AS' => 'E02006010',
        '5AT' => 'E02006010',
        '5AU' => 'E02006010',
        '5AW' => 'E02006010',
        '5AX' => 'E02006010',
        '5AY' => 'E02006010',
        '5AZ' => 'E02006010',
        '5BA' => 'E02006010',
        '5BB' => 'E02006010',
        '5BD' => 'E02006010',
        '5BE' => 'E02006010',
        '5BF' => 'E02006010',
        '5BG' => 'E02006010',
        '5BH' => 'E02006010',
        '5BJ' => 'E02006010',
        '5BL' => 'E02006010',
        '5BN' => 'E02006010',
        '5BP' => 'E02006010',
        '5BQ' => 'E02006010',
        '5BS' => 'E02006010',
        '5BT' => 'E02006010',
        '5BU' => 'E02006010',
        '5BW' => 'E02006010',
        '5BX' => 'E02006010',
        '5BY' => 'E02006010',
        '5BZ' => 'E02006010',
        '5DA' => 'E02006010',
        '5DB' => 'E02006010',
        '5DD' => 'E02006010',
        '5DE' => 'E02006010',
        '5DF' => 'E02006010',
        '5DG' => 'E02006010',
        '5DH' => 'E02006010',
        '5DJ' => 'E02006010',
        '5DL' => 'E02006010',
        '5DN' => 'E02006010',
        '5DP' => 'E02006010',
        '5DQ' => 'E02006010',
        '5DR' => 'E02006010',
        '5DS' => 'E02006010',
        '5DT' => 'E02006010',
        '5DU' => 'E02006010',
        '5DW' => 'E02006010',
        '5DX' => 'E02006010',
        '5DY' => 'E02006010',
        '5DZ' => 'E02006010',
        '5EA' => 'E02006010',
        '5EB' => 'E02006010',
        '5ED' => 'E02006010',
        '5EE' => 'E02006010',
        '5EF' => 'E02006010',
        '5EG' => 'E02006010',
        '5EH' => 'E02006010',
        '5EJ' => 'E02006010',
        '5EL' => 'E02006010',
        '5EN' => 'E02006010',
        '5EP' => 'E02006010',
        '5EQ' => 'E02006010',
        '5ER' => 'E02006010',
        '5ES' => 'E02006010',
        '5ET' => 'E02006010',
        '5EU' => 'E02006010',
        '5EW' => 'E02006010',
        '5EX' => 'E02006010',
        '5EY' => 'E02006010',
        '5EZ' => 'E02006010',
        '5FA' => 'E02006010',
        '5FB' => 'E02006010',
        '5FD' => 'E02006010',
        '5FE' => 'E02006010',
        '5FF' => 'E02006010',
        '5HA' => 'E02006010',
        '5HB' => 'E02006010',
        '5HD' => 'E02006010',
        '5HE' => 'E02006010',
        '5HF' => 'E02006010',
        '5HG' => 'E02006010',
        '5HH' => 'E02006010',
        '5HJ' => 'E02006010',
        '5HL' => 'E02006010',
        '5HN' => 'E02006010',
        '5HP' => 'E02006010',
        '5HQ' => 'E02006010',
        '5HR' => 'E02006010',
        '5HS' => 'E02006010',
        '5HT' => 'E02006010',
        '5HU' => 'E02006010',
        '5HW' => 'E02006010',
        '5HX' => 'E02006010',
        '5HY' => 'E02006010',
        '5HZ' => 'E02006010',
        '5JA' => 'E02006010',
        '5JB' => 'E02006010',
        '5JD' => 'E02006010',
        '5JE' => 'E02006010',
        '5JF' => 'E02006010',
        '5JG' => 'E02006010',
        '5JH' => 'E02006010',
        '5JJ' => 'E02006010',
        '5JL' => 'E02006010',
        '5JN' => 'E02006010',
        '5JP' => 'E02006010',
        '5JQ' => 'E02006010',
        '5JR' => 'E02006010',
        '5JS' => 'E02006010',
        '5JT' => 'E02006010',
        '5JU' => 'E02006010',
        '5JX' => 'E02006010',
        '5JY' => 'E02006010',
        '5JZ' => 'E02006010',
        '5LA' => 'E02006010',
        '5LB' => 'E02006010',
        '5LE' => 'E02006010',
        '5LF' => 'E02006010',
        '5LG' => 'E02006010',
        '5LH' => 'E02006010',
        '5LJ' => 'E02006010',
        '5LL' => 'E02006010',
        '5LN' => 'E02006010',
        '5LP' => 'E02006010',
        '5LQ' => 'E02006010',
        '5LR' => 'E02006010',
        '5LS' => 'E02006010',
        '5LT' => 'E02006010',
        '5LU' => 'E02006010',
        '5LW' => 'E02006010',
        '5LX' => 'E02006010',
        '5LY' => 'E02006010',
        '5LZ' => 'E02006010',
        '5NA' => 'E02006010',
        '5NB' => 'E02006010',
        '5ND' => 'E02006010',
        '5NE' => 'E02006010',
        '5NF' => 'E02006010',
        '5NG' => 'E02006010',
        '5NH' => 'E02006010',
        '5NJ' => 'E02006010',
        '5NL' => 'E02006010',
        '5NN' => 'E02006010',
        '5NP' => 'E02006010',
        '5NQ' => 'E02006010',
        '5NR' => 'E02006010',
        '5NS' => 'E02006010',
        '5NT' => 'E02006010',
        '5NU' => 'E02006010',
        '5NW' => 'E02006010',
        '5NX' => 'E02006010',
        '5NY' => 'E02006010',
        '5NZ' => 'E02006010',
        '5PA' => 'E02006010',
        '5PB' => 'E02006010',
        '5PD' => 'E02006010',
        '5PE' => 'E02006010',
        '5PF' => 'E02006010',
        '5PG' => 'E02006010',
        '5PH' => 'E02006010',
        '5PJ' => 'E02006010',
        '5PL' => 'E02006010',
        '5PN' => 'E02006010',
        '5PP' => 'E02006010',
        '5PQ' => 'E02006010',
        '5PR' => 'E02006010',
        '5PS' => 'E02006010',
        '5PT' => 'E02006010',
        '5PU' => 'E02006010',
        '5PW' => 'E02006010',
        '5PX' => 'E02006010',
        '5PY' => 'E02006010',
        '5PZ' => 'E02006010',
        '5QA' => 'E02006010',
        '5QB' => 'E02006010',
        '5QD' => 'E02006010',
        '5QE' => 'E02006010',
        '5QF' => 'E02006010',
        '5QG' => 'E02006010',
        '5QH' => 'E02006010',
        '5QJ' => 'E02006010',
        '5QL' => 'E02006010',
        '5QN' => 'E02006010',
        '5QP' => 'E02006010',
        '5QQ' => 'E02006010',
        '5QR' => 'E02006010',
        '5QS' => 'E02006010',
        '5QT' => 'E02006010',
        '5QU' => 'E02006010',
        '5QW' => 'E02006010',
        '5QX' => 'E02006010',
        '5QY' => 'E02006010',
        '5QZ' => 'E02006010',
        '5RA' => 'E02006010',
        '5RB' => 'E02006010',
        '5RD' => 'E02006010',
        '5RE' => 'E02006010',
        '5RF' => 'E02006010',
        '5RG' => 'E02006010',
        '5RH' => 'E02006010',
        '5RJ' => 'E02006010',
        '5RL' => 'E02006010',
        '5RN' => 'E02006010',
        '5RP' => 'E02006010',
        '5RQ' => 'E02006010',
        '5RR' => 'E02006010',
        '5RS' => 'E02006010',
        '5RT' => 'E02006010',
        '5RU' => 'E02006010',
        '5RW' => 'E02006010',
        '5RX' => 'E02006010',
        '5RY' => 'E02006010',
        '5RZ' => 'E02006010',
        '5SA' => 'E02006010',
        '5SB' => 'E02006010',
        '5SD' => 'E02006010',
        '5SE' => 'E02006010',
        '5SF' => 'E02006010',
        '5SG' => 'E02006010',
        '5SH' => 'E02006010',
        '5SJ' => 'E02006010',
        '5SL' => 'E02006010',
        '5SN' => 'E02006010',
        '5SP' => 'E02006010',
        '5SQ' => 'E02006010',
        '5SR' => 'E02006010',
        '5SS' => 'E02006010',
        '5ST' => 'E02006010',
        '5SU' => 'E02006010',
        '5SW' => 'E02006010',
        '5SX' => 'E02006010',
        '5SY' => 'E02006010',
        '5SZ' => 'E02006010',
        '5TA' => 'E02006010',
        '5TB' => 'E02006010',
        '5TD' => 'E02006010',
        '5TE' => 'E02006010',
        '5WA' => 'E02002949',
        '5WB' => 'E02006010',
        '5WD' => 'E02002949',
        '5WE' => 'E02002949',
        '5WF' => 'E02002949',
        '5WG' => 'E02006010',
        '5WH' => 'E02006010',
        '5WJ' => 'E02002949',
        '5WL' => 'E02006010',
        '5WN' => 'E02002949',
        '5WR' => 'E02002949',
        '5WT' => 'E02002949',
        '5XQ' => 'E02002949',
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