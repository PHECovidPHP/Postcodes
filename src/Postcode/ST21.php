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
final class ST21
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '6AA' => 'E02006192',
        '6AB' => 'E02006192',
        '6AD' => 'E02006192',
        '6AE' => 'E02006192',
        '6AF' => 'E02006192',
        '6AG' => 'E02006192',
        '6AH' => 'E02006192',
        '6AJ' => 'E02006192',
        '6AL' => 'E02006192',
        '6AN' => 'E02006192',
        '6AP' => 'E02006192',
        '6AQ' => 'E02006192',
        '6AR' => 'E02006192',
        '6AS' => 'E02006192',
        '6AT' => 'E02006192',
        '6AU' => 'E02006192',
        '6AW' => 'E02006192',
        '6AX' => 'E02006192',
        '6AY' => 'E02006192',
        '6AZ' => 'E02006192',
        '6BA' => 'E02006192',
        '6BB' => 'E02006192',
        '6BD' => 'E02006192',
        '6BE' => 'E02006192',
        '6BF' => 'E02006192',
        '6BG' => 'E02006192',
        '6BH' => 'E02006192',
        '6BJ' => 'E02006192',
        '6BL' => 'E02006192',
        '6BN' => 'E02006192',
        '6BP' => 'E02006192',
        '6BQ' => 'E02006192',
        '6BS' => 'E02006192',
        '6BT' => 'E02006192',
        '6BU' => 'E02006192',
        '6BW' => 'E02006192',
        '6BX' => 'E02006192',
        '6BY' => 'E02006192',
        '6BZ' => 'E02006192',
        '6DA' => 'E02006192',
        '6DB' => 'E02006192',
        '6DD' => 'E02006199',
        '6DE' => 'E02006192',
        '6DF' => 'E02006192',
        '6DG' => 'E02006192',
        '6DH' => 'E02006192',
        '6DJ' => 'E02006192',
        '6DL' => 'E02006192',
        '6DN' => 'E02006192',
        '6DP' => 'E02006192',
        '6DQ' => 'E02006192',
        '6DR' => 'E02006192',
        '6DS' => 'E02006192',
        '6DT' => 'E02006192',
        '6DU' => 'E02006192',
        '6DW' => 'E02006192',
        '6DX' => 'E02006192',
        '6DY' => 'E02006192',
        '6DZ' => 'E02006192',
        '6EA' => 'E02006192',
        '6EB' => 'E02006192',
        '6ED' => 'E02006192',
        '6EE' => 'E02006192',
        '6EF' => 'E02006199',
        '6EG' => 'E02006199',
        '6EH' => 'E02006192',
        '6EJ' => 'E02006192',
        '6EL' => 'E02006192',
        '6EN' => 'E02006192',
        '6EP' => 'E02006192',
        '6EQ' => 'E02006192',
        '6ER' => 'E02006192',
        '6ES' => 'E02006192',
        '6ET' => 'E02006192',
        '6EU' => 'E02006192',
        '6EW' => 'E02006192',
        '6EX' => 'E02006192',
        '6EY' => 'E02006199',
        '6EZ' => 'E02006192',
        '6FA' => 'E02006192',
        '6FB' => 'E02006192',
        '6GA' => 'E02006192',
        '6GH' => 'E02006192',
        '6GZ' => 'E02006192',
        '6HA' => 'E02006192',
        '6HB' => 'E02006192',
        '6HD' => 'E02006192',
        '6HE' => 'E02006192',
        '6HF' => 'E02006192',
        '6HG' => 'E02006192',
        '6HH' => 'E02006192',
        '6HJ' => 'E02006192',
        '6HL' => 'E02006192',
        '6HN' => 'E02006192',
        '6HP' => 'E02006192',
        '6HQ' => 'E02006192',
        '6HR' => 'E02006192',
        '6HS' => 'E02006202',
        '6HT' => 'E02006199',
        '6HU' => 'E02006192',
        '6HW' => 'E02006192',
        '6HX' => 'E02006199',
        '6HY' => 'E02006192',
        '6HZ' => 'E02006192',
        '6JA' => 'E02006192',
        '6JB' => 'E02006192',
        '6JD' => 'E02006192',
        '6JE' => 'E02006192',
        '6JF' => 'E02006192',
        '6JG' => 'E02006192',
        '6JH' => 'E02006192',
        '6JJ' => 'E02006192',
        '6JL' => 'E02006192',
        '6JN' => 'E02006199',
        '6JP' => 'E02006192',
        '6JQ' => 'E02006199',
        '6JR' => 'E02006192',
        '6JS' => 'E02006192',
        '6JT' => 'E02006192',
        '6JU' => 'E02006192',
        '6JW' => 'E02006192',
        '6JX' => 'E02006192',
        '6JY' => 'E02006192',
        '6JZ' => 'E02006192',
        '6LA' => 'E02006192',
        '6LB' => 'E02006192',
        '6LD' => 'E02006192',
        '6LE' => 'E02006192',
        '6LF' => 'E02006192',
        '6LG' => 'E02006192',
        '6LH' => 'E02006192',
        '6LJ' => 'E02006192',
        '6LL' => 'E02006192',
        '6LN' => 'E02006192',
        '6LP' => 'E02006192',
        '6LQ' => 'E02006192',
        '6LR' => 'E02006192',
        '6LS' => 'E02006192',
        '6LT' => 'E02006192',
        '6LU' => 'E02006192',
        '6LW' => 'E02006192',
        '6LX' => 'E02006192',
        '6LY' => 'E02006192',
        '6LZ' => 'E02006192',
        '6NA' => 'E02006192',
        '6NB' => 'E02006192',
        '6ND' => 'E02006192',
        '6NE' => 'E02006192',
        '6NF' => 'E02006192',
        '6NG' => 'E02006192',
        '6NH' => 'E02006192',
        '6NJ' => 'E02006192',
        '6NL' => 'E02006192',
        '6NN' => 'E02006192',
        '6NP' => 'E02006192',
        '6NQ' => 'E02006192',
        '6NR' => 'E02006192',
        '6NS' => 'E02006192',
        '6NT' => 'E02006192',
        '6NU' => 'E02006192',
        '6NW' => 'E02006192',
        '6NX' => 'E02006192',
        '6NY' => 'E02006192',
        '6NZ' => 'E02006192',
        '6PA' => 'E02006199',
        '6PB' => 'E02006192',
        '6PD' => 'E02006199',
        '6PE' => 'E02006192',
        '6PF' => 'E02006192',
        '6PG' => 'E02006192',
        '6PH' => 'E02006192',
        '6PJ' => 'E02006192',
        '6PL' => 'E02006192',
        '6PN' => 'E02006192',
        '6PP' => 'E02006192',
        '6PQ' => 'E02006192',
        '6PR' => 'E02006192',
        '6PS' => 'E02006192',
        '6PT' => 'E02006192',
        '6PU' => 'E02006199',
        '6PW' => 'E02006192',
        '6QA' => 'E02006192',
        '6QB' => 'E02006192',
        '6QD' => 'E02006192',
        '6QE' => 'E02006192',
        '6QF' => 'E02006192',
        '6QG' => 'E02006192',
        '6QH' => 'E02006192',
        '6QJ' => 'E02006192',
        '6QL' => 'E02006199',
        '6QN' => 'E02006192',
        '6QP' => 'E02006192',
        '6QQ' => 'E02006192',
        '6QR' => 'E02006192',
        '6QS' => 'E02006192',
        '6QT' => 'E02006192',
        '6QU' => 'E02006192',
        '6QW' => 'E02006192',
        '6QX' => 'E02006192',
        '6QY' => 'E02006192',
        '6QZ' => 'E02006192',
        '6RA' => 'E02006192',
        '6RB' => 'E02006192',
        '6RD' => 'E02006192',
        '6RE' => 'E02006173',
        '6RF' => 'E02006192',
        '6RG' => 'E02006192',
        '6RH' => 'E02006192',
        '6RL' => 'E02006192',
        '6RN' => 'E02006192',
        '6RP' => 'E02006192',
        '6RR' => 'E02006192',
        '6RS' => 'E02006192',
        '6RT' => 'E02006192',
        '6RU' => 'E02006192',
        '6RW' => 'E02006192',
        '6RX' => 'E02006192',
        '6RY' => 'E02006192',
        '6RZ' => 'E02006192',
        '6SA' => 'E02006192',
        '6SB' => 'E02006192',
        '6SD' => 'E02006189',
        '6SE' => 'E02006192',
        '6SF' => 'E02006192',
        '6SG' => 'E02006192',
        '6SH' => 'E02006189',
        '6SJ' => 'E02006192',
        '6SL' => 'E02006192',
        '6SN' => 'E02006199',
        '6SP' => 'E02006192',
        '6SQ' => 'E02006192',
        '6SR' => 'E02006192',
        '6SS' => 'E02006192',
        '6ST' => 'E02006192',
        '6SU' => 'E02006192',
        '6SW' => 'E02006192',
        '6SX' => 'E02006192',
        '6SY' => 'E02006192',
        '6TD' => 'E02006192',
        '6TE' => 'E02006192',
        '6TF' => 'E02006199',
        '6TG' => 'E02006192',
        '6TT' => 'E02006192',
        '6WA' => 'E02006199',
        '6WB' => 'E02006199',
        '6WE' => 'E02006199',
        '6WQ' => 'E02006199',
        '6WU' => 'E02006199',
        '6WY' => 'E02006199',
        '6WZ' => 'E02006199',
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
