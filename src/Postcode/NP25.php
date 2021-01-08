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
final class NP25
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '3SR' => 'E02002927',
        '3SS' => 'E02002927',
        '3ST' => 'E02002927',
        '3SU' => 'E02002927',
        '3SX' => 'E02002927',
        '4AS' => 'E02004631',
        '4LD' => 'E02004631',
        '4LH' => 'E02004631',
        '4LJ' => 'E02004631',
        '4LL' => 'E02004631',
        '4LN' => 'E02004631',
        '4LP' => 'E02004631',
        '4LQ' => 'E02004631',
        '4LR' => 'E02004631',
        '4LT' => 'E02004631',
        '4LX' => 'E02004631',
        '4LY' => 'E02004631',
        '4LZ' => 'E02004631',
        '4NA' => 'E02004631',
        '4NB' => 'E02004631',
        '4ND' => 'E02004631',
        '4NE' => 'E02004631',
        '5QJ' => 'E02002927',
        '5QL' => 'E02002927',
        '5RD' => 'E02002927',
        '5RG' => 'E02002927',
        '5RH' => 'E02002927',
        '5RJ' => 'E02002927',
        '5RL' => 'E02002927',
        '5RN' => 'E02002927',
        '5RP' => 'E02002927',
        '5RQ' => 'E02002927',
        '5RR' => 'E02002927',
        '5RS' => 'E02002927',
        '5RT' => 'E02002927',
        '5RW' => 'E02002927',
        '5RY' => 'E02002927',
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
