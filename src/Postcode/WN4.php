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
final class WN4
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02001318',
        '0AB' => 'E02001294',
        '0AD' => 'E02001408',
        '0AE' => 'E02001318',
        '0AF' => 'E02001318',
        '0AG' => 'E02001318',
        '0AH' => 'E02001318',
        '0AJ' => 'E02001318',
        '0AR' => 'E02001318',
        '0AS' => 'E02001318',
        '0AT' => 'E02001318',
        '0AU' => 'E02001318',
        '0AX' => 'E02001318',
        '0AY' => 'E02001318',
        '0AZ' => 'E02001318',
        '0BA' => 'E02001318',
        '0BB' => 'E02001318',
        '0BD' => 'E02001318',
        '0BE' => 'E02001318',
        '0BG' => 'E02001318',
        '0BH' => 'E02001318',
        '0BL' => 'E02001318',
        '0BN' => 'E02001318',
        '0BP' => 'E02001318',
        '0BQ' => 'E02001318',
        '0BS' => 'E02001318',
        '0BT' => 'E02001318',
        '0BU' => 'E02001318',
        '0BW' => 'E02001318',
        '0BX' => 'E02001318',
        '0BY' => 'E02001318',
        '0BZ' => 'E02001318',
        '0DA' => 'E02001318',
        '0DB' => 'E02001318',
        '0DD' => 'E02001318',
        '0DE' => 'E02001318',
        '0DF' => 'E02001318',
        '0DG' => 'E02001318',
        '0DH' => 'E02001318',
        '0DJ' => 'E02001318',
        '0DL' => 'E02001318',
        '0DN' => 'E02001318',
        '0DP' => 'E02001318',
        '0DQ' => 'E02001318',
        '0DR' => 'E02001318',
        '0DS' => 'E02001318',
        '0DT' => 'E02001318',
        '0DU' => 'E02001318',
        '0DW' => 'E02001318',
        '0DX' => 'E02001318',
        '0DY' => 'E02001318',
        '0DZ' => 'E02001318',
        '0EA' => 'E02001318',
        '0EB' => 'E02001318',
        '0ED' => 'E02001318',
        '0EE' => 'E02001318',
        '0EF' => 'E02001318',
        '0EG' => 'E02001318',
        '0EH' => 'E02001318',
        '0EJ' => 'E02001318',
        '0EL' => 'E02001318',
        '0EP' => 'E02001318',
        '0EQ' => 'E02001318',
        '0ER' => 'E02001318',
        '0ES' => 'E02001318',
        '0ET' => 'E02001318',
        '0FA' => 'E02001304',
        '0FB' => 'E02001304',
        '0FD' => 'E02001304',
        '0FE' => 'E02001294',
        '0FF' => 'E02001294',
        '0FG' => 'E02001294',
        '0FH' => 'E02001294',
        '0JA' => 'E02001318',
        '0JH' => 'E02001307',
        '0JJ' => 'E02001304',
        '0JP' => 'E02001318',
        '0JR' => 'E02001318',
        '0JS' => 'E02001318',
        '0JT' => 'E02001318',
        '0JU' => 'E02001318',
        '0JX' => 'E02001318',
        '0JY' => 'E02001318',
        '0JZ' => 'E02001318',
        '0LA' => 'E02001318',
        '0LB' => 'E02001318',
        '0LD' => 'E02001318',
        '0LH' => 'E02001318',
        '0LJ' => 'E02001318',
        '0LL' => 'E02001318',
        '0LN' => 'E02001318',
        '0LP' => 'E02001318',
        '0LR' => 'E02001318',
        '0LS' => 'E02001318',
        '0LT' => 'E02001318',
        '0LU' => 'E02001318',
        '0LW' => 'E02001318',
        '0LX' => 'E02001318',
        '0LY' => 'E02001318',
        '0LZ' => 'E02001304',
        '0NA' => 'E02001304',
        '0NB' => 'E02001304',
        '0ND' => 'E02001304',
        '0NF' => 'E02001304',
        '0NG' => 'E02001304',
        '0NH' => 'E02001304',
        '0NJ' => 'E02001304',
        '0NP' => 'E02001304',
        '0NQ' => 'E02001304',
        '0NR' => 'E02001304',
        '0PA' => 'E02001408',
        '0PW' => 'E02001408',
        '0PX' => 'E02001408',
        '0PY' => 'E02001408',
        '0PZ' => 'E02001408',
        '0QA' => 'E02001408',
        '0QB' => 'E02001408',
        '0QD' => 'E02001408',
        '0QE' => 'E02001408',
        '0QF' => 'E02001408',
        '0QG' => 'E02001408',
        '0QJ' => 'E02001408',
        '0QL' => 'E02001408',
        '0QN' => 'E02001408',
        '0QP' => 'E02001408',
        '0QR' => 'E02001408',
        '0QS' => 'E02001408',
        '0QT' => 'E02001408',
        '0QU' => 'E02001408',
        '0QW' => 'E02001408',
        '0QX' => 'E02001408',
        '0QY' => 'E02001408',
        '0QZ' => 'E02001408',
        '0RB' => 'E02001408',
        '0RD' => 'E02001408',
        '0RE' => 'E02001408',
        '0RF' => 'E02001408',
        '0RG' => 'E02001408',
        '0RH' => 'E02001408',
        '0RJ' => 'E02001408',
        '0RL' => 'E02001408',
        '0RN' => 'E02001408',
        '0RP' => 'E02001408',
        '0RQ' => 'E02001408',
        '0RR' => 'E02001408',
        '0RS' => 'E02001408',
        '0RT' => 'E02001408',
        '0RU' => 'E02001408',
        '0RW' => 'E02001408',
        '0RX' => 'E02001408',
        '0RY' => 'E02001408',
        '0RZ' => 'E02001408',
        '0SA' => 'E02001408',
        '0SB' => 'E02001408',
        '0SD' => 'E02001408',
        '0SE' => 'E02001408',
        '0SF' => 'E02001408',
        '0SG' => 'E02001408',
        '0SH' => 'E02001408',
        '0SJ' => 'E02001408',
        '0SL' => 'E02001408',
        '0SN' => 'E02001408',
        '0SP' => 'E02001408',
        '0SQ' => 'E02001408',
        '0SR' => 'E02001408',
        '0SS' => 'E02001408',
        '0ST' => 'E02001408',
        '0SU' => 'E02001408',
        '0SW' => 'E02001408',
        '0SX' => 'E02001318',
        '0SY' => 'E02001408',
        '0SZ' => 'E02001408',
        '0TA' => 'E02001408',
        '0TB' => 'E02001408',
        '0TD' => 'E02001408',
        '0TF' => 'E02001408',
        '0TT' => 'E02001408',
        '0TU' => 'E02001408',
        '0TW' => 'E02001294',
        '0TX' => 'E02001408',
        '0TY' => 'E02001408',
        '0TZ' => 'E02001408',
        '0UA' => 'E02001408',
        '0UB' => 'E02001408',
        '0UD' => 'E02001408',
        '0UE' => 'E02001408',
        '0UF' => 'E02001408',
        '0UG' => 'E02001408',
        '0UH' => 'E02001408',
        '0UJ' => 'E02001408',
        '0UL' => 'E02001408',
        '0UN' => 'E02001408',
        '0UQ' => 'E02001408',
        '0UT' => 'E02001408',
        '0UU' => 'E02001408',
        '0WA' => 'E02001294',
        '0WB' => 'E02001294',
        '0WT' => 'E02001294',
        '0WU' => 'E02001294',
        '0WW' => 'E02001294',
        '0WX' => 'E02001294',
        '0WY' => 'E02001294',
        '0WZ' => 'E02001294',
        '0XA' => 'E02001408',
        '0XB' => 'E02001294',
        '0XD' => 'E02001408',
        '0XE' => 'E02001294',
        '0XF' => 'E02001294',
        '0XG' => 'E02001294',
        '0XH' => 'E02001408',
        '0XJ' => 'E02001408',
        '0XL' => 'E02001408',
        '0XN' => 'E02001408',
        '0XP' => 'E02001408',
        '0XQ' => 'E02001408',
        '0XR' => 'E02001408',
        '0XS' => 'E02001408',
        '0XU' => 'E02001408',
        '0YA' => 'E02001408',
        '0YB' => 'E02001408',
        '0YD' => 'E02001408',
        '0YE' => 'E02001408',
        '0YF' => 'E02001408',
        '0YR' => 'E02001408',
        '0YS' => 'E02001408',
        '0YT' => 'E02001408',
        '0YU' => 'E02001408',
        '0YX' => 'E02001408',
        '8AA' => 'E02001322',
        '8AB' => 'E02001321',
        '8AD' => 'E02001321',
        '8AE' => 'E02001321',
        '8AH' => 'E02001321',
        '8AJ' => 'E02001321',
        '8AL' => 'E02001318',
        '8AN' => 'E02001318',
        '8AP' => 'E02001318',
        '8AR' => 'E02001318',
        '8AS' => 'E02001318',
        '8AT' => 'E02001318',
        '8AU' => 'E02001318',
        '8AW' => 'E02001318',
        '8AX' => 'E02001318',
        '8AY' => 'E02001318',
        '8AZ' => 'E02001318',
        '8BA' => 'E02001318',
        '8BB' => 'E02001318',
        '8BD' => 'E02001318',
        '8BE' => 'E02001318',
        '8BF' => 'E02001294',
        '8BG' => 'E02001318',
        '8BH' => 'E02001318',
        '8BJ' => 'E02001318',
        '8BN' => 'E02001318',
        '8BP' => 'E02001318',
        '8BQ' => 'E02001318',
        '8BS' => 'E02001318',
        '8BT' => 'E02001318',
        '8BU' => 'E02001318',
        '8BW' => 'E02001318',
        '8BX' => 'E02001318',
        '8BY' => 'E02001318',
        '8BZ' => 'E02001318',
        '8DA' => 'E02001318',
        '8DB' => 'E02001318',
        '8DD' => 'E02001318',
        '8DE' => 'E02001318',
        '8DF' => 'E02001318',
        '8DG' => 'E02001318',
        '8DH' => 'E02001318',
        '8DJ' => 'E02001294',
        '8DL' => 'E02001318',
        '8DN' => 'E02001318',
        '8DP' => 'E02001318',
        '8DQ' => 'E02001318',
        '8DT' => 'E02001318',
        '8DU' => 'E02001318',
        '8DW' => 'E02001318',
        '8DY' => 'E02001318',
        '8DZ' => 'E02001318',
        '8EA' => 'E02001318',
        '8EB' => 'E02001318',
        '8ED' => 'E02001318',
        '8EE' => 'E02001318',
        '8EF' => 'E02001318',
        '8EG' => 'E02001318',
        '8EQ' => 'E02001318',
        '8FA' => 'E02001294',
        '8FB' => 'E02001294',
        '8FD' => 'E02001321',
        '8FE' => 'E02001294',
        '8FF' => 'E02001321',
        '8FG' => 'E02001321',
        '8FH' => 'E02001318',
        '8FJ' => 'E02001321',
        '8FL' => 'E02001294',
        '8FN' => 'E02001294',
        '8FP' => 'E02001321',
        '8FQ' => 'E02001294',
        '8FR' => 'E02001321',
        '8FS' => 'E02001321',
        '8FT' => 'E02001318',
        '8LA' => 'E02001322',
        '8LB' => 'E02001322',
        '8LD' => 'E02001322',
        '8LE' => 'E02001322',
        '8LG' => 'E02001318',
        '8LH' => 'E02001321',
        '8LJ' => 'E02001318',
        '8LL' => 'E02001318',
        '8LN' => 'E02001318',
        '8LT' => 'E02001318',
        '8LU' => 'E02001318',
        '8LW' => 'E02001318',
        '8LX' => 'E02001318',
        '8LY' => 'E02001318',
        '8PA' => 'E02001322',
        '8PB' => 'E02001322',
        '8PD' => 'E02001322',
        '8PE' => 'E02001322',
        '8PF' => 'E02001321',
        '8PG' => 'E02001321',
        '8PH' => 'E02001321',
        '8PJ' => 'E02001322',
        '8PL' => 'E02001322',
        '8PN' => 'E02001322',
        '8PP' => 'E02001321',
        '8PQ' => 'E02001322',
        '8PR' => 'E02001322',
        '8PS' => 'E02001321',
        '8PT' => 'E02001321',
        '8QA' => 'E02001321',
        '8QB' => 'E02001321',
        '8QD' => 'E02001321',
        '8QN' => 'E02001321',
        '8QP' => 'E02001321',
        '8QQ' => 'E02001321',
        '8QR' => 'E02001321',
        '8QS' => 'E02001321',
        '8QT' => 'E02001318',
        '8QU' => 'E02001321',
        '8QW' => 'E02001321',
        '8QX' => 'E02001322',
        '8QY' => 'E02001321',
        '8QZ' => 'E02001321',
        '8RH' => 'E02001321',
        '8RP' => 'E02001321',
        '8RQ' => 'E02001321',
        '8RR' => 'E02001321',
        '8RS' => 'E02001321',
        '8RT' => 'E02001321',
        '8RU' => 'E02001321',
        '8RW' => 'E02001321',
        '8RX' => 'E02001321',
        '8RY' => 'E02001321',
        '8RZ' => 'E02001321',
        '8SA' => 'E02001321',
        '8SB' => 'E02001321',
        '8SD' => 'E02001321',
        '8SE' => 'E02001321',
        '8SF' => 'E02001321',
        '8SG' => 'E02001321',
        '8SH' => 'E02001321',
        '8SJ' => 'E02001321',
        '8SL' => 'E02001321',
        '8SN' => 'E02001321',
        '8SP' => 'E02001321',
        '8SQ' => 'E02001321',
        '8SR' => 'E02001321',
        '8SS' => 'E02001318',
        '8ST' => 'E02001321',
        '8SU' => 'E02001321',
        '8SW' => 'E02001321',
        '8SX' => 'E02001321',
        '8SY' => 'E02001321',
        '8SZ' => 'E02001321',
        '8TA' => 'E02001321',
        '8TB' => 'E02001321',
        '8TD' => 'E02001321',
        '8TE' => 'E02001321',
        '8TF' => 'E02001321',
        '8TG' => 'E02001321',
        '8TH' => 'E02001321',
        '8TJ' => 'E02001321',
        '8TL' => 'E02001321',
        '8TN' => 'E02001321',
        '8TP' => 'E02001321',
        '8TQ' => 'E02001321',
        '8TR' => 'E02001321',
        '8TS' => 'E02001321',
        '8TT' => 'E02001321',
        '8TU' => 'E02001321',
        '8TW' => 'E02001321',
        '8TX' => 'E02001321',
        '8TY' => 'E02001321',
        '8TZ' => 'E02001321',
        '8UA' => 'E02001321',
        '8UB' => 'E02001321',
        '8UD' => 'E02001321',
        '8UE' => 'E02001321',
        '8UF' => 'E02001321',
        '8UG' => 'E02001321',
        '8UN' => 'E02001321',
        '8UQ' => 'E02001321',
        '8UW' => 'E02001321',
        '8WA' => 'E02001321',
        '8WB' => 'E02001321',
        '8WD' => 'E02001321',
        '8WS' => 'E02001321',
        '8WT' => 'E02001321',
        '8WW' => 'E02001321',
        '8XA' => 'E02001321',
        '8XB' => 'E02001321',
        '8XD' => 'E02001321',
        '8XE' => 'E02001321',
        '8XF' => 'E02001321',
        '8XG' => 'E02001321',
        '8XH' => 'E02001321',
        '8XJ' => 'E02001321',
        '8XL' => 'E02001321',
        '8XN' => 'E02001321',
        '8XP' => 'E02001321',
        '8XQ' => 'E02001321',
        '8XR' => 'E02001321',
        '8XS' => 'E02001321',
        '8XT' => 'E02001321',
        '8XU' => 'E02001321',
        '8XW' => 'E02001321',
        '8XX' => 'E02001321',
        '8XY' => 'E02001321',
        '8XZ' => 'E02001321',
        '8YA' => 'E02001321',
        '8YB' => 'E02001321',
        '8YE' => 'E02001321',
        '8YF' => 'E02001321',
        '8YG' => 'E02001321',
        '8YJ' => 'E02001294',
        '8YL' => 'E02001294',
        '8YN' => 'E02001294',
        '8YP' => 'E02001294',
        '8YQ' => 'E02001294',
        '8YW' => 'E02001294',
        '8ZG' => 'E02001321',
        '8ZH' => 'E02001321',
        '8ZJ' => 'E02001321',
        '8ZL' => 'E02001321',
        '8ZN' => 'E02001321',
        '8ZP' => 'E02001321',
        '8ZQ' => 'E02001321',
        '8ZR' => 'E02001321',
        '8ZS' => 'E02001321',
        '8ZT' => 'E02001321',
        '9AA' => 'E02001322',
        '9AB' => 'E02001322',
        '9AD' => 'E02001322',
        '9AE' => 'E02001322',
        '9AF' => 'E02001322',
        '9AG' => 'E02001322',
        '9AH' => 'E02001322',
        '9AJ' => 'E02001322',
        '9AL' => 'E02001322',
        '9AN' => 'E02001322',
        '9AP' => 'E02001322',
        '9AQ' => 'E02001322',
        '9AR' => 'E02001322',
        '9AS' => 'E02001322',
        '9AT' => 'E02001322',
        '9AU' => 'E02001322',
        '9AW' => 'E02001322',
        '9AX' => 'E02001322',
        '9AY' => 'E02001322',
        '9AZ' => 'E02001322',
        '9BA' => 'E02001322',
        '9BB' => 'E02001322',
        '9BD' => 'E02001322',
        '9BE' => 'E02001322',
        '9BF' => 'E02001321',
        '9BG' => 'E02001322',
        '9BH' => 'E02001322',
        '9BJ' => 'E02001322',
        '9BL' => 'E02001322',
        '9BN' => 'E02001322',
        '9BP' => 'E02001318',
        '9BQ' => 'E02001322',
        '9BT' => 'E02001318',
        '9BW' => 'E02001322',
        '9DA' => 'E02001322',
        '9DB' => 'E02001322',
        '9DD' => 'E02001322',
        '9DE' => 'E02001322',
        '9DF' => 'E02001322',
        '9DG' => 'E02001322',
        '9DH' => 'E02001322',
        '9DJ' => 'E02001322',
        '9DL' => 'E02001322',
        '9DN' => 'E02001318',
        '9DP' => 'E02001322',
        '9DQ' => 'E02001322',
        '9DR' => 'E02001322',
        '9DS' => 'E02001322',
        '9DT' => 'E02001322',
        '9DU' => 'E02001321',
        '9DW' => 'E02001318',
        '9DX' => 'E02001322',
        '9DY' => 'E02001322',
        '9DZ' => 'E02001322',
        '9EA' => 'E02001322',
        '9EB' => 'E02001322',
        '9ED' => 'E02001322',
        '9EE' => 'E02001322',
        '9EF' => 'E02001321',
        '9EG' => 'E02001321',
        '9EH' => 'E02001321',
        '9EJ' => 'E02001322',
        '9EL' => 'E02001322',
        '9EN' => 'E02001322',
        '9EP' => 'E02001321',
        '9EQ' => 'E02001321',
        '9ER' => 'E02001321',
        '9ES' => 'E02001321',
        '9ET' => 'E02001321',
        '9EU' => 'E02001321',
        '9EW' => 'E02001321',
        '9EX' => 'E02001321',
        '9EY' => 'E02001321',
        '9EZ' => 'E02001321',
        '9FA' => 'E02001294',
        '9FB' => 'E02001322',
        '9FD' => 'E02001294',
        '9FE' => 'E02001322',
        '9FF' => 'E02001294',
        '9FG' => 'E02001322',
        '9FH' => 'E02001322',
        '9FJ' => 'E02001322',
        '9FL' => 'E02001321',
        '9FN' => 'E02001322',
        '9FP' => 'E02001294',
        '9FQ' => 'E02001294',
        '9FR' => 'E02001294',
        '9FS' => 'E02001321',
        '9FT' => 'E02001294',
        '9FU' => 'E02001294',
        '9FW' => 'E02001294',
        '9FX' => 'E02001294',
        '9FY' => 'E02001294',
        '9FZ' => 'E02001294',
        '9GA' => 'E02001294',
        '9GB' => 'E02001294',
        '9GD' => 'E02001318',
        '9GZ' => 'E02001294',
        '9HE' => 'E02001322',
        '9HH' => 'E02001321',
        '9HJ' => 'E02001321',
        '9HL' => 'E02001321',
        '9HN' => 'E02001322',
        '9HP' => 'E02001321',
        '9HR' => 'E02001321',
        '9HS' => 'E02001321',
        '9HT' => 'E02001321',
        '9HU' => 'E02001321',
        '9HW' => 'E02001321',
        '9HX' => 'E02001321',
        '9HY' => 'E02001321',
        '9HZ' => 'E02001321',
        '9JA' => 'E02001321',
        '9JB' => 'E02001321',
        '9JD' => 'E02001321',
        '9JE' => 'E02001321',
        '9JF' => 'E02001321',
        '9JG' => 'E02001321',
        '9JL' => 'E02001321',
        '9JN' => 'E02001321',
        '9JP' => 'E02001321',
        '9JR' => 'E02001321',
        '9JW' => 'E02001321',
        '9JX' => 'E02001322',
        '9JY' => 'E02001322',
        '9JZ' => 'E02001322',
        '9LA' => 'E02001322',
        '9LB' => 'E02001322',
        '9LD' => 'E02001322',
        '9LE' => 'E02001322',
        '9LF' => 'E02001322',
        '9LG' => 'E02001322',
        '9LH' => 'E02001322',
        '9LJ' => 'E02001322',
        '9LL' => 'E02001322',
        '9LN' => 'E02001322',
        '9LP' => 'E02001322',
        '9LQ' => 'E02001322',
        '9LR' => 'E02001322',
        '9LS' => 'E02001322',
        '9LT' => 'E02001322',
        '9LU' => 'E02001322',
        '9LW' => 'E02001322',
        '9LX' => 'E02001322',
        '9LY' => 'E02001322',
        '9LZ' => 'E02001322',
        '9NA' => 'E02001322',
        '9NB' => 'E02001322',
        '9ND' => 'E02001322',
        '9NE' => 'E02001322',
        '9NF' => 'E02001322',
        '9NG' => 'E02001322',
        '9NH' => 'E02001322',
        '9NJ' => 'E02001322',
        '9NL' => 'E02001322',
        '9NN' => 'E02001322',
        '9NP' => 'E02001322',
        '9NQ' => 'E02001322',
        '9NR' => 'E02001322',
        '9NS' => 'E02001322',
        '9NT' => 'E02001322',
        '9NU' => 'E02001322',
        '9NX' => 'E02001322',
        '9PA' => 'E02001322',
        '9PB' => 'E02001322',
        '9PD' => 'E02001322',
        '9PE' => 'E02001322',
        '9PF' => 'E02001322',
        '9PG' => 'E02001322',
        '9PH' => 'E02001410',
        '9PJ' => 'E02001322',
        '9PL' => 'E02001322',
        '9PN' => 'E02001322',
        '9PP' => 'E02001322',
        '9PQ' => 'E02001322',
        '9PR' => 'E02001322',
        '9PS' => 'E02001321',
        '9PT' => 'E02001322',
        '9PU' => 'E02001322',
        '9PW' => 'E02001322',
        '9PX' => 'E02001322',
        '9PY' => 'E02001322',
        '9PZ' => 'E02001322',
        '9QD' => 'E02001322',
        '9QG' => 'E02001322',
        '9QH' => 'E02001322',
        '9QJ' => 'E02001322',
        '9QL' => 'E02001322',
        '9QN' => 'E02001322',
        '9QP' => 'E02001322',
        '9QQ' => 'E02001322',
        '9QR' => 'E02001322',
        '9QS' => 'E02001322',
        '9QT' => 'E02001322',
        '9QU' => 'E02001322',
        '9QW' => 'E02001322',
        '9QX' => 'E02001322',
        '9QY' => 'E02001322',
        '9QZ' => 'E02001322',
        '9RA' => 'E02001322',
        '9RB' => 'E02001322',
        '9RD' => 'E02001322',
        '9RE' => 'E02001322',
        '9RF' => 'E02001322',
        '9RG' => 'E02001322',
        '9RH' => 'E02001322',
        '9RJ' => 'E02001322',
        '9RL' => 'E02001322',
        '9RN' => 'E02001322',
        '9RP' => 'E02001322',
        '9RQ' => 'E02001322',
        '9RR' => 'E02001322',
        '9RS' => 'E02001322',
        '9RT' => 'E02001322',
        '9RU' => 'E02001322',
        '9RW' => 'E02001322',
        '9RX' => 'E02001318',
        '9RY' => 'E02001322',
        '9RZ' => 'E02001322',
        '9SA' => 'E02001322',
        '9SB' => 'E02001322',
        '9SD' => 'E02001322',
        '9SE' => 'E02001322',
        '9SF' => 'E02001318',
        '9SG' => 'E02001322',
        '9SH' => 'E02001318',
        '9SJ' => 'E02001318',
        '9SL' => 'E02001318',
        '9SN' => 'E02001318',
        '9SP' => 'E02001318',
        '9SQ' => 'E02001322',
        '9SR' => 'E02001318',
        '9SS' => 'E02001318',
        '9ST' => 'E02001318',
        '9SU' => 'E02001318',
        '9SW' => 'E02001318',
        '9SX' => 'E02001318',
        '9SY' => 'E02001318',
        '9SZ' => 'E02001318',
        '9TA' => 'E02001318',
        '9TB' => 'E02001318',
        '9TD' => 'E02001318',
        '9TE' => 'E02001318',
        '9TP' => 'E02001322',
        '9TR' => 'E02001322',
        '9TS' => 'E02001322',
        '9TT' => 'E02001322',
        '9TU' => 'E02001322',
        '9TW' => 'E02001322',
        '9TX' => 'E02001322',
        '9TY' => 'E02001322',
        '9TZ' => 'E02001322',
        '9UA' => 'E02001322',
        '9UB' => 'E02001322',
        '9UD' => 'E02001322',
        '9UE' => 'E02001322',
        '9UF' => 'E02001322',
        '9UG' => 'E02001322',
        '9UH' => 'E02001318',
        '9UJ' => 'E02001318',
        '9UL' => 'E02001318',
        '9UN' => 'E02001318',
        '9UP' => 'E02001318',
        '9UQ' => 'E02001318',
        '9UR' => 'E02001318',
        '9US' => 'E02001318',
        '9UT' => 'E02001318',
        '9UU' => 'E02001322',
        '9UW' => 'E02001318',
        '9UX' => 'E02001322',
        '9UY' => 'E02001318',
        '9UZ' => 'E02001318',
        '9WA' => 'E02001318',
        '9WS' => 'E02001294',
        '9WT' => 'E02001294',
        '9WU' => 'E02001318',
        '9WW' => 'E02001294',
        '9WX' => 'E02001294',
        '9WY' => 'E02001318',
        '9WZ' => 'E02001318',
        '9XA' => 'E02001318',
        '9XB' => 'E02001318',
        '9XD' => 'E02001318',
        '9XE' => 'E02001318',
        '9XF' => 'E02001318',
        '9XG' => 'E02001318',
        '9XH' => 'E02001318',
        '9XJ' => 'E02001294',
        '9XL' => 'E02001294',
        '9XQ' => 'E02001318',
        '9YZ' => 'E02001294',
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
