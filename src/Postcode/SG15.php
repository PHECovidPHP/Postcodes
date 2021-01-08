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
final class SG15
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '6AA' => 'E02003608',
        '6AB' => 'E02003608',
        '6AE' => 'E02003608',
        '6AF' => 'E02003608',
        '6AG' => 'E02003608',
        '6AH' => 'E02003608',
        '6AJ' => 'E02003608',
        '6AP' => 'E02003608',
        '6BA' => 'E02003608',
        '6BD' => 'E02003608',
        '6DG' => 'E02003608',
        '6FB' => 'E02003608',
        '6GB' => 'E02004914',
        '6GD' => 'E02003608',
        '6GG' => 'E02003608',
        '6GH' => 'E02003608',
        '6PB' => 'E02003608',
        '6PD' => 'E02003608',
        '6QY' => 'E02003608',
        '6QZ' => 'E02003608',
        '6RA' => 'E02003608',
        '6RB' => 'E02003608',
        '6RD' => 'E02003608',
        '6RE' => 'E02003608',
        '6RF' => 'E02003608',
        '6RG' => 'E02003608',
        '6RH' => 'E02003608',
        '6RJ' => 'E02003608',
        '6RL' => 'E02003608',
        '6RN' => 'E02003608',
        '6RP' => 'E02003608',
        '6RQ' => 'E02003608',
        '6RR' => 'E02003608',
        '6RS' => 'E02003608',
        '6RT' => 'E02003608',
        '6RU' => 'E02003608',
        '6RW' => 'E02003608',
        '6RX' => 'E02003608',
        '6RY' => 'E02003608',
        '6RZ' => 'E02003608',
        '6SA' => 'E02003608',
        '6SB' => 'E02003608',
        '6SD' => 'E02003608',
        '6SE' => 'E02003608',
        '6SF' => 'E02003608',
        '6SG' => 'E02003608',
        '6SH' => 'E02003608',
        '6SJ' => 'E02003608',
        '6SL' => 'E02003608',
        '6SN' => 'E02003608',
        '6SP' => 'E02003608',
        '6SQ' => 'E02003608',
        '6SR' => 'E02003608',
        '6SS' => 'E02003608',
        '6ST' => 'E02003608',
        '6SU' => 'E02003608',
        '6SW' => 'E02003608',
        '6SX' => 'E02003608',
        '6SY' => 'E02003608',
        '6SZ' => 'E02003608',
        '6TA' => 'E02003608',
        '6TB' => 'E02003608',
        '6TD' => 'E02003608',
        '6TE' => 'E02003608',
        '6TF' => 'E02003608',
        '6TG' => 'E02003608',
        '6TH' => 'E02003608',
        '6TJ' => 'E02003608',
        '6TL' => 'E02003608',
        '6TN' => 'E02003608',
        '6TP' => 'E02003608',
        '6TQ' => 'E02003608',
        '6TR' => 'E02003608',
        '6TS' => 'E02003608',
        '6TT' => 'E02003608',
        '6TU' => 'E02003608',
        '6TW' => 'E02003608',
        '6TX' => 'E02003608',
        '6TY' => 'E02003608',
        '6TZ' => 'E02003608',
        '6UA' => 'E02003608',
        '6UB' => 'E02003608',
        '6UD' => 'E02003608',
        '6UE' => 'E02003608',
        '6UF' => 'E02003608',
        '6UG' => 'E02003608',
        '6UH' => 'E02003608',
        '6UJ' => 'E02003608',
        '6UL' => 'E02003608',
        '6UN' => 'E02003608',
        '6UP' => 'E02003608',
        '6UQ' => 'E02003608',
        '6UR' => 'E02003608',
        '6US' => 'E02003608',
        '6UT' => 'E02003608',
        '6UU' => 'E02003608',
        '6UW' => 'E02003608',
        '6UX' => 'E02003608',
        '6UY' => 'E02003608',
        '6UZ' => 'E02003608',
        '6WA' => 'E02003608',
        '6WB' => 'E02003608',
        '6WD' => 'E02003608',
        '6WE' => 'E02003608',
        '6WF' => 'E02004914',
        '6WJ' => 'E02003608',
        '6WL' => 'E02003608',
        '6WW' => 'E02004914',
        '6WX' => 'E02003608',
        '6WY' => 'E02003608',
        '6WZ' => 'E02004914',
        '6XA' => 'E02003608',
        '6XB' => 'E02003608',
        '6XD' => 'E02003608',
        '6XE' => 'E02003608',
        '6XF' => 'E02003608',
        '6XG' => 'E02003608',
        '6XH' => 'E02003608',
        '6XJ' => 'E02003608',
        '6XL' => 'E02003608',
        '6XN' => 'E02003608',
        '6XP' => 'E02003608',
        '6XQ' => 'E02003608',
        '6XR' => 'E02003608',
        '6XS' => 'E02003608',
        '6XT' => 'E02003608',
        '6XU' => 'E02003608',
        '6XW' => 'E02004914',
        '6XX' => 'E02003608',
        '6XZ' => 'E02003608',
        '6YA' => 'E02003608',
        '6YB' => 'E02003608',
        '6YD' => 'E02003608',
        '6YE' => 'E02003608',
        '6YF' => 'E02003608',
        '6YG' => 'E02003608',
        '6YH' => 'E02003608',
        '6YJ' => 'E02003608',
        '6YL' => 'E02003608',
        '6YN' => 'E02003608',
        '6YP' => 'E02003608',
        '6YQ' => 'E02003608',
        '6YR' => 'E02003608',
        '6YS' => 'E02003608',
        '6YT' => 'E02003608',
        '6YU' => 'E02003608',
        '6YW' => 'E02003608',
        '6YY' => 'E02003608',
        '6ZA' => 'E02003608',
        '6ZB' => 'E02003608',
        '6ZJ' => 'E02003608',
        '6ZN' => 'E02003608',
        '6ZQ' => 'E02003608',
        '6ZU' => 'E02003608',
        '6ZW' => 'E02003608',
        '6ZX' => 'E02003608',
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
