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
final class DN19
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '7AA' => 'E02002750',
        '7AB' => 'E02002750',
        '7AD' => 'E02002750',
        '7AE' => 'E02002750',
        '7AF' => 'E02002750',
        '7AG' => 'E02002749',
        '7AH' => 'E02002750',
        '7AJ' => 'E02002750',
        '7AL' => 'E02002750',
        '7AN' => 'E02002750',
        '7AP' => 'E02002750',
        '7AQ' => 'E02002750',
        '7AR' => 'E02002750',
        '7AS' => 'E02002750',
        '7AT' => 'E02002750',
        '7AU' => 'E02002750',
        '7AW' => 'E02002750',
        '7AX' => 'E02002750',
        '7AY' => 'E02002750',
        '7AZ' => 'E02002750',
        '7BA' => 'E02002750',
        '7BB' => 'E02002750',
        '7BD' => 'E02002750',
        '7BE' => 'E02002750',
        '7BG' => 'E02002750',
        '7BH' => 'E02002750',
        '7BJ' => 'E02002750',
        '7BL' => 'E02002750',
        '7BN' => 'E02002750',
        '7BP' => 'E02002750',
        '7BQ' => 'E02002750',
        '7BS' => 'E02002750',
        '7BT' => 'E02002750',
        '7BU' => 'E02002750',
        '7BW' => 'E02002750',
        '7BX' => 'E02002750',
        '7BY' => 'E02002750',
        '7BZ' => 'E02002750',
        '7DA' => 'E02002750',
        '7DB' => 'E02002750',
        '7DD' => 'E02002750',
        '7DE' => 'E02002750',
        '7DF' => 'E02002750',
        '7DG' => 'E02002750',
        '7DH' => 'E02002750',
        '7DJ' => 'E02002750',
        '7DL' => 'E02002750',
        '7DN' => 'E02002750',
        '7DP' => 'E02002750',
        '7DQ' => 'E02002750',
        '7DR' => 'E02002750',
        '7DS' => 'E02002750',
        '7DT' => 'E02002750',
        '7DU' => 'E02002750',
        '7DW' => 'E02002750',
        '7DX' => 'E02002750',
        '7DY' => 'E02002750',
        '7DZ' => 'E02002752',
        '7EA' => 'E02002750',
        '7EB' => 'E02002750',
        '7ED' => 'E02002750',
        '7EE' => 'E02002750',
        '7EF' => 'E02002750',
        '7EG' => 'E02002750',
        '7EH' => 'E02002750',
        '7EJ' => 'E02002750',
        '7EL' => 'E02002750',
        '7EN' => 'E02002750',
        '7EP' => 'E02002750',
        '7EQ' => 'E02002750',
        '7ER' => 'E02002750',
        '7ES' => 'E02002750',
        '7ET' => 'E02002750',
        '7EU' => 'E02002750',
        '7EW' => 'E02002750',
        '7EX' => 'E02002750',
        '7EY' => 'E02002750',
        '7EZ' => 'E02002750',
        '7FA' => 'E02002750',
        '7FB' => 'E02002750',
        '7FD' => 'E02002750',
        '7FE' => 'E02002750',
        '7GA' => 'E02002750',
        '7GB' => 'E02002750',
        '7GD' => 'E02002750',
        '7GG' => 'E02002750',
        '7HA' => 'E02002750',
        '7HB' => 'E02002750',
        '7HD' => 'E02002750',
        '7HE' => 'E02002750',
        '7HF' => 'E02002750',
        '7HG' => 'E02002750',
        '7HH' => 'E02002750',
        '7HL' => 'E02002750',
        '7HN' => 'E02002750',
        '7HP' => 'E02002750',
        '7HQ' => 'E02002750',
        '7HR' => 'E02002750',
        '7HS' => 'E02002750',
        '7HT' => 'E02002750',
        '7HU' => 'E02002750',
        '7HW' => 'E02002750',
        '7HX' => 'E02002750',
        '7HY' => 'E02002750',
        '7HZ' => 'E02002750',
        '7JA' => 'E02002750',
        '7JB' => 'E02002750',
        '7JD' => 'E02002750',
        '7JE' => 'E02002750',
        '7JF' => 'E02002750',
        '7JG' => 'E02002750',
        '7JH' => 'E02002750',
        '7JJ' => 'E02002750',
        '7JL' => 'E02002750',
        '7JN' => 'E02002750',
        '7JP' => 'E02002750',
        '7JQ' => 'E02002750',
        '7JR' => 'E02002750',
        '7JS' => 'E02002750',
        '7JT' => 'E02002750',
        '7JU' => 'E02002750',
        '7JW' => 'E02002750',
        '7JX' => 'E02002750',
        '7JY' => 'E02002750',
        '7JZ' => 'E02002750',
        '7LA' => 'E02002750',
        '7LB' => 'E02002750',
        '7LD' => 'E02002750',
        '7LE' => 'E02002750',
        '7LF' => 'E02002750',
        '7LG' => 'E02002750',
        '7LH' => 'E02002749',
        '7LJ' => 'E02002750',
        '7LL' => 'E02002750',
        '7LN' => 'E02002750',
        '7LP' => 'E02002750',
        '7LR' => 'E02002750',
        '7LS' => 'E02002750',
        '7LT' => 'E02002750',
        '7LU' => 'E02002750',
        '7LW' => 'E02002750',
        '7LX' => 'E02002750',
        '7LY' => 'E02002750',
        '7LZ' => 'E02002750',
        '7NA' => 'E02002750',
        '7NB' => 'E02002750',
        '7ND' => 'E02002750',
        '7NE' => 'E02002750',
        '7NF' => 'E02002750',
        '7NG' => 'E02002750',
        '7NH' => 'E02002750',
        '7NJ' => 'E02002750',
        '7NL' => 'E02002750',
        '7NN' => 'E02002750',
        '7NP' => 'E02002750',
        '7NQ' => 'E02002750',
        '7NW' => 'E02002750',
        '7PH' => 'E02002750',
        '7PJ' => 'E02002750',
        '7PL' => 'E02002750',
        '7PN' => 'E02002750',
        '7PP' => 'E02002750',
        '7PR' => 'E02002750',
        '7PS' => 'E02002750',
        '7PT' => 'E02002750',
        '7PU' => 'E02002750',
        '7PW' => 'E02002750',
        '7PX' => 'E02002750',
        '7PY' => 'E02002750',
        '7PZ' => 'E02002750',
        '7QA' => 'E02002750',
        '7QB' => 'E02002750',
        '7QD' => 'E02002750',
        '7QE' => 'E02002750',
        '7QF' => 'E02002750',
        '7QG' => 'E02002750',
        '7QH' => 'E02002750',
        '7QJ' => 'E02002750',
        '7QL' => 'E02002750',
        '7QN' => 'E02002750',
        '7QP' => 'E02002750',
        '7QQ' => 'E02002750',
        '7QR' => 'E02002750',
        '7QS' => 'E02002750',
        '7QT' => 'E02002750',
        '7QU' => 'E02002750',
        '7QW' => 'E02002750',
        '7QX' => 'E02002750',
        '7QY' => 'E02002750',
        '7QZ' => 'E02002750',
        '7RA' => 'E02002750',
        '7RB' => 'E02002750',
        '7RD' => 'E02002750',
        '7RE' => 'E02002750',
        '7RF' => 'E02002750',
        '7RG' => 'E02002750',
        '7RH' => 'E02002750',
        '7RJ' => 'E02002750',
        '7RL' => 'E02002750',
        '7RN' => 'E02002750',
        '7RP' => 'E02002750',
        '7RQ' => 'E02002750',
        '7RR' => 'E02002750',
        '7RS' => 'E02002750',
        '7RT' => 'E02002750',
        '7RU' => 'E02002750',
        '7RW' => 'E02002750',
        '7RX' => 'E02002750',
        '7RY' => 'E02002750',
        '7RZ' => 'E02002750',
        '7SA' => 'E02002750',
        '7SB' => 'E02002750',
        '7SD' => 'E02002749',
        '7SE' => 'E02002750',
        '7SF' => 'E02002750',
        '7SG' => 'E02002750',
        '7SH' => 'E02002750',
        '7SJ' => 'E02002750',
        '7SL' => 'E02002750',
        '7SN' => 'E02002750',
        '7SP' => 'E02002750',
        '7SQ' => 'E02002750',
        '7SR' => 'E02002750',
        '7SS' => 'E02002750',
        '7ST' => 'E02002750',
        '7SU' => 'E02002750',
        '7SW' => 'E02002750',
        '7SY' => 'E02002750',
        '7SZ' => 'E02002750',
        '7TE' => 'E02002750',
        '7TF' => 'E02002750',
        '7TG' => 'E02002750',
        '7TH' => 'E02002750',
        '7TJ' => 'E02002750',
        '7TL' => 'E02002750',
        '7TZ' => 'E02002750',
        '7UA' => 'E02002750',
        '7UB' => 'E02002750',
        '7UD' => 'E02002750',
        '7UE' => 'E02002750',
        '7UL' => 'E02002750',
        '7UN' => 'E02002750',
        '7UP' => 'E02002750',
        '7WA' => 'E02002749',
        '7WB' => 'E02002749',
        '7WS' => 'E02002749',
        '7WT' => 'E02002749',
        '7WU' => 'E02002749',
        '7WW' => 'E02002749',
        '7WX' => 'E02002749',
        '7WY' => 'E02002749',
        '7WZ' => 'E02002749',
        '7XA' => 'E02002749',
        '7XB' => 'E02002749',
        '7XD' => 'E02002749',
        '7XE' => 'E02002750',
        '7XF' => 'E02002750',
        '7XG' => 'E02002749',
        '7XH' => 'E02002749',
        '7XJ' => 'E02002749',
        '7XL' => 'E02002750',
        '7XN' => 'E02002749',
        '7XP' => 'E02002749',
        '7XQ' => 'E02002749',
        '7ZR' => 'E02002749',
        '9AA' => 'E02002749',
        '9AB' => 'E02002749',
        '9AD' => 'E02002749',
        '9AE' => 'E02002749',
        '9AF' => 'E02002749',
        '9AG' => 'E02002749',
        '9AH' => 'E02002749',
        '9AJ' => 'E02002749',
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
