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
final class TA16
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '5AA' => 'E02006091',
        '5AB' => 'E02006091',
        '5AD' => 'E02006091',
        '5AF' => 'E02006091',
        '5NF' => 'E02006091',
        '5NG' => 'E02006091',
        '5NH' => 'E02006091',
        '5NJ' => 'E02006091',
        '5NL' => 'E02006091',
        '5NN' => 'E02006091',
        '5NP' => 'E02006091',
        '5NQ' => 'E02006091',
        '5NR' => 'E02006091',
        '5NS' => 'E02006091',
        '5NT' => 'E02006091',
        '5NU' => 'E02006091',
        '5NW' => 'E02006091',
        '5PA' => 'E02006091',
        '5PB' => 'E02006091',
        '5PD' => 'E02006091',
        '5PE' => 'E02006091',
        '5PF' => 'E02006091',
        '5PG' => 'E02006091',
        '5PH' => 'E02006091',
        '5PJ' => 'E02006091',
        '5PL' => 'E02006091',
        '5PN' => 'E02006091',
        '5PP' => 'E02006091',
        '5PQ' => 'E02006091',
        '5PR' => 'E02006091',
        '5PS' => 'E02006091',
        '5PT' => 'E02006091',
        '5PU' => 'E02006091',
        '5PW' => 'E02006091',
        '5PX' => 'E02006091',
        '5QA' => 'E02006091',
        '5QG' => 'E02006091',
        '5QH' => 'E02006091',
        '5QJ' => 'E02006091',
        '5QL' => 'E02006091',
        '5QN' => 'E02006091',
        '5QP' => 'E02006091',
        '5QQ' => 'E02006091',
        '5QR' => 'E02006091',
        '5QS' => 'E02006091',
        '5QT' => 'E02006091',
        '5QU' => 'E02006091',
        '5QW' => 'E02006091',
        '5QX' => 'E02006091',
        '5QY' => 'E02006091',
        '5QZ' => 'E02006091',
        '5RA' => 'E02006091',
        '5RB' => 'E02006091',
        '5RD' => 'E02006091',
        '5RE' => 'E02006091',
        '5RF' => 'E02006091',
        '5RG' => 'E02006091',
        '5YA' => 'E02006091',
        '5YB' => 'E02006095',
        '5YD' => 'E02006095',
        '5YZ' => 'E02006095',
        '5ZX' => 'E02006095',
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
