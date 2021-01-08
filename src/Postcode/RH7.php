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
final class RH7
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '6AA' => 'E02006437',
        '6AB' => 'E02006437',
        '6AD' => 'E02006437',
        '6AE' => 'E02006437',
        '6AF' => 'E02006437',
        '6AG' => 'E02006437',
        '6AH' => 'E02006437',
        '6AJ' => 'E02006437',
        '6AL' => 'E02006437',
        '6AN' => 'E02006438',
        '6AP' => 'E02006437',
        '6AQ' => 'E02006437',
        '6AR' => 'E02006437',
        '6AS' => 'E02006437',
        '6AT' => 'E02006436',
        '6AU' => 'E02006437',
        '6AW' => 'E02006437',
        '6AX' => 'E02006437',
        '6AY' => 'E02006437',
        '6AZ' => 'E02006437',
        '6BA' => 'E02006437',
        '6BB' => 'E02006437',
        '6BD' => 'E02006437',
        '6BE' => 'E02006437',
        '6BF' => 'E02006437',
        '6BG' => 'E02006437',
        '6BH' => 'E02006437',
        '6BJ' => 'E02006437',
        '6BL' => 'E02006438',
        '6BN' => 'E02006437',
        '6BP' => 'E02006437',
        '6BQ' => 'E02006437',
        '6BS' => 'E02006437',
        '6BT' => 'E02006437',
        '6BU' => 'E02006437',
        '6BW' => 'E02006437',
        '6BX' => 'E02006437',
        '6BY' => 'E02006437',
        '6BZ' => 'E02006437',
        '6DA' => 'E02006437',
        '6DB' => 'E02006437',
        '6DD' => 'E02006437',
        '6DE' => 'E02006437',
        '6DF' => 'E02006437',
        '6DG' => 'E02006437',
        '6DH' => 'E02006437',
        '6DJ' => 'E02006437',
        '6DL' => 'E02006437',
        '6DN' => 'E02006437',
        '6DP' => 'E02006437',
        '6DQ' => 'E02006437',
        '6DR' => 'E02006437',
        '6DS' => 'E02006437',
        '6DT' => 'E02006437',
        '6DU' => 'E02006437',
        '6DW' => 'E02006437',
        '6DX' => 'E02006437',
        '6DY' => 'E02006437',
        '6DZ' => 'E02006437',
        '6EA' => 'E02006437',
        '6EB' => 'E02006437',
        '6ED' => 'E02006437',
        '6EE' => 'E02006437',
        '6EF' => 'E02006437',
        '6EG' => 'E02006437',
        '6EH' => 'E02006437',
        '6EJ' => 'E02006437',
        '6EL' => 'E02006437',
        '6EN' => 'E02006437',
        '6EP' => 'E02006437',
        '6EQ' => 'E02006437',
        '6ER' => 'E02006437',
        '6ES' => 'E02006437',
        '6ET' => 'E02006437',
        '6EU' => 'E02006437',
        '6EW' => 'E02006437',
        '6EX' => 'E02006437',
        '6EY' => 'E02006437',
        '6EZ' => 'E02006437',
        '6FA' => 'E02006437',
        '6FB' => 'E02006437',
        '6FD' => 'E02006437',
        '6FE' => 'E02006437',
        '6FF' => 'E02006437',
        '6FG' => 'E02006437',
        '6FH' => 'E02006437',
        '6FJ' => 'E02006437',
        '6FL' => 'E02006437',
        '6FN' => 'E02006437',
        '6FP' => 'E02006437',
        '6FQ' => 'E02006437',
        '6FR' => 'E02006437',
        '6FS' => 'E02006437',
        '6FT' => 'E02006437',
        '6FU' => 'E02006437',
        '6FW' => 'E02006437',
        '6FX' => 'E02006437',
        '6FY' => 'E02006437',
        '6FZ' => 'E02006437',
        '6GA' => 'E02006437',
        '6GB' => 'E02006437',
        '6GD' => 'E02006437',
        '6GE' => 'E02006437',
        '6GF' => 'E02006437',
        '6GG' => 'E02006436',
        '6GH' => 'E02006437',
        '6GJ' => 'E02006438',
        '6GL' => 'E02006437',
        '6GN' => 'E02006437',
        '6GP' => 'E02006438',
        '6GQ' => 'E02006438',
        '6GR' => 'E02006437',
        '6GS' => 'E02006436',
        '6GT' => 'E02006437',
        '6HA' => 'E02006437',
        '6HB' => 'E02006437',
        '6HD' => 'E02006437',
        '6HE' => 'E02006437',
        '6HF' => 'E02006437',
        '6HG' => 'E02006437',
        '6HH' => 'E02006438',
        '6HJ' => 'E02006438',
        '6HL' => 'E02006438',
        '6HN' => 'E02006438',
        '6HP' => 'E02006438',
        '6HQ' => 'E02006437',
        '6HR' => 'E02006438',
        '6HS' => 'E02006438',
        '6HT' => 'E02006438',
        '6HU' => 'E02006438',
        '6HW' => 'E02006438',
        '6HX' => 'E02006438',
        '6HY' => 'E02006438',
        '6HZ' => 'E02006437',
        '6JA' => 'E02006438',
        '6JB' => 'E02006438',
        '6JD' => 'E02006437',
        '6JE' => 'E02006436',
        '6JF' => 'E02006436',
        '6JG' => 'E02006437',
        '6JH' => 'E02006437',
        '6JJ' => 'E02006436',
        '6JL' => 'E02006436',
        '6JN' => 'E02006436',
        '6JP' => 'E02006436',
        '6JQ' => 'E02006437',
        '6JR' => 'E02006436',
        '6JS' => 'E02006436',
        '6JT' => 'E02006436',
        '6JU' => 'E02006436',
        '6JW' => 'E02006436',
        '6JX' => 'E02006436',
        '6JY' => 'E02006436',
        '6JZ' => 'E02006436',
        '6LA' => 'E02006436',
        '6LB' => 'E02006437',
        '6LD' => 'E02006438',
        '6LE' => 'E02006438',
        '6LF' => 'E02006438',
        '6LG' => 'E02006438',
        '6LH' => 'E02006436',
        '6LJ' => 'E02006436',
        '6LL' => 'E02006436',
        '6LN' => 'E02006437',
        '6LP' => 'E02006437',
        '6LQ' => 'E02006436',
        '6LR' => 'E02006437',
        '6LS' => 'E02006437',
        '6LT' => 'E02006437',
        '6LU' => 'E02006437',
        '6LW' => 'E02006433',
        '6LX' => 'E02006437',
        '6LY' => 'E02006437',
        '6LZ' => 'E02006438',
        '6NA' => 'E02006437',
        '6NB' => 'E02006438',
        '6ND' => 'E02006437',
        '6NE' => 'E02006437',
        '6NF' => 'E02006437',
        '6NG' => 'E02006437',
        '6NH' => 'E02006437',
        '6NJ' => 'E02006437',
        '6NL' => 'E02006437',
        '6NN' => 'E02006437',
        '6NP' => 'E02006437',
        '6NQ' => 'E02006437',
        '6NR' => 'E02006437',
        '6NS' => 'E02006437',
        '6NT' => 'E02006437',
        '6NU' => 'E02006437',
        '6NW' => 'E02006438',
        '6NX' => 'E02006437',
        '6NY' => 'E02006437',
        '6NZ' => 'E02006437',
        '6PA' => 'E02006437',
        '6PB' => 'E02006437',
        '6PD' => 'E02006437',
        '6PE' => 'E02006437',
        '6PF' => 'E02006437',
        '6PG' => 'E02006437',
        '6PH' => 'E02006437',
        '6PJ' => 'E02006437',
        '6PL' => 'E02006437',
        '6PN' => 'E02006437',
        '6PP' => 'E02006437',
        '6PQ' => 'E02006437',
        '6PR' => 'E02006437',
        '6PS' => 'E02006437',
        '6PT' => 'E02006437',
        '6PU' => 'E02006437',
        '6PW' => 'E02006437',
        '6PX' => 'E02006437',
        '6PY' => 'E02006437',
        '6PZ' => 'E02006437',
        '6QA' => 'E02006437',
        '6QB' => 'E02006437',
        '6QD' => 'E02006437',
        '6QE' => 'E02006437',
        '6QF' => 'E02006437',
        '6QH' => 'E02006437',
        '6QJ' => 'E02006437',
        '6QL' => 'E02006437',
        '6QN' => 'E02006437',
        '6QP' => 'E02006437',
        '6QQ' => 'E02006437',
        '6QR' => 'E02006437',
        '6QS' => 'E02006437',
        '6QT' => 'E02006437',
        '6QU' => 'E02006437',
        '6QW' => 'E02006437',
        '6QX' => 'E02006437',
        '6QY' => 'E02006437',
        '6QZ' => 'E02006437',
        '6RA' => 'E02006437',
        '6RB' => 'E02006437',
        '6RD' => 'E02006437',
        '6RE' => 'E02006437',
        '6RF' => 'E02006437',
        '6RG' => 'E02006437',
        '6RH' => 'E02006437',
        '6RJ' => 'E02006437',
        '6RL' => 'E02006437',
        '6RN' => 'E02006437',
        '6RQ' => 'E02006437',
        '6RS' => 'E02006437',
        '6RT' => 'E02006437',
        '6SA' => 'E02006437',
        '6TA' => 'E02006437',
        '6UG' => 'E02006437',
        '6UP' => 'E02006437',
        '6UZ' => 'E02006437',
        '6WA' => 'E02006437',
        '6WB' => 'E02006437',
        '6WD' => 'E02006437',
        '6WE' => 'E02006437',
        '6WF' => 'E02006437',
        '6WG' => 'E02006437',
        '6WH' => 'E02006437',
        '6WJ' => 'E02006437',
        '6WL' => 'E02006437',
        '6WP' => 'E02006437',
        '6WQ' => 'E02006437',
        '6WR' => 'E02006437',
        '6WS' => 'E02006437',
        '6WT' => 'E02006437',
        '6WU' => 'E02006437',
        '6WW' => 'E02006437',
        '6WX' => 'E02006437',
        '6WY' => 'E02006437',
        '6WZ' => 'E02006437',
        '6XA' => 'E02006437',
        '6XQ' => 'E02006437',
        '6XR' => 'E02006437',
        '6XT' => 'E02006437',
        '6XW' => 'E02006437',
        '6XX' => 'E02006437',
        '6XY' => 'E02006437',
        '6XZ' => 'E02006437',
        '6YA' => 'E02006437',
        '6YB' => 'E02006437',
        '6YD' => 'E02006437',
        '6YE' => 'E02006437',
        '6YF' => 'E02006437',
        '6YG' => 'E02006437',
        '6YH' => 'E02006437',
        '6YJ' => 'E02006437',
        '6YL' => 'E02006437',
        '6YN' => 'E02006437',
        '6YP' => 'E02006437',
        '6YQ' => 'E02006437',
        '6YR' => 'E02006437',
        '6YS' => 'E02006437',
        '6YT' => 'E02006437',
        '6YU' => 'E02006437',
        '6YW' => 'E02006437',
        '6YX' => 'E02006437',
        '6YY' => 'E02006437',
        '6YZ' => 'E02006437',
        '9AE' => 'E02006437',
        '9AH' => 'E02006437',
        '9AJ' => 'E02006437',
        '9AL' => 'E02006437',
        '9AN' => 'E02006437',
        '9AP' => 'E02006437',
        '9AQ' => 'E02006437',
        '9AR' => 'E02006437',
        '9AS' => 'E02006437',
        '9AT' => 'E02006437',
        '9AU' => 'E02006437',
        '9AW' => 'E02006437',
        '9AX' => 'E02006437',
        '9AY' => 'E02006437',
        '9AZ' => 'E02006437',
        '9BA' => 'E02006437',
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