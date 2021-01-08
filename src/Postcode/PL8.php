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
final class PL8
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02004197',
        '1AB' => 'E02004197',
        '1AD' => 'E02004197',
        '1AE' => 'E02004197',
        '1AF' => 'E02004197',
        '1AG' => 'E02004197',
        '1AH' => 'E02004197',
        '1AJ' => 'E02004197',
        '1AL' => 'E02004197',
        '1AN' => 'E02004197',
        '1AP' => 'E02004197',
        '1AQ' => 'E02004197',
        '1AR' => 'E02004197',
        '1AS' => 'E02004197',
        '1AT' => 'E02004197',
        '1AU' => 'E02004197',
        '1AW' => 'E02004197',
        '1AX' => 'E02004197',
        '1AY' => 'E02004197',
        '1AZ' => 'E02004197',
        '1BA' => 'E02004197',
        '1BB' => 'E02003152',
        '1BD' => 'E02004197',
        '1BE' => 'E02004197',
        '1BG' => 'E02004197',
        '1BH' => 'E02004197',
        '1BJ' => 'E02004197',
        '1BL' => 'E02004197',
        '1BN' => 'E02004197',
        '1BP' => 'E02004197',
        '1BQ' => 'E02004197',
        '1BS' => 'E02004196',
        '1BT' => 'E02004197',
        '1BU' => 'E02004197',
        '1BW' => 'E02004197',
        '1BX' => 'E02004197',
        '1BY' => 'E02004197',
        '1BZ' => 'E02004197',
        '1DA' => 'E02004197',
        '1DB' => 'E02004197',
        '1DD' => 'E02004197',
        '1DE' => 'E02004197',
        '1DF' => 'E02004197',
        '1DG' => 'E02004197',
        '1DH' => 'E02004197',
        '1DJ' => 'E02004197',
        '1DL' => 'E02004197',
        '1DN' => 'E02004197',
        '1DP' => 'E02004197',
        '1DQ' => 'E02004197',
        '1DR' => 'E02004197',
        '1DS' => 'E02004197',
        '1DT' => 'E02004197',
        '1DW' => 'E02004197',
        '1DX' => 'E02004197',
        '1DY' => 'E02004197',
        '1DZ' => 'E02004197',
        '1EA' => 'E02004197',
        '1EB' => 'E02004197',
        '1ED' => 'E02004197',
        '1EE' => 'E02004197',
        '1EF' => 'E02004197',
        '1EG' => 'E02004197',
        '1EH' => 'E02004197',
        '1EJ' => 'E02004197',
        '1EL' => 'E02004197',
        '1EN' => 'E02004197',
        '1EP' => 'E02004197',
        '1EQ' => 'E02004197',
        '1EU' => 'E02004197',
        '1EW' => 'E02004197',
        '1EX' => 'E02004197',
        '1EY' => 'E02004197',
        '1EZ' => 'E02004197',
        '1HA' => 'E02004197',
        '1HB' => 'E02004197',
        '1HD' => 'E02004197',
        '1HE' => 'E02004197',
        '1HF' => 'E02004197',
        '1HG' => 'E02004197',
        '1HH' => 'E02004196',
        '1HJ' => 'E02004196',
        '1HL' => 'E02004196',
        '1HN' => 'E02004196',
        '1HP' => 'E02004197',
        '1HQ' => 'E02004197',
        '1HR' => 'E02004197',
        '1HS' => 'E02004197',
        '1HT' => 'E02004197',
        '1HU' => 'E02004197',
        '1HW' => 'E02004196',
        '1HX' => 'E02004197',
        '1HY' => 'E02004197',
        '1HZ' => 'E02004197',
        '1JA' => 'E02004197',
        '1JG' => 'E02004197',
        '1JH' => 'E02004196',
        '1JJ' => 'E02004196',
        '1JL' => 'E02004196',
        '1JN' => 'E02004196',
        '1JP' => 'E02004196',
        '1JQ' => 'E02004196',
        '1JR' => 'E02004196',
        '1JS' => 'E02004196',
        '1JT' => 'E02004196',
        '1JU' => 'E02004196',
        '1JW' => 'E02004196',
        '1JX' => 'E02004196',
        '1JY' => 'E02004196',
        '1JZ' => 'E02004196',
        '1LA' => 'E02004196',
        '1LB' => 'E02004196',
        '1LD' => 'E02004196',
        '1LE' => 'E02004196',
        '1LF' => 'E02004196',
        '1LH' => 'E02004196',
        '1LJ' => 'E02004196',
        '1LL' => 'E02004196',
        '1LN' => 'E02004196',
        '1LP' => 'E02004196',
        '1LR' => 'E02004196',
        '1LS' => 'E02004196',
        '1LT' => 'E02004196',
        '1LU' => 'E02004196',
        '1LW' => 'E02004196',
        '1LX' => 'E02004196',
        '1LY' => 'E02004196',
        '1LZ' => 'E02004196',
        '1NA' => 'E02004196',
        '1NB' => 'E02004196',
        '1ND' => 'E02004196',
        '1NE' => 'E02004196',
        '1NF' => 'E02004196',
        '1NG' => 'E02004196',
        '1NH' => 'E02004196',
        '1NJ' => 'E02004196',
        '1NQ' => 'E02004196',
        '1WA' => 'E02003152',
        '1WD' => 'E02003152',
        '1WH' => 'E02003152',
        '1WZ' => 'E02003152',
        '1XJ' => 'E02003152',
        '1XQ' => 'E02003152',
        '1XR' => 'E02003152',
        '1YJ' => 'E02003152',
        '1YL' => 'E02003152',
        '1YN' => 'E02003152',
        '1YR' => 'E02003152',
        '1YS' => 'E02004197',
        '1YT' => 'E02004197',
        '1YU' => 'E02004197',
        '1YW' => 'E02003152',
        '1YX' => 'E02004196',
        '1YY' => 'E02004196',
        '1YZ' => 'E02004197',
        '2AA' => 'E02004197',
        '2AB' => 'E02004197',
        '2AD' => 'E02004197',
        '2AE' => 'E02004197',
        '2AF' => 'E02004197',
        '2AG' => 'E02004197',
        '2AH' => 'E02004197',
        '2AJ' => 'E02004197',
        '2AL' => 'E02004197',
        '2AN' => 'E02004197',
        '2AP' => 'E02004197',
        '2AQ' => 'E02004197',
        '2AR' => 'E02004197',
        '2AS' => 'E02004197',
        '2AT' => 'E02004197',
        '2AU' => 'E02004197',
        '2AW' => 'E02004197',
        '2AX' => 'E02004197',
        '2AY' => 'E02004197',
        '2AZ' => 'E02004197',
        '2BA' => 'E02004197',
        '2BB' => 'E02004197',
        '2BD' => 'E02004197',
        '2BE' => 'E02004197',
        '2BG' => 'E02004197',
        '2BH' => 'E02004197',
        '2BJ' => 'E02004197',
        '2BL' => 'E02004197',
        '2BN' => 'E02004197',
        '2BP' => 'E02004197',
        '2BQ' => 'E02004197',
        '2BS' => 'E02004197',
        '2BT' => 'E02004197',
        '2BU' => 'E02004197',
        '2BW' => 'E02004197',
        '2BX' => 'E02004197',
        '2BY' => 'E02004197',
        '2BZ' => 'E02004197',
        '2DA' => 'E02004196',
        '2DB' => 'E02004197',
        '2DD' => 'E02004197',
        '2DE' => 'E02004197',
        '2DF' => 'E02004197',
        '2DG' => 'E02004197',
        '2DH' => 'E02004197',
        '2DJ' => 'E02004197',
        '2DL' => 'E02004197',
        '2DN' => 'E02004197',
        '2DP' => 'E02004197',
        '2DQ' => 'E02004197',
        '2DR' => 'E02004197',
        '2DS' => 'E02004197',
        '2DT' => 'E02004196',
        '2DU' => 'E02004197',
        '2DW' => 'E02004197',
        '2DX' => 'E02004197',
        '2DY' => 'E02004196',
        '2DZ' => 'E02004196',
        '2EA' => 'E02004196',
        '2EB' => 'E02004196',
        '2ED' => 'E02004196',
        '2EE' => 'E02004196',
        '2EF' => 'E02004196',
        '2EG' => 'E02004196',
        '2EH' => 'E02004196',
        '2EJ' => 'E02004196',
        '2EL' => 'E02004196',
        '2EN' => 'E02004196',
        '2EP' => 'E02004196',
        '2EQ' => 'E02004196',
        '2ER' => 'E02004196',
        '2ES' => 'E02004196',
        '2ET' => 'E02004196',
        '2EU' => 'E02003152',
        '2EW' => 'E02004196',
        '2EX' => 'E02004196',
        '2EY' => 'E02004196',
        '2EZ' => 'E02004196',
        '2FA' => 'E02003152',
        '2FB' => 'E02004196',
        '2FD' => 'E02004197',
        '2FE' => 'E02004197',
        '2FF' => 'E02004196',
        '2FG' => 'E02004197',
        '2FH' => 'E02004196',
        '2FJ' => 'E02004197',
        '2FL' => 'E02004197',
        '2FN' => 'E02004196',
        '2GA' => 'E02004196',
        '2GY' => 'E02004196',
        '2GZ' => 'E02004196',
        '2HA' => 'E02004196',
        '2HB' => 'E02004196',
        '2HD' => 'E02004196',
        '2HE' => 'E02004196',
        '2HF' => 'E02004196',
        '2HG' => 'E02004196',
        '2HH' => 'E02004196',
        '2HJ' => 'E02004196',
        '2HL' => 'E02004196',
        '2HN' => 'E02004196',
        '2HP' => 'E02004196',
        '2HQ' => 'E02004196',
        '2HR' => 'E02004196',
        '2HS' => 'E02004196',
        '2HT' => 'E02004196',
        '2HU' => 'E02004197',
        '2HW' => 'E02004196',
        '2HX' => 'E02004197',
        '2HY' => 'E02004197',
        '2HZ' => 'E02004196',
        '2JA' => 'E02004197',
        '2JB' => 'E02004197',
        '2JD' => 'E02004196',
        '2JE' => 'E02004196',
        '2JF' => 'E02004196',
        '2JG' => 'E02004196',
        '2JH' => 'E02004196',
        '2JJ' => 'E02004196',
        '2JL' => 'E02004196',
        '2JN' => 'E02004196',
        '2JP' => 'E02004196',
        '2JQ' => 'E02004196',
        '2JR' => 'E02004196',
        '2JS' => 'E02004196',
        '2JT' => 'E02004196',
        '2JU' => 'E02004196',
        '2JW' => 'E02004196',
        '2JX' => 'E02004196',
        '2JY' => 'E02004196',
        '2JZ' => 'E02004196',
        '2LA' => 'E02004196',
        '2LB' => 'E02004196',
        '2LD' => 'E02004197',
        '2LE' => 'E02004197',
        '2LF' => 'E02004197',
        '2LG' => 'E02004196',
        '2LH' => 'E02004196',
        '2LJ' => 'E02004196',
        '2LL' => 'E02004196',
        '2LN' => 'E02004196',
        '2LP' => 'E02004196',
        '2LQ' => 'E02004196',
        '2LR' => 'E02004196',
        '2LS' => 'E02004196',
        '2LT' => 'E02004196',
        '2LU' => 'E02004196',
        '2LW' => 'E02004196',
        '2LX' => 'E02004196',
        '2LY' => 'E02004196',
        '2LZ' => 'E02004196',
        '2NA' => 'E02004196',
        '2NB' => 'E02004196',
        '2ND' => 'E02004196',
        '2NE' => 'E02004197',
        '2NF' => 'E02004197',
        '2NG' => 'E02004197',
        '2NH' => 'E02004197',
        '2NJ' => 'E02004197',
        '2NL' => 'E02004197',
        '2NN' => 'E02004197',
        '2NP' => 'E02004196',
        '2NQ' => 'E02004197',
        '2NR' => 'E02004196',
        '2NS' => 'E02004196',
        '2NT' => 'E02004196',
        '2NU' => 'E02004196',
        '2NW' => 'E02004196',
        '2NX' => 'E02004196',
        '2NY' => 'E02004197',
        '2NZ' => 'E02004197',
        '2PA' => 'E02004197',
        '2PB' => 'E02004197',
        '2PD' => 'E02004197',
        '2PE' => 'E02004197',
        '2PF' => 'E02004197',
        '2PG' => 'E02004196',
        '2PH' => 'E02004197',
        '2PJ' => 'E02004196',
        '2PL' => 'E02004196',
        '2PN' => 'E02004196',
        '2QA' => 'E02004196',
        '2WA' => 'E02003152',
        '2WB' => 'E02003152',
        '2WD' => 'E02003152',
        '2WE' => 'E02003152',
        '2WW' => 'E02003152',
        '2WX' => 'E02003152',
        '2WY' => 'E02003152',
        '2WZ' => 'E02003152',
        '2YA' => 'E02004196',
        '2YP' => 'E02003152',
        '2YR' => 'E02004197',
        '2YS' => 'E02003152',
        '2YT' => 'E02003152',
        '2YU' => 'E02004196',
        '2YW' => 'E02004196',
        '2YX' => 'E02004196',
        '2YY' => 'E02004196',
        '2YZ' => 'E02004196',
        '2ZN' => 'E02003152',
        '2ZW' => 'E02003152',
        '2ZX' => 'E02003152',
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