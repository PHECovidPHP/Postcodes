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
final class BS26
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '2AA' => 'E02006061',
        '2AB' => 'E02006061',
        '2AD' => 'E02006061',
        '2AE' => 'E02006061',
        '2AF' => 'E02006061',
        '2AG' => 'E02006061',
        '2AH' => 'E02006061',
        '2AJ' => 'E02006061',
        '2AL' => 'E02006063',
        '2AN' => 'E02006061',
        '2AP' => 'E02006061',
        '2AQ' => 'E02006061',
        '2AR' => 'E02006061',
        '2AS' => 'E02006061',
        '2AT' => 'E02006061',
        '2AU' => 'E02006061',
        '2AW' => 'E02006061',
        '2AX' => 'E02006061',
        '2AY' => 'E02006061',
        '2AZ' => 'E02006061',
        '2BA' => 'E02006061',
        '2BB' => 'E02006061',
        '2BD' => 'E02006061',
        '2BE' => 'E02006061',
        '2BF' => 'E02006063',
        '2BG' => 'E02006061',
        '2BH' => 'E02006061',
        '2BJ' => 'E02006061',
        '2BL' => 'E02006061',
        '2BN' => 'E02006061',
        '2BP' => 'E02006061',
        '2BQ' => 'E02006061',
        '2BS' => 'E02006061',
        '2BT' => 'E02006061',
        '2BU' => 'E02006061',
        '2BW' => 'E02006061',
        '2BX' => 'E02006061',
        '2BY' => 'E02006061',
        '2BZ' => 'E02006061',
        '2DA' => 'E02006061',
        '2DB' => 'E02006061',
        '2DD' => 'E02006061',
        '2DE' => 'E02006061',
        '2DF' => 'E02006061',
        '2DG' => 'E02006061',
        '2DH' => 'E02006061',
        '2DJ' => 'E02006061',
        '2DL' => 'E02006061',
        '2DN' => 'E02006061',
        '2DP' => 'E02006061',
        '2DQ' => 'E02006061',
        '2DR' => 'E02006061',
        '2DS' => 'E02006061',
        '2DT' => 'E02006061',
        '2DU' => 'E02006061',
        '2DW' => 'E02006061',
        '2DX' => 'E02006061',
        '2DY' => 'E02006061',
        '2DZ' => 'E02006063',
        '2EA' => 'E02006061',
        '2EB' => 'E02006063',
        '2ED' => 'E02006063',
        '2EE' => 'E02006063',
        '2EF' => 'E02006063',
        '2EG' => 'E02006063',
        '2EH' => 'E02006063',
        '2EJ' => 'E02006063',
        '2EL' => 'E02006063',
        '2EN' => 'E02006061',
        '2EP' => 'E02006063',
        '2EQ' => 'E02006063',
        '2ER' => 'E02006063',
        '2ES' => 'E02006061',
        '2ET' => 'E02006061',
        '2EU' => 'E02006063',
        '2EW' => 'E02006061',
        '2EX' => 'E02006063',
        '2EY' => 'E02006063',
        '2EZ' => 'E02006063',
        '2FB' => 'E02006063',
        '2FD' => 'E02006063',
        '2FE' => 'E02006063',
        '2FF' => 'E02006061',
        '2FG' => 'E02006061',
        '2FH' => 'E02006061',
        '2FJ' => 'E02006061',
        '2FL' => 'E02006061',
        '2FN' => 'E02006062',
        '2FP' => 'E02006062',
        '2FQ' => 'E02006063',
        '2FR' => 'E02006063',
        '2HA' => 'E02006061',
        '2HB' => 'E02006063',
        '2HD' => 'E02006063',
        '2HE' => 'E02006063',
        '2HF' => 'E02006063',
        '2HG' => 'E02006061',
        '2HH' => 'E02006063',
        '2HJ' => 'E02006063',
        '2HL' => 'E02006063',
        '2HN' => 'E02006063',
        '2HP' => 'E02006061',
        '2HQ' => 'E02006063',
        '2HR' => 'E02006061',
        '2HS' => 'E02006063',
        '2HT' => 'E02006063',
        '2HU' => 'E02006063',
        '2HW' => 'E02006063',
        '2HX' => 'E02006063',
        '2JA' => 'E02006063',
        '2JB' => 'E02006063',
        '2JD' => 'E02006063',
        '2JE' => 'E02006063',
        '2JF' => 'E02006063',
        '2JG' => 'E02006063',
        '2JH' => 'E02006061',
        '2JJ' => 'E02006063',
        '2JL' => 'E02006063',
        '2JN' => 'E02006063',
        '2JQ' => 'E02006063',
        '2JS' => 'E02006063',
        '2JU' => 'E02006063',
        '2JW' => 'E02006063',
        '2LA' => 'E02006063',
        '2LB' => 'E02006063',
        '2LD' => 'E02006063',
        '2LE' => 'E02006063',
        '2LF' => 'E02006063',
        '2LH' => 'E02006063',
        '2LN' => 'E02006063',
        '2LS' => 'E02006063',
        '2LT' => 'E02006063',
        '2LU' => 'E02006063',
        '2LW' => 'E02006063',
        '2LX' => 'E02006063',
        '2NA' => 'E02006063',
        '2NB' => 'E02006063',
        '2ND' => 'E02006063',
        '2NG' => 'E02006063',
        '2NH' => 'E02006063',
        '2NJ' => 'E02006063',
        '2NL' => 'E02006063',
        '2NN' => 'E02006063',
        '2NP' => 'E02006063',
        '2NQ' => 'E02006063',
        '2NR' => 'E02006063',
        '2NS' => 'E02006063',
        '2NU' => 'E02006063',
        '2NW' => 'E02006063',
        '2PA' => 'E02006063',
        '2PB' => 'E02006063',
        '2PD' => 'E02006063',
        '2PE' => 'E02006061',
        '2PG' => 'E02006063',
        '2PH' => 'E02006063',
        '2PJ' => 'E02006063',
        '2PL' => 'E02006063',
        '2PP' => 'E02006063',
        '2PQ' => 'E02006063',
        '2PS' => 'E02006063',
        '2PZ' => 'E02006063',
        '2QA' => 'E02006063',
        '2QD' => 'E02006063',
        '2QG' => 'E02006063',
        '2QH' => 'E02006063',
        '2QJ' => 'E02006063',
        '2QL' => 'E02006063',
        '2QN' => 'E02006063',
        '2QP' => 'E02006063',
        '2QQ' => 'E02006063',
        '2QU' => 'E02006063',
        '2QW' => 'E02006063',
        '2QX' => 'E02006063',
        '2QY' => 'E02006063',
        '2QZ' => 'E02006063',
        '2RD' => 'E02006063',
        '2RE' => 'E02006063',
        '2RF' => 'E02006063',
        '2RG' => 'E02006063',
        '2RH' => 'E02006063',
        '2RJ' => 'E02006063',
        '2RL' => 'E02006063',
        '2RN' => 'E02006063',
        '2RQ' => 'E02006063',
        '2RR' => 'E02006063',
        '2RS' => 'E02006063',
        '2SA' => 'E02006063',
        '2SB' => 'E02006063',
        '2SD' => 'E02006063',
        '2SE' => 'E02006063',
        '2SF' => 'E02006063',
        '2SG' => 'E02006063',
        '2SH' => 'E02006063',
        '2SL' => 'E02006063',
        '2SN' => 'E02006063',
        '2SQ' => 'E02006063',
        '2SW' => 'E02006063',
        '2TA' => 'E02006062',
        '2TB' => 'E02006062',
        '2TD' => 'E02006062',
        '2TE' => 'E02006062',
        '2TF' => 'E02006062',
        '2TG' => 'E02006062',
        '2TH' => 'E02006062',
        '2TJ' => 'E02006062',
        '2TL' => 'E02006062',
        '2TN' => 'E02006062',
        '2TP' => 'E02006062',
        '2TQ' => 'E02006062',
        '2TR' => 'E02006062',
        '2TS' => 'E02006062',
        '2TT' => 'E02006062',
        '2TU' => 'E02006062',
        '2TX' => 'E02006062',
        '2TY' => 'E02006062',
        '2TZ' => 'E02006062',
        '2UA' => 'E02006062',
        '2UD' => 'E02006062',
        '2UF' => 'E02006062',
        '2UG' => 'E02006062',
        '2UL' => 'E02006062',
        '2UP' => 'E02006062',
        '2UQ' => 'E02006062',
        '2US' => 'E02006062',
        '2UU' => 'E02006062',
        '2UZ' => 'E02006061',
        '2WA' => 'E02006062',
        '2WB' => 'E02006061',
        '2WD' => 'E02006061',
        '2WE' => 'E02006061',
        '2WF' => 'E02006061',
        '2WG' => 'E02006061',
        '2WH' => 'E02006061',
        '2WJ' => 'E02006061',
        '2WL' => 'E02006061',
        '2WN' => 'E02006061',
        '2WP' => 'E02006061',
        '2WQ' => 'E02006061',
        '2WR' => 'E02006061',
        '2WS' => 'E02006061',
        '2WT' => 'E02006061',
        '2WU' => 'E02006061',
        '2WW' => 'E02006061',
        '2WX' => 'E02006061',
        '2WY' => 'E02006061',
        '2WZ' => 'E02006061',
        '2XA' => 'E02003087',
        '2XB' => 'E02006061',
        '2XD' => 'E02003087',
        '2XE' => 'E02003087',
        '2XF' => 'E02003087',
        '2XG' => 'E02003087',
        '2XH' => 'E02003087',
        '2XJ' => 'E02003087',
        '2XN' => 'E02006061',
        '2XP' => 'E02003087',
        '2XQ' => 'E02003087',
        '2XR' => 'E02003087',
        '2XT' => 'E02003087',
        '2XU' => 'E02003087',
        '2XW' => 'E02003087',
        '2XX' => 'E02003087',
        '2XY' => 'E02003087',
        '2XZ' => 'E02003087',
        '2YA' => 'E02003087',
        '2YB' => 'E02006063',
        '2YD' => 'E02006061',
        '2YE' => 'E02006063',
        '2YF' => 'E02003087',
        '2YG' => 'E02006061',
        '2YH' => 'E02006061',
        '2YJ' => 'E02003087',
        '2YL' => 'E02006061',
        '2YN' => 'E02006061',
        '2YP' => 'E02006061',
        '2YQ' => 'E02006061',
        '2YR' => 'E02006061',
        '2YS' => 'E02006061',
        '2YT' => 'E02006061',
        '2YZ' => 'E02006061',
        '2ZA' => 'E02006061',
        '2ZN' => 'E02006061',
        '2ZQ' => 'E02006061',
        '2ZS' => 'E02006061',
        '2ZU' => 'E02006061',
        '2ZW' => 'E02006061',
        '2ZX' => 'E02006061',
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