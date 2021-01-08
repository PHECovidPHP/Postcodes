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
final class BH5
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02003190',
        '1AB' => 'E02003190',
        '1AD' => 'E02003190',
        '1AE' => 'E02003190',
        '1AF' => 'E02003190',
        '1AG' => 'E02003190',
        '1AH' => 'E02003190',
        '1AJ' => 'E02003190',
        '1AL' => 'E02003190',
        '1AN' => 'E02003187',
        '1AP' => 'E02003190',
        '1AQ' => 'E02003190',
        '1AR' => 'E02003190',
        '1AS' => 'E02003190',
        '1AT' => 'E02003190',
        '1AU' => 'E02003190',
        '1AW' => 'E02003190',
        '1AX' => 'E02003190',
        '1AY' => 'E02003190',
        '1AZ' => 'E02003190',
        '1BA' => 'E02003190',
        '1BB' => 'E02003190',
        '1BD' => 'E02003190',
        '1BE' => 'E02003190',
        '1BG' => 'E02003190',
        '1BH' => 'E02003190',
        '1BJ' => 'E02003190',
        '1BL' => 'E02003190',
        '1BN' => 'E02003190',
        '1BP' => 'E02003190',
        '1BQ' => 'E02003190',
        '1BS' => 'E02003190',
        '1BT' => 'E02003190',
        '1BU' => 'E02003190',
        '1BW' => 'E02003190',
        '1BX' => 'E02003190',
        '1BY' => 'E02003190',
        '1BZ' => 'E02003190',
        '1DA' => 'E02003190',
        '1DB' => 'E02003190',
        '1DD' => 'E02003190',
        '1DE' => 'E02003190',
        '1DF' => 'E02003190',
        '1DG' => 'E02003190',
        '1DH' => 'E02003190',
        '1DJ' => 'E02003190',
        '1DL' => 'E02003190',
        '1DN' => 'E02003190',
        '1DP' => 'E02003190',
        '1DQ' => 'E02003190',
        '1DR' => 'E02003190',
        '1DS' => 'E02003190',
        '1DT' => 'E02003190',
        '1DU' => 'E02003190',
        '1DW' => 'E02003190',
        '1DX' => 'E02003190',
        '1DY' => 'E02003190',
        '1DZ' => 'E02003190',
        '1EA' => 'E02003190',
        '1EB' => 'E02003190',
        '1ED' => 'E02003190',
        '1EE' => 'E02003190',
        '1EF' => 'E02003190',
        '1EG' => 'E02003190',
        '1EH' => 'E02003190',
        '1EJ' => 'E02003190',
        '1EL' => 'E02003190',
        '1EN' => 'E02003190',
        '1EP' => 'E02003190',
        '1EQ' => 'E02003190',
        '1ER' => 'E02003190',
        '1ES' => 'E02003190',
        '1ET' => 'E02003190',
        '1EU' => 'E02003190',
        '1EW' => 'E02003190',
        '1EX' => 'E02003190',
        '1EY' => 'E02003190',
        '1EZ' => 'E02003190',
        '1FA' => 'E02003190',
        '1FB' => 'E02003190',
        '1FD' => 'E02003190',
        '1FE' => 'E02003190',
        '1FG' => 'E02003187',
        '1FH' => 'E02003187',
        '1HA' => 'E02003190',
        '1HB' => 'E02003190',
        '1HD' => 'E02003190',
        '1HE' => 'E02003190',
        '1HF' => 'E02003190',
        '1HG' => 'E02003190',
        '1HH' => 'E02003190',
        '1HJ' => 'E02003190',
        '1HL' => 'E02003187',
        '1HN' => 'E02003187',
        '1HP' => 'E02003190',
        '1HQ' => 'E02003190',
        '1HR' => 'E02003190',
        '1HS' => 'E02003190',
        '1HT' => 'E02003190',
        '1HU' => 'E02003190',
        '1HW' => 'E02003190',
        '1HX' => 'E02003190',
        '1HY' => 'E02003190',
        '1HZ' => 'E02003190',
        '1JA' => 'E02003187',
        '1JB' => 'E02003187',
        '1JD' => 'E02003187',
        '1JE' => 'E02003190',
        '1JF' => 'E02003190',
        '1JG' => 'E02003190',
        '1JH' => 'E02003190',
        '1JJ' => 'E02003190',
        '1JL' => 'E02003190',
        '1JN' => 'E02003187',
        '1JP' => 'E02003187',
        '1JQ' => 'E02003190',
        '1JR' => 'E02003190',
        '1JS' => 'E02003190',
        '1JT' => 'E02003190',
        '1JU' => 'E02003190',
        '1JW' => 'E02003187',
        '1JX' => 'E02003190',
        '1JY' => 'E02003190',
        '1JZ' => 'E02003190',
        '1LA' => 'E02003187',
        '1LB' => 'E02003190',
        '1LD' => 'E02003190',
        '1LE' => 'E02003190',
        '1LG' => 'E02003190',
        '1LH' => 'E02003187',
        '1LJ' => 'E02003187',
        '1LL' => 'E02003187',
        '1LN' => 'E02003187',
        '1LP' => 'E02003187',
        '1LQ' => 'E02003187',
        '1LR' => 'E02003187',
        '1LS' => 'E02003187',
        '1LT' => 'E02003187',
        '1LU' => 'E02003187',
        '1LW' => 'E02003187',
        '1LX' => 'E02003190',
        '1LY' => 'E02003187',
        '1LZ' => 'E02003187',
        '1NA' => 'E02003187',
        '1NB' => 'E02003187',
        '1ND' => 'E02003190',
        '1NE' => 'E02003187',
        '1NF' => 'E02003187',
        '1NH' => 'E02003190',
        '1NJ' => 'E02003190',
        '1NN' => 'E02003187',
        '1NP' => 'E02003187',
        '1NR' => 'E02003187',
        '1NS' => 'E02003187',
        '1NT' => 'E02003187',
        '1NU' => 'E02003187',
        '1NW' => 'E02003187',
        '1WA' => 'E02003187',
        '1WB' => 'E02003187',
        '1WD' => 'E02003192',
        '1WE' => 'E02003192',
        '1WF' => 'E02003192',
        '1XJ' => 'E02003192',
        '1XL' => 'E02003192',
        '1XN' => 'E02003192',
        '1XQ' => 'E02003192',
        '1XT' => 'E02003192',
        '1XW' => 'E02003192',
        '1XX' => 'E02003192',
        '1XY' => 'E02003192',
        '1XZ' => 'E02003192',
        '1YA' => 'E02003190',
        '1YB' => 'E02003190',
        '1YD' => 'E02003192',
        '1YE' => 'E02003190',
        '1YF' => 'E02003192',
        '1YG' => 'E02003192',
        '1YH' => 'E02003192',
        '1YJ' => 'E02003190',
        '1YL' => 'E02003192',
        '1YN' => 'E02003190',
        '1YP' => 'E02003190',
        '1YQ' => 'E02003190',
        '1YR' => 'E02003190',
        '1YS' => 'E02003192',
        '1YT' => 'E02003190',
        '1YU' => 'E02003190',
        '1YW' => 'E02003190',
        '1YX' => 'E02003190',
        '1YZ' => 'E02003190',
        '1ZA' => 'E02003192',
        '1ZB' => 'E02003192',
        '1ZD' => 'E02003190',
        '1ZE' => 'E02003190',
        '1ZF' => 'E02003192',
        '1ZG' => 'E02003192',
        '1ZH' => 'E02003192',
        '1ZJ' => 'E02003192',
        '1ZL' => 'E02003190',
        '1ZN' => 'E02003190',
        '1ZP' => 'E02003190',
        '1ZQ' => 'E02003192',
        '1ZR' => 'E02003190',
        '1ZS' => 'E02003190',
        '1ZT' => 'E02003192',
        '1ZU' => 'E02003192',
        '1ZW' => 'E02003192',
        '1ZX' => 'E02003192',
        '1ZY' => 'E02003192',
        '2AA' => 'E02003187',
        '2AB' => 'E02003187',
        '2AD' => 'E02003187',
        '2AE' => 'E02003187',
        '2AF' => 'E02003187',
        '2AG' => 'E02003187',
        '2AH' => 'E02003187',
        '2AJ' => 'E02003187',
        '2AL' => 'E02003187',
        '2AN' => 'E02003187',
        '2AP' => 'E02003187',
        '2AQ' => 'E02003187',
        '2AR' => 'E02003187',
        '2AS' => 'E02003187',
        '2AT' => 'E02003187',
        '2AU' => 'E02003187',
        '2AW' => 'E02003187',
        '2AX' => 'E02003187',
        '2AY' => 'E02003187',
        '2AZ' => 'E02003189',
        '2BA' => 'E02003189',
        '2BB' => 'E02003187',
        '2BD' => 'E02003189',
        '2BE' => 'E02003187',
        '2BG' => 'E02003187',
        '2BH' => 'E02003187',
        '2BJ' => 'E02003187',
        '2BL' => 'E02003187',
        '2BN' => 'E02003187',
        '2BP' => 'E02003187',
        '2BQ' => 'E02003187',
        '2BS' => 'E02003187',
        '2BT' => 'E02003187',
        '2BU' => 'E02003189',
        '2BW' => 'E02003189',
        '2BX' => 'E02003187',
        '2BY' => 'E02003189',
        '2BZ' => 'E02003189',
        '2DA' => 'E02003189',
        '2DB' => 'E02003187',
        '2DD' => 'E02003187',
        '2DE' => 'E02003187',
        '2DF' => 'E02003187',
        '2DG' => 'E02003187',
        '2DH' => 'E02003187',
        '2DJ' => 'E02003187',
        '2DL' => 'E02003187',
        '2DN' => 'E02003187',
        '2DP' => 'E02003187',
        '2DQ' => 'E02003187',
        '2DR' => 'E02003187',
        '2DS' => 'E02003187',
        '2DT' => 'E02003187',
        '2DU' => 'E02003187',
        '2DW' => 'E02003187',
        '2DX' => 'E02003187',
        '2DY' => 'E02003187',
        '2DZ' => 'E02003187',
        '2EA' => 'E02003187',
        '2ED' => 'E02003189',
        '2EE' => 'E02003187',
        '2EF' => 'E02003187',
        '2EG' => 'E02003187',
        '2EH' => 'E02003187',
        '2EJ' => 'E02003187',
        '2EL' => 'E02003187',
        '2EN' => 'E02003187',
        '2EP' => 'E02003187',
        '2EQ' => 'E02003189',
        '2ER' => 'E02003189',
        '2EW' => 'E02003189',
        '2HA' => 'E02003187',
        '2HB' => 'E02003187',
        '2HD' => 'E02003187',
        '2HE' => 'E02003187',
        '2HF' => 'E02003187',
        '2HG' => 'E02003187',
        '2HH' => 'E02003187',
        '2HJ' => 'E02003187',
        '2HL' => 'E02003189',
        '2HN' => 'E02003189',
        '2HP' => 'E02003189',
        '2HQ' => 'E02003187',
        '2HR' => 'E02003187',
        '2HS' => 'E02003189',
        '2HT' => 'E02003187',
        '2HU' => 'E02003187',
        '2HW' => 'E02003187',
        '2HX' => 'E02003187',
        '2HY' => 'E02003187',
        '2HZ' => 'E02003187',
        '2JA' => 'E02003187',
        '2JB' => 'E02003189',
        '2JD' => 'E02003189',
        '2JE' => 'E02003187',
        '2JF' => 'E02003187',
        '2JG' => 'E02003187',
        '2JH' => 'E02003187',
        '2JJ' => 'E02003187',
        '2JL' => 'E02003187',
        '2JN' => 'E02003187',
        '2JP' => 'E02003187',
        '2JQ' => 'E02003187',
        '2JR' => 'E02003187',
        '2JS' => 'E02003187',
        '2JT' => 'E02003187',
        '2JU' => 'E02003187',
        '2JW' => 'E02003189',
        '2JX' => 'E02003187',
        '2JY' => 'E02003187',
        '2JZ' => 'E02003187',
        '2LA' => 'E02003187',
        '2WA' => 'E02003192',
        '2WB' => 'E02003192',
        '2WD' => 'E02003192',
        '2WE' => 'E02003192',
        '2WF' => 'E02003192',
        '2WG' => 'E02003192',
        '2XN' => 'E02003192',
        '2XZ' => 'E02003192',
        '2YA' => 'E02003192',
        '2YB' => 'E02003192',
        '2YD' => 'E02003187',
        '2YE' => 'E02003187',
        '2YF' => 'E02003187',
        '2YG' => 'E02003192',
        '2YH' => 'E02003187',
        '2YJ' => 'E02003187',
        '2YL' => 'E02003187',
        '2YN' => 'E02003187',
        '2YP' => 'E02003187',
        '2YQ' => 'E02003187',
        '2YR' => 'E02003187',
        '2YS' => 'E02003187',
        '2YT' => 'E02003187',
        '2YU' => 'E02003187',
        '2YW' => 'E02003192',
        '2YX' => 'E02003192',
        '2YY' => 'E02003192',
        '2YZ' => 'E02003187',
        '2ZA' => 'E02003192',
        '2ZB' => 'E02003187',
        '2ZD' => 'E02003187',
        '2ZE' => 'E02003192',
        '2ZF' => 'E02003187',
        '2ZG' => 'E02003192',
        '2ZH' => 'E02003192',
        '2ZJ' => 'E02003192',
        '2ZL' => 'E02003192',
        '2ZN' => 'E02003192',
        '2ZQ' => 'E02003192',
        '2ZS' => 'E02003192',
        '2ZT' => 'E02003192',
        '2ZU' => 'E02003192',
        '2ZX' => 'E02003192',
        '4JB' => 'E02003207',
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
