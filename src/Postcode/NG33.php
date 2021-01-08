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
final class NG33
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '4AA' => 'E02005482',
        '4AB' => 'E02005482',
        '4AD' => 'E02005482',
        '4AE' => 'E02005482',
        '4AF' => 'E02005482',
        '4AG' => 'E02005482',
        '4AH' => 'E02005482',
        '4AJ' => 'E02005482',
        '4AL' => 'E02005482',
        '4AN' => 'E02005482',
        '4AP' => 'E02005482',
        '4AQ' => 'E02005482',
        '4AR' => 'E02005482',
        '4AS' => 'E02005482',
        '4AT' => 'E02005482',
        '4AU' => 'E02005482',
        '4AW' => 'E02005482',
        '4AX' => 'E02005482',
        '4AY' => 'E02005482',
        '4AZ' => 'E02005482',
        '4BA' => 'E02005487',
        '4BB' => 'E02005482',
        '4BD' => 'E02005482',
        '4BE' => 'E02005482',
        '4BF' => 'E02005482',
        '4BG' => 'E02005482',
        '4BH' => 'E02005482',
        '4BJ' => 'E02005482',
        '4BL' => 'E02005482',
        '4BN' => 'E02005482',
        '4BP' => 'E02005482',
        '4BQ' => 'E02005482',
        '4BS' => 'E02005482',
        '4BT' => 'E02005482',
        '4BU' => 'E02005482',
        '4BW' => 'E02005482',
        '4BX' => 'E02005482',
        '4BY' => 'E02005482',
        '4BZ' => 'E02005482',
        '4DA' => 'E02005482',
        '4DB' => 'E02005482',
        '4DD' => 'E02005482',
        '4DE' => 'E02005482',
        '4DF' => 'E02005482',
        '4DG' => 'E02005482',
        '4DH' => 'E02005482',
        '4DJ' => 'E02005482',
        '4DL' => 'E02005482',
        '4DN' => 'E02005479',
        '4DP' => 'E02005482',
        '4DQ' => 'E02005482',
        '4DR' => 'E02005482',
        '4DS' => 'E02005482',
        '4DT' => 'E02005482',
        '4DU' => 'E02005482',
        '4DW' => 'E02005479',
        '4DX' => 'E02005482',
        '4DY' => 'E02005482',
        '4DZ' => 'E02005482',
        '4EA' => 'E02005482',
        '4EB' => 'E02005482',
        '4ED' => 'E02005482',
        '4EG' => 'E02005482',
        '4EH' => 'E02005482',
        '4EJ' => 'E02005482',
        '4EL' => 'E02005482',
        '4EN' => 'E02005482',
        '4EP' => 'E02005482',
        '4EQ' => 'E02005482',
        '4ER' => 'E02005482',
        '4ES' => 'E02005482',
        '4ET' => 'E02005482',
        '4EU' => 'E02005482',
        '4EW' => 'E02005482',
        '4EX' => 'E02005482',
        '4EY' => 'E02005482',
        '4EZ' => 'E02005482',
        '4FP' => 'E02005482',
        '4FW' => 'E02005482',
        '4FX' => 'E02005482',
        '4GZ' => 'E02005479',
        '4HA' => 'E02005482',
        '4HB' => 'E02005482',
        '4HD' => 'E02005482',
        '4HE' => 'E02005482',
        '4HF' => 'E02005482',
        '4HG' => 'E02005482',
        '4HH' => 'E02005482',
        '4HJ' => 'E02005482',
        '4HL' => 'E02005482',
        '4HN' => 'E02005482',
        '4HP' => 'E02005482',
        '4HQ' => 'E02005482',
        '4HR' => 'E02005482',
        '4HS' => 'E02005482',
        '4HT' => 'E02005482',
        '4HU' => 'E02005482',
        '4HW' => 'E02005482',
        '4HX' => 'E02005482',
        '4HZ' => 'E02005482',
        '4JA' => 'E02005482',
        '4JB' => 'E02005482',
        '4JD' => 'E02005482',
        '4JE' => 'E02005482',
        '4JF' => 'E02005482',
        '4JG' => 'E02005482',
        '4JH' => 'E02005482',
        '4JJ' => 'E02005482',
        '4JL' => 'E02005482',
        '4JN' => 'E02005482',
        '4JP' => 'E02005482',
        '4JQ' => 'E02005482',
        '4JR' => 'E02005482',
        '4JS' => 'E02005482',
        '4JT' => 'E02005482',
        '4JU' => 'E02005482',
        '4JW' => 'E02005482',
        '4JX' => 'E02005484',
        '4JY' => 'E02005482',
        '4JZ' => 'E02005482',
        '4LA' => 'E02005482',
        '4LB' => 'E02005482',
        '4LD' => 'E02005482',
        '4LE' => 'E02005482',
        '4LF' => 'E02005482',
        '4LG' => 'E02005482',
        '4LH' => 'E02005482',
        '4LJ' => 'E02005482',
        '4LL' => 'E02005482',
        '4LN' => 'E02005482',
        '4LP' => 'E02005482',
        '4LQ' => 'E02005482',
        '4LR' => 'E02005482',
        '4LS' => 'E02005479',
        '4LT' => 'E02005482',
        '4LU' => 'E02005482',
        '4LW' => 'E02005482',
        '4LX' => 'E02005482',
        '4LY' => 'E02005482',
        '4LZ' => 'E02005482',
        '4NA' => 'E02005482',
        '4NB' => 'E02005482',
        '4ND' => 'E02005482',
        '4NE' => 'E02005482',
        '4NF' => 'E02005482',
        '4NG' => 'E02005482',
        '4NH' => 'E02005482',
        '4NJ' => 'E02005482',
        '4NL' => 'E02005482',
        '4NN' => 'E02005482',
        '4NP' => 'E02005482',
        '4NQ' => 'E02005482',
        '4NR' => 'E02005482',
        '4NS' => 'E02005482',
        '4NT' => 'E02005479',
        '4NU' => 'E02005482',
        '4NW' => 'E02005482',
        '4NX' => 'E02005482',
        '4NY' => 'E02005482',
        '4NZ' => 'E02005482',
        '4PA' => 'E02005482',
        '4PB' => 'E02005482',
        '4PD' => 'E02005482',
        '4PE' => 'E02005482',
        '4PF' => 'E02005482',
        '4PG' => 'E02005482',
        '4PH' => 'E02005482',
        '4PJ' => 'E02005482',
        '4PL' => 'E02005482',
        '4PN' => 'E02005482',
        '4PP' => 'E02005487',
        '4PQ' => 'E02005482',
        '4PR' => 'E02005487',
        '4PS' => 'E02005487',
        '4PT' => 'E02005487',
        '4PU' => 'E02005487',
        '4PW' => 'E02005482',
        '4PX' => 'E02005487',
        '4PY' => 'E02005487',
        '4PZ' => 'E02005487',
        '4QA' => 'E02005487',
        '4QB' => 'E02005487',
        '4QD' => 'E02005487',
        '4QE' => 'E02005487',
        '4QF' => 'E02005487',
        '4QG' => 'E02005487',
        '4QH' => 'E02005482',
        '4QJ' => 'E02005487',
        '4QL' => 'E02005487',
        '4QN' => 'E02005487',
        '4QP' => 'E02005487',
        '4QQ' => 'E02005479',
        '4QR' => 'E02005487',
        '4QS' => 'E02005487',
        '4QT' => 'E02005482',
        '4QU' => 'E02005479',
        '4QW' => 'E02005484',
        '4QX' => 'E02005487',
        '4QY' => 'E02005487',
        '4QZ' => 'E02005487',
        '4RA' => 'E02005487',
        '4RB' => 'E02005482',
        '4RD' => 'E02005487',
        '4RE' => 'E02005487',
        '4RF' => 'E02005484',
        '4RG' => 'E02005484',
        '4RH' => 'E02005484',
        '4RJ' => 'E02005484',
        '4RL' => 'E02005484',
        '4RN' => 'E02005487',
        '4RP' => 'E02005487',
        '4RQ' => 'E02005484',
        '4RR' => 'E02005487',
        '4RS' => 'E02005484',
        '4RT' => 'E02005484',
        '4RU' => 'E02005484',
        '4RW' => 'E02005484',
        '4RX' => 'E02005487',
        '4RY' => 'E02005484',
        '4RZ' => 'E02005484',
        '4SA' => 'E02005484',
        '4SB' => 'E02005484',
        '4SD' => 'E02005484',
        '4SE' => 'E02005484',
        '4SF' => 'E02005484',
        '4SG' => 'E02005484',
        '4SH' => 'E02005484',
        '4SJ' => 'E02005484',
        '4SL' => 'E02005484',
        '4SN' => 'E02005484',
        '4SP' => 'E02005484',
        '4SQ' => 'E02005484',
        '4SR' => 'E02005484',
        '4SS' => 'E02005484',
        '4ST' => 'E02005484',
        '4SU' => 'E02005479',
        '4SW' => 'E02005484',
        '4SX' => 'E02005482',
        '4TA' => 'E02005482',
        '4TB' => 'E02005482',
        '4WA' => 'E02005479',
        '4WB' => 'E02005484',
        '4WD' => 'E02005484',
        '4WQ' => 'E02005479',
        '4WU' => 'E02005479',
        '4WW' => 'E02005479',
        '4WX' => 'E02005479',
        '4WY' => 'E02005479',
        '4WZ' => 'E02005479',
        '4ZZ' => 'E02005479',
        '5AA' => 'E02005484',
        '5AB' => 'E02005484',
        '5AD' => 'E02005484',
        '5AE' => 'E02005484',
        '5AF' => 'E02005484',
        '5AG' => 'E02005484',
        '5AH' => 'E02005484',
        '5AJ' => 'E02005484',
        '5AL' => 'E02005484',
        '5AN' => 'E02005484',
        '5AP' => 'E02005484',
        '5AQ' => 'E02005484',
        '5AR' => 'E02005484',
        '5AS' => 'E02005484',
        '5AT' => 'E02005484',
        '5AU' => 'E02005484',
        '5AW' => 'E02005484',
        '5AX' => 'E02005484',
        '5AY' => 'E02005484',
        '5AZ' => 'E02005484',
        '5BA' => 'E02005484',
        '5BB' => 'E02005484',
        '5BD' => 'E02005484',
        '5BE' => 'E02005484',
        '5BF' => 'E02005484',
        '5BG' => 'E02005484',
        '5BH' => 'E02005484',
        '5BJ' => 'E02005482',
        '5BL' => 'E02005484',
        '5BN' => 'E02005484',
        '5BP' => 'E02005484',
        '5BQ' => 'E02005484',
        '5BS' => 'E02005484',
        '5BT' => 'E02005484',
        '5BU' => 'E02005484',
        '5BW' => 'E02005484',
        '5BX' => 'E02005484',
        '5BY' => 'E02005484',
        '5BZ' => 'E02005484',
        '5DA' => 'E02005484',
        '5DB' => 'E02005484',
        '5DD' => 'E02005484',
        '5DE' => 'E02005484',
        '5DF' => 'E02005484',
        '5DG' => 'E02005484',
        '5DH' => 'E02005484',
        '5DJ' => 'E02005484',
        '5DL' => 'E02005484',
        '5DN' => 'E02005484',
        '5DP' => 'E02005484',
        '5DQ' => 'E02005484',
        '5DR' => 'E02005484',
        '5DS' => 'E02005484',
        '5DT' => 'E02005484',
        '5DU' => 'E02005484',
        '5DW' => 'E02005484',
        '5DX' => 'E02005484',
        '5DY' => 'E02005484',
        '5DZ' => 'E02005484',
        '5EA' => 'E02005484',
        '5EB' => 'E02005484',
        '5ED' => 'E02005484',
        '5EE' => 'E02005484',
        '5EF' => 'E02005484',
        '5EG' => 'E02005484',
        '5EH' => 'E02005484',
        '5EJ' => 'E02005484',
        '5EL' => 'E02005484',
        '5EN' => 'E02005484',
        '5EP' => 'E02005484',
        '5EQ' => 'E02005484',
        '5ER' => 'E02005484',
        '5ES' => 'E02005484',
        '5ET' => 'E02005484',
        '5EU' => 'E02005484',
        '5EW' => 'E02005484',
        '5EX' => 'E02005484',
        '5EY' => 'E02005484',
        '5EZ' => 'E02005484',
        '5FB' => 'E02005484',
        '5FD' => 'E02005484',
        '5FE' => 'E02005484',
        '5FF' => 'E02005484',
        '5GA' => 'E02005484',
        '5GB' => 'E02005484',
        '5GG' => 'E02005484',
        '5GH' => 'E02005484',
        '5GJ' => 'E02005484',
        '5GL' => 'E02005484',
        '5GP' => 'E02005484',
        '5GR' => 'E02005479',
        '5GS' => 'E02005479',
        '5GT' => 'E02005484',
        '5GU' => 'E02005484',
        '5GX' => 'E02005484',
        '5GY' => 'E02005484',
        '5GZ' => 'E02005484',
        '5HA' => 'E02005484',
        '5HB' => 'E02005484',
        '5HD' => 'E02005484',
        '5HE' => 'E02005484',
        '5HF' => 'E02005484',
        '5HG' => 'E02005484',
        '5HH' => 'E02005484',
        '5HJ' => 'E02005396',
        '5HL' => 'E02005391',
        '5HN' => 'E02005484',
        '5HP' => 'E02005484',
        '5HQ' => 'E02005484',
        '5HR' => 'E02005484',
        '5HS' => 'E02005484',
        '5HT' => 'E02005484',
        '5HU' => 'E02005484',
        '5HW' => 'E02005484',
        '5HX' => 'E02005484',
        '5HY' => 'E02005484',
        '5HZ' => 'E02005484',
        '5JA' => 'E02005484',
        '5JB' => 'E02005484',
        '5JD' => 'E02005484',
        '5JE' => 'E02005484',
        '5JF' => 'E02005484',
        '5JG' => 'E02005484',
        '5JH' => 'E02005484',
        '5JJ' => 'E02005484',
        '5JL' => 'E02005484',
        '5JN' => 'E02005484',
        '5JP' => 'E02005484',
        '5JQ' => 'E02005484',
        '5JR' => 'E02005484',
        '5JS' => 'E02005484',
        '5JT' => 'E02005484',
        '5JU' => 'E02005484',
        '5JW' => 'E02005484',
        '5JX' => 'E02005484',
        '5JY' => 'E02005484',
        '5JZ' => 'E02005484',
        '5LA' => 'E02005484',
        '5LB' => 'E02005484',
        '5LD' => 'E02005484',
        '5LE' => 'E02005484',
        '5LF' => 'E02005484',
        '5LG' => 'E02005484',
        '5LH' => 'E02005484',
        '5LJ' => 'E02005484',
        '5LL' => 'E02005484',
        '5LN' => 'E02005484',
        '5LP' => 'E02005484',
        '5LQ' => 'E02005484',
        '5LR' => 'E02005484',
        '5LS' => 'E02005484',
        '5LT' => 'E02005484',
        '5LU' => 'E02005484',
        '5LW' => 'E02005484',
        '5LX' => 'E02005484',
        '5LY' => 'E02005484',
        '5LZ' => 'E02005484',
        '5NA' => 'E02005484',
        '5NB' => 'E02005484',
        '5ND' => 'E02005484',
        '5NE' => 'E02005484',
        '5NF' => 'E02005484',
        '5NG' => 'E02005484',
        '5NH' => 'E02005484',
        '5NJ' => 'E02005484',
        '5NL' => 'E02005484',
        '5NN' => 'E02005484',
        '5NP' => 'E02005484',
        '5NQ' => 'E02005484',
        '5NR' => 'E02005484',
        '5NS' => 'E02005484',
        '5NT' => 'E02005484',
        '5NU' => 'E02005484',
        '5NW' => 'E02005484',
        '5NX' => 'E02005484',
        '5NY' => 'E02005484',
        '5NZ' => 'E02005484',
        '5PA' => 'E02005484',
        '5PB' => 'E02005484',
        '5PD' => 'E02005484',
        '5PE' => 'E02005484',
        '5PF' => 'E02005484',
        '5PG' => 'E02005484',
        '5PH' => 'E02005484',
        '5PJ' => 'E02005484',
        '5PL' => 'E02005484',
        '5PN' => 'E02005484',
        '5PP' => 'E02005484',
        '5PQ' => 'E02005484',
        '5PR' => 'E02005484',
        '5PS' => 'E02005484',
        '5PT' => 'E02005484',
        '5PU' => 'E02005484',
        '5PW' => 'E02005484',
        '5PX' => 'E02005484',
        '5PY' => 'E02005484',
        '5PZ' => 'E02005484',
        '5QA' => 'E02005484',
        '5QB' => 'E02005484',
        '5QD' => 'E02005484',
        '5QE' => 'E02005484',
        '5QF' => 'E02005484',
        '5QG' => 'E02005484',
        '5QH' => 'E02005484',
        '5QJ' => 'E02005484',
        '5QL' => 'E02005484',
        '5QN' => 'E02005484',
        '5QP' => 'E02005484',
        '5QQ' => 'E02005484',
        '5QR' => 'E02005484',
        '5QS' => 'E02005484',
        '5QT' => 'E02005484',
        '5QU' => 'E02005484',
        '5QW' => 'E02005484',
        '5QX' => 'E02005484',
        '5QY' => 'E02005484',
        '5QZ' => 'E02005484',
        '5RA' => 'E02005484',
        '5RB' => 'E02005484',
        '5RD' => 'E02005484',
        '5RE' => 'E02005396',
        '5RF' => 'E02005396',
        '5RG' => 'E02005396',
        '5RH' => 'E02005396',
        '5RJ' => 'E02005396',
        '5RL' => 'E02005396',
        '5RN' => 'E02005396',
        '5RP' => 'E02005484',
        '5RQ' => 'E02005396',
        '5RR' => 'E02005484',
        '5RS' => 'E02005396',
        '5RT' => 'E02005396',
        '5RU' => 'E02005396',
        '5RW' => 'E02005396',
        '5RX' => 'E02005396',
        '5RY' => 'E02005396',
        '5RZ' => 'E02005396',
        '5SA' => 'E02005396',
        '5SB' => 'E02005396',
        '5SD' => 'E02005396',
        '5SE' => 'E02005396',
        '5SF' => 'E02005396',
        '5SG' => 'E02005396',
        '5SH' => 'E02005396',
        '5SJ' => 'E02005484',
        '5SL' => 'E02005484',
        '5SN' => 'E02005484',
        '5SP' => 'E02005484',
        '5SQ' => 'E02005479',
        '5SR' => 'E02005484',
        '5SS' => 'E02005479',
        '5ST' => 'E02005479',
        '5SU' => 'E02005484',
        '5SW' => 'E02005479',
        '5WF' => 'E02005479',
        '5WQ' => 'E02005479',
        '5WR' => 'E02005479',
        '5ZS' => 'E02005479',
        '5ZZ' => 'E02005479',
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
