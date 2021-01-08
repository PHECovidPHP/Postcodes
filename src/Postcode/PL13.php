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
final class PL13
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02003904',
        '1AB' => 'E02003904',
        '1AD' => 'E02003904',
        '1AE' => 'E02003904',
        '1AF' => 'E02003904',
        '1AG' => 'E02003901',
        '1AH' => 'E02003904',
        '1AJ' => 'E02003904',
        '1AL' => 'E02003904',
        '1AN' => 'E02003904',
        '1AP' => 'E02003904',
        '1AQ' => 'E02003904',
        '1AR' => 'E02003904',
        '1AS' => 'E02003904',
        '1AT' => 'E02003904',
        '1AU' => 'E02003904',
        '1AW' => 'E02003904',
        '1AX' => 'E02003904',
        '1AY' => 'E02003904',
        '1AZ' => 'E02003904',
        '1BA' => 'E02003904',
        '1BB' => 'E02003904',
        '1BD' => 'E02003904',
        '1BE' => 'E02003904',
        '1BG' => 'E02003904',
        '1BH' => 'E02003904',
        '1BJ' => 'E02003904',
        '1BL' => 'E02003904',
        '1BN' => 'E02003904',
        '1BP' => 'E02003904',
        '1BQ' => 'E02003904',
        '1BS' => 'E02003904',
        '1BT' => 'E02003904',
        '1BU' => 'E02003904',
        '1BW' => 'E02003904',
        '1BX' => 'E02003904',
        '1BY' => 'E02003904',
        '1BZ' => 'E02003904',
        '1DA' => 'E02003904',
        '1DB' => 'E02003904',
        '1DD' => 'E02003904',
        '1DE' => 'E02003904',
        '1DF' => 'E02003904',
        '1DG' => 'E02003904',
        '1DH' => 'E02003904',
        '1DJ' => 'E02003904',
        '1DL' => 'E02003904',
        '1DN' => 'E02003904',
        '1DP' => 'E02003904',
        '1DQ' => 'E02003904',
        '1DR' => 'E02003901',
        '1DS' => 'E02003904',
        '1DT' => 'E02003904',
        '1DU' => 'E02003904',
        '1DW' => 'E02003904',
        '1DX' => 'E02003904',
        '1DY' => 'E02003904',
        '1DZ' => 'E02003904',
        '1EA' => 'E02003904',
        '1EB' => 'E02003904',
        '1ED' => 'E02003904',
        '1EE' => 'E02003904',
        '1EF' => 'E02003904',
        '1EG' => 'E02003904',
        '1EH' => 'E02003904',
        '1EJ' => 'E02003904',
        '1EL' => 'E02003904',
        '1EN' => 'E02003904',
        '1EP' => 'E02003904',
        '1EQ' => 'E02003904',
        '1ER' => 'E02003904',
        '1ES' => 'E02003904',
        '1ET' => 'E02003904',
        '1EU' => 'E02003904',
        '1EW' => 'E02003904',
        '1EX' => 'E02003904',
        '1EY' => 'E02003904',
        '1EZ' => 'E02003904',
        '1FA' => 'E02003901',
        '1FB' => 'E02003901',
        '1FD' => 'E02003901',
        '1FE' => 'E02003901',
        '1FF' => 'E02003904',
        '1FG' => 'E02003901',
        '1FH' => 'E02003901',
        '1FJ' => 'E02003901',
        '1FL' => 'E02003901',
        '1HA' => 'E02003904',
        '1HB' => 'E02003901',
        '1HD' => 'E02003901',
        '1HE' => 'E02003901',
        '1HF' => 'E02003904',
        '1HH' => 'E02003904',
        '1HJ' => 'E02003904',
        '1HL' => 'E02003904',
        '1HN' => 'E02003904',
        '1HP' => 'E02003904',
        '1HQ' => 'E02003904',
        '1HR' => 'E02003904',
        '1HS' => 'E02003904',
        '1HT' => 'E02003904',
        '1HU' => 'E02003904',
        '1HW' => 'E02003904',
        '1HX' => 'E02003904',
        '1HY' => 'E02003904',
        '1HZ' => 'E02003904',
        '1JA' => 'E02003904',
        '1JB' => 'E02003904',
        '1JD' => 'E02003904',
        '1JE' => 'E02003904',
        '1JN' => 'E02003904',
        '1JP' => 'E02003904',
        '1JQ' => 'E02003904',
        '1JR' => 'E02003904',
        '1JS' => 'E02003904',
        '1JT' => 'E02003904',
        '1JU' => 'E02003904',
        '1JW' => 'E02003904',
        '1JX' => 'E02003904',
        '1JY' => 'E02003901',
        '1JZ' => 'E02003904',
        '1LA' => 'E02003904',
        '1LB' => 'E02003901',
        '1LD' => 'E02003904',
        '1LE' => 'E02003901',
        '1LF' => 'E02003904',
        '1LG' => 'E02003904',
        '1LH' => 'E02003904',
        '1LP' => 'E02003901',
        '1LR' => 'E02003901',
        '1LS' => 'E02003904',
        '1LT' => 'E02003904',
        '1LU' => 'E02003904',
        '1LW' => 'E02003904',
        '1LX' => 'E02003904',
        '1LY' => 'E02003904',
        '1LZ' => 'E02003901',
        '1NA' => 'E02003901',
        '1NB' => 'E02003901',
        '1ND' => 'E02003901',
        '1NE' => 'E02003901',
        '1NF' => 'E02003901',
        '1NG' => 'E02003901',
        '1NH' => 'E02003901',
        '1NJ' => 'E02003901',
        '1NL' => 'E02003901',
        '1NN' => 'E02003901',
        '1NP' => 'E02003901',
        '1NQ' => 'E02003901',
        '1NR' => 'E02003901',
        '1NS' => 'E02003901',
        '1NT' => 'E02003901',
        '1NU' => 'E02003901',
        '1NW' => 'E02003904',
        '1NX' => 'E02003901',
        '1NY' => 'E02003901',
        '1NZ' => 'E02003901',
        '1PA' => 'E02003901',
        '1PB' => 'E02003901',
        '1PD' => 'E02003901',
        '1PE' => 'E02003901',
        '1PF' => 'E02003901',
        '1PG' => 'E02003901',
        '1PH' => 'E02003901',
        '1PJ' => 'E02003901',
        '1PL' => 'E02003901',
        '1PN' => 'E02003901',
        '1PP' => 'E02003901',
        '1PQ' => 'E02003901',
        '1PR' => 'E02003901',
        '1PS' => 'E02003901',
        '1PT' => 'E02003901',
        '1PU' => 'E02003901',
        '1PW' => 'E02003901',
        '1PX' => 'E02003901',
        '1PY' => 'E02003901',
        '1PZ' => 'E02003901',
        '1QA' => 'E02003901',
        '1QB' => 'E02003901',
        '1QD' => 'E02003901',
        '1QE' => 'E02003901',
        '1QF' => 'E02003901',
        '1QG' => 'E02003901',
        '1QH' => 'E02003904',
        '1QJ' => 'E02003901',
        '1QL' => 'E02003898',
        '1QN' => 'E02003901',
        '1QP' => 'E02003901',
        '1QQ' => 'E02003901',
        '1QR' => 'E02003901',
        '1QS' => 'E02003901',
        '1QT' => 'E02003901',
        '1QU' => 'E02003901',
        '1QW' => 'E02003901',
        '1QX' => 'E02003901',
        '1QY' => 'E02003901',
        '1WA' => 'E02003901',
        '1WD' => 'E02003904',
        '1WW' => 'E02003901',
        '1WX' => 'E02003904',
        '1WY' => 'E02003904',
        '1WZ' => 'E02003904',
        '1XR' => 'E02003904',
        '1XS' => 'E02003904',
        '1XT' => 'E02003901',
        '1XU' => 'E02003901',
        '1XW' => 'E02003901',
        '1XX' => 'E02003904',
        '1XY' => 'E02003901',
        '1XZ' => 'E02003901',
        '1YA' => 'E02003904',
        '1YB' => 'E02003901',
        '1YD' => 'E02003901',
        '1YE' => 'E02003904',
        '1YF' => 'E02003904',
        '1YG' => 'E02003901',
        '1YH' => 'E02003901',
        '1YJ' => 'E02003901',
        '1YL' => 'E02003901',
        '1YN' => 'E02003901',
        '1YP' => 'E02003904',
        '1YQ' => 'E02003904',
        '1YR' => 'E02003904',
        '1YW' => 'E02003904',
        '1YX' => 'E02003904',
        '1YZ' => 'E02003904',
        '1ZJ' => 'E02003904',
        '2AA' => 'E02003901',
        '2AB' => 'E02003904',
        '2AD' => 'E02003904',
        '2AE' => 'E02003904',
        '2AF' => 'E02003904',
        '2AG' => 'E02003904',
        '2AH' => 'E02003904',
        '2AJ' => 'E02003904',
        '2AL' => 'E02003904',
        '2AN' => 'E02003904',
        '2AP' => 'E02003904',
        '2AQ' => 'E02003904',
        '2AR' => 'E02003904',
        '2AS' => 'E02003904',
        '2AT' => 'E02003904',
        '2AU' => 'E02003904',
        '2AW' => 'E02003904',
        '2AX' => 'E02003904',
        '2AY' => 'E02003904',
        '2AZ' => 'E02003904',
        '2BA' => 'E02003904',
        '2BB' => 'E02003904',
        '2BD' => 'E02003904',
        '2BE' => 'E02003904',
        '2BG' => 'E02003904',
        '2BH' => 'E02003904',
        '2BJ' => 'E02003904',
        '2BL' => 'E02003904',
        '2BN' => 'E02003904',
        '2BP' => 'E02003904',
        '2BQ' => 'E02003904',
        '2BS' => 'E02003904',
        '2BT' => 'E02003901',
        '2BU' => 'E02003904',
        '2BW' => 'E02003904',
        '2BX' => 'E02003904',
        '2BY' => 'E02003904',
        '2BZ' => 'E02003904',
        '2DA' => 'E02003904',
        '2DB' => 'E02003904',
        '2DD' => 'E02003904',
        '2DE' => 'E02003904',
        '2DF' => 'E02003904',
        '2DG' => 'E02003904',
        '2DH' => 'E02003904',
        '2DJ' => 'E02003904',
        '2DL' => 'E02003904',
        '2DN' => 'E02003904',
        '2DP' => 'E02003904',
        '2DQ' => 'E02003904',
        '2DR' => 'E02003904',
        '2DS' => 'E02003904',
        '2DT' => 'E02003904',
        '2DU' => 'E02003904',
        '2DW' => 'E02003904',
        '2DX' => 'E02003904',
        '2DY' => 'E02003904',
        '2DZ' => 'E02003904',
        '2EA' => 'E02003904',
        '2EB' => 'E02003904',
        '2ED' => 'E02003904',
        '2EE' => 'E02003904',
        '2EF' => 'E02003904',
        '2EG' => 'E02003904',
        '2EH' => 'E02003904',
        '2EJ' => 'E02003904',
        '2EL' => 'E02003904',
        '2EN' => 'E02003904',
        '2EP' => 'E02003904',
        '2EQ' => 'E02003904',
        '2ER' => 'E02003904',
        '2ES' => 'E02003904',
        '2ET' => 'E02003904',
        '2EU' => 'E02003904',
        '2EW' => 'E02003904',
        '2EX' => 'E02003904',
        '2EY' => 'E02003904',
        '2EZ' => 'E02003904',
        '2FA' => 'E02003904',
        '2FB' => 'E02003901',
        '2FD' => 'E02003904',
        '2FE' => 'E02003904',
        '2FF' => 'E02003901',
        '2FG' => 'E02003904',
        '2FH' => 'E02003901',
        '2FJ' => 'E02003904',
        '2FL' => 'E02003901',
        '2FN' => 'E02003901',
        '2FT' => 'E02003904',
        '2GZ' => 'E02003901',
        '2HA' => 'E02003904',
        '2HB' => 'E02003904',
        '2HD' => 'E02003904',
        '2HE' => 'E02003904',
        '2HF' => 'E02003904',
        '2HG' => 'E02003904',
        '2HH' => 'E02003904',
        '2HJ' => 'E02003904',
        '2HL' => 'E02003904',
        '2HN' => 'E02003904',
        '2HP' => 'E02003904',
        '2HQ' => 'E02003904',
        '2HR' => 'E02003904',
        '2HS' => 'E02003901',
        '2HT' => 'E02003904',
        '2HU' => 'E02003904',
        '2HW' => 'E02003904',
        '2HX' => 'E02003904',
        '2HY' => 'E02003904',
        '2HZ' => 'E02003904',
        '2JA' => 'E02003904',
        '2JB' => 'E02003904',
        '2JD' => 'E02003904',
        '2JE' => 'E02003904',
        '2JF' => 'E02003904',
        '2JG' => 'E02003904',
        '2JH' => 'E02003904',
        '2JJ' => 'E02003904',
        '2JL' => 'E02003904',
        '2JN' => 'E02003904',
        '2JP' => 'E02003904',
        '2JQ' => 'E02003904',
        '2JR' => 'E02003904',
        '2JS' => 'E02003901',
        '2JT' => 'E02003904',
        '2JU' => 'E02003901',
        '2JW' => 'E02003901',
        '2JX' => 'E02003901',
        '2JY' => 'E02003901',
        '2JZ' => 'E02003901',
        '2LA' => 'E02003901',
        '2LB' => 'E02003901',
        '2LD' => 'E02003901',
        '2LE' => 'E02003901',
        '2LF' => 'E02003901',
        '2LG' => 'E02003901',
        '2LH' => 'E02003901',
        '2LJ' => 'E02003901',
        '2LL' => 'E02003901',
        '2LN' => 'E02003901',
        '2LP' => 'E02003901',
        '2LQ' => 'E02003901',
        '2LR' => 'E02003901',
        '2LS' => 'E02003901',
        '2LT' => 'E02003901',
        '2LU' => 'E02003901',
        '2LW' => 'E02003901',
        '2LX' => 'E02003901',
        '2LY' => 'E02003901',
        '2LZ' => 'E02003901',
        '2NA' => 'E02003901',
        '2NB' => 'E02003901',
        '2ND' => 'E02003901',
        '2NE' => 'E02003904',
        '2NF' => 'E02003904',
        '2NG' => 'E02003901',
        '2NH' => 'E02003901',
        '2NJ' => 'E02003904',
        '2NL' => 'E02003901',
        '2NN' => 'E02003901',
        '2NP' => 'E02003901',
        '2NQ' => 'E02003901',
        '2NR' => 'E02003901',
        '2NS' => 'E02003901',
        '2NT' => 'E02003901',
        '2NU' => 'E02003901',
        '2NW' => 'E02003901',
        '2NX' => 'E02003901',
        '2NY' => 'E02003901',
        '2NZ' => 'E02003901',
        '2PA' => 'E02003901',
        '2PB' => 'E02003901',
        '2PD' => 'E02003901',
        '2PE' => 'E02003901',
        '2PF' => 'E02003901',
        '2PG' => 'E02003901',
        '2PH' => 'E02003904',
        '2PJ' => 'E02003904',
        '2PL' => 'E02003904',
        '2PN' => 'E02003901',
        '2PP' => 'E02003901',
        '2PQ' => 'E02003901',
        '2PR' => 'E02003901',
        '2PS' => 'E02003901',
        '2PT' => 'E02003901',
        '2PU' => 'E02003901',
        '2PW' => 'E02003901',
        '2PX' => 'E02003901',
        '2PY' => 'E02003901',
        '2PZ' => 'E02003901',
        '2QA' => 'E02003901',
        '2QB' => 'E02003901',
        '2QD' => 'E02003901',
        '2QE' => 'E02003901',
        '2QF' => 'E02003901',
        '2QG' => 'E02003901',
        '2QH' => 'E02003901',
        '2QJ' => 'E02003901',
        '2QL' => 'E02003901',
        '2QN' => 'E02003904',
        '2QP' => 'E02003904',
        '2QQ' => 'E02003901',
        '2QR' => 'E02003904',
        '2QS' => 'E02003904',
        '2QT' => 'E02003904',
        '2QU' => 'E02003904',
        '2QW' => 'E02003904',
        '2QX' => 'E02003904',
        '2QY' => 'E02003904',
        '2QZ' => 'E02003904',
        '2RA' => 'E02003904',
        '2RB' => 'E02003904',
        '2RD' => 'E02003904',
        '2RE' => 'E02003904',
        '2RF' => 'E02003904',
        '2RG' => 'E02003904',
        '2RH' => 'E02003904',
        '2RJ' => 'E02003904',
        '2RL' => 'E02003904',
        '2RN' => 'E02003901',
        '2RP' => 'E02003904',
        '2RQ' => 'E02003904',
        '2RR' => 'E02003904',
        '2RS' => 'E02003904',
        '2RT' => 'E02003901',
        '2RU' => 'E02003904',
        '2RW' => 'E02003901',
        '2RX' => 'E02003904',
        '2RY' => 'E02003904',
        '2RZ' => 'E02003904',
        '2SA' => 'E02003904',
        '2SB' => 'E02003904',
        '2SD' => 'E02003904',
        '2SE' => 'E02003904',
        '2SF' => 'E02003901',
        '2SG' => 'E02003904',
        '2SQ' => 'E02003904',
        '2TA' => 'E02003901',
        '2TG' => 'E02003901',
        '2TH' => 'E02003904',
        '2TL' => 'E02003901',
        '2TR' => 'E02003901',
        '2WA' => 'E02003901',
        '2WD' => 'E02003904',
        '2WP' => 'E02003901',
        '2WQ' => 'E02003901',
        '2WR' => 'E02003904',
        '2WS' => 'E02003904',
        '2WT' => 'E02003904',
        '2WU' => 'E02003904',
        '2WW' => 'E02003904',
        '2WX' => 'E02003904',
        '2WY' => 'E02003904',
        '2WZ' => 'E02003904',
        '2XN' => 'E02003904',
        '2XQ' => 'E02003901',
        '2YA' => 'E02003901',
        '2YG' => 'E02003904',
        '2YH' => 'E02003901',
        '2YJ' => 'E02003904',
        '2YL' => 'E02003901',
        '2YN' => 'E02003901',
        '2YP' => 'E02003901',
        '2YR' => 'E02003901',
        '2YS' => 'E02003901',
        '2YT' => 'E02003904',
        '2YU' => 'E02003904',
        '2YW' => 'E02003901',
        '2YX' => 'E02003901',
        '2YY' => 'E02003904',
        '2YZ' => 'E02003901',
        '2ZW' => 'E02003904',
        '2ZX' => 'E02003904',
        '9AD' => 'E02003901',
        '9AE' => 'E02003901',
        '9AF' => 'E02003901',
        '9AH' => 'E02003901',
        '9AJ' => 'E02003901',
        '9AL' => 'E02003904',
        '9AN' => 'E02003904',
        '9AP' => 'E02003904',
        '9AQ' => 'E02003904',
        '9AR' => 'E02003904',
        '9AS' => 'E02003904',
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
