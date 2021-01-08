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
final class EX21
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '5AA' => 'E02004229',
        '5AB' => 'E02004229',
        '5AD' => 'E02004229',
        '5AE' => 'E02004228',
        '5AF' => 'E02004232',
        '5AG' => 'E02004232',
        '5AH' => 'E02004232',
        '5AJ' => 'E02004232',
        '5AL' => 'E02004232',
        '5AN' => 'E02004229',
        '5AP' => 'E02004229',
        '5AQ' => 'E02004228',
        '5AR' => 'E02004229',
        '5AS' => 'E02004229',
        '5AT' => 'E02004229',
        '5AU' => 'E02004229',
        '5AW' => 'E02004229',
        '5AX' => 'E02004229',
        '5AY' => 'E02004229',
        '5AZ' => 'E02004228',
        '5BA' => 'E02004232',
        '5BB' => 'E02004232',
        '5BD' => 'E02004232',
        '5BE' => 'E02004232',
        '5BG' => 'E02004232',
        '5BH' => 'E02004232',
        '5BJ' => 'E02004232',
        '5BL' => 'E02004228',
        '5BN' => 'E02004228',
        '5BP' => 'E02004232',
        '5BQ' => 'E02004232',
        '5BR' => 'E02004232',
        '5BS' => 'E02004232',
        '5BT' => 'E02004232',
        '5BU' => 'E02004228',
        '5BX' => 'E02004228',
        '5BY' => 'E02004228',
        '5BZ' => 'E02004228',
        '5DA' => 'E02004228',
        '5DB' => 'E02004228',
        '5DD' => 'E02004228',
        '5DE' => 'E02004228',
        '5DF' => 'E02004228',
        '5DG' => 'E02004228',
        '5DH' => 'E02004228',
        '5DJ' => 'E02004228',
        '5DL' => 'E02004228',
        '5DN' => 'E02004228',
        '5DP' => 'E02004228',
        '5DQ' => 'E02004228',
        '5DT' => 'E02004228',
        '5DU' => 'E02004228',
        '5DW' => 'E02004228',
        '5DX' => 'E02004228',
        '5DY' => 'E02004228',
        '5DZ' => 'E02004228',
        '5EA' => 'E02004228',
        '5EB' => 'E02004228',
        '5EF' => 'E02004228',
        '5EG' => 'E02004228',
        '5EH' => 'E02004228',
        '5EJ' => 'E02004228',
        '5EL' => 'E02004228',
        '5EN' => 'E02004228',
        '5EP' => 'E02004228',
        '5EQ' => 'E02004228',
        '5ER' => 'E02004228',
        '5ES' => 'E02004228',
        '5ET' => 'E02004228',
        '5EU' => 'E02004228',
        '5EW' => 'E02004228',
        '5EX' => 'E02004228',
        '5EY' => 'E02004228',
        '5EZ' => 'E02004228',
        '5HA' => 'E02004228',
        '5HB' => 'E02004228',
        '5HD' => 'E02004228',
        '5HE' => 'E02004228',
        '5HG' => 'E02004228',
        '5HH' => 'E02004228',
        '5HJ' => 'E02004228',
        '5HL' => 'E02004228',
        '5HN' => 'E02004228',
        '5HP' => 'E02004228',
        '5HQ' => 'E02004228',
        '5HR' => 'E02004228',
        '5HS' => 'E02004228',
        '5HT' => 'E02004228',
        '5HU' => 'E02004228',
        '5HW' => 'E02004228',
        '5HX' => 'E02004226',
        '5HY' => 'E02004226',
        '5HZ' => 'E02004226',
        '5JA' => 'E02004226',
        '5JB' => 'E02004226',
        '5JD' => 'E02004226',
        '5JG' => 'E02004228',
        '5JH' => 'E02004228',
        '5JJ' => 'E02004228',
        '5JL' => 'E02004228',
        '5JN' => 'E02004228',
        '5JP' => 'E02004228',
        '5JQ' => 'E02004228',
        '5JR' => 'E02004228',
        '5JS' => 'E02004228',
        '5JT' => 'E02004228',
        '5JU' => 'E02004228',
        '5JW' => 'E02004228',
        '5JX' => 'E02004228',
        '5JY' => 'E02004228',
        '5JZ' => 'E02004228',
        '5LA' => 'E02004228',
        '5LE' => 'E02004229',
        '5LF' => 'E02004229',
        '5LH' => 'E02004229',
        '5LJ' => 'E02004229',
        '5LL' => 'E02004229',
        '5LN' => 'E02004229',
        '5LP' => 'E02004229',
        '5LQ' => 'E02004229',
        '5LR' => 'E02004229',
        '5LS' => 'E02004229',
        '5LT' => 'E02004229',
        '5LU' => 'E02004229',
        '5LX' => 'E02004229',
        '5LY' => 'E02004228',
        '5LZ' => 'E02004228',
        '5NA' => 'E02004228',
        '5NB' => 'E02004228',
        '5ND' => 'E02004228',
        '5NE' => 'E02004228',
        '5NF' => 'E02004228',
        '5NG' => 'E02004228',
        '5NH' => 'E02004228',
        '5NJ' => 'E02004228',
        '5NL' => 'E02004228',
        '5NN' => 'E02004228',
        '5NP' => 'E02004228',
        '5NQ' => 'E02004228',
        '5NR' => 'E02004226',
        '5NS' => 'E02004229',
        '5NT' => 'E02004229',
        '5NU' => 'E02004229',
        '5NW' => 'E02004228',
        '5NX' => 'E02004229',
        '5NY' => 'E02004228',
        '5PB' => 'E02004228',
        '5PD' => 'E02004228',
        '5PE' => 'E02004228',
        '5PF' => 'E02004226',
        '5PG' => 'E02004226',
        '5PH' => 'E02004226',
        '5PJ' => 'E02004226',
        '5PL' => 'E02004226',
        '5PN' => 'E02004226',
        '5PP' => 'E02004228',
        '5PQ' => 'E02004226',
        '5PR' => 'E02004228',
        '5PS' => 'E02004228',
        '5PT' => 'E02004228',
        '5PU' => 'E02004228',
        '5PW' => 'E02004226',
        '5PX' => 'E02004228',
        '5PY' => 'E02004228',
        '5PZ' => 'E02004228',
        '5QA' => 'E02004228',
        '5QB' => 'E02004228',
        '5QD' => 'E02004228',
        '5QE' => 'E02004228',
        '5QF' => 'E02004228',
        '5QG' => 'E02004228',
        '5QH' => 'E02004228',
        '5QJ' => 'E02004228',
        '5QL' => 'E02004228',
        '5QN' => 'E02004228',
        '5QP' => 'E02004228',
        '5QQ' => 'E02004228',
        '5QR' => 'E02004228',
        '5QS' => 'E02004228',
        '5QT' => 'E02004228',
        '5QU' => 'E02004228',
        '5QW' => 'E02004228',
        '5QX' => 'E02004228',
        '5QY' => 'E02004228',
        '5QZ' => 'E02004228',
        '5RA' => 'E02004228',
        '5RB' => 'E02004228',
        '5RD' => 'E02004228',
        '5RE' => 'E02004228',
        '5RF' => 'E02004228',
        '5RG' => 'E02004228',
        '5RH' => 'E02004228',
        '5RJ' => 'E02004226',
        '5RL' => 'E02004228',
        '5RN' => 'E02004226',
        '5RP' => 'E02004228',
        '5RQ' => 'E02004228',
        '5RR' => 'E02004228',
        '5RS' => 'E02004228',
        '5RT' => 'E02004228',
        '5RU' => 'E02004228',
        '5RW' => 'E02004226',
        '5RX' => 'E02004228',
        '5RY' => 'E02004228',
        '5RZ' => 'E02004228',
        '5SA' => 'E02004228',
        '5SB' => 'E02004228',
        '5SD' => 'E02004228',
        '5SE' => 'E02004228',
        '5SF' => 'E02004228',
        '5SG' => 'E02004228',
        '5SH' => 'E02004228',
        '5SJ' => 'E02004228',
        '5SL' => 'E02004228',
        '5SN' => 'E02004228',
        '5SP' => 'E02004228',
        '5SQ' => 'E02004228',
        '5SR' => 'E02004228',
        '5SS' => 'E02004228',
        '5ST' => 'E02004228',
        '5SU' => 'E02004228',
        '5SW' => 'E02004228',
        '5SX' => 'E02004228',
        '5SY' => 'E02004228',
        '5SZ' => 'E02004228',
        '5TA' => 'E02004228',
        '5TB' => 'E02004228',
        '5TD' => 'E02004228',
        '5TE' => 'E02004228',
        '5TF' => 'E02004228',
        '5TG' => 'E02004228',
        '5TH' => 'E02004228',
        '5TJ' => 'E02004228',
        '5TL' => 'E02004228',
        '5TN' => 'E02004228',
        '5TP' => 'E02004228',
        '5TQ' => 'E02004228',
        '5TR' => 'E02004228',
        '5TS' => 'E02004228',
        '5TT' => 'E02004232',
        '5TU' => 'E02004228',
        '5TW' => 'E02004228',
        '5TX' => 'E02004228',
        '5TY' => 'E02004228',
        '5TZ' => 'E02004228',
        '5UA' => 'E02004228',
        '5UB' => 'E02004228',
        '5UD' => 'E02004228',
        '5UE' => 'E02004228',
        '5UF' => 'E02004228',
        '5UG' => 'E02004228',
        '5UH' => 'E02004228',
        '5UJ' => 'E02004228',
        '5UL' => 'E02004228',
        '5UN' => 'E02004228',
        '5UP' => 'E02004228',
        '5UQ' => 'E02004228',
        '5UR' => 'E02004228',
        '5US' => 'E02004228',
        '5UT' => 'E02004228',
        '5UU' => 'E02004228',
        '5UW' => 'E02004228',
        '5UX' => 'E02004228',
        '5UY' => 'E02004228',
        '5UZ' => 'E02004228',
        '5WB' => 'E02004228',
        '5WD' => 'E02004228',
        '5WE' => 'E02004228',
        '5WF' => 'E02004228',
        '5WS' => 'E02004228',
        '5WT' => 'E02004228',
        '5WU' => 'E02004228',
        '5WW' => 'E02004228',
        '5WX' => 'E02004228',
        '5WY' => 'E02004228',
        '5WZ' => 'E02004228',
        '5XA' => 'E02004228',
        '5XB' => 'E02004228',
        '5XD' => 'E02004228',
        '5XE' => 'E02004228',
        '5XF' => 'E02004228',
        '5XG' => 'E02004228',
        '5XH' => 'E02004228',
        '5XJ' => 'E02004228',
        '5XL' => 'E02004228',
        '5XN' => 'E02004228',
        '5XP' => 'E02004228',
        '5XQ' => 'E02004228',
        '5XR' => 'E02004228',
        '5XS' => 'E02004228',
        '5XT' => 'E02004228',
        '5XU' => 'E02004228',
        '5XW' => 'E02004228',
        '5XX' => 'E02004228',
        '5XY' => 'E02004228',
        '5XZ' => 'E02004228',
        '5YA' => 'E02004228',
        '5YL' => 'E02004228',
        '5YP' => 'E02004228',
        '5YR' => 'E02004228',
        '5YS' => 'E02004228',
        '5YT' => 'E02004228',
        '5YU' => 'E02004228',
        '5YW' => 'E02004228',
        '5YX' => 'E02004228',
        '5YY' => 'E02004228',
        '5ZG' => 'E02004228',
        '5ZN' => 'E02004228',
        '5ZQ' => 'E02004228',
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
