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
final class CA16
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '6AA' => 'E02004013',
        '6AB' => 'E02004013',
        '6AD' => 'E02004013',
        '6AE' => 'E02004013',
        '6AF' => 'E02004013',
        '6AG' => 'E02004013',
        '6AH' => 'E02004013',
        '6AJ' => 'E02004013',
        '6AL' => 'E02004013',
        '6AN' => 'E02004013',
        '6AP' => 'E02004013',
        '6AQ' => 'E02004013',
        '6AR' => 'E02004013',
        '6AS' => 'E02004013',
        '6AT' => 'E02004013',
        '6AU' => 'E02004013',
        '6AW' => 'E02004013',
        '6AX' => 'E02004013',
        '6AY' => 'E02004013',
        '6AZ' => 'E02004013',
        '6BA' => 'E02004013',
        '6BB' => 'E02004014',
        '6BD' => 'E02004014',
        '6BE' => 'E02004013',
        '6BF' => 'E02004013',
        '6BG' => 'E02004013',
        '6BH' => 'E02004013',
        '6BJ' => 'E02004013',
        '6BL' => 'E02004013',
        '6BN' => 'E02004013',
        '6BP' => 'E02004013',
        '6BQ' => 'E02004013',
        '6BS' => 'E02004013',
        '6BT' => 'E02004013',
        '6BU' => 'E02004013',
        '6BW' => 'E02004013',
        '6BX' => 'E02004013',
        '6BY' => 'E02004013',
        '6BZ' => 'E02004013',
        '6DA' => 'E02004013',
        '6DB' => 'E02004013',
        '6DD' => 'E02004013',
        '6DE' => 'E02004013',
        '6DF' => 'E02004013',
        '6DG' => 'E02004013',
        '6DH' => 'E02004013',
        '6DJ' => 'E02004013',
        '6DL' => 'E02004013',
        '6DN' => 'E02004013',
        '6DP' => 'E02004013',
        '6DQ' => 'E02004013',
        '6DR' => 'E02004013',
        '6DS' => 'E02004013',
        '6DT' => 'E02004013',
        '6DU' => 'E02004013',
        '6DW' => 'E02004013',
        '6DX' => 'E02004013',
        '6DZ' => 'E02004013',
        '6EA' => 'E02004013',
        '6EB' => 'E02004013',
        '6ED' => 'E02004013',
        '6EE' => 'E02004014',
        '6EF' => 'E02004014',
        '6EG' => 'E02004014',
        '6EH' => 'E02004014',
        '6EJ' => 'E02004014',
        '6EL' => 'E02004014',
        '6EN' => 'E02004013',
        '6EP' => 'E02004014',
        '6EQ' => 'E02004014',
        '6ER' => 'E02004014',
        '6ES' => 'E02004014',
        '6ET' => 'E02004013',
        '6EU' => 'E02004013',
        '6EW' => 'E02004014',
        '6EX' => 'E02004013',
        '6EY' => 'E02004013',
        '6EZ' => 'E02004013',
        '6FA' => 'E02004013',
        '6FB' => 'E02004013',
        '6FD' => 'E02004013',
        '6FE' => 'E02004013',
        '6FF' => 'E02004013',
        '6FG' => 'E02004013',
        '6FH' => 'E02004013',
        '6FJ' => 'E02004013',
        '6FL' => 'E02004013',
        '6FP' => 'E02004013',
        '6FQ' => 'E02004013',
        '6GA' => 'E02004013',
        '6GB' => 'E02004013',
        '6GD' => 'E02004013',
        '6GZ' => 'E02004013',
        '6HA' => 'E02004013',
        '6HB' => 'E02004013',
        '6HD' => 'E02004013',
        '6HE' => 'E02004013',
        '6HF' => 'E02004013',
        '6HG' => 'E02004013',
        '6HH' => 'E02004013',
        '6HJ' => 'E02004013',
        '6HL' => 'E02004013',
        '6HN' => 'E02004013',
        '6HP' => 'E02004013',
        '6HQ' => 'E02004013',
        '6HR' => 'E02004013',
        '6HS' => 'E02004013',
        '6HT' => 'E02004013',
        '6HU' => 'E02004013',
        '6HW' => 'E02004013',
        '6HX' => 'E02004013',
        '6HY' => 'E02004013',
        '6HZ' => 'E02004013',
        '6JA' => 'E02004013',
        '6JB' => 'E02004013',
        '6JD' => 'E02004013',
        '6JE' => 'E02004013',
        '6JG' => 'E02004014',
        '6JH' => 'E02004013',
        '6JJ' => 'E02004013',
        '6JL' => 'E02004013',
        '6JN' => 'E02004013',
        '6JP' => 'E02004013',
        '6JQ' => 'E02004013',
        '6JR' => 'E02004013',
        '6JS' => 'E02004013',
        '6JT' => 'E02004013',
        '6JU' => 'E02004013',
        '6JW' => 'E02004013',
        '6JX' => 'E02004013',
        '6JY' => 'E02004014',
        '6JZ' => 'E02004014',
        '6LA' => 'E02004014',
        '6LB' => 'E02004013',
        '6LH' => 'E02004014',
        '6LL' => 'E02004014',
        '6LN' => 'E02004014',
        '6LP' => 'E02004014',
        '6LS' => 'E02004014',
        '6LU' => 'E02004014',
        '6LX' => 'E02004014',
        '6LZ' => 'E02004014',
        '6NA' => 'E02004014',
        '6ND' => 'E02004014',
        '6NF' => 'E02004013',
        '6NG' => 'E02004013',
        '6NL' => 'E02004014',
        '6NP' => 'E02004014',
        '6NQ' => 'E02004014',
        '6NR' => 'E02004014',
        '6NS' => 'E02004014',
        '6NT' => 'E02004014',
        '6NU' => 'E02004014',
        '6NX' => 'E02004014',
        '6NZ' => 'E02004014',
        '6PA' => 'E02004014',
        '6PB' => 'E02004014',
        '6PD' => 'E02004014',
        '6PE' => 'E02004014',
        '6PF' => 'E02004014',
        '6PG' => 'E02004014',
        '6PH' => 'E02004014',
        '6PJ' => 'E02004014',
        '6PL' => 'E02004014',
        '6PN' => 'E02004014',
        '6PP' => 'E02004014',
        '6PQ' => 'E02004014',
        '6PR' => 'E02004014',
        '6PS' => 'E02004014',
        '6PT' => 'E02004014',
        '6PU' => 'E02004014',
        '6PW' => 'E02004014',
        '6PX' => 'E02004014',
        '6PY' => 'E02004014',
        '6PZ' => 'E02004014',
        '6QA' => 'E02004014',
        '6QB' => 'E02004014',
        '6QD' => 'E02004013',
        '6QE' => 'E02004013',
        '6QF' => 'E02004014',
        '6QH' => 'E02004013',
        '6QJ' => 'E02004013',
        '6QL' => 'E02004013',
        '6QN' => 'E02004013',
        '6QP' => 'E02004013',
        '6QR' => 'E02004013',
        '6QT' => 'E02004013',
        '6QU' => 'E02004013',
        '6QW' => 'E02004013',
        '6QX' => 'E02004013',
        '6QZ' => 'E02004013',
        '6RA' => 'E02004013',
        '6RB' => 'E02004013',
        '6RD' => 'E02004013',
        '6RE' => 'E02004013',
        '6RF' => 'E02004013',
        '6RG' => 'E02004013',
        '6RH' => 'E02004013',
        '6RJ' => 'E02004013',
        '6RL' => 'E02004013',
        '6RN' => 'E02004013',
        '6RQ' => 'E02004013',
        '6RS' => 'E02004013',
        '6RT' => 'E02004013',
        '6RU' => 'E02004013',
        '6RX' => 'E02004013',
        '6SA' => 'E02004013',
        '6SB' => 'E02004013',
        '6SD' => 'E02004013',
        '6SE' => 'E02004013',
        '6SF' => 'E02004013',
        '6SG' => 'E02004013',
        '6SH' => 'E02004013',
        '6SJ' => 'E02004013',
        '6SL' => 'E02004013',
        '6SN' => 'E02004013',
        '6SP' => 'E02004013',
        '6SR' => 'E02004013',
        '6SX' => 'E02004013',
        '6SY' => 'E02004013',
        '6SZ' => 'E02004014',
        '6TA' => 'E02004014',
        '6TB' => 'E02004013',
        '6TD' => 'E02004014',
        '6TE' => 'E02004014',
        '6TF' => 'E02004014',
        '6TG' => 'E02004014',
        '6TH' => 'E02004013',
        '6TJ' => 'E02004013',
        '6TL' => 'E02004013',
        '6TN' => 'E02004013',
        '6TP' => 'E02004013',
        '6TQ' => 'E02004013',
        '6TR' => 'E02004013',
        '6TS' => 'E02004013',
        '6TT' => 'E02004013',
        '6TU' => 'E02004013',
        '6TW' => 'E02004013',
        '6TX' => 'E02004013',
        '6TY' => 'E02004013',
        '6TZ' => 'E02004013',
        '6UA' => 'E02004013',
        '6UB' => 'E02004013',
        '6UD' => 'E02004013',
        '6UE' => 'E02004013',
        '6UG' => 'E02004013',
        '6UH' => 'E02004013',
        '6UJ' => 'E02004013',
        '6UL' => 'E02004013',
        '6UN' => 'E02004013',
        '6UP' => 'E02004013',
        '6UQ' => 'E02004013',
        '6UR' => 'E02004013',
        '6US' => 'E02004013',
        '6UT' => 'E02004013',
        '6UW' => 'E02004013',
        '6UZ' => 'E02004013',
        '6WA' => 'E02004013',
        '6WB' => 'E02004013',
        '6WD' => 'E02004013',
        '6WX' => 'E02004013',
        '6WY' => 'E02004013',
        '6WZ' => 'E02004013',
        '6XA' => 'E02004013',
        '6XB' => 'E02004013',
        '6XD' => 'E02004013',
        '6XE' => 'E02004013',
        '6XF' => 'E02004013',
        '6XG' => 'E02004013',
        '6XH' => 'E02004013',
        '6XJ' => 'E02004013',
        '6XL' => 'E02004013',
        '6XN' => 'E02004013',
        '6XP' => 'E02004013',
        '6XQ' => 'E02004013',
        '6XR' => 'E02004013',
        '6XS' => 'E02004013',
        '6XT' => 'E02004013',
        '6XU' => 'E02004013',
        '6XW' => 'E02004013',
        '6XX' => 'E02004013',
        '6XY' => 'E02004013',
        '6XZ' => 'E02004013',
        '6YA' => 'E02004013',
        '6YB' => 'E02004013',
        '6YD' => 'E02004013',
        '6YE' => 'E02004013',
        '6YF' => 'E02004013',
        '6YG' => 'E02004013',
        '6YH' => 'E02004013',
        '6YJ' => 'E02004013',
        '6YL' => 'E02004013',
        '6YN' => 'E02004013',
        '6ZW' => 'E02004013',
        '6ZZ' => 'E02004013',
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
