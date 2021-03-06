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
final class BR4
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02000156',
        '0AB' => 'E02000156',
        '0AD' => 'E02000156',
        '0AE' => 'E02000156',
        '0AF' => 'E02000156',
        '0AG' => 'E02000156',
        '0AH' => 'E02000153',
        '0AJ' => 'E02000156',
        '0AL' => 'E02000156',
        '0AN' => 'E02000156',
        '0AP' => 'E02000156',
        '0AQ' => 'E02000153',
        '0AU' => 'E02000156',
        '0AW' => 'E02000156',
        '0AX' => 'E02000153',
        '0AY' => 'E02000153',
        '0BA' => 'E02000156',
        '0BB' => 'E02000156',
        '0BD' => 'E02000156',
        '0BG' => 'E02000156',
        '0BH' => 'E02000153',
        '0BJ' => 'E02000153',
        '0BL' => 'E02000156',
        '0BN' => 'E02000156',
        '0BP' => 'E02000153',
        '0BQ' => 'E02000156',
        '0BS' => 'E02000153',
        '0BT' => 'E02000153',
        '0BU' => 'E02000153',
        '0BW' => 'E02000156',
        '0BX' => 'E02000153',
        '0DA' => 'E02000156',
        '0DB' => 'E02000156',
        '0DF' => 'E02000156',
        '0DG' => 'E02000156',
        '0DH' => 'E02000156',
        '0DJ' => 'E02000156',
        '0DL' => 'E02000156',
        '0DN' => 'E02000153',
        '0DP' => 'E02000156',
        '0DQ' => 'E02000156',
        '0DR' => 'E02000156',
        '0DS' => 'E02000156',
        '0DT' => 'E02000153',
        '0DU' => 'E02000153',
        '0DW' => 'E02000153',
        '0DX' => 'E02000156',
        '0DY' => 'E02000156',
        '0DZ' => 'E02000156',
        '0EA' => 'E02000156',
        '0EB' => 'E02000153',
        '0ED' => 'E02000153',
        '0EE' => 'E02000153',
        '0EF' => 'E02000153',
        '0EG' => 'E02000147',
        '0EH' => 'E02000156',
        '0EJ' => 'E02000156',
        '0EL' => 'E02000156',
        '0EN' => 'E02000156',
        '0EP' => 'E02000156',
        '0EQ' => 'E02000156',
        '0ER' => 'E02000156',
        '0ES' => 'E02000156',
        '0ET' => 'E02000147',
        '0EU' => 'E02000147',
        '0EW' => 'E02000156',
        '0EX' => 'E02000147',
        '0EY' => 'E02000147',
        '0EZ' => 'E02000147',
        '0HA' => 'E02000147',
        '0HB' => 'E02000147',
        '0HD' => 'E02000147',
        '0HE' => 'E02000147',
        '0HF' => 'E02000147',
        '0HG' => 'E02000153',
        '0HH' => 'E02000153',
        '0HJ' => 'E02000153',
        '0HL' => 'E02000153',
        '0HN' => 'E02000153',
        '0HP' => 'E02000147',
        '0HR' => 'E02000147',
        '0HS' => 'E02000147',
        '0HT' => 'E02000147',
        '0HU' => 'E02000147',
        '0HW' => 'E02000147',
        '0HX' => 'E02000147',
        '0HY' => 'E02000147',
        '0HZ' => 'E02000147',
        '0JA' => 'E02000147',
        '0JB' => 'E02000147',
        '0JD' => 'E02000156',
        '0JE' => 'E02000156',
        '0JF' => 'E02000156',
        '0JG' => 'E02000147',
        '0JH' => 'E02000156',
        '0JJ' => 'E02000156',
        '0JL' => 'E02000156',
        '0JN' => 'E02000156',
        '0JP' => 'E02000156',
        '0JQ' => 'E02000156',
        '0JR' => 'E02000156',
        '0JS' => 'E02000156',
        '0JT' => 'E02000156',
        '0JU' => 'E02000156',
        '0JW' => 'E02000156',
        '0JX' => 'E02000156',
        '0JY' => 'E02000156',
        '0JZ' => 'E02000156',
        '0LA' => 'E02000156',
        '0LB' => 'E02000156',
        '0LD' => 'E02000156',
        '0LE' => 'E02000156',
        '0LF' => 'E02000156',
        '0LG' => 'E02000156',
        '0LH' => 'E02000156',
        '0LJ' => 'E02000156',
        '0LL' => 'E02000156',
        '0LN' => 'E02000156',
        '0LP' => 'E02000156',
        '0LQ' => 'E02000156',
        '0LR' => 'E02000156',
        '0LS' => 'E02000156',
        '0LT' => 'E02000156',
        '0LU' => 'E02000156',
        '0LW' => 'E02000156',
        '0LX' => 'E02000156',
        '0LY' => 'E02000156',
        '0LZ' => 'E02000156',
        '0NA' => 'E02000156',
        '0NB' => 'E02000156',
        '0ND' => 'E02000156',
        '0NE' => 'E02000156',
        '0NF' => 'E02000156',
        '0NG' => 'E02000156',
        '0NH' => 'E02000156',
        '0NJ' => 'E02000156',
        '0NL' => 'E02000156',
        '0NN' => 'E02000156',
        '0NP' => 'E02000156',
        '0NQ' => 'E02000156',
        '0NR' => 'E02000156',
        '0NS' => 'E02000156',
        '0NT' => 'E02000156',
        '0NU' => 'E02000156',
        '0NW' => 'E02000156',
        '0NX' => 'E02000156',
        '0NY' => 'E02000156',
        '0NZ' => 'E02000156',
        '0PA' => 'E02000156',
        '0PB' => 'E02000156',
        '0PD' => 'E02000156',
        '0PE' => 'E02000156',
        '0PF' => 'E02000156',
        '0PG' => 'E02000156',
        '0PH' => 'E02000156',
        '0PJ' => 'E02000156',
        '0PL' => 'E02000156',
        '0PN' => 'E02000156',
        '0PQ' => 'E02000156',
        '0PR' => 'E02000156',
        '0PS' => 'E02000156',
        '0PT' => 'E02000156',
        '0PU' => 'E02000156',
        '0PW' => 'E02000156',
        '0PX' => 'E02000156',
        '0PY' => 'E02000156',
        '0PZ' => 'E02000156',
        '0QA' => 'E02000156',
        '0QB' => 'E02000156',
        '0QD' => 'E02000156',
        '0QE' => 'E02000156',
        '0QF' => 'E02000156',
        '0QG' => 'E02000156',
        '0QH' => 'E02000156',
        '0QJ' => 'E02000156',
        '0QL' => 'E02000156',
        '0QN' => 'E02000156',
        '0QP' => 'E02000156',
        '0QQ' => 'E02000156',
        '0QR' => 'E02000156',
        '0QS' => 'E02000156',
        '0QT' => 'E02000156',
        '0QU' => 'E02000156',
        '0QW' => 'E02000156',
        '0QX' => 'E02000156',
        '0QY' => 'E02000156',
        '0QZ' => 'E02000156',
        '0RA' => 'E02000156',
        '0RB' => 'E02000156',
        '0RD' => 'E02000156',
        '0RG' => 'E02000156',
        '0RH' => 'E02000156',
        '0RJ' => 'E02000156',
        '0RL' => 'E02000156',
        '0RQ' => 'E02000156',
        '0RT' => 'E02000156',
        '0RU' => 'E02000156',
        '0RW' => 'E02000156',
        '0RX' => 'E02000156',
        '0RZ' => 'E02000156',
        '0SA' => 'E02000156',
        '0SB' => 'E02000156',
        '0SD' => 'E02000156',
        '0SE' => 'E02000156',
        '0SF' => 'E02000156',
        '0SG' => 'E02000156',
        '0SH' => 'E02000156',
        '0SJ' => 'E02000150',
        '0SL' => 'E02000156',
        '0SN' => 'E02000156',
        '0SP' => 'E02000156',
        '0SQ' => 'E02000156',
        '0SR' => 'E02000150',
        '0ST' => 'E02000156',
        '0SU' => 'E02000156',
        '0TA' => 'E02000156',
        '0TX' => 'E02000156',
        '0TY' => 'E02000156',
        '0UA' => 'E02000156',
        '0UB' => 'E02000156',
        '0UD' => 'E02000156',
        '0UE' => 'E02000156',
        '0UF' => 'E02000156',
        '0UZ' => 'E02000156',
        '0WA' => 'E02000156',
        '0WB' => 'E02000156',
        '0WD' => 'E02000156',
        '0WE' => 'E02000156',
        '0WF' => 'E02000156',
        '0WG' => 'E02000156',
        '0WH' => 'E02000156',
        '0WJ' => 'E02000156',
        '0WL' => 'E02000156',
        '0WN' => 'E02000156',
        '0WP' => 'E02000156',
        '0WQ' => 'E02000156',
        '0WR' => 'E02000156',
        '0WS' => 'E02000156',
        '0WT' => 'E02000156',
        '0WU' => 'E02000156',
        '0WW' => 'E02000156',
        '0WX' => 'E02000156',
        '0WY' => 'E02000156',
        '0WZ' => 'E02000156',
        '0XA' => 'E02000156',
        '0XB' => 'E02000156',
        '0XD' => 'E02000156',
        '0XQ' => 'E02000156',
        '0XS' => 'E02000156',
        '0XT' => 'E02000156',
        '0XU' => 'E02000156',
        '0XW' => 'E02000156',
        '0XX' => 'E02000156',
        '0XY' => 'E02000156',
        '0XZ' => 'E02000156',
        '0YA' => 'E02000156',
        '0YB' => 'E02000156',
        '0YD' => 'E02000156',
        '0YE' => 'E02000156',
        '0YF' => 'E02000156',
        '0YH' => 'E02000156',
        '0YZ' => 'E02000156',
        '0ZF' => 'E02000156',
        '0ZG' => 'E02000156',
        '0ZH' => 'E02000156',
        '0ZJ' => 'E02000156',
        '0ZL' => 'E02000156',
        '0ZN' => 'E02000156',
        '0ZP' => 'E02000156',
        '0ZQ' => 'E02000156',
        '0ZR' => 'E02000156',
        '0ZS' => 'E02000156',
        '0ZT' => 'E02000156',
        '0ZU' => 'E02000156',
        '0ZW' => 'E02000156',
        '0ZX' => 'E02000156',
        '0ZY' => 'E02000156',
        '0ZZ' => 'E02000156',
        '4AA' => 'E02000156',
        '4AD' => 'E02000156',
        '4AP' => 'E02000156',
        '4AQ' => 'E02000156',
        '4AT' => 'E02000156',
        '4AU' => 'E02000156',
        '4AW' => 'E02000156',
        '4AX' => 'E02000156',
        '4AY' => 'E02000156',
        '4AZ' => 'E02000156',
        '4BA' => 'E02000156',
        '4BB' => 'E02000156',
        '4BD' => 'E02000156',
        '4BE' => 'E02000156',
        '4BF' => 'E02000156',
        '4BG' => 'E02000156',
        '4BH' => 'E02000156',
        '4BJ' => 'E02000156',
        '4BL' => 'E02000156',
        '4BN' => 'E02000156',
        '4BP' => 'E02000156',
        '4BR' => 'E02000156',
        '4BS' => 'E02000156',
        '4BT' => 'E02000156',
        '4BU' => 'E02000156',
        '4BW' => 'E02000156',
        '4BX' => 'E02000156',
        '4BY' => 'E02000156',
        '4BZ' => 'E02000156',
        '4QN' => 'E02000160',
        '9AA' => 'E02000156',
        '9AB' => 'E02000156',
        '9AD' => 'E02000156',
        '9AE' => 'E02000156',
        '9AF' => 'E02000156',
        '9AG' => 'E02000156',
        '9AH' => 'E02000156',
        '9AJ' => 'E02000156',
        '9AL' => 'E02000156',
        '9AN' => 'E02000156',
        '9AP' => 'E02000156',
        '9AQ' => 'E02000156',
        '9AR' => 'E02000156',
        '9AS' => 'E02000156',
        '9AT' => 'E02000156',
        '9AU' => 'E02000160',
        '9AW' => 'E02000156',
        '9AX' => 'E02000156',
        '9AY' => 'E02000160',
        '9AZ' => 'E02000160',
        '9BA' => 'E02000156',
        '9BB' => 'E02000156',
        '9BD' => 'E02000156',
        '9BE' => 'E02000156',
        '9BF' => 'E02000160',
        '9BG' => 'E02000160',
        '9BH' => 'E02000156',
        '9BJ' => 'E02000156',
        '9BL' => 'E02000160',
        '9BN' => 'E02000160',
        '9BP' => 'E02000160',
        '9BQ' => 'E02000156',
        '9BS' => 'E02000156',
        '9BT' => 'E02000160',
        '9BU' => 'E02000160',
        '9BW' => 'E02000160',
        '9BX' => 'E02000160',
        '9BY' => 'E02000156',
        '9BZ' => 'E02000156',
        '9DA' => 'E02000160',
        '9DB' => 'E02000160',
        '9DD' => 'E02000160',
        '9DE' => 'E02000160',
        '9DF' => 'E02000160',
        '9DG' => 'E02000160',
        '9DH' => 'E02000160',
        '9DJ' => 'E02000160',
        '9DL' => 'E02000160',
        '9DN' => 'E02000160',
        '9DP' => 'E02000160',
        '9DQ' => 'E02000160',
        '9DR' => 'E02000160',
        '9DS' => 'E02000160',
        '9DT' => 'E02000160',
        '9DU' => 'E02000160',
        '9DW' => 'E02000160',
        '9DX' => 'E02000160',
        '9DY' => 'E02000160',
        '9DZ' => 'E02000160',
        '9EA' => 'E02000160',
        '9EB' => 'E02000160',
        '9ED' => 'E02000160',
        '9EE' => 'E02000160',
        '9EF' => 'E02000160',
        '9EG' => 'E02000160',
        '9EH' => 'E02000160',
        '9EJ' => 'E02000160',
        '9EL' => 'E02000160',
        '9EN' => 'E02000160',
        '9EP' => 'E02000160',
        '9EQ' => 'E02000160',
        '9ER' => 'E02000160',
        '9ES' => 'E02000160',
        '9ET' => 'E02000160',
        '9EU' => 'E02000160',
        '9EW' => 'E02000156',
        '9EX' => 'E02000160',
        '9EY' => 'E02000160',
        '9EZ' => 'E02000160',
        '9FA' => 'E02000160',
        '9FB' => 'E02000156',
        '9FD' => 'E02000160',
        '9FE' => 'E02000156',
        '9FF' => 'E02000156',
        '9FG' => 'E02000156',
        '9FH' => 'E02000156',
        '9FJ' => 'E02000156',
        '9FL' => 'E02000160',
        '9FN' => 'E02000160',
        '9FP' => 'E02000160',
        '9FQ' => 'E02000160',
        '9FR' => 'E02000160',
        '9HA' => 'E02000160',
        '9HB' => 'E02000160',
        '9HD' => 'E02000160',
        '9HE' => 'E02000160',
        '9HF' => 'E02000160',
        '9HG' => 'E02000160',
        '9HH' => 'E02000160',
        '9HJ' => 'E02000160',
        '9HL' => 'E02000156',
        '9HN' => 'E02000160',
        '9HP' => 'E02000160',
        '9HQ' => 'E02000160',
        '9HR' => 'E02000160',
        '9HS' => 'E02000160',
        '9HT' => 'E02000160',
        '9HU' => 'E02000160',
        '9HW' => 'E02000160',
        '9HX' => 'E02000160',
        '9HY' => 'E02000160',
        '9HZ' => 'E02000160',
        '9JA' => 'E02000160',
        '9JB' => 'E02000160',
        '9JD' => 'E02000160',
        '9JE' => 'E02000160',
        '9JF' => 'E02000160',
        '9JG' => 'E02000160',
        '9JH' => 'E02000160',
        '9JJ' => 'E02000160',
        '9JL' => 'E02000160',
        '9JN' => 'E02000160',
        '9JP' => 'E02000160',
        '9JQ' => 'E02000160',
        '9JR' => 'E02000156',
        '9JS' => 'E02000156',
        '9JT' => 'E02000156',
        '9JU' => 'E02000156',
        '9JW' => 'E02000160',
        '9JX' => 'E02000156',
        '9JY' => 'E02000156',
        '9JZ' => 'E02000156',
        '9LA' => 'E02000156',
        '9LB' => 'E02000156',
        '9LD' => 'E02000156',
        '9LE' => 'E02000156',
        '9LF' => 'E02000156',
        '9LG' => 'E02000156',
        '9LH' => 'E02000156',
        '9LJ' => 'E02000156',
        '9LL' => 'E02000156',
        '9LN' => 'E02000156',
        '9LP' => 'E02000156',
        '9LQ' => 'E02000156',
        '9LR' => 'E02000156',
        '9LS' => 'E02000156',
        '9LT' => 'E02000156',
        '9LU' => 'E02000156',
        '9LW' => 'E02000156',
        '9LX' => 'E02000156',
        '9LY' => 'E02000156',
        '9LZ' => 'E02000156',
        '9NA' => 'E02000156',
        '9NB' => 'E02000156',
        '9ND' => 'E02000156',
        '9NE' => 'E02000156',
        '9NF' => 'E02000156',
        '9NG' => 'E02000156',
        '9NH' => 'E02000156',
        '9NJ' => 'E02000156',
        '9NL' => 'E02000156',
        '9NN' => 'E02000156',
        '9NP' => 'E02000156',
        '9NQ' => 'E02000156',
        '9NR' => 'E02000156',
        '9NS' => 'E02000156',
        '9NT' => 'E02000156',
        '9NW' => 'E02000156',
        '9NX' => 'E02000156',
        '9NY' => 'E02000156',
        '9NZ' => 'E02000156',
        '9PA' => 'E02000156',
        '9PB' => 'E02000156',
        '9PD' => 'E02000156',
        '9PE' => 'E02000156',
        '9PF' => 'E02000156',
        '9PG' => 'E02000156',
        '9PH' => 'E02000156',
        '9PJ' => 'E02000156',
        '9PL' => 'E02000156',
        '9PN' => 'E02000156',
        '9PP' => 'E02000156',
        '9PQ' => 'E02000156',
        '9PR' => 'E02000156',
        '9PS' => 'E02000156',
        '9PT' => 'E02000156',
        '9PU' => 'E02000156',
        '9PW' => 'E02000156',
        '9PX' => 'E02000156',
        '9PY' => 'E02000156',
        '9PZ' => 'E02000156',
        '9QA' => 'E02000156',
        '9QB' => 'E02000156',
        '9QD' => 'E02000156',
        '9QE' => 'E02000156',
        '9QF' => 'E02000156',
        '9QG' => 'E02000156',
        '9QH' => 'E02000156',
        '9QJ' => 'E02000160',
        '9QL' => 'E02000156',
        '9QN' => 'E02000156',
        '9QP' => 'E02000160',
        '9QQ' => 'E02000160',
        '9QR' => 'E02000160',
        '9QS' => 'E02000160',
        '9QT' => 'E02000156',
        '9QW' => 'E02000156',
        '9QX' => 'E02000156',
        '9QY' => 'E02000156',
        '9QZ' => 'E02000156',
        '9RA' => 'E02000156',
        '9RB' => 'E02000156',
        '9RD' => 'E02000156',
        '9ST' => 'E02000160',
        '9TA' => 'E02000156',
        '9TB' => 'E02000156',
        '9TD' => 'E02000156',
        '9TG' => 'E02000156',
        '9TQ' => 'E02000156',
        '9UA' => 'E02000156',
        '9UB' => 'E02000156',
        '9UR' => 'E02000156',
        '9UY' => 'E02000156',
        '9UZ' => 'E02000156',
        '9WA' => 'E02000156',
        '9WB' => 'E02000156',
        '9WD' => 'E02000156',
        '9WE' => 'E02000156',
        '9WF' => 'E02000156',
        '9WG' => 'E02000156',
        '9WH' => 'E02000156',
        '9WJ' => 'E02000156',
        '9WL' => 'E02000156',
        '9WN' => 'E02000156',
        '9WP' => 'E02000156',
        '9WQ' => 'E02000156',
        '9WR' => 'E02000156',
        '9WS' => 'E02000156',
        '9WT' => 'E02000156',
        '9WU' => 'E02000156',
        '9WW' => 'E02000156',
        '9WX' => 'E02000156',
        '9WY' => 'E02000156',
        '9WZ' => 'E02000156',
        '9XA' => 'E02000156',
        '9XB' => 'E02000156',
        '9XS' => 'E02000156',
        '9XT' => 'E02000156',
        '9XU' => 'E02000156',
        '9XW' => 'E02000156',
        '9XX' => 'E02000156',
        '9XY' => 'E02000156',
        '9XZ' => 'E02000156',
        '9YA' => 'E02000156',
        '9YE' => 'E02000156',
        '9YZ' => 'E02000156',
        '9ZD' => 'E02000156',
        '9ZE' => 'E02000156',
        '9ZF' => 'E02000156',
        '9ZG' => 'E02000156',
        '9ZH' => 'E02000156',
        '9ZJ' => 'E02000156',
        '9ZL' => 'E02000156',
        '9ZN' => 'E02000156',
        '9ZP' => 'E02000156',
        '9ZQ' => 'E02000156',
        '9ZR' => 'E02000156',
        '9ZS' => 'E02000156',
        '9ZT' => 'E02000156',
        '9ZU' => 'E02000156',
        '9ZW' => 'E02000156',
        '9ZX' => 'E02000156',
        '9ZY' => 'E02000156',
        '9ZZ' => 'E02000156',
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
