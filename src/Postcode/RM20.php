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
final class RM20
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AF' => 'E02003310',
        '1TX' => 'E02003310',
        '1WA' => 'E02003310',
        '1WB' => 'E02003310',
        '1WH' => 'E02003310',
        '1WL' => 'E02003310',
        '1WN' => 'E02003310',
        '1WR' => 'E02003310',
        '1WS' => 'E02003310',
        '1WU' => 'E02003310',
        '2AB' => 'E02003310',
        '2AD' => 'E02003310',
        '2AZ' => 'E02003310',
        '2YQ' => 'E02003310',
        '2YY' => 'E02003310',
        '2ZF' => 'E02003310',
        '2ZG' => 'E02003310',
        '2ZH' => 'E02003310',
        '2ZJ' => 'E02003310',
        '2ZL' => 'E02003310',
        '2ZN' => 'E02003310',
        '2ZP' => 'E02003310',
        '2ZQ' => 'E02003310',
        '2ZR' => 'E02003310',
        '2ZS' => 'E02003310',
        '2ZT' => 'E02003310',
        '2ZW' => 'E02003310',
        '3AA' => 'E02003310',
        '3AB' => 'E02003310',
        '3AD' => 'E02003310',
        '3AE' => 'E02003310',
        '3AF' => 'E02003310',
        '3AG' => 'E02003310',
        '3AH' => 'E02003310',
        '3AJ' => 'E02003310',
        '3AL' => 'E02003310',
        '3AN' => 'E02003310',
        '3AP' => 'E02003310',
        '3AQ' => 'E02003310',
        '3AR' => 'E02003310',
        '3AS' => 'E02003310',
        '3AT' => 'E02003310',
        '3AU' => 'E02003310',
        '3AW' => 'E02003310',
        '3AX' => 'E02003310',
        '3AY' => 'E02003311',
        '3AZ' => 'E02003311',
        '3BA' => 'E02003310',
        '3BB' => 'E02003310',
        '3BE' => 'E02003310',
        '3BG' => 'E02003311',
        '3BH' => 'E02003310',
        '3BJ' => 'E02003310',
        '3BL' => 'E02003310',
        '3BN' => 'E02003310',
        '3BP' => 'E02003310',
        '3BQ' => 'E02003310',
        '3BS' => 'E02003310',
        '3BT' => 'E02003310',
        '3BU' => 'E02003310',
        '3BW' => 'E02003310',
        '3BX' => 'E02003310',
        '3BZ' => 'E02003311',
        '3DA' => 'E02003310',
        '3DR' => 'E02003310',
        '3DZ' => 'E02003311',
        '3EB' => 'E02003310',
        '3ED' => 'E02003310',
        '3EE' => 'E02003310',
        '3EF' => 'E02003310',
        '3EG' => 'E02003310',
        '3EH' => 'E02003310',
        '3EW' => 'E02003310',
        '3EX' => 'E02003310',
        '3EY' => 'E02003310',
        '3FA' => 'E02003310',
        '3FB' => 'E02003310',
        '3FD' => 'E02003310',
        '3FE' => 'E02003310',
        '3FG' => 'E02003310',
        '3FH' => 'E02003310',
        '3FJ' => 'E02003310',
        '3FN' => 'E02003310',
        '3FZ' => 'E02003310',
        '3GD' => 'E02003310',
        '3HA' => 'E02003310',
        '3HB' => 'E02003310',
        '3HD' => 'E02003310',
        '3HF' => 'E02003310',
        '3HH' => 'E02003310',
        '3HJ' => 'E02003310',
        '3HL' => 'E02003310',
        '3HN' => 'E02003310',
        '3HP' => 'E02003310',
        '3HR' => 'E02003310',
        '3HT' => 'E02003310',
        '3HU' => 'E02003310',
        '3HX' => 'E02003310',
        '3JA' => 'E02003310',
        '3JB' => 'E02003310',
        '3JD' => 'E02003310',
        '3JE' => 'E02003310',
        '3JF' => 'E02003310',
        '3JG' => 'E02003310',
        '3JH' => 'E02003310',
        '3JJ' => 'E02003310',
        '3JL' => 'E02003310',
        '3JN' => 'E02003310',
        '3JP' => 'E02003310',
        '3JQ' => 'E02003310',
        '3JR' => 'E02003310',
        '3JS' => 'E02003310',
        '3JT' => 'E02003310',
        '3LA' => 'E02003310',
        '3LB' => 'E02003310',
        '3LD' => 'E02003310',
        '3LE' => 'E02003310',
        '3LG' => 'E02003310',
        '3LH' => 'E02003310',
        '3LJ' => 'E02003310',
        '3LL' => 'E02003310',
        '3LP' => 'E02003310',
        '3LR' => 'E02003310',
        '3LS' => 'E02003310',
        '3LU' => 'E02003310',
        '3LW' => 'E02003310',
        '3LX' => 'E02003310',
        '3NA' => 'E02003310',
        '3NE' => 'E02003310',
        '3NG' => 'E02003310',
        '3NJ' => 'E02003310',
        '3NL' => 'E02003310',
        '3NN' => 'E02003310',
        '3NQ' => 'E02003310',
        '3NR' => 'E02003310',
        '3PZ' => 'E02003310',
        '3WA' => 'E02003310',
        '3WD' => 'E02003310',
        '3WE' => 'E02003310',
        '3WF' => 'E02003310',
        '3WG' => 'E02003310',
        '3WH' => 'E02003310',
        '3WJ' => 'E02003310',
        '3WL' => 'E02003310',
        '3WP' => 'E02003310',
        '3WU' => 'E02003311',
        '3WW' => 'E02003310',
        '3WX' => 'E02003311',
        '3WY' => 'E02003310',
        '3WZ' => 'E02003310',
        '3XD' => 'E02003310',
        '3XY' => 'E02003311',
        '3XZ' => 'E02003311',
        '3YW' => 'E02003311',
        '3ZA' => 'E02003310',
        '3ZB' => 'E02003310',
        '3ZD' => 'E02003310',
        '3ZE' => 'E02003310',
        '3ZP' => 'E02003310',
        '4AA' => 'E02003310',
        '4AB' => 'E02003310',
        '4AD' => 'E02003310',
        '4AE' => 'E02003312',
        '4AF' => 'E02003310',
        '4AG' => 'E02003310',
        '4AH' => 'E02003310',
        '4AJ' => 'E02003310',
        '4AL' => 'E02003310',
        '4AN' => 'E02003310',
        '4AP' => 'E02003310',
        '4AQ' => 'E02003310',
        '4AR' => 'E02003310',
        '4AS' => 'E02003310',
        '4AT' => 'E02003310',
        '4AU' => 'E02003310',
        '4AW' => 'E02003310',
        '4AX' => 'E02003310',
        '4AY' => 'E02003310',
        '4AZ' => 'E02003311',
        '4BA' => 'E02003310',
        '4BD' => 'E02003310',
        '4BE' => 'E02003310',
        '4BF' => 'E02003310',
        '4BG' => 'E02003311',
        '4BH' => 'E02003310',
        '4BJ' => 'E02003310',
        '4BL' => 'E02003310',
        '4BN' => 'E02003311',
        '4BP' => 'E02003310',
        '4BQ' => 'E02003310',
        '4BS' => 'E02003310',
        '4BT' => 'E02003310',
        '4BX' => 'E02003311',
        '4BY' => 'E02003310',
        '4BZ' => 'E02003310',
        '4DB' => 'E02003310',
        '4DH' => 'E02003310',
        '4DN' => 'E02003310',
        '4DP' => 'E02003310',
        '4DR' => 'E02003310',
        '4DT' => 'E02003310',
        '4EH' => 'E02003310',
        '4EL' => 'E02003310',
        '4EN' => 'E02003310',
        '4ES' => 'E02003310',
        '4EU' => 'E02003310',
        '4EY' => 'E02003310',
        '4EZ' => 'E02003310',
        '4FS' => 'E02003310',
        '4GG' => 'E02003311',
        '4HB' => 'E02003310',
        '4LZ' => 'E02003311',
        '4WA' => 'E02003311',
        '4WB' => 'E02003310',
        '4WE' => 'E02003311',
        '4WG' => 'E02003311',
        '4WH' => 'E02003311',
        '4XB' => 'E02003310',
        '4XE' => 'E02003310',
        '4XF' => 'E02003310',
        '4XG' => 'E02003310',
        '4XJ' => 'E02003310',
        '4XL' => 'E02003310',
        '4XN' => 'E02003310',
        '4XP' => 'E02003310',
        '4XQ' => 'E02003312',
        '4XT' => 'E02003310',
        '4XU' => 'E02003310',
        '4XW' => 'E02003310',
        '4XX' => 'E02003310',
        '4YA' => 'E02003310',
        '4YB' => 'E02003310',
        '4YD' => 'E02003310',
        '4YE' => 'E02003310',
        '4YF' => 'E02003310',
        '4YH' => 'E02003310',
        '4YJ' => 'E02003310',
        '4YL' => 'E02003310',
        '4YP' => 'E02003310',
        '4YQ' => 'E02003310',
        '4YR' => 'E02003310',
        '4YT' => 'E02003310',
        '4YY' => 'E02003310',
        '4YZ' => 'E02003310',
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