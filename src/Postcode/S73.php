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
final class S73
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02001531',
        '0AB' => 'E02001534',
        '0AD' => 'E02001531',
        '0AE' => 'E02001531',
        '0AF' => 'E02001534',
        '0AG' => 'E02001531',
        '0AH' => 'E02001531',
        '0AJ' => 'E02001534',
        '0AL' => 'E02001534',
        '0AN' => 'E02001534',
        '0AP' => 'E02001534',
        '0AQ' => 'E02001531',
        '0AR' => 'E02001534',
        '0AS' => 'E02001534',
        '0AT' => 'E02001534',
        '0AU' => 'E02001534',
        '0AW' => 'E02001534',
        '0AX' => 'E02001537',
        '0AY' => 'E02001534',
        '0AZ' => 'E02001534',
        '0BA' => 'E02001534',
        '0BB' => 'E02001534',
        '0BD' => 'E02001534',
        '0BE' => 'E02001534',
        '0BF' => 'E02001534',
        '0BG' => 'E02001531',
        '0BH' => 'E02001534',
        '0BJ' => 'E02001531',
        '0BL' => 'E02001534',
        '0BN' => 'E02001531',
        '0BP' => 'E02001534',
        '0BQ' => 'E02001534',
        '0BS' => 'E02001531',
        '0BT' => 'E02001534',
        '0BU' => 'E02001534',
        '0BW' => 'E02001534',
        '0BX' => 'E02001534',
        '0BZ' => 'E02001534',
        '0DA' => 'E02001531',
        '0DB' => 'E02001534',
        '0DD' => 'E02001531',
        '0DE' => 'E02001531',
        '0DF' => 'E02001534',
        '0DG' => 'E02001531',
        '0DH' => 'E02001534',
        '0DJ' => 'E02001534',
        '0DL' => 'E02001534',
        '0DN' => 'E02001534',
        '0DP' => 'E02001534',
        '0DQ' => 'E02001534',
        '0DR' => 'E02001534',
        '0DS' => 'E02001528',
        '0DT' => 'E02001534',
        '0DU' => 'E02001534',
        '0DW' => 'E02001534',
        '0DX' => 'E02001534',
        '0DY' => 'E02001534',
        '0EA' => 'E02001534',
        '0EB' => 'E02001534',
        '0ED' => 'E02001534',
        '0EE' => 'E02001534',
        '0EF' => 'E02001534',
        '0EG' => 'E02001534',
        '0EH' => 'E02001534',
        '0EJ' => 'E02001534',
        '0EL' => 'E02001534',
        '0EN' => 'E02001534',
        '0EP' => 'E02001534',
        '0EQ' => 'E02001534',
        '0ER' => 'E02001534',
        '0ES' => 'E02001534',
        '0ET' => 'E02001534',
        '0EU' => 'E02001534',
        '0EW' => 'E02001534',
        '0EX' => 'E02001534',
        '0EY' => 'E02001534',
        '0EZ' => 'E02001534',
        '0FA' => 'E02001578',
        '0FB' => 'E02001534',
        '0FD' => 'E02001534',
        '0FE' => 'E02001537',
        '0FF' => 'E02001534',
        '0FH' => 'E02001534',
        '0HA' => 'E02001534',
        '0HB' => 'E02001537',
        '0HD' => 'E02001534',
        '0HE' => 'E02001534',
        '0HF' => 'E02001534',
        '0HG' => 'E02001534',
        '0HH' => 'E02001534',
        '0HJ' => 'E02001534',
        '0HL' => 'E02001534',
        '0HN' => 'E02001534',
        '0HP' => 'E02001534',
        '0HQ' => 'E02001534',
        '0HR' => 'E02001534',
        '0HS' => 'E02001534',
        '0HT' => 'E02001534',
        '0HU' => 'E02001534',
        '0HW' => 'E02001534',
        '0HX' => 'E02001534',
        '0HY' => 'E02001534',
        '0HZ' => 'E02001537',
        '0JA' => 'E02001534',
        '0JB' => 'E02001534',
        '0JD' => 'E02001534',
        '0JE' => 'E02001534',
        '0JF' => 'E02001534',
        '0JG' => 'E02001534',
        '0JH' => 'E02001534',
        '0JJ' => 'E02001534',
        '0JL' => 'E02001534',
        '0JN' => 'E02001534',
        '0JP' => 'E02001534',
        '0JQ' => 'E02001534',
        '0JR' => 'E02001534',
        '0JS' => 'E02001534',
        '0JT' => 'E02001534',
        '0JU' => 'E02001534',
        '0JW' => 'E02001534',
        '0JX' => 'E02001534',
        '0JY' => 'E02001534',
        '0JZ' => 'E02001534',
        '0LA' => 'E02001534',
        '0LB' => 'E02001534',
        '0LD' => 'E02001534',
        '0LE' => 'E02001534',
        '0LF' => 'E02001534',
        '0LG' => 'E02001534',
        '0LH' => 'E02001534',
        '0LJ' => 'E02001534',
        '0LL' => 'E02001534',
        '0LN' => 'E02001534',
        '0LP' => 'E02001534',
        '0LQ' => 'E02001534',
        '0LR' => 'E02001534',
        '0LS' => 'E02001534',
        '0LT' => 'E02001534',
        '0LU' => 'E02001534',
        '0LW' => 'E02001534',
        '0LX' => 'E02001534',
        '0LY' => 'E02001534',
        '0LZ' => 'E02001534',
        '0NA' => 'E02001534',
        '0NB' => 'E02001534',
        '0ND' => 'E02001534',
        '0NE' => 'E02001537',
        '0NF' => 'E02001534',
        '0NG' => 'E02001534',
        '0NH' => 'E02001534',
        '0NL' => 'E02001534',
        '0NN' => 'E02001534',
        '0NP' => 'E02001537',
        '0NQ' => 'E02001537',
        '0NR' => 'E02001537',
        '0NS' => 'E02001537',
        '0NT' => 'E02001537',
        '0NU' => 'E02001537',
        '0NW' => 'E02001537',
        '0NX' => 'E02001537',
        '0NY' => 'E02001534',
        '0NZ' => 'E02001534',
        '0PA' => 'E02001537',
        '0PB' => 'E02001537',
        '0PD' => 'E02001537',
        '0PE' => 'E02001537',
        '0PF' => 'E02001537',
        '0PG' => 'E02001534',
        '0PH' => 'E02001537',
        '0PJ' => 'E02001537',
        '0PL' => 'E02001537',
        '0PN' => 'E02001537',
        '0PP' => 'E02001537',
        '0PQ' => 'E02001537',
        '0PR' => 'E02001537',
        '0PS' => 'E02001537',
        '0PT' => 'E02001537',
        '0PU' => 'E02001537',
        '0PW' => 'E02001537',
        '0PX' => 'E02001537',
        '0PY' => 'E02001537',
        '0PZ' => 'E02001537',
        '0QA' => 'E02001537',
        '0QB' => 'E02001537',
        '0QD' => 'E02001537',
        '0QE' => 'E02001537',
        '0QF' => 'E02001537',
        '0QG' => 'E02001537',
        '0QH' => 'E02001537',
        '0QJ' => 'E02001537',
        '0QL' => 'E02001537',
        '0QN' => 'E02001537',
        '0QP' => 'E02001537',
        '0QQ' => 'E02001537',
        '0QR' => 'E02001537',
        '0QS' => 'E02001537',
        '0QT' => 'E02001537',
        '0QU' => 'E02001537',
        '0QW' => 'E02001537',
        '0QX' => 'E02001537',
        '0QY' => 'E02001534',
        '0QZ' => 'E02001534',
        '0RA' => 'E02001534',
        '0RB' => 'E02001534',
        '0RD' => 'E02001534',
        '0RE' => 'E02001534',
        '0RF' => 'E02001534',
        '0RG' => 'E02001534',
        '0RH' => 'E02001534',
        '0RJ' => 'E02001534',
        '0RL' => 'E02001534',
        '0RN' => 'E02001534',
        '0RP' => 'E02001534',
        '0RQ' => 'E02001534',
        '0RR' => 'E02001534',
        '0RS' => 'E02001534',
        '0RT' => 'E02001534',
        '0RU' => 'E02001534',
        '0RW' => 'E02001534',
        '0RX' => 'E02001534',
        '0RY' => 'E02001534',
        '0RZ' => 'E02001534',
        '0SA' => 'E02001534',
        '0SB' => 'E02001534',
        '0SD' => 'E02001534',
        '0SE' => 'E02001534',
        '0SF' => 'E02001534',
        '0SG' => 'E02001534',
        '0SH' => 'E02001534',
        '0SJ' => 'E02001534',
        '0SL' => 'E02001534',
        '0SN' => 'E02001534',
        '0SP' => 'E02001534',
        '0SQ' => 'E02001534',
        '0SR' => 'E02001534',
        '0SS' => 'E02001534',
        '0ST' => 'E02001534',
        '0SU' => 'E02001534',
        '0SW' => 'E02001534',
        '0SX' => 'E02001578',
        '0SY' => 'E02001534',
        '0SZ' => 'E02001534',
        '0TA' => 'E02001534',
        '0TB' => 'E02001578',
        '0TD' => 'E02001534',
        '0TE' => 'E02001534',
        '0TF' => 'E02001578',
        '0TG' => 'E02001578',
        '0TH' => 'E02001578',
        '0TJ' => 'E02001578',
        '0TL' => 'E02001578',
        '0TN' => 'E02001578',
        '0TP' => 'E02001578',
        '0TQ' => 'E02001578',
        '0TR' => 'E02001578',
        '0TS' => 'E02001578',
        '0TT' => 'E02001578',
        '0TU' => 'E02001578',
        '0TW' => 'E02001578',
        '0TX' => 'E02001578',
        '0TY' => 'E02001578',
        '0TZ' => 'E02001578',
        '0UA' => 'E02001578',
        '0UB' => 'E02001578',
        '0UD' => 'E02001578',
        '0UE' => 'E02001578',
        '0UF' => 'E02001578',
        '0UG' => 'E02001578',
        '0UH' => 'E02001578',
        '0UJ' => 'E02001578',
        '0UL' => 'E02001578',
        '0UN' => 'E02001534',
        '0UP' => 'E02001534',
        '0UQ' => 'E02001578',
        '0UR' => 'E02001578',
        '0US' => 'E02001534',
        '0UT' => 'E02001534',
        '0UU' => 'E02001534',
        '0UW' => 'E02001534',
        '0UX' => 'E02001534',
        '0UY' => 'E02001534',
        '0UZ' => 'E02001534',
        '0WA' => 'E02001531',
        '0WB' => 'E02001534',
        '0WD' => 'E02001534',
        '0WE' => 'E02001534',
        '0WF' => 'E02001578',
        '0WG' => 'E02001534',
        '0WH' => 'E02001534',
        '0WJ' => 'E02001534',
        '0WL' => 'E02001534',
        '0WN' => 'E02001531',
        '0WP' => 'E02001531',
        '0WQ' => 'E02001531',
        '0WR' => 'E02001531',
        '0WS' => 'E02001531',
        '0WT' => 'E02001531',
        '0WU' => 'E02001531',
        '0WW' => 'E02001531',
        '0WX' => 'E02001578',
        '0XA' => 'E02001578',
        '0XB' => 'E02001578',
        '0XD' => 'E02001578',
        '0XE' => 'E02001578',
        '0XF' => 'E02001578',
        '0XG' => 'E02001578',
        '0XH' => 'E02001578',
        '0XJ' => 'E02001578',
        '0XL' => 'E02001578',
        '0XN' => 'E02001578',
        '0XP' => 'E02001578',
        '0XQ' => 'E02001578',
        '0XR' => 'E02001578',
        '0XS' => 'E02001578',
        '0XT' => 'E02001578',
        '0XU' => 'E02001578',
        '0XW' => 'E02001578',
        '0XX' => 'E02001578',
        '0XY' => 'E02001578',
        '0XZ' => 'E02001578',
        '0YA' => 'E02001578',
        '0YB' => 'E02001531',
        '0YD' => 'E02001578',
        '0YE' => 'E02001531',
        '0YF' => 'E02001534',
        '0YG' => 'E02001534',
        '0YH' => 'E02001534',
        '0YJ' => 'E02001534',
        '0YL' => 'E02001534',
        '0YN' => 'E02001531',
        '0YP' => 'E02001531',
        '0YQ' => 'E02001534',
        '0YR' => 'E02001534',
        '0YS' => 'E02001531',
        '0YT' => 'E02001531',
        '0YU' => 'E02001534',
        '0YW' => 'E02001531',
        '0YX' => 'E02001534',
        '0YY' => 'E02001534',
        '0YZ' => 'E02001531',
        '0ZJ' => 'E02001531',
        '0ZL' => 'E02001531',
        '0ZN' => 'E02001534',
        '0ZP' => 'E02001534',
        '0ZQ' => 'E02001531',
        '0ZR' => 'E02001531',
        '0ZS' => 'E02001534',
        '0ZT' => 'E02001531',
        '0ZU' => 'E02001534',
        '0ZW' => 'E02001534',
        '0ZX' => 'E02001534',
        '0ZZ' => 'E02001534',
        '3AA' => 'E02001531',
        '3AB' => 'E02001531',
        '3AE' => 'E02001531',
        '3AF' => 'E02001531',
        '3AG' => 'E02001531',
        '3AH' => 'E02001531',
        '3AL' => 'E02001531',
        '3AN' => 'E02001531',
        '3AP' => 'E02001531',
        '3AQ' => 'E02001531',
        '3AR' => 'E02001531',
        '3AS' => 'E02001531',
        '3AT' => 'E02001531',
        '3AU' => 'E02001531',
        '3AW' => 'E02001531',
        '3AX' => 'E02001531',
        '3AY' => 'E02001531',
        '3AZ' => 'E02001531',
        '3BA' => 'E02001531',
        '3BB' => 'E02001531',
        '3BD' => 'E02001531',
        '3BE' => 'E02001531',
        '3BF' => 'E02001531',
        '3BG' => 'E02001531',
        '3BH' => 'E02001531',
        '3BJ' => 'E02001531',
        '3BL' => 'E02001531',
        '3BN' => 'E02001531',
        '3BP' => 'E02001531',
        '3BQ' => 'E02001531',
        '3BR' => 'E02001531',
        '3BS' => 'E02001531',
        '3BT' => 'E02001531',
        '3BU' => 'E02001531',
        '3BW' => 'E02001531',
        '3BX' => 'E02001531',
        '3BY' => 'E02001531',
        '3BZ' => 'E02001531',
        '3DA' => 'E02001531',
        '3DB' => 'E02001531',
        '3DD' => 'E02001531',
        '3DE' => 'E02001531',
        '3DF' => 'E02001531',
        '3DG' => 'E02001531',
        '3DH' => 'E02001531',
        '3DJ' => 'E02001531',
        '8AA' => 'E02001531',
        '8AB' => 'E02001531',
        '8AD' => 'E02001534',
        '8AE' => 'E02001531',
        '8AF' => 'E02001531',
        '8AG' => 'E02001531',
        '8AH' => 'E02001531',
        '8AJ' => 'E02001531',
        '8AL' => 'E02001531',
        '8AN' => 'E02001531',
        '8AP' => 'E02001531',
        '8AQ' => 'E02001528',
        '8AR' => 'E02001531',
        '8AS' => 'E02001531',
        '8AT' => 'E02001531',
        '8AU' => 'E02001531',
        '8AW' => 'E02001531',
        '8AX' => 'E02001531',
        '8AY' => 'E02001531',
        '8AZ' => 'E02001528',
        '8BA' => 'E02001531',
        '8BB' => 'E02001531',
        '8BD' => 'E02001531',
        '8BE' => 'E02001531',
        '8BF' => 'E02001531',
        '8BG' => 'E02001531',
        '8BH' => 'E02001531',
        '8BJ' => 'E02001531',
        '8BL' => 'E02001531',
        '8BN' => 'E02001531',
        '8BP' => 'E02001531',
        '8BQ' => 'E02001534',
        '8BW' => 'E02001531',
        '8DA' => 'E02001531',
        '8DB' => 'E02001531',
        '8DD' => 'E02001531',
        '8DE' => 'E02001531',
        '8DF' => 'E02001531',
        '8DG' => 'E02001531',
        '8DH' => 'E02001531',
        '8DJ' => 'E02001531',
        '8DL' => 'E02001531',
        '8DN' => 'E02001531',
        '8DP' => 'E02001531',
        '8DQ' => 'E02001531',
        '8DR' => 'E02001531',
        '8DS' => 'E02001531',
        '8DT' => 'E02001531',
        '8DU' => 'E02001531',
        '8DW' => 'E02001531',
        '8DX' => 'E02001531',
        '8DY' => 'E02001531',
        '8DZ' => 'E02001531',
        '8EA' => 'E02001531',
        '8EB' => 'E02001531',
        '8ED' => 'E02001531',
        '8EE' => 'E02001531',
        '8EF' => 'E02001528',
        '8EG' => 'E02001531',
        '8EH' => 'E02001523',
        '8EJ' => 'E02001523',
        '8EL' => 'E02001523',
        '8EN' => 'E02001523',
        '8EP' => 'E02001523',
        '8EQ' => 'E02001523',
        '8ER' => 'E02001523',
        '8ES' => 'E02001523',
        '8ET' => 'E02001531',
        '8EU' => 'E02001531',
        '8EW' => 'E02001523',
        '8EX' => 'E02001531',
        '8EY' => 'E02001534',
        '8EZ' => 'E02001531',
        '8FA' => 'E02001528',
        '8FB' => 'E02001531',
        '8FD' => 'E02001531',
        '8FE' => 'E02001531',
        '8FF' => 'E02001528',
        '8FG' => 'E02001531',
        '8FH' => 'E02001531',
        '8FJ' => 'E02001531',
        '8FL' => 'E02001531',
        '8FN' => 'E02001531',
        '8FP' => 'E02001531',
        '8FQ' => 'E02001531',
        '8FR' => 'E02001531',
        '8FS' => 'E02001531',
        '8FT' => 'E02001531',
        '8FU' => 'E02001531',
        '8FW' => 'E02001531',
        '8FX' => 'E02001531',
        '8FY' => 'E02001531',
        '8FZ' => 'E02001531',
        '8GA' => 'E02001531',
        '8GB' => 'E02001531',
        '8GD' => 'E02001531',
        '8GE' => 'E02001531',
        '8GF' => 'E02001531',
        '8GG' => 'E02001531',
        '8HA' => 'E02001531',
        '8HB' => 'E02001531',
        '8HD' => 'E02001534',
        '8HE' => 'E02001531',
        '8HF' => 'E02001531',
        '8HG' => 'E02001531',
        '8HH' => 'E02001531',
        '8HJ' => 'E02001531',
        '8HL' => 'E02001531',
        '8HN' => 'E02001531',
        '8HP' => 'E02001531',
        '8HQ' => 'E02001531',
        '8HR' => 'E02001531',
        '8HS' => 'E02001531',
        '8HT' => 'E02001531',
        '8HU' => 'E02001531',
        '8HW' => 'E02001531',
        '8HX' => 'E02001531',
        '8HY' => 'E02001531',
        '8HZ' => 'E02001531',
        '8JA' => 'E02001531',
        '8JB' => 'E02001531',
        '8JD' => 'E02001531',
        '8JE' => 'E02001531',
        '8JF' => 'E02001531',
        '8JG' => 'E02001531',
        '8JH' => 'E02001531',
        '8JJ' => 'E02001531',
        '8JL' => 'E02001531',
        '8JQ' => 'E02001531',
        '8JS' => 'E02001531',
        '8JT' => 'E02001531',
        '8JU' => 'E02001531',
        '8JX' => 'E02001531',
        '8JY' => 'E02001531',
        '8JZ' => 'E02001531',
        '8LA' => 'E02001531',
        '8LB' => 'E02001531',
        '8LD' => 'E02001531',
        '8LE' => 'E02001531',
        '8LF' => 'E02001531',
        '8LG' => 'E02001531',
        '8LH' => 'E02001531',
        '8LJ' => 'E02001531',
        '8LL' => 'E02001531',
        '8LN' => 'E02001531',
        '8LP' => 'E02001531',
        '8LQ' => 'E02001531',
        '8LR' => 'E02001531',
        '8LS' => 'E02001531',
        '8LT' => 'E02001531',
        '8LU' => 'E02001531',
        '8LW' => 'E02001531',
        '8LX' => 'E02001531',
        '8LY' => 'E02001531',
        '8LZ' => 'E02001531',
        '8NA' => 'E02001531',
        '8NB' => 'E02001531',
        '8ND' => 'E02001531',
        '8NE' => 'E02001531',
        '8NF' => 'E02001531',
        '8NG' => 'E02001531',
        '8NH' => 'E02001531',
        '8NP' => 'E02001534',
        '8NR' => 'E02001534',
        '8NS' => 'E02001534',
        '8NT' => 'E02001534',
        '8NU' => 'E02001534',
        '8NX' => 'E02001534',
        '8PA' => 'E02001534',
        '8PB' => 'E02001534',
        '8PD' => 'E02001534',
        '8PE' => 'E02001534',
        '8PF' => 'E02001534',
        '8PG' => 'E02001534',
        '8PH' => 'E02001534',
        '8PJ' => 'E02001531',
        '8PL' => 'E02001534',
        '8PN' => 'E02001534',
        '8PP' => 'E02001534',
        '8PQ' => 'E02001534',
        '8PR' => 'E02001534',
        '8PS' => 'E02001534',
        '8PT' => 'E02001534',
        '8PU' => 'E02001534',
        '8PW' => 'E02001534',
        '8PX' => 'E02001534',
        '8PY' => 'E02001534',
        '8PZ' => 'E02001534',
        '8QA' => 'E02001534',
        '8QB' => 'E02001534',
        '8QD' => 'E02001531',
        '8QE' => 'E02001531',
        '8QF' => 'E02001531',
        '8QG' => 'E02001531',
        '8QH' => 'E02001531',
        '8QQ' => 'E02001531',
        '8QR' => 'E02001531',
        '8QS' => 'E02001531',
        '8QT' => 'E02001531',
        '8QU' => 'E02001531',
        '8QW' => 'E02001531',
        '8QX' => 'E02001531',
        '8QY' => 'E02001531',
        '8QZ' => 'E02001531',
        '8RA' => 'E02001531',
        '8RB' => 'E02001531',
        '8RD' => 'E02001531',
        '8RE' => 'E02001531',
        '8RF' => 'E02001531',
        '8RG' => 'E02001531',
        '8RH' => 'E02001531',
        '8RJ' => 'E02001531',
        '8RL' => 'E02001531',
        '8RN' => 'E02001531',
        '8RP' => 'E02001531',
        '8RQ' => 'E02001531',
        '8RR' => 'E02001531',
        '8RS' => 'E02001531',
        '8RT' => 'E02001531',
        '8RU' => 'E02001531',
        '8RW' => 'E02001531',
        '8RX' => 'E02001531',
        '8RY' => 'E02001531',
        '8RZ' => 'E02001531',
        '8SA' => 'E02001531',
        '8SB' => 'E02001531',
        '8SD' => 'E02001531',
        '8SE' => 'E02001531',
        '8SF' => 'E02001531',
        '8SG' => 'E02001531',
        '8SH' => 'E02001531',
        '8SJ' => 'E02001531',
        '8SL' => 'E02001531',
        '8SN' => 'E02001531',
        '8SP' => 'E02001531',
        '8SQ' => 'E02001531',
        '8SR' => 'E02001531',
        '8SS' => 'E02001531',
        '8ST' => 'E02001531',
        '8SU' => 'E02001531',
        '8SW' => 'E02001531',
        '8TA' => 'E02001534',
        '8TB' => 'E02001534',
        '8TD' => 'E02001534',
        '8TE' => 'E02001534',
        '8TF' => 'E02001534',
        '8TG' => 'E02001534',
        '8TH' => 'E02001534',
        '8TJ' => 'E02001534',
        '8TL' => 'E02001534',
        '8TN' => 'E02001534',
        '8TP' => 'E02001534',
        '8TQ' => 'E02001534',
        '8TR' => 'E02001534',
        '8TS' => 'E02001534',
        '8TT' => 'E02001534',
        '8TU' => 'E02001534',
        '8TW' => 'E02001534',
        '8TX' => 'E02001534',
        '8UE' => 'E02001534',
        '8UF' => 'E02001537',
        '8UG' => 'E02001531',
        '8UQ' => 'E02001534',
        '8WY' => 'E02001531',
        '8YJ' => 'E02001531',
        '8YL' => 'E02001531',
        '8YN' => 'E02001531',
        '8YP' => 'E02001531',
        '8YQ' => 'E02001531',
        '8YR' => 'E02001534',
        '8YS' => 'E02001531',
        '8YT' => 'E02001531',
        '8YU' => 'E02001531',
        '8YW' => 'E02001531',
        '8YX' => 'E02001534',
        '8YY' => 'E02001534',
        '8YZ' => 'E02001534',
        '9AA' => 'E02001528',
        '9AB' => 'E02001528',
        '9AD' => 'E02001528',
        '9AE' => 'E02001528',
        '9AF' => 'E02001528',
        '9AG' => 'E02001528',
        '9AH' => 'E02001528',
        '9AJ' => 'E02001528',
        '9AL' => 'E02001528',
        '9AN' => 'E02001528',
        '9AP' => 'E02001528',
        '9AQ' => 'E02001528',
        '9AR' => 'E02001528',
        '9AS' => 'E02001528',
        '9AT' => 'E02001528',
        '9AU' => 'E02001528',
        '9AW' => 'E02001528',
        '9AX' => 'E02001528',
        '9AY' => 'E02001528',
        '9AZ' => 'E02001528',
        '9BA' => 'E02001528',
        '9BB' => 'E02001528',
        '9BD' => 'E02001528',
        '9BE' => 'E02001528',
        '9BF' => 'E02001528',
        '9BG' => 'E02001528',
        '9BH' => 'E02001528',
        '9BJ' => 'E02001528',
        '9BL' => 'E02001528',
        '9BN' => 'E02001528',
        '9BP' => 'E02001528',
        '9BQ' => 'E02001528',
        '9BS' => 'E02001528',
        '9BT' => 'E02001528',
        '9BU' => 'E02001528',
        '9BW' => 'E02001528',
        '9BY' => 'E02001528',
        '9BZ' => 'E02001528',
        '9DA' => 'E02001528',
        '9DB' => 'E02001528',
        '9DD' => 'E02001528',
        '9DE' => 'E02001528',
        '9DG' => 'E02001528',
        '9DH' => 'E02001528',
        '9DJ' => 'E02001528',
        '9DL' => 'E02001528',
        '9DN' => 'E02001528',
        '9DP' => 'E02001528',
        '9DQ' => 'E02001528',
        '9DR' => 'E02001528',
        '9DS' => 'E02001528',
        '9DT' => 'E02001528',
        '9DU' => 'E02001528',
        '9DW' => 'E02001528',
        '9DX' => 'E02001528',
        '9DY' => 'E02001528',
        '9DZ' => 'E02001528',
        '9EA' => 'E02001528',
        '9EB' => 'E02001528',
        '9ED' => 'E02001528',
        '9EE' => 'E02001528',
        '9EF' => 'E02001528',
        '9EG' => 'E02001528',
        '9EH' => 'E02001528',
        '9EJ' => 'E02001528',
        '9EL' => 'E02001528',
        '9EN' => 'E02001528',
        '9EP' => 'E02001528',
        '9EQ' => 'E02001528',
        '9ET' => 'E02001528',
        '9EU' => 'E02001528',
        '9EW' => 'E02001528',
        '9EX' => 'E02001528',
        '9EY' => 'E02001528',
        '9EZ' => 'E02001528',
        '9HA' => 'E02001528',
        '9HB' => 'E02001528',
        '9HD' => 'E02001528',
        '9HE' => 'E02001528',
        '9HF' => 'E02001528',
        '9HG' => 'E02001528',
        '9HH' => 'E02001528',
        '9HJ' => 'E02001528',
        '9HL' => 'E02001528',
        '9HN' => 'E02001528',
        '9HP' => 'E02001528',
        '9HQ' => 'E02001528',
        '9HR' => 'E02001528',
        '9HS' => 'E02001528',
        '9HT' => 'E02001528',
        '9HU' => 'E02001528',
        '9HW' => 'E02001528',
        '9HX' => 'E02001528',
        '9HY' => 'E02001528',
        '9HZ' => 'E02001528',
        '9JA' => 'E02001528',
        '9JB' => 'E02001528',
        '9JD' => 'E02001528',
        '9JE' => 'E02001528',
        '9JF' => 'E02001528',
        '9JG' => 'E02001528',
        '9JH' => 'E02001528',
        '9JJ' => 'E02001528',
        '9JL' => 'E02001528',
        '9JN' => 'E02001528',
        '9JP' => 'E02001528',
        '9JQ' => 'E02001528',
        '9JR' => 'E02001528',
        '9JS' => 'E02001528',
        '9JT' => 'E02001528',
        '9JU' => 'E02001528',
        '9JW' => 'E02001528',
        '9JX' => 'E02001528',
        '9JY' => 'E02001528',
        '9JZ' => 'E02001528',
        '9LA' => 'E02001528',
        '9LB' => 'E02001528',
        '9LD' => 'E02001528',
        '9LE' => 'E02001528',
        '9LF' => 'E02001528',
        '9LG' => 'E02001528',
        '9LH' => 'E02001528',
        '9LJ' => 'E02001528',
        '9LL' => 'E02001528',
        '9LN' => 'E02001528',
        '9LP' => 'E02001528',
        '9LQ' => 'E02001528',
        '9LR' => 'E02001528',
        '9LS' => 'E02001528',
        '9LT' => 'E02001528',
        '9LU' => 'E02001528',
        '9LW' => 'E02001528',
        '9LX' => 'E02001528',
        '9LY' => 'E02001528',
        '9LZ' => 'E02001528',
        '9NA' => 'E02001528',
        '9NB' => 'E02001528',
        '9ND' => 'E02001528',
        '9NE' => 'E02001528',
        '9NF' => 'E02001528',
        '9NG' => 'E02001528',
        '9NH' => 'E02001528',
        '9NJ' => 'E02001528',
        '9NL' => 'E02001528',
        '9NN' => 'E02001528',
        '9NP' => 'E02001528',
        '9NQ' => 'E02001528',
        '9NR' => 'E02001528',
        '9NS' => 'E02001528',
        '9NT' => 'E02001528',
        '9NU' => 'E02001531',
        '9NW' => 'E02001528',
        '9NX' => 'E02001531',
        '9NY' => 'E02001528',
        '9PA' => 'E02001528',
        '9PB' => 'E02001528',
        '9PD' => 'E02001528',
        '9PE' => 'E02001528',
        '9PF' => 'E02001528',
        '9PG' => 'E02001531',
        '9PH' => 'E02001528',
        '9PJ' => 'E02001531',
        '9PL' => 'E02001531',
        '9PN' => 'E02001528',
        '9PP' => 'E02001531',
        '9PQ' => 'E02001528',
        '9PR' => 'E02001531',
        '9PS' => 'E02001528',
        '9PT' => 'E02001531',
        '9PU' => 'E02001531',
        '9PW' => 'E02001528',
        '9PX' => 'E02001531',
        '9PY' => 'E02001531',
        '9PZ' => 'E02001531',
        '9QA' => 'E02001531',
        '9QB' => 'E02001531',
        '9QD' => 'E02001528',
        '9QE' => 'E02001528',
        '9QF' => 'E02001528',
        '9QG' => 'E02001528',
        '9QH' => 'E02001528',
        '9QJ' => 'E02001528',
        '9QL' => 'E02001528',
        '9QN' => 'E02001528',
        '9QP' => 'E02001528',
        '9QQ' => 'E02001528',
        '9QR' => 'E02001528',
        '9QS' => 'E02001528',
        '9QT' => 'E02001531',
        '9QU' => 'E02001528',
        '9QW' => 'E02001528',
        '9QX' => 'E02001531',
        '9QY' => 'E02001531',
        '9QZ' => 'E02001528',
        '9RA' => 'E02001528',
        '9RB' => 'E02001528',
        '9RD' => 'E02001528',
        '9RF' => 'E02001528',
        '9RG' => 'E02001528',
        '9RH' => 'E02001528',
        '9RJ' => 'E02001528',
        '9RL' => 'E02001528',
        '9RN' => 'E02001528',
        '9RP' => 'E02001528',
        '9RQ' => 'E02001528',
        '9RR' => 'E02001528',
        '9RS' => 'E02001528',
        '9WW' => 'E02001528',
        '9WX' => 'E02001531',
        '9WY' => 'E02001531',
        '9YR' => 'E02001531',
        '9YS' => 'E02001531',
        '9YT' => 'E02001528',
        '9YU' => 'E02001531',
        '9YW' => 'E02001531',
        '9YX' => 'E02001528',
        '9YY' => 'E02001531',
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
