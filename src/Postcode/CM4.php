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
final class CM4
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02004465',
        '0AB' => 'E02004465',
        '0AD' => 'E02004465',
        '0AE' => 'E02004465',
        '0AF' => 'E02004465',
        '0AG' => 'E02004465',
        '0AH' => 'E02004465',
        '0AJ' => 'E02004465',
        '0AL' => 'E02004465',
        '0AN' => 'E02004465',
        '0AP' => 'E02004465',
        '0AQ' => 'E02004465',
        '0AR' => 'E02004465',
        '0AS' => 'E02004465',
        '0AT' => 'E02004465',
        '0AU' => 'E02004465',
        '0AW' => 'E02004465',
        '0AX' => 'E02004465',
        '0AY' => 'E02004465',
        '0AZ' => 'E02004465',
        '0BA' => 'E02004465',
        '0BB' => 'E02004465',
        '0BD' => 'E02004465',
        '0BE' => 'E02004465',
        '0BG' => 'E02004465',
        '0BH' => 'E02004465',
        '0BJ' => 'E02004465',
        '0BL' => 'E02004465',
        '0BN' => 'E02004465',
        '0BP' => 'E02004465',
        '0BQ' => 'E02004465',
        '0BS' => 'E02004465',
        '0BT' => 'E02004465',
        '0BU' => 'E02004465',
        '0BW' => 'E02004465',
        '0BX' => 'E02004465',
        '0BY' => 'E02004465',
        '0BZ' => 'E02004465',
        '0DA' => 'E02004465',
        '0DB' => 'E02004465',
        '0DD' => 'E02004465',
        '0DE' => 'E02004465',
        '0DF' => 'E02004465',
        '0DG' => 'E02004465',
        '0DH' => 'E02004465',
        '0DJ' => 'E02004465',
        '0DL' => 'E02004465',
        '0DN' => 'E02004465',
        '0DP' => 'E02004465',
        '0DQ' => 'E02004465',
        '0DR' => 'E02004465',
        '0DS' => 'E02004465',
        '0DT' => 'E02004465',
        '0DU' => 'E02004465',
        '0DW' => 'E02004465',
        '0DX' => 'E02004465',
        '0DY' => 'E02004465',
        '0DZ' => 'E02004465',
        '0EA' => 'E02004465',
        '0EB' => 'E02004502',
        '0ED' => 'E02004502',
        '0EE' => 'E02004502',
        '0EF' => 'E02004502',
        '0EG' => 'E02004502',
        '0EH' => 'E02004502',
        '0EJ' => 'E02004502',
        '0EL' => 'E02004502',
        '0EN' => 'E02004502',
        '0EP' => 'E02004502',
        '0EQ' => 'E02004502',
        '0ER' => 'E02004502',
        '0ES' => 'E02004502',
        '0ET' => 'E02004502',
        '0EU' => 'E02004502',
        '0EW' => 'E02004502',
        '0EX' => 'E02004502',
        '0EY' => 'E02004502',
        '0EZ' => 'E02004502',
        '0FA' => 'E02004465',
        '0FB' => 'E02004502',
        '0FD' => 'E02004465',
        '0FE' => 'E02004465',
        '0FF' => 'E02004495',
        '0FG' => 'E02004465',
        '0FH' => 'E02004465',
        '0FJ' => 'E02004465',
        '0FL' => 'E02004529',
        '0FP' => 'E02004465',
        '0FQ' => 'E02004465',
        '0FR' => 'E02004529',
        '0FS' => 'E02004465',
        '0GA' => 'E02004465',
        '0GB' => 'E02004465',
        '0GF' => 'E02004465',
        '0GH' => 'E02004465',
        '0HA' => 'E02004502',
        '0HB' => 'E02004502',
        '0HD' => 'E02004502',
        '0HE' => 'E02004465',
        '0HF' => 'E02004465',
        '0HG' => 'E02004465',
        '0HH' => 'E02004465',
        '0HJ' => 'E02004465',
        '0HL' => 'E02004465',
        '0HN' => 'E02004465',
        '0HP' => 'E02004465',
        '0HQ' => 'E02004465',
        '0HR' => 'E02004465',
        '0HS' => 'E02004465',
        '0HT' => 'E02004465',
        '0HU' => 'E02004465',
        '0HW' => 'E02004465',
        '0HX' => 'E02004465',
        '0HY' => 'E02004465',
        '0HZ' => 'E02004465',
        '0JA' => 'E02004465',
        '0JB' => 'E02004465',
        '0JD' => 'E02004465',
        '0JE' => 'E02004465',
        '0JF' => 'E02004465',
        '0JG' => 'E02004465',
        '0JH' => 'E02004465',
        '0JJ' => 'E02004465',
        '0JL' => 'E02004464',
        '0JN' => 'E02004464',
        '0JP' => 'E02004529',
        '0JQ' => 'E02004465',
        '0JR' => 'E02004464',
        '0JS' => 'E02004464',
        '0JT' => 'E02004464',
        '0JU' => 'E02004529',
        '0JW' => 'E02004464',
        '0JX' => 'E02004529',
        '0JY' => 'E02004529',
        '0JZ' => 'E02004529',
        '0LA' => 'E02004529',
        '0LB' => 'E02004529',
        '0LD' => 'E02004529',
        '0LE' => 'E02004529',
        '0LF' => 'E02004529',
        '0LG' => 'E02004529',
        '0LH' => 'E02004529',
        '0LJ' => 'E02004529',
        '0LL' => 'E02004529',
        '0LN' => 'E02004529',
        '0LP' => 'E02004529',
        '0LQ' => 'E02004529',
        '0LR' => 'E02004495',
        '0LS' => 'E02004495',
        '0LT' => 'E02004495',
        '0LU' => 'E02004495',
        '0LW' => 'E02004529',
        '0LX' => 'E02004495',
        '0LY' => 'E02004495',
        '0LZ' => 'E02004465',
        '0NA' => 'E02004529',
        '0NB' => 'E02004465',
        '0ND' => 'E02004465',
        '0NE' => 'E02004465',
        '0NG' => 'E02004465',
        '0NH' => 'E02004465',
        '0NJ' => 'E02004465',
        '0NL' => 'E02004465',
        '0NN' => 'E02004465',
        '0NP' => 'E02004465',
        '0NQ' => 'E02004465',
        '0NR' => 'E02004465',
        '0NS' => 'E02004465',
        '0NT' => 'E02004465',
        '0NU' => 'E02004465',
        '0NW' => 'E02004465',
        '0NX' => 'E02004464',
        '0NY' => 'E02004464',
        '0NZ' => 'E02004464',
        '0PA' => 'E02004465',
        '0PB' => 'E02004465',
        '0PD' => 'E02004465',
        '0PE' => 'E02004465',
        '0PF' => 'E02004465',
        '0PG' => 'E02004465',
        '0PH' => 'E02004465',
        '0PJ' => 'E02004465',
        '0PL' => 'E02004465',
        '0PN' => 'E02004465',
        '0PP' => 'E02004465',
        '0PQ' => 'E02004465',
        '0PR' => 'E02004495',
        '0PS' => 'E02004465',
        '0PT' => 'E02004465',
        '0PU' => 'E02004502',
        '0PW' => 'E02004465',
        '0PX' => 'E02004502',
        '0PY' => 'E02004495',
        '0PZ' => 'E02004464',
        '0QA' => 'E02004465',
        '0QB' => 'E02004502',
        '0QD' => 'E02004465',
        '0QE' => 'E02004464',
        '0QF' => 'E02004464',
        '0QG' => 'E02004465',
        '0QH' => 'E02004464',
        '0QJ' => 'E02004464',
        '0QL' => 'E02004464',
        '0QN' => 'E02004464',
        '0QP' => 'E02004464',
        '0QQ' => 'E02004464',
        '0QR' => 'E02004464',
        '0QS' => 'E02004464',
        '0QT' => 'E02004464',
        '0QU' => 'E02004464',
        '0QW' => 'E02004464',
        '0QX' => 'E02004464',
        '0QY' => 'E02004464',
        '0QZ' => 'E02004464',
        '0RA' => 'E02004464',
        '0RB' => 'E02004464',
        '0RD' => 'E02004464',
        '0RE' => 'E02004465',
        '0RF' => 'E02004464',
        '0RG' => 'E02004465',
        '0RH' => 'E02004465',
        '0RJ' => 'E02004464',
        '0RL' => 'E02004464',
        '0RN' => 'E02004464',
        '0RP' => 'E02004464',
        '0RR' => 'E02004464',
        '0RS' => 'E02004464',
        '0RT' => 'E02004464',
        '0RU' => 'E02004464',
        '0RW' => 'E02004464',
        '0RX' => 'E02004464',
        '0RY' => 'E02004464',
        '0RZ' => 'E02004464',
        '0SA' => 'E02004464',
        '0SB' => 'E02004464',
        '0SD' => 'E02004464',
        '0SE' => 'E02004464',
        '0SF' => 'E02004464',
        '0SG' => 'E02004465',
        '0SH' => 'E02004464',
        '0SJ' => 'E02004464',
        '0SP' => 'E02004464',
        '0SQ' => 'E02004464',
        '0SU' => 'E02004465',
        '0SX' => 'E02004465',
        '0SY' => 'E02004465',
        '0TE' => 'E02004465',
        '0TF' => 'E02004465',
        '0TG' => 'E02004495',
        '0TP' => 'E02004465',
        '0TQ' => 'E02004465',
        '0TW' => 'E02004465',
        '0US' => 'E02004465',
        '0UT' => 'E02004465',
        '0UU' => 'E02004465',
        '0UW' => 'E02004464',
        '0UX' => 'E02004465',
        '0UY' => 'E02004464',
        '0UZ' => 'E02004464',
        '0WA' => 'E02004465',
        '0WB' => 'E02004465',
        '0WD' => 'E02004465',
        '0WE' => 'E02004465',
        '0WF' => 'E02004465',
        '0WG' => 'E02004465',
        '0WH' => 'E02004465',
        '0WJ' => 'E02004465',
        '0WL' => 'E02004465',
        '0WN' => 'E02004464',
        '0WP' => 'E02004465',
        '0WQ' => 'E02004465',
        '0WR' => 'E02004465',
        '0WS' => 'E02004465',
        '0WT' => 'E02004465',
        '0WU' => 'E02004465',
        '0WW' => 'E02004465',
        '0WX' => 'E02004465',
        '0WY' => 'E02004464',
        '0WZ' => 'E02004465',
        '0XA' => 'E02004465',
        '0XB' => 'E02004465',
        '0XD' => 'E02004465',
        '0XE' => 'E02004464',
        '0XF' => 'E02004465',
        '0XG' => 'E02004465',
        '0YA' => 'E02004465',
        '0YB' => 'E02004465',
        '0YF' => 'E02004465',
        '0YX' => 'E02004465',
        '0YY' => 'E02004465',
        '0YZ' => 'E02004465',
        '9AA' => 'E02004465',
        '9AB' => 'E02004465',
        '9AD' => 'E02004465',
        '9AE' => 'E02004465',
        '9AF' => 'E02004465',
        '9AG' => 'E02004465',
        '9AH' => 'E02004465',
        '9AJ' => 'E02004465',
        '9AL' => 'E02004465',
        '9AN' => 'E02004465',
        '9AP' => 'E02004465',
        '9AQ' => 'E02004465',
        '9AR' => 'E02004465',
        '9AS' => 'E02004465',
        '9AT' => 'E02004465',
        '9AU' => 'E02004465',
        '9AW' => 'E02004465',
        '9AX' => 'E02004465',
        '9AY' => 'E02004465',
        '9AZ' => 'E02004465',
        '9BA' => 'E02004502',
        '9BB' => 'E02004502',
        '9BD' => 'E02004502',
        '9BE' => 'E02004502',
        '9BG' => 'E02004502',
        '9BH' => 'E02004502',
        '9BJ' => 'E02004502',
        '9BL' => 'E02004502',
        '9BN' => 'E02004502',
        '9BP' => 'E02004502',
        '9BQ' => 'E02004502',
        '9BS' => 'E02004502',
        '9BT' => 'E02004502',
        '9BU' => 'E02004502',
        '9BW' => 'E02004502',
        '9BX' => 'E02004502',
        '9BY' => 'E02004502',
        '9BZ' => 'E02004502',
        '9DA' => 'E02004502',
        '9DB' => 'E02004502',
        '9DD' => 'E02004502',
        '9DE' => 'E02004502',
        '9DF' => 'E02004502',
        '9DG' => 'E02004502',
        '9DH' => 'E02004502',
        '9DJ' => 'E02004502',
        '9DL' => 'E02004465',
        '9DN' => 'E02004465',
        '9DP' => 'E02004502',
        '9DQ' => 'E02004502',
        '9DR' => 'E02004465',
        '9DS' => 'E02004465',
        '9DT' => 'E02004465',
        '9DU' => 'E02004465',
        '9DW' => 'E02004465',
        '9DX' => 'E02004465',
        '9DY' => 'E02004465',
        '9DZ' => 'E02004465',
        '9EA' => 'E02004465',
        '9EB' => 'E02004465',
        '9ED' => 'E02004465',
        '9EE' => 'E02004465',
        '9EF' => 'E02004465',
        '9EG' => 'E02004465',
        '9EH' => 'E02004465',
        '9EJ' => 'E02004465',
        '9EL' => 'E02004465',
        '9EN' => 'E02004465',
        '9EP' => 'E02004465',
        '9EQ' => 'E02004465',
        '9ER' => 'E02004465',
        '9ES' => 'E02004465',
        '9ET' => 'E02004465',
        '9EU' => 'E02004465',
        '9EW' => 'E02004465',
        '9EX' => 'E02004465',
        '9EY' => 'E02004465',
        '9EZ' => 'E02004465',
        '9FA' => 'E02004502',
        '9FB' => 'E02004502',
        '9FD' => 'E02004502',
        '9FE' => 'E02004465',
        '9FF' => 'E02004502',
        '9FH' => 'E02004465',
        '9FJ' => 'E02004465',
        '9GA' => 'E02004465',
        '9GB' => 'E02004502',
        '9GD' => 'E02004502',
        '9GG' => 'E02004465',
        '9GZ' => 'E02004465',
        '9HA' => 'E02004465',
        '9HB' => 'E02004465',
        '9HD' => 'E02004465',
        '9HE' => 'E02004465',
        '9HF' => 'E02004465',
        '9HG' => 'E02004465',
        '9HH' => 'E02004465',
        '9HJ' => 'E02004465',
        '9HL' => 'E02004465',
        '9HN' => 'E02004465',
        '9HP' => 'E02004465',
        '9HQ' => 'E02004465',
        '9HR' => 'E02004465',
        '9HS' => 'E02004502',
        '9HT' => 'E02004502',
        '9HU' => 'E02004502',
        '9HW' => 'E02004465',
        '9HX' => 'E02004502',
        '9HY' => 'E02004502',
        '9HZ' => 'E02004502',
        '9JA' => 'E02004502',
        '9JB' => 'E02004502',
        '9JD' => 'E02004502',
        '9JE' => 'E02004502',
        '9JF' => 'E02004502',
        '9JG' => 'E02004502',
        '9JH' => 'E02004502',
        '9JJ' => 'E02004502',
        '9JL' => 'E02004502',
        '9JN' => 'E02004502',
        '9JP' => 'E02004502',
        '9JQ' => 'E02004502',
        '9JR' => 'E02004502',
        '9JS' => 'E02004502',
        '9JT' => 'E02004502',
        '9JU' => 'E02004502',
        '9JW' => 'E02004502',
        '9JX' => 'E02004502',
        '9JY' => 'E02004502',
        '9JZ' => 'E02004465',
        '9LA' => 'E02004465',
        '9LB' => 'E02004465',
        '9LD' => 'E02004502',
        '9LE' => 'E02004502',
        '9LF' => 'E02004502',
        '9LG' => 'E02004502',
        '9LH' => 'E02004502',
        '9LJ' => 'E02004502',
        '9LL' => 'E02004502',
        '9LN' => 'E02004502',
        '9LP' => 'E02004502',
        '9LQ' => 'E02004502',
        '9LR' => 'E02004502',
        '9LS' => 'E02004502',
        '9LT' => 'E02004502',
        '9LU' => 'E02004502',
        '9LW' => 'E02004502',
        '9LX' => 'E02004502',
        '9LY' => 'E02004502',
        '9LZ' => 'E02004502',
        '9NA' => 'E02004502',
        '9NB' => 'E02004502',
        '9ND' => 'E02004502',
        '9NE' => 'E02004502',
        '9NF' => 'E02004502',
        '9NG' => 'E02004502',
        '9NH' => 'E02004502',
        '9NJ' => 'E02004502',
        '9NL' => 'E02004465',
        '9NN' => 'E02004465',
        '9NP' => 'E02004465',
        '9NQ' => 'E02004502',
        '9NR' => 'E02004465',
        '9NS' => 'E02004465',
        '9NT' => 'E02004465',
        '9NU' => 'E02004465',
        '9NW' => 'E02004465',
        '9NX' => 'E02004465',
        '9NY' => 'E02004465',
        '9NZ' => 'E02004502',
        '9PA' => 'E02004502',
        '9PB' => 'E02004502',
        '9PD' => 'E02004502',
        '9PE' => 'E02004502',
        '9PF' => 'E02004502',
        '9PG' => 'E02004502',
        '9PH' => 'E02004502',
        '9PJ' => 'E02004424',
        '9PL' => 'E02004425',
        '9PN' => 'E02004424',
        '9PP' => 'E02004502',
        '9PQ' => 'E02004502',
        '9PR' => 'E02004502',
        '9PS' => 'E02004502',
        '9PT' => 'E02004502',
        '9PU' => 'E02004502',
        '9PW' => 'E02004424',
        '9PX' => 'E02004424',
        '9PY' => 'E02004502',
        '9PZ' => 'E02004502',
        '9QA' => 'E02004502',
        '9QB' => 'E02004502',
        '9QD' => 'E02004502',
        '9QE' => 'E02004502',
        '9QF' => 'E02004502',
        '9QG' => 'E02004502',
        '9QH' => 'E02004465',
        '9QJ' => 'E02004502',
        '9QL' => 'E02004465',
        '9QN' => 'E02004465',
        '9QP' => 'E02004502',
        '9QQ' => 'E02004465',
        '9QR' => 'E02004502',
        '9QS' => 'E02004502',
        '9QT' => 'E02004502',
        '9QU' => 'E02004502',
        '9QW' => 'E02004502',
        '9QX' => 'E02004502',
        '9QY' => 'E02004502',
        '9QZ' => 'E02004502',
        '9RA' => 'E02004502',
        '9RB' => 'E02004502',
        '9RD' => 'E02004502',
        '9RE' => 'E02004502',
        '9RF' => 'E02004502',
        '9RG' => 'E02004502',
        '9RH' => 'E02004502',
        '9RJ' => 'E02004502',
        '9RL' => 'E02004502',
        '9RN' => 'E02004502',
        '9RP' => 'E02004502',
        '9RQ' => 'E02004502',
        '9RR' => 'E02004502',
        '9RS' => 'E02004502',
        '9RT' => 'E02004502',
        '9RU' => 'E02004502',
        '9RW' => 'E02004502',
        '9RX' => 'E02004465',
        '9RY' => 'E02004502',
        '9RZ' => 'E02004502',
        '9SA' => 'E02004502',
        '9SB' => 'E02004502',
        '9SD' => 'E02004502',
        '9SE' => 'E02004465',
        '9SF' => 'E02004502',
        '9SG' => 'E02004465',
        '9SH' => 'E02004465',
        '9SJ' => 'E02004465',
        '9SL' => 'E02004465',
        '9SN' => 'E02004465',
        '9SP' => 'E02004465',
        '9SQ' => 'E02004465',
        '9SR' => 'E02004465',
        '9SS' => 'E02004465',
        '9ST' => 'E02004502',
        '9SU' => 'E02004502',
        '9SW' => 'E02004465',
        '9SX' => 'E02004465',
        '9SY' => 'E02004465',
        '9TA' => 'E02004502',
        '9TB' => 'E02004502',
        '9TD' => 'E02004502',
        '9TE' => 'E02004465',
        '9TF' => 'E02004465',
        '9TJ' => 'E02004465',
        '9TL' => 'E02004465',
        '9TN' => 'E02004497',
        '9TP' => 'E02004465',
        '9TS' => 'E02004497',
        '9TT' => 'E02004465',
        '9TU' => 'E02004465',
        '9TW' => 'E02004497',
        '9UY' => 'E02004465',
        '9WA' => 'E02004465',
        '9WB' => 'E02004465',
        '9WD' => 'E02004465',
        '9WE' => 'E02004465',
        '9WF' => 'E02004465',
        '9WG' => 'E02004465',
        '9WH' => 'E02004465',
        '9WJ' => 'E02004465',
        '9WL' => 'E02004465',
        '9WN' => 'E02004465',
        '9WP' => 'E02004465',
        '9WQ' => 'E02004465',
        '9WR' => 'E02004465',
        '9WS' => 'E02004465',
        '9WT' => 'E02004465',
        '9WU' => 'E02004465',
        '9WW' => 'E02004465',
        '9WX' => 'E02004465',
        '9WY' => 'E02004465',
        '9WZ' => 'E02004465',
        '9XA' => 'E02004465',
        '9XB' => 'E02004465',
        '9XD' => 'E02004465',
        '9XE' => 'E02004465',
        '9XF' => 'E02004465',
        '9XG' => 'E02004465',
        '9XH' => 'E02004465',
        '9XJ' => 'E02004465',
        '9YW' => 'E02004465',
        '9YX' => 'E02004465',
        '9YZ' => 'E02004465',
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
