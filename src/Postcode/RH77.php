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
final class RH77
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02006578',
        '1AB' => 'E02006578',
        '1AD' => 'E02006578',
        '1AE' => 'E02006578',
        '1AF' => 'E02006578',
        '1AG' => 'E02006578',
        '1AH' => 'E02006578',
        '1AJ' => 'E02006578',
        '1AL' => 'E02006578',
        '1AN' => 'E02006578',
        '1AP' => 'E02006578',
        '1AQ' => 'E02006578',
        '1AR' => 'E02006578',
        '1AS' => 'E02006578',
        '1AT' => 'E02006578',
        '1AU' => 'E02006578',
        '1AW' => 'E02006578',
        '1AX' => 'E02006578',
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
