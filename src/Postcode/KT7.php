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
final class KT7
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02006322',
        '0AB' => 'E02006322',
        '0AD' => 'E02006322',
        '0AE' => 'E02006322',
        '0AF' => 'E02006322',
        '0AG' => 'E02006322',
        '0AH' => 'E02006322',
        '0AJ' => 'E02006322',
        '0AL' => 'E02006322',
        '0AN' => 'E02006322',
        '0AP' => 'E02006321',
        '0AQ' => 'E02006322',
        '0AR' => 'E02006322',
        '0AS' => 'E02006321',
        '0AT' => 'E02006321',
        '0AU' => 'E02006321',
        '0AW' => 'E02006321',
        '0AX' => 'E02006321',
        '0AY' => 'E02006321',
        '0AZ' => 'E02006321',
        '0BA' => 'E02006322',
        '0BB' => 'E02006322',
        '0BD' => 'E02006322',
        '0BE' => 'E02006321',
        '0BF' => 'E02006321',
        '0BG' => 'E02006322',
        '0BH' => 'E02006322',
        '0BJ' => 'E02006322',
        '0BL' => 'E02006321',
        '0BN' => 'E02006321',
        '0BP' => 'E02006321',
        '0BQ' => 'E02006322',
        '0BS' => 'E02006321',
        '0BT' => 'E02006321',
        '0BU' => 'E02006321',
        '0BW' => 'E02006322',
        '0BX' => 'E02006321',
        '0BY' => 'E02006321',
        '0BZ' => 'E02006321',
        '0DA' => 'E02006321',
        '0DB' => 'E02006321',
        '0DD' => 'E02006321',
        '0DE' => 'E02006321',
        '0DF' => 'E02006321',
        '0DG' => 'E02006321',
        '0DH' => 'E02000602',
        '0DJ' => 'E02006325',
        '0DL' => 'E02006321',
        '0DN' => 'E02006325',
        '0DP' => 'E02006325',
        '0DQ' => 'E02006325',
        '0DR' => 'E02006325',
        '0DS' => 'E02006325',
        '0DT' => 'E02006322',
        '0DU' => 'E02006322',
        '0DW' => 'E02006325',
        '0DX' => 'E02006322',
        '0DY' => 'E02006322',
        '0DZ' => 'E02006322',
        '0EA' => 'E02006325',
        '0EB' => 'E02006321',
        '0ED' => 'E02006325',
        '0EE' => 'E02006321',
        '0EF' => 'E02006325',
        '0EG' => 'E02006321',
        '0EH' => 'E02006321',
        '0EJ' => 'E02006325',
        '0EL' => 'E02006321',
        '0EN' => 'E02006321',
        '0EP' => 'E02006321',
        '0EQ' => 'E02006322',
        '0ER' => 'E02006321',
        '0ES' => 'E02006321',
        '0ET' => 'E02006325',
        '0EU' => 'E02006325',
        '0EW' => 'E02006321',
        '0EX' => 'E02006321',
        '0EY' => 'E02006325',
        '0EZ' => 'E02006325',
        '0FA' => 'E02006325',
        '0FB' => 'E02006321',
        '0FD' => 'E02006321',
        '0FE' => 'E02006321',
        '0FF' => 'E02006321',
        '0FG' => 'E02000602',
        '0FH' => 'E02000602',
        '0FJ' => 'E02000602',
        '0FL' => 'E02006325',
        '0FN' => 'E02000602',
        '0FP' => 'E02006321',
        '0FQ' => 'E02000602',
        '0FR' => 'E02006321',
        '0FS' => 'E02000602',
        '0FT' => 'E02006321',
        '0FU' => 'E02006325',
        '0FW' => 'E02000602',
        '0FX' => 'E02006321',
        '0FZ' => 'E02000602',
        '0GA' => 'E02006321',
        '0GB' => 'E02006321',
        '0HA' => 'E02006325',
        '0HB' => 'E02006325',
        '0HD' => 'E02006325',
        '0HE' => 'E02006325',
        '0HF' => 'E02006325',
        '0HG' => 'E02000602',
        '0HH' => 'E02006325',
        '0HJ' => 'E02006325',
        '0HL' => 'E02006325',
        '0HN' => 'E02006325',
        '0HQ' => 'E02006325',
        '0HS' => 'E02006325',
        '0HU' => 'E02006321',
        '0HW' => 'E02006325',
        '0HX' => 'E02006321',
        '0HY' => 'E02006321',
        '0HZ' => 'E02006321',
        '0JA' => 'E02006321',
        '0JB' => 'E02006321',
        '0JD' => 'E02006321',
        '0JE' => 'E02006321',
        '0JF' => 'E02006321',
        '0JG' => 'E02006325',
        '0JH' => 'E02006325',
        '0JJ' => 'E02006325',
        '0JL' => 'E02006325',
        '0JN' => 'E02006325',
        '0JP' => 'E02006325',
        '0JQ' => 'E02006325',
        '0JR' => 'E02006325',
        '0JS' => 'E02006325',
        '0JT' => 'E02006325',
        '0JU' => 'E02000602',
        '0JW' => 'E02006325',
        '0JX' => 'E02006325',
        '0JY' => 'E02006325',
        '0JZ' => 'E02006325',
        '0LA' => 'E02006325',
        '0LB' => 'E02006321',
        '0LD' => 'E02000602',
        '0LE' => 'E02006321',
        '0LF' => 'E02006321',
        '0LG' => 'E02006321',
        '0LH' => 'E02006321',
        '0LJ' => 'E02006325',
        '0LL' => 'E02006325',
        '0LN' => 'E02006325',
        '0LP' => 'E02006325',
        '0LQ' => 'E02006321',
        '0LR' => 'E02006325',
        '0LS' => 'E02006325',
        '0LT' => 'E02006325',
        '0LU' => 'E02006325',
        '0LW' => 'E02006325',
        '0LX' => 'E02006325',
        '0LY' => 'E02000602',
        '0LZ' => 'E02000602',
        '0NA' => 'E02006325',
        '0NB' => 'E02006325',
        '0NE' => 'E02006321',
        '0NF' => 'E02006321',
        '0NG' => 'E02006321',
        '0NH' => 'E02006321',
        '0NJ' => 'E02006321',
        '0NL' => 'E02006321',
        '0NN' => 'E02006321',
        '0NP' => 'E02006321',
        '0NQ' => 'E02006321',
        '0NR' => 'E02006321',
        '0NS' => 'E02006321',
        '0NU' => 'E02006321',
        '0NW' => 'E02006321',
        '0NX' => 'E02006321',
        '0NY' => 'E02006321',
        '0PA' => 'E02006321',
        '0PB' => 'E02006321',
        '0PD' => 'E02006321',
        '0PE' => 'E02006321',
        '0PF' => 'E02006321',
        '0PG' => 'E02006321',
        '0PH' => 'E02006321',
        '0PJ' => 'E02006321',
        '0PL' => 'E02006321',
        '0PN' => 'E02006321',
        '0PP' => 'E02006321',
        '0PQ' => 'E02006321',
        '0PR' => 'E02006321',
        '0PS' => 'E02006321',
        '0PT' => 'E02006321',
        '0PU' => 'E02006321',
        '0PW' => 'E02006321',
        '0PX' => 'E02006321',
        '0PY' => 'E02006321',
        '0PZ' => 'E02006321',
        '0QA' => 'E02006321',
        '0QB' => 'E02006321',
        '0QD' => 'E02006321',
        '0QE' => 'E02006321',
        '0QF' => 'E02006321',
        '0QG' => 'E02006321',
        '0QH' => 'E02006321',
        '0QJ' => 'E02006321',
        '0QL' => 'E02006321',
        '0QN' => 'E02006321',
        '0QP' => 'E02006321',
        '0QQ' => 'E02006321',
        '0QR' => 'E02006321',
        '0QS' => 'E02006321',
        '0QT' => 'E02006321',
        '0QU' => 'E02006321',
        '0QW' => 'E02006321',
        '0QX' => 'E02006321',
        '0QY' => 'E02006321',
        '0QZ' => 'E02006321',
        '0RA' => 'E02006321',
        '0RB' => 'E02006321',
        '0RD' => 'E02006321',
        '0RE' => 'E02006321',
        '0RF' => 'E02000602',
        '0RG' => 'E02006321',
        '0RH' => 'E02006321',
        '0RJ' => 'E02006321',
        '0RL' => 'E02006321',
        '0RN' => 'E02006321',
        '0RP' => 'E02006321',
        '0RQ' => 'E02006321',
        '0RR' => 'E02006321',
        '0RS' => 'E02006321',
        '0RT' => 'E02006321',
        '0RU' => 'E02006321',
        '0RW' => 'E02006321',
        '0RX' => 'E02006321',
        '0RY' => 'E02006321',
        '0RZ' => 'E02006321',
        '0SA' => 'E02006321',
        '0SB' => 'E02000602',
        '0SD' => 'E02006321',
        '0SE' => 'E02006321',
        '0SF' => 'E02006321',
        '0SG' => 'E02006321',
        '0SH' => 'E02006321',
        '0SJ' => 'E02006321',
        '0SL' => 'E02006321',
        '0SN' => 'E02006321',
        '0SP' => 'E02006321',
        '0SQ' => 'E02006321',
        '0SR' => 'E02006321',
        '0SS' => 'E02006321',
        '0ST' => 'E02006321',
        '0SU' => 'E02006321',
        '0SW' => 'E02006321',
        '0SX' => 'E02006321',
        '0SY' => 'E02006321',
        '0SZ' => 'E02006321',
        '0TA' => 'E02006321',
        '0TB' => 'E02006321',
        '0TD' => 'E02006321',
        '0TE' => 'E02006321',
        '0TF' => 'E02006321',
        '0TG' => 'E02006321',
        '0TH' => 'E02006321',
        '0TJ' => 'E02006321',
        '0TL' => 'E02006321',
        '0TN' => 'E02006321',
        '0TP' => 'E02006321',
        '0TQ' => 'E02006321',
        '0TR' => 'E02006321',
        '0TS' => 'E02006321',
        '0TT' => 'E02006321',
        '0TU' => 'E02006321',
        '0TW' => 'E02006321',
        '0TX' => 'E02006321',
        '0TY' => 'E02006321',
        '0TZ' => 'E02000602',
        '0UB' => 'E02006321',
        '0UD' => 'E02006322',
        '0UE' => 'E02006321',
        '0UF' => 'E02006322',
        '0UG' => 'E02006321',
        '0UH' => 'E02006321',
        '0UJ' => 'E02006321',
        '0UL' => 'E02006321',
        '0UN' => 'E02006321',
        '0UP' => 'E02006321',
        '0UQ' => 'E02006321',
        '0UR' => 'E02006322',
        '0US' => 'E02000602',
        '0UT' => 'E02006322',
        '0UU' => 'E02006322',
        '0UW' => 'E02006321',
        '0UX' => 'E02006322',
        '0UY' => 'E02000602',
        '0UZ' => 'E02006322',
        '0WA' => 'E02000602',
        '0WB' => 'E02006325',
        '0WD' => 'E02006325',
        '0WE' => 'E02006321',
        '0WF' => 'E02000602',
        '0WG' => 'E02000602',
        '0WH' => 'E02000602',
        '0WJ' => 'E02000602',
        '0WL' => 'E02000602',
        '0WN' => 'E02000602',
        '0WP' => 'E02000602',
        '0WQ' => 'E02000602',
        '0WR' => 'E02000602',
        '0WS' => 'E02000602',
        '0WT' => 'E02000602',
        '0WU' => 'E02000602',
        '0WW' => 'E02006321',
        '0WX' => 'E02000602',
        '0WY' => 'E02000602',
        '0WZ' => 'E02000602',
        '0XA' => 'E02006321',
        '0XB' => 'E02006322',
        '0XD' => 'E02000602',
        '0XE' => 'E02006322',
        '0XF' => 'E02006322',
        '0XG' => 'E02006322',
        '0XH' => 'E02006322',
        '0XJ' => 'E02000602',
        '0XL' => 'E02006322',
        '0XN' => 'E02006322',
        '0XP' => 'E02006322',
        '0XQ' => 'E02006322',
        '0XR' => 'E02006322',
        '0XS' => 'E02006322',
        '0XT' => 'E02006322',
        '0XU' => 'E02006322',
        '0XW' => 'E02006322',
        '0XX' => 'E02006322',
        '0XY' => 'E02006322',
        '0XZ' => 'E02006322',
        '0YA' => 'E02006322',
        '0YB' => 'E02006322',
        '0YD' => 'E02006325',
        '0YE' => 'E02000602',
        '0YF' => 'E02006325',
        '0YG' => 'E02006321',
        '0YH' => 'E02006321',
        '0YJ' => 'E02006321',
        '0YL' => 'E02006321',
        '0YN' => 'E02006321',
        '0YP' => 'E02006321',
        '0YQ' => 'E02006321',
        '0YR' => 'E02006321',
        '0YS' => 'E02006321',
        '0YT' => 'E02000602',
        '0YU' => 'E02000602',
        '0YW' => 'E02006321',
        '0YX' => 'E02006321',
        '0YY' => 'E02000602',
        '0YZ' => 'E02000602',
        '0ZA' => 'E02000602',
        '0ZB' => 'E02006321',
        '0ZD' => 'E02006321',
        '0ZE' => 'E02006321',
        '0ZF' => 'E02000602',
        '0ZG' => 'E02006321',
        '0ZH' => 'E02000602',
        '0ZJ' => 'E02006321',
        '0ZL' => 'E02006322',
        '0ZN' => 'E02006322',
        '0ZP' => 'E02006321',
        '0ZQ' => 'E02006322',
        '0ZR' => 'E02000602',
        '0ZS' => 'E02000602',
        '0ZT' => 'E02000602',
        '0ZU' => 'E02006321',
        '0ZW' => 'E02000602',
        '0ZX' => 'E02006321',
        '0ZY' => 'E02000602',
        '0ZZ' => 'E02000602',
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