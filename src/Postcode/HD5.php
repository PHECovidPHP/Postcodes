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
final class HD5
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02002307',
        '0AB' => 'E02002307',
        '0AD' => 'E02002307',
        '0AE' => 'E02002307',
        '0AF' => 'E02002307',
        '0AG' => 'E02002307',
        '0AH' => 'E02002307',
        '0AJ' => 'E02002314',
        '0AL' => 'E02002302',
        '0AN' => 'E02002302',
        '0AP' => 'E02002302',
        '0AQ' => 'E02002307',
        '0AR' => 'E02002302',
        '0AS' => 'E02002302',
        '0AT' => 'E02002302',
        '0AU' => 'E02002302',
        '0AW' => 'E02002302',
        '0AX' => 'E02002302',
        '0AY' => 'E02002302',
        '0AZ' => 'E02002302',
        '0BA' => 'E02002302',
        '0BB' => 'E02002302',
        '0BD' => 'E02002302',
        '0BE' => 'E02002302',
        '0BG' => 'E02002302',
        '0BH' => 'E02002302',
        '0BJ' => 'E02002302',
        '0BL' => 'E02002302',
        '0BN' => 'E02002302',
        '0BP' => 'E02002302',
        '0BQ' => 'E02002302',
        '0BS' => 'E02002302',
        '0BT' => 'E02002302',
        '0BU' => 'E02002296',
        '0BW' => 'E02002310',
        '0BX' => 'E02002302',
        '0BY' => 'E02002302',
        '0DA' => 'E02002302',
        '0DB' => 'E02002302',
        '0DD' => 'E02002302',
        '0DE' => 'E02002302',
        '0DF' => 'E02002302',
        '0DG' => 'E02002302',
        '0DH' => 'E02002302',
        '0DJ' => 'E02002302',
        '0DL' => 'E02002302',
        '0DN' => 'E02002302',
        '0DP' => 'E02002302',
        '0DQ' => 'E02002302',
        '0DR' => 'E02002302',
        '0DS' => 'E02002302',
        '0DT' => 'E02002302',
        '0DU' => 'E02002302',
        '0DW' => 'E02002302',
        '0DX' => 'E02002302',
        '0DY' => 'E02002302',
        '0DZ' => 'E02002302',
        '0EA' => 'E02002302',
        '0EB' => 'E02002302',
        '0ED' => 'E02002302',
        '0EE' => 'E02002302',
        '0EF' => 'E02002302',
        '0EG' => 'E02002302',
        '0EH' => 'E02002302',
        '0EJ' => 'E02002302',
        '0EL' => 'E02002302',
        '0EN' => 'E02002302',
        '0EP' => 'E02002302',
        '0EQ' => 'E02002302',
        '0ER' => 'E02002302',
        '0ES' => 'E02002302',
        '0ET' => 'E02002302',
        '0EU' => 'E02002302',
        '0EW' => 'E02002302',
        '0EX' => 'E02002302',
        '0EY' => 'E02002302',
        '0EZ' => 'E02002302',
        '0HA' => 'E02002302',
        '0HF' => 'E02002302',
        '0HH' => 'E02002302',
        '0HJ' => 'E02002302',
        '0HL' => 'E02002302',
        '0HN' => 'E02002302',
        '0HP' => 'E02002302',
        '0HQ' => 'E02002302',
        '0HR' => 'E02002302',
        '0HS' => 'E02002302',
        '0HT' => 'E02002302',
        '0HU' => 'E02002302',
        '0HW' => 'E02002302',
        '0HX' => 'E02002302',
        '0HY' => 'E02002302',
        '0HZ' => 'E02002302',
        '0JA' => 'E02002302',
        '0JB' => 'E02002302',
        '0JD' => 'E02002302',
        '0JE' => 'E02002302',
        '0JF' => 'E02002302',
        '0JG' => 'E02002302',
        '0JH' => 'E02002302',
        '0JJ' => 'E02002302',
        '0JL' => 'E02002302',
        '0JN' => 'E02002302',
        '0JP' => 'E02002302',
        '0JQ' => 'E02002302',
        '0JR' => 'E02002302',
        '0JS' => 'E02002307',
        '0JT' => 'E02002307',
        '0JU' => 'E02002302',
        '0JW' => 'E02002302',
        '0JX' => 'E02002302',
        '0JY' => 'E02002302',
        '0JZ' => 'E02002307',
        '0LA' => 'E02002302',
        '0LB' => 'E02002302',
        '0LD' => 'E02002302',
        '0LE' => 'E02002302',
        '0LF' => 'E02002302',
        '0LG' => 'E02002302',
        '0LH' => 'E02002302',
        '0LJ' => 'E02002302',
        '0LL' => 'E02002302',
        '0LN' => 'E02002302',
        '0LP' => 'E02002302',
        '0LQ' => 'E02002302',
        '0LR' => 'E02002302',
        '0LS' => 'E02002302',
        '0LT' => 'E02002302',
        '0LU' => 'E02002302',
        '0LW' => 'E02002302',
        '0LX' => 'E02002302',
        '0LY' => 'E02002302',
        '0LZ' => 'E02002302',
        '0NA' => 'E02002302',
        '0NB' => 'E02002302',
        '0ND' => 'E02002302',
        '0NE' => 'E02002302',
        '0NF' => 'E02002302',
        '0NG' => 'E02002302',
        '0NH' => 'E02002302',
        '0NJ' => 'E02002302',
        '0NL' => 'E02002302',
        '0NP' => 'E02002302',
        '0NQ' => 'E02002302',
        '0NR' => 'E02002299',
        '0NS' => 'E02002302',
        '0NT' => 'E02002302',
        '0NU' => 'E02002302',
        '0NW' => 'E02002302',
        '0NX' => 'E02002302',
        '0NY' => 'E02002302',
        '0NZ' => 'E02002302',
        '0PA' => 'E02002302',
        '0PB' => 'E02002302',
        '0PD' => 'E02002302',
        '0PE' => 'E02002302',
        '0PF' => 'E02002302',
        '0PG' => 'E02002302',
        '0PH' => 'E02002302',
        '0PJ' => 'E02002302',
        '0PL' => 'E02002302',
        '0PN' => 'E02002302',
        '0PP' => 'E02002302',
        '0PQ' => 'E02002302',
        '0PR' => 'E02002302',
        '0PS' => 'E02002302',
        '0PT' => 'E02002302',
        '0PU' => 'E02002302',
        '0PW' => 'E02002302',
        '0PX' => 'E02002302',
        '0PY' => 'E02002302',
        '0PZ' => 'E02002302',
        '0QA' => 'E02002302',
        '0QB' => 'E02002302',
        '0QD' => 'E02002302',
        '0QE' => 'E02002302',
        '0QP' => 'E02002307',
        '0QR' => 'E02002302',
        '0QS' => 'E02002307',
        '0QT' => 'E02002307',
        '0QU' => 'E02002307',
        '0QX' => 'E02002307',
        '0QY' => 'E02002307',
        '0QZ' => 'E02002307',
        '0RA' => 'E02002307',
        '0RB' => 'E02002307',
        '0RD' => 'E02002292',
        '0RE' => 'E02002295',
        '0RF' => 'E02002302',
        '0RG' => 'E02002307',
        '0RH' => 'E02002295',
        '0RJ' => 'E02002292',
        '0RL' => 'E02002292',
        '0RN' => 'E02002295',
        '0RP' => 'E02002292',
        '0RQ' => 'E02002295',
        '0RR' => 'E02002292',
        '0RS' => 'E02002292',
        '0RT' => 'E02002292',
        '0RU' => 'E02002292',
        '0RW' => 'E02002258',
        '0RX' => 'E02002292',
        '0UJ' => 'E02002299',
        '0UL' => 'E02002299',
        '0UN' => 'E02002299',
        '0UP' => 'E02002302',
        '0UQ' => 'E02002302',
        '0UR' => 'E02002302',
        '0US' => 'E02002299',
        '0UT' => 'E02002292',
        '0UU' => 'E02002299',
        '0UW' => 'E02002299',
        '0UX' => 'E02002299',
        '0UY' => 'E02002302',
        '0UZ' => 'E02002292',
        '0WX' => 'E02002299',
        '0WZ' => 'E02002299',
        '0XA' => 'E02002299',
        '0XB' => 'E02002299',
        '0XD' => 'E02002299',
        '8AA' => 'E02002305',
        '8AB' => 'E02002305',
        '8AD' => 'E02002305',
        '8AE' => 'E02002305',
        '8AF' => 'E02002305',
        '8AG' => 'E02002305',
        '8AH' => 'E02002312',
        '8AJ' => 'E02002310',
        '8AL' => 'E02002310',
        '8AN' => 'E02002312',
        '8AP' => 'E02002312',
        '8AQ' => 'E02002312',
        '8AR' => 'E02002312',
        '8AS' => 'E02002312',
        '8AT' => 'E02002310',
        '8AU' => 'E02002310',
        '8AW' => 'E02002310',
        '8AX' => 'E02002310',
        '8AY' => 'E02002312',
        '8AZ' => 'E02002312',
        '8BA' => 'E02002310',
        '8BB' => 'E02002310',
        '8BD' => 'E02002310',
        '8BE' => 'E02002310',
        '8BG' => 'E02002310',
        '8BH' => 'E02002310',
        '8BJ' => 'E02002310',
        '8BL' => 'E02002310',
        '8BN' => 'E02002310',
        '8BP' => 'E02002310',
        '8BQ' => 'E02002310',
        '8BR' => 'E02002310',
        '8BS' => 'E02002310',
        '8BT' => 'E02002312',
        '8BU' => 'E02002310',
        '8BW' => 'E02002310',
        '8BY' => 'E02002314',
        '8BZ' => 'E02002314',
        '8DA' => 'E02002307',
        '8DB' => 'E02002307',
        '8DD' => 'E02002305',
        '8DE' => 'E02002305',
        '8DF' => 'E02002310',
        '8DG' => 'E02002314',
        '8DH' => 'E02002310',
        '8DJ' => 'E02002310',
        '8DL' => 'E02002310',
        '8DN' => 'E02002310',
        '8DP' => 'E02002310',
        '8DQ' => 'E02002310',
        '8DR' => 'E02002310',
        '8DS' => 'E02002310',
        '8DT' => 'E02002310',
        '8DU' => 'E02002310',
        '8DW' => 'E02002310',
        '8DX' => 'E02002310',
        '8DY' => 'E02002310',
        '8DZ' => 'E02002310',
        '8EA' => 'E02002310',
        '8EB' => 'E02002310',
        '8ED' => 'E02002310',
        '8EE' => 'E02002310',
        '8EG' => 'E02002310',
        '8EH' => 'E02002310',
        '8EJ' => 'E02002310',
        '8EL' => 'E02002314',
        '8EN' => 'E02002310',
        '8EP' => 'E02002310',
        '8ER' => 'E02002310',
        '8ES' => 'E02002310',
        '8ET' => 'E02002310',
        '8EU' => 'E02002310',
        '8EW' => 'E02002310',
        '8EX' => 'E02002310',
        '8EY' => 'E02002310',
        '8EZ' => 'E02002312',
        '8FA' => 'E02002310',
        '8GZ' => 'E02002299',
        '8HA' => 'E02002312',
        '8HB' => 'E02002310',
        '8HD' => 'E02002312',
        '8HE' => 'E02002312',
        '8HF' => 'E02002312',
        '8HG' => 'E02002312',
        '8HH' => 'E02002310',
        '8HN' => 'E02002312',
        '8HP' => 'E02002312',
        '8HQ' => 'E02002314',
        '8HR' => 'E02002312',
        '8HS' => 'E02002312',
        '8HT' => 'E02002312',
        '8HU' => 'E02002312',
        '8HW' => 'E02002312',
        '8HX' => 'E02002312',
        '8HY' => 'E02002312',
        '8HZ' => 'E02002312',
        '8JA' => 'E02002312',
        '8JB' => 'E02002312',
        '8JD' => 'E02002312',
        '8JE' => 'E02002312',
        '8JF' => 'E02002310',
        '8JJ' => 'E02002312',
        '8JL' => 'E02002312',
        '8JN' => 'E02002312',
        '8JP' => 'E02002312',
        '8JR' => 'E02002312',
        '8JS' => 'E02002312',
        '8JT' => 'E02002312',
        '8JU' => 'E02002312',
        '8JW' => 'E02002312',
        '8JX' => 'E02002312',
        '8JY' => 'E02002312',
        '8JZ' => 'E02002312',
        '8LA' => 'E02002312',
        '8LB' => 'E02002312',
        '8LD' => 'E02002312',
        '8LE' => 'E02002312',
        '8LF' => 'E02002312',
        '8LG' => 'E02002312',
        '8LH' => 'E02002312',
        '8LJ' => 'E02002312',
        '8LP' => 'E02002314',
        '8LQ' => 'E02002312',
        '8LR' => 'E02002314',
        '8LS' => 'E02002314',
        '8LT' => 'E02002314',
        '8LU' => 'E02002314',
        '8LW' => 'E02002314',
        '8LX' => 'E02002314',
        '8LY' => 'E02002314',
        '8LZ' => 'E02002314',
        '8NA' => 'E02002314',
        '8NB' => 'E02002314',
        '8ND' => 'E02002314',
        '8NE' => 'E02002314',
        '8NF' => 'E02002314',
        '8NG' => 'E02002314',
        '8NH' => 'E02002314',
        '8NJ' => 'E02002314',
        '8NN' => 'E02002314',
        '8NP' => 'E02002314',
        '8NQ' => 'E02002314',
        '8NR' => 'E02002314',
        '8NS' => 'E02002314',
        '8NT' => 'E02002314',
        '8NU' => 'E02002314',
        '8NW' => 'E02002314',
        '8NX' => 'E02002314',
        '8NY' => 'E02002314',
        '8NZ' => 'E02002314',
        '8PA' => 'E02002314',
        '8PB' => 'E02002314',
        '8PD' => 'E02002314',
        '8PE' => 'E02002314',
        '8PF' => 'E02002310',
        '8PG' => 'E02002310',
        '8PH' => 'E02002310',
        '8PJ' => 'E02002310',
        '8PL' => 'E02002310',
        '8PN' => 'E02002310',
        '8PP' => 'E02002310',
        '8PQ' => 'E02002314',
        '8PR' => 'E02002310',
        '8PS' => 'E02002310',
        '8PT' => 'E02002310',
        '8PU' => 'E02002310',
        '8PW' => 'E02002310',
        '8PX' => 'E02002310',
        '8PY' => 'E02002310',
        '8PZ' => 'E02002310',
        '8QA' => 'E02002310',
        '8QB' => 'E02002310',
        '8QD' => 'E02002310',
        '8QE' => 'E02002310',
        '8QF' => 'E02002310',
        '8QG' => 'E02002310',
        '8QH' => 'E02002310',
        '8QJ' => 'E02002310',
        '8QL' => 'E02002310',
        '8QN' => 'E02002310',
        '8QP' => 'E02002310',
        '8QQ' => 'E02002310',
        '8QT' => 'E02002310',
        '8QU' => 'E02002314',
        '8QW' => 'E02002302',
        '8QX' => 'E02002314',
        '8QY' => 'E02002314',
        '8QZ' => 'E02002310',
        '8RA' => 'E02002314',
        '8RB' => 'E02002314',
        '8RD' => 'E02002314',
        '8RE' => 'E02002314',
        '8RF' => 'E02002314',
        '8RG' => 'E02002314',
        '8RH' => 'E02002314',
        '8RJ' => 'E02002314',
        '8RL' => 'E02002314',
        '8RN' => 'E02002314',
        '8RP' => 'E02002314',
        '8RQ' => 'E02002314',
        '8RR' => 'E02002314',
        '8RS' => 'E02002302',
        '8RT' => 'E02002314',
        '8RU' => 'E02002314',
        '8RW' => 'E02002314',
        '8RX' => 'E02002314',
        '8RY' => 'E02002314',
        '8RZ' => 'E02002314',
        '8SA' => 'E02002314',
        '8SB' => 'E02002314',
        '8SD' => 'E02002314',
        '8SE' => 'E02002310',
        '8SF' => 'E02002310',
        '8SG' => 'E02002310',
        '8SH' => 'E02002310',
        '8SJ' => 'E02002310',
        '8SL' => 'E02002310',
        '8SN' => 'E02002310',
        '8SP' => 'E02002310',
        '8SQ' => 'E02002310',
        '8SR' => 'E02002310',
        '8SS' => 'E02002310',
        '8ST' => 'E02002314',
        '8SU' => 'E02002314',
        '8SW' => 'E02002310',
        '8SX' => 'E02002302',
        '8SY' => 'E02002299',
        '8SZ' => 'E02002299',
        '8TA' => 'E02002314',
        '8TB' => 'E02002314',
        '8TD' => 'E02002314',
        '8TE' => 'E02002314',
        '8TF' => 'E02002314',
        '8TG' => 'E02002310',
        '8TH' => 'E02002310',
        '8TJ' => 'E02002310',
        '8TL' => 'E02002310',
        '8TN' => 'E02002310',
        '8TP' => 'E02002310',
        '8TQ' => 'E02002310',
        '8TR' => 'E02002310',
        '8TS' => 'E02002310',
        '8TT' => 'E02002310',
        '8TU' => 'E02002314',
        '8TW' => 'E02002314',
        '8TX' => 'E02002314',
        '8TY' => 'E02002314',
        '8TZ' => 'E02002314',
        '8UA' => 'E02002314',
        '8UB' => 'E02002314',
        '8UD' => 'E02002314',
        '8UE' => 'E02002310',
        '8UF' => 'E02002314',
        '8UG' => 'E02002314',
        '8UH' => 'E02002314',
        '8UJ' => 'E02002314',
        '8UL' => 'E02002314',
        '8UN' => 'E02002314',
        '8UP' => 'E02002314',
        '8UR' => 'E02002314',
        '8US' => 'E02002314',
        '8UT' => 'E02002314',
        '8UU' => 'E02002314',
        '8UW' => 'E02002314',
        '8UX' => 'E02002314',
        '8UY' => 'E02002314',
        '8UZ' => 'E02002314',
        '8WA' => 'E02002299',
        '8WB' => 'E02002314',
        '8WD' => 'E02002314',
        '8WE' => 'E02002314',
        '8WF' => 'E02002314',
        '8WG' => 'E02002314',
        '8WH' => 'E02002310',
        '8WJ' => 'E02002299',
        '8WL' => 'E02002299',
        '8WN' => 'E02002299',
        '8WP' => 'E02002310',
        '8WQ' => 'E02002310',
        '8WR' => 'E02002310',
        '8WS' => 'E02002310',
        '8WT' => 'E02002310',
        '8WU' => 'E02002299',
        '8WW' => 'E02002310',
        '8WX' => 'E02002299',
        '8WY' => 'E02002299',
        '8WZ' => 'E02002299',
        '8XA' => 'E02002314',
        '8XB' => 'E02002314',
        '8XD' => 'E02002314',
        '8XE' => 'E02002314',
        '8XF' => 'E02002314',
        '8XG' => 'E02002314',
        '8XH' => 'E02002314',
        '8XJ' => 'E02002314',
        '8XL' => 'E02002314',
        '8XN' => 'E02002314',
        '8XP' => 'E02002314',
        '8XQ' => 'E02002314',
        '8XR' => 'E02002314',
        '8XS' => 'E02002314',
        '8XT' => 'E02002314',
        '8XU' => 'E02002312',
        '8XW' => 'E02002314',
        '8XX' => 'E02002314',
        '8XY' => 'E02002314',
        '8XZ' => 'E02002314',
        '8YA' => 'E02002299',
        '8YB' => 'E02002299',
        '8YD' => 'E02002314',
        '8YE' => 'E02002310',
        '8YF' => 'E02002299',
        '8YG' => 'E02002299',
        '8YH' => 'E02002310',
        '8YJ' => 'E02002310',
        '8YL' => 'E02002299',
        '8YN' => 'E02002299',
        '8YP' => 'E02002314',
        '8YQ' => 'E02002310',
        '8YR' => 'E02002314',
        '8YS' => 'E02002310',
        '8YT' => 'E02002299',
        '8YU' => 'E02002299',
        '8YW' => 'E02002299',
        '8YX' => 'E02002310',
        '8YY' => 'E02002299',
        '8YZ' => 'E02002299',
        '8ZA' => 'E02002299',
        '8ZB' => 'E02002299',
        '8ZD' => 'E02002299',
        '8ZE' => 'E02002299',
        '8ZF' => 'E02002299',
        '8ZG' => 'E02002299',
        '8ZH' => 'E02002314',
        '8ZT' => 'E02002299',
        '8ZU' => 'E02002299',
        '8ZW' => 'E02002299',
        '8ZX' => 'E02002299',
        '8ZZ' => 'E02002299',
        '9AA' => 'E02002299',
        '9AB' => 'E02002299',
        '9AD' => 'E02002299',
        '9AE' => 'E02002299',
        '9AF' => 'E02002299',
        '9AG' => 'E02002299',
        '9AH' => 'E02002312',
        '9AJ' => 'E02002312',
        '9AL' => 'E02002299',
        '9AN' => 'E02002299',
        '9AP' => 'E02002312',
        '9AR' => 'E02002312',
        '9AT' => 'E02002312',
        '9AU' => 'E02002312',
        '9AW' => 'E02002312',
        '9AX' => 'E02002312',
        '9AY' => 'E02002312',
        '9AZ' => 'E02002312',
        '9BA' => 'E02002299',
        '9BB' => 'E02002312',
        '9BD' => 'E02002312',
        '9BE' => 'E02002305',
        '9BG' => 'E02002305',
        '9BJ' => 'E02002312',
        '9BL' => 'E02002305',
        '9BP' => 'E02002299',
        '9BQ' => 'E02002305',
        '9BR' => 'E02002312',
        '9BS' => 'E02002299',
        '9BT' => 'E02002307',
        '9BU' => 'E02002305',
        '9BW' => 'E02002305',
        '9BX' => 'E02002305',
        '9BY' => 'E02002305',
        '9BZ' => 'E02002305',
        '9DA' => 'E02002305',
        '9DB' => 'E02002305',
        '9DD' => 'E02002305',
        '9DE' => 'E02002305',
        '9DF' => 'E02002305',
        '9DG' => 'E02002305',
        '9DH' => 'E02002305',
        '9DJ' => 'E02002305',
        '9DL' => 'E02002305',
        '9DN' => 'E02002305',
        '9DP' => 'E02002305',
        '9DQ' => 'E02002305',
        '9DR' => 'E02002305',
        '9DS' => 'E02002305',
        '9DT' => 'E02002305',
        '9DU' => 'E02002305',
        '9DW' => 'E02002305',
        '9DX' => 'E02002305',
        '9DY' => 'E02002305',
        '9DZ' => 'E02002305',
        '9EA' => 'E02002305',
        '9EB' => 'E02002305',
        '9ED' => 'E02002305',
        '9EE' => 'E02002305',
        '9EF' => 'E02002305',
        '9EG' => 'E02002305',
        '9EH' => 'E02002305',
        '9EJ' => 'E02002305',
        '9EL' => 'E02002305',
        '9EN' => 'E02002305',
        '9EP' => 'E02002305',
        '9EQ' => 'E02002305',
        '9ER' => 'E02002305',
        '9ES' => 'E02002305',
        '9ET' => 'E02002305',
        '9EU' => 'E02002305',
        '9EW' => 'E02002305',
        '9EX' => 'E02002305',
        '9FB' => 'E02002307',
        '9FE' => 'E02002299',
        '9FF' => 'E02002299',
        '9FG' => 'E02002305',
        '9HA' => 'E02002307',
        '9HB' => 'E02002305',
        '9HD' => 'E02002305',
        '9HE' => 'E02002305',
        '9HF' => 'E02002307',
        '9HG' => 'E02002307',
        '9HH' => 'E02002307',
        '9HJ' => 'E02002307',
        '9HL' => 'E02002307',
        '9HN' => 'E02002307',
        '9HP' => 'E02002307',
        '9HQ' => 'E02002307',
        '9HR' => 'E02002307',
        '9HS' => 'E02002307',
        '9HT' => 'E02002307',
        '9HU' => 'E02002307',
        '9HW' => 'E02002307',
        '9HX' => 'E02002307',
        '9HY' => 'E02002307',
        '9HZ' => 'E02002307',
        '9JA' => 'E02002307',
        '9JB' => 'E02002307',
        '9JE' => 'E02002305',
        '9JL' => 'E02002307',
        '9JN' => 'E02002307',
        '9JP' => 'E02002305',
        '9JR' => 'E02002305',
        '9JT' => 'E02002305',
        '9JU' => 'E02002305',
        '9JW' => 'E02002305',
        '9JX' => 'E02002305',
        '9JY' => 'E02002305',
        '9JZ' => 'E02002305',
        '9LA' => 'E02002305',
        '9LB' => 'E02002307',
        '9LD' => 'E02002305',
        '9LE' => 'E02002307',
        '9LF' => 'E02002305',
        '9LG' => 'E02002305',
        '9LH' => 'E02002307',
        '9LJ' => 'E02002307',
        '9LL' => 'E02002307',
        '9LN' => 'E02002307',
        '9LP' => 'E02002307',
        '9LQ' => 'E02002307',
        '9LR' => 'E02002307',
        '9LS' => 'E02002307',
        '9LT' => 'E02002307',
        '9LU' => 'E02002307',
        '9LW' => 'E02002307',
        '9LX' => 'E02002305',
        '9LY' => 'E02002307',
        '9LZ' => 'E02002307',
        '9NA' => 'E02002305',
        '9NB' => 'E02002299',
        '9ND' => 'E02002299',
        '9NE' => 'E02002299',
        '9NF' => 'E02002305',
        '9NG' => 'E02002305',
        '9NH' => 'E02002305',
        '9NJ' => 'E02002305',
        '9NL' => 'E02002305',
        '9NN' => 'E02002305',
        '9NP' => 'E02002305',
        '9NQ' => 'E02002305',
        '9NR' => 'E02002305',
        '9NS' => 'E02002305',
        '9NT' => 'E02002305',
        '9NU' => 'E02002305',
        '9NW' => 'E02002305',
        '9NX' => 'E02002305',
        '9NY' => 'E02002305',
        '9NZ' => 'E02002305',
        '9PA' => 'E02002305',
        '9PB' => 'E02002305',
        '9PD' => 'E02002305',
        '9PE' => 'E02002305',
        '9PF' => 'E02002305',
        '9PG' => 'E02002305',
        '9PH' => 'E02002305',
        '9PJ' => 'E02002305',
        '9PL' => 'E02002305',
        '9PN' => 'E02002305',
        '9PP' => 'E02002305',
        '9PQ' => 'E02002305',
        '9PR' => 'E02002305',
        '9PS' => 'E02002305',
        '9PT' => 'E02002299',
        '9PU' => 'E02002305',
        '9PW' => 'E02002305',
        '9PX' => 'E02002305',
        '9PY' => 'E02002305',
        '9PZ' => 'E02002305',
        '9QA' => 'E02002305',
        '9QB' => 'E02002305',
        '9QD' => 'E02002305',
        '9QE' => 'E02002305',
        '9QF' => 'E02002305',
        '9QG' => 'E02002307',
        '9QH' => 'E02002305',
        '9QJ' => 'E02002305',
        '9QL' => 'E02002305',
        '9QN' => 'E02002305',
        '9QP' => 'E02002305',
        '9QQ' => 'E02002305',
        '9QR' => 'E02002305',
        '9QS' => 'E02002305',
        '9QT' => 'E02002305',
        '9QU' => 'E02002305',
        '9QW' => 'E02002305',
        '9QX' => 'E02002305',
        '9QY' => 'E02002305',
        '9QZ' => 'E02002305',
        '9RA' => 'E02002305',
        '9RB' => 'E02002305',
        '9RD' => 'E02002305',
        '9RE' => 'E02002305',
        '9RF' => 'E02002305',
        '9RG' => 'E02002305',
        '9RH' => 'E02002305',
        '9RJ' => 'E02002305',
        '9RL' => 'E02002305',
        '9RN' => 'E02002305',
        '9RP' => 'E02002305',
        '9RQ' => 'E02002305',
        '9RS' => 'E02002307',
        '9RW' => 'E02002305',
        '9SA' => 'E02002307',
        '9SB' => 'E02002307',
        '9SD' => 'E02002307',
        '9SE' => 'E02002307',
        '9SF' => 'E02002307',
        '9SG' => 'E02002307',
        '9SH' => 'E02002307',
        '9SJ' => 'E02002307',
        '9SL' => 'E02002307',
        '9SN' => 'E02002307',
        '9SP' => 'E02002307',
        '9SQ' => 'E02002307',
        '9SR' => 'E02002307',
        '9SS' => 'E02002307',
        '9ST' => 'E02002307',
        '9SU' => 'E02002307',
        '9SW' => 'E02002307',
        '9SX' => 'E02002307',
        '9SY' => 'E02002307',
        '9SZ' => 'E02002307',
        '9TA' => 'E02002307',
        '9TB' => 'E02002307',
        '9TD' => 'E02002307',
        '9TE' => 'E02002307',
        '9TF' => 'E02002307',
        '9TG' => 'E02002307',
        '9TH' => 'E02002307',
        '9TJ' => 'E02002307',
        '9TL' => 'E02002307',
        '9TN' => 'E02002307',
        '9TP' => 'E02002307',
        '9TQ' => 'E02002307',
        '9TR' => 'E02002307',
        '9TS' => 'E02002307',
        '9TT' => 'E02002307',
        '9TU' => 'E02002307',
        '9TX' => 'E02002307',
        '9TY' => 'E02002307',
        '9TZ' => 'E02002307',
        '9UA' => 'E02002307',
        '9UB' => 'E02002307',
        '9UD' => 'E02002307',
        '9UE' => 'E02002307',
        '9UF' => 'E02002307',
        '9UG' => 'E02002307',
        '9UH' => 'E02002307',
        '9UJ' => 'E02002307',
        '9UL' => 'E02002307',
        '9UN' => 'E02002307',
        '9UP' => 'E02002307',
        '9UQ' => 'E02002307',
        '9UR' => 'E02002307',
        '9US' => 'E02002307',
        '9UT' => 'E02002307',
        '9UU' => 'E02002307',
        '9UW' => 'E02002307',
        '9UX' => 'E02002307',
        '9UY' => 'E02002307',
        '9UZ' => 'E02002307',
        '9WT' => 'E02002299',
        '9WU' => 'E02002299',
        '9WW' => 'E02002307',
        '9WX' => 'E02002299',
        '9WY' => 'E02002307',
        '9WZ' => 'E02002307',
        '9XG' => 'E02002299',
        '9XH' => 'E02002305',
        '9XJ' => 'E02002310',
        '9XL' => 'E02002307',
        '9XN' => 'E02002307',
        '9XP' => 'E02002307',
        '9XQ' => 'E02002299',
        '9XR' => 'E02002307',
        '9XS' => 'E02002307',
        '9XT' => 'E02002307',
        '9XU' => 'E02002307',
        '9XW' => 'E02002307',
        '9XX' => 'E02002307',
        '9XY' => 'E02002307',
        '9XZ' => 'E02002307',
        '9YA' => 'E02002307',
        '9YB' => 'E02002307',
        '9YD' => 'E02002307',
        '9YE' => 'E02002307',
        '9YF' => 'E02002307',
        '9YG' => 'E02002299',
        '9YH' => 'E02002307',
        '9YL' => 'E02002299',
        '9YN' => 'E02002307',
        '9YP' => 'E02002307',
        '9YQ' => 'E02002307',
        '9YR' => 'E02002307',
        '9YS' => 'E02002299',
        '9YT' => 'E02002307',
        '9YU' => 'E02002307',
        '9YW' => 'E02002299',
        '9YX' => 'E02002307',
        '9YY' => 'E02002307',
        '9YZ' => 'E02002299',
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
