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
final class EX11
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02004136',
        '1AB' => 'E02004136',
        '1AD' => 'E02004136',
        '1AE' => 'E02004136',
        '1AF' => 'E02004136',
        '1AG' => 'E02004136',
        '1AH' => 'E02004136',
        '1AJ' => 'E02004136',
        '1AL' => 'E02004136',
        '1AN' => 'E02004136',
        '1AP' => 'E02004136',
        '1AQ' => 'E02004136',
        '1AR' => 'E02004136',
        '1AS' => 'E02004136',
        '1AT' => 'E02004136',
        '1AU' => 'E02004136',
        '1AW' => 'E02004136',
        '1AX' => 'E02004136',
        '1AY' => 'E02004136',
        '1AZ' => 'E02004136',
        '1BA' => 'E02004136',
        '1BB' => 'E02004136',
        '1BD' => 'E02004136',
        '1BE' => 'E02004136',
        '1BG' => 'E02004136',
        '1BH' => 'E02004136',
        '1BJ' => 'E02004136',
        '1BL' => 'E02004136',
        '1BN' => 'E02004136',
        '1BP' => 'E02004136',
        '1BQ' => 'E02004136',
        '1BR' => 'E02004136',
        '1BS' => 'E02004136',
        '1BT' => 'E02004136',
        '1BU' => 'E02004136',
        '1BW' => 'E02004136',
        '1BX' => 'E02004136',
        '1BY' => 'E02004136',
        '1BZ' => 'E02004136',
        '1DA' => 'E02004136',
        '1DB' => 'E02004136',
        '1DD' => 'E02004136',
        '1DE' => 'E02004136',
        '1DF' => 'E02004136',
        '1DG' => 'E02004136',
        '1DH' => 'E02004136',
        '1DJ' => 'E02004136',
        '1DL' => 'E02004136',
        '1DN' => 'E02004136',
        '1DP' => 'E02004136',
        '1DQ' => 'E02004136',
        '1DR' => 'E02004136',
        '1DS' => 'E02004136',
        '1DT' => 'E02004136',
        '1DU' => 'E02004136',
        '1DW' => 'E02004136',
        '1DX' => 'E02004136',
        '1DY' => 'E02004136',
        '1DZ' => 'E02004136',
        '1EA' => 'E02004136',
        '1EB' => 'E02004136',
        '1ED' => 'E02004136',
        '1EE' => 'E02004136',
        '1EF' => 'E02004136',
        '1EG' => 'E02004136',
        '1EH' => 'E02004136',
        '1EJ' => 'E02004136',
        '1EL' => 'E02004136',
        '1EN' => 'E02004136',
        '1EP' => 'E02004136',
        '1EQ' => 'E02004136',
        '1ER' => 'E02004136',
        '1ES' => 'E02004136',
        '1ET' => 'E02004136',
        '1EU' => 'E02004136',
        '1EW' => 'E02004136',
        '1EX' => 'E02004136',
        '1EY' => 'E02004136',
        '1EZ' => 'E02004136',
        '1FA' => 'E02004136',
        '1FB' => 'E02004136',
        '1FD' => 'E02004136',
        '1FE' => 'E02004132',
        '1FF' => 'E02004136',
        '1FG' => 'E02004136',
        '1FH' => 'E02004136',
        '1FJ' => 'E02004136',
        '1FL' => 'E02004136',
        '1FN' => 'E02004136',
        '1FP' => 'E02004136',
        '1FQ' => 'E02004136',
        '1FR' => 'E02004136',
        '1FS' => 'E02004136',
        '1FT' => 'E02004136',
        '1FU' => 'E02004136',
        '1FW' => 'E02004136',
        '1FX' => 'E02004136',
        '1FY' => 'E02004136',
        '1FZ' => 'E02004136',
        '1GA' => 'E02004136',
        '1GB' => 'E02004136',
        '1GD' => 'E02004136',
        '1GE' => 'E02004136',
        '1GF' => 'E02004136',
        '1GG' => 'E02004136',
        '1GH' => 'E02004136',
        '1GJ' => 'E02004136',
        '1GL' => 'E02004136',
        '1GN' => 'E02004132',
        '1GP' => 'E02004136',
        '1GQ' => 'E02004136',
        '1GS' => 'E02004136',
        '1GU' => 'E02004136',
        '1GX' => 'E02004136',
        '1GY' => 'E02004136',
        '1GZ' => 'E02004136',
        '1HA' => 'E02004136',
        '1HB' => 'E02004136',
        '1HD' => 'E02004136',
        '1HE' => 'E02004136',
        '1HF' => 'E02004136',
        '1HG' => 'E02004136',
        '1HH' => 'E02004136',
        '1HJ' => 'E02004136',
        '1HL' => 'E02004136',
        '1HN' => 'E02004136',
        '1HP' => 'E02004136',
        '1HQ' => 'E02004136',
        '1HR' => 'E02004136',
        '1HS' => 'E02004136',
        '1HT' => 'E02004136',
        '1HU' => 'E02004136',
        '1HW' => 'E02004136',
        '1HX' => 'E02004136',
        '1HY' => 'E02004136',
        '1HZ' => 'E02004136',
        '1JA' => 'E02004136',
        '1JB' => 'E02004136',
        '1JD' => 'E02004136',
        '1JE' => 'E02004136',
        '1JF' => 'E02004136',
        '1JG' => 'E02004136',
        '1JH' => 'E02004136',
        '1JJ' => 'E02004136',
        '1JL' => 'E02004136',
        '1JN' => 'E02004136',
        '1JP' => 'E02004136',
        '1JQ' => 'E02004136',
        '1JR' => 'E02004136',
        '1JS' => 'E02004132',
        '1JT' => 'E02004132',
        '1JU' => 'E02004136',
        '1JW' => 'E02004136',
        '1JX' => 'E02004132',
        '1JY' => 'E02004136',
        '1JZ' => 'E02004132',
        '1LA' => 'E02004134',
        '1LB' => 'E02004132',
        '1LD' => 'E02004132',
        '1LE' => 'E02004132',
        '1LF' => 'E02004132',
        '1LG' => 'E02004132',
        '1LH' => 'E02004132',
        '1LJ' => 'E02004132',
        '1LL' => 'E02004132',
        '1LN' => 'E02004132',
        '1LP' => 'E02004132',
        '1LQ' => 'E02004132',
        '1LR' => 'E02004132',
        '1LS' => 'E02004132',
        '1LT' => 'E02004132',
        '1LU' => 'E02004132',
        '1LW' => 'E02004132',
        '1LX' => 'E02004132',
        '1LY' => 'E02004132',
        '1LZ' => 'E02004132',
        '1NA' => 'E02004132',
        '1NB' => 'E02004132',
        '1ND' => 'E02004132',
        '1NE' => 'E02004132',
        '1NF' => 'E02004132',
        '1NG' => 'E02004132',
        '1NH' => 'E02004132',
        '1NJ' => 'E02004132',
        '1NL' => 'E02004132',
        '1NN' => 'E02004132',
        '1NP' => 'E02004136',
        '1NQ' => 'E02004132',
        '1NR' => 'E02004136',
        '1NS' => 'E02004132',
        '1NT' => 'E02004136',
        '1NU' => 'E02004132',
        '1NW' => 'E02004132',
        '1NX' => 'E02004132',
        '1NY' => 'E02004132',
        '1NZ' => 'E02004132',
        '1PA' => 'E02004132',
        '1PB' => 'E02004132',
        '1PD' => 'E02004132',
        '1PE' => 'E02004132',
        '1PF' => 'E02004132',
        '1PG' => 'E02004132',
        '1PH' => 'E02004136',
        '1PJ' => 'E02004136',
        '1PL' => 'E02004136',
        '1PN' => 'E02004136',
        '1PP' => 'E02004136',
        '1PQ' => 'E02004132',
        '1PR' => 'E02004136',
        '1PS' => 'E02004136',
        '1PT' => 'E02004136',
        '1PU' => 'E02004136',
        '1PW' => 'E02004136',
        '1PX' => 'E02004136',
        '1PY' => 'E02004136',
        '1PZ' => 'E02004136',
        '1QA' => 'E02004136',
        '1QB' => 'E02004136',
        '1QD' => 'E02004136',
        '1QE' => 'E02004136',
        '1QF' => 'E02004136',
        '1QG' => 'E02004136',
        '1QH' => 'E02004136',
        '1QJ' => 'E02004136',
        '1QL' => 'E02004136',
        '1QN' => 'E02004136',
        '1QP' => 'E02004136',
        '1QQ' => 'E02004136',
        '1QR' => 'E02004136',
        '1QS' => 'E02004136',
        '1QT' => 'E02004132',
        '1QU' => 'E02004132',
        '1QW' => 'E02004132',
        '1QX' => 'E02004132',
        '1QY' => 'E02004132',
        '1QZ' => 'E02004136',
        '1RA' => 'E02004136',
        '1RB' => 'E02004132',
        '1RD' => 'E02004132',
        '1RE' => 'E02004136',
        '1RF' => 'E02004136',
        '1RG' => 'E02004136',
        '1RH' => 'E02004136',
        '1RJ' => 'E02004136',
        '1RL' => 'E02004136',
        '1RN' => 'E02004136',
        '1RP' => 'E02004136',
        '1RQ' => 'E02004132',
        '1RR' => 'E02004136',
        '1RS' => 'E02004136',
        '1RT' => 'E02004136',
        '1RU' => 'E02004136',
        '1RW' => 'E02004136',
        '1RX' => 'E02004141',
        '1RY' => 'E02004141',
        '1RZ' => 'E02004141',
        '1SA' => 'E02004141',
        '1SB' => 'E02004141',
        '1SD' => 'E02004141',
        '1SE' => 'E02004141',
        '1SF' => 'E02004141',
        '1SG' => 'E02004141',
        '1SH' => 'E02004136',
        '1SJ' => 'E02004136',
        '1SL' => 'E02004136',
        '1SN' => 'E02004136',
        '1SP' => 'E02004136',
        '1SQ' => 'E02004136',
        '1SR' => 'E02004136',
        '1SS' => 'E02004136',
        '1ST' => 'E02004136',
        '1SU' => 'E02004136',
        '1SW' => 'E02004136',
        '1SX' => 'E02004136',
        '1SY' => 'E02004136',
        '1SZ' => 'E02004136',
        '1TA' => 'E02004136',
        '1TB' => 'E02004136',
        '1TD' => 'E02004136',
        '1TE' => 'E02004136',
        '1TF' => 'E02004136',
        '1TG' => 'E02004136',
        '1TH' => 'E02004136',
        '1TJ' => 'E02004136',
        '1TL' => 'E02004132',
        '1TN' => 'E02004136',
        '1TP' => 'E02004132',
        '1TQ' => 'E02004136',
        '1TR' => 'E02004132',
        '1TS' => 'E02004132',
        '1TT' => 'E02004132',
        '1TU' => 'E02004136',
        '1TW' => 'E02004136',
        '1TX' => 'E02004136',
        '1TY' => 'E02004136',
        '1TZ' => 'E02004136',
        '1UA' => 'E02004136',
        '1UB' => 'E02004136',
        '1UD' => 'E02004136',
        '1UE' => 'E02004136',
        '1UF' => 'E02004136',
        '1UG' => 'E02004136',
        '1UH' => 'E02004136',
        '1UJ' => 'E02004136',
        '1UL' => 'E02004136',
        '1UN' => 'E02004136',
        '1UP' => 'E02004136',
        '1UQ' => 'E02004136',
        '1UR' => 'E02004132',
        '1US' => 'E02004136',
        '1UT' => 'E02004132',
        '1UU' => 'E02004136',
        '1UW' => 'E02004132',
        '1UX' => 'E02004136',
        '1UY' => 'E02004136',
        '1UZ' => 'E02004136',
        '1WB' => 'E02004136',
        '1WD' => 'E02004136',
        '1WE' => 'E02004136',
        '1WF' => 'E02004136',
        '1WG' => 'E02004136',
        '1WH' => 'E02004132',
        '1WJ' => 'E02004136',
        '1WL' => 'E02004136',
        '1WN' => 'E02004136',
        '1WP' => 'E02004136',
        '1WQ' => 'E02004136',
        '1WR' => 'E02004136',
        '1WS' => 'E02004136',
        '1WT' => 'E02004136',
        '1WU' => 'E02004136',
        '1WW' => 'E02004136',
        '1WX' => 'E02004136',
        '1WY' => 'E02004136',
        '1WZ' => 'E02004136',
        '1XA' => 'E02004136',
        '1XB' => 'E02004136',
        '1XD' => 'E02004136',
        '1XE' => 'E02004136',
        '1XF' => 'E02004136',
        '1XG' => 'E02004136',
        '1XH' => 'E02004136',
        '1XJ' => 'E02004136',
        '1XL' => 'E02004136',
        '1XN' => 'E02004136',
        '1XP' => 'E02004136',
        '1XQ' => 'E02004136',
        '1XR' => 'E02004136',
        '1XS' => 'E02004136',
        '1XT' => 'E02004136',
        '1XU' => 'E02004136',
        '1XW' => 'E02004136',
        '1XX' => 'E02004136',
        '1XY' => 'E02004136',
        '1XZ' => 'E02004136',
        '1YA' => 'E02004136',
        '1YB' => 'E02004136',
        '1YD' => 'E02004136',
        '1YE' => 'E02004136',
        '1YF' => 'E02004136',
        '1YG' => 'E02004136',
        '1YH' => 'E02004136',
        '1YJ' => 'E02004136',
        '1YL' => 'E02004136',
        '1YN' => 'E02004136',
        '1YP' => 'E02004136',
        '1YQ' => 'E02004136',
        '1YR' => 'E02004136',
        '1YS' => 'E02004136',
        '1YT' => 'E02004136',
        '1YU' => 'E02004136',
        '1YW' => 'E02004136',
        '1YX' => 'E02004136',
        '1YY' => 'E02004136',
        '1ZA' => 'E02004136',
        '1ZB' => 'E02004136',
        '1ZD' => 'E02004136',
        '1ZE' => 'E02004136',
        '1ZF' => 'E02004136',
        '1ZG' => 'E02004136',
        '1ZH' => 'E02004136',
        '1ZJ' => 'E02004136',
        '1ZN' => 'E02004136',
        '1ZP' => 'E02004136',
        '1ZQ' => 'E02004136',
        '1ZR' => 'E02004136',
        '1ZS' => 'E02004136',
        '1ZT' => 'E02004136',
        '1ZU' => 'E02004136',
        '1ZW' => 'E02004136',
        '1ZX' => 'E02004136',
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