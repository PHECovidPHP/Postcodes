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
final class E77
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AD' => 'E02000884',
        '1AE' => 'E02000884',
        '1AN' => 'E02000884',
        '1AS' => 'E02000884',
        '1AZ' => 'E02000884',
        '1BG' => 'E02000884',
        '1BL' => 'E02000884',
        '1BS' => 'E02000884',
        '1DD' => 'E02000884',
        '1DE' => 'E02000884',
        '1DL' => 'E02000884',
        '1EU' => 'E02000884',
        '1FF' => 'E02000884',
        '1FN' => 'E02000884',
        '1HQ' => 'E02000884',
        '1JL' => 'E02000884',
        '1LJ' => 'E02000884',
        '1LL' => 'E02000884',
        '1NS' => 'E02000884',
        '1NT' => 'E02000884',
        '1NU' => 'E02000884',
        '1PS' => 'E02000884',
        '1QA' => 'E02000884',
        '1RB' => 'E02000884',
        '1RG' => 'E02000884',
        '1RP' => 'E02000884',
        '1RS' => 'E02000884',
        '1RZ' => 'E02000884',
        '1SE' => 'E02000884',
        '1SF' => 'E02000884',
        '1SH' => 'E02000884',
        '1SP' => 'E02000884',
        '1SR' => 'E02000884',
        '1SW' => 'E02000884',
        '1TQ' => 'E02000884',
        '1TS' => 'E02000884',
        '1TX' => 'E02000884',
        '1YE' => 'E02000884',
        '1YL' => 'E02000884',
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
