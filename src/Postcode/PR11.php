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
final class PR11
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02005268',
        '1AD' => 'E02005268',
        '1AL' => 'E02005268',
        '1AN' => 'E02005268',
        '1AS' => 'E02005268',
        '1AT' => 'E02005268',
        '1BB' => 'E02005268',
        '1BS' => 'E02005268',
        '1DA' => 'E02005268',
        '1DR' => 'E02005268',
        '1DS' => 'E02005268',
        '1DT' => 'E02005268',
        '1DU' => 'E02005268',
        '1DW' => 'E02005268',
        '1EA' => 'E02005268',
        '1EE' => 'E02005268',
        '1EH' => 'E02005268',
        '1EJ' => 'E02005268',
        '1EW' => 'E02005268',
        '1FB' => 'E02005268',
        '1FW' => 'E02005268',
        '1GA' => 'E02005268',
        '1GB' => 'E02005268',
        '1GD' => 'E02005268',
        '1HA' => 'E02005268',
        '1HB' => 'E02005268',
        '1HD' => 'E02005268',
        '1HP' => 'E02005268',
        '1JB' => 'E02005268',
        '1LA' => 'E02005268',
        '1LG' => 'E02005268',
        '1LP' => 'E02005268',
        '1NN' => 'E02005268',
        '1PB' => 'E02005268',
        '1PG' => 'E02005268',
        '1PR' => 'E02005268',
        '1PT' => 'E02005268',
        '1SF' => 'E02005268',
        '1SG' => 'E02005268',
        '1SS' => 'E02005268',
        '1SW' => 'E02005268',
        '1TG' => 'E02005268',
        '1UA' => 'E02005268',
        '1UP' => 'E02005268',
        '1UR' => 'E02005268',
        '1US' => 'E02005268',
        '1WA' => 'E02005268',
        '1WD' => 'E02005268',
        '1WP' => 'E02005268',
        '1WR' => 'E02005268',
        '1YB' => 'E02005268',
        '2AA' => 'E02005256',
        '2AB' => 'E02005256',
        '2AD' => 'E02005256',
        '2AE' => 'E02005256',
        '2AF' => 'E02005256',
        '2AG' => 'E02005256',
        '2AH' => 'E02005256',
        '2AJ' => 'E02005256',
        '2AL' => 'E02005256',
        '2AN' => 'E02005256',
        '2AP' => 'E02005256',
        '2AQ' => 'E02005256',
        '2AR' => 'E02005256',
        '2AS' => 'E02005256',
        '2AT' => 'E02005256',
        '2AU' => 'E02005256',
        '2AW' => 'E02005256',
        '2AX' => 'E02005256',
        '2AY' => 'E02005256',
        '2AZ' => 'E02005256',
        '2BA' => 'E02005256',
        '2BB' => 'E02005256',
        '2BD' => 'E02005256',
        '2BE' => 'E02005256',
        '2BF' => 'E02005256',
        '2BG' => 'E02005256',
        '2BH' => 'E02005256',
        '2BJ' => 'E02005256',
        '2BL' => 'E02005256',
        '2BN' => 'E02005256',
        '2BQ' => 'E02005256',
        '2BR' => 'E02005256',
        '2BS' => 'E02005256',
        '2BT' => 'E02005256',
        '2BU' => 'E02005256',
        '2BW' => 'E02005256',
        '2BX' => 'E02005256',
        '2BY' => 'E02005256',
        '2BZ' => 'E02005256',
        '2DA' => 'E02005256',
        '2DB' => 'E02005256',
        '2DD' => 'E02005256',
        '2DE' => 'E02005256',
        '2DF' => 'E02005256',
        '2DG' => 'E02005256',
        '2DH' => 'E02005256',
        '2DJ' => 'E02005256',
        '2DL' => 'E02005256',
        '2DN' => 'E02005256',
        '2DP' => 'E02005256',
        '2DQ' => 'E02005256',
        '2DR' => 'E02005256',
        '2DS' => 'E02005256',
        '2DT' => 'E02005256',
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
