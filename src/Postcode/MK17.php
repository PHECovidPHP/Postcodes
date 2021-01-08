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
final class MK17
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02003654',
        '0AB' => 'E02003654',
        '0AD' => 'E02003654',
        '0AE' => 'E02003654',
        '0AF' => 'E02003654',
        '0AG' => 'E02003654',
        '0AH' => 'E02003654',
        '0AJ' => 'E02003654',
        '0AL' => 'E02003654',
        '0AN' => 'E02003654',
        '0AP' => 'E02003654',
        '0AQ' => 'E02003654',
        '0AR' => 'E02003654',
        '0AS' => 'E02003654',
        '0AT' => 'E02003654',
        '0AU' => 'E02003654',
        '0AW' => 'E02003654',
        '0AX' => 'E02003654',
        '0AY' => 'E02003654',
        '0AZ' => 'E02003654',
        '0BA' => 'E02003654',
        '0BB' => 'E02003654',
        '0BD' => 'E02003654',
        '0BE' => 'E02003654',
        '0BF' => 'E02003475',
        '0BG' => 'E02003654',
        '0BH' => 'E02003654',
        '0BJ' => 'E02003654',
        '0BL' => 'E02003654',
        '0BN' => 'E02003654',
        '0BP' => 'E02003654',
        '0BQ' => 'E02003654',
        '0BS' => 'E02003654',
        '0BT' => 'E02003654',
        '0BU' => 'E02003654',
        '0BW' => 'E02003654',
        '0BX' => 'E02003654',
        '0BY' => 'E02003654',
        '0BZ' => 'E02003654',
        '0DA' => 'E02003654',
        '0DB' => 'E02003654',
        '0DD' => 'E02003654',
        '0DE' => 'E02003654',
        '0DF' => 'E02003654',
        '0DG' => 'E02003654',
        '0DH' => 'E02003654',
        '0DJ' => 'E02003654',
        '0DL' => 'E02003654',
        '0DN' => 'E02003654',
        '0DP' => 'E02003654',
        '0DQ' => 'E02003654',
        '0DR' => 'E02003654',
        '0DS' => 'E02003654',
        '0DT' => 'E02003654',
        '0DU' => 'E02003654',
        '0DW' => 'E02003654',
        '0DX' => 'E02003654',
        '0DY' => 'E02003657',
        '0DZ' => 'E02003657',
        '0EA' => 'E02003657',
        '0EB' => 'E02003657',
        '0ED' => 'E02003657',
        '0EE' => 'E02003657',
        '0EF' => 'E02003654',
        '0EG' => 'E02003654',
        '0EH' => 'E02003654',
        '0EJ' => 'E02003654',
        '0EL' => 'E02003654',
        '0EN' => 'E02003654',
        '0EP' => 'E02003654',
        '0EQ' => 'E02003654',
        '0ER' => 'E02003654',
        '0ES' => 'E02003654',
        '0ET' => 'E02003654',
        '0EU' => 'E02003654',
        '0EW' => 'E02003654',
        '0EX' => 'E02003654',
        '0EY' => 'E02003654',
        '0EZ' => 'E02003652',
        '0FA' => 'E02003654',
        '0FD' => 'E02003654',
        '0FE' => 'E02003654',
        '0FF' => 'E02003657',
        '0FG' => 'E02003654',
        '0FH' => 'E02003654',
        '0FJ' => 'E02003657',
        '0FL' => 'E02003657',
        '0FP' => 'E02003654',
        '0FQ' => 'E02003654',
        '0GN' => 'E02003654',
        '0HA' => 'E02003652',
        '0HB' => 'E02003652',
        '0HD' => 'E02003652',
        '0HE' => 'E02003652',
        '0HF' => 'E02003652',
        '0HG' => 'E02003652',
        '0HH' => 'E02003652',
        '0HJ' => 'E02003652',
        '0HL' => 'E02003654',
        '0HN' => 'E02003654',
        '0HP' => 'E02003654',
        '0HQ' => 'E02003652',
        '0HR' => 'E02003654',
        '0HS' => 'E02003654',
        '0HT' => 'E02003654',
        '0HU' => 'E02003654',
        '0HW' => 'E02003652',
        '0HX' => 'E02003654',
        '0HY' => 'E02003657',
        '0HZ' => 'E02003657',
        '0JA' => 'E02003654',
        '0JB' => 'E02003657',
        '0JD' => 'E02003657',
        '0JE' => 'E02003657',
        '0JF' => 'E02003657',
        '0JG' => 'E02003657',
        '0JH' => 'E02003657',
        '0JJ' => 'E02003657',
        '0JL' => 'E02003475',
        '0JN' => 'E02003657',
        '0JP' => 'E02003657',
        '0JQ' => 'E02003657',
        '0JR' => 'E02003657',
        '0JS' => 'E02003657',
        '0JT' => 'E02003657',
        '0JU' => 'E02003657',
        '0JW' => 'E02003657',
        '0JX' => 'E02003657',
        '0JY' => 'E02003657',
        '0JZ' => 'E02003657',
        '0LA' => 'E02003657',
        '0LB' => 'E02003657',
        '0LD' => 'E02003657',
        '0LE' => 'E02003654',
        '0LF' => 'E02003657',
        '0LG' => 'E02003654',
        '0LH' => 'E02003652',
        '0LJ' => 'E02003657',
        '0LL' => 'E02003654',
        '0LN' => 'E02003654',
        '0LP' => 'E02003654',
        '0LQ' => 'E02003657',
        '0LR' => 'E02003654',
        '0LS' => 'E02003654',
        '0LT' => 'E02003654',
        '0LU' => 'E02003654',
        '0LW' => 'E02003654',
        '0LX' => 'E02003654',
        '0LY' => 'E02003654',
        '0LZ' => 'E02003654',
        '0NA' => 'E02003654',
        '0NB' => 'E02003654',
        '0ND' => 'E02003654',
        '0NE' => 'E02003477',
        '0NF' => 'E02003652',
        '0NG' => 'E02003654',
        '0NH' => 'E02003654',
        '0NJ' => 'E02003654',
        '0NL' => 'E02003654',
        '0NP' => 'E02003654',
        '0NQ' => 'E02003654',
        '0NR' => 'E02003654',
        '0NS' => 'E02003654',
        '0NT' => 'E02003654',
        '0NU' => 'E02003654',
        '0NW' => 'E02003654',
        '0NX' => 'E02003656',
        '0NY' => 'E02003654',
        '0NZ' => 'E02003654',
        '0PA' => 'E02003654',
        '0PB' => 'E02003654',
        '0PD' => 'E02003654',
        '0PE' => 'E02003654',
        '0PF' => 'E02003654',
        '0PG' => 'E02003654',
        '0PH' => 'E02003654',
        '0PJ' => 'E02003654',
        '0PL' => 'E02003654',
        '0PN' => 'E02003654',
        '0PP' => 'E02003654',
        '0PQ' => 'E02003654',
        '0PR' => 'E02003654',
        '0PS' => 'E02003654',
        '0PT' => 'E02003654',
        '0PU' => 'E02003654',
        '0PW' => 'E02003654',
        '0PX' => 'E02003654',
        '0PY' => 'E02003654',
        '0PZ' => 'E02003654',
        '0QA' => 'E02003654',
        '0QB' => 'E02003654',
        '0QD' => 'E02003475',
        '0QE' => 'E02003654',
        '0QF' => 'E02003654',
        '0QG' => 'E02003654',
        '0QH' => 'E02003654',
        '0QJ' => 'E02003654',
        '0QL' => 'E02003654',
        '0QN' => 'E02003654',
        '0QP' => 'E02003654',
        '0QQ' => 'E02003654',
        '0QR' => 'E02003654',
        '0QS' => 'E02003654',
        '0QT' => 'E02003654',
        '0QU' => 'E02003654',
        '0QW' => 'E02003654',
        '0QX' => 'E02003654',
        '0QY' => 'E02003654',
        '0QZ' => 'E02003654',
        '0RA' => 'E02003654',
        '0RB' => 'E02003654',
        '0RD' => 'E02003654',
        '0RF' => 'E02003654',
        '0RG' => 'E02003654',
        '0RH' => 'E02003654',
        '0RJ' => 'E02003654',
        '0RQ' => 'E02003654',
        '0RS' => 'E02003654',
        '0RT' => 'E02003654',
        '0RU' => 'E02003654',
        '0RW' => 'E02003654',
        '0RX' => 'E02003654',
        '0RY' => 'E02003654',
        '0RZ' => 'E02003654',
        '0SA' => 'E02003654',
        '0SB' => 'E02003654',
        '0SD' => 'E02003654',
        '0SE' => 'E02003657',
        '0SH' => 'E02003657',
        '0SJ' => 'E02003657',
        '0SL' => 'E02003657',
        '0SN' => 'E02003657',
        '0SP' => 'E02003657',
        '0SR' => 'E02003657',
        '0SS' => 'E02003657',
        '0ST' => 'E02003657',
        '0SU' => 'E02003657',
        '0SW' => 'E02003657',
        '0SX' => 'E02003657',
        '0TA' => 'E02003654',
        '0WA' => 'E02003654',
        '0WQ' => 'E02003475',
        '0WR' => 'E02003475',
        '0WS' => 'E02003475',
        '0WT' => 'E02003475',
        '0WU' => 'E02003475',
        '0WW' => 'E02003475',
        '0WX' => 'E02003475',
        '0WY' => 'E02003475',
        '0WZ' => 'E02003475',
        '0XA' => 'E02003475',
        '0XJ' => 'E02003654',
        '0XL' => 'E02003475',
        '0XN' => 'E02003475',
        '0XP' => 'E02003475',
        '0XQ' => 'E02003475',
        '0XR' => 'E02003475',
        '0XU' => 'E02003475',
        '0YL' => 'E02003475',
        '0YN' => 'E02003475',
        '0YP' => 'E02003475',
        '0YQ' => 'E02003475',
        '0YR' => 'E02003654',
        '0YS' => 'E02003654',
        '0YU' => 'E02003654',
        '0YW' => 'E02003654',
        '0YX' => 'E02003654',
        '0YY' => 'E02003654',
        '0YZ' => 'E02003654',
        '0ZD' => 'E02003654',
        '0ZE' => 'E02003475',
        '0ZF' => 'E02003654',
        '0ZG' => 'E02003654',
        '0ZH' => 'E02003654',
        '0ZJ' => 'E02003654',
        '0ZL' => 'E02003654',
        '0ZN' => 'E02003654',
        '0ZP' => 'E02003654',
        '0ZQ' => 'E02003475',
        '0ZR' => 'E02003654',
        '0ZS' => 'E02003475',
        '0ZT' => 'E02003654',
        '0ZU' => 'E02003654',
        '0ZW' => 'E02003654',
        '0ZY' => 'E02003654',
        '0ZZ' => 'E02003654',
        '7AA' => 'E02003482',
        '7AB' => 'E02003482',
        '7AE' => 'E02003482',
        '7AF' => 'E02003482',
        '7AJ' => 'E02003482',
        '7AL' => 'E02003482',
        '7AN' => 'E02003482',
        '7AW' => 'E02003482',
        '7AX' => 'E02003482',
        '7AY' => 'E02003482',
        '7AZ' => 'E02003482',
        '7BD' => 'E02003482',
        '7BE' => 'E02003482',
        '7BF' => 'E02003482',
        '7BG' => 'E02003482',
        '7BP' => 'E02003482',
        '7BR' => 'E02003482',
        '7BS' => 'E02003482',
        '7BT' => 'E02003482',
        '7BU' => 'E02003482',
        '7BW' => 'E02003482',
        '8AA' => 'E02003482',
        '8AB' => 'E02003482',
        '8AD' => 'E02003482',
        '8AE' => 'E02003482',
        '8AF' => 'E02003482',
        '8AG' => 'E02003482',
        '8AH' => 'E02003482',
        '8AJ' => 'E02003482',
        '8AL' => 'E02003482',
        '8AN' => 'E02003482',
        '8AP' => 'E02003605',
        '8AQ' => 'E02003482',
        '8AR' => 'E02003482',
        '8AS' => 'E02003482',
        '8AT' => 'E02003482',
        '8AU' => 'E02003482',
        '8AW' => 'E02003482',
        '8AX' => 'E02003482',
        '8AY' => 'E02003605',
        '8AZ' => 'E02003605',
        '8BA' => 'E02003605',
        '8BB' => 'E02003605',
        '8BD' => 'E02003605',
        '8BE' => 'E02003605',
        '8BF' => 'E02003605',
        '8BG' => 'E02003605',
        '8BH' => 'E02003605',
        '8BJ' => 'E02003605',
        '8BL' => 'E02003605',
        '8BN' => 'E02003605',
        '8BP' => 'E02003605',
        '8BQ' => 'E02003605',
        '8BS' => 'E02003605',
        '8BT' => 'E02003605',
        '8BU' => 'E02003605',
        '8BW' => 'E02003605',
        '8BX' => 'E02003605',
        '8BY' => 'E02003605',
        '8BZ' => 'E02003475',
        '8DA' => 'E02003482',
        '8DB' => 'E02003482',
        '8DD' => 'E02003605',
        '8DE' => 'E02003482',
        '8DF' => 'E02003605',
        '8DG' => 'E02003605',
        '8DH' => 'E02003605',
        '8DJ' => 'E02003605',
        '8DL' => 'E02003605',
        '8DN' => 'E02003605',
        '8DP' => 'E02003605',
        '8DQ' => 'E02003605',
        '8DR' => 'E02003605',
        '8DS' => 'E02003605',
        '8DT' => 'E02003605',
        '8DU' => 'E02003605',
        '8DW' => 'E02003605',
        '8DX' => 'E02003605',
        '8DY' => 'E02003482',
        '8DZ' => 'E02003605',
        '8EA' => 'E02003605',
        '8EB' => 'E02003605',
        '8ED' => 'E02003605',
        '8EE' => 'E02003605',
        '8EF' => 'E02003605',
        '8EG' => 'E02003605',
        '8EH' => 'E02003605',
        '8EJ' => 'E02003605',
        '8EL' => 'E02003605',
        '8EN' => 'E02003605',
        '8EP' => 'E02003605',
        '8EQ' => 'E02003605',
        '8ER' => 'E02003605',
        '8ES' => 'E02003605',
        '8ET' => 'E02003605',
        '8EU' => 'E02003605',
        '8EW' => 'E02003482',
        '8EX' => 'E02003605',
        '8EZ' => 'E02003482',
        '8FA' => 'E02003482',
        '8FB' => 'E02003482',
        '8FD' => 'E02003482',
        '8FE' => 'E02003482',
        '8FF' => 'E02003482',
        '8FG' => 'E02003482',
        '8FH' => 'E02003482',
        '8FJ' => 'E02003482',
        '8FL' => 'E02003482',
        '8FN' => 'E02003482',
        '8FP' => 'E02003482',
        '8FQ' => 'E02003482',
        '8FR' => 'E02003605',
        '8FS' => 'E02003482',
        '8FT' => 'E02003482',
        '8FW' => 'E02003482',
        '8FX' => 'E02003482',
        '8FZ' => 'E02003482',
        '8GA' => 'E02003482',
        '8GB' => 'E02003482',
        '8GD' => 'E02003482',
        '8GE' => 'E02003482',
        '8GF' => 'E02003605',
        '8GG' => 'E02003482',
        '8GH' => 'E02003482',
        '8GJ' => 'E02003482',
        '8GL' => 'E02003482',
        '8GN' => 'E02003482',
        '8GP' => 'E02003482',
        '8GQ' => 'E02003482',
        '8GR' => 'E02003482',
        '8GS' => 'E02003482',
        '8GT' => 'E02003482',
        '8GU' => 'E02003482',
        '8GW' => 'E02003482',
        '8GX' => 'E02003482',
        '8GZ' => 'E02003482',
        '8HA' => 'E02003482',
        '8HB' => 'E02003475',
        '8HD' => 'E02003605',
        '8HE' => 'E02003605',
        '8HF' => 'E02003605',
        '8HG' => 'E02003605',
        '8HH' => 'E02003605',
        '8HJ' => 'E02003605',
        '8HL' => 'E02003605',
        '8HN' => 'E02003605',
        '8HP' => 'E02003605',
        '8HQ' => 'E02003605',
        '8HR' => 'E02003605',
        '8HS' => 'E02003605',
        '8HT' => 'E02003605',
        '8HU' => 'E02003605',
        '8HW' => 'E02003605',
        '8HX' => 'E02003605',
        '8HY' => 'E02003605',
        '8HZ' => 'E02003605',
        '8JA' => 'E02003605',
        '8JB' => 'E02003605',
        '8JD' => 'E02003605',
        '8JE' => 'E02003482',
        '8JF' => 'E02003605',
        '8JG' => 'E02003605',
        '8JH' => 'E02003605',
        '8JJ' => 'E02003605',
        '8JL' => 'E02003605',
        '8JN' => 'E02003605',
        '8JP' => 'E02003605',
        '8JQ' => 'E02003482',
        '8JR' => 'E02003605',
        '8JS' => 'E02003605',
        '8JT' => 'E02003605',
        '8JU' => 'E02003605',
        '8JW' => 'E02003605',
        '8JX' => 'E02003605',
        '8JY' => 'E02003605',
        '8JZ' => 'E02003605',
        '8LA' => 'E02003605',
        '8LB' => 'E02003482',
        '8LD' => 'E02003482',
        '8LE' => 'E02003482',
        '8LF' => 'E02003605',
        '8LG' => 'E02003482',
        '8LH' => 'E02003482',
        '8LJ' => 'E02003482',
        '8LL' => 'E02003482',
        '8LN' => 'E02003482',
        '8LP' => 'E02003482',
        '8LQ' => 'E02003482',
        '8LR' => 'E02003482',
        '8LS' => 'E02003482',
        '8LT' => 'E02003482',
        '8LU' => 'E02003482',
        '8LW' => 'E02003482',
        '8LX' => 'E02003482',
        '8LY' => 'E02003482',
        '8LZ' => 'E02003482',
        '8NA' => 'E02003482',
        '8NB' => 'E02003482',
        '8ND' => 'E02003482',
        '8NE' => 'E02003482',
        '8NF' => 'E02003482',
        '8NG' => 'E02003482',
        '8NH' => 'E02003482',
        '8NJ' => 'E02003605',
        '8NL' => 'E02003605',
        '8NN' => 'E02003605',
        '8NP' => 'E02003605',
        '8NQ' => 'E02003482',
        '8NR' => 'E02003605',
        '8NS' => 'E02003605',
        '8NT' => 'E02003482',
        '8NU' => 'E02003482',
        '8NW' => 'E02003605',
        '8NX' => 'E02003482',
        '8NY' => 'E02003482',
        '8NZ' => 'E02003482',
        '8PA' => 'E02003607',
        '8PB' => 'E02003482',
        '8PD' => 'E02003482',
        '8PE' => 'E02003475',
        '8PG' => 'E02003482',
        '8PH' => 'E02003482',
        '8PJ' => 'E02003482',
        '8PL' => 'E02003482',
        '8PN' => 'E02003482',
        '8PP' => 'E02003482',
        '8PQ' => 'E02003482',
        '8PR' => 'E02003482',
        '8PS' => 'E02003482',
        '8PT' => 'E02003482',
        '8PU' => 'E02003482',
        '8PW' => 'E02003482',
        '8PX' => 'E02003482',
        '8PY' => 'E02003482',
        '8PZ' => 'E02003482',
        '8QA' => 'E02003482',
        '8QB' => 'E02003482',
        '8QD' => 'E02003482',
        '8QE' => 'E02003482',
        '8QF' => 'E02003482',
        '8QG' => 'E02003482',
        '8QH' => 'E02003482',
        '8QJ' => 'E02003607',
        '8QL' => 'E02003482',
        '8QN' => 'E02003482',
        '8QP' => 'E02003482',
        '8QQ' => 'E02003482',
        '8QR' => 'E02003607',
        '8QS' => 'E02003482',
        '8QT' => 'E02003482',
        '8QU' => 'E02003607',
        '8QW' => 'E02003482',
        '8QX' => 'E02003482',
        '8QY' => 'E02003482',
        '8QZ' => 'E02003482',
        '8RA' => 'E02003482',
        '8RB' => 'E02003482',
        '8RD' => 'E02003605',
        '8RE' => 'E02003482',
        '8RF' => 'E02003482',
        '8RG' => 'E02003482',
        '8RH' => 'E02003482',
        '8RJ' => 'E02003482',
        '8RL' => 'E02003482',
        '8RN' => 'E02003482',
        '8RP' => 'E02003482',
        '8RQ' => 'E02003482',
        '8RR' => 'E02003482',
        '8RS' => 'E02003482',
        '8RT' => 'E02003482',
        '8RU' => 'E02003482',
        '8RW' => 'E02003482',
        '8RX' => 'E02003605',
        '8RY' => 'E02003482',
        '8RZ' => 'E02003482',
        '8SA' => 'E02003482',
        '8SB' => 'E02003482',
        '8SD' => 'E02003482',
        '8SE' => 'E02003482',
        '8SF' => 'E02003482',
        '8SG' => 'E02003482',
        '8SH' => 'E02003605',
        '8SJ' => 'E02003605',
        '8SL' => 'E02003605',
        '8SN' => 'E02003605',
        '8SP' => 'E02003605',
        '8SQ' => 'E02003482',
        '8SR' => 'E02003605',
        '8SS' => 'E02003605',
        '8ST' => 'E02003605',
        '8SU' => 'E02003605',
        '8SW' => 'E02003607',
        '8SX' => 'E02003607',
        '8SY' => 'E02003607',
        '8SZ' => 'E02003607',
        '8TA' => 'E02003607',
        '8TD' => 'E02003607',
        '8TE' => 'E02003607',
        '8TF' => 'E02003607',
        '8TG' => 'E02003607',
        '8TH' => 'E02003607',
        '8TJ' => 'E02003607',
        '8TL' => 'E02003607',
        '8TN' => 'E02003607',
        '8TP' => 'E02003607',
        '8TQ' => 'E02003607',
        '8TR' => 'E02003607',
        '8TS' => 'E02003607',
        '8TT' => 'E02003607',
        '8TU' => 'E02003605',
        '8TW' => 'E02003607',
        '8TX' => 'E02003607',
        '8TY' => 'E02003482',
        '8TZ' => 'E02003482',
        '8UA' => 'E02003482',
        '8UB' => 'E02003482',
        '8UD' => 'E02003482',
        '8UE' => 'E02003482',
        '8UF' => 'E02003482',
        '8UG' => 'E02003482',
        '8UH' => 'E02003482',
        '8UJ' => 'E02003482',
        '8UL' => 'E02003482',
        '8UN' => 'E02003482',
        '8UP' => 'E02003482',
        '8UQ' => 'E02003482',
        '8UR' => 'E02003482',
        '8US' => 'E02003480',
        '8UT' => 'E02003482',
        '8UU' => 'E02003482',
        '8UW' => 'E02003482',
        '8UX' => 'E02003482',
        '8UY' => 'E02003482',
        '8UZ' => 'E02003482',
        '8WA' => 'E02003482',
        '8WB' => 'E02003482',
        '8WD' => 'E02003475',
        '8WE' => 'E02003475',
        '8WF' => 'E02003475',
        '8WG' => 'E02003475',
        '8WP' => 'E02003475',
        '8WQ' => 'E02003482',
        '8WR' => 'E02003475',
        '8WS' => 'E02003475',
        '8WT' => 'E02003475',
        '8WU' => 'E02003475',
        '8WW' => 'E02003475',
        '8WX' => 'E02003482',
        '8WY' => 'E02003475',
        '8WZ' => 'E02003475',
        '8XA' => 'E02003475',
        '8XB' => 'E02003475',
        '8XD' => 'E02003605',
        '8XE' => 'E02003475',
        '8XF' => 'E02003605',
        '8XG' => 'E02003605',
        '8XH' => 'E02003605',
        '8XJ' => 'E02003605',
        '8XL' => 'E02003475',
        '8XN' => 'E02003482',
        '8XP' => 'E02003605',
        '8XQ' => 'E02003605',
        '8XR' => 'E02003605',
        '8XS' => 'E02003605',
        '8XT' => 'E02003605',
        '8XU' => 'E02003475',
        '8XW' => 'E02003605',
        '8XY' => 'E02003605',
        '8XZ' => 'E02003605',
        '8YA' => 'E02003475',
        '8YB' => 'E02003605',
        '8YE' => 'E02003605',
        '8YF' => 'E02003605',
        '8YG' => 'E02003605',
        '8YH' => 'E02003605',
        '8YJ' => 'E02003605',
        '8YL' => 'E02003605',
        '8YN' => 'E02003605',
        '8YP' => 'E02003475',
        '8YQ' => 'E02003605',
        '8YR' => 'E02003605',
        '8YS' => 'E02003605',
        '8YT' => 'E02003475',
        '8YU' => 'E02003475',
        '8YW' => 'E02003605',
        '8YX' => 'E02003482',
        '8YY' => 'E02003605',
        '8YZ' => 'E02003605',
        '8ZD' => 'E02003605',
        '8ZE' => 'E02003605',
        '8ZF' => 'E02003605',
        '8ZG' => 'E02003475',
        '8ZH' => 'E02003475',
        '8ZJ' => 'E02003475',
        '8ZL' => 'E02003475',
        '8ZN' => 'E02003475',
        '8ZP' => 'E02003475',
        '8ZQ' => 'E02003475',
        '8ZR' => 'E02003475',
        '8ZT' => 'E02003475',
        '8ZX' => 'E02003475',
        '8ZY' => 'E02003475',
        '9AA' => 'E02003657',
        '9AB' => 'E02003657',
        '9AD' => 'E02003657',
        '9AE' => 'E02003657',
        '9AF' => 'E02003657',
        '9AG' => 'E02003657',
        '9AH' => 'E02003657',
        '9AJ' => 'E02003657',
        '9AL' => 'E02003657',
        '9AN' => 'E02003475',
        '9AP' => 'E02003657',
        '9AQ' => 'E02003657',
        '9AR' => 'E02003657',
        '9AS' => 'E02003657',
        '9AT' => 'E02003657',
        '9AU' => 'E02003657',
        '9AW' => 'E02003657',
        '9AX' => 'E02003657',
        '9AY' => 'E02003657',
        '9AZ' => 'E02003657',
        '9BA' => 'E02003657',
        '9BB' => 'E02003657',
        '9BD' => 'E02003657',
        '9BE' => 'E02003657',
        '9BF' => 'E02003657',
        '9BG' => 'E02003657',
        '9BH' => 'E02003657',
        '9BJ' => 'E02003657',
        '9BL' => 'E02003657',
        '9BN' => 'E02003657',
        '9BP' => 'E02003657',
        '9BQ' => 'E02003657',
        '9BS' => 'E02003657',
        '9BT' => 'E02003657',
        '9BU' => 'E02003657',
        '9BW' => 'E02003657',
        '9BX' => 'E02003657',
        '9BY' => 'E02003657',
        '9BZ' => 'E02003657',
        '9DA' => 'E02003657',
        '9DB' => 'E02003657',
        '9DD' => 'E02003657',
        '9DE' => 'E02003657',
        '9DF' => 'E02003657',
        '9DG' => 'E02003657',
        '9DH' => 'E02003657',
        '9DJ' => 'E02003657',
        '9DL' => 'E02003607',
        '9DN' => 'E02003482',
        '9DP' => 'E02003607',
        '9DQ' => 'E02003657',
        '9DR' => 'E02003607',
        '9DS' => 'E02003607',
        '9DT' => 'E02003607',
        '9DU' => 'E02003607',
        '9DW' => 'E02003607',
        '9DX' => 'E02003607',
        '9DY' => 'E02003607',
        '9DZ' => 'E02003607',
        '9EA' => 'E02003607',
        '9EB' => 'E02003607',
        '9ED' => 'E02003607',
        '9EE' => 'E02003607',
        '9EF' => 'E02003607',
        '9EG' => 'E02003615',
        '9EH' => 'E02003615',
        '9EJ' => 'E02003615',
        '9EL' => 'E02003615',
        '9EN' => 'E02003615',
        '9EP' => 'E02003615',
        '9EQ' => 'E02003615',
        '9ER' => 'E02003615',
        '9ES' => 'E02003607',
        '9ET' => 'E02003657',
        '9EU' => 'E02003657',
        '9EW' => 'E02003615',
        '9EX' => 'E02003657',
        '9EY' => 'E02003607',
        '9EZ' => 'E02003607',
        '9FA' => 'E02003657',
        '9FB' => 'E02003607',
        '9FD' => 'E02003475',
        '9FE' => 'E02003482',
        '9FF' => 'E02003657',
        '9FG' => 'E02003615',
        '9FH' => 'E02003482',
        '9FJ' => 'E02003607',
        '9FL' => 'E02003615',
        '9FN' => 'E02003657',
        '9FP' => 'E02003482',
        '9FQ' => 'E02003657',
        '9FR' => 'E02003657',
        '9FS' => 'E02003607',
        '9FT' => 'E02003657',
        '9FW' => 'E02003657',
        '9FX' => 'E02003657',
        '9FY' => 'E02003657',
        '9GA' => 'E02003607',
        '9HA' => 'E02003657',
        '9HB' => 'E02003637',
        '9HD' => 'E02003607',
        '9HE' => 'E02003607',
        '9HF' => 'E02003607',
        '9HG' => 'E02003607',
        '9HH' => 'E02003607',
        '9HJ' => 'E02003607',
        '9HL' => 'E02003607',
        '9HN' => 'E02003607',
        '9HP' => 'E02003607',
        '9HQ' => 'E02003607',
        '9HR' => 'E02003607',
        '9HS' => 'E02003607',
        '9HT' => 'E02003607',
        '9HU' => 'E02003607',
        '9HW' => 'E02003607',
        '9HX' => 'E02003607',
        '9HY' => 'E02003607',
        '9HZ' => 'E02003607',
        '9JA' => 'E02003607',
        '9JB' => 'E02003482',
        '9JD' => 'E02003607',
        '9JE' => 'E02003607',
        '9JF' => 'E02003482',
        '9JG' => 'E02003482',
        '9JH' => 'E02003482',
        '9JJ' => 'E02003482',
        '9JL' => 'E02003482',
        '9JN' => 'E02003482',
        '9JP' => 'E02003482',
        '9JQ' => 'E02003482',
        '9JR' => 'E02003482',
        '9JS' => 'E02003482',
        '9JT' => 'E02003482',
        '9JU' => 'E02003482',
        '9JW' => 'E02003482',
        '9JX' => 'E02003482',
        '9JY' => 'E02003482',
        '9JZ' => 'E02003482',
        '9LA' => 'E02003482',
        '9LB' => 'E02003482',
        '9LD' => 'E02003482',
        '9LE' => 'E02003482',
        '9LF' => 'E02003482',
        '9LG' => 'E02003482',
        '9LH' => 'E02003482',
        '9LJ' => 'E02003482',
        '9LL' => 'E02003607',
        '9LN' => 'E02003482',
        '9LP' => 'E02003482',
        '9LQ' => 'E02003482',
        '9LR' => 'E02003482',
        '9LS' => 'E02003482',
        '9LT' => 'E02003482',
        '9LU' => 'E02003482',
        '9LW' => 'E02003657',
        '9LX' => 'E02003482',
        '9LY' => 'E02003482',
        '9LZ' => 'E02003482',
        '9NA' => 'E02003482',
        '9NB' => 'E02003482',
        '9ND' => 'E02003482',
        '9NE' => 'E02003482',
        '9NF' => 'E02003657',
        '9NG' => 'E02003482',
        '9NH' => 'E02003482',
        '9NJ' => 'E02003482',
        '9NL' => 'E02003482',
        '9NN' => 'E02003482',
        '9NP' => 'E02003482',
        '9NQ' => 'E02003482',
        '9NR' => 'E02003482',
        '9NS' => 'E02003482',
        '9NT' => 'E02003482',
        '9NU' => 'E02003482',
        '9NW' => 'E02003482',
        '9NX' => 'E02003482',
        '9NY' => 'E02003482',
        '9NZ' => 'E02003482',
        '9PA' => 'E02003607',
        '9PB' => 'E02003482',
        '9PD' => 'E02003607',
        '9PE' => 'E02003475',
        '9PG' => 'E02003607',
        '9PH' => 'E02003607',
        '9PJ' => 'E02003607',
        '9PL' => 'E02003607',
        '9PP' => 'E02003607',
        '9PQ' => 'E02003607',
        '9PR' => 'E02003607',
        '9PS' => 'E02003607',
        '9PT' => 'E02003607',
        '9PU' => 'E02003607',
        '9PW' => 'E02003607',
        '9PX' => 'E02003607',
        '9PY' => 'E02003607',
        '9PZ' => 'E02003607',
        '9QA' => 'E02003607',
        '9QB' => 'E02003607',
        '9QD' => 'E02003607',
        '9QE' => 'E02003607',
        '9QF' => 'E02003607',
        '9QG' => 'E02003607',
        '9QH' => 'E02003607',
        '9QJ' => 'E02003607',
        '9QL' => 'E02003607',
        '9QN' => 'E02003605',
        '9QP' => 'E02003607',
        '9QQ' => 'E02003607',
        '9QR' => 'E02003607',
        '9QS' => 'E02003607',
        '9QT' => 'E02003475',
        '9QU' => 'E02003607',
        '9QW' => 'E02003607',
        '9QX' => 'E02003607',
        '9QY' => 'E02003607',
        '9QZ' => 'E02003607',
        '9RA' => 'E02003657',
        '9RB' => 'E02003482',
        '9RD' => 'E02003482',
        '9RE' => 'E02003475',
        '9RH' => 'E02003607',
        '9RJ' => 'E02003482',
        '9RN' => 'E02003657',
        '9RQ' => 'E02003657',
        '9RT' => 'E02003657',
        '9RX' => 'E02003657',
        '9SA' => 'E02003607',
        '9SW' => 'E02003482',
        '9WA' => 'E02003475',
        '9WD' => 'E02003607',
        '9WE' => 'E02003475',
        '9WG' => 'E02003475',
        '9WT' => 'E02003475',
        '9WW' => 'E02003475',
        '9WX' => 'E02003475',
        '9WY' => 'E02003475',
        '9WZ' => 'E02003475',
        '9XJ' => 'E02003475',
        '9XN' => 'E02003607',
        '9XQ' => 'E02003475',
        '9XZ' => 'E02003475',
        '9YS' => 'E02003482',
        '9YU' => 'E02003482',
        '9YX' => 'E02003475',
        '9YY' => 'E02003607',
        '9YZ' => 'E02003475',
        '9ZF' => 'E02003475',
        '9ZG' => 'E02003607',
        '9ZH' => 'E02003475',
        '9ZJ' => 'E02003607',
        '9ZL' => 'E02003607',
        '9ZN' => 'E02003607',
        '9ZP' => 'E02003475',
        '9ZQ' => 'E02003482',
        '9ZR' => 'E02003475',
        '9ZS' => 'E02003607',
        '9ZT' => 'E02003482',
        '9ZU' => 'E02003475',
        '9ZW' => 'E02003607',
        '9ZY' => 'E02003607',
        '9ZZ' => 'E02003607',
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