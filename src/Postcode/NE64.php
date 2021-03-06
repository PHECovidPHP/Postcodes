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
final class NE64
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '6AA' => 'E02005734',
        '6AB' => 'E02005734',
        '6AD' => 'E02005734',
        '6AE' => 'E02005734',
        '6AF' => 'E02005734',
        '6AG' => 'E02005734',
        '6AH' => 'E02005734',
        '6AJ' => 'E02005734',
        '6AL' => 'E02005734',
        '6AN' => 'E02005734',
        '6AP' => 'E02005734',
        '6AQ' => 'E02005734',
        '6AR' => 'E02005734',
        '6AS' => 'E02005734',
        '6AT' => 'E02005734',
        '6AU' => 'E02005734',
        '6AW' => 'E02005734',
        '6AX' => 'E02005734',
        '6AY' => 'E02005734',
        '6AZ' => 'E02005734',
        '6BA' => 'E02005734',
        '6BB' => 'E02005734',
        '6BD' => 'E02005734',
        '6BE' => 'E02005734',
        '6BG' => 'E02005734',
        '6BH' => 'E02005734',
        '6BJ' => 'E02005734',
        '6BL' => 'E02005734',
        '6BN' => 'E02005734',
        '6BP' => 'E02005734',
        '6BQ' => 'E02005734',
        '6BW' => 'E02005734',
        '6DA' => 'E02005734',
        '6DB' => 'E02005734',
        '6DE' => 'E02005734',
        '6DF' => 'E02005734',
        '6DG' => 'E02005734',
        '6DH' => 'E02005734',
        '6DJ' => 'E02005734',
        '6DL' => 'E02005734',
        '6DN' => 'E02005734',
        '6DP' => 'E02005734',
        '6DQ' => 'E02005734',
        '6DR' => 'E02005734',
        '6DS' => 'E02005734',
        '6DT' => 'E02005734',
        '6DU' => 'E02005734',
        '6DW' => 'E02005734',
        '6DX' => 'E02005734',
        '6DY' => 'E02005734',
        '6DZ' => 'E02005734',
        '6EA' => 'E02005734',
        '6EB' => 'E02005734',
        '6ED' => 'E02005734',
        '6EE' => 'E02005734',
        '6EF' => 'E02005734',
        '6EG' => 'E02005734',
        '6EH' => 'E02005738',
        '6EJ' => 'E02005734',
        '6EL' => 'E02005734',
        '6EQ' => 'E02005734',
        '6EW' => 'E02005738',
        '6HA' => 'E02005734',
        '6HB' => 'E02005734',
        '6HD' => 'E02005734',
        '6HE' => 'E02005734',
        '6HF' => 'E02005734',
        '6HG' => 'E02005734',
        '6HH' => 'E02005734',
        '6HJ' => 'E02005734',
        '6HL' => 'E02005734',
        '6HN' => 'E02005734',
        '6HP' => 'E02005734',
        '6HQ' => 'E02005734',
        '6HR' => 'E02005734',
        '6HS' => 'E02005734',
        '6HT' => 'E02005734',
        '6HU' => 'E02005734',
        '6HW' => 'E02005734',
        '6HX' => 'E02005734',
        '6HY' => 'E02005734',
        '6HZ' => 'E02005734',
        '6JA' => 'E02005734',
        '6JB' => 'E02005734',
        '6JD' => 'E02005734',
        '6JE' => 'E02005734',
        '6JF' => 'E02005734',
        '6JG' => 'E02005734',
        '6JH' => 'E02005734',
        '6JN' => 'E02005734',
        '6JP' => 'E02005734',
        '6JR' => 'E02005734',
        '6JT' => 'E02005734',
        '6JU' => 'E02005734',
        '6JW' => 'E02005734',
        '6JX' => 'E02005734',
        '6JY' => 'E02005734',
        '6JZ' => 'E02005734',
        '6LA' => 'E02005734',
        '6LB' => 'E02005734',
        '6LD' => 'E02005734',
        '6LE' => 'E02005734',
        '6LF' => 'E02005734',
        '6LG' => 'E02005734',
        '6LH' => 'E02005734',
        '6LQ' => 'E02005734',
        '6NH' => 'E02005734',
        '6NJ' => 'E02005734',
        '6NL' => 'E02005734',
        '6NN' => 'E02005734',
        '6NP' => 'E02005734',
        '6NQ' => 'E02005734',
        '6NR' => 'E02005734',
        '6NS' => 'E02005734',
        '6NT' => 'E02005734',
        '6NU' => 'E02005734',
        '6NW' => 'E02005734',
        '6NX' => 'E02005734',
        '6NY' => 'E02005734',
        '6NZ' => 'E02005734',
        '6PA' => 'E02005734',
        '6PB' => 'E02005734',
        '6PD' => 'E02005734',
        '6PE' => 'E02005734',
        '6PF' => 'E02005734',
        '6PG' => 'E02005734',
        '6PJ' => 'E02005734',
        '6PL' => 'E02005734',
        '6PN' => 'E02005734',
        '6PP' => 'E02005734',
        '6PR' => 'E02005734',
        '6PS' => 'E02005734',
        '6PT' => 'E02005734',
        '6PU' => 'E02005734',
        '6PW' => 'E02005734',
        '6PX' => 'E02005734',
        '6PY' => 'E02005734',
        '6PZ' => 'E02005734',
        '6QA' => 'E02005734',
        '6QB' => 'E02005734',
        '6QD' => 'E02005734',
        '6RE' => 'E02005734',
        '6RF' => 'E02005734',
        '6RG' => 'E02005734',
        '6RH' => 'E02005734',
        '6RJ' => 'E02005734',
        '6RL' => 'E02005734',
        '6RN' => 'E02005734',
        '6RP' => 'E02005734',
        '6RQ' => 'E02005734',
        '6RR' => 'E02005734',
        '6RS' => 'E02005734',
        '6RT' => 'E02005734',
        '6RW' => 'E02005734',
        '6RZ' => 'E02005734',
        '6SA' => 'E02005734',
        '6SB' => 'E02005734',
        '6SH' => 'E02005734',
        '6SP' => 'E02005734',
        '6SQ' => 'E02005734',
        '6SR' => 'E02005734',
        '6SS' => 'E02005734',
        '6ST' => 'E02005734',
        '6SU' => 'E02005734',
        '6SW' => 'E02005734',
        '6SX' => 'E02005734',
        '6SY' => 'E02005734',
        '6SZ' => 'E02005734',
        '6TD' => 'E02005734',
        '6TH' => 'E02005734',
        '6TJ' => 'E02005734',
        '6TL' => 'E02005734',
        '6TN' => 'E02005734',
        '6TP' => 'E02005734',
        '6TQ' => 'E02005734',
        '6TW' => 'E02005734',
        '6UH' => 'E02005734',
        '6UJ' => 'E02005734',
        '6UL' => 'E02005734',
        '6UN' => 'E02005734',
        '6UP' => 'E02005734',
        '6UQ' => 'E02005734',
        '6UR' => 'E02005734',
        '6US' => 'E02005734',
        '6UT' => 'E02005734',
        '6UU' => 'E02005734',
        '6UW' => 'E02005734',
        '6UX' => 'E02005734',
        '6UY' => 'E02005734',
        '6UZ' => 'E02005734',
        '6WU' => 'E02005738',
        '6WW' => 'E02005738',
        '6WX' => 'E02005734',
        '6WY' => 'E02005738',
        '6WZ' => 'E02005738',
        '6XA' => 'E02005734',
        '6XB' => 'E02005734',
        '6XD' => 'E02005734',
        '6XE' => 'E02005734',
        '6XG' => 'E02005734',
        '6XH' => 'E02005734',
        '6XJ' => 'E02005734',
        '6XL' => 'E02005734',
        '6XN' => 'E02005734',
        '6XP' => 'E02005734',
        '6XQ' => 'E02005734',
        '6XR' => 'E02005734',
        '6XS' => 'E02005734',
        '6XT' => 'E02005734',
        '6XU' => 'E02005734',
        '6XW' => 'E02005734',
        '6XX' => 'E02005734',
        '6YU' => 'E02005734',
        '6YX' => 'E02005734',
        '6YY' => 'E02005734',
        '6YZ' => 'E02005738',
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
