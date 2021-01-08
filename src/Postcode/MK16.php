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
final class MK16
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02003475',
        '0AB' => 'E02003462',
        '0AD' => 'E02003462',
        '0AE' => 'E02003462',
        '0AF' => 'E02003461',
        '0AG' => 'E02003462',
        '0AH' => 'E02003461',
        '0AJ' => 'E02003461',
        '0AL' => 'E02003461',
        '0AN' => 'E02003461',
        '0AP' => 'E02003461',
        '0AQ' => 'E02003462',
        '0AR' => 'E02003461',
        '0AS' => 'E02003461',
        '0AT' => 'E02003461',
        '0AU' => 'E02003461',
        '0AW' => 'E02003461',
        '0AX' => 'E02003461',
        '0AY' => 'E02003461',
        '0AZ' => 'E02003461',
        '0BA' => 'E02003461',
        '0BB' => 'E02003461',
        '0BD' => 'E02003461',
        '0BE' => 'E02003461',
        '0BF' => 'E02003462',
        '0BG' => 'E02003461',
        '0BH' => 'E02003461',
        '0BJ' => 'E02003462',
        '0BL' => 'E02003462',
        '0BN' => 'E02003462',
        '0BP' => 'E02003462',
        '0BQ' => 'E02003461',
        '0BS' => 'E02003461',
        '0BT' => 'E02003461',
        '0BU' => 'E02003462',
        '0BW' => 'E02003462',
        '0BX' => 'E02003462',
        '0BY' => 'E02003462',
        '0BZ' => 'E02003462',
        '0DA' => 'E02003462',
        '0DB' => 'E02003462',
        '0DD' => 'E02003462',
        '0DE' => 'E02003462',
        '0DF' => 'E02003462',
        '0DG' => 'E02003462',
        '0DH' => 'E02003461',
        '0DJ' => 'E02003461',
        '0DL' => 'E02003461',
        '0DN' => 'E02003461',
        '0DP' => 'E02003462',
        '0DQ' => 'E02003461',
        '0DR' => 'E02003462',
        '0DS' => 'E02003462',
        '0DT' => 'E02003462',
        '0DU' => 'E02003462',
        '0DW' => 'E02003462',
        '0DX' => 'E02003462',
        '0DY' => 'E02003462',
        '0DZ' => 'E02003462',
        '0EA' => 'E02003462',
        '0EB' => 'E02003462',
        '0ED' => 'E02003462',
        '0EE' => 'E02003462',
        '0EF' => 'E02003462',
        '0EG' => 'E02003462',
        '0EH' => 'E02003462',
        '0EJ' => 'E02003462',
        '0EL' => 'E02003462',
        '0EN' => 'E02003462',
        '0EP' => 'E02003462',
        '0EQ' => 'E02003462',
        '0ER' => 'E02003462',
        '0ES' => 'E02003462',
        '0ET' => 'E02003462',
        '0EU' => 'E02003462',
        '0EW' => 'E02003462',
        '0EX' => 'E02003462',
        '0EY' => 'E02003462',
        '0EZ' => 'E02003462',
        '0FE' => 'E02003460',
        '0FG' => 'E02003460',
        '0FH' => 'E02003462',
        '0FJ' => 'E02003460',
        '0FL' => 'E02003462',
        '0HA' => 'E02003462',
        '0HB' => 'E02003460',
        '0HD' => 'E02003460',
        '0HE' => 'E02003462',
        '0HF' => 'E02003475',
        '0HH' => 'E02003462',
        '0HJ' => 'E02003462',
        '0HL' => 'E02003460',
        '0HN' => 'E02003460',
        '0HP' => 'E02003460',
        '0HQ' => 'E02003460',
        '0HR' => 'E02003460',
        '0HS' => 'E02003460',
        '0HT' => 'E02003462',
        '0HU' => 'E02003475',
        '0HW' => 'E02003460',
        '0HX' => 'E02003460',
        '0HY' => 'E02003475',
        '0HZ' => 'E02003460',
        '0JA' => 'E02003460',
        '0JB' => 'E02003460',
        '0JD' => 'E02003462',
        '0JE' => 'E02003462',
        '0JF' => 'E02003462',
        '0JG' => 'E02003462',
        '0JH' => 'E02003462',
        '0JJ' => 'E02003460',
        '0JL' => 'E02003462',
        '0JN' => 'E02003461',
        '0JP' => 'E02003462',
        '0JQ' => 'E02003462',
        '0JR' => 'E02003462',
        '0JS' => 'E02003462',
        '0JT' => 'E02003475',
        '0JU' => 'E02003462',
        '0JW' => 'E02003461',
        '0JX' => 'E02003462',
        '0JY' => 'E02003461',
        '0JZ' => 'E02003462',
        '0LA' => 'E02003462',
        '0LB' => 'E02003461',
        '0LD' => 'E02003461',
        '0LE' => 'E02003462',
        '0LF' => 'E02003462',
        '0LG' => 'E02003462',
        '0LH' => 'E02003462',
        '0LJ' => 'E02003462',
        '0LL' => 'E02003462',
        '0LN' => 'E02003462',
        '0LP' => 'E02003462',
        '0LQ' => 'E02003462',
        '0LR' => 'E02003462',
        '0LS' => 'E02003462',
        '0LT' => 'E02003462',
        '0LW' => 'E02003462',
        '0LX' => 'E02003462',
        '0LY' => 'E02003462',
        '0LZ' => 'E02003462',
        '0NA' => 'E02003462',
        '0NB' => 'E02003462',
        '0ND' => 'E02003462',
        '0NE' => 'E02003462',
        '0NF' => 'E02003462',
        '0NG' => 'E02003462',
        '0NH' => 'E02003462',
        '0NJ' => 'E02003462',
        '0NL' => 'E02003462',
        '0NN' => 'E02003462',
        '0NP' => 'E02003462',
        '0NQ' => 'E02003462',
        '0NR' => 'E02003462',
        '0NS' => 'E02003462',
        '0NT' => 'E02003462',
        '0NU' => 'E02003462',
        '0NW' => 'E02003462',
        '0NY' => 'E02003462',
        '0NZ' => 'E02003462',
        '0PA' => 'E02003462',
        '0PB' => 'E02003462',
        '0PD' => 'E02003462',
        '0PE' => 'E02003462',
        '0PF' => 'E02003462',
        '0PG' => 'E02003462',
        '0PH' => 'E02003462',
        '0PJ' => 'E02003462',
        '0PL' => 'E02003462',
        '0PN' => 'E02003462',
        '0PP' => 'E02003462',
        '0PQ' => 'E02003462',
        '0PR' => 'E02003462',
        '0PS' => 'E02003462',
        '0PT' => 'E02003462',
        '0PU' => 'E02003462',
        '0PW' => 'E02003462',
        '0PX' => 'E02003462',
        '0PY' => 'E02003462',
        '0PZ' => 'E02003462',
        '0QA' => 'E02003461',
        '0QB' => 'E02003483',
        '0QD' => 'E02003462',
        '0QE' => 'E02003460',
        '0QN' => 'E02003461',
        '0QW' => 'E02003461',
        '0RE' => 'E02003462',
        '0WA' => 'E02003461',
        '0WB' => 'E02003462',
        '0WT' => 'E02003462',
        '0WU' => 'E02003462',
        '0WW' => 'E02003462',
        '0WX' => 'E02003462',
        '0WY' => 'E02003462',
        '0WZ' => 'E02003462',
        '0XH' => 'E02003462',
        '0XJ' => 'E02003462',
        '0XN' => 'E02003462',
        '0XP' => 'E02003462',
        '0XQ' => 'E02003462',
        '0XR' => 'E02003462',
        '0XS' => 'E02003462',
        '0XT' => 'E02003462',
        '0XW' => 'E02003462',
        '0XY' => 'E02003462',
        '0XZ' => 'E02003462',
        '0YA' => 'E02003462',
        '0YE' => 'E02003462',
        '0YF' => 'E02003462',
        '0YJ' => 'E02003462',
        '0YL' => 'E02003462',
        '0YN' => 'E02003462',
        '0YR' => 'E02003462',
        '0YS' => 'E02003462',
        '0YT' => 'E02003462',
        '0YW' => 'E02003462',
        '0YX' => 'E02003462',
        '0YY' => 'E02003462',
        '0YZ' => 'E02003462',
        '0ZD' => 'E02003462',
        '0ZF' => 'E02003462',
        '0ZG' => 'E02003462',
        '0ZH' => 'E02003462',
        '0ZJ' => 'E02003462',
        '0ZL' => 'E02003462',
        '0ZN' => 'E02003462',
        '0ZP' => 'E02003462',
        '0ZQ' => 'E02003462',
        '0ZR' => 'E02003462',
        '0ZS' => 'E02003462',
        '0ZT' => 'E02003462',
        '0ZU' => 'E02003462',
        '0ZW' => 'E02003462',
        '0ZX' => 'E02003462',
        '0ZZ' => 'E02003462',
        '6AD' => 'E02003462',
        '6AN' => 'E02003462',
        '6AR' => 'E02003462',
        '6AT' => 'E02003462',
        '6AW' => 'E02003462',
        '6AZ' => 'E02003462',
        '6BB' => 'E02003462',
        '6BD' => 'E02003462',
        '6BG' => 'E02003462',
        '6BH' => 'E02003462',
        '6BJ' => 'E02003462',
        '6BL' => 'E02003462',
        '6BN' => 'E02003462',
        '6BP' => 'E02003462',
        '6BQ' => 'E02003462',
        '6BR' => 'E02003462',
        '6BS' => 'E02003462',
        '6BT' => 'E02003462',
        '6BU' => 'E02003462',
        '6BW' => 'E02003462',
        '6BX' => 'E02003462',
        '6BY' => 'E02003462',
        '6BZ' => 'E02003462',
        '6DA' => 'E02003462',
        '6DB' => 'E02003462',
        '6DD' => 'E02003462',
        '6DE' => 'E02003462',
        '6DF' => 'E02003462',
        '6DG' => 'E02003462',
        '6DH' => 'E02003462',
        '6DJ' => 'E02003462',
        '6DL' => 'E02003462',
        '6DN' => 'E02003462',
        '6DP' => 'E02003462',
        '6DQ' => 'E02003462',
        '6DR' => 'E02003462',
        '6DS' => 'E02003462',
        '6DT' => 'E02003462',
        '6DU' => 'E02003462',
        '6DW' => 'E02003462',
        '6DX' => 'E02003462',
        '6DY' => 'E02003462',
        '8AA' => 'E02003462',
        '8AB' => 'E02003462',
        '8AD' => 'E02003462',
        '8AE' => 'E02003462',
        '8AF' => 'E02003462',
        '8AG' => 'E02003462',
        '8AH' => 'E02003462',
        '8AJ' => 'E02003462',
        '8AL' => 'E02003462',
        '8AN' => 'E02003462',
        '8AP' => 'E02003462',
        '8AQ' => 'E02003462',
        '8AR' => 'E02003462',
        '8AS' => 'E02003462',
        '8AT' => 'E02003462',
        '8AU' => 'E02003462',
        '8AW' => 'E02003462',
        '8AX' => 'E02003462',
        '8AY' => 'E02003462',
        '8AZ' => 'E02003462',
        '8BA' => 'E02003462',
        '8BB' => 'E02003461',
        '8BD' => 'E02003461',
        '8BE' => 'E02003461',
        '8BF' => 'E02003462',
        '8BG' => 'E02003461',
        '8BH' => 'E02003461',
        '8BJ' => 'E02003461',
        '8BL' => 'E02003461',
        '8BN' => 'E02003461',
        '8BP' => 'E02003461',
        '8BQ' => 'E02003461',
        '8BS' => 'E02003461',
        '8BT' => 'E02003461',
        '8BU' => 'E02003461',
        '8BW' => 'E02003461',
        '8BX' => 'E02003461',
        '8BY' => 'E02003461',
        '8BZ' => 'E02003461',
        '8DA' => 'E02003461',
        '8DB' => 'E02003461',
        '8DD' => 'E02003461',
        '8DE' => 'E02003461',
        '8DF' => 'E02003461',
        '8DG' => 'E02003461',
        '8DH' => 'E02003461',
        '8DJ' => 'E02003461',
        '8DL' => 'E02003461',
        '8DN' => 'E02003461',
        '8DP' => 'E02003461',
        '8DQ' => 'E02003461',
        '8DR' => 'E02003462',
        '8DS' => 'E02003460',
        '8DT' => 'E02003460',
        '8DU' => 'E02003460',
        '8DW' => 'E02003461',
        '8DX' => 'E02003461',
        '8DY' => 'E02003461',
        '8DZ' => 'E02003461',
        '8EA' => 'E02003461',
        '8EB' => 'E02003461',
        '8ED' => 'E02003461',
        '8EE' => 'E02003461',
        '8EF' => 'E02003461',
        '8EG' => 'E02003461',
        '8EH' => 'E02003462',
        '8EJ' => 'E02003462',
        '8EL' => 'E02003461',
        '8EN' => 'E02003462',
        '8EP' => 'E02003462',
        '8EQ' => 'E02003462',
        '8ER' => 'E02003462',
        '8ES' => 'E02003462',
        '8ET' => 'E02003462',
        '8EU' => 'E02003462',
        '8EW' => 'E02003462',
        '8EX' => 'E02003462',
        '8EY' => 'E02003462',
        '8EZ' => 'E02003462',
        '8FA' => 'E02003461',
        '8FB' => 'E02003462',
        '8FD' => 'E02003461',
        '8FE' => 'E02003461',
        '8FF' => 'E02003462',
        '8GA' => 'E02003462',
        '8HA' => 'E02003462',
        '8HB' => 'E02003462',
        '8HD' => 'E02003462',
        '8HE' => 'E02003462',
        '8HF' => 'E02003462',
        '8HG' => 'E02003462',
        '8HH' => 'E02003462',
        '8HJ' => 'E02003462',
        '8HL' => 'E02003462',
        '8HN' => 'E02003462',
        '8HP' => 'E02003461',
        '8HQ' => 'E02003462',
        '8HR' => 'E02003461',
        '8HS' => 'E02003461',
        '8HT' => 'E02003461',
        '8HU' => 'E02003461',
        '8HW' => 'E02003461',
        '8HX' => 'E02003461',
        '8HY' => 'E02003462',
        '8HZ' => 'E02003461',
        '8JA' => 'E02003461',
        '8JB' => 'E02003461',
        '8JD' => 'E02003461',
        '8JE' => 'E02003461',
        '8JF' => 'E02003461',
        '8JG' => 'E02003461',
        '8JH' => 'E02003461',
        '8JJ' => 'E02003461',
        '8JL' => 'E02003461',
        '8JN' => 'E02003461',
        '8JP' => 'E02003460',
        '8JQ' => 'E02003461',
        '8JR' => 'E02003462',
        '8JS' => 'E02003462',
        '8JT' => 'E02003462',
        '8JU' => 'E02003460',
        '8JW' => 'E02003462',
        '8JX' => 'E02003460',
        '8JY' => 'E02003460',
        '8JZ' => 'E02003460',
        '8LA' => 'E02003460',
        '8LB' => 'E02003460',
        '8LD' => 'E02003460',
        '8LE' => 'E02003460',
        '8LF' => 'E02003460',
        '8LG' => 'E02003460',
        '8LH' => 'E02003460',
        '8LJ' => 'E02003461',
        '8LL' => 'E02003460',
        '8LN' => 'E02003460',
        '8LP' => 'E02003460',
        '8LQ' => 'E02003460',
        '8LR' => 'E02005682',
        '8LS' => 'E02005682',
        '8LT' => 'E02003460',
        '8LU' => 'E02003460',
        '8LW' => 'E02003460',
        '8LX' => 'E02003460',
        '8LY' => 'E02003460',
        '8LZ' => 'E02003461',
        '8NA' => 'E02003460',
        '8NB' => 'E02003460',
        '8ND' => 'E02003461',
        '8NE' => 'E02003460',
        '8NG' => 'E02003461',
        '8NH' => 'E02003460',
        '8NJ' => 'E02003460',
        '8NL' => 'E02003460',
        '8NN' => 'E02003460',
        '8NP' => 'E02003460',
        '8NQ' => 'E02003460',
        '8NR' => 'E02003460',
        '8NS' => 'E02003460',
        '8NT' => 'E02003460',
        '8NU' => 'E02003460',
        '8NW' => 'E02003460',
        '8NX' => 'E02003460',
        '8NY' => 'E02003460',
        '8NZ' => 'E02003460',
        '8PA' => 'E02003460',
        '8PB' => 'E02005682',
        '8PD' => 'E02003461',
        '8PE' => 'E02003460',
        '8PG' => 'E02003461',
        '8PH' => 'E02003461',
        '8PJ' => 'E02003461',
        '8PL' => 'E02003461',
        '8PN' => 'E02003461',
        '8PP' => 'E02003461',
        '8PQ' => 'E02003461',
        '8PR' => 'E02003461',
        '8PS' => 'E02003461',
        '8PT' => 'E02003461',
        '8PU' => 'E02003461',
        '8PW' => 'E02003461',
        '8PX' => 'E02003461',
        '8PY' => 'E02003462',
        '8PZ' => 'E02003461',
        '8QA' => 'E02003461',
        '8QB' => 'E02003461',
        '8QD' => 'E02003461',
        '8QE' => 'E02003461',
        '8QF' => 'E02003461',
        '8QG' => 'E02003461',
        '8QH' => 'E02003461',
        '8QJ' => 'E02003461',
        '8QL' => 'E02003461',
        '8QN' => 'E02003460',
        '8QP' => 'E02003461',
        '8QQ' => 'E02003461',
        '8QR' => 'E02003461',
        '8QS' => 'E02003461',
        '8QT' => 'E02003462',
        '8QU' => 'E02003461',
        '8QW' => 'E02003461',
        '8QX' => 'E02003460',
        '8QY' => 'E02003462',
        '8QZ' => 'E02003460',
        '8RA' => 'E02003461',
        '8RB' => 'E02003461',
        '8RD' => 'E02003461',
        '8RE' => 'E02003461',
        '8RF' => 'E02003461',
        '8RG' => 'E02003461',
        '8RH' => 'E02003461',
        '8RJ' => 'E02003461',
        '8RL' => 'E02003461',
        '8RN' => 'E02003461',
        '8RP' => 'E02003461',
        '8RQ' => 'E02003461',
        '8RR' => 'E02003461',
        '8RS' => 'E02003461',
        '8RT' => 'E02003461',
        '8RU' => 'E02003461',
        '8RW' => 'E02003461',
        '8RX' => 'E02003461',
        '8RY' => 'E02003461',
        '8RZ' => 'E02003461',
        '8SA' => 'E02003461',
        '8SB' => 'E02003461',
        '8SD' => 'E02003461',
        '8SE' => 'E02003462',
        '8SF' => 'E02003462',
        '8SG' => 'E02003461',
        '8SH' => 'E02003461',
        '8SJ' => 'E02003461',
        '8SL' => 'E02003461',
        '8SN' => 'E02003461',
        '8SP' => 'E02003461',
        '8SQ' => 'E02003461',
        '8SR' => 'E02003461',
        '8SS' => 'E02003462',
        '8ST' => 'E02003461',
        '8SU' => 'E02003461',
        '8SW' => 'E02003461',
        '8TA' => 'E02003461',
        '8TB' => 'E02003461',
        '8TD' => 'E02003461',
        '8TE' => 'E02003460',
        '8TF' => 'E02003462',
        '8TG' => 'E02003461',
        '8TH' => 'E02003461',
        '8TJ' => 'E02003461',
        '8TL' => 'E02003461',
        '8TP' => 'E02003461',
        '8TQ' => 'E02003461',
        '8TR' => 'E02003461',
        '8TS' => 'E02003461',
        '8TT' => 'E02003461',
        '8TU' => 'E02003461',
        '8TW' => 'E02003461',
        '8TX' => 'E02003461',
        '8TY' => 'E02003461',
        '8TZ' => 'E02003461',
        '8UA' => 'E02003460',
        '8UB' => 'E02003461',
        '8UD' => 'E02003461',
        '8UE' => 'E02003462',
        '8UF' => 'E02003461',
        '8UG' => 'E02003461',
        '8UY' => 'E02003460',
        '8UZ' => 'E02003462',
        '8WA' => 'E02003462',
        '8WB' => 'E02003462',
        '8WD' => 'E02003462',
        '8WE' => 'E02003462',
        '8WF' => 'E02003462',
        '8WG' => 'E02003462',
        '8WH' => 'E02003462',
        '8WJ' => 'E02003462',
        '8WL' => 'E02003462',
        '8WN' => 'E02003462',
        '8WP' => 'E02003462',
        '8WR' => 'E02003462',
        '8WS' => 'E02003462',
        '8WT' => 'E02003462',
        '8WU' => 'E02003462',
        '8WW' => 'E02003462',
        '8WX' => 'E02003462',
        '8WY' => 'E02003462',
        '8WZ' => 'E02003462',
        '8XB' => 'E02003461',
        '8XD' => 'E02003462',
        '8XG' => 'E02003462',
        '8XH' => 'E02003462',
        '8XJ' => 'E02003462',
        '8XL' => 'E02003462',
        '8XN' => 'E02003462',
        '8XP' => 'E02003462',
        '8XQ' => 'E02003462',
        '8XR' => 'E02003462',
        '8XS' => 'E02003462',
        '8XT' => 'E02003462',
        '8XU' => 'E02003462',
        '8XW' => 'E02003462',
        '8XY' => 'E02003462',
        '8XZ' => 'E02003462',
        '8YA' => 'E02003462',
        '8YD' => 'E02003461',
        '8YE' => 'E02003461',
        '8YF' => 'E02003461',
        '8YG' => 'E02003462',
        '8YH' => 'E02003461',
        '8YJ' => 'E02003461',
        '8YL' => 'E02003461',
        '8YN' => 'E02003461',
        '8YP' => 'E02003461',
        '8YQ' => 'E02003461',
        '8YR' => 'E02003462',
        '8YU' => 'E02003462',
        '8YX' => 'E02003462',
        '8YY' => 'E02003461',
        '8ZD' => 'E02003462',
        '8ZE' => 'E02003462',
        '8ZF' => 'E02003461',
        '8ZG' => 'E02003462',
        '8ZH' => 'E02003461',
        '8ZJ' => 'E02003461',
        '8ZL' => 'E02003461',
        '8ZN' => 'E02003462',
        '8ZP' => 'E02003461',
        '8ZQ' => 'E02003461',
        '8ZR' => 'E02003461',
        '8ZS' => 'E02003462',
        '8ZT' => 'E02003461',
        '8ZU' => 'E02003461',
        '8ZW' => 'E02003462',
        '8ZX' => 'E02003462',
        '8ZY' => 'E02003462',
        '8ZZ' => 'E02003461',
        '9AA' => 'E02003462',
        '9AB' => 'E02003462',
        '9AD' => 'E02003462',
        '9AE' => 'E02003462',
        '9AF' => 'E02003462',
        '9AG' => 'E02003462',
        '9AH' => 'E02003462',
        '9AJ' => 'E02003462',
        '9AL' => 'E02003462',
        '9AN' => 'E02003462',
        '9AP' => 'E02003462',
        '9AQ' => 'E02003462',
        '9AR' => 'E02003462',
        '9AS' => 'E02003462',
        '9AT' => 'E02003462',
        '9AU' => 'E02003462',
        '9AW' => 'E02003462',
        '9AX' => 'E02003462',
        '9AY' => 'E02003462',
        '9AZ' => 'E02003462',
        '9BA' => 'E02003462',
        '9BB' => 'E02003462',
        '9BD' => 'E02003462',
        '9BE' => 'E02003462',
        '9BF' => 'E02003462',
        '9BG' => 'E02003462',
        '9BH' => 'E02003462',
        '9BJ' => 'E02003462',
        '9BL' => 'E02003462',
        '9BN' => 'E02003462',
        '9BP' => 'E02003462',
        '9BQ' => 'E02003462',
        '9BS' => 'E02003462',
        '9BT' => 'E02003462',
        '9BU' => 'E02003462',
        '9BW' => 'E02003462',
        '9BX' => 'E02003462',
        '9BY' => 'E02003462',
        '9BZ' => 'E02003462',
        '9DA' => 'E02003462',
        '9DB' => 'E02003462',
        '9DD' => 'E02003462',
        '9DE' => 'E02003462',
        '9DF' => 'E02003462',
        '9DG' => 'E02003462',
        '9DH' => 'E02003462',
        '9DJ' => 'E02003462',
        '9DL' => 'E02003462',
        '9DN' => 'E02003462',
        '9DP' => 'E02003462',
        '9DQ' => 'E02003462',
        '9DR' => 'E02003462',
        '9DS' => 'E02003462',
        '9DT' => 'E02003462',
        '9DU' => 'E02003462',
        '9DW' => 'E02003462',
        '9DX' => 'E02003462',
        '9DY' => 'E02003462',
        '9DZ' => 'E02003462',
        '9EA' => 'E02003462',
        '9EB' => 'E02003462',
        '9ED' => 'E02003460',
        '9EE' => 'E02003462',
        '9EF' => 'E02003462',
        '9EG' => 'E02003462',
        '9EH' => 'E02003462',
        '9EJ' => 'E02003462',
        '9EL' => 'E02003460',
        '9EN' => 'E02003460',
        '9EP' => 'E02003460',
        '9EQ' => 'E02003462',
        '9ER' => 'E02003460',
        '9ES' => 'E02003460',
        '9ET' => 'E02003460',
        '9EU' => 'E02003460',
        '9EW' => 'E02003460',
        '9EX' => 'E02003460',
        '9EY' => 'E02003462',
        '9EZ' => 'E02003462',
        '9FA' => 'E02003462',
        '9FB' => 'E02003462',
        '9FD' => 'E02003462',
        '9FE' => 'E02003462',
        '9FF' => 'E02003462',
        '9FG' => 'E02003460',
        '9FH' => 'E02003462',
        '9FJ' => 'E02003462',
        '9FL' => 'E02003462',
        '9FN' => 'E02003462',
        '9FP' => 'E02003462',
        '9FQ' => 'E02003462',
        '9FR' => 'E02003462',
        '9FS' => 'E02003460',
        '9FT' => 'E02003460',
        '9FW' => 'E02003460',
        '9FX' => 'E02003462',
        '9FY' => 'E02003462',
        '9GA' => 'E02003462',
        '9GB' => 'E02003462',
        '9GD' => 'E02003462',
        '9GE' => 'E02003462',
        '9GF' => 'E02003462',
        '9HA' => 'E02003462',
        '9HB' => 'E02003462',
        '9HD' => 'E02003462',
        '9HE' => 'E02003462',
        '9HF' => 'E02003462',
        '9HG' => 'E02003460',
        '9HH' => 'E02003460',
        '9HJ' => 'E02003460',
        '9HL' => 'E02003460',
        '9HN' => 'E02003460',
        '9HP' => 'E02003460',
        '9HQ' => 'E02003460',
        '9HR' => 'E02003460',
        '9HS' => 'E02003460',
        '9HT' => 'E02003460',
        '9HU' => 'E02003460',
        '9HW' => 'E02003460',
        '9HY' => 'E02003462',
        '9HZ' => 'E02003460',
        '9JA' => 'E02003460',
        '9JB' => 'E02003460',
        '9JD' => 'E02003460',
        '9JE' => 'E02003460',
        '9JF' => 'E02003460',
        '9JG' => 'E02003460',
        '9JH' => 'E02003460',
        '9JJ' => 'E02003460',
        '9JL' => 'E02003460',
        '9JN' => 'E02003460',
        '9JP' => 'E02003460',
        '9JQ' => 'E02003460',
        '9JR' => 'E02003460',
        '9JS' => 'E02003460',
        '9JT' => 'E02003460',
        '9JU' => 'E02003460',
        '9JW' => 'E02003460',
        '9JX' => 'E02003460',
        '9JY' => 'E02003460',
        '9JZ' => 'E02003460',
        '9LA' => 'E02003460',
        '9LB' => 'E02003460',
        '9LD' => 'E02003460',
        '9LE' => 'E02003460',
        '9LF' => 'E02003460',
        '9LG' => 'E02003460',
        '9LH' => 'E02003460',
        '9LJ' => 'E02003460',
        '9LL' => 'E02003460',
        '9LN' => 'E02003460',
        '9LP' => 'E02003460',
        '9LQ' => 'E02003460',
        '9LR' => 'E02003460',
        '9LS' => 'E02003460',
        '9LT' => 'E02003460',
        '9LU' => 'E02003460',
        '9LW' => 'E02003460',
        '9LX' => 'E02003460',
        '9LY' => 'E02003460',
        '9LZ' => 'E02003460',
        '9NA' => 'E02003460',
        '9NB' => 'E02003460',
        '9ND' => 'E02003460',
        '9NE' => 'E02003460',
        '9NF' => 'E02003460',
        '9NG' => 'E02003460',
        '9NH' => 'E02003460',
        '9NJ' => 'E02003460',
        '9NL' => 'E02003460',
        '9NN' => 'E02003460',
        '9NP' => 'E02003460',
        '9NQ' => 'E02003460',
        '9NR' => 'E02003460',
        '9NS' => 'E02003460',
        '9NT' => 'E02003460',
        '9NU' => 'E02003460',
        '9NW' => 'E02003460',
        '9NX' => 'E02003460',
        '9NY' => 'E02003460',
        '9NZ' => 'E02003460',
        '9PA' => 'E02003460',
        '9PB' => 'E02003460',
        '9PD' => 'E02003460',
        '9PE' => 'E02003460',
        '9PF' => 'E02003460',
        '9PG' => 'E02003460',
        '9PH' => 'E02003460',
        '9PJ' => 'E02003460',
        '9PL' => 'E02003460',
        '9PN' => 'E02003460',
        '9PP' => 'E02003460',
        '9PQ' => 'E02003460',
        '9PR' => 'E02003460',
        '9PS' => 'E02003462',
        '9PT' => 'E02003462',
        '9PU' => 'E02003460',
        '9PW' => 'E02003460',
        '9PX' => 'E02003462',
        '9PY' => 'E02003462',
        '9PZ' => 'E02003460',
        '9QA' => 'E02003462',
        '9QB' => 'E02003462',
        '9QE' => 'E02003462',
        '9QF' => 'E02003462',
        '9QH' => 'E02003462',
        '9QJ' => 'E02003462',
        '9QP' => 'E02003460',
        '9QS' => 'E02003462',
        '9QT' => 'E02003460',
        '9QU' => 'E02003462',
        '9QW' => 'E02003460',
        '9QX' => 'E02003460',
        '9TG' => 'E02003462',
        '9WA' => 'E02003462',
        '9WB' => 'E02003462',
        '9WD' => 'E02003462',
        '9WG' => 'E02003462',
        '9WL' => 'E02003462',
        '9WN' => 'E02003462',
        '9WP' => 'E02003462',
        '9WQ' => 'E02003462',
        '9WR' => 'E02003462',
        '9WS' => 'E02003462',
        '9WT' => 'E02003462',
        '9WU' => 'E02003462',
        '9WW' => 'E02003462',
        '9WX' => 'E02003462',
        '9WY' => 'E02003462',
        '9WZ' => 'E02003462',
        '9XE' => 'E02003462',
        '9XN' => 'E02003462',
        '9XQ' => 'E02003462',
        '9XR' => 'E02003462',
        '9XZ' => 'E02003462',
        '9YB' => 'E02003462',
        '9YD' => 'E02003460',
        '9YH' => 'E02003460',
        '9YX' => 'E02003462',
        '9YY' => 'E02003460',
        '9YZ' => 'E02003460',
        '9ZG' => 'E02003462',
        '9ZH' => 'E02003462',
        '9ZJ' => 'E02003462',
        '9ZL' => 'E02003462',
        '9ZN' => 'E02003462',
        '9ZP' => 'E02003462',
        '9ZQ' => 'E02003462',
        '9ZR' => 'E02003460',
        '9ZS' => 'E02003462',
        '9ZT' => 'E02003462',
        '9ZU' => 'E02003462',
        '9ZW' => 'E02003460',
        '9ZX' => 'E02003460',
        '9ZY' => 'E02003462',
        '9ZZ' => 'E02003460',
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
