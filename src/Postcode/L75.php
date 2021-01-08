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
final class L75
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02006934',
        '1AB' => 'E02006934',
        '1AD' => 'E02006934',
        '1AE' => 'E02006934',
        '1AH' => 'E02006934',
        '1AX' => 'E02001457',
        '1AY' => 'E02001457',
        '1AZ' => 'E02001465',
        '1BB' => 'E02001465',
        '1BL' => 'E02001465',
        '1BQ' => 'E02001465',
        '1EE' => 'E02001457',
        '1EU' => 'E02001396',
        '1HB' => 'E02001465',
        '1HL' => 'E02001457',
        '1HP' => 'E02001465',
        '1HR' => 'E02001465',
        '1HS' => 'E02001465',
        '1HT' => 'E02001465',
        '1HU' => 'E02001465',
        '1HW' => 'E02001465',
        '1HX' => 'E02001465',
        '1HY' => 'E02001465',
        '1RN' => 'E02001457',
        '1WX' => 'E02001396',
        '1XA' => 'E02001396',
        '1ZX' => 'E02001457',
        '1ZY' => 'E02001396',
        '2BB' => 'E02001465',
        '2DD' => 'E02001465',
        '2ED' => 'E02001463',
        '2EE' => 'E02001465',
        '2GG' => 'E02001465',
        '2LL' => 'E02001465',
        '2PR' => 'E02001465',
        '2TT' => 'E02001465',
        '2XA' => 'E02001463',
        '2YY' => 'E02001465',
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
