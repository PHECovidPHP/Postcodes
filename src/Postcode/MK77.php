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
final class MK77
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02003473',
        '1AB' => 'E02003473',
        '1AD' => 'E02003473',
        '1AE' => 'E02003473',
        '1AN' => 'E02003473',
        '1AS' => 'E02003473',
        '1AU' => 'E02003473',
        '1AW' => 'E02003473',
        '1AX' => 'E02003473',
        '1AY' => 'E02003473',
        '1AZ' => 'E02003473',
        '1BA' => 'E02003473',
        '1BB' => 'E02003473',
        '1BD' => 'E02003473',
        '1BE' => 'E02003473',
        '1BL' => 'E02003473',
        '1BS' => 'E02003473',
        '1DD' => 'E02003473',
        '1DL' => 'E02003473',
        '1ES' => 'E02003473',
        '1EW' => 'E02003473',
        '1FF' => 'E02003473',
        '1FN' => 'E02003473',
        '1FP' => 'E02003473',
        '1HQ' => 'E02003473',
        '1JL' => 'E02003473',
        '1LD' => 'E02003473',
        '1LG' => 'E02003473',
        '1LJ' => 'E02003473',
        '1LL' => 'E02003473',
        '1LX' => 'E02003473',
        '1NF' => 'E02003473',
        '1NS' => 'E02003473',
        '1NT' => 'E02003473',
        '1NU' => 'E02003473',
        '1NW' => 'E02003473',
        '1PH' => 'E02003473',
        '1PS' => 'E02003473',
        '1QA' => 'E02003473',
        '1RB' => 'E02003473',
        '1RG' => 'E02003473',
        '1RP' => 'E02003473',
        '1RS' => 'E02003473',
        '1RZ' => 'E02003473',
        '1SA' => 'E02003473',
        '1SE' => 'E02003473',
        '1SF' => 'E02003473',
        '1SP' => 'E02003473',
        '1SR' => 'E02003473',
        '1ST' => 'E02003488',
        '1SW' => 'E02003473',
        '1SZ' => 'E02003473',
        '1TA' => 'E02003473',
        '1TE' => 'E02003473',
        '1TF' => 'E02003473',
        '1TG' => 'E02003473',
        '1TJ' => 'E02003473',
        '1TN' => 'E02003481',
        '1TQ' => 'E02003473',
        '1TS' => 'E02003473',
        '1TW' => 'E02003473',
        '1TX' => 'E02003473',
        '1UA' => 'E02003473',
        '1UB' => 'E02003473',
        '1UF' => 'E02003473',
        '1WB' => 'E02003473',
        '1XY' => 'E02003473',
        '1YL' => 'E02003473',
        '1ZA' => 'E02003473',
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
