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
final class HU4
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '6AA' => 'E02002679',
        '6AB' => 'E02002679',
        '6AD' => 'E02002679',
        '6AE' => 'E02002679',
        '6AF' => 'E02002679',
        '6AG' => 'E02002679',
        '6AH' => 'E02002679',
        '6AJ' => 'E02002679',
        '6AL' => 'E02002679',
        '6AN' => 'E02002679',
        '6AP' => 'E02002679',
        '6AQ' => 'E02002679',
        '6AR' => 'E02002679',
        '6AS' => 'E02002679',
        '6AT' => 'E02002679',
        '6AU' => 'E02002679',
        '6AW' => 'E02002682',
        '6AX' => 'E02002682',
        '6AY' => 'E02002682',
        '6AZ' => 'E02002679',
        '6BA' => 'E02002682',
        '6BB' => 'E02002679',
        '6BD' => 'E02002682',
        '6BE' => 'E02002682',
        '6BH' => 'E02002679',
        '6BJ' => 'E02002679',
        '6BL' => 'E02002679',
        '6BN' => 'E02002679',
        '6BP' => 'E02002679',
        '6BQ' => 'E02002682',
        '6BS' => 'E02002679',
        '6BT' => 'E02002679',
        '6BU' => 'E02002678',
        '6BW' => 'E02002679',
        '6BX' => 'E02002679',
        '6BY' => 'E02002679',
        '6BZ' => 'E02002679',
        '6DA' => 'E02002679',
        '6DB' => 'E02002679',
        '6DD' => 'E02002679',
        '6DE' => 'E02002679',
        '6DF' => 'E02002679',
        '6DG' => 'E02002679',
        '6DH' => 'E02002679',
        '6DJ' => 'E02002679',
        '6DL' => 'E02002679',
        '6DN' => 'E02002679',
        '6DP' => 'E02002679',
        '6DQ' => 'E02002679',
        '6DR' => 'E02002679',
        '6DS' => 'E02002679',
        '6DT' => 'E02002679',
        '6DU' => 'E02002679',
        '6DW' => 'E02002679',
        '6DX' => 'E02002679',
        '6DY' => 'E02002679',
        '6DZ' => 'E02002679',
        '6EA' => 'E02002679',
        '6EB' => 'E02002679',
        '6ED' => 'E02002679',
        '6EE' => 'E02002679',
        '6EF' => 'E02002679',
        '6EG' => 'E02002679',
        '6EL' => 'E02002682',
        '6EN' => 'E02002679',
        '6EP' => 'E02002679',
        '6EQ' => 'E02002679',
        '6ER' => 'E02002679',
        '6ES' => 'E02002679',
        '6ET' => 'E02002682',
        '6EU' => 'E02002682',
        '6EW' => 'E02002679',
        '6EX' => 'E02002682',
        '6EY' => 'E02002682',
        '6EZ' => 'E02002682',
        '6GA' => 'E02002682',
        '6HA' => 'E02002682',
        '6HB' => 'E02002682',
        '6HD' => 'E02002682',
        '6HE' => 'E02002682',
        '6HF' => 'E02002682',
        '6HG' => 'E02002682',
        '6HH' => 'E02002682',
        '6HJ' => 'E02002682',
        '6HL' => 'E02002682',
        '6HN' => 'E02002682',
        '6HQ' => 'E02002682',
        '6JA' => 'E02002682',
        '6JB' => 'E02002682',
        '6JD' => 'E02002682',
        '6JE' => 'E02002682',
        '6JG' => 'E02002682',
        '6JH' => 'E02002682',
        '6JJ' => 'E02002682',
        '6JL' => 'E02002682',
        '6JN' => 'E02002682',
        '6JP' => 'E02002682',
        '6JQ' => 'E02002682',
        '6JR' => 'E02002682',
        '6JS' => 'E02002682',
        '6JT' => 'E02002682',
        '6JU' => 'E02002682',
        '6JW' => 'E02002682',
        '6JX' => 'E02002682',
        '6JY' => 'E02002682',
        '6JZ' => 'E02002682',
        '6LA' => 'E02002682',
        '6LB' => 'E02002682',
        '6LD' => 'E02002682',
        '6LE' => 'E02002682',
        '6LF' => 'E02002682',
        '6LG' => 'E02002682',
        '6LH' => 'E02002682',
        '6LJ' => 'E02002682',
        '6LQ' => 'E02002682',
        '6LS' => 'E02002682',
        '6LT' => 'E02002682',
        '6LU' => 'E02002682',
        '6LX' => 'E02002682',
        '6LY' => 'E02002682',
        '6LZ' => 'E02002682',
        '6NA' => 'E02002682',
        '6NB' => 'E02002682',
        '6ND' => 'E02002682',
        '6NE' => 'E02002682',
        '6NF' => 'E02002682',
        '6NG' => 'E02002682',
        '6NH' => 'E02002682',
        '6NJ' => 'E02006813',
        '6NL' => 'E02002682',
        '6NN' => 'E02002682',
        '6NP' => 'E02002682',
        '6NQ' => 'E02002682',
        '6NR' => 'E02002682',
        '6NS' => 'E02002682',
        '6NT' => 'E02002682',
        '6NU' => 'E02002682',
        '6NW' => 'E02002682',
        '6PA' => 'E02002682',
        '6PB' => 'E02002682',
        '6PD' => 'E02002682',
        '6PE' => 'E02002682',
        '6PF' => 'E02002682',
        '6PG' => 'E02002682',
        '6PH' => 'E02002682',
        '6PJ' => 'E02002682',
        '6PL' => 'E02002682',
        '6PN' => 'E02002682',
        '6PP' => 'E02002682',
        '6PQ' => 'E02002682',
        '6PR' => 'E02002682',
        '6PS' => 'E02002682',
        '6PT' => 'E02002682',
        '6PU' => 'E02002682',
        '6PW' => 'E02002682',
        '6PX' => 'E02002682',
        '6PY' => 'E02002682',
        '6PZ' => 'E02002682',
        '6QA' => 'E02002682',
        '6QB' => 'E02002682',
        '6QD' => 'E02002682',
        '6QE' => 'E02002682',
        '6QF' => 'E02002682',
        '6QG' => 'E02006813',
        '6QH' => 'E02002682',
        '6QJ' => 'E02002682',
        '6QL' => 'E02002682',
        '6QN' => 'E02006813',
        '6QP' => 'E02006813',
        '6QQ' => 'E02002682',
        '6QR' => 'E02006813',
        '6RA' => 'E02002682',
        '6RB' => 'E02002682',
        '6RD' => 'E02002682',
        '6RE' => 'E02002682',
        '6RF' => 'E02002682',
        '6RG' => 'E02002682',
        '6RH' => 'E02002682',
        '6RJ' => 'E02002682',
        '6RL' => 'E02002682',
        '6RN' => 'E02002682',
        '6RP' => 'E02002682',
        '6RQ' => 'E02002682',
        '6RR' => 'E02002682',
        '6RS' => 'E02006813',
        '6RT' => 'E02002682',
        '6RU' => 'E02006813',
        '6RW' => 'E02002682',
        '6RX' => 'E02006813',
        '6RY' => 'E02006813',
        '6RZ' => 'E02006813',
        '6SA' => 'E02006813',
        '6SB' => 'E02006813',
        '6SD' => 'E02006813',
        '6SE' => 'E02006813',
        '6SF' => 'E02006813',
        '6SG' => 'E02006813',
        '6SH' => 'E02006813',
        '6SJ' => 'E02006813',
        '6SL' => 'E02006813',
        '6SN' => 'E02006813',
        '6SP' => 'E02006813',
        '6SQ' => 'E02006813',
        '6SR' => 'E02006813',
        '6SS' => 'E02006813',
        '6ST' => 'E02006813',
        '6SU' => 'E02006813',
        '6SW' => 'E02006813',
        '6SX' => 'E02006813',
        '6SY' => 'E02006813',
        '6SZ' => 'E02006813',
        '6TA' => 'E02002679',
        '6TB' => 'E02002679',
        '6TD' => 'E02002679',
        '6TE' => 'E02002679',
        '6TF' => 'E02002679',
        '6TG' => 'E02006813',
        '6TH' => 'E02002679',
        '6TJ' => 'E02002679',
        '6TL' => 'E02002679',
        '6TN' => 'E02002679',
        '6TP' => 'E02002679',
        '6TR' => 'E02002679',
        '6TS' => 'E02002679',
        '6TT' => 'E02002679',
        '6TU' => 'E02002679',
        '6TW' => 'E02002679',
        '6TX' => 'E02002679',
        '6TY' => 'E02002679',
        '6UA' => 'E02006813',
        '6UB' => 'E02006813',
        '6UD' => 'E02006813',
        '6UE' => 'E02006813',
        '6UF' => 'E02006813',
        '6UG' => 'E02006813',
        '6UH' => 'E02006813',
        '6UJ' => 'E02006813',
        '6UL' => 'E02006813',
        '6UN' => 'E02006813',
        '6UP' => 'E02006813',
        '6UQ' => 'E02006813',
        '6UR' => 'E02006813',
        '6US' => 'E02006813',
        '6UT' => 'E02006813',
        '6UW' => 'E02006813',
        '6UY' => 'E02002677',
        '6UZ' => 'E02002677',
        '6WA' => 'E02002677',
        '6WP' => 'E02002677',
        '6WQ' => 'E02002677',
        '6WR' => 'E02002677',
        '6WS' => 'E02002677',
        '6WT' => 'E02002677',
        '6WU' => 'E02002677',
        '6WW' => 'E02002677',
        '6WX' => 'E02002677',
        '6WY' => 'E02002677',
        '6WZ' => 'E02002677',
        '6XA' => 'E02002679',
        '6XB' => 'E02002679',
        '6XD' => 'E02002679',
        '6XE' => 'E02002679',
        '6XF' => 'E02002677',
        '6XG' => 'E02002679',
        '6XH' => 'E02002679',
        '6XJ' => 'E02002679',
        '6XL' => 'E02002679',
        '6XN' => 'E02002679',
        '6XP' => 'E02002679',
        '6XQ' => 'E02006813',
        '6XR' => 'E02002679',
        '6XS' => 'E02002679',
        '6XT' => 'E02002679',
        '6XU' => 'E02002679',
        '6XW' => 'E02002679',
        '6XX' => 'E02006813',
        '6XY' => 'E02006813',
        '6XZ' => 'E02002679',
        '6YA' => 'E02002677',
        '6YB' => 'E02002677',
        '6YD' => 'E02002682',
        '6YE' => 'E02002682',
        '6YF' => 'E02002682',
        '6YG' => 'E02002682',
        '6YH' => 'E02002677',
        '6YJ' => 'E02002677',
        '6YL' => 'E02002682',
        '6YN' => 'E02002682',
        '6YP' => 'E02002677',
        '6YQ' => 'E02002682',
        '6YR' => 'E02002682',
        '6YS' => 'E02002679',
        '6YT' => 'E02002677',
        '6YU' => 'E02002679',
        '6YW' => 'E02002679',
        '6YX' => 'E02002679',
        '6YY' => 'E02002677',
        '6YZ' => 'E02002677',
        '6ZY' => 'E02002677',
        '7AA' => 'E02002682',
        '7AB' => 'E02002682',
        '7AD' => 'E02006813',
        '7AE' => 'E02006813',
        '7AF' => 'E02006813',
        '7AG' => 'E02006813',
        '7AH' => 'E02006813',
        '7AJ' => 'E02006813',
        '7AL' => 'E02006813',
        '7AN' => 'E02006813',
        '7AP' => 'E02006813',
        '7AQ' => 'E02002682',
        '7AR' => 'E02006813',
        '7AS' => 'E02006813',
        '7AT' => 'E02002682',
        '7AU' => 'E02006813',
        '7AW' => 'E02006813',
        '7AX' => 'E02002682',
        '7AY' => 'E02002682',
        '7AZ' => 'E02002682',
        '7BA' => 'E02006813',
        '7BB' => 'E02006813',
        '7BD' => 'E02006813',
        '7BE' => 'E02006813',
        '7BG' => 'E02006813',
        '7BH' => 'E02006813',
        '7BJ' => 'E02006813',
        '7BL' => 'E02006813',
        '7BN' => 'E02006813',
        '7BP' => 'E02006813',
        '7BS' => 'E02006813',
        '7BT' => 'E02006813',
        '7BU' => 'E02006813',
        '7BW' => 'E02006814',
        '7BX' => 'E02006813',
        '7BY' => 'E02006813',
        '7BZ' => 'E02006813',
        '7DA' => 'E02006813',
        '7DB' => 'E02006813',
        '7DD' => 'E02006813',
        '7DE' => 'E02006813',
        '7DF' => 'E02006813',
        '7DG' => 'E02006813',
        '7DH' => 'E02006813',
        '7DJ' => 'E02006813',
        '7DL' => 'E02006813',
        '7DN' => 'E02006813',
        '7DP' => 'E02006813',
        '7DQ' => 'E02006813',
        '7DR' => 'E02006813',
        '7DS' => 'E02006813',
        '7DT' => 'E02006813',
        '7DU' => 'E02006813',
        '7DW' => 'E02006813',
        '7DX' => 'E02006813',
        '7DY' => 'E02006813',
        '7DZ' => 'E02006813',
        '7EA' => 'E02006813',
        '7EB' => 'E02006813',
        '7ED' => 'E02006813',
        '7EE' => 'E02006813',
        '7EH' => 'E02006813',
        '7EJ' => 'E02006813',
        '7EL' => 'E02006813',
        '7EN' => 'E02006813',
        '7EP' => 'E02006813',
        '7EQ' => 'E02006813',
        '7ER' => 'E02006813',
        '7ES' => 'E02006813',
        '7ET' => 'E02006813',
        '7EU' => 'E02006813',
        '7EW' => 'E02006813',
        '7EX' => 'E02006813',
        '7EY' => 'E02006813',
        '7EZ' => 'E02006813',
        '7HA' => 'E02006813',
        '7HB' => 'E02006813',
        '7HD' => 'E02006813',
        '7HE' => 'E02006813',
        '7HG' => 'E02006813',
        '7HH' => 'E02006813',
        '7HJ' => 'E02006813',
        '7HL' => 'E02006813',
        '7HN' => 'E02006813',
        '7JA' => 'E02006813',
        '7JB' => 'E02006813',
        '7JD' => 'E02006813',
        '7JE' => 'E02006813',
        '7JF' => 'E02006813',
        '7JG' => 'E02006813',
        '7JH' => 'E02006813',
        '7JJ' => 'E02006813',
        '7JL' => 'E02006813',
        '7JN' => 'E02006813',
        '7JP' => 'E02006813',
        '7JR' => 'E02006813',
        '7JS' => 'E02006813',
        '7JT' => 'E02006813',
        '7JU' => 'E02006813',
        '7JX' => 'E02006813',
        '7JY' => 'E02006813',
        '7JZ' => 'E02006813',
        '7LE' => 'E02006813',
        '7LF' => 'E02006813',
        '7LG' => 'E02006813',
        '7LH' => 'E02006813',
        '7LJ' => 'E02006813',
        '7LL' => 'E02006813',
        '7NA' => 'E02006813',
        '7NB' => 'E02006813',
        '7ND' => 'E02006813',
        '7NE' => 'E02006814',
        '7NF' => 'E02006813',
        '7NG' => 'E02006813',
        '7NH' => 'E02006813',
        '7NJ' => 'E02006813',
        '7NL' => 'E02006813',
        '7NN' => 'E02006813',
        '7NP' => 'E02006814',
        '7NQ' => 'E02006813',
        '7NR' => 'E02006814',
        '7NS' => 'E02006813',
        '7NT' => 'E02006813',
        '7NU' => 'E02006813',
        '7NX' => 'E02006813',
        '7NY' => 'E02006813',
        '7NZ' => 'E02006813',
        '7PA' => 'E02006813',
        '7PL' => 'E02006814',
        '7PN' => 'E02002679',
        '7PP' => 'E02002679',
        '7PQ' => 'E02006813',
        '7PR' => 'E02006814',
        '7PS' => 'E02006814',
        '7PT' => 'E02006814',
        '7PU' => 'E02006814',
        '7PW' => 'E02002679',
        '7PX' => 'E02006814',
        '7PY' => 'E02006814',
        '7PZ' => 'E02006814',
        '7QA' => 'E02006814',
        '7QB' => 'E02006814',
        '7QD' => 'E02006813',
        '7QE' => 'E02006813',
        '7QF' => 'E02006813',
        '7QG' => 'E02006814',
        '7QH' => 'E02006814',
        '7QJ' => 'E02006814',
        '7QL' => 'E02006814',
        '7QQ' => 'E02006814',
        '7RA' => 'E02002679',
        '7RB' => 'E02002679',
        '7RD' => 'E02006814',
        '7RE' => 'E02006814',
        '7RG' => 'E02006814',
        '7RH' => 'E02006814',
        '7RJ' => 'E02006814',
        '7RL' => 'E02006814',
        '7RN' => 'E02006814',
        '7RP' => 'E02002679',
        '7RQ' => 'E02006814',
        '7RR' => 'E02006814',
        '7RS' => 'E02006814',
        '7RT' => 'E02006814',
        '7RU' => 'E02006814',
        '7RX' => 'E02006814',
        '7RY' => 'E02006814',
        '7RZ' => 'E02006814',
        '7SA' => 'E02006814',
        '7SB' => 'E02006814',
        '7SD' => 'E02006814',
        '7SE' => 'E02006814',
        '7SF' => 'E02006814',
        '7SG' => 'E02006814',
        '7SH' => 'E02006814',
        '7SJ' => 'E02006814',
        '7SL' => 'E02006814',
        '7SN' => 'E02006814',
        '7SP' => 'E02006814',
        '7SQ' => 'E02006814',
        '7SR' => 'E02006814',
        '7SS' => 'E02006814',
        '7ST' => 'E02006814',
        '7SU' => 'E02006814',
        '7SW' => 'E02006814',
        '7SX' => 'E02006814',
        '7SY' => 'E02006814',
        '7SZ' => 'E02002679',
        '7TA' => 'E02006814',
        '7TB' => 'E02006813',
        '7WU' => 'E02002677',
        '7WW' => 'E02002717',
        '7WX' => 'E02002677',
        '7WY' => 'E02002677',
        '7WZ' => 'E02006813',
        '7YE' => 'E02002717',
        '7YF' => 'E02002677',
        '7YG' => 'E02002677',
        '7YH' => 'E02006814',
        '7YJ' => 'E02006813',
        '7YL' => 'E02002677',
        '7YN' => 'E02006814',
        '7YP' => 'E02006813',
        '7YQ' => 'E02002677',
        '7YR' => 'E02006813',
        '7YS' => 'E02002677',
        '7YT' => 'E02006814',
        '7YU' => 'E02006813',
        '7YW' => 'E02006814',
        '7YX' => 'E02006813',
        '7YY' => 'E02002677',
        '7YZ' => 'E02002677',
        '9AA' => 'E02002717',
        '9AB' => 'E02002717',
        '9AD' => 'E02002717',
        '9AE' => 'E02002717',
        '9AF' => 'E02002717',
        '9AG' => 'E02002717',
        '9AH' => 'E02002717',
        '9AJ' => 'E02002717',
        '9AL' => 'E02002717',
        '9AN' => 'E02002717',
        '9AP' => 'E02002717',
        '9AX' => 'E02002717',
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
