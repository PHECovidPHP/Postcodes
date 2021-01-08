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
final class TN21
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02004412',
        '0AB' => 'E02004412',
        '0AD' => 'E02004412',
        '0AE' => 'E02004412',
        '0AF' => 'E02004412',
        '0AG' => 'E02004412',
        '0AH' => 'E02004412',
        '0AJ' => 'E02004412',
        '0AL' => 'E02004412',
        '0AN' => 'E02004412',
        '0AP' => 'E02004412',
        '0AQ' => 'E02004412',
        '0AR' => 'E02004412',
        '0AS' => 'E02004412',
        '0AT' => 'E02004412',
        '0AU' => 'E02004412',
        '0AW' => 'E02004412',
        '0AX' => 'E02004412',
        '0AY' => 'E02004412',
        '0AZ' => 'E02004412',
        '0BA' => 'E02004412',
        '0BB' => 'E02004412',
        '0BD' => 'E02004413',
        '0BE' => 'E02004413',
        '0BF' => 'E02004412',
        '0BG' => 'E02004413',
        '0BH' => 'E02004413',
        '0BJ' => 'E02004413',
        '0BL' => 'E02004413',
        '0BN' => 'E02004413',
        '0BP' => 'E02004413',
        '0BQ' => 'E02004412',
        '0BS' => 'E02004413',
        '0BT' => 'E02004413',
        '0BU' => 'E02004413',
        '0BW' => 'E02004412',
        '0BX' => 'E02004413',
        '0BY' => 'E02004413',
        '0BZ' => 'E02004413',
        '0DA' => 'E02004413',
        '0DB' => 'E02004413',
        '0DD' => 'E02004413',
        '0DE' => 'E02004413',
        '0DF' => 'E02004413',
        '0DG' => 'E02004413',
        '0DH' => 'E02004413',
        '0DJ' => 'E02004413',
        '0DL' => 'E02004412',
        '0DN' => 'E02004413',
        '0DP' => 'E02004412',
        '0DQ' => 'E02004412',
        '0DR' => 'E02004412',
        '0DS' => 'E02004413',
        '0DT' => 'E02004413',
        '0DU' => 'E02004413',
        '0DW' => 'E02004412',
        '0DX' => 'E02004413',
        '0DY' => 'E02004413',
        '0DZ' => 'E02004413',
        '0EA' => 'E02004413',
        '0EB' => 'E02004413',
        '0ED' => 'E02004413',
        '0EE' => 'E02004413',
        '0EF' => 'E02004413',
        '0EG' => 'E02004413',
        '0EH' => 'E02004413',
        '0EJ' => 'E02004413',
        '0EL' => 'E02004413',
        '0EN' => 'E02004413',
        '0EP' => 'E02004413',
        '0EQ' => 'E02004413',
        '0ER' => 'E02004413',
        '0ES' => 'E02004413',
        '0ET' => 'E02004413',
        '0EU' => 'E02004413',
        '0EW' => 'E02004413',
        '0EX' => 'E02004413',
        '0EY' => 'E02004413',
        '0EZ' => 'E02004413',
        '0FB' => 'E02004413',
        '0FD' => 'E02004412',
        '0FE' => 'E02004413',
        '0FH' => 'E02004413',
        '0FJ' => 'E02004413',
        '0FL' => 'E02004413',
        '0FN' => 'E02004413',
        '0FP' => 'E02004412',
        '0FQ' => 'E02004412',
        '0FR' => 'E02004412',
        '0FS' => 'E02004413',
        '0FT' => 'E02004413',
        '0FW' => 'E02004412',
        '0FX' => 'E02004413',
        '0FY' => 'E02004412',
        '0GA' => 'E02004413',
        '0GE' => 'E02004413',
        '0GF' => 'E02004413',
        '0HA' => 'E02004413',
        '0HB' => 'E02004413',
        '0HD' => 'E02004413',
        '0HE' => 'E02004413',
        '0HF' => 'E02004413',
        '0HG' => 'E02004413',
        '0HH' => 'E02004413',
        '0HJ' => 'E02004413',
        '0HL' => 'E02004413',
        '0HN' => 'E02004413',
        '0HP' => 'E02004413',
        '0HQ' => 'E02004413',
        '0HR' => 'E02004413',
        '0HW' => 'E02004413',
        '0HX' => 'E02004413',
        '0HZ' => 'E02004413',
        '0JA' => 'E02004413',
        '0JB' => 'E02004413',
        '0JD' => 'E02004413',
        '0JE' => 'E02004413',
        '0JF' => 'E02004413',
        '0JG' => 'E02004413',
        '0JH' => 'E02004413',
        '0JJ' => 'E02004413',
        '0JL' => 'E02004413',
        '0JN' => 'E02004415',
        '0JP' => 'E02004415',
        '0JQ' => 'E02004412',
        '0JR' => 'E02004415',
        '0JS' => 'E02004415',
        '0JT' => 'E02004415',
        '0JU' => 'E02004415',
        '0JW' => 'E02004415',
        '0JX' => 'E02004415',
        '0JY' => 'E02004420',
        '0JZ' => 'E02004412',
        '0LA' => 'E02004415',
        '0LB' => 'E02004415',
        '0LD' => 'E02004415',
        '0LE' => 'E02004413',
        '0LF' => 'E02004413',
        '0LG' => 'E02004413',
        '0LH' => 'E02004413',
        '0LJ' => 'E02004413',
        '0LL' => 'E02004415',
        '0LN' => 'E02004412',
        '0LS' => 'E02004412',
        '0LT' => 'E02004412',
        '0LU' => 'E02004412',
        '0LX' => 'E02004412',
        '0LY' => 'E02004412',
        '0LZ' => 'E02004413',
        '0NA' => 'E02004412',
        '0NB' => 'E02004412',
        '0ND' => 'E02004412',
        '0NE' => 'E02004410',
        '0NG' => 'E02004410',
        '0NH' => 'E02004410',
        '0NJ' => 'E02004410',
        '0NL' => 'E02004410',
        '0NN' => 'E02004410',
        '0NP' => 'E02004410',
        '0NR' => 'E02004410',
        '0NS' => 'E02004410',
        '0NT' => 'E02004410',
        '0NU' => 'E02004412',
        '0NX' => 'E02004412',
        '0NY' => 'E02004410',
        '0PA' => 'E02004410',
        '0PB' => 'E02004410',
        '0PD' => 'E02004410',
        '0PE' => 'E02004413',
        '0PG' => 'E02004410',
        '0PH' => 'E02004410',
        '0PJ' => 'E02004410',
        '0PL' => 'E02004410',
        '0PN' => 'E02004410',
        '0PP' => 'E02004413',
        '0PR' => 'E02004413',
        '0QA' => 'E02004413',
        '0QB' => 'E02004413',
        '0QD' => 'E02004412',
        '0QE' => 'E02004412',
        '0QF' => 'E02004412',
        '0QG' => 'E02004412',
        '0QH' => 'E02004412',
        '0QJ' => 'E02004412',
        '0QL' => 'E02004410',
        '0QN' => 'E02004410',
        '0QP' => 'E02004410',
        '0QR' => 'E02004410',
        '0QS' => 'E02004410',
        '0QT' => 'E02004410',
        '0QU' => 'E02004410',
        '0QW' => 'E02004410',
        '0QX' => 'E02004410',
        '0QY' => 'E02004410',
        '0QZ' => 'E02004413',
        '0RA' => 'E02004410',
        '0RB' => 'E02004410',
        '0RD' => 'E02004410',
        '0RE' => 'E02004410',
        '0RG' => 'E02004410',
        '0RH' => 'E02004410',
        '0RJ' => 'E02004410',
        '0RL' => 'E02004410',
        '0RN' => 'E02004410',
        '0RP' => 'E02004410',
        '0RR' => 'E02004410',
        '0RS' => 'E02004410',
        '0RT' => 'E02004410',
        '0RU' => 'E02004410',
        '0RX' => 'E02004410',
        '0RY' => 'E02004410',
        '0SA' => 'E02004410',
        '0SB' => 'E02004410',
        '0SH' => 'E02004412',
        '0SJ' => 'E02004412',
        '0SL' => 'E02004412',
        '0SN' => 'E02004412',
        '0SP' => 'E02004413',
        '0SQ' => 'E02004412',
        '0SR' => 'E02004413',
        '0SS' => 'E02004413',
        '0ST' => 'E02004413',
        '0SU' => 'E02004413',
        '0SX' => 'E02004413',
        '0SY' => 'E02004413',
        '0SZ' => 'E02004412',
        '0TA' => 'E02004413',
        '0TB' => 'E02004410',
        '0TD' => 'E02004410',
        '0TE' => 'E02004410',
        '0TF' => 'E02004410',
        '0TG' => 'E02004410',
        '0TH' => 'E02004412',
        '0TJ' => 'E02004413',
        '0TL' => 'E02004413',
        '0TN' => 'E02004413',
        '0TP' => 'E02004413',
        '0TQ' => 'E02004413',
        '0TR' => 'E02004413',
        '0TS' => 'E02004413',
        '0TT' => 'E02004413',
        '0TU' => 'E02004413',
        '0TW' => 'E02004413',
        '0TX' => 'E02004413',
        '0TY' => 'E02004413',
        '0TZ' => 'E02004413',
        '0UA' => 'E02004413',
        '0UB' => 'E02004413',
        '0UD' => 'E02004413',
        '0UE' => 'E02004412',
        '0UF' => 'E02004413',
        '0UG' => 'E02004413',
        '0UH' => 'E02004412',
        '0UJ' => 'E02004413',
        '0UL' => 'E02004412',
        '0UP' => 'E02004412',
        '0UQ' => 'E02004413',
        '0UR' => 'E02004412',
        '0UT' => 'E02004412',
        '0UU' => 'E02004412',
        '0UW' => 'E02004412',
        '0UX' => 'E02004412',
        '0UY' => 'E02004412',
        '0UZ' => 'E02004412',
        '0WA' => 'E02004412',
        '0WB' => 'E02004412',
        '0WD' => 'E02004412',
        '0WE' => 'E02004412',
        '0WG' => 'E02004412',
        '0WH' => 'E02004412',
        '0WJ' => 'E02004412',
        '0WL' => 'E02004412',
        '0WN' => 'E02004412',
        '0WP' => 'E02004412',
        '0WQ' => 'E02004412',
        '0WR' => 'E02004412',
        '0WS' => 'E02004412',
        '0WT' => 'E02004412',
        '0WU' => 'E02004412',
        '0WW' => 'E02004412',
        '0WX' => 'E02004412',
        '0WY' => 'E02004412',
        '0WZ' => 'E02004412',
        '0XA' => 'E02004412',
        '0XB' => 'E02004412',
        '0XD' => 'E02004412',
        '0XE' => 'E02004412',
        '0XF' => 'E02004412',
        '0XG' => 'E02004412',
        '0XH' => 'E02004412',
        '0XJ' => 'E02004412',
        '0XL' => 'E02004412',
        '0XN' => 'E02004412',
        '0XP' => 'E02004412',
        '0XQ' => 'E02004412',
        '0XR' => 'E02004412',
        '0XS' => 'E02004412',
        '0XT' => 'E02004412',
        '0XU' => 'E02004412',
        '0XW' => 'E02004412',
        '0XX' => 'E02004412',
        '0XY' => 'E02004412',
        '0XZ' => 'E02004412',
        '0YA' => 'E02004412',
        '0YB' => 'E02004412',
        '0YD' => 'E02004413',
        '0YE' => 'E02004412',
        '0YH' => 'E02004412',
        '0YN' => 'E02004413',
        '0YP' => 'E02004412',
        '0YQ' => 'E02004412',
        '0YS' => 'E02004412',
        '0YT' => 'E02004413',
        '0YU' => 'E02004412',
        '0YZ' => 'E02004412',
        '0ZA' => 'E02004412',
        '0ZB' => 'E02004412',
        '0ZD' => 'E02004412',
        '0ZE' => 'E02004412',
        '0ZF' => 'E02004412',
        '0ZG' => 'E02004412',
        '0ZH' => 'E02004412',
        '0ZJ' => 'E02004412',
        '0ZL' => 'E02004412',
        '0ZN' => 'E02004412',
        '0ZP' => 'E02004412',
        '0ZQ' => 'E02004412',
        '0ZR' => 'E02004412',
        '0ZS' => 'E02004412',
        '0ZU' => 'E02004412',
        '0ZW' => 'E02004412',
        '0ZX' => 'E02004412',
        '0ZY' => 'E02004412',
        '0ZZ' => 'E02004412',
        '1AA' => 'E02004412',
        '1AB' => 'E02004412',
        '1AD' => 'E02004412',
        '1AE' => 'E02004412',
        '1AF' => 'E02004412',
        '1AG' => 'E02004412',
        '1AH' => 'E02004412',
        '1AJ' => 'E02004412',
        '1AL' => 'E02004412',
        '1AN' => 'E02004412',
        '1AP' => 'E02004412',
        '1AQ' => 'E02004412',
        '1AR' => 'E02004412',
        '1AS' => 'E02004412',
        '1AT' => 'E02004412',
        '1AU' => 'E02004412',
        '1AW' => 'E02004412',
        '1AX' => 'E02004412',
        '1AY' => 'E02004412',
        '1AZ' => 'E02004412',
        '1BA' => 'E02004412',
        '1BB' => 'E02004412',
        '1BD' => 'E02004412',
        '1BE' => 'E02004412',
        '1BF' => 'E02004412',
        '1BG' => 'E02004412',
        '1BH' => 'E02004412',
        '1BJ' => 'E02004412',
        '1BL' => 'E02004412',
        '1BN' => 'E02004412',
        '1BP' => 'E02004412',
        '1BQ' => 'E02004412',
        '1BR' => 'E02004412',
        '1BS' => 'E02004412',
        '1BT' => 'E02004412',
        '1BU' => 'E02004412',
        '1BW' => 'E02004412',
        '1BX' => 'E02004412',
        '1BY' => 'E02004412',
        '1BZ' => 'E02004412',
        '1DA' => 'E02004412',
        '1DB' => 'E02004412',
        '1DD' => 'E02004412',
        '1DE' => 'E02004412',
        '1DF' => 'E02004412',
        '1DG' => 'E02004412',
        '1DH' => 'E02004412',
        '1DJ' => 'E02004412',
        '1DL' => 'E02004412',
        '1DN' => 'E02004412',
        '1DP' => 'E02004412',
        '1DQ' => 'E02004412',
        '1DR' => 'E02004412',
        '1DS' => 'E02004412',
        '1DT' => 'E02004412',
        '1DU' => 'E02004412',
        '1DW' => 'E02004412',
        '1DX' => 'E02004412',
        '8AA' => 'E02004412',
        '8AB' => 'E02004412',
        '8AD' => 'E02004412',
        '8AE' => 'E02004412',
        '8AF' => 'E02004412',
        '8AG' => 'E02004412',
        '8AH' => 'E02004412',
        '8AJ' => 'E02004412',
        '8AL' => 'E02004412',
        '8AN' => 'E02004412',
        '8AP' => 'E02004412',
        '8AQ' => 'E02004412',
        '8AR' => 'E02004412',
        '8AS' => 'E02004412',
        '8AT' => 'E02004412',
        '8AU' => 'E02004412',
        '8AW' => 'E02004412',
        '8AX' => 'E02004412',
        '8AY' => 'E02004412',
        '8AZ' => 'E02004412',
        '8BA' => 'E02004412',
        '8BB' => 'E02004412',
        '8BD' => 'E02004412',
        '8BE' => 'E02004412',
        '8BF' => 'E02004412',
        '8BG' => 'E02004412',
        '8BH' => 'E02004412',
        '8BJ' => 'E02004412',
        '8BL' => 'E02004412',
        '8BN' => 'E02004412',
        '8BP' => 'E02004412',
        '8BQ' => 'E02004412',
        '8BS' => 'E02004412',
        '8BT' => 'E02004412',
        '8BU' => 'E02004412',
        '8BW' => 'E02004412',
        '8BX' => 'E02004412',
        '8BY' => 'E02004412',
        '8BZ' => 'E02004412',
        '8DA' => 'E02004412',
        '8DB' => 'E02004412',
        '8DD' => 'E02004412',
        '8DE' => 'E02004412',
        '8DF' => 'E02004412',
        '8DG' => 'E02004412',
        '8DH' => 'E02004412',
        '8DJ' => 'E02004412',
        '8DL' => 'E02004412',
        '8DN' => 'E02004412',
        '8DP' => 'E02004412',
        '8DQ' => 'E02004412',
        '8DR' => 'E02004412',
        '8DS' => 'E02004412',
        '8DT' => 'E02004412',
        '8DU' => 'E02004413',
        '8DW' => 'E02004412',
        '8DX' => 'E02004412',
        '8DY' => 'E02004412',
        '8DZ' => 'E02004412',
        '8EA' => 'E02004412',
        '8EB' => 'E02004412',
        '8ED' => 'E02004412',
        '8EE' => 'E02004412',
        '8EF' => 'E02004412',
        '8EG' => 'E02004412',
        '8EH' => 'E02004412',
        '8EJ' => 'E02004412',
        '8EL' => 'E02004412',
        '8EN' => 'E02004412',
        '8EP' => 'E02004412',
        '8EQ' => 'E02004412',
        '8ER' => 'E02004412',
        '8ES' => 'E02004412',
        '8ET' => 'E02004412',
        '8EU' => 'E02004412',
        '8EW' => 'E02004412',
        '8EX' => 'E02004412',
        '8EY' => 'E02004412',
        '8EZ' => 'E02004412',
        '8FA' => 'E02004412',
        '8FB' => 'E02004412',
        '8FD' => 'E02004412',
        '8FE' => 'E02004412',
        '8FH' => 'E02004412',
        '8FJ' => 'E02004412',
        '8FL' => 'E02004412',
        '8FN' => 'E02004412',
        '8FP' => 'E02004413',
        '8FQ' => 'E02004412',
        '8GA' => 'E02004412',
        '8GB' => 'E02004412',
        '8GD' => 'E02004412',
        '8GE' => 'E02004412',
        '8GT' => 'E02004412',
        '8GU' => 'E02004412',
        '8GW' => 'E02004412',
        '8GX' => 'E02004412',
        '8GY' => 'E02004412',
        '8GZ' => 'E02004412',
        '8HA' => 'E02004412',
        '8HB' => 'E02004412',
        '8HD' => 'E02004412',
        '8HE' => 'E02004412',
        '8HF' => 'E02004412',
        '8HG' => 'E02004412',
        '8HH' => 'E02004412',
        '8HJ' => 'E02004412',
        '8HL' => 'E02004412',
        '8HN' => 'E02004412',
        '8HP' => 'E02004412',
        '8HQ' => 'E02004412',
        '8HR' => 'E02004412',
        '8HS' => 'E02004412',
        '8HT' => 'E02004412',
        '8HU' => 'E02004412',
        '8HW' => 'E02004412',
        '8HX' => 'E02004412',
        '8HY' => 'E02004412',
        '8HZ' => 'E02004412',
        '8JA' => 'E02004412',
        '8JB' => 'E02004412',
        '8JD' => 'E02004412',
        '8JE' => 'E02004412',
        '8JF' => 'E02004412',
        '8JG' => 'E02004412',
        '8JH' => 'E02004412',
        '8JJ' => 'E02004412',
        '8JL' => 'E02004412',
        '8JN' => 'E02004412',
        '8JP' => 'E02004412',
        '8JQ' => 'E02004412',
        '8JR' => 'E02004412',
        '8JS' => 'E02004412',
        '8JT' => 'E02004412',
        '8JU' => 'E02004412',
        '8JW' => 'E02004412',
        '8JX' => 'E02004412',
        '8JY' => 'E02004412',
        '8JZ' => 'E02004412',
        '8LA' => 'E02004412',
        '8LB' => 'E02004412',
        '8LD' => 'E02004412',
        '8LE' => 'E02004412',
        '8LG' => 'E02004412',
        '8LH' => 'E02004412',
        '8LJ' => 'E02004412',
        '8LL' => 'E02004412',
        '8LP' => 'E02004412',
        '8LR' => 'E02004412',
        '8LS' => 'E02004412',
        '8LU' => 'E02004412',
        '8LW' => 'E02004412',
        '8LX' => 'E02004412',
        '8NA' => 'E02004412',
        '8NB' => 'E02004412',
        '8ND' => 'E02004412',
        '8NE' => 'E02004412',
        '8NF' => 'E02004412',
        '8NG' => 'E02004412',
        '8NH' => 'E02004412',
        '8NJ' => 'E02004412',
        '8NL' => 'E02004412',
        '8NN' => 'E02004412',
        '8NP' => 'E02004412',
        '8NQ' => 'E02004413',
        '8NR' => 'E02004413',
        '8NS' => 'E02004413',
        '8NT' => 'E02004413',
        '8NU' => 'E02004413',
        '8NW' => 'E02004413',
        '8NX' => 'E02004412',
        '8NY' => 'E02004412',
        '8NZ' => 'E02004412',
        '8PA' => 'E02004413',
        '8PB' => 'E02004412',
        '8PD' => 'E02004412',
        '8PE' => 'E02004412',
        '8PF' => 'E02004412',
        '8PG' => 'E02004412',
        '8PH' => 'E02004412',
        '8PJ' => 'E02004412',
        '8PL' => 'E02004412',
        '8PN' => 'E02004412',
        '8PP' => 'E02004412',
        '8PT' => 'E02004413',
        '8PU' => 'E02004413',
        '8PX' => 'E02004413',
        '8PY' => 'E02004413',
        '8PZ' => 'E02004412',
        '8QA' => 'E02004413',
        '8QB' => 'E02004413',
        '8QH' => 'E02004412',
        '8QJ' => 'E02004413',
        '8QL' => 'E02004412',
        '8QN' => 'E02004412',
        '8QP' => 'E02004412',
        '8QQ' => 'E02004412',
        '8QR' => 'E02004412',
        '8QS' => 'E02004413',
        '8QT' => 'E02004412',
        '8QU' => 'E02004412',
        '8QW' => 'E02004412',
        '8QX' => 'E02004413',
        '8QY' => 'E02004413',
        '8QZ' => 'E02004413',
        '8RA' => 'E02004413',
        '8RB' => 'E02004413',
        '8RD' => 'E02004413',
        '8RE' => 'E02004413',
        '8RF' => 'E02004413',
        '8RG' => 'E02004413',
        '8RH' => 'E02004413',
        '8RJ' => 'E02004413',
        '8RL' => 'E02004413',
        '8RN' => 'E02004413',
        '8RR' => 'E02004413',
        '8RS' => 'E02004412',
        '8RT' => 'E02004413',
        '8RU' => 'E02004413',
        '8RX' => 'E02004413',
        '8RY' => 'E02004413',
        '8RZ' => 'E02004413',
        '8SA' => 'E02004413',
        '8SB' => 'E02004413',
        '8SD' => 'E02004413',
        '8SE' => 'E02004413',
        '8SF' => 'E02004413',
        '8SG' => 'E02004413',
        '8SH' => 'E02004413',
        '8SJ' => 'E02004413',
        '8SL' => 'E02004413',
        '8SN' => 'E02004413',
        '8SP' => 'E02004413',
        '8SR' => 'E02004413',
        '8SS' => 'E02004413',
        '8ST' => 'E02004413',
        '8SU' => 'E02004413',
        '8SW' => 'E02004413',
        '8SX' => 'E02004413',
        '8SY' => 'E02004413',
        '8SZ' => 'E02004412',
        '8TA' => 'E02004413',
        '8TB' => 'E02004413',
        '8TD' => 'E02004413',
        '8TE' => 'E02004413',
        '8TG' => 'E02004413',
        '8TH' => 'E02004413',
        '8TJ' => 'E02004412',
        '8TN' => 'E02004413',
        '8TP' => 'E02004413',
        '8TR' => 'E02004413',
        '8TS' => 'E02004413',
        '8TT' => 'E02004413',
        '8TU' => 'E02004413',
        '8TW' => 'E02004413',
        '8TX' => 'E02004413',
        '8TY' => 'E02004413',
        '8TZ' => 'E02004413',
        '8UA' => 'E02004413',
        '8UB' => 'E02004413',
        '8UD' => 'E02004413',
        '8UE' => 'E02004413',
        '8UF' => 'E02004413',
        '8UG' => 'E02004413',
        '8UH' => 'E02004413',
        '8UJ' => 'E02004413',
        '8UL' => 'E02004413',
        '8UN' => 'E02004413',
        '8UP' => 'E02004413',
        '8UR' => 'E02004413',
        '8UT' => 'E02004413',
        '8UU' => 'E02004413',
        '8UX' => 'E02004407',
        '8UY' => 'E02004413',
        '8WA' => 'E02004412',
        '8WB' => 'E02004412',
        '8WD' => 'E02004412',
        '8WE' => 'E02004412',
        '8WF' => 'E02004412',
        '8WG' => 'E02004412',
        '8WH' => 'E02004412',
        '8WJ' => 'E02004413',
        '8WL' => 'E02004412',
        '8WN' => 'E02004412',
        '8WP' => 'E02004412',
        '8WQ' => 'E02004412',
        '8WR' => 'E02004412',
        '8WS' => 'E02004412',
        '8WT' => 'E02004412',
        '8WU' => 'E02004412',
        '8WW' => 'E02004412',
        '8WX' => 'E02004412',
        '8WY' => 'E02004412',
        '8WZ' => 'E02004412',
        '8XA' => 'E02004413',
        '8XB' => 'E02004413',
        '8XD' => 'E02004413',
        '8XE' => 'E02004413',
        '8XF' => 'E02004412',
        '8XG' => 'E02004413',
        '8XH' => 'E02004413',
        '8XJ' => 'E02004413',
        '8XL' => 'E02004412',
        '8XN' => 'E02004413',
        '8XP' => 'E02004413',
        '8XQ' => 'E02004412',
        '8XR' => 'E02004412',
        '8XS' => 'E02004412',
        '8XT' => 'E02004412',
        '8XU' => 'E02004412',
        '8XW' => 'E02004412',
        '8XY' => 'E02004412',
        '8XZ' => 'E02004412',
        '8YA' => 'E02004412',
        '8YB' => 'E02004412',
        '8YD' => 'E02004412',
        '8YE' => 'E02004412',
        '8YF' => 'E02004412',
        '8YG' => 'E02004412',
        '8YH' => 'E02004412',
        '8YJ' => 'E02004412',
        '8YL' => 'E02004412',
        '8YN' => 'E02004412',
        '8YP' => 'E02004412',
        '8YQ' => 'E02004412',
        '8YR' => 'E02004412',
        '8YS' => 'E02004412',
        '8YT' => 'E02004412',
        '8YU' => 'E02004412',
        '8YW' => 'E02004412',
        '8YX' => 'E02004412',
        '8YY' => 'E02004412',
        '8YZ' => 'E02004412',
        '8ZA' => 'E02004412',
        '8ZB' => 'E02004412',
        '8ZD' => 'E02004412',
        '8ZE' => 'E02004412',
        '8ZF' => 'E02004412',
        '8ZG' => 'E02004412',
        '8ZH' => 'E02004412',
        '8ZJ' => 'E02004412',
        '8ZL' => 'E02004412',
        '8ZN' => 'E02004412',
        '8ZP' => 'E02004412',
        '8ZQ' => 'E02004412',
        '8ZR' => 'E02004412',
        '8ZS' => 'E02004412',
        '8ZT' => 'E02004412',
        '8ZU' => 'E02004412',
        '8ZW' => 'E02004412',
        '8ZX' => 'E02004412',
        '8ZY' => 'E02004412',
        '8ZZ' => 'E02004412',
        '9AA' => 'E02004413',
        '9AB' => 'E02004413',
        '9AD' => 'E02004413',
        '9AE' => 'E02004413',
        '9AG' => 'E02004413',
        '9AH' => 'E02004413',
        '9AJ' => 'E02004413',
        '9AL' => 'E02004413',
        '9AN' => 'E02004413',
        '9AP' => 'E02004413',
        '9AQ' => 'E02004413',
        '9AR' => 'E02004413',
        '9AS' => 'E02004413',
        '9AT' => 'E02004413',
        '9AU' => 'E02004413',
        '9AW' => 'E02004413',
        '9AX' => 'E02004416',
        '9AY' => 'E02004416',
        '9AZ' => 'E02004416',
        '9BA' => 'E02004416',
        '9BB' => 'E02004416',
        '9BD' => 'E02004416',
        '9BE' => 'E02004416',
        '9BF' => 'E02004413',
        '9BG' => 'E02004416',
        '9BH' => 'E02004413',
        '9BL' => 'E02004413',
        '9BN' => 'E02004413',
        '9BP' => 'E02004413',
        '9BQ' => 'E02004412',
        '9BS' => 'E02004413',
        '9BT' => 'E02004413',
        '9BU' => 'E02004413',
        '9BW' => 'E02004413',
        '9BX' => 'E02004413',
        '9BY' => 'E02004413',
        '9BZ' => 'E02004413',
        '9DA' => 'E02004413',
        '9DB' => 'E02004413',
        '9DD' => 'E02004413',
        '9DE' => 'E02004413',
        '9DG' => 'E02004413',
        '9DH' => 'E02004413',
        '9DJ' => 'E02004413',
        '9DL' => 'E02004413',
        '9DN' => 'E02004413',
        '9DP' => 'E02004413',
        '9DR' => 'E02004413',
        '9DS' => 'E02004413',
        '9DT' => 'E02004413',
        '9DU' => 'E02004413',
        '9DX' => 'E02004416',
        '9DY' => 'E02004416',
        '9DZ' => 'E02004413',
        '9EA' => 'E02004413',
        '9EB' => 'E02004413',
        '9ED' => 'E02004413',
        '9EE' => 'E02004413',
        '9EG' => 'E02004413',
        '9EH' => 'E02004413',
        '9EJ' => 'E02004413',
        '9EL' => 'E02004413',
        '9EN' => 'E02004413',
        '9EP' => 'E02004413',
        '9ER' => 'E02004413',
        '9ES' => 'E02004413',
        '9ET' => 'E02004413',
        '9EU' => 'E02004413',
        '9EX' => 'E02004413',
        '9EY' => 'E02004413',
        '9HA' => 'E02004413',
        '9HB' => 'E02004416',
        '9HD' => 'E02004416',
        '9HE' => 'E02004416',
        '9HF' => 'E02004416',
        '9HG' => 'E02004413',
        '9HH' => 'E02004413',
        '9HJ' => 'E02004413',
        '9HL' => 'E02004420',
        '9HN' => 'E02004413',
        '9HP' => 'E02004413',
        '9HQ' => 'E02004413',
        '9HT' => 'E02004413',
        '9HU' => 'E02004413',
        '9HX' => 'E02004413',
        '9HZ' => 'E02004412',
        '9JA' => 'E02004416',
        '9JB' => 'E02004416',
        '9JD' => 'E02004416',
        '9JE' => 'E02004394',
        '9JG' => 'E02004394',
        '9JH' => 'E02004394',
        '9JJ' => 'E02004394',
        '9JL' => 'E02004394',
        '9JN' => 'E02004394',
        '9JP' => 'E02004394',
        '9JR' => 'E02004394',
        '9JS' => 'E02004394',
        '9JT' => 'E02004394',
        '9JU' => 'E02004394',
        '9JX' => 'E02004394',
        '9LA' => 'E02004394',
        '9LB' => 'E02004394',
        '9LD' => 'E02004394',
        '9LE' => 'E02004394',
        '9LF' => 'E02004394',
        '9LG' => 'E02004394',
        '9LH' => 'E02004394',
        '9LJ' => 'E02004394',
        '9LL' => 'E02004394',
        '9LN' => 'E02004394',
        '9LP' => 'E02004416',
        '9LQ' => 'E02004394',
        '9LR' => 'E02004416',
        '9LS' => 'E02004416',
        '9LT' => 'E02004416',
        '9LU' => 'E02004416',
        '9LW' => 'E02004394',
        '9LX' => 'E02004394',
        '9LY' => 'E02004394',
        '9NA' => 'E02004416',
        '9NB' => 'E02004394',
        '9ND' => 'E02004394',
        '9NE' => 'E02004394',
        '9NG' => 'E02004394',
        '9NH' => 'E02004394',
        '9NJ' => 'E02004394',
        '9NL' => 'E02004394',
        '9NN' => 'E02004394',
        '9NP' => 'E02004394',
        '9NR' => 'E02004416',
        '9NS' => 'E02004394',
        '9NT' => 'E02004416',
        '9NU' => 'E02004416',
        '9NX' => 'E02004416',
        '9PA' => 'E02004416',
        '9PB' => 'E02004416',
        '9PD' => 'E02004416',
        '9PE' => 'E02004416',
        '9PF' => 'E02004416',
        '9PH' => 'E02004416',
        '9PJ' => 'E02004416',
        '9PL' => 'E02004416',
        '9PN' => 'E02004416',
        '9PP' => 'E02004416',
        '9PQ' => 'E02004413',
        '9PR' => 'E02004416',
        '9PS' => 'E02004416',
        '9PT' => 'E02004416',
        '9PU' => 'E02004416',
        '9PW' => 'E02004416',
        '9PX' => 'E02004416',
        '9QA' => 'E02004416',
        '9QB' => 'E02004416',
        '9QD' => 'E02004416',
        '9QE' => 'E02004416',
        '9QF' => 'E02004412',
        '9QG' => 'E02004416',
        '9QH' => 'E02004416',
        '9QJ' => 'E02004416',
        '9QL' => 'E02004416',
        '9QN' => 'E02004416',
        '9QP' => 'E02004416',
        '9QR' => 'E02004416',
        '9QS' => 'E02004416',
        '9QT' => 'E02004416',
        '9QU' => 'E02004416',
        '9QW' => 'E02004416',
        '9QX' => 'E02004416',
        '9QY' => 'E02004416',
        '9QZ' => 'E02004416',
        '9RA' => 'E02004416',
        '9RB' => 'E02004416',
        '9RD' => 'E02004416',
        '9RE' => 'E02004416',
        '9RF' => 'E02004416',
        '9RG' => 'E02004416',
        '9RH' => 'E02004416',
        '9RJ' => 'E02004416',
        '9RL' => 'E02004416',
        '9RQ' => 'E02004416',
        '9UN' => 'E02004412',
        '9WA' => 'E02004412',
        '9WB' => 'E02004412',
        '9WD' => 'E02004412',
        '9WE' => 'E02004416',
        '9WQ' => 'E02004412',
        '9WW' => 'E02004412',
        '9WX' => 'E02004412',
        '9WY' => 'E02004412',
        '9WZ' => 'E02004412',
        '9ZB' => 'E02004412',
        '9ZD' => 'E02004416',
        '9ZE' => 'E02004412',
        '9ZF' => 'E02004412',
        '9ZG' => 'E02004412',
        '9ZH' => 'E02004416',
        '9ZJ' => 'E02004412',
        '9ZL' => 'E02004412',
        '9ZN' => 'E02004416',
        '9ZP' => 'E02004412',
        '9ZQ' => 'E02004416',
        '9ZR' => 'E02004412',
        '9ZS' => 'E02004412',
        '9ZT' => 'E02004412',
        '9ZU' => 'E02004412',
        '9ZW' => 'E02004416',
        '9ZX' => 'E02004416',
        '9ZY' => 'E02004412',
        '9ZZ' => 'E02004416',
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
