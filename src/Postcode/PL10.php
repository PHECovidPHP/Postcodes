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
final class PL10
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02003903',
        '1AB' => 'E02003903',
        '1AD' => 'E02003903',
        '1AE' => 'E02003903',
        '1AF' => 'E02003903',
        '1AG' => 'E02003903',
        '1AH' => 'E02003903',
        '1AJ' => 'E02003903',
        '1AL' => 'E02003903',
        '1AN' => 'E02003903',
        '1AP' => 'E02003903',
        '1AQ' => 'E02003903',
        '1AR' => 'E02003903',
        '1AS' => 'E02003903',
        '1AT' => 'E02003903',
        '1AU' => 'E02003903',
        '1AW' => 'E02003903',
        '1AX' => 'E02003903',
        '1AY' => 'E02003903',
        '1AZ' => 'E02003903',
        '1BA' => 'E02003903',
        '1BB' => 'E02003903',
        '1BD' => 'E02003903',
        '1BE' => 'E02003903',
        '1BG' => 'E02003903',
        '1BH' => 'E02003903',
        '1BJ' => 'E02003903',
        '1BL' => 'E02003903',
        '1BN' => 'E02003903',
        '1BP' => 'E02003903',
        '1BQ' => 'E02003903',
        '1BS' => 'E02003903',
        '1BT' => 'E02003903',
        '1BU' => 'E02003903',
        '1BW' => 'E02003903',
        '1BX' => 'E02003903',
        '1BY' => 'E02003903',
        '1BZ' => 'E02003903',
        '1DA' => 'E02003903',
        '1DB' => 'E02003903',
        '1DD' => 'E02003903',
        '1DE' => 'E02003903',
        '1DF' => 'E02003903',
        '1DG' => 'E02003903',
        '1DH' => 'E02003903',
        '1DJ' => 'E02003903',
        '1DL' => 'E02003903',
        '1DN' => 'E02003903',
        '1DP' => 'E02003903',
        '1DQ' => 'E02003903',
        '1DR' => 'E02003903',
        '1DS' => 'E02003903',
        '1DT' => 'E02003903',
        '1DU' => 'E02003903',
        '1DW' => 'E02003903',
        '1DX' => 'E02003903',
        '1DY' => 'E02003903',
        '1DZ' => 'E02003903',
        '1EA' => 'E02003903',
        '1EB' => 'E02003903',
        '1ED' => 'E02003903',
        '1EE' => 'E02003903',
        '1EF' => 'E02003903',
        '1EG' => 'E02003903',
        '1EH' => 'E02003903',
        '1EJ' => 'E02003903',
        '1EL' => 'E02003903',
        '1EN' => 'E02003903',
        '1EP' => 'E02003903',
        '1EQ' => 'E02003903',
        '1ER' => 'E02003903',
        '1ES' => 'E02003903',
        '1ET' => 'E02003903',
        '1EU' => 'E02003903',
        '1EW' => 'E02003903',
        '1EX' => 'E02003903',
        '1EY' => 'E02003903',
        '1EZ' => 'E02003903',
        '1FA' => 'E02003903',
        '1FB' => 'E02003903',
        '1FD' => 'E02003903',
        '1FE' => 'E02003903',
        '1FF' => 'E02003903',
        '1FH' => 'E02003903',
        '1GA' => 'E02003903',
        '1GX' => 'E02003903',
        '1HA' => 'E02003903',
        '1HB' => 'E02003903',
        '1HD' => 'E02003903',
        '1HE' => 'E02003903',
        '1HF' => 'E02003903',
        '1HG' => 'E02003903',
        '1HH' => 'E02003903',
        '1HJ' => 'E02003903',
        '1HL' => 'E02003903',
        '1HP' => 'E02003903',
        '1HR' => 'E02003903',
        '1HS' => 'E02003903',
        '1HT' => 'E02003903',
        '1HU' => 'E02003903',
        '1HW' => 'E02003903',
        '1HX' => 'E02003903',
        '1HY' => 'E02003903',
        '1HZ' => 'E02003903',
        '1JA' => 'E02003903',
        '1JB' => 'E02003903',
        '1JD' => 'E02003903',
        '1JE' => 'E02003903',
        '1JF' => 'E02003903',
        '1JG' => 'E02003903',
        '1JH' => 'E02003903',
        '1JJ' => 'E02003903',
        '1JL' => 'E02003903',
        '1JN' => 'E02003903',
        '1JP' => 'E02003903',
        '1JR' => 'E02003903',
        '1JS' => 'E02003903',
        '1JT' => 'E02003903',
        '1JU' => 'E02003903',
        '1JW' => 'E02003903',
        '1JX' => 'E02003903',
        '1JY' => 'E02003903',
        '1JZ' => 'E02003903',
        '1LA' => 'E02003903',
        '1LB' => 'E02003903',
        '1LE' => 'E02003903',
        '1LF' => 'E02003903',
        '1LG' => 'E02003903',
        '1LH' => 'E02003903',
        '1LJ' => 'E02003903',
        '1LL' => 'E02003903',
        '1LN' => 'E02003903',
        '1LP' => 'E02003903',
        '1LQ' => 'E02003903',
        '1LR' => 'E02003903',
        '1LS' => 'E02003903',
        '1LW' => 'E02003903',
        '1NA' => 'E02003903',
        '1NB' => 'E02003903',
        '1ND' => 'E02003903',
        '1NE' => 'E02003903',
        '1NF' => 'E02003903',
        '1NG' => 'E02003903',
        '1NH' => 'E02003903',
        '1NJ' => 'E02003903',
        '1NL' => 'E02003903',
        '1NN' => 'E02003903',
        '1NP' => 'E02003903',
        '1NQ' => 'E02003903',
        '1NR' => 'E02003903',
        '1NS' => 'E02003903',
        '1NT' => 'E02003903',
        '1NU' => 'E02003903',
        '1NW' => 'E02003903',
        '1NX' => 'E02003903',
        '1NY' => 'E02003903',
        '1NZ' => 'E02003903',
        '1PA' => 'E02003903',
        '1PB' => 'E02003903',
        '1PD' => 'E02003903',
        '1PE' => 'E02003903',
        '1PF' => 'E02003903',
        '1PG' => 'E02003903',
        '1PH' => 'E02003903',
        '1PJ' => 'E02003903',
        '1PL' => 'E02003903',
        '1PN' => 'E02003903',
        '1PP' => 'E02003903',
        '1PQ' => 'E02003903',
        '1PR' => 'E02003903',
        '1PS' => 'E02003903',
        '1PT' => 'E02003903',
        '1PW' => 'E02003903',
        '1QA' => 'E02003903',
        '1QB' => 'E02003903',
        '1QD' => 'E02003903',
        '1QE' => 'E02003903',
        '1QF' => 'E02003903',
        '1QG' => 'E02003903',
        '1QH' => 'E02003903',
        '1QJ' => 'E02003903',
        '1QQ' => 'E02003903',
        '1RT' => 'E02003903',
        '1WA' => 'E02003903',
        '1WG' => 'E02003903',
        '1WJ' => 'E02003903',
        '1WS' => 'E02003903',
        '1WT' => 'E02003903',
        '1WU' => 'E02003903',
        '1WW' => 'E02003903',
        '1WX' => 'E02003903',
        '1WY' => 'E02003903',
        '1WZ' => 'E02003903',
        '1XJ' => 'E02003903',
        '1YA' => 'E02003903',
        '1YH' => 'E02003903',
        '1YJ' => 'E02003903',
        '1YL' => 'E02003903',
        '1YN' => 'E02003903',
        '1YP' => 'E02003903',
        '1YQ' => 'E02003903',
        '1YR' => 'E02003903',
        '1YS' => 'E02003903',
        '1YT' => 'E02003903',
        '1YU' => 'E02003903',
        '1YW' => 'E02003903',
        '1YX' => 'E02003903',
        '1ZW' => 'E02003903',
        '1ZX' => 'E02003903',
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
