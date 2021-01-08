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
final class WC1V
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '6AA' => 'E02000193',
        '6AD' => 'E02000001',
        '6AE' => 'E02000193',
        '6AF' => 'E02000193',
        '6AJ' => 'E02000193',
        '6AL' => 'E02000193',
        '6AN' => 'E02000193',
        '6AP' => 'E02000193',
        '6AQ' => 'E02000193',
        '6AS' => 'E02000193',
        '6AT' => 'E02000193',
        '6AW' => 'E02000001',
        '6AX' => 'E02000193',
        '6AY' => 'E02000193',
        '6AZ' => 'E02000193',
        '6BA' => 'E02000193',
        '6BB' => 'E02000001',
        '6BD' => 'E02000001',
        '6BE' => 'E02000193',
        '6BG' => 'E02000193',
        '6BH' => 'E02000193',
        '6BL' => 'E02000001',
        '6BN' => 'E02000193',
        '6BP' => 'E02000193',
        '6BS' => 'E02000193',
        '6BU' => 'E02000001',
        '6BX' => 'E02000193',
        '6BY' => 'E02000193',
        '6BZ' => 'E02000193',
        '6DA' => 'E02000193',
        '6DB' => 'E02000001',
        '6DE' => 'E02000001',
        '6DF' => 'E02000193',
        '6DJ' => 'E02000001',
        '6DL' => 'E02000001',
        '6DP' => 'E02000001',
        '6DR' => 'E02000193',
        '6DS' => 'E02000193',
        '6DT' => 'E02000193',
        '6DU' => 'E02000193',
        '6DW' => 'E02000193',
        '6DX' => 'E02000193',
        '6DY' => 'E02000193',
        '6EA' => 'E02000193',
        '6EB' => 'E02000193',
        '6ED' => 'E02000193',
        '6EF' => 'E02000193',
        '6EG' => 'E02000193',
        '6EL' => 'E02000193',
        '6EP' => 'E02000193',
        '6ER' => 'E02000193',
        '6ES' => 'E02000193',
        '6EU' => 'E02000193',
        '6EX' => 'E02000193',
        '6HA' => 'E02000193',
        '6HB' => 'E02000972',
        '6HD' => 'E02000193',
        '6HE' => 'E02000193',
        '6HG' => 'E02000193',
        '6HL' => 'E02000193',
        '6HN' => 'E02000193',
        '6HP' => 'E02000193',
        '6HQ' => 'E02000193',
        '6HR' => 'E02000193',
        '6HT' => 'E02000193',
        '6HU' => 'E02000193',
        '6HW' => 'E02000193',
        '6HX' => 'E02000193',
        '6HZ' => 'E02000193',
        '6JD' => 'E02000193',
        '6JE' => 'E02000193',
        '6JF' => 'E02000193',
        '6JJ' => 'E02000193',
        '6JN' => 'E02000193',
        '6JP' => 'E02000193',
        '6JQ' => 'E02000193',
        '6JS' => 'E02000193',
        '6JT' => 'E02000193',
        '6JU' => 'E02000193',
        '6JY' => 'E02000193',
        '6LA' => 'E02000193',
        '6LD' => 'E02000193',
        '6LE' => 'E02000193',
        '6LF' => 'E02000193',
        '6LG' => 'E02000193',
        '6LH' => 'E02000193',
        '6LJ' => 'E02000193',
        '6LL' => 'E02000193',
        '6LP' => 'E02000193',
        '6LQ' => 'E02000193',
        '6LR' => 'E02000193',
        '6LS' => 'E02000193',
        '6LU' => 'E02000193',
        '6LW' => 'E02000193',
        '6LX' => 'E02000193',
        '6LY' => 'E02000193',
        '6NA' => 'E02000193',
        '6NB' => 'E02000193',
        '6NF' => 'E02000193',
        '6NG' => 'E02000193',
        '6NH' => 'E02000193',
        '6NJ' => 'E02000193',
        '6NL' => 'E02000193',
        '6NP' => 'E02000193',
        '6NR' => 'E02000193',
        '6NS' => 'E02000193',
        '6NT' => 'E02000193',
        '6NU' => 'E02000193',
        '6NW' => 'E02000193',
        '6NX' => 'E02000193',
        '6NY' => 'E02000193',
        '6NZ' => 'E02000193',
        '6PA' => 'E02000193',
        '6PB' => 'E02000193',
        '6PD' => 'E02000193',
        '6PE' => 'E02000193',
        '6PG' => 'E02000193',
        '6PH' => 'E02000193',
        '6PJ' => 'E02000193',
        '6PL' => 'E02000193',
        '6PN' => 'E02000193',
        '6PP' => 'E02000193',
        '6PQ' => 'E02000193',
        '6PR' => 'E02000193',
        '6PS' => 'E02000193',
        '6PU' => 'E02000193',
        '6PW' => 'E02000193',
        '6PX' => 'E02000193',
        '6PY' => 'E02000193',
        '6QA' => 'E02000193',
        '6QB' => 'E02000193',
        '6QD' => 'E02000193',
        '6QE' => 'E02000193',
        '6QF' => 'E02000193',
        '6QH' => 'E02000193',
        '6QL' => 'E02000193',
        '6QN' => 'E02000193',
        '6QP' => 'E02000193',
        '6QQ' => 'E02000193',
        '6QR' => 'E02000193',
        '6QS' => 'E02000193',
        '6QT' => 'E02000193',
        '6QX' => 'E02000193',
        '6QY' => 'E02000193',
        '6QZ' => 'E02000193',
        '6RA' => 'E02000193',
        '6RB' => 'E02000193',
        '6RD' => 'E02000193',
        '6RE' => 'E02000193',
        '6RF' => 'E02000193',
        '6RH' => 'E02000193',
        '6RL' => 'E02000193',
        '6RN' => 'E02000193',
        '6RP' => 'E02000193',
        '6RQ' => 'E02000193',
        '6RR' => 'E02000193',
        '6RS' => 'E02000193',
        '6RT' => 'E02000193',
        '6RU' => 'E02000193',
        '6RW' => 'E02000193',
        '6RX' => 'E02000193',
        '6RY' => 'E02000193',
        '6RZ' => 'E02000193',
        '6SA' => 'E02000193',
        '6SB' => 'E02000193',
        '6SD' => 'E02000193',
        '6SE' => 'E02000193',
        '6SG' => 'E02000193',
        '6SH' => 'E02000193',
        '6SJ' => 'E02000193',
        '6SL' => 'E02000193',
        '6SX' => 'E02000193',
        '6TA' => 'E02000193',
        '6TB' => 'E02000193',
        '6TD' => 'E02000193',
        '6TF' => 'E02000193',
        '6TH' => 'E02000193',
        '6TL' => 'E02000193',
        '6TP' => 'E02000193',
        '6TR' => 'E02000193',
        '6TT' => 'E02000193',
        '6TX' => 'E02000193',
        '6UA' => 'E02000972',
        '6UB' => 'E02000193',
        '6UD' => 'E02000193',
        '6UE' => 'E02000193',
        '6WA' => 'E02000193',
        '6WB' => 'E02000193',
        '6WR' => 'E02000972',
        '6WX' => 'E02000575',
        '6WY' => 'E02000575',
        '6WZ' => 'E02000193',
        '6XB' => 'E02000193',
        '6XD' => 'E02000193',
        '6XX' => 'E02000193',
        '6YA' => 'E02000193',
        '6YB' => 'E02000972',
        '6YD' => 'E02000193',
        '6YE' => 'E02000193',
        '6YF' => 'E02000193',
        '6YG' => 'E02000972',
        '6YH' => 'E02000972',
        '6YJ' => 'E02000193',
        '6YL' => 'E02000193',
        '6YN' => 'E02000193',
        '6YP' => 'E02000972',
        '6YQ' => 'E02000972',
        '6YR' => 'E02000193',
        '7AA' => 'E02000193',
        '7AB' => 'E02000193',
        '7AF' => 'E02000193',
        '7AG' => 'E02000193',
        '7AL' => 'E02000193',
        '7AN' => 'E02000193',
        '7AP' => 'E02000193',
        '7AQ' => 'E02000193',
        '7AR' => 'E02000193',
        '7AT' => 'E02000193',
        '7AU' => 'E02000193',
        '7AW' => 'E02000193',
        '7AX' => 'E02000193',
        '7AZ' => 'E02000193',
        '7BA' => 'E02000001',
        '7BB' => 'E02000193',
        '7BD' => 'E02000193',
        '7BE' => 'E02000193',
        '7BF' => 'E02000193',
        '7BG' => 'E02000193',
        '7BH' => 'E02000193',
        '7BJ' => 'E02000193',
        '7BL' => 'E02000193',
        '7BN' => 'E02000001',
        '7BP' => 'E02000193',
        '7BQ' => 'E02000193',
        '7BT' => 'E02000193',
        '7BU' => 'E02000193',
        '7BW' => 'E02000193',
        '7BX' => 'E02000575',
        '7BZ' => 'E02000972',
        '7DA' => 'E02000193',
        '7DB' => 'E02000193',
        '7DE' => 'E02000193',
        '7DF' => 'E02000193',
        '7DG' => 'E02000193',
        '7DH' => 'E02000193',
        '7DJ' => 'E02000193',
        '7DL' => 'E02000193',
        '7DN' => 'E02000193',
        '7DP' => 'E02000193',
        '7DQ' => 'E02000193',
        '7DR' => 'E02000193',
        '7DS' => 'E02000193',
        '7DT' => 'E02000193',
        '7DU' => 'E02000193',
        '7DW' => 'E02000193',
        '7DX' => 'E02000193',
        '7DY' => 'E02000193',
        '7DZ' => 'E02000193',
        '7EA' => 'E02000193',
        '7EB' => 'E02000193',
        '7EE' => 'E02000193',
        '7EG' => 'E02000193',
        '7EH' => 'E02000193',
        '7EJ' => 'E02000193',
        '7EN' => 'E02000193',
        '7EP' => 'E02000193',
        '7EQ' => 'E02000193',
        '7ER' => 'E02000193',
        '7ES' => 'E02000193',
        '7ET' => 'E02000193',
        '7EU' => 'E02000193',
        '7EW' => 'E02000193',
        '7EX' => 'E02000193',
        '7EY' => 'E02000193',
        '7EZ' => 'E02000193',
        '7HA' => 'E02000193',
        '7HD' => 'E02000193',
        '7HE' => 'E02000193',
        '7HF' => 'E02000193',
        '7HG' => 'E02000193',
        '7HH' => 'E02000193',
        '7HJ' => 'E02000193',
        '7HN' => 'E02000193',
        '7HP' => 'E02000193',
        '7HS' => 'E02000193',
        '7HT' => 'E02000193',
        '7HU' => 'E02000193',
        '7HX' => 'E02000193',
        '7HY' => 'E02000193',
        '7HZ' => 'E02000193',
        '7JD' => 'E02000193',
        '7JG' => 'E02000193',
        '7JH' => 'E02000193',
        '7JJ' => 'E02000193',
        '7JL' => 'E02000193',
        '7JN' => 'E02000193',
        '7JQ' => 'E02000193',
        '7JS' => 'E02000193',
        '7JU' => 'E02000193',
        '7JW' => 'E02000193',
        '7JX' => 'E02000193',
        '7JY' => 'E02000193',
        '7JZ' => 'E02000193',
        '7LA' => 'E02000193',
        '7LB' => 'E02000193',
        '7LE' => 'E02000193',
        '7LH' => 'E02000193',
        '7LJ' => 'E02000193',
        '7LL' => 'E02000193',
        '7LN' => 'E02000193',
        '7LP' => 'E02000193',
        '7LR' => 'E02000193',
        '7LS' => 'E02000193',
        '7LU' => 'E02000193',
        '7LX' => 'E02000193',
        '7LZ' => 'E02000001',
        '7NA' => 'E02000193',
        '7NB' => 'E02000001',
        '7NE' => 'E02000193',
        '7NF' => 'E02000193',
        '7NG' => 'E02000001',
        '7NH' => 'E02000193',
        '7NJ' => 'E02000001',
        '7NL' => 'E02000001',
        '7NQ' => 'E02000001',
        '7NS' => 'E02000001',
        '7NW' => 'E02000193',
        '7PA' => 'E02000001',
        '7PB' => 'E02000001',
        '7PD' => 'E02000193',
        '7PE' => 'E02000001',
        '7PF' => 'E02000001',
        '7PH' => 'E02000001',
        '7PL' => 'E02000001',
        '7PN' => 'E02000001',
        '7PP' => 'E02000001',
        '7PQ' => 'E02000193',
        '7PS' => 'E02000575',
        '7PT' => 'E02000001',
        '7PU' => 'E02000001',
        '7PW' => 'E02000001',
        '7PX' => 'E02000001',
        '7PY' => 'E02000001',
        '7PZ' => 'E02000001',
        '7QA' => 'E02000001',
        '7QB' => 'E02000001',
        '7QD' => 'E02000001',
        '7QE' => 'E02000001',
        '7QF' => 'E02000001',
        '7QG' => 'E02000001',
        '7QH' => 'E02000001',
        '7QJ' => 'E02000001',
        '7QL' => 'E02000001',
        '7QN' => 'E02000193',
        '7QQ' => 'E02000001',
        '7QR' => 'E02000193',
        '7QS' => 'E02000001',
        '7QT' => 'E02000001',
        '7QU' => 'E02000001',
        '7QW' => 'E02000001',
        '7QX' => 'E02000193',
        '7QY' => 'E02000001',
        '7QZ' => 'E02000001',
        '7RD' => 'E02000001',
        '7RH' => 'E02000001',
        '7RL' => 'E02000193',
        '7RN' => 'E02000193',
        '7RP' => 'E02000193',
        '7RR' => 'E02000972',
        '7RT' => 'E02000972',
        '7RU' => 'E02000193',
        '7RW' => 'E02000193',
        '7RY' => 'E02000193',
        '7RZ' => 'E02000972',
        '7SA' => 'E02000193',
        '7SB' => 'E02000972',
        '7SD' => 'E02000972',
        '7SE' => 'E02000193',
        '7WA' => 'E02000193',
        '7WB' => 'E02000193',
        '7WE' => 'E02000575',
        '7WF' => 'E02000193',
        '7WR' => 'E02000193',
        '7WS' => 'E02000193',
        '7WT' => 'E02000193',
        '7WU' => 'E02000193',
        '7WW' => 'E02000193',
        '7WX' => 'E02000972',
        '7WY' => 'E02000193',
        '7WZ' => 'E02000193',
        '7XF' => 'E02000193',
        '7XG' => 'E02000193',
        '7XN' => 'E02000193',
        '7YB' => 'E02000193',
        '7YD' => 'E02000193',
        '7YE' => 'E02000193',
        '7YF' => 'E02000193',
        '7YG' => 'E02000193',
        '7YP' => 'E02000575',
        '7YQ' => 'E02000193',
        '7YZ' => 'E02000972',
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