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
final class BS2
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AF' => 'E02006887',
        '0AG' => 'E02006889',
        '0AH' => 'E02006889',
        '0AJ' => 'E02006889',
        '0AL' => 'E02006889',
        '0AN' => 'E02006889',
        '0AP' => 'E02006889',
        '0AQ' => 'E02006889',
        '0AR' => 'E02006889',
        '0AS' => 'E02006889',
        '0AT' => 'E02003043',
        '0AU' => 'E02006887',
        '0AW' => 'E02006889',
        '0AX' => 'E02006887',
        '0AY' => 'E02006887',
        '0AZ' => 'E02003043',
        '0BA' => 'E02006887',
        '0BB' => 'E02006887',
        '0BD' => 'E02006887',
        '0BE' => 'E02006887',
        '0BG' => 'E02006887',
        '0BH' => 'E02006887',
        '0BJ' => 'E02006887',
        '0BL' => 'E02006887',
        '0BP' => 'E02006887',
        '0BQ' => 'E02006887',
        '0BS' => 'E02006887',
        '0BT' => 'E02006887',
        '0BU' => 'E02006887',
        '0BW' => 'E02006887',
        '0BX' => 'E02006887',
        '0BY' => 'E02006887',
        '0BZ' => 'E02006887',
        '0DA' => 'E02006887',
        '0DB' => 'E02006887',
        '0DE' => 'E02006887',
        '0DF' => 'E02006887',
        '0DG' => 'E02006887',
        '0DH' => 'E02006887',
        '0DJ' => 'E02006887',
        '0DL' => 'E02006887',
        '0DN' => 'E02006887',
        '0DP' => 'E02006887',
        '0DQ' => 'E02006887',
        '0DR' => 'E02006887',
        '0DS' => 'E02006887',
        '0DT' => 'E02006887',
        '0DU' => 'E02006887',
        '0DW' => 'E02006887',
        '0DX' => 'E02006887',
        '0DY' => 'E02006887',
        '0DZ' => 'E02006887',
        '0EA' => 'E02006887',
        '0EB' => 'E02006887',
        '0ED' => 'E02006887',
        '0EE' => 'E02006889',
        '0EF' => 'E02006887',
        '0EG' => 'E02003043',
        '0EH' => 'E02006887',
        '0EJ' => 'E02006887',
        '0EL' => 'E02006887',
        '0EN' => 'E02006887',
        '0EP' => 'E02006887',
        '0EQ' => 'E02003043',
        '0ER' => 'E02006887',
        '0ES' => 'E02006887',
        '0ET' => 'E02003043',
        '0EU' => 'E02006887',
        '0EW' => 'E02006887',
        '0EX' => 'E02006887',
        '0EY' => 'E02006887',
        '0EZ' => 'E02006887',
        '0FB' => 'E02006887',
        '0FD' => 'E02006887',
        '0FE' => 'E02006887',
        '0FF' => 'E02006887',
        '0FG' => 'E02006887',
        '0FH' => 'E02006887',
        '0FJ' => 'E02006887',
        '0FL' => 'E02006887',
        '0FN' => 'E02006887',
        '0FP' => 'E02006889',
        '0FQ' => 'E02006887',
        '0FR' => 'E02006887',
        '0FS' => 'E02006887',
        '0FT' => 'E02006887',
        '0FU' => 'E02006887',
        '0FW' => 'E02006887',
        '0FX' => 'E02006887',
        '0FY' => 'E02006887',
        '0FZ' => 'E02006887',
        '0GE' => 'E02003043',
        '0GF' => 'E02006887',
        '0GW' => 'E02006889',
        '0GZ' => 'E02006887',
        '0HA' => 'E02006887',
        '0HB' => 'E02006887',
        '0HD' => 'E02006887',
        '0HE' => 'E02006887',
        '0HF' => 'E02006887',
        '0HG' => 'E02006887',
        '0HH' => 'E02006889',
        '0HJ' => 'E02006887',
        '0HL' => 'E02006889',
        '0HN' => 'E02006887',
        '0HP' => 'E02006887',
        '0HQ' => 'E02003043',
        '0HR' => 'E02006887',
        '0HS' => 'E02006887',
        '0HT' => 'E02006887',
        '0HU' => 'E02006887',
        '0HW' => 'E02003043',
        '0HX' => 'E02006887',
        '0HY' => 'E02006887',
        '0HZ' => 'E02006887',
        '0JA' => 'E02003043',
        '0JB' => 'E02003043',
        '0JD' => 'E02003043',
        '0JE' => 'E02006889',
        '0JF' => 'E02003043',
        '0JG' => 'E02006887',
        '0JH' => 'E02003043',
        '0JJ' => 'E02003043',
        '0JL' => 'E02003043',
        '0JN' => 'E02006887',
        '0JP' => 'E02006887',
        '0JQ' => 'E02003043',
        '0JR' => 'E02006887',
        '0JS' => 'E02006887',
        '0JT' => 'E02006887',
        '0JU' => 'E02006887',
        '0JW' => 'E02006887',
        '0JX' => 'E02006887',
        '0JY' => 'E02006887',
        '0JZ' => 'E02006889',
        '0LA' => 'E02006887',
        '0LB' => 'E02006887',
        '0LD' => 'E02006887',
        '0LE' => 'E02006887',
        '0LF' => 'E02006887',
        '0LG' => 'E02006887',
        '0LH' => 'E02006887',
        '0LJ' => 'E02006887',
        '0LL' => 'E02006887',
        '0LN' => 'E02006887',
        '0LP' => 'E02006887',
        '0LQ' => 'E02006887',
        '0LR' => 'E02006887',
        '0LS' => 'E02006887',
        '0LT' => 'E02006887',
        '0LU' => 'E02006887',
        '0LW' => 'E02006887',
        '0LX' => 'E02006887',
        '0LY' => 'E02006887',
        '0LZ' => 'E02006887',
        '0NA' => 'E02006887',
        '0NB' => 'E02006887',
        '0ND' => 'E02006887',
        '0NE' => 'E02006887',
        '0NG' => 'E02006887',
        '0NJ' => 'E02006887',
        '0NL' => 'E02006887',
        '0NN' => 'E02006887',
        '0NP' => 'E02006887',
        '0NR' => 'E02006887',
        '0NT' => 'E02006887',
        '0NW' => 'E02006887',
        '0PA' => 'E02006887',
        '0PD' => 'E02006887',
        '0PE' => 'E02006887',
        '0PF' => 'E02006887',
        '0PG' => 'E02006887',
        '0PH' => 'E02006887',
        '0PJ' => 'E02006887',
        '0PL' => 'E02006887',
        '0PN' => 'E02006887',
        '0PP' => 'E02006887',
        '0PQ' => 'E02006889',
        '0PR' => 'E02006887',
        '0PS' => 'E02006887',
        '0PT' => 'E02006887',
        '0PU' => 'E02006887',
        '0PX' => 'E02006887',
        '0PZ' => 'E02006887',
        '0QA' => 'E02006889',
        '0QB' => 'E02006887',
        '0QD' => 'E02006887',
        '0QE' => 'E02006887',
        '0QF' => 'E02006887',
        '0QG' => 'E02006887',
        '0QH' => 'E02006887',
        '0QJ' => 'E02006889',
        '0QL' => 'E02006887',
        '0QN' => 'E02006887',
        '0QP' => 'E02006889',
        '0QQ' => 'E02006887',
        '0QR' => 'E02006887',
        '0QS' => 'E02006889',
        '0QT' => 'E02006887',
        '0QU' => 'E02006887',
        '0QW' => 'E02006887',
        '0QX' => 'E02006887',
        '0QY' => 'E02006887',
        '0QZ' => 'E02006887',
        '0RA' => 'E02006887',
        '0RB' => 'E02006887',
        '0RD' => 'E02006887',
        '0RE' => 'E02006887',
        '0RF' => 'E02006887',
        '0RG' => 'E02006887',
        '0RH' => 'E02006887',
        '0RJ' => 'E02006887',
        '0RL' => 'E02006887',
        '0RN' => 'E02006887',
        '0RP' => 'E02006887',
        '0RQ' => 'E02006887',
        '0RR' => 'E02006887',
        '0RS' => 'E02006887',
        '0RT' => 'E02006887',
        '0RU' => 'E02006887',
        '0RX' => 'E02006887',
        '0RY' => 'E02006887',
        '0RZ' => 'E02006887',
        '0SB' => 'E02006887',
        '0SD' => 'E02006887',
        '0SE' => 'E02006887',
        '0SF' => 'E02006887',
        '0SG' => 'E02006887',
        '0SH' => 'E02006887',
        '0SJ' => 'E02006887',
        '0SL' => 'E02006887',
        '0SN' => 'E02003043',
        '0SP' => 'E02006889',
        '0SQ' => 'E02006887',
        '0SS' => 'E02006887',
        '0SU' => 'E02006889',
        '0SW' => 'E02006887',
        '0SX' => 'E02006889',
        '0SY' => 'E02006889',
        '0SZ' => 'E02006889',
        '0TA' => 'E02006889',
        '0TB' => 'E02006889',
        '0TD' => 'E02006889',
        '0TE' => 'E02006889',
        '0TF' => 'E02006889',
        '0TG' => 'E02006889',
        '0TH' => 'E02006889',
        '0TJ' => 'E02006889',
        '0TL' => 'E02006889',
        '0TN' => 'E02006889',
        '0TP' => 'E02006889',
        '0TQ' => 'E02006889',
        '0TR' => 'E02006889',
        '0TS' => 'E02006889',
        '0TT' => 'E02006889',
        '0TU' => 'E02006889',
        '0TW' => 'E02006889',
        '0TX' => 'E02006889',
        '0TY' => 'E02006889',
        '0TZ' => 'E02006889',
        '0UA' => 'E02006889',
        '0UB' => 'E02006889',
        '0UD' => 'E02006887',
        '0UE' => 'E02006889',
        '0UF' => 'E02006889',
        '0UG' => 'E02006889',
        '0UH' => 'E02006887',
        '0UJ' => 'E02006887',
        '0UL' => 'E02006887',
        '0UN' => 'E02006887',
        '0UP' => 'E02006887',
        '0UQ' => 'E02006889',
        '0UR' => 'E02006887',
        '0US' => 'E02006887',
        '0UT' => 'E02006887',
        '0UU' => 'E02006887',
        '0UW' => 'E02006887',
        '0UX' => 'E02006887',
        '0UY' => 'E02006889',
        '0UZ' => 'E02006887',
        '0WA' => 'E02006889',
        '0WY' => 'E02006887',
        '0XA' => 'E02006887',
        '0XB' => 'E02006887',
        '0XD' => 'E02006887',
        '0XF' => 'E02006887',
        '0XG' => 'E02006887',
        '0XH' => 'E02006887',
        '0XJ' => 'E02006887',
        '0XL' => 'E02006887',
        '0XN' => 'E02006887',
        '0XP' => 'E02006887',
        '0XQ' => 'E02006889',
        '0XR' => 'E02006887',
        '0XS' => 'E02006887',
        '0XT' => 'E02006887',
        '0XU' => 'E02006887',
        '0XW' => 'E02006887',
        '0XX' => 'E02006887',
        '0XY' => 'E02006887',
        '0XZ' => 'E02006887',
        '0YA' => 'E02006889',
        '0YB' => 'E02006887',
        '0YE' => 'E02006887',
        '0YF' => 'E02006889',
        '0YG' => 'E02006889',
        '0YH' => 'E02006887',
        '0YJ' => 'E02006887',
        '0YL' => 'E02006887',
        '0YN' => 'E02006887',
        '0YP' => 'E02006887',
        '0YQ' => 'E02006887',
        '0YR' => 'E02006887',
        '0YS' => 'E02006887',
        '0YT' => 'E02006887',
        '0YU' => 'E02006887',
        '0YW' => 'E02006887',
        '0YX' => 'E02006887',
        '0YY' => 'E02006887',
        '0ZX' => 'E02006887',
        '2AA' => 'E02006887',
        '2AB' => 'E02006887',
        '2AD' => 'E02006887',
        '2AE' => 'E02006887',
        '2AF' => 'E02006887',
        '2AG' => 'E02006887',
        '2AH' => 'E02006887',
        '2AJ' => 'E02006887',
        '2AL' => 'E02006887',
        '2AN' => 'E02006887',
        '2AP' => 'E02006887',
        '2AQ' => 'E02006887',
        '2AR' => 'E02006887',
        '2AS' => 'E02006887',
        '2BA' => 'E02006887',
        '2BB' => 'E02006887',
        '2BD' => 'E02006887',
        '2BE' => 'E02006887',
        '2BF' => 'E02006887',
        '2BG' => 'E02006887',
        '2BH' => 'E02006887',
        '2BJ' => 'E02006887',
        '2BL' => 'E02006887',
        '2BN' => 'E02006887',
        '2BP' => 'E02006887',
        '2BQ' => 'E02006887',
        '2BR' => 'E02006887',
        '2BS' => 'E02006887',
        '2BT' => 'E02006887',
        '2BU' => 'E02006887',
        '2BW' => 'E02006887',
        '2BX' => 'E02006887',
        '2BZ' => 'E02006887',
        '2DA' => 'E02006887',
        '2DB' => 'E02006887',
        '2DD' => 'E02006887',
        '2DE' => 'E02006887',
        '2DF' => 'E02006887',
        '2DG' => 'E02006887',
        '2DH' => 'E02006887',
        '2DJ' => 'E02006887',
        '2DL' => 'E02006887',
        '2DN' => 'E02006887',
        '2DP' => 'E02006887',
        '2DQ' => 'E02006887',
        '2DR' => 'E02006887',
        '2DS' => 'E02006887',
        '2DU' => 'E02006887',
        '2DX' => 'E02006887',
        '2DY' => 'E02006887',
        '2DZ' => 'E02006887',
        '2EB' => 'E02006887',
        '2ED' => 'E02006887',
        '2EE' => 'E02006887',
        '2EF' => 'E02006887',
        '2EG' => 'E02006887',
        '2EH' => 'E02006887',
        '2EJ' => 'E02006887',
        '2EL' => 'E02006887',
        '2EN' => 'E02006887',
        '2EP' => 'E02006887',
        '2EQ' => 'E02006887',
        '2ER' => 'E02006887',
        '2ET' => 'E02006887',
        '2EU' => 'E02006887',
        '2EW' => 'E02006887',
        '2WW' => 'E02006887',
        '2WX' => 'E02006887',
        '2WY' => 'E02006887',
        '2ZR' => 'E02006887',
        '2ZS' => 'E02006887',
        '2ZT' => 'E02006887',
        '2ZU' => 'E02006887',
        '2ZW' => 'E02006887',
        '2ZX' => 'E02006887',
        '2ZZ' => 'E02006887',
        '8AA' => 'E02006887',
        '8AB' => 'E02003034',
        '8AE' => 'E02003043',
        '8AF' => 'E02003034',
        '8AG' => 'E02003034',
        '8AH' => 'E02003034',
        '8AJ' => 'E02003036',
        '8AL' => 'E02003036',
        '8AN' => 'E02003034',
        '8AP' => 'E02003034',
        '8AQ' => 'E02003034',
        '8AR' => 'E02003034',
        '8AS' => 'E02003036',
        '8AT' => 'E02003034',
        '8AU' => 'E02003036',
        '8AW' => 'E02003036',
        '8AX' => 'E02003036',
        '8AY' => 'E02003036',
        '8AZ' => 'E02003036',
        '8BA' => 'E02003043',
        '8BB' => 'E02003043',
        '8BD' => 'E02003043',
        '8BE' => 'E02003043',
        '8BF' => 'E02003034',
        '8BH' => 'E02003043',
        '8BJ' => 'E02003043',
        '8BL' => 'E02003043',
        '8BN' => 'E02003043',
        '8BP' => 'E02003043',
        '8BQ' => 'E02003043',
        '8BS' => 'E02003043',
        '8BT' => 'E02003043',
        '8BU' => 'E02003043',
        '8BW' => 'E02003043',
        '8BX' => 'E02003043',
        '8BY' => 'E02003043',
        '8BZ' => 'E02003043',
        '8DA' => 'E02003043',
        '8DB' => 'E02003043',
        '8DD' => 'E02003043',
        '8DE' => 'E02003043',
        '8DF' => 'E02003043',
        '8DG' => 'E02003043',
        '8DH' => 'E02003043',
        '8DJ' => 'E02003043',
        '8DL' => 'E02003036',
        '8DN' => 'E02003043',
        '8DP' => 'E02003043',
        '8DQ' => 'E02003043',
        '8DR' => 'E02003043',
        '8DS' => 'E02003043',
        '8DT' => 'E02003043',
        '8DU' => 'E02003043',
        '8DW' => 'E02003043',
        '8DX' => 'E02003043',
        '8DY' => 'E02003043',
        '8DZ' => 'E02003043',
        '8EA' => 'E02003043',
        '8EB' => 'E02003043',
        '8ED' => 'E02003043',
        '8EE' => 'E02003036',
        '8EF' => 'E02003036',
        '8EG' => 'E02003043',
        '8EH' => 'E02003043',
        '8EJ' => 'E02003043',
        '8EL' => 'E02003043',
        '8EN' => 'E02003036',
        '8EP' => 'E02003036',
        '8EQ' => 'E02003043',
        '8ER' => 'E02003036',
        '8ES' => 'E02003043',
        '8ET' => 'E02003036',
        '8EU' => 'E02003036',
        '8EW' => 'E02003036',
        '8EX' => 'E02003036',
        '8EY' => 'E02003036',
        '8EZ' => 'E02003043',
        '8FD' => 'E02003036',
        '8FE' => 'E02003034',
        '8FF' => 'E02003034',
        '8FG' => 'E02003034',
        '8FH' => 'E02003034',
        '8FJ' => 'E02003034',
        '8FN' => 'E02003043',
        '8FR' => 'E02003034',
        '8GG' => 'E02003034',
        '8HA' => 'E02003043',
        '8HD' => 'E02003043',
        '8HE' => 'E02003043',
        '8HG' => 'E02003036',
        '8HH' => 'E02003043',
        '8HL' => 'E02003043',
        '8HN' => 'E02003043',
        '8HP' => 'E02003036',
        '8HQ' => 'E02003043',
        '8HR' => 'E02003043',
        '8HS' => 'E02003036',
        '8HT' => 'E02003036',
        '8HU' => 'E02003036',
        '8HW' => 'E02003043',
        '8HX' => 'E02003036',
        '8HY' => 'E02003034',
        '8HZ' => 'E02003036',
        '8JA' => 'E02003036',
        '8JB' => 'E02003036',
        '8JD' => 'E02003036',
        '8JE' => 'E02003036',
        '8JF' => 'E02003036',
        '8JG' => 'E02003036',
        '8JH' => 'E02003036',
        '8JJ' => 'E02003036',
        '8JL' => 'E02003036',
        '8JN' => 'E02003036',
        '8JP' => 'E02003036',
        '8JQ' => 'E02003036',
        '8JR' => 'E02003036',
        '8JS' => 'E02003036',
        '8JT' => 'E02003036',
        '8JU' => 'E02003036',
        '8JW' => 'E02003036',
        '8JX' => 'E02003036',
        '8JY' => 'E02003036',
        '8JZ' => 'E02003036',
        '8LA' => 'E02003036',
        '8LB' => 'E02003036',
        '8LD' => 'E02003036',
        '8LE' => 'E02003036',
        '8LF' => 'E02003036',
        '8LG' => 'E02003036',
        '8LH' => 'E02003036',
        '8LJ' => 'E02003036',
        '8LL' => 'E02003036',
        '8LN' => 'E02003036',
        '8LP' => 'E02003036',
        '8LQ' => 'E02003036',
        '8LR' => 'E02003036',
        '8LS' => 'E02003036',
        '8LT' => 'E02003036',
        '8LU' => 'E02003036',
        '8LW' => 'E02003036',
        '8LX' => 'E02003036',
        '8LY' => 'E02003036',
        '8LZ' => 'E02003036',
        '8NA' => 'E02003036',
        '8NB' => 'E02003036',
        '8ND' => 'E02003036',
        '8NE' => 'E02003036',
        '8NF' => 'E02003036',
        '8NG' => 'E02003036',
        '8NH' => 'E02003034',
        '8NJ' => 'E02003034',
        '8NL' => 'E02003034',
        '8NN' => 'E02003034',
        '8NP' => 'E02003034',
        '8NQ' => 'E02003036',
        '8NT' => 'E02003034',
        '8NU' => 'E02003034',
        '8NX' => 'E02003034',
        '8NY' => 'E02003036',
        '8NZ' => 'E02003036',
        '8PA' => 'E02006887',
        '8PB' => 'E02003034',
        '8PD' => 'E02003034',
        '8PE' => 'E02003034',
        '8PF' => 'E02003034',
        '8PG' => 'E02003034',
        '8PH' => 'E02003034',
        '8PL' => 'E02003034',
        '8PN' => 'E02003034',
        '8PP' => 'E02003034',
        '8PQ' => 'E02003034',
        '8PR' => 'E02003034',
        '8PS' => 'E02003034',
        '8PT' => 'E02003034',
        '8PU' => 'E02003034',
        '8PW' => 'E02003034',
        '8PY' => 'E02003034',
        '8PZ' => 'E02003034',
        '8QA' => 'E02003034',
        '8QB' => 'E02003034',
        '8QD' => 'E02003034',
        '8QE' => 'E02003034',
        '8QF' => 'E02003034',
        '8QG' => 'E02003034',
        '8QH' => 'E02003034',
        '8QJ' => 'E02003034',
        '8QL' => 'E02003034',
        '8QN' => 'E02003034',
        '8QP' => 'E02003034',
        '8QQ' => 'E02003034',
        '8QR' => 'E02003034',
        '8QS' => 'E02003034',
        '8QT' => 'E02003034',
        '8QU' => 'E02003034',
        '8QW' => 'E02003034',
        '8QX' => 'E02003034',
        '8QY' => 'E02003034',
        '8QZ' => 'E02003034',
        '8RB' => 'E02003034',
        '8RD' => 'E02003034',
        '8RF' => 'E02003034',
        '8RG' => 'E02003034',
        '8RH' => 'E02003034',
        '8RJ' => 'E02003034',
        '8RL' => 'E02003034',
        '8RN' => 'E02003034',
        '8RQ' => 'E02003034',
        '8RR' => 'E02003034',
        '8RT' => 'E02003034',
        '8RU' => 'E02003034',
        '8RY' => 'E02003034',
        '8RZ' => 'E02003034',
        '8SA' => 'E02003034',
        '8SB' => 'E02003034',
        '8SD' => 'E02003034',
        '8SE' => 'E02003034',
        '8SF' => 'E02003034',
        '8SG' => 'E02003034',
        '8SH' => 'E02003034',
        '8SJ' => 'E02003034',
        '8SL' => 'E02003034',
        '8SN' => 'E02003034',
        '8SQ' => 'E02003034',
        '8SR' => 'E02003034',
        '8SS' => 'E02003034',
        '8ST' => 'E02003034',
        '8SU' => 'E02003034',
        '8SY' => 'E02003034',
        '8TA' => 'E02003034',
        '8TB' => 'E02003034',
        '8TN' => 'E02003034',
        '8TP' => 'E02003034',
        '8TT' => 'E02003034',
        '8TU' => 'E02003034',
        '8TX' => 'E02003034',
        '8TY' => 'E02003034',
        '8TZ' => 'E02003034',
        '8UA' => 'E02003034',
        '8UB' => 'E02003034',
        '8UD' => 'E02003034',
        '8UE' => 'E02003034',
        '8UF' => 'E02003034',
        '8UG' => 'E02003034',
        '8UH' => 'E02003034',
        '8UJ' => 'E02003034',
        '8UL' => 'E02003034',
        '8UN' => 'E02003034',
        '8UQ' => 'E02003034',
        '8UT' => 'E02003034',
        '8UU' => 'E02003034',
        '8UW' => 'E02003034',
        '8UY' => 'E02003034',
        '8UZ' => 'E02003034',
        '8WA' => 'E02006887',
        '8WF' => 'E02003034',
        '8XA' => 'E02003034',
        '8XD' => 'E02003034',
        '8XE' => 'E02003034',
        '8XF' => 'E02003034',
        '8XG' => 'E02003034',
        '8XH' => 'E02003034',
        '8XJ' => 'E02003034',
        '8XL' => 'E02003034',
        '8XP' => 'E02003034',
        '8XQ' => 'E02003034',
        '8XR' => 'E02003034',
        '8XS' => 'E02003034',
        '8XT' => 'E02003034',
        '8XU' => 'E02003034',
        '8XW' => 'E02003034',
        '8XX' => 'E02003034',
        '8YA' => 'E02003034',
        '8YB' => 'E02003034',
        '8YD' => 'E02003034',
        '8YE' => 'E02003034',
        '8YG' => 'E02003034',
        '8YH' => 'E02003034',
        '8YJ' => 'E02003034',
        '8YL' => 'E02003034',
        '8YQ' => 'E02003034',
        '9AA' => 'E02003036',
        '9AB' => 'E02006887',
        '9AD' => 'E02006887',
        '9AE' => 'E02006887',
        '9AF' => 'E02006887',
        '9AG' => 'E02003034',
        '9AH' => 'E02003034',
        '9AN' => 'E02003034',
        '9AP' => 'E02003034',
        '9AU' => 'E02006887',
        '9AX' => 'E02006887',
        '9BB' => 'E02003034',
        '9BE' => 'E02003036',
        '9BH' => 'E02006887',
        '9BN' => 'E02006887',
        '9BP' => 'E02006887',
        '9BT' => 'E02006887',
        '9BU' => 'E02006887',
        '9BW' => 'E02006887',
        '9BX' => 'E02006887',
        '9BY' => 'E02006887',
        '9BZ' => 'E02006887',
        '9DA' => 'E02006887',
        '9DB' => 'E02006887',
        '9DD' => 'E02006887',
        '9DE' => 'E02006887',
        '9DF' => 'E02006887',
        '9DG' => 'E02006887',
        '9DH' => 'E02006887',
        '9DJ' => 'E02006887',
        '9DN' => 'E02006887',
        '9DP' => 'E02006887',
        '9DQ' => 'E02006887',
        '9DR' => 'E02006887',
        '9DS' => 'E02006887',
        '9DT' => 'E02006887',
        '9DU' => 'E02006887',
        '9DW' => 'E02006887',
        '9DX' => 'E02006887',
        '9DY' => 'E02006887',
        '9DZ' => 'E02006887',
        '9EA' => 'E02006887',
        '9EB' => 'E02006887',
        '9ED' => 'E02006887',
        '9EE' => 'E02006887',
        '9EF' => 'E02006887',
        '9EG' => 'E02006887',
        '9EH' => 'E02006887',
        '9EL' => 'E02006887',
        '9EN' => 'E02006887',
        '9EP' => 'E02006887',
        '9EQ' => 'E02006887',
        '9ER' => 'E02006887',
        '9ES' => 'E02006889',
        '9EW' => 'E02006887',
        '9HA' => 'E02003034',
        '9HB' => 'E02003034',
        '9HD' => 'E02003034',
        '9HE' => 'E02003034',
        '9HF' => 'E02003034',
        '9HG' => 'E02003034',
        '9HH' => 'E02003034',
        '9HJ' => 'E02003034',
        '9HL' => 'E02003034',
        '9HN' => 'E02003034',
        '9HP' => 'E02003034',
        '9HQ' => 'E02003034',
        '9HR' => 'E02003034',
        '9HS' => 'E02003034',
        '9HT' => 'E02003034',
        '9HU' => 'E02003034',
        '9HW' => 'E02003034',
        '9HY' => 'E02003034',
        '9HZ' => 'E02003034',
        '9JA' => 'E02003034',
        '9JD' => 'E02003034',
        '9JE' => 'E02003034',
        '9JF' => 'E02003034',
        '9JG' => 'E02003034',
        '9JH' => 'E02003034',
        '9JJ' => 'E02003034',
        '9JL' => 'E02003034',
        '9JN' => 'E02003034',
        '9JP' => 'E02003034',
        '9JQ' => 'E02003034',
        '9JR' => 'E02003034',
        '9JS' => 'E02003034',
        '9JT' => 'E02003034',
        '9JU' => 'E02003034',
        '9JW' => 'E02003034',
        '9JX' => 'E02003034',
        '9JY' => 'E02003034',
        '9JZ' => 'E02003034',
        '9LA' => 'E02003034',
        '9LB' => 'E02003034',
        '9LD' => 'E02003034',
        '9LE' => 'E02003034',
        '9LF' => 'E02003034',
        '9LG' => 'E02003034',
        '9LH' => 'E02003034',
        '9LJ' => 'E02003034',
        '9LL' => 'E02003034',
        '9LN' => 'E02003034',
        '9LP' => 'E02003034',
        '9LQ' => 'E02003034',
        '9LT' => 'E02003034',
        '9LU' => 'E02003034',
        '9LW' => 'E02003034',
        '9LX' => 'E02003034',
        '9NB' => 'E02006887',
        '9NF' => 'E02006887',
        '9NG' => 'E02006887',
        '9NH' => 'E02003034',
        '9NP' => 'E02003034',
        '9NS' => 'E02003034',
        '9NT' => 'E02003034',
        '9NU' => 'E02003034',
        '9NW' => 'E02003034',
        '9NX' => 'E02003034',
        '9NY' => 'E02003034',
        '9NZ' => 'E02003034',
        '9PA' => 'E02003034',
        '9PG' => 'E02003034',
        '9PZ' => 'E02003034',
        '9QA' => 'E02003034',
        '9QD' => 'E02003034',
        '9QE' => 'E02003034',
        '9QJ' => 'E02003034',
        '9QL' => 'E02003034',
        '9QN' => 'E02003034',
        '9QP' => 'E02003034',
        '9QR' => 'E02003034',
        '9QS' => 'E02003034',
        '9QT' => 'E02003034',
        '9QW' => 'E02003034',
        '9QX' => 'E02003034',
        '9QY' => 'E02003034',
        '9QZ' => 'E02003034',
        '9RA' => 'E02003034',
        '9RB' => 'E02003034',
        '9RD' => 'E02003034',
        '9RE' => 'E02003034',
        '9RF' => 'E02003034',
        '9RG' => 'E02003034',
        '9RH' => 'E02003034',
        '9RJ' => 'E02003034',
        '9RL' => 'E02003034',
        '9RN' => 'E02003034',
        '9RP' => 'E02003034',
        '9RQ' => 'E02003034',
        '9RR' => 'E02003034',
        '9RS' => 'E02003034',
        '9RT' => 'E02003034',
        '9RU' => 'E02003034',
        '9RW' => 'E02003034',
        '9RX' => 'E02003034',
        '9RY' => 'E02003034',
        '9RZ' => 'E02003034',
        '9SH' => 'E02003034',
        '9SL' => 'E02003034',
        '9TA' => 'E02003034',
        '9TB' => 'E02003034',
        '9TF' => 'E02003034',
        '9TG' => 'E02003034',
        '9TH' => 'E02006889',
        '9TJ' => 'E02003034',
        '9TL' => 'E02003034',
        '9TN' => 'E02003034',
        '9TP' => 'E02003034',
        '9TQ' => 'E02003034',
        '9TS' => 'E02003025',
        '9TW' => 'E02003034',
        '9TX' => 'E02003034',
        '9TY' => 'E02003034',
        '9TZ' => 'E02003034',
        '9UA' => 'E02003034',
        '9UB' => 'E02003034',
        '9UD' => 'E02003034',
        '9UE' => 'E02003034',
        '9UF' => 'E02003034',
        '9UG' => 'E02003034',
        '9UH' => 'E02003034',
        '9UJ' => 'E02003034',
        '9UL' => 'E02003034',
        '9UN' => 'E02003034',
        '9UP' => 'E02003034',
        '9UQ' => 'E02003034',
        '9UR' => 'E02003034',
        '9US' => 'E02003034',
        '9UT' => 'E02003034',
        '9UU' => 'E02003034',
        '9UW' => 'E02003034',
        '9UX' => 'E02003034',
        '9UY' => 'E02003025',
        '9UZ' => 'E02003025',
        '9WZ' => 'E02006887',
        '9XA' => 'E02003025',
        '9XB' => 'E02003025',
        '9XD' => 'E02003025',
        '9XE' => 'E02003034',
        '9XF' => 'E02003034',
        '9XG' => 'E02003034',
        '9XH' => 'E02003034',
        '9XJ' => 'E02003034',
        '9XL' => 'E02003034',
        '9XN' => 'E02003034',
        '9XP' => 'E02003034',
        '9XQ' => 'E02003034',
        '9XR' => 'E02003034',
        '9XS' => 'E02003034',
        '9XT' => 'E02003034',
        '9XW' => 'E02003034',
        '9XX' => 'E02003031',
        '9XY' => 'E02003031',
        '9XZ' => 'E02003034',
        '9YA' => 'E02003034',
        '9YB' => 'E02003034',
        '9YD' => 'E02003034',
        '9YE' => 'E02003034',
        '9YF' => 'E02003034',
        '9YG' => 'E02003034',
        '9YH' => 'E02003034',
        '9YJ' => 'E02003031',
        '9YL' => 'E02003031',
        '9YN' => 'E02003031',
        '9YP' => 'E02003031',
        '9YQ' => 'E02003034',
        '9YR' => 'E02003031',
        '9YS' => 'E02003034',
        '9YT' => 'E02003034',
        '9YU' => 'E02003034',
        '9YW' => 'E02003034',
        '9YX' => 'E02003034',
        '9YY' => 'E02003034',
        '9YZ' => 'E02003034',
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
