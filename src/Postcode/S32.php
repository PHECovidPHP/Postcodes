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
final class S32
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02004068',
        '1AB' => 'E02004068',
        '1AD' => 'E02004068',
        '1AE' => 'E02004068',
        '1AF' => 'E02004068',
        '1AG' => 'E02004068',
        '1AH' => 'E02004068',
        '1AJ' => 'E02004068',
        '1AL' => 'E02004068',
        '1AN' => 'E02004068',
        '1AP' => 'E02004068',
        '1AQ' => 'E02004068',
        '1AR' => 'E02004068',
        '1AS' => 'E02004068',
        '1AT' => 'E02004068',
        '1AU' => 'E02004068',
        '1AW' => 'E02004068',
        '1AX' => 'E02004068',
        '1AY' => 'E02004068',
        '1AZ' => 'E02004068',
        '1BA' => 'E02004068',
        '1BB' => 'E02004068',
        '1BD' => 'E02004068',
        '1BE' => 'E02004068',
        '1BF' => 'E02004068',
        '1BG' => 'E02004068',
        '1BH' => 'E02004068',
        '1BJ' => 'E02004068',
        '1BL' => 'E02004068',
        '1BN' => 'E02004068',
        '1BP' => 'E02004068',
        '1BQ' => 'E02004068',
        '1BR' => 'E02004068',
        '1BS' => 'E02004068',
        '1BT' => 'E02004068',
        '1BU' => 'E02004068',
        '1BW' => 'E02004068',
        '1BX' => 'E02004068',
        '1BY' => 'E02004068',
        '1BZ' => 'E02004068',
        '1DA' => 'E02004068',
        '1DB' => 'E02004068',
        '1DD' => 'E02004068',
        '1DE' => 'E02004068',
        '1DF' => 'E02004068',
        '1DG' => 'E02004068',
        '1DH' => 'E02004068',
        '1DJ' => 'E02004068',
        '1DL' => 'E02004068',
        '1DN' => 'E02004068',
        '1DP' => 'E02004068',
        '1DQ' => 'E02004068',
        '1DR' => 'E02004068',
        '1DS' => 'E02004068',
        '1DT' => 'E02004068',
        '1DU' => 'E02004068',
        '1DW' => 'E02004068',
        '1DX' => 'E02004068',
        '1DY' => 'E02004068',
        '1DZ' => 'E02004068',
        '1EG' => 'E02004068',
        '1EH' => 'E02004068',
        '1EQ' => 'E02004068',
        '1HA' => 'E02004068',
        '1WS' => 'E02004068',
        '1WU' => 'E02004068',
        '1WW' => 'E02004068',
        '1WX' => 'E02004068',
        '1WY' => 'E02004068',
        '1WZ' => 'E02004068',
        '1XW' => 'E02004068',
        '1XX' => 'E02004108',
        '1XZ' => 'E02004068',
        '1YY' => 'E02004068',
        '1YZ' => 'E02004068',
        '1ZS' => 'E02004068',
        '2AA' => 'E02004068',
        '2BX' => 'E02001681',
        '2BY' => 'E02004108',
        '2BZ' => 'E02004108',
        '2HA' => 'E02004068',
        '2HB' => 'E02004068',
        '2HD' => 'E02004068',
        '2HE' => 'E02004068',
        '2HF' => 'E02004068',
        '2HG' => 'E02004068',
        '2HH' => 'E02004068',
        '2HJ' => 'E02004068',
        '2HL' => 'E02004068',
        '2HN' => 'E02004068',
        '2HP' => 'E02004068',
        '2HQ' => 'E02004068',
        '2HR' => 'E02004068',
        '2HS' => 'E02004068',
        '2HT' => 'E02004068',
        '2HU' => 'E02004068',
        '2HW' => 'E02004068',
        '2HX' => 'E02004068',
        '2HY' => 'E02004068',
        '2HZ' => 'E02004068',
        '2JA' => 'E02004068',
        '2JB' => 'E02004068',
        '2JD' => 'E02004068',
        '2JE' => 'E02004068',
        '2JF' => 'E02004068',
        '2JG' => 'E02004068',
        '2JH' => 'E02004068',
        '2JJ' => 'E02004068',
        '2JL' => 'E02004068',
        '2JN' => 'E02004068',
        '2JQ' => 'E02004068',
        '2JY' => 'E02004068',
        '2WA' => 'E02004068',
        '2WY' => 'E02004068',
        '2WZ' => 'E02004068',
        '2YZ' => 'E02004068',
        '3AA' => 'E02004069',
        '3AB' => 'E02004069',
        '3AD' => 'E02004069',
        '3BU' => 'E02004108',
        '3BW' => 'E02004069',
        '3BX' => 'E02004069',
        '3BY' => 'E02004069',
        '3BZ' => 'E02004069',
        '3WA' => 'E02004069',
        '3WB' => 'E02004069',
        '3WD' => 'E02004069',
        '3WE' => 'E02004069',
        '3WP' => 'E02004069',
        '3WQ' => 'E02004069',
        '3WR' => 'E02004069',
        '3WS' => 'E02004069',
        '3WT' => 'E02004069',
        '3WU' => 'E02004069',
        '3WW' => 'E02004069',
        '3WX' => 'E02004069',
        '3WY' => 'E02004069',
        '3WZ' => 'E02004069',
        '3XA' => 'E02004069',
        '3XB' => 'E02004069',
        '3XD' => 'E02004069',
        '3XE' => 'E02004069',
        '3XF' => 'E02004069',
        '3XG' => 'E02004069',
        '3XH' => 'E02004069',
        '3XJ' => 'E02004069',
        '3XL' => 'E02004069',
        '3XN' => 'E02004069',
        '3XP' => 'E02004069',
        '3XQ' => 'E02004069',
        '3XR' => 'E02004069',
        '3XS' => 'E02004069',
        '3XT' => 'E02004069',
        '3XU' => 'E02004069',
        '3XW' => 'E02004069',
        '3XX' => 'E02004069',
        '3XY' => 'E02004069',
        '3XZ' => 'E02004069',
        '3YA' => 'E02004069',
        '3YB' => 'E02004069',
        '3YD' => 'E02004069',
        '3YE' => 'E02004069',
        '3YF' => 'E02004069',
        '3YG' => 'E02004069',
        '3YH' => 'E02004069',
        '3YJ' => 'E02004069',
        '3YL' => 'E02004069',
        '3YN' => 'E02004069',
        '3YP' => 'E02004069',
        '3YQ' => 'E02004069',
        '3YR' => 'E02004069',
        '3YS' => 'E02004069',
        '3YT' => 'E02004069',
        '3YU' => 'E02004069',
        '3YW' => 'E02004069',
        '3YX' => 'E02004069',
        '3YY' => 'E02004069',
        '3YZ' => 'E02004069',
        '3ZA' => 'E02004069',
        '3ZB' => 'E02004069',
        '3ZD' => 'E02004069',
        '3ZE' => 'E02004069',
        '3ZF' => 'E02004069',
        '3ZG' => 'E02004069',
        '3ZH' => 'E02004069',
        '3ZJ' => 'E02004069',
        '3ZL' => 'E02004069',
        '3ZN' => 'E02004069',
        '3ZP' => 'E02004069',
        '4AA' => 'E02004069',
        '4AB' => 'E02004069',
        '4TA' => 'E02004069',
        '4TB' => 'E02004069',
        '4TD' => 'E02004069',
        '4TE' => 'E02004069',
        '4TF' => 'E02004069',
        '4TG' => 'E02004069',
        '4TH' => 'E02004069',
        '4TJ' => 'E02004069',
        '4TL' => 'E02004069',
        '4TN' => 'E02004069',
        '4TP' => 'E02004069',
        '4TQ' => 'E02004069',
        '4TR' => 'E02004068',
        '4TS' => 'E02004069',
        '4TT' => 'E02004069',
        '4TU' => 'E02004069',
        '4TW' => 'E02004069',
        '4TX' => 'E02004069',
        '4TY' => 'E02004069',
        '4TZ' => 'E02004069',
        '4UA' => 'E02004069',
        '4UB' => 'E02004069',
        '4WW' => 'E02004069',
        '4WY' => 'E02004069',
        '4WZ' => 'E02004069',
        '4YZ' => 'E02004069',
        '5AA' => 'E02004068',
        '5AB' => 'E02004068',
        '5BU' => 'E02004108',
        '5BW' => 'E02004068',
        '5BX' => 'E02004068',
        '5BY' => 'E02004108',
        '5BZ' => 'E02004068',
        '5PJ' => 'E02004068',
        '5PZ' => 'E02004068',
        '5QA' => 'E02004068',
        '5QB' => 'E02004068',
        '5QD' => 'E02004068',
        '5QE' => 'E02004068',
        '5QF' => 'E02004068',
        '5QG' => 'E02004068',
        '5QH' => 'E02004068',
        '5QJ' => 'E02004068',
        '5QL' => 'E02004068',
        '5QN' => 'E02004068',
        '5QP' => 'E02004068',
        '5QQ' => 'E02004068',
        '5QR' => 'E02004068',
        '5QS' => 'E02004068',
        '5QT' => 'E02004068',
        '5QU' => 'E02004068',
        '5QW' => 'E02004068',
        '5QX' => 'E02004068',
        '5QY' => 'E02004068',
        '5QZ' => 'E02004068',
        '5RA' => 'E02004068',
        '5RB' => 'E02004068',
        '5RD' => 'E02004068',
        '5RE' => 'E02004068',
        '5RF' => 'E02004068',
        '5RG' => 'E02004068',
        '5RH' => 'E02004068',
        '5RJ' => 'E02004068',
        '5RL' => 'E02004068',
        '5RN' => 'E02004068',
        '5RP' => 'E02004068',
        '5RW' => 'E02004068',
        '5RZ' => 'E02004068',
        '5WA' => 'E02004068',
        '5WB' => 'E02004068',
        '5WX' => 'E02004068',
        '5WY' => 'E02004068',
        '5WZ' => 'E02004108',
        '5YA' => 'E02004108',
        '5YB' => 'E02004108',
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