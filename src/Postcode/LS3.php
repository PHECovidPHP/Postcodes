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
final class LS3
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02002392',
        '1AB' => 'E02002392',
        '1AD' => 'E02002392',
        '1AE' => 'E02002392',
        '1AF' => 'E02002392',
        '1AG' => 'E02002392',
        '1AH' => 'E02002392',
        '1AJ' => 'E02002392',
        '1AL' => 'E02002392',
        '1AN' => 'E02002392',
        '1AP' => 'E02002392',
        '1AQ' => 'E02002392',
        '1AR' => 'E02002392',
        '1AS' => 'E02002392',
        '1AT' => 'E02002392',
        '1AU' => 'E02002392',
        '1AW' => 'E02002392',
        '1AX' => 'E02002392',
        '1AY' => 'E02002392',
        '1AZ' => 'E02002392',
        '1BA' => 'E02002400',
        '1BB' => 'E02002400',
        '1BD' => 'E02002392',
        '1BE' => 'E02002392',
        '1BF' => 'E02002392',
        '1BG' => 'E02002392',
        '1BH' => 'E02002392',
        '1BJ' => 'E02002392',
        '1BL' => 'E02002392',
        '1BN' => 'E02002392',
        '1BP' => 'E02002392',
        '1BQ' => 'E02002392',
        '1BR' => 'E02002392',
        '1BS' => 'E02002392',
        '1BT' => 'E02002392',
        '1BU' => 'E02002392',
        '1BW' => 'E02002392',
        '1BX' => 'E02002392',
        '1DA' => 'E02002392',
        '1DB' => 'E02002392',
        '1DD' => 'E02002392',
        '1DE' => 'E02002392',
        '1DF' => 'E02002392',
        '1DG' => 'E02002392',
        '1DH' => 'E02002392',
        '1DJ' => 'E02002392',
        '1DL' => 'E02002392',
        '1DN' => 'E02002392',
        '1DP' => 'E02002392',
        '1DQ' => 'E02002392',
        '1DR' => 'E02002400',
        '1DS' => 'E02002392',
        '1DT' => 'E02002392',
        '1DU' => 'E02002392',
        '1DW' => 'E02002392',
        '1DX' => 'E02002392',
        '1DY' => 'E02002392',
        '1DZ' => 'E02006875',
        '1EA' => 'E02002392',
        '1ED' => 'E02002392',
        '1EE' => 'E02002392',
        '1EF' => 'E02002392',
        '1EG' => 'E02002392',
        '1EH' => 'E02002392',
        '1EJ' => 'E02002392',
        '1EL' => 'E02002392',
        '1EN' => 'E02002392',
        '1EP' => 'E02002392',
        '1EQ' => 'E02002392',
        '1ER' => 'E02002392',
        '1ES' => 'E02002392',
        '1ET' => 'E02002392',
        '1EU' => 'E02002392',
        '1EW' => 'E02002392',
        '1EX' => 'E02002392',
        '1EY' => 'E02002392',
        '1EZ' => 'E02002392',
        '1FA' => 'E02002392',
        '1FB' => 'E02002392',
        '1FD' => 'E02002392',
        '1FE' => 'E02002392',
        '1FF' => 'E02002392',
        '1FG' => 'E02002392',
        '1HA' => 'E02002392',
        '1HB' => 'E02002392',
        '1HD' => 'E02002392',
        '1HE' => 'E02002392',
        '1HF' => 'E02002392',
        '1HG' => 'E02002392',
        '1HH' => 'E02002392',
        '1HJ' => 'E02002392',
        '1HL' => 'E02002392',
        '1HN' => 'E02002392',
        '1HQ' => 'E02002392',
        '1HR' => 'E02002400',
        '1HS' => 'E02002400',
        '1HT' => 'E02002400',
        '1HU' => 'E02002392',
        '1HX' => 'E02002392',
        '1HY' => 'E02002392',
        '1HZ' => 'E02002392',
        '1JA' => 'E02002392',
        '1JB' => 'E02002392',
        '1JD' => 'E02002400',
        '1JE' => 'E02002400',
        '1JF' => 'E02002392',
        '1JG' => 'E02002392',
        '1JH' => 'E02002392',
        '1JJ' => 'E02002400',
        '1JL' => 'E02002400',
        '1JN' => 'E02002400',
        '1JP' => 'E02002392',
        '1JQ' => 'E02002400',
        '1JR' => 'E02002392',
        '1JS' => 'E02002392',
        '1JT' => 'E02002392',
        '1JU' => 'E02002392',
        '1JW' => 'E02002392',
        '1JX' => 'E02002392',
        '1JY' => 'E02002392',
        '1JZ' => 'E02002392',
        '1LA' => 'E02002392',
        '1LB' => 'E02002392',
        '1LD' => 'E02002392',
        '1LE' => 'E02002400',
        '1LF' => 'E02002392',
        '1LG' => 'E02006875',
        '1LH' => 'E02002400',
        '1LJ' => 'E02002392',
        '1LL' => 'E02002400',
        '1LN' => 'E02002392',
        '1LP' => 'E02002400',
        '1LQ' => 'E02002392',
        '1LR' => 'E02002392',
        '1LS' => 'E02002392',
        '1LT' => 'E02002392',
        '1LU' => 'E02002392',
        '1LW' => 'E02002400',
        '1LX' => 'E02002392',
        '1LY' => 'E02002392',
        '1LZ' => 'E02002392',
        '1NA' => 'E02002392',
        '1NB' => 'E02002392',
        '1ND' => 'E02002392',
        '1NE' => 'E02002392',
        '1NF' => 'E02002392',
        '1NG' => 'E02002392',
        '1NH' => 'E02002392',
        '1NJ' => 'E02002392',
        '1NL' => 'E02002392',
        '1NN' => 'E02002392',
        '1NP' => 'E02002392',
        '1NQ' => 'E02002392',
        '1NR' => 'E02002392',
        '1NS' => 'E02002392',
        '1NT' => 'E02002392',
        '1NU' => 'E02002392',
        '1NW' => 'E02002392',
        '1NX' => 'E02002392',
        '1NZ' => 'E02002392',
        '1RH' => 'E02002400',
        '1RJ' => 'E02002400',
        '1RL' => 'E02002392',
        '1RP' => 'E02002400',
        '1RR' => 'E02002392',
        '1RS' => 'E02002392',
        '1RT' => 'E02006875',
        '1RU' => 'E02002400',
        '1RW' => 'E02002392',
        '1RX' => 'E02006875',
        '1RY' => 'E02002400',
        '1SA' => 'E02002392',
        '1SB' => 'E02002392',
        '1SD' => 'E02002392',
        '1SE' => 'E02002392',
        '1SF' => 'E02002392',
        '1SG' => 'E02002392',
        '1TB' => 'E02002392',
        '1TD' => 'E02002392',
        '1TE' => 'E02002392',
        '1TG' => 'E02002392',
        '1TH' => 'E02002392',
        '1TJ' => 'E02002392',
        '1TL' => 'E02002392',
        '1TN' => 'E02002392',
        '1TP' => 'E02006875',
        '1TR' => 'E02002392',
        '1TS' => 'E02002392',
        '1TT' => 'E02002392',
        '1TW' => 'E02002392',
        '1TX' => 'E02002400',
        '1UF' => 'E02006875',
        '1UH' => 'E02002392',
        '1UL' => 'E02002392',
        '1UN' => 'E02002392',
        '1UP' => 'E02002392',
        '1UQ' => 'E02002392',
        '1UR' => 'E02006875',
        '1UT' => 'E02002392',
        '1UX' => 'E02006875',
        '1UY' => 'E02002392',
        '1WA' => 'E02006875',
        '1WB' => 'E02002400',
        '1WU' => 'E02002400',
        '1WW' => 'E02002400',
        '1WX' => 'E02002400',
        '1WY' => 'E02006875',
        '1WZ' => 'E02002400',
        '1XB' => 'E02002392',
        '1XD' => 'E02002392',
        '1XJ' => 'E02002392',
        '1XL' => 'E02002400',
        '1XN' => 'E02002400',
        '1XP' => 'E02002392',
        '1XQ' => 'E02006875',
        '1XU' => 'E02002400',
        '1XY' => 'E02002400',
        '1YE' => 'E02006875',
        '1YF' => 'E02002400',
        '1YG' => 'E02006875',
        '1YN' => 'E02002400',
        '1YT' => 'E02002400',
        '1ZH' => 'E02002400',
        '1ZX' => 'E02002400',
        '2AD' => 'E02002385',
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