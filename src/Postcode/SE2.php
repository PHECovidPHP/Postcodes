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
final class SE2
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02000070',
        '0AB' => 'E02000070',
        '0AD' => 'E02000070',
        '0AE' => 'E02000070',
        '0AF' => 'E02000070',
        '0AG' => 'E02000070',
        '0AH' => 'E02000070',
        '0AJ' => 'E02000070',
        '0AL' => 'E02000070',
        '0AN' => 'E02000070',
        '0AP' => 'E02000070',
        '0AQ' => 'E02000070',
        '0AR' => 'E02000070',
        '0AS' => 'E02000320',
        '0AT' => 'E02000320',
        '0AU' => 'E02000070',
        '0AW' => 'E02000070',
        '0AX' => 'E02000066',
        '0AY' => 'E02000320',
        '0AZ' => 'E02000070',
        '0BA' => 'E02006786',
        '0BB' => 'E02000320',
        '0BD' => 'E02000320',
        '0BE' => 'E02000320',
        '0BN' => 'E02000320',
        '0BP' => 'E02000320',
        '0BS' => 'E02000320',
        '0BT' => 'E02000320',
        '0BU' => 'E02000320',
        '0BW' => 'E02000320',
        '0DH' => 'E02000070',
        '0DJ' => 'E02000314',
        '0DL' => 'E02000070',
        '0DN' => 'E02000070',
        '0DP' => 'E02000070',
        '0DR' => 'E02000070',
        '0DS' => 'E02000070',
        '0DT' => 'E02000070',
        '0DU' => 'E02000070',
        '0DW' => 'E02000070',
        '0DX' => 'E02000070',
        '0DY' => 'E02000070',
        '0DZ' => 'E02000070',
        '0EA' => 'E02000320',
        '0EB' => 'E02006786',
        '0EF' => 'E02000314',
        '0EP' => 'E02000320',
        '0ER' => 'E02000320',
        '0ES' => 'E02000320',
        '0ET' => 'E02000320',
        '0EU' => 'E02000320',
        '0EW' => 'E02000320',
        '0EX' => 'E02000320',
        '0EY' => 'E02000320',
        '0EZ' => 'E02006786',
        '0FX' => 'E02000314',
        '0GB' => 'E02000320',
        '0GD' => 'E02000320',
        '0HA' => 'E02006786',
        '0HB' => 'E02000318',
        '0HD' => 'E02000318',
        '0HE' => 'E02000320',
        '0HF' => 'E02006786',
        '0HG' => 'E02000320',
        '0HH' => 'E02000320',
        '0HQ' => 'E02006786',
        '0HY' => 'E02000318',
        '0HZ' => 'E02006786',
        '0JA' => 'E02006786',
        '0JB' => 'E02000318',
        '0JD' => 'E02000320',
        '0JE' => 'E02000318',
        '0JF' => 'E02000320',
        '0JG' => 'E02000320',
        '0JN' => 'E02000320',
        '0JP' => 'E02000320',
        '0JQ' => 'E02000320',
        '0JR' => 'E02000320',
        '0JS' => 'E02000320',
        '0JT' => 'E02000320',
        '0JU' => 'E02000320',
        '0JW' => 'E02000320',
        '0JX' => 'E02000320',
        '0JY' => 'E02000320',
        '0JZ' => 'E02000320',
        '0LA' => 'E02000320',
        '0LB' => 'E02000320',
        '0LD' => 'E02000320',
        '0LE' => 'E02000320',
        '0LF' => 'E02000320',
        '0LG' => 'E02000320',
        '0LH' => 'E02000320',
        '0LJ' => 'E02000320',
        '0LL' => 'E02000320',
        '0LP' => 'E02000320',
        '0LQ' => 'E02000320',
        '0LR' => 'E02000320',
        '0LS' => 'E02000320',
        '0LT' => 'E02000320',
        '0LU' => 'E02000320',
        '0LW' => 'E02000320',
        '0LX' => 'E02000320',
        '0LY' => 'E02000320',
        '0LZ' => 'E02000320',
        '0NA' => 'E02000320',
        '0NB' => 'E02000320',
        '0ND' => 'E02000320',
        '0NF' => 'E02000320',
        '0NG' => 'E02000320',
        '0NH' => 'E02000320',
        '0NQ' => 'E02000320',
        '0NR' => 'E02000320',
        '0NS' => 'E02006786',
        '0NT' => 'E02006786',
        '0NU' => 'E02006786',
        '0NX' => 'E02006786',
        '0NY' => 'E02006786',
        '0NZ' => 'E02006786',
        '0PA' => 'E02006786',
        '0PB' => 'E02006786',
        '0PD' => 'E02006786',
        '0PE' => 'E02006786',
        '0PF' => 'E02006786',
        '0PG' => 'E02000320',
        '0PN' => 'E02000070',
        '0PP' => 'E02000070',
        '0PR' => 'E02000070',
        '0PS' => 'E02000070',
        '0PT' => 'E02000070',
        '0PU' => 'E02000070',
        '0PW' => 'E02000070',
        '0PX' => 'E02000070',
        '0PY' => 'E02000070',
        '0PZ' => 'E02000070',
        '0QA' => 'E02000070',
        '0QB' => 'E02000070',
        '0QD' => 'E02000070',
        '0QE' => 'E02000070',
        '0QF' => 'E02000070',
        '0QG' => 'E02000070',
        '0QH' => 'E02000066',
        '0QJ' => 'E02000066',
        '0QL' => 'E02000070',
        '0QP' => 'E02000320',
        '0QQ' => 'E02000070',
        '0QS' => 'E02000320',
        '0QT' => 'E02000320',
        '0QU' => 'E02000320',
        '0QW' => 'E02000070',
        '0QX' => 'E02000320',
        '0QY' => 'E02000320',
        '0QZ' => 'E02000320',
        '0RA' => 'E02006786',
        '0RB' => 'E02000320',
        '0RD' => 'E02006786',
        '0RE' => 'E02006786',
        '0RF' => 'E02006786',
        '0RG' => 'E02006786',
        '0RH' => 'E02006786',
        '0RJ' => 'E02006786',
        '0RL' => 'E02006786',
        '0RS' => 'E02000320',
        '0RU' => 'E02000070',
        '0RW' => 'E02006786',
        '0RX' => 'E02000070',
        '0RY' => 'E02000070',
        '0RZ' => 'E02000070',
        '0SA' => 'E02000070',
        '0SB' => 'E02000070',
        '0SD' => 'E02000070',
        '0SE' => 'E02000070',
        '0SF' => 'E02000070',
        '0SG' => 'E02000070',
        '0SH' => 'E02000070',
        '0SQ' => 'E02000070',
        '0SR' => 'E02000320',
        '0SS' => 'E02000320',
        '0ST' => 'E02000320',
        '0SU' => 'E02000320',
        '0SX' => 'E02000320',
        '0SY' => 'E02000320',
        '0SZ' => 'E02000320',
        '0TA' => 'E02000320',
        '0TB' => 'E02000320',
        '0TD' => 'E02000320',
        '0TE' => 'E02000320',
        '0TF' => 'E02000320',
        '0TG' => 'E02000320',
        '0TJ' => 'E02000320',
        '0TQ' => 'E02000320',
        '0UL' => 'E02000320',
        '0UN' => 'E02000320',
        '0UP' => 'E02000320',
        '0UR' => 'E02000320',
        '0US' => 'E02000314',
        '0UT' => 'E02000320',
        '0UU' => 'E02000320',
        '0UW' => 'E02000320',
        '0UX' => 'E02000320',
        '0UY' => 'E02000320',
        '0UZ' => 'E02000320',
        '0WA' => 'E02000320',
        '0WB' => 'E02000320',
        '0WD' => 'E02000314',
        '0WE' => 'E02000320',
        '0WF' => 'E02000320',
        '0WG' => 'E02000314',
        '0WH' => 'E02000314',
        '0WJ' => 'E02000314',
        '0WL' => 'E02000314',
        '0WN' => 'E02000314',
        '0WP' => 'E02000314',
        '0WQ' => 'E02000320',
        '0WR' => 'E02000314',
        '0WS' => 'E02000314',
        '0WT' => 'E02000314',
        '0WU' => 'E02000314',
        '0WW' => 'E02000314',
        '0WX' => 'E02000314',
        '0WY' => 'E02000314',
        '0WZ' => 'E02000314',
        '0XA' => 'E02000320',
        '0XB' => 'E02000320',
        '0XD' => 'E02000320',
        '0XE' => 'E02000320',
        '0XH' => 'E02006786',
        '0XJ' => 'E02006786',
        '0XL' => 'E02006786',
        '0XN' => 'E02006786',
        '0XP' => 'E02006786',
        '0XR' => 'E02006786',
        '0XS' => 'E02006786',
        '0XT' => 'E02006786',
        '0XU' => 'E02006786',
        '0XW' => 'E02006786',
        '0XX' => 'E02006786',
        '0XY' => 'E02006786',
        '0XZ' => 'E02006786',
        '0YA' => 'E02006786',
        '0YB' => 'E02006786',
        '0YF' => 'E02006786',
        '0YH' => 'E02000320',
        '0YJ' => 'E02000320',
        '0YL' => 'E02000320',
        '0YN' => 'E02000320',
        '0YP' => 'E02000320',
        '0YQ' => 'E02000320',
        '0YR' => 'E02000320',
        '0YS' => 'E02000320',
        '0YW' => 'E02000320',
        '0YX' => 'E02000314',
        '0YY' => 'E02000320',
        '0YZ' => 'E02000320',
        '0ZA' => 'E02000314',
        '0ZB' => 'E02000320',
        '0ZD' => 'E02000320',
        '0ZE' => 'E02000320',
        '0ZF' => 'E02000320',
        '0ZG' => 'E02000320',
        '0ZH' => 'E02000314',
        '0ZJ' => 'E02000314',
        '0ZL' => 'E02000314',
        '0ZN' => 'E02000314',
        '0ZP' => 'E02000314',
        '0ZQ' => 'E02000320',
        '0ZR' => 'E02000314',
        '0ZS' => 'E02000314',
        '0ZW' => 'E02000314',
        '8AA' => 'E02000314',
        '8AD' => 'E02000314',
        '8AH' => 'E02000314',
        '8AR' => 'E02000314',
        '8AS' => 'E02000314',
        '8AZ' => 'E02000314',
        '8BA' => 'E02000314',
        '8BB' => 'E02000314',
        '8BE' => 'E02000314',
        '8BF' => 'E02000314',
        '8BG' => 'E02000314',
        '8BH' => 'E02000314',
        '8BJ' => 'E02000314',
        '8BL' => 'E02000314',
        '8BN' => 'E02000314',
        '8BP' => 'E02000314',
        '8BQ' => 'E02000314',
        '8BR' => 'E02000314',
        '8BS' => 'E02000314',
        '8BT' => 'E02000314',
        '8BU' => 'E02000314',
        '8BW' => 'E02000314',
        '8BX' => 'E02000314',
        '8BY' => 'E02000314',
        '8BZ' => 'E02000314',
        '8DA' => 'E02000314',
        '8DB' => 'E02000314',
        '8DD' => 'E02000314',
        '8DE' => 'E02000314',
        '8DF' => 'E02000314',
        '9AA' => 'E02000315',
        '9AB' => 'E02000066',
        '9AD' => 'E02000066',
        '9AE' => 'E02000066',
        '9AF' => 'E02000066',
        '9AG' => 'E02000315',
        '9AH' => 'E02000315',
        '9AJ' => 'E02000315',
        '9AL' => 'E02000315',
        '9AN' => 'E02000066',
        '9AP' => 'E02000066',
        '9AQ' => 'E02000065',
        '9AR' => 'E02000065',
        '9AS' => 'E02000066',
        '9AT' => 'E02000315',
        '9AU' => 'E02000315',
        '9AW' => 'E02000315',
        '9AX' => 'E02000315',
        '9AY' => 'E02000315',
        '9AZ' => 'E02000315',
        '9BA' => 'E02000315',
        '9BB' => 'E02000315',
        '9BD' => 'E02000315',
        '9BE' => 'E02000315',
        '9BF' => 'E02000315',
        '9BG' => 'E02000315',
        '9BH' => 'E02000315',
        '9BJ' => 'E02000315',
        '9BL' => 'E02000315',
        '9BN' => 'E02000315',
        '9BP' => 'E02000315',
        '9BQ' => 'E02000315',
        '9BS' => 'E02000066',
        '9BT' => 'E02000315',
        '9BU' => 'E02000315',
        '9BW' => 'E02000315',
        '9BX' => 'E02000315',
        '9BY' => 'E02000315',
        '9BZ' => 'E02000315',
        '9DA' => 'E02000315',
        '9DB' => 'E02000315',
        '9DD' => 'E02000315',
        '9DE' => 'E02000315',
        '9DF' => 'E02000315',
        '9DG' => 'E02000315',
        '9DH' => 'E02000315',
        '9DJ' => 'E02000315',
        '9DL' => 'E02000315',
        '9DN' => 'E02000315',
        '9DP' => 'E02000315',
        '9DQ' => 'E02000315',
        '9DR' => 'E02000315',
        '9DS' => 'E02000315',
        '9DU' => 'E02000315',
        '9DW' => 'E02000315',
        '9DX' => 'E02000315',
        '9DY' => 'E02000320',
        '9DZ' => 'E02000315',
        '9EB' => 'E02000315',
        '9ED' => 'E02000315',
        '9EE' => 'E02000315',
        '9EF' => 'E02000315',
        '9EG' => 'E02000315',
        '9EH' => 'E02000315',
        '9EJ' => 'E02000315',
        '9EL' => 'E02000320',
        '9EN' => 'E02000315',
        '9EP' => 'E02000315',
        '9EQ' => 'E02000320',
        '9ER' => 'E02000315',
        '9ES' => 'E02000066',
        '9ET' => 'E02000315',
        '9EU' => 'E02000315',
        '9EW' => 'E02000315',
        '9EX' => 'E02000315',
        '9EY' => 'E02000315',
        '9EZ' => 'E02000070',
        '9HA' => 'E02000070',
        '9HB' => 'E02000066',
        '9HD' => 'E02000070',
        '9HE' => 'E02000070',
        '9HJ' => 'E02000318',
        '9HL' => 'E02000315',
        '9HN' => 'E02000315',
        '9HP' => 'E02000315',
        '9HR' => 'E02000315',
        '9HS' => 'E02000315',
        '9HT' => 'E02000315',
        '9HU' => 'E02000315',
        '9HW' => 'E02000318',
        '9HX' => 'E02000318',
        '9JH' => 'E02000315',
        '9JJ' => 'E02000315',
        '9JL' => 'E02000315',
        '9JN' => 'E02000315',
        '9JP' => 'E02000315',
        '9JR' => 'E02000315',
        '9JS' => 'E02000315',
        '9JT' => 'E02000315',
        '9JU' => 'E02000315',
        '9JW' => 'E02000315',
        '9JX' => 'E02000315',
        '9JY' => 'E02000315',
        '9JZ' => 'E02000315',
        '9LA' => 'E02000315',
        '9LB' => 'E02000315',
        '9LD' => 'E02000315',
        '9LH' => 'E02000066',
        '9LJ' => 'E02000315',
        '9LL' => 'E02000315',
        '9LN' => 'E02000315',
        '9LP' => 'E02000315',
        '9LR' => 'E02000315',
        '9LS' => 'E02000315',
        '9LT' => 'E02000315',
        '9LU' => 'E02000315',
        '9LW' => 'E02000315',
        '9LX' => 'E02000315',
        '9LY' => 'E02000315',
        '9LZ' => 'E02000315',
        '9NA' => 'E02000315',
        '9NB' => 'E02000315',
        '9ND' => 'E02000315',
        '9NE' => 'E02000315',
        '9NF' => 'E02000315',
        '9NG' => 'E02000315',
        '9NH' => 'E02000315',
        '9NJ' => 'E02000315',
        '9NL' => 'E02000315',
        '9NN' => 'E02000320',
        '9NP' => 'E02000320',
        '9NQ' => 'E02000315',
        '9NR' => 'E02000315',
        '9NS' => 'E02000315',
        '9NT' => 'E02000315',
        '9NU' => 'E02000315',
        '9NW' => 'E02000320',
        '9NX' => 'E02000315',
        '9NY' => 'E02000315',
        '9NZ' => 'E02000315',
        '9PA' => 'E02000315',
        '9PB' => 'E02000315',
        '9PD' => 'E02000315',
        '9PE' => 'E02000315',
        '9PF' => 'E02000315',
        '9PG' => 'E02000315',
        '9PH' => 'E02000315',
        '9PJ' => 'E02000315',
        '9PL' => 'E02000315',
        '9PN' => 'E02000315',
        '9PP' => 'E02000315',
        '9PQ' => 'E02000315',
        '9PR' => 'E02000315',
        '9PS' => 'E02000315',
        '9PT' => 'E02000315',
        '9PU' => 'E02000315',
        '9PW' => 'E02000315',
        '9PX' => 'E02000315',
        '9PY' => 'E02000315',
        '9PZ' => 'E02000315',
        '9QA' => 'E02000315',
        '9QB' => 'E02000315',
        '9QD' => 'E02000315',
        '9QE' => 'E02000320',
        '9QF' => 'E02000315',
        '9QG' => 'E02000066',
        '9QH' => 'E02000315',
        '9QJ' => 'E02000315',
        '9QL' => 'E02000315',
        '9QN' => 'E02000315',
        '9QP' => 'E02000315',
        '9QQ' => 'E02000315',
        '9QR' => 'E02000315',
        '9QS' => 'E02000315',
        '9QT' => 'E02000315',
        '9QU' => 'E02000315',
        '9QW' => 'E02000315',
        '9QX' => 'E02000315',
        '9QY' => 'E02000315',
        '9QZ' => 'E02000315',
        '9RA' => 'E02000315',
        '9RB' => 'E02000315',
        '9RD' => 'E02000315',
        '9RE' => 'E02000315',
        '9RF' => 'E02000315',
        '9RG' => 'E02000315',
        '9RH' => 'E02000070',
        '9RJ' => 'E02000315',
        '9RL' => 'E02000315',
        '9RN' => 'E02000315',
        '9RP' => 'E02000066',
        '9RQ' => 'E02000315',
        '9RR' => 'E02000315',
        '9RT' => 'E02000066',
        '9RU' => 'E02000066',
        '9RW' => 'E02000315',
        '9RX' => 'E02000066',
        '9RY' => 'E02000066',
        '9RZ' => 'E02000066',
        '9SA' => 'E02000066',
        '9SB' => 'E02000066',
        '9SD' => 'E02000066',
        '9SE' => 'E02000066',
        '9SF' => 'E02000066',
        '9SG' => 'E02000315',
        '9SH' => 'E02000066',
        '9SJ' => 'E02000066',
        '9SL' => 'E02000066',
        '9SN' => 'E02000066',
        '9SP' => 'E02000066',
        '9SQ' => 'E02000315',
        '9SR' => 'E02000314',
        '9SS' => 'E02000066',
        '9ST' => 'E02000066',
        '9SU' => 'E02000066',
        '9SW' => 'E02000066',
        '9SX' => 'E02000066',
        '9SY' => 'E02000066',
        '9SZ' => 'E02000066',
        '9TA' => 'E02000066',
        '9TB' => 'E02000066',
        '9TD' => 'E02000066',
        '9TE' => 'E02000066',
        '9TF' => 'E02000066',
        '9TG' => 'E02000066',
        '9TH' => 'E02000066',
        '9TJ' => 'E02000066',
        '9TL' => 'E02000066',
        '9TN' => 'E02000066',
        '9TP' => 'E02000066',
        '9TQ' => 'E02000066',
        '9TR' => 'E02000066',
        '9TS' => 'E02000066',
        '9TT' => 'E02000066',
        '9TU' => 'E02000066',
        '9TW' => 'E02000066',
        '9TX' => 'E02000066',
        '9TY' => 'E02000066',
        '9TZ' => 'E02000314',
        '9UA' => 'E02000066',
        '9UB' => 'E02000314',
        '9UD' => 'E02000314',
        '9UE' => 'E02000066',
        '9UF' => 'E02000314',
        '9UG' => 'E02000066',
        '9UH' => 'E02000066',
        '9UJ' => 'E02000066',
        '9UL' => 'E02000066',
        '9UN' => 'E02000065',
        '9UP' => 'E02000066',
        '9UQ' => 'E02000066',
        '9UR' => 'E02000065',
        '9US' => 'E02000066',
        '9UT' => 'E02000065',
        '9UU' => 'E02000066',
        '9UW' => 'E02000066',
        '9UX' => 'E02000066',
        '9UY' => 'E02000066',
        '9UZ' => 'E02000066',
        '9WA' => 'E02000314',
        '9WB' => 'E02000066',
        '9WD' => 'E02000314',
        '9WE' => 'E02000314',
        '9WF' => 'E02000066',
        '9WG' => 'E02000314',
        '9WH' => 'E02000066',
        '9WJ' => 'E02000066',
        '9WL' => 'E02000314',
        '9WN' => 'E02000314',
        '9WP' => 'E02000314',
        '9WQ' => 'E02000314',
        '9WR' => 'E02000314',
        '9WS' => 'E02000314',
        '9WT' => 'E02000314',
        '9WU' => 'E02000314',
        '9WW' => 'E02000066',
        '9WX' => 'E02000314',
        '9WY' => 'E02000314',
        '9WZ' => 'E02000314',
        '9XA' => 'E02000066',
        '9XB' => 'E02000066',
        '9XD' => 'E02000314',
        '9XE' => 'E02000314',
        '9XF' => 'E02000314',
        '9XG' => 'E02000314',
        '9XH' => 'E02000315',
        '9XJ' => 'E02000315',
        '9XL' => 'E02000315',
        '9XN' => 'E02000315',
        '9XP' => 'E02000315',
        '9XQ' => 'E02000315',
        '9XR' => 'E02000315',
        '9XS' => 'E02000315',
        '9XT' => 'E02000315',
        '9XU' => 'E02000315',
        '9XW' => 'E02000315',
        '9XX' => 'E02000315',
        '9XY' => 'E02000315',
        '9XZ' => 'E02000315',
        '9YA' => 'E02000315',
        '9YB' => 'E02000314',
        '9YD' => 'E02000314',
        '9YE' => 'E02000314',
        '9YQ' => 'E02000314',
        '9YT' => 'E02000314',
        '9YU' => 'E02000314',
        '9YW' => 'E02000314',
        '9YX' => 'E02000314',
        '9YY' => 'E02000314',
        '9YZ' => 'E02000314',
        '9ZA' => 'E02000315',
        '9ZB' => 'E02000315',
        '9ZD' => 'E02000315',
        '9ZE' => 'E02000315',
        '9ZF' => 'E02000314',
        '9ZG' => 'E02000315',
        '9ZH' => 'E02000315',
        '9ZJ' => 'E02000315',
        '9ZL' => 'E02000314',
        '9ZN' => 'E02000315',
        '9ZP' => 'E02000315',
        '9ZQ' => 'E02000314',
        '9ZR' => 'E02000314',
        '9ZS' => 'E02000314',
        '9ZT' => 'E02000315',
        '9ZU' => 'E02000314',
        '9ZW' => 'E02000314',
        '9ZZ' => 'E02000314',
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
