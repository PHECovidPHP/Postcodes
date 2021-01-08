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
final class HP27
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02003696',
        '0AB' => 'E02003696',
        '0AD' => 'E02003696',
        '0AE' => 'E02003696',
        '0AF' => 'E02003696',
        '0AG' => 'E02003696',
        '0AH' => 'E02003696',
        '0AJ' => 'E02003696',
        '0AL' => 'E02003696',
        '0AN' => 'E02003696',
        '0AP' => 'E02003696',
        '0AQ' => 'E02003696',
        '0AR' => 'E02003696',
        '0AS' => 'E02003696',
        '0AT' => 'E02003696',
        '0AU' => 'E02003696',
        '0AW' => 'E02003696',
        '0AX' => 'E02003696',
        '0AY' => 'E02003696',
        '0AZ' => 'E02003696',
        '0BA' => 'E02003696',
        '0BB' => 'E02003696',
        '0BD' => 'E02003696',
        '0BE' => 'E02003696',
        '0BF' => 'E02003696',
        '0BG' => 'E02003696',
        '0BH' => 'E02003696',
        '0BJ' => 'E02003696',
        '0BL' => 'E02003696',
        '0BN' => 'E02003696',
        '0BP' => 'E02003696',
        '0BQ' => 'E02003696',
        '0BS' => 'E02003696',
        '0BT' => 'E02003696',
        '0BU' => 'E02003696',
        '0BW' => 'E02003696',
        '0BX' => 'E02003696',
        '0BY' => 'E02003696',
        '0BZ' => 'E02003696',
        '0DA' => 'E02003696',
        '0DB' => 'E02003696',
        '0DD' => 'E02003696',
        '0DE' => 'E02003696',
        '0DF' => 'E02003696',
        '0DG' => 'E02003696',
        '0DH' => 'E02003696',
        '0DJ' => 'E02003696',
        '0DL' => 'E02003696',
        '0DN' => 'E02003696',
        '0DP' => 'E02003696',
        '0DQ' => 'E02003696',
        '0DR' => 'E02003696',
        '0DS' => 'E02003696',
        '0DT' => 'E02003696',
        '0DU' => 'E02003696',
        '0DW' => 'E02003696',
        '0DX' => 'E02003696',
        '0DY' => 'E02003696',
        '0DZ' => 'E02003696',
        '0EA' => 'E02003696',
        '0EB' => 'E02003696',
        '0ED' => 'E02003696',
        '0EE' => 'E02003696',
        '0EF' => 'E02003696',
        '0EG' => 'E02003696',
        '0EH' => 'E02003696',
        '0EJ' => 'E02003696',
        '0EL' => 'E02003697',
        '0EN' => 'E02003696',
        '0EP' => 'E02003696',
        '0EQ' => 'E02003696',
        '0ES' => 'E02003696',
        '0ET' => 'E02003696',
        '0EU' => 'E02003696',
        '0EX' => 'E02003696',
        '0EY' => 'E02003696',
        '0EZ' => 'E02003696',
        '0HA' => 'E02003696',
        '0HE' => 'E02003696',
        '0HF' => 'E02003696',
        '0HG' => 'E02003696',
        '0HH' => 'E02003696',
        '0HJ' => 'E02003696',
        '0HL' => 'E02003696',
        '0HQ' => 'E02003696',
        '0HS' => 'E02003696',
        '0HT' => 'E02003696',
        '0HU' => 'E02003696',
        '0HX' => 'E02003696',
        '0HY' => 'E02003696',
        '0HZ' => 'E02003696',
        '0JA' => 'E02003696',
        '0JB' => 'E02003696',
        '0JD' => 'E02003696',
        '0JE' => 'E02003696',
        '0JF' => 'E02003696',
        '0JG' => 'E02003696',
        '0JH' => 'E02003696',
        '0JJ' => 'E02003696',
        '0JL' => 'E02003696',
        '0JN' => 'E02003696',
        '0JP' => 'E02003696',
        '0JQ' => 'E02003696',
        '0JR' => 'E02003696',
        '0JS' => 'E02003696',
        '0JT' => 'E02003696',
        '0JU' => 'E02003696',
        '0JW' => 'E02003696',
        '0JX' => 'E02003696',
        '0JY' => 'E02003696',
        '0JZ' => 'E02003696',
        '0LA' => 'E02003696',
        '0LB' => 'E02003696',
        '0LD' => 'E02003696',
        '0LE' => 'E02003697',
        '0LF' => 'E02003696',
        '0LG' => 'E02003696',
        '0LH' => 'E02003696',
        '0LJ' => 'E02003696',
        '0LL' => 'E02003696',
        '0LN' => 'E02003696',
        '0LQ' => 'E02003696',
        '0LR' => 'E02003696',
        '0LS' => 'E02003696',
        '0LT' => 'E02003696',
        '0LU' => 'E02003696',
        '0LW' => 'E02003696',
        '0LX' => 'E02003696',
        '0LY' => 'E02003696',
        '0LZ' => 'E02003696',
        '0NA' => 'E02003697',
        '0NB' => 'E02003697',
        '0ND' => 'E02003697',
        '0NF' => 'E02003696',
        '0NH' => 'E02003696',
        '0NJ' => 'E02003696',
        '0NL' => 'E02003697',
        '0NN' => 'E02003697',
        '0NP' => 'E02003697',
        '0NQ' => 'E02003697',
        '0NR' => 'E02003697',
        '0NS' => 'E02003697',
        '0NT' => 'E02003697',
        '0NU' => 'E02003697',
        '0NW' => 'E02003697',
        '0NX' => 'E02003697',
        '0NY' => 'E02003697',
        '0NZ' => 'E02003696',
        '0PA' => 'E02003697',
        '0PB' => 'E02003697',
        '0PD' => 'E02003697',
        '0PE' => 'E02003697',
        '0PF' => 'E02003697',
        '0PG' => 'E02003697',
        '0PH' => 'E02003675',
        '0PJ' => 'E02003697',
        '0PL' => 'E02003697',
        '0PN' => 'E02003697',
        '0PP' => 'E02003697',
        '0PQ' => 'E02003697',
        '0PR' => 'E02003702',
        '0PS' => 'E02003697',
        '0PT' => 'E02003697',
        '0PU' => 'E02003697',
        '0PW' => 'E02003697',
        '0PX' => 'E02003697',
        '0PY' => 'E02003697',
        '0PZ' => 'E02003697',
        '0QA' => 'E02003697',
        '0QB' => 'E02003697',
        '0QD' => 'E02003697',
        '0QE' => 'E02003697',
        '0QF' => 'E02003697',
        '0QG' => 'E02003697',
        '0QH' => 'E02003697',
        '0QJ' => 'E02003697',
        '0QL' => 'E02003697',
        '0QN' => 'E02003697',
        '0QP' => 'E02003697',
        '0QQ' => 'E02003697',
        '0QR' => 'E02003697',
        '0QS' => 'E02003697',
        '0QT' => 'E02003697',
        '0QU' => 'E02003697',
        '0QW' => 'E02003697',
        '0QX' => 'E02003697',
        '0QY' => 'E02003697',
        '0QZ' => 'E02003697',
        '0RA' => 'E02003697',
        '0RB' => 'E02003697',
        '0RD' => 'E02003697',
        '0RE' => 'E02003697',
        '0RF' => 'E02003697',
        '0RG' => 'E02003696',
        '0RH' => 'E02003697',
        '0RJ' => 'E02003697',
        '0RL' => 'E02003697',
        '0RN' => 'E02003697',
        '0RP' => 'E02003697',
        '0RQ' => 'E02003697',
        '0RR' => 'E02003697',
        '0RS' => 'E02003697',
        '0RT' => 'E02003697',
        '0RU' => 'E02003697',
        '0RW' => 'E02003697',
        '0RX' => 'E02003697',
        '0RY' => 'E02003697',
        '0RZ' => 'E02003697',
        '0SA' => 'E02003697',
        '0SB' => 'E02003697',
        '0SD' => 'E02003697',
        '0SE' => 'E02003697',
        '0SF' => 'E02003697',
        '0SG' => 'E02003697',
        '0SH' => 'E02003697',
        '0SJ' => 'E02003697',
        '0SL' => 'E02003697',
        '0SN' => 'E02003697',
        '0SP' => 'E02003697',
        '0SQ' => 'E02003697',
        '0SR' => 'E02003697',
        '0SS' => 'E02003697',
        '0ST' => 'E02003698',
        '0SU' => 'E02003698',
        '0SW' => 'E02003697',
        '0SX' => 'E02003697',
        '0SY' => 'E02003697',
        '0SZ' => 'E02003697',
        '0TA' => 'E02003697',
        '0TB' => 'E02003697',
        '0TD' => 'E02003697',
        '0TH' => 'E02003697',
        '0TJ' => 'E02003697',
        '0TL' => 'E02003696',
        '0TP' => 'E02003696',
        '0TS' => 'E02003697',
        '0TT' => 'E02003696',
        '0TU' => 'E02003696',
        '0TX' => 'E02003697',
        '0TY' => 'E02003697',
        '0UA' => 'E02003696',
        '0UB' => 'E02003697',
        '0UD' => 'E02003697',
        '0UH' => 'E02003697',
        '0UJ' => 'E02003697',
        '0UP' => 'E02003696',
        '0US' => 'E02003697',
        '0UT' => 'E02003697',
        '0UU' => 'E02003696',
        '0UZ' => 'E02003696',
        '0WA' => 'E02003672',
        '0WB' => 'E02003696',
        '0WD' => 'E02003696',
        '0WE' => 'E02003696',
        '0WF' => 'E02003696',
        '0WG' => 'E02003696',
        '0WH' => 'E02003696',
        '0WJ' => 'E02003696',
        '0WP' => 'E02003696',
        '0WQ' => 'E02003696',
        '0WR' => 'E02003696',
        '0WS' => 'E02003696',
        '0WT' => 'E02003696',
        '0WU' => 'E02003696',
        '0WW' => 'E02003672',
        '0WX' => 'E02003696',
        '0WY' => 'E02003696',
        '0WZ' => 'E02003696',
        '0XA' => 'E02003696',
        '0XB' => 'E02003696',
        '0XD' => 'E02003696',
        '0XH' => 'E02003696',
        '0XJ' => 'E02003696',
        '0XL' => 'E02003697',
        '0XN' => 'E02003696',
        '0XP' => 'E02003697',
        '0XR' => 'E02003697',
        '0XU' => 'E02003696',
        '0YD' => 'E02003696',
        '0YJ' => 'E02003696',
        '0YL' => 'E02003696',
        '0YP' => 'E02003696',
        '0YR' => 'E02003672',
        '0YS' => 'E02003696',
        '0YT' => 'E02003696',
        '0YU' => 'E02003696',
        '0ZG' => 'E02003696',
        '0ZQ' => 'E02003696',
        '0ZX' => 'E02003696',
        '0ZZ' => 'E02003696',
        '7AB' => 'E02003696',
        '7AD' => 'E02003696',
        '7AE' => 'E02003675',
        '7AF' => 'E02003696',
        '7AG' => 'E02003696',
        '7AH' => 'E02003696',
        '7AJ' => 'E02003696',
        '7AL' => 'E02003672',
        '7AN' => 'E02003696',
        '7AP' => 'E02003672',
        '7AQ' => 'E02003696',
        '7AR' => 'E02003675',
        '7AS' => 'E02003675',
        '7AT' => 'E02003696',
        '7AU' => 'E02003696',
        '7AW' => 'E02003696',
        '7AX' => 'E02003696',
        '7AY' => 'E02003672',
        '9AA' => 'E02003696',
        '9AB' => 'E02003696',
        '9AD' => 'E02003696',
        '9AE' => 'E02003696',
        '9AF' => 'E02003696',
        '9AG' => 'E02003696',
        '9AH' => 'E02003696',
        '9AJ' => 'E02003696',
        '9AL' => 'E02003696',
        '9AN' => 'E02003696',
        '9AP' => 'E02003697',
        '9AQ' => 'E02003696',
        '9AR' => 'E02003696',
        '9AS' => 'E02003696',
        '9AT' => 'E02003696',
        '9AU' => 'E02003696',
        '9AW' => 'E02003696',
        '9AX' => 'E02003696',
        '9AY' => 'E02003696',
        '9AZ' => 'E02003696',
        '9BA' => 'E02003696',
        '9BB' => 'E02003697',
        '9BD' => 'E02003696',
        '9BE' => 'E02003696',
        '9BF' => 'E02003696',
        '9BG' => 'E02003696',
        '9BH' => 'E02003696',
        '9BJ' => 'E02003696',
        '9BL' => 'E02003696',
        '9BN' => 'E02003696',
        '9BP' => 'E02003696',
        '9BQ' => 'E02003696',
        '9BS' => 'E02003696',
        '9BT' => 'E02003696',
        '9BU' => 'E02003697',
        '9BW' => 'E02003696',
        '9BX' => 'E02003696',
        '9BY' => 'E02003696',
        '9BZ' => 'E02003696',
        '9DA' => 'E02003696',
        '9DB' => 'E02003696',
        '9DD' => 'E02003696',
        '9DE' => 'E02003696',
        '9DF' => 'E02003696',
        '9DG' => 'E02003696',
        '9DH' => 'E02003696',
        '9DJ' => 'E02003696',
        '9DL' => 'E02003696',
        '9DN' => 'E02003696',
        '9DP' => 'E02003696',
        '9DQ' => 'E02003696',
        '9DR' => 'E02003696',
        '9DS' => 'E02003696',
        '9DT' => 'E02003696',
        '9DU' => 'E02003696',
        '9DW' => 'E02003696',
        '9DX' => 'E02003696',
        '9DY' => 'E02003696',
        '9DZ' => 'E02003696',
        '9EA' => 'E02003696',
        '9EB' => 'E02003696',
        '9ED' => 'E02003696',
        '9EE' => 'E02003696',
        '9EF' => 'E02003696',
        '9EG' => 'E02003702',
        '9EH' => 'E02003702',
        '9EJ' => 'E02003702',
        '9EL' => 'E02003696',
        '9EN' => 'E02003696',
        '9EP' => 'E02003696',
        '9EQ' => 'E02003696',
        '9ER' => 'E02003697',
        '9ES' => 'E02003697',
        '9ET' => 'E02003697',
        '9EW' => 'E02003697',
        '9EX' => 'E02003697',
        '9EY' => 'E02003697',
        '9EZ' => 'E02003696',
        '9FB' => 'E02003696',
        '9FD' => 'E02003696',
        '9FE' => 'E02003697',
        '9FF' => 'E02003697',
        '9FG' => 'E02003697',
        '9FH' => 'E02003697',
        '9FJ' => 'E02003697',
        '9FL' => 'E02003696',
        '9FN' => 'E02003696',
        '9FP' => 'E02003696',
        '9FQ' => 'E02003696',
        '9FR' => 'E02003696',
        '9FS' => 'E02003696',
        '9FT' => 'E02003697',
        '9FU' => 'E02003696',
        '9FW' => 'E02003697',
        '9FX' => 'E02003697',
        '9FY' => 'E02003702',
        '9GN' => 'E02003702',
        '9HA' => 'E02003696',
        '9HB' => 'E02003696',
        '9HD' => 'E02003696',
        '9HE' => 'E02003696',
        '9HF' => 'E02003696',
        '9HG' => 'E02003696',
        '9HH' => 'E02003696',
        '9HJ' => 'E02003696',
        '9HL' => 'E02003696',
        '9HN' => 'E02003696',
        '9HP' => 'E02003696',
        '9HQ' => 'E02003696',
        '9HR' => 'E02003696',
        '9HS' => 'E02003696',
        '9HT' => 'E02003696',
        '9HU' => 'E02003696',
        '9HW' => 'E02003696',
        '9HX' => 'E02003696',
        '9HY' => 'E02003696',
        '9HZ' => 'E02003696',
        '9JA' => 'E02003696',
        '9JB' => 'E02003696',
        '9JD' => 'E02003696',
        '9JE' => 'E02003696',
        '9JF' => 'E02003696',
        '9JG' => 'E02003696',
        '9JH' => 'E02003696',
        '9JJ' => 'E02003696',
        '9JL' => 'E02003696',
        '9JN' => 'E02003696',
        '9JP' => 'E02003696',
        '9JQ' => 'E02003696',
        '9JR' => 'E02003696',
        '9JS' => 'E02003696',
        '9JT' => 'E02003696',
        '9JU' => 'E02003696',
        '9JW' => 'E02003696',
        '9JX' => 'E02003696',
        '9JY' => 'E02003696',
        '9JZ' => 'E02003696',
        '9LA' => 'E02003696',
        '9LB' => 'E02003696',
        '9LD' => 'E02003696',
        '9LE' => 'E02003696',
        '9LF' => 'E02003696',
        '9LG' => 'E02003696',
        '9LH' => 'E02003696',
        '9LJ' => 'E02003696',
        '9LL' => 'E02003697',
        '9LN' => 'E02003696',
        '9LP' => 'E02003696',
        '9LQ' => 'E02003696',
        '9LR' => 'E02003696',
        '9LS' => 'E02003696',
        '9LT' => 'E02003696',
        '9LU' => 'E02003696',
        '9LW' => 'E02003696',
        '9LX' => 'E02003696',
        '9LY' => 'E02003696',
        '9LZ' => 'E02003696',
        '9NA' => 'E02003696',
        '9NB' => 'E02003696',
        '9ND' => 'E02003696',
        '9NE' => 'E02003696',
        '9NF' => 'E02003697',
        '9NG' => 'E02003702',
        '9NH' => 'E02003702',
        '9NJ' => 'E02003702',
        '9NL' => 'E02003702',
        '9NN' => 'E02003697',
        '9NP' => 'E02003702',
        '9NQ' => 'E02003702',
        '9NR' => 'E02003702',
        '9NS' => 'E02003702',
        '9NT' => 'E02003696',
        '9NU' => 'E02003702',
        '9NW' => 'E02003702',
        '9NX' => 'E02003702',
        '9NY' => 'E02003697',
        '9NZ' => 'E02003702',
        '9PA' => 'E02003702',
        '9PB' => 'E02003702',
        '9PD' => 'E02003702',
        '9PE' => 'E02003702',
        '9PF' => 'E02003702',
        '9PG' => 'E02003702',
        '9PH' => 'E02003702',
        '9PJ' => 'E02003702',
        '9PL' => 'E02003702',
        '9PN' => 'E02003702',
        '9PP' => 'E02003702',
        '9PQ' => 'E02003696',
        '9PR' => 'E02003702',
        '9PS' => 'E02003702',
        '9PT' => 'E02003696',
        '9PU' => 'E02003696',
        '9PW' => 'E02003696',
        '9PX' => 'E02003696',
        '9PY' => 'E02003696',
        '9PZ' => 'E02003696',
        '9QA' => 'E02003696',
        '9QB' => 'E02003696',
        '9QD' => 'E02003696',
        '9QE' => 'E02003702',
        '9QF' => 'E02003702',
        '9QG' => 'E02003702',
        '9QH' => 'E02003697',
        '9QJ' => 'E02003702',
        '9QL' => 'E02003702',
        '9QN' => 'E02003702',
        '9QP' => 'E02003702',
        '9QQ' => 'E02003702',
        '9QR' => 'E02003702',
        '9QS' => 'E02003702',
        '9QT' => 'E02003702',
        '9QU' => 'E02003697',
        '9QX' => 'E02003673',
        '9QY' => 'E02003697',
        '9QZ' => 'E02003697',
        '9RA' => 'E02003697',
        '9RB' => 'E02003697',
        '9RD' => 'E02003697',
        '9RE' => 'E02003697',
        '9RF' => 'E02003697',
        '9RG' => 'E02003697',
        '9RH' => 'E02003697',
        '9RJ' => 'E02003697',
        '9RL' => 'E02003697',
        '9RN' => 'E02003697',
        '9RP' => 'E02003697',
        '9RQ' => 'E02003697',
        '9RR' => 'E02003696',
        '9RS' => 'E02003696',
        '9RT' => 'E02003696',
        '9RU' => 'E02003696',
        '9RW' => 'E02003697',
        '9RX' => 'E02003697',
        '9RY' => 'E02003697',
        '9RZ' => 'E02003697',
        '9SA' => 'E02003697',
        '9SB' => 'E02003697',
        '9SD' => 'E02003697',
        '9SE' => 'E02003697',
        '9SF' => 'E02003697',
        '9SG' => 'E02003697',
        '9SH' => 'E02003697',
        '9SJ' => 'E02003697',
        '9SL' => 'E02003697',
        '9SN' => 'E02003697',
        '9SP' => 'E02003697',
        '9SQ' => 'E02003697',
        '9SR' => 'E02003697',
        '9SS' => 'E02003697',
        '9ST' => 'E02003697',
        '9SU' => 'E02003697',
        '9SW' => 'E02003697',
        '9SX' => 'E02003697',
        '9SY' => 'E02003697',
        '9SZ' => 'E02003697',
        '9TA' => 'E02003697',
        '9TB' => 'E02003697',
        '9TD' => 'E02003697',
        '9TE' => 'E02003697',
        '9TF' => 'E02003696',
        '9TG' => 'E02003696',
        '9TJ' => 'E02003696',
        '9TL' => 'E02003697',
        '9TQ' => 'E02003697',
        '9TS' => 'E02003696',
        '9UA' => 'E02003702',
        '9UB' => 'E02003696',
        '9UJ' => 'E02003696',
        '9UL' => 'E02003696',
        '9UP' => 'E02003696',
        '9UR' => 'E02003696',
        '9US' => 'E02003672',
        '9UT' => 'E02003696',
        '9UU' => 'E02003696',
        '9UX' => 'E02003696',
        '9UZ' => 'E02003673',
        '9WA' => 'E02003696',
        '9WB' => 'E02003696',
        '9WD' => 'E02003696',
        '9WE' => 'E02003696',
        '9WF' => 'E02003696',
        '9WG' => 'E02003696',
        '9WR' => 'E02003696',
        '9WS' => 'E02003696',
        '9WT' => 'E02003696',
        '9WU' => 'E02003672',
        '9WW' => 'E02003696',
        '9WX' => 'E02003696',
        '9WY' => 'E02003696',
        '9WZ' => 'E02003696',
        '9XA' => 'E02003672',
        '9XB' => 'E02003696',
        '9XD' => 'E02003696',
        '9XH' => 'E02003696',
        '9XJ' => 'E02003696',
        '9XL' => 'E02003696',
        '9XN' => 'E02003696',
        '9XP' => 'E02003696',
        '9XR' => 'E02003696',
        '9XS' => 'E02003696',
        '9XT' => 'E02003696',
        '9XU' => 'E02003697',
        '9XX' => 'E02003696',
        '9YA' => 'E02003696',
        '9YB' => 'E02003696',
        '9YD' => 'E02003696',
        '9YH' => 'E02003696',
        '9YJ' => 'E02003696',
        '9YL' => 'E02003672',
        '9YP' => 'E02003675',
        '9YR' => 'E02003696',
        '9YS' => 'E02003696',
        '9YT' => 'E02003672',
        '9ZG' => 'E02003696',
        '9ZJ' => 'E02003696',
        '9ZN' => 'E02003696',
        '9ZQ' => 'E02003696',
        '9ZR' => 'E02003696',
        '9ZX' => 'E02003696',
        '9ZZ' => 'E02003696',
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
