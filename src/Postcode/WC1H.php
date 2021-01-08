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
final class WC1H
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02000193',
        '0AB' => 'E02000193',
        '0AD' => 'E02000191',
        '0AE' => 'E02000190',
        '0AF' => 'E02000191',
        '0AG' => 'E02000193',
        '0AH' => 'E02000191',
        '0AJ' => 'E02000191',
        '0AL' => 'E02000193',
        '0AN' => 'E02000191',
        '0AP' => 'E02000193',
        '0AQ' => 'E02000191',
        '0AR' => 'E02000191',
        '0AT' => 'E02000193',
        '0AW' => 'E02000193',
        '0AX' => 'E02000191',
        '0AY' => 'E02000191',
        '0AZ' => 'E02000191',
        '0BA' => 'E02000191',
        '0BB' => 'E02000191',
        '0BD' => 'E02000191',
        '0BE' => 'E02000191',
        '0BH' => 'E02000191',
        '0BJ' => 'E02000191',
        '0BQ' => 'E02000191',
        '0BS' => 'E02000191',
        '0BT' => 'E02000191',
        '0BW' => 'E02000191',
        '0BX' => 'E02000191',
        '0BZ' => 'E02000972',
        '0DA' => 'E02000191',
        '0DB' => 'E02000191',
        '0DD' => 'E02000191',
        '0DE' => 'E02000193',
        '0DG' => 'E02000191',
        '0DH' => 'E02000191',
        '0DJ' => 'E02000191',
        '0DL' => 'E02000191',
        '0DN' => 'E02000191',
        '0DP' => 'E02000191',
        '0DQ' => 'E02000191',
        '0DS' => 'E02000191',
        '0DU' => 'E02000191',
        '0DW' => 'E02000191',
        '0DX' => 'E02000191',
        '0DZ' => 'E02000191',
        '0EA' => 'E02000191',
        '0EB' => 'E02000191',
        '0ED' => 'E02000191',
        '0EE' => 'E02000193',
        '0EF' => 'E02000191',
        '0EG' => 'E02000191',
        '0EH' => 'E02000191',
        '0EJ' => 'E02000191',
        '0EN' => 'E02000191',
        '0EP' => 'E02000191',
        '0ES' => 'E02000191',
        '0ET' => 'E02000191',
        '0EU' => 'E02000191',
        '0EW' => 'E02000193',
        '0EX' => 'E02000191',
        '0EZ' => 'E02000191',
        '0HA' => 'E02000191',
        '0HB' => 'E02000191',
        '0HD' => 'E02000191',
        '0HF' => 'E02000191',
        '0HH' => 'E02000191',
        '0HJ' => 'E02000191',
        '0HL' => 'E02000191',
        '0HP' => 'E02000191',
        '0HQ' => 'E02000191',
        '0HS' => 'E02000191',
        '0HT' => 'E02000191',
        '0HW' => 'E02000191',
        '0HX' => 'E02000190',
        '0HY' => 'E02000190',
        '0HZ' => 'E02000193',
        '0JB' => 'E02000190',
        '0JD' => 'E02000190',
        '0JE' => 'E02000190',
        '0JF' => 'E02000193',
        '0JH' => 'E02000190',
        '0JJ' => 'E02000190',
        '0JL' => 'E02000190',
        '0JN' => 'E02000190',
        '0JP' => 'E02000191',
        '0JQ' => 'E02000191',
        '0JR' => 'E02000191',
        '0JS' => 'E02000193',
        '0JU' => 'E02000193',
        '0JW' => 'E02000190',
        '0JX' => 'E02000191',
        '0JY' => 'E02000191',
        '0JZ' => 'E02000191',
        '0LB' => 'E02000193',
        '0LD' => 'E02000191',
        '0LF' => 'E02000193',
        '0LH' => 'E02000193',
        '0LJ' => 'E02000193',
        '0LL' => 'E02000193',
        '0LN' => 'E02000191',
        '0LP' => 'E02000193',
        '0LQ' => 'E02000193',
        '0LR' => 'E02000193',
        '0LS' => 'E02000193',
        '0LT' => 'E02000191',
        '0LU' => 'E02000191',
        '0LW' => 'E02000193',
        '0LX' => 'E02000193',
        '0LY' => 'E02000191',
        '0NB' => 'E02000191',
        '0ND' => 'E02000193',
        '0NF' => 'E02000193',
        '0NG' => 'E02000193',
        '0NH' => 'E02000193',
        '0NJ' => 'E02000193',
        '0NL' => 'E02000193',
        '0NN' => 'E02000190',
        '0NP' => 'E02000193',
        '0NQ' => 'E02000191',
        '0NR' => 'E02000193',
        '0NS' => 'E02000193',
        '0NT' => 'E02000193',
        '0NU' => 'E02000193',
        '0NW' => 'E02000193',
        '0NX' => 'E02000193',
        '0PA' => 'E02000191',
        '0PD' => 'E02000191',
        '0PF' => 'E02000191',
        '0PG' => 'E02000193',
        '0PH' => 'E02000191',
        '0PJ' => 'E02000191',
        '0PL' => 'E02000191',
        '0PN' => 'E02000191',
        '0PP' => 'E02000191',
        '0PQ' => 'E02000191',
        '0PS' => 'E02000191',
        '0PT' => 'E02000191',
        '0PW' => 'E02000191',
        '0PX' => 'E02000191',
        '0PY' => 'E02000191',
        '0QA' => 'E02000190',
        '0QB' => 'E02000191',
        '0QD' => 'E02000191',
        '0QE' => 'E02000191',
        '0QF' => 'E02000191',
        '0QG' => 'E02000191',
        '0QH' => 'E02000193',
        '0QJ' => 'E02000193',
        '0QL' => 'E02000191',
        '0QN' => 'E02000191',
        '0QP' => 'E02000191',
        '0QQ' => 'E02000191',
        '0QS' => 'E02000193',
        '0QU' => 'E02000191',
        '0QW' => 'E02000191',
        '0QX' => 'E02000191',
        '0QY' => 'E02000191',
        '0QZ' => 'E02000575',
        '0RA' => 'E02000191',
        '0RF' => 'E02000972',
        '0RG' => 'E02000191',
        '0RH' => 'E02000191',
        '0RJ' => 'E02000191',
        '0RL' => 'E02000193',
        '0RN' => 'E02000193',
        '0RQ' => 'E02000972',
        '0TA' => 'E02000191',
        '0TB' => 'E02000191',
        '0TD' => 'E02000191',
        '0TE' => 'E02000191',
        '0TG' => 'E02000190',
        '0TH' => 'E02000190',
        '0WA' => 'E02000190',
        '0WB' => 'E02000190',
        '0WF' => 'E02000193',
        '0WH' => 'E02000193',
        '0WL' => 'E02000193',
        '0WN' => 'E02000190',
        '0WQ' => 'E02000193',
        '0WR' => 'E02000193',
        '0WY' => 'E02000193',
        '0WZ' => 'E02000193',
        '0XA' => 'E02000191',
        '0XB' => 'E02000575',
        '0XD' => 'E02000191',
        '0XE' => 'E02000191',
        '0XF' => 'E02000191',
        '0XG' => 'E02000193',
        '0XP' => 'E02000191',
        '0YB' => 'E02000193',
        '8AA' => 'E02000189',
        '8AB' => 'E02000189',
        '8AD' => 'E02000189',
        '8AE' => 'E02000189',
        '8AF' => 'E02000190',
        '8AG' => 'E02000189',
        '8AH' => 'E02000190',
        '8AJ' => 'E02000190',
        '8AL' => 'E02000189',
        '8AP' => 'E02000189',
        '8AQ' => 'E02000190',
        '8AR' => 'E02000189',
        '8AS' => 'E02000189',
        '8AT' => 'E02000189',
        '8AU' => 'E02000189',
        '8AY' => 'E02000189',
        '8AZ' => 'E02000189',
        '8BA' => 'E02000189',
        '8BB' => 'E02000189',
        '8BD' => 'E02000189',
        '8BE' => 'E02000189',
        '8BG' => 'E02000189',
        '8BH' => 'E02000189',
        '8BJ' => 'E02000189',
        '8BL' => 'E02000189',
        '8BP' => 'E02000189',
        '8BS' => 'E02000190',
        '8BU' => 'E02000190',
        '8BW' => 'E02000189',
        '8BX' => 'E02000190',
        '8BY' => 'E02000189',
        '8BZ' => 'E02000190',
        '8DA' => 'E02000193',
        '8DB' => 'E02000190',
        '8DD' => 'E02000190',
        '8DF' => 'E02000190',
        '8DG' => 'E02000190',
        '8DH' => 'E02000190',
        '8DJ' => 'E02000190',
        '8DL' => 'E02000190',
        '8DN' => 'E02000190',
        '8DR' => 'E02000189',
        '8DT' => 'E02000189',
        '8DU' => 'E02000189',
        '8DY' => 'E02000189',
        '8EA' => 'E02000189',
        '8EB' => 'E02000189',
        '8EE' => 'E02000189',
        '8EF' => 'E02000189',
        '8EG' => 'E02000190',
        '8EH' => 'E02000189',
        '8EJ' => 'E02000189',
        '8EN' => 'E02000190',
        '8EP' => 'E02000190',
        '8EQ' => 'E02000190',
        '8ER' => 'E02000190',
        '8ES' => 'E02000193',
        '8ET' => 'E02000190',
        '8EU' => 'E02000190',
        '8EW' => 'E02000190',
        '8EX' => 'E02000190',
        '8EZ' => 'E02000190',
        '8HA' => 'E02000189',
        '8HB' => 'E02000190',
        '8HD' => 'E02000189',
        '8HE' => 'E02000190',
        '8HF' => 'E02000193',
        '8HG' => 'E02000190',
        '8HH' => 'E02000190',
        '8HJ' => 'E02000190',
        '8HL' => 'E02000190',
        '8HN' => 'E02000193',
        '8HP' => 'E02000189',
        '8HQ' => 'E02000189',
        '8HS' => 'E02000189',
        '8HT' => 'E02000190',
        '8HU' => 'E02000190',
        '8HW' => 'E02000189',
        '8HX' => 'E02000190',
        '8HZ' => 'E02000190',
        '8JA' => 'E02000189',
        '8JB' => 'E02000190',
        '8JD' => 'E02000190',
        '8JE' => 'E02000190',
        '8JF' => 'E02000189',
        '8JG' => 'E02000189',
        '8JH' => 'E02000190',
        '8JJ' => 'E02000189',
        '8JL' => 'E02000189',
        '8JN' => 'E02000190',
        '8JP' => 'E02000189',
        '8JQ' => 'E02000190',
        '8JR' => 'E02000190',
        '8JS' => 'E02000190',
        '8JT' => 'E02000189',
        '8JU' => 'E02000190',
        '8JW' => 'E02000190',
        '8JX' => 'E02000190',
        '8JY' => 'E02000972',
        '8JZ' => 'E02000190',
        '8LA' => 'E02000190',
        '8LB' => 'E02000190',
        '8LD' => 'E02000190',
        '8LF' => 'E02000189',
        '8LG' => 'E02000189',
        '8LH' => 'E02000189',
        '8LJ' => 'E02000189',
        '8LL' => 'E02000189',
        '8LP' => 'E02000189',
        '8LR' => 'E02000189',
        '8LS' => 'E02000189',
        '8LT' => 'E02000189',
        '8LX' => 'E02000189',
        '8NA' => 'E02000189',
        '8NB' => 'E02000189',
        '8ND' => 'E02000190',
        '8NE' => 'E02000193',
        '8NF' => 'E02000972',
        '8NG' => 'E02000190',
        '8NH' => 'E02000190',
        '8NJ' => 'E02000190',
        '8NL' => 'E02000190',
        '8NN' => 'E02000190',
        '8NP' => 'E02000190',
        '8RH' => 'E02000193',
        '8RJ' => 'E02000972',
        '8RL' => 'E02000193',
        '8RN' => 'E02000189',
        '8RP' => 'E02000193',
        '8WA' => 'E02000193',
        '8WB' => 'E02000193',
        '8WD' => 'E02000972',
        '8WF' => 'E02000972',
        '8WG' => 'E02000972',
        '8WH' => 'E02000193',
        '8WJ' => 'E02000193',
        '8WL' => 'E02000193',
        '8WN' => 'E02000575',
        '8WP' => 'E02000193',
        '8WQ' => 'E02000193',
        '8WR' => 'E02000193',
        '8WS' => 'E02000193',
        '8WT' => 'E02000193',
        '8WU' => 'E02000193',
        '8WW' => 'E02000193',
        '8WX' => 'E02000193',
        '8WY' => 'E02000193',
        '8WZ' => 'E02000193',
        '8XA' => 'E02000193',
        '8XQ' => 'E02000972',
        '8YA' => 'E02000972',
        '8YQ' => 'E02000972',
        '9AA' => 'E02000190',
        '9AB' => 'E02000190',
        '9AD' => 'E02000190',
        '9AE' => 'E02000191',
        '9AF' => 'E02000193',
        '9AG' => 'E02000193',
        '9AH' => 'E02000190',
        '9AJ' => 'E02000190',
        '9AL' => 'E02000190',
        '9AN' => 'E02000972',
        '9AP' => 'E02000190',
        '9AQ' => 'E02000190',
        '9AR' => 'E02000190',
        '9AS' => 'E02000190',
        '9AT' => 'E02000190',
        '9AU' => 'E02000190',
        '9AW' => 'E02000190',
        '9AX' => 'E02000190',
        '9AY' => 'E02000972',
        '9AZ' => 'E02000190',
        '9BA' => 'E02000190',
        '9BB' => 'E02000190',
        '9BD' => 'E02000190',
        '9BE' => 'E02000190',
        '9BF' => 'E02000190',
        '9BG' => 'E02000575',
        '9BH' => 'E02000190',
        '9BJ' => 'E02000190',
        '9BL' => 'E02000190',
        '9BN' => 'E02000190',
        '9BP' => 'E02000575',
        '9BQ' => 'E02000190',
        '9BR' => 'E02000190',
        '9BS' => 'E02000190',
        '9BT' => 'E02000190',
        '9BU' => 'E02000191',
        '9BX' => 'E02000193',
        '9BY' => 'E02000190',
        '9BZ' => 'E02000190',
        '9DB' => 'E02000190',
        '9DD' => 'E02000190',
        '9DE' => 'E02000190',
        '9DH' => 'E02000190',
        '9DJ' => 'E02000190',
        '9DL' => 'E02000190',
        '9DP' => 'E02000190',
        '9DQ' => 'E02000190',
        '9DR' => 'E02000190',
        '9DS' => 'E02000190',
        '9DT' => 'E02000190',
        '9DU' => 'E02000190',
        '9DW' => 'E02000190',
        '9DX' => 'E02000190',
        '9DZ' => 'E02000190',
        '9EA' => 'E02000190',
        '9EB' => 'E02000190',
        '9ED' => 'E02000190',
        '9EE' => 'E02000190',
        '9EF' => 'E02000190',
        '9EG' => 'E02000190',
        '9EH' => 'E02000190',
        '9EJ' => 'E02000193',
        '9EL' => 'E02000190',
        '9EN' => 'E02000190',
        '9EP' => 'E02000190',
        '9ER' => 'E02000190',
        '9ES' => 'E02000190',
        '9ET' => 'E02000191',
        '9EU' => 'E02000191',
        '9EW' => 'E02000190',
        '9EX' => 'E02000191',
        '9EZ' => 'E02000191',
        '9FG' => 'E02000191',
        '9FQ' => 'E02000972',
        '9GA' => 'E02000190',
        '9GB' => 'E02000190',
        '9GD' => 'E02000190',
        '9GE' => 'E02000190',
        '9GF' => 'E02000190',
        '9GG' => 'E02000190',
        '9GH' => 'E02000190',
        '9GJ' => 'E02000190',
        '9GL' => 'E02000190',
        '9GN' => 'E02000190',
        '9GP' => 'E02000190',
        '9GQ' => 'E02000190',
        '9GR' => 'E02000190',
        '9GS' => 'E02000190',
        '9GT' => 'E02000190',
        '9GU' => 'E02000190',
        '9GW' => 'E02000190',
        '9GX' => 'E02000190',
        '9HA' => 'E02000191',
        '9HB' => 'E02000191',
        '9HD' => 'E02000191',
        '9HE' => 'E02000191',
        '9HF' => 'E02000191',
        '9HG' => 'E02000191',
        '9HH' => 'E02000191',
        '9HJ' => 'E02000191',
        '9HL' => 'E02000191',
        '9HN' => 'E02000191',
        '9HP' => 'E02000191',
        '9HQ' => 'E02000191',
        '9HR' => 'E02000190',
        '9HT' => 'E02000190',
        '9HU' => 'E02000191',
        '9HW' => 'E02000191',
        '9HX' => 'E02000190',
        '9HY' => 'E02000191',
        '9HZ' => 'E02000191',
        '9JA' => 'E02000190',
        '9JB' => 'E02000190',
        '9JD' => 'E02000191',
        '9JE' => 'E02000190',
        '9JF' => 'E02000190',
        '9JG' => 'E02000190',
        '9JH' => 'E02000190',
        '9JJ' => 'E02000190',
        '9JL' => 'E02000191',
        '9JN' => 'E02000191',
        '9JP' => 'E02000190',
        '9JQ' => 'E02000191',
        '9JR' => 'E02000190',
        '9JS' => 'E02000190',
        '9JU' => 'E02000191',
        '9JW' => 'E02000193',
        '9JX' => 'E02000191',
        '9JY' => 'E02000190',
        '9JZ' => 'E02000190',
        '9LA' => 'E02000190',
        '9LB' => 'E02000190',
        '9LD' => 'E02000190',
        '9LE' => 'E02000191',
        '9LF' => 'E02000190',
        '9LG' => 'E02000190',
        '9LH' => 'E02000190',
        '9LJ' => 'E02000191',
        '9LL' => 'E02000191',
        '9LN' => 'E02000190',
        '9LP' => 'E02000190',
        '9LQ' => 'E02000190',
        '9LR' => 'E02000191',
        '9LS' => 'E02000190',
        '9LT' => 'E02000190',
        '9LU' => 'E02000190',
        '9LX' => 'E02000190',
        '9LY' => 'E02000190',
        '9LZ' => 'E02000190',
        '9NA' => 'E02000190',
        '9NB' => 'E02000190',
        '9ND' => 'E02000191',
        '9NE' => 'E02000190',
        '9NF' => 'E02000190',
        '9NG' => 'E02000193',
        '9NH' => 'E02000193',
        '9NJ' => 'E02000193',
        '9NL' => 'E02000193',
        '9NN' => 'E02000190',
        '9NP' => 'E02000190',
        '9NQ' => 'E02000190',
        '9NR' => 'E02000190',
        '9NS' => 'E02000190',
        '9NT' => 'E02000190',
        '9NU' => 'E02000190',
        '9NW' => 'E02000193',
        '9NX' => 'E02000190',
        '9NY' => 'E02000190',
        '9NZ' => 'E02000972',
        '9PA' => 'E02000190',
        '9PB' => 'E02000190',
        '9PD' => 'E02000190',
        '9PE' => 'E02000190',
        '9PF' => 'E02000190',
        '9PG' => 'E02000190',
        '9PH' => 'E02000190',
        '9PJ' => 'E02000190',
        '9PL' => 'E02000190',
        '9PN' => 'E02000190',
        '9PP' => 'E02000190',
        '9PQ' => 'E02000193',
        '9PR' => 'E02000190',
        '9PS' => 'E02000190',
        '9PT' => 'E02000190',
        '9PU' => 'E02000190',
        '9PW' => 'E02000190',
        '9PX' => 'E02000190',
        '9PY' => 'E02000190',
        '9PZ' => 'E02000190',
        '9QA' => 'E02000190',
        '9QB' => 'E02000190',
        '9QD' => 'E02000190',
        '9QE' => 'E02000190',
        '9QF' => 'E02000190',
        '9QG' => 'E02000190',
        '9QH' => 'E02000190',
        '9QJ' => 'E02000972',
        '9QL' => 'E02000190',
        '9QN' => 'E02000190',
        '9QP' => 'E02000190',
        '9QQ' => 'E02000190',
        '9QR' => 'E02000190',
        '9QS' => 'E02000190',
        '9QT' => 'E02000190',
        '9QU' => 'E02000191',
        '9QW' => 'E02000190',
        '9QX' => 'E02000190',
        '9QZ' => 'E02000190',
        '9RA' => 'E02000190',
        '9RD' => 'E02000190',
        '9RE' => 'E02000190',
        '9RF' => 'E02000190',
        '9RG' => 'E02000190',
        '9RH' => 'E02000190',
        '9RJ' => 'E02000191',
        '9RL' => 'E02000190',
        '9RN' => 'E02000190',
        '9RP' => 'E02000190',
        '9RR' => 'E02000190',
        '9RS' => 'E02000190',
        '9RT' => 'E02000190',
        '9RU' => 'E02000190',
        '9RW' => 'E02000190',
        '9RX' => 'E02000190',
        '9RZ' => 'E02000190',
        '9SA' => 'E02000190',
        '9SB' => 'E02000190',
        '9SD' => 'E02000190',
        '9SE' => 'E02000190',
        '9SF' => 'E02000190',
        '9SG' => 'E02000193',
        '9SH' => 'E02000190',
        '9SJ' => 'E02000193',
        '9SN' => 'E02000190',
        '9SP' => 'E02000190',
        '9SQ' => 'E02000191',
        '9SR' => 'E02000190',
        '9SS' => 'E02000190',
        '9ST' => 'E02000190',
        '9SU' => 'E02000190',
        '9SX' => 'E02000190',
        '9SY' => 'E02000190',
        '9SZ' => 'E02000190',
        '9TA' => 'E02000190',
        '9TB' => 'E02000575',
        '9TD' => 'E02000193',
        '9TE' => 'E02000575',
        '9TF' => 'E02000191',
        '9TG' => 'E02000575',
        '9TH' => 'E02000190',
        '9TJ' => 'E02000191',
        '9TL' => 'E02000190',
        '9TN' => 'E02000193',
        '9TP' => 'E02000190',
        '9TR' => 'E02000190',
        '9TS' => 'E02000190',
        '9TT' => 'E02000193',
        '9TU' => 'E02000190',
        '9TW' => 'E02000190',
        '9TX' => 'E02000190',
        '9TY' => 'E02000193',
        '9TZ' => 'E02000190',
        '9UA' => 'E02000190',
        '9UB' => 'E02000190',
        '9UD' => 'E02000193',
        '9UE' => 'E02000190',
        '9UF' => 'E02000190',
        '9UG' => 'E02000193',
        '9UH' => 'E02000193',
        '9UJ' => 'E02000193',
        '9UL' => 'E02000190',
        '9UN' => 'E02000190',
        '9UP' => 'E02000190',
        '9UQ' => 'E02000190',
        '9UR' => 'E02000190',
        '9US' => 'E02000190',
        '9UT' => 'E02000190',
        '9UW' => 'E02000191',
        '9UX' => 'E02000193',
        '9UY' => 'E02000193',
        '9UZ' => 'E02000193',
        '9WA' => 'E02000193',
        '9WB' => 'E02000193',
        '9WD' => 'E02000972',
        '9WE' => 'E02000193',
        '9WF' => 'E02000193',
        '9WG' => 'E02000972',
        '9WH' => 'E02000575',
        '9WJ' => 'E02000193',
        '9WL' => 'E02000193',
        '9WN' => 'E02000193',
        '9WP' => 'E02000575',
        '9WQ' => 'E02000193',
        '9WR' => 'E02000193',
        '9WS' => 'E02000575',
        '9WT' => 'E02000193',
        '9WU' => 'E02000193',
        '9WW' => 'E02000193',
        '9WX' => 'E02000972',
        '9WY' => 'E02000193',
        '9WZ' => 'E02000575',
        '9XA' => 'E02000575',
        '9XB' => 'E02000190',
        '9XD' => 'E02000190',
        '9XE' => 'E02000193',
        '9XF' => 'E02000193',
        '9XG' => 'E02000972',
        '9XH' => 'E02000972',
        '9XJ' => 'E02000972',
        '9XL' => 'E02000190',
        '9XP' => 'E02000190',
        '9XQ' => 'E02000193',
        '9XR' => 'E02000193',
        '9XS' => 'E02000972',
        '9XW' => 'E02000193',
        '9XX' => 'E02000190',
        '9XY' => 'E02000190',
        '9XZ' => 'E02000190',
        '9YA' => 'E02000190',
        '9YB' => 'E02000972',
        '9YD' => 'E02000972',
        '9YE' => 'E02000972',
        '9YF' => 'E02000193',
        '9YP' => 'E02000972',
        '9YQ' => 'E02000575',
        '9YZ' => 'E02000972',
        '9ZA' => 'E02000193',
        '9ZD' => 'E02000190',
        '9ZQ' => 'E02000193',
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
