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
final class NE45
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '5AA' => 'E02005732',
        '5AB' => 'E02005732',
        '5AD' => 'E02005732',
        '5AE' => 'E02005732',
        '5AF' => 'E02005732',
        '5AG' => 'E02005732',
        '5AH' => 'E02005732',
        '5AJ' => 'E02005732',
        '5AL' => 'E02005732',
        '5AN' => 'E02005732',
        '5AP' => 'E02005732',
        '5AQ' => 'E02005732',
        '5AR' => 'E02005732',
        '5AS' => 'E02005732',
        '5AT' => 'E02005732',
        '5AU' => 'E02005732',
        '5AW' => 'E02005732',
        '5AX' => 'E02005732',
        '5AY' => 'E02005732',
        '5AZ' => 'E02005732',
        '5BA' => 'E02005732',
        '5BB' => 'E02005732',
        '5BD' => 'E02005732',
        '5BE' => 'E02005732',
        '5BF' => 'E02005732',
        '5BG' => 'E02005732',
        '5BH' => 'E02005732',
        '5BJ' => 'E02005732',
        '5BL' => 'E02005732',
        '5BN' => 'E02005732',
        '5BP' => 'E02005732',
        '5BQ' => 'E02005732',
        '5BS' => 'E02005732',
        '5BT' => 'E02005732',
        '5BU' => 'E02005732',
        '5BW' => 'E02005732',
        '5BX' => 'E02005732',
        '5BY' => 'E02005732',
        '5BZ' => 'E02005732',
        '5DA' => 'E02005732',
        '5DB' => 'E02005732',
        '5DD' => 'E02005732',
        '5DE' => 'E02005732',
        '5DF' => 'E02005732',
        '5DG' => 'E02005732',
        '5DH' => 'E02005732',
        '5DJ' => 'E02005732',
        '5DL' => 'E02005732',
        '5DN' => 'E02005732',
        '5DP' => 'E02005732',
        '5DQ' => 'E02005732',
        '5DR' => 'E02005732',
        '5DS' => 'E02005732',
        '5DT' => 'E02005732',
        '5DU' => 'E02005732',
        '5DW' => 'E02005732',
        '5DX' => 'E02005732',
        '5DY' => 'E02005732',
        '5DZ' => 'E02005732',
        '5EA' => 'E02005732',
        '5EB' => 'E02005732',
        '5ED' => 'E02005732',
        '5EE' => 'E02005732',
        '5EF' => 'E02005732',
        '5EG' => 'E02005732',
        '5EH' => 'E02005732',
        '5EJ' => 'E02005732',
        '5EL' => 'E02005732',
        '5EN' => 'E02005732',
        '5EP' => 'E02005732',
        '5EQ' => 'E02005732',
        '5ER' => 'E02005732',
        '5ES' => 'E02005732',
        '5ET' => 'E02005732',
        '5EU' => 'E02005732',
        '5EW' => 'E02005732',
        '5EX' => 'E02005732',
        '5HA' => 'E02005732',
        '5HB' => 'E02005732',
        '5HD' => 'E02005732',
        '5HE' => 'E02005732',
        '5HF' => 'E02005732',
        '5HG' => 'E02005732',
        '5HH' => 'E02005732',
        '5HJ' => 'E02005732',
        '5HL' => 'E02005732',
        '5HN' => 'E02005732',
        '5HP' => 'E02005732',
        '5HQ' => 'E02005732',
        '5HR' => 'E02005732',
        '5HS' => 'E02005732',
        '5HT' => 'E02005732',
        '5HU' => 'E02005732',
        '5HW' => 'E02005732',
        '5HX' => 'E02005732',
        '5HY' => 'E02005732',
        '5HZ' => 'E02005732',
        '5JA' => 'E02005732',
        '5JB' => 'E02005732',
        '5JD' => 'E02005732',
        '5JE' => 'E02005732',
        '5JF' => 'E02005732',
        '5JG' => 'E02005732',
        '5JH' => 'E02005732',
        '5JJ' => 'E02005732',
        '5JL' => 'E02005732',
        '5JN' => 'E02005732',
        '5JP' => 'E02005732',
        '5JQ' => 'E02005732',
        '5JR' => 'E02005732',
        '5JS' => 'E02005732',
        '5JT' => 'E02005732',
        '5JW' => 'E02005732',
        '5JX' => 'E02005732',
        '5LA' => 'E02005732',
        '5LB' => 'E02005732',
        '5LD' => 'E02005732',
        '5LE' => 'E02005732',
        '5LF' => 'E02005732',
        '5LG' => 'E02005732',
        '5LH' => 'E02005732',
        '5LJ' => 'E02005732',
        '5LL' => 'E02005732',
        '5LN' => 'E02005732',
        '5LP' => 'E02005732',
        '5LQ' => 'E02005732',
        '5LR' => 'E02005732',
        '5LS' => 'E02005732',
        '5LT' => 'E02005732',
        '5LU' => 'E02005732',
        '5LW' => 'E02005732',
        '5LX' => 'E02005732',
        '5LY' => 'E02005732',
        '5LZ' => 'E02005732',
        '5NA' => 'E02005732',
        '5NB' => 'E02005732',
        '5ND' => 'E02005732',
        '5NE' => 'E02005732',
        '5NF' => 'E02005732',
        '5NG' => 'E02005732',
        '5NH' => 'E02005732',
        '5NJ' => 'E02005732',
        '5NP' => 'E02005732',
        '5NQ' => 'E02005732',
        '5NR' => 'E02005732',
        '5NS' => 'E02005732',
        '5NT' => 'E02005732',
        '5NU' => 'E02005732',
        '5PA' => 'E02005732',
        '5PB' => 'E02005732',
        '5PD' => 'E02005732',
        '5PE' => 'E02005732',
        '5PF' => 'E02005732',
        '5PG' => 'E02005732',
        '5PH' => 'E02005727',
        '5PJ' => 'E02005732',
        '5PL' => 'E02005732',
        '5PN' => 'E02005732',
        '5PP' => 'E02005732',
        '5PQ' => 'E02005732',
        '5PR' => 'E02005732',
        '5PS' => 'E02005732',
        '5PT' => 'E02005732',
        '5PU' => 'E02005726',
        '5PW' => 'E02005732',
        '5PX' => 'E02005727',
        '5PY' => 'E02005732',
        '5PZ' => 'E02005727',
        '5QA' => 'E02005727',
        '5QB' => 'E02005732',
        '5QD' => 'E02005732',
        '5QE' => 'E02005732',
        '5QF' => 'E02005732',
        '5QG' => 'E02005732',
        '5QT' => 'E02005732',
        '5QU' => 'E02005732',
        '5QX' => 'E02005732',
        '5QY' => 'E02005732',
        '5QZ' => 'E02005732',
        '5RA' => 'E02005732',
        '5RB' => 'E02005732',
        '5RD' => 'E02005732',
        '5RE' => 'E02005732',
        '5RF' => 'E02005732',
        '5RG' => 'E02005732',
        '5RH' => 'E02005732',
        '5RJ' => 'E02005732',
        '5RL' => 'E02005732',
        '5RN' => 'E02005732',
        '5RP' => 'E02005732',
        '5RQ' => 'E02005732',
        '5RR' => 'E02005732',
        '5RS' => 'E02005732',
        '5RT' => 'E02005732',
        '5RU' => 'E02005732',
        '5RW' => 'E02005732',
        '5RX' => 'E02005732',
        '5RY' => 'E02005732',
        '5RZ' => 'E02005732',
        '5SA' => 'E02005732',
        '5SB' => 'E02005732',
        '5SD' => 'E02005732',
        '5TA' => 'E02005732',
        '5WU' => 'E02005732',
        '5WW' => 'E02005732',
        '5WX' => 'E02005732',
        '5WY' => 'E02005732',
        '5WZ' => 'E02005732',
        '5YH' => 'E02005732',
        '5YJ' => 'E02005732',
        '5YL' => 'E02005732',
        '5YN' => 'E02005732',
        '5YP' => 'E02005732',
        '5YQ' => 'E02005732',
        '5YR' => 'E02005732',
        '5YS' => 'E02005732',
        '5YT' => 'E02005732',
        '5YU' => 'E02005732',
        '5YW' => 'E02005732',
        '5YX' => 'E02005732',
        '5YY' => 'E02005732',
        '5YZ' => 'E02005732',
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