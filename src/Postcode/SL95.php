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
final class SL95
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02003417',
        '1AB' => 'E02003417',
        '1AN' => 'E02003419',
        '1AR' => 'E02003419',
        '1BU' => 'E02003419',
        '1BY' => 'E02003419',
        '1DB' => 'E02003419',
        '1DU' => 'E02003419',
        '1DX' => 'E02003419',
        '1EN' => 'E02003419',
        '1EU' => 'E02003419',
        '1FU' => 'E02003419',
        '1HR' => 'E02003419',
        '1LU' => 'E02003419',
        '1ND' => 'E02003419',
        '1NR' => 'E02003419',
        '1NT' => 'E02003419',
        '1NU' => 'E02003419',
        '1NX' => 'E02003417',
        '1PU' => 'E02003419',
        '1SN' => 'E02003419',
        '1SQ' => 'E02003419',
        '1SX' => 'E02003419',
        '1TX' => 'E02003419',
        '1UX' => 'E02003419',
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
