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
final class OX33
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AB' => 'E02005961',
        '1AD' => 'E02005936',
        '1AE' => 'E02005936',
        '1AF' => 'E02005959',
        '1AG' => 'E02005959',
        '1AH' => 'E02005959',
        '1AJ' => 'E02005959',
        '1AL' => 'E02005959',
        '1AN' => 'E02005936',
        '1AP' => 'E02005936',
        '1AQ' => 'E02005959',
        '1AR' => 'E02005936',
        '1AS' => 'E02005936',
        '1AT' => 'E02005936',
        '1AU' => 'E02005936',
        '1AW' => 'E02005936',
        '1AX' => 'E02005936',
        '1AY' => 'E02005936',
        '1AZ' => 'E02005936',
        '1BA' => 'E02005936',
        '1BB' => 'E02005936',
        '1BD' => 'E02005936',
        '1BE' => 'E02005936',
        '1BF' => 'E02005936',
        '1BG' => 'E02005936',
        '1BH' => 'E02005936',
        '1BJ' => 'E02005936',
        '1BL' => 'E02005936',
        '1BN' => 'E02005936',
        '1BP' => 'E02005936',
        '1BQ' => 'E02005936',
        '1BS' => 'E02005936',
        '1BT' => 'E02005936',
        '1BU' => 'E02005936',
        '1BW' => 'E02005936',
        '1BX' => 'E02005936',
        '1BY' => 'E02005936',
        '1BZ' => 'E02005936',
        '1DA' => 'E02005936',
        '1DB' => 'E02005936',
        '1DD' => 'E02005936',
        '1DE' => 'E02003661',
        '1DF' => 'E02005936',
        '1DG' => 'E02003661',
        '1DH' => 'E02005936',
        '1DJ' => 'E02005961',
        '1DL' => 'E02005936',
        '1DN' => 'E02005959',
        '1DP' => 'E02005961',
        '1DQ' => 'E02003661',
        '1DR' => 'E02005959',
        '1DS' => 'E02005959',
        '1DT' => 'E02005959',
        '1DU' => 'E02005959',
        '1DW' => 'E02005959',
        '1DX' => 'E02005959',
        '1DY' => 'E02005959',
        '1DZ' => 'E02005959',
        '1EA' => 'E02005959',
        '1EB' => 'E02005959',
        '1ED' => 'E02005959',
        '1EE' => 'E02005959',
        '1EF' => 'E02005959',
        '1EG' => 'E02005959',
        '1EH' => 'E02005959',
        '1EJ' => 'E02005959',
        '1EL' => 'E02005959',
        '1EN' => 'E02005959',
        '1EP' => 'E02005959',
        '1EQ' => 'E02005959',
        '1ER' => 'E02005961',
        '1ES' => 'E02005959',
        '1ET' => 'E02005959',
        '1EU' => 'E02005959',
        '1EW' => 'E02005959',
        '1EX' => 'E02005959',
        '1EY' => 'E02005959',
        '1EZ' => 'E02005959',
        '1FA' => 'E02005961',
        '1FB' => 'E02005959',
        '1FD' => 'E02005947',
        '1FE' => 'E02005961',
        '1FF' => 'E02005959',
        '1FG' => 'E02005959',
        '1FH' => 'E02005961',
        '1FJ' => 'E02005947',
        '1FL' => 'E02005961',
        '1FN' => 'E02005959',
        '1FP' => 'E02005961',
        '1FQ' => 'E02005959',
        '1FR' => 'E02005961',
        '1FS' => 'E02005961',
        '1FT' => 'E02005961',
        '1FU' => 'E02005961',
        '1FW' => 'E02005959',
        '1FX' => 'E02005961',
        '1FY' => 'E02005959',
        '1GA' => 'E02005959',
        '1GB' => 'E02005947',
        '1GD' => 'E02005961',
        '1GH' => 'E02005961',
        '1GJ' => 'E02005961',
        '1GL' => 'E02005961',
        '1GP' => 'E02005961',
        '1GR' => 'E02005961',
        '1GS' => 'E02005959',
        '1GT' => 'E02005947',
        '1GU' => 'E02005955',
        '1GX' => 'E02005961',
        '1HA' => 'E02005959',
        '1HB' => 'E02005959',
        '1HD' => 'E02005959',
        '1HE' => 'E02005959',
        '1HF' => 'E02005959',
        '1HG' => 'E02005959',
        '1HH' => 'E02005959',
        '1HJ' => 'E02005959',
        '1HL' => 'E02005959',
        '1HN' => 'E02005959',
        '1HP' => 'E02005959',
        '1HQ' => 'E02005959',
        '1HR' => 'E02005959',
        '1HS' => 'E02005959',
        '1HT' => 'E02005961',
        '1HU' => 'E02005961',
        '1HW' => 'E02005959',
        '1HX' => 'E02005959',
        '1HY' => 'E02005961',
        '1HZ' => 'E02005959',
        '1JA' => 'E02005959',
        '1JB' => 'E02005959',
        '1JD' => 'E02005959',
        '1JE' => 'E02005961',
        '1JF' => 'E02005959',
        '1JG' => 'E02005961',
        '1JH' => 'E02005961',
        '1JJ' => 'E02005961',
        '1JL' => 'E02005961',
        '1JN' => 'E02005961',
        '1JP' => 'E02005961',
        '1JQ' => 'E02005961',
        '1JR' => 'E02005961',
        '1JS' => 'E02005961',
        '1JT' => 'E02005961',
        '1JU' => 'E02005961',
        '1JW' => 'E02005961',
        '1JX' => 'E02005961',
        '1JY' => 'E02005961',
        '1JZ' => 'E02005961',
        '1LA' => 'E02005961',
        '1LB' => 'E02005961',
        '1LD' => 'E02005961',
        '1LE' => 'E02005961',
        '1LF' => 'E02005961',
        '1LG' => 'E02005961',
        '1LH' => 'E02005961',
        '1LJ' => 'E02005961',
        '1LL' => 'E02005961',
        '1LP' => 'E02005947',
        '1LQ' => 'E02005961',
        '1LR' => 'E02005961',
        '1LS' => 'E02005961',
        '1LT' => 'E02005961',
        '1LU' => 'E02005961',
        '1LW' => 'E02005947',
        '1LX' => 'E02005961',
        '1LY' => 'E02005961',
        '1LZ' => 'E02005961',
        '1NA' => 'E02005961',
        '1NB' => 'E02005961',
        '1ND' => 'E02005961',
        '1NE' => 'E02005961',
        '1NF' => 'E02005961',
        '1NG' => 'E02005961',
        '1NH' => 'E02005961',
        '1NJ' => 'E02005961',
        '1NL' => 'E02005961',
        '1NN' => 'E02005961',
        '1NP' => 'E02005961',
        '1NQ' => 'E02005961',
        '1NR' => 'E02005961',
        '1NS' => 'E02005961',
        '1NT' => 'E02005961',
        '1NU' => 'E02005961',
        '1NW' => 'E02005961',
        '1NX' => 'E02005961',
        '1NY' => 'E02005959',
        '1NZ' => 'E02005961',
        '1PA' => 'E02005961',
        '1PB' => 'E02005961',
        '1PD' => 'E02005961',
        '1PE' => 'E02005959',
        '1PH' => 'E02005961',
        '1PJ' => 'E02005959',
        '1PL' => 'E02005959',
        '1PN' => 'E02005959',
        '1PP' => 'E02005959',
        '1PR' => 'E02005959',
        '1PS' => 'E02005959',
        '1PT' => 'E02005959',
        '1PU' => 'E02005959',
        '1PW' => 'E02005959',
        '1PX' => 'E02005959',
        '1PY' => 'E02005959',
        '1PZ' => 'E02005959',
        '1QA' => 'E02005959',
        '1QB' => 'E02005959',
        '1QD' => 'E02005959',
        '1QE' => 'E02005959',
        '1QF' => 'E02005959',
        '1QG' => 'E02005959',
        '1QH' => 'E02005959',
        '1QJ' => 'E02005959',
        '1QL' => 'E02005959',
        '1QN' => 'E02005961',
        '1QP' => 'E02005959',
        '1QQ' => 'E02005959',
        '1QR' => 'E02005959',
        '1QS' => 'E02005959',
        '1QT' => 'E02005959',
        '1QU' => 'E02005959',
        '1QW' => 'E02005959',
        '1QX' => 'E02005961',
        '1QY' => 'E02005947',
        '1QZ' => 'E02005959',
        '1RA' => 'E02005961',
        '1RB' => 'E02005947',
        '1RD' => 'E02005947',
        '1RG' => 'E02005959',
        '1RH' => 'E02005959',
        '1RJ' => 'E02005959',
        '1RL' => 'E02005959',
        '1RN' => 'E02005959',
        '1RP' => 'E02005959',
        '1RQ' => 'E02005959',
        '1RR' => 'E02005959',
        '1RS' => 'E02005959',
        '1RT' => 'E02005959',
        '1RU' => 'E02005959',
        '1RW' => 'E02005959',
        '1RX' => 'E02005959',
        '1RY' => 'E02005959',
        '1RZ' => 'E02005959',
        '1SA' => 'E02005959',
        '1SB' => 'E02005959',
        '1SD' => 'E02005959',
        '1SE' => 'E02005959',
        '1SF' => 'E02005961',
        '1SH' => 'E02005961',
        '1SJ' => 'E02005961',
        '1SL' => 'E02005961',
        '1SN' => 'E02005961',
        '1SP' => 'E02005961',
        '1SQ' => 'E02005959',
        '1SR' => 'E02005961',
        '1SS' => 'E02005961',
        '1ST' => 'E02005961',
        '1SU' => 'E02005961',
        '1SW' => 'E02005961',
        '1SX' => 'E02005961',
        '1SY' => 'E02005961',
        '1SZ' => 'E02005961',
        '1TA' => 'E02005961',
        '1TB' => 'E02005961',
        '1TD' => 'E02005959',
        '1TE' => 'E02005959',
        '1TF' => 'E02005959',
        '1TG' => 'E02005959',
        '1TH' => 'E02005959',
        '1TJ' => 'E02005959',
        '1TL' => 'E02005959',
        '1TN' => 'E02005959',
        '1TP' => 'E02005961',
        '1TQ' => 'E02005959',
        '1TR' => 'E02005961',
        '1TS' => 'E02005961',
        '1TT' => 'E02005961',
        '1TU' => 'E02005961',
        '1TW' => 'E02005959',
        '1TX' => 'E02005959',
        '1TY' => 'E02005947',
        '1TZ' => 'E02005961',
        '1UA' => 'E02005961',
        '1UB' => 'E02005961',
        '1UD' => 'E02005961',
        '1UE' => 'E02005961',
        '1UF' => 'E02005961',
        '1UG' => 'E02005961',
        '1UH' => 'E02005961',
        '1UJ' => 'E02005961',
        '1UL' => 'E02005961',
        '1UN' => 'E02005961',
        '1UP' => 'E02005961',
        '1UQ' => 'E02005961',
        '1UR' => 'E02005961',
        '1US' => 'E02005961',
        '1UT' => 'E02005961',
        '1UU' => 'E02005961',
        '1UW' => 'E02005961',
        '1UX' => 'E02005961',
        '1UY' => 'E02005961',
        '1UZ' => 'E02005961',
        '1WA' => 'E02005961',
        '1WB' => 'E02005961',
        '1WD' => 'E02005961',
        '1WE' => 'E02005961',
        '1WF' => 'E02005961',
        '1WG' => 'E02005961',
        '1WH' => 'E02005955',
        '1WJ' => 'E02005961',
        '1WL' => 'E02005961',
        '1WN' => 'E02005955',
        '1WP' => 'E02005961',
        '1WQ' => 'E02005961',
        '1WR' => 'E02005961',
        '1WS' => 'E02005961',
        '1WT' => 'E02005961',
        '1WU' => 'E02005961',
        '1WW' => 'E02005961',
        '1WX' => 'E02005961',
        '1WY' => 'E02005961',
        '1WZ' => 'E02005961',
        '1XA' => 'E02005961',
        '1XB' => 'E02005961',
        '1XD' => 'E02005961',
        '1XE' => 'E02005961',
        '1XF' => 'E02005961',
        '1XG' => 'E02005961',
        '1XH' => 'E02005961',
        '1XJ' => 'E02005961',
        '1XL' => 'E02005961',
        '1XN' => 'E02005961',
        '1XP' => 'E02005961',
        '1XQ' => 'E02005961',
        '1XR' => 'E02005961',
        '1XS' => 'E02005961',
        '1XT' => 'E02005961',
        '1XU' => 'E02005961',
        '1XW' => 'E02005959',
        '1XX' => 'E02005961',
        '1XY' => 'E02005961',
        '1XZ' => 'E02005961',
        '1YA' => 'E02005961',
        '1YB' => 'E02005961',
        '1YD' => 'E02005961',
        '1YE' => 'E02005961',
        '1YF' => 'E02005961',
        '1YG' => 'E02005961',
        '1YH' => 'E02005961',
        '1YJ' => 'E02005961',
        '1YL' => 'E02005961',
        '1YN' => 'E02005961',
        '1YP' => 'E02005961',
        '1YQ' => 'E02005961',
        '1YR' => 'E02005959',
        '1YS' => 'E02005961',
        '1YT' => 'E02005961',
        '1YU' => 'E02005961',
        '1YW' => 'E02005961',
        '1YX' => 'E02005959',
        '1YY' => 'E02005959',
        '1YZ' => 'E02005961',
        '1ZB' => 'E02005961',
        '1ZD' => 'E02005961',
        '1ZG' => 'E02005961',
        '1ZJ' => 'E02005961',
        '1ZL' => 'E02005955',
        '1ZN' => 'E02005961',
        '1ZQ' => 'E02005961',
        '1ZW' => 'E02005961',
        '1ZX' => 'E02005961',
        '1ZY' => 'E02005955',
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
