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
final class S14
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02001670',
        '1AB' => 'E02001674',
        '1AD' => 'E02001674',
        '1AE' => 'E02001674',
        '1AF' => 'E02001674',
        '1AG' => 'E02001670',
        '1AH' => 'E02001670',
        '1AJ' => 'E02001670',
        '1AL' => 'E02001670',
        '1AN' => 'E02001670',
        '1AP' => 'E02001670',
        '1AQ' => 'E02001670',
        '1AR' => 'E02001670',
        '1AS' => 'E02001670',
        '1AT' => 'E02001670',
        '1AU' => 'E02001670',
        '1AW' => 'E02001670',
        '1AX' => 'E02001670',
        '1AY' => 'E02001670',
        '1AZ' => 'E02001670',
        '1BA' => 'E02001674',
        '1BB' => 'E02001674',
        '1BD' => 'E02001670',
        '1BE' => 'E02001670',
        '1BF' => 'E02001670',
        '1BG' => 'E02001670',
        '1BH' => 'E02001670',
        '1BJ' => 'E02001670',
        '1BL' => 'E02001670',
        '1BN' => 'E02001670',
        '1BP' => 'E02001670',
        '1BQ' => 'E02001670',
        '1BR' => 'E02001670',
        '1BS' => 'E02001670',
        '1BT' => 'E02001670',
        '1BU' => 'E02001670',
        '1BW' => 'E02001670',
        '1BX' => 'E02001670',
        '1BY' => 'E02001670',
        '1BZ' => 'E02001670',
        '1DA' => 'E02001670',
        '1DB' => 'E02001670',
        '1DD' => 'E02001670',
        '1DE' => 'E02001670',
        '1DF' => 'E02001670',
        '1DG' => 'E02001670',
        '1DH' => 'E02001670',
        '1DL' => 'E02001674',
        '1FA' => 'E02001670',
        '1FB' => 'E02001670',
        '1FD' => 'E02001670',
        '1FE' => 'E02001670',
        '1FF' => 'E02001670',
        '1FG' => 'E02001670',
        '1FH' => 'E02001670',
        '1FJ' => 'E02001670',
        '1FL' => 'E02001670',
        '1FN' => 'E02001670',
        '1FP' => 'E02001670',
        '1FQ' => 'E02001670',
        '1FR' => 'E02001670',
        '1FS' => 'E02001670',
        '1FT' => 'E02001670',
        '1FU' => 'E02001670',
        '1FW' => 'E02001670',
        '1FX' => 'E02001670',
        '1FY' => 'E02001670',
        '1FZ' => 'E02001670',
        '1GA' => 'E02001670',
        '1GB' => 'E02001670',
        '1GD' => 'E02001670',
        '1GE' => 'E02001670',
        '1GF' => 'E02001670',
        '1GG' => 'E02001670',
        '1GH' => 'E02001670',
        '1GJ' => 'E02001670',
        '1GL' => 'E02001670',
        '1GN' => 'E02001670',
        '1GP' => 'E02001670',
        '1GQ' => 'E02001670',
        '1GR' => 'E02001670',
        '1GS' => 'E02001670',
        '1GT' => 'E02001670',
        '1GU' => 'E02001670',
        '1GW' => 'E02001670',
        '1GX' => 'E02001670',
        '1GY' => 'E02001670',
        '1GZ' => 'E02001670',
        '1JA' => 'E02001670',
        '1JB' => 'E02001670',
        '1JD' => 'E02001670',
        '1JE' => 'E02001670',
        '1JF' => 'E02001670',
        '1JG' => 'E02001670',
        '1JH' => 'E02001670',
        '1JJ' => 'E02001670',
        '1JL' => 'E02001670',
        '1LA' => 'E02001661',
        '1LB' => 'E02001661',
        '1LD' => 'E02001661',
        '1LE' => 'E02001661',
        '1LF' => 'E02001661',
        '1LG' => 'E02001661',
        '1LH' => 'E02001661',
        '1LJ' => 'E02001661',
        '1LL' => 'E02001661',
        '1LN' => 'E02001661',
        '1LP' => 'E02001661',
        '1LQ' => 'E02001661',
        '1LR' => 'E02001661',
        '1LS' => 'E02001661',
        '1LT' => 'E02001661',
        '1LU' => 'E02001661',
        '1LW' => 'E02001661',
        '1LX' => 'E02001661',
        '1LY' => 'E02001661',
        '1NA' => 'E02001661',
        '1PA' => 'E02001661',
        '1PB' => 'E02001661',
        '1PD' => 'E02001661',
        '1PE' => 'E02001661',
        '1PF' => 'E02001661',
        '1PG' => 'E02001661',
        '1PH' => 'E02001661',
        '1PJ' => 'E02001661',
        '1PL' => 'E02001661',
        '1PN' => 'E02001661',
        '1PP' => 'E02001661',
        '1PQ' => 'E02001661',
        '1PR' => 'E02001661',
        '1QA' => 'E02001661',
        '1QB' => 'E02001661',
        '1QD' => 'E02001664',
        '1QE' => 'E02001661',
        '1QF' => 'E02001664',
        '1QG' => 'E02001661',
        '1QH' => 'E02001661',
        '1QJ' => 'E02001664',
        '1QL' => 'E02001664',
        '1QN' => 'E02001664',
        '1QP' => 'E02001661',
        '1QQ' => 'E02001661',
        '1QR' => 'E02001664',
        '1QS' => 'E02001664',
        '1QT' => 'E02001664',
        '1QU' => 'E02001664',
        '1QW' => 'E02001664',
        '1QX' => 'E02001661',
        '1QY' => 'E02001664',
        '1QZ' => 'E02001664',
        '1RA' => 'E02001664',
        '1RB' => 'E02001664',
        '1RD' => 'E02001664',
        '1RE' => 'E02001664',
        '1RF' => 'E02001664',
        '1RG' => 'E02001664',
        '1RH' => 'E02001664',
        '1RJ' => 'E02001664',
        '1RN' => 'E02001664',
        '1SA' => 'E02001670',
        '1SB' => 'E02001670',
        '1SD' => 'E02001670',
        '1SE' => 'E02001670',
        '1SF' => 'E02001670',
        '1SG' => 'E02001670',
        '1SH' => 'E02001670',
        '1SJ' => 'E02001670',
        '1SL' => 'E02001670',
        '1SN' => 'E02001670',
        '1SP' => 'E02001670',
        '1SQ' => 'E02001664',
        '1SR' => 'E02001670',
        '1SS' => 'E02001670',
        '1ST' => 'E02001670',
        '1SU' => 'E02001670',
        '1SW' => 'E02001670',
        '1SX' => 'E02001670',
        '1SY' => 'E02001670',
        '1SZ' => 'E02001670',
        '1TA' => 'E02001670',
        '1TB' => 'E02001670',
        '1TD' => 'E02001670',
        '1TE' => 'E02001670',
        '1TF' => 'E02001670',
        '1TG' => 'E02001670',
        '1TH' => 'E02001670',
        '1TJ' => 'E02001670',
        '1TL' => 'E02001670',
        '1TN' => 'E02001670',
        '1TQ' => 'E02001670',
        '1WA' => 'E02006868',
        '1WX' => 'E02001670',
        '1WY' => 'E02006868',
        '1WZ' => 'E02001670',
        '1YL' => 'E02006868',
        '1YN' => 'E02006868',
        '1YP' => 'E02001670',
        '1YQ' => 'E02006868',
        '1YR' => 'E02001670',
        '1YS' => 'E02001670',
        '1YT' => 'E02001670',
        '1YU' => 'E02001670',
        '1YW' => 'E02001670',
        '1YX' => 'E02001670',
        '1YY' => 'E02001670',
        '1YZ' => 'E02001670',
        '1ZS' => 'E02006868',
        '1ZW' => 'E02006868',
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
