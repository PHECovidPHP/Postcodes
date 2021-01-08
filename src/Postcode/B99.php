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
final class B99
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02001876',
        '1AB' => 'E02001876',
        '1AD' => 'E02001876',
        '1AE' => 'E02001876',
        '1AF' => 'E02001876',
        '1AG' => 'E02001876',
        '1AH' => 'E02001876',
        '1AJ' => 'E02001876',
        '1AL' => 'E02001876',
        '1AN' => 'E02001876',
        '1AP' => 'E02001876',
        '1AQ' => 'E02001876',
        '1AR' => 'E02001876',
        '1AS' => 'E02001876',
        '1AT' => 'E02001876',
        '1AU' => 'E02001876',
        '1AW' => 'E02001876',
        '1AX' => 'E02001876',
        '1AY' => 'E02001876',
        '1AZ' => 'E02001876',
        '1BA' => 'E02001876',
        '1BB' => 'E02001876',
        '1BD' => 'E02001876',
        '1BE' => 'E02001876',
        '1BF' => 'E02001876',
        '1BG' => 'E02001876',
        '1BH' => 'E02001876',
        '1BJ' => 'E02001876',
        '1BL' => 'E02001876',
        '1BN' => 'E02001876',
        '1BP' => 'E02001876',
        '1BQ' => 'E02001876',
        '1BR' => 'E02001876',
        '1BS' => 'E02001876',
        '1BT' => 'E02001876',
        '1BU' => 'E02001876',
        '1BW' => 'E02001876',
        '1BX' => 'E02001876',
        '1BY' => 'E02001876',
        '1BZ' => 'E02001876',
        '1DA' => 'E02001876',
        '1DB' => 'E02001876',
        '1DD' => 'E02001876',
        '1DE' => 'E02001876',
        '1DF' => 'E02001876',
        '1DG' => 'E02001876',
        '1DH' => 'E02001876',
        '1DJ' => 'E02001876',
        '1DL' => 'E02001876',
        '1DN' => 'E02001876',
        '1DP' => 'E02001876',
        '1DQ' => 'E02001876',
        '1DR' => 'E02001876',
        '1DS' => 'E02001876',
        '1DT' => 'E02001876',
        '1DU' => 'E02001876',
        '1DW' => 'E02001876',
        '1DX' => 'E02001876',
        '1DY' => 'E02001876',
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
