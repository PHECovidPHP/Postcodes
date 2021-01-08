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
final class EX33
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02004179',
        '1AB' => 'E02004179',
        '1AD' => 'E02004179',
        '1AE' => 'E02004179',
        '1AF' => 'E02004179',
        '1AG' => 'E02004179',
        '1AH' => 'E02004179',
        '1AJ' => 'E02004179',
        '1AL' => 'E02004179',
        '1AN' => 'E02004179',
        '1AP' => 'E02004179',
        '1AQ' => 'E02004179',
        '1AR' => 'E02004179',
        '1AS' => 'E02004179',
        '1AT' => 'E02004179',
        '1AU' => 'E02004179',
        '1AW' => 'E02004179',
        '1AX' => 'E02004179',
        '1AY' => 'E02004179',
        '1AZ' => 'E02004179',
        '1BA' => 'E02004179',
        '1BB' => 'E02004179',
        '1BD' => 'E02004179',
        '1BE' => 'E02004179',
        '1BG' => 'E02004179',
        '1BH' => 'E02004179',
        '1BJ' => 'E02004179',
        '1BL' => 'E02004179',
        '1BN' => 'E02004179',
        '1BP' => 'E02004179',
        '1BQ' => 'E02004179',
        '1BR' => 'E02004179',
        '1BS' => 'E02004179',
        '1BT' => 'E02004179',
        '1BU' => 'E02004179',
        '1BW' => 'E02004179',
        '1BX' => 'E02004179',
        '1BY' => 'E02004179',
        '1BZ' => 'E02004179',
        '1DA' => 'E02004179',
        '1DB' => 'E02004179',
        '1DD' => 'E02004179',
        '1DE' => 'E02004179',
        '1DF' => 'E02004179',
        '1DG' => 'E02004179',
        '1DH' => 'E02004179',
        '1DJ' => 'E02004179',
        '1DL' => 'E02004179',
        '1DN' => 'E02004179',
        '1DP' => 'E02004179',
        '1DQ' => 'E02004179',
        '1DR' => 'E02004179',
        '1DS' => 'E02004179',
        '1DT' => 'E02004179',
        '1DU' => 'E02004179',
        '1DW' => 'E02004179',
        '1DX' => 'E02004179',
        '1DY' => 'E02004179',
        '1DZ' => 'E02004179',
        '1EA' => 'E02004179',
        '1EB' => 'E02004179',
        '1ED' => 'E02004178',
        '1EE' => 'E02004179',
        '1EF' => 'E02004179',
        '1EG' => 'E02004179',
        '1EH' => 'E02004179',
        '1EJ' => 'E02004179',
        '1EL' => 'E02004179',
        '1EN' => 'E02004179',
        '1EP' => 'E02004179',
        '1EQ' => 'E02004179',
        '1ER' => 'E02004179',
        '1ES' => 'E02004179',
        '1ET' => 'E02004179',
        '1EU' => 'E02004179',
        '1EW' => 'E02004179',
        '1EX' => 'E02004179',
        '1EY' => 'E02004179',
        '1EZ' => 'E02004179',
        '1FA' => 'E02004179',
        '1FB' => 'E02004179',
        '1FD' => 'E02004179',
        '1FE' => 'E02004179',
        '1FF' => 'E02004178',
        '1FG' => 'E02004179',
        '1FH' => 'E02004178',
        '1FJ' => 'E02004179',
        '1FL' => 'E02004178',
        '1HA' => 'E02004179',
        '1HB' => 'E02004179',
        '1HD' => 'E02004179',
        '1HE' => 'E02004179',
        '1HF' => 'E02004179',
        '1HG' => 'E02004179',
        '1HH' => 'E02004179',
        '1HJ' => 'E02004179',
        '1HL' => 'E02004179',
        '1HN' => 'E02004179',
        '1HP' => 'E02004179',
        '1HQ' => 'E02004179',
        '1HR' => 'E02004178',
        '1HS' => 'E02004178',
        '1HT' => 'E02004178',
        '1HU' => 'E02004179',
        '1HW' => 'E02004179',
        '1HX' => 'E02004178',
        '1HY' => 'E02004178',
        '1HZ' => 'E02004178',
        '1JA' => 'E02004178',
        '1JB' => 'E02004179',
        '1JD' => 'E02004179',
        '1JE' => 'E02004179',
        '1JF' => 'E02004179',
        '1JG' => 'E02004178',
        '1JH' => 'E02004179',
        '1JJ' => 'E02004178',
        '1JL' => 'E02004178',
        '1JN' => 'E02004178',
        '1JP' => 'E02004178',
        '1JQ' => 'E02004178',
        '1JR' => 'E02004178',
        '1JS' => 'E02004178',
        '1JT' => 'E02004178',
        '1JU' => 'E02004178',
        '1JW' => 'E02004178',
        '1JX' => 'E02004178',
        '1JY' => 'E02004178',
        '1JZ' => 'E02004178',
        '1LA' => 'E02004178',
        '1LB' => 'E02004178',
        '1LD' => 'E02004178',
        '1LE' => 'E02004179',
        '1LF' => 'E02004178',
        '1LG' => 'E02004179',
        '1LH' => 'E02004179',
        '1LJ' => 'E02004179',
        '1LL' => 'E02004179',
        '1LN' => 'E02004179',
        '1LP' => 'E02004179',
        '1LQ' => 'E02004179',
        '1LR' => 'E02004179',
        '1LS' => 'E02004179',
        '1LT' => 'E02004179',
        '1LU' => 'E02004179',
        '1LW' => 'E02004179',
        '1LX' => 'E02004178',
        '1LY' => 'E02004178',
        '1LZ' => 'E02004178',
        '1NA' => 'E02004178',
        '1NB' => 'E02004178',
        '1ND' => 'E02004178',
        '1NE' => 'E02004178',
        '1NF' => 'E02004178',
        '1NG' => 'E02004178',
        '1NH' => 'E02004178',
        '1NJ' => 'E02004178',
        '1NL' => 'E02004179',
        '1NN' => 'E02004178',
        '1NP' => 'E02004178',
        '1NQ' => 'E02004178',
        '1NR' => 'E02004178',
        '1NS' => 'E02004178',
        '1NT' => 'E02004178',
        '1NU' => 'E02004178',
        '1NW' => 'E02004178',
        '1NX' => 'E02004178',
        '1NY' => 'E02004182',
        '1NZ' => 'E02004178',
        '1PA' => 'E02004178',
        '1PB' => 'E02004178',
        '1PD' => 'E02004178',
        '1PE' => 'E02004178',
        '1PF' => 'E02004178',
        '1PG' => 'E02004178',
        '1PH' => 'E02004178',
        '1PJ' => 'E02004178',
        '1PL' => 'E02004178',
        '1PN' => 'E02004178',
        '1PP' => 'E02004178',
        '1PQ' => 'E02004178',
        '1PR' => 'E02004178',
        '1PS' => 'E02004178',
        '1PT' => 'E02004178',
        '1PU' => 'E02004178',
        '1PW' => 'E02004178',
        '1PX' => 'E02004178',
        '1PY' => 'E02004178',
        '1PZ' => 'E02004178',
        '1QA' => 'E02004178',
        '1QB' => 'E02004178',
        '1QD' => 'E02004178',
        '1QE' => 'E02004178',
        '1QF' => 'E02004178',
        '1QG' => 'E02004179',
        '1QH' => 'E02004178',
        '1QJ' => 'E02004179',
        '1QL' => 'E02004178',
        '1QP' => 'E02004178',
        '1QR' => 'E02004178',
        '1QT' => 'E02004178',
        '1RA' => 'E02004179',
        '1RD' => 'E02004179',
        '1SA' => 'E02004179',
        '1XD' => 'E02004179',
        '1XN' => 'E02004182',
        '1XQ' => 'E02004182',
        '1YA' => 'E02004179',
        '1YJ' => 'E02004182',
        '1YL' => 'E02004179',
        '1YN' => 'E02004182',
        '1YP' => 'E02004182',
        '1YQ' => 'E02004179',
        '1YR' => 'E02004179',
        '1YS' => 'E02004182',
        '1YT' => 'E02004179',
        '1YU' => 'E02004179',
        '1YW' => 'E02004182',
        '1YX' => 'E02004179',
        '1ZN' => 'E02004182',
        '1ZW' => 'E02004182',
        '1ZX' => 'E02004182',
        '2AA' => 'E02004179',
        '2AB' => 'E02004179',
        '2AD' => 'E02004179',
        '2AE' => 'E02004179',
        '2AF' => 'E02004179',
        '2AG' => 'E02004179',
        '2AH' => 'E02004179',
        '2AJ' => 'E02004179',
        '2AL' => 'E02004179',
        '2AN' => 'E02004179',
        '2AP' => 'E02004179',
        '2AQ' => 'E02004179',
        '2AR' => 'E02004179',
        '2AS' => 'E02004179',
        '2AT' => 'E02004179',
        '2AU' => 'E02004179',
        '2AW' => 'E02004179',
        '2AX' => 'E02004179',
        '2AY' => 'E02004179',
        '2AZ' => 'E02004179',
        '2BA' => 'E02004179',
        '2BB' => 'E02004179',
        '2BD' => 'E02004179',
        '2BE' => 'E02004179',
        '2BG' => 'E02004179',
        '2BH' => 'E02004179',
        '2BJ' => 'E02004179',
        '2BL' => 'E02004179',
        '2BN' => 'E02004179',
        '2BP' => 'E02004179',
        '2BQ' => 'E02004179',
        '2BR' => 'E02004179',
        '2BS' => 'E02004179',
        '2BT' => 'E02004179',
        '2BU' => 'E02004179',
        '2BW' => 'E02004179',
        '2BX' => 'E02004179',
        '2BY' => 'E02004179',
        '2BZ' => 'E02004179',
        '2DA' => 'E02004179',
        '2DB' => 'E02004179',
        '2DD' => 'E02004179',
        '2DE' => 'E02004179',
        '2DF' => 'E02004179',
        '2DG' => 'E02004179',
        '2DH' => 'E02004179',
        '2DJ' => 'E02004179',
        '2DL' => 'E02004179',
        '2DN' => 'E02004179',
        '2DP' => 'E02004179',
        '2DQ' => 'E02004179',
        '2DR' => 'E02004179',
        '2DS' => 'E02004179',
        '2DT' => 'E02004179',
        '2DU' => 'E02004179',
        '2DW' => 'E02004179',
        '2DX' => 'E02004179',
        '2DY' => 'E02004179',
        '2DZ' => 'E02004179',
        '2EA' => 'E02004179',
        '2EB' => 'E02004179',
        '2ED' => 'E02004179',
        '2EE' => 'E02004178',
        '2EF' => 'E02004178',
        '2EG' => 'E02004178',
        '2EH' => 'E02004178',
        '2EJ' => 'E02004178',
        '2EL' => 'E02004179',
        '2EN' => 'E02004178',
        '2EP' => 'E02004179',
        '2EQ' => 'E02004178',
        '2ER' => 'E02004178',
        '2ES' => 'E02004179',
        '2ET' => 'E02004179',
        '2EU' => 'E02004179',
        '2EW' => 'E02004178',
        '2EX' => 'E02004179',
        '2EY' => 'E02004178',
        '2EZ' => 'E02004178',
        '2FB' => 'E02004179',
        '2FD' => 'E02004179',
        '2FE' => 'E02004179',
        '2FF' => 'E02004178',
        '2FG' => 'E02004179',
        '2HA' => 'E02004179',
        '2HB' => 'E02004179',
        '2HD' => 'E02004179',
        '2HE' => 'E02004179',
        '2HF' => 'E02004179',
        '2HG' => 'E02004179',
        '2HH' => 'E02004178',
        '2HJ' => 'E02004179',
        '2HL' => 'E02004179',
        '2HN' => 'E02004178',
        '2HP' => 'E02004179',
        '2HQ' => 'E02004179',
        '2HR' => 'E02004179',
        '2HS' => 'E02004178',
        '2HT' => 'E02004178',
        '2HU' => 'E02004179',
        '2HW' => 'E02004179',
        '2HX' => 'E02004179',
        '2HY' => 'E02004178',
        '2HZ' => 'E02004179',
        '2JA' => 'E02004179',
        '2JB' => 'E02004179',
        '2JD' => 'E02004179',
        '2JE' => 'E02004179',
        '2JF' => 'E02004179',
        '2JG' => 'E02004179',
        '2JH' => 'E02004179',
        '2JJ' => 'E02004179',
        '2JL' => 'E02004179',
        '2JN' => 'E02004179',
        '2JP' => 'E02004179',
        '2JQ' => 'E02004179',
        '2JR' => 'E02004179',
        '2JS' => 'E02004179',
        '2JT' => 'E02004179',
        '2JU' => 'E02004179',
        '2JW' => 'E02004179',
        '2JX' => 'E02004179',
        '2JY' => 'E02004179',
        '2JZ' => 'E02004179',
        '2LA' => 'E02004179',
        '2LB' => 'E02004179',
        '2LD' => 'E02004179',
        '2LE' => 'E02004178',
        '2LF' => 'E02004178',
        '2LG' => 'E02004178',
        '2LH' => 'E02004178',
        '2LJ' => 'E02004178',
        '2LL' => 'E02004178',
        '2LN' => 'E02004178',
        '2LP' => 'E02004178',
        '2LQ' => 'E02004178',
        '2LR' => 'E02004178',
        '2LS' => 'E02004178',
        '2LT' => 'E02004178',
        '2LU' => 'E02004178',
        '2LW' => 'E02004178',
        '2LX' => 'E02004178',
        '2LY' => 'E02004178',
        '2LZ' => 'E02004178',
        '2NA' => 'E02004178',
        '2NB' => 'E02004178',
        '2ND' => 'E02004178',
        '2NE' => 'E02004178',
        '2NF' => 'E02004178',
        '2NG' => 'E02004178',
        '2NH' => 'E02004178',
        '2NJ' => 'E02004178',
        '2NL' => 'E02004178',
        '2NN' => 'E02004178',
        '2NP' => 'E02004178',
        '2NQ' => 'E02004178',
        '2NR' => 'E02004178',
        '2NS' => 'E02004178',
        '2NT' => 'E02004179',
        '2NU' => 'E02004179',
        '2NW' => 'E02004178',
        '2NX' => 'E02004179',
        '2NY' => 'E02004179',
        '2NZ' => 'E02004179',
        '2PA' => 'E02004179',
        '2PB' => 'E02004179',
        '2PD' => 'E02004178',
        '2PE' => 'E02004178',
        '2PF' => 'E02004178',
        '2PG' => 'E02004179',
        '2PH' => 'E02004179',
        '2PS' => 'E02004179',
        '2QA' => 'E02004179',
        '2WA' => 'E02004182',
        '2WB' => 'E02004179',
        '2WY' => 'E02004182',
        '2WZ' => 'E02004182',
        '2YD' => 'E02004182',
        '2YE' => 'E02004182',
        '2YF' => 'E02004182',
        '2YG' => 'E02004182',
        '2YH' => 'E02004178',
        '2YJ' => 'E02004179',
        '2YL' => 'E02004178',
        '2YN' => 'E02004182',
        '2YP' => 'E02004182',
        '2YQ' => 'E02004182',
        '2YR' => 'E02004182',
        '2YS' => 'E02004178',
        '2YT' => 'E02004182',
        '2YU' => 'E02004178',
        '2YW' => 'E02004178',
        '2YX' => 'E02004182',
        '2YY' => 'E02004182',
        '2ZQ' => 'E02004182',
        '2ZW' => 'E02004182',
        '2ZX' => 'E02004182',
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
