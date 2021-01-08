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
final class CM17
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02004544',
        '0AB' => 'E02004544',
        '0AD' => 'E02004544',
        '0AE' => 'E02004544',
        '0AF' => 'E02004544',
        '0AG' => 'E02004544',
        '0AH' => 'E02004544',
        '0AJ' => 'E02004544',
        '0AL' => 'E02004544',
        '0AN' => 'E02004544',
        '0AP' => 'E02004544',
        '0AQ' => 'E02004544',
        '0AR' => 'E02004544',
        '0AS' => 'E02004544',
        '0AT' => 'E02004544',
        '0AU' => 'E02004544',
        '0AW' => 'E02004544',
        '0AX' => 'E02004544',
        '0AY' => 'E02004544',
        '0AZ' => 'E02004544',
        '0BA' => 'E02004544',
        '0BB' => 'E02004544',
        '0BD' => 'E02004544',
        '0BE' => 'E02004544',
        '0BG' => 'E02004544',
        '0BH' => 'E02004544',
        '0BJ' => 'E02004544',
        '0BL' => 'E02004544',
        '0BN' => 'E02004544',
        '0BP' => 'E02004544',
        '0BQ' => 'E02004544',
        '0BS' => 'E02004544',
        '0BT' => 'E02004544',
        '0BU' => 'E02004544',
        '0BW' => 'E02004544',
        '0BX' => 'E02004544',
        '0BY' => 'E02004544',
        '0BZ' => 'E02004544',
        '0DA' => 'E02004544',
        '0DB' => 'E02004544',
        '0DD' => 'E02004544',
        '0DE' => 'E02004544',
        '0DF' => 'E02004544',
        '0DG' => 'E02004544',
        '0DH' => 'E02004544',
        '0DJ' => 'E02004544',
        '0DL' => 'E02004544',
        '0DN' => 'E02004544',
        '0DP' => 'E02004544',
        '0DQ' => 'E02004544',
        '0DR' => 'E02004544',
        '0DS' => 'E02004544',
        '0DT' => 'E02004544',
        '0DU' => 'E02004544',
        '0DW' => 'E02004544',
        '0DX' => 'E02004544',
        '0DY' => 'E02004544',
        '0DZ' => 'E02004544',
        '0EA' => 'E02004544',
        '0EB' => 'E02004544',
        '0ED' => 'E02004544',
        '0EE' => 'E02004544',
        '0EF' => 'E02004544',
        '0EG' => 'E02004544',
        '0EH' => 'E02004544',
        '0EJ' => 'E02004544',
        '0EL' => 'E02004544',
        '0EN' => 'E02004550',
        '0EP' => 'E02004544',
        '0EQ' => 'E02004544',
        '0ER' => 'E02004544',
        '0ES' => 'E02004544',
        '0ET' => 'E02004544',
        '0EU' => 'E02004544',
        '0EX' => 'E02004544',
        '0EY' => 'E02004544',
        '0EZ' => 'E02004544',
        '0FA' => 'E02004544',
        '0FB' => 'E02004527',
        '0FD' => 'E02004527',
        '0FE' => 'E02004544',
        '0FF' => 'E02004544',
        '0FG' => 'E02004544',
        '0FH' => 'E02004544',
        '0FJ' => 'E02004544',
        '0FL' => 'E02004544',
        '0FN' => 'E02004544',
        '0FP' => 'E02004544',
        '0FQ' => 'E02004544',
        '0FR' => 'E02004544',
        '0FS' => 'E02004544',
        '0FT' => 'E02004544',
        '0FU' => 'E02004544',
        '0FW' => 'E02004544',
        '0FX' => 'E02004544',
        '0FY' => 'E02004544',
        '0FZ' => 'E02004544',
        '0GA' => 'E02004544',
        '0GB' => 'E02004544',
        '0GD' => 'E02004544',
        '0GE' => 'E02004544',
        '0GH' => 'E02004544',
        '0GR' => 'E02004544',
        '0GT' => 'E02004544',
        '0GX' => 'E02004544',
        '0GY' => 'E02004544',
        '0GZ' => 'E02004544',
        '0HA' => 'E02004544',
        '0HB' => 'E02004544',
        '0HD' => 'E02004544',
        '0HE' => 'E02004544',
        '0HF' => 'E02004544',
        '0HG' => 'E02004544',
        '0HH' => 'E02004544',
        '0HJ' => 'E02004544',
        '0HL' => 'E02004544',
        '0HN' => 'E02004544',
        '0HP' => 'E02004544',
        '0HQ' => 'E02004544',
        '0HR' => 'E02004544',
        '0HS' => 'E02004544',
        '0HT' => 'E02004544',
        '0HU' => 'E02004544',
        '0HW' => 'E02004544',
        '0HX' => 'E02004544',
        '0HY' => 'E02004544',
        '0HZ' => 'E02004544',
        '0JA' => 'E02004544',
        '0JB' => 'E02004544',
        '0JD' => 'E02004544',
        '0JE' => 'E02004544',
        '0JF' => 'E02004544',
        '0JG' => 'E02004544',
        '0JH' => 'E02004544',
        '0JJ' => 'E02004544',
        '0JL' => 'E02004544',
        '0JN' => 'E02004544',
        '0JP' => 'E02004527',
        '0JQ' => 'E02004544',
        '0JR' => 'E02004544',
        '0JS' => 'E02004544',
        '0JT' => 'E02004544',
        '0JU' => 'E02004544',
        '0JW' => 'E02004544',
        '0JX' => 'E02004544',
        '0JY' => 'E02004544',
        '0JZ' => 'E02004544',
        '0LA' => 'E02004544',
        '0LB' => 'E02004544',
        '0LD' => 'E02004544',
        '0LE' => 'E02004544',
        '0LF' => 'E02004550',
        '0LG' => 'E02004544',
        '0LH' => 'E02004544',
        '0LJ' => 'E02004527',
        '0LL' => 'E02004544',
        '0LN' => 'E02004544',
        '0LP' => 'E02004527',
        '0LQ' => 'E02004544',
        '0LR' => 'E02004544',
        '0LS' => 'E02004544',
        '0LT' => 'E02004544',
        '0LU' => 'E02004544',
        '0LW' => 'E02004544',
        '0LX' => 'E02004544',
        '0LY' => 'E02004544',
        '0LZ' => 'E02004544',
        '0NA' => 'E02004544',
        '0NB' => 'E02004527',
        '0ND' => 'E02004544',
        '0NE' => 'E02004527',
        '0NF' => 'E02004544',
        '0NG' => 'E02004527',
        '0NH' => 'E02004544',
        '0NJ' => 'E02004544',
        '0NL' => 'E02004544',
        '0NN' => 'E02004527',
        '0NP' => 'E02004527',
        '0NQ' => 'E02004544',
        '0NR' => 'E02004527',
        '0NS' => 'E02004529',
        '0NT' => 'E02004527',
        '0NU' => 'E02004529',
        '0NW' => 'E02004527',
        '0NX' => 'E02004527',
        '0NY' => 'E02004527',
        '0NZ' => 'E02004544',
        '0PA' => 'E02004527',
        '0PB' => 'E02004527',
        '0PD' => 'E02004527',
        '0PE' => 'E02004527',
        '0PF' => 'E02004544',
        '0PG' => 'E02004527',
        '0PH' => 'E02004527',
        '0PJ' => 'E02004527',
        '0PL' => 'E02004544',
        '0PN' => 'E02004550',
        '0PP' => 'E02004527',
        '0PQ' => 'E02004544',
        '0PR' => 'E02004527',
        '0PS' => 'E02004527',
        '0PT' => 'E02004527',
        '0PU' => 'E02004529',
        '0PW' => 'E02004529',
        '0PX' => 'E02004529',
        '0PY' => 'E02004529',
        '0PZ' => 'E02004529',
        '0QA' => 'E02004529',
        '0QB' => 'E02004529',
        '0QD' => 'E02004529',
        '0QE' => 'E02004527',
        '0QF' => 'E02004527',
        '0QG' => 'E02004550',
        '0QH' => 'E02004527',
        '0QJ' => 'E02004527',
        '0QL' => 'E02004527',
        '0QN' => 'E02004527',
        '0QP' => 'E02004527',
        '0QQ' => 'E02004550',
        '0QR' => 'E02004527',
        '0QS' => 'E02004527',
        '0QT' => 'E02004527',
        '0QU' => 'E02004527',
        '0QW' => 'E02004527',
        '0QX' => 'E02004527',
        '0QY' => 'E02004527',
        '0QZ' => 'E02004527',
        '0RA' => 'E02004527',
        '0RB' => 'E02004527',
        '0RD' => 'E02004527',
        '0RE' => 'E02004529',
        '0RF' => 'E02004529',
        '0RG' => 'E02004544',
        '0RH' => 'E02004529',
        '0RJ' => 'E02004529',
        '0RL' => 'E02004529',
        '0RN' => 'E02004527',
        '0RP' => 'E02004599',
        '0RQ' => 'E02004529',
        '0RR' => 'E02004527',
        '0RS' => 'E02004550',
        '0RT' => 'E02004550',
        '0RU' => 'E02004544',
        '0RW' => 'E02004544',
        '0RX' => 'E02004544',
        '0RY' => 'E02004550',
        '0RZ' => 'E02004544',
        '0SA' => 'E02004544',
        '0SB' => 'E02004544',
        '0SD' => 'E02004544',
        '0SE' => 'E02004544',
        '0SF' => 'E02004544',
        '0SG' => 'E02004544',
        '0TA' => 'E02004544',
        '0TB' => 'E02004544',
        '0TD' => 'E02004544',
        '0TE' => 'E02004544',
        '0TF' => 'E02004544',
        '0TZ' => 'E02004550',
        '0WA' => 'E02004550',
        '0WB' => 'E02004550',
        '0WD' => 'E02004550',
        '0WE' => 'E02004550',
        '0WL' => 'E02004550',
        '0WT' => 'E02004550',
        '0WW' => 'E02004550',
        '0WX' => 'E02004550',
        '0WY' => 'E02004550',
        '0WZ' => 'E02004550',
        '0XT' => 'E02004550',
        '0YE' => 'E02004550',
        '0YF' => 'E02004550',
        '0YY' => 'E02004544',
        '9AA' => 'E02004551',
        '9AB' => 'E02004551',
        '9AD' => 'E02004551',
        '9AE' => 'E02004551',
        '9AF' => 'E02004551',
        '9AG' => 'E02004551',
        '9AH' => 'E02004551',
        '9AJ' => 'E02004551',
        '9AL' => 'E02004551',
        '9AN' => 'E02004551',
        '9AP' => 'E02004551',
        '9AQ' => 'E02004551',
        '9AR' => 'E02004551',
        '9AS' => 'E02004551',
        '9AT' => 'E02004551',
        '9AU' => 'E02004551',
        '9AW' => 'E02004551',
        '9AX' => 'E02004551',
        '9AY' => 'E02004551',
        '9AZ' => 'E02004551',
        '9BA' => 'E02004551',
        '9BB' => 'E02004551',
        '9BD' => 'E02004551',
        '9BE' => 'E02004551',
        '9BF' => 'E02004551',
        '9BG' => 'E02004551',
        '9BH' => 'E02004551',
        '9BJ' => 'E02004551',
        '9BL' => 'E02004551',
        '9BN' => 'E02004551',
        '9BP' => 'E02004551',
        '9BQ' => 'E02004551',
        '9BS' => 'E02004551',
        '9BT' => 'E02004551',
        '9BU' => 'E02004551',
        '9BW' => 'E02004551',
        '9BX' => 'E02004551',
        '9BY' => 'E02004551',
        '9BZ' => 'E02004551',
        '9DA' => 'E02004551',
        '9DB' => 'E02004551',
        '9DD' => 'E02004551',
        '9DE' => 'E02004551',
        '9DF' => 'E02004551',
        '9DG' => 'E02004551',
        '9DH' => 'E02004551',
        '9DJ' => 'E02004551',
        '9DL' => 'E02004548',
        '9DN' => 'E02004550',
        '9DP' => 'E02004551',
        '9DQ' => 'E02004551',
        '9DR' => 'E02004548',
        '9DS' => 'E02004544',
        '9DT' => 'E02004548',
        '9DU' => 'E02004550',
        '9DW' => 'E02004550',
        '9DX' => 'E02004550',
        '9DY' => 'E02004550',
        '9DZ' => 'E02004551',
        '9EA' => 'E02004551',
        '9EB' => 'E02004551',
        '9ED' => 'E02004551',
        '9EE' => 'E02004550',
        '9EF' => 'E02004551',
        '9EG' => 'E02004551',
        '9EH' => 'E02004551',
        '9EJ' => 'E02004551',
        '9EL' => 'E02004551',
        '9EN' => 'E02004548',
        '9EP' => 'E02004551',
        '9EQ' => 'E02004551',
        '9ER' => 'E02004551',
        '9ES' => 'E02004551',
        '9ET' => 'E02004551',
        '9EU' => 'E02004551',
        '9EW' => 'E02004551',
        '9EX' => 'E02004551',
        '9EY' => 'E02004551',
        '9EZ' => 'E02004551',
        '9FA' => 'E02004544',
        '9FB' => 'E02004550',
        '9FD' => 'E02004544',
        '9FF' => 'E02004544',
        '9FG' => 'E02004544',
        '9FH' => 'E02004544',
        '9FJ' => 'E02004544',
        '9FL' => 'E02004544',
        '9FN' => 'E02004544',
        '9FP' => 'E02004550',
        '9FQ' => 'E02004551',
        '9FR' => 'E02004544',
        '9FS' => 'E02004551',
        '9FT' => 'E02004544',
        '9FU' => 'E02004544',
        '9FW' => 'E02004544',
        '9FX' => 'E02004548',
        '9FY' => 'E02004544',
        '9FZ' => 'E02004550',
        '9GA' => 'E02004550',
        '9GB' => 'E02004544',
        '9GD' => 'E02004527',
        '9GE' => 'E02004544',
        '9GF' => 'E02004544',
        '9GG' => 'E02004544',
        '9GH' => 'E02004544',
        '9GJ' => 'E02004544',
        '9GL' => 'E02004544',
        '9GN' => 'E02004544',
        '9GP' => 'E02004544',
        '9GQ' => 'E02004544',
        '9GR' => 'E02004544',
        '9GS' => 'E02004544',
        '9GT' => 'E02004544',
        '9GU' => 'E02004544',
        '9GW' => 'E02004544',
        '9GX' => 'E02004544',
        '9GY' => 'E02004544',
        '9GZ' => 'E02004544',
        '9HA' => 'E02004551',
        '9HB' => 'E02004551',
        '9HD' => 'E02004551',
        '9HE' => 'E02004544',
        '9HF' => 'E02004548',
        '9HG' => 'E02004548',
        '9HH' => 'E02004548',
        '9HJ' => 'E02004548',
        '9HL' => 'E02004548',
        '9HN' => 'E02004548',
        '9HP' => 'E02004527',
        '9HQ' => 'E02004548',
        '9HR' => 'E02004527',
        '9HS' => 'E02004527',
        '9HT' => 'E02004551',
        '9HU' => 'E02004527',
        '9HW' => 'E02004544',
        '9HX' => 'E02004527',
        '9HY' => 'E02004527',
        '9HZ' => 'E02004527',
        '9JA' => 'E02004544',
        '9JB' => 'E02004544',
        '9JD' => 'E02004551',
        '9JE' => 'E02004527',
        '9JF' => 'E02004527',
        '9JG' => 'E02004527',
        '9JH' => 'E02004527',
        '9JJ' => 'E02004544',
        '9JL' => 'E02004527',
        '9JN' => 'E02004527',
        '9JP' => 'E02004527',
        '9JQ' => 'E02004527',
        '9JR' => 'E02004527',
        '9JS' => 'E02004527',
        '9JT' => 'E02004527',
        '9JU' => 'E02004527',
        '9JW' => 'E02004527',
        '9JX' => 'E02004527',
        '9JY' => 'E02004544',
        '9JZ' => 'E02004544',
        '9LA' => 'E02004527',
        '9LB' => 'E02004544',
        '9LD' => 'E02004527',
        '9LE' => 'E02004544',
        '9LF' => 'E02004544',
        '9LG' => 'E02004544',
        '9LH' => 'E02004527',
        '9LJ' => 'E02004544',
        '9LL' => 'E02004544',
        '9LN' => 'E02004544',
        '9LP' => 'E02004544',
        '9LQ' => 'E02004544',
        '9LR' => 'E02004544',
        '9LS' => 'E02004544',
        '9LT' => 'E02004550',
        '9LU' => 'E02004544',
        '9LW' => 'E02004548',
        '9LX' => 'E02004544',
        '9LY' => 'E02004550',
        '9LZ' => 'E02004544',
        '9NA' => 'E02004544',
        '9NB' => 'E02004544',
        '9ND' => 'E02004527',
        '9NE' => 'E02004527',
        '9NF' => 'E02004527',
        '9NG' => 'E02004527',
        '9NH' => 'E02004550',
        '9NJ' => 'E02004527',
        '9NL' => 'E02004527',
        '9NN' => 'E02004544',
        '9NP' => 'E02004544',
        '9NQ' => 'E02004527',
        '9NR' => 'E02004527',
        '9NS' => 'E02004548',
        '9NT' => 'E02004548',
        '9NU' => 'E02004544',
        '9NW' => 'E02004544',
        '9NX' => 'E02004550',
        '9NY' => 'E02004544',
        '9NZ' => 'E02004544',
        '9PA' => 'E02004548',
        '9PB' => 'E02004548',
        '9PD' => 'E02004548',
        '9PE' => 'E02004548',
        '9PF' => 'E02004548',
        '9PG' => 'E02004548',
        '9PH' => 'E02004548',
        '9PJ' => 'E02004548',
        '9PL' => 'E02004548',
        '9PN' => 'E02004548',
        '9PP' => 'E02004548',
        '9PQ' => 'E02004548',
        '9PR' => 'E02004548',
        '9PS' => 'E02004548',
        '9PT' => 'E02004548',
        '9PU' => 'E02004548',
        '9PW' => 'E02004548',
        '9PX' => 'E02004548',
        '9PY' => 'E02004548',
        '9PZ' => 'E02004548',
        '9QA' => 'E02004548',
        '9QB' => 'E02004548',
        '9QD' => 'E02004548',
        '9QE' => 'E02004548',
        '9QF' => 'E02004548',
        '9QG' => 'E02004548',
        '9QH' => 'E02004548',
        '9QJ' => 'E02004548',
        '9QL' => 'E02004548',
        '9QN' => 'E02004548',
        '9QP' => 'E02004548',
        '9QQ' => 'E02004548',
        '9QR' => 'E02004548',
        '9QS' => 'E02004548',
        '9QT' => 'E02004548',
        '9QU' => 'E02004548',
        '9QW' => 'E02004548',
        '9QX' => 'E02004548',
        '9QY' => 'E02004548',
        '9QZ' => 'E02004548',
        '9RA' => 'E02004548',
        '9RB' => 'E02004548',
        '9RD' => 'E02004548',
        '9RE' => 'E02004548',
        '9RF' => 'E02004551',
        '9RG' => 'E02004548',
        '9RH' => 'E02004548',
        '9RJ' => 'E02004548',
        '9RL' => 'E02004548',
        '9RN' => 'E02004550',
        '9RP' => 'E02004550',
        '9RQ' => 'E02004550',
        '9RR' => 'E02004551',
        '9RS' => 'E02004544',
        '9RT' => 'E02004544',
        '9RU' => 'E02004548',
        '9RW' => 'E02004550',
        '9RX' => 'E02004548',
        '9RY' => 'E02004548',
        '9RZ' => 'E02004544',
        '9SA' => 'E02004544',
        '9SB' => 'E02004544',
        '9SD' => 'E02004544',
        '9SE' => 'E02004544',
        '9SF' => 'E02004544',
        '9SG' => 'E02004544',
        '9SH' => 'E02004548',
        '9SJ' => 'E02004544',
        '9SL' => 'E02004544',
        '9SN' => 'E02004544',
        '9SP' => 'E02004544',
        '9SQ' => 'E02004544',
        '9SR' => 'E02004544',
        '9SS' => 'E02004527',
        '9ST' => 'E02004544',
        '9SW' => 'E02004544',
        '9SX' => 'E02004527',
        '9TA' => 'E02004548',
        '9TB' => 'E02004548',
        '9TD' => 'E02004548',
        '9TE' => 'E02004548',
        '9TF' => 'E02004548',
        '9TG' => 'E02004548',
        '9TH' => 'E02004548',
        '9TJ' => 'E02004548',
        '9TL' => 'E02004544',
        '9TN' => 'E02004544',
        '9TP' => 'E02004548',
        '9TT' => 'E02004544',
        '9TU' => 'E02004544',
        '9TW' => 'E02004544',
        '9TY' => 'E02004548',
        '9TZ' => 'E02004548',
        '9UA' => 'E02004548',
        '9UZ' => 'E02004550',
        '9WA' => 'E02004550',
        '9WB' => 'E02004550',
        '9WD' => 'E02004550',
        '9WE' => 'E02004550',
        '9WF' => 'E02004548',
        '9WG' => 'E02004548',
        '9WH' => 'E02004548',
        '9WJ' => 'E02004550',
        '9WL' => 'E02004548',
        '9WN' => 'E02004548',
        '9WP' => 'E02004548',
        '9WQ' => 'E02004548',
        '9WR' => 'E02004548',
        '9WS' => 'E02004550',
        '9WT' => 'E02004548',
        '9WU' => 'E02004550',
        '9WW' => 'E02004550',
        '9WX' => 'E02004550',
        '9WY' => 'E02004550',
        '9WZ' => 'E02004548',
        '9XA' => 'E02004548',
        '9XB' => 'E02004548',
        '9XD' => 'E02004548',
        '9XE' => 'E02004548',
        '9XF' => 'E02004550',
        '9XT' => 'E02004550',
        '9XY' => 'E02004550',
        '9XZ' => 'E02004550',
        '9YA' => 'E02004550',
        '9YB' => 'E02004550',
        '9YE' => 'E02004548',
        '9YF' => 'E02004550',
        '9YH' => 'E02004550',
        '9YJ' => 'E02004550',
        '9YL' => 'E02004548',
        '9YP' => 'E02004548',
        '9YQ' => 'E02004550',
        '9YT' => 'E02004550',
        '9YW' => 'E02004550',
        '9YX' => 'E02004550',
        '9ZA' => 'E02004548',
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
