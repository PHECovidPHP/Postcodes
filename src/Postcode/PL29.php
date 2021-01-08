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
final class PL29
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '3AB' => 'E02003937',
        '3AD' => 'E02003937',
        '3AE' => 'E02003937',
        '3RA' => 'E02003937',
        '3RB' => 'E02003937',
        '3RD' => 'E02003937',
        '3RE' => 'E02003937',
        '3RF' => 'E02003937',
        '3RG' => 'E02003937',
        '3RH' => 'E02003937',
        '3RJ' => 'E02003937',
        '3RL' => 'E02003937',
        '3RN' => 'E02003937',
        '3RP' => 'E02003937',
        '3RQ' => 'E02003937',
        '3RR' => 'E02003937',
        '3RS' => 'E02003937',
        '3RT' => 'E02003937',
        '3RU' => 'E02003937',
        '3RW' => 'E02003937',
        '3RX' => 'E02003937',
        '3RY' => 'E02003937',
        '3RZ' => 'E02003937',
        '3SA' => 'E02003937',
        '3SB' => 'E02003937',
        '3SD' => 'E02003937',
        '3SE' => 'E02003937',
        '3SF' => 'E02003937',
        '3SG' => 'E02003937',
        '3SH' => 'E02003937',
        '3SJ' => 'E02003937',
        '3SL' => 'E02003937',
        '3SN' => 'E02003937',
        '3SP' => 'E02003937',
        '3SQ' => 'E02003937',
        '3SR' => 'E02003937',
        '3SS' => 'E02003937',
        '3ST' => 'E02003937',
        '3SU' => 'E02003937',
        '3SW' => 'E02003937',
        '3SX' => 'E02003937',
        '3SY' => 'E02003937',
        '3SZ' => 'E02003937',
        '3TA' => 'E02003937',
        '3TB' => 'E02003937',
        '3TE' => 'E02003937',
        '3TF' => 'E02003937',
        '3TG' => 'E02003937',
        '3TH' => 'E02003937',
        '3TJ' => 'E02003937',
        '3TL' => 'E02003937',
        '3TN' => 'E02003937',
        '3TP' => 'E02003937',
        '3TQ' => 'E02003937',
        '3TR' => 'E02003937',
        '3TS' => 'E02003937',
        '3TT' => 'E02003937',
        '3TU' => 'E02003937',
        '3TW' => 'E02003937',
        '3TX' => 'E02003937',
        '3TY' => 'E02003937',
        '3WZ' => 'E02003941',
        '3XJ' => 'E02003937',
        '3YY' => 'E02003937',
        '3YZ' => 'E02003937',
        '3ZN' => 'E02003941',
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
