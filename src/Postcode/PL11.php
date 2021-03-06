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
final class PL11
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '2AA' => 'E02003902',
        '2AB' => 'E02003902',
        '2AD' => 'E02003902',
        '2AE' => 'E02003903',
        '2AF' => 'E02003902',
        '2AG' => 'E02003902',
        '2AH' => 'E02003902',
        '2AJ' => 'E02003902',
        '2AL' => 'E02003902',
        '2AN' => 'E02003902',
        '2AP' => 'E02003902',
        '2AQ' => 'E02003902',
        '2AR' => 'E02003902',
        '2AS' => 'E02003902',
        '2AT' => 'E02003902',
        '2AU' => 'E02003902',
        '2AW' => 'E02003902',
        '2AX' => 'E02003902',
        '2AY' => 'E02003902',
        '2AZ' => 'E02003902',
        '2BA' => 'E02003902',
        '2BB' => 'E02003902',
        '2BD' => 'E02003902',
        '2BE' => 'E02003902',
        '2BG' => 'E02003902',
        '2BH' => 'E02003902',
        '2BJ' => 'E02003902',
        '2BL' => 'E02003902',
        '2BN' => 'E02003902',
        '2BP' => 'E02003902',
        '2BQ' => 'E02003902',
        '2BS' => 'E02003902',
        '2BT' => 'E02003902',
        '2BU' => 'E02003902',
        '2BW' => 'E02003902',
        '2BX' => 'E02003902',
        '2BY' => 'E02003902',
        '2BZ' => 'E02003903',
        '2DA' => 'E02003902',
        '2DB' => 'E02003902',
        '2DD' => 'E02003902',
        '2DE' => 'E02003902',
        '2DF' => 'E02003902',
        '2DG' => 'E02003902',
        '2DH' => 'E02003902',
        '2DJ' => 'E02003902',
        '2DL' => 'E02003902',
        '2DN' => 'E02003902',
        '2DP' => 'E02003903',
        '2DQ' => 'E02003902',
        '2DR' => 'E02003903',
        '2DS' => 'E02003902',
        '2DT' => 'E02003902',
        '2DU' => 'E02003902',
        '2DW' => 'E02003903',
        '2DX' => 'E02003902',
        '2DY' => 'E02003902',
        '2DZ' => 'E02003902',
        '2EA' => 'E02003902',
        '2EB' => 'E02003902',
        '2ED' => 'E02003902',
        '2EE' => 'E02003902',
        '2EF' => 'E02003902',
        '2EG' => 'E02003902',
        '2EH' => 'E02003902',
        '2EJ' => 'E02003902',
        '2EL' => 'E02003902',
        '2EN' => 'E02003902',
        '2EP' => 'E02003902',
        '2EQ' => 'E02003902',
        '2ER' => 'E02003902',
        '2ES' => 'E02003902',
        '2ET' => 'E02003902',
        '2EU' => 'E02003902',
        '2EW' => 'E02003902',
        '2EX' => 'E02003902',
        '2EY' => 'E02003902',
        '2EZ' => 'E02003902',
        '2FH' => 'E02003902',
        '2HA' => 'E02003902',
        '2HB' => 'E02003902',
        '2HD' => 'E02003902',
        '2HE' => 'E02003902',
        '2HF' => 'E02003902',
        '2HG' => 'E02003902',
        '2HH' => 'E02003903',
        '2HJ' => 'E02003903',
        '2HL' => 'E02003902',
        '2HN' => 'E02003902',
        '2HP' => 'E02003902',
        '2HQ' => 'E02003903',
        '2HR' => 'E02003902',
        '2HS' => 'E02003902',
        '2HT' => 'E02003902',
        '2HU' => 'E02003902',
        '2HW' => 'E02003903',
        '2HX' => 'E02003902',
        '2HY' => 'E02003902',
        '2HZ' => 'E02003902',
        '2JA' => 'E02003902',
        '2JB' => 'E02003902',
        '2JD' => 'E02003902',
        '2JE' => 'E02003903',
        '2JF' => 'E02003903',
        '2JG' => 'E02003903',
        '2JH' => 'E02003902',
        '2JJ' => 'E02003903',
        '2JL' => 'E02003902',
        '2JN' => 'E02003902',
        '2JP' => 'E02003902',
        '2JQ' => 'E02003903',
        '2JR' => 'E02003902',
        '2JS' => 'E02003902',
        '2JT' => 'E02003902',
        '2JU' => 'E02003902',
        '2JW' => 'E02003902',
        '2JX' => 'E02003902',
        '2JY' => 'E02003902',
        '2JZ' => 'E02003903',
        '2LA' => 'E02003902',
        '2LB' => 'E02003903',
        '2LD' => 'E02003902',
        '2LE' => 'E02003902',
        '2LF' => 'E02003902',
        '2LG' => 'E02003902',
        '2LH' => 'E02003902',
        '2LJ' => 'E02003902',
        '2LL' => 'E02003902',
        '2LN' => 'E02003902',
        '2LP' => 'E02003902',
        '2LQ' => 'E02003902',
        '2LR' => 'E02003902',
        '2LS' => 'E02003902',
        '2LT' => 'E02003902',
        '2LU' => 'E02003902',
        '2LW' => 'E02003902',
        '2LX' => 'E02003902',
        '2LY' => 'E02003902',
        '2LZ' => 'E02003902',
        '2NA' => 'E02003902',
        '2NB' => 'E02003902',
        '2ND' => 'E02003903',
        '2NE' => 'E02003902',
        '2NF' => 'E02003902',
        '2NG' => 'E02003902',
        '2NH' => 'E02003902',
        '2NJ' => 'E02003902',
        '2NL' => 'E02003902',
        '2NN' => 'E02003902',
        '2NP' => 'E02003903',
        '2NQ' => 'E02003903',
        '2NR' => 'E02003902',
        '2NS' => 'E02003902',
        '2NT' => 'E02003902',
        '2NU' => 'E02003902',
        '2NW' => 'E02003902',
        '2NX' => 'E02003902',
        '2NY' => 'E02003903',
        '2NZ' => 'E02003903',
        '2PA' => 'E02003903',
        '2PB' => 'E02003903',
        '2PD' => 'E02003903',
        '2PE' => 'E02003903',
        '2PF' => 'E02003903',
        '2PG' => 'E02003903',
        '2PH' => 'E02003903',
        '2PJ' => 'E02003903',
        '2PL' => 'E02003903',
        '2PN' => 'E02003903',
        '2PP' => 'E02003903',
        '2PQ' => 'E02003903',
        '2PR' => 'E02003903',
        '2PS' => 'E02003902',
        '2PT' => 'E02003903',
        '2PU' => 'E02003903',
        '2PW' => 'E02003903',
        '2PX' => 'E02003903',
        '2PY' => 'E02003903',
        '2PZ' => 'E02003903',
        '2QA' => 'E02003903',
        '2QB' => 'E02003903',
        '2QD' => 'E02003903',
        '2QE' => 'E02003903',
        '2QF' => 'E02003903',
        '2QG' => 'E02003903',
        '2QH' => 'E02003902',
        '2QJ' => 'E02003903',
        '2QL' => 'E02003903',
        '2QN' => 'E02003902',
        '2QP' => 'E02003903',
        '2QQ' => 'E02003902',
        '2QR' => 'E02003903',
        '2QS' => 'E02003903',
        '2QT' => 'E02003903',
        '2QU' => 'E02003903',
        '2QW' => 'E02003903',
        '2QX' => 'E02003902',
        '2QY' => 'E02003903',
        '2QZ' => 'E02003903',
        '2RA' => 'E02003902',
        '2RB' => 'E02003902',
        '2RD' => 'E02003903',
        '2RE' => 'E02003902',
        '2RF' => 'E02003902',
        '2RH' => 'E02003902',
        '2TB' => 'E02003903',
        '2TQ' => 'E02003903',
        '2WA' => 'E02003903',
        '2WD' => 'E02003903',
        '2WE' => 'E02003903',
        '2WF' => 'E02003903',
        '2WG' => 'E02003903',
        '2WH' => 'E02003903',
        '2WR' => 'E02003903',
        '2WS' => 'E02003903',
        '2WT' => 'E02003903',
        '2WU' => 'E02003903',
        '2WW' => 'E02003903',
        '2WX' => 'E02003903',
        '2WY' => 'E02003903',
        '2WZ' => 'E02003903',
        '2XN' => 'E02003903',
        '2XQ' => 'E02003903',
        '2XZ' => 'E02003903',
        '2YD' => 'E02003903',
        '2YE' => 'E02003903',
        '2YF' => 'E02003902',
        '2YG' => 'E02003902',
        '2YH' => 'E02003903',
        '2YP' => 'E02003903',
        '2YQ' => 'E02003903',
        '2YR' => 'E02003903',
        '2YY' => 'E02003903',
        '2YZ' => 'E02003902',
        '2ZJ' => 'E02003903',
        '2ZN' => 'E02003903',
        '2ZQ' => 'E02003903',
        '2ZX' => 'E02003902',
        '3AA' => 'E02003903',
        '3AB' => 'E02003903',
        '3AD' => 'E02003903',
        '3AE' => 'E02003903',
        '3AF' => 'E02003903',
        '3AG' => 'E02003903',
        '3AH' => 'E02003903',
        '3AJ' => 'E02003903',
        '3AL' => 'E02003903',
        '3AN' => 'E02003903',
        '3AP' => 'E02003903',
        '3AQ' => 'E02003903',
        '3AR' => 'E02003903',
        '3AS' => 'E02003903',
        '3AT' => 'E02003903',
        '3AU' => 'E02003903',
        '3AW' => 'E02003903',
        '3AX' => 'E02003903',
        '3AY' => 'E02003903',
        '3AZ' => 'E02003903',
        '3BA' => 'E02003903',
        '3BB' => 'E02003898',
        '3BD' => 'E02003898',
        '3BE' => 'E02003898',
        '3BG' => 'E02003898',
        '3BH' => 'E02003898',
        '3BJ' => 'E02003898',
        '3BL' => 'E02003898',
        '3BN' => 'E02003898',
        '3BP' => 'E02003898',
        '3BQ' => 'E02003898',
        '3BS' => 'E02003898',
        '3BT' => 'E02003898',
        '3BU' => 'E02003898',
        '3BW' => 'E02003898',
        '3BX' => 'E02003898',
        '3BY' => 'E02003898',
        '3BZ' => 'E02003898',
        '3DA' => 'E02003903',
        '3DB' => 'E02003898',
        '3DD' => 'E02003898',
        '3DE' => 'E02003903',
        '3DF' => 'E02003898',
        '3DG' => 'E02003898',
        '3DH' => 'E02003898',
        '3DJ' => 'E02003898',
        '3DL' => 'E02003898',
        '3DN' => 'E02003898',
        '3DP' => 'E02003898',
        '3DQ' => 'E02003898',
        '3DR' => 'E02003898',
        '3DS' => 'E02003898',
        '3DT' => 'E02003898',
        '3DU' => 'E02003898',
        '3DW' => 'E02003898',
        '3DX' => 'E02003898',
        '3DY' => 'E02003898',
        '3DZ' => 'E02003898',
        '3EA' => 'E02003898',
        '3EB' => 'E02003898',
        '3ED' => 'E02003903',
        '3EF' => 'E02003898',
        '3EG' => 'E02003898',
        '3EH' => 'E02003898',
        '3EJ' => 'E02003898',
        '3EL' => 'E02003898',
        '3EN' => 'E02003898',
        '3EP' => 'E02003898',
        '3EQ' => 'E02003903',
        '3ER' => 'E02003898',
        '3ES' => 'E02003898',
        '3ET' => 'E02003898',
        '3EU' => 'E02003898',
        '3EW' => 'E02003898',
        '3EX' => 'E02003898',
        '3EY' => 'E02003898',
        '3EZ' => 'E02003898',
        '3FB' => 'E02003898',
        '3HA' => 'E02003898',
        '3HB' => 'E02003898',
        '3HD' => 'E02003898',
        '3HE' => 'E02003898',
        '3HF' => 'E02003898',
        '3HG' => 'E02003898',
        '3HH' => 'E02003898',
        '3HJ' => 'E02003898',
        '3HL' => 'E02003898',
        '3HN' => 'E02003903',
        '3HP' => 'E02003898',
        '3HQ' => 'E02003898',
        '3HR' => 'E02003898',
        '3HW' => 'E02003898',
        '3JA' => 'E02003898',
        '3JB' => 'E02003898',
        '3JD' => 'E02003898',
        '3JE' => 'E02003898',
        '3JF' => 'E02003898',
        '3JG' => 'E02003898',
        '3JH' => 'E02003898',
        '3JJ' => 'E02003898',
        '3JL' => 'E02003898',
        '3JN' => 'E02003898',
        '3JP' => 'E02003898',
        '3JQ' => 'E02003898',
        '3JR' => 'E02003898',
        '3JS' => 'E02003898',
        '3JT' => 'E02003898',
        '3JU' => 'E02003898',
        '3JW' => 'E02003898',
        '3JX' => 'E02003898',
        '3JY' => 'E02003898',
        '3JZ' => 'E02003898',
        '3LA' => 'E02003898',
        '3LB' => 'E02003898',
        '3LD' => 'E02003898',
        '3LE' => 'E02003898',
        '3LF' => 'E02003898',
        '3LG' => 'E02003898',
        '3LH' => 'E02003898',
        '3LJ' => 'E02003898',
        '3LL' => 'E02003898',
        '3LN' => 'E02003898',
        '3LP' => 'E02003898',
        '3LQ' => 'E02003898',
        '3LR' => 'E02003898',
        '3LS' => 'E02003898',
        '3LT' => 'E02003898',
        '3LU' => 'E02003898',
        '3LW' => 'E02003898',
        '3LX' => 'E02003898',
        '3LY' => 'E02003898',
        '3LZ' => 'E02003898',
        '3NA' => 'E02003898',
        '3NB' => 'E02003898',
        '3NH' => 'E02003898',
        '3NJ' => 'E02003898',
        '3NQ' => 'E02003898',
        '3NS' => 'E02003898',
        '3NT' => 'E02003898',
        '3TN' => 'E02003898',
        '3WA' => 'E02003903',
        '3WB' => 'E02003903',
        '3WT' => 'E02003903',
        '3WU' => 'E02003903',
        '3WW' => 'E02003903',
        '3WX' => 'E02003903',
        '3WY' => 'E02003903',
        '3WZ' => 'E02003903',
        '3XG' => 'E02003898',
        '3YG' => 'E02003903',
        '3YH' => 'E02003898',
        '3YJ' => 'E02003898',
        '3YL' => 'E02003903',
        '3YN' => 'E02003898',
        '3YP' => 'E02003898',
        '3YR' => 'E02003903',
        '3YS' => 'E02003903',
        '3YT' => 'E02003898',
        '3YW' => 'E02003903',
        '3YX' => 'E02003898',
        '3YY' => 'E02003898',
        '3YZ' => 'E02003898',
        '3ZN' => 'E02003903',
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
