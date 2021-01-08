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
final class NP5
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '3QJ' => 'E02002927',
        '3QL' => 'E02002927',
        '3RG' => 'E02002927',
        '3RH' => 'E02002927',
        '3RJ' => 'E02002927',
        '3RL' => 'E02002927',
        '3RN' => 'E02002927',
        '3RP' => 'E02002927',
        '3RQ' => 'E02002927',
        '3RR' => 'E02002927',
        '3RS' => 'E02002927',
        '3RT' => 'E02002927',
        '3RW' => 'E02002927',
        '3RY' => 'E02002927',
        '3SR' => 'E02002927',
        '3SS' => 'E02002927',
        '3ST' => 'E02002927',
        '3SU' => 'E02002927',
        '3SX' => 'E02002927',
        '4LH' => 'E02004631',
        '4LJ' => 'E02004631',
        '4LL' => 'E02004631',
        '4LN' => 'E02004631',
        '4LP' => 'E02004633',
        '4LQ' => 'E02004631',
        '4LR' => 'E02004631',
        '4LS' => 'E02004631',
        '4LT' => 'E02004631',
        '4LU' => 'E02004632',
        '4LW' => 'E02004631',
        '4LX' => 'E02004631',
        '4LY' => 'E02004631',
        '4LZ' => 'E02004631',
        '4NA' => 'E02004631',
        '4NB' => 'E02004631',
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
