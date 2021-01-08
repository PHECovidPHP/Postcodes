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
final class TA7
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02006070',
        '0AB' => 'E02006070',
        '0AD' => 'E02006070',
        '0AE' => 'E02006074',
        '0AF' => 'E02006074',
        '0AG' => 'E02006074',
        '0AH' => 'E02006074',
        '0AJ' => 'E02006074',
        '0AL' => 'E02006074',
        '0AN' => 'E02006074',
        '0AP' => 'E02006074',
        '0AQ' => 'E02006074',
        '0AR' => 'E02006074',
        '0AS' => 'E02006074',
        '0AT' => 'E02006074',
        '0AU' => 'E02006074',
        '0AW' => 'E02006074',
        '0AX' => 'E02006074',
        '0AY' => 'E02006074',
        '0AZ' => 'E02006072',
        '0BA' => 'E02006074',
        '0BB' => 'E02006074',
        '0BD' => 'E02006074',
        '0BE' => 'E02006074',
        '0BF' => 'E02006069',
        '0BG' => 'E02006074',
        '0BH' => 'E02006074',
        '0BJ' => 'E02006074',
        '0BL' => 'E02006074',
        '0BN' => 'E02006074',
        '0BP' => 'E02006074',
        '0BQ' => 'E02006074',
        '0BS' => 'E02006074',
        '0BT' => 'E02006074',
        '0BU' => 'E02006074',
        '0BW' => 'E02006074',
        '0BX' => 'E02006074',
        '0BY' => 'E02006074',
        '0BZ' => 'E02006074',
        '0DA' => 'E02006074',
        '0DB' => 'E02006074',
        '0DD' => 'E02006074',
        '0DE' => 'E02006074',
        '0DF' => 'E02006074',
        '0DG' => 'E02006074',
        '0DH' => 'E02006074',
        '0DJ' => 'E02006074',
        '0DL' => 'E02006074',
        '0DN' => 'E02006074',
        '0DP' => 'E02006072',
        '0DQ' => 'E02006074',
        '0DR' => 'E02006072',
        '0DS' => 'E02006074',
        '0DT' => 'E02006074',
        '0DU' => 'E02006074',
        '0DW' => 'E02006072',
        '0DX' => 'E02006074',
        '0DY' => 'E02006074',
        '0DZ' => 'E02006072',
        '0EA' => 'E02006072',
        '0EB' => 'E02006072',
        '0ED' => 'E02006072',
        '0EE' => 'E02006072',
        '0EF' => 'E02006072',
        '0EG' => 'E02006072',
        '0EH' => 'E02006072',
        '0EJ' => 'E02006072',
        '0EL' => 'E02006072',
        '0EN' => 'E02006072',
        '0EP' => 'E02006072',
        '0EQ' => 'E02006072',
        '0ER' => 'E02006072',
        '0ES' => 'E02006072',
        '0ET' => 'E02006072',
        '0EU' => 'E02006072',
        '0EW' => 'E02006072',
        '0EX' => 'E02006072',
        '0EY' => 'E02006072',
        '0EZ' => 'E02006072',
        '0FA' => 'E02006103',
        '0FD' => 'E02006103',
        '0GZ' => 'E02006072',
        '0HA' => 'E02006072',
        '0HB' => 'E02006072',
        '0HD' => 'E02006072',
        '0HE' => 'E02006072',
        '0HF' => 'E02006072',
        '0HG' => 'E02006072',
        '0HH' => 'E02006072',
        '0HJ' => 'E02006072',
        '0HL' => 'E02006072',
        '0HN' => 'E02006072',
        '0HP' => 'E02006072',
        '0HQ' => 'E02006072',
        '0HR' => 'E02006072',
        '0HS' => 'E02006072',
        '0HT' => 'E02006072',
        '0HU' => 'E02006070',
        '0HW' => 'E02006072',
        '0HX' => 'E02006069',
        '0HY' => 'E02006070',
        '0HZ' => 'E02006070',
        '0JA' => 'E02006072',
        '0JB' => 'E02006072',
        '0JD' => 'E02006072',
        '0JE' => 'E02006072',
        '0JF' => 'E02006072',
        '0JG' => 'E02006072',
        '0JH' => 'E02006103',
        '0JJ' => 'E02006103',
        '0JL' => 'E02006103',
        '0JN' => 'E02006103',
        '0JP' => 'E02006078',
        '0JQ' => 'E02006103',
        '0JR' => 'E02006081',
        '0JS' => 'E02006072',
        '0JU' => 'E02006072',
        '0JW' => 'E02006078',
        '0JX' => 'E02006069',
        '0LA' => 'E02006072',
        '0LB' => 'E02006072',
        '0LD' => 'E02006072',
        '0LE' => 'E02006072',
        '0LF' => 'E02006072',
        '0LG' => 'E02006072',
        '0LH' => 'E02006072',
        '0LJ' => 'E02006072',
        '0LL' => 'E02006072',
        '0LN' => 'E02006072',
        '0LP' => 'E02006072',
        '0LQ' => 'E02006072',
        '0LR' => 'E02006072',
        '0LS' => 'E02006072',
        '0LT' => 'E02006072',
        '0LU' => 'E02006072',
        '0LW' => 'E02006072',
        '0LX' => 'E02006070',
        '0LY' => 'E02006074',
        '0LZ' => 'E02006072',
        '0NJ' => 'E02006072',
        '0NL' => 'E02006072',
        '0NN' => 'E02006072',
        '0NP' => 'E02006072',
        '0NR' => 'E02006072',
        '0NS' => 'E02006072',
        '0NT' => 'E02006072',
        '0NU' => 'E02006072',
        '0NW' => 'E02006072',
        '0NX' => 'E02006072',
        '0NY' => 'E02006072',
        '0NZ' => 'E02006072',
        '0PA' => 'E02006072',
        '0PB' => 'E02006072',
        '0PD' => 'E02006072',
        '0PE' => 'E02006072',
        '0PF' => 'E02006072',
        '0PG' => 'E02006072',
        '0PH' => 'E02006072',
        '0PJ' => 'E02006072',
        '0PL' => 'E02006072',
        '0PN' => 'E02006072',
        '0PQ' => 'E02006072',
        '0PT' => 'E02006072',
        '0PU' => 'E02006072',
        '0PX' => 'E02006072',
        '0PY' => 'E02006072',
        '0PZ' => 'E02006072',
        '0QA' => 'E02006072',
        '0QB' => 'E02006072',
        '0QD' => 'E02006072',
        '0QE' => 'E02006072',
        '0QF' => 'E02006072',
        '0QG' => 'E02006072',
        '0QH' => 'E02006072',
        '0QJ' => 'E02006072',
        '0QL' => 'E02006072',
        '0QN' => 'E02006072',
        '0QP' => 'E02006072',
        '0QQ' => 'E02006072',
        '0QR' => 'E02006072',
        '0QS' => 'E02006072',
        '0QT' => 'E02006072',
        '0QU' => 'E02006072',
        '0QW' => 'E02006072',
        '0QX' => 'E02006072',
        '0RA' => 'E02006103',
        '0RB' => 'E02006103',
        '0RD' => 'E02006103',
        '0RE' => 'E02006103',
        '0RF' => 'E02006103',
        '0RG' => 'E02006103',
        '0RH' => 'E02006103',
        '0RJ' => 'E02006103',
        '0RL' => 'E02006103',
        '0RN' => 'E02006103',
        '0RQ' => 'E02006072',
        '0RW' => 'E02006103',
        '0RX' => 'E02006103',
        '0RY' => 'E02006103',
        '0RZ' => 'E02006103',
        '0SA' => 'E02006103',
        '0SB' => 'E02006103',
        '0SD' => 'E02006074',
        '0SE' => 'E02006103',
        '0SF' => 'E02006103',
        '0SG' => 'E02006103',
        '0WG' => 'E02006069',
        '0XN' => 'E02006069',
        '0YR' => 'E02006072',
        '0YS' => 'E02006103',
        '0YT' => 'E02006072',
        '0YU' => 'E02006072',
        '0YW' => 'E02006103',
        '0YX' => 'E02006072',
        '0YY' => 'E02006103',
        '0YZ' => 'E02006069',
        '0ZQ' => 'E02006069',
        '8AA' => 'E02006066',
        '8AB' => 'E02006066',
        '8AD' => 'E02006066',
        '8AE' => 'E02006066',
        '8AF' => 'E02006066',
        '8AG' => 'E02006066',
        '8AH' => 'E02006066',
        '8AJ' => 'E02006066',
        '8AL' => 'E02006066',
        '8AN' => 'E02006066',
        '8AP' => 'E02006066',
        '8AQ' => 'E02006066',
        '8AR' => 'E02006066',
        '8AS' => 'E02006066',
        '8AT' => 'E02006066',
        '8AU' => 'E02006066',
        '8AW' => 'E02006066',
        '8AX' => 'E02006066',
        '8AY' => 'E02006066',
        '8AZ' => 'E02006066',
        '8BA' => 'E02006066',
        '8BB' => 'E02006066',
        '8BD' => 'E02006066',
        '8BE' => 'E02006066',
        '8BF' => 'E02006066',
        '8BG' => 'E02006066',
        '8BH' => 'E02006066',
        '8BJ' => 'E02006066',
        '8BL' => 'E02006066',
        '8BN' => 'E02006066',
        '8BP' => 'E02006066',
        '8BQ' => 'E02006066',
        '8BS' => 'E02006066',
        '8BT' => 'E02006066',
        '8BU' => 'E02006066',
        '8BW' => 'E02006066',
        '8BX' => 'E02006066',
        '8BY' => 'E02006066',
        '8BZ' => 'E02006066',
        '8DA' => 'E02006066',
        '8DB' => 'E02006066',
        '8DD' => 'E02006066',
        '8DE' => 'E02006066',
        '8DF' => 'E02006066',
        '8DG' => 'E02006066',
        '8DH' => 'E02006066',
        '8DJ' => 'E02006066',
        '8DL' => 'E02006066',
        '8DN' => 'E02006066',
        '8DP' => 'E02006066',
        '8DQ' => 'E02006066',
        '8DR' => 'E02006066',
        '8DS' => 'E02006066',
        '8DT' => 'E02006066',
        '8DU' => 'E02006066',
        '8DW' => 'E02006066',
        '8DX' => 'E02006066',
        '8DY' => 'E02006066',
        '8DZ' => 'E02006066',
        '8EA' => 'E02006066',
        '8EB' => 'E02006066',
        '8ED' => 'E02006066',
        '8EE' => 'E02006066',
        '8EF' => 'E02006066',
        '8EG' => 'E02006066',
        '8EH' => 'E02006066',
        '8EJ' => 'E02006066',
        '8EL' => 'E02006066',
        '8EN' => 'E02006066',
        '8EP' => 'E02006066',
        '8EQ' => 'E02006066',
        '8ER' => 'E02006066',
        '8ES' => 'E02006066',
        '8ET' => 'E02006066',
        '8EU' => 'E02006066',
        '8EW' => 'E02006066',
        '8EX' => 'E02006066',
        '8EY' => 'E02006066',
        '8EZ' => 'E02006066',
        '8FA' => 'E02006066',
        '8FB' => 'E02006072',
        '8FD' => 'E02006066',
        '8FE' => 'E02006072',
        '8FF' => 'E02006066',
        '8FG' => 'E02006066',
        '8FH' => 'E02006066',
        '8FJ' => 'E02006066',
        '8FL' => 'E02006066',
        '8FN' => 'E02006066',
        '8FP' => 'E02006066',
        '8FQ' => 'E02006066',
        '8HA' => 'E02006066',
        '8HB' => 'E02006066',
        '8HD' => 'E02006066',
        '8HE' => 'E02006066',
        '8HF' => 'E02006066',
        '8HG' => 'E02006066',
        '8HH' => 'E02006066',
        '8HJ' => 'E02006066',
        '8HL' => 'E02006066',
        '8HN' => 'E02006066',
        '8HP' => 'E02006066',
        '8HQ' => 'E02006066',
        '8HR' => 'E02006066',
        '8HS' => 'E02006066',
        '8HT' => 'E02006066',
        '8HU' => 'E02006066',
        '8HW' => 'E02006066',
        '8HX' => 'E02006066',
        '8HY' => 'E02006066',
        '8HZ' => 'E02006066',
        '8JA' => 'E02006066',
        '8JB' => 'E02006066',
        '8JD' => 'E02006066',
        '8JE' => 'E02006066',
        '8JF' => 'E02006066',
        '8JG' => 'E02006066',
        '8JH' => 'E02006066',
        '8JJ' => 'E02006066',
        '8JL' => 'E02006072',
        '8JN' => 'E02006072',
        '8JP' => 'E02006066',
        '8JQ' => 'E02006066',
        '8JR' => 'E02006072',
        '8JS' => 'E02006072',
        '8JT' => 'E02006072',
        '8JU' => 'E02006072',
        '8JW' => 'E02006072',
        '8JX' => 'E02006072',
        '8JY' => 'E02006072',
        '8JZ' => 'E02006072',
        '8LA' => 'E02006072',
        '8LB' => 'E02006072',
        '8LD' => 'E02006072',
        '8LE' => 'E02006072',
        '8LF' => 'E02006072',
        '8LG' => 'E02006072',
        '8LH' => 'E02006072',
        '8LJ' => 'E02006072',
        '8LL' => 'E02006072',
        '8LN' => 'E02006072',
        '8LP' => 'E02006072',
        '8LQ' => 'E02006072',
        '8LR' => 'E02006072',
        '8LS' => 'E02006072',
        '8LT' => 'E02006072',
        '8LU' => 'E02006066',
        '8LW' => 'E02006072',
        '8LX' => 'E02006066',
        '8LY' => 'E02006072',
        '8LZ' => 'E02006066',
        '8NA' => 'E02006066',
        '8NB' => 'E02006072',
        '8ND' => 'E02006072',
        '8NE' => 'E02006072',
        '8NF' => 'E02006072',
        '8NG' => 'E02006072',
        '8NH' => 'E02006072',
        '8NJ' => 'E02006072',
        '8NL' => 'E02006072',
        '8NN' => 'E02006072',
        '8NP' => 'E02006063',
        '8NQ' => 'E02006072',
        '8NR' => 'E02006063',
        '8NS' => 'E02006063',
        '8NT' => 'E02006072',
        '8NU' => 'E02006072',
        '8NW' => 'E02006072',
        '8NX' => 'E02006072',
        '8NY' => 'E02006072',
        '8NZ' => 'E02006070',
        '8PA' => 'E02006072',
        '8PB' => 'E02006072',
        '8PD' => 'E02006072',
        '8PE' => 'E02006070',
        '8PF' => 'E02006070',
        '8PG' => 'E02006072',
        '8PH' => 'E02006072',
        '8PJ' => 'E02006072',
        '8PL' => 'E02006072',
        '8PN' => 'E02006072',
        '8PP' => 'E02006072',
        '8PQ' => 'E02006072',
        '8PR' => 'E02006072',
        '8PS' => 'E02006072',
        '8PT' => 'E02006072',
        '8PU' => 'E02006072',
        '8PW' => 'E02006072',
        '8PX' => 'E02006072',
        '8PY' => 'E02006072',
        '8PZ' => 'E02006072',
        '8QA' => 'E02006072',
        '8QB' => 'E02006072',
        '8QD' => 'E02006072',
        '8QE' => 'E02006072',
        '8QF' => 'E02006070',
        '8QJ' => 'E02006070',
        '8QL' => 'E02006070',
        '8QN' => 'E02006070',
        '8QP' => 'E02006070',
        '8QQ' => 'E02006072',
        '8QR' => 'E02006072',
        '8QS' => 'E02006072',
        '8QT' => 'E02006072',
        '8QU' => 'E02006072',
        '8QW' => 'E02006070',
        '8QX' => 'E02006072',
        '8QY' => 'E02006072',
        '8QZ' => 'E02006072',
        '8RA' => 'E02006072',
        '8RB' => 'E02006072',
        '8RD' => 'E02006072',
        '8RE' => 'E02006072',
        '8RF' => 'E02006072',
        '8RG' => 'E02006072',
        '8RH' => 'E02006072',
        '8RJ' => 'E02006072',
        '8RL' => 'E02006072',
        '8RN' => 'E02006072',
        '8RP' => 'E02006072',
        '8RQ' => 'E02006072',
        '8RW' => 'E02006072',
        '8RY' => 'E02006072',
        '8WX' => 'E02006069',
        '8WY' => 'E02006069',
        '8WZ' => 'E02006069',
        '8YA' => 'E02006066',
        '8YN' => 'E02006069',
        '8YP' => 'E02006069',
        '8YQ' => 'E02006069',
        '8YR' => 'E02006066',
        '8YS' => 'E02006069',
        '8YT' => 'E02006069',
        '8YU' => 'E02006066',
        '8YW' => 'E02006066',
        '8YX' => 'E02006072',
        '8YY' => 'E02006066',
        '8YZ' => 'E02006069',
        '8ZX' => 'E02006069',
        '9AA' => 'E02006072',
        '9AB' => 'E02006072',
        '9AD' => 'E02006072',
        '9AE' => 'E02006072',
        '9AF' => 'E02006072',
        '9AG' => 'E02006072',
        '9AH' => 'E02006072',
        '9AJ' => 'E02006072',
        '9AL' => 'E02006072',
        '9AN' => 'E02006072',
        '9AP' => 'E02006072',
        '9AQ' => 'E02006072',
        '9AR' => 'E02006072',
        '9AS' => 'E02006072',
        '9AT' => 'E02006072',
        '9AU' => 'E02006072',
        '9AW' => 'E02006072',
        '9AX' => 'E02006072',
        '9AY' => 'E02006072',
        '9AZ' => 'E02006072',
        '9BA' => 'E02006072',
        '9BB' => 'E02006072',
        '9BD' => 'E02006072',
        '9BE' => 'E02006072',
        '9BF' => 'E02006072',
        '9BG' => 'E02006072',
        '9BH' => 'E02006072',
        '9BJ' => 'E02006072',
        '9BL' => 'E02006072',
        '9BN' => 'E02006072',
        '9BP' => 'E02006072',
        '9BQ' => 'E02006072',
        '9BS' => 'E02006072',
        '9BT' => 'E02006072',
        '9BU' => 'E02006072',
        '9BW' => 'E02006072',
        '9BX' => 'E02006072',
        '9BY' => 'E02006072',
        '9BZ' => 'E02006072',
        '9DA' => 'E02006072',
        '9DB' => 'E02006072',
        '9DD' => 'E02006072',
        '9DE' => 'E02006072',
        '9DF' => 'E02006072',
        '9DG' => 'E02006072',
        '9DH' => 'E02006072',
        '9DJ' => 'E02006072',
        '9DL' => 'E02006072',
        '9DN' => 'E02006072',
        '9DP' => 'E02006072',
        '9DQ' => 'E02006072',
        '9DR' => 'E02006072',
        '9DS' => 'E02006072',
        '9DT' => 'E02006072',
        '9DU' => 'E02006072',
        '9DW' => 'E02006072',
        '9DX' => 'E02006072',
        '9DY' => 'E02006072',
        '9DZ' => 'E02006072',
        '9EA' => 'E02006072',
        '9EB' => 'E02006072',
        '9ED' => 'E02006072',
        '9EE' => 'E02006072',
        '9EF' => 'E02006072',
        '9EG' => 'E02006072',
        '9EH' => 'E02006072',
        '9EJ' => 'E02006072',
        '9EL' => 'E02006072',
        '9EN' => 'E02006072',
        '9EP' => 'E02006072',
        '9EQ' => 'E02006072',
        '9ER' => 'E02006072',
        '9ES' => 'E02006072',
        '9ET' => 'E02006072',
        '9EU' => 'E02006072',
        '9EW' => 'E02006072',
        '9EX' => 'E02006072',
        '9HA' => 'E02006072',
        '9HB' => 'E02006072',
        '9HD' => 'E02006072',
        '9HE' => 'E02006072',
        '9HF' => 'E02006072',
        '9HG' => 'E02006072',
        '9HH' => 'E02006072',
        '9HJ' => 'E02006072',
        '9HL' => 'E02006072',
        '9HN' => 'E02006072',
        '9HP' => 'E02006072',
        '9HQ' => 'E02006072',
        '9HR' => 'E02006072',
        '9HS' => 'E02006072',
        '9HT' => 'E02006072',
        '9HU' => 'E02006072',
        '9HW' => 'E02006072',
        '9HX' => 'E02006072',
        '9HY' => 'E02006072',
        '9HZ' => 'E02006072',
        '9JA' => 'E02006072',
        '9JB' => 'E02006072',
        '9JD' => 'E02006069',
        '9JE' => 'E02006069',
        '9JF' => 'E02006072',
        '9JH' => 'E02006072',
        '9JJ' => 'E02006072',
        '9JL' => 'E02006072',
        '9JN' => 'E02006072',
        '9JP' => 'E02006072',
        '9JR' => 'E02006072',
        '9JS' => 'E02006072',
        '9JT' => 'E02006072',
        '9JU' => 'E02006072',
        '9JW' => 'E02006072',
        '9JX' => 'E02006072',
        '9JY' => 'E02006072',
        '9JZ' => 'E02006072',
        '9LA' => 'E02006072',
        '9LB' => 'E02006072',
        '9LD' => 'E02006072',
        '9LE' => 'E02006072',
        '9LF' => 'E02006072',
        '9LN' => 'E02006072',
        '9LP' => 'E02006072',
        '9LQ' => 'E02006072',
        '9LR' => 'E02006072',
        '9LS' => 'E02006072',
        '9LT' => 'E02006072',
        '9LU' => 'E02006072',
        '9LW' => 'E02006072',
        '9LX' => 'E02006072',
        '9LY' => 'E02006072',
        '9LZ' => 'E02006072',
        '9NA' => 'E02006072',
        '9NB' => 'E02006072',
        '9ND' => 'E02006072',
        '9NE' => 'E02006072',
        '9NF' => 'E02006072',
        '9NG' => 'E02006072',
        '9NH' => 'E02006072',
        '9NJ' => 'E02006072',
        '9NL' => 'E02006072',
        '9NN' => 'E02006072',
        '9NP' => 'E02006072',
        '9NQ' => 'E02006072',
        '9NR' => 'E02006072',
        '9NS' => 'E02006072',
        '9NT' => 'E02006072',
        '9NU' => 'E02006072',
        '9NW' => 'E02006072',
        '9NZ' => 'E02006072',
        '9PA' => 'E02006072',
        '9PB' => 'E02006072',
        '9PD' => 'E02006072',
        '9PE' => 'E02006072',
        '9PF' => 'E02006072',
        '9PG' => 'E02006072',
        '9PH' => 'E02006072',
        '9PJ' => 'E02006072',
        '9PL' => 'E02006072',
        '9PN' => 'E02006072',
        '9PP' => 'E02006072',
        '9PQ' => 'E02006072',
        '9PR' => 'E02006072',
        '9PS' => 'E02006072',
        '9PT' => 'E02006072',
        '9PU' => 'E02006072',
        '9PW' => 'E02006072',
        '9PX' => 'E02006072',
        '9PY' => 'E02006072',
        '9PZ' => 'E02006072',
        '9QA' => 'E02006072',
        '9QB' => 'E02006072',
        '9QD' => 'E02006072',
        '9QE' => 'E02006072',
        '9QF' => 'E02006072',
        '9QG' => 'E02006072',
        '9QH' => 'E02006072',
        '9QJ' => 'E02006072',
        '9QL' => 'E02006072',
        '9QN' => 'E02006072',
        '9QP' => 'E02006072',
        '9QQ' => 'E02006072',
        '9QR' => 'E02006072',
        '9QS' => 'E02006072',
        '9QT' => 'E02006072',
        '9QU' => 'E02006072',
        '9QW' => 'E02006072',
        '9QX' => 'E02006072',
        '9QY' => 'E02006072',
        '9QZ' => 'E02006072',
        '9RA' => 'E02006072',
        '9RB' => 'E02006072',
        '9RD' => 'E02006072',
        '9RY' => 'E02006072',
        '9RZ' => 'E02006072',
        '9WA' => 'E02006072',
        '9WJ' => 'E02006072',
        '9WY' => 'E02006069',
        '9WZ' => 'E02006069',
        '9XG' => 'E02006072',
        '9XJ' => 'E02006069',
        '9XN' => 'E02006069',
        '9XR' => 'E02006069',
        '9YN' => 'E02006069',
        '9YP' => 'E02006072',
        '9YQ' => 'E02006069',
        '9YR' => 'E02006069',
        '9YS' => 'E02006072',
        '9YT' => 'E02006072',
        '9YU' => 'E02006072',
        '9YW' => 'E02006069',
        '9YX' => 'E02006072',
        '9YY' => 'E02006072',
        '9YZ' => 'E02006069',
        '9ZX' => 'E02006069',
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
