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
final class PE38
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02005568',
        '0AB' => 'E02005568',
        '0AD' => 'E02005567',
        '0AE' => 'E02005566',
        '0AF' => 'E02005566',
        '0AG' => 'E02005566',
        '0AH' => 'E02005566',
        '0AJ' => 'E02005566',
        '0AL' => 'E02005566',
        '0AN' => 'E02005566',
        '0AP' => 'E02005566',
        '0AQ' => 'E02005566',
        '0AR' => 'E02005566',
        '0AS' => 'E02005569',
        '0AT' => 'E02005569',
        '0AU' => 'E02005566',
        '0AW' => 'E02005566',
        '0AX' => 'E02005566',
        '0AY' => 'E02005566',
        '0AZ' => 'E02005568',
        '0BA' => 'E02005566',
        '0BB' => 'E02005566',
        '0BD' => 'E02005566',
        '0BE' => 'E02005566',
        '0BF' => 'E02005566',
        '0BG' => 'E02005566',
        '0BH' => 'E02005566',
        '0BJ' => 'E02005566',
        '0BL' => 'E02005566',
        '0BN' => 'E02005566',
        '0BP' => 'E02005566',
        '0BQ' => 'E02005566',
        '0BS' => 'E02005566',
        '0BT' => 'E02005566',
        '0BU' => 'E02005566',
        '0BW' => 'E02005566',
        '0BX' => 'E02005566',
        '0BY' => 'E02005566',
        '0BZ' => 'E02005566',
        '0DA' => 'E02005568',
        '0DB' => 'E02005567',
        '0DE' => 'E02005568',
        '0DF' => 'E02005568',
        '0DG' => 'E02005567',
        '0DH' => 'E02005568',
        '0DJ' => 'E02005568',
        '0DL' => 'E02005566',
        '0DP' => 'E02005568',
        '0DQ' => 'E02005566',
        '0DR' => 'E02005568',
        '0DS' => 'E02005568',
        '0DT' => 'E02005568',
        '0DU' => 'E02005568',
        '0DW' => 'E02005568',
        '0DX' => 'E02005568',
        '0DY' => 'E02005568',
        '0DZ' => 'E02005568',
        '0EA' => 'E02005568',
        '0EB' => 'E02005568',
        '0ED' => 'E02005568',
        '0EE' => 'E02005568',
        '0EF' => 'E02005568',
        '0EG' => 'E02005568',
        '0EH' => 'E02005568',
        '0EJ' => 'E02005568',
        '0EL' => 'E02005568',
        '0EN' => 'E02005568',
        '0EP' => 'E02005568',
        '0EQ' => 'E02005568',
        '0ER' => 'E02005568',
        '0ES' => 'E02005568',
        '0ET' => 'E02005568',
        '0EU' => 'E02005568',
        '0EW' => 'E02005568',
        '0EX' => 'E02005568',
        '0EY' => 'E02005568',
        '0EZ' => 'E02005568',
        '0FA' => 'E02005568',
        '0FB' => 'E02005568',
        '0FD' => 'E02005566',
        '0GA' => 'E02005568',
        '0HA' => 'E02005568',
        '0HB' => 'E02005568',
        '0HD' => 'E02005568',
        '0HE' => 'E02005568',
        '0HG' => 'E02005568',
        '0HH' => 'E02005568',
        '0HJ' => 'E02005568',
        '0HL' => 'E02005568',
        '0HN' => 'E02005568',
        '0HP' => 'E02005568',
        '0HQ' => 'E02005568',
        '0HR' => 'E02005568',
        '0HS' => 'E02005569',
        '0HT' => 'E02005569',
        '0HU' => 'E02005569',
        '0HW' => 'E02005568',
        '0HX' => 'E02005568',
        '0HY' => 'E02005568',
        '0HZ' => 'E02005568',
        '0JA' => 'E02005568',
        '0JB' => 'E02005568',
        '0JD' => 'E02005568',
        '0JE' => 'E02005568',
        '0JF' => 'E02005568',
        '0JG' => 'E02005568',
        '0JH' => 'E02005568',
        '0JJ' => 'E02005568',
        '0JL' => 'E02005568',
        '0JN' => 'E02005568',
        '0JP' => 'E02005568',
        '0JQ' => 'E02005568',
        '0JR' => 'E02005568',
        '0JS' => 'E02005568',
        '0JT' => 'E02005568',
        '0JU' => 'E02005568',
        '0JW' => 'E02005568',
        '0JX' => 'E02005568',
        '0JY' => 'E02005568',
        '0JZ' => 'E02005568',
        '0LA' => 'E02005568',
        '0LB' => 'E02005568',
        '0LD' => 'E02005568',
        '0LE' => 'E02005568',
        '0LF' => 'E02005569',
        '0LH' => 'E02005568',
        '0LJ' => 'E02005568',
        '0LL' => 'E02005568',
        '0LN' => 'E02005568',
        '0LP' => 'E02005568',
        '0LS' => 'E02005568',
        '0LT' => 'E02005567',
        '0LU' => 'E02005561',
        '0LW' => 'E02005568',
        '0NA' => 'E02005569',
        '0NB' => 'E02005569',
        '0ND' => 'E02005569',
        '0NE' => 'E02005569',
        '0NF' => 'E02005569',
        '0NG' => 'E02005569',
        '0NH' => 'E02005569',
        '0NJ' => 'E02005569',
        '0NL' => 'E02005569',
        '0NN' => 'E02005569',
        '0NP' => 'E02005569',
        '0NQ' => 'E02005569',
        '0NR' => 'E02005569',
        '0NS' => 'E02005569',
        '0NT' => 'E02005569',
        '0NU' => 'E02005569',
        '0NW' => 'E02005569',
        '0NX' => 'E02005569',
        '0NY' => 'E02005568',
        '0NZ' => 'E02005569',
        '0PA' => 'E02005569',
        '0PB' => 'E02005569',
        '0PD' => 'E02005569',
        '0PE' => 'E02005569',
        '0PF' => 'E02005569',
        '0PG' => 'E02005569',
        '0PH' => 'E02005569',
        '0PJ' => 'E02005569',
        '0PL' => 'E02005569',
        '0PN' => 'E02005569',
        '0PP' => 'E02003732',
        '0PQ' => 'E02005569',
        '0PR' => 'E02005569',
        '0PS' => 'E02005569',
        '0PT' => 'E02005569',
        '0PU' => 'E02005569',
        '0PW' => 'E02005569',
        '0PX' => 'E02005569',
        '0PY' => 'E02005569',
        '0PZ' => 'E02005567',
        '0QA' => 'E02005561',
        '0QB' => 'E02005569',
        '0QE' => 'E02005568',
        '0QG' => 'E02005569',
        '0QH' => 'E02005568',
        '0QQ' => 'E02005567',
        '0QR' => 'E02005567',
        '0QS' => 'E02005568',
        '0WB' => 'E02005567',
        '0WH' => 'E02005567',
        '0WQ' => 'E02005567',
        '0WW' => 'E02005567',
        '0WX' => 'E02005567',
        '0WY' => 'E02005567',
        '0WZ' => 'E02005567',
        '8AA' => 'E02005567',
        '8AB' => 'E02005567',
        '8AD' => 'E02005567',
        '8AF' => 'E02005567',
        '8AG' => 'E02005567',
        '8AH' => 'E02005567',
        '8AJ' => 'E02005567',
        '8AL' => 'E02005567',
        '8AN' => 'E02005567',
        '8AP' => 'E02005567',
        '8AQ' => 'E02005567',
        '8AR' => 'E02005567',
        '8AS' => 'E02005567',
        '8AT' => 'E02005567',
        '8AU' => 'E02005567',
        '8AW' => 'E02005567',
        '8AX' => 'E02005567',
        '8AY' => 'E02005567',
        '8AZ' => 'E02005567',
        '8BA' => 'E02005567',
        '8BB' => 'E02005567',
        '8BD' => 'E02005567',
        '8BE' => 'E02005567',
        '8BF' => 'E02005567',
        '8BG' => 'E02005567',
        '8BH' => 'E02005567',
        '8BJ' => 'E02005567',
        '8BL' => 'E02005567',
        '8BN' => 'E02005567',
        '8BP' => 'E02005567',
        '8BQ' => 'E02005567',
        '8BR' => 'E02005567',
        '8BS' => 'E02005567',
        '8BT' => 'E02005567',
        '8BU' => 'E02005567',
        '8BW' => 'E02005567',
        '8BX' => 'E02005567',
        '8BY' => 'E02005567',
        '8BZ' => 'E02005567',
        '8DA' => 'E02005567',
        '8DB' => 'E02005567',
        '8DD' => 'E02005567',
        '8DE' => 'E02005567',
        '8DF' => 'E02005567',
        '8DG' => 'E02005567',
        '8DH' => 'E02005567',
        '8DJ' => 'E02005567',
        '8DL' => 'E02005567',
        '9AA' => 'E02005567',
        '9AB' => 'E02005567',
        '9AD' => 'E02005567',
        '9AE' => 'E02005567',
        '9AF' => 'E02005567',
        '9AG' => 'E02005567',
        '9AH' => 'E02005567',
        '9AJ' => 'E02005567',
        '9AL' => 'E02005567',
        '9AN' => 'E02005567',
        '9AP' => 'E02005567',
        '9AQ' => 'E02005567',
        '9AR' => 'E02005567',
        '9AS' => 'E02005567',
        '9AT' => 'E02005567',
        '9AU' => 'E02005567',
        '9AW' => 'E02005567',
        '9AX' => 'E02005567',
        '9AY' => 'E02005567',
        '9AZ' => 'E02005567',
        '9BA' => 'E02005567',
        '9BB' => 'E02005567',
        '9BD' => 'E02005567',
        '9BE' => 'E02005567',
        '9BF' => 'E02005567',
        '9BG' => 'E02005567',
        '9BH' => 'E02005567',
        '9BJ' => 'E02005567',
        '9BL' => 'E02005567',
        '9BN' => 'E02005567',
        '9BP' => 'E02005567',
        '9BQ' => 'E02005567',
        '9BS' => 'E02005567',
        '9BT' => 'E02005567',
        '9BU' => 'E02005567',
        '9BW' => 'E02005567',
        '9BX' => 'E02005567',
        '9BY' => 'E02005567',
        '9BZ' => 'E02005567',
        '9DA' => 'E02005567',
        '9DB' => 'E02005567',
        '9DD' => 'E02005567',
        '9DE' => 'E02005567',
        '9DF' => 'E02005567',
        '9DG' => 'E02005567',
        '9DH' => 'E02005567',
        '9DJ' => 'E02005567',
        '9DL' => 'E02005567',
        '9DN' => 'E02005567',
        '9DP' => 'E02005567',
        '9DQ' => 'E02005567',
        '9DR' => 'E02005567',
        '9DS' => 'E02005567',
        '9DT' => 'E02005567',
        '9DU' => 'E02005567',
        '9DW' => 'E02005567',
        '9DX' => 'E02005567',
        '9DY' => 'E02005567',
        '9DZ' => 'E02005567',
        '9EA' => 'E02005567',
        '9EB' => 'E02005567',
        '9ED' => 'E02005567',
        '9EE' => 'E02005567',
        '9EF' => 'E02005567',
        '9EG' => 'E02005567',
        '9EH' => 'E02005567',
        '9EJ' => 'E02005567',
        '9EL' => 'E02005567',
        '9EN' => 'E02005567',
        '9EP' => 'E02005567',
        '9EQ' => 'E02005567',
        '9ER' => 'E02005567',
        '9ES' => 'E02005567',
        '9ET' => 'E02005567',
        '9EU' => 'E02005567',
        '9EW' => 'E02005567',
        '9EX' => 'E02005567',
        '9EY' => 'E02005567',
        '9EZ' => 'E02005567',
        '9FA' => 'E02005567',
        '9FB' => 'E02005567',
        '9FD' => 'E02005567',
        '9FE' => 'E02005567',
        '9FG' => 'E02005568',
        '9GA' => 'E02005568',
        '9GB' => 'E02005567',
        '9GD' => 'E02005567',
        '9GE' => 'E02005567',
        '9GF' => 'E02005567',
        '9GG' => 'E02005567',
        '9GH' => 'E02005567',
        '9GJ' => 'E02005567',
        '9GL' => 'E02005567',
        '9GN' => 'E02005567',
        '9GP' => 'E02005567',
        '9GQ' => 'E02005567',
        '9GR' => 'E02005567',
        '9GS' => 'E02005567',
        '9GT' => 'E02005567',
        '9GU' => 'E02005567',
        '9GW' => 'E02005567',
        '9HA' => 'E02005567',
        '9HB' => 'E02005567',
        '9HD' => 'E02005567',
        '9HE' => 'E02005567',
        '9HF' => 'E02005567',
        '9HG' => 'E02005567',
        '9HH' => 'E02005567',
        '9HJ' => 'E02005567',
        '9HL' => 'E02005567',
        '9HN' => 'E02005567',
        '9HP' => 'E02005567',
        '9HQ' => 'E02005567',
        '9HR' => 'E02005567',
        '9HS' => 'E02005567',
        '9HT' => 'E02005567',
        '9HU' => 'E02005567',
        '9HW' => 'E02005567',
        '9HX' => 'E02005567',
        '9HY' => 'E02005567',
        '9HZ' => 'E02005567',
        '9JA' => 'E02005567',
        '9JB' => 'E02005567',
        '9JD' => 'E02005567',
        '9JE' => 'E02005567',
        '9JF' => 'E02005567',
        '9JG' => 'E02005567',
        '9JH' => 'E02005567',
        '9JJ' => 'E02005567',
        '9JL' => 'E02005567',
        '9JN' => 'E02005567',
        '9JP' => 'E02005567',
        '9JQ' => 'E02005567',
        '9JR' => 'E02005567',
        '9JS' => 'E02005567',
        '9JT' => 'E02005567',
        '9JU' => 'E02005567',
        '9JW' => 'E02005567',
        '9JX' => 'E02005567',
        '9JY' => 'E02005567',
        '9JZ' => 'E02005567',
        '9LA' => 'E02005567',
        '9LB' => 'E02005567',
        '9LD' => 'E02005567',
        '9LE' => 'E02005567',
        '9LF' => 'E02005567',
        '9LG' => 'E02005567',
        '9LH' => 'E02005567',
        '9LJ' => 'E02005567',
        '9LL' => 'E02005567',
        '9LN' => 'E02005567',
        '9LP' => 'E02005567',
        '9LQ' => 'E02005567',
        '9LR' => 'E02005567',
        '9LS' => 'E02005567',
        '9LT' => 'E02005568',
        '9LU' => 'E02005568',
        '9LW' => 'E02005567',
        '9LX' => 'E02005568',
        '9LY' => 'E02005567',
        '9LZ' => 'E02005568',
        '9NA' => 'E02005567',
        '9NB' => 'E02005568',
        '9ND' => 'E02005567',
        '9NE' => 'E02005567',
        '9NF' => 'E02005567',
        '9NG' => 'E02005567',
        '9NH' => 'E02005567',
        '9NJ' => 'E02005567',
        '9NL' => 'E02005567',
        '9NN' => 'E02005567',
        '9NP' => 'E02005567',
        '9NQ' => 'E02005567',
        '9NR' => 'E02005567',
        '9NS' => 'E02005567',
        '9NT' => 'E02005567',
        '9NU' => 'E02005567',
        '9NW' => 'E02005567',
        '9NX' => 'E02005567',
        '9NY' => 'E02005567',
        '9NZ' => 'E02005567',
        '9PA' => 'E02005567',
        '9PB' => 'E02005567',
        '9PD' => 'E02005567',
        '9PE' => 'E02005567',
        '9PF' => 'E02005567',
        '9PG' => 'E02005567',
        '9PH' => 'E02005567',
        '9PJ' => 'E02005567',
        '9PL' => 'E02005567',
        '9PN' => 'E02005567',
        '9PP' => 'E02005567',
        '9PQ' => 'E02005567',
        '9PR' => 'E02005567',
        '9PS' => 'E02005567',
        '9PT' => 'E02005567',
        '9PU' => 'E02005567',
        '9PW' => 'E02005567',
        '9PX' => 'E02005567',
        '9PY' => 'E02005567',
        '9PZ' => 'E02005567',
        '9QA' => 'E02005567',
        '9QB' => 'E02005567',
        '9QD' => 'E02005567',
        '9QE' => 'E02005567',
        '9QF' => 'E02005567',
        '9QG' => 'E02005567',
        '9QH' => 'E02005567',
        '9QJ' => 'E02005567',
        '9QL' => 'E02005567',
        '9QN' => 'E02005567',
        '9QP' => 'E02005567',
        '9QQ' => 'E02005567',
        '9QR' => 'E02005567',
        '9QS' => 'E02005567',
        '9QT' => 'E02005567',
        '9QU' => 'E02005567',
        '9QW' => 'E02005567',
        '9QX' => 'E02005567',
        '9QY' => 'E02005567',
        '9QZ' => 'E02005567',
        '9RA' => 'E02005567',
        '9RB' => 'E02005567',
        '9RD' => 'E02005567',
        '9RE' => 'E02005567',
        '9RF' => 'E02005567',
        '9RG' => 'E02005567',
        '9RH' => 'E02005567',
        '9RJ' => 'E02005567',
        '9RL' => 'E02005567',
        '9RN' => 'E02005567',
        '9RP' => 'E02005567',
        '9RQ' => 'E02005567',
        '9RR' => 'E02005567',
        '9RS' => 'E02005567',
        '9RT' => 'E02005567',
        '9RU' => 'E02005567',
        '9RW' => 'E02005567',
        '9RX' => 'E02005567',
        '9RY' => 'E02005567',
        '9RZ' => 'E02005567',
        '9SA' => 'E02005567',
        '9SB' => 'E02005567',
        '9SD' => 'E02005567',
        '9SE' => 'E02005567',
        '9SF' => 'E02005567',
        '9SG' => 'E02005567',
        '9SH' => 'E02005567',
        '9SJ' => 'E02005567',
        '9SL' => 'E02005567',
        '9SN' => 'E02005567',
        '9SP' => 'E02005567',
        '9SQ' => 'E02005567',
        '9SR' => 'E02005567',
        '9SS' => 'E02005567',
        '9ST' => 'E02005567',
        '9SU' => 'E02005567',
        '9SW' => 'E02005567',
        '9SX' => 'E02005567',
        '9SY' => 'E02005567',
        '9SZ' => 'E02005567',
        '9TA' => 'E02005567',
        '9TB' => 'E02005567',
        '9TD' => 'E02005567',
        '9TE' => 'E02005567',
        '9TF' => 'E02005567',
        '9TG' => 'E02005567',
        '9TH' => 'E02005567',
        '9TJ' => 'E02005567',
        '9TL' => 'E02005567',
        '9TN' => 'E02005567',
        '9TP' => 'E02005567',
        '9TQ' => 'E02005567',
        '9TR' => 'E02005567',
        '9TS' => 'E02005567',
        '9TT' => 'E02005567',
        '9TU' => 'E02005567',
        '9TW' => 'E02005567',
        '9TX' => 'E02005567',
        '9TY' => 'E02005567',
        '9TZ' => 'E02005567',
        '9UA' => 'E02005567',
        '9UB' => 'E02005567',
        '9UD' => 'E02005567',
        '9UE' => 'E02005567',
        '9UF' => 'E02005567',
        '9UG' => 'E02005567',
        '9UH' => 'E02005567',
        '9UJ' => 'E02005567',
        '9UL' => 'E02005567',
        '9UN' => 'E02005567',
        '9UP' => 'E02005567',
        '9UQ' => 'E02005567',
        '9UR' => 'E02005567',
        '9US' => 'E02005567',
        '9UT' => 'E02005567',
        '9UU' => 'E02005567',
        '9UW' => 'E02005567',
        '9UX' => 'E02005567',
        '9UY' => 'E02005567',
        '9UZ' => 'E02005567',
        '9WA' => 'E02005567',
        '9WB' => 'E02005567',
        '9WD' => 'E02005567',
        '9WE' => 'E02005567',
        '9WF' => 'E02005567',
        '9WG' => 'E02005567',
        '9WW' => 'E02005567',
        '9WY' => 'E02005567',
        '9WZ' => 'E02005567',
        '9XA' => 'E02005567',
        '9XB' => 'E02005561',
        '9XD' => 'E02005561',
        '9XE' => 'E02005567',
        '9XF' => 'E02005567',
        '9XG' => 'E02005567',
        '9XH' => 'E02005561',
        '9XJ' => 'E02005561',
        '9XL' => 'E02005567',
        '9XN' => 'E02005561',
        '9XQ' => 'E02005567',
        '9XR' => 'E02005561',
        '9XS' => 'E02005561',
        '9XT' => 'E02005567',
        '9XW' => 'E02005567',
        '9YB' => 'E02005567',
        '9YY' => 'E02005567',
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
