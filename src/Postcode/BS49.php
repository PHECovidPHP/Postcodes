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
final class BS49
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '4AA' => 'E02003076',
        '4AB' => 'E02003076',
        '4AD' => 'E02003076',
        '4AE' => 'E02003076',
        '4AF' => 'E02003076',
        '4AG' => 'E02003076',
        '4AH' => 'E02003076',
        '4AJ' => 'E02003076',
        '4AL' => 'E02003076',
        '4AN' => 'E02003076',
        '4AP' => 'E02003076',
        '4AQ' => 'E02003076',
        '4AR' => 'E02003076',
        '4AS' => 'E02003076',
        '4AT' => 'E02003076',
        '4AU' => 'E02003076',
        '4AW' => 'E02003076',
        '4AX' => 'E02003076',
        '4AY' => 'E02003076',
        '4AZ' => 'E02003076',
        '4BA' => 'E02003076',
        '4BB' => 'E02003076',
        '4BD' => 'E02003076',
        '4BE' => 'E02003076',
        '4BF' => 'E02003076',
        '4BG' => 'E02003076',
        '4BH' => 'E02003076',
        '4BJ' => 'E02003076',
        '4BL' => 'E02003076',
        '4BN' => 'E02003076',
        '4BP' => 'E02003076',
        '4BQ' => 'E02003076',
        '4BR' => 'E02003076',
        '4BS' => 'E02003076',
        '4BT' => 'E02003076',
        '4BU' => 'E02003076',
        '4BW' => 'E02003076',
        '4BX' => 'E02003076',
        '4BY' => 'E02003076',
        '4BZ' => 'E02003076',
        '4DA' => 'E02003076',
        '4DB' => 'E02003076',
        '4DD' => 'E02003076',
        '4DE' => 'E02003076',
        '4DF' => 'E02003076',
        '4DG' => 'E02003076',
        '4DH' => 'E02003076',
        '4DJ' => 'E02003076',
        '4DL' => 'E02003076',
        '4DN' => 'E02003076',
        '4DP' => 'E02003076',
        '4DQ' => 'E02003076',
        '4DR' => 'E02003076',
        '4DS' => 'E02003076',
        '4DT' => 'E02003076',
        '4DU' => 'E02003076',
        '4DW' => 'E02003076',
        '4DX' => 'E02003076',
        '4DY' => 'E02003076',
        '4DZ' => 'E02003076',
        '4EA' => 'E02003076',
        '4EB' => 'E02003076',
        '4ED' => 'E02003076',
        '4EE' => 'E02003076',
        '4EF' => 'E02003076',
        '4EG' => 'E02003076',
        '4EH' => 'E02003076',
        '4EJ' => 'E02003076',
        '4EL' => 'E02003076',
        '4EN' => 'E02003076',
        '4EP' => 'E02003076',
        '4EQ' => 'E02003076',
        '4ER' => 'E02003076',
        '4ES' => 'E02003076',
        '4ET' => 'E02003076',
        '4EU' => 'E02003076',
        '4EW' => 'E02003076',
        '4EX' => 'E02003076',
        '4EY' => 'E02003076',
        '4EZ' => 'E02003076',
        '4FB' => 'E02003085',
        '4FD' => 'E02003076',
        '4FE' => 'E02003076',
        '4FF' => 'E02003076',
        '4FG' => 'E02003076',
        '4FH' => 'E02003076',
        '4FJ' => 'E02003076',
        '4FL' => 'E02003076',
        '4FN' => 'E02003076',
        '4FP' => 'E02003076',
        '4FQ' => 'E02003076',
        '4FR' => 'E02003076',
        '4FS' => 'E02003076',
        '4FT' => 'E02003076',
        '4FU' => 'E02003076',
        '4FW' => 'E02003076',
        '4FY' => 'E02003076',
        '4FZ' => 'E02003076',
        '4HA' => 'E02003076',
        '4HB' => 'E02003076',
        '4HD' => 'E02003076',
        '4HE' => 'E02003076',
        '4HF' => 'E02003076',
        '4HG' => 'E02003076',
        '4HH' => 'E02003076',
        '4HJ' => 'E02003076',
        '4HL' => 'E02003076',
        '4HN' => 'E02003076',
        '4HP' => 'E02003076',
        '4HQ' => 'E02003076',
        '4HR' => 'E02003076',
        '4HS' => 'E02003076',
        '4HT' => 'E02003076',
        '4HU' => 'E02003076',
        '4HW' => 'E02003076',
        '4HX' => 'E02003076',
        '4HY' => 'E02003076',
        '4HZ' => 'E02003076',
        '4JA' => 'E02003076',
        '4JB' => 'E02003076',
        '4JD' => 'E02003076',
        '4JE' => 'E02003076',
        '4JF' => 'E02003076',
        '4JG' => 'E02003076',
        '4JH' => 'E02003076',
        '4JJ' => 'E02003076',
        '4JL' => 'E02003076',
        '4JN' => 'E02003076',
        '4JP' => 'E02003076',
        '4JQ' => 'E02003076',
        '4JR' => 'E02003076',
        '4JS' => 'E02003076',
        '4JT' => 'E02003076',
        '4JU' => 'E02003076',
        '4JW' => 'E02003076',
        '4JX' => 'E02003076',
        '4JY' => 'E02003076',
        '4JZ' => 'E02003076',
        '4LA' => 'E02003076',
        '4LB' => 'E02003076',
        '4LD' => 'E02003076',
        '4LE' => 'E02003076',
        '4LF' => 'E02003076',
        '4LG' => 'E02003076',
        '4LH' => 'E02003076',
        '4LJ' => 'E02003076',
        '4LL' => 'E02003076',
        '4LN' => 'E02003076',
        '4LP' => 'E02003076',
        '4LQ' => 'E02003076',
        '4LR' => 'E02003076',
        '4LS' => 'E02003076',
        '4LT' => 'E02003076',
        '4LU' => 'E02003076',
        '4LW' => 'E02003076',
        '4LX' => 'E02003076',
        '4LY' => 'E02003076',
        '4LZ' => 'E02003076',
        '4NA' => 'E02003076',
        '4NB' => 'E02003076',
        '4ND' => 'E02003076',
        '4NE' => 'E02003076',
        '4NF' => 'E02003076',
        '4NG' => 'E02003076',
        '4NH' => 'E02003076',
        '4NJ' => 'E02003076',
        '4NL' => 'E02003076',
        '4NN' => 'E02003076',
        '4NP' => 'E02003076',
        '4NQ' => 'E02003076',
        '4NR' => 'E02003076',
        '4NS' => 'E02003076',
        '4NT' => 'E02003076',
        '4NU' => 'E02003076',
        '4NW' => 'E02003076',
        '4NX' => 'E02003076',
        '4NY' => 'E02003076',
        '4NZ' => 'E02003076',
        '4PA' => 'E02003076',
        '4PB' => 'E02003076',
        '4PD' => 'E02003076',
        '4PE' => 'E02003076',
        '4PF' => 'E02003076',
        '4PG' => 'E02003076',
        '4PH' => 'E02003076',
        '4PJ' => 'E02003076',
        '4PL' => 'E02003076',
        '4PN' => 'E02003076',
        '4PP' => 'E02003076',
        '4PQ' => 'E02003076',
        '4PR' => 'E02003076',
        '4PS' => 'E02003076',
        '4PT' => 'E02003076',
        '4PU' => 'E02003076',
        '4PW' => 'E02003076',
        '4PX' => 'E02003076',
        '4PY' => 'E02003076',
        '4PZ' => 'E02003076',
        '4QA' => 'E02003076',
        '4QB' => 'E02003076',
        '4QD' => 'E02003076',
        '4QE' => 'E02003076',
        '4QF' => 'E02003076',
        '4QG' => 'E02003076',
        '4QH' => 'E02003076',
        '4QJ' => 'E02003076',
        '4QL' => 'E02003076',
        '4QN' => 'E02003076',
        '4QQ' => 'E02003076',
        '4QR' => 'E02003076',
        '4QS' => 'E02003076',
        '4QT' => 'E02003076',
        '4QU' => 'E02003076',
        '4QX' => 'E02003076',
        '4QY' => 'E02003076',
        '4QZ' => 'E02003076',
        '4RA' => 'E02003076',
        '4RB' => 'E02003076',
        '4RE' => 'E02003076',
        '4RF' => 'E02003076',
        '4RG' => 'E02003076',
        '4RH' => 'E02003076',
        '4RJ' => 'E02003076',
        '4RL' => 'E02003076',
        '4RN' => 'E02003076',
        '4RP' => 'E02003085',
        '4RQ' => 'E02003076',
        '4RR' => 'E02003076',
        '4RS' => 'E02003076',
        '4RT' => 'E02003076',
        '4RU' => 'E02003076',
        '4RW' => 'E02003076',
        '4RX' => 'E02003085',
        '4RY' => 'E02003076',
        '4RZ' => 'E02003076',
        '4SB' => 'E02003076',
        '4TA' => 'E02003076',
        '4TB' => 'E02003076',
        '4UA' => 'E02003076',
        '4WA' => 'E02003076',
        '4WB' => 'E02003076',
        '4WD' => 'E02003076',
        '4WH' => 'E02003076',
        '4WJ' => 'E02003076',
        '4WL' => 'E02003076',
        '4WN' => 'E02003076',
        '4WP' => 'E02003076',
        '4WQ' => 'E02003076',
        '4WR' => 'E02003076',
        '4WS' => 'E02003076',
        '4WT' => 'E02003076',
        '4WU' => 'E02003076',
        '4WW' => 'E02003076',
        '4WX' => 'E02003076',
        '4WY' => 'E02003076',
        '4WZ' => 'E02003076',
        '4XN' => 'E02003076',
        '4XZ' => 'E02003076',
        '4YA' => 'E02003076',
        '4YB' => 'E02003085',
        '4YD' => 'E02003085',
        '4YE' => 'E02003085',
        '4YF' => 'E02003085',
        '4YG' => 'E02003076',
        '4YH' => 'E02003076',
        '4YY' => 'E02003076',
        '4YZ' => 'E02003076',
        '4ZQ' => 'E02003076',
        '4ZX' => 'E02003076',
        '5AA' => 'E02003078',
        '5AB' => 'E02003078',
        '5AD' => 'E02003078',
        '5AE' => 'E02003078',
        '5AF' => 'E02003078',
        '5AG' => 'E02003078',
        '5AH' => 'E02003078',
        '5AJ' => 'E02003078',
        '5AL' => 'E02003078',
        '5AN' => 'E02003078',
        '5AP' => 'E02003078',
        '5AQ' => 'E02003078',
        '5AR' => 'E02003078',
        '5AS' => 'E02003078',
        '5AT' => 'E02003085',
        '5AU' => 'E02003076',
        '5AW' => 'E02003078',
        '5AX' => 'E02003076',
        '5AY' => 'E02003078',
        '5AZ' => 'E02003078',
        '5BA' => 'E02003078',
        '5BB' => 'E02003078',
        '5BD' => 'E02003078',
        '5BE' => 'E02003078',
        '5BF' => 'E02003078',
        '5BG' => 'E02003078',
        '5BH' => 'E02003078',
        '5BJ' => 'E02003078',
        '5BL' => 'E02003078',
        '5BN' => 'E02003078',
        '5BP' => 'E02003078',
        '5BQ' => 'E02003078',
        '5BS' => 'E02003078',
        '5BT' => 'E02003078',
        '5BU' => 'E02003078',
        '5BW' => 'E02003078',
        '5BX' => 'E02003078',
        '5BY' => 'E02003078',
        '5BZ' => 'E02003078',
        '5DA' => 'E02003078',
        '5DB' => 'E02003078',
        '5DE' => 'E02003078',
        '5DF' => 'E02003078',
        '5DG' => 'E02003078',
        '5DH' => 'E02003078',
        '5DJ' => 'E02003078',
        '5DL' => 'E02003078',
        '5DN' => 'E02003078',
        '5DP' => 'E02003078',
        '5DQ' => 'E02003078',
        '5DR' => 'E02003078',
        '5DS' => 'E02003078',
        '5DU' => 'E02003078',
        '5DW' => 'E02003078',
        '5DX' => 'E02003078',
        '5DY' => 'E02003078',
        '5DZ' => 'E02003078',
        '5EA' => 'E02003078',
        '5EB' => 'E02003078',
        '5ED' => 'E02003078',
        '5EE' => 'E02003078',
        '5EN' => 'E02003078',
        '5EP' => 'E02003078',
        '5ER' => 'E02003078',
        '5ES' => 'E02003078',
        '5EU' => 'E02003078',
        '5EW' => 'E02003076',
        '5EX' => 'E02003078',
        '5EY' => 'E02003078',
        '5EZ' => 'E02003078',
        '5FB' => 'E02003076',
        '5HA' => 'E02003078',
        '5HB' => 'E02003078',
        '5HD' => 'E02003078',
        '5HE' => 'E02003078',
        '5HF' => 'E02003078',
        '5HG' => 'E02003078',
        '5HH' => 'E02003078',
        '5HJ' => 'E02003078',
        '5HL' => 'E02003078',
        '5HN' => 'E02003078',
        '5HP' => 'E02003078',
        '5HQ' => 'E02003078',
        '5HR' => 'E02003078',
        '5HW' => 'E02003078',
        '5HY' => 'E02003078',
        '5HZ' => 'E02003078',
        '5JA' => 'E02003078',
        '5JB' => 'E02003078',
        '5JD' => 'E02003078',
        '5JE' => 'E02003078',
        '5JF' => 'E02003078',
        '5JG' => 'E02003078',
        '5JH' => 'E02003078',
        '5JJ' => 'E02003078',
        '5JL' => 'E02003078',
        '5JN' => 'E02003078',
        '5JP' => 'E02003078',
        '5JQ' => 'E02003078',
        '5JR' => 'E02003078',
        '5JS' => 'E02003078',
        '5JT' => 'E02003078',
        '5JU' => 'E02003078',
        '5JW' => 'E02003078',
        '5JX' => 'E02003078',
        '5JY' => 'E02003078',
        '5JZ' => 'E02003078',
        '5WA' => 'E02003078',
        '5WB' => 'E02003076',
        '5WD' => 'E02003076',
        '5WE' => 'E02003076',
        '5WF' => 'E02003076',
        '5WG' => 'E02003078',
        '5WL' => 'E02003076',
        '5WN' => 'E02003076',
        '5WP' => 'E02003076',
        '5WQ' => 'E02003076',
        '5WR' => 'E02003076',
        '5WS' => 'E02003076',
        '5WT' => 'E02003076',
        '5WU' => 'E02003076',
        '5WW' => 'E02003076',
        '5WX' => 'E02003076',
        '5WY' => 'E02003076',
        '5WZ' => 'E02003076',
        '5YA' => 'E02003078',
        '5YB' => 'E02003076',
        '5YD' => 'E02003076',
        '5ZN' => 'E02003076',
        '5ZQ' => 'E02003076',
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