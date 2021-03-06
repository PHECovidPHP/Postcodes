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
final class EX18
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '7AA' => 'E02004188',
        '7AB' => 'E02004188',
        '7AD' => 'E02004188',
        '7AE' => 'E02004188',
        '7AF' => 'E02004188',
        '7AG' => 'E02004188',
        '7AH' => 'E02004188',
        '7AJ' => 'E02004188',
        '7AL' => 'E02004188',
        '7AN' => 'E02004188',
        '7AP' => 'E02004187',
        '7AQ' => 'E02004188',
        '7AR' => 'E02004188',
        '7AS' => 'E02004188',
        '7AT' => 'E02004172',
        '7AU' => 'E02004188',
        '7AW' => 'E02004187',
        '7AX' => 'E02004188',
        '7AY' => 'E02004188',
        '7AZ' => 'E02004188',
        '7BA' => 'E02004226',
        '7BB' => 'E02004226',
        '7BD' => 'E02004226',
        '7BE' => 'E02004172',
        '7BG' => 'E02004188',
        '7BH' => 'E02004188',
        '7BJ' => 'E02004188',
        '7BL' => 'E02004188',
        '7BN' => 'E02004188',
        '7BP' => 'E02004188',
        '7BQ' => 'E02004188',
        '7BR' => 'E02004188',
        '7BS' => 'E02004188',
        '7BT' => 'E02004188',
        '7BU' => 'E02004188',
        '7BW' => 'E02004188',
        '7BX' => 'E02004188',
        '7BY' => 'E02004188',
        '7BZ' => 'E02004188',
        '7DA' => 'E02004188',
        '7DB' => 'E02004188',
        '7DD' => 'E02004188',
        '7DE' => 'E02004188',
        '7DF' => 'E02004188',
        '7DG' => 'E02004188',
        '7DH' => 'E02004188',
        '7DJ' => 'E02004188',
        '7DL' => 'E02004188',
        '7DN' => 'E02004172',
        '7DP' => 'E02004188',
        '7DQ' => 'E02004188',
        '7DR' => 'E02004188',
        '7DS' => 'E02004188',
        '7DT' => 'E02004188',
        '7DU' => 'E02004188',
        '7DW' => 'E02004188',
        '7DX' => 'E02004188',
        '7DY' => 'E02004188',
        '7DZ' => 'E02004188',
        '7EA' => 'E02004188',
        '7EB' => 'E02004188',
        '7ED' => 'E02004188',
        '7EE' => 'E02004188',
        '7EF' => 'E02004188',
        '7EG' => 'E02004188',
        '7EH' => 'E02004172',
        '7EJ' => 'E02004188',
        '7EP' => 'E02004172',
        '7EQ' => 'E02004188',
        '7ER' => 'E02004172',
        '7ES' => 'E02004172',
        '7ET' => 'E02004172',
        '7EU' => 'E02004172',
        '7EX' => 'E02004172',
        '7EY' => 'E02004172',
        '7EZ' => 'E02004172',
        '7HA' => 'E02004172',
        '7HB' => 'E02004172',
        '7HD' => 'E02004172',
        '7HE' => 'E02004172',
        '7HF' => 'E02004172',
        '7HG' => 'E02004172',
        '7HH' => 'E02004172',
        '7HJ' => 'E02004172',
        '7HL' => 'E02004172',
        '7HN' => 'E02004172',
        '7HP' => 'E02004172',
        '7HQ' => 'E02004172',
        '7HR' => 'E02004172',
        '7HS' => 'E02004172',
        '7HT' => 'E02004172',
        '7HU' => 'E02004172',
        '7HW' => 'E02004172',
        '7HX' => 'E02004172',
        '7HY' => 'E02004172',
        '7HZ' => 'E02004188',
        '7JA' => 'E02004188',
        '7JB' => 'E02004188',
        '7JD' => 'E02004172',
        '7JE' => 'E02004172',
        '7JL' => 'E02004188',
        '7JN' => 'E02004188',
        '7JP' => 'E02004188',
        '7JR' => 'E02004188',
        '7JS' => 'E02004188',
        '7JT' => 'E02004172',
        '7JU' => 'E02004172',
        '7JW' => 'E02004188',
        '7JX' => 'E02004172',
        '7JY' => 'E02004172',
        '7JZ' => 'E02004172',
        '7LA' => 'E02004172',
        '7LB' => 'E02004172',
        '7LD' => 'E02004172',
        '7LE' => 'E02004172',
        '7LF' => 'E02004172',
        '7LG' => 'E02004188',
        '7LH' => 'E02004226',
        '7LP' => 'E02004226',
        '7LQ' => 'E02004226',
        '7LR' => 'E02004226',
        '7LS' => 'E02004226',
        '7LT' => 'E02004226',
        '7LU' => 'E02004226',
        '7LX' => 'E02004226',
        '7LY' => 'E02004226',
        '7LZ' => 'E02004226',
        '7NA' => 'E02004226',
        '7NB' => 'E02004226',
        '7ND' => 'E02004226',
        '7NE' => 'E02004226',
        '7NF' => 'E02004226',
        '7NG' => 'E02004226',
        '7NH' => 'E02004226',
        '7NJ' => 'E02004226',
        '7NQ' => 'E02004226',
        '7NT' => 'E02004226',
        '7NU' => 'E02004226',
        '7NX' => 'E02004226',
        '7NY' => 'E02004226',
        '7NZ' => 'E02004226',
        '7PA' => 'E02004226',
        '7PB' => 'E02004226',
        '7PD' => 'E02004226',
        '7PE' => 'E02004226',
        '7PF' => 'E02004226',
        '7PG' => 'E02004226',
        '7PH' => 'E02004226',
        '7PJ' => 'E02004226',
        '7PL' => 'E02004226',
        '7PN' => 'E02004226',
        '7PP' => 'E02004226',
        '7PQ' => 'E02004226',
        '7PR' => 'E02004226',
        '7PW' => 'E02004226',
        '7QA' => 'E02004226',
        '7QB' => 'E02004226',
        '7QD' => 'E02004226',
        '7QE' => 'E02004226',
        '7QF' => 'E02004226',
        '7QG' => 'E02004226',
        '7QH' => 'E02004226',
        '7QJ' => 'E02004226',
        '7QP' => 'E02004172',
        '7QQ' => 'E02004226',
        '7QR' => 'E02004172',
        '7QS' => 'E02004172',
        '7QT' => 'E02004172',
        '7QU' => 'E02004172',
        '7QW' => 'E02004172',
        '7QX' => 'E02004172',
        '7QY' => 'E02004172',
        '7QZ' => 'E02004172',
        '7RA' => 'E02004172',
        '7RB' => 'E02004172',
        '7RH' => 'E02004226',
        '7RJ' => 'E02004226',
        '7RL' => 'E02004226',
        '7RN' => 'E02004172',
        '7RQ' => 'E02004226',
        '7RT' => 'E02004172',
        '7RU' => 'E02004172',
        '7RW' => 'E02004172',
        '7RX' => 'E02004172',
        '7RY' => 'E02004172',
        '7RZ' => 'E02004172',
        '7SA' => 'E02004172',
        '7SB' => 'E02004172',
        '7SD' => 'E02004172',
        '7SE' => 'E02004172',
        '7SF' => 'E02004172',
        '7SG' => 'E02004172',
        '7SH' => 'E02004172',
        '7SJ' => 'E02004172',
        '7SL' => 'E02004172',
        '7SN' => 'E02004172',
        '7SP' => 'E02004172',
        '7SQ' => 'E02004172',
        '7SR' => 'E02004188',
        '7SS' => 'E02004188',
        '7SW' => 'E02004226',
        '7WB' => 'E02004226',
        '7WD' => 'E02004188',
        '7WE' => 'E02004188',
        '7WX' => 'E02004188',
        '7WY' => 'E02004188',
        '7WZ' => 'E02004188',
        '7XY' => 'E02004226',
        '7YH' => 'E02004188',
        '7YJ' => 'E02004188',
        '7YL' => 'E02004226',
        '7YN' => 'E02004172',
        '7YP' => 'E02004172',
        '7YQ' => 'E02004188',
        '7YR' => 'E02004172',
        '7YS' => 'E02004172',
        '7YT' => 'E02004172',
        '7YU' => 'E02004188',
        '7YW' => 'E02004188',
        '7YX' => 'E02004172',
        '7YY' => 'E02004172',
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
