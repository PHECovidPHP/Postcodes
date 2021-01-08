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
final class NE25
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02005719',
        '0AB' => 'E02005719',
        '0AD' => 'E02005719',
        '0AE' => 'E02005719',
        '0AF' => 'E02005719',
        '0AG' => 'E02005719',
        '0AH' => 'E02005719',
        '0AJ' => 'E02005719',
        '0AL' => 'E02005719',
        '0AN' => 'E02005719',
        '0AP' => 'E02005719',
        '0AQ' => 'E02005719',
        '0AR' => 'E02005717',
        '0AS' => 'E02005717',
        '0AT' => 'E02005719',
        '0AU' => 'E02005717',
        '0AW' => 'E02005719',
        '0AX' => 'E02005717',
        '0AY' => 'E02005717',
        '0AZ' => 'E02005717',
        '0BA' => 'E02005717',
        '0BB' => 'E02005717',
        '0BD' => 'E02005717',
        '0BE' => 'E02005717',
        '0BF' => 'E02005717',
        '0BG' => 'E02005717',
        '0BH' => 'E02005717',
        '0BJ' => 'E02005717',
        '0BL' => 'E02005719',
        '0BN' => 'E02005719',
        '0BP' => 'E02005719',
        '0BQ' => 'E02005717',
        '0BR' => 'E02005719',
        '0BS' => 'E02005719',
        '0BT' => 'E02005717',
        '0BU' => 'E02005719',
        '0BW' => 'E02005719',
        '0BX' => 'E02005719',
        '0BY' => 'E02005717',
        '0BZ' => 'E02005717',
        '0DA' => 'E02005719',
        '0DB' => 'E02005719',
        '0DD' => 'E02005719',
        '0DE' => 'E02005719',
        '0DF' => 'E02005719',
        '0DG' => 'E02005719',
        '0DH' => 'E02005719',
        '0DJ' => 'E02005719',
        '0DL' => 'E02005719',
        '0DN' => 'E02005719',
        '0DP' => 'E02005719',
        '0DQ' => 'E02005719',
        '0DR' => 'E02005719',
        '0DS' => 'E02005719',
        '0DT' => 'E02005719',
        '0DU' => 'E02005719',
        '0DW' => 'E02005719',
        '0DX' => 'E02005719',
        '0DY' => 'E02005719',
        '0DZ' => 'E02005719',
        '0EA' => 'E02005719',
        '0EB' => 'E02005719',
        '0ED' => 'E02005719',
        '0EE' => 'E02005719',
        '0EF' => 'E02005719',
        '0EG' => 'E02005719',
        '0EH' => 'E02005719',
        '0EJ' => 'E02005719',
        '0EL' => 'E02005719',
        '0EN' => 'E02005719',
        '0EP' => 'E02005719',
        '0EQ' => 'E02005719',
        '0ER' => 'E02005719',
        '0ES' => 'E02005719',
        '0ET' => 'E02005719',
        '0EU' => 'E02005719',
        '0EW' => 'E02005719',
        '0EX' => 'E02005719',
        '0EY' => 'E02005719',
        '0EZ' => 'E02005719',
        '0FA' => 'E02005719',
        '0FB' => 'E02005719',
        '0FD' => 'E02005719',
        '0FE' => 'E02005719',
        '0FF' => 'E02005719',
        '0FG' => 'E02005719',
        '0FH' => 'E02005719',
        '0FJ' => 'E02005719',
        '0FL' => 'E02005719',
        '0FN' => 'E02005719',
        '0FP' => 'E02005719',
        '0FQ' => 'E02005719',
        '0FR' => 'E02005719',
        '0FS' => 'E02005719',
        '0FT' => 'E02005719',
        '0GW' => 'E02005717',
        '0HA' => 'E02005719',
        '0HG' => 'E02005719',
        '0HH' => 'E02005717',
        '0HJ' => 'E02005717',
        '0HL' => 'E02005719',
        '0HN' => 'E02005719',
        '0HP' => 'E02005719',
        '0HQ' => 'E02005719',
        '0HR' => 'E02005719',
        '0HS' => 'E02005719',
        '0HT' => 'E02005717',
        '0HU' => 'E02005717',
        '0HW' => 'E02005719',
        '0HX' => 'E02005717',
        '0HY' => 'E02005719',
        '0HZ' => 'E02005717',
        '0JA' => 'E02005717',
        '0JB' => 'E02005717',
        '0JD' => 'E02005717',
        '0JE' => 'E02005717',
        '0JF' => 'E02005719',
        '0JG' => 'E02005719',
        '0JH' => 'E02005719',
        '0JJ' => 'E02005719',
        '0JL' => 'E02005719',
        '0JN' => 'E02005717',
        '0JP' => 'E02005719',
        '0JQ' => 'E02005719',
        '0JR' => 'E02005719',
        '0JS' => 'E02005719',
        '0JT' => 'E02005719',
        '0JU' => 'E02005719',
        '0JW' => 'E02005719',
        '0JX' => 'E02005719',
        '0JY' => 'E02005719',
        '0JZ' => 'E02005719',
        '0LA' => 'E02005719',
        '0LB' => 'E02005717',
        '0LD' => 'E02005717',
        '0LE' => 'E02005717',
        '0LF' => 'E02005717',
        '0LG' => 'E02005717',
        '0LH' => 'E02005717',
        '0LJ' => 'E02005717',
        '0LL' => 'E02005717',
        '0LN' => 'E02005717',
        '0LP' => 'E02005717',
        '0LQ' => 'E02005717',
        '0LR' => 'E02005717',
        '0LS' => 'E02005717',
        '0LT' => 'E02005717',
        '0LU' => 'E02005717',
        '0LW' => 'E02005717',
        '0LX' => 'E02005717',
        '0LY' => 'E02005717',
        '0LZ' => 'E02005717',
        '0NA' => 'E02005717',
        '0NB' => 'E02005717',
        '0ND' => 'E02005717',
        '0NE' => 'E02005717',
        '0NF' => 'E02005717',
        '0NG' => 'E02005717',
        '0NH' => 'E02005717',
        '0NJ' => 'E02005717',
        '0NL' => 'E02005717',
        '0NN' => 'E02005717',
        '0NP' => 'E02005717',
        '0NQ' => 'E02005717',
        '0NR' => 'E02005717',
        '0NS' => 'E02005717',
        '0NT' => 'E02005717',
        '0NU' => 'E02005717',
        '0NW' => 'E02005717',
        '0NX' => 'E02005717',
        '0PA' => 'E02005717',
        '0PB' => 'E02005717',
        '0PD' => 'E02005717',
        '0PE' => 'E02005717',
        '0PF' => 'E02005719',
        '0PG' => 'E02005717',
        '0PH' => 'E02005717',
        '0PJ' => 'E02005717',
        '0PL' => 'E02005719',
        '0PN' => 'E02005719',
        '0PP' => 'E02005719',
        '0PQ' => 'E02005719',
        '0PR' => 'E02005719',
        '0PS' => 'E02005719',
        '0PT' => 'E02005719',
        '0PU' => 'E02005719',
        '0PW' => 'E02005719',
        '0PX' => 'E02005719',
        '0PY' => 'E02005719',
        '0PZ' => 'E02005719',
        '0QA' => 'E02005717',
        '0QB' => 'E02005719',
        '0QD' => 'E02005719',
        '0QE' => 'E02005719',
        '0QF' => 'E02005719',
        '0QG' => 'E02005719',
        '0QH' => 'E02005719',
        '0QJ' => 'E02005719',
        '0QL' => 'E02005719',
        '0QN' => 'E02005719',
        '0QP' => 'E02005719',
        '0QQ' => 'E02005719',
        '0QR' => 'E02005719',
        '0QS' => 'E02005717',
        '0QT' => 'E02005719',
        '0QU' => 'E02005719',
        '0QW' => 'E02005719',
        '0QX' => 'E02005719',
        '0QY' => 'E02005719',
        '0RD' => 'E02005717',
        '0RE' => 'E02005717',
        '0RF' => 'E02005717',
        '0RG' => 'E02005717',
        '0RH' => 'E02005717',
        '0RJ' => 'E02005717',
        '0RL' => 'E02005717',
        '0RN' => 'E02005717',
        '0RP' => 'E02005717',
        '0RQ' => 'E02005717',
        '0RR' => 'E02005717',
        '0RS' => 'E02005717',
        '0RT' => 'E02005717',
        '0RU' => 'E02005717',
        '0RW' => 'E02005717',
        '0RX' => 'E02005717',
        '0RY' => 'E02005717',
        '0SB' => 'E02005717',
        '0SD' => 'E02005717',
        '0SE' => 'E02005717',
        '0SF' => 'E02005717',
        '0SG' => 'E02005717',
        '0SH' => 'E02005717',
        '0SJ' => 'E02005717',
        '0SN' => 'E02005717',
        '0SP' => 'E02005717',
        '0SQ' => 'E02005717',
        '0SR' => 'E02005717',
        '0SS' => 'E02005717',
        '0ST' => 'E02005717',
        '0SU' => 'E02005717',
        '0SW' => 'E02005717',
        '0SX' => 'E02005717',
        '0SZ' => 'E02001738',
        '0TA' => 'E02005717',
        '0TB' => 'E02005717',
        '0TE' => 'E02005717',
        '0TF' => 'E02005717',
        '0TG' => 'E02005719',
        '0TQ' => 'E02005717',
        '0TR' => 'E02005717',
        '0TS' => 'E02005717',
        '0TT' => 'E02005717',
        '0TU' => 'E02005717',
        '0TX' => 'E02005717',
        '0TY' => 'E02005717',
        '0TZ' => 'E02005719',
        '0WT' => 'E02001752',
        '0WU' => 'E02001752',
        '0WW' => 'E02005717',
        '0WX' => 'E02005717',
        '0WY' => 'E02005717',
        '0WZ' => 'E02001752',
        '0YP' => 'E02001752',
        '0YQ' => 'E02001752',
        '0YR' => 'E02005719',
        '0YS' => 'E02001752',
        '0YT' => 'E02005719',
        '0YU' => 'E02005719',
        '0YW' => 'E02005719',
        '0YX' => 'E02005719',
        '0YY' => 'E02001752',
        '0YZ' => 'E02005717',
        '8AA' => 'E02001746',
        '8AB' => 'E02001746',
        '8AD' => 'E02001746',
        '8AE' => 'E02001746',
        '8AF' => 'E02001746',
        '8AG' => 'E02001746',
        '8AH' => 'E02001746',
        '8AJ' => 'E02001746',
        '8AL' => 'E02001746',
        '8AN' => 'E02001746',
        '8AP' => 'E02001746',
        '8AQ' => 'E02001746',
        '8AR' => 'E02001746',
        '8AS' => 'E02001746',
        '8AT' => 'E02001746',
        '8AU' => 'E02001746',
        '8AW' => 'E02001746',
        '8AX' => 'E02001746',
        '8AY' => 'E02001746',
        '8AZ' => 'E02001746',
        '8BA' => 'E02001746',
        '8BB' => 'E02001746',
        '8BD' => 'E02001746',
        '8BE' => 'E02001746',
        '8BF' => 'E02001746',
        '8BG' => 'E02001746',
        '8BH' => 'E02001746',
        '8BJ' => 'E02001746',
        '8BL' => 'E02001746',
        '8BN' => 'E02001746',
        '8BQ' => 'E02001746',
        '8DB' => 'E02001740',
        '8DF' => 'E02001740',
        '8DG' => 'E02001740',
        '8DH' => 'E02001740',
        '8DJ' => 'E02001740',
        '8DL' => 'E02001742',
        '8DN' => 'E02001742',
        '8DP' => 'E02001740',
        '8DQ' => 'E02001742',
        '8DR' => 'E02001742',
        '8DS' => 'E02001740',
        '8DT' => 'E02001740',
        '8DU' => 'E02001740',
        '8DW' => 'E02001742',
        '8DX' => 'E02001740',
        '8DY' => 'E02001740',
        '8DZ' => 'E02001740',
        '8EA' => 'E02001740',
        '8EB' => 'E02001742',
        '8ED' => 'E02001742',
        '8EE' => 'E02001740',
        '8EF' => 'E02001742',
        '8EG' => 'E02001742',
        '8EH' => 'E02001742',
        '8EJ' => 'E02001742',
        '8EL' => 'E02001742',
        '8EN' => 'E02001742',
        '8EP' => 'E02001742',
        '8EQ' => 'E02001742',
        '8ER' => 'E02001742',
        '8ES' => 'E02001742',
        '8ET' => 'E02001742',
        '8EW' => 'E02001742',
        '8EX' => 'E02001742',
        '8EY' => 'E02001746',
        '8HA' => 'E02001746',
        '8HB' => 'E02001746',
        '8HD' => 'E02001743',
        '8HJ' => 'E02001746',
        '8HL' => 'E02001746',
        '8HN' => 'E02001743',
        '8HP' => 'E02001746',
        '8HR' => 'E02001746',
        '8HS' => 'E02001746',
        '8HT' => 'E02001746',
        '8HU' => 'E02001746',
        '8HW' => 'E02001746',
        '8HX' => 'E02001746',
        '8HY' => 'E02001746',
        '8HZ' => 'E02001746',
        '8JA' => 'E02001746',
        '8JB' => 'E02001746',
        '8JD' => 'E02001746',
        '8JE' => 'E02001746',
        '8JF' => 'E02001746',
        '8JG' => 'E02001746',
        '8JH' => 'E02001746',
        '8JJ' => 'E02001746',
        '8JL' => 'E02001746',
        '8JN' => 'E02001746',
        '8JP' => 'E02001746',
        '8JQ' => 'E02001746',
        '8JR' => 'E02001746',
        '8JS' => 'E02001746',
        '8JT' => 'E02001746',
        '8JU' => 'E02001746',
        '8JW' => 'E02001746',
        '8JX' => 'E02001746',
        '8LN' => 'E02001742',
        '8LP' => 'E02001742',
        '8LR' => 'E02001742',
        '8LS' => 'E02001742',
        '8LT' => 'E02001742',
        '8LU' => 'E02001742',
        '8LW' => 'E02001742',
        '8LX' => 'E02001742',
        '8LY' => 'E02001742',
        '8LZ' => 'E02001742',
        '8NA' => 'E02001742',
        '8NB' => 'E02001742',
        '8ND' => 'E02001742',
        '8NF' => 'E02001742',
        '8NG' => 'E02001742',
        '8NH' => 'E02001742',
        '8NJ' => 'E02001742',
        '8NL' => 'E02001742',
        '8NN' => 'E02001742',
        '8NP' => 'E02001742',
        '8NQ' => 'E02001742',
        '8NW' => 'E02001742',
        '8PH' => 'E02001743',
        '8PJ' => 'E02001743',
        '8PL' => 'E02001743',
        '8PN' => 'E02001743',
        '8PP' => 'E02001743',
        '8PR' => 'E02001743',
        '8PS' => 'E02001743',
        '8PT' => 'E02001743',
        '8PU' => 'E02001743',
        '8PW' => 'E02001743',
        '8PX' => 'E02001743',
        '8PY' => 'E02001743',
        '8PZ' => 'E02001743',
        '8QA' => 'E02001743',
        '8QB' => 'E02001743',
        '8QD' => 'E02001743',
        '8QE' => 'E02001743',
        '8QF' => 'E02001743',
        '8QG' => 'E02001743',
        '8QH' => 'E02001743',
        '8QJ' => 'E02001743',
        '8QL' => 'E02001743',
        '8QN' => 'E02001743',
        '8QQ' => 'E02001743',
        '8RD' => 'E02001743',
        '8RE' => 'E02001743',
        '8RF' => 'E02001743',
        '8RG' => 'E02001743',
        '8RH' => 'E02001743',
        '8RJ' => 'E02001743',
        '8RN' => 'E02001746',
        '8RP' => 'E02001743',
        '8RQ' => 'E02001743',
        '8RR' => 'E02001746',
        '8RS' => 'E02001746',
        '8RT' => 'E02001746',
        '8RU' => 'E02001746',
        '8RW' => 'E02001743',
        '8RX' => 'E02001746',
        '8RY' => 'E02001743',
        '8SN' => 'E02001746',
        '8SR' => 'E02001746',
        '8SS' => 'E02001746',
        '8ST' => 'E02001746',
        '8SU' => 'E02001746',
        '8SW' => 'E02001746',
        '8SX' => 'E02001746',
        '8SY' => 'E02001746',
        '8SZ' => 'E02001746',
        '8TA' => 'E02001746',
        '8TB' => 'E02001746',
        '8TD' => 'E02001746',
        '8TE' => 'E02001746',
        '8TF' => 'E02001746',
        '8TG' => 'E02001746',
        '8TH' => 'E02001746',
        '8TJ' => 'E02001746',
        '8TL' => 'E02001746',
        '8TN' => 'E02001746',
        '8TP' => 'E02001746',
        '8TQ' => 'E02001746',
        '8TR' => 'E02001746',
        '8TW' => 'E02001746',
        '8UG' => 'E02001746',
        '8UH' => 'E02001746',
        '8UJ' => 'E02001746',
        '8UL' => 'E02001746',
        '8UN' => 'E02001746',
        '8UP' => 'E02001746',
        '8UQ' => 'E02001746',
        '8UR' => 'E02001746',
        '8US' => 'E02001752',
        '8UT' => 'E02001746',
        '8UU' => 'E02001746',
        '8UW' => 'E02001746',
        '8UX' => 'E02001746',
        '8UY' => 'E02001746',
        '8UZ' => 'E02001746',
        '8WA' => 'E02001746',
        '8WB' => 'E02001752',
        '8WD' => 'E02001752',
        '8WE' => 'E02001752',
        '8WF' => 'E02001746',
        '8WG' => 'E02001752',
        '8WH' => 'E02001752',
        '8WJ' => 'E02001752',
        '8WL' => 'E02001752',
        '8WN' => 'E02001752',
        '8WP' => 'E02001752',
        '8WQ' => 'E02001752',
        '8WR' => 'E02001752',
        '8WS' => 'E02001752',
        '8WT' => 'E02001752',
        '8WU' => 'E02001752',
        '8WW' => 'E02001752',
        '8WX' => 'E02001752',
        '8WY' => 'E02001752',
        '8WZ' => 'E02001752',
        '8XA' => 'E02001746',
        '8XB' => 'E02001746',
        '8XD' => 'E02001746',
        '8XE' => 'E02001746',
        '8XF' => 'E02001746',
        '8XG' => 'E02001746',
        '8XH' => 'E02001746',
        '8XJ' => 'E02001746',
        '8XL' => 'E02001746',
        '8XN' => 'E02001746',
        '8XP' => 'E02001746',
        '8XQ' => 'E02001746',
        '8XR' => 'E02001746',
        '8XS' => 'E02001746',
        '8XT' => 'E02001750',
        '8XU' => 'E02001750',
        '8XW' => 'E02001746',
        '8XX' => 'E02001750',
        '8XY' => 'E02001750',
        '8XZ' => 'E02001752',
        '8YA' => 'E02001752',
        '8YB' => 'E02001750',
        '8YD' => 'E02001752',
        '8YE' => 'E02001752',
        '8YF' => 'E02001750',
        '8YG' => 'E02001752',
        '8YH' => 'E02001750',
        '8YJ' => 'E02001752',
        '8YL' => 'E02001746',
        '8YN' => 'E02001746',
        '8YP' => 'E02001752',
        '8YQ' => 'E02001752',
        '8YR' => 'E02001752',
        '8YS' => 'E02001750',
        '8YT' => 'E02001752',
        '8YU' => 'E02001752',
        '8YW' => 'E02001746',
        '8YY' => 'E02001752',
        '8YZ' => 'E02001750',
        '9AA' => 'E02001742',
        '9AB' => 'E02001742',
        '9AD' => 'E02001742',
        '9AE' => 'E02001742',
        '9AF' => 'E02001742',
        '9AG' => 'E02001742',
        '9AH' => 'E02001742',
        '9AJ' => 'E02001742',
        '9AL' => 'E02001742',
        '9AN' => 'E02001742',
        '9AP' => 'E02001742',
        '9AQ' => 'E02001742',
        '9AR' => 'E02001742',
        '9AS' => 'E02001742',
        '9AT' => 'E02001742',
        '9AU' => 'E02001742',
        '9AW' => 'E02001742',
        '9AX' => 'E02001742',
        '9AY' => 'E02001742',
        '9AZ' => 'E02001750',
        '9BA' => 'E02001746',
        '9BB' => 'E02001742',
        '9BE' => 'E02001744',
        '9DA' => 'E02001746',
        '9DB' => 'E02001746',
        '9DD' => 'E02001746',
        '9DE' => 'E02001746',
        '9DF' => 'E02001746',
        '9DG' => 'E02001746',
        '9DH' => 'E02001746',
        '9DJ' => 'E02001746',
        '9DL' => 'E02001746',
        '9DN' => 'E02001746',
        '9DP' => 'E02001746',
        '9DQ' => 'E02001746',
        '9DR' => 'E02001746',
        '9DS' => 'E02001746',
        '9DT' => 'E02001746',
        '9DU' => 'E02001750',
        '9DW' => 'E02001746',
        '9DX' => 'E02001750',
        '9DY' => 'E02001750',
        '9DZ' => 'E02001750',
        '9EA' => 'E02001750',
        '9EB' => 'E02001750',
        '9ED' => 'E02001750',
        '9EE' => 'E02001750',
        '9EF' => 'E02001750',
        '9EG' => 'E02001750',
        '9EH' => 'E02001742',
        '9EJ' => 'E02001742',
        '9EL' => 'E02001752',
        '9EN' => 'E02001752',
        '9EP' => 'E02001742',
        '9EQ' => 'E02001750',
        '9ER' => 'E02001742',
        '9EW' => 'E02001742',
        '9EX' => 'E02001744',
        '9EZ' => 'E02001744',
        '9GA' => 'E02001738',
        '9GB' => 'E02001738',
        '9GD' => 'E02001738',
        '9GE' => 'E02001738',
        '9GF' => 'E02001738',
        '9GG' => 'E02001738',
        '9GH' => 'E02001738',
        '9GJ' => 'E02001738',
        '9GL' => 'E02001738',
        '9GY' => 'E02001752',
        '9GZ' => 'E02001744',
        '9HB' => 'E02001744',
        '9HD' => 'E02001744',
        '9HE' => 'E02001744',
        '9HF' => 'E02001744',
        '9HG' => 'E02001744',
        '9HH' => 'E02001744',
        '9HJ' => 'E02001744',
        '9HL' => 'E02001744',
        '9HN' => 'E02001744',
        '9HP' => 'E02001744',
        '9HQ' => 'E02001744',
        '9HR' => 'E02001744',
        '9HS' => 'E02001738',
        '9HT' => 'E02001738',
        '9HU' => 'E02001742',
        '9HW' => 'E02001744',
        '9HX' => 'E02001742',
        '9HY' => 'E02001742',
        '9HZ' => 'E02001742',
        '9JA' => 'E02001742',
        '9JD' => 'E02001744',
        '9JE' => 'E02001744',
        '9JF' => 'E02001744',
        '9JG' => 'E02001744',
        '9JH' => 'E02001744',
        '9JJ' => 'E02001744',
        '9JL' => 'E02001744',
        '9JN' => 'E02001744',
        '9JP' => 'E02001744',
        '9JQ' => 'E02001744',
        '9JR' => 'E02001744',
        '9JS' => 'E02001744',
        '9JT' => 'E02001744',
        '9JU' => 'E02001744',
        '9JW' => 'E02001744',
        '9JX' => 'E02001744',
        '9JY' => 'E02001744',
        '9JZ' => 'E02001744',
        '9LA' => 'E02001744',
        '9LD' => 'E02001744',
        '9LF' => 'E02001744',
        '9LG' => 'E02001744',
        '9LH' => 'E02001744',
        '9LJ' => 'E02001744',
        '9LL' => 'E02001744',
        '9LN' => 'E02001742',
        '9LP' => 'E02001744',
        '9LQ' => 'E02001744',
        '9LR' => 'E02001744',
        '9LW' => 'E02001742',
        '9LY' => 'E02001742',
        '9LZ' => 'E02001742',
        '9NA' => 'E02001742',
        '9NB' => 'E02001746',
        '9NF' => 'E02001742',
        '9NG' => 'E02001742',
        '9NH' => 'E02001742',
        '9NJ' => 'E02001744',
        '9NL' => 'E02001742',
        '9NN' => 'E02001742',
        '9NP' => 'E02001744',
        '9NQ' => 'E02001742',
        '9NR' => 'E02001744',
        '9NS' => 'E02001744',
        '9NT' => 'E02001744',
        '9NU' => 'E02001744',
        '9NW' => 'E02001744',
        '9NX' => 'E02001744',
        '9NY' => 'E02001744',
        '9NZ' => 'E02001742',
        '9PA' => 'E02001744',
        '9PB' => 'E02001744',
        '9PD' => 'E02001744',
        '9PE' => 'E02001744',
        '9PF' => 'E02001744',
        '9PG' => 'E02001742',
        '9PH' => 'E02001746',
        '9PL' => 'E02001738',
        '9PN' => 'E02001738',
        '9PQ' => 'E02001738',
        '9PT' => 'E02001744',
        '9PU' => 'E02001744',
        '9PY' => 'E02001744',
        '9PZ' => 'E02001744',
        '9QA' => 'E02001744',
        '9QB' => 'E02001744',
        '9QD' => 'E02001744',
        '9QE' => 'E02001744',
        '9QF' => 'E02001744',
        '9QG' => 'E02001744',
        '9QH' => 'E02001744',
        '9QJ' => 'E02001744',
        '9QL' => 'E02001744',
        '9QN' => 'E02001744',
        '9QP' => 'E02001744',
        '9QQ' => 'E02001744',
        '9QR' => 'E02001744',
        '9QS' => 'E02001744',
        '9QW' => 'E02001744',
        '9RD' => 'E02001744',
        '9RJ' => 'E02001742',
        '9RL' => 'E02001742',
        '9RN' => 'E02001746',
        '9RT' => 'E02001742',
        '9RU' => 'E02001742',
        '9RW' => 'E02001742',
        '9RX' => 'E02001742',
        '9RY' => 'E02001742',
        '9RZ' => 'E02001742',
        '9SA' => 'E02001742',
        '9SB' => 'E02001742',
        '9SD' => 'E02001742',
        '9SE' => 'E02001742',
        '9SF' => 'E02001742',
        '9SG' => 'E02001742',
        '9SH' => 'E02001742',
        '9SJ' => 'E02001742',
        '9SL' => 'E02001742',
        '9SN' => 'E02001742',
        '9SP' => 'E02001744',
        '9SQ' => 'E02001742',
        '9SR' => 'E02001742',
        '9SS' => 'E02001742',
        '9ST' => 'E02001742',
        '9SU' => 'E02001742',
        '9SW' => 'E02001742',
        '9SX' => 'E02001742',
        '9SY' => 'E02001742',
        '9TG' => 'E02001744',
        '9TP' => 'E02001746',
        '9TQ' => 'E02005717',
        '9TR' => 'E02001746',
        '9TS' => 'E02001746',
        '9TT' => 'E02001746',
        '9TU' => 'E02001752',
        '9TW' => 'E02001746',
        '9TX' => 'E02001752',
        '9TY' => 'E02001752',
        '9TZ' => 'E02001738',
        '9UA' => 'E02001738',
        '9UB' => 'E02001738',
        '9UD' => 'E02001738',
        '9UE' => 'E02001738',
        '9UF' => 'E02001738',
        '9UG' => 'E02001738',
        '9UH' => 'E02001738',
        '9UJ' => 'E02001738',
        '9UL' => 'E02001738',
        '9UN' => 'E02001738',
        '9UP' => 'E02001738',
        '9UQ' => 'E02001738',
        '9UR' => 'E02001738',
        '9US' => 'E02001752',
        '9UT' => 'E02001738',
        '9UU' => 'E02001738',
        '9UW' => 'E02001738',
        '9UX' => 'E02001738',
        '9UY' => 'E02001738',
        '9UZ' => 'E02001738',
        '9WA' => 'E02001742',
        '9WB' => 'E02001742',
        '9WD' => 'E02001742',
        '9WE' => 'E02001742',
        '9WF' => 'E02001742',
        '9WG' => 'E02001738',
        '9WH' => 'E02001752',
        '9WJ' => 'E02001738',
        '9WL' => 'E02001752',
        '9WN' => 'E02001752',
        '9WP' => 'E02001752',
        '9WQ' => 'E02001752',
        '9WR' => 'E02001752',
        '9WS' => 'E02001742',
        '9WT' => 'E02001752',
        '9WU' => 'E02001742',
        '9WW' => 'E02001742',
        '9WX' => 'E02001752',
        '9WY' => 'E02001742',
        '9WZ' => 'E02001752',
        '9XA' => 'E02001738',
        '9XB' => 'E02001738',
        '9XD' => 'E02001738',
        '9XE' => 'E02001738',
        '9XF' => 'E02001738',
        '9XG' => 'E02001738',
        '9XH' => 'E02001738',
        '9XJ' => 'E02001738',
        '9XL' => 'E02001738',
        '9XN' => 'E02001738',
        '9XP' => 'E02001738',
        '9XQ' => 'E02001738',
        '9XR' => 'E02001738',
        '9XS' => 'E02001738',
        '9XT' => 'E02001738',
        '9XU' => 'E02001738',
        '9XW' => 'E02001738',
        '9XX' => 'E02001738',
        '9XY' => 'E02001738',
        '9XZ' => 'E02001738',
        '9YA' => 'E02001742',
        '9YB' => 'E02001742',
        '9YD' => 'E02001742',
        '9YE' => 'E02001742',
        '9YF' => 'E02001742',
        '9YG' => 'E02001742',
        '9YH' => 'E02001742',
        '9YJ' => 'E02001742',
        '9YL' => 'E02001742',
        '9YN' => 'E02001742',
        '9YP' => 'E02001752',
        '9YQ' => 'E02001742',
        '9YR' => 'E02001752',
        '9YS' => 'E02001752',
        '9YT' => 'E02001742',
        '9YU' => 'E02001738',
        '9YW' => 'E02001752',
        '9YX' => 'E02001752',
        '9YY' => 'E02001752',
        '9YZ' => 'E02001738',
        '9ZA' => 'E02001752',
        '9ZB' => 'E02001752',
        '9ZD' => 'E02001752',
        '9ZE' => 'E02001738',
        '9ZS' => 'E02001752',
        '9ZT' => 'E02001752',
        '9ZU' => 'E02001752',
        '9ZW' => 'E02001752',
        '9ZX' => 'E02001752',
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
