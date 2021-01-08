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
final class TA21
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02006110',
        '0AB' => 'E02006110',
        '0AD' => 'E02006110',
        '0AE' => 'E02006110',
        '0AF' => 'E02006110',
        '0AG' => 'E02006110',
        '0AH' => 'E02006110',
        '0AJ' => 'E02006110',
        '0AL' => 'E02006110',
        '0AN' => 'E02006110',
        '0AP' => 'E02006110',
        '0AQ' => 'E02006110',
        '0AR' => 'E02006110',
        '0AS' => 'E02006110',
        '0AT' => 'E02006110',
        '0AU' => 'E02006110',
        '0AW' => 'E02006110',
        '0AX' => 'E02006110',
        '0AY' => 'E02006110',
        '0AZ' => 'E02006110',
        '0BA' => 'E02006110',
        '0BB' => 'E02006110',
        '0BD' => 'E02006110',
        '0BE' => 'E02006110',
        '0BF' => 'E02006111',
        '0BG' => 'E02006110',
        '0BH' => 'E02006111',
        '0BJ' => 'E02006111',
        '0BL' => 'E02006111',
        '0BN' => 'E02006111',
        '0BP' => 'E02006111',
        '0BQ' => 'E02006110',
        '0BS' => 'E02006111',
        '0BT' => 'E02006111',
        '0BU' => 'E02006111',
        '0BW' => 'E02006111',
        '0BX' => 'E02006111',
        '0BY' => 'E02006111',
        '0BZ' => 'E02006111',
        '0DA' => 'E02006111',
        '0DB' => 'E02006111',
        '0DD' => 'E02006111',
        '0DE' => 'E02006110',
        '0DF' => 'E02006110',
        '0DG' => 'E02006111',
        '0DH' => 'E02006110',
        '0DJ' => 'E02006111',
        '0DL' => 'E02004164',
        '0DN' => 'E02006111',
        '0DP' => 'E02006111',
        '0DQ' => 'E02006110',
        '0DR' => 'E02006111',
        '0DS' => 'E02006111',
        '0DT' => 'E02006111',
        '0DU' => 'E02006111',
        '0DW' => 'E02006111',
        '0DX' => 'E02006111',
        '0DY' => 'E02006111',
        '0DZ' => 'E02006111',
        '0EA' => 'E02006111',
        '0EB' => 'E02006111',
        '0ED' => 'E02006111',
        '0EE' => 'E02006111',
        '0EF' => 'E02006111',
        '0EG' => 'E02006111',
        '0EH' => 'E02006111',
        '0EJ' => 'E02006111',
        '0EL' => 'E02006111',
        '0EN' => 'E02006111',
        '0EP' => 'E02006111',
        '0EQ' => 'E02006111',
        '0ER' => 'E02006111',
        '0EW' => 'E02006111',
        '0EZ' => 'E02006110',
        '0HA' => 'E02006111',
        '0HB' => 'E02006111',
        '0HD' => 'E02006111',
        '0HE' => 'E02006111',
        '0HF' => 'E02006111',
        '0HG' => 'E02006101',
        '0HH' => 'E02006101',
        '0HJ' => 'E02006101',
        '0HL' => 'E02006101',
        '0HN' => 'E02006101',
        '0HP' => 'E02006101',
        '0HQ' => 'E02004164',
        '0HR' => 'E02006101',
        '0HS' => 'E02006101',
        '0HT' => 'E02006101',
        '0HU' => 'E02006101',
        '0HW' => 'E02006101',
        '0HX' => 'E02006101',
        '0HY' => 'E02006101',
        '0HZ' => 'E02006101',
        '0JA' => 'E02006101',
        '0JB' => 'E02006101',
        '0JD' => 'E02006101',
        '0JJ' => 'E02006101',
        '0JL' => 'E02006101',
        '0JN' => 'E02006101',
        '0JP' => 'E02006101',
        '0JR' => 'E02006101',
        '0JS' => 'E02006111',
        '0JT' => 'E02004164',
        '0JU' => 'E02006101',
        '0JW' => 'E02006101',
        '0JX' => 'E02006101',
        '0JY' => 'E02004164',
        '0JZ' => 'E02006111',
        '0LE' => 'E02006101',
        '0LF' => 'E02006101',
        '0LG' => 'E02006101',
        '0LH' => 'E02006101',
        '0LJ' => 'E02006101',
        '0LP' => 'E02006111',
        '0LQ' => 'E02006101',
        '0LR' => 'E02004164',
        '0LS' => 'E02006111',
        '0LT' => 'E02006111',
        '0LU' => 'E02006111',
        '0LX' => 'E02004164',
        '0LY' => 'E02004164',
        '0LZ' => 'E02006101',
        '0NA' => 'E02004164',
        '0NB' => 'E02004164',
        '0ND' => 'E02004164',
        '0NE' => 'E02004164',
        '0NF' => 'E02004164',
        '0NG' => 'E02004164',
        '0NH' => 'E02004164',
        '0NJ' => 'E02004164',
        '0NL' => 'E02004164',
        '0NN' => 'E02004164',
        '0NP' => 'E02004164',
        '0NQ' => 'E02004164',
        '0NR' => 'E02004164',
        '0NS' => 'E02004164',
        '0NT' => 'E02004164',
        '0NW' => 'E02004164',
        '0PA' => 'E02004164',
        '0PB' => 'E02004164',
        '0PD' => 'E02004164',
        '0PE' => 'E02004164',
        '0PF' => 'E02004164',
        '0PG' => 'E02004164',
        '0PH' => 'E02004164',
        '0PJ' => 'E02004164',
        '0PL' => 'E02004164',
        '0PN' => 'E02004164',
        '0PP' => 'E02004164',
        '0PQ' => 'E02004164',
        '0PR' => 'E02004164',
        '0PS' => 'E02004164',
        '0PT' => 'E02004164',
        '0PU' => 'E02004164',
        '0PW' => 'E02004164',
        '0PX' => 'E02004164',
        '0PY' => 'E02004164',
        '0PZ' => 'E02004164',
        '0QA' => 'E02004164',
        '0QB' => 'E02004164',
        '0QD' => 'E02004164',
        '0QE' => 'E02006111',
        '0QJ' => 'E02006111',
        '0QL' => 'E02006111',
        '0QN' => 'E02006111',
        '0QP' => 'E02006111',
        '0QR' => 'E02006111',
        '0QS' => 'E02006111',
        '0QT' => 'E02006111',
        '0QU' => 'E02006111',
        '0QW' => 'E02006111',
        '0QX' => 'E02006111',
        '0QY' => 'E02006111',
        '0QZ' => 'E02006111',
        '0RA' => 'E02006111',
        '0RB' => 'E02006111',
        '0RD' => 'E02006111',
        '0RE' => 'E02006111',
        '0RF' => 'E02006111',
        '0RG' => 'E02006111',
        '0RH' => 'E02006111',
        '0RJ' => 'E02006111',
        '0RL' => 'E02006111',
        '0RN' => 'E02006111',
        '0RP' => 'E02006111',
        '0RQ' => 'E02006111',
        '0RR' => 'E02006111',
        '0RS' => 'E02006111',
        '0RT' => 'E02006101',
        '0RU' => 'E02006111',
        '0RW' => 'E02006111',
        '0RX' => 'E02006101',
        '0RY' => 'E02006101',
        '0RZ' => 'E02006101',
        '0SA' => 'E02006101',
        '0SB' => 'E02006111',
        '0SD' => 'E02006111',
        '0WA' => 'E02006110',
        '0WG' => 'E02006110',
        '0XR' => 'E02006110',
        '0YJ' => 'E02006110',
        '0YN' => 'E02006110',
        '0YP' => 'E02006110',
        '0YQ' => 'E02006111',
        '0YR' => 'E02006111',
        '0YS' => 'E02006111',
        '0YT' => 'E02006110',
        '0YU' => 'E02006110',
        '0YX' => 'E02006111',
        '0YY' => 'E02006111',
        '0YZ' => 'E02006110',
        '0ZD' => 'E02006110',
        '0ZN' => 'E02006110',
        '0ZQ' => 'E02006110',
        '0ZX' => 'E02006110',
        '1AA' => 'E02006110',
        '1AB' => 'E02006110',
        '1AD' => 'E02006110',
        '1AE' => 'E02006110',
        '1AF' => 'E02006110',
        '1AG' => 'E02006110',
        '1AH' => 'E02006110',
        '1AJ' => 'E02006110',
        '1AL' => 'E02006110',
        '1AN' => 'E02006110',
        '1AP' => 'E02006110',
        '1AQ' => 'E02006110',
        '1AR' => 'E02006110',
        '1AS' => 'E02006110',
        '1AT' => 'E02006110',
        '1AU' => 'E02006110',
        '1AW' => 'E02006110',
        '1AX' => 'E02006110',
        '1AY' => 'E02006110',
        '1BB' => 'E02006110',
        '1BD' => 'E02006110',
        '1BE' => 'E02006110',
        '1BF' => 'E02006110',
        '1BG' => 'E02006110',
        '1BH' => 'E02006110',
        '1BJ' => 'E02006110',
        '1BL' => 'E02006110',
        '1BN' => 'E02006110',
        '1BP' => 'E02006110',
        '1BQ' => 'E02006110',
        '1BR' => 'E02006110',
        '1BS' => 'E02006110',
        '1BT' => 'E02006110',
        '1BU' => 'E02006110',
        '1BW' => 'E02006110',
        '1BX' => 'E02006110',
        '1BY' => 'E02006110',
        '1BZ' => 'E02006110',
        '1DA' => 'E02006110',
        '8AA' => 'E02006110',
        '8AB' => 'E02006110',
        '8AD' => 'E02006110',
        '8AE' => 'E02006110',
        '8AF' => 'E02006110',
        '8AG' => 'E02006110',
        '8AH' => 'E02006110',
        '8AJ' => 'E02006110',
        '8AL' => 'E02006110',
        '8AN' => 'E02006110',
        '8AP' => 'E02006110',
        '8AQ' => 'E02006110',
        '8AR' => 'E02006110',
        '8AS' => 'E02006110',
        '8AT' => 'E02006110',
        '8AU' => 'E02006110',
        '8AW' => 'E02006110',
        '8AX' => 'E02006110',
        '8AY' => 'E02006110',
        '8AZ' => 'E02006110',
        '8BA' => 'E02006110',
        '8BB' => 'E02006110',
        '8BD' => 'E02006110',
        '8BE' => 'E02006110',
        '8BF' => 'E02006110',
        '8BG' => 'E02006110',
        '8BH' => 'E02006110',
        '8BJ' => 'E02006110',
        '8BL' => 'E02006110',
        '8BN' => 'E02006110',
        '8BP' => 'E02006110',
        '8BQ' => 'E02006110',
        '8BS' => 'E02006110',
        '8BT' => 'E02006110',
        '8BU' => 'E02006110',
        '8BW' => 'E02006110',
        '8BX' => 'E02006110',
        '8BY' => 'E02006110',
        '8BZ' => 'E02006110',
        '8DA' => 'E02006110',
        '8DB' => 'E02006111',
        '8DD' => 'E02006110',
        '8DE' => 'E02006110',
        '8DF' => 'E02006110',
        '8DG' => 'E02006110',
        '8DH' => 'E02006110',
        '8DJ' => 'E02006110',
        '8DL' => 'E02006110',
        '8DN' => 'E02006110',
        '8DP' => 'E02006110',
        '8DQ' => 'E02006110',
        '8DR' => 'E02006110',
        '8DS' => 'E02006110',
        '8DT' => 'E02006110',
        '8DU' => 'E02006111',
        '8DW' => 'E02006110',
        '8DX' => 'E02006111',
        '8DY' => 'E02006111',
        '8DZ' => 'E02006111',
        '8EA' => 'E02006111',
        '8EB' => 'E02006111',
        '8ED' => 'E02006111',
        '8EE' => 'E02006111',
        '8EF' => 'E02006111',
        '8EG' => 'E02006111',
        '8EH' => 'E02006111',
        '8EJ' => 'E02006111',
        '8EL' => 'E02006111',
        '8EN' => 'E02006111',
        '8EP' => 'E02006111',
        '8EQ' => 'E02006111',
        '8ER' => 'E02006111',
        '8ES' => 'E02006111',
        '8ET' => 'E02006111',
        '8EU' => 'E02006111',
        '8EW' => 'E02006111',
        '8EX' => 'E02006111',
        '8EY' => 'E02006111',
        '8EZ' => 'E02006111',
        '8FA' => 'E02006110',
        '8FB' => 'E02006110',
        '8FD' => 'E02006110',
        '8FE' => 'E02006110',
        '8FF' => 'E02006110',
        '8FG' => 'E02006110',
        '8FH' => 'E02006110',
        '8FJ' => 'E02006110',
        '8FL' => 'E02006110',
        '8FN' => 'E02006110',
        '8FP' => 'E02006110',
        '8FQ' => 'E02006110',
        '8HA' => 'E02006110',
        '8HB' => 'E02006110',
        '8HN' => 'E02006110',
        '8HP' => 'E02006110',
        '8HR' => 'E02006110',
        '8HS' => 'E02006110',
        '8HT' => 'E02006110',
        '8HU' => 'E02006110',
        '8HW' => 'E02006110',
        '8HX' => 'E02006110',
        '8HY' => 'E02006110',
        '8HZ' => 'E02006110',
        '8JA' => 'E02006110',
        '8JB' => 'E02006110',
        '8JD' => 'E02006110',
        '8JF' => 'E02006110',
        '8JG' => 'E02006110',
        '8JH' => 'E02006110',
        '8JJ' => 'E02006110',
        '8JL' => 'E02006110',
        '8JN' => 'E02006110',
        '8JQ' => 'E02006110',
        '8JT' => 'E02006110',
        '8JU' => 'E02006110',
        '8JW' => 'E02006110',
        '8JX' => 'E02006110',
        '8JY' => 'E02006110',
        '8JZ' => 'E02006110',
        '8LA' => 'E02006110',
        '8LB' => 'E02006110',
        '8LD' => 'E02006110',
        '8LE' => 'E02006110',
        '8LF' => 'E02006110',
        '8LG' => 'E02006110',
        '8LH' => 'E02006110',
        '8LJ' => 'E02006110',
        '8LL' => 'E02006110',
        '8LQ' => 'E02006110',
        '8LR' => 'E02006110',
        '8LS' => 'E02006110',
        '8LT' => 'E02006110',
        '8LU' => 'E02006110',
        '8LX' => 'E02006110',
        '8LY' => 'E02006110',
        '8LZ' => 'E02006110',
        '8NA' => 'E02006110',
        '8NB' => 'E02006110',
        '8ND' => 'E02006110',
        '8NE' => 'E02006110',
        '8NF' => 'E02006110',
        '8NG' => 'E02006110',
        '8NH' => 'E02006110',
        '8NJ' => 'E02006110',
        '8NL' => 'E02006110',
        '8NN' => 'E02006110',
        '8NP' => 'E02006110',
        '8NQ' => 'E02006110',
        '8NR' => 'E02006110',
        '8NS' => 'E02006110',
        '8NT' => 'E02006111',
        '8NU' => 'E02006111',
        '8NW' => 'E02006111',
        '8NX' => 'E02006111',
        '8NY' => 'E02006111',
        '8NZ' => 'E02006111',
        '8PA' => 'E02006111',
        '8PB' => 'E02006111',
        '8PD' => 'E02006111',
        '8PE' => 'E02006111',
        '8PF' => 'E02006111',
        '8PG' => 'E02006111',
        '8PH' => 'E02006110',
        '8PJ' => 'E02006111',
        '8PL' => 'E02006111',
        '8PN' => 'E02006111',
        '8PP' => 'E02006111',
        '8PQ' => 'E02006110',
        '8PR' => 'E02006111',
        '8PS' => 'E02006111',
        '8PT' => 'E02006111',
        '8PU' => 'E02006111',
        '8PW' => 'E02006110',
        '8PX' => 'E02006111',
        '8PY' => 'E02006111',
        '8PZ' => 'E02006111',
        '8QA' => 'E02006111',
        '8QB' => 'E02006111',
        '8QD' => 'E02006111',
        '8QE' => 'E02006111',
        '8QF' => 'E02006111',
        '8QG' => 'E02006111',
        '8QH' => 'E02006110',
        '8QJ' => 'E02006111',
        '8QP' => 'E02006110',
        '8QQ' => 'E02006110',
        '8QR' => 'E02006110',
        '8QS' => 'E02006110',
        '8QT' => 'E02006110',
        '8QU' => 'E02006110',
        '8QW' => 'E02006110',
        '8QX' => 'E02006110',
        '8QY' => 'E02006110',
        '8QZ' => 'E02006110',
        '8RA' => 'E02006110',
        '8RB' => 'E02006110',
        '8RD' => 'E02006110',
        '8RE' => 'E02006110',
        '8RF' => 'E02006110',
        '8RG' => 'E02006110',
        '8RH' => 'E02006110',
        '8RJ' => 'E02006110',
        '8RL' => 'E02006110',
        '8RN' => 'E02006110',
        '8RP' => 'E02006110',
        '8RQ' => 'E02006110',
        '8RR' => 'E02006110',
        '8RS' => 'E02006110',
        '8RT' => 'E02006110',
        '8RU' => 'E02006110',
        '8RW' => 'E02006110',
        '8RX' => 'E02006110',
        '8RY' => 'E02006110',
        '8RZ' => 'E02006110',
        '8SA' => 'E02006110',
        '8SB' => 'E02006110',
        '8SD' => 'E02006110',
        '8SE' => 'E02006110',
        '8SF' => 'E02006110',
        '8SG' => 'E02006110',
        '8SN' => 'E02006110',
        '8SQ' => 'E02006110',
        '8SR' => 'E02006111',
        '8SS' => 'E02006110',
        '8ST' => 'E02006111',
        '8SU' => 'E02006110',
        '8SW' => 'E02006110',
        '8SX' => 'E02006110',
        '8SY' => 'E02006110',
        '8SZ' => 'E02006110',
        '8TA' => 'E02006110',
        '8TB' => 'E02006110',
        '8TD' => 'E02006110',
        '8TE' => 'E02006110',
        '8TF' => 'E02006110',
        '8TG' => 'E02006110',
        '8TZ' => 'E02006110',
        '8WA' => 'E02006110',
        '8WD' => 'E02006110',
        '8WG' => 'E02006110',
        '8XZ' => 'E02006110',
        '8YA' => 'E02006111',
        '8YB' => 'E02006110',
        '8YD' => 'E02006110',
        '8YF' => 'E02006110',
        '8YG' => 'E02006110',
        '8YH' => 'E02006110',
        '8YJ' => 'E02006110',
        '8YL' => 'E02006110',
        '8YN' => 'E02006110',
        '8YP' => 'E02006110',
        '8YQ' => 'E02006110',
        '8YR' => 'E02006110',
        '8YS' => 'E02006110',
        '8YT' => 'E02006111',
        '8YU' => 'E02006111',
        '8YW' => 'E02006110',
        '8YX' => 'E02006110',
        '8YY' => 'E02006111',
        '8YZ' => 'E02006110',
        '8ZD' => 'E02006111',
        '8ZE' => 'E02006110',
        '8ZN' => 'E02006110',
        '8ZQ' => 'E02006110',
        '8ZX' => 'E02006110',
        '9AA' => 'E02006110',
        '9AB' => 'E02006110',
        '9AD' => 'E02006110',
        '9AE' => 'E02006110',
        '9AF' => 'E02006110',
        '9AG' => 'E02006110',
        '9AH' => 'E02006111',
        '9AJ' => 'E02006111',
        '9AL' => 'E02006111',
        '9AN' => 'E02006111',
        '9AP' => 'E02006111',
        '9AQ' => 'E02006111',
        '9AR' => 'E02006111',
        '9AS' => 'E02006111',
        '9AT' => 'E02006111',
        '9AU' => 'E02006111',
        '9AW' => 'E02006111',
        '9AX' => 'E02006111',
        '9AY' => 'E02006111',
        '9AZ' => 'E02006111',
        '9BA' => 'E02006111',
        '9BB' => 'E02006111',
        '9BD' => 'E02006111',
        '9BE' => 'E02006111',
        '9BF' => 'E02006111',
        '9BG' => 'E02006111',
        '9BH' => 'E02006110',
        '9BJ' => 'E02006110',
        '9BL' => 'E02006111',
        '9BN' => 'E02006110',
        '9BP' => 'E02006110',
        '9BQ' => 'E02006110',
        '9BS' => 'E02006111',
        '9BT' => 'E02006111',
        '9BU' => 'E02006111',
        '9BW' => 'E02006110',
        '9BX' => 'E02006111',
        '9BY' => 'E02006111',
        '9BZ' => 'E02006111',
        '9DA' => 'E02006111',
        '9DB' => 'E02006111',
        '9DD' => 'E02006111',
        '9DE' => 'E02006111',
        '9DF' => 'E02006111',
        '9DG' => 'E02006111',
        '9DH' => 'E02006111',
        '9DJ' => 'E02006111',
        '9DL' => 'E02006111',
        '9DN' => 'E02006111',
        '9DP' => 'E02006111',
        '9DQ' => 'E02006111',
        '9DR' => 'E02006111',
        '9DS' => 'E02006111',
        '9DT' => 'E02006111',
        '9DU' => 'E02006111',
        '9DW' => 'E02006111',
        '9DX' => 'E02006111',
        '9DY' => 'E02006111',
        '9DZ' => 'E02006111',
        '9EA' => 'E02006111',
        '9EB' => 'E02006111',
        '9ED' => 'E02006110',
        '9EE' => 'E02006110',
        '9EF' => 'E02006110',
        '9EG' => 'E02006110',
        '9EH' => 'E02006110',
        '9EJ' => 'E02006110',
        '9EL' => 'E02006110',
        '9EN' => 'E02006110',
        '9EP' => 'E02006110',
        '9EQ' => 'E02006110',
        '9ER' => 'E02006110',
        '9ES' => 'E02006110',
        '9ET' => 'E02006110',
        '9EU' => 'E02006110',
        '9EW' => 'E02006110',
        '9EX' => 'E02006110',
        '9EY' => 'E02006110',
        '9EZ' => 'E02006110',
        '9FA' => 'E02006110',
        '9FB' => 'E02006110',
        '9FD' => 'E02006111',
        '9FE' => 'E02006110',
        '9FF' => 'E02006110',
        '9FG' => 'E02006110',
        '9FH' => 'E02006110',
        '9FJ' => 'E02006111',
        '9FL' => 'E02006111',
        '9FN' => 'E02006110',
        '9FP' => 'E02006111',
        '9FQ' => 'E02006110',
        '9FR' => 'E02006111',
        '9FW' => 'E02006111',
        '9FX' => 'E02006111',
        '9GB' => 'E02006111',
        '9GN' => 'E02006111',
        '9HA' => 'E02006110',
        '9HB' => 'E02006110',
        '9HG' => 'E02006110',
        '9HH' => 'E02006111',
        '9HJ' => 'E02006111',
        '9HL' => 'E02006111',
        '9HN' => 'E02006110',
        '9HP' => 'E02006111',
        '9HQ' => 'E02006110',
        '9HR' => 'E02006111',
        '9HS' => 'E02006111',
        '9HT' => 'E02006111',
        '9HU' => 'E02006111',
        '9HW' => 'E02006111',
        '9HX' => 'E02006111',
        '9HY' => 'E02006111',
        '9HZ' => 'E02006111',
        '9JA' => 'E02006111',
        '9JB' => 'E02006111',
        '9JD' => 'E02006111',
        '9JE' => 'E02006111',
        '9JF' => 'E02006111',
        '9JG' => 'E02006111',
        '9JH' => 'E02006111',
        '9JJ' => 'E02006111',
        '9JL' => 'E02006111',
        '9JN' => 'E02006111',
        '9JP' => 'E02006111',
        '9JQ' => 'E02006111',
        '9JR' => 'E02006111',
        '9JS' => 'E02006111',
        '9JT' => 'E02006111',
        '9JU' => 'E02006111',
        '9JW' => 'E02006111',
        '9JX' => 'E02006111',
        '9JY' => 'E02006111',
        '9JZ' => 'E02006111',
        '9LA' => 'E02006111',
        '9LB' => 'E02006111',
        '9LD' => 'E02006111',
        '9LE' => 'E02006111',
        '9LF' => 'E02006111',
        '9LG' => 'E02006111',
        '9LH' => 'E02006111',
        '9LJ' => 'E02006111',
        '9LL' => 'E02006111',
        '9LN' => 'E02006111',
        '9LP' => 'E02006112',
        '9LQ' => 'E02006111',
        '9LR' => 'E02006111',
        '9LS' => 'E02006111',
        '9LT' => 'E02006109',
        '9LU' => 'E02006109',
        '9LW' => 'E02006112',
        '9LX' => 'E02006111',
        '9LY' => 'E02006109',
        '9LZ' => 'E02006111',
        '9NA' => 'E02006111',
        '9NB' => 'E02006111',
        '9ND' => 'E02006111',
        '9NE' => 'E02006111',
        '9NH' => 'E02006110',
        '9NJ' => 'E02006111',
        '9NL' => 'E02006111',
        '9NN' => 'E02006111',
        '9NP' => 'E02006111',
        '9NQ' => 'E02006111',
        '9NR' => 'E02006111',
        '9NS' => 'E02006111',
        '9NT' => 'E02006111',
        '9NU' => 'E02006111',
        '9NW' => 'E02006111',
        '9NX' => 'E02006111',
        '9NY' => 'E02006111',
        '9NZ' => 'E02006111',
        '9PA' => 'E02004166',
        '9PB' => 'E02006111',
        '9PD' => 'E02006111',
        '9PE' => 'E02006111',
        '9PF' => 'E02006111',
        '9PG' => 'E02006111',
        '9PH' => 'E02006111',
        '9PJ' => 'E02006111',
        '9PL' => 'E02006111',
        '9PN' => 'E02006111',
        '9PP' => 'E02006111',
        '9PQ' => 'E02006111',
        '9PR' => 'E02006111',
        '9PS' => 'E02006110',
        '9PT' => 'E02006110',
        '9PU' => 'E02006110',
        '9PW' => 'E02006111',
        '9PX' => 'E02006111',
        '9PY' => 'E02006111',
        '9PZ' => 'E02006111',
        '9QA' => 'E02006111',
        '9QB' => 'E02006111',
        '9QD' => 'E02006111',
        '9QE' => 'E02006111',
        '9QF' => 'E02006111',
        '9QG' => 'E02006111',
        '9QH' => 'E02006111',
        '9QJ' => 'E02006111',
        '9QL' => 'E02006111',
        '9QN' => 'E02006111',
        '9QP' => 'E02006111',
        '9QQ' => 'E02006111',
        '9QR' => 'E02006111',
        '9QS' => 'E02006111',
        '9QT' => 'E02006111',
        '9QU' => 'E02006111',
        '9QW' => 'E02006111',
        '9QX' => 'E02004166',
        '9QY' => 'E02004166',
        '9QZ' => 'E02004166',
        '9RA' => 'E02004166',
        '9RB' => 'E02006111',
        '9RD' => 'E02006111',
        '9RE' => 'E02004166',
        '9RF' => 'E02006111',
        '9RL' => 'E02006111',
        '9RN' => 'E02006111',
        '9RS' => 'E02006111',
        '9RT' => 'E02006111',
        '9RU' => 'E02006111',
        '9RW' => 'E02006111',
        '9RX' => 'E02006111',
        '9RY' => 'E02006111',
        '9RZ' => 'E02006111',
        '9SZ' => 'E02006111',
        '9WA' => 'E02006110',
        '9WG' => 'E02006111',
        '9WZ' => 'E02006110',
        '9XA' => 'E02006110',
        '9XG' => 'E02006111',
        '9YA' => 'E02006110',
        '9YB' => 'E02006110',
        '9YQ' => 'E02006110',
        '9YR' => 'E02006110',
        '9YS' => 'E02006110',
        '9YT' => 'E02006110',
        '9YU' => 'E02006111',
        '9YW' => 'E02006110',
        '9YX' => 'E02006110',
        '9YY' => 'E02006111',
        '9YZ' => 'E02006111',
        '9ZQ' => 'E02006110',
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
