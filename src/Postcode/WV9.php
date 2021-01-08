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
final class WV9
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '5AA' => 'E02006179',
        '5AB' => 'E02006179',
        '5AD' => 'E02006179',
        '5AE' => 'E02006179',
        '5AF' => 'E02006179',
        '5AG' => 'E02006179',
        '5AH' => 'E02006179',
        '5AJ' => 'E02006179',
        '5AL' => 'E02006179',
        '5AN' => 'E02006176',
        '5AP' => 'E02002151',
        '5AQ' => 'E02006179',
        '5AR' => 'E02006179',
        '5AS' => 'E02006179',
        '5AT' => 'E02006181',
        '5AU' => 'E02006179',
        '5AW' => 'E02006176',
        '5AX' => 'E02006179',
        '5AY' => 'E02006179',
        '5AZ' => 'E02006179',
        '5BA' => 'E02006179',
        '5BB' => 'E02006181',
        '5BD' => 'E02006176',
        '5BE' => 'E02006176',
        '5BF' => 'E02006176',
        '5BG' => 'E02006176',
        '5BH' => 'E02006176',
        '5BJ' => 'E02006176',
        '5BL' => 'E02006179',
        '5BN' => 'E02006176',
        '5BP' => 'E02006179',
        '5BQ' => 'E02006176',
        '5BS' => 'E02006179',
        '5BT' => 'E02006179',
        '5BU' => 'E02006179',
        '5BW' => 'E02006176',
        '5BX' => 'E02006179',
        '5BY' => 'E02006179',
        '5BZ' => 'E02006179',
        '5DA' => 'E02006179',
        '5DB' => 'E02006179',
        '5DD' => 'E02006179',
        '5DE' => 'E02006179',
        '5DF' => 'E02006179',
        '5DG' => 'E02006179',
        '5DH' => 'E02006179',
        '5DJ' => 'E02006179',
        '5DL' => 'E02006179',
        '5DN' => 'E02006179',
        '5DP' => 'E02006179',
        '5DQ' => 'E02006179',
        '5DR' => 'E02006179',
        '5DS' => 'E02006179',
        '5DT' => 'E02006179',
        '5DU' => 'E02006179',
        '5DW' => 'E02006179',
        '5DX' => 'E02006179',
        '5DY' => 'E02006179',
        '5DZ' => 'E02006179',
        '5EA' => 'E02006179',
        '5EB' => 'E02006179',
        '5ED' => 'E02006179',
        '5EE' => 'E02006179',
        '5EF' => 'E02006179',
        '5EG' => 'E02006179',
        '5EH' => 'E02006179',
        '5EJ' => 'E02006179',
        '5EL' => 'E02006179',
        '5EN' => 'E02006179',
        '5EP' => 'E02006179',
        '5EQ' => 'E02006179',
        '5ER' => 'E02006179',
        '5ES' => 'E02006181',
        '5ET' => 'E02006181',
        '5EU' => 'E02006181',
        '5EW' => 'E02006181',
        '5EX' => 'E02006181',
        '5EY' => 'E02006181',
        '5EZ' => 'E02006181',
        '5FA' => 'E02006176',
        '5FF' => 'E02006176',
        '5FP' => 'E02002163',
        '5FX' => 'E02002163',
        '5FY' => 'E02002163',
        '5FZ' => 'E02002163',
        '5GA' => 'E02006181',
        '5GB' => 'E02006181',
        '5HA' => 'E02002150',
        '5HB' => 'E02002151',
        '5HD' => 'E02002151',
        '5HE' => 'E02002150',
        '5HF' => 'E02002151',
        '5HH' => 'E02002150',
        '5HN' => 'E02002157',
        '5HQ' => 'E02002150',
        '5HW' => 'E02002157',
        '5HX' => 'E02006179',
        '5HY' => 'E02006179',
        '5HZ' => 'E02002163',
        '5JE' => 'E02006179',
        '5JF' => 'E02006179',
        '5JW' => 'E02006179',
        '5JZ' => 'E02006179',
        '5LA' => 'E02002150',
        '5LB' => 'E02002150',
        '5LD' => 'E02002150',
        '5LE' => 'E02002150',
        '5LF' => 'E02002150',
        '5LG' => 'E02002150',
        '5LH' => 'E02002150',
        '5LJ' => 'E02002150',
        '5LL' => 'E02002150',
        '5LN' => 'E02002150',
        '5LQ' => 'E02002150',
        '5LR' => 'E02002150',
        '5LS' => 'E02002150',
        '5LT' => 'E02002150',
        '5LU' => 'E02002150',
        '5LX' => 'E02002151',
        '5NB' => 'E02002151',
        '5ND' => 'E02002151',
        '5NE' => 'E02002151',
        '5NF' => 'E02002151',
        '5NG' => 'E02002151',
        '5NH' => 'E02002151',
        '5NJ' => 'E02002151',
        '5NP' => 'E02002151',
        '5NR' => 'E02002151',
        '5NT' => 'E02002151',
        '5NU' => 'E02002151',
        '5NW' => 'E02002151',
        '5NX' => 'E02002154',
        '5NY' => 'E02002154',
        '5NZ' => 'E02002151',
        '5PA' => 'E02002151',
        '5PB' => 'E02002151',
        '5PD' => 'E02002151',
        '5PF' => 'E02002151',
        '5PG' => 'E02002151',
        '5PH' => 'E02002151',
        '5PJ' => 'E02002151',
        '5PL' => 'E02002151',
        '5PN' => 'E02002151',
        '5PR' => 'E02002151',
        '5PS' => 'E02002151',
        '5PT' => 'E02002151',
        '5PU' => 'E02002151',
        '5PX' => 'E02002151',
        '5PY' => 'E02002151',
        '5PZ' => 'E02002151',
        '5QD' => 'E02002151',
        '5QE' => 'E02002151',
        '5QF' => 'E02002151',
        '5QG' => 'E02002151',
        '5QH' => 'E02002151',
        '5QJ' => 'E02002151',
        '5QL' => 'E02002151',
        '5QN' => 'E02002151',
        '5QP' => 'E02002151',
        '5QQ' => 'E02002151',
        '5QR' => 'E02002151',
        '5QU' => 'E02002151',
        '5QW' => 'E02002151',
        '5QX' => 'E02002151',
        '5QY' => 'E02002151',
        '5QZ' => 'E02002151',
        '5RA' => 'E02002151',
        '5RB' => 'E02002151',
        '5RD' => 'E02002151',
        '5RF' => 'E02002151',
        '5RG' => 'E02002150',
        '5RH' => 'E02002151',
        '5RJ' => 'E02002150',
        '5RL' => 'E02002150',
        '5RN' => 'E02002150',
        '5RP' => 'E02002150',
        '5RQ' => 'E02002150',
        '5RR' => 'E02002150',
        '5RS' => 'E02002150',
        '5RT' => 'E02002150',
        '5RU' => 'E02002150',
        '5RW' => 'E02002150',
        '5RX' => 'E02002150',
        '5RY' => 'E02002150',
        '5RZ' => 'E02002151',
        '5SA' => 'E02002151',
        '5SB' => 'E02002151',
        '5SD' => 'E02002151',
        '5SE' => 'E02002151',
        '5SH' => 'E02002151',
        '5WH' => 'E02002151',
        '5WP' => 'E02002163',
        '5WU' => 'E02002163',
        '5WY' => 'E02002163',
        '5WZ' => 'E02002163',
        '5XA' => 'E02002163',
        '5XB' => 'E02002163',
        '5XD' => 'E02002150',
        '5XE' => 'E02002163',
        '5XF' => 'E02002150',
        '5XG' => 'E02002150',
        '5XH' => 'E02002163',
        '5XJ' => 'E02002163',
        '5XL' => 'E02002163',
        '5XN' => 'E02002163',
        '5XP' => 'E02002163',
        '5XQ' => 'E02002163',
        '5XR' => 'E02002163',
        '5XS' => 'E02002163',
        '5XT' => 'E02002163',
        '5XU' => 'E02002163',
        '5XW' => 'E02002163',
        '5XY' => 'E02002163',
        '5XZ' => 'E02002163',
        '5YA' => 'E02006181',
        '5YE' => 'E02006181',
        '5YG' => 'E02002163',
        '5YH' => 'E02002163',
        '5YJ' => 'E02006181',
        '5YL' => 'E02006181',
        '5YN' => 'E02002163',
        '5YP' => 'E02002163',
        '5YR' => 'E02002163',
        '5YS' => 'E02002163',
        '5YT' => 'E02002151',
        '5YU' => 'E02002151',
        '5YW' => 'E02002163',
        '5YX' => 'E02002163',
        '5YZ' => 'E02006181',
        '5ZR' => 'E02002163',
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