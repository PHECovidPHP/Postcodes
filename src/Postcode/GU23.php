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
final class GU23
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '6AA' => 'E02006344',
        '6AB' => 'E02006344',
        '6AD' => 'E02006344',
        '6AE' => 'E02006344',
        '6AF' => 'E02006344',
        '6AG' => 'E02006344',
        '6AH' => 'E02006344',
        '6AJ' => 'E02006344',
        '6AL' => 'E02006344',
        '6AN' => 'E02006344',
        '6AP' => 'E02006344',
        '6AQ' => 'E02006344',
        '6AR' => 'E02006344',
        '6AS' => 'E02006344',
        '6AT' => 'E02006344',
        '6AU' => 'E02006344',
        '6AW' => 'E02006344',
        '6AX' => 'E02006344',
        '6AY' => 'E02006344',
        '6AZ' => 'E02006344',
        '6BA' => 'E02006344',
        '6BB' => 'E02006344',
        '6BD' => 'E02006344',
        '6BE' => 'E02006344',
        '6BF' => 'E02006344',
        '6BG' => 'E02006344',
        '6BH' => 'E02006344',
        '6BJ' => 'E02006344',
        '6BL' => 'E02006461',
        '6BN' => 'E02006344',
        '6BP' => 'E02006344',
        '6BQ' => 'E02006344',
        '6BS' => 'E02006344',
        '6BT' => 'E02006344',
        '6BW' => 'E02006344',
        '6BX' => 'E02006344',
        '6BY' => 'E02006344',
        '6BZ' => 'E02006344',
        '6DA' => 'E02006344',
        '6DB' => 'E02006344',
        '6DD' => 'E02006344',
        '6DE' => 'E02006344',
        '6DF' => 'E02006344',
        '6DG' => 'E02006344',
        '6DH' => 'E02006344',
        '6DJ' => 'E02006344',
        '6DL' => 'E02006344',
        '6DN' => 'E02006344',
        '6DP' => 'E02006344',
        '6DQ' => 'E02006344',
        '6DR' => 'E02006344',
        '6DS' => 'E02006344',
        '6DT' => 'E02006344',
        '6DU' => 'E02006344',
        '6DW' => 'E02006344',
        '6DX' => 'E02006344',
        '6DY' => 'E02006344',
        '6DZ' => 'E02006344',
        '6EA' => 'E02006344',
        '6ED' => 'E02006344',
        '6EH' => 'E02006344',
        '6EJ' => 'E02006344',
        '6EL' => 'E02006344',
        '6EN' => 'E02006344',
        '6EP' => 'E02006344',
        '6EQ' => 'E02006344',
        '6ER' => 'E02006344',
        '6ES' => 'E02006344',
        '6ET' => 'E02006344',
        '6EU' => 'E02006344',
        '6EW' => 'E02006344',
        '6EX' => 'E02006344',
        '6EY' => 'E02006344',
        '6EZ' => 'E02006344',
        '6FF' => 'E02006344',
        '6HA' => 'E02006344',
        '6HB' => 'E02006344',
        '6HD' => 'E02006344',
        '6HF' => 'E02006344',
        '6HH' => 'E02006344',
        '6HJ' => 'E02006344',
        '6HL' => 'E02006344',
        '6HP' => 'E02006344',
        '6HR' => 'E02006344',
        '6HS' => 'E02006344',
        '6HT' => 'E02006344',
        '6JA' => 'E02006344',
        '6JB' => 'E02006344',
        '6JD' => 'E02006344',
        '6JE' => 'E02006344',
        '6JF' => 'E02006344',
        '6JG' => 'E02006344',
        '6JH' => 'E02006344',
        '6JJ' => 'E02006344',
        '6JL' => 'E02006344',
        '6JN' => 'E02006344',
        '6JP' => 'E02006344',
        '6JQ' => 'E02006344',
        '6JR' => 'E02006344',
        '6JS' => 'E02006344',
        '6JT' => 'E02006344',
        '6JU' => 'E02006344',
        '6JW' => 'E02006344',
        '6JX' => 'E02006344',
        '6JY' => 'E02006344',
        '6JZ' => 'E02006344',
        '6LA' => 'E02006344',
        '6LB' => 'E02006344',
        '6LD' => 'E02006344',
        '6LE' => 'E02006344',
        '6LF' => 'E02006344',
        '6LG' => 'E02006344',
        '6LH' => 'E02006344',
        '6LJ' => 'E02006344',
        '6LL' => 'E02006344',
        '6LN' => 'E02006344',
        '6LP' => 'E02006344',
        '6LQ' => 'E02006344',
        '6LR' => 'E02006344',
        '6LS' => 'E02006344',
        '6LT' => 'E02006344',
        '6LW' => 'E02006344',
        '6NA' => 'E02006344',
        '6NB' => 'E02006344',
        '6ND' => 'E02006344',
        '6NE' => 'E02006344',
        '6NF' => 'E02006344',
        '6NG' => 'E02006344',
        '6NH' => 'E02006344',
        '6NJ' => 'E02006344',
        '6NL' => 'E02006344',
        '6NN' => 'E02006344',
        '6NP' => 'E02006344',
        '6NQ' => 'E02006344',
        '6NR' => 'E02006344',
        '6NS' => 'E02006344',
        '6NT' => 'E02006344',
        '6NU' => 'E02006344',
        '6NW' => 'E02006344',
        '6NX' => 'E02006344',
        '6NY' => 'E02006344',
        '6NZ' => 'E02006344',
        '6PA' => 'E02006344',
        '6PB' => 'E02006344',
        '6PD' => 'E02006346',
        '6PE' => 'E02006344',
        '6PF' => 'E02006344',
        '6PG' => 'E02006344',
        '6PH' => 'E02006344',
        '6PJ' => 'E02006344',
        '6PQ' => 'E02006346',
        '6PT' => 'E02006344',
        '6PU' => 'E02006344',
        '6PX' => 'E02006344',
        '6PY' => 'E02006344',
        '6QA' => 'E02006344',
        '6QB' => 'E02006344',
        '6QD' => 'E02006344',
        '6QE' => 'E02006344',
        '6QF' => 'E02006344',
        '6QG' => 'E02006344',
        '6QH' => 'E02006344',
        '6QJ' => 'E02006344',
        '6QL' => 'E02006344',
        '6QN' => 'E02006344',
        '6QP' => 'E02006344',
        '6QQ' => 'E02006344',
        '6QR' => 'E02006344',
        '6QS' => 'E02006344',
        '6QT' => 'E02006344',
        '6QU' => 'E02006461',
        '6QW' => 'E02006461',
        '6QX' => 'E02006344',
        '6QZ' => 'E02006344',
        '6UY' => 'E02006344',
        '6UZ' => 'E02006344',
        '6WA' => 'E02006461',
        '6WB' => 'E02006344',
        '6WD' => 'E02006344',
        '6WE' => 'E02006461',
        '6WF' => 'E02006461',
        '6WG' => 'E02006461',
        '6WH' => 'E02006344',
        '6WJ' => 'E02006461',
        '6WL' => 'E02006344',
        '6WN' => 'E02006461',
        '6WP' => 'E02006344',
        '6WQ' => 'E02006461',
        '6WR' => 'E02006344',
        '6WS' => 'E02006344',
        '6WT' => 'E02006344',
        '6WU' => 'E02006461',
        '6WW' => 'E02006461',
        '6WX' => 'E02006344',
        '6WY' => 'E02006461',
        '6WZ' => 'E02006344',
        '6XA' => 'E02006461',
        '6XB' => 'E02006344',
        '6XD' => 'E02006344',
        '6XE' => 'E02006344',
        '6XF' => 'E02006344',
        '6XG' => 'E02006344',
        '6XH' => 'E02006344',
        '6XJ' => 'E02006461',
        '6XL' => 'E02006461',
        '6XN' => 'E02006461',
        '6XP' => 'E02006461',
        '6XQ' => 'E02006344',
        '6XR' => 'E02006344',
        '6XS' => 'E02006461',
        '6XT' => 'E02006344',
        '6XU' => 'E02006344',
        '6XW' => 'E02006344',
        '6XX' => 'E02006344',
        '6XY' => 'E02006344',
        '6XZ' => 'E02006344',
        '6YA' => 'E02006344',
        '6YB' => 'E02006344',
        '6YD' => 'E02006344',
        '6YE' => 'E02006344',
        '6YF' => 'E02006461',
        '6YG' => 'E02006344',
        '6YH' => 'E02006461',
        '6YJ' => 'E02006461',
        '6YN' => 'E02006344',
        '6YP' => 'E02006344',
        '6YQ' => 'E02006344',
        '6YR' => 'E02006461',
        '6YS' => 'E02006344',
        '6YT' => 'E02006461',
        '6YU' => 'E02006461',
        '6YW' => 'E02006344',
        '6YX' => 'E02006344',
        '6YY' => 'E02006344',
        '6YZ' => 'E02006461',
        '6ZF' => 'E02006461',
        '6ZN' => 'E02006461',
        '6ZQ' => 'E02006461',
        '6ZR' => 'E02006461',
        '6ZU' => 'E02006461',
        '7AA' => 'E02006344',
        '7AB' => 'E02006344',
        '7AD' => 'E02006344',
        '7AE' => 'E02006344',
        '7AF' => 'E02006344',
        '7AG' => 'E02006344',
        '7AH' => 'E02006344',
        '7AJ' => 'E02006344',
        '7AL' => 'E02006344',
        '7AN' => 'E02006344',
        '7AP' => 'E02006344',
        '7AQ' => 'E02006344',
        '7AR' => 'E02006344',
        '7AS' => 'E02006344',
        '7AT' => 'E02006344',
        '7AU' => 'E02006344',
        '7AW' => 'E02006344',
        '7AX' => 'E02006344',
        '7AY' => 'E02006344',
        '7AZ' => 'E02006344',
        '7BA' => 'E02006461',
        '7BD' => 'E02006344',
        '7BE' => 'E02006344',
        '7BF' => 'E02006344',
        '7BP' => 'E02006344',
        '7BS' => 'E02006344',
        '7BT' => 'E02006344',
        '7BU' => 'E02006344',
        '7BX' => 'E02006344',
        '7BY' => 'E02006344',
        '7BZ' => 'E02006344',
        '7DA' => 'E02006344',
        '7DB' => 'E02006344',
        '7DD' => 'E02006344',
        '7DE' => 'E02006344',
        '7DF' => 'E02006344',
        '7DG' => 'E02006344',
        '7DH' => 'E02006344',
        '7DJ' => 'E02006344',
        '7DL' => 'E02006344',
        '7DN' => 'E02006344',
        '7DQ' => 'E02006344',
        '7DW' => 'E02006344',
        '7DY' => 'E02006344',
        '7DZ' => 'E02006344',
        '7EA' => 'E02006344',
        '7EB' => 'E02006344',
        '7ED' => 'E02006344',
        '7EE' => 'E02006344',
        '7EF' => 'E02006344',
        '7EG' => 'E02006344',
        '7EH' => 'E02006344',
        '7EJ' => 'E02006344',
        '7EL' => 'E02006344',
        '7EN' => 'E02006344',
        '7EP' => 'E02006344',
        '7EQ' => 'E02006344',
        '7ER' => 'E02006344',
        '7ES' => 'E02006344',
        '7ET' => 'E02006344',
        '7EU' => 'E02006344',
        '7EW' => 'E02006344',
        '7EY' => 'E02006344',
        '7EZ' => 'E02006344',
        '7HA' => 'E02006344',
        '7HB' => 'E02006461',
        '7HD' => 'E02006344',
        '7HE' => 'E02006461',
        '7HG' => 'E02006461',
        '7HL' => 'E02006344',
        '7HN' => 'E02006344',
        '7HP' => 'E02006344',
        '7HR' => 'E02006344',
        '7HS' => 'E02006344',
        '7HT' => 'E02006344',
        '7HU' => 'E02006344',
        '7HW' => 'E02006344',
        '7HX' => 'E02006344',
        '7JG' => 'E02006461',
        '7JH' => 'E02006344',
        '7JJ' => 'E02006344',
        '7JL' => 'E02006344',
        '7JN' => 'E02006344',
        '7JP' => 'E02006344',
        '7JQ' => 'E02006344',
        '7JR' => 'E02006344',
        '7JS' => 'E02006344',
        '7JT' => 'E02006344',
        '7JU' => 'E02006344',
        '7JW' => 'E02006344',
        '7JX' => 'E02006344',
        '7JY' => 'E02006344',
        '7JZ' => 'E02006344',
        '7LA' => 'E02006344',
        '7LB' => 'E02006344',
        '7LD' => 'E02006344',
        '7LE' => 'E02006344',
        '7LF' => 'E02006344',
        '7LG' => 'E02006344',
        '7LH' => 'E02006344',
        '7LJ' => 'E02006344',
        '7LL' => 'E02006461',
        '7LN' => 'E02006344',
        '7LP' => 'E02006344',
        '7LQ' => 'E02006344',
        '7LR' => 'E02006344',
        '7LS' => 'E02006461',
        '7LT' => 'E02006344',
        '7LU' => 'E02006344',
        '7LW' => 'E02006344',
        '7LX' => 'E02006344',
        '7LY' => 'E02006461',
        '7LZ' => 'E02006461',
        '7NA' => 'E02006344',
        '7NB' => 'E02006344',
        '7WA' => 'E02006461',
        '7WB' => 'E02006461',
        '7XH' => 'E02006461',
        '7XJ' => 'E02006461',
        '7XP' => 'E02006461',
        '7XQ' => 'E02006344',
        '7XR' => 'E02006344',
        '7XS' => 'E02006344',
        '7XT' => 'E02006344',
        '7XU' => 'E02006461',
        '7XW' => 'E02006344',
        '7XX' => 'E02006344',
        '7XY' => 'E02006461',
        '7XZ' => 'E02006461',
        '7YA' => 'E02006344',
        '7YB' => 'E02006344',
        '7YD' => 'E02006461',
        '7YE' => 'E02006461',
        '7YF' => 'E02006461',
        '7YG' => 'E02006461',
        '7ZN' => 'E02006461',
        '7ZW' => 'E02006461',
        '7ZX' => 'E02006461',
        '7ZY' => 'E02006461',
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
