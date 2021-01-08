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
final class PO41
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AB' => 'E02003592',
        '0BA' => 'E02003592',
        '0BD' => 'E02003592',
        '0LA' => 'E02003592',
        '0LB' => 'E02003592',
        '0NA' => 'E02003592',
        '0NB' => 'E02003592',
        '0ND' => 'E02003592',
        '0NH' => 'E02003592',
        '0NJ' => 'E02003592',
        '0NL' => 'E02003592',
        '0NN' => 'E02003592',
        '0NP' => 'E02003592',
        '0NR' => 'E02003592',
        '0NS' => 'E02003592',
        '0NT' => 'E02003592',
        '0NU' => 'E02003592',
        '0NX' => 'E02003592',
        '0NY' => 'E02003592',
        '0NZ' => 'E02003592',
        '0PA' => 'E02003592',
        '0PB' => 'E02003592',
        '0PD' => 'E02003592',
        '0PE' => 'E02003592',
        '0PF' => 'E02003592',
        '0PG' => 'E02003592',
        '0PH' => 'E02003592',
        '0PJ' => 'E02003592',
        '0PL' => 'E02003592',
        '0PN' => 'E02003592',
        '0PP' => 'E02003592',
        '0PQ' => 'E02003592',
        '0PR' => 'E02003592',
        '0PS' => 'E02003592',
        '0PT' => 'E02003592',
        '0PU' => 'E02003592',
        '0PW' => 'E02003592',
        '0PX' => 'E02003592',
        '0PY' => 'E02003592',
        '0PZ' => 'E02003592',
        '0QA' => 'E02003592',
        '0QB' => 'E02003592',
        '0QD' => 'E02003592',
        '0QE' => 'E02003592',
        '0QF' => 'E02003592',
        '0QG' => 'E02003592',
        '0QH' => 'E02003592',
        '0QJ' => 'E02003592',
        '0QL' => 'E02003592',
        '0QN' => 'E02003592',
        '0QP' => 'E02003592',
        '0QQ' => 'E02003592',
        '0QR' => 'E02003592',
        '0QS' => 'E02003592',
        '0QT' => 'E02003592',
        '0QU' => 'E02003592',
        '0QW' => 'E02003592',
        '0QX' => 'E02003592',
        '0QY' => 'E02003592',
        '0QZ' => 'E02003592',
        '0RA' => 'E02003592',
        '0RB' => 'E02003592',
        '0RD' => 'E02003592',
        '0RE' => 'E02003592',
        '0RH' => 'E02003592',
        '0RJ' => 'E02003592',
        '0RL' => 'E02003592',
        '0RN' => 'E02003592',
        '0RP' => 'E02003592',
        '0RR' => 'E02003592',
        '0RS' => 'E02003592',
        '0RT' => 'E02003592',
        '0RU' => 'E02003592',
        '0RW' => 'E02003592',
        '0RX' => 'E02003592',
        '0RY' => 'E02003592',
        '0SA' => 'E02003592',
        '0SB' => 'E02003592',
        '0SD' => 'E02003592',
        '0SE' => 'E02003592',
        '0SH' => 'E02003592',
        '0SJ' => 'E02003592',
        '0SL' => 'E02003592',
        '0SN' => 'E02003592',
        '0SP' => 'E02003592',
        '0SR' => 'E02003592',
        '0SS' => 'E02003592',
        '0ST' => 'E02003592',
        '0SU' => 'E02003592',
        '0SW' => 'E02003592',
        '0SX' => 'E02003592',
        '0SY' => 'E02003593',
        '0SZ' => 'E02003593',
        '0TA' => 'E02003593',
        '0TB' => 'E02003593',
        '0TD' => 'E02003593',
        '0TE' => 'E02003593',
        '0TF' => 'E02003593',
        '0TG' => 'E02003593',
        '0TH' => 'E02003593',
        '0TJ' => 'E02003593',
        '0TL' => 'E02003593',
        '0TN' => 'E02003593',
        '0TP' => 'E02003593',
        '0TQ' => 'E02003593',
        '0TR' => 'E02003593',
        '0TS' => 'E02003593',
        '0TT' => 'E02003593',
        '0TU' => 'E02003593',
        '0TW' => 'E02003593',
        '0TX' => 'E02003593',
        '0TY' => 'E02003593',
        '0TZ' => 'E02003593',
        '0UA' => 'E02003593',
        '0UB' => 'E02003593',
        '0UD' => 'E02003593',
        '0UE' => 'E02003593',
        '0UF' => 'E02003593',
        '0UG' => 'E02003593',
        '0UH' => 'E02003592',
        '0UJ' => 'E02003593',
        '0UL' => 'E02003593',
        '0UP' => 'E02003592',
        '0UQ' => 'E02003593',
        '0UR' => 'E02003592',
        '0US' => 'E02003592',
        '0UT' => 'E02003592',
        '0UU' => 'E02003592',
        '0UX' => 'E02003592',
        '0UY' => 'E02003592',
        '0UZ' => 'E02003592',
        '0WA' => 'E02003592',
        '0WX' => 'E02003592',
        '0XA' => 'E02003592',
        '0XB' => 'E02003592',
        '0XD' => 'E02003592',
        '0XE' => 'E02003592',
        '0XF' => 'E02003592',
        '0XH' => 'E02003592',
        '0XJ' => 'E02003592',
        '0XL' => 'E02003593',
        '0XN' => 'E02003593',
        '0XP' => 'E02003593',
        '0XQ' => 'E02003592',
        '0XR' => 'E02003593',
        '0XS' => 'E02003593',
        '0XT' => 'E02003593',
        '0XU' => 'E02003593',
        '0XW' => 'E02003593',
        '0XX' => 'E02003593',
        '0XY' => 'E02003593',
        '0XZ' => 'E02003593',
        '0YA' => 'E02003593',
        '0YB' => 'E02003593',
        '0YD' => 'E02003593',
        '0YE' => 'E02003593',
        '0YF' => 'E02003593',
        '0YH' => 'E02003588',
        '0YJ' => 'E02003592',
        '0YL' => 'E02003592',
        '0YP' => 'E02003592',
        '0YR' => 'E02003593',
        '0YS' => 'E02003592',
        '0YT' => 'E02003592',
        '0YU' => 'E02003592',
        '0YX' => 'E02003592',
        '0YY' => 'E02003592',
        '0ZL' => 'E02003592',
        '0ZN' => 'E02003588',
        '0ZQ' => 'E02003592',
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
