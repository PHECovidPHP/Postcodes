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
final class SK3
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02001208',
        '0AB' => 'E02001202',
        '0AD' => 'E02001202',
        '0AE' => 'E02001202',
        '0AF' => 'E02001202',
        '0AG' => 'E02001202',
        '0AH' => 'E02001204',
        '0AJ' => 'E02001202',
        '0AL' => 'E02001202',
        '0AN' => 'E02001202',
        '0AP' => 'E02001202',
        '0AQ' => 'E02001202',
        '0AR' => 'E02001202',
        '0AS' => 'E02001202',
        '0AT' => 'E02001202',
        '0AW' => 'E02001202',
        '0AX' => 'E02001202',
        '0AY' => 'E02001212',
        '0AZ' => 'E02001212',
        '0BA' => 'E02001202',
        '0BB' => 'E02001212',
        '0BD' => 'E02001202',
        '0BE' => 'E02001204',
        '0BF' => 'E02001212',
        '0BG' => 'E02001202',
        '0BH' => 'E02001202',
        '0BJ' => 'E02001202',
        '0BL' => 'E02001202',
        '0BN' => 'E02001202',
        '0BP' => 'E02001212',
        '0BQ' => 'E02001202',
        '0BR' => 'E02001202',
        '0BS' => 'E02001204',
        '0BT' => 'E02001202',
        '0BU' => 'E02001202',
        '0BW' => 'E02001212',
        '0BX' => 'E02001204',
        '0BY' => 'E02001202',
        '0BZ' => 'E02001202',
        '0DA' => 'E02001204',
        '0DB' => 'E02001212',
        '0DD' => 'E02001212',
        '0DE' => 'E02001202',
        '0DF' => 'E02001202',
        '0DG' => 'E02001202',
        '0DH' => 'E02001202',
        '0DJ' => 'E02001202',
        '0DL' => 'E02001202',
        '0DN' => 'E02001202',
        '0DP' => 'E02001202',
        '0DQ' => 'E02001202',
        '0DS' => 'E02001202',
        '0DT' => 'E02001202',
        '0DU' => 'E02001202',
        '0DW' => 'E02001202',
        '0DX' => 'E02001202',
        '0DY' => 'E02001202',
        '0DZ' => 'E02001202',
        '0EA' => 'E02001202',
        '0EB' => 'E02001202',
        '0ED' => 'E02001202',
        '0EE' => 'E02001202',
        '0EF' => 'E02001204',
        '0EG' => 'E02001202',
        '0EH' => 'E02001202',
        '0EJ' => 'E02001202',
        '0EL' => 'E02001202',
        '0EN' => 'E02001202',
        '0EP' => 'E02001204',
        '0EQ' => 'E02001202',
        '0ER' => 'E02001202',
        '0ES' => 'E02001202',
        '0ET' => 'E02001202',
        '0EU' => 'E02001202',
        '0EW' => 'E02001202',
        '0EX' => 'E02001202',
        '0EY' => 'E02001202',
        '0EZ' => 'E02001202',
        '0FA' => 'E02001204',
        '0FB' => 'E02001204',
        '0FD' => 'E02001202',
        '0FE' => 'E02001202',
        '0FF' => 'E02001204',
        '0FG' => 'E02001204',
        '0FH' => 'E02001202',
        '0FJ' => 'E02001202',
        '0FL' => 'E02001202',
        '0FN' => 'E02001204',
        '0FP' => 'E02001202',
        '0FQ' => 'E02001204',
        '0FR' => 'E02001202',
        '0FS' => 'E02001204',
        '0FT' => 'E02001202',
        '0FU' => 'E02001202',
        '0FW' => 'E02001202',
        '0FX' => 'E02001202',
        '0FY' => 'E02001202',
        '0FZ' => 'E02001202',
        '0GA' => 'E02001202',
        '0GB' => 'E02001202',
        '0GD' => 'E02001204',
        '0HA' => 'E02001202',
        '0HB' => 'E02001204',
        '0HJ' => 'E02001202',
        '0HL' => 'E02001202',
        '0HN' => 'E02001202',
        '0HP' => 'E02001204',
        '0HR' => 'E02001204',
        '0HS' => 'E02001202',
        '0HT' => 'E02001204',
        '0HU' => 'E02001204',
        '0HW' => 'E02001202',
        '0HX' => 'E02001202',
        '0HY' => 'E02001204',
        '0HZ' => 'E02001204',
        '0JA' => 'E02001204',
        '0JB' => 'E02001204',
        '0JD' => 'E02001204',
        '0JE' => 'E02001204',
        '0JF' => 'E02001204',
        '0JG' => 'E02001204',
        '0JH' => 'E02001204',
        '0JJ' => 'E02001204',
        '0JL' => 'E02001204',
        '0JN' => 'E02001204',
        '0JP' => 'E02001204',
        '0JQ' => 'E02001204',
        '0JR' => 'E02001204',
        '0JS' => 'E02001204',
        '0JT' => 'E02001204',
        '0JU' => 'E02001204',
        '0JW' => 'E02001204',
        '0JX' => 'E02001202',
        '0JY' => 'E02001204',
        '0JZ' => 'E02001202',
        '0LA' => 'E02001204',
        '0LD' => 'E02001204',
        '0LE' => 'E02001204',
        '0LF' => 'E02001204',
        '0LG' => 'E02001204',
        '0LH' => 'E02001202',
        '0LP' => 'E02001204',
        '0LQ' => 'E02001204',
        '0LR' => 'E02001204',
        '0LS' => 'E02001204',
        '0LT' => 'E02001204',
        '0LU' => 'E02001204',
        '0LW' => 'E02001204',
        '0LX' => 'E02001204',
        '0LY' => 'E02001204',
        '0LZ' => 'E02001204',
        '0NA' => 'E02001204',
        '0NB' => 'E02001204',
        '0ND' => 'E02001204',
        '0NE' => 'E02001204',
        '0NF' => 'E02001204',
        '0NG' => 'E02001204',
        '0NH' => 'E02001204',
        '0NJ' => 'E02001204',
        '0NL' => 'E02001204',
        '0NN' => 'E02001204',
        '0NP' => 'E02001204',
        '0NQ' => 'E02001204',
        '0NR' => 'E02001204',
        '0NS' => 'E02001204',
        '0NT' => 'E02001204',
        '0NU' => 'E02001204',
        '0NW' => 'E02001204',
        '0NY' => 'E02001204',
        '0NZ' => 'E02001204',
        '0PA' => 'E02001204',
        '0PB' => 'E02001204',
        '0PD' => 'E02001204',
        '0PE' => 'E02001204',
        '0PF' => 'E02001204',
        '0PG' => 'E02001204',
        '0PH' => 'E02001204',
        '0PL' => 'E02001204',
        '0PN' => 'E02001204',
        '0PP' => 'E02001204',
        '0PQ' => 'E02001204',
        '0PR' => 'E02001204',
        '0PS' => 'E02001204',
        '0PT' => 'E02001204',
        '0PU' => 'E02001204',
        '0PW' => 'E02001204',
        '0PX' => 'E02001204',
        '0PY' => 'E02001204',
        '0PZ' => 'E02001204',
        '0QA' => 'E02001204',
        '0QB' => 'E02001204',
        '0QD' => 'E02001204',
        '0QE' => 'E02001204',
        '0QF' => 'E02001204',
        '0QG' => 'E02001204',
        '0QH' => 'E02001204',
        '0QJ' => 'E02001204',
        '0QL' => 'E02001204',
        '0QN' => 'E02001204',
        '0QP' => 'E02001204',
        '0QQ' => 'E02001204',
        '0QR' => 'E02001204',
        '0QS' => 'E02001204',
        '0QT' => 'E02001204',
        '0QU' => 'E02001204',
        '0QW' => 'E02001204',
        '0QX' => 'E02001204',
        '0QY' => 'E02001204',
        '0QZ' => 'E02001204',
        '0RA' => 'E02001208',
        '0RB' => 'E02001204',
        '0RD' => 'E02001204',
        '0RE' => 'E02001208',
        '0RF' => 'E02001208',
        '0RG' => 'E02001204',
        '0RH' => 'E02001204',
        '0RJ' => 'E02001204',
        '0RL' => 'E02001204',
        '0RN' => 'E02001204',
        '0RP' => 'E02001204',
        '0RQ' => 'E02001204',
        '0RR' => 'E02001204',
        '0RS' => 'E02001204',
        '0RT' => 'E02001212',
        '0RU' => 'E02001208',
        '0RW' => 'E02001204',
        '0RX' => 'E02001202',
        '0RY' => 'E02001208',
        '0RZ' => 'E02001208',
        '0SA' => 'E02001212',
        '0SB' => 'E02001208',
        '0SD' => 'E02001208',
        '0SE' => 'E02001204',
        '0SF' => 'E02001204',
        '0SG' => 'E02001204',
        '0SH' => 'E02001204',
        '0SJ' => 'E02001204',
        '0SL' => 'E02001204',
        '0SN' => 'E02001204',
        '0SP' => 'E02001204',
        '0SQ' => 'E02001204',
        '0SR' => 'E02001204',
        '0SS' => 'E02001204',
        '0ST' => 'E02001204',
        '0SU' => 'E02001204',
        '0SW' => 'E02001204',
        '0SX' => 'E02001204',
        '0SY' => 'E02001204',
        '0SZ' => 'E02001204',
        '0TA' => 'E02001204',
        '0TB' => 'E02001204',
        '0TD' => 'E02001202',
        '0TE' => 'E02001204',
        '0TF' => 'E02001204',
        '0TG' => 'E02001204',
        '0TH' => 'E02001204',
        '0TJ' => 'E02001204',
        '0TL' => 'E02001204',
        '0TN' => 'E02001204',
        '0TP' => 'E02001204',
        '0TQ' => 'E02001204',
        '0TR' => 'E02001204',
        '0TS' => 'E02001204',
        '0TT' => 'E02001204',
        '0TU' => 'E02001204',
        '0TW' => 'E02001204',
        '0TX' => 'E02001204',
        '0TY' => 'E02001204',
        '0TZ' => 'E02001204',
        '0UA' => 'E02001204',
        '0UB' => 'E02001204',
        '0UD' => 'E02001204',
        '0UE' => 'E02001202',
        '0UF' => 'E02001204',
        '0UG' => 'E02001204',
        '0UH' => 'E02001204',
        '0UJ' => 'E02001204',
        '0UL' => 'E02001204',
        '0UN' => 'E02001204',
        '0UP' => 'E02001204',
        '0UQ' => 'E02001204',
        '0UR' => 'E02001204',
        '0US' => 'E02001204',
        '0UT' => 'E02001204',
        '0UU' => 'E02001202',
        '0UW' => 'E02001204',
        '0UX' => 'E02001212',
        '0UY' => 'E02001202',
        '0UZ' => 'E02001204',
        '0WA' => 'E02001202',
        '0WB' => 'E02001202',
        '0WD' => 'E02001204',
        '0WE' => 'E02001204',
        '0WF' => 'E02001212',
        '0WG' => 'E02001202',
        '0WH' => 'E02001202',
        '0WJ' => 'E02001202',
        '0WL' => 'E02001202',
        '0WN' => 'E02001202',
        '0WP' => 'E02001212',
        '0WQ' => 'E02001202',
        '0WR' => 'E02001202',
        '0WS' => 'E02001212',
        '0WT' => 'E02001212',
        '0WU' => 'E02001202',
        '0WW' => 'E02001202',
        '0WX' => 'E02001208',
        '0WY' => 'E02001202',
        '0WZ' => 'E02001212',
        '0XA' => 'E02001212',
        '0XB' => 'E02001208',
        '0XD' => 'E02001208',
        '0XE' => 'E02001212',
        '0XF' => 'E02001208',
        '0XG' => 'E02001212',
        '0XH' => 'E02001212',
        '0XJ' => 'E02001212',
        '0XL' => 'E02001208',
        '0XN' => 'E02001208',
        '0XP' => 'E02001212',
        '0XQ' => 'E02001208',
        '0XR' => 'E02001204',
        '0XS' => 'E02001208',
        '0XT' => 'E02001208',
        '0XU' => 'E02001208',
        '0XW' => 'E02001212',
        '0XX' => 'E02001208',
        '0XY' => 'E02001208',
        '0XZ' => 'E02001208',
        '0YR' => 'E02001202',
        '0YS' => 'E02001202',
        '0YT' => 'E02001202',
        '0YU' => 'E02001202',
        '0YW' => 'E02001202',
        '0YY' => 'E02001202',
        '0YZ' => 'E02001202',
        '0ZB' => 'E02001202',
        '0ZP' => 'E02001212',
        '0ZR' => 'E02001202',
        '3AE' => 'E02001202',
        '3AG' => 'E02001202',
        '3AH' => 'E02001202',
        '3AN' => 'E02001202',
        '3AP' => 'E02001202',
        '3AR' => 'E02001202',
        '3AS' => 'E02001202',
        '3AT' => 'E02001202',
        '3AU' => 'E02001202',
        '3AW' => 'E02001202',
        '3AX' => 'E02001202',
        '3AY' => 'E02001202',
        '3AZ' => 'E02001202',
        '3BA' => 'E02001202',
        '3BB' => 'E02001202',
        '3BD' => 'E02001202',
        '3BE' => 'E02001202',
        '3BF' => 'E02001202',
        '3BG' => 'E02001202',
        '3BH' => 'E02001202',
        '3BJ' => 'E02001202',
        '3BL' => 'E02001202',
        '3BN' => 'E02001202',
        '3BP' => 'E02001202',
        '3BQ' => 'E02001202',
        '3BS' => 'E02001202',
        '3BT' => 'E02001202',
        '3BU' => 'E02001202',
        '3BW' => 'E02001202',
        '3BX' => 'E02001202',
        '8AB' => 'E02001202',
        '8AD' => 'E02001202',
        '8AE' => 'E02001202',
        '8AF' => 'E02001202',
        '8AG' => 'E02001200',
        '8AH' => 'E02001200',
        '8AJ' => 'E02001200',
        '8AL' => 'E02001200',
        '8AN' => 'E02001200',
        '8AP' => 'E02001200',
        '8AQ' => 'E02001209',
        '8AR' => 'E02001200',
        '8AS' => 'E02001200',
        '8AT' => 'E02001200',
        '8AU' => 'E02001202',
        '8AW' => 'E02001200',
        '8AX' => 'E02001200',
        '8AY' => 'E02001200',
        '8AZ' => 'E02001202',
        '8BA' => 'E02001200',
        '8BD' => 'E02001200',
        '8BG' => 'E02001200',
        '8BH' => 'E02001200',
        '8BJ' => 'E02001202',
        '8BL' => 'E02001200',
        '8BN' => 'E02001209',
        '8BP' => 'E02001200',
        '8BQ' => 'E02001200',
        '8BR' => 'E02001200',
        '8BS' => 'E02001200',
        '8BT' => 'E02001200',
        '8BU' => 'E02001200',
        '8BY' => 'E02001200',
        '8BZ' => 'E02001200',
        '8DA' => 'E02001200',
        '8DE' => 'E02001202',
        '8DF' => 'E02001200',
        '8DL' => 'E02001202',
        '8DN' => 'E02001200',
        '8DP' => 'E02001200',
        '8DR' => 'E02001200',
        '8DT' => 'E02001200',
        '8DU' => 'E02001200',
        '8DW' => 'E02001200',
        '8DX' => 'E02001200',
        '8DY' => 'E02001209',
        '8DZ' => 'E02001209',
        '8EA' => 'E02001209',
        '8EB' => 'E02001209',
        '8ED' => 'E02001209',
        '8EE' => 'E02001209',
        '8EF' => 'E02001209',
        '8EG' => 'E02001200',
        '8EH' => 'E02001209',
        '8EJ' => 'E02001200',
        '8EL' => 'E02001200',
        '8EN' => 'E02001209',
        '8EQ' => 'E02001200',
        '8EX' => 'E02001209',
        '8FA' => 'E02001202',
        '8FB' => 'E02001209',
        '8FD' => 'E02001209',
        '8FE' => 'E02001209',
        '8FF' => 'E02001202',
        '8FG' => 'E02001209',
        '8FH' => 'E02001202',
        '8FJ' => 'E02001202',
        '8FL' => 'E02001202',
        '8FN' => 'E02001209',
        '8FP' => 'E02001202',
        '8FQ' => 'E02001209',
        '8FR' => 'E02001202',
        '8FS' => 'E02001209',
        '8FT' => 'E02001209',
        '8FU' => 'E02001200',
        '8FW' => 'E02001202',
        '8FX' => 'E02001202',
        '8FY' => 'E02001202',
        '8FZ' => 'E02001202',
        '8GA' => 'E02001202',
        '8GB' => 'E02001202',
        '8GD' => 'E02001212',
        '8GE' => 'E02001200',
        '8GF' => 'E02001200',
        '8GH' => 'E02001200',
        '8GN' => 'E02001209',
        '8HA' => 'E02001209',
        '8HB' => 'E02001209',
        '8HD' => 'E02001209',
        '8HE' => 'E02001209',
        '8HF' => 'E02001209',
        '8HG' => 'E02001209',
        '8HH' => 'E02001209',
        '8HJ' => 'E02001209',
        '8HL' => 'E02001209',
        '8HN' => 'E02001209',
        '8HP' => 'E02001209',
        '8HQ' => 'E02001209',
        '8HR' => 'E02001209',
        '8HS' => 'E02001209',
        '8HT' => 'E02001209',
        '8HU' => 'E02001209',
        '8HW' => 'E02001209',
        '8HX' => 'E02001209',
        '8HY' => 'E02001209',
        '8HZ' => 'E02001209',
        '8JA' => 'E02001209',
        '8JB' => 'E02001209',
        '8JD' => 'E02001209',
        '8JE' => 'E02001209',
        '8JF' => 'E02001209',
        '8JG' => 'E02001200',
        '8JH' => 'E02001200',
        '8JJ' => 'E02001209',
        '8JL' => 'E02001209',
        '8JN' => 'E02001209',
        '8JP' => 'E02001209',
        '8JQ' => 'E02001200',
        '8JR' => 'E02001209',
        '8JS' => 'E02001200',
        '8JT' => 'E02001209',
        '8JU' => 'E02001209',
        '8JW' => 'E02001209',
        '8JX' => 'E02001209',
        '8JY' => 'E02001209',
        '8JZ' => 'E02001212',
        '8LA' => 'E02001212',
        '8LB' => 'E02001212',
        '8LD' => 'E02001212',
        '8LE' => 'E02001212',
        '8LF' => 'E02001209',
        '8LG' => 'E02001212',
        '8LH' => 'E02001209',
        '8LJ' => 'E02001209',
        '8LL' => 'E02001209',
        '8LN' => 'E02001209',
        '8LP' => 'E02001212',
        '8LQ' => 'E02001209',
        '8LR' => 'E02001212',
        '8LS' => 'E02001212',
        '8LT' => 'E02001212',
        '8LU' => 'E02001212',
        '8LW' => 'E02001209',
        '8LX' => 'E02001212',
        '8LY' => 'E02001212',
        '8LZ' => 'E02001212',
        '8NA' => 'E02001212',
        '8NB' => 'E02001212',
        '8ND' => 'E02001212',
        '8NE' => 'E02001212',
        '8NF' => 'E02001212',
        '8NG' => 'E02001212',
        '8NH' => 'E02001212',
        '8NJ' => 'E02001212',
        '8NL' => 'E02001212',
        '8NN' => 'E02001212',
        '8NP' => 'E02001212',
        '8NQ' => 'E02001212',
        '8NR' => 'E02001212',
        '8NS' => 'E02001212',
        '8NT' => 'E02001212',
        '8NU' => 'E02001212',
        '8NW' => 'E02001212',
        '8NX' => 'E02001202',
        '8NY' => 'E02001212',
        '8NZ' => 'E02001212',
        '8PA' => 'E02001212',
        '8PB' => 'E02001212',
        '8PD' => 'E02001212',
        '8PE' => 'E02001212',
        '8PF' => 'E02001212',
        '8PG' => 'E02001212',
        '8PH' => 'E02001212',
        '8PJ' => 'E02001212',
        '8PL' => 'E02001212',
        '8PN' => 'E02001212',
        '8PP' => 'E02001212',
        '8PQ' => 'E02001212',
        '8PR' => 'E02001212',
        '8PS' => 'E02001212',
        '8PT' => 'E02001212',
        '8PU' => 'E02001212',
        '8PW' => 'E02001212',
        '8PX' => 'E02001212',
        '8PY' => 'E02001209',
        '8PZ' => 'E02001209',
        '8QA' => 'E02001212',
        '8QB' => 'E02001209',
        '8QD' => 'E02001209',
        '8QE' => 'E02001212',
        '8QF' => 'E02001212',
        '8QG' => 'E02001212',
        '8QH' => 'E02001212',
        '8QJ' => 'E02001212',
        '8QL' => 'E02001212',
        '8QN' => 'E02001213',
        '8QP' => 'E02001209',
        '8QQ' => 'E02001212',
        '8QR' => 'E02001212',
        '8QS' => 'E02001209',
        '8QT' => 'E02001209',
        '8QU' => 'E02001209',
        '8QW' => 'E02001212',
        '8QX' => 'E02001209',
        '8QY' => 'E02001209',
        '8QZ' => 'E02001209',
        '8RA' => 'E02001209',
        '8RB' => 'E02001212',
        '8RD' => 'E02001212',
        '8RE' => 'E02001212',
        '8RF' => 'E02001212',
        '8RG' => 'E02001212',
        '8RH' => 'E02001212',
        '8RJ' => 'E02001212',
        '8RL' => 'E02001212',
        '8RN' => 'E02001212',
        '8RP' => 'E02001212',
        '8RQ' => 'E02001212',
        '8RR' => 'E02001212',
        '8RS' => 'E02001209',
        '8RT' => 'E02001209',
        '8RU' => 'E02001209',
        '8RW' => 'E02001212',
        '8RX' => 'E02001209',
        '8RY' => 'E02001209',
        '8RZ' => 'E02001209',
        '8SA' => 'E02001213',
        '8SB' => 'E02001213',
        '8SD' => 'E02001209',
        '8SE' => 'E02001209',
        '8SF' => 'E02001209',
        '8SG' => 'E02001209',
        '8SH' => 'E02001213',
        '8SJ' => 'E02001213',
        '8SL' => 'E02001213',
        '8SN' => 'E02001213',
        '8SP' => 'E02001213',
        '8SQ' => 'E02001213',
        '8SR' => 'E02001213',
        '8SS' => 'E02001213',
        '8ST' => 'E02001213',
        '8SU' => 'E02001209',
        '8SW' => 'E02001213',
        '8SX' => 'E02001213',
        '8SY' => 'E02001209',
        '8SZ' => 'E02001213',
        '8TA' => 'E02001213',
        '8TB' => 'E02001213',
        '8TD' => 'E02001213',
        '8TE' => 'E02001213',
        '8TF' => 'E02001213',
        '8TG' => 'E02001213',
        '8TH' => 'E02001213',
        '8TJ' => 'E02001213',
        '8TL' => 'E02001213',
        '8TN' => 'E02001213',
        '8TP' => 'E02001213',
        '8TQ' => 'E02001213',
        '8TR' => 'E02001213',
        '8TS' => 'E02001213',
        '8TT' => 'E02001209',
        '8TU' => 'E02001202',
        '8TW' => 'E02001213',
        '8TX' => 'E02001213',
        '8TY' => 'E02001213',
        '8TZ' => 'E02001209',
        '8UA' => 'E02001202',
        '8UB' => 'E02001209',
        '8UD' => 'E02001209',
        '8UE' => 'E02001209',
        '8UF' => 'E02001209',
        '8UG' => 'E02001209',
        '8UH' => 'E02001209',
        '8UJ' => 'E02001202',
        '8UL' => 'E02001209',
        '8UN' => 'E02001209',
        '8UP' => 'E02001213',
        '8UQ' => 'E02001209',
        '8UR' => 'E02001209',
        '8US' => 'E02001209',
        '8UT' => 'E02001212',
        '8UU' => 'E02001212',
        '8UW' => 'E02001209',
        '8UX' => 'E02001212',
        '8UY' => 'E02001212',
        '8UZ' => 'E02001212',
        '8WA' => 'E02001202',
        '8WB' => 'E02001202',
        '8WD' => 'E02001202',
        '8WE' => 'E02001202',
        '8WF' => 'E02001202',
        '8WG' => 'E02001202',
        '8WH' => 'E02001202',
        '8WJ' => 'E02001212',
        '8WL' => 'E02001202',
        '8WN' => 'E02001202',
        '8WP' => 'E02001202',
        '8WQ' => 'E02001202',
        '8WR' => 'E02001212',
        '8WS' => 'E02001212',
        '8WT' => 'E02001212',
        '8WU' => 'E02001212',
        '8WW' => 'E02001202',
        '8WX' => 'E02001212',
        '8WY' => 'E02001212',
        '8WZ' => 'E02001202',
        '8XA' => 'E02001212',
        '8XB' => 'E02001212',
        '8XD' => 'E02001202',
        '8XE' => 'E02001202',
        '8XF' => 'E02001202',
        '8XG' => 'E02001202',
        '8XH' => 'E02001202',
        '8XJ' => 'E02001202',
        '8XL' => 'E02001212',
        '8XN' => 'E02001202',
        '8XU' => 'E02001202',
        '8XY' => 'E02001202',
        '8XZ' => 'E02001202',
        '8YZ' => 'E02001202',
        '8ZU' => 'E02001202',
        '8ZW' => 'E02001202',
        '9AB' => 'E02001200',
        '9AD' => 'E02001202',
        '9AE' => 'E02001202',
        '9AF' => 'E02001202',
        '9AG' => 'E02001200',
        '9AH' => 'E02001202',
        '9AJ' => 'E02001202',
        '9AL' => 'E02001202',
        '9AN' => 'E02001202',
        '9AP' => 'E02001202',
        '9AQ' => 'E02001200',
        '9AR' => 'E02001202',
        '9AS' => 'E02001202',
        '9AT' => 'E02001200',
        '9AU' => 'E02001202',
        '9AW' => 'E02001202',
        '9AY' => 'E02001200',
        '9AZ' => 'E02001200',
        '9BA' => 'E02001200',
        '9BB' => 'E02001200',
        '9BD' => 'E02001200',
        '9BE' => 'E02001202',
        '9BN' => 'E02001202',
        '9BP' => 'E02001202',
        '9BQ' => 'E02001202',
        '9BR' => 'E02001202',
        '9BS' => 'E02001202',
        '9BT' => 'E02001202',
        '9BU' => 'E02001202',
        '9BW' => 'E02001202',
        '9BX' => 'E02001202',
        '9BY' => 'E02001202',
        '9BZ' => 'E02001202',
        '9DA' => 'E02001202',
        '9DB' => 'E02001202',
        '9DD' => 'E02001202',
        '9DE' => 'E02001202',
        '9DF' => 'E02001200',
        '9DG' => 'E02001200',
        '9DH' => 'E02001200',
        '9DJ' => 'E02001202',
        '9DL' => 'E02001202',
        '9DN' => 'E02001200',
        '9DR' => 'E02001202',
        '9DS' => 'E02001202',
        '9DT' => 'E02001202',
        '9DU' => 'E02001202',
        '9DX' => 'E02001202',
        '9DY' => 'E02001202',
        '9DZ' => 'E02001202',
        '9EA' => 'E02001202',
        '9EB' => 'E02001202',
        '9ED' => 'E02001202',
        '9EE' => 'E02001202',
        '9EF' => 'E02001202',
        '9EG' => 'E02001202',
        '9EH' => 'E02001202',
        '9EJ' => 'E02001202',
        '9EL' => 'E02001202',
        '9EN' => 'E02001202',
        '9EP' => 'E02001202',
        '9EQ' => 'E02001202',
        '9ER' => 'E02001202',
        '9ES' => 'E02001202',
        '9ET' => 'E02001202',
        '9EU' => 'E02001202',
        '9EW' => 'E02001202',
        '9EX' => 'E02001202',
        '9EY' => 'E02001202',
        '9EZ' => 'E02001202',
        '9FA' => 'E02001202',
        '9FB' => 'E02001202',
        '9FD' => 'E02001202',
        '9FE' => 'E02001202',
        '9FF' => 'E02001202',
        '9FG' => 'E02001202',
        '9FH' => 'E02001202',
        '9FJ' => 'E02001202',
        '9FL' => 'E02001202',
        '9FN' => 'E02001202',
        '9FP' => 'E02001202',
        '9FQ' => 'E02001202',
        '9HA' => 'E02001202',
        '9HB' => 'E02001202',
        '9HD' => 'E02001202',
        '9HE' => 'E02001202',
        '9HF' => 'E02001202',
        '9HG' => 'E02001202',
        '9HH' => 'E02001202',
        '9HJ' => 'E02001202',
        '9HL' => 'E02001202',
        '9HN' => 'E02001202',
        '9HQ' => 'E02001202',
        '9HR' => 'E02001202',
        '9HS' => 'E02001202',
        '9HT' => 'E02001202',
        '9HU' => 'E02001202',
        '9HW' => 'E02001202',
        '9HX' => 'E02001202',
        '9HY' => 'E02001202',
        '9HZ' => 'E02001202',
        '9JA' => 'E02001202',
        '9JB' => 'E02001202',
        '9JD' => 'E02001202',
        '9JG' => 'E02001202',
        '9JH' => 'E02001202',
        '9JJ' => 'E02001202',
        '9JL' => 'E02001202',
        '9JN' => 'E02001202',
        '9JP' => 'E02001202',
        '9JQ' => 'E02001202',
        '9JR' => 'E02001202',
        '9JS' => 'E02001202',
        '9JT' => 'E02001202',
        '9JU' => 'E02001202',
        '9JW' => 'E02001202',
        '9JX' => 'E02001202',
        '9JY' => 'E02001202',
        '9JZ' => 'E02001202',
        '9LA' => 'E02001202',
        '9LB' => 'E02001202',
        '9LD' => 'E02001202',
        '9LE' => 'E02001202',
        '9LF' => 'E02001202',
        '9LG' => 'E02001202',
        '9LH' => 'E02001202',
        '9LJ' => 'E02001202',
        '9LL' => 'E02001204',
        '9LN' => 'E02001204',
        '9LP' => 'E02001202',
        '9LQ' => 'E02001202',
        '9LR' => 'E02001202',
        '9LS' => 'E02001204',
        '9LT' => 'E02001202',
        '9LU' => 'E02001202',
        '9LW' => 'E02001202',
        '9LX' => 'E02001202',
        '9LY' => 'E02001202',
        '9LZ' => 'E02001202',
        '9NA' => 'E02001209',
        '9NB' => 'E02001202',
        '9ND' => 'E02001202',
        '9NE' => 'E02001202',
        '9NF' => 'E02001202',
        '9NG' => 'E02001204',
        '9NH' => 'E02001204',
        '9NJ' => 'E02001204',
        '9NL' => 'E02001204',
        '9NN' => 'E02001204',
        '9NP' => 'E02001204',
        '9NQ' => 'E02001204',
        '9NR' => 'E02001204',
        '9NS' => 'E02001204',
        '9NT' => 'E02001202',
        '9NU' => 'E02001204',
        '9NW' => 'E02001204',
        '9NX' => 'E02001202',
        '9NY' => 'E02001204',
        '9NZ' => 'E02001204',
        '9PA' => 'E02001204',
        '9PB' => 'E02001204',
        '9PD' => 'E02001204',
        '9PE' => 'E02001204',
        '9PF' => 'E02001202',
        '9PG' => 'E02001202',
        '9PH' => 'E02001202',
        '9PL' => 'E02001202',
        '9PN' => 'E02001209',
        '9PP' => 'E02001202',
        '9PQ' => 'E02001202',
        '9PR' => 'E02001202',
        '9PT' => 'E02001202',
        '9PU' => 'E02001204',
        '9PW' => 'E02001202',
        '9PX' => 'E02001202',
        '9PY' => 'E02001202',
        '9PZ' => 'E02001212',
        '9QA' => 'E02001202',
        '9QB' => 'E02001202',
        '9QD' => 'E02001202',
        '9QE' => 'E02001202',
        '9QF' => 'E02001202',
        '9QG' => 'E02001202',
        '9QH' => 'E02001202',
        '9QJ' => 'E02001202',
        '9QL' => 'E02001202',
        '9QN' => 'E02001209',
        '9QP' => 'E02001209',
        '9QQ' => 'E02001202',
        '9QR' => 'E02001202',
        '9QS' => 'E02001209',
        '9QT' => 'E02001209',
        '9QU' => 'E02001209',
        '9QW' => 'E02001202',
        '9QX' => 'E02001209',
        '9QY' => 'E02001209',
        '9QZ' => 'E02001202',
        '9RA' => 'E02001212',
        '9RB' => 'E02001212',
        '9RD' => 'E02001204',
        '9RE' => 'E02001204',
        '9RF' => 'E02001204',
        '9RG' => 'E02001204',
        '9RH' => 'E02001204',
        '9RJ' => 'E02001204',
        '9RL' => 'E02001204',
        '9RN' => 'E02001204',
        '9RP' => 'E02001204',
        '9RQ' => 'E02001204',
        '9RR' => 'E02001204',
        '9RS' => 'E02001204',
        '9RT' => 'E02001212',
        '9RU' => 'E02001212',
        '9RW' => 'E02001204',
        '9RX' => 'E02001212',
        '9RY' => 'E02001204',
        '9RZ' => 'E02001204',
        '9WF' => 'E02001202',
        '9WG' => 'E02001202',
        '9WH' => 'E02001202',
        '9WJ' => 'E02001202',
        '9WL' => 'E02001202',
        '9WN' => 'E02001202',
        '9WP' => 'E02001202',
        '9WQ' => 'E02001202',
        '9WR' => 'E02001202',
        '9WS' => 'E02001202',
        '9WT' => 'E02001202',
        '9WU' => 'E02001202',
        '9WW' => 'E02001202',
        '9WX' => 'E02001202',
        '9WY' => 'E02001204',
        '9WZ' => 'E02001204',
        '9YF' => 'E02001204',
        '9ZP' => 'E02001202',
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
