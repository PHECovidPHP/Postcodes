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
final class W14
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02000381',
        '0AB' => 'E02000381',
        '0AD' => 'E02000381',
        '0AE' => 'E02000381',
        '0AF' => 'E02000378',
        '0AG' => 'E02000383',
        '0AH' => 'E02000381',
        '0AJ' => 'E02000381',
        '0AL' => 'E02000378',
        '0AN' => 'E02000378',
        '0AP' => 'E02000378',
        '0AQ' => 'E02000381',
        '0AR' => 'E02000378',
        '0AS' => 'E02000378',
        '0AT' => 'E02000378',
        '0AU' => 'E02000378',
        '0AW' => 'E02000378',
        '0AX' => 'E02000378',
        '0AY' => 'E02000378',
        '0AZ' => 'E02000378',
        '0BA' => 'E02000383',
        '0BB' => 'E02000378',
        '0BD' => 'E02000381',
        '0BE' => 'E02000378',
        '0BG' => 'E02000378',
        '0BH' => 'E02000383',
        '0BJ' => 'E02000378',
        '0BL' => 'E02000378',
        '0BN' => 'E02000378',
        '0BP' => 'E02000378',
        '0BQ' => 'E02000378',
        '0BS' => 'E02000378',
        '0BT' => 'E02000378',
        '0BU' => 'E02000378',
        '0BW' => 'E02000378',
        '0BX' => 'E02000378',
        '0BY' => 'E02000378',
        '0BZ' => 'E02000378',
        '0DA' => 'E02000378',
        '0DB' => 'E02000378',
        '0DD' => 'E02000378',
        '0DE' => 'E02000383',
        '0DF' => 'E02000378',
        '0DG' => 'E02000378',
        '0DH' => 'E02000378',
        '0DJ' => 'E02000378',
        '0DL' => 'E02000378',
        '0DN' => 'E02000378',
        '0DP' => 'E02000378',
        '0DQ' => 'E02000378',
        '0DR' => 'E02000381',
        '0DS' => 'E02000381',
        '0DT' => 'E02000381',
        '0DU' => 'E02000378',
        '0DW' => 'E02000383',
        '0DX' => 'E02000378',
        '0DY' => 'E02000381',
        '0DZ' => 'E02000381',
        '0EA' => 'E02000381',
        '0EB' => 'E02000378',
        '0ED' => 'E02000378',
        '0EE' => 'E02000378',
        '0EF' => 'E02000381',
        '0EG' => 'E02000383',
        '0EH' => 'E02000378',
        '0EJ' => 'E02000383',
        '0EL' => 'E02000381',
        '0EN' => 'E02000383',
        '0EP' => 'E02000381',
        '0EQ' => 'E02000381',
        '0ER' => 'E02000381',
        '0ES' => 'E02000381',
        '0ET' => 'E02000381',
        '0EU' => 'E02000381',
        '0EW' => 'E02000383',
        '0EX' => 'E02000381',
        '0EY' => 'E02000381',
        '0FA' => 'E02000383',
        '0FB' => 'E02000381',
        '0FD' => 'E02000383',
        '0FE' => 'E02000383',
        '0FF' => 'E02000381',
        '0FG' => 'E02000381',
        '0FH' => 'E02000383',
        '0FL' => 'E02000381',
        '0FN' => 'E02000383',
        '0FP' => 'E02000381',
        '0FQ' => 'E02000381',
        '0FR' => 'E02000383',
        '0FS' => 'E02000381',
        '0FT' => 'E02000381',
        '0FU' => 'E02000383',
        '0FX' => 'E02000383',
        '0FY' => 'E02000381',
        '0FZ' => 'E02000383',
        '0GA' => 'E02000383',
        '0GB' => 'E02000383',
        '0GD' => 'E02000383',
        '0GE' => 'E02000383',
        '0GF' => 'E02000381',
        '0GG' => 'E02000381',
        '0GH' => 'E02000381',
        '0GJ' => 'E02000381',
        '0GL' => 'E02000383',
        '0GN' => 'E02000381',
        '0GP' => 'E02000381',
        '0GQ' => 'E02000383',
        '0GR' => 'E02000383',
        '0GS' => 'E02000381',
        '0GT' => 'E02000381',
        '0GU' => 'E02000383',
        '0GW' => 'E02000383',
        '0GX' => 'E02000383',
        '0GY' => 'E02000381',
        '0GZ' => 'E02000383',
        '0HA' => 'E02000381',
        '0HB' => 'E02000381',
        '0HD' => 'E02000381',
        '0HE' => 'E02000381',
        '0HF' => 'E02000381',
        '0HG' => 'E02000383',
        '0HH' => 'E02000381',
        '0HJ' => 'E02000381',
        '0HL' => 'E02000381',
        '0HN' => 'E02000381',
        '0HP' => 'E02000381',
        '0HQ' => 'E02000381',
        '0HR' => 'E02000381',
        '0HS' => 'E02000381',
        '0HT' => 'E02000381',
        '0HU' => 'E02000381',
        '0HW' => 'E02000381',
        '0HX' => 'E02000381',
        '0HY' => 'E02000381',
        '0HZ' => 'E02000381',
        '0JA' => 'E02000381',
        '0JB' => 'E02000381',
        '0JD' => 'E02000381',
        '0JE' => 'E02000381',
        '0JF' => 'E02000383',
        '0JG' => 'E02000383',
        '0JH' => 'E02000381',
        '0JJ' => 'E02000381',
        '0JL' => 'E02000381',
        '0JN' => 'E02000383',
        '0JP' => 'E02000381',
        '0JQ' => 'E02000383',
        '0JR' => 'E02000381',
        '0JS' => 'E02000381',
        '0JT' => 'E02000381',
        '0JU' => 'E02000381',
        '0JW' => 'E02000381',
        '0JX' => 'E02000381',
        '0JY' => 'E02000381',
        '0JZ' => 'E02000381',
        '0LA' => 'E02000381',
        '0LB' => 'E02000381',
        '0LD' => 'E02000381',
        '0LE' => 'E02000381',
        '0LF' => 'E02000381',
        '0LG' => 'E02000381',
        '0LH' => 'E02000381',
        '0LJ' => 'E02000381',
        '0LL' => 'E02000381',
        '0LN' => 'E02000381',
        '0LP' => 'E02000381',
        '0LQ' => 'E02000381',
        '0LR' => 'E02000381',
        '0LS' => 'E02000381',
        '0LT' => 'E02000381',
        '0LU' => 'E02000381',
        '0LW' => 'E02000381',
        '0LX' => 'E02000381',
        '0LY' => 'E02000381',
        '0LZ' => 'E02000381',
        '0NA' => 'E02000383',
        '0NB' => 'E02000383',
        '0ND' => 'E02000383',
        '0NE' => 'E02000381',
        '0NF' => 'E02000381',
        '0NG' => 'E02000383',
        '0NH' => 'E02000381',
        '0NJ' => 'E02000381',
        '0NL' => 'E02000378',
        '0NN' => 'E02000383',
        '0NP' => 'E02000378',
        '0NQ' => 'E02000383',
        '0NR' => 'E02000381',
        '0NS' => 'E02000381',
        '0NT' => 'E02000381',
        '0NU' => 'E02000383',
        '0NW' => 'E02000381',
        '0NX' => 'E02000383',
        '0NY' => 'E02000383',
        '0NZ' => 'E02000381',
        '0PA' => 'E02000383',
        '0PB' => 'E02000383',
        '0PD' => 'E02000383',
        '0PE' => 'E02000383',
        '0PF' => 'E02000383',
        '0PG' => 'E02000381',
        '0PH' => 'E02000381',
        '0PJ' => 'E02000381',
        '0PL' => 'E02000381',
        '0PN' => 'E02000381',
        '0PP' => 'E02000381',
        '0PQ' => 'E02000381',
        '0PR' => 'E02000381',
        '0PS' => 'E02000381',
        '0PT' => 'E02000383',
        '0PU' => 'E02000381',
        '0PW' => 'E02000381',
        '0PX' => 'E02000381',
        '0PY' => 'E02000381',
        '0PZ' => 'E02000381',
        '0QA' => 'E02000381',
        '0QB' => 'E02000381',
        '0QD' => 'E02000381',
        '0QE' => 'E02000383',
        '0QF' => 'E02000383',
        '0QG' => 'E02000383',
        '0QH' => 'E02000383',
        '0QJ' => 'E02000383',
        '0QL' => 'E02000383',
        '0QN' => 'E02000383',
        '0QP' => 'E02000383',
        '0QQ' => 'E02000383',
        '0QR' => 'E02000383',
        '0QS' => 'E02000383',
        '0QT' => 'E02000383',
        '0QU' => 'E02000383',
        '0QW' => 'E02000383',
        '0QX' => 'E02000383',
        '0QY' => 'E02000383',
        '0QZ' => 'E02000383',
        '0RA' => 'E02000383',
        '0RB' => 'E02000383',
        '0RD' => 'E02000383',
        '0RE' => 'E02000383',
        '0RF' => 'E02000383',
        '0RG' => 'E02000383',
        '0RH' => 'E02000383',
        '0RJ' => 'E02000383',
        '0RL' => 'E02000383',
        '0RN' => 'E02000383',
        '0RP' => 'E02000383',
        '0RQ' => 'E02000383',
        '0RR' => 'E02000383',
        '0RS' => 'E02000383',
        '0RT' => 'E02000383',
        '0RU' => 'E02000383',
        '0RW' => 'E02000383',
        '0RX' => 'E02000383',
        '0RY' => 'E02000383',
        '0RZ' => 'E02000383',
        '0SA' => 'E02000383',
        '0SB' => 'E02000383',
        '0SD' => 'E02000383',
        '0SE' => 'E02000383',
        '0SF' => 'E02000383',
        '0SG' => 'E02000383',
        '0SH' => 'E02000383',
        '0SJ' => 'E02000383',
        '0SL' => 'E02000383',
        '0SN' => 'E02000383',
        '0SP' => 'E02000383',
        '0SQ' => 'E02000383',
        '0SR' => 'E02000383',
        '0SS' => 'E02000383',
        '0ST' => 'E02000383',
        '0SU' => 'E02000383',
        '0SW' => 'E02000383',
        '0SX' => 'E02000383',
        '0SY' => 'E02000383',
        '0SZ' => 'E02000383',
        '0TA' => 'E02000383',
        '0TB' => 'E02000383',
        '0TD' => 'E02000383',
        '0TE' => 'E02000383',
        '0TF' => 'E02000383',
        '0TG' => 'E02000383',
        '0TH' => 'E02000383',
        '0TJ' => 'E02000383',
        '0TL' => 'E02000383',
        '0TN' => 'E02000383',
        '0TP' => 'E02000383',
        '0TQ' => 'E02000383',
        '0TR' => 'E02000383',
        '0TS' => 'E02000383',
        '0TT' => 'E02000383',
        '0TU' => 'E02000383',
        '0TW' => 'E02000383',
        '0TX' => 'E02000383',
        '0TY' => 'E02000383',
        '0TZ' => 'E02000383',
        '0UA' => 'E02000381',
        '0UB' => 'E02000383',
        '0UD' => 'E02000383',
        '0UE' => 'E02000383',
        '0UF' => 'E02000383',
        '0UG' => 'E02000381',
        '0UH' => 'E02000383',
        '0UJ' => 'E02000383',
        '0UL' => 'E02000383',
        '0UN' => 'E02000383',
        '0UP' => 'E02000383',
        '0UQ' => 'E02000381',
        '0UR' => 'E02000383',
        '0US' => 'E02000383',
        '0UT' => 'E02000383',
        '0UU' => 'E02000383',
        '0UW' => 'E02000383',
        '0UX' => 'E02000383',
        '0UY' => 'E02000383',
        '0UZ' => 'E02000383',
        '0WA' => 'E02000383',
        '0WB' => 'E02000383',
        '0WD' => 'E02000383',
        '0WE' => 'E02000383',
        '0WF' => 'E02000383',
        '0WG' => 'E02000383',
        '0WH' => 'E02000383',
        '0WJ' => 'E02000383',
        '0WL' => 'E02000383',
        '0WN' => 'E02000383',
        '0WP' => 'E02000383',
        '0WQ' => 'E02000383',
        '0WR' => 'E02000383',
        '0WS' => 'E02000383',
        '0WT' => 'E02000383',
        '0WU' => 'E02000383',
        '0WW' => 'E02000383',
        '0WX' => 'E02000383',
        '0WY' => 'E02000383',
        '0WZ' => 'E02000383',
        '0XA' => 'E02000383',
        '0XB' => 'E02000383',
        '0XD' => 'E02000383',
        '0XE' => 'E02000383',
        '0XF' => 'E02000383',
        '0XG' => 'E02000383',
        '0XH' => 'E02000383',
        '0XJ' => 'E02000383',
        '0XL' => 'E02000383',
        '0XN' => 'E02000383',
        '0XP' => 'E02000383',
        '0XQ' => 'E02000383',
        '0XR' => 'E02000383',
        '0XS' => 'E02000383',
        '0XT' => 'E02000383',
        '0XU' => 'E02000383',
        '0XW' => 'E02000383',
        '0XX' => 'E02000383',
        '0XY' => 'E02000383',
        '0XZ' => 'E02000383',
        '0YA' => 'E02000383',
        '0YB' => 'E02000383',
        '0YD' => 'E02000383',
        '0YE' => 'E02000383',
        '0YF' => 'E02000383',
        '0YG' => 'E02000383',
        '0YH' => 'E02000383',
        '0YJ' => 'E02000383',
        '0YL' => 'E02000383',
        '0YN' => 'E02000383',
        '0YP' => 'E02000383',
        '0YQ' => 'E02000383',
        '0YR' => 'E02000383',
        '0YS' => 'E02000383',
        '0YT' => 'E02000383',
        '0YU' => 'E02000383',
        '0YW' => 'E02000383',
        '0ZA' => 'E02000383',
        '0ZB' => 'E02000383',
        '0ZD' => 'E02000383',
        '0ZE' => 'E02000383',
        '0ZF' => 'E02000383',
        '0ZG' => 'E02000383',
        '0ZH' => 'E02000383',
        '0ZJ' => 'E02000383',
        '0ZL' => 'E02000383',
        '0ZN' => 'E02000383',
        '0ZP' => 'E02000383',
        '0ZQ' => 'E02000383',
        '0ZR' => 'E02000383',
        '0ZS' => 'E02000383',
        '0ZT' => 'E02000383',
        '0ZU' => 'E02000383',
        '0ZW' => 'E02000383',
        '0ZX' => 'E02000383',
        '0ZY' => 'E02000383',
        '0ZZ' => 'E02000381',
        '4AA' => 'E02000383',
        '4AB' => 'E02000383',
        '4AD' => 'E02000383',
        '4AE' => 'E02000383',
        '4AF' => 'E02000383',
        '4AG' => 'E02000383',
        '4AL' => 'E02000383',
        '4AP' => 'E02000383',
        '4AS' => 'E02000383',
        '4AU' => 'E02000383',
        '4AY' => 'E02000383',
        '4AZ' => 'E02000383',
        '4BB' => 'E02000383',
        '4BD' => 'E02000383',
        '4BE' => 'E02000383',
        '4BL' => 'E02000383',
        '4BN' => 'E02000383',
        '4BP' => 'E02000383',
        '4BQ' => 'E02000383',
        '4BR' => 'E02000383',
        '4BS' => 'E02000383',
        '4BT' => 'E02000383',
        '4BU' => 'E02000383',
        '4BW' => 'E02000383',
        '4BX' => 'E02000383',
        '4BY' => 'E02000383',
        '4BZ' => 'E02000383',
        '4DA' => 'E02000383',
        '4DB' => 'E02000383',
        '4DD' => 'E02000383',
        '4DE' => 'E02000383',
        '4DF' => 'E02000383',
        '4DG' => 'E02000383',
        '4DH' => 'E02000383',
        '4DJ' => 'E02000383',
        '4DL' => 'E02000383',
        '4DN' => 'E02000383',
        '4DP' => 'E02000383',
        '4DQ' => 'E02000383',
        '4DR' => 'E02000383',
        '4DS' => 'E02000383',
        '4DT' => 'E02000383',
        '4DU' => 'E02000383',
        '4DW' => 'E02000383',
        '4DX' => 'E02000383',
        '4DY' => 'E02000383',
        '4DZ' => 'E02000383',
        '4EA' => 'E02000383',
        '4EB' => 'E02000383',
        '4ED' => 'E02000383',
        '4EE' => 'E02000383',
        '4EF' => 'E02000383',
        '4EG' => 'E02000383',
        '4EH' => 'E02000383',
        '4EJ' => 'E02000383',
        '4EL' => 'E02000383',
        '4EN' => 'E02000383',
        '4EP' => 'E02000383',
        '4EQ' => 'E02000383',
        '4ER' => 'E02000383',
        '4ES' => 'E02000383',
        '4ET' => 'E02000383',
        '4EU' => 'E02000383',
        '4EW' => 'E02000383',
        '4EX' => 'E02000383',
        '4EY' => 'E02000383',
        '4EZ' => 'E02000383',
        '4FA' => 'E02000383',
        '4FB' => 'E02000383',
        '4FD' => 'E02000383',
        '4FE' => 'E02000383',
        '4FF' => 'E02000383',
        '4FG' => 'E02000383',
        '4FH' => 'E02000383',
        '4FJ' => 'E02000383',
        '4FL' => 'E02000383',
        '4FN' => 'E02000383',
        '4FP' => 'E02000383',
        '4FQ' => 'E02000383',
        '4FR' => 'E02000383',
        '4FS' => 'E02000383',
        '4FT' => 'E02000383',
        '4FU' => 'E02000383',
        '4FW' => 'E02000383',
        '4FX' => 'E02000383',
        '4FY' => 'E02000383',
        '4FZ' => 'E02000383',
        '4GA' => 'E02000383',
        '4GB' => 'E02000383',
        '4GD' => 'E02000383',
        '4GE' => 'E02000383',
        '4GF' => 'E02000383',
        '4GH' => 'E02000383',
        '4GJ' => 'E02000383',
        '4GL' => 'E02000383',
        '4GN' => 'E02000383',
        '4GP' => 'E02000383',
        '4GQ' => 'E02000383',
        '4GR' => 'E02000383',
        '4GS' => 'E02000383',
        '4GU' => 'E02000383',
        '4GW' => 'E02000383',
        '4GX' => 'E02000383',
        '8AA' => 'E02000585',
        '8AB' => 'E02000585',
        '8AD' => 'E02000585',
        '8AE' => 'E02000585',
        '8AF' => 'E02000585',
        '8AG' => 'E02000383',
        '8AH' => 'E02000585',
        '8AJ' => 'E02000585',
        '8AL' => 'E02000585',
        '8AN' => 'E02000585',
        '8AP' => 'E02000585',
        '8AQ' => 'E02000383',
        '8AR' => 'E02000383',
        '8AS' => 'E02000585',
        '8AT' => 'E02000585',
        '8AW' => 'E02000383',
        '8AY' => 'E02000383',
        '8AZ' => 'E02000591',
        '8BA' => 'E02000585',
        '8BB' => 'E02000585',
        '8BD' => 'E02000585',
        '8BE' => 'E02000585',
        '8BF' => 'E02000383',
        '8BG' => 'E02000585',
        '8BH' => 'E02000585',
        '8BJ' => 'E02000585',
        '8BL' => 'E02000383',
        '8BN' => 'E02000585',
        '8BP' => 'E02000585',
        '8BQ' => 'E02000585',
        '8BS' => 'E02000383',
        '8BT' => 'E02000585',
        '8BU' => 'E02000591',
        '8BW' => 'E02000591',
        '8BX' => 'E02000383',
        '8BY' => 'E02000383',
        '8BZ' => 'E02000585',
        '8DA' => 'E02000585',
        '8DB' => 'E02000585',
        '8DD' => 'E02000585',
        '8DE' => 'E02000585',
        '8DF' => 'E02000585',
        '8DG' => 'E02000383',
        '8DH' => 'E02000585',
        '8DJ' => 'E02000585',
        '8DL' => 'E02000585',
        '8DN' => 'E02000585',
        '8DP' => 'E02000585',
        '8DQ' => 'E02000585',
        '8DR' => 'E02000585',
        '8DS' => 'E02000585',
        '8DT' => 'E02000585',
        '8DU' => 'E02000585',
        '8DW' => 'E02000585',
        '8DX' => 'E02000585',
        '8DY' => 'E02000585',
        '8DZ' => 'E02000585',
        '8EA' => 'E02000585',
        '8EB' => 'E02000585',
        '8ED' => 'E02000585',
        '8EE' => 'E02000585',
        '8EF' => 'E02000585',
        '8EG' => 'E02000585',
        '8EH' => 'E02000585',
        '8EJ' => 'E02000585',
        '8EL' => 'E02000585',
        '8EN' => 'E02000585',
        '8EP' => 'E02000585',
        '8EQ' => 'E02000585',
        '8ER' => 'E02000585',
        '8ES' => 'E02000585',
        '8ET' => 'E02000383',
        '8EU' => 'E02000585',
        '8EW' => 'E02000383',
        '8EX' => 'E02000585',
        '8EY' => 'E02000585',
        '8EZ' => 'E02000585',
        '8FA' => 'E02000383',
        '8FB' => 'E02000585',
        '8FD' => 'E02000585',
        '8FE' => 'E02000591',
        '8FF' => 'E02000383',
        '8FG' => 'E02000585',
        '8FH' => 'E02000383',
        '8FJ' => 'E02000585',
        '8FL' => 'E02000383',
        '8FN' => 'E02000591',
        '8FP' => 'E02000383',
        '8FQ' => 'E02000585',
        '8FR' => 'E02000585',
        '8FS' => 'E02000383',
        '8FT' => 'E02000383',
        '8FU' => 'E02000383',
        '8FW' => 'E02000383',
        '8FX' => 'E02000383',
        '8FY' => 'E02000383',
        '8FZ' => 'E02000585',
        '8GA' => 'E02000383',
        '8GB' => 'E02000383',
        '8GD' => 'E02000383',
        '8GE' => 'E02000585',
        '8GF' => 'E02000585',
        '8GG' => 'E02000383',
        '8GH' => 'E02000383',
        '8GJ' => 'E02000383',
        '8GL' => 'E02000383',
        '8GN' => 'E02000383',
        '8GP' => 'E02000585',
        '8GQ' => 'E02000383',
        '8GR' => 'E02000383',
        '8GS' => 'E02000585',
        '8GT' => 'E02000383',
        '8GU' => 'E02000383',
        '8GW' => 'E02000383',
        '8GX' => 'E02000585',
        '8GY' => 'E02000383',
        '8GZ' => 'E02000383',
        '8HA' => 'E02000585',
        '8HB' => 'E02000585',
        '8HD' => 'E02000585',
        '8HE' => 'E02000383',
        '8HF' => 'E02000585',
        '8HG' => 'E02000383',
        '8HH' => 'E02000585',
        '8HJ' => 'E02000585',
        '8HL' => 'E02000585',
        '8HN' => 'E02000585',
        '8HP' => 'E02000585',
        '8HQ' => 'E02000383',
        '8HR' => 'E02000585',
        '8HS' => 'E02000585',
        '8HT' => 'E02000585',
        '8HU' => 'E02000585',
        '8HW' => 'E02000585',
        '8HX' => 'E02000585',
        '8HY' => 'E02000585',
        '8HZ' => 'E02000585',
        '8JA' => 'E02000585',
        '8JB' => 'E02000585',
        '8JD' => 'E02000585',
        '8JE' => 'E02000585',
        '8JF' => 'E02000585',
        '8JG' => 'E02000585',
        '8JH' => 'E02000585',
        '8JJ' => 'E02000585',
        '8JL' => 'E02000585',
        '8JN' => 'E02000383',
        '8JP' => 'E02000585',
        '8JQ' => 'E02000383',
        '8JR' => 'E02000585',
        '8JS' => 'E02000585',
        '8JT' => 'E02000585',
        '8JU' => 'E02000585',
        '8JW' => 'E02000383',
        '8JX' => 'E02000585',
        '8JY' => 'E02000585',
        '8JZ' => 'E02000585',
        '8LA' => 'E02000585',
        '8LB' => 'E02000585',
        '8LD' => 'E02000585',
        '8LE' => 'E02000383',
        '8LF' => 'E02000383',
        '8LG' => 'E02000585',
        '8LH' => 'E02000585',
        '8LJ' => 'E02000585',
        '8LL' => 'E02000585',
        '8LN' => 'E02000585',
        '8LP' => 'E02000585',
        '8LQ' => 'E02000585',
        '8LR' => 'E02000585',
        '8LS' => 'E02000585',
        '8LT' => 'E02000585',
        '8LU' => 'E02000383',
        '8LW' => 'E02000585',
        '8LX' => 'E02000585',
        '8LY' => 'E02000585',
        '8LZ' => 'E02000585',
        '8NA' => 'E02000585',
        '8NB' => 'E02000585',
        '8ND' => 'E02000585',
        '8NE' => 'E02000585',
        '8NF' => 'E02000585',
        '8NG' => 'E02000383',
        '8NH' => 'E02000585',
        '8NJ' => 'E02000591',
        '8NL' => 'E02000585',
        '8NN' => 'E02000585',
        '8NP' => 'E02000383',
        '8NR' => 'E02000383',
        '8NS' => 'E02000585',
        '8NT' => 'E02000383',
        '8NU' => 'E02000585',
        '8NW' => 'E02000585',
        '8NX' => 'E02000585',
        '8NY' => 'E02000585',
        '8NZ' => 'E02000585',
        '8PA' => 'E02000383',
        '8PB' => 'E02000591',
        '8PD' => 'E02000585',
        '8PE' => 'E02000383',
        '8PF' => 'E02000383',
        '8PG' => 'E02000383',
        '8PH' => 'E02000591',
        '8PJ' => 'E02000383',
        '8PL' => 'E02000587',
        '8PN' => 'E02000383',
        '8PP' => 'E02000587',
        '8PQ' => 'E02000383',
        '8PR' => 'E02000587',
        '8PS' => 'E02000591',
        '8PT' => 'E02000591',
        '8PU' => 'E02000591',
        '8PW' => 'E02000383',
        '8PX' => 'E02000591',
        '8PY' => 'E02000383',
        '8PZ' => 'E02000591',
        '8QA' => 'E02000591',
        '8QB' => 'E02000591',
        '8QD' => 'E02000591',
        '8QE' => 'E02000591',
        '8QF' => 'E02000383',
        '8QG' => 'E02000383',
        '8QH' => 'E02000383',
        '8QJ' => 'E02000591',
        '8QL' => 'E02000591',
        '8QN' => 'E02000383',
        '8QP' => 'E02000383',
        '8QQ' => 'E02000383',
        '8QR' => 'E02000383',
        '8QS' => 'E02000591',
        '8QT' => 'E02000591',
        '8QU' => 'E02000383',
        '8QW' => 'E02000383',
        '8QX' => 'E02000591',
        '8QY' => 'E02000591',
        '8QZ' => 'E02000591',
        '8RA' => 'E02000591',
        '8RB' => 'E02000591',
        '8RD' => 'E02000591',
        '8RE' => 'E02000591',
        '8RF' => 'E02000383',
        '8RG' => 'E02000591',
        '8RH' => 'E02000383',
        '8RJ' => 'E02000383',
        '8RL' => 'E02000383',
        '8RN' => 'E02000383',
        '8RP' => 'E02000383',
        '8RQ' => 'E02000591',
        '8RR' => 'E02000383',
        '8RS' => 'E02000383',
        '8RT' => 'E02000383',
        '8RU' => 'E02000383',
        '8RW' => 'E02000383',
        '8RX' => 'E02000591',
        '8RY' => 'E02000383',
        '8RZ' => 'E02000383',
        '8SA' => 'E02000383',
        '8SB' => 'E02000383',
        '8SD' => 'E02000591',
        '8SE' => 'E02000383',
        '8SF' => 'E02000383',
        '8SG' => 'E02000383',
        '8SH' => 'E02000383',
        '8SJ' => 'E02000383',
        '8SL' => 'E02000383',
        '8SN' => 'E02000383',
        '8SP' => 'E02000383',
        '8SQ' => 'E02000383',
        '8SR' => 'E02000383',
        '8SS' => 'E02000383',
        '8ST' => 'E02000383',
        '8SU' => 'E02000383',
        '8SW' => 'E02000383',
        '8SX' => 'E02000383',
        '8SY' => 'E02000383',
        '8SZ' => 'E02000383',
        '8TA' => 'E02000383',
        '8TB' => 'E02000383',
        '8TD' => 'E02000383',
        '8TE' => 'E02000383',
        '8TF' => 'E02000383',
        '8TG' => 'E02000383',
        '8TH' => 'E02000383',
        '8TJ' => 'E02000383',
        '8TL' => 'E02000383',
        '8TN' => 'E02000383',
        '8TP' => 'E02000383',
        '8TQ' => 'E02000383',
        '8TR' => 'E02000591',
        '8TS' => 'E02000383',
        '8TT' => 'E02000591',
        '8TU' => 'E02000383',
        '8TW' => 'E02000591',
        '8TX' => 'E02000591',
        '8TY' => 'E02000383',
        '8TZ' => 'E02000383',
        '8UA' => 'E02000591',
        '8UB' => 'E02000591',
        '8UD' => 'E02000383',
        '8UE' => 'E02000591',
        '8UF' => 'E02000591',
        '8UG' => 'E02000383',
        '8UH' => 'E02000383',
        '8UJ' => 'E02000383',
        '8UL' => 'E02000383',
        '8UN' => 'E02000591',
        '8UP' => 'E02000383',
        '8UQ' => 'E02000383',
        '8UR' => 'E02000591',
        '8US' => 'E02000383',
        '8UT' => 'E02000383',
        '8UU' => 'E02000383',
        '8UW' => 'E02000383',
        '8UX' => 'E02000383',
        '8UY' => 'E02000383',
        '8UZ' => 'E02000383',
        '8WA' => 'E02000383',
        '8WB' => 'E02000383',
        '8WD' => 'E02000383',
        '8WE' => 'E02000383',
        '8WF' => 'E02000383',
        '8WG' => 'E02000383',
        '8WH' => 'E02000383',
        '8WJ' => 'E02000383',
        '8WL' => 'E02000383',
        '8WN' => 'E02000383',
        '8WP' => 'E02000383',
        '8WQ' => 'E02000383',
        '8WR' => 'E02000383',
        '8WS' => 'E02000383',
        '8WT' => 'E02000383',
        '8WU' => 'E02000383',
        '8WW' => 'E02000383',
        '8WX' => 'E02000383',
        '8WY' => 'E02000383',
        '8WZ' => 'E02000383',
        '8XA' => 'E02000383',
        '8XB' => 'E02000383',
        '8XD' => 'E02000383',
        '8XE' => 'E02000383',
        '8XF' => 'E02000383',
        '8XG' => 'E02000383',
        '8XH' => 'E02000383',
        '8XJ' => 'E02000383',
        '8XL' => 'E02000383',
        '8XN' => 'E02000383',
        '8XP' => 'E02000383',
        '8XQ' => 'E02000383',
        '8XR' => 'E02000383',
        '8XS' => 'E02000383',
        '8XT' => 'E02000383',
        '8XU' => 'E02000383',
        '8XW' => 'E02000383',
        '8XX' => 'E02000383',
        '8XY' => 'E02000383',
        '8XZ' => 'E02000383',
        '8YA' => 'E02000383',
        '8YB' => 'E02000383',
        '8YD' => 'E02000383',
        '8YE' => 'E02000383',
        '8YF' => 'E02000383',
        '8YG' => 'E02000383',
        '8YH' => 'E02000585',
        '8YJ' => 'E02000381',
        '8YL' => 'E02000585',
        '8YN' => 'E02000383',
        '8YP' => 'E02000383',
        '8YQ' => 'E02000383',
        '8YR' => 'E02000383',
        '8YS' => 'E02000383',
        '8YT' => 'E02000383',
        '8YU' => 'E02000383',
        '8YW' => 'E02000383',
        '8YX' => 'E02000383',
        '8YY' => 'E02000383',
        '8YZ' => 'E02000383',
        '8ZA' => 'E02000383',
        '8ZB' => 'E02000383',
        '8ZD' => 'E02000383',
        '8ZE' => 'E02000383',
        '8ZF' => 'E02000383',
        '8ZG' => 'E02000383',
        '8ZH' => 'E02000383',
        '8ZJ' => 'E02000383',
        '8ZL' => 'E02000383',
        '8ZN' => 'E02000383',
        '8ZP' => 'E02000383',
        '8ZQ' => 'E02000383',
        '8ZR' => 'E02000383',
        '8ZS' => 'E02000383',
        '8ZT' => 'E02000383',
        '8ZU' => 'E02000383',
        '8ZW' => 'E02000383',
        '8ZX' => 'E02000383',
        '8ZY' => 'E02000383',
        '8ZZ' => 'E02000585',
        '9AA' => 'E02000383',
        '9AB' => 'E02000383',
        '9AD' => 'E02000383',
        '9AE' => 'E02000383',
        '9AF' => 'E02000383',
        '9AG' => 'E02000383',
        '9AH' => 'E02000383',
        '9AL' => 'E02000383',
        '9AP' => 'E02000383',
        '9AR' => 'E02000383',
        '9AS' => 'E02000383',
        '9AT' => 'E02000383',
        '9AU' => 'E02000383',
        '9AX' => 'E02000383',
        '9AY' => 'E02000385',
        '9AZ' => 'E02000383',
        '9BA' => 'E02000383',
        '9BB' => 'E02000383',
        '9BE' => 'E02000383',
        '9BF' => 'E02000383',
        '9BG' => 'E02000383',
        '9BH' => 'E02000383',
        '9BJ' => 'E02000383',
        '9BL' => 'E02000383',
        '9BN' => 'E02000383',
        '9BP' => 'E02000383',
        '9BQ' => 'E02000383',
        '9BS' => 'E02000383',
        '9BT' => 'E02000383',
        '9BU' => 'E02000383',
        '9BW' => 'E02000383',
        '9BX' => 'E02000383',
        '9BY' => 'E02000383',
        '9BZ' => 'E02000383',
        '9DA' => 'E02000385',
        '9DB' => 'E02000385',
        '9DD' => 'E02000385',
        '9DE' => 'E02000385',
        '9DF' => 'E02000385',
        '9DG' => 'E02000385',
        '9DH' => 'E02000383',
        '9DJ' => 'E02000385',
        '9DL' => 'E02000383',
        '9DN' => 'E02000383',
        '9DP' => 'E02000385',
        '9DQ' => 'E02000385',
        '9DR' => 'E02000385',
        '9DS' => 'E02000385',
        '9DT' => 'E02000385',
        '9DU' => 'E02000385',
        '9DW' => 'E02000383',
        '9DX' => 'E02000385',
        '9DY' => 'E02000385',
        '9DZ' => 'E02000385',
        '9EA' => 'E02000385',
        '9EB' => 'E02000385',
        '9ED' => 'E02000385',
        '9EE' => 'E02000385',
        '9EF' => 'E02000385',
        '9EG' => 'E02000385',
        '9EH' => 'E02000385',
        '9EJ' => 'E02000383',
        '9EL' => 'E02000383',
        '9EN' => 'E02000387',
        '9EP' => 'E02000383',
        '9EQ' => 'E02000385',
        '9ER' => 'E02000383',
        '9ES' => 'E02000385',
        '9ET' => 'E02000386',
        '9EU' => 'E02000385',
        '9EW' => 'E02000385',
        '9EX' => 'E02000385',
        '9EY' => 'E02000385',
        '9EZ' => 'E02000383',
        '9FA' => 'E02000383',
        '9FB' => 'E02000386',
        '9FD' => 'E02000383',
        '9FE' => 'E02000383',
        '9FF' => 'E02000383',
        '9FG' => 'E02000386',
        '9FH' => 'E02000383',
        '9FJ' => 'E02000386',
        '9FL' => 'E02000386',
        '9FN' => 'E02000386',
        '9FP' => 'E02000386',
        '9FQ' => 'E02000386',
        '9FR' => 'E02000386',
        '9FS' => 'E02000383',
        '9FT' => 'E02000386',
        '9FU' => 'E02000383',
        '9FW' => 'E02000386',
        '9FX' => 'E02000383',
        '9GA' => 'E02000386',
        '9GB' => 'E02000386',
        '9GD' => 'E02000383',
        '9GE' => 'E02000386',
        '9GF' => 'E02000383',
        '9GG' => 'E02000383',
        '9GH' => 'E02000386',
        '9GJ' => 'E02000386',
        '9GL' => 'E02000383',
        '9GN' => 'E02000383',
        '9GP' => 'E02000383',
        '9GQ' => 'E02000386',
        '9GR' => 'E02000383',
        '9GS' => 'E02000383',
        '9GT' => 'E02000386',
        '9GU' => 'E02000383',
        '9GW' => 'E02000386',
        '9GX' => 'E02000383',
        '9GY' => 'E02000386',
        '9GZ' => 'E02000383',
        '9HA' => 'E02000385',
        '9HB' => 'E02000385',
        '9HD' => 'E02000385',
        '9HE' => 'E02000385',
        '9HF' => 'E02000385',
        '9HG' => 'E02000386',
        '9HH' => 'E02000383',
        '9HJ' => 'E02000385',
        '9HL' => 'E02000383',
        '9HN' => 'E02000383',
        '9HP' => 'E02000385',
        '9HQ' => 'E02000385',
        '9HR' => 'E02000385',
        '9HS' => 'E02000385',
        '9HT' => 'E02000385',
        '9HU' => 'E02000385',
        '9HW' => 'E02000385',
        '9HX' => 'E02000383',
        '9HY' => 'E02000385',
        '9HZ' => 'E02000385',
        '9JA' => 'E02000385',
        '9JB' => 'E02000386',
        '9JD' => 'E02000385',
        '9JE' => 'E02000386',
        '9JF' => 'E02000383',
        '9JG' => 'E02000386',
        '9JH' => 'E02000386',
        '9JJ' => 'E02000386',
        '9JL' => 'E02000386',
        '9JN' => 'E02000386',
        '9JP' => 'E02000385',
        '9JQ' => 'E02000386',
        '9JR' => 'E02000386',
        '9JS' => 'E02000386',
        '9JT' => 'E02000386',
        '9JU' => 'E02000386',
        '9JW' => 'E02000385',
        '9JX' => 'E02000386',
        '9JY' => 'E02000386',
        '9JZ' => 'E02000386',
        '9LA' => 'E02000386',
        '9LB' => 'E02000386',
        '9LD' => 'E02000386',
        '9LE' => 'E02000386',
        '9LF' => 'E02000386',
        '9LG' => 'E02000386',
        '9LH' => 'E02000386',
        '9LJ' => 'E02000386',
        '9LL' => 'E02000386',
        '9LN' => 'E02000386',
        '9LP' => 'E02000386',
        '9LQ' => 'E02000383',
        '9LR' => 'E02000386',
        '9LS' => 'E02000385',
        '9LT' => 'E02000385',
        '9LU' => 'E02000385',
        '9LW' => 'E02000386',
        '9LX' => 'E02000385',
        '9LY' => 'E02000386',
        '9LZ' => 'E02000386',
        '9NA' => 'E02000385',
        '9NB' => 'E02000386',
        '9ND' => 'E02000386',
        '9NE' => 'E02000386',
        '9NF' => 'E02000386',
        '9NG' => 'E02000386',
        '9NH' => 'E02000383',
        '9NJ' => 'E02000386',
        '9NL' => 'E02000385',
        '9NN' => 'E02000386',
        '9NP' => 'E02000385',
        '9NQ' => 'E02000386',
        '9NR' => 'E02000386',
        '9NS' => 'E02000386',
        '9NT' => 'E02000383',
        '9NU' => 'E02000386',
        '9NW' => 'E02000386',
        '9NX' => 'E02000386',
        '9NY' => 'E02000383',
        '9NZ' => 'E02000383',
        '9PA' => 'E02000386',
        '9PB' => 'E02000386',
        '9PD' => 'E02000383',
        '9PE' => 'E02000386',
        '9PF' => 'E02000385',
        '9PG' => 'E02000383',
        '9PH' => 'E02000383',
        '9PJ' => 'E02000386',
        '9PL' => 'E02000386',
        '9PN' => 'E02000386',
        '9PP' => 'E02000386',
        '9PQ' => 'E02000383',
        '9PR' => 'E02000386',
        '9PS' => 'E02000386',
        '9PT' => 'E02000386',
        '9PU' => 'E02000386',
        '9PW' => 'E02000386',
        '9PX' => 'E02000383',
        '9PY' => 'E02000386',
        '9PZ' => 'E02000386',
        '9QA' => 'E02000386',
        '9QB' => 'E02000383',
        '9QD' => 'E02000383',
        '9QE' => 'E02000386',
        '9QF' => 'E02000383',
        '9QG' => 'E02000386',
        '9QH' => 'E02000386',
        '9QJ' => 'E02000386',
        '9QL' => 'E02000386',
        '9QN' => 'E02000386',
        '9QP' => 'E02000386',
        '9QQ' => 'E02000383',
        '9QR' => 'E02000386',
        '9QS' => 'E02000386',
        '9QT' => 'E02000386',
        '9QU' => 'E02000386',
        '9QW' => 'E02000383',
        '9QX' => 'E02000386',
        '9QY' => 'E02000383',
        '9QZ' => 'E02000383',
        '9RA' => 'E02000386',
        '9RB' => 'E02000386',
        '9RD' => 'E02000385',
        '9RE' => 'E02000385',
        '9RF' => 'E02000385',
        '9RG' => 'E02000385',
        '9RH' => 'E02000385',
        '9RJ' => 'E02000385',
        '9RL' => 'E02000385',
        '9RN' => 'E02000385',
        '9RP' => 'E02000385',
        '9RQ' => 'E02000385',
        '9RR' => 'E02000385',
        '9RS' => 'E02000385',
        '9RT' => 'E02000387',
        '9RU' => 'E02000385',
        '9RW' => 'E02000385',
        '9RX' => 'E02000386',
        '9RY' => 'E02000386',
        '9RZ' => 'E02000383',
        '9SA' => 'E02000386',
        '9SB' => 'E02000386',
        '9SD' => 'E02000385',
        '9SE' => 'E02000383',
        '9SF' => 'E02000385',
        '9SG' => 'E02000385',
        '9SH' => 'E02000385',
        '9SJ' => 'E02000385',
        '9SL' => 'E02000385',
        '9SN' => 'E02000385',
        '9SP' => 'E02000385',
        '9SQ' => 'E02000385',
        '9SR' => 'E02000386',
        '9SS' => 'E02000385',
        '9ST' => 'E02000386',
        '9SU' => 'E02000386',
        '9SW' => 'E02000385',
        '9SX' => 'E02000386',
        '9SY' => 'E02000386',
        '9SZ' => 'E02000383',
        '9TA' => 'E02000386',
        '9TB' => 'E02000385',
        '9TD' => 'E02000385',
        '9TE' => 'E02000385',
        '9TF' => 'E02000385',
        '9TG' => 'E02000385',
        '9TH' => 'E02000385',
        '9TJ' => 'E02000385',
        '9TL' => 'E02000385',
        '9TN' => 'E02000385',
        '9TP' => 'E02000385',
        '9TQ' => 'E02000385',
        '9TR' => 'E02000385',
        '9TS' => 'E02000385',
        '9TT' => 'E02000383',
        '9TU' => 'E02000383',
        '9TW' => 'E02000385',
        '9TX' => 'E02000383',
        '9TY' => 'E02000383',
        '9TZ' => 'E02000383',
        '9UA' => 'E02000386',
        '9UB' => 'E02000386',
        '9UD' => 'E02000386',
        '9UE' => 'E02000386',
        '9UF' => 'E02000386',
        '9UG' => 'E02000386',
        '9UH' => 'E02000386',
        '9UJ' => 'E02000383',
        '9UL' => 'E02000383',
        '9UN' => 'E02000383',
        '9UP' => 'E02000383',
        '9UQ' => 'E02000386',
        '9UR' => 'E02000383',
        '9US' => 'E02000383',
        '9UT' => 'E02000386',
        '9UU' => 'E02000386',
        '9UW' => 'E02000383',
        '9UX' => 'E02000386',
        '9UY' => 'E02000386',
        '9UZ' => 'E02000386',
        '9WA' => 'E02000383',
        '9WB' => 'E02000383',
        '9WD' => 'E02000383',
        '9WE' => 'E02000383',
        '9WF' => 'E02000383',
        '9WG' => 'E02000383',
        '9WH' => 'E02000383',
        '9WJ' => 'E02000383',
        '9WL' => 'E02000383',
        '9WN' => 'E02000383',
        '9WP' => 'E02000383',
        '9WQ' => 'E02000383',
        '9WR' => 'E02000383',
        '9WS' => 'E02000383',
        '9WT' => 'E02000383',
        '9WU' => 'E02000383',
        '9WW' => 'E02000383',
        '9WX' => 'E02000383',
        '9WY' => 'E02000383',
        '9WZ' => 'E02000383',
        '9XA' => 'E02000386',
        '9XB' => 'E02000386',
        '9XD' => 'E02000386',
        '9XE' => 'E02000386',
        '9XF' => 'E02000386',
        '9XG' => 'E02000386',
        '9XH' => 'E02000386',
        '9XJ' => 'E02000386',
        '9XL' => 'E02000386',
        '9XN' => 'E02000386',
        '9XP' => 'E02000386',
        '9XQ' => 'E02000386',
        '9XR' => 'E02000386',
        '9XS' => 'E02000386',
        '9XT' => 'E02000386',
        '9XU' => 'E02000386',
        '9XW' => 'E02000386',
        '9XX' => 'E02000386',
        '9XY' => 'E02000383',
        '9XZ' => 'E02000383',
        '9YA' => 'E02000383',
        '9YB' => 'E02000383',
        '9YD' => 'E02000383',
        '9YE' => 'E02000383',
        '9YF' => 'E02000383',
        '9YG' => 'E02000383',
        '9YH' => 'E02000383',
        '9YJ' => 'E02000383',
        '9YL' => 'E02000383',
        '9YN' => 'E02000383',
        '9YP' => 'E02000383',
        '9YQ' => 'E02000383',
        '9YR' => 'E02000383',
        '9YS' => 'E02000383',
        '9YT' => 'E02000383',
        '9YU' => 'E02000383',
        '9YW' => 'E02000383',
        '9YX' => 'E02000383',
        '9YY' => 'E02000383',
        '9YZ' => 'E02000383',
        '9ZA' => 'E02000383',
        '9ZB' => 'E02000383',
        '9ZD' => 'E02000383',
        '9ZE' => 'E02000383',
        '9ZF' => 'E02000383',
        '9ZG' => 'E02000383',
        '9ZH' => 'E02000383',
        '9ZJ' => 'E02000383',
        '9ZL' => 'E02000383',
        '9ZN' => 'E02000383',
        '9ZP' => 'E02000383',
        '9ZQ' => 'E02000383',
        '9ZR' => 'E02000383',
        '9ZS' => 'E02000383',
        '9ZT' => 'E02000383',
        '9ZU' => 'E02000383',
        '9ZW' => 'E02000383',
        '9ZX' => 'E02000383',
        '9ZY' => 'E02000386',
        '9ZZ' => 'E02000383',
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
