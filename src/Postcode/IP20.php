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
final class IP20
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02005608',
        '0AB' => 'E02005608',
        '0AD' => 'E02005608',
        '0AE' => 'E02005608',
        '0AF' => 'E02005608',
        '0AG' => 'E02005608',
        '0AH' => 'E02005608',
        '0AJ' => 'E02005608',
        '0AL' => 'E02005608',
        '0AN' => 'E02005608',
        '0AP' => 'E02005608',
        '0AQ' => 'E02005608',
        '0AS' => 'E02005608',
        '0AT' => 'E02005608',
        '0AU' => 'E02005608',
        '0AW' => 'E02005608',
        '0AX' => 'E02005608',
        '0AY' => 'E02005608',
        '0AZ' => 'E02005608',
        '0BA' => 'E02005608',
        '0BB' => 'E02005608',
        '0BD' => 'E02005608',
        '0BE' => 'E02005608',
        '0BH' => 'E02005609',
        '0BL' => 'E02005608',
        '0BP' => 'E02005608',
        '0BQ' => 'E02006314',
        '0BS' => 'E02005608',
        '0BT' => 'E02005608',
        '0BU' => 'E02005608',
        '0BW' => 'E02005608',
        '0BX' => 'E02005608',
        '0BY' => 'E02005608',
        '0BZ' => 'E02005608',
        '0DA' => 'E02005608',
        '0DB' => 'E02005608',
        '0DD' => 'E02005609',
        '0DF' => 'E02005608',
        '0DG' => 'E02005608',
        '0DH' => 'E02005608',
        '0DJ' => 'E02005608',
        '0DL' => 'E02005608',
        '0DN' => 'E02005608',
        '0DP' => 'E02005608',
        '0DQ' => 'E02005609',
        '0DR' => 'E02005608',
        '0DS' => 'E02005608',
        '0DT' => 'E02005608',
        '0DX' => 'E02005609',
        '0DZ' => 'E02005609',
        '0EF' => 'E02005608',
        '0EG' => 'E02005608',
        '0EH' => 'E02005608',
        '0EJ' => 'E02005608',
        '0EL' => 'E02005608',
        '0EN' => 'E02005608',
        '0EP' => 'E02005608',
        '0EQ' => 'E02005608',
        '0ES' => 'E02005608',
        '0ET' => 'E02006314',
        '0EU' => 'E02006314',
        '0EX' => 'E02006314',
        '0EZ' => 'E02005609',
        '0HA' => 'E02005608',
        '0HB' => 'E02005608',
        '0HE' => 'E02005608',
        '0HG' => 'E02005608',
        '0HH' => 'E02005608',
        '0HJ' => 'E02005608',
        '0HL' => 'E02005608',
        '0HN' => 'E02006314',
        '0HP' => 'E02005608',
        '0HQ' => 'E02005608',
        '0HR' => 'E02005608',
        '0HS' => 'E02005608',
        '0HW' => 'E02006314',
        '0JA' => 'E02006263',
        '0JB' => 'E02006263',
        '0JD' => 'E02006263',
        '0JE' => 'E02006263',
        '0JF' => 'E02006263',
        '0JG' => 'E02006263',
        '0JH' => 'E02006263',
        '0JJ' => 'E02006263',
        '0JL' => 'E02006263',
        '0JN' => 'E02006263',
        '0JP' => 'E02006263',
        '0JQ' => 'E02006263',
        '0JR' => 'E02006263',
        '0JU' => 'E02006263',
        '0JX' => 'E02006263',
        '0JY' => 'E02006263',
        '0JZ' => 'E02006263',
        '0LA' => 'E02006263',
        '0LB' => 'E02006263',
        '0LD' => 'E02006263',
        '0LE' => 'E02006263',
        '0LG' => 'E02006263',
        '0LH' => 'E02006263',
        '0LJ' => 'E02006263',
        '0LL' => 'E02006263',
        '0LN' => 'E02006263',
        '0LP' => 'E02006263',
        '0LQ' => 'E02006263',
        '0LR' => 'E02006263',
        '0LS' => 'E02006263',
        '0LT' => 'E02006263',
        '0LU' => 'E02006263',
        '0LW' => 'E02006263',
        '0LX' => 'E02006263',
        '0LY' => 'E02006263',
        '0NH' => 'E02006263',
        '0NJ' => 'E02006263',
        '0NL' => 'E02006263',
        '0NN' => 'E02006263',
        '0NP' => 'E02006263',
        '0NR' => 'E02006263',
        '0NS' => 'E02006314',
        '0NT' => 'E02006314',
        '0NU' => 'E02006314',
        '0NW' => 'E02006314',
        '0NX' => 'E02006314',
        '0NY' => 'E02006314',
        '0NZ' => 'E02006314',
        '0PA' => 'E02006314',
        '0PB' => 'E02006263',
        '0PD' => 'E02006263',
        '0PE' => 'E02006263',
        '0PF' => 'E02006263',
        '0PG' => 'E02006263',
        '0PH' => 'E02006314',
        '0PJ' => 'E02006314',
        '0PL' => 'E02006314',
        '0PN' => 'E02006314',
        '0PP' => 'E02006314',
        '0PQ' => 'E02006314',
        '0PR' => 'E02006314',
        '0PS' => 'E02006314',
        '0PX' => 'E02006314',
        '0PY' => 'E02006314',
        '0PZ' => 'E02006314',
        '0TB' => 'E02006314',
        '0WA' => 'E02006314',
        '0WB' => 'E02005609',
        '0WD' => 'E02005609',
        '0WE' => 'E02005609',
        '0WT' => 'E02005609',
        '0WY' => 'E02005609',
        '0WZ' => 'E02005609',
        '0ZY' => 'E02005609',
        '9AA' => 'E02005609',
        '9AB' => 'E02005609',
        '9AD' => 'E02005609',
        '9AE' => 'E02005609',
        '9AF' => 'E02005609',
        '9AG' => 'E02005609',
        '9AH' => 'E02005609',
        '9AJ' => 'E02005609',
        '9AL' => 'E02005609',
        '9AN' => 'E02005609',
        '9AP' => 'E02005609',
        '9AQ' => 'E02005609',
        '9AR' => 'E02005609',
        '9AS' => 'E02005609',
        '9AT' => 'E02005609',
        '9AU' => 'E02005609',
        '9AW' => 'E02005609',
        '9AX' => 'E02005609',
        '9AY' => 'E02005609',
        '9AZ' => 'E02005609',
        '9BA' => 'E02005609',
        '9BB' => 'E02005609',
        '9BD' => 'E02005609',
        '9BE' => 'E02005609',
        '9BF' => 'E02005609',
        '9BG' => 'E02005609',
        '9BH' => 'E02005609',
        '9BJ' => 'E02005609',
        '9BL' => 'E02005609',
        '9BN' => 'E02005609',
        '9BP' => 'E02005609',
        '9BQ' => 'E02005609',
        '9BS' => 'E02005609',
        '9BT' => 'E02005609',
        '9BU' => 'E02005609',
        '9BW' => 'E02005609',
        '9BX' => 'E02005609',
        '9BY' => 'E02005609',
        '9BZ' => 'E02005609',
        '9DA' => 'E02005609',
        '9DB' => 'E02005609',
        '9DD' => 'E02005609',
        '9DE' => 'E02005609',
        '9DF' => 'E02005609',
        '9DG' => 'E02005609',
        '9DH' => 'E02005609',
        '9DJ' => 'E02005609',
        '9DL' => 'E02005609',
        '9DN' => 'E02005609',
        '9DP' => 'E02005609',
        '9DQ' => 'E02005609',
        '9DR' => 'E02005609',
        '9DS' => 'E02005609',
        '9DT' => 'E02005609',
        '9DU' => 'E02005609',
        '9DW' => 'E02005609',
        '9DX' => 'E02005609',
        '9DY' => 'E02005609',
        '9DZ' => 'E02005609',
        '9EA' => 'E02005609',
        '9EB' => 'E02005609',
        '9ED' => 'E02005609',
        '9EE' => 'E02005609',
        '9EF' => 'E02005609',
        '9EG' => 'E02005609',
        '9EH' => 'E02005609',
        '9EJ' => 'E02005609',
        '9EL' => 'E02005609',
        '9EN' => 'E02005609',
        '9EP' => 'E02005609',
        '9EQ' => 'E02005609',
        '9ER' => 'E02005609',
        '9ES' => 'E02005609',
        '9ET' => 'E02005609',
        '9EU' => 'E02005609',
        '9EW' => 'E02005609',
        '9EX' => 'E02005609',
        '9EY' => 'E02005609',
        '9EZ' => 'E02005609',
        '9FA' => 'E02005609',
        '9FB' => 'E02005609',
        '9FD' => 'E02005609',
        '9FE' => 'E02005609',
        '9FF' => 'E02005609',
        '9FJ' => 'E02005609',
        '9GA' => 'E02005609',
        '9GB' => 'E02005609',
        '9GD' => 'E02005609',
        '9GE' => 'E02005609',
        '9GF' => 'E02005609',
        '9GN' => 'E02005609',
        '9HA' => 'E02005609',
        '9HB' => 'E02005609',
        '9HD' => 'E02005609',
        '9HE' => 'E02005609',
        '9HF' => 'E02005609',
        '9HG' => 'E02005609',
        '9HH' => 'E02005609',
        '9HJ' => 'E02005609',
        '9HL' => 'E02005609',
        '9HN' => 'E02005609',
        '9HP' => 'E02005609',
        '9HQ' => 'E02005609',
        '9HR' => 'E02005609',
        '9HS' => 'E02005609',
        '9HT' => 'E02005609',
        '9HU' => 'E02005609',
        '9HW' => 'E02005609',
        '9HX' => 'E02005609',
        '9HY' => 'E02005609',
        '9HZ' => 'E02005609',
        '9JA' => 'E02005609',
        '9JB' => 'E02005609',
        '9JD' => 'E02005609',
        '9JE' => 'E02005609',
        '9JF' => 'E02005609',
        '9JG' => 'E02005609',
        '9JH' => 'E02005609',
        '9JJ' => 'E02005609',
        '9JL' => 'E02005609',
        '9JN' => 'E02005609',
        '9JP' => 'E02005609',
        '9JQ' => 'E02005609',
        '9JR' => 'E02005609',
        '9JS' => 'E02005609',
        '9JT' => 'E02005609',
        '9JU' => 'E02005609',
        '9JW' => 'E02005609',
        '9JX' => 'E02005609',
        '9JY' => 'E02005609',
        '9JZ' => 'E02005610',
        '9LA' => 'E02005610',
        '9LB' => 'E02005610',
        '9LD' => 'E02005610',
        '9LE' => 'E02006263',
        '9LF' => 'E02005610',
        '9LG' => 'E02005610',
        '9LH' => 'E02005610',
        '9LJ' => 'E02005610',
        '9LL' => 'E02005610',
        '9LN' => 'E02005610',
        '9LP' => 'E02005609',
        '9LQ' => 'E02005610',
        '9LR' => 'E02005609',
        '9LS' => 'E02005609',
        '9LT' => 'E02005609',
        '9LU' => 'E02005609',
        '9LW' => 'E02005610',
        '9LX' => 'E02005609',
        '9NB' => 'E02005609',
        '9ND' => 'E02005610',
        '9NE' => 'E02005609',
        '9NF' => 'E02005609',
        '9NG' => 'E02005609',
        '9NH' => 'E02005609',
        '9NJ' => 'E02005609',
        '9NL' => 'E02005609',
        '9NN' => 'E02005609',
        '9NP' => 'E02005609',
        '9NQ' => 'E02005609',
        '9NR' => 'E02005609',
        '9NS' => 'E02005609',
        '9NT' => 'E02005609',
        '9NU' => 'E02005609',
        '9NW' => 'E02005609',
        '9NX' => 'E02005609',
        '9NY' => 'E02005609',
        '9NZ' => 'E02005609',
        '9PA' => 'E02005609',
        '9PB' => 'E02005609',
        '9PD' => 'E02005609',
        '9PE' => 'E02005609',
        '9PF' => 'E02005609',
        '9PG' => 'E02005609',
        '9PH' => 'E02005609',
        '9PJ' => 'E02005609',
        '9PL' => 'E02005609',
        '9PN' => 'E02005609',
        '9PP' => 'E02005609',
        '9PQ' => 'E02005609',
        '9PR' => 'E02005609',
        '9PS' => 'E02005609',
        '9PT' => 'E02005609',
        '9PU' => 'E02005609',
        '9PW' => 'E02005609',
        '9PX' => 'E02005609',
        '9PY' => 'E02005609',
        '9PZ' => 'E02005609',
        '9QA' => 'E02005609',
        '9QB' => 'E02005609',
        '9QD' => 'E02005609',
        '9QE' => 'E02005609',
        '9QF' => 'E02005609',
        '9QG' => 'E02005609',
        '9QH' => 'E02005609',
        '9QJ' => 'E02005609',
        '9QL' => 'E02005609',
        '9QN' => 'E02005609',
        '9QP' => 'E02005609',
        '9QR' => 'E02005608',
        '9QS' => 'E02005609',
        '9QT' => 'E02005609',
        '9QU' => 'E02005609',
        '9QW' => 'E02005609',
        '9QX' => 'E02005609',
        '9QZ' => 'E02005610',
        '9WA' => 'E02005609',
        '9WB' => 'E02005609',
        '9WD' => 'E02005609',
        '9WE' => 'E02005609',
        '9WF' => 'E02005609',
        '9WG' => 'E02005609',
        '9WN' => 'E02005609',
        '9WP' => 'E02005609',
        '9WQ' => 'E02005609',
        '9WR' => 'E02005609',
        '9WS' => 'E02005609',
        '9WT' => 'E02005609',
        '9WU' => 'E02005609',
        '9WW' => 'E02005609',
        '9WX' => 'E02005609',
        '9WY' => 'E02005609',
        '9WZ' => 'E02005609',
        '9YZ' => 'E02005609',
        '9ZY' => 'E02005609',
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