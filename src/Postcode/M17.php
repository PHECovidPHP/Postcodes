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
final class M17
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02001184',
        '1AB' => 'E02001264',
        '1AD' => 'E02001260',
        '1AE' => 'E02001264',
        '1AF' => 'E02001260',
        '1AG' => 'E02001264',
        '1AH' => 'E02001264',
        '1AJ' => 'E02001178',
        '1AL' => 'E02001264',
        '1AN' => 'E02001264',
        '1AP' => 'E02001264',
        '1AQ' => 'E02001264',
        '1AR' => 'E02001260',
        '1AS' => 'E02001260',
        '1AT' => 'E02001260',
        '1AU' => 'E02001264',
        '1AW' => 'E02001264',
        '1AX' => 'E02001260',
        '1AY' => 'E02001264',
        '1AZ' => 'E02001260',
        '1BA' => 'E02001260',
        '1BB' => 'E02001260',
        '1BD' => 'E02001260',
        '1BE' => 'E02001260',
        '1BF' => 'E02001178',
        '1BG' => 'E02001264',
        '1BH' => 'E02001264',
        '1BJ' => 'E02001264',
        '1BL' => 'E02001260',
        '1BN' => 'E02001264',
        '1BP' => 'E02001178',
        '1BQ' => 'E02001264',
        '1BR' => 'E02001264',
        '1BS' => 'E02001260',
        '1BT' => 'E02001260',
        '1BU' => 'E02001260',
        '1BW' => 'E02001264',
        '1BX' => 'E02001264',
        '1BY' => 'E02001264',
        '1BZ' => 'E02001178',
        '1DA' => 'E02001264',
        '1DB' => 'E02001264',
        '1DD' => 'E02001264',
        '1DE' => 'E02001260',
        '1DF' => 'E02001264',
        '1DG' => 'E02001264',
        '1DH' => 'E02001261',
        '1DJ' => 'E02001264',
        '1DL' => 'E02001261',
        '1DN' => 'E02001260',
        '1DP' => 'E02001261',
        '1DQ' => 'E02001264',
        '1DR' => 'E02001264',
        '1DS' => 'E02001264',
        '1DT' => 'E02001260',
        '1DU' => 'E02001264',
        '1DW' => 'E02001264',
        '1DX' => 'E02001264',
        '1DY' => 'E02001261',
        '1DZ' => 'E02001264',
        '1EA' => 'E02001264',
        '1EB' => 'E02001260',
        '1ED' => 'E02001264',
        '1EE' => 'E02001264',
        '1EF' => 'E02001260',
        '1EG' => 'E02001264',
        '1EH' => 'E02001260',
        '1EJ' => 'E02001264',
        '1EL' => 'E02001264',
        '1EN' => 'E02001264',
        '1EP' => 'E02001178',
        '1EQ' => 'E02001260',
        '1ER' => 'E02001184',
        '1ES' => 'E02001264',
        '1ET' => 'E02001264',
        '1EU' => 'E02001261',
        '1EW' => 'E02001264',
        '1EX' => 'E02001264',
        '1EY' => 'E02001264',
        '1EZ' => 'E02001260',
        '1FA' => 'E02001261',
        '1FB' => 'E02001264',
        '1FD' => 'E02001264',
        '1FE' => 'E02001264',
        '1FF' => 'E02001264',
        '1FG' => 'E02001264',
        '1FH' => 'E02001264',
        '1FJ' => 'E02001260',
        '1FL' => 'E02001260',
        '1FN' => 'E02001260',
        '1FP' => 'E02001264',
        '1FQ' => 'E02001264',
        '1FR' => 'E02001260',
        '1FS' => 'E02001264',
        '1FT' => 'E02001264',
        '1FU' => 'E02001260',
        '1FW' => 'E02001178',
        '1FX' => 'E02001264',
        '1FY' => 'E02001178',
        '1FZ' => 'E02001264',
        '1GA' => 'E02001260',
        '1GB' => 'E02001264',
        '1GD' => 'E02001178',
        '1GE' => 'E02001178',
        '1GF' => 'E02001264',
        '1GG' => 'E02001260',
        '1GH' => 'E02001178',
        '1GJ' => 'E02001260',
        '1GN' => 'E02001260',
        '1GP' => 'E02001264',
        '1GQ' => 'E02001266',
        '1GR' => 'E02001260',
        '1GS' => 'E02001260',
        '1GT' => 'E02001260',
        '1GU' => 'E02001260',
        '1GX' => 'E02001260',
        '1GY' => 'E02001264',
        '1GZ' => 'E02001178',
        '1HA' => 'E02001264',
        '1HB' => 'E02001260',
        '1HD' => 'E02001260',
        '1HE' => 'E02001264',
        '1HF' => 'E02001260',
        '1HG' => 'E02001260',
        '1HH' => 'E02001264',
        '1HJ' => 'E02001260',
        '1HL' => 'E02001264',
        '1HN' => 'E02001260',
        '1HP' => 'E02001260',
        '1HQ' => 'E02001260',
        '1HR' => 'E02001260',
        '1HS' => 'E02001260',
        '1HT' => 'E02001260',
        '1HU' => 'E02001260',
        '1HW' => 'E02001264',
        '1HX' => 'E02001264',
        '1HZ' => 'E02001264',
        '1JA' => 'E02001260',
        '1JB' => 'E02001260',
        '1JD' => 'E02001260',
        '1JE' => 'E02001264',
        '1JF' => 'E02001264',
        '1JG' => 'E02001178',
        '1JH' => 'E02001260',
        '1JJ' => 'E02001178',
        '1JL' => 'E02001264',
        '1JN' => 'E02001178',
        '1JP' => 'E02001264',
        '1JQ' => 'E02001178',
        '1JR' => 'E02001178',
        '1JS' => 'E02001264',
        '1JT' => 'E02001260',
        '1JU' => 'E02001264',
        '1JW' => 'E02001260',
        '1JX' => 'E02001264',
        '1JY' => 'E02001264',
        '1JZ' => 'E02001264',
        '1LA' => 'E02001260',
        '1LB' => 'E02001264',
        '1LE' => 'E02001266',
        '1LH' => 'E02001260',
        '1LJ' => 'E02001264',
        '1LL' => 'E02001260',
        '1LP' => 'E02001266',
        '1LR' => 'E02001266',
        '1LS' => 'E02001266',
        '1LT' => 'E02001264',
        '1NA' => 'E02001264',
        '1NB' => 'E02001260',
        '1ND' => 'E02001260',
        '1NF' => 'E02001264',
        '1NH' => 'E02001260',
        '1NJ' => 'E02001260',
        '1NL' => 'E02001178',
        '1NP' => 'E02001266',
        '1NR' => 'E02001260',
        '1NS' => 'E02001260',
        '1NT' => 'E02001178',
        '1NU' => 'E02001260',
        '1NW' => 'E02001264',
        '1NX' => 'E02001260',
        '1NY' => 'E02001266',
        '1NZ' => 'E02001260',
        '1PA' => 'E02001260',
        '1PB' => 'E02001260',
        '1PD' => 'E02001266',
        '1PE' => 'E02001264',
        '1PF' => 'E02001260',
        '1PG' => 'E02001264',
        '1PH' => 'E02001264',
        '1PJ' => 'E02001264',
        '1PL' => 'E02001264',
        '1PN' => 'E02001264',
        '1PP' => 'E02001264',
        '1PQ' => 'E02001264',
        '1PR' => 'E02001266',
        '1PS' => 'E02001266',
        '1PT' => 'E02001178',
        '1PU' => 'E02001266',
        '1PW' => 'E02001178',
        '1PX' => 'E02001264',
        '1PY' => 'E02001264',
        '1PZ' => 'E02001266',
        '1QA' => 'E02001264',
        '1QB' => 'E02001264',
        '1QD' => 'E02001264',
        '1QE' => 'E02001266',
        '1QG' => 'E02001266',
        '1QH' => 'E02001264',
        '1QJ' => 'E02001266',
        '1QL' => 'E02001260',
        '1QN' => 'E02001264',
        '1QP' => 'E02001266',
        '1QQ' => 'E02001264',
        '1QR' => 'E02001266',
        '1QS' => 'E02001260',
        '1QT' => 'E02001264',
        '1QU' => 'E02001266',
        '1QX' => 'E02001260',
        '1QY' => 'E02001260',
        '1QZ' => 'E02001260',
        '1RA' => 'E02001260',
        '1RB' => 'E02001178',
        '1RD' => 'E02001264',
        '1RE' => 'E02001260',
        '1RF' => 'E02001260',
        '1RG' => 'E02001260',
        '1RH' => 'E02001260',
        '1RJ' => 'E02001264',
        '1RL' => 'E02001264',
        '1RN' => 'E02001260',
        '1RP' => 'E02001260',
        '1RQ' => 'E02001260',
        '1RR' => 'E02001264',
        '1RS' => 'E02001260',
        '1RT' => 'E02001264',
        '1RU' => 'E02001178',
        '1RW' => 'E02001260',
        '1RX' => 'E02001177',
        '1RY' => 'E02001260',
        '1RZ' => 'E02001178',
        '1SA' => 'E02001260',
        '1SB' => 'E02001260',
        '1SD' => 'E02001260',
        '1SE' => 'E02001260',
        '1SF' => 'E02001260',
        '1SG' => 'E02001260',
        '1SH' => 'E02001260',
        '1SJ' => 'E02001264',
        '1SL' => 'E02001178',
        '1SN' => 'E02001260',
        '1SP' => 'E02001264',
        '1SQ' => 'E02001260',
        '1SR' => 'E02001260',
        '1SS' => 'E02001260',
        '1ST' => 'E02001260',
        '1SU' => 'E02001260',
        '1SW' => 'E02001260',
        '1SX' => 'E02001260',
        '1SY' => 'E02001260',
        '1TA' => 'E02001260',
        '1TB' => 'E02001260',
        '1TD' => 'E02001260',
        '1TE' => 'E02001260',
        '1TG' => 'E02001260',
        '1TH' => 'E02001260',
        '1TL' => 'E02001260',
        '1TN' => 'E02001264',
        '1TP' => 'E02001264',
        '1TR' => 'E02001264',
        '1TS' => 'E02001264',
        '1TT' => 'E02001264',
        '1TU' => 'E02001260',
        '1TW' => 'E02001260',
        '1TX' => 'E02001260',
        '1TZ' => 'E02001264',
        '1UF' => 'E02001260',
        '1UP' => 'E02001264',
        '1WA' => 'E02001264',
        '1WB' => 'E02001264',
        '1WD' => 'E02001264',
        '1WF' => 'E02001264',
        '1WG' => 'E02001178',
        '1WH' => 'E02001260',
        '1WJ' => 'E02001178',
        '1WL' => 'E02001264',
        '1WN' => 'E02001260',
        '1WP' => 'E02001178',
        '1WQ' => 'E02001178',
        '1WR' => 'E02001260',
        '1WS' => 'E02001264',
        '1WT' => 'E02001260',
        '1WU' => 'E02001178',
        '1WW' => 'E02001178',
        '1WX' => 'E02001178',
        '1WY' => 'E02001178',
        '1WZ' => 'E02001178',
        '1XA' => 'E02001178',
        '1XB' => 'E02001178',
        '1XL' => 'E02001260',
        '1XW' => 'E02001178',
        '1XX' => 'E02001178',
        '1ZX' => 'E02001178',
        '1ZY' => 'E02001178',
        '8AA' => 'E02001260',
        '8AB' => 'E02001260',
        '8AD' => 'E02001260',
        '8AE' => 'E02001260',
        '8AF' => 'E02001260',
        '8AG' => 'E02001260',
        '8AH' => 'E02001260',
        '8AJ' => 'E02001260',
        '8AL' => 'E02001260',
        '8AN' => 'E02001260',
        '8AP' => 'E02001260',
        '8AQ' => 'E02001260',
        '8AR' => 'E02001260',
        '8AS' => 'E02001260',
        '8AT' => 'E02001260',
        '8AW' => 'E02001260',
        '8BA' => 'E02001260',
        '8BB' => 'E02001260',
        '8BD' => 'E02001260',
        '8BE' => 'E02001260',
        '8BF' => 'E02001260',
        '8BG' => 'E02001260',
        '8BH' => 'E02001260',
        '8BJ' => 'E02001260',
        '8BL' => 'E02001260',
        '8BN' => 'E02001260',
        '8BP' => 'E02001260',
        '8BQ' => 'E02001260',
        '8BR' => 'E02001260',
        '8BS' => 'E02001260',
        '8DA' => 'E02001260',
        '8DD' => 'E02001260',
        '8DF' => 'E02001260',
        '8EA' => 'E02001260',
        '8EB' => 'E02001260',
        '8ED' => 'E02001260',
        '8EE' => 'E02001260',
        '8EF' => 'E02001260',
        '8EG' => 'E02001260',
        '8EH' => 'E02001260',
        '8EQ' => 'E02001260',
        '8FS' => 'E02001260',
        '8JL' => 'E02001260',
        '8PG' => 'E02001260',
        '8PH' => 'E02001260',
        '8PL' => 'E02001260',
        '8RH' => 'E02001260',
        '8WA' => 'E02001178',
        '8WW' => 'E02001260',
        '8XA' => 'E02001178',
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
