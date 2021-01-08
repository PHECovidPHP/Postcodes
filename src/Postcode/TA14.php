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
final class TA14
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '6AA' => 'E02006091',
        '6AB' => 'E02006091',
        '6AE' => 'E02006091',
        '6HA' => 'E02006091',
        '6PA' => 'E02006091',
        '6PB' => 'E02006091',
        '6PD' => 'E02006091',
        '6PH' => 'E02006091',
        '6PJ' => 'E02006091',
        '6PP' => 'E02006091',
        '6PR' => 'E02006091',
        '6PS' => 'E02006091',
        '6PT' => 'E02006091',
        '6PU' => 'E02006091',
        '6PX' => 'E02006091',
        '6PY' => 'E02006091',
        '6PZ' => 'E02006091',
        '6QA' => 'E02006091',
        '6QB' => 'E02006091',
        '6QD' => 'E02006091',
        '6QE' => 'E02006091',
        '6QF' => 'E02006091',
        '6QG' => 'E02006091',
        '6QH' => 'E02006091',
        '6QJ' => 'E02006091',
        '6QL' => 'E02006091',
        '6QN' => 'E02006091',
        '6QP' => 'E02006091',
        '6QQ' => 'E02006091',
        '6QR' => 'E02006091',
        '6QS' => 'E02006091',
        '6QT' => 'E02006091',
        '6QU' => 'E02006091',
        '6QW' => 'E02006091',
        '6QX' => 'E02006091',
        '6QY' => 'E02006091',
        '6QZ' => 'E02006091',
        '6RA' => 'E02006091',
        '6RD' => 'E02006091',
        '6RE' => 'E02006091',
        '6RF' => 'E02006091',
        '6RG' => 'E02006091',
        '6RH' => 'E02006091',
        '6RJ' => 'E02006091',
        '6RL' => 'E02006091',
        '6RN' => 'E02006091',
        '6RP' => 'E02006091',
        '6RQ' => 'E02006091',
        '6RW' => 'E02006091',
        '6SB' => 'E02006091',
        '6SD' => 'E02006091',
        '6SE' => 'E02006091',
        '6SF' => 'E02006091',
        '6SG' => 'E02006091',
        '6SH' => 'E02006091',
        '6SJ' => 'E02006091',
        '6SL' => 'E02006091',
        '6SN' => 'E02006091',
        '6SP' => 'E02006091',
        '6SQ' => 'E02006091',
        '6SR' => 'E02006091',
        '6SS' => 'E02006091',
        '6ST' => 'E02006091',
        '6SU' => 'E02006091',
        '6SW' => 'E02006091',
        '6SX' => 'E02006091',
        '6SY' => 'E02006091',
        '6SZ' => 'E02006091',
        '6TB' => 'E02006091',
        '6TD' => 'E02006091',
        '6TE' => 'E02006091',
        '6TF' => 'E02006091',
        '6TG' => 'E02006091',
        '6TH' => 'E02006091',
        '6TJ' => 'E02006091',
        '6TL' => 'E02006091',
        '6TN' => 'E02006091',
        '6TP' => 'E02006091',
        '6TQ' => 'E02006091',
        '6TR' => 'E02006091',
        '6TS' => 'E02006091',
        '6TT' => 'E02006091',
        '6TU' => 'E02006091',
        '6TW' => 'E02006091',
        '6TX' => 'E02006091',
        '6TY' => 'E02006091',
        '6TZ' => 'E02006091',
        '6UE' => 'E02006091',
        '6UF' => 'E02006091',
        '6UG' => 'E02006091',
        '6UQ' => 'E02006091',
        '6WA' => 'E02006091',
        '6WT' => 'E02006091',
        '6WU' => 'E02006091',
        '6WW' => 'E02006091',
        '6WX' => 'E02006091',
        '6WY' => 'E02006091',
        '6WZ' => 'E02006091',
        '6XZ' => 'E02006091',
        '6YA' => 'E02006091',
        '6YR' => 'E02006091',
        '6YS' => 'E02006091',
        '6YT' => 'E02006091',
        '6YU' => 'E02006091',
        '6YW' => 'E02006091',
        '6YX' => 'E02006091',
        '6YY' => 'E02006091',
        '6YZ' => 'E02006091',
        '6ZN' => 'E02006091',
        '6ZQ' => 'E02006091',
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
