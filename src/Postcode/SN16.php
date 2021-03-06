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
final class SN16
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02006645',
        '0AB' => 'E02006645',
        '0AD' => 'E02006645',
        '0AE' => 'E02006645',
        '0AF' => 'E02006645',
        '0AG' => 'E02006645',
        '0AH' => 'E02006645',
        '0AJ' => 'E02006645',
        '0AL' => 'E02006645',
        '0AN' => 'E02006645',
        '0AP' => 'E02006645',
        '0AQ' => 'E02006645',
        '0AR' => 'E02006645',
        '0AS' => 'E02006645',
        '0AT' => 'E02006645',
        '0AU' => 'E02006645',
        '0AW' => 'E02006645',
        '0AX' => 'E02006645',
        '0AY' => 'E02006645',
        '0AZ' => 'E02006645',
        '0BA' => 'E02006645',
        '0BB' => 'E02006645',
        '0BD' => 'E02006645',
        '0BE' => 'E02006645',
        '0BF' => 'E02006645',
        '0BG' => 'E02006650',
        '0BH' => 'E02006645',
        '0BJ' => 'E02006645',
        '0BL' => 'E02006645',
        '0BN' => 'E02006645',
        '0BP' => 'E02006645',
        '0BQ' => 'E02006645',
        '0BS' => 'E02006645',
        '0BT' => 'E02006645',
        '0BU' => 'E02006645',
        '0BW' => 'E02006645',
        '0BX' => 'E02006645',
        '0BY' => 'E02006645',
        '0BZ' => 'E02006645',
        '0DA' => 'E02006645',
        '0DB' => 'E02006645',
        '0DD' => 'E02006645',
        '0DE' => 'E02006645',
        '0DF' => 'E02006645',
        '0DG' => 'E02006645',
        '0DH' => 'E02006645',
        '0DJ' => 'E02006645',
        '0DL' => 'E02006645',
        '0DN' => 'E02006645',
        '0DP' => 'E02006645',
        '0DQ' => 'E02006645',
        '0DR' => 'E02006645',
        '0DS' => 'E02006645',
        '0DT' => 'E02006645',
        '0DU' => 'E02006645',
        '0DW' => 'E02006645',
        '0DX' => 'E02006645',
        '0DY' => 'E02006645',
        '0DZ' => 'E02006645',
        '0EA' => 'E02006645',
        '0EB' => 'E02006645',
        '0ED' => 'E02006648',
        '0EE' => 'E02006648',
        '0EF' => 'E02006648',
        '0EG' => 'E02006648',
        '0EH' => 'E02006648',
        '0EJ' => 'E02006648',
        '0EL' => 'E02006648',
        '0EN' => 'E02006648',
        '0EP' => 'E02006648',
        '0EQ' => 'E02006648',
        '0ER' => 'E02006648',
        '0ES' => 'E02006648',
        '0ET' => 'E02006648',
        '0EU' => 'E02006648',
        '0EW' => 'E02006648',
        '0EX' => 'E02006648',
        '0EY' => 'E02006648',
        '0EZ' => 'E02006648',
        '0FA' => 'E02006645',
        '0FB' => 'E02006648',
        '0FD' => 'E02006645',
        '0FE' => 'E02006645',
        '0FF' => 'E02006645',
        '0FG' => 'E02006645',
        '0FH' => 'E02006648',
        '0FJ' => 'E02006648',
        '0FL' => 'E02006648',
        '0FN' => 'E02006645',
        '0FP' => 'E02006648',
        '0FQ' => 'E02006645',
        '0FR' => 'E02006648',
        '0GA' => 'E02006645',
        '0GX' => 'E02006648',
        '0GY' => 'E02006648',
        '0GZ' => 'E02006645',
        '0HA' => 'E02006648',
        '0HB' => 'E02006648',
        '0HD' => 'E02006648',
        '0HE' => 'E02006648',
        '0HF' => 'E02006648',
        '0HG' => 'E02006648',
        '0HH' => 'E02006648',
        '0HJ' => 'E02006648',
        '0HL' => 'E02006648',
        '0HN' => 'E02006648',
        '0HP' => 'E02006648',
        '0HQ' => 'E02006648',
        '0HR' => 'E02006648',
        '0HS' => 'E02006648',
        '0HT' => 'E02006648',
        '0HU' => 'E02006645',
        '0HW' => 'E02006648',
        '0HX' => 'E02006645',
        '0HY' => 'E02006645',
        '0HZ' => 'E02006645',
        '0JA' => 'E02006645',
        '0JB' => 'E02006645',
        '0JD' => 'E02006645',
        '0JE' => 'E02006648',
        '0JF' => 'E02006648',
        '0JG' => 'E02006648',
        '0JH' => 'E02006648',
        '0JJ' => 'E02006648',
        '0JL' => 'E02004625',
        '0JN' => 'E02006648',
        '0JP' => 'E02006648',
        '0JQ' => 'E02006648',
        '0JR' => 'E02006648',
        '0JS' => 'E02006648',
        '0JT' => 'E02006648',
        '0JU' => 'E02006648',
        '0JW' => 'E02006648',
        '0JX' => 'E02006648',
        '0JY' => 'E02006648',
        '0JZ' => 'E02006648',
        '0LA' => 'E02006648',
        '0LB' => 'E02006648',
        '0LD' => 'E02006645',
        '0LE' => 'E02006648',
        '0LF' => 'E02006648',
        '0LG' => 'E02006648',
        '0LH' => 'E02006648',
        '0LJ' => 'E02006648',
        '0LL' => 'E02006648',
        '0LN' => 'E02006648',
        '0LP' => 'E02006648',
        '0LQ' => 'E02006648',
        '0LR' => 'E02006648',
        '0LS' => 'E02006648',
        '0LT' => 'E02006648',
        '0LU' => 'E02006648',
        '0LW' => 'E02006648',
        '0LX' => 'E02006648',
        '0LY' => 'E02006648',
        '0LZ' => 'E02006648',
        '0NA' => 'E02006648',
        '0NB' => 'E02006648',
        '0ND' => 'E02006648',
        '0NE' => 'E02006648',
        '0NF' => 'E02006648',
        '0NG' => 'E02006648',
        '0NH' => 'E02006648',
        '0NJ' => 'E02006648',
        '0NL' => 'E02006648',
        '0NN' => 'E02006648',
        '0NP' => 'E02006648',
        '0NQ' => 'E02006648',
        '0NR' => 'E02006648',
        '0NS' => 'E02006648',
        '0NT' => 'E02006648',
        '0NU' => 'E02006648',
        '0NW' => 'E02006648',
        '0NX' => 'E02006648',
        '0NY' => 'E02006648',
        '0NZ' => 'E02006648',
        '0PA' => 'E02006648',
        '0PB' => 'E02006648',
        '0PD' => 'E02006648',
        '0PE' => 'E02006648',
        '0PF' => 'E02006648',
        '0PG' => 'E02006648',
        '0PH' => 'E02006648',
        '0PJ' => 'E02006648',
        '0PL' => 'E02006648',
        '0PN' => 'E02006648',
        '0PP' => 'E02006648',
        '0PQ' => 'E02006648',
        '0PR' => 'E02006648',
        '0PS' => 'E02006648',
        '0PT' => 'E02006648',
        '0PU' => 'E02006648',
        '0PW' => 'E02006648',
        '0PX' => 'E02006648',
        '0PY' => 'E02006648',
        '0PZ' => 'E02006648',
        '0QA' => 'E02006648',
        '0QB' => 'E02006648',
        '0QD' => 'E02006645',
        '0QE' => 'E02006648',
        '0QH' => 'E02006645',
        '0QJ' => 'E02006645',
        '0QL' => 'E02006645',
        '0QN' => 'E02006645',
        '0QP' => 'E02006645',
        '0QQ' => 'E02006645',
        '0QR' => 'E02006645',
        '0QS' => 'E02006645',
        '0QU' => 'E02006648',
        '0QW' => 'E02006645',
        '0QX' => 'E02006645',
        '0QY' => 'E02006645',
        '0QZ' => 'E02006645',
        '0RA' => 'E02006645',
        '0RB' => 'E02006645',
        '0RD' => 'E02006648',
        '0RE' => 'E02006645',
        '0RF' => 'E02006645',
        '0RJ' => 'E02006645',
        '0RN' => 'E02006645',
        '0RP' => 'E02006645',
        '0RR' => 'E02006645',
        '0RS' => 'E02006648',
        '0RT' => 'E02006648',
        '0RU' => 'E02006645',
        '0RW' => 'E02006648',
        '0RX' => 'E02006650',
        '0RY' => 'E02006648',
        '0RZ' => 'E02006645',
        '0SA' => 'E02006648',
        '0SB' => 'E02006650',
        '0SD' => 'E02006648',
        '0SE' => 'E02006645',
        '0SF' => 'E02006645',
        '0SG' => 'E02006645',
        '0SH' => 'E02006648',
        '0SJ' => 'E02006645',
        '0SL' => 'E02006648',
        '0SN' => 'E02006645',
        '0SP' => 'E02006648',
        '0SQ' => 'E02006645',
        '0SS' => 'E02006645',
        '0SW' => 'E02006650',
        '0SZ' => 'E02006648',
        '0TA' => 'E02006645',
        '0TB' => 'E02006645',
        '0TD' => 'E02006648',
        '0TF' => 'E02006645',
        '0WA' => 'E02006645',
        '0WB' => 'E02006645',
        '0WT' => 'E02006645',
        '0WU' => 'E02006645',
        '0WW' => 'E02006645',
        '0WZ' => 'E02006645',
        '0XY' => 'E02006650',
        '0XZ' => 'E02006650',
        '0YA' => 'E02006645',
        '0YZ' => 'E02006645',
        '0ZJ' => 'E02006648',
        '0ZN' => 'E02006648',
        '0ZQ' => 'E02006645',
        '0ZU' => 'E02006645',
        '0ZX' => 'E02006648',
        '1AD' => 'E02006650',
        '1AE' => 'E02006650',
        '1AP' => 'E02006650',
        '1AR' => 'E02006645',
        '1AS' => 'E02006650',
        '1AT' => 'E02006645',
        '1AX' => 'E02006645',
        '1AY' => 'E02006645',
        '1AZ' => 'E02006645',
        '1BA' => 'E02006645',
        '1BB' => 'E02006650',
        '1BD' => 'E02006650',
        '1BE' => 'E02006650',
        '1BF' => 'E02006650',
        '1BG' => 'E02006650',
        '1BH' => 'E02006650',
        '1BJ' => 'E02006650',
        '1BL' => 'E02006650',
        '1BN' => 'E02006650',
        '1BP' => 'E02006650',
        '1BQ' => 'E02006650',
        '1BR' => 'E02006650',
        '1BS' => 'E02006650',
        '1BT' => 'E02006650',
        '1BU' => 'E02006650',
        '9AA' => 'E02006645',
        '9AB' => 'E02006645',
        '9AD' => 'E02006645',
        '9AE' => 'E02006645',
        '9AF' => 'E02006645',
        '9AG' => 'E02006645',
        '9AH' => 'E02006645',
        '9AJ' => 'E02006645',
        '9AL' => 'E02006645',
        '9AN' => 'E02006645',
        '9AP' => 'E02006645',
        '9AQ' => 'E02006645',
        '9AR' => 'E02006645',
        '9AS' => 'E02006645',
        '9AT' => 'E02006645',
        '9AU' => 'E02006645',
        '9AW' => 'E02006645',
        '9AX' => 'E02006645',
        '9AY' => 'E02006645',
        '9AZ' => 'E02006645',
        '9BA' => 'E02006645',
        '9BB' => 'E02006645',
        '9BD' => 'E02006645',
        '9BE' => 'E02006645',
        '9BF' => 'E02006650',
        '9BG' => 'E02006645',
        '9BH' => 'E02006645',
        '9BJ' => 'E02006645',
        '9BL' => 'E02006645',
        '9BN' => 'E02006645',
        '9BP' => 'E02006645',
        '9BQ' => 'E02006645',
        '9BS' => 'E02006645',
        '9BT' => 'E02006645',
        '9BU' => 'E02006645',
        '9BW' => 'E02006645',
        '9BX' => 'E02006645',
        '9BY' => 'E02006645',
        '9BZ' => 'E02006645',
        '9DA' => 'E02006645',
        '9DB' => 'E02006645',
        '9DD' => 'E02006645',
        '9DE' => 'E02006645',
        '9DF' => 'E02006647',
        '9DG' => 'E02006647',
        '9DH' => 'E02006647',
        '9DJ' => 'E02006647',
        '9DL' => 'E02006647',
        '9DN' => 'E02006647',
        '9DP' => 'E02006647',
        '9DQ' => 'E02006647',
        '9DR' => 'E02006647',
        '9DS' => 'E02006647',
        '9DT' => 'E02006647',
        '9DU' => 'E02006647',
        '9DW' => 'E02006647',
        '9DX' => 'E02006647',
        '9DY' => 'E02006647',
        '9DZ' => 'E02006647',
        '9EA' => 'E02006647',
        '9EB' => 'E02006647',
        '9ED' => 'E02006647',
        '9EE' => 'E02006645',
        '9EF' => 'E02006645',
        '9EG' => 'E02006645',
        '9EH' => 'E02006645',
        '9EJ' => 'E02006645',
        '9EL' => 'E02006645',
        '9EN' => 'E02006645',
        '9EP' => 'E02006645',
        '9EQ' => 'E02006645',
        '9ER' => 'E02006645',
        '9ES' => 'E02006645',
        '9ET' => 'E02006645',
        '9EU' => 'E02006645',
        '9EW' => 'E02006645',
        '9EX' => 'E02006645',
        '9EY' => 'E02006645',
        '9EZ' => 'E02006645',
        '9FA' => 'E02006650',
        '9FB' => 'E02006645',
        '9FD' => 'E02006647',
        '9FE' => 'E02006647',
        '9FF' => 'E02006645',
        '9FG' => 'E02006645',
        '9FH' => 'E02006648',
        '9FJ' => 'E02006648',
        '9FL' => 'E02006648',
        '9FN' => 'E02006648',
        '9FP' => 'E02006650',
        '9FQ' => 'E02006648',
        '9FR' => 'E02006645',
        '9FS' => 'E02006645',
        '9FT' => 'E02006647',
        '9FU' => 'E02006648',
        '9FW' => 'E02006645',
        '9FX' => 'E02006645',
        '9FY' => 'E02006645',
        '9FZ' => 'E02006645',
        '9GA' => 'E02006647',
        '9GB' => 'E02006645',
        '9GD' => 'E02006645',
        '9GE' => 'E02006645',
        '9GF' => 'E02006645',
        '9GG' => 'E02006648',
        '9GH' => 'E02006645',
        '9GJ' => 'E02006645',
        '9GL' => 'E02006647',
        '9GP' => 'E02006650',
        '9GT' => 'E02006645',
        '9GU' => 'E02006645',
        '9GW' => 'E02006645',
        '9GX' => 'E02006645',
        '9GY' => 'E02006645',
        '9GZ' => 'E02006645',
        '9HA' => 'E02006645',
        '9HB' => 'E02006645',
        '9HD' => 'E02006645',
        '9HE' => 'E02006645',
        '9HF' => 'E02006645',
        '9HG' => 'E02006645',
        '9HH' => 'E02006645',
        '9HJ' => 'E02006645',
        '9HL' => 'E02006645',
        '9HN' => 'E02006645',
        '9HP' => 'E02006645',
        '9HQ' => 'E02006647',
        '9HR' => 'E02006645',
        '9HS' => 'E02006645',
        '9HT' => 'E02006645',
        '9HU' => 'E02006647',
        '9HW' => 'E02006645',
        '9HX' => 'E02006645',
        '9HY' => 'E02006645',
        '9HZ' => 'E02006645',
        '9JA' => 'E02006648',
        '9JB' => 'E02006648',
        '9JD' => 'E02006648',
        '9JE' => 'E02006648',
        '9JF' => 'E02006648',
        '9JG' => 'E02006645',
        '9JH' => 'E02006648',
        '9JJ' => 'E02006648',
        '9JL' => 'E02006645',
        '9JN' => 'E02006645',
        '9JP' => 'E02006645',
        '9JQ' => 'E02006648',
        '9JR' => 'E02006645',
        '9JS' => 'E02006645',
        '9JT' => 'E02006645',
        '9JU' => 'E02006645',
        '9JW' => 'E02006645',
        '9JX' => 'E02006645',
        '9JY' => 'E02006647',
        '9JZ' => 'E02006647',
        '9LA' => 'E02006647',
        '9LB' => 'E02006647',
        '9LD' => 'E02006645',
        '9LE' => 'E02006647',
        '9LF' => 'E02006647',
        '9LG' => 'E02006647',
        '9LH' => 'E02006647',
        '9LJ' => 'E02006648',
        '9LL' => 'E02006647',
        '9LP' => 'E02006645',
        '9LQ' => 'E02006647',
        '9LR' => 'E02006647',
        '9LS' => 'E02006648',
        '9LT' => 'E02006648',
        '9LU' => 'E02006648',
        '9LX' => 'E02006648',
        '9LY' => 'E02006648',
        '9LZ' => 'E02006648',
        '9NA' => 'E02006648',
        '9NB' => 'E02006648',
        '9ND' => 'E02006647',
        '9NE' => 'E02006647',
        '9NF' => 'E02006647',
        '9NG' => 'E02006647',
        '9NH' => 'E02006647',
        '9NJ' => 'E02006647',
        '9NL' => 'E02006647',
        '9NN' => 'E02006647',
        '9NP' => 'E02006647',
        '9NQ' => 'E02006647',
        '9NR' => 'E02006647',
        '9NS' => 'E02006647',
        '9NT' => 'E02006647',
        '9NU' => 'E02006648',
        '9NW' => 'E02006647',
        '9NX' => 'E02006648',
        '9NY' => 'E02006648',
        '9NZ' => 'E02006648',
        '9PA' => 'E02006647',
        '9PB' => 'E02006647',
        '9PD' => 'E02006647',
        '9PE' => 'E02006647',
        '9PF' => 'E02006647',
        '9PG' => 'E02006647',
        '9PH' => 'E02006647',
        '9PJ' => 'E02006647',
        '9PL' => 'E02006647',
        '9PN' => 'E02006647',
        '9PP' => 'E02006647',
        '9PQ' => 'E02006647',
        '9PR' => 'E02006647',
        '9PS' => 'E02006647',
        '9PT' => 'E02006647',
        '9PU' => 'E02006647',
        '9PW' => 'E02006647',
        '9PX' => 'E02006647',
        '9PY' => 'E02006647',
        '9PZ' => 'E02006647',
        '9QA' => 'E02006647',
        '9QB' => 'E02006647',
        '9QD' => 'E02006647',
        '9QE' => 'E02006647',
        '9QF' => 'E02006647',
        '9QG' => 'E02006647',
        '9QH' => 'E02006647',
        '9QJ' => 'E02006647',
        '9QL' => 'E02006647',
        '9QN' => 'E02006647',
        '9QP' => 'E02006647',
        '9QQ' => 'E02006647',
        '9QR' => 'E02006647',
        '9QS' => 'E02006647',
        '9QT' => 'E02006647',
        '9QU' => 'E02006647',
        '9QW' => 'E02006647',
        '9QX' => 'E02006647',
        '9QY' => 'E02006647',
        '9QZ' => 'E02006647',
        '9RA' => 'E02006647',
        '9RB' => 'E02006647',
        '9RD' => 'E02006647',
        '9RE' => 'E02006647',
        '9RF' => 'E02006647',
        '9RG' => 'E02006647',
        '9RH' => 'E02006647',
        '9RJ' => 'E02006646',
        '9RL' => 'E02006646',
        '9RN' => 'E02006647',
        '9RP' => 'E02006647',
        '9RQ' => 'E02006647',
        '9RR' => 'E02006647',
        '9RS' => 'E02006648',
        '9RT' => 'E02006645',
        '9RU' => 'E02006647',
        '9RW' => 'E02006647',
        '9RX' => 'E02006647',
        '9RY' => 'E02006647',
        '9RZ' => 'E02006645',
        '9SA' => 'E02006645',
        '9SB' => 'E02006645',
        '9SD' => 'E02006645',
        '9SE' => 'E02006645',
        '9SF' => 'E02006645',
        '9SG' => 'E02006645',
        '9SH' => 'E02006645',
        '9SJ' => 'E02006645',
        '9SL' => 'E02006645',
        '9SN' => 'E02006645',
        '9SP' => 'E02006647',
        '9SQ' => 'E02006645',
        '9SR' => 'E02006645',
        '9SS' => 'E02006645',
        '9ST' => 'E02006645',
        '9SU' => 'E02006647',
        '9SW' => 'E02006645',
        '9SX' => 'E02006647',
        '9SY' => 'E02006645',
        '9SZ' => 'E02006645',
        '9TA' => 'E02006645',
        '9TB' => 'E02006645',
        '9TD' => 'E02006645',
        '9TE' => 'E02006645',
        '9TF' => 'E02006645',
        '9TG' => 'E02006645',
        '9TH' => 'E02006645',
        '9TJ' => 'E02006645',
        '9TL' => 'E02006645',
        '9TN' => 'E02006645',
        '9TP' => 'E02006645',
        '9TQ' => 'E02006645',
        '9TR' => 'E02006647',
        '9TS' => 'E02006647',
        '9TT' => 'E02006645',
        '9TU' => 'E02006645',
        '9TW' => 'E02006645',
        '9TX' => 'E02006645',
        '9TY' => 'E02006645',
        '9TZ' => 'E02006645',
        '9UA' => 'E02006645',
        '9UB' => 'E02006645',
        '9UD' => 'E02006645',
        '9UE' => 'E02006645',
        '9UF' => 'E02006645',
        '9UG' => 'E02006645',
        '9UH' => 'E02006647',
        '9UJ' => 'E02006645',
        '9UL' => 'E02006645',
        '9UN' => 'E02006645',
        '9UP' => 'E02006645',
        '9UQ' => 'E02006650',
        '9UR' => 'E02006645',
        '9US' => 'E02006645',
        '9UT' => 'E02006645',
        '9UU' => 'E02006647',
        '9UW' => 'E02006645',
        '9UX' => 'E02006645',
        '9UY' => 'E02006645',
        '9UZ' => 'E02006645',
        '9WA' => 'E02006645',
        '9WB' => 'E02006645',
        '9WD' => 'E02006645',
        '9WE' => 'E02006645',
        '9WF' => 'E02006645',
        '9WG' => 'E02006645',
        '9WH' => 'E02006645',
        '9WJ' => 'E02006650',
        '9WL' => 'E02006645',
        '9WN' => 'E02006645',
        '9WP' => 'E02006645',
        '9WQ' => 'E02006650',
        '9WR' => 'E02006645',
        '9WS' => 'E02006645',
        '9WT' => 'E02006645',
        '9WU' => 'E02006645',
        '9WW' => 'E02006645',
        '9WZ' => 'E02006645',
        '9XA' => 'E02006645',
        '9XB' => 'E02006645',
        '9XD' => 'E02006647',
        '9XE' => 'E02006647',
        '9XF' => 'E02006650',
        '9XG' => 'E02006647',
        '9XH' => 'E02006647',
        '9XJ' => 'E02006647',
        '9XL' => 'E02006647',
        '9XN' => 'E02006645',
        '9XP' => 'E02006645',
        '9XQ' => 'E02006647',
        '9XR' => 'E02006645',
        '9XS' => 'E02006645',
        '9XT' => 'E02006645',
        '9XU' => 'E02006645',
        '9XW' => 'E02006645',
        '9XX' => 'E02006647',
        '9XY' => 'E02006645',
        '9XZ' => 'E02006645',
        '9YA' => 'E02006645',
        '9YB' => 'E02006647',
        '9YD' => 'E02006647',
        '9YE' => 'E02006647',
        '9YF' => 'E02006645',
        '9YG' => 'E02006647',
        '9YH' => 'E02006645',
        '9YJ' => 'E02006647',
        '9YL' => 'E02006647',
        '9YN' => 'E02006645',
        '9YP' => 'E02006647',
        '9YQ' => 'E02006647',
        '9YR' => 'E02006647',
        '9YS' => 'E02006645',
        '9YT' => 'E02006645',
        '9YU' => 'E02006645',
        '9YW' => 'E02006645',
        '9YX' => 'E02006645',
        '9YY' => 'E02006647',
        '9ZA' => 'E02006645',
        '9ZB' => 'E02006645',
        '9ZD' => 'E02006645',
        '9ZE' => 'E02006645',
        '9ZF' => 'E02006650',
        '9ZG' => 'E02006645',
        '9ZH' => 'E02006647',
        '9ZJ' => 'E02006650',
        '9ZL' => 'E02006645',
        '9ZN' => 'E02006645',
        '9ZP' => 'E02006645',
        '9ZQ' => 'E02006645',
        '9ZR' => 'E02006645',
        '9ZS' => 'E02006645',
        '9ZT' => 'E02006645',
        '9ZU' => 'E02006650',
        '9ZW' => 'E02006645',
        '9ZX' => 'E02006645',
        '9ZY' => 'E02006645',
        '9ZZ' => 'E02006645',
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
