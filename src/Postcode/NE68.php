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
final class NE68
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '7BA' => 'E02005708',
        '7BB' => 'E02005708',
        '7BD' => 'E02005708',
        '7BE' => 'E02005708',
        '7PA' => 'E02005708',
        '7QP' => 'E02005708',
        '7RB' => 'E02005708',
        '7RD' => 'E02005708',
        '7RE' => 'E02005708',
        '7RF' => 'E02005708',
        '7RG' => 'E02005708',
        '7RH' => 'E02005708',
        '7RJ' => 'E02005708',
        '7RL' => 'E02005708',
        '7RN' => 'E02005708',
        '7RP' => 'E02005708',
        '7RQ' => 'E02005708',
        '7RR' => 'E02005708',
        '7RS' => 'E02005708',
        '7RT' => 'E02005708',
        '7RU' => 'E02005708',
        '7RW' => 'E02005708',
        '7RX' => 'E02005708',
        '7RY' => 'E02005708',
        '7RZ' => 'E02005708',
        '7SA' => 'E02005708',
        '7SB' => 'E02005708',
        '7SD' => 'E02005708',
        '7SE' => 'E02005708',
        '7SF' => 'E02005708',
        '7SG' => 'E02005708',
        '7SH' => 'E02005708',
        '7SJ' => 'E02005708',
        '7SL' => 'E02005708',
        '7SN' => 'E02005708',
        '7SP' => 'E02005708',
        '7SQ' => 'E02005708',
        '7SR' => 'E02005708',
        '7SS' => 'E02005708',
        '7ST' => 'E02005708',
        '7SU' => 'E02005708',
        '7SW' => 'E02005708',
        '7SX' => 'E02005708',
        '7SY' => 'E02005708',
        '7SZ' => 'E02005708',
        '7TA' => 'E02005708',
        '7TB' => 'E02005708',
        '7TD' => 'E02005708',
        '7TE' => 'E02005708',
        '7TN' => 'E02005708',
        '7TP' => 'E02005708',
        '7TQ' => 'E02005708',
        '7TR' => 'E02005708',
        '7TS' => 'E02005708',
        '7TT' => 'E02005708',
        '7TU' => 'E02005708',
        '7TW' => 'E02005708',
        '7TX' => 'E02005708',
        '7TY' => 'E02005708',
        '7TZ' => 'E02005708',
        '7UA' => 'E02005708',
        '7UB' => 'E02005708',
        '7UD' => 'E02005708',
        '7UE' => 'E02005708',
        '7UF' => 'E02005708',
        '7UG' => 'E02005708',
        '7UH' => 'E02005708',
        '7UJ' => 'E02005708',
        '7UL' => 'E02005708',
        '7UN' => 'E02005708',
        '7UP' => 'E02005708',
        '7UQ' => 'E02005708',
        '7UR' => 'E02005708',
        '7US' => 'E02005708',
        '7UT' => 'E02005708',
        '7UU' => 'E02005708',
        '7UW' => 'E02005708',
        '7UX' => 'E02005708',
        '7UY' => 'E02005708',
        '7UZ' => 'E02005708',
        '7WA' => 'E02005703',
        '7WB' => 'E02005708',
        '7WD' => 'E02005703',
        '7WE' => 'E02005708',
        '7WF' => 'E02005708',
        '7WG' => 'E02005708',
        '7WH' => 'E02005708',
        '7WJ' => 'E02005708',
        '7WZ' => 'E02005703',
        '7XA' => 'E02005708',
        '7XB' => 'E02005708',
        '7XD' => 'E02005703',
        '7XJ' => 'E02005708',
        '7XL' => 'E02005708',
        '7XN' => 'E02005708',
        '7XP' => 'E02005708',
        '7XR' => 'E02005708',
        '7XS' => 'E02005708',
        '7XT' => 'E02005708',
        '7XW' => 'E02005708',
        '7XY' => 'E02005708',
        '7XZ' => 'E02005708',
        '7YA' => 'E02005708',
        '7YB' => 'E02005708',
        '7YD' => 'E02005708',
        '7YE' => 'E02005708',
        '7YF' => 'E02005708',
        '7YH' => 'E02005708',
        '7YJ' => 'E02005708',
        '7YL' => 'E02005708',
        '7YN' => 'E02005708',
        '7YR' => 'E02005708',
        '7YS' => 'E02005708',
        '7YT' => 'E02005708',
        '7YU' => 'E02005708',
        '7YW' => 'E02005708',
        '7YZ' => 'E02005703',
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
