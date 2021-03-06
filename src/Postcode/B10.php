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
final class B10
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02001897',
        '0AB' => 'E02001897',
        '0AD' => 'E02001897',
        '0AE' => 'E02001897',
        '0AH' => 'E02001897',
        '0AL' => 'E02001897',
        '0AP' => 'E02001897',
        '0AR' => 'E02001897',
        '0AS' => 'E02001897',
        '0AT' => 'E02001897',
        '0AU' => 'E02001897',
        '0AW' => 'E02001897',
        '0AX' => 'E02001897',
        '0AY' => 'E02001897',
        '0BA' => 'E02001897',
        '0BB' => 'E02001897',
        '0BD' => 'E02001897',
        '0BE' => 'E02001897',
        '0BG' => 'E02001897',
        '0BH' => 'E02001897',
        '0BJ' => 'E02001897',
        '0BL' => 'E02001897',
        '0BN' => 'E02001897',
        '0BP' => 'E02001897',
        '0BS' => 'E02001897',
        '0BT' => 'E02001897',
        '0BU' => 'E02001897',
        '0BW' => 'E02001897',
        '0BX' => 'E02001897',
        '0BY' => 'E02001897',
        '0BZ' => 'E02001897',
        '0DB' => 'E02001897',
        '0DD' => 'E02001897',
        '0DE' => 'E02001897',
        '0DF' => 'E02001897',
        '0DG' => 'E02001897',
        '0DL' => 'E02001897',
        '0DN' => 'E02001897',
        '0DP' => 'E02001897',
        '0DQ' => 'E02001896',
        '0DR' => 'E02001903',
        '0DS' => 'E02001903',
        '0DT' => 'E02006901',
        '0DU' => 'E02001903',
        '0DX' => 'E02001896',
        '0DY' => 'E02001897',
        '0DZ' => 'E02001897',
        '0EA' => 'E02001897',
        '0EB' => 'E02001897',
        '0ED' => 'E02001896',
        '0EE' => 'E02001896',
        '0EF' => 'E02001896',
        '0EG' => 'E02001896',
        '0EH' => 'E02001896',
        '0EJ' => 'E02006901',
        '0EL' => 'E02006901',
        '0EN' => 'E02001896',
        '0EP' => 'E02001896',
        '0EQ' => 'E02001896',
        '0ER' => 'E02001896',
        '0ES' => 'E02001884',
        '0ET' => 'E02001884',
        '0EU' => 'E02001896',
        '0EW' => 'E02001896',
        '0EX' => 'E02001896',
        '0EZ' => 'E02001896',
        '0HA' => 'E02001896',
        '0HB' => 'E02001896',
        '0HD' => 'E02001904',
        '0HE' => 'E02001896',
        '0HF' => 'E02001884',
        '0HG' => 'E02001884',
        '0HH' => 'E02006900',
        '0HJ' => 'E02001896',
        '0HL' => 'E02001896',
        '0HN' => 'E02001896',
        '0HP' => 'E02001896',
        '0HQ' => 'E02001896',
        '0HR' => 'E02001896',
        '0HT' => 'E02001896',
        '0HU' => 'E02001896',
        '0HW' => 'E02001896',
        '0HX' => 'E02001896',
        '0HY' => 'E02001896',
        '0HZ' => 'E02001896',
        '0JA' => 'E02001896',
        '0JB' => 'E02001896',
        '0JD' => 'E02001896',
        '0JE' => 'E02001896',
        '0JF' => 'E02001896',
        '0JG' => 'E02001896',
        '0JH' => 'E02001896',
        '0JJ' => 'E02001896',
        '0JL' => 'E02001896',
        '0JN' => 'E02001884',
        '0JP' => 'E02001884',
        '0JQ' => 'E02001896',
        '0JR' => 'E02001884',
        '0JS' => 'E02001896',
        '0JT' => 'E02001896',
        '0JU' => 'E02001896',
        '0JW' => 'E02001896',
        '0JX' => 'E02001896',
        '0JY' => 'E02001896',
        '0JZ' => 'E02001896',
        '0LA' => 'E02001896',
        '0LB' => 'E02001897',
        '0LD' => 'E02001896',
        '0LE' => 'E02001896',
        '0LF' => 'E02001897',
        '0LG' => 'E02001896',
        '0LH' => 'E02001896',
        '0LJ' => 'E02001896',
        '0LL' => 'E02001896',
        '0LN' => 'E02001896',
        '0LP' => 'E02001896',
        '0LQ' => 'E02001896',
        '0LR' => 'E02001896',
        '0LT' => 'E02001896',
        '0NA' => 'E02001896',
        '0NB' => 'E02001897',
        '0ND' => 'E02001897',
        '0NE' => 'E02001896',
        '0NJ' => 'E02001897',
        '0NL' => 'E02001897',
        '0NN' => 'E02001897',
        '0NP' => 'E02001897',
        '0NQ' => 'E02001884',
        '0NR' => 'E02001897',
        '0NS' => 'E02001897',
        '0NW' => 'E02001897',
        '0NY' => 'E02001897',
        '0NZ' => 'E02001897',
        '0PA' => 'E02001897',
        '0PB' => 'E02001897',
        '0PD' => 'E02001897',
        '0PG' => 'E02001897',
        '0PJ' => 'E02001897',
        '0PL' => 'E02001897',
        '0PP' => 'E02001897',
        '0PQ' => 'E02001897',
        '0PR' => 'E02001897',
        '0QA' => 'E02001897',
        '0QB' => 'E02001897',
        '0QD' => 'E02001896',
        '0QF' => 'E02001897',
        '0QG' => 'E02001897',
        '0QH' => 'E02001897',
        '0QJ' => 'E02001897',
        '0QL' => 'E02001897',
        '0QP' => 'E02001897',
        '0QQ' => 'E02001897',
        '0QR' => 'E02001896',
        '0QS' => 'E02001897',
        '0QT' => 'E02001897',
        '0RA' => 'E02001897',
        '0RF' => 'E02001897',
        '0RG' => 'E02001897',
        '0RH' => 'E02001897',
        '0RJ' => 'E02001897',
        '0RL' => 'E02001897',
        '0RN' => 'E02001897',
        '0RP' => 'E02001897',
        '0RR' => 'E02001897',
        '0RS' => 'E02001897',
        '0RT' => 'E02001897',
        '0RU' => 'E02001897',
        '0RX' => 'E02006900',
        '0SA' => 'E02006900',
        '0SB' => 'E02001896',
        '0SE' => 'E02006900',
        '0SH' => 'E02001897',
        '0SJ' => 'E02001897',
        '0SL' => 'E02001897',
        '0SN' => 'E02001897',
        '0SP' => 'E02001897',
        '0SR' => 'E02001896',
        '0SS' => 'E02001896',
        '0ST' => 'E02001896',
        '0SU' => 'E02001896',
        '0SW' => 'E02001897',
        '0SX' => 'E02001896',
        '0TA' => 'E02001896',
        '0TB' => 'E02001896',
        '0TD' => 'E02001896',
        '0TE' => 'E02001884',
        '0TF' => 'E02001884',
        '0TG' => 'E02001896',
        '0TH' => 'E02001896',
        '0TJ' => 'E02001896',
        '0TL' => 'E02001896',
        '0TN' => 'E02001896',
        '0TP' => 'E02001896',
        '0TQ' => 'E02001896',
        '0TR' => 'E02001884',
        '0TS' => 'E02001884',
        '0TT' => 'E02001896',
        '0TU' => 'E02001896',
        '0TW' => 'E02001884',
        '0TX' => 'E02006900',
        '0TY' => 'E02006900',
        '0TZ' => 'E02006900',
        '0UA' => 'E02006900',
        '0UB' => 'E02001896',
        '0UD' => 'E02001896',
        '0UE' => 'E02001896',
        '0UF' => 'E02006900',
        '0UG' => 'E02006900',
        '0UH' => 'E02001884',
        '0UJ' => 'E02001884',
        '0UN' => 'E02001896',
        '0UP' => 'E02001896',
        '0UQ' => 'E02001896',
        '0UR' => 'E02006900',
        '0US' => 'E02001896',
        '0UT' => 'E02001896',
        '0UU' => 'E02001896',
        '0UW' => 'E02001884',
        '0UX' => 'E02001896',
        '0UZ' => 'E02001884',
        '0XA' => 'E02006900',
        '0XB' => 'E02006900',
        '0XD' => 'E02001884',
        '0XE' => 'E02006900',
        '0XF' => 'E02001897',
        '0XH' => 'E02001884',
        '0XJ' => 'E02006900',
        '0XP' => 'E02001897',
        '0XQ' => 'E02001884',
        '0XR' => 'E02001897',
        '0XT' => 'E02001897',
        '0XZ' => 'E02001897',
        '0YA' => 'E02001884',
        '0YR' => 'E02001884',
        '0ZH' => 'E02001884',
        '9AA' => 'E02006900',
        '9AB' => 'E02006900',
        '9AD' => 'E02001896',
        '9AE' => 'E02006900',
        '9AF' => 'E02006900',
        '9AG' => 'E02006900',
        '9AH' => 'E02001896',
        '9AJ' => 'E02001896',
        '9AL' => 'E02006900',
        '9AN' => 'E02006900',
        '9AP' => 'E02001896',
        '9AQ' => 'E02006900',
        '9AR' => 'E02006900',
        '9AS' => 'E02001884',
        '9AT' => 'E02006900',
        '9AU' => 'E02001884',
        '9AW' => 'E02001896',
        '9AX' => 'E02001889',
        '9AY' => 'E02001889',
        '9AZ' => 'E02001889',
        '9BA' => 'E02001884',
        '9BB' => 'E02001889',
        '9BD' => 'E02001889',
        '9BE' => 'E02001889',
        '9BG' => 'E02001889',
        '9BH' => 'E02001889',
        '9BJ' => 'E02001889',
        '9BL' => 'E02001889',
        '9BN' => 'E02001889',
        '9BP' => 'E02001889',
        '9BQ' => 'E02001889',
        '9BS' => 'E02001889',
        '9BT' => 'E02001892',
        '9BU' => 'E02001889',
        '9BW' => 'E02001889',
        '9BX' => 'E02001889',
        '9BZ' => 'E02006900',
        '9DA' => 'E02006900',
        '9DB' => 'E02001896',
        '9DD' => 'E02006900',
        '9DE' => 'E02006900',
        '9DF' => 'E02006900',
        '9DG' => 'E02001896',
        '9DH' => 'E02006900',
        '9DJ' => 'E02006900',
        '9DL' => 'E02006900',
        '9DN' => 'E02006900',
        '9DP' => 'E02001896',
        '9DQ' => 'E02001896',
        '9DR' => 'E02006900',
        '9DS' => 'E02006900',
        '9DT' => 'E02006900',
        '9DU' => 'E02001889',
        '9DW' => 'E02001896',
        '9DX' => 'E02001889',
        '9DY' => 'E02006900',
        '9DZ' => 'E02001884',
        '9EA' => 'E02001889',
        '9EB' => 'E02006900',
        '9ED' => 'E02001884',
        '9EH' => 'E02001896',
        '9EJ' => 'E02001896',
        '9EL' => 'E02001896',
        '9EN' => 'E02001896',
        '9EP' => 'E02001896',
        '9EQ' => 'E02001896',
        '9ER' => 'E02001896',
        '9ES' => 'E02001896',
        '9ET' => 'E02001896',
        '9EU' => 'E02001896',
        '9EW' => 'E02001896',
        '9EX' => 'E02001896',
        '9EY' => 'E02001896',
        '9EZ' => 'E02001884',
        '9HA' => 'E02001896',
        '9HB' => 'E02006900',
        '9HD' => 'E02001896',
        '9HE' => 'E02001896',
        '9HF' => 'E02006900',
        '9HG' => 'E02001884',
        '9HH' => 'E02001892',
        '9HJ' => 'E02001892',
        '9HL' => 'E02001892',
        '9HN' => 'E02001892',
        '9HP' => 'E02001892',
        '9HR' => 'E02001892',
        '9HT' => 'E02006900',
        '9HU' => 'E02001889',
        '9HX' => 'E02001889',
        '9HY' => 'E02001889',
        '9HZ' => 'E02006900',
        '9JA' => 'E02001889',
        '9JB' => 'E02001889',
        '9JD' => 'E02001889',
        '9JE' => 'E02001892',
        '9JF' => 'E02001892',
        '9JG' => 'E02001892',
        '9JH' => 'E02001892',
        '9JL' => 'E02001889',
        '9JP' => 'E02001892',
        '9JQ' => 'E02001892',
        '9JS' => 'E02001892',
        '9JT' => 'E02001889',
        '9JU' => 'E02001889',
        '9JW' => 'E02006900',
        '9JX' => 'E02001889',
        '9JY' => 'E02001889',
        '9JZ' => 'E02001889',
        '9LA' => 'E02001892',
        '9LB' => 'E02001892',
        '9LD' => 'E02001892',
        '9LE' => 'E02001889',
        '9LG' => 'E02001892',
        '9LH' => 'E02001892',
        '9LJ' => 'E02001889',
        '9LL' => 'E02001889',
        '9LN' => 'E02001889',
        '9LP' => 'E02001889',
        '9LQ' => 'E02001892',
        '9LR' => 'E02001892',
        '9LS' => 'E02001892',
        '9LW' => 'E02001884',
        '9LZ' => 'E02006900',
        '9NA' => 'E02006900',
        '9NB' => 'E02001889',
        '9ND' => 'E02001889',
        '9NE' => 'E02001889',
        '9NG' => 'E02006900',
        '9NH' => 'E02006900',
        '9NJ' => 'E02006900',
        '9NL' => 'E02006900',
        '9NN' => 'E02001896',
        '9NP' => 'E02001896',
        '9NQ' => 'E02001884',
        '9NR' => 'E02006900',
        '9NS' => 'E02001884',
        '9NT' => 'E02006900',
        '9NU' => 'E02006900',
        '9NW' => 'E02001896',
        '9NX' => 'E02006900',
        '9NY' => 'E02006900',
        '9PA' => 'E02006900',
        '9PB' => 'E02006900',
        '9PD' => 'E02001889',
        '9PE' => 'E02006900',
        '9PF' => 'E02001889',
        '9PG' => 'E02006900',
        '9PH' => 'E02006900',
        '9PJ' => 'E02001889',
        '9PL' => 'E02001889',
        '9PN' => 'E02006900',
        '9PP' => 'E02006900',
        '9PR' => 'E02006900',
        '9PS' => 'E02006900',
        '9PT' => 'E02006900',
        '9PU' => 'E02006900',
        '9PW' => 'E02006900',
        '9PX' => 'E02006900',
        '9PY' => 'E02006900',
        '9PZ' => 'E02006900',
        '9QA' => 'E02001884',
        '9QB' => 'E02006900',
        '9QD' => 'E02001884',
        '9QE' => 'E02006900',
        '9QF' => 'E02006900',
        '9QJ' => 'E02006900',
        '9QL' => 'E02006900',
        '9QN' => 'E02006900',
        '9QP' => 'E02006900',
        '9QQ' => 'E02006900',
        '9QR' => 'E02006900',
        '9QS' => 'E02006900',
        '9QT' => 'E02006900',
        '9QX' => 'E02006900',
        '9QY' => 'E02006900',
        '9QZ' => 'E02006900',
        '9RA' => 'E02001896',
        '9RB' => 'E02001896',
        '9RD' => 'E02001896',
        '9RE' => 'E02001896',
        '9RF' => 'E02001896',
        '9RG' => 'E02006900',
        '9RH' => 'E02001896',
        '9RJ' => 'E02006900',
        '9RN' => 'E02001896',
        '9RP' => 'E02006900',
        '9RR' => 'E02006900',
        '9RS' => 'E02006900',
        '9RU' => 'E02006900',
        '9RW' => 'E02006900',
        '9RX' => 'E02006900',
        '9RY' => 'E02006900',
        '9SA' => 'E02006900',
        '9SH' => 'E02006900',
        '9SJ' => 'E02006900',
        '9SL' => 'E02006900',
        '9SN' => 'E02001896',
        '9SP' => 'E02001896',
        '9SS' => 'E02001896',
        '9ST' => 'E02001896',
        '9TA' => 'E02006900',
        '9TB' => 'E02001889',
        '9TD' => 'E02001889',
        '9TE' => 'E02006900',
        '9TF' => 'E02001896',
        '9TG' => 'E02006900',
        '9TH' => 'E02001889',
        '9TJ' => 'E02001889',
        '9TL' => 'E02001884',
        '9TQ' => 'E02001889',
        '9WA' => 'E02001884',
        '9WB' => 'E02001884',
        '9WD' => 'E02001889',
        '9WE' => 'E02001889',
        '9WF' => 'E02001889',
        '9WQ' => 'E02001884',
        '9WU' => 'E02001889',
        '9XQ' => 'E02001889',
        '9XR' => 'E02001884',
        '9XU' => 'E02001884',
        '9ZF' => 'E02001889',
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
