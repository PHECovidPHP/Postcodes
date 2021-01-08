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
final class DN39
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '6AA' => 'E02002752',
        '6AB' => 'E02002752',
        '6AD' => 'E02002752',
        '6AF' => 'E02002752',
        '6AG' => 'E02002752',
        '6FA' => 'E02002752',
        '6FB' => 'E02002752',
        '6GA' => 'E02002752',
        '6GB' => 'E02002752',
        '6GD' => 'E02002752',
        '6GH' => 'E02002726',
        '6GU' => 'E02002752',
        '6GW' => 'E02002752',
        '6HB' => 'E02002752',
        '6LD' => 'E02002752',
        '6RB' => 'E02002752',
        '6RD' => 'E02002752',
        '6RE' => 'E02002752',
        '6RF' => 'E02002752',
        '6RG' => 'E02002752',
        '6RH' => 'E02002752',
        '6RJ' => 'E02002752',
        '6RL' => 'E02002752',
        '6RN' => 'E02002752',
        '6RP' => 'E02002752',
        '6RQ' => 'E02002752',
        '6RR' => 'E02002752',
        '6RS' => 'E02002752',
        '6RT' => 'E02002752',
        '6RW' => 'E02002752',
        '6RX' => 'E02002752',
        '6RY' => 'E02002752',
        '6RZ' => 'E02002752',
        '6SA' => 'E02002752',
        '6SB' => 'E02002752',
        '6SD' => 'E02002752',
        '6SE' => 'E02002752',
        '6SF' => 'E02002752',
        '6SG' => 'E02002752',
        '6SH' => 'E02002752',
        '6SJ' => 'E02002752',
        '6SL' => 'E02002752',
        '6SN' => 'E02002752',
        '6SP' => 'E02002752',
        '6SQ' => 'E02002752',
        '6SR' => 'E02002752',
        '6SS' => 'E02005492',
        '6ST' => 'E02002752',
        '6SU' => 'E02002752',
        '6SW' => 'E02002752',
        '6SX' => 'E02002752',
        '6SY' => 'E02002752',
        '6SZ' => 'E02002752',
        '6TA' => 'E02002752',
        '6TB' => 'E02002752',
        '6TD' => 'E02002752',
        '6TE' => 'E02002752',
        '6TF' => 'E02002752',
        '6TG' => 'E02002752',
        '6TH' => 'E02002752',
        '6TJ' => 'E02002752',
        '6TL' => 'E02002752',
        '6TQ' => 'E02002752',
        '6TR' => 'E02002752',
        '6TS' => 'E02002752',
        '6TT' => 'E02002752',
        '6TU' => 'E02002752',
        '6TW' => 'E02002752',
        '6TX' => 'E02002752',
        '6TY' => 'E02002752',
        '6TZ' => 'E02002752',
        '6UA' => 'E02002752',
        '6UB' => 'E02002752',
        '6UD' => 'E02002752',
        '6UE' => 'E02002752',
        '6UF' => 'E02002752',
        '6UG' => 'E02002752',
        '6UH' => 'E02002752',
        '6UJ' => 'E02002752',
        '6UL' => 'E02002752',
        '6UN' => 'E02002752',
        '6UP' => 'E02002752',
        '6UQ' => 'E02002752',
        '6UR' => 'E02002752',
        '6US' => 'E02002752',
        '6UT' => 'E02002752',
        '6UU' => 'E02002752',
        '6UW' => 'E02002752',
        '6UX' => 'E02002752',
        '6UZ' => 'E02002752',
        '6WA' => 'E02002752',
        '6WB' => 'E02002726',
        '6WX' => 'E02002726',
        '6WY' => 'E02002752',
        '6WZ' => 'E02002726',
        '6XA' => 'E02002752',
        '6XB' => 'E02002752',
        '6XD' => 'E02002752',
        '6XF' => 'E02002752',
        '6XG' => 'E02002726',
        '6XH' => 'E02002752',
        '6XJ' => 'E02002752',
        '6XL' => 'E02002752',
        '6XN' => 'E02002752',
        '6XP' => 'E02002752',
        '6XQ' => 'E02002752',
        '6XR' => 'E02002752',
        '6XS' => 'E02002752',
        '6XT' => 'E02002752',
        '6XU' => 'E02002752',
        '6XW' => 'E02002752',
        '6XX' => 'E02002726',
        '6XY' => 'E02002752',
        '6XZ' => 'E02002752',
        '6YA' => 'E02002752',
        '6YB' => 'E02002752',
        '6YD' => 'E02002752',
        '6YE' => 'E02002752',
        '6YF' => 'E02002752',
        '6YG' => 'E02002752',
        '6YH' => 'E02002752',
        '6YJ' => 'E02002752',
        '6YL' => 'E02002752',
        '6YN' => 'E02002752',
        '6YP' => 'E02002752',
        '6YQ' => 'E02002752',
        '6YR' => 'E02002752',
        '6YS' => 'E02002752',
        '6YT' => 'E02002752',
        '6YU' => 'E02002752',
        '6YW' => 'E02002752',
        '6YX' => 'E02002752',
        '6YY' => 'E02002752',
        '6YZ' => 'E02002752',
        '6ZT' => 'E02002726',
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