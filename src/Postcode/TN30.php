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
final class TN30
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '6AA' => 'E02005008',
        '6AB' => 'E02005008',
        '6AD' => 'E02005008',
        '6AE' => 'E02005008',
        '6AG' => 'E02005008',
        '6AH' => 'E02005008',
        '6AJ' => 'E02005008',
        '6AL' => 'E02005008',
        '6AN' => 'E02005008',
        '6AP' => 'E02005008',
        '6AQ' => 'E02005008',
        '6AR' => 'E02005008',
        '6AS' => 'E02005008',
        '6AT' => 'E02005008',
        '6AU' => 'E02005008',
        '6AW' => 'E02005008',
        '6AX' => 'E02005008',
        '6AY' => 'E02005008',
        '6AZ' => 'E02005008',
        '6BA' => 'E02005008',
        '6BB' => 'E02005008',
        '6BD' => 'E02005008',
        '6BE' => 'E02005008',
        '6BF' => 'E02005008',
        '6BG' => 'E02005008',
        '6BH' => 'E02005008',
        '6BJ' => 'E02005008',
        '6BL' => 'E02005008',
        '6BN' => 'E02005008',
        '6BP' => 'E02005008',
        '6BQ' => 'E02005008',
        '6BS' => 'E02005008',
        '6BT' => 'E02005008',
        '6BU' => 'E02005008',
        '6BW' => 'E02005008',
        '6BX' => 'E02005008',
        '6BY' => 'E02005008',
        '6BZ' => 'E02005008',
        '6DA' => 'E02005008',
        '6DB' => 'E02005008',
        '6DD' => 'E02005008',
        '6DE' => 'E02005008',
        '6DF' => 'E02005008',
        '6DG' => 'E02005008',
        '6DH' => 'E02005008',
        '6DJ' => 'E02005008',
        '6DL' => 'E02005008',
        '6DN' => 'E02005008',
        '6DP' => 'E02005008',
        '6DQ' => 'E02005008',
        '6DR' => 'E02005008',
        '6DS' => 'E02005008',
        '6DT' => 'E02005008',
        '6DU' => 'E02005008',
        '6DW' => 'E02005008',
        '6DX' => 'E02005008',
        '6DY' => 'E02005008',
        '6DZ' => 'E02005008',
        '6EA' => 'E02005008',
        '6EB' => 'E02005008',
        '6ED' => 'E02005008',
        '6EE' => 'E02005008',
        '6EF' => 'E02005008',
        '6EG' => 'E02005008',
        '6EH' => 'E02005008',
        '6EJ' => 'E02005008',
        '6EL' => 'E02005008',
        '6EN' => 'E02005008',
        '6EP' => 'E02005008',
        '6EQ' => 'E02005008',
        '6ER' => 'E02005008',
        '6ES' => 'E02005008',
        '6ET' => 'E02005008',
        '6EU' => 'E02005008',
        '6EW' => 'E02005008',
        '6EX' => 'E02005008',
        '6EY' => 'E02005008',
        '6EZ' => 'E02005008',
        '6FA' => 'E02005008',
        '6FB' => 'E02005008',
        '6FD' => 'E02005008',
        '6FE' => 'E02005008',
        '6FH' => 'E02005008',
        '6FJ' => 'E02005008',
        '6FW' => 'E02005008',
        '6FZ' => 'E02005008',
        '6GE' => 'E02005008',
        '6GP' => 'E02005008',
        '6GW' => 'E02005008',
        '6GX' => 'E02005008',
        '6HA' => 'E02005008',
        '6HB' => 'E02005008',
        '6HD' => 'E02005008',
        '6HE' => 'E02005008',
        '6HG' => 'E02005008',
        '6HH' => 'E02005008',
        '6HJ' => 'E02005008',
        '6HL' => 'E02005008',
        '6HN' => 'E02005008',
        '6HP' => 'E02005008',
        '6HR' => 'E02005008',
        '6HS' => 'E02005008',
        '6HT' => 'E02005008',
        '6HU' => 'E02005008',
        '6HW' => 'E02005008',
        '6HX' => 'E02005008',
        '6HY' => 'E02005008',
        '6HZ' => 'E02005008',
        '6JA' => 'E02005008',
        '6JB' => 'E02005008',
        '6JD' => 'E02005008',
        '6JE' => 'E02005008',
        '6JG' => 'E02005008',
        '6JH' => 'E02005008',
        '6JJ' => 'E02005008',
        '6JL' => 'E02005008',
        '6JN' => 'E02005008',
        '6JP' => 'E02005008',
        '6JR' => 'E02005008',
        '6JS' => 'E02005008',
        '6JT' => 'E02005008',
        '6JU' => 'E02005008',
        '6JW' => 'E02005008',
        '6JX' => 'E02005008',
        '6JY' => 'E02005008',
        '6JZ' => 'E02005008',
        '6LA' => 'E02005008',
        '6LB' => 'E02005008',
        '6LD' => 'E02005008',
        '6LE' => 'E02005008',
        '6LF' => 'E02005008',
        '6LH' => 'E02005008',
        '6LJ' => 'E02005008',
        '6LL' => 'E02005008',
        '6LN' => 'E02005008',
        '6LP' => 'E02005008',
        '6LR' => 'E02005008',
        '6LT' => 'E02005008',
        '6LU' => 'E02005008',
        '6LX' => 'E02005008',
        '6LY' => 'E02005008',
        '6NA' => 'E02005008',
        '6NB' => 'E02005008',
        '6ND' => 'E02005008',
        '6NE' => 'E02005008',
        '6NF' => 'E02005008',
        '6NG' => 'E02005008',
        '6NH' => 'E02005008',
        '6NJ' => 'E02005008',
        '6NL' => 'E02005008',
        '6NN' => 'E02005008',
        '6NP' => 'E02005008',
        '6NQ' => 'E02005008',
        '6NR' => 'E02005008',
        '6NS' => 'E02005008',
        '6NT' => 'E02005008',
        '6PA' => 'E02005008',
        '6PB' => 'E02005008',
        '6PD' => 'E02005008',
        '6PE' => 'E02005008',
        '6PG' => 'E02005008',
        '6PH' => 'E02005008',
        '6PJ' => 'E02005008',
        '6PL' => 'E02005008',
        '6PN' => 'E02005008',
        '6PP' => 'E02005008',
        '6PQ' => 'E02005008',
        '6PR' => 'E02005008',
        '6PS' => 'E02005008',
        '6PT' => 'E02005008',
        '6PU' => 'E02005008',
        '6PW' => 'E02005008',
        '6PX' => 'E02005008',
        '6PY' => 'E02005008',
        '6PZ' => 'E02005008',
        '6QA' => 'E02005008',
        '6QB' => 'E02005008',
        '6QD' => 'E02005008',
        '6QE' => 'E02005008',
        '6QF' => 'E02005008',
        '6QG' => 'E02005008',
        '6QH' => 'E02005008',
        '6QJ' => 'E02005008',
        '6QL' => 'E02005008',
        '6QN' => 'E02005008',
        '6QP' => 'E02005008',
        '6QQ' => 'E02005008',
        '6QR' => 'E02005008',
        '6QS' => 'E02005008',
        '6QT' => 'E02005008',
        '6QU' => 'E02005008',
        '6QW' => 'E02005008',
        '6QX' => 'E02005008',
        '6RA' => 'E02005008',
        '6RB' => 'E02005008',
        '6RD' => 'E02005008',
        '6RE' => 'E02005008',
        '6RF' => 'E02005008',
        '6RG' => 'E02005008',
        '6RH' => 'E02005008',
        '6RJ' => 'E02005008',
        '6RL' => 'E02005008',
        '6RN' => 'E02005008',
        '6RP' => 'E02005009',
        '6RQ' => 'E02005008',
        '6RR' => 'E02005008',
        '6RS' => 'E02005008',
        '6RT' => 'E02005008',
        '6RU' => 'E02005009',
        '6RW' => 'E02005009',
        '6RX' => 'E02005009',
        '6RY' => 'E02005009',
        '6RZ' => 'E02005009',
        '6SA' => 'E02005009',
        '6SB' => 'E02005009',
        '6SD' => 'E02005009',
        '6SE' => 'E02005008',
        '6SF' => 'E02005009',
        '6SG' => 'E02005008',
        '6SH' => 'E02005008',
        '6SJ' => 'E02005008',
        '6SL' => 'E02005008',
        '6SN' => 'E02005008',
        '6SP' => 'E02005008',
        '6SQ' => 'E02005008',
        '6SR' => 'E02005008',
        '6SS' => 'E02005006',
        '6ST' => 'E02005006',
        '6SU' => 'E02005006',
        '6SW' => 'E02005006',
        '6SX' => 'E02005006',
        '6SY' => 'E02005006',
        '6SZ' => 'E02005009',
        '6TA' => 'E02005006',
        '6TB' => 'E02005008',
        '6TD' => 'E02005006',
        '6TE' => 'E02005006',
        '6TG' => 'E02005008',
        '6TH' => 'E02005008',
        '6TJ' => 'E02005008',
        '6TL' => 'E02005008',
        '6TQ' => 'E02005008',
        '6TS' => 'E02005008',
        '6TT' => 'E02005008',
        '6TU' => 'E02005008',
        '6TX' => 'E02005008',
        '6TY' => 'E02005008',
        '6TZ' => 'E02005008',
        '6UA' => 'E02005008',
        '6UB' => 'E02005008',
        '6UD' => 'E02005008',
        '6UE' => 'E02005008',
        '6UG' => 'E02005008',
        '6UH' => 'E02005008',
        '6UJ' => 'E02005008',
        '6UL' => 'E02005008',
        '6UN' => 'E02005008',
        '6UP' => 'E02005008',
        '6UR' => 'E02005006',
        '6UU' => 'E02005006',
        '6UW' => 'E02005008',
        '6UX' => 'E02005008',
        '6UY' => 'E02005008',
        '6WA' => 'E02005008',
        '6WB' => 'E02005008',
        '6WD' => 'E02005008',
        '6WE' => 'E02005008',
        '6WF' => 'E02005008',
        '6WQ' => 'E02005008',
        '6WR' => 'E02005008',
        '6WS' => 'E02005008',
        '6WT' => 'E02005008',
        '6WU' => 'E02005008',
        '6WW' => 'E02005008',
        '6WX' => 'E02005008',
        '6WY' => 'E02005008',
        '6WZ' => 'E02005008',
        '6XA' => 'E02005008',
        '6XH' => 'E02005008',
        '6XJ' => 'E02005008',
        '6XQ' => 'E02005008',
        '6XZ' => 'E02005008',
        '6YB' => 'E02005008',
        '6YP' => 'E02005008',
        '6YQ' => 'E02005008',
        '6YZ' => 'E02005008',
        '6ZA' => 'E02005008',
        '6ZB' => 'E02005008',
        '6ZD' => 'E02005008',
        '6ZE' => 'E02005008',
        '6ZF' => 'E02005008',
        '6ZG' => 'E02005008',
        '6ZH' => 'E02005008',
        '6ZJ' => 'E02005008',
        '6ZL' => 'E02005008',
        '6ZN' => 'E02005008',
        '6ZP' => 'E02005008',
        '6ZQ' => 'E02005008',
        '6ZR' => 'E02005008',
        '6ZS' => 'E02005008',
        '6ZT' => 'E02005008',
        '6ZU' => 'E02005008',
        '6ZW' => 'E02005008',
        '6ZX' => 'E02005008',
        '6ZY' => 'E02005008',
        '6ZZ' => 'E02005008',
        '7AA' => 'E02005009',
        '7AB' => 'E02005008',
        '7AD' => 'E02005009',
        '7AE' => 'E02005009',
        '7AF' => 'E02005009',
        '7AG' => 'E02005009',
        '7AH' => 'E02005009',
        '7AJ' => 'E02005009',
        '7AL' => 'E02005009',
        '7AN' => 'E02005009',
        '7AP' => 'E02005008',
        '7AQ' => 'E02005008',
        '7AR' => 'E02005008',
        '7AS' => 'E02005008',
        '7AT' => 'E02005008',
        '7AU' => 'E02005008',
        '7AW' => 'E02005008',
        '7AX' => 'E02005008',
        '7AY' => 'E02005009',
        '7AZ' => 'E02005008',
        '7BA' => 'E02005009',
        '7BB' => 'E02005009',
        '7BD' => 'E02005009',
        '7BE' => 'E02005009',
        '7BF' => 'E02005008',
        '7BG' => 'E02005009',
        '7BH' => 'E02005008',
        '7BJ' => 'E02005009',
        '7BL' => 'E02005008',
        '7BN' => 'E02005009',
        '7BP' => 'E02005009',
        '7BQ' => 'E02005008',
        '7BS' => 'E02005008',
        '7BT' => 'E02005008',
        '7BU' => 'E02005009',
        '7BW' => 'E02005008',
        '7BX' => 'E02005008',
        '7BY' => 'E02005008',
        '7BZ' => 'E02005008',
        '7DA' => 'E02005008',
        '7DB' => 'E02005009',
        '7DD' => 'E02005009',
        '7DE' => 'E02005009',
        '7DF' => 'E02005009',
        '7DG' => 'E02005009',
        '7DH' => 'E02005009',
        '7DJ' => 'E02005009',
        '7DL' => 'E02005009',
        '7DN' => 'E02005009',
        '7DP' => 'E02005009',
        '7DQ' => 'E02005009',
        '7DR' => 'E02005009',
        '7DS' => 'E02005009',
        '7DT' => 'E02005008',
        '7DU' => 'E02005008',
        '7DW' => 'E02005009',
        '7DX' => 'E02005008',
        '7DY' => 'E02005009',
        '7EA' => 'E02005009',
        '7EB' => 'E02005009',
        '7ED' => 'E02005009',
        '7EE' => 'E02005009',
        '7EF' => 'E02005008',
        '7EG' => 'E02005009',
        '7EH' => 'E02005009',
        '7EJ' => 'E02005009',
        '7EL' => 'E02005009',
        '7EN' => 'E02005009',
        '7EP' => 'E02005009',
        '7EQ' => 'E02005008',
        '7ER' => 'E02005009',
        '7ES' => 'E02005009',
        '7ET' => 'E02005009',
        '7EU' => 'E02005009',
        '7EW' => 'E02005009',
        '7EX' => 'E02005009',
        '7EY' => 'E02005009',
        '7HA' => 'E02005009',
        '7HB' => 'E02005009',
        '7HD' => 'E02005009',
        '7HE' => 'E02005009',
        '7HG' => 'E02005009',
        '7HH' => 'E02005009',
        '7HJ' => 'E02005009',
        '7HL' => 'E02005009',
        '7HN' => 'E02005009',
        '7HQ' => 'E02005008',
        '7HS' => 'E02005009',
        '7HT' => 'E02005009',
        '7HU' => 'E02005009',
        '7HX' => 'E02005009',
        '7HY' => 'E02005009',
        '7JA' => 'E02005009',
        '7JB' => 'E02005009',
        '7JD' => 'E02005009',
        '7JE' => 'E02005009',
        '7JG' => 'E02005009',
        '7JH' => 'E02005009',
        '7JJ' => 'E02005009',
        '7JL' => 'E02005009',
        '7JN' => 'E02005009',
        '7JP' => 'E02005009',
        '7JR' => 'E02005009',
        '7JS' => 'E02005009',
        '7JT' => 'E02005009',
        '7JU' => 'E02005009',
        '7JX' => 'E02005009',
        '7JY' => 'E02005009',
        '7LA' => 'E02005009',
        '7LH' => 'E02005008',
        '7LJ' => 'E02005008',
        '7LL' => 'E02005008',
        '7LN' => 'E02005008',
        '7LP' => 'E02005008',
        '7LQ' => 'E02005008',
        '7LR' => 'E02005008',
        '7LS' => 'E02005008',
        '7LT' => 'E02005008',
        '7LU' => 'E02005008',
        '7LW' => 'E02005008',
        '7LX' => 'E02005008',
        '7LY' => 'E02005008',
        '7LZ' => 'E02005008',
        '7NA' => 'E02005008',
        '7NB' => 'E02005008',
        '7ND' => 'E02005008',
        '7NE' => 'E02005008',
        '7NF' => 'E02005008',
        '7NG' => 'E02005008',
        '7NH' => 'E02005008',
        '7NP' => 'E02005009',
        '7NQ' => 'E02005008',
        '7NR' => 'E02005009',
        '7NS' => 'E02005009',
        '7NT' => 'E02005009',
        '7NU' => 'E02005009',
        '7NW' => 'E02005008',
        '7NX' => 'E02005009',
        '7NY' => 'E02005009',
        '7NZ' => 'E02005009',
        '7PA' => 'E02005009',
        '7PB' => 'E02005009',
        '7PD' => 'E02005009',
        '7PE' => 'E02005009',
        '7PF' => 'E02005009',
        '7PG' => 'E02005009',
        '7PH' => 'E02005009',
        '7PJ' => 'E02005009',
        '7PL' => 'E02005009',
        '7PN' => 'E02005009',
        '7PP' => 'E02005009',
        '7PQ' => 'E02005009',
        '7PR' => 'E02005009',
        '7PS' => 'E02005009',
        '7PT' => 'E02005009',
        '7PU' => 'E02005009',
        '7PX' => 'E02005009',
        '7PZ' => 'E02005009',
        '7QA' => 'E02005008',
        '7QB' => 'E02005009',
        '7QD' => 'E02005009',
        '7WA' => 'E02005008',
        '7WB' => 'E02005008',
        '7WD' => 'E02005008',
        '7XP' => 'E02005009',
        '7XS' => 'E02005009',
        '7XT' => 'E02005009',
        '7YQ' => 'E02005008',
        '7YT' => 'E02005008',
        '7ZA' => 'E02005008',
        '7ZB' => 'E02005008',
        '7ZD' => 'E02005009',
        '7ZE' => 'E02005008',
        '7ZF' => 'E02005008',
        '7ZG' => 'E02005009',
        '7ZH' => 'E02005008',
        '7ZJ' => 'E02005008',
        '7ZL' => 'E02005008',
        '7ZN' => 'E02005008',
        '7ZP' => 'E02005008',
        '7ZQ' => 'E02005008',
        '7ZR' => 'E02005008',
        '7ZS' => 'E02005008',
        '7ZT' => 'E02005008',
        '7ZU' => 'E02005008',
        '7ZW' => 'E02005008',
        '7ZX' => 'E02005008',
        '7ZY' => 'E02005008',
        '7ZZ' => 'E02005008',
        '9AA' => 'E02005008',
        '9AB' => 'E02005008',
        '9AD' => 'E02005008',
        '9AE' => 'E02005008',
        '9AF' => 'E02005008',
        '9AG' => 'E02005008',
        '9AH' => 'E02005008',
        '9AJ' => 'E02005008',
        '9AL' => 'E02005008',
        '9AN' => 'E02005008',
        '9AP' => 'E02005008',
        '9AQ' => 'E02005008',
        '9AR' => 'E02005008',
        '9AS' => 'E02005008',
        '9AT' => 'E02005008',
        '9AU' => 'E02005008',
        '9AW' => 'E02005008',
        '9AX' => 'E02005008',
        '9AY' => 'E02005008',
        '9AZ' => 'E02005008',
        '9BA' => 'E02005008',
        '9BB' => 'E02005008',
        '9BD' => 'E02005008',
        '9BE' => 'E02005008',
        '9BF' => 'E02005008',
        '9BG' => 'E02005008',
        '9BH' => 'E02005008',
        '9BJ' => 'E02005008',
        '9BL' => 'E02005008',
        '9BN' => 'E02005008',
        '9BP' => 'E02005008',
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