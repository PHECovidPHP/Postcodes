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
final class SW1H
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02000979',
        '0AB' => 'E02000979',
        '0AD' => 'E02000979',
        '0AE' => 'E02000979',
        '0AF' => 'E02000979',
        '0AG' => 'E02000979',
        '0AH' => 'E02000979',
        '0AJ' => 'E02000979',
        '0AL' => 'E02000979',
        '0AN' => 'E02000979',
        '0AP' => 'E02000979',
        '0AQ' => 'E02000979',
        '0AS' => 'E02000979',
        '0AU' => 'E02000979',
        '0AW' => 'E02000979',
        '0AX' => 'E02000979',
        '0AY' => 'E02000979',
        '0AZ' => 'E02000979',
        '0BA' => 'E02000979',
        '0BB' => 'E02000979',
        '0BD' => 'E02000979',
        '0BE' => 'E02000979',
        '0BG' => 'E02000979',
        '0BH' => 'E02000979',
        '0BJ' => 'E02000979',
        '0BL' => 'E02000979',
        '0BQ' => 'E02000979',
        '0BS' => 'E02000979',
        '0BT' => 'E02000979',
        '0BU' => 'E02000979',
        '0BW' => 'E02000979',
        '0BX' => 'E02000979',
        '0DA' => 'E02000979',
        '0DB' => 'E02000979',
        '0DE' => 'E02000979',
        '0DF' => 'E02000979',
        '0DH' => 'E02000979',
        '0DJ' => 'E02000979',
        '0DL' => 'E02000979',
        '0DN' => 'E02000979',
        '0DR' => 'E02000979',
        '0DT' => 'E02000979',
        '0DU' => 'E02000979',
        '0DX' => 'E02000979',
        '0DY' => 'E02000979',
        '0EA' => 'E02000979',
        '0ED' => 'E02000979',
        '0EE' => 'E02000979',
        '0EJ' => 'E02000979',
        '0EL' => 'E02000979',
        '0EP' => 'E02000979',
        '0EQ' => 'E02000979',
        '0ER' => 'E02000979',
        '0ES' => 'E02000979',
        '0ET' => 'E02000979',
        '0EU' => 'E02000979',
        '0EX' => 'E02000979',
        '0EY' => 'E02000979',
        '0EZ' => 'E02000979',
        '0GT' => 'E02000979',
        '0HA' => 'E02000979',
        '0HD' => 'E02000979',
        '0HF' => 'E02000979',
        '0HG' => 'E02000979',
        '0HH' => 'E02000979',
        '0HN' => 'E02000924',
        '0HP' => 'E02000979',
        '0HQ' => 'E02000979',
        '0HU' => 'E02000979',
        '0HW' => 'E02000979',
        '0HX' => 'E02000979',
        '0HY' => 'E02000979',
        '0HZ' => 'E02000979',
        '0JD' => 'E02000979',
        '0JG' => 'E02000979',
        '0JL' => 'E02000979',
        '0NA' => 'E02000979',
        '0NB' => 'E02000979',
        '0ND' => 'E02000979',
        '0NE' => 'E02000979',
        '0NF' => 'E02000979',
        '0NG' => 'E02000979',
        '0NH' => 'E02000979',
        '0NJ' => 'E02000979',
        '0NL' => 'E02000979',
        '0NN' => 'E02000979',
        '0NP' => 'E02000979',
        '0NQ' => 'E02000979',
        '0NR' => 'E02000979',
        '0NW' => 'E02000979',
        '0NX' => 'E02000979',
        '0NY' => 'E02000979',
        '0NZ' => 'E02000977',
        '0PA' => 'E02000979',
        '0PH' => 'E02000979',
        '0PR' => 'E02000979',
        '0PS' => 'E02000979',
        '0PT' => 'E02000979',
        '0PW' => 'E02000979',
        '0PX' => 'E02000979',
        '0PY' => 'E02000979',
        '0QD' => 'E02000979',
        '0QE' => 'E02000979',
        '0QF' => 'E02000979',
        '0QG' => 'E02000979',
        '0QH' => 'E02000979',
        '0QJ' => 'E02000979',
        '0QL' => 'E02000979',
        '0QN' => 'E02000979',
        '0QP' => 'E02000979',
        '0QR' => 'E02000979',
        '0QS' => 'E02000979',
        '0QT' => 'E02000979',
        '0QU' => 'E02000979',
        '0QW' => 'E02000979',
        '0QX' => 'E02000979',
        '0QY' => 'E02000979',
        '0QZ' => 'E02000979',
        '0RB' => 'E02000979',
        '0RD' => 'E02000979',
        '0RE' => 'E02000979',
        '0RF' => 'E02000979',
        '0RG' => 'E02000979',
        '0RH' => 'E02000979',
        '0RJ' => 'E02000979',
        '0RL' => 'E02000594',
        '0RS' => 'E02000979',
        '0SA' => 'E02000979',
        '0SW' => 'E02000979',
        '0TL' => 'E02000979',
        '0UZ' => 'E02000924',
        '0WA' => 'E02000979',
        '0WB' => 'E02000924',
        '0WD' => 'E02000979',
        '0WE' => 'E02000979',
        '0WF' => 'E02000979',
        '0WG' => 'E02000979',
        '0WH' => 'E02000979',
        '0WJ' => 'E02000979',
        '0WL' => 'E02000979',
        '0WN' => 'E02000979',
        '0WP' => 'E02000979',
        '0WQ' => 'E02000979',
        '0WR' => 'E02000979',
        '0WS' => 'E02000979',
        '0WT' => 'E02000979',
        '0WU' => 'E02000979',
        '0WX' => 'E02000979',
        '0WY' => 'E02000924',
        '0WZ' => 'E02000924',
        '0XA' => 'E02000979',
        '0XB' => 'E02000979',
        '0XD' => 'E02000979',
        '0XE' => 'E02000979',
        '0XF' => 'E02000979',
        '0XG' => 'E02000979',
        '0XH' => 'E02000979',
        '0XL' => 'E02000979',
        '0XN' => 'E02000924',
        '0XQ' => 'E02000979',
        '0XS' => 'E02000924',
        '0XU' => 'E02000979',
        '0XW' => 'E02000979',
        '0XX' => 'E02000979',
        '0XY' => 'E02000979',
        '0XZ' => 'E02000924',
        '0YB' => 'E02000979',
        '0YE' => 'E02000924',
        '0YF' => 'E02000924',
        '0YQ' => 'E02000979',
        '0ZA' => 'E02000979',
        '0ZB' => 'E02000924',
        '0ZD' => 'E02000979',
        '0ZE' => 'E02000924',
        '0ZF' => 'E02000979',
        '0ZG' => 'E02000979',
        '0ZH' => 'E02000979',
        '0ZJ' => 'E02000979',
        '0ZL' => 'E02000979',
        '0ZN' => 'E02000979',
        '0ZP' => 'E02000979',
        '0ZQ' => 'E02000979',
        '0ZR' => 'E02000979',
        '0ZS' => 'E02000979',
        '0ZT' => 'E02000979',
        '0ZU' => 'E02000979',
        '9AA' => 'E02000979',
        '9AB' => 'E02000979',
        '9AD' => 'E02000979',
        '9AE' => 'E02000979',
        '9AG' => 'E02000979',
        '9AH' => 'E02000979',
        '9AJ' => 'E02000979',
        '9AL' => 'E02000979',
        '9AN' => 'E02000979',
        '9AP' => 'E02000979',
        '9AQ' => 'E02000979',
        '9AR' => 'E02000979',
        '9AS' => 'E02000979',
        '9AT' => 'E02000979',
        '9AU' => 'E02000979',
        '9AW' => 'E02000979',
        '9AZ' => 'E02000979',
        '9BA' => 'E02000979',
        '9BB' => 'E02000979',
        '9BD' => 'E02000979',
        '9BE' => 'E02000979',
        '9BG' => 'E02000979',
        '9BH' => 'E02000979',
        '9BJ' => 'E02000979',
        '9BL' => 'E02000979',
        '9BN' => 'E02000979',
        '9BP' => 'E02000979',
        '9BQ' => 'E02000979',
        '9BS' => 'E02000979',
        '9BT' => 'E02000979',
        '9BU' => 'E02000979',
        '9BW' => 'E02000979',
        '9BX' => 'E02000924',
        '9BY' => 'E02000979',
        '9BZ' => 'E02000979',
        '9DA' => 'E02000979',
        '9DB' => 'E02000979',
        '9DD' => 'E02000979',
        '9DJ' => 'E02000979',
        '9DL' => 'E02000979',
        '9DN' => 'E02000979',
        '9DP' => 'E02000979',
        '9DR' => 'E02000979',
        '9EA' => 'E02000979',
        '9EB' => 'E02000979',
        '9ED' => 'E02000979',
        '9EE' => 'E02000979',
        '9EF' => 'E02000979',
        '9EG' => 'E02000979',
        '9EH' => 'E02000979',
        '9EJ' => 'E02000979',
        '9EP' => 'E02000979',
        '9EQ' => 'E02000979',
        '9ET' => 'E02000977',
        '9EU' => 'E02000979',
        '9EX' => 'E02000979',
        '9EY' => 'E02000979',
        '9EZ' => 'E02000979',
        '9GL' => 'E02000979',
        '9HA' => 'E02000979',
        '9HD' => 'E02000979',
        '9HE' => 'E02000979',
        '9HF' => 'E02000979',
        '9HG' => 'E02000979',
        '9HL' => 'E02000979',
        '9HN' => 'E02000979',
        '9HP' => 'E02000979',
        '9HQ' => 'E02000979',
        '9HR' => 'E02000979',
        '9HS' => 'E02000979',
        '9HT' => 'E02000979',
        '9HU' => 'E02000979',
        '9HW' => 'E02000979',
        '9HX' => 'E02000979',
        '9HY' => 'E02000979',
        '9HZ' => 'E02000979',
        '9JA' => 'E02000979',
        '9JB' => 'E02000979',
        '9JD' => 'E02000979',
        '9JE' => 'E02000979',
        '9JF' => 'E02000979',
        '9JG' => 'E02000979',
        '9JH' => 'E02000979',
        '9JJ' => 'E02000979',
        '9JL' => 'E02000979',
        '9JN' => 'E02000979',
        '9JP' => 'E02000979',
        '9JQ' => 'E02000979',
        '9JS' => 'E02000979',
        '9JT' => 'E02000979',
        '9JU' => 'E02000979',
        '9JX' => 'E02000979',
        '9JY' => 'E02000979',
        '9JZ' => 'E02000979',
        '9LA' => 'E02000979',
        '9LB' => 'E02000979',
        '9LF' => 'E02000979',
        '9LG' => 'E02000979',
        '9LH' => 'E02000979',
        '9LJ' => 'E02000979',
        '9LL' => 'E02000979',
        '9LN' => 'E02000979',
        '9LP' => 'E02000979',
        '9LQ' => 'E02000979',
        '9LR' => 'E02000979',
        '9LS' => 'E02000979',
        '9LT' => 'E02000979',
        '9LU' => 'E02000979',
        '9LW' => 'E02000979',
        '9LX' => 'E02000979',
        '9LY' => 'E02000979',
        '9LZ' => 'E02000979',
        '9NA' => 'E02000979',
        '9NB' => 'E02000979',
        '9ND' => 'E02000979',
        '9NE' => 'E02000979',
        '9NF' => 'E02000979',
        '9NG' => 'E02000979',
        '9NH' => 'E02000979',
        '9NJ' => 'E02000979',
        '9NL' => 'E02000979',
        '9NN' => 'E02000979',
        '9NP' => 'E02000979',
        '9NQ' => 'E02000979',
        '9NR' => 'E02000979',
        '9NS' => 'E02000979',
        '9NT' => 'E02000979',
        '9NU' => 'E02000979',
        '9NW' => 'E02000979',
        '9PN' => 'E02000979',
        '9RE' => 'E02000979',
        '9SP' => 'E02000979',
        '9SQ' => 'E02000979',
        '9SR' => 'E02000979',
        '9ST' => 'E02000979',
        '9WA' => 'E02000924',
        '9WB' => 'E02000979',
        '9WD' => 'E02000979',
        '9WE' => 'E02000979',
        '9WF' => 'E02000979',
        '9WH' => 'E02000924',
        '9WJ' => 'E02000979',
        '9WP' => 'E02000979',
        '9WQ' => 'E02000979',
        '9WR' => 'E02000979',
        '9WS' => 'E02000979',
        '9WT' => 'E02000979',
        '9WU' => 'E02000979',
        '9WW' => 'E02000979',
        '9WX' => 'E02000979',
        '9WY' => 'E02000979',
        '9WZ' => 'E02000979',
        '9XA' => 'E02000979',
        '9XB' => 'E02000924',
        '9XD' => 'E02000979',
        '9XF' => 'E02000979',
        '9XJ' => 'E02000979',
        '9XL' => 'E02000979',
        '9XP' => 'E02000979',
        '9XX' => 'E02000924',
        '9YE' => 'E02000979',
        '9ZA' => 'E02000979',
        '9ZB' => 'E02000979',
        '9ZD' => 'E02000924',
        '9ZE' => 'E02000979',
        '9ZF' => 'E02000979',
        '9ZG' => 'E02000979',
        '9ZH' => 'E02000979',
        '9ZJ' => 'E02000979',
        '9ZL' => 'E02000924',
        '9ZN' => 'E02000979',
        '9ZP' => 'E02000979',
        '9ZQ' => 'E02000924',
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
