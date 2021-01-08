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
final class NG22
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02005895',
        '0AB' => 'E02005895',
        '0AD' => 'E02005895',
        '0AE' => 'E02005895',
        '0AF' => 'E02005895',
        '0AG' => 'E02005895',
        '0AH' => 'E02005895',
        '0AJ' => 'E02005895',
        '0AL' => 'E02005895',
        '0AN' => 'E02005897',
        '0AP' => 'E02005895',
        '0AQ' => 'E02005895',
        '0AR' => 'E02005897',
        '0AS' => 'E02005895',
        '0AT' => 'E02005895',
        '0AU' => 'E02005895',
        '0AW' => 'E02005897',
        '0AX' => 'E02005895',
        '0AY' => 'E02005895',
        '0AZ' => 'E02005895',
        '0BA' => 'E02005895',
        '0BB' => 'E02005895',
        '0BD' => 'E02005849',
        '0BE' => 'E02005895',
        '0BF' => 'E02005895',
        '0BG' => 'E02005899',
        '0BH' => 'E02005895',
        '0BJ' => 'E02005895',
        '0BL' => 'E02005897',
        '0BN' => 'E02005897',
        '0BP' => 'E02005895',
        '0BQ' => 'E02005895',
        '0BS' => 'E02005895',
        '0BT' => 'E02005849',
        '0BU' => 'E02005897',
        '0BW' => 'E02005897',
        '0BX' => 'E02005849',
        '0BY' => 'E02005897',
        '0BZ' => 'E02005897',
        '0DA' => 'E02005897',
        '0DB' => 'E02005897',
        '0DD' => 'E02005897',
        '0DE' => 'E02005897',
        '0DF' => 'E02005897',
        '0DG' => 'E02005897',
        '0DH' => 'E02005897',
        '0DJ' => 'E02005897',
        '0DL' => 'E02005897',
        '0DN' => 'E02005897',
        '0DP' => 'E02005897',
        '0DQ' => 'E02005897',
        '0DR' => 'E02005897',
        '0DS' => 'E02005849',
        '0DT' => 'E02005849',
        '0DU' => 'E02005849',
        '0DW' => 'E02005897',
        '0DX' => 'E02005849',
        '0DY' => 'E02005893',
        '0DZ' => 'E02005899',
        '0EA' => 'E02005895',
        '0EB' => 'E02005895',
        '0ED' => 'E02005895',
        '0EE' => 'E02005895',
        '0EF' => 'E02005895',
        '0EG' => 'E02005895',
        '0EH' => 'E02005893',
        '0EJ' => 'E02005895',
        '0EL' => 'E02005895',
        '0EN' => 'E02005895',
        '0EP' => 'E02005895',
        '0EQ' => 'E02005897',
        '0ER' => 'E02005895',
        '0ES' => 'E02005899',
        '0ET' => 'E02005895',
        '0EU' => 'E02005895',
        '0EW' => 'E02005895',
        '0EX' => 'E02005895',
        '0EY' => 'E02005895',
        '0EZ' => 'E02005895',
        '0FA' => 'E02005899',
        '0FB' => 'E02005895',
        '0FD' => 'E02005895',
        '0FE' => 'E02005895',
        '0FF' => 'E02005849',
        '0FG' => 'E02005895',
        '0FH' => 'E02005849',
        '0FJ' => 'E02005849',
        '0FL' => 'E02005849',
        '0GT' => 'E02005849',
        '0GU' => 'E02005849',
        '0GW' => 'E02005849',
        '0GX' => 'E02005849',
        '0GY' => 'E02005849',
        '0GZ' => 'E02005849',
        '0HA' => 'E02005895',
        '0HB' => 'E02005895',
        '0HD' => 'E02005895',
        '0HE' => 'E02005895',
        '0HF' => 'E02005895',
        '0HG' => 'E02005895',
        '0HH' => 'E02005895',
        '0HJ' => 'E02005895',
        '0HL' => 'E02005895',
        '0HN' => 'E02005895',
        '0HP' => 'E02005849',
        '0HQ' => 'E02005895',
        '0HR' => 'E02005849',
        '0HS' => 'E02005849',
        '0HT' => 'E02005849',
        '0HU' => 'E02005849',
        '0HW' => 'E02005895',
        '0HX' => 'E02005849',
        '0HY' => 'E02005849',
        '0HZ' => 'E02005849',
        '0JA' => 'E02005849',
        '0JB' => 'E02005849',
        '0JD' => 'E02005849',
        '0JE' => 'E02005849',
        '0JF' => 'E02005849',
        '0JG' => 'E02005849',
        '0JH' => 'E02005849',
        '0JJ' => 'E02005849',
        '0JL' => 'E02005849',
        '0JN' => 'E02005849',
        '0JP' => 'E02005849',
        '0JQ' => 'E02005849',
        '0JR' => 'E02005849',
        '0JS' => 'E02005849',
        '0JT' => 'E02005849',
        '0JU' => 'E02005849',
        '0JW' => 'E02005849',
        '0JX' => 'E02005849',
        '0JY' => 'E02005849',
        '0JZ' => 'E02005849',
        '0LA' => 'E02005849',
        '0LB' => 'E02005849',
        '0LD' => 'E02005849',
        '0LE' => 'E02005849',
        '0LF' => 'E02005849',
        '0LG' => 'E02005849',
        '0LH' => 'E02005849',
        '0LJ' => 'E02005849',
        '0LL' => 'E02005849',
        '0LN' => 'E02005849',
        '0LP' => 'E02005849',
        '0LQ' => 'E02005849',
        '0LR' => 'E02005849',
        '0LS' => 'E02005849',
        '0LT' => 'E02005849',
        '0LU' => 'E02005849',
        '0LW' => 'E02005849',
        '0LX' => 'E02005849',
        '0LY' => 'E02005849',
        '0LZ' => 'E02005849',
        '0NA' => 'E02005849',
        '0NB' => 'E02005849',
        '0ND' => 'E02005849',
        '0NE' => 'E02005895',
        '0NF' => 'E02005849',
        '0NG' => 'E02005849',
        '0NH' => 'E02005849',
        '0NJ' => 'E02005849',
        '0NL' => 'E02005849',
        '0NN' => 'E02005849',
        '0NP' => 'E02005849',
        '0NQ' => 'E02005849',
        '0NR' => 'E02005849',
        '0NS' => 'E02005895',
        '0NT' => 'E02005895',
        '0NU' => 'E02005895',
        '0NW' => 'E02005849',
        '0NX' => 'E02005895',
        '0NY' => 'E02005895',
        '0NZ' => 'E02005895',
        '0PA' => 'E02005895',
        '0PB' => 'E02005895',
        '0PD' => 'E02005895',
        '0PE' => 'E02005849',
        '0PF' => 'E02005849',
        '0PG' => 'E02005849',
        '0PH' => 'E02005849',
        '0PJ' => 'E02005849',
        '0PL' => 'E02005849',
        '0PN' => 'E02005849',
        '0PP' => 'E02005849',
        '0PQ' => 'E02005849',
        '0PR' => 'E02005849',
        '0PS' => 'E02005849',
        '0PT' => 'E02005849',
        '0PU' => 'E02005849',
        '0PW' => 'E02005849',
        '0PX' => 'E02005849',
        '0PY' => 'E02005849',
        '0PZ' => 'E02005849',
        '0QA' => 'E02005849',
        '0QB' => 'E02005849',
        '0QD' => 'E02005849',
        '0QE' => 'E02005849',
        '0QF' => 'E02005899',
        '0QG' => 'E02005849',
        '0QH' => 'E02005849',
        '0QJ' => 'E02005849',
        '0QL' => 'E02005849',
        '0QN' => 'E02005849',
        '0QP' => 'E02005849',
        '0QQ' => 'E02005849',
        '0QR' => 'E02005849',
        '0QS' => 'E02005849',
        '0QT' => 'E02005849',
        '0QU' => 'E02005849',
        '0QW' => 'E02005849',
        '0QX' => 'E02005849',
        '0QY' => 'E02005849',
        '0QZ' => 'E02005849',
        '0RA' => 'E02005849',
        '0RB' => 'E02005849',
        '0RD' => 'E02005849',
        '0RE' => 'E02005849',
        '0RF' => 'E02005849',
        '0RG' => 'E02005849',
        '0RH' => 'E02005849',
        '0RJ' => 'E02005849',
        '0RL' => 'E02005849',
        '0RN' => 'E02005849',
        '0RP' => 'E02005849',
        '0RQ' => 'E02005849',
        '0RR' => 'E02005849',
        '0RS' => 'E02005849',
        '0RT' => 'E02005849',
        '0RU' => 'E02005849',
        '0RW' => 'E02005849',
        '0RX' => 'E02005849',
        '0RY' => 'E02005849',
        '0RZ' => 'E02005849',
        '0SA' => 'E02005849',
        '0SB' => 'E02005849',
        '0SD' => 'E02005849',
        '0SE' => 'E02005849',
        '0SF' => 'E02005849',
        '0SG' => 'E02005849',
        '0SH' => 'E02005849',
        '0SJ' => 'E02005895',
        '0SL' => 'E02005849',
        '0SN' => 'E02005849',
        '0SP' => 'E02005849',
        '0SQ' => 'E02005849',
        '0SR' => 'E02005849',
        '0SS' => 'E02005849',
        '0ST' => 'E02005849',
        '0SU' => 'E02005899',
        '0SW' => 'E02005849',
        '0SX' => 'E02005895',
        '0SY' => 'E02005895',
        '0SZ' => 'E02005895',
        '0TA' => 'E02005849',
        '0TB' => 'E02005895',
        '0TD' => 'E02005849',
        '0TE' => 'E02005849',
        '0TF' => 'E02005849',
        '0TG' => 'E02005849',
        '0TH' => 'E02005849',
        '0TJ' => 'E02005849',
        '0TL' => 'E02005849',
        '0TN' => 'E02005849',
        '0TP' => 'E02005849',
        '0TQ' => 'E02005849',
        '0TR' => 'E02005895',
        '0TT' => 'E02005849',
        '0TU' => 'E02005849',
        '0TW' => 'E02005849',
        '0TX' => 'E02005849',
        '0TY' => 'E02005849',
        '0TZ' => 'E02005849',
        '0UA' => 'E02005849',
        '0UB' => 'E02005849',
        '0UD' => 'E02005849',
        '0UE' => 'E02005849',
        '0UF' => 'E02005849',
        '0UG' => 'E02005849',
        '0UH' => 'E02005849',
        '0UJ' => 'E02005849',
        '0UL' => 'E02005849',
        '0UN' => 'E02005849',
        '0UP' => 'E02005849',
        '0UQ' => 'E02005849',
        '0UR' => 'E02005849',
        '0US' => 'E02005849',
        '0UT' => 'E02005849',
        '0UU' => 'E02005849',
        '0UW' => 'E02005849',
        '0UX' => 'E02005849',
        '0UY' => 'E02005849',
        '0UZ' => 'E02005849',
        '0WA' => 'E02005849',
        '0WB' => 'E02005899',
        '0WD' => 'E02005849',
        '0WE' => 'E02005899',
        '0WF' => 'E02005899',
        '0WG' => 'E02005849',
        '0WH' => 'E02005899',
        '0WJ' => 'E02005899',
        '0WL' => 'E02005899',
        '0WN' => 'E02005899',
        '0WP' => 'E02005899',
        '0WQ' => 'E02005899',
        '0WR' => 'E02005899',
        '0WS' => 'E02005849',
        '0WT' => 'E02005849',
        '0WU' => 'E02005899',
        '0WW' => 'E02005849',
        '0WY' => 'E02005849',
        '0WZ' => 'E02005899',
        '0YJ' => 'E02005849',
        '0ZH' => 'E02005849',
        '0ZZ' => 'E02005849',
        '8AA' => 'E02005897',
        '8AB' => 'E02005897',
        '8AD' => 'E02005897',
        '8AE' => 'E02005897',
        '8AF' => 'E02005897',
        '8AG' => 'E02005897',
        '8AH' => 'E02005897',
        '8AJ' => 'E02005897',
        '8AL' => 'E02005897',
        '8AN' => 'E02005897',
        '8AP' => 'E02005897',
        '8AQ' => 'E02005897',
        '8AR' => 'E02005897',
        '8AS' => 'E02005897',
        '8AT' => 'E02005897',
        '8AU' => 'E02005897',
        '8AW' => 'E02005897',
        '8AX' => 'E02005897',
        '8AY' => 'E02005897',
        '8AZ' => 'E02005897',
        '8BA' => 'E02005897',
        '8BB' => 'E02005897',
        '8BD' => 'E02005897',
        '8BE' => 'E02005897',
        '8BF' => 'E02005897',
        '8BG' => 'E02005897',
        '8BH' => 'E02005897',
        '8BJ' => 'E02005897',
        '8BL' => 'E02005897',
        '8BN' => 'E02005897',
        '8BP' => 'E02005897',
        '8BQ' => 'E02005897',
        '8BS' => 'E02005897',
        '8BT' => 'E02005897',
        '8BU' => 'E02005897',
        '8BW' => 'E02005897',
        '8BX' => 'E02005897',
        '8BY' => 'E02005897',
        '8BZ' => 'E02005897',
        '8DA' => 'E02005897',
        '8DB' => 'E02005897',
        '8DD' => 'E02005897',
        '8DE' => 'E02005897',
        '8DF' => 'E02005897',
        '8DG' => 'E02005897',
        '8DH' => 'E02005897',
        '8DJ' => 'E02005897',
        '8DL' => 'E02005897',
        '8DN' => 'E02005897',
        '8DP' => 'E02005897',
        '8DQ' => 'E02005897',
        '8DR' => 'E02005897',
        '8DS' => 'E02005897',
        '8DT' => 'E02005897',
        '8DU' => 'E02005897',
        '8DW' => 'E02005897',
        '8DX' => 'E02005897',
        '8DY' => 'E02005897',
        '8DZ' => 'E02005897',
        '8EA' => 'E02005897',
        '8EB' => 'E02005897',
        '8ED' => 'E02005897',
        '8EE' => 'E02005897',
        '8EF' => 'E02005897',
        '8EG' => 'E02005897',
        '8EH' => 'E02005897',
        '8EJ' => 'E02005897',
        '8EL' => 'E02005897',
        '8EN' => 'E02005897',
        '8EP' => 'E02005897',
        '8EQ' => 'E02005897',
        '8ER' => 'E02005897',
        '8ES' => 'E02005897',
        '8ET' => 'E02005897',
        '8EU' => 'E02005897',
        '8EW' => 'E02005897',
        '8EX' => 'E02005897',
        '8EY' => 'E02005897',
        '8EZ' => 'E02005897',
        '8FA' => 'E02005897',
        '8FB' => 'E02005897',
        '8FD' => 'E02005897',
        '8FE' => 'E02005897',
        '8FF' => 'E02005897',
        '8FG' => 'E02005897',
        '8FH' => 'E02005899',
        '8FJ' => 'E02005899',
        '8FL' => 'E02005895',
        '8FN' => 'E02005897',
        '8FP' => 'E02005897',
        '8FQ' => 'E02005899',
        '8FR' => 'E02005897',
        '8FS' => 'E02005897',
        '8FT' => 'E02005897',
        '8FU' => 'E02005897',
        '8FW' => 'E02005897',
        '8FX' => 'E02005897',
        '8FY' => 'E02005897',
        '8GZ' => 'E02005897',
        '8HA' => 'E02005897',
        '8HB' => 'E02005897',
        '8HD' => 'E02005897',
        '8HE' => 'E02005897',
        '8HF' => 'E02005897',
        '8HG' => 'E02005897',
        '8HH' => 'E02005897',
        '8HJ' => 'E02005897',
        '8HL' => 'E02005897',
        '8HN' => 'E02005897',
        '8HP' => 'E02005897',
        '8HQ' => 'E02005897',
        '8HR' => 'E02005897',
        '8HS' => 'E02005897',
        '8HT' => 'E02005897',
        '8HU' => 'E02005897',
        '8HW' => 'E02005897',
        '8HX' => 'E02005897',
        '8HY' => 'E02005897',
        '8HZ' => 'E02005897',
        '8JA' => 'E02005897',
        '8JB' => 'E02005897',
        '8JD' => 'E02005897',
        '8JE' => 'E02005897',
        '8JF' => 'E02005897',
        '8JG' => 'E02005897',
        '8JH' => 'E02005897',
        '8JJ' => 'E02005899',
        '8JL' => 'E02005897',
        '8JN' => 'E02005897',
        '8JP' => 'E02005897',
        '8JQ' => 'E02005897',
        '8JR' => 'E02005897',
        '8JS' => 'E02005897',
        '8JT' => 'E02005897',
        '8JU' => 'E02005897',
        '8JW' => 'E02005897',
        '8JX' => 'E02005897',
        '8JY' => 'E02005897',
        '8JZ' => 'E02005897',
        '8LA' => 'E02005897',
        '8LB' => 'E02005897',
        '8LD' => 'E02005897',
        '8LE' => 'E02005897',
        '8LF' => 'E02005897',
        '8LG' => 'E02005897',
        '8LH' => 'E02005897',
        '8LJ' => 'E02005897',
        '8LL' => 'E02005897',
        '8LN' => 'E02005897',
        '8LP' => 'E02005897',
        '8LQ' => 'E02005897',
        '8LR' => 'E02005897',
        '8LS' => 'E02005897',
        '8LT' => 'E02005897',
        '8LU' => 'E02005897',
        '8LW' => 'E02005897',
        '8LX' => 'E02005899',
        '8LY' => 'E02005897',
        '8LZ' => 'E02005897',
        '8NA' => 'E02005897',
        '8NB' => 'E02005897',
        '8ND' => 'E02005897',
        '8NE' => 'E02005897',
        '8NF' => 'E02005897',
        '8NG' => 'E02005897',
        '8NH' => 'E02005897',
        '8NJ' => 'E02005897',
        '8NL' => 'E02005897',
        '8NN' => 'E02005897',
        '8NP' => 'E02005900',
        '8NQ' => 'E02005897',
        '8NR' => 'E02005900',
        '8NS' => 'E02005900',
        '8NT' => 'E02005899',
        '8NU' => 'E02005899',
        '8NW' => 'E02005897',
        '8NX' => 'E02005897',
        '8NY' => 'E02005897',
        '8NZ' => 'E02005897',
        '8PA' => 'E02005897',
        '8PB' => 'E02005897',
        '8PD' => 'E02005895',
        '8PE' => 'E02005897',
        '8PF' => 'E02005899',
        '8PG' => 'E02005895',
        '8PH' => 'E02005895',
        '8PJ' => 'E02005895',
        '8PL' => 'E02005895',
        '8PN' => 'E02005895',
        '8PP' => 'E02005899',
        '8PQ' => 'E02005895',
        '8PR' => 'E02005897',
        '8PS' => 'E02005897',
        '8PT' => 'E02005897',
        '8PU' => 'E02005897',
        '8PW' => 'E02005897',
        '8PX' => 'E02005897',
        '8PY' => 'E02005897',
        '8PZ' => 'E02005897',
        '8QA' => 'E02005897',
        '8QB' => 'E02005897',
        '8QD' => 'E02005897',
        '8QE' => 'E02005897',
        '8QF' => 'E02005897',
        '8QG' => 'E02005897',
        '8QH' => 'E02005897',
        '8QJ' => 'E02005897',
        '8QL' => 'E02005897',
        '8QN' => 'E02005897',
        '8QP' => 'E02005897',
        '8QQ' => 'E02005897',
        '8QR' => 'E02005897',
        '8QS' => 'E02005897',
        '8QT' => 'E02005897',
        '8QU' => 'E02005897',
        '8QW' => 'E02005897',
        '8QX' => 'E02005897',
        '8QY' => 'E02005897',
        '8QZ' => 'E02005897',
        '8RA' => 'E02005897',
        '8RB' => 'E02005897',
        '8RD' => 'E02005897',
        '8RE' => 'E02005897',
        '8RF' => 'E02005897',
        '8RG' => 'E02005897',
        '8RH' => 'E02005897',
        '8RJ' => 'E02005897',
        '8RL' => 'E02005897',
        '8RN' => 'E02005897',
        '8RP' => 'E02005897',
        '8RQ' => 'E02005897',
        '8RR' => 'E02005897',
        '8RS' => 'E02005897',
        '8RT' => 'E02005897',
        '8RU' => 'E02005897',
        '8RW' => 'E02005897',
        '8RX' => 'E02005897',
        '8RY' => 'E02005897',
        '8RZ' => 'E02005897',
        '8SA' => 'E02005897',
        '8SB' => 'E02005897',
        '8SD' => 'E02005897',
        '8SE' => 'E02005897',
        '8SF' => 'E02005897',
        '8SG' => 'E02005897',
        '8SH' => 'E02005897',
        '8SJ' => 'E02005897',
        '8SL' => 'E02005897',
        '8SN' => 'E02005897',
        '8SP' => 'E02005897',
        '8SQ' => 'E02005897',
        '8SR' => 'E02005897',
        '8SS' => 'E02005897',
        '8ST' => 'E02005897',
        '8SU' => 'E02005897',
        '8SW' => 'E02005897',
        '8SX' => 'E02005897',
        '8SY' => 'E02005897',
        '8SZ' => 'E02005897',
        '8TA' => 'E02005897',
        '8TB' => 'E02005897',
        '8TD' => 'E02005897',
        '8TE' => 'E02005897',
        '8TF' => 'E02005897',
        '8TG' => 'E02005897',
        '8TH' => 'E02005897',
        '8TJ' => 'E02005897',
        '8TL' => 'E02005897',
        '8TN' => 'E02005897',
        '8TP' => 'E02005897',
        '8TQ' => 'E02005897',
        '8TR' => 'E02005897',
        '8TS' => 'E02005897',
        '8TT' => 'E02005897',
        '8TU' => 'E02005897',
        '8TW' => 'E02005897',
        '8TX' => 'E02005897',
        '8TY' => 'E02005897',
        '8TZ' => 'E02005897',
        '8UA' => 'E02005897',
        '8UB' => 'E02005897',
        '8UD' => 'E02005897',
        '8UE' => 'E02005897',
        '8UF' => 'E02005897',
        '8UG' => 'E02005897',
        '8UH' => 'E02005897',
        '8UJ' => 'E02005897',
        '8UL' => 'E02005899',
        '8UN' => 'E02005897',
        '8UP' => 'E02005897',
        '8UQ' => 'E02005899',
        '8UR' => 'E02005897',
        '8US' => 'E02005897',
        '8UT' => 'E02005897',
        '8UU' => 'E02005897',
        '8UW' => 'E02005897',
        '8UX' => 'E02005897',
        '8UY' => 'E02005897',
        '8UZ' => 'E02005897',
        '8WA' => 'E02005899',
        '8WB' => 'E02005899',
        '8WD' => 'E02005899',
        '8WE' => 'E02005899',
        '8WF' => 'E02005899',
        '8WG' => 'E02005899',
        '8WH' => 'E02005897',
        '8WJ' => 'E02005899',
        '8WL' => 'E02005897',
        '8WN' => 'E02005897',
        '8WP' => 'E02005897',
        '8WQ' => 'E02005897',
        '8WR' => 'E02005897',
        '8WS' => 'E02005899',
        '8WT' => 'E02005899',
        '8WX' => 'E02005899',
        '8WY' => 'E02005899',
        '8WZ' => 'E02005899',
        '8XF' => 'E02005899',
        '8ZR' => 'E02005899',
        '9AA' => 'E02005893',
        '9AB' => 'E02005893',
        '9AD' => 'E02005893',
        '9AE' => 'E02005893',
        '9AF' => 'E02005893',
        '9AG' => 'E02005893',
        '9AH' => 'E02005893',
        '9AJ' => 'E02005893',
        '9AL' => 'E02005893',
        '9AN' => 'E02005893',
        '9AP' => 'E02005893',
        '9AQ' => 'E02005893',
        '9AR' => 'E02005893',
        '9AS' => 'E02005893',
        '9AT' => 'E02005893',
        '9AU' => 'E02005893',
        '9AW' => 'E02005893',
        '9AX' => 'E02005893',
        '9AY' => 'E02005893',
        '9AZ' => 'E02005893',
        '9BA' => 'E02005893',
        '9BB' => 'E02005893',
        '9BD' => 'E02005893',
        '9BE' => 'E02005893',
        '9BF' => 'E02005893',
        '9BG' => 'E02005893',
        '9BH' => 'E02005893',
        '9BJ' => 'E02005893',
        '9BL' => 'E02005893',
        '9BN' => 'E02005893',
        '9BP' => 'E02005893',
        '9BQ' => 'E02005893',
        '9BS' => 'E02005893',
        '9BT' => 'E02005893',
        '9BU' => 'E02005893',
        '9BW' => 'E02005893',
        '9BX' => 'E02005894',
        '9BY' => 'E02005893',
        '9BZ' => 'E02005894',
        '9DA' => 'E02005894',
        '9DB' => 'E02005897',
        '9DD' => 'E02005897',
        '9DE' => 'E02005897',
        '9DF' => 'E02005897',
        '9DG' => 'E02005893',
        '9DH' => 'E02005893',
        '9DJ' => 'E02005897',
        '9DL' => 'E02005893',
        '9DN' => 'E02005897',
        '9DP' => 'E02005893',
        '9DQ' => 'E02005897',
        '9DR' => 'E02005893',
        '9DS' => 'E02005893',
        '9DT' => 'E02005893',
        '9DU' => 'E02005893',
        '9DW' => 'E02005893',
        '9DX' => 'E02005894',
        '9DY' => 'E02005893',
        '9DZ' => 'E02005893',
        '9EA' => 'E02005893',
        '9EB' => 'E02005893',
        '9ED' => 'E02005893',
        '9EE' => 'E02005893',
        '9EF' => 'E02005893',
        '9EG' => 'E02005893',
        '9EH' => 'E02005893',
        '9EJ' => 'E02005893',
        '9EL' => 'E02005893',
        '9EN' => 'E02005893',
        '9EP' => 'E02005893',
        '9EQ' => 'E02005893',
        '9ER' => 'E02005893',
        '9ES' => 'E02005893',
        '9ET' => 'E02005893',
        '9EU' => 'E02005893',
        '9EW' => 'E02005893',
        '9EX' => 'E02005893',
        '9EY' => 'E02005893',
        '9EZ' => 'E02005897',
        '9FA' => 'E02005899',
        '9FB' => 'E02005893',
        '9FD' => 'E02005893',
        '9FE' => 'E02005893',
        '9FF' => 'E02005893',
        '9FG' => 'E02005893',
        '9FH' => 'E02005893',
        '9FJ' => 'E02005893',
        '9FL' => 'E02005893',
        '9FN' => 'E02005893',
        '9FP' => 'E02005893',
        '9FQ' => 'E02005893',
        '9FR' => 'E02005893',
        '9FS' => 'E02005893',
        '9GA' => 'E02005893',
        '9GB' => 'E02005893',
        '9GH' => 'E02005901',
        '9GP' => 'E02005893',
        '9GS' => 'E02005893',
        '9GT' => 'E02005899',
        '9GU' => 'E02005893',
        '9GW' => 'E02005893',
        '9GX' => 'E02005895',
        '9GY' => 'E02005893',
        '9GZ' => 'E02005899',
        '9HA' => 'E02005897',
        '9HB' => 'E02005897',
        '9HD' => 'E02005897',
        '9HE' => 'E02005893',
        '9HF' => 'E02005893',
        '9HG' => 'E02005893',
        '9HH' => 'E02005893',
        '9HJ' => 'E02005893',
        '9HL' => 'E02005893',
        '9HN' => 'E02005893',
        '9HP' => 'E02005893',
        '9HQ' => 'E02005893',
        '9HR' => 'E02005893',
        '9HS' => 'E02005893',
        '9HT' => 'E02005893',
        '9HU' => 'E02005893',
        '9HW' => 'E02005893',
        '9HX' => 'E02005893',
        '9HY' => 'E02005893',
        '9HZ' => 'E02005893',
        '9JA' => 'E02005893',
        '9JB' => 'E02005893',
        '9JD' => 'E02005893',
        '9JE' => 'E02005893',
        '9JF' => 'E02005893',
        '9JG' => 'E02005893',
        '9JH' => 'E02005893',
        '9JJ' => 'E02005893',
        '9JL' => 'E02005893',
        '9JN' => 'E02005893',
        '9JP' => 'E02005893',
        '9JQ' => 'E02005893',
        '9JR' => 'E02005893',
        '9JS' => 'E02005893',
        '9JT' => 'E02005893',
        '9JU' => 'E02005893',
        '9JW' => 'E02005893',
        '9JX' => 'E02005893',
        '9JY' => 'E02005893',
        '9JZ' => 'E02005893',
        '9LA' => 'E02005893',
        '9LB' => 'E02005893',
        '9LD' => 'E02005895',
        '9LE' => 'E02005895',
        '9LF' => 'E02005895',
        '9LG' => 'E02005895',
        '9LH' => 'E02005895',
        '9LJ' => 'E02005895',
        '9LL' => 'E02005895',
        '9LN' => 'E02005895',
        '9LP' => 'E02005895',
        '9LQ' => 'E02005895',
        '9LR' => 'E02005895',
        '9LS' => 'E02005895',
        '9LT' => 'E02005895',
        '9LU' => 'E02005895',
        '9LW' => 'E02005895',
        '9LX' => 'E02005895',
        '9LY' => 'E02005895',
        '9LZ' => 'E02005895',
        '9NA' => 'E02005895',
        '9NB' => 'E02005895',
        '9ND' => 'E02005895',
        '9NE' => 'E02005893',
        '9NF' => 'E02005893',
        '9NG' => 'E02005895',
        '9NH' => 'E02005895',
        '9NJ' => 'E02005895',
        '9NL' => 'E02005895',
        '9NN' => 'E02005895',
        '9NP' => 'E02005895',
        '9NQ' => 'E02005895',
        '9NR' => 'E02005895',
        '9NS' => 'E02005895',
        '9NT' => 'E02005895',
        '9NU' => 'E02005895',
        '9NW' => 'E02005895',
        '9NX' => 'E02005895',
        '9NY' => 'E02005895',
        '9NZ' => 'E02005895',
        '9PA' => 'E02005895',
        '9PB' => 'E02005895',
        '9PD' => 'E02005895',
        '9PE' => 'E02005895',
        '9PF' => 'E02005895',
        '9PG' => 'E02005895',
        '9PH' => 'E02005895',
        '9PJ' => 'E02005895',
        '9PL' => 'E02005893',
        '9PN' => 'E02005893',
        '9PP' => 'E02005893',
        '9PQ' => 'E02005895',
        '9PR' => 'E02005893',
        '9PS' => 'E02005893',
        '9PT' => 'E02005893',
        '9PU' => 'E02005893',
        '9PW' => 'E02005893',
        '9PX' => 'E02005893',
        '9PY' => 'E02005893',
        '9PZ' => 'E02005893',
        '9QA' => 'E02005893',
        '9QB' => 'E02005893',
        '9QD' => 'E02005893',
        '9QE' => 'E02005895',
        '9QF' => 'E02005893',
        '9QG' => 'E02005893',
        '9QH' => 'E02005893',
        '9QJ' => 'E02005895',
        '9QL' => 'E02005893',
        '9QN' => 'E02005893',
        '9QP' => 'E02005893',
        '9QQ' => 'E02005893',
        '9QR' => 'E02005893',
        '9QS' => 'E02005893',
        '9QT' => 'E02005893',
        '9QU' => 'E02005893',
        '9QW' => 'E02005893',
        '9QX' => 'E02005893',
        '9QY' => 'E02005893',
        '9QZ' => 'E02005893',
        '9RA' => 'E02005893',
        '9RB' => 'E02005893',
        '9RD' => 'E02005893',
        '9RE' => 'E02005893',
        '9RF' => 'E02005893',
        '9RG' => 'E02005893',
        '9RH' => 'E02005893',
        '9RJ' => 'E02005893',
        '9RL' => 'E02005895',
        '9RN' => 'E02005893',
        '9RP' => 'E02005893',
        '9RQ' => 'E02005893',
        '9RR' => 'E02005895',
        '9RS' => 'E02005893',
        '9RT' => 'E02005895',
        '9RU' => 'E02005893',
        '9RW' => 'E02005893',
        '9RX' => 'E02005893',
        '9RY' => 'E02005893',
        '9RZ' => 'E02005893',
        '9SA' => 'E02005893',
        '9SB' => 'E02005893',
        '9SD' => 'E02005893',
        '9SE' => 'E02005893',
        '9SF' => 'E02005893',
        '9SG' => 'E02005893',
        '9SH' => 'E02005893',
        '9SJ' => 'E02005893',
        '9SL' => 'E02005893',
        '9SN' => 'E02005893',
        '9SP' => 'E02005893',
        '9SQ' => 'E02005893',
        '9SR' => 'E02005893',
        '9SS' => 'E02005893',
        '9ST' => 'E02005893',
        '9SU' => 'E02005893',
        '9SW' => 'E02005893',
        '9SX' => 'E02005893',
        '9SY' => 'E02005893',
        '9SZ' => 'E02005893',
        '9TA' => 'E02005893',
        '9TB' => 'E02005893',
        '9TD' => 'E02005893',
        '9TE' => 'E02005893',
        '9TF' => 'E02005893',
        '9TG' => 'E02005893',
        '9TH' => 'E02005893',
        '9TJ' => 'E02005893',
        '9TL' => 'E02005893',
        '9TN' => 'E02005893',
        '9TP' => 'E02005893',
        '9TQ' => 'E02005893',
        '9TR' => 'E02005893',
        '9TS' => 'E02005893',
        '9TT' => 'E02005893',
        '9TU' => 'E02005893',
        '9TW' => 'E02005893',
        '9TX' => 'E02005893',
        '9TY' => 'E02005893',
        '9TZ' => 'E02005893',
        '9UA' => 'E02005893',
        '9UB' => 'E02005893',
        '9UD' => 'E02005893',
        '9UE' => 'E02005893',
        '9UF' => 'E02005893',
        '9UG' => 'E02005893',
        '9UH' => 'E02005893',
        '9UJ' => 'E02005893',
        '9UL' => 'E02005893',
        '9UN' => 'E02005893',
        '9UP' => 'E02005893',
        '9UQ' => 'E02005893',
        '9UR' => 'E02005893',
        '9US' => 'E02005895',
        '9UT' => 'E02005893',
        '9UU' => 'E02005893',
        '9UW' => 'E02005893',
        '9UX' => 'E02005893',
        '9UY' => 'E02005893',
        '9UZ' => 'E02005893',
        '9WA' => 'E02005895',
        '9WB' => 'E02005895',
        '9WD' => 'E02005893',
        '9WE' => 'E02005893',
        '9WF' => 'E02005893',
        '9WG' => 'E02005893',
        '9WH' => 'E02005893',
        '9WJ' => 'E02005893',
        '9WL' => 'E02005893',
        '9WN' => 'E02005893',
        '9WP' => 'E02005895',
        '9WQ' => 'E02005893',
        '9WR' => 'E02005893',
        '9WS' => 'E02005893',
        '9WT' => 'E02005893',
        '9WW' => 'E02005899',
        '9WX' => 'E02005899',
        '9WY' => 'E02005899',
        '9WZ' => 'E02005895',
        '9XA' => 'E02005893',
        '9XB' => 'E02005893',
        '9XD' => 'E02005893',
        '9XE' => 'E02005893',
        '9XF' => 'E02005893',
        '9XG' => 'E02005893',
        '9XH' => 'E02005893',
        '9XJ' => 'E02005893',
        '9XL' => 'E02005893',
        '9XN' => 'E02005893',
        '9XQ' => 'E02005893',
        '9XU' => 'E02005893',
        '9YA' => 'E02005895',
        '9YE' => 'E02005899',
        '9YH' => 'E02005895',
        '9YU' => 'E02005893',
        '9YY' => 'E02005899',
        '9ZB' => 'E02005893',
        '9ZD' => 'E02005893',
        '9ZE' => 'E02005895',
        '9ZF' => 'E02005893',
        '9ZG' => 'E02005895',
        '9ZR' => 'E02005899',
        '9ZZ' => 'E02005895',
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
