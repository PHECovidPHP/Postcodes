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
final class E98
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AD' => 'E02000889',
        '1AS' => 'E02000889',
        '1AT' => 'E02000889',
        '1AW' => 'E02000889',
        '1AX' => 'E02000889',
        '1BB' => 'E02000889',
        '1BD' => 'E02000889',
        '1BN' => 'E02000889',
        '1BS' => 'E02000889',
        '1BU' => 'E02000889',
        '1BX' => 'E02000889',
        '1DA' => 'E02000889',
        '1DN' => 'E02000889',
        '1DT' => 'E02000889',
        '1ES' => 'E02000889',
        '1EX' => 'E02000889',
        '1FA' => 'E02000889',
        '1FN' => 'E02000889',
        '1GE' => 'E02000889',
        '1GG' => 'E02000889',
        '1HR' => 'E02000889',
        '1LG' => 'E02000889',
        '1LL' => 'E02000889',
        '1NA' => 'E02000889',
        '1NB' => 'E02000889',
        '1ND' => 'E02000889',
        '1NE' => 'E02000889',
        '1NF' => 'E02000889',
        '1NG' => 'E02000889',
        '1NH' => 'E02000889',
        '1NL' => 'E02000889',
        '1NN' => 'E02000889',
        '1NP' => 'E02000889',
        '1NR' => 'E02000889',
        '1NS' => 'E02000889',
        '1NW' => 'E02000889',
        '1NX' => 'E02000880',
        '1PJ' => 'E02000889',
        '1PL' => 'E02000889',
        '1PN' => 'E02000889',
        '1PP' => 'E02000889',
        '1PR' => 'E02000889',
        '1PT' => 'E02000889',
        '1PW' => 'E02000889',
        '1RL' => 'E02000889',
        '1RT' => 'E02000889',
        '1SA' => 'E02000889',
        '1SD' => 'E02000889',
        '1SE' => 'E02000889',
        '1SG' => 'E02000889',
        '1SH' => 'E02000889',
        '1SJ' => 'E02000889',
        '1SL' => 'E02000889',
        '1SN' => 'E02000889',
        '1SP' => 'E02000889',
        '1SS' => 'E02000889',
        '1ST' => 'E02000889',
        '1SU' => 'E02000889',
        '1SX' => 'E02000889',
        '1SY' => 'E02000889',
        '1TA' => 'E02000889',
        '1TB' => 'E02000889',
        '1TD' => 'E02000889',
        '1TE' => 'E02000889',
        '1TF' => 'E02000889',
        '1TH' => 'E02000889',
        '1TR' => 'E02000889',
        '1TT' => 'E02000889',
        '1UN' => 'E02000889',
        '1WX' => 'E02000880',
        '1WY' => 'E02000880',
        '1WZ' => 'E02000889',
        '1XL' => 'E02000880',
        '1XN' => 'E02000889',
        '1XY' => 'E02000889',
        '1YD' => 'E02000889',
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
