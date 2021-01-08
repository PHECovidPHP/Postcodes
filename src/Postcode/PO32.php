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
final class PO32
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '6AA' => 'E02003583',
        '6AB' => 'E02003583',
        '6AD' => 'E02003583',
        '6AE' => 'E02003583',
        '6AF' => 'E02003583',
        '6AG' => 'E02003583',
        '6AH' => 'E02003583',
        '6AJ' => 'E02003583',
        '6AL' => 'E02003583',
        '6AN' => 'E02003583',
        '6AP' => 'E02003583',
        '6AQ' => 'E02003588',
        '6AR' => 'E02003583',
        '6AS' => 'E02003583',
        '6AT' => 'E02003583',
        '6AU' => 'E02003583',
        '6AW' => 'E02003583',
        '6AX' => 'E02003583',
        '6AY' => 'E02003583',
        '6AZ' => 'E02003583',
        '6BA' => 'E02003583',
        '6BB' => 'E02003583',
        '6BD' => 'E02003583',
        '6BE' => 'E02003583',
        '6BF' => 'E02003588',
        '6BG' => 'E02003583',
        '6BH' => 'E02003583',
        '6BJ' => 'E02003583',
        '6BL' => 'E02003583',
        '6BN' => 'E02003583',
        '6BP' => 'E02003583',
        '6BQ' => 'E02003583',
        '6BS' => 'E02003583',
        '6BT' => 'E02003583',
        '6BU' => 'E02003581',
        '6BW' => 'E02003583',
        '6BX' => 'E02003583',
        '6BY' => 'E02003581',
        '6BZ' => 'E02003581',
        '6DA' => 'E02003581',
        '6DB' => 'E02003581',
        '6DD' => 'E02003581',
        '6DE' => 'E02003581',
        '6DF' => 'E02003583',
        '6DG' => 'E02003581',
        '6DH' => 'E02003583',
        '6DJ' => 'E02003583',
        '6DL' => 'E02003583',
        '6DN' => 'E02003583',
        '6DP' => 'E02003583',
        '6DQ' => 'E02003581',
        '6DR' => 'E02003583',
        '6DS' => 'E02003583',
        '6DT' => 'E02003583',
        '6DU' => 'E02003581',
        '6DW' => 'E02003583',
        '6DX' => 'E02003583',
        '6DY' => 'E02003583',
        '6DZ' => 'E02003583',
        '6EA' => 'E02003581',
        '6EB' => 'E02003581',
        '6ED' => 'E02003581',
        '6EE' => 'E02003583',
        '6EF' => 'E02003583',
        '6EG' => 'E02003581',
        '6EH' => 'E02003583',
        '6EJ' => 'E02003583',
        '6EL' => 'E02003583',
        '6EN' => 'E02003581',
        '6EP' => 'E02003581',
        '6EQ' => 'E02003583',
        '6ER' => 'E02003581',
        '6ES' => 'E02003581',
        '6ET' => 'E02003581',
        '6EU' => 'E02003581',
        '6EW' => 'E02003581',
        '6EX' => 'E02003583',
        '6EY' => 'E02003583',
        '6EZ' => 'E02003583',
        '6FB' => 'E02003581',
        '6FD' => 'E02003583',
        '6FE' => 'E02003583',
        '6FF' => 'E02003583',
        '6FH' => 'E02003583',
        '6FJ' => 'E02003583',
        '6FL' => 'E02003583',
        '6FN' => 'E02003583',
        '6FP' => 'E02003583',
        '6FQ' => 'E02003583',
        '6FR' => 'E02003583',
        '6FS' => 'E02003583',
        '6FT' => 'E02003583',
        '6FW' => 'E02003583',
        '6FX' => 'E02003583',
        '6FY' => 'E02003583',
        '6FZ' => 'E02003583',
        '6GA' => 'E02003583',
        '6GB' => 'E02003583',
        '6GD' => 'E02003583',
        '6GE' => 'E02003583',
        '6GF' => 'E02003583',
        '6GG' => 'E02003583',
        '6GH' => 'E02003583',
        '6GJ' => 'E02003583',
        '6GL' => 'E02003583',
        '6GN' => 'E02003583',
        '6GP' => 'E02003583',
        '6GQ' => 'E02003583',
        '6GR' => 'E02003583',
        '6GS' => 'E02003583',
        '6GT' => 'E02003583',
        '6GU' => 'E02003583',
        '6GW' => 'E02003581',
        '6HA' => 'E02003581',
        '6HB' => 'E02003583',
        '6HD' => 'E02003583',
        '6HE' => 'E02003583',
        '6HF' => 'E02003583',
        '6HG' => 'E02003583',
        '6HH' => 'E02003583',
        '6HJ' => 'E02003583',
        '6HL' => 'E02003583',
        '6HN' => 'E02003583',
        '6HP' => 'E02003583',
        '6HQ' => 'E02003583',
        '6HR' => 'E02003583',
        '6HS' => 'E02003583',
        '6HT' => 'E02003583',
        '6HU' => 'E02003583',
        '6HW' => 'E02003583',
        '6HX' => 'E02003583',
        '6HY' => 'E02003583',
        '6HZ' => 'E02003583',
        '6JA' => 'E02003583',
        '6JB' => 'E02003583',
        '6JD' => 'E02003583',
        '6JE' => 'E02003583',
        '6JF' => 'E02003583',
        '6JG' => 'E02003583',
        '6JH' => 'E02003583',
        '6JJ' => 'E02003583',
        '6JL' => 'E02003583',
        '6JN' => 'E02003583',
        '6JP' => 'E02003583',
        '6JQ' => 'E02003583',
        '6JR' => 'E02003583',
        '6JS' => 'E02003583',
        '6JT' => 'E02003583',
        '6JU' => 'E02003583',
        '6JW' => 'E02003583',
        '6JX' => 'E02003583',
        '6JY' => 'E02003583',
        '6JZ' => 'E02003583',
        '6LA' => 'E02003583',
        '6LB' => 'E02003583',
        '6LD' => 'E02003583',
        '6LE' => 'E02003583',
        '6LF' => 'E02003588',
        '6LG' => 'E02003583',
        '6LH' => 'E02003583',
        '6LJ' => 'E02003583',
        '6LL' => 'E02003583',
        '6LN' => 'E02003583',
        '6LP' => 'E02003583',
        '6LQ' => 'E02003583',
        '6LR' => 'E02003583',
        '6LS' => 'E02003583',
        '6LT' => 'E02003583',
        '6LU' => 'E02003583',
        '6LW' => 'E02003583',
        '6LX' => 'E02003583',
        '6LY' => 'E02003583',
        '6LZ' => 'E02003583',
        '6NA' => 'E02003583',
        '6NB' => 'E02003583',
        '6ND' => 'E02003583',
        '6NE' => 'E02003583',
        '6NF' => 'E02003583',
        '6NG' => 'E02003583',
        '6NH' => 'E02003583',
        '6NJ' => 'E02003588',
        '6NL' => 'E02003583',
        '6NN' => 'E02003583',
        '6NP' => 'E02003583',
        '6NQ' => 'E02003583',
        '6NR' => 'E02003583',
        '6NS' => 'E02003583',
        '6NT' => 'E02003583',
        '6NU' => 'E02003583',
        '6NW' => 'E02003583',
        '6NX' => 'E02003583',
        '6NY' => 'E02003583',
        '6NZ' => 'E02003583',
        '6PA' => 'E02003583',
        '6PB' => 'E02003583',
        '6PD' => 'E02003583',
        '6PH' => 'E02003583',
        '6PJ' => 'E02003583',
        '6PL' => 'E02003583',
        '6PP' => 'E02003583',
        '6PR' => 'E02003583',
        '6PS' => 'E02003583',
        '6PT' => 'E02003583',
        '6PU' => 'E02003583',
        '6PX' => 'E02003583',
        '6QA' => 'E02003583',
        '6QB' => 'E02003583',
        '6QD' => 'E02003583',
        '6QE' => 'E02003583',
        '6QF' => 'E02003583',
        '6QG' => 'E02003583',
        '6QH' => 'E02003583',
        '6QJ' => 'E02003583',
        '6QL' => 'E02003583',
        '6QN' => 'E02003583',
        '6QP' => 'E02003583',
        '6QQ' => 'E02003583',
        '6QR' => 'E02003583',
        '6QS' => 'E02003583',
        '6QT' => 'E02003583',
        '6QU' => 'E02003583',
        '6QW' => 'E02003583',
        '6QX' => 'E02003583',
        '6QY' => 'E02003583',
        '6QZ' => 'E02003583',
        '6RA' => 'E02003581',
        '6RB' => 'E02003583',
        '6RD' => 'E02003583',
        '6RE' => 'E02003583',
        '6RF' => 'E02003583',
        '6RG' => 'E02003583',
        '6RH' => 'E02003583',
        '6RJ' => 'E02003583',
        '6RL' => 'E02003583',
        '6RN' => 'E02003583',
        '6RP' => 'E02003583',
        '6RQ' => 'E02003583',
        '6RR' => 'E02003581',
        '6RS' => 'E02003581',
        '6RT' => 'E02003581',
        '6RU' => 'E02003583',
        '6RX' => 'E02003581',
        '6RY' => 'E02003581',
        '6RZ' => 'E02003581',
        '6SA' => 'E02003581',
        '6SB' => 'E02003581',
        '6SD' => 'E02003581',
        '6SE' => 'E02003581',
        '6SF' => 'E02003581',
        '6SH' => 'E02003581',
        '6SJ' => 'E02003583',
        '6SL' => 'E02003583',
        '6SP' => 'E02003583',
        '6SR' => 'E02003583',
        '6SS' => 'E02003583',
        '6ST' => 'E02003583',
        '6SU' => 'E02003583',
        '6SX' => 'E02003581',
        '6TA' => 'E02003581',
        '6TB' => 'E02003581',
        '6TD' => 'E02003583',
        '6TE' => 'E02003583',
        '6TH' => 'E02003583',
        '6TJ' => 'E02003583',
        '6TL' => 'E02003583',
        '6TP' => 'E02003581',
        '6TR' => 'E02003583',
        '6TS' => 'E02003581',
        '6TT' => 'E02003581',
        '6TU' => 'E02003581',
        '6UA' => 'E02003583',
        '6UB' => 'E02003581',
        '6WA' => 'E02003581',
        '6WB' => 'E02003588',
        '6WZ' => 'E02003588',
        '6XJ' => 'E02003588',
        '6XN' => 'E02003588',
        '6YS' => 'E02003588',
        '6YT' => 'E02003588',
        '6YU' => 'E02003583',
        '6YX' => 'E02003583',
        '6ZN' => 'E02003588',
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