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
final class BD14
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '6AA' => 'E02002229',
        '6AB' => 'E02002229',
        '6AD' => 'E02002229',
        '6AE' => 'E02002229',
        '6AF' => 'E02002229',
        '6AG' => 'E02002229',
        '6AH' => 'E02002229',
        '6AJ' => 'E02002229',
        '6AL' => 'E02002229',
        '6AN' => 'E02002229',
        '6AP' => 'E02002229',
        '6AQ' => 'E02002229',
        '6AR' => 'E02002229',
        '6AS' => 'E02002229',
        '6AT' => 'E02002229',
        '6AU' => 'E02002229',
        '6AW' => 'E02002229',
        '6AX' => 'E02002229',
        '6AY' => 'E02002229',
        '6AZ' => 'E02002229',
        '6BA' => 'E02002229',
        '6BB' => 'E02002229',
        '6BD' => 'E02002229',
        '6BE' => 'E02002229',
        '6BG' => 'E02002229',
        '6BH' => 'E02002229',
        '6BJ' => 'E02002229',
        '6BL' => 'E02002229',
        '6BN' => 'E02002229',
        '6BP' => 'E02002229',
        '6BQ' => 'E02002229',
        '6BS' => 'E02002229',
        '6BT' => 'E02002229',
        '6BU' => 'E02002229',
        '6BW' => 'E02002229',
        '6BX' => 'E02002229',
        '6BY' => 'E02002229',
        '6BZ' => 'E02002229',
        '6DA' => 'E02002229',
        '6DB' => 'E02002229',
        '6DD' => 'E02002229',
        '6DE' => 'E02002229',
        '6DF' => 'E02002229',
        '6DG' => 'E02002229',
        '6DH' => 'E02002229',
        '6DJ' => 'E02002229',
        '6DL' => 'E02002229',
        '6DN' => 'E02002229',
        '6DP' => 'E02002229',
        '6DQ' => 'E02002229',
        '6DR' => 'E02002229',
        '6DS' => 'E02002229',
        '6DT' => 'E02002229',
        '6DU' => 'E02002229',
        '6DW' => 'E02002229',
        '6DX' => 'E02002229',
        '6DY' => 'E02002229',
        '6DZ' => 'E02002229',
        '6EA' => 'E02002229',
        '6EB' => 'E02002229',
        '6ED' => 'E02002229',
        '6EE' => 'E02002229',
        '6EF' => 'E02002229',
        '6EG' => 'E02002229',
        '6EH' => 'E02002229',
        '6EJ' => 'E02002229',
        '6EL' => 'E02002229',
        '6EN' => 'E02002229',
        '6EP' => 'E02002229',
        '6EQ' => 'E02002229',
        '6ER' => 'E02002229',
        '6ES' => 'E02002229',
        '6ET' => 'E02002229',
        '6EU' => 'E02002229',
        '6EW' => 'E02002229',
        '6EX' => 'E02002229',
        '6EY' => 'E02002229',
        '6EZ' => 'E02002229',
        '6FA' => 'E02002229',
        '6FD' => 'E02002229',
        '6FF' => 'E02002229',
        '6HA' => 'E02002229',
        '6HB' => 'E02002229',
        '6HD' => 'E02002229',
        '6HE' => 'E02002231',
        '6HF' => 'E02002229',
        '6HG' => 'E02002229',
        '6HH' => 'E02002229',
        '6HJ' => 'E02002229',
        '6HL' => 'E02002229',
        '6HN' => 'E02002229',
        '6HP' => 'E02002229',
        '6HQ' => 'E02002229',
        '6HR' => 'E02002229',
        '6HS' => 'E02002229',
        '6HT' => 'E02002229',
        '6HU' => 'E02002229',
        '6HW' => 'E02002229',
        '6HX' => 'E02002229',
        '6HZ' => 'E02002229',
        '6JA' => 'E02002229',
        '6JD' => 'E02002229',
        '6JE' => 'E02002229',
        '6JF' => 'E02002229',
        '6JG' => 'E02002229',
        '6JH' => 'E02002229',
        '6JJ' => 'E02002229',
        '6JL' => 'E02002229',
        '6JN' => 'E02002229',
        '6JP' => 'E02002229',
        '6JQ' => 'E02002229',
        '6JR' => 'E02002229',
        '6JS' => 'E02002229',
        '6JT' => 'E02002229',
        '6JU' => 'E02002229',
        '6JW' => 'E02002229',
        '6JX' => 'E02002229',
        '6JY' => 'E02002229',
        '6JZ' => 'E02002229',
        '6LA' => 'E02002229',
        '6LB' => 'E02002229',
        '6LD' => 'E02002229',
        '6LE' => 'E02002229',
        '6LF' => 'E02002229',
        '6LG' => 'E02002229',
        '6LH' => 'E02002229',
        '6LJ' => 'E02002229',
        '6LL' => 'E02002229',
        '6LN' => 'E02002229',
        '6LP' => 'E02002229',
        '6LQ' => 'E02002229',
        '6LR' => 'E02002229',
        '6LS' => 'E02002229',
        '6LT' => 'E02002231',
        '6LU' => 'E02002231',
        '6LW' => 'E02002229',
        '6LX' => 'E02002231',
        '6LY' => 'E02002231',
        '6LZ' => 'E02002231',
        '6NA' => 'E02002231',
        '6NB' => 'E02002229',
        '6ND' => 'E02002229',
        '6NE' => 'E02002231',
        '6NF' => 'E02002229',
        '6NG' => 'E02002229',
        '6NH' => 'E02002231',
        '6NJ' => 'E02002231',
        '6NL' => 'E02002229',
        '6NN' => 'E02002229',
        '6NP' => 'E02002229',
        '6NQ' => 'E02002231',
        '6NR' => 'E02002229',
        '6NS' => 'E02002229',
        '6NT' => 'E02002229',
        '6NU' => 'E02002229',
        '6NW' => 'E02002229',
        '6NX' => 'E02002229',
        '6NY' => 'E02002229',
        '6PA' => 'E02002229',
        '6PB' => 'E02002229',
        '6PD' => 'E02002229',
        '6PE' => 'E02002229',
        '6PF' => 'E02002229',
        '6PG' => 'E02002229',
        '6PH' => 'E02002229',
        '6PJ' => 'E02002229',
        '6PL' => 'E02002229',
        '6PN' => 'E02002229',
        '6PP' => 'E02002229',
        '6PQ' => 'E02002229',
        '6PR' => 'E02002229',
        '6PS' => 'E02002240',
        '6PT' => 'E02002229',
        '6PU' => 'E02002229',
        '6PW' => 'E02002229',
        '6PX' => 'E02002229',
        '6PY' => 'E02002229',
        '6PZ' => 'E02002229',
        '6QA' => 'E02002229',
        '6QB' => 'E02002229',
        '6QD' => 'E02002229',
        '6QE' => 'E02002229',
        '6QF' => 'E02002229',
        '6QG' => 'E02002229',
        '6QH' => 'E02002229',
        '6QJ' => 'E02002229',
        '6QL' => 'E02002229',
        '6QN' => 'E02002229',
        '6QP' => 'E02002229',
        '6QQ' => 'E02002229',
        '6QR' => 'E02002229',
        '6QS' => 'E02002229',
        '6QT' => 'E02002229',
        '6QU' => 'E02002229',
        '6QW' => 'E02002229',
        '6QX' => 'E02002229',
        '6QY' => 'E02002229',
        '6QZ' => 'E02002229',
        '6RA' => 'E02002229',
        '6RB' => 'E02002229',
        '6RD' => 'E02002229',
        '6RE' => 'E02002229',
        '6RF' => 'E02002229',
        '6RG' => 'E02002229',
        '6RH' => 'E02002229',
        '6RJ' => 'E02002229',
        '6RL' => 'E02002229',
        '6RN' => 'E02002229',
        '6RP' => 'E02002229',
        '6RQ' => 'E02002229',
        '6RR' => 'E02002229',
        '6RS' => 'E02002229',
        '6RT' => 'E02002229',
        '6RU' => 'E02002229',
        '6RW' => 'E02002229',
        '6RX' => 'E02002229',
        '6RY' => 'E02002229',
        '6RZ' => 'E02002229',
        '6SA' => 'E02002229',
        '6SB' => 'E02002229',
        '6SD' => 'E02002229',
        '6SE' => 'E02002229',
        '6SG' => 'E02002229',
        '6SH' => 'E02002229',
        '6SJ' => 'E02002229',
        '6SL' => 'E02002229',
        '6SN' => 'E02002229',
        '6SP' => 'E02002229',
        '6SQ' => 'E02002229',
        '6SR' => 'E02002229',
        '6ST' => 'E02002229',
        '6SU' => 'E02002229',
        '6SW' => 'E02002229',
        '6SX' => 'E02002229',
        '6SY' => 'E02002229',
        '6SZ' => 'E02002229',
        '6TA' => 'E02002225',
        '6TB' => 'E02002229',
        '6TE' => 'E02002229',
        '6TF' => 'E02002229',
        '6TG' => 'E02002229',
        '6UA' => 'E02002222',
        '6UD' => 'E02002222',
        '6UF' => 'E02002229',
        '6UG' => 'E02002222',
        '6UH' => 'E02002229',
        '6UJ' => 'E02002229',
        '6UL' => 'E02002221',
        '6UN' => 'E02002222',
        '6UQ' => 'E02002229',
        '6UR' => 'E02002222',
        '6UT' => 'E02002229',
        '6UU' => 'E02002222',
        '6UW' => 'E02002222',
        '6UZ' => 'E02002229',
        '6WA' => 'E02002222',
        '6WQ' => 'E02002222',
        '6WR' => 'E02002222',
        '6WS' => 'E02002222',
        '6WT' => 'E02002222',
        '6WU' => 'E02002222',
        '6WW' => 'E02002222',
        '6WX' => 'E02002222',
        '6WY' => 'E02002222',
        '6WZ' => 'E02002222',
        '6XA' => 'E02002222',
        '6XB' => 'E02002222',
        '6XD' => 'E02002222',
        '6YZ' => 'E02002222',
        '6ZW' => 'E02002222',
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