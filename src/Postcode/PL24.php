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
final class PL24
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '2AA' => 'E02003960',
        '2AB' => 'E02003960',
        '2AD' => 'E02003960',
        '2AE' => 'E02003960',
        '2AF' => 'E02003960',
        '2AG' => 'E02003960',
        '2AH' => 'E02003960',
        '2AJ' => 'E02003960',
        '2AL' => 'E02003960',
        '2AN' => 'E02003960',
        '2AP' => 'E02003960',
        '2AQ' => 'E02003960',
        '2AR' => 'E02003960',
        '2AS' => 'E02003960',
        '2AT' => 'E02003960',
        '2AU' => 'E02003960',
        '2AW' => 'E02003960',
        '2AX' => 'E02003959',
        '2AY' => 'E02003960',
        '2AZ' => 'E02003959',
        '2BA' => 'E02003961',
        '2BB' => 'E02003959',
        '2BD' => 'E02003959',
        '2BE' => 'E02003959',
        '2BG' => 'E02003959',
        '2BH' => 'E02003959',
        '2BJ' => 'E02003959',
        '2BL' => 'E02003959',
        '2BN' => 'E02003959',
        '2BP' => 'E02003959',
        '2BQ' => 'E02003959',
        '2BS' => 'E02003959',
        '2BT' => 'E02003959',
        '2BU' => 'E02003959',
        '2BW' => 'E02003959',
        '2BX' => 'E02003959',
        '2BY' => 'E02003959',
        '2BZ' => 'E02003959',
        '2DA' => 'E02003959',
        '2DB' => 'E02003959',
        '2DD' => 'E02003959',
        '2DE' => 'E02003959',
        '2DF' => 'E02003959',
        '2DG' => 'E02003959',
        '2DH' => 'E02003960',
        '2DJ' => 'E02003960',
        '2DL' => 'E02003959',
        '2DN' => 'E02003959',
        '2DP' => 'E02003959',
        '2DQ' => 'E02003959',
        '2DR' => 'E02003959',
        '2DS' => 'E02003959',
        '2DT' => 'E02003959',
        '2DU' => 'E02003959',
        '2DW' => 'E02003959',
        '2DX' => 'E02003959',
        '2DY' => 'E02003959',
        '2DZ' => 'E02003959',
        '2EA' => 'E02003959',
        '2EB' => 'E02003959',
        '2ED' => 'E02003959',
        '2EE' => 'E02003959',
        '2EF' => 'E02003959',
        '2EG' => 'E02003959',
        '2EH' => 'E02003959',
        '2EJ' => 'E02003959',
        '2EL' => 'E02003959',
        '2EN' => 'E02003959',
        '2EP' => 'E02003959',
        '2EQ' => 'E02003959',
        '2ER' => 'E02003959',
        '2ES' => 'E02003959',
        '2ET' => 'E02003959',
        '2EU' => 'E02003959',
        '2EW' => 'E02003959',
        '2EX' => 'E02003959',
        '2EY' => 'E02003959',
        '2EZ' => 'E02003959',
        '2FA' => 'E02003959',
        '2FB' => 'E02003959',
        '2FD' => 'E02003960',
        '2FE' => 'E02003959',
        '2FF' => 'E02003959',
        '2FG' => 'E02003959',
        '2FH' => 'E02003959',
        '2FJ' => 'E02003959',
        '2FL' => 'E02003959',
        '2FN' => 'E02003959',
        '2FP' => 'E02003959',
        '2FQ' => 'E02003959',
        '2FR' => 'E02003959',
        '2FS' => 'E02003959',
        '2FT' => 'E02003959',
        '2FU' => 'E02003959',
        '2FW' => 'E02003959',
        '2FX' => 'E02003959',
        '2FY' => 'E02003960',
        '2FZ' => 'E02003959',
        '2GA' => 'E02003959',
        '2HA' => 'E02003959',
        '2HB' => 'E02003959',
        '2HD' => 'E02003959',
        '2HE' => 'E02003959',
        '2HF' => 'E02003959',
        '2HJ' => 'E02003959',
        '2HL' => 'E02003959',
        '2HN' => 'E02003959',
        '2HP' => 'E02003959',
        '2HR' => 'E02003959',
        '2HS' => 'E02003959',
        '2HT' => 'E02003959',
        '2HU' => 'E02003959',
        '2HW' => 'E02003959',
        '2HX' => 'E02003959',
        '2HY' => 'E02003959',
        '2HZ' => 'E02003959',
        '2JA' => 'E02003959',
        '2JB' => 'E02003959',
        '2JD' => 'E02003959',
        '2JE' => 'E02003959',
        '2JF' => 'E02003959',
        '2JG' => 'E02003959',
        '2JH' => 'E02003959',
        '2JJ' => 'E02003959',
        '2JL' => 'E02003959',
        '2JN' => 'E02003959',
        '2JP' => 'E02003959',
        '2JQ' => 'E02003959',
        '2JR' => 'E02003959',
        '2JS' => 'E02003959',
        '2JT' => 'E02003959',
        '2JU' => 'E02003959',
        '2JW' => 'E02003959',
        '2JX' => 'E02003959',
        '2JY' => 'E02003959',
        '2JZ' => 'E02003959',
        '2LA' => 'E02003959',
        '2LB' => 'E02003959',
        '2LD' => 'E02003959',
        '2LE' => 'E02003959',
        '2LF' => 'E02003959',
        '2LG' => 'E02003959',
        '2LH' => 'E02003959',
        '2LJ' => 'E02003959',
        '2LL' => 'E02003959',
        '2LN' => 'E02003959',
        '2LP' => 'E02003959',
        '2LQ' => 'E02003959',
        '2LR' => 'E02003959',
        '2LS' => 'E02003959',
        '2LT' => 'E02003960',
        '2LU' => 'E02003960',
        '2LW' => 'E02003959',
        '2LX' => 'E02003960',
        '2LY' => 'E02003960',
        '2LZ' => 'E02003959',
        '2NA' => 'E02003959',
        '2NB' => 'E02003959',
        '2ND' => 'E02003959',
        '2NE' => 'E02003959',
        '2NF' => 'E02003959',
        '2NG' => 'E02003959',
        '2NH' => 'E02003959',
        '2NJ' => 'E02003959',
        '2NL' => 'E02003959',
        '2NN' => 'E02003959',
        '2NP' => 'E02003959',
        '2NQ' => 'E02003959',
        '2NR' => 'E02003959',
        '2NS' => 'E02003959',
        '2NT' => 'E02003959',
        '2NU' => 'E02003959',
        '2NW' => 'E02003959',
        '2NX' => 'E02003959',
        '2NY' => 'E02003959',
        '2NZ' => 'E02003959',
        '2PA' => 'E02003960',
        '2PB' => 'E02003960',
        '2PD' => 'E02003960',
        '2PE' => 'E02003960',
        '2PF' => 'E02003960',
        '2PG' => 'E02003960',
        '2PH' => 'E02003960',
        '2PJ' => 'E02003960',
        '2PL' => 'E02003960',
        '2PN' => 'E02003960',
        '2PP' => 'E02003960',
        '2PQ' => 'E02003960',
        '2PR' => 'E02003960',
        '2PS' => 'E02003960',
        '2PT' => 'E02003960',
        '2PU' => 'E02003960',
        '2PW' => 'E02003960',
        '2PX' => 'E02003960',
        '2PY' => 'E02003960',
        '2PZ' => 'E02003959',
        '2QA' => 'E02003960',
        '2QB' => 'E02003960',
        '2QD' => 'E02003960',
        '2QE' => 'E02003960',
        '2QF' => 'E02003960',
        '2QG' => 'E02003960',
        '2QH' => 'E02003960',
        '2QJ' => 'E02003960',
        '2QL' => 'E02003960',
        '2QN' => 'E02003960',
        '2QP' => 'E02003960',
        '2QQ' => 'E02003960',
        '2QR' => 'E02003960',
        '2QS' => 'E02003960',
        '2QU' => 'E02003960',
        '2QW' => 'E02003960',
        '2QX' => 'E02003960',
        '2QY' => 'E02003960',
        '2QZ' => 'E02003960',
        '2RA' => 'E02003960',
        '2RB' => 'E02003960',
        '2RD' => 'E02003959',
        '2RF' => 'E02003960',
        '2RH' => 'E02003960',
        '2RJ' => 'E02003960',
        '2RL' => 'E02003960',
        '2RN' => 'E02003960',
        '2RP' => 'E02003960',
        '2RR' => 'E02003957',
        '2RS' => 'E02003960',
        '2RT' => 'E02003960',
        '2RU' => 'E02003960',
        '2RW' => 'E02003960',
        '2RX' => 'E02003960',
        '2RY' => 'E02003960',
        '2RZ' => 'E02003957',
        '2SA' => 'E02003957',
        '2SB' => 'E02003957',
        '2SD' => 'E02003959',
        '2SG' => 'E02003959',
        '2SH' => 'E02003959',
        '2SJ' => 'E02003959',
        '2SL' => 'E02003959',
        '2SN' => 'E02003959',
        '2SP' => 'E02003959',
        '2SQ' => 'E02003959',
        '2SR' => 'E02003959',
        '2SS' => 'E02003957',
        '2ST' => 'E02003957',
        '2SU' => 'E02003957',
        '2SW' => 'E02003959',
        '2SX' => 'E02003957',
        '2SY' => 'E02003959',
        '2SZ' => 'E02003959',
        '2TA' => 'E02003959',
        '2TB' => 'E02003959',
        '2TD' => 'E02003959',
        '2TJ' => 'E02003960',
        '2TL' => 'E02003960',
        '2TN' => 'E02003960',
        '2TP' => 'E02003960',
        '2TR' => 'E02003960',
        '2TS' => 'E02003960',
        '2TT' => 'E02003960',
        '2TU' => 'E02003957',
        '2TW' => 'E02003960',
        '2TX' => 'E02003960',
        '2TY' => 'E02003960',
        '2TZ' => 'E02003960',
        '2UA' => 'E02003960',
        '2WA' => 'E02003961',
        '2WG' => 'E02003960',
        '2WZ' => 'E02003961',
        '2XJ' => 'E02003961',
        '2XS' => 'E02003961',
        '2YA' => 'E02003961',
        '2YB' => 'E02003959',
        '2YD' => 'E02003959',
        '2YE' => 'E02003960',
        '2YF' => 'E02003960',
        '2YG' => 'E02003959',
        '2YH' => 'E02003961',
        '2YL' => 'E02003959',
        '2YP' => 'E02003959',
        '2YQ' => 'E02003961',
        '2YS' => 'E02003959',
        '2YT' => 'E02003959',
        '2YY' => 'E02003961',
        '2YZ' => 'E02003960',
        '2ZN' => 'E02003961',
        '2ZQ' => 'E02003961',
        '2ZR' => 'E02003961',
        '2ZX' => 'E02003961',
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
