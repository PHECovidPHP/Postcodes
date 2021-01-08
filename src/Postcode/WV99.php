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
final class WV99
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02002945',
        '1AB' => 'E02002945',
        '1AD' => 'E02002945',
        '1AE' => 'E02002945',
        '1AF' => 'E02002945',
        '1AG' => 'E02002945',
        '1AH' => 'E02002945',
        '1AJ' => 'E02002945',
        '1AL' => 'E02002945',
        '1AN' => 'E02002945',
        '1AP' => 'E02002945',
        '1AQ' => 'E02002945',
        '1AR' => 'E02002945',
        '1AS' => 'E02002945',
        '1AT' => 'E02002945',
        '1AU' => 'E02002945',
        '1AW' => 'E02002945',
        '1AX' => 'E02002945',
        '1AZ' => 'E02002945',
        '1BA' => 'E02002945',
        '1BB' => 'E02002945',
        '1BD' => 'E02002945',
        '1BE' => 'E02002945',
        '1BF' => 'E02002945',
        '1BG' => 'E02002945',
        '1BH' => 'E02002945',
        '1BJ' => 'E02002945',
        '1BL' => 'E02002945',
        '1BN' => 'E02002945',
        '1BP' => 'E02002945',
        '1BQ' => 'E02002945',
        '1BR' => 'E02002945',
        '1BS' => 'E02002945',
        '1BT' => 'E02002945',
        '1BU' => 'E02002945',
        '1BW' => 'E02002945',
        '1BX' => 'E02002945',
        '1BY' => 'E02002945',
        '1BZ' => 'E02002945',
        '1DA' => 'E02002945',
        '1DD' => 'E02002945',
        '1DE' => 'E02002945',
        '1DF' => 'E02002945',
        '1DG' => 'E02002945',
        '1DH' => 'E02002945',
        '1DJ' => 'E02002945',
        '1DL' => 'E02002945',
        '1DN' => 'E02002945',
        '1DP' => 'E02002945',
        '1DQ' => 'E02002945',
        '1DR' => 'E02002945',
        '1DS' => 'E02002945',
        '1DT' => 'E02002945',
        '1DU' => 'E02002945',
        '1DW' => 'E02002945',
        '1DX' => 'E02002945',
        '1DY' => 'E02002945',
        '1DZ' => 'E02002945',
        '1EA' => 'E02002945',
        '1EB' => 'E02002945',
        '1ED' => 'E02002945',
        '1EE' => 'E02002945',
        '1EF' => 'E02002945',
        '1EG' => 'E02002945',
        '1EH' => 'E02002945',
        '1EJ' => 'E02002945',
        '1EL' => 'E02002945',
        '1EN' => 'E02002945',
        '1EP' => 'E02002945',
        '1EQ' => 'E02002945',
        '1ER' => 'E02002945',
        '1ES' => 'E02002945',
        '1ET' => 'E02002945',
        '1EU' => 'E02002945',
        '1EW' => 'E02002945',
        '1EX' => 'E02002945',
        '1EY' => 'E02002945',
        '1EZ' => 'E02002945',
        '1FA' => 'E02002945',
        '1FB' => 'E02002945',
        '1FD' => 'E02002945',
        '1FE' => 'E02002945',
        '1FF' => 'E02002945',
        '1FG' => 'E02002945',
        '1FH' => 'E02002945',
        '1FJ' => 'E02002945',
        '1FL' => 'E02002945',
        '1FN' => 'E02002945',
        '1FP' => 'E02002945',
        '1FQ' => 'E02002945',
        '1FR' => 'E02002945',
        '1FS' => 'E02002945',
        '1FT' => 'E02002945',
        '1FU' => 'E02002945',
        '1FW' => 'E02002945',
        '1FX' => 'E02002945',
        '1FY' => 'E02002945',
        '1FZ' => 'E02002945',
        '1GA' => 'E02002945',
        '1GB' => 'E02002945',
        '1GD' => 'E02002945',
        '1GE' => 'E02002945',
        '1GF' => 'E02002945',
        '1GG' => 'E02002945',
        '1GH' => 'E02002945',
        '1GJ' => 'E02002945',
        '1GL' => 'E02002945',
        '1GN' => 'E02002945',
        '1GP' => 'E02002945',
        '1GQ' => 'E02002945',
        '1GR' => 'E02002945',
        '1GS' => 'E02002945',
        '1GT' => 'E02002945',
        '1GU' => 'E02002945',
        '1GW' => 'E02002945',
        '1GX' => 'E02002945',
        '1GY' => 'E02002945',
        '1GZ' => 'E02002945',
        '1HA' => 'E02002945',
        '1HB' => 'E02002945',
        '1HD' => 'E02002945',
        '1HE' => 'E02002945',
        '1HF' => 'E02002945',
        '1HG' => 'E02002945',
        '1HH' => 'E02002945',
        '1HJ' => 'E02002945',
        '1HL' => 'E02002945',
        '1HN' => 'E02002945',
        '1HP' => 'E02002945',
        '1HQ' => 'E02002945',
        '1HR' => 'E02002945',
        '1HS' => 'E02002945',
        '1HT' => 'E02002945',
        '1HU' => 'E02002945',
        '1HW' => 'E02002945',
        '1HX' => 'E02002945',
        '1HY' => 'E02002945',
        '1HZ' => 'E02002945',
        '1JA' => 'E02002945',
        '1JB' => 'E02002945',
        '1JD' => 'E02002945',
        '1JE' => 'E02002945',
        '1JF' => 'E02002945',
        '1JG' => 'E02002945',
        '1JH' => 'E02002945',
        '1JJ' => 'E02002945',
        '1JL' => 'E02002945',
        '1JN' => 'E02002945',
        '1JP' => 'E02002945',
        '1JQ' => 'E02002945',
        '1JR' => 'E02002945',
        '1JS' => 'E02002945',
        '1JT' => 'E02002945',
        '1JU' => 'E02002945',
        '1JW' => 'E02002945',
        '1JX' => 'E02002945',
        '1JY' => 'E02002945',
        '1JZ' => 'E02002945',
        '1LA' => 'E02002945',
        '1LB' => 'E02002945',
        '1LD' => 'E02002945',
        '1LE' => 'E02002945',
        '1LF' => 'E02002945',
        '1LG' => 'E02002945',
        '1LH' => 'E02002945',
        '1LJ' => 'E02002945',
        '1LL' => 'E02002945',
        '1LN' => 'E02002945',
        '1LP' => 'E02002945',
        '1LQ' => 'E02002945',
        '1LR' => 'E02002945',
        '1LS' => 'E02002945',
        '1LT' => 'E02002945',
        '1LU' => 'E02002945',
        '1LW' => 'E02002945',
        '1LX' => 'E02002945',
        '1LY' => 'E02002945',
        '1LZ' => 'E02002945',
        '1NA' => 'E02002945',
        '1NB' => 'E02002945',
        '1ND' => 'E02002945',
        '1NE' => 'E02002945',
        '1NF' => 'E02002945',
        '1NG' => 'E02002945',
        '1NH' => 'E02002945',
        '1NJ' => 'E02002945',
        '1NL' => 'E02002945',
        '1NN' => 'E02002945',
        '1NP' => 'E02002945',
        '1NQ' => 'E02002945',
        '1NR' => 'E02002945',
        '1NS' => 'E02002945',
        '1NT' => 'E02002945',
        '1NU' => 'E02002945',
        '1NW' => 'E02002945',
        '1NX' => 'E02002945',
        '1NY' => 'E02002945',
        '1NZ' => 'E02002945',
        '1PA' => 'E02002945',
        '1PB' => 'E02002945',
        '1PD' => 'E02002945',
        '1PE' => 'E02002945',
        '1PF' => 'E02002945',
        '1PG' => 'E02002945',
        '1PH' => 'E02002945',
        '1PJ' => 'E02002945',
        '1PL' => 'E02002945',
        '1PN' => 'E02002945',
        '1PP' => 'E02002945',
        '1PQ' => 'E02002945',
        '1PR' => 'E02002945',
        '1PS' => 'E02002945',
        '1PT' => 'E02002945',
        '1PU' => 'E02002945',
        '1PW' => 'E02002945',
        '1PY' => 'E02002945',
        '1PZ' => 'E02002945',
        '1QA' => 'E02002945',
        '1QB' => 'E02002945',
        '1QD' => 'E02002945',
        '1QE' => 'E02002945',
        '1QF' => 'E02002945',
        '1QG' => 'E02002945',
        '1QH' => 'E02002945',
        '1QJ' => 'E02002945',
        '1QL' => 'E02002945',
        '1QN' => 'E02002945',
        '1QP' => 'E02002945',
        '1QQ' => 'E02002945',
        '1QR' => 'E02002945',
        '1QS' => 'E02002945',
        '1QT' => 'E02002945',
        '1QU' => 'E02002945',
        '1QW' => 'E02002945',
        '1QX' => 'E02002945',
        '1QY' => 'E02002945',
        '1QZ' => 'E02002945',
        '1RA' => 'E02002945',
        '1RB' => 'E02002945',
        '1RD' => 'E02002945',
        '1RE' => 'E02002945',
        '1RF' => 'E02002945',
        '1RG' => 'E02002945',
        '1RH' => 'E02002945',
        '1RJ' => 'E02002945',
        '1RL' => 'E02002945',
        '1RN' => 'E02002945',
        '1RP' => 'E02002945',
        '1RQ' => 'E02002945',
        '1RR' => 'E02002945',
        '1RS' => 'E02002945',
        '1RT' => 'E02002945',
        '1RU' => 'E02002945',
        '1RW' => 'E02002945',
        '1RX' => 'E02002945',
        '1RY' => 'E02002945',
        '1RZ' => 'E02002945',
        '1SA' => 'E02002945',
        '1SB' => 'E02002945',
        '1SD' => 'E02002945',
        '1SE' => 'E02002945',
        '1SF' => 'E02002945',
        '1SG' => 'E02002945',
        '1SH' => 'E02002945',
        '1SJ' => 'E02002945',
        '1SL' => 'E02002945',
        '1SN' => 'E02002945',
        '1SP' => 'E02002945',
        '1SQ' => 'E02002945',
        '1SR' => 'E02002945',
        '1SS' => 'E02002945',
        '1ST' => 'E02002945',
        '1SU' => 'E02002945',
        '1SW' => 'E02002945',
        '1SX' => 'E02002945',
        '1SY' => 'E02002945',
        '1SZ' => 'E02002945',
        '1TA' => 'E02002945',
        '1TB' => 'E02002945',
        '1TD' => 'E02002945',
        '1TE' => 'E02002945',
        '1TF' => 'E02002945',
        '1TG' => 'E02002945',
        '1TH' => 'E02002945',
        '1TJ' => 'E02002945',
        '1TL' => 'E02002945',
        '1TN' => 'E02002945',
        '1TP' => 'E02002945',
        '1TR' => 'E02002945',
        '1TS' => 'E02002945',
        '1TT' => 'E02002945',
        '1TW' => 'E02002945',
        '1TX' => 'E02002945',
        '1TY' => 'E02002945',
        '1TZ' => 'E02002945',
        '1UA' => 'E02002945',
        '1UB' => 'E02002945',
        '1UD' => 'E02002945',
        '1UE' => 'E02002945',
        '1UF' => 'E02002945',
        '1UG' => 'E02002945',
        '1UH' => 'E02002945',
        '1UJ' => 'E02002945',
        '1UL' => 'E02002945',
        '1UN' => 'E02002945',
        '1UP' => 'E02002945',
        '1UQ' => 'E02002945',
        '1UR' => 'E02002945',
        '1US' => 'E02002945',
        '1UT' => 'E02002945',
        '1UU' => 'E02002945',
        '1UW' => 'E02002945',
        '1UX' => 'E02002945',
        '1UY' => 'E02002945',
        '1UZ' => 'E02002945',
        '1WA' => 'E02002945',
        '1WB' => 'E02002945',
        '1WD' => 'E02002945',
        '1WE' => 'E02002945',
        '1WF' => 'E02002945',
        '1WG' => 'E02002945',
        '1WH' => 'E02002945',
        '1WJ' => 'E02002945',
        '1WL' => 'E02002945',
        '1WN' => 'E02002945',
        '1WP' => 'E02002945',
        '1WQ' => 'E02002945',
        '1WR' => 'E02002945',
        '1WS' => 'E02002945',
        '1WT' => 'E02002945',
        '1WU' => 'E02002945',
        '1WW' => 'E02002945',
        '1WX' => 'E02002945',
        '1WY' => 'E02002945',
        '1WZ' => 'E02002945',
        '1XA' => 'E02002945',
        '1XB' => 'E02002945',
        '1XD' => 'E02002945',
        '1XE' => 'E02002945',
        '1XF' => 'E02002945',
        '1XG' => 'E02002945',
        '1XH' => 'E02002945',
        '1XJ' => 'E02002945',
        '1XL' => 'E02002945',
        '1XN' => 'E02002945',
        '1XP' => 'E02002945',
        '1XQ' => 'E02002945',
        '1XR' => 'E02002945',
        '1XS' => 'E02002945',
        '1XT' => 'E02002945',
        '1XU' => 'E02002945',
        '1XW' => 'E02002945',
        '1XX' => 'E02002945',
        '1XY' => 'E02002945',
        '1XZ' => 'E02002945',
        '1YA' => 'E02002945',
        '1YB' => 'E02002945',
        '1YD' => 'E02002945',
        '1YE' => 'E02002945',
        '1YF' => 'E02002945',
        '1YG' => 'E02002945',
        '1YH' => 'E02002945',
        '1YJ' => 'E02002945',
        '1YL' => 'E02002945',
        '1YN' => 'E02002945',
        '1YP' => 'E02002945',
        '1YQ' => 'E02002945',
        '1YR' => 'E02002945',
        '1YS' => 'E02002945',
        '1YT' => 'E02002945',
        '1YU' => 'E02002945',
        '1YW' => 'E02002945',
        '1YX' => 'E02002945',
        '1YY' => 'E02002945',
        '1YZ' => 'E02002945',
        '1ZA' => 'E02002945',
        '1ZB' => 'E02002945',
        '1ZD' => 'E02002945',
        '1ZE' => 'E02002945',
        '1ZF' => 'E02002945',
        '1ZG' => 'E02002945',
        '1ZH' => 'E02002945',
        '1ZJ' => 'E02002945',
        '1ZL' => 'E02002945',
        '1ZN' => 'E02002945',
        '1ZP' => 'E02002945',
        '1ZQ' => 'E02002945',
        '1ZR' => 'E02002945',
        '1ZS' => 'E02002945',
        '1ZT' => 'E02002945',
        '1ZU' => 'E02002945',
        '1ZW' => 'E02002945',
        '1ZX' => 'E02002945',
        '1ZY' => 'E02002945',
        '1ZZ' => 'E02002945',
        '2AA' => 'E02002945',
        '2AB' => 'E02002945',
        '2AD' => 'E02002945',
        '2AE' => 'E02002945',
        '2AF' => 'E02002945',
        '2AG' => 'E02002945',
        '2AH' => 'E02002945',
        '2AJ' => 'E02002945',
        '2AL' => 'E02002945',
        '2AN' => 'E02002945',
        '2AP' => 'E02002945',
        '2AQ' => 'E02002945',
        '2AR' => 'E02002945',
        '2AS' => 'E02002945',
        '2AT' => 'E02002945',
        '2AU' => 'E02002945',
        '2AW' => 'E02002945',
        '2AX' => 'E02002945',
        '2AY' => 'E02002945',
        '2AZ' => 'E02002945',
        '2BA' => 'E02002945',
        '2BB' => 'E02002945',
        '2BD' => 'E02002945',
        '2BE' => 'E02002945',
        '2BF' => 'E02002945',
        '2BG' => 'E02002945',
        '2BH' => 'E02002945',
        '2BJ' => 'E02002945',
        '2BL' => 'E02002945',
        '2BN' => 'E02002945',
        '2BP' => 'E02002945',
        '2BQ' => 'E02002945',
        '2BR' => 'E02002945',
        '2BS' => 'E02002945',
        '2BT' => 'E02002945',
        '2BU' => 'E02002945',
        '2BW' => 'E02002945',
        '2BX' => 'E02002945',
        '2BY' => 'E02002945',
        '2BZ' => 'E02002945',
        '2DA' => 'E02002945',
        '2DB' => 'E02002945',
        '2DD' => 'E02002945',
        '2DE' => 'E02002945',
        '2DF' => 'E02002945',
        '2DG' => 'E02002945',
        '2DH' => 'E02002945',
        '2DJ' => 'E02002945',
        '2DL' => 'E02002945',
        '2DN' => 'E02002945',
        '2DP' => 'E02002945',
        '2DQ' => 'E02002945',
        '2DR' => 'E02002945',
        '2DS' => 'E02002945',
        '2DT' => 'E02002945',
        '2DU' => 'E02002945',
        '2DW' => 'E02002945',
        '2DX' => 'E02002945',
        '2DY' => 'E02002945',
        '2DZ' => 'E02002945',
        '2EA' => 'E02002945',
        '2EB' => 'E02002945',
        '2ED' => 'E02002945',
        '2EE' => 'E02002945',
        '2EF' => 'E02002945',
        '2EG' => 'E02002945',
        '2EH' => 'E02002945',
        '2EJ' => 'E02002945',
        '2EL' => 'E02002945',
        '2EN' => 'E02002945',
        '2EP' => 'E02002945',
        '2EQ' => 'E02002945',
        '2ER' => 'E02002945',
        '2ES' => 'E02002945',
        '2ET' => 'E02002945',
        '2EU' => 'E02002945',
        '2EW' => 'E02002945',
        '2EX' => 'E02002945',
        '2EY' => 'E02002945',
        '2EZ' => 'E02002945',
        '2FA' => 'E02002945',
        '2FB' => 'E02002945',
        '2FD' => 'E02002945',
        '2FE' => 'E02002945',
        '2FF' => 'E02002945',
        '2FG' => 'E02002945',
        '2FH' => 'E02002945',
        '2FJ' => 'E02002945',
        '2FL' => 'E02002945',
        '2FN' => 'E02002945',
        '2FP' => 'E02002945',
        '2FQ' => 'E02002945',
        '2FR' => 'E02002945',
        '2FS' => 'E02002945',
        '2FT' => 'E02002945',
        '2FU' => 'E02002945',
        '2FW' => 'E02002945',
        '2FX' => 'E02002945',
        '2FY' => 'E02002945',
        '2FZ' => 'E02002945',
        '2GA' => 'E02002945',
        '2GB' => 'E02002945',
        '2GD' => 'E02002945',
        '2GE' => 'E02002945',
        '2GF' => 'E02002945',
        '2GG' => 'E02002945',
        '2GH' => 'E02002945',
        '2GJ' => 'E02002945',
        '2GL' => 'E02002945',
        '2GN' => 'E02002945',
        '2GP' => 'E02002945',
        '2GQ' => 'E02002945',
        '2GR' => 'E02002945',
        '2GS' => 'E02002945',
        '2GT' => 'E02002945',
        '2GU' => 'E02002945',
        '2GW' => 'E02002945',
        '2GX' => 'E02002945',
        '2GY' => 'E02002945',
        '2GZ' => 'E02002945',
        '2HA' => 'E02002945',
        '2HB' => 'E02002945',
        '2HD' => 'E02002945',
        '2ND' => 'E02002945',
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