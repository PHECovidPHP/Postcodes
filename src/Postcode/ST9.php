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
final class ST9
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02006212',
        '0AB' => 'E02006212',
        '0AD' => 'E02006212',
        '0AE' => 'E02006212',
        '0AF' => 'E02006212',
        '0AG' => 'E02006212',
        '0AH' => 'E02006212',
        '0AJ' => 'E02006210',
        '0AL' => 'E02006212',
        '0AN' => 'E02006212',
        '0AP' => 'E02006212',
        '0AQ' => 'E02006212',
        '0AR' => 'E02006212',
        '0AS' => 'E02006212',
        '0AT' => 'E02006212',
        '0AU' => 'E02006212',
        '0AW' => 'E02006212',
        '0AX' => 'E02006212',
        '0AY' => 'E02006212',
        '0AZ' => 'E02006212',
        '0BA' => 'E02006212',
        '0BB' => 'E02006212',
        '0BD' => 'E02006212',
        '0BE' => 'E02006212',
        '0BF' => 'E02006212',
        '0BG' => 'E02006212',
        '0BH' => 'E02006212',
        '0BJ' => 'E02006212',
        '0BL' => 'E02006212',
        '0BN' => 'E02006212',
        '0BP' => 'E02006212',
        '0BQ' => 'E02006212',
        '0BS' => 'E02006212',
        '0BT' => 'E02006212',
        '0BU' => 'E02006212',
        '0BW' => 'E02006212',
        '0BX' => 'E02006212',
        '0BY' => 'E02006212',
        '0BZ' => 'E02006212',
        '0DA' => 'E02006215',
        '0DB' => 'E02006212',
        '0DD' => 'E02006212',
        '0DE' => 'E02006215',
        '0DF' => 'E02006215',
        '0DG' => 'E02006215',
        '0DH' => 'E02006212',
        '0DJ' => 'E02006215',
        '0DL' => 'E02006215',
        '0DN' => 'E02006215',
        '0DP' => 'E02006212',
        '0DQ' => 'E02006215',
        '0DR' => 'E02006212',
        '0DS' => 'E02006212',
        '0DT' => 'E02006212',
        '0DU' => 'E02006212',
        '0DW' => 'E02006212',
        '0DX' => 'E02006212',
        '0DY' => 'E02006212',
        '0DZ' => 'E02006212',
        '0EA' => 'E02006212',
        '0EB' => 'E02006212',
        '0ED' => 'E02006212',
        '0EE' => 'E02006212',
        '0EF' => 'E02006212',
        '0EG' => 'E02006212',
        '0EH' => 'E02006212',
        '0EJ' => 'E02006212',
        '0EL' => 'E02006212',
        '0EN' => 'E02006212',
        '0EP' => 'E02006212',
        '0EQ' => 'E02006212',
        '0ER' => 'E02006212',
        '0ES' => 'E02006212',
        '0ET' => 'E02006212',
        '0EU' => 'E02006212',
        '0EW' => 'E02006212',
        '0EX' => 'E02006212',
        '0EY' => 'E02006212',
        '0EZ' => 'E02006212',
        '0FA' => 'E02006215',
        '0FB' => 'E02006212',
        '0FD' => 'E02006215',
        '0HA' => 'E02006212',
        '0HB' => 'E02006212',
        '0HD' => 'E02006212',
        '0HE' => 'E02006212',
        '0HF' => 'E02006212',
        '0HG' => 'E02002966',
        '0HH' => 'E02006212',
        '0HJ' => 'E02006212',
        '0HL' => 'E02006212',
        '0HN' => 'E02006212',
        '0HP' => 'E02006212',
        '0HQ' => 'E02006212',
        '0HR' => 'E02006212',
        '0HS' => 'E02006212',
        '0HT' => 'E02006212',
        '0HU' => 'E02006212',
        '0HW' => 'E02006212',
        '0HX' => 'E02006212',
        '0HY' => 'E02006212',
        '0HZ' => 'E02006212',
        '0JA' => 'E02006212',
        '0JB' => 'E02006212',
        '0JD' => 'E02006212',
        '0JE' => 'E02006212',
        '0JF' => 'E02006212',
        '0JG' => 'E02006212',
        '0JH' => 'E02006212',
        '0JJ' => 'E02006212',
        '0JL' => 'E02006212',
        '0JN' => 'E02006212',
        '0JP' => 'E02006212',
        '0JQ' => 'E02006212',
        '0JR' => 'E02006212',
        '0JS' => 'E02006212',
        '0JT' => 'E02006212',
        '0JU' => 'E02006212',
        '0JW' => 'E02006212',
        '0JX' => 'E02006212',
        '0JY' => 'E02006212',
        '0JZ' => 'E02006212',
        '0LA' => 'E02006212',
        '0LB' => 'E02006212',
        '0LD' => 'E02006212',
        '0LE' => 'E02006212',
        '0LF' => 'E02006212',
        '0LG' => 'E02006212',
        '0LH' => 'E02006212',
        '0LJ' => 'E02006212',
        '0LL' => 'E02006212',
        '0LN' => 'E02006212',
        '0LP' => 'E02006212',
        '0LQ' => 'E02006212',
        '0LR' => 'E02006212',
        '0LS' => 'E02006212',
        '0LT' => 'E02006212',
        '0LU' => 'E02006212',
        '0LW' => 'E02006212',
        '0LX' => 'E02006212',
        '0LY' => 'E02006212',
        '0LZ' => 'E02006212',
        '0NA' => 'E02006212',
        '0NB' => 'E02006212',
        '0ND' => 'E02006211',
        '0NE' => 'E02006212',
        '0NF' => 'E02006212',
        '0NG' => 'E02006212',
        '0NH' => 'E02006212',
        '0NJ' => 'E02006212',
        '0NL' => 'E02006212',
        '0NN' => 'E02002966',
        '0NP' => 'E02002966',
        '0NQ' => 'E02006212',
        '0NW' => 'E02002966',
        '0PA' => 'E02006212',
        '0PB' => 'E02006212',
        '0PD' => 'E02006212',
        '0PE' => 'E02006212',
        '0PF' => 'E02006212',
        '0PG' => 'E02006212',
        '0PH' => 'E02006212',
        '0PJ' => 'E02006212',
        '0PL' => 'E02006212',
        '0PN' => 'E02006212',
        '0PP' => 'E02006212',
        '0PQ' => 'E02006212',
        '0PR' => 'E02002966',
        '0PS' => 'E02002966',
        '0PW' => 'E02006212',
        '0WA' => 'E02002966',
        '0WB' => 'E02002966',
        '0WD' => 'E02002966',
        '0WE' => 'E02002966',
        '0WP' => 'E02002966',
        '0WR' => 'E02002966',
        '0WS' => 'E02002966',
        '0WT' => 'E02002966',
        '0WU' => 'E02006212',
        '0WY' => 'E02002966',
        '0WZ' => 'E02002966',
        '0ZD' => 'E02002966',
        '0ZR' => 'E02002966',
        '0ZU' => 'E02002966',
        '0ZW' => 'E02002966',
        '0ZY' => 'E02002966',
        '9AA' => 'E02006211',
        '9AB' => 'E02006211',
        '9AD' => 'E02006211',
        '9AE' => 'E02006211',
        '9AF' => 'E02006211',
        '9AG' => 'E02006205',
        '9AH' => 'E02006205',
        '9AJ' => 'E02006205',
        '9AL' => 'E02006205',
        '9AN' => 'E02006205',
        '9AP' => 'E02006205',
        '9AQ' => 'E02006205',
        '9AR' => 'E02006205',
        '9AS' => 'E02002966',
        '9AT' => 'E02006211',
        '9AU' => 'E02002966',
        '9AW' => 'E02006205',
        '9AX' => 'E02006211',
        '9AY' => 'E02006211',
        '9AZ' => 'E02006211',
        '9BA' => 'E02006211',
        '9BB' => 'E02006211',
        '9BD' => 'E02006211',
        '9BE' => 'E02006211',
        '9BF' => 'E02006211',
        '9BG' => 'E02006211',
        '9BH' => 'E02006211',
        '9BJ' => 'E02006211',
        '9BL' => 'E02006211',
        '9BN' => 'E02006211',
        '9BP' => 'E02006211',
        '9BQ' => 'E02006211',
        '9BS' => 'E02006211',
        '9BT' => 'E02006211',
        '9BU' => 'E02006211',
        '9BW' => 'E02006211',
        '9BX' => 'E02006211',
        '9BY' => 'E02006211',
        '9BZ' => 'E02006211',
        '9DA' => 'E02006211',
        '9DB' => 'E02006211',
        '9DD' => 'E02006211',
        '9DE' => 'E02006211',
        '9DF' => 'E02006211',
        '9DG' => 'E02006211',
        '9DH' => 'E02006211',
        '9DJ' => 'E02006211',
        '9DL' => 'E02006211',
        '9DN' => 'E02006211',
        '9DP' => 'E02006211',
        '9DQ' => 'E02006211',
        '9DR' => 'E02006211',
        '9DS' => 'E02006211',
        '9DT' => 'E02006211',
        '9DU' => 'E02006211',
        '9DW' => 'E02006205',
        '9DX' => 'E02006211',
        '9DY' => 'E02006211',
        '9DZ' => 'E02006211',
        '9EA' => 'E02006211',
        '9EB' => 'E02006211',
        '9ED' => 'E02006211',
        '9EE' => 'E02006211',
        '9EF' => 'E02006211',
        '9EG' => 'E02006211',
        '9EH' => 'E02006211',
        '9EJ' => 'E02006211',
        '9EL' => 'E02006211',
        '9EN' => 'E02006211',
        '9EP' => 'E02006211',
        '9EQ' => 'E02006211',
        '9ET' => 'E02006211',
        '9EU' => 'E02006211',
        '9EW' => 'E02006211',
        '9EX' => 'E02006211',
        '9EY' => 'E02006211',
        '9EZ' => 'E02006211',
        '9HA' => 'E02006211',
        '9HB' => 'E02006211',
        '9HD' => 'E02006211',
        '9HE' => 'E02006211',
        '9HF' => 'E02006211',
        '9HG' => 'E02006211',
        '9HH' => 'E02006211',
        '9HJ' => 'E02006211',
        '9HL' => 'E02006211',
        '9HN' => 'E02006211',
        '9HP' => 'E02006211',
        '9HQ' => 'E02006211',
        '9HR' => 'E02006211',
        '9HS' => 'E02006211',
        '9HT' => 'E02006211',
        '9HU' => 'E02006211',
        '9HW' => 'E02006211',
        '9HX' => 'E02006211',
        '9HY' => 'E02006211',
        '9HZ' => 'E02006211',
        '9JA' => 'E02006211',
        '9JB' => 'E02006211',
        '9JD' => 'E02006211',
        '9JE' => 'E02006211',
        '9JF' => 'E02006211',
        '9JG' => 'E02006211',
        '9JH' => 'E02006211',
        '9JJ' => 'E02002966',
        '9JL' => 'E02006211',
        '9JN' => 'E02006211',
        '9JP' => 'E02006211',
        '9JQ' => 'E02006211',
        '9JR' => 'E02006211',
        '9JS' => 'E02006211',
        '9JT' => 'E02006211',
        '9JU' => 'E02006211',
        '9JW' => 'E02006211',
        '9JX' => 'E02006211',
        '9JY' => 'E02006211',
        '9JZ' => 'E02006211',
        '9LA' => 'E02006211',
        '9LB' => 'E02006212',
        '9LD' => 'E02006212',
        '9LE' => 'E02006211',
        '9LF' => 'E02006211',
        '9LG' => 'E02002957',
        '9LH' => 'E02006211',
        '9LJ' => 'E02006211',
        '9LL' => 'E02006211',
        '9LN' => 'E02006211',
        '9LP' => 'E02006211',
        '9LQ' => 'E02006211',
        '9LR' => 'E02006211',
        '9LS' => 'E02006211',
        '9LT' => 'E02006211',
        '9LU' => 'E02006211',
        '9LW' => 'E02006211',
        '9LX' => 'E02006211',
        '9LY' => 'E02006211',
        '9LZ' => 'E02006212',
        '9NA' => 'E02006211',
        '9NB' => 'E02006212',
        '9ND' => 'E02002966',
        '9NE' => 'E02006211',
        '9NF' => 'E02006211',
        '9NG' => 'E02002957',
        '9NH' => 'E02006211',
        '9NJ' => 'E02006211',
        '9NL' => 'E02006211',
        '9NN' => 'E02006211',
        '9NP' => 'E02002957',
        '9NQ' => 'E02002957',
        '9NR' => 'E02006211',
        '9NS' => 'E02006211',
        '9NT' => 'E02002957',
        '9NU' => 'E02006211',
        '9NW' => 'E02006211',
        '9NX' => 'E02002957',
        '9NY' => 'E02002957',
        '9NZ' => 'E02002957',
        '9PA' => 'E02002957',
        '9PB' => 'E02002957',
        '9PD' => 'E02002957',
        '9PE' => 'E02002957',
        '9PF' => 'E02002957',
        '9PG' => 'E02002957',
        '9PH' => 'E02002957',
        '9PJ' => 'E02002957',
        '9PL' => 'E02002957',
        '9PN' => 'E02002957',
        '9PP' => 'E02002957',
        '9PQ' => 'E02002957',
        '9PR' => 'E02002957',
        '9PS' => 'E02006211',
        '9PT' => 'E02002957',
        '9PU' => 'E02002957',
        '9PW' => 'E02002957',
        '9PX' => 'E02002957',
        '9PY' => 'E02006211',
        '9PZ' => 'E02002957',
        '9QA' => 'E02006205',
        '9QB' => 'E02006205',
        '9QD' => 'E02006205',
        '9QE' => 'E02006205',
        '9QF' => 'E02006205',
        '9QG' => 'E02006205',
        '9QH' => 'E02006205',
        '9QJ' => 'E02006205',
        '9QL' => 'E02006205',
        '9QN' => 'E02006205',
        '9QP' => 'E02006205',
        '9QQ' => 'E02006205',
        '9QR' => 'E02006205',
        '9QS' => 'E02006205',
        '9QT' => 'E02006205',
        '9QU' => 'E02006209',
        '9QW' => 'E02006205',
        '9QX' => 'E02002966',
        '9QY' => 'E02002966',
        '9QZ' => 'E02006211',
        '9RA' => 'E02006211',
        '9RB' => 'E02006211',
        '9RD' => 'E02006211',
        '9RE' => 'E02006211',
        '9RF' => 'E02006211',
        '9RG' => 'E02006211',
        '9RL' => 'E02006211',
        '9RN' => 'E02006211',
        '9RW' => 'E02006211',
        '9WA' => 'E02006211',
        '9WB' => 'E02002966',
        '9WD' => 'E02006211',
        '9WE' => 'E02002966',
        '9WF' => 'E02006211',
        '9WG' => 'E02006211',
        '9WH' => 'E02006211',
        '9WJ' => 'E02006211',
        '9WL' => 'E02002966',
        '9WN' => 'E02006211',
        '9WQ' => 'E02002966',
        '9WS' => 'E02006211',
        '9WT' => 'E02006211',
        '9WU' => 'E02002966',
        '9WY' => 'E02006211',
        '9WZ' => 'E02006211',
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
