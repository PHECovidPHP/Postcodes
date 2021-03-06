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
final class S74
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02001536',
        '0AB' => 'E02001536',
        '0AD' => 'E02001536',
        '0AE' => 'E02001536',
        '0AF' => 'E02001537',
        '0AG' => 'E02001536',
        '0AH' => 'E02001536',
        '0AJ' => 'E02001536',
        '0AL' => 'E02001536',
        '0AN' => 'E02001536',
        '0AP' => 'E02001536',
        '0AQ' => 'E02001536',
        '0AR' => 'E02001531',
        '0AS' => 'E02001536',
        '0AT' => 'E02001536',
        '0AU' => 'E02001536',
        '0AW' => 'E02001538',
        '0AX' => 'E02001536',
        '0AY' => 'E02001538',
        '0AZ' => 'E02001538',
        '0BA' => 'E02001538',
        '0BB' => 'E02001538',
        '0BD' => 'E02001538',
        '0BE' => 'E02001536',
        '0BF' => 'E02001536',
        '0BG' => 'E02001536',
        '0BH' => 'E02001536',
        '0BJ' => 'E02001538',
        '0BL' => 'E02001538',
        '0BN' => 'E02001538',
        '0BP' => 'E02001538',
        '0BQ' => 'E02001536',
        '0BS' => 'E02001538',
        '0BT' => 'E02001536',
        '0BU' => 'E02001536',
        '0BW' => 'E02001538',
        '0BX' => 'E02001536',
        '0BY' => 'E02001536',
        '0BZ' => 'E02001538',
        '0DA' => 'E02001538',
        '0DB' => 'E02001538',
        '0DD' => 'E02001538',
        '0DE' => 'E02001538',
        '0DF' => 'E02001538',
        '0DG' => 'E02001538',
        '0DH' => 'E02001536',
        '0DJ' => 'E02001536',
        '0DL' => 'E02001536',
        '0DN' => 'E02001536',
        '0DP' => 'E02001536',
        '0DQ' => 'E02001536',
        '0DR' => 'E02001536',
        '0DS' => 'E02001536',
        '0DT' => 'E02001536',
        '0DU' => 'E02001536',
        '0DW' => 'E02001536',
        '0DX' => 'E02001536',
        '0DY' => 'E02001536',
        '0DZ' => 'E02001536',
        '0EA' => 'E02001536',
        '0EB' => 'E02001536',
        '0ED' => 'E02001536',
        '0EE' => 'E02001536',
        '0EF' => 'E02001584',
        '0EG' => 'E02001538',
        '0EH' => 'E02001538',
        '0EJ' => 'E02001538',
        '0EL' => 'E02001538',
        '0EN' => 'E02001538',
        '0EP' => 'E02001538',
        '0EQ' => 'E02001538',
        '0ER' => 'E02001538',
        '0ES' => 'E02001538',
        '0ET' => 'E02001538',
        '0EU' => 'E02001538',
        '0EW' => 'E02001538',
        '0EX' => 'E02001538',
        '0EY' => 'E02001538',
        '0EZ' => 'E02001538',
        '0FA' => 'E02001536',
        '0FB' => 'E02001537',
        '0FD' => 'E02001536',
        '0FE' => 'E02001536',
        '0FF' => 'E02001538',
        '0FG' => 'E02001536',
        '0FH' => 'E02001537',
        '0FJ' => 'E02001537',
        '0FL' => 'E02001538',
        '0HA' => 'E02001538',
        '0HB' => 'E02001538',
        '0HD' => 'E02001538',
        '0HE' => 'E02001538',
        '0HF' => 'E02001538',
        '0HG' => 'E02001538',
        '0HH' => 'E02001536',
        '0HJ' => 'E02001536',
        '0HL' => 'E02001538',
        '0HN' => 'E02001538',
        '0HP' => 'E02001538',
        '0HQ' => 'E02001538',
        '0HR' => 'E02001538',
        '0HS' => 'E02001538',
        '0HT' => 'E02001538',
        '0HU' => 'E02001537',
        '0HW' => 'E02001538',
        '0HX' => 'E02001537',
        '0HY' => 'E02001537',
        '0HZ' => 'E02001537',
        '0JA' => 'E02001537',
        '0JB' => 'E02001537',
        '0JD' => 'E02001537',
        '0JE' => 'E02001537',
        '0JF' => 'E02001537',
        '0JG' => 'E02001537',
        '0JH' => 'E02001537',
        '0JJ' => 'E02001537',
        '0JL' => 'E02001537',
        '0JN' => 'E02001537',
        '0JP' => 'E02001537',
        '0JQ' => 'E02001537',
        '0JR' => 'E02001537',
        '0JS' => 'E02001537',
        '0JT' => 'E02001537',
        '0JU' => 'E02001537',
        '0JW' => 'E02001537',
        '0JX' => 'E02001537',
        '0JY' => 'E02001537',
        '0JZ' => 'E02001537',
        '0LA' => 'E02001537',
        '0LB' => 'E02001537',
        '0LD' => 'E02001537',
        '0LE' => 'E02001537',
        '0LF' => 'E02001537',
        '0LG' => 'E02001537',
        '0LH' => 'E02001537',
        '0LJ' => 'E02001537',
        '0LL' => 'E02001538',
        '0LN' => 'E02001538',
        '0LP' => 'E02001538',
        '0LQ' => 'E02001537',
        '0LR' => 'E02001538',
        '0LS' => 'E02001538',
        '0LT' => 'E02001536',
        '0LU' => 'E02001537',
        '0LW' => 'E02001537',
        '0LX' => 'E02001536',
        '0LY' => 'E02001536',
        '0LZ' => 'E02001536',
        '0NA' => 'E02001536',
        '0NB' => 'E02001536',
        '0ND' => 'E02001536',
        '0NE' => 'E02001536',
        '0NF' => 'E02001536',
        '0NG' => 'E02001536',
        '0NH' => 'E02001536',
        '0NJ' => 'E02001536',
        '0NL' => 'E02001536',
        '0NN' => 'E02001536',
        '0NP' => 'E02001536',
        '0NQ' => 'E02001536',
        '0NR' => 'E02001536',
        '0NS' => 'E02001536',
        '0NT' => 'E02001536',
        '0NU' => 'E02001536',
        '0NW' => 'E02001536',
        '0NX' => 'E02001536',
        '0NY' => 'E02001536',
        '0NZ' => 'E02001536',
        '0PA' => 'E02001536',
        '0PB' => 'E02001536',
        '0PD' => 'E02001536',
        '0PE' => 'E02001536',
        '0PF' => 'E02001536',
        '0PG' => 'E02001536',
        '0PH' => 'E02001536',
        '0PJ' => 'E02001537',
        '0PL' => 'E02001536',
        '0PN' => 'E02001536',
        '0PP' => 'E02001536',
        '0PQ' => 'E02001536',
        '0PR' => 'E02001536',
        '0PS' => 'E02001536',
        '0PT' => 'E02001536',
        '0PU' => 'E02001536',
        '0PW' => 'E02001536',
        '0PX' => 'E02001536',
        '0PY' => 'E02001536',
        '0PZ' => 'E02001536',
        '0QA' => 'E02001536',
        '0QB' => 'E02001536',
        '0QD' => 'E02001538',
        '0QE' => 'E02001538',
        '0QF' => 'E02001538',
        '0QG' => 'E02001538',
        '0QH' => 'E02001537',
        '0QJ' => 'E02001537',
        '0QN' => 'E02001538',
        '0QP' => 'E02001538',
        '0QR' => 'E02001538',
        '0QS' => 'E02001538',
        '0QT' => 'E02001538',
        '0QU' => 'E02001536',
        '0QW' => 'E02001538',
        '0QX' => 'E02001536',
        '0QY' => 'E02001538',
        '0RA' => 'E02001536',
        '0RB' => 'E02001538',
        '0RD' => 'E02001538',
        '0RE' => 'E02001538',
        '0RF' => 'E02001538',
        '0RG' => 'E02001538',
        '0RH' => 'E02001538',
        '0RJ' => 'E02001538',
        '0RL' => 'E02001538',
        '0RN' => 'E02001536',
        '0RP' => 'E02001538',
        '0RQ' => 'E02001536',
        '0RR' => 'E02001538',
        '0RS' => 'E02001538',
        '0RT' => 'E02001538',
        '0RU' => 'E02001538',
        '0RW' => 'E02001538',
        '0RX' => 'E02001538',
        '0RY' => 'E02001538',
        '0RZ' => 'E02001538',
        '0SA' => 'E02001536',
        '0SB' => 'E02001536',
        '0WS' => 'E02001538',
        '0WT' => 'E02001531',
        '0WU' => 'E02001531',
        '0WW' => 'E02001538',
        '0WX' => 'E02001538',
        '0WY' => 'E02001531',
        '0YR' => 'E02001531',
        '0YS' => 'E02001536',
        '0YT' => 'E02001536',
        '0YU' => 'E02001538',
        '0YX' => 'E02001536',
        '0YY' => 'E02001538',
        '0YZ' => 'E02001536',
        '8AA' => 'E02001537',
        '8AB' => 'E02001537',
        '8AD' => 'E02001537',
        '8AE' => 'E02001537',
        '8AF' => 'E02001537',
        '8AG' => 'E02001537',
        '8AH' => 'E02001537',
        '8AJ' => 'E02001537',
        '8AL' => 'E02001537',
        '8AN' => 'E02001537',
        '8AP' => 'E02001537',
        '8AQ' => 'E02001537',
        '8AR' => 'E02001537',
        '8AS' => 'E02001537',
        '8AT' => 'E02001537',
        '8AU' => 'E02001584',
        '8AW' => 'E02001537',
        '8AX' => 'E02001537',
        '8AY' => 'E02001537',
        '8AZ' => 'E02001537',
        '8BA' => 'E02001537',
        '8BB' => 'E02001537',
        '8BD' => 'E02001537',
        '8BE' => 'E02001537',
        '8BG' => 'E02001537',
        '8BH' => 'E02001537',
        '8BJ' => 'E02001537',
        '8BL' => 'E02001537',
        '8BN' => 'E02001537',
        '8BP' => 'E02001537',
        '8BQ' => 'E02001537',
        '8BW' => 'E02001537',
        '8DA' => 'E02001537',
        '8DB' => 'E02001537',
        '8DD' => 'E02001537',
        '8DE' => 'E02001537',
        '8DF' => 'E02001537',
        '8DG' => 'E02001537',
        '8DH' => 'E02001537',
        '8DJ' => 'E02001537',
        '8DL' => 'E02001537',
        '8DN' => 'E02001537',
        '8DP' => 'E02001537',
        '8DR' => 'E02001537',
        '8DS' => 'E02001537',
        '8DT' => 'E02001537',
        '8DU' => 'E02001537',
        '8DW' => 'E02001537',
        '8DX' => 'E02001537',
        '8DY' => 'E02001537',
        '8DZ' => 'E02001537',
        '8EA' => 'E02001537',
        '8EB' => 'E02001537',
        '8ED' => 'E02001537',
        '8EE' => 'E02001537',
        '8EF' => 'E02001537',
        '8EG' => 'E02001537',
        '8EH' => 'E02001537',
        '8EJ' => 'E02001537',
        '8EL' => 'E02001537',
        '8EN' => 'E02001537',
        '8EP' => 'E02001537',
        '8EQ' => 'E02001537',
        '8ER' => 'E02001537',
        '8ES' => 'E02001537',
        '8ET' => 'E02001537',
        '8EU' => 'E02001537',
        '8EW' => 'E02001537',
        '8EX' => 'E02001537',
        '8EY' => 'E02001537',
        '8EZ' => 'E02001537',
        '8HG' => 'E02001537',
        '8HH' => 'E02001537',
        '8HJ' => 'E02001537',
        '8HL' => 'E02001537',
        '8HN' => 'E02001537',
        '8HP' => 'E02001537',
        '8HR' => 'E02001537',
        '8HS' => 'E02001537',
        '8HT' => 'E02001537',
        '8HU' => 'E02001537',
        '8HW' => 'E02001537',
        '8HX' => 'E02001537',
        '8HY' => 'E02001537',
        '8HZ' => 'E02001537',
        '8JA' => 'E02001537',
        '8JB' => 'E02001537',
        '8JD' => 'E02001537',
        '8JE' => 'E02001537',
        '8JF' => 'E02001537',
        '8JG' => 'E02001537',
        '8JH' => 'E02001537',
        '8JJ' => 'E02001537',
        '8JL' => 'E02001537',
        '8JN' => 'E02001537',
        '8JP' => 'E02001537',
        '8JQ' => 'E02001537',
        '8JR' => 'E02001537',
        '8JS' => 'E02001537',
        '8JT' => 'E02001537',
        '8JW' => 'E02001537',
        '8WP' => 'E02001537',
        '8WY' => 'E02001531',
        '8YW' => 'E02001531',
        '8YX' => 'E02001531',
        '8YY' => 'E02001537',
        '8YZ' => 'E02001537',
        '9AA' => 'E02001538',
        '9AB' => 'E02001538',
        '9AD' => 'E02001538',
        '9AE' => 'E02001538',
        '9AF' => 'E02001538',
        '9AG' => 'E02001538',
        '9AH' => 'E02001538',
        '9AJ' => 'E02001538',
        '9AL' => 'E02001538',
        '9AN' => 'E02001538',
        '9AP' => 'E02001538',
        '9AQ' => 'E02001538',
        '9AR' => 'E02001538',
        '9AS' => 'E02001538',
        '9AT' => 'E02001538',
        '9AU' => 'E02001538',
        '9AW' => 'E02001538',
        '9AX' => 'E02001538',
        '9AY' => 'E02001538',
        '9AZ' => 'E02001538',
        '9BA' => 'E02001538',
        '9BB' => 'E02001538',
        '9BD' => 'E02001538',
        '9BE' => 'E02001538',
        '9BF' => 'E02001538',
        '9BG' => 'E02001538',
        '9BH' => 'E02001538',
        '9BJ' => 'E02001538',
        '9BL' => 'E02001538',
        '9BN' => 'E02001538',
        '9BP' => 'E02001538',
        '9BQ' => 'E02001538',
        '9BS' => 'E02001537',
        '9BT' => 'E02001538',
        '9BU' => 'E02001584',
        '9BW' => 'E02001538',
        '9BX' => 'E02001538',
        '9BY' => 'E02001538',
        '9BZ' => 'E02001538',
        '9DA' => 'E02001538',
        '9DB' => 'E02001538',
        '9DD' => 'E02001538',
        '9DE' => 'E02001538',
        '9DF' => 'E02001536',
        '9DG' => 'E02001538',
        '9DH' => 'E02001538',
        '9DJ' => 'E02001538',
        '9DL' => 'E02001538',
        '9DN' => 'E02001538',
        '9DP' => 'E02001538',
        '9DQ' => 'E02001538',
        '9DR' => 'E02001538',
        '9DS' => 'E02001538',
        '9DT' => 'E02001538',
        '9DU' => 'E02001538',
        '9DW' => 'E02001538',
        '9DX' => 'E02001538',
        '9DY' => 'E02001538',
        '9DZ' => 'E02001538',
        '9EA' => 'E02001538',
        '9EB' => 'E02001538',
        '9ED' => 'E02001538',
        '9EE' => 'E02001538',
        '9EF' => 'E02001538',
        '9EG' => 'E02001538',
        '9EH' => 'E02001536',
        '9EJ' => 'E02001538',
        '9EL' => 'E02001538',
        '9EP' => 'E02001536',
        '9EQ' => 'E02001538',
        '9ER' => 'E02001537',
        '9ES' => 'E02001536',
        '9ET' => 'E02001536',
        '9EU' => 'E02001538',
        '9HD' => 'E02001538',
        '9HE' => 'E02001538',
        '9HF' => 'E02001538',
        '9HG' => 'E02001538',
        '9HH' => 'E02001538',
        '9HJ' => 'E02001538',
        '9HL' => 'E02001538',
        '9HN' => 'E02001538',
        '9HP' => 'E02001538',
        '9HQ' => 'E02001538',
        '9HR' => 'E02001538',
        '9HS' => 'E02001538',
        '9HT' => 'E02001538',
        '9HU' => 'E02001536',
        '9HW' => 'E02001538',
        '9HX' => 'E02001536',
        '9HY' => 'E02001536',
        '9HZ' => 'E02001538',
        '9JA' => 'E02001538',
        '9JB' => 'E02001538',
        '9JD' => 'E02001538',
        '9JE' => 'E02001538',
        '9JF' => 'E02001538',
        '9JG' => 'E02001538',
        '9JP' => 'E02001538',
        '9JQ' => 'E02001538',
        '9JR' => 'E02001538',
        '9JS' => 'E02001537',
        '9JT' => 'E02001538',
        '9JU' => 'E02001538',
        '9JW' => 'E02001537',
        '9JX' => 'E02001537',
        '9JY' => 'E02001538',
        '9JZ' => 'E02001537',
        '9LB' => 'E02001537',
        '9LD' => 'E02001538',
        '9LE' => 'E02001538',
        '9LF' => 'E02001537',
        '9LG' => 'E02001537',
        '9LH' => 'E02001536',
        '9LJ' => 'E02001537',
        '9LL' => 'E02001537',
        '9LN' => 'E02001537',
        '9LP' => 'E02001537',
        '9LQ' => 'E02001537',
        '9LR' => 'E02001537',
        '9LS' => 'E02001537',
        '9LT' => 'E02001537',
        '9LU' => 'E02001537',
        '9LW' => 'E02001537',
        '9LX' => 'E02001538',
        '9LY' => 'E02001538',
        '9LZ' => 'E02001538',
        '9NA' => 'E02001538',
        '9NB' => 'E02001537',
        '9ND' => 'E02001538',
        '9NE' => 'E02001537',
        '9NF' => 'E02001537',
        '9NG' => 'E02001537',
        '9NH' => 'E02001536',
        '9NJ' => 'E02001536',
        '9NL' => 'E02001536',
        '9NN' => 'E02001536',
        '9NP' => 'E02001538',
        '9NQ' => 'E02001536',
        '9NR' => 'E02001536',
        '9NS' => 'E02001537',
        '9NW' => 'E02001536',
        '9PA' => 'E02001537',
        '9PB' => 'E02001537',
        '9PD' => 'E02001537',
        '9PE' => 'E02001538',
        '9PF' => 'E02001538',
        '9PG' => 'E02001538',
        '9PH' => 'E02001538',
        '9PJ' => 'E02001538',
        '9PL' => 'E02001538',
        '9PN' => 'E02001538',
        '9PP' => 'E02001538',
        '9PQ' => 'E02001538',
        '9PR' => 'E02001538',
        '9PS' => 'E02001538',
        '9PT' => 'E02001538',
        '9PU' => 'E02001538',
        '9PW' => 'E02001538',
        '9PX' => 'E02001538',
        '9PY' => 'E02001538',
        '9PZ' => 'E02001538',
        '9QA' => 'E02001538',
        '9QB' => 'E02001538',
        '9QG' => 'E02001538',
        '9QH' => 'E02001538',
        '9QJ' => 'E02001538',
        '9QL' => 'E02001538',
        '9QN' => 'E02001538',
        '9QP' => 'E02001538',
        '9QR' => 'E02001538',
        '9QS' => 'E02001538',
        '9QT' => 'E02001537',
        '9QU' => 'E02001537',
        '9QW' => 'E02001538',
        '9QX' => 'E02001538',
        '9QY' => 'E02001537',
        '9QZ' => 'E02001537',
        '9RA' => 'E02001537',
        '9RB' => 'E02001537',
        '9RD' => 'E02001537',
        '9RE' => 'E02001537',
        '9RF' => 'E02001537',
        '9RG' => 'E02001537',
        '9RH' => 'E02001537',
        '9RJ' => 'E02001537',
        '9RL' => 'E02001537',
        '9RN' => 'E02001537',
        '9RP' => 'E02001537',
        '9RQ' => 'E02001537',
        '9RR' => 'E02001537',
        '9RW' => 'E02001538',
        '9RY' => 'E02001538',
        '9RZ' => 'E02001538',
        '9SA' => 'E02001538',
        '9SB' => 'E02001538',
        '9SE' => 'E02001538',
        '9SF' => 'E02001538',
        '9SG' => 'E02001538',
        '9SH' => 'E02001538',
        '9SJ' => 'E02001538',
        '9SL' => 'E02001538',
        '9SN' => 'E02001538',
        '9SP' => 'E02001538',
        '9SQ' => 'E02001538',
        '9SR' => 'E02001538',
        '9SS' => 'E02001538',
        '9ST' => 'E02001538',
        '9SU' => 'E02001538',
        '9SW' => 'E02001538',
        '9SX' => 'E02001538',
        '9SY' => 'E02001538',
        '9SZ' => 'E02001537',
        '9TA' => 'E02001538',
        '9TB' => 'E02001538',
        '9TD' => 'E02001538',
        '9TF' => 'E02001536',
        '9TG' => 'E02001536',
        '9TH' => 'E02001538',
        '9TJ' => 'E02001538',
        '9TL' => 'E02001538',
        '9WY' => 'E02001538',
        '9YT' => 'E02001531',
        '9YU' => 'E02001538',
        '9YW' => 'E02001531',
        '9YX' => 'E02001531',
        '9YY' => 'E02001531',
        '9YZ' => 'E02001538',
        '9ZW' => 'E02001531',
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
