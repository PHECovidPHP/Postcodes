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
final class NE18
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02005726',
        '0AB' => 'E02005726',
        '0AD' => 'E02005726',
        '0AE' => 'E02005726',
        '0AF' => 'E02005726',
        '0AG' => 'E02005726',
        '0AQ' => 'E02005726',
        '0AX' => 'E02005726',
        '0AY' => 'E02005726',
        '0AZ' => 'E02005726',
        '0BA' => 'E02005726',
        '0BB' => 'E02005726',
        '0BD' => 'E02005726',
        '0BE' => 'E02005726',
        '0BG' => 'E02005726',
        '0BH' => 'E02005726',
        '0BJ' => 'E02005726',
        '0BL' => 'E02005726',
        '0BN' => 'E02005726',
        '0BP' => 'E02005726',
        '0BQ' => 'E02005726',
        '0BW' => 'E02005726',
        '0DE' => 'E02005726',
        '0DF' => 'E02005726',
        '0LA' => 'E02005726',
        '0LB' => 'E02005726',
        '0LD' => 'E02005726',
        '0LE' => 'E02005726',
        '0LF' => 'E02005726',
        '0LG' => 'E02005726',
        '0LH' => 'E02005729',
        '0LJ' => 'E02005729',
        '0LL' => 'E02005729',
        '0LN' => 'E02005726',
        '0LQ' => 'E02005726',
        '0NA' => 'E02005726',
        '0NB' => 'E02005726',
        '0ND' => 'E02005726',
        '0NE' => 'E02005726',
        '0NF' => 'E02005726',
        '0NG' => 'E02005726',
        '0NH' => 'E02005726',
        '0NQ' => 'E02005726',
        '0PB' => 'E02005726',
        '0PD' => 'E02005726',
        '0PE' => 'E02005726',
        '0PF' => 'E02005726',
        '0PG' => 'E02005726',
        '0PH' => 'E02005726',
        '0PJ' => 'E02005726',
        '0PL' => 'E02005726',
        '0PN' => 'E02005726',
        '0PP' => 'E02005726',
        '0PQ' => 'E02005726',
        '0PR' => 'E02005726',
        '0PS' => 'E02005726',
        '0PT' => 'E02005726',
        '0PU' => 'E02005726',
        '0PW' => 'E02005726',
        '0PX' => 'E02005726',
        '0PY' => 'E02005726',
        '0PZ' => 'E02005726',
        '0QG' => 'E02005726',
        '0QH' => 'E02005726',
        '0QJ' => 'E02005726',
        '0QL' => 'E02005726',
        '0QN' => 'E02005726',
        '0QP' => 'E02005726',
        '0QQ' => 'E02005726',
        '0QR' => 'E02005726',
        '0QS' => 'E02005726',
        '0QT' => 'E02005726',
        '0QU' => 'E02005726',
        '0QW' => 'E02005726',
        '0QX' => 'E02005726',
        '0WZ' => 'E02005725',
        '0YY' => 'E02005725',
        '0YZ' => 'E02005725',
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
