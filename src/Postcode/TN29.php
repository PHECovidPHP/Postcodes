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
final class TN29
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02005112',
        '0AB' => 'E02005112',
        '0AD' => 'E02005112',
        '0AH' => 'E02005112',
        '0AJ' => 'E02005112',
        '0AL' => 'E02005112',
        '0AN' => 'E02005112',
        '0AP' => 'E02005112',
        '0AQ' => 'E02005112',
        '0AR' => 'E02005112',
        '0AS' => 'E02005112',
        '0AT' => 'E02005112',
        '0AU' => 'E02005112',
        '0AW' => 'E02005112',
        '0AX' => 'E02005112',
        '0AY' => 'E02005112',
        '0AZ' => 'E02005112',
        '0BA' => 'E02005112',
        '0BB' => 'E02005112',
        '0BD' => 'E02005112',
        '0BE' => 'E02005112',
        '0BF' => 'E02005112',
        '0BG' => 'E02005112',
        '0BJ' => 'E02005112',
        '0BL' => 'E02005112',
        '0BN' => 'E02005112',
        '0BP' => 'E02005112',
        '0BQ' => 'E02005112',
        '0BS' => 'E02005112',
        '0BT' => 'E02005112',
        '0BU' => 'E02005112',
        '0BW' => 'E02005112',
        '0BX' => 'E02005112',
        '0BY' => 'E02005112',
        '0BZ' => 'E02005112',
        '0DA' => 'E02005112',
        '0DB' => 'E02005112',
        '0DD' => 'E02005112',
        '0DE' => 'E02005112',
        '0DF' => 'E02005112',
        '0DG' => 'E02005112',
        '0DH' => 'E02005112',
        '0DJ' => 'E02005112',
        '0DL' => 'E02005112',
        '0DN' => 'E02005112',
        '0DP' => 'E02005112',
        '0DQ' => 'E02005112',
        '0DR' => 'E02005112',
        '0DS' => 'E02005112',
        '0DT' => 'E02005112',
        '0DU' => 'E02005112',
        '0DW' => 'E02005112',
        '0DX' => 'E02005112',
        '0DY' => 'E02005112',
        '0DZ' => 'E02005112',
        '0EA' => 'E02005112',
        '0EB' => 'E02005112',
        '0ED' => 'E02005112',
        '0EE' => 'E02005112',
        '0EF' => 'E02005112',
        '0EG' => 'E02005112',
        '0EJ' => 'E02005112',
        '0EL' => 'E02005112',
        '0EN' => 'E02005112',
        '0EP' => 'E02005112',
        '0EQ' => 'E02005112',
        '0ES' => 'E02005112',
        '0ET' => 'E02005112',
        '0EU' => 'E02005112',
        '0EW' => 'E02005112',
        '0EX' => 'E02005112',
        '0EY' => 'E02005112',
        '0EZ' => 'E02005112',
        '0GA' => 'E02005112',
        '0GT' => 'E02005113',
        '0HA' => 'E02005112',
        '0HB' => 'E02005112',
        '0HD' => 'E02005112',
        '0HE' => 'E02005112',
        '0HF' => 'E02005112',
        '0HG' => 'E02005112',
        '0HH' => 'E02005112',
        '0HJ' => 'E02005112',
        '0HL' => 'E02005112',
        '0HN' => 'E02005112',
        '0HP' => 'E02005112',
        '0HQ' => 'E02005112',
        '0HR' => 'E02005112',
        '0HS' => 'E02005112',
        '0HT' => 'E02005112',
        '0HU' => 'E02005110',
        '0HW' => 'E02005110',
        '0HX' => 'E02005112',
        '0HY' => 'E02005112',
        '0HZ' => 'E02005112',
        '0JA' => 'E02005112',
        '0JB' => 'E02005112',
        '0JD' => 'E02005112',
        '0JE' => 'E02005112',
        '0JF' => 'E02005112',
        '0JG' => 'E02005112',
        '0JH' => 'E02005112',
        '0JJ' => 'E02005112',
        '0JL' => 'E02005112',
        '0JN' => 'E02005112',
        '0JP' => 'E02005112',
        '0JQ' => 'E02005110',
        '0JR' => 'E02005112',
        '0JS' => 'E02005110',
        '0JT' => 'E02005110',
        '0JU' => 'E02005110',
        '0JW' => 'E02005112',
        '0JX' => 'E02005110',
        '0JY' => 'E02005112',
        '0JZ' => 'E02005110',
        '0LA' => 'E02005112',
        '0LB' => 'E02005112',
        '0LD' => 'E02005112',
        '0LE' => 'E02005112',
        '0LF' => 'E02005112',
        '0LG' => 'E02005112',
        '0LH' => 'E02005112',
        '0LJ' => 'E02005112',
        '0LN' => 'E02005112',
        '0LP' => 'E02005110',
        '0LQ' => 'E02005112',
        '0LR' => 'E02005110',
        '0LS' => 'E02005110',
        '0LT' => 'E02005110',
        '0LU' => 'E02005110',
        '0LW' => 'E02005110',
        '0LX' => 'E02005110',
        '0LY' => 'E02005110',
        '0LZ' => 'E02005110',
        '0NA' => 'E02005110',
        '0NB' => 'E02005110',
        '0ND' => 'E02005110',
        '0NE' => 'E02005110',
        '0NF' => 'E02005110',
        '0NG' => 'E02005112',
        '0NH' => 'E02005112',
        '0NJ' => 'E02005112',
        '0NL' => 'E02005112',
        '0NN' => 'E02005112',
        '0NP' => 'E02005112',
        '0NQ' => 'E02005112',
        '0NR' => 'E02005112',
        '0NS' => 'E02005112',
        '0NT' => 'E02005112',
        '0NU' => 'E02005112',
        '0NW' => 'E02005112',
        '0NX' => 'E02005112',
        '0NY' => 'E02005112',
        '0NZ' => 'E02005112',
        '0PA' => 'E02005112',
        '0PB' => 'E02005112',
        '0PD' => 'E02005112',
        '0PE' => 'E02005112',
        '0PF' => 'E02005112',
        '0PG' => 'E02005112',
        '0PH' => 'E02005112',
        '0PJ' => 'E02005112',
        '0PL' => 'E02005112',
        '0PN' => 'E02005112',
        '0PP' => 'E02005112',
        '0PQ' => 'E02005113',
        '0PR' => 'E02005112',
        '0PS' => 'E02005112',
        '0PT' => 'E02005112',
        '0PU' => 'E02005112',
        '0PW' => 'E02005112',
        '0PX' => 'E02005112',
        '0PY' => 'E02005112',
        '0PZ' => 'E02005112',
        '0QB' => 'E02005112',
        '0QD' => 'E02005112',
        '0QE' => 'E02005112',
        '0QF' => 'E02005112',
        '0QG' => 'E02005112',
        '0QH' => 'E02005112',
        '0QJ' => 'E02005112',
        '0QL' => 'E02005112',
        '0QN' => 'E02005112',
        '0QP' => 'E02005112',
        '0QQ' => 'E02005112',
        '0QR' => 'E02005112',
        '0QS' => 'E02005112',
        '0QT' => 'E02005112',
        '0QU' => 'E02005112',
        '0QW' => 'E02005112',
        '0QX' => 'E02005112',
        '0QY' => 'E02005112',
        '0RA' => 'E02005112',
        '0RB' => 'E02005112',
        '0RD' => 'E02005112',
        '0RE' => 'E02005112',
        '0RF' => 'E02005112',
        '0RG' => 'E02005112',
        '0RH' => 'E02005112',
        '0RJ' => 'E02005112',
        '0RL' => 'E02005112',
        '0RN' => 'E02005112',
        '0RP' => 'E02005112',
        '0RQ' => 'E02005112',
        '0RR' => 'E02005112',
        '0RS' => 'E02005112',
        '0RT' => 'E02005112',
        '0RU' => 'E02005112',
        '0RW' => 'E02005112',
        '0RX' => 'E02005112',
        '0RY' => 'E02005112',
        '0RZ' => 'E02005112',
        '0SA' => 'E02005112',
        '0SB' => 'E02005112',
        '0SD' => 'E02005112',
        '0SE' => 'E02005112',
        '0SF' => 'E02005112',
        '0SG' => 'E02005112',
        '0SH' => 'E02005112',
        '0SJ' => 'E02005112',
        '0SL' => 'E02005112',
        '0SN' => 'E02005112',
        '0SP' => 'E02005112',
        '0SQ' => 'E02005112',
        '0SR' => 'E02005112',
        '0SS' => 'E02005112',
        '0ST' => 'E02005112',
        '0SU' => 'E02005112',
        '0SW' => 'E02005112',
        '0SX' => 'E02005112',
        '0SY' => 'E02005112',
        '0SZ' => 'E02005112',
        '0TA' => 'E02005112',
        '0TB' => 'E02005112',
        '0TD' => 'E02005112',
        '0TE' => 'E02005112',
        '0TF' => 'E02005112',
        '0TG' => 'E02005112',
        '0TH' => 'E02005112',
        '0TJ' => 'E02005110',
        '0TL' => 'E02005110',
        '0TN' => 'E02005110',
        '0TP' => 'E02005110',
        '0TQ' => 'E02005112',
        '0TR' => 'E02005110',
        '0TS' => 'E02005110',
        '0TT' => 'E02005110',
        '0TU' => 'E02005110',
        '0TW' => 'E02005110',
        '0TX' => 'E02005110',
        '0TY' => 'E02005110',
        '0TZ' => 'E02005110',
        '0UA' => 'E02005110',
        '0UB' => 'E02005110',
        '0UD' => 'E02005110',
        '0UE' => 'E02005110',
        '0UF' => 'E02005110',
        '0UG' => 'E02005110',
        '0UH' => 'E02005110',
        '0UJ' => 'E02005110',
        '0UL' => 'E02005110',
        '0UN' => 'E02005112',
        '0UP' => 'E02005110',
        '0UQ' => 'E02005110',
        '0UW' => 'E02005110',
        '0WA' => 'E02005113',
        '0WG' => 'E02005113',
        '0WP' => 'E02005113',
        '0WQ' => 'E02005113',
        '0WR' => 'E02005113',
        '0WY' => 'E02005113',
        '0WZ' => 'E02005110',
        '0XA' => 'E02005112',
        '0XB' => 'E02005112',
        '0XD' => 'E02005112',
        '0XE' => 'E02005112',
        '0XF' => 'E02005112',
        '0XG' => 'E02005112',
        '0XH' => 'E02005112',
        '0XJ' => 'E02005112',
        '0XL' => 'E02005112',
        '0XN' => 'E02005112',
        '0XP' => 'E02005112',
        '0XQ' => 'E02005112',
        '0XR' => 'E02005112',
        '0XS' => 'E02005112',
        '0XW' => 'E02005112',
        '0XZ' => 'E02005112',
        '0YF' => 'E02005113',
        '0YQ' => 'E02005113',
        '0YR' => 'E02005113',
        '0YS' => 'E02005113',
        '0YT' => 'E02005112',
        '0ZJ' => 'E02005113',
        '0ZL' => 'E02005113',
        '0ZN' => 'E02005112',
        '0ZP' => 'E02005113',
        '0ZR' => 'E02005112',
        '0ZS' => 'E02005112',
        '0ZT' => 'E02005112',
        '0ZU' => 'E02005113',
        '0ZW' => 'E02005113',
        '0ZX' => 'E02005112',
        '0ZY' => 'E02005113',
        '0ZZ' => 'E02005112',
        '9AA' => 'E02005114',
        '9AB' => 'E02005112',
        '9AD' => 'E02005114',
        '9AE' => 'E02005114',
        '9AF' => 'E02005114',
        '9AG' => 'E02005114',
        '9AH' => 'E02005114',
        '9AJ' => 'E02005114',
        '9AL' => 'E02005114',
        '9AN' => 'E02005114',
        '9AP' => 'E02005114',
        '9AQ' => 'E02005114',
        '9AR' => 'E02005114',
        '9AS' => 'E02005114',
        '9AT' => 'E02005114',
        '9AU' => 'E02005114',
        '9AW' => 'E02005114',
        '9AX' => 'E02005114',
        '9AY' => 'E02005114',
        '9AZ' => 'E02005114',
        '9BA' => 'E02005114',
        '9BB' => 'E02005114',
        '9BD' => 'E02005114',
        '9BE' => 'E02005114',
        '9BF' => 'E02005114',
        '9BG' => 'E02005114',
        '9BH' => 'E02005114',
        '9BJ' => 'E02005114',
        '9BL' => 'E02005114',
        '9BN' => 'E02005114',
        '9BP' => 'E02005114',
        '9BQ' => 'E02005114',
        '9BS' => 'E02005114',
        '9BT' => 'E02005114',
        '9BU' => 'E02005114',
        '9BW' => 'E02005114',
        '9BX' => 'E02005114',
        '9BY' => 'E02005114',
        '9BZ' => 'E02005114',
        '9DA' => 'E02005114',
        '9DB' => 'E02005114',
        '9DD' => 'E02005114',
        '9DE' => 'E02005114',
        '9DF' => 'E02005114',
        '9DG' => 'E02005114',
        '9DH' => 'E02005114',
        '9DJ' => 'E02005114',
        '9DL' => 'E02005114',
        '9DN' => 'E02005114',
        '9DP' => 'E02005114',
        '9DQ' => 'E02005114',
        '9DR' => 'E02005114',
        '9DS' => 'E02005114',
        '9DT' => 'E02005114',
        '9DU' => 'E02005114',
        '9DW' => 'E02005114',
        '9DX' => 'E02005114',
        '9DY' => 'E02005114',
        '9DZ' => 'E02005114',
        '9EA' => 'E02005114',
        '9EB' => 'E02005114',
        '9ED' => 'E02005114',
        '9EE' => 'E02005114',
        '9EF' => 'E02005114',
        '9EG' => 'E02005114',
        '9EH' => 'E02005114',
        '9EJ' => 'E02005114',
        '9EL' => 'E02005114',
        '9EN' => 'E02005114',
        '9EP' => 'E02005114',
        '9EQ' => 'E02005114',
        '9ER' => 'E02005114',
        '9ES' => 'E02005114',
        '9ET' => 'E02005114',
        '9EU' => 'E02005114',
        '9EW' => 'E02005114',
        '9EX' => 'E02005114',
        '9EY' => 'E02005114',
        '9EZ' => 'E02005114',
        '9FA' => 'E02005114',
        '9FB' => 'E02005114',
        '9FD' => 'E02005114',
        '9FE' => 'E02005114',
        '9FH' => 'E02005112',
        '9HA' => 'E02005114',
        '9HB' => 'E02005114',
        '9HD' => 'E02005114',
        '9HE' => 'E02005114',
        '9HF' => 'E02005114',
        '9HG' => 'E02005114',
        '9HH' => 'E02005114',
        '9HJ' => 'E02005114',
        '9HL' => 'E02005114',
        '9HN' => 'E02005114',
        '9HP' => 'E02005114',
        '9HQ' => 'E02005114',
        '9HR' => 'E02005114',
        '9HS' => 'E02005114',
        '9HT' => 'E02005114',
        '9HU' => 'E02005114',
        '9HW' => 'E02005114',
        '9HX' => 'E02005114',
        '9HY' => 'E02005114',
        '9HZ' => 'E02005114',
        '9JA' => 'E02005114',
        '9JB' => 'E02005114',
        '9JD' => 'E02005114',
        '9JE' => 'E02005114',
        '9JF' => 'E02005114',
        '9JG' => 'E02005114',
        '9JH' => 'E02005114',
        '9JJ' => 'E02005114',
        '9JL' => 'E02005114',
        '9JN' => 'E02005114',
        '9JP' => 'E02005114',
        '9JQ' => 'E02005114',
        '9JR' => 'E02005114',
        '9JS' => 'E02005114',
        '9JT' => 'E02005114',
        '9JU' => 'E02005114',
        '9JW' => 'E02005114',
        '9JX' => 'E02005114',
        '9JY' => 'E02005114',
        '9JZ' => 'E02005114',
        '9LA' => 'E02005114',
        '9LB' => 'E02005114',
        '9LD' => 'E02005114',
        '9LE' => 'E02005114',
        '9LF' => 'E02005114',
        '9LG' => 'E02005114',
        '9LH' => 'E02005114',
        '9LJ' => 'E02005114',
        '9LL' => 'E02005114',
        '9LN' => 'E02005114',
        '9LP' => 'E02005114',
        '9LQ' => 'E02005114',
        '9LR' => 'E02005114',
        '9LS' => 'E02005114',
        '9LT' => 'E02005114',
        '9LU' => 'E02005114',
        '9LW' => 'E02005114',
        '9LX' => 'E02005114',
        '9LY' => 'E02005114',
        '9LZ' => 'E02005114',
        '9NA' => 'E02005114',
        '9NB' => 'E02005114',
        '9ND' => 'E02005114',
        '9NE' => 'E02005114',
        '9NF' => 'E02005114',
        '9NG' => 'E02005114',
        '9NH' => 'E02005114',
        '9NJ' => 'E02005114',
        '9NL' => 'E02005114',
        '9NN' => 'E02005114',
        '9NP' => 'E02005114',
        '9NQ' => 'E02005114',
        '9NR' => 'E02005114',
        '9NS' => 'E02005114',
        '9NT' => 'E02005114',
        '9NU' => 'E02005114',
        '9NW' => 'E02005114',
        '9NX' => 'E02005114',
        '9NY' => 'E02005114',
        '9NZ' => 'E02005114',
        '9PA' => 'E02005114',
        '9PB' => 'E02005114',
        '9PD' => 'E02005114',
        '9PE' => 'E02005114',
        '9PF' => 'E02005114',
        '9PG' => 'E02005114',
        '9PH' => 'E02005114',
        '9PJ' => 'E02005114',
        '9PL' => 'E02005114',
        '9PN' => 'E02005114',
        '9PP' => 'E02005114',
        '9PQ' => 'E02005114',
        '9PR' => 'E02005114',
        '9PS' => 'E02005114',
        '9PT' => 'E02005114',
        '9PU' => 'E02005114',
        '9PW' => 'E02005114',
        '9PX' => 'E02005114',
        '9PY' => 'E02005114',
        '9PZ' => 'E02005114',
        '9QA' => 'E02005112',
        '9QB' => 'E02005112',
        '9QD' => 'E02005112',
        '9QE' => 'E02005112',
        '9QF' => 'E02005112',
        '9QG' => 'E02005114',
        '9QH' => 'E02005112',
        '9QJ' => 'E02005114',
        '9QL' => 'E02005114',
        '9QN' => 'E02005114',
        '9QP' => 'E02005112',
        '9QQ' => 'E02005114',
        '9QR' => 'E02005112',
        '9QS' => 'E02005112',
        '9QT' => 'E02005112',
        '9QU' => 'E02005112',
        '9QX' => 'E02005112',
        '9QY' => 'E02005112',
        '9QZ' => 'E02005112',
        '9RA' => 'E02005112',
        '9RB' => 'E02005112',
        '9RD' => 'E02005112',
        '9RE' => 'E02005112',
        '9RF' => 'E02005112',
        '9RG' => 'E02005112',
        '9RH' => 'E02005112',
        '9RJ' => 'E02005112',
        '9RL' => 'E02005112',
        '9RN' => 'E02005112',
        '9RP' => 'E02005112',
        '9RQ' => 'E02005112',
        '9RR' => 'E02005112',
        '9RS' => 'E02005112',
        '9RT' => 'E02005112',
        '9RU' => 'E02005112',
        '9RW' => 'E02005112',
        '9RX' => 'E02005112',
        '9RY' => 'E02005112',
        '9RZ' => 'E02005112',
        '9SA' => 'E02005112',
        '9SB' => 'E02005112',
        '9SD' => 'E02005112',
        '9SE' => 'E02005113',
        '9SF' => 'E02005112',
        '9SG' => 'E02005112',
        '9SH' => 'E02005112',
        '9SJ' => 'E02005112',
        '9SL' => 'E02005112',
        '9SN' => 'E02005112',
        '9SP' => 'E02005112',
        '9SQ' => 'E02005112',
        '9SR' => 'E02005112',
        '9SS' => 'E02005112',
        '9ST' => 'E02005112',
        '9SU' => 'E02005112',
        '9SW' => 'E02005112',
        '9SX' => 'E02005112',
        '9SY' => 'E02005112',
        '9SZ' => 'E02005112',
        '9TA' => 'E02005112',
        '9TB' => 'E02005112',
        '9TD' => 'E02005112',
        '9TE' => 'E02005112',
        '9TF' => 'E02005112',
        '9TG' => 'E02005112',
        '9TH' => 'E02005112',
        '9TJ' => 'E02005112',
        '9TL' => 'E02005112',
        '9TN' => 'E02005112',
        '9TP' => 'E02005112',
        '9TQ' => 'E02005112',
        '9TR' => 'E02005112',
        '9TS' => 'E02005112',
        '9TT' => 'E02005112',
        '9TU' => 'E02005112',
        '9TW' => 'E02005112',
        '9TX' => 'E02005112',
        '9TY' => 'E02005112',
        '9TZ' => 'E02005112',
        '9UA' => 'E02005112',
        '9UB' => 'E02005112',
        '9UD' => 'E02005112',
        '9UE' => 'E02005112',
        '9UF' => 'E02005112',
        '9UG' => 'E02005112',
        '9UH' => 'E02005112',
        '9UJ' => 'E02005112',
        '9UL' => 'E02005112',
        '9UN' => 'E02005112',
        '9UP' => 'E02005114',
        '9UQ' => 'E02005112',
        '9UR' => 'E02005114',
        '9US' => 'E02005113',
        '9UT' => 'E02005114',
        '9UU' => 'E02005114',
        '9UW' => 'E02005112',
        '9UX' => 'E02005112',
        '9UZ' => 'E02005112',
        '9WA' => 'E02005112',
        '9WB' => 'E02005113',
        '9WE' => 'E02005113',
        '9WG' => 'E02005113',
        '9WH' => 'E02005112',
        '9WJ' => 'E02005113',
        '9XL' => 'E02005114',
        '9YA' => 'E02005114',
        '9YB' => 'E02005113',
        '9YE' => 'E02005114',
        '9YF' => 'E02005114',
        '9YG' => 'E02005114',
        '9YH' => 'E02005113',
        '9YN' => 'E02005114',
        '9ZN' => 'E02005113',
        '9ZP' => 'E02005114',
        '9ZR' => 'E02005114',
        '9ZS' => 'E02005114',
        '9ZT' => 'E02005114',
        '9ZU' => 'E02005114',
        '9ZW' => 'E02005114',
        '9ZX' => 'E02005114',
        '9ZY' => 'E02005113',
        '9ZZ' => 'E02005114',
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
