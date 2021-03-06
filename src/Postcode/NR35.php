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
final class NR35
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02006314',
        '1AB' => 'E02006314',
        '1AD' => 'E02006314',
        '1AE' => 'E02006314',
        '1AF' => 'E02006314',
        '1AG' => 'E02006314',
        '1AH' => 'E02006314',
        '1AJ' => 'E02006314',
        '1AL' => 'E02006314',
        '1AN' => 'E02006314',
        '1AP' => 'E02006314',
        '1AQ' => 'E02006314',
        '1AR' => 'E02006314',
        '1AS' => 'E02006314',
        '1AT' => 'E02006314',
        '1AU' => 'E02006314',
        '1AW' => 'E02006314',
        '1AX' => 'E02006314',
        '1AY' => 'E02006314',
        '1AZ' => 'E02006314',
        '1BA' => 'E02006314',
        '1BB' => 'E02006314',
        '1BD' => 'E02006314',
        '1BE' => 'E02006314',
        '1BF' => 'E02006314',
        '1BG' => 'E02006314',
        '1BH' => 'E02006314',
        '1BJ' => 'E02006314',
        '1BL' => 'E02006314',
        '1BN' => 'E02006314',
        '1BP' => 'E02006314',
        '1BQ' => 'E02006314',
        '1BS' => 'E02006314',
        '1BT' => 'E02006314',
        '1BW' => 'E02006314',
        '1BX' => 'E02006314',
        '1BY' => 'E02006314',
        '1BZ' => 'E02006314',
        '1DA' => 'E02006314',
        '1DB' => 'E02006314',
        '1DD' => 'E02006314',
        '1DE' => 'E02006314',
        '1DF' => 'E02006314',
        '1DG' => 'E02006314',
        '1DH' => 'E02006314',
        '1DJ' => 'E02006314',
        '1DL' => 'E02006314',
        '1DN' => 'E02006314',
        '1DP' => 'E02006314',
        '1DQ' => 'E02006314',
        '1DR' => 'E02006314',
        '1DS' => 'E02006314',
        '1DT' => 'E02006314',
        '1DU' => 'E02006314',
        '1DW' => 'E02006314',
        '1DX' => 'E02006314',
        '1DY' => 'E02006314',
        '1DZ' => 'E02006314',
        '1EA' => 'E02006314',
        '1EB' => 'E02006314',
        '1ED' => 'E02006314',
        '1EE' => 'E02006314',
        '1EF' => 'E02006314',
        '1EG' => 'E02006314',
        '1EH' => 'E02006314',
        '1EJ' => 'E02006314',
        '1EL' => 'E02006314',
        '1EN' => 'E02006314',
        '1EP' => 'E02006314',
        '1EQ' => 'E02006314',
        '1ER' => 'E02006314',
        '1ES' => 'E02006314',
        '1ET' => 'E02006314',
        '1EU' => 'E02006314',
        '1EW' => 'E02006314',
        '1EX' => 'E02006314',
        '1EY' => 'E02006314',
        '1EZ' => 'E02006314',
        '1FA' => 'E02006314',
        '1FD' => 'E02006314',
        '1HA' => 'E02006314',
        '1HB' => 'E02006314',
        '1HD' => 'E02006314',
        '1HE' => 'E02006314',
        '1HF' => 'E02006314',
        '1HG' => 'E02006314',
        '1HH' => 'E02006314',
        '1HJ' => 'E02006314',
        '1HL' => 'E02006314',
        '1HN' => 'E02006314',
        '1HP' => 'E02006314',
        '1HQ' => 'E02006314',
        '1HR' => 'E02006314',
        '1HS' => 'E02006314',
        '1HT' => 'E02006314',
        '1HU' => 'E02006314',
        '1HW' => 'E02006314',
        '1HX' => 'E02006314',
        '1HY' => 'E02006314',
        '1HZ' => 'E02006314',
        '1JA' => 'E02006314',
        '1JB' => 'E02006314',
        '1JD' => 'E02006314',
        '1JE' => 'E02006314',
        '1JF' => 'E02006314',
        '1JG' => 'E02006314',
        '1JH' => 'E02006314',
        '1JJ' => 'E02006314',
        '1JL' => 'E02006314',
        '1JN' => 'E02006314',
        '1JP' => 'E02006314',
        '1JQ' => 'E02006314',
        '1JR' => 'E02006314',
        '1JS' => 'E02006314',
        '1JT' => 'E02006314',
        '1JU' => 'E02006314',
        '1JW' => 'E02006314',
        '1JX' => 'E02006314',
        '1JY' => 'E02006314',
        '1JZ' => 'E02006314',
        '1LA' => 'E02006314',
        '1LB' => 'E02006314',
        '1LD' => 'E02006314',
        '1LE' => 'E02006314',
        '1LF' => 'E02006314',
        '1LG' => 'E02006314',
        '1LH' => 'E02006314',
        '1LJ' => 'E02006314',
        '1LL' => 'E02006314',
        '1LN' => 'E02006314',
        '1LP' => 'E02006314',
        '1LQ' => 'E02006314',
        '1LR' => 'E02006314',
        '1LS' => 'E02006314',
        '1LT' => 'E02006314',
        '1LU' => 'E02006314',
        '1LW' => 'E02006314',
        '1LX' => 'E02006314',
        '1LY' => 'E02006314',
        '1LZ' => 'E02006314',
        '1NA' => 'E02006314',
        '1NB' => 'E02006314',
        '1ND' => 'E02006314',
        '1NE' => 'E02006314',
        '1NF' => 'E02006314',
        '1NG' => 'E02006314',
        '1NH' => 'E02006314',
        '1NJ' => 'E02006314',
        '1NL' => 'E02006314',
        '1NN' => 'E02006314',
        '1NP' => 'E02006314',
        '1NQ' => 'E02006314',
        '1NR' => 'E02006314',
        '1NS' => 'E02006314',
        '1NT' => 'E02006314',
        '1NU' => 'E02006314',
        '1NW' => 'E02006314',
        '1NX' => 'E02006314',
        '1NY' => 'E02006314',
        '1NZ' => 'E02006314',
        '1PA' => 'E02006314',
        '1PD' => 'E02006314',
        '1PE' => 'E02006314',
        '1PF' => 'E02006314',
        '1PG' => 'E02006314',
        '1PH' => 'E02006314',
        '1PJ' => 'E02006314',
        '1PL' => 'E02006314',
        '1PN' => 'E02006314',
        '1PP' => 'E02006314',
        '1PQ' => 'E02006314',
        '1PR' => 'E02006311',
        '1PS' => 'E02006314',
        '1PU' => 'E02006314',
        '1PW' => 'E02006314',
        '1QA' => 'E02006314',
        '1QP' => 'E02006314',
        '1QR' => 'E02006314',
        '1QS' => 'E02006314',
        '1QT' => 'E02006314',
        '1QU' => 'E02006314',
        '1QW' => 'E02006314',
        '1QX' => 'E02006314',
        '1QY' => 'E02006314',
        '1QZ' => 'E02006314',
        '1RB' => 'E02006314',
        '1RD' => 'E02006314',
        '1RE' => 'E02006314',
        '1RF' => 'E02006314',
        '1RG' => 'E02006314',
        '1RH' => 'E02006314',
        '1RJ' => 'E02006314',
        '1RL' => 'E02006314',
        '1RN' => 'E02006314',
        '1RP' => 'E02006314',
        '1RQ' => 'E02006314',
        '1RR' => 'E02006314',
        '1RS' => 'E02006314',
        '1RT' => 'E02006314',
        '1RU' => 'E02006314',
        '1RW' => 'E02006314',
        '1RX' => 'E02006314',
        '1RY' => 'E02006314',
        '1RZ' => 'E02006314',
        '1SA' => 'E02006314',
        '1SB' => 'E02006314',
        '1SD' => 'E02006314',
        '1SE' => 'E02006314',
        '1SF' => 'E02006314',
        '1SG' => 'E02006314',
        '1SP' => 'E02006314',
        '1SQ' => 'E02006314',
        '1SR' => 'E02006314',
        '1SS' => 'E02006314',
        '1TA' => 'E02006314',
        '1TB' => 'E02006312',
        '1TD' => 'E02006312',
        '1TE' => 'E02006312',
        '1TF' => 'E02006312',
        '1TG' => 'E02006314',
        '1TH' => 'E02006312',
        '1TJ' => 'E02006312',
        '1TL' => 'E02006312',
        '1TN' => 'E02006312',
        '1TP' => 'E02006312',
        '1TQ' => 'E02006314',
        '1TR' => 'E02006312',
        '1TS' => 'E02006312',
        '1TT' => 'E02006312',
        '1TU' => 'E02006312',
        '1TW' => 'E02006312',
        '1TX' => 'E02006312',
        '1TY' => 'E02006314',
        '1WA' => 'E02006314',
        '1WB' => 'E02006314',
        '1WT' => 'E02006314',
        '1WU' => 'E02006314',
        '1WW' => 'E02006314',
        '1WX' => 'E02006314',
        '1WY' => 'E02006314',
        '1WZ' => 'E02006314',
        '1YY' => 'E02006314',
        '2AB' => 'E02005608',
        '2AD' => 'E02005608',
        '2AE' => 'E02005608',
        '2AF' => 'E02005608',
        '2AG' => 'E02005608',
        '2AH' => 'E02005608',
        '2AJ' => 'E02005608',
        '2AL' => 'E02005608',
        '2AN' => 'E02005608',
        '2AP' => 'E02005608',
        '2AQ' => 'E02005608',
        '2AR' => 'E02005608',
        '2AS' => 'E02005608',
        '2AT' => 'E02005608',
        '2AU' => 'E02005608',
        '2AW' => 'E02005608',
        '2AX' => 'E02005608',
        '2AY' => 'E02005608',
        '2AZ' => 'E02005608',
        '2BA' => 'E02005608',
        '2BB' => 'E02005608',
        '2BD' => 'E02005608',
        '2BE' => 'E02005608',
        '2BF' => 'E02005608',
        '2BG' => 'E02005608',
        '2BH' => 'E02005608',
        '2BJ' => 'E02005608',
        '2BL' => 'E02005608',
        '2BN' => 'E02005608',
        '2BP' => 'E02005608',
        '2BQ' => 'E02005608',
        '2BS' => 'E02005608',
        '2BT' => 'E02005608',
        '2BU' => 'E02005608',
        '2BW' => 'E02005608',
        '2BX' => 'E02006314',
        '2BY' => 'E02005608',
        '2BZ' => 'E02005608',
        '2DA' => 'E02005608',
        '2DB' => 'E02005608',
        '2DD' => 'E02005608',
        '2DE' => 'E02005608',
        '2DF' => 'E02005608',
        '2DG' => 'E02005608',
        '2DH' => 'E02005608',
        '2DJ' => 'E02005608',
        '2DL' => 'E02005608',
        '2DN' => 'E02005608',
        '2DP' => 'E02005608',
        '2DQ' => 'E02005608',
        '2DR' => 'E02005608',
        '2DS' => 'E02005608',
        '2DT' => 'E02005608',
        '2DU' => 'E02005608',
        '2DW' => 'E02005608',
        '2DX' => 'E02005608',
        '2DY' => 'E02005608',
        '2DZ' => 'E02005608',
        '2EA' => 'E02005608',
        '2EB' => 'E02005608',
        '2ED' => 'E02005608',
        '2EE' => 'E02005608',
        '2EF' => 'E02005608',
        '2EG' => 'E02005608',
        '2EH' => 'E02005608',
        '2EJ' => 'E02005608',
        '2EL' => 'E02005606',
        '2EN' => 'E02005606',
        '2EP' => 'E02005606',
        '2EQ' => 'E02005608',
        '2ER' => 'E02005606',
        '2ES' => 'E02005606',
        '2ET' => 'E02005606',
        '2EU' => 'E02005606',
        '2EW' => 'E02005606',
        '2EX' => 'E02005606',
        '2EZ' => 'E02005606',
        '2HA' => 'E02005606',
        '2HB' => 'E02005606',
        '2HD' => 'E02005606',
        '2HE' => 'E02005606',
        '2HF' => 'E02005606',
        '2HG' => 'E02005606',
        '2HH' => 'E02005606',
        '2HJ' => 'E02005606',
        '2HL' => 'E02005606',
        '2HN' => 'E02005606',
        '2HP' => 'E02005606',
        '2HQ' => 'E02005606',
        '2HR' => 'E02005606',
        '2HS' => 'E02005606',
        '2HT' => 'E02005608',
        '2HU' => 'E02005608',
        '2HW' => 'E02005606',
        '2HX' => 'E02005608',
        '2HZ' => 'E02005608',
        '2JA' => 'E02006314',
        '2JB' => 'E02005608',
        '2JD' => 'E02005608',
        '2JE' => 'E02005608',
        '2JF' => 'E02005608',
        '2JG' => 'E02005608',
        '2JH' => 'E02005608',
        '2JJ' => 'E02005608',
        '2JL' => 'E02005608',
        '2JN' => 'E02005608',
        '2JP' => 'E02005608',
        '2JQ' => 'E02005608',
        '2JR' => 'E02005608',
        '2JS' => 'E02005608',
        '2JT' => 'E02005608',
        '2JU' => 'E02005608',
        '2JW' => 'E02005608',
        '2JX' => 'E02005608',
        '2JY' => 'E02005608',
        '2JZ' => 'E02005608',
        '2LA' => 'E02005608',
        '2LB' => 'E02005608',
        '2LD' => 'E02005608',
        '2LE' => 'E02005608',
        '2LF' => 'E02005608',
        '2LG' => 'E02005608',
        '2LH' => 'E02005608',
        '2LJ' => 'E02005608',
        '2LL' => 'E02005608',
        '2LN' => 'E02005608',
        '2LP' => 'E02005608',
        '2LQ' => 'E02005608',
        '2LR' => 'E02005608',
        '2LS' => 'E02005608',
        '2LT' => 'E02005608',
        '2LU' => 'E02005608',
        '2LW' => 'E02005608',
        '2LX' => 'E02005606',
        '2LY' => 'E02005608',
        '2LZ' => 'E02005608',
        '2NA' => 'E02005608',
        '2NB' => 'E02005608',
        '2ND' => 'E02005608',
        '2NE' => 'E02005608',
        '2NF' => 'E02005608',
        '2NG' => 'E02005608',
        '2NH' => 'E02005608',
        '2NJ' => 'E02005608',
        '2NL' => 'E02005608',
        '2NN' => 'E02005608',
        '2NP' => 'E02005608',
        '2NQ' => 'E02005608',
        '2NR' => 'E02005608',
        '2NS' => 'E02005608',
        '2NT' => 'E02005608',
        '2NU' => 'E02005608',
        '2NW' => 'E02005608',
        '2NX' => 'E02005608',
        '2NY' => 'E02005608',
        '2NZ' => 'E02005608',
        '2PA' => 'E02005608',
        '2PB' => 'E02005608',
        '2PD' => 'E02005608',
        '2PE' => 'E02005608',
        '2PF' => 'E02005608',
        '2PG' => 'E02005606',
        '2PH' => 'E02005606',
        '2PJ' => 'E02005606',
        '2PL' => 'E02005606',
        '2PN' => 'E02005606',
        '2PP' => 'E02005606',
        '2PQ' => 'E02005606',
        '2PR' => 'E02005606',
        '2PS' => 'E02005606',
        '2PT' => 'E02005606',
        '2PU' => 'E02005606',
        '2PW' => 'E02005606',
        '2PX' => 'E02005606',
        '2PY' => 'E02005606',
        '2PZ' => 'E02005606',
        '2QA' => 'E02005606',
        '2QB' => 'E02005608',
        '2QD' => 'E02006314',
        '2QE' => 'E02005608',
        '2QF' => 'E02005608',
        '2QG' => 'E02005608',
        '2QH' => 'E02005608',
        '2QJ' => 'E02005608',
        '2QL' => 'E02005608',
        '2QN' => 'E02005608',
        '2QP' => 'E02005608',
        '2QQ' => 'E02005608',
        '2QR' => 'E02005608',
        '2QS' => 'E02005608',
        '2QT' => 'E02005608',
        '2QU' => 'E02005608',
        '2QW' => 'E02005608',
        '2QX' => 'E02005608',
        '2QY' => 'E02005608',
        '2QZ' => 'E02005608',
        '2RA' => 'E02005608',
        '2RB' => 'E02005608',
        '2RD' => 'E02005608',
        '2RE' => 'E02005608',
        '2RF' => 'E02005608',
        '2RG' => 'E02005608',
        '2RH' => 'E02005608',
        '2RJ' => 'E02005608',
        '2RL' => 'E02005608',
        '2RN' => 'E02005608',
        '2RP' => 'E02005608',
        '2RQ' => 'E02005608',
        '2RR' => 'E02005608',
        '2RS' => 'E02005608',
        '2RT' => 'E02005608',
        '2RU' => 'E02005608',
        '2RW' => 'E02005608',
        '2RX' => 'E02005608',
        '2RY' => 'E02005608',
        '2RZ' => 'E02005608',
        '2SA' => 'E02005608',
        '2SB' => 'E02005608',
        '2SD' => 'E02005608',
        '2SE' => 'E02005608',
        '2SF' => 'E02005608',
        '2SG' => 'E02005608',
        '2SH' => 'E02005608',
        '2SJ' => 'E02005608',
        '2SL' => 'E02005608',
        '2SQ' => 'E02005608',
        '2ST' => 'E02005608',
        '2SU' => 'E02005608',
        '2SW' => 'E02005608',
        '2SX' => 'E02005608',
        '2SY' => 'E02005608',
        '2SZ' => 'E02005608',
        '2TA' => 'E02005608',
        '2TB' => 'E02005608',
        '2TD' => 'E02005608',
        '2TE' => 'E02005608',
        '2TF' => 'E02005608',
        '2TG' => 'E02005608',
        '2TH' => 'E02005608',
        '2TJ' => 'E02005608',
        '2TL' => 'E02005608',
        '2TN' => 'E02005608',
        '2TP' => 'E02005608',
        '2TQ' => 'E02005608',
        '2TR' => 'E02005608',
        '2TS' => 'E02005608',
        '2TT' => 'E02005608',
        '2TU' => 'E02005608',
        '2TW' => 'E02005608',
        '2TX' => 'E02005608',
        '2TY' => 'E02005608',
        '2TZ' => 'E02005608',
        '2UA' => 'E02005608',
        '2UB' => 'E02005608',
        '2WA' => 'E02006314',
        '2WB' => 'E02005608',
        '2WD' => 'E02005608',
        '2WE' => 'E02005608',
        '2WF' => 'E02006314',
        '2WR' => 'E02005608',
        '2WT' => 'E02005608',
        '2WX' => 'E02006314',
        '2WY' => 'E02006314',
        '2WZ' => 'E02006314',
        '9AE' => 'E02006314',
        '9AF' => 'E02006314',
        '9AJ' => 'E02006314',
        '9AL' => 'E02006314',
        '9AN' => 'E02006314',
        '9AP' => 'E02006314',
        '9AQ' => 'E02006314',
        '9AR' => 'E02006314',
        '9AS' => 'E02006314',
        '9AT' => 'E02006314',
        '9AU' => 'E02006314',
        '9AW' => 'E02006314',
        '9AX' => 'E02006314',
        '9AY' => 'E02006314',
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
