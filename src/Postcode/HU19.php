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
final class HU19
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '2AA' => 'E02002722',
        '2AB' => 'E02002722',
        '2AD' => 'E02002722',
        '2AE' => 'E02002722',
        '2AF' => 'E02002722',
        '2AG' => 'E02002722',
        '2AH' => 'E02002722',
        '2AJ' => 'E02002722',
        '2AL' => 'E02002722',
        '2AN' => 'E02002722',
        '2AP' => 'E02002722',
        '2AQ' => 'E02002722',
        '2AR' => 'E02002722',
        '2AS' => 'E02002722',
        '2AT' => 'E02002722',
        '2AU' => 'E02002722',
        '2AW' => 'E02002722',
        '2AX' => 'E02002722',
        '2AY' => 'E02002722',
        '2AZ' => 'E02002722',
        '2BA' => 'E02002722',
        '2BB' => 'E02002722',
        '2BD' => 'E02002722',
        '2BE' => 'E02002722',
        '2BH' => 'E02002722',
        '2BJ' => 'E02002714',
        '2BL' => 'E02002722',
        '2BN' => 'E02002722',
        '2BP' => 'E02002722',
        '2BQ' => 'E02002714',
        '2BS' => 'E02002722',
        '2BT' => 'E02002722',
        '2BU' => 'E02002714',
        '2BX' => 'E02002714',
        '2BY' => 'E02002714',
        '2BZ' => 'E02002714',
        '2DA' => 'E02002714',
        '2DB' => 'E02002714',
        '2DD' => 'E02002714',
        '2DE' => 'E02002714',
        '2DF' => 'E02002714',
        '2DH' => 'E02002722',
        '2DJ' => 'E02002722',
        '2DL' => 'E02002722',
        '2DN' => 'E02002722',
        '2DP' => 'E02002722',
        '2DR' => 'E02002722',
        '2DS' => 'E02002722',
        '2DT' => 'E02002722',
        '2DU' => 'E02002722',
        '2DW' => 'E02002722',
        '2DX' => 'E02002722',
        '2DY' => 'E02002714',
        '2DZ' => 'E02002722',
        '2EA' => 'E02002714',
        '2EB' => 'E02002714',
        '2ED' => 'E02002722',
        '2EE' => 'E02002714',
        '2EF' => 'E02002714',
        '2EG' => 'E02002714',
        '2EH' => 'E02002714',
        '2EJ' => 'E02002714',
        '2EL' => 'E02002714',
        '2EN' => 'E02002714',
        '2EP' => 'E02002714',
        '2EQ' => 'E02002714',
        '2ER' => 'E02002714',
        '2ES' => 'E02002714',
        '2ET' => 'E02002714',
        '2EW' => 'E02002714',
        '2EX' => 'E02002714',
        '2EY' => 'E02002714',
        '2EZ' => 'E02002722',
        '2FA' => 'E02002722',
        '2FB' => 'E02002722',
        '2GA' => 'E02002722',
        '2GB' => 'E02002722',
        '2GY' => 'E02002722',
        '2HA' => 'E02002722',
        '2HB' => 'E02002722',
        '2HD' => 'E02002722',
        '2HE' => 'E02002714',
        '2HF' => 'E02002722',
        '2HG' => 'E02002722',
        '2HH' => 'E02002722',
        '2HJ' => 'E02002722',
        '2HL' => 'E02002722',
        '2HN' => 'E02002722',
        '2HP' => 'E02002722',
        '2HQ' => 'E02002722',
        '2HR' => 'E02002722',
        '2HS' => 'E02002722',
        '2HT' => 'E02002722',
        '2HU' => 'E02002722',
        '2HW' => 'E02002722',
        '2HX' => 'E02002722',
        '2HY' => 'E02002722',
        '2HZ' => 'E02002722',
        '2JA' => 'E02002722',
        '2JB' => 'E02002722',
        '2JD' => 'E02002722',
        '2JE' => 'E02002722',
        '2JH' => 'E02002714',
        '2JL' => 'E02002714',
        '2JN' => 'E02002714',
        '2JP' => 'E02002714',
        '2JR' => 'E02002722',
        '2JS' => 'E02002722',
        '2JT' => 'E02002722',
        '2JU' => 'E02002714',
        '2JX' => 'E02002722',
        '2JY' => 'E02002722',
        '2JZ' => 'E02002722',
        '2LA' => 'E02002722',
        '2LB' => 'E02002722',
        '2LD' => 'E02002722',
        '2LE' => 'E02002722',
        '2LF' => 'E02002722',
        '2LG' => 'E02002722',
        '2LH' => 'E02002722',
        '2LJ' => 'E02002722',
        '2LL' => 'E02002722',
        '2LN' => 'E02002722',
        '2LP' => 'E02002714',
        '2LQ' => 'E02002722',
        '2LR' => 'E02002722',
        '2LS' => 'E02002722',
        '2LT' => 'E02002714',
        '2LU' => 'E02002722',
        '2LW' => 'E02002722',
        '2LX' => 'E02002722',
        '2LY' => 'E02002722',
        '2LZ' => 'E02002714',
        '2NA' => 'E02002714',
        '2NB' => 'E02002714',
        '2NL' => 'E02002722',
        '2NN' => 'E02002722',
        '2NP' => 'E02002722',
        '2NR' => 'E02002722',
        '2NS' => 'E02002722',
        '2NT' => 'E02002722',
        '2NU' => 'E02002722',
        '2NW' => 'E02002722',
        '2NX' => 'E02002722',
        '2NY' => 'E02002722',
        '2NZ' => 'E02002722',
        '2PA' => 'E02002722',
        '2PB' => 'E02002722',
        '2PD' => 'E02002722',
        '2PE' => 'E02002722',
        '2PF' => 'E02002722',
        '2PG' => 'E02002714',
        '2PH' => 'E02002714',
        '2PJ' => 'E02002722',
        '2PL' => 'E02002722',
        '2PN' => 'E02002722',
        '2PP' => 'E02002722',
        '2PQ' => 'E02002714',
        '2PR' => 'E02002722',
        '2PY' => 'E02002722',
        '2PZ' => 'E02002722',
        '2QA' => 'E02002722',
        '2QB' => 'E02002714',
        '2QD' => 'E02002722',
        '2QE' => 'E02002722',
        '2QF' => 'E02002722',
        '2QG' => 'E02002722',
        '2QH' => 'E02002722',
        '2QJ' => 'E02002722',
        '2QL' => 'E02002722',
        '2QN' => 'E02002722',
        '2QP' => 'E02002722',
        '2QQ' => 'E02002722',
        '2QR' => 'E02002722',
        '2QS' => 'E02002722',
        '2QT' => 'E02002722',
        '2QU' => 'E02002722',
        '2QW' => 'E02002722',
        '2QX' => 'E02002722',
        '2QY' => 'E02002722',
        '2QZ' => 'E02002722',
        '2RA' => 'E02002722',
        '2RB' => 'E02002722',
        '2RD' => 'E02002722',
        '2RE' => 'E02002722',
        '2RF' => 'E02002722',
        '2RG' => 'E02002722',
        '2RS' => 'E02002722',
        '2RT' => 'E02002722',
        '2RU' => 'E02002722',
        '2RX' => 'E02002722',
        '2RY' => 'E02002722',
        '2RZ' => 'E02002722',
        '2SA' => 'E02002722',
        '2SB' => 'E02002722',
        '2SD' => 'E02002722',
        '2SE' => 'E02002722',
        '2SF' => 'E02002722',
        '2SG' => 'E02002722',
        '2SH' => 'E02002722',
        '2SJ' => 'E02002722',
        '2SL' => 'E02002722',
        '2SQ' => 'E02002722',
        '2TG' => 'E02002722',
        '2WA' => 'E02002722',
        '2WB' => 'E02002722',
        '2WD' => 'E02002722',
        '2WE' => 'E02002722',
        '2WF' => 'E02002722',
        '2WG' => 'E02002722',
        '2WT' => 'E02002722',
        '2WU' => 'E02002722',
        '2WW' => 'E02002722',
        '2WX' => 'E02002722',
        '2WY' => 'E02002722',
        '2WZ' => 'E02002722',
        '2YD' => 'E02002722',
        '2YE' => 'E02002722',
        '2YF' => 'E02002722',
        '2YG' => 'E02002722',
        '2YH' => 'E02002722',
        '2YJ' => 'E02002722',
        '2YL' => 'E02002722',
        '2YN' => 'E02002722',
        '2YP' => 'E02002722',
        '2YQ' => 'E02002722',
        '2YR' => 'E02002722',
        '2YS' => 'E02002722',
        '2YT' => 'E02002722',
        '2YU' => 'E02002722',
        '2YW' => 'E02002722',
        '2YX' => 'E02002722',
        '2YZ' => 'E02002722',
        '2ZZ' => 'E02002722',
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