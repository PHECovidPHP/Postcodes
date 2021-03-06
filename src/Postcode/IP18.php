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
final class IP18
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '6AA' => 'E02006315',
        '6AB' => 'E02006315',
        '6AD' => 'E02006315',
        '6AE' => 'E02006315',
        '6AF' => 'E02006315',
        '6AG' => 'E02006315',
        '6AH' => 'E02006315',
        '6AJ' => 'E02006315',
        '6AL' => 'E02006315',
        '6AN' => 'E02006315',
        '6AP' => 'E02006315',
        '6AQ' => 'E02006315',
        '6AR' => 'E02006315',
        '6AS' => 'E02006315',
        '6AT' => 'E02006315',
        '6AU' => 'E02006315',
        '6AW' => 'E02006315',
        '6AX' => 'E02006315',
        '6AY' => 'E02006315',
        '6AZ' => 'E02006315',
        '6BA' => 'E02006315',
        '6BB' => 'E02006315',
        '6BD' => 'E02006315',
        '6BE' => 'E02006315',
        '6BF' => 'E02006315',
        '6BG' => 'E02006315',
        '6BH' => 'E02006315',
        '6BJ' => 'E02006315',
        '6BL' => 'E02006315',
        '6BN' => 'E02006315',
        '6BP' => 'E02006315',
        '6BQ' => 'E02006315',
        '6BS' => 'E02006315',
        '6BT' => 'E02006315',
        '6BU' => 'E02006315',
        '6BW' => 'E02006315',
        '6BX' => 'E02006315',
        '6BY' => 'E02006315',
        '6BZ' => 'E02006315',
        '6DA' => 'E02006315',
        '6DB' => 'E02006315',
        '6DD' => 'E02006315',
        '6DE' => 'E02006315',
        '6DF' => 'E02006315',
        '6DH' => 'E02006315',
        '6DJ' => 'E02006315',
        '6DL' => 'E02006315',
        '6DN' => 'E02006315',
        '6DP' => 'E02006315',
        '6DQ' => 'E02006315',
        '6DR' => 'E02006315',
        '6DS' => 'E02006315',
        '6DT' => 'E02006315',
        '6DU' => 'E02006315',
        '6DW' => 'E02006315',
        '6DX' => 'E02006315',
        '6DY' => 'E02006315',
        '6DZ' => 'E02006315',
        '6EA' => 'E02006315',
        '6EB' => 'E02006315',
        '6ED' => 'E02006315',
        '6EE' => 'E02006315',
        '6EF' => 'E02006315',
        '6EG' => 'E02006315',
        '6EH' => 'E02006315',
        '6EJ' => 'E02006315',
        '6EL' => 'E02006315',
        '6EN' => 'E02006315',
        '6EP' => 'E02006315',
        '6EQ' => 'E02006315',
        '6ER' => 'E02006315',
        '6ES' => 'E02006315',
        '6ET' => 'E02006315',
        '6EU' => 'E02006315',
        '6EW' => 'E02006315',
        '6EX' => 'E02006315',
        '6EY' => 'E02006315',
        '6EZ' => 'E02006315',
        '6FA' => 'E02006315',
        '6FB' => 'E02006315',
        '6GB' => 'E02006315',
        '6GH' => 'E02006315',
        '6GL' => 'E02006315',
        '6GX' => 'E02006315',
        '6GY' => 'E02006315',
        '6GZ' => 'E02006315',
        '6HA' => 'E02006315',
        '6HB' => 'E02006315',
        '6HD' => 'E02006315',
        '6HE' => 'E02006315',
        '6HF' => 'E02006315',
        '6HG' => 'E02006315',
        '6HH' => 'E02006315',
        '6HJ' => 'E02006315',
        '6HL' => 'E02006315',
        '6HN' => 'E02006315',
        '6HP' => 'E02006315',
        '6HQ' => 'E02006315',
        '6HR' => 'E02006315',
        '6HS' => 'E02006315',
        '6HT' => 'E02006315',
        '6HU' => 'E02006315',
        '6HW' => 'E02006315',
        '6HX' => 'E02006315',
        '6HY' => 'E02006315',
        '6HZ' => 'E02006315',
        '6JA' => 'E02006315',
        '6JB' => 'E02006315',
        '6JD' => 'E02006315',
        '6JE' => 'E02006315',
        '6JF' => 'E02006315',
        '6JG' => 'E02006315',
        '6JH' => 'E02006315',
        '6JJ' => 'E02006315',
        '6JL' => 'E02006315',
        '6JN' => 'E02006315',
        '6JP' => 'E02006315',
        '6JQ' => 'E02006315',
        '6JR' => 'E02006315',
        '6JS' => 'E02006315',
        '6JT' => 'E02006315',
        '6JU' => 'E02006315',
        '6JW' => 'E02006315',
        '6JX' => 'E02006315',
        '6JY' => 'E02006315',
        '6JZ' => 'E02006315',
        '6LA' => 'E02006315',
        '6LB' => 'E02006315',
        '6LD' => 'E02006315',
        '6LE' => 'E02006315',
        '6LF' => 'E02006315',
        '6LG' => 'E02006315',
        '6LH' => 'E02006315',
        '6LJ' => 'E02006315',
        '6LL' => 'E02006315',
        '6LN' => 'E02006315',
        '6LP' => 'E02006315',
        '6LQ' => 'E02006315',
        '6LR' => 'E02006315',
        '6LS' => 'E02006315',
        '6LT' => 'E02006315',
        '6LU' => 'E02006315',
        '6LW' => 'E02006315',
        '6LX' => 'E02006315',
        '6LY' => 'E02006315',
        '6LZ' => 'E02006315',
        '6NA' => 'E02006315',
        '6NB' => 'E02006315',
        '6ND' => 'E02006315',
        '6NE' => 'E02006315',
        '6NF' => 'E02006315',
        '6NG' => 'E02006315',
        '6NH' => 'E02006315',
        '6NJ' => 'E02006315',
        '6NL' => 'E02006315',
        '6NN' => 'E02006315',
        '6NP' => 'E02006315',
        '6NQ' => 'E02006315',
        '6NR' => 'E02006315',
        '6NS' => 'E02006315',
        '6NT' => 'E02006315',
        '6NU' => 'E02006315',
        '6NW' => 'E02006315',
        '6NX' => 'E02006315',
        '6NY' => 'E02006315',
        '6NZ' => 'E02006315',
        '6PA' => 'E02006315',
        '6PB' => 'E02006315',
        '6PD' => 'E02006315',
        '6PE' => 'E02006315',
        '6PF' => 'E02006315',
        '6PG' => 'E02006315',
        '6PH' => 'E02006315',
        '6PJ' => 'E02006315',
        '6PL' => 'E02006315',
        '6PN' => 'E02006315',
        '6PP' => 'E02006315',
        '6PQ' => 'E02006315',
        '6PR' => 'E02006315',
        '6PS' => 'E02006315',
        '6PT' => 'E02006315',
        '6PU' => 'E02006315',
        '6PW' => 'E02006315',
        '6PX' => 'E02006315',
        '6PY' => 'E02006315',
        '6PZ' => 'E02006315',
        '6QA' => 'E02006315',
        '6QB' => 'E02006315',
        '6QD' => 'E02006315',
        '6QE' => 'E02006315',
        '6QF' => 'E02006315',
        '6QG' => 'E02006315',
        '6QH' => 'E02006315',
        '6QJ' => 'E02006315',
        '6QL' => 'E02006315',
        '6QN' => 'E02006315',
        '6QP' => 'E02006315',
        '6QQ' => 'E02006315',
        '6QR' => 'E02006315',
        '6QS' => 'E02006315',
        '6QT' => 'E02006315',
        '6QU' => 'E02006315',
        '6QW' => 'E02006315',
        '6QX' => 'E02006315',
        '6QY' => 'E02006315',
        '6QZ' => 'E02006315',
        '6RA' => 'E02006315',
        '6RB' => 'E02006315',
        '6RD' => 'E02006315',
        '6RE' => 'E02006315',
        '6RF' => 'E02006315',
        '6RG' => 'E02006315',
        '6RH' => 'E02006315',
        '6RJ' => 'E02006315',
        '6RL' => 'E02006315',
        '6RN' => 'E02006315',
        '6RP' => 'E02006315',
        '6RQ' => 'E02006315',
        '6RR' => 'E02006315',
        '6RS' => 'E02006315',
        '6RT' => 'E02006315',
        '6RU' => 'E02006315',
        '6RW' => 'E02006315',
        '6RX' => 'E02006315',
        '6RY' => 'E02006315',
        '6RZ' => 'E02006315',
        '6SA' => 'E02006315',
        '6SB' => 'E02006315',
        '6SD' => 'E02006315',
        '6SE' => 'E02006315',
        '6SF' => 'E02006315',
        '6SG' => 'E02006315',
        '6SH' => 'E02006287',
        '6SJ' => 'E02006315',
        '6SL' => 'E02006315',
        '6SN' => 'E02006315',
        '6SP' => 'E02006315',
        '6SQ' => 'E02006315',
        '6SR' => 'E02006315',
        '6SS' => 'E02006315',
        '6ST' => 'E02006315',
        '6SU' => 'E02006315',
        '6SW' => 'E02006315',
        '6SX' => 'E02006315',
        '6SY' => 'E02006315',
        '6SZ' => 'E02006315',
        '6TA' => 'E02006315',
        '6TB' => 'E02006315',
        '6TD' => 'E02006287',
        '6TE' => 'E02006287',
        '6TF' => 'E02006287',
        '6TG' => 'E02006287',
        '6TH' => 'E02006287',
        '6TJ' => 'E02006315',
        '6TL' => 'E02006287',
        '6TN' => 'E02006287',
        '6TP' => 'E02006287',
        '6TQ' => 'E02006287',
        '6TR' => 'E02006287',
        '6TS' => 'E02006287',
        '6TT' => 'E02006287',
        '6TU' => 'E02006287',
        '6TW' => 'E02006315',
        '6TX' => 'E02006287',
        '6TY' => 'E02006287',
        '6TZ' => 'E02006287',
        '6UA' => 'E02006287',
        '6UB' => 'E02006287',
        '6UD' => 'E02006287',
        '6UE' => 'E02006287',
        '6UF' => 'E02006287',
        '6UG' => 'E02006287',
        '6UH' => 'E02006287',
        '6UJ' => 'E02006287',
        '6UL' => 'E02006287',
        '6UN' => 'E02006287',
        '6UP' => 'E02006287',
        '6UQ' => 'E02006287',
        '6UR' => 'E02006287',
        '6US' => 'E02006315',
        '6UT' => 'E02006287',
        '6UU' => 'E02006287',
        '6UW' => 'E02006287',
        '6UX' => 'E02006287',
        '6UY' => 'E02006287',
        '6UZ' => 'E02006287',
        '6WA' => 'E02006287',
        '6WB' => 'E02006315',
        '6WD' => 'E02006315',
        '6WE' => 'E02006316',
        '6WF' => 'E02006287',
        '6WG' => 'E02006315',
        '6WP' => 'E02006316',
        '6WQ' => 'E02006315',
        '6WR' => 'E02006315',
        '6WS' => 'E02006315',
        '6WT' => 'E02006315',
        '6WU' => 'E02006315',
        '6WW' => 'E02006315',
        '6WX' => 'E02006315',
        '6WY' => 'E02006316',
        '6WZ' => 'E02006315',
        '6XA' => 'E02006315',
        '6XB' => 'E02006315',
        '6XD' => 'E02006287',
        '6XE' => 'E02006315',
        '6XF' => 'E02006315',
        '6XH' => 'E02006315',
        '6XJ' => 'E02006315',
        '6XL' => 'E02006315',
        '6XN' => 'E02006315',
        '6XP' => 'E02006315',
        '6XR' => 'E02006316',
        '6XW' => 'E02006315',
        '6XY' => 'E02006315',
        '6YA' => 'E02006315',
        '6YB' => 'E02006315',
        '6YD' => 'E02006315',
        '6YE' => 'E02006315',
        '6YF' => 'E02006315',
        '6YH' => 'E02006315',
        '6YS' => 'E02006315',
        '6ZR' => 'E02006315',
        '6ZU' => 'E02006315',
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
