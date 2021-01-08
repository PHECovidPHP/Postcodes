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
final class TN18
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '4AA' => 'E02005175',
        '4AB' => 'E02005175',
        '4AD' => 'E02005175',
        '4AE' => 'E02005175',
        '4AF' => 'E02005175',
        '4AG' => 'E02005175',
        '4AH' => 'E02005175',
        '4AJ' => 'E02005175',
        '4AL' => 'E02005175',
        '4AN' => 'E02005175',
        '4AP' => 'E02005175',
        '4AQ' => 'E02005175',
        '4AR' => 'E02005175',
        '4AS' => 'E02005175',
        '4AT' => 'E02005175',
        '4AU' => 'E02005175',
        '4AW' => 'E02005175',
        '4AX' => 'E02005175',
        '4AY' => 'E02005175',
        '4AZ' => 'E02005175',
        '4BA' => 'E02005175',
        '4BB' => 'E02005175',
        '4BD' => 'E02005175',
        '4BE' => 'E02005175',
        '4BF' => 'E02005175',
        '4BG' => 'E02005175',
        '4BH' => 'E02005175',
        '4BJ' => 'E02005175',
        '4BL' => 'E02005175',
        '4BN' => 'E02005175',
        '4BP' => 'E02005175',
        '4BQ' => 'E02005175',
        '4BS' => 'E02005175',
        '4BT' => 'E02005175',
        '4BU' => 'E02005175',
        '4BW' => 'E02005175',
        '4BX' => 'E02005175',
        '4BY' => 'E02005175',
        '4BZ' => 'E02005175',
        '4DA' => 'E02005175',
        '4DB' => 'E02005175',
        '4DD' => 'E02005175',
        '4DE' => 'E02005175',
        '4DF' => 'E02005175',
        '4DG' => 'E02005175',
        '4DH' => 'E02005175',
        '4DJ' => 'E02005175',
        '4DL' => 'E02005175',
        '4DN' => 'E02005175',
        '4DP' => 'E02005175',
        '4DQ' => 'E02005175',
        '4DR' => 'E02005175',
        '4DS' => 'E02005175',
        '4DT' => 'E02005175',
        '4DU' => 'E02005175',
        '4DW' => 'E02005175',
        '4DX' => 'E02005175',
        '4DY' => 'E02005175',
        '4DZ' => 'E02005175',
        '4EA' => 'E02005175',
        '4EB' => 'E02005175',
        '4ED' => 'E02005175',
        '4EE' => 'E02005175',
        '4EF' => 'E02005175',
        '4EG' => 'E02005175',
        '4EH' => 'E02005175',
        '4EJ' => 'E02005175',
        '4EL' => 'E02005174',
        '4EN' => 'E02005175',
        '4EP' => 'E02005175',
        '4EQ' => 'E02005175',
        '4ER' => 'E02005175',
        '4ES' => 'E02005175',
        '4ET' => 'E02005175',
        '4EU' => 'E02005175',
        '4EW' => 'E02005175',
        '4EX' => 'E02005175',
        '4EY' => 'E02005175',
        '4EZ' => 'E02005175',
        '4FA' => 'E02005175',
        '4FE' => 'E02005175',
        '4HA' => 'E02005175',
        '4HB' => 'E02005175',
        '4HD' => 'E02005175',
        '4HE' => 'E02005175',
        '4HF' => 'E02005175',
        '4HG' => 'E02005175',
        '4HH' => 'E02005175',
        '4HJ' => 'E02005175',
        '4HL' => 'E02005175',
        '4HN' => 'E02005175',
        '4HP' => 'E02005175',
        '4HQ' => 'E02005175',
        '4HR' => 'E02005175',
        '4HS' => 'E02005175',
        '4HT' => 'E02005175',
        '4HU' => 'E02005175',
        '4HW' => 'E02005175',
        '4HX' => 'E02005175',
        '4HY' => 'E02005175',
        '4HZ' => 'E02005175',
        '4JA' => 'E02005175',
        '4JB' => 'E02005175',
        '4JD' => 'E02005175',
        '4JE' => 'E02005175',
        '4JG' => 'E02005175',
        '4JH' => 'E02005175',
        '4JJ' => 'E02005175',
        '4JN' => 'E02005175',
        '4JP' => 'E02005175',
        '4JR' => 'E02005175',
        '4JS' => 'E02005175',
        '4JT' => 'E02005175',
        '4JU' => 'E02005175',
        '4JW' => 'E02005175',
        '4JX' => 'E02005175',
        '4JY' => 'E02005175',
        '4JZ' => 'E02005175',
        '4LA' => 'E02005175',
        '4LB' => 'E02005175',
        '4LD' => 'E02005175',
        '4LE' => 'E02005175',
        '4LF' => 'E02005175',
        '4LG' => 'E02005175',
        '4LH' => 'E02005175',
        '4LJ' => 'E02005175',
        '4LL' => 'E02005175',
        '4LN' => 'E02005175',
        '4LP' => 'E02005175',
        '4LQ' => 'E02005175',
        '4LR' => 'E02005175',
        '4LS' => 'E02005175',
        '4LT' => 'E02005175',
        '4LU' => 'E02005175',
        '4LW' => 'E02005175',
        '4LX' => 'E02005175',
        '4LY' => 'E02005175',
        '4LZ' => 'E02005175',
        '4NA' => 'E02005175',
        '4NB' => 'E02005175',
        '4ND' => 'E02005175',
        '4NE' => 'E02005175',
        '4NG' => 'E02005175',
        '4NH' => 'E02005175',
        '4NJ' => 'E02005175',
        '4NL' => 'E02005175',
        '4NN' => 'E02005175',
        '4NP' => 'E02005175',
        '4NQ' => 'E02005175',
        '4NR' => 'E02005175',
        '4NS' => 'E02005175',
        '4NT' => 'E02005175',
        '4NU' => 'E02005175',
        '4NW' => 'E02005175',
        '4NX' => 'E02005175',
        '4NY' => 'E02005175',
        '4NZ' => 'E02005175',
        '4PA' => 'E02005175',
        '4PB' => 'E02005175',
        '4PD' => 'E02005175',
        '4PE' => 'E02005175',
        '4PF' => 'E02005175',
        '4PG' => 'E02005175',
        '4PQ' => 'E02005175',
        '4PS' => 'E02005175',
        '4PT' => 'E02005175',
        '4PU' => 'E02005175',
        '4PW' => 'E02005175',
        '4PX' => 'E02005175',
        '4PY' => 'E02005175',
        '4PZ' => 'E02005175',
        '4QA' => 'E02005175',
        '4QB' => 'E02005175',
        '4QD' => 'E02005175',
        '4QE' => 'E02005175',
        '4QF' => 'E02005174',
        '4QG' => 'E02005175',
        '4QH' => 'E02005175',
        '4QJ' => 'E02005175',
        '4QN' => 'E02005175',
        '4QP' => 'E02005175',
        '4QQ' => 'E02005175',
        '4QR' => 'E02005175',
        '4QS' => 'E02005175',
        '4QT' => 'E02005175',
        '4QU' => 'E02005175',
        '4QW' => 'E02005175',
        '4QX' => 'E02005175',
        '4QY' => 'E02005175',
        '4QZ' => 'E02005175',
        '4RA' => 'E02005175',
        '4RB' => 'E02005175',
        '4RD' => 'E02005175',
        '4RE' => 'E02005175',
        '4RF' => 'E02005175',
        '4RG' => 'E02005175',
        '4RH' => 'E02005175',
        '4RJ' => 'E02005175',
        '4RL' => 'E02005175',
        '4RN' => 'E02005175',
        '4RP' => 'E02005175',
        '4RR' => 'E02005175',
        '4RS' => 'E02005175',
        '4RT' => 'E02005175',
        '4RU' => 'E02004392',
        '4RW' => 'E02005175',
        '4RX' => 'E02004392',
        '4SX' => 'E02005175',
        '4TZ' => 'E02005175',
        '4WA' => 'E02005174',
        '4WB' => 'E02005174',
        '4WT' => 'E02005175',
        '4XA' => 'E02005175',
        '4XB' => 'E02005175',
        '4XD' => 'E02005175',
        '4XE' => 'E02005175',
        '4XG' => 'E02005175',
        '4XH' => 'E02005175',
        '4XJ' => 'E02005175',
        '4XL' => 'E02005175',
        '4XN' => 'E02005175',
        '4XP' => 'E02005175',
        '4XR' => 'E02005175',
        '4XS' => 'E02005175',
        '4XT' => 'E02005175',
        '4XU' => 'E02005175',
        '4YA' => 'E02005174',
        '4YF' => 'E02005175',
        '4YQ' => 'E02005174',
        '4ZH' => 'E02005174',
        '4ZJ' => 'E02005174',
        '4ZL' => 'E02005174',
        '4ZN' => 'E02005174',
        '4ZP' => 'E02005174',
        '4ZQ' => 'E02005174',
        '4ZR' => 'E02005175',
        '4ZS' => 'E02005174',
        '4ZT' => 'E02005175',
        '4ZU' => 'E02005175',
        '4ZW' => 'E02005175',
        '4ZX' => 'E02005175',
        '4ZY' => 'E02005175',
        '4ZZ' => 'E02005174',
        '5AA' => 'E02005175',
        '5AB' => 'E02005175',
        '5AD' => 'E02005175',
        '5AE' => 'E02005175',
        '5AF' => 'E02005175',
        '5AG' => 'E02005175',
        '5AH' => 'E02005174',
        '5AJ' => 'E02005175',
        '5AL' => 'E02005175',
        '5AN' => 'E02005175',
        '5AP' => 'E02005175',
        '5AQ' => 'E02005175',
        '5AR' => 'E02005175',
        '5AS' => 'E02005175',
        '5AT' => 'E02005175',
        '5AU' => 'E02005175',
        '5AW' => 'E02005175',
        '5AX' => 'E02005175',
        '5AY' => 'E02005175',
        '5AZ' => 'E02005175',
        '5BA' => 'E02005175',
        '5BB' => 'E02005175',
        '5BD' => 'E02005175',
        '5DA' => 'E02005175',
        '5DB' => 'E02005175',
        '5DD' => 'E02005175',
        '5DE' => 'E02005175',
        '5DF' => 'E02005175',
        '5DG' => 'E02005175',
        '5DH' => 'E02005175',
        '5DJ' => 'E02005175',
        '5DL' => 'E02005175',
        '5DN' => 'E02005175',
        '5DP' => 'E02005175',
        '5DR' => 'E02005175',
        '5DS' => 'E02005175',
        '5DT' => 'E02005175',
        '5DU' => 'E02005175',
        '5DW' => 'E02005175',
        '5DX' => 'E02005175',
        '5DY' => 'E02005175',
        '5DZ' => 'E02005175',
        '5EA' => 'E02005175',
        '5EB' => 'E02005175',
        '5ED' => 'E02005175',
        '5EE' => 'E02005175',
        '5EF' => 'E02005175',
        '5EG' => 'E02005175',
        '5EH' => 'E02005175',
        '5EJ' => 'E02005175',
        '5EL' => 'E02005175',
        '5EN' => 'E02005175',
        '5EP' => 'E02005175',
        '5EQ' => 'E02005175',
        '5ER' => 'E02005175',
        '5ES' => 'E02005175',
        '5ET' => 'E02005175',
        '5EU' => 'E02005175',
        '5EW' => 'E02005175',
        '5EX' => 'E02005175',
        '5EY' => 'E02005175',
        '5EZ' => 'E02005174',
        '5HA' => 'E02005175',
        '5HB' => 'E02005175',
        '5HP' => 'E02005175',
        '5HR' => 'E02005175',
        '5HS' => 'E02005175',
        '5HT' => 'E02005175',
        '5HU' => 'E02005175',
        '5HX' => 'E02005175',
        '5HY' => 'E02005175',
        '5HZ' => 'E02005175',
        '5JA' => 'E02005175',
        '5JB' => 'E02005175',
        '5JD' => 'E02005175',
        '5JE' => 'E02005175',
        '5JF' => 'E02005175',
        '5JG' => 'E02005175',
        '5JH' => 'E02005175',
        '5JJ' => 'E02005175',
        '5JL' => 'E02005175',
        '5JN' => 'E02005175',
        '5JP' => 'E02005175',
        '5JQ' => 'E02005175',
        '5JR' => 'E02005175',
        '5JS' => 'E02005175',
        '5JT' => 'E02005175',
        '5JU' => 'E02005175',
        '5JW' => 'E02005175',
        '5JX' => 'E02005175',
        '5JY' => 'E02005175',
        '5JZ' => 'E02005175',
        '5LA' => 'E02005175',
        '5LB' => 'E02005175',
        '5LD' => 'E02005175',
        '5LE' => 'E02005175',
        '5LF' => 'E02005175',
        '5LG' => 'E02005175',
        '5LH' => 'E02005175',
        '5LJ' => 'E02005175',
        '5LL' => 'E02005175',
        '5LN' => 'E02005175',
        '5LP' => 'E02005175',
        '5LQ' => 'E02005175',
        '5LR' => 'E02005175',
        '5LS' => 'E02005175',
        '5LT' => 'E02005175',
        '5LU' => 'E02005175',
        '5LW' => 'E02005175',
        '5LX' => 'E02005175',
        '5LZ' => 'E02005175',
        '5ND' => 'E02005175',
        '5NJ' => 'E02005175',
        '5NL' => 'E02005175',
        '5NN' => 'E02005175',
        '5NP' => 'E02005175',
        '5NR' => 'E02005175',
        '5NS' => 'E02005175',
        '5NT' => 'E02005175',
        '5NU' => 'E02005175',
        '5NX' => 'E02005175',
        '5NY' => 'E02005175',
        '5PA' => 'E02005175',
        '5PB' => 'E02005175',
        '5PD' => 'E02005175',
        '5PE' => 'E02005175',
        '5PG' => 'E02005175',
        '5PH' => 'E02005175',
        '5PJ' => 'E02005175',
        '5PL' => 'E02005008',
        '5PN' => 'E02005008',
        '5PP' => 'E02004393',
        '5PQ' => 'E02005175',
        '5PR' => 'E02005175',
        '5PS' => 'E02005175',
        '5PT' => 'E02005175',
        '5PU' => 'E02005175',
        '5PW' => 'E02005008',
        '5PX' => 'E02005008',
        '5PY' => 'E02005008',
        '5QA' => 'E02005008',
        '5QB' => 'E02005008',
        '5QD' => 'E02005008',
        '5QE' => 'E02005008',
        '5QG' => 'E02005008',
        '5QQ' => 'E02005008',
        '5TF' => 'E02005008',
        '5WA' => 'E02005008',
        '5WB' => 'E02005174',
        '5WD' => 'E02005174',
        '5WE' => 'E02005008',
        '5WX' => 'E02005174',
        '5WY' => 'E02005174',
        '5WZ' => 'E02005174',
        '5ZG' => 'E02005174',
        '5ZH' => 'E02005174',
        '5ZJ' => 'E02005175',
        '5ZL' => 'E02005174',
        '5ZN' => 'E02005175',
        '5ZP' => 'E02005008',
        '5ZQ' => 'E02005174',
        '5ZR' => 'E02005174',
        '5ZS' => 'E02005175',
        '5ZT' => 'E02005175',
        '5ZU' => 'E02005175',
        '5ZW' => 'E02005175',
        '5ZX' => 'E02005174',
        '5ZY' => 'E02005174',
        '5ZZ' => 'E02005174',
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
