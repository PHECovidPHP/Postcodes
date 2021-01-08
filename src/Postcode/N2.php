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
final class N2
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02000056',
        '0AB' => 'E02000056',
        '0AD' => 'E02000056',
        '0AE' => 'E02000056',
        '0AF' => 'E02000056',
        '0AG' => 'E02000056',
        '0AH' => 'E02000056',
        '0AJ' => 'E02000056',
        '0AL' => 'E02000056',
        '0AN' => 'E02000056',
        '0AP' => 'E02000056',
        '0AQ' => 'E02000056',
        '0AR' => 'E02000426',
        '0AS' => 'E02000426',
        '0AT' => 'E02000426',
        '0AU' => 'E02000052',
        '0AW' => 'E02000056',
        '0AX' => 'E02000052',
        '0AY' => 'E02000052',
        '0AZ' => 'E02000056',
        '0BA' => 'E02000056',
        '0BB' => 'E02000056',
        '0BD' => 'E02000056',
        '0BE' => 'E02000056',
        '0BF' => 'E02000056',
        '0BG' => 'E02000056',
        '0BH' => 'E02000056',
        '0BJ' => 'E02000056',
        '0BL' => 'E02000056',
        '0BN' => 'E02000056',
        '0BP' => 'E02000056',
        '0BQ' => 'E02000056',
        '0BS' => 'E02000426',
        '0BT' => 'E02000426',
        '0BU' => 'E02000426',
        '0BW' => 'E02000056',
        '0BX' => 'E02000426',
        '0BY' => 'E02000426',
        '0BZ' => 'E02000052',
        '0DA' => 'E02000052',
        '0DB' => 'E02000056',
        '0DD' => 'E02000056',
        '0DE' => 'E02000056',
        '0DF' => 'E02000056',
        '0DG' => 'E02000056',
        '0DH' => 'E02000056',
        '0DJ' => 'E02000056',
        '0DL' => 'E02000056',
        '0DN' => 'E02000056',
        '0DP' => 'E02000056',
        '0DQ' => 'E02000056',
        '0DR' => 'E02000056',
        '0DS' => 'E02000056',
        '0DT' => 'E02000056',
        '0DU' => 'E02000056',
        '0DW' => 'E02000056',
        '0DX' => 'E02000052',
        '0DY' => 'E02000056',
        '0DZ' => 'E02000056',
        '0EA' => 'E02000056',
        '0EB' => 'E02000056',
        '0ED' => 'E02000056',
        '0EE' => 'E02000056',
        '0EF' => 'E02000056',
        '0EG' => 'E02000052',
        '0EH' => 'E02000056',
        '0EJ' => 'E02000056',
        '0EL' => 'E02000056',
        '0EN' => 'E02000056',
        '0EP' => 'E02000056',
        '0EQ' => 'E02000056',
        '0ER' => 'E02000056',
        '0ES' => 'E02000056',
        '0ET' => 'E02000056',
        '0EU' => 'E02000056',
        '0EW' => 'E02000056',
        '0EX' => 'E02000056',
        '0EY' => 'E02000056',
        '0EZ' => 'E02000056',
        '0FA' => 'E02000056',
        '0FB' => 'E02000056',
        '0FD' => 'E02000050',
        '0FE' => 'E02000056',
        '0FW' => 'E02000056',
        '0FX' => 'E02000052',
        '0FY' => 'E02000052',
        '0FZ' => 'E02000052',
        '0GA' => 'E02000056',
        '0GB' => 'E02000426',
        '0GD' => 'E02000052',
        '0GE' => 'E02000052',
        '0GF' => 'E02000052',
        '0GG' => 'E02000052',
        '0GH' => 'E02000052',
        '0GJ' => 'E02000052',
        '0GL' => 'E02000052',
        '0GN' => 'E02000056',
        '0GP' => 'E02000052',
        '0GQ' => 'E02000052',
        '0GR' => 'E02000052',
        '0GS' => 'E02000052',
        '0GT' => 'E02000052',
        '0GU' => 'E02000052',
        '0GW' => 'E02000052',
        '0GX' => 'E02000052',
        '0GY' => 'E02000052',
        '0GZ' => 'E02000052',
        '0HA' => 'E02000056',
        '0HB' => 'E02000056',
        '0HD' => 'E02000056',
        '0HE' => 'E02000056',
        '0HF' => 'E02000056',
        '0HG' => 'E02000056',
        '0HH' => 'E02000052',
        '0HJ' => 'E02000056',
        '0HL' => 'E02000056',
        '0HN' => 'E02000056',
        '0HP' => 'E02000056',
        '0HQ' => 'E02000056',
        '0HR' => 'E02000052',
        '0HS' => 'E02000056',
        '0HT' => 'E02000056',
        '0HU' => 'E02000056',
        '0HW' => 'E02000056',
        '0HX' => 'E02000056',
        '0HY' => 'E02000056',
        '0HZ' => 'E02000056',
        '0JA' => 'E02000056',
        '0JB' => 'E02000056',
        '0JD' => 'E02000056',
        '0JE' => 'E02000056',
        '0JF' => 'E02000052',
        '0JG' => 'E02000056',
        '0JH' => 'E02000052',
        '0JJ' => 'E02000052',
        '0JL' => 'E02000052',
        '0JN' => 'E02000056',
        '0JP' => 'E02000056',
        '0JQ' => 'E02000052',
        '0JR' => 'E02000056',
        '0JS' => 'E02000056',
        '0JT' => 'E02000056',
        '0JU' => 'E02000056',
        '0JW' => 'E02000052',
        '0JX' => 'E02000056',
        '0JY' => 'E02000056',
        '0JZ' => 'E02000056',
        '0LA' => 'E02000056',
        '0LB' => 'E02000056',
        '0LD' => 'E02000056',
        '0LE' => 'E02000056',
        '0LF' => 'E02000056',
        '0LG' => 'E02000056',
        '0LH' => 'E02000052',
        '0LJ' => 'E02000052',
        '0LL' => 'E02000052',
        '0LN' => 'E02000052',
        '0LP' => 'E02000052',
        '0LQ' => 'E02000056',
        '0LR' => 'E02000056',
        '0LS' => 'E02000056',
        '0LT' => 'E02000052',
        '0LU' => 'E02000052',
        '0LW' => 'E02000052',
        '0LX' => 'E02000056',
        '0LY' => 'E02000056',
        '0LZ' => 'E02000052',
        '0NA' => 'E02000052',
        '0NB' => 'E02000052',
        '0ND' => 'E02000052',
        '0NE' => 'E02000052',
        '0NF' => 'E02000056',
        '0NG' => 'E02000056',
        '0NH' => 'E02000052',
        '0NJ' => 'E02000052',
        '0NL' => 'E02000426',
        '0NN' => 'E02000056',
        '0NP' => 'E02000056',
        '0NQ' => 'E02000052',
        '0NR' => 'E02000056',
        '0NS' => 'E02000056',
        '0NT' => 'E02000426',
        '0NU' => 'E02000426',
        '0NW' => 'E02000052',
        '0NX' => 'E02000426',
        '0NY' => 'E02000426',
        '0NZ' => 'E02000052',
        '0PA' => 'E02000426',
        '0PB' => 'E02000426',
        '0PD' => 'E02000426',
        '0PE' => 'E02000426',
        '0PF' => 'E02000426',
        '0PG' => 'E02000052',
        '0PH' => 'E02000426',
        '0PJ' => 'E02000426',
        '0PL' => 'E02000426',
        '0PN' => 'E02000056',
        '0PP' => 'E02000056',
        '0PQ' => 'E02000426',
        '0PR' => 'E02000056',
        '0PS' => 'E02000056',
        '0PT' => 'E02000052',
        '0PU' => 'E02000056',
        '0PW' => 'E02000056',
        '0PX' => 'E02000056',
        '0PY' => 'E02000056',
        '0PZ' => 'E02000052',
        '0QA' => 'E02000056',
        '0QB' => 'E02000056',
        '0QD' => 'E02000056',
        '0QE' => 'E02000056',
        '0QF' => 'E02000056',
        '0QG' => 'E02000056',
        '0QH' => 'E02000056',
        '0QJ' => 'E02000056',
        '0QL' => 'E02000056',
        '0QN' => 'E02000056',
        '0QP' => 'E02000056',
        '0QQ' => 'E02000056',
        '0QR' => 'E02000056',
        '0QS' => 'E02000056',
        '0QT' => 'E02000056',
        '0QU' => 'E02000056',
        '0QW' => 'E02000056',
        '0QX' => 'E02000056',
        '0QY' => 'E02000056',
        '0QZ' => 'E02000052',
        '0RA' => 'E02000056',
        '0RB' => 'E02000056',
        '0RD' => 'E02000056',
        '0RE' => 'E02000056',
        '0RF' => 'E02000056',
        '0RG' => 'E02000056',
        '0RH' => 'E02000056',
        '0RJ' => 'E02000056',
        '0RL' => 'E02000056',
        '0RN' => 'E02000056',
        '0RP' => 'E02000056',
        '0RQ' => 'E02000056',
        '0RR' => 'E02000056',
        '0RS' => 'E02000050',
        '0RT' => 'E02000052',
        '0RU' => 'E02000056',
        '0RW' => 'E02000056',
        '0RX' => 'E02000056',
        '0RY' => 'E02000056',
        '0RZ' => 'E02000056',
        '0SA' => 'E02000056',
        '0SB' => 'E02000056',
        '0SD' => 'E02000050',
        '0SE' => 'E02000050',
        '0SF' => 'E02000050',
        '0SG' => 'E02000050',
        '0SH' => 'E02000052',
        '0SJ' => 'E02000052',
        '0SL' => 'E02000052',
        '0SN' => 'E02000052',
        '0SP' => 'E02000050',
        '0SQ' => 'E02000052',
        '0SR' => 'E02000056',
        '0SS' => 'E02000052',
        '0ST' => 'E02000052',
        '0SU' => 'E02000056',
        '0SW' => 'E02000052',
        '0SX' => 'E02000052',
        '0SY' => 'E02000052',
        '0SZ' => 'E02000056',
        '0TA' => 'E02000056',
        '0TB' => 'E02000052',
        '0TD' => 'E02000052',
        '0TE' => 'E02000052',
        '0TF' => 'E02000052',
        '0TG' => 'E02000052',
        '0TH' => 'E02000052',
        '0TJ' => 'E02000050',
        '0TL' => 'E02000056',
        '0TN' => 'E02000056',
        '0TP' => 'E02000056',
        '0TQ' => 'E02000052',
        '0TR' => 'E02000056',
        '0TS' => 'E02000056',
        '0TT' => 'E02000056',
        '0TU' => 'E02000056',
        '0TW' => 'E02000056',
        '0TX' => 'E02000056',
        '0TY' => 'E02000056',
        '0TZ' => 'E02000052',
        '0UA' => 'E02000056',
        '0UB' => 'E02000056',
        '0UD' => 'E02000052',
        '0UE' => 'E02000052',
        '0UF' => 'E02000052',
        '0UG' => 'E02000052',
        '0UH' => 'E02000052',
        '0UJ' => 'E02000052',
        '0UL' => 'E02000050',
        '0UN' => 'E02000052',
        '0UP' => 'E02000052',
        '0UQ' => 'E02000052',
        '0UR' => 'E02000050',
        '0US' => 'E02000052',
        '0UT' => 'E02000050',
        '0UU' => 'E02000050',
        '0UW' => 'E02000052',
        '0UX' => 'E02000050',
        '0UY' => 'E02000050',
        '0UZ' => 'E02000050',
        '0WA' => 'E02000052',
        '0WB' => 'E02000052',
        '0WD' => 'E02000052',
        '0WE' => 'E02000052',
        '0WF' => 'E02000052',
        '0WG' => 'E02000052',
        '0WH' => 'E02000052',
        '0WJ' => 'E02000052',
        '0WL' => 'E02000052',
        '0WN' => 'E02000052',
        '0WP' => 'E02000052',
        '0WQ' => 'E02000052',
        '0WR' => 'E02000052',
        '0WS' => 'E02000052',
        '0WT' => 'E02000052',
        '0WU' => 'E02000052',
        '0WW' => 'E02000052',
        '0WX' => 'E02000052',
        '0WY' => 'E02000052',
        '0WZ' => 'E02000052',
        '0XA' => 'E02000052',
        '0XB' => 'E02000056',
        '0XD' => 'E02000056',
        '0XE' => 'E02000052',
        '0XF' => 'E02000052',
        '0XG' => 'E02000052',
        '0XH' => 'E02000050',
        '0XJ' => 'E02000052',
        '0XL' => 'E02000052',
        '0XN' => 'E02000052',
        '0XP' => 'E02000052',
        '0XQ' => 'E02000052',
        '0XR' => 'E02000052',
        '0XS' => 'E02000052',
        '0XT' => 'E02000052',
        '0XU' => 'E02000052',
        '0XW' => 'E02000052',
        '0XX' => 'E02000052',
        '0XY' => 'E02000052',
        '0XZ' => 'E02000052',
        '0YA' => 'E02000052',
        '0YB' => 'E02000052',
        '0YD' => 'E02000052',
        '0YE' => 'E02000052',
        '0YF' => 'E02000052',
        '0YG' => 'E02000052',
        '0YH' => 'E02000052',
        '0YJ' => 'E02000052',
        '0YL' => 'E02000052',
        '0YN' => 'E02000052',
        '0YP' => 'E02000052',
        '0YQ' => 'E02000052',
        '0YR' => 'E02000052',
        '0YS' => 'E02000052',
        '0YT' => 'E02000052',
        '0YU' => 'E02000056',
        '0YW' => 'E02000052',
        '0YX' => 'E02000052',
        '0YY' => 'E02000052',
        '0YZ' => 'E02000052',
        '0ZA' => 'E02000056',
        '0ZB' => 'E02000052',
        '0ZD' => 'E02000052',
        '0ZE' => 'E02000052',
        '0ZF' => 'E02000056',
        '0ZG' => 'E02000052',
        '0ZH' => 'E02000052',
        '0ZJ' => 'E02000052',
        '0ZL' => 'E02000052',
        '0ZN' => 'E02000052',
        '0ZP' => 'E02000052',
        '0ZQ' => 'E02000052',
        '0ZR' => 'E02000056',
        '0ZS' => 'E02000052',
        '0ZT' => 'E02000052',
        '0ZU' => 'E02000052',
        '0ZW' => 'E02000052',
        '2AA' => 'E02000052',
        '2AB' => 'E02000052',
        '2AD' => 'E02000052',
        '2AG' => 'E02000052',
        '2AJ' => 'E02000052',
        '2AL' => 'E02000052',
        '2AR' => 'E02000052',
        '2AU' => 'E02000052',
        '2AX' => 'E02000052',
        '2AY' => 'E02000052',
        '2BF' => 'E02000052',
        '2BL' => 'E02000052',
        '2BN' => 'E02000052',
        '2BQ' => 'E02000052',
        '2BR' => 'E02000052',
        '2BS' => 'E02000052',
        '2BT' => 'E02000052',
        '2BU' => 'E02000052',
        '2BW' => 'E02000052',
        '2BX' => 'E02000052',
        '2BY' => 'E02000052',
        '2BZ' => 'E02000052',
        '2DA' => 'E02000052',
        '2DB' => 'E02000052',
        '2DD' => 'E02000052',
        '2DE' => 'E02000052',
        '2DF' => 'E02000052',
        '2DG' => 'E02000052',
        '2DH' => 'E02000052',
        '2DJ' => 'E02000052',
        '2DL' => 'E02000052',
        '2DN' => 'E02000052',
        '2DP' => 'E02000052',
        '2DQ' => 'E02000052',
        '2DR' => 'E02000052',
        '2DS' => 'E02000052',
        '2DT' => 'E02000052',
        '2DU' => 'E02000052',
        '2DW' => 'E02000052',
        '2DX' => 'E02000052',
        '2DY' => 'E02000052',
        '2DZ' => 'E02000052',
        '2EA' => 'E02000052',
        '2EB' => 'E02000052',
        '2ED' => 'E02000052',
        '2EE' => 'E02000052',
        '2EF' => 'E02000052',
        '2EG' => 'E02000052',
        '2EH' => 'E02000052',
        '2EJ' => 'E02000052',
        '2EN' => 'E02000052',
        '2EP' => 'E02000052',
        '2EQ' => 'E02000052',
        '2ER' => 'E02000052',
        '2ES' => 'E02000052',
        '2ET' => 'E02000052',
        '2EU' => 'E02000052',
        '2EW' => 'E02000052',
        '2EX' => 'E02000052',
        '2EY' => 'E02000052',
        '2EZ' => 'E02000052',
        '8AA' => 'E02000052',
        '8AB' => 'E02000052',
        '8AD' => 'E02000052',
        '8AE' => 'E02000052',
        '8AF' => 'E02000052',
        '8AG' => 'E02000052',
        '8AH' => 'E02000052',
        '8AJ' => 'E02000052',
        '8AL' => 'E02000052',
        '8AN' => 'E02000050',
        '8AP' => 'E02000052',
        '8AQ' => 'E02000052',
        '8AR' => 'E02000052',
        '8AS' => 'E02000052',
        '8AT' => 'E02000052',
        '8AU' => 'E02000052',
        '8AW' => 'E02000052',
        '8AX' => 'E02000052',
        '8AY' => 'E02000052',
        '8AZ' => 'E02000056',
        '8BA' => 'E02000052',
        '8BB' => 'E02000052',
        '8BD' => 'E02000052',
        '8BE' => 'E02000052',
        '8BF' => 'E02000052',
        '8BG' => 'E02000052',
        '8BH' => 'E02000052',
        '8BJ' => 'E02000052',
        '8BL' => 'E02000052',
        '8BN' => 'E02000052',
        '8BP' => 'E02000052',
        '8BQ' => 'E02000052',
        '8BS' => 'E02000052',
        '8BT' => 'E02000052',
        '8BU' => 'E02000052',
        '8BW' => 'E02000052',
        '8BX' => 'E02000052',
        '8BY' => 'E02000052',
        '8BZ' => 'E02000052',
        '8DA' => 'E02000052',
        '8DB' => 'E02000050',
        '8DD' => 'E02000052',
        '8DE' => 'E02000052',
        '8DF' => 'E02000052',
        '8DG' => 'E02000052',
        '8DH' => 'E02000052',
        '8DJ' => 'E02000052',
        '8DL' => 'E02000052',
        '8DN' => 'E02000052',
        '8DP' => 'E02000052',
        '8DQ' => 'E02000052',
        '8DR' => 'E02000052',
        '8DS' => 'E02000052',
        '8DT' => 'E02000050',
        '8DU' => 'E02000052',
        '8DW' => 'E02000052',
        '8DX' => 'E02000052',
        '8DY' => 'E02000052',
        '8DZ' => 'E02000052',
        '8EA' => 'E02000052',
        '8EB' => 'E02000052',
        '8ED' => 'E02000052',
        '8EE' => 'E02000052',
        '8EF' => 'E02000052',
        '8EG' => 'E02000052',
        '8EH' => 'E02000052',
        '8EJ' => 'E02000052',
        '8EL' => 'E02000052',
        '8EN' => 'E02000052',
        '8EP' => 'E02000052',
        '8EQ' => 'E02000050',
        '8ER' => 'E02000052',
        '8ES' => 'E02000052',
        '8ET' => 'E02000050',
        '8EU' => 'E02000052',
        '8EW' => 'E02000052',
        '8EX' => 'E02000052',
        '8EY' => 'E02000052',
        '8EZ' => 'E02000050',
        '8FD' => 'E02000050',
        '8GA' => 'E02000052',
        '8GR' => 'E02000052',
        '8GS' => 'E02000052',
        '8GZ' => 'E02000052',
        '8HA' => 'E02000052',
        '8HB' => 'E02000052',
        '8HD' => 'E02000052',
        '8HE' => 'E02000050',
        '8HF' => 'E02000052',
        '8HG' => 'E02000052',
        '8HH' => 'E02000052',
        '8HJ' => 'E02000052',
        '8HL' => 'E02000050',
        '8HN' => 'E02000050',
        '8HP' => 'E02000050',
        '8HQ' => 'E02000052',
        '8HR' => 'E02000050',
        '8HS' => 'E02000050',
        '8HT' => 'E02000052',
        '8HU' => 'E02000052',
        '8HW' => 'E02000050',
        '8HX' => 'E02000052',
        '8HY' => 'E02000050',
        '8HZ' => 'E02000052',
        '8JA' => 'E02000050',
        '8JB' => 'E02000050',
        '8JD' => 'E02000052',
        '8JE' => 'E02000052',
        '8JF' => 'E02000052',
        '8JG' => 'E02000052',
        '8JH' => 'E02000052',
        '8JJ' => 'E02000052',
        '8JL' => 'E02000052',
        '8JN' => 'E02000052',
        '8JP' => 'E02000050',
        '8JQ' => 'E02000052',
        '8JR' => 'E02000050',
        '8JS' => 'E02000050',
        '8JT' => 'E02000050',
        '8JU' => 'E02000050',
        '8JW' => 'E02000052',
        '8JX' => 'E02000052',
        '8JY' => 'E02000050',
        '8JZ' => 'E02000052',
        '8LA' => 'E02000050',
        '8LB' => 'E02000050',
        '8LD' => 'E02000050',
        '8LE' => 'E02000050',
        '8LF' => 'E02000050',
        '8LG' => 'E02000050',
        '8LH' => 'E02000050',
        '8LJ' => 'E02000052',
        '8LL' => 'E02000052',
        '8LN' => 'E02000052',
        '8LP' => 'E02000052',
        '8LQ' => 'E02000050',
        '8LR' => 'E02000050',
        '8LS' => 'E02000052',
        '8LT' => 'E02000052',
        '8LU' => 'E02000052',
        '8LW' => 'E02000052',
        '8LX' => 'E02000052',
        '8LY' => 'E02000052',
        '8LZ' => 'E02000052',
        '8NA' => 'E02000052',
        '8NB' => 'E02000052',
        '8ND' => 'E02000052',
        '8NE' => 'E02000052',
        '8NG' => 'E02000052',
        '8NH' => 'E02000052',
        '8NJ' => 'E02000052',
        '8NL' => 'E02000052',
        '8NS' => 'E02000052',
        '8NT' => 'E02000052',
        '8NU' => 'E02000052',
        '8NW' => 'E02000052',
        '8NX' => 'E02000052',
        '8NY' => 'E02000052',
        '8PA' => 'E02000052',
        '8PB' => 'E02000052',
        '8PD' => 'E02000052',
        '8PE' => 'E02000052',
        '8PF' => 'E02000052',
        '8UZ' => 'E02000052',
        '8WA' => 'E02000052',
        '8WB' => 'E02000052',
        '8WD' => 'E02000052',
        '8WE' => 'E02000052',
        '8WF' => 'E02000052',
        '8WG' => 'E02000052',
        '8WH' => 'E02000052',
        '8WJ' => 'E02000052',
        '8WL' => 'E02000052',
        '8WN' => 'E02000052',
        '8WP' => 'E02000052',
        '8WQ' => 'E02000052',
        '8WR' => 'E02000052',
        '8WS' => 'E02000052',
        '8WT' => 'E02000052',
        '8WU' => 'E02000052',
        '8WW' => 'E02000052',
        '8WX' => 'E02000052',
        '8WY' => 'E02000052',
        '8WZ' => 'E02000052',
        '8XA' => 'E02000052',
        '8XB' => 'E02000052',
        '8XD' => 'E02000052',
        '8XE' => 'E02000052',
        '8XF' => 'E02000052',
        '8XG' => 'E02000052',
        '8XH' => 'E02000052',
        '8XJ' => 'E02000052',
        '8XL' => 'E02000052',
        '8XN' => 'E02000052',
        '8XP' => 'E02000052',
        '8XQ' => 'E02000052',
        '8XR' => 'E02000052',
        '8XS' => 'E02000052',
        '8XT' => 'E02000052',
        '8XU' => 'E02000052',
        '8XW' => 'E02000052',
        '8XY' => 'E02000052',
        '8XZ' => 'E02000052',
        '8YA' => 'E02000052',
        '8YB' => 'E02000052',
        '8YF' => 'E02000052',
        '8YQ' => 'E02000052',
        '8YT' => 'E02000052',
        '8YY' => 'E02000052',
        '8YZ' => 'E02000052',
        '8ZA' => 'E02000052',
        '8ZB' => 'E02000052',
        '8ZQ' => 'E02000052',
        '9AA' => 'E02000050',
        '9AB' => 'E02000050',
        '9AD' => 'E02000050',
        '9AE' => 'E02000052',
        '9AF' => 'E02000413',
        '9AG' => 'E02000050',
        '9AH' => 'E02000052',
        '9AJ' => 'E02000050',
        '9AL' => 'E02000050',
        '9AN' => 'E02000050',
        '9AP' => 'E02000050',
        '9AQ' => 'E02000052',
        '9AR' => 'E02000050',
        '9AS' => 'E02000052',
        '9AT' => 'E02000052',
        '9AU' => 'E02000052',
        '9AW' => 'E02000050',
        '9AX' => 'E02000052',
        '9AY' => 'E02000050',
        '9AZ' => 'E02000050',
        '9BA' => 'E02000050',
        '9BB' => 'E02000050',
        '9BD' => 'E02000050',
        '9BE' => 'E02000050',
        '9BF' => 'E02000050',
        '9BG' => 'E02000050',
        '9BH' => 'E02000050',
        '9BJ' => 'E02000413',
        '9BL' => 'E02000413',
        '9BN' => 'E02000413',
        '9BP' => 'E02000050',
        '9BQ' => 'E02000050',
        '9BS' => 'E02000050',
        '9BT' => 'E02000050',
        '9BU' => 'E02000050',
        '9BW' => 'E02000050',
        '9BX' => 'E02000050',
        '9BY' => 'E02000050',
        '9BZ' => 'E02000050',
        '9DA' => 'E02000050',
        '9DB' => 'E02000052',
        '9DD' => 'E02000050',
        '9DE' => 'E02000052',
        '9DF' => 'E02000052',
        '9DG' => 'E02000052',
        '9DH' => 'E02000052',
        '9DJ' => 'E02000052',
        '9DL' => 'E02000052',
        '9DN' => 'E02000052',
        '9DP' => 'E02000052',
        '9DQ' => 'E02000052',
        '9DR' => 'E02000050',
        '9DS' => 'E02000050',
        '9DT' => 'E02000050',
        '9DU' => 'E02000052',
        '9DW' => 'E02000052',
        '9DX' => 'E02000052',
        '9DY' => 'E02000052',
        '9DZ' => 'E02000050',
        '9EA' => 'E02000052',
        '9EB' => 'E02000052',
        '9ED' => 'E02000052',
        '9EE' => 'E02000052',
        '9EF' => 'E02000052',
        '9EG' => 'E02000052',
        '9EH' => 'E02000052',
        '9EJ' => 'E02000052',
        '9EL' => 'E02000052',
        '9EN' => 'E02000052',
        '9EP' => 'E02000413',
        '9EQ' => 'E02000052',
        '9ER' => 'E02000413',
        '9ES' => 'E02000413',
        '9ET' => 'E02000413',
        '9EU' => 'E02000413',
        '9EW' => 'E02000052',
        '9EX' => 'E02000413',
        '9EY' => 'E02000413',
        '9EZ' => 'E02000413',
        '9FA' => 'E02000052',
        '9FD' => 'E02000052',
        '9FE' => 'E02000050',
        '9FF' => 'E02000050',
        '9FG' => 'E02000050',
        '9FH' => 'E02000050',
        '9GE' => 'E02000052',
        '9HA' => 'E02000413',
        '9HB' => 'E02000413',
        '9HD' => 'E02000413',
        '9HE' => 'E02000413',
        '9HF' => 'E02000052',
        '9HG' => 'E02000413',
        '9HH' => 'E02000413',
        '9HJ' => 'E02000413',
        '9HL' => 'E02000413',
        '9HN' => 'E02000413',
        '9HP' => 'E02000413',
        '9HR' => 'E02000413',
        '9HS' => 'E02000413',
        '9HT' => 'E02000413',
        '9HU' => 'E02000413',
        '9HW' => 'E02000413',
        '9HX' => 'E02000413',
        '9HY' => 'E02000413',
        '9HZ' => 'E02000052',
        '9JA' => 'E02000413',
        '9JB' => 'E02000413',
        '9JD' => 'E02000413',
        '9JE' => 'E02000413',
        '9JG' => 'E02000413',
        '9JH' => 'E02000413',
        '9JJ' => 'E02000052',
        '9JL' => 'E02000052',
        '9JN' => 'E02000052',
        '9JP' => 'E02000050',
        '9JQ' => 'E02000413',
        '9JR' => 'E02000052',
        '9JS' => 'E02000413',
        '9JT' => 'E02000052',
        '9JY' => 'E02000413',
        '9JZ' => 'E02000413',
        '9LA' => 'E02000413',
        '9LB' => 'E02000413',
        '9LD' => 'E02000413',
        '9LE' => 'E02000413',
        '9LF' => 'E02000413',
        '9LG' => 'E02000413',
        '9LH' => 'E02000413',
        '9LJ' => 'E02000413',
        '9LL' => 'E02000413',
        '9LN' => 'E02000413',
        '9LP' => 'E02000413',
        '9LQ' => 'E02000413',
        '9LR' => 'E02000413',
        '9LS' => 'E02000413',
        '9LT' => 'E02000413',
        '9LU' => 'E02000413',
        '9LW' => 'E02000413',
        '9LX' => 'E02000413',
        '9LY' => 'E02000413',
        '9LZ' => 'E02000052',
        '9NA' => 'E02000413',
        '9NB' => 'E02000413',
        '9ND' => 'E02000413',
        '9NE' => 'E02000413',
        '9NF' => 'E02000413',
        '9NG' => 'E02000050',
        '9NH' => 'E02000050',
        '9NJ' => 'E02000413',
        '9NL' => 'E02000413',
        '9NN' => 'E02000413',
        '9NP' => 'E02000413',
        '9NQ' => 'E02000052',
        '9NR' => 'E02000413',
        '9NS' => 'E02000413',
        '9NT' => 'E02000413',
        '9NU' => 'E02000413',
        '9NX' => 'E02000413',
        '9NY' => 'E02000413',
        '9NZ' => 'E02000052',
        '9PA' => 'E02000413',
        '9PB' => 'E02000413',
        '9PD' => 'E02000413',
        '9PE' => 'E02000052',
        '9PH' => 'E02000052',
        '9PJ' => 'E02000052',
        '9PL' => 'E02000052',
        '9PN' => 'E02000052',
        '9PP' => 'E02000052',
        '9PR' => 'E02000052',
        '9PS' => 'E02000052',
        '9PT' => 'E02000052',
        '9PU' => 'E02000052',
        '9PW' => 'E02000052',
        '9PX' => 'E02000052',
        '9PY' => 'E02000052',
        '9PZ' => 'E02000052',
        '9QA' => 'E02000052',
        '9QB' => 'E02000052',
        '9QD' => 'E02000052',
        '9QE' => 'E02000052',
        '9QG' => 'E02000052',
        '9QH' => 'E02000052',
        '9QJ' => 'E02000052',
        '9QL' => 'E02000052',
        '9QN' => 'E02000052',
        '9QP' => 'E02000052',
        '9QS' => 'E02000052',
        '9QT' => 'E02000052',
        '9QU' => 'E02000052',
        '9QX' => 'E02000052',
        '9QZ' => 'E02000052',
        '9RA' => 'E02000050',
        '9RB' => 'E02000050',
        '9RD' => 'E02000050',
        '9RE' => 'E02000050',
        '9RF' => 'E02000050',
        '9RG' => 'E02000050',
        '9RH' => 'E02000050',
        '9RL' => 'E02000050',
        '9RQ' => 'E02000050',
        '9SA' => 'E02000050',
        '9SB' => 'E02000052',
        '9SL' => 'E02000050',
        '9TR' => 'E02000052',
        '9UT' => 'E02000052',
        '9UU' => 'E02000052',
        '9UW' => 'E02000052',
        '9UX' => 'E02000052',
        '9UY' => 'E02000052',
        '9UZ' => 'E02000052',
        '9WA' => 'E02000052',
        '9WB' => 'E02000052',
        '9WD' => 'E02000052',
        '9WE' => 'E02000052',
        '9WF' => 'E02000052',
        '9WG' => 'E02000052',
        '9WH' => 'E02000052',
        '9WJ' => 'E02000052',
        '9WL' => 'E02000052',
        '9WN' => 'E02000052',
        '9WP' => 'E02000052',
        '9WQ' => 'E02000052',
        '9WR' => 'E02000052',
        '9WS' => 'E02000052',
        '9WT' => 'E02000052',
        '9WU' => 'E02000052',
        '9WW' => 'E02000052',
        '9WX' => 'E02000052',
        '9WY' => 'E02000052',
        '9WZ' => 'E02000052',
        '9XA' => 'E02000052',
        '9XB' => 'E02000052',
        '9XD' => 'E02000052',
        '9XE' => 'E02000052',
        '9XF' => 'E02000052',
        '9XG' => 'E02000052',
        '9XH' => 'E02000052',
        '9XR' => 'E02000052',
        '9XS' => 'E02000052',
        '9XT' => 'E02000052',
        '9XU' => 'E02000052',
        '9XW' => 'E02000052',
        '9XX' => 'E02000052',
        '9XY' => 'E02000052',
        '9XZ' => 'E02000052',
        '9YQ' => 'E02000052',
        '9YZ' => 'E02000052',
        '9ZA' => 'E02000052',
        '9ZB' => 'E02000052',
        '9ZD' => 'E02000052',
        '9ZE' => 'E02000052',
        '9ZF' => 'E02000052',
        '9ZG' => 'E02000052',
        '9ZH' => 'E02000052',
        '9ZJ' => 'E02000052',
        '9ZL' => 'E02000052',
        '9ZN' => 'E02000052',
        '9ZP' => 'E02000052',
        '9ZQ' => 'E02000052',
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
