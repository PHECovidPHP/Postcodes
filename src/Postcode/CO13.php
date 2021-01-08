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
final class CO13
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02004580',
        '0AB' => 'E02004580',
        '0AD' => 'E02004580',
        '0AE' => 'E02004580',
        '0AF' => 'E02004580',
        '0AG' => 'E02004580',
        '0AH' => 'E02004580',
        '0AJ' => 'E02004580',
        '0AL' => 'E02004580',
        '0AN' => 'E02004580',
        '0AP' => 'E02004580',
        '0AQ' => 'E02004580',
        '0AR' => 'E02004580',
        '0AS' => 'E02004580',
        '0AT' => 'E02004580',
        '0AU' => 'E02004580',
        '0AW' => 'E02004580',
        '0AX' => 'E02004580',
        '0AY' => 'E02004578',
        '0AZ' => 'E02004580',
        '0BA' => 'E02004580',
        '0BB' => 'E02004580',
        '0BD' => 'E02004580',
        '0BE' => 'E02004580',
        '0BG' => 'E02004580',
        '0BH' => 'E02004580',
        '0BJ' => 'E02004580',
        '0BL' => 'E02004580',
        '0BN' => 'E02004580',
        '0BP' => 'E02004578',
        '0BQ' => 'E02004580',
        '0BS' => 'E02004580',
        '0BT' => 'E02004580',
        '0BU' => 'E02004578',
        '0BW' => 'E02004580',
        '0BX' => 'E02004580',
        '0BY' => 'E02004580',
        '0BZ' => 'E02004578',
        '0DA' => 'E02004580',
        '0DB' => 'E02004580',
        '0DD' => 'E02004580',
        '0DE' => 'E02004580',
        '0DF' => 'E02004580',
        '0DG' => 'E02004580',
        '0DH' => 'E02004580',
        '0DJ' => 'E02004580',
        '0DL' => 'E02004580',
        '0DN' => 'E02004580',
        '0DP' => 'E02004580',
        '0DQ' => 'E02004580',
        '0DR' => 'E02004580',
        '0DS' => 'E02004580',
        '0DT' => 'E02004580',
        '0DU' => 'E02004580',
        '0DW' => 'E02004580',
        '0DX' => 'E02004580',
        '0DY' => 'E02004580',
        '0DZ' => 'E02004580',
        '0EA' => 'E02004580',
        '0EB' => 'E02004580',
        '0ED' => 'E02004580',
        '0EE' => 'E02004580',
        '0EF' => 'E02004580',
        '0EG' => 'E02004580',
        '0EH' => 'E02004580',
        '0EJ' => 'E02004578',
        '0EL' => 'E02004579',
        '0EN' => 'E02004579',
        '0EP' => 'E02004579',
        '0EQ' => 'E02004580',
        '0ER' => 'E02004580',
        '0ES' => 'E02004580',
        '0ET' => 'E02004580',
        '0EU' => 'E02004580',
        '0EW' => 'E02004579',
        '0EX' => 'E02004580',
        '0EY' => 'E02004580',
        '0EZ' => 'E02004579',
        '0FA' => 'E02004578',
        '0FB' => 'E02004580',
        '0FD' => 'E02004580',
        '0FE' => 'E02004578',
        '0FF' => 'E02004580',
        '0FG' => 'E02004580',
        '0FH' => 'E02004580',
        '0FL' => 'E02004580',
        '0FN' => 'E02004580',
        '0FP' => 'E02004580',
        '0FQ' => 'E02004580',
        '0FR' => 'E02004580',
        '0FS' => 'E02004580',
        '0FT' => 'E02004580',
        '0FU' => 'E02004580',
        '0FW' => 'E02004580',
        '0FX' => 'E02004580',
        '0FY' => 'E02004580',
        '0GA' => 'E02004580',
        '0GD' => 'E02004580',
        '0GY' => 'E02004578',
        '0HA' => 'E02004580',
        '0HB' => 'E02004580',
        '0HD' => 'E02004580',
        '0HE' => 'E02004580',
        '0HF' => 'E02004580',
        '0HG' => 'E02004580',
        '0HH' => 'E02004580',
        '0HJ' => 'E02004580',
        '0HL' => 'E02004580',
        '0HN' => 'E02004578',
        '0HP' => 'E02004580',
        '0HR' => 'E02004580',
        '0HS' => 'E02004580',
        '0HT' => 'E02004580',
        '0HU' => 'E02004580',
        '0HX' => 'E02004580',
        '0HY' => 'E02004580',
        '0HZ' => 'E02004580',
        '0JA' => 'E02004580',
        '0JB' => 'E02004580',
        '0JD' => 'E02004580',
        '0JE' => 'E02004580',
        '0JF' => 'E02004580',
        '0JG' => 'E02004580',
        '0JH' => 'E02004580',
        '0JJ' => 'E02004580',
        '0JL' => 'E02004580',
        '0JN' => 'E02004580',
        '0JP' => 'E02004580',
        '0JQ' => 'E02004578',
        '0JR' => 'E02004580',
        '0JS' => 'E02004580',
        '0JT' => 'E02004580',
        '0JU' => 'E02004580',
        '0JX' => 'E02004580',
        '0JY' => 'E02004580',
        '0JZ' => 'E02004580',
        '0LA' => 'E02004580',
        '0LB' => 'E02004580',
        '0LD' => 'E02004580',
        '0LE' => 'E02004580',
        '0LF' => 'E02004580',
        '0LG' => 'E02004580',
        '0LH' => 'E02004580',
        '0LJ' => 'E02004580',
        '0LL' => 'E02004580',
        '0LN' => 'E02004580',
        '0LP' => 'E02004580',
        '0LQ' => 'E02004580',
        '0LR' => 'E02004580',
        '0LS' => 'E02004580',
        '0LT' => 'E02004580',
        '0LU' => 'E02004580',
        '0LW' => 'E02004580',
        '0LX' => 'E02004580',
        '0LY' => 'E02004580',
        '0LZ' => 'E02004580',
        '0NA' => 'E02004580',
        '0NB' => 'E02004580',
        '0ND' => 'E02004580',
        '0NE' => 'E02004580',
        '0NF' => 'E02004580',
        '0NG' => 'E02004580',
        '0NH' => 'E02004580',
        '0NJ' => 'E02004579',
        '0NN' => 'E02004579',
        '0NQ' => 'E02004580',
        '0NR' => 'E02004580',
        '0NS' => 'E02004580',
        '0NW' => 'E02004580',
        '0PA' => 'E02004580',
        '0PB' => 'E02004580',
        '0PD' => 'E02004580',
        '0PE' => 'E02004580',
        '0PF' => 'E02004580',
        '0PG' => 'E02004580',
        '0PH' => 'E02004580',
        '0PJ' => 'E02004580',
        '0PL' => 'E02004580',
        '0PN' => 'E02004580',
        '0PP' => 'E02004580',
        '0PQ' => 'E02004580',
        '0PR' => 'E02004580',
        '0PS' => 'E02004580',
        '0PT' => 'E02004580',
        '0PU' => 'E02004580',
        '0PW' => 'E02004580',
        '0PX' => 'E02004580',
        '0PY' => 'E02004580',
        '0PZ' => 'E02004580',
        '0QA' => 'E02004580',
        '0QB' => 'E02004580',
        '0QD' => 'E02004580',
        '0QE' => 'E02004580',
        '0QF' => 'E02004580',
        '0QG' => 'E02004580',
        '0QH' => 'E02004580',
        '0QJ' => 'E02004580',
        '0QL' => 'E02004580',
        '0QN' => 'E02004580',
        '0QP' => 'E02004580',
        '0QQ' => 'E02004580',
        '0QR' => 'E02004580',
        '0QS' => 'E02004580',
        '0QT' => 'E02004580',
        '0QU' => 'E02004580',
        '0QW' => 'E02004580',
        '0QX' => 'E02004580',
        '0QY' => 'E02004580',
        '0QZ' => 'E02004580',
        '0RA' => 'E02004580',
        '0RB' => 'E02004580',
        '0RD' => 'E02004580',
        '0RE' => 'E02004580',
        '0RF' => 'E02004580',
        '0RG' => 'E02004580',
        '0RH' => 'E02004580',
        '0RJ' => 'E02004580',
        '0RL' => 'E02004580',
        '0RN' => 'E02004580',
        '0RP' => 'E02004580',
        '0RQ' => 'E02004580',
        '0RR' => 'E02004580',
        '0RS' => 'E02004580',
        '0RT' => 'E02004580',
        '0RU' => 'E02004580',
        '0RW' => 'E02004580',
        '0RX' => 'E02004580',
        '0RY' => 'E02004580',
        '0RZ' => 'E02004580',
        '0SA' => 'E02004580',
        '0SB' => 'E02004580',
        '0SD' => 'E02004580',
        '0SE' => 'E02004580',
        '0SF' => 'E02004580',
        '0SG' => 'E02004580',
        '0SH' => 'E02004578',
        '0SJ' => 'E02004580',
        '0SL' => 'E02004580',
        '0SN' => 'E02004580',
        '0SP' => 'E02004580',
        '0SQ' => 'E02004580',
        '0SR' => 'E02004580',
        '0SW' => 'E02004580',
        '0SX' => 'E02004580',
        '0SY' => 'E02004580',
        '0SZ' => 'E02004580',
        '0TA' => 'E02004580',
        '0TB' => 'E02004580',
        '0TD' => 'E02004580',
        '0TE' => 'E02004580',
        '0TF' => 'E02004580',
        '0TG' => 'E02004580',
        '0TH' => 'E02004580',
        '0TJ' => 'E02004580',
        '0TL' => 'E02004580',
        '0TN' => 'E02004580',
        '0TP' => 'E02004580',
        '0TQ' => 'E02004580',
        '0TR' => 'E02004580',
        '0TS' => 'E02004580',
        '0TT' => 'E02004580',
        '0TU' => 'E02004580',
        '0TW' => 'E02004580',
        '0TX' => 'E02004580',
        '0TY' => 'E02004580',
        '0TZ' => 'E02004580',
        '0UA' => 'E02004580',
        '0UB' => 'E02004580',
        '0UD' => 'E02004580',
        '0UE' => 'E02004580',
        '0UF' => 'E02004580',
        '0UG' => 'E02004580',
        '0UH' => 'E02004580',
        '0UJ' => 'E02004580',
        '0UL' => 'E02004580',
        '0UN' => 'E02004578',
        '0UP' => 'E02004580',
        '0UQ' => 'E02004580',
        '0UR' => 'E02004580',
        '0US' => 'E02004580',
        '0UT' => 'E02004580',
        '0UU' => 'E02004580',
        '0UX' => 'E02004580',
        '0UY' => 'E02004580',
        '0WA' => 'E02004578',
        '0WB' => 'E02004578',
        '0WF' => 'E02004578',
        '0WG' => 'E02004578',
        '0WN' => 'E02004580',
        '0WR' => 'E02004578',
        '0WS' => 'E02004578',
        '0WT' => 'E02004578',
        '0WU' => 'E02004578',
        '0WW' => 'E02004578',
        '0WX' => 'E02004578',
        '0WY' => 'E02004578',
        '0WZ' => 'E02004578',
        '0XB' => 'E02004578',
        '0XP' => 'E02004578',
        '0XQ' => 'E02004580',
        '3AD' => 'E02004578',
        '3AN' => 'E02004578',
        '3AP' => 'E02004578',
        '3AQ' => 'E02004578',
        '3AS' => 'E02004578',
        '3AT' => 'E02004578',
        '3AU' => 'E02004578',
        '3AW' => 'E02004578',
        '3AX' => 'E02004578',
        '3AY' => 'E02004578',
        '3AZ' => 'E02004578',
        '3BA' => 'E02004578',
        '3BB' => 'E02004578',
        '3BD' => 'E02004578',
        '3BE' => 'E02004578',
        '3BF' => 'E02004578',
        '3BH' => 'E02004578',
        '9AA' => 'E02004578',
        '9AB' => 'E02004578',
        '9AD' => 'E02004580',
        '9AE' => 'E02004580',
        '9AF' => 'E02004580',
        '9AG' => 'E02004578',
        '9AH' => 'E02004580',
        '9AJ' => 'E02004578',
        '9AL' => 'E02004578',
        '9AN' => 'E02004578',
        '9AP' => 'E02004578',
        '9AQ' => 'E02004580',
        '9AR' => 'E02004578',
        '9AS' => 'E02004578',
        '9AT' => 'E02004578',
        '9AU' => 'E02004578',
        '9AW' => 'E02004578',
        '9AX' => 'E02004578',
        '9AY' => 'E02004578',
        '9AZ' => 'E02004578',
        '9BA' => 'E02004578',
        '9BB' => 'E02004578',
        '9BD' => 'E02004578',
        '9BE' => 'E02004578',
        '9BG' => 'E02004578',
        '9BH' => 'E02004578',
        '9BJ' => 'E02004578',
        '9BL' => 'E02004578',
        '9BN' => 'E02004578',
        '9BP' => 'E02004578',
        '9BQ' => 'E02004578',
        '9BS' => 'E02004578',
        '9BT' => 'E02004578',
        '9BU' => 'E02004580',
        '9BW' => 'E02004578',
        '9BX' => 'E02004580',
        '9BY' => 'E02004580',
        '9BZ' => 'E02004580',
        '9DA' => 'E02004578',
        '9DB' => 'E02004578',
        '9DD' => 'E02004580',
        '9DE' => 'E02004578',
        '9DF' => 'E02004578',
        '9DG' => 'E02004578',
        '9DH' => 'E02004578',
        '9DJ' => 'E02004578',
        '9DL' => 'E02004578',
        '9DN' => 'E02004578',
        '9DP' => 'E02004578',
        '9DR' => 'E02004578',
        '9DS' => 'E02004578',
        '9DT' => 'E02004578',
        '9DU' => 'E02004578',
        '9DW' => 'E02004578',
        '9DX' => 'E02004580',
        '9DY' => 'E02004580',
        '9DZ' => 'E02004578',
        '9EA' => 'E02004578',
        '9EB' => 'E02004578',
        '9ED' => 'E02004580',
        '9EE' => 'E02004580',
        '9EF' => 'E02004578',
        '9EG' => 'E02004578',
        '9EH' => 'E02004578',
        '9EJ' => 'E02004578',
        '9EL' => 'E02004578',
        '9EN' => 'E02004578',
        '9EP' => 'E02004578',
        '9EQ' => 'E02004578',
        '9ER' => 'E02004578',
        '9ES' => 'E02004578',
        '9ET' => 'E02004580',
        '9EU' => 'E02004580',
        '9EW' => 'E02004578',
        '9EX' => 'E02004580',
        '9EY' => 'E02004580',
        '9EZ' => 'E02004580',
        '9FA' => 'E02004578',
        '9FB' => 'E02004578',
        '9FD' => 'E02004578',
        '9FE' => 'E02004578',
        '9FF' => 'E02004580',
        '9FG' => 'E02004580',
        '9FH' => 'E02004578',
        '9FJ' => 'E02004578',
        '9GB' => 'E02004578',
        '9GF' => 'E02004578',
        '9HA' => 'E02004580',
        '9HB' => 'E02004578',
        '9HD' => 'E02004580',
        '9HE' => 'E02004578',
        '9HF' => 'E02004578',
        '9HG' => 'E02004578',
        '9HH' => 'E02004578',
        '9HJ' => 'E02004578',
        '9HL' => 'E02004578',
        '9HN' => 'E02004578',
        '9HP' => 'E02004578',
        '9HQ' => 'E02004578',
        '9HR' => 'E02004578',
        '9HS' => 'E02004578',
        '9HT' => 'E02004578',
        '9HU' => 'E02004578',
        '9HW' => 'E02004578',
        '9HX' => 'E02004578',
        '9HY' => 'E02004578',
        '9HZ' => 'E02004578',
        '9JA' => 'E02004578',
        '9JB' => 'E02004578',
        '9JD' => 'E02004578',
        '9JE' => 'E02004578',
        '9JF' => 'E02004578',
        '9JG' => 'E02004578',
        '9JH' => 'E02004578',
        '9JJ' => 'E02004578',
        '9JL' => 'E02004578',
        '9JN' => 'E02004578',
        '9JP' => 'E02004578',
        '9JQ' => 'E02004578',
        '9JR' => 'E02004578',
        '9JS' => 'E02004580',
        '9JT' => 'E02004578',
        '9JU' => 'E02004580',
        '9JW' => 'E02004580',
        '9JX' => 'E02004580',
        '9JY' => 'E02004580',
        '9JZ' => 'E02004580',
        '9LA' => 'E02004580',
        '9LB' => 'E02004580',
        '9LD' => 'E02004580',
        '9LE' => 'E02004580',
        '9LF' => 'E02004580',
        '9LG' => 'E02004580',
        '9LH' => 'E02004580',
        '9LJ' => 'E02004580',
        '9LL' => 'E02004580',
        '9LN' => 'E02004580',
        '9LP' => 'E02004580',
        '9LQ' => 'E02004580',
        '9LR' => 'E02004580',
        '9LS' => 'E02004580',
        '9LT' => 'E02004580',
        '9LU' => 'E02004580',
        '9LW' => 'E02004580',
        '9LX' => 'E02004578',
        '9LY' => 'E02004580',
        '9LZ' => 'E02004580',
        '9NA' => 'E02004580',
        '9NB' => 'E02004578',
        '9ND' => 'E02004578',
        '9NE' => 'E02004578',
        '9NF' => 'E02004578',
        '9NG' => 'E02004578',
        '9NH' => 'E02004578',
        '9NJ' => 'E02004578',
        '9NL' => 'E02004578',
        '9NN' => 'E02004578',
        '9NP' => 'E02004578',
        '9NQ' => 'E02004578',
        '9NR' => 'E02004578',
        '9NS' => 'E02004578',
        '9NT' => 'E02004578',
        '9NU' => 'E02004578',
        '9NW' => 'E02004578',
        '9NX' => 'E02004578',
        '9NY' => 'E02004578',
        '9NZ' => 'E02004578',
        '9PA' => 'E02004578',
        '9PB' => 'E02004578',
        '9PD' => 'E02004578',
        '9PE' => 'E02004578',
        '9PF' => 'E02004578',
        '9PG' => 'E02004578',
        '9PJ' => 'E02004578',
        '9PL' => 'E02004578',
        '9PN' => 'E02004578',
        '9PP' => 'E02004578',
        '9PQ' => 'E02004578',
        '9PR' => 'E02004578',
        '9PS' => 'E02004578',
        '9PT' => 'E02004578',
        '9PU' => 'E02004578',
        '9PW' => 'E02004578',
        '9PX' => 'E02004578',
        '9PY' => 'E02004578',
        '9PZ' => 'E02004578',
        '9QA' => 'E02004578',
        '9QB' => 'E02004578',
        '9QE' => 'E02004578',
        '9QF' => 'E02004578',
        '9QH' => 'E02004578',
        '9QJ' => 'E02004580',
        '9QL' => 'E02004578',
        '9QP' => 'E02004578',
        '9QQ' => 'E02004578',
        '9RA' => 'E02004580',
        '9RB' => 'E02004578',
        '9WA' => 'E02004578',
        '9WB' => 'E02004578',
        '9WD' => 'E02004578',
        '9WE' => 'E02004578',
        '9WF' => 'E02004578',
        '9WH' => 'E02004578',
        '9WQ' => 'E02004580',
        '9WT' => 'E02004578',
        '9WX' => 'E02004578',
        '9WY' => 'E02004578',
        '9WZ' => 'E02004578',
        '9YQ' => 'E02004578',
        '9YY' => 'E02004578',
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
