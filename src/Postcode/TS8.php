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
final class TS8
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02005751',
        '0AB' => 'E02005751',
        '0AD' => 'E02005751',
        '0AE' => 'E02005751',
        '0AF' => 'E02005751',
        '0AG' => 'E02005751',
        '0AH' => 'E02005751',
        '0AJ' => 'E02005751',
        '0AL' => 'E02005751',
        '0AN' => 'E02005751',
        '0AP' => 'E02005751',
        '0AQ' => 'E02005751',
        '0AU' => 'E02002556',
        '0AW' => 'E02005751',
        '0AX' => 'E02005751',
        '0AY' => 'E02002513',
        '0AZ' => 'E02002513',
        '0BA' => 'E02002556',
        '0BB' => 'E02002556',
        '0BD' => 'E02002556',
        '0BE' => 'E02002556',
        '0BG' => 'E02002556',
        '0BH' => 'E02002556',
        '0BJ' => 'E02002556',
        '0BL' => 'E02002556',
        '0BN' => 'E02002556',
        '0BP' => 'E02002556',
        '0BQ' => 'E02002556',
        '0BS' => 'E02002556',
        '0BT' => 'E02002556',
        '0BW' => 'E02002556',
        '0BX' => 'E02002556',
        '0FA' => 'E02002514',
        '0FS' => 'E02002514',
        '0FT' => 'E02002514',
        '0FX' => 'E02002514',
        '0FY' => 'E02002514',
        '0FZ' => 'E02002514',
        '0GA' => 'E02002514',
        '0GB' => 'E02002514',
        '0GD' => 'E02002514',
        '0RA' => 'E02002514',
        '0RB' => 'E02002514',
        '0RD' => 'E02002514',
        '0RE' => 'E02002514',
        '0RF' => 'E02002514',
        '0RG' => 'E02002514',
        '0RH' => 'E02002514',
        '0RJ' => 'E02002514',
        '0RL' => 'E02002514',
        '0RN' => 'E02002514',
        '0RP' => 'E02002514',
        '0RQ' => 'E02002514',
        '0RR' => 'E02002514',
        '0RS' => 'E02002514',
        '0RT' => 'E02002514',
        '0RU' => 'E02002514',
        '0RW' => 'E02002514',
        '0RX' => 'E02002514',
        '0RY' => 'E02002514',
        '0RZ' => 'E02002514',
        '0SA' => 'E02002514',
        '0SB' => 'E02002514',
        '0SD' => 'E02002514',
        '0SE' => 'E02002514',
        '0SF' => 'E02002514',
        '0SG' => 'E02002514',
        '0SH' => 'E02002514',
        '0SJ' => 'E02002514',
        '0SL' => 'E02002514',
        '0SN' => 'E02002514',
        '0SP' => 'E02002514',
        '0SQ' => 'E02002514',
        '0SR' => 'E02002514',
        '0SS' => 'E02002514',
        '0ST' => 'E02002514',
        '0SU' => 'E02002514',
        '0SW' => 'E02002514',
        '0SX' => 'E02002514',
        '0SY' => 'E02002514',
        '0SZ' => 'E02002514',
        '0TA' => 'E02002514',
        '0TB' => 'E02002514',
        '0TD' => 'E02002514',
        '0TE' => 'E02002514',
        '0TF' => 'E02002514',
        '0TG' => 'E02002514',
        '0TH' => 'E02002514',
        '0TJ' => 'E02002514',
        '0TL' => 'E02002514',
        '0TN' => 'E02002514',
        '0TP' => 'E02002514',
        '0TQ' => 'E02002514',
        '0TR' => 'E02002514',
        '0TS' => 'E02002514',
        '0TT' => 'E02002514',
        '0TU' => 'E02002514',
        '0TW' => 'E02002514',
        '0TX' => 'E02002514',
        '0TY' => 'E02002514',
        '0TZ' => 'E02002514',
        '0UA' => 'E02002514',
        '0UB' => 'E02002514',
        '0UD' => 'E02002514',
        '0UE' => 'E02002514',
        '0UF' => 'E02002514',
        '0UG' => 'E02002514',
        '0UH' => 'E02002514',
        '0UJ' => 'E02002514',
        '0UL' => 'E02002514',
        '0UN' => 'E02002514',
        '0UP' => 'E02002514',
        '0UQ' => 'E02002514',
        '0UR' => 'E02002514',
        '0US' => 'E02002514',
        '0UT' => 'E02002514',
        '0UU' => 'E02002514',
        '0UW' => 'E02002514',
        '0UX' => 'E02002514',
        '0UY' => 'E02002514',
        '0UZ' => 'E02002514',
        '0WA' => 'E02002514',
        '0WB' => 'E02002514',
        '0WG' => 'E02002514',
        '0WH' => 'E02002514',
        '0WJ' => 'E02002514',
        '0WL' => 'E02002514',
        '0WN' => 'E02002514',
        '0WP' => 'E02002514',
        '0WQ' => 'E02002514',
        '0WR' => 'E02002514',
        '0WS' => 'E02002514',
        '0WT' => 'E02002514',
        '0WU' => 'E02002514',
        '0WW' => 'E02002514',
        '0WX' => 'E02002514',
        '0WY' => 'E02002514',
        '0WZ' => 'E02002514',
        '0XA' => 'E02002514',
        '0XB' => 'E02002514',
        '0XD' => 'E02002514',
        '0XE' => 'E02002514',
        '0XF' => 'E02002514',
        '0XG' => 'E02002514',
        '0XH' => 'E02002514',
        '0XJ' => 'E02002514',
        '0XN' => 'E02002514',
        '0XP' => 'E02002514',
        '0XQ' => 'E02002514',
        '0XR' => 'E02002514',
        '0XS' => 'E02002514',
        '0XT' => 'E02002514',
        '0XU' => 'E02002514',
        '0XW' => 'E02002514',
        '0XX' => 'E02002514',
        '0XY' => 'E02002514',
        '0XZ' => 'E02002514',
        '0YA' => 'E02002514',
        '0YB' => 'E02002514',
        '0YD' => 'E02002514',
        '0YE' => 'E02002514',
        '0YF' => 'E02002514',
        '0YG' => 'E02002514',
        '0YH' => 'E02002514',
        '0YJ' => 'E02002514',
        '0YL' => 'E02002514',
        '0YN' => 'E02002514',
        '0YP' => 'E02002514',
        '0YQ' => 'E02002514',
        '0YR' => 'E02002514',
        '0YS' => 'E02002514',
        '0YT' => 'E02002514',
        '0YU' => 'E02002514',
        '0YW' => 'E02002514',
        '0YX' => 'E02002514',
        '0YY' => 'E02002514',
        '0YZ' => 'E02002514',
        '8AD' => 'E02002514',
        '8AG' => 'E02002514',
        '8AQ' => 'E02002514',
        '8AT' => 'E02002514',
        '8AU' => 'E02002514',
        '8AW' => 'E02002514',
        '8AX' => 'E02002514',
        '8BB' => 'E02002514',
        '8BE' => 'E02002514',
        '8BF' => 'E02002514',
        '8BG' => 'E02002514',
        '8BH' => 'E02002514',
        '8BJ' => 'E02002514',
        '8BL' => 'E02002514',
        '8BN' => 'E02002514',
        '8BP' => 'E02002514',
        '8BQ' => 'E02002514',
        '8BR' => 'E02002514',
        '8BS' => 'E02002514',
        '8BT' => 'E02002514',
        '8BU' => 'E02002514',
        '8BX' => 'E02002514',
        '8BY' => 'E02002514',
        '8BZ' => 'E02002514',
        '8DA' => 'E02002514',
        '8DB' => 'E02002514',
        '8DD' => 'E02002514',
        '8DE' => 'E02002514',
        '8DF' => 'E02002514',
        '8DG' => 'E02002514',
        '8DH' => 'E02002514',
        '8DJ' => 'E02002514',
        '8DL' => 'E02002514',
        '8DN' => 'E02002514',
        '8DP' => 'E02002514',
        '8DQ' => 'E02002514',
        '8DR' => 'E02002514',
        '8DS' => 'E02002514',
        '8DT' => 'E02002514',
        '8DU' => 'E02002514',
        '8DW' => 'E02002514',
        '9AA' => 'E02002509',
        '9AB' => 'E02002509',
        '9AD' => 'E02002513',
        '9AE' => 'E02002509',
        '9AF' => 'E02002513',
        '9AG' => 'E02002513',
        '9AH' => 'E02002513',
        '9AJ' => 'E02002513',
        '9AL' => 'E02002513',
        '9AN' => 'E02002513',
        '9AP' => 'E02002513',
        '9AQ' => 'E02002513',
        '9AR' => 'E02002513',
        '9AS' => 'E02002513',
        '9AT' => 'E02002513',
        '9AU' => 'E02002513',
        '9AW' => 'E02002513',
        '9AX' => 'E02002513',
        '9AY' => 'E02002513',
        '9AZ' => 'E02002513',
        '9BA' => 'E02002513',
        '9BB' => 'E02002513',
        '9BD' => 'E02002513',
        '9BE' => 'E02002513',
        '9BF' => 'E02002508',
        '9BG' => 'E02002513',
        '9BH' => 'E02002513',
        '9BJ' => 'E02002513',
        '9BL' => 'E02002513',
        '9BN' => 'E02002513',
        '9BP' => 'E02002513',
        '9BQ' => 'E02002513',
        '9BS' => 'E02002513',
        '9BT' => 'E02002513',
        '9BU' => 'E02002513',
        '9BW' => 'E02002513',
        '9BX' => 'E02002513',
        '9BY' => 'E02002513',
        '9BZ' => 'E02002513',
        '9DA' => 'E02002513',
        '9DB' => 'E02002509',
        '9DD' => 'E02002513',
        '9DE' => 'E02002513',
        '9DF' => 'E02002513',
        '9DG' => 'E02002513',
        '9DH' => 'E02002509',
        '9DJ' => 'E02002513',
        '9DL' => 'E02002513',
        '9DN' => 'E02002509',
        '9DP' => 'E02002513',
        '9DQ' => 'E02002513',
        '9DR' => 'E02002513',
        '9DS' => 'E02002513',
        '9DT' => 'E02002514',
        '9DU' => 'E02002514',
        '9DW' => 'E02002508',
        '9DX' => 'E02002514',
        '9DY' => 'E02002514',
        '9DZ' => 'E02002514',
        '9EA' => 'E02002514',
        '9EB' => 'E02005751',
        '9ED' => 'E02006811',
        '9EE' => 'E02002512',
        '9EF' => 'E02002512',
        '9EG' => 'E02002509',
        '9EH' => 'E02002514',
        '9EJ' => 'E02002509',
        '9EL' => 'E02002513',
        '9EN' => 'E02002513',
        '9EP' => 'E02002513',
        '9EQ' => 'E02002513',
        '9ER' => 'E02002513',
        '9ES' => 'E02002513',
        '9ET' => 'E02002513',
        '9EU' => 'E02002513',
        '9EW' => 'E02002513',
        '9EX' => 'E02002513',
        '9EY' => 'E02002509',
        '9EZ' => 'E02002509',
        '9FA' => 'E02002513',
        '9FB' => 'E02002513',
        '9FD' => 'E02002513',
        '9FE' => 'E02002513',
        '9FF' => 'E02002513',
        '9FG' => 'E02002513',
        '9FH' => 'E02002513',
        '9FJ' => 'E02002513',
        '9FL' => 'E02002508',
        '9FN' => 'E02002508',
        '9FP' => 'E02002513',
        '9FQ' => 'E02002513',
        '9FR' => 'E02002513',
        '9FS' => 'E02002513',
        '9FT' => 'E02002513',
        '9FU' => 'E02002513',
        '9FW' => 'E02002513',
        '9FX' => 'E02002513',
        '9FY' => 'E02002513',
        '9FZ' => 'E02002513',
        '9GA' => 'E02002513',
        '9GB' => 'E02002513',
        '9GD' => 'E02002513',
        '9GE' => 'E02002513',
        '9GF' => 'E02002513',
        '9GG' => 'E02002513',
        '9GH' => 'E02002508',
        '9GL' => 'E02002513',
        '9GN' => 'E02002513',
        '9GQ' => 'E02002514',
        '9HA' => 'E02002513',
        '9HB' => 'E02002513',
        '9HD' => 'E02002513',
        '9HE' => 'E02002513',
        '9HF' => 'E02002513',
        '9HG' => 'E02002513',
        '9HH' => 'E02002513',
        '9HJ' => 'E02002513',
        '9HL' => 'E02002513',
        '9HN' => 'E02002513',
        '9HP' => 'E02002513',
        '9HQ' => 'E02002513',
        '9HR' => 'E02002513',
        '9HS' => 'E02002513',
        '9HT' => 'E02002513',
        '9HU' => 'E02002513',
        '9HW' => 'E02002513',
        '9HX' => 'E02002513',
        '9HY' => 'E02002513',
        '9HZ' => 'E02002513',
        '9JA' => 'E02002513',
        '9JB' => 'E02002513',
        '9JD' => 'E02002513',
        '9JE' => 'E02002513',
        '9JF' => 'E02002513',
        '9JG' => 'E02002513',
        '9JH' => 'E02002513',
        '9JJ' => 'E02002513',
        '9JL' => 'E02002513',
        '9JN' => 'E02002513',
        '9JP' => 'E02002513',
        '9JQ' => 'E02002513',
        '9JR' => 'E02002513',
        '9JS' => 'E02002513',
        '9JT' => 'E02002513',
        '9JU' => 'E02002513',
        '9JW' => 'E02002513',
        '9JX' => 'E02002513',
        '9JY' => 'E02002513',
        '9JZ' => 'E02002513',
        '9LA' => 'E02002513',
        '9LB' => 'E02002513',
        '9LD' => 'E02002513',
        '9LE' => 'E02002513',
        '9LF' => 'E02002513',
        '9LG' => 'E02002513',
        '9LJ' => 'E02002513',
        '9LL' => 'E02002513',
        '9LN' => 'E02002513',
        '9LP' => 'E02002513',
        '9LQ' => 'E02002513',
        '9LR' => 'E02002513',
        '9LS' => 'E02002513',
        '9LT' => 'E02002513',
        '9LU' => 'E02002513',
        '9LW' => 'E02002513',
        '9LX' => 'E02002513',
        '9LY' => 'E02002513',
        '9LZ' => 'E02002509',
        '9NA' => 'E02002513',
        '9NB' => 'E02002513',
        '9ND' => 'E02002513',
        '9NE' => 'E02002513',
        '9NF' => 'E02002513',
        '9NH' => 'E02002513',
        '9NN' => 'E02002514',
        '9NP' => 'E02002513',
        '9NQ' => 'E02002513',
        '9NR' => 'E02002509',
        '9NS' => 'E02002512',
        '9NT' => 'E02002512',
        '9NU' => 'E02002512',
        '9NW' => 'E02002514',
        '9NX' => 'E02002509',
        '9PA' => 'E02002513',
        '9PB' => 'E02002513',
        '9PD' => 'E02002513',
        '9PE' => 'E02002513',
        '9PF' => 'E02002513',
        '9PG' => 'E02002513',
        '9PH' => 'E02002513',
        '9PJ' => 'E02002513',
        '9PL' => 'E02002513',
        '9PN' => 'E02002513',
        '9PP' => 'E02002513',
        '9PQ' => 'E02002513',
        '9PR' => 'E02002513',
        '9PS' => 'E02002513',
        '9PT' => 'E02002513',
        '9PU' => 'E02002513',
        '9PW' => 'E02002513',
        '9PX' => 'E02002513',
        '9PY' => 'E02002513',
        '9PZ' => 'E02002513',
        '9QA' => 'E02002513',
        '9QB' => 'E02002513',
        '9QD' => 'E02002513',
        '9QE' => 'E02002513',
        '9QF' => 'E02002513',
        '9QG' => 'E02002513',
        '9QH' => 'E02002513',
        '9QJ' => 'E02002513',
        '9QP' => 'E02002513',
        '9QQ' => 'E02002513',
        '9QR' => 'E02002512',
        '9QS' => 'E02002512',
        '9QT' => 'E02002512',
        '9QU' => 'E02002512',
        '9QW' => 'E02002513',
        '9QZ' => 'E02002512',
        '9RA' => 'E02002513',
        '9RB' => 'E02002513',
        '9RD' => 'E02002513',
        '9RE' => 'E02002513',
        '9RF' => 'E02002513',
        '9RG' => 'E02002513',
        '9RH' => 'E02002513',
        '9RJ' => 'E02002513',
        '9RP' => 'E02002513',
        '9RQ' => 'E02002513',
        '9RR' => 'E02002513',
        '9RW' => 'E02002513',
        '9RZ' => 'E02002514',
        '9SA' => 'E02002513',
        '9SB' => 'E02002513',
        '9SD' => 'E02002513',
        '9SE' => 'E02002513',
        '9SF' => 'E02002513',
        '9SG' => 'E02002513',
        '9SH' => 'E02002513',
        '9SJ' => 'E02002513',
        '9SL' => 'E02002513',
        '9SN' => 'E02002513',
        '9SP' => 'E02002513',
        '9SQ' => 'E02002513',
        '9TA' => 'E02002512',
        '9TB' => 'E02002513',
        '9TD' => 'E02002513',
        '9TZ' => 'E02002513',
        '9UA' => 'E02002513',
        '9UB' => 'E02002513',
        '9UD' => 'E02002514',
        '9UE' => 'E02002512',
        '9UF' => 'E02002514',
        '9UG' => 'E02002512',
        '9UR' => 'E02002512',
        '9WH' => 'E02002514',
        '9WJ' => 'E02002514',
        '9WL' => 'E02002514',
        '9WN' => 'E02002514',
        '9WP' => 'E02002514',
        '9WQ' => 'E02002514',
        '9WR' => 'E02002514',
        '9WS' => 'E02002514',
        '9WT' => 'E02002514',
        '9WU' => 'E02002514',
        '9WW' => 'E02002514',
        '9WX' => 'E02002514',
        '9WY' => 'E02002514',
        '9WZ' => 'E02002514',
        '9XA' => 'E02002513',
        '9XB' => 'E02002514',
        '9XD' => 'E02002514',
        '9XE' => 'E02002514',
        '9XF' => 'E02002514',
        '9XG' => 'E02002513',
        '9XH' => 'E02002512',
        '9XJ' => 'E02002512',
        '9XL' => 'E02002512',
        '9XN' => 'E02002512',
        '9XP' => 'E02002512',
        '9XQ' => 'E02002512',
        '9XR' => 'E02002512',
        '9XS' => 'E02002512',
        '9XT' => 'E02002512',
        '9XU' => 'E02002512',
        '9XW' => 'E02002512',
        '9XX' => 'E02002512',
        '9XY' => 'E02002512',
        '9XZ' => 'E02002512',
        '9YA' => 'E02002514',
        '9YB' => 'E02002513',
        '9YD' => 'E02002513',
        '9YE' => 'E02002514',
        '9YF' => 'E02002514',
        '9YG' => 'E02002513',
        '9YH' => 'E02002513',
        '9YJ' => 'E02002513',
        '9YL' => 'E02002513',
        '9YN' => 'E02002513',
        '9YP' => 'E02002513',
        '9YQ' => 'E02002513',
        '9YR' => 'E02002514',
        '9YS' => 'E02002513',
        '9YT' => 'E02002514',
        '9YU' => 'E02002514',
        '9YW' => 'E02002514',
        '9YX' => 'E02002514',
        '9YY' => 'E02002513',
        '9YZ' => 'E02002513',
        '9ZD' => 'E02002512',
        '9ZE' => 'E02002512',
        '9ZT' => 'E02002514',
        '9ZX' => 'E02002514',
        '9ZY' => 'E02002514',
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