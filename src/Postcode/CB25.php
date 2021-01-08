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
final class CB25
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02003739',
        '0AB' => 'E02003739',
        '0AD' => 'E02003739',
        '0AE' => 'E02003739',
        '0AF' => 'E02003739',
        '0AG' => 'E02003739',
        '0AH' => 'E02003739',
        '0AJ' => 'E02003739',
        '0AL' => 'E02003739',
        '0AN' => 'E02003739',
        '0AP' => 'E02003739',
        '0AQ' => 'E02003739',
        '0AR' => 'E02003739',
        '0AS' => 'E02003739',
        '0AT' => 'E02003739',
        '0AU' => 'E02003739',
        '0AW' => 'E02003739',
        '0AX' => 'E02003739',
        '0AY' => 'E02003739',
        '0AZ' => 'E02003739',
        '0BA' => 'E02003739',
        '0BB' => 'E02003739',
        '0BD' => 'E02003739',
        '0BE' => 'E02003739',
        '0BF' => 'E02003739',
        '0BG' => 'E02003739',
        '0BH' => 'E02003739',
        '0BJ' => 'E02003739',
        '0BL' => 'E02003739',
        '0BN' => 'E02003739',
        '0BP' => 'E02003739',
        '0BQ' => 'E02003739',
        '0BS' => 'E02003739',
        '0BT' => 'E02003739',
        '0BU' => 'E02003739',
        '0BW' => 'E02003739',
        '0BX' => 'E02003739',
        '0BY' => 'E02003739',
        '0BZ' => 'E02003739',
        '0DA' => 'E02003739',
        '0DB' => 'E02003739',
        '0DD' => 'E02003739',
        '0DE' => 'E02003739',
        '0DF' => 'E02003739',
        '0DG' => 'E02003739',
        '0DH' => 'E02003739',
        '0DJ' => 'E02003739',
        '0DL' => 'E02003739',
        '0DN' => 'E02003739',
        '0DP' => 'E02003739',
        '0DQ' => 'E02003739',
        '0DR' => 'E02003739',
        '0DS' => 'E02003739',
        '0DT' => 'E02003739',
        '0DU' => 'E02003739',
        '0DW' => 'E02003739',
        '0DX' => 'E02003740',
        '0DY' => 'E02003739',
        '0DZ' => 'E02003739',
        '0EA' => 'E02003739',
        '0EB' => 'E02003739',
        '0ED' => 'E02003739',
        '0EE' => 'E02003739',
        '0EF' => 'E02003739',
        '0EG' => 'E02003739',
        '0EH' => 'E02003739',
        '0EJ' => 'E02003739',
        '0EL' => 'E02003739',
        '0EN' => 'E02003739',
        '0EP' => 'E02003739',
        '0EQ' => 'E02003739',
        '0ER' => 'E02003739',
        '0ES' => 'E02003739',
        '0ET' => 'E02003739',
        '0EU' => 'E02003739',
        '0EW' => 'E02003739',
        '0EX' => 'E02003739',
        '0EY' => 'E02003739',
        '0EZ' => 'E02003739',
        '0FA' => 'E02003740',
        '0FB' => 'E02003739',
        '0FD' => 'E02003739',
        '0FE' => 'E02003739',
        '0FF' => 'E02003739',
        '0FG' => 'E02003740',
        '0FH' => 'E02003740',
        '0FJ' => 'E02003739',
        '0FL' => 'E02003739',
        '0FN' => 'E02003739',
        '0FP' => 'E02003739',
        '0FQ' => 'E02003740',
        '0FS' => 'E02003739',
        '0GA' => 'E02003739',
        '0GH' => 'E02003739',
        '0HA' => 'E02003739',
        '0HB' => 'E02003739',
        '0HD' => 'E02003739',
        '0HE' => 'E02003739',
        '0HF' => 'E02003739',
        '0HG' => 'E02003739',
        '0HH' => 'E02003739',
        '0HJ' => 'E02003739',
        '0HL' => 'E02003739',
        '0HN' => 'E02003739',
        '0HP' => 'E02003740',
        '0HQ' => 'E02003739',
        '0HR' => 'E02003739',
        '0HS' => 'E02003739',
        '0HT' => 'E02003740',
        '0HU' => 'E02003740',
        '0HW' => 'E02003739',
        '0HX' => 'E02003740',
        '0HZ' => 'E02003740',
        '0JA' => 'E02003740',
        '0JD' => 'E02003740',
        '0JE' => 'E02003739',
        '0JF' => 'E02003740',
        '0JG' => 'E02003739',
        '0JH' => 'E02003740',
        '0JJ' => 'E02003740',
        '0JL' => 'E02003739',
        '0JP' => 'E02003739',
        '0JQ' => 'E02003740',
        '0JR' => 'E02003739',
        '0JS' => 'E02003740',
        '0JT' => 'E02003740',
        '0JU' => 'E02003740',
        '0JX' => 'E02003740',
        '0JZ' => 'E02003740',
        '0LA' => 'E02003740',
        '0LB' => 'E02003740',
        '0LD' => 'E02003740',
        '0LE' => 'E02003740',
        '0LG' => 'E02003740',
        '0LJ' => 'E02003740',
        '0LN' => 'E02003739',
        '0LP' => 'E02003740',
        '0LQ' => 'E02003740',
        '0LR' => 'E02003740',
        '0LS' => 'E02003740',
        '0LT' => 'E02003740',
        '0LU' => 'E02003740',
        '0LW' => 'E02003739',
        '0LX' => 'E02003740',
        '0LY' => 'E02003740',
        '0LZ' => 'E02003740',
        '0NA' => 'E02003740',
        '0NB' => 'E02003740',
        '0ND' => 'E02003740',
        '0NE' => 'E02003740',
        '0NF' => 'E02003740',
        '0NG' => 'E02003740',
        '0NH' => 'E02003740',
        '0NJ' => 'E02003740',
        '0NL' => 'E02003740',
        '0NQ' => 'E02003740',
        '0NR' => 'E02003724',
        '0NW' => 'E02003740',
        '0NX' => 'E02003740',
        '0PA' => 'E02003739',
        '0RA' => 'E02003739',
        '0RD' => 'E02003739',
        '0RE' => 'E02003739',
        '0RF' => 'E02003739',
        '0RG' => 'E02003739',
        '0RQ' => 'E02003739',
        '0RS' => 'E02003739',
        '0RT' => 'E02003739',
        '0RX' => 'E02003724',
        '0UW' => 'E02003739',
        '0UX' => 'E02003740',
        '0UY' => 'E02003739',
        '0UZ' => 'E02003739',
        '0WA' => 'E02003724',
        '0WB' => 'E02003739',
        '0WD' => 'E02003724',
        '0WE' => 'E02003739',
        '0WF' => 'E02003724',
        '0WG' => 'E02003739',
        '0WH' => 'E02003739',
        '0WJ' => 'E02003739',
        '0WL' => 'E02003739',
        '0WN' => 'E02003739',
        '0WP' => 'E02003724',
        '0WQ' => 'E02003724',
        '0WR' => 'E02003740',
        '0WS' => 'E02003724',
        '0WT' => 'E02003724',
        '0WU' => 'E02003739',
        '0WW' => 'E02003739',
        '0WX' => 'E02003724',
        '0WY' => 'E02003739',
        '0WZ' => 'E02003724',
        '0XA' => 'E02003739',
        '0XB' => 'E02003739',
        '0XD' => 'E02003739',
        '0XZ' => 'E02003739',
        '0YA' => 'E02003739',
        '0ZL' => 'E02003724',
        '0ZN' => 'E02003724',
        '0ZP' => 'E02003724',
        '0ZS' => 'E02003724',
        '0ZU' => 'E02003739',
        '0ZW' => 'E02003724',
        '9AA' => 'E02003781',
        '9AB' => 'E02003781',
        '9AD' => 'E02003781',
        '9AE' => 'E02003781',
        '9AF' => 'E02003781',
        '9AG' => 'E02003781',
        '9AH' => 'E02003781',
        '9AJ' => 'E02003781',
        '9AL' => 'E02003781',
        '9AN' => 'E02003781',
        '9AP' => 'E02003778',
        '9AQ' => 'E02003781',
        '9AR' => 'E02003781',
        '9AS' => 'E02003781',
        '9AT' => 'E02003781',
        '9AU' => 'E02003781',
        '9AW' => 'E02003781',
        '9AX' => 'E02003740',
        '9AY' => 'E02003778',
        '9AZ' => 'E02003778',
        '9BA' => 'E02003740',
        '9BB' => 'E02003740',
        '9BD' => 'E02003740',
        '9BE' => 'E02003740',
        '9BF' => 'E02003740',
        '9BG' => 'E02003740',
        '9BH' => 'E02003740',
        '9BJ' => 'E02003740',
        '9BL' => 'E02003740',
        '9BN' => 'E02003740',
        '9BP' => 'E02003740',
        '9BQ' => 'E02003740',
        '9BS' => 'E02003740',
        '9BT' => 'E02003778',
        '9BU' => 'E02003740',
        '9BW' => 'E02003740',
        '9BX' => 'E02003740',
        '9BY' => 'E02003740',
        '9BZ' => 'E02003778',
        '9DA' => 'E02003740',
        '9DB' => 'E02003740',
        '9DD' => 'E02003740',
        '9DE' => 'E02003740',
        '9DF' => 'E02003740',
        '9DG' => 'E02003740',
        '9DH' => 'E02003740',
        '9DJ' => 'E02003740',
        '9DL' => 'E02003740',
        '9DN' => 'E02003740',
        '9DP' => 'E02003740',
        '9DQ' => 'E02003740',
        '9DR' => 'E02003740',
        '9DS' => 'E02003740',
        '9DT' => 'E02003740',
        '9DU' => 'E02003740',
        '9DW' => 'E02003740',
        '9DX' => 'E02003740',
        '9DY' => 'E02003740',
        '9DZ' => 'E02003778',
        '9EA' => 'E02003740',
        '9EB' => 'E02003740',
        '9ED' => 'E02003740',
        '9EE' => 'E02003740',
        '9EF' => 'E02003740',
        '9EG' => 'E02003740',
        '9EH' => 'E02003740',
        '9EJ' => 'E02003740',
        '9EL' => 'E02003740',
        '9EN' => 'E02003740',
        '9EP' => 'E02003740',
        '9EQ' => 'E02003740',
        '9ER' => 'E02003740',
        '9ES' => 'E02003740',
        '9ET' => 'E02003740',
        '9EU' => 'E02003740',
        '9EW' => 'E02003740',
        '9EX' => 'E02003740',
        '9EY' => 'E02003740',
        '9EZ' => 'E02003740',
        '9FA' => 'E02003778',
        '9FB' => 'E02003778',
        '9FD' => 'E02003778',
        '9FE' => 'E02003778',
        '9FF' => 'E02003778',
        '9FG' => 'E02003778',
        '9FH' => 'E02003778',
        '9FJ' => 'E02003778',
        '9FL' => 'E02003740',
        '9FN' => 'E02003778',
        '9FP' => 'E02003740',
        '9FQ' => 'E02003778',
        '9FR' => 'E02003778',
        '9FS' => 'E02003778',
        '9FT' => 'E02003778',
        '9FU' => 'E02003778',
        '9FW' => 'E02003740',
        '9FX' => 'E02003778',
        '9FY' => 'E02003778',
        '9FZ' => 'E02003778',
        '9GA' => 'E02003778',
        '9GB' => 'E02003778',
        '9GD' => 'E02003778',
        '9GE' => 'E02003736',
        '9GF' => 'E02003778',
        '9GG' => 'E02003778',
        '9GH' => 'E02003740',
        '9GJ' => 'E02003778',
        '9GL' => 'E02003778',
        '9GP' => 'E02003778',
        '9GQ' => 'E02003778',
        '9GR' => 'E02003778',
        '9GS' => 'E02003778',
        '9GT' => 'E02003778',
        '9GU' => 'E02003778',
        '9GW' => 'E02003778',
        '9HA' => 'E02003740',
        '9HB' => 'E02003740',
        '9HD' => 'E02003740',
        '9HE' => 'E02003740',
        '9HF' => 'E02003740',
        '9HG' => 'E02003740',
        '9HH' => 'E02003740',
        '9HL' => 'E02003778',
        '9HN' => 'E02003778',
        '9HP' => 'E02003778',
        '9HQ' => 'E02003740',
        '9HR' => 'E02003778',
        '9HS' => 'E02003778',
        '9HT' => 'E02003778',
        '9HW' => 'E02003778',
        '9HX' => 'E02003778',
        '9HY' => 'E02003778',
        '9HZ' => 'E02003778',
        '9JA' => 'E02003781',
        '9JB' => 'E02003781',
        '9JD' => 'E02003781',
        '9JE' => 'E02003781',
        '9JF' => 'E02003781',
        '9JG' => 'E02003781',
        '9JH' => 'E02003781',
        '9JJ' => 'E02003781',
        '9JL' => 'E02003781',
        '9JN' => 'E02003781',
        '9JQ' => 'E02003781',
        '9JT' => 'E02003778',
        '9JU' => 'E02003778',
        '9JW' => 'E02003778',
        '9JX' => 'E02003778',
        '9JY' => 'E02003778',
        '9JZ' => 'E02003778',
        '9LA' => 'E02003778',
        '9LB' => 'E02003778',
        '9LD' => 'E02003778',
        '9LE' => 'E02003778',
        '9LF' => 'E02003778',
        '9LG' => 'E02003778',
        '9LH' => 'E02003778',
        '9LJ' => 'E02003778',
        '9LL' => 'E02003778',
        '9LN' => 'E02003778',
        '9LP' => 'E02003778',
        '9LQ' => 'E02003778',
        '9LR' => 'E02003778',
        '9LS' => 'E02003778',
        '9LT' => 'E02003778',
        '9LU' => 'E02003778',
        '9LW' => 'E02003778',
        '9LX' => 'E02003778',
        '9LY' => 'E02003778',
        '9LZ' => 'E02003778',
        '9NA' => 'E02003778',
        '9NB' => 'E02003778',
        '9ND' => 'E02003778',
        '9NE' => 'E02003778',
        '9NF' => 'E02003778',
        '9NG' => 'E02003778',
        '9NH' => 'E02003778',
        '9NJ' => 'E02003778',
        '9NL' => 'E02003778',
        '9NN' => 'E02003778',
        '9NP' => 'E02003778',
        '9NQ' => 'E02003778',
        '9NR' => 'E02003778',
        '9NS' => 'E02003778',
        '9NT' => 'E02003778',
        '9NU' => 'E02003778',
        '9NW' => 'E02003778',
        '9NX' => 'E02003778',
        '9NY' => 'E02003778',
        '9NZ' => 'E02003778',
        '9PA' => 'E02003778',
        '9PB' => 'E02003778',
        '9PD' => 'E02003778',
        '9PE' => 'E02003778',
        '9PF' => 'E02003778',
        '9PG' => 'E02003778',
        '9PH' => 'E02003778',
        '9PJ' => 'E02003776',
        '9PL' => 'E02003776',
        '9PN' => 'E02003736',
        '9PP' => 'E02003778',
        '9PQ' => 'E02003778',
        '9PR' => 'E02003778',
        '9PS' => 'E02003778',
        '9PT' => 'E02003778',
        '9PU' => 'E02003778',
        '9PW' => 'E02003778',
        '9PX' => 'E02003778',
        '9PY' => 'E02003778',
        '9PZ' => 'E02003736',
        '9QB' => 'E02003778',
        '9QD' => 'E02003778',
        '9QE' => 'E02003778',
        '9QF' => 'E02003778',
        '9QG' => 'E02003778',
        '9QH' => 'E02003778',
        '9QJ' => 'E02003778',
        '9QL' => 'E02003778',
        '9QP' => 'E02003778',
        '9QQ' => 'E02003778',
        '9QR' => 'E02003778',
        '9QT' => 'E02003778',
        '9QU' => 'E02003778',
        '9QW' => 'E02003778',
        '9QX' => 'E02003778',
        '9QY' => 'E02003740',
        '9QZ' => 'E02003778',
        '9RA' => 'E02003778',
        '9RB' => 'E02003778',
        '9RD' => 'E02003778',
        '9RE' => 'E02003778',
        '9RF' => 'E02003778',
        '9RG' => 'E02003778',
        '9RH' => 'E02003778',
        '9RJ' => 'E02003778',
        '9RL' => 'E02003778',
        '9RN' => 'E02003778',
        '9RP' => 'E02003778',
        '9RQ' => 'E02003778',
        '9RR' => 'E02003724',
        '9RW' => 'E02003778',
        '9SD' => 'E02003740',
        '9SG' => 'E02003740',
        '9SL' => 'E02003724',
        '9SQ' => 'E02003724',
        '9SR' => 'E02003781',
        '9SZ' => 'E02003781',
        '9TA' => 'E02003740',
        '9TB' => 'E02003778',
        '9TE' => 'E02003778',
        '9TF' => 'E02003778',
        '9TH' => 'E02003778',
        '9TJ' => 'E02003778',
        '9TL' => 'E02003778',
        '9TN' => 'E02003778',
        '9TP' => 'E02003778',
        '9TU' => 'E02003740',
        '9UT' => 'E02003740',
        '9UU' => 'E02003740',
        '9UW' => 'E02003740',
        '9UX' => 'E02003740',
        '9UY' => 'E02003740',
        '9UZ' => 'E02003724',
        '9WA' => 'E02003778',
        '9WB' => 'E02003724',
        '9WD' => 'E02003740',
        '9WE' => 'E02003724',
        '9WF' => 'E02003740',
        '9WG' => 'E02003778',
        '9WH' => 'E02003740',
        '9WJ' => 'E02003740',
        '9WL' => 'E02003778',
        '9WN' => 'E02003778',
        '9WP' => 'E02003724',
        '9WQ' => 'E02003724',
        '9WR' => 'E02003740',
        '9WS' => 'E02003724',
        '9WT' => 'E02003778',
        '9WU' => 'E02003724',
        '9WW' => 'E02003724',
        '9WX' => 'E02003778',
        '9WY' => 'E02003724',
        '9WZ' => 'E02003778',
        '9XA' => 'E02003740',
        '9XB' => 'E02003724',
        '9XD' => 'E02003724',
        '9XE' => 'E02003740',
        '9XF' => 'E02003740',
        '9XS' => 'E02003724',
        '9XT' => 'E02003724',
        '9XU' => 'E02003724',
        '9XW' => 'E02003724',
        '9XY' => 'E02003724',
        '9YL' => 'E02003724',
        '9ZN' => 'E02003724',
        '9ZQ' => 'E02003724',
        '9ZT' => 'E02003724',
        '9ZU' => 'E02003740',
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