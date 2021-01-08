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
final class B68
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02002078',
        '0AD' => 'E02002066',
        '0AG' => 'E02002079',
        '0AH' => 'E02002079',
        '0AJ' => 'E02002079',
        '0AL' => 'E02002079',
        '0AN' => 'E02002079',
        '0AP' => 'E02002079',
        '0AQ' => 'E02002079',
        '0AR' => 'E02002079',
        '0AS' => 'E02002078',
        '0AT' => 'E02002079',
        '0AU' => 'E02002078',
        '0AW' => 'E02002079',
        '0AX' => 'E02002079',
        '0AY' => 'E02002079',
        '0AZ' => 'E02002079',
        '0BA' => 'E02002079',
        '0BB' => 'E02002079',
        '0BD' => 'E02002079',
        '0BE' => 'E02002078',
        '0BG' => 'E02002079',
        '0BH' => 'E02002079',
        '0BJ' => 'E02002079',
        '0BL' => 'E02002079',
        '0BQ' => 'E02002079',
        '0BS' => 'E02002079',
        '0BT' => 'E02002079',
        '0BU' => 'E02002079',
        '0BY' => 'E02001906',
        '0BZ' => 'E02002079',
        '0DA' => 'E02002079',
        '0DB' => 'E02002079',
        '0DD' => 'E02002079',
        '0DE' => 'E02002078',
        '0DF' => 'E02002079',
        '0DG' => 'E02002078',
        '0DH' => 'E02002079',
        '0DJ' => 'E02002079',
        '0DL' => 'E02002078',
        '0DN' => 'E02002078',
        '0DP' => 'E02002078',
        '0DQ' => 'E02002079',
        '0DR' => 'E02002079',
        '0DS' => 'E02002078',
        '0DT' => 'E02002066',
        '0DU' => 'E02002078',
        '0DX' => 'E02002078',
        '0DY' => 'E02002078',
        '0DZ' => 'E02002078',
        '0EA' => 'E02002078',
        '0EB' => 'E02002078',
        '0ED' => 'E02002079',
        '0EE' => 'E02002078',
        '0EF' => 'E02002079',
        '0EG' => 'E02002078',
        '0EH' => 'E02002078',
        '0EJ' => 'E02002078',
        '0EL' => 'E02002078',
        '0EN' => 'E02002078',
        '0EP' => 'E02002078',
        '0EQ' => 'E02002078',
        '0ER' => 'E02002078',
        '0ES' => 'E02002078',
        '0ET' => 'E02002078',
        '0EU' => 'E02002079',
        '0EW' => 'E02002078',
        '0EX' => 'E02002078',
        '0EY' => 'E02002078',
        '0EZ' => 'E02002078',
        '0HA' => 'E02002079',
        '0HB' => 'E02002079',
        '0HD' => 'E02002079',
        '0HE' => 'E02002079',
        '0HF' => 'E02002079',
        '0HG' => 'E02002079',
        '0HH' => 'E02002079',
        '0HJ' => 'E02002079',
        '0HL' => 'E02002079',
        '0HN' => 'E02002079',
        '0HP' => 'E02002079',
        '0HQ' => 'E02002079',
        '0HR' => 'E02002079',
        '0HS' => 'E02002079',
        '0HT' => 'E02002079',
        '0HU' => 'E02002079',
        '0HW' => 'E02002079',
        '0HX' => 'E02002079',
        '0HY' => 'E02002079',
        '0HZ' => 'E02002079',
        '0JA' => 'E02002079',
        '0JB' => 'E02002079',
        '0JD' => 'E02002079',
        '0JE' => 'E02002079',
        '0JF' => 'E02002079',
        '0JG' => 'E02002079',
        '0JH' => 'E02002079',
        '0JJ' => 'E02002079',
        '0JL' => 'E02002079',
        '0JN' => 'E02002079',
        '0JP' => 'E02002079',
        '0JQ' => 'E02002079',
        '0JR' => 'E02002079',
        '0JS' => 'E02002079',
        '0JT' => 'E02002079',
        '0JU' => 'E02002079',
        '0JW' => 'E02002079',
        '0JX' => 'E02002079',
        '0JY' => 'E02002079',
        '0JZ' => 'E02002066',
        '0LA' => 'E02002079',
        '0LB' => 'E02002066',
        '0LE' => 'E02002079',
        '0LH' => 'E02002078',
        '0LJ' => 'E02002078',
        '0LL' => 'E02002078',
        '0LN' => 'E02002078',
        '0LP' => 'E02002078',
        '0LQ' => 'E02002078',
        '0LR' => 'E02002078',
        '0LS' => 'E02002078',
        '0LT' => 'E02002079',
        '0LU' => 'E02002079',
        '0LW' => 'E02002078',
        '0LX' => 'E02002078',
        '0LY' => 'E02002078',
        '0LZ' => 'E02002078',
        '0NA' => 'E02002078',
        '0NB' => 'E02002078',
        '0ND' => 'E02002078',
        '0NE' => 'E02002078',
        '0NF' => 'E02002078',
        '0NH' => 'E02002078',
        '0NJ' => 'E02002078',
        '0NL' => 'E02002066',
        '0NN' => 'E02002066',
        '0NP' => 'E02002078',
        '0NR' => 'E02002078',
        '0NS' => 'E02002078',
        '0NT' => 'E02002078',
        '0NU' => 'E02002078',
        '0NW' => 'E02002078',
        '0NX' => 'E02002078',
        '0NY' => 'E02002078',
        '0NZ' => 'E02002078',
        '0PA' => 'E02002078',
        '0PB' => 'E02002079',
        '0PD' => 'E02002079',
        '0PE' => 'E02002079',
        '0PH' => 'E02002079',
        '0PJ' => 'E02002079',
        '0PL' => 'E02002079',
        '0PN' => 'E02002079',
        '0PP' => 'E02002079',
        '0PQ' => 'E02002079',
        '0PR' => 'E02002079',
        '0PS' => 'E02002079',
        '0PT' => 'E02002079',
        '0PU' => 'E02002079',
        '0PW' => 'E02002079',
        '0PX' => 'E02002079',
        '0PY' => 'E02002079',
        '0PZ' => 'E02002079',
        '0QA' => 'E02002079',
        '0QB' => 'E02002079',
        '0QD' => 'E02002079',
        '0QE' => 'E02002079',
        '0QF' => 'E02002079',
        '0QG' => 'E02002079',
        '0QH' => 'E02002079',
        '0QJ' => 'E02002079',
        '0QL' => 'E02002079',
        '0QQ' => 'E02002079',
        '0QR' => 'E02002066',
        '0QS' => 'E02002079',
        '0QT' => 'E02002079',
        '0QU' => 'E02002079',
        '0QX' => 'E02002079',
        '0QY' => 'E02002079',
        '0QZ' => 'E02002079',
        '0RA' => 'E02002079',
        '0RB' => 'E02002079',
        '0RD' => 'E02002079',
        '0RE' => 'E02002079',
        '0RF' => 'E02002079',
        '0RG' => 'E02002079',
        '0RH' => 'E02002079',
        '0RJ' => 'E02002079',
        '0RL' => 'E02002079',
        '0RN' => 'E02002079',
        '0RP' => 'E02002079',
        '0RQ' => 'E02002079',
        '0RR' => 'E02002079',
        '0RS' => 'E02002079',
        '0RT' => 'E02002079',
        '0RW' => 'E02002079',
        '0SB' => 'E02002079',
        '0SD' => 'E02002079',
        '0SE' => 'E02002079',
        '0SF' => 'E02002079',
        '0SG' => 'E02002079',
        '0SH' => 'E02002079',
        '0SJ' => 'E02002079',
        '0SL' => 'E02002079',
        '0SN' => 'E02002079',
        '0SP' => 'E02002079',
        '0SQ' => 'E02002079',
        '0SR' => 'E02002079',
        '0SS' => 'E02002079',
        '0ST' => 'E02002079',
        '0SU' => 'E02002079',
        '0SW' => 'E02002079',
        '0TA' => 'E02002066',
        '0TD' => 'E02002079',
        '0TE' => 'E02002074',
        '0TF' => 'E02002078',
        '0TG' => 'E02002078',
        '0TQ' => 'E02002078',
        '0WA' => 'E02002066',
        '0WB' => 'E02002066',
        '0WE' => 'E02002066',
        '0WG' => 'E02002078',
        '0WH' => 'E02002078',
        '0XE' => 'E02002066',
        '0YR' => 'E02002066',
        '8AA' => 'E02002079',
        '8AB' => 'E02002072',
        '8AD' => 'E02002079',
        '8AE' => 'E02002079',
        '8AF' => 'E02002079',
        '8AG' => 'E02002079',
        '8AH' => 'E02002079',
        '8AJ' => 'E02002079',
        '8AL' => 'E02002079',
        '8AN' => 'E02002072',
        '8AP' => 'E02002079',
        '8AQ' => 'E02002079',
        '8AR' => 'E02002079',
        '8AS' => 'E02002079',
        '8AT' => 'E02002079',
        '8AU' => 'E02002079',
        '8AW' => 'E02002066',
        '8AX' => 'E02002079',
        '8AY' => 'E02002079',
        '8AZ' => 'E02002079',
        '8BA' => 'E02002079',
        '8BB' => 'E02002079',
        '8BD' => 'E02002079',
        '8BE' => 'E02002079',
        '8BF' => 'E02002079',
        '8BG' => 'E02002072',
        '8BH' => 'E02002079',
        '8BJ' => 'E02002079',
        '8BL' => 'E02002079',
        '8BP' => 'E02002072',
        '8DA' => 'E02002072',
        '8DB' => 'E02002072',
        '8DD' => 'E02002072',
        '8DE' => 'E02002072',
        '8DF' => 'E02002079',
        '8DG' => 'E02002072',
        '8DH' => 'E02002072',
        '8DJ' => 'E02002074',
        '8DP' => 'E02002072',
        '8DQ' => 'E02002074',
        '8DR' => 'E02002074',
        '8DS' => 'E02002072',
        '8DT' => 'E02002074',
        '8DU' => 'E02002072',
        '8DZ' => 'E02002072',
        '8EB' => 'E02002074',
        '8ED' => 'E02002072',
        '8EE' => 'E02002072',
        '8EF' => 'E02002072',
        '8EG' => 'E02002074',
        '8EH' => 'E02002072',
        '8EJ' => 'E02002072',
        '8EL' => 'E02002072',
        '8EP' => 'E02002074',
        '8EQ' => 'E02002072',
        '8ER' => 'E02002074',
        '8ES' => 'E02002072',
        '8ET' => 'E02002072',
        '8FY' => 'E02002066',
        '8HA' => 'E02002072',
        '8HB' => 'E02002072',
        '8HD' => 'E02002072',
        '8HE' => 'E02002066',
        '8HF' => 'E02002072',
        '8HG' => 'E02002066',
        '8HH' => 'E02002072',
        '8HJ' => 'E02002066',
        '8HL' => 'E02002072',
        '8HN' => 'E02002066',
        '8HP' => 'E02002066',
        '8HQ' => 'E02002066',
        '8HR' => 'E02002074',
        '8HS' => 'E02002074',
        '8HT' => 'E02002066',
        '8HU' => 'E02002066',
        '8HW' => 'E02002066',
        '8HX' => 'E02002066',
        '8HY' => 'E02002066',
        '8HZ' => 'E02002066',
        '8JA' => 'E02002066',
        '8JB' => 'E02002066',
        '8JD' => 'E02002066',
        '8JE' => 'E02002066',
        '8JF' => 'E02002066',
        '8JG' => 'E02002066',
        '8JH' => 'E02002066',
        '8JJ' => 'E02002066',
        '8JL' => 'E02002066',
        '8JN' => 'E02002072',
        '8JP' => 'E02002066',
        '8JQ' => 'E02002066',
        '8JR' => 'E02002066',
        '8JS' => 'E02002066',
        '8JT' => 'E02002066',
        '8JZ' => 'E02002072',
        '8LA' => 'E02002072',
        '8LB' => 'E02002072',
        '8LD' => 'E02002072',
        '8LE' => 'E02002072',
        '8LF' => 'E02002072',
        '8LG' => 'E02002072',
        '8LH' => 'E02002072',
        '8LJ' => 'E02002072',
        '8LL' => 'E02002066',
        '8LN' => 'E02002066',
        '8LP' => 'E02002066',
        '8LQ' => 'E02002072',
        '8LR' => 'E02002072',
        '8LS' => 'E02002072',
        '8LT' => 'E02002069',
        '8LU' => 'E02002069',
        '8LW' => 'E02002079',
        '8LX' => 'E02002069',
        '8LY' => 'E02002072',
        '8LZ' => 'E02002072',
        '8NA' => 'E02002079',
        '8NB' => 'E02002072',
        '8ND' => 'E02002072',
        '8NE' => 'E02002072',
        '8NF' => 'E02002072',
        '8NG' => 'E02002072',
        '8NH' => 'E02002072',
        '8NJ' => 'E02002072',
        '8NL' => 'E02002072',
        '8NN' => 'E02002072',
        '8NP' => 'E02002066',
        '8NQ' => 'E02002072',
        '8NR' => 'E02002066',
        '8NS' => 'E02002072',
        '8NT' => 'E02002072',
        '8NU' => 'E02002072',
        '8NW' => 'E02002066',
        '8NX' => 'E02002072',
        '8NY' => 'E02002072',
        '8NZ' => 'E02002072',
        '8PA' => 'E02002072',
        '8PB' => 'E02002072',
        '8PD' => 'E02002072',
        '8PE' => 'E02002072',
        '8PF' => 'E02002072',
        '8PG' => 'E02002072',
        '8PH' => 'E02002072',
        '8PJ' => 'E02002072',
        '8PL' => 'E02002072',
        '8PN' => 'E02002072',
        '8PP' => 'E02002072',
        '8PQ' => 'E02002072',
        '8PR' => 'E02002072',
        '8PS' => 'E02002072',
        '8PT' => 'E02002072',
        '8PU' => 'E02002072',
        '8PW' => 'E02002072',
        '8PX' => 'E02002072',
        '8PY' => 'E02002072',
        '8PZ' => 'E02002066',
        '8QA' => 'E02002072',
        '8QB' => 'E02002072',
        '8QD' => 'E02002072',
        '8QE' => 'E02002072',
        '8QF' => 'E02002072',
        '8QG' => 'E02002072',
        '8QH' => 'E02002072',
        '8QJ' => 'E02002072',
        '8QL' => 'E02002072',
        '8QN' => 'E02002072',
        '8QP' => 'E02002072',
        '8QQ' => 'E02002072',
        '8QR' => 'E02002072',
        '8QS' => 'E02002072',
        '8QT' => 'E02002072',
        '8QU' => 'E02002072',
        '8QW' => 'E02002072',
        '8QX' => 'E02002072',
        '8QY' => 'E02002072',
        '8QZ' => 'E02002072',
        '8RA' => 'E02002072',
        '8RB' => 'E02002072',
        '8RD' => 'E02002072',
        '8RE' => 'E02002072',
        '8RF' => 'E02002066',
        '8RG' => 'E02002072',
        '8RH' => 'E02002072',
        '8RJ' => 'E02002072',
        '8RL' => 'E02002072',
        '8RN' => 'E02002072',
        '8RP' => 'E02002072',
        '8RQ' => 'E02002072',
        '8RR' => 'E02002072',
        '8RS' => 'E02002072',
        '8RT' => 'E02002072',
        '8RU' => 'E02002072',
        '8RW' => 'E02002072',
        '8RX' => 'E02002066',
        '8RY' => 'E02002066',
        '8RZ' => 'E02002066',
        '8SA' => 'E02002066',
        '8SB' => 'E02002066',
        '8SD' => 'E02002066',
        '8SE' => 'E02002066',
        '8SF' => 'E02002066',
        '8SG' => 'E02002066',
        '8SH' => 'E02002066',
        '8SJ' => 'E02002066',
        '8SL' => 'E02002066',
        '8SP' => 'E02002066',
        '8SQ' => 'E02002066',
        '8SR' => 'E02002066',
        '8SS' => 'E02002065',
        '8ST' => 'E02002065',
        '8SU' => 'E02002065',
        '8TA' => 'E02002066',
        '8WA' => 'E02002066',
        '8WB' => 'E02002066',
        '8WD' => 'E02002066',
        '8WE' => 'E02002066',
        '8WF' => 'E02002066',
        '8WQ' => 'E02002066',
        '8ZE' => 'E02002066',
        '8ZR' => 'E02002066',
        '8ZY' => 'E02002066',
        '9AA' => 'E02002074',
        '9AB' => 'E02002074',
        '9AD' => 'E02002074',
        '9AE' => 'E02002074',
        '9AF' => 'E02002074',
        '9AG' => 'E02002074',
        '9AH' => 'E02002074',
        '9AJ' => 'E02002074',
        '9AL' => 'E02002074',
        '9AN' => 'E02002074',
        '9AP' => 'E02002074',
        '9AQ' => 'E02002074',
        '9AR' => 'E02002074',
        '9AS' => 'E02002074',
        '9AT' => 'E02002074',
        '9AU' => 'E02002074',
        '9AW' => 'E02002074',
        '9AX' => 'E02002074',
        '9AZ' => 'E02002066',
        '9BG' => 'E02002078',
        '9BH' => 'E02002078',
        '9BJ' => 'E02002078',
        '9BP' => 'E02002074',
        '9BQ' => 'E02002078',
        '9BS' => 'E02002074',
        '9BT' => 'E02002074',
        '9BU' => 'E02002074',
        '9BX' => 'E02002074',
        '9BY' => 'E02002074',
        '9BZ' => 'E02002074',
        '9DA' => 'E02002074',
        '9DB' => 'E02002074',
        '9DD' => 'E02002074',
        '9DE' => 'E02002074',
        '9DF' => 'E02002074',
        '9DG' => 'E02002074',
        '9DH' => 'E02002078',
        '9DJ' => 'E02002078',
        '9DL' => 'E02002078',
        '9DN' => 'E02002078',
        '9DP' => 'E02002074',
        '9DQ' => 'E02002074',
        '9DR' => 'E02002074',
        '9DS' => 'E02002074',
        '9DT' => 'E02002074',
        '9DU' => 'E02002074',
        '9DW' => 'E02002074',
        '9DX' => 'E02002074',
        '9DY' => 'E02002074',
        '9DZ' => 'E02002074',
        '9EA' => 'E02002074',
        '9EB' => 'E02002078',
        '9ED' => 'E02002078',
        '9EE' => 'E02002074',
        '9EG' => 'E02002074',
        '9EH' => 'E02002078',
        '9EP' => 'E02002078',
        '9EQ' => 'E02002074',
        '9ER' => 'E02002078',
        '9ES' => 'E02002078',
        '9ET' => 'E02002078',
        '9EU' => 'E02002078',
        '9EW' => 'E02002074',
        '9EX' => 'E02002074',
        '9EY' => 'E02002074',
        '9EZ' => 'E02002074',
        '9HA' => 'E02002074',
        '9HB' => 'E02002078',
        '9HD' => 'E02002078',
        '9HE' => 'E02002078',
        '9HF' => 'E02002078',
        '9HG' => 'E02002078',
        '9HH' => 'E02002078',
        '9HJ' => 'E02002078',
        '9HL' => 'E02002078',
        '9HN' => 'E02002078',
        '9HP' => 'E02002078',
        '9HQ' => 'E02002078',
        '9HR' => 'E02002078',
        '9HS' => 'E02002066',
        '9HT' => 'E02002074',
        '9HW' => 'E02002078',
        '9HY' => 'E02002078',
        '9JA' => 'E02002076',
        '9JB' => 'E02002078',
        '9JD' => 'E02002066',
        '9JE' => 'E02002076',
        '9JF' => 'E02002076',
        '9JG' => 'E02002078',
        '9JH' => 'E02002078',
        '9JJ' => 'E02002078',
        '9JL' => 'E02002078',
        '9JN' => 'E02002078',
        '9JP' => 'E02002078',
        '9JQ' => 'E02002078',
        '9JR' => 'E02002078',
        '9JS' => 'E02002078',
        '9JT' => 'E02002078',
        '9JU' => 'E02002078',
        '9JW' => 'E02002078',
        '9JX' => 'E02002078',
        '9JY' => 'E02002078',
        '9JZ' => 'E02002066',
        '9LA' => 'E02002078',
        '9LB' => 'E02002074',
        '9LE' => 'E02002066',
        '9LF' => 'E02002074',
        '9LG' => 'E02002074',
        '9LH' => 'E02002074',
        '9LJ' => 'E02002074',
        '9LL' => 'E02002074',
        '9LN' => 'E02002074',
        '9LQ' => 'E02002074',
        '9LR' => 'E02002074',
        '9LS' => 'E02002074',
        '9LT' => 'E02002074',
        '9LU' => 'E02002074',
        '9LW' => 'E02002074',
        '9LX' => 'E02002066',
        '9LY' => 'E02002066',
        '9LZ' => 'E02002074',
        '9NA' => 'E02002074',
        '9NB' => 'E02002073',
        '9ND' => 'E02002073',
        '9NE' => 'E02002073',
        '9NF' => 'E02002074',
        '9NG' => 'E02002073',
        '9NH' => 'E02002073',
        '9NJ' => 'E02002074',
        '9NL' => 'E02002074',
        '9NN' => 'E02002074',
        '9NP' => 'E02002074',
        '9NQ' => 'E02002073',
        '9NR' => 'E02002074',
        '9NS' => 'E02002074',
        '9NT' => 'E02002074',
        '9NU' => 'E02002074',
        '9NW' => 'E02002074',
        '9NX' => 'E02002074',
        '9NY' => 'E02002074',
        '9NZ' => 'E02002074',
        '9PA' => 'E02002073',
        '9PB' => 'E02002074',
        '9PD' => 'E02002073',
        '9PE' => 'E02002074',
        '9PF' => 'E02002074',
        '9PG' => 'E02002074',
        '9PH' => 'E02002074',
        '9PJ' => 'E02002074',
        '9PL' => 'E02002074',
        '9PN' => 'E02002074',
        '9PP' => 'E02002074',
        '9PQ' => 'E02002074',
        '9PR' => 'E02002074',
        '9PS' => 'E02002074',
        '9PT' => 'E02002074',
        '9PU' => 'E02002074',
        '9PW' => 'E02002074',
        '9PX' => 'E02002074',
        '9PY' => 'E02002066',
        '9PZ' => 'E02002066',
        '9QB' => 'E02002074',
        '9QD' => 'E02002074',
        '9QE' => 'E02002074',
        '9QF' => 'E02002074',
        '9QG' => 'E02002074',
        '9QH' => 'E02002074',
        '9QJ' => 'E02002074',
        '9QL' => 'E02002074',
        '9QN' => 'E02002074',
        '9QP' => 'E02002074',
        '9QQ' => 'E02002074',
        '9QR' => 'E02002074',
        '9QS' => 'E02002074',
        '9QT' => 'E02002074',
        '9QU' => 'E02002074',
        '9QW' => 'E02002074',
        '9QX' => 'E02002074',
        '9QY' => 'E02002074',
        '9QZ' => 'E02002074',
        '9RA' => 'E02002074',
        '9RB' => 'E02002074',
        '9RD' => 'E02002074',
        '9RE' => 'E02002074',
        '9RF' => 'E02002074',
        '9RG' => 'E02002074',
        '9RH' => 'E02002074',
        '9RN' => 'E02002066',
        '9RP' => 'E02002066',
        '9RQ' => 'E02002074',
        '9RR' => 'E02002066',
        '9RS' => 'E02002066',
        '9RT' => 'E02002066',
        '9RU' => 'E02002066',
        '9RX' => 'E02002066',
        '9RY' => 'E02002066',
        '9RZ' => 'E02002066',
        '9SA' => 'E02002066',
        '9SB' => 'E02002066',
        '9SD' => 'E02002066',
        '9SG' => 'E02002066',
        '9SH' => 'E02002074',
        '9SJ' => 'E02002066',
        '9SL' => 'E02002066',
        '9SP' => 'E02002066',
        '9SQ' => 'E02002066',
        '9SR' => 'E02002066',
        '9SS' => 'E02002066',
        '9ST' => 'E02002066',
        '9SU' => 'E02002066',
        '9SX' => 'E02002066',
        '9SY' => 'E02002074',
        '9SZ' => 'E02002066',
        '9TA' => 'E02002066',
        '9TB' => 'E02002066',
        '9TH' => 'E02002066',
        '9TJ' => 'E02002066',
        '9TS' => 'E02002074',
        '9TT' => 'E02002074',
        '9TU' => 'E02002074',
        '9TW' => 'E02002074',
        '9TX' => 'E02002074',
        '9TY' => 'E02002074',
        '9TZ' => 'E02002074',
        '9UA' => 'E02002074',
        '9UB' => 'E02002066',
        '9UE' => 'E02002066',
        '9UF' => 'E02002066',
        '9UG' => 'E02002066',
        '9UH' => 'E02002066',
        '9UJ' => 'E02002066',
        '9UL' => 'E02002066',
        '9UQ' => 'E02002066',
        '9XA' => 'E02002066',
        '9YA' => 'E02002066',
        '9YH' => 'E02002066',
        '9YQ' => 'E02002066',
        '9YR' => 'E02002066',
        '9YS' => 'E02002066',
        '9ZR' => 'E02002066',
        '9ZS' => 'E02002066',
        '9ZX' => 'E02002066',
        '9ZY' => 'E02002066',
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
