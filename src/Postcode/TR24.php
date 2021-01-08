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
final class TR24
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AD' => 'E02006781',
        '0AE' => 'E02006781',
        '0PU' => 'E02006781',
        '0PW' => 'E02006781',
        '0PX' => 'E02006781',
        '0PY' => 'E02006781',
        '0PZ' => 'E02006781',
        '0QA' => 'E02006781',
        '0QB' => 'E02006781',
        '0QD' => 'E02006781',
        '0QE' => 'E02006781',
        '0QF' => 'E02006781',
        '0QG' => 'E02006781',
        '0QH' => 'E02006781',
        '0QJ' => 'E02006781',
        '0QL' => 'E02006781',
        '0QQ' => 'E02006781',
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
