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
final class IP29
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '4AA' => 'E02006282',
        '4AB' => 'E02006280',
        '4AD' => 'E02006280',
        '4AE' => 'E02006282',
        '4AF' => 'E02006282',
        '4AG' => 'E02006282',
        '4AH' => 'E02006282',
        '4AJ' => 'E02006282',
        '4AL' => 'E02006282',
        '4AN' => 'E02006282',
        '4AP' => 'E02006282',
        '4AQ' => 'E02006282',
        '4AR' => 'E02006282',
        '4AS' => 'E02006282',
        '4AT' => 'E02006228',
        '4AU' => 'E02006282',
        '4AW' => 'E02006228',
        '4AX' => 'E02006282',
        '4AY' => 'E02006282',
        '4AZ' => 'E02006282',
        '4BA' => 'E02006282',
        '4BB' => 'E02006282',
        '4BD' => 'E02006280',
        '4BE' => 'E02006280',
        '4BF' => 'E02006228',
        '4BG' => 'E02006280',
        '4BH' => 'E02006280',
        '4BJ' => 'E02006280',
        '4BL' => 'E02006280',
        '4BN' => 'E02006282',
        '4BP' => 'E02006282',
        '4BQ' => 'E02006280',
        '4BS' => 'E02006282',
        '4BT' => 'E02006282',
        '4BU' => 'E02006282',
        '4BW' => 'E02006278',
        '4BX' => 'E02006282',
        '4BY' => 'E02006282',
        '4BZ' => 'E02006282',
        '4DA' => 'E02006282',
        '4DB' => 'E02006228',
        '4DD' => 'E02006228',
        '4DE' => 'E02006278',
        '4DF' => 'E02006278',
        '4DG' => 'E02006278',
        '4DH' => 'E02006228',
        '4DJ' => 'E02006228',
        '4DL' => 'E02006228',
        '4DN' => 'E02006228',
        '4DR' => 'E02006228',
        '4DS' => 'E02006228',
        '4DT' => 'E02006228',
        '4DU' => 'E02006228',
        '4DW' => 'E02006228',
        '4DY' => 'E02006278',
        '4DZ' => 'E02006228',
        '4EA' => 'E02006228',
        '4EB' => 'E02006228',
        '4ED' => 'E02006228',
        '4EE' => 'E02006228',
        '4EF' => 'E02006228',
        '4EG' => 'E02006228',
        '4EH' => 'E02006228',
        '4EJ' => 'E02006228',
        '4EL' => 'E02006228',
        '4EP' => 'E02006280',
        '4EQ' => 'E02006228',
        '4ES' => 'E02006228',
        '4ET' => 'E02006228',
        '4EU' => 'E02006228',
        '4EW' => 'E02006228',
        '4EX' => 'E02006228',
        '4EY' => 'E02006228',
        '4EZ' => 'E02006228',
        '4FH' => 'E02006228',
        '4HA' => 'E02006280',
        '4HB' => 'E02006228',
        '4HD' => 'E02006228',
        '4HE' => 'E02006228',
        '4HF' => 'E02006228',
        '4HG' => 'E02006228',
        '4HH' => 'E02006228',
        '4HJ' => 'E02006228',
        '4HL' => 'E02006228',
        '4HN' => 'E02006228',
        '4HP' => 'E02006228',
        '4HQ' => 'E02006228',
        '4HR' => 'E02006228',
        '4HS' => 'E02006228',
        '4HT' => 'E02006228',
        '4HU' => 'E02006228',
        '4HW' => 'E02006228',
        '4HX' => 'E02006228',
        '4HY' => 'E02006228',
        '4HZ' => 'E02006228',
        '4JA' => 'E02006228',
        '4JB' => 'E02006228',
        '4JD' => 'E02006228',
        '4JE' => 'E02006228',
        '4JN' => 'E02006228',
        '4JP' => 'E02006228',
        '4JR' => 'E02006228',
        '4JS' => 'E02006228',
        '4JT' => 'E02006228',
        '4JU' => 'E02006228',
        '4JX' => 'E02006228',
        '4JY' => 'E02006228',
        '4JZ' => 'E02006228',
        '4LD' => 'E02006228',
        '4LE' => 'E02006228',
        '4LG' => 'E02006282',
        '4LH' => 'E02006228',
        '4LJ' => 'E02006228',
        '4LL' => 'E02006228',
        '4LN' => 'E02006228',
        '4LQ' => 'E02006282',
        '4LW' => 'E02006228',
        '4NA' => 'E02006228',
        '4ND' => 'E02006228',
        '4NE' => 'E02006228',
        '4NF' => 'E02006228',
        '4NH' => 'E02006282',
        '4NJ' => 'E02006282',
        '4NL' => 'E02006282',
        '4NN' => 'E02006282',
        '4NP' => 'E02006282',
        '4NQ' => 'E02006282',
        '4NW' => 'E02006282',
        '4NZ' => 'E02006228',
        '4PA' => 'E02006228',
        '4PB' => 'E02006228',
        '4PD' => 'E02006228',
        '4PE' => 'E02006228',
        '4PF' => 'E02006228',
        '4PG' => 'E02006228',
        '4PH' => 'E02006228',
        '4PJ' => 'E02006228',
        '4PL' => 'E02006228',
        '4PN' => 'E02006228',
        '4PP' => 'E02006228',
        '4PQ' => 'E02006228',
        '4PR' => 'E02006228',
        '4PS' => 'E02006228',
        '4PT' => 'E02006228',
        '4PU' => 'E02006228',
        '4PW' => 'E02006228',
        '4PX' => 'E02006228',
        '4PY' => 'E02006228',
        '4PZ' => 'E02006228',
        '4QA' => 'E02006228',
        '4QB' => 'E02006228',
        '4QD' => 'E02006228',
        '4QE' => 'E02006228',
        '4QF' => 'E02006228',
        '4QG' => 'E02006228',
        '4QH' => 'E02006228',
        '4QJ' => 'E02006228',
        '4QL' => 'E02006228',
        '4QN' => 'E02006228',
        '4QP' => 'E02006228',
        '4QQ' => 'E02006228',
        '4QT' => 'E02006228',
        '4QU' => 'E02006228',
        '4RA' => 'E02006276',
        '4RB' => 'E02006276',
        '4RD' => 'E02006276',
        '4RE' => 'E02006276',
        '4RF' => 'E02006276',
        '4RG' => 'E02006276',
        '4RH' => 'E02006276',
        '4RJ' => 'E02006276',
        '4RL' => 'E02006276',
        '4RN' => 'E02006276',
        '4RP' => 'E02006276',
        '4RQ' => 'E02006276',
        '4RR' => 'E02006276',
        '4RS' => 'E02006276',
        '4RT' => 'E02006276',
        '4RU' => 'E02006276',
        '4RW' => 'E02006276',
        '4RX' => 'E02006280',
        '4RZ' => 'E02006280',
        '4SA' => 'E02006276',
        '4SB' => 'E02006276',
        '4SD' => 'E02006276',
        '4SE' => 'E02006276',
        '4SF' => 'E02006228',
        '4SG' => 'E02006276',
        '4SJ' => 'E02006276',
        '4SN' => 'E02006278',
        '4SP' => 'E02006280',
        '4SR' => 'E02006280',
        '4SS' => 'E02006280',
        '4ST' => 'E02006280',
        '4SU' => 'E02006280',
        '4SW' => 'E02006278',
        '4SX' => 'E02006282',
        '4SY' => 'E02006280',
        '4SZ' => 'E02006280',
        '4TA' => 'E02006280',
        '4TB' => 'E02006280',
        '4TD' => 'E02006280',
        '4TE' => 'E02006280',
        '4TF' => 'E02006280',
        '4TG' => 'E02006280',
        '4TH' => 'E02006228',
        '4TJ' => 'E02006228',
        '4TL' => 'E02006280',
        '4TN' => 'E02006280',
        '4TP' => 'E02006280',
        '4TQ' => 'E02006280',
        '4TR' => 'E02006280',
        '4TS' => 'E02006280',
        '4TW' => 'E02006280',
        '4TY' => 'E02006280',
        '4TZ' => 'E02006280',
        '4UA' => 'E02006280',
        '4UB' => 'E02006280',
        '4UD' => 'E02006280',
        '4UE' => 'E02006280',
        '4UG' => 'E02006280',
        '4UH' => 'E02006280',
        '4UJ' => 'E02006280',
        '4UL' => 'E02006280',
        '4UN' => 'E02006280',
        '4UP' => 'E02006280',
        '4UQ' => 'E02006280',
        '4UR' => 'E02006280',
        '4US' => 'E02006280',
        '4UT' => 'E02006280',
        '4UU' => 'E02006280',
        '4UW' => 'E02006280',
        '4UX' => 'E02006280',
        '4UY' => 'E02006280',
        '4WA' => 'E02006280',
        '4WB' => 'E02006280',
        '4WD' => 'E02006280',
        '4WE' => 'E02006280',
        '4WP' => 'E02006278',
        '4WY' => 'E02006278',
        '4WZ' => 'E02006277',
        '4XA' => 'E02006280',
        '4XB' => 'E02006280',
        '4XD' => 'E02006280',
        '4XE' => 'E02006280',
        '4XS' => 'E02006278',
        '4XZ' => 'E02006278',
        '4ZA' => 'E02006282',
        '4ZB' => 'E02006278',
        '4ZY' => 'E02006278',
        '5AA' => 'E02006280',
        '5AB' => 'E02006280',
        '5AD' => 'E02006280',
        '5AE' => 'E02006280',
        '5AF' => 'E02006280',
        '5AG' => 'E02006280',
        '5AH' => 'E02006280',
        '5AJ' => 'E02006280',
        '5AL' => 'E02006280',
        '5AN' => 'E02006280',
        '5AP' => 'E02006280',
        '5AQ' => 'E02006280',
        '5AR' => 'E02006278',
        '5AS' => 'E02006280',
        '5AT' => 'E02006280',
        '5AU' => 'E02006280',
        '5AW' => 'E02006280',
        '5AX' => 'E02006280',
        '5AY' => 'E02006280',
        '5AZ' => 'E02006280',
        '5BA' => 'E02006280',
        '5BB' => 'E02006280',
        '5BD' => 'E02006280',
        '5BE' => 'E02006280',
        '5BF' => 'E02006280',
        '5BG' => 'E02006280',
        '5BH' => 'E02006280',
        '5BQ' => 'E02006280',
        '5BS' => 'E02006280',
        '5BT' => 'E02006280',
        '5BU' => 'E02006280',
        '5BW' => 'E02006278',
        '5BX' => 'E02006280',
        '5BY' => 'E02006280',
        '5BZ' => 'E02006278',
        '5DA' => 'E02006280',
        '5DB' => 'E02006280',
        '5DD' => 'E02006280',
        '5DE' => 'E02006280',
        '5DF' => 'E02006280',
        '5DG' => 'E02006280',
        '5DH' => 'E02006280',
        '5DJ' => 'E02006280',
        '5DL' => 'E02006280',
        '5DN' => 'E02006280',
        '5DP' => 'E02006280',
        '5DQ' => 'E02006280',
        '5DR' => 'E02006280',
        '5DS' => 'E02006280',
        '5DT' => 'E02006280',
        '5DU' => 'E02006280',
        '5DW' => 'E02006280',
        '5DX' => 'E02006280',
        '5DY' => 'E02006280',
        '5DZ' => 'E02006280',
        '5EA' => 'E02006280',
        '5EB' => 'E02006280',
        '5ED' => 'E02006280',
        '5EE' => 'E02006280',
        '5EF' => 'E02006280',
        '5EG' => 'E02006280',
        '5EH' => 'E02006280',
        '5EJ' => 'E02006280',
        '5EL' => 'E02006280',
        '5EN' => 'E02006280',
        '5EP' => 'E02006280',
        '5EQ' => 'E02006280',
        '5ER' => 'E02006280',
        '5ES' => 'E02006280',
        '5EU' => 'E02006280',
        '5EW' => 'E02006280',
        '5EX' => 'E02006278',
        '5EZ' => 'E02006280',
        '5HA' => 'E02006280',
        '5HD' => 'E02006282',
        '5HE' => 'E02006282',
        '5HF' => 'E02006282',
        '5HH' => 'E02006282',
        '5HJ' => 'E02006282',
        '5HL' => 'E02006282',
        '5HP' => 'E02006282',
        '5HQ' => 'E02006278',
        '5HR' => 'E02006282',
        '5HS' => 'E02006282',
        '5HT' => 'E02006282',
        '5HU' => 'E02006282',
        '5HX' => 'E02006282',
        '5HY' => 'E02006282',
        '5HZ' => 'E02006282',
        '5JB' => 'E02006282',
        '5JD' => 'E02006282',
        '5JE' => 'E02006280',
        '5JL' => 'E02006280',
        '5JN' => 'E02006280',
        '5JP' => 'E02006280',
        '5JR' => 'E02006280',
        '5JS' => 'E02006280',
        '5JT' => 'E02006280',
        '5JU' => 'E02006280',
        '5JW' => 'E02006280',
        '5JX' => 'E02006280',
        '5JY' => 'E02006280',
        '5LA' => 'E02006280',
        '5LB' => 'E02006280',
        '5LD' => 'E02006280',
        '5LE' => 'E02006280',
        '5LF' => 'E02006280',
        '5LG' => 'E02006280',
        '5LH' => 'E02006280',
        '5LJ' => 'E02006280',
        '5LL' => 'E02006280',
        '5LP' => 'E02006280',
        '5LQ' => 'E02006280',
        '5LR' => 'E02006277',
        '5LT' => 'E02006280',
        '5LU' => 'E02006280',
        '5LW' => 'E02006277',
        '5LX' => 'E02006280',
        '5LY' => 'E02006280',
        '5LZ' => 'E02006280',
        '5NA' => 'E02006280',
        '5NB' => 'E02006280',
        '5ND' => 'E02006280',
        '5NE' => 'E02006280',
        '5NF' => 'E02006280',
        '5NG' => 'E02006278',
        '5NH' => 'E02006280',
        '5NJ' => 'E02006280',
        '5NL' => 'E02006280',
        '5NN' => 'E02006280',
        '5NP' => 'E02006280',
        '5NQ' => 'E02006280',
        '5NR' => 'E02006280',
        '5NS' => 'E02006280',
        '5NT' => 'E02006280',
        '5NU' => 'E02006280',
        '5NW' => 'E02006280',
        '5NX' => 'E02006280',
        '5NY' => 'E02006280',
        '5NZ' => 'E02006281',
        '5PA' => 'E02006280',
        '5PB' => 'E02006277',
        '5PD' => 'E02006280',
        '5PE' => 'E02006280',
        '5PF' => 'E02006280',
        '5PG' => 'E02006280',
        '5PH' => 'E02006279',
        '5PJ' => 'E02006280',
        '5PL' => 'E02006280',
        '5PN' => 'E02006280',
        '5PP' => 'E02006280',
        '5PQ' => 'E02006280',
        '5PR' => 'E02006280',
        '5PS' => 'E02006280',
        '5PT' => 'E02006280',
        '5PU' => 'E02006280',
        '5PW' => 'E02006280',
        '5PX' => 'E02006280',
        '5PY' => 'E02006280',
        '5PZ' => 'E02006280',
        '5QA' => 'E02006280',
        '5QB' => 'E02006280',
        '5QD' => 'E02006280',
        '5QE' => 'E02006280',
        '5QF' => 'E02006280',
        '5QG' => 'E02006282',
        '5QH' => 'E02006280',
        '5QJ' => 'E02006280',
        '5QL' => 'E02006280',
        '5QN' => 'E02006280',
        '5QP' => 'E02006280',
        '5QQ' => 'E02006280',
        '5QR' => 'E02006280',
        '5QS' => 'E02006280',
        '5QT' => 'E02006280',
        '5QU' => 'E02006280',
        '5QW' => 'E02006280',
        '5QX' => 'E02006280',
        '5QY' => 'E02006280',
        '5QZ' => 'E02006280',
        '5RA' => 'E02006280',
        '5RB' => 'E02006280',
        '5RD' => 'E02006280',
        '5RE' => 'E02006280',
        '5RF' => 'E02006280',
        '5RG' => 'E02006280',
        '5RH' => 'E02006280',
        '5RJ' => 'E02006280',
        '5RL' => 'E02006280',
        '5RN' => 'E02006280',
        '5RP' => 'E02006280',
        '5RQ' => 'E02006280',
        '5RR' => 'E02006278',
        '5RT' => 'E02006280',
        '5RU' => 'E02006280',
        '5RW' => 'E02006280',
        '5RX' => 'E02006280',
        '5RY' => 'E02006280',
        '5RZ' => 'E02006280',
        '5SA' => 'E02006280',
        '5SB' => 'E02006280',
        '5SD' => 'E02006280',
        '5SE' => 'E02006280',
        '5SF' => 'E02006280',
        '5SG' => 'E02006280',
        '5SH' => 'E02006280',
        '5SJ' => 'E02006280',
        '5SL' => 'E02006280',
        '5SN' => 'E02006280',
        '5SP' => 'E02006280',
        '5SQ' => 'E02006280',
        '5SR' => 'E02006280',
        '5SS' => 'E02006280',
        '5ST' => 'E02006280',
        '5SU' => 'E02006278',
        '5SW' => 'E02006280',
        '5SX' => 'E02006280',
        '5SY' => 'E02006280',
        '5SZ' => 'E02006280',
        '5TA' => 'E02006280',
        '5TX' => 'E02006278',
        '5TZ' => 'E02006278',
        '5WB' => 'E02006278',
        '5WD' => 'E02006278',
        '5WH' => 'E02006278',
        '5WW' => 'E02006278',
        '5WX' => 'E02006278',
        '5WY' => 'E02006278',
        '5WZ' => 'E02006278',
        '5ZB' => 'E02006278',
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