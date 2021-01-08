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
final class IP9
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02006237',
        '1AB' => 'E02006237',
        '1AD' => 'E02006237',
        '1AE' => 'E02006237',
        '1AF' => 'E02006237',
        '1AG' => 'E02006237',
        '1AH' => 'E02006237',
        '1AJ' => 'E02006237',
        '1AL' => 'E02006237',
        '1AN' => 'E02006237',
        '1AP' => 'E02006237',
        '1AQ' => 'E02006237',
        '1AR' => 'E02006237',
        '1AS' => 'E02006237',
        '1AT' => 'E02006237',
        '1AU' => 'E02006237',
        '1AW' => 'E02006237',
        '1AX' => 'E02006237',
        '1AY' => 'E02006237',
        '1AZ' => 'E02006237',
        '1BA' => 'E02006237',
        '1BB' => 'E02006237',
        '1BD' => 'E02006237',
        '1BE' => 'E02006237',
        '1BG' => 'E02006237',
        '1BH' => 'E02006237',
        '1BJ' => 'E02006237',
        '1BL' => 'E02006237',
        '1BN' => 'E02006237',
        '1BP' => 'E02006237',
        '1BQ' => 'E02006237',
        '1BS' => 'E02006237',
        '1BT' => 'E02006237',
        '1BU' => 'E02006237',
        '1BW' => 'E02006237',
        '1BX' => 'E02006237',
        '1BY' => 'E02006237',
        '1BZ' => 'E02006237',
        '1DA' => 'E02006237',
        '1DB' => 'E02006237',
        '1DD' => 'E02006237',
        '1DE' => 'E02006237',
        '1DF' => 'E02006237',
        '1DG' => 'E02006237',
        '1DH' => 'E02006237',
        '1DJ' => 'E02006237',
        '1DL' => 'E02006251',
        '1DN' => 'E02006237',
        '1DP' => 'E02006237',
        '1DQ' => 'E02006237',
        '1DR' => 'E02006237',
        '1DS' => 'E02006237',
        '1DT' => 'E02006237',
        '1DU' => 'E02006237',
        '1DW' => 'E02006237',
        '1DX' => 'E02006237',
        '1DY' => 'E02006237',
        '1DZ' => 'E02006237',
        '1EA' => 'E02006237',
        '1EB' => 'E02006237',
        '1ED' => 'E02006237',
        '1EE' => 'E02006237',
        '1EF' => 'E02006237',
        '1EG' => 'E02006237',
        '1EH' => 'E02006237',
        '1EJ' => 'E02006237',
        '1EL' => 'E02006237',
        '1EN' => 'E02006237',
        '1EP' => 'E02006237',
        '1EQ' => 'E02006237',
        '1ER' => 'E02006237',
        '1ES' => 'E02006237',
        '1ET' => 'E02006237',
        '1EU' => 'E02006237',
        '1EW' => 'E02006237',
        '1EX' => 'E02006237',
        '1EY' => 'E02006237',
        '1EZ' => 'E02006237',
        '1FA' => 'E02006237',
        '1HA' => 'E02006237',
        '1HB' => 'E02006237',
        '1HD' => 'E02006237',
        '1HE' => 'E02006237',
        '1HG' => 'E02006237',
        '1HH' => 'E02006237',
        '1HJ' => 'E02006237',
        '1HL' => 'E02006237',
        '1HN' => 'E02006237',
        '1HP' => 'E02006237',
        '1HQ' => 'E02006237',
        '1HR' => 'E02006237',
        '1HS' => 'E02006237',
        '1HT' => 'E02006237',
        '1HU' => 'E02006237',
        '1HW' => 'E02006237',
        '1HX' => 'E02006237',
        '1HY' => 'E02006237',
        '1HZ' => 'E02006237',
        '1JA' => 'E02006237',
        '1JB' => 'E02006237',
        '1JD' => 'E02006237',
        '1JE' => 'E02006237',
        '1JF' => 'E02006237',
        '1JG' => 'E02006237',
        '1JH' => 'E02006237',
        '1JJ' => 'E02006237',
        '1JL' => 'E02006237',
        '1JN' => 'E02006237',
        '1JP' => 'E02006237',
        '1JQ' => 'E02006237',
        '1JR' => 'E02006237',
        '1JS' => 'E02006237',
        '1JT' => 'E02006237',
        '1JU' => 'E02006237',
        '1JW' => 'E02006237',
        '1JX' => 'E02006237',
        '1JY' => 'E02006237',
        '1JZ' => 'E02006237',
        '1LA' => 'E02006237',
        '1LD' => 'E02006237',
        '1LE' => 'E02006237',
        '1LF' => 'E02006237',
        '1LG' => 'E02006237',
        '1LH' => 'E02006237',
        '1LJ' => 'E02006237',
        '1LL' => 'E02006237',
        '1LN' => 'E02006237',
        '1LP' => 'E02006237',
        '1LQ' => 'E02006237',
        '1LR' => 'E02006237',
        '1LW' => 'E02006237',
        '1LX' => 'E02006237',
        '1LY' => 'E02006237',
        '1LZ' => 'E02006237',
        '1NA' => 'E02006237',
        '1NB' => 'E02006237',
        '1ND' => 'E02006237',
        '1NE' => 'E02006237',
        '1NF' => 'E02006237',
        '1NG' => 'E02006237',
        '1NH' => 'E02006237',
        '1NJ' => 'E02006237',
        '1NL' => 'E02006237',
        '1NN' => 'E02006237',
        '1NP' => 'E02006237',
        '1NQ' => 'E02006237',
        '1NR' => 'E02006237',
        '1NS' => 'E02006237',
        '1NT' => 'E02006237',
        '1NU' => 'E02006237',
        '1NW' => 'E02006237',
        '1NX' => 'E02006237',
        '1NY' => 'E02006237',
        '1NZ' => 'E02006237',
        '1PA' => 'E02006237',
        '1PB' => 'E02006237',
        '1PD' => 'E02006237',
        '1PE' => 'E02006237',
        '1PF' => 'E02006237',
        '1PG' => 'E02006237',
        '1PH' => 'E02006237',
        '1PJ' => 'E02006237',
        '1PL' => 'E02006237',
        '1PN' => 'E02006237',
        '1PP' => 'E02006237',
        '1PQ' => 'E02006237',
        '1PR' => 'E02006237',
        '1PS' => 'E02006237',
        '1PT' => 'E02006237',
        '1PU' => 'E02006237',
        '1PW' => 'E02006237',
        '1PX' => 'E02006237',
        '1PY' => 'E02006237',
        '1PZ' => 'E02006237',
        '1QA' => 'E02006237',
        '1QB' => 'E02006237',
        '1QD' => 'E02006237',
        '1QE' => 'E02006237',
        '1QF' => 'E02006237',
        '1QG' => 'E02006237',
        '1QH' => 'E02006237',
        '1QJ' => 'E02006237',
        '1QL' => 'E02006237',
        '1QN' => 'E02006237',
        '1QP' => 'E02006237',
        '1QQ' => 'E02006251',
        '1QR' => 'E02006237',
        '1QS' => 'E02006237',
        '1QZ' => 'E02006237',
        '1RJ' => 'E02006237',
        '1RL' => 'E02006237',
        '1RN' => 'E02006237',
        '1RP' => 'E02006237',
        '1RQ' => 'E02006237',
        '1RR' => 'E02006237',
        '1RS' => 'E02006237',
        '1RT' => 'E02006237',
        '1RW' => 'E02006237',
        '1RZ' => 'E02006251',
        '1WA' => 'E02006251',
        '1WB' => 'E02006251',
        '1WW' => 'E02006251',
        '1WX' => 'E02006251',
        '1WY' => 'E02006251',
        '1WZ' => 'E02006251',
        '1XG' => 'E02006251',
        '1XQ' => 'E02006251',
        '1YH' => 'E02006251',
        '2AA' => 'E02006231',
        '2AB' => 'E02006231',
        '2AD' => 'E02006231',
        '2AE' => 'E02006231',
        '2AF' => 'E02006231',
        '2AG' => 'E02006231',
        '2AH' => 'E02006231',
        '2AJ' => 'E02006231',
        '2AL' => 'E02006231',
        '2AN' => 'E02006231',
        '2AP' => 'E02006231',
        '2AQ' => 'E02006251',
        '2AR' => 'E02006231',
        '2AS' => 'E02006231',
        '2AT' => 'E02006231',
        '2AU' => 'E02006231',
        '2AW' => 'E02006236',
        '2AX' => 'E02006231',
        '2AY' => 'E02006231',
        '2AZ' => 'E02006231',
        '2BA' => 'E02006231',
        '2BB' => 'E02006231',
        '2BD' => 'E02006231',
        '2BE' => 'E02006231',
        '2BF' => 'E02006237',
        '2BG' => 'E02006237',
        '2BH' => 'E02006237',
        '2BJ' => 'E02006231',
        '2BL' => 'E02006236',
        '2BN' => 'E02006236',
        '2BP' => 'E02006236',
        '2BQ' => 'E02006251',
        '2BS' => 'E02006236',
        '2BT' => 'E02006236',
        '2BU' => 'E02006236',
        '2BW' => 'E02006236',
        '2BX' => 'E02006236',
        '2BY' => 'E02006236',
        '2BZ' => 'E02006236',
        '2DA' => 'E02006236',
        '2DB' => 'E02006236',
        '2DD' => 'E02006236',
        '2DE' => 'E02006236',
        '2DF' => 'E02006236',
        '2DG' => 'E02006236',
        '2DH' => 'E02006236',
        '2DJ' => 'E02006236',
        '2DL' => 'E02006236',
        '2DN' => 'E02006236',
        '2DP' => 'E02006236',
        '2DQ' => 'E02006236',
        '2DR' => 'E02006236',
        '2DS' => 'E02006236',
        '2DT' => 'E02006236',
        '2DU' => 'E02006236',
        '2DW' => 'E02006236',
        '2DX' => 'E02006231',
        '2DY' => 'E02006251',
        '2DZ' => 'E02006251',
        '2EA' => 'E02006236',
        '2EB' => 'E02006236',
        '2ED' => 'E02006236',
        '2EE' => 'E02006236',
        '2EF' => 'E02006236',
        '2EG' => 'E02006236',
        '2EH' => 'E02006236',
        '2EJ' => 'E02006237',
        '2EL' => 'E02006236',
        '2EN' => 'E02006251',
        '2EP' => 'E02006236',
        '2EQ' => 'E02006236',
        '2ER' => 'E02006236',
        '2ES' => 'E02006236',
        '2ET' => 'E02006236',
        '2EU' => 'E02006236',
        '2EW' => 'E02006237',
        '2EX' => 'E02006236',
        '2EY' => 'E02006236',
        '2EZ' => 'E02006236',
        '2FA' => 'E02006237',
        '2FB' => 'E02006251',
        '2FE' => 'E02006237',
        '2FF' => 'E02006237',
        '2FG' => 'E02006237',
        '2FH' => 'E02006237',
        '2FJ' => 'E02006236',
        '2FL' => 'E02006236',
        '2FN' => 'E02006237',
        '2FP' => 'E02006237',
        '2GA' => 'E02006237',
        '2GX' => 'E02006251',
        '2GZ' => 'E02006237',
        '2HA' => 'E02006236',
        '2HB' => 'E02006236',
        '2HD' => 'E02006236',
        '2HE' => 'E02006236',
        '2HF' => 'E02006236',
        '2HG' => 'E02006236',
        '2HH' => 'E02006236',
        '2HJ' => 'E02006236',
        '2HL' => 'E02006236',
        '2HN' => 'E02006236',
        '2HP' => 'E02006236',
        '2HQ' => 'E02006236',
        '2HR' => 'E02006236',
        '2HS' => 'E02006236',
        '2HT' => 'E02006236',
        '2HU' => 'E02006251',
        '2HW' => 'E02006236',
        '2HX' => 'E02006236',
        '2HY' => 'E02006236',
        '2HZ' => 'E02006236',
        '2JA' => 'E02006236',
        '2JB' => 'E02006236',
        '2JD' => 'E02006236',
        '2JE' => 'E02006236',
        '2JF' => 'E02006236',
        '2JG' => 'E02006236',
        '2JH' => 'E02006236',
        '2JJ' => 'E02006236',
        '2JL' => 'E02006236',
        '2JN' => 'E02006236',
        '2JP' => 'E02006236',
        '2JQ' => 'E02006236',
        '2JR' => 'E02006236',
        '2JS' => 'E02006236',
        '2JT' => 'E02006236',
        '2JU' => 'E02006236',
        '2JW' => 'E02006236',
        '2JX' => 'E02006236',
        '2JY' => 'E02006236',
        '2JZ' => 'E02006236',
        '2LA' => 'E02006236',
        '2LB' => 'E02006236',
        '2LD' => 'E02006236',
        '2LE' => 'E02006236',
        '2LF' => 'E02006236',
        '2LG' => 'E02006236',
        '2LH' => 'E02006236',
        '2LJ' => 'E02006236',
        '2LL' => 'E02006236',
        '2LN' => 'E02006236',
        '2LP' => 'E02006236',
        '2LQ' => 'E02006236',
        '2LR' => 'E02006236',
        '2LS' => 'E02006236',
        '2LT' => 'E02006236',
        '2LU' => 'E02006237',
        '2LW' => 'E02006236',
        '2LX' => 'E02006237',
        '2LY' => 'E02006237',
        '2LZ' => 'E02006237',
        '2NA' => 'E02006237',
        '2NB' => 'E02006237',
        '2ND' => 'E02006237',
        '2NE' => 'E02006237',
        '2NF' => 'E02006237',
        '2NG' => 'E02006237',
        '2NH' => 'E02006237',
        '2NJ' => 'E02006237',
        '2NL' => 'E02006236',
        '2NN' => 'E02006237',
        '2NP' => 'E02006237',
        '2NQ' => 'E02006237',
        '2NR' => 'E02006237',
        '2NS' => 'E02006237',
        '2NT' => 'E02006237',
        '2NU' => 'E02006237',
        '2NW' => 'E02006237',
        '2NX' => 'E02006237',
        '2NY' => 'E02006237',
        '2NZ' => 'E02006237',
        '2PA' => 'E02006237',
        '2PB' => 'E02006237',
        '2PD' => 'E02006237',
        '2PE' => 'E02006237',
        '2PF' => 'E02006236',
        '2PG' => 'E02006237',
        '2PH' => 'E02006237',
        '2PJ' => 'E02006237',
        '2PL' => 'E02006237',
        '2PN' => 'E02006237',
        '2PP' => 'E02006237',
        '2PQ' => 'E02006237',
        '2PR' => 'E02006237',
        '2PS' => 'E02006237',
        '2PT' => 'E02006237',
        '2PU' => 'E02006237',
        '2PW' => 'E02006237',
        '2PX' => 'E02006237',
        '2PY' => 'E02006237',
        '2PZ' => 'E02006237',
        '2QA' => 'E02006237',
        '2QB' => 'E02006237',
        '2QD' => 'E02006237',
        '2QE' => 'E02006237',
        '2QF' => 'E02006237',
        '2QG' => 'E02006237',
        '2QH' => 'E02006237',
        '2QJ' => 'E02006237',
        '2QL' => 'E02006237',
        '2QN' => 'E02006237',
        '2QP' => 'E02006237',
        '2QQ' => 'E02006237',
        '2QR' => 'E02006237',
        '2QS' => 'E02006237',
        '2QT' => 'E02006237',
        '2QU' => 'E02006237',
        '2QW' => 'E02006237',
        '2QX' => 'E02006237',
        '2QY' => 'E02006237',
        '2QZ' => 'E02006237',
        '2RA' => 'E02006237',
        '2RB' => 'E02006237',
        '2RD' => 'E02006237',
        '2RE' => 'E02006237',
        '2RF' => 'E02006237',
        '2RG' => 'E02006237',
        '2RH' => 'E02006236',
        '2RJ' => 'E02006237',
        '2RL' => 'E02006237',
        '2RN' => 'E02006237',
        '2RP' => 'E02006237',
        '2RQ' => 'E02006237',
        '2RR' => 'E02006237',
        '2RS' => 'E02006237',
        '2RT' => 'E02006237',
        '2RU' => 'E02006237',
        '2RW' => 'E02006237',
        '2RX' => 'E02006237',
        '2RY' => 'E02006237',
        '2RZ' => 'E02006237',
        '2SA' => 'E02006237',
        '2SB' => 'E02006237',
        '2SD' => 'E02006237',
        '2SE' => 'E02006237',
        '2SF' => 'E02006237',
        '2SG' => 'E02006237',
        '2SH' => 'E02006237',
        '2SJ' => 'E02006237',
        '2SL' => 'E02006237',
        '2SN' => 'E02006237',
        '2SP' => 'E02006237',
        '2SQ' => 'E02006237',
        '2SR' => 'E02006237',
        '2SS' => 'E02006237',
        '2ST' => 'E02006237',
        '2SU' => 'E02006237',
        '2SW' => 'E02006237',
        '2SX' => 'E02006237',
        '2SY' => 'E02006237',
        '2SZ' => 'E02006237',
        '2TA' => 'E02006237',
        '2TB' => 'E02006237',
        '2TD' => 'E02006237',
        '2TE' => 'E02006237',
        '2TF' => 'E02006237',
        '2TG' => 'E02006237',
        '2TH' => 'E02006237',
        '2TJ' => 'E02006237',
        '2TL' => 'E02006237',
        '2TN' => 'E02006237',
        '2TP' => 'E02006237',
        '2TQ' => 'E02006237',
        '2TR' => 'E02006237',
        '2TS' => 'E02006237',
        '2TT' => 'E02006237',
        '2TU' => 'E02006237',
        '2TW' => 'E02006237',
        '2TX' => 'E02006251',
        '2TY' => 'E02006237',
        '2TZ' => 'E02006251',
        '2UA' => 'E02006236',
        '2UB' => 'E02006236',
        '2UD' => 'E02006236',
        '2UE' => 'E02006236',
        '2UF' => 'E02006236',
        '2UG' => 'E02006236',
        '2UH' => 'E02006236',
        '2UJ' => 'E02006236',
        '2UL' => 'E02006236',
        '2UN' => 'E02006236',
        '2UP' => 'E02006236',
        '2UQ' => 'E02006236',
        '2UR' => 'E02006236',
        '2UT' => 'E02006236',
        '2UU' => 'E02006236',
        '2UW' => 'E02006236',
        '2UX' => 'E02006236',
        '2UY' => 'E02006236',
        '2UZ' => 'E02006236',
        '2WA' => 'E02006251',
        '2WB' => 'E02006236',
        '2WD' => 'E02006251',
        '2WE' => 'E02006237',
        '2WF' => 'E02006251',
        '2WG' => 'E02006231',
        '2WH' => 'E02006251',
        '2WJ' => 'E02006251',
        '2WL' => 'E02006251',
        '2WN' => 'E02006251',
        '2WP' => 'E02006251',
        '2WQ' => 'E02006251',
        '2WR' => 'E02006251',
        '2WS' => 'E02006251',
        '2WT' => 'E02006236',
        '2WU' => 'E02006236',
        '2WW' => 'E02006251',
        '2WX' => 'E02006251',
        '2WY' => 'E02006251',
        '2WZ' => 'E02006251',
        '2XA' => 'E02006236',
        '2XB' => 'E02006236',
        '2XD' => 'E02006236',
        '2XE' => 'E02006236',
        '2XF' => 'E02006236',
        '2XG' => 'E02006236',
        '2XH' => 'E02006236',
        '2XJ' => 'E02006236',
        '2XL' => 'E02006236',
        '2XN' => 'E02006236',
        '2XP' => 'E02006236',
        '2XQ' => 'E02006236',
        '2XR' => 'E02006236',
        '2XS' => 'E02006236',
        '2XT' => 'E02006251',
        '2XU' => 'E02006251',
        '2XW' => 'E02006236',
        '2XX' => 'E02006237',
        '2XY' => 'E02006237',
        '2YA' => 'E02006251',
        '2YY' => 'E02006251',
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
