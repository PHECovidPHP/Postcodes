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
final class W1C
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02000970',
        '1AB' => 'E02000970',
        '1AP' => 'E02000970',
        '1AS' => 'E02000970',
        '1AT' => 'E02000970',
        '1AU' => 'E02000970',
        '1AW' => 'E02000970',
        '1AX' => 'E02000970',
        '1AY' => 'E02000970',
        '1AZ' => 'E02000970',
        '1BA' => 'E02000970',
        '1BB' => 'E02000970',
        '1BD' => 'E02000970',
        '1BE' => 'E02000970',
        '1BF' => 'E02000970',
        '1BG' => 'E02000970',
        '1BJ' => 'E02000970',
        '1BQ' => 'E02000970',
        '1BY' => 'E02000970',
        '1DA' => 'E02000972',
        '1DB' => 'E02000972',
        '1DD' => 'E02000972',
        '1DE' => 'E02000972',
        '1DF' => 'E02000972',
        '1DG' => 'E02000972',
        '1DH' => 'E02000972',
        '1DJ' => 'E02000972',
        '1DL' => 'E02000972',
        '1DN' => 'E02000972',
        '1DP' => 'E02000972',
        '1DQ' => 'E02000972',
        '1DR' => 'E02000972',
        '1DS' => 'E02000972',
        '1DT' => 'E02000972',
        '1DU' => 'E02000972',
        '1DW' => 'E02000972',
        '1DX' => 'E02000972',
        '1ER' => 'E02000970',
        '1ES' => 'E02000970',
        '1HE' => 'E02000971',
        '1HF' => 'E02000972',
        '1HG' => 'E02000970',
        '1HX' => 'E02000970',
        '1HY' => 'E02000970',
        '1HZ' => 'E02000970',
        '1JA' => 'E02000972',
        '1JB' => 'E02000972',
        '1JD' => 'E02000972',
        '1JE' => 'E02000972',
        '1JF' => 'E02000972',
        '1JG' => 'E02000970',
        '1JH' => 'E02000970',
        '1JJ' => 'E02000970',
        '1JL' => 'E02000970',
        '1JN' => 'E02000970',
        '1JP' => 'E02000970',
        '1JQ' => 'E02000970',
        '1JR' => 'E02000970',
        '1JS' => 'E02000970',
        '1JT' => 'E02000970',
        '1JU' => 'E02000970',
        '1JW' => 'E02000970',
        '1JX' => 'E02000970',
        '1JY' => 'E02000970',
        '1JZ' => 'E02000971',
        '1LA' => 'E02000970',
        '1LB' => 'E02000970',
        '1LD' => 'E02000970',
        '1LE' => 'E02000970',
        '1LF' => 'E02000970',
        '1LG' => 'E02000970',
        '1LH' => 'E02000970',
        '1LJ' => 'E02000970',
        '1LL' => 'E02000971',
        '1LN' => 'E02000971',
        '1LP' => 'E02000971',
        '1LQ' => 'E02000970',
        '1LR' => 'E02000971',
        '1LS' => 'E02000971',
        '1LT' => 'E02000971',
        '1LU' => 'E02000971',
        '1LW' => 'E02000971',
        '1LX' => 'E02000971',
        '1LY' => 'E02000971',
        '1LZ' => 'E02000971',
        '1NA' => 'E02000970',
        '1NB' => 'E02000971',
        '1ND' => 'E02000970',
        '1NX' => 'E02000971',
        '1ST' => 'E02000970',
        '1YZ' => 'E02000575',
        '2AA' => 'E02000972',
        '2AB' => 'E02000972',
        '2AD' => 'E02000972',
        '2AE' => 'E02000972',
        '2AF' => 'E02000972',
        '2AG' => 'E02000972',
        '2AH' => 'E02000972',
        '2AJ' => 'E02000972',
        '2AL' => 'E02000972',
        '2AN' => 'E02000972',
        '2AP' => 'E02000972',
        '2AQ' => 'E02000972',
        '2AR' => 'E02000972',
        '2AS' => 'E02000972',
        '2AT' => 'E02000972',
        '2AU' => 'E02000970',
        '2AW' => 'E02000972',
        '2AX' => 'E02000972',
        '2BB' => 'E02000972',
        '2BJ' => 'E02000972',
        '2BR' => 'E02000972',
        '2BU' => 'E02000972',
        '2DA' => 'E02000970',
        '2DD' => 'E02000972',
        '2DE' => 'E02000972',
        '2DF' => 'E02000972',
        '2DG' => 'E02000972',
        '2DH' => 'E02000972',
        '2DJ' => 'E02000972',
        '2DL' => 'E02000972',
        '2DN' => 'E02000972',
        '2DP' => 'E02000972',
        '2DQ' => 'E02000972',
        '2DR' => 'E02000972',
        '2DS' => 'E02000972',
        '2DT' => 'E02000972',
        '2DU' => 'E02000972',
        '2DW' => 'E02000972',
        '2DX' => 'E02000972',
        '2DY' => 'E02000972',
        '2DZ' => 'E02000972',
        '2EB' => 'E02000970',
        '2HA' => 'E02000972',
        '2HB' => 'E02000972',
        '2HD' => 'E02000972',
        '2HE' => 'E02000972',
        '2HF' => 'E02000972',
        '2HH' => 'E02000972',
        '2HN' => 'E02000972',
        '2HP' => 'E02000972',
        '2HQ' => 'E02000970',
        '2HR' => 'E02000972',
        '2HS' => 'E02000972',
        '2HT' => 'E02000972',
        '2HU' => 'E02000972',
        '2HW' => 'E02000972',
        '2HX' => 'E02000972',
        '2HY' => 'E02000972',
        '2HZ' => 'E02000972',
        '2JA' => 'E02000972',
        '2JB' => 'E02000972',
        '2JD' => 'E02000972',
        '2JE' => 'E02000972',
        '2JF' => 'E02000972',
        '2JG' => 'E02000972',
        '2JH' => 'E02000972',
        '2JJ' => 'E02000972',
        '2JL' => 'E02000972',
        '2JN' => 'E02000972',
        '2JP' => 'E02000972',
        '2JQ' => 'E02000972',
        '2JR' => 'E02000972',
        '2JS' => 'E02000972',
        '2JT' => 'E02000972',
        '2JU' => 'E02000972',
        '2JW' => 'E02000972',
        '2JX' => 'E02000972',
        '2JY' => 'E02000972',
        '2JZ' => 'E02000972',
        '2LA' => 'E02000972',
        '2LE' => 'E02000972',
        '2NA' => 'E02000970',
        '2NB' => 'E02000972',
        '2PA' => 'E02000970',
        '2PB' => 'E02000970',
        '2PD' => 'E02000970',
        '2PE' => 'E02000970',
        '2PF' => 'E02000970',
        '2PG' => 'E02000970',
        '2PH' => 'E02000970',
        '2PJ' => 'E02000970',
        '2PL' => 'E02000970',
        '2PN' => 'E02000970',
        '2PP' => 'E02000970',
        '2PQ' => 'E02000970',
        '2PR' => 'E02000970',
        '2PS' => 'E02000970',
        '2PT' => 'E02000970',
        '2PU' => 'E02000970',
        '2PW' => 'E02000970',
        '2PX' => 'E02000970',
        '2PY' => 'E02000970',
        '2PZ' => 'E02000970',
        '2QA' => 'E02000970',
        '2QB' => 'E02000970',
        '2QD' => 'E02000970',
        '2QE' => 'E02000970',
        '2QF' => 'E02000970',
        '2QG' => 'E02000970',
        '2QH' => 'E02000970',
        '2QJ' => 'E02000970',
        '2QL' => 'E02000970',
        '2QN' => 'E02000970',
        '2QP' => 'E02000970',
        '2QQ' => 'E02000970',
        '2QR' => 'E02000970',
        '2QW' => 'E02000970',
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
