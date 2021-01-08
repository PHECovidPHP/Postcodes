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
final class S49
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02004064',
        '1AB' => 'E02004064',
        '1AD' => 'E02004064',
        '1FB' => 'E02004064',
        '1FD' => 'E02004064',
        '1FE' => 'E02004064',
        '1FF' => 'E02004064',
        '1FJ' => 'E02004064',
        '1FQ' => 'E02004064',
        '1HH' => 'E02004064',
        '1HQ' => 'E02004064',
        '1PF' => 'E02004064',
        '1WW' => 'E02004064',
        '1WX' => 'E02004064',
        '1XU' => 'E02004064',
        '1XX' => 'E02004064',
        '1YW' => 'E02004064',
        '1YX' => 'E02004064',
        '1YY' => 'E02004064',
        '1YZ' => 'E02004064',
        '1ZA' => 'E02004064',
        '1ZJ' => 'E02004064',
        '1ZL' => 'E02004064',
        '1ZN' => 'E02004064',
        '1ZP' => 'E02004064',
        '1ZR' => 'E02004064',
        '1ZS' => 'E02004064',
        '1ZW' => 'E02004064',
        '1ZZ' => 'E02004064',
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
