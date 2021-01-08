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
final class DN55
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02001560',
        '1AB' => 'E02001560',
        '1AP' => 'E02001560',
        '1BA' => 'E02001560',
        '1BD' => 'E02001560',
        '1DA' => 'E02001560',
        '1DB' => 'E02001560',
        '1DD' => 'E02001560',
        '1DJ' => 'E02001560',
        '1DL' => 'E02001560',
        '1DR' => 'E02001560',
        '1EE' => 'E02001560',
        '1EG' => 'E02001560',
        '1EH' => 'E02001560',
        '1ES' => 'E02001560',
        '1ET' => 'E02001560',
        '1EY' => 'E02001560',
        '1FE' => 'E02001560',
        '1FP' => 'E02001560',
        '1FR' => 'E02001560',
        '1GA' => 'E02001560',
        '1GD' => 'E02001560',
        '1GF' => 'E02001560',
        '1GG' => 'E02001560',
        '1HD' => 'E02001560',
        '1HS' => 'E02001560',
        '1HX' => 'E02001560',
        '1LA' => 'E02001560',
        '1LB' => 'E02001560',
        '1LD' => 'E02001560',
        '1LH' => 'E02001560',
        '1ND' => 'E02001560',
        '1NF' => 'E02001560',
        '1NN' => 'E02001560',
        '1NP' => 'E02001560',
        '1NT' => 'E02001560',
        '1NU' => 'E02001560',
        '1PF' => 'E02001560',
        '1PT' => 'E02001560',
        '1PW' => 'E02001560',
        '1RA' => 'E02001560',
        '1RE' => 'E02001560',
        '1RG' => 'E02001560',
        '1RJ' => 'E02001560',
        '1RS' => 'E02001560',
        '1RY' => 'E02001560',
        '1SG' => 'E02001560',
        '1SH' => 'E02001560',
        '1SL' => 'E02001560',
        '1SP' => 'E02001560',
        '1SZ' => 'E02001560',
        '1TE' => 'E02001560',
        '1TP' => 'E02001560',
        '1TS' => 'E02001560',
        '1UN' => 'E02001560',
        '1US' => 'E02001560',
        '1WG' => 'E02001560',
        '1WH' => 'E02001560',
        '1WP' => 'E02001560',
        '1WW' => 'E02001560',
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
